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
  'ERR_REMOVING_ATTACHMENT' => 'Не вдалося видалити вкладення...',
  'LBL_ACCOUNT_ID' => 'Контрагент (ID):',
  'LBL_ACTIVITIES_REPORTS' => 'Звіт по активностям',
  'LBL_CASE_ID' => 'Звернення (ID):',
  'LBL_CLOSE' => 'Закрити:',
  'LBL_COLON' => ':',
  'LBL_CONTACT_ID' => 'Контакт (ID):',
  'LBL_CONTACT_NAME' => 'Контакт:',
  'LBL_CREATED_BY' => 'Створено',
  'LBL_DATE_ENTERED' => 'Дата створення',
  'LBL_DATE_MODIFIED' => 'Дата змінення',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Примітки',
  'LBL_DELETED' => 'Видалено',
  'LBL_DESCRIPTION' => 'Опис',
  'LBL_EDITLAYOUT' => 'Редагувати розташування',
  'LBL_EMAIL_ADDRESS' => 'Адреса Email:',
  'LBL_EMAIL_ATTACHMENT' => 'Вкладення Email-повідомлення',
  'LBL_EMBED_FLAG' => 'Вставити в email?',
  'LBL_EXPORT_PARENT_ID' => 'Пов&#39;язаний з (ID)',
  'LBL_EXPORT_PARENT_TYPE' => 'Пов&#39;язаний з модулем',
  'LBL_FILENAME' => 'Вкладення:',
  'LBL_FILE_MIME_TYPE' => 'Тип Mime',
  'LBL_FILE_URL' => 'URL файлу',
  'LBL_FIRST_NAME' => 'Ім&#39;я',
  'LBL_HELP_CREATE' => 'Щоб створити {{module_name}}:
1. Вкажіть значення полів.
  - Поля з позначкою "Обов&#39;язково" повинні бути заповнені перед збереженням.
  - Натисніть "Показати більше", щоб відобразити додаткові поля при необхідності.
2. Натисніть "Зберегти" для збереження нового запису та повернення на попередню сторінку.
  - Виберіть "Зберегти і переглянути", щоб відкрити новий {{module_name}} в режимі перегляду запису.
- Виберіть "Зберегти і створити", щоб відразу створити новий {{module_name}}.',
  'LBL_HELP_RECORD' => '{{Plural_module_name}} модуль включає контакти {{plural_module_name}}, які містять текст або вкладення, що відноситься до пов&#39;язаного запису.

- Щоб редагувати поля даного запису, натисніть на самому полі або клікніть по кнопці Редагувати.
- Щоб переглянути або змінити посилання, що ведуть до інших записів, на субпанелі, переведіть ліву нижню панель на "Перегляд даних".
- Щоб залишати і переглядати коментарі користувачів, а також змінювати історію в рамках одного запису в {{activitystream_singular_module}}, переведіть ліву нижню панель на "Поток активності".
- Щоб підписатися або додати у Вибране даний запис, використовуйте іконки праворуч від запису.
- Додаткові дії доступні у випадаючому меню Дій праворуч від кнопки Редагувати.',
  'LBL_HELP_RECORDS' => '{{Plural_module_name}} модуль містить контакти {{plural_module_name}}, які включають текст або вкладення, яке прив&#39;язується до конкретного запису. {{Module_name}} записи можуть бути пов&#39;язані з одним записом у багатьох модулях через поле "flex relate field" і з одиничним {{contacts_singular_module}}. {{Plural_module_name}} може містити загальний текст про запис або навіть вкладення, що відноситься до запису. Існують різні способи створення {{plural_module_name}} в Sugar як через {{plural_module_name}} модуль, імпорт {{plural_module_name}}, через субпанелі Історія, і т.п. Як тільки {{module_name}} запис створено, ви можете переглянути та редагувати інформацію, що відноситься до {{module_name}} в {{plural_module_name}} режимі перегляду запису. Кожен {{module_name}} запис може бути пов&#39;язаний з іншими записами Sugar, такими як {{accounts_module}}, {{contacts_module}}, {{opportunities_module}}, і багатьма іншими.',
  'LBL_LAST_NAME' => 'Прізвище',
  'LBL_LEAD_ID' => 'Інтерес (ID):',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Відповідальний (-а)',
  'LBL_LIST_CONTACT' => 'Контакт',
  'LBL_LIST_CONTACT_NAME' => 'Контакт',
  'LBL_LIST_DATE_MODIFIED' => 'Остання зміна',
  'LBL_LIST_EDIT_BUTTON' => 'Редагувати',
  'LBL_LIST_FILENAME' => 'Вкладення',
  'LBL_LIST_FORM_TITLE' => 'Список приміток',
  'LBL_LIST_RELATED_TO' => 'Пов&#39;язаний з',
  'LBL_LIST_STATUS' => 'Статус',
  'LBL_LIST_SUBJECT' => 'Тема',
  'LBL_MEMBER_OF' => 'Учасник:',
  'LBL_MODIFIED_BY' => 'Змінено',
  'LBL_MODULE_NAME' => 'Примітки',
  'LBL_MODULE_NAME_SINGULAR' => 'Примітка',
  'LBL_MODULE_TITLE' => 'Примітки: Головна',
  'LBL_MY_NOTES_DASHLETNAME' => 'Мої примітки',
  'LBL_NEW_FORM_BTN' => 'Додати примітку',
  'LBL_NEW_FORM_TITLE' => 'Створити примітку або додати вкладення',
  'LBL_NOTE' => 'Примітка:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Примітки та вкладення',
  'LBL_NOTE_INFORMATION' => 'Огляд',
  'LBL_NOTE_STATUS' => 'Примітка',
  'LBL_NOTE_SUBJECT' => 'Тема:',
  'LBL_OC_FILE_NOTICE' => 'Будь ласка, увійдіть до серверу для перегляду файлу',
  'LBL_OPPORTUNITY_ID' => 'Угода (ID):',
  'LBL_PANEL_DETAILS' => 'Деталі',
  'LBL_PARENT_ID' => 'Батьківський запис (ID):',
  'LBL_PARENT_TYPE' => 'Тип батьківського запису',
  'LBL_PHONE' => 'Телефон:',
  'LBL_PORTAL_FLAG' => 'Відображати на порталі?',
  'LBL_PRODUCT_ID' => 'Продукт комерційної пропозиції (ID)',
  'LBL_QUOTE_ID' => 'Комерційна пропозиція (ID):',
  'LBL_RELATED_TO' => 'Пов&#39;язаний з:',
  'LBL_REMOVING_ATTACHMENT' => 'Видалення вкладення...',
  'LBL_REVENUELINEITEMS' => 'Доходи за продукти',
  'LBL_SEARCH_FORM_TITLE' => 'Пошук примітки',
  'LBL_SEND_ANYWAYS' => 'Ви дійсно бажаєте надіслати/зберегти це email-повідомлення без теми?',
  'LBL_STATUS' => 'Статус',
  'LBL_SUBJECT' => 'Тема:',
  'LNK_IMPORT_NOTES' => 'Імпорт приміток',
  'LNK_NEW_NOTE' => 'Створити примітку або вкладення',
  'LNK_NOTE_LIST' => 'Переглянути примітки',
);

