<?php
/**
*
* sortables captcha [Czech]
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
	'CAPTCHA_SORTABLES'				=> 'CAPTCHA třídění',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Prosím přesuňte správne odpovědi do seznamu pro odpovědi, kvůli zabránění automatických registrací.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Prosím přesuňte správne odpovědi do seznamu pro odpovědi, kvůli zabránění automatických registrací.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Přesunuli jste nesprávné odpovědi do seznamu pro odpovědi.',

	'QUESTION_ANSWERS'			=> 'Otázka',
	'ANSWERS_EXPLAIN'			=> 'Možnosti pro tento sloupec. Prosím napište jednu možnost v každé řádku.',
	'CONFIRM_QUESTION'			=> 'Odpovědi',
	'CHANGES_SUBMIT'			=> 'Odeslat zmény',

	'EDIT_QUESTION'				=> 'Úprava odpovědí',
	'QUESTIONS'					=> 'Třídění seznamu odpovědí',
	'QUESTIONS_EXPLAIN'			=> 'Tady si můžete přidávať a upravovat otázky, které mají být položeny při registraci. Musíte zadat alespoň jednu otázku v předvoleném jazyce když chcete využívat tenhle plugin. Otázky by měli být lehké pro vaši cílovou skupinu. Užívatelé uvidí všechny možnosti v jednom sloupci a musí ich seřadit do správneho sloupce. Měňte otázky pravidelně.',
	'QUESTION_DELETED'			=> 'Odpovědi smazány',
	'QUESTION_LANG'				=> 'Jazyk',
	'QUESTION_LANG_EXPLAIN'		=> 'Jazyk ve kterém bude otázka a odpověď.',
	'QUESTION_SORT'				=> 'Předvolený seznam odpovědí',
	'QUESTION_SORT_EXPLAIN'		=> 'Ve kterém sloupci budou otázky zobrazeny standartne.',

	'COLUMN_LEFT'				=> 'Vlevo',
	'COLUMN_RIGHT'				=> 'Vpravo',
	'COLUMN_NAME'				=> 'Název sloupce',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Správne odpovědi',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Nesprávne odpovědi',

	'DEMO_QUESTION'				=> 'Města',
	'DEMO_NAME_LEFT'			=> 'Všechny města',
	'DEMO_NAME_RIGHT'			=> 'Města v ČR',
	'DEMO_OPTION_BANANAS'		=> 'Praha',
	'DEMO_OPTION_TOMATOES'		=> 'Brno',
	'DEMO_OPTION_APPLES'		=> 'Žilina',
	'DEMO_PREVIEW_ONLY'			=> 'Nemůžete přesunout náhled.',

	'QUESTION_TEXT'				=> 'Odpověď',
	'QUESTION_TEXT_EXPLAIN'		=> 'Vysvětlete, jak by měli být možnosti řazeny v sloupcích.',

	'SORTABLES_ERROR_MSG'		=> 'Prosím, vyplňte všechny pole a zadejte alespoň jednu možnosť pro oba sloupce.',
));
