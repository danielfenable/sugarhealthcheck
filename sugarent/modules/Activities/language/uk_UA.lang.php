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
  'LBL_ACCEPT' => 'Прийняти',
  'LBL_ACCEPT_THIS' => 'Прийняти?',
  'LBL_COLON' => ':',
  'LBL_CONTACT_NAME' => 'Контактна особа:',
  'LBL_DATE' => 'Дата початку:',
  'LBL_DATE_TIME' => 'Дата та час початку:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Відкриті активності',
  'LBL_DELETE_ACTIVITY' => 'Ви дійсно бажаєте видалити цю активність?',
  'LBL_DESCRIPTION' => 'Опис:',
  'LBL_DESCRIPTION_INFORMATION' => 'Опис інформації',
  'LBL_DIRECTION' => 'Напрямок',
  'LBL_DURATION' => 'Тривалість:',
  'LBL_DURATION_MINUTES' => 'Тривалість хвилин:',
  'LBL_HISTORY' => 'Історія',
  'LBL_HOURS_MINS' => '(годин/хвилин)',
  'LBL_INVITEE' => 'Запрошені особи',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Відповідальний (-а)',
  'LBL_LIST_CLOSE' => 'Закрити',
  'LBL_LIST_CONTACT' => 'Контакт',
  'LBL_LIST_DATE' => 'Дата',
  'LBL_LIST_DIRECTION' => 'Напрямок',
  'LBL_LIST_DUE_DATE' => 'Дата завершення',
  'LBL_LIST_FORM_TITLE' => 'Список активностей',
  'LBL_LIST_LAST_MODIFIED' => 'Остання зміна',
  'LBL_LIST_RELATED_TO' => 'Пов&#39;язаний з',
  'LBL_LIST_STATUS' => 'Статус',
  'LBL_LIST_SUBJECT' => 'Тема',
  'LBL_LIST_TIME' => 'Час початку:',
  'LBL_LOCATION' => 'Місце:',
  'LBL_MEETING' => 'Зустріч:',
  'LBL_MODULE_NAME' => 'Активності',
  'LBL_MODULE_NAME_SINGULAR' => 'Активності',
  'LBL_MODULE_TITLE' => 'Активності: Головна',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Створити примітку або вкладення',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Створити примітку або вкладення',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Створити задачу',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Створити задачу',
  'LBL_OPEN_ACTIVITIES' => 'Відкриті активності',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Зареєструвати дзвінок',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Зареєструвати дзвінок',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Запланувати зустріч',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Запланувати зустріч',
  'LBL_SEARCH_FORM_TITLE' => 'Пошук активностей',
  'LBL_STATUS' => 'Статус:',
  'LBL_SUBJECT' => 'Тема:',
  'LBL_TIME' => 'Час початку:',
  'LBL_TODAY' => 'через',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Архівувати Email-повідомлення',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Архівувати Email-повідомлення',
  'LBL_UPCOMING' => 'Мої майбутні домовленості про зустрічі',
  'LNK_CALL_LIST' => 'Переглянути дзвінки',
  'LNK_EMAIL_LIST' => 'Переглянути Email-повідомлення',
  'LNK_IMPORT_CALLS' => 'Імпорт дзвінків',
  'LNK_IMPORT_MEETINGS' => 'Імпорт зустрічей',
  'LNK_IMPORT_NOTES' => 'Імпорт приміток',
  'LNK_IMPORT_TASKS' => 'Імпорт задач',
  'LNK_MEETING_LIST' => 'Переглянути зустрічі',
  'LNK_NEW_APPOINTMENT' => 'Нова домовленість про зустріч',
  'LNK_NEW_CALL' => 'Зареєструвати дзвінок',
  'LNK_NEW_EMAIL' => 'Створити архівоване Email-повідомлення',
  'LNK_NEW_MEETING' => 'Запланувати зустріч',
  'LNK_NEW_NOTE' => 'Створити примітку або додати вкладення',
  'LNK_NEW_TASK' => 'Створити задачу',
  'LNK_NOTE_LIST' => 'Переглянути примітки',
  'LNK_TASK_LIST' => 'Переглянути задачі',
  'LNK_VIEW_CALENDAR' => 'Переглянути календар',
  'NTC_NONE' => 'Не визначено',
  'NTC_NONE_SCHEDULED' => 'Не заплановано.',
  'NTC_REMOVE_INVITEE' => 'Ви дійсно бажаєте видалити цю запрошену особу зі зустрічі?',
  'appointment_filter_dom' => 
  array (
    'last next_month' => 'наступного місяця',
    'last this_month' => 'цього місяця',
    'next Saturday' => 'наступного тижня',
    'this Saturday' => 'цього тижня',
    'today' => 'сьогодні',
    'tomorrow' => 'завтра',
  ),
);

