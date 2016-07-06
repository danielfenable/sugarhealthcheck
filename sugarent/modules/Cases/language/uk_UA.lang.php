<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Необхідно вказати номер запису перед видаленням.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Контрагенти',
  'LBL_ACCOUNT_ID' => 'Контрагент (ID):',
  'LBL_ACCOUNT_NAME' => 'Контрагент:',
  'LBL_ACCOUNT_NAME_MOD' => 'Контрагент',
  'LBL_ACCOUNT_NAME_OWNER' => 'Контрагент: Власник',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Активності',
  'LBL_ASSIGNED_TO_NAME' => 'Відповідальний (-а)',
  'LBL_ASSIGNED_USER_NAME_MOD' => 'Відповідальний користувач',
  'LBL_ASSIGNED_USER_NAME_OWNER' => 'Відповідальний користувач: Власник',
  'LBL_ATTACH_NOTE' => 'Додати примітку',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Помилки',
  'LBL_CASE' => 'Звернення:',
  'LBL_CASE_FROM_TWITTER_TITLE' => 'Tweet',
  'LBL_CASE_INFORMATION' => 'Огляд',
  'LBL_CASE_NUMBER' => 'Номер звернення:',
  'LBL_CASE_SUBJECT' => 'Тема звернення:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
  'LBL_CONTACT_CASE_TITLE' => 'Контакт-Звернення:',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Email-повідомлення пов&#39;язаних контактів',
  'LBL_CONTACT_NAME' => 'Контактна особа:',
  'LBL_CONTACT_ROLE' => 'Роль:',
  'LBL_CREATED_BY_NAME_MOD' => 'Створено: Власник',
  'LBL_CREATED_BY_NAME_OWNER' => 'Створено: Власник',
  'LBL_CREATED_USER' => 'Створенено користувачем',
  'LBL_CREATE_KB_DOCUMENT' => 'Створити статтю',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Звернення',
  'LBL_DESCRIPTION' => 'Опис:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документи',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Відповідальний (-а) (ID)',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Відповідальний (-а)',
  'LBL_EXPORT_CREATED_BY' => 'Створено (ID)',
  'LBL_EXPORT_CREATED_BY_NAME' => 'Створено користувачем',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Змінено (ID)',
  'LBL_EXPORT_TEAM_COUNT' => 'Команда',
  'LBL_FILENANE_ATTACHMENT' => 'Вкладений файл',
  'LBL_HELP_CREATE' => '{Plural_module_name}} модуль використовується, щоб відстежувати і керувати помилками, пов&#39;язаними з продуктом або послугою, про які повідомляють ваші клієнти.

Щоб створити {{module_name}}:
1. Вкажіть значення полів.
- Поля з позначкою "Обов&#39;язково" повинні бути заповнені перед збереженням.
- Натисніть "Показати більше", щоб відобразити додаткові поля при необхідності.
2. Натисніть "Зберегти" для збереження нового запису та повернення на попередню сторінку.
- Виберіть "Зберегти і переглянути", щоб відкрити новий {{module_name}} в режимі перегляду запису.
- Виберіть "Зберегти і створити", щоб відразу створити новий {{module_name}}.',
  'LBL_HELP_RECORD' => '{{Plural_module_name}} модуль використовується, щоб відстежувати і керувати помилками, пов&#39;язаними з продуктом або послугою, про які повідомляють ваші клієнти.

- Щоб редагувати поля даного запису, натисніть на самому полі або клікніть на кнопку Редагувати.
- Щоб переглянути або змінити посилання, що ведуть до інших записів, на субпанеле перемкніть ліву нижню панель на "Перегляд даних".
- Щоб залишати і переглядати коментарі користувача, а також змінювати історію в рамках одного запису в {{activitystream_singular_module}}, переведіть ліву нижню панель на "Стручку активності".
- Щоб підписатися або додати у Вибране даний запис, використовуйте іконки праворуч від запису.
- Додаткові дії доступні у випадаючому меню Кнопка Дій знаходиться праворуч від кнопки Редагувати.',
  'LBL_HELP_RECORDS' => '{{Plural_module_name}} модуль використовується, щоб відстежувати і керувати помилками, пов&#39;язаними з продуктом або послугою, про які повідомляють ваші клієнти. {{Plural_module_name}} відносяться до {{accounts_singular_module}} записів, і множинні {{plural_module_name}} можуть бути пов&#39;язані з одиничним {{accounts_singular_module}}. Існують різні способи створення {{plural_module_name}} в Sugar як і через {{plural_module_name}} модуль, імпорт {{plural_module_name}}, або конвертацію e-mail звернення. Як тільки {{module_name}} створений, ви можете переглянути та редагувати інформацію, що відноситься до {{module_name}} в {{module_name}} режимі перегляду запису. Кожен {{module_name}} запис може бути співвіднесений з іншими записами Sugar, такими як {{calls_module}}, {{contacts_module}}, {{bugs_module}}, і багатьма іншими.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
  'LBL_INVITEE' => 'Контакти',
  'LBL_KBDOCUMENTS_SUBPANEL_TITLE' => 'База знань',
  'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
  'LBL_LIST_ASSIGNED' => 'Відповідальний (-а)',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Відповідальний (-а)',
  'LBL_LIST_CLOSE' => 'Закрити',
  'LBL_LIST_DATE_CREATED' => 'Дата створення',
  'LBL_LIST_FORM_TITLE' => 'Список звернень',
  'LBL_LIST_LAST_MODIFIED' => 'Остання зміна',
  'LBL_LIST_MY_CASES' => 'Мої відкриті звернення',
  'LBL_LIST_NUMBER' => 'Ном.',
  'LBL_LIST_PRIORITY' => 'Пріоритет',
  'LBL_LIST_STATUS' => 'Статус',
  'LBL_LIST_SUBJECT' => 'Тема',
  'LBL_MEMBER_OF' => 'Контрагент',
  'LBL_MODIFIED_BY_NAME_MOD' => 'Змінено: Власник',
  'LBL_MODIFIED_BY_NAME_OWNER' => 'Змінено: Власник',
  'LBL_MODIFIED_USER' => 'Змінено користувачем',
  'LBL_MODIFIED_USER_NAME' => 'Змінено користувачем',
  'LBL_MODIFIED_USER_NAME_MOD' => 'Змінено користувачем',
  'LBL_MODIFIED_USER_NAME_OWNER' => 'Змінено користувачем: Власник',
  'LBL_MODULE_NAME' => 'Звернення',
  'LBL_MODULE_NAME_SINGULAR' => 'Звернення',
  'LBL_MODULE_TITLE' => 'Звернення: Головна',
  'LBL_NEW_FORM_TITLE' => 'Нове звернення',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Примітки',
  'LBL_NUMBER' => 'Номер:',
  'LBL_PORTAL_TOUR_RECORDS_CREATE' => 'Якщо ви знайшли нову помилку, про яку ви хочете звітувати, можете натиснути тут, щоб звітувати про нову помилку.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER' => 'Ви можете відфільтрувати список звернень, надаючи слово для пошуку.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER_EXAMPLE' => 'Наприклад, можна застосовувати це для того, щоб знайти помилку, про яку раніше звітували.',
  'LBL_PORTAL_TOUR_RECORDS_INTRO' => 'Модуль звернень для управління зверненнями на підтримку. Використовуйте стрілки внизу для швидкого ознайомлення з модулем',
  'LBL_PORTAL_TOUR_RECORDS_PAGE' => 'На цій сторінці наведено список існуючих звернень, пов&#39;язаних с контрагентом.',
  'LBL_PORTAL_TOUR_RECORDS_RETURN' => 'Натиснувши тут ви повернетесь до цього режиму перегляду в будь-який час.',
  'LBL_PORTAL_VIEWABLE' => 'Видимий на порталі',
  'LBL_PRIORITY' => 'Пріоритет:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекти',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекти',
  'LBL_RESOLUTION' => 'Рішення:',
  'LBL_SEARCH_FORM_TITLE' => 'Пошук звернень',
  'LBL_SHOW_IN_PORTAL' => 'Відображати на порталі',
  'LBL_SHOW_MORE' => 'Показати більше звернень',
  'LBL_SOURCE' => 'Джерело:',
  'LBL_STATUS' => 'Статус:',
  'LBL_SUBJECT' => 'Тема:',
  'LBL_SYSTEM_ID' => 'Система (ID)',
  'LBL_TEAM_COUNT_MOD' => 'Team Count Mod',
  'LBL_TEAM_COUNT_OWNER' => 'Власник команди',
  'LBL_TEAM_NAME_MOD' => 'Назва команди',
  'LBL_TEAM_NAME_OWNER' => 'Назва команди: Власник',
  'LBL_TYPE' => 'Тип',
  'LBL_WORK_LOG' => 'Робочий Лог',
  'LNK_CASE_LIST' => 'Переглянути звернення',
  'LNK_CASE_REPORTS' => 'Переглянути звіти по зверненням',
  'LNK_CREATE' => 'Створити звернення',
  'LNK_CREATE_WHEN_EMPTY' => 'Створити звернення зараз.',
  'LNK_IMPORT_CASES' => 'Імпорт звернень',
  'LNK_NEW_CASE' => 'Створити звернення',
  'NTC_REMOVE_FROM_BUG_CONFIRMATION' => 'Ви дійсно бажаєте видалити це звернення з помилки?',
  'NTC_REMOVE_INVITEE' => 'Ви дійсно бажаєте видалити цей контакт зі звернення?',
);

