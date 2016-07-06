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
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Контрагенти',
  'LBL_ASSIGNED_TO' => 'Відповідальний (-а)',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Маркетингові кампанії',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
  'LBL_COPY_PREFIX' => 'Копія',
  'LBL_CREATED' => 'Створено',
  'LBL_CREATED_BY' => 'Створено',
  'LBL_DATE_CREATED' => 'Дата створення',
  'LBL_DATE_ENTERED' => 'Дата створення',
  'LBL_DATE_LAST_MODIFIED' => 'Дата зміни',
  'LBL_DATE_MODIFIED' => 'Дата змінення',
  'LBL_DESCRIPTION' => 'Опис',
  'LBL_DOMAIN' => 'Немає email-повідомлень для домену',
  'LBL_DOMAIN_NAME' => 'Доменне ім&#39;я',
  'LBL_ENTRIES' => 'Всього записів',
  'LBL_HELP_CREATE' => '{{Module_name}} містить список контактів і контрагентів, яких Ви хочете включити в маркетингову кампанію або виключити з неї {{campaigns_singular_module}}.

Щоб створити {{module_name}}:
1. Вкажіть значення полів.
 - Поля з позначкою "Обов&#39;язково" повинні бути заповнені перед збереженням.
 - Натисніть "Показати більше", щоб відобразити додаткові поля при необхідності.
2. Натисніть "Зберегти" для збереження нового запису та повернення на попередню сторінку.
 - Виберіть "Зберегти і переглянути", щоб відкрити новий {{module_name}} в режимі перегляду запису.
 - Виберіть "Зберегти і створити", щоб відразу створити новий {{module_name}}.
3. Після збереження на субпанелях, які доступні в режимі перегляду цільового запису, Ви можете додати {{campaigns_singular_module}} користувачів.',
  'LBL_HELP_RECORD' => '{{module_name}} містить список контактів і контрагентів, яких Ви хочете включити в маркетингову кампанію або виключити з неї {{campaigns_singular_module}}.

- Щоб редагувати поля цього запису, клікніть на самому полі або натисніть кнопку Редагувати.
- Щоб переглянути або змінити посилання, що ведуть до інших записів, на субпанелі, включаючи {{campaigns_singular_module}} одержувачів, переведіть ліву нижню панель на "Перегляд даних".
- Щоб залишати і переглядати коментарі користувачів і змінювати історію в рамках одного запису в {{activitystream_singular_module}}, переведіть ліву нижню панель на "Стрічка активностей".
- Щоб підписатися або додати у Вибране цей запис, використовуйте іконку праворуч від запису.
- Додаткові дії доступні у випадаючому меню Дій праворуч від кнопки редагування.',
  'LBL_HELP_RECORDS' => '{{module_name}} містить список контактів і контрагентів, яких Ви хочете включити в маркетингову кампанію або виключити з неї {{campaigns_singular_module}}. {{Plural_module_name}} можуть містити будь-яку кількість і будь-яку групу Цільових контактів, {{contacts_module}}, {{leads_module}}, користувачів, і {{accounts_module}}. Цільові контакти можуть бути згруповані в {{module_name}} згідно набору зумовлених критеріїв, таких як вік, географічне місце розташування або звички. {{Plural_module_name}} використовуються в масових e-mail кампаніях {{campaigns_module}}, які можуть бути налаштовані в {{campaigns_module}} модулі.',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Інтереси',
  'LBL_LIST_DESCRIPTION' => 'Опис',
  'LBL_LIST_END_DATE' => 'Дата завершення',
  'LBL_LIST_ENTRIES' => 'Кількість адрес',
  'LBL_LIST_FORM_TITLE' => 'Списки цільових аудиторій споживачів',
  'LBL_LIST_PROSPECTLIST_NAME' => 'Назва',
  'LBL_LIST_PROSPECT_LIST_NAME' => 'Список цільових аудиторій споживачів',
  'LBL_LIST_TYPE' => 'Тип',
  'LBL_LIST_TYPE_LIST_NAME' => 'Тип',
  'LBL_LIST_TYPE_NO' => 'Тип',
  'LBL_MARKETING_ID' => 'Кампанія (Id)',
  'LBL_MARKETING_MESSAGE' => 'Повідомлення E-пошта-розсилки',
  'LBL_MARKETING_NAME' => 'Назва кампанії',
  'LBL_MODIFIED' => 'Змінено',
  'LBL_MODIFIED_BY' => 'Змінено',
  'LBL_MODULE_ID' => 'Списки цільових аудиторій споживачів',
  'LBL_MODULE_NAME' => 'Списки цільових аудиторій споживачів',
  'LBL_MODULE_NAME_SINGULAR' => 'Список цільових аудиторій споживачів',
  'LBL_MODULE_TITLE' => 'Списки цільових аудиторій споживачів: Головна',
  'LBL_MORE_DETAIL' => 'Детальніше',
  'LBL_NAME' => 'Назва',
  'LBL_NEW_FORM_TITLE' => 'Новий список цільових аудиторій споживачів',
  'LBL_PROSPECTS_SUBPANEL_TITLE' => 'Цільові аудиторії споживачів',
  'LBL_PROSPECT_LISTS_SUBPANEL_TITLE' => 'Списки цільових аудиторій споживачів',
  'LBL_PROSPECT_LIST_NAME' => 'Список цільових аудиторій споживачів:',
  'LBL_SEARCH_FORM_TITLE' => 'Пошук списків цільових аудиторій споживачів',
  'LBL_TEAM' => 'Команда',
  'LBL_TYPE' => 'Тип',
  'LBL_USERS_SUBPANEL_TITLE' => 'Користувачі',
  'LNK_CAMPAIGN_LIST' => 'Маркетингові кампанії',
  'LNK_NEW_CAMPAIGN' => 'Створити маркетингову кампанію',
  'LNK_NEW_PROSPECT' => 'Створити цільову аудиторію споживачів',
  'LNK_NEW_PROSPECT_LIST' => 'Створити список цільових аудиторій споживачів',
  'LNK_PROSPECT_LIST' => 'Цільові аудиторії споживачів',
  'LNK_PROSPECT_LIST_LIST' => 'Переглянути списки цільових аудиторій споживачів',
);

