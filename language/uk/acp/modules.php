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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Тут ви можете керувати всіма типами модулів. Зверніть увагу на те, що панель адміністратора має трирівневу структуру меню (Категорія → Категорія → Модуль), в результаті чого підрозділи мають дворівневу структуру меню (Категорія → Модуль), яка повинна бути збережена. Також врахуйте, що ви можете заблокувати доступ самому собі, якщо ви вимкніть або видаліть модулі, що відповідають за управління модулями.',
	'ADD_MODULE'					=> 'Добавити модуль',
	'ADD_MODULE_CONFIRM'			=> 'Ви дійсно хочете додати обраний модуль з вказаним методом використання?',
	'ADD_MODULE_TITLE'				=> 'Добавлення модуля',

	'CANNOT_REMOVE_MODULE'	=> 'Не вдалося видалити модуль, оскільки на нього призначені дочірні модулі. Видаліть або перемістіть всі дочірні модулі перед виконанням цієї дії.',
	'CATEGORY'				=> 'Категорія',
	'CHOOSE_MODE'			=> 'Метод використання модуля',
	'CHOOSE_MODE_EXPLAIN'	=> 'Виберіть метод використання модуля.',
	'CHOOSE_MODULE'			=> 'Вибір модуля',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Виберіть файл, що викликається даним модулем.',
	'CREATE_MODULE'			=> 'Створити модуль',

	'DEACTIVATED_MODULE'	=> 'Відключений модуль',
	'DELETE_MODULE'			=> 'Видалити модуль',
	'DELETE_MODULE_CONFIRM'	=> 'Ви дійсно хочете видалити цей модуль?',

	'EDIT_MODULE'			=> 'Налаштування модуля',
	'EDIT_MODULE_EXPLAIN'	=> 'За допомогою цієї сторінки ви можете налаштувати модуль.',

	'HIDDEN_MODULE'			=> 'Прихований модуль',

	'MODULE'					=> 'Модуль',
	'MODULE_ADDED'				=> 'Модуль успішно доданий.',
	'MODULE_DELETED'			=> 'Модуль успішно видалений.',
	'MODULE_DISPLAYED'			=> 'Відображення модуля',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Якщо ви не хочете, щоб модуль відображався в списку, але хочете використовувати його, то встановіть перемикач в положення «Ні».',
	'MODULE_EDITED'				=> 'Налаштування модуля успішно змінені.',
	'MODULE_ENABLED'			=> 'Модуль включений',
	'MODULE_LANGNAME'			=> 'Ім\'я модуля',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Введіть ім\'я модуля. Використовуйте ім\'я змінної, якщо ім\'я модуля оголошено в мовному файлі.',
	'MODULE_TYPE'				=> 'Тип модуля',

	'NO_CATEGORY_TO_MODULE'	=> 'Не вдалося оголосити категорію модулем. Видаліть або перемістіть всі дочірні модулі перед виконанням цієї дії.',
	'NO_MODULE'				=> 'Модуль не знайдений.',
	'NO_MODULE_ID'			=> 'Не вказаний ID модуля',
	'NO_MODULE_LANGNAME'	=> 'Не вказано ім\'я модуля.',
	'NO_PARENT'				=> 'Немає батька',

	'PARENT'				=> 'Батько',
	'PARENT_NO_EXIST'		=> 'Батько не існує.',

	'SELECT_MODULE'			=> 'Виберіть модуль',
));
