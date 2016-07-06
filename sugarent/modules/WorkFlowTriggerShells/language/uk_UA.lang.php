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
  'ERR_DELETE_EMPTY' => 'Запис вже видалений або не існує.',
  'ERR_DELETE_RECORD' => 'Необхідно вказати номер запису перед видаленням.',
  'LBL_ALERT_TEMPLATES' => 'Шаблони сповіщень',
  'LBL_APOSTROPHE_S' => '&#39;s',
  'LBL_COMPARE_ANY_TIME_PART2' => 'не змінюється',
  'LBL_COMPARE_ANY_TIME_PART3' => 'протягом зазначеного періоду часу',
  'LBL_COMPARE_ANY_TIME_TITLE' => 'Поле не змінюється протягом зазначеного періоду часу',
  'LBL_COMPARE_CHANGE_PART' => 'зміни',
  'LBL_COMPARE_CHANGE_TITLE' => 'Коли поле цільового модуля змінюється',
  'LBL_COMPARE_COUNT_TITLE' => 'Запуск по конкретній кількісті',
  'LBL_COMPARE_SPECIFIC_PART' => 'зміна на вказане значення або з нього',
  'LBL_COMPARE_SPECIFIC_PART_TIME' => ' ',
  'LBL_COMPARE_SPECIFIC_TITLE' => 'Коли поле в цільовому модулі змінюється на вказане значення',
  'LBL_COUNT_TRIGGER1' => 'Всього',
  'LBL_COUNT_TRIGGER1_2' => 'порівнює з цією кількістю',
  'LBL_COUNT_TRIGGER2' => 'фільтрувати по пов&#39;язаному',
  'LBL_COUNT_TRIGGER2_2' => 'тільки',
  'LBL_COUNT_TRIGGER3' => 'фільтрувати визначено по',
  'LBL_COUNT_TRIGGER4' => 'фільтрувати по секундах',
  'LBL_EVAL' => 'Оцінка умов запуску:',
  'LBL_FIELD' => 'поле',
  'LBL_FILTER_FIELD_PART1' => 'Фільтр по',
  'LBL_FILTER_FIELD_TITLE' => 'Коли поле цільового модуля містить вказане значення',
  'LBL_FILTER_FORM_TITLE' => 'Створити умову бізнес-процесу',
  'LBL_FILTER_LIST_STATEMEMT' => 'Фільтрувати об&#39;єкти, ґрунтуючись на наступному:',
  'LBL_FILTER_REL_FIELD_PART1' => 'вказати пов&#39;язаний',
  'LBL_FILTER_REL_FIELD_TITLE' => 'Коли змінюється цільовий модуль, і поле пов&#39;язаного модуля містить вказане значення',
  'LBL_FUTURE_TRIGGER' => 'Вказати новий',
  'LBL_LIST_EVAL' => 'Оцінка:',
  'LBL_LIST_FIELD' => 'Поле:',
  'LBL_LIST_FORM_TITLE' => 'Список тригерів',
  'LBL_LIST_FRAME_PRI' => 'Тригер:',
  'LBL_LIST_FRAME_SEC' => 'Фільтр:',
  'LBL_LIST_NAME' => 'Опис:',
  'LBL_LIST_STATEMEMT' => 'Запустити подію, грунтуючись на наступному:',
  'LBL_LIST_TYPE' => 'Тип:',
  'LBL_LIST_VALUE' => 'Значення:',
  'LBL_MODULE' => 'модуль',
  'LBL_MODULE_NAME' => 'Умови',
  'LBL_MODULE_NAME_SINGULAR' => 'Умова',
  'LBL_MODULE_SECTION_TITLE' => 'Якщо ці умови будуть виконані',
  'LBL_MODULE_TITLE' => 'Тригери бізнес-процесів: Головна',
  'LBL_MUST_SELECT_VALUE' => 'Необхідно вибрати значення для цього поля.',
  'LBL_NAME' => 'Назва тригеру:',
  'LBL_NEW_FILTER_BUTTON_KEY' => 'F',
  'LBL_NEW_FILTER_BUTTON_LABEL' => 'Створити фільтр',
  'LBL_NEW_FILTER_BUTTON_TITLE' => 'Створити фільтр',
  'LBL_NEW_FORM_TITLE' => 'Створити тригер',
  'LBL_NEW_TRIGGER_BUTTON_KEY' => 'T',
  'LBL_NEW_TRIGGER_BUTTON_LABEL' => 'Створити тригер',
  'LBL_NEW_TRIGGER_BUTTON_TITLE' => 'Створити тригер',
  'LBL_PAST_TRIGGER' => 'Вказати старий',
  'LBL_RECORD' => 'Модуль',
  'LBL_SEARCH_FORM_TITLE' => 'Пошук тригерів бізнес-процесів',
  'LBL_SELECT_1ST_FILTER' => 'Необхідно вибрати дійсне поле для першого фільтра',
  'LBL_SELECT_2ND_FILTER' => 'Необхідно вибрати дійсне поле для другого фільтра',
  'LBL_SELECT_AMOUNT' => 'Необхідно вибрати кількість.',
  'LBL_SELECT_OPTION' => 'Будь ласка, виберіть параметр.',
  'LBL_SELECT_TARGET_FIELD' => 'Будь ласка, виберіть основне поле.',
  'LBL_SELECT_TARGET_MOD' => 'Будь ласка, виберіть цільовий пов&#39;язаний модуль.',
  'LBL_SHOW' => 'Показати',
  'LBL_SHOW_PAST' => 'Зммінити попереднє значення:',
  'LBL_SPECIFIC_FIELD' => 'поле',
  'LBL_SPECIFIC_FIELD_LNK' => 'специфічне поле',
  'LBL_TRIGGER' => 'Коли',
  'LBL_TRIGGER_FILTER_TITLE' => 'Фільтри тригеру',
  'LBL_TRIGGER_FORM_TITLE' => 'Визначити умову запуску послідовності виконуваних дій',
  'LBL_TRIGGER_RECORD_CHANGE_TITLE' => 'Коли цільовий модуль змінюється',
  'LBL_TYPE' => 'Тип:',
  'LBL_VALUE' => 'значення',
  'LBL_WHEN_VALUE1' => 'Коли значення поля',
  'LBL_WHEN_VALUE2' => 'Коли значення',
  'LNK_NEW_TRIGGER' => 'Створити тригер',
  'LNK_NEW_WORKFLOW' => 'Створити бізнес-процес',
  'LNK_TRIGGER' => 'Тригери бізнес-процесів',
  'LNK_WORKFLOW' => 'Об&#39;єкти бізнес-процесу',
  'NTC_REMOVE_TRIGGER' => 'Ви дійсно бажаєте видалити цей тригер?',
  'NTC_REMOVE_TRIGGER_PRIMARY' => 'Видалити основний тригер',
);

