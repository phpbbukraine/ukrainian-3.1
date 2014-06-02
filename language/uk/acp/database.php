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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Тут ви можете створити резервну копію всіх даних конференції. Ви можете зберегти кінцевий архів на сервері в папці <samp>store/</samp> або завантажити його. Залежно від конфігурації сервера може бути доступно стиск файлу резервної копії в декількох форматах.',
	'ACP_RESTORE_EXPLAIN'	=> 'Буде вироблено повне відновлення всіх таблиць phpBB із збереженого файлу. Якщо сервер підтримує таку можливість, ви можете використовувати стислі файли gzip або bzip2, які будуть автоматично розархівовані. <strong>Увага:</strong> всі існуючі дані будуть знищені. Відновлення може зайняти тривалий час, тому не йдіть з цієї сторінки до повного завершення процесу. Резервні копії, імовірно створені засобами phpBB, збережені в папці <samp>store/</samp>. Відновлення з резервних копій, створених нема з використанням вбудованої системи, може потерпіти невдачу.',

	'BACKUP_DELETE'		=> 'Файл резервної копії успішно видалений.',
	'BACKUP_INVALID'	=> 'Вибрано неприпустимий файл резервної копії.',
	'BACKUP_OPTIONS'	=> 'Параметри резервного копіювання',
	'BACKUP_SUCCESS'	=> 'Файл резервної копії успішно створений.',
	'BACKUP_TYPE'		=> 'Тип копії',

	'DATABASE'			=> 'Керування БД',
	'DATA_ONLY'			=> 'Тільки дані',
	'DELETE_BACKUP'		=> 'Видалити резервну копію',
	'DELETE_SELECTED_BACKUP'	=> 'Ви дійсно хочете видалити обрану копію?',
	'DESELECT_ALL'		=> 'Зняти виділення',
	'DOWNLOAD_BACKUP'	=> 'Завантажити резервну копію',

	'FILE_TYPE'			=> 'Тип файла',
	'FILE_WRITE_FAIL'	=> 'Не вдалося зберегти файл у папці «store».',
	'FULL_BACKUP'		=> 'Повна',

	'RESTORE_FAILURE'		=> 'Можливо, файл з резервною копією пошкоджений.',
	'RESTORE_OPTIONS'		=> 'Параметри відновлення',
	'RESTORE_SELECTED_BACKUP'	=> 'Ви впевнені, що хочете відновити дані з обраної резервної копії?',
	'RESTORE_SUCCESS'		=> 'База даних успішно відновлена.<br /><br />Конференція відновлена ​​до стану на момент створення резервної копії.',

	'SELECT_ALL'			=> 'Виділити все',
	'SELECT_FILE'			=> 'Виберіть файл',
	'START_BACKUP'			=> 'Почати резервне копіювання',
	'START_RESTORE'			=> 'Почати відновлення',
	'STORE_AND_DOWNLOAD'	=> 'Зберегти на сервері і завантажити',
	'STORE_LOCAL'			=> 'Зберегти на сервері',
	'STRUCTURE_ONLY'		=> 'Тільки структура',

	'TABLE_SELECT'		=> 'Вибір таблиць',
	'TABLE_SELECT_ERROR'=> 'Необхідно вибрати хоча б одну таблицю.',
));
