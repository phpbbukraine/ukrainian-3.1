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
	'ADD_ATTACHMENT'			=> 'Завантажити вкладення',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Якщо ви не хочете додавати вкладення, залиште поля порожніми.',
	'ADD_FILE'					=> 'Добавити файл',
	'ADD_POLL'					=> 'Добавити опитування',
	'ADD_POLL_EXPLAIN'			=> 'Якщо ви не хочете додавати опитування до вашого повідомлення, залиште поля порожніми.',
	'ALREADY_DELETED'			=> 'Це повідомлення вже видалено.',
	'ATTACH_DISK_FULL'			=> 'Недостатньо вільного місця на диску для завантаження даного додаткового файлу.',
	'ATTACH_QUOTA_REACHED'		=> 'Досягнутий максимальний загальний розмір ваших вкладень.',
	'ATTACH_SIG'				=> 'Приєднати підпис (підпис можна змінювати в особистому розділі)',

	'BBCODE_A_HELP'				=> 'Вставити вкладення в текст повідомлення: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Жирний текст: [b]текст[/b]',
	'BBCODE_C_HELP'				=> 'Код: [code]код[/code]',
	'BBCODE_D_HELP'				=> 'Флеш: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Розмір шрифта: [size=85]маленький шрифт текста[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>ВИМКНЕНИЙ</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>УВІМКНЕНИЙ</em>',
	'BBCODE_I_HELP'				=> 'Похилий текст: [i]текст[/i]',
	'BBCODE_L_HELP'				=> 'Список: [list][*]текст[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Елемент списку: [*]текст',
	'BBCODE_O_HELP'				=> 'Нумерований список: наприклад [list=]текст[/list] [list=1][*]Перший номер[/list] або [list=a][*]Пункт a[/list]',
	'BBCODE_P_HELP'				=> 'Вставити зображення: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Цитата: [quote]текст[/quote]',
	'BBCODE_S_HELP'				=> 'Колір шрифта: [color=red]текст[/color] Порада: ви можете використовувати також конструкцію color=#FF0000',
	'BBCODE_U_HELP'				=> 'Підкреслений текст: [u]текст[/u]',
	'BBCODE_W_HELP'				=> 'Вставити посилання: [url]http://url[/url] або [url=http://url]текст[/url]',
	'BBCODE_Y_HELP'				=> 'Список: додати елемент списку',
	'BUMP_ERROR'				=> 'Ви не можете піднімати тему відразу після останнього повідомлення. Спробуйте трохи пізніше.',

	'CANNOT_DELETE_REPLIED'		=> 'Вибачте, але ви можете видаляти лише повідомлення, які не мають відповідей.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Це повідомлення було заблоковано, ви не можете його редагувати.',
	'CANNOT_EDIT_TIME'			=> 'Ви більше не можете редагувати або видаляти це повідомлення.',
	'CANNOT_POST_ANNOUNCE'		=> 'Ви не можете створювати оголошення.',
	'CANNOT_POST_STICKY'		=> 'Ви не можете створювати прикріплену тему.',
	'CHANGE_TOPIC_TO'			=> 'Змінити тему на',
	
	'CHARS_POST_CONTAINS'		=> array(
		1		=> 'Повідомлення містить %1$d символ.',
		2		=> 'Повідомлення містить %1$d символа.',
		3		=> 'Повідомлення містить %1$d символів.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Підпис містить %1$d символ.',
		2	=> 'підпис містить %1$d символа.',
		3	=> 'підпис містить %1$d символів.',
	),
	'CLOSE_TAGS'				=> 'Закрити теги',
	'CURRENT_TOPIC'				=> 'Поточна тема',

	'DELETE_FILE'				=> 'Видалити файл',
	'DELETE_MESSAGE'			=> 'Видалити повідомлення',
	'DELETE_MESSAGE_CONFIRM'	=> 'Ви впевнені, що хочете видалити це повідомлення?',
	'DELETE_OWN_POSTS'			=> 'Вибачте, але ви можете видаляти тільки ваші власні повідомлення.',
	'DELETE_PERMANENTLY'		=> 'Видалити назавжди',
	'DELETE_POST_CONFIRM'		=> 'Ви впевнені, що хочете видалити це повідомлення?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Ви впевнені, що хочете <strong>назавжди</strong> це повідомлення?',
	'DELETE_POST_PERMANENTLY'	=> 'Якщо ви видалите, то його не можна буде відновити',
	'DELETE_POSTS_CONFIRM'		=> 'Ви впевнені, що хочете видалити ці повідомлення?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Ви впевнені що хочете видалити <strong>назавжди</strong> ці повідомлення?',
	'DELETE_REASON'				=> 'Причина видалення',
	'DELETE_REASON_EXPLAIN'		=> 'Зазначена причина видалення буде видна тільки модераторам.',
	'DELETE_POST_WARN'			=> 'Видалити ці повідомлення',
	'DELETE_TOPIC_CONFIRM'		=> 'Ви впевнені, що хочете видалити цю тему?',
	'DELETE_TOPIC_PERMANENTLY'	=> 'Якщо ви видалите, то цю тему не можна буде відновити',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Ви впевнені що хочете видалити <strong>назавжди</strong> цю тему?',
	'DELETE_TOPICS_CONFIRM'		=> 'Ви впевнені що хочете видалити ці теми?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Ви впевнені що хочете видалити <strong>назавжди</strong> ці теми?',
	'DISABLE_BBCODE'			=> 'Відключити в цьому повідомленні BBCode',
	'DISABLE_MAGIC_URL'			=> 'Не перетворювати адреси URL в посилання',
	'DISABLE_SMILIES'			=> 'Відключити в цьому повідомленні смайли',
	'DISALLOWED_CONTENT'		=> 'Завантаження було відхилено, оскільки вкладення було визначено як можлива атака.',
	'DISALLOWED_EXTENSION'		=> 'Розширення %s заборонено адміністратором конференції.',
	'DRAFT_LOADED'				=> 'Чернетка завантажена, ви можете завершити редагування повідомлення зараз.<br />Після відправки цього повідомлення чернетку буде видалено.',
	'DRAFT_LOADED_PM'			=> 'Чернетка завантажена, ви можете завершити редагування приватного повідомлення зараз.<br />Після відправки цього приватного повідомлення чернетку буде видалено.',
	'DRAFT_SAVED'				=> 'Чернетка успішно збережена',
	'DRAFT_TITLE'				=> 'Назва чернетки',

	'EDIT_REASON'				=> 'Причина редагування повідомлення',
	'EMPTY_FILEUPLOAD'			=> 'Завантажений файл порожній.',
	'EMPTY_MESSAGE'				=> 'Ви повинні ввести текст повідомлення',
	'EMPTY_REMOTE_DATA'			=> 'Не вдалося завантажити файл, будь ласка, спробуйте завантажити його вручну.',

	'FLASH_IS_OFF'				=> '[flash] <em>ВИМКНЕНИЙ</em>',
	'FLASH_IS_ON'				=> '[flash] <em>УВІМКНЕНИЙ</em>',
	'FLOOD_ERROR'				=> 'Ви не можете відправити наступне повідомлення відразу після попереднього. Будь ласка, спробуйте трохи пізніше.',
	'FONT_COLOR'				=> 'Колір шрифту',
	'FONT_COLOR_HIDE'			=> 'Приховати панель кольорів',
	'FONT_HUGE'					=> 'Величезний',
	'FONT_LARGE'				=> 'Великий',
	'FONT_NORMAL'				=> 'Нормальний',
	'FONT_SIZE'					=> 'Розмір шрифту',
	'FONT_SMALL'				=> 'Маленький',
	'FONT_TINY'					=> 'Дуже маленький',

	'GENERAL_UPLOAD_ERROR'		=> 'Не вдалося завантажити вкладення %s.',

	'IMAGES_ARE_OFF'			=> '[img] <em>ВИМКНЕНИЙ</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>УВІМКНЕНИЙ</em>',
	'INVALID_FILENAME'			=> '%s є неприпустимим ім\'ям файлу.',

	'LOAD'						=> 'Завантажити',
	'LOAD_DRAFT'				=> 'Завантажити чернетку',
	'LOAD_DRAFT_EXPLAIN'		=> 'Ви можете вибрати чернетку для продовження редагування повідомлення. Ваше поточне повідомлення буде видалено, зміст повідомлення буде втрачено. <br />Переглядати, редагувати і видаляти чернетки ви можете в Особистому розділі.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Вам необхідно авторизуватися для підняття теми в цьому форумі.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Вам необхідно авторизуватися для видалення повідомлень в цьому форумі.',
	'LOGIN_EXPLAIN_POST'		=> 'Вам необхідно авторизуватися для створення повідомлень в цьому форумі.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Вам необхідно авторизуватися для цитування повідомлень в цьому форумі.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Вам необхідно авторизуватися щоб відповідати в темах у цьому форумі.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Ви можете використовувати шрифти розміром не більше %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1		=> 'Ваші флеш-файли повинні бути не більше %d пікс. в висоту.',
		2		=> 'Ваші флеш-файли повинні бути не більше %d пікс. в висоту.',
		3		=> 'Ваші флеш-файли повинні бути не більше %d пікс. в висоту.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1		=> 'Ваші флеш-файли повинні бути не більше %d пікс. в ширину.',
		2		=> 'Ваші флеш-файли повинні бути не більше %d пікс. в ширину.',
		3		=> 'Ваші флеш-файли повинні бути не більше %d пікс. в ширину.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1		=> 'Ваші зображення повинні бути не більше %1$d пікс. в висоту.',
		2		=> 'Ваші зображення повинні бути не більше %1$d пікс. в висоту.',
		3		=> 'Ваші зображення повинні бути не більше %1$d пікс. в висоту.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1		=> 'Ваші зображення повинні бути не більше %d пікс. в ширину.',
		2		=> 'Ваші зображення повинні бути не більше %d пікс. в ширину.',
		3		=> 'Ваші зображення повинні бути не більше %d пікс. в ширину.',
	),
	'MESSAGE_BODY_EXPLAIN'		=> array(
		0		=> '', // zero means no limit, so we don't view a message here.
		1  		=> 'Введіть текст dашого повідомлення. Довжина повідомлення не більше <strong>%d</strong> символа.',
		2  		=> 'Введіть текст dашого повідомлення. Довжина повідомлення не більше <strong>%d</strong> символів.',
		3	 	=> 'Введіть текст dашого повідомлення. Довжина повідомлення не більше <strong>%d</strong> символів.',
	),
	'MESSAGE_DELETED'			=> 'Повідомлення було успішно видалено.',
	'MORE_SMILIES'				=> 'Ще смайли…',

	'NOTIFY_REPLY'				=> 'Повідомляти мені про одержання відповіді',
	'NOT_UPLOADED'				=> 'Не вдалося завантажити файл.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Ви не можете видаляти існуючі варіанти відповідей.',
	'NO_PM_ICON'				=> 'Немає значка ЛС',
	'NO_POLL_TITLE'				=> 'Ви повинні ввести назву опитування.',
	'NO_POST'					=> 'Повідомлення не існує.',
	'NO_POST_MODE'				=> 'Не вказаний режим повідомлення.',

	'PARTIAL_UPLOAD'			=> 'Файл завантажений лише частково.',
	'PHP_SIZE_NA'				=> 'Завеликий розмір вкладення.<br />Неможливо визначити максимальний розмір закачуваних файлів, заданий у php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Завеликий розмір вкладення.<br />Максимальний розмір завантажуваного файлу: %1$d %2$s.<br />Майте на увазі, що ця величина визначена в php.ini і засобами форуму неможливо змінити це значення в більшу сторону.',
	'PLACE_INLINE'				=> 'Вставити в текст повідомлення',
	'POLL_DELETE'				=> 'Видалити опитування',
	'POLL_FOR'					=> 'Опитування має йти',
	'POLL_FOR_EXPLAIN'			=> 'Введіть 0 або залиште поле порожнім, щоб опитування не завершувалося.',
	'POLL_MAX_OPTIONS'			=> 'Варіантів відповіді',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Кількість варіантів відповіді, дозволених при голосуванні.',
	'POLL_OPTIONS'				=> 'Варіанти відповіді',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1		=> 'Додайте кожен варіант відповіді в новому рядку. Максимальна кількість варіантів: <strong>%d</strong>.',
		2		=> 'Додайте кожен варіант відповіді в новому рядку. Максимальна кількість варіантів: <strong>%d</strong>.',
		3		=> 'Додайте кожен варіант відповіді в новому рядку. Максимальна кількість варіантів: <strong>%d</strong>.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> array(
		1		=> 'Додайте кожен варіант відповіді в новому рядку. Максимальна кількість варіантів: <strong>%d</strong>. Якщо ви видалите або додасте новий варіант відповіді, результати голосування обнуляться.',
		2		=> 'Додайте кожен варіант відповіді в новому рядку. Максимальна кількість варіантів: <strong>%d</strong>. Якщо ви видалите або додасте новий варіант відповіді, результати голосування обнуляться.',
		3		=> 'Додайте кожен варіант відповіді в новому рядку. Максимальна кількість варіантів: <strong>%d</strong>. Якщо ви видалите або додасте новий варіант відповіді, результати голосування обнуляться.',
	),
	'POLL_QUESTION'				=> 'Питання',
	'POLL_TITLE_TOO_LONG'		=> 'Назва опитування повинно містити менше 100 символів.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Назва опитування занадто довге, спробуйте зменшити кількість BBCode або смайлів.',
	'POLL_VOTE_CHANGE'			=> 'Дозволити змінювати відповідь',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Якщо дозволено, користувачі можуть міняти свої відповіді в опитуванні.',
	'POSTED_ATTACHMENTS'		=> 'Опубліковані вкладення',
	'POST_APPROVAL_NOTIFY'		=> 'Ви будете повідомлені про схвалення Вашого повідомлення.',
	'POST_CONFIRMATION'			=> 'Підтвердження відправлення',
	'POST_CONFIRM_EXPLAIN'		=> 'Для запобігання автоматичного розміщення повідомлень на цій конференції необхідно ввести код підтвердження. Код відображено на картинці нижче. Якщо через поганий зір або з інших причин ви не можете прочитати код на зображенні, зв\'яжіться з %sадміністратором%s',
	'POST_DELETED'				=> 'Повідомлення успішно видалено.',
	'POST_EDITED'				=> 'Повідомлення успішно змінено.',
	'POST_EDITED_MOD'			=> 'Повідомлення успішно змінено, але має бути схвалено модератором до того, як буде відображено на конференції.',
	'POST_GLOBAL'				=> 'Важлива',
	'POST_ICON'					=> 'Значок',
	'POST_NORMAL'				=> 'Звичайна',
	'POST_REVIEW'				=> 'Попередній перегляд',
	'POST_REVIEW_EDIT'			=> 'Попередній перегляд',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Це повідомлення було змінено іншим користувачем в той час, коли ви редагували його. Ви можете переглянути поточну версію повідомлення та внести бажані зміни.',
	'POST_REVIEW_EXPLAIN'		=> 'Було додано принаймні одне повідомлення в цій темі. Можливо, ви захочете змінити зміст свого повідомлення.',
	'POST_STORED'				=> 'Повідомлення успішно надіслано.',
	'POST_STORED_MOD'			=> 'Повідомлення успішно надіслано, але має бути схвалено модератором до того, як буде відображено на конференції.',
	'POST_TOPIC_AS'				=> 'Статус створюваної теми',
	'PROGRESS_BAR'				=> 'Індикатор завантаження',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1		=> 'Максимально допустима кількість вкладених один в одного цитат в повідомленні: %d.',
		2		=> 'Максимально допустима кількість вкладених один в одного цитат в повідомленні: %d.',
		3		=> 'Максимально допустима кількість вкладених один в одного цитат в повідомленні: %d.',
	),
	'QUOTE_NO_NESTING'			=> 'Вкладені цитати заборонені.',
	
	'REMOTE_UPLOAD_TIMEOUT'		=> 'Вказаний файл не може бути завантажений через перевищення часу очікування запиту.',
	'SAVE'						=> 'Зберегти',
	'SAVE_DATE'					=> 'Остання зміна',
	'SAVE_DRAFT'				=> 'Зберегти чернетку',
	'SAVE_DRAFT_CONFIRM'		=> 'Будь ласка, зверніть увагу, що зберігаються тільки заголовок і текст повідомлення, будь-які інші елементи будуть видалені.<br />Ви хочете зберегти чернетку зараз?',
	'SMILIES'					=> 'Смайлики',
	'SMILIES_ARE_OFF'			=> 'Смайлики <em>ВИМКНЕНІ</em>',
	'SMILIES_ARE_ON'			=> 'Смайлики <em>УВІМКНЕНИЙ</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Термін для оголошення/прикріпленої теми',
	'STICK_TOPIC_FOR'			=> 'Тема буде прикріплена',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Введіть 0 або залиште поле порожнім, щоб тема завжди була оголошенням або прикріпленою. Зверніть увагу на те, що це число є відносним до дати публікації повідомлення.',
	'STYLES_TIP'				=> 'Порада: можна швидко застосувати стилі до виділеного тексту.',

	'TOO_FEW_CHARS'				=> 'Ваше повідомлення занадто коротке',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1		=> 'Ваше повідомлення містить %1$d символ.',
		2  		=> 'Ваше повідомлення містить %1$d символа',
		3  		=> 'Ваше повідомлення містить %1$d символів.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Необхідно ввести принаймні два варіанти відповіді в опитуванні.',
	'TOO_MANY_ATTACHMENTS'		=> 'Додатквий файл неможливий, так як в повідомленні досягнуто їх максимальну кількість: <b>%d</b>.',
	'TOO_MANY_CHARS'			=> 'Ваше повідомлення занадто довге.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2		=> 'Максимальна дозволена кількість символів: %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Ви вибрали занадто багато варіантів відповіді в опитуванні.',
	'TOO_MANY_SMILIES'			=> 'Ваше повідомлення містить занадто багато смайликів. Максимальна дозволена кількість: %d.',
	'TOO_MANY_URLS'				=> 'Ваше повідомлення містить занадто багато посилань. Максимальна дозволена кількість: %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Занадто багато варіантів відповіді.',
	'TOPIC_BUMPED'				=> 'Тема успішно піднята.',
	'UNAUTHORISED_BBCODE'		=> 'Ви не можете використовувати деякі BBCode: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Для того, щоб змінити статус теми з важливою на звичайну, ви повинні вибрати форум, в якому вона буде опублікована.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Повідомлення містить наступні непідтримувані символи:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Тема повідомлення містить наступні непідтримувані символи:<br />%s',
	'UPDATE_COMMENT'			=> 'Оновити коментар',
	'URL_INVALID'				=> 'Вказану вами адреса файлу не дозволена.',
	'URL_NOT_FOUND'				=> 'Зазначений файл не знайдено.',
	'URL_IS_OFF'				=> '[url] <em>ВИМКНЕНИЙ</em>',
	'URL_IS_ON'					=> '[url] <em>УВІМКНЕНИЙ</em>',
	'USER_CANNOT_BUMP'			=> 'Ви не можете піднімати теми в цьому форумі.',
	'USER_CANNOT_DELETE'		=> 'Ви не можете видаляти повідомлення в цьому форумі.',
	'USER_CANNOT_EDIT'			=> 'Ви не можете редагувати повідомлення в цьому форумі.',
	'USER_CANNOT_REPLY'			=> 'Ви не можете відповідати на повідомлення в цьому форумі.',
	'USER_CANNOT_FORUM_POST'	=> 'Ви не можете розміщувати повідомлення в цьому форумі. Тип форуму не підтримує цього.',

	'VIEW_MESSAGE'				=> '%sДивитись ваше повідомлення%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sПереглянути надіслані вами приватні повідомлення%s',

	'WRONG_FILESIZE'			=> 'Завеликий розмір вкладення. <br/> Максимальний дозволений розмір: %1$d %2$s.',
	'WRONG_SIZE'				=> 'Розміри зображення повинні бути не менше %1$d×%2$d і не більше %3$d×%4$d. Розмір відправленого зображення — %5$d×%6$d. Всі розміри вказані в пікселях.',
));
