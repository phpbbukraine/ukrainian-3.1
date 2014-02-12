<?php
/**
*
* acp_groups [Ukrainian]
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'C допомогою цієї панелі ви можете керувати всіма групами користувачів. Ви можете видаляти їх, створювати нові і редагувати існуючі. Крім цього, ви можете призначати лідерів, змінювати відкритий/прихований/закритий статус груп, а також задавати назви та описи груп.',
	'ADD_GROUP_CATEGORY'			=> 'Додати категорію',
	'ADD_USERS'						=> 'Додавання користувачів',
	'ADD_USERS_EXPLAIN'				=> 'Тут ви можете додавати нових користувачів до групи. Ви можете вибрати, чи стане ця група групою за замовчуванням для обраних користувачів. Також тут же можна призначати лідерів групи. Вводьте ім\'я кожного користувача на новому рядку.',

	'COPY_PERMISSIONS'				=> 'Скопіювати права з групи',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Після створення група буде мати ті ж права доступу, що й обрана тут.',
	'CREATE_GROUP'					=> 'Створити групу',

	'GROUPS_NO_MEMBERS'				=> 'У цій групі немає користувачів',
	'GROUPS_NO_MODS'				=> 'Лідери групи не призначено',

	'GROUP_APPROVE'					=> 'Прийняти кандидата в групу',
	'GROUP_APPROVED'				=> 'Учасники групи',
	'GROUP_AVATAR'					=> 'Аватар групи',
	'GROUP_AVATAR_EXPLAIN'			=> 'Цей малюнок буде відображатися в панелі управління групою.',
	'GROUP_CATEGORY_NAME'			=> 'Ім\'я категорії',
	'GROUP_CLOSED'					=> 'Закрита',
	'GROUP_COLOR'					=> 'Колір групи',
	'GROUP_COLOR_EXPLAIN'			=> 'Колір імен користувачів - учасників групи. Залиште поле порожнім для використання кольору за замовчуванням.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Ви дійсно хочете додати користувача %1$s в групу?',
		2	=> 'Ви дійсно хочете додати користувачів %1$s в групу?',
		3	=> 'Ви дійсно хочете додати користувачів %1$s в групу?',
	),
	'GROUP_CREATED'					=> 'Група успішно створена.',
	'GROUP_DEFAULT'					=> 'Зробити групою за замовчуванням',
	'GROUP_DEFS_UPDATED'			=> 'Для всіх обраних користувачів встановлено групу за замовчуванням.',
	'GROUP_DELETE'					=> 'Видалити користувача з групи',
	'GROUP_DELETED'					=> 'Група видалена і для її учасників успішно встановлені нові групи за замовчуванням.',
	'GROUP_DEMOTE'					=> 'Зняти лідера групи',
	'GROUP_DESC'					=> 'Опис групи',
	'GROUP_DETAILS'					=> 'Відомості про групу',
	'GROUP_EDIT_EXPLAIN'			=> 'Тут можна змінити налаштування існуючої групи. Ви можете змінити назву, опис і тип групи (відкрита, закрита і т. п.). Також можна встановити деякі додаткові параметри, такі як колір, звання і т. п. Поточні налаштування користувачів будуть замінені відповідно до зробленими тут змінами. Зверніть увагу: учасники груп можуть змінювати аватари груп на свої, тільки якщо ви надали їм для цього відповідні права.',
	'GROUP_ERR_USERS_EXIST'			=> 'Зазначені користувачі вже є учасниками цієї групи.',
	'GROUP_FOUNDER_MANAGE'			=> 'Управляється тільки засновником',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Обмежити управління цією групою лише фундаторами. Користувачі, що мають групові права доступу, зможуть бачити дану групу та її учасників.',
	'GROUP_HIDDEN'					=> 'Прихована',
	'GROUP_LANG'					=> 'Мова групи',
	'GROUP_LEAD'					=> 'Лідери групи',
	'GROUP_LEADERS_ADDED'			=> 'Нові лідери успішно додані до групи.',
	'GROUP_LEGEND'					=> 'Відображати групу в легенді',
	'GROUP_LIST'					=> 'Поточні учасники групи',
	'GROUP_LIST_EXPLAIN'			=> 'Це повний список користувачів, які є в даний час учасниками цієї групи. Ви можете видаляти учасників (за винятком деяких спеціальних груп) або додавати нових.',
	'GROUP_MEMBERS'					=> 'Учасники групи',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Це повний список учасників групи. Він складається з окремих розділів для лідерів, кандидатів, які очікують вступу в групу, і діючих учасників. Звідси ви можете керувати всіма аспектами членства і розподілу ролей у групі. Щоб видалити лідера, але залишити його в групі, використовуйте опцію «Зняти лідера групи» замість «Видалити користувача з групи». А щоб зробити звичайного учасника керівником групи, виберіть опцію «Призначити лідером групи».',
	'GROUP_MESSAGE_LIMIT'			=> 'Ліміт приватних повідомлень у кожній папці',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Це налаштування скасує загальний для користувачів ліміт повідомлень. Значення 0 означає, що буде використовуватися користувальницький ліміт за замовчуванням.',
	'GROUP_MODS_ADDED'				=> 'Нові лідери групи успішно додані.',
	'GROUP_MODS_DEMOTED'			=> 'Обрані лідери групи успішно зняті.',
	'GROUP_MODS_PROMOTED'			=> 'Обрані учасники групи успішно призначені лідерами.',
	'GROUP_NAME'					=> 'Назва групи',
	'GROUP_NAME_TAKEN'				=> 'Введена назва групи вже існує. Введіть іншу назву.',
	'GROUP_OPEN'					=> 'Відкрита',
	'GROUP_PENDING'					=> 'Кандидати на вступ до групи',
	'GROUP_MAX_RECIPIENTS'			=> 'Максимальне дозволене число одержувачів ПП',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Максимальну дозволену кількість одержувачів приватного повідомлення. Якщо задано 0, буде використано відповідне значення, вказане в налаштуваннях конференції.',
	'GROUP_OPTIONS_SAVE'			=> 'Загальні параметри групи',
	'GROUP_PROMOTE'					=> 'Призначити лідером групи',
	'GROUP_RANK'					=> 'Звання групи',
	'GROUP_RECEIVE_PM'				=> 'Група може отримувати приватні повідомлення',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Примітка: приховані групи не можуть отримувати приватні повідомлення, незалежно від цієї опції.',
	'GROUP_REQUEST'					=> 'За запитом',
	'GROUP_SETTINGS_SAVE'			=> 'Налаштування групи',
	'GROUP_SKIP_AUTH'				=> 'Виключити лідера групи з прав',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'При включенні опції лідер групи не буде наслідувати права цієї групи.',
	'GROUP_SPECIAL'					=> 'Передвстановлена',
	'GROUP_TEAMPAGE'				=> 'Відображати групу на сторінці відомостей про команду',
	'GROUP_TYPE'					=> 'Тип групи',
	'GROUP_TYPE_EXPLAIN'			=> 'Ця група налаштувань визначає, хто може вступати чи переглядати цю групу.',
	'GROUP_UPDATED'					=> 'Налаштування групи успішно оновлені.',

	'GROUP_USERS_ADDED'				=> 'Нові користувачі успішно додані до групи.',
	'GROUP_USERS_EXIST'				=> 'Обрані користувачі вже є учасниками групи.',
	'GROUP_USERS_REMOVE'			=> 'Користувачі видалені з групи і для них успішно встановлені нові групи за замовчуванням.',

	'LEGEND_EXPLAIN'				=> 'Групи, які відображаються в легенді:',
	'LEGEND_SETTINGS'				=> 'Налаштування легенди груп',
	'LEGEND_SORT_GROUPNAME'			=> 'Сортувати за назвою',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'Вказаний нижче порядок сортування буде проігнорований.',
	
	'MANAGE_LEGEND'			=> 'Управління легендою груп',
	'MANAGE_TEAMPAGE'		=> 'Управління відомостями про команду',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Зробити групою за замовчуванням для кожного її учасника',
	'MEMBERS'				=> 'Учасники',

	'NO_GROUP'					=> 'Група не визначена.',
	'NO_GROUPS_ADDED'      		=> 'Групи ще не додані.',
	'NO_GROUPS_CREATED'			=> 'Групи ще не створені.',
	'NO_PERMISSIONS'			=> 'Не копіювати права доступу',
	'NO_USERS'					=> 'Ви не задали жодного користувача.',
	'NO_USERS_ADDED'			=> 'У групи не були додані користувачі.',
	'NO_VALID_USERS'			=> 'Ви не задали жодного користувача, відповідного для даної дії.',
	
	'SELECT_GROUP'				=> 'Виберіть групу',
	'SPECIAL_GROUPS'			=> 'Попередньо встановлені групи',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Попередньо встановлені групи - це спеціальні групи, які не можуть бути вилучені або змінені безпосередньо. Проте ви можете додавати користувачів в ці групи і змінювати основні налаштування цих груп.',

	'TEAMPAGE'					=> 'Сторінка відомостей про команду',
	'TEAMPAGE_DISP_ALL'			=> 'Всі групи',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Тільки група за замовчуванням',
	'TEAMPAGE_DISP_FIRST'		=> 'Тільки перша група',
	'TEAMPAGE_EXPLAIN'			=> 'Групи, які відображаються на сторінці відомостей про команду:',
	'TEAMPAGE_FORUMS'			=> 'Показати модеровані форуми',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Якщо включено, навпроти кожного модератора буде відображений список модерованих їм форумів. Підвищує навантаження на базу даних на великих конференціях.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Показати групи',
	'TEAMPAGE_SETTINGS'			=> 'Налаштування сторінки даних про команду',
	'TOTAL_MEMBERS'				=> 'Учасники',

	'USERS_APPROVED'				=> 'Користувачі успішно схвалені.',
	'USER_DEFAULT'					=> 'За замовчуванням для користувача',
	'USER_DEF_GROUPS'				=> 'Групи користувачів',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Ці групи створені вами або іншим адміністратором. Ви можете керувати учасниками груп, змінювати налаштування груп і видаляти непотрібні групи.',
	'USER_GROUP_DEFAULT'			=> 'Призначити групою за замовчуванням',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Налаштування цієї групи в якості групи за замовчуванням для доданих до групи користувачів.',
	'USER_GROUP_LEADER'				=> 'Призначити лідером групи',
));
