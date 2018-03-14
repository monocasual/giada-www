<?php
/**
*
* sortables captcha [Russian]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) <http://www.multart.org>
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
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Для предотвращения автоматических регистраций, составьте правильные списки с помощью перетаскивания.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Пожалуйста, выберите ниже правильный вариант ответа поставленного вопроса.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Ваш выбор не правильный.',

	'QUESTION_ANSWERS'			=> 'Ответы',
	'ANSWERS_EXPLAIN'			=> 'Параметры для этого пункта. Пожалуйста, напишите один вариант в каждой строке.',
	'CONFIRM_QUESTION'			=> 'Вопрос',
	'CHANGES_SUBMIT'			=> 'Сохранить изменения',

	'EDIT_QUESTION'				=> 'Изменить вопрос',
	'QUESTIONS'					=> 'Список вопросов',
	'QUESTIONS_EXPLAIN'			=> 'Здесь Вы можете добавлять или редактировать вопросы для "Sortables" капчи. Вы должны добавить хотя бы один вопрос на Вашем основном языке форума по умолчению, хотя лучше всего, не нескольких языках. Вопросы должны быть простыми для вашей целевой аудитории форума. Пользователи будут видеть все варианты в один столбец и сортировать их на правильные колонки.',
	'QUESTION_DELETED'			=> 'Вопрос удален',
	'QUESTION_LANG'				=> 'Язык',
	'QUESTION_LANG_EXPLAIN'		=> 'Вопросы под разные языки на форуме.',
	'QUESTION_SORT'				=> 'Сортировать список по умолчанию',
	'QUESTION_SORT_EXPLAIN'		=> 'В каком столбце должны быть ответы на все вопросы по умолчанию.',

	'COLUMN_LEFT'				=> 'Левая колонка',
	'COLUMN_RIGHT'				=> 'Правая колонка',
	'COLUMN_NAME'				=> 'Имя колонки',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Например: Нужное',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Например: Не нужное',

	'DEMO_QUESTION'				=> 'Что входит в суп из томатов?',
	'DEMO_NAME_LEFT'			=> 'В кастрюлю',
	'DEMO_NAME_RIGHT'			=> 'Выбросить',
	'DEMO_OPTION_BANANAS'		=> 'Бананы',
	'DEMO_OPTION_TOMATOES'		=> 'Помидоры',
	'DEMO_OPTION_APPLES'		=> 'Яблоки',
	'DEMO_PREVIEW_ONLY'			=> 'Это тестовый вариант для предпросмотра.',

	'QUESTION_TEXT'				=> 'Вопрос',
	'QUESTION_TEXT_EXPLAIN'		=> 'Поясните Ваш вопрос.',

	'SORTABLES_ERROR_MSG'		=> 'Пожалуйста, заполните все поля и введите хотя бы один из вариантов для обеих колонок.',
));
