<?php
/**
 * Settings for BigBlueButtonBN
 *
 * @package   mod_bigbluebuttonbn
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 * @copyright 2010-2014 Blindside Networks Inc.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add( new admin_setting_configtext( 'BigBlueButtonBNServerURL', get_string( 'bigbluebuttonbnUrl', 'bigbluebuttonbn' ), get_string( 'bbburl', 'bigbluebuttonbn' ), 'http://test-install.blindsidenetworks.com/bigbluebutton/' ) );
    $settings->add( new admin_setting_configtext( 'BigBlueButtonBNSecuritySalt', get_string( 'bigbluebuttonbnSalt', 'bigbluebuttonbn' ), get_string( 'configsecuritysalt', 'bigbluebuttonbn' ), '8cd8ef52e8e101574e400365b55e11a6' ) );
    $settings->add( new admin_setting_configcheckbox( 'BigBlueButtonBNDetectMobile', get_string( 'bigbluebuttonbnDetectMobile', 'bigbluebuttonbn' ), get_string( 'detectmobile', 'bigbluebuttonbn' ), 1) );
    $settings->add( new admin_setting_configcheckbox( 'BigBlueButtonBNForceMobile', get_string( 'bigbluebuttonbnForceMobile', 'bigbluebuttonbn' ), get_string( 'forcemobile', 'bigbluebuttonbn' ), 0) );
}

?>
