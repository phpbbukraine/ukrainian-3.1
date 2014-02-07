<?php
/**
*
* recaptcha [Ukrainian]
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
	'RECAPTCHA_LANG'				=> 'ua',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Для використання reCaptcha необхідно створити обліковий запис на сайті <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Неправильний код візуального підтвердження',

	'RECAPTCHA_PUBLIC'				=> 'Публічний ключ reCaptcha [Public Key]',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Ваш публічний ключ reCaptcha. Ключі можна отримати на сайті <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Закритий ключ reCaptcha [Private Key]',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Ваш закритий ключ reCaptcha. Ключі можна отримати на сайті <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'З метою запобігання автоматичної відправки форм, введіть обидва відображених слова в текстове поле нижче.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'Проблема з підключенням до сервісу RECAPTCHA: неможливо відкрити сокет. Спробуйте ще раз пізніше.',
));
