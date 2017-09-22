<?php
/**
*
* sortables captcha [Dutch]
*
* @copyright (c) Derky <http://www.derky.nl>
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
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Versleep de opties naar de juiste kolom, om automatische registraties te voorkomen.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Selecteer de opties hieronder bij de juiste kolom, om automatische registraties te voorkomen.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'De opties van de bevestigingsvraag zijn in de verkeerde kolommen gesorteerd.',

	'QUESTION_ANSWERS'			=> 'Antwoorden',
	'ANSWERS_EXPLAIN'			=> 'De opties voor deze kolom. Één optie per regel.',
	'CONFIRM_QUESTION'			=> 'Vraag',
	'CHANGES_SUBMIT'			=> 'Wijzigingen toepassen',

	'EDIT_QUESTION'				=> 'Bewerk vraag',
	'QUESTIONS'					=> 'Sortables Vragen',
	'QUESTIONS_EXPLAIN'			=> 'Hier kan je vragen toevoegen en aanpassen, die worden gevraagd bij de registratie. Je moet minimaal één vraag in de standaardtaal van het forum opgeven om deze plug-in te gebruiken. De vragen moeten simpel zijn voor je doelpubliek. De gebruikers zullen alle opties in één kolom zien, deze opties moeten ze dan sorteren naar de juiste kolommen. Vergeet niet regelmatig de vragen te veranderen.',
	'QUESTION_DELETED'			=> 'De vraag is verwijderd',
	'QUESTION_LANG'				=> 'Taal',
	'QUESTION_LANG_EXPLAIN'		=> 'De taal waarin deze vraag en de opties zijn geschreven',
	'QUESTION_SORT'				=> 'Standaard sorteren',
	'QUESTION_SORT_EXPLAIN'		=> 'In welke kolom moeten standaard, alle antwoorden komen te staan.',

	'COLUMN_LEFT'				=> 'Linkerkolom',
	'COLUMN_RIGHT'				=> 'Rechterkolom',
	'COLUMN_NAME'				=> 'Kolomnaam',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Bijv: Dit heb ik nodig',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Bijv: Dit heb ik niet nodig',

	'DEMO_QUESTION'				=> 'Wat heb je nodig voor tomatensoep',
	'DEMO_NAME_LEFT'			=> 'In de pan',
	'DEMO_NAME_RIGHT'			=> 'Gooi weg',
	'DEMO_OPTION_BANANAS'		=> 'Bananen',
	'DEMO_OPTION_TOMATOES'		=> 'Tomaten',
	'DEMO_OPTION_APPLES'		=> 'Appels',
	'DEMO_PREVIEW_ONLY'			=> 'Het is niet mogelijk de opties in het voorbeeld te verslepen.',

	'QUESTION_TEXT'				=> 'Vraag',
	'QUESTION_TEXT_EXPLAIN'		=> 'Leg uit in welke kolommen de opties gesorteerd moeten worden.',

	'SORTABLES_ERROR_MSG'		=> 'Vul alle velden in, en tenminste één optie voor beide kolommen.',
));
