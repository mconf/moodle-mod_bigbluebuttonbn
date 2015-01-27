<?php

/**
 * Definition of log events
 *
 * @package   mod_bigbluebuttonbn
 * @author    Fred Dixon  (ffdixon [at] blindsidenetworks [dt] com)
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 * @copyright 2010-2014 Blindside Networks Inc.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */

defined('MOODLE_INTERNAL') || die();

global $DB;

$logs = array(
    array('module'=>'bigbluebuttonbn', 'action'=>'add', 'mtable'=>'bigbluebuttonbn', 'field'=>'name'),
    array('module'=>'bigbluebuttonbn', 'action'=>'update', 'mtable'=>'bigbluebuttonbn', 'field'=>'name'),
    array('module'=>'bigbluebuttonbn', 'action'=>'view', 'mtable'=>'bigbluebuttonbn', 'field'=>'name'),
    array('module'=>'bigbluebuttonbn', 'action'=>'view all', 'mtable'=>'bigbluebuttonbn', 'field'=>'name')
);

