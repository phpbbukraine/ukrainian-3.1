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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Управління пошуковими роботами (ботами)',
	'BOTS_EXPLAIN'		=> '«Боти», «павуки» — це автоматичні агенти, які зазвичай використовуються пошуковими системами для оновлення своїх баз даних. Оскільки вони рідко належним чином працюють з сесіями, вони можуть спотворити лічильники відвідувань, збільшити навантаження на сервер і іноді неправильно проіндексувати сайт. Тут ви можете створити користувачів особливого типу з метою запобігання подібних проблем.',
	'BOT_ACTIVATE'		=> 'Включити',
	'BOT_ACTIVE'		=> 'Бот активний',
	'BOT_ADD'			=> 'Додати бота',
	'BOT_ADDED'			=> 'Новий бот успішно доданий.',
	'BOT_AGENT'			=> 'Відповідність агенту',
	'BOT_AGENT_EXPLAIN'	=> 'Рядок, повністю або частково збігається з агентом (User-Agent) бота.',
	'BOT_DEACTIVATE'	=> 'Відключити',
	'BOT_DELETED'		=> 'Бот успішно видалений.',
	'BOT_EDIT'			=> 'Налаштування бота',
	'BOT_EDIT_EXPLAIN'	=> 'За допомогою цієї сторінки ви можете додати нового або змінити налаштування наявного бота. Ви можете вказати рядок агента бота і ввести один або кілька IP-адрес (або діапазон адрес) для його ідентифікації. Будьте уважні при вказівці рядка агента або адрес. Також тут можна вказати стиль і мову конференції, які буде використовувати бот. Це допоможе знизити використання трафіку шляхом установки полегшеного стилю для пошукових роботів. Не забудьте налаштувати відповідні права доступу для спеціальної групи «Боти».',
	'BOT_LANG'			=> 'Мова для бота',
	'BOT_LANG_EXPLAIN'	=> 'Мова конференції, використовуваний ботом при відвідуванні.',
	'BOT_LAST_VISIT'	=> 'Відвідання',
	'BOT_IP'			=> 'IP-адреса бота',
	'BOT_IP_EXPLAIN'	=> 'Можна часткові відповідності. Відокремлюйте адреси комами.',
	'BOT_NAME'			=> 'Назва бота',
	'BOT_NAME_EXPLAIN'	=> 'Використовується виключно для вашого відома.',
	'BOT_NAME_TAKEN'	=> 'Зазначене ім\'я вже використовується на конференції і не може використовуватися для бота.',
	'BOT_NEVER'			=> 'Ніколи',
	'BOT_STYLE'			=> 'Стиль для бота',
	'BOT_STYLE_EXPLAIN'	=> 'Стиль конференції, використовуваний ботом при відвідуванні.',
	'BOT_UPDATED'		=> 'Налаштування бота успішно оновлені.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Введений вами агент бота вже використовується.',
	'ERR_BOT_NO_IP'				=> 'Введені вами IP-адреси неприпустимі або не усувається ім\'я хоста.',
	'ERR_BOT_NO_MATCHES'		=> 'Необхідно вказати не менше одного агента або IP-адреси для ідентифікації цього бота.',

	'NO_BOT'		=> 'Бот із зазначеним ідентифікатором не знайдене.',
	'NO_BOT_GROUP'	=> 'Спеціальна група «Боти» не знайдено.',
));
