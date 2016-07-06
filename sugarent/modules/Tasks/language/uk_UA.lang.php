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
  'DATE_FORMAT' => '(рррр-мм-дд)',
  'ERR_DELETE_RECORD' => 'Необхідно вказати номер запису перед видаленням.',
  'ERR_INVALID_HOUR' => 'Будь ласка, введіть коректне значення годин від 0 до 24',
  'LBL_ACTIVITIES_REPORTS' => 'Звіт по активностям',
  'LBL_ASSIGNED_TO_NAME' => 'Відповідальний (-а)',
  'LBL_ASSIGNED_USER' => 'Відповідальний (-а)',
  'LBL_COLON' => ':',
  'LBL_CONTACT' => 'Контакт:',
  'LBL_CONTACT_FIRST_NAME' => 'Ім&#39;я контакту',
  'LBL_CONTACT_ID' => 'Контакт (ID):',
  'LBL_CONTACT_LAST_NAME' => 'Прізвище контакту',
  'LBL_CONTACT_NAME' => 'Контактна особа',
  'LBL_CONTACT_PHONE' => 'Телефон контакту:',
  'LBL_DATE_DUE' => 'Дата завершення:',
  'LBL_DATE_DUE_FLAG' => 'Немає дати завершення',
  'LBL_DATE_START_FLAG' => 'Немає дати початку',
  'LBL_DEFAULT_PRIORITY' => 'Середній',
  'LBL_DESCRIPTION' => 'Опис:',
  'LBL_DESCRIPTION_INFORMATION' => 'Опис інформації',
  'LBL_DUE_DATE' => 'Дата завершення:',
  'LBL_DUE_DATE_AND_TIME' => 'Дата та час завершення:',
  'LBL_DUE_TIME' => 'Час завершення:',
  'LBL_EDITLAYOUT' => 'Редагувати розташування',
  'LBL_EMAIL' => 'Адреса Email:',
  'LBL_EMAIL_ADDRESS' => 'Адреса Email:',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Відповідальний (-а) (ID)',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Відповідальний користувач',
  'LBL_EXPORT_CREATED_BY' => 'Створено (ID)',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Змінено (ID)',
  'LBL_EXPORT_PARENT_ID' => 'ID батьківського запису',
  'LBL_EXPORT_PARENT_TYPE' => 'Пов&#39;язаний з модулем',
  'LBL_HELP_CREATE' => '{{Plural_module_name}} модуль містить перелік дій та активностей різного типу, які повинні бути завершені. Щоб створити {{module_name}}: 1. Вкажіть значення полів. - Поля з позначкою "Обов&#39;язково" повинні бути заповнені перед збереженням. - Натисніть "Показати більше", щоб відобразити додаткові поля при необходімості.2. Натисніть "Зберегти" для збереження нового запису та повернення на попередню сторінку. - Виберіть "Зберегти і переглянути", щоб відкрити новий {{module_name}} в режимі перегляду запису. - Виберіть "Зберегти і створити", щоб відразу створити новий {{module_name}}.',
  'LBL_HELP_RECORD' => '{{Plural_module_name}} модуль використовується, щоб відстежувати і керувати помилками, пов&#39;язаними з продуктом або послугою, про які повідомляють ваші клієнти.

- Щоб редагувати поля даного запису, натисніть на самому полі або клікніть на кнопку Редагувати.
- Щоб переглянути або змінити посилання, що ведуть до інших записів, на субпанеле перемкніть ліву нижню панель на "Перегляд даних".
- Щоб залишати і переглядати коментарі користувача, а також змінювати історію в рамках одного запису в {{activitystream_singular_module}}, переведіть ліву нижню панель на "Стручку активності".
- Щоб підписатися або додати у Вибране даний запис, використовуйте іконки праворуч від запису.
- Додаткові дії доступні у випадаючому меню Кнопка Дій знаходиться праворуч від кнопки Редагувати.',
  'LBL_HELP_RECORDS' => '{{plural_module_name}} модуль містить перелік дій та активностей різного типу, які повинні бути завершені. {{module_name}} записи можуть бути пов&#39;язані з одним записом у багатьох модулях через поле "flex relate" і можуть бути також пов&#39;язані з одним {{contacts_singular_module}}. Існує безліч способів як Ви можете створити {{plural_module_name}} в Sugar, використовуючи {{plural_module_name}} модуль, дублювання, імпорт {{plural_module_name}}, і т.п. Як тільки {{module_name}} запис створено, Ви можете переглянути та редагувати інформацію, що стосується {{module_name}} в {{plural_module_name}} режимі перегляду запису. Залежно від деталей {{module_name}}, Ви також зможете переглянути та редагувати {{module_name}} інформацію через модуль Календар. Кожен {{module_name}} запис може бути пов&#39;язаний з іншими записами Sugar, такими як {{accounts_module}}, {{contacts_module}}, {{opportunities_module}}, і багатьма іншими.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Примітки',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Відповідальний (-а)',
  'LBL_LIST_CLOSE' => 'Закрити',
  'LBL_LIST_COMPLETE' => 'Завершено:',
  'LBL_LIST_CONTACT' => 'Контакт',
  'LBL_LIST_DATE_MODIFIED' => 'Дата змінення',
  'LBL_LIST_DUE_DATE' => 'Дата завершення',
  'LBL_LIST_DUE_TIME' => 'Час завершення',
  'LBL_LIST_FORM_TITLE' => 'Список задач',
  'LBL_LIST_MY_TASKS' => 'Мої відкриті задачі',
  'LBL_LIST_PRIORITY' => 'Пріоритет',
  'LBL_LIST_RELATED_TO' => 'Пов&#39;язаний з',
  'LBL_LIST_START_DATE' => 'Дата початку',
  'LBL_LIST_START_TIME' => 'Час початку',
  'LBL_LIST_STATUS' => 'Статус',
  'LBL_LIST_SUBJECT' => 'Тема',
  'LBL_MODULE_NAME' => 'Задачі',
  'LBL_MODULE_NAME_SINGULAR' => 'Задача',
  'LBL_MODULE_TITLE' => 'Задачі: Головна',
  'LBL_NAME' => 'Назва:',
  'LBL_NEW_FORM_DUE_DATE' => 'Дата завершення:',
  'LBL_NEW_FORM_DUE_TIME' => 'Час завершення:',
  'LBL_NEW_FORM_SUBJECT' => 'Тема:',
  'LBL_NEW_FORM_TITLE' => 'Створити задачу',
  'LBL_NEW_TIME_FORMAT' => '(24:00)',
  'LBL_NONE' => 'Не визначено',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Примітки',
  'LBL_PARENT_ID' => 'ID батьківського запису:',
  'LBL_PARENT_NAME' => 'Тип батьківського запису:',
  'LBL_PHONE' => 'Телефон:',
  'LBL_PRIORITY' => 'Пріоритет:',
  'LBL_REVENUELINEITEMS' => 'Доходи за продукти',
  'LBL_SEARCH_FORM_TITLE' => 'Пошук задач',
  'LBL_START_DATE' => 'Дата початку',
  'LBL_START_DATE_AND_TIME' => 'Дата та час початку:',
  'LBL_START_TIME' => 'Час початку:',
  'LBL_STATUS' => 'Статус:',
  'LBL_SUBJECT' => 'Тема:',
  'LBL_TASK' => 'Задачі:',
  'LBL_TASK_CLOSE_SUCCESS' => 'Задача успішно закрита.',
  'LBL_TASK_INFORMATION' => 'Огляд',
  'LNK_IMPORT_TASKS' => 'Імпорт задач',
  'LNK_NEW_TASK' => 'Створити задачу',
  'LNK_TASK_LIST' => 'Переглянути задачі',
);

