<?php
/**
*
* acp_common [Ukrainian]
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Адміністратори',
	'ACP_ADMIN_LOGS'			=> 'Лог адміністраторів',
	'ACP_ADMIN_ROLES'			=> 'Ролі адміністраторів',
	'ACP_ATTACHMENTS'			=> 'Вкладення',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Налаштування вкладень',
	'ACP_AUTH_SETTINGS'			=> 'Аутентифікація',
	'ACP_AUTOMATION'			=> 'Автоматизація',
	'ACP_AVATAR_SETTINGS'		=> 'Аватари',

	'ACP_BACKUP'				=> 'Резервне копіювання',
	'ACP_BAN'					=> 'Блокування доступу',
	'ACP_BAN_EMAILS'			=> 'Чорний список email',
	'ACP_BAN_IPS'				=> 'Чорний список IP',
	'ACP_BAN_USERNAMES'			=> 'Чорний список користувачів',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Конфігурація',
	'ACP_BOARD_FEATURES'		=> 'Функції конференції',
	'ACP_BOARD_MANAGEMENT'		=> 'Управління конференцією',
	'ACP_BOARD_SETTINGS'		=> 'Налаштування конференції',
	'ACP_BOTS'					=> 'Пошукові боти',

	'ACP_CAPTCHA'				=> 'Візуальне підтвердження',

	'ACP_CAT_CUSTOMISE'			=> 'Розширення',
	'ACP_CAT_DATABASE'			=> 'База даних',
	'ACP_CAT_DOT_MODS'			=> 'Модулі',
	'ACP_CAT_FORUMS'			=> 'Форуми',
	'ACP_CAT_GENERAL'			=> 'Загальне',
	'ACP_CAT_MAINTENANCE'		=> 'Обслуговування',
	'ACP_CAT_PERMISSIONS'		=> 'Права доступа',
	'ACP_CAT_POSTING'			=> 'Повідомлення',
	'ACP_CAT_STYLES'			=> 'Стилі',
	'ACP_CAT_SYSTEM'			=> 'Система',
	'ACP_CAT_USERGROUP'			=> 'Користувачі та групи',
	'ACP_CAT_USERS'				=> 'Користувачі',
	'ACP_CLIENT_COMMUNICATION'	=> 'Засоби зв\'язку',
	'ACP_COOKIE_SETTINGS'		=> 'Налаштування cookies',
	'ACP_CRITICAL_LOGS'			=> 'Лог помилок',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Додаткові поля в профілі',

	'ACP_DATABASE'				=> 'База даних',
	'ACP_DISALLOW'				=> 'Заборонені імена',
	'ACP_DISALLOW_USERNAMES'	=> 'Заборонені імена',

	'ACP_EMAIL_SETTINGS'		=> 'Налаштування пошти',
	'ACP_EXTENSION_GROUPS'		=> 'Групи розширень файлів',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Управління розширеннями',
	'ACP_EXTENSIONS'			=> 'Розширення',
	

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Локальні права доступу',
	'ACP_FORUM_LOGS'				=> 'Логи',
	'ACP_FORUM_MANAGEMENT'			=> 'Форуми',
	'ACP_FORUM_MODERATORS'			=> 'Модератори форумів',
	'ACP_FORUM_PERMISSIONS'			=> 'Доступ до форумів',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Копіювання прав доступу',
	'ACP_FORUM_ROLES'				=> 'Форумні ролі',

	'ACP_GENERAL_CONFIGURATION'		=> 'Загальні налаштування',
	'ACP_GENERAL_TASKS'				=> 'Загальні завдання',
	'ACP_GLOBAL_MODERATORS'			=> 'Супермодератори',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Глобальні права доступу',
	'ACP_GROUPS'					=> 'Групи',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Форумні права груп',
	'ACP_GROUPS_MANAGE'				=> 'Управління групами',
	'ACP_GROUPS_MANAGEMENT'			=> 'Групи',
	'ACP_GROUPS_PERMISSIONS'		=> 'Права груп',
	'ACP_GROUPS_POSITION'			=> 'Управління розташуванням груп',

	'ACP_ICONS'					=> 'Значки тем',
	'ACP_ICONS_SMILIES'			=> 'Значки тем і смайлики',
	'ACP_INACTIVE_USERS'		=> 'Неактивовані користувачі',
	'ACP_INDEX'					=> 'Головна сторінка',

	'ACP_JABBER_SETTINGS'		=> 'Налаштування Jabber',

	'ACP_LANGUAGE'				=> 'Мови',
	'ACP_LANGUAGE_PACKS'		=> 'Мовні пакети',
	'ACP_LOAD_SETTINGS'			=> 'Навантаження на сервер',
	'ACP_LOGGING'				=> 'Логи',

	'ACP_MAIN'					=> 'Головна сторінка панелі адміністратора',
	
	'ACP_MANAGE_ATTACHMENTS'			=> 'Управління вкладеннями',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Тут можна переглядати і видаляти вкладення, прикріплені до повідомлень у темах і у приватних повідомленнях.',
	
	'ACP_MANAGE_EXTENSIONS'		=> 'Управління розширеннями файлів',
	'ACP_MANAGE_FORUMS'			=> 'Управління форумами',
	'ACP_MANAGE_RANKS'			=> 'Управління званнями',
	'ACP_MANAGE_REASONS'		=> 'Управління скаргами',
	'ACP_MANAGE_USERS'			=> 'Управління користувачами',
	'ACP_MASS_EMAIL'			=> 'Масова розсилка пошти',
	'ACP_MESSAGES'				=> 'Повідомлення',
	'ACP_MESSAGE_SETTINGS'		=> 'Приватні повідомлення',
	'ACP_MODULE_MANAGEMENT'		=> 'Управління модулями',
	'ACP_MOD_LOGS'				=> 'Лог модераторів',
	'ACP_MOD_ROLES'				=> 'Ролі модераторів',

	'ACP_NO_ITEMS'				=> 'Немає об\'єктів для відображення.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Загублені вкладення',

	'ACP_PERMISSIONS'			=> 'Права доступу',
	'ACP_PERMISSION_MASKS'		=> 'Маски прав доступу',
	'ACP_PERMISSION_ROLES'		=> 'Ролі',
	'ACP_PERMISSION_TRACE'		=> 'Трасування прав доступу',
	'ACP_PHP_INFO'				=> 'Відомості про PHP',
	'ACP_POST_SETTINGS'			=> 'Розміщення повідомлень',
	'ACP_PRUNE_FORUMS'			=> 'Очищення форумів',
	'ACP_PRUNE_USERS'			=> 'Очищення списку користувачів',
	'ACP_PRUNING'				=> 'Очистка',

	'ACP_QUICK_ACCESS'			=> 'Швидкий доступ',

	'ACP_RANKS'					=> 'Звання',
	'ACP_REASONS'				=> 'Управління скаргами',
	'ACP_REGISTER_SETTINGS'		=> 'Реєстрація користувачів',

	'ACP_RESTORE'				=> 'Відновлення',

	'ACP_FEED'					=> 'Канали новин',
	'ACP_FEED_SETTINGS'			=> 'Канали новин',

	'ACP_SEARCH'				=> 'Налаштування пошуку',
	'ACP_SEARCH_INDEX'			=> 'Пошукові індекси',
	'ACP_SEARCH_SETTINGS'		=> 'Пошук',

	'ACP_SECURITY_SETTINGS'		=> 'Безпека',
	'ACP_SEND_STATISTICS'		=> 'Статистичні дані',
	'ACP_SERVER_CONFIGURATION'	=> 'Конфігурація сервера',
	'ACP_SERVER_SETTINGS'		=> 'Налаштування сервера',
	'ACP_SIGNATURE_SETTINGS'	=> 'Підписи',
	'ACP_SMILIES'				=> 'Смайлики',
	'ACP_STYLE_MANAGEMENT'		=> 'Управління стилями',
	'ACP_STYLES'				=> 'Стилі',
	'ACP_STYLES_CACHE'			=> 'Очистити кеш',
	'ACP_STYLES_INSTALL'		=> 'Встановити стиль',

	'ACP_SUBMIT_CHANGES'		=> 'Зберегти зміни',

	'ACP_TEMPLATES'				=> 'Шаблони',
	'ACP_THEMES'				=> 'Теми',

	'ACP_UPDATE'					=> 'Оновлення',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Форумні права користувачів',
	'ACP_USERS_LOGS'				=> 'Лог користувачів',
	'ACP_USERS_PERMISSIONS'			=> 'Права користувачів',
	'ACP_USER_ATTACH'				=> 'Вкладення',
	'ACP_USER_AVATAR'				=> 'Аватара',
	'ACP_USER_FEEDBACK'				=> 'Нотатки про користувача',
	'ACP_USER_GROUPS'				=> 'Групи',
	'ACP_USER_MANAGEMENT'			=> 'Користувачі',
	'ACP_USER_OVERVIEW'				=> 'Огляд',
	'ACP_USER_PERM'					=> 'Права доступу',
	'ACP_USER_PREFS'				=> 'Особисті налаштування',
	'ACP_USER_PROFILE'				=> 'Профіль',
	'ACP_USER_RANK'					=> 'Звання',
	'ACP_USER_ROLES'				=> 'Ролі користувачів',
	'ACP_USER_SECURITY'				=> 'Безпека',
	'ACP_USER_SIG'					=> 'Підпис',
	'ACP_USER_WARNINGS'				=> 'Попередження',

	'ACP_VC_SETTINGS'					=> 'Засоби проти спам-ботів',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Перегляд візуального підтвердження',
	'ACP_VERSION_CHECK'					=> 'Перевірка оновлень',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Права адміністраторів',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Права модераторів',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Локальні права',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Права супермодераторів',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Права користувачів',

	'ACP_WORDS'				=> 'Автоцензор',

	'ACTION'				=> 'Дія',
	'ACTIONS'				=> 'Дії',
	'ACTIVATE'				=> 'Включити',
	'ADD'					=> 'Добавити',
	'ADMIN'					=> 'Адміністрування',
	'ADMIN_INDEX'			=> 'Головна',
	'ADMIN_PANEL'			=> 'Панель адміністратора',

	'ADM_LOGOUT'			=> 'Вихід&nbsp;із&nbsp;ACP',
	'ADM_LOGGED_OUT'		=> 'Ви успішно вийшли з панелі адміністратора',

	'BACK'					=> 'Назад',

	'COLOUR_SWATCH'			=> 'Колірна палітра',
	'CONFIG_UPDATED'		=> 'Параметри успішно оновлені.',

	'DEACTIVATE'				=> 'Відключити',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Зазначений шлях «%s» не існує.',
	'DIRECTORY_NOT_DIR'			=> 'Зазначений шлях «%s» не є папкою.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Запис в папку «%s» заборонена.',
	'DISABLE'					=> 'Відключити',
	'DOWNLOAD'					=> 'Завантажити',
	'DOWNLOAD_AS'				=> 'завантажити як',
	'DOWNLOAD_STORE'			=> 'Скачати або зберегти на сервері',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Ви можете безпосередньо завантажити файл або зберегти його на сервері в папці <samp>store/</samp>.',
	'DOWNLOADS'          		=> 'Завантаження',

	'EDIT'					=> 'Змінити',
	'ENABLE'				=> 'Включити',
	'EXPORT_DOWNLOAD'		=> 'Завантажити',
	'EXPORT_STORE'			=> 'Зберегти',
	
	'FILES_GONE'			=> 'Деякі з обраних для видалення вкладень не існують. Вони могли бути видалені раніше. Решта вкладень успішно видалені.',
	'FILES_STATS_WRONG'		=> 'Можливо, статистика вкладень невірна і вимагає синхронізації. Правильні значення: кількість вкладень = %1$d, загальний розмір вкладень = %2$s.',	

	'GENERAL_OPTIONS'		=> 'Загальні параметри',
	'GENERAL_SETTINGS'		=> 'Загальні налаштування',
	'GLOBAL_MASK'			=> 'Глобальна маска доступу',

	'INSTALL'				=> 'Встановити',
	'IP'					=> 'IP-адреса користувача',
	'IP_HOSTNAME'			=> 'IP-адреса або хости',

	'LOAD_NOTIFICATIONS'			=> 'Показувати сповіщення',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Показувати список сповіщень на кожній сторінці (як правило, вгорі).',
	'LOGGED_IN_AS'			=> 'Ви увійшли як:',
	'LOGIN_ADMIN'			=> 'Для входу в панель адміністратора ви повинні бути авторизовані.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Для входу в панель адміністратора необхідно повторно ввести своє ім\'я і пароль.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Перевірка справжності пройшла успішно. Зараз ви будете перенаправлені в панель адміністратора.',
	'LOOK_UP_FORUM'			=> 'Виберіть форум',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Можна вибрати більше одного форуму.',

	'MANAGE'				=> 'Управління',
	'MENU_TOGGLE'			=> 'Показати або приховати бічне меню',
	'MORE'					=> 'Детальніше',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Додаткові відомості »',
	'MOVE_DOWN'				=> 'Вниз',
	'MOVE_UP'				=> 'Вверх',

	'NOTIFY'				=> 'Сповіщення',
	'NO_ADMIN'				=> 'У вас немає прав для доступу в панель адміністратора.',
	'NO_EMAILS_DEFINED'		=> 'Не знайдено правильних адрес електронної пошти.',
	'NO_FILES_TO_DELETE'	=> 'Обрані для видалення вкладень не існує.',
	'NO_PASSWORD_SUPPLIED'	=> 'Необхідно ввести пароль для отримання доступу в панель адміністратора.',

	'OFF'					=> 'Відключено',
	'ON'					=> 'Включено',

	'PARSE_BBCODE'						=> 'Дозволити BBCode',
	'PARSE_SMILIES'						=> 'Дозволити смайлики',
	'PARSE_URLS'						=> 'Дозволити посилання',
	'PERMISSIONS_TRANSFERRED'			=> 'Передача прав доступу',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'В даний час ви використовуєте права користувача %1$s. Ви можете переглядати конференцію з правами даного користувача, але не будете мати доступу до Панелі адміністратора, оскільки права адміністратора не є передані. Ви можете <a href="%2$s"><strong>відновити свої права</strong></a> в будь-який час.',
	'PROCEED_TO_ACP'					=> '%sПерейти в панель адміністратора%s',

	'REMIND'							=> 'Нагадати',
	'RESYNC'							=> 'Синхронізувати',
	'RESYNC_FILES_STATS'				=> 'Синхронізувати статистику вкладень',
	'RESYNC_FILES_STATS_EXPLAIN'		=> 'Перерахунок загальної кількості та розміру вкладень, прикріплених до повідомлень у темах і у приватних повідомленнями.',
	'RETURN_TO'							=> 'Повернутися у…',

	'SELECT_ANONYMOUS'		=> 'Вибрати обліковий запис гостя',
	'SELECT_OPTION'			=> 'Виберіть дію',

	'SETTING_TOO_LOW'		=> 'Введене значення параметра «%1$s» занадто маленьке. Мінімальне допустиме значення — %2$d.',
	'SETTING_TOO_BIG'		=> 'Введене значення параметра «%1$s» занадто велике. Максимальне допустиме значення — %2$d.',
	'SETTING_TOO_LONG'		=> 'Введене значення параметра «%1$s» занадто довге. Максимальна допустима довжина — %2$d.',
	'SETTING_TOO_SHORT'		=> 'Введене значення параметра «%1$s» занадто коротке. Мінімальна допустима довжина — %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Показати всі дії',

	'TOTAL_SIZE'      		=> 'Загальний розмір',

	'UCP'					=> 'Особистий розділ',
	'USERNAMES_EXPLAIN'		=> 'Вводите кожне ім\'я на новому рядку.',
	'USER_CONTROL_PANEL'	=> 'Особистий розділ',

	'WARNING'				=> 'Увага',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Ця сторінка відображає відомості про версії PHP, встановленої на даному сервері. Вона включає докладні відомості про завантажені модулях, доступних змінних і налаштуваннях за замовчуванням. Ця інформація може бути корисною при діагностуванні різних неполадок. Деякі хостинг-компанії обмежують відображення цієї інформації з міркувань безпеки. Не розголошуйте ніяких відомостей з цієї сторінки нікому, крім <a href="https://www.phpbb.com/about/team/">офіційних членів групи підтримки</a>.',

	'NO_PHPINFO_AVAILABLE'	=> 'Інформація про конфігурацію PHP недоступна. Функція phpinfo() відключена з міркувань безпеки.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Це список дій, виконаних адміністраторами конференції. Ви можете сортувати список по імені користувача, датою, IP-адресою або по дії. За наявності необхідних прав ви можете видалити окремі записи або очистити весь лог цілком.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Це список дій, виконаних самою конференцією. Цей журнал надає інформацію, яку можна використовувати для вирішення деяких проблем. Наприклад, з доставкою електронних повідомлень. Ви можете сортувати список по імені користувача, датою, IP-адресою або по дії. За наявності необхідних прав ви можете видалити окремі записи або очистити весь лог цілком.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Це список всіх дій, виконаних модераторами у форумах, темах і повідомленнях. Ви можете сортувати список по імені користувача, датою, IP-адресою або по дії. За наявності необхідних прав ви можете видалити окремі записи або очистити весь лог цілком.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Це список дій, виконаних користувачами або над користувачами (скарги, попередження і замітки про користувачів).',
	'ALL_ENTRIES'				=> 'Усі записи',

	'DISPLAY_LOG'	=> 'Показати записи за',

	'NO_ENTRIES'	=> 'Немає записів за вказаний період.',

	'SORT_IP'		=> 'IP-адреса',
	'SORT_DATE'		=> 'Дата',
	'SORT_ACTION'	=> 'Дія',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Дякуємо за вибір phpBB як рішення для створення конференції. Дана сторінка надає короткий огляд різної статистики. Посилання ліворуч дозволяють управляти всіма аспектами роботи вашої конференції. Кожна сторінка містить інструкції з використання поточного інструменту.',
	'ADMIN_LOG'					=> 'Дії адміністрації',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Нижче знаходиться список п\'яти останніх дій, виконаних адміністраторами конференції. Повну копію журналу можна переглянути, вибравши відповідне посилання у меню або натиснувши посилання нижче «Лог адміністраторів».',
	'AVATAR_DIR_SIZE'			=> 'Розмір папки з аватарами',

	'BOARD_STARTED'		=> 'Дата запуску конференції',
	'BOARD_VERSION'		=> 'Версія phpBB',

	'DATABASE_SERVER_INFO'	=> 'Сервер бази даних',
	'DATABASE_SIZE'			=> 'Розмір бази даних',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Перевантаження функцій налаштовано невірно',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> 'Параметр <var>mbstring.func_overload</var> має дорівнювати 0 або 4. Ви можете перевірити поточне значення на сторінці <samp>Відомості про PHP</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Перетворення кодувань налаштоване невірно',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> 'Параметр <var>mbstring.encoding_translation</var> повинен бути дорівнює 0. Ви можете перевірити поточне значення на сторінці <samp>Відомості про PHP</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'Кодування вхідного потоку HTTP налаштовано невірно',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> 'Параметр <var>mbstring.http_input</var> має дорівнювати <samp>pass</samp>. Ви можете перевірити поточне значення на сторінці <samp>Відомості про PHP</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'Кодування вихідного потоку HTTP налаштовано невірно',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> 'Параметр <var>mbstring.http_output</var> має дорівнювати <samp>pass</samp>. Ви можете перевірити поточне значення на сторінці <samp>Відомості про PHP</samp>.',

	'FILES_PER_DAY'		=> 'Вкладень в день',
	'FORUM_STATS'		=> 'Статистика конференції',

	'GZIP_COMPRESSION'	=> 'Стиснення GZip',

	'NO_SEARCH_INDEX'       => 'Для обраного пошукового механізму «%1$s» відсутні пошукові індекси.<br >Створіть їх у розділі %2$sПошукові індекси%3$s.',
	'NOT_AVAILABLE'		=> 'Недоступно',
	'NUMBER_FILES'		=> 'Вкладень',
	'NUMBER_POSTS'		=> 'Повідомлень',
	'NUMBER_TOPICS'		=> 'Тем',
	'NUMBER_USERS'		=> 'Користувачів',
	'NUMBER_ORPHAN'		=> 'Втрачених вкладень',

 	'PHP_VERSION_OLD'	=> 'Версія PHP на цьому сервері застаріла і не буде підтримуватися майбутніми версіями phpBB. %sДетальніше%s',

	'POSTS_PER_DAY'		=> 'Повідомлень в день',

	'PURGE_CACHE'			=> 'Очистити кеш',
	'PURGE_CACHE_CONFIRM'	=> 'Ви дійсно хочете очистити кеш?',
	'PURGE_CACHE_EXPLAIN'	=> 'Очищення всіх кешованих елементів, включаючи кешовані файли шаблонів і запити.',
	'PURGE_CACHE_SUCCESS'	=> 'Кеш успішно очищений.',

	'PURGE_SESSIONS'			=> 'Очистити всі сесії',
	'PURGE_SESSIONS_CONFIRM'	=> 'Ви дійсно хочете очистити всі поточні сесії?',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Очищення таблиці сесій. Сесії всіх користувачів, що знаходяться в даний момент на конференції, будуть завершені, тому після виконання даної дії їм знову доведеться ввійти на конференцію, ввівши ім\'я та пароль.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Сесії успішно очищені.',

	'RESET_DATE'					=> 'Скидання дати запуску конференції',
	'RESET_DATE_CONFIRM'			=> 'Ви дійсно хочете скинути дату запуску конференції?',
	'RESET_DATE_SUCCESS'			=> 'Дата запуску конференції успішно скинута',
	'RESET_ONLINE'					=> 'Скидання рекорду відвідуваності',
	'RESET_ONLINE_CONFIRM'			=> 'Ви дійсно хочете скинути рекорд відвідуваності конференції?',
	'RESET_ONLINE_SUCCESS'			=> 'Рекорд відвідуваності конференції успішно скинутий',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Ви дійсно хочете синхронізувати статистику вкладень?',
	'RESYNC_POSTCOUNTS'				=> 'Синхронізувати лічильники повідомлень',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Будуть враховані тільки існуючі повідомлення. Видалені повідомлення не будуть підраховані.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Ви дійсно хочете синхронізувати лічильники повідомлень?',
	'RESYNC_POSTCOUNTS_SUCCESS'		=> 'Лічильники повідомлень успішно синхронізовані',
	'RESYNC_POST_MARKING'			=> 'Синхронізувати свої теми',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Ви дійсно хочете синхронізувати свої теми?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Зняття позначок з усіх тим з подальшою коректної маркуванням всіх тем, до яких був доступ в останні шість місяців.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Свої теми успішно синхронізовані',
	'RESYNC_STATS'					=> 'Синхронізувати статистику',
	'RESYNC_STATS_CONFIRM'			=> 'Ви дійсно хочете синхронізувати статистику?',
	'RESYNC_STATS_EXPLAIN'			=> 'Перерахунок загальної кількості повідомлень, тем, користувачів і файлів.',
	'RESYNC_STATS_SUCCESS'			=> 'Статистика успішно синхронізована',
	'RUN'							=> 'Виконати',

	'STATISTIC'					=> 'Статистика',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Синхронізація або скидання статистики',

	'TIMEZONE_INVALID'	=> 'Обраний невірний часовий пояс.',
	'TIMEZONE_SELECTED'	=> '(поточний)',
	'TOPICS_PER_DAY'	=> 'Тем в день',

	'UPLOAD_DIR_SIZE'	=> 'Розмір усіх вкладень',
	'USERS_PER_DAY'		=> 'Користувачів в день',

	'VALUE'						=> 'Значення',
	'VERSIONCHECK_FAIL'			=> 'Не вдалося отримати відомості про останню версію.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Повторно перевірити версію',
	'VIEW_ADMIN_LOG'			=> 'Лог адміністраторів',
	'VIEW_INACTIVE_USERS'		=> 'Неактивовані користувачі',

	'WELCOME_PHPBB'			=> 'Ласкаво просимо в phpBB',
	'WRITABLE_CONFIG'		=> 'Файл <samp>config.php</samp> в даний час доступний для запису. Наполегливо рекомендується змінити право доступу до цього файлу на 640 або принаймні на 644 (наприклад: <a href="http://uk.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Дата деактивації',
	'INACTIVE_REASON'				=> 'Причина',
	'INACTIVE_REASON_MANUAL'		=> 'Обліковий запис вимкнено адміністратором',
	'INACTIVE_REASON_PROFILE'		=> 'Змінено профіль',
	'INACTIVE_REASON_REGISTER'		=> 'Новий обліковий запис',
	'INACTIVE_REASON_REMIND'		=> 'Примусова повторна активація',
	'INACTIVE_REASON_UNKNOWN'		=> 'Невідомо',
	'INACTIVE_USERS'				=> 'Неактивовані користувачі',
	'INACTIVE_USERS_EXPLAIN'		=> 'Нижче знаходиться список зареєстрованих користувачів, облікові записи яких відключені. Ви можете активувати, видалити або відправити неактивованої користувачам електронне повідомлення з нагадуванням про активацію.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Нижче знаходиться список десяти останніх зареєстрованих користувачів, які мають відключені облікові записи. Облікові записи неактивні або тому, що їх активація передбачена налаштуваннями конференції і ще не були активовані, або тому, що були деактивовані. Повний список неактивованих користувачів можна переглянути, вибравши відповідне посилання у меню або натиснувши посилання нижче «Неактивовані користувачі». На сторінці «Неактивовані користувачі» ви можете активувати, видалити або відправити неактивованої користувачам електронне повідомлення з нагадуванням про активацію.',

	'NO_INACTIVE_USERS'	=> 'Немає неактивованих користувачів',

	'SORT_INACTIVE'		=> 'Дата деактивації',
	'SORT_LAST_VISIT'	=> 'Останнє відвідування',
	'SORT_REASON'		=> 'Причина',
	'SORT_REG_DATE'		=> 'Останнє відвідування',
	'SORT_LAST_REMINDER'=> 'Останнє нагадування',
	'SORT_REMINDER'		=> 'Дата нагадування',

	'USER_IS_INACTIVE'		=> 'Користувач не активований',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Надішліть інформацію про ваш сервер і конфігурації phpBB для статистичного аналізу. Вся інформація, яка могла б ідентифікувати вас або ваш сайт, видалено - дані повністю <strong>анонімні</strong>. Грунтуючись на наданій вами інформації, ми будемо приймати рішення про функціональність майбутніх версій phpBB. Статистичні дані представляються публічно. Ми також використовуємо ці дані спільно з проектом PHP (мова програмування, на якому написаний phpBB).',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Використовуючи кнопку нижче, ви можете переглянути всі змінні, які будуть передані.',
	'DONT_SEND_STATISTICS'		=> 'Перехід на головну сторінку панелі адміністратора',
	'GO_ACP_MAIN'				=> 'Перехід на головну сторінку панелі адміністратора',
	'HIDE_STATISTICS'			=> 'Приховати подробиці',
	'SEND_STATISTICS'			=> 'Відправка статистичної інформації',
	'SHOW_STATISTICS'			=> 'Показати подробиці',
	'THANKS_SEND_STATISTICS'	=> 'Дякуємо за надану вами інформацію!',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Додані або змінені права користувачів </strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Додані або змінені права користувачів груп</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Додані або змінені права супермодераторів користувачів</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Додані або змінені права супермодераторів груп</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Додані або змінені права адміністраторів користувачів</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Додані або змінені права адміністраторів груп</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Додані або змінені адміністратори</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Додані або змінені супермодератори</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Доданий або змінений доступ користувачів до форуму</strong> із %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Доданий або змінений доступ модератора до форуму</strong> із %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Доданий або змінений доступ груп до форуму</strong> із %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Доданий або змінений модераторський доступ груп до форуму</strong> із %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Додані або змінені модератори</strong> із %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>ДДоданий або змінений доступ до форуму</strong> із %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Видалені адміністратори</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Видалені супермодератори</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Видалені модератори</strong> із %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Видалений доступ користувача/групи до форуму</strong> із %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Перенесені права доступу користувача</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Повернуто свої права доступу після використання прав користувача</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Невдала спроба входу в якості адміністратора</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Успішний вхід в якості адміністратора</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Видалені вкладення користувача</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Додано або змінено розширення вкладень</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Видалено розширення вкладень</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Оновлено розширення вкладень</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Додана група розширень</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Змінено групу розширень</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Видалена група розширень</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Не вкладений файл прикріплений до повідомлення</strong><br />» ID %1$d — %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Не вкладені файли видалені</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Виключений користувач зі списку заблокованих</strong> з причини "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Виключена IP-адреса зі списку заблокованих</strong> з причини "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Виключена email-адреса зі списку заблокованих</strong> з причини "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Заблокований користувач</strong> з причини "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>Заблокована IP-адреса</strong> з причини "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Заблокована email-адреса</strong> з причини "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Розблокований користувач</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Розблокована IP-адреса</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Розблокована email-адреса</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Доданий новий BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Змінений BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Видалений BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Доданий новий бот</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Видалений бот</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Оновлений існуючий бот</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Очищений лог адміністратора</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Очищений лог помилок</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Очищений лог модератора</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Очищений лог користувача</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Очищені логи користувачів</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Змінені налаштування вкладень</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Змінені налаштування аутентифікації</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Змінені налаштування аватар</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Змінені налаштування cookies</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Змінені налаштування пошти</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Змінені можливості конференції</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Змінені налаштування навантаження на сервер</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Змінені налаштування приватних повідомлень</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Змінені налаштування повідомлень</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Змінені налаштування реєстрації користувачів</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Змінені налаштування каналів новин</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Змінені налаштування пошуку</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Змінені налаштування безпеки</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Змінені налаштування сервера</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Змінені налаштування конференції</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Змінені налаштування підписів</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Змінені налаштування засобів проти спам-ботів</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Схвалена тема</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Піднята тема</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Видалено повідомлення «%1$s», опубліковане користувачем </strong><br />» %2$s',
	'LOG_DELETE_TOPIC'			=> '<strong>видалена тема «%1$s», створена користувачем </strong><br />» %2$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Видалино посилання на перенесену тему</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Скопійована тема</strong><br />» із форума %s',
	'LOG_LOCK'					=> '<strong>Закрита тема</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Заблоковано повідомлення</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Об\'єднані повідомлення</strong> в тему<br />» %s',
	'LOG_MOVE'					=> '<strong>Переміщена тема</strong><br />» із %1$s у %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Закрита скарга на приватне повідомлення</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Видалена скарга на приватне повідомлення</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Схвалення повідомлення</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Відхилення повідомлення «%1$s» з причини</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Редагування повідомлення в темі «%1$s», написаного автором</strong><br />» %2$s',
	'LOG_POST_RESTORED'			=> '<strong>Відновлено повідомлення</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Закриття скарги</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Видалення скарги</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Відновлена ​​тема «%1$s» написана автором</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Видалено повідомлення «%1$s» автора</strong><br />» %2$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Видалено тему «%1$s» написана автором</strong><br />» %2$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Переміщені розділені повідомлення</strong><br />» в %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Розділені повідомлення</strong><br />» із %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Схвалення теми</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Відновлена ​​тема</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Відхилення теми «%1$s» з причини</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Синхронізовані лічильники теми</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Змінено тип теми</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Відкрита тема</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Розблоковано повідомлення</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Заборонене ім\'я</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Дозволене ім\'я</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Резервне копіювання бази даних</strong>',
	'LOG_DB_DELETE'			=> '<strong>Видалення резервної копії бази даних</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Відновлення бази даних</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Виключена IP-адреса/хост зі списку завантажування</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Додана IP-адреса/хост до списку завантажування</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Видалена IP-адреса/хост зі списку завантажування</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Помилка Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Помилка пошти</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Створено форум</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Скопійовані права доступу</strong> із форума «%1$s» у форум<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Видалений форум</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Видалений форум з підфорумами</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Видалений форум і переміщені підфоруми</strong> у %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Видалений форум і переміщені повідомлення</strong> у %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Видалений форум з підфоруму, переміщені повідомлення</strong> у %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Видалений форум, переміщені повідомлення</strong> у %1$s <strong>і підфоруми</strong> у %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Видалений форум з повідомленнями</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Видалений форум з повідомленнями та подфоруму</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Видалений форум з повідомленнями, переміщені підфоруми</strong> у %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Змінена інформація про форум</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Переміщений форум</strong> %1$s <strong>під</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>переміщений форум</strong> %1$s <strong>над</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Синхронізований форум</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Сталася загальна помилка:</strong> %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Створена група користувачів</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Група «%1$s» встановлена ​​за замовчуванням для користувачів</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Видалена група</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Зняті лідери в групі</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Призначені лідери в групі</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Видалені користувачі з групи</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Оновлена інформацію про групу</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Додані нові лідери в групу</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Додані користувачі до групи</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Схвалені кандидати в групу</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Користувачі запросили вступу до групи «%1$s» і очікують схвалення</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Помилка при створенні зображення</strong><br />» Помилка в %1$s в рядку %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Активовані користувачі</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Видалені неактивовані користувачі</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Відправлені email-нагадування неактивованим користувачам</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Конференція %1$s сконвертована в phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Встановлений phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Невдала перевірка сесії по IP-адресу/браузеру/X_FORWARDED_FOR</strong><br />»IP-адреса користувача «<em>%1$s</em>» перевірений за IP-адресою сесії «<em>%2$s</em>», рядок браузера користувача «<em>%3$s</em>» перевірена по рядку браузера сесії «<em>%4$s</em>» і рядок X_FORWARDED_FOR пользователя «<em>%5$s</em>» перевірена по рядку X_FORWARDED_FOR сесії «<em>%6$s</em>».',

	'LOG_JAB_CHANGED'			=> '<strong>Змінилася обліковий запис Jabber</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Змінений пароль Jabber</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Зареєстрований обліковий запис Jabber</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Змінені налаштування Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Видалений мовний пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Встановлений мовний пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Оновлена інформацію про мовний пакет</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Замінений мовний файл</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Відправлений мовний файл і поміщений в папку store</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Зроблена масова розсилка пошти</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Змінений автор теми «%1$s»</strong><br />» з %2$s на %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Відключено модуль</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Включено модуль</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Переміщення модуля</strong><br />» «%1$s» під «%2$s»',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Переміщення модуля</strong><br />» «%1$s» над «%2$s»',
	'LOG_MODULE_REMOVED'	=> '<strong>Видалений модуль</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Додано модуль</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Змінений модуль</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Додана роль адміністратора</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Змінена роль адміністратора</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Видалена роль адміністратора</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Додана форумна роль</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Змінена форумна роль</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Видалена форумна роль</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Додана роль модератора</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Змінена роль модератора</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Видалена роль модератора</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Додана роль користувача</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Змінена роль користувача</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Видалена роль користувача</strong><br />» %s',
	
	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Неможливо відкрити %1$s для очищення, перевірте права доступу.</strong><br />Виняток: %2$s<br />Додаткові відомості: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Активовано поле профілю</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Додано поле профілю</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Деактивовано поле профілю</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Змінено поле профілю</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Видалено поле профілю</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Очищені форуми</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Проведене автоочищення форумів</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Деактивовані користувачі</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Видалені користувачі з їх повідомленнями</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Видалені користувачі, їхні повідомлення залишені</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Очищення кешу</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Очищення сесій</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Додано звання</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Видалено звання</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Оновлено звання</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Додана причина скарги/відхилення</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Видалена причина скарги/відхилення</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Оновлена ​​причина скарги/відхилення</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Перевірка реферера не вдалася </strong><br />Рефер: «<em>%1$s</em>». Запит був відхилений, сесія видалена.',
	'LOG_RESET_DATE'			=> '<strong>Скинута дата запуску конференції</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Скинутий рекорд відвідуваності</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Синхронізована статистика вкладень</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Синхронізовані лічильники повідомлень користувачів</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Синхронізовані свої теми</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Синхронізувала статистика повідомлень, тем і користувачів</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Створені пошукові індекси для</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Видалені пошукові індекси для</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Помилка Sphinx</strong><br />В» %s',
	'LOG_STYLE_ADD'				=> '<strong>Доданий стиль</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Видалений стиль</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Змінений стиль</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Експортований стиль</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Додано шаблон до бази даних</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Додано шаблон на сервер</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Видалена кешована версія файлів шаблону <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Видалений шаблон</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Змінений шаблон <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Змінена інформація про шаблон</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Експортований шаблон</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Оновлений шаблон</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Додана тема в базу даних</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Додана тема на сервер</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Видалена тема</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Змінена інформація про тему</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Змінена тема <em>%1$s</em></strong><br />» Змінено клас <em>%2$s</em>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Зміна теми оформлення стилю <em>%1$s</em></strong><br />» Змінений файл <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Експортована тема</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Оновлена ​​тема</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Оновлена ​​база даних з версії %1$s до версії %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Оновлений phpBB з версії %1$s до версії %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Активований користувач</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Заблокований користувач через розділ Управління користувачами</strong> з причини «<em>%1$s</em>»<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Заблокована IP-адреса через розділ Управління користувачами</strong> з причини «<em>%1$s</em>»<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Заблокована email-адреса через розділ Управління користувачами</strong> з причини "<em>%1$s</em>»<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Видалений користувач</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Видалені всі вкладення користувача</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Видалена аватара користувача</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Очищена папка «Вихідні» користувача</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Видалені всі повідомлення користувача</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Видалений підпис користувача</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Деактивований користувач</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Переміщені повідомлення користувача</strong><br />» «%1$s» у форум «%2$s»',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Змінений пароль користувача</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Примусова повторна активація облікового запису користувача</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Видалений прапорець нової реєстрації користувача</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Користувачем «%1$s» змінений email-адресу</strong><br />» з «%2$s» на «%3$s»',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Змінено ім\'я користувача</strong><br />» з «%1$s» на «%2$s»',
	'LOG_USER_USER_UPDATE'	=> '<strong>Оновлена інформацію про користувача</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Активований обліковий запис користувача</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Видалена аватара користувача</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Видалений підпис користувача</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Додана замітка про користувача</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Доданий елемент:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Деактивований обліковий запис користувача</strong>',
	'LOG_USER_LOCK'				=> '<strong>Користувач закрив свою тему</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Переміщені всі повідомлення в форум «%s»</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Примусова повторна активація облікового запису користувача</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Користувач відкрив свою тему</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Винесено попередження користувачеві</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Користувачеві винесено наступне попередження</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Користувач змінив групу за замовчуванням</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Користувач знятий з лідерів групи</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Користувач вступив до групи</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Користувач подав запит на вступ до групи і повинен бути схвалений</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Користувач відмовився від участі в групі</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Видалено попередження у користувача</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>Видалено %2$s попереджень у користувача</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Видалені всі попередження у користувача</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Доданий цензор слів</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Видалений цензор слів</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Змінений цензор слів</strong><br />» %s',
));
