<?php
/**
*
* sortables captcha [Slovak]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) ansysko <http://phpbb.sk>
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
	'CAPTCHA_SORTABLES'				=> 'CAPTCHA triedenie',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Prosím presuňte správne odpovede do zoznamu pre odpovede, kôli zabráneniu automatických registrácií.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Prosím presuňte správne odpovede do zoznamu pre odpovede, kôli zabráneniu automatických registrácií.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Presunuli ste nesprávne odpovede do zoznamu pre odpovede.',

	'QUESTION_ANSWERS'			=> 'Otázka',
	'ANSWERS_EXPLAIN'			=> 'Možnosti pre tento stĺpec. Prosím napíšte jednu možnosť v každom riadku.',
	'CONFIRM_QUESTION'			=> 'Odpovede',
	'CHANGES_SUBMIT'			=> 'Odoslať zmeny',

	'EDIT_QUESTION'				=> 'Úprava odpovedí',
	'QUESTIONS'					=> 'Triedenie zoznamu odpovedí',
	'QUESTIONS_EXPLAIN'			=> 'Tu si môžete pridávať a upravovať otázky, ktoré majú byť položené pri registrácii. Musíte zadať aspoň jednu otázku v predvolenom jazyku ak chcete využívať tento plugin. Otázky by mali byť ľahké pre vašu cieľovú skupinu. Užívatelia uvidia všetky možnosti v jednom stĺpci a musia ich zoradiť do správneho stĺpca. Meňte otázky pravidelne.',
	'QUESTION_DELETED'			=> 'Odpovede zmazané',
	'QUESTION_LANG'				=> 'Jazyk',
	'QUESTION_LANG_EXPLAIN'		=> 'Jazyk v ktorom bude otázka a odpovede.',
	'QUESTION_SORT'				=> 'Predvolený zoznam odpovedí',
	'QUESTION_SORT_EXPLAIN'		=> 'V ktorom stĺpci budú otázky zobrazené štandardne.',

	'COLUMN_LEFT'				=> 'Vľavo',
	'COLUMN_RIGHT'				=> 'Vpravo',
	'COLUMN_NAME'				=> 'Názov stĺpca',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Správne',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Nesprávne',

	'DEMO_QUESTION'				=> 'Mestá',
	'DEMO_NAME_LEFT'			=> 'Všetky mestá',
	'DEMO_NAME_RIGHT'			=> 'Mestá v SR',
	'DEMO_OPTION_BANANAS'		=> 'Bratislava',
	'DEMO_OPTION_TOMATOES'		=> 'Praha',
	'DEMO_OPTION_APPLES'		=> 'Žilina',
	'DEMO_PREVIEW_ONLY'			=> 'Nemôžete presunúť náhľad.',

	'QUESTION_TEXT'				=> 'Odpoveď',
	'QUESTION_TEXT_EXPLAIN'		=> 'Vysvetlite, ako by mali byť možnosti radené v stĺpcoch.',

	'SORTABLES_ERROR_MSG'		=> 'Prosím, vyplňte všetky polia a zadajte aspoň jednu možnosť pre oba stĺpce.',
));
