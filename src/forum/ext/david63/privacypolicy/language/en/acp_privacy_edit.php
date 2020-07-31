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
	'COOKIE_EDIT_EXPLAIN'				=> 'Here you can customise the board’s Cookie Policy.',
	'COOKIE_EDIT_EXPLAIN_NEW'			=> 'Here you can add a new Cookie Policy in %1$s.<br>The Cookie Policy is displayed when the Cookie Policy is enabled and a user clicks on the “Policies” link in the bottom navigation bar.',

	'POLICY_DESCRIPTION'				=> 'Policy file name',
	'POLICY_DESCRIPTION_EXPLAIN'		=> 'The display name of this policy file which should be translated into <strong>%1$s</strong>.',
	'POLICY_EDIT'						=> 'Policy Files Editor',
	'POLICY_EDIT_EXPLAIN'				=> 'Here you can select which policy text files you wish to edit, or create a new policy text file in a specified language.',
	'POLICY_FILE_OPTIONS'	   			=> 'Policy file options',
	'POLICY_SELECT_FILE'		   		=> 'Select file',
	'POLICY_SELECT_LANGUAGE'			=> 'Select language',
	'PRIVACY_ACCEPT_EDIT_EXPLAIN'		=> 'Here you can customise the board’s Privacy Acceptance Policy.',
	'PRIVACY_ACCEPT_EDIT_EXPLAIN_NEW'	=> 'Here you can add a new Privacy Acceptance Policy in <strong>%1$s</strong>.<br>The Privacy Acceptance policy is displayed after the Privacy Policy.',
	'PRIVACY_EDIT_CREATED'				=> 'New privacy policy created »» %1$s',
	'PRIVACY_EDIT_EXPLAIN'				=> 'Here you can customise the board’s Privacy Policy.',
	'PRIVACY_EDIT_EXPLAIN_NEW'			=> 'Here you can add a new Privacy Policy in %1$s.<br>The Privacy Policy is the main policy describing the privacy rules of this board.',
	'PRIVACY_EDIT_UPDATED'				=> 'Privacy policy updated »» %1$s',

	'TERM_OF_USE_EDIT_EXPLAIN'			=> 'Here you can customise the board’s additional Terms of Use Policy.',
	'TERM_OF_USE_EDIT_EXPLAIN_NEW'		=> 'Here you can add a new additional Terms of Use Policy in %1$s.<br>This is displayed after the main Terms of Use when a new user wishes to register on the board.',

	'SITENAME'							=> 'Sitename',
	'SITENAME_HELP'						=> 'Insert the sitename placeholder (%sitename%)',

	'VERSION'				   			=> 'Version',
));
