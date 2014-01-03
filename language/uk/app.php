<?php
/**
*
* app [Ukrainian]
*
* @package language
* @copyright (c) 2012 phpBB Group
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CONTROLLER_ARGUMENT_VALUE_MISSING'	=> 'Не задано значення аргументу #%1$s: <strong>%3$s</strong> класа <strong>%2$s</strong>',
	'CONTROLLER_NOT_SPECIFIED'			=> 'Не вказаний контролер.',
	'CONTROLLER_NOT_FOUND'				=> 'Запитувана сторінка не знайдена.',
	'CONTROLLER_METHOD_NOT_SPECIFIED'	=> 'Не вказаний метод для даного контролера.',
	'CONTROLLER_SERVICE_NOT_GIVEN'		=> 'Для контролера «<strong>%s</strong>» необхідно вказати службу у файлі ./config/routing.yml.',
	'CONTROLLER_SERVICE_UNDEFINED'		=> 'Служба контролера «<strong>%s</strong>» не вказана в файлі ./config/services.yml.',
	'CONTROLLER_RETURN_TYPE_INVALID'	=> 'Об\'єкт контролера <strong>%s</strong> повинен повертати об\'єкт Symfony\Component\HttpFoundation\Response.',
));
