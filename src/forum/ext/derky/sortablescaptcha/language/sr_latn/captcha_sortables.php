<?php
/**
*
* sortables captcha [Serbian (Latin Script)]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) stojadinovicp <http://stojadinovic.net>
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
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Prevucite opcije tako da redosled bude ispravan, kako bi se izbegla automatska registracija.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Odaberite ispravne opcije kako bi se izbegla automatska registracija.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Pogrešno ste razvrstali stavke iz liste.',

	'QUESTION_ANSWERS'			=> 'Odgovor',
	'ANSWERS_EXPLAIN'			=> 'Mogućnosti za ovu kolonu. Molimo upišite po jednu opciju u svakom redu.',
	'CONFIRM_QUESTION'			=> 'Pitanje',
	'CHANGES_SUBMIT'			=> 'Prihvati izmene',

	'EDIT_QUESTION'				=> 'Ažuriraj pitanje',
	'QUESTIONS'					=> 'Redosled liste pitanja',
	'QUESTIONS_EXPLAIN'			=> 'Ovde možete dodavati i ažurirati pitanja koja se pojavljuju prilikom registracije. Morate postaviti najmanje jedno pitanje u zadatom okviru za korišćenje ovog dodatka. Pitanja bi trebalo da budu jednostavna za ciljanu publiku. Korisnici će videti sve opcije u jednoj koloni i moraju ih rasporediti u ispravnu kolonu kao što ste zadali u administraciji. Dodatno, ne zaboravite da povremeno izmenite pitanja.',
	'QUESTION_DELETED'			=> 'Pitanje obrisano',
	'QUESTION_LANG'				=> 'Jezik',
	'QUESTION_LANG_EXPLAIN'		=> 'Jezik kojim je pitanje pisano je',
	'QUESTION_SORT'				=> 'Zadata vrsta liste',
	'QUESTION_SORT_EXPLAIN'		=> 'Kolona u kojoj bi treblo da budu prikazani odgovori.',

	'COLUMN_LEFT'				=> 'Leva kolona',
	'COLUMN_RIGHT'				=> 'Desna kolona',
	'COLUMN_NAME'				=> 'Ime kolone',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Kao: stvari koje su potrebne',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Kao: Stvari koje nisu potrebne',

	'DEMO_QUESTION'				=> 'Šta stavljamo u čorbu od paradajza',
	'DEMO_NAME_LEFT'			=> 'Ostavi',
	'DEMO_NAME_RIGHT'			=> 'Odbaci',
	'DEMO_OPTION_BANANAS'		=> 'Banana',
	'DEMO_OPTION_TOMATOES'		=> 'Paradajz',
	'DEMO_OPTION_APPLES'		=> 'Jabuka',
	'DEMO_PREVIEW_ONLY'			=> 'Ne možete premestiti mogućnost primera. Ovo je samo primer!',

	'QUESTION_TEXT'				=> 'Pitanje',
	'QUESTION_TEXT_EXPLAIN'		=> 'Objasnite kako otprilike treba rasporediti reči u koloni.',

	'SORTABLES_ERROR_MSG'		=> 'Molimo ispunite sva polja i unesite barem jednu mogućnost za obe kolone.',
));
