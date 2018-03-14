<?php
/**
*
* sortables captcha [Catalan]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) Juan_CAT <http://joanjerez.wordpress.com>
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
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Per favor, arrossega les opcions a la llista correcta, per a evitar registres automàtics.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Per favor selecciona les opcions d\'abaix a la llista correcta per evitar registres automàtics.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Tens mal ordenats els elements a la llista correcta de la pregunta de confirmació.',

	'QUESTION_ANSWERS'			=> 'Respostes',
	'ANSWERS_EXPLAIN'			=> 'Les opcions per aquesta columna. Per favor, escriu una opció per línia.',
	'CONFIRM_QUESTION'			=> 'Pregunta',
	'CHANGES_SUBMIT'			=> 'Enviar els canvis',

	'EDIT_QUESTION'				=> 'Editar la pregunta',
	'QUESTIONS'					=> 'Preguntes sobre llistes de classificació',
	'QUESTIONS_EXPLAIN'			=> 'Aquí pots afegir i editar les qüestions que se li poden preguntar en el registre. Has de proporcionar almenys una pregunta en l\'idioma per defecte del fòrum per utilitzar aquest complement. Les preguntes han de ser fàcils per al seu públic objectiu. Els usuaris veuran totes les opcions en una columna i ha d\'ordenar-les a la columna correcta. A més, recordi canviar les preguntes amb regularitat.',
	'QUESTION_DELETED'			=> 'Pregunta esborrada',
	'QUESTION_LANG'				=> 'Llengua',
	'QUESTION_LANG_EXPLAIN'		=> 'Llengua en la qual aquesta pregunta i les seves opciones estan escrites.',
	'QUESTION_SORT'				=> 'Llista de classificació per defecte',
	'QUESTION_SORT_EXPLAIN'		=> 'En quina columna s\'haurien de mostrar totes les respostes per defecte.',

	'COLUMN_LEFT'				=> 'Columna esquerra',
	'COLUMN_RIGHT'				=> 'Columna dreta',
	'COLUMN_NAME'				=> 'Nom de la columna',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Com: Coses que necessito',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Com: Coses que no necessito',

	'DEMO_QUESTION'				=> 'Què s\'ha d\'incloure per una sopa de tomàquet?',
	'DEMO_NAME_LEFT'			=> 'A la paella',
	'DEMO_NAME_RIGHT'			=> 'Llençar',
	'DEMO_OPTION_BANANAS'		=> 'Plàtans',
	'DEMO_OPTION_TOMATOES'		=> 'Tomàquets',
	'DEMO_OPTION_APPLES'		=> 'Pomes',
	'DEMO_PREVIEW_ONLY'			=> 'No pots moure la opcions en una previsualització.',

	'QUESTION_TEXT'				=> 'Pregunta',
	'QUESTION_TEXT_EXPLAIN'		=> 'Explica com s\'haurien d\'ordenar les opcions en les columnes.',

	'SORTABLES_ERROR_MSG'		=> 'Per favor, omple tots els camps i introdueix al menys una opció per ambdues columnes.',
));
