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
	'ACP_STYLES_EXPLAIN'	=> 'Тут ви можете керувати стилями, доступними на конференції. Ви можете змінювати існуючі стилі, видаляти, деактивувати, повторно активувати, встановлювати нові. Ви також можете побачити, як виглядатиме стиль, використовуючи функцію попереднього перегляду. Також зазначена загальна кількість користувачів для кожного стилю. Врахуйте, що примусова заміна стилів користувачів тут не проводиться.',
	'CANNOT_BE_INSTALLED'			=> 'Неможливо встановити',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Ви дійсно хочете скасувати встановлення стиля?',
	'COPYRIGHT'						=> 'Копірайт',

	'DEACTIVATE_DEFAULT'		=> 'Ви не можете зробити неактивним стиль за замовчуванням.',
	'DELETE_FROM_FS'			=> 'Видалити з сервера',
	'DELETE_STYLE_FILES_FAILED'	=> 'При видаленні файлів стилю «%s» сталася помилка.',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Файли стилю «%s» успішно видалені.',
	'DELETE_THEME'				=> 'Видалити тему',
	'DELETE_THEME_EXPLAIN'		=> 'Тут ви можете видалити обрану тему з бази даних. Врахуйте, що скасувати видалення неможливо. Рекомендується спочатку експортувати тему для можливого використання в майбутньому.',
	'DETAILS'					=> 'Інформація',
	'INHERITING_FROM'			=> 'Наслідує із',
	'INSTALL_STYLE'				=> 'Встановити стиль',
	'INSTALL_STYLES'			=> 'Встановити стилі',
	'INSTALL_STYLES_EXPLAIN'	=> 'Тут ви можете встановити нові стилі. <br /> У разі, якщо який-небудь стиль відсутній в списку нижче, перевірте, чи не був він вже встановлений. Якщо цей стиль не встановлений, перевірте правильність його завантаження на сервер.',
	'INVALID_STYLE_ID'			=> 'Невірний ідентифікатор (ID) стилю.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Немає стилів, які відповідають запиту.',
	'NO_UNINSTALLED_STYLE'		=> 'Всі стилі встановлені',

	'PURGED_CACHE'				=> 'Кеш очищений.',

	'REFRESH'					=> 'Оновити',
	'REPEAT_NO'					=> 'Не повторяти',
	'REPEAT_X'					=> 'Тільки по горизонталі',
	'REPEAT_Y'					=> 'Тільки по вертикалі',
	'REPEAT_ALL'				=> 'В обох напрямках',
	'REPLACE_STYLE'				=> 'Замінити стиль на',
	'REPLACE_STYLE_EXPLAIN'		=> 'Цей стиль замінить видаляється для користувачів, які його використовують.',
	'REPLACE_TEMPLATE'			=> 'Замінити шаблон на',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Цей шаблон замінить видаляється в усіх стилях, де він використовується.',
	'REPLACE_THEME'				=> 'Замінити тему на',
	'REPLACE_THEME_EXPLAIN'		=> 'Ця тема замінить видаляєму в усіх стилях, де вона використовується.',
	'REPLACE_WITH_OPTION'		=> 'Замінити на «%s»',
	'REQUIRES_STYLE'			=> 'Цьому стилю потрібний встановлений стиль «%s».',

	'STYLE_ACTIVATE'			=> 'Активувати',
	'STYLE_ACTIVE'				=> 'Активований',
	'STYLE_ADDED'				=> 'Стиль успішно доданий.',
	'STYLE_DEACTIVATED'			=> 'Стиль успішно деактивований',
	'STYLE_DEFAULT'				=> 'Призначити використовуваним за замовчуванням',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Необхідно активувати стиль перш, ніж призначити його стилем за умовчанням.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Батьківський стиль невірний.',
	'STYLE_ERR_NAME_EXIST'		=> 'Стиль з таким ім\'ям вже існує.',
	'STYLE_ERR_STYLE_NAME'		=> 'Ви повинні задати ім\'я для цього стилю.',
	'STYLE_INSTALLED'			=> 'Стиль «%s» успішно встановлений.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Повернутися до списку встановлених стилів.',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Встановити інші стилі.',
	'STYLE_NAME'				=> 'Ім\'я стиля',
	'STYLE_NOT_INSTALLED'		=> 'Не вдалося встановити стиль «%s».',
	'STYLE_PATH'				=> 'Шлях до стилю',
	'STYLE_UNINSTALL'			=> 'Видалити',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Стиль «%s» не може бути вилучений, бо є батьківським для інших стилів.',
	'STYLE_UNINSTALLED'			=> 'Стиль «%s» успішно видалено.',
	'STYLE_USED_BY'				=> 'Використовують (з ботами)',

	'UNINSTALL_DEFAULT'		=> 'Не можна видалити стиль за замовчуванням.',
));
