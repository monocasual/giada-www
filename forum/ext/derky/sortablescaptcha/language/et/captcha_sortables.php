<?php
/**
*
* sortables captcha [Estonian]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) phpBBeesti.com <http://www.phpbb.planet.ee>
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
	'CAPTCHA_SORTABLES'				=> 'Sortables CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Lohista õige(d) vastus(ed) õigesse kolumni, et vältida automaatseid registreeringuid.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Tee linnuke(sed) õige(te)sse kasti(desse), et vältida automaatseid registreeringuid', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Registreerimise kinnituse vastused on valesti sorteeritud õigetesse veergudesse.',

	'QUESTION_ANSWERS'			=> 'Vastused',
	'ANSWERS_EXPLAIN'			=> 'Valikud antud veerus. Kirjuta iga valik eraldi reale.',
	'CONFIRM_QUESTION'			=> 'Küsimus',
	'CHANGES_SUBMIT'			=> 'Salvesta muudatused',

	'EDIT_QUESTION'				=> 'Muuda küsimust',
	'QUESTIONS'					=> 'Sortable CAPTHA küsimused',
	'QUESTIONS_EXPLAIN'			=> 'Siin saad lisada ja muuta küsimusi, mida küsitakse registreerimisel. Sa pead sisestama vähemalt ühe küsimuse, et saaksid kasutada antud moodulit. Küsimused peaksid olema lihtsad kasutajatele lahendamiseks. Kasutajad näevad kõiki valikuid ühes veerus, ning peavad sorteerima need lohistades õigetesse veergudesse. Lisaks pea meeles, et tark on muuta kinnitusküsimusi aegajalt vältimaks automaatseid registreeringuid.',
	'QUESTION_DELETED'			=> 'Küsimus kustutatud',
	'QUESTION_LANG'				=> 'Keel',
	'QUESTION_LANG_EXPLAIN'		=> 'Keelevalik. Millise keelefailiga antud küsimust näidatakse?',
	'QUESTION_SORT'				=> 'Sorteerimise nimekiri vaikimisi',
	'QUESTION_SORT_EXPLAIN'		=> 'Millises veerus näidatakse vaikimisi kõiki vastuse variante.',

	'COLUMN_LEFT'				=> 'Vasak veerg',
	'COLUMN_RIGHT'				=> 'Parem veerg',
	'COLUMN_NAME'				=> 'Veeru nimi',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Näiteks: Mida ma vajan',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Näiteks: Mida ma ei vaja',

	'DEMO_QUESTION'				=> 'Mida läheb vaja tomatisupis',
	'DEMO_NAME_LEFT'			=> 'Läheb vaja',
	'DEMO_NAME_RIGHT'			=> 'Ei lähe vaja',
	'DEMO_OPTION_BANANAS'		=> 'Banaane',
	'DEMO_OPTION_TOMATOES'		=> 'Tomateid',
	'DEMO_OPTION_APPLES'		=> 'Õunu',
	'DEMO_PREVIEW_ONLY'			=> 'Sa ei saa liigutada valikuid näidises.',

	'QUESTION_TEXT'				=> 'Küsimus',
	'QUESTION_TEXT_EXPLAIN'		=> 'Kirjelda kuidas peaks sorteerima vastused veergudesse või kirjuta küsimus.',

	'SORTABLES_ERROR_MSG'		=> 'Palun täida kõik väljad, ning sisesta vähemalt üks valik mõlemasse veergu.',
));
