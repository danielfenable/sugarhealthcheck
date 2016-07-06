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
  'ERR_DELETE_RECORD' => 'Вы должны указать номер записи перед удалением продукта.',
  'LBL_ACCOUNT_ID' => 'Контрагент',
  'LBL_ACCOUNT_NAME' => 'Контрагент:',
  'LBL_ASSET_NUMBER' => 'Номер актива:',
  'LBL_ASSIGNED_TO_NAME' => 'Ответственный (-ая):',
  'LBL_ASSIGNED_USER_ID' => 'Ответственный (ID):',
  'LBL_ASSOCIATED_QUOTE' => 'Тема коммерческого предложения:',
  'LBL_BOOK_VALUE' => 'Балансовая стоимость:',
  'LBL_BOOK_VALUE_DATE' => 'Дата оценки балансовой стоимости:',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Балансовая стоимость (доллары США):',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => 'Предполагаемая сумма дохода по продукту',
  'LBL_CAMPAIGN_PRODUCT' => 'Продукт кампании',
  'LBL_CATEGORY' => 'Категория',
  'LBL_CATEGORY_NAME' => 'Категория:',
  'LBL_COMMIT_STAGE' => 'Стадия совершения продажи',
  'LBL_COMMIT_STAGE_FORECAST' => 'Прогноз',
  'LBL_CONTACT' => 'Контакт',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
  'LBL_CONTACT_ID' => 'Контакт',
  'LBL_CONTACT_NAME' => 'Контактное лицо:',
  'LBL_CONTRACTS' => 'Контракты',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Контракты',
  'LBL_CONVERT_TO_QUOTE_ERROR' => 'Ошибка:',
  'LBL_CONVERT_TO_QUOTE_ERROR_MESSAGE' => 'При конвертации продукта в коммерческое предложение возникла ошибка',
  'LBL_COST_PRICE' => 'Стоимость:',
  'LBL_COST_USDOLLAR' => 'Стоимость (в долларах США)',
  'LBL_CREATED_USER' => 'Создано пользователем',
  'LBL_CURRENCY' => 'Валюта:',
  'LBL_CURRENCY_ID' => 'ID валюты:',
  'LBL_CURRENCY_RATE' => 'Валютный курс',
  'LBL_CURRENCY_SYMBOL_NAME' => 'Символ валюты:',
  'LBL_DATE_CLOSED' => 'Ожидаемая дата закрытия',
  'LBL_DATE_CLOSED_TIMESTAMP' => 'Ожидаемая дата закрытия',
  'LBL_DATE_PURCHASED' => 'Приобретено:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Срок предоставления поддержки:',
  'LBL_DATE_SUPPORT_STARTS' => 'Начало предоставления поддержки:',
  'LBL_DEAL_TOT' => 'Скидка:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Продукты',
  'LBL_DESCRIPTION' => 'Описание:',
  'LBL_DISCOUNT_AMOUNT' => 'Объем скидки',
  'LBL_DISCOUNT_AS_PERCENT' => '% скидки',
  'LBL_DISCOUNT_PRICE' => 'Цена за единицу:',
  'LBL_DISCOUNT_PRICE_DATE' => 'Дата цены со скидкой:',
  'LBL_DISCOUNT_RATE' => 'Коэффициент скидки',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'Коэффициент скидки (в долларах США)',
  'LBL_DISCOUNT_TOTAL' => 'Скидка итого',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'Скидка (в долларах США)',
  'LBL_DISCOUNT_USDOLLAR' => 'Цена за единицу (в долларах США)',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документы',
  'LBL_EDITLAYOUT' => 'Правка расположения',
  'LBL_EXPERT_ID' => 'Эксперт по продукту',
  'LBL_EXPORT_CURRENCY_ID' => 'ID валюты',
  'LBL_EXT_PRICE' => 'Внешняя цена',
  'LBL_FORECAST' => 'Включить в прогноз',
  'LBL_HELP_CREATE' => '{{plural_module_name}} модуль содержит все проданные продукты или продукты, которые находятся в процессе продажи.

Чтобы создать {{module_name}}:
1. Укажите значения полей.
 - Поля с пометкой "Обязательно" должны быть заполнены перед сохранением.
 - Нажмите "Показать больше", чтобы отобразить дополнительные поля при необходимости.
2. Нажмите "Сохранить" для сохранения новой записи и возвращения на предыдущую страницу.
- Выберите "Сохранить и просмотреть", чтобы открыть новый {{module_name}} в режиме просмотра записи.
- Выберите "Сохранить и создать", чтобы сразу создать новый {{module_name}}.',
  'LBL_HELP_RECORD' => '{{plural_module_name}} модуль содержит все проданные продукты или продукты, которые находятся в процессе продажи.

- Чтобы редактировать поля данной записи, нажмите на самом поле или кликните на кнопку Редактировать.
- Чтобы просмотреть или изменить ссылки, ведущие к другим записям, на субпанеле переключите левую нижнюю панель на "Просмотр данных".
- Чтобы оставлять и просматривать пользовательские комментарии, а также изменять историю в рамках одной записи в {{activitystream_singular_module}}, переключите левую нижнюю панель на "Лента активностей".
- Чтобы подписаться или добавить в Избранное данную запись, используйте иконки справа от записи.
- Дополнительные действия доступны в выпадающем меню Действий справа от кнопки Редактировать.',
  'LBL_HELP_RECORDS' => '{{plural_module_name}} модуль содержит все проданные продукты или продукты, которые находятся в процессе продажи. Список продуктов, проданных вашей компанией, размещен в разделе Администрирования > Каталог Продуктов и администраторы имеют возможность добавлять новые продукты при необходимости. При создании {{plural_module_name}}, вы можете или выбрать продукты из каталога или создать новые продукты через {{plural_module_name}} модуль. Существуют разные способы создания {{plural_module_name}} в Sugar как и через {{plural_module_name}} модуль, {{quotes_module}} модуль, дублирование, импорт {{plural_module_name}}, и т.п. Как только {{module_name}} запись создана, вы можете просмотреть и редактировать информацию, относящуюся к {{module_name}} в {{plural_module_name}} режиме просмотра записи.',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Предварительные контакты',
  'LBL_LEAD_SOURCE' => 'Lead Source',
  'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
  'LBL_LIST_CONTACT_NAME' => 'Контактное лицо',
  'LBL_LIST_COST_PRICE' => 'Стоимость',
  'LBL_LIST_DATE_PURCHASED' => 'Приобретено',
  'LBL_LIST_DISCOUNT_PRICE' => 'Цена за единицу',
  'LBL_LIST_FORM_TITLE' => 'Список продуктов',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Код производителя',
  'LBL_LIST_LIST_PRICE' => 'Список',
  'LBL_LIST_MANUFACTURER' => 'Производитель',
  'LBL_LIST_NAME' => 'Продукт',
  'LBL_LIST_PRICE' => 'Цена по прайсу:',
  'LBL_LIST_QUANTITY' => 'Количество',
  'LBL_LIST_QUOTE_NAME' => 'Коммерческое предложение',
  'LBL_LIST_STATUS' => 'Статус',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Срок предоставления поддержки',
  'LBL_LIST_USDOLLAR' => 'Цена по прайсу (доллары США)',
  'LBL_MANUFACTURER' => 'Производитель:',
  'LBL_MANUFACTURERS' => 'Производители',
  'LBL_MANUFACTURER_NAME' => 'Название производителя:',
  'LBL_MEMBER_OF' => 'Состоит в:',
  'LBL_MFT_PART_NUM' => 'Код производителя:',
  'LBL_MODIFIED_USER' => 'Изменено пользователем',
  'LBL_MODULE_NAME' => 'Продукты',
  'LBL_MODULE_NAME_SINGULAR' => 'Продукт',
  'LBL_MODULE_TITLE' => 'Продукты: Главная',
  'LBL_NAME' => 'Название',
  'LBL_NEW_FORM_TITLE' => 'Новый продукт',
  'LBL_NEXT_STEP' => 'Следующий шаг:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Заметки',
  'LBL_OPPORTUNITY' => 'Сделка',
  'LBL_OPPORTUNITY_ID' => 'Сделка',
  'LBL_PIPELINE_TOTAL_IS' => 'Итог процесса продаж',
  'LBL_PRICING_FACTOR' => 'Ценообразующий фактор',
  'LBL_PRICING_FORMULA' => 'Ценовая формула:',
  'LBL_PROBABILITY' => 'Вероятность (%):',
  'LBL_PRODUCT' => 'Продукт',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Продукты',
  'LBL_PRODUCT_CATEGORIES' => 'Категории продуктов',
  'LBL_PRODUCT_TEMPLATE' => 'Каталог продуктов:',
  'LBL_PRODUCT_TEMPLATE_ID' => 'Шаблон продукта:',
  'LBL_PRODUCT_TYPES' => 'Виды продуктов',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекты',
  'LBL_QUANTITY' => 'Количество:',
  'LBL_QUOTE' => 'Коммерческое предложение',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Коммерческие предложения',
  'LBL_QUOTE_ID' => 'Коммерческое предложение:',
  'LBL_QUOTE_NAME' => 'Коммерческое предложение:',
  'LBL_RELATED_PRODUCTS' => 'Связанные продукты',
  'LBL_RELATED_PRODUCTS_TITLE' => 'Продукты',
  'LBL_REVENUELINEITEM' => 'Доход по продукту',
  'LBL_REVENUELINEITEMS' => 'Доход по продуктам',
  'LBL_REVENUELINEITEM_ID' => 'ID дохода по продукту:',
  'LBL_REVENUELINEITEM_NAME' => 'Наименование продукта:',
  'LBL_SALES_STAGE' => 'Стадия продажи',
  'LBL_SALES_STATUS' => 'Статус уровня дохода по продукту',
  'LBL_SEARCH_FORM_TITLE' => 'Найти продукт',
  'LBL_SELECT_DISCOUNT' => '% скидки',
  'LBL_SERIAL_NUMBER' => 'Серийный номер:',
  'LBL_STATUS' => 'Статус:',
  'LBL_SUBTOTAL' => 'Промежуточная сумма',
  'LBL_SUPPORT_CONTACT' => 'Сотрудник поддержки:',
  'LBL_SUPPORT_DESCRIPTION' => 'Описание предоставляемой поддержки:',
  'LBL_SUPPORT_NAME' => 'Компания, оказывающая поддержку:',
  'LBL_SUPPORT_TERM' => 'Срок предоставления поддержки:',
  'LBL_TAX_CLASS' => 'Облагается налогом:',
  'LBL_TYPE' => 'Тип:',
  'LBL_URL' => 'URL продукта:',
  'LBL_VENDOR_PART_NUM' => 'Код поставщика:',
  'LBL_WEBSITE' => 'Сайт',
  'LBL_WEIGHT' => 'Вес:',
  'LNK_IMPORT_PRODUCTS' => 'Импорт продуктов',
  'LNK_NEW_PRODUCT' => 'Новый продукт',
  'LNK_PRODUCT_LIST' => 'Каталог продуктов',
  'NTC_DELETE_CONFIRMATION' => 'Вы действительно хотите удалить эту запись?',
  'NTC_REMOVE_CONFIRMATION' => 'Вы действительно хотите удалить эту связь продукта?',
);

