<?php
/**
*
* posting [Ukrainian]
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode — це спеціальна реалізація мови HTML, що надає більш зручні можливості щодо форматування повідомлень. За допомогою цієї сторінки ви можете додавати, видаляти і змінювати BBCodes.',
	'ADD_BBCODE'				=> 'Добавити BBCode',

	'BBCODE_DANGER'				=> 'Додається BBCode використовує лексему {TEXT} в тегах HTML. Це може створити проблеми з безпекою, пов\'язані з XSS (міжсайтовий скриптинга). Спробуйте застосувати лексеми {SIMPLETEXT} або {INTTEXT}, що використовують більш суворі перевірки. Ігноруйте дане попередження лише в разі, якщо польностью усвідомлюєте можливі ризики, і використання лексеми {TEXT} абсолютно необхідно.',
	'BBCODE_DANGER_PROCEED'		=> 'Продовжити', //'Я усвідомлюю ризик',

	'BBCODE_ADDED'				=> 'BBCode успішно доданий.',
	'BBCODE_EDITED'				=> 'BBCode успішно змінений.',
	'BBCODE_DELETED'			=> 'BBCode успішно видалений.',
	'BBCODE_NOT_EXIST'			=> 'Обраний BBCode не існує.',
	'BBCODE_HELPLINE'			=> 'Підказка',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Дане поле містить текст, який з\'явиться при наведенні покажчика миші на кнопку з BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Текст підказки',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Введений текст підказки занадто довгий.',

	'BBCODE_INVALID_TAG_NAME'	=> 'Обране ім\'я тега BBCode вже існує.',
	'BBCODE_INVALID'			=> 'BBCode створений в недопустимій формі.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Налаштований BBCode повинен містити відкриває та закриває теги.',
	'BBCODE_TAG'				=> 'Тег',
	'BBCODE_TAG_TOO_LONG'		=> 'Введене ім\'я тега занадто довге.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Введене визначення тега занадто довге. Введіть більш коротке визначення.',
	'BBCODE_USAGE'				=> 'Використання BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Тут визначається використання BBCode. Будь-яка вводиться змінна може бути замінена на відповідну лексему (%sприклади нижче%s).',

	'EXAMPLE'						=> 'Приклад:',
	'EXAMPLES'						=> 'Приклади:',

	'HTML_REPLACEMENT'				=> 'Заміна HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Тут визначаються заміни HTML. Не забувайте додати лексеми, використані вище!',

	'TOKEN'					=> 'Лексема',
	'TOKENS'				=> 'Лексеми',
	'TOKENS_EXPLAIN'		=> 'Лексеми є мітками-заповнювачами для вводиться користувачем вмісту. Правильність введеного вмісту буде підтверджена лише в тому випадку, якщо воно відповідає відповідному визначенню. При необхідності ви можете нумерувати їх шляхом додавання номера в кінці лексеми всередині фігурних дужок. наприклад {TEXT1}, {TEXT2}.<br /><br />Крім лексем для заміни HTML можна використовувати будь-які мовні змінні з мовних файлів. Наприклад, {L_<em>&lt;STRINGNAME&gt;</em>}, де <em>&lt;STRINGNAME&gt;</em> — це ім\'я перекладеної рядки, яку ви хочете додати. Наприклад, {L_WROTE} буде відображено як «wrote» або переведено в залежності від обраного користувачем мови.<br /><br /><strong>Примітка: тільки нижче вказані лексеми можуть використовуватися в призначених для користувача BBCodes.</strong>',
	'TOKEN_DEFINITION'		=> 'Опис',
	'TOO_MANY_BBCODES'		=> 'Ви більше не можете створити BBCodes. Видаліть або перемістіть деякі BBCodes і спробуйте знову.',

	'tokens'	=>	array(
		'TEXT'			=> 'Будь-який текст, включаючи символи будь-якої мови, числа і так далі. Не слід застосовувати цю лексему в тегах HTML. Замість цього використовуйте лексеми IDENTIFIER, INTTEXT або SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Букви латинського алфавіту (A-Z), цифри, пробіли, коми, крапки, мінус, плюс, дефіс і підкреслення.',
		'INTTEXT'		=> 'Символи Unicode, цифри, пробіли, коми, крапки, мінус, плюс, дефіс і підкреслення.',
		'IDENTIFIER'	=> 'Букви латинського алфавіту (A-Z), цифри, дефіс і підкреслення.',
		'NUMBER'		=> 'Будь-яка послідовність цифр.',
		'EMAIL'			=> 'Правильну адресу електронної пошти.',
		'URL'			=> 'Правильну адресу URL з використанням будь-якого протоколу (http, ftp і так далі не можуть використовуватися для деструктивних дій JavaScript). Якщо нічого не задано, то до рядка буде автоматично доданий префікс «http://».',
		'LOCAL_URL'		=> 'Локальна URL адреса. URL повинен бути відносним до сторінці теми і не повинен містити протоколу чи ім\'я сервера, як посилання, що починаються з «%s» ',
		'RELATIVE_URL'	=> 'Відносна URL адреса. Можна використовувати для підстановки окремих частин адреси URL, але з обережністю: повна адреса URL є правильною відносною адресою URL. Якщо потрібно використовувати відносні адреси URL конференції, застосовуйте лексему LOCAL_URL. ',
		'COLOR'			=> 'Колір HTML. Колір може бути заданий у числовому форматі <samp>#FF1234</samp> або <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">ключовим словом кольору CSS</a>. Наприклад, <samp>fuchsia</samp> або <samp>InactiveBorder</samp>.',
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'За допомогою цієї сторінки ви можете додавати, видаляти і змінювати значки, які можуть додаватися користувачами до тем або до повідомлень. Ці значки звичайно відображаються поруч з назвами тем на сторінках перегляду форумів або поряд із заголовками повідомлень на сторінках перегляду тем. Також ви можете встановлювати і створювати нові пакети значків.',
	'ACP_SMILIES_EXPLAIN'	=> 'Смайли - це невеликі, іноді анімовані, малюнки, використовувані для передачі почуттів і настроїв. За допомогою цієї сторінки ви можете додавати, видаляти і змінювати смайлики, які можуть додаватися користувачами до своїх повідомлень. Також ви можете встановлювати і створювати нові пакети смайликів.',
	'ADD_SMILIES'			=> 'Додати кілька смайлів',
	'ADD_SMILEY_CODE'		=> 'Додати додатковий код смайлика',
	'ADD_ICONS'				=> 'Додати кілька значків',
	'AFTER_ICONS'			=> 'Після %s',
	'AFTER_SMILIES'			=> 'Після %s',

	'CODE'						=> 'Код',
	'CURRENT_ICONS'				=> 'Встановлені значки',
	'CURRENT_ICONS_EXPLAIN'		=> 'Виберіть дію, яку потрібно застосувати до вже встановлених значках.',
	'CURRENT_SMILIES'			=> 'Встановлені смайли',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Виберіть дію, яку потрібно застосувати до встановлених смайликів.',

	'DISPLAY_ON_POSTING'		=> 'Показувати на сторінці відповіді',
	'DISPLAY_POSTING'			=> 'На сторінці відповіді',
	'DISPLAY_POSTING_NO'		=> 'Немає на сторінці відповіді',

	'EDIT_ICONS'				=> 'Змінити значки',
	'EDIT_SMILIES'				=> 'Змінити смайлики',
	'EMOTION'					=> 'Емоція',
	'EXPORT_ICONS'				=> 'Експортувати і завантажити файл icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sПісля клацання по цьому посиланню конфігурація встановлених значків буде упакована в файл <samp>icons.pak</samp>, який після завантаження можна використовувати для створення архівів <samp>.zip</samp> или <samp>.tgz</samp>, що містять всі ваші значки разом з конфігураційним файлом <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Експортувати і завантажити файл smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sПісля натискання по цьому посиланню конфігурація встановлених смайликів буде упакована в файл <samp>smilies.pak</samp>, який після завантаження можна використовувати для створення архівів <samp>.zip</samp> или <samp>.tgz</samp>, містять всі ваші смайли разом з конфігураційним файлом <samp>smilies.pak</samp>.',

	'FIRST'			=> 'Перший',

	'ICONS_ADD'				=> 'Добавити значок',
	'ICONS_NONE_ADDED'		=> 'Значки не були додані.',
	'ICONS_ADDED'			=> array(
		0	=> 'Значки не були додані.',
		1	=> 'Вказаний значок успішно доданий.',
		2	=> 'Вказені значки успішно додані.',
		3	=> 'Вказені значки успішно додані.',
	),
	'ICONS_CONFIG'			=> 'Налаштування значків',
	'ICONS_DELETED'			=> 'Значок успішно видалено.',
	'ICONS_EDIT'			=> 'Змінити значок',
	'ICONS_EDITED'			=> array(
		0	=> 'Значки не були оновлені.',
		1	=> 'Вказаний значок успішно оновлено.',
		2	=> 'Вказені значки успішно оновлені.',
		3	=> 'Вказені значки успішно оновлені.',
	),
	'ICONS_HEIGHT'			=> 'Висота значка',
	'ICONS_IMAGE'			=> 'Малюнок значка',
	'ICONS_IMPORTED'		=> 'Пакет значків успішно встановлений.',
	'ICONS_IMPORT_SUCCESS'	=> 'Пакет значків успішно імпортовано.',
	'ICONS_LOCATION'		=> 'Шлях до значка',
	'ICONS_NOT_DISPLAYED'	=> 'Наступні значки не будуть відображатися на сторінці розміщення повідомлення',
	'ICONS_ORDER'			=> 'Порядок значка',
	'ICONS_URL'				=> 'Файл значка',
	'ICONS_WIDTH'			=> 'Ширина значка',
	'IMPORT_ICONS'			=> 'Встановити пакет значків',
	'IMPORT_SMILIES'		=> 'Встановити пакет смайликів',

	'KEEP_ALL'			=> 'Зберегти все',

	'MASS_ADD_SMILIES'	=> 'Додати кілька смайлів',

	'NO_ICONS_ADD'		=> 'Немає значків, доступних для додавання.',
	'NO_ICONS_EDIT'		=> 'Немає значків, доступних для зміни.',
	'NO_ICONS_EXPORT'	=> 'Немає значків, доступних для створення пакету.',
	'NO_ICONS_PAK'		=> 'Пакети значків не знайдені.',
	'NO_SMILIES_ADD'	=> 'Немає смайликів, доступних для додавання.',
	'NO_SMILIES_EDIT'	=> 'Немає смайликів, доступних для зміни.',
	'NO_SMILIES_EXPORT'	=> 'Немає смайликів, доступних для створення.',
	'NO_SMILIES_PAK'	=> 'Пакети смайлів не знайдені.',

	'PAK_FILE_NOT_READABLE'		=> 'Помилка читання файлу <samp>.pak</samp>',

	'REPLACE_MATCHES'	=> 'Замінити парні',

	'SELECT_PACKAGE'			=> 'Виберіть файл пакету',
	'SMILIES_ADD'				=> 'Добавити смайлик',
	'SMILIES_ADDED'				=> array(
		0	=> 'Смайлики не були додані.',
		1	=> 'Вказаний смайлик успішно додано.',
		2	=> 'Вказані смайли успішно додані.',
		3	=> 'Вказані смайли успішно додані.',
	),
	'SMILIES_CODE'				=> 'Код смайлика',
	'SMILIES_CONFIG'			=> 'Налаштування смайликів',
	'SMILIES_DELETED'			=> 'Смайлик успішно видалений.',
	'SMILIES_EDIT'				=> 'Змінити смайлик',
	'SMILIE_NO_CODE'			=> 'Смайлик «%s» не додано, так як для нього не заданий код.',
	'SMILIE_NO_EMOTION'			=> 'Смайлик «%s» не додано, так як для нього не задана емоція.',
	'SMILIE_NO_FILE'			=> 'Смайлик «%s» не додано, так як для нього відсутній файл.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Смайлики не були оновлені.',
		1	=> 'Вказаний смайлик успішно оновлено.',
		2	=> 'Вказані смайли успішно оновлені.',
		3	=> 'Вказані смайли успішно оновлені.',
	),
	'SMILIES_EMOTION'			=> 'Емоція',
	'SMILIES_HEIGHT'			=> 'Висота смайлика',
	'SMILIES_IMAGE'				=> 'Малюнок смайлика',
	'SMILIES_IMPORTED'			=> 'Пакет смайлів успішно встановлений.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Пакет смайлів успішно імпортовано.',
	'SMILIES_LOCATION'			=> 'Шлях до смайликів',
	'SMILIES_NOT_DISPLAYED'		=> 'Наступні смайлики не будуть відображатися на сторінці розміщення повідомлення',
	'SMILIES_ORDER'				=> 'Порядок смайлика',
	'SMILIES_URL'				=> 'Файл смайлика',
	'SMILIES_WIDTH'				=> 'Ширина смайлика',

    'TOO_MANY_SMILIES'			=> array(
        1        => 'Досягнута межа в кількості смайлів: %d.',
        2        => 'Досягнута межа в кількості смайлів: %d.',
        3        => 'Досягнута межа в кількості смайлів: %d.',
    ),
	'WRONG_PAK_TYPE'	=> 'Зазначений пакет не містить відповідних даних.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'За допомогою цієї панелі ви можете додавати, видаляти і змінювати слова, які будуть автоматично зазнавати цензури на ваших форумах. Однак користувачі зможуть реєструватися з іменами, що містять ці слова. У словах можуть міститися символи узагальнення (*). Наприклад, * тест * буде відповідати слову «протестувати», тест * - «тестування», * тест - «протест».',
	'ADD_WORD'				=> 'Добавити слово',

	'EDIT_WORD'		=> 'Змінення слова',
	'ENTER_WORD'	=> 'Необхідно ввести слово і його заміну.',

	'NO_WORD'	=> 'Не обрано слово для редагування.',

	'REPLACEMENT'	=> 'Заміна',

	'UPDATE_WORD'	=> 'Оновлення слова',

	'WORD'				=> 'Слово',
	'WORD_ADDED'		=> 'Слово успішно додано.',
	'WORD_REMOVED'		=> 'Вибране слово успішно видалено.',
	'WORD_UPDATED'		=> 'Вибране слово успішно оновлено.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'За допомогою цієї панелі ви можете додавати, видаляти і змінювати звання. Також ви можете створювати спеціальні звання, які можуть бути присвоєні користувачам на сторінці управління користувачами.',
	'ADD_RANK'				=> 'Добавити званння',

	'MUST_SELECT_RANK'		=> 'Необхідно вибрати звання.',

	'NO_ASSIGNED_RANK'		=> 'Спеціального звання не присвоєно.',
	'NO_RANK_TITLE'			=> 'Не вказаний заголовок звання.',
	'NO_UPDATE_RANKS'		=> 'Звання успішно видалено. Однак облікові записи користувачів, яким воно було присвоєно, що не були оновлені. Вам необхідно вручну відновити звання в цих облікових записах.',

	'RANK_ADDED'			=> 'Звання успішно додано.',
	'RANK_IMAGE'			=> 'Картинка до звання',
	'RANK_IMAGE_EXPLAIN'	=> 'Тут можна присвоїти невеликий малюнок, пов\'язаний з даним званням. Шлях до малюнка задається щодо кореневої папки phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(використовується)',
	'RANK_MINIMUM'			=> 'Мінімум повідомлень',
	'RANK_REMOVED'			=> 'Звання успішно видалено.',
	'RANK_SPECIAL'			=> 'Спеціальне звання',
	'RANK_TITLE'			=> 'Заголовок звання',
	'RANK_UPDATED'			=> 'Звання успішно оновлено.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Тут ви можете керувати іменами користувачів, забороненими для використання. Заборонені імена можуть містити символи узагальнення (*).',
	'ADD_DISALLOW_EXPLAIN'	=> 'Тут ви можете заборонити ім\'я користувача. Використовуйте зірочку (*) як символи узагальнення для будь-яких символів.',
	'ADD_DISALLOW_TITLE'	=> 'Додати заборонене ім\'я',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Ви можете видалити ім\'я зі списку заборонених, вибравши його та натиснувши кнопку «Відправити».',
	'DELETE_DISALLOW_TITLE'		=> 'Видалити ім\'я зі списку заборонених',
	'DISALLOWED_ALREADY'		=> 'Введене ім\'я  вже заборонено.',
	'DISALLOWED_DELETED'		=> 'Заборонене ім\'я  успішно видалено.',
	'DISALLOW_SUCCESSFUL'		=> 'Заборонене ім\'я  успішно додано.',

	'NO_DISALLOWED'				=> 'Немає заборонених імен',
	'NO_USERNAME_SPECIFIED'		=> 'Не обрано або не задано ім\'я .',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Тут ви можете керувати причинами, використовуваними у скаргах та повідомлення про відхилення повідомлень користувачів. Причина, позначена зірочкою, не може бути видалена. Зазвичай ця причина використовується у випадку, якщо інші наявні причини не підходять під скаргу користувача.',
	'ADD_NEW_REASON'		=> 'Добавити причина',
	'AVAILABLE_TITLES'		=> 'Доступні причини на інших мовах',

	'IS_NOT_TRANSLATED'			=> 'Причина <strong>не</strong> локалізована.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Причина <strong>не</strong> локалізована. Якщо ви хочете надати локалізовану форму, то вкажіть правильний ключ з мовних файлів розділу причин і скарг.',
	'IS_TRANSLATED'				=> 'Причина локалізована',
	'IS_TRANSLATED_EXPLAIN'		=> 'Причина локалізована. Якщо введений заголовок вказаний в мовних файлах у розділі причин і скарг, то буде використовуватися локалізована форма заголовка і опису причини.',

	'NO_REASON'					=> 'Причина не знайдена.',
	'NO_REASON_INFO'			=> 'Необхідно ввести заголовок і опис цієї причини.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Не можна видалити причину «Інше».',

	'REASON_ADD'				=> 'Додавання причини скарги або відмови',
	'REASON_ADDED'				=> 'Причина скарги або відмови додана.',
	'REASON_ALREADY_EXIST'		=> 'Причина з таким заголовком вже існує. Введіть інший заголовок.',
	'REASON_DESCRIPTION'		=> 'Опис причини',
	'REASON_DESC_TRANSLATED'	=> 'Відображувана опис причини',
	'REASON_EDIT'				=> 'Змінення причини або відмови',
	'REASON_EDIT_EXPLAIN'		=> 'Тут ви можете додати або змінити причину. Якщо причина переведена, то використовується локалізована версія, замість введеного тут опису.',
	'REASON_REMOVED'			=> 'Причина скарги або відмови успішно видалена.',
	'REASON_TITLE'				=> 'Заголовок причини',
	'REASON_TITLE_TRANSLATED'	=> 'Відображуваний заголовок причини',
	'REASON_UPDATED'			=> 'Причина скарги або відмови успішно оновлена.',

	'USED_IN_REPORTS'		=> 'Використовується в скаргах',
));
