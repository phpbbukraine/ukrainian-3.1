<?php
/**
*
* acp_extensions [Ukrainian]
*
* @package language
* @copyright (c) 2012 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
*
*/
/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Розширення',
	'EXTENSIONS'				=> 'Розширення',
	'EXTENSIONS_ADMIN'			=> 'Управління розширеннями',
	'EXTENSIONS_EXPLAIN'		=> 'Тут можна керувати розширеннями та переглядати інформацію про них.',
	'EXTENSION_INVALID_LIST'	=> 'Розширення «%s» не є сумісним.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Вибране розширення недоступно для даної конференції. Перевірте, чи є використовувані на конференції версії phpBB і PHP сумісними з цим розширенням (див. подробиці на сторінці інформації).',
	'EXTENSION_DIR_INVALID'		=> 'Вибране розширення має неправильну структуру каталогу і не може бути підключено.',

	'DETAILS'				=> 'Інформація',

	'EXTENSIONS_DISABLED'  => 'Вимкнені розширення',
	'EXTENSIONS_ENABLED'   => 'Увімкнуті розширення',

	'EXTENSION_DELETE_DATA'  => 'Видалити дані',
	'EXTENSION_DISABLE'      => 'Вимкнути',
	'EXTENSION_ENABLE'       => 'Увімкнути',

	'EXTENSION_DELETE_DATA_EXPLAIN'  => 'Видалити дані і налаштування цього розширення. Файли цього розширення залишаються, тому це розширення можна відновити',
    'EXTENSION_DISABLE_EXPLAIN'      => 'Вимкнення розширення зберігає свої файли, дані і налаштування, але видаляє функціональність додану цим розширенням',
    'EXTENSION_ENABLE_EXPLAIN'       => 'Увімкнення цього розширення дозволяє вам використовувати його своїй конференції.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'  => 'Дані розширення в даний час видалені. Будь ласка, не залишайте і не оновлюйте цю сторінку, поки все не буде завершено.',
    'EXTENSION_DISABLE_IN_PROGRESS'  => 'Розширення в даний час вимкнене. Будь ласка, не залишайте і не оновлюйте цю сторінку, поки все не буде завершено.',
    'EXTENSION_ENABLE_IN_PROGRESS'  => 'Розширення в даний час увімкнене. Будь ласка, не залишайте і не оновлюйте цю сторінку, поки все не буде завершено.',

	'EXTENSION_DELETE_DATA_SUCCESS'  => 'Дані розширення успішно видалені',
    'EXTENSION_DISABLE_SUCCESS'      => 'Розширення успішно вимкнене',
    'EXTENSION_ENABLE_SUCCESS'       => 'Розширення успішно увімкнене',

	'EXTENSION_NAME'		=> 'Ім\'я розширення',
	'EXTENSION_ACTIONS'		=> 'Дії',
	'EXTENSION_OPTIONS'		=> 'Налаштування',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Оновлення розширення',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Вимкніть розширення</li>
			<li>Видаліть файли розширення з сервера</li>
			<li>Завантажте нові файли</li>
			<li>Увімкніть розширення</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Повне видалення розширення.',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Вимкніть розширення</li>
			<li>Видаліть дані розширення</li>
			<li>Видаліть файли розширення з сервера</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'  => 'Ви впевнені, що хочете видалити дані, пов\'язані з «%%s»?<br /><br />Це видаляє всі його дані і налаштування і не може бути скасовано!',
    'EXTENSION_DISABLE_CONFIRM'      => 'Ви впевнені, що хочете вимкнути це «%s» розширення?',
    'EXTENSION_ENABLE_CONFIRM'       => 'Ви впевнені, що хочете увімкнути це «%s» розширення?',
	
	'RETURN_TO_EXTENSION_LIST'	=> 'Повернутися до списку розширень',

	'EXT_DETAILS'			=> 'Інформація про розширення',
	'DISPLAY_NAME'			=> 'Показати ім\'я',
	'CLEAN_NAME'			=> 'Очистити ім\'я',
	'TYPE'					=> 'Тип',
	'DESCRIPTION'			=> 'Опис',
	'VERSION'				=> 'Версія',
	'HOMEPAGE'				=> 'Домашня сторінка',
	'PATH'					=> 'Шлях',
	'TIME'					=> 'Дата випуску',
	'LICENCE'				=> 'Ліцензія',

	'REQUIREMENTS'			=> 'Вимоги',
	'PHPBB_VERSION'			=> 'Версія phpBB',
	'PHP_VERSION'			=> 'Версія PHP',
	'AUTHOR_INFORMATION'	=> 'Відомості про автора',
	'AUTHOR_NAME'			=> 'Ім\'я',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Домашня сторінка',
	'AUTHOR_ROLE'			=> 'Роль',
));
