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
	'CSV_DOWNLOAD'					=> 'Download CSV file of this data',

	'REMOVE_ACCOUNT'				=> 'Click this link to send an email to the board Admin requesting the removal of your account',
	'REMOVE_MY_ACCOUNT'				=> 'Please Remove My Account',
	'REMOVE_MY_ACCOUNT_BODY'		=> 'I no longer wish to be a member of this board and request that my details are removed in accordance with the GDPR (2018) regulations.%1$sMy Username is %2$s%1$s%1$sThe reason that I wish to be removed is [please enter reason. If no reason is entered then your details will not be removed.]',

	'UCP_PRIVACY_POLICY_EXPLAIN'	=> 'Below you will find the details of your personal data that we store on this site.',
	'UCP_PRIVACY_TITLE'				=> 'Privacy Policy Data',
));
