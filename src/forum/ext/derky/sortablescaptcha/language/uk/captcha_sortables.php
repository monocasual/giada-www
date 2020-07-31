<?php
/**
*
* sortables captcha [Ukrainian]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) asket74 <http://www.multart.org>
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
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Для запобігання автоматичних реєстрацій складіть, будь ласка, правильні переліки за допомогою перетягування.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Буль ласка, виберіть нижче правильний варіант відповіді на питання.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Ваш вибір не правильний.',

	'QUESTION_ANSWERS'			=> 'Відповіді',
	'ANSWERS_EXPLAIN'			=> 'Параметри для цього пункту. Будь ласка, напишіть один варіант у кожному рядку.',
	'CONFIRM_QUESTION'			=> 'Питання',
	'CHANGES_SUBMIT'			=> 'Зберегти зміни',

	'EDIT_QUESTION'				=> 'Змінити питання',
	'QUESTIONS'					=> 'Перелік питань',
	'QUESTIONS_EXPLAIN'			=> 'Тут Ви маєте можливість додавати чи редагувати питання для "Sortables CAPTCHA". Ви повинні додати хоча б одне питання на Вашій основній мові форуму за замовчуванням, але буде краще зробити це на декількох мовах. Питання повинні бути простими та зрозумілими для Вашої цільової аудиторії форума. Користувачі будуть бачити усі варіанти в один стовбчик та сортувати їх у вірні стовпчики.',
	'QUESTION_DELETED'			=> 'Питання видалено',
	'QUESTION_LANG'				=> 'Мова',
	'QUESTION_LANG_EXPLAIN'		=> 'Питання під різні мови на форумі.',
	'QUESTION_SORT'				=> 'Сортувати список за замовчуванням.',
	'QUESTION_SORT_EXPLAIN'		=> 'У якому стовпчику повинні бути відповіді на усі питання за замовчуваннням.',

	'COLUMN_LEFT'				=> 'Лівий стовпчик',
	'COLUMN_RIGHT'				=> 'Правий стовпчик',
	'COLUMN_NAME'				=> 'Назва стовпчика',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Наприклад: Потрібне',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Наприклад: Не потрібне',

	'DEMO_QUESTION'				=> 'Що треба покласти у борщ?',
	'DEMO_NAME_LEFT'			=> 'У каструлю',
	'DEMO_NAME_RIGHT'			=> 'Викинути',
	'DEMO_OPTION_BANANAS'		=> 'Банани',
	'DEMO_OPTION_TOMATOES'		=> 'Томатна паста',
	'DEMO_OPTION_APPLES'		=> 'Яблука',
	'DEMO_PREVIEW_ONLY'			=> 'Це тестовий варіант для попереднього перегляду.',

	'QUESTION_TEXT'				=> 'Питання',
	'QUESTION_TEXT_EXPLAIN'		=> 'Поясніть Ваше питання.',

	'SORTABLES_ERROR_MSG'		=> 'Будь ласка, заповніть усі поля та надайте хоча б один із вариантів для обох стовпчиків.',
));
