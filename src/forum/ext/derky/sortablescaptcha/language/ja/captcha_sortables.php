<?php
/**
*
* sortables captcha [Japanese]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) xing.netsphere
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
	'CAPTCHA_SORTABLES'				=> '並び替え CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'		=> '迷惑ユーザの自動登録・投稿を防ぐために、各項目を正しい欄にドラッグしてください。',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> '迷惑ユーザの自動登録・投稿を防ぐために、以下の各項目を正しく選択してください。', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> '貴方は質問に対して、誤った並び替えをしています。',

	'QUESTION_ANSWERS'			=> '答え',
	'ANSWERS_EXPLAIN'			=> 'この欄は1行につき1つの項目を入力してください。',
	'CONFIRM_QUESTION'			=> '質問',
	'CHANGES_SUBMIT'			=> '変更の送信',

	'EDIT_QUESTION'				=> '質問の編集',
	'QUESTIONS'					=> '並び替え CAPTCHAの質問設定',
	'QUESTIONS_EXPLAIN'			=> 'ここで登録・投稿時に質問する内容を編集できます。このプラグインを使うためには、少なくとも一つの質問を設定しなければなりません。質問は対象の皆さんが簡単に解けるようにしなければなりません。ユーザは片方にまとめられた項目を、正しい欄に振り分ける必要があります。また、定期的に質問を変更することを忘れないでください。',
	'QUESTION_DELETED'			=> '質問は削除されました',
	'QUESTION_LANG'				=> '言語',
	'QUESTION_LANG_EXPLAIN'		=> 'この質問が書かれた言語を選択します。',
	'QUESTION_SORT'				=> 'デフォルトの項目欄',
	'QUESTION_SORT_EXPLAIN'		=> 'デフォルトでどちらの欄に項目をまとめておくか設定します。',

	'COLUMN_LEFT'				=> '左の欄',
	'COLUMN_RIGHT'				=> '右の欄',
	'COLUMN_NAME'				=> '欄名',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> '例えば: 必要だと思うもの',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> '例えば: 必要でないと思うもの',

	'DEMO_QUESTION'				=> 'トマトスープには何が含まれていますか？',
	'DEMO_NAME_LEFT'			=> '鍋に入れるもの',
	'DEMO_NAME_RIGHT'			=> 'ポイするもの',
	'DEMO_OPTION_BANANAS'		=> 'バナナ',
	'DEMO_OPTION_TOMATOES'		=> 'トマト',
	'DEMO_OPTION_APPLES'		=> 'リンゴ',
	'DEMO_PREVIEW_ONLY'			=> 'プレビュー中は項目を動かす事ができません。',

	'QUESTION_TEXT'				=> '質問',
	'QUESTION_TEXT_EXPLAIN'		=> 'それぞれの欄にどのように振り分けるか説明します。',

	'SORTABLES_ERROR_MSG'		=> 'どちらの欄にも最低限1つの項目を入力してください。',
));
