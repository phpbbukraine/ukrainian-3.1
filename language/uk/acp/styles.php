<?php
/**
*
* acp_styles [Ukrainian]
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
	'ACP_STYLES_EXPLAIN'	=> 'Тут ви можете керувати стилями, доступними на конференції. Ви можете змінювати існуючі стилі, видаляти, деактивувати, повторно активувати, встановлювати нові. Ви також можете побачити, як виглядатиме стиль, використовуючи функцію попереднього перегляду. Також зазначена загальна кількість користувачів для кожного стилю. Врахуйте, що примусова заміна стилів користувачів тут не проводиться.',
	'ADD_TEMPLATE'			=> 'Створити шаблон',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Тут ви можете створити новий шаблон. Залежно від конфігурації сервера та прав доступу до файлів вам можуть надаватися додаткові можливості. Наприклад, створення шаблону на основі вже існуючого. Вам також можуть надаватися завантаження або імпорт (з папки store) архіву шаблону. При закачуванні або імпортуванні архіву ім\'я набору малюнків можна взяти з імені файлу архіву (для цього залиште порожнім поле з ім\'ям шаблону).',
	'ARCHIVE_FORMAT'		=> 'Тип архіва',
	'AUTOMATIC_EXPLAIN'		=> 'Залиште поле порожнім для автоматичного визначення.',

	'BACKGROUND'			=> 'Фон',
	'BACKGROUND_COLOUR'		=> 'Колір фона',
	'BACKGROUND_IMAGE'		=> 'Фонове зображення',
	'BACKGROUND_REPEAT'		=> 'Повторення фону',
	'BOLD'					=> 'Напівжирний',

	'CACHE'							=> 'Кеш',
	'CACHE_CACHED'					=> 'Дата кешування',
	'CACHE_FILENAME'				=> 'Файл шаблона',
	'CACHE_FILESIZE'				=> 'Розмір файла',
	'CACHE_MODIFIED'				=> 'Дата зміни',
	'CANNOT_BE_INSTALLED'			=> 'Неможливо встановити',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Ви дійсно хочете видалити всі кешовані версії файлів шаблону?',
	'CONFIRM_DELETE_STYLES'			=> 'Ви дійсно хочете видалити вибрані стилі?',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Ви дійсно хочете скасувати встановлення стиля?',
	'COPYRIGHT'						=> 'Копірайт',
	'CREATE_STYLE'					=> 'Створити стиль',
	'CREATE_TEMPLATE'				=> 'Створити шаблон',
	'CREATE_THEME'					=> 'Створити тему',
	'CURRENT_IMAGE'					=> 'Поточне зображення',

	'DEACTIVATE_DEFAULT'		=> 'Ви не можете зробити неактивним стиль за замовчуванням.',
	'DELETE_FROM_FS'			=> 'Видалити з сервера',
	'DELETE_STYLE'				=> 'Видалити стиль',
	'DELETE_STYLE_EXPLAIN'		=> 'Тут ви можете видалити вибраний стиль. Будьте обережні, видалення не можна буде скасувати.',
	'DELETE_STYLE_FILES_FAILED'	=> 'При видаленні файлів стилю «%s» сталася помилка.',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Файли стилю «%s» успішно видалені.',
	'DELETE_TEMPLATE'			=> 'Видалити шаблон',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Тут ви можете видалити вибраний шаблон з бази даних. Врахуйте, що скасувати видалення неможливо. Рекомендується спочатку експортувати шаблон для можливого використання в майбутньому.',
	'DELETE_THEME'				=> 'Видалити тему',
	'DELETE_THEME_EXPLAIN'		=> 'Тут ви можете видалити обрану тему з бази даних. Врахуйте, що скасувати видалення неможливо. Рекомендується спочатку експортувати тему для можливого використання в майбутньому.',
	'DETAILS'					=> 'Інформація',
	'DIMENSIONS_EXPLAIN'		=> 'Виберіть «Так» для врахування параметрів ширини/висоти.',

	'EDIT_DETAILS_STYLE'				=> 'Редагувати стиль',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'У формі нижче ви можете змінювати існуючий стиль. Ви можете комбінувати шаблони і теми, що становлять сам стиль. Ви також можете призначити стиль за замовчуванням.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Редагувати інформацію про шаблон',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Тут ви можете редагувати деякі відомості про шаблон, такі як його найменування.',
	'EDIT_DETAILS_THEME'				=> 'Редагувати інформацію про тему',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Тут ви можете редагувати деякі відомості про тему, такі як її найменування. Ви можете також змінити місце зберігання параметрів стилю з сервера на базу даних і назад. Ця можливість залежить від конфігурації PHP і від наявності дозволу на запис параметрів стилю веб-сервером.',
	'EDIT_IMAGESET'						=> 'Редагувати набір зображень',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Тут ви можете редагувати окремі зображення, що входять в набір. Ви можете також вказати, чи враховувати розміри зображення. Облік розмірів не є обов\'язковим, але може вирішити проблеми відображення в деяких браузерах. Якщо розміри зображення не враховуються, це трохи зменшить розмір бази даних.',
	'EDIT_TEMPLATE'						=> 'Редагувати шаблон',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Тут ви можете безпосередньо редагувати шаблон. Будь ласка, не забувайте, що внесені зміни остаточними і не можуть бути скасовані. Будь ласка, будьте акуратні, редагуючи шаблон, не забувайте закривати всі змінні шаблону {XXXX} і умовні оператори.',
	'EDIT_THEME'						=> 'Редагувати тему',
	'EDIT_THEME_EXPLAIN'				=> 'Тут ви можете редагувати вибрану тему, змінювати кольори, зображення і т. д.',
	'EDITOR_DISABLED'					=> 'Редактор шаблонів вимкнено.',
	'EXPORT'							=> 'Експорт',

	'FOREGROUND'			=> 'Передній план',
	'FONT_COLOUR'			=> 'Колір шрифта',
	'FONT_FACE'				=> 'Тип шрифта',
	'FONT_FACE_EXPLAIN'		=> 'Ви можете задати кілька шрифтів, розділених комами. Якщо у користувача не встановлено перший із заданих шрифтів, буде обраний перший встановлений зі списку.',
	'FONT_SIZE'				=> 'Розмір шрифта',

	'GLOBAL_IMAGES'			=> 'Загальні',

	'HIDE_CSS'				=> 'Приховати код CSS',

	'IMAGE_WIDTH'				=> 'Ширина зображення',
	'IMAGE_HEIGHT'				=> 'Висота зображення',
	'IMAGE'						=> 'Зображення',
	'IMAGE_NAME'				=> 'Ім\'я зображення',
	'IMAGE_PARAMETER'			=> 'Параметр',
	'IMAGE_VALUE'				=> 'Значення',
	
	'ITALIC'					=> 'Курсив',

	'IMG_CAT_BUTTONS'		=> 'Кнопки на інших мовах',
	'IMG_CAT_CUSTOM'		=> 'Користувальницькі зображення',
	'IMG_CAT_FOLDERS'		=> 'Значки тем',
	'IMG_CAT_FORUMS'		=> 'Значки форумів',
	'IMG_CAT_ICONS'			=> 'Загальні значки',
	'IMG_CAT_LOGOS'			=> 'Логотипи',
	'IMG_CAT_POLLS'			=> 'Зображення опитувань',
	'IMG_CAT_UI'			=> 'Загальні елементи призначеного для користувача інтерфейсу',
	'IMG_CAT_USER'			=> 'Додаткові зображення',

	'IMG_SITE_LOGO'			=> 'Головний логотип',
	'IMG_UPLOAD_BAR'		=> 'Стан завантаження',
	'IMG_POLL_LEFT'			=> 'Опитування ліворуч',
	'IMG_POLL_CENTER'		=> 'Опитування в центрі',
	'IMG_POLL_RIGHT'		=> 'Опитування праворуч',
	'IMG_ICON_FRIEND'		=> 'Додати до списку друзів',
	'IMG_ICON_FOE'			=> 'Додати до списку недругів',

	'IMG_FORUM_LINK'			=> 'Посилання на форум',
	'IMG_FORUM_READ'			=> 'Форум',
	'IMG_FORUM_READ_LOCKED'		=> 'Форум закритий',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Підфорум',
	'IMG_FORUM_UNREAD'			=> 'Форум з непрочитаними повідомленнями',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Закритий форум з непрочитаними повідомленнями',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Підфорум з непрочитаними повідомленнями',
	'IMG_SUBFORUM_READ'			=> 'Легенда підфорума',
	'IMG_SUBFORUM_UNREAD'		=> 'Легенда іодфорума з непрочитаними повідомленнями',

	'IMG_TOPIC_MOVED'			=> 'Перенесена тема',

	'IMG_TOPIC_READ'				=> 'Тема',
	'IMG_TOPIC_READ_MINE'			=> 'Тема з моїми повідомленнями',
	'IMG_TOPIC_READ_HOT'			=> 'Популярна тема',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Популярна тема з моїми повідомленнями',
	'IMG_TOPIC_READ_LOCKED'			=> 'Закрита тема',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Закрита тема з моїми повідомленнями',

	'IMG_TOPIC_UNREAD'				=> 'Тема з непрочитаними повідомленнями',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Тема з непрочитаними повідомленнями, що містить мої повідомлення',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Популярна тема з непрочитаними повідомленнями',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Популярна тема з непрочитаними повідомленнями, що містить мої повідомлення',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Закрита тема з непрочитаними повідомленнями',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Закрита тема з непрочитаними повідомленнями, що містить мої повідомлення',

	'IMG_STICKY_READ'				=> 'Прикріплена тема тема',
	'IMG_STICKY_READ_MINE'			=> 'Прикріплена тема з моїми повідомленнями',
	'IMG_STICKY_READ_LOCKED'		=> 'Закрита прикріплена тема',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Закрита прикріплена тема з моїми повідомленнями',
	'IMG_STICKY_UNREAD'				=> 'Прикріплена тема з непрочитаними повідомленнями',
	'IMG_STICKY_UNREAD_MINE'		=> 'Прикріплена тема з непрочитаними повідомленнями, що містить мої повідомлення',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Закрита прикріплена тема з непрочитаними повідомленнями',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Закрита прикріплена тема з непрочитаними повідомленнями, що містить мої повідомлення',

	'IMG_ANNOUNCE_READ'					=> 'Оголошення',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Оголошення з моїми повідомленнями',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Закрите оголошення',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Закрите оголошення з моїми повідомленнями',
	'IMG_ANNOUNCE_UNREAD'				=> 'Оголошення з непрочитаними повідомленнями',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Оголошення з непрочитаними повідомленнями, що містить мої повідомлення',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Закрите оголошення з непрочитаними повідомленнями',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Закрите оголошення з непрочитаними повідомленнями, що містить мої повідомлення',

	'IMG_GLOBAL_READ'					=> 'Важлива тема',
	'IMG_GLOBAL_READ_MINE'				=> 'Важлива тема з моїми повідомленнями',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Закрита важлива тема',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Закрита важлива тема з моїми повідомленнями',
	'IMG_GLOBAL_UNREAD'					=> 'Важлива тема з непрочитаними повідомленнями',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Важлива тема з непрочитаними повідомленнями, що містить мої повідомлення',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Закрита важлива тема з непрочитаними повідомленнями',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Закрита важлива тема з непрочитаними повідомленнями, що містить мої повідомлення',

	'IMG_PM_READ'		=> 'Прочитане приватне повідомлення',
	'IMG_PM_UNREAD'		=> 'Непрочитане приватне повідомлення',

	'IMG_ICON_BACK_TOP'		=> 'Наверх',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Надіслати електронне повідомлення',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'WLM',
	'IMG_ICON_CONTACT_PM'		=> 'Надіслати приватне повідомлення',

	'IMG_ICON_POST_DELETE'			=> 'Видалити повідомлення',
	'IMG_ICON_POST_EDIT'			=> 'Редагувати повідомлення',
	'IMG_ICON_POST_INFO'			=> 'Інформація про повідомлення',
	'IMG_ICON_POST_QUOTE'			=> 'Цитувати повідомлення',
	'IMG_ICON_POST_REPORT'			=> 'Поскаржитися на повідомлення',
	'IMG_ICON_POST_TARGET'			=> 'Значок повідомлення',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Значок нового повідомлення',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Додатковий файл',
	'IMG_ICON_TOPIC_LATEST'			=> 'Останнє повідомлення',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Останнє непрочитане повідомлення',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Оскаржуване повідомлення',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Відхилене повідомлення',

	'IMG_ICON_USER_ONLINE'		=> 'Користувач в мережі',
	'IMG_ICON_USER_OFFLINE'		=> 'Користувач не в мережі',
	'IMG_ICON_USER_PROFILE'		=> 'Показати профіль користувача',
	'IMG_ICON_USER_SEARCH'		=> 'Пошук повідомлень',
	'IMG_ICON_USER_WARN'		=> 'Винести попередження користувачеві',

	'IMG_BUTTON_PM_FORWARD'		=> 'Переслати приватне повідомлення',
	'IMG_BUTTON_PM_NEW'			=> 'Нове приватне повідомлення',
	'IMG_BUTTON_PM_REPLY'		=> 'Відповісти на приватне повідомлення',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Тема закрита',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Нова тема',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Відповісти на тему',

	'IMG_USER_ICON1'		=> 'Користувацьке зображення 1',
	'IMG_USER_ICON2'		=> 'Користувацьке зображення 2',
	'IMG_USER_ICON3'		=> 'Користувацьке зображення 3',
	'IMG_USER_ICON4'		=> 'Користувацьке зображення 4',
	'IMG_USER_ICON5'		=> 'Користувацьке зображення 5',
	'IMG_USER_ICON6'		=> 'Користувацьке зображення 6',
	'IMG_USER_ICON7'		=> 'Користувацьке зображення 7',
	'IMG_USER_ICON8'		=> 'Користувацьке зображення 8',
	'IMG_USER_ICON9'		=> 'Користувацьке зображення 9',
	'IMG_USER_ICON10'		=> 'Користувацьке зображення 10',

	'INACTIVE_STYLES'			=> 'Неактивні стилі',
	'INCLUDE_DIMENSIONS'		=> 'Врахувати розміри',
	'INCLUDE_TEMPLATE'			=> 'Включити шаблон',
	'INCLUDE_THEME'				=> 'Включити тему',
	'INHERITING_FROM'			=> 'Наслідує із',
	'INSTALL_STYLE'				=> 'Встановити стиль',
	'INSTALL_STYLES'			=> 'Встановити стилі',
	'INSTALL_STYLES_EXPLAIN'	=> 'Тут ви можете встановити нові стилі. <br /> У разі, якщо який-небудь стиль в списку нижче, перевірте, чи не був він вже встановлений. Якщо ні, перевірте правильність завантаження стилю на сервер',
	'INSTALL_TEMPLATE'			=> 'Встановити шаблон',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Тут ви можете встановити новий шаблон. Залежно від конфігурації сервера вам можуть бути доступні різні можливості.',
	'INSTALL_THEME'				=> 'Встановити тему',
	'INSTALL_THEME_EXPLAIN'		=> 'Тут ви можете встановити обрану тему. Ви можете відредагувати деякі налаштування або використовувати установки за замовчуванням.',
	'INSTALLED_IMAGESET'		=> 'Встановлені набори зображень',
	'INSTALLED_STYLE'			=> 'Встановлені стилі',
	'INVALID_STYLE_ID'			=> 'Невірний ідентифікатор (ID) стилю.',

	'LINE_SPACING'				=> 'Інтервал між лініями',
	'LOCALISED_IMAGES'			=> 'Зображення на інших мовах',

	'NO_CLASS'					=> 'Не вдалося знайти клас в таблиці стилів.',
	'NO_IMAGE'					=> 'Без малюнка',
	'NO_IMAGE_ERROR'			=> 'Не вдалося знайти малюнок на сервері.',
	'NO_MATCHING_STYLES_FOUND'	=> 'Немає стилів, які відповідають запиту.',
	'NO_STYLE'					=> 'Не вдалося знайти стиль на сервері.',
	'NO_TEMPLATE'				=> 'Не вдалося знайти шаблон на сервері.',
	'NO_THEME'					=> 'Не вдалося знайти тему на сервері.',
	'NO_UNINSTALLED_STYLE'		=> 'Всі стилі встановлені',
	'NO_UNIT'					=> 'Ні',

	'ONLY_STYLE'			=> 'Ви не можете видалити останній залишився стиль.',
	
	'PARENT_STYLE_NOT_FOUND'	=> 'Батьківський стиль не знайдений. Даний стиль може працювати з помилками. Будь ласка, видаліть його.',
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

	'SELECT_IMAGE'				=> 'Вибрати зображення',
	'SELECT_TEMPLATE'			=> 'Вибрати файл шаблону',
	'SELECT_THEME'				=> 'Виберіть файл теми',
	'SELECTED_IMAGE'			=> 'Вибране зображення',
	'SELECTED_TEMPLATE'			=> 'Вибраний шаблон',
	'SELECTED_TEMPLATE_FILE'	=> 'Вибраний файл шаблона',
	'SELECTED_THEME'			=> 'Вибрана тема',
	'SELECTED_THEME_FILE'		=> 'Вибраний файл теми',
	'STORE_FILESYSTEM'			=> 'Сервер',
	'STYLE_ACTIVATE'			=> 'Активувати',
	'STYLE_ACTIVATED'			=> 'Стиль успішно активований',
	'STYLE_ACTIVE'				=> 'Активований',
	'STYLE_ADDED'				=> 'Стиль успішно доданий.',
	'STYLE_DEACTIVATE'			=> 'Деактивувати',
	'STYLE_DEACTIVATED'			=> 'Стиль успішно деактивований',
	'STYLE_DEFAULT'				=> 'Призначити використовуваним за замовчуванням',
	'STYLE_DEFAULT_CHANGE'		=> 'Змінити стиль за замовчуванням',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Необхідно активувати стиль перш, ніж призначити його стилем за умовчанням.',
	'STYLE_DELETED'				=> 'Стиль «%s» успішно видалений.',
	'STYLE_DETAILS_UPDATED'		=> 'Стиль успішно змінений.',
	'STYLE_ERR_ARCHIVE'			=> 'Виберіть метод архівування.',
	'STYLE_ERR_COPY_LONG'		=> 'Довжина авторських прав не може перевищувати 60 символів.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Батьківський стиль невірний.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Необхідно вибрати хоча б один елемент стилю.',
	'STYLE_ERR_NAME_CHARS'		=> 'Ім\'я стилю може містити тільки буквено-цифрові символи, -, +, _ і пробіл.',
	'STYLE_ERR_NAME_EXIST'		=> 'Стиль з таким ім\'ям вже існує.',
	'STYLE_ERR_NAME_LONG'		=> 'Ім\'я стилю не може перевищувати 30 символів.',
	'STYLE_ERR_NOT_STYLE'		=> 'Імпортований або завантажений файл не містить архіву стилю.',
	'STYLE_ERR_STYLE_NAME'		=> 'Ви повинні задати ім\'я для цього стилю.',
	'STYLE_EXPORT'				=> 'Експорт стилю',
	'STYLE_EXPORT_EXPLAIN'		=> 'Тут ви можете експортувати стиль у вигляді архіву. Стиль може не містити всіх елементів, але повинен містити хоча б один з них. Наприклад, якщо ви створили нову тему для спільної використовуваного шаблону, ви можете просто експортувати тему без шаблону. Ви можете вибрати, завантажувати чи файл безпосередньо, або зберегти його в папці store, щоб завантажити його пізніше через FTP.',
	'STYLE_EXPORTED'			=> 'Стиль успішно експортований і збережений в папці %s.',
	'STYLE_INSTALLED'			=> 'Стиль «%s» успішно встановлений.',
	'STYLE_INSTALLED_EDIT_DETAILS'	=> '<a href="%s">Натисніть сюди</a> для редагування інформації про стиль або зміни стилю за замовчуванням.',
	'STYLE_INSTALLED_RETURN_STYLES'	=> '<a href="%s">Натисніть сюди</a> для повернення до списку встановлених стилів.',
	'STYLE_INSTALLED_RETURN_UNINSTALLED'	=> '<a href="%s">Натисніть сюди</a> для повернення до встановлення інших стилів.',
	'STYLE_NAME'				=> 'Ім\'я стиля',
	'STYLE_NOT_INSTALLED'		=> 'Не вдалося встановити стиль «%s».',
	'STYLE_PATH'				=> 'Шлях до стилю:',
	'STYLE_PARENT'				=> 'Батьківський стиль:',
	'STYLE_TEMPLATE'			=> 'Шаблон',
	'STYLE_THEME'				=> 'Тема',
	'STYLE_UNINSTALL'			=> 'Видалити',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Стиль «%s» не може бути вилучений, бо є батьківським для інших стилів.',
	'STYLE_UNINSTALLED'			=> 'Стиль «%s» успішно видалено.',
	'STYLE_USED_BY'				=> 'Використовують (з ботами)',

	'TEMPLATE_ADDED'			=> 'Шаблон успішно доданий.',
	'TEMPLATE_CACHE'			=> 'Кеш шаблонів',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'За замовчуванням phpBB кешируєт скомпільовану версію шаблонів. Це зменшує навантаження на сервер при кожному перегляді сторінок і, таким чином, може знизити час їх генерації. Тут ви можете переглянути статус кешу для кожного з файлів і видалити окремі файли або весь кеш.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Кеш шаблону успішно очищений.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Немає кешованих шаблонів.',
	'TEMPLATE_DELETED_FS'		=> 'Шаблон видалено з бази даних, але його файли залишилися на сервері.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Інформація про шаблон успішно оновлено.',
	'TEMPLATE_EDITOR'			=> 'Редактор HTML-кода шаблонів',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Висота редактора шаблону',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Будь ласка, виберіть метод архівування.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Неможливо відкрити папку кешу, використовувана для зберігання кешованих версій файлів шаблону.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Довжина копірайту не може бути більше 60 символів.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Ім\'я шаблону може містити тільки буквено-цифрові символи, -, +, _ и пробіл.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Ім\'я шаблону не може бути довше 30 символів.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Необхідно задати ім\'я для цього шаблону.',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Тут ви можете експортувати шаблон у вигляді архіву. Цей архів буде містити всі файли, необхідні для встановлення шаблону на іншу конференцію. Ви можете вибрати, завантажувати чи файл безпосередньо або зберегти його в папці store, щоб завантажити його пізніше через FTP.',
	'TEMPLATE_EXPORTED'			=> 'Шаблон успішно експортований і збережений у %s.',
	'TEMPLATE_FILE'				=> 'Файл шаблона',
	'TEMPLATE_FILE_UPDATED'		=> 'Файл шаблона успішно оновлений.',
	'TEMPLATE_INHERITS'			=> 'Даний шаблон успадковує від %s і, таким чином, не може мати відмінне від нього місце зберігання.',
	'TEMPLATE_LOCATION'			=> 'Зберегти шаблон в',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Зображення завжди зберігаються на сервері.',
	'TEMPLATE_NAME'				=> 'Ім\'я шаблона',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Не вдалося записати файл шаблону %s. Перевірте права на папки та файли.',

	'THEME_ADDED'        		=> 'Нова тема успішно додана.',
	'THEME_CLASS_ADDED'			=> 'Користувальницький клас успішно доданий.',
	'THEME_DELETED'				=> 'Тема успішно видалена.',
	'THEME_DELETED_FS'			=> 'Тема видалена з бази даних, але файли залишаються на сервері.',
	'THEME_DETAILS_UPDATED'		=> 'Інформація про тему успішно оновлена.',
	'THEME_EDITOR'				=> 'Редактор кода CSS теми',
	'THEME_EDITOR_HEIGHT'		=> 'Висота редактора теми',
	'THEME_ERR_ARCHIVE'			=> 'Будь ласка, виберіть метод архівування.',
	'THEME_ERR_CLASS_CHARS'		=> 'Тільки буквено-цифрові символи, а також ., :, -, _ і # допустимі в іменах класів.',
	'THEME_ERR_COPY_LONG'		=> 'Довжина копірайту не може бути більше 60 символів.',
	'THEME_ERR_NAME_CHARS'		=> 'Ім\'я теми може містити тільки буквено-цифрові символи, -, +, _ і пробіл.',
	'THEME_ERR_NAME_EXIST'		=> 'Тема з таким ім\'ям вже існує.',
	'THEME_ERR_NAME_LONG'		=> 'Ім\'я теми не повинно перевищувати 30 символів.',
	'THEME_ERR_NOT_THEME'		=> 'Вказаний архів не містить теми.',
	'THEME_ERR_STYLE_NAME'		=> 'Ви повинні задати ім\'я для цієї теми.',
	'THEME_FILE'				=> 'Файл теми',
	'THEME_FILE_NOT_WRITABLE'	=> 'Не вдалося зберегти файл теми %s Перевірте права доступу до папок і файлів на сервері.',
	'THEME_EXPORT'				=> 'Експорт теми',
	'THEME_EXPORT_EXPLAIN'		=> 'Тут ви можете експортувати тему у вигляді архіву. Цей архів буде містити всі дані, необхідні для встановлення теми на іншу конференцію. Ви можете вибрати, чи завантажувати файл безпосередньо або зберегти його в папці store, щоб завантажити його пізніше через FTP.',
	'THEME_EXPORTED'			=> 'Тема успішно експортована і збережена в %s.',
	'THEME_UPDATED'				=> 'Клас успішно оновлений.',

	'UNDERLINE'				=> 'Підкреслений',
	'UNINSTALL_DEFAULT'		=> 'Не можна видалити стиль за замовчуванням.',
	'UNSET'					=> 'Не встановлено',

));
