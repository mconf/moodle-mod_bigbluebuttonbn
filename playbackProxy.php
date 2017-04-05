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
 * This page provides the Administration -> ... -> Theme selector UI.
 *
 * @package block_mconf_records
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

global $CFG;


require_once(dirname(__FILE__) . '/../../config.php');
require_once("{$CFG->libdir}/adminlib.php");
require_once(dirname(__FILE__).'/locallib.php');

require_login(1);

$meetingId = required_param('meetingId', PARAM_ALPHANUM);

global $MEETING_ID;
$MEETING_ID=$meetingId;

// Print the page header
$PAGE->set_url($CFG->wwwroot . '/mod/bigbluebuttonbn/playbackProxy.php');
$PAGE->set_cacheable(false);
// $PAGE->set_pagelayout('incourse');

echo $OUTPUT->header();

$address = bigbluebuttonbn_get_cfg_server_url_default();

$address = str_replace("/bigbluebutton/", "", $address);
$version = "/playback/presentation/0.9.0/";
$playback = "playback.html";

$meetingUrl = $address.$version.$playback."?meetingId".$meetingId;

	// $proxyAddress = "/proxy".$version;
$proxyAddress = $version;
$page = file_get_contents($meetingUrl);

$page = str_replace("href=\"", "href=\"".'https://vc.tjrr.jus.br/playback/presentation/0.9.0/', $page);
$page = str_replace("src=\"", "src=\"".'https://vc.tjrr.jus.br/playback/presentation/0.9.0/', $page);

echo $page;

echo $OUTPUT->footer();

?>
