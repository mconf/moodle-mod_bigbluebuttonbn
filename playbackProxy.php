<?php

/**
 * Local Proxy view for Big Blue Button local security, need additional configuration to 
 * work properly.
 *
 * @package   mod_bigbluebuttonbn
 * @author    Luiz Henrique Longhi Rossi  (lh.rossi [at] cognitivabrasil [dt] com [dt] br)
 * @author    Marcos Freitas Nunes  (marcos [at] cognitivabrasil [dt] com [dt] br)
 * @copyright 2017 Cognitiva Brasil Tecnologias Educacionais
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */

global $CFG;


require_once(dirname(__FILE__) . '/../../config.php');
require_once("{$CFG->libdir}/adminlib.php");
require_once(dirname(__FILE__) . '/locallib.php');


$recordId = required_param('meetingId', PARAM_ALPHANUM);
$id = optional_param('id', -1, PARAM_INT); // Course Module ID

$records = $_SESSION["MAP_MEETING_RECORD"];

$meetingId = $records[$recordId];


if ($meetingId) {

    $parts = explode('-', $meetingId);

    $courseId = $parts[1];
    $cm;
    if ($id >= 0) {
        $cm = get_coursemodule_from_id('bigbluebuttonbn', $id, 0, false, MUST_EXIST);
    }

    require_login($courseId, true, $cm);

    $PAGE->set_url($CFG->wwwroot . '/mod/bigbluebuttonbn/playbackProxy.php');
    $PAGE->set_cacheable(false);
    $PAGE->set_pagelayout('base');

    // Print the page header
    echo $OUTPUT->header();

    $address = str_replace("/bigbluebutton/", "", bigbluebuttonbn_get_cfg_server_url_default());
    $version = "/playback/presentation/0.9.0/";
    $playback = "playback.html";

    $meetingUrl = $address . $version . $playback . "?meetingId" . $recordId;

    // $proxyAddress = "/proxy".$version;
    $proxyAddress = $version;

// create a new cURL resource
    $ch = curl_init();

// set URL and other appropriate options
    curl_setopt($ch, CURLOPT_URL, $meetingUrl);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $page = $urlContent = curl_exec($ch);
// $page = file_get_contents($meetingUrl);

    $page = str_replace("href=\"", "href=\"" . 'https://vc.tjrr.jus.br/playback/presentation/0.9.0/', $page);
    $page = str_replace("src=\"", "src=\"" . 'https://vc.tjrr.jus.br/playback/presentation/0.9.0/', $page);

    echo $page;

    echo $OUTPUT->footer();
} else {
    //user don't have permission to access the meetingId parametrized (forbidden)
    print_error(get_string('view_nojoin', 'bigbluebuttonbn'));
}
?>
