<?php
/**
*
* sortables captcha [Italian]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) etms51
* @copyright (c) MaFeSa
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
	'CAPTCHA_SORTABLES'				=> 'CAPTCHA ordinabili',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Per evitare registrazioni automatiche, trascinare le opzioni nell’elenco corretto.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Per evitare registrazioni automatiche, selezionare le opzioni dell’elenco corretto.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Verificare l’ordine degli oggetti.',

	'QUESTION_ANSWERS'			=> 'Risposte',
	'ANSWERS_EXPLAIN'			=> 'L’opzione per questa colonna. Scrivere un’opzione per linea.',
	'CONFIRM_QUESTION'			=> 'Domanda',
	'CHANGES_SUBMIT'			=> 'Applica modifiche',

	'EDIT_QUESTION'				=> 'Modifica domanda',
	'QUESTIONS'					=> 'Elenco domande ordinabili',
	'QUESTIONS_EXPLAIN'			=> 'Qui è possibile aggiungere e modificare le domande per la registrazione. Per poter usare questo plugin è necessario fornire almeno una domanda nella lingua predefinita della board. Le domande devono essere semplici per i potenziali utenti. Gli utenti vedranno tutte le opzioni in una colonna e avranno la possibilità di ordinare nella colonna corretta. Inoltre, non dimenticare di cambiare le domande regolarmente.',
	'QUESTION_DELETED'			=> 'Domanda rimossa',
	'QUESTION_LANG'				=> 'Lingua',
	'QUESTION_LANG_EXPLAIN'		=> 'La lingua in cui sono scritte questa domanda e le opzioni di risposta.',
	'QUESTION_SORT'				=> 'Elenco ordinabile predefinito',
	'QUESTION_SORT_EXPLAIN'		=> 'La colonna in cui sono mostrate le opzioni per impostazione predefinita.',

	'COLUMN_LEFT'				=> 'Colonna sinistra',
	'COLUMN_RIGHT'				=> 'Colonna destra',
	'COLUMN_NAME'				=> 'Nome colonna',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Es.: “Oggetti di cui ho bisogno”',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Es.: “Oggetti di cui non ho bisogno”',

	'DEMO_QUESTION'				=> 'L’ingrediente per il sugo di pomodoro',
	'DEMO_NAME_LEFT'			=> 'In padella',
	'DEMO_NAME_RIGHT'			=> 'Butta via',
	'DEMO_OPTION_BANANAS'		=> 'Banane',
	'DEMO_OPTION_TOMATOES'		=> 'Pomodori',
	'DEMO_OPTION_APPLES'		=> 'Mele',
	'DEMO_PREVIEW_ONLY'			=> 'Non è possibile spostare le opzioni nell’anteprima.',

	'QUESTION_TEXT'				=> 'Domanda',
	'QUESTION_TEXT_EXPLAIN'		=> 'Spiega in che modo le opzioni devono essere ordinate nelle colonne.',

	'SORTABLES_ERROR_MSG'		=> 'Compilare tutti i campi e inserire almeno un’opzione per entrambe le colonne.',
));
