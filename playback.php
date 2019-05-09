<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * View a BigBlueButton recording with getRecordingToken authorization
 *
 * @package   mod_bigbluebuttonbn
 * @author    Alan Velasques Santos  (alan [at] cognitivabrasil [dt] com [dt] br)
 * @author    Luiz Rossi  (lh [dt] rossi [at] cognitivabrasil [dt] com [dt] br)
 * @copyright 2010-2015 Cognitiva Brasil.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */

require_once(dirname(dirname(dirname(__FILE__))) . '/config.php');
require_once(dirname(__FILE__) . '/locallib.php');

$id  = optional_param('id', 0, PARAM_INT); // bigbluebuttonbn instance ID
$recordid  = optional_param('recordID', '', PARAM_TEXT); // Record ID
$format  = optional_param('format', '', PARAM_TEXT); // Presentation format

if ($id) {
    $bigbluebuttonbn = $DB->get_record('bigbluebuttonbn', array('id' => $id), '*', MUST_EXIST);
    $course = $DB->get_record('course', array('id' => $bigbluebuttonbn->course), '*', MUST_EXIST);
    $cm = get_coursemodule_from_instance('bigbluebuttonbn', $bigbluebuttonbn->id, $course->id, false, MUST_EXIST);
} else {
    print_error(get_string('view_error_url_missing_parameters', 'bigbluebuttonbn'));
}

require_login($course, true, $cm);

$moduleversion = get_config('mod_bigbluebuttonbn', 'version');
$context = context_module::instance($cm->id);

bigbluebuttonbn_event_log(BIGBLUEBUTTON_EVENT_ACTIVITY_VIEWED, $bigbluebuttonbn, $cm);

// BigBluebuttonBN activity data.
$bbbsession['bigbluebuttonbn'] = $bigbluebuttonbn;

// User data.
$bbbsession['username'] = fullname($USER);
$bbbsession['userID'] = $USER->id;
if (isguestuser()) {
    $bbbsession['roles'] = bigbluebuttonbn_get_guest_role();
} else {
    $bbbsession['roles'] = bigbluebuttonbn_get_user_roles($context, $USER->id);
}

// User roles.
if ($bigbluebuttonbn->participants == null || $bigbluebuttonbn->participants == "" || $bigbluebuttonbn->participants == "[]") {
    // The room that is being used comes from a previous version.
    $bbbsession['moderator'] = has_capability('mod/bigbluebuttonbn:moderate', $context);
} else {
    $bbbsession['moderator'] = bigbluebuttonbn_is_moderator($context, $bigbluebuttonbn->participants, $bbbsession['userID']);
}
$bbbsession['administrator'] = has_capability('moodle/category:manage', $context);
$bbbsession['managerecordings'] = ($bbbsession['administrator'] || has_capability('mod/bigbluebuttonbn:managerecordings', $context));

// BigBlueButton server data.
$bbbsession['endpoint'] = bigbluebuttonbn_get_cfg_server_url();
$bbbsession['shared_secret'] = bigbluebuttonbn_get_cfg_shared_secret();

// Server data.
$bbbsession['modPW'] = $bigbluebuttonbn->moderatorpass;
$bbbsession['viewerPW'] = $bigbluebuttonbn->viewerpass;

// Database info related to the activity.
$bbbsession['meetingdescription'] = $bigbluebuttonbn->intro;
$bbbsession['welcome'] = $bigbluebuttonbn->welcome;
if (!isset($bbbsession['welcome']) || $bbbsession['welcome'] == '') {
    $bbbsession['welcome'] = get_string('mod_form_field_welcome_default', 'bigbluebuttonbn');
}

// $bbbsession['userlimit'] = bigbluebuttonbn_get_cfg_userlimit_editable() ? intval($bigbluebuttonbn->userlimit) : intval(bigbluebuttonbn_get_cfg_userlimit_default());
$bbbsession['voicebridge'] = ($bigbluebuttonbn->voicebridge > 0) ? 70000 + $bigbluebuttonbn->voicebridge : $bigbluebuttonbn->voicebridge;
$bbbsession['wait'] = $bigbluebuttonbn->wait;
$bbbsession['record'] = $bigbluebuttonbn->record;
if ($bigbluebuttonbn->record) {
    $bbbsession['welcome'] .= '<br><br>' . get_string('bbbrecordwarning', 'bigbluebuttonbn');
}

$bbbsession['openingtime'] = $bigbluebuttonbn->openingtime;
$bbbsession['closingtime'] = $bigbluebuttonbn->closingtime;

// Additional info related to the course.
$bbbsession['course'] = $course;
$bbbsession['coursename'] = $course->fullname;
$bbbsession['cm'] = $cm;
$bbbsession['context'] = $context;

// Metadata (origin)
$bbbsession['origin'] = "Moodle";
$bbbsession['originVersion'] = $CFG->release;
$parsedurl = parse_url($CFG->wwwroot);
$bbbsession['originServerName'] = $parsedurl['host'];
$bbbsession['originServerUrl'] = $CFG->wwwroot;
$bbbsession['originServerCommonName'] = '';
$bbbsession['originTag'] = 'moodle-mod_bigbluebuttonbn (' . $moduleversion . ')';

// Validates if the BigBlueButton server is running.
$serverversion = bigbluebuttonbn_get_server_version();
if (!isset($serverversion)) { // Server is not working.
    if ($bbbsession['administrator']) {
            print_error('view_error_unable_join', 'bigbluebuttonbn', $CFG->wwwroot . '/admin/settings.php?section=modsettingbigbluebuttonbn');
    } else if ($bbbsession['moderator']) {
            print_error('view_error_unable_join_teacher', 'bigbluebuttonbn', $CFG->wwwroot . '/course/view.php?id=' . $bigbluebuttonbn->course);
    } else {
            print_error('view_error_unable_join_student', 'bigbluebuttonbn', $CFG->wwwroot . '/course/view.php?id=' . $bigbluebuttonbn->course);
    }
} else {
    $xml = bigbluebuttonbn_wrap_xml_load_file(bigbluebuttonbn_getmeetingsurl($bbbsession['endpoint'], $bbbsession['shared_secret']));
    if (!isset($xml) || !isset($xml->returncode) || $xml->returncode == 'FAILED') { // The shared secret is wrong
        if ($bbbsession['administrator']) {
                    print_error('view_error_unable_join', 'bigbluebuttonbn', $CFG->wwwroot . '/admin/settings.php?section=modsettingbigbluebuttonbn');
        } else if ($bbbsession['moderator']) {
                    print_error('view_error_unable_join_teacher', 'bigbluebuttonbn', $CFG->wwwroot . '/course/view.php?id=' . $bigbluebuttonbn->course);
        } else {
                    print_error('view_error_unable_join_student', 'bigbluebuttonbn', $CFG->wwwroot . '/course/view.php?id=' . $bigbluebuttonbn->course);
        }
    }
}

// Mark viewed by user (if required).
$completion = new completion_info($course);
$completion->set_module_viewed($cm);

// Print the page header.
$PAGE->set_context($context);
$PAGE->set_url($CFG->wwwroot . '/mod/bigbluebuttonbn/view.php', array('id' => $cm->id));
$PAGE->set_title(format_string($bigbluebuttonbn->name));
$PAGE->set_cacheable(false);
$PAGE->set_heading($course->fullname);
$PAGE->set_pagelayout('incourse');

// Validate if the user is in a role allowed to join.
if (!has_capability('moodle/category:manage', $context) && !has_capability('mod/bigbluebuttonbn:join', $context)) {
    echo $OUTPUT->header();
    if (isguestuser()) {
        echo $OUTPUT->confirm('<p>' . get_string('view_noguests', 'bigbluebuttonbn') . '</p>' . get_string('liketologin'),
            get_login_url(), $CFG->wwwroot . '/course/view.php?id=' . $course->id);
    } else {
        echo $OUTPUT->confirm('<p>' . get_string('view_nojoin', 'bigbluebuttonbn') . '</p>' . get_string('liketologin'),
            get_login_url(), $CFG->wwwroot . '/course/view.php?id=' . $course->id);
    }

    echo $OUTPUT->footer();
    exit;
}

// Operation URLs.
$bbbsession['bigbluebuttonbnURL'] = $CFG->wwwroot . '/mod/bigbluebuttonbn/view.php?id=' . $bbbsession['cm']->id;
$bbbsession['logoutURL'] = $CFG->wwwroot . '/mod/bigbluebuttonbn/bbb_view.php?action=logout&id=' . $id . '&bn=' . $bbbsession['bigbluebuttonbn']->id;
$bbbsession['recordingReadyURL'] = $CFG->wwwroot . '/mod/bigbluebuttonbn/bbb_broker.php?action=recording_ready';
$bbbsession['joinURL'] = $CFG->wwwroot . '/mod/bigbluebuttonbn/bbb_view.php?action=join&id=' . $id . '&bigbluebuttonbn=' . $bbbsession['bigbluebuttonbn']->id;

// Pegando a URL do playback e verificando se existe mais de um, se sim pega o correto de acordo com o recordID
$records = bigbluebuttonbn_get_recordings($course->id, $bigbluebuttonbn->id);
$record = $records[$recordid];
$url = '';

foreach ($record['playbacks'] as $playback) {
    $verificameeting = explode('meetingId=', $playback['url']);
    if ($verificameeting[count($verificameeting) - 1] == $_GET['recordID']) {
        $url = $playback['url'];
        break;
    }
}

// Chamar a função que gera o token;
$token = bigbluebuttonbn_getrecordingtoken($bbbsession['endpoint'], $bbbsession['shared_secret'], $_GET['recordID'], $USER->username, $USER->lastip);

// Output starts here.
echo "<iframe src='".$url."&token=".$token."' frameborder='0' style='position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%;
border:none; margin:0; padding:0; overflow:hidden; z-index:999999;' height='100%' width='100%'></iframe>";
