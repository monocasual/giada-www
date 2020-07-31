<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

/// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_USER_UTILS'				=> 'User utilities',
	'AUTOGROUPS_TYPE_PPACCPT'		=> 'Privacy Policy accepted',

	'COOKIE_POLICY'					=> 'Privacy & Cookie policies',

	'POLICY_RESET_LOG'				=> '<strong>Privacy policy acceptance reset for all users</strong>',
	'POLICY_USER_ACCEPT_LOG'		=> '<strong>Privacy policy acceptance set for user</strong><br>»» %1$s',
	'POLICY_USER_UNSET_LOG'			=> '<strong>Privacy policy acceptance unset for user</strong><br>»» %1$s',
	'PRIVACY_DATA'					=> 'Privacy data',
	'PRIVACY_LIST'					=> 'Privacy list',
	'PRIVACY_POLICY'				=> 'Privacy policy',
	'PRIVACY_POLICY_ADD_LOG'		=> '<strong>Privacy policy added</strong><br>»» %1$s',
	'PRIVACY_POLICY_EDIT'			=> 'Policy files editor',
	'PRIVACY_POLICY_EDIT_LOG'		=> '<strong>Privacy policy edited</strong><br>»» %1$s',
	'PRIVACY_POLICY_LOG'			=> '<strong>Privacy policy settings updated</strong>',
	'PRIVACY_POLICY_MANAGE'			=> 'Privacy policy settings',

	'TAPATALK_INSTALLED'			=> 'Tapatalk detected',
	'TAPATALK_INSTALLED_EXPLAIN'	=> 'The Tapatalk extension has been detected as being installed on this board which is incompatible with the Privacy Policy extension.<br><br>This means that any Tapatalk users accessing this board will not be subject to the requirements of the Privacy Policy.',
));
