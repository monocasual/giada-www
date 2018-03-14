<?php
/**
*
* sortables captcha [Romanian]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) ciubex
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
	'CAPTCHA_SORTABLES'				=> 'CAPTCHA sortabil',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Muta optiunile in lista corecta, pentru evitarea inregistratilor automate.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Selecteaza optiunile de jos in lista corecta, pentru evitarea inregistrarilor automate.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Ai facut o selectie incorecta.',

	'QUESTION_ANSWERS'			=> 'Raspunsuri',
	'ANSWERS_EXPLAIN'			=> 'Optiunile pentru aceasta coloana. Scrie cate o optiune pe cate o linie.',
	'CONFIRM_QUESTION'			=> 'Intrebare',
	'CHANGES_SUBMIT'			=> 'Trimite schimbarile',

	'EDIT_QUESTION'				=> 'Editeaza intrebarea',
	'QUESTIONS'					=> 'Intrebari lista sortabila',
	'QUESTIONS_EXPLAIN'			=> 'Aici poti adauga si edita intrebarile folosite la inregistrarea noilor utilizatori. Pentru folosirea acestui plugin trebuie definita cel putin o intrebare pentru limba standard folosita de forum. Intrebarile trebuie sa fie usoare pentru utilizatorii ce urmeaza a folosi acest forum. Utilizatorii vor vedea toate optiunile intr-o coloana si vor trebui sa le sorteze corect in cealalta coloana. De asemenea, retine ca trebuie sa schimbi intrebarile regulat, pentru ca in timp acestea sunt \'invatate\' de roboti.',
	'QUESTION_DELETED'			=> 'Intrebare stearsa',
	'QUESTION_LANG'				=> 'Limba',
	'QUESTION_LANG_EXPLAIN'		=> 'Limba in care sunt scrise intrebarea si optiunile ei.',
	'QUESTION_SORT'				=> 'Lista sortata implicit',
	'QUESTION_SORT_EXPLAIN'		=> 'In ce coloana ar trebui sa afiseze toate raspunsurile in mod implicit.',

	'COLUMN_LEFT'				=> 'Coloana stanga',
	'COLUMN_RIGHT'				=> 'Coloana dreapta',
	'COLUMN_NAME'				=> 'Coloana nume',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Precum: Lucruri de care am nevoie',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Precum: Lucruri nefolositoare',

	'DEMO_QUESTION'				=> 'Ce ingrediente sunt pentru supa de rosii',
	'DEMO_NAME_LEFT'			=> 'In tigaie',
	'DEMO_NAME_RIGHT'			=> 'Arunca',
	'DEMO_OPTION_BANANAS'		=> 'Banane',
	'DEMO_OPTION_TOMATOES'		=> 'Rosii',
	'DEMO_OPTION_APPLES'		=> 'Mere',
	'DEMO_PREVIEW_ONLY'			=> 'Nu puteti muta optiunile intr-o previzualizare.',

	'QUESTION_TEXT'				=> 'Intrebare',
	'QUESTION_TEXT_EXPLAIN'		=> 'Explica cum trebuiesc sortate optiunile in coloane.',

	'SORTABLES_ERROR_MSG'		=> 'Completeaza toate campurile si introdu cel putin o optiune pentru amandoua coloanele.',
));
