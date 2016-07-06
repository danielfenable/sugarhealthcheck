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
  'ERR_DELETE_RECORD' => 'Укажите номер записи для удаления ошибки.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Клиенты',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Действия',
  'LBL_ASSIGNED_TO_NAME' => 'Ответственный (-ая)',
  'LBL_BUG' => 'Ошибка:',
  'LBL_BUG_INFORMATION' => 'Описание ошибки',
  'LBL_BUG_NUMBER' => 'Номер ошибки:',
  'LBL_BUG_SUBJECT' => 'Тема ошибки:',
  'LBL_CASES_SUBPANEL_TITLE' => 'Обращения',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
  'LBL_CONTACT_BUG_TITLE' => 'Контакт - ошибка:',
  'LBL_CONTACT_NAME' => 'Контактное лицо:',
  'LBL_CONTACT_ROLE' => 'Роль:',
  'LBL_CREATED_BY' => 'Кем создано:',
  'LBL_DATE_CREATED' => 'Дата создания:',
  'LBL_DATE_LAST_MODIFIED' => 'Дата изменения:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Поиск ошибок',
  'LBL_DESCRIPTION' => 'Описание:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документы',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Ответственный (ID)',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Ответственный пользователь',
  'LBL_EXPORT_CREATED_BY' => 'Создано (ID)',
  'LBL_EXPORT_FIXED_IN_RELEASE_NAMR' => 'Исправлено в версии',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Изменено (ID)',
  'LBL_FIXED_IN_RELEASE' => 'Исправлено в версии:',
  'LBL_FOUND_IN_RELEASE' => 'Обнаружено в версии:',
  'LBL_FOUND_IN_RELEASE_NAME' => 'Найдено в версии',
  'LBL_HELP_CREATE' => '{{plural_module_name}} модуль используется, чтобы отслеживать и управлять ошибками, связанными с продуктом, которые обычно называют {{plural_module_name}}, или дефектами, обнаруженные внутри системы или обнаруженные клиентами.

Чтобы создать {{module_name}}:
1. Укажите значения полей.
- Поля с пометкой "Обязательно" должны быть заполнены перед сохранением.
- Нажмите "Показать больше", чтобы отобразить дополнительные поля при необходимости.
2. Нажмите "Сохранить" для сохранения новой записи и возвращения на предыдущую страницу.
- Выберите "Сохранить и просмотреть", чтобы открыть новый {{module_name}} в режиме просмотра записи.
- Выберите "Сохранить и создать", чтобы сразу создать новый {{module_name}}.',
  'LBL_HELP_RECORD' => '{{plural_module_name}} модуль используется, чтобы отслеживать и управлять ошибками, связанными с продуктом, которые обычно называют {{plural_module_name}}, или дефектами, обнаруженные внутри системы или обнаруженные клиентами.

- Чтобы редактировать поля данной записи, нажмите на самом поле или кликните на кнопку Редактировать.
- Чтобы просмотреть или изменить ссылки, ведущие к другим записям, на субпанеле переключите левую нижнюю панель на "Просмотр данных".
- Чтобы оставлять и просматривать пользовательские комментарии, а также изменять историю в рамках одной записи в {{activitystream_singular_module}}, переключите левую нижнюю панель на "Лента активностей".
- Чтобы подписаться или добавить в Избранное данную запись, используйте иконки справа от записи.
- Дополнительные действия доступны в выпадающем меню Действий справа от кнопки Редактировать.',
  'LBL_HELP_RECORDS' => '{{plural_module_name}} модуль используется, чтобы отслеживать и управлять ошибками, связанными с продуктом, которые обычно называют {{plural_module_name}} или дефектами, обнаруженные внутри системы или обнаруженные клиентами. {{plural_module_name}} может быть в дальнейшем сортирован путем отслеживания обнаруженных и устраненных ошибок в новом релизе. {{plural_module_name}} модуль предоставляет пользователям способ быстро просматривать все детали {{module_name}} и процесс для их исправления. Как только {{module_name}} создан или утвержден, вы можете просмотреть и редактировать информацию, относящуюся к {{module_name}} в {{module_name}} режиме просмотра записи. Каждая {{module_name}} запись может быть затем связана с другими записями Sugar, такими как {{calls_module}}, {{contacts_module}}, {{cases_module}}, и многими другими.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
  'LBL_INVITEE' => 'Контакты',
  'LBL_LIST_ACCOUNT_NAME' => 'Имя Клиента',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Ответственный (-ая)',
  'LBL_LIST_CONTACT_NAME' => 'Имя контакта',
  'LBL_LIST_EMAIL_ADDRESS' => 'E-mail-адрес',
  'LBL_LIST_FIXED_IN_RELEASE' => 'Исправлено в версии',
  'LBL_LIST_FORM_TITLE' => 'Список ошибок',
  'LBL_LIST_LAST_MODIFIED' => 'Последнее изменение',
  'LBL_LIST_MY_BUGS' => 'Ошибки, назначенные мне',
  'LBL_LIST_NUMBER' => 'Ном.',
  'LBL_LIST_PHONE' => 'Телефон',
  'LBL_LIST_PRIORITY' => 'Приоритет',
  'LBL_LIST_RELEASE' => 'Версия',
  'LBL_LIST_RESOLUTION' => 'Решение',
  'LBL_LIST_STATUS' => 'Статус',
  'LBL_LIST_SUBJECT' => 'Тема',
  'LBL_LIST_TYPE' => 'Тип',
  'LBL_MODIFIED_BY' => 'Последнее изменение:',
  'LBL_MODULE_ID' => 'Ошибки',
  'LBL_MODULE_NAME' => 'Ошибки',
  'LBL_MODULE_NAME_SINGULAR' => 'Ошибка',
  'LBL_MODULE_TITLE' => 'Поиск ошибок: Главная',
  'LBL_NEW_FORM_TITLE' => 'Новая ошибка',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Заметки',
  'LBL_NUMBER' => 'Номер:',
  'LBL_PORTAL_TOUR_RECORDS_CREATE' => 'Если вы обнаружили новый "баг", нажмите здесь, чтобы создать описание нового "бага".',
  'LBL_PORTAL_TOUR_RECORDS_FILTER' => 'Вы можете отфильтровать список "багов" по поисковому запросу.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER_EXAMPLE' => 'К примеру, вы можете воспользоваться этим для поиска "бага", который был уже описан.',
  'LBL_PORTAL_TOUR_RECORDS_INTRO' => 'Модуль ошибок для просмотра и описания ошибок. Используйте стрелки внизу для быстрого ознакомления с модулем.',
  'LBL_PORTAL_TOUR_RECORDS_PAGE' => 'Эта страница выводит список существующих опубликованных "багов".',
  'LBL_PORTAL_TOUR_RECORDS_RETURN' => 'Для возврата в предыдущее окно в любое время нажмите здесь.',
  'LBL_PORTAL_VIEWABLE' => 'Отобразить в портале',
  'LBL_PRIORITY' => 'Приоритет:',
  'LBL_PRODUCT_CATEGORY' => 'Категория:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекты',
  'LBL_RELEASE' => 'Версия:',
  'LBL_RESOLUTION' => 'Решение:',
  'LBL_SEARCH_FORM_TITLE' => 'Поиск ошибок',
  'LBL_SHOW_IN_PORTAL' => 'Обзор в портале',
  'LBL_SHOW_MORE' => 'Показать больше ошибок',
  'LBL_SOURCE' => 'Источник:',
  'LBL_STATUS' => 'Статус:',
  'LBL_SUBJECT' => 'Тема:',
  'LBL_SYSTEM_ID' => 'Системный ID',
  'LBL_TYPE' => 'Тип:',
  'LBL_WORK_LOG' => 'Рабочий лог:',
  'LNK_BUG_LIST' => 'Обзор ошибок',
  'LNK_BUG_REPORTS' => 'Просмотр отчетов по ошибке',
  'LNK_CREATE' => 'Новая ошибка',
  'LNK_CREATE_WHEN_EMPTY' => 'Создать ошибку сейчас.',
  'LNK_IMPORT_BUGS' => 'Импорт ошибок',
  'LNK_NEW_BUG' => 'Новая ошибка',
  'NTC_DELETE_CONFIRMATION' => 'Вы действительно хотите удалить этот контакт из данной ошибки?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Вы действительно хотите удалить эту ошибку из данного контрагента?',
  'NTC_REMOVE_INVITEE' => 'Вы действительно хотите удалить этот контакт из данной ошибки?',
);

