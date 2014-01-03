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
	'ACL_U_CHGEMAIL'	=>  'Може змінювати email-адрес', 
	'ACL_U_CHGAVATAR'	=>  'Може змінювати аватар', 
	'ACL_U_CHGGRP'		=>  'Може міняти групу за замовчуванням', 
	'ACL_U_CHGPROFILEINFO'	=>  'Може міняти інформацію в полях профілю', 

	'ACL_U_ATTACH'		=>  'Може прикріплювати додаткові файли', 
	'ACL_U_DOWNLOAD'	=>  'Може скачувати файли', 
	'ACL_U_SAVEDRAFTS'	=>  'Може зберігати чернетки', 
	'ACL_U_CHGCENSORS'	=>  'Може відключати автоцензор', 
	'ACL_U_SIG'			=>  'Може використовувати підпис', 

	'ACL_U_SENDPM'		=>  'Може посилати ПП', 
	'ACL_U_MASSPM'		=>  'Може розсилати ПП декільком користувачам', 
	'ACL_U_MASSPM_GROUP'=>  'Може розсилати ПП групам користувачів', 
	'ACL_U_READPM'		=>  'Може читати ПП', 
	'ACL_U_PM_EDIT'		=>  'Може редагувати власні ПП', 
	'ACL_U_PM_DELETE'	=>  'Може видаляти ПП зі своїх папок', 
	'ACL_U_PM_FORWARD'	=>  'Може пересилати ПП', 
	'ACL_U_PM_EMAILPM'	=>  'Може відправляти ПП по email', 
	'ACL_U_PM_PRINTPM'	=>  'Може роздруковувати ПП', 
	'ACL_U_PM_ATTACH'	=>  'Може прикріплювати дод. файли в ПП', 
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
	
	'ACL_F_ATTACH'		=> 'Може прикріплювати додаткові файли', 
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
	'acl_m_edit'		=>  'Може редагувати повідомлення', 
	'acl_m_delete'		=>  'Може видаляти повідомлення', 
	'acl_m_approve'		=>  'Може схвалювати повідомлення', 
	'acl_m_report'		=>  'Може закривати і видаляти скарги', 
	'acl_m_chgposter'	=>  'Може міняти учасника повідомлень', 

	'acl_m_move'	=> 'Може переміщати теми', 
	'acl_m_lock'	=> 'Може закривати теми', 
	'acl_m_split'	=> 'Може розділяти теми', 
	'acl_m_merge'	=> 'Може об\'єднувати теми', 

	'acl_m_info'	=>  'Може переглядати подробиці про повідомлення', 
	'acl_m_warn'	=>  'Може оголошувати попередження<br /><em>Це право може бути призначено лише глобально, а не на рівні форумів.</em>',  // This moderator setting is only global (and not local)
	'acl_m_ban'		=>  'Може управляти блокуванням<br /><em>Це право може бути призначено лише глобально, а не на рівні форумів.</em>',  // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=>  'Може змінювати налаштування конференції та перевіряти оновлення', 
	'acl_a_server'		=>  'Може змінювати параметри конфігурації сервера', 
	'acl_a_jabber'		=>  'Може змінювати налаштування Jabber', 
	'acl_a_phpinfo'		=>  'Може переглядати відомості про php', 

	'acl_a_forum'		=>  'Може управляти форумами', 
	'acl_a_forumadd'	=>  'Може створювати форуми', 
	'acl_a_forumdel'	=>  'Може видаляти форуми', 
	'acl_a_prune'		=>  'Може очищати форуми', 

	'acl_a_icons'		=>  'Може змінювати значки тим, повідомлень і смайли', 
	'acl_a_words'		=>  'Може налаштовувати автоцензор', 
	'acl_a_bbcode'		=>  'Може визначати BBCode', 
	'acl_a_attach'		=>  'Може змінювати налаштування дод. файлів', 

	'acl_a_user'		=>  'Може управляти користувачами<br /><em>Право також включає перегляд типу браузера користувачів в списку знаходяться на конференції.</em>', 
	'acl_a_userdel'		=>  'Може видаляти користувачів', 
	'acl_a_group'		=>  'Може управляти групами', 
	'acl_a_groupadd'	=>  'Може створювати групи', 
	'acl_a_groupdel'	=>  'Може видаляти групи', 
	'acl_a_ranks'		=>  'Може управляти званнями', 
	'acl_a_profile'		=>  'Може управляти додатковими полями профілю', 
	'acl_a_names'		=>  'Може управляти забороненими іменами', 
	'acl_a_ban'			=>  'Може управляти блокуванням', 

	'acl_a_viewauth'	=>  'Може переглядати права доступу',
	'acl_a_authgroups'	=>  'Може змінювати права доступу для конкретної групи',
	'acl_a_authusers'	=>  'Може змінювати права доступу для конкретного користувача',
	'acl_a_fauth'		=>  'Може змінювати права доступу у форумах',
	'acl_a_mauth'		=>  'Може змінювати права доступу для модераторів',
	'acl_a_aauth'		=>  'Може змінювати права доступу для адміністраторів',
	'acl_a_uauth'		=>  'Може змінювати права доступу для користувачів',
	'acl_a_roles'		=>  'Може управляти ролями',
	'acl_a_switchperm'	=>  'Може змінювати інші права доступу',

	'acl_a_styles'		=>  'Може управляти стилями', 
	'acl_a_extensions'	=>  'Може управляти розширеннями', 
	'acl_a_viewlogs'	=>  'Может переглядати логи', 
	'acl_a_clearlogs'	=>  'Може очищати логи', 
	'acl_a_modules'		=>  'Може управляти модулями', 
	'acl_a_language'	=>  'Може управляти мовними пакетами', 
	'acl_a_email'		=>  'Може здійснювати масову розсилку пошти', 
	'acl_a_bots'		=>  'Может управлять ботами', 
	'acl_a_reasons'		=>  'Може управляти списком скарг/причин', 
	'acl_a_backup'		=>  'Може зберігати / відновлювати базу даних', 
	'acl_a_search'		=>  'Може управляти пошуковими індексами/установками пошуку', 
));
