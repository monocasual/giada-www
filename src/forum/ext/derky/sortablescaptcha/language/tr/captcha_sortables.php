<?php
/**
*
* sortables captcha [Turkish]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) ESQARE <http://phpbbturkey.com>
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
	'CAPTCHA_SORTABLES'				=> 'Sıralanabilir CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Otomatik kayıtları önlemek için lütfen seçenekleri doğru listeye sürükleyin.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Otomatik kayıtlatı önlemek için lütfen alttaki seçenekleri doğru liste için seçin.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Onay sorusunun ögelerini doğru listeye hatalı olarak sıraladınız.',

	'QUESTION_ANSWERS'			=> 'Cevaplar',
	'ANSWERS_EXPLAIN'			=> 'Bu sütun için seçenekler. Lütfen her satıra bir seçenek yazın.',
	'CONFIRM_QUESTION'			=> 'Soru',
	'CHANGES_SUBMIT'			=> 'Değişiklikleri gönder',

	'EDIT_QUESTION'				=> 'Soruyu Düzenle',
	'QUESTIONS'					=> 'Sıralanabilir Listeler Soruları',
	'QUESTIONS_EXPLAIN'			=> 'Buradan kayıt sırasında sorulacak olan soruları ekleyebilir ya da düzenleyebilirsiniz. Bu eklentiyi kullanabilmek için varsayılan mesaj panosunun dilinde en az bir soru belirlemelisiniz. Sorular hedef kitleniz için kolay olmalıdır. Kullanıcılar tüm seçenekleri bir sütun içerisinde göreceklerdir ve onları doğru listeye sıralamalıdırlar. Ayrıca, soruları düzenli olarak değiştirmeyi unutmayın.',
	'QUESTION_DELETED'			=> 'Soru silindi',
	'QUESTION_LANG'				=> 'Dil',
	'QUESTION_LANG_EXPLAIN'		=> 'Bu soru ve seçeneklerinin yazılacağı dil.',
	'QUESTION_SORT'				=> 'Varsayılan sıralama listesi',
	'QUESTION_SORT_EXPLAIN'		=> 'Varsayılan olarak cevapların hangi sütunda gösterilmesi gerektiğini belirleyin.',

	'COLUMN_LEFT'				=> 'Sol sütun',
	'COLUMN_RIGHT'				=> 'Sağ sütun',
	'COLUMN_NAME'				=> 'Sütun adı',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Ör: İhtiyacım olan şeyler',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Ör: İhtiyacım olmayan şeyler',

	'DEMO_QUESTION'				=> 'Domates çorbasının içerisine neler koyulur',
	'DEMO_NAME_LEFT'			=> 'Tenceredekiler',
	'DEMO_NAME_RIGHT'			=> 'Koyulacaklar',
	'DEMO_OPTION_BANANAS'		=> 'Muz',
	'DEMO_OPTION_TOMATOES'		=> 'Domates',
	'DEMO_OPTION_APPLES'		=> 'Elma',
	'DEMO_PREVIEW_ONLY'			=> 'Önizleme sırasında seçenekleri hareket ettiremezsiniz.',

	'QUESTION_TEXT'				=> 'Soru',
	'QUESTION_TEXT_EXPLAIN'		=> 'Seçeneklerin sütunların içerisinde nasıl sıralanmış olması gerektiğini açıklayın.',

	'SORTABLES_ERROR_MSG'		=> 'Lütfen her iki sütundaki tüm alanları doldurun ve en az bir seçenek girin.',
));
