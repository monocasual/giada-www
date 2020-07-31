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

// DEVELOPERS PLEASE NOTE
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
	'ACCEPT' 				=> 'I accept this policy',

	'COOKIE_ACCEPT_TEXT'	=> 'This board uses cookies to give you the best and most relevant experience. In order to use this board it means that you need accept this policy.<br>You can find out more about the cookies used on this board by clicking the "Policies" link at the bottom of the page.<br>',
	'COOKIE_ACCEPT'			=> 'Accept cookies',
	'COOKIE_ACCESS'			=> 'Cookie Access',

	'COOKIE_BLOCK'			=> 'You cannot access links on this board until you have accepted the Cookie Policy.',

	'COOKIE_POLICY'			=> 'Cookie Policy',
	'COOKIE_PRIV_POLICY'	=> 'Policies',

	'COOKIE_REQUIRE_ACCESS'	=> '<h3>Cookie Acceptance Required</h3>
	<p>You must accept the Cookie Policy of %1$s before you can either register on this site or, if you are already registered, before you can login to the site.</p>',

	'DECLINE' 				=> 'I do not accept this policy',

	'HR_BBCODE_HELPLINE' 	=> 'Insert a horizontal line',

	'POLICY_ACCEPT' 		=> 'Accept privacy policy',
	'POLICY_EXPLAIN'		=> 'Display the Privacy &Cookie policies for this board',
));
