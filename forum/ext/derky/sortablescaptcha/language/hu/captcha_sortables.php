<?php
/**
*
* sortables captcha [Hungarian]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) truly80
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
	'CAPTCHA_SORTABLES'				=> 'Sorrendi CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Az automatikus regisztráció elkerülése végett, helyes sorrendbe kell tenned a listán szereplő elemeket.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Az automatikus regisztráció elkerülése végett válaszd ki a jó válaszokat a listából.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Nem jó sorrendbe raktad az elemeket.',

	'QUESTION_ANSWERS'			=> 'Válaszok',
	'ANSWERS_EXPLAIN'			=> 'Lehetőségek ehhez az oszlophoz. Írd mindegyiket külön sorba!',
	'CONFIRM_QUESTION'			=> 'Kérdés',
	'CHANGES_SUBMIT'			=> 'Változások elmentése',

	'EDIT_QUESTION'				=> 'Kérdés szerkesztése',
	'QUESTIONS'					=> 'Átrendezhető lista kérdései',
	'QUESTIONS_EXPLAIN'			=> 'Itt adhatod hozzá, illetve szerkesztheted a regisztrációnál feltett kérdéseket.Legalább egy kérdést meg kell adnod a rendszer alap nyelvén a plugin használatához. A kérdéseknek a célközönség számára egyértelműnek kell lennie. A felhasználók az összes lehetőséget egy oszlopban kapják meg és a korrekt oszlopokba kell őket rendezniük. Időnként változtasd meg a kérdéseket!',
	'QUESTION_DELETED'			=> 'Kérdés törölve',
	'QUESTION_LANG'				=> 'Nyelv',
	'QUESTION_LANG_EXPLAIN'		=> 'A nyelv, amin az adott kérdés és válaszai íródtak.',
	'QUESTION_SORT'				=> 'Alap átrendezendő lista',
	'QUESTION_SORT_EXPLAIN'		=> 'Alap beállításként ebben az oszlopban jelenjenek meg a válaszok.',

	'COLUMN_LEFT'				=> 'Bal oldali oszlop',
	'COLUMN_RIGHT'				=> 'Jobb oldali oszlop',
	'COLUMN_NAME'				=> 'Oszlop név',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Pl.: Amik kellenek hozzá',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Pl.: Amik nem kellenek bele',

	'DEMO_QUESTION'				=> 'Az alábbiak közül mire van szükségem a paradicsomleves elkészítéséhez',
	'DEMO_NAME_LEFT'			=> 'A lábasba',
	'DEMO_NAME_RIGHT'			=> 'Kidobásra',
	'DEMO_OPTION_BANANAS'		=> 'Banán',
	'DEMO_OPTION_TOMATOES'		=> 'Paradicsom',
	'DEMO_OPTION_APPLES'		=> 'Alma',
	'DEMO_PREVIEW_ONLY'			=> 'Az előnézetben nem mozgathatod a válaszokat.',

	'QUESTION_TEXT'				=> 'Kérdés',
	'QUESTION_TEXT_EXPLAIN'		=> 'Megmagyarázza, mi alapján rendezd el a válaszokat a listában.',

	'SORTABLES_ERROR_MSG'		=> 'Kérlek tölts ki minden mezőt és legalább egy lehetőséget adj meg mindkét oszlopba.',
));
