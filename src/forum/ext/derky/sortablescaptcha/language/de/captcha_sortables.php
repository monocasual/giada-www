<?php
/**
*
* sortables captcha [German]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) Chalong <http://www.chalong.de>
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
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Zieh die richtigen Optionen in die korrekte Liste. So werden automatisierte Registrierungen vermieden.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Sortiere die richtigen Optionen aus der folgenden Liste, um automatisierte Registrierungen zu vermeiden.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Deine Sortierung bei der Bestätigungsfrage war nicht richtig.',

	'QUESTION_ANSWERS'			=> 'Antworten',
	'ANSWERS_EXPLAIN'			=> 'Die Auswahlmöglichkeiten in dieser Spalte. Benutze für jede Option eine neue Zeile.',
	'CONFIRM_QUESTION'			=> 'Fragen',
	'CHANGES_SUBMIT'			=> 'Änderungen übernehmen',

	'EDIT_QUESTION'				=> 'Fragen bearbeiten',
	'QUESTIONS'					=> 'Fragen mit Auswahllisten',
	'QUESTIONS_EXPLAIN'			=> 'Hier kannst du Fragen, die bei der Registrierung gestellt werden sollen, hinzufügen und bearbeiten. Du musst mindestens eine Frage in der Standard-Bordsprache einstellen, um dieses Plugin zu benutzen. Die Fragen sollten für deine Zielgruppe einfach zu beantworten sein. Die Benutzer sehen alle Auswahlmöglichkeiten in einer Spalte und müssen diese in die richtige Spalte einordnen. Auch solltest du daran denken, die Fragen regelmässig zu ändern.',
	'QUESTION_DELETED'			=> 'Frage gelöscht',
	'QUESTION_LANG'				=> 'Sprache',
	'QUESTION_LANG_EXPLAIN'		=> 'Die Sprache in der die Frage und ihre möglichen Antworten formuliert wurde.',
	'QUESTION_SORT'				=> 'Standard-Auswahlliste',
	'QUESTION_SORT_EXPLAIN'		=> 'In welcher Spalte sollen die Antworten standardmässig stehen ?',

	'COLUMN_LEFT'				=> 'Linke Spalte',
	'COLUMN_RIGHT'				=> 'Rechte Spalte',
	'COLUMN_NAME'				=> 'Spaltenname',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Beispiel: Notwendige Dinge',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Beispiel: Unnötige Dinge',

	'DEMO_QUESTION'				=> 'Was wird für Tomatensuppe benötigt?',
	'DEMO_NAME_LEFT'			=> 'In den Topf',
	'DEMO_NAME_RIGHT'			=> 'Verwerfen',
	'DEMO_OPTION_BANANAS'		=> 'Bananen',
	'DEMO_OPTION_TOMATOES'		=> 'Tomaten',
	'DEMO_OPTION_APPLES'		=> 'Äpfel',
	'DEMO_PREVIEW_ONLY'			=> 'In der Vorschau kannst du nichts auswählen.',

	'QUESTION_TEXT'				=> 'Frage',
	'QUESTION_TEXT_EXPLAIN'		=> 'Erklärung für die Sortierung in der Spalte.',

	'SORTABLES_ERROR_MSG'		=> 'Bitte fülle alle Felder aus und gib mindestens eine Auswahlmöglichkeit für beide Spalten an.',
));
