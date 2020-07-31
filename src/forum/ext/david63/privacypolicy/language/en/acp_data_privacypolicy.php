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
	'ACCEPT_ME'						=> 'Accept Privacy Policy for member',
	'ACCEPT_REMOVE'					=> 'Remove acceptance for member',
	'ACP_PRIVACY_POLICY_EXPLAIN'	=> 'Here you can select and view a user’s privacy data.',
	'ACP_PRIVACY_TITLE'				=> 'Privacy Policy Data',

	'DETAILS_FOR'					=> 'Privacy details for : %1$s',

	'INVALID_USERNAME'				=> 'Invalid username entered',

	'NO_IPS_FOUND'					=> 'No IPs found',
	'NO_USERNAME'					=> 'No Username entered',

	'POLICY_ACCEPTANCE_SET'			=> 'Privacy Policy acceptance set for %1$s',
	'POLICY_ACCEPTANCE_UNSET'		=> 'Privacy Policy acceptance unset for %1$s',

	'SELECT_USERNAME_EXPLAIN'		=> 'The user whose privacy data you wish to examine.',
	'SELECT_USERNAME'				=> 'Select username',
));
