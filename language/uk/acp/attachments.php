<?php
/**
*
* acp_attachments [Ukrainian]
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Тут ви можете налаштувати основні параметри вкладень і пов\'язаних з ними спеціальних категорій.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Тут ви можете додавати, видаляти і змінювати групи розширень. Також тут можна відключати певні групи розширень, призначати на групи спеціальні категорії, змінювати режим завантаження вкладень, а також вказати значок, який буде відображатися перед вкладенням, що належить певній групі.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Тут ви можете керувати дозволеними розширеннями. Для активації розширень відвідайте сторінку «Групи розширень». Ми настійно рекомендуємо не дозволяти потенційно небезпечні розширення (такі, як <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> і так далі…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Тут ви можете бачити втрачені файли. Зазвичай такі файли з\'являються через те, що користувачі прикріплюють файли, але згодом не публікують повідомлення. Ви можете видалити такі файли або прикріпити їх до існуючих повідомленнями. У другому випадку вам буде потрібно правильний ідентифікатор повідомлення (ID), який ви повинні вказати самостійно. Після цього завантажене додатковий файл буде прикріплено до зазначеного вами повідомленням.',
	'ADD_EXTENSION'						=> 'Додати розширення',
	'ADD_EXTENSION_GROUP'				=> 'Додавання групи розширень',
	'ADMIN_UPLOAD_ERROR'				=> 'Помилки при спробі прикріплення файлу: «%s».',
	'ALLOWED_FORUMS'					=> 'Дозволити у форумах',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Можливість публікації призначених розширень у вибраних (або у всіх) форумах.',
	'ALLOWED_IN_PM_POST'				=> 'Група розширень дозволена',
	'ALLOW_ATTACHMENTS'					=> 'Дозволити додаткові файли',
	'ALLOW_ALL_FORUMS'					=> 'У всіх форумах',
	'ALLOW_IN_PM'						=> 'Дозволити в приватних повідомленнях',
	'ALLOW_PM_ATTACHMENTS'				=> 'Дозволити додаткові файли в особистих повідомленнях',
	'ALLOW_SELECTED_FORUMS'				=> 'Тільки в обраних',
	'ASSIGNED_EXTENSIONS'				=> 'Призначені розширення',
	'ASSIGNED_GROUP'					=> 'призначена група розширень',
	'ATTACH_EXTENSIONS_URL'				=> 'Розширення',
	'ATTACH_EXT_GROUPS_URL'				=> 'Групи розширень',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Максимальний розмір файлу',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Максимальний розмір кожного завантаження. Якщо значення дорівнює 0, розмір файлу обмежений тільки конфігурацією PHP.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Максимальний розмір файлу в приватних повідомленнях',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Максимальний розмір кожного файлу, вкладеного в приватне повідомлення. Значення 0 відповідає необмеженому розміром.',
	'ATTACH_ORPHAN_URL'					=> 'Загублені додаткові файли',
	'ATTACH_POST_ID'					=> 'ID повідомлення',
	'ATTACH_POST_TYPE'					=> 'Тип повідомлення',
	'ATTACH_QUOTA'						=> 'Загальна квота додаткових файлів',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Максимально доступне дисковий простір для додаткових файлів. Значення 0 відповідає необмеженому розміром.',
	'ATTACH_TO_POST'					=> 'Прикріпити файл до повідомлення',

	'CAT_FLASH_FILES'			=> 'Файли Flash',
	'CAT_IMAGES'				=> 'Малюнки',
	'CAT_QUICKTIME_FILES'		=> 'Файли Quicktime',
	'CAT_RM_FILES'				=> 'Файли RealMedia',
	'CAT_WM_FILES'				=> 'Файли Windows Media',
	'CHECK_CONTENT'				=> 'Перевіряти додаткові файли',
	'CHECK_CONTENT_EXPLAIN'		=> 'Деякі браузери можуть бути обмануті при визначенні MIME-типу завантажуваних файлів. Включення цієї опції гарантує, що такі файли, найімовірніше, будуть відхилятися під час завантаження.',
	'CREATE_GROUP'				=> 'Створити групу',
	'CREATE_THUMBNAIL'			=> 'Створювати мініатюри',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'При включенні опції для завантажуваних малюнків будуть створюватися мініатюри у всіх можливих ситуаціях.',

	'DEFINE_ALLOWED_IPS'			=> 'Дозволені IP-адреса і вузли',
	'DEFINE_DISALLOWED_IPS'			=> 'Заборонені IP-адреса і вузли',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Вводьте кожен IP-адресу або ім\'я вузла на новому рядку. Для вказівки діапазону IP-адрес розділіть початок і кінець діапазону дефісом (-) або використовуйте знак підстановки (*) в якості шаблону.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Ви можете видалити (або видалити з виключених) за один раз кілька IP-адрес. Для вибору декількох адрес використовуйте відповідну для вашого комп\'ютера і браузера комбінацію миші і клавіатури. Виключені IP-адреси відображаються на синьому тлі.',
	'DISPLAY_INLINED'				=> 'Показувати малюнки в повідомленнях',
	'DISPLAY_INLINED_EXPLAIN'		=> 'При відключенні опції малюнки, вкладені в повідомлення, будуть відображатися у вигляді посилань.',
	'DISPLAY_ORDER'					=> 'Порядок відображення вкладень',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Відображення вкладень за часом розміщення.',

	'EDIT_EXTENSION_GROUP'			=> 'Зміна групи розширень',
	'EXCLUDE_ENTERED_IP'			=> 'Увімкніть цю опцію для виключення введеного IP-адреси або вузла зі списку дозволених.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Виключити IP-адреса з дозволених',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Виключити IP-адреси або імена вузлів із заборонених',
	'EXTENSIONS_UPDATED'			=> 'Розширення успішно оновлено.',
	'EXTENSION_EXIST'				=> 'Розширення %s все існує.',
	'EXTENSION_GROUP'				=> 'Група розширень',
	'EXTENSION_GROUPS'				=> 'Групи розширень',
	'EXTENSION_GROUP_DELETED'		=> 'Группа расширений успешно удалена.',
	'EXTENSION_GROUP_EXIST'			=> 'Група розширень %s вже існує.',

	'EXT_GROUP_ARCHIVES'			=> 'Архіви',
	'EXT_GROUP_DOCUMENTS'			=> 'Документи',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Завантажувані файли',
	'EXT_GROUP_FLASH_FILES'			=> 'Файли Flash',
	'EXT_GROUP_IMAGES'				=> 'Зображення',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Текстові файли',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Файли Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Файли Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Файли Windows Media',

	'GO_TO_EXTENSIONS'		=> 'Перейти на сторінку управління розширеннями',
	'GROUP_NAME'			=> 'Ім\'я групи',

	'IMAGE_LINK_SIZE'			=> 'Розміри малюнків для посилання',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Якщо малюнок більше вказаних розмірів, то замість нього буде відображена посилання для завантаження цього малюнка. Введіть розміри 0 × 0 для відключення цієї можливості.',
	'IMAGICK_PATH'				=> 'Шлях до програми Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Повний шлях до програми Imagemagick. Наприклад, <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Максимум додаткових файлів в одному повідомленні',
	'MAX_ATTACHMENTS_PM'			=> 'Максимум додаткових файлів в приватному повідомленні',
	'MAX_EXTGROUP_FILESIZE'			=> 'Максимальний розмір файлу',
	'MAX_IMAGE_SIZE'				=> 'Максимальні розміри малюнків',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Максимальні розміри завантажуваних малюнків. Введіть 0×0 для відключення перевірки розмірів.',
	'MAX_THUMB_WIDTH'				=> 'Максимальна ширина мініатюр',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Ширина створюваних мініатюр не перевищуватиме зазначеного тут розміру.',
	'MIN_THUMB_FILESIZE'			=> 'Мінімальний розмір файлів для мініатюр',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Мініатюри не створюватимуться для малюнків менше зазначеного розміру.',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Physical',

	'NOT_ALLOWED_IN_PM'			=> 'Група розширень дозволена тільки в повідомленнях',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Група розширень заборонена',
	'NOT_ASSIGNED'				=> 'Не призначена',
	'NO_EXT_GROUP'				=> 'Ні',
	'NO_EXT_GROUP_NAME'			=> 'Не вказано ім\'я групи',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Не зазначена група розширень.',
	'NO_FILE_CAT'				=> 'Ні',
	'NO_IMAGE'					=> 'Без значка',
	'NO_THUMBNAIL_SUPPORT'		=> 'Підтримка мініатюр вимкнено, оскільки не знайдено доступною бібліотеки GD або встановленої програми Imagemagick.',
	'NO_UPLOAD_DIR'				=> 'Зазначена вами папка для завантаження файлів не існує.',
	'NO_WRITE_UPLOAD'			=> 'Зазначена вами папка для завантаження файлів недоступна для запису. Змініть права доступу для цієї папки, дозволивши серверу запис в неї.',

	'ONLY_ALLOWED_IN_PM'	=> 'Група розширень дозволена тільки в приватних повідомленняхх',
	'ORDER_ALLOW_DENY'		=> 'Дозволити',
	'ORDER_DENY_ALLOW'		=> 'Заборонити',

	'REMOVE_ALLOWED_IPS'	=> 'Видалення або видалення з виключених <em>дозволених</em> IP-адресів або вузлів',
	'REMOVE_DISALLOWED_IPS'	=> 'Видалення або видалення з виключених <em>зоборонених</em> IP-адресів або вузлів',

	'SEARCH_IMAGICK'				=> 'Знайти Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Список дозволених і заборонених',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Зміна поведінки за замовчуванням списку дозволених і заборонених при включенні безпечних завантажень <strong>білий список</strong> (Дозволити) або на <strong>чорний список</strong> (Заборонити).',
	'SECURE_DOWNLOADS'				=> 'Включити безпечні завантаження',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'При включенні опції всі завантаження будуть обмежені зазначеними вами IP-адресами та вузлами.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Безпечні завантаження відключені. Налаштування нижче будуть застосовані після включення безпечних завантажень.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Список IP-адрес успішно оновлений.',
	'SECURE_EMPTY_REFERRER'			=> 'Дозволити порожній джерело переходу',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Безпечні завантаження засновані на згадування джерела переходу (referrers). Ви хочете дозволити завантаження для клієнтів з відсутнім джерелом переходу?',
	'SETTINGS_CAT_IMAGES'			=> 'Налаштування категорії зображень',
	'SPECIAL_CATEGORY'				=> 'Спеціальна категорія',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Спеціальні категорії відрізняються способом відображення додаткових файлів в повідомленнях.',
	'SUCCESSFULLY_UPLOADED'			=> 'Завантаження успішно завершено.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Група розширень успішно добавлена.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Група розширень успішно оновлено.',

	'UPLOADING_FILES'				=> 'Завантаження файлов',
	'UPLOADING_FILE_TO'				=> 'Завантаження файла «%1$s» в повідомлення під номером %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'У вас немає прав на завантаження файлів у форум «%s».',
	'UPLOAD_DIR'					=> 'Папка для зберігання додаткових файлів',
	'UPLOAD_DIR_EXPLAIN'			=> 'Примітка: якщо ви зміните цю папку в той час, як в ній вже є завантажені файли, то вам доведеться вручну скопіювати ці файли в нову папку.',
	'UPLOAD_ICON'					=> 'Значок додаткового файлу',
	'UPLOAD_NOT_DIR'				=> 'Зазначений шлях для завантаження файлів не є папкою.',
));
