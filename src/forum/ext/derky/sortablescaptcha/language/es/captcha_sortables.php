<?php
/**
*
* sortables captcha [Spanish]
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
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Por favor, arrastra las opciones a la lista correcta, para evitar registros automáticos.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Por favor, selecciona las opciones de abajo a la lista correcta para evitar registros automáticos.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Tienes mal ordenados los elementos en la lista correcta de la pregunta de confirmación.',

	'QUESTION_ANSWERS'			=> 'Respuestas',
	'ANSWERS_EXPLAIN'			=> 'Las opciones para esta columna. Por favor, escribe una opción por línea.',
	'CONFIRM_QUESTION'			=> 'Pregunta',
	'CHANGES_SUBMIT'			=> 'Enviar cambios',

	'EDIT_QUESTION'				=> 'Editar pregunta',
	'QUESTIONS'					=> 'Preguntas sobre listas de clasificación',
	'QUESTIONS_EXPLAIN'			=> 'Aquí puedes agregar y editar las cuestiones a preguntar en el registro. Usted tiene que proporcionar al menos una pregunta en el idioma por defecto del foro para utilizar este plugin. Las preguntas deben ser fáciles para su público objetivo. Los usuarios verán todas las opciones en una columna y tienen que ordenarlas a la columna correcta. Además, recuerde cambiar las preguntas con regularidad.',
	'QUESTION_DELETED'			=> 'Pregunta eliminada',
	'QUESTION_LANG'				=> 'Idioma',
	'QUESTION_LANG_EXPLAIN'		=> 'El idioma en el cual esta pregunta y sus opciones están escritas.',
	'QUESTION_SORT'				=> 'Lista de clasificación por defecto',
	'QUESTION_SORT_EXPLAIN'		=> 'En qué columna deberían mostrarse todas las respuestas por defecto.',

	'COLUMN_LEFT'				=> 'Columna izquierda',
	'COLUMN_RIGHT'				=> 'Columna derecha',
	'COLUMN_NAME'				=> 'Nombre de la columna',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Como: Cosas que necesito',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Como: Cosas que no necesito',

	'DEMO_QUESTION'				=> '¿Qué hay que incluir para una sopa de tomate?',
	'DEMO_NAME_LEFT'			=> 'En la paella',
	'DEMO_NAME_RIGHT'			=> 'Tirar',
	'DEMO_OPTION_BANANAS'		=> 'Bananas',
	'DEMO_OPTION_TOMATOES'		=> 'Tomates',
	'DEMO_OPTION_APPLES'		=> 'Manzanas',
	'DEMO_PREVIEW_ONLY'			=> 'No puedes mover las opciones en una previsualización.',

	'QUESTION_TEXT'				=> 'Pregunta',
	'QUESTION_TEXT_EXPLAIN'		=> 'Explica cómo se deberían ordenar las opciones en las columnas.',

	'SORTABLES_ERROR_MSG'		=> 'Por favor, rellena todos los campos y introduce al menos una opción para las dos columnas.',
));
