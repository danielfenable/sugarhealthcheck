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
  'ERR_DELETE_RECORD' => 'Необхідно вказати номер запису, щоб видалити контрагент.',
  'LBL_ACCEPT_LINK' => 'Прийняти посилання',
  'LBL_ACCEPT_STATUS' => 'Прийняти статус',
  'LBL_ACCOUNT_NAME' => 'Контрагент',
  'LBL_ACTIVITIES_REPORTS' => 'Звіт по активностям',
  'LBL_ADD_BUTTON' => 'Додати',
  'LBL_ADD_INVITEE' => 'Додати запрошених осіб',
  'LBL_ASSIGNED_TO_ID' => 'Відповідальний (-а)',
  'LBL_ASSIGNED_TO_NAME' => 'Відповідальний (-а)',
  'LBL_BLANK' => ' ',
  'LBL_CALL' => 'Дзвінок:',
  'LBL_CALL_INFORMATION' => 'Огляд',
  'LBL_CANCEL_CREATE_INVITEE' => 'Скасувати',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Ви дійсно бажаєте видалити всі повторювані записи?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
  'LBL_CONTACT_NAME' => 'Контакт:',
  'LBL_CREATE_AND_ADD' => 'Створити та додати',
  'LBL_CREATE_CONTACT' => 'як контакт',
  'LBL_CREATE_INVITEE' => 'Створити запрошену особу',
  'LBL_CREATE_LEAD' => 'Як інтерес',
  'LBL_CREATE_MODULE' => 'Зареєструвати дзвінок',
  'LBL_DATE' => 'Дата початку:',
  'LBL_DATE_END' => 'Дата завершення',
  'LBL_DATE_END_ERROR' => 'Необхідно задати значення дати завершення перед датою початку',
  'LBL_DATE_TIME' => 'Дата та час початку:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Дзвінки',
  'LBL_DEL' => 'Видалити',
  'LBL_DESCRIPTION' => 'Опис',
  'LBL_DESCRIPTION_INFORMATION' => 'Опис інформації',
  'LBL_DIRECTION' => 'Напрямок:',
  'LBL_DURATION' => 'Тривалість:',
  'LBL_DURATION_HOURS' => 'Тривалість (годин):',
  'LBL_DURATION_MINUTES' => 'Тривалість (хвилин):',
  'LBL_EDIT_ALL_RECURRENCES' => 'Редагувати всі повторення',
  'LBL_EMAIL' => 'Email-повідомлення',
  'LBL_EMAIL_REMINDER' => 'Нагадування по Email',
  'LBL_EMAIL_REMINDER_SENT' => 'Відправлено нагадування по Email',
  'LBL_EMAIL_REMINDER_TIME' => 'Час нагадування по Email',
  'LBL_EMPTY_SEARCH_RESULT' => 'На жаль, нічого не знайдено. Будь ласка, створіть запрошену особу нижче.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Відповідальний (-а) (ID)',
  'LBL_EXPORT_CREATED_BY' => 'Створено (ID)',
  'LBL_EXPORT_DATE_START' => 'Дата та час початку',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Змінено (ID)',
  'LBL_EXPORT_PARENT_TYPE' => 'Пов&#39;язаний з модулем',
  'LBL_EXPORT_REMINDER_TIME' => 'Час нагадування (у хвилинах)',
  'LBL_FIRST_NAME' => 'Ім&#39;я',
  'LBL_HELP_CREATE' => 'Модуль {{plural_module_name}} складається з записів {{calls_singular_module}}, зареєстрованих користувачами Вашої організації. {{Plural_module_name}} можуть перебувати в статусі "Заплановано", "Відбувся", або "Скасовано". Користувачі Sugar, як контакти і попередні контакти можуть бути додані в якості запрошених.

Для того, щоб створити {{calls_singular_module}}:
1. Введіть необхідні значення полів.
    - Поля, відмічені як "Обов&#39;язкові" повинні бути заповнені перед збереженням.
    - Натисніть "Показати більше" для відкриття додаткових полів при необхідності.
2. Додати запрошених до {{calls_singular_module}}.
    - Натисніть "Вибрати запрошеного", щоб додати існуючого користувача, контакт або попередній контакт до {{calls_singular_module}}.
    - Натисніть на значок плюс праворуч від "Виберіть запрошеного" для того, щоб створити учасника {{calls_singular_module}} як новий запис Sugar.
3. Натисніть "Зберегти", щоб завершити створення нового запису і повернутися на попередню сторінку.
    - Виберіть "Зберегти і подивитися" для того, щоб відкрити новий {{calls_singular_module}} в режимі перегляду запису.
    - Виберіть "Зберегти і створити новий" для того, щоб відразу створити інший новий {{calls_singular_module}}.',
  'LBL_HELP_RECORD' => 'Модуль {{plural_module_name}} складається з записів {{calls_singular_module}}, зареєстрованих користувачами Вашої організації. {{Plural_module_name}} може знаходиться в статусі "Заплановано", "Відбувся", або "Скасовано". Користувачі, також як {{contacts_module}} і {{leads_module}} можуть бути додані в якості запрошених.

- Редагуйте поля цього запису, натиснувши на окреме поле або кнопку Правка.
- Переглядайте або змінюйте посилання на інші записи в субпанелях, перемикаючи нижню ліву панель на "Режим перегляду даних".
- Створюйте та переглядайте коментарі користувачів та історію зміни запису в стрічці активностей, перемикаючи нижню ліву панель на "Стрічку активностей".
- Слідкуйте за записом або додавайте запис в обрані, використовуючи значки праворуч від назви запису.
- Додаткові дії доступні у випадаючому меню Дій праворуч від кнопки Правка.',
  'LBL_HELP_RECORDS' => 'Модуль {{plural_module_name}} складається з дзвінків, зареєстрованих користувачами Вашої організації. {{Plural_module_name}} можуть перебувати в статусі «Заплановано», «Відбувся» або «Скасовано». З спискового представлення цього модуля {{plural_module_name}} можна натиснути значок "X" на будь-якому рядку біля запланованого дзвінка для того, щоб позначити його як відбувся. Користувачі Sugar, також як Контакти та Попередні контакти можуть бути додані в якості запрошених. Існують різні способи створення дзвінків в Sugar, такі як через модуль {{calls_module}}, модуль {{calendar_module}}, і за допомогою імпорту. Користувачі можуть також планувати дзвінки через субпанель Активності (для модулів колишніх версій) або через дашлет Заплановані активності (для модулів Sidecar) на пов&#39;язаного запису модуля (наприклад, {{contacts_module}}, {{accounts_module}}, {{leads_module}}, і т.д.), який автоматично створює зв&#39;язок між обома записами. Після створення запису Ви можете переглядати і редагувати інформацію, що стосується Дзвінка, використовуючи режим перегляду запису {{plural_module_name}}.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Примітки',
  'LBL_HOURS_ABBREV' => 'год.',
  'LBL_HOURS_MINUTES' => '(годин/хвилин)',
  'LBL_INVITEE' => 'Запрошені особи',
  'LBL_LAST_NAME' => 'Прізвище',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Інтереси',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Відповідальний (-а)',
  'LBL_LIST_CLOSE' => 'Закрити',
  'LBL_LIST_CONTACT' => 'Контакт',
  'LBL_LIST_DATE' => 'Дата початку',
  'LBL_LIST_DIRECTION' => 'Напрямок',
  'LBL_LIST_DURATION' => 'Тривалість',
  'LBL_LIST_FORM_TITLE' => 'Список дзвінків',
  'LBL_LIST_MY_CALLS' => 'Мої дзвінки',
  'LBL_LIST_RELATED_TO' => 'Пов&#39;язаний з',
  'LBL_LIST_RELATED_TO_ID' => 'Пов&#39;язаний з (ID)',
  'LBL_LIST_SUBJECT' => 'Тема',
  'LBL_LIST_TIME' => 'Час початку',
  'LBL_LOG_CALL' => 'Зареєструвати дзвінок',
  'LBL_MEMBER_OF' => 'Учасник',
  'LBL_MINSS_ABBREV' => 'хв.',
  'LBL_MODULE_NAME' => 'Дзвінки',
  'LBL_MODULE_NAME_SINGULAR' => 'Дзвінок',
  'LBL_MODULE_TITLE' => 'Дзвінки: Головна',
  'LBL_MY_SCHEDULED_CALLS' => 'Мої заплановані дзвінки',
  'LBL_NAME' => 'Назва',
  'LBL_NEW_FORM_TITLE' => 'Створити домовленість про зустріч',
  'LBL_NO_ACCESS' => 'У вас немає прав для створення $module',
  'LBL_OUTLOOK_ID' => 'Outlook (ID)',
  'LBL_PARENT_ID' => 'ID батьківського запису',
  'LBL_PHONE' => 'Телефон',
  'LBL_POPUP_REMINDER_TIME' => 'Спливаюче вікно нагадування часу',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Ви запланували {{moduleSingularLower}} на {{formatDate date_start}}, але у Вас немає прав доступу до запису.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Ви запланували {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> на {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Повторення',
  'LBL_RECURRING_LIMIT_ERROR' => 'Повторюваний дзвінок не може бути запланований через перевищення максимально дозволеної кількості повторень $limit.',
  'LBL_RECURRING_SOURCE' => 'Джерело повторень',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Дзвінок {{{this}}}',
  'LBL_RELATED_TO' => 'Пов&#39;язаний з:',
  'LBL_REMINDER' => 'Нагадування:',
  'LBL_REMINDER_EMAIL' => 'Email',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Сповістити всіх запрошених по Email',
  'LBL_REMINDER_POPUP' => 'Спливаюче вікно',
  'LBL_REMINDER_TIME' => 'Час нагадування',
  'LBL_REMINDER_TITLE' => 'Дзвінок:',
  'LBL_REMOVE' => 'вид.',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Видалити всі повторення',
  'LBL_REPEAT_COUNT' => 'Кількість повторень',
  'LBL_REPEAT_DOW' => 'Конкретна дата',
  'LBL_REPEAT_END' => 'Дата завершення',
  'LBL_REPEAT_END_AFTER' => 'Після',
  'LBL_REPEAT_END_BY' => 'Ким',
  'LBL_REPEAT_INTERVAL' => 'кожну/кожні',
  'LBL_REPEAT_OCCURRENCES' => 'повторення',
  'LBL_REPEAT_PARENT_ID' => 'Батьківський ID повторень',
  'LBL_REPEAT_TYPE' => 'Повторювати',
  'LBL_REPEAT_UNTIL' => 'Повторювати до',
  'LBL_REVENUELINEITEMS' => 'Доходи за продукти',
  'LBL_SCHEDULING_FORM_TITLE' => 'Планування',
  'LBL_SEARCH_BUTTON' => 'Пошук',
  'LBL_SEARCH_FORM_TITLE' => 'Пошук дзвінків',
  'LBL_SELECT_FROM_DROPDOWN' => 'Будь ласка, в першу чергу зробіть вибір зі списку Пов&#39;язаних записів.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Зберегти та відправити запрошення',
  'LBL_SEND_BUTTON_TITLE' => 'Зберегти та відправити запрошення [Alt+I]',
  'LBL_SEND_INVITES' => 'Відправити запрошення',
  'LBL_STATUS' => 'Статус:',
  'LBL_SUBJECT' => 'Тема',
  'LBL_SYNCED_RECURRING_MSG' => 'Цей дзвінок спочатку був створений в іншій системі і синхронізований в Sugar. Внести зміни можна в початковий запис дзвінка в першій системі. Внесені зміни можна синзронізувати в даний запис.',
  'LBL_TIME' => 'Час початку:',
  'LBL_TIME_END' => 'Час завершення',
  'LBL_USERS_SUBPANEL_TITLE' => 'Користувачі',
  'LNK_CALL_LIST' => 'Переглянути дзвінки',
  'LNK_IMPORT_CALLS' => 'Імпорт дзвінків',
  'LNK_NEW_ACCOUNT' => 'Створити контрагент',
  'LNK_NEW_APPOINTMENT' => 'Створити домовленість про зустріч',
  'LNK_NEW_CALL' => 'Зареєструвати дзвінок',
  'LNK_NEW_MEETING' => 'Запланувати зустріч',
  'LNK_NEW_OPPORTUNITY' => 'Створити угоду',
  'LNK_SELECT_ACCOUNT' => 'Вибрати контрагента',
  'NOTICE_DURATION_TIME' => 'Тривалість повинна бути більше, ніж 0',
  'NTC_REMOVE_INVITEE' => 'Ви дійсно бажаєте видалити цю запрошену особу з дзвінка?',
  'TPL_CALL_STATUS_CHANGED' => 'Дзвінок позначений як {{status}}.',
);

