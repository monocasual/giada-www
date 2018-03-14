<?php
/**
*
* sortables captcha [Brazilian Portuguese]
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
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Por favor, arraste as opções para à lista correta para evitar registros automáticos.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Por favor, selecione as opções abaixo para à lista correta para evitar registros automáticos.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Você classificou incorretamente os itens para à lista correta da pergunta da confirmação.',

	'QUESTION_ANSWERS'			=> 'Respostas',
	'ANSWERS_EXPLAIN'			=> 'As opções para esta coluna. Por favor, escreva uma opção por linha.',
	'CONFIRM_QUESTION'			=> 'Questões',
	'CHANGES_SUBMIT'			=> 'Enviar alterações',

	'EDIT_QUESTION'				=> 'Editar Questão',
	'QUESTIONS'					=> 'Lista de Questões Classificáveis',
	'QUESTIONS_EXPLAIN'			=> 'Aqui você pode adicionar e editar as questões que serão feitas no registro. Você precisa fornecer pelo menos uma questão no idioma padrão do fórum para usar esse plugin. As questões devem ser fáceis para o seu público alvo. Os usuários verão todas as opções em uma coluna e precisam classificé-las para à coluna correta. Além disso, lembre-se de alterar as questões regularmente.',
	'QUESTION_DELETED'			=> 'Questão excluida',
	'QUESTION_LANG'				=> 'Idioma',
	'QUESTION_LANG_EXPLAIN'		=> 'O idioma desta pergunta e suas opções está escrito em.',
	'QUESTION_SORT'				=> 'Lista de classificação padrão',
	'QUESTION_SORT_EXPLAIN'		=> 'Qual coluna deve exibir todas as respostas por padrão.',

	'COLUMN_LEFT'				=> 'Coluna esquerda',
	'COLUMN_RIGHT'				=> 'Coluna direita',
	'COLUMN_NAME'				=> 'Nome da coluna',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Exemplo: Coisas que preciso',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Exemplo: Coisas que não preciso',

	'DEMO_QUESTION'				=> 'O que incluir na sopa de tomate',
	'DEMO_NAME_LEFT'			=> 'Na panela',
	'DEMO_NAME_RIGHT'			=> 'Desperdiçar',
	'DEMO_OPTION_BANANAS'		=> 'Bananas',
	'DEMO_OPTION_TOMATOES'		=> 'Tomates',
	'DEMO_OPTION_APPLES'		=> 'Maças',
	'DEMO_PREVIEW_ONLY'			=> 'Você não pode mover as opções em uma prévia.',

	'QUESTION_TEXT'				=> 'Questão',
	'QUESTION_TEXT_EXPLAIN'		=> 'Explique como as opções devem classificadas nas colunas.',

	'SORTABLES_ERROR_MSG'		=> 'Por favor, preencha todos os campos e insira pelo menos uma opção para ambas as colunas.',
));
