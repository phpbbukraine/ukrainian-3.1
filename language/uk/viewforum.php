<?php
/**
*
* viewforum [Ukrainian]
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
	'ACTIVE_TOPICS'			=> 'Активні теми',
	'ANNOUNCEMENTS'			=> 'Оголошення',

	'FORUM_PERMISSIONS'		=> 'Права доступа',

	'ICON_ANNOUNCEMENT'		=> 'Оголошення',
	'ICON_STICKY'			=> 'Прикріплена',

	'LOGIN_NOTIFY_FORUM'	=> 'Ви отримали повідомлення про нове повідомлення в цьому форумі, будь ласка, авторизуйтесь для його перегляду.',

	'MARK_TOPICS_READ'		=> 'Відзначити всі теми прочитаними',

	'NEW_POSTS_HOT'			=> 'Нові повідомлення [ Популярна тема ]', // Більше не використовується
	'NEW_POSTS_LOCKED'		=> 'Нові повідомлення [ Тема закрита ]', // Більше не використовується
	'NO_NEW_POSTS_HOT'		=> 'Немає нових повідомлень [ Популярна тема ]', // Більше не використовується
	'NO_NEW_POSTS_LOCKED'	=> 'Немає нових повідомлень [ Тема закрита ]', // Більше не використовується
	'NO_UNREAD_POSTS_HOT'	=> 'Немає непрочитаних повідомлень [ Популярна тема ]',
	'NO_UNREAD_POSTS_LOCKED'=> 'Немає непрочитаних повідомлень [ Тема закрита ]',

	'POST_FORUM_LOCKED'		=> 'Форум закрито',

	'TOPICS_MARKED'			=> 'Всі теми в цьому форумі були відзначені як прочитані.',

	'UNREAD_POSTS_HOT'		=> 'Непрочитані повідомлення [ Популярна тема ]',
	'UNREAD_POSTS_LOCKED'	=> 'Непрочитані повідомлення [ Тема закрита ]',

	'NO_READ_ACCESS'		=> 'У вас немає доступу на читання тем у цьому форумі.',

	'VIEW_FORUM'			=> 'Перегляд форуму',
	'VIEW_FORUM_TOPIC'		=> '1 тема',
	'VIEW_FORUM_TOPICS'		=> array(
		1		=> '%d тема',
		2		=> '%d теми',
		3		=> '%d тем',
	),
));
