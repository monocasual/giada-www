<?php
/**
*
* sortables captcha [Polish]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) all4phone <http://bbcode.pl>
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
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Aby uniknąć automatycznej rejestracji proszę, przeciągnąć opcje do odpowiedniej listy.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Proszę wybrać opcje poniżej do odpowiednich list, aby uniknąć automatycznej rejestracji.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Masz nieprawidłowo posortowane elementy listy, niezgodnie z pytaniem potwierdzenia.',

	'QUESTION_ANSWERS'			=> 'Odpowiedzi',
	'ANSWERS_EXPLAIN'			=> 'Opcje dla tej kolumny. Proszę wpisać jedną opcję w linii.',
	'CONFIRM_QUESTION'			=> 'Pytanie',
	'CHANGES_SUBMIT'			=> 'Potwierdź zmiany',

	'EDIT_QUESTION'				=> 'Edytuj Pytanie',
	'QUESTIONS'					=> 'Listy Pytań Sortable',
	'QUESTIONS_EXPLAIN'			=> 'Tutaj można dodawać i edytować pytania, które będą zadawane na temat rejestracji. Aby korzystać z tej wtyczki, musisz podać co najmniej jedno pytanie w domyślnym języku forum. Pytania powinny być łatwe dla Twojej docelowej grupy. Użytkownicy będą widzieć wszystkie opcje w jednej kolumnie i bedą musieli sortować je do odpowiedniej kolumny. Pamiętaj, aby regularnie zmieniać pytania.',
	'QUESTION_DELETED'			=> 'Pytanie usunięte',
	'QUESTION_LANG'				=> 'Język',
	'QUESTION_LANG_EXPLAIN'		=> 'Język, w którym jest napisane to pytanie i jego opcje.',
	'QUESTION_SORT'				=> 'Domyślne sortowanie listy',
	'QUESTION_SORT_EXPLAIN'		=> 'W której kolumnie należy domyślnie wyświetlać wszystkie odpowiedzi.',

	'COLUMN_LEFT'				=> 'Lewa kolumna',
	'COLUMN_RIGHT'				=> 'Prawa kolumna',
	'COLUMN_NAME'				=> 'Nazwa kolumny',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Np: Co potrzebne',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Np: Czego nie potrzeba',

	'DEMO_QUESTION'				=> 'Co jest potrzebne do zupy pomidorowej',
	'DEMO_NAME_LEFT'			=> 'W garnku',
	'DEMO_NAME_RIGHT'			=> 'Odrzuć',
	'DEMO_OPTION_BANANAS'		=> 'Banany',
	'DEMO_OPTION_TOMATOES'		=> 'Pomidory',
	'DEMO_OPTION_APPLES'		=> 'Jabłka',
	'DEMO_PREVIEW_ONLY'			=> 'Nie możesz przenieść opcji do podglądu.',

	'QUESTION_TEXT'				=> 'Pytanie',
	'QUESTION_TEXT_EXPLAIN'		=> 'Wyjaśnij jak opcje powinny być posortowane w kolumnach.',

	'SORTABLES_ERROR_MSG'		=> 'Proszę wypełnić wszystkie pola i podać co najmniej jedną opcję dla obu kolumn.',
));
