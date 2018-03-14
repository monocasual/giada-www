<?php
/**
*
* sortables captcha [Serbian (Cyrillic Script)]
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
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Превуците опције тако да редослед буде исправан, како би се избегла аутоматска регистрација.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Одаберите исправне опције како би се избегла аутоматска регистрација.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Погрешно сте разврстали ставке из листе.',

	'QUESTION_ANSWERS'			=> 'Одговор',
	'ANSWERS_EXPLAIN'			=> 'Могућности за ову колону. Молимо упишите по једну опцију у сваком реду.',
	'CONFIRM_QUESTION'			=> 'Питање',
	'CHANGES_SUBMIT'			=> 'Прихвати измене',

	'EDIT_QUESTION'				=> 'Ажурирај питање',
	'QUESTIONS'					=> 'Редослед листе питања',
	'QUESTIONS_EXPLAIN'			=> 'Овде можете додавати и ажурирати питања која се појављују приликом регистрације. Морате поставити најмање једно питање у задатом оквиру за коришћење овог додатка. Питања би требало да буду једноставна за циљану публику. Корисници ће видети све опције у једној колони и морају их распоредити у исправну колону као што сте задали у администрацији. Додатно, не заборавите да повремено измените питања.',
	'QUESTION_DELETED'			=> 'Питање обрисано',
	'QUESTION_LANG'				=> 'Језик',
	'QUESTION_LANG_EXPLAIN'		=> 'Језик којим је питање писано је',
	'QUESTION_SORT'				=> 'Задата врста листе',
	'QUESTION_SORT_EXPLAIN'		=> 'Колона у којој би требло да буду приказани одговори.',

	'COLUMN_LEFT'				=> 'Лева колона',
	'COLUMN_RIGHT'				=> 'Десна колона',
	'COLUMN_NAME'				=> 'Име колоне',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Као: ствари које су потребне',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Као: Ствари које нису потребне',

	'DEMO_QUESTION'				=> 'Шта стављамо у чорбу од парадајза',
	'DEMO_NAME_LEFT'			=> 'Остави',
	'DEMO_NAME_RIGHT'			=> 'Одбаци',
	'DEMO_OPTION_BANANAS'		=> 'Банана',
	'DEMO_OPTION_TOMATOES'		=> 'Парадајз',
	'DEMO_OPTION_APPLES'		=> 'Јабука',
	'DEMO_PREVIEW_ONLY'			=> 'Не можете преместити могућност примера. Ово је само пример!',

	'QUESTION_TEXT'				=> 'Питање',
	'QUESTION_TEXT_EXPLAIN'		=> 'Објасните како отприлике треба распоредити речи у колони.',

	'SORTABLES_ERROR_MSG'		=> 'Молимо испуните сва поља и унесите барем једну могућност за обе колоне.',
));
