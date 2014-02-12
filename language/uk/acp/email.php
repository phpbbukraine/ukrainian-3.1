<?php
/**
*
* acp_email [Ukrainian]
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'За допомогою цієї форми ви можете надіслати електронне повідомлення всім користувачам або користувачам певної групи, <strong>мають включену опцію отримання електронних повідомлень</strong>. Для досягнення цього повідомлення буде відправлено з електронної адреси адміністратора і буде забезпечено прихованої копією для всіх одержувачів. За замовчуванням таке повідомлення включає максимум 50 одержувачів. Якщо одержувачів більше, то буде відправлено кілька повідомлень. Якщо ви відправляєте повідомлення великій групі людей, то ця дія може зайняти деякий час. Будь ласка, будьте терплячі і не зупиняйте завантаження сторінки після відправки повідомлення. Ви будете повідомлені про успішне завершення відправки.',
	'ALL_USERS'						=> 'Всім користувачам',

	'COMPOSE'				=> 'Повідомлення',

	'EMAIL_SEND_ERROR'		=> 'Сталися помилки під час відправки повідомлення. Подивіться %sлог помилок%s для отримання більш докладних відомостей про помилки.',
	'EMAIL_SENT'			=> 'Повідомлення надіслано.',
	'EMAIL_SENT_QUEUE'		=> 'Повідомлення поставлено в чергу для подальшого надсилання.',

	'LOG_SESSION'			=> 'Вести лог критичних помилок сеансу розсилки',

	'SEND_IMMEDIATELY'		=> 'Негайна відправка',
	'SEND_TO_GROUP'			=> 'Надіслати учасникам групи',
	'SEND_TO_USERS'			=> 'Надіслати користувачам',
	'SEND_TO_USERS_EXPLAIN'	=> 'Повідомлення буде надіслано зазначеним користувачам замість обраної вище групи. Вводите кожне ім\'я користувача на новому рядку.',

	'MAIL_BANNED'			=> 'Надіслати заблокованим користувачам',
	'MAIL_BANNED_EXPLAIN'	=> 'При масовій розсилці групі це налаштування, чи будуть email-повідомлення відправлені заблокованим користувачам.',
	'MAIL_HIGH_PRIORITY'	=> 'Високий',
	'MAIL_LOW_PRIORITY'		=> 'Низький',
	'MAIL_NORMAL_PRIORITY'	=> 'Звичайний',
	'MAIL_PRIORITY'			=> 'Приорітет розсилки',
	'MASS_MESSAGE'			=> 'Текст повідомлення',
	'MASS_MESSAGE_EXPLAIN'	=> 'Можна використовувати тільки звичайний текст. Вся розмітка буде видалена перед відправленням.',

	'NO_EMAIL_MESSAGE'		=> 'Необхідно ввести текст повідомлення',
	'NO_EMAIL_SUBJECT'		=> 'Необхідно вказати заголовок повідомлення',
));
