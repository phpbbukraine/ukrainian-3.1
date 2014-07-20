<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
	'ACP_FILES'						=> 'Панель адміністратора',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Тут ви можете встановлювати і видаляти мовні пакети. Мовний пакет, використовуваний на конференції за замовчуванням, позначений зірочкою (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Ви впевнені, що хочете видалити «%s»?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Встановлені мовні пакети',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Відомості про мову успішно оновлені.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Цей мовний пакет уже встановлено.',
	'LANGUAGE_PACK_DELETED'				=> 'Мовний пакет «%s» успішно видалено. Всі користувачі, які використовують цю мову, переключені на мову конференції за замовчуванням.',
	'LANGUAGE_PACK_DETAILS'				=> 'Інформація про мовний пакет',
	'LANGUAGE_PACK_INSTALLED'			=> 'Мовний пакет «%s» успішно встановлений.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Мовні рядки додаткових полів профілю були скопійовані з мовного пакета за замовчуванням. Змініть їх, якщо це необхідно.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Місцева назва',
	'LANGUAGE_PACK_NAME'				=> 'Назва',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Обраний мовний пакет не існує.',
	'LANGUAGE_PACK_USED_BY'				=> 'Використовують (з роботами)',
	'LANGUAGE_VARIABLE'					=> 'Мовна змінна',
	'LANG_AUTHOR'						=> 'Автор мовного пакета',
	'LANG_ENGLISH_NAME'					=> 'Ім\'я англійською',
	'LANG_ISO_CODE'						=> 'Код ISO',
	'LANG_LOCAL_NAME'					=> 'Місцева назва',

	'MISSING_LANG_FILES'		=> 'Відсутні мовні файли',
	'MISSING_LANG_VARIABLES'	=> 'Відсутній мовний файл',

	'NO_FILE_SELECTED'				=> 'Ви не вказали мовний файл.',
	'NO_LANG_ID'					=> 'Ви не вказали мовний пакет.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Ви не можете видалити мовний пакет, використовуваний за замовчуванням.<br />Якщо ви хочете видалити цей пакет, спочатку змініть мова конференції за замовчуванням.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Усі доступні мовні пакети встановлені',

	'THOSE_MISSING_LANG_FILES'			=> 'Наступні мовні файли відсутні у мовному пакеті «%s»',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Наступні мовні змінні відсутні у мовному пакеті «%s»',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Мовні пакети, доступні для встановлення',
));
