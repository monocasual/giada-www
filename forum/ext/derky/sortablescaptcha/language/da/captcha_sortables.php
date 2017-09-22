<?php
/**
*
* sortables captcha [Danish]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) AlleyKat <http://phpbb2.dk>
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
	'CAPTCHA_SORTABLES'				=> 'Sorterings-CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Træk mulighederne til den korrekte liste, for at undgå automatiserede tilmeldinger.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Vælg fra nedenstående muligheder herunder til den korrekte liste for at undgå automatiserede tilmeldinger.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Du har ikke sorteret mulighederne til den korrekte liste i bekræftelses-spørgsmålet.',

	'QUESTION_ANSWERS'			=> 'Svar',
	'ANSWERS_EXPLAIN'			=> 'Muligheder for denne kolonne. Skriv én mulighed pr. linje.',
	'CONFIRM_QUESTION'			=> 'Spørgsmål',
	'CHANGES_SUBMIT'			=> 'Indsend ændringer',

	'EDIT_QUESTION'				=> 'Redigér spørgsmål',
	'QUESTIONS'					=> 'Sortérbare Lister spørgsmål',
	'QUESTIONS_EXPLAIN'			=> 'Her kan du tilføje og redigere spørgsmål der skal stilles ved tilmelding. Du skal angive mindst ét spørgsmål i standardsproget for dit forum for at kunne bruge denne plugin. Spørgsmål bør være nemme at besvare for dit mål-publikum. Brugerne vil kunne se alle mulighederne en kolonne og skal sortere dem til den rette kolonne. Husk også at skifte spørgsmål regelmæssigt.',
	'QUESTION_DELETED'			=> 'Spørgsmål slettet',
	'QUESTION_LANG'				=> 'Sprog',
	'QUESTION_LANG_EXPLAIN'		=> 'Sproget som dette spørgsmål og dets svar er skrevet i.',
	'QUESTION_SORT'				=> 'Standard sorteringskolonne',
	'QUESTION_SORT_EXPLAIN'		=> 'I hvilken kolonne skal alle svar vises som standard.',

	'COLUMN_LEFT'				=> 'Venstre kolonne',
	'COLUMN_RIGHT'				=> 'Højre kolonne',
	'COLUMN_NAME'				=> 'Kolonnenavn',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'F.eks.: Ting jeg har brug for',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'F.eks.: Ting jeg ikke har brug for',

	'DEMO_QUESTION'				=> 'Hvilke ingredienser i tomatsuppe',
	'DEMO_NAME_LEFT'			=> 'I gryden',
	'DEMO_NAME_RIGHT'			=> 'Smid væk',
	'DEMO_OPTION_BANANAS'		=> 'Bananer',
	'DEMO_OPTION_TOMATOES'		=> 'Tomater',
	'DEMO_OPTION_APPLES'		=> 'Æbler',
	'DEMO_PREVIEW_ONLY'			=> 'Du kan ikke flytte på mulighederne i forhåndsvisning.',

	'QUESTION_TEXT'				=> 'Spørgsmål',
	'QUESTION_TEXT_EXPLAIN'		=> 'Forklar hvordan mulighederne skal sorteres i kolonnerne.',

	'SORTABLES_ERROR_MSG'		=> 'Udfyld venligst alle felter og indtast mindst én mulighed for begge kolonner.',
));
