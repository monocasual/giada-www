<?php
/**
*
* sortables captcha [Icelandic]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) Sverrir <https://spjall.frettavefur.net/>
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

$lang = array_merge($lang, array(
	'CAPTCHA_SORTABLES'				=> 'Raðanlegt CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Vinsamlegast flokkaðu stökin í listana, þetta hjálpar okkur að forðast tölvumenni(e. bots).',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Vinsamlegast veldu stökin í listana, þetta hjálpar okkur að forðast tölvumenni(e. bots).', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Þú hefur ekki flokkað stökin rétt í listana.',

	'QUESTION_ANSWERS'			=> 'Svör',
	'ANSWERS_EXPLAIN'			=> 'Valmöguleiki fyrir þennan dálk. Vinsamlegast skráðu einn valmöguleika í línu.',
	'CONFIRM_QUESTION'			=> 'Spurning',
	'CHANGES_SUBMIT'			=> 'Vista breytingar',

	'EDIT_QUESTION'				=> 'Breyta spurningu',
	'QUESTIONS'					=> 'Spurningar fyrir flokkanlega lista',
	'QUESTIONS_EXPLAIN'			=> 'Hér getur þú bætt við og breytt spurningum sem eru notaðar við skráningu. Þú verður að hafa a.m.k. eina spurningu í sjálfgefna tungumáli spjallborðsins til að nota þessa viðbót. Spurningarnar ættu að vera auðveldar fyrir markhópinn þinn og ekki verra ef þær tengjast einhverju sameiginlegu sérsviði. Notendurnir munu sjá alla valmöguleikana í einum dálki og þurfa að flokka þá í tvo dálka. Mundu líka eftir því að breyta spurningunum reglulega!',
	'QUESTION_DELETED'			=> 'Spurningu eytt',
	'QUESTION_LANG'				=> 'Tungumál',
	'QUESTION_LANG_EXPLAIN'		=> 'Tungumálið sem spurningin og valmöguleikarnir eru skrifuð í.',
	'QUESTION_SORT'				=> 'Sjálfgefin flokkunarlisti',
	'QUESTION_SORT_EXPLAIN'		=> 'Í hvaða dálk eiga öll svörin að birtast sjálfgefið.',

	'COLUMN_LEFT'				=> 'Vinstri dálkur',
	'COLUMN_RIGHT'				=> 'Hægri dálkur',
	'COLUMN_NAME'				=> 'Dálkanafn',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Eins og: hlutir sem ég þarf',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Eins og: hlutir sem ég þarf ekki',

	'DEMO_QUESTION'				=> 'Hvað er innihald tómatssúpu',
	'DEMO_NAME_LEFT'			=> 'Í pottinn',
	'DEMO_NAME_RIGHT'			=> 'Henda',
	'DEMO_OPTION_BANANAS'		=> 'Bananar',
	'DEMO_OPTION_TOMATOES'		=> 'Tómatar',
	'DEMO_OPTION_APPLES'		=> 'Epli',
	'DEMO_PREVIEW_ONLY'			=> 'Þú getur ekki fært valmöguleikana í forskoðuninni.',

	'QUESTION_TEXT'				=> 'Spurning',
	'QUESTION_TEXT_EXPLAIN'		=> 'Skýrðu hvernig valmöguleikarnir eiga að vera flokkaðir í dálkana.',

	'SORTABLES_ERROR_MSG'		=> 'Vinsamlegast fylltu út reitina og veldu a.m.k. einn valmöguleika fyrir báða dálka.',
));
