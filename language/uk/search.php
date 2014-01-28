<?php
/**
*
* search [Ukrainian]
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
	'ALL_AVAILABLE'			=> 'Всі наявні',
	'ALL_RESULTS'			=> 'Всі дні',

	'DISPLAY_RESULTS'		=> 'Показувати результати як',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Знайдено %d результат',
		2	=> 'Знайдено %d результата',
		3	=> 'Знайдено %d результатів',
	),
	'FOUND_MORE_SEARCH_MATCHES'	=> array(
		1	=> 'Знайдено більше %d результата',
		2	=> 'Знайдено більше %d результатів',
		3	=> 'Знайдено більше %d результатів',
	),

	'GLOBAL'				=> 'Важлива',

	'IGNORED_TERMS'			=> 'проігноровані',
	'IGNORED_TERMS_EXPLAIN'	=> 'Наступні слова в пошуковому запиті були проігноровані, оскільки є занадто вживаними: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Перейти до повідомлення',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Ви повинні бути зареєстровані і авторизовані в системі для перегляду своїх повідомлень.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Ви повинні бути зареєстровані і авторизовані в системі для перегляду непрочитаних повідомлень.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Ви повинні бути зареєстровані в системі і авторизовані для перегляду нових повідомлень з моменту вашого останнього відвідування.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'  => array(
		1  => 'Ви вказали занадто багато слів для пошуку. Число таких слів не повинно перевищувати %1$d.',
		2  => 'Ви вказали занадто багато слів для пошуку. Число таких слів не повинно перевищувати %1$d.',
		3  => 'Ви вказали занадто багато слів для пошуку. Число таких слів не повинно перевищувати %1$d.',
	),
	
	'NO_KEYWORDS'			=> 'Для пошуку ви повинні ввести як мінімум одне слово. Довжина кожного слова має бути не менше %d і не більше %d символів, виключаючи символ шаблону *.',
	'NO_RECENT_SEARCHES'	=> 'За останній час пошукових запитів не було.',
	'NO_SEARCH'				=> 'Вибачте, але вам заборонено користуватися пошуком.',
	'NO_SEARCH_RESULTS'		=> 'Тем або повідомлень не знайдено.',
	'NO_SEARCH_TIME'		=> 'Ви не можете провести пошук відразу після попереднього. Будь ласка, спробуйте трохи пізніше.',
	'NO_SEARCH_UNREADS'		=> 'Вибачте, але пошук непрочитаних повідомлень відключений на даній конференції.',
	'WORD_IN_NO_POST'		=> 'Відповідних повідомлень не знайдено, оскільки слово <strong>%s</strong> ніде не зустрічається.',
	'WORDS_IN_NO_POST'		=> 'Відповідних повідомлень не знайдено, оскільки слово <strong>%s</strong> ніде не зустрічається.',

	'POST_CHARACTERS'		=> 'символів повідомлень',
	'PHRASE_SEARCH_DISABLED'	=> 'Пошук за точним збігом на даній конференції не підтримується.',

	'RECENT_SEARCHES'		=> 'Останні пошукові запити',
	'RESULT_DAYS'			=> 'Шукати повідомлення за',
	'RESULT_SORT'			=> 'Поле сортування',
	'RETURN_FIRST'			=> 'Показувати перші',
	'RETURN_TO_SEARCH_ADV'	=> 'Повернутись до розширеного пошуку',

	'SEARCHED_FOR'				=> 'Пошуковий запит',
	'SEARCHED_TOPIC'			=> 'Пошук в темі',
	'SEARCHED_QUERY'			=> 'Пошуковий запит',
	'SEARCH_ALL_TERMS'			=> 'Шукати всі слова',
	'SEARCH_ANY_TERMS'			=> 'Шукати будь-яке слово / пошук з мовою запитівв',
	'SEARCH_AUTHOR'				=> 'Пошук по автору',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Використовуйте * в якості шаблону.',
	'SEARCH_FIRST_POST'			=> 'Тільки в першому повідомленні теми',
	'SEARCH_FORUMS'				=> 'Шукати у форумах',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Виберіть форум або форуми, в яких буде проведений пошук. Пошук у підфорумах проводиться автоматично, якщо ви не відключили відповідну опцію нижче.',
	'SEARCH_IN_RESULTS'			=> 'Пошук у знайденому',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Ви можете використовувати <strong>+</strong>, щоб визначити слова, які повинні бути в результатах, і <strong>-</strong> для слів, яких в результатах бути не повинно. Ви можете розділити слова символом <strong>|</strong> для пошуку будь-якого слова зі списку. Використовуйте <strong>*</strong> в якості шаблону для часткового збігу.',
	'SEARCH_MSG_ONLY'			=> 'Тільки в текстах повідомлень',
	'SEARCH_OPTIONS'			=> 'Параметри запиту',
	'SEARCH_QUERY'				=> 'Запит',
	'SEARCH_SUBFORUMS'			=> 'Шукати у підфорумах',
	'SEARCH_TITLE_MSG'			=> 'У назвах тем і текстах повідомлень',
	'SEARCH_TITLE_ONLY'			=> 'Тільки за назвою теми',
	'SEARCH_WITHIN'				=> 'Шукати',
	'SORT_ASCENDING'			=> 'за зростанням',
	'SORT_AUTHOR'				=> 'Автор',
	'SORT_DESCENDING'			=> 'за зменшенням',
	'SORT_FORUM'				=> 'Форум',
	'SORT_POST_SUBJECT'			=> 'Тема повідомлення',
	'SORT_TIME'					=> 'Час створення',
	'SPHINX_SEARCH_FAILED'		=> 'Помилка пошуку: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'На жаль, пошук не може бути виконаний. Додаткова інформація міститься в журналі помилок.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Ви повинні вказати не менше %d символа імені автора.',
		2	=> 'Ви повинні вказати не менше %d символів імені автора.',
		3	=> 'Ви повинні вказати не менше %d символів імені автора.',
	),
));
