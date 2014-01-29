<?php
/**
*
* acp_users [Ukrainian]
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
	'ADMIN_SIG_PREVIEW'		=> 'Попередній перегляд підпису',
	'AT_LEAST_ONE_FOUNDER'	=> 'Ви не можете знизити статус цього засновника до звичайного користувача. На конференції має бути принаймні один засновник. Якщо ви хочете змінити статус засновника для цього користувача, то спочатку зробіть засновником іншого користувача.',

	'BAN_ALREADY_ENTERED'	=> 'Раніше заборона вже був здійснений. Чорний список не оновлено.',
	'BAN_SUCCESSFUL'		=> 'Користувач успішно доданий до чорного списку.',
	'CANNOT_BAN_ANONYMOUS'	=> 'Ви не можете закрити доступ анонімному користувачу. Права доступу для гостей можуть бути задані на відповідній вкладці панелі адміністратора.',

	'CANNOT_BAN_FOUNDER'			=> 'Ви не можете закрити доступ засновникам.',
	'CANNOT_BAN_YOURSELF'			=> 'Ви не можете закрити доступ самому собі.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Ви не можете деактивувати облікові записи ботів. Деактивуйте бота на сторінці управління ботами.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Ви не можете деактивувати облікові записи засновників.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Ви не можете деактивувати власний обліковий запис.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Ви не можете вимагати повторної активації облікового запису бота. Повторно активуйте бота на сторінці управління ботами.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Ви не можете вимагати повторної активації облікового запису засновника.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Ви не можете вимагати повторної активації власного облікового запису.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Ви не можете видалити обліковий запис гостя.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Ви не можете видалити власний обліковий запис.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Ви не можете зробити ігнорованих користувачів засновниками.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Ви повинні активувати користувачів, щоб зробити їх засновниками. Тільки активованим користувачам можна підвищити статус.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Це поле необхідно заповнити тільки якщо ви змінили email-адрес користувача.',

	'DELETE_POSTS'			=> 'Видалити повідомлення',
	'DELETE_USER'			=> 'Видалити користувача',
	'DELETE_USER_EXPLAIN'	=> 'Врахуйте, що видалення користувача не можна буде зупинити, він не може бути відновлений. Непрочитані приватні повідомлення, відправлені даними користувачем, також будуть видалені і не будуть доступні одержувачам.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Примусова повторна активація успішно проведена.',
	'FOUNDER'						=> 'Засновник',
	'FOUNDER_EXPLAIN'				=> 'Засновники мають всі права адміністратора і не можуть бути обмежені в доступі (заблоковані), видалені або знижені в статусі.',

	'GROUP_APPROVE'					=> 'Схвалити користувача',
	'GROUP_DEFAULT'					=> 'Задати для користувача групу за замовчуванням',
	'GROUP_DELETE'					=> 'Видалити користувача з групи',
	'GROUP_DEMOTE'					=> 'Знято лідера групи',
	'GROUP_PROMOTE'					=> 'Призначити лідером групи',

	'IP_WHOIS_FOR'			=> 'Про IP %s',

	'LAST_ACTIVE'			=> 'Останнє відвідування',

	'MOVE_POSTS_EXPLAIN'	=> 'Виберіть форум, в який ви хочете перемістити всі повідомлення даного користувача.',

	'NO_SPECIAL_RANK'		=> 'Спеціального звання не присвоєно',
	'NO_WARNINGS'			=> 'Немає попереджень.',
	'NOT_MANAGE_FOUNDER'	=> 'Ви спробували керувати своїм обліковим записом користувача зі статусом засновника. Тільки засновники можуть керувати обліковими записами інших засновників.',

	'QUICK_TOOLS'			=> 'Швидкі дії',

	'REGISTERED'			=> 'Зареєстрований',
	'REGISTERED_IP'			=> 'Зареєстрований з IP-адреси',
	'RETAIN_POSTS'			=> 'Залишити повідомлення',

	'SELECT_FORM'			=> 'Вибрати форму',
	'SELECT_USER'			=> 'Вибрати користувача',

	'USER_ADMIN'					=> 'Управління користувачами',
	'USER_ADMIN_ACTIVATE'			=> 'Активувати обліковий запис',
	'USER_ADMIN_ACTIVATED'			=> 'Користувач успішно активований.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Аватар користувача успішно видалено.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Заборонити email-адрес',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Email-адреси, заборонені через управління користувачами',
	'USER_ADMIN_BAN_IP'				=> 'Заборонити IP-адрес',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP-адреса, заборонені через управління користувачами',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Імена, заборонені через систему управління користувачами',
	'USER_ADMIN_BAN_USER'			=> 'Заборонити ім\'я користувача',
	'USER_ADMIN_DEACTIVATE'			=> 'Деактивувати обліковий запис',
	'USER_ADMIN_DEACTIVED'			=> 'Користувач успішно деактивований.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Видалити всі вкладення',
	'USER_ADMIN_DEL_AVATAR'			=> 'Видалити аватару',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Очистити папку «Вихідні»',
	'USER_ADMIN_DEL_POSTS'			=> 'Видалити всі повідомлення',
	'USER_ADMIN_DEL_SIG'			=> 'Видалити підпис',
	'USER_ADMIN_EXPLAIN'			=> 'Тут ви можете змінювати інформацію про користувачів і деякі спеціальні настройки.',
	'USER_ADMIN_FORCE'				=> 'Примусова повторна активація',
	'USER_ADMIN_LEAVE_NR'			=> 'Видалити з групи «Нові користувачі»',
	'USER_ADMIN_MOVE_POSTS'			=> 'Перемістити всі повідомлення',
	'USER_ADMIN_SIG_REMOVED'		=> 'Підпис користувача успішно видалено.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Всі додаткові файли даного користувача успішно видалено.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Аватар не може бути відображений, оскільки аватари заборонені.',
	'USER_AVATAR_UPDATED'			=> 'Інформація про аватар користувача успішно оновлено.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Поточний аватар не може бути відображений, оскільки її тип заборонений.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Додаткові поля профілю',
	'USER_DELETED'					=> 'Користувач успішно видалений.',
	'USER_GROUP_ADD'				=> 'Додати користувача до групи',
	'USER_GROUP_NORMAL'				=> 'Створені групи, в які входить користувач',
	'USER_GROUP_PENDING'			=> 'Групи, в яких користувач є кандидатом',
	'USER_GROUP_SPECIAL'			=> 'Попередньо встановлені групи, в які входить користувач',
	'USER_LIFTED_NR'				=> 'Користувач успішно видалений з групи знову зареєстрованих користувачів',
	'USER_NO_ATTACHMENTS'			=> 'Вкладення відсутні.',
	'USER_NO_POSTS_TO_DELETE'			=> 'Відсутні повідомлення, що належать користувачеві.',
	'USER_OUTBOX_EMPTIED'			=> 'Папка «Вихідні» цього користувача успішно очищена.',
	'USER_OUTBOX_EMPTY'				=> 'Папка «Вихідні» цього користувача порожня.',
	'USER_OVERVIEW_UPDATED'			=> 'Інформація користувача оновлена.',
	'USER_POSTS_DELETED'			=> 'Всі повідомлення даного користувача успішно видалені.',
	'USER_POSTS_MOVED'				=> 'Повідомлення користувача успішно переміщені в зазначений форум.',
	'USER_PREFS_UPDATED'			=> 'Налаштування користувача оновлені.',
	'USER_PROFILE'					=> 'Профіль користувача',
	'USER_PROFILE_UPDATED'			=> 'Профіль користувача оновлений.',
	'USER_RANK'						=> 'Звання користувача',
	'USER_RANK_UPDATED'				=> 'Звання користувача оновлено.',
	'USER_SIG_UPDATED'				=> 'Підпис користувача успішно оновлено.',
	'USER_WARNING_LOG_DELETED'		=> 'Інформація недоступна. Можливо, цей запис було видалено з журналу.',
	'USER_TOOLS'					=> 'Основні інструменти',
));
