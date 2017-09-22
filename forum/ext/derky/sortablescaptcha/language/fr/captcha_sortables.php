<?php
/**
*
* sortables captcha [French]
*
* @copyright (c) Derky <http://www.derky.nl>
* @copyright (c) Maël Soucaze <http://mael.soucaze.com/>
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
	'CAPTCHA_SORTABLES'				=> 'CAPTCHA à trier',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Veuillez faire glisser les différentes réponses possibles dans la liste appropriée. Ceci est une mesure permettant de lutter contre les inscriptions automatisées.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Veuillez sélectionner ci-dessous les différentes réponses qui correspondent à la liste appropriée. Ceci est une mesure permettant de lutter contre les inscriptions automatisées.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Vous avez trié de manière incorrecte les réponses lors de la question de confirmation.',

	'QUESTION_ANSWERS'			=> 'Réponses',
	'ANSWERS_EXPLAIN'			=> 'Correspond aux choix appartenant à cette colonne. Veuillez rédiger un choix par ligne.',
	'CONFIRM_QUESTION'			=> 'Question',
	'CHANGES_SUBMIT'			=> 'Envoyer les modifications',

	'EDIT_QUESTION'				=> 'Éditer la question',
	'QUESTIONS'					=> 'Questions des listes à trier',
	'QUESTIONS_EXPLAIN'			=> 'Vous pouvez ajouter et éditer ici les questions qui seront posées lors de l’inscription. Vous devez rédiger au moins une question dans la langue par défaut du forum afin d’utiliser ce plugin. Les questions devraient, pour plus de facilité, être en rapport avec votre audience. Les utilisateurs verront tous les choix dans une colonne et devront les trier dans la colonne correspondante. N’oubliez pas de modifier régulièrement les questions.',
	'QUESTION_DELETED'			=> 'Question supprimée',
	'QUESTION_LANG'				=> 'Langue',
	'QUESTION_LANG_EXPLAIN'		=> 'La langue dans laquelle cette question et ses réponses sont rédigées.',
	'QUESTION_SORT'				=> 'Liste de tri par défaut',
	'QUESTION_SORT_EXPLAIN'		=> 'Correspond à la colonne dans laquelle toutes les réponses seront affichées par défaut.',

	'COLUMN_LEFT'				=> 'Colonne de gauche',
	'COLUMN_RIGHT'				=> 'Colonne de droite',
	'COLUMN_NAME'				=> 'Nom de la colonne',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Exemple : les choses que je veux',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Exemple : les choses que je ne veux pas',

	'DEMO_QUESTION'				=> 'Qu’est-ce qui compose une soupe à la tomate ?',
	'DEMO_NAME_LEFT'			=> 'À cuisiner',
	'DEMO_NAME_RIGHT'			=> 'À jeter',
	'DEMO_OPTION_BANANAS'		=> 'Bananes',
	'DEMO_OPTION_TOMATOES'		=> 'Tomates',
	'DEMO_OPTION_APPLES'		=> 'Pommes',
	'DEMO_PREVIEW_ONLY'			=> 'Vous ne pouvez pas déplacer les différents réponses lorsque vous êtes dans une prévisualisation.',

	'QUESTION_TEXT'				=> 'Question',
	'QUESTION_TEXT_EXPLAIN'		=> 'Donne aux utilisateurs la solution pour trier les différentes réponses dans les colonnes.',

	'SORTABLES_ERROR_MSG'		=> 'Veuillez remplir tous les champs et saisir au moins une réponse toutes les deux colonnes.',
));
