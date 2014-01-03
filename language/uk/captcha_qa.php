<?php
/**
*
* captcha_qa [Ukrainian]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'CAPTCHA_QA'				=> 'Текстове підтвердження',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Це питання призначене для запобігання автоматичної відправки форм спам-ботами.',
	'CONFIRM_QUESTION_WRONG'	=> 'Ви дали неправильну відповідь на запитання.',

	'QUESTION_ANSWERS'			=> 'Відповіді',
	'ANSWERS_EXPLAIN'			=> 'Введіть правильні відповіді на запитання. Кожна відповідь вводите на окремому рядку.',
	'CONFIRM_QUESTION'			=> 'Питання',

	'ANSWER'					=> 'Відповідь',
	'EDIT_QUESTION'				=> 'Редагування питання',
	'QUESTIONS'					=> 'Запитання',
	'QUESTIONS_EXPLAIN'			=> 'При відправці форм, для яких включено текстове підтвердження, користувачеві буде запропонований один із зазначених тут питань. Для використання даного модуля повинен бути встановлений принаймні одне питання на мові за замовчуванням. Ці питання повинні бути прості для вашої потенційної аудиторії, але в той же час складні для бота, здатного знайти відповідь через пошук в Google™. Використання обширного і часто змінюваного набору питань дасть найкращі результати. Увімкніть сувору перевірку, якщо відповідь на ваше питання залежить від розділових знаків, пробілів або регістра символів.',
	'QUESTION_DELETED'			=> 'Питання видалено',
	'QUESTION_LANG'				=> 'Мова',
	'QUESTION_LANG_EXPLAIN'		=> 'Мова, на якому написані це питання і відповідь на нього.',
	'QUESTION_STRICT'			=> 'Сувора перевірка',
	'QUESTION_STRICT_EXPLAIN'	=> 'Якщо включено, при перевірці відповідей будуть враховуватися регістр символів, розділові знаки і пропуски.',

	'QUESTION_TEXT'				=> 'Питання',
	'QUESTION_TEXT_EXPLAIN'		=> 'Питання, яке буде задано користувачу.',

	'QA_ERROR_MSG'				=> 'Заповніть всі поля та введіть не менше однієї відповіді.',
 	'QA_LAST_QUESTION'			=> 'Не можна видалити всі питання, поки текстове підтвердження обрано в якості використовуваного на конференції.',

));
