<?php
/**
*
* acp_ban [Ukrainian]
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 година',
	'30_MINS'		=> '30 хвилин',
	'6_HOURS'		=> '6 годин',

	'ACP_BAN_EXPLAIN'	=> 'Тут ви можете заблокувати доступ користувачів по іменах, email або IP-адресами. Ці методи не дозволять користувачам потрапити ні в один з розділів конференції. При бажанні ви можете залишити короткий напис (до 3000 символів) з описом причини блокування, яка буде відображатися в балці адміністратора. Також можна вказати її тривалість. Якщо ви хочете, щоб блокування закінчилася в певний день, а не через установлений проміжок часу, то введіть дату в форматі <kbd>РРРР-ММ-ДД</kbd> під списком «Тривалість блокування», попередньо обравши в цьому списку опцію <span style="text-decoration: underline;">До дати</span>.',

	'BAN_EXCLUDE'			=> 'Додати в білий список',
	'BAN_LENGTH'			=> 'Тривалість блокування',
	'BAN_REASON'			=> 'Причина блокування доступу',
	'BAN_GIVE_REASON'		=> 'Причина, показувана користувачеві',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Чорний список успішно оновлений.',
	'BANNED_UNTIL_DATE'		=> 'до %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (до %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Заблокувати один або декілька адрес email',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Виключити введені адреси email з чорного списку.',
	'EMAIL_BAN_EXPLAIN'			=> 'Вводите кожну адресу на новому рядку. Використовуйте зірочку (*) як символи узагальнення для блокування групи однотипних адрес. Наприклад, <samp>*@gmail.com</samp>, <samp>*@*.domain.tld</samp> s т. д.',
	'EMAIL_NO_BANNED'			=> 'Чорний список адрес email порожній',
	'EMAIL_UNBAN'				=> 'Знову дозволити адреси email або видалити адреси з білого списку',
	'EMAIL_UNBAN_EXPLAIN'		=> 'За один раз можна розблокувати (або видалити з білого списку) декілька адрес, вибравши їх за допомогою відповідної комбінації миші та клавіатури вашого комп\'ютера і браузера. Адреси з білого списку виділені особливим кольором.',

	'IP_BAN'					=> 'Заблокувати доступ з одного або декількох IP-адрес',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Виключити введені IP-адреси з чорного списку.',
	'IP_BAN_EXPLAIN'			=> 'Вводите кожен IP-адресу або ім\'я вузла на новому рядку. Для вказівки діапазону IP-адрес відокремте його початок і кінець дефісом (-) або використовуйте зірочку (*) як символи узагальнення.',
	'IP_HOSTNAME'				=> 'IP-адреси або хости',
	'IP_NO_BANNED'				=> 'Чорний список IP-адрес порожній',
	'IP_UNBAN'					=> 'Розблокувати доступ з IP-адреси або видалити адреси з білого списку',
	'IP_UNBAN_EXPLAIN'			=> 'За один раз можна розблокувати (або видалити з білого списку) кілька IP-адрес, вибравши їх за допомогою відповідної комбінації миші та клавіатури вашого комп\'ютера і браузера. Адреси з білого списку виділені особливим кольором.',

	'LENGTH_BAN_INVALID'		=> 'Дата має бути у форматі <kbd>РРРР-ММ-ДД</kbd>.',

	'OPTIONS_BANNED'			=> 'Чорний список',
	'OPTIONS_EXCLUDED'			=> 'Білий список',

	'PERMANENT'		=> 'Безстроково',

	'UNTIL'						=> 'До дати',
	'USER_BAN'					=> 'Заблокувати доступ одному або декільком користувачам',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Виключити введених користувачів з чорного списку.',
	'USER_BAN_EXPLAIN'			=> 'Вводьте кожне ім\'я на новому рядку. Використовуйте посилання <span style="text-decoration: underline;">Знайти користувача</span> для пошуку і автоматичного додавання користувачів.',
	'USER_NO_BANNED'			=> 'Чорний список користувачів порожній',
	'USER_UNBAN'				=> 'Розблокувати доступ користувачам або видалити користувачів з білого списку',
	'USER_UNBAN_EXPLAIN'		=> 'За один раз можна розблокувати (або видалити з білого списку) кілька імен, вибравши їх за допомогою відповідної комбінації миші та клавіатури вашого комп\'ютера і браузера. Імена з білого списку виділені особливим кольором.',
));
