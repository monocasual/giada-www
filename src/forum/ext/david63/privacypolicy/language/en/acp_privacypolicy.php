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
	'ALL'									=> 'All pages',

	'CLICK_TO_SELECT'						=> 'Click in the box to select a colour',

	'COOKIE_BLOCK_LINKS'					=> 'Block all links',
	'COOKIE_BLOCK_LINKS_EXPLAIN'			=> 'Prevent a user accessing any links on the board until they have accepted the Cookie Policy.',
	'COOKIE_BOX_BDR_COLOUR'					=> 'Cookie box border colour',
	'COOKIE_BOX_BDR_COLOUR_EXPLAIN'			=> 'Select the border colour for the Cookie acceptance box.<br>The default colour is <strong>“#FFFF8A”</strong>',
	'COOKIE_BOX_BDR_WIDTH'					=> 'Cookie box border width',
	'COOKIE_BOX_BDR_WIDTH_EXPLAIN'			=> 'Select the border width for the Cookie acceptance box.<br>The default width is <strong>“1”</strong>',
	'COOKIE_BOX_BG_COLOUR'					=> 'Cookie box background colour',
	'COOKIE_BOX_BG_COLOUR_EXPLAIN'			=> 'Select the background colour for the Cookie acceptance box.<br>The default colour is <strong>“#00608F”</strong>',
	'COOKIE_BOX_HREF_COLOUR'				=> 'Cookie box link colour',
	'COOKIE_BOX_HREF_COLOUR_EXPLAIN'		=> 'Select the acceptance link colour for the Cookie acceptance box.<br>The default colour is <strong>“#FFFFFF”</strong>',
	'COOKIE_BOX_TXT_COLOUR'					=> 'Cookie box text colour',
	'COOKIE_BOX_TXT_COLOUR_EXPLAIN'			=> 'Select the text colour for the Cookie acceptance box.<br>The default colour is <strong>“#DBDB00”</strong>',

	'COOKIE_CUSTOM_PAGE'					=> 'Use custom policy page colours',
	'COOKIE_CUSTOM_PAGE_CORNERS'			=> 'Use rounded corners',
	'COOKIE_CUSTOM_PAGE_CORNERS_EXPLAIN'	=> 'Use rounded corners on the policy page.<br>Setting this to <strong>No</strong> will mean that the page has square corners.',
	'COOKIE_CUSTOM_PAGE_EXPLAIN'			=> 'Use the custom colours for the policy page.<br>Setting this to <strong>No</strong> will use the default colours from your style.',
	'COOKIE_CUSTOM_PAGE_RADIUS'				=> 'Custom page radius',
	'COOKIE_CUSTOM_PAGE_RADIUS_EXPLAIN'		=> 'Sets the number of pixels for rounding the custom policy page corners. Setting this to 0 means that the page will have square corners.<br><em>The default for prosilver is 7px.</em>',

	'COOKIE_EXPIRE'							=> 'Cookie expires',
	'COOKIE_EXPIRE_EXPLAIN'					=> 'Setting this to yes will require the user to re accept the Cookie Policy annually.',

	'COOKIE_PAGE_BG_COLOUR'					=> 'Custom policy page background colour',
	'COOKIE_PAGE_BG_COLOUR_EXPLAIN'			=> 'Select the background colour for the policy page.',
	'COOKIE_PAGE_TXT_COLOUR'				=> 'Custom policy page text colour',
	'COOKIE_PAGE_TXT_COLOUR_EXPLAIN'		=> 'Select the text colour for the policy page.',

	'COOKIE_POLICY_ENABLE'					=> 'Enable the Cookie policy',
	'COOKIE_POLICY_ENABLE_EXPLAIN'			=> 'Enable/disable all user’s requirement to accept the use of cookies, under EU Cookie directive (2012), on this board.',
	'COOKIE_POLICY_EXPLAIN'					=> 'Here you can set the options to manage the Privacy and Cookie policies.',
	'COOKIE_POLICY_ON_INDEX'				=> 'Show on index only',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'		=> 'Show the cookie policy acceptance box only on the index page or on all pages.',
	'COOKIE_POLICY_OPTIONS'					=> 'Cookie policy options',

	'COOKIE_REQUIRE'						=> 'Require cookie acceptance',
	'COOKIE_REQUIRE_EXPLAIN'				=> 'Require the acceptance of board cookies before a member can either register or log-in.<br>Setting this to “Yes” will still allow a user to view the board (subject to permissions).',

	'COOKIE_SHOW_POLICY'					=> 'Show privacy/cookie policy',
	'COOKIE_SHOW_POLICY_EXPLAIN'			=> 'Setting this to yes will display the nav bar link to the privacy/cookie policy when the Cookie Policy is disabled, i.e. you can have a privacy/cookie policy without the need to have the acceptance box.',

	'CUSTOM_BOX_OPTIONS'					=> 'Cookie box options',
	'CUSTOM_BOX_OPTIONS_EXPLAIN'			=> '<strong>Here you can change the options to suit your style for the Cookie acceptance box.</strong>',
	'COOKIE_BOX_TOP'						=> 'Cookie box top',
	'COOKIE_BOX_TOP_EXPLAIN'				=> 'Set here how far from the top of the window that you want the cookie acceptance box to be placed.<br><strong>Note 1:</strong> If the window is less than the value set here the cookie box will appear at the bottom of the window.<br><strong>Note 2:</strong> Setting the value to <strong>“0”</strong> will place the box at the top of the window.<br><strong>Note 3:</strong> Setting the value to <strong>“9999”</strong> will place the box at the bottom of the window.',
	'CUSTOM_PAGE_COLOURS'					=> 'Custom policy page options',
	'CUSTOM_PAGE_COLOURS_EXPLAIN'			=> '<strong>Here you can change the colours and/or set rounded corners to suit your style for the policy page.</strong>',

	'PIXELS'								=> 'px',
	'POLICIES'								=> 'Policies',
	'PRIVACY_POLICY_ANONYMISE'				=> 'Anonymise IP addresses',
	'PRIVACY_POLICY_ANONYMISE_EXPLAIN'		=> 'Anonymise the user’s IP&nbsp;address on posts, polls & PMs.<br><em>The user’s real IP address will still be used in areas of the board where it is required for the correct management of the board.</em>',
	'PRIVACY_POLICY_ANONYMISE_IP'			=> 'Anonymise IP address',
	'PRIVACY_POLICY_ANONYMISE_IP_EXPLAIN'	=> 'The IP&nbsp;address to be used for the anonymisation.<br><strong>This must be a valid IP address</strong>',
	'PRIVACY_POLICY_ENABLE'					=> 'Enable the Privacy policy',
	'PRIVACY_POLICY_ENABLE_EXPLAIN'			=> 'Enable/disable all user’s requirement to accept the GDPR (2018) on this board.',
	'PRIVACY_POLICY_FORCE'					=> 'Force Privacy acceptance',
	'PRIVACY_POLICY_FORCE_EXPLAIN'			=> 'Force all users on this board to accept the GDPR.',
	'PRIVACY_POLICY_HIDE_CORE'				=> 'Hide phpBB core privacy links',
	'PRIVACY_POLICY_HIDE_CORE_EXPLAIN'		=> 'Remove the pre defined phpBB core Privacy & Terms links.<br><strong>Note:</strong>This is only relevant in versions of phpBB 3.2.3 or greater.',
	'PRIVACY_POLICY_LIST_LINES'				=> 'Privacy policy lines',
	'PRIVACY_POLICY_LIST_LINES_EXPLAIN'		=> 'The number of lines to display on the <em>Privacy policy list</em>.',
	'PRIVACY_POLICY_OPTIONS'				=> 'Privacy policy options',
	'PRIVACY_POLICY_REMOVE'					=> 'Display remove link',
	'PRIVACY_POLICY_REMOVE_EXPLAIN'			=> 'Display on the “Privacy data” tab in the user’s UCP the mailto link to request the removal of their account.',
	'PRIVACY_POLICY_RESET'					=> 'Reset policy acceptance',
	'PRIVACY_POLICY_RESET_EXPLAIN'			=> 'Reset the policy acceptance in order that members will have to accept the Privacy policy again.<br>Once this has been run then you will need to set “<strong>Force Privacy acceptance</strong>” to “<strong>Yes</strong>”.',
));
