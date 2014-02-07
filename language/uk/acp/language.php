<?php
/**
*
* acp_language [Ukrainian]
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
	'ACP_FILES'						=> 'Панель адміністратора',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Тут ви можете встановлювати і видаляти мовні пакети. Мовний пакет, використовуваний на конференції за замовчуванням, позначений зірочкою (*).',

	'EMAIL_FILES'			=> 'Шаблони email-повідомлень',

	'FILE_CONTENTS'				=> 'Вміст файлу',
	'FILE_FROM_STORAGE'			=> 'Файл з папки зберігання',

	'HELP_FILES'				=> 'Довідкові файли',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Встановлені мовні пакети',
	'INVALID_LANGUAGE_PACK'		=> 'Обраний мовний пакет неприпустимий. Перевірте пакет і при необхідності повторно завантажте його на сервер.',
	'INVALID_UPLOAD_METHOD'		=> 'Обраний метод завантаження неприпустимий. Виберіть інший метод.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Відомості про мову успішно оновлені.',
	'LANGUAGE_ENTRIES'					=> 'Мовні дані',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Тут ви можете змінювати існуючі або поки не переведені запису у файлах мовного пакета.<br /><strong>Примітка:</strong> якщо ви змінили мовний файл, зміни будуть збережені в окремій папці для подальшого завантаження. Зміни не будуть видні вашим користувачам до тих пір, поки ви не заміните вихідні мовні файли на сервері (завантаживши нові).',
	'LANGUAGE_FILES'					=> 'Мовні файли',
	'LANGUAGE_KEY'						=> 'Ключ мови',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Цей мовний пакет уже встановлено.',
	'LANGUAGE_PACK_DELETED'				=> 'Мовний пакет <strong>%s</strong> успішно видалено. Всі користувачі, які використовують цю мову, переключені на мову конференції за замовчуванням.',
	'LANGUAGE_PACK_DETAILS'				=> 'Інформація про мовний пакет',
	'LANGUAGE_PACK_INSTALLED'			=> 'Мовний пакет <strong>%s</strong> успішно встановлений.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Мовні рядки додаткових полів профілю були скопійовані з мовного пакета за замовчуванням. Змініть їх, якщо це необхідно.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Місцева назва',
	'LANGUAGE_PACK_NAME'				=> 'Назва',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Обраний мовний пакет не існує.',
	'LANGUAGE_PACK_USED_BY'				=> 'Використовують (включаючи роботів)',
	'LANGUAGE_VARIABLE'					=> 'Мовна змінна',
	'LANG_AUTHOR'						=> 'Автор мовного пакета',
	'LANG_ENGLISH_NAME'					=> 'Ім\'я англійською',
	'LANG_ISO_CODE'						=> 'Код ISO',
	'LANG_LOCAL_NAME'					=> 'Місцева назва',

	'MISSING_LANGUAGE_FILE'		=> 'Відсутній мовний файл: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Відсутній мовний файл',
	'MODS_FILES'				=> 'Мовні файли модів',

	'NO_FILE_SELECTED'				=> 'Ви не вказали мовний файл.',
	'NO_LANG_ID'					=> 'Ви не вказали мовний пакет.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Ви не можете видалити мовний пакет, використовуваний за замовчуванням.<br />Якщо ви хочете видалити цей пакет, спочатку змініть мова конференції за замовчуванням.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Усі доступні мовні пакети встановлені',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Видалити з папки зберігання',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Вибрати формат завантажування',
	'SUBMIT_AND_DOWNLOAD'		=> 'Відправити форму і завантажити файл',
	'SUBMIT_AND_UPLOAD'			=> 'Відправити форму і завантажити файл на сервер',

	'THOSE_MISSING_LANG_FILES'			=> 'Наступні мовні файли відсутні у мовному пакеті %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Наступні мовні змінні відсутні у мовному пакеті <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Мовні пакети, доступні для встановлення',

	'UNABLE_TO_WRITE_FILE'		=> 'Не вдалося записати файл в %s.',
	'UPLOAD_COMPLETED'			=> 'Завантаження на сервер успішно завершена.',
	'UPLOAD_FAILED'				=> 'Завантаження на сервер не вдалася. Може знадобитися замінити відповідний файл вручну.',
	'UPLOAD_METHOD'				=> 'Метод завантаження на сервер',
	'UPLOAD_SETTINGS'			=> 'Установки завантаження на сервер',

	'WRONG_LANGUAGE_FILE'		=> 'Обраний мовний файл неприпустимий.',
));
