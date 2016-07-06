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


$app_list_strings = array (
  'Elastic_boost_options' => 
  array (
    0 => 'Отключен',
    1 => 'Низкое значение',
    2 => 'Среднее значение',
    3 => 'Высокое значение',
  ),
  'account_type_dom' => 
  array (
    '' => '',
    'Analyst' => 'Аналитик',
    'Competitor' => 'Конкурент',
    'Customer' => 'Клиент',
    'Integrator' => 'Системный интегратор',
    'Investor' => 'Инвестор',
    'Other' => 'Другой',
    'Partner' => 'Партнер',
    'Press' => 'Пресса',
    'Prospect' => 'Потенциальный клиент',
    'Reseller' => 'Посредник',
  ),
  'activity_dom' => 
  array (
    'Call' => 'Звонок',
    'Email' => 'E-mail',
    'Meeting' => 'Встреча',
    'Note' => 'Заметка',
    'Task' => 'Задача',
  ),
  'activity_user_options' => 
  array (
    7 => 'Последние 7 дней',
    30 => 'Последние 30 дней',
    90 => 'Прошлый квартал',
  ),
  'bopselect_type_dom' => 
  array (
    'Equals' => 'Равно',
  ),
  'bselect_type_dom' => 
  array (
    'bool_false' => 'Нет',
    'bool_true' => 'Да',
  ),
  'bug_priority_dom' => 
  array (
    'High' => 'Высокий',
    'Low' => 'Низкий',
    'Medium' => 'Средний',
    'Urgent' => 'Срочный',
  ),
  'bug_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Принята',
    'Duplicate' => 'Повторно открыта',
    'Fixed' => 'Исправлена',
    'Invalid' => 'Не подтверждена',
    'Later' => 'Отложена',
    'Out of Date' => 'Устарела',
  ),
  'bug_status_dom' => 
  array (
    'Assigned' => 'Поручена',
    'Closed' => 'Закрыта',
    'New' => 'Новая',
    'Pending' => 'Рассматривается',
    'Rejected' => 'Отклонена',
  ),
  'bug_type_dom' => 
  array (
    'Defect' => 'Ошибка',
    'Feature' => 'Особенность',
  ),
  'business_rule_type_list' => 
  array (
    'single' => 'Одиночная обработка',
  ),
  'call_direction_dom' => 
  array (
    'Inbound' => 'Входящий',
    'Outbound' => 'Исходящий',
  ),
  'call_status_dom' => 
  array (
    'Held' => 'Состоялся',
    'Not Held' => 'Отменен',
    'Planned' => 'Запланирован',
  ),
  'campaign_status_dom' => 
  array (
    '' => '',
    'Active' => 'Активна',
    'Complete' => 'Завершена',
    'In Queue' => 'В очереди',
    'Inactive' => 'Неактивна',
    'Planning' => 'Планируется',
    'Sending' => 'Отправка',
  ),
  'campaign_type_dom' => 
  array (
    '' => '',
    'Email' => 'E-mail',
    'Mail' => 'Почтовая рассылка',
    'NewsLetter' => 'Рекламный проспект',
    'Print' => 'Печать',
    'Radio' => 'Радио',
    'Telesales' => 'Продажи по телефону',
    'Television' => 'Телевидение',
    'Web' => 'Веб-реклама',
  ),
  'campainglog_activity_type_dom' => 
  array (
    '' => '',
    'blocked' => 'Заблокированы',
    'contact' => 'Созданные контакты',
    'invalid email' => 'Не доставлены (неверн. адр.)',
    'lead' => 'Созданные предв. конт.',
    'link' => 'Переходы по ссылкам',
    'removed' => 'Отписавшиеся',
    'send error' => 'Не доставлены (др.)',
    'targeted' => 'Отправленные',
    'viewed' => 'Просмотренные',
  ),
  'campainglog_target_type_dom' => 
  array (
    'Accounts' => 'Контрагенты',
    'Contacts' => 'Контакты',
    'Leads' => 'Предварительные контакты',
    'Prospects' => 'Адресаты',
    'Users' => 'Пользователи',
  ),
  'case_priority_dom' => 
  array (
    'P1' => 'Высокий',
    'P2' => 'Средний',
    'P3' => 'Низкий',
  ),
  'case_relationship_type_dom' => 
  array (
    '' => '',
    'Alternate Contact' => 'Альтернативный контакт',
    'Primary Contact' => 'Основное контактное лицо',
  ),
  'case_status_dom' => 
  array (
    'Assigned' => 'Назначено',
    'Closed' => 'Закрыто',
    'Duplicate' => 'Дублировать',
    'New' => 'Новое',
    'Pending Input' => 'Ожидание решения',
    'Rejected' => 'Отклонена',
  ),
  'case_type_dom' => 
  array (
    'Administration' => 'Администрирование',
    'Product' => 'Продукт',
    'User' => 'Пользователь',
  ),
  'charset_dom' => 
  array (
    'BIG-5' => 'BIG-5 (Тайвань и Гонконг)',
    'CP1251' => 'CP1251 (MS кириллица)',
    'CP1252' => 'CP1252 (MS Западная Европа и США)',
    'EUC-CN' => 'EUC-CN (Упрощенный китайский GB2312)',
    'EUC-JP' => 'EUC-JP (Unix японский)',
    'EUC-KR' => 'EUC-KR (Корейский)',
    'EUC-TW' => 'EUC-TW (Тайваньский)',
    'ISO-2022-JP' => 'ISO-2022-JP (Японский)',
    'ISO-2022-KR' => 'ISO-2022-KR (Корейский)',
    'ISO-8859-1' => 'ISO-8859-1 (Западная Европа и США)',
    'ISO-8859-10' => 'ISO-8859-10 (Латиница 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Латиница 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Латиница 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Латиница 9)',
    'ISO-8859-2' => 'ISO-8859-2 (Центральная и Восточная Европа)',
    'ISO-8859-3' => 'ISO-8859-3 (Латиница 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Латиница 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Кириллица)',
    'ISO-8859-6' => 'ISO-8859-6 (Арабский)',
    'ISO-8859-7' => 'ISO-8859-7 (Греческий)',
    'ISO-8859-8' => 'ISO-8859-8 (Иврит)',
    'ISO-8859-9' => 'ISO-8859-9 (Латиница 5)',
    'KOI8-R' => 'KOI8-R (Русская кириллица)',
    'KOI8-U' => 'KOI8-U (Украинская кириллица)',
    'SJIS' => 'SJIS (MS японский)',
    'UTF-8' => 'UTF-8',
  ),
  'chart_strings' => 
  array (
    'barchart' => 'Гистограмма',
    'clickfordrilldown' => 'Нажмите для просмотра деталей',
    'collapselegend' => 'Свернуть легенду',
    'detailview' => 'Подробно...',
    'drilldownoptions' => 'Опции просмотра деталей',
    'expandlegend' => 'Развернуть легенду',
    'groupchart' => 'Group Chart',
    'horizontalbarchart' => 'Горизонтальная гистограмма',
    'linechart' => 'Линейная диаграмма',
    'noData' => 'Нет данных',
    'pieWedgeName' => 'секции',
    'piechart' => 'Круговая диаграмма',
    'print' => 'Печать',
    'stackedchart' => 'Stacked Chart',
  ),
  'checkbox_dom' => 
  array (
    '' => '',
    1 => 'Да',
    2 => 'Нет',
  ),
  'checkbox_massupdate_dom' => 
  array (
    0 => 'Нет',
    1 => 'Да',
  ),
  'commit_stage_binary_dom' => 
  array (
    'exclude' => 'Исключить',
    'include' => 'Включить',
  ),
  'commit_stage_custom_dom' => 
  array (
    'exclude' => 'Исключить',
    'include' => 'Включить',
    'upside' => 'Upside',
  ),
  'commit_stage_dom' => 
  array (
    'exclude' => 'Исключить',
    'include' => 'Включить',
    'upside' => 'Upside',
  ),
  'contract_expiration_notice_dom' => 
  array (
    1 => '1 день',
    3 => '3 дня',
    5 => '5 дней',
    7 => '1 неделя',
    14 => '2 неделя',
    21 => '3 недели',
    31 => '1 месяц',
  ),
  'contract_payment_frequency_dom' => 
  array (
    'halfyearly' => 'Раз в полгода',
    'monthly' => 'Ежемесячно',
    'quarterly' => 'Ежеквартально',
    'yearly' => 'Раз в год',
  ),
  'contract_status_dom' => 
  array (
    'inprogress' => 'Готовится к подписанию',
    'notstarted' => 'Проект',
    'signed' => 'Подписан',
  ),
  'countries_dom' => 
  array (
    '' => '',
    'ABU DHABI' => 'АБУ-ДАБИ',
    'ADEN' => 'АДЕН',
    'AFGHANISTAN' => 'АФГАНИСТАН',
    'ALBANIA' => 'АЛБАНИЯ',
    'ALGERIA' => 'АЛЖИР',
    'AMERICAN SAMOA' => 'ВОСТОЧНОЕ САМОА',
    'ANDORRA' => 'АНДОРРА',
    'ANGOLA' => 'АНГОЛА',
    'ANTARCTICA' => 'АНТАРКТИДА',
    'ANTIGUA' => 'АНТИГУА',
    'ARGENTINA' => 'АРГЕНТИНА',
    'ARMENIA' => 'АРМЕНИЯ',
    'ARUBA' => 'АРУБА',
    'AUSTRALIA' => 'АВСТРАЛИЯ',
    'AUSTRIA' => 'АВСТРИЯ',
    'AZERBAIJAN' => 'АЗЕРБАЙДЖАН',
    'BAHAMAS' => 'БАГАМСКИЕ ОСТРОВА',
    'BAHRAIN' => 'БАХРЕЙН',
    'BANGLADESH' => 'БАНГЛАДЕШ',
    'BARBADOS' => 'БАРБАДОС',
    'BELARUS' => 'БЕЛАРУСЬ',
    'BELGIUM' => 'БЕЛЬГИЯ',
    'BELIZE' => 'БЕЛИЗ',
    'BENIN' => 'БЕНИН',
    'BERMUDA' => 'БЕРМУДСКИЕ ОСТРОВА',
    'BHUTAN' => 'БУТАН',
    'BOLIVIA' => 'БОЛИВИЯ',
    'BOSNIA' => 'БОСНИЯ',
    'BOTSWANA' => 'БОТСВАНА',
    'BOUVET ISLAND' => 'ОСТРОВ БУВе́',
    'BRAZIL' => 'БРАЗИЛИЯ',
    'BRITISH ANTARCTICA TERRITORY' => 'БРИТАНСКАЯ АНТАРКТИЧЕСКАЯ ТЕРРИТОРИЯ',
    'BRITISH INDIAN OCEAN TERRITORY' => 'БРИТАНСКАЯ ТЕРРИТОРИЯ В ИНДИЙСКОМ ОКЕАНЕ',
    'BRITISH VIRGIN ISLANDS' => 'ВИРГИНСКИЕ ОСТРОВА - ВЕЛИКОБРИТАНИЯ',
    'BRITISH WEST INDIES' => 'БРИТАНСКАЯ ВЕСТ-ИНДИЯ',
    'BRUNEI' => 'БРУНЕЙ',
    'BULGARIA' => 'БОЛГАРИЯ',
    'BURKINA FASO' => 'БУРКИНА-ФАСО',
    'BURUNDI' => 'БУРУНДИ',
    'CAMBODIA' => 'КАМБОДЖА',
    'CAMEROON' => 'КАМЕРУН',
    'CANADA' => 'КАНАДА',
    'CANAL ZONE' => 'ЗОНА ПАНАМСКОГО КАНАЛА',
    'CANARY ISLAND' => 'КАНАРСКИЕ ОСТРОВА',
    'CAPE VERDI ISLANDS' => 'РЕСПУБЛИКА КАБО-ВЕРДЕ',
    'CAYMAN ISLANDS' => 'КАЙМАНОВЫ ОСТРОВА',
    'CEVLON' => 'ЦЕЙЛОН',
    'CHAD' => 'ЧАД',
    'CHANNEL ISLAND UK' => 'НОРМАНДСКИЕ ОСТРОВА',
    'CHILE' => 'ЧИЛИ',
    'CHINA' => 'КИТАЙ',
    'CHRISTMAS ISLAND' => 'ОСТРОВ РОЖДЕСТВА',
    'COCOS (KEELING) ISLAND' => 'КОКОСОВЫЕ ОСТРОВА',
    'COLOMBIA' => 'КОЛУМБИЯ',
    'COMORO ISLANDS' => 'КОМОРСКИЕ ОСТРОВА',
    'CONGO' => 'КОНГО',
    'CONGO KINSHASA' => 'КОНГО КИНШАСА',
    'COOK ISLANDS' => 'ОСТРОВА КУКА',
    'COSTA RICA' => 'КОСТА-РИКА',
    'CROATIA' => 'ХОРВАТИЯ',
    'CUBA' => 'КУБА',
    'CURACAO' => 'КЮРАСАО',
    'CYPRUS' => 'КИПР',
    'CZECH REPUBLIC' => 'ЧЕХИЯ',
    'DAHOMEY' => 'ДАГОМЕЯ',
    'DENMARK' => 'ДАНИЯ',
    'DJIBOUTI' => 'ДЖИБУТИ',
    'DOMINICA' => 'ДОМИНИКА',
    'DOMINICAN REPUBLIC' => 'ДОМИНИКАНСКАЯ РЕСПУБЛИКА',
    'DUBAI' => 'ДУБАЙ',
    'ECUADOR' => 'ЭКВАДОР',
    'EGYPT' => 'ЕГИПЕТ',
    'EL SALVADOR' => 'САЛЬВАДОР',
    'EQUATORIAL GUINEA' => 'ЭКВАТОРИАЛЬНАЯ ГВИНЕЯ',
    'ESTONIA' => 'ЭСТОНИЯ',
    'ETHIOPIA' => 'ЭФИОПИЯ',
    'FAEROE ISLANDS' => 'ФАРЕРСКИЕ ОСТРОВА',
    'FALKLAND ISLANDS' => 'ФОЛКЛЕНДСКИЕ ОСТРОВА',
    'FIJI' => 'ФИДЖИ',
    'FINLAND' => 'ФИНЛЯНДИЯ',
    'FRANCE' => 'ФРАНЦИЯ',
    'FRENCH GUIANA' => 'ФРАНЦУЗСКАЯ ГВИАНА',
    'FRENCH POLYNESIA' => 'ФРАНЦУЗСКАЯ ПОЛИНЕЗИЯ',
    'GABON' => 'ГАБОН',
    'GAMBIA' => 'ГАМБИЯ',
    'GEORGIA' => 'ГРУЗИЯ',
    'GERMANY' => 'ГЕРМАНИЯ',
    'GHANA' => 'ГАНА',
    'GIBRALTAR' => 'ГИБРАЛТАР',
    'GREECE' => 'ГРЕЦИЯ',
    'GREENLAND' => 'ГРЕНЛАНДИЯ',
    'GUADELOUPE' => 'ГВАДЕЛУПА',
    'GUAM' => 'ГУАМ',
    'GUATEMALA' => 'ГВАТЕМАЛА',
    'GUINEA' => 'ГВИНЕЯ',
    'GUYANA' => 'ГАЙАНА',
    'HAITI' => 'ГАИТИ',
    'HONDURAS' => 'ГОНДУРАС',
    'HONG KONG' => 'ГОНКОНГ',
    'HUNGARY' => 'ВЕНГРИЯ',
    'ICELAND' => 'ИСЛАНДИЯ',
    'IFNI' => 'ИФНИ',
    'INDIA' => 'ИНДИЯ',
    'INDONESIA' => 'ИНДОНЕЗИЯ',
    'IRAN' => 'ИРАН',
    'IRAQ' => 'ИРАК',
    'IRELAND' => 'ИРЛАНДИЯ',
    'ISRAEL' => 'ИЗРАИЛЬ',
    'ITALY' => 'ИТАЛИЯ',
    'IVORY COAST' => 'БЕРЕГ СЛОНОВОЙ КОСТИ',
    'JAMAICA' => 'ЯМАЙКА',
    'JAPAN' => 'ЯПОНИЯ',
    'JORDAN' => 'ИОРДАНИЯ',
    'KAZAKHSTAN' => 'КАЗАХСТАН',
    'KENYA' => 'КЕНИЯ',
    'KOREA' => 'КНДР',
    'KOREA, SOUTH' => 'ЮЖНАЯ КОРЕЯ',
    'KUWAIT' => 'КУВЕЙТ',
    'KYRGYZSTAN' => 'КИРГИЗИЯ',
    'LAOS' => 'ЛАОС',
    'LATVIA' => 'ЛАТВИЯ',
    'LEBANON' => 'ЛИВАН',
    'LEEWARD ISLANDS' => 'ПОДВЕТРЕННЫЕ ОСТРОВА',
    'LESOTHO' => 'ЛЕСОТО',
    'LIBYA' => 'ЛИВИЯ',
    'LIECHTENSTEIN' => 'ЛИХТЕНШТЕЙН',
    'LITHUANIA' => 'ЛИТВА',
    'LUXEMBOURG' => 'ЛЮКСЕМБУРГ',
    'MACAO' => 'МАКАО',
    'MACEDONIA' => 'МАКЕДОНИЯ',
    'MADAGASCAR' => 'МАДАГАСКАР',
    'MALAWI' => 'МАЛАВИ',
    'MALAYSIA' => 'МАЛАЙЗИЯ',
    'MALDIVES' => 'МАЛЬДИВСКИЕ ОСТРОВА',
    'MALI' => 'МАЛИ',
    'MALTA' => 'МАЛЬТА',
    'MARTINIQUE' => 'МАРТИНИКА',
    'MAURITANIA' => 'МАВРИТАНИЯ',
    'MAURITIUS' => 'МАВРИКИЙ',
    'MELANESIA' => 'МЕЛАНЕЗИЯ',
    'MEXICO' => 'МЕКСИКА',
    'MOLDOVIA' => 'МОЛДАВИЯ',
    'MONACO' => 'МОНАКО',
    'MONGOLIA' => 'МОНГОЛИЯ',
    'MOROCCO' => 'МАРОККО',
    'MOZAMBIQUE' => 'МОЗАМБИК',
    'MYANAMAR' => 'МЬЯНМА',
    'NAMIBIA' => 'НАМИБИЯ',
    'NEPAL' => 'НЕПАЛ',
    'NETHERLANDS' => 'НИДЕРЛАНДЫ',
    'NETHERLANDS ANTILLES' => 'НИДЕРЛАНДСКИЕ АНТИЛЬСКИЕ ОСТРОВА',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'НИДЕРЛАНДСКИЕ АНТИЛЬСКИЕ ОСТРОВА- НЕЙТРАЛЬНАЯ ЗОНА',
    'NEW CALADONIA' => 'НОВАЯ КАЛЕДОНИЯ',
    'NEW HEBRIDES' => 'НОВЫЕ ГЕБРИДЫ',
    'NEW ZEALAND' => 'НОВАЯ ЗЕЛАНДИЯ',
    'NICARAGUA' => 'НИКАРАГУА',
    'NIGER' => 'НИГЕР',
    'NIGERIA' => 'НИГЕРИЯ',
    'NORFOLK ISLAND' => 'НОРМАНДСКИЕ ОСТРОВА',
    'NORWAY' => 'НОРВЕГИЯ',
    'OMAN' => 'ОМАН',
    'OTHER' => 'Другое',
    'PACIFIC ISLAND' => 'МАРИАНСКИЕ ОСТРОВА',
    'PAKISTAN' => 'ПАКИСТАН',
    'PANAMA' => 'ПАНАМА',
    'PAPUA NEW GUINEA' => 'ПАПУА-НОВАЯ ГВИНЕЯ',
    'PARAGUAY' => 'ПАРАГВАЙ',
    'PERU' => 'ПЕРУ',
    'PHILIPPINES' => 'ФИЛИППИНЫ',
    'POLAND' => 'ПОЛЬША',
    'PORTUGAL' => 'ПОРТУГАЛИЯ',
    'PORTUGUESE TIMOR' => 'ТИМОР',
    'PUERTO RICO' => 'ПУЭРТО-РИКО',
    'QATAR' => 'КАТАР',
    'REPUBLIC OF BELARUS' => 'БЕЛАРУСЬ',
    'REPUBLIC OF SOUTH AFRICA' => 'ЮАР',
    'REUNION' => 'РЕЮНЬОН',
    'ROMANIA' => 'РУМЫНИЯ',
    'RUSSIA' => 'РОССИЯ',
    'RWANDA' => 'РУАНДА',
    'RYUKYU ISLANDS' => 'ОСТРОВА РЮКЮ (НАНСЕЙ)',
    'SABAH' => 'САБАХ (МАЛАЙЗИЯ)',
    'SAN MARINO' => 'САН-МАРИНО',
    'SAUDI ARABIA' => 'САУДОВСКАЯ АРАВИЯ',
    'SENEGAL' => 'СЕНЕГАЛ',
    'SERBIA' => 'СЕРБИЯ',
    'SEYCHELLES' => 'СЕЙШЕЛЬСКИЕ ОСТРОВА',
    'SIERRA LEONE' => 'СЬЕРРА-ЛЕОНЕ',
    'SINGAPORE' => 'СИНГАПУР',
    'SLOVAKIA' => 'СЛОВАКИЯ',
    'SLOVENIA' => 'СЛОВЕНИЯ',
    'SOMALILIAND' => 'СОМАЛИ',
    'SOUTH AFRICA' => 'ЮЖНАЯ АФРИКА',
    'SOUTH YEMEN' => 'ЮЖНЫЙ ЙЕМЕН',
    'SPAIN' => 'ИСПАНИЯ',
    'SPANISH SAHARA' => 'ЗАПАДНАЯ САХАРА',
    'SRI LANKA' => 'ШРИ-ЛАНКА',
    'ST. KITTS AND NEVIS' => 'СЕНТ-КИТС И НЕВИС',
    'ST. LUCIA' => 'СЕНТ-ЛЮСИЯ',
    'SUDAN' => 'СУДАН',
    'SURINAM' => 'СУРИНАМ',
    'SW AFRICA' => 'НАМИБИЯ',
    'SWAZILAND' => 'СВАЗИЛЕНД',
    'SWEDEN' => 'ШВЕЦИЯ',
    'SWITZERLAND' => 'ШВЕЙЦАРИЯ',
    'SYRIA' => 'СИРИЯ',
    'TAIWAN' => 'ТАЙВАНЬ',
    'TAJIKISTAN' => 'ТАДЖИКИСТАН',
    'TANZANIA' => 'ТАНЗАНИЯ',
    'THAILAND' => 'ТАИЛАНД',
    'TONGA' => 'ТОНГА',
    'TRINIDAD' => 'ТРИНИДАД',
    'TUNISIA' => 'ТУНИС',
    'TURKEY' => 'ТУРЦИЯ',
    'UGANDA' => 'УГАНДА',
    'UKRAINE' => 'УКРАИНА',
    'UNITED ARAB EMIRATES' => 'ОАЭ',
    'UNITED KINGDOM' => 'ВЕЛИКОБРИТАНИЯ',
    'UPPER VOLTA' => 'ВЕРХНЯЯ ВОЛЬТА',
    'URUGUAY' => 'УРУГВАЙ',
    'US PACIFIC ISLAND' => 'МАРИАНСКИЕ ОСТРОВА-США',
    'US VIRGIN ISLANDS' => 'ВИРГИНСКИЕ ОСТРОВА-США',
    'USA' => 'США',
    'UZBEKISTAN' => 'УЗБЕКИСТАН',
    'VANUATU' => 'ВАНУАТУ',
    'VATICAN CITY' => 'ВАТИКАН',
    'VENEZUELA' => 'ВЕНЕСУЭЛА',
    'VIETNAM' => 'ВЬЕТНАМ',
    'WAKE ISLAND' => 'ОКЕАНИЯ',
    'WEST INDIES' => 'Вест-Индия',
    'WESTERN SAHARA' => 'ЗАПАДНАЯ САХАРА',
    'YEMEN' => 'ЙЕМЕН',
    'ZAIRE' => 'ЗАИР',
    'ZAMBIA' => 'ЗАМБИЯ',
    'ZIMBABWE' => 'ЗИМБАБВЕ',
  ),
  'cselect_type_dom' => 
  array (
    'Does not Equal' => 'Неравно',
    'Equals' => 'Равно',
  ),
  'custom_fields_importable_dom' => 
  array (
    'false' => 'Нет',
    'required' => 'Необходимо',
    'true' => 'Да',
  ),
  'custom_fields_merge_dup_dom' => 
  array (
    0 => 'Отключен',
    1 => 'Включено',
    2 => 'Фильтр',
    3 => 'Выбор фильтра по умолчанию',
    4 => 'Только фильтр',
  ),
  'custom_layout_dom' => 
  array (
    'Disabled' => 'Заблокирован',
    'Enabled' => 'Доступен',
  ),
  'd3_chart_types' => 
  array (
    'bar chart' => 'Вертикальная гистограмма',
    'funnel chart 3D' => 'Воронкообразный график',
    'group by chart' => 'Вертикальная сгруппированная гистограмма',
    'horizontal bar chart' => 'Горизонтальная линейчатая диаграмма',
    'horizontal group by chart' => 'Горизонтальная линейчатая сгруппированная диаграмма',
    'line chart' => 'Линейный график',
    'pie chart' => 'Круговая диаграмма',
  ),
  'd3_value_placement' => 
  array (
    'end' => 'Конец',
    'middle' => 'Середина',
    0 => 'Нет',
    'start' => 'Начало',
    'top' => 'Верх',
    1 => 'По умолчанию',
  ),
  'dashlet_auto_refresh_options' => 
  array (
    -1 => 'Не обновлять автоматически',
    30 => 'Каждые 30 секунд',
    60 => 'Каждую минуту',
    180 => 'Каждые 3 минуты',
    300 => 'Каждые 5 минут',
    600 => 'Каждые 10 минут',
  ),
  'dashlet_auto_refresh_options_admin' => 
  array (
    -1 => 'Никогда',
    30 => 'Каждые 30 секунд',
    60 => 'Каждую минуту',
    180 => 'Каждые 3 минуты',
    300 => 'Каждые 5 минут',
    600 => 'Каждые 10 минут',
  ),
  'dashlet_limit_options' => 
  array (
    5 => '5',
    10 => '10',
    15 => '15',
    20 => '20',
  ),
  'dashlet_webpage_limit_options' => 
  array (
    1 => '1',
    3 => '3',
    5 => '5',
    10 => '10',
  ),
  'dataset_att_display_type_dom' => 
  array (
    'Normal' => 'Обычный',
    'Scalar' => 'Скалярный',
  ),
  'dataset_att_format_type_dom' => 
  array (
    'Accounting' => 'Калькуляция',
    'Date' => 'Дата',
    'Datetime' => 'Дата и время',
    'Text' => 'Текст',
  ),
  'dataset_att_format_type_scalar_dom' => 
  array (
    'Day' => 'День',
    'Month' => 'Месяц',
    'Quarter' => 'Квартал',
    'Week' => 'Неделя',
    'Year' => 'Год',
  ),
  'dataset_layout_type_dom' => 
  array (
    'Column' => 'Столбец',
  ),
  'dataset_style_dom' => 
  array (
    'bold' => 'Полужирный',
    'italic' => 'Курсив',
    'normal' => 'Обычный',
  ),
  'date_range_operator_dom' => 
  array (
    'last_30_days' => 'Последние 30 дней',
    'last_7_days' => 'Последние 7 дней',
    'last_month' => 'Прошлый месяц',
    'last_year' => 'Прошлый год',
    'next_30_days' => 'Следующие 30 дней',
    'next_7_days' => 'Следующие 7 дней',
    'next_month' => 'Следующий месяц',
    'next_year' => 'Следующий год',
    'this_month' => 'Текущий месяц',
    'this_year' => 'Текущий год',
  ),
  'date_range_search_dom' => 
  array (
    '=' => 'Равно',
    'between' => 'Между',
    'greater_than' => 'Больше, чем',
    'last_30_days' => 'Прошедшие 30 дней',
    'last_7_days' => 'Прошедшие 7 дней',
    'last_month' => 'Прошлый месяц',
    'last_year' => 'Прошлый год',
    'less_than' => 'Меньше, чем',
    'next_30_days' => 'Следующие 30 дней',
    'next_7_days' => 'Следующие 7 дней',
    'next_month' => 'Следующий месяц',
    'next_year' => 'Следующий год',
    'not_equal' => 'Неравно',
    'this_month' => 'Текущий месяц',
    'this_year' => 'Текущий год',
  ),
  'dnb_bal_after_before_btw' => 
  array (
    'btw' => 'Между',
    'gte' => 'После',
    'lte' => 'До',
  ),
  'dnb_bal_filing_trading_option' => 
  array (
    'filingdate' => 'Дата подачи',
    'tradingdate' => 'Дата проведения торгов',
  ),
  'dnb_bal_gte_lte_btw' => 
  array (
    'btw' => 'Между',
    'gte' => 'Больше, чем или равный',
    'lte' => 'Меньше, чем или равный',
  ),
  'dnb_bal_miles_km' => 
  array (
    3349 => 'Километр (ы)',
    3353 => 'Мили (миль)',
  ),
  'dnb_bal_prescreen_options' => 
  array (
    10925 => 'Низкий',
    10926 => 'Средний',
    10927 => 'Высокий',
  ),
  'dnb_bal_primary_secondary' => 
  array (
    'false' => 'Основные и вторичные',
    'true' => 'Только основные',
  ),
  'dnb_bal_single_all' => 
  array (
    'allsites' => 'Все сайты',
    'singlesite' => 'Единый сайт',
  ),
  'dnb_contact_kw_scope' => 
  array (
    'Bio' => 'Био',
    'Both' => 'Оба',
    'Title' => 'Должность',
  ),
  'dnb_contact_types' => 
  array (
    'Contacts' => 'Контакты',
    'Leads' => 'Предварительные контакты',
    'Prospects' => 'Потенциальные клиенты',
  ),
  'dnb_countries_iso' => 
  array (
    'AD' => 'Андорра',
    'AE' => 'Объединённые Арабские Эмираты',
    'AF' => 'Афганистан',
    'AG' => 'Антигуа и Барбуда',
    'AI' => 'Ангилья',
    'AL' => 'Албания',
    'AM' => 'Армения',
    'AN' => 'Нидерландские Антильские острова',
    'AO' => 'Ангола',
    'AQ' => 'Антарктида',
    'AR' => 'Аргентина',
    'AS' => 'Американское Самоа',
    'AT' => 'Австрия',
    'AU' => 'Австралия',
    'AW' => 'Аруба',
    'AZ' => 'Азербайджан',
    'BA' => 'Босния и Герцеговина',
    'BB' => 'Барбадос',
    'BD' => 'Бангладеш',
    'BE' => 'Бельгия',
    'BF' => 'Буркина-Фасо',
    'BG' => 'Болгария',
    'BH' => 'Бахрейн',
    'BI' => 'Бурунди',
    'BJ' => 'Бенин',
    'BM' => 'Бермудские острова',
    'BN' => 'Бруней',
    'BO' => 'Боливия',
    'BR' => 'Бразилия',
    'BS' => 'Багамские Острова',
    'BT' => 'Бутан',
    'BV' => 'Остров Буве',
    'BW' => 'Ботсвана',
    'BY' => 'Беларусь',
    'BZ' => 'Белиз',
    'CA' => 'Канада',
    'CC' => 'Кокосовые острова',
    'CD' => 'Демократическая Республика Конго',
    'CF' => 'Центральноафриканская Республика',
    'CG' => 'Конго',
    'CH' => 'Швейцария',
    'CI' => 'Кот-д\'Ивуар',
    'CK' => 'Острова Кука',
    'CL' => 'Чили',
    'CM' => 'Камерун',
    'CN' => 'Китай',
    'CO' => 'Колумбия',
    'CR' => 'Коста-Рика',
    'CU' => 'Куба',
    'CV' => 'Кабо-Верде',
    'CX' => 'Остров Рождества',
    'CY' => 'Кипр',
    'CZ' => 'Чешская Республика',
    'DE' => 'Германия',
    'DJ' => 'Джибути',
    'DK' => 'Дания',
    'DM' => 'Доминика',
    'DO' => 'Доминиканская Республика',
    'DZ' => 'Алжир',
    'EC' => 'Эквадор',
    'EE' => 'Эстония',
    'EG' => 'Египет',
    'EH' => 'Западная Сахара',
    'ER' => 'Эритрея',
    'ES' => 'Испания',
    'ET' => 'Эфиопия',
    'FI' => 'Финляндия',
    'FJ' => 'Фиджи',
    'FK' => 'Фолклендские острова',
    'FM' => 'Микронезия',
    'FO' => 'Фарерские острова',
    'FR' => 'Франция',
    'FX' => 'Метрополия Франции',
    'GA' => 'Габон',
    'GB' => 'Соединённое Королевство (Великобритании и Северной Ирландии)',
    'GD' => 'Гренада',
    'GE' => 'Грузия',
    'GF' => 'Французская Гвиана',
    'GH' => 'Гана',
    'GI' => 'Гибралтар',
    'GL' => 'Гренландия',
    'GM' => 'Гамбия',
    'GN' => 'Гвинея',
    'GP' => 'Гваделупа',
    'GQ' => 'Экваториальная Гвинея',
    'GR' => 'Греция',
    'GS' => 'Южная Георгия и Южные Сандвичевы Острова',
    'GT' => 'Гватемала',
    'GU' => 'Гуам',
    'GW' => 'Гвинея-Бисау',
    'GY' => 'Гайана',
    'HK' => 'Гонконг',
    'HM' => 'Остров Херд и острова Макдональд',
    'HN' => 'Гондурас',
    'HR' => 'Хорватия',
    'HT' => 'Гаити',
    'HU' => 'Венгрия',
    'ID' => 'Индонезия',
    'IE' => 'Ирландия',
    'IL' => 'Израиль',
    'IN' => 'Индия',
    'IO' => 'Британская территория в Индийском океане',
    'IQ' => 'Ирак',
    'IR' => 'Иран',
    'IS' => 'Исландия',
    'IT' => 'Италия',
    'JM' => 'Ямайка',
    'JO' => 'Иордан',
    'JP' => 'Япония',
    'KE' => 'Кения',
    'KG' => 'Киргизия',
    'KH' => 'Камбоджа',
    'KI' => 'Кирибати',
    'KM' => 'Коморы',
    'KN' => 'Сент-Китс и Невис',
    'KP' => 'Северная Корея',
    'KR' => 'Южная Корея',
    'KW' => 'Кувейт',
    'KY' => 'Каймановы острова',
    'KZ' => 'Казахстан',
    'LA' => 'Лаос',
    'LB' => 'Ливан',
    'LC' => 'Сент-Люсия',
    'LI' => 'Лихтенштейн',
    'LK' => 'Шри-Ланка',
    'LR' => 'Либерия',
    'LS' => 'Лесото',
    'LT' => 'Литва',
    'LU' => 'Люксембург',
    'LV' => 'Латвия',
    'LY' => 'Ливия',
    'MA' => 'Марокко',
    'MC' => 'Монако',
    'MD' => 'Молдова',
    'ME' => 'Черногория',
    'MG' => 'Мадагаскар',
    'MH' => 'Маршалловы Острова',
    'MK' => 'Республика Македония',
    'ML' => 'Мали',
    'MM' => 'Мьянма',
    'MN' => 'Монголия',
    'MO' => 'Макао',
    'MP' => 'Северные Марианские острова',
    'MQ' => 'Мартиника',
    'MR' => 'Мавритания',
    'MS' => 'Монтсеррат',
    'MT' => 'Мальта',
    'MU' => 'Маврикий',
    'MV' => 'Мальдивы',
    'MW' => 'Малави',
    'MX' => 'Мексика',
    'MY' => 'Малайзия',
    'MZ' => 'Мозамбик',
    'NA' => 'Намибия',
    'NC' => 'Новая Каледония',
    'NE' => 'Нигер',
    'NF' => 'Норфолк',
    'NG' => 'Нигерия',
    'NI' => 'Никарагуа',
    'NL' => 'Нидерланды',
    'NO' => 'Норвегия',
    'NP' => 'Непал',
    'NR' => 'Науру',
    'NU' => 'Ниуэ',
    'NZ' => 'Новая Зеландия',
    'OM' => 'Оман',
    'PA' => 'Панама',
    'PE' => 'Перу',
    'PF' => 'Французская Полинезия',
    'PG' => 'Папуа - Новая Гвинея',
    'PH' => 'Филиппины',
    'PK' => 'Пакистан',
    'PL' => 'Польша',
    'PM' => 'Сен-Пьер и Микелон',
    'PN' => 'Острова Питкэрн',
    'PR' => 'Пуэрто-Рико',
    'PS' => 'Палестина',
    'PT' => 'Португалия',
    'PW' => 'Палау',
    'PY' => 'Парагвай',
    'QA' => 'Катар',
    'RE' => 'Реюньон',
    'RO' => 'Румыния',
    'RS' => 'Сербия',
    'RU' => 'Россия',
    'RW' => 'Руанда',
    'SA' => 'Саудовская Аравия',
    'SB' => 'Соломоновы острова',
    'SC' => 'Сейшельские острова',
    'SD' => 'Судан',
    'SE' => 'Швеция',
    'SG' => 'Сингапур',
    'SH' => 'Остров Святой Елены',
    'SI' => 'Словения',
    'SJ' => 'Шпицберген и Ян-Майен',
    'SK' => 'Словакия',
    'SL' => 'Сьерра-Леоне',
    'SM' => 'Сан-Марино',
    'SN' => 'Сенегал',
    'SO' => 'Сомали',
    'SR' => 'Суринам',
    'ST' => 'Сан-Томе и Принсипи',
    'SV' => 'Сальвадор',
    'SY' => 'Сирия',
    'SZ' => 'Свазиленд',
    'TC' => 'Теркс и Кайкос',
    'TD' => 'Чад',
    'TF' => 'Французские Южные и Антарктические территории',
    'TG' => 'Того',
    'TH' => 'Таиланд',
    'TJ' => 'Таджикистан',
    'TK' => 'Токелау',
    'TM' => 'Туркменистан',
    'TN' => 'Тунис',
    'TO' => 'Тонга',
    'TP' => 'Восточный Тимор',
    'TR' => 'Турция',
    'TT' => 'Тринидад и Тобаго',
    'TV' => 'Тувалу',
    'TW' => 'Тайвань',
    'TZ' => 'Танзания',
    'UA' => 'Украина',
    'UG' => 'Уганда',
    'UM' => 'Внешние малые острова США',
    'US' => 'Соединённые Штаты Америки',
    'UY' => 'Уругвай',
    'UZ' => 'Узбекистан',
    'VA' => 'Ватикан',
    'VC' => 'Сент-Винсент и Гренадины',
    'VE' => 'Венесуэла',
    'VG' => 'Британские Виргинские острова',
    'VI' => 'Виргинские Острова (США)',
    'VN' => 'Вьетнам',
    'VU' => 'Вануату',
    'WF' => 'Уоллис и Футуна',
    'WS' => 'Самоа',
    'YE' => 'Йемен',
    'YT' => 'Майотта',
    'ZA' => 'Южно-Африканская Республика',
    'ZM' => 'Замбия',
    'ZW' => 'Зимбабве',
  ),
  'dnb_countries_radius_iso' => 
  array (
    'CA' => 'Канада',
    'US' => 'Соединённые Штаты (Америки)',
  ),
  'dnb_sic_naics_code' => 
  array (
    700 => 'код NAICS...',
    3599 => 'код SIC',
  ),
  'dnb_states_iso' => 
  array (
    'AD' => 
    array (
      1 => 
      array (
        'code' => 'ALV',
        'name' => 'Андорра-ла-Велья',
      ),
      2 => 
      array (
        'code' => 'CAN',
        'name' => 'Канильо',
      ),
      3 => 
      array (
        'code' => 'ENC',
        'name' => 'Энкам',
      ),
      4 => 
      array (
        'code' => 'ESE',
        'name' => 'Эскальдес-Энгордань',
      ),
      5 => 
      array (
        'code' => 'LMA',
        'name' => 'Ла-Масана',
      ),
      6 => 
      array (
        'code' => 'ORD',
        'name' => 'Ордино',
      ),
      7 => 
      array (
        'code' => 'SJL',
        'name' => 'Сан-Жулиа-де-Лория',
      ),
    ),
    'AF' => 
    array (
      1 => 
      array (
        'code' => 'BAL',
        'name' => 'Балхаш',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'Бамиан',
      ),
      3 => 
      array (
        'code' => 'BDG',
        'name' => 'Бадгис',
      ),
      4 => 
      array (
        'code' => 'BDS',
        'name' => 'Бадахшан',
      ),
      5 => 
      array (
        'code' => 'BGL',
        'name' => 'Баглан',
      ),
      6 => 
      array (
        'code' => 'FRA',
        'name' => 'Фарах',
      ),
      7 => 
      array (
        'code' => 'FYB',
        'name' => 'пров. Фарьяб',
      ),
      8 => 
      array (
        'code' => 'GHA',
        'name' => 'Газни',
      ),
      9 => 
      array (
        'code' => 'GHO',
        'name' => 'пров. Гор',
      ),
      10 => 
      array (
        'code' => 'HEL',
        'name' => 'пров. Гильменд',
      ),
      11 => 
      array (
        'code' => 'HER',
        'name' => 'Герат',
      ),
      12 => 
      array (
        'code' => 'JOW',
        'name' => 'Джаузджан',
      ),
      13 => 
      array (
        'code' => 'KAB',
        'name' => 'Кабул',
      ),
      14 => 
      array (
        'code' => 'KAN',
        'name' => 'Кандагар',
      ),
      15 => 
      array (
        'code' => 'KAP',
        'name' => 'пров. Каписа',
      ),
      16 => 
      array (
        'code' => 'KDZ',
        'name' => 'Кундуз',
      ),
      17 => 
      array (
        'code' => 'KHO',
        'name' => 'Хост',
      ),
      18 => 
      array (
        'code' => 'KNR',
        'name' => 'Конар',
      ),
      19 => 
      array (
        'code' => 'LAG',
        'name' => 'пров. Лагман',
      ),
      20 => 
      array (
        'code' => 'LOW',
        'name' => 'пров. Логар',
      ),
      21 => 
      array (
        'code' => 'NAN',
        'name' => 'Нангархар',
      ),
      22 => 
      array (
        'code' => 'NIM',
        'name' => 'Нимроз',
      ),
      23 => 
      array (
        'code' => 'NUR',
        'name' => 'Нуристан',
      ),
      24 => 
      array (
        'code' => 'ORU',
        'name' => 'Урузган',
      ),
      25 => 
      array (
        'code' => 'PAR',
        'name' => 'Парван',
      ),
      26 => 
      array (
        'code' => 'PIA',
        'name' => 'Пактия',
      ),
      27 => 
      array (
        'code' => 'PKA',
        'name' => 'Пактика',
      ),
      28 => 
      array (
        'code' => 'SAM',
        'name' => 'Саманган',
      ),
      29 => 
      array (
        'code' => 'SAR',
        'name' => 'Сари-Пуль',
      ),
      30 => 
      array (
        'code' => 'TAK',
        'name' => 'Тахар',
      ),
      31 => 
      array (
        'code' => 'WAR',
        'name' => 'Вардак',
      ),
      32 => 
      array (
        'code' => 'ZAB',
        'name' => 'Заболь',
      ),
    ),
    'AI' => 
    array (
      1 => 
      array (
        'code' => 'ANG',
        'name' => 'Ангилита',
      ),
      2 => 
      array (
        'code' => 'ANG',
        'name' => 'Ангилья',
      ),
      3 => 
      array (
        'code' => 'DOG',
        'name' => 'Дог',
      ),
      4 => 
      array (
        'code' => 'LIT',
        'name' => 'Литл Скраб',
      ),
      5 => 
      array (
        'code' => 'PRI',
        'name' => 'Прикли-Пиркейс',
      ),
      6 => 
      array (
        'code' => 'SAN',
        'name' => 'Санди',
      ),
      7 => 
      array (
        'code' => 'SCR',
        'name' => 'Скраб',
      ),
      8 => 
      array (
        'code' => 'SEA',
        'name' => 'Сил',
      ),
      9 => 
      array (
        'code' => 'SOM',
        'name' => 'Сомбреро',
      ),
    ),
    'AL' => 
    array (
      1 => 
      array (
        'code' => 'BR',
        'name' => 'Берат',
      ),
      2 => 
      array (
        'code' => 'BU',
        'name' => 'Булькиза',
      ),
      3 => 
      array (
        'code' => 'DI',
        'name' => 'Дибра',
      ),
      4 => 
      array (
        'code' => 'DL',
        'name' => 'Дельвина',
      ),
      5 => 
      array (
        'code' => 'DR',
        'name' => 'Дуррес',
      ),
      6 => 
      array (
        'code' => 'DV',
        'name' => 'Девол',
      ),
      7 => 
      array (
        'code' => 'EL',
        'name' => 'Эльбасан',
      ),
      8 => 
      array (
        'code' => 'ER',
        'name' => 'Коленя',
      ),
      9 => 
      array (
        'code' => 'FR',
        'name' => 'Фиери',
      ),
      10 => 
      array (
        'code' => 'GJ',
        'name' => 'Гирокастра',
      ),
      11 => 
      array (
        'code' => 'GR',
        'name' => 'Грамши',
      ),
      12 => 
      array (
        'code' => 'HA',
        'name' => 'Хас',
      ),
      13 => 
      array (
        'code' => 'KA',
        'name' => 'Кавая',
      ),
      14 => 
      array (
        'code' => 'KB',
        'name' => 'Курбин',
      ),
      15 => 
      array (
        'code' => 'KC',
        'name' => 'Кучова',
      ),
      16 => 
      array (
        'code' => 'KO',
        'name' => 'Корча',
      ),
      17 => 
      array (
        'code' => 'KR',
        'name' => 'Круя',
      ),
      18 => 
      array (
        'code' => 'KU',
        'name' => 'Кукес',
      ),
      19 => 
      array (
        'code' => 'LB',
        'name' => 'Либражд',
      ),
      20 => 
      array (
        'code' => 'LE',
        'name' => 'Лежа',
      ),
      21 => 
      array (
        'code' => 'LU',
        'name' => 'Люшня',
      ),
      22 => 
      array (
        'code' => 'MK',
        'name' => 'Малакастра',
      ),
      23 => 
      array (
        'code' => 'MM',
        'name' => 'Малесия-э-Мади',
      ),
      24 => 
      array (
        'code' => 'MR',
        'name' => 'Мирдита',
      ),
      25 => 
      array (
        'code' => 'MT',
        'name' => 'Мати',
      ),
      26 => 
      array (
        'code' => 'PG',
        'name' => 'Поградец',
      ),
      27 => 
      array (
        'code' => 'PQ',
        'name' => 'Пекин',
      ),
      28 => 
      array (
        'code' => 'PR',
        'name' => 'Пермети',
      ),
      29 => 
      array (
        'code' => 'PU',
        'name' => 'Пука',
      ),
      30 => 
      array (
        'code' => 'SH',
        'name' => 'Шкодер',
      ),
      31 => 
      array (
        'code' => 'SK',
        'name' => 'Скрапари',
      ),
      32 => 
      array (
        'code' => 'SR',
        'name' => 'Саранда',
      ),
      33 => 
      array (
        'code' => 'TE',
        'name' => 'Тепелена',
      ),
      34 => 
      array (
        'code' => 'TP',
        'name' => 'Тропоя',
      ),
      35 => 
      array (
        'code' => 'TR',
        'name' => 'Тирана',
      ),
      36 => 
      array (
        'code' => 'VL',
        'name' => 'Влера',
      ),
    ),
    'AM' => 
    array (
      1 => 
      array (
        'code' => 'AGT',
        'name' => 'Арагацотнская область',
      ),
      2 => 
      array (
        'code' => 'ARR',
        'name' => 'Арарат',
      ),
      3 => 
      array (
        'code' => 'ARM',
        'name' => 'Армавир',
      ),
      4 => 
      array (
        'code' => 'GEG',
        'name' => 'Гехаркуникская область',
      ),
      5 => 
      array (
        'code' => 'KOT',
        'name' => 'Котайкская область',
      ),
      6 => 
      array (
        'code' => 'LOR',
        'name' => 'Лорийская область',
      ),
      7 => 
      array (
        'code' => 'SHI',
        'name' => 'Ширак',
      ),
      8 => 
      array (
        'code' => 'SYU',
        'name' => 'Сюникская область',
      ),
      9 => 
      array (
        'code' => 'TAV',
        'name' => 'Тавушская область',
      ),
      10 => 
      array (
        'code' => 'VAY',
        'name' => 'Вайоцдзорская область',
      ),
      11 => 
      array (
        'code' => 'YER',
        'name' => 'Ереван',
      ),
    ),
    'AO' => 
    array (
      1 => 
      array (
        'code' => 'BGO',
        'name' => 'Бенго',
      ),
      2 => 
      array (
        'code' => 'BGU',
        'name' => 'Бенгела',
      ),
      3 => 
      array (
        'code' => 'BIE',
        'name' => 'Бие',
      ),
      4 => 
      array (
        'code' => 'CAB',
        'name' => 'Кабинда',
      ),
      5 => 
      array (
        'code' => 'CCU',
        'name' => 'Квандо-Кубанго',
      ),
      6 => 
      array (
        'code' => 'CNO',
        'name' => 'Северная Кванза',
      ),
      7 => 
      array (
        'code' => 'CUS',
        'name' => 'Южная Кванза',
      ),
      8 => 
      array (
        'code' => 'CNN',
        'name' => 'Кунене',
      ),
      9 => 
      array (
        'code' => 'HUA',
        'name' => 'Уамбо',
      ),
      10 => 
      array (
        'code' => 'HUI',
        'name' => 'Уила',
      ),
      11 => 
      array (
        'code' => 'LUA',
        'name' => 'Луанда',
      ),
      12 => 
      array (
        'code' => 'LNO',
        'name' => 'Северная Лунда',
      ),
      13 => 
      array (
        'code' => 'LSU',
        'name' => 'Южная Лунда',
      ),
      14 => 
      array (
        'code' => 'MAL',
        'name' => 'Маланже',
      ),
      15 => 
      array (
        'code' => 'MOX',
        'name' => 'Мошико',
      ),
      16 => 
      array (
        'code' => 'NAM',
        'name' => 'Намибе',
      ),
      17 => 
      array (
        'code' => 'UIG',
        'name' => 'Уиже',
      ),
      18 => 
      array (
        'code' => 'ZAI',
        'name' => 'Заире',
      ),
    ),
    'AQ' => 
    array (
      1 => 
      array (
        'code' => 'ASG',
        'name' => 'Сейнт Джордж',
      ),
      2 => 
      array (
        'code' => 'ASH',
        'name' => 'Сейнт Филип',
      ),
      3 => 
      array (
        'code' => 'ASJ',
        'name' => 'Сент-Джонс',
      ),
      4 => 
      array (
        'code' => 'ASL',
        'name' => 'Сейнт Пол',
      ),
      5 => 
      array (
        'code' => 'ASM',
        'name' => 'Сейнт Мэри',
      ),
      6 => 
      array (
        'code' => 'ASR',
        'name' => 'Сейнт Питер',
      ),
      7 => 
      array (
        'code' => 'BAR',
        'name' => 'Барбуда',
      ),
      8 => 
      array (
        'code' => 'RED',
        'name' => 'Редонда',
      ),
    ),
    'AR' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Огненная Земля',
      ),
      2 => 
      array (
        'code' => 'BA',
        'name' => 'Буэнос-Айрес',
      ),
      3 => 
      array (
        'code' => 'CA',
        'name' => 'Катамарка',
      ),
      4 => 
      array (
        'code' => 'CH',
        'name' => 'Чако',
      ),
      5 => 
      array (
        'code' => 'CU',
        'name' => 'Чубут',
      ),
      6 => 
      array (
        'code' => 'CO',
        'name' => 'Кордова',
      ),
      7 => 
      array (
        'code' => 'CR',
        'name' => 'Корриентес',
      ),
      8 => 
      array (
        'code' => 'CF',
        'name' => 'Буэнос-Айрес',
      ),
      9 => 
      array (
        'code' => 'ER',
        'name' => 'Энтре-Риос',
      ),
      10 => 
      array (
        'code' => 'FO',
        'name' => 'Формоса',
      ),
      11 => 
      array (
        'code' => 'JU',
        'name' => 'Жужуй',
      ),
      12 => 
      array (
        'code' => 'LP',
        'name' => 'Ла-Пампа',
      ),
      13 => 
      array (
        'code' => 'LR',
        'name' => 'Ла-Риоха',
      ),
      14 => 
      array (
        'code' => 'ME',
        'name' => 'Мендоса',
      ),
      15 => 
      array (
        'code' => 'MI',
        'name' => 'Мисьонес',
      ),
      16 => 
      array (
        'code' => 'NE',
        'name' => 'Неукен',
      ),
      17 => 
      array (
        'code' => 'RN',
        'name' => 'Рио-Негро',
      ),
      18 => 
      array (
        'code' => 'SA',
        'name' => 'Сальта',
      ),
      19 => 
      array (
        'code' => 'SJ',
        'name' => 'Сан-Хуан',
      ),
      20 => 
      array (
        'code' => 'SL',
        'name' => 'Сан-Луис',
      ),
      21 => 
      array (
        'code' => 'SC',
        'name' => 'Санта-Крус',
      ),
      22 => 
      array (
        'code' => 'SF',
        'name' => 'Санта-Фе',
      ),
      23 => 
      array (
        'code' => 'SD',
        'name' => 'Сантьяго-дель-Эстеро',
      ),
      24 => 
      array (
        'code' => 'TF',
        'name' => 'Огненная Земля',
      ),
      25 => 
      array (
        'code' => 'TU',
        'name' => 'Тукуман',
      ),
    ),
    'AS' => 
    array (
      1 => 
      array (
        'code' => 'E',
        'name' => 'Восточное Самоа',
      ),
      2 => 
      array (
        'code' => 'M',
        'name' => 'Острова Мануа',
      ),
      3 => 
      array (
        'code' => 'R',
        'name' => 'Остров Розе',
      ),
      4 => 
      array (
        'code' => 'S',
        'name' => 'Острова Суэйнс',
      ),
      5 => 
      array (
        'code' => 'W',
        'name' => 'Западное Самоа',
      ),
    ),
    'AT' => 
    array (
      1 => 
      array (
        'code' => 'BUR',
        'name' => 'Бургенланд',
      ),
      2 => 
      array (
        'code' => 'KAR',
        'name' => 'Каринтия',
      ),
      3 => 
      array (
        'code' => 'NOS',
        'name' => 'Нижняя Австрия',
      ),
      4 => 
      array (
        'code' => 'OOS',
        'name' => 'Верхняя Австрия',
      ),
      5 => 
      array (
        'code' => 'SAL',
        'name' => 'Зальцбург',
      ),
      6 => 
      array (
        'code' => 'STE',
        'name' => 'Штирия',
      ),
      7 => 
      array (
        'code' => 'TIR',
        'name' => 'Тироль',
      ),
      8 => 
      array (
        'code' => 'VOR',
        'name' => 'Форарльберг',
      ),
      9 => 
      array (
        'code' => 'WIE',
        'name' => 'Вена',
      ),
    ),
    'AU' => 
    array (
      1 => 
      array (
        'code' => 'ACT',
        'name' => 'Австралийская столичная территория',
      ),
      2 => 
      array (
        'code' => 'NSW',
        'name' => 'Новый Южный Уэльс',
      ),
      3 => 
      array (
        'code' => 'NT',
        'name' => 'Северная территория',
      ),
      4 => 
      array (
        'code' => 'QLD',
        'name' => 'Квинсленд',
      ),
      5 => 
      array (
        'code' => 'SA',
        'name' => 'Южная Австралия',
      ),
      6 => 
      array (
        'code' => 'TAS',
        'name' => 'Тасмания',
      ),
      7 => 
      array (
        'code' => 'VIC',
        'name' => 'Виктория',
      ),
      8 => 
      array (
        'code' => 'WA',
        'name' => 'Западная Австралия',
      ),
    ),
    'AW' => 
    array (
      1 => 
      array (
        'code' => 'ARU',
        'name' => 'Аруба',
      ),
      2 => 
      array (
        'code' => 'DRU',
        'name' => 'Друиф',
      ),
      3 => 
      array (
        'code' => 'MAN',
        'name' => 'Манчебо',
      ),
      4 => 
      array (
        'code' => 'NOO',
        'name' => 'Ноорд',
      ),
      5 => 
      array (
        'code' => 'ORA',
        'name' => 'Ораньестад',
      ),
      6 => 
      array (
        'code' => 'PAL',
        'name' => 'Палм-Бич',
      ),
      7 => 
      array (
        'code' => 'ROO',
        'name' => 'Роои Томас',
      ),
      8 => 
      array (
        'code' => 'SIN',
        'name' => 'Синт-Николас',
      ),
      9 => 
      array (
        'code' => 'SIN',
        'name' => 'Синт-Николас',
      ),
      10 => 
      array (
        'code' => 'WAY',
        'name' => 'Ваяка',
      ),
    ),
    'AZ' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Ширван',
      ),
      2 => 
      array (
        'code' => 'ABS',
        'name' => 'Апшеронский полуостров',
      ),
      3 => 
      array (
        'code' => 'AGC',
        'name' => 'Агджабеди',
      ),
      4 => 
      array (
        'code' => 'AGM',
        'name' => 'Агдам',
      ),
      5 => 
      array (
        'code' => 'AGS',
        'name' => 'Агдаш',
      ),
      6 => 
      array (
        'code' => 'AGA',
        'name' => 'Агстафа',
      ),
      7 => 
      array (
        'code' => 'AGU',
        'name' => 'Ахсу',
      ),
      8 => 
      array (
        'code' => 'AST',
        'name' => 'Астара',
      ),
      9 => 
      array (
        'code' => 'BA',
        'name' => 'Баки',
      ),
      10 => 
      array (
        'code' => 'BAB',
        'name' => 'Бабек',
      ),
      11 => 
      array (
        'code' => 'BAL',
        'name' => 'Балакен',
      ),
      12 => 
      array (
        'code' => 'BAR',
        'name' => 'Барда',
      ),
      13 => 
      array (
        'code' => 'BEY',
        'name' => 'Бейлаган',
      ),
      14 => 
      array (
        'code' => 'BIL',
        'name' => 'Билясувар',
      ),
      15 => 
      array (
        'code' => 'CAB',
        'name' => 'Джебраил',
      ),
      16 => 
      array (
        'code' => 'CAL',
        'name' => 'Джалильабад',
      ),
      17 => 
      array (
        'code' => 'CUL',
        'name' => 'Джульфа',
      ),
      18 => 
      array (
        'code' => 'DAS',
        'name' => 'Дашкесан',
      ),
      19 => 
      array (
        'code' => 'DAV',
        'name' => 'Давачи',
      ),
      20 => 
      array (
        'code' => 'FUZ',
        'name' => 'Физули',
      ),
      21 => 
      array (
        'code' => 'GA',
        'name' => 'Гянджа',
      ),
      22 => 
      array (
        'code' => 'GAD',
        'name' => 'Кедабек',
      ),
      23 => 
      array (
        'code' => 'GOR',
        'name' => 'Геранбой',
      ),
      24 => 
      array (
        'code' => 'GOY',
        'name' => 'Гейчай',
      ),
      25 => 
      array (
        'code' => 'HAC',
        'name' => 'Аджикабул',
      ),
      26 => 
      array (
        'code' => 'IMI',
        'name' => 'Имишли',
      ),
      27 => 
      array (
        'code' => 'ISM',
        'name' => 'Исмаиллы',
      ),
      28 => 
      array (
        'code' => 'KAL',
        'name' => 'Кельбаджар',
      ),
      29 => 
      array (
        'code' => 'KUR',
        'name' => 'Кюрдамир',
      ),
      30 => 
      array (
        'code' => 'LA',
        'name' => 'Ленкорань',
      ),
      31 => 
      array (
        'code' => 'LAC',
        'name' => 'Лачин',
      ),
      32 => 
      array (
        'code' => 'LAN',
        'name' => 'Ленкорань',
      ),
      33 => 
      array (
        'code' => 'LER',
        'name' => 'Лерик',
      ),
      34 => 
      array (
        'code' => 'MAS',
        'name' => 'Масаллы',
      ),
      35 => 
      array (
        'code' => 'MI',
        'name' => 'Мингечевир',
      ),
      36 => 
      array (
        'code' => 'NA',
        'name' => 'Нафталан',
      ),
      37 => 
      array (
        'code' => 'NX',
        'name' => 'Нахичевань',
      ),
      38 => 
      array (
        'code' => 'NEF',
        'name' => 'Нефтечала',
      ),
      39 => 
      array (
        'code' => 'OGU',
        'name' => 'Огуз',
      ),
      40 => 
      array (
        'code' => 'ORD',
        'name' => 'Ордубад',
      ),
      41 => 
      array (
        'code' => 'QAB',
        'name' => 'Габала',
      ),
      42 => 
      array (
        'code' => 'QAX',
        'name' => 'Гах',
      ),
      43 => 
      array (
        'code' => 'QAZ',
        'name' => 'Газах',
      ),
      44 => 
      array (
        'code' => 'QOB',
        'name' => 'Гобустан',
      ),
      45 => 
      array (
        'code' => 'QBA',
        'name' => 'Губа',
      ),
      46 => 
      array (
        'code' => 'QBI',
        'name' => 'Кубатлы',
      ),
      47 => 
      array (
        'code' => 'QUS',
        'name' => 'Гусар',
      ),
      48 => 
      array (
        'code' => 'SA',
        'name' => 'Саки',
      ),
      49 => 
      array (
        'code' => 'SAT',
        'name' => 'Саатлы',
      ),
      50 => 
      array (
        'code' => 'SAB',
        'name' => 'Сабирабад',
      ),
      51 => 
      array (
        'code' => 'SAD',
        'name' => 'Садарак',
      ),
      52 => 
      array (
        'code' => 'SAH',
        'name' => 'Шахбуз',
      ),
      53 => 
      array (
        'code' => 'SAK',
        'name' => 'Саки',
      ),
      54 => 
      array (
        'code' => 'SAL',
        'name' => 'Салян',
      ),
      55 => 
      array (
        'code' => 'SM',
        'name' => 'Сумгайыт',
      ),
      56 => 
      array (
        'code' => 'SMI',
        'name' => 'Шемахы',
      ),
      57 => 
      array (
        'code' => 'SKR',
        'name' => 'Шамкир',
      ),
      58 => 
      array (
        'code' => 'SMX',
        'name' => 'Самух',
      ),
      59 => 
      array (
        'code' => 'SAR',
        'name' => 'Шарур',
      ),
      60 => 
      array (
        'code' => 'SIY',
        'name' => 'Сиазань',
      ),
      61 => 
      array (
        'code' => 'SS',
        'name' => 'Сузы',
      ),
      62 => 
      array (
        'code' => 'SUS',
        'name' => 'Сузы',
      ),
      63 => 
      array (
        'code' => 'TAR',
        'name' => 'Тартар',
      ),
      64 => 
      array (
        'code' => 'TOV',
        'name' => 'Товуз',
      ),
      65 => 
      array (
        'code' => 'UCA',
        'name' => 'Уджар',
      ),
      66 => 
      array (
        'code' => 'XA',
        'name' => 'Степанакерт',
      ),
      67 => 
      array (
        'code' => 'XAC',
        'name' => 'Хачмаз',
      ),
      68 => 
      array (
        'code' => 'XAN',
        'name' => 'Гейгель',
      ),
      69 => 
      array (
        'code' => 'XIZ',
        'name' => 'Хызин',
      ),
      70 => 
      array (
        'code' => 'XCI',
        'name' => 'Ходжалы',
      ),
      71 => 
      array (
        'code' => 'XVD',
        'name' => 'Мартуни',
      ),
      72 => 
      array (
        'code' => 'YAR',
        'name' => 'Ярдымлы',
      ),
      73 => 
      array (
        'code' => 'YEV',
        'name' => 'Евлах',
      ),
      74 => 
      array (
        'code' => 'ZAN',
        'name' => 'Зангелан',
      ),
      75 => 
      array (
        'code' => 'ZAQ',
        'name' => 'Загатала',
      ),
      76 => 
      array (
        'code' => 'ZAR',
        'name' => 'Зердаб',
      ),
    ),
    'BA' => 
    array (
      1 => 
      array (
        'code' => 'BRO',
        'name' => 'Округ Брчко',
      ),
      2 => 
      array (
        'code' => 'FBP',
        'name' => 'Боснийско-Подринский кантон',
      ),
      3 => 
      array (
        'code' => 'FHN',
        'name' => 'Герцеговино-Неретвенский кантон',
      ),
      4 => 
      array (
        'code' => 'FPO',
        'name' => 'Посавский кантон',
      ),
      5 => 
      array (
        'code' => 'FSA',
        'name' => 'Сараевский кантон',
      ),
      6 => 
      array (
        'code' => 'FSB',
        'name' => 'Среднебоснийский кантон',
      ),
      7 => 
      array (
        'code' => 'FTU',
        'name' => 'Тузланский кантон',
      ),
      8 => 
      array (
        'code' => 'FUS',
        'name' => 'Унско-Санский кантон',
      ),
      9 => 
      array (
        'code' => 'FZA',
        'name' => 'Боснийская Краина',
      ),
      10 => 
      array (
        'code' => 'FZE',
        'name' => 'Зеницко-Добойский кантон',
      ),
      11 => 
      array (
        'code' => 'FZH',
        'name' => 'Западногерцеговинский кантон',
      ),
      12 => 
      array (
        'code' => 'SBI',
        'name' => 'Биелина',
      ),
      13 => 
      array (
        'code' => 'SBL',
        'name' => 'Баня-Лука',
      ),
      14 => 
      array (
        'code' => 'SDO',
        'name' => 'Добой',
      ),
      15 => 
      array (
        'code' => 'SFO',
        'name' => 'Фоча',
      ),
      16 => 
      array (
        'code' => 'SSR',
        'name' => 'Сараево-Романия регион',
      ),
      17 => 
      array (
        'code' => 'STR',
        'name' => 'Требине',
      ),
      18 => 
      array (
        'code' => 'SVL',
        'name' => 'Власеница',
      ),
    ),
    'BB' => 
    array (
      1 => 
      array (
        'code' => 'CC',
        'name' => 'Крайстчерч',
      ),
      2 => 
      array (
        'code' => 'AND',
        'name' => 'Сейнт Эндрю',
      ),
      3 => 
      array (
        'code' => 'GEO',
        'name' => 'Сейнт Джордж',
      ),
      4 => 
      array (
        'code' => 'JAM',
        'name' => 'Сейнт Джеймс',
      ),
      5 => 
      array (
        'code' => 'JOH',
        'name' => 'Сейнт Джон',
      ),
      6 => 
      array (
        'code' => 'JOS',
        'name' => 'Сент-Джозеф',
      ),
      7 => 
      array (
        'code' => 'LUC',
        'name' => 'Сейнт Люси',
      ),
      8 => 
      array (
        'code' => 'MIC',
        'name' => 'Сент-Майкл',
      ),
      9 => 
      array (
        'code' => 'PET',
        'name' => 'Сент-Питер',
      ),
      10 => 
      array (
        'code' => 'PHI',
        'name' => 'Сент-Филип',
      ),
      11 => 
      array (
        'code' => 'THO',
        'name' => 'Сент-Томас',
      ),
    ),
    'BD' => 
    array (
      1 => 
      array (
        'code' => 'BAR',
        'name' => 'Барисал',
      ),
      2 => 
      array (
        'code' => 'CHI',
        'name' => 'Читтагонг',
      ),
      3 => 
      array (
        'code' => 'DHA',
        'name' => 'Дакка',
      ),
      4 => 
      array (
        'code' => 'KHU',
        'name' => 'Кхулна',
      ),
      5 => 
      array (
        'code' => 'RAJ',
        'name' => 'Раджшахи',
      ),
      6 => 
      array (
        'code' => 'SYL',
        'name' => 'Силхет',
      ),
    ),
    'BE' => 
    array (
      1 => 
      array (
        'code' => 'VAN',
        'name' => 'Антверпен',
      ),
      2 => 
      array (
        'code' => 'WBR',
        'name' => 'Валлонский Брабант',
      ),
      3 => 
      array (
        'code' => 'WHT',
        'name' => 'Эно',
      ),
      4 => 
      array (
        'code' => 'WLG',
        'name' => 'Льеж',
      ),
      5 => 
      array (
        'code' => 'VLI',
        'name' => 'Лимбург',
      ),
      6 => 
      array (
        'code' => 'WLX',
        'name' => 'Люксембург',
      ),
      7 => 
      array (
        'code' => 'WNA',
        'name' => 'Намюр',
      ),
      8 => 
      array (
        'code' => 'VOV',
        'name' => 'Восточная Фландрия',
      ),
      9 => 
      array (
        'code' => 'VBR',
        'name' => 'Фламандский Брабант',
      ),
      10 => 
      array (
        'code' => 'VWV',
        'name' => 'Западная Фландрия',
      ),
    ),
    'BF' => 
    array (
      1 => 
      array (
        'code' => 'BAL',
        'name' => 'Бале',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'Бам',
      ),
      3 => 
      array (
        'code' => 'BAN',
        'name' => 'Банва',
      ),
      4 => 
      array (
        'code' => 'BAZ',
        'name' => 'Базега',
      ),
      5 => 
      array (
        'code' => 'BOR',
        'name' => 'Бугуриба',
      ),
      6 => 
      array (
        'code' => 'BLG',
        'name' => 'Булгу',
      ),
      7 => 
      array (
        'code' => 'BOK',
        'name' => 'Булькиемде',
      ),
      8 => 
      array (
        'code' => 'COM',
        'name' => 'Комоэ',
      ),
      9 => 
      array (
        'code' => 'GAN',
        'name' => 'Ганзургу',
      ),
      10 => 
      array (
        'code' => 'GNA',
        'name' => 'Няня',
      ),
      11 => 
      array (
        'code' => 'GOU',
        'name' => 'Гурма',
      ),
      12 => 
      array (
        'code' => 'HOU',
        'name' => 'Уэ',
      ),
      13 => 
      array (
        'code' => 'IOA',
        'name' => 'Иоба',
      ),
      14 => 
      array (
        'code' => 'KAD',
        'name' => 'Кадиого',
      ),
      15 => 
      array (
        'code' => 'KEN',
        'name' => 'Кенедугу',
      ),
      16 => 
      array (
        'code' => 'KOD',
        'name' => 'Комонджари',
      ),
      17 => 
      array (
        'code' => 'KOP',
        'name' => 'Компьенга',
      ),
      18 => 
      array (
        'code' => 'KOS',
        'name' => 'Косси',
      ),
      19 => 
      array (
        'code' => 'KOL',
        'name' => 'Кульпелого',
      ),
      20 => 
      array (
        'code' => 'KOT',
        'name' => 'Куритенга',
      ),
      21 => 
      array (
        'code' => 'KOW',
        'name' => 'Курвеого',
      ),
      22 => 
      array (
        'code' => 'LER',
        'name' => 'Лераба',
      ),
      23 => 
      array (
        'code' => 'LOR',
        'name' => 'Лорум',
      ),
      24 => 
      array (
        'code' => 'MOU',
        'name' => 'Мухун',
      ),
      25 => 
      array (
        'code' => 'NAH',
        'name' => 'Нахури',
      ),
      26 => 
      array (
        'code' => 'NAM',
        'name' => 'Наментенга',
      ),
      27 => 
      array (
        'code' => 'NAY',
        'name' => 'Наяла',
      ),
      28 => 
      array (
        'code' => 'NOU',
        'name' => 'Нумбьель',
      ),
      29 => 
      array (
        'code' => 'OUB',
        'name' => 'Убритенга',
      ),
      30 => 
      array (
        'code' => 'OUD',
        'name' => 'Удалан',
      ),
      31 => 
      array (
        'code' => 'PAS',
        'name' => 'Йако',
      ),
      32 => 
      array (
        'code' => 'PON',
        'name' => 'Пони',
      ),
      33 => 
      array (
        'code' => 'SAG',
        'name' => 'Санги',
      ),
      34 => 
      array (
        'code' => 'SAM',
        'name' => 'Санматенга',
      ),
      35 => 
      array (
        'code' => 'SEN',
        'name' => 'Сено',
      ),
      36 => 
      array (
        'code' => 'SIS',
        'name' => 'Сиссили',
      ),
      37 => 
      array (
        'code' => 'SOM',
        'name' => 'Сум',
      ),
      38 => 
      array (
        'code' => 'SOR',
        'name' => 'Суру',
      ),
      39 => 
      array (
        'code' => 'TAP',
        'name' => 'Тапоа',
      ),
      40 => 
      array (
        'code' => 'TUY',
        'name' => 'Тюи',
      ),
      41 => 
      array (
        'code' => 'YAG',
        'name' => 'Яга',
      ),
      42 => 
      array (
        'code' => 'YAT',
        'name' => 'Ятенга',
      ),
      43 => 
      array (
        'code' => 'ZIR',
        'name' => 'Зиро',
      ),
      44 => 
      array (
        'code' => 'ZOD',
        'name' => 'Зондома',
      ),
      45 => 
      array (
        'code' => 'ZOW',
        'name' => 'Зундвеого',
      ),
    ),
    'BG' => 
    array (
      1 => 
      array (
        'code' => 'BG-01',
        'name' => 'Благоевград',
      ),
      2 => 
      array (
        'code' => 'BG-02',
        'name' => 'Бургас',
      ),
      3 => 
      array (
        'code' => 'BG-03',
        'name' => 'Добрич',
      ),
      4 => 
      array (
        'code' => 'BG-04',
        'name' => 'Габрово',
      ),
      5 => 
      array (
        'code' => 'BG-05',
        'name' => 'Хасково',
      ),
      6 => 
      array (
        'code' => 'BG-06',
        'name' => 'Кырджали',
      ),
      7 => 
      array (
        'code' => 'BG-07',
        'name' => 'Кюстендил',
      ),
      8 => 
      array (
        'code' => 'BG-08',
        'name' => 'Ловеч',
      ),
      9 => 
      array (
        'code' => 'BG-09',
        'name' => 'Монтана',
      ),
      10 => 
      array (
        'code' => 'BG-10',
        'name' => 'Пазарджик',
      ),
      11 => 
      array (
        'code' => 'BG-11',
        'name' => 'Перник',
      ),
      12 => 
      array (
        'code' => 'BG-12',
        'name' => 'Плевен',
      ),
      13 => 
      array (
        'code' => 'BG-13',
        'name' => 'Пловдив',
      ),
      14 => 
      array (
        'code' => 'BG-14',
        'name' => 'Разград',
      ),
      15 => 
      array (
        'code' => 'BG-15',
        'name' => 'Шумен',
      ),
      16 => 
      array (
        'code' => 'BG-16',
        'name' => 'Силистра',
      ),
      17 => 
      array (
        'code' => 'BG-17',
        'name' => 'Сливен',
      ),
      18 => 
      array (
        'code' => 'BG-18',
        'name' => 'Смолян',
      ),
      19 => 
      array (
        'code' => 'BG-19',
        'name' => 'София',
      ),
      20 => 
      array (
        'code' => 'BG-20',
        'name' => 'София',
      ),
      21 => 
      array (
        'code' => 'BG-21',
        'name' => 'Стара-Загора',
      ),
      22 => 
      array (
        'code' => 'BG-22',
        'name' => 'Тырговиште',
      ),
      23 => 
      array (
        'code' => 'BG-23',
        'name' => 'Варна',
      ),
      24 => 
      array (
        'code' => 'BG-24',
        'name' => 'Велико-Тырново',
      ),
      25 => 
      array (
        'code' => 'BG-25',
        'name' => 'Видин',
      ),
      26 => 
      array (
        'code' => 'BG-26',
        'name' => 'Враца',
      ),
      27 => 
      array (
        'code' => 'BG-27',
        'name' => 'Ямбол',
      ),
    ),
    'BH' => 
    array (
      1 => 
      array (
        'code' => 'CAP',
        'name' => 'Столичная провинция',
      ),
      2 => 
      array (
        'code' => 'CEN',
        'name' => 'Центральная провинция',
      ),
      3 => 
      array (
        'code' => 'MUH',
        'name' => 'Мухаррак',
      ),
      4 => 
      array (
        'code' => 'NOR',
        'name' => 'Северная провинция',
      ),
      5 => 
      array (
        'code' => 'SOU',
        'name' => 'Южная провинция',
      ),
    ),
    'BI' => 
    array (
      1 => 
      array (
        'code' => 'BB',
        'name' => 'Бубанза',
      ),
      2 => 
      array (
        'code' => 'BJ',
        'name' => 'Бужумбура',
      ),
      3 => 
      array (
        'code' => 'BR',
        'name' => 'Бурури',
      ),
      4 => 
      array (
        'code' => 'CA',
        'name' => 'Чанкузо',
      ),
      5 => 
      array (
        'code' => 'CI',
        'name' => 'Чибитоке',
      ),
      6 => 
      array (
        'code' => 'GI',
        'name' => 'Гитега',
      ),
      7 => 
      array (
        'code' => 'KR',
        'name' => 'Карузи',
      ),
      8 => 
      array (
        'code' => 'KY',
        'name' => 'Каянза',
      ),
      9 => 
      array (
        'code' => 'KI',
        'name' => 'Кирундо',
      ),
      10 => 
      array (
        'code' => 'MA',
        'name' => 'Макамба',
      ),
      11 => 
      array (
        'code' => 'MU',
        'name' => 'Мурамвья',
      ),
      12 => 
      array (
        'code' => 'MY',
        'name' => 'Муйинга',
      ),
      13 => 
      array (
        'code' => 'MW',
        'name' => 'Мваро',
      ),
      14 => 
      array (
        'code' => 'NG',
        'name' => 'Нгози',
      ),
      15 => 
      array (
        'code' => 'RT',
        'name' => 'Рутана',
      ),
      16 => 
      array (
        'code' => 'RY',
        'name' => 'Руйиги',
      ),
    ),
    'BJ' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Алибори',
      ),
      2 => 
      array (
        'code' => 'AK',
        'name' => 'Атакора',
      ),
      3 => 
      array (
        'code' => 'AQ',
        'name' => 'Атлантик',
      ),
      4 => 
      array (
        'code' => 'BO',
        'name' => 'Боргу',
      ),
      5 => 
      array (
        'code' => 'CO',
        'name' => 'Коллинз',
      ),
      6 => 
      array (
        'code' => 'DO',
        'name' => 'Донга',
      ),
      7 => 
      array (
        'code' => 'KO',
        'name' => 'Куффо',
      ),
      8 => 
      array (
        'code' => 'LI',
        'name' => 'Литораль',
      ),
      9 => 
      array (
        'code' => 'MO',
        'name' => 'Моно',
      ),
      10 => 
      array (
        'code' => 'OU',
        'name' => 'Уэме',
      ),
      11 => 
      array (
        'code' => 'PL',
        'name' => 'Плато',
      ),
      12 => 
      array (
        'code' => 'ZO',
        'name' => 'Зу',
      ),
    ),
    'BM' => 
    array (
      1 => 
      array (
        'code' => 'DS',
        'name' => 'Девон',
      ),
      2 => 
      array (
        'code' => 'HC',
        'name' => 'Гамильтон',
      ),
      3 => 
      array (
        'code' => 'HA',
        'name' => 'Гамильтон',
      ),
      4 => 
      array (
        'code' => 'PG',
        'name' => 'Пейджет',
      ),
      5 => 
      array (
        'code' => 'PB',
        'name' => 'Пембрук',
      ),
      6 => 
      array (
        'code' => 'GC',
        'name' => 'Сент-Джордж',
      ),
      7 => 
      array (
        'code' => 'SG',
        'name' => 'Сент-Джордж',
      ),
      8 => 
      array (
        'code' => 'SA',
        'name' => 'Сэндис',
      ),
      9 => 
      array (
        'code' => 'SM',
        'name' => 'Смит',
      ),
      10 => 
      array (
        'code' => 'SH',
        'name' => 'Саутгемптон',
      ),
      11 => 
      array (
        'code' => 'WA',
        'name' => 'Уорик',
      ),
    ),
    'BN' => 
    array (
      1 => 
      array (
        'code' => 'BEL',
        'name' => 'Белайт',
      ),
      2 => 
      array (
        'code' => 'BRM',
        'name' => 'Бруней-Муара',
      ),
      3 => 
      array (
        'code' => 'TEM',
        'name' => 'Тембуронг',
      ),
      4 => 
      array (
        'code' => 'TUT',
        'name' => 'Тутонг',
      ),
    ),
    'BO' => 
    array (
      1 => 
      array (
        'code' => 'BEN',
        'name' => 'Бени',
      ),
      2 => 
      array (
        'code' => 'CHU',
        'name' => 'Чукисака',
      ),
      3 => 
      array (
        'code' => 'COC',
        'name' => 'Кочабамба',
      ),
      4 => 
      array (
        'code' => 'LPZ',
        'name' => 'Ла-Пас',
      ),
      5 => 
      array (
        'code' => 'ORU',
        'name' => 'Оруро',
      ),
      6 => 
      array (
        'code' => 'PAN',
        'name' => 'Пандо',
      ),
      7 => 
      array (
        'code' => 'POT',
        'name' => 'Потоси',
      ),
      8 => 
      array (
        'code' => 'SCZ',
        'name' => 'Санта-Крус',
      ),
      9 => 
      array (
        'code' => 'TAR',
        'name' => 'Тариха',
      ),
    ),
    'BR' => 
    array (
      1 => 
      array (
        'code' => 'AC',
        'name' => 'Акри',
      ),
      2 => 
      array (
        'code' => 'AL',
        'name' => 'Алагоас',
      ),
      3 => 
      array (
        'code' => 'AP',
        'name' => 'Амапа',
      ),
      4 => 
      array (
        'code' => 'AM',
        'name' => 'Амазонас',
      ),
      5 => 
      array (
        'code' => 'BA',
        'name' => 'Баия',
      ),
      6 => 
      array (
        'code' => 'CE',
        'name' => 'Сеара',
      ),
      7 => 
      array (
        'code' => 'DF',
        'name' => 'Федеральный округ',
      ),
      8 => 
      array (
        'code' => 'ES',
        'name' => 'Эспириту-Санту',
      ),
      9 => 
      array (
        'code' => 'GO',
        'name' => 'Гояс',
      ),
      10 => 
      array (
        'code' => 'MA',
        'name' => 'Мараньян',
      ),
      11 => 
      array (
        'code' => 'MT',
        'name' => 'Мату-Гросу',
      ),
      12 => 
      array (
        'code' => 'MS',
        'name' => 'Мату-Гросу-ду-Сул',
      ),
      13 => 
      array (
        'code' => 'MG',
        'name' => 'Минас-Жерайс',
      ),
      14 => 
      array (
        'code' => 'PA',
        'name' => 'Пара',
      ),
      15 => 
      array (
        'code' => 'PB',
        'name' => 'Параиба',
      ),
      16 => 
      array (
        'code' => 'PR',
        'name' => 'Парана',
      ),
      17 => 
      array (
        'code' => 'PE',
        'name' => 'Пернамбуку',
      ),
      18 => 
      array (
        'code' => 'PI',
        'name' => 'Пиауи',
      ),
      19 => 
      array (
        'code' => 'RJ',
        'name' => 'Рио-де-Жанейро',
      ),
      20 => 
      array (
        'code' => 'RN',
        'name' => 'Риу-Гранди-ду-Норти',
      ),
      21 => 
      array (
        'code' => 'RS',
        'name' => 'Риу-Гранди-ду-Сул',
      ),
      22 => 
      array (
        'code' => 'RO',
        'name' => 'Рондония',
      ),
      23 => 
      array (
        'code' => 'RR',
        'name' => 'Рорайма',
      ),
      24 => 
      array (
        'code' => 'SC',
        'name' => 'Санта-Катарина',
      ),
      25 => 
      array (
        'code' => 'SP',
        'name' => 'Сан-Паулу',
      ),
      26 => 
      array (
        'code' => 'SE',
        'name' => 'Сержипи',
      ),
      27 => 
      array (
        'code' => 'TO',
        'name' => 'Токантинс',
      ),
    ),
    'BS' => 
    array (
      1 => 
      array (
        'code' => 'ACK',
        'name' => 'Аклинс',
      ),
      2 => 
      array (
        'code' => 'BER',
        'name' => 'Берри',
      ),
      3 => 
      array (
        'code' => 'BIM',
        'name' => 'Бимини',
      ),
      4 => 
      array (
        'code' => 'BLK',
        'name' => 'Блэк Пойнт',
      ),
      5 => 
      array (
        'code' => 'CAT',
        'name' => 'Кэт',
      ),
      6 => 
      array (
        'code' => 'CAB',
        'name' => 'Сентрал Абако',
      ),
      7 => 
      array (
        'code' => 'CAN',
        'name' => 'Центральный Андрос',
      ),
      8 => 
      array (
        'code' => 'CEL',
        'name' => 'Эльютера',
      ),
      9 => 
      array (
        'code' => 'FRE',
        'name' => 'Фрипорт',
      ),
      10 => 
      array (
        'code' => 'CRO',
        'name' => 'Крукед-Айленд',
      ),
      11 => 
      array (
        'code' => 'EGB',
        'name' => 'Восточный Большой Багама',
      ),
      12 => 
      array (
        'code' => 'EXU',
        'name' => 'Эксума',
      ),
      13 => 
      array (
        'code' => 'GRD',
        'name' => 'Гранд-Ки',
      ),
      14 => 
      array (
        'code' => 'HAR',
        'name' => 'Харбор Айленд',
      ),
      15 => 
      array (
        'code' => 'HOP',
        'name' => 'Хоп Таун',
      ),
      16 => 
      array (
        'code' => 'INA',
        'name' => 'Инагуа',
      ),
      17 => 
      array (
        'code' => 'LNG',
        'name' => 'Лонг-Айленд',
      ),
      18 => 
      array (
        'code' => 'MAN',
        'name' => 'Мангров-Ки',
      ),
      19 => 
      array (
        'code' => 'MAY',
        'name' => 'Маягуана',
      ),
      20 => 
      array (
        'code' => 'MOO',
        'name' => 'Остров Морс',
      ),
      21 => 
      array (
        'code' => 'NAB',
        'name' => 'Север Абако',
      ),
      22 => 
      array (
        'code' => 'NAN',
        'name' => 'Север Эндрос',
      ),
      23 => 
      array (
        'code' => 'NEL',
        'name' => 'Север Эльютера',
      ),
      24 => 
      array (
        'code' => 'RAG',
        'name' => 'Рэггид-Айленд',
      ),
      25 => 
      array (
        'code' => 'RUM',
        'name' => 'Рам-Ки',
      ),
      26 => 
      array (
        'code' => 'SAL',
        'name' => 'Сан-Сальвадор',
      ),
      27 => 
      array (
        'code' => 'SAB',
        'name' => 'Южный Абако',
      ),
      28 => 
      array (
        'code' => 'SAN',
        'name' => 'Южный Андрос',
      ),
      29 => 
      array (
        'code' => 'SEL',
        'name' => 'Южная Эльютера',
      ),
      30 => 
      array (
        'code' => 'SWE',
        'name' => 'Спэниш-Уэллс',
      ),
      31 => 
      array (
        'code' => 'WGB',
        'name' => 'Западный Большой Багама',
      ),
    ),
    'BT' => 
    array (
      1 => 
      array (
        'code' => 'BUM',
        'name' => 'Бумтанг',
      ),
      2 => 
      array (
        'code' => 'CHU',
        'name' => 'Чукха',
      ),
      3 => 
      array (
        'code' => 'DAG',
        'name' => 'Дагана',
      ),
      4 => 
      array (
        'code' => 'GAS',
        'name' => 'Гаса',
      ),
      5 => 
      array (
        'code' => 'HAA',
        'name' => 'Хаа',
      ),
      6 => 
      array (
        'code' => 'LHU',
        'name' => 'Лхунце',
      ),
      7 => 
      array (
        'code' => 'MON',
        'name' => 'Монгар',
      ),
      8 => 
      array (
        'code' => 'PAR',
        'name' => 'Паро',
      ),
      9 => 
      array (
        'code' => 'PEM',
        'name' => 'Пемагацел',
      ),
      10 => 
      array (
        'code' => 'PUN',
        'name' => 'Пунакха',
      ),
      11 => 
      array (
        'code' => 'SJO',
        'name' => 'Самдруп-Джонгхар',
      ),
      12 => 
      array (
        'code' => 'SAT',
        'name' => 'Самце',
      ),
      13 => 
      array (
        'code' => 'SAR',
        'name' => 'Сарпанг',
      ),
      14 => 
      array (
        'code' => 'THI',
        'name' => 'Тхимпху',
      ),
      15 => 
      array (
        'code' => 'TRG',
        'name' => 'Трашиганг',
      ),
      16 => 
      array (
        'code' => 'TRY',
        'name' => 'Трашиянгце',
      ),
      17 => 
      array (
        'code' => 'TRO',
        'name' => 'Trongsa',
      ),
      18 => 
      array (
        'code' => 'TSI',
        'name' => 'Циранг',
      ),
      19 => 
      array (
        'code' => 'WPH',
        'name' => 'Вангди-Пходранг',
      ),
      20 => 
      array (
        'code' => 'ZHE',
        'name' => 'Жемганг',
      ),
    ),
    'BW' => 
    array (
      1 => 
      array (
        'code' => 'CE',
        'name' => 'Центральный округ',
      ),
      2 => 
      array (
        'code' => 'GH',
        'name' => 'Ганзи',
      ),
      3 => 
      array (
        'code' => 'KD',
        'name' => 'Кгалагади',
      ),
      4 => 
      array (
        'code' => 'KT',
        'name' => 'Кгатленг',
      ),
      5 => 
      array (
        'code' => 'KW',
        'name' => 'Квененг',
      ),
      6 => 
      array (
        'code' => 'NG',
        'name' => 'Нгамиленд',
      ),
      7 => 
      array (
        'code' => 'NE',
        'name' => 'Северо-Восточный округ',
      ),
      8 => 
      array (
        'code' => 'NW',
        'name' => 'Северо-Западный округ',
      ),
      9 => 
      array (
        'code' => 'SE',
        'name' => 'Юго-Восточный округ',
      ),
      10 => 
      array (
        'code' => 'SO',
        'name' => 'Южный округ',
      ),
    ),
    'BY' => 
    array (
      1 => 
      array (
        'code' => 'BR',
        'name' => 'Брест',
      ),
      2 => 
      array (
        'code' => 'HO',
        'name' => 'Гомель',
      ),
      3 => 
      array (
        'code' => 'HM',
        'name' => 'Минск',
      ),
      4 => 
      array (
        'code' => 'HR',
        'name' => 'Гродно',
      ),
      5 => 
      array (
        'code' => 'MA',
        'name' => 'Могилёв',
      ),
      6 => 
      array (
        'code' => 'MI',
        'name' => 'Минская область',
      ),
      7 => 
      array (
        'code' => 'VI',
        'name' => 'Витебск',
      ),
    ),
    'BZ' => 
    array (
      1 => 
      array (
        'code' => 'BZ',
        'name' => 'Белиз',
      ),
      2 => 
      array (
        'code' => 'CY',
        'name' => 'Кайо',
      ),
      3 => 
      array (
        'code' => 'CR',
        'name' => 'Коросаль',
      ),
      4 => 
      array (
        'code' => 'OW',
        'name' => 'Ориндж-Уолк',
      ),
      5 => 
      array (
        'code' => 'SC',
        'name' => 'Станн-Крик',
      ),
      6 => 
      array (
        'code' => 'TO',
        'name' => 'Толедо',
      ),
    ),
    'CA' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Альберта',
      ),
      2 => 
      array (
        'code' => 'BC',
        'name' => 'Британская Колумбия',
      ),
      3 => 
      array (
        'code' => 'MB',
        'name' => 'Манитоба',
      ),
      4 => 
      array (
        'code' => 'NB',
        'name' => 'Нью-Брансуик',
      ),
      5 => 
      array (
        'code' => 'NL',
        'name' => 'Ньюфаундленд и Лабрадор',
      ),
      6 => 
      array (
        'code' => 'NT',
        'name' => 'Северо-Западные территории',
      ),
      7 => 
      array (
        'code' => 'NS',
        'name' => 'Новая Шотландия',
      ),
      8 => 
      array (
        'code' => 'NU',
        'name' => 'Нунавут',
      ),
      9 => 
      array (
        'code' => 'ON',
        'name' => 'Онтарио',
      ),
      10 => 
      array (
        'code' => 'PE',
        'name' => 'Остров Принца Эдуарда',
      ),
      11 => 
      array (
        'code' => 'QC',
        'name' => 'Квебек',
      ),
      12 => 
      array (
        'code' => 'SK',
        'name' => 'Саскачеван',
      ),
      13 => 
      array (
        'code' => 'YT',
        'name' => 'Юкон',
      ),
    ),
    'CC' => 
    array (
      1 => 
      array (
        'code' => 'D',
        'name' => 'Остров Дирекшен',
      ),
      2 => 
      array (
        'code' => 'H',
        'name' => 'Хом',
      ),
      3 => 
      array (
        'code' => 'O',
        'name' => 'Остров Хорсберг',
      ),
      4 => 
      array (
        'code' => 'S',
        'name' => 'Саут-Айленд',
      ),
      5 => 
      array (
        'code' => 'W',
        'name' => 'Уэст-Айленд',
      ),
    ),
    'CF' => 
    array (
      1 => 
      array (
        'code' => 'BAN',
        'name' => 'Банги',
      ),
      2 => 
      array (
        'code' => 'BBA',
        'name' => 'Баминги-Бангоран',
      ),
      3 => 
      array (
        'code' => 'BKO',
        'name' => 'Нижнее Котто',
      ),
      4 => 
      array (
        'code' => 'HKO',
        'name' => 'Верхнее Котто',
      ),
      5 => 
      array (
        'code' => 'HMB',
        'name' => 'Верхнее Мбому',
      ),
      6 => 
      array (
        'code' => 'KEM',
        'name' => 'Кемо',
      ),
      7 => 
      array (
        'code' => 'LOB',
        'name' => 'Лобае',
      ),
      8 => 
      array (
        'code' => 'MBO',
        'name' => 'Мбому',
      ),
      9 => 
      array (
        'code' => 'MKD',
        'name' => 'Мамбере-Кадеи',
      ),
      10 => 
      array (
        'code' => 'NGR',
        'name' => 'Нана-Гребизи',
      ),
      11 => 
      array (
        'code' => 'NMM',
        'name' => 'Нана-Мамбере',
      ),
      12 => 
      array (
        'code' => 'OMP',
        'name' => 'Омбелла-Мпоко',
      ),
      13 => 
      array (
        'code' => 'OPE',
        'name' => 'Уам-Пенде',
      ),
      14 => 
      array (
        'code' => 'OUH',
        'name' => 'Уам',
      ),
      15 => 
      array (
        'code' => 'OUK',
        'name' => 'Уака',
      ),
      16 => 
      array (
        'code' => 'SMB',
        'name' => 'Санга-Мбаэре',
      ),
      17 => 
      array (
        'code' => 'VAK',
        'name' => 'Вакага',
      ),
    ),
    'CG' => 
    array (
      1 => 
      array (
        'code' => 'BO',
        'name' => 'Буэнза',
      ),
      2 => 
      array (
        'code' => 'BR',
        'name' => 'Браззавиль',
      ),
      3 => 
      array (
        'code' => 'CU',
        'name' => 'Кювет',
      ),
      4 => 
      array (
        'code' => 'CO',
        'name' => 'Западный Кювет',
      ),
      5 => 
      array (
        'code' => 'KO',
        'name' => 'Куилу',
      ),
      6 => 
      array (
        'code' => 'LE',
        'name' => 'Лекуму',
      ),
      7 => 
      array (
        'code' => 'LI',
        'name' => 'Ликуала',
      ),
      8 => 
      array (
        'code' => 'NI',
        'name' => 'Ниари',
      ),
      9 => 
      array (
        'code' => 'PL',
        'name' => 'Плато',
      ),
      10 => 
      array (
        'code' => 'PO',
        'name' => 'Пул',
      ),
      11 => 
      array (
        'code' => 'SA',
        'name' => 'Санга',
      ),
    ),
    'CI' => 
    array (
      1 => 
      array (
        'code' => 'ABE',
        'name' => 'Абенгуру',
      ),
      2 => 
      array (
        'code' => 'ABI',
        'name' => 'Абиджан',
      ),
      3 => 
      array (
        'code' => 'ABO',
        'name' => 'Абоисо',
      ),
      4 => 
      array (
        'code' => 'ADI',
        'name' => 'Адиаке',
      ),
      5 => 
      array (
        'code' => 'ADZ',
        'name' => 'Адзопе',
      ),
      6 => 
      array (
        'code' => 'AGB',
        'name' => 'Агбовиль',
      ),
      7 => 
      array (
        'code' => 'AGN',
        'name' => 'Аньибилекру',
      ),
      8 => 
      array (
        'code' => 'ALE',
        'name' => 'Алепе',
      ),
      9 => 
      array (
        'code' => 'BOC',
        'name' => 'Боканда',
      ),
      10 => 
      array (
        'code' => 'BAN',
        'name' => 'Банголо',
      ),
      11 => 
      array (
        'code' => 'BEO',
        'name' => 'Беуми',
      ),
      12 => 
      array (
        'code' => 'BIA',
        'name' => 'Бьянкума',
      ),
      13 => 
      array (
        'code' => 'BDK',
        'name' => 'Бондуку',
      ),
      14 => 
      array (
        'code' => 'BGN',
        'name' => 'Бонгуану',
      ),
      15 => 
      array (
        'code' => 'BFL',
        'name' => 'Буафле',
      ),
      16 => 
      array (
        'code' => 'BKE',
        'name' => 'Буаке',
      ),
      17 => 
      array (
        'code' => 'BNA',
        'name' => 'Буна',
      ),
      18 => 
      array (
        'code' => 'BDL',
        'name' => 'Бундиали',
      ),
      19 => 
      array (
        'code' => 'DKL',
        'name' => 'Дабакала',
      ),
      20 => 
      array (
        'code' => 'DBU',
        'name' => 'Дабу',
      ),
      21 => 
      array (
        'code' => 'DAL',
        'name' => 'Далоа',
      ),
      22 => 
      array (
        'code' => 'DAN',
        'name' => 'Данане',
      ),
      23 => 
      array (
        'code' => 'DAO',
        'name' => 'Даукро',
      ),
      24 => 
      array (
        'code' => 'DIM',
        'name' => 'Димбокро',
      ),
      25 => 
      array (
        'code' => 'DIV',
        'name' => 'Диво',
      ),
      26 => 
      array (
        'code' => 'DUE',
        'name' => 'Дуэкуэ',
      ),
      27 => 
      array (
        'code' => 'FER',
        'name' => 'Феркеседугу',
      ),
      28 => 
      array (
        'code' => 'GAG',
        'name' => 'Ганьоа',
      ),
      29 => 
      array (
        'code' => 'GBA',
        'name' => 'Гран-Басам',
      ),
      30 => 
      array (
        'code' => 'GLA',
        'name' => 'Гран-Лау',
      ),
      31 => 
      array (
        'code' => 'GUI',
        'name' => 'Гигло',
      ),
      32 => 
      array (
        'code' => 'ISS',
        'name' => 'Исиа',
      ),
      33 => 
      array (
        'code' => 'JAC',
        'name' => 'Жаквиль',
      ),
      34 => 
      array (
        'code' => 'KAT',
        'name' => 'Катиола',
      ),
      35 => 
      array (
        'code' => 'KOR',
        'name' => 'Корого',
      ),
      36 => 
      array (
        'code' => 'LAK',
        'name' => 'Лакота',
      ),
      37 => 
      array (
        'code' => 'MAN',
        'name' => 'Ман',
      ),
      38 => 
      array (
        'code' => 'MKN',
        'name' => 'Манкено',
      ),
      39 => 
      array (
        'code' => 'MBA',
        'name' => 'Мбаиакро',
      ),
      40 => 
      array (
        'code' => 'ODI',
        'name' => 'Одиенне',
      ),
      41 => 
      array (
        'code' => 'OUM',
        'name' => 'Уме',
      ),
      42 => 
      array (
        'code' => 'SAK',
        'name' => 'Сакасу',
      ),
      43 => 
      array (
        'code' => 'SPE',
        'name' => 'Сан-Педро',
      ),
      44 => 
      array (
        'code' => 'SAS',
        'name' => 'Сасандра',
      ),
      45 => 
      array (
        'code' => 'SEG',
        'name' => 'Сегела',
      ),
      46 => 
      array (
        'code' => 'SIN',
        'name' => 'Синфра',
      ),
      47 => 
      array (
        'code' => 'SOU',
        'name' => 'Субре',
      ),
      48 => 
      array (
        'code' => 'TAB',
        'name' => 'Табу',
      ),
      49 => 
      array (
        'code' => 'TAN',
        'name' => 'Танда',
      ),
      50 => 
      array (
        'code' => 'TIE',
        'name' => 'Тьебису',
      ),
      51 => 
      array (
        'code' => 'TIN',
        'name' => 'Тингрела',
      ),
      52 => 
      array (
        'code' => 'TIA',
        'name' => 'Тиассале',
      ),
      53 => 
      array (
        'code' => 'TBA',
        'name' => 'Туба',
      ),
      54 => 
      array (
        'code' => 'TLP',
        'name' => 'Тоулеплеу',
      ),
      55 => 
      array (
        'code' => 'TMD',
        'name' => 'Тоумоди',
      ),
      56 => 
      array (
        'code' => 'VAV',
        'name' => 'Вавуа',
      ),
      57 => 
      array (
        'code' => 'YAM',
        'name' => 'Ямусукро',
      ),
      58 => 
      array (
        'code' => 'ZUE',
        'name' => 'Зуеноула',
      ),
    ),
    'CK' => 
    array (
      1 => 
      array (
        'code' => 'AI',
        'name' => 'Аитутаки',
      ),
      2 => 
      array (
        'code' => 'AT',
        'name' => 'Атиу',
      ),
      3 => 
      array (
        'code' => 'MA',
        'name' => 'Мануаэ',
      ),
      4 => 
      array (
        'code' => 'MG',
        'name' => 'Мангаиа',
      ),
      5 => 
      array (
        'code' => 'MK',
        'name' => 'Манихики',
      ),
      6 => 
      array (
        'code' => 'MT',
        'name' => 'Митиаро',
      ),
      7 => 
      array (
        'code' => 'MU',
        'name' => 'Мауке',
      ),
      8 => 
      array (
        'code' => 'NI',
        'name' => 'Нассау',
      ),
      9 => 
      array (
        'code' => 'PA',
        'name' => 'Палмерстон',
      ),
      10 => 
      array (
        'code' => 'PE',
        'name' => 'Пенрин',
      ),
      11 => 
      array (
        'code' => 'PU',
        'name' => 'Пукапука',
      ),
      12 => 
      array (
        'code' => 'RK',
        'name' => 'Ракаханга',
      ),
      13 => 
      array (
        'code' => 'RR',
        'name' => 'Раротонга',
      ),
      14 => 
      array (
        'code' => 'SU',
        'name' => 'Атолл Суворова',
      ),
      15 => 
      array (
        'code' => 'TA',
        'name' => 'Такутеа',
      ),
    ),
    'CL' => 
    array (
      1 => 
      array (
        'code' => 'AI',
        'name' => 'Айсен',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'Антофагаста',
      ),
      3 => 
      array (
        'code' => 'AR',
        'name' => 'Араукания',
      ),
      4 => 
      array (
        'code' => 'AT',
        'name' => 'Атакама',
      ),
      5 => 
      array (
        'code' => 'BI',
        'name' => 'Био-Био',
      ),
      6 => 
      array (
        'code' => 'CO',
        'name' => 'Кокимбо',
      ),
      7 => 
      array (
        'code' => 'LI',
        'name' => 'Либертадор-Хенераль-Бернардо-О/’Хиггинс',
      ),
      8 => 
      array (
        'code' => 'LL',
        'name' => 'Лос-Лагос',
      ),
      9 => 
      array (
        'code' => 'MA',
        'name' => 'Магальянес-и-ла-Антарктика-Чилена',
      ),
      10 => 
      array (
        'code' => 'ML',
        'name' => 'Мауле',
      ),
      11 => 
      array (
        'code' => 'RM',
        'name' => 'Столичная область',
      ),
      12 => 
      array (
        'code' => 'TA',
        'name' => 'Тарапака',
      ),
      13 => 
      array (
        'code' => 'VS',
        'name' => 'Вальпараисо',
      ),
    ),
    'CM' => 
    array (
      1 => 
      array (
        'code' => 'ADA',
        'name' => 'Адамава',
      ),
      2 => 
      array (
        'code' => 'CEN',
        'name' => 'Центральный регион',
      ),
      3 => 
      array (
        'code' => 'EST',
        'name' => 'Восточный регион',
      ),
      4 => 
      array (
        'code' => 'EXN',
        'name' => 'Крайнесеверный регион',
      ),
      5 => 
      array (
        'code' => 'LIT',
        'name' => 'Прибрежный регион',
      ),
      6 => 
      array (
        'code' => 'NOR',
        'name' => 'Северный регион',
      ),
      7 => 
      array (
        'code' => 'NOT',
        'name' => 'Северо-Западный регион',
      ),
      8 => 
      array (
        'code' => 'OUE',
        'name' => 'Запад',
      ),
      9 => 
      array (
        'code' => 'SUD',
        'name' => 'Южный регион',
      ),
      10 => 
      array (
        'code' => 'SOU',
        'name' => 'Юго-Западный регион',
      ),
    ),
    'CN' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Аньхой',
      ),
      2 => 
      array (
        'code' => 'BE',
        'name' => 'Пекин',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'Чунцин',
      ),
      4 => 
      array (
        'code' => 'FU',
        'name' => 'Фуцзянь',
      ),
      5 => 
      array (
        'code' => 'GA',
        'name' => 'Ганьсу',
      ),
      6 => 
      array (
        'code' => 'GU',
        'name' => 'Гуандун',
      ),
      7 => 
      array (
        'code' => 'GX',
        'name' => 'Гуанси-Чжуанский автономный район',
      ),
      8 => 
      array (
        'code' => 'GZ',
        'name' => 'Гуйчжоу',
      ),
      9 => 
      array (
        'code' => 'HA',
        'name' => 'Хайнань',
      ),
      10 => 
      array (
        'code' => 'HB',
        'name' => 'Хэбэй',
      ),
      11 => 
      array (
        'code' => 'HL',
        'name' => 'Хэйлунцзян',
      ),
      12 => 
      array (
        'code' => 'HE',
        'name' => 'Хэнань',
      ),
      13 => 
      array (
        'code' => 'HK',
        'name' => 'Гонконг',
      ),
      14 => 
      array (
        'code' => 'HU',
        'name' => 'Хубэй',
      ),
      15 => 
      array (
        'code' => 'HN',
        'name' => 'Хунань',
      ),
      16 => 
      array (
        'code' => 'IM',
        'name' => 'Внутренняя Монголия',
      ),
      17 => 
      array (
        'code' => 'JI',
        'name' => 'Цзянсу',
      ),
      18 => 
      array (
        'code' => 'JX',
        'name' => 'Цзянси',
      ),
      19 => 
      array (
        'code' => 'JL',
        'name' => 'Гирин',
      ),
      20 => 
      array (
        'code' => 'LI',
        'name' => 'Ляонин',
      ),
      21 => 
      array (
        'code' => 'MA',
        'name' => 'Макао',
      ),
      22 => 
      array (
        'code' => 'NI',
        'name' => 'Нинся-Хуэйский автономный район',
      ),
      23 => 
      array (
        'code' => 'SH',
        'name' => 'Шэньси',
      ),
      24 => 
      array (
        'code' => 'SA',
        'name' => 'Шаньдун',
      ),
      25 => 
      array (
        'code' => 'SG',
        'name' => 'Шанхай',
      ),
      26 => 
      array (
        'code' => 'SX',
        'name' => 'Шаньси',
      ),
      27 => 
      array (
        'code' => 'SI',
        'name' => 'Сычуань',
      ),
      28 => 
      array (
        'code' => 'TI',
        'name' => 'Тяньцзинь',
      ),
      29 => 
      array (
        'code' => 'XI',
        'name' => 'Синьцзян-Уйгурский автономный район',
      ),
      30 => 
      array (
        'code' => 'YU',
        'name' => 'Юньнань',
      ),
      31 => 
      array (
        'code' => 'ZH',
        'name' => 'Чжэцзян',
      ),
    ),
    'CO' => 
    array (
      1 => 
      array (
        'code' => 'AMZ',
        'name' => 'Амазонас',
      ),
      2 => 
      array (
        'code' => 'ANT',
        'name' => 'Антьокия',
      ),
      3 => 
      array (
        'code' => 'ARA',
        'name' => 'Араука',
      ),
      4 => 
      array (
        'code' => 'ATL',
        'name' => 'Атлантико',
      ),
      5 => 
      array (
        'code' => 'BDC',
        'name' => 'Богота',
      ),
      6 => 
      array (
        'code' => 'BOL',
        'name' => 'Боливар',
      ),
      7 => 
      array (
        'code' => 'BOY',
        'name' => 'Бояка',
      ),
      8 => 
      array (
        'code' => 'CAL',
        'name' => 'Кальдас',
      ),
      9 => 
      array (
        'code' => 'CAQ',
        'name' => 'Какета',
      ),
      10 => 
      array (
        'code' => 'CAS',
        'name' => 'Касанаре',
      ),
      11 => 
      array (
        'code' => 'CAU',
        'name' => 'Каука',
      ),
      12 => 
      array (
        'code' => 'CES',
        'name' => 'Сесар',
      ),
      13 => 
      array (
        'code' => 'CHO',
        'name' => 'Чоко',
      ),
      14 => 
      array (
        'code' => 'COR',
        'name' => 'Кордова',
      ),
      15 => 
      array (
        'code' => 'CAM',
        'name' => 'Кундинамарка',
      ),
      16 => 
      array (
        'code' => 'GNA',
        'name' => 'Гуайния',
      ),
      17 => 
      array (
        'code' => 'GJR',
        'name' => 'Гуахира',
      ),
      18 => 
      array (
        'code' => 'GVR',
        'name' => 'Гуавьяре',
      ),
      19 => 
      array (
        'code' => 'HUI',
        'name' => 'Уила',
      ),
      20 => 
      array (
        'code' => 'MAG',
        'name' => 'Магдалена',
      ),
      21 => 
      array (
        'code' => 'MET',
        'name' => 'Мета',
      ),
      22 => 
      array (
        'code' => 'NAR',
        'name' => 'Нариньо',
      ),
      23 => 
      array (
        'code' => 'NDS',
        'name' => 'Северный Сантандер',
      ),
      24 => 
      array (
        'code' => 'PUT',
        'name' => 'Путумайо',
      ),
      25 => 
      array (
        'code' => 'QUI',
        'name' => 'Киндио',
      ),
      26 => 
      array (
        'code' => 'RIS',
        'name' => 'Рисаральда',
      ),
      27 => 
      array (
        'code' => 'SAP',
        'name' => 'Сан-Андрес-и-Провиденсия',
      ),
      28 => 
      array (
        'code' => 'SAN',
        'name' => 'Сантандер',
      ),
      29 => 
      array (
        'code' => 'SUC',
        'name' => 'Сукре',
      ),
      30 => 
      array (
        'code' => 'TOL',
        'name' => 'Толима',
      ),
      31 => 
      array (
        'code' => 'VDC',
        'name' => 'Валье-дель-Каука',
      ),
      32 => 
      array (
        'code' => 'VAU',
        'name' => 'Ваупес',
      ),
      33 => 
      array (
        'code' => 'VIC',
        'name' => 'Вичада',
      ),
    ),
    'CR' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Алахуэла',
      ),
      2 => 
      array (
        'code' => 'CA',
        'name' => 'Картаго',
      ),
      3 => 
      array (
        'code' => 'GU',
        'name' => 'Гуанакасте',
      ),
      4 => 
      array (
        'code' => 'HE',
        'name' => 'Эредия',
      ),
      5 => 
      array (
        'code' => 'LI',
        'name' => 'Limon',
      ),
      6 => 
      array (
        'code' => 'PU',
        'name' => 'Пунтаренас',
      ),
      7 => 
      array (
        'code' => 'SJ',
        'name' => 'Сан-Хосе',
      ),
    ),
    'CU' => 
    array (
      1 => 
      array (
        'code' => 'CA',
        'name' => 'Камагуэй',
      ),
      2 => 
      array (
        'code' => 'CD',
        'name' => 'Сьего де Авила',
      ),
      3 => 
      array (
        'code' => 'CI',
        'name' => 'Сьенфуэгос',
      ),
      4 => 
      array (
        'code' => 'CH',
        'name' => 'Гавана',
      ),
      5 => 
      array (
        'code' => 'GR',
        'name' => 'Гранма',
      ),
      6 => 
      array (
        'code' => 'GU',
        'name' => 'Гуантанамо',
      ),
      7 => 
      array (
        'code' => 'HO',
        'name' => 'Ольгин',
      ),
      8 => 
      array (
        'code' => 'IJ',
        'name' => 'Хувентуд',
      ),
      9 => 
      array (
        'code' => 'LH',
        'name' => 'Гавана',
      ),
      10 => 
      array (
        'code' => 'LT',
        'name' => 'Лас Тунас',
      ),
      11 => 
      array (
        'code' => 'MA',
        'name' => 'Матансас',
      ),
      12 => 
      array (
        'code' => 'PR',
        'name' => 'Пинар-дель-Рио',
      ),
      13 => 
      array (
        'code' => 'SS',
        'name' => 'Санкти Спиритус',
      ),
      14 => 
      array (
        'code' => 'SC',
        'name' => 'Сантьяго-де-Куба',
      ),
      15 => 
      array (
        'code' => 'VC',
        'name' => 'Вилья-Клара',
      ),
    ),
    'CV' => 
    array (
      1 => 
      array (
        'code' => 'BV',
        'name' => 'Боавишта',
      ),
      2 => 
      array (
        'code' => 'BR',
        'name' => 'Брава',
      ),
      3 => 
      array (
        'code' => 'CS',
        'name' => 'Сао Мигел',
      ),
      4 => 
      array (
        'code' => 'MA',
        'name' => 'Маю',
      ),
      5 => 
      array (
        'code' => 'MO',
        'name' => 'Мостейрос',
      ),
      6 => 
      array (
        'code' => 'PA',
        'name' => 'Паул',
      ),
      7 => 
      array (
        'code' => 'PN',
        'name' => 'Порто-Ново',
      ),
      8 => 
      array (
        'code' => 'PR',
        'name' => 'Прая',
      ),
      9 => 
      array (
        'code' => 'RG',
        'name' => 'Рибейра-Гранди',
      ),
      10 => 
      array (
        'code' => 'SL',
        'name' => 'Сал',
      ),
      11 => 
      array (
        'code' => 'CA',
        'name' => 'Санта Катарина',
      ),
      12 => 
      array (
        'code' => 'CR',
        'name' => 'Занта Круц',
      ),
      13 => 
      array (
        'code' => 'SD',
        'name' => 'Сан-Домингуш',
      ),
      14 => 
      array (
        'code' => 'SF',
        'name' => 'Сан Филипе',
      ),
      15 => 
      array (
        'code' => 'SN',
        'name' => 'Сан-Николау',
      ),
      16 => 
      array (
        'code' => 'SV',
        'name' => 'Сан-Висенте',
      ),
      17 => 
      array (
        'code' => 'TA',
        'name' => 'Таррафал',
      ),
    ),
    'CY' => 
    array (
      1 => 
      array (
        'code' => 'F',
        'name' => 'Фамагуста',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => 'Кирения',
      ),
      3 => 
      array (
        'code' => 'A',
        'name' => 'Ларнака',
      ),
      4 => 
      array (
        'code' => 'I',
        'name' => 'Никосия',
      ),
      5 => 
      array (
        'code' => 'N',
        'name' => 'Никосия',
      ),
      6 => 
      array (
        'code' => 'P',
        'name' => 'Пафос',
      ),
    ),
    'CZ' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'Южноморавский край',
      ),
      2 => 
      array (
        'code' => 'B',
        'name' => 'Южноморавский край',
      ),
      3 => 
      array (
        'code' => 'C',
        'name' => 'Южночешский край',
      ),
      4 => 
      array (
        'code' => 'E',
        'name' => 'Пардубицкий край',
      ),
      5 => 
      array (
        'code' => 'H',
        'name' => 'Краловеградецкий край',
      ),
      6 => 
      array (
        'code' => 'J',
        'name' => 'Край Высочина',
      ),
      7 => 
      array (
        'code' => 'K',
        'name' => 'Карловарский край',
      ),
      8 => 
      array (
        'code' => 'L',
        'name' => 'Либерецкий край',
      ),
      9 => 
      array (
        'code' => 'M',
        'name' => 'Plzeňský',
      ),
      10 => 
      array (
        'code' => 'P',
        'name' => 'Пльзенский край',
      ),
      11 => 
      array (
        'code' => 'S',
        'name' => 'Среднечешский край',
      ),
      12 => 
      array (
        'code' => 'T',
        'name' => 'Моравскосилезский край',
      ),
      13 => 
      array (
        'code' => 'U',
        'name' => 'Zlínský',
      ),
      14 => 
      array (
        'code' => 'Z',
        'name' => 'Злинский край',
      ),
    ),
    'Country' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => 'Штаты',
      ),
    ),
    'DE' => 
    array (
      1 => 
      array (
        'code' => 'BAW',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'BAY',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'BER',
        'name' => '',
      ),
      4 => 
      array (
        'code' => 'BRG',
        'name' => '',
      ),
      5 => 
      array (
        'code' => 'BRE',
        'name' => '',
      ),
      6 => 
      array (
        'code' => 'HAM',
        'name' => '',
      ),
      7 => 
      array (
        'code' => 'HES',
        'name' => '',
      ),
      8 => 
      array (
        'code' => 'MEC',
        'name' => '',
      ),
      9 => 
      array (
        'code' => 'NDS',
        'name' => '',
      ),
      10 => 
      array (
        'code' => 'NRW',
        'name' => '',
      ),
      11 => 
      array (
        'code' => 'RHE',
        'name' => '',
      ),
      12 => 
      array (
        'code' => 'SAR',
        'name' => '',
      ),
      13 => 
      array (
        'code' => 'SAS',
        'name' => '',
      ),
      14 => 
      array (
        'code' => 'SAC',
        'name' => '',
      ),
      15 => 
      array (
        'code' => 'SCN',
        'name' => '',
      ),
      16 => 
      array (
        'code' => 'THE',
        'name' => '',
      ),
    ),
    'DJ' => 
    array (
      1 => 
      array (
        'code' => 'S',
        'name' => 'Али-Сабих',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => 'Дикиль',
      ),
      3 => 
      array (
        'code' => 'J',
        'name' => 'Джибути',
      ),
      4 => 
      array (
        'code' => 'O',
        'name' => 'Обок',
      ),
      5 => 
      array (
        'code' => 'T',
        'name' => 'Таджура',
      ),
    ),
    'DK' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'Орхус',
      ),
      2 => 
      array (
        'code' => 'BH',
        'name' => 'Борнхольм',
      ),
      3 => 
      array (
        'code' => 'CO',
        'name' => 'Faroe Islands',
      ),
      4 => 
      array (
        'code' => 'FO',
        'name' => 'Фарерские острова',
      ),
      5 => 
      array (
        'code' => 'FR',
        'name' => 'Фредериксборг',
      ),
      6 => 
      array (
        'code' => 'FY',
        'name' => 'Фюн',
      ),
      7 => 
      array (
        'code' => 'KO',
        'name' => 'Кобенхавн',
      ),
      8 => 
      array (
        'code' => 'NO',
        'name' => 'Северная Ютландия',
      ),
      9 => 
      array (
        'code' => 'RI',
        'name' => 'Рибе',
      ),
      10 => 
      array (
        'code' => 'RK',
        'name' => 'Рингкёбинг',
      ),
      11 => 
      array (
        'code' => 'RO',
        'name' => 'Роскилле',
      ),
      12 => 
      array (
        'code' => 'SO',
        'name' => 'Южная Ютландия',
      ),
      13 => 
      array (
        'code' => 'ST',
        'name' => 'Сторстром',
      ),
      14 => 
      array (
        'code' => 'VK',
        'name' => 'Вайле',
      ),
      15 => 
      array (
        'code' => 'VJ',
        'name' => 'Вестшелланн',
      ),
      16 => 
      array (
        'code' => 'VB',
        'name' => 'Виборг',
      ),
    ),
    'DM' => 
    array (
      1 => 
      array (
        'code' => 'AND',
        'name' => 'Сент-Эндрю',
      ),
      2 => 
      array (
        'code' => 'DAV',
        'name' => 'Saint George Parish',
      ),
      3 => 
      array (
        'code' => 'GEO',
        'name' => 'Сент-Джордж',
      ),
      4 => 
      array (
        'code' => 'JOH',
        'name' => 'Сент-Джон',
      ),
      5 => 
      array (
        'code' => 'JOS',
        'name' => 'Сент-Джозеф',
      ),
      6 => 
      array (
        'code' => 'LUK',
        'name' => 'Сент-Люк',
      ),
      7 => 
      array (
        'code' => 'MAR',
        'name' => 'Сент-Марк',
      ),
      8 => 
      array (
        'code' => 'PAT',
        'name' => 'Сент-Патрик',
      ),
      9 => 
      array (
        'code' => 'PAU',
        'name' => 'Сент-Пол',
      ),
      10 => 
      array (
        'code' => 'PET',
        'name' => 'Сент-Питер',
      ),
    ),
    'DO' => 
    array (
      1 => 
      array (
        'code' => 'DN',
        'name' => 'Национальный округ',
      ),
      2 => 
      array (
        'code' => 'AZ',
        'name' => 'Асуа',
      ),
      3 => 
      array (
        'code' => 'BC',
        'name' => 'Баоруко',
      ),
      4 => 
      array (
        'code' => 'BH',
        'name' => 'Бараона',
      ),
      5 => 
      array (
        'code' => 'DJ',
        'name' => 'Дахабон',
      ),
      6 => 
      array (
        'code' => 'DU',
        'name' => 'Дуарте',
      ),
      7 => 
      array (
        'code' => 'EL',
        'name' => 'Элиас-Пинья',
      ),
      8 => 
      array (
        'code' => 'SY',
        'name' => 'Эль-Сейбо',
      ),
      9 => 
      array (
        'code' => 'ET',
        'name' => 'Эспайльят',
      ),
      10 => 
      array (
        'code' => 'HM',
        'name' => 'Ато-Майор',
      ),
      11 => 
      array (
        'code' => 'IN',
        'name' => 'Индепенденсия',
      ),
      12 => 
      array (
        'code' => 'AL',
        'name' => 'Ла-Альтаграсия',
      ),
      13 => 
      array (
        'code' => 'RO',
        'name' => 'Ла-Романа',
      ),
      14 => 
      array (
        'code' => 'VE',
        'name' => 'Ла-Вега',
      ),
      15 => 
      array (
        'code' => 'MT',
        'name' => 'Мария-Тринидад-Санчес',
      ),
      16 => 
      array (
        'code' => 'MN',
        'name' => 'Монсеньор-Новэль',
      ),
      17 => 
      array (
        'code' => 'MC',
        'name' => 'Монте-Кристи',
      ),
      18 => 
      array (
        'code' => 'MP',
        'name' => 'Монте-Плата',
      ),
      19 => 
      array (
        'code' => 'PD',
        'name' => 'Педерналес',
      ),
      20 => 
      array (
        'code' => 'PR',
        'name' => 'Бани',
      ),
      21 => 
      array (
        'code' => 'PP',
        'name' => 'Пуэрто-Плата',
      ),
      22 => 
      array (
        'code' => 'SL',
        'name' => 'Сальседо',
      ),
      23 => 
      array (
        'code' => 'SM',
        'name' => 'Самана',
      ),
      24 => 
      array (
        'code' => 'SH',
        'name' => 'Санчес-Рамирес',
      ),
      25 => 
      array (
        'code' => 'SC',
        'name' => 'Сан-Кристобаль',
      ),
      26 => 
      array (
        'code' => 'JO',
        'name' => 'Сан-Хосе-де-Окоа',
      ),
      27 => 
      array (
        'code' => 'SJ',
        'name' => 'Сан-Хуан',
      ),
      28 => 
      array (
        'code' => 'PM',
        'name' => 'Сан-Педро-де-Макорис',
      ),
      29 => 
      array (
        'code' => 'SA',
        'name' => 'Сантьяго',
      ),
      30 => 
      array (
        'code' => 'ST',
        'name' => 'Сантьяго-Родригес',
      ),
      31 => 
      array (
        'code' => 'SD',
        'name' => 'Santo Domingo',
      ),
      32 => 
      array (
        'code' => 'VA',
        'name' => 'Вальверде',
      ),
    ),
    'DZ' => 
    array (
      1 => 
      array (
        'code' => 'ADE',
        'name' => 'Айн-Дефла',
      ),
      2 => 
      array (
        'code' => 'ADR',
        'name' => 'Адрар',
      ),
      3 => 
      array (
        'code' => 'ALG',
        'name' => 'Алжир',
      ),
      4 => 
      array (
        'code' => 'ANN',
        'name' => 'Аннаба',
      ),
      5 => 
      array (
        'code' => 'ATE',
        'name' => 'Айн-Темушент',
      ),
      6 => 
      array (
        'code' => 'BAT',
        'name' => 'Батна',
      ),
      7 => 
      array (
        'code' => 'BBA',
        'name' => 'Бордж-Бу-Арреридж',
      ),
      8 => 
      array (
        'code' => 'BEC',
        'name' => 'Бешар',
      ),
      9 => 
      array (
        'code' => 'BEJ',
        'name' => 'Беджая',
      ),
      10 => 
      array (
        'code' => 'BIS',
        'name' => 'Бискра',
      ),
      11 => 
      array (
        'code' => 'BLI',
        'name' => 'Блида',
      ),
      12 => 
      array (
        'code' => 'BMD',
        'name' => 'Бумердес',
      ),
      13 => 
      array (
        'code' => 'BOA',
        'name' => 'Буира',
      ),
      14 => 
      array (
        'code' => 'CHL',
        'name' => 'Шлеф',
      ),
      15 => 
      array (
        'code' => 'CON',
        'name' => 'Константин',
      ),
      16 => 
      array (
        'code' => 'DJE',
        'name' => 'Джельфа',
      ),
      17 => 
      array (
        'code' => 'EBA',
        'name' => 'Эль-Баяд',
      ),
      18 => 
      array (
        'code' => 'EOU',
        'name' => 'Эль-Уэд',
      ),
      19 => 
      array (
        'code' => 'ETA',
        'name' => 'Эль-Тарф',
      ),
      20 => 
      array (
        'code' => 'GHA',
        'name' => 'Гардая',
      ),
      21 => 
      array (
        'code' => 'GUE',
        'name' => 'Гельма',
      ),
      22 => 
      array (
        'code' => 'ILL',
        'name' => 'Иллизи',
      ),
      23 => 
      array (
        'code' => 'JIJ',
        'name' => 'Джиджель',
      ),
      24 => 
      array (
        'code' => 'KHE',
        'name' => 'Хеншела',
      ),
      25 => 
      array (
        'code' => 'LAG',
        'name' => 'Лагуат',
      ),
      26 => 
      array (
        'code' => 'MED',
        'name' => 'Медеа',
      ),
      27 => 
      array (
        'code' => 'MIL',
        'name' => 'Мила',
      ),
      28 => 
      array (
        'code' => 'MOS',
        'name' => 'Мостаганем',
      ),
      29 => 
      array (
        'code' => 'MSI',
        'name' => 'Мсила',
      ),
      30 => 
      array (
        'code' => 'MUA',
        'name' => 'Муаскар',
      ),
      31 => 
      array (
        'code' => 'NAA',
        'name' => 'Наама',
      ),
      32 => 
      array (
        'code' => 'OEB',
        'name' => 'Умм-эль-Буаги',
      ),
      33 => 
      array (
        'code' => 'ORA',
        'name' => 'Оран',
      ),
      34 => 
      array (
        'code' => 'OUA',
        'name' => 'Уаргла',
      ),
      35 => 
      array (
        'code' => 'REL',
        'name' => 'Гализан',
      ),
      36 => 
      array (
        'code' => 'SAH',
        'name' => 'Сук-Ахрас',
      ),
      37 => 
      array (
        'code' => 'SAI',
        'name' => 'Саида',
      ),
      38 => 
      array (
        'code' => 'SBA',
        'name' => 'Сиди-Бель-Аббес',
      ),
      39 => 
      array (
        'code' => 'SET',
        'name' => 'Сетиф',
      ),
      40 => 
      array (
        'code' => 'SKI',
        'name' => 'Скикда',
      ),
      41 => 
      array (
        'code' => 'TAM',
        'name' => 'Таманрассет',
      ),
      42 => 
      array (
        'code' => 'TEB',
        'name' => 'Тебесса',
      ),
      43 => 
      array (
        'code' => 'TIA',
        'name' => 'Тиарет',
      ),
      44 => 
      array (
        'code' => 'TIN',
        'name' => 'Тиндуф',
      ),
      45 => 
      array (
        'code' => 'TIP',
        'name' => 'Типаза',
      ),
      46 => 
      array (
        'code' => 'TIS',
        'name' => 'Тисемсильт',
      ),
      47 => 
      array (
        'code' => 'TLE',
        'name' => 'Тлемсен',
      ),
      48 => 
      array (
        'code' => 'TOU',
        'name' => 'Тизи-Узу',
      ),
    ),
    'EC' => 
    array (
      1 => 
      array (
        'code' => 'AZU',
        'name' => 'Асуай',
      ),
      2 => 
      array (
        'code' => 'BOL',
        'name' => 'Боливар',
      ),
      3 => 
      array (
        'code' => 'CAN',
        'name' => 'Каньяр',
      ),
      4 => 
      array (
        'code' => 'CAR',
        'name' => 'Карчи',
      ),
      5 => 
      array (
        'code' => 'CHI',
        'name' => 'Чимборасо',
      ),
      6 => 
      array (
        'code' => 'COT',
        'name' => 'Котопахи',
      ),
      7 => 
      array (
        'code' => 'EOR',
        'name' => 'Эль-Оро',
      ),
      8 => 
      array (
        'code' => 'ESM',
        'name' => 'Эсмеральдас',
      ),
      9 => 
      array (
        'code' => 'GPS',
        'name' => 'Галапагос',
      ),
      10 => 
      array (
        'code' => 'GUA',
        'name' => 'Гуаяс',
      ),
      11 => 
      array (
        'code' => 'IMB',
        'name' => 'Имбабура',
      ),
      12 => 
      array (
        'code' => 'LOJ',
        'name' => 'Лоха',
      ),
      13 => 
      array (
        'code' => 'LRO',
        'name' => 'Лос-Риос',
      ),
      14 => 
      array (
        'code' => 'MAN',
        'name' => 'Манаби',
      ),
      15 => 
      array (
        'code' => 'MSA',
        'name' => 'Морона-Сантьяго',
      ),
      16 => 
      array (
        'code' => 'NAP',
        'name' => 'Напо',
      ),
      17 => 
      array (
        'code' => 'ORE',
        'name' => 'Орельяна',
      ),
      18 => 
      array (
        'code' => 'PAS',
        'name' => 'Пастаса',
      ),
      19 => 
      array (
        'code' => 'PIC',
        'name' => 'Пичинча',
      ),
      20 => 
      array (
        'code' => 'SUC',
        'name' => 'Сукумбиос',
      ),
      21 => 
      array (
        'code' => 'TUN',
        'name' => 'Тунгурауа',
      ),
      22 => 
      array (
        'code' => 'ZCH',
        'name' => 'Самора-Чинчипе',
      ),
    ),
    'EE' => 
    array (
      1 => 
      array (
        'code' => 'HA',
        'name' => 'Таллин',
      ),
      2 => 
      array (
        'code' => 'HI',
        'name' => 'Кярдла',
      ),
      3 => 
      array (
        'code' => 'IV',
        'name' => 'Йыхви',
      ),
      4 => 
      array (
        'code' => 'JA',
        'name' => 'Пайде',
      ),
      5 => 
      array (
        'code' => 'JO',
        'name' => 'Йыгева',
      ),
      6 => 
      array (
        'code' => 'LV',
        'name' => 'Ляэне-Вирумаа',
      ),
      7 => 
      array (
        'code' => 'LA',
        'name' => 'Хаапсалу',
      ),
      8 => 
      array (
        'code' => 'PA',
        'name' => 'Пярну',
      ),
      9 => 
      array (
        'code' => 'PO',
        'name' => 'Пылва',
      ),
      10 => 
      array (
        'code' => 'RA',
        'name' => 'Рапла',
      ),
      11 => 
      array (
        'code' => 'SA',
        'name' => 'Курессааре',
      ),
      12 => 
      array (
        'code' => 'TA',
        'name' => 'Тарту',
      ),
      13 => 
      array (
        'code' => 'VA',
        'name' => 'Валга',
      ),
      14 => 
      array (
        'code' => 'VI',
        'name' => 'Вильянди',
      ),
      15 => 
      array (
        'code' => 'VO',
        'name' => 'Вырумаа',
      ),
    ),
    'EG' => 
    array (
      1 => 
      array (
        'code' => 'DHY',
        'name' => 'Дакахлия',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'Красное Море',
      ),
      3 => 
      array (
        'code' => 'BHY',
        'name' => 'Бухейра',
      ),
      4 => 
      array (
        'code' => 'FYM',
        'name' => 'Эль-Файюм',
      ),
      5 => 
      array (
        'code' => 'GBY',
        'name' => 'Гарбия',
      ),
      6 => 
      array (
        'code' => 'IDR',
        'name' => 'Александрия',
      ),
      7 => 
      array (
        'code' => 'IML',
        'name' => 'Исмаилия',
      ),
      8 => 
      array (
        'code' => 'JZH',
        'name' => 'Эль-Гиза',
      ),
      9 => 
      array (
        'code' => 'MFY',
        'name' => 'Минуфия',
      ),
      10 => 
      array (
        'code' => 'MNY',
        'name' => 'Эль-Минья',
      ),
      11 => 
      array (
        'code' => 'QHR',
        'name' => 'Каир',
      ),
      12 => 
      array (
        'code' => 'QLY',
        'name' => 'Кальюбия',
      ),
      13 => 
      array (
        'code' => 'WJD',
        'name' => 'Новая Долина',
      ),
      14 => 
      array (
        'code' => 'SHQ',
        'name' => 'Эш-Шаркия',
      ),
      15 => 
      array (
        'code' => 'SWY',
        'name' => 'Суэц',
      ),
      16 => 
      array (
        'code' => 'ASW',
        'name' => 'Асуан',
      ),
      17 => 
      array (
        'code' => 'ASY',
        'name' => 'Асьют',
      ),
      18 => 
      array (
        'code' => 'BSW',
        'name' => 'Бени-Суэйф',
      ),
      19 => 
      array (
        'code' => 'BSD',
        'name' => 'Порт-Саид',
      ),
      20 => 
      array (
        'code' => 'DMY',
        'name' => 'Дамиэт',
      ),
      21 => 
      array (
        'code' => 'JNS',
        'name' => 'Южный Синай',
      ),
      22 => 
      array (
        'code' => 'KSH',
        'name' => 'Кафр-эш-Шейх',
      ),
      23 => 
      array (
        'code' => 'MAT',
        'name' => 'Мерса-Матрух',
      ),
      24 => 
      array (
        'code' => 'QIN',
        'name' => 'Кена',
      ),
      25 => 
      array (
        'code' => 'SHS',
        'name' => 'Северный Синай',
      ),
      26 => 
      array (
        'code' => 'SUH',
        'name' => 'Сохаг',
      ),
    ),
    'ER' => 
    array (
      1 => 
      array (
        'code' => 'MA',
        'name' => 'Маэкель',
      ),
      2 => 
      array (
        'code' => 'KE',
        'name' => 'Кэрэн',
      ),
      3 => 
      array (
        'code' => 'DK',
        'name' => 'Дэбуб-Кэй-Бахри',
      ),
      4 => 
      array (
        'code' => 'SK',
        'name' => 'Сэмиэн-Кэй-Бахри',
      ),
      5 => 
      array (
        'code' => 'DE',
        'name' => 'Дэбуб',
      ),
      6 => 
      array (
        'code' => 'BR',
        'name' => 'Гаш-Барка',
      ),
    ),
    'ET' => 
    array (
      1 => 
      array (
        'code' => 'AF',
        'name' => 'Афар',
      ),
      2 => 
      array (
        'code' => 'AH',
        'name' => 'Амхара',
      ),
      3 => 
      array (
        'code' => 'BG',
        'name' => 'Бенишангуль-Гумуз',
      ),
      4 => 
      array (
        'code' => 'GB',
        'name' => 'Гамбела',
      ),
      5 => 
      array (
        'code' => 'HR',
        'name' => 'Харари',
      ),
      6 => 
      array (
        'code' => 'OR',
        'name' => 'Оромо',
      ),
      7 => 
      array (
        'code' => 'SM',
        'name' => 'Сомали',
      ),
      8 => 
      array (
        'code' => 'SN',
        'name' => 'Область Народностей Южной Эфиопии',
      ),
      9 => 
      array (
        'code' => 'TG',
        'name' => 'Тыграй',
      ),
      10 => 
      array (
        'code' => 'AA',
        'name' => 'Аддис-Абеба',
      ),
      11 => 
      array (
        'code' => 'DD',
        'name' => 'Дыре-Дауа',
      ),
    ),
    'FI' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Ахвенанмаа',
      ),
      2 => 
      array (
        'code' => 'ES',
        'name' => 'Этеля-Суоми',
      ),
      3 => 
      array (
        'code' => 'IS',
        'name' => 'Итя-Суоми',
      ),
      4 => 
      array (
        'code' => 'LS',
        'name' => 'Лянси-Суоми',
      ),
      5 => 
      array (
        'code' => 'LA',
        'name' => 'Лаппи',
      ),
      6 => 
      array (
        'code' => 'OU',
        'name' => 'Оулу',
      ),
    ),
    'FJ' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => 'Центральный округ',
      ),
      2 => 
      array (
        'code' => 'E',
        'name' => 'Восточный округ',
      ),
      3 => 
      array (
        'code' => 'N',
        'name' => 'Северный округ',
      ),
      4 => 
      array (
        'code' => 'R',
        'name' => 'Ротума',
      ),
      5 => 
      array (
        'code' => 'W',
        'name' => 'Западный округ',
      ),
    ),
    'FO' => 
    array (
      1 => 
      array (
        'code' => 'TÛR',
        'name' => 'Торсхавн',
      ),
      2 => 
      array (
        'code' => 'KLA',
        'name' => 'Клаксвуйк',
      ),
      3 => 
      array (
        'code' => 'RUN',
        'name' => 'Рунавик',
      ),
      4 => 
      array (
        'code' => 'TVØ',
        'name' => 'Тверойри',
      ),
      5 => 
      array (
        'code' => 'FUG',
        'name' => 'Фуглафьердур',
      ),
      6 => 
      array (
        'code' => 'SUN',
        'name' => 'Сунда',
      ),
      7 => 
      array (
        'code' => 'VáG',
        'name' => 'Вагур',
      ),
      8 => 
      array (
        'code' => 'NES',
        'name' => 'Нес',
      ),
      9 => 
      array (
        'code' => 'VES',
        'name' => 'Вестманна',
      ),
      10 => 
      array (
        'code' => 'MIð',
        'name' => 'Мидвоавур',
      ),
      11 => 
      array (
        'code' => 'SØR',
        'name' => 'Сервоавур',
      ),
      12 => 
      array (
        'code' => 'GØT',
        'name' => 'Гету',
      ),
      13 => 
      array (
        'code' => 'SJû',
        'name' => 'Имя пакета будет отображаться в Загрузчике модулей после того, как пакет загружен для установки в Студии.',
      ),
      14 => 
      array (
        'code' => 'LEI',
        'name' => 'Леруик',
      ),
      15 => 
      array (
        'code' => 'SAN',
        'name' => 'Гету',
      ),
      16 => 
      array (
        'code' => 'HVA',
        'name' => 'Хвалбе',
      ),
      17 => 
      array (
        'code' => 'EIð',
        'name' => 'Айи',
      ),
      18 => 
      array (
        'code' => 'KVí',
        'name' => 'Квивик',
      ),
      19 => 
      array (
        'code' => 'SAN',
        'name' => 'Сандур',
      ),
      20 => 
      array (
        'code' => 'SKO',
        'name' => 'Скопун',
      ),
      21 => 
      array (
        'code' => 'HVA',
        'name' => 'Хваннасунд',
      ),
      22 => 
      array (
        'code' => 'SUM',
        'name' => 'Сумба',
      ),
      23 => 
      array (
        'code' => 'VIð',
        'name' => 'Виарайи',
      ),
      24 => 
      array (
        'code' => 'POR',
        'name' => 'Поркери',
      ),
      25 => 
      array (
        'code' => 'SKá',
        'name' => 'Скалавик',
      ),
      26 => 
      array (
        'code' => 'KUN',
        'name' => 'Куной',
      ),
      27 => 
      array (
        'code' => 'HÚS',
        'name' => 'Хусави',
      ),
      28 => 
      array (
        'code' => 'HOV',
        'name' => 'Хов',
      ),
      29 => 
      array (
        'code' => 'FáM',
        'name' => '',
      ),
      30 => 
      array (
        'code' => 'FUN',
        'name' => 'Фанингур',
      ),
      31 => 
      array (
        'code' => 'HÚS',
        'name' => 'Хусар',
      ),
      32 => 
      array (
        'code' => 'SKÚ',
        'name' => 'Svínoy',
      ),
      33 => 
      array (
        'code' => 'SVí',
        'name' => 'Свиной',
      ),
      34 => 
      array (
        'code' => 'FUG',
        'name' => 'Фуглой',
      ),
    ),
    'FR' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Эльзас',
      ),
      2 => 
      array (
        'code' => 'AQ',
        'name' => 'Аквитания',
      ),
      3 => 
      array (
        'code' => 'AU',
        'name' => 'Овернь',
      ),
      4 => 
      array (
        'code' => 'BR',
        'name' => 'Бретань',
      ),
      5 => 
      array (
        'code' => 'BU',
        'name' => 'Бургундия',
      ),
      6 => 
      array (
        'code' => 'CE',
        'name' => 'Долина Луары',
      ),
      7 => 
      array (
        'code' => 'CH',
        'name' => 'Шампань',
      ),
      8 => 
      array (
        'code' => 'CO',
        'name' => 'Корсика',
      ),
      9 => 
      array (
        'code' => 'FR',
        'name' => 'Франш-Конте',
      ),
      10 => 
      array (
        'code' => 'LA',
        'name' => 'Лангедок — Руссильон',
      ),
      11 => 
      array (
        'code' => 'LI',
        'name' => 'Лимузен',
      ),
      12 => 
      array (
        'code' => 'LO',
        'name' => 'Лотарингия',
      ),
      13 => 
      array (
        'code' => 'MI',
        'name' => 'Юг — Пиренеи',
      ),
      14 => 
      array (
        'code' => 'NO',
        'name' => 'Нор — Па-де-Кале',
      ),
      15 => 
      array (
        'code' => 'NR',
        'name' => 'Нормандия',
      ),
      16 => 
      array (
        'code' => 'PA',
        'name' => 'Париж/Иль-де-Франс',
      ),
      17 => 
      array (
        'code' => 'PI',
        'name' => 'Пикардия',
      ),
      18 => 
      array (
        'code' => 'PO',
        'name' => 'Пуату — Шаранта',
      ),
      19 => 
      array (
        'code' => 'PR',
        'name' => 'Прованс',
      ),
      20 => 
      array (
        'code' => 'RH',
        'name' => 'Рона — Альпы',
      ),
      21 => 
      array (
        'code' => 'RI',
        'name' => 'Лазурный Берег',
      ),
      22 => 
      array (
        'code' => 'WE',
        'name' => 'Западная долина Луары',
      ),
    ),
    'FX' => 
    array (
      1 => 
      array (
        'code' => 'Et',
        'name' => 'Этранжер',
      ),
      2 => 
      array (
        'code' => '01',
        'name' => 'Эн',
      ),
      3 => 
      array (
        'code' => '02',
        'name' => 'Эна',
      ),
      4 => 
      array (
        'code' => '03',
        'name' => 'Алье',
      ),
      5 => 
      array (
        'code' => '04',
        'name' => 'Альпы Верхнего Прованса',
      ),
      6 => 
      array (
        'code' => '05',
        'name' => 'Верхние Альпы',
      ),
      7 => 
      array (
        'code' => '06',
        'name' => 'Приморские Альпы',
      ),
      8 => 
      array (
        'code' => '07',
        'name' => 'Ардеш',
      ),
      9 => 
      array (
        'code' => '08',
        'name' => 'Арденны',
      ),
      10 => 
      array (
        'code' => '09',
        'name' => 'Арьеж',
      ),
      11 => 
      array (
        'code' => '10',
        'name' => 'Об',
      ),
      12 => 
      array (
        'code' => '11',
        'name' => 'Од',
      ),
      13 => 
      array (
        'code' => '12',
        'name' => 'Аверон',
      ),
      14 => 
      array (
        'code' => '13',
        'name' => 'Буш-дю-Рон',
      ),
      15 => 
      array (
        'code' => '14',
        'name' => 'Кальвадос',
      ),
      16 => 
      array (
        'code' => '15',
        'name' => 'Канталь',
      ),
      17 => 
      array (
        'code' => '16',
        'name' => 'Шаранта',
      ),
      18 => 
      array (
        'code' => '17',
        'name' => 'Приморская Шаранта',
      ),
      19 => 
      array (
        'code' => '18',
        'name' => 'Шер',
      ),
      20 => 
      array (
        'code' => '19',
        'name' => 'Коррез',
      ),
      21 => 
      array (
        'code' => '2A',
        'name' => 'Южная Корсика',
      ),
      22 => 
      array (
        'code' => '2B',
        'name' => 'Верхняя Корсика',
      ),
      23 => 
      array (
        'code' => '21',
        'name' => 'Кот-д’Ор',
      ),
      24 => 
      array (
        'code' => '22',
        'name' => 'Кот-д’Армор',
      ),
      25 => 
      array (
        'code' => '23',
        'name' => 'Крёз',
      ),
      26 => 
      array (
        'code' => '24',
        'name' => 'Дордонь',
      ),
      27 => 
      array (
        'code' => '25',
        'name' => 'Ду',
      ),
      28 => 
      array (
        'code' => '26',
        'name' => 'Дром',
      ),
      29 => 
      array (
        'code' => '27',
        'name' => 'Эр',
      ),
      30 => 
      array (
        'code' => '28',
        'name' => 'Эр и Луар',
      ),
      31 => 
      array (
        'code' => '29',
        'name' => 'Финистер',
      ),
      32 => 
      array (
        'code' => '30',
        'name' => 'Гар',
      ),
      33 => 
      array (
        'code' => '31',
        'name' => 'Верхняя Гаронна',
      ),
      34 => 
      array (
        'code' => '32',
        'name' => 'Жер',
      ),
      35 => 
      array (
        'code' => '33',
        'name' => 'Жиронда',
      ),
      36 => 
      array (
        'code' => '34',
        'name' => 'Эро',
      ),
      37 => 
      array (
        'code' => '35',
        'name' => 'Иль и Вилен',
      ),
      38 => 
      array (
        'code' => '36',
        'name' => 'Эндр',
      ),
      39 => 
      array (
        'code' => '37',
        'name' => 'Эндр и Луара',
      ),
      40 => 
      array (
        'code' => '38',
        'name' => 'Изер',
      ),
      41 => 
      array (
        'code' => '39',
        'name' => 'Юра',
      ),
      42 => 
      array (
        'code' => '40',
        'name' => 'Ланды',
      ),
      43 => 
      array (
        'code' => '41',
        'name' => 'Луар и Шер',
      ),
      44 => 
      array (
        'code' => '42',
        'name' => 'Луара',
      ),
      45 => 
      array (
        'code' => '43',
        'name' => 'Верхняя Луара',
      ),
      46 => 
      array (
        'code' => '44',
        'name' => 'Атлантическая Луара',
      ),
      47 => 
      array (
        'code' => '45',
        'name' => 'Луаре',
      ),
      48 => 
      array (
        'code' => '46',
        'name' => 'Ло',
      ),
      49 => 
      array (
        'code' => '47',
        'name' => 'Ло и Гаронна',
      ),
      50 => 
      array (
        'code' => '48',
        'name' => 'Лозер',
      ),
      51 => 
      array (
        'code' => '49',
        'name' => 'Мен и Луара',
      ),
      52 => 
      array (
        'code' => '50',
        'name' => 'Манш',
      ),
      53 => 
      array (
        'code' => '51',
        'name' => 'Марна',
      ),
      54 => 
      array (
        'code' => '52',
        'name' => 'Верхняя Марна',
      ),
      55 => 
      array (
        'code' => '53',
        'name' => 'Майен',
      ),
      56 => 
      array (
        'code' => '54',
        'name' => 'Мёрт и Мозель',
      ),
      57 => 
      array (
        'code' => '55',
        'name' => 'Маас',
      ),
      58 => 
      array (
        'code' => '56',
        'name' => 'Морбиан',
      ),
      59 => 
      array (
        'code' => '57',
        'name' => 'Мозель',
      ),
      60 => 
      array (
        'code' => '58',
        'name' => 'Ньевр',
      ),
      61 => 
      array (
        'code' => '59',
        'name' => 'Нор',
      ),
      62 => 
      array (
        'code' => '60',
        'name' => 'Уаза',
      ),
      63 => 
      array (
        'code' => '61',
        'name' => 'Орн',
      ),
      64 => 
      array (
        'code' => '62',
        'name' => 'Па-де-Кале',
      ),
      65 => 
      array (
        'code' => '63',
        'name' => 'Пюи-де-Дом',
      ),
      66 => 
      array (
        'code' => '64',
        'name' => 'Атлантические Пиренеи',
      ),
      67 => 
      array (
        'code' => '65',
        'name' => 'Верхние Пиренеи',
      ),
      68 => 
      array (
        'code' => '66',
        'name' => 'Восточные Пиренеи',
      ),
      69 => 
      array (
        'code' => '67',
        'name' => 'Нижний Рейн',
      ),
      70 => 
      array (
        'code' => '68',
        'name' => 'Верхний Рейн',
      ),
      71 => 
      array (
        'code' => '69',
        'name' => 'Рона',
      ),
      72 => 
      array (
        'code' => '70',
        'name' => 'Верхняя Сона',
      ),
      73 => 
      array (
        'code' => '71',
        'name' => 'Сона и Луара',
      ),
      74 => 
      array (
        'code' => '72',
        'name' => 'Сарта',
      ),
      75 => 
      array (
        'code' => '73',
        'name' => 'Савойя',
      ),
      76 => 
      array (
        'code' => '74',
        'name' => 'Верхняя Савойя',
      ),
      77 => 
      array (
        'code' => '75',
        'name' => 'Париж',
      ),
      78 => 
      array (
        'code' => '76',
        'name' => 'Приморская Сена',
      ),
      79 => 
      array (
        'code' => '77',
        'name' => 'Сена и Марна',
      ),
      80 => 
      array (
        'code' => '78',
        'name' => 'Ивелин',
      ),
      81 => 
      array (
        'code' => '79',
        'name' => 'Дё-Севр',
      ),
      82 => 
      array (
        'code' => '80',
        'name' => 'Сомма',
      ),
      83 => 
      array (
        'code' => '81',
        'name' => 'Тарн',
      ),
      84 => 
      array (
        'code' => '82',
        'name' => 'Тарн и Гаронна',
      ),
      85 => 
      array (
        'code' => '83',
        'name' => 'Вар',
      ),
      86 => 
      array (
        'code' => '84',
        'name' => 'Воклюз',
      ),
      87 => 
      array (
        'code' => '85',
        'name' => 'Вандея',
      ),
      88 => 
      array (
        'code' => '86',
        'name' => 'Вьенна',
      ),
      89 => 
      array (
        'code' => '87',
        'name' => 'Верхняя Вьенна',
      ),
      90 => 
      array (
        'code' => '88',
        'name' => 'Вогезы',
      ),
      91 => 
      array (
        'code' => '89',
        'name' => 'Йонна',
      ),
      92 => 
      array (
        'code' => '90',
        'name' => 'Территория Бельфор',
      ),
      93 => 
      array (
        'code' => '91',
        'name' => 'Эсон',
      ),
      94 => 
      array (
        'code' => '92',
        'name' => 'О-де-Сен',
      ),
      95 => 
      array (
        'code' => '93',
        'name' => 'Сен-Сен-Дени',
      ),
      96 => 
      array (
        'code' => '94',
        'name' => 'Валь-де-Марн',
      ),
      97 => 
      array (
        'code' => '95',
        'name' => 'Валь-д’Уаз',
      ),
    ),
    'GA' => 
    array (
      1 => 
      array (
        'code' => 'ES',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'HO',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'MO',
        'name' => '',
      ),
      4 => 
      array (
        'code' => 'NG',
        'name' => '',
      ),
      5 => 
      array (
        'code' => 'NY',
        'name' => '',
      ),
      6 => 
      array (
        'code' => 'OI',
        'name' => '',
      ),
      7 => 
      array (
        'code' => 'OL',
        'name' => '',
      ),
      8 => 
      array (
        'code' => 'OM',
        'name' => '',
      ),
      9 => 
      array (
        'code' => 'WN',
        'name' => '',
      ),
    ),
    'GE' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'AJ',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'GU',
        'name' => '',
      ),
      4 => 
      array (
        'code' => 'IM',
        'name' => '',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => '',
      ),
      6 => 
      array (
        'code' => 'KK',
        'name' => '',
      ),
      7 => 
      array (
        'code' => 'MM',
        'name' => '',
      ),
      8 => 
      array (
        'code' => 'RL',
        'name' => '',
      ),
      9 => 
      array (
        'code' => 'SJ',
        'name' => '',
      ),
      10 => 
      array (
        'code' => 'SK',
        'name' => '',
      ),
      11 => 
      array (
        'code' => 'SZ',
        'name' => '',
      ),
      12 => 
      array (
        'code' => 'TB',
        'name' => '',
      ),
    ),
    'GF' => 
    array (
      1 => 
      array (
        'code' => 'AWA',
        'name' => 'Авала-Ялимапо',
      ),
      2 => 
      array (
        'code' => 'MAN',
        'name' => 'Мана',
      ),
      3 => 
      array (
        'code' => 'SAI',
        'name' => 'Сен-Лоран-дю-Марони',
      ),
      4 => 
      array (
        'code' => 'APA',
        'name' => 'Апату',
      ),
      5 => 
      array (
        'code' => 'GRA',
        'name' => 'Гран-Санти',
      ),
      6 => 
      array (
        'code' => 'PAP',
        'name' => 'Папаиштон',
      ),
      7 => 
      array (
        'code' => 'SAÜ',
        'name' => 'Саюль',
      ),
      8 => 
      array (
        'code' => 'MAR',
        'name' => 'Марипаула',
      ),
      9 => 
      array (
        'code' => 'CAM',
        'name' => 'Камопи',
      ),
      10 => 
      array (
        'code' => 'SAI',
        'name' => 'Сен-Жорж',
      ),
      11 => 
      array (
        'code' => 'OUA',
        'name' => 'Уанари',
      ),
      12 => 
      array (
        'code' => 'RéG',
        'name' => 'Режина',
      ),
      13 => 
      array (
        'code' => 'ROU',
        'name' => 'Рура',
      ),
      14 => 
      array (
        'code' => 'SAI',
        'name' => 'Сент-Ели',
      ),
      15 => 
      array (
        'code' => 'IRA',
        'name' => 'Иракубо',
      ),
      16 => 
      array (
        'code' => 'SIN',
        'name' => 'Синнамари',
      ),
      17 => 
      array (
        'code' => 'KOU',
        'name' => 'Куру',
      ),
      18 => 
      array (
        'code' => 'MAC',
        'name' => 'Макурия',
      ),
      19 => 
      array (
        'code' => 'MON',
        'name' => 'Монсинери-Тоннегранд',
      ),
      20 => 
      array (
        'code' => 'MAT',
        'name' => 'Матури',
      ),
      21 => 
      array (
        'code' => 'CAY',
        'name' => 'Кайенна',
      ),
      22 => 
      array (
        'code' => 'REM',
        'name' => 'Ремир-Монжоли',
      ),
    ),
    'GH' => 
    array (
      1 => 
      array (
        'code' => 'AS',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'BA',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'CE',
        'name' => '',
      ),
      4 => 
      array (
        'code' => 'EA',
        'name' => '',
      ),
      5 => 
      array (
        'code' => 'GA',
        'name' => '',
      ),
      6 => 
      array (
        'code' => 'NO',
        'name' => '',
      ),
      7 => 
      array (
        'code' => 'UE',
        'name' => '',
      ),
      8 => 
      array (
        'code' => 'UW',
        'name' => '',
      ),
      9 => 
      array (
        'code' => 'VO',
        'name' => '',
      ),
      10 => 
      array (
        'code' => 'WE',
        'name' => '',
      ),
    ),
    'GI' => 
    array (
      1 => 
      array (
        'code' => 'EAS',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'NOR',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'REC',
        'name' => '',
      ),
      4 => 
      array (
        'code' => 'SAN',
        'name' => '',
      ),
      5 => 
      array (
        'code' => 'SOU',
        'name' => '',
      ),
      6 => 
      array (
        'code' => 'TOW',
        'name' => '',
      ),
      7 => 
      array (
        'code' => 'UPP',
        'name' => '',
      ),
      8 => 
      array (
        'code' => 'OTH',
        'name' => '',
      ),
    ),
    'GL' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'T',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'K',
        'name' => '',
      ),
    ),
    'GM' => 
    array (
      1 => 
      array (
        'code' => 'BJ',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'BS',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'BR',
        'name' => '',
      ),
      4 => 
      array (
        'code' => 'JA',
        'name' => '',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => '',
      ),
      6 => 
      array (
        'code' => 'KE',
        'name' => '',
      ),
      7 => 
      array (
        'code' => 'KU',
        'name' => '',
      ),
      8 => 
      array (
        'code' => 'MA',
        'name' => '',
      ),
      9 => 
      array (
        'code' => 'LR',
        'name' => '',
      ),
      10 => 
      array (
        'code' => 'CR',
        'name' => '',
      ),
      11 => 
      array (
        'code' => 'NB',
        'name' => '',
      ),
      12 => 
      array (
        'code' => 'UR',
        'name' => '',
      ),
      13 => 
      array (
        'code' => 'WE',
        'name' => '',
      ),
    ),
    'GN' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
      23 => 
      array (
        'code' => '',
        'name' => '',
      ),
      24 => 
      array (
        'code' => '',
        'name' => '',
      ),
      25 => 
      array (
        'code' => '',
        'name' => '',
      ),
      26 => 
      array (
        'code' => '',
        'name' => '',
      ),
      27 => 
      array (
        'code' => '',
        'name' => '',
      ),
      28 => 
      array (
        'code' => '',
        'name' => '',
      ),
      29 => 
      array (
        'code' => '',
        'name' => '',
      ),
      30 => 
      array (
        'code' => '',
        'name' => '',
      ),
      31 => 
      array (
        'code' => '',
        'name' => '',
      ),
      32 => 
      array (
        'code' => '',
        'name' => '',
      ),
      33 => 
      array (
        'code' => '',
        'name' => '',
      ),
      34 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'GP' => 
    array (
      1 => 
      array (
        'code' => 'ARR',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'CAN',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'COM',
        'name' => '',
      ),
    ),
    'GQ' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Аннобон',
      ),
      2 => 
      array (
        'code' => 'BN',
        'name' => 'Северный Биоко',
      ),
      3 => 
      array (
        'code' => 'BS',
        'name' => 'Южный Биоко',
      ),
      4 => 
      array (
        'code' => 'CS',
        'name' => 'Сентро-Сур',
      ),
      5 => 
      array (
        'code' => 'KN',
        'name' => 'Ке-Нтем',
      ),
      6 => 
      array (
        'code' => 'LI',
        'name' => 'Литорал',
      ),
      7 => 
      array (
        'code' => 'WN',
        'name' => 'Веле-Нзас',
      ),
    ),
    'GR' => 
    array (
      1 => 
      array (
        'code' => 'AT',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'CN',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'CM',
        'name' => '',
      ),
      4 => 
      array (
        'code' => 'CR',
        'name' => '',
      ),
      5 => 
      array (
        'code' => 'EM',
        'name' => '',
      ),
      6 => 
      array (
        'code' => 'EP',
        'name' => '',
      ),
      7 => 
      array (
        'code' => 'II',
        'name' => '',
      ),
      8 => 
      array (
        'code' => 'NA',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => 'WG',
        'name' => '',
      ),
      13 => 
      array (
        'code' => 'WM',
        'name' => '',
      ),
    ),
    'GT' => 
    array (
      1 => 
      array (
        'code' => 'AV',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'BV',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'CM',
        'name' => '',
      ),
      4 => 
      array (
        'code' => 'CQ',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => 'PR',
        'name' => '',
      ),
      7 => 
      array (
        'code' => 'QC',
        'name' => '',
      ),
      8 => 
      array (
        'code' => 'ES',
        'name' => '',
      ),
      9 => 
      array (
        'code' => 'GU',
        'name' => '',
      ),
      10 => 
      array (
        'code' => 'HU',
        'name' => '',
      ),
      11 => 
      array (
        'code' => 'IZ',
        'name' => '',
      ),
      12 => 
      array (
        'code' => 'JA',
        'name' => '',
      ),
      13 => 
      array (
        'code' => 'JU',
        'name' => '',
      ),
      14 => 
      array (
        'code' => 'QZ',
        'name' => '',
      ),
      15 => 
      array (
        'code' => 'RE',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'GU' => 
    array (
      1 => 
      array (
        'code' => 'AGA',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'AGA',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'ASA',
        'name' => '',
      ),
      4 => 
      array (
        'code' => 'BAR',
        'name' => '',
      ),
      5 => 
      array (
        'code' => 'CHA',
        'name' => '',
      ),
      6 => 
      array (
        'code' => 'DED',
        'name' => '',
      ),
      7 => 
      array (
        'code' => 'HAG',
        'name' => '',
      ),
      8 => 
      array (
        'code' => 'INA',
        'name' => '',
      ),
      9 => 
      array (
        'code' => 'MAN',
        'name' => '',
      ),
      10 => 
      array (
        'code' => 'MER',
        'name' => '',
      ),
      11 => 
      array (
        'code' => 'MON',
        'name' => '',
      ),
      12 => 
      array (
        'code' => 'PIT',
        'name' => '',
      ),
      13 => 
      array (
        'code' => 'SAN',
        'name' => '',
      ),
      14 => 
      array (
        'code' => 'SIN',
        'name' => '',
      ),
      15 => 
      array (
        'code' => 'TAL',
        'name' => '',
      ),
      16 => 
      array (
        'code' => 'TAM',
        'name' => '',
      ),
      17 => 
      array (
        'code' => 'UMA',
        'name' => '',
      ),
      18 => 
      array (
        'code' => 'YIG',
        'name' => '',
      ),
      19 => 
      array (
        'code' => 'YON',
        'name' => '',
      ),
    ),
    'GW' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'GY' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'HK' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'HM' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'HN' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'HR' => 
    array (
      1 => 
      array (
        'code' => 'BB',
        'name' => 'Беловарско-Билогорская жупания',
      ),
      2 => 
      array (
        'code' => 'CZ',
        'name' => 'Загреб',
      ),
      3 => 
      array (
        'code' => 'DN',
        'name' => 'Дубровачка-Неретванска жупания',
      ),
      4 => 
      array (
        'code' => 'IS',
        'name' => 'Истрийская жупания',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'Карловац',
      ),
      6 => 
      array (
        'code' => 'KK',
        'name' => 'Копривницко-Крижевацкая жупания',
      ),
      7 => 
      array (
        'code' => 'KZ',
        'name' => 'Крапинско-Загорская жупания',
      ),
      8 => 
      array (
        'code' => 'LS',
        'name' => 'Лицко-Сеньская жупания',
      ),
      9 => 
      array (
        'code' => 'ME',
        'name' => 'Меджумурская жупания',
      ),
      10 => 
      array (
        'code' => 'OB',
        'name' => 'Осиецко-Бараньская жупания',
      ),
      11 => 
      array (
        'code' => 'PS',
        'name' => 'Пожежско-Славонская жупания',
      ),
      12 => 
      array (
        'code' => 'PG',
        'name' => 'Приморско-Горанская жупания',
      ),
      13 => 
      array (
        'code' => 'SI',
        'name' => 'Шибеник',
      ),
      14 => 
      array (
        'code' => 'SM',
        'name' => 'Сисацко-Мославинская жупания',
      ),
      15 => 
      array (
        'code' => 'SB',
        'name' => 'Славонски-Брод-Посавина',
      ),
      16 => 
      array (
        'code' => 'SD',
        'name' => 'Сплитско-Далматинская жупания',
      ),
      17 => 
      array (
        'code' => 'VA',
        'name' => 'Вараждин',
      ),
      18 => 
      array (
        'code' => 'VP',
        'name' => 'Вировитицко-Подравская жупания',
      ),
      19 => 
      array (
        'code' => 'VS',
        'name' => 'Вуковарско-Сремская жупания',
      ),
      20 => 
      array (
        'code' => 'ZK',
        'name' => 'Задар',
      ),
      21 => 
      array (
        'code' => 'ZA',
        'name' => 'Загреб',
      ),
    ),
    'HT' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'HU' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
      23 => 
      array (
        'code' => '',
        'name' => '',
      ),
      24 => 
      array (
        'code' => '',
        'name' => '',
      ),
      25 => 
      array (
        'code' => '',
        'name' => '',
      ),
      26 => 
      array (
        'code' => '',
        'name' => '',
      ),
      27 => 
      array (
        'code' => '',
        'name' => '',
      ),
      28 => 
      array (
        'code' => '',
        'name' => '',
      ),
      29 => 
      array (
        'code' => '',
        'name' => '',
      ),
      30 => 
      array (
        'code' => '',
        'name' => '',
      ),
      31 => 
      array (
        'code' => '',
        'name' => '',
      ),
      32 => 
      array (
        'code' => '',
        'name' => '',
      ),
      33 => 
      array (
        'code' => '',
        'name' => '',
      ),
      34 => 
      array (
        'code' => '',
        'name' => '',
      ),
      35 => 
      array (
        'code' => '',
        'name' => '',
      ),
      36 => 
      array (
        'code' => '',
        'name' => '',
      ),
      37 => 
      array (
        'code' => '',
        'name' => '',
      ),
      38 => 
      array (
        'code' => '',
        'name' => '',
      ),
      39 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'ID' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
      23 => 
      array (
        'code' => '',
        'name' => '',
      ),
      24 => 
      array (
        'code' => '',
        'name' => '',
      ),
      25 => 
      array (
        'code' => '',
        'name' => '',
      ),
      26 => 
      array (
        'code' => '',
        'name' => '',
      ),
      27 => 
      array (
        'code' => '',
        'name' => '',
      ),
      28 => 
      array (
        'code' => '',
        'name' => '',
      ),
      29 => 
      array (
        'code' => '',
        'name' => '',
      ),
      30 => 
      array (
        'code' => '',
        'name' => '',
      ),
      31 => 
      array (
        'code' => '',
        'name' => '',
      ),
      32 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'IE' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
      23 => 
      array (
        'code' => '',
        'name' => '',
      ),
      24 => 
      array (
        'code' => '',
        'name' => '',
      ),
      25 => 
      array (
        'code' => '',
        'name' => '',
      ),
      26 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'IL' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'IN' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
      23 => 
      array (
        'code' => '',
        'name' => '',
      ),
      24 => 
      array (
        'code' => '',
        'name' => '',
      ),
      25 => 
      array (
        'code' => '',
        'name' => '',
      ),
      26 => 
      array (
        'code' => '',
        'name' => '',
      ),
      27 => 
      array (
        'code' => '',
        'name' => '',
      ),
      28 => 
      array (
        'code' => '',
        'name' => '',
      ),
      29 => 
      array (
        'code' => '',
        'name' => '',
      ),
      30 => 
      array (
        'code' => '',
        'name' => '',
      ),
      31 => 
      array (
        'code' => '',
        'name' => '',
      ),
      32 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'IO' => 
    array (
      1 => 
      array (
        'code' => 'DG',
        'name' => 'Диего-Гарсия',
      ),
      2 => 
      array (
        'code' => 'DI',
        'name' => 'Остров Дангер',
      ),
      3 => 
      array (
        'code' => 'EA',
        'name' => 'Остров Игл',
      ),
      4 => 
      array (
        'code' => 'EG',
        'name' => 'Острова Эгмонт',
      ),
      5 => 
      array (
        'code' => 'NI',
        'name' => 'Остров Нельсонс',
      ),
      6 => 
      array (
        'code' => 'PB',
        'name' => 'Перос Банос',
      ),
      7 => 
      array (
        'code' => 'SI',
        'name' => 'Острова Саломон',
      ),
      8 => 
      array (
        'code' => 'TB',
        'name' => 'Три Брата',
      ),
    ),
    'IQ' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'IR' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
      23 => 
      array (
        'code' => '',
        'name' => '',
      ),
      24 => 
      array (
        'code' => '',
        'name' => '',
      ),
      25 => 
      array (
        'code' => '',
        'name' => '',
      ),
      26 => 
      array (
        'code' => '',
        'name' => '',
      ),
      27 => 
      array (
        'code' => '',
        'name' => '',
      ),
      28 => 
      array (
        'code' => '',
        'name' => '',
      ),
      29 => 
      array (
        'code' => '',
        'name' => '',
      ),
      30 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'IS' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'IT' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
      23 => 
      array (
        'code' => '',
        'name' => '',
      ),
      24 => 
      array (
        'code' => '',
        'name' => '',
      ),
      25 => 
      array (
        'code' => '',
        'name' => '',
      ),
      26 => 
      array (
        'code' => '',
        'name' => '',
      ),
      27 => 
      array (
        'code' => '',
        'name' => '',
      ),
      28 => 
      array (
        'code' => '',
        'name' => '',
      ),
      29 => 
      array (
        'code' => '',
        'name' => '',
      ),
      30 => 
      array (
        'code' => '',
        'name' => '',
      ),
      31 => 
      array (
        'code' => '',
        'name' => '',
      ),
      32 => 
      array (
        'code' => '',
        'name' => '',
      ),
      33 => 
      array (
        'code' => '',
        'name' => '',
      ),
      34 => 
      array (
        'code' => '',
        'name' => '',
      ),
      35 => 
      array (
        'code' => '',
        'name' => '',
      ),
      36 => 
      array (
        'code' => '',
        'name' => '',
      ),
      37 => 
      array (
        'code' => '',
        'name' => '',
      ),
      38 => 
      array (
        'code' => '',
        'name' => '',
      ),
      39 => 
      array (
        'code' => '',
        'name' => '',
      ),
      40 => 
      array (
        'code' => '',
        'name' => '',
      ),
      41 => 
      array (
        'code' => '',
        'name' => '',
      ),
      42 => 
      array (
        'code' => '',
        'name' => '',
      ),
      43 => 
      array (
        'code' => '',
        'name' => '',
      ),
      44 => 
      array (
        'code' => '',
        'name' => '',
      ),
      45 => 
      array (
        'code' => '',
        'name' => '',
      ),
      46 => 
      array (
        'code' => '',
        'name' => '',
      ),
      47 => 
      array (
        'code' => '',
        'name' => '',
      ),
      48 => 
      array (
        'code' => '',
        'name' => '',
      ),
      49 => 
      array (
        'code' => '',
        'name' => '',
      ),
      50 => 
      array (
        'code' => '',
        'name' => '',
      ),
      51 => 
      array (
        'code' => '',
        'name' => '',
      ),
      52 => 
      array (
        'code' => '',
        'name' => '',
      ),
      53 => 
      array (
        'code' => '',
        'name' => '',
      ),
      54 => 
      array (
        'code' => '',
        'name' => '',
      ),
      55 => 
      array (
        'code' => '',
        'name' => '',
      ),
      56 => 
      array (
        'code' => '',
        'name' => '',
      ),
      57 => 
      array (
        'code' => '',
        'name' => '',
      ),
      58 => 
      array (
        'code' => '',
        'name' => '',
      ),
      59 => 
      array (
        'code' => '',
        'name' => '',
      ),
      60 => 
      array (
        'code' => '',
        'name' => '',
      ),
      61 => 
      array (
        'code' => '',
        'name' => '',
      ),
      62 => 
      array (
        'code' => '',
        'name' => '',
      ),
      63 => 
      array (
        'code' => '',
        'name' => '',
      ),
      64 => 
      array (
        'code' => '',
        'name' => '',
      ),
      65 => 
      array (
        'code' => '',
        'name' => '',
      ),
      66 => 
      array (
        'code' => '',
        'name' => '',
      ),
      67 => 
      array (
        'code' => '',
        'name' => '',
      ),
      68 => 
      array (
        'code' => '',
        'name' => '',
      ),
      69 => 
      array (
        'code' => '',
        'name' => '',
      ),
      70 => 
      array (
        'code' => '',
        'name' => '',
      ),
      71 => 
      array (
        'code' => '',
        'name' => '',
      ),
      72 => 
      array (
        'code' => '',
        'name' => '',
      ),
      73 => 
      array (
        'code' => '',
        'name' => '',
      ),
      74 => 
      array (
        'code' => '',
        'name' => '',
      ),
      75 => 
      array (
        'code' => '',
        'name' => '',
      ),
      76 => 
      array (
        'code' => '',
        'name' => '',
      ),
      77 => 
      array (
        'code' => '',
        'name' => '',
      ),
      78 => 
      array (
        'code' => '',
        'name' => '',
      ),
      79 => 
      array (
        'code' => '',
        'name' => '',
      ),
      80 => 
      array (
        'code' => '',
        'name' => '',
      ),
      81 => 
      array (
        'code' => '',
        'name' => '',
      ),
      82 => 
      array (
        'code' => '',
        'name' => '',
      ),
      83 => 
      array (
        'code' => '',
        'name' => '',
      ),
      84 => 
      array (
        'code' => '',
        'name' => '',
      ),
      85 => 
      array (
        'code' => '',
        'name' => '',
      ),
      86 => 
      array (
        'code' => '',
        'name' => '',
      ),
      87 => 
      array (
        'code' => '',
        'name' => '',
      ),
      88 => 
      array (
        'code' => '',
        'name' => '',
      ),
      89 => 
      array (
        'code' => '',
        'name' => '',
      ),
      90 => 
      array (
        'code' => '',
        'name' => '',
      ),
      91 => 
      array (
        'code' => '',
        'name' => '',
      ),
      92 => 
      array (
        'code' => '',
        'name' => '',
      ),
      93 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'KH' => 
    array (
      1 => 
      array (
        'code' => 'BA',
        'name' => 'Баттамбанг',
      ),
      2 => 
      array (
        'code' => 'BM',
        'name' => 'Бантеаймеантьей',
      ),
      3 => 
      array (
        'code' => 'KB',
        'name' => 'Каеп',
      ),
      4 => 
      array (
        'code' => 'KK',
        'name' => 'Кохконг',
      ),
      5 => 
      array (
        'code' => 'KL',
        'name' => 'Кандаль',
      ),
      6 => 
      array (
        'code' => 'KM',
        'name' => 'Кампонгтям',
      ),
      7 => 
      array (
        'code' => 'KN',
        'name' => 'Кампонгчнанг',
      ),
      8 => 
      array (
        'code' => 'KO',
        'name' => 'Кампонгсаом',
      ),
      9 => 
      array (
        'code' => 'KP',
        'name' => 'Кампот',
      ),
      10 => 
      array (
        'code' => 'KR',
        'name' => 'Кратьэх',
      ),
      11 => 
      array (
        'code' => 'KT',
        'name' => 'Кампонгтхом',
      ),
      12 => 
      array (
        'code' => 'KU',
        'name' => 'Кампонгспы',
      ),
      13 => 
      array (
        'code' => 'MK',
        'name' => 'Мондолькири',
      ),
      14 => 
      array (
        'code' => 'OM',
        'name' => 'Оддармеантьей',
      ),
      15 => 
      array (
        'code' => 'PA',
        'name' => 'Пайлин',
      ),
      16 => 
      array (
        'code' => 'PG',
        'name' => 'Прейвэнг',
      ),
      17 => 
      array (
        'code' => 'PP',
        'name' => 'Пномпень',
      ),
      18 => 
      array (
        'code' => 'PR',
        'name' => 'Прэахвихеа',
      ),
      19 => 
      array (
        'code' => 'PS',
        'name' => 'Кампонгсаом',
      ),
      20 => 
      array (
        'code' => 'PU',
        'name' => 'Поусат',
      ),
      21 => 
      array (
        'code' => 'RK',
        'name' => 'Раттанак Кири',
      ),
      22 => 
      array (
        'code' => 'SI',
        'name' => 'Сиемреап',
      ),
      23 => 
      array (
        'code' => 'SR',
        'name' => 'Свайриенг',
      ),
      24 => 
      array (
        'code' => 'ST',
        'name' => 'Стынгтраенг',
      ),
      25 => 
      array (
        'code' => 'TK',
        'name' => 'Такео',
      ),
    ),
    'KM' => 
    array (
      1 => 
      array (
        'code' => 'G',
        'name' => 'Нгазиджа',
      ),
      2 => 
      array (
        'code' => 'A',
        'name' => 'Анжуан',
      ),
      3 => 
      array (
        'code' => 'M',
        'name' => 'Мвали',
      ),
    ),
    'KY' => 
    array (
      1 => 
      array (
        'code' => 'CR',
        'name' => 'Крик',
      ),
      2 => 
      array (
        'code' => 'EA',
        'name' => 'Восточные',
      ),
      3 => 
      array (
        'code' => 'ML',
        'name' => 'Мидленд',
      ),
      4 => 
      array (
        'code' => 'ST',
        'name' => 'Саут Таун',
      ),
      5 => 
      array (
        'code' => 'SP',
        'name' => 'Спот-Бей',
      ),
      6 => 
      array (
        'code' => 'SK',
        'name' => 'Стейк-Бей',
      ),
      7 => 
      array (
        'code' => 'WD',
        'name' => 'Вест-Энд',
      ),
      8 => 
      array (
        'code' => 'WN',
        'name' => 'Западный',
      ),
    ),
    'PF' => 
    array (
      1 => 
      array (
        'code' => 'M',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'T',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'I',
        'name' => '',
      ),
      4 => 
      array (
        'code' => 'V',
        'name' => '',
      ),
      5 => 
      array (
        'code' => 'S',
        'name' => '',
      ),
    ),
    'SV' => 
    array (
      1 => 
      array (
        'code' => 'AH',
        'name' => 'Ауачапан',
      ),
      2 => 
      array (
        'code' => 'CA',
        'name' => 'Кабаньяс',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'Чалатенанго',
      ),
      4 => 
      array (
        'code' => 'CU',
        'name' => 'Кускатлан',
      ),
      5 => 
      array (
        'code' => 'LB',
        'name' => 'Ла-Либертад',
      ),
      6 => 
      array (
        'code' => 'PZ',
        'name' => 'Ла-Пас',
      ),
      7 => 
      array (
        'code' => 'UN',
        'name' => 'Ла-Уньон',
      ),
      8 => 
      array (
        'code' => 'MO',
        'name' => 'Морасан',
      ),
      9 => 
      array (
        'code' => 'SM',
        'name' => 'Сан-Мигель',
      ),
      10 => 
      array (
        'code' => 'SS',
        'name' => 'Сан-Сальвадор',
      ),
      11 => 
      array (
        'code' => 'SV',
        'name' => 'Сан-Висенте',
      ),
      12 => 
      array (
        'code' => 'SA',
        'name' => 'Санта-Ана',
      ),
      13 => 
      array (
        'code' => 'SO',
        'name' => 'Сонсонате',
      ),
      14 => 
      array (
        'code' => 'US',
        'name' => 'Усулутан',
      ),
    ),
    'TD' => 
    array (
      1 => 
      array (
        'code' => 'BA',
        'name' => 'Батха',
      ),
      2 => 
      array (
        'code' => 'BI',
        'name' => 'Бильтин',
      ),
      3 => 
      array (
        'code' => 'BE',
        'name' => 'Борку-Эннеди-Тибести',
      ),
      4 => 
      array (
        'code' => 'CB',
        'name' => 'Шари-Багирми',
      ),
      5 => 
      array (
        'code' => 'GU',
        'name' => 'Гера',
      ),
      6 => 
      array (
        'code' => 'KA',
        'name' => 'Канем',
      ),
      7 => 
      array (
        'code' => 'LA',
        'name' => 'Лак',
      ),
      8 => 
      array (
        'code' => 'LC',
        'name' => 'Западный Логон',
      ),
      9 => 
      array (
        'code' => 'LR',
        'name' => 'Восточный Логон',
      ),
      10 => 
      array (
        'code' => 'MK',
        'name' => 'Восточное Майо-Кеби',
      ),
      11 => 
      array (
        'code' => 'MC',
        'name' => 'Среднее Шари',
      ),
      12 => 
      array (
        'code' => 'OU',
        'name' => 'Ваддай',
      ),
      13 => 
      array (
        'code' => 'SA',
        'name' => 'Саламат',
      ),
      14 => 
      array (
        'code' => 'TA',
        'name' => 'Танджиле',
      ),
    ),
    'TF' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'A',
        'name' => '',
      ),
      4 => 
      array (
        'code' => 'P',
        'name' => '',
      ),
      5 => 
      array (
        'code' => 'D',
        'name' => '',
      ),
    ),
    'TP' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Айлеу',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'Айнару',
      ),
      3 => 
      array (
        'code' => 'BA',
        'name' => 'Баукау',
      ),
      4 => 
      array (
        'code' => 'BO',
        'name' => 'Бобонару',
      ),
      5 => 
      array (
        'code' => 'CO',
        'name' => 'Кова-Лима',
      ),
      6 => 
      array (
        'code' => 'DI',
        'name' => 'Дили',
      ),
      7 => 
      array (
        'code' => 'ER',
        'name' => 'Эрмера',
      ),
      8 => 
      array (
        'code' => 'LA',
        'name' => 'Лаутен',
      ),
      9 => 
      array (
        'code' => 'LI',
        'name' => 'Ликиса',
      ),
      10 => 
      array (
        'code' => 'MT',
        'name' => 'Manatuto',
      ),
      11 => 
      array (
        'code' => 'MF',
        'name' => 'Мануфахи',
      ),
      12 => 
      array (
        'code' => 'OE',
        'name' => 'Окуси-Амбено',
      ),
      13 => 
      array (
        'code' => 'VI',
        'name' => 'Викеке',
      ),
    ),
    86 => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => '',
      ),
      2 => 
      array (
        'code' => 'D',
        'name' => '',
      ),
      3 => 
      array (
        'code' => 'G',
        'name' => '',
      ),
      4 => 
      array (
        'code' => 'J',
        'name' => '',
      ),
      5 => 
      array (
        'code' => 'M',
        'name' => '',
      ),
      6 => 
      array (
        'code' => 'P',
        'name' => '',
      ),
      7 => 
      array (
        'code' => 'C',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
  ),
  'document_category_dom' => 
  array (
    '' => '',
    'Knowledege Base' => 'База знаний',
    'Marketing' => 'Маркетинг',
    'Sales' => 'Продажи',
  ),
  'document_status_dom' => 
  array (
    'Active' => 'Активен',
    'Draft' => 'Черновик',
    'Expired' => 'Просрочен',
    'FAQ' => 'Часто задаваемые вопросы',
    'Pending' => 'В ожидании',
    'Under Review' => 'На рассмотрении',
  ),
  'document_subcategory_dom' => 
  array (
    '' => '',
    'FAQ' => 'Часто задаваемые вопросы',
    'Marketing Collateral' => 'Дополнительное маркетинговое обеспечение',
    'Product Brochures' => 'Брошюры продуктов',
  ),
  'document_template_type_dom' => 
  array (
    '' => '',
    'eula' => 'Пользовательское соглашение (EULA)',
    'license' => 'Лицензионное соглашение',
    'mailmerge' => 'Слияние почты',
    'nda' => 'Соглашение о неразглашении (NDA)',
  ),
  'documentation' => 
  array (
    'COM' => '05_Sugar_Community_Edition',
    'CORP' => '03_Sugar_Corporate',
    'ENT' => '02_Sugar_Enterprise',
    'LBL_DOCS' => 'Документация',
    'PRO' => '04_Sugar_Professional',
    'ULT' => '01_Sugar_Ultimate',
  ),
  'dom_cal_day_long' => 
  array (
    0 => '',
    1 => 'Воскресенье',
    2 => 'Понедельник',
    3 => 'Вторник',
    4 => 'Среда',
    5 => 'Четверг',
    6 => 'Пятница',
    7 => 'Суббота',
  ),
  'dom_cal_day_of_week' => 
  array (
    0 => 'Вс',
    1 => 'Пн',
    2 => 'Вт',
    3 => 'Ср',
    4 => 'Чт',
    5 => 'Пт',
    6 => 'Сб',
  ),
  'dom_cal_day_short' => 
  array (
    0 => '',
    1 => 'Вс',
    2 => 'Пн',
    3 => 'Вт',
    4 => 'Ср',
    5 => 'Чт',
    6 => 'Пт',
    7 => 'Сб',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Январь',
    2 => 'Февраль',
    3 => 'Март',
    4 => 'Апрель',
    5 => 'Май',
    6 => 'Июнь',
    7 => 'Июль',
    8 => 'Август',
    9 => 'Сентябрь',
    10 => 'Октябрь',
    11 => 'Ноябрь',
    12 => 'Декабрь',
  ),
  'dom_cal_month_short' => 
  array (
    0 => '',
    1 => 'Янв',
    2 => 'Фев',
    3 => 'Мар',
    4 => 'Апр',
    5 => 'Май',
    6 => 'Июн',
    7 => 'Июл',
    8 => 'Авг',
    9 => 'Сен',
    10 => 'Окт',
    11 => 'Ноя',
    12 => 'Дек',
  ),
  'dom_email_archived_status' => 
  array (
    'archived' => 'Архив',
  ),
  'dom_email_bool' => 
  array (
    'bool_false' => 'Нет',
    'bool_true' => 'Да',
  ),
  'dom_email_distribution' => 
  array (
    '' => '--Не выбрано--',
    'direct' => 'Прямое назначение',
    'leastBusy' => 'Наименее занятой',
    'roundRobin' => 'В цикле',
  ),
  'dom_email_distribution_for_auto_create' => 
  array (
    'leastBusy' => 'Наименее занятой',
    'roundRobin' => 'В цикле',
  ),
  'dom_email_editor_option' => 
  array (
    '' => 'Формат e-mail по умолчанию',
    'html' => 'HTML-сообщение',
    'plain' => 'Текстовое сообщение',
  ),
  'dom_email_errors' => 
  array (
    1 => 'Выбирайте только одного пользователя, когда напрямую работаете с назначенными записями.',
    2 => 'Вы должны назначать только выбранные записи, когда напрямую работаете с назначенными записями.',
  ),
  'dom_email_link_type' => 
  array (
    'mailto' => 'Внешний почтовый клиент',
    'sugar' => 'Почтовый клиент SugarCRM',
  ),
  'dom_email_server_type' => 
  array (
    '' => '--Не выбрано--',
    'imap' => 'IMAP',
  ),
  'dom_email_status' => 
  array (
    'archived' => 'Архив',
    'closed' => 'Закрыто',
    'draft' => 'В черновики',
    'read' => 'Прочитано',
    'replied' => 'Отвечено',
    'send_error' => 'Ошибка отправки',
    'sent' => 'Отправлено',
    'unread' => 'Непрочитано',
  ),
  'dom_email_types' => 
  array (
    'archived' => 'Архив',
    'campaign' => 'Маркетинговая кампания:',
    'draft' => 'В черновики',
    'inbound' => 'Входящее',
    'out' => 'Отправлено',
  ),
  'dom_int_bool' => 
  array (
    0 => 'Нет',
    1 => 'Да',
  ),
  'dom_mailbox_type' => 
  array (
    'bounce' => 'Обработка возврата',
    'createcase' => 'Новое обращение',
    'pick' => '--Не выбрано--',
  ),
  'dom_meeting_accept_options' => 
  array (
    'accept' => 'Принято',
    'decline' => 'Отклонено',
    'tentative' => 'Под вопросом',
  ),
  'dom_meeting_accept_status' => 
  array (
    'accept' => 'Принято',
    'decline' => 'Отклонено',
    'none' => '--не выбрано--',
    'tentative' => 'Под вопросом',
  ),
  'dom_meridiem_lowercase' => 
  array (
    'am' => 'am',
    'pm' => 'am',
  ),
  'dom_meridiem_uppercase' => 
  array (
    'AM' => 'AM',
    'PM' => 'PM',
  ),
  'dom_report_types' => 
  array (
    'Matrix' => 'Сводный отчёт',
    'detailed_summary' => 'Отчёт с промежуточными итогами',
    'summary' => 'Итоговый отчёт',
    'tabular' => 'Строки и столбцы',
  ),
  'dom_switch_bool' => 
  array (
    '' => 'Нет',
    'off' => 'Нет',
    'on' => 'Да',
  ),
  'dselect_type_dom' => 
  array (
    'Does not Equal' => 'Неравно',
    'Equals' => 'Равно',
    'Less Than' => 'меньше, чем',
    'More Than' => 'Больше, чем',
  ),
  'dtselect_type_dom' => 
  array (
    'Less Than' => 'меньше, чем',
    'More Than' => 'было больше, чем',
  ),
  'duration_dom' => 
  array (
    '' => '--не выбрано--',
    900 => '15 минут',
    1800 => '30 минут',
    2700 => '45 минут',
    3600 => '1 час',
    5400 => '1,5 часа',
    7200 => '2 часа',
    10800 => '3 часа',
    21600 => '6 часов',
    86400 => '1 день',
    172800 => '2 дня',
    259200 => '3 дня',
    604800 => '1 неделя',
  ),
  'duration_intervals' => 
  array (
    0 => '00',
    15 => '15',
    30 => '30',
    45 => '45',
  ),
  'eapm_list' => 
  array (
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'GoToMeeting' => 'GoToMeeting',
    'Google' => 'Google Docs',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Sugar' => 'Sugar',
    'Twitter' => 'Twitter',
    'WebEx' => 'WebEx',
  ),
  'eapm_list_documents' => 
  array (
    'Google' => 'Документы Google',
  ),
  'eapm_list_import' => 
  array (
    'Google' => 'Контакты Google',
  ),
  'emailTemplates_type_list' => 
  array (
    '' => '--не выбрано--',
    'campaign' => 'Маркетинговая кампания',
    'email' => 'E-mail',
    'workflow' => 'Бизнес процесс',
  ),
  'emailTemplates_type_list_campaigns' => 
  array (
    '' => '--не выбрано--',
    'campaign' => 'Маркетинговая кампания',
  ),
  'emailTemplates_type_list_no_workflow' => 
  array (
    '' => '--не выбрано--',
    'campaign' => 'Маркетинговая кампания',
    'email' => 'E-mail',
  ),
  'email_check_interval_dom' => 
  array (
    -1 => 'Вручную',
    5 => 'Каждые 5 минут',
    15 => 'Каждые 15 минут',
    30 => 'Каждые 30 минут',
    60 => 'Каждый час',
  ),
  'email_marketing_status_dom' => 
  array (
    '' => '',
    'active' => 'Активно',
    'inactive' => 'Неактивно',
  ),
  'email_settings_for_ssl' => 
  array (
    0 => '0',
    1 => 'SSL',
    2 => 'TLS',
  ),
  'email_settings_num_dom' => 
  array (
    10 => '10',
    20 => '20',
    50 => '50',
  ),
  'employee_status_dom' => 
  array (
    'Active' => 'Активен',
    'Leave of Absence' => 'В отпуске',
    'Terminated' => 'Уволен',
  ),
  'extapi_meeting_password' => 
  array (
    'WebEx' => 'WebEx',
  ),
  'filter_checkbox_dom' => 
  array (
    0 => 'Ошибка',
    1 => 'Верно',
  ),
  'font_size_dom' => 
  array (
    -5 => 'Меньше (-5)',
    -4 => 'Меньше (-4)',
    -3 => 'Меньше (-3)',
    -2 => 'Меньше (-2)',
    -1 => 'Меньше (-1)',
    'Default' => 'По умолчанию',
    1 => 'Больше (+1)',
    2 => 'Больше (+2)',
    3 => 'Больше (+3)',
    4 => 'Больше (+4)',
    5 => 'Больше (+5)',
  ),
  'forecast_fiscal_year_options' => 
  array (
    'current_year' => '{{год}}',
    'next_year' => '{{год}}',
  ),
  'forecast_pareto_visibility_options' => 
  array (
    'group' => 'Прогноз моей команды',
    'user' => 'Мой прогноз',
  ),
  'forecast_pipeline_visibility_options' => 
  array (
    'group' => 'Воронка продаж моей команды',
    'user' => 'Моя воронка продаж',
  ),
  'forecast_schedule_status_dom' => 
  array (
    'Active' => 'Активно',
    'Inactive' => 'Неактивно',
  ),
  'forecast_type_dom' => 
  array (
    'Direct' => 'Прямой',
    'Rollup' => 'Сдвинутый',
  ),
  'forecasts_chart_options_group' => 
  array (
    'forecast' => 'Включено в прогноз',
    'probability' => 'Вероятность',
    'sales_stage' => 'Стадия продажи',
  ),
  'forecasts_config_ranges_options_dom' => 
  array (
    'show_binary' => 'Два промежутка',
    'show_buckets' => 'Три промежутка',
    'show_custom_buckets' => 'Кастомизированные диапазоны',
  ),
  'forecasts_config_worksheet_layout_forecast_by_options_dom' => 
  array (
    'Opportunities' => 'Продажи',
    'RevenueLineItems' => 'Доход по продуктам',
  ),
  'forecasts_options_dataset' => 
  array (
    'best' => 'Оптимистичный',
    'likely' => 'Вероятный',
    'worst' => 'Пессимистичный',
  ),
  'forecasts_timeperiod_options_dom' => 
  array (
    'Annual' => 'Ежегодно (суб-периоды поквартально)',
    'Quarter' => 'Квартально (суб-периоды помесячно)',
  ),
  'forecasts_timeperiod_types_dom' => 
  array (
    'chronological' => 'Дата, где за основу берется год',
  ),
  'fts_type' => 
  array (
    'Elastic' => 'ElasticSearch',
  ),
  'gender_list' => 
  array (
    'female' => 'Жен.',
    'male' => 'Муж.',
  ),
  'generic_timeperiod_options' => 
  array (
    'current' => 'Этот квартал',
    'next' => 'Следующий квартал',
    'year' => 'В этом году',
  ),
  'history_filter_options' => 
  array (
    7 => 'Последние 7 дней',
    30 => 'Последние 30 дней',
    90 => 'Прошлый квартал',
  ),
  'history_limit_options' => 
  array (
    5 => '5',
    10 => '10',
    15 => '15',
    20 => '20',
  ),
  'history_visibility_options' => 
  array (
    'group' => 'Нет',
    'user' => 'Да',
  ),
  'import_delimeter_options' => 
  array (
    ',' => ',',
    '.' => '.',
    ':' => ':',
    ';' => ';',
    '\\t' => '\\t',
    'other' => 'Другое:',
    '|' => '|',
  ),
  'import_enclosure_options' => 
  array (
    '' => '--не выбрано--',
    '"' => 'Двойная кавычка (")',
    '\'' => 'Одинарная кавычка ($#39;)',
    'other' => 'Другое:',
  ),
  'in_total_group_stages' => 
  array (
    'Closed Accepted' => 'Принято и закрыто',
    'Closed Dead' => 'Закрыто с прекращением',
    'Closed Lost' => 'Закрыто без успеха',
    'Confirmed' => 'Подтверждено',
    'Delivered' => 'Доставлено',
    'Draft' => 'Черновик',
    'Negotiation' => 'Согласование',
    'On Hold' => 'Ведется',
  ),
  'industry_dom' => 
  array (
    '' => '',
    'Apparel' => 'Одежда',
    'Banking' => 'Банковское дело',
    'Biotechnology' => 'Биотехнологии',
    'Chemicals' => 'Химическая промышленность',
    'Communications' => 'Коммуникации',
    'Construction' => 'Строительство',
    'Consulting' => 'Консалтинг',
    'Education' => 'Образование',
    'Electronics' => 'Электронное оборудование',
    'Energy' => 'Энергетика',
    'Engineering' => 'Инженерия',
    'Entertainment' => 'Развлечения',
    'Environmental' => 'Экология',
    'Finance' => 'Финансы',
    'Government' => 'Правительство',
    'Healthcare' => 'Здравоохранение',
    'Hospitality' => 'Гостиничное дело',
    'Insurance' => 'Страхование',
    'Machinery' => 'Машиностроение',
    'Manufacturing' => 'Производство',
    'Media' => 'Медиа',
    'Not For Profit' => 'Некоммерческая деятельность',
    'Other' => 'Другой',
    'Recreation' => 'Отдых',
    'Retail' => 'Торговля',
    'Shipping' => 'Грузовые перевозки',
    'Technology' => 'Технологии',
    'Telecommunications' => 'Телекоммуникации',
    'Transportation' => 'Транспортные перевозки',
    'Utilities' => 'Коммунальные системы',
  ),
  'interactions_options' => 
  array (
    'custom' => 'Мой кастомизированный фильтр',
    'favorites' => 'Избранное',
    7 => 'Последние 7 дней',
    30 => 'Последние 30 дней',
    90 => 'Прошлый квартал',
  ),
  'issue_priority_dom' => 
  array (
    'High' => 'Высокий',
    'Low' => 'Низкий',
    'Medium' => 'Средний',
    'Urgent' => 'Срочный',
  ),
  'issue_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Принято',
    'Closed' => 'Закрыто',
    'Duplicate' => 'Дублировать',
    'Invalid' => 'Недействительно',
    'Out of Date' => 'Устарело',
  ),
  'issue_status_dom' => 
  array (
    'Assigned' => 'Назначено',
    'Closed' => 'Закрыто',
    'New' => 'Новое',
    'Pending' => 'В ожидании',
    'Rejected' => 'Отклонено',
  ),
  'kbadmin_actions_dom' => 
  array (
    '' => '--Действия администратора--',
    'Apply Tags On Articles' => 'Применить метки к статьям',
    'Create New Tag' => 'Создать новую метку',
    'Delete Selected Articles' => 'Удалить выбранные метки',
    'Delete Tag' => 'Удалить метку',
    'Move Selected Articles' => 'Переместить выбранные статьи',
    'Rename Tag' => 'Переименовать метку',
  ),
  'kbdocument_attachment_option_dom' => 
  array (
    '' => '',
    'mime' => 'Указать тип MIME',
    'name' => 'Указать название',
    'none' => 'Нет',
    'some' => 'Есть вложения',
  ),
  'kbdocument_canned_search' => 
  array (
    'added' => 'Добавленные за последние 30 дней',
    'all' => 'Везде',
    'faqs' => 'Часто Задаваемые Вопросы',
    'pending' => 'Ожидающие моего подтверждения',
    'updated' => 'Измененные за последние 30 дней',
  ),
  'kbdocument_date_filter_options' => 
  array (
    '' => '',
    'after' => 'После',
    'before' => 'До',
    'between_dates' => 'Между',
    'isnull' => 'Без даты',
    'last_30_days' => 'Прошедшие 30 дней',
    'last_7_days' => 'Прошедшие 7 дней',
    'last_month' => 'Прошлый месяц',
    'last_year' => 'Прошлый год',
    'next_30_days' => 'Следующие 30 дней',
    'next_7_days' => 'Следующие 7 дней',
    'next_month' => 'Следующий месяц',
    'next_year' => 'Следующий год',
    'on' => 'Конкретная дата',
    'this_month' => 'Текущий месяц',
    'this_year' => 'Текущий год',
  ),
  'kbdocument_status_dom' => 
  array (
    'Draft' => 'Черновик',
    'Expired' => 'Просрочен',
    'In Review' => 'В рассмотрении',
    'Published' => 'Опубликован',
  ),
  'kbdocument_viewing_frequency_dom' => 
  array (
    '' => '',
    'Bot_10' => 'Последние 10',
    'Bot_20' => 'Последние 20',
    'Bot_5' => 'Последние 5',
    'Top_10' => 'Первые 10',
    'Top_20' => 'Первые 20',
    'Top_5' => 'Первые 5',
  ),
  'language_pack_name' => 'Английский (США)',
  'layouts_dom' => 
  array (
    'Invoice' => 'Инвойс',
    'Standard' => 'Предложение',
  ),
  'lead_conv_activity_opt' => 
  array (
    'copy' => 'Копировать',
    'donothing' => 'Ничего не делать',
    'move' => 'Переместить',
  ),
  'lead_source_dom' => 
  array (
    '' => '',
    'Campaign' => 'Маркетинговая кампания',
    'Cold Call' => 'Холодный звонок',
    'Conference' => 'Конференция',
    'Direct Mail' => 'Прямая рассылка',
    'Email' => 'E-mail',
    'Employee' => 'Сотрудник',
    'Existing Customer' => 'Существующий клиент',
    'Other' => 'Дополнительно',
    'Partner' => 'Партнер',
    'Public Relations' => 'PR-деятельность',
    'Self Generated' => 'Прямое обращение',
    'Support Portal User Registration' => 'Пользовательская регистрация в Портал Поддержки',
    'Trade Show' => 'Специализированная выставка',
    'Web Site' => 'Веб-сайт',
    'Word of mouth' => 'Устная рекомендация',
  ),
  'lead_status_dom' => 
  array (
    '' => '',
    'Assigned' => 'Назначен',
    'Converted' => 'Преобразован',
    'Dead' => 'Потерянный',
    'In Process' => 'В процессе',
    'New' => 'Новый',
    'Recycled' => 'Повторный',
  ),
  'library_type' => 
  array (
    'Books' => 'Книга',
    'DVD' => 'DVD',
    'Magazines' => 'Журналы',
    'Music' => 'Музыка',
  ),
  'link_target_dom' => 
  array (
    '_blank' => 'Новая страница',
    '_self' => 'Текущая страница',
  ),
  'list_visibility_options' => 
  array (
    0 => 'Нет',
    1 => 'Да',
  ),
  'meeting_status_dom' => 
  array (
    'Held' => 'Состоялась',
    'Not Held' => 'Отменена',
    'Planned' => 'Запланирована',
  ),
  'meeting_type_dom' => 
  array (
    'Other' => 'Другой',
    'Sugar' => 'SugarCRM',
  ),
  'merge_operators_dom' => 
  array (
    'exact' => 'Точное соответствие',
    'like' => 'Содержит',
    'start' => 'Начинается с',
  ),
  'messenger_type_dom' => 
  array (
    '' => '',
    'AOL' => 'AOL',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
  ),
  'moduleIconList' => 
  array (
    'Calls' => 'Звонки',
    'Campaigns' => 'Маркетинговые кампании',
    'Cases' => 'Обращения',
    'Notes' => 'Заметки',
    'Quotas' => 'Квота',
    'Tasks' => 'Задачи',
  ),
  'moduleList' => 
  array (
    'ACLRoles' => 'Роли',
    'Accounts' => 'Контрагенты',
    'Activities' => 'Мероприятия',
    'Administration' => 'Администрирование',
    'Bugs' => 'Отслеживание ошибок',
    'Calendar' => 'Календарь',
    'Calls' => 'Звонки',
    'CampaignLog' => 'Журнал маркетинговых кампании',
    'CampaignTrackers' => 'Индикаторы кампании',
    'Campaigns' => 'Маркетинговые кампании',
    'Cases' => 'Обращения',
    'Comments' => 'Комментарии',
    'Connectors' => 'Подключения',
    'Contacts' => 'Контакты',
    'ContractTypes' => 'Типы контрактов',
    'Contracts' => 'Контракты',
    'Currencies' => 'Типы валюты',
    'CustomQueries' => 'Индивидуальные запросы',
    'DataSets' => 'Форматы данных',
    'DocumentRevisions' => 'Ревизии документов',
    'Documents' => 'Документы',
    'EAPM' => 'Внешние учетные записи',
    'EmailAddresses' => 'E-mail-адрес',
    'EmailMarketing' => 'Рассылки E-mail',
    'EmailTemplates' => 'Шаблоны E-mail',
    'Emails' => 'E-mail',
    'Employees' => 'Сотрудники',
    'FAQ' => 'Часто задаваемые вопросы',
    'Feedbacks' => 'Обратная связь',
    'Feeds' => 'RSS-ленты',
    'Filters' => 'Фильтры',
    'ForecastManagerWorksheets' => 'Планшет менеджера прогнозов',
    'ForecastSchedule' => 'Расписание прогнозов',
    'ForecastWorksheets' => 'Планшет прогнозов',
    'Forecasts' => 'Прогнозы',
    'Home' => 'Главная',
    'InboundEmail' => 'Входящий E-mail',
    'KBDocuments' => 'База знаний',
    'Leads' => 'Предварительные контакты',
    'Library' => 'Библиотека',
    'Manufacturers' => 'Производители',
    'Meetings' => 'Встречи',
    'MergeRecords' => 'Объединение записей',
    'Newsletters' => 'Обзор рекламных проспектов',
    'Notes' => 'Заметки',
    'Notifications' => 'Уведомления',
    'OAuthKeys' => 'OAuth ключи потребителей',
    'OAuthTokens' => 'Метки OAuth',
    'Opportunities' => 'Сделки',
    'PdfManager' => 'Менеджер PDF',
    'ProductCategories' => 'Категории продуктов',
    'ProductTemplates' => 'Каталог продуктов',
    'ProductTypes' => 'Виды продуктов',
    'Products' => 'Продукты',
    'Project' => 'Проект',
    'ProjectTask' => 'Проектные задачи',
    'ProspectLists' => 'Списки адресатов',
    'Prospects' => 'Адресаты',
    'Queues' => 'Очереди',
    'Quotas' => 'Плановые объёмы продаж',
    'Quotes' => 'Коммерческие предложения',
    'Releases' => 'Версии',
    'ReportMaker' => 'Отчеты по компании',
    'Reports' => 'Отчеты',
    'Reports_1' => 'Отчеты',
    'RevenueLineItems' => 'Доход по продуктам',
    'Roles' => 'Роли',
    'SNIP' => 'Архивация Email',
    'SavedSearch' => 'Сохраненные поиски',
    'Schedulers' => 'Планировщики',
    'Shippers' => 'Службы доставки',
    'Styleguide' => 'Руководство по стилю',
    'Subscriptions' => 'Подписки',
    'SugarFavorites' => 'Избранное',
    'Sugar_Favorites' => 'Избранное',
    'Sync' => 'Синхронизация',
    'Tags' => 'Теги',
    'Tasks' => 'Задачи',
    'TaxRates' => 'Налоговые ставки',
    'TeamNotices' => 'Уведомления для команд',
    'Teams' => 'Команды',
    'TimePeriods' => 'Промежутки времени',
    'TrackerPerfs' => 'Функционирование трекера',
    'TrackerQueries' => 'Запросы трекера',
    'TrackerSessions' => 'Сессии трекера',
    'Trackers' => 'Трекеры',
    'UpgradeWizard' => 'Мастер обновления',
    'UserSignatures' => 'Подписи пользователя',
    'Users' => 'Пользователи',
    'WebLogicHooks' => 'Веб хуки',
    'Words' => 'Слова',
    'WorkFlow' => 'Определения Рабочего процесса',
    'Worksheet' => 'Планшет',
    'iFrames' => 'Мои сайты',
    'pmse_Business_Rules' => 'Процесс обработки бизнес-правил',
    'pmse_Emails_Templates' => 'Процесс обработки шаблонов Email-ов',
    'pmse_Inbox' => 'Процессы',
    'pmse_Project' => 'Описание используемых процессов',
  ),
  'moduleListSingular' => 
  array (
    'ACLRoles' => 'Роль',
    'Accounts' => 'Контрагент',
    'Activities' => 'Мероприятие',
    'ActivityStream' => 'Лента мероприятий',
    'Administration' => 'Администрирование',
    'Bugs' => 'Отслеживание ошибок',
    'Calendar' => 'Календарь',
    'Calls' => 'Звонок',
    'CampaignLog' => 'Журнал маркетинговых кампаний',
    'CampaignTrackers' => 'Индикатор кампании',
    'Campaigns' => 'Маркетинговая кампания',
    'Cases' => 'Обращение',
    'Comments' => 'Комментарий',
    'Connectors' => 'Коннектор',
    'Contacts' => 'Контакт',
    'ContractTypes' => 'Тип контракта',
    'Contracts' => 'Контракт',
    'Currencies' => 'Валюта',
    'CustomQueries' => 'Пользовательский запрос',
    'Dashboard' => 'Диаграммы',
    'DataSets' => 'Формат данных',
    'DocumentRevisions' => 'Ревизия документа',
    'Documents' => 'Документ',
    'EAPM' => 'Внешние учетные записи',
    'EmailAddresses' => 'Адрес Email',
    'EmailMarketing' => 'Рассылки Email',
    'EmailTemplates' => 'Шаблон Email',
    'Emails' => 'E-mail',
    'Employees' => 'Сотрудник',
    'FAQ' => 'Часто задаваемые вопросы',
    'Feedbacks' => 'Обратная связь',
    'Feeds' => 'RSS',
    'Filters' => 'Фильтр',
    'ForecastManagerWorksheets' => 'Планшет менеджера прогнозов',
    'ForecastSchedule' => 'Расписание прогноза',
    'ForecastWorksheets' => 'Планшет прогнозов',
    'Forecasts' => 'Прогноз',
    'Home' => 'Главная',
    'InboundEmail' => 'Входящее Email-сообщение',
    'KBDocuments' => 'Документ базы знаний',
    'Leads' => 'Предварительный контакт',
    'Library' => 'Библиотека',
    'Manufacturers' => 'Производитель',
    'Meetings' => 'Встреча',
    'MergeRecords' => 'Объединить запись',
    'Newsletters' => 'Рекламный проспект',
    'Notes' => 'Заметка',
    'Notifications' => 'Уведомление',
    'OAuthKeys' => 'Ключ потребителя OAuth',
    'OAuthTokens' => 'Метка OAuth',
    'Opportunities' => 'Сделка',
    'PdfManager' => 'Менеджер PDF',
    'ProductCategories' => 'Категория продукта',
    'ProductTemplates' => 'Каталог продуктов',
    'ProductTypes' => 'Тип продукта',
    'Products' => 'Продукт',
    'Project' => 'Проект',
    'ProjectTask' => 'Проектная задача',
    'ProspectLists' => 'Целевой список',
    'Prospects' => 'Адресаты',
    'Queues' => 'Очередь',
    'Quotas' => 'Квота',
    'Quotes' => 'Коммерческое предложение',
    'Releases' => 'Релиз',
    'ReportMaker' => 'Отчеты по компании',
    'Reports' => 'Отчет',
    'Reports_1' => 'Сохраненный отчет',
    'RevenueLineItems' => 'Доход по продукту',
    'Roles' => 'Роль',
    'SNIP' => 'Архивация Email',
    'SavedSearch' => 'Соохраненный поиск',
    'Schedulers' => 'Планировщик',
    'Shippers' => 'Служба доставки',
    'Styleguide' => 'Руководство по стилю',
    'Subscriptions' => 'Подписка на рассылку',
    'SugarFavorites' => 'Избранное Sugar',
    'Sugar_Favorites' => 'Избранное',
    'Sync' => 'Синхронизация',
    'Tags' => 'Теги',
    'Tasks' => 'Задача',
    'TaxRates' => 'Налоговая ставка',
    'TeamNotices' => 'Уведомление для команды',
    'Teams' => 'Команда',
    'TimePeriods' => 'Промежуток времени',
    'TrackerPerfs' => 'Функционирование трекера',
    'TrackerQueries' => 'Запрос трекера',
    'TrackerSessions' => 'Сессия трекера',
    'Trackers' => 'Tracker',
    'UpgradeWizard' => 'Мастер обновления',
    'UserSignatures' => 'Подпись пользователя',
    'Users' => 'Пользователь',
    'WebLogicHooks' => 'Веб хук',
    'Words' => 'Слово',
    'WorkFlow' => 'Бизнес процесс',
    'Worksheet' => 'Worksheet',
    'iFrames' => 'Мои сайты',
    'pmse_Business_Rules' => 'Процесс обработки бизнес-правила',
    'pmse_Emails_Templates' => 'Процесс обработки шаблонов Email-ов',
    'pmse_Inbox' => 'Процесс',
    'pmse_Project' => 'Описание используемых технологических процессов',
  ),
  'mselect_multi_type_dom' => 
  array (
    'in' => 'Принадлежит к',
    'not_in' => 'Не принадлежит к',
  ),
  'mselect_type_dom' => 
  array (
    'Equals' => 'Равно',
    'in' => 'Принадлежит к',
  ),
  'navigation_paradigms' => 
  array (
    'gm' => 'Сгруппированные модули',
    'm' => 'Модули',
  ),
  'newsletter_frequency_dom' => 
  array (
    '' => '',
    'Annually' => 'Ежегодно',
    'Monthly' => 'Ежемесячно',
    'Quarterly' => 'Ежеквартально',
    'Weekly' => 'Еженедельно',
  ),
  'notifications_severity_list' => 
  array (
    'alert' => 'Оповещение',
    'information' => 'Информация',
    'other' => 'Другое',
    'success' => 'Успех',
    'warning' => 'Предупреждение',
  ),
  'notifications_status_dom' => 
  array (
    0 => 'Непрочитано',
    1 => 'Прочитано',
  ),
  'notifymail_sendtype' => 
  array (
    'SMTP' => 'SMTP',
  ),
  'numeric_range_search_dom' => 
  array (
    '=' => 'Равно',
    'between' => 'Между',
    'greater_than' => 'Больше, чем',
    'greater_than_equals' => 'Больше или равно',
    'less_than' => 'Меньше, чем',
    'less_than_equals' => 'Меньше или равно',
    'not_equal' => 'Неравно',
  ),
  'oauth_client_type_dom' => 
  array (
    'support_portal' => 'Портал Поддержки',
    'user' => 'Пользователь Sugar',
  ),
  'oauth_type_dom' => 
  array (
    'oauth1' => 'OAuth 1.0',
    'oauth2' => 'OAuth 2.0',
  ),
  'oc_status_dom' => 
  array (
    '' => '',
    'Active' => 'Активен',
    'Inactive' => 'Неактивен',
  ),
  'opportunity_metrics_dom' => 
  array (
    'active' => 'Активна',
    'lost' => 'Проиграна',
    'won' => 'Успешна',
  ),
  'opportunity_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Ответственный за бизнес-решения',
    'Business Evaluator' => 'Бизнес-эксперт',
    'Executive Sponsor' => 'Генеральный поручитель',
    'Influencer' => 'Лицо, оказывающее влияние',
    'Other' => 'Другой',
    'Primary Decision Maker' => 'Ответственный за основные решения',
    'Technical Decision Maker' => 'Ответственный за технические решения',
    'Technical Evaluator' => 'Технический оценщик',
  ),
  'opportunity_type_dom' => 
  array (
    '' => '',
    'Existing Business' => 'Существующий бизнес',
    'New Business' => 'Новый бизнес',
  ),
  'opps_config_view_by_closedate_rollup_dom' => 
  array (
    'earliest' => 'Ближайшая дата закрытия',
    'latest' => 'Последняя дата закрытия',
  ),
  'opps_config_view_by_options_dom' => 
  array (
    'Opportunities' => 'Продажи',
    'RevenueLineItems' => 'Продажи и доход по продуктам',
  ),
  'optout_dom' => 
  array (
    '' => '--Не выбрано--',
    'false' => 'Нет',
    'true' => 'Да',
  ),
  'order_stage_dom' => 
  array (
    'Cancelled' => 'Отменен',
    'Confirmed' => 'Подтвержден',
    'On Hold' => 'Ведется',
    'Pending' => 'В ожидании',
    'Shipped' => 'Отгружен',
  ),
  'parent_type_display' => 
  array (
    'Accounts' => 'Контрагент',
    'Bugs' => 'Отслеживание ошибок',
    'Cases' => 'Обращение',
    'Contacts' => 'Контакт',
    'Leads' => 'Предварительный контакт',
    'Opportunities' => 'Сделка',
    'Products' => 'Продукт',
    'Project' => 'Проект',
    'ProjectTask' => 'Проектная задача',
    'Prospects' => 'Адресат',
    'Quotes' => 'Коммерческое предложение',
    'RevenueLineItems' => 'Доход по продукту',
    'Tasks' => 'Задача',
  ),
  'payment_terms' => 
  array (
    '' => '',
    'Net 15' => 'Net 15',
    'Net 30' => 'Net 30',
  ),
  'pdfmanager_yes_no_list' => 
  array (
    'no' => 'Нет',
    'yes' => 'Да',
  ),
  'pipeline_chart_dom' => 
  array (
    'fun' => 'Воронка',
    'hbar' => 'Горизонтальная черта',
  ),
  'planned_activities_filter_options' => 
  array (
    'future' => 'Будущие',
    'today' => 'Сегодня',
  ),
  'planned_activities_limit_options' => 
  array (
    5 => '5',
    10 => '10',
    15 => '15',
    20 => '20',
  ),
  'planned_activities_visibility_options' => 
  array (
    'group' => 'Нет',
    'user' => 'Да',
  ),
  'pricing_formula_dom' => 
  array (
    'Fixed' => 'Фиксированная цена',
    'IsList' => 'Как в прайсе',
    'PercentageDiscount' => 'Скидка по прайсу',
    'PercentageMarkup' => 'Стоимость с учетом наценки',
    'ProfitMargin' => 'Размер прибыли',
  ),
  'product_category_dom' => 
  array (
    '' => '',
    'Accounts' => 'Контрагенты',
    'Activities' => 'Мероприятия',
    'Bug Tracker' => 'Отслеживание ошибок',
    'Calendar' => 'Календарь',
    'Calls' => 'Звонки',
    'Campaigns' => 'Маркетинговые кампании',
    'Cases' => 'Обращения',
    'Contacts' => 'Контакты',
    'Currencies' => 'Типы валюты',
    'Dashboard' => 'Диаграммы',
    'Documents' => 'Документы',
    'Emails' => 'E-mail',
    'Feeds' => 'Feeds',
    'Forecasts' => 'Прогнозы',
    'Help' => 'Справка',
    'Home' => 'Главная',
    'Leads' => 'Предварительные контакты',
    'Meetings' => 'Встречи',
    'Notes' => 'Заметки',
    'Opportunities' => 'Сделки',
    'Outlook Plugin' => 'Outlook-плагин',
    'Product Catalog' => 'Каталог продуктов',
    'Products' => 'Продукты',
    'Projects' => 'Проекты',
    'Quotes' => 'Коммерческие предложения',
    'RSS' => 'RSS',
    'Releases' => 'Версии',
    'RevenueLineItems' => 'Доход по продуктам',
    'Studio' => 'Студия',
    'Upgrade' => 'Обновление',
    'Users' => 'Пользователи',
  ),
  'product_status_dom' => 
  array (
    '' => '',
    'Orders' => 'Заказ получен',
    'Quotes' => 'Коммерческое предложение предоставлено',
    'Ship' => 'Отгружено',
  ),
  'product_status_quote_key' => 'Коммерческие предложения',
  'product_template_status_dom' => 
  array (
    'Available' => 'Есть в наличии',
    'Unavailable' => 'Нет в наличии',
  ),
  'project_duration_units_dom' => 
  array (
    'Days' => 'Дня/дней',
    'Hours' => 'Часов',
  ),
  'project_priority_options' => 
  array (
    'High' => 'Высокий',
    'Low' => 'Низкий',
    'Medium' => 'Средний',
  ),
  'project_status_dom' => 
  array (
    'Draft' => 'Черновик',
    'In Review' => 'В рассмотрении',
    'Published' => 'Опубликовано',
  ),
  'project_task_priority_options' => 
  array (
    'High' => 'Высокий',
    'Low' => 'Низкий',
    'Medium' => 'Средний',
  ),
  'project_task_status_options' => 
  array (
    'Completed' => 'Завершено',
    'Deferred' => 'Отложено',
    'In Progress' => 'В процессе',
    'Not Started' => 'Не начато',
    'Pending Input' => 'Ожидание решения',
  ),
  'project_task_utilization_options' => 
  array (
    0 => 'нет',
    25 => '25',
    50 => '50',
    75 => '75',
    100 => '100',
  ),
  'projects_priority_options' => 
  array (
    'high' => 'Высокий',
    'low' => 'Низкий',
    'medium' => 'Средний',
  ),
  'projects_status_options' => 
  array (
    'completed' => 'Завершено',
    'inprogress' => 'В процессе',
    'notstarted' => 'Не начато',
  ),
  'prospect_list_type_dom' => 
  array (
    'default' => 'По умолчанию',
    'exempt' => 'Исключение - по ID',
    'exempt_address' => 'Исключение - по email-адресу',
    'exempt_domain' => 'Исключение - по домену',
    'seed' => 'Первоисточник',
    'test' => 'Тест',
  ),
  'query_calc_calc_type_dom' => 
  array (
    'AVG' => 'Средняя',
    'COUNT' => 'Количество',
    'MAX' => 'Максимум',
    'MIN' => 'Минимум',
    'STDDEV' => 'Стандартное отклонение',
    'SUM' => 'Сумма (итого)',
    'VARIANCE' => 'Отклонение',
  ),
  'query_calc_leftright_type_dom' => 
  array (
    'Field' => 'Поле',
    'Group' => 'Группа',
    'Value' => 'Значение',
  ),
  'query_calc_oper_dom' => 
  array (
    '*' => '(Х) Умножить на',
    '+' => '(+) Плюс',
    '-' => '(-) Минус',
    '/' => '(/) Разделить на',
  ),
  'query_calc_type_dom' => 
  array (
    'Math' => 'Калькулятор',
    'Standard' => 'Стандартный',
  ),
  'query_column_type_dom' => 
  array (
    'Calculation' => 'Вычисление:',
    'Display' => 'Отображение',
  ),
  'query_display_type_dom' => 
  array (
    'Custom' => 'Индивидуальный',
    'Default' => 'По умолчанию',
    'Hidden' => 'Скрытый',
  ),
  'query_groupby_axis_dom' => 
  array (
    'Columns' => 'Столбцы (ось X)',
    'Rows' => 'Строки (ось Y)',
  ),
  'query_groupby_calc_type_dom' => 
  array (
    'AVG' => 'Средняя',
    'COUNT' => 'Количество',
    'STDDEV' => 'Стандартное отклонение',
    'SUM' => 'Сумма (итого)',
    'VARIANCE' => 'дисперсия',
  ),
  'query_groupby_qualifier_dom' => 
  array (
    'Day' => 'День',
    'Month' => 'Месяц',
    'Quarter' => 'Квартал',
    'Week' => 'Неделя',
    'Year' => 'Год',
  ),
  'query_groupby_qualifier_qty_dom' => 
  array (
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
    6 => '6',
    7 => '7',
    8 => '8',
    9 => '9',
    10 => '10',
    12 => '12',
    18 => '18',
    24 => '24',
  ),
  'query_groupby_qualifier_start_dom' => 
  array (
    -24 => '-24',
    -18 => '-18',
    -12 => '-12',
    -10 => '-10',
    -9 => '-9',
    -8 => '-8',
    -7 => '-7',
    -6 => '-6',
    -5 => '-5',
    -4 => '-4',
    -3 => '-3',
    -2 => '-2',
    -1 => '-1',
    0 => 'Сейчас',
  ),
  'query_groupby_type_dom' => 
  array (
    'Field' => 'Стандартное поле:',
    'Time' => 'Промежуток времени',
  ),
  'query_type_dom' => 
  array (
    'Main Query' => 'Главный запрос',
  ),
  'quote_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Ответственный за бизнес-решения',
    'Business Evaluator' => 'Бизнес-эксперт',
    'Executive Sponsor' => 'Генеральный поручитель',
    'Influencer' => 'Оказывающий влияние',
    'Other' => 'Другой',
    'Primary Decision Maker' => 'Ответственный за основные решения',
    'Technical Decision Maker' => 'Ответственный за технические решения',
    'Technical Evaluator' => 'Технический оценщик',
  ),
  'quote_stage_dom' => 
  array (
    'Closed Accepted' => 'Принято и закрыто',
    'Closed Dead' => 'Закрыто с прекращением',
    'Closed Lost' => 'Закрыто без успеха',
    'Confirmed' => 'Подтверждено',
    'Delivered' => 'Доставлено',
    'Draft' => 'Черновик',
    'Negotiation' => 'Согласование',
    'On Hold' => 'Ведется',
  ),
  'quote_type_dom' => 
  array (
    'Orders' => 'Заказ',
    'Quotes' => 'Коммерческое предложение',
  ),
  'record_type_display' => 
  array (
    '' => '',
    'Accounts' => 'Контрагент',
    'Bugs' => 'Ошибка',
    'Cases' => 'Обращение',
    'Contacts' => 'Контакты',
    'Leads' => 'Предварительный контакт',
    'Opportunities' => 'Сделка',
    'Products' => 'Продукт продажи, по которому сформировано КП',
    'Project' => 'Проект',
    'ProjectTask' => 'Проектная задача',
    'Prospects' => 'Адресат',
    'Quotes' => 'Коммерческое предложение',
    'Tasks' => 'Задача',
  ),
  'record_type_display_notes' => 
  array (
    'Accounts' => 'Контрагент',
    'Bugs' => 'Ошибка',
    'Calls' => 'Звонок',
    'Cases' => 'Обращение',
    'Contacts' => 'Контакт',
    'Contracts' => 'Контракт',
    'Emails' => 'E-mail',
    'Leads' => 'Предварительный контакт',
    'Meetings' => 'Встреча',
    'Opportunities' => 'Сделка',
    'ProductTemplates' => 'Каталог продуктов',
    'Products' => 'Продукт',
    'Project' => 'Проект',
    'ProjectTask' => 'Проектная задача',
    'Prospects' => 'Адресат',
    'Quotes' => 'Коммерческое предложение',
    'Tasks' => 'Задача',
  ),
  'release_status_dom' => 
  array (
    'Active' => 'Активна',
    'Inactive' => 'Неактивна',
  ),
  'reminder_max_time' => '3600',
  'reminder_time_options' => 
  array (
    -1 => 'Не определено',
    60 => 'За 1 минуту до',
    300 => 'За 5 минут до',
    600 => 'За 10 минут до',
    900 => 'За 15 минут до',
    1800 => 'За 30 минут до',
    3600 => 'За 1 час до',
    7200 => 'За 2 часа до',
    10800 => 'За 3 часа до',
    18000 => 'За 5 часов до',
    86400 => 'За 1 день до',
  ),
  'repeat_interval_number' => 
  array (
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
    6 => '6',
    7 => '7',
    8 => '8',
    9 => '9',
    10 => '10',
    11 => '11',
    12 => '12',
    13 => '13',
    14 => '14',
    15 => '15',
    16 => '16',
    17 => '17',
    18 => '18',
    19 => '19',
    20 => '20',
    21 => '21',
    22 => '22',
    23 => '23',
    24 => '24',
    25 => '25',
    26 => '26',
    27 => '27',
    28 => '28',
    29 => '29',
    30 => '30',
  ),
  'repeat_intervals' => 
  array (
    '' => '--не выбрано--',
    'Daily' => 'дня (дней)',
    'Monthly' => 'месяц (-ев)',
    'Weekly' => 'неделя (-ль)',
    'Yearly' => 'год (лет)',
  ),
  'repeat_type_dom' => 
  array (
    '' => '--не выбрано--',
    'Daily' => 'Ежедневно',
    'Monthly' => 'Ежемесячно',
    'Weekly' => 'Еженедельно',
    'Yearly' => 'Раз в год',
  ),
  'report_align_dom' => 
  array (
    'center' => 'По центру',
    'left' => 'Слева',
    'right' => 'Справа',
  ),
  'report_color_dom' => 
  array (
    '' => 'По умолчанию',
    'DarkGreen' => 'Темно-зеленый',
    'DodgerBlue' => 'Тёмно-синий',
    'LightBlue' => 'Голубой',
    'LightGray' => 'Светло-серый',
    'black' => 'Черный',
    'blue' => 'Синий',
    'green' => 'Зеленый',
    'red' => 'Красный',
    'white' => 'Белый',
  ),
  'report_maker_status_dom' => 
  array (
    'Multi Module' => 'Множественный модуль',
    'Single Module' => 'Одиночный модуль',
  ),
  'roi_type_dom' => 
  array (
    'Budget' => 'Бюджет',
    'Expected_Revenue' => 'Ожидаемый доход',
    'Investment' => 'Инвестиции',
    'Revenue' => 'Доход',
  ),
  'sales_probability_dom' => 
  array (
    'Closed Lost' => '0',
    'Closed Won' => '100',
    'Id. Decision Makers' => '40',
    'Needs Analysis' => '25',
    'Negotiation/Review' => '80',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Prospecting' => '10',
    'Qualification' => '20',
    'Value Proposition' => '30',
  ),
  'sales_stage_dom' => 
  array (
    'Closed Lost' => 'Закрыто без успеха',
    'Closed Won' => 'Закрыто с успехом',
    'Id. Decision Makers' => 'Определение лиц, принимающих решения',
    'Needs Analysis' => 'Анализ потребностей',
    'Negotiation/Review' => 'Согласование КП',
    'Perception Analysis' => 'Анализ реакции',
    'Proposal/Price Quote' => 'Коммерческое предложение',
    'Prospecting' => 'Сбор информации',
    'Qualification' => 'Оценка',
    'Value Proposition' => 'Предложение ценности',
  ),
  'sales_status_dom' => 
  array (
    'Closed Lost' => 'Закрытая потерянная продажа',
    'Closed Won' => 'Закрытая состоявшаяся продажа',
    'In Progress' => 'Исполняемый в текущий момент',
    'New' => 'Новый',
  ),
  'sales_status_with_quote_dom' => 
  array (
    'Closed Lost' => 'Закрытая потерянная продажа',
    'Closed Won' => 'Закрытая состоявшаяся продажа',
    'Converted to Quote' => 'Конвертировано в коммерческое предложение',
    'In Progress' => 'Исполняемый в текущий момент',
    'New' => 'Новый',
  ),
  'salutation_dom' => 
  array (
    '' => '',
    'Dr.' => 'Д-р',
    'Mr.' => 'Г-н',
    'Mrs.' => 'Г-жа',
    'Ms.' => 'Г-жа',
    'Prof.' => 'Проф.',
  ),
  'scheduler_period_dom' => 
  array (
    'hour' => 'Часов',
    'min' => 'Минут',
  ),
  'scheduler_status_dom' => 
  array (
    'Active' => 'Активно',
    'Inactive' => 'Неактивно',
  ),
  'schedulers_times_dom' => 
  array (
    'completed' => 'Завершено',
    'failed' => 'Неудачно',
    'in progress' => 'В процессе',
    'no curl' => 'Не запущено: cURL не доступен',
    'not run' => 'Время запуска прошло, не выполняем.',
    'ready' => 'Готово',
  ),
  'source_dom' => 
  array (
    '' => '',
    'Forum' => 'Форум',
    'InboundEmail' => 'E-mail',
    'Internal' => 'Внутренний запрос',
    'Twitter' => 'Twitter',
    'Web' => 'Веб-реклама',
  ),
  'state_dom' => 
  array (
    'AK' => 'Аляска',
    'AL' => 'Алабама',
    'AR' => 'Арканзас',
    'AZ' => 'Аризона',
    'CA' => 'Калифорния',
    'CO' => 'Колорадо',
    'CT' => 'Коннектикут',
    'DC' => 'Округ Колумбия',
    'DE' => 'Делавэр',
    'FL' => 'Флорида',
    'GA' => 'Джорджия',
    'HI' => 'Гавайи',
    'IA' => 'Айова',
    'ID' => 'Айдахо',
    'IL' => 'Иллинойс',
    'IN' => 'Индиана',
    'KS' => 'Канзас',
    'KY' => 'Кентукки',
    'LA' => 'Луизиана',
    'MA' => 'Массачусетс',
    'MD' => 'Мэриленд',
    'ME' => 'Мэн',
    'MI' => 'Мичиган',
    'MN' => 'Миннесота',
    'MO' => 'Миссури',
    'MS' => 'Миссисипи',
    'MT' => 'Монтана',
    'NC' => 'Северная Каролина',
    'ND' => 'Северная Дакота',
    'NE' => 'Небраска',
    'NH' => 'Нью-Гемпшир',
    'NJ' => 'Нью-Джерси',
    'NM' => 'Нью-Мексико',
    'NV' => 'Невада',
    'NY' => 'Нью Йорк',
    'OH' => 'Огайо',
    'OK' => 'Оклахома',
    'OR' => 'Орегон',
    'PA' => 'Пенсильвания',
    'RI' => 'Род-Айленд',
    'SC' => 'Южная Каролина',
    'SD' => 'Южная Дакота',
    'TN' => 'Теннесси',
    'TX' => 'Техас',
    'UT' => 'Юта',
    'VA' => 'Вирджиния',
    'VT' => 'Вермонт',
    'WA' => 'Вашингтон',
    'WI' => 'Висконсин',
    'WV' => 'Западная Вирджиния',
    'WY' => 'Вайоминг',
  ),
  'sugar7_dashlet_auto_refresh_options' => 
  array (
    0 => 'Нет',
    1 => 'Каждую минуту',
    5 => 'Каждые 5 минут',
    10 => 'Каждые 10 минут',
    15 => 'Каждые 15 минут',
    30 => 'Каждые 30 минут',
  ),
  'sugar7_dashlet_reports_auto_refresh_options' => 
  array (
    0 => 'Нет',
    15 => 'Каждые 15 минут',
    30 => 'Каждые 30 минут',
    45 => 'Каждые 45 минут',
    60 => 'Каждый час',
    120 => 'Каждые 2 часа',
  ),
  'support_term_dom' => 
  array (
    '+1 year' => '1 год',
    '+2 years' => '2 года',
    '+6 months' => '6 месяцев',
  ),
  'task_priority_dom' => 
  array (
    'High' => 'Высокий',
    'Low' => 'Низкий',
    'Medium' => 'Средний',
  ),
  'task_status_dom' => 
  array (
    'Completed' => 'Завершено',
    'Deferred' => 'Отложено',
    'In Progress' => 'В процессе',
    'Not Started' => 'Не начато',
    'Pending Input' => 'Ожидание решения',
  ),
  'tasks_limit_options' => 
  array (
    5 => '5',
    10 => '10',
    15 => '15',
    20 => '20',
  ),
  'tasks_visibility_options' => 
  array (
    'group' => 'Нет',
    'user' => 'Да',
  ),
  'tax_class_dom' => 
  array (
    'Non-Taxable' => 'нет',
    'Taxable' => 'да',
  ),
  'timezone_dom' => 
  array (
    'Africa/Abidjan' => 'Африка/Абиджан',
    'Africa/Accra' => 'Африка/Аккра',
    'Africa/Addis_Ababa' => 'Африка/Аддис-Абеба',
    'Africa/Algiers' => 'Африка/Алжир',
    'Africa/Asmera' => 'Африка/Asmera (Асмера)',
    'Africa/Bamako' => 'Африка/Бамако',
    'Africa/Bangui' => 'Африка/Банги',
    'Africa/Banjul' => 'Африка/Банджул',
    'Africa/Bissau' => 'Африка/Бисау',
    'Africa/Blantyre' => 'Африка/Blantyre (Блантир)',
    'Africa/Brazzaville' => 'Африка/Браззавиль',
    'Africa/Bujumbura' => 'Африка/Бужумбура',
    'Africa/Cairo' => 'Африка/Каир',
    'Africa/Casablanca' => 'Африка/Касабланка',
    'Africa/Ceuta' => 'Африка/Ceuta (Кеута)',
    'Africa/Conakry' => 'Африка/Конакри',
    'Africa/Dakar' => 'Африка/Дакар',
    'Africa/Dar_es_Salaam' => 'Африка/Дар-эс-Салам',
    'Africa/Djibouti' => 'Африка/Джибути',
    'Africa/Douala' => 'Африка/Douala (Дуала)',
    'Africa/El_Aaiun' => 'Африка/El_Aaiun (Эль-Ааяюн)',
    'Africa/Freetown' => 'Африка/Фритаун',
    'Africa/Gaborone' => 'Африка/Габороне',
    'Africa/Harare' => 'Африка/Хараре',
    'Africa/Johannesburg' => 'Африка/Йоханнесбург',
    'Africa/Kampala' => 'Африка/Кампала',
    'Africa/Khartoum' => 'Африка/Хартум',
    'Africa/Kigali' => 'Африка/Кигали',
    'Africa/Kinshasa' => 'Африка/Киншаса',
    'Africa/Lagos' => 'Африка/Лагос',
    'Africa/Libreville' => 'Африка/Либревиль',
    'Africa/Lome' => 'Африка/Ломе',
    'Africa/Luanda' => 'Африка/Луанда',
    'Africa/Lubumbashi' => 'Африка/Lubumbashi (Лубумбаши)',
    'Africa/Lusaka' => 'Африка/Лусака',
    'Africa/Malabo' => 'Африка/Малабо',
    'Africa/Maputo' => 'Африка/Мапуто',
    'Africa/Maseru' => 'Африка/Масеру',
    'Africa/Mbabane' => 'Африка/Мбабане',
    'Africa/Mogadishu' => 'Африка/Могадишо',
    'Africa/Monrovia' => 'Африка/Монровия',
    'Africa/Nairobi' => 'Африка/Найроби',
    'Africa/Ndjamena' => 'Африка/Ndjamena (Нджамена)',
    'Africa/Niamey' => 'Африка/Ниамей',
    'Africa/Nouakchott' => 'Африка/Нуакшот',
    'Africa/Ouagadougou' => 'Африка/Уагадугу',
    'Africa/Porto-Novo' => 'Африка/Порто-Ново',
    'Africa/Sao_Tome' => 'Африка/Сан-Томе',
    'Africa/Tripoli' => 'Африка/Триполи',
    'Africa/Tunis' => 'Африка/Тунис',
    'Africa/Windhoek' => 'Африка/Виндхук',
    'America/Adak' => 'Америка/Adak (Адак)',
    'America/Anchorage' => 'Америка/Anchorage (Анкораж)',
    'America/Anguilla' => 'Америка/Anguilla (Анкилла)',
    'America/Antigua' => 'Америка/Антигуа',
    'America/Araguaina' => 'Америка/Araguaina (Арагуйяна)',
    'America/Argentina/Buenos_Aires' => 'Америка/Аргентина/Буэнос-Айрес',
    'America/Argentina/Catamarca' => 'Америка/Аргентина/Catamarca (Катамарка)',
    'America/Argentina/Cordoba' => 'Америка/Аргентина/Кордова',
    'America/Argentina/Jujuy' => 'Америка/Аргентина/Jujuy (Джуйю)',
    'America/Argentina/La_Rioja' => 'Америка/Аргентина/La_Rioja (Ла Риойя)',
    'America/Argentina/Mendoza' => 'Америка/Аргентина/Mendoza (Мендоза)',
    'America/Argentina/Rio_Gallegos' => 'Америка/Аргентина/Rio_Gallegos (Рио-Галлегос)',
    'America/Argentina/San_Juan' => 'Америка/Аргентина/Сан-Хуан',
    'America/Argentina/Tucuman' => 'Америка/Аргентина/Tucuman (Тукуман)',
    'America/Argentina/Ushuaia' => 'Америка/Аргентина/Ushuaia (Ушуайя)',
    'America/Aruba' => 'Америка/Аруба',
    'America/Asuncion' => 'Америка/Асунсьон',
    'America/Bahia' => 'Америка/Bahia (Бахья)',
    'America/Barbados' => 'Америка/Барбадос',
    'America/Belem' => 'Америка/Белен',
    'America/Belize' => 'Америка/Белиз',
    'America/Boa_Vista' => 'Америка/Boa_Vista (Боа Виста)',
    'America/Bogota' => 'Америка/Богота',
    'America/Boise' => 'Америка/Бойсе',
    'America/Cambridge_Bay' => 'Америка/Cambridge_Bay (Кембрижд Бей)',
    'America/Campo_Grande' => 'Америка/Campo_Grande (Кампо Гранде)',
    'America/Cancun' => 'Америка/Cancun (Канкун)',
    'America/Caracas' => 'Америка/Каракас',
    'America/Cayenne' => 'Америка/Кайенна',
    'America/Cayman' => 'Америка/Каймановы острова',
    'America/Chicago' => 'Америка/Чикаго',
    'America/Chihuahua' => 'Америка/Chihuahua (Чихуахуа)',
    'America/Coral_Harbour' => 'Америка/Coral_Harbour (Корал Харбор)',
    'America/Costa_Rica' => 'Америка/Коста-Рика',
    'America/Cuiaba' => 'Америка/Cuiaba (Куйяба)',
    'America/Curacao' => 'Америка/Кюрасао',
    'America/Danmarkshavn' => 'Америка/Danmarkshavn (Данмаркшавн)',
    'America/Dawson' => 'Америка/Dawson (Доусон)',
    'America/Dawson_Creek' => 'Америка/Dawson_Creek (Доусон Крик)',
    'America/Denver' => 'Америка/Денвер',
    'America/Detroit' => 'Америка/Детройт',
    'America/Dominica' => 'Америка/Доминика',
    'America/Edmonton' => 'Америка/Эдмонтон',
    'America/Eirunepe' => 'Америка/Eirunepe (Ейрунепе)',
    'America/El_Salvador' => 'Америка/Сальвадор',
    'America/Fortaleza' => 'Америка/Fortaleza (Форталеза)',
    'America/Glace_Bay' => 'Америка/Glace_Bay (Глейс Бей)',
    'America/Godthab' => 'Америка/Godthab (Годтаб)',
    'America/Goose_Bay' => 'Америка/Goose_Bay (Гуз Бей)',
    'America/Grand_Turk' => 'Америка/Grand_Turk (Гранд-Турк)',
    'America/Grenada' => 'Америка/Гренада',
    'America/Guadeloupe' => 'Америка/Гваделупа',
    'America/Guatemala' => 'Америка/Гватемала',
    'America/Guayaquil' => 'Америка/Гуаякиль',
    'America/Guyana' => 'Америка/Гайана',
    'America/Halifax' => 'Америка/Галифакс',
    'America/Havana' => 'Америка/Гавана',
    'America/Hermosillo' => 'Америка/Hermosillo (Гермосилло)',
    'America/Indiana/Indianapolis' => 'Америка/Индиана/Индианаполис',
    'America/Indiana/Knox' => 'Америка/Индиана/Knox (Кнокс)',
    'America/Indiana/Marengo' => 'Америка/Индиана/Marengo (Маренго)',
    'America/Indiana/Vevay' => 'Америка/Индиана/Vevay (Вевай)',
    'America/Inuvik' => 'Америка/Inuvik (Инувик)',
    'America/Iqaluit' => 'Америка/Икалуит',
    'America/Jamaica' => 'Америка/Ямайка',
    'America/Juneau' => 'Америка/Джуно',
    'America/Kentucky/Louisville' => 'Америка/Кентукки/Луисвилл',
    'America/Kentucky/Monticello' => 'Америка/Кентукки/Monticello (Монтиселло)',
    'America/La_Paz' => 'Америка/Ла-Пас',
    'America/Lima' => 'Америка/Лима',
    'America/Los_Angeles' => 'Америка/Лос-Анджелес',
    'America/Maceio' => 'Америка/Maceio (Масейо)',
    'America/Managua' => 'Америка/Манагуа',
    'America/Manaus' => 'Америка/Манаус',
    'America/Martinique' => 'Америка/Мартиника',
    'America/Mazatlan' => 'Америка/Mazatlan (Мазатлан)',
    'America/Menominee' => 'Америка/Menominee (Меномини)',
    'America/Merida' => 'Америка/Merida (Мерида)',
    'America/Mexico_City' => 'Америка/Мехико',
    'America/Miquelon' => 'Америка/Miquelon (Микелон)',
    'America/Monterrey' => 'Америка/Монтеррей',
    'America/Montevideo' => 'Америка/Монтевидео',
    'America/Montreal' => 'Америка/Монреаль',
    'America/Montserrat' => 'Америка/Montserrat (Монтсеррат)',
    'America/Nassau' => 'Америка/Нассау',
    'America/New_York' => 'Америка/Нью-Йорк',
    'America/Nipigon' => 'Америка/Нипигон',
    'America/Nome' => 'Америка/Ном',
    'America/Noronha' => 'Америка/Noronha (Норонха)',
    'America/North_Dakota/Center' => 'Америка/Северная Дакота/Center (Сентер)',
    'America/Panama' => 'Америка/Панама',
    'America/Pangnirtung' => 'Америка/Pangnirtung (Пангнитунг)',
    'America/Paramaribo' => 'Америка/Парамарибо',
    'America/Phoenix' => 'Америка/Феникс',
    'America/Port-au-Prince' => 'Америка/Порт-о-Пренс',
    'America/Port_of_Spain' => 'Америка/Порт-оф-Спейн',
    'America/Porto_Velho' => 'Америка/Porto_Velho (Порто Велхо)',
    'America/Puerto_Rico' => 'Америка/Пуэрто-Рико',
    'America/Rainy_River' => 'Америка/Rainy_River (Рейни Риве)',
    'America/Rankin_Inlet' => 'Америка/Rankin_Inlet (Ранкин Инлет)',
    'America/Recife' => 'Америка/Ресифи',
    'America/Regina' => 'Америка/Риджайна',
    'America/Rio_Branco' => 'Америка/Rio_Branco (Рио-Бранко)',
    'America/Santiago' => 'Америка/Сантьяго',
    'America/Santo_Domingo' => 'Америка/Санто-Доминго',
    'America/Sao_Paulo' => 'Америка/Сан-Паулу',
    'America/Scoresbysund' => 'Америка/Scoresbysund (Скорсбисунд)',
    'America/St_Johns' => 'Америка/St_Johns (Сент Джонс)',
    'America/St_Kitts' => 'Америка/Сент-Китс',
    'America/St_Lucia' => 'Америка/Сент-Люсия',
    'America/St_Thomas' => 'Америка/St_Thomas (Сент Томас)',
    'America/St_Vincent' => 'Америка/Сент-Винсент',
    'America/Swift_Current' => 'Америка/Swift_Current (Свифт Карент)',
    'America/Tegucigalpa' => 'Америка/Тегусигальпа',
    'America/Thule' => 'Америка/Thule (Тул)',
    'America/Thunder_Bay' => 'Америка/Thunder_Bay (Санде Бей)',
    'America/Tijuana' => 'Америка/Tijuana (Тихуана)',
    'America/Toronto' => 'Америка/Торонто',
    'America/Tortola' => 'Америка/Tortola (Тортола)',
    'America/Vancouver' => 'Америка/Ванкувер',
    'America/Whitehorse' => 'Америка/Whitehorse (Уайтхорс)',
    'America/Winnipeg' => 'Америка/Виннипег',
    'America/Yakutat' => 'Америка/Yakutat (Якутат)',
    'America/Yellowknife' => 'Америка/Yellowknife (Йелоу Найф)',
    'Antarctica/Casey' => 'Антарктика/Casey (Кейзи)',
    'Antarctica/Davis' => 'Антарктика/Davis (Дэвис)',
    'Antarctica/DumontDUrville' => 'Антарктика/DumontDUrville (ДюмонДЮрвилль)',
    'Antarctica/Mawson' => 'Антарктика/Mawson (Мэйсон)',
    'Antarctica/McMurdo' => 'Антарктика/McMurdo (Макмурдо)',
    'Antarctica/Palmer' => 'Антарктика/Palmer (Палмер)',
    'Antarctica/Rothera' => 'Антарктика/Rothera (Ротера)',
    'Antarctica/Syowa' => 'Антарктика/Syowa (Сйова)',
    'Antarctica/Vostok' => 'Антарктика/Восток',
    'Asia/Aden' => 'Азия/Аден',
    'Asia/Almaty' => 'Азия/Алматы',
    'Asia/Amman' => 'Азия/Амман',
    'Asia/Anadyr' => 'Азия/Анадырь',
    'Asia/Aqtau' => 'Азия/Aqtau (Актау)',
    'Asia/Aqtobe' => 'Азия/Aqtobe (Актобе)',
    'Asia/Ashgabat' => 'Азия/Ашгабат',
    'Asia/Baghdad' => 'Азия/Багдад',
    'Asia/Bahrain' => 'Азия/Бахрейн',
    'Asia/Baku' => 'Азия/Баку',
    'Asia/Bangkok' => 'Азия/Бангкок',
    'Asia/Beijing' => 'Азия/Пекин',
    'Asia/Beirut' => 'Азия/Бейрут',
    'Asia/Bishkek' => 'Азия/Бишкек',
    'Asia/Brunei' => 'Азия/Бруней',
    'Asia/Calcutta' => 'Азия/Калькутта',
    'Asia/Choibalsan' => 'Азия/Choibalsan (Чоибалсан)',
    'Asia/Chongqing' => 'Азия/Chongqing (Чонгкинг)',
    'Asia/Colombo' => 'Азия/Коломбо',
    'Asia/Damascus' => 'Азия/Дамаск',
    'Asia/Dhaka' => 'Азия/Дакка',
    'Asia/Dili' => 'Азия/Дили',
    'Asia/Dubai' => 'Азия/Дубаи',
    'Asia/Dushanbe' => 'Азия/Душанбе',
    'Asia/Gaza' => 'Азия/Газа',
    'Asia/Harbin' => 'Азия/Харбин',
    'Asia/Hong_Kong' => 'Азия/Гонконг',
    'Asia/Hovd' => 'Азия/Hovd (Ховд)',
    'Asia/Irkutsk' => 'Азия/Иркутск',
    'Asia/Jakarta' => 'Азия/Джакарта',
    'Asia/Jayapura' => 'Азия/Jayapura (Джаяпура)',
    'Asia/Jerusalem' => 'Азия/Иерусалим',
    'Asia/Kabul' => 'Азия/Кабул',
    'Asia/Kamchatka' => 'Азия/Камчатка',
    'Asia/Karachi' => 'Азия/Карачи',
    'Asia/Kashgar' => 'Азия/Kashgar (Кашгар)',
    'Asia/Katmandu' => 'Азия/Катманду',
    'Asia/Krasnoyarsk' => 'Азия/Красноярск',
    'Asia/Kuala_Lumpur' => 'Азия/Куала-Лумпур',
    'Asia/Kuching' => 'Азия/Кучинг',
    'Asia/Kuwait' => 'Азия/Кувейт',
    'Asia/Macau' => 'Азия/Macau (Макау)',
    'Asia/Magadan' => 'Азия/Магадан',
    'Asia/Makassar' => 'Азия/Makassar (Макассар)',
    'Asia/Manila' => 'Азия/Манила',
    'Asia/Muscat' => 'Азия/Маскат',
    'Asia/Nicosia' => 'Азия/Никосия',
    'Asia/Novosibirsk' => 'Азия/Новосибирск',
    'Asia/Omsk' => 'Азия/Омск',
    'Asia/Oral' => 'Азия/Oral (Орал)',
    'Asia/Phnom_Penh' => 'Азия/Пномпень',
    'Asia/Pontianak' => 'Азия/Pontianak (Понтьянак)',
    'Asia/Pyongyang' => 'Азия/Пхеньян',
    'Asia/Qatar' => 'Азия/Катар',
    'Asia/Qyzylorda' => 'Азия/Qyzylorda (Квизилорда)',
    'Asia/Rangoon' => 'Азия/Рангун (Ягон)',
    'Asia/Riyadh' => 'Азия/Эр-Рияд',
    'Asia/Saigon' => 'Азия/Сайгон',
    'Asia/Sakhalin' => 'Азия/Сахалин',
    'Asia/Samarkand' => 'Азия/Самарканд',
    'Asia/Seoul' => 'Азия/Сеул',
    'Asia/Shanghai' => 'Азия/Шанхай',
    'Asia/Singapore' => 'Азия/Сингапур',
    'Asia/Taipei' => 'Азия/Тайбэй',
    'Asia/Tashkent' => 'Азия/Ташкент',
    'Asia/Tbilisi' => 'Азия/Тбилиси',
    'Asia/Tehran' => 'Азия/Тегеран',
    'Asia/Thimphu' => 'Азия/Тхимпху',
    'Asia/Tokyo' => 'Азия/Токио',
    'Asia/Ulaanbaatar' => 'Азия/Ulaanbaatar (Улаанбатаар)',
    'Asia/Urumqi' => 'Азия/Urumqi (Урумки)',
    'Asia/Vientiane' => 'Азия/Вьентьян',
    'Asia/Vladivostok' => 'Азия/Владивосток',
    'Asia/Yakutsk' => 'Азия/Якутск',
    'Asia/Yekaterinburg' => 'Азия/Екатеринбург',
    'Asia/Yerevan' => 'Азия/Ереван',
    'Atlantic/Azores' => 'Атлантика/Азорские острова',
    'Atlantic/Bermuda' => 'Атлантика/Бермудские острова',
    'Atlantic/Canary' => 'Атлинтика/ Канарские острова',
    'Atlantic/Cape_Verde' => 'Атлантика/Cape_Verde (Кейп Верд)',
    'Atlantic/Faeroe' => 'Атлантика/Faeroe (Фаерое)',
    'Atlantic/Madeira' => 'Атлантика/Madeira (Мадейра)',
    'Atlantic/Reykjavik' => 'Атлантика/Рейкьявик',
    'Atlantic/South_Georgia' => 'Атлантика/South_Georgia (Саус Джорджия)',
    'Atlantic/St_Helena' => 'Атлантика/St_Helena (Сент Хелена)',
    'Atlantic/Stanley' => 'Атлантика/Stanley (Стенли)',
    'Australia/Adelaide' => 'Австралия/Аделаида',
    'Australia/Brisbane' => 'Австралия/Брисбен',
    'Australia/Broken_Hill' => 'Австралия/Broken_Hill (Броукен Хилл)',
    'Australia/Currie' => 'Австралия/Currie (Керри)',
    'Australia/Darwin' => 'Австралия/Дарвин',
    'Australia/Hobart' => 'Австралия/Хобарт',
    'Australia/Lindeman' => 'Австралия/Lindeman (Линдемен)',
    'Australia/Melbourne' => 'Австралия/Мельбурн',
    'Australia/Perth' => 'Австралия/Перт',
    'Australia/Sydney' => 'Австралия/Сидней',
    'CET' => 'CET (Central European Time - центральноевропейское время)',
    'EET' => 'EET (East European Time - восточноевропейское поясное время)',
    'Europe/Amsterdam' => 'Европа/Амстердам',
    'Europe/Andorra' => 'Европа/Андорра',
    'Europe/Athens' => 'Европа/Афины',
    'Europe/Belgrade' => 'Европа/Белград',
    'Europe/Berlin' => 'Европа/Берлин',
    'Europe/Brussels' => 'Европа/Брюссель',
    'Europe/Bucharest' => 'Европа/Бухарест',
    'Europe/Budapest' => 'Европа/Будапешт',
    'Europe/Chisinau' => 'Европа/Кишинёв',
    'Europe/Copenhagen' => 'Европа/Копенгаген',
    'Europe/Dublin' => 'Европа/Дублин',
    'Europe/Gibraltar' => 'Европа/Гибралтар',
    'Europe/Helsinki' => 'Европа/Хельсинки',
    'Europe/Istanbul' => 'Европа/Стамбул',
    'Europe/Kaliningrad' => 'Европа/Калининград',
    'Europe/Kiev' => 'Европа/Киев',
    'Europe/Lisbon' => 'Европа/Лиссабон',
    'Europe/London' => 'Европа/Лондон',
    'Europe/Luxembourg' => 'Европа/Люксембург',
    'Europe/Madrid' => 'Европа/Мадрид',
    'Europe/Malta' => 'Европа/Мальта',
    'Europe/Minsk' => 'Европа/Минск',
    'Europe/Monaco' => 'Европа/Монако',
    'Europe/Moscow' => 'Европа/Москва',
    'Europe/Oslo' => 'Европа/Осло',
    'Europe/Paris' => 'Европа/Париж',
    'Europe/Prague' => 'Европа/Прага',
    'Europe/Riga' => 'Европа/Рига',
    'Europe/Rome' => 'Европа/Рим',
    'Europe/Samara' => 'Европа/Самара',
    'Europe/Simferopol' => 'Европа/Симферополь',
    'Europe/Sofia' => 'Европа/София',
    'Europe/Stockholm' => 'Европа/Стокгольм',
    'Europe/Tallinn' => 'Европа/Таллин',
    'Europe/Tirane' => 'Европа/Тирана',
    'Europe/Uzhgorod' => 'Европа/Ужгород',
    'Europe/Vaduz' => 'Европа/Вадуц',
    'Europe/Vienna' => 'Европа/Вена',
    'Europe/Vilnius' => 'Европа/Вильнюс',
    'Europe/Warsaw' => 'Европа/Варшава',
    'Europe/Zaporozhye' => 'Европа/Запорожье',
    'Europe/Zurich' => 'Европа/Цюрих',
    'Indian/Antananarivo' => 'Индия/Антананариву',
    'Indian/Chagos' => 'Индия/Chagos (Чагос)',
    'Indian/Christmas' => 'Индия/Christmas (Кристмас)',
    'Indian/Cocos' => 'Индия/Cocos (Кокос)',
    'Indian/Comoro' => 'Индия/Comoro (Коморо)',
    'Indian/Kerguelen' => 'Индия/Kerguelen (Кергелен)',
    'Indian/Mahe' => 'Индия/Mahe (Махе)',
    'Indian/Maldives' => 'Индия/Мальдивы',
    'Indian/Mauritius' => 'Индия/Маврикий',
    'Indian/Mayotte' => 'Индия/Mayotte',
    'Indian/Reunion' => 'Индия/Reunion (Реюнион)',
    'MET' => 'MET (Middle European Time - среднеевропейское время)',
    'Pacific/Apia' => 'Тихоокеанский регион/Апиа',
    'Pacific/Auckland' => 'Тихоокеанский регион/Окленд',
    'Pacific/Chatham' => 'Тихоокеанский регион/Чатем',
    'Pacific/Easter' => 'Тихоокеанский регион/О. Пасхи',
    'Pacific/Efate' => 'Тихоокеанский регион/Efate (Ифейт)',
    'Pacific/Enderbury' => 'Тихоокеанский регион/Enderbury (Эндербери)',
    'Pacific/Fakaofo' => 'Тихоокеанский регион/Fakaofo (Факаофо)',
    'Pacific/Fiji' => 'Тихоокеанский регион/Фиджи',
    'Pacific/Funafuti' => 'Тихоокеанский регион/Фунафути',
    'Pacific/Galapagos' => 'Тихоокеанский регион/Черепашьи острова',
    'Pacific/Gambier' => 'Тихоокеанский регион/Gambier (Гамбьер)',
    'Pacific/Guadalcanal' => 'Тихоокеанский регион/Гуадалканал',
    'Pacific/Guam' => 'Тихоокеанский регион/Гуам',
    'Pacific/Honolulu' => 'Тихоокеанский регион/Гонолулу',
    'Pacific/Johnston' => 'Тихоокеанский регион/Johnston (Джонстон)',
    'Pacific/Kiritimati' => 'Тихоокеанский регион/Kiritimati (Киритимати)',
    'Pacific/Kosrae' => 'Тихоокеанский регион/Kosrae (Косрае)',
    'Pacific/Kwajalein' => 'Тихоокеанский регион/Kwajalein (Квайялейн)',
    'Pacific/Majuro' => 'Тихоокеанский регион/Majuro (Маюро)',
    'Pacific/Marquesas' => 'Тихоокеанский регион/Маркизские острова',
    'Pacific/Midway' => 'Тихоокеанский регион/Острова Мидуэй',
    'Pacific/Nauru' => 'Тихоокеанский регион/Науру',
    'Pacific/Niue' => 'Тихоокеанский регион/Ниуэ',
    'Pacific/Norfolk' => 'Тихоокеанский регион/Норфолк',
    'Pacific/Noumea' => 'Тихоокеанский регион/Нумеа',
    'Pacific/Pago_Pago' => 'Тихоокеанский регион/Паго-Паго',
    'Pacific/Palau' => 'Тихоокеанский регион/Палау',
    'Pacific/Pitcairn' => 'Тихоокеанский регион/Pitcairn (Питкаирн)',
    'Pacific/Ponape' => 'Тихоокеанский регион/Ponape (Понапе)',
    'Pacific/Port_Moresby' => 'Тихоокеанский регион/Порт-Морсби',
    'Pacific/Rarotonga' => 'Тихоокеанский регион/Раротонга',
    'Pacific/Saipan' => 'Тихоокеанский регион/Сайпан',
    'Pacific/Tahiti' => 'Тихоокеанский регион/Таити',
    'Pacific/Tarawa' => 'Тихоокеанский регион/Тарава',
    'Pacific/Tongatapu' => 'Тихоокеанский регион/Tongatapu (Тонгатапу)',
    'Pacific/Truk' => 'Тихоокеанский регион/Truk (Трук)',
    'Pacific/Wake' => 'Тихоокеанский регион/Wake (Уэйк)',
    'Pacific/Wallis' => 'Тихоокеанский регион/Wallis (Воллис)',
    'WET' => 'WET (Western European Time - западноевропейское время)',
  ),
  'token_status' => 
  array (
    1 => 'Запрос',
    2 => 'Доступ',
    3 => 'Недействительно',
  ),
  'top10_opportunities_duration_options' => 
  array (
    0 => 'Этот квартал',
    3 => 'Следующий квартал',
    12 => 'Текущий год',
  ),
  'top10_opportunities_visibility_options' => 
  array (
    'group' => '',
    'user' => '',
  ),
  'tselect_type_dom' => 
  array (
    0 => '0 часов',
    14440 => '4 часа',
    28800 => '8 часов',
    43200 => '12 часов',
    86400 => '1 день',
    172800 => '2 дня',
    259200 => '3 дня',
    345600 => '4 дня',
    432000 => '5 дней',
    604800 => '1 неделя',
    1209600 => '2 недели',
    1814400 => '3 недели',
    2592000 => '30 дней',
    5184000 => '60 дней',
    7776000 => '90 дней',
    10368000 => '120 дней',
    12960000 => '150 дней',
    15552000 => '180 дней',
  ),
  'user_status_dom' => 
  array (
    'Active' => 'Активен',
    'Inactive' => 'Неактивен',
  ),
  'user_type_dom' => 
  array (
    'Administrator' => 'Администратор',
    'RegularUser' => 'Обычный пользователь',
  ),
  'webLogicHookList' => 
  array (
    'after_delete' => 'После удаления',
    'after_login' => 'После входа в систему',
    'after_login_failed' => 'После неудачного входа в систему',
    'after_logout' => 'После выхода из системы',
    'after_relationship_add' => 'После добавления связи',
    'after_relationship_delete' => 'После удаления связи',
    'after_save' => 'После сохранения',
  ),
  'web_hook_request_method_list' => 
  array (
    'DELETE' => 'УДАЛИТЬ',
    'GET' => 'ПОЛУЧИТЬ',
    'POST' => 'ВНЕСТИ',
    'PUT' => 'ПОМЕСТИТЬ',
  ),
  'wflow_action_datetime_type_dom' => 
  array (
    'Existing Value' => 'Существующее значение',
    'Triggered Date' => 'Дата поступления заказа',
  ),
  'wflow_action_type_dom' => 
  array (
    'new' => 'Новая запись',
    'update' => 'Обновить запись',
    'update_rel' => 'Обновить соответствующую запись',
  ),
  'wflow_address_type_dom' => 
  array (
    'bcc' => 'Скрытая копия:',
    'cc' => 'Копия:',
    'to' => 'Кому:',
  ),
  'wflow_address_type_invite_dom' => 
  array (
    'bcc' => 'Скрытая копия:',
    'cc' => 'Копия:',
    'invite_only' => '(Только по приглашению)',
    'to' => 'Кому:',
  ),
  'wflow_address_type_to_only_dom' => 
  array (
    'to' => 'Кому:',
  ),
  'wflow_adv_enum_type_dom' => 
  array (
    'advance' => 'Сдвинуть выпадающий список вперёд на',
    'retreat' => 'Сдвинуть выпадающий список назад на',
  ),
  'wflow_adv_team_type_dom' => 
  array (
    'current_team' => 'Команда, которой принадлежит авторизованный пользователь',
    'team_id' => 'Текущая команда, которой принадлежит внесенная запись',
  ),
  'wflow_adv_user_type_dom' => 
  array (
    'assigned_user_id' => 'Пользователь, ответственный за внесенную запись',
    'created_by' => 'Пользователь - создатель внесенной записи',
    'current_user' => 'Авторизовавшийся пользователь',
    'modified_user_id' => 'Пользователь- автор последних изменений во внесенной записи',
  ),
  'wflow_alert_type_dom' => 
  array (
    'Email' => 'E-mail',
    'Invite' => 'Приглашение',
  ),
  'wflow_array_type_dom' => 
  array (
    'future' => 'Новое значение',
    'past' => 'Старое значение',
  ),
  'wflow_fire_order_dom' => 
  array (
    'actions_alerts' => 'Действия, затем уведомления',
    'alerts_actions' => 'Уведомления, затем действия',
  ),
  'wflow_record_type_dom' => 
  array (
    'All' => 'Новые и существующие записи',
    'New' => 'Только новые записи',
    'Update' => 'Только существующие записи',
  ),
  'wflow_rel_type_dom' => 
  array (
    'all' => 'Все соответствующие',
    'filter' => 'Соответственно фильтру',
  ),
  'wflow_relate_type_dom' => 
  array (
    'Manager' => 'Руководитель пользователя',
    'Self' => 'Пользователь',
  ),
  'wflow_relfilter_type_dom' => 
  array (
    'all' => 'все соответствующие',
    'any' => 'любая соответствующая',
  ),
  'wflow_set_type_dom' => 
  array (
    'Advanced' => 'Расширенные опции',
    'Basic' => 'Базовые опции',
  ),
  'wflow_source_type_dom' => 
  array (
    'Custom Template' => 'Индивидуальный шаблон',
    'Normal Message' => 'Стандартное сообщение',
    'System Default' => 'Системный по умолчанию',
  ),
  'wflow_type_dom' => 
  array (
    'Normal' => 'Когда запись сохранена',
    'Time' => 'По истечению времени',
  ),
  'wflow_user_type_dom' => 
  array (
    'current_user' => 'Активизировавшиеся пользователи',
    'rel_user' => 'Соотнесенные пользователи',
    'rel_user_custom' => 'Соотнесенный индивидуальный пользователь',
    'specific_role' => 'Определенная роль',
    'specific_team' => 'Определенная команда',
    'specific_user' => 'Определенный пользователь',
  ),
  'width_type_dom' => 
  array (
    '%' => 'Процентов (%)',
    'px' => 'Пикселей (px)',
  ),
);

$app_strings = array (
  'BorderColor' => 'Цвет границы',
  'DATA_TYPE_DUE' => 'К:',
  'DATA_TYPE_MODIFIED' => 'Изменено:',
  'DATA_TYPE_SENT' => 'Отправлено:',
  'DATA_TYPE_START' => 'Начало:',
  'DEFAULT' => 'Базовые',
  'ERROR_ACCESS_MODULE' => 'У Вас нет доступа к этому модулю.',
  'ERROR_CONNECTOR_CONFIGURE' => 'Не удалось получить данные. Сервис может быть недоступен в текущий момент или настройки конфигурации могут быть неккоректны.',
  'ERROR_DATETIME' => 'Ошибка. В данное поле необходимо ввести правильную дату.',
  'ERROR_DUPLICATE_EMAIL' => 'Ошибка. Дубликат Email адреса: {{#each this}}{{this}} {{/each}}',
  'ERROR_EMAIL' => 'Ошибка. Неверный Email-адрес: {{#each this}}{{this}} {{/each}}',
  'ERROR_EMPTY_LINK_MODULE' => 'Пожалуйста, укажите вначале связь.',
  'ERROR_EXAMINE_MSG' => 'Пожалуйста, проверьте сообщение об ошибке ниже:',
  'ERROR_EXCEEDING_OC_LICENSES' => 'Количество допустимых Offline Клиентов на текущий момент превышает количество доступных лицензий.',
  'ERROR_FIELD_REQUIRED' => 'Ошибка. Это поле является обязательным.',
  'ERROR_FULLY_EXPIRED' => 'Лицензия Вашей компании на использование SugarCRM истекла более 30-ти дней назад и её необходимо обновить. Только администраторы могут войти в систему.',
  'ERROR_IS_AFTER' => 'Ошибка. Дата данного поля не может идти до даты {{this}} поля.',
  'ERROR_IS_BEFORE' => 'Ошибка. Дата данного поля не может идти после даты {{this}} поля.',
  'ERROR_IS_GREATER_THAN' => 'Ошибка. Значение этого поля должно быть больше, чем {{this}}.',
  'ERROR_IS_LESS_THAN' => 'Ошибка. Значение этого поля должно быть меньше, чем {{this}}.',
  'ERROR_LICENSE_EXPIRED' => 'Лицензия Вашей компании на использование SugarCRM истекла и её необходимо обновить. Только администраторы могут войти в систему.',
  'ERROR_LICENSE_VALIDATION' => 'Лицензия Вашей компании на использование SugarCRM требует подтверждения. Только администраторы могут войти в систему.',
  'ERROR_MAXVALUE' => 'Ошибка. Максимальное значение этого поля {{this}}.',
  'ERROR_MAX_FIELD_LENGTH' => 'Ошибка. Максимальная длина этого поля {{this}}.',
  'ERROR_MAX_FILESIZE_EXCEEDED' => 'Ошибка. Вложение является слишком большим.',
  'ERROR_MINVALUE' => 'Ошибка. Минимальное значение этого поля {{this}}.',
  'ERROR_MIN_FIELD_LENGTH' => 'Ошибка. Минимальная длина этого поля {{this}}.',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'Обязательное поле не заполнено',
  'ERROR_NOTIFY_OVERRIDE' => 'Ошибка: ResourceObserver->notify() должен быть отменён.',
  'ERROR_NO_BEAN' => 'Не удалось получить bean',
  'ERROR_NO_RECORD' => 'Ошибка при получении записи. Запись могла быть удалена либо у Вас нет прав для просмотра.',
  'ERROR_NUMBER' => 'Ошибка. В этом поле требуется указать корректное число.',
  'ERROR_PRIMARY_EMAIL' => 'Ошибка. По крайней мере должен быть указан один основной адрес.',
  'ERROR_TYPE_NOT_VALID' => 'Ошибка: этот тип недействителен.',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Ошибка: Невозможно получить данные для {0} соединителя. В данный момент сервис может быть недоступен или настройки конфигурации могут быть недействительными. Сообщение об ошибке соединителя: ({1}).',
  'ERROR_UPLOAD_FAILED' => 'Ошибка. Не удалось загрузить файл.',
  'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Пожалуйста, определите &#39;key&#39;-индекс в атрибутах displayParams для определения мета-данных',
  'ERR_AJAX_LOAD' => 'Произошла ошибка:',
  'ERR_AJAX_LOAD_FAILURE' => 'Во время обработки Вашего запроса произошла ошибка, пожалуйста, повторите запрос позже.',
  'ERR_AJAX_LOAD_FOOTER' => 'Если эта ошибка повторится, ваш администратор должен отключить Ajax для этого модуля',
  'ERR_BAD_RESPONSE_FROM_SERVER' => 'Слабый отклик сервера',
  'ERR_BLANK_PAGE_NAME' => 'Пожалуйста, введите название страницы.',
  'ERR_CALENDAR_CANNOT_UPDATE_FROM_CHILD' => 'Доллжны быть внесены изменения повторения, используя первую запись в ряду.',
  'ERR_CANNOT_CREATE_METADATA_FILE' => 'Ошибка: Файл [[file]] отсутствует. Невозможно создать, т.к. не был найден соответствующий HTML файл.',
  'ERR_CANNOT_FIND_MODULE' => 'Ошибка: Модуль [module] не существует.',
  'ERR_COMPATIBLE_PRECISION_VALUE' => 'Значение поля несовместимо со значением точности.',
  'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Ошибка: Значение головного параметра в массиве не соответствует значению результатов.',
  'ERR_CONNECTOR_NOT_ARRAY' => 'массив коннектора в {0} был неправильно определен или пустой и не может быть использован.',
  'ERR_CONTACT_TECH_SUPPORT' => 'Обратитесь в техническую поддержку.',
  'ERR_CREATING_FIELDS' => 'Ошибка при заполнении дополнительных полей:',
  'ERR_CREATING_TABLE' => 'Ошибка при создании таблицы:',
  'ERR_DATABASE_CONN_DROPPED' => 'Ошибка исполнения запроса. Возможно, произошел разрыв соединения с базой данных. Обновите, пожалуйста, эту страницу. Вам также может потребоваться перезапустить браузер.',
  'ERR_DATABSE_RELATIONSHIP_QUERY' => 'Ошибка при установлении {0} связи: {1}',
  'ERR_DB_FAIL' => 'Ошибка базы данных. Пожалуйста, обратитесь к sugarcrm.log за деталями.',
  'ERR_DB_QUERY' => '{0}: запрос не удался: {1}',
  'ERR_DB_VERSION' => 'Sugar CRM {0} Файлы Могут Быть Использованы Только С Sugar CRM {1} Базой Данных.',
  'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Разделитель десятых долей не может использовать такой же символ, как и разделитель тысячных.\\n\\n Пожалуйста, измените значения.',
  'ERR_DELETE_RECORD' => 'Необходимо указать номер записи перед удалением контакта.',
  'ERR_DNB_BAL_COMPARISON' => 'Ошибка. Нижний предел должен быть меньше верхнего предела',
  'ERR_ELASTIC_TEST_FAILED' => 'Не удалось подключиться к Elastic серверу',
  'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Пожалуйста, подтвердите Ваш пароль.',
  'ERR_ENTER_NEW_PASSWORD' => 'Пожалуйста, введите Ваш новый пароль.',
  'ERR_ENTER_OLD_PASSWORD' => 'Пожалуйста, введите Ваш текущий пароль.',
  'ERR_EXISTING_PORTAL_USERNAME' => 'Ошибка: имя портала уже назначено для другого контакта.',
  'ERR_EXPORT_DISABLED' => 'Экспорт неактивен.',
  'ERR_EXPORT_TYPE' => 'Ошибка экспорта',
  'ERR_EXTERNAL_API_403' => 'В доступе отказано. Тип файла не поддерживается.',
  'ERR_EXTERNAL_API_LOTUS_LIVE_CONFLICT' => 'Файл с таким именем уже существует в системе.',
  'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'Токен доступа OAuth отсутствует.',
  'ERR_EXTERNAL_API_SAVE_FAIL' => 'Произошла ошибка при попытке сохранения во внешнюю учетную запись.',
  'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Произошла ошибка при загрузке. Пожалуйста, убедитесь в том, что загружаемый файл не пустой.',
  'ERR_FILE_NOT_FOUND' => 'Ошибка: Файл не был загружен {0}. Пожалуйста, проверьте системные и серверные права.',
  'ERR_FILE_WRITE' => 'Ошибка: Файл не был записан {0}. Пожалуйста, проверьте системные и серверные права.',
  'ERR_GENERIC_SERVER_ERROR' => 'При соединении с сервером произошла ошибка. Попробуйте снова.',
  'ERR_GENERIC_TITLE' => 'Ошибка',
  'ERR_GOOGLE_API_415' => 'Приложение Google Docs не поддерживает предоставленный Вами формат файла.',
  'ERR_HTTP_400_ACTION' => 'Вернуться к предыдущей странице.',
  'ERR_HTTP_400_TEXT_LINE1' => 'Ваш браузер отправил запрос, что сервер не мог понять.',
  'ERR_HTTP_400_TEXT_LINE2' => 'Пожалуйста, обратитесь к администратору Sugar для более подробной информации.',
  'ERR_HTTP_400_TITLE' => 'Ошибка: недопустимый запрос',
  'ERR_HTTP_400_TYPE' => '400',
  'ERR_HTTP_404_ACTION' => 'Вернуться к предыдущей странице.',
  'ERR_HTTP_404_TEXT' => 'Страница не существует, или у Вас нет разрешения получить доступ к этой странице.',
  'ERR_HTTP_404_TITLE' => 'HTTP: 404 Not Found (Не найдено)',
  'ERR_HTTP_404_TYPE' => '404',
  'ERR_HTTP_500_ACTION' => 'Обратитесь в техническую поддержку.',
  'ERR_HTTP_500_TEXT' => 'На сервере произошла ошибка. Обратитесь в техническую подержку.',
  'ERR_HTTP_500_TITLE' => 'HTTP: 500 Internal Server Error (Внутренняя ошибка сервера)',
  'ERR_HTTP_500_TYPE' => '500',
  'ERR_HTTP_DEFAULT_ACTION' => 'Вернуться к предыдущей странице.',
  'ERR_HTTP_DEFAULT_TEXT' => 'Неизвестная ошибка.',
  'ERR_HTTP_DEFAULT_TITLE' => 'Неизвестная ошибка',
  'ERR_HTTP_DEFAULT_TYPE' => 'Неизвестно',
  'ERR_INTERNAL_ERR_MSG' => 'Внутренняя ошибка',
  'ERR_INVALID_AMOUNT' => 'Пожалуйста, введите правильное количество.',
  'ERR_INVALID_DATE' => 'Пожалуйста, введите верную дату.',
  'ERR_INVALID_DATE_FORMAT' => 'Формат даты должен быть следующим:',
  'ERR_INVALID_DAY' => 'Пожалуйста, введите верный день.',
  'ERR_INVALID_EMAIL_ADDRESS' => 'неверный e-mail-адрес.',
  'ERR_INVALID_FILE_REFERENCE' => 'Неверная ссылка на файл',
  'ERR_INVALID_HOUR' => 'Пожалуйста, введите значение часа между 0 и 24',
  'ERR_INVALID_MONTH' => 'Пожалуйста, введите верный месяц.',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Обязательные поля неверно заполнены:',
  'ERR_INVALID_TIME' => 'Пожалуйста, введите верное время.',
  'ERR_INVALID_VALUE' => 'Неверное значение:',
  'ERR_INVALID_YEAR' => 'Пожалуйста, введите правильно четырёхзначное значение года.',
  'ERR_LAYOUT_RENDER_MSG' => 'Не удалось ничего передать. Пожалуйста, попробуйте позже или обратитесь в службу технической поддержки.',
  'ERR_LAYOUT_RENDER_TITLE' => 'Ошибка передачи оформления',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Ошибка: Не хватает записи отображения для модуля.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Пропущены обязательные поля:',
  'ERR_MISSING_VARDEF_NAME' => 'Внимание: поле [[field]] не имеет отображаемой записи в файле [moduleDir] vardefs.php',
  'ERR_MOBILE_BROWSER_FORBIDDEN' => 'Запрещено.',
  'ERR_MOBILE_BROWSER_INTERNAL_SERVER_ERROR' => 'Внутренняя ошибка сервера.',
  'ERR_MOBILE_BROWSER_NOT_AUTHORIZED' => 'Ошибка аутентификации.',
  'ERR_MOBILE_BROWSER_PAGE_NOT_FOUND' => 'Запрошенный ресурс не найден.',
  'ERR_MOBILE_BROWSER_SERVICE_UNAVAILABLE' => 'Сервис недоступен.',
  'ERR_MOBILE_CONFLICT' => 'Кто-то отредактировал такую же запись на сервере. Подтвердите для автоматического объединения Ваших изменений или отклоните для их отмены.',
  'ERR_MOBILE_CONNECTION_FAILED' => 'Ошибка при соединении с сервером.',
  'ERR_MOBILE_CONNECTION_FAILED_LOGIN' => 'Сервер недоступен по указанному URL.',
  'ERR_MOBILE_EMAIL' => 'Ошибка. Неверный Email адрес.',
  'ERR_MOBILE_FILE_ABORTED' => 'Операция "чтение" была прервана',
  'ERR_MOBILE_FILE_NOT_FOUND' => 'Файл не найден',
  'ERR_MOBILE_FILE_NOT_READABLE' => 'Нечитаемый файл',
  'ERR_MOBILE_FILE_NOT_SUPPORTED' => 'Этот тип документа не поддерживается.',
  'ERR_MOBILE_FILE_PROCESSING' => 'Ошибка при обработке файла',
  'ERR_MOBILE_FILE_READ' => 'Не удалось прочитать файл',
  'ERR_MOBILE_FILE_SECURITY' => 'Файл заблокирован',
  'ERR_MOBILE_FILE_SIZE_LIMIT_EXCEEDED' => 'Слишком большой файл. Максимально допустимый размер - {{size}}',
  'ERR_MOBILE_GENERIC_NATIVE_ERROR' => 'Возникла неожиданная ошибка.',
  'ERR_MOBILE_INCOMPATIBLE_CLIENT_VERSION' => 'Ваше приложение устаревшее и больше несовместимо с {{{brandName}}} системой, к которой Вы соединены. Хотите загрузить новую версию с App Store?',
  'ERR_MOBILE_INTERNAL' => 'Внутренняя ошибка ({{{code}}}). Попробуйте снова позже.',
  'ERR_MOBILE_INTERNET_UNAVAILABLE' => 'Соединение с Интернетом недоступно.',
  'ERR_MOBILE_INVALID_CREDS' => 'Неверный пользователь или пароль.',
  'ERR_MOBILE_METADATA_CHANGED' => 'Настройки сервера были изменены.',
  'ERR_MOBILE_METADATA_CHANGED_RELOAD' => 'Настройка сервера изменена и необходима перезагрузка. Продолжить?',
  'ERR_MOBILE_NOT_AUTHORIZED' => 'Доступ не авторизован.',
  'ERR_MOBILE_NOT_FOUND' => 'Ресурс не найден.',
  'ERR_MOBILE_NOT_FOUND_LOGIN' => '{{{brandName}}} Сервер не найден по указанному URL.',
  'ERR_MOBILE_SESSION_EXPIRED' => 'Ваша сессия истекла.',
  'ERR_MOBILE_SSO_NOT_CONFIGURED' => 'Логин SSO недоступен. Убедитесь, что экземпляр Sugar 7.5 или экземпляр выше настроен для SSO.',
  'ERR_MOBILE_STORAGE_UNAVAILABLE' => 'Запоминающее устройство недоступно',
  'ERR_MOBILE_TIMEOUT' => 'Сервер не отвечает.',
  'ERR_MOBILE_TIMEOUT_LOGIN' => 'Сервер не отвечает по указанному URL.',
  'ERR_MOBILE_UPLOAD' => 'Ошибка во время загрузки файла',
  'ERR_MOBILE_VALIDATION' => 'Запись неверная',
  'ERR_MOBILE_VIEW_NOT_SUPPORTED' => 'Мобильная версия не поддерживает данный функционал. Вы хотите открыть десктопную версию?',
  'ERR_MONITOR_FILE_MISSING' => 'Ошибка: Невозможно создать обзор потому что файл метаданных не существует.',
  'ERR_MONITOR_NOT_CONFIGURED' => 'Ошибка: Для запрашиваемого имени обзор не сконфигурирован.',
  'ERR_MSSQL_DB_CONTEXT' => 'Изменен контекст базы данных на',
  'ERR_MSSQL_WARNING' => 'Внимание:',
  'ERR_NEED_ACTIVE_SESSION' => 'Требуется активная сессия для экспорта содержимого.',
  'ERR_NOTHING_SELECTED' => 'Пожалуйста, выберите перед тем, как продолжить.',
  'ERR_NOT_ADMIN' => 'У Вас нет доступа к администрированию.',
  'ERR_NO_DB' => 'Ошибка соединения к базе данных. Пожалуйста, обратитесь к sugarcrm.log за деталями.',
  'ERR_NO_DOCS' => 'Нет доступных документов',
  'ERR_NO_HEADER_ID' => 'Эта функция недоступна для данной темы.',
  'ERR_NO_PRIMARY_TEAM_SPECIFIED' => 'Основная команда не выбрана',
  'ERR_NO_RECORDS_SELECTED' => 'Вы не выбрали записи.',
  'ERR_NO_SINGLE_QUOTE' => 'Нельзя использовать одинарную кавычку для',
  'ERR_NO_SUCH_FILE' => 'Файл не существует в системе',
  'ERR_NO_VIEW_ACCESS_ACTION' => 'Обратитесь к Вашему администратору для запроса доступа.',
  'ERR_NO_VIEW_ACCESS_MSG' => 'Обратитесь к Вашему администратору по поддержке для получения доступа для просмотра {0} модуля.',
  'ERR_NO_VIEW_ACCESS_REASON' => 'У Вас нет прав для доступа к этой странице.',
  'ERR_NO_VIEW_ACCESS_TITLE' => 'Отказано в доступе',
  'ERR_OFFLINE' => 'Ошибка автономного режима',
  'ERR_OFFLINE_CLEAN_UP_CONFIRMATION' => 'Недостаточно свободного места для автономного хранилища. Рекомендуется очистка хранилища. Хотите выполнить очистку сейчас?',
  'ERR_OFFLINE_DB_CLEANING_ERROR' => 'Не удалась очистка базы данных',
  'ERR_OFFLINE_OUT_OF_SPACE' => 'Недостаточно места в локальном хранилище.',
  'ERR_OFFLINE_PREFETCH_FAILED' => 'Не удалось произвести предвыборку записей из сервера',
  'ERR_OFFLINE_SERVERTIME_UNAVAILABLE' => 'Не удалось получить время сервера',
  'ERR_OFFLINE_START_FAILED_OUT_OF_SPACE' => 'Не удалось создать локальное хранилище: недостаточно места.',
  'ERR_OFFLINE_STORAGE_CREATE' => 'Не удалось создать локальное хранилище',
  'ERR_OFFLINE_STORAGE_UNAVAILABLE' => 'Не удалось открыть локальное хранилище',
  'ERR_OFFLINE_SYNC_CONFLICT' => 'Ошибка синхронизации',
  'ERR_OFFLINE_SYNC_ERROR' => 'Ошибка синхронизации',
  'ERR_OPPORTUNITY_NAME_DUPE' => 'Сделка с названием %s уже существует. Пожалуйста, введите другое название.',
  'ERR_OPPORTUNITY_NAME_MISSING' => 'Отсутствует название сделки. Пожалуйста, введите название.',
  'ERR_PASSWORD_MISMATCH' => 'Пароли не совпадают.',
  'ERR_PORTAL_NAME_CHECK' => 'Не удалось подтвердить уникальность пользователя Портала',
  'ERR_POTENTIAL_SEGFAULT' => 'Обнаружена потенциальная неполадка в сегментации Apache. Пожалуйста, попросите администратора SugarCRM подтвердить наличие проблемы и известить SugarCRM.',
  'ERR_QUERY_LIMIT' => 'Ошибка: Достигнут предел запроса $limit для модуля $module.',
  'ERR_QUOTE_CONVERTED' => 'Это коммерческое предложение уже конвертировано в продажу.',
  'ERR_REENTER_PASSWORDS' => 'Пароли должны совпадать.',
  'ERR_RENDER_FAILED_MSG' => 'Не удалось формировать изображение',
  'ERR_RENDER_FAILED_TITLE' => 'Не удалось формировать изображение',
  'ERR_RENDER_FIELD_FAILED_MSG' => 'Не удалось формировать поле {0}.',
  'ERR_RENDER_FIELD_FAILED_TITLE' => 'Не удалось формировать поле',
  'ERR_RESOLVE_ERRORS' => 'Пожалуйста, устраните все ошибки, чтобы продолжить.',
  'ERR_RSS_INVALID_INPUT' => 'RSS не является действительным input_type',
  'ERR_RSS_INVALID_RESPONSE' => 'RSS не является действительным response_type для этого метода',
  'ERR_SELF_REPORTING' => 'Пользователь не может отчитываться самому себе.',
  'ERR_SERVER_FLAVOR_INCOMPATIBLE' => 'Несовместимое издание сервера: {{{flavor}}}. Поддерживаемые издания: {{{supportedFlavors}}}.',
  'ERR_SERVER_VERSION_INCOMPATIBLE' => 'Несовместимая версия сервера: {{{version}}}. Min обязательная версия: {{{minVersion}}}.',
  'ERR_SINGLE_QUOTE' => 'Данное поле не поддерживает использование одиночной кавычки. Пожалуйста, измените значение.',
  'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'В массиве displayParams отсутствует индекс для:',
  'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Ошибка: неравное количество аргументов для элементов &#39;key&#39; и &#39;copy&#39; в массиве displayParams.',
  'ERR_SQS_NO_MATCH' => 'Нет совпадений',
  'ERR_SQS_NO_MATCH_FIELD' => 'Нет совпадения для поля:',
  'ERR_STORE_FILE_MISSING' => 'Ошибка: Невозможно найти файл внедрения хранилища.',
  'ERR_SUHOSIN' => 'Suhosin заблокировал поток загрузки, добавьте "upload" в suhosin.executor.include.whitelist (Больше информации здесь: sugarcrm.log)',
  'ERR_SYNC_FAILED' => 'Ошибка при синхронизации с сервером',
  'ERR_TIMEPERIOD_ALREADY_HAS_LEAVES' => 'Этот временной период уже содержит доп. периоды',
  'ERR_TIMEPERIOD_ALREADY_LEAF' => 'Доп. временные периоды не могут содержать доп. периоды',
  'ERR_TIMEPERIOD_TYPE_DOES_NOT_EXIST' => 'Не удалось отследить временные периоды для типа: {0}',
  'ERR_TIMEPERIOD_UNDEFINED_FOR_DATE' => 'Ошибка Временной период не установлен для даты {0}',
  'ERR_UNDEFINED_METRIC' => 'Ошибка: Невозможно сохранить значение для неопределённого измерения',
  'ERR_UW_RETIRED' => 'Процедура обновления не доступна в этой версии.',
  'ERR_VCARD_FILE_MISSING' => 'Отсутствует vcf файл',
  'ERR_VCARD_FILE_PARSE' => 'Ошибка при разборе формата vCard',
  'EXCEPTION_ACCESS_MODULE_CONFIG_NOT_AUTHORIZED' => 'Текущий пользователь не авторизирован для изменения {moduleName} настроек конфигурации',
  'EXCEPTION_CHANGE_MODULE_CONFIG_NOT_AUTHORIZED' => 'Текущий пользователь не авторизирован для изменения {moduleName} настроек конфигурации',
  'EXCEPTION_CLIENT_OUTDATED' => 'Ваше ПО устарело, пожалуйста, обновите Ваш клиент перед повторным соединением.',
  'EXCEPTION_CLIENT_OUTDATED_DESC' => 'Указывает, что клиент, использующий API, устарел и должен быть обновлён перед следующим использованием API.',
  'EXCEPTION_CONNECTOR_RESPONSE' => 'Коннектор или запрос интеграции привел к неудачному ответу.',
  'EXCEPTION_CONNECTOR_RESPONSE_DESC' => 'Указывает, что запрос, отправленный через API на другой сервис, конечную точку или URI не смог быть обработан сервером.',
  'EXCEPTION_CREATE_MODULE_NOT_AUTHORIZED' => 'У Вас нет прав на создание {moduleName}. Свяжитесь с администратором, если Вам нужен доступ.',
  'EXCEPTION_EDIT_CONFLICT' => 'Редактирование привело к конфликту, пожалуйста, перезагрузите данные',
  'EXCEPTION_EDIT_CONFLICT_DESC' => 'Указывает, что, возможно, произошли одновременные правки записи и текущий запрос для редактирования записи повлияет на предыдущее редактирование записи.',
  'EXCEPTION_FATAL_ERROR' => 'Ваш запрос не был выполнен. Произошла фатальная ошибка. Больше деталей - в системных записях.',
  'EXCEPTION_FATAL_ERROR_DESC' => 'Запрос не может быть обработан из-за наличия ошибки с ответом. Как правило, это означает, что произошла фатальная ошибка и что конкретный сбой может быть идентифицирован в журнале приложений.',
  'EXCEPTION_FAVORITE_MODULE_NOT_AUTHORIZED' => 'У вас нет прав для того, чтобы добавлять в избранное {moduleName}. Обратитесь к администратору для получения доступа.',
  'EXCEPTION_INACTIVE_PORTAL_USER' => 'Вы не можете войти в Портал, поскольку Ваша учетная запись неактивна. Свяжитесь с администратором, если Вам нужен доступ.',
  'EXCEPTION_INACTIVE_PORTAL_USER_DESC' => 'Учетная запись, связанная с вошедшим на портал пользователем, на данный момент неактивна. Необходимы действия со стороны службы поддержки.',
  'EXCEPTION_INCORRECT_VERSION_DESC' => 'Используемая версия API не соответствует для выполнения текущего запроса.',
  'EXCEPTION_INVALID_PARAMETER' => 'В Вашем запросе был неверный параметр.',
  'EXCEPTION_INVALID_PARAMETER_DESC' => 'Указывает, что параметр, отправленный в запросе, недействителен.',
  'EXCEPTION_INVALID_TOKEN' => 'Ваш токен для авторизации недействителен.',
  'EXCEPTION_INVALID_TOKEN_DESC' => 'Указывает, что токен аутентификации, представленный с запросом является недействительным. Это обычно происходит из-за истечения срока токена, но также по причине неверного формата токена или потому, что токен неверный.',
  'EXCEPTION_MAINTENANCE' => 'SugarCRM в режиме обслуживания, вход разрешен только администраторам. Обратитесь к вашему администратору для получения большей информации',
  'EXCEPTION_MAINTENANCE_DESC' => 'Версия SugarCRM, обслуживающая API находится в режиме обслуживания. Доступ к API ограничен только для администраторов.',
  'EXCEPTION_METADATA_CONFLICT' => 'Метаданные привели к конфликту, пожалуйста, перезагрузите метаданные.',
  'EXCEPTION_METADATA_OUT_OF_DATE' => 'Ваши метаданные или хеш пользователя не принимает сервер. Пожалуйста, выполните повторную синхронизацию метаданных.',
  'EXCEPTION_METADATA_OUT_OF_DATE_DESC' => 'Указывает, что метаданные на сервере не соответствуют метаданным, которые клиент использует  в настоящее время. Это может произойти после изменения настроек системы, изменения модулей в Студии или развертывания новых модулей наряду с другими изменениями системы.',
  'EXCEPTION_MISSING_PARAMTER' => 'В Вашем запросе не хватает необходимого параметра.',
  'EXCEPTION_MISSING_PARAMTER_DESC' => 'Указывает, что необходимый параметр запроса отсутствует.',
  'EXCEPTION_NEED_LOGIN' => 'Вам нужно войти в систему, чтобы выполнить это действие.',
  'EXCEPTION_NEED_LOGIN_DESC' => 'Запрашиваемая конечная точка требует аутентификации, а пользователь еще не  аутентифицировался.',
  'EXCEPTION_NOT_AUTHORIZED' => 'У Вас нет прав на выполнение этого действия. Свяжитесь с администратором, если Вам нужен доступ.',
  'EXCEPTION_NOT_AUTHORIZED_DESC' => 'Означает, что у пользователя нет прав для выполнения требуемого действия.',
  'EXCEPTION_NOT_FOUND' => 'Ресурс, запрошенный Вами, не был найден. Не был найден обработчик для пути, указанного в запросе.',
  'EXCEPTION_NOT_FOUND_DESC' => 'Конечная точка не может найти ресурсы для выполнения запроса или нет обработчика запросов.',
  'EXCEPTION_NO_METHOD' => 'Ваш запрос не был поддержан. HTTP-метод для вашего запроса не был найден для данного пути.',
  'EXCEPTION_NO_METHOD_DESC' => 'Конечная точка не поддерживает тип запроса HTTP. Это может произойти, например, когда делается запрос POST на конечную точку для запроса GET.',
  'EXCEPTION_PORTAL_NOT_CONFIGURED' => 'Портал не настроен правильно. Свяжитесь с администратором за помощью.',
  'EXCEPTION_PORTAL_NOT_CONFIGURED_DESC' => 'Означает, что приложение портала настроено неправильно и не может быть использовано. Необходимы действия со стороны администратора портала.',
  'EXCEPTION_REQUEST_FAILURE' => 'Ваш запрос не был выполнен.',
  'EXCEPTION_REQUEST_FAILURE_DESC' => 'Не удалось выполнить запрос.',
  'EXCEPTION_REQUEST_TOO_LARGE' => 'Ваш запрос слишком большой для выполнения.',
  'EXCEPTION_REQUEST_TOO_LARGE_DESC' => 'Запрос слишком большой для обработки сервером.',
  'EXCEPTION_SUBSCRIBE_MODULE_NOT_AUTHORIZED' => 'У вас нет прав для того, чтобы подписаться на {moduleName}. Обратитесь к администратору для получения доступа.',
  'EXCEPTION_UNKNOWN_EXCEPTION' => 'Ваш запрос не был выполнен вследствие неизвестного исключения.',
  'EXCEPTION_UNKNOWN_EXCEPTION_DESC' => 'Условие произошло из-за общего сбоя или ошибки. Причины для данного исключения могут быть разными, но обычно выходят за рамки более конкретного исключения API.',
  'FATAL_LICENSE_ALTERED' => 'Ваша лицензия была изменена с тех пор, как Вы в последний раз проверили ее на подлинность.',
  'LBL_1_COLUMN' => '1 столбец',
  'LBL_2_COLUMN' => '2 столбца',
  'LBL_3_COLUMN' => '3 столбца',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Удалить Контрагента',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Удалить Контрагента',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Удалить кампанию',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Удалить кампанию',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Очистить',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Очистить',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Удалить контакт',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Удалить контакт',
  'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Удалить файл',
  'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Удалить файл',
  'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Очистить',
  'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Очистить',
  'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Удалить команду',
  'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Удалить команду',
  'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Удалить пользователя',
  'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Удалить пользователя',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Выбрать Контрагента',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Выбрать Контрагента [Alt+A]',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Выбрать кампанию',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Выбрать кампанию',
  'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
  'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Выбрать контакт',
  'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Выбрать Контакт [Alt+C]',
  'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
  'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Выбрать файл',
  'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Выбрать файл [Alt+F]',
  'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
  'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Выбрать команду',
  'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Выбрать команду',
  'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
  'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Выбрать пользователя',
  'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Выбрать пользователя [Alt+U]',
  'LBL_ACCOUNT' => 'Контрагент',
  'LBL_ACCOUNTS' => 'Контрагенты',
  'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
  'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Посмотреть отчёт',
  'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Посмотреть отчёт [Alt+H]',
  'LBL_ACTION' => 'Действие',
  'LBL_ACTION_CREATE' => 'СОЗДАТЬ',
  'LBL_ACTION_CREATE_EXPLANATION' => 'Создан {{module}} "{{name}}"',
  'LBL_ACTION_CREATE_RELATED_EXPLANATION' => 'Созданный {{module}} "{{name}}" связан с {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_DELETE' => 'УДАЛИТЬ',
  'LBL_ACTION_DELETE_EXPLANATION' => 'Удален {{module}} "{{name}}"',
  'LBL_ACTION_FAVORITE' => 'ИЗБРАННОЕ',
  'LBL_ACTION_FAVORITE_EXPLANATION' => 'Избранный {{module}} "{{name}}"',
  'LBL_ACTION_FOLLOW' => 'ПРОДОЛЖИТЬ',
  'LBL_ACTION_FOLLOW_EXPLANATION' => 'Подписанный {{module}} "{{name}}"',
  'LBL_ACTION_LINK' => 'ПРИСОЕДИНИТЬ',
  'LBL_ACTION_LINK_EXPLANATION' => 'Присоединенный {{module}} "{{name}}" к {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_UNFAVORITE_EXPLANATION' => 'Неизбранный {{module}} "{{name}}"',
  'LBL_ACTION_UNFOLLOW_EXPLANATION' => 'Неподписанный {{module}} "{{name}}"',
  'LBL_ACTION_UNLINK' => 'ОТСОЕДИНИТЬ',
  'LBL_ACTION_UNLINK_EXPLANATION' => 'Отсоединенный {{module}} "{{name}}" от {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_UPDATE' => 'ОБНОВИТЬ',
  'LBL_ACTION_UPDATE_EXPLANATION' => 'Обновлен {{module}} "{{name}}"',
  'LBL_ACTIVE' => 'Сессия активна',
  'LBL_ACTIVE_TASKS_DASHLET' => 'Активные задачи',
  'LBL_ACTIVE_TASKS_DASHLET_COMPLETE_TASK' => 'Завершено',
  'LBL_ACTIVE_TASKS_DASHLET_CONFIRM_CLOSE' => 'Вы действительно хотите закрыть {0} как выполненный?',
  'LBL_ACTIVE_TASKS_DASHLET_DESCRIPTION' => 'Дашлет активных задач отображает задачи на сейчас, предстоящие и ежедневные.',
  'LBL_ACTIVE_TASKS_DASHLET_DUE_NOW' => 'Сейчас',
  'LBL_ACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL' => 'Задачи Команды',
  'LBL_ACTIVE_TASKS_DASHLET_TODO' => 'Ежедневные',
  'LBL_ACTIVE_TASKS_DASHLET_UPCOMING' => 'Предстоящие',
  'LBL_ACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL' => 'Мои задачи',
  'LBL_ACTIVITIES' => 'Лента мероприятий',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
  'LBL_ACTIVITYSTREAM_COMMENT_PLACEHOLDER' => 'Добавьте комментарий… Введите @ для упоминания пользователя. Введите # для ссылки на запись.',
  'LBL_ACTIVITYSTREAM_POST_PLACEHOLDER' => 'Введите заметку или добавьте вложение методом drag and drop. Введите @ для упоминания пользователя. Введите # для ссылки на запись.',
  'LBL_ACTIVITYSTREAM_RELATIVETIME_ON' => 'в',
  'LBL_ACTIVITY_STREAM' => 'Лента мероприятий',
  'LBL_ACTIVITY_STREAM_DASHLET_DESCRIPTION' => 'Просмотрите список действий, выполняемых на записях, создайте и оставьте комментарии.',
  'LBL_ACTIVITY_STREAM_DASHLET_NAME' => 'Моя лента активности',
  'LBL_ACTIVITY_STREAM_DISABLED' => 'Лента мероприятий не доступна.',
  'LBL_ACTIVITY_STREAM_DISABLED_MODULE' => 'Лента активности не включена для данного модуля',
  'LBL_ACTIVITY_VIEW_TOUR' => 'Краткий обзор Мероприятий',
  'LBL_ACTIVTY_STREAM_SHOW_MORE' => 'Больше постов...',
  'LBL_ADD' => 'Добавить',
  'LBL_ADDED_DASHLET' => 'Раздел добавлен',
  'LBL_ADDING_DASHLET' => 'Добавление раздела ...',
  'LBL_ADDITIONAL_DETAILS' => 'Дополнительная информация',
  'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Закрыть',
  'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Нажмите, чтобы закрыть',
  'LBL_ADD_ALL_LEAD_FIELDS' => 'Добавить все поля',
  'LBL_ADD_BUTTON' => 'Добавить',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_TITLE' => 'Выбрать [Alt+A]',
  'LBL_ADD_DASHLETS' => 'Добавить разделы Sugar',
  'LBL_ADD_DOCUMENT' => 'Добавить документ',
  'LBL_ADD_PAGE' => 'Добавить страницу',
  'LBL_ADD_TO_FAVORITES' => 'Добавить в избранное',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Добавить в целевой список',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Добавить в целевой список',
  'LBL_ADMIN' => 'Администрирование',
  'LBL_ADVANCED' => 'Расширенные',
  'LBL_ADVANCEDSEARCH' => 'Расширенный поиск',
  'LBL_ADVANCED_SEARCH' => 'Расширенный поиск',
  'LBL_ADV_SEARCH_LNK_KEY' => '8',
  'LBL_AJAX_FAILURE' => 'Сбой Ajax',
  'LBL_ALERT_BROWSER_NOT_SUPPORTED' => 'Версия Вашего браузера больше не поддерживается, или Вы используете браузер, который не поддерживается.',
  'LBL_ALERT_BROWSER_SUPPORT' => 'Рекомендованы следующие версии браузеров: Internet Explorer 9 Firefox 22 Safari 6 Chrome 27',
  'LBL_ALERT_TITLE_ERROR' => 'Ошибка:',
  'LBL_ALERT_TITLE_LOADING' => 'Идет загрузка...',
  'LBL_ALERT_TITLE_NOTICE' => 'Заметка:',
  'LBL_ALERT_TITLE_SUCCESS' => 'Успешно',
  'LBL_ALERT_TITLE_WARNING' => 'Предупреждение:',
  'LBL_ALT_ADDRESS' => 'Другой адрес:',
  'LBL_ALT_ADD_TEAM_ROW' => 'Добавить новую строку команды',
  'LBL_ALT_HIDE_OPTIONS' => 'Скрыть опции',
  'LBL_ALT_HOT_KEY' => 'Alt+',
  'LBL_ALT_INFO' => 'Информация',
  'LBL_ALT_MOVE_COLUMN_DOWN' => 'Передвинуть выбранную запись вниз в списке',
  'LBL_ALT_MOVE_COLUMN_LEFT' => 'Передвинуть выбранную запись в список слева',
  'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Передвинуть выбранную запись в список справа',
  'LBL_ALT_MOVE_COLUMN_UP' => 'Передвинуть выбранную запись вверх в списке',
  'LBL_ALT_REMOVE_TEAM_ROW' => 'Удалить команду',
  'LBL_ALT_SHOW_OPTIONS' => 'Опции',
  'LBL_ALT_SORT' => 'Сортировка',
  'LBL_ALT_SORT_ASC' => 'Нисходящая сортировка',
  'LBL_ALT_SORT_DESC' => 'Нисходящая сортировка',
  'LBL_ALT_SPOT_SEARCH' => 'Поиск места',
  'LBL_AMOUNT_USDOLLAR' => 'Сумма',
  'LBL_AND' => 'И',
  'LBL_ANNUAL_TIMEPERIOD_FORMAT' => 'Год {0}',
  'LBL_ARCHIVE' => 'Архивировать',
  'LBL_ARCHIVE_EMAIL' => 'Отправить E-mail в архив',
  'LBL_ASSIGN' => 'Выбрать {{{this}}}',
  'LBL_ASSIGNED_TO' => 'Ответственный (-ая):',
  'LBL_ASSIGNED_TO_NAME' => 'Ответственный (-ая)',
  'LBL_ASSIGNED_TO_USER' => 'Ответственный (-ая)',
  'LBL_ASSOC' => 'Присоединить {{{this}}}',
  'LBL_ASSOC_EXISTING' => 'Присоединить существующее {{{this}}}',
  'LBL_ASSOC_RELATED_RECORD' => 'Присоединить существующую запись',
  'LBL_AUTH_FAILED' => 'Ошибка аутентификации клиента',
  'LBL_AUTH_FAILED_TITLE' => 'Неверный клиент',
  'LBL_BACK' => 'Назад',
  'LBL_BAL' => 'Создать список',
  'LBL_BASE_RATE' => 'Базовая процентная ставка',
  'LBL_BASIC' => 'Базовые',
  'LBL_BASIC_QUICK_SEARCH' => 'Поиск...',
  'LBL_BASIC_SEARCH' => 'Поиск',
  'LBL_BEFORE' => 'До',
  'LBL_BEST' => 'Оптимистичный',
  'LBL_BEST_ADJUSTED' => 'Оптимистичный (Скорректированный)',
  'LBL_BILLING_ADDRESS' => 'Юридический адрес',
  'LBL_BILLING_STREET' => 'Улица:',
  'LBL_BILL_TO_ACCOUNT' => 'Выставить счёт контрагенту',
  'LBL_BILL_TO_CONTACT' => 'Выставить счёт контакту',
  'LBL_BLANK_VALUE' => '<empty>',
  'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack создан для ID пользователя {0}',
  'LBL_BROWSER_TITLE' => 'SugarCRM - Commercial Open Source CRM',
  'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
  'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Просмотреть документы',
  'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Обзор документов [Alt+B]',
  'LBL_BUGS' => 'Ошибки',
  'LBL_BY' => 'от',
  'LBL_Blank' => ' ',
  'LBL_CALENDAR_DURATION' => 'Продолжительность',
  'LBL_CALENDAR_END_DATE' => 'Дата окончания',
  'LBL_CALENDAR_EVENT_RESPONSE_ACCEPT' => 'Посещение',
  'LBL_CALENDAR_EVENT_RESPONSE_DECLINE' => 'Отклонено',
  'LBL_CALENDAR_EVENT_RESPONSE_NONE' => 'Нет ответа',
  'LBL_CALENDAR_EVENT_RESPONSE_TENTATIVE' => 'Под вопросом',
  'LBL_CALENDAR_EVENT_SCHEDULE_UNAVAILABLE' => 'Расписание недоступно',
  'LBL_CALENDAR_RECURRENCE' => 'Повторение',
  'LBL_CALENDAR_REMINDERS' => 'Напоминания',
  'LBL_CALENDAR_REPEAT_COUNT' => 'Повторить частоту',
  'LBL_CALENDAR_REPEAT_DOW' => 'Повторять по дням недели',
  'LBL_CALENDAR_REPEAT_INTERVAL' => 'Интервал повторения',
  'LBL_CALENDAR_REPEAT_TYPE' => 'Тип повторения',
  'LBL_CALENDAR_REPEAT_UNTIL_DATE' => 'Повторять до',
  'LBL_CALENDAR_START_DATE' => 'Дата начала',
  'LBL_CALL' => 'Звонок',
  'LBL_CALLS' => 'Звонки',
  'LBL_CALLS_SUBPANEL_TITLE' => 'Звонки',
  'LBL_CALL_BUTTON' => 'Звонок',
  'LBL_CAMPAIGN' => 'Маркетинговая кампания:',
  'LBL_CAMPAIGNLOG' => 'Журнал кампании',
  'LBL_CAMPAIGNS' => 'Маркетинговые кампании',
  'LBL_CAMPAIGNS_SEND_QUEUED' => 'Отправить письма кампании, стоящие в очереди',
  'LBL_CAMPAIGN_CONTACT' => 'Маркетинговые кампании',
  'LBL_CAMPAIGN_ID' => 'Маркетинговая кампания',
  'LBL_CANCEL_BUTTON_KEY' => 'X',
  'LBL_CANCEL_BUTTON_LABEL' => 'Отмена',
  'LBL_CANCEL_BUTTON_LABEL_CONT' => 'прекратить.',
  'LBL_CANCEL_BUTTON_LABEL_UNSAVED_CONT' => 'остаться на странице',
  'LBL_CANCEL_BUTTON_TITLE' => 'Отмена [Alt+X]',
  'LBL_CANNOT_SEND_PASSWORD' => 'Ошибка отправки пароля',
  'LBL_CAN_NOT_DISABLE_ALL_LANG' => 'Вы не можете отключить все языки.',
  'LBL_CASE' => 'Обращение',
  'LBL_CASES' => 'Обращения',
  'LBL_CASE_SUMMARY_CHART' => 'Резюме обращения',
  'LBL_CASE_SUMMARY_CHART_DESC' => 'Обзор связанных обращений.',
  'LBL_CHANGE_BUTTON_KEY' => 'G',
  'LBL_CHANGE_BUTTON_LABEL' => 'Изменить',
  'LBL_CHANGE_BUTTON_TITLE' => 'Изменить [Alt+G]',
  'LBL_CHANGE_LAYOUT' => 'Изменить макет',
  'LBL_CHANGE_PASSWORD' => 'Изменить пароль',
  'LBL_CHARSET' => 'UTF-8',
  'LBL_CHART' => 'График',
  'LBL_CHART_CONFIG_ALLOW_SCROLLING' => 'Разрешить прокрутку',
  'LBL_CHART_CONFIG_BAR_CHART_OPTIONS' => 'Параметры отображения гистограммы',
  'LBL_CHART_CONFIG_CHART_TYPE' => 'Тип графика',
  'LBL_CHART_CONFIG_HIDE_EMPTY_GROUPS' => 'Скрыть пустые группы',
  'LBL_CHART_CONFIG_SHOW_TITLE' => 'Показать заголовок',
  'LBL_CHART_CONFIG_SHOW_XAXIS_LABEL' => 'Показать метку оси-x',
  'LBL_CHART_CONFIG_SHOW_YAXIS_LABEL' => 'Показать метку оси-y',
  'LBL_CHART_CONFIG_STACK_DATA' => 'Ряд данных стека',
  'LBL_CHART_CONFIG_TICK_DISPLAY' => 'Способы отображения делений',
  'LBL_CHART_CONFIG_TICK_ROTATE' => 'Повернуть деления',
  'LBL_CHART_CONFIG_TICK_STAGGER' => 'Расположить деления',
  'LBL_CHART_CONFIG_TICK_WRAP' => 'Перенести деления',
  'LBL_CHART_CONFIG_VALUE_PLACEMENT' => 'Размещение значения гистограммы',
  'LBL_CHART_CONTROLS_CLOSE' => 'Скрыть элементы управления',
  'LBL_CHART_CONTROLS_OPEN' => 'Показать элементы управления',
  'LBL_CHART_LEGEND_CLOSE' => 'Скрыть условные обозначения',
  'LBL_CHART_LEGEND_OPEN' => 'Показать условные обозначения',
  'LBL_CHART_NO_DATA' => 'Данные не найдены',
  'LBL_CHART_UNDEFINED' => 'Не определено',
  'LBL_CHECKALL' => 'Отметить все',
  'LBL_CHOOSE_ITEMS' => 'Выберите элементы',
  'LBL_CHOOSE_LINK' => 'Выбрать тип ссылки',
  'LBL_CHOOSE_MONTH' => 'Выберите месяц',
  'LBL_CHOOSE_PARENT_TYPE' => 'Выбрать тип Родителя',
  'LBL_CITY' => 'Город',
  'LBL_CLEARALL' => 'Очистить все',
  'LBL_CLEAR_BUTTON_KEY' => 'C',
  'LBL_CLEAR_BUTTON_LABEL' => 'Очистить',
  'LBL_CLEAR_BUTTON_TITLE' => 'Очистить [Alt+C]',
  'LBL_CLICK_HERE' => 'Нажмите здесь',
  'LBL_CLICK_TO_DRILLDOWN' => 'Нажмите для просмотра',
  'LBL_CLIENT_IP' => 'IP-адрес клиента',
  'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
  'LBL_CLOSEALL_BUTTON_LABEL' => 'Закрыть все',
  'LBL_CLOSEALL_BUTTON_TITLE' => 'Закрыть все [Alt+I]',
  'LBL_CLOSEINLINE' => 'Закрыть',
  'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Вы хотите удалить этот #module#?',
  'LBL_CLOSE_ACTIVITY_HEADER' => 'Подтверждение:',
  'LBL_CLOSE_ACTIVITY_REMEMBER' => 'Больше не показывать это сообщение:',
  'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
  'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Закрыть и создать новый',
  'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Закрыть и создать новый',
  'LBL_CLOSE_BUTTON_KEY' => 'Q',
  'LBL_CLOSE_BUTTON_LABEL' => 'Закрыть',
  'LBL_CLOSE_BUTTON_TITLE' => 'Закрыть',
  'LBL_CLOSE_DASHLETS' => 'Закрыть',
  'LBL_CLOSE_SAVE_BUTTON' => 'Закрыть задачу и сохранить',
  'LBL_CLOSE_WINDOW' => 'Закрыть окно',
  'LBL_COFIGURE_PORTAL_THEME' => 'Настройка темы портала',
  'LBL_COLLAPSE_ALL' => 'Свернуть все',
  'LBL_COLLECTION_EXACT' => 'Точно',
  'LBL_COLLECTION_NAME' => 'Название',
  'LBL_COLLECTION_PRIMARY' => 'Основная',
  'LBL_COLORS' => 'Цвета',
  'LBL_COLUMNS' => 'Столбцы',
  'LBL_COLUMNS_CAN_BE_DISPLAYED' => 'столбцы могут быть отображены.',
  'LBL_COMMENT' => 'Комментарий',
  'LBL_COMPANY_LOGO' => 'Логотип компании',
  'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
  'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Написать письмо',
  'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Написать письмо [Alt+L]',
  'LBL_CONFIGURE_TWITTER' => 'Обратитесь к администратору для настройки Twitter',
  'LBL_CONFIG_BLOCKED_DESC_CONFIG_ACCESS' => 'Параметры базы данных для {{module}} должны быть исправлены',
  'LBL_CONFIG_BLOCKED_DESC_MODULE_ACCESS' => 'У пользователя нет доступа для настройки параметров {{module}}',
  'LBL_CONFIG_BLOCKED_DESC_NO_CONFIG_METADATA' => '{{module}} не имеет каких-либо параметров конфигурации',
  'LBL_CONFIG_BLOCKED_DESC_USER_ACCESS' => 'У пользователя нет доступа к {{module}}',
  'LBL_CONFIG_BLOCKED_TITLE' => '{{module}} Ошибка конфигурации',
  'LBL_CONFIG_MODULE_SETTINGS_SAVED' => '{{module}} параметры конфигурации были сохранены.',
  'LBL_CONFIG_TITLE_MODULE_SETTINGS' => '{{module}} Настройки',
  'LBL_CONFIRM' => 'Подтвердить',
  'LBL_CONFIRM_BUTTON_LABEL' => 'Подтвердить',
  'LBL_CONFIRM_BUTTON_LABEL_CONT' => 'Продолжить',
  'LBL_CONFIRM_BUTTON_LABEL_UNSAVED_CONT' => 'покинуть страницу и отменить изменения.',
  'LBL_CONNECTORS_POPUPS' => 'Всплывающие окна соединений',
  'LBL_CONNECT_TEST_FAIL' => 'Ошибка: Настройки коннектора могут быть неккоректны. Пожалуйста, обратитесь к Вашему администратору.',
  'LBL_CONNECT_TWITTER' => 'Присоединиться к Twitter',
  'LBL_CONNECT_TWITTER_FOR_ADMIN' => 'Настроить коннектор Twitter',
  'LBL_CONTACT' => 'Контакт',
  'LBL_CONTACTS' => 'Контакты',
  'LBL_CONTACT_EDIT_PASSWORD_LNK_TEXT' => 'Изменить пароль',
  'LBL_CONTACT_LIST' => 'Список контактов',
  'LBL_CONTEXTUAL_SHORTCUTS' => 'Контекстуальные быстрые клавиши',
  'LBL_CONTRACTS' => 'Контракты',
  'LBL_COPYRIGHT' => 'Copyright © 2004-2014 SugarCRM Inc. Все права защищены.',
  'LBL_COPY_ADDRESS_FROM_LEFT' => 'Скопировать адрес слева:',
  'LBL_COUNTRY' => 'Страна:',
  'LBL_CREATED' => 'Создано пользователем',
  'LBL_CREATED_BY_USER' => 'Создано пользователем',
  'LBL_CREATED_ID' => 'Создано пользователем',
  'LBL_CREATED_USER' => 'Создано пользователем',
  'LBL_CREATE_ATTACHMENT' => 'Создать вложение',
  'LBL_CREATE_BUG' => 'Новая ошибка',
  'LBL_CREATE_BUTTON_LABEL' => 'Создать',
  'LBL_CREATE_CASE' => 'Новое обращение',
  'LBL_CREATE_CONTACT' => 'Новый контакт',
  'LBL_CREATE_KB_DOCUMENT' => 'Создать статью',
  'LBL_CREATE_LINK_BUTTON_LABEL' => 'Созать и связать запись',
  'LBL_CREATE_LINK_RECORD' => 'Создать и связать запись',
  'LBL_CREATE_MODULE' => 'Создать {{{this}}}',
  'LBL_CREATE_NEW_TARGET_LIST' => 'Создать новый целевой список',
  'LBL_CREATE_NOTE' => 'Создать заметку',
  'LBL_CREATE_OPPORTUNITY' => 'Новая сделка',
  'LBL_CREATE_RELATED' => 'Создать связанное {{{this}}}',
  'LBL_CREATE_RELATED_RECORD' => 'Создать связанную запись',
  'LBL_CREATE_TASK' => 'Новая задача',
  'LBL_CREATING_NEW_PAGE' => 'Создание новой страницы...',
  'LBL_CURRENCIES' => 'Валюты',
  'LBL_CURRENCY' => 'Валюта:',
  'LBL_CURRENCY_ID' => 'ID валюты',
  'LBL_CURRENCY_NAME' => 'Валюта',
  'LBL_CURRENCY_RATE' => 'Базовая ставка:',
  'LBL_CURRENCY_SYMBOL' => 'Символ валюты',
  'LBL_CURRENT_PASSWORD' => 'Текущий пароль',
  'LBL_CURRENT_TIMEPERIOD' => 'Текущий временной период',
  'LBL_CURRENT_USER_FILTER' => 'Только мои:',
  'LBL_DASHBOARD_BWC' => 'Мой старый рабочий стол',
  'LBL_DASHBOARD_NO_RECORDS' => 'Нет сохраненных дэшбордов',
  'LBL_DASHBOARD_TOGGLE' => 'Открыть/Закрыть приборную панель',
  'LBL_DASHLET' => 'Дашлет',
  'LBL_DASHLET_ATTACHMENTS_DESCRIPTION' => 'Заметки и Вложения принадлежат записи',
  'LBL_DASHLET_ATTACHMENTS_NAME' => 'Заметки и Вложения',
  'LBL_DASHLET_CASESSUMMARY_CLOSE_CASES' => 'Закрытые обращения',
  'LBL_DASHLET_CASESSUMMARY_OPEN_CASES' => 'Открытые обращения',
  'LBL_DASHLET_CASESSUMMARY_SUMMARY' => 'Резюме',
  'LBL_DASHLET_CASES_SUMMARY_NAME' => 'Резюме обращения',
  'LBL_DASHLET_CLOSE' => 'Закрыть',
  'LBL_DASHLET_COMPANY_INFO' => 'D&B: импортировать и дополнить',
  'LBL_DASHLET_COMPANY_INFO_DESC' => 'Дополнить существующий контрагент данными D&B. Требуется D&B подписка.',
  'LBL_DASHLET_COMPANY_INFO_LONG_DESC' => 'Обновляйте информацию об аккаунте с помощью сервиса D&B Импортировать и Улучшить.',
  'LBL_DASHLET_CONFIGURE' => 'Настроить',
  'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Автоматическое обновление',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Отображать строки',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Фильтры',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Основные настройки',
  'LBL_DASHLET_CONFIGURE_INTELLIGENT' => 'Связать с текущей записью',
  'LBL_DASHLET_CONFIGURE_LINKED' => 'Связанное поле',
  'LBL_DASHLET_CONFIGURE_MY_FAVORITES_ONLY' => 'Только избранное',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Только мои записи',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Заголовок',
  'LBL_DASHLET_CONFIG_EDIT_LABEL' => 'Редактировать',
  'LBL_DASHLET_COUNTRY_CHART_DESCRIPTION' => 'Отображает график продаж по карте стран.',
  'LBL_DASHLET_COUNTRY_CHART_NAME' => 'Продажи по Стране',
  'LBL_DASHLET_DROP_HERE' => 'Развернуть здесь',
  'LBL_DASHLET_FORECASTS_CHART_DESC' => 'Отображает прогноз по столбчатой диаграмме за определенный период времени',
  'LBL_DASHLET_FORECASTS_CHART_NAME' => 'Прогноз по столбчатой диаграмме',
  'LBL_DASHLET_FORECASTS_DATASET' => 'Набор данных',
  'LBL_DASHLET_FORECASTS_DETAILS' => 'Детали по прогнозам',
  'LBL_DASHLET_FORECASTS_DETAILS_DESC' => 'Отображает детали по текущему прогнозу.',
  'LBL_DASHLET_FORECASTS_FOR_CHART_NAME' => 'Прогноз для',
  'LBL_DASHLET_FORECASTS_GROUPBY' => 'Группировать по',
  'LBL_DASHLET_FORECAST_NAME' => 'В прогнозе',
  'LBL_DASHLET_FORECAST_PARETO_CHART_NAME' => 'Прогноз по Парето',
  'LBL_DASHLET_ITERACTIONS_NAME' => 'Взаимодействия',
  'LBL_DASHLET_LISTVIEW_DESCRIPTION' => 'Записи списков конкретного модуля согласно критериям, которые Вы определили.',
  'LBL_DASHLET_LISTVIEW_NAME' => 'Списочное представление',
  'LBL_DASHLET_MAXIMIZE' => 'Увеличить',
  'LBL_DASHLET_MAXIMIZE_ALL' => 'Развернуть все',
  'LBL_DASHLET_MINIMIZE' => 'Уменьшить',
  'LBL_DASHLET_MINIMIZE_ALL' => 'Свернуть все',
  'LBL_DASHLET_MODULE_UNAVAILABLE' => 'Данные не доступны. У вас нет разрешения на доступ к этому модулю. Пожалуйста, обновите или удалите этот дашлет.',
  'LBL_DASHLET_MOVE' => 'Переместить',
  'LBL_DASHLET_NEWS_DESCRIPTION' => 'Новостная лента Google для связанного Аккаунта',
  'LBL_DASHLET_NEWS_FEED_NAME' => 'Лента новостей',
  'LBL_DASHLET_NEWS_NAME' => 'Новости',
  'LBL_DASHLET_NO_RECORDS' => 'Записи не найдены.',
  'LBL_DASHLET_OPPORTUNITY_DESCRIPTION' => 'Показатели продажи для связанного Аккаунта',
  'LBL_DASHLET_OPPORTUNITY_NAME' => 'Показатели продажи',
  'LBL_DASHLET_PIPLINE_NAME' => 'Воронка',
  'LBL_DASHLET_RECENT_TWEETS_SUGARCRM_NAME' => 'Недавние твитты - @{{twitter}}',
  'LBL_DASHLET_REFRESH' => 'Обновить',
  'LBL_DASHLET_REFRESH_LABEL' => 'Обновить',
  'LBL_DASHLET_REMOVE_LABEL' => 'Удалить',
  'LBL_DASHLET_SAVED_REPORTS_CHART' => 'Дашлет с графиком по сохраненным отчетам',
  'LBL_DASHLET_SAVED_REPORTS_CHART_DESC' => 'Отображает график по сохраненному отчету.',
  'LBL_DASHLET_TOGGLE' => 'Переключить видимость Дэшборда',
  'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Топ 10 продуктов с доходом по продажам',
  'LBL_DATA_VIEW' => 'Просмотр данных',
  'LBL_DATE' => 'Дата',
  'LBL_DATE_ENTERED' => 'Дата создания:',
  'LBL_DATE_LAST_ACTION' => 'Дата последнего действия',
  'LBL_DATE_MODIFIED' => 'Дата изменения:',
  'LBL_DATE_START' => 'Дата начала',
  'LBL_DB_ROUND_TRIPS' => 'Database Roundtrips',
  'LBL_DEFAULT_DASHBOARD_TITLE' => 'Дэшборд',
  'LBL_DEFAULT_HELP_DASHBOARD_TITLE' => 'Help Dashboard',
  'LBL_DEFAULT_HELP_DASHLET_DESC' => 'Help Dashlet предоставляет помощь, как внутри модуля, так и относящуюся к режиму просмотра записи.',
  'LBL_DEFAULT_HELP_DASHLET_TITLE' => 'Help Dashlet',
  'LBL_DEFAULT_LINK_TEXT' => 'Текст ссылки по умолчанию',
  'LBL_DELETE' => 'Удалить',
  'LBL_DELETED' => 'Удалено',
  'LBL_DELETE_BUTTON' => 'Удалить',
  'LBL_DELETE_BUTTON_KEY' => 'D',
  'LBL_DELETE_BUTTON_LABEL' => 'Удалить',
  'LBL_DELETE_BUTTON_TITLE' => 'Удалить [Alt+D]',
  'LBL_DELETE_FILTER_CONFIRMATION' => 'Данный фильтр будет удален из всех просмотров; фильтр может содержать настройки данных для дашлетов. Вы уверены, что хотите удалить этот фильтр?',
  'LBL_DELETE_INLINE' => 'Удалить',
  'LBL_DELETE_PAGE' => 'Удалить страницу',
  'LBL_DELETE_PAGE_CONFIRM' => 'Вы действительно хотите удалить эту страницу?',
  'LBL_DELETING' => 'Удаление...',
  'LBL_DESCRIPTION' => 'Описание',
  'LBL_DETAILVIEW' => 'Вид - Подробный',
  'LBL_DETAILVIEW_NO_RECORDS' => 'В данный момент запись не может быть отображена.',
  'LBL_DIRECT_REPORTS' => 'Подчинённые',
  'LBL_DISPLAY_COLUMNS' => 'Отобразить столбцы',
  'LBL_DISPLAY_LOG' => 'Отобразить лог',
  'LBL_DNB_ACC_CRT' => 'Создание контрагента сервисом D&B',
  'LBL_DNB_ACC_CRT_DESC' => 'Создать контрагенты, используя сервис D&B. Требуется D&B подписка.',
  'LBL_DNB_ACT_OPER' => 'Активность и операции',
  'LBL_DNB_ACT_OPER_DESC' => 'Фиксирует описание операций бизнеса, включая марекетинговую информацию, например, количество клиентов, подробная информация об услугах и детали импорта/экспорта',
  'LBL_DNB_ADDRESS' => 'Адрес',
  'LBL_DNB_ADDRESS_TENURE_DETAILS' => 'Детали адреса пребывания',
  'LBL_DNB_ADMIN_CONFIG' => 'Настроить коннектор D&B',
  'LBL_DNB_AGENT_IND' => 'Индикатор Агента',
  'LBL_DNB_AGENT_INDICATOR' => 'Индикатор Агента',
  'LBL_DNB_AGENT_IND_DESC' => 'Когда true - это означает, что субъект выступает в качестве агента, рекламирующего товары или услуги другой организации, например, торговый агент, агент по закупкам',
  'LBL_DNB_AIRPRT_DISADV_ENT' => 'Показатель находящегося в неблагоприятных условиях предприятия концессионного аэропорта',
  'LBL_DNB_AIRPRT_DISADV_ENT_DESC' => 'Значение TRUE указывает, что бизнес работает как концессионер в одном из аэропортов страны и отвечает требованиям прав собственности, изложенных в правилах, описанных в 49 Своде федеральных нормативных актов, часть 23',
  'LBL_DNB_ALASNAT_IND' => 'Индикатор представителя коренного населения Аляски',
  'LBL_DNB_ALASNAT_IND_DESC' => 'Значение TRUE указывает, что племя - Корпорация  коренных народов Аляски',
  'LBL_DNB_AND' => 'и',
  'LBL_DNB_ANNUAL_SALES_US_DOLLAR' => 'Годовой объем продаж',
  'LBL_DNB_API_ERR' => 'Ошибка API D&B',
  'LBL_DNB_ASSESMENT' => 'Оценка D&B',
  'LBL_DNB_ASSESMENT_DESC' => 'Фиксирует глубокую и дополнительную информацию об организациях, такую как: - рекомендации по размеру предоставляемого кредита, - оценки их ликвидности, - краткая оценка их деятельности и режима работы, - прогнозы рисков ведения бизнеса с этими организациями. Прогнозные оценки, как правило, рассчитываются и определяются D&B, но такие оценки также могут быть определены третьими сторонами.',
  'LBL_DNB_ASSESMENT_TYPE_VALUE' => 'Значение типа оценки состояния',
  'LBL_DNB_ASSESMENT_VALUE' => 'Оценочная стоимость',
  'LBL_DNB_ASSESSMENT' => 'Оценка',
  'LBL_DNB_ASSIGNMENT_METHOD_TEXT' => 'Текст метода назначения',
  'LBL_DNB_ASSOCIATE' => 'Связать',
  'LBL_DNB_BACK_TO_IMPORT_ENRICH' => 'Вернуться к Импортировать и Улучшить',
  'LBL_DNB_BACK_TO_SRCH' => 'Назад к D&B результатам поиска',
  'LBL_DNB_BAL' => 'D&B Создать список',
  'LBL_DNB_BAL_ACCT_HEADER' => 'Контрагенты',
  'LBL_DNB_BAL_AFTER' => 'После',
  'LBL_DNB_BAL_ALL_SITE' => 'Все сайты',
  'LBL_DNB_BAL_AREA_CODE' => 'Код зоны',
  'LBL_DNB_BAL_ASSETS' => 'Активы',
  'LBL_DNB_BAL_BEFORE' => 'До',
  'LBL_DNB_BAL_BIO' => 'Био',
  'LBL_DNB_BAL_BOTH' => 'Оба',
  'LBL_DNB_BAL_BTW' => 'Между',
  'LBL_DNB_BAL_DISTANCE' => 'Расстояние',
  'LBL_DNB_BAL_DUNS' => 'DUNS',
  'LBL_DNB_BAL_FILING_DATE' => 'Дата регистрации заявления',
  'LBL_DNB_BAL_FINANCIAL_INFO' => 'Финансовая информация',
  'LBL_DNB_BAL_GTE' => 'Больше, чем или равный',
  'LBL_DNB_BAL_HIGH' => 'Высокий',
  'LBL_DNB_BAL_HINT' => 'Выберите критерии для создания списка',
  'LBL_DNB_BAL_IMPORT_AS' => 'Импортировать как:',
  'LBL_DNB_BAL_INDUSTRY' => 'Отрасль:',
  'LBL_DNB_BAL_INDUSTRY_WARN' => 'Переключение типов отрасли удалит ранее выбранные критерии отрасли. Вы хотите изменить тип отраслевого кода?',
  'LBL_DNB_BAL_IND_CODE_TYPE' => 'Тип отраслевого кода',
  'LBL_DNB_BAL_IND_CODE_TYPE_PRI_SEC' => 'Включить Основные/Вторичные',
  'LBL_DNB_BAL_IPO_DATA' => 'Данные IPO (первичное размещение акций)',
  'LBL_DNB_BAL_IPO_OFFER_AMT' => 'Сумма предложения IPO',
  'LBL_DNB_BAL_IPO_PRICE_RANGE' => 'Диапазон цен IPO (первичное размещение акций)',
  'LBL_DNB_BAL_JOBCD_PH' => 'Выберите функциональную обязанность',
  'LBL_DNB_BAL_KM' => 'Километр (ы)',
  'LBL_DNB_BAL_LIST' => 'Вернуться к D&B: Построить список результатов',
  'LBL_DNB_BAL_LOAD' => 'Создание списка',
  'LBL_DNB_BAL_LOW' => 'Низкий',
  'LBL_DNB_BAL_LTE' => 'Меньше, чем или равный',
  'LBL_DNB_BAL_MED' => 'Средний',
  'LBL_DNB_BAL_MILES' => 'Мили',
  'LBL_DNB_BAL_NAICS' => 'код NAICS',
  'LBL_DNB_BAL_NET_INCOME' => 'Чистый доход',
  'LBL_DNB_BAL_NET_INCOME_GROWTH' => 'Рост чистого дохода',
  'LBL_DNB_BAL_ORG_ID' => 'Идентификация организации #',
  'LBL_DNB_BAL_ORG_NAME' => 'Название компании',
  'LBL_DNB_BAL_PARAM_ANNL_SALES' => 'Годовой объем продаж',
  'LBL_DNB_BAL_PARAM_COMP' => 'Месторасположение компании',
  'LBL_DNB_BAL_PARAM_COMP_INFORMATION' => 'Информация о компании',
  'LBL_DNB_BAL_PARAM_COMP_SZ' => 'Размер компании',
  'LBL_DNB_BAL_PARAM_EMP_CNT' => 'Количество сотрудников',
  'LBL_DNB_BAL_PARAM_EMP_GRWT' => 'Общий рост сотрудников %',
  'LBL_DNB_BAL_PARAM_EMP_GRWTH' => 'Общий рост сотрудников %',
  'LBL_DNB_BAL_PARAM_JOB_FN' => 'Функциональная обязанность',
  'LBL_DNB_BAL_PARAM_KEYWORD' => 'Ключевое слово',
  'LBL_DNB_BAL_PARAM_LIMIT_ERR' => 'Достигнут максимальный лимит критериев. Пожалуйста, очистите ранее введенные параметры.',
  'LBL_DNB_BAL_PARAM_MKT_CAP' => 'Рыночная капитализация',
  'LBL_DNB_BAL_PARAM_MRKT_CAP' => 'Рыночная капитализация',
  'LBL_DNB_BAL_PARAM_NUM_EMP' => 'Количество сотрудников',
  'LBL_DNB_BAL_PARAM_PEOPLE' => 'Физические лица',
  'LBL_DNB_BAL_PARAM_STATES' => 'Состояния',
  'LBL_DNB_BAL_POSTAL_CODE' => 'Почтовый индекс',
  'LBL_DNB_BAL_PRESCREEN_SCORE' => 'Предварительная оценка D&B',
  'LBL_DNB_BAL_PRIMARY_ONLY' => 'Только основные',
  'LBL_DNB_BAL_PRIMARY_SECONDARY' => 'Основные и вторичные',
  'LBL_DNB_BAL_RADIUS_SRCH' => 'Радиус поиска',
  'LBL_DNB_BAL_RSLT' => 'D&B: Построить предварительный список',
  'LBL_DNB_BAL_SIC' => 'SIC код',
  'LBL_DNB_BAL_SIC_NAICS_EXAMPLE' => 'Пример: коды SIC:  5734 -> Магазины компьютеров и компьютерных программ , 3711 -> Автомобилестроение',
  'LBL_DNB_BAL_SINGLE_SITE' => 'Единый сайт',
  'LBL_DNB_BAL_TITLE' => 'Должность',
  'LBL_DNB_BAL_TRADING_DATE' => 'Дата проведения торгов',
  'LBL_DNB_BAL_UK_REG_NO' => 'ИНН Великобритании',
  'LBL_DNB_BAL_UK_VAT_NO' => 'Идентификационный номер плательщика НДС Великобритании',
  'LBL_DNB_BAL_YEAR_OF_FOUNDING' => 'Год основания',
  'LBL_DNB_BAL_ZIP' => 'ZIP',
  'LBL_DNB_BASIC_FIN_INF' => 'Базовая финансовая информация',
  'LBL_DNB_BI_API_ERR' => 'Ошибка при импорте записей.',
  'LBL_DNB_BI_DUP_MSG' => 'контрагенты оказались дублями и не были добавлены',
  'LBL_DNB_BI_ERR' => 'Записи не были импортированы.',
  'LBL_DNB_BI_LOADING' => 'Импорт контрагентов D&B',
  'LBL_DNB_BI_NEW_ACCT' => 'новые контрагенты.',
  'LBL_DNB_BI_NO_SLCT' => 'Нет выбранных записей.',
  'LBL_DNB_BI_REC_LIMIT' => 'Может быть выбрано максимум 20 записей для импорта',
  'LBL_DNB_BI_YOU_ADD' => 'Вы добавили',
  'LBL_DNB_BONE_ORG_IND' => 'Показатель недействующей организации',
  'LBL_DNB_BONE_ORG_IND_DESC' => 'Когда ON - это означает, что данные о компании больше не собираются и были переданы редакции Hoover&#39;s перед тем, как компания была приобретена или прекратила свою деятельность',
  'LBL_DNB_CCS' => 'Коммерческий кредитный рейтинг',
  'LBL_DNB_CCS_DESC' => 'Запись последних оценок риска, присвоенных этой организации на заданную дату и время с использованием модели скоринга, которая помогает предсказать вероятность того, что организация не будет оплачивать свои счета в сроки (с просрочкой свыше 90 дней) в течение следующих 12 месяцев',
  'LBL_DNB_CI_CITY' => 'Город',
  'LBL_DNB_CI_CTRY' => 'Страна',
  'LBL_DNB_CI_POSTAL_CD' => 'Индекс',
  'LBL_DNB_CI_SRCH' => 'D&B: поиск компании',
  'LBL_DNB_CI_SRCH_HINT' => 'Введите название компании для поиска сервисом D&B',
  'LBL_DNB_CI_STATE' => 'Область',
  'LBL_DNB_CI_STREET' => 'Улица',
  'LBL_DNB_CLEAR' => 'Очистить',
  'LBL_DNB_CM_LOADING' => 'Вызов сервиса D&B Cleanse Match',
  'LBL_DNB_CM_MATCH' => 'Соответствие',
  'LBL_DNB_CNTCT_LOADING' => 'Загружаются контакты из D&B',
  'LBL_DNB_CNTRL_OWN_DATE' => 'Дата начала управления собственностью',
  'LBL_DNB_CNTRL_OWN_DATE_DESC' => 'Дата, когда нынешние владельцы приняли на себя управление делом.',
  'LBL_DNB_CNTRL_TYP_TEXT' => 'Тип управления собственностью',
  'LBL_DNB_CNTRL_TYP_TEXT_DESC' => 'Текст, описывающий тип управляющей собственности, например, принадлежащий государству или местным органам власти, находящийся в частном владении, принадлежащий государству',
  'LBL_DNB_COMPANY_INFO_LOADING' => 'Загружается информация о компании из D&B ...',
  'LBL_DNB_COMPETITORS' => 'D&B: Конкуренты',
  'LBL_DNB_COMPETITORS_DESC' => 'Информация о конкуренте из D&B. Требуется подписка D&B.',
  'LBL_DNB_COMPETITORS_LIST' => 'Назад к списку конкурентов D&B',
  'LBL_DNB_COMPETITORS_LOADING' => 'Загружаются конкуренты из D&B ...',
  'LBL_DNB_COMPETITORS_LONG_DESC' => 'Найти конкурентов текущего контрагента для расширения Ваших перспектив. Топ конкурента назначает D&B на основе анализа компании и отрасли, в которой она работает. Оnкрытые акционерные компании часто выявляют главных конкурентов в их общедоступных файлах, которые также принимаются во внимание. Необходима подписка D&B.',
  'LBL_DNB_COMPETITORS_TOP' => 'Основной конкурент',
  'LBL_DNB_COMPINFO_LONG_DESC' => 'Наиболее эффективный способ получения основной маркетинговой информации о потенциальном клиенте, такой как название фирмы, адрес, D&B® D-U-N-S®-номер, факс, телефон и стиль торговли - система анализа деловых данных, таких как исполнительные имена и титулы, финансовые индикаторы деятельности компании, численность работников, коды импорта или экспорта, индикатор отрасли, и многое другое. Необходима подписка  D&B.',
  'LBL_DNB_COMP_INFO' => 'D&B: Информация о компании',
  'LBL_DNB_COMP_INFO_LOAD' => 'Получение D&B информации о компании',
  'LBL_DNB_COMP_SUMM' => 'Описание компании',
  'LBL_DNB_COMP_SUMM_DESC' => 'Текст, фиксирующий краткое описание или аккаунт данной организации',
  'LBL_DNB_CONFIDENCE' => 'Конфиденциальность',
  'LBL_DNB_CONFIG' => 'Обратитесь к администратору для настройки коннектора D&B',
  'LBL_DNB_CONNECTOR_ERR' => 'Не настроен коннектор D&B. Свяжитесь с администратором',
  'LBL_DNB_CONTACT' => 'D&B: Контактная информация',
  'LBL_DNB_CONTACT_BIO' => 'Био',
  'LBL_DNB_CONTACT_COMP_HIST' => 'История компенсации',
  'LBL_DNB_CONTACT_DESC' => 'Отображаются контакты из D&B. Требуется D&B подписка.',
  'LBL_DNB_CONTACT_EMAIL' => 'E-mail',
  'LBL_DNB_CONTACT_EMP_PROF' => 'Профиль сотрудника',
  'LBL_DNB_CONTACT_FNAME' => 'Имя',
  'LBL_DNB_CONTACT_FROM' => 'От',
  'LBL_DNB_CONTACT_JOBTITLE' => 'Должность',
  'LBL_DNB_CONTACT_JOB_HIST' => 'Журнал заданий',
  'LBL_DNB_CONTACT_LIST' => 'Назад к D&B списку контактов',
  'LBL_DNB_CONTACT_LNAME' => 'Фамилия',
  'LBL_DNB_CONTACT_LOADING' => 'Загружаются контактные данные для',
  'LBL_DNB_CONTACT_LONG_DESC' => 'Контакты D&B дают Вам доступ к более чем 100 млн контактов. Поиск по имени, фамилии и должности',
  'LBL_DNB_CONTACT_NAME' => 'Имя',
  'LBL_DNB_CONTACT_PHONE' => 'Телефон',
  'LBL_DNB_CONTACT_RESP' => 'Административная ответственность',
  'LBL_DNB_CONTACT_SHOW_MORE' => 'Вывести больше D&B контактов',
  'LBL_DNB_CONTACT_TO' => 'Кому',
  'LBL_DNB_CONTROL_OWNERSHIP_DATE' => 'Дата начала управления собственностью',
  'LBL_DNB_CONTROL_OWNERSHIP_TYPE_TEXT' => 'Текст типа управления собственностью',
  'LBL_DNB_CON_EMP_CNT' => 'Сводное количество сотрудников',
  'LBL_DNB_CON_EMP_CNT_DESC' => 'Фиксирует текущие данные персонала, которые включают всех сотрудников, участвующих в операциях юридического лица (включая работников в филиалах), а также всех сотрудников,  участвующих в операциях каждого прямого последователя в своем дереве (основанном на контрольном пакете акций), т.е. дочерние компании',
  'LBL_DNB_COUNTRY' => 'Страна',
  'LBL_DNB_COUNTRY_GROUP_NAME' => 'Название группы стран',
  'LBL_DNB_COUNTRY_OFFICIAL_NAME' => 'Официальное название страны',
  'LBL_DNB_CURRENCY_ISO_ALPHA_CODE' => 'Двухбуквенный код валюты ISO',
  'LBL_DNB_CURRENT_PRINCIPAL_FULL_NAME' => 'Полное имя текущего руководителя',
  'LBL_DNB_CURRENT_PRINCIPAL_IDENTIFICATION_NUMBER' => 'Текущий основной идентификационный номер',
  'LBL_DNB_CURRENT_PRINCIPAL_JOB_TITLE' => 'Текущая основная должность',
  'LBL_DNB_DATA_ERR' => 'Данные D&B не доступны',
  'LBL_DNB_DATA_OVERRIDE_MULTIPLE_FIELDS' => 'Вы хотите переписать {{fields}} и другие поле(я) ?',
  'LBL_DNB_DATA_OVERRIDE_SINGLE_FIELD' => 'Вы хотите переписать {{fieldName}} на {{value}} ?',
  'LBL_DNB_DATA_OVERRIDE_TWO_FIELDS' => 'Вы хотите переписать {{fields}} ?',
  'LBL_DNB_DISAB_IND' => 'Блокированный индикатор',
  'LBL_DNB_DISAB_IND_DESC' => 'Значение TRUE указывает, что эта организация сертифицирована как бизнес, который, более, чем на 50 % принадлежит, управляется и ежедневно контролируется одним или несколькими лицами, которые находятся в состоянии, не позволяющем им выполнять все обычные физические или психические функции',
  'LBL_DNB_DISAB_VET_ENT' => 'Показатель предприятия инвалидов войны',
  'LBL_DNB_DISAB_VET_ENT_DESC' => 'Значение TRUE указывает, что бизнес признается штатом Калифорния таким, где, по крайней мере, 51% предприятий принадлежит, ежедневно управляется и контролируется  ветеранами войны, под которыми подразумеваются ветераны военной службы, военно-морской службы, или военно-воздушных сил США, с инвалидностью не менее 10 % или более, связанной с прохождением военной службы, и которые являются жителями штата Калифорния. Главный офис может не быть филиалом или дочерней компанией иностранной корпорации, иностранной фирмы или другой иностранной компании.',
  'LBL_DNB_DISADV_ENT' => 'Показатель предприятия, находящегося в неблагоприятных условиях',
  'LBL_DNB_DISADV_ENT_DESC' => 'Значение TRUE указывает, что бизнес сертифицирован федеральным, государственным или местным органом власти, как соответствующий всем установленным государственным стандартам, но находящийся в собственности женщин, представителей меньшинств, инвалидов или людей, находящихся в невыгодном положении в результате экономических недостатков в области образования, занятости, места жительства или места нахождения предприятия, или социального неблагополучия и отсутствия бизнес-обучения',
  'LBL_DNB_DISADV_VET_ENT' => 'Показатель предприятия ветеранов с ограниченными возможностями',
  'LBL_DNB_DISADV_VET_ENT_DESC' => 'Значение TRUE указывает, что бизнес -  это небольшой концерн, принадлежащий и контролируемый ветеранами, где не менее 51% является собственностью ветеранов, контролируется и управляется ими',
  'LBL_DNB_DNB_CODE_VALUE' => 'Кодовое значение DNB',
  'LBL_DNB_DUNS' => 'DUNS',
  'LBL_DNB_DUNSSELF_IND' => 'Индикатор самостоятельного запроса DUNS',
  'LBL_DNB_DUNSSELF_IND_DESC' => 'Значение TRUE указывает, что D-U-N-S-номер для этого субъекта был создан по просьбе субъекта',
  'LBL_DNB_DUPLICATE' => 'Дублировать',
  'LBL_DNB_EIGHTA_CRT' => 'Индикатор сертификации 8 (а)',
  'LBL_DNB_EIGHTA_CRT_DESC' => 'Значение TRUE указывает, что данная организация сертифицирована Управлением по делам малого бизнесапо США как лауреат программы развития бизнеса 8(а); программа развития бизнеса создана для того, чтобы помочь малым и находящимся в неблагоприятном положении предприятиям конкурировать в условиях американской экономики и иметь доступ к рынку федеральных закупок',
  'LBL_DNB_EMPLOYEE_QUANTITY_GROWTH' => 'Количественный рост сотрудников',
  'LBL_DNB_EMPTY_PARAM' => 'В D&B передан пустой параметр при проверке API на наличие дублей',
  'LBL_DNB_EMP_DET' => 'Подробные данные о сотрудниках, занимающих высокую должность',
  'LBL_DNB_EMP_DET_DESC' => 'Подробная информация о Руководителях (например, Президенте, Вице-президенте, Директорах) и Менеджерах, ответственных за бизнес-стратегии, принятия решений и ежедневное проведение операций субъектов. Данная информация включает имена, адреса и идентификационные номера руководителей. В то время как руководитель - это, как правило, человек, в некоторых странах считается юридически приемлемым для зарегистрированной компании действовать в качестве руководителя другого бизнеса. Это исключает акционеров и подобных владельцев, которые не несут ответственности за управления организацией, но включает собственников и партнеров, которые, будучи владельцами, также, обычно, являются руководителями, управляющими бизнесом.',
  'LBL_DNB_EMP_INF' => 'Информация о сотруднике',
  'LBL_DNB_EMP_INF_DESC' => 'Информация о сотрудниках организации, как например, количество сотрудников и данные о руководстве',
  'LBL_DNB_ERROR_CURL_CONNECTION_FAIL' => 'Не удалось подключиться к хосту или прокси-серверу. Пожалуйста, проверьте настройки прокси-сервера.',
  'LBL_DNB_ERROR_CURL_NETWORK_FAIL' => 'Не удалось получить данные сети.',
  'LBL_DNB_ERROR_CURL_RESOLVE_HOST' => 'Невозможно подключить хост. Данный удаленный хост не был подключен.',
  'LBL_DNB_ERROR_CURL_RESOLVE_PROXY' => 'Невозможно подключить прокси-сервер. Указанный прокси-сервер не может быть подключен. Пожалуйста, проверьте настройки прокси-сервера.',
  'LBL_DNB_ETHN' => 'Этническая принадлежность владельца',
  'LBL_DNB_ETHNICITY_TYPE_TEXT' => 'Текст типа этнической принадлежности',
  'LBL_DNB_ETHN_DESC' => 'Однозначно определяет этническую классификацию, которая применяется к этой организации на основе расовой, национальной, родовой или культурной группы, которая описывает большую часть своей собственности, например, житель Азии, испанец, афроамериканец',
  'LBL_DNB_EXPORT_DETAILS_INDICATOR' => 'Детали экспорта',
  'LBL_DNB_EXP_IND' => 'Индикатор экспорта',
  'LBL_DNB_EXP_IND_DESC' => 'Когда true - это означает, что субъект компании экспортирует количество товаров в другие страны',
  'LBL_DNB_FACSIMILE_NUMBER' => 'FacsimileNumber Номер',
  'LBL_DNB_FAMILY_TREE' => 'D&B: Диаграмма компаний',
  'LBL_DNB_FAMILY_TREE_BACK' => 'Вернуться к диаграмме компаний D&B',
  'LBL_DNB_FAMILY_TREE_DESC' => 'Диаграмма компаний из D&B. Требуется D&B подписка.',
  'LBL_DNB_FAMILY_TREE_LOADING' => 'Загружается диаграмма компаний из D&B',
  'LBL_DNB_FAMILY_TREE_MEMBER_ROLE' => 'Текст роли элемента семейного дерева компаний',
  'LBL_DNB_FAMILY_TREE_MEMBER_ROLE_TEXT' => 'Текст роли элемента семейного дерева компаний',
  'LBL_DNB_FAX' => 'Факс',
  'LBL_DNB_FAX_DESC' => 'Номер факса организации',
  'LBL_DNB_FEM_ENT' => 'Показатель женского предприятия',
  'LBL_DNB_FEM_ENT_DESC' => 'Значение TRUE указывает, что бизнес сертифицирован федеральным, государственным или местным органом власти, как соответствующий всем государственным стандартам и требованиям',
  'LBL_DNB_FEM_IND' => 'Индикатор принадлежности женщинам',
  'LBL_DNB_FEM_IND_DESC' => 'Значение TRUE указывает, что эта организация сертифицирована как бизнес, который более, чем на 50 % принадлежит управляется и ежедневно контролируется одной или более женщинами',
  'LBL_DNB_FILLING_ORGANISATION_NAME' => 'Заполняется название организации',
  'LBL_DNB_FINANCIAL' => 'D&B: Финансовая информация',
  'LBL_DNB_FINANCIALS' => 'Финансы',
  'LBL_DNB_FINANCIAL_DESC' => 'Финансовая информация из D&B. Требуется D&B подписка.',
  'LBL_DNB_FINANCIAL_DESCRIPTION' => 'Финансовое описание',
  'LBL_DNB_FINANCIAL_LOADING' => 'Загружается финансовая информация из D&B',
  'LBL_DNB_FINANCIAL_LONG_DESC' => 'Оценить финансовую устойчивость компании с данными, такими как объемы продаж, собственный капитал, активы и пассивы. Необходима подписка D&B.',
  'LBL_DNB_FINANCIAL_PERIOD' => 'Финансовый период',
  'LBL_DNB_FINANCIAL_RATIO' => 'Финансовый коэффициент',
  'LBL_DNB_FIN_COMP_TYPE' => 'Тип компании',
  'LBL_DNB_FIN_STCK_EXCH' => 'Фондовая биржа',
  'LBL_DNB_FIN_STCK_SYM' => 'Символ акции',
  'LBL_DNB_FIN_STMT' => 'Отчеты о годовом доходе',
  'LBL_DNB_FOUNDATION_YEAR' => 'Год основания',
  'LBL_DNB_FRAN_TYP_TEXT' => 'Вид франшизы',
  'LBL_DNB_FRAN_TYP_TEXT_DESC' => 'Текст, который обозначает, определяются ли права франшизы компанией или непосредственно  франчайзи; т.е. франчайзи, франчайзером',
  'LBL_DNB_FROM' => 'от',
  'LBL_DNB_GEOGRAPHICAL_NAME' => 'Информация о точной локации',
  'LBL_DNB_HIGH_CONF' => 'Высокий уровень конфиденциальности',
  'LBL_DNB_HISTORY_RATING_TEXT' => 'Рейтинг истории',
  'LBL_DNB_HIST_RAT' => 'Рейтинг истории',
  'LBL_DNB_HIST_RAT_DESC' => 'Текст, который определяет, есть ли у D&B какая-нибудь информация, которая может неблагоприятно отразиться на этой организации, например, полная, неполная информация, данные администрирования, бизнес-информация.',
  'LBL_DNB_HUB_CRT' => 'Индикатор сертификации Hub Zone',
  'LBL_DNB_HUB_CRT_DESC' => 'Значение TRUE указывает, что данная организация сертифицирована Управлением по делам малого бизнеса США как участник программы HUB Zone. Малый бизнес должен соответствовать всем следующим критериям для участия в программе HUB Zone: он должен быть расположен в &#39;исторически слаборазвитых с точки зрения экономики регионах&#39;. Малый бизнес должен принадлежать и находиться под контролем одного или нескольких граждан США. Более 35% работников должны находиться в HUBZone. HUBZone (исторически слаборазвитые с точки зрения экономики регионы) - область, которая находится в одной или нескольких зонах из следующего списка: а) Переписной район (как определено в разделе 42(d)(5)(C)(i)(I) Налогового кодекса США 1986 года). б) Округ, не имеющий статуса города (как определено в разделе 143(k)(2)(B) Налогового кодекса США 1986 года) со средним семейным доходом, составляющим менее 80% среднего семейного дохода штата или с уровнем безработицы, составляющей менее 80 % среднего уровня в масштабах штата, на основании последних данных Министерства труда США. в) Земли в пределах границ федерально признанных индейских резерваций.',
  'LBL_DNB_IMPORT' => 'Импорт',
  'LBL_DNB_IMPORT_DETAILS_' => 'Детали импорта',
  'LBL_DNB_IMPORT_DETAILS_INDICATOR' => 'Показатель деталей импорта',
  'LBL_DNB_IMP_IND' => 'Индикатор импорта',
  'LBL_DNB_IMP_IND_DESC' => 'Когда true - это означает, что субъект компании импортирует количество товаров из других стран',
  'LBL_DNB_IN' => 'в',
  'LBL_DNB_INCORPORATION_YEAR' => 'Год слияния',
  'LBL_DNB_INDUSTRY_CODE' => 'Отраслевой код',
  'LBL_DNB_INDUSTRY_CODE_DESCRIPTION' => 'Описание отраслевого кода',
  'LBL_DNB_INDUSTRY_CODE_DISPLAY_SEQUENCE' => 'Последовательность отображения отраслевого кода',
  'LBL_DNB_INDUSTRY_INFO' => 'D&B: Информация об отрасли',
  'LBL_DNB_INDUSTRY_INFO_DESC' => 'Отраслевая информация из D&B. Требуется D&B подписка.',
  'LBL_DNB_INDUSTRY_INFO_LONG_DESC' => 'Будьте в курсе основных тенденций и возможностей в рамках 900 отраслевых сегментов. Каждый профиль промышленности содержит анализ, статистические данные и прогнозы, которые помогут вам привлечь потенциальных клиентов, консультировать клиентов, и сделать глубже отношения с клиентами.',
  'LBL_DNB_IND_CD' => 'Отраслевые коды',
  'LBL_DNB_IND_CD_DESC' => 'Буквенно-цифровое значение, определяющее предпринимательскую деятельность, на основе схемы, определенной типом Текст. К примеру, 1611 представляет магистраль и улицу строительной индустрии в системе США SIC (Standard Industrial Classification - стандартная промышленная классификация). Разъяснение: Это обычно внешние коды, созданные внешним авторитетным органом, таким как Административно-бюджетное управление США (АБУ), но D&B создала расширения для более точного определения деятельности, как и в случае с SIC 2+2 (последние 4 цифры 8-значный SIC)',
  'LBL_DNB_IND_CD_HED' => 'Информация о промышленности',
  'LBL_DNB_IND_CD_HED_DESC' => 'Фиксирует деловые операции, в которых организация активно работает с использованием стандартизированных схем кодирования, таких как Европейский NACE и Стандартная промышленная классификация США (SIC). Примеры деловых операций: печать ценных бумаг, юридические услуги, аптека, производитель металлоконструкций',
  'LBL_DNB_IND_EMP_CNT' => 'Количество сотрудников',
  'LBL_DNB_IND_EMP_CNT_DESC' => 'Фиксирует текущие данные кадрового администрирования в отдельную компанию. Если организация классифицирована D&B как бизнес',
  'LBL_DNB_IND_INF_LOAD' => 'Загружается информация об отрасли из D&B',
  'LBL_DNB_INF_INF_OVERVIEW' => 'Просмотр',
  'LBL_DNB_INQ_CNT' => 'Общее количество запросов',
  'LBL_DNB_INQ_CNT_DESC' => 'Количество уникальных абонентских запросов, зарегистрированных относительно субъекта за последние 12 месяцев',
  'LBL_DNB_INTERNATIONAL_DIALLING_CODE' => 'Международный код набора',
  'LBL_DNB_INT_DIALLING_CODE' => 'Код внутреннего набора номера',
  'LBL_DNB_INVALID_MODULE_NAME' => 'В D&B передано недопустимое имя модуля при проверке API на наличие дублей',
  'LBL_DNB_IPO_DATE' => 'Дата IPO (первичного размещения акций)',
  'LBL_DNB_JOB_TITLE_TEXT' => 'Должность',
  'LBL_DNB_KEYWORD_SEARCH_HINT' => 'Нажмите здесь для поиска компании только по названию',
  'LBL_DNB_LAST_UPDATE' => 'Последнее обновление',
  'LBL_DNB_LAST_UPDATE_DATE' => 'Последнее обновление',
  'LBL_DNB_LAST_UPD_DATE' => 'Последняя обновленная дата',
  'LBL_DNB_LAST_UPD_DATE_DESC' => 'Дата, когда запись субъекта была последний раз обновлена в системе D&B',
  'LBL_DNB_LAT' => 'Широта',
  'LBL_DNB_LATITUDE_MEASUREMENT' => 'Широта',
  'LBL_DNB_LAT_DESC' => 'Координата по широте',
  'LBL_DNB_LINE_OF_BUSINESS' => 'Направление бизнеса',
  'LBL_DNB_LINE_OF_BUSINESS_DESCRIPTION' => 'Описание направления бизнеса',
  'LBL_DNB_LITE_COMPANY_INFO' => 'D&B: информация о компании - Основная',
  'LBL_DNB_LITE_COMPANY_INFO_DESC' => 'Базовая информация о компании из D&B. Требуется D&B подписка.',
  'LBL_DNB_LITE_COMPANY_INFO_LOADING' => 'Загружается упрощенная информация о компании D&B...',
  'LBL_DNB_LOB' => 'Направление бизнеса',
  'LBL_DNB_LOB_DESC' => 'Фиксирует текстовое описание операций бизнеса',
  'LBL_DNB_LOC' => 'Местоположение',
  'LBL_DNB_LOCATION' => 'Местоположение',
  'LBL_DNB_LOCATION_TYPE' => 'Тип местоположения',
  'LBL_DNB_LOCATION_TYPE_DESC' => 'Текст, описывающий роль субъекта как элемента структурированного семейного дерева компаний, например, роль филиала, отдела, главного офиса, дочерней компании, всемирной руководящей организации, внутренней руководящей организации.',
  'LBL_DNB_LOC_DESC' => 'Фиксирует детали адреса для субъекта. Адрес - это обозначение места, где может быть расположен субъект и где с ним можно связаться.',
  'LBL_DNB_LONG' => 'Долгота',
  'LBL_DNB_LONGITUDE_MEASUREMENT' => 'Долгота',
  'LBL_DNB_LONG_DESC' => 'Координата по долготе',
  'LBL_DNB_LOW_CONF' => 'Низкий уровень конфиденциальности',
  'LBL_DNB_LS_IND' => 'Показатель избытка рабочей силы',
  'LBL_DNB_LS_IND_DESC' => 'Значение TRUE означает, что данная организация сертифицирована как бизнес, который работает в районе с избытком рабочей силы. Район с избытком рабочей силы - географическая область, идентифицируемая Министерством труда как область с высокой концентрацией безработицы или неполной занятости или районом с избытком рабочей силы',
  'LBL_DNB_MAIL_CITY' => 'Город для почтовых отправлений',
  'LBL_DNB_MAIL_CTRY_CD' => 'Почтовый код страны',
  'LBL_DNB_MAIL_STATE_ABBR' => 'Сокр. территории для рассылки',
  'LBL_DNB_MAIL_STREET' => 'Линия улицы для почтовых отправлений',
  'LBL_DNB_MAIL_ZIP' => 'Почтовый индекс',
  'LBL_DNB_MARKETABILITY_INDICATOR' => 'Показатель конкурентоспособности',
  'LBL_DNB_MARKET_IND' => 'Индикатор конкурентоспособности',
  'LBL_DNB_MARKET_IND_DESC' => 'Когда true - это означает, что запись удовлетворяет правила конкурентоспособности D&B',
  'LBL_DNB_MATCH_GRADE' => 'Шкала соответствия',
  'LBL_DNB_MEASUREMENT_RELIABILITY_TEXT' => 'Текст надежности измерения',
  'LBL_DNB_MEASUREMENT_UNIT_TEXT' => 'Единица измерения текста',
  'LBL_DNB_MED_CONF' => 'Средний уровень конфиденциальности',
  'LBL_DNB_METROPOLITAN_STAT_CODE' => 'Код столичного статистического района переписи населения США',
  'LBL_DNB_MILLION' => 'M',
  'LBL_DNB_MINORITY_OWNER_INDICATOR' => 'Принадлежность представителям меньшинства',
  'LBL_DNB_MIN_COLL' => 'Индикатор колледжа меньшинств',
  'LBL_DNB_MIN_COLL_DESC' => 'Значение TRUE указывает, что эта организация является колледжем или университетом, где большинство студентов — представители этнического меньшинства. Например, если максимальный процент студентов в колледже или университете - представители чернокожих рас, это был бы "Колледж меньшинств" с представителями чернокожих рас',
  'LBL_DNB_MIN_ENT' => 'Показатель предприятия меньшинств',
  'LBL_DNB_MIN_ENT_DESC' => 'Значение TRUE указывает, что бизнес сертифицирован федеральным, государственным или местным органом власти путем рассмотрения заявления и/или посещения как соответствующий всем установленным государственным стандартам',
  'LBL_DNB_MIN_IND' => 'Индикатор принадлежности представителям меньшинства',
  'LBL_DNB_MIN_IND_DESC' => 'Значение TRUE указывает, что эта организация сертифицирована как бизнес, который более, чем на 50 % принадлежит управляется и ежедневно контролируется одним или несколькими членами группы представителей меньшинств',
  'LBL_DNB_MORE_SRCH_RES' => 'Показать больше D&B результатов поиска',
  'LBL_DNB_NAICS' => 'NAICS',
  'LBL_DNB_NAME' => 'Имя',
  'LBL_DNB_NEWS' => 'Новости',
  'LBL_DNB_NEWS_AND_MEDIA' => 'D&B: Новости',
  'LBL_DNB_NEWS_AND_MEDIA_DESC' => 'Осуществляет выборку новостей из D&B Services. Необходима подписка D&B.',
  'LBL_DNB_NEWS_AND_MEDIA_LOADING' => 'Загрузка новостей из D&B',
  'LBL_DNB_NEWS_AND_MEDIA_LONG_DESC' => 'Получите полное представление о Ваших клиентах, используя Новости и СМИ D&B! Используйте правовой процесс DUNS, чтобы удостовериться в получении данных из достоверных источников и социальных справочников. Необходима подписка D&B.',
  'LBL_DNB_NEWS_AND_MEDIA_MORE' => 'Подробнее',
  'LBL_DNB_NEWS_FACEBOOK' => 'Facebook',
  'LBL_DNB_NEWS_TWITTER' => 'Twitter',
  'LBL_DNB_NEWS_WIKI' => 'Википедия',
  'LBL_DNB_NEWS_YOUTUBE' => 'YouTube',
  'LBL_DNB_NONMARK_REAS_TXT' => 'Текст причины непригодности к продаже',
  'LBL_DNB_NONMARK_REAS_TXT_DESC' => 'Текст, указывающий причину, почему данные субъекта не считаются востребованными по меркам D&B',
  'LBL_DNB_NON_MARKETABILITY_INDICATOR' => 'Показатель отсутствия конкурентоспособности',
  'LBL_DNB_NOT_CONFIGURED' => 'Коннектор D&B не настроен. Пожалуйста, настройте коннектор.',
  'LBL_DNB_NO_DATA' => 'Нет доступных данных',
  'LBL_DNB_NO_DUNS' => 'Нет идентифицирующего DUNS',
  'LBL_DNB_NO_DUNS_FIELD' => 'Внимание: Поле DUNS в настоящее время не входит в макет режима просмотра записей. Обратитесь к администратору, чтобы добавить его.',
  'LBL_DNB_NO_INDUSTRY' => 'Нет связанного промышленного кода',
  'LBL_DNB_NO_SIC_FIELD' => 'Внимание: Поле SIC в настоящее время не входит в макет просмотра записи. Обратитесь к администратору, чтобы добавить его.',
  'LBL_DNB_OPERATING_STATUS_TEXT' => 'Текст рабочего состояния',
  'LBL_DNB_OPERL_STA_TEXT' => 'Рабочее состояние',
  'LBL_DNB_OPERL_STA_TEXT_DESC' => 'Текст, описывающий  функциональное состояние/торговый статус данной организации, например, активный, банкрот, неактивный',
  'LBL_DNB_OPER_TEXT' => 'Текст действий',
  'LBL_DNB_OPER_TEXT_DESC' => 'Текст, описывающий подробную информацию о бизнес-операции',
  'LBL_DNB_ORGANISATION_IDENTIFICATION_NUMBER' => 'Идентификационный номер организации',
  'LBL_DNB_ORGANISATION_IDENTIFICATION_START_DATE' => 'Идентификационная дата начала деятельности организации',
  'LBL_DNB_ORGANIZATION_DISPLAY_SEQUENCE' => 'Последовательность отображения организаций',
  'LBL_DNB_ORGANIZATION_FILLING_NAME' => 'Заполнение названия организации',
  'LBL_DNB_ORGANIZATION_IDENTIFICATION_NUMBER' => 'Идентификационный номер организации',
  'LBL_DNB_ORGANIZATION_NAME' => 'Название организации',
  'LBL_DNB_ORGANIZATION_START_DATE' => 'Дата основания организации',
  'LBL_DNB_ORGS_STRT_YEAR' => 'Год основания организации',
  'LBL_DNB_ORGS_STRT_YEAR_DESC' => 'Год начала операций, осуществляемых организацией',
  'LBL_DNB_ORG_DET' => 'Детали организации',
  'LBL_DNB_ORG_DET_DESC' => 'Фиксирование основной информации об организации, которая может изменяться с течением времени',
  'LBL_DNB_ORG_ID' => 'Идентификационный номер организации',
  'LBL_DNB_ORG_ID_DESC' => 'Номер, назначенный внешним органом или D&B, который либо уникально идентифицирует, либо помогает идентифицировать организацию. Организация выдачи может быть Регистрационным органом, Правительственным ведомством или Коммерческим предприятием, например, номера Коммерческой палаты, номера НДС и т.д.',
  'LBL_DNB_ORG_NAME' => 'Название организации',
  'LBL_DNB_ORG_NAME_DESC' => 'Фиксирует разные названия организации, под которыми она известна',
  'LBL_DNB_OTHER' => 'Другой',
  'LBL_DNB_OTHER_FIELDS' => 'другие поле(я)',
  'LBL_DNB_OUTOFDATE' => 'Устаревший',
  'LBL_DNB_OUTOFDATE_MSG' => 'Информация о компании устарела',
  'LBL_DNB_OVERRIDE_SUCCESS' => 'D&B данные импортированы успешно',
  'LBL_DNB_OVERVIEW' => 'Просмотр',
  'LBL_DNB_OWNERSHIP_TYPE' => 'Тип владения',
  'LBL_DNB_PAGESZ' => 'Размер страницы',
  'LBL_DNB_PHONE' => 'Телефон',
  'LBL_DNB_PHONE_DESC' => 'Номер телефона организации',
  'LBL_DNB_PREMISES_AREA_MEASUREMENT' => 'Измерение площади помещений',
  'LBL_DNB_PREMIUM' => 'Premium',
  'LBL_DNB_PREMIUM_COMPANY_INFO' => 'D&B: Информация о компании - Премиум',
  'LBL_DNB_PREMIUM_COMPANY_INFO_DESC' => 'Информация о премиум компании D&B. Необходима подписка D&B.',
  'LBL_DNB_PREMIUM_COMPANY_INFO_LOADING' => 'Загрузка информации о премиум компании  из D&B ...',
  'LBL_DNB_PRIMARY' => 'Основной',
  'LBL_DNB_PRIMARY_ADDRESS_POSTAL_CODE' => 'Основной адрес Индекс',
  'LBL_DNB_PRIMARY_TOWN' => 'Основной город',
  'LBL_DNB_PRIMARY_TOWN_NAME' => 'Основное название города',
  'LBL_DNB_PRIM_CEN_CD' => 'Цензовый код',
  'LBL_DNB_PRIM_CEN_CD_DESC' => 'Географический регион с относительно высокой плотностью населения в центре и тесными экономическими связями по всей территории.',
  'LBL_DNB_PRIM_CITY' => 'Основной город',
  'LBL_DNB_PRIM_CITY_DESC' => 'Название города, установленного почтовым ведомством для доставки почты',
  'LBL_DNB_PRIM_COUNTY_NAME' => 'Название округа',
  'LBL_DNB_PRIM_COUNTY_NAME_DESC' => 'Официальное название округа, например, Мичиган',
  'LBL_DNB_PRIM_CTRY_CD' => 'Основной код страны',
  'LBL_DNB_PRIM_CTRY_CD_DESC' => 'Двухбуквенный код страны, базирующийся на коде ISO 3166-1, опубликованном Международной организацией по стандартизации (ISO), определяющий страну по данному адресу.',
  'LBL_DNB_PRIM_CTRY_GRP' => 'Группа стран',
  'LBL_DNB_PRIM_CTRY_GRP_DESC' => 'Показатель группы стран, например, Северная Америка',
  'LBL_DNB_PRIM_NAME' => 'Название',
  'LBL_DNB_PRIM_NAME_DESC' => 'Текст, фиксирующий название данной организации',
  'LBL_DNB_PRIM_STATE' => 'Основная территория',
  'LBL_DNB_PRIM_STATE_ABBR' => 'Сокр. основной территории',
  'LBL_DNB_PRIM_STATE_ABBR_DESC' => 'Сокращенное название локально управляемой области, которая является частью центрально управляемой страны',
  'LBL_DNB_PRIM_STATE_DESC' => 'Название локально управляемой области, которая является частью центрально управляемой страны',
  'LBL_DNB_PRIM_STREET' => 'Основная линия улицы',
  'LBL_DNB_PRIM_STREET_DESC' => 'Текст, который фиксирует компоненты адреса так, как они будут представлены ​​на адресном ярлыке.',
  'LBL_DNB_PRIM_ZIP' => 'Основной почтовый индекс',
  'LBL_DNB_PRIM_ZIP_DESC' => 'Идентификатор, используемый местным почтовым ведомством страны для определения конкретного географического расположения',
  'LBL_DNB_PRINCIPAL_IDENTIFICATION_NUMBER' => 'Основной идентификационный номер',
  'LBL_DNB_RATING' => 'Рейтинг',
  'LBL_DNB_REC_MARK_ANALYSIS' => 'Недавний анализ рынка',
  'LBL_DNB_REGISTERED_ADDRESS_INDICATOR' => 'Показатель зарегистрированного адреса',
  'LBL_DNB_REGISTRATION_ISSUER_NAME' => 'Регистрационное имя эмитента',
  'LBL_DNB_REGISTRATION_LOCATION_POSTAL_CODE' => 'Регистрационный почтовый индекс местоположения',
  'LBL_DNB_REG_DET_HED' => 'Зарегистрированные данные',
  'LBL_DNB_REG_DET_HED_DESC' => 'Фиксирует конституционный статус субъекта, как определено в соответствии с законами страны, например, Компания с ограниченной ответственностью, Товарищество, Кооперативное общество и Структура фондовых акций, занятыми бизнесом в зависимости от организационно-правовой формы и правил регистрации. Владельцы акции или акций являются владельцами бизнеса.',
  'LBL_DNB_RELIABILITY_TEXT' => 'Текст вероятности',
  'LBL_DNB_RESIDENTIAL_ADDRESS_INDICATOR' => 'Показатель адреса места проживания',
  'LBL_DNB_RFR' => 'Обновить',
  'LBL_DNB_RFR_HINT' => 'Обновить сейчас',
  'LBL_DNB_RFR_LOADING' => 'Выполняется проверка обновлений D&B данных',
  'LBL_DNB_RISK_CLASS' => 'Класс риска',
  'LBL_DNB_SALES' => 'Продажи',
  'LBL_DNB_SALES_REVENUE' => 'Прибыль от продаж',
  'LBL_DNB_SALES_REVENUE_AMOUNT' => 'Объем сбыта',
  'LBL_DNB_SEARCH_LOADING' => 'Поиск D&B ...',
  'LBL_DNB_SELF_REQUEST_INDICATOR' => 'Показатель собственного запроса',
  'LBL_DNB_SENIOR_PRINCIPAL' => 'Старший член организации',
  'LBL_DNB_SHOW_LESS' => 'Показать меньше',
  'LBL_DNB_SHOW_MORE' => 'Показать больше',
  'LBL_DNB_SIC' => 'SIC код',
  'LBL_DNB_SLCT_CTRY' => 'Выберите страну',
  'LBL_DNB_SLCT_STATE' => 'Выберите штат',
  'LBL_DNB_SMALL_BUSINESS_INDICATOR' => 'Малый Бизнес',
  'LBL_DNB_SMBDISADV_IND' => 'Малый бизнес, находящийся в неблагоприятных условиях',
  'LBL_DNB_SMBDISADV_IND_DESC' => 'Значение TRUE указывает, что эта организация сертифицирована как бизнес, который более, чем на 50 % принадлежит управляется и ежедневно контролируется социально и экономически неблагополучными лицами',
  'LBL_DNB_SMB_CERT' => 'Показатель сертифицированного малого бизнеса',
  'LBL_DNB_SMB_CERT_DESC' => 'Значение TRUE указывает, что бизнес маленький, сертифицируется федеральным, государственным или местным органом власти, или организацией, соответствующей всем установленным государственным стандартам.',
  'LBL_DNB_SMB_IND' => 'Индикатор малого бизнеса',
  'LBL_DNB_SMB_IND_DESC' => 'Значение TRUE указывает, что эта организация сертифицирована как малый бизнес. Малый бизнес — это организация, которая находится в частной собственности, с небольшим количеством сотрудников и относительно низким объем продаж. Малые предприятия обычно являются частной собственностью корпораций, компаний или коммерческих предприятий. Юридическое определение малого бизнеса варьируется в зависимости от страны и отрасли',
  'LBL_DNB_SOCIAL' => 'Социальные сети',
  'LBL_DNB_SOCIO_IND' => 'Социально-экономическая идентификация',
  'LBL_DNB_SOCIO_INDICATOR' => 'Социально-экономический показатель',
  'LBL_DNB_SOCIO_IND_DESC' => 'Фиксирование информации о категоризации субъектов по социально-экономическим или статистических группам',
  'LBL_DNB_SRCH' => 'Поиск',
  'LBL_DNB_SRCH_LOAD' => 'Поиск D&B',
  'LBL_DNB_SRCH_RES' => 'D&B: Результаты поиска',
  'LBL_DNB_STAND_ALONE_ORGANIZATION_INDICATOR' => 'Индикатор самостоятельной организации',
  'LBL_DNB_STATE' => 'Область / Район / Регион',
  'LBL_DNB_STD_COMPANY_INFO' => 'D&B: Информация о компании - Стандартная',
  'LBL_DNB_STD_COMPANY_INFO_DESC' => 'Стандартная информация о компании из D&B. Требуется D&B подписка.',
  'LBL_DNB_STD_COMPANY_INFO_LOADING' => 'Загружается стандартная информация о компании из D&B ...',
  'LBL_DNB_STOCK_EXCHANGE_COUNTRY_ISO_ALPHA_CODE' => 'Альфа-код ISO фондовой биржи страны',
  'LBL_DNB_STOCK_EXCHANGE_ISO_CODE' => 'ISO-код фондовой биржи',
  'LBL_DNB_STOCK_EXCHANGE_NAME' => 'Название фондовой биржи',
  'LBL_DNB_STOCK_EXCHANGE_TICKER_NAME' => 'Название биржевого символа акции',
  'LBL_DNB_STREET_ADDRESSLINE' => 'Улица адрес',
  'LBL_DNB_STREET_ADDRESS_LINE_TEXT' => 'Текст адреса улицы',
  'LBL_DNB_SUBAGENT_INDICATOR' => 'Индикатор субагента',
  'LBL_DNB_SUBJ_HEADER' => 'Заголовок темы',
  'LBL_DNB_SUBJ_HEADER_DESC' => 'Записи информации высокого уровня о субъекте, такой как основной язык субъекта и первичная валюта, которой торгует субъект. Если субъект является организацией, эти записи также могут включать такие детали, как DUNS-номер',
  'LBL_DNB_SUMMARY' => 'Резюме',
  'LBL_DNB_SVC_DISAB_VET' => 'Показатель инвалида военной службы',
  'LBL_DNB_SVC_DISAB_VET_DESC' => 'Значение TRUE указывает, что бизнес, по крайней мере, на 51 % принадлежит одному или более ветеранам c инвалидностью, связанной со службой в ВС. Термин "связанный со службой" касается инвалидности или смерти; такая инвалидность, причиненная и усугубленная при выполнении обязанностей при прохождении обязательной военной службы, военно-морской службы и службы в военно-воздушных силах',
  'LBL_DNB_SVC_ERR' => 'Ошибка сервиса D&B',
  'LBL_DNB_TELECOMM' => 'Средства связи',
  'LBL_DNB_TELECOMMUNICATION_NUMBER' => 'Телекоммуникационный Номер',
  'LBL_DNB_TELECOMM_DESC' => 'Записи информации о различных режимах адресов средств связи, используемых субъектом для внешних контактных целей. Режимы связи включают телефон, факс, адрес электронной почты, веб-адрес',
  'LBL_DNB_TERRITORY_ABBREVATIVE_NAME' => 'Сокращенное название территории',
  'LBL_DNB_TERRITORY_ABBREVIATED_NAME' => 'Сокращенное название территории',
  'LBL_DNB_TERRITORY_OFFICIAL_NAME' => 'Официальное название территории',
  'LBL_DNB_TF_DUNS' => 'Переданный DUNS номер',
  'LBL_DNB_TOTAL_EMPLOYEE_QUANTITY' => 'Общее количество сотрудников',
  'LBL_DNB_TOTAL_ENQUIERY_COUNT' => 'Общее количество запросов',
  'LBL_DNB_TOTAL_INQUIRY_COUNT' => 'Общее количество запросов',
  'LBL_DNB_TPA' => 'Оценка третьего лица',
  'LBL_DNB_TPA_DESC' => 'Оценки/мнения, присвоенные этому субъекту организацией, не являющейся частью всемирной сети D&B (WWN)',
  'LBL_DNB_TRADE_STYLE_NAME' => 'Название направления коммерческой деятельности',
  'LBL_DNB_TRANSFERRED_FROM_DUNS_NUMBER' => 'Перенесено из DUNS номера',
  'LBL_DNB_TRD_NAME' => 'Название фирмы',
  'LBL_DNB_TRD_NAME_DESC' => 'Фиксирование названия, под которым торгует организация в коммерческих целях',
  'LBL_DNB_TRNS_DUNS' => 'Переданный DUNS-номер',
  'LBL_DNB_TRNS_DUNS_DESC' => 'Это D-U-N-S-номер субъекта, который удален из базы данных хоста',
  'LBL_DNB_UNDELIVERABLE_INDICATOR' => 'Индикатор невозможности доставки',
  'LBL_DNB_UNKNOWN_ERROR' => 'Неизвестная ошибка. Пожалуйста, проверьте логи для получения более детальной информации.',
  'LBL_DNB_UNREACHABLE_INDICATOR' => 'Недостижимый индикатор',
  'LBL_DNB_UPLOAD' => 'Загрузить',
  'LBL_DNB_UPTODATE' => 'Обновленный',
  'LBL_DNB_UPTODATE_MSG' => 'Информация о компании обновлена',
  'LBL_DNB_URL' => 'URL',
  'LBL_DNB_USPAT_SCR' => 'Причина риска несоответствия Закону США о патриотизме',
  'LBL_DNB_USPAT_SCR_DESC' => 'Индекс риска несоответствия закону предназначен для обеспечения организаций, соблюдающих Закон США о патриотизме, дополнительным средством в определении риска несоответствия закону, основываясь на оценке компаний-партнёров. Индекс - числовое значение, представляющее совокупность проанализированных признаков риска, установленных посредством алгоритма, основанного на правилах собственности. Значения находятся в диапазоне от 0 до ~ 255. Высокие значения индекса означают более высокий уровень предполагаемого риска.',
  'LBL_DNB_VET_ENT' => 'Показатель предприятия ветеранов',
  'LBL_DNB_VET_ENT_DESC' => 'Значение TRUE указывает, что бизнес попадает под Закон малого бизнеса (PL 85-536) Управления по делам малого бизнеса США, который с внесенными в него поправками гласит: Компании малого бизнеса, принадлежащие и управляемые ветеранами не менее, чем на 51 % принадлежат одному или более ветеранам, и, если речь идет о государственной собственности - не менее 51% акций принадлежит одному или нескольким ветеранам',
  'LBL_DNB_VET_IND' => 'Показатель ветеранов',
  'LBL_DNB_VET_IND_DESC' => 'Значение TRUE указывает, что эта организация сертифицирована как бизнес, который более, чем на 50 % принадлежит, управляется и ежедневно контролируется одним или более ветеранами. К ветерану относится человек, который состоял на обязательной военной, военно-морской или авиационной службе и который был уволен в запас при условиях отличных от увольнения с лишением прав и привилегий',
  'LBL_DNB_VIET_VET' => 'Показатель ветерана войны во Вьетнаме',
  'LBL_DNB_VIET_VET_DESC' => 'Значение TRUE указывает, что бизнес, по крайней мере, на  51 % принадлежит одному или нескольким ветеранам Вьетнамской войны, которые служили в периоде между 1/1/59 и 5/7/75, и которые контролируют и управляют бизнесом. В данном случае, контроль означает осуществление полномочий  для принятия политических решений, а управление означает активное участие в повседневном управлении бизнеса',
  'LBL_DNB_VIEW_ACCT' => 'Посмотреть Контрагентов',
  'LBL_DNB_WEBPAGE' => 'Web-страница',
  'LBL_DNB_WEBPAGE_ADDRESS' => 'Адрес веб-страницы',
  'LBL_DNB_WEBPAGE_DESC' => 'Web-страница организации',
  'LBL_DNB_WITH' => 'с',
  'LBL_DOCUMENTS' => 'Документы',
  'LBL_DONE_BUTTON_KEY' => 'X',
  'LBL_DONE_BUTTON_LABEL' => 'Готово',
  'LBL_DONE_BUTTON_TITLE' => 'Готово [Alt+X]',
  'LBL_DROPDOWN_LIST_ALL' => 'Все',
  'LBL_DROP_HERE' => '[Переместить сюда]',
  'LBL_DST_NEEDS_FIXIN' => 'Приложению требуется коррекция зимнего/летнего времени. Используйте ссылку <a href="index.php?module=Administration&action=DstFix">Восстановление</a> в консоли Администратора чтобы скорректировать зимнее/летнее время.',
  'LBL_DUPECHECK_FILTER_DEFAULT' => 'Все дубликаты',
  'LBL_DUPLICATES_FOUND' => '{{duplicateCount}} найдены дубликаты.',
  'LBL_DUPLICATE_BUTTON' => 'Дублировать',
  'LBL_DUPLICATE_BUTTON_KEY' => 'U',
  'LBL_DUPLICATE_BUTTON_LABEL' => 'Дублировать',
  'LBL_DUPLICATE_BUTTON_TITLE' => 'Дублировать [Alt+U]',
  'LBL_DUP_MERGE' => 'Найти дубликаты',
  'LBL_DURATION_DAY' => 'день',
  'LBL_DURATION_DAYS' => 'дней',
  'LBL_DURATION_HOUR' => 'час',
  'LBL_DURATION_HOURS' => 'часов',
  'LBL_DURATION_MINUTE' => 'минута',
  'LBL_DURATION_MINUTES' => 'минут',
  'LBL_DURATION_SECONDS' => 'секунды',
  'LBL_EDIT' => 'Редактировать {{{this}}}',
  'LBL_EDITINLINE' => 'Правка',
  'LBL_EDITVIEW' => 'Просмотр - Редактирование',
  'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Редактировать как Новый',
  'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Редактировать как Новый',
  'LBL_EDIT_BUTTON' => 'Правка',
  'LBL_EDIT_BUTTON_KEY' => 'E',
  'LBL_EDIT_BUTTON_LABEL' => 'Правка',
  'LBL_EDIT_BUTTON_TITLE' => 'Править [Alt+E]',
  'LBL_EDIT_INLINE' => 'Правка',
  'LBL_EDIT_RELATED' => 'Редактировать связанное {{{this}}}',
  'LBL_EMAIL' => 'E-mail',
  'LBL_EMAILS' => 'E-mail',
  'LBL_EMAILS_SUBPANEL_TITLE' => 'E-mail',
  'LBL_EMAIL_ACCOUNTS_EDIT' => 'Правка',
  'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Использовать настройки Gmail™',
  'LBL_EMAIL_ACCOUNTS_NAME' => 'Имя',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Свойства сервера исходящей почты',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Введите информацию о сервере SMTP для исходящей электронной почты в Учетных записях почты.',
  'LBL_EMAIL_ACCOUNTS_SENDTYPE' => 'Отправка почты с помощью',
  'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ' => 'Сервер SMTP требует аутентификацию?',
  'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'По умолчанию',
  'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'пароль SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD' => 'Необходим пароль SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP порт',
  'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP сервер',
  'LBL_EMAIL_ACCOUNTS_SMTPSSL' => 'Использовать SSL при подключении',
  'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Логин SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD' => 'Необходим логин SMTP',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Установите Учетные записи почты для просмотра входящих электронных писем из Ваших почтовых ящиков.',
  'LBL_EMAIL_ACCOUNTS_TITLE' => 'Управление учетными почтовыми записями',
  'LBL_EMAIL_ACTION_SET_INVALID' => 'Недействительный',
  'LBL_EMAIL_ACTION_SET_OPT_IN' => 'Подписка на рассылку',
  'LBL_EMAIL_ACTION_SET_OPT_OUT' => 'Отказ от рассылки',
  'LBL_EMAIL_ACTION_SET_PRIMARY' => 'Основной',
  'LBL_EMAIL_ACTION_SET_VALID' => 'Действительный',
  'LBL_EMAIL_ADD' => 'Добавить E-mail',
  'LBL_EMAIL_ADDRESSES' => 'E-mail',
  'LBL_EMAIL_ADDRESSES_TITLE' => 'Адреса E-mail',
  'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Готово',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Скрытая копия:',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Копия:',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST' => 'Новый список',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Кому:',
  'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Кому/Копия/Скрытая',
  'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Очистить',
  'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Адрес E-mail',
  'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT' => 'В данный момент поддерживается только редактирование Контактов.',
  'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Фильтр',
  'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME' => 'Имя/Имя Контрагента',
  'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME' => 'Фамилия',
  'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS' => 'Мои контакты',
  'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS' => 'Мои списки рассылки',
  'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Имя',
  'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Адреса не найдены',
  'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Сохранить и добавить в адресную книгу',
  'LBL_EMAIL_ADDRESS_BOOK_SEARCH' => 'Поиск',
  'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Выбрать получателей сообщения',
  'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Адресная книга',
  'LBL_EMAIL_ADDRESS_PRIMARY' => 'Адрес E-mail',
  'LBL_EMAIL_ADDR_DISPLAY_MSG' => 'Отображение адреса(-ов) писем {0} - {1} из {2}',
  'LBL_EMAIL_ARCHIVED' => 'Email архивирован',
  'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Импортировать в Sugar',
  'LBL_EMAIL_ASSIGNED_TO_USER' => 'Ответственный (-ая)',
  'LBL_EMAIL_ASSIGNMENT' => 'Назначение ответственного',
  'LBL_EMAIL_ASSIGN_TO' => 'Назначить ответственного',
  'LBL_EMAIL_ATTACHMENT' => 'Вложение E-mail',
  'LBL_EMAIL_ATTACHMENTS' => 'Из локальной системы',
  'LBL_EMAIL_ATTACHMENTS2' => 'Из документов Sugar',
  'LBL_EMAIL_ATTACHMENTS3' => 'Приложения шаблона',
  'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Документ',
  'LBL_EMAIL_ATTACHMENTS_EMBEDED' => 'Встроенный',
  'LBL_EMAIL_ATTACHMENTS_FILE' => 'Файл',
  'LBL_EMAIL_ATTACHMENT_UPLOAD_FAILED' => 'Не удалось выгрузить вложение',
  'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Вложение',
  'LBL_EMAIL_BCC' => 'Скрытая копия:',
  'LBL_EMAIL_BUTTON' => 'E-mail',
  'LBL_EMAIL_CANCEL' => 'Отмена',
  'LBL_EMAIL_CC' => 'Копия:',
  'LBL_EMAIL_CHARSET' => 'Кодировка исходящего письма',
  'LBL_EMAIL_CHECK' => 'Проверить почту',
  'LBL_EMAIL_CHECKING_DESC' => 'Пожалуйста, подождите...<br /><br />Так как это первое получение почты для учетной записи, это может занять некоторое время.',
  'LBL_EMAIL_CHECKING_NEW' => 'Проверка наличия новой почты',
  'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Очистка файлов кэша',
  'LBL_EMAIL_CLOSE' => 'Закрыть',
  'LBL_EMAIL_COFFEE_BREAK' => 'Получить новую почту.<br /><br />Это может занять много времени для больших учетных записей.',
  'LBL_EMAIL_COMMON' => 'Общее',
  'LBL_EMAIL_COMPOSE' => 'E-mail',
  'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Пожалуйста, введите получателя (-лей) этого сообщения.',
  'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Пожалуйста, введите правильный электронный адрес в поля Кому, Копия и Скрытая копия',
  'LBL_EMAIL_COMPOSE_LINK_TO' => 'Связанный с',
  'LBL_EMAIL_COMPOSE_NO_BODY' => 'Сообщение не содержит текста. Продолжить отправку?',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Поле "Тема" не заполнено. Продолжить отправку?',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(нет темы)',
  'LBL_EMAIL_COMPOSE_OPTIONS' => 'Опции',
  'LBL_EMAIL_COMPOSE_READ' => 'Читать и писать сообщения',
  'LBL_EMAIL_COMPOSE_SEND_FROM' => 'Отправить из учётной записи почты',
  'LBL_EMAIL_CONFIRM_CLOSE' => 'Отменить создание письма?',
  'LBL_EMAIL_CONFIRM_DELETE' => 'Удалить эти записи из Вашей адресной книги?',
  'LBL_EMAIL_CONFIRM_DELETE_LIST' => 'Удалить эти записи из Ваших списков рассылки?',
  'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Вы уверены, что хотите удалить эту подпись?',
  'LBL_EMAIL_CREATE_NEW' => '--Создать поверх сохранения--',
  'LBL_EMAIL_DATE_RECEIVED' => 'Дата получения',
  'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Дата отправки отправителем',
  'LBL_EMAIL_DATE_TODAY' => 'Сегодня',
  'LBL_EMAIL_DATE_YESTERDAY' => 'Вчера',
  'LBL_EMAIL_DD_TEXT' => 'письмо(-ма) отмечены.',
  'LBL_EMAIL_DEFAULTS' => 'По умолчанию',
  'LBL_EMAIL_DELETE' => 'Удалить',
  'LBL_EMAIL_DELETE_CONFIRM' => 'Удалить выбранные сообщения?',
  'LBL_EMAIL_DELETE_ERROR_DESC' => 'У Вас нет доступа к данной странице. Свяжитесь с администратором SugarCRM для получения соответствующих прав.',
  'LBL_EMAIL_DELETE_SUCCESS' => 'Письмо успешно удалено.',
  'LBL_EMAIL_DELETING_MESSAGE' => 'Удаление сообщения',
  'LBL_EMAIL_DELETING_OUTBOUND' => 'Удаление сервера исходящей почты',
  'LBL_EMAIL_DELIMITER' => '::;::',
  'LBL_EMAIL_DETAILS' => 'Подробности',
  'LBL_EMAIL_DISPLAY_MSG' => 'Отображение писем {0} - {1} из {2}',
  'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Готово',
  'LBL_EMAIL_DOWNLOAD_STATUS' => 'Загружено [[count]] e-mail-сообщений из [[total]]',
  'LBL_EMAIL_EDIT_CONTACT' => 'Редактировать Контакт',
  'LBL_EMAIL_EDIT_CONTACT_WARN' => 'При работе с контактами будет использован только основной адрес.',
  'LBL_EMAIL_EDIT_MAILING_LIST' => 'Редактировать список рассылки',
  'LBL_EMAIL_EMPTYING_TRASH' => 'Очистка корзины',
  'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Нет адресов писем для отображения.',
  'LBL_EMAIL_EMPTY_MSG' => 'Нет писем для отображения.',
  'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Имя папки должно быть уникальным и не пустым. Пожалуйста, попробуйте ещё раз.',
  'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Невозможно определить папку назначения из контекста. Попробуйте снова.',
  'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Проверьте, пожалуйста, Ваши настройки.',
  'LBL_EMAIL_ERROR_CONTACT_NAME' => 'Проверьте, введена ли фамилия.',
  'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Невозможно удалить папку. В папке/дочерних папках содержатся письма либо за ними закреплён электронный почтовый ящик.',
  'LBL_EMAIL_ERROR_DESC' => 'Обнаружены ошибки.',
  'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Имя папки Sugar должно быть уникальным.',
  'LBL_EMAIL_ERROR_EMPTY' => 'Задайте, пожалуйста, критерии поиска.',
  'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Требуется адрес в поле "От". Введите, пожалуйста, правильный адрес.',
  'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Произошла ошибка',
  'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Сообщение было удалено с сервера либо перемещено в другую папку',
  'LBL_EMAIL_ERROR_LIST_NAME' => 'Список рассылки с таким названием уже существует',
  'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Ошибка соединения с сервером. Свяжитесь, пожалуйста, с администратором SugarCRM',
  'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Сообщение удалено с сервера',
  'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Требуется контролируемая папка.',
  'LBL_EMAIL_ERROR_MOVE' => 'Перемещение писем между серверами и/или учетными записями в данный момент не поддерживается.',
  'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Ошибка перемещения',
  'LBL_EMAIL_ERROR_NAME' => 'Введите имя.',
  'LBL_EMAIL_ERROR_NO_FILE' => 'Пожалуйста, предоставьте файл.',
  'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'Переименование папок IMAP в данный момент не поддерживается.',
  'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Не задан сервер исходящей почты.',
  'LBL_EMAIL_ERROR_PASSWORD' => 'Требуется пароль.',
  'LBL_EMAIL_ERROR_PORT' => 'Требуется порт почтового сервера.',
  'LBL_EMAIL_ERROR_PREPEND' => 'Ошибка:',
  'LBL_EMAIL_ERROR_PROTOCOL' => 'Требуется протокол почтового сервера.',
  'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Возможно, учетная запись почты не была сохранена.',
  'LBL_EMAIL_ERROR_SERVER' => 'Требуется адрес почтового сервера.',
  'LBL_EMAIL_ERROR_TIMEOUT' => 'Произошла ошибка во время связи с почтовым сервером.',
  'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Требуется папка корзины.',
  'LBL_EMAIL_ERROR_USER' => 'Требуется логин.',
  'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Эта информация недоступна',
  'LBL_EMAIL_FOLDERS_ACTIONS' => 'Переместить в',
  'LBL_EMAIL_FOLDERS_ADD' => 'Добавить',
  'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Добавить новую папку',
  'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Сохранить',
  'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Добавить эту папку в',
  'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Эту папку нельзя изменить',
  'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Вы уверены, что хотите удалить эту папку?\\n Этот процесс необратим.\\n Удаление папки приведёт к удалению всех вложенных папок.',
  'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Новое имя папки',
  'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Пожалуйста, выберите папку, а потом выполните это действие.',
  'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Переименовать папку',
  'LBL_EMAIL_FOLDERS_TITLE' => 'Управление папками',
  'LBL_EMAIL_FOLDERS_USING_GROUP_USER' => 'Использовать группы',
  'LBL_EMAIL_FOLDERS_USING_TEAM' => 'Назначить ответственную команду',
  'LBL_EMAIL_FORWARD' => 'Переслать',
  'LBL_EMAIL_FOUND' => 'Найденные',
  'LBL_EMAIL_FROM' => 'От',
  'LBL_EMAIL_GROUP' => 'групповая',
  'LBL_EMAIL_HOME_FOLDER' => 'Главная',
  'LBL_EMAIL_HTML_RTF' => 'Отправить в формате HTML',
  'LBL_EMAIL_IE_DELETE' => 'Удаление учетной почтовой записи',
  'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Вы точно хотите удалить эту учетную почтовую запись?',
  'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Удаление подписи',
  'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Удалено успешно.',
  'LBL_EMAIL_IE_SAVE' => 'Сохранение информации по учетной почтовой записи',
  'LBL_EMAIL_IMPORTING_EMAIL' => 'Импорт E-mail',
  'LBL_EMAIL_IMPORT_EMAIL' => 'Импортировать в Sugar',
  'LBL_EMAIL_IMPORT_FAIL' => 'Не удалось произвести импорт, т.к. сообщение либо уже импортировано, либо удалено с сервера',
  'LBL_EMAIL_IMPORT_SETTINGS' => 'Импорт настроек',
  'LBL_EMAIL_IMPORT_SUCCESS' => 'Импорт произведён успешно',
  'LBL_EMAIL_INVALID' => 'Недействующий адрес',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Сервер исходящей почты, выбранный для используемой учетной записи, недействителен. Проверьте настройки или выберите другой почтовый сервер для этой учётной записи.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Сервер исходящей почты не настроен для отправки сообщений. Пожалуйста, настройте или выберите сервер исходящей почты для используемой учётной записи в меню Настройки >> Учётная запись.',
  'LBL_EMAIL_INV_TITLE' => 'недействительный email address',
  'LBL_EMAIL_LINK_RECORD' => 'Нажмите здесь',
  'LBL_EMAIL_LIST_RENAME_DESC ' => 'Введите новое имя для списка рассылки',
  'LBL_EMAIL_LIST_RENAME_TITLE' => 'Переименовать список рассылки',
  'LBL_EMAIL_LOADING' => 'Загрузка...',
  'LBL_EMAIL_MARK' => 'Отметить',
  'LBL_EMAIL_MARK_FLAGGED' => 'Как отмеченное флажком',
  'LBL_EMAIL_MARK_READ' => 'Как прочитанное',
  'LBL_EMAIL_MARK_UNFLAGGED' => 'Как не отмеченное флажком',
  'LBL_EMAIL_MARK_UNREAD' => 'Как непрочитанное',
  'LBL_EMAIL_MENU_ADD_FOLDER' => 'Создать папку',
  'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Очистить кэш-файлы',
  'LBL_EMAIL_MENU_COMPOSE' => 'Составить письмо для',
  'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Удалить папку',
  'LBL_EMAIL_MENU_EDIT' => 'Правка',
  'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Очистить Корзину',
  'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Создать папку (удаленно или в Sugar)',
  'LBL_EMAIL_MENU_HELP_ARCHIVE' => 'Архивировать это сообщение (-я) в SugarCRM',
  'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST' => 'Отправить E-mail-сообщение по выбранным спискам рассылки',
  'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE' => 'Отправить E-mail-сообщение этому контакту',
  'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE' => 'Удалить контакт',
  'LBL_EMAIL_MENU_HELP_DELETE' => 'Удалить эти email(ы)',
  'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Удалить папку (удаленно или в Sugar)',
  'LBL_EMAIL_MENU_HELP_EDIT_CONTACT' => 'Редактировать контакт',
  'LBL_EMAIL_MENU_HELP_EDIT_LIST' => 'Редактировать список рассылки',
  'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Очищает все папки корзины для Ваших учетных записей почты',
  'LBL_EMAIL_MENU_HELP_MARK_FLAGGED' => 'Отметить это(-и) письмо(-а) флажком',
  'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Отметить это(-и) письмо(-а) как прочитанные',
  'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Снять отметку флажка с этих писем',
  'LBL_EMAIL_MENU_HELP_MARK_UNREAD' => 'Отметить это(-и) письмо(-а) как непрочитанные',
  'LBL_EMAIL_MENU_HELP_REMOVE_LIST' => 'Удаляет списки рассылки',
  'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Переименовать папку (удалённую или в Sugar)',
  'LBL_EMAIL_MENU_HELP_REPLY' => 'Ответить на эти письма',
  'LBL_EMAIL_MENU_HELP_REPLY_ALL' => 'Ответить всем получателям этого(-их) письма(-ем)',
  'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Пожалуйста, сделайте выбор перед тем, как выполнить эту операцию.',
  'LBL_EMAIL_MENU_REMOVE' => 'Удалить',
  'LBL_EMAIL_MENU_RENAME' => 'Переименовать',
  'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Переименовать папку',
  'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Переименование папки',
  'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Синхронизировать',
  'LBL_EMAIL_MESSAGES' => 'сообщения',
  'LBL_EMAIL_MESSAGE_NO' => 'Сообщение №',
  'LBL_EMAIL_ML_ADDRESSES_1' => 'Адреса из списка Отмеченные',
  'LBL_EMAIL_ML_ADDRESSES_2' => 'Адреса из списка Доступные',
  'LBL_EMAIL_ML_NAME' => 'Имя списка',
  'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b>для множественного выделения<br />(Пользователи Mac - <b>CMD-Click</b>)',
  'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Множественные',
  'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Пустой',
  'LBL_EMAIL_NO' => 'Нет',
  'LBL_EMAIL_NOT_SENT' => 'Система не в состоянии выполнить ваш запрос. Пожалуйста, свяжитесь с администратором SugarCRM.',
  'LBL_EMAIL_OK' => 'OK',
  'LBL_EMAIL_ONE_MOMENT' => 'Пожалуйста, подождите...',
  'LBL_EMAIL_OPEN_ALL' => 'Открыть несколько сообщений',
  'LBL_EMAIL_OPTIONS' => 'Опции',
  'LBL_EMAIL_OPT_OUT' => 'Отказ от получения писем',
  'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Отказались от рассылки и недействительны',
  'LBL_EMAIL_OPT_TITLE' => 'email-адреса, которые отказались от последующей рассылки',
  'LBL_EMAIL_PAGE_AFTER' => 'из (0)',
  'LBL_EMAIL_PAGE_BEFORE' => 'Страница',
  'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
  'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Отправить по E-mail как PDF',
  'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Отправить по E-mail как PDF [Alt+M]',
  'LBL_EMAIL_PERFORMING_TASK' => 'Выполнение задания',
  'LBL_EMAIL_POP3_REMOVE_MESSAGE' => 'Протокол почтового сервера POP3 не будет поддерживаться в следующей версии. Будет поддерживаться только протокол IMAP.',
  'LBL_EMAIL_PRIMARY' => 'Основной',
  'LBL_EMAIL_PRIM_TITLE' => 'основной email-адрес',
  'LBL_EMAIL_PRINT' => 'Печать',
  'LBL_EMAIL_QC_BUGS' => 'Ошибка',
  'LBL_EMAIL_QC_CASES' => 'Обращение',
  'LBL_EMAIL_QC_CONTACTS' => 'Контакт',
  'LBL_EMAIL_QC_LEADS' => 'Предварительный контакт',
  'LBL_EMAIL_QC_OPPORTUNITIES' => 'Сделка',
  'LBL_EMAIL_QC_TASKS' => 'Задача',
  'LBL_EMAIL_QUICK_COMPOSE' => 'Быстрое составление письма',
  'LBL_EMAIL_QUICK_CREATE' => 'Быстрое создание',
  'LBL_EMAIL_REBUILDING_FOLDERS' => 'Перестраивание папок',
  'LBL_EMAIL_RECORD' => 'Запись электронной почты',
  'LBL_EMAIL_RECV' => 'зап',
  'LBL_EMAIL_RELATE_EMAIL' => 'Соотнести с электронной почтой',
  'LBL_EMAIL_RELATE_TO' => 'Относится к',
  'LBL_EMAIL_REMOVE' => 'Удалить',
  'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Внимание! Учётная запись исходящей почты, которую Вы пытаетесь удалить, связана с существующей учётной записью входящей почты. Вы уверены, что хотите продолжить?',
  'LBL_EMAIL_REPLY' => 'Ответить',
  'LBL_EMAIL_REPLY_ALL' => 'Ответить всем',
  'LBL_EMAIL_REPLY_TO' => 'Действующий адрес',
  'LBL_EMAIL_REPORTS_TITLE' => 'Отчеты',
  'LBL_EMAIL_RETRIEVING_LIST' => 'Получение списка писем',
  'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Получение сообщения',
  'LBL_EMAIL_RETRIEVING_RECORD' => 'Получение записей электронной почты',
  'LBL_EMAIL_RETURN_TO_VIEW' => 'Вернуться к предыдущему модулю?',
  'LBL_EMAIL_REVERT' => 'Вернуться',
  'LBL_EMAIL_RULES_TITLE' => 'Управление правилами',
  'LBL_EMAIL_SAVE' => 'Сохранить',
  'LBL_EMAIL_SAVE_AND_REPLY' => 'Сохранить и ответить',
  'LBL_EMAIL_SAVE_DRAFT' => 'Сохранить черновик',
  'LBL_EMAIL_SEARCHING' => 'Производится поиск',
  'LBL_EMAIL_SEARCH_ADVANCED' => 'Расширенный поиск',
  'LBL_EMAIL_SEARCH_DATE_FROM' => 'Дата от',
  'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Дата до',
  'LBL_EMAIL_SEARCH_FULL_TEXT' => 'Текст письма',
  'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Нет результатов, удовлетворяющих критерии Вашего поиска.',
  'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Результаты поиска',
  'LBL_EMAIL_SEARCH_TITLE' => 'простой поиск',
  'LBL_EMAIL_SEARCH__FROM_ACCOUNTS' => 'Искать в учетной записи почты',
  'LBL_EMAIL_SELECT' => 'Выбрать',
  'LBL_EMAIL_SELECT_ONE_RECORD' => 'Пожалуйста, выберите только одну запись электронной почты',
  'LBL_EMAIL_SEND' => 'Отправить',
  'LBL_EMAIL_SENDING_EMAIL' => 'Отправка сообщения',
  'LBL_EMAIL_SENT' => 'Отправлено',
  'LBL_EMAIL_SETTINGS' => 'Настройки',
  'LBL_EMAIL_SETTINGS_2_ROWS' => '2 строки',
  'LBL_EMAIL_SETTINGS_3_COLS' => '3 столбца',
  'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Учетные записи электронной почты',
  'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Очистить форму',
  'LBL_EMAIL_SETTINGS_AUTO_IMPORT' => 'Импортировать почту через просмотр',
  'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Проверить почту',
  'LBL_EMAIL_SETTINGS_COMPOSE_INLINE' => 'Использовать панель просмотра',
  'LBL_EMAIL_SETTINGS_COMPOSE_POPUP' => 'Использовать всплывающее окно',
  'LBL_EMAIL_SETTINGS_DISPLAY_NUM' => 'Количество писем на странице',
  'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT' => 'Редактировать учётную запись электронной почты',
  'LBL_EMAIL_SETTINGS_FOLDERS' => 'Папки',
  'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'От (адрес)',
  'LBL_EMAIL_SETTINGS_FROM_NAME' => 'От (имя)',
  'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Электронный адрес для тестового уведомления:',
  'LBL_EMAIL_SETTINGS_FULL_SCREEN' => 'Во весь экран',
  'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Синхронизировать все учетные записи',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC' => 'Это действие синхронизирует учётные записи электронной почты и их содержимое.',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Произвести полную синхронизацию?\\nВ случае с большими почтовыми ящиками это может занять несколько минут.',
  'LBL_EMAIL_SETTINGS_GENERAL' => 'Основные настройки',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS' => 'Доступные папки групп',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Создать папки групп',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Изменить папку группы',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Сохранение папок групп',
  'LBL_EMAIL_SETTINGS_LAYOUT' => 'Стиль макета',
  'LBL_EMAIL_SETTINGS_MUST_RELOAD' => 'Перезагрузите страницу, чтобы применить новые настройки.',
  'LBL_EMAIL_SETTINGS_NAME' => 'Имя учетной записи',
  'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Ответить на адрес',
  'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Выберите количество писем на странице во Входящих. Для активирования этих настроек может понадобиться обновление страницы.',
  'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Поиск учетной записи',
  'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP' => 'Поиск папки группы',
  'LBL_EMAIL_SETTINGS_RULES' => 'Правила',
  'LBL_EMAIL_SETTINGS_SAVED' => 'Настройки успешно сохранены.\\n\\nПерезагрузите страницу для применения новых настроек.',
  'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Отправлять письма только в формате Обычного текста',
  'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS' => 'Активно',
  'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Писем на странице',
  'LBL_EMAIL_SETTINGS_TAB_POS' => 'Расположить вкладки внизу',
  'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Визуальные настройки',
  'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Пользовательские настройки',
  'LBL_EMAIL_SETTINGS_TOGGLE_ADV' => 'Расширенные',
  'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR' => 'На электронный адрес',
  'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Доступные пользовательские папки',
  'LBL_EMAIL_SHOW_READ' => 'Показать все',
  'LBL_EMAIL_SHOW_UNREAD_ONLY' => 'Показать только непрочитанные',
  'LBL_EMAIL_SIGNATURES' => 'Подписи',
  'LBL_EMAIL_SIGNATURE_CREATE' => 'Создать подпись',
  'LBL_EMAIL_SIGNATURE_NAME' => 'Название подписи',
  'LBL_EMAIL_SIGNATURE_TEXT' => 'Текст подписи',
  'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Использовать шифрование (SSL/TLS)?',
  'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ Папки Sugar ]',
  'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Удаленные папки ]',
  'LBL_EMAIL_SUBJECT' => 'Тема',
  'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Нажмите клавишу Shift или Ctrl для выделения нескольких папок.',
  'LBL_EMAIL_SUCCESS' => 'Успешно',
  'LBL_EMAIL_SUGAR_FOLDER' => 'Папка Sugar',
  'LBL_EMAIL_TEAMS' => 'Назначить командам',
  'LBL_EMAIL_TEMPLATES' => 'Шаблоны',
  'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Шаблон сообщения не заполнен',
  'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Письмо было отправлено на заданный электронный адрес, используя заданные настройки исходящего соединения. Проверьте, пожалуйста, получено ли письмо и убедитесь в правильности настроек.',
  'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Отправить тестовое E-mail-сообщение',
  'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Тестовое сообщение отправлено',
  'LBL_EMAIL_TEXT_FIRST' => 'Первая страница',
  'LBL_EMAIL_TEXT_LAST' => 'Последняя страница',
  'LBL_EMAIL_TEXT_NEXT' => 'Следующая страница',
  'LBL_EMAIL_TEXT_PREV' => 'Предыдущая страница',
  'LBL_EMAIL_TEXT_REFRESH' => 'Обновить',
  'LBL_EMAIL_TITLE' => 'E-mail',
  'LBL_EMAIL_TO' => 'Кому',
  'LBL_EMAIL_TOGGLE_LIST' => 'Включить список',
  'LBL_EMAIL_UPPER_CASE_GROUP' => 'Группа',
  'LBL_EMAIL_VIEW' => 'Просмотр',
  'LBL_EMAIL_VIEWS' => 'Просмотры',
  'LBL_EMAIL_VIEW_HEADERS' => 'Отобразить заголовки',
  'LBL_EMAIL_VIEW_PRINTABLE' => 'Версия для печати',
  'LBL_EMAIL_VIEW_RAW' => 'Показать оригинал письма',
  'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Просмотр отношений',
  'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Эта функция недоступна при использовании POP3.',
  'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Внимание: Отсутствуют логин и пароль для учетной записи исходящей почты.',
  'LBL_EMAIL_YES' => 'Да',
  'LBL_EMPLOYEES' => 'Сотрудники',
  'LBL_EMPTY' => 'Пустой',
  'LBL_EMPTY_REQUIRED_VCARD' => 'У vCard нет обязательных полей для заполнения для данного модуля.',
  'LBL_EMPTY_VCARD' => 'Пожалуйста, выберите файл vCard',
  'LBL_ENABLE_JAVASCRIPT' => 'Javascript необходим для SugarCRM. Пожалуйста, включите javascript, чтобы продолжить использование SugarCRM.',
  'LBL_ENTER_DATE' => 'Ввести дату',
  'LBL_ENTER_EMAIL' => 'Укажите email приглашённого...',
  'LBL_ENTER_VALID_YEAR' => 'Пожалуйста, введите правильный год.',
  'LBL_ENTER_YEAR' => 'Введите год',
  'LBL_ERROR' => 'Ошибка',
  'LBL_ERROR_CANNOT_FIND_TWITTER' => 'Не удалось найти ленту пользователя Twitter:',
  'LBL_ERROR_RETRIEVING_FREE_BUSY' => 'Произошла ошибка при получении расписания.',
  'LBL_ERR_LOADING_RSS_FEED' => 'Не удалось загрузить RSS-канал',
  'LBL_EXISTING' => 'Существующий',
  'LBL_EXPAND_ALL' => 'Развернуть все',
  'LBL_EXPORT' => 'Экспорт',
  'LBL_EXPORT_ALL' => 'Экспортировать все',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Ответственный (-ая)',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Ответственный пользователь',
  'LBL_EXPORT_FULL_NAME' => 'Полное имя',
  'LBL_EXPORT_REPORTS_TO_ID' => 'Руководитель',
  'LBL_EXPORT_TEAM_ID' => 'ID команды',
  'LBL_EXPORT_TEAM_NAME' => 'Команды',
  'LBL_EXPORT_TEAM_SET_ID' => 'Установка ID команды',
  'LBL_EXTERNAL_LOGIN_BUTTON_TITLE' => 'Единый вход в систему',
  'LBL_EXTERNAL_SECURITY_LEVEL' => 'Безопасность',
  'LBL_FAILED' => 'Неудача!',
  'LBL_FASTCGI_LOGGING' => 'Для оптимального использования IIS/FastCGI SAPI, установите параметр fastcgi.logging в файле php.ini равным 0.',
  'LBL_FAVORITE' => 'Избранное',
  'LBL_FAVORITES' => 'Избранное',
  'LBL_FAVORITES_FILTER' => 'Избранное',
  'LBL_FEEDBACK' => 'Обратная связь',
  'LBL_FILES_OPENED' => 'Файлов задействовано',
  'LBL_FILE_BUTTON' => 'Файл',
  'LBL_FILE_DELETED' => 'Файл был успешно удален',
  'LBL_FILE_DELETE_CONFIRM' => 'Вы уверены, что хотите удалить это поле? Этого нельзя будет исправить.',
  'LBL_FILE_SIZE_UNITS_B' => 'байт',
  'LBL_FILE_SIZE_UNITS_KB' => 'кб',
  'LBL_FILE_SIZE_UNITS_MB' => 'Мб',
  'LBL_FILTER' => 'Фильтр',
  'LBL_FILTERED' => 'Отфильтровано',
  'LBL_FILTER_ALL_RECORDS' => 'Все записи',
  'LBL_FILTER_BETWEEN_FROM' => 'От',
  'LBL_FILTER_BETWEEN_TO' => 'Кому',
  'LBL_FILTER_CREATE_NEW' => 'Создать фильтр',
  'LBL_FILTER_DATEBETWEEN_FROM' => 'Дата начала',
  'LBL_FILTER_DATEBETWEEN_TO' => 'Дата окончания',
  'LBL_FILTER_MENU_BY' => 'Фильтровать меню по',
  'LBL_FILTER_SELECT_FIELD' => 'Выберите поле...',
  'LBL_FILTER_SELECT_OPERATOR' => 'Выберите оператор...',
  'LBL_FINISH_BUTTON_LABEL' => 'Готово',
  'LBL_FINISH_BUTTON_TITLE' => 'Готово',
  'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'первый день следующего месяца',
  'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
  'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
  'LBL_FIXED_IN_RELEASE' => 'Исправлено в версии',
  'LBL_FOLLOW' => 'Следить за записью',
  'LBL_FOLLOWING' => 'Отслеживание записи',
  'LBL_FOLLOW_LINK' => 'Перейти по ссылке',
  'LBL_FONTSIZE_EXTRA_HUGE' => 'Громадный',
  'LBL_FONTSIZE_HUGE' => 'Огромный',
  'LBL_FONTSIZE_LARGE' => 'Большой',
  'LBL_FONTSIZE_LARGER' => 'Больше',
  'LBL_FONTSIZE_NORMAL' => 'Обычный (по умолчанию)',
  'LBL_FONTSIZE_SMALL' => 'Маленький',
  'LBL_FONTSIZE_TINY' => 'Очень маленький',
  'LBL_FORECAST_WORKSHEET' => 'Лист прогноза',
  'LBL_FORECAST_WORKSHEETS' => 'Листы прогнозов',
  'LBL_FOUND_IN_RELEASE' => 'Обнаружено в версии',
  'LBL_FULL_FORM_BUTTON_KEY' => 'F',
  'LBL_FULL_FORM_BUTTON_LABEL' => 'Полная форма',
  'LBL_FULL_FORM_BUTTON_TITLE' => 'Полная форма [Alt+F]',
  'LBL_GENERATE_QUOTE' => 'Сформировать коммерческое предложение',
  'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Сгенерировать форму',
  'LBL_GETTINGAIR' => 'Getting Air',
  'LBL_GLOBAL_SEARCH' => 'Глобальный поиск',
  'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
  'LBL_GLOBAL_SEARCH_MODULE_FILTER' => 'Фильтр модуля глобального поиска',
  'LBL_GLOBAL_SEARCH_RUN' => 'Запустить глобальный поиск',
  'LBL_GLOBAL_SHORTCUTS' => 'Глобальные быстрые клавиши',
  'LBL_GO_BUTTON_LABEL' => 'Переход',
  'LBL_GRID_SELECTED_FILE' => 'выбранный файл',
  'LBL_GRID_SELECTED_FILES' => 'выбранные файлы',
  'LBL_GROUP_EMAIL_ACCOUNT_CONFIGURATION' => 'Учетная запись группы',
  'LBL_GS_HELP' => 'Поля в этом модуле, используемые для поиска, указаны вверху. Выделенный текст соответствует критерию поиска.',
  'LBL_HELP' => 'Справка',
  'LBL_HELP_CREATE' => 'Чтобы создать {{plural_module_name}}:
1. Укажите значения полей.
 * Поля с пометкой "Обязательно" должны быть заполнены перед сохранением.
 * Нажмите "Показать больше", чтобы отобразить дополнительные поля при необходимости.
2. Нажмите "Сохранить" для сохранения новой записи и возвращения в {{plural_module_name}} списочное представление.
 * Выберите "Сохранить и просмотреть", чтобы открыть новый {{module_name}} в режиме просмотра записи.
 * Выберите "Сохранить и создать", чтобы сразу создать новый {{module_name}}.',
  'LBL_HELP_CREATE_TITLE' => '{{module_name}} Создание',
  'LBL_HELP_DUPLICATE' => 'Sugar обнаружил, что запись, которую вы пытаетесь создать, может быть уже существует.

Чтобы изменить существующую запись вместо создания новой, нажмите "Выбрать и редактировать" справа от выбранной записи. Любые пустые поля существующей записи будут заполнены значениями, которые вы введете. Нажмите "Сохранть", чтобы внести изменения в существующую запись.

Если, вместо этого, вы пожелаете использовать значения, которые вы только что ввели, вместо значений существующей записи, нажмите "Сбросить". Значения, которые вы ввели, будут применимы к существующей записи, и теперь вы сможете вносить дополнительные изменения, нажав при этом "Сохранить", чтобы сохранить изменения к существующей записи.

Чтобы создать новую запись, используя значения, недавно внесенные, нажмите "Игнорировать копии и сохранить" в верхнем правом углу экрана.',
  'LBL_HELP_DUPLICATE_TITLE' => 'Обнаружена возможная копия',
  'LBL_HELP_MORE_INFO' => 'Для получения более подробной информации обратитесь к {{{more_info_url}}} {{plural_module_name}} документации.{{{more_info_url_close}}}',
  'LBL_HELP_NO_HELP' => 'Нет доступных данных',
  'LBL_HELP_PREVIEW' => 'В дашлете Справка представлена конкретная информация, касающаяся модуля, который Вы просматриваете в данный момент наряду с ссылкой на соответствующую документацию (например, документацию Предварительных контактов) в руководстве для получения дополнительной информации.',
  'LBL_HELP_RECORD' => 'Режим просмотра записи предоставляет, как подробную информацию о конкретной записи, так и связанную по ней информацию.

- Чтобы редактировать поля данной записи, нажмите на самом поле или кликните по кнопке Редактировать.
- Чтобы просмотреть или изменить ссылки, ведущие к другим записям, на субпанеле переключите левую нижнюю панель на "Просмотр данных".
- Чтобы взаимодействовать с пользовательскими комментариями и просматривать измененную историю в рамках одной записи, переключите левую нижнюю панель на "Лента активностей".
- Чтобы подписаться или добавить в Избранное данную запись, используйте иконки справа от записи.
- Дополнительные действия доступны в выпадающем меню Действий справа от кнопки Редактировать.',
  'LBL_HELP_RECORDS' => 'Списочное представление модуля отображает все записи, соответствующие текущему критерию поиска и пользователям, у которых имеется доступ. Вы можете просмотреть основные детали каждой записи в рамках столбцов поля списочного представления или нажать на названии записи, чтобы открыть режим просмотра записи.',
  'LBL_HELP_RECORDS_TITLE' => 'Справка по списочному представлению',
  'LBL_HELP_RECORD_TITLE' => 'Помощь по просмотру записей',
  'LBL_HIDE' => 'Свернуть',
  'LBL_HIDE_COLUMNS' => 'Спрятать столбцы',
  'LBL_HIDE_SHOW' => 'Скрыть/показать',
  'LBL_HISTORICAL_SUMMARY' => 'Сводка основных показателей за длительный период',
  'LBL_HISTORICAL_SUMMARY_EMAIL_FROM' => 'Email От',
  'LBL_HISTORICAL_SUMMARY_EMAIL_TO' => 'Email Кому',
  'LBL_HISTORY_DASHLET' => 'История',
  'LBL_HISTORY_DASHLET_DESCRIPTION' => 'История в дашлете отображает запланированные встречи, записанные звонки, полученные и отправленные emails.',
  'LBL_HISTORY_DASHLET_EMAIL_PLURAL' => 'Emails',
  'LBL_HISTORY_DASHLET_EMAIL_SINGULAR' => 'Email',
  'LBL_HISTORY_DASHLET_GROUP_BUTTON_LABEL' => 'История команды',
  'LBL_HISTORY_DASHLET_USER_BUTTON_LABEL' => 'Моя История',
  'LBL_HOME' => 'Главная',
  'LBL_HONEYPOT' => 'Если Вы - человек, оставьте это поле пустым.',
  'LBL_HOURS' => 'Часов',
  'LBL_ICON_COLUMN_1' => 'Столбец',
  'LBL_ICON_COLUMN_2' => '2 столбца',
  'LBL_ICON_COLUMN_3' => '3 столбца',
  'LBL_ID' => 'ID',
  'LBL_ID_FF_ADD' => 'Добавить',
  'LBL_ID_FF_CLEAR' => 'Очистить',
  'LBL_ID_FF_REMOVE' => 'Удалить',
  'LBL_ID_FF_SELECT' => 'Выбрать',
  'LBL_ID_FF_VCARD' => 'vCard',
  'LBL_IGNORE_DUPLICATE_AND_SAVE' => 'Проигнорировать дубликаты и сохранить',
  'LBL_IMAGE' => 'Изображение',
  'LBL_IMAGE_DELETE_CONFIRM' => 'Хотите удалить этот рисунок?',
  'LBL_IMPORT' => 'Импорт',
  'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"Это шаблон файла импорта, который является примером того, какое содержание файла является готовым для импорта." "Файл - с запятыми разделителями .csv-файл, который использует двойные кавычки для определения поля." "Строка с заголовками - это верхняя строка файла, которая содержит ярлыки поля, как они будут отображены в приложении." "Эти ярлыки используются для преобразования данных файла в поля приложения." "Внимание: названия баз данные также могут быть использованы в строке с заголовками. Это полезно при  использовании phpMyAdmin или другого средства базы данных для предоставления экспортированного списка данных для импорта." "Порядок столбцов не является критичным, т.к. процесс импорта сопоставляет данные с соответствующими полями в зависимости от строки с заголовками." "Для использования этого файла как шаблона, необходимо сделать следующее:" "1. Удалить строки с данными для примера" "2. Удалить текст с подсказкой, который вы сейчас читаете" "3. Ввести данные в соответствующие строки и столбцы" "4. Сохранить файл в необходимую директорию на компьютере" "5. Нажать на кнопку Импорт в меню Действий в приложении и выбрать файл для загрузки"',
  'LBL_IMPORT_STARTED' => 'Импорт начат:',
  'LBL_IMPORT_VCARD' => 'Импорт vCard',
  'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
  'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Импорт vCard',
  'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Импорт vCard [Alt+I]',
  'LBL_INACTIVE_TASKS_DASHLET' => 'Неактивные задачи',
  'LBL_INACTIVE_TASKS_DASHLET_COMPLETED' => 'Завершено',
  'LBL_INACTIVE_TASKS_DASHLET_DEFERRED' => 'Отложено',
  'LBL_INACTIVE_TASKS_DASHLET_DESCRIPTION' => 'Дашлет задач отображает отложенные и завершенные задачи.',
  'LBL_INACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL' => 'Задачи Команды',
  'LBL_INACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL' => 'Мои задачи',
  'LBL_INBOUNDEMAIL_ID' => 'ID входящего сообщения',
  'LBL_INCORRECT_PASSWORD' => 'Ошибка. Неверный пароль.',
  'LBL_INFOINLINE' => 'Информация',
  'LBL_INSTANCES' => 'Системы',
  'LBL_INSTANCE_ACTIVE' => 'Эта система уже используется!',
  'LBL_INSTANCE_INVITE_SENT' => 'Приглашение отправлено',
  'LBL_INSTANCE_IN_USE' => 'Используемая система',
  'LBL_INSTANCE_SWITCH_FAILED' => 'Ошибка переключения между системами',
  'LBL_INSTANCE_USERS' => 'Пользователи системы',
  'LBL_INVALID_412_RESPONSE' => 'Запрос не выполнен, что',
  'LBL_INVALID_CREDS' => 'Предосталенное сочетание логин/пароль неверны, попробуйте еще раз.',
  'LBL_INVALID_CREDS_TITLE' => 'Неверные данные учетной записи',
  'LBL_INVALID_FILE_EXTENSION' => 'Неправильное расширение файла',
  'LBL_INVALID_GRANT' => 'Ваш ключ неверный или больше недействительный. Пожалуйста, войдите в систему еще раз.',
  'LBL_INVALID_GRANT_TITLE' => 'Срок действия ключа истек',
  'LBL_INVALID_REQUEST' => 'Запрос неверный или содержит ошибки. Обратитесь в техническую подержку.',
  'LBL_INVALID_REQUEST_TITLE' => 'Неверный запрос',
  'LBL_INVALID_USA_PHONE_FORMAT' => 'Введите телефонный номер в США, включая код местности.',
  'LBL_INVITE' => 'Пригласить',
  'LBL_INVITED' => 'Приглашен',
  'LBL_INVITEES' => 'Приглашенные',
  'LBL_IS_EMPTY' => 'Пустой',
  'LBL_IS_NOT_EMPTY' => 'Не является пустым',
  'LBL_ITEM_ID' => 'ID объекта',
  'LBL_ITEM_SUMMARY' => 'Отчёт по объекту',
  'LBL_JOB_NOTIFICATION_BODY_GENERIC' => 'Запланированное задание успешно выполнено',
  'LBL_JOB_NOTIFICATION_DOC_LINK_TEXT' => 'Документация конфигурации Сделок',
  'LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_BODY' => 'Доход по продуктам теперь включен в Ваш экземпляр Sugar, и все существующие данные Сделки были обработаны. Ваш экземпляр теперь готов к использованию с Доходами по продуктам. За дополнительными сведениями о сделанных изменениях обратитесь к {{doc_url}}',
  'LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_SUBJECT' => 'Доходы по продуктам теперь доступны в Вашем экземпляре Sugar',
  'LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_BODY' => 'Модуль Прогнозы теперь доступен в Вашем экземпляре Sugar для использования со Сделками. Все предыдущие данные прогнозов Доходов по продуктам были удалены, и экземпляр готов для создания и связки прогнозов со сделками. За дополнительными сведениями о сделанных изменениях обратитесь к {{doc_url}}',
  'LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_SUBJECT' => 'Модуль Прогнозы теперь готов к использованию со Сделками в Вашем экземпляре Sugar',
  'LBL_JOB_NOTIFICATION_RLI_NOTE_BODY' => 'Доходы по продуктам теперь отключены в Вашем экземпляре Sugar, и все существующие данные Доходов по продуктам были обработаны. Ваш экземпляр теперь готов к использованию со Сделками. За дополнительными сведениями о сделанных изменениях обратитесь к {{doc_url}}',
  'LBL_JOB_NOTIFICATION_RLI_NOTE_SUBJECT' => 'Доходы по продуктам теперь отключены в Вашем экземпляре Sugar',
  'LBL_JOB_NOTIFICATION_SUBJECT_GENERIC' => 'Запланированное задание завершено',
  'LBL_JS_CALENDAR' => 'Календарь',
  'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Функциональность формы - Alt+</strong><br/> I = правка (detailview)<br/> U = d<b>дублировать (detailview)<br/> D = <b>удалить (detailview)<br/> A = сохранить (editview)<br/> L = отмена (editview) <br/><br/></p><p><strong>Поиск и Навигация  - Alt+</strong><br/> 7 = first input on Edit form<br/> 8 = Advanced Search link<br/> 9 = First Search Form input<br/> 0 = Unified search input<br></p>',
  'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Ярлыки клавиатуры',
  'LBL_LANGUAGE' => 'Язык',
  'LBL_LAST_COMMIT' => 'Последнее подтверждение:',
  'LBL_LAST_LOGIN' => 'последний раз входа в систему',
  'LBL_LAST_TOUCHED' => 'Последнее обращение {{relativetime}} к {{date}} {{time}}',
  'LBL_LAST_VIEWED' => 'Последние просмотренные',
  'LBL_LATER' => 'Позже',
  'LBL_LEADS' => 'Предварительные контакты',
  'LBL_LEARNING_RESOURCES_COMMUNITY_LINK' => 'Форумы сообщества',
  'LBL_LEARNING_RESOURCES_COMMUNITY_TEASER' => 'Принимайте участие в обсуждениях, находите решения, и обменивайтесь идеями с другими пользователями.',
  'LBL_LEARNING_RESOURCES_DESC' => 'Обучающие ресурсы SugarCRM',
  'LBL_LEARNING_RESOURCES_NAME' => 'Обучающие ресурсы',
  'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_LINK' => 'Sugar University',
  'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_TEASER' => 'Станьте экспертом Sugar с помощью тренингов, видео, лекций, вебинаров и сертификаций.',
  'LBL_LEARNING_RESOURCES_SUPPORT_LINK' => 'Документация и поддержка',
  'LBL_LEARNING_RESOURCES_SUPPORT_TEASER' => 'Узнайте подробности работы Sugar и сотрудничайте с поддержкой.',
  'LBL_LEARNING_RESOURCES_TITLE' => 'Обучающие ресурсы',
  'LBL_LEGAL' => 'легальный',
  'LBL_LESS' => 'менее',
  'LBL_LIKELY' => 'Вероятный',
  'LBL_LIKELY_ADJUSTED' => 'Вероятный (Скорректированный)',
  'LBL_LINK_ACTIONS' => 'Действия',
  'LBL_LINK_ALL' => 'Все',
  'LBL_LINK_BUTTON' => 'Присоединить',
  'LBL_LINK_FROM_REPORT_NO_DATA' => 'Нет записей, чтобы добавить ссылку.',
  'LBL_LINK_FROM_REPORT_SUCCESS' => '{{reportCount}} к записям были добавлены ссылки.',
  'LBL_LINK_FROM_REPORT_WRONG_MODULE' => 'Выбранный отчет построен на неправильном типе модуля.',
  'LBL_LINK_MORE' => 'Больше',
  'LBL_LINK_NONE' => 'Не определен',
  'LBL_LINK_RECORDS' => 'Записи',
  'LBL_LINK_SELECT' => 'Выбрать',
  'LBL_LIST' => 'Список',
  'LBL_LISTVIEW' => 'Список',
  'LBL_LISTVIEW_ACTIONS' => 'Действия',
  'LBL_LISTVIEW_ALL' => 'Все',
  'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Пожалуйста, выберите меньше 10 записей, чтоб продолжить.',
  'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Вы уверены, что хотите обновить весь список?',
  'LBL_LISTVIEW_NONE' => 'Отменить выделение',
  'LBL_LISTVIEW_NO_RECORDS' => 'На данный момент записей не найдено.',
  'LBL_LISTVIEW_NO_SELECTED' => 'Пожалуйста, выберите хотя бы 1 запись, чтоб продолжить.',
  'LBL_LISTVIEW_OPTION_CURRENT' => 'Выбрать текущую страницу',
  'LBL_LISTVIEW_OPTION_ENTIRE' => 'Выбрать все',
  'LBL_LISTVIEW_OPTION_SELECTED' => 'Выбранные записи',
  'LBL_LISTVIEW_SELECTED_CLEAR' => 'Очистить выбор.',
  'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Выбраны:',
  'LBL_LISTVIEW_SELECT_ALL_RECORDS' => 'Выбрать все записи',
  'LBL_LISTVIEW_SELECT_AND_EDIT' => 'Выбрать и редактировать',
  'LBL_LISTVIEW_TWO_REQUIRED' => 'Пожалуйста, выберите хотя бы 2 записи, чтоб продолжить.',
  'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
  'LBL_LIST_ASSIGNED_USER' => 'Ответственный (-ая)',
  'LBL_LIST_CONTACT_NAME' => 'Контактное лицо',
  'LBL_LIST_CONTACT_ROLE' => 'Роль Контакта',
  'LBL_LIST_DATE_ENTERED' => 'Дата создания',
  'LBL_LIST_EMAIL' => 'E-mail-адреса',
  'LBL_LIST_NAME' => 'Название',
  'LBL_LIST_OF' => 'из',
  'LBL_LIST_PHONE' => 'Телефон',
  'LBL_LIST_RELATED_TO' => 'Относится к',
  'LBL_LIST_REMOVE_EMAIL_INFO' => 'Был дополнительный электронный адрес в изменяемой записи. В настоящее время электронный адрес является основным и был заполнен ниже.',
  'LBL_LIST_TEAM' => 'Команда',
  'LBL_LIST_USER_NAME' => 'Имя пользователя',
  'LBL_LOADING' => 'Загрузка...',
  'LBL_LOADING_FILES' => 'Идет загрузка списка документации. Пожалуйста, повторите попытку позже',
  'LBL_LOADING_LANGUAGE' => 'Загрузка языкового пакета',
  'LBL_LOADING_PAGE' => 'Загрузка страницы, пожалуйста подождите...',
  'LBL_LOADING_PREVIEW' => 'Загружается предварительный просмотр',
  'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Иван',
  'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Иванов',
  'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Д-р',
  'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
  'LBL_LOGGED_OUT' => 'Вы вышли из системы.',
  'LBL_LOGIN_ADMIN_CALL' => 'Пожалуйста, свяжитесь с системным администратором.',
  'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Слишком много неудачных попыток авторизации',
  'LBL_LOGIN_BUTTON_KEY' => 'L',
  'LBL_LOGIN_BUTTON_LABEL' => 'Логин',
  'LBL_LOGIN_BUTTON_TITLE' => 'Логин',
  'LBL_LOGIN_FORGOT_PASSWORD' => 'Забыли пароль?',
  'LBL_LOGIN_FORM_LABEL' => 'Показать форму авторизации',
  'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Вы можете попробовать авторизоваться опять',
  'LBL_LOGIN_LOGIN_TIME_DAYS' => 'дней.',
  'LBL_LOGIN_LOGIN_TIME_HOURS' => 'час.',
  'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'мин.',
  'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'сек.',
  'LBL_LOGIN_OPTIONS' => 'Опции',
  'LBL_LOGIN_PASSWORD' => 'Пароль',
  'LBL_LOGIN_SUBMIT' => 'Отправить',
  'LBL_LOGIN_TO_ACCESS' => 'Пожалуйста, войдите в систему, чтобы получить доступ к этому разделу.',
  'LBL_LOGIN_USERNAME' => 'Пользователь',
  'LBL_LOGIN_WELCOME_TO' => 'Добро пожаловать',
  'LBL_LOGOUT' => 'Выйти из системы',
  'LBL_LOWER_OR' => 'или',
  'LBL_MAILMERGE' => 'Объединение почты',
  'LBL_MAILMERGE_KEY' => 'M',
  'LBL_MANAGE_SUBSCRIPTIONS' => 'Управление подписками',
  'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Управления подписками на',
  'LBL_MAP_BUTTON' => 'Карта',
  'LBL_MARK_AS_FAVORITES' => 'Отметить как избранное',
  'LBL_MASSUPDATE_DATE' => 'Выберите дату',
  'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM' => 'Извините, но Вы не можете удалить команду Global.',
  'LBL_MASSUPDATE_DELETE_USER_EXISTS' => 'Эта частная команда [{0}] не может быть удалена до тех пор, пока не удалён пользователь [{1}].',
  'LBL_MASS_UPDATE' => 'Групповое обновление',
  'LBL_MASS_UPDATE_ADD_FIELD' => 'Добавить поле',
  'LBL_MASS_UPDATE_EMPTY_CONFIRM' => 'Существующие значения будут заменены пустыми значениями. Продолжить?',
  'LBL_MASS_UPDATE_EMPTY_VALUES' => 'У следующих атрибутов пустые значения:',
  'LBL_MASS_UPDATE_JOB_QUEUED' => 'Ваш запрос на массовое обновление был добавлен в очередь',
  'LBL_MASS_UPDATE_REMOVE_FIELD' => 'Удалить поле',
  'LBL_MASS_UPDATE_SUCCESS' => 'Все записи были успешно обновлены.',
  'LBL_MAXIMUM_OF' => 'Максимум',
  'LBL_MAX_DASHLETS_REACHED' => 'Вы добавили максимальное количество разделов Sugar, установленное администратором. Пожалуйста, удалите один из существующих разделов для добавления нового.',
  'LBL_MEETING' => 'Встреча',
  'LBL_MEETINGS' => 'Встречи',
  'LBL_MEETINGS_SUBPANEL_TITLE' => 'Встречи',
  'LBL_MEETING_GO_BACK' => 'Вернуться к встрече',
  'LBL_MEMBERS' => 'Участники',
  'LBL_MEMBER_OF' => 'Состоит в',
  'LBL_MEMORY_USAGE' => 'Использование памяти (байт)',
  'LBL_MERGE' => 'Слить',
  'LBL_MERGE_CONNECTORS' => 'Получить данные',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_MERGE_DUPLICATES' => 'Объединить',
  'LBL_MERGE_DUPLICATES_CONFIRM' => 'Это действие удалит следующие записи:',
  'LBL_MERGE_DUPLICATES_FAIL_PROCESS' => 'Слияние связанных записей не завершено. Некоторые записи не удалось слить. Продолжить?',
  'LBL_MERGE_DUPLICATES_PROCEED' => 'Хотите продолжить?',
  'LBL_MERGE_DUPLICATES_REMOVE' => 'Вы действительно хотите убрать эту запись из объединения?',
  'LBL_MERGE_DUPLICATES_REMOVE_TOOLTIP' => 'Удалить запись из объединения',
  'LBL_MERGE_DUPLICATES_TITLE' => 'Слить связанные записи',
  'LBL_MERGE_DUPLICATES_WARNING_CLOSE' => 'Слияние связанных записей не завершено. Некоторые записи не удалось слить.',
  'LBL_MERGE_NO_ACCESS' => 'У Вас нет доступа для выполнения этого действия. По крайней мере одна запись должна быть редактируемой.',
  'LBL_MERGE_NO_ACCESS_TO_A_FEW_RECORDS' => 'Одна или несколько выбранных записей не могут быть удалены. Эти записи были удалены из списка для объединения.',
  'LBL_MERGE_UNSAVED_CHANGES' => 'Вы собираетесь изменить основную запись без сохранения внесенных изменений. Все изменения будут утеряны. Продолжить?',
  'LBL_MERIDIEM' => 'Пополудни',
  'LBL_MESSAGE_BOX_TITLE' => 'Оповещение',
  'LBL_METHOD_NOT_ALLOWED' => 'HTTP-метод не разрешен для этого ресурса. Обратитесь в техническую подержку.',
  'LBL_METHOD_NOT_ALLOWED_TITLE' => 'Метод запрещен.',
  'LBL_MINUTES' => 'Минут',
  'LBL_MISSING_CUSTOM_DELIMITER' => 'Необходимо обозначить особый разделитель данных',
  'LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_LINK_TEXT' => 'Настройки Email',
  'LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_SUBJECT' => 'Отсутствуют настройки сервера SMTP',
  'LBL_MOBILE' => 'Мобильная версия',
  'LBL_MOBILE_APP_VERSION' => 'Версия приложения',
  'LBL_MOBILE_CHOOSE_DOC' => 'Выбрать документ',
  'LBL_MOBILE_CHOOSE_LOCATION' => 'Выбрать расположение',
  'LBL_MOBILE_CHOOSE_PHONE' => 'Выбрать номер телефона',
  'LBL_MOBILE_CHOOSE_RECIPIENT' => 'Выбрать получателя',
  'LBL_MOBILE_CHOOSE_URL' => 'Выбрать URL',
  'LBL_MOBILE_DELETE_CONFIRM' => 'Вы действительно хотите удалить эту запись?',
  'LBL_MOBILE_DESKTOP' => 'Версия рабочего стола',
  'LBL_MOBILE_DETAIL_SHOW_LESS' => '...Меньше',
  'LBL_MOBILE_DETAIL_SHOW_MORE' => 'Больше...',
  'LBL_MOBILE_DOC' => 'Документ',
  'LBL_MOBILE_DOWNLOAD_COMPLETED' => 'Выгрузка завершена: {{{this}}}',
  'LBL_MOBILE_DOWNLOAD_FAILED' => 'Ошибка загрузки {{{this}}}',
  'LBL_MOBILE_DOWNLOAD_STARTED' => 'Выгрузка началась: {{{this}}}',
  'LBL_MOBILE_EDIT_REL' => 'Изменить связь',
  'LBL_MOBILE_FEEDBACK' => 'Обратная связь',
  'LBL_MOBILE_LOGING_OUT' => 'Подождите, пока система завершит работу...',
  'LBL_MOBILE_LOG_CALL_CONFIRM' => 'Хотите записать Ваш последний звонок?',
  'LBL_MOBILE_META_SYNC_FAILED' => 'Не удалось синхронизироваться с сервером.',
  'LBL_MOBILE_META_SYNC_FAILED_RETRY' => 'Не удалось синхронизироваться с сервером. Повторить?',
  'LBL_MOBILE_NO_ACTIONS_AVAILABLE' => 'Нет доступных действий',
  'LBL_MOBILE_NO_RECORDS' => '- Найдено 0 записей -',
  'LBL_MOBILE_PRIVACY_TERMS_CONDITIONS' => 'Политика & Условия',
  'LBL_MOBILE_PROCESSING_FILE' => 'Подготовка файла...',
  'LBL_MOBILE_PROCESSING_IMAGE' => 'Подготовка рисунка...',
  'LBL_MOBILE_PTR_PULL' => 'Для обновления потянуть вниз',
  'LBL_MOBILE_PTR_RELEASE' => 'Для обновления отпустить',
  'LBL_MOBILE_RELOGIN_BUTTON' => 'Повторная авторизация',
  'LBL_MOBILE_SEARCH_TEAMS' => 'Искать команды...',
  'LBL_MOBILE_SELECT_TEAMS' => 'Выбор команды',
  'LBL_MOBILE_SERVER_URL' => 'URL сервера',
  'LBL_MOBILE_SERVER_VERSION' => 'Версия сервера',
  'LBL_MOBILE_SHOW_MORE' => 'Показать больше...',
  'LBL_MOBILE_SHOW_MORE_TOP' => 'Показать больше...',
  'LBL_MOBILE_SUPPORT' => 'Поддержка',
  'LBL_MOBILE_TUTORIAL_CONTROL_PANEL' => 'Используйте стрелки ниже для быстрого обзора ключевых компонентов этого меню.',
  'LBL_MOBILE_TUTORIAL_DETAIL_BACK' => 'Вернуться на предыдущую страницу.',
  'LBL_MOBILE_TUTORIAL_DETAIL_BACK_TABLET' => 'Назад.',
  'LBL_MOBILE_TUTORIAL_DETAIL_CARD' => 'Наиболее важная информация о записи.',
  'LBL_MOBILE_TUTORIAL_DETAIL_FOLLOW' => 'Следить/Не следить за записью.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO' => 'Это страница с подробной информацией.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO_TEXT' => 'Детальный вид открывается в правой стороне экрана.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO_TITLE' => 'Подробная информация',
  'LBL_MOBILE_TUTORIAL_DETAIL_RECORD_ACTIONS' => 'Доступные действия с записью.',
  'LBL_MOBILE_TUTORIAL_DETAIL_RELATE_LINK' => 'Нажмите, чтобы открыть связанную запись.',
  'LBL_MOBILE_TUTORIAL_DETAIL_RIGHT_ACTION' => 'Просмотреть дополнительную информацию или редактировать запись.',
  'LBL_MOBILE_TUTORIAL_DETAIL_SHOW_MORE' => 'Нажмите, чтобы развернуть подробную информацию.',
  'LBL_MOBILE_TUTORIAL_HOME_CREATE' => 'Доступные действия при просмотре.',
  'LBL_MOBILE_TUTORIAL_HOME_END' => 'Наслаждайтесь всеми новыми "фичами"!',
  'LBL_MOBILE_TUTORIAL_HOME_FAVORITES_BTN' => 'Отфильтровать список, чтобы показать избранные записи.',
  'LBL_MOBILE_TUTORIAL_HOME_FAVORITES_ICON' => 'Отметить запись как избранную.',
  'LBL_MOBILE_TUTORIAL_HOME_GRIP' => 'Доступные действия с записью.',
  'LBL_MOBILE_TUTORIAL_HOME_INTRO' => 'Добро пожаловать {{{brandName}}}. Позволяет нам выделять новые "фичи"...',
  'LBL_MOBILE_TUTORIAL_HOME_LOGO' => 'Основное меню навигации.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_DESKTOP' => 'Открыть Sugar в браузере.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO' => 'Это домашнее меню.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO_TEXT' => 'Главное меню открывается в левой части экрана.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO_TITLE' => 'Вид главного меню.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_LOGO' => 'Закрыть домашнее меню.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_MODULES' => 'Просмотреть конкретный модуль.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_PROFILE' => 'Просмотреть Ваш профиль.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_SETTINGS' => 'Настроить систему.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_TOUR' => 'Доступ к Туру в любое время',
  'LBL_MOBILE_TUTORIAL_HOME_MY_ITEMS_BTN' => 'Отфильтровать список, чтобы показать записи, которые закреплены за мной.',
  'LBL_MOBILE_TUTORIAL_HOME_RECENT' => 'Недавно измененные записи.',
  'LBL_MOBILE_TUTORIAL_HOME_SEARCH' => 'Глобальный поиск записей.',
  'LBL_MOBILE_TUTORIAL_HOME_UPCOMING' => 'Мои предстоящие события начинаются сегодня.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_ACTIONS' => 'Укажите конкретное действие, чтобы просмотреть, чтобы выполнить.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_CREATE' => 'Закрыть дополнительное меню.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_INTRO' => 'Это дополнительное меню.',
  'LBL_MOBILE_UNLINK_CONFIRM' => 'Вы действительно хотите удалить эту связь с записью?',
  'LBL_MOBILE_UPLOAD_IN_PROGRESS' => 'Загрузка файла...',
  'LBL_MOBILE_UPLOAD_SUCCESS' => 'Файл успешно загружен',
  'LBL_MOBILE_WAIT' => 'Пожалуйста, подождите...',
  'LBL_MODIFIED' => 'Последнее изменение',
  'LBL_MODIFIED_BY_USER' => 'Изменено пользователем',
  'LBL_MODIFIED_ID' => 'Изменено пользователем',
  'LBL_MODIFIED_NAME' => 'Изменено пользователем',
  'LBL_MODIFIED_USER' => 'Изменено пользователем',
  'LBL_MODIFY_CURRENT_SEARCH' => 'Изменить текущее условие поиска',
  'LBL_MODULE' => 'Модуль',
  'LBL_MODULE_ALL' => 'Все',
  'LBL_MODULE_ATTACHMENTS_TITLE' => '{{module}} вложения',
  'LBL_MODULE_FILTER' => 'Фильтровать по...',
  'LBL_MODULE_NAME' => 'Название модуля',
  'LBL_MODULE_TYPE' => 'Тип',
  'LBL_MONITOR_ID' => 'ID монитора',
  'LBL_MONTH_TIMEPERIOD_FORMAT' => '{0}',
  'LBL_MORE' => 'больше',
  'LBL_MOREDETAIL' => 'Детальнее',
  'LBL_MORE_ACTION' => 'Больше действий',
  'LBL_MORE_HISTORY' => 'Больше истории...',
  'LBL_MORE_MODULES' => 'Больше модулей',
  'LBL_MY_ACCOUNT' => 'Мои настройки',
  'LBL_MY_AREA_LINKS' => 'Мои area links:',
  'LBL_NAME' => 'Название',
  'LBL_NAVIGATE_TO_REPORTS' => 'Вы переходите в модуль Отчёты. Изменения, внесенные Вами в дашлет не будут сохранены. Продолжить?',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => 'Создать',
  'LBL_NEW_BUTTON_TITLE' => 'Создать [Alt+N]',
  'LBL_NEW_PAGE_FEEDBACK' => 'Вы создали новую страницу. Вы можете наполнить ее новым содержимым, воспользовавшись опцией Добавить Разделы Sugar.',
  'LBL_NEW_PASSWORD1' => 'Новый пароль',
  'LBL_NEW_PASSWORD2' => 'Подтвердить пароль',
  'LBL_NEW_USER_PASSWORD_1' => 'Пароль был успешно изменен.',
  'LBL_NEW_WEB_VERSION' => 'Новая версия мобильного клиента SugarCRM Mobile уже доступна. Вы хотите ее обновить?',
  'LBL_NEXT_BUTTON_LABEL' => 'Дальше',
  'LBL_NEXT_FRIDAY' => 'следующая пятница',
  'LBL_NEXT_MONDAY' => 'следующий понедельник',
  'LBL_NEXT_MONTH' => 'следующий месяц',
  'LBL_NEXT_TIMEPERIOD' => 'Следующий временной период',
  'LBL_NEXT_WEEK' => 'следующая неделя',
  'LBL_NEXT_YEAR' => 'следующий год',
  'LBL_NO' => 'Нет',
  'LBL_NONE' => '--Не выбрано--',
  'LBL_NOTES' => 'Заметки',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Заметки',
  'LBL_NOTIFICATIONS' => 'Уведомления',
  'LBL_NOT_AUTHORIZED' => 'У вас недостаточно прав для просмотра данной записи',
  'LBL_NOT_AVAILABLE' => 'Недоступен',
  'LBL_NO_ACCESS' => '(Нет доступа)',
  'LBL_NO_ACCESS_LOWER' => 'Пользователь не имеет доступа к записи',
  'LBL_NO_ACTION' => 'Нет действий с таким названием.',
  'LBL_NO_DATA' => 'Нет данных',
  'LBL_NO_DATA_AVAILABLE' => 'Нет доступных данных',
  'LBL_NO_FIELD_ACCESS' => 'Нет доступа',
  'LBL_NO_FLASH_PLAYER' => 'У Вас либо отключён Adobe Flash, либо Вы используете старую версию Adobe Flash Player. <a href="http://www.adobe.com/go/getflashplayer/">Нажмите сюда</a>, чтобы загрузить последнюю версию Flash Player.',
  'LBL_NO_IMAGE' => 'Нет изображения',
  'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Больше нет полей, доступных для операции "массовое обновление"',
  'LBL_NO_PDF_TEMPLATE' => 'PDF шаблон не найден',
  'LBL_NO_RECORDS_FOUND' => '- Найдено 0 записей -',
  'LBL_NUMBER_OF_COLUMNS' => 'Выберите количество столбцов',
  'LBL_OBJECT_IMAGE' => 'образ объекта',
  'LBL_OC_DEFAULT_STATUS' => 'Неактивно',
  'LBL_OC_STATUS' => 'Статус Оффлайн клиента',
  'LBL_OC_STATUS_TEXT' => 'Показывает, возможно ли использование Оффлайн клиента данным пользователем.',
  'LBL_OFFLINE_CLEAN_UP_PROMPT' => 'Это действие удалит записи, к которым у Вас на данный момент нет доступа. Продолжить?',
  'LBL_OFFLINE_CLEAR_DB' => 'Очистить хранилище...',
  'LBL_OFFLINE_CLEAR_DB_PROMPT' => 'Вы хотите удалить все записи из локальной памяти?',
  'LBL_OFFLINE_COMPACT_DB' => 'Сжать хранилище...',
  'LBL_OFFLINE_DB_CLEANING_COMPLETED' => 'Очистка завершена',
  'LBL_OFFLINE_DB_CLEANING_IN_PROGRESS' => 'Очистка хранилища...',
  'LBL_OFFLINE_DB_SIZE' => 'Размер базы данных',
  'LBL_OFFLINE_DELETED' => 'Запись не найдена.',
  'LBL_OFFLINE_DELETED_RELATED' => 'Не удалось найти связанную запись. Возможно, она было удалена или отсоединена.',
  'LBL_OFFLINE_DISABLED' => 'Автономный режим отключен',
  'LBL_OFFLINE_DISABLE_PROMPT' => 'Вы хотите отключить поддержку в автономном режиме? Все изменения, ожидающие синхронизации, будут потеряны.',
  'LBL_OFFLINE_ENABLED' => 'Автономный режим включен',
  'LBL_OFFLINE_ENABLE_PROMPT' => 'Вы уверены, что хотите включить поддержку в автономном режиме?',
  'LBL_OFFLINE_LAST_SYNC_TS' => 'Последняя попытка синхронизации: {{ts}}',
  'LBL_OFFLINE_MERGE_DATA_CONFIRM' => 'Кто-то отредактировал такую же запись на сервере. Подтвердите для автоматического объединения Ваших изменений или отклоните для их отмены.',
  'LBL_OFFLINE_MODE' => 'Автономный режим',
  'LBL_OFFLINE_PREFETCHING' => 'Загрузка записей...',
  'LBL_OFFLINE_PREFETCHING_EST_TIME' => 'Осталось около {{estimatedTime}}...',
  'LBL_OFFLINE_PREFETCHING_MODULE' => 'Загрузка {{module}} {{progressValue}}...',
  'LBL_OFFLINE_PREFETCHING_MODULE_COMPLETE' => 'Загрузка {{module}} завершена',
  'LBL_OFFLINE_PREFETCH_ACTION' => 'Загрузить Ваши записи...',
  'LBL_OFFLINE_PREFETCH_ERROR' => 'Ошибка при загрузке записей',
  'LBL_OFFLINE_PREFETCH_FIRST_PROMPT' => 'Вы хотите, чтобы назначенные на Вас записи, избранные записи и записи, на которые Вы подписаны были загружены сейчас для доступа в автономном режиме? Рекомендуется быстрое подключение, поскольку эта операция может занять некоторое время. Вы можете скачать позже из Main Menu > Offline.',
  'LBL_OFFLINE_PREFETCH_PROMPT' => 'Завершение загрузки назначенных на Вас записей, избранные записей и записей, на которые Вы подписаны для доступа в автономном режиме может занять некоторое время. Рекомендуется быстрое подключение. Продолжить?',
  'LBL_OFFLINE_PREFETCH_SUCCESS' => 'Записи загружены успешно',
  'LBL_OFFLINE_RECORDS_PER_MODULE' => 'Записи за модуль',
  'LBL_OFFLINE_ROLLBACK_FAILED' => 'Откат не удался',
  'LBL_OFFLINE_ROLLBACK_PROMPT' => 'Вы хотите прокрутить назад это изменение?',
  'LBL_OFFLINE_ROLLBACK_SUCCESS' => 'Откат завершен',
  'LBL_OFFLINE_SERVER_FETCH' => 'Выборка из сервера',
  'LBL_OFFLINE_SETTINGS' => 'Настройки устранения дефектов',
  'LBL_OFFLINE_STATS' => 'Статистика хранилища',
  'LBL_OFFLINE_STATUS_BAD_NETWORK' => 'Невозможно получить доступ к серверу.',
  'LBL_OFFLINE_STATUS_NO_PENDING_TX' => 'Нет изменений, ожидающих синхронизации.',
  'LBL_OFFLINE_STATUS_OFFLINE' => 'Устройство находится в автономном режиме.',
  'LBL_OFFLINE_STATUS_ONLINE' => 'Устройство находится в онлайн режиме.',
  'LBL_OFFLINE_STATUS_PENDING_TX' => 'Изменения находятся в ожидании синхронизации.',
  'LBL_OFFLINE_STATUS_SYNC_FAILED' => 'Не удалась последняя попытка синхронизации. Проверьте журнал транзакции.',
  'LBL_OFFLINE_SYNC_IN_PROGRESS' => 'Выполняется синхронизация...',
  'LBL_OFFLINE_TOTAL_RECORDS_COUNT' => 'Общее количество записей',
  'LBL_OFFLINE_TRANSACTION_SYNCED' => 'Транзакция синхронизирована.',
  'LBL_OK' => 'OK',
  'LBL_OLD_ACCOUNT_LINK' => 'Предыдущий Контрагент',
  'LBL_ONLY_IMAGE_ATTACHMENT' => 'Добавлены могут быть только приложения графического формата',
  'LBL_OPENALL_BUTTON_KEY' => 'O',
  'LBL_OPENALL_BUTTON_LABEL' => 'Открыть все',
  'LBL_OPENALL_BUTTON_TITLE' => 'Открыть все [Alt+O]',
  'LBL_OPENTO_BUTTON_KEY' => 'T',
  'LBL_OPENTO_BUTTON_LABEL' => 'Открыть в:',
  'LBL_OPENTO_BUTTON_TITLE' => 'Открыть в: [Alt+T]',
  'LBL_OPEN_ITEMS' => 'Открытые объекты:',
  'LBL_OPERATOR_IN_TEXT' => 'является одним из следующих:',
  'LBL_OPERATOR_NOT_IN_TEXT' => 'не является одним из следующих:',
  'LBL_OPPORTUNITIES' => 'Сделки',
  'LBL_OPPORTUNITY' => 'Сделка',
  'LBL_OPPORTUNITY_METRICS' => 'Показатели продаж',
  'LBL_OPPORTUNITY_NAME' => 'Название сделки',
  'LBL_OPTIONAL' => 'Опционально',
  'LBL_OPTIONS' => 'Опции',
  'LBL_OPT_OUT_FLAG_PRIMARY' => 'Исключить основной почтовый адрес',
  'LBL_OR' => 'ИЛИ',
  'LBL_ORG_CHART' => 'Схема Организации',
  'LBL_ORG_CHART_DESC' => 'Отображает структуру сотрудников Вашей организации.',
  'LBL_ORG_CHART_TOOLTIP_NODES' => 'Показать все узлы',
  'LBL_ORG_CHART_TOOLTIP_TOGGLE' => 'Переключить ориентацию',
  'LBL_ORG_CHART_TOOLTIP_ZOOM' => 'Увеличить для соответствия',
  'LBL_OUTBOUND_EMAIL_ADD_SERVER' => 'Добавить сервер...',
  'LBL_OVERDUE' => 'Просрочено',
  'LBL_OVERWRITE_POPULATED_DATA_FROM' => 'Из:',
  'LBL_OVERWRITE_POPULATED_DATA_TO' => 'В:',
  'LBL_PAGE_NAME' => 'Название страницы',
  'LBL_PANEL_ADVANCED' => 'Подробная информация',
  'LBL_PANEL_ASSIGNMENT' => 'Дополнительно',
  'LBL_PANEL_BODY' => 'Просмотр',
  'LBL_PANEL_DEFAULT' => 'По умолчанию',
  'LBL_PARENT_TYPE' => 'Тип изначальной записи',
  'LBL_PASSWORD' => 'Пароль',
  'LBL_PASSWORD_REQUEST_ERROR' => 'Возникла проблема при получении имени пользователя и email комбинации.',
  'LBL_PASSWORD_REQUEST_SENT' => 'Ваш запрос был подан на рассмотрение',
  'LBL_PASSWORD_UPDATE_GENERIC_ISSUE' => 'Ошибка: Возникла проблема с обновлением пароля для данного пользователя.',
  'LBL_PA_PRODEF_HAS_PENDING_PROCESSES' => 'Вы не можете удалить это Определение Процесса, потому что есть запущенные процессы в режиме ожидания.',
  'LBL_PDF_EMAIL' => 'Отправить PDF',
  'LBL_PDF_VIEW' => 'Загрузить PDF',
  'LBL_PENDING_NOTIFICATIONS' => 'Уведомления',
  'LBL_PERCENTAGE_SYMBOL' => '%',
  'LBL_PHASE' => 'Порядок',
  'LBL_PICTURE_FILE' => 'Изображение',
  'LBL_PLANNED_ACTIVITIES_DASHLET' => 'Запланированные мероприятия',
  'LBL_PLANNED_ACTIVITIES_DASHLET_CONFIRM_CLOSE' => 'Вы действительно хотите отметить {0} как закрытый?',
  'LBL_PLANNED_ACTIVITIES_DASHLET_DESCRIPTION' => 'Дашлет запланированных мероприятий отображает запланированные встречи и звонки.',
  'LBL_PLANNED_ACTIVITIES_DASHLET_FUTURE_BUTTON_LABEL' => 'Будущие',
  'LBL_PLANNED_ACTIVITIES_DASHLET_GROUP_BUTTON_LABEL' => 'Мероприятия команды',
  'LBL_PLANNED_ACTIVITIES_DASHLET_HELD_ACTIVITY' => 'Состоялся',
  'LBL_PLANNED_ACTIVITIES_DASHLET_TODAY_BUTTON_LABEL' => 'Сегодня',
  'LBL_PLANNED_ACTIVITIES_DASHLET_USER_BUTTON_LABEL' => 'Мои мероприятия',
  'LBL_PLEASE_SELECT' => 'Пожалуйста, выберите',
  'LBL_PLUGINS_DESC' => 'Читайте об особенностях плагинов в Документации по плагинам <a href="https://www.sugarcrm.com/crm/support/documentation/SugarPlugIns">Plug-ins Documentation</a>.',
  'LBL_PLUGINS_LOTUS_TITLE' => 'Плагины Sugar для Lotus Notes<sup>TM</sup>',
  'LBL_PLUGINS_TITLE' => 'Плагины Sugar for Microsoft Office<sup>TM</sup>',
  'LBL_PLUGIN_EXCEL_DESC' => 'Интегрировать Sugar с таблицами для лучшего анализа ключевых измерений.',
  'LBL_PLUGIN_EXCEL_NAME' => 'Плагин Sugar для Excel',
  'LBL_PLUGIN_LOTUS_DESC' => 'Интегрировать Sugar с Lotus Notes.',
  'LBL_PLUGIN_LOTUS_NAME' => 'Плагин Sugar для Lotus Notes',
  'LBL_PLUGIN_OUTLOOK_DESC' => 'Интегрировать почту и календарь Sugar с Microsoft Outlook.',
  'LBL_PLUGIN_OUTLOOK_NAME' => 'Плагин Sugar для Outlook',
  'LBL_PLUGIN_WORD_DESC' => 'Автоматически передавать информацию из SugarCRM в шаблонные письма, прямые письма и другие документы Microsoft.',
  'LBL_PLUGIN_WORD_NAME' => 'Плагин Sugar для Word',
  'LBL_PLUS_INLINE' => 'Добавить',
  'LBL_PMSE_ALL_PROCESSES_LABEL' => 'Все процессы',
  'LBL_PMSE_BUSINESS_RULES_DASHLET' => 'Процесс обработки бизнес-правил',
  'LBL_PMSE_BUSINESS_RULES_DASHLET_DESCRIPTION' => 'Дашлет Процесс обработки бизнес-правила отображает шаблоны, которые могут быть использованы автором процесса.',
  'LBL_PMSE_CANCELLED_STATUS' => 'Отменено',
  'LBL_PMSE_COMPLETED_STATUS' => 'Завершено',
  'LBL_PMSE_EMAIL_TEMPLATES_DASHLET' => 'Процесс обработки шаблонов Email',
  'LBL_PMSE_EMAIL_TEMPLATES_DASHLET_DESCRIPTION' => 'Дашлет Процесс обработки шаблонов Email отображает шаблоны, которые могут быть использованы автором процесса.',
  'LBL_PMSE_ERROR_STATUS' => 'Ошибка',
  'LBL_PMSE_IN_PROGESS_STATUS' => 'В процессе',
  'LBL_PMSE_PROCESSES_DASHLET' => 'Процессы',
  'LBL_PMSE_PROCESSES_DASHLET_DESCRIPTION' => 'Дашлет Процессы отображает шаблоны, которые могут быть использованы автором процесса.',
  'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET' => 'Определения процесса',
  'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET_DESCRIPTION' => 'Дашлет Определения процесса отображает шаблоны, которые могут быть использованы автором процесса.',
  'LBL_PMSE_PROCESS_STATUS_CHART_DESCRIPTION' => 'Описание состояния процесса',
  'LBL_PMSE_PROCESS_STATUS_CHART_NAME' => 'Сводка состояния процесса',
  'LBL_PMSE_PROCESS_USERS_CHART_DESCRIPTION' => 'Незаконченные активности по процессу',
  'LBL_PMSE_PROCESS_USERS_CHART_NAME' => 'Незаконченные активности по процессу',
  'LBL_PMSE_PROCESS_USERS_CHART_NAME_RECORD' => 'Незаконченные активности',
  'LBL_PMSE_SETTINGS' => 'Настройки',
  'LBL_PMSE_TERMINATED_STATUS' => 'Прервано',
  'LBL_PORTAL_AUTH_FAILED' => 'Аутентификация клиента не удалась',
  'LBL_PORTAL_AUTH_FAILED_TITLE' => 'Неверный клиент',
  'LBL_PORTAL_ERROR' => 'Ошибка',
  'LBL_PORTAL_INVALID_CREDS' => 'Предоставленное сочетание логин/пароль неверны, попробуйте еще раз.',
  'LBL_PORTAL_INVALID_CREDS_TITLE' => 'Неверные данные учетной записи',
  'LBL_PORTAL_INVALID_GRANT' => 'Ваш ключ неверный или больше недействительный. Пожалуйста, войдите в систему еще раз.',
  'LBL_PORTAL_INVALID_GRANT_TITLE' => 'Ключ недействителен',
  'LBL_PORTAL_INVALID_REQUEST' => 'Запрос неверный или содержит ошибки. Пожалуйста, обратитесь в техническую поддержку.',
  'LBL_PORTAL_INVALID_REQUEST_TITLE' => 'Неверный запрос',
  'LBL_PORTAL_LOADING' => 'Загрузка...',
  'LBL_PORTAL_LOGIN_FORGOTPASSWORD' => 'Свяжитель с администратором для восстановления пароля.',
  'LBL_PORTAL_LOGIN_PASSWORD' => 'Пароль',
  'LBL_PORTAL_LOGIN_USERNAME' => 'Имя пользователя',
  'LBL_PORTAL_METHOD_NOT_ALLOWED' => 'HTTP-метод не разрешен для этого ресурса. Обратитесь в техническую подержку.',
  'LBL_PORTAL_METHOD_NOT_ALLOWED_TITLE' => 'HTTP-ошибка: метод запрещен.',
  'LBL_PORTAL_MIN_MODULES' => 'Для использования этого приложения, Вам необходимо как минимум активировать модуль Обращения, Ошибки или База Знаний.',
  'LBL_PORTAL_NOT_ENABLED_MSG' => 'Извините, но на данный момент эта функция недоступна.',
  'LBL_PORTAL_OFFLINE' => 'К сожалению, на данный момент приложение недоступно. Обратитесь к администратору сайта.',
  'LBL_PORTAL_PAGE_NOT_AVAIL' => 'Страница недоступна',
  'LBL_PORTAL_PRECONDITION_MISSING' => 'Ошибка запроса, или неверный/ недостающий параметр. Обратитесь в техническую подержку.',
  'LBL_PORTAL_PRECONDITION_MISSING_TITLE' => 'HTTP-ошибка:',
  'LBL_PORTAL_REQUEST_TIMEOUT' => 'Время ожидания запроса истекло',
  'LBL_PORTAL_REQUEST_TIMEOUT_TITLE' => 'Истекло время ожидания запроса',
  'LBL_PORTAL_RESOURCE_UNAVAILABLE' => 'Ресурс недоступен.',
  'LBL_PORTAL_RESOURCE_UNAVAILABLE_TITLE' => 'Ошибка HTTP: нет разрешения',
  'LBL_PORTAL_ROUTE_ERROR' => 'Не удалось загрузить модуль. Попробуйте позже или обратитесь в техническую поддержку.',
  'LBL_PORTAL_SAVING' => 'Сохранение',
  'LBL_PORTAL_SEARCH' => 'Поиск по названию, номеру',
  'LBL_PORTAL_SEARCH_RESULTS_TITLE' => 'Показать результаты поиска для "{query}"',
  'LBL_PORTAL_SIGNUP' => 'Представитель службы работы с клиентами свяжется с Вами для настройки Вашей учетной записи.',
  'LBL_PORTAL_SIGNUP_COMPANY' => 'Компания',
  'LBL_PORTAL_SIGNUP_COUNTRY' => 'Страна',
  'LBL_PORTAL_SIGNUP_EMAIL' => 'E-mail',
  'LBL_PORTAL_SIGNUP_FIRST_NAME' => 'Имя',
  'LBL_PORTAL_SIGNUP_JOBTITLE' => 'Должность (необязательно)',
  'LBL_PORTAL_SIGNUP_LAST_NAME' => 'Фамилия',
  'LBL_PORTAL_SIGNUP_PHONE' => '(###) ###-#### (необязательно)',
  'LBL_PORTAL_SIGNUP_PROCESS' => 'Регистрация',
  'LBL_PORTAL_SIGNUP_STATE' => 'Область',
  'LBL_PORTAL_SIGNUP_TITLE' => 'Благодарим Вас за регистрацию!',
  'LBL_PORTAL_THEME' => 'Тема портала',
  'LBL_PORTAL_TOUR_RECORD_ADD_NOTE' => 'Нажмите здесь, чтобы добавить заметку к записи.',
  'LBL_PORTAL_TOUR_RECORD_DETAILS' => 'Режим просмотра записи позволяет Вам видеть подробную информацию по записи.',
  'LBL_PORTAL_TOUR_RECORD_NOTES' => 'Заметки позволяют Вам коллективно работать с другими пользователями портала и представителями службы поддержки.',
  'LBL_PORTAL_TOUR_RECORD_VIEW_NOTE' => 'Нажмите эти иконки для просмотра подробной информации по прикрепленной заметке.',
  'LBL_PORTAL_UNAUTHORIZED' => 'К сожалению, у Вас нет доступа к этому ресурсу.',
  'LBL_PORTAL_UNAUTHORIZED_TITLE' => 'Ошибка HTTP: нет доступа',
  'LBL_PORTAL_WELCOME_INFO' => 'Sugar Portal это приложение, которое дает возможность клиентам просматривать обращения, ошибки и информационный бюллетени и т.д. в реальном времени. Это интерфейс внешнего устройства Sugar, который может быть развернут на любом вебсайте. В следующих версиях планируются новые функции самообслуживания клиентов, такие как Управление Проектами и Форум.',
  'LBL_PORTAL_WELCOME_TITLE' => 'Добро пожаловать в Sugar Portal 5.1.0',
  'LBL_POSTAL_CODE' => 'Индекс:',
  'LBL_POWERED_BY_SUGARCRM' => 'Программное обеспечение предоставлено SugarCRM',
  'LBL_PRECONDITION_MISSING' => 'Ошибка запроса, или неверный/ недостающий параметр. Обратитесь в техническую подержку.',
  'LBL_PRECONDITION_MISSING_TITLE' => 'Ошибка:',
  'LBL_PREFERRED_LANGUAGE' => 'Язык по предпочтению:',
  'LBL_PREVIEW' => 'Предварительный просмотр',
  'LBL_PREVIEW_BWC_TOOLTIP' => 'Устаревшие модули не могут быть просмотрены',
  'LBL_PREVIEW_DISABLED_ATTACHMENT' => 'Предварительный просмотр невозможен: нет доступных данных',
  'LBL_PREVIEW_DISABLED_DELETED_OR_NO_ACCESS' => 'Предварительный просмотр невозможен: запись удалена или нет доступа к записи',
  'LBL_PREVIEW_DISABLED_NO_ACCESS' => 'Предварительный просмотр невозможен: нет доступа к записи',
  'LBL_PREVIEW_DISABLED_NO_RECORD' => 'Предварительный просмотр невозможен: нет доступных данных',
  'LBL_PREVIEW_DISABLED_SAME_RECORD' => 'Предварительный просмотр невозможен: в просмотре как текущая запись',
  'LBL_PREVIOUS_CURRENT_NEXT_TIMEPERIODS' => 'Предыдущий,Текущий,Следующий',
  'LBL_PREVIOUS_TIMEPERIOD' => 'Предыдущий временной период',
  'LBL_PRIMARY_ADDRESS' => 'Основной адрес:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Основной адрес - город:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Основной адрес - страна:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Основной адрес - индекс:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Основной адрес - область:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Основной адрес - улица:',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Основной адрес - улица 2:',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Основной адрес - улица 3:',
  'LBL_PRINT' => 'Печать',
  'LBL_PROCESSING_REQUEST' => 'Обработка...',
  'LBL_PRODUCTS' => 'Продукты',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Продукты коммерческого предложения',
  'LBL_PRODUCT_BUNDLES' => 'Связки продукта',
  'LBL_PRODUCT_TEMPLATES' => 'Шаблоны продукта',
  'LBL_PROFILE' => 'Профиль',
  'LBL_PROJECTS' => 'Проекты',
  'LBL_PROJECT_MINUS' => 'Удалить',
  'LBL_PROJECT_PLUS' => 'Добавить',
  'LBL_PROJECT_TASKS' => 'Проектные задания',
  'LBL_PROSPECTS' => 'Целевые контакты',
  'LBL_PRO_DELETE_CONFIRMATION' => 'Вы действительно хотите удалить эту запись?',
  'LBL_PRO_DISABLE' => 'Идет обновление',
  'LBL_PRO_DISABLE_CONFIRMATION' => 'Вы действительно хотите запретить использование этой записи?',
  'LBL_PRO_ENABLE' => 'Идет обновление',
  'LBL_PRO_ENABLE_CONFIRMATION' => 'Вы действительно хотите разрешить использование этой записи?',
  'LBL_QUARTER_TIMEPERIOD_FORMAT' => 'К{0} {1}',
  'LBL_QUERY_CHILD' => 'Действительный суб-запрос',
  'LBL_QUERY_ERROR' => 'Ошибка!',
  'LBL_QUERY_HASH' => 'Хэш SQL',
  'LBL_QUERY_VALID' => 'Действителен',
  'LBL_QUESTION_MARK' => '?',
  'LBL_QUICKEDIT_NODEFS_NAVIGATION' => 'Поиск...',
  'LBL_QUICK_CREATE_MENU' => 'Меню быстрого создания',
  'LBL_QUICK_CREATE_TITLE' => 'Быстрое создание',
  'LBL_QUOTES' => 'Коммерческие предложения',
  'LBL_QUOTES_SHIP_TO' => 'Доставить коммерческие предложения',
  'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
  'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Создать сделку из коммерческого предложения',
  'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Создать сделку из коммерческого предложения [Alt+O]',
  'LBL_RECENTLY_UPDATED' => 'Недавно обновлено',
  'LBL_RECENTS' => 'Недавние действия',
  'LBL_RECOMMENDED_INVITES' => 'Рекомендованные приглашения',
  'LBL_RECORD_BODY' => 'Визитная карточка',
  'LBL_RECORD_DELETED' => '(Запись удалена)',
  'LBL_RECORD_HEADER' => 'Запись-заголовок',
  'LBL_RECORD_NOT_FOUND' => 'Запись не найдена.',
  'LBL_RECORD_SAVED' => 'Запись сохранена',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Вы успешно создали эту запись, но у Вас нет доступа к этой записи.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Вы успешно создали {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a>.',
  'LBL_RECORD_SHARE_BUTTON' => 'Поделиться',
  'LBL_RECORD_SHOWMORE' => 'Показать больше',
  'LBL_REDIRECT_URL' => 'Перенаправление URL',
  'LBL_REFINE_LIST' => 'Уточнить список',
  'LBL_RELATED' => 'Относится к:',
  'LBL_RELATED_CAMPAIGN' => 'Связанные кампании',
  'LBL_RELATED_CONTACT' => 'Связанный контакт',
  'LBL_RELATED_INFORMATION' => 'Связанная информация',
  'LBL_RELATED_MODULE' => 'Связанный {{{this}}}',
  'LBL_RELATED_MODULE_PLURAL' => 'Связанные {{{this}}}',
  'LBL_RELATED_RECORDS' => 'Связанные записи',
  'LBL_RELATED_RECORD_NOT_FOUND' => 'Связанная запись не найдена.',
  'LBL_RELATIONSHIP' => 'Связь',
  'LBL_RELOAD_PAGE' => 'Пожалуйста, <a href="javascript: window.location.reload()">обновите страницу</a>, чтобы увидеть добавленный раздел Sugar..',
  'LBL_REMINDERS' => 'Напоминания',
  'LBL_REMINDERS_FINISHED' => 'Закончено!',
  'LBL_REMINDERS_NONE_FOUND' => 'Напоминания не найдено',
  'LBL_REMINDERS_OVERDUE' => 'Просрочено',
  'LBL_REMINDERS_UPCOMING' => 'Наступающие',
  'LBL_REMINDER_TITLE' => 'Напоминание',
  'LBL_REMOVE' => 'Удалить',
  'LBL_REMOVED_DASHLET' => 'Раздел удален',
  'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Убрать все поля',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Вы действительно хотите удалить этот раздел?',
  'LBL_REMOVE_DASHLET_ROW_CONFIRM' => 'Вы уверены, что хотите удалить строку?',
  'LBL_REMOVE_FROM_FAVORITES' => 'Удалить из Избранного',
  'LBL_REMOVE_MODULE_ENTRY' => 'Вы уверены, что хотите отключить интеграцию соединителя для этого модуля?',
  'LBL_REMOVE_PRIMARY_TEAM_ERROR' => 'Произошла ошибка при попытке удалить основной код команды [{0}] для [{1}] модуля с кодом [{2}]',
  'LBL_REMOVING_ATTACHMENT' => 'Удаление вложения...',
  'LBL_REMOVING_DASHLET' => 'Удаление раздела ...',
  'LBL_RENAME_PAGE' => 'Переименовать страницу',
  'LBL_REPLACE_BUTTON' => 'Заменить',
  'LBL_REPORTS_TO' => 'Руководитель',
  'LBL_REPORT_AUTO_REFRESH' => 'Автоматическое обновление',
  'LBL_REPORT_EDIT' => 'Редактировать выбранный отчёт',
  'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Количество',
  'LBL_REPORT_SELECT' => 'Выбрать отчёт',
  'LBL_REQUEST_PASSWORD' => 'Запросить пароль',
  'LBL_REQUEST_PROCESSED' => 'Готово',
  'LBL_REQUEST_TIMEOUT' => 'Время ожидания запроса истекло',
  'LBL_REQUEST_TIMEOUT_TITLE' => 'Время ожидания запроса',
  'LBL_REQUIRED_FIELD' => 'Обязательно',
  'LBL_REQUIRED_SYMBOL' => '*',
  'LBL_REQUIRED_TITLE' => 'Указывает необходимые поля',
  'LBL_RESET' => 'Сбросить',
  'LBL_RESET_DEFAULT_VIEW' => 'Восстановить вид по умолчанию',
  'LBL_RESET_DEFAULT_WIDTHS' => 'Восстановить ширину по умолчанию',
  'LBL_RESET_THEME_LNK' => 'Восстановить тему по умолчанию',
  'LBL_RESET_THEME_MODAL_INFO' => 'Вы собираетесь стереть Вашу персонализированную тему и заменить ее на тему по умолчанию.',
  'LBL_RESET_THEME_PROCESS' => 'Восстановление темы по умолчанию...',
  'LBL_RESOLVE_CONFLICT' => 'Вступает в конфликт с {{name}}',
  'LBL_RESOURCE_UNAVAILABLE' => 'Ресурс недоступен.',
  'LBL_RESOURCE_UNAVAILABLE_TITLE' => 'Запрещено',
  'LBL_RESTORE' => 'Сбросить до исходника',
  'LBL_RETRIEVING_PAGE' => 'Поиск страницы...',
  'LBL_ROLLBACK_BUTTON' => 'Откат',
  'LBL_ROUNDTRIPS' => 'Количество действий',
  'LBL_ROUTING_ACTIONS_COPY_MAIL' => 'Копировать почту',
  'LBL_ROUTING_ACTIONS_DELETE_BEAN' => 'Удалить объект Sugar',
  'LBL_ROUTING_ACTIONS_DELETE_FILE' => 'Удалить файл',
  'LBL_ROUTING_ACTIONS_DELETE_MAIL' => 'Удалить E-mail-сообщение',
  'LBL_ROUTING_ACTIONS_FORWARD' => 'Перенаправить сообщение',
  'LBL_ROUTING_ACTIONS_MARK_FLAGGED' => 'Отметить сообщение флажком',
  'LBL_ROUTING_ACTIONS_MARK_READ' => 'Отметить как прочитанное',
  'LBL_ROUTING_ACTIONS_MARK_UNREAD' => 'Отметить как непрочитанное',
  'LBL_ROUTING_ACTIONS_MOVE_MAIL' => 'Переместить сообщение',
  'LBL_ROUTING_ACTIONS_PEFORM' => 'Выполнить следующие действия',
  'LBL_ROUTING_ACTIONS_REPLY' => 'Ответить на сообщение',
  'LBL_ROUTING_ADD_RULE' => 'Добавить правило',
  'LBL_ROUTING_ALL' => 'По крайней мере',
  'LBL_ROUTING_ANY' => 'Любой',
  'LBL_ROUTING_BREAK' => '-',
  'LBL_ROUTING_BUTTON_CANCEL' => 'Отмена',
  'LBL_ROUTING_BUTTON_SAVE' => 'Сохранить правило',
  'LBL_ROUTING_CHECK_RULE' => 'Обнаружена ошибка:',
  'LBL_ROUTING_CHECK_RULE_DESC' => 'Пожалуйста, проверьте отмеченные поля.',
  'LBL_ROUTING_CONFIRM_DELETE' => 'Вы уверены, что хотите удалить это правило? Это действие нельзя отменить.',
  'LBL_ROUTING_FLAGGED' => 'отмечено флажком',
  'LBL_ROUTING_FORM_DESC' => 'Сохраненные правила сразу становятся активными',
  'LBL_ROUTING_FW' => 'FW:',
  'LBL_ROUTING_LIST_TITLE' => 'Правила',
  'LBL_ROUTING_MATCH' => 'Если',
  'LBL_ROUTING_MATCH_2' => 'выполнены из следующих условий:',
  'LBL_ROUTING_MATCH_CC_ADDR' => 'Копия:',
  'LBL_ROUTING_MATCH_DESCRIPTION' => 'Основной контент',
  'LBL_ROUTING_MATCH_FROM_ADDR' => 'От',
  'LBL_ROUTING_MATCH_NAME' => 'Тема',
  'LBL_ROUTING_MATCH_PRIORITY_HIGH' => 'Высокий приоритет',
  'LBL_ROUTING_MATCH_PRIORITY_LOW' => 'Низкий приоритет',
  'LBL_ROUTING_MATCH_PRIORITY_NORMAL' => 'Нормальный приоритет',
  'LBL_ROUTING_MATCH_TO_ADDR' => 'Кому',
  'LBL_ROUTING_MATCH_TYPE_MATCH' => 'Содержит',
  'LBL_ROUTING_MATCH_TYPE_NOT_MATCH' => 'Не содержит',
  'LBL_ROUTING_NAME' => 'Название правила',
  'LBL_ROUTING_NEW_NAME' => 'Новое правило',
  'LBL_ROUTING_ONE_MOMENT' => 'Пожалуйста, подождите...',
  'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS' => 'Исходное сообщение следует.',
  'LBL_ROUTING_RE' => 'RE:',
  'LBL_ROUTING_SAVING_RULE' => 'Сохранение правила',
  'LBL_ROUTING_SUB_DESC' => 'Отмеченные правила активны. Нажмите на название для редактирования.',
  'LBL_ROUTING_TO' => 'кому',
  'LBL_ROUTING_TO_ADDRESS' => 'на адрес',
  'LBL_ROUTING_WITH_TEMPLATE' => 'с шаблоном',
  'LBL_RSS_FEED' => 'RSS лента',
  'LBL_RSS_FEED_AUTHOR' => 'Автор:',
  'LBL_RSS_FEED_DASHLET' => 'RSS-канал',
  'LBL_RSS_FEED_DASHLET_DESCRIPTION' => 'Будьте в курсе, добавив внешний RSS или Blog Feed.',
  'LBL_RSS_FEED_ENTRIES_COUNT' => 'Количество записей для отображения',
  'LBL_RSS_FEED_URL' => 'URL-адрес канала',
  'LBL_RSS_RECORDS_FOUND' => 'найдено записей',
  'LBL_RUN_COUNT' => 'Полный запрос',
  'LBL_SAVED' => 'Готово',
  'LBL_SAVED_LAYOUT' => 'Макет сохранен.',
  'LBL_SAVED_SEARCH_ERROR' => 'Пожалуйста, введите имя для этого просмотра.',
  'LBL_SAVED_SEARCH_SHORTCUT' => 'Сохраненные условия поиска',
  'LBL_SAVED_VIEWS' => 'Сохраненные просмотры',
  'LBL_SAVE_AND_CONTINUE' => 'Сохранить и продолжить',
  'LBL_SAVE_AND_CREATE_ANOTHER' => 'Сохранить и создать новое',
  'LBL_SAVE_AND_DEPLOY_BTN' => 'Сохранить и применить',
  'LBL_SAVE_AND_SEND_INVITES_BUTTON' => 'Сохранить и отправить приглашения',
  'LBL_SAVE_AND_VIEW' => 'Сохранить и просмотреть',
  'LBL_SAVE_AS_BUTTON_KEY' => 'A',
  'LBL_SAVE_AS_BUTTON_LABEL' => 'Сохранить как',
  'LBL_SAVE_AS_BUTTON_TITLE' => 'Сохранить как [Alt+A]',
  'LBL_SAVE_BUTTON_KEY' => 'S',
  'LBL_SAVE_BUTTON_LABEL' => 'Сохранить',
  'LBL_SAVE_BUTTON_TITLE' => 'Сохранить [Alt+S]',
  'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
  'LBL_SAVE_NEW_BUTTON_LABEL' => 'Сохранить и создать новый',
  'LBL_SAVE_NEW_BUTTON_TITLE' => 'Сохранить и создать новый [Alt+V]',
  'LBL_SAVE_OBJECT' => 'Сохранить {0}',
  'LBL_SAVE_THEME_PROCESS' => 'Сохранение темы...',
  'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Сохранить из Интернета в форму Предварительных контактов',
  'LBL_SAVING' => 'Сохранение',
  'LBL_SAVING_LAYOUT' => 'Сохранение макета...',
  'LBL_SAVING_PAGE_TITLE' => 'Сохранение заголовка страницы...',
  'LBL_SCHEDULE_CALL' => 'Назначить звонок',
  'LBL_SCHEDULE_MEETING' => 'Назначить встречу',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Назначить встречу',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Назначить встречу',
  'LBL_SEARCH' => 'Поиск',
  'LBL_SEARCHFORM' => 'Форма поиска',
  'LBL_SEARCHING' => 'Поиск...',
  'LBL_SEARCH_ALL' => 'Искать все {{{this}}}...',
  'LBL_SEARCH_ALL_MODULES' => 'Искать все',
  'LBL_SEARCH_ALL_RECORDS' => 'Поиск по всем записям...',
  'LBL_SEARCH_AND_SELECT' => 'Найти и Выбрать {{module}}',
  'LBL_SEARCH_BUTTON_KEY' => 'Q',
  'LBL_SEARCH_BUTTON_LABEL' => 'Найти',
  'LBL_SEARCH_BUTTON_TITLE' => 'Поиск [Alt+Q]',
  'LBL_SEARCH_BY' => 'Поиск по',
  'LBL_SEARCH_CHARTS' => 'Графики',
  'LBL_SEARCH_CRITERIA' => 'Критерии поиска',
  'LBL_SEARCH_DROPDOWN_NO' => 'Нет',
  'LBL_SEARCH_DROPDOWN_YES' => 'Да',
  'LBL_SEARCH_EXTERNAL_API' => 'Файл на внешнем источнике',
  'LBL_SEARCH_FOR' => 'Найти',
  'LBL_SEARCH_FOR_MORE' => 'Найти больше...',
  'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Закрыть',
  'LBL_SEARCH_HELP_TEXT' => 'Множественное выделение<br />Нажмите на значении, чтобы выделить атрибут.<br />Используйте Ctrl+клик для множественного выделения. Пользователи Mac - CMD+клик.<br />Для выделения всех значение между двумя атрибутами, нажмите на первом значении, а затем Shift+клик на последнем значении.<br /><br />Расширенные опции поиска и расположения<br /><br />Используя опцию "Сохранённые условия поиска и внешний вид" Вы можете сохранить набор параметров поиска и/или индивидуальный внешний вид списка для того, чтобы в дальнейшем быстрее получать желаемые результаты. Вы можете сохранять неограниченное количество индивидуальных условий поиска и внешнего вида. Все сохраненные условия поиска отображаются по имени в списке "Сохраненные условия поиска"; последнее сохраненное условие поиска отображается вверху списка.<br /><br />Для настройки индивидуального внешнего вида списка, используйте отметки "Показать столбцы" и "Скрыть столбцы" чтобы выбрать, какие поля отображать в результатах поиска. Например, при просмотре результатов поиска Вы можете отображать или скрывать такие поля как имя записи, назначенный пользователь, назначенная команда. Для добавления столбца в просмотр списка, выберите поле из списка "Скрыть столбцы" и используйте стрелку влево, чтобы переместить его в список "Показать столбцы". Чтобы удалить столбец из просмотра списка, выберите его в списке "Показать столбцы" и используйте стрелку вправо, чтобы переместить его в список "Скрыть столбцы".<br /><br />Если вы сохраните настройки, Вы сможете загрузить их в любое время для индивидуализированного отображения результатов поиска.<br /><br />Для сохранения и изменения результатов поиска и/или внешнего вида:<br /><br />1. Введите имя для сохранения результатов поиска в поле "Сохранить этот поиск как" и нажмите "Сохранить". Это имя теперь отобразится в списке сохранённых результатов поиска рядом с кнопкой "Очистить".<br />2. Для просмотра сохранённого результата поиска выберите его из списка сохранённых результатов поиска. Результаты поиска отобразятся при просмотре списка.<br />3. Для обновления свойств сохранённого результата поиска, выберите сохранённый результат поиска из списка, введите новые критерии поиска и/или опции отображения в поле Расширенный поиск и нажмите "Обновить" рядом с кнопкой "Изменить данный поиск".<br />4. Чтобы удалить сохранённый результат поиска, выберите его в списке сохранённых результатов, нажмите "Удалить" рядом с "Изменить данный поиск" и затем "ОК" для подтверждения выбора. <br /><br />Советы<br /><br />Используя % как подстановочный оператор, Вы можете расширить поиск. Например, вместо поиска по запросу "Яблоки" вы можете использовать запрос "Яблоки%" и таким образом получить все результаты, содержащие и само слово "Яблоки", и другие символы.',
  'LBL_SEARCH_HELP_TITLE' => 'Помощь по поиску',
  'LBL_SEARCH_LOAD_MORE' => 'ЗАГРУЗИТЕ БОЛЬШЕ',
  'LBL_SEARCH_MODULES' => 'Модули',
  'LBL_SEARCH_MORE' => 'больше',
  'LBL_SEARCH_NO_RESULTS' => 'Не найдено результатов',
  'LBL_SEARCH_PARENT_RELATED_ITEM' => 'Поиск ...',
  'LBL_SEARCH_POPULATE_ONLY' => 'Производит поиск, используя вышеуказанные запросы',
  'LBL_SEARCH_REPORT_CHARTS' => 'Графики отчетов',
  'LBL_SEARCH_RESULTS' => 'Результаты поиска',
  'LBL_SEARCH_RESULTS_FOUND' => 'Найденные результаты поиска',
  'LBL_SEARCH_RESULTS_TIME' => 'ms.',
  'LBL_SEARCH_SELECT' => 'Выбрать...',
  'LBL_SEARCH_SELECT_MODULE' => 'Выбрать {{module}}...',
  'LBL_SEARCH_TIPS' => 'Нажмите кнопку поиска или клавишу enter, чтобы получить точное соответствие для них',
  'LBL_SEARCH_TIPS_2' => 'Нажмите кнопку поиска или клавишу enter, чтобы получить точное соответствие для',
  'LBL_SEARCH_TOOLS' => 'Инструментарий',
  'LBL_SEARCH_UNAVAILABLE' => 'Поиск недоступен, попробуйте позже',
  'LBL_SECONDS' => 'Секунд активно',
  'LBL_SEC_AVG' => 'Секунд в среднем',
  'LBL_SEC_TOTAL' => 'Итого секунд',
  'LBL_SEE_ALL' => 'Показать все',
  'LBL_SELECT_ACTION_LABEL' => 'Выбрать действие',
  'LBL_SELECT_ALL_TITLE' => 'Выбрать все',
  'LBL_SELECT_APPEND_TEAMS' => 'Присоединить Команду(ы)',
  'LBL_SELECT_APPEND_VALUES' => 'Добавить значение(я)',
  'LBL_SELECT_BUTTON_KEY' => 'T',
  'LBL_SELECT_BUTTON_LABEL' => 'Выбрать',
  'LBL_SELECT_BUTTON_TITLE' => 'Выбрать [Alt+T]',
  'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
  'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Выбрать Контакт',
  'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Выбрать Контакт [Alt+T]',
  'LBL_SELECT_MODULE' => 'Выбор модуля:',
  'LBL_SELECT_PHOTO' => 'Выбрать фото',
  'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Выбрать из отчетов',
  'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Выбрать отчеты',
  'LBL_SELECT_TEAMS_KEY' => 'Z',
  'LBL_SELECT_TEAMS_LABEL' => 'Добавить Команду (-ы)',
  'LBL_SELECT_TEAMS_TITLE' => 'Добавить Команду (-ы) [Alt+Z]',
  'LBL_SELECT_THIS_ROW_TITLE' => 'Выбрать эту строку',
  'LBL_SELECT_USER_BUTTON_KEY' => 'U',
  'LBL_SELECT_USER_BUTTON_LABEL' => 'Выбрать пользователя',
  'LBL_SELECT_USER_BUTTON_TITLE' => 'Выбрать пользователя [Alt+U]',
  'LBL_SEND_INVITE' => 'Отправить приглашение',
  'LBL_SERVER_MEMORY_BYTES' => 'байты',
  'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Использование: - модуль: {0} - действие: {1}',
  'LBL_SERVER_MEMORY_USAGE' => 'Использование памяти сервера: {0} ({1})',
  'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Максимальное использование памяти сервера: {0} ({1})',
  'LBL_SERVER_RESPONSE_RESOURCES' => 'Ресурсы, использованные для создания данной страницы (запросы, файлы)',
  'LBL_SERVER_RESPONSE_TIME' => 'Время ответа сервера:',
  'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'секунд.',
  'LBL_SESSION_ID' => 'Id сессии',
  'LBL_SETUP_COMPLETE_INFO' => 'Начать использовать Sugar!',
  'LBL_SETUP_PROGRESS' => 'Процесс выполнения настроек',
  'LBL_SETUP_USER_INFO' => 'Настроить пользовательскую информацию',
  'LBL_SETUP_USER_LOCALE_INFO' => 'Установить часовой пояс, дату, и форматы',
  'LBL_SET_FONTSIZE' => 'Размер шрифта',
  'LBL_SET_NEW_PASSWORD' => 'Введите пароль',
  'LBL_SHARE_BUTTON_KEY' => 'r',
  'LBL_SHARE_BUTTON_LABEL' => 'Поделиться',
  'LBL_SHARE_BUTTON_TITLE' => 'Поделиться',
  'LBL_SHARE_COMPANY' => 'Компания',
  'LBL_SHARE_LINKABLE' => 'Связываемый',
  'LBL_SHARE_PRIVATE' => 'Приватная',
  'LBL_SHARE_PUBLIC' => 'Публичный',
  'LBL_SHIPPING_ADDRESS' => 'Отгрузочный адрес',
  'LBL_SHIPPING_STREET' => 'Улица:',
  'LBL_SHIP_TO_ACCOUNT' => 'Отгрузить Контрагенту',
  'LBL_SHIP_TO_CONTACT' => 'Отгрузить Контакту',
  'LBL_SHORTCUTS' => 'Ярлыки',
  'LBL_SHORTCUT_ALERT_CANCEL' => 'Отмена',
  'LBL_SHORTCUT_ALERT_CONFIRM' => 'Подтвердить',
  'LBL_SHORTCUT_CANCEL_INLINE_EDIT' => 'Выйти из режима встроенного редактирования без сохранения',
  'LBL_SHORTCUT_CLOSE_DRAWER' => 'Закрыть составитель документа',
  'LBL_SHORTCUT_COPY_RECORD' => 'Копировать текущую запись',
  'LBL_SHORTCUT_CREATE_RECORD' => 'Создать новую запись',
  'LBL_SHORTCUT_EDIT_SELECTED' => 'Редактировать выбранную запись в списке',
  'LBL_SHORTCUT_FAVORITE_RECORD' => 'Отметить запись как избранную',
  'LBL_SHORTCUT_FILTER_ADD' => 'Добавьте дополнительные критерии для фильтра',
  'LBL_SHORTCUT_FILTER_CLOSE' => 'Закрыть фильтр',
  'LBL_SHORTCUT_FILTER_CREATE' => 'Создать новый список фильтра',
  'LBL_SHORTCUT_FILTER_DELETE' => 'Удалить фильтр',
  'LBL_SHORTCUT_FILTER_EDIT' => 'Редактировать текущий список фильтра',
  'LBL_SHORTCUT_FILTER_REMOVE' => 'Удалите последний критерий из фильтра',
  'LBL_SHORTCUT_FILTER_RESET' => 'Сбросить фильтр',
  'LBL_SHORTCUT_FILTER_SAVE' => 'Сохранить фильтр',
  'LBL_SHORTCUT_FILTER_SEARCH' => 'Обратите внимание на поле списка фильтра',
  'LBL_SHORTCUT_FILTER_SHOW' => 'Открыть меню списка фильтров',
  'LBL_SHORTCUT_FOLLOW_RECORD' => 'Следить за записью',
  'LBL_SHORTCUT_FUNCTION' => 'Функция',
  'LBL_SHORTCUT_HELP' => 'Показать страницу справки быстрых клавиш',
  'LBL_SHORTCUT_KEYS_HELP_ABOUT' => 'SugarCRM позволяет опытным пользователям быстро выполнять определенные задачи с помощью горячих клавиш для повышения производительности. Списки справа описывают имеющиеся клавиши вместе с объяснениями и действиями, которые они выполняют.',
  'LBL_SHORTCUT_KEY_KEY' => 'Ключ',
  'LBL_SHORTCUT_MARK_SELECTED' => 'Отметить запись как выбранную',
  'LBL_SHORTCUT_MASS_UPDATE_ADD' => 'Добавить строку',
  'LBL_SHORTCUT_MASS_UPDATE_CANCEL' => 'Закрыть массовое обновление',
  'LBL_SHORTCUT_MASS_UPDATE_REMOVE' => 'Удалить строку',
  'LBL_SHORTCUT_MASS_UPDATE_SAVE' => 'Обновить записи',
  'LBL_SHORTCUT_NAVIGATE_DOWN' => 'Выберите следующую запись в списке',
  'LBL_SHORTCUT_NAVIGATE_UP' => 'Выберите предыдущую запись в списке',
  'LBL_SHORTCUT_OPEN' => 'Открыть выбранную запись в списке',
  'LBL_SHORTCUT_OPEN_MASS_ACTION' => 'Открыть массовые действия выпадающего меню',
  'LBL_SHORTCUT_OPEN_MORE_ACTION' => 'Открыть основное действие выпадающего меню',
  'LBL_SHORTCUT_PREVIEW_SELECTED' => 'Предварительный просмотр записи',
  'LBL_SHORTCUT_QUICK_CREATE' => 'Переключить меню быстрого создания',
  'LBL_SHORTCUT_RECORD_CANCEL' => 'Очистить любые изменения записи',
  'LBL_SHORTCUT_RECORD_DELETE' => 'Удалить запись',
  'LBL_SHORTCUT_RECORD_EDIT' => 'Редактировать запись',
  'LBL_SHORTCUT_RECORD_NEXT' => 'Открыть следующую запись',
  'LBL_SHORTCUT_RECORD_PREVIOUS' => 'Открыть предыдущую запись',
  'LBL_SHORTCUT_RECORD_SAVE' => 'Сохранить запись',
  'LBL_SHORTCUT_SCROLL_LEFT' => 'Прокрутить список слева',
  'LBL_SHORTCUT_SCROLL_RIGHT' => 'Прокрутить список справа',
  'LBL_SHORTCUT_SEARCH' => 'Обратите внимание на поле глобального поиска',
  'LBL_SHORTCUT_SELECT_ALL' => 'Выбрать все',
  'LBL_SHORTCUT_SIDEBAR_TOGGLE' => 'Переключить боковую панель',
  'LBL_SHOW' => 'Показать',
  'LBL_SHOW_LESS' => 'Показать меньше',
  'LBL_SHOW_LESS_RECENTS' => 'Менее свежие...',
  'LBL_SHOW_MORE' => 'Показать больше',
  'LBL_SHOW_MORE_GENERIC' => 'Больше {{name}}...',
  'LBL_SHOW_MORE_MODULE' => 'Больше {{{module}}}...',
  'LBL_SHOW_MORE_RECENTS' => 'Более свежие...',
  'LBL_SIGNUP_BUTTON_LABEL' => 'Зарегистрироваться',
  'LBL_SIXMONTHS' => '6 месяцев',
  'LBL_SMS_BUTTON' => 'SMS',
  'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
  'LBL_SMTPTYPE_GMAIL' => 'Gmail',
  'LBL_SMTPTYPE_OTHER' => 'Другой',
  'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
  'LBL_SORT' => 'Сортировка',
  'LBL_SQL_TEXT' => 'SQL текст',
  'LBL_SQS_INDICATOR' => '',
  'LBL_START_AND_END_DATE' => '{{start}} - {{end}} ({{duration}})',
  'LBL_START_AND_END_DATE_DETAIL_VIEW' => 'Дата начала и дата окончания',
  'LBL_START_AND_END_DATE_SAME_DAY' => '{{date}} {{start}} - {{end}} ({{duration}})',
  'LBL_START_AND_END_DATE_TO' => 'до',
  'LBL_START_BUTTON_LABEL' => 'Начало',
  'LBL_START_BUTTON_TITLE' => 'Начало',
  'LBL_STATE' => 'Область',
  'LBL_STATUS' => 'Статус:',
  'LBL_STATUS_UPDATED' => 'Ваш статус для этого события был обновлён!',
  'LBL_STREAM_NO_RECORDS' => 'В данный момент у этой записи нет заметок. Пожалуйста, добавьте заметку, нажав на кнопку "добавить заметку".',
  'LBL_STREET' => 'Улица',
  'LBL_SUBJECT' => 'Тема',
  'LBL_SUBMIT_BUTTON_LABEL' => 'Отправить',
  'LBL_SUBSCRIBE' => 'Подписаться',
  'LBL_SUCCESS' => 'Успешно',
  'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2016 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> Все права защищены.<br />SugarCRM является зарегистрированной торговой маркой SugarCRM, Inc. Названия остальных компаний и продуктов могут являться торговым марками соответствующих компаний, с которыми они связаны.',
  'LBL_SUPPORT' => 'Поддержка',
  'LBL_SWITCH_INSTANCE' => 'Переключиться на эту систему',
  'LBL_SYNC' => 'Синхронизация',
  'LBL_SYNCED_RECURRING_MSG' => 'Вы не можете редактировать эту запись, поскольку изначально она была синхронизирована из внешнего клиента.',
  'LBL_SYSTEM_DEFAULT_OUTBOUND_EMAIL_CONFIGURATION' => 'системные настройки по умолчанию',
  'LBL_TABGROUP_HOME' => 'Главная',
  'LBL_TAG_FETCH_ERROR' => 'Произошла ошибка при получении тегов.',
  'LBL_TAG_NEW_TAG' => '(Новый тег)',
  'LBL_TASKS' => 'Задачи',
  'LBL_TASKS_SUBPANEL_TITLE' => 'Задачи',
  'LBL_TEAM' => 'Команда:',
  'LBL_TEAMS' => 'Команды',
  'LBL_TEAMS_LINK' => 'Команды',
  'LBL_TEAM_ADD' => 'Добавить команду',
  'LBL_TEAM_ID' => 'Команда:',
  'LBL_TEAM_PRIMARY' => 'Установить как основную команду',
  'LBL_TEAM_REMOVE' => 'Убрать команду',
  'LBL_TEAM_SELECTED_TITLE' => 'Выбрана команда',
  'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Нажмите, чтобы сделать эту команду основной',
  'LBL_TEAM_SET' => 'Установка команды',
  'LBL_TEAM_SET_ID' => 'Установка команды',
  'LBL_TEXTAREA_LESS' => 'меньше',
  'LBL_TEXTAREA_MORE' => 'больше',
  'LBL_THEME' => 'Тема:',
  'LBL_THEME_COLOR' => 'Цвет',
  'LBL_THEME_FONT' => 'Шрифт',
  'LBL_THEME_PICKER' => 'Стиль страницы',
  'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Внимание: Internet Explorer 6 не поддерживается выбранной темой. Нажмите "ОК", если всё равно хотите продолжите либо "Отмена", чтобы выбрать другую тему.',
  'LBL_THEME_PREVIEW' => 'Предварительный просмотр темы',
  'LBL_THOUSANDS_SYMBOL' => 'K',
  'LBL_THREE_MONTHS' => '3 месяца',
  'LBL_TIMEZONE_DIFFERENT_LINK' => 'Установить Ваш часовой пояс.',
  'LBL_TIME_AGO_DAY' => 'вчера',
  'LBL_TIME_AGO_DAYS' => '{{this}} дней назад',
  'LBL_TIME_AGO_HOUR' => 'около часа назад',
  'LBL_TIME_AGO_HOURS' => '{{this}} часов назад',
  'LBL_TIME_AGO_MINUTE' => 'около минуты назад',
  'LBL_TIME_AGO_MINUTES' => '{{this}} минут назад',
  'LBL_TIME_AGO_NOW' => 'только что',
  'LBL_TIME_AGO_SECONDS' => 'меньше минуты назад',
  'LBL_TIME_AGO_YEAR' => 'большое года назад',
  'LBL_TIME_RELATIVE' => 'Опубликовано {{relativetime}} {{date}} в {{time}}',
  'LBL_TIME_RELATIVE_ACTIVITIES' => '{{relativetime}} {{date}} в {{time}}',
  'LBL_TIME_UNTIL_DAY' => 'завтра',
  'LBL_TIME_UNTIL_DAYS' => 'через {{this}} дней',
  'LBL_TIME_UNTIL_HOUR' => 'примерно через час',
  'LBL_TIME_UNTIL_HOURS' => 'через {{this}} часов',
  'LBL_TIME_UNTIL_MINUTE' => 'примерно через 1 минуту',
  'LBL_TIME_UNTIL_MINUTES' => 'через {{this}} минут',
  'LBL_TIME_UNTIL_SECONDS' => 'менее, чем через минуту',
  'LBL_TIME_UNTIL_YEAR' => 'более, чем через год',
  'LBL_TODAY' => 'сегодня',
  'LBL_TODAYS_ACTIVITIES' => 'Сегодняшняя деятельность',
  'LBL_TOGGLE_DRAWER' => 'Вкл/выкл составитель документа',
  'LBL_TOGGLE_VISIBILITY' => 'Вкл/выкл видимость',
  'LBL_TOMORROW' => 'завтра',
  'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Выводит топ 10 продуктов с показателем доходности в кружковой диаграмме.',
  'LBL_TOP10_OPPORTUNITIES_DEFAULT_DATASET' => 'Набор данных по умолчанию',
  'LBL_TOP10_OPPORTUNITIES_FILTER_DURATIONS' => 'Фильтр по дате по умолчанию',
  'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Мой доход по продуктам',
  'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => 'Доход по продуктам моей команды',
  'LBL_TOUR' => 'Обзор действий',
  'LBL_TOUR_ADD' => 'Создать запись здесь',
  'LBL_TOUR_AVATAR' => 'Получить больше информации о системе или выйти',
  'LBL_TOUR_BACK' => 'Назад',
  'LBL_TOUR_BTN_DONE' => 'Готово',
  'LBL_TOUR_CALENDAR_URL_1' => 'Вы добавляете события из Вашего календаря в SugarCRM в сторонние приложения, такие как Microsoft Outlook или Exchange? Если да, то для Вас есть новый URL. Этот новый, более безопасный URL включает персональный ключ, который предотвратит неавторизованную публикацию Вашего календаря.',
  'LBL_TOUR_CALENDAR_URL_2' => 'Получите Ваш новый URL для общего календаря.',
  'LBL_TOUR_CLOSE' => 'Закрыть',
  'LBL_TOUR_CUBE' => 'Доступ к Дэшбордам и Ленте Мероприятий',
  'LBL_TOUR_DONE' => 'Готово!',
  'LBL_TOUR_END_TOUR' => 'Закончить обзор',
  'LBL_TOUR_FEATURES_670' => '<ul style=""><li class="icon-ok">Улучшенный вид – с новой современной темой.</li><li class="icon-ok">Улучшенный модуль Прогнозов – с более интуитивным пользовательским интерфейсом и новой визуализацией данных</li></ul>',
  'LBL_TOUR_FORECASTS_CHART' => 'Просмотреть распределение прогноза',
  'LBL_TOUR_FORECASTS_COMMITS' => 'Нажмите, чтобы просмотреть прошлые подтверждения',
  'LBL_TOUR_FORECASTS_INLINEEDIT' => 'Нажмите, чтобы начать внутристрочное редактирование данных',
  'LBL_TOUR_FORECASTS_PROGRESS' => 'Просмотреть отдаленность до квоты',
  'LBL_TOUR_FORECASTS_TIMEPERIODS' => 'Выберите временной период, чтобы вывести соответствующий прогноз',
  'LBL_TOUR_FORECAST_INTRO' => 'Управление процессом продаж и прогнозом.',
  'LBL_TOUR_FULL_TOUR' => 'Полный обзор',
  'LBL_TOUR_INTRO' => 'Добро пожаловать в Sugar 7. Используйте стрелки ниже для быстрого обзора.',
  'LBL_TOUR_LIST_ACTIVTYSTREAMLIST_TOGGLE' => 'Выбрать, чтобы увидеть мероприятия или список записей',
  'LBL_TOUR_LIST_FILTER1' => 'Панель фильтров позволяет производить поиск по модулю',
  'LBL_TOUR_LIST_FILTER2' => 'Выбрать предустановленный фильтр или создать новый',
  'LBL_TOUR_LIST_FILTER_PREVIEW' => 'Выбрать для редактирования строки или просмотр деталей',
  'LBL_TOUR_LIST_FILTER_SEARCH' => 'Вписать здесь для поиска по названию',
  'LBL_TOUR_LIST_INTRO' => 'Просмотреть список записей и применить к ним действия.',
  'LBL_TOUR_LIST_INT_TOGGLE' => 'Нажмите, чтобы закрыть или открыть Разведывательную панель',
  'LBL_TOUR_MODULE' => 'Обзор страницы',
  'LBL_TOUR_NAV_BAR' => 'Доступ ко всем модулям и выполнение действий в меню Навигации',
  'LBL_TOUR_NEXT' => 'Дальше',
  'LBL_TOUR_NOTIFICATIONS' => 'Нажмите, чтобы видеть Уведомления',
  'LBL_TOUR_OVERVIEW' => 'Просмотр страницы',
  'LBL_TOUR_RECORD_ACTIONS' => 'Применить действие к записи',
  'LBL_TOUR_RECORD_DASHBOARDACTIONS' => 'Создать новые группы дашлетов',
  'LBL_TOUR_RECORD_DASHBOARDNAME' => 'Назначить пользователя группе дашлетов',
  'LBL_TOUR_RECORD_DASHLETCOG' => 'Выбрать для удаления дашлета или изменения настроек',
  'LBL_TOUR_RECORD_INLINEEDIT' => 'Название записи может быть обновлено на месте',
  'LBL_TOUR_RECORD_INLINEEDITRECORD' => 'Нажмите, чтобы редактировать каждое поле внутристрочно',
  'LBL_TOUR_RECORD_INTRO' => 'Просмотреть детали по записи и увидеть все данные, связанные с ней.',
  'LBL_TOUR_RECORD_SHOWMORE' => 'Нажмите, чтобы увидеть больше данных для записи',
  'LBL_TOUR_RECORD_STATUS' => 'Найти статус уровня записи здесь',
  'LBL_TOUR_RECORD_TOGGLEACTIVITIES' => 'Выберите, чтобы увидеть мероприятия или связанные записи',
  'LBL_TOUR_REFERENCE_1' => 'Вы всегда можете ссылаться на',
  'LBL_TOUR_REFERENCE_2' => 'при помощи ссылки "Поддержка" под меню профиля.',
  'LBL_TOUR_REVISIT' => 'Нажмите здесь, чтобы показать тур в любое время.',
  'LBL_TOUR_SCREEN_1_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Настройте параметры прогнозирования</li><li class="icon-ok">Легко отслеживайте запланированные продажи и состояние воронки продаж</li><li class="icon-ok">Прогноз строится на запланированных продажах Вашей команды продаж</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen1-thumb.png" width="220" id="thumbnail_1" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_1_TITLE_670' => 'Улучшенная функциональность прогнозирования в Sugar',
  'LBL_TOUR_SCREEN_2_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Выберите дату начала финансового года</li><li class="icon-ok">Настройте временные периоды (ежегодно или ежеквартально)</li><li class="icon-ok">Решите, сколько потребуется прошлых и будущих временных периодов для вывода в листе прогнозов</li><li class="icon-ok">Выберите диапазоны прогноза, чтобы отметить Продажи, как Заключить Продажу, Исключить Продажу или Внести в Потенциальные</li><li class="icon-ok">Выберите сценарии прогнозирования для определения Вероятного сценария, Оптимистичного или Пессимистичного</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen2-thumb.png" width="220" id="thumbnail_2" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_2_TITLE_670' => 'Настройте параметры прогнозирования',
  'LBL_TOUR_SCREEN_3_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Выберите временной период для просмотра прогноза</li><li class="icon-ok">Просмотреть листы прогнозов участников Вашей команды продаж и предоставить скорректированные прогнозы</li><li class="icon-ok">Увидеть оповещение по листу прогнозов, когда участник команды продаж подтверждает новый прогноз</li><li class="icon-ok">Сохранить лист прогноза как черновую версию или подтвердить прогноз у руководителя</li><li class="icon-ok">Просмотреть историю прошлых подтверждений</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen3-thumb.png" width="220" id="thumbnail_3" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_3_TITLE_670' => 'Управление Запланированными Продажами Вашей команды продаж',
  'LBL_TOUR_SCREEN_4_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Просмотреть график Парето для анализа воронки по всем прогнозам участников Вашей команды продаж</li><li class="icon-ok">Выберите для визуализации запланированные продажи согласно вероятному, оптимистичному или пессимистичному прогнозу</li><li class="icon-ok">Просмотреть запланированные продажи и вероятность их закрытия</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen4-thumb.png" width="220" id="thumbnail_4" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_4_TITLE_670' => 'Управление Запланированными Продажами Вашей команды продаж',
  'LBL_TOUR_SCREEN_5_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Выберите временной период для Вашего прогноза</li><li class="icon-ok">Просмотр и внутристрочное редактирование сумм и Вероятности Успешной продажи для быстрого а-что-если анализа</li><li class="icon-ok">Сохранить лист прогноза как черновую версию или подтвердить прогноз у руководителя</li><li class="icon-ok">Просмотреть историю прошлых подтверждений</li><li class="icon-ok">Подтвердить прогноз у руководителя и просмотреть историю прошлых подтверждений</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen5-thumb.png" width="220" id="thumbnail_5" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_5_TITLE_670' => 'Управление собственными Запланированными продажами',
  'LBL_TOUR_SCREEN_6_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Просмотр графика Парето для анализа воронки согласно временному периоду для Ваших продаж</li><li class="icon-ok">Выберите визуализацию распределения по воронке согласно стадии продаж или Вероятность Успешной продажи</li><li class="icon-ok">Просмотр запланированных продаж и вероятность заключения успешной продажи</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen6-thumb.png" width="220" id="thumbnail_6" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_6_TITLE_670' => 'Управление собственными Запланированными продажами',
  'LBL_TOUR_SEARCH' => 'Выбор одного или более модулей и поиск',
  'LBL_TOUR_SKIP' => 'Пропустить',
  'LBL_TOUR_TAKE_TOUR' => 'Посмотреть презентацию',
  'LBL_TOUR_TOUR' => 'Обратитесь к Туру в любое время',
  'LBL_TOUR_VISIT' => 'Чтобы получить больше информации, ознакомьтесь с приложением',
  'LBL_TOUR_WATCH' => 'Посмотреть, что нового в Sugar',
  'LBL_TOUR_WELCOME' => 'Новое в Sugar',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Отправить E-mail в архив',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Отправить E-mail в архив [Alt+K]',
  'LBL_TRADEMARK' => 'SugarCRM является торговой маркой компании SugarCRM, Inc. Все другие названия компании и продукта могут быть торговыми марками соответственных компаний, с которыми они связаны.',
  'LBL_TRADEMARK2' => 'SugarCRM ®, Sugar Enterprise™ and Sugar™ являются торговыми марками компании SugarCRM Inc.',
  'LBL_TRAINING' => 'Поддержка',
  'LBL_TT_DNB_BAL_AREA_CODE' => 'Телефонные коды США и Канады. Пример: 512 или 732 или 973',
  'LBL_TT_DNB_BAL_CODE_TYPE' => 'Выбрать тип отраслевого кода: SIC или NAICS',
  'LBL_TT_DNB_BAL_DUNS' => 'Введите 9-значный номер DUNS®.  Пример:  060704780, 047897855',
  'LBL_TT_DNB_BAL_IND_CODE' => 'Поддерживаются 2-8-значные SIC коды или 2-6-значные NAICS коды. Разделите запятой многократные коды.',
  'LBL_TT_DNB_BAL_IPO_PRICE_RANGE' => 'В $USD. Пример: Диапазон цен первичного размещения акций (IPO) от 2.00 до 2.50',
  'LBL_TT_DNB_BAL_MILLIONS' => 'в миллионах $USD',
  'LBL_TT_DNB_BAL_MILLIONS_EX' => 'В миллионах $USD. Пример: 100 или 4.3',
  'LBL_TT_DNB_BAL_NET_INCOME_GROWTH' => 'Процентное отношение (%)',
  'LBL_TT_DNB_BAL_ORGID' => 'Регистрация #. Пример: 130871985, 160468020',
  'LBL_TT_DNB_BAL_ORG_NAME' => 'Введите название компании',
  'LBL_TT_DNB_BAL_POSTAL_CODE' => 'Поддерживается ряд почтовых кодов США. Примеры: 78701 или SW1P 1JA или SWW1, или 78701-78752',
  'LBL_TT_DNB_BAL_PRESCREEN_SCORE' => 'Выберите уровень риска: Высокий, Средний, или Низкий',
  'LBL_TT_DNB_BAL_RADIUS_SRCH' => 'Поиск результатов единого почтового кода в пределах заданного расстояния',
  'LBL_TT_DNB_BAL_STATES' => 'Штат/Провинция/Регион',
  'LBL_TT_DNB_BAL_YEAR_OF_FOUNDING' => 'Примеры: 1964 или 2009. Может быть добавлен только год основания.',
  'LBL_TWITTER_DATA_EMPTY' => 'Данные из Twitter недоступны',
  'LBL_TWITTER_DATA_LOADING' => 'Загрузка связи с Twitter...',
  'LBL_TWITTER_DESCRIPTION' => 'Видеть совпадающие биографии пользователей twitter, твитты, ретвитты, и ответы на твитты',
  'LBL_TWITTER_DISPLAY_ROWS' => 'Отображать строки',
  'LBL_TWITTER_FAVORITE' => 'Избранное',
  'LBL_TWITTER_FOLLOW' => 'Продолжить',
  'LBL_TWITTER_ID' => 'Twitter ID',
  'LBL_TWITTER_MY_ACCOUNT' => 'Моя учетная запись',
  'LBL_TWITTER_NAME' => 'Twitter',
  'LBL_TWITTER_REPLY' => 'Ответить',
  'LBL_TWITTER_RETWEET' => 'Retweet',
  'LBL_TWITTER_SOURCE' => 'Источник Tweet:',
  'LBL_TWO_WEEKS' => '2 недели',
  'LBL_TX_LOG' => 'Журнал транзакций',
  'LBL_TX_LOG_DETAIL' => 'Подробности транзакции',
  'LBL_UNASSIGNED' => 'Не назначено',
  'LBL_UNAUTHORIZED' => 'К сожалению, у Вас нет доступа к этому ресурсу.',
  'LBL_UNAUTHORIZED_TITLE' => 'Не авторизовано',
  'LBL_UNAUTH_ADMIN' => 'У Вас нет доступа к администрированию',
  'LBL_UNDELETE' => 'Отменить удаление',
  'LBL_UNDELETE_BUTTON' => 'Отменить удаление',
  'LBL_UNDELETE_BUTTON_LABEL' => 'Отменить удаление',
  'LBL_UNDELETE_BUTTON_TITLE' => 'Отменить удаление [Alt+D]',
  'LBL_UNFOLLOW' => 'Не следить за записью',
  'LBL_UNLINKED' => 'Разъединено',
  'LBL_UNLINKING' => 'Разъединение...',
  'LBL_UNLINK_BUTTON' => 'Разъединить',
  'LBL_UNSUBSCRIBE' => 'Отменить подписку',
  'LBL_UNSYNC' => 'Отменить синхронизацию',
  'LBL_UPCOMING' => 'Мои предстоящие встречи/звонки',
  'LBL_UPDATE' => 'Обновить',
  'LBL_UPDATE_CALC_FIELDS' => 'Пересчитать значения',
  'LBL_UPLOADING' => 'Загрузка',
  'LBL_UPLOAD_FROM_COMPUTER' => 'Загрузить с компьютера',
  'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Неверный формат файла. Могут быть загружены только файлы изображений.',
  'LBL_UPLOAD_IMAGE_FILE_NOT_SUPPORTED' => 'Формат рисунка {0} больше не поддерживается.',
  'LBL_URL_BUTTON' => 'Web',
  'LBL_USERS' => 'Пользователи',
  'LBL_USERS_SYNC' => 'Синхронизация пользователей',
  'LBL_USER_DEFAULT_OUTBOUND_EMAIL_CONFIGURATION' => 'пользовательские настройки по умолчанию',
  'LBL_USER_ID' => 'ID пользователя',
  'LBL_USER_LIST' => 'Список пользователей',
  'LBL_USER_MENU' => 'Меню пользователя',
  'LBL_USER_OUTBOUND_EMAIL_ACCOUNT_CONFIGURATION' => 'пользовательский аккаунт',
  'LBL_USE_HTTPS' => 'Используйте безопасное соединение',
  'LBL_VALIDATE_RANGE' => 'не находится в действительном промежутке',
  'LBL_VALIDATING' => 'Проверка...',
  'LBL_VCARD' => 'vCard',
  'LBL_VCARD_DOWNLOAD' => 'Загрузить .vcf',
  'LBL_VCARD_ERROR_DEFAULT' => 'Произошла ошибка при загрузке vCard-файла',
  'LBL_VCARD_ERROR_FILESIZE' => 'Загруженный файл превышает размер с доступом 30000 байт, который был задан в HTML-форме',
  'LBL_VERIFY_EMAIL_ADDRESS' => 'Проверка существующих записей электронной почты...',
  'LBL_VERIFY_PORTAL_NAME' => 'Проверка существующего имени портала...',
  'LBL_VIEWINLINE' => 'Обзор',
  'LBL_VIEW_BUTTON' => 'Обзор',
  'LBL_VIEW_BUTTON_KEY' => 'V',
  'LBL_VIEW_BUTTON_LABEL' => 'Обзор',
  'LBL_VIEW_BUTTON_TITLE' => 'Обзор [Alt+V]',
  'LBL_VIEW_IMAGE' => 'просмотр',
  'LBL_VIEW_INLINE' => 'Обзор',
  'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
  'LBL_VIEW_PDF_BUTTON_LABEL' => 'Сохранить в PDF',
  'LBL_VIEW_PDF_BUTTON_TITLE' => 'Сохранить в PDF [Alt+P]',
  'LBL_VISIBLE' => 'Запись видима',
  'LBL_WARNING' => 'Предупреждение',
  'LBL_WARN_UNSAVED_CHANGES' => 'Вы не сохранили изменения. Вы уверены, что хотите уйти со страницы и сбросить изменения?',
  'LBL_WELCOMEBAR' => 'Добро пожаловать',
  'LBL_WIZ_APPLICATION_SETTINGS' => 'Настройки системы',
  'LBL_WIZ_COMPLETE_TITLE' => 'Настройка завершена',
  'LBL_WIZ_CONFIGURE_APPLICATION' => 'Studio',
  'LBL_WIZ_CREATE_USERS' => 'Создать пользователей',
  'LBL_WIZ_DATE_FORMAT' => 'Формат даты',
  'LBL_WIZ_DOCUMENTATION' => 'Документация',
  'LBL_WIZ_EMAIL' => 'Email',
  'LBL_WIZ_EMAIL_SETTINGS' => 'Настройки E-mail',
  'LBL_WIZ_FIRST_NAME' => 'Имя',
  'LBL_WIZ_FORUMS' => 'Форумы',
  'LBL_WIZ_IMPORT_DATA' => 'Импортировать данные',
  'LBL_WIZ_KNOWLEDGE_BASE' => 'База Знаний',
  'LBL_WIZ_LAST_NAME' => 'Фамилия',
  'LBL_WIZ_NAME_FORMAT' => 'Формат имени',
  'LBL_WIZ_START_SUGAR' => 'Запустить Sugar',
  'LBL_WIZ_SUGAR_TRAINING' => 'Обучение Sugar',
  'LBL_WIZ_SYSTEM_LOCALE_SETTINGS' => 'Специфические настройки',
  'LBL_WIZ_TIMEFORMAT' => 'Формат времени',
  'LBL_WIZ_TIMEZONE' => 'Часовой пояс',
  'LBL_WIZ_USER_LOCALE_TITLE' => 'Специфические настройки пользователя',
  'LBL_WIZ_USER_PROFILE_TITLE' => 'Профиль пользователя',
  'LBL_WORST' => 'Пессимистичный',
  'LBL_WORST_ADJUSTED' => 'Пессимистичный (Скорректированный)',
  'LBL_YES' => 'Да',
  'LBL_YESTERDAY' => 'вчера',
  'LBL_YOU' => 'Вы',
  'LBL_YOUR_INSTANCES' => 'Ваши системы',
  'LNK_ABOUT' => 'О системе',
  'LNK_ADVANCED_SEARCH' => 'Расширенный поиск',
  'LNK_BACKTOTOP' => 'Вернуться наверх',
  'LNK_BASIC_SEARCH' => 'Базовый поиск',
  'LNK_CLOSE' => 'закрыть',
  'LNK_CREATE' => 'Создать',
  'LNK_CREATE_WHEN_EMPTY' => 'Создать запись сейчас.',
  'LNK_DELETE' => 'удал.',
  'LNK_DELETE_ALL' => 'удал. все',
  'LNK_EDIT' => 'правка',
  'LNK_GET_LATEST' => 'Получить последние',
  'LNK_GET_LATEST_TOOLTIP' => 'Заменить последней версией',
  'LNK_HELP' => 'Справка',
  'LNK_LIST_END' => 'Последняя запись',
  'LNK_LIST_NEXT' => 'Далее',
  'LNK_LIST_PREVIOUS' => 'Назад',
  'LNK_LIST_RETURN' => 'Вернуться к списку',
  'LNK_LIST_START' => 'Первая запись',
  'LNK_LOAD_SIGNED' => 'Подпись',
  'LNK_LOAD_SIGNED_TOOLTIP' => 'Заменить подписанным документом',
  'LNK_MOBILE' => 'Мобильная версия:',
  'LNK_OFFLINE_SETTINGS' => 'Автономный режим',
  'LNK_PMSE_BUSINESS_RULES_IMPORT_RECORD' => 'Импортировать процесс обработки бизнес-правила',
  'LNK_PMSE_BUSINESS_RULES_NEW_RECORD' => 'Создать процесс обработки бизнес-правила',
  'LNK_PMSE_EMAIL_TEMPLATES_IMPORT_RECORD' => 'Импортировать процесс обработки шаблонов Email',
  'LNK_PMSE_EMAIL_TEMPLATES_NEW_RECORD' => 'Создать процесс обработки шаблона Email',
  'LNK_PMSE_PROCESS_DEFINITIONS_IMPORT_RECORD' => 'Импортировать определения процесса',
  'LNK_PMSE_PROCESS_DEFINITIONS_NEW_RECORD' => 'Создать определение процесса',
  'LNK_PORTAL_LOGIN_FORGOTPASSWORD' => 'Забыли пароль?',
  'LNK_PRINT' => 'Печать',
  'LNK_PRIVACY_POLICY' => 'Политика конфиденциальности',
  'LNK_REMOVE' => 'удал.',
  'LNK_RESUME' => 'Возобновить',
  'LNK_SAVED_VIEWS' => 'Отображение результатов поиска',
  'LNK_SEARCH_FTS_VIEW_ALL' => 'Обзор всех результатов',
  'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Показать все',
  'LNK_SEARCH_NO_RESULTS' => 'Ничего не было найдено.',
  'LNK_SETTINGS' => 'Настройки',
  'LNK_TERMS_OF_USE' => 'Условия пользования',
  'LNK_THIRD_PARTY_SOFTWARE' => 'Внешнее программное обеспечение',
  'LNK_TOUR' => 'Обзор',
  'LNK_TOUR_DOCUMENTATION' => 'документация',
  'LNK_VIEW' => 'просмотр',
  'LNK_VIEW_CHANGE_LOG' => 'Просмотреть журнал изменений',
  'LOGIN_LOGO_ERROR' => 'Замените, пожалуйста, логотипы SugarCRM.',
  'MSG_DUPLICATE' => 'Запись {0} , которую Вы создаете, возможно, дублирует уже имеющуюся запись {0}. Записи с похожими названиями {1}  показаны ниже. Нажмите кнопку "Сохранить"  {1} для продолжения создания новой записи {0}, или выберите одну из существующих {0}, приведенных ниже.',
  'MSG_EMPTY_LIST_VIEW_GO_TO_PARENT' => 'Вы можете создать <item1> из <item2>. <item3> <item2> списка.',
  'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'На данный момент у вас нет сохраненных записей. или одна сейчас.',
  'MSG_EMPTY_LIST_VIEW_NO_RESULTS_NO_IMPORT' => 'На данный момент у вас нет сохраненных записей. <item2> пока одна.',
  'MSG_IS_LESS_THAN' => 'меньше, чем',
  'MSG_IS_MORE_THAN' => 'больше, чем',
  'MSG_IS_NOT_BEFORE' => 'не раньше чем',
  'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => 'Нажмите OK для просмотра этого звонка или нажмите Отмена, чтобы отклонить это сообщение.',
  'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Описание:',
  'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Место:',
  'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => 'Нажмите OK для просмотра этой встречи или нажмите Отмена, чтобы отклонить это сообщение.',
  'MSG_JS_ALERT_MTG_REMINDER_START' => 'начало',
  'MSG_LIST_VIEW_NO_RESULTS' => 'Результаты не найдены для',
  'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Результаты не найдены.',
  'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Создать как новый',
  'MSG_OR_GREATER' => 'или больше',
  'MSG_SHOULD_BE' => 'должно быть',
  'MSG_SHOW_DUPLICATES' => 'Запись {0} , которую Вы создаете, возможно, дублирует уже имеющуюся запись {0}. Записи с похожими названиями {1}  показаны ниже. Нажмите кнопку "Сохранить"  {1} для продолжения создания новой записи {0}, или выберите одну из существующих {0}, приведенных ниже.',
  'NOTICE_NO_DELETE_CLOSED' => 'Вы не можете удалить записи со статусом закрытой продажи.',
  'NOTICE_NO_DELETE_CLOSED_STAGE' => 'Нельзя удалять записи, которые находятся на стадии закрытых продаж.',
  'NOTICE_NO_DELETE_CLOSED_STATUS' => 'Нельзя удалять записи, которые находятся в статусе закрытых продаж.',
  'NO_QUERY_SELECTED' => 'Выбранный вами формат данных не содержит запроса. Пожалуйста, выберите запрос, соответствующий этому формату данных.',
  'NTC_CLICK_BACK' => 'Пожалуйста, нажмите Назад в браузере и исправьте ошибку.',
  'NTC_DATE_FORMAT' => '(гггг-мм-дд)',
  'NTC_DATE_TIME_FORMAT' => '(гггг-мм-дд 24:00)',
  'NTC_DELETE_CONFIRMATION' => 'Вы действительно хотите удалить эту запись?',
  'NTC_DELETE_CONFIRMATION_FORMATTED' => 'Вы уверены, что хотите удалить {0}?',
  'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Вы точно хотите удалить выбранную запись(-и)?',
  'NTC_DELETE_CONFIRMATION_NUM' => 'Вы действительно хотите удалить',
  'NTC_DELETE_SELECTED_RECORDS' => 'выбранную запись (-и)?',
  'NTC_DELETE_SUCCESS' => 'Вы удалили',
  'NTC_LOGIN_MESSAGE' => 'Введите, пожалуйста, имя пользователя и пароль:',
  'NTC_NO_ITEMS_DISPLAY' => 'нет',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Поля Телефон и Адрес Вашей формы уже заполнены. Чтобы записать в них новые данные выбранного Контрагента, нажмите "ОК". Чтобы сохранить текущие данные, нажмите "Отмена".',
  'NTC_REMOVE_CONFIRMATION' => 'Вы действительно хотите удалить эту связь?',
  'NTC_REQUIRED' => 'Указывает необходимые поля',
  'NTC_SUPPORT_SUGARCRM' => 'Поддержите проект SugarCRM с открытым исходным кодом пожертвованием через PayPal - это быстро, надёжно и без комиссии!',
  'NTC_TEMPLATES_IS_USED' => 'Следующие шаблоны используются в записях e-mail маркетинга. Вы уверены, что хотите их удалить?',
  'NTC_TEMPLATE_IS_USED' => 'Данный шаблон используется по крайней мере в одной записи e-mail маркетинга. Вы уверены, что хотите его удалить?',
  'NTC_TIME_FORMAT' => '(24:00)',
  'NTC_UNLINK_CONFIRMATION' => 'Вы уверены, что хотите разъединить',
  'NTC_UNLINK_CONFIRMATION_FORMATTED' => 'Вы уверены, что хотите убрать ссылку {0}?',
  'NTC_UNLINK_SUCCESS' => 'Вы разъединили',
  'NTC_UPDATE_CONFIRMATION_NUM' => 'Вы действительно хотите обновить',
  'NTC_WELCOME' => 'Добро пожаловать',
  'NTC_YEAR_FORMAT' => '(гггг)',
  'NavigationBar' => 'Строка навигации',
  'PrimaryButton' => 'Основная кнопка',
  'SUGAR_API_EXCEPTION_NOT_AUTHORIZED' => 'Запрещено редактировать поле {0} в модуле: {1}',
  'SUGAR_API_EXCEPTION_RECORD_NOT_AUTHORIZED' => 'Запрещено выполнять действие "{0}" с этой записью',
  'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{{module}}} &raquo; {{appId}}',
  'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if name}}{{name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
  'TPL_DASHLET_MY_MODULE' => 'Мой {{module}}',
  'TPL_DELETE_FILTER_SUCCESS' => 'Вы удалили фильтр {{name}}.',
  'TPL_FILTER_SAVE' => 'Вы успешно создали фильтр {{name}}.',
  'TPL_HISTORICAL_SUMMARY' => 'Сводка основных показателей за длительный период для {{name}}',
  'TPL_IMPORT_VCARD_FAILURE' => 'Не удалось создать {{module}} из vCard',
  'TPL_INACTIVE_TASKS_DASHLET_TIME_RELATIVE' => 'последние изменения {{relativetime}} {{date}} в {{time}}',
  'TPL_LISTVIEW_SELECTED_ALL' => 'Вы выбрали все {{num}} записей в наборе данных.',
  'TPL_LISTVIEW_SELECTED_FIRST_OFFSET' => 'В наборе данных более чем {{num}} записей. Вы выбрали первые {{num}} записей.',
  'TPL_LISTVIEW_SELECT_ALL_RECORDS' => 'Вы выбрали все {{num}} записи в этом просмотре. {{link}} в набор данных.',
  'TPL_MASSADDTOLIST_DURATION_FORMAT' => '( {{time}} {{unit}} осталось)',
  'TPL_MASSADDTOLIST_FAIL_TO_ATTEMPT' => 'Массовое добавление в целевой список не произошло. Новая попытка запустить ({{num}} из {{total}}).',
  'TPL_MASSADDTOLIST_PROGRESS_STATUS' => 'Добавление {{num}} из {{total}}.',
  'TPL_MASSADDTOLIST_SUCCESS' => '{{num}} записей было добавлено успешно.',
  'TPL_MASSADDTOLIST_TITLE' => '{{module}} Массовое добавление в Целевой Список',
  'TPL_MASSADDTOLIST_WARNING_CLOSE' => 'Массовое добавление в целевой список не завершено. {{num}} записей не добавлено.',
  'TPL_MASSADDTOLIST_WARNING_INCOMPLETE' => 'Массовое добавление в целевой список не завершено. {{num}} записей не добавлено.',
  'TPL_MASSDELETE_DURATION_FORMAT' => '( {{time}} {{unit}} осталось)',
  'TPL_MASSDELETE_FAIL_TO_ATTEMPT' => 'Массовое удаление не произошло. Новая попытка запустить ({{num}} из {{total}}).',
  'TPL_MASSDELETE_PROGRESS_STATUS' => 'Удаление {{num}} из {{total}}.',
  'TPL_MASSDELETE_SUCCESS' => '{{num}} записи(ей) было удалено успешно.',
  'TPL_MASSDELETE_TITLE' => '{{module}} Массовое удаление',
  'TPL_MASSDELETE_WARNING_CLOSE' => 'Массовое удаление не завершено. {{num}} записи(ей) осталось.',
  'TPL_MASSDELETE_WARNING_INCOMPLETE' => 'Массовое удаление не завершено. {{num}} записи(ей) осталось.',
  'TPL_MASSLINK_DURATION_FORMAT' => '(осталось около {{time}} {{unit}})',
  'TPL_MASSLINK_FAIL_TO_ATTEMPT' => 'Не удалось массовое соединение. Инициализация новой попытки ({{num}} из {{total}}).',
  'TPL_MASSLINK_PROGRESS_STATUS' => 'Присоединение {{num}} из {{total}}.',
  'TPL_MASSLINK_SUCCESS' => '{{num}} записей были успешно соединены.',
  'TPL_MASSLINK_TITLE' => '{{module}} Массовое соединение',
  'TPL_MASSLINK_WARNING_CLOSE' => 'Массовое соединение не завершено. {{num}} записей не добавлено.',
  'TPL_MASSLINK_WARNING_INCOMPLETE' => 'Массовое соединение не завершено. {{num}} записей не добавлено.',
  'TPL_MASSUPDATE_DURATION_FORMAT' => '({{time}} {{unit}} осталось)',
  'TPL_MASSUPDATE_FAIL_TO_ATTEMPT' => 'Массовое обновление не произошло. Новая попытка запустить ({{num}} {{total}}).',
  'TPL_MASSUPDATE_PROGRESS_STATUS' => 'Обновление {{num}} из {{total}}.',
  'TPL_MASSUPDATE_SUCCESS' => '{{num}} записи(ей) были обновлены успешно.',
  'TPL_MASSUPDATE_TITLE' => '{{module}} Массовое обновление',
  'TPL_MASSUPDATE_WARNING_CLOSE' => 'Массовое обновление не завершено. {{num}} записи(ей) осталось неизмененным.',
  'TPL_MASSUPDATE_WARNING_INCOMPLETE' => 'Массовое обновление не завершено. {{num}} записи(ей) осталось неизмененным.',
  'TPL_MASSUPDATE_WARNING_PERMISSION' => '{{remain}} запись(и) были проигнорированы в следствие ограниченных прав.',
  'TPL_MASS_ADD_TO_LIST_QUEUED' => 'Ваш запрос на добавление выбранных записей в <a href="{{listUrl}}">{{listName}}</a> целевой список был поставлен в очередь.',
  'TPL_MASS_ADD_TO_LIST_SUCCESS' => 'Выбранные записи были добавлены в <a href="{{listUrl}}">{{listName}}</a> целевой список.',
  'TPL_MERGE_DUPLICATES_FAIL' => 'Слить связанные объекты не удалось {{objectName}}.',
  'TPL_MERGE_DUPLICATES_FAIL_TO_ATTEMPT' => 'Слить связанные объекты не удалось {{objectName}}. Новая попытка запустить ({{num}} из {{total}}).',
  'TPL_MERGE_DUPLICATES_IDENTICAL' => 'Все соответствующие записи будут перемещены в Первичную запись.',
  'TPL_MERGE_DUPLICATES_PROGRESS_STATUS' => 'Слито: {{percent}}%.',
  'TPL_MERGE_DUPLICATES_STAT' => '{{#with stat}}{{records}} записи были слиты успешно. {{total}} связанных записей было добавлено.{{/with}}',
  'TPL_MERGE_INVALID_NUMBER_RECORDS' => 'Неккоректное число записей передано. Допустимый диапазон от {{minRecords}} до {{maxRecords}} записей.',
  'TPL_MERGING_RECORDS' => 'Слияние {{mergeCount}} Записей',
  'TPL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_DESCRIPTION' => 'Для отправки уведомления о назначении записи, сервер SMTP должен быть настроен в {{emailSettingsUrl}}.',
  'TPL_OVERWRITE_POPULATED_DATA_CONFIRM' => 'Выбранная запись на текущий момент содержит следующие связанные значения: {{{values}}}. Нажмите "Подтвердить", чтобы скопировать эти значения в эту запись. Нажмите "Отменить", чтобы сохранить текущие значения.',
  'TPL_OVERWRITE_POPULATED_DATA_CONFIRM_WITH_MODULE_SINGULAR' => 'У выбранных {{moduleSingularLower}} есть связанные значения: {{values}}. Отмените для сохранения существующих значений. Подтвердите перезапись с новыми значениями.',
  'TPL_RECORD_SHARE_BODY' => 'Пожалуйста, произведите проверку {{module}} {{name}} {{appId}}',
  'TPL_RECORD_SHARE_SUBJECT' => 'Общий к использованию {{module}} {{name}} {{appId}}',
  'TPL_SHOW_MORE_MODULE' => 'Больше {{module}}...',
  'TPL_STATUS_CHANGE_SUCCESS' => '{{moduleSingular}} отмечен как {{status}}.',
  'TPL_TABBED_DASHLET_GROUP_BUTTON_LABEL' => 'История команды',
  'TPL_TABBED_DASHLET_USER_BUTTON_LABEL' => 'Моя история',
  'TPL_TIMEZONE_DIFFERENT' => 'Часовой пояс Вашего браузера не соответствует установленному часовому поясу {{link}}',
  'UPLOAD_ERROR_HOME_TEXT' => 'ОШИБКА: Во время загрузки произошла ошибка, обратитесь к администратору.',
  'UPLOAD_ERROR_TEXT' => 'ОШИБКА: Во время загрузки произошла ошибка. Код ошибки: {0} - {1}',
  'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ОШИБКА: Во время загрузки произошла ошибка. Код ошибки: {0} - {1}. upload_maxsize равняется {2}',
  'UPLOAD_MAXIMUM_EXCEEDED' => 'Размер загрузки ({0} байт) Превышен Допустимый Максимум: {1} байт',
  'UPLOAD_REQUEST_ERROR' => 'Возникла ошибка. Обновите страницу и попробуйте снова.',
  'WARNING_NO_DELETE_CLOSED_SELECTED_STATUS' => 'У одной или нескольких из выбранных записей есть Доход по продаже в статусе "Успешно закрыт" или "Потерян" и не может быть удален.',
  'WARNING_NO_DELETE_SELECTED' => 'Одна или более выбранных записей имеют статус Закрытой Успешной или Закрытой Несостоявшейся продажи и не могут быть удалены.',
  'WARNING_NO_DELETE_SELECTED_STAGE' => 'Одна или несколько выбранных записей находятся на стадии Успешно закрытые или Потерянные и не могут быть удалены.',
  'WARNING_NO_DELETE_SELECTED_STATUS' => 'Одна или несколько выбранных записей находятся в статусе Успешно закрытые или Потерянные и не могут быть удалены.',
  'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => 'Предупреждение: Ваш браузер IE не поддерживает режим сопоставимости',
  'WARN_BROWSER_VERSION_WARNING' => '<p><b>Внимание:</b>Браузер или версия браузера, которую Вы используете, не поддерживается.</p><p>Рекомендуется испольщовать следующие версии браузеров</p><ul><li>Internet Explorer 9</li><li>Mozilla Firefox 14, 15 </li><li>Safari 6</li><li>Google Chrome 22 (или последняя версия)</li></ul>',
  'WARN_LICENSE_EXPIRED' => 'Ваша корпоративная лицензия на использование SugarCRM скоро истекает',
  'WARN_LICENSE_SEATS' => 'Предупреждение: Количество активных пользователей уже равно максимальному количеству допустимых лицензий.',
  'WARN_LICENSE_SEATS_MAXED' => 'Предупреждение: Количество пользовательских лицензий превышено максимальное количество допустимых лицензий.',
  'WARN_LICENSE_VALIDATION' => 'Ваша корпоративная лицензия на использование SugarCRM должна снова пройти валидацию',
  'WARN_ONLY_ADMINS' => 'Только администраторы могут войти в систему.',
  'WARN_UNSAVED_CHANGES' => 'Вы собираетесь покинуть запись, не сохранив изменений, которые Вы, возможно, здесь сделали. Вы уверены, что хотите покинуть запись?',
);

