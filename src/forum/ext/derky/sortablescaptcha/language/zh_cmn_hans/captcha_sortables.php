<?php
/**
*
* sortables captcha [Chinese (Simplified)]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) DT27 <https://dt27.org>
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
	'CONFIRM_QUESTION_EXPLAIN'		=> '为防止机器自动注册，请把项目拖曳到适当的区域中。',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> '为防止机器自动注册，请从列表中选择适当的项目。', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> '回答不正确，请重新调整项目所在区域。',

	'QUESTION_ANSWERS'			=> '答案',
	'ANSWERS_EXPLAIN'			=> '本区域的答案，每行一个项目。',
	'CONFIRM_QUESTION'			=> '问题',
	'CHANGES_SUBMIT'			=> '提交',

	'EDIT_QUESTION'				=> '编辑问题',
	'QUESTIONS'					=> '设置Sortables CAPTCHA问题',
	'QUESTIONS_EXPLAIN'			=> '你可以在这里新增和编辑注册时要提出的问题。如要本插件运行正常，你至少要为论坛的预设语言提供一条问题，并且问题要能让目标群众易于回答。使用者会看到所有項目都放到其中一个区域内，他们要把这些项目移动到适当的区域中。另外请记得要定期更新问题。',
	'QUESTION_DELETED'			=> '问题已删除',
	'QUESTION_LANG'				=> '语言',
	'QUESTION_LANG_EXPLAIN'		=> '这条问题及对应项目的语言。',
	'QUESTION_SORT'				=> '默认区域',
	'QUESTION_SORT_EXPLAIN'		=> '所有答案默认存放区域。',

	'COLUMN_LEFT'				=> '左侧',
	'COLUMN_RIGHT'				=> '右侧',
	'COLUMN_NAME'				=> '区域名',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> '例如：你想要的东西',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> '例如：你不想要的动西',

	'DEMO_QUESTION'				=> '番茄汤要包含哪些材料？',
	'DEMO_NAME_LEFT'			=> '放到锅中的材料',
	'DEMO_NAME_RIGHT'			=> '不要放到锅中的东西',
	'DEMO_OPTION_BANANAS'		=> '香蕉',
	'DEMO_OPTION_TOMATOES'		=> '番茄',
	'DEMO_OPTION_APPLES'		=> '苹果',
	'DEMO_PREVIEW_ONLY'			=> '预览里的项目不能移动。',

	'QUESTION_TEXT'				=> '问题',
	'QUESTION_TEXT_EXPLAIN'		=> '说明每一个项目应该属于哪个区域。',

	'SORTABLES_ERROR_MSG'		=> '每一个区域都请填写完整，并且左右区域至少要有一个项目。',
));
