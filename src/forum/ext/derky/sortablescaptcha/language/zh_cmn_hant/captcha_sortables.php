<?php
/**
*
* sortables captcha [Chinese (Traditional)]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) chukaml
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
	'CONFIRM_QUESTION_EXPLAIN'		=> '為防止機器自動註冊和把垃圾帖子貼到本討論區裡，請把項目拖曳到適當的欄中。',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> '為防止機器自動註冊和把垃圾帖子貼到本討論區裡，請從清單選擇適當的項目。', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> '回答不正確，你把答案項目放到錯誤的欄位中。',

	'QUESTION_ANSWERS'			=> '答案',
	'ANSWERS_EXPLAIN'			=> '本欄的答案，每行請只輸入一個項目。',
	'CONFIRM_QUESTION'			=> '問題',
	'CHANGES_SUBMIT'			=> '提交變更',

	'EDIT_QUESTION'				=> '編輯問題',
	'QUESTIONS'					=> '設定Sortables CAPTCHA問題',
	'QUESTIONS_EXPLAIN'			=> '你可以在這裡新增和編輯登入時要提出的問題。如要本插件運作正常，你至少要為討論區的預設語言提供一條問題，並且問題要能讓目標群眾易於回答。使用者會看到所有項目都放到其中一欄裡，他們要把這些項目歸類到適當的欄中。另外請記得定期更改一下問題。',
	'QUESTION_DELETED'			=> '問題已刪除了',
	'QUESTION_LANG'				=> '語言',
	'QUESTION_LANG_EXPLAIN'		=> '這條問題和內含的項目所使用的語言。',
	'QUESTION_SORT'				=> '預設分類清單',
	'QUESTION_SORT_EXPLAIN'		=> '答案要預設放到哪一欄之中。',

	'COLUMN_LEFT'				=> '左欄',
	'COLUMN_RIGHT'				=> '右欄',
	'COLUMN_NAME'				=> '欄名',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> '例如：你想要的東西',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> '例如：你不想要的東西',

	'DEMO_QUESTION'				=> '番茄湯要包含哪些材料？',
	'DEMO_NAME_LEFT'			=> '放到鍋中的材料',
	'DEMO_NAME_RIGHT'			=> '不要放到鍋中的東西',
	'DEMO_OPTION_BANANAS'		=> '香蕉',
	'DEMO_OPTION_TOMATOES'		=> '番茄',
	'DEMO_OPTION_APPLES'		=> '蘋果',
	'DEMO_PREVIEW_ONLY'			=> '預覽裡的項目不能移動。',

	'QUESTION_TEXT'				=> '問題',
	'QUESTION_TEXT_EXPLAIN'		=> '說明每個項目應歸類到哪一欄。',

	'SORTABLES_ERROR_MSG'		=> '每一欄目都請填妥，並且左右兩欄都請至少各輸入一個項目。',
));
