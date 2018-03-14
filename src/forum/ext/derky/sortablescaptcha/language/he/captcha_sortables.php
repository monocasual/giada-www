<?php
/**
*
* sortables captcha [Hebrew]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) Sawyer X
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
	'CAPTCHA_SORTABLES'				=> 'CAPTCHA מסודרת',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'אנא גרור את האפשרויות לרשימה הנכונה, בכדי להמנע מהרשמויות אוטומטיות.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'אנא גרור את האפשרויות מתחת לרשימה הנכונה, בכדי להמנע מהרשמויות אוטומטיות.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'סידרת לא נכון את הפריטים ברשימה הנכונה של שאלת האישור',

	'QUESTION_ANSWERS'			=> 'תשובות',
	'ANSWERS_EXPLAIN'			=> 'האופציות עבור עמוד זה. אנא כתבו אופציה בכל שורה.',
	'CONFIRM_QUESTION'			=> 'שאלה',
	'CHANGES_SUBMIT'			=> 'שמירת שינויים',

	'EDIT_QUESTION'				=> 'ערכו שאלה',
	'QUESTIONS'					=> 'שאלות ברשימה מסודרת',
	'QUESTIONS_EXPLAIN'			=> 'כאן נתן להוסיף ולערוך שאלות שישאלו בעת רישום. עליכם לספק לפחות שאלה אחת בלוח ברירת המחדל של השפות על מנת להשתמש בתוסף הזה. השאלות מוכרחות להיות קלות עבור קהל היעד שלכם/ן. המשתמשים/ות יראו את כל האופציות בעמוד אחד ויצטרכו לסדר אותם בעמוד המתאים. בנוסף, זכרו לשנות את האפשרויות מדי פעם.',
	'QUESTION_DELETED'			=> 'שאלה נמחקה',
	'QUESTION_LANG'				=> 'שפה',
	'QUESTION_LANG_EXPLAIN'		=> 'השפה עבור השאלה הזאת והאפשרויות שלה.',
	'QUESTION_SORT'				=> 'רשימת סידור ברירת מחדל',
	'QUESTION_SORT_EXPLAIN'		=> 'באיזה עמוד התשובות יופיעו כברירת מחדל.',

	'COLUMN_LEFT'				=> 'עמוד שמאלי',
	'COLUMN_RIGHT'				=> 'עמוד ימני',
	'COLUMN_NAME'				=> 'שם עמוד',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'דוגמא: דברים הנחוצים עבורי',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'דוגמא: דברים שאינם נחוצים עבורי',

	'DEMO_QUESTION'				=> 'מה לכלול במרק עגבניות',
	'DEMO_NAME_LEFT'			=> 'בסיר',
	'DEMO_NAME_RIGHT'			=> 'לשים בצד',
	'DEMO_OPTION_BANANAS'		=> 'בננות',
	'DEMO_OPTION_TOMATOES'		=> 'עגבניות',
	'DEMO_OPTION_APPLES'		=> 'תפוחים',
	'DEMO_PREVIEW_ONLY'			=> 'לא ניתן להזיז את האפשרויות בהדגמה.',

	'QUESTION_TEXT'				=> 'שאלה',
	'QUESTION_TEXT_EXPLAIN'		=> 'הסבירו כיצד האופציות צריכות להיות מסודרות בעמודים.',

	'SORTABLES_ERROR_MSG'		=> 'אנא מלאו את כל השדות והכניסו לפחות אופציה אחת עבור שני העמודים.',
));
