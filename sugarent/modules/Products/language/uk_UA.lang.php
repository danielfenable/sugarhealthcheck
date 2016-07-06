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
  'ERR_DELETE_RECORD' => 'Ви повинні вказати номер запису перед видаленням продукту.',
  'LBL_ACCOUNT_ID' => 'Контрагент (ID)',
  'LBL_ACCOUNT_NAME' => 'Назва контрагента:',
  'LBL_ASSET_NUMBER' => 'Номер активу:',
  'LBL_ASSIGNED_TO_NAME' => 'Відповідальний (-а):',
  'LBL_ASSIGNED_USER_ID' => 'Відповідальний (-а) (ID)',
  'LBL_ASSOCIATED_QUOTE' => 'Тема комерційної пропозиції:',
  'LBL_BOOK_VALUE' => 'Балансова вартість:',
  'LBL_BOOK_VALUE_DATE' => 'Дата оцінки балансової вартості:',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Балансова вартість: (в доларах США)',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => 'Передбачувана сума доходу по продукту',
  'LBL_CAMPAIGN_PRODUCT' => 'Продукт маркетингової кампанії',
  'LBL_CATEGORY' => 'Категорія:',
  'LBL_CATEGORY_NAME' => 'Назва категорії:',
  'LBL_COMMIT_STAGE' => 'Підтвердити стадію',
  'LBL_COMMIT_STAGE_FORECAST' => 'Прогноз',
  'LBL_CONTACT' => 'Контакт',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
  'LBL_CONTACT_ID' => 'Контакт (ID)',
  'LBL_CONTACT_NAME' => 'Контактна особа:',
  'LBL_CONTRACTS' => 'Контракти',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Контракти',
  'LBL_CONVERT_TO_QUOTE_ERROR' => 'Помилка:',
  'LBL_CONVERT_TO_QUOTE_ERROR_MESSAGE' => 'При конвертації продукту в комерційну пропозицію виникла помилка',
  'LBL_COST_PRICE' => 'Вартість:',
  'LBL_COST_USDOLLAR' => 'Вартість (в доларах США):',
  'LBL_CREATED_USER' => 'Створенено користувачем',
  'LBL_CURRENCY' => 'Валюта:',
  'LBL_CURRENCY_ID' => 'Валюта (ID):',
  'LBL_CURRENCY_RATE' => 'Валютний курс',
  'LBL_CURRENCY_SYMBOL_NAME' => 'Символ валюти:',
  'LBL_DATE_CLOSED' => 'Очікувана дата закриття',
  'LBL_DATE_CLOSED_TIMESTAMP' => 'Очікувана дата закриття',
  'LBL_DATE_PURCHASED' => 'Придбано:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Термін надання підтримки:',
  'LBL_DATE_SUPPORT_STARTS' => 'Початок надання підтримки:',
  'LBL_DEAL_TOT' => 'Знижка:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Продукти комерційної пропозиції',
  'LBL_DESCRIPTION' => 'Опис:',
  'LBL_DISCOUNT_AMOUNT' => 'Обсяг знижки',
  'LBL_DISCOUNT_AS_PERCENT' => 'Знижка в %',
  'LBL_DISCOUNT_PRICE' => 'Ціна за одиницю:',
  'LBL_DISCOUNT_PRICE_DATE' => 'Дата ціни зі знижкою:',
  'LBL_DISCOUNT_RATE' => 'Коефіцієнт знижки',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'Коефіцієнт знижки (US долар)',
  'LBL_DISCOUNT_TOTAL' => 'Знижка разом',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'Знижка (US долар)',
  'LBL_DISCOUNT_USDOLLAR' => 'Ціна за одиницю (в доларах США)',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документи',
  'LBL_EDITLAYOUT' => 'Редагувати розташування',
  'LBL_EXPERT_ID' => 'Експерт по продукту',
  'LBL_EXPORT_CURRENCY_ID' => 'Валюта (ID)',
  'LBL_EXT_PRICE' => 'Зовнішня ціна',
  'LBL_FORECAST' => 'Включити в прогноз',
  'LBL_HELP_CREATE' => '{{Plural_module_name}} модуль містить всі продані продукти або продукти, які знаходяться в процесі продажу.

Щоб створити {{module_name}}:
1. Вкажіть значення полів.
 - Поля з позначкою "Обов&#39;язково" повинні бути заповнені перед збереженням.
 - Натисніть "Показати більше", щоб відобразити додаткові поля при необхідності.
2. Натисніть "Зберегти" для збереження нового запису та повернення на попередню сторінку.
- Виберіть "Зберегти і переглянути", щоб відкрити новий {{module_name}} в режимі перегляду запису.
- Виберіть "Зберегти і створити", щоб відразу створити новий {{module_name}}.',
  'LBL_HELP_RECORD' => '{{Plural_module_name}} модуль містить всі продані продукти або продукти, які знаходяться в процесі продажу.

- Щоб редагувати поля даного запису, натисніть на самому полі або клікніть на кнопку Редагувати.
- Щоб переглянути або змінити посилання, що ведуть до інших записів, на субпанелі перейдіть на ліву нижню панель на "Перегляд даних".
- Щоб залишати і переглядати користувальницькі коментарі, а також змінювати історію в рамках одного запису в {{activitystream_singular_module}}, переведіть ліву нижню панель на "Стрічка активності".
- Щоб підписатися або додати у Вибране даний запис, використовуйте іконки праворуч від запису.
- Додаткові дії доступні у випадаючому меню Дій праворуч від кнопки Редагувати.',
  'LBL_HELP_RECORDS' => '{{Plural_module_name}} модуль містить всі продані продукти або продукти, які знаходяться в процесі продажу. Список продуктів, проданих вашою компанією, розміщений у розділі Адміністрування> Каталог Продуктів і адміністратори мають можливість додавати нові продукти при необхідності. При створенні {{plural_module_name}}, ви можете або вибрати продукти з каталогу або створити нові продукти через {{plural_module_name}} модуль. Існують різні способи створення {{plural_module_name}} в Sugar як і через {{plural_module_name}} модуль, {{quotes_module}} модуль, дублювання, імпорт {{plural_module_name}}, і т.п. Як тільки {{module_name}} запис створено, ви можете переглянути та редагувати інформацію, що відноситься до {{module_name}} в {{plural_module_name}} режимі перегляду запису.',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Інтереси',
  'LBL_LEAD_SOURCE' => 'Джерело інтереса',
  'LBL_LIST_ACCOUNT_NAME' => 'Назва контрагента',
  'LBL_LIST_CONTACT_NAME' => 'Контактна особа',
  'LBL_LIST_COST_PRICE' => 'Вартість',
  'LBL_LIST_DATE_PURCHASED' => 'Придбано',
  'LBL_LIST_DISCOUNT_PRICE' => 'Ціна',
  'LBL_LIST_FORM_TITLE' => 'Список продуктів комерційної пропозиції',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Внутрішній код виробника',
  'LBL_LIST_LIST_PRICE' => 'Список',
  'LBL_LIST_MANUFACTURER' => 'Виробник',
  'LBL_LIST_NAME' => 'Продукт комерційної пропозиції',
  'LBL_LIST_PRICE' => 'Прайс-лист:',
  'LBL_LIST_QUANTITY' => 'Кількість',
  'LBL_LIST_QUOTE_NAME' => 'Назва комерційної пропозиції',
  'LBL_LIST_STATUS' => 'Статус:',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Термін дії:',
  'LBL_LIST_USDOLLAR' => 'Прайс-лист (в доларах US)',
  'LBL_MANUFACTURER' => 'Виробник:',
  'LBL_MANUFACTURERS' => 'Виробники',
  'LBL_MANUFACTURER_NAME' => 'Виробник:',
  'LBL_MEMBER_OF' => 'Учасник:',
  'LBL_MFT_PART_NUM' => 'Внутрішній код виробника:',
  'LBL_MODIFIED_USER' => 'Змінено користувачем',
  'LBL_MODULE_NAME' => 'Продукти комерційної пропозиції',
  'LBL_MODULE_NAME_SINGULAR' => 'Продукт комерційної пропозиції',
  'LBL_MODULE_TITLE' => 'Продукти комерційної пропозиції: Головна',
  'LBL_NAME' => 'Назва',
  'LBL_NEW_FORM_TITLE' => 'Створити продукт комерційної пропозиції',
  'LBL_NEXT_STEP' => 'Наступний крок:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Примітки',
  'LBL_OPPORTUNITY' => 'Угода',
  'LBL_OPPORTUNITY_ID' => 'Угода (ID):',
  'LBL_PIPELINE_TOTAL_IS' => 'Воронка всього',
  'LBL_PRICING_FACTOR' => 'Фактор ціноутворення',
  'LBL_PRICING_FORMULA' => 'Цінова формула:',
  'LBL_PROBABILITY' => 'Імовірність (%)',
  'LBL_PRODUCT' => 'Продукт комерційної пропозиції:',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Продукти комерційної пропозиції',
  'LBL_PRODUCT_CATEGORIES' => 'Категорії продуктів',
  'LBL_PRODUCT_TEMPLATE' => 'Шаблон продукту:',
  'LBL_PRODUCT_TEMPLATE_ID' => 'Шаблон продукту (ID):',
  'LBL_PRODUCT_TYPES' => 'Типи продуктів',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекти',
  'LBL_QUANTITY' => 'Кількість:',
  'LBL_QUOTE' => 'Комерційна пропозиція',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Комерційні пропозиції',
  'LBL_QUOTE_ID' => 'Комерційна пропозиція (ID):',
  'LBL_QUOTE_NAME' => 'Назва комерційної пропозиції:',
  'LBL_RELATED_PRODUCTS' => 'Пов&#39;язані продукти',
  'LBL_RELATED_PRODUCTS_TITLE' => 'Продукти комерційної пропозиції',
  'LBL_REVENUELINEITEM' => 'Дохід за продукт',
  'LBL_REVENUELINEITEMS' => 'Дохід за продукти',
  'LBL_REVENUELINEITEM_ID' => 'ID дохода по продукту:',
  'LBL_REVENUELINEITEM_NAME' => 'Дохід по продукту',
  'LBL_SALES_STAGE' => 'Стадія продажу',
  'LBL_SALES_STATUS' => 'Статус рівня доходу по продукту',
  'LBL_SEARCH_FORM_TITLE' => 'Пошук продуктів комерційної пропозиції',
  'LBL_SELECT_DISCOUNT' => 'Обрати знижку',
  'LBL_SERIAL_NUMBER' => 'Серійний номер:',
  'LBL_STATUS' => 'Статус:',
  'LBL_SUBTOTAL' => 'Підсумок:',
  'LBL_SUPPORT_CONTACT' => 'Співробітник підтримки:',
  'LBL_SUPPORT_DESCRIPTION' => 'Опис підтримки:',
  'LBL_SUPPORT_NAME' => 'Підтримка:',
  'LBL_SUPPORT_TERM' => 'Термін надання підтримки:',
  'LBL_TAX_CLASS' => 'Розряд оподаткування:',
  'LBL_TYPE' => 'Тип:',
  'LBL_URL' => 'URL продукта:',
  'LBL_VENDOR_PART_NUM' => 'Внутрішній код постачальника:',
  'LBL_WEBSITE' => 'Веб-сторінка',
  'LBL_WEIGHT' => 'Вага:',
  'LNK_IMPORT_PRODUCTS' => 'Імпорт комерційної пропозиції',
  'LNK_NEW_PRODUCT' => 'Створити продукт комерційної пропозиції',
  'LNK_PRODUCT_LIST' => 'Переглянути каталог продуктів',
  'NTC_DELETE_CONFIRMATION' => 'Ви дійсно бажаєте видалити цей запис?',
  'NTC_REMOVE_CONFIRMATION' => 'Ви дійсно хочете видалити цей зв&#39;язок продукту?',
);

