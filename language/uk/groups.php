<?php
/** 
*
* groups [Ukrainian]
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
	'ALREADY_DEFAULT_GROUP'				=> 'Обрана група вже є вашою групою за замовчуванням.',
	'ALREADY_IN_GROUP'					=> 'Ви вже є членом обраної групи.',
	'ALREADY_IN_GROUP_PENDING'			=> 'Ви вже запросили членство в обраній групі.',

	'CANNOT_JOIN_GROUP'					=> 'Ви не можете стати членом цієї групи. Самостійно можна вступити тільки у відкриті і вільно доступні групи.',
	'CANNOT_RESIGN_GROUP'				=> 'Ви не можете припинити членство в цій групі. Самостійно можна вийти тільки з відкритих і вільно доступних груп.',
	'CHANGED_DEFAULT_GROUP'				=> 'Група за замовчуванням успішно змінена.',

	'GROUP_AVATAR'						=> 'Аватара групи', 
	'GROUP_CHANGE_DEFAULT'				=> 'Ви впевнені, що хочете змінити вашу групу за замовчуванням на «%s»?',
	'GROUP_CLOSED'						=> 'Закрита група',
	'GROUP_DESC'						=> 'Опис групи',
	'GROUP_HIDDEN'						=> 'Прихована група',
	'GROUP_INFORMATION'					=> 'Інформація про групу', 
	'GROUP_IS_CLOSED'					=> 'Це закрита група, вступити в неї можна тільки за запрошенням лідера групи.',
	'GROUP_IS_FREE'						=> 'Це загальнодоступна група, будь-який користувач може вступити в неї.', 
	'GROUP_IS_HIDDEN'					=> 'Це прихована група, тільки члени цієї групи можуть переглядати список входять до неї користувачів.',
	'GROUP_IS_OPEN'						=> 'Це відкрита група, будь-який користувач може подати прохання про вступ.',
	'GROUP_IS_SPECIAL'					=> 'Це спеціальна група, керована адміністратором конференції.', 
	'GROUP_JOIN'						=> 'Вступити в групу',
	'GROUP_JOIN_CONFIRM'				=> 'Ви впевнені, що хочете вступити в обрану групу?',
	'GROUP_JOIN_PENDING'				=> 'Запит на вступ до групи',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Ви впевнені, що хочете зробити запит на вступ в цю групу?',
	'GROUP_JOINED'						=> 'Ви успішно вступили до вибраної групи.',
	'GROUP_JOINED_PENDING'				=> 'Запит на вступ до групи успішно відправлено. Будь ласка, очікуйте підтвердження від лідера групи.',
	'GROUP_LIST'						=> 'Управління користувачами',
	'GROUP_MEMBERS'						=> 'Члени групи',
	'GROUP_NAME'						=> 'Назва групи',
	'GROUP_OPEN'						=> 'Відкрита група',
	'GROUP_RANK'						=> 'Звання групи', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Вийти з групи',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Ви впевнені, що хочете вийти з обраної групи?',
	'GROUP_RESIGN_PENDING'				=> 'Відкликати запит на вступ до групи',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Ви впевнені, що хочете відкликати запит на вступ до вибраної групи?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Ви були успішно видалені з обраної групи.',
	'GROUP_RESIGNED_PENDING'			=> 'Ваш запит на вступ до вибраної групи успішно відхилений.',
	'GROUP_TYPE'						=> 'Тип групи',
	'GROUP_UNDISCLOSED'					=> 'Прихована група',
	'FORUM_UNDISCLOSED'					=> 'Модерування прихованого форума(ів)',

	'LOGIN_EXPLAIN_GROUP'				=> 'Ви повинні увійти для перегляду інформації про групу.',

	'NO_LEADERS'						=> 'Ви не є лідером якої-небудь групи.',
	'NOT_LEADER_OF_GROUP'				=> 'Запитана операція не може бути виконана, оскільки ви не є лідером вибраної групи.',
	'NOT_MEMBER_OF_GROUP'				=> 'Запитана операція не може бути виконана, оскільки ви не є членом обраної групи або членство ще не було схвалено.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'		=> 'Ви не можете відмовитися від членства в групі за замовчуванням.',

	'PRIMARY_GROUP'						=> 'Основна група',

	'REMOVE_SELECTED'					=> 'Видалити вибране',

	'USER_GROUP_CHANGE'					=> 'Із групи «%1$s» в групу «%2$s»',
	'USER_GROUP_DEMOTE'					=> 'Відмовитися від лідерства',
	'USER_GROUP_DEMOTE_CONFIRM'			=> 'Ви впевнені, що хочете відмовитися від лідерства в обраній групі?',
	'USER_GROUP_DEMOTED'				=> 'Ви припинили бути лідером групи.',
));
