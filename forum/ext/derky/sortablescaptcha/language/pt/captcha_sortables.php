<?php
/**
*
* sortables captcha [Portuguese]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) Pavlov
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
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Por favor, arraste com as opções para a lista correta, para evitar registos automáticos.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Por favor, coloque as opções abaixo na lista correta, para evitar registos automáticos.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Classificou incorretamente os itens para a lista correta, segundo a questão de confirmação.',

	'QUESTION_ANSWERS'			=> 'Respostas',
	'ANSWERS_EXPLAIN'			=> 'As opções para esta coluna. Por favor, escreva uma opção por linha.',
	'CONFIRM_QUESTION'			=> 'Perguntas',
	'CHANGES_SUBMIT'			=> 'Aplicar alterações',

	'EDIT_QUESTION'				=> 'Editar Pergunta',
	'QUESTIONS'					=> 'Lista de Perguntas de Classificação',
	'QUESTIONS_EXPLAIN'			=> 'Aqui pode adicionar e editar as perguntas a serem feitas no registo. Tem que fornecer, pelo menos, uma pergunta no idioma predefinido do fórum para usar este extra. As perguntas devem ser fáceis para o seu público-alvo. Os utilizadores irão ver todas as opções numa coluna e tem que classificá-las para a coluna correta. Não se esqueça de mudar as perguntas regularmente.',
	'QUESTION_DELETED'			=> 'Pergunta apagada',
	'QUESTION_LANG'				=> 'Idioma',
	'QUESTION_LANG_EXPLAIN'		=> 'O idioma desta pergunta e as opções, estão escritas aqui.',
	'QUESTION_SORT'				=> 'Lista de classificação predefinida.',
	'QUESTION_SORT_EXPLAIN'		=> 'Coluna predefinida para exibir todas as respostas.',

	'COLUMN_LEFT'				=> 'Coluna esquerda',
	'COLUMN_RIGHT'				=> 'Coluna direita',
	'COLUMN_NAME'				=> 'Nome da coluna',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Exemplo: Coisas que eu preciso',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Exemplo: Coisas que eu não preciso',

	'DEMO_QUESTION'				=> 'O que leva a sopa de tomate',
	'DEMO_NAME_LEFT'			=> 'Na panela',
	'DEMO_NAME_RIGHT'			=> 'Deitar fora',
	'DEMO_OPTION_BANANAS'		=> 'Bananas',
	'DEMO_OPTION_TOMATOES'		=> 'Tomate',
	'DEMO_OPTION_APPLES'		=> 'Maças',
	'DEMO_PREVIEW_ONLY'			=> 'Não pode mover as opções na pré-visualização.',

	'QUESTION_TEXT'				=> 'Pergunta',
	'QUESTION_TEXT_EXPLAIN'		=> 'Explica como as opções devem ser classificadas nas colunas',

	'SORTABLES_ERROR_MSG'		=> 'Por favor, preencha todos os campos e inserira pelo menos uma opção em cada colunas.',
));
