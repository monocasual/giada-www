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
	'ACP_USER_UTILS'			=> 'User utilities',

	'COOKIE_POLICY'				=> 'Privacy & Cookie policy',

	'POLICY_RESET_LOG'			=> '<strong>Privacy policy acceptance reset</strong>',
	'PRIVACY_DATA'				=> 'Privacy data',
	'PRIVACY_EDIT_CREATED'		=> 'New privacy policy created',
	'PRIVACY_EDIT_UPDATED'		=> 'Privacy policy updated',
	'PRIVACY_LIST'				=> 'Privacy list',
	'PRIVACY_POLICY'			=> 'Privacy policy',
	'PRIVACY_POLICY_ADD_LOG'	=> '<strong>Privacy policy added</strong>',
	'PRIVACY_POLICY_EDIT'		=> 'Edit language data',
	'PRIVACY_POLICY_EDIT_LOG'	=> '<strong>Privacy policy edited</strong>',
	'PRIVACY_POLICY_LOG'		=> '<strong>Privacy policy settings updated</strong>',
	'PRIVACY_POLICY_MANAGE'		=> 'Privacy policy settings',
));
