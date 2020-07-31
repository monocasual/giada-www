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
	'ACCEPT_DATE'		=> 'Policy acceptance date',

	'BIRTHDAY'			=> 'Birthday',
	'IP_ANONYMISED'		=> 'Your IP addresses have been anonymised',

	'NO_BIRTHDAY'		=> 'No birthdate entered',
	'NO_DATA_ENTERED'	=> 'No data has been entered',
	'NOT_ACCEPTED'		=> 'Policy has not been accepted',

	'REG_DATE'			=> 'Registration date',
	'REG_IP'			=> 'Registration IP',

	'USERNAME'			=> 'Username',
	'USER_IPS'			=> 'IP addresses that you have used',

	'VERSION'			=> 'Version',
));
