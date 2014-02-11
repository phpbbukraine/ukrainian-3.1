<?php
/**
*
* acp_permissions (phpBB Permission Set) [Ukrainian]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/


$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Дії',
	'ACL_CAT_CONTENT'		=> 'Вміст',
	'ACL_CAT_FORUMS'		=> 'Форуми',
	'ACL_CAT_MISC'			=> 'Різне',
	'ACL_CAT_PERMISSIONS'	=> 'Права доступа',
	'ACL_CAT_PM'			=> 'Приватні повідомлення',
	'ACL_CAT_POLLS'			=> 'Опитування',
	'ACL_CAT_POST'			=> 'Розміщення повідомлень',
	'ACL_CAT_POST_ACTIONS'	=> 'Дії з повідомленнями',
	'ACL_CAT_POSTING'		=> 'Повідомлення',
	'ACL_CAT_PROFILE'		=> 'Профіль',
	'ACL_CAT_SETTINGS'		=> 'Параметри',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Дії з темами',
	'ACL_CAT_USER_GROUP'	=> 'Користувачі',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=>  'Може переглядати профілі, список користувачів і сторінку «Хто зараз на конференції»', 
	'ACL_U_CHGNAME'		=>  'Може змінювати ім\'я', 
	'ACL_U_CHGPASSWD'	=>  'Може змінювати пароль', 
	'ACL_U_CHGEMAIL'	=>  'Може змінювати email-адресу', 
	'ACL_U_CHGAVATAR'	=>  'Може змінювати аватар', 
	'ACL_U_CHGGRP'		=>  'Може змінювати групу за замовчуванням', 
	'ACL_U_CHGPROFILEINFO'	=>  'Може змінювати інформацію в полях профілю', 

	'ACL_U_ATTACH'		=>  'Може прикріплювати вкладення', 
	'ACL_U_DOWNLOAD'	=>  'Може завантажувати файли', 
	'ACL_U_SAVEDRAFTS'	=>  'Може зберігати чернетки', 
	'ACL_U_CHGCENSORS'	=>  'Може відключати автоцензор', 
	'ACL_U_SIG'			=>  'Може використовувати підпис', 

	'ACL_U_SENDPM'		=>  'Може надсилати ПП', 
	'ACL_U_MASSPM'		=>  'Може розсилати ПП декільком користувачам', 
	'ACL_U_MASSPM_GROUP'=>  'Може розсилати ПП групам користувачів', 
	'ACL_U_READPM'		=>  'Може читати ПП', 
	'ACL_U_PM_EDIT'		=>  'Може редагувати власні ПП', 
	'ACL_U_PM_DELETE'	=>  'Може видаляти ПП зі своїх папок', 
	'ACL_U_PM_FORWARD'	=>  'Може пересилати ПП', 
	'ACL_U_PM_EMAILPM'	=>  'Може відправляти ПП по email', 
	'ACL_U_PM_PRINTPM'	=>  'Може роздруковувати ПП', 
	'ACL_U_PM_ATTACH'	=>  'Може прикріплювати вкладення в ПП', 
	'ACL_U_PM_DOWNLOAD'	=>  'Може завантажувати файли з ПП', 
	'ACL_U_PM_BBCODE'	=>  'Може використовувати BBCode в ПП', 
	'ACL_U_PM_SMILIES'	=>  'Може використовувати смайлики в ПП', 
	'ACL_U_PM_IMG'		=>  'Може використовувати тег [img] в ПП', 
	'ACL_U_PM_FLASH'	=>  'Може використовувати тег [flash] в ПП', 

	'ACL_U_SENDEMAIL'	=>  'Може посилати email-повідомлення', 
	'ACL_U_SENDIM'		=>  'Може використовувати систему миттєвих повідомлень', 
	'ACL_U_IGNOREFLOOD'	=>  'Може ігнорувати флуд-контроль', 
	'ACL_U_HIDEONLINE'	=>  'Може ховати статус присутності', 
	'ACL_U_VIEWONLINE'	=>  'Може бачити статус присутності', 
	'ACL_U_SEARCH'		=>  'Може використовувати пошук', 
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Може бачити форум', 
	'ACL_F_READ'		=> 'Може читати форум', 
	'ACL_F_SEARCH'		=> 'Може використовувати пошук на форумі', 
	'ACL_F_SUBSCRIBE'	=> 'Може підписуватися на форуми', 
	'ACL_F_PRINT'		=> 'Може роздруковувати теми', 
	'ACL_F_EMAIL'		=> 'Може повідомляти (другу) за email про тему', 
	'ACL_F_BUMP'		=> 'Може піднімати теми', 
	'ACL_F_USER_LOCK'	=> 'Може закривати свої теми', 
	'ACL_F_DOWNLOAD'	=> 'Може завантажувати файли', 
	'ACL_F_REPORT'		=> 'Може розміщувати скарги', 
	
	'ACL_F_POST'		=> 'Може створювати теми', 
	'ACL_F_STICKY'		=> 'Може прикріплювати теми', 
	'ACL_F_ANNOUNCE'	=> 'Може створювати оголошення', 
	'ACL_F_REPLY'		=> 'Може відповідати у темах', 
	'ACL_F_EDIT'		=> 'Може редагувати власні повідомлення', 
	'ACL_F_DELETE'		=> 'Може видаляти власні повідомлення', 
	'ACL_F_SOFTDELETE'	=> 'Може видаляти власні повідомлення<br /><em>Модератори, які мають право схвалювати повідомлення, можуть відновлювати видалені повідомлення</em>',
	'ACL_F_IGNOREFLOOD'	=> 'Може ігнорувати флуд-контроль', 
	'ACL_F_POSTCOUNT'	=> 'Лічильник повідомлень включений<br /><em>Врахуйте, що дана установка ефективна тільки при створенні нових повідомлень.</em>', 
	'ACL_F_NOAPPROVE'	=> 'Може розміщувати повідомлення без схвалення', 
	
	'ACL_F_ATTACH'		=> 'Може прикріплювати вкладення', 
	'ACL_F_ICONS'		=> 'Може використовувати значки тем і повідомлень', 
	'ACL_F_BBCODE'		=> 'Може використовувати BBCode', 
	'ACL_F_FLASH'		=> 'Може використовувати тег [flash]', 
	'ACL_F_IMG'			=> 'Може використовувати тег [img]', 
	'ACL_F_SIGS'		=> 'Може використовувати підпис', 
	'ACL_F_SMILIES'		=> 'Може використовувати смайлики', 

	'ACL_F_POLL'		=> 'Може створювати опитування', 
	'ACL_F_VOTE'		=> 'Може голосувати в опитуваннях', 
	'ACL_F_VOTECHG'		=> 'Може переголосувати', 
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Може редагувати повідомлення',
	'ACL_M_DELETE'		=> 'Може видаляти повідомлення',
	'ACL_M_SOFTDELETE'	=> 'Може видаляти повідомлення<br /><em>Модератори, які мають право схвалювати повідомлення, можуть відновлювати видалені повідомлення.</em>',
	'ACL_M_APPROVE'		=> 'Може схвалювати повідомлення',
	'ACL_M_REPORT'		=> 'Може закривати і видаляти скарги',
	'ACL_M_CHGPOSTER'	=> 'Може міняти автора повідомлень',

	'ACL_M_MOVE'	=> 'Може переміщати теми',
	'ACL_M_LOCK'	=> 'Може закривати теми',
	'ACL_M_SPLIT'	=> 'Може розділяти теми',
	'ACL_M_MERGE'	=> 'Може об\'єднувати теми',

	'ACL_M_INFO'	=> 'Може переглядати подробиці про повідомлення',
	'ACL_M_WARN'	=> 'Може оголошувати попередження<br /><em>Це право може бути призначено лише глобально, а не на рівні форумів.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Може управляти блокуванням<br /><em>Це право може бути призначено лише глобально, а не на рівні форумів.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Може змінювати налаштування конференції та перевіряти оновлення',
	'ACL_A_SERVER'		=> 'Може змінювати параметри налаштування сервера',
	'ACL_A_JABBER'		=> 'Може змінювати налаштування Jabber',
	'ACL_A_PHPINFO'		=> 'Може переглядати інформацію про PHP',

	'ACL_A_FORUM'		=> 'Може управляти форумами',
	'ACL_A_FORUMADD'	=> 'Може створювати форуми',
	'ACL_A_FORUMDEL'	=> 'Може видаляти форуми',
	'ACL_A_PRUNE'		=> 'Може очищати форуми',

	'ACL_A_ICONS'		=> 'Може змінювати значки тtм, повідомлень і смайли',
	'ACL_A_WORDS'		=> 'Може налаштовувати автоцензор',
	'ACL_A_BBCODE'		=> 'Може визначати BBCode',
	'ACL_A_ATTACH'		=> 'Може змінювати налаштування вкладень',

	'ACL_A_USER'		=> 'Може управляти користувачами<br /><em>Право також включає перегляд типу браузера користувачів у списку знаходяться на конференції.</em>',
	'ACL_A_USERDEL'		=> 'Може видаляти користувачів',
	'ACL_A_GROUP'		=> 'Може управляти групами',
	'ACL_A_GROUPADD'	=> 'Може створювати групи',
	'ACL_A_GROUPDEL'	=> 'Може видаляти групи',
	'ACL_A_RANKS'		=> 'Може управляти званнями',
	'ACL_A_PROFILE'		=> 'Може управляти додатковими полями профілю',
	'ACL_A_NAMES'		=> 'Може управляти забороненими іменами',
	'ACL_A_BAN'			=> 'Може управляти блокуванням',

	'ACL_A_VIEWAUTH'	=> 'Може переглядати права доступу',
	'ACL_A_AUTHGROUPS'	=> 'Може змінювати права доступу для конкретної групи',
	'ACL_A_AUTHUSERS'	=> 'Може змінювати права доступу для конкретного користувача',
	'ACL_A_FAUTH'		=> 'Може змінювати права доступу в форумах',
	'ACL_A_MAUTH'		=> 'Може змінювати права доступу для модераторів',
	'ACL_A_AAUTH'		=> 'Може змінювати права доступу для адміністраторів',
	'ACL_A_UAUTH'		=> 'Може змінювати права доступу для користувачів',
	'ACL_A_ROLES'		=> 'Може управляти ролями',
	'ACL_A_SWITCHPERM'	=> 'Може змінювати інші права доступу',

	'ACL_A_STYLES'		=> 'Може управляти стилями',
	'ACL_A_EXTENSIONS'	=> 'Може управляти розширеннями',
	'ACL_A_VIEWLOGS'	=> 'Може переглядати логи',
	'ACL_A_CLEARLOGS'	=> 'Може очищати логи',
	'ACL_A_MODULES'		=> 'Може керувати модулями',
	'ACL_A_LANGUAGE'	=> 'Може управляти мовними пакетами',
	'ACL_A_EMAIL'		=> 'Може здійснювати масову розсилку пошти',
	'ACL_A_BOTS'		=> 'Може управляти ботами',
	'ACL_A_REASONS'		=> 'Може управляти списком скарг/причин',
	'ACL_A_BACKUP'		=> 'Може зберігати/відновлювати базу даних',
	'ACL_A_SEARCH'		=> 'Може управляти пошуковими індексами/установками пошуку',
));
