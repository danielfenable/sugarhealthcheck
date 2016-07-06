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
    0 => 'Ei käytössä',
    1 => 'Matala tehostus',
    2 => 'Normaali tehostus',
    3 => 'Korkea tehostus',
  ),
  'account_type_dom' => 
  array (
    '' => '',
    'Analyst' => 'Analyytikko',
    'Competitor' => 'Kilpailija',
    'Customer' => 'Asiakas',
    'Integrator' => 'Integraattori',
    'Investor' => 'Sijoittaja',
    'Other' => 'Muu',
    'Partner' => 'Yhteistyökumppani',
    'Press' => 'Lehdistö',
    'Prospect' => 'Prospekti',
    'Reseller' => 'Jälleenmyyjä',
  ),
  'activity_dom' => 
  array (
    'Call' => 'Soitto',
    'Email' => 'Sähköposti',
    'Meeting' => 'Tapaaminen',
    'Note' => 'Muistio',
    'Task' => 'Uusi tehtävä',
  ),
  'activity_user_options' => 
  array (
    7 => 'Edelliset 7 päivää',
    30 => 'Edelliset 30 päivää',
    90 => 'Edellinen neljännes',
  ),
  'bopselect_type_dom' => 
  array (
    'Equals' => 'Yhtäsuuri',
  ),
  'bselect_type_dom' => 
  array (
    'bool_false' => 'Ei',
    'bool_true' => 'Kyllä',
  ),
  'bug_priority_dom' => 
  array (
    'High' => 'Korkea',
    'Low' => 'Alhainen',
    'Medium' => 'Normaali',
    'Urgent' => 'Kiireinen',
  ),
  'bug_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Hyväksytty',
    'Duplicate' => 'Kaksoiskappale',
    'Fixed' => 'Korjattu',
    'Invalid' => 'Virheellinen',
    'Later' => 'Myöhemmin',
    'Out of Date' => 'Vanhentunut',
  ),
  'bug_status_dom' => 
  array (
    'Assigned' => 'Vastuuhenkilö valittu',
    'Closed' => 'Suljettu',
    'New' => 'Uusi',
    'Pending' => 'Odottaa',
    'Rejected' => 'Hylätty',
  ),
  'bug_type_dom' => 
  array (
    'Defect' => 'Haitta',
    'Feature' => 'Ominaisuus',
  ),
  'business_rule_type_list' => 
  array (
    'single' => 'Single-Hit',
  ),
  'call_direction_dom' => 
  array (
    'Inbound' => 'Tuleva',
    'Outbound' => 'Lähtevä',
  ),
  'call_status_dom' => 
  array (
    'Held' => 'Pidetty',
    'Not Held' => 'Peruutettu',
    'Planned' => 'Varattu',
  ),
  'campaign_status_dom' => 
  array (
    '' => '',
    'Active' => 'Aktiivinen',
    'Complete' => 'Valmis',
    'In Queue' => 'Jonossa',
    'Inactive' => 'Ei-aktiivinen',
    'Planning' => 'Suunnitteilla',
    'Sending' => 'Lähetetään',
  ),
  'campaign_type_dom' => 
  array (
    '' => '',
    'Email' => 'Sähköposti',
    'Mail' => 'Posti',
    'NewsLetter' => 'Uutiskirje',
    'Print' => 'Printti',
    'Radio' => 'Radio',
    'Telesales' => 'Puhelinmyynti',
    'Television' => 'Televisio',
    'Web' => 'Web',
  ),
  'campainglog_activity_type_dom' => 
  array (
    '' => '',
    'blocked' => 'Estetty osoitteen tai domainin takia',
    'contact' => 'Kontakti luotu',
    'invalid email' => 'Palautettu viesti, virheellinen osoite',
    'lead' => 'Liidi luotu',
    'link' => 'Linkkiä klikattu',
    'removed' => 'Jättäytyi',
    'send error' => 'Palautettu viesti, muu syy',
    'targeted' => 'Viesti lähetetty/lähetystä yritetty',
    'viewed' => 'Viesti avattu',
  ),
  'campainglog_target_type_dom' => 
  array (
    'Accounts' => 'Asiakkaat',
    'Contacts' => 'Kontaktit',
    'Leads' => 'Liidit',
    'Prospects' => 'Prospektit',
    'Users' => 'Käyttäjät',
  ),
  'case_priority_dom' => 
  array (
    'P1' => 'Korkea',
    'P2' => 'Normaali',
    'P3' => 'Alhainen',
  ),
  'case_relationship_type_dom' => 
  array (
    '' => '',
    'Alternate Contact' => 'Vaihtoehtoinen kontakti',
    'Primary Contact' => 'Ensisijainen kontakti',
  ),
  'case_status_dom' => 
  array (
    'Assigned' => 'Vastuuhenkilö valittu',
    'Closed' => 'Suljettu',
    'Duplicate' => 'Kaksoiskappale',
    'New' => 'Uusi',
    'Pending Input' => 'Odottaa lisätietoja',
    'Rejected' => 'Hylätty',
  ),
  'case_type_dom' => 
  array (
    'Administration' => 'Ylläpito',
    'Product' => 'Tuote',
    'User' => 'Käyttäjä',
  ),
  'charset_dom' => 
  array (
    'BIG-5' => 'BIG-5 (Taiwan ja Hong Kong, perinteinen kiina)',
    'CP1251' => 'CP1251 (MS kyrillinen)',
    'CP1252' => 'CP1252 (MS Länsi-Eurooppa ja Yhdysvallat)',
    'EUC-CN' => 'EUC-CN (yksinkertaistettu kiina GB2312)',
    'EUC-JP' => 'EUC-JP (Unix japani)',
    'EUC-KR' => 'EUC-KR (korea)',
    'EUC-TW' => 'EUC-TW (taiwanilainen)',
    'ISO-2022-JP' => 'ISO-2022-JP (japani)',
    'ISO-2022-KR' => 'ISO-2022-KR (korea)',
    'ISO-8859-1' => 'ISO-8859-1 (länsi-Europpa ja Yhdysvallat)',
    'ISO-8859-10' => 'ISO-8859-10 (latinalainen 6, pohjois-Eurooppa)',
    'ISO-8859-13' => 'ISO-8859-13 (latinalainen 7, balttilaiset kielet)',
    'ISO-8859-14' => 'ISO-8859-14 (latinalainen 8, kelttiläiset kielet)',
    'ISO-8859-15' => 'ISO-8859-15 (latinalainen 9, euromerkki)',
    'ISO-8859-2' => 'ISO-8859-2 (keski-ja itä-Eurooppa)',
    'ISO-8859-3' => 'ISO-8859-3 (latinalainen 3 (mm. turkki))',
    'ISO-8859-4' => 'ISO-8859-4 (latinalainen 4 (mm. viro, latvia, liettua, saame))',
    'ISO-8859-5' => 'ISO-8859-5 (kyrillinen)',
    'ISO-8859-6' => 'ISO-8859-6 (arabia)',
    'ISO-8859-7' => 'ISO-8859-7 (kreikka)',
    'ISO-8859-8' => 'ISO-8859-8 (heprea)',
    'ISO-8859-9' => 'ISO-8859-9 (latinalainen 5, turkki)',
    'KOI8-R' => 'KOI8-R (kyrillinen venäjä)',
    'KOI8-U' => 'KOI8-U (kyrillinen ukraina)',
    'SJIS' => 'Shift JIS (MS japani)',
    'UTF-8' => 'Unicode (UTF-8)',
  ),
  'chart_strings' => 
  array (
    'barchart' => 'Palkki',
    'clickfordrilldown' => 'Napsauta nähdäksesi tarkemmat tiedot',
    'collapselegend' => 'Piilota otsikot',
    'detailview' => 'Tarkemmat tiedot...',
    'drilldownoptions' => 'Valinnat tarkempia tietoja varten',
    'expandlegend' => 'Näytä otsikot',
    'groupchart' => 'Ryhmä',
    'horizontalbarchart' => 'Vaakasuora',
    'linechart' => 'Viiva',
    'noData' => 'Tietoja ei ole',
    'pieWedgeName' => 'kohdat',
    'piechart' => 'Piirakka',
    'print' => 'Tulosta',
    'stackedchart' => 'Päällekkäinen',
  ),
  'checkbox_dom' => 
  array (
    '' => '',
    1 => 'Kyllä',
    2 => 'Ei',
  ),
  'checkbox_massupdate_dom' => 
  array (
    0 => 'Ei',
    1 => 'Kyllä',
  ),
  'commit_stage_binary_dom' => 
  array (
    'exclude' => 'Alä sisällytä',
    'include' => 'Sisällytä',
  ),
  'commit_stage_custom_dom' => 
  array (
    'exclude' => 'Älä sisällytä',
    'include' => 'Sisällytä',
    'upside' => 'Yläpuoli',
  ),
  'commit_stage_dom' => 
  array (
    'exclude' => 'Älä sisällytä',
    'include' => 'Sisällytä',
    'upside' => 'Yläpuoli',
  ),
  'contract_expiration_notice_dom' => 
  array (
    1 => '1 päivä',
    3 => '3 päivää',
    5 => '5 päivää',
    7 => '1 viikko',
    14 => '2 viikkoa',
    21 => '3 viikkoa',
    31 => '1 kuukausi',
  ),
  'contract_payment_frequency_dom' => 
  array (
    'halfyearly' => 'Puolivuosittain',
    'monthly' => 'Kuukausittain',
    'quarterly' => 'Neljännesvuosittain',
    'yearly' => 'Vuosittain',
  ),
  'contract_status_dom' => 
  array (
    'inprogress' => 'Käynnissä',
    'notstarted' => 'Ei aloitettu',
    'signed' => 'Allekirjoitettu',
  ),
  'countries_dom' => 
  array (
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGANISTAN',
    'ALBANIA' => 'ALBANIA',
    'ALGERIA' => 'ALGERIA',
    'AMERICAN SAMOA' => 'AMERIKAN SAMOA',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ETELÄMANNER',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTIINA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'ITÄVALTA',
    'AZERBAIJAN' => 'AZERBAIJAN',
    'BAHAMAS' => 'BAHAMA',
    'BAHRAIN' => 'BAHRAIN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'VALKOVENÄJÄ',
    'BELGIUM' => 'BELGIA',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNIA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET\'NSAARI',
    'BRAZIL' => 'BRASILIA',
    'BRITISH ANTARCTICA TERRITORY' => 'BRITTILÄINEN ANTARKTIKSEN ALUE',
    'BRITISH INDIAN OCEAN TERRITORY' => 'BRITTILÄINEN INTIAN VALTAMEREN ALUE',
    'BRITISH VIRGIN ISLANDS' => 'BRITTILÄISET NEITSYTSAARET',
    'BRITISH WEST INDIES' => 'BRITTILÄINEN LÄNSI-INTIA',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODZA',
    'CAMEROON' => 'CAMERUN',
    'CANADA' => 'KANADA',
    'CANAL ZONE' => 'KANAALIALUE',
    'CANARY ISLAND' => 'KANARIAN SAARET',
    'CAPE VERDI ISLANDS' => 'CAPE VERDI -SAARET',
    'CAYMAN ISLANDS' => 'CAYMAN SAARET',
    'CEVLON' => 'CEVLON',
    'CHAD' => 'CHAD',
    'CHANNEL ISLAND UK' => 'ENGLANNIN KANAALIN SAARET',
    'CHILE' => 'CHILE',
    'CHINA' => 'KIINA',
    'CHRISTMAS ISLAND' => 'JOULUSAARI',
    'COCOS (KEELING) ISLAND' => 'KOOKOSSAARI',
    'COLOMBIA' => 'KOLUMBIA',
    'COMORO ISLANDS' => 'COMORO-SAARET',
    'CONGO' => 'KONGO',
    'CONGO KINSHASA' => 'KINSHASAN KONGO',
    'COOK ISLANDS' => 'COOKINSAARET',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'KROATIA',
    'CUBA' => 'KUUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'KYPROS',
    'CZECH REPUBLIC' => 'TSEKKI',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'TANSKA',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'DOMINIKAANINEN TASAVALTA',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ECUADOR',
    'EGYPT' => 'EGYPTI',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'PÄIVÄNTASAAJAN GUINEA',
    'ESTONIA' => 'VIRO',
    'ETHIOPIA' => 'ETIOPIA',
    'FAEROE ISLANDS' => 'FÄÄRSAARET',
    'FALKLAND ISLANDS' => 'FALKLAND-SAARET',
    'FIJI' => 'FIJI',
    'FINLAND' => 'SUOMI',
    'FRANCE' => 'RANSKA',
    'FRENCH GUIANA' => 'RANSKAN QUIANA',
    'FRENCH POLYNESIA' => 'RANSKAN POLYNESIA',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIA',
    'GERMANY' => 'SAKSA',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'KREIKKA',
    'GREENLAND' => 'GRÖÖNLANTI',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONGKONG',
    'HUNGARY' => 'UNKARI',
    'ICELAND' => 'ISLANTI',
    'IFNI' => 'IFNI',
    'INDIA' => 'INTIA',
    'INDONESIA' => 'INDONESIA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'IRLANTI',
    'ISRAEL' => 'ISRAEL',
    'ITALY' => 'ITALIA',
    'IVORY COAST' => 'NORSUNLUURANNIKKO',
    'JAMAICA' => 'JAMAIKA',
    'JAPAN' => 'JAPANI',
    'JORDAN' => 'JORDAN',
    'KAZAKHSTAN' => 'KAZAKSTAN',
    'KENYA' => 'KENIA',
    'KOREA' => 'KOREA',
    'KOREA, SOUTH' => 'ETELÄKOREA',
    'KUWAIT' => 'KUWAIT',
    'KYRGYZSTAN' => 'KIRGIISIA',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LATVIA',
    'LEBANON' => 'LIBANON',
    'LEEWARD ISLANDS' => 'LEEWARD-SAARET',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYA',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LIETTUA',
    'LUXEMBOURG' => 'LUXEMBURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MAKEDONIA',
    'MADAGASCAR' => 'MADAGASKAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALESIA',
    'MALDIVES' => 'MALEDIIVIT',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANESIA',
    'MEXICO' => 'MEKSIKO',
    'MOLDOVIA' => 'MOLDOVA',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MAROKKO',
    'MOZAMBIQUE' => 'MOSAMBIK',
    'MYANAMAR' => 'MYANMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'ALANKOMAAT',
    'NETHERLANDS ANTILLES' => 'ALANKOMAIDEN ANTILLIINIT',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ALANKOMAIDEN ANTILLIINIEN NEUTRAALI ALUE',
    'NEW CALADONIA' => 'UUSI-KALEDONIA',
    'NEW HEBRIDES' => 'UUDET HEBRIDIT',
    'NEW ZEALAND' => 'UUSI-SEELANTI',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'NORFOLK-SAARET',
    'NORWAY' => 'NORJA',
    'OMAN' => 'OMAN',
    'OTHER' => 'MUU',
    'PACIFIC ISLAND' => 'TYYNENMEREN SAARET',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA-UUSI-GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'FILIPPIINIT',
    'POLAND' => 'PUOLA',
    'PORTUGAL' => 'PORTUGALI',
    'PORTUGUESE TIMOR' => 'PORTUGALIN TIMOR',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'VALKOVENÄJÄN TASAVALTA',
    'REPUBLIC OF SOUTH AFRICA' => 'ETELÄAFRIKAN TASAVALTA',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'ROMANIA',
    'RUSSIA' => 'VENÄJÄ',
    'RWANDA' => 'RUANDA',
    'RYUKYU ISLANDS' => 'RYUKYU-SAARET',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'SAUDI-ARABIA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERBIA',
    'SEYCHELLES' => 'SEYCHELLIT',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPORE',
    'SLOVAKIA' => 'SLOVAKIA',
    'SLOVENIA' => 'SLOVENIA',
    'SOMALILIAND' => 'SOMALIMAA',
    'SOUTH AFRICA' => 'ETELÄAFRIKKA',
    'SOUTH YEMEN' => 'ETELÄ-JEMEN',
    'SPAIN' => 'ESPANJA',
    'SPANISH SAHARA' => 'ESPANJAN SAHARA',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'ST. KITTS JA NEVIS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'LOUNAISAFRIKKA',
    'SWAZILAND' => 'SWAZIMAA',
    'SWEDEN' => 'RUOTSI',
    'SWITZERLAND' => 'SVEITSI',
    'SYRIA' => 'SYYRIA',
    'TAIWAN' => 'TAIWAN',
    'TAJIKISTAN' => 'TADZIKISTAN',
    'TANZANIA' => 'TANSANIA',
    'THAILAND' => 'THAIMAA',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNISIA',
    'TURKEY' => 'TURKKI',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINA',
    'UNITED ARAB EMIRATES' => 'YHDISTYNEET ARABIEMIRAATIT',
    'UNITED KINGDOM' => 'ISO-BRITANNIA',
    'UPPER VOLTA' => 'BURKINA FASO',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'YHDYSVALTAIN TYYNENMEREN SAARET',
    'US VIRGIN ISLANDS' => 'YHDYSVALTAIN NEITSYTSAARET',
    'USA' => 'YHDYSVALLAT',
    'UZBEKISTAN' => 'UZBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'VATIKAANI',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'WAKE-SAARI',
    'WEST INDIES' => 'LÄNSI-INTIA',
    'WESTERN SAHARA' => 'LÄNSI-SAHARA',
    'YEMEN' => 'JEMEN',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
  ),
  'cselect_type_dom' => 
  array (
    'Does not Equal' => 'erisuuri',
    'Equals' => 'yhtäsuuri',
  ),
  'custom_fields_importable_dom' => 
  array (
    'false' => 'Ei',
    'required' => 'Pakollinen',
    'true' => 'Kyllä',
  ),
  'custom_fields_merge_dup_dom' => 
  array (
    0 => 'Ei käytössä',
    1 => 'Käytössä',
    2 => 'Suodattimessa',
    3 => 'Oletuksena valittu suodatin',
    4 => 'Vain suodatin',
  ),
  'custom_layout_dom' => 
  array (
    'Disabled' => 'Poistettu käytöstä',
    'Enabled' => 'Käytössä',
  ),
  'd3_chart_types' => 
  array (
    'bar chart' => 'Pystpyalkki',
    'funnel chart 3D' => 'Suppilo',
    'group by chart' => 'Ryhmitetty pystypalkki',
    'horizontal bar chart' => 'Vaakapalkki',
    'horizontal group by chart' => 'Ryhmitetty vaakapalkki',
    'line chart' => 'Viiva',
    'pie chart' => 'Piirakka',
  ),
  'd3_value_placement' => 
  array (
    'start' => 'Alku',
    'top' => 'Ylä',
    0 => 'Tyhjä',
    'end' => 'Loppu',
    'middle' => 'Keski',
    1 => 'Oletus',
  ),
  'dashlet_auto_refresh_options' => 
  array (
    -1 => 'Älä päivitä automaattisesti',
    30 => 'Joka 30. sekunti',
    60 => 'Joka minuutti',
    180 => 'Joka kolmas minuutti',
    300 => 'Joka viides minuutti',
    600 => 'Joka kymmenes minuutti',
  ),
  'dashlet_auto_refresh_options_admin' => 
  array (
    -1 => 'Ei koskaan',
    30 => 'Joka 30. sekunti',
    60 => 'Joka minuutti',
    180 => 'Joka kolmas minuutti',
    300 => 'Joka viides minuutti',
    600 => 'Joka kymmenes minuutti',
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
    'Normal' => 'Normaali',
    'Scalar' => 'Skaalari',
  ),
  'dataset_att_format_type_dom' => 
  array (
    'Accounting' => 'Kirjanpito',
    'Date' => 'Päivämäärä',
    'Datetime' => 'Päivä ja aika',
    'Text' => 'Teksti',
  ),
  'dataset_att_format_type_scalar_dom' => 
  array (
    'Day' => 'Päivä',
    'Month' => 'Kuukausi',
    'Quarter' => 'Neljännes',
    'Week' => 'Viikko',
    'Year' => 'Vuosi',
  ),
  'dataset_layout_type_dom' => 
  array (
    'Column' => 'Sarake',
  ),
  'dataset_style_dom' => 
  array (
    'bold' => 'Lihavoitu',
    'italic' => 'Kursiivi',
    'normal' => 'Normaali',
  ),
  'date_range_operator_dom' => 
  array (
    'last_30_days' => 'Edelliset 30 päivää',
    'last_7_days' => 'Edelliset 7 päivää',
    'last_month' => 'Edellinen kuukausi',
    'last_year' => 'Edellinen vuosi',
    'next_30_days' => 'Seuraavat 30 päivää',
    'next_7_days' => 'Seuraavat 7 päivää',
    'next_month' => 'Seuraava kuukausi',
    'next_year' => 'Seuraava vuosi',
    'this_month' => 'Tämä kuukausi',
    'this_year' => 'Tämä vuosi',
  ),
  'date_range_search_dom' => 
  array (
    '=' => 'On yhtäsuuri',
    'between' => 'On välissä',
    'greater_than' => 'Jälkeen',
    'last_30_days' => 'Edelliset 30 päivää',
    'last_7_days' => 'Edelliset 7 päivää',
    'last_month' => 'Edellinen kuukausi',
    'last_year' => 'Viime vuosi',
    'less_than' => 'Ennen',
    'next_30_days' => 'Seuraavat 30 päivää',
    'next_7_days' => 'Seuraavat 7 päivää',
    'next_month' => 'Seuraava kuukausi',
    'next_year' => 'Ensi vuosi',
    'not_equal' => 'Eri aikaan',
    'this_month' => 'Tämä kuukausi',
    'this_year' => 'Tämä vuosi',
  ),
  'dnb_bal_after_before_btw' => 
  array (
    'btw' => 'väliltä',
    'gte' => 'jälkeen',
    'lte' => 'ennen',
  ),
  'dnb_bal_filing_trading_option' => 
  array (
    'filingdate' => 'Jättöpäivä',
    'tradingdate' => 'Kaupankäynnin päivä',
  ),
  'dnb_bal_gte_lte_btw' => 
  array (
    'btw' => 'väliltä',
    'gte' => 'enemmän tai yhtä suuri kuin',
    'lte' => 'vähemmän tai yhtä suuri kuin',
  ),
  'dnb_bal_miles_km' => 
  array (
    3349 => 'kilometriä',
    3353 => 'mailia',
  ),
  'dnb_bal_prescreen_options' => 
  array (
    10925 => 'matala',
    10926 => 'mediumi',
    10927 => 'korkea',
  ),
  'dnb_bal_primary_secondary' => 
  array (
    'false' => 'Ensi- sekä toissijainen',
    'true' => 'Vain ensisijainen',
  ),
  'dnb_bal_single_all' => 
  array (
    'allsites' => 'Kaikki sivut (sites)',
    'singlesite' => 'Yksi sivu',
  ),
  'dnb_contact_kw_scope' => 
  array (
    'Bio' => 'Biografia',
    'Both' => 'Molemmat',
    'Title' => 'Otsikko',
  ),
  'dnb_contact_types' => 
  array (
    'Contacts' => 'Kontaktit',
    'Leads' => 'Liidit',
    'Prospects' => 'Tavoitteet',
  ),
  'dnb_countries_iso' => 
  array (
    'AD' => 'Andorra',
    'AE' => 'Yhdistyneet Arabiemiraatit',
    'AF' => 'Afganistan',
    'AG' => 'Antigua ja Barbuda',
    'AI' => 'Anguilla',
    'AL' => 'Albania',
    'AM' => 'Armenia',
    'AN' => 'Alankomaiden Antillit',
    'AO' => 'Angola',
    'AQ' => 'Antarktis',
    'AR' => 'Argentiina',
    'AS' => 'Amerikan Samoa',
    'AT' => 'Itävalta',
    'AU' => 'Australia',
    'AW' => 'Aruba',
    'AZ' => 'Azerbaijan',
    'BA' => 'Bosnia ja Herzegovina',
    'BB' => 'Barbados',
    'BD' => 'Bangladesh',
    'BE' => 'Belgia',
    'BF' => 'Burkina Faso',
    'BG' => 'Bulgaria',
    'BH' => 'Bahrain',
    'BI' => 'Burundi',
    'BJ' => 'Benin',
    'BM' => 'Bermuda',
    'BN' => 'Brunei',
    'BO' => 'Bolivia',
    'BR' => 'Brasilia',
    'BS' => 'Bahamat',
    'BT' => 'Bhutan',
    'BV' => 'Bouvet\'nsaari',
    'BW' => 'Botswana',
    'BY' => 'Valko-Venäjä',
    'BZ' => 'Belize',
    'CA' => 'Kanada',
    'CC' => 'Kookossaaret (Keelingsaaret)',
    'CD' => 'Kongon demokraattinen tasavalta',
    'CF' => 'Keski-Afrikan tasavalta',
    'CG' => 'Kongo',
    'CH' => 'Sveitsi',
    'CI' => 'Norsunluurannikko',
    'CK' => 'Cookinsaaret',
    'CL' => 'Chile',
    'CM' => 'Kamerun',
    'CN' => 'Kiina',
    'CO' => 'Kolombia',
    'CR' => 'Costa Rica',
    'CU' => 'Kuuba',
    'CV' => 'Kap Verde',
    'CX' => 'Joulusaari',
    'CY' => 'Kypros',
    'CZ' => 'Tšekki',
    'DE' => 'Saksa',
    'DJ' => 'Djibouti',
    'DK' => 'Tanska',
    'DM' => 'Dominica',
    'DO' => 'Dominikaaninen tasavalta',
    'DZ' => 'Algeria',
    'EC' => 'Ecuador',
    'EE' => 'Viro',
    'EG' => 'Egypti',
    'EH' => 'Länsi-Sahara',
    'ER' => 'Eritrea',
    'ES' => 'Espanja',
    'ET' => 'Etiopia',
    'FI' => 'Suomi',
    'FJ' => 'Fiji',
    'FK' => 'Falklandsaaret',
    'FM' => 'Micronesia',
    'FO' => 'Färsaaret',
    'FR' => 'Ranska',
    'FX' => 'Ranskan emämaa',
    'GA' => 'Gabon',
    'GB' => 'Iso-Britannia',
    'GD' => 'Grenada',
    'GE' => 'Georgia',
    'GF' => 'Ranskan Guiana',
    'GH' => 'Ghana',
    'GI' => 'Gibraltar',
    'GL' => 'Grönlanti',
    'GM' => 'Gambia',
    'GN' => 'Guinea',
    'GP' => 'Guadeloupe',
    'GQ' => 'Päiväntasaajan Guinea',
    'GR' => 'Kreikka',
    'GS' => 'Etelä-Georgia ja Eteläiset Sandwichsaaret',
    'GT' => 'Guatemala',
    'GU' => 'Guam',
    'GW' => 'Guinea-Bissau',
    'GY' => 'Guyana',
    'HK' => 'Hong Kong',
    'HM' => 'Heard- ja McDonaldinsaaret',
    'HN' => 'Honduras',
    'HR' => 'Kroatia',
    'HT' => 'Haiti',
    'HU' => 'Unkari',
    'ID' => 'Indonesia',
    'IE' => 'Irlanti',
    'IL' => 'Israel',
    'IN' => 'Intia',
    'IO' => 'Brittiläinen Intian valtameren alue',
    'IQ' => 'Irak',
    'IR' => 'Iran',
    'IS' => 'Islanti',
    'IT' => 'Italia',
    'JM' => 'Jamaika',
    'JO' => 'Jordania',
    'JP' => 'Japani',
    'KE' => 'Kenia',
    'KG' => 'Kirgisia',
    'KH' => 'Kambodia',
    'KI' => 'Kiribati',
    'KM' => 'Komorit',
    'KN' => 'Saint Kitts ja Nevis',
    'KP' => 'Pohjois-Korea',
    'KR' => 'Etelä-Korea',
    'KW' => 'Kuwait',
    'KY' => 'Caymansaaret',
    'KZ' => 'Kazakstan',
    'LA' => 'Laos',
    'LB' => 'Libanon',
    'LC' => 'Saint Lucia',
    'LI' => 'Liechtenstein',
    'LK' => 'Sri Lanka',
    'LR' => 'Liberia',
    'LS' => 'Lesoto',
    'LT' => 'Liettua',
    'LU' => 'Luxemburg',
    'LV' => 'Latvia',
    'LY' => 'Libya',
    'MA' => 'Morokko',
    'MC' => 'Monaco',
    'MD' => 'Moldova',
    'ME' => 'Montenegro',
    'MG' => 'Madagaskar',
    'MH' => 'Marshallinsaaret',
    'MK' => 'Makedonia',
    'ML' => 'Mali',
    'MM' => 'Myanmar',
    'MN' => 'Mongolia',
    'MO' => 'Macau',
    'MP' => 'Pohjois-Marianat',
    'MQ' => 'Martinique',
    'MR' => 'Mauritania',
    'MS' => 'Montserrat',
    'MT' => 'Malta',
    'MU' => 'Mauritius',
    'MV' => 'Maldiivit',
    'MW' => 'Malawi',
    'MX' => 'Meksiko',
    'MY' => 'Malesia',
    'MZ' => 'Mozambique',
    'NA' => 'Namibia',
    'NC' => 'Uusi-Kaledonia',
    'NE' => 'Niger',
    'NF' => 'Norfolkinsaari',
    'NG' => 'Nigeria',
    'NI' => 'Nicaragua',
    'NL' => 'Alankomaat',
    'NO' => 'Norja',
    'NP' => 'Nepal',
    'NR' => 'Nauru',
    'NU' => 'Niue',
    'NZ' => 'Uusi-Seelanti',
    'OM' => 'Oman',
    'PA' => 'Panama',
    'PE' => 'Peru',
    'PF' => 'Ranskalainen polynesia',
    'PG' => 'Papua Uusi-Guinea',
    'PH' => 'Filippiinit',
    'PK' => 'Pakistan',
    'PL' => 'Puola',
    'PM' => 'St. Pierre ja Miquelon',
    'PN' => 'Pitcairn',
    'PR' => 'Puerto Rico',
    'PS' => 'Palestiina',
    'PT' => 'Portugali',
    'PW' => 'Palau',
    'PY' => 'Paraguay',
    'QA' => 'Qatar',
    'RE' => 'Reunion',
    'RO' => 'Romania',
    'RS' => 'Serbia',
    'RU' => 'Venäjä',
    'RW' => 'Ruanda',
    'SA' => 'Saudi-Arabia',
    'SB' => 'Solomonsaaret',
    'SC' => 'Seychellit',
    'SD' => 'Sudan',
    'SE' => 'Ruotsi',
    'SG' => 'Singapore',
    'SH' => 'Saint Helena',
    'SI' => 'Slovenia',
    'SJ' => 'Huippuvuoret ja Jan Mayen',
    'SK' => 'Slovakia',
    'SL' => 'Sierra Leone',
    'SM' => 'San Marino',
    'SN' => 'Senegal',
    'SO' => 'Somalia',
    'SR' => 'Suriname',
    'ST' => 'São Tomé ja Príncipe',
    'SV' => 'El Salvador',
    'SY' => 'Syyria',
    'SZ' => 'Swazimaa',
    'TC' => 'Turks- ja Caicossaaret',
    'TD' => 'Tšad',
    'TF' => 'Ranskan eteläiset alueet',
    'TG' => 'Togo',
    'TH' => 'Thaimaa',
    'TJ' => 'Tadžikistan',
    'TK' => 'Tokelau',
    'TM' => 'Turkmenistan',
    'TN' => 'Tunisia',
    'TO' => 'Tonga',
    'TP' => 'Itä-Timor',
    'TR' => 'Turkki',
    'TT' => 'Trinidad ja Tobago',
    'TV' => 'Tuvalu',
    'TW' => 'Taiwan',
    'TZ' => 'Tanzania',
    'UA' => 'Ukraina',
    'UG' => 'Uganda',
    'UM' => 'Yhdysvaltain pienet erillissaaret',
    'US' => 'Yhdysvallat',
    'UY' => 'Uruguay',
    'UZ' => 'Uzbekistan',
    'VA' => 'Vatikaanivaltio',
    'VC' => 'Saint Vincent ja Grenadiinit',
    'VE' => 'Venezuela',
    'VG' => 'Brittiläiset Neitsytsaaret',
    'VI' => 'Yhdysvaltain Neitsytsaaret',
    'VN' => 'Vietnam',
    'VU' => 'Vanuatu',
    'WF' => 'Wallis ja Futunasaaret',
    'WS' => 'Samoa',
    'YE' => 'Jemen',
    'YT' => 'Mayotte',
    'ZA' => 'Etelä-Afrikka',
    'ZM' => 'Zambia',
    'ZW' => 'Zimbabwe',
  ),
  'dnb_countries_radius_iso' => 
  array (
    'CA' => 'Kanada',
    'US' => 'Yhdysvallat',
  ),
  'dnb_job_codes' => 
  array (
    '' => '',
    'A045' => 'Incorporator',
    'A046' => 'Joint Venturer',
    'A047' => 'Shareholder',
    'A0A1' => 'Omistaja',
    'A0A2' => 'Partner',
    'A0A3' => 'Managing Partner',
    'A0AA' => 'Co-Partner',
    'A0AB' => 'Corporate General Partner',
    'A0AC' => 'Senior General Partner',
    'A0AD' => 'Senior Partner',
    'A0AE' => 'General Partner',
    'A0AF' => 'General Limited Partner',
    'A0AG' => 'Limited Partner',
    'A0AH' => 'Individual General Partner',
    'A0AI' => 'Individual Partner',
    'A0AJ' => 'Manager/Partner',
    'A0AL' => 'Managing General Partner',
    'A0AM' => 'Managing Limited Partner',
    'A0AQ' => 'Co-Owner',
    'A0AS' => 'Co-Executor',
    'A0AT' => 'Co-Trustee',
    'A0AV' => 'Co-Venturer',
    'A0AY' => 'Managing Trustee',
    'A0AZ' => 'Receiver',
    'A0GX' => 'Seikkailija',
    'A0R0' => 'Executor',
    'A0R3' => 'Co-Adventurer',
    'A117' => 'Markkinointijohtaja',
    'A154' => 'Investointijohtaja',
    'A189' => 'C-Level Support',
    'A199' => 'Officer',
    'A1A4' => 'Lautakunnan puheenjohtaja',
    'A1A5' => 'Vice-Chairman',
    'A1A6' => 'President',
    'A1A7' => 'Toimitusjohtaja',
    'A1A8' => 'Operaatiojohtaja',
    'A1A9' => 'Talousjohtaja',
    'A1B0' => 'Treasurer',
    'A1B2' => 'Secretary',
    'A1B3' => 'Subsidiary President',
    'A1B4' => 'Division President',
    'A1B5' => 'Senior Corporate Officer',
    'A1BA' => 'Puheenjohtaja',
    'A1BB' => 'Co-Chairman',
    'A1BD' => 'Co-Chairman of the Board',
    'A1BE' => 'Deputy Chairman of the Board',
    'A1BF' => 'Executive Chairman of the Board',
    'A1BH' => 'General Chairman of the Board',
    'A1BI' => 'Senior Chairman of the Board',
    'A1BJ' => 'Näyttelevä laudan tuolimies',
    'A1BO' => 'Neuvonantolautakunnan puheenjohtaja',
    'A1BP' => 'Puheenjohtajan neuvonantokomitea',
    'A1BU' => 'Puheenjohtajaemeriitti',
    'A1BV' => 'Puheenjohtajan johtokomitea',
    'A1BX' => 'Puheenjohtajan finanssikomitea',
    'A1BY' => 'Puheenjohtajan luottamuskomitea',
    'A1BZ' => 'Co-Chairman Executive Committee',
    'A1CA' => 'Senior Vice-Chairman of the Board',
    'A1CB' => 'Vice-Chairman of the Board',
    'A1CG' => 'Co-President',
    'A1CH' => 'Näyttelevä presidentti',
    'A1CJ' => 'President-Operations',
    'A1CK' => 'President of Trustees',
    'A1CL' => 'President Emeritus',
    'A1CN' => 'Näyttelevä toimitusjohtaja',
    'A1CO' => 'Pääadministraattori',
    'A1CP' => 'Co-Chief Executive Officer',
    'A1CQ' => 'Co-Chief Financial Officer',
    'A1CR' => 'Co-Chief Operating Officer',
    'A1CS' => 'Executive Board Member',
    'A1CT' => 'Executive Managing Director',
    'A1CU' => 'Executive Officer',
    'A1CW' => 'Founder',
    'A1CX' => 'Krediittijohtaja',
    'A1CY' => 'Näyttelevä talousjohtaja',
    'A1G7' => 'Johtolautakunta',
    'A1R1' => 'Trustee',
    'A2AP' => 'Trust General Partner',
    'A2D1' => 'Services Executive',
    'A2D2' => 'Top Executive',
    'A2IU' => 'Auktoriteettijohtaja',
    'A2IV' => 'Senior Investment Officer',
    'A2IW' => 'Senior Trust Officer',
    'A2IX' => 'Trust Investment Officer',
    'A2IY' => 'Trust Officer',
    'A2IZ' => 'Trust Personnel Officer',
    'A589' => 'VP-Level Support',
    'A598' => 'Management Vice-President',
    'A599' => 'Executive',
    'A5D3' => 'Division Vice-President',
    'A5D4' => 'Executive Vice-President',
    'A5D6' => 'Group Vice-President',
    'A5D7' => 'Senior Vice-President',
    'A5D8' => 'Vice-President',
    'A5DL' => 'Executive Vice-President Emeritus',
    'A5DM' => 'General Executive Vice-President',
    'A5DN' => 'Group Executive',
    'A5DO' => 'Assosiaattivarapresidentti',
    'A5DP' => 'Regional Vice-President',
    'A5DQ' => 'Senior Executive Vice-President',
    'A5DR' => 'Senior Vice-President Emeritus',
    'A5DS' => 'Divisional/Regional Vice-President',
    'A5DT' => 'Vice-President Wholesale Division',
    'A5I5' => 'Vice-President Business Development',
    'A5I9' => 'Vice-President of Business',
    'A615' => 'Director of Case Management',
    'A626' => 'Director of Laboratory',
    'A627' => 'Assosiaattijohtaja',
    'A636' => 'Social Director',
    'A644' => 'Director of Planning and Corporate Development',
    'A645' => 'Creative Director',
    'A646' => 'Director of Communications',
    'A647' => 'Director of Radiology',
    'A655' => 'Director of Pharmacy Services',
    'A65A' => 'Director of Pharmacy',
    'A663' => 'Director of Environmental Services',
    'A689' => 'Director-Level Support',
    'A6A1' => 'Senior Director',
    'A6A2' => 'Director of Telecommunications',
    'A6AA' => 'Director of Operating Room',
    'A6BA' => 'Director of Patient Care/Nursing',
    'A6BZ' => 'Director of Infection Control',
    'A6C7' => 'Director of Risk Management',
    'A6DU' => 'Division/Subsidiary Head',
    'A746' => 'Communications Manager',
    'A789' => 'Manager-Level Support',
    'A7DU' => 'Managing Officer',
    'A8DV' => 'Assistentti presidentille',
    'A957' => 'Neuvontantolautakunnan jäsen',
    'A998' => 'Staff',
    'A9CD' => 'Honorary Chairman of the Board',
    'A9DW' => 'Co-Founder',
    'A9DX' => 'Exploration',
    'A9DY' => 'Honorary Trustee',
    'A9DZ' => 'Interim President',
    'A9EA' => 'Inactive President',
    'AB47' => 'Radiologian johtaja',
    'ABA1' => 'Kardiologian johtaja',
    'ABA2' => 'Director ICU/Coronary Care Unit',
    'ABA3' => 'Kirurgian johtaja',
    'ABA4' => 'Lääketieteen johtaja',
    'ABA5' => 'Anestetiologian johtaja',
    'ABA6' => 'Tapaturmasalin johtaja',
    'ABA7' => 'Director of Surgery',
    'ABAB' => 'Patologian johtaja',
    'ABBA' => 'Gynekologian johtaja',
    'ADA4' => 'Director of Records',
    'ADZ9' => 'Director of Volunteer',
    'B0A1' => 'Hallinnon johtaja',
    'B1EB' => 'Regional President',
    'B1R2' => 'Principal',
    'B1R3' => 'Assistenttirehtori',
    'B5D0' => 'Vice-President Administration',
    'B5E2' => 'Vice-President Corporate Development',
    'B5E6' => 'Vice-President Government Relations',
    'B5F4' => 'Vice-President Merger Acquisition',
    'B618' => 'Director of Security',
    'B635' => 'Director of Patient Accounts',
    'B699' => 'Hallinnon direktööri',
    'B6EC' => 'Hallintodirektööri',
    'B6ED' => 'Co-Management Director',
    'B6EE' => 'Director Shareholder Services',
    'B6EF' => 'Regional Director',
    'B6EH' => 'Senior Managing Director',
    'B6H2' => 'Executive Director',
    'B6H8' => 'Managing Director',
    'B6J3' => 'Store Director',
    'B7AB' => 'Practice Manager',
    'B7EI' => 'Hallintomanageri',
    'B7EJ' => 'Program Manager',
    'B7EK' => 'Regional Manager',
    'B7EL' => 'Station Manager',
    'B7J0' => 'Aluemanageri',
    'B7J1' => 'Aluesuperviisori',
    'B7J8' => 'Hallinnon manageri',
    'B7K0' => 'Department Manager',
    'B7K3' => 'Sivutoimipisteen manageri',
    'B7L3' => 'District Manager',
    'B7L4' => 'Division Manager',
    'B7M1' => 'General Manager',
    'B7M2' => 'Government Relations Manager',
    'B7N2' => 'Office Manager',
    'B7N6' => 'Planning Manager',
    'B7P5' => 'Store Manager',
    'B7XA' => 'Nurse Manager',
    'B801' => 'Executive Assistant',
    'B806' => 'Hallintosihteeri',
    'B830' => 'Assistenttiadministraattori',
    'B899' => 'Hallinnon assistentti',
    'B8B8' => 'Office Administrator',
    'B914' => 'Department Chairman',
    'B927' => 'Office Supervisor',
    'B928' => 'Meeting Planner',
    'B9EM' => 'Ylläpitäjä',
    'B9EN' => 'Pormestari',
    'B9EO' => 'Interim Manager',
    'B9EP' => 'Management',
    'B9EQ' => 'Planning Staff',
    'B9ME' => 'Government Relations',
    'BB47' => 'Sairaanhoitojohtaja',
    'C1AC' => 'Telecommunications Executive',
    'C1C1' => 'Executive of Information Technology',
    'C1D9' => 'Senior Network Engineer',
    'C1DC' => 'Senior Software Engineer',
    'C2A1' => 'Tietojohtaja',
    'C2A2' => 'Teknologiajohtaja',
    'C2C1' => 'Data Processing Executive',
    'C2P3' => 'Tietoturvajohtaja',
    'C599' => 'Vice-President Systems',
    'C5E8' => 'Vice-President Information Services',
    'C601' => 'Director of Quality Improvement',
    'C624' => 'Director of Information Technology',
    'C699' => 'Systems Director',
    'C6G8' => 'Director of Data Processing',
    'C6I3' => 'Director of MIS/IS',
    'C6J1' => 'Computer Lab Director',
    'C6P9' => 'Quality Assurance Director',
    'C724' => 'Computer Manager',
    'C799' => 'Systems Manager',
    'C7BB' => 'Systems Administrator',
    'C7BC' => 'Telecommunications Manager',
    'C7C7' => 'Information Technology Manager',
    'C7E8' => 'Manager of Information Services',
    'C7H1' => 'Web Project Manager',
    'C7J1' => 'Network Manager',
    'C7K9' => 'Data Processing Manager',
    'C7L5' => 'Data Processing Operations Manager',
    'C7N1' => 'Manager of Management Information Systems',
    'C7P7' => 'Systems/Programming Manager',
    'C7P8' => 'Systems Support Manager',
    'C7P9' => 'Quality Assurance Manager',
    'C7X9' => 'Manager of Information',
    'C7XZ' => 'Technical Manager',
    'C899' => 'Systems Assistant',
    'C8B9' => 'Technology/Computer Coordinator',
    'C8C8' => 'Information Technology Project Manager',
    'C8CC' => 'Web Developer',
    'C8CD' => 'Software Developer',
    'C8DC' => 'Software Engineer',
    'C8DD' => 'Systems Engineer',
    'C8X1' => 'Network Engineer',
    'C912' => 'Data Processing Supervisor',
    'C918' => 'Telecommunications Staff',
    'C939' => 'Senior Systems Analyst',
    'C940' => 'Systems Analyst',
    'C941' => 'Network Analyst',
    'C999' => 'Systems Staff',
    'C9A1' => 'Computer Scientist',
    'C9A2' => 'Computer Specialist',
    'C9A3' => 'Computer Technician',
    'C9A4' => 'Computers',
    'C9A5' => 'Information Systems',
    'C9A6' => 'Management Information Systems Staff',
    'C9A7' => 'Programmer',
    'C9A8' => 'Programmer Analyst',
    'C9A9' => 'Project Leader',
    'C9B1' => 'Data Consultant',
    'C9B2' => 'Webmaster',
    'C9B3' => 'Database Administrator',
    'C9B4' => 'Applikaatiokonsultantti',
    'C9B5' => 'Liikeanalyytikko',
    'C9B6' => 'Data Administrator',
    'C9B7' => 'Systems Technician',
    'C9B8' => 'Information Technology/Internet Support',
    'C9B9' => 'Technician',
    'C9CX' => 'Technology Architect',
    'C9ER' => 'Data Processing Staff',
    'C9F8' => 'Technical Recruiter',
    'C9P3' => 'IT Security',
    'C9X1' => 'Network Technician',
    'C9XZ' => 'Information Technology Specialist',
    'D2C2' => 'Engineering Executive',
    'D599' => 'Vice-President Engineering-Research & Development',
    'D5E4' => 'Vice-President Engineering',
    'D5E5' => 'Vice-President Development',
    'D5G1' => 'Vice-President Research and Technology',
    'D699' => 'Director of Engineering',
    'D6ET' => 'Technical Director',
    'D6EZ' => 'Development Director',
    'D6O0' => 'Research Development Director',
    'D799' => 'Engineering-Research and Development Manager',
    'D7EU' => 'Pääprojekti-insinööri',
    'D7EV' => 'Project Administrator',
    'D7EW' => 'Project Coordinator',
    'D7EX' => 'Project Director',
    'D7EY' => 'Project Executive',
    'D7EZ' => 'Development Manager',
    'D7L1' => 'Design Engineering Manager',
    'D7L7' => 'Engineering Manager',
    'D7M5' => 'Industrial Engineering Manager',
    'D7O0' => 'Research and Development Manager',
    'D7O1' => 'Product Engineering Manager',
    'D7O4' => 'Project Manager',
    'D899' => 'Engineering-Research and Development Assistant',
    'D901' => 'Electrical Engineer',
    'D915' => 'Draftsmen/Designer',
    'D916' => 'Engineer',
    'D917' => 'Pääinsinööri',
    'D918' => 'Senior Engineer',
    'D963' => 'Conservation Technician',
    'D999' => 'Engineering-Research and Development',
    'D9EZ' => 'Development',
    'D9FA' => 'Engineering Staff',
    'D9FB' => 'Industrial',
    'D9FC' => 'Research',
    'D9FD' => 'Technology',
    'D9FE' => 'Technical Staff',
    'D9IU' => 'Research And Development Staff',
    'D9X1' => 'Graphic Designer',
    'D9X9' => 'Project Engineer',
    'DZ25' => 'Design Engineer',
    'E1FF' => 'Investment Officer',
    'E2C4' => 'Financial Executive',
    'E5D9' => 'Vice-President Accounting',
    'E5E5' => 'Vice-President Finance',
    'E6D9' => 'Kirjanpidon johtaja',
    'E6FG' => 'Director of Finance',
    'E6FH' => 'Financial Officer',
    'E6FI' => 'Loan Officer',
    'E6G4' => 'Kirjanpidon tirehtööri',
    'E7FE' => 'Financial Advisor',
    'E7FF' => 'Investment Manager',
    'E7FJ' => 'Trust Manager',
    'E7G2' => 'Portfolio Manager',
    'E7J7' => 'Kirjanpitomanageri',
    'E7K1' => 'Tarkistusmanageri',
    'E7K4' => 'Liiketoimintamanageri',
    'E7K7' => 'Credit Manager',
    'E7K9' => 'Contract Manager',
    'E7L9' => 'Finance Manager',
    'E7P9' => 'Taxes Manager',
    'E7S9' => 'Stockbroker',
    'E899' => 'Finance Assistant',
    'E8Q6' => 'Assistenttikontrolleri',
    'E8Q9' => 'Assistenttiaarteenvahtija',
    'E901' => 'Kirjanpitäjä',
    'E902' => 'Julkinen kirjanpitäjä (sertifioitu)',
    'E903' => 'Tax Preparer',
    'E906' => 'Tarkastaja',
    'E908' => 'Comptroller',
    'E909' => 'Controller',
    'E917' => 'Finance Supervisor',
    'E920' => 'Välittäjä',
    'E944' => 'Kirjanpitäjä',
    'E999' => 'Finance-Other',
    'E9E6' => 'Finance Secretary',
    'E9E7' => 'Senior Financial Analyst',
    'E9E9' => 'Financial Analyst',
    'E9FK' => 'Kirjanpitohenkilöstö',
    'E9FL' => 'Credit Staff',
    'E9FM' => 'Finance',
    'E9FN' => 'Installment',
    'E9FO' => 'Loan',
    'E9FP' => 'Mortgage',
    'E9FQ' => 'Trust',
    'E9FR' => 'Securities',
    'E9FS' => 'Näyttelevä kontrolleri',
    'E9FZ' => 'Analyytikko',
    'EZ20' => 'Assosiaattivälittäjä',
    'F2A9' => 'C-tason ihmisresurssit',
    'F2C9' => 'Personnel Executive',
    'F599' => 'Vice-President Personnel',
    'F5E7' => 'Vice-President Human Resources',
    'F6FV' => 'Recruiting Director',
    'F6G0' => 'Employee Relations Director',
    'F6H4' => 'Human Resources Director',
    'F6H5' => 'Industrial Relations Director',
    'F6I6' => 'Personnel Director',
    'F6J5' => 'Training and Development Director',
    'F6J6' => 'Training Director',
    'F7B1' => 'Human Resources Coordinator',
    'F7FF' => 'Payroll Manager',
    'F7FR' => 'Employee Benefits Manager',
    'F7FS' => 'Fund Manager',
    'F7FT' => 'Pension Plan Manager',
    'F7FU' => 'Profit Sharing Plan Manager',
    'F7FV' => 'Recruiting Manager',
    'F7K2' => 'Benefiittimanageri',
    'F7K5' => 'Compensation Manager',
    'F7L6' => 'Employee Relations Manager',
    'F7M4' => 'Human Resources Manager',
    'F7M6' => 'Industrial Relations Manager',
    'F7N5' => 'Personnel Manager',
    'F7Q2' => 'Training and Development Manager',
    'F7Q3' => 'Training Supervisor',
    'F898' => 'Human Resources',
    'F899' => 'Personnel Assistant',
    'F8C9' => 'Human Resources Information Management Analyst',
    'F8Z8' => 'Human Resources Consultant',
    'F8Z9' => 'Human Resources Analyst',
    'F8ZZ' => 'Payroll Staff',
    'F9B1' => 'Human Resources Administrator',
    'F9FV' => 'Recruiter',
    'F9FW' => 'Personnel',
    'F9Q2' => 'Training Specialist',
    'G299' => 'Purchasing Officer',
    'G599' => 'Purchasing Vice-President',
    'G5F0' => 'Vice-President Purchasing/Procurement',
    'G629' => 'Liiketoiminta/finanssi/ostodirektööri',
    'G698' => 'Procurement Director',
    'G699' => 'Purchasing Director',
    'G6I9' => 'Ostojohtaja',
    'G798' => 'Procurement Manager',
    'G7O6' => 'Purchasing Manager',
    'G899' => 'Purchasing Assistant',
    'G906' => 'Senior Buyer',
    'G907' => 'Ostaja',
    'G933' => 'Purchasing Agent',
    'G989' => 'Procurement Staff',
    'G9FX' => 'Purchasing',
    'H2C8' => 'Manufacturing/Production/Distribution Executive',
    'H599' => 'Vice-President Operations/Production/Manufacturing',
    'H5F1' => 'Vice-President Manufacturing',
    'H5F5' => 'Vice-President Operations',
    'H5F8' => 'Vice-President Production',
    'H699' => 'Director of Operations-Production/Manufacturing',
    'H6FY' => 'Director of Operations',
    'H6H9' => 'Manufacturing Director',
    'H6I0' => 'Safety Director',
    'H6I1' => 'Materials Director',
    'H6I7' => 'Production Director',
    'H6J4' => 'Traffic Director',
    'H6O7' => 'Quality Control Director',
    'H799' => 'Operations-Production/Manufacturing',
    'H7A0' => 'Materials Manager',
    'H7B7' => 'Site Manager',
    'H7D5' => 'Mill Manager',
    'H7FZ' => 'Mine Manager',
    'H7GA' => 'Export Manager',
    'H7H7' => 'Operations Supervisor',
    'H7H9' => 'Fleet  Manager',
    'H7I0' => 'Safety Manager',
    'H7L0' => 'Front End Manager',
    'H7L2' => 'Distribution/Shipping/Transportation Manager',
    'H7M0' => 'Manufacturing Manager',
    'H7M7' => 'Inventory Control Manager',
    'H7N3' => 'Operations Manager',
    'H7N4' => 'Packing Engineer Manager',
    'H7N8' => 'Plant Engineering Manager',
    'H7N9' => 'Plant Manager',
    'H7O3' => 'Production Manager',
    'H7O7' => 'Quality Control Manager',
    'H7P3' => 'Security Manager',
    'H7Q1' => 'Traffic Manager',
    'H918' => 'Foreman/Supervisor',
    'H920' => 'Industrial Engineer',
    'H924' => 'Manufacturing Supervisor',
    'H928' => 'Plant Engineer',
    'H929' => 'Plant Superintendent',
    'H930' => 'Production Superintendent',
    'H9E7' => 'Operations Analyst',
    'H9GA' => 'Fleet Staff',
    'H9GB' => 'Manufacturing Staff',
    'H9GC' => 'Operation Staff',
    'H9GD' => 'Operations Staff',
    'H9GE' => 'Operating',
    'H9GF' => 'Production',
    'H9GG' => 'Producer',
    'H9P3' => 'Security Staff',
    'I199' => 'Management Information Director',
    'I1A7' => 'Soittokeskuksen manageri',
    'I1A8' => 'Market Executive',
    'I1A9' => 'Executive of Sales',
    'I1X7' => 'National Sales Manager',
    'I2A1' => 'C-tason markkinointi',
    'I2A3' => 'Digital & Social Media Officer',
    'I2B9' => 'Public Relations Executive',
    'I2C0' => 'Sales and Marketing Executive',
    'I2I1' => 'Social Media Strategist',
    'I599' => 'Vice-President Sales and Marketing',
    'I5A1' => 'Executive Vice-President Marketing',
    'I5A2' => 'Executive Vice-President Sales',
    'I5E1' => 'Vice-President Advertising',
    'I5F2' => 'Vice-President Marketing',
    'I5F3' => 'Vice-President Merchandising',
    'I5F7' => 'Vice-President Product Development',
    'I5G2' => 'Vice-President Sales',
    'I5H1' => 'Vice-President Corporate Communications',
    'I5I1' => 'Vice-President Public Relations',
    'I699' => 'Sales and Marketing Director',
    'I6A1' => 'E-Business Director',
    'I6A2' => 'E-Commerce Director',
    'I6A3' => 'Digital & Social Media Director',
    'I6G6' => 'Mainontajohtaja',
    'I6H0' => 'Marketing Director',
    'I6H1' => 'Corporate Communications Director',
    'I6I1' => 'Public Relations Director',
    'I6J2' => 'Sales Director',
    'I6K2' => 'Liiketoimintakehityksen johtaja',
    'I6K8' => 'Customer Service Director',
    'I799' => 'Sales and Marketing Manager',
    'I7A1' => 'E-Business Manager',
    'I7A2' => 'E-Commerce Manager',
    'I7A3' => 'Social Media Manager',
    'I7A4' => 'Community Manager',
    'I7B1' => 'Merchandise Manager',
    'I7H1' => 'Corporate Communications Manager',
    'I7I1' => 'Public Relations Manager',
    'I7J9' => 'Mainontamanageri',
    'I7K2' => 'Liiketoimintakehityksen manageri',
    'I7K8' => 'Customer Service Manager',
    'I7M9' => 'Marketing Manager',
    'I7N0' => 'Product Development Manager',
    'I7O2' => 'Product Manager',
    'I7O9' => 'Regional Sales Manager',
    'I7P1' => 'Sales Manager',
    'I7P2' => 'Sales Promotion Manager',
    'I889' => 'Market Research Staff',
    'I898' => 'Sales Associate',
    'I899' => 'Sales and Marketing Assistant',
    'I998' => 'Digital & Social Media Specialist',
    'I999' => 'Sales and Marketing Staff',
    'I9A1' => 'E-Commerce',
    'I9A2' => 'E-Business',
    'I9A3' => 'Social Media Analyst',
    'I9A4' => 'Social Media Marketer',
    'I9D8' => 'Engineer of Sales',
    'I9GH' => 'Mainontahenkilöstö',
    'I9GI' => 'Merchandise',
    'I9GJ' => 'Merchandising',
    'I9GK' => 'Marketing Staff',
    'I9GL' => 'Products',
    'I9GM' => 'Sales Staff',
    'I9GN' => 'Database Marketing',
    'I9H1' => 'Corporate Communications Staff',
    'I9I1' => 'Public Relations Staff',
    'I9I2' => 'Publications',
    'I9I3' => 'Spokesman',
    'I9I8' => 'Coordinator of Sales',
    'I9I9' => 'Coordinator of Marketing',
    'I9K8' => 'Customer Service Staff',
    'I9Z9' => 'Soittokeskuksen henkilöstö',
    'I9ZX' => 'Soittokeskuksen lähettiläs',
    'J599' => 'Facilities Vice-President',
    'J699' => 'Facilities Director',
    'J6E2' => 'Physical Plant Director',
    'J6H7' => 'Maintenance Director',
    'J7GN' => 'Park Manager',
    'J7L8' => 'Facilities Manager',
    'J7M3' => 'Hub Manager',
    'J7M8' => 'Maintenance Manager',
    'J7N7' => 'Plant and Facilities Manager',
    'J7P0' => 'Terminal Manager',
    'J7Q3' => 'Warehouse Manager',
    'J7ZZ' => 'Property Manager',
    'J899' => 'Facilities Assistant',
    'J923' => 'Maintenance Supervisor',
    'J999' => 'Facilities',
    'J9GO' => 'Maintenance Staff',
    'J9GP' => 'Plaza Manager',
    'K209' => 'Lähettiläs',
    'K601' => 'Federal Program Director',
    'K602' => 'Program Inspector',
    'K656' => 'Deputy Director',
    'K661' => 'Judge',
    'K670' => 'Police Chief',
    'K948' => 'Aldermanni',
    'K949' => 'Assistenttipäällikkö',
    'K950' => 'Päällikkö',
    'K951' => 'City Council',
    'K952' => 'Commissioner',
    'K953' => 'Committeeman',
    'K955' => 'Council Member',
    'K960' => 'County Commissioner',
    'K961' => 'County Judge',
    'K962' => 'Elder',
    'K963' => 'Fire Chief',
    'K964' => 'Governor',
    'K965' => 'Mayor',
    'K966' => 'Selectman',
    'K967' => 'Sheriff',
    'K968' => 'Vice Mayor',
    'K969' => 'Warden',
    'K989' => 'Judicial Staff',
    'K999' => 'Government',
    'K9D7' => 'Corrections Officer',
    'L6A6' => 'Director of Pastoral Care',
    'L935' => 'Religious Leader',
    'L970' => 'Assosiaattipastori',
    'L971' => 'Minister',
    'L972' => 'Assistenttipastori',
    'L973' => 'Piispa',
    'L974' => 'Deacon',
    'L975' => 'Kardinaali',
    'L976' => 'Pastor',
    'L977' => 'Mother Superior',
    'L978' => 'Rabbi',
    'L979' => 'Rector',
    'L980' => 'Reverend',
    'L981' => 'Priest',
    'L982' => 'Senior Pastor',
    'M1B1' => 'School Superintendent',
    'M1B2' => 'School Board President',
    'M622' => 'Library Director',
    'M6E6' => 'Financial Aid Director',
    'M6F6' => 'Director of Teacher Personnel',
    'M6I6' => 'Instructional Media Services Director',
    'M7M6' => 'Akateeminen neuvontantaja',
    'M7M9' => 'Professor',
    'M7MZ' => 'Teacher',
    'M8I6' => 'Media Specialist',
    'M8I7' => 'Reading Specialist',
    'M901' => 'Education',
    'M922' => 'Librarian',
    'M983' => 'Kansleri',
    'M984' => 'Dean',
    'M985' => 'Headmaster',
    'M986' => 'Chief Admissions Officer',
    'M987' => 'Akatemiajohtaja',
    'M988' => 'Atletiiklan johtaja',
    'M989' => 'Food Service Director',
    'M990' => 'Vice Chancellor',
    'M999' => 'Education Assistant',
    'M9M9' => 'Instructor',
    'M9R3' => 'Assosiaattiprofessori',
    'M9R4' => 'Assistenttiprofessori',
    'M9R5' => 'Adunktiprofessori',
    'N985' => 'Sergeant',
    'N986' => 'Adjutantti',
    'N987' => 'Commander',
    'N988' => 'Commodore',
    'N989' => 'Exalted Ruler',
    'N990' => 'Grand Knight',
    'N991' => 'Leading Knight',
    'N992' => 'Master',
    'N993' => 'Post Commander',
    'N994' => 'Quartermaster',
    'N995' => 'Rear Commodore',
    'N996' => 'Recorder',
    'N997' => 'Vice Commander',
    'N998' => 'Vice Commodore',
    'N999' => 'Kapteeni',
    'X1Z8' => 'Senior Associate',
    'X626' => 'Scientist',
    'X656' => 'Taidedirektööri',
    'X6Z9' => 'Program Director',
    'X746' => 'Assosiaattieditori',
    'X799' => 'Tradesman/Craftsman',
    'X7DZ' => 'Senior Project Manager',
    'X7X7' => 'Senior Manager',
    'X8X9' => 'Senior Consultant',
    'X901' => 'Kirjailija',
    'X906' => 'Taxation',
    'X930' => 'Arkkitehti',
    'X931' => 'Designer',
    'X956' => 'Client Manager',
    'X957' => 'Customer Manager',
    'X9CD' => 'Research Analyst',
    'XA01' => 'Emergency Medicine Specialist',
    'XA02' => 'General Vascular Surgeon',
    'XA99' => 'Medical Doctor',
    'XAA1' => 'Veterinarian',
    'XAA2' => 'Family Practitioner',
    'XAB5' => 'Substance Abuse Counselor',
    'XABX' => 'Psychologist',
    'XAP0' => 'Psychoanalyst',
    'XAP1' => 'Ear Nose and Throat Specialist',
    'XAP2' => 'Infectious Diseases',
    'XAP3' => 'Oculist',
    'XAP4' => 'Orthopedist',
    'XAP5' => 'Pathologist',
    'XAP6' => 'Proctologist',
    'XAP7' => 'Sports Medicine',
    'XAP8' => 'Thoracic Physician',
    'XAP9' => 'Surgeon',
    'XAQ1' => 'Occupational Industrial Specialist',
    'XAQ2' => 'Geriatrics',
    'XAQ3' => 'Obstetrician',
    'XAQ4' => 'Audiologi',
    'XAS0' => 'Allergia ja immunologia',
    'XAS1' => 'Anestetiologi',
    'XAS2' => 'Reumalogia',
    'XAS3' => 'Kardiologia',
    'XAS4' => 'Dermatology',
    'XAS5' => 'Endocrinology',
    'XAS6' => 'General Medical Practice',
    'XAS7' => 'Gastroenterology',
    'XAS8' => 'Hematology',
    'XAS9' => 'Internal Medicine',
    'XAT0' => 'Nephrology',
    'XAT1' => 'Neurology',
    'XAT2' => 'Nuclear Medicine',
    'XAT3' => 'Gynecology/Obstetrics',
    'XAT4' => 'Oncology',
    'XAT5' => 'Ophthalmology',
    'XAT6' => 'Pediatrics',
    'XAT7' => 'Physical Medicine',
    'XAT8' => 'Psychiatry',
    'XAT9' => 'Lapsipsykologia',
    'XAU0' => 'Pulmonary Diseases',
    'XAU1' => 'Radiology',
    'XAU2' => 'Kiropraktikko',
    'XAU3' => 'Osteopathy',
    'XAU4' => 'Surgery-Orthopedic',
    'XAU5' => 'Surgery-Plastic',
    'XAU6' => 'Surgery-Thoracic',
    'XAU7' => 'Urology',
    'XAU8' => 'Preventive Medicine',
    'XAU9' => 'Infertility Specialist',
    'XAV0' => 'Diabetes',
    'XAV1' => 'Otolaryngology',
    'XAV2' => 'Akupunktio',
    'XAV3' => 'Plastic Surgeon',
    'XAV4' => 'Rheumatology Specialist',
    'XAV5' => 'Sydän- ja verisuoniasiat',
    'XAV6' => 'Neurological Surgery',
    'XAV7' => 'Colon and Rectal Surgery',
    'XAV8' => 'Vascular Surgery',
    'XAXA' => 'Thoracic Surgeon',
    'XAY5' => 'Immunologist',
    'XAY6' => 'Hypnotist',
    'XAY7' => 'Nutritionist',
    'XAY9' => 'Ilmailulääketiede',
    'XAZ1' => 'Podiatrist',
    'XAZ2' => 'Medical Specialist',
    'XAZ8' => 'Physician Assistant',
    'XAZ9' => 'Surgery',
    'XB37' => 'Diagnostic Radiologist',
    'XB47' => 'Allied Health Professional',
    'XB67' => 'Health Administrator',
    'XB6M' => 'Director of Health Information',
    'XB98' => 'Paramedic First Responder',
    'XB99' => 'Health Care Director',
    'XBA7' => 'Director of Emergency Room',
    'XBB2' => 'Contact Lens Specialist',
    'XBB3' => 'Rintahoidon spesialisti',
    'XBBB' => 'Nurse Practitioner',
    'XBC1' => 'Nurse',
    'XBC2' => 'Nursing Director',
    'XBC3' => 'Speech Therapist',
    'XBC4' => 'Nursing Administrator',
    'XBC9' => 'Nursing Supervisor',
    'XBD1' => 'Pharmacist',
    'XBD2' => 'Farmaseutikko (sertifioitu)',
    'XBE1' => 'Respiratory Therapy Director',
    'XBE2' => 'Physical Therapy Director',
    'XBE3' => 'Occupational Therapy Director',
    'XBE4' => 'Physical Therapist',
    'XBE5' => 'Physiotherapist',
    'XBF1' => 'Managed Care Director',
    'XBF2' => 'Home Health Care Director',
    'XBF9' => 'Medical Director',
    'XBFB' => 'Nurse Recruiter',
    'XBFC' => 'Physician Recruiter',
    'XBU1' => 'Maxillofacial Specialist',
    'XBV4' => 'Dentist',
    'XBV9' => 'Prosthodontics',
    'XBW0' => 'Dental Hygienist',
    'XBW3' => 'Group and Corporate Practice',
    'XBXA' => 'Registered Nurse',
    'XBXB' => 'Licensed Practical Nurse',
    'XBXC' => 'Physical Rehabilitation Nurse',
    'XBZ8' => 'Pedorthist',
    'XBZ9' => 'Orthotist',
    'XBZZ' => 'Physical Rehabilitation Medicine',
    'XD15' => 'Corporate Counsel/Legal',
    'XD26' => 'Lakimies',
    'XD51' => 'Vice-President Legal',
    'XD97' => 'Legal Executive',
    'XD98' => 'Legal Staff',
    'XD99' => 'Counsel',
    'XDA2' => 'Compliance Officer',
    'XDA6' => 'Compliance Director',
    'XDA7' => 'Compliance Manager',
    'XDW4' => 'Patent Law',
    'XDW5' => 'Contract Law',
    'XDW6' => 'White Collar Crime',
    'XDW7' => 'Lobbying',
    'XDW9' => 'Research Law',
    'XDX0' => 'Criminal Law',
    'XDX1' => 'General Counsel',
    'XDX2' => 'Siviililakimies',
    'XDX3' => 'Real Estate/Wills/Estate Planning',
    'XDX4' => 'Personal Injury Law',
    'XDX5' => 'Divorce Law',
    'XDX6' => 'Corporate and Business Law',
    'XDX7' => 'General Legal Practice',
    'XDX8' => 'Abestoskäräjöinti',
    'XDX9' => 'Environmental Law',
    'XDY0' => 'Family Law',
    'XDY1' => 'Konkurssilaki',
    'XDY2' => 'Litigation',
    'XDY3' => 'Torts',
    'XDY4' => 'Medical Malpractice',
    'XDY5' => 'Professional Liability',
    'XDY6' => 'Commercial Law',
    'XDZ9' => 'Compliance Staff',
    'XZ9L' => 'Social Worker',
    'XZA1' => 'Jäsen',
    'XZY8' => 'Dietician',
    'Z1X1' => 'Managing Member',
    'Z2B7' => 'Hallinnon johtaja',
    'Z2B8' => 'Ilmaliikenteen johtaja',
    'Z2B9' => 'Pankkijohtaja',
    'Z2C3' => 'Executive Secretary',
    'Z2C5' => 'Hospitality Executive',
    'Z2C6' => 'International Executive',
    'Z5E9' => 'Vice-President International',
    'Z642' => 'Assistenttidirektööri',
    'Z698' => 'Transportation Director',
    'Z699' => 'Director',
    'Z6GQ' => 'Näyttelevä johtaja',
    'Z6H6' => 'International Director',
    'Z6H7' => 'Co-Director',
    'Z715' => 'Case manager',
    'Z741' => 'Co-Manager',
    'Z799' => 'Manager',
    'Z7F7' => 'Insurance/Billing Supervisor',
    'Z7GQ' => 'Näyttelevä manageri',
    'Z7GR' => 'Complex Manager',
    'Z7P4' => 'Service Manager',
    'Z823' => 'Reporter',
    'Z856' => 'Assistenttitoimistomanageri',
    'Z888' => 'Receptionist',
    'Z889' => 'Receptionist Secretary',
    'Z899' => 'Assistentti',
    'Z8A8' => 'Medical Assistant',
    'Z8B9' => 'Ophthalmic Technician',
    'Z8GT' => 'Assistenttivirkailija',
    'Z8GU' => 'Assistenttialuejohtaja',
    'Z8Q0' => 'Assistenttivarapresidentti',
    'Z8Q7' => 'Assistenttimanageri',
    'Z8Q8' => 'Assistenttisihteeri',
    'Z900' => 'Tilijohtaja',
    'Z903' => 'Fellow',
    'Z910' => 'Coordinator',
    'Z917' => 'Customer Service Representative',
    'Z921' => 'Insurance Agent',
    'Z923' => 'Chartered Property and Casual Underwriter',
    'Z924' => 'Chartered Life Underwriter',
    'Z925' => 'Underwriter',
    'Z926' => 'Bond Underwriter',
    'Z932' => 'Publisher',
    'Z934' => 'Real Estate Agent',
    'Z936' => 'Store Superintendent',
    'Z937' => 'Superintendent',
    'Z938' => 'Supervisor',
    'Z939' => 'Virkailija',
    'Z940' => 'Assosiaatti',
    'Z941' => 'Assistenttikassahenkilö',
    'Z943' => 'Assistenttisuperintendentti',
    'Z998' => 'Parts Manager',
    'Z9GU' => 'Tilidirektööri',
    'Z9GV' => 'Tilimanageri',
    'Z9GW' => 'Administraattriksi',
    'Z9GX' => 'Neuvonantaja',
    'Z9GY' => 'Agentti',
    'Z9GZ' => 'Lakimies faktassa',
    'Z9HA' => 'Consultant',
    'Z9HB' => 'Contractor',
    'Z9HC' => 'Commercial',
    'Z9HD' => 'Committee Member',
    'Z9HG' => 'Corporate Representative',
    'Z9HH' => 'Correspondent',
    'Z9HI' => 'Kassahenkilö',
    'Z9HJ' => 'Dispersing Agent',
    'Z9HK' => 'Domestic',
    'Z9HL' => 'Editor',
    'Z9HM' => 'Foreign',
    'Z9HN' => 'Yleinen',
    'Z9HQ' => 'Ryhmä',
    'Z9HR' => 'International',
    'Z9HT' => 'Liquidating Agent',
    'Z9HX' => 'Port Captain',
    'Z9HY' => 'Port Director',
    'Z9HZ' => 'Port Manager',
    'Z9IA' => 'Publishing',
    'Z9IB' => 'Post Master',
    'Z9IC' => 'Publications Printer',
    'Z9IF' => 'Real Estate',
    'Z9IG' => 'Region',
    'Z9IH' => 'Rehabilitator',
    'Z9II' => 'Representative',
    'Z9IJ' => 'Retail',
    'Z9IK' => 'Retailers',
    'Z9IL' => 'Regional',
    'Z9IM' => 'Relations',
    'Z9IO' => 'Senior Editor',
    'Z9IQ' => 'Services',
    'Z9IR' => 'Savings',
    'Z9IS' => 'Transportation',
    'Z9IT' => 'Wholesale',
    'ZA48' => 'Oral and Maxillofacial Surgery',
    'ZAA0' => 'Specialized Dental',
    'ZAA1' => 'Pedodontist',
    'ZAA2' => 'Endodontics',
    'ZAA3' => 'Family And General Dentistry',
    'ZAA4' => 'Orthodontics',
    'ZAA5' => 'Pediatric Dentistry',
    'ZAA6' => 'Periodontics',
    'ZAA7' => 'Oral Pathologist',
    'ZAAB' => 'Dental Surgeon',
    'ZAV6' => 'Optometrists',
    'ZAV7' => 'Geriatric Specialist Optometry',
    'ZBXA' => 'Pain Management',
    'ZBXB' => 'Veripankkiiri',
    'ZBZZ' => 'Midwife Nurse',
  ),
  'dnb_sic_naics_code' => 
  array (
    700 => 'NAICS-koodi...',
    3599 => 'SIC-koodi',
  ),
  'dnb_states_iso' => 
  array (
    'AD' => 
    array (
      1 => 
      array (
        'code' => 'ALV',
        'name' => 'Andorra la Vella',
      ),
      2 => 
      array (
        'code' => 'CAN',
        'name' => 'Canillo',
      ),
      3 => 
      array (
        'code' => 'ENC',
        'name' => 'Encamp',
      ),
      4 => 
      array (
        'code' => 'ESE',
        'name' => 'Escaldes-Engordany',
      ),
      5 => 
      array (
        'code' => 'LMA',
        'name' => 'La Massana',
      ),
      6 => 
      array (
        'code' => 'ORD',
        'name' => 'Ordino',
      ),
      7 => 
      array (
        'code' => 'SJL',
        'name' => 'Sant Julià de Lòria',
      ),
    ),
    'AE' => 
    array (
      1 => 
      array (
        'code' => 'AZ',
        'name' => 'Abu Dhabi',
      ),
      2 => 
      array (
        'code' => 'AJ',
        'name' => 'Ajman',
      ),
      3 => 
      array (
        'code' => 'FU',
        'name' => 'Fujaira',
      ),
      4 => 
      array (
        'code' => 'SH',
        'name' => 'Sharja',
      ),
      5 => 
      array (
        'code' => 'DU',
        'name' => 'Dubai',
      ),
      6 => 
      array (
        'code' => 'RK',
        'name' => 'Ras al-Khaima',
      ),
      7 => 
      array (
        'code' => 'UQ',
        'name' => 'Umm al-Qaiwain',
      ),
    ),
    'AF' => 
    array (
      1 => 
      array (
        'code' => 'BAL',
        'name' => 'Balkh',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'Bamian',
      ),
      3 => 
      array (
        'code' => 'BDG',
        'name' => 'Badghis',
      ),
      4 => 
      array (
        'code' => 'BDS',
        'name' => 'Badakhshan',
      ),
      5 => 
      array (
        'code' => 'BGL',
        'name' => 'Baghlan',
      ),
      6 => 
      array (
        'code' => 'FRA',
        'name' => 'Farah',
      ),
      7 => 
      array (
        'code' => 'FYB',
        'name' => 'Faryab',
      ),
      8 => 
      array (
        'code' => 'GHA',
        'name' => 'Ghazni',
      ),
      9 => 
      array (
        'code' => 'GHO',
        'name' => 'Ghowr',
      ),
      10 => 
      array (
        'code' => 'HEL',
        'name' => 'Helmand',
      ),
      11 => 
      array (
        'code' => 'HER',
        'name' => 'Herat',
      ),
      12 => 
      array (
        'code' => 'JOW',
        'name' => 'Jowzjan',
      ),
      13 => 
      array (
        'code' => 'KAB',
        'name' => 'Kabul',
      ),
      14 => 
      array (
        'code' => 'KAN',
        'name' => 'Kandahar',
      ),
      15 => 
      array (
        'code' => 'KAP',
        'name' => 'Kapisa',
      ),
      16 => 
      array (
        'code' => 'KDZ',
        'name' => 'Kondoz',
      ),
      17 => 
      array (
        'code' => 'KHO',
        'name' => 'Khost',
      ),
      18 => 
      array (
        'code' => 'KNR',
        'name' => 'Konar',
      ),
      19 => 
      array (
        'code' => 'LAG',
        'name' => 'Laghman',
      ),
      20 => 
      array (
        'code' => 'LOW',
        'name' => 'Lowgar',
      ),
      21 => 
      array (
        'code' => 'NAN',
        'name' => 'Nangrahar',
      ),
      22 => 
      array (
        'code' => 'NIM',
        'name' => 'Nimruz',
      ),
      23 => 
      array (
        'code' => 'NUR',
        'name' => 'Nurestan',
      ),
      24 => 
      array (
        'code' => 'ORU',
        'name' => 'Oruzgan',
      ),
      25 => 
      array (
        'code' => 'PAR',
        'name' => 'Parwan',
      ),
      26 => 
      array (
        'code' => 'PIA',
        'name' => 'Paktia',
      ),
      27 => 
      array (
        'code' => 'PKA',
        'name' => 'Paktika',
      ),
      28 => 
      array (
        'code' => 'SAM',
        'name' => 'Samangan',
      ),
      29 => 
      array (
        'code' => 'SAR',
        'name' => 'Sar-e Pol',
      ),
      30 => 
      array (
        'code' => 'TAK',
        'name' => 'Takhar',
      ),
      31 => 
      array (
        'code' => 'WAR',
        'name' => 'Wardak',
      ),
      32 => 
      array (
        'code' => 'ZAB',
        'name' => 'Zabol',
      ),
    ),
    'AI' => 
    array (
      1 => 
      array (
        'code' => 'ANG',
        'name' => 'Anguillita',
      ),
      2 => 
      array (
        'code' => 'ANG',
        'name' => 'Anguila',
      ),
      3 => 
      array (
        'code' => 'DOG',
        'name' => 'Dog',
      ),
      4 => 
      array (
        'code' => 'LIT',
        'name' => 'Little Scrub',
      ),
      5 => 
      array (
        'code' => 'PRI',
        'name' => 'Prickly Pear',
      ),
      6 => 
      array (
        'code' => 'SAN',
        'name' => 'Sandy',
      ),
      7 => 
      array (
        'code' => 'SCR',
        'name' => 'Scrub',
      ),
      8 => 
      array (
        'code' => 'SEA',
        'name' => 'Seal',
      ),
      9 => 
      array (
        'code' => 'SOM',
        'name' => 'Sombrero',
      ),
    ),
    'AL' => 
    array (
      1 => 
      array (
        'code' => 'BR',
        'name' => 'Berat',
      ),
      2 => 
      array (
        'code' => 'BU',
        'name' => 'Bulqize',
      ),
      3 => 
      array (
        'code' => 'DI',
        'name' => 'Diber',
      ),
      4 => 
      array (
        'code' => 'DL',
        'name' => 'Delvine',
      ),
      5 => 
      array (
        'code' => 'DR',
        'name' => 'Durres',
      ),
      6 => 
      array (
        'code' => 'DV',
        'name' => 'Devoll',
      ),
      7 => 
      array (
        'code' => 'EL',
        'name' => 'Elbasan',
      ),
      8 => 
      array (
        'code' => 'ER',
        'name' => 'Kolonje',
      ),
      9 => 
      array (
        'code' => 'FR',
        'name' => 'Fier',
      ),
      10 => 
      array (
        'code' => 'GJ',
        'name' => 'Gjirokaster',
      ),
      11 => 
      array (
        'code' => 'GR',
        'name' => 'Gramsh',
      ),
      12 => 
      array (
        'code' => 'HA',
        'name' => 'Has',
      ),
      13 => 
      array (
        'code' => 'KA',
        'name' => 'Kavaje',
      ),
      14 => 
      array (
        'code' => 'KB',
        'name' => 'Kurbin',
      ),
      15 => 
      array (
        'code' => 'KC',
        'name' => 'Kucove',
      ),
      16 => 
      array (
        'code' => 'KO',
        'name' => 'Korce',
      ),
      17 => 
      array (
        'code' => 'KR',
        'name' => 'Kruje',
      ),
      18 => 
      array (
        'code' => 'KU',
        'name' => 'Kukes',
      ),
      19 => 
      array (
        'code' => 'LB',
        'name' => 'Librazhd',
      ),
      20 => 
      array (
        'code' => 'LE',
        'name' => 'Lezhe',
      ),
      21 => 
      array (
        'code' => 'LU',
        'name' => 'Lushnje',
      ),
      22 => 
      array (
        'code' => 'MK',
        'name' => 'Mallakaster',
      ),
      23 => 
      array (
        'code' => 'MM',
        'name' => 'Malesi e Madhe',
      ),
      24 => 
      array (
        'code' => 'MR',
        'name' => 'Mirdite',
      ),
      25 => 
      array (
        'code' => 'MT',
        'name' => 'Mat',
      ),
      26 => 
      array (
        'code' => 'PG',
        'name' => 'Pogradec',
      ),
      27 => 
      array (
        'code' => 'PQ',
        'name' => 'Peqin',
      ),
      28 => 
      array (
        'code' => 'PR',
        'name' => 'Permet',
      ),
      29 => 
      array (
        'code' => 'PU',
        'name' => 'Puke',
      ),
      30 => 
      array (
        'code' => 'SH',
        'name' => 'Shkoder',
      ),
      31 => 
      array (
        'code' => 'SK',
        'name' => 'Skrapar',
      ),
      32 => 
      array (
        'code' => 'SR',
        'name' => 'Sarande',
      ),
      33 => 
      array (
        'code' => 'TE',
        'name' => 'Tepelene',
      ),
      34 => 
      array (
        'code' => 'TP',
        'name' => 'Tropoje',
      ),
      35 => 
      array (
        'code' => 'TR',
        'name' => 'Tirane',
      ),
      36 => 
      array (
        'code' => 'VL',
        'name' => 'Vlore',
      ),
    ),
    'AM' => 
    array (
      1 => 
      array (
        'code' => 'AGT',
        'name' => 'Aragatsotn',
      ),
      2 => 
      array (
        'code' => 'ARR',
        'name' => 'Ararat',
      ),
      3 => 
      array (
        'code' => 'ARM',
        'name' => 'Armavir',
      ),
      4 => 
      array (
        'code' => 'GEG',
        'name' => 'Geghark \'unik\'',
      ),
      5 => 
      array (
        'code' => 'KOT',
        'name' => 'Kotayk\'',
      ),
      6 => 
      array (
        'code' => 'LOR',
        'name' => 'Lorri',
      ),
      7 => 
      array (
        'code' => 'SHI',
        'name' => 'Shirak',
      ),
      8 => 
      array (
        'code' => 'SYU',
        'name' => 'Syunik\'',
      ),
      9 => 
      array (
        'code' => 'TAV',
        'name' => 'Tavush',
      ),
      10 => 
      array (
        'code' => 'VAY',
        'name' => 'Vayots\' Dzor',
      ),
      11 => 
      array (
        'code' => 'YER',
        'name' => 'Yerevan',
      ),
    ),
    'AN' => 
    array (
      1 => 
      array (
        'code' => 'BON',
        'name' => 'Bonaire',
      ),
      2 => 
      array (
        'code' => 'CUR',
        'name' => 'Curaçao',
      ),
      3 => 
      array (
        'code' => 'SAB',
        'name' => 'Saba',
      ),
      4 => 
      array (
        'code' => 'SEU',
        'name' => 'Sint Eustatius',
      ),
      5 => 
      array (
        'code' => 'SMA',
        'name' => 'Sint Maarten',
      ),
    ),
    'AO' => 
    array (
      1 => 
      array (
        'code' => 'BGO',
        'name' => 'Bengo',
      ),
      2 => 
      array (
        'code' => 'BGU',
        'name' => 'Benguela',
      ),
      3 => 
      array (
        'code' => 'BIE',
        'name' => 'Bie',
      ),
      4 => 
      array (
        'code' => 'CAB',
        'name' => 'Cabinda',
      ),
      5 => 
      array (
        'code' => 'CCU',
        'name' => 'Cuando-Cubango',
      ),
      6 => 
      array (
        'code' => 'CNO',
        'name' => 'Cuanza Norte',
      ),
      7 => 
      array (
        'code' => 'CUS',
        'name' => 'Cuanza Sul',
      ),
      8 => 
      array (
        'code' => 'CNN',
        'name' => 'Cunene',
      ),
      9 => 
      array (
        'code' => 'HUA',
        'name' => 'Huambo',
      ),
      10 => 
      array (
        'code' => 'HUI',
        'name' => 'Huila',
      ),
      11 => 
      array (
        'code' => 'LUA',
        'name' => 'Luanda',
      ),
      12 => 
      array (
        'code' => 'LNO',
        'name' => 'Lunda Norte',
      ),
      13 => 
      array (
        'code' => 'LSU',
        'name' => 'Lunda Sul',
      ),
      14 => 
      array (
        'code' => 'MAL',
        'name' => 'Malange',
      ),
      15 => 
      array (
        'code' => 'MOX',
        'name' => 'Moxico',
      ),
      16 => 
      array (
        'code' => 'NAM',
        'name' => 'Namibe',
      ),
      17 => 
      array (
        'code' => 'UIG',
        'name' => 'Uige',
      ),
      18 => 
      array (
        'code' => 'ZAI',
        'name' => 'Zaire',
      ),
    ),
    'AQ' => 
    array (
      1 => 
      array (
        'code' => 'ASG',
        'name' => 'Saint George',
      ),
      2 => 
      array (
        'code' => 'ASH',
        'name' => 'Saint Philip',
      ),
      3 => 
      array (
        'code' => 'ASJ',
        'name' => 'Saint John',
      ),
      4 => 
      array (
        'code' => 'ASL',
        'name' => 'Saint Paul',
      ),
      5 => 
      array (
        'code' => 'ASM',
        'name' => 'Saint Mary',
      ),
      6 => 
      array (
        'code' => 'ASR',
        'name' => 'Saint Peter',
      ),
      7 => 
      array (
        'code' => 'BAR',
        'name' => 'Barbuda',
      ),
      8 => 
      array (
        'code' => 'RED',
        'name' => 'Redonda',
      ),
    ),
    'AR' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Antartida e Islas del Atlantico',
      ),
      2 => 
      array (
        'code' => 'BA',
        'name' => 'Buenos Aires',
      ),
      3 => 
      array (
        'code' => 'CA',
        'name' => 'Catamarca',
      ),
      4 => 
      array (
        'code' => 'CH',
        'name' => 'Chaco',
      ),
      5 => 
      array (
        'code' => 'CU',
        'name' => 'Chubut',
      ),
      6 => 
      array (
        'code' => 'CO',
        'name' => 'Cordoba',
      ),
      7 => 
      array (
        'code' => 'CR',
        'name' => 'Corrientes',
      ),
      8 => 
      array (
        'code' => 'CF',
        'name' => 'Capital Federal',
      ),
      9 => 
      array (
        'code' => 'ER',
        'name' => 'Entre Rios',
      ),
      10 => 
      array (
        'code' => 'FO',
        'name' => 'Formosa',
      ),
      11 => 
      array (
        'code' => 'JU',
        'name' => 'Jujuy',
      ),
      12 => 
      array (
        'code' => 'LP',
        'name' => 'La Pampa',
      ),
      13 => 
      array (
        'code' => 'LR',
        'name' => 'La Rioja',
      ),
      14 => 
      array (
        'code' => 'ME',
        'name' => 'Mendoza',
      ),
      15 => 
      array (
        'code' => 'MI',
        'name' => 'Misiones',
      ),
      16 => 
      array (
        'code' => 'NE',
        'name' => 'Neuquen',
      ),
      17 => 
      array (
        'code' => 'RN',
        'name' => 'Rio Negro',
      ),
      18 => 
      array (
        'code' => 'SA',
        'name' => 'Salta',
      ),
      19 => 
      array (
        'code' => 'SJ',
        'name' => 'San Juan',
      ),
      20 => 
      array (
        'code' => 'SL',
        'name' => 'San Luis',
      ),
      21 => 
      array (
        'code' => 'SC',
        'name' => 'Santa Cruz',
      ),
      22 => 
      array (
        'code' => 'SF',
        'name' => 'Santa Fe',
      ),
      23 => 
      array (
        'code' => 'SD',
        'name' => 'Santiago del Estero',
      ),
      24 => 
      array (
        'code' => 'TF',
        'name' => 'Tierra del Fuego',
      ),
      25 => 
      array (
        'code' => 'TU',
        'name' => 'Tucuman',
      ),
    ),
    'AS' => 
    array (
      1 => 
      array (
        'code' => 'E',
        'name' => 'Eastern',
      ),
      2 => 
      array (
        'code' => 'M',
        'name' => 'Manu\'a',
      ),
      3 => 
      array (
        'code' => 'R',
        'name' => 'Rose Island',
      ),
      4 => 
      array (
        'code' => 'S',
        'name' => 'Swains Island',
      ),
      5 => 
      array (
        'code' => 'W',
        'name' => 'Western',
      ),
    ),
    'AT' => 
    array (
      1 => 
      array (
        'code' => 'BUR',
        'name' => 'Burgenland',
      ),
      2 => 
      array (
        'code' => 'KAR',
        'name' => 'Krnten',
      ),
      3 => 
      array (
        'code' => 'NOS',
        'name' => 'Niederöesterreich',
      ),
      4 => 
      array (
        'code' => 'OOS',
        'name' => 'Oberöesterreich',
      ),
      5 => 
      array (
        'code' => 'SAL',
        'name' => 'Salzburg',
      ),
      6 => 
      array (
        'code' => 'STE',
        'name' => 'Steiermark',
      ),
      7 => 
      array (
        'code' => 'TIR',
        'name' => 'Tirol',
      ),
      8 => 
      array (
        'code' => 'VOR',
        'name' => 'Vorarlberg',
      ),
      9 => 
      array (
        'code' => 'WIE',
        'name' => 'Wien',
      ),
    ),
    'AU' => 
    array (
      1 => 
      array (
        'code' => 'ACT',
        'name' => 'Australian Capital Territory',
      ),
      2 => 
      array (
        'code' => 'NSW',
        'name' => 'New South Wales',
      ),
      3 => 
      array (
        'code' => 'NT',
        'name' => 'Northern Territory',
      ),
      4 => 
      array (
        'code' => 'QLD',
        'name' => 'Queensland',
      ),
      5 => 
      array (
        'code' => 'SA',
        'name' => 'South Australia',
      ),
      6 => 
      array (
        'code' => 'TAS',
        'name' => 'Tasmania',
      ),
      7 => 
      array (
        'code' => 'VIC',
        'name' => 'Victoria',
      ),
      8 => 
      array (
        'code' => 'WA',
        'name' => 'Western Australia',
      ),
    ),
    'AW' => 
    array (
      1 => 
      array (
        'code' => 'ARU',
        'name' => 'Aruba',
      ),
      2 => 
      array (
        'code' => 'DRU',
        'name' => 'Druif Beach',
      ),
      3 => 
      array (
        'code' => 'MAN',
        'name' => 'Manchebo Beach',
      ),
      4 => 
      array (
        'code' => 'NOO',
        'name' => 'Noord',
      ),
      5 => 
      array (
        'code' => 'ORA',
        'name' => 'Oranjestad',
      ),
      6 => 
      array (
        'code' => 'PAL',
        'name' => 'Palm Beach',
      ),
      7 => 
      array (
        'code' => 'ROO',
        'name' => 'Rooi Thomas',
      ),
      8 => 
      array (
        'code' => 'SIN',
        'name' => 'Sint Nicolaas',
      ),
      9 => 
      array (
        'code' => 'SIN',
        'name' => 'Sint Nicolas',
      ),
      10 => 
      array (
        'code' => 'WAY',
        'name' => 'Wayaca',
      ),
    ),
    'AZ' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Ali Bayramli',
      ),
      2 => 
      array (
        'code' => 'ABS',
        'name' => 'Abseron',
      ),
      3 => 
      array (
        'code' => 'AGC',
        'name' => 'AgcabAdi',
      ),
      4 => 
      array (
        'code' => 'AGM',
        'name' => 'Agdam',
      ),
      5 => 
      array (
        'code' => 'AGS',
        'name' => 'Agdas',
      ),
      6 => 
      array (
        'code' => 'AGA',
        'name' => 'Agstafa',
      ),
      7 => 
      array (
        'code' => 'AGU',
        'name' => 'Agsu',
      ),
      8 => 
      array (
        'code' => 'AST',
        'name' => 'Astara',
      ),
      9 => 
      array (
        'code' => 'BA',
        'name' => 'Baki',
      ),
      10 => 
      array (
        'code' => 'BAB',
        'name' => 'BabAk',
      ),
      11 => 
      array (
        'code' => 'BAL',
        'name' => 'BalakAn',
      ),
      12 => 
      array (
        'code' => 'BAR',
        'name' => 'BArdA',
      ),
      13 => 
      array (
        'code' => 'BEY',
        'name' => 'Beylaqan',
      ),
      14 => 
      array (
        'code' => 'BIL',
        'name' => 'Bilasuvar',
      ),
      15 => 
      array (
        'code' => 'CAB',
        'name' => 'Cabrayil',
      ),
      16 => 
      array (
        'code' => 'CAL',
        'name' => 'Calilabab',
      ),
      17 => 
      array (
        'code' => 'CUL',
        'name' => 'Culfa',
      ),
      18 => 
      array (
        'code' => 'DAS',
        'name' => 'Daskasan',
      ),
      19 => 
      array (
        'code' => 'DAV',
        'name' => 'Davaci',
      ),
      20 => 
      array (
        'code' => 'FUZ',
        'name' => 'Fuzuli',
      ),
      21 => 
      array (
        'code' => 'GA',
        'name' => 'Ganca',
      ),
      22 => 
      array (
        'code' => 'GAD',
        'name' => 'Gadabay',
      ),
      23 => 
      array (
        'code' => 'GOR',
        'name' => 'Goranboy',
      ),
      24 => 
      array (
        'code' => 'GOY',
        'name' => 'Goycay',
      ),
      25 => 
      array (
        'code' => 'HAC',
        'name' => 'Haciqabul',
      ),
      26 => 
      array (
        'code' => 'IMI',
        'name' => 'Imisli',
      ),
      27 => 
      array (
        'code' => 'ISM',
        'name' => 'Ismayilli',
      ),
      28 => 
      array (
        'code' => 'KAL',
        'name' => 'Kalbacar',
      ),
      29 => 
      array (
        'code' => 'KUR',
        'name' => 'Kurdamir',
      ),
      30 => 
      array (
        'code' => 'LA',
        'name' => 'Lankaran',
      ),
      31 => 
      array (
        'code' => 'LAC',
        'name' => 'Lacin',
      ),
      32 => 
      array (
        'code' => 'LAN',
        'name' => 'Lankaran',
      ),
      33 => 
      array (
        'code' => 'LER',
        'name' => 'Lerik',
      ),
      34 => 
      array (
        'code' => 'MAS',
        'name' => 'Masalli',
      ),
      35 => 
      array (
        'code' => 'MI',
        'name' => 'Mingacevir',
      ),
      36 => 
      array (
        'code' => 'NA',
        'name' => 'Naftalan',
      ),
      37 => 
      array (
        'code' => 'NX',
        'name' => 'Naxcivan',
      ),
      38 => 
      array (
        'code' => 'NEF',
        'name' => 'Neftcala',
      ),
      39 => 
      array (
        'code' => 'OGU',
        'name' => 'Oguz',
      ),
      40 => 
      array (
        'code' => 'ORD',
        'name' => 'Ordubad',
      ),
      41 => 
      array (
        'code' => 'QAB',
        'name' => 'Qabala',
      ),
      42 => 
      array (
        'code' => 'QAX',
        'name' => 'Qax',
      ),
      43 => 
      array (
        'code' => 'QAZ',
        'name' => 'Qazax',
      ),
      44 => 
      array (
        'code' => 'QOB',
        'name' => 'Qobustan',
      ),
      45 => 
      array (
        'code' => 'QBA',
        'name' => 'Quba',
      ),
      46 => 
      array (
        'code' => 'QBI',
        'name' => 'Qubadli',
      ),
      47 => 
      array (
        'code' => 'QUS',
        'name' => 'Qusar',
      ),
      48 => 
      array (
        'code' => 'SA',
        'name' => 'Saki',
      ),
      49 => 
      array (
        'code' => 'SAT',
        'name' => 'Saatli',
      ),
      50 => 
      array (
        'code' => 'SAB',
        'name' => 'Sabirabad',
      ),
      51 => 
      array (
        'code' => 'SAD',
        'name' => 'Sadarak',
      ),
      52 => 
      array (
        'code' => 'SAH',
        'name' => 'Sahbuz',
      ),
      53 => 
      array (
        'code' => 'SAK',
        'name' => 'Saki',
      ),
      54 => 
      array (
        'code' => 'SAL',
        'name' => 'Salyan',
      ),
      55 => 
      array (
        'code' => 'SM',
        'name' => 'Sumqayit',
      ),
      56 => 
      array (
        'code' => 'SMI',
        'name' => 'Samaxi',
      ),
      57 => 
      array (
        'code' => 'SKR',
        'name' => 'Samkir',
      ),
      58 => 
      array (
        'code' => 'SMX',
        'name' => 'Samux',
      ),
      59 => 
      array (
        'code' => 'SAR',
        'name' => 'Sarur',
      ),
      60 => 
      array (
        'code' => 'SIY',
        'name' => 'Siyazan',
      ),
      61 => 
      array (
        'code' => 'SS',
        'name' => 'Susa',
      ),
      62 => 
      array (
        'code' => 'SUS',
        'name' => 'Susa',
      ),
      63 => 
      array (
        'code' => 'TAR',
        'name' => 'Tartar',
      ),
      64 => 
      array (
        'code' => 'TOV',
        'name' => 'Tovuz',
      ),
      65 => 
      array (
        'code' => 'UCA',
        'name' => 'Ucar',
      ),
      66 => 
      array (
        'code' => 'XA',
        'name' => 'Xankandi',
      ),
      67 => 
      array (
        'code' => 'XAC',
        'name' => 'Xacmaz',
      ),
      68 => 
      array (
        'code' => 'XAN',
        'name' => 'Xanlar',
      ),
      69 => 
      array (
        'code' => 'XIZ',
        'name' => 'Xizi',
      ),
      70 => 
      array (
        'code' => 'XCI',
        'name' => 'Xocali',
      ),
      71 => 
      array (
        'code' => 'XVD',
        'name' => 'Xocavand',
      ),
      72 => 
      array (
        'code' => 'YAR',
        'name' => 'Yardimli',
      ),
      73 => 
      array (
        'code' => 'YEV',
        'name' => 'Yevlax',
      ),
      74 => 
      array (
        'code' => 'ZAN',
        'name' => 'Zangilan',
      ),
      75 => 
      array (
        'code' => 'ZAQ',
        'name' => 'Zaqatala',
      ),
      76 => 
      array (
        'code' => 'ZAR',
        'name' => 'Zardab',
      ),
    ),
    'BA' => 
    array (
      1 => 
      array (
        'code' => 'BRO',
        'name' => 'Brcko district',
      ),
      2 => 
      array (
        'code' => 'FBP',
        'name' => 'Bosanskopodrinjski Kanton',
      ),
      3 => 
      array (
        'code' => 'FHN',
        'name' => 'Hercegovacko-neretvanski Kanton',
      ),
      4 => 
      array (
        'code' => 'FPO',
        'name' => 'Posavski Kanton',
      ),
      5 => 
      array (
        'code' => 'FSA',
        'name' => 'Kanton Sarajevo',
      ),
      6 => 
      array (
        'code' => 'FSB',
        'name' => 'Srednjebosanski Kanton',
      ),
      7 => 
      array (
        'code' => 'FTU',
        'name' => 'Tuzlanski Kanton',
      ),
      8 => 
      array (
        'code' => 'FUS',
        'name' => 'Unsko-Sanski Kanton',
      ),
      9 => 
      array (
        'code' => 'FZA',
        'name' => 'Zapadnobosanska',
      ),
      10 => 
      array (
        'code' => 'FZE',
        'name' => 'Zenicko-Dobojski Kanton',
      ),
      11 => 
      array (
        'code' => 'FZH',
        'name' => 'Zapadnohercegovacka Zupanija',
      ),
      12 => 
      array (
        'code' => 'SBI',
        'name' => 'Bijeljina',
      ),
      13 => 
      array (
        'code' => 'SBL',
        'name' => 'Banja Luka',
      ),
      14 => 
      array (
        'code' => 'SDO',
        'name' => 'Doboj',
      ),
      15 => 
      array (
        'code' => 'SFO',
        'name' => 'Foca',
      ),
      16 => 
      array (
        'code' => 'SSR',
        'name' => 'Sarajevo-Romanija or Sokolac',
      ),
      17 => 
      array (
        'code' => 'STR',
        'name' => 'Trebinje',
      ),
      18 => 
      array (
        'code' => 'SVL',
        'name' => 'Vlasenica',
      ),
    ),
    'BB' => 
    array (
      1 => 
      array (
        'code' => 'CC',
        'name' => 'Christ Church',
      ),
      2 => 
      array (
        'code' => 'AND',
        'name' => 'Saint Andrew',
      ),
      3 => 
      array (
        'code' => 'GEO',
        'name' => 'Saint George',
      ),
      4 => 
      array (
        'code' => 'JAM',
        'name' => 'Saint James',
      ),
      5 => 
      array (
        'code' => 'JOH',
        'name' => 'Saint John',
      ),
      6 => 
      array (
        'code' => 'JOS',
        'name' => 'Saint Joseph',
      ),
      7 => 
      array (
        'code' => 'LUC',
        'name' => 'Saint Lucy',
      ),
      8 => 
      array (
        'code' => 'MIC',
        'name' => 'Saint Michael',
      ),
      9 => 
      array (
        'code' => 'PET',
        'name' => 'Saint Peter',
      ),
      10 => 
      array (
        'code' => 'PHI',
        'name' => 'Saint Philip',
      ),
      11 => 
      array (
        'code' => 'THO',
        'name' => 'Saint Thomas',
      ),
    ),
    'BD' => 
    array (
      1 => 
      array (
        'code' => 'BAR',
        'name' => 'Barisal',
      ),
      2 => 
      array (
        'code' => 'CHI',
        'name' => 'Chittagong',
      ),
      3 => 
      array (
        'code' => 'DHA',
        'name' => 'Dhaka',
      ),
      4 => 
      array (
        'code' => 'KHU',
        'name' => 'Khulna',
      ),
      5 => 
      array (
        'code' => 'RAJ',
        'name' => 'Rajshahi',
      ),
      6 => 
      array (
        'code' => 'SYL',
        'name' => 'Sylhet',
      ),
    ),
    'BE' => 
    array (
      1 => 
      array (
        'code' => 'VAN',
        'name' => 'Antwerpen',
      ),
      2 => 
      array (
        'code' => 'WBR',
        'name' => 'Brabant Wallon',
      ),
      3 => 
      array (
        'code' => 'WHT',
        'name' => 'Hainaut',
      ),
      4 => 
      array (
        'code' => 'WLG',
        'name' => 'Liege',
      ),
      5 => 
      array (
        'code' => 'VLI',
        'name' => 'Limburg',
      ),
      6 => 
      array (
        'code' => 'WLX',
        'name' => 'Luxembourg',
      ),
      7 => 
      array (
        'code' => 'WNA',
        'name' => 'Namur',
      ),
      8 => 
      array (
        'code' => 'VOV',
        'name' => 'Oost-Vlaanderen',
      ),
      9 => 
      array (
        'code' => 'VBR',
        'name' => 'Vlaams Brabant',
      ),
      10 => 
      array (
        'code' => 'VWV',
        'name' => 'West-Vlaanderen',
      ),
    ),
    'BF' => 
    array (
      1 => 
      array (
        'code' => 'BAL',
        'name' => 'Bale',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'Bam',
      ),
      3 => 
      array (
        'code' => 'BAN',
        'name' => 'Banwa',
      ),
      4 => 
      array (
        'code' => 'BAZ',
        'name' => 'Bazega',
      ),
      5 => 
      array (
        'code' => 'BOR',
        'name' => 'Bougouriba',
      ),
      6 => 
      array (
        'code' => 'BLG',
        'name' => 'Boulgou',
      ),
      7 => 
      array (
        'code' => 'BOK',
        'name' => 'Boulkiemde',
      ),
      8 => 
      array (
        'code' => 'COM',
        'name' => 'Comoe',
      ),
      9 => 
      array (
        'code' => 'GAN',
        'name' => 'Ganzourgou',
      ),
      10 => 
      array (
        'code' => 'GNA',
        'name' => 'Gnagna',
      ),
      11 => 
      array (
        'code' => 'GOU',
        'name' => 'Gourma',
      ),
      12 => 
      array (
        'code' => 'HOU',
        'name' => 'Houet',
      ),
      13 => 
      array (
        'code' => 'IOA',
        'name' => 'Ioba',
      ),
      14 => 
      array (
        'code' => 'KAD',
        'name' => 'Kadiogo',
      ),
      15 => 
      array (
        'code' => 'KEN',
        'name' => 'Kenedougou',
      ),
      16 => 
      array (
        'code' => 'KOD',
        'name' => 'Komondjari',
      ),
      17 => 
      array (
        'code' => 'KOP',
        'name' => 'Kompienga',
      ),
      18 => 
      array (
        'code' => 'KOS',
        'name' => 'Kossi',
      ),
      19 => 
      array (
        'code' => 'KOL',
        'name' => 'Koulpelogo',
      ),
      20 => 
      array (
        'code' => 'KOT',
        'name' => 'Kouritenga',
      ),
      21 => 
      array (
        'code' => 'KOW',
        'name' => 'Kourweogo',
      ),
      22 => 
      array (
        'code' => 'LER',
        'name' => 'Leraba',
      ),
      23 => 
      array (
        'code' => 'LOR',
        'name' => 'Loroum',
      ),
      24 => 
      array (
        'code' => 'MOU',
        'name' => 'Mouhoun',
      ),
      25 => 
      array (
        'code' => 'NAH',
        'name' => 'Nahouri',
      ),
      26 => 
      array (
        'code' => 'NAM',
        'name' => 'Namentenga',
      ),
      27 => 
      array (
        'code' => 'NAY',
        'name' => 'Nayala',
      ),
      28 => 
      array (
        'code' => 'NOU',
        'name' => 'Noumbiel',
      ),
      29 => 
      array (
        'code' => 'OUB',
        'name' => 'Oubritenga',
      ),
      30 => 
      array (
        'code' => 'OUD',
        'name' => 'Oudalan',
      ),
      31 => 
      array (
        'code' => 'PAS',
        'name' => 'Passore',
      ),
      32 => 
      array (
        'code' => 'PON',
        'name' => 'Poni',
      ),
      33 => 
      array (
        'code' => 'SAG',
        'name' => 'Sanguie',
      ),
      34 => 
      array (
        'code' => 'SAM',
        'name' => 'Sanmatenga',
      ),
      35 => 
      array (
        'code' => 'SEN',
        'name' => 'Seno',
      ),
      36 => 
      array (
        'code' => 'SIS',
        'name' => 'Sissili',
      ),
      37 => 
      array (
        'code' => 'SOM',
        'name' => 'Soum',
      ),
      38 => 
      array (
        'code' => 'SOR',
        'name' => 'Sourou',
      ),
      39 => 
      array (
        'code' => 'TAP',
        'name' => 'Tapoa',
      ),
      40 => 
      array (
        'code' => 'TUY',
        'name' => 'Tuy',
      ),
      41 => 
      array (
        'code' => 'YAG',
        'name' => 'Yagha',
      ),
      42 => 
      array (
        'code' => 'YAT',
        'name' => 'Yatenga',
      ),
      43 => 
      array (
        'code' => 'ZIR',
        'name' => 'Ziro',
      ),
      44 => 
      array (
        'code' => 'ZOD',
        'name' => 'Zondoma',
      ),
      45 => 
      array (
        'code' => 'ZOW',
        'name' => 'Zoundweogo',
      ),
    ),
    'BG' => 
    array (
      1 => 
      array (
        'code' => 'BG-01',
        'name' => 'Blagoevgrad',
      ),
      2 => 
      array (
        'code' => 'BG-02',
        'name' => 'Burgas',
      ),
      3 => 
      array (
        'code' => 'BG-03',
        'name' => 'Dobrich',
      ),
      4 => 
      array (
        'code' => 'BG-04',
        'name' => 'Gabrovo',
      ),
      5 => 
      array (
        'code' => 'BG-05',
        'name' => 'Haskovo',
      ),
      6 => 
      array (
        'code' => 'BG-06',
        'name' => 'Kardjali',
      ),
      7 => 
      array (
        'code' => 'BG-07',
        'name' => 'Kyustendil',
      ),
      8 => 
      array (
        'code' => 'BG-08',
        'name' => 'Lovech',
      ),
      9 => 
      array (
        'code' => 'BG-09',
        'name' => 'Montana',
      ),
      10 => 
      array (
        'code' => 'BG-10',
        'name' => 'Pazardjik',
      ),
      11 => 
      array (
        'code' => 'BG-11',
        'name' => 'Pernik',
      ),
      12 => 
      array (
        'code' => 'BG-12',
        'name' => 'Pleven',
      ),
      13 => 
      array (
        'code' => 'BG-13',
        'name' => 'Plovdiv',
      ),
      14 => 
      array (
        'code' => 'BG-14',
        'name' => 'Razgrad',
      ),
      15 => 
      array (
        'code' => 'BG-15',
        'name' => 'Shumen',
      ),
      16 => 
      array (
        'code' => 'BG-16',
        'name' => 'Silistra',
      ),
      17 => 
      array (
        'code' => 'BG-17',
        'name' => 'Sliven',
      ),
      18 => 
      array (
        'code' => 'BG-18',
        'name' => 'Smolyan',
      ),
      19 => 
      array (
        'code' => 'BG-19',
        'name' => 'Sofia',
      ),
      20 => 
      array (
        'code' => 'BG-20',
        'name' => 'Sofia - town',
      ),
      21 => 
      array (
        'code' => 'BG-21',
        'name' => 'Stara Zagora',
      ),
      22 => 
      array (
        'code' => 'BG-22',
        'name' => 'Targovishte',
      ),
      23 => 
      array (
        'code' => 'BG-23',
        'name' => 'Varna',
      ),
      24 => 
      array (
        'code' => 'BG-24',
        'name' => 'Veliko Tarnovo',
      ),
      25 => 
      array (
        'code' => 'BG-25',
        'name' => 'Vidin',
      ),
      26 => 
      array (
        'code' => 'BG-26',
        'name' => 'Vratza',
      ),
      27 => 
      array (
        'code' => 'BG-27',
        'name' => 'Yambol',
      ),
    ),
    'BH' => 
    array (
      1 => 
      array (
        'code' => 'CAP',
        'name' => 'Capital',
      ),
      2 => 
      array (
        'code' => 'CEN',
        'name' => 'Central',
      ),
      3 => 
      array (
        'code' => 'MUH',
        'name' => 'Muharraq',
      ),
      4 => 
      array (
        'code' => 'NOR',
        'name' => 'Northern',
      ),
      5 => 
      array (
        'code' => 'SOU',
        'name' => 'Southern',
      ),
    ),
    'BI' => 
    array (
      1 => 
      array (
        'code' => 'BB',
        'name' => 'Bubanza',
      ),
      2 => 
      array (
        'code' => 'BJ',
        'name' => 'Bujumbura',
      ),
      3 => 
      array (
        'code' => 'BR',
        'name' => 'Bururi',
      ),
      4 => 
      array (
        'code' => 'CA',
        'name' => 'Cankuzo',
      ),
      5 => 
      array (
        'code' => 'CI',
        'name' => 'Cibitoke',
      ),
      6 => 
      array (
        'code' => 'GI',
        'name' => 'Gitega',
      ),
      7 => 
      array (
        'code' => 'KR',
        'name' => 'Karuzi',
      ),
      8 => 
      array (
        'code' => 'KY',
        'name' => 'Kayanza',
      ),
      9 => 
      array (
        'code' => 'KI',
        'name' => 'Kirundo',
      ),
      10 => 
      array (
        'code' => 'MA',
        'name' => 'Makamba',
      ),
      11 => 
      array (
        'code' => 'MU',
        'name' => 'Muramvya',
      ),
      12 => 
      array (
        'code' => 'MY',
        'name' => 'Muyinga',
      ),
      13 => 
      array (
        'code' => 'MW',
        'name' => 'Mwaro',
      ),
      14 => 
      array (
        'code' => 'NG',
        'name' => 'Ngozi',
      ),
      15 => 
      array (
        'code' => 'RT',
        'name' => 'Rutana',
      ),
      16 => 
      array (
        'code' => 'RY',
        'name' => 'Ruyigi',
      ),
    ),
    'BJ' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Alibori',
      ),
      2 => 
      array (
        'code' => 'AK',
        'name' => 'Atakora',
      ),
      3 => 
      array (
        'code' => 'AQ',
        'name' => 'Atlantique',
      ),
      4 => 
      array (
        'code' => 'BO',
        'name' => 'Borgou',
      ),
      5 => 
      array (
        'code' => 'CO',
        'name' => 'Collines',
      ),
      6 => 
      array (
        'code' => 'DO',
        'name' => 'Donga',
      ),
      7 => 
      array (
        'code' => 'KO',
        'name' => 'Kouffo',
      ),
      8 => 
      array (
        'code' => 'LI',
        'name' => 'Littoral',
      ),
      9 => 
      array (
        'code' => 'MO',
        'name' => 'Mono',
      ),
      10 => 
      array (
        'code' => 'OU',
        'name' => 'Oueme',
      ),
      11 => 
      array (
        'code' => 'PL',
        'name' => 'Plateau',
      ),
      12 => 
      array (
        'code' => 'ZO',
        'name' => 'Zou',
      ),
    ),
    'BM' => 
    array (
      1 => 
      array (
        'code' => 'DS',
        'name' => 'Devonshire',
      ),
      2 => 
      array (
        'code' => 'HC',
        'name' => 'Hamilton City',
      ),
      3 => 
      array (
        'code' => 'HA',
        'name' => 'Hamilton',
      ),
      4 => 
      array (
        'code' => 'PG',
        'name' => 'Paget',
      ),
      5 => 
      array (
        'code' => 'PB',
        'name' => 'Pembroke',
      ),
      6 => 
      array (
        'code' => 'GC',
        'name' => 'Saint George City',
      ),
      7 => 
      array (
        'code' => 'SG',
        'name' => 'Saint George\'s',
      ),
      8 => 
      array (
        'code' => 'SA',
        'name' => 'Sandys',
      ),
      9 => 
      array (
        'code' => 'SM',
        'name' => 'Smith\'s',
      ),
      10 => 
      array (
        'code' => 'SH',
        'name' => 'Southampton',
      ),
      11 => 
      array (
        'code' => 'WA',
        'name' => 'Warwick',
      ),
    ),
    'BN' => 
    array (
      1 => 
      array (
        'code' => 'BEL',
        'name' => 'Belait',
      ),
      2 => 
      array (
        'code' => 'BRM',
        'name' => 'Brunei and Muara',
      ),
      3 => 
      array (
        'code' => 'TEM',
        'name' => 'Temburong',
      ),
      4 => 
      array (
        'code' => 'TUT',
        'name' => 'Tutong',
      ),
    ),
    'BO' => 
    array (
      1 => 
      array (
        'code' => 'BEN',
        'name' => 'Beni',
      ),
      2 => 
      array (
        'code' => 'CHU',
        'name' => 'Chuquisaca',
      ),
      3 => 
      array (
        'code' => 'COC',
        'name' => 'Cochabamba',
      ),
      4 => 
      array (
        'code' => 'LPZ',
        'name' => 'La Paz',
      ),
      5 => 
      array (
        'code' => 'ORU',
        'name' => 'Oruro',
      ),
      6 => 
      array (
        'code' => 'PAN',
        'name' => 'Pando',
      ),
      7 => 
      array (
        'code' => 'POT',
        'name' => 'Potosi',
      ),
      8 => 
      array (
        'code' => 'SCZ',
        'name' => 'Santa Cruz',
      ),
      9 => 
      array (
        'code' => 'TAR',
        'name' => 'Tarija',
      ),
    ),
    'BR' => 
    array (
      1 => 
      array (
        'code' => 'AC',
        'name' => 'Acre',
      ),
      2 => 
      array (
        'code' => 'AL',
        'name' => 'Alagoas',
      ),
      3 => 
      array (
        'code' => 'AP',
        'name' => 'Amapa',
      ),
      4 => 
      array (
        'code' => 'AM',
        'name' => 'Amazonas',
      ),
      5 => 
      array (
        'code' => 'BA',
        'name' => 'Bahia',
      ),
      6 => 
      array (
        'code' => 'CE',
        'name' => 'Ceara',
      ),
      7 => 
      array (
        'code' => 'DF',
        'name' => 'Distrito Federal',
      ),
      8 => 
      array (
        'code' => 'ES',
        'name' => 'Espirito Santo',
      ),
      9 => 
      array (
        'code' => 'GO',
        'name' => 'Goias',
      ),
      10 => 
      array (
        'code' => 'MA',
        'name' => 'Maranhao',
      ),
      11 => 
      array (
        'code' => 'MT',
        'name' => 'Mato Grosso',
      ),
      12 => 
      array (
        'code' => 'MS',
        'name' => 'Mato Grosso do Sul',
      ),
      13 => 
      array (
        'code' => 'MG',
        'name' => 'Minas Gerais',
      ),
      14 => 
      array (
        'code' => 'PA',
        'name' => 'Para',
      ),
      15 => 
      array (
        'code' => 'PB',
        'name' => 'Paraiba',
      ),
      16 => 
      array (
        'code' => 'PR',
        'name' => 'Parana',
      ),
      17 => 
      array (
        'code' => 'PE',
        'name' => 'Pernambuco',
      ),
      18 => 
      array (
        'code' => 'PI',
        'name' => 'Piaui',
      ),
      19 => 
      array (
        'code' => 'RJ',
        'name' => 'Rio de Janeiro',
      ),
      20 => 
      array (
        'code' => 'RN',
        'name' => 'Rio Grande do Norte',
      ),
      21 => 
      array (
        'code' => 'RS',
        'name' => 'Rio Grande do Sul',
      ),
      22 => 
      array (
        'code' => 'RO',
        'name' => 'Rondonia',
      ),
      23 => 
      array (
        'code' => 'RR',
        'name' => 'Roraima',
      ),
      24 => 
      array (
        'code' => 'SC',
        'name' => 'Santa Catarina',
      ),
      25 => 
      array (
        'code' => 'SP',
        'name' => 'Sao Paulo',
      ),
      26 => 
      array (
        'code' => 'SE',
        'name' => 'Sergipe',
      ),
      27 => 
      array (
        'code' => 'TO',
        'name' => 'Tocantins',
      ),
    ),
    'BS' => 
    array (
      1 => 
      array (
        'code' => 'ACK',
        'name' => 'Acklins',
      ),
      2 => 
      array (
        'code' => 'BER',
        'name' => 'Berry Islands',
      ),
      3 => 
      array (
        'code' => 'BIM',
        'name' => 'Bimini',
      ),
      4 => 
      array (
        'code' => 'BLK',
        'name' => 'Black Point',
      ),
      5 => 
      array (
        'code' => 'CAT',
        'name' => 'Cat Island',
      ),
      6 => 
      array (
        'code' => 'CAB',
        'name' => 'Central Abaco',
      ),
      7 => 
      array (
        'code' => 'CAN',
        'name' => 'Central Andros',
      ),
      8 => 
      array (
        'code' => 'CEL',
        'name' => 'Central Eleuthera',
      ),
      9 => 
      array (
        'code' => 'FRE',
        'name' => 'City of Freeport',
      ),
      10 => 
      array (
        'code' => 'CRO',
        'name' => 'Crooked Island',
      ),
      11 => 
      array (
        'code' => 'EGB',
        'name' => 'East Grand Bahama',
      ),
      12 => 
      array (
        'code' => 'EXU',
        'name' => 'Exuma',
      ),
      13 => 
      array (
        'code' => 'GRD',
        'name' => 'Grand Cay',
      ),
      14 => 
      array (
        'code' => 'HAR',
        'name' => 'Harbour Island',
      ),
      15 => 
      array (
        'code' => 'HOP',
        'name' => 'Hope Town',
      ),
      16 => 
      array (
        'code' => 'INA',
        'name' => 'Inagua',
      ),
      17 => 
      array (
        'code' => 'LNG',
        'name' => 'Long Island',
      ),
      18 => 
      array (
        'code' => 'MAN',
        'name' => 'Mangrove Cay',
      ),
      19 => 
      array (
        'code' => 'MAY',
        'name' => 'Mayaguana',
      ),
      20 => 
      array (
        'code' => 'MOO',
        'name' => 'Moore\'s Island',
      ),
      21 => 
      array (
        'code' => 'NAB',
        'name' => 'North Abaco',
      ),
      22 => 
      array (
        'code' => 'NAN',
        'name' => 'North Andros',
      ),
      23 => 
      array (
        'code' => 'NEL',
        'name' => 'North Eleuthera',
      ),
      24 => 
      array (
        'code' => 'RAG',
        'name' => 'Ragged Island',
      ),
      25 => 
      array (
        'code' => 'RUM',
        'name' => 'Rum Cay',
      ),
      26 => 
      array (
        'code' => 'SAL',
        'name' => 'San Salvador',
      ),
      27 => 
      array (
        'code' => 'SAB',
        'name' => 'South Abaco',
      ),
      28 => 
      array (
        'code' => 'SAN',
        'name' => 'South Andros',
      ),
      29 => 
      array (
        'code' => 'SEL',
        'name' => 'South Eleuthera',
      ),
      30 => 
      array (
        'code' => 'SWE',
        'name' => 'Spanish Wells',
      ),
      31 => 
      array (
        'code' => 'WGB',
        'name' => 'West Grand Bahama',
      ),
    ),
    'BT' => 
    array (
      1 => 
      array (
        'code' => 'BUM',
        'name' => 'Bumthang',
      ),
      2 => 
      array (
        'code' => 'CHU',
        'name' => 'Chukha',
      ),
      3 => 
      array (
        'code' => 'DAG',
        'name' => 'Dagana',
      ),
      4 => 
      array (
        'code' => 'GAS',
        'name' => 'Gasa',
      ),
      5 => 
      array (
        'code' => 'HAA',
        'name' => 'Haa',
      ),
      6 => 
      array (
        'code' => 'LHU',
        'name' => 'Lhuntse',
      ),
      7 => 
      array (
        'code' => 'MON',
        'name' => 'Mongar',
      ),
      8 => 
      array (
        'code' => 'PAR',
        'name' => 'Paro',
      ),
      9 => 
      array (
        'code' => 'PEM',
        'name' => 'Pemagatshel',
      ),
      10 => 
      array (
        'code' => 'PUN',
        'name' => 'Punakha',
      ),
      11 => 
      array (
        'code' => 'SJO',
        'name' => 'Samdrup Jongkhar',
      ),
      12 => 
      array (
        'code' => 'SAT',
        'name' => 'Samtse',
      ),
      13 => 
      array (
        'code' => 'SAR',
        'name' => 'Sarpang',
      ),
      14 => 
      array (
        'code' => 'THI',
        'name' => 'Thimphu',
      ),
      15 => 
      array (
        'code' => 'TRG',
        'name' => 'Trashigang',
      ),
      16 => 
      array (
        'code' => 'TRY',
        'name' => 'Trashiyangste',
      ),
      17 => 
      array (
        'code' => 'TRO',
        'name' => 'Trongsa',
      ),
      18 => 
      array (
        'code' => 'TSI',
        'name' => 'Tsirang',
      ),
      19 => 
      array (
        'code' => 'WPH',
        'name' => 'Wangdue Phodrang',
      ),
      20 => 
      array (
        'code' => 'ZHE',
        'name' => 'Zhemgang',
      ),
    ),
    'BW' => 
    array (
      1 => 
      array (
        'code' => 'CE',
        'name' => 'Central',
      ),
      2 => 
      array (
        'code' => 'GH',
        'name' => 'Ghanzi',
      ),
      3 => 
      array (
        'code' => 'KD',
        'name' => 'Kgalagadi',
      ),
      4 => 
      array (
        'code' => 'KT',
        'name' => 'Kgatleng',
      ),
      5 => 
      array (
        'code' => 'KW',
        'name' => 'Kweneng',
      ),
      6 => 
      array (
        'code' => 'NG',
        'name' => 'Ngamiland',
      ),
      7 => 
      array (
        'code' => 'NE',
        'name' => 'North East',
      ),
      8 => 
      array (
        'code' => 'NW',
        'name' => 'North West',
      ),
      9 => 
      array (
        'code' => 'SE',
        'name' => 'South East',
      ),
      10 => 
      array (
        'code' => 'SO',
        'name' => 'Southern',
      ),
    ),
    'BY' => 
    array (
      1 => 
      array (
        'code' => 'BR',
        'name' => 'Brestskaya (Brest)',
      ),
      2 => 
      array (
        'code' => 'HO',
        'name' => 'Homyel\'skaya (Homyel\')',
      ),
      3 => 
      array (
        'code' => 'HM',
        'name' => 'Horad Minsk',
      ),
      4 => 
      array (
        'code' => 'HR',
        'name' => 'Hrodzyenskaya (Hrodna)',
      ),
      5 => 
      array (
        'code' => 'MA',
        'name' => 'Mahilyowskaya (Mahilyow)',
      ),
      6 => 
      array (
        'code' => 'MI',
        'name' => 'Minskaya',
      ),
      7 => 
      array (
        'code' => 'VI',
        'name' => 'Vitsyebskaya (Vitsyebsk)',
      ),
    ),
    'BZ' => 
    array (
      1 => 
      array (
        'code' => 'BZ',
        'name' => 'Belize',
      ),
      2 => 
      array (
        'code' => 'CY',
        'name' => 'Cayo',
      ),
      3 => 
      array (
        'code' => 'CR',
        'name' => 'Corozal',
      ),
      4 => 
      array (
        'code' => 'OW',
        'name' => 'Orange Walk',
      ),
      5 => 
      array (
        'code' => 'SC',
        'name' => 'Stann Creek',
      ),
      6 => 
      array (
        'code' => 'TO',
        'name' => 'Toledo',
      ),
    ),
    'CA' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Alberta',
      ),
      2 => 
      array (
        'code' => 'BC',
        'name' => 'British Columbia',
      ),
      3 => 
      array (
        'code' => 'MB',
        'name' => 'Manitoba',
      ),
      4 => 
      array (
        'code' => 'NB',
        'name' => 'New Brunswick',
      ),
      5 => 
      array (
        'code' => 'NL',
        'name' => 'Newfoundland and Labrador',
      ),
      6 => 
      array (
        'code' => 'NT',
        'name' => 'Northwest Territories',
      ),
      7 => 
      array (
        'code' => 'NS',
        'name' => 'Nova Scotia',
      ),
      8 => 
      array (
        'code' => 'NU',
        'name' => 'Nunavut',
      ),
      9 => 
      array (
        'code' => 'ON',
        'name' => 'Ontario',
      ),
      10 => 
      array (
        'code' => 'PE',
        'name' => 'Prince Edward Island',
      ),
      11 => 
      array (
        'code' => 'QC',
        'name' => 'Québec',
      ),
      12 => 
      array (
        'code' => 'SK',
        'name' => 'Saskatchewan',
      ),
      13 => 
      array (
        'code' => 'YT',
        'name' => 'Yukon Territory',
      ),
    ),
    'CC' => 
    array (
      1 => 
      array (
        'code' => 'D',
        'name' => 'Direction Island',
      ),
      2 => 
      array (
        'code' => 'H',
        'name' => 'Home Island',
      ),
      3 => 
      array (
        'code' => 'O',
        'name' => 'Horsburgh Island',
      ),
      4 => 
      array (
        'code' => 'S',
        'name' => 'South Island',
      ),
      5 => 
      array (
        'code' => 'W',
        'name' => 'West Island',
      ),
    ),
    'CF' => 
    array (
      1 => 
      array (
        'code' => 'BAN',
        'name' => 'Bangui',
      ),
      2 => 
      array (
        'code' => 'BBA',
        'name' => 'Bamingui-Bangoran',
      ),
      3 => 
      array (
        'code' => 'BKO',
        'name' => 'Basse-Kotto',
      ),
      4 => 
      array (
        'code' => 'HKO',
        'name' => 'Haute-Kotto',
      ),
      5 => 
      array (
        'code' => 'HMB',
        'name' => 'Haut-Mbomou',
      ),
      6 => 
      array (
        'code' => 'KEM',
        'name' => 'Kemo',
      ),
      7 => 
      array (
        'code' => 'LOB',
        'name' => 'Lobaye',
      ),
      8 => 
      array (
        'code' => 'MBO',
        'name' => 'Mbomou',
      ),
      9 => 
      array (
        'code' => 'MKD',
        'name' => 'Mambéré-Kadéï',
      ),
      10 => 
      array (
        'code' => 'NGR',
        'name' => 'Nana-Grebizi',
      ),
      11 => 
      array (
        'code' => 'NMM',
        'name' => 'Nana-Mambere',
      ),
      12 => 
      array (
        'code' => 'OMP',
        'name' => 'Ombella-M\'Poko',
      ),
      13 => 
      array (
        'code' => 'OPE',
        'name' => 'Ouham-Pende',
      ),
      14 => 
      array (
        'code' => 'OUH',
        'name' => 'Ouham',
      ),
      15 => 
      array (
        'code' => 'OUK',
        'name' => 'Ouaka',
      ),
      16 => 
      array (
        'code' => 'SMB',
        'name' => 'Sangha-Mbaere',
      ),
      17 => 
      array (
        'code' => 'VAK',
        'name' => 'Vakaga',
      ),
    ),
    'CG' => 
    array (
      1 => 
      array (
        'code' => 'BO',
        'name' => 'Bouenza',
      ),
      2 => 
      array (
        'code' => 'BR',
        'name' => 'Brazzaville',
      ),
      3 => 
      array (
        'code' => 'CU',
        'name' => 'Cuvette',
      ),
      4 => 
      array (
        'code' => 'CO',
        'name' => 'Cuvette-Ouest',
      ),
      5 => 
      array (
        'code' => 'KO',
        'name' => 'Kouilou',
      ),
      6 => 
      array (
        'code' => 'LE',
        'name' => 'Lekoumou',
      ),
      7 => 
      array (
        'code' => 'LI',
        'name' => 'Likouala',
      ),
      8 => 
      array (
        'code' => 'NI',
        'name' => 'Niari',
      ),
      9 => 
      array (
        'code' => 'PL',
        'name' => 'Plateaux',
      ),
      10 => 
      array (
        'code' => 'PO',
        'name' => 'Pool',
      ),
      11 => 
      array (
        'code' => 'SA',
        'name' => 'Sangha',
      ),
    ),
    'CH' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'Aargau',
      ),
      2 => 
      array (
        'code' => 'AR',
        'name' => 'Appenzell Ausserrhoden',
      ),
      3 => 
      array (
        'code' => 'AI',
        'name' => 'Appenzell Innerrhoden',
      ),
      4 => 
      array (
        'code' => 'BS',
        'name' => 'Basel-Stadt',
      ),
      5 => 
      array (
        'code' => 'BL',
        'name' => 'Basel-Landschaft',
      ),
      6 => 
      array (
        'code' => 'BE',
        'name' => 'Bern',
      ),
      7 => 
      array (
        'code' => 'FR',
        'name' => 'Fribourg',
      ),
      8 => 
      array (
        'code' => 'GE',
        'name' => 'Genève',
      ),
      9 => 
      array (
        'code' => 'GL',
        'name' => 'Glarus',
      ),
      10 => 
      array (
        'code' => 'GR',
        'name' => 'Graubünden',
      ),
      11 => 
      array (
        'code' => 'JU',
        'name' => 'Jura',
      ),
      12 => 
      array (
        'code' => 'LU',
        'name' => 'Lucerne',
      ),
      13 => 
      array (
        'code' => 'NE',
        'name' => 'Neuchâtel',
      ),
      14 => 
      array (
        'code' => 'NW',
        'name' => 'Nidwalden',
      ),
      15 => 
      array (
        'code' => 'OW',
        'name' => 'Obwalden',
      ),
      16 => 
      array (
        'code' => 'SG',
        'name' => 'St. Gallen',
      ),
      17 => 
      array (
        'code' => 'SH',
        'name' => 'Schaffhausen',
      ),
      18 => 
      array (
        'code' => 'SZ',
        'name' => 'Schwyz',
      ),
      19 => 
      array (
        'code' => 'SO',
        'name' => 'Solothurn',
      ),
      20 => 
      array (
        'code' => 'TG',
        'name' => 'Thurgau',
      ),
      21 => 
      array (
        'code' => 'TI',
        'name' => 'Ticino',
      ),
      22 => 
      array (
        'code' => 'UR',
        'name' => 'Uri',
      ),
      23 => 
      array (
        'code' => 'VS',
        'name' => 'Valais',
      ),
      24 => 
      array (
        'code' => 'VD',
        'name' => 'Vaud',
      ),
      25 => 
      array (
        'code' => 'ZG',
        'name' => 'Zug',
      ),
      26 => 
      array (
        'code' => 'ZH',
        'name' => 'Zürich',
      ),
    ),
    'CI' => 
    array (
      1 => 
      array (
        'code' => 'ABE',
        'name' => 'Abengourou',
      ),
      2 => 
      array (
        'code' => 'ABI',
        'name' => 'Abidjan',
      ),
      3 => 
      array (
        'code' => 'ABO',
        'name' => 'Aboisso',
      ),
      4 => 
      array (
        'code' => 'ADI',
        'name' => 'Adiake',
      ),
      5 => 
      array (
        'code' => 'ADZ',
        'name' => 'Adzope',
      ),
      6 => 
      array (
        'code' => 'AGB',
        'name' => 'Agboville',
      ),
      7 => 
      array (
        'code' => 'AGN',
        'name' => 'Agnibilekrou',
      ),
      8 => 
      array (
        'code' => 'ALE',
        'name' => 'Alepe',
      ),
      9 => 
      array (
        'code' => 'BOC',
        'name' => 'Bocanda',
      ),
      10 => 
      array (
        'code' => 'BAN',
        'name' => 'Bangolo',
      ),
      11 => 
      array (
        'code' => 'BEO',
        'name' => 'Beoumi',
      ),
      12 => 
      array (
        'code' => 'BIA',
        'name' => 'Biankouma',
      ),
      13 => 
      array (
        'code' => 'BDK',
        'name' => 'Bondoukou',
      ),
      14 => 
      array (
        'code' => 'BGN',
        'name' => 'Bongouanou',
      ),
      15 => 
      array (
        'code' => 'BFL',
        'name' => 'Bouafle',
      ),
      16 => 
      array (
        'code' => 'BKE',
        'name' => 'Bouake',
      ),
      17 => 
      array (
        'code' => 'BNA',
        'name' => 'Bouna',
      ),
      18 => 
      array (
        'code' => 'BDL',
        'name' => 'Boundiali',
      ),
      19 => 
      array (
        'code' => 'DKL',
        'name' => 'Dabakala',
      ),
      20 => 
      array (
        'code' => 'DBU',
        'name' => 'Dabou',
      ),
      21 => 
      array (
        'code' => 'DAL',
        'name' => 'Daloa',
      ),
      22 => 
      array (
        'code' => 'DAN',
        'name' => 'Danane',
      ),
      23 => 
      array (
        'code' => 'DAO',
        'name' => 'Daoukro',
      ),
      24 => 
      array (
        'code' => 'DIM',
        'name' => 'Dimbokro',
      ),
      25 => 
      array (
        'code' => 'DIV',
        'name' => 'Divo',
      ),
      26 => 
      array (
        'code' => 'DUE',
        'name' => 'Duekoue',
      ),
      27 => 
      array (
        'code' => 'FER',
        'name' => 'Ferkessedougou',
      ),
      28 => 
      array (
        'code' => 'GAG',
        'name' => 'Gagnoa',
      ),
      29 => 
      array (
        'code' => 'GBA',
        'name' => 'Grand-Bassam',
      ),
      30 => 
      array (
        'code' => 'GLA',
        'name' => 'Grand-Lahou',
      ),
      31 => 
      array (
        'code' => 'GUI',
        'name' => 'Guiglo',
      ),
      32 => 
      array (
        'code' => 'ISS',
        'name' => 'Issia',
      ),
      33 => 
      array (
        'code' => 'JAC',
        'name' => 'Jacqueville',
      ),
      34 => 
      array (
        'code' => 'KAT',
        'name' => 'Katiola',
      ),
      35 => 
      array (
        'code' => 'KOR',
        'name' => 'Korhogo',
      ),
      36 => 
      array (
        'code' => 'LAK',
        'name' => 'Lakota',
      ),
      37 => 
      array (
        'code' => 'MAN',
        'name' => 'Man',
      ),
      38 => 
      array (
        'code' => 'MKN',
        'name' => 'Mankono',
      ),
      39 => 
      array (
        'code' => 'MBA',
        'name' => 'Mbahiakro',
      ),
      40 => 
      array (
        'code' => 'ODI',
        'name' => 'Odienne',
      ),
      41 => 
      array (
        'code' => 'OUM',
        'name' => 'Oume',
      ),
      42 => 
      array (
        'code' => 'SAK',
        'name' => 'Sakassou',
      ),
      43 => 
      array (
        'code' => 'SPE',
        'name' => 'San-Pedro',
      ),
      44 => 
      array (
        'code' => 'SAS',
        'name' => 'Sassandra',
      ),
      45 => 
      array (
        'code' => 'SEG',
        'name' => 'Seguela',
      ),
      46 => 
      array (
        'code' => 'SIN',
        'name' => 'Sinfra',
      ),
      47 => 
      array (
        'code' => 'SOU',
        'name' => 'Soubre',
      ),
      48 => 
      array (
        'code' => 'TAB',
        'name' => 'Tabou',
      ),
      49 => 
      array (
        'code' => 'TAN',
        'name' => 'Tanda',
      ),
      50 => 
      array (
        'code' => 'TIE',
        'name' => 'Tiebissou',
      ),
      51 => 
      array (
        'code' => 'TIN',
        'name' => 'Tingrela',
      ),
      52 => 
      array (
        'code' => 'TIA',
        'name' => 'Tiassale',
      ),
      53 => 
      array (
        'code' => 'TBA',
        'name' => 'Touba',
      ),
      54 => 
      array (
        'code' => 'TLP',
        'name' => 'Toulepleu',
      ),
      55 => 
      array (
        'code' => 'TMD',
        'name' => 'Toumodi',
      ),
      56 => 
      array (
        'code' => 'VAV',
        'name' => 'Vavoua',
      ),
      57 => 
      array (
        'code' => 'YAM',
        'name' => 'Yamoussoukro',
      ),
      58 => 
      array (
        'code' => 'ZUE',
        'name' => 'Zuenoula',
      ),
    ),
    'CK' => 
    array (
      1 => 
      array (
        'code' => 'AI',
        'name' => 'Aitutaki',
      ),
      2 => 
      array (
        'code' => 'AT',
        'name' => 'Atiu',
      ),
      3 => 
      array (
        'code' => 'MA',
        'name' => 'Manuae',
      ),
      4 => 
      array (
        'code' => 'MG',
        'name' => 'Mangaia',
      ),
      5 => 
      array (
        'code' => 'MK',
        'name' => 'Manihiki',
      ),
      6 => 
      array (
        'code' => 'MT',
        'name' => 'Mitiaro',
      ),
      7 => 
      array (
        'code' => 'MU',
        'name' => 'Mauke',
      ),
      8 => 
      array (
        'code' => 'NI',
        'name' => 'Nassau Island',
      ),
      9 => 
      array (
        'code' => 'PA',
        'name' => 'Palmerston',
      ),
      10 => 
      array (
        'code' => 'PE',
        'name' => 'Penrhyn',
      ),
      11 => 
      array (
        'code' => 'PU',
        'name' => 'Pukapuka',
      ),
      12 => 
      array (
        'code' => 'RK',
        'name' => 'Rakahanga',
      ),
      13 => 
      array (
        'code' => 'RR',
        'name' => 'Rarotonga',
      ),
      14 => 
      array (
        'code' => 'SU',
        'name' => 'Surwarrow',
      ),
      15 => 
      array (
        'code' => 'TA',
        'name' => 'Takutea',
      ),
    ),
    'CL' => 
    array (
      1 => 
      array (
        'code' => 'AI',
        'name' => 'Aisen del General Carlos Ibanez',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'Antofagasta',
      ),
      3 => 
      array (
        'code' => 'AR',
        'name' => 'Araucania',
      ),
      4 => 
      array (
        'code' => 'AT',
        'name' => 'Atacama',
      ),
      5 => 
      array (
        'code' => 'BI',
        'name' => 'Bio-Bio',
      ),
      6 => 
      array (
        'code' => 'CO',
        'name' => 'Coquimbo',
      ),
      7 => 
      array (
        'code' => 'LI',
        'name' => 'Libertador General Bernardo O\'Hi',
      ),
      8 => 
      array (
        'code' => 'LL',
        'name' => 'Los Lagos',
      ),
      9 => 
      array (
        'code' => 'MA',
        'name' => 'Magallanes y de la Antartica Chi',
      ),
      10 => 
      array (
        'code' => 'ML',
        'name' => 'Maule',
      ),
      11 => 
      array (
        'code' => 'RM',
        'name' => 'Region Metropolitana',
      ),
      12 => 
      array (
        'code' => 'TA',
        'name' => 'Tarapaca',
      ),
      13 => 
      array (
        'code' => 'VS',
        'name' => 'Valparaiso',
      ),
    ),
    'CM' => 
    array (
      1 => 
      array (
        'code' => 'ADA',
        'name' => 'Adamawa (Adamaoua)',
      ),
      2 => 
      array (
        'code' => 'CEN',
        'name' => 'Centre',
      ),
      3 => 
      array (
        'code' => 'EST',
        'name' => 'East (Est)',
      ),
      4 => 
      array (
        'code' => 'EXN',
        'name' => 'Extrême-Nord',
      ),
      5 => 
      array (
        'code' => 'LIT',
        'name' => 'Littoral',
      ),
      6 => 
      array (
        'code' => 'NOR',
        'name' => 'North (Nord)',
      ),
      7 => 
      array (
        'code' => 'NOT',
        'name' => 'Northwest (Nord-Ouest)',
      ),
      8 => 
      array (
        'code' => 'OUE',
        'name' => 'West (Ouest)',
      ),
      9 => 
      array (
        'code' => 'SUD',
        'name' => 'South (Sud)',
      ),
      10 => 
      array (
        'code' => 'SOU',
        'name' => 'Southwest (Sud-Ouest)',
      ),
    ),
    'CN' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Anhui',
      ),
      2 => 
      array (
        'code' => 'BE',
        'name' => 'Beijing',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'Chongqing',
      ),
      4 => 
      array (
        'code' => 'FU',
        'name' => 'Fujian',
      ),
      5 => 
      array (
        'code' => 'GA',
        'name' => 'Gansu',
      ),
      6 => 
      array (
        'code' => 'GU',
        'name' => 'Guangdong',
      ),
      7 => 
      array (
        'code' => 'GX',
        'name' => 'Guangxi',
      ),
      8 => 
      array (
        'code' => 'GZ',
        'name' => 'Guizhou',
      ),
      9 => 
      array (
        'code' => 'HA',
        'name' => 'Hainan',
      ),
      10 => 
      array (
        'code' => 'HB',
        'name' => 'Hebei',
      ),
      11 => 
      array (
        'code' => 'HL',
        'name' => 'Heilongjiang',
      ),
      12 => 
      array (
        'code' => 'HE',
        'name' => 'Henan',
      ),
      13 => 
      array (
        'code' => 'HK',
        'name' => 'Hong Kong',
      ),
      14 => 
      array (
        'code' => 'HU',
        'name' => 'Hubei',
      ),
      15 => 
      array (
        'code' => 'HN',
        'name' => 'Hunan',
      ),
      16 => 
      array (
        'code' => 'IM',
        'name' => 'Inner Mongolia',
      ),
      17 => 
      array (
        'code' => 'JI',
        'name' => 'Jiangsu',
      ),
      18 => 
      array (
        'code' => 'JX',
        'name' => 'Jiangxi',
      ),
      19 => 
      array (
        'code' => 'JL',
        'name' => 'Jilin',
      ),
      20 => 
      array (
        'code' => 'LI',
        'name' => 'Liaoning',
      ),
      21 => 
      array (
        'code' => 'MA',
        'name' => 'Macau',
      ),
      22 => 
      array (
        'code' => 'NI',
        'name' => 'Ningxia',
      ),
      23 => 
      array (
        'code' => 'SH',
        'name' => 'Shaanxi',
      ),
      24 => 
      array (
        'code' => 'SA',
        'name' => 'Shandong',
      ),
      25 => 
      array (
        'code' => 'SG',
        'name' => 'Shanghai',
      ),
      26 => 
      array (
        'code' => 'SX',
        'name' => 'Shanxi',
      ),
      27 => 
      array (
        'code' => 'SI',
        'name' => 'Sichuan',
      ),
      28 => 
      array (
        'code' => 'TI',
        'name' => 'Tianjin',
      ),
      29 => 
      array (
        'code' => 'XI',
        'name' => 'Xinjiang',
      ),
      30 => 
      array (
        'code' => 'YU',
        'name' => 'Yunnan',
      ),
      31 => 
      array (
        'code' => 'ZH',
        'name' => 'Zhejiang',
      ),
    ),
    'CO' => 
    array (
      1 => 
      array (
        'code' => 'AMZ',
        'name' => 'Amazonas',
      ),
      2 => 
      array (
        'code' => 'ANT',
        'name' => 'Antioquia',
      ),
      3 => 
      array (
        'code' => 'ARA',
        'name' => 'Arauca',
      ),
      4 => 
      array (
        'code' => 'ATL',
        'name' => 'Atlantico',
      ),
      5 => 
      array (
        'code' => 'BDC',
        'name' => 'Bogota D.C.',
      ),
      6 => 
      array (
        'code' => 'BOL',
        'name' => 'Bolivar',
      ),
      7 => 
      array (
        'code' => 'BOY',
        'name' => 'Boyaca',
      ),
      8 => 
      array (
        'code' => 'CAL',
        'name' => 'Caldas',
      ),
      9 => 
      array (
        'code' => 'CAQ',
        'name' => 'Caqueta',
      ),
      10 => 
      array (
        'code' => 'CAS',
        'name' => 'Casanare',
      ),
      11 => 
      array (
        'code' => 'CAU',
        'name' => 'Cauca',
      ),
      12 => 
      array (
        'code' => 'CES',
        'name' => 'Cesar',
      ),
      13 => 
      array (
        'code' => 'CHO',
        'name' => 'Choco',
      ),
      14 => 
      array (
        'code' => 'COR',
        'name' => 'Cordoba',
      ),
      15 => 
      array (
        'code' => 'CAM',
        'name' => 'Cundinamarca',
      ),
      16 => 
      array (
        'code' => 'GNA',
        'name' => 'Guainia',
      ),
      17 => 
      array (
        'code' => 'GJR',
        'name' => 'Guajira',
      ),
      18 => 
      array (
        'code' => 'GVR',
        'name' => 'Guaviare',
      ),
      19 => 
      array (
        'code' => 'HUI',
        'name' => 'Huila',
      ),
      20 => 
      array (
        'code' => 'MAG',
        'name' => 'Magdalena',
      ),
      21 => 
      array (
        'code' => 'MET',
        'name' => 'Meta',
      ),
      22 => 
      array (
        'code' => 'NAR',
        'name' => 'Narino',
      ),
      23 => 
      array (
        'code' => 'NDS',
        'name' => 'Norte de Santander',
      ),
      24 => 
      array (
        'code' => 'PUT',
        'name' => 'Putumayo',
      ),
      25 => 
      array (
        'code' => 'QUI',
        'name' => 'Quindio',
      ),
      26 => 
      array (
        'code' => 'RIS',
        'name' => 'Risaralda',
      ),
      27 => 
      array (
        'code' => 'SAP',
        'name' => 'San Andres y Providencia',
      ),
      28 => 
      array (
        'code' => 'SAN',
        'name' => 'Santander',
      ),
      29 => 
      array (
        'code' => 'SUC',
        'name' => 'Sucre',
      ),
      30 => 
      array (
        'code' => 'TOL',
        'name' => 'Tolima',
      ),
      31 => 
      array (
        'code' => 'VDC',
        'name' => 'Valle del Cauca',
      ),
      32 => 
      array (
        'code' => 'VAU',
        'name' => 'Vaupes',
      ),
      33 => 
      array (
        'code' => 'VIC',
        'name' => 'Vichada',
      ),
    ),
    'CR' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Alajuela',
      ),
      2 => 
      array (
        'code' => 'CA',
        'name' => 'Cartago',
      ),
      3 => 
      array (
        'code' => 'GU',
        'name' => 'Guanacaste',
      ),
      4 => 
      array (
        'code' => 'HE',
        'name' => 'Heredia',
      ),
      5 => 
      array (
        'code' => 'LI',
        'name' => 'Limon',
      ),
      6 => 
      array (
        'code' => 'PU',
        'name' => 'Puntarenas',
      ),
      7 => 
      array (
        'code' => 'SJ',
        'name' => 'San Jose',
      ),
    ),
    'CU' => 
    array (
      1 => 
      array (
        'code' => 'CA',
        'name' => 'Camaguey',
      ),
      2 => 
      array (
        'code' => 'CD',
        'name' => 'Ciego de Avila',
      ),
      3 => 
      array (
        'code' => 'CI',
        'name' => 'Cienfuegos',
      ),
      4 => 
      array (
        'code' => 'CH',
        'name' => 'Ciudad de La Habana',
      ),
      5 => 
      array (
        'code' => 'GR',
        'name' => 'Granma',
      ),
      6 => 
      array (
        'code' => 'GU',
        'name' => 'Guantanamo',
      ),
      7 => 
      array (
        'code' => 'HO',
        'name' => 'Holguin',
      ),
      8 => 
      array (
        'code' => 'IJ',
        'name' => 'Isla de la Juventud',
      ),
      9 => 
      array (
        'code' => 'LH',
        'name' => 'La Habana',
      ),
      10 => 
      array (
        'code' => 'LT',
        'name' => 'Las Tunas',
      ),
      11 => 
      array (
        'code' => 'MA',
        'name' => 'Matanzas',
      ),
      12 => 
      array (
        'code' => 'PR',
        'name' => 'Pinar del Rio',
      ),
      13 => 
      array (
        'code' => 'SS',
        'name' => 'Sancti Spiritus',
      ),
      14 => 
      array (
        'code' => 'SC',
        'name' => 'Santiago de Cuba',
      ),
      15 => 
      array (
        'code' => 'VC',
        'name' => 'Villa Clara',
      ),
    ),
    'CV' => 
    array (
      1 => 
      array (
        'code' => 'BV',
        'name' => 'Boa Vista',
      ),
      2 => 
      array (
        'code' => 'BR',
        'name' => 'Brava',
      ),
      3 => 
      array (
        'code' => 'CS',
        'name' => 'Calheta de Sao Miguel',
      ),
      4 => 
      array (
        'code' => 'MA',
        'name' => 'Maio',
      ),
      5 => 
      array (
        'code' => 'MO',
        'name' => 'Mosteiros',
      ),
      6 => 
      array (
        'code' => 'PA',
        'name' => 'Paul',
      ),
      7 => 
      array (
        'code' => 'PN',
        'name' => 'Porto Novo',
      ),
      8 => 
      array (
        'code' => 'PR',
        'name' => 'Praia',
      ),
      9 => 
      array (
        'code' => 'RG',
        'name' => 'Ribeira Grande',
      ),
      10 => 
      array (
        'code' => 'SL',
        'name' => 'Sal',
      ),
      11 => 
      array (
        'code' => 'CA',
        'name' => 'Santa Catarina',
      ),
      12 => 
      array (
        'code' => 'CR',
        'name' => 'Santa Cruz',
      ),
      13 => 
      array (
        'code' => 'SD',
        'name' => 'Sao Domingos',
      ),
      14 => 
      array (
        'code' => 'SF',
        'name' => 'Sao Filipe',
      ),
      15 => 
      array (
        'code' => 'SN',
        'name' => 'Sao Nicolau',
      ),
      16 => 
      array (
        'code' => 'SV',
        'name' => 'Sao Vicente',
      ),
      17 => 
      array (
        'code' => 'TA',
        'name' => 'Tarrafal',
      ),
    ),
    'CY' => 
    array (
      1 => 
      array (
        'code' => 'F',
        'name' => 'Famagusta',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => 'Kyrenia',
      ),
      3 => 
      array (
        'code' => 'A',
        'name' => 'Larnaca',
      ),
      4 => 
      array (
        'code' => 'I',
        'name' => 'Limassol',
      ),
      5 => 
      array (
        'code' => 'N',
        'name' => 'Nicosia',
      ),
      6 => 
      array (
        'code' => 'P',
        'name' => 'Paphos',
      ),
    ),
    'CZ' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'Hlavní město Praha',
      ),
      2 => 
      array (
        'code' => 'B',
        'name' => 'Jihomoravský',
      ),
      3 => 
      array (
        'code' => 'C',
        'name' => 'Jihočeský',
      ),
      4 => 
      array (
        'code' => 'E',
        'name' => 'Pardubický',
      ),
      5 => 
      array (
        'code' => 'H',
        'name' => 'Královéhradecký',
      ),
      6 => 
      array (
        'code' => 'J',
        'name' => 'Vysočina',
      ),
      7 => 
      array (
        'code' => 'K',
        'name' => 'Karlovarský',
      ),
      8 => 
      array (
        'code' => 'L',
        'name' => 'Liberecký',
      ),
      9 => 
      array (
        'code' => 'M',
        'name' => 'Olomoucký',
      ),
      10 => 
      array (
        'code' => 'P',
        'name' => 'Plzeňský',
      ),
      11 => 
      array (
        'code' => 'S',
        'name' => 'Středočeský',
      ),
      12 => 
      array (
        'code' => 'T',
        'name' => 'Moravskoslezský',
      ),
      13 => 
      array (
        'code' => 'U',
        'name' => 'Ústecký',
      ),
      14 => 
      array (
        'code' => 'Z',
        'name' => 'Zlínský',
      ),
    ),
    'Country' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => 'States',
      ),
    ),
    'DE' => 
    array (
      1 => 
      array (
        'code' => 'BAW',
        'name' => 'Baden-Württemberg',
      ),
      2 => 
      array (
        'code' => 'BAY',
        'name' => 'Bayern',
      ),
      3 => 
      array (
        'code' => 'BER',
        'name' => 'Berlin',
      ),
      4 => 
      array (
        'code' => 'BRG',
        'name' => 'Brandenburg',
      ),
      5 => 
      array (
        'code' => 'BRE',
        'name' => 'Bremen',
      ),
      6 => 
      array (
        'code' => 'HAM',
        'name' => 'Hamburg',
      ),
      7 => 
      array (
        'code' => 'HES',
        'name' => 'Hessen',
      ),
      8 => 
      array (
        'code' => 'MEC',
        'name' => 'Mecklenburg-Vorpommern',
      ),
      9 => 
      array (
        'code' => 'NDS',
        'name' => 'Niedersachsen',
      ),
      10 => 
      array (
        'code' => 'NRW',
        'name' => 'Nordrhein-Westfalen',
      ),
      11 => 
      array (
        'code' => 'RHE',
        'name' => 'Rheinland-Pfalz',
      ),
      12 => 
      array (
        'code' => 'SAR',
        'name' => 'Saarland',
      ),
      13 => 
      array (
        'code' => 'SAS',
        'name' => 'Sachsen',
      ),
      14 => 
      array (
        'code' => 'SAC',
        'name' => 'Sachsen-Anhalt',
      ),
      15 => 
      array (
        'code' => 'SCN',
        'name' => 'Schleswig-Holstein',
      ),
      16 => 
      array (
        'code' => 'THE',
        'name' => 'Thüringen',
      ),
    ),
    'DJ' => 
    array (
      1 => 
      array (
        'code' => 'S',
        'name' => '\'Ali Sabih',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => 'Dikhil',
      ),
      3 => 
      array (
        'code' => 'J',
        'name' => 'Djibouti',
      ),
      4 => 
      array (
        'code' => 'O',
        'name' => 'Obock',
      ),
      5 => 
      array (
        'code' => 'T',
        'name' => 'Tadjoura',
      ),
    ),
    'DK' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'Arhus',
      ),
      2 => 
      array (
        'code' => 'BH',
        'name' => 'Bornholm',
      ),
      3 => 
      array (
        'code' => 'CO',
        'name' => 'Copenhagen',
      ),
      4 => 
      array (
        'code' => 'FO',
        'name' => 'Faroe Islands',
      ),
      5 => 
      array (
        'code' => 'FR',
        'name' => 'Frederiksborg',
      ),
      6 => 
      array (
        'code' => 'FY',
        'name' => 'Fyn',
      ),
      7 => 
      array (
        'code' => 'KO',
        'name' => 'Kobenhavn',
      ),
      8 => 
      array (
        'code' => 'NO',
        'name' => 'Nordjylland',
      ),
      9 => 
      array (
        'code' => 'RI',
        'name' => 'Ribe',
      ),
      10 => 
      array (
        'code' => 'RK',
        'name' => 'Ringkobing',
      ),
      11 => 
      array (
        'code' => 'RO',
        'name' => 'Roskilde',
      ),
      12 => 
      array (
        'code' => 'SO',
        'name' => 'Sonderjylland',
      ),
      13 => 
      array (
        'code' => 'ST',
        'name' => 'Storstrom',
      ),
      14 => 
      array (
        'code' => 'VK',
        'name' => 'Vejle',
      ),
      15 => 
      array (
        'code' => 'VJ',
        'name' => 'Vestjælland',
      ),
      16 => 
      array (
        'code' => 'VB',
        'name' => 'Viborg',
      ),
    ),
    'DM' => 
    array (
      1 => 
      array (
        'code' => 'AND',
        'name' => 'Saint Andrew Parish',
      ),
      2 => 
      array (
        'code' => 'DAV',
        'name' => 'Saint David Parish',
      ),
      3 => 
      array (
        'code' => 'GEO',
        'name' => 'Saint George Parish',
      ),
      4 => 
      array (
        'code' => 'JOH',
        'name' => 'Saint John Parish',
      ),
      5 => 
      array (
        'code' => 'JOS',
        'name' => 'Saint Joseph Parish',
      ),
      6 => 
      array (
        'code' => 'LUK',
        'name' => 'Saint Luke Parish',
      ),
      7 => 
      array (
        'code' => 'MAR',
        'name' => 'Saint Mark Parish',
      ),
      8 => 
      array (
        'code' => 'PAT',
        'name' => 'Saint Patrick Parish',
      ),
      9 => 
      array (
        'code' => 'PAU',
        'name' => 'Saint Paul Parish',
      ),
      10 => 
      array (
        'code' => 'PET',
        'name' => 'Saint Peter Parish',
      ),
    ),
    'DO' => 
    array (
      1 => 
      array (
        'code' => 'DN',
        'name' => 'Distrito Nacional',
      ),
      2 => 
      array (
        'code' => 'AZ',
        'name' => 'Azua',
      ),
      3 => 
      array (
        'code' => 'BC',
        'name' => 'Baoruco',
      ),
      4 => 
      array (
        'code' => 'BH',
        'name' => 'Barahona',
      ),
      5 => 
      array (
        'code' => 'DJ',
        'name' => 'Dajabon',
      ),
      6 => 
      array (
        'code' => 'DU',
        'name' => 'Duarte',
      ),
      7 => 
      array (
        'code' => 'EL',
        'name' => 'Elias Pina',
      ),
      8 => 
      array (
        'code' => 'SY',
        'name' => 'El Seybo',
      ),
      9 => 
      array (
        'code' => 'ET',
        'name' => 'Espaillat',
      ),
      10 => 
      array (
        'code' => 'HM',
        'name' => 'Hato Mayor',
      ),
      11 => 
      array (
        'code' => 'IN',
        'name' => 'Independencia',
      ),
      12 => 
      array (
        'code' => 'AL',
        'name' => 'La Altagracia',
      ),
      13 => 
      array (
        'code' => 'RO',
        'name' => 'La Romana',
      ),
      14 => 
      array (
        'code' => 'VE',
        'name' => 'La Vega',
      ),
      15 => 
      array (
        'code' => 'MT',
        'name' => 'Maria Trinidad Sanchez',
      ),
      16 => 
      array (
        'code' => 'MN',
        'name' => 'Monsenor Nouel',
      ),
      17 => 
      array (
        'code' => 'MC',
        'name' => 'Monte Cristi',
      ),
      18 => 
      array (
        'code' => 'MP',
        'name' => 'Monte Plata',
      ),
      19 => 
      array (
        'code' => 'PD',
        'name' => 'Pedernales',
      ),
      20 => 
      array (
        'code' => 'PR',
        'name' => 'Peravia (Bani)',
      ),
      21 => 
      array (
        'code' => 'PP',
        'name' => 'Puerto Plata',
      ),
      22 => 
      array (
        'code' => 'SL',
        'name' => 'Salcedo',
      ),
      23 => 
      array (
        'code' => 'SM',
        'name' => 'Samana',
      ),
      24 => 
      array (
        'code' => 'SH',
        'name' => 'Sanchez Ramirez',
      ),
      25 => 
      array (
        'code' => 'SC',
        'name' => 'San Cristobal',
      ),
      26 => 
      array (
        'code' => 'JO',
        'name' => 'San Jose de Ocoa',
      ),
      27 => 
      array (
        'code' => 'SJ',
        'name' => 'San Juan',
      ),
      28 => 
      array (
        'code' => 'PM',
        'name' => 'San Pedro de Macoris',
      ),
      29 => 
      array (
        'code' => 'SA',
        'name' => 'Santiago',
      ),
      30 => 
      array (
        'code' => 'ST',
        'name' => 'Santiago Rodriguez',
      ),
      31 => 
      array (
        'code' => 'SD',
        'name' => 'Santo Domingo',
      ),
      32 => 
      array (
        'code' => 'VA',
        'name' => 'Valverde',
      ),
    ),
    'DZ' => 
    array (
      1 => 
      array (
        'code' => 'ADE',
        'name' => 'Ain Defla',
      ),
      2 => 
      array (
        'code' => 'ADR',
        'name' => 'Adrar',
      ),
      3 => 
      array (
        'code' => 'ALG',
        'name' => 'Alger',
      ),
      4 => 
      array (
        'code' => 'ANN',
        'name' => 'Annaba',
      ),
      5 => 
      array (
        'code' => 'ATE',
        'name' => 'Ain Temouchent',
      ),
      6 => 
      array (
        'code' => 'BAT',
        'name' => 'Batna',
      ),
      7 => 
      array (
        'code' => 'BBA',
        'name' => 'Bordj Bou Arreridj',
      ),
      8 => 
      array (
        'code' => 'BEC',
        'name' => 'Bechar',
      ),
      9 => 
      array (
        'code' => 'BEJ',
        'name' => 'Bejaia',
      ),
      10 => 
      array (
        'code' => 'BIS',
        'name' => 'Biskra',
      ),
      11 => 
      array (
        'code' => 'BLI',
        'name' => 'Blida',
      ),
      12 => 
      array (
        'code' => 'BMD',
        'name' => 'Boumerdes',
      ),
      13 => 
      array (
        'code' => 'BOA',
        'name' => 'Bouira',
      ),
      14 => 
      array (
        'code' => 'CHL',
        'name' => 'Chlef',
      ),
      15 => 
      array (
        'code' => 'CON',
        'name' => 'Constantine',
      ),
      16 => 
      array (
        'code' => 'DJE',
        'name' => 'Djelfa',
      ),
      17 => 
      array (
        'code' => 'EBA',
        'name' => 'El Bayadh',
      ),
      18 => 
      array (
        'code' => 'EOU',
        'name' => 'El Oued',
      ),
      19 => 
      array (
        'code' => 'ETA',
        'name' => 'El Tarf',
      ),
      20 => 
      array (
        'code' => 'GHA',
        'name' => 'Ghardaia',
      ),
      21 => 
      array (
        'code' => 'GUE',
        'name' => 'Guelma',
      ),
      22 => 
      array (
        'code' => 'ILL',
        'name' => 'Illizi',
      ),
      23 => 
      array (
        'code' => 'JIJ',
        'name' => 'Jijel',
      ),
      24 => 
      array (
        'code' => 'KHE',
        'name' => 'Khenchela',
      ),
      25 => 
      array (
        'code' => 'LAG',
        'name' => 'Laghouat',
      ),
      26 => 
      array (
        'code' => 'MED',
        'name' => 'Medea',
      ),
      27 => 
      array (
        'code' => 'MIL',
        'name' => 'Mila',
      ),
      28 => 
      array (
        'code' => 'MOS',
        'name' => 'Mostaganem',
      ),
      29 => 
      array (
        'code' => 'MSI',
        'name' => 'M\'Sila',
      ),
      30 => 
      array (
        'code' => 'MUA',
        'name' => 'Muaskar',
      ),
      31 => 
      array (
        'code' => 'NAA',
        'name' => 'Naama',
      ),
      32 => 
      array (
        'code' => 'OEB',
        'name' => 'Oum el-Bouaghi',
      ),
      33 => 
      array (
        'code' => 'ORA',
        'name' => 'Oran',
      ),
      34 => 
      array (
        'code' => 'OUA',
        'name' => 'Ouargla',
      ),
      35 => 
      array (
        'code' => 'REL',
        'name' => 'Relizane',
      ),
      36 => 
      array (
        'code' => 'SAH',
        'name' => 'Souk Ahras',
      ),
      37 => 
      array (
        'code' => 'SAI',
        'name' => 'Saida',
      ),
      38 => 
      array (
        'code' => 'SBA',
        'name' => 'Sidi Bel Abbes',
      ),
      39 => 
      array (
        'code' => 'SET',
        'name' => 'Setif',
      ),
      40 => 
      array (
        'code' => 'SKI',
        'name' => 'Skikda',
      ),
      41 => 
      array (
        'code' => 'TAM',
        'name' => 'Tamanghasset',
      ),
      42 => 
      array (
        'code' => 'TEB',
        'name' => 'Tebessa',
      ),
      43 => 
      array (
        'code' => 'TIA',
        'name' => 'Tiaret',
      ),
      44 => 
      array (
        'code' => 'TIN',
        'name' => 'Tindouf',
      ),
      45 => 
      array (
        'code' => 'TIP',
        'name' => 'Tipaza',
      ),
      46 => 
      array (
        'code' => 'TIS',
        'name' => 'Tissemsilt',
      ),
      47 => 
      array (
        'code' => 'TLE',
        'name' => 'Tlemcen',
      ),
      48 => 
      array (
        'code' => 'TOU',
        'name' => 'Tizi Ouzou',
      ),
    ),
    'EC' => 
    array (
      1 => 
      array (
        'code' => 'AZU',
        'name' => 'Azuay',
      ),
      2 => 
      array (
        'code' => 'BOL',
        'name' => 'Bolivar',
      ),
      3 => 
      array (
        'code' => 'CAN',
        'name' => 'Cañar',
      ),
      4 => 
      array (
        'code' => 'CAR',
        'name' => 'Carchi',
      ),
      5 => 
      array (
        'code' => 'CHI',
        'name' => 'Chimborazo',
      ),
      6 => 
      array (
        'code' => 'COT',
        'name' => 'Cotopaxi',
      ),
      7 => 
      array (
        'code' => 'EOR',
        'name' => 'El Oro',
      ),
      8 => 
      array (
        'code' => 'ESM',
        'name' => 'Esmeraldas',
      ),
      9 => 
      array (
        'code' => 'GPS',
        'name' => 'Galápagos',
      ),
      10 => 
      array (
        'code' => 'GUA',
        'name' => 'Guayas',
      ),
      11 => 
      array (
        'code' => 'IMB',
        'name' => 'Imbabura',
      ),
      12 => 
      array (
        'code' => 'LOJ',
        'name' => 'Loja',
      ),
      13 => 
      array (
        'code' => 'LRO',
        'name' => 'Los Ríos',
      ),
      14 => 
      array (
        'code' => 'MAN',
        'name' => 'Manabí',
      ),
      15 => 
      array (
        'code' => 'MSA',
        'name' => 'Morona Santiago',
      ),
      16 => 
      array (
        'code' => 'NAP',
        'name' => 'Napo',
      ),
      17 => 
      array (
        'code' => 'ORE',
        'name' => 'Orellana',
      ),
      18 => 
      array (
        'code' => 'PAS',
        'name' => 'Pastaza',
      ),
      19 => 
      array (
        'code' => 'PIC',
        'name' => 'Pichincha',
      ),
      20 => 
      array (
        'code' => 'SUC',
        'name' => 'Sucumbíos',
      ),
      21 => 
      array (
        'code' => 'TUN',
        'name' => 'Tungurahua',
      ),
      22 => 
      array (
        'code' => 'ZCH',
        'name' => 'Zamora Chinchipe',
      ),
    ),
    'EE' => 
    array (
      1 => 
      array (
        'code' => 'HA',
        'name' => 'Harjumaa (Tallinn)',
      ),
      2 => 
      array (
        'code' => 'HI',
        'name' => 'Hiiumaa (Kardla)',
      ),
      3 => 
      array (
        'code' => 'IV',
        'name' => 'Ida-Virumaa (Johvi)',
      ),
      4 => 
      array (
        'code' => 'JA',
        'name' => 'Järvamaa (Paide)',
      ),
      5 => 
      array (
        'code' => 'JO',
        'name' => 'Jõgevamaa (Jõgeva)',
      ),
      6 => 
      array (
        'code' => 'LV',
        'name' => 'Lääne-Virumaa (Rakvere)',
      ),
      7 => 
      array (
        'code' => 'LA',
        'name' => 'Läänemaa (Haapsalu)',
      ),
      8 => 
      array (
        'code' => 'PA',
        'name' => 'Pärnumaa (Pärnu)',
      ),
      9 => 
      array (
        'code' => 'PO',
        'name' => 'Põlvamaa (Põlva)',
      ),
      10 => 
      array (
        'code' => 'RA',
        'name' => 'Raplamaa (Rapla)',
      ),
      11 => 
      array (
        'code' => 'SA',
        'name' => 'Saaremaa (Kuessaare)',
      ),
      12 => 
      array (
        'code' => 'TA',
        'name' => 'Tartumaa (Tartu)',
      ),
      13 => 
      array (
        'code' => 'VA',
        'name' => 'Valgamaa (Valga)',
      ),
      14 => 
      array (
        'code' => 'VI',
        'name' => 'Viljandimaa (Viljandi)',
      ),
      15 => 
      array (
        'code' => 'VO',
        'name' => 'Võrumaa (Võru)',
      ),
    ),
    'EG' => 
    array (
      1 => 
      array (
        'code' => 'DHY',
        'name' => 'Ad Daqahliyah',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'Al Bahr al Ahmar',
      ),
      3 => 
      array (
        'code' => 'BHY',
        'name' => 'Al Buhayrah',
      ),
      4 => 
      array (
        'code' => 'FYM',
        'name' => 'Al Fayyum',
      ),
      5 => 
      array (
        'code' => 'GBY',
        'name' => 'Al Gharbiyah',
      ),
      6 => 
      array (
        'code' => 'IDR',
        'name' => 'Al Iskandariyah',
      ),
      7 => 
      array (
        'code' => 'IML',
        'name' => 'Al Isma \'iliyah',
      ),
      8 => 
      array (
        'code' => 'JZH',
        'name' => 'Al Jizah',
      ),
      9 => 
      array (
        'code' => 'MFY',
        'name' => 'Al Minufiyah',
      ),
      10 => 
      array (
        'code' => 'MNY',
        'name' => 'Al Minya',
      ),
      11 => 
      array (
        'code' => 'QHR',
        'name' => 'Al Qahirah',
      ),
      12 => 
      array (
        'code' => 'QLY',
        'name' => 'Al Qalyubiyah',
      ),
      13 => 
      array (
        'code' => 'WJD',
        'name' => 'Al Wadi al Jadid',
      ),
      14 => 
      array (
        'code' => 'SHQ',
        'name' => 'Ash Sharqiyah',
      ),
      15 => 
      array (
        'code' => 'SWY',
        'name' => 'As Suways',
      ),
      16 => 
      array (
        'code' => 'ASW',
        'name' => 'Aswan',
      ),
      17 => 
      array (
        'code' => 'ASY',
        'name' => 'Asyut',
      ),
      18 => 
      array (
        'code' => 'BSW',
        'name' => 'Bani Suwayf',
      ),
      19 => 
      array (
        'code' => 'BSD',
        'name' => 'Bur Sa\'id',
      ),
      20 => 
      array (
        'code' => 'DMY',
        'name' => 'Dumyat',
      ),
      21 => 
      array (
        'code' => 'JNS',
        'name' => 'Janub Sina\'',
      ),
      22 => 
      array (
        'code' => 'KSH',
        'name' => 'Kafr ash Shaykh',
      ),
      23 => 
      array (
        'code' => 'MAT',
        'name' => 'Matruh',
      ),
      24 => 
      array (
        'code' => 'QIN',
        'name' => 'Qina',
      ),
      25 => 
      array (
        'code' => 'SHS',
        'name' => 'Shamal Sina\'',
      ),
      26 => 
      array (
        'code' => 'SUH',
        'name' => 'Suhaj',
      ),
    ),
    'ER' => 
    array (
      1 => 
      array (
        'code' => 'MA',
        'name' => 'Central (Maekel)',
      ),
      2 => 
      array (
        'code' => 'KE',
        'name' => 'Anseba (Keren)',
      ),
      3 => 
      array (
        'code' => 'DK',
        'name' => 'Southern Red Sea (Debub-Keih-Bah)',
      ),
      4 => 
      array (
        'code' => 'SK',
        'name' => 'Northern Red Sea (Semien-Keih-Ba)',
      ),
      5 => 
      array (
        'code' => 'DE',
        'name' => 'Southern (Debub)',
      ),
      6 => 
      array (
        'code' => 'BR',
        'name' => 'Gash-Barka (Barentu)',
      ),
    ),
    'ES' => 
    array (
      1 => 
      array (
        'code' => 'CA',
        'name' => 'La Coruña',
      ),
      2 => 
      array (
        'code' => 'AL',
        'name' => 'Álava',
      ),
      3 => 
      array (
        'code' => 'AB',
        'name' => 'Albacete',
      ),
      4 => 
      array (
        'code' => 'AC',
        'name' => 'Alicante',
      ),
      5 => 
      array (
        'code' => 'AM',
        'name' => 'Almeria',
      ),
      6 => 
      array (
        'code' => 'AS',
        'name' => 'Asturias',
      ),
      7 => 
      array (
        'code' => 'AV',
        'name' => 'Ávila',
      ),
      8 => 
      array (
        'code' => 'BJ',
        'name' => 'Badajoz',
      ),
      9 => 
      array (
        'code' => 'IB',
        'name' => 'Baleares',
      ),
      10 => 
      array (
        'code' => 'BA',
        'name' => 'Barcelona',
      ),
      11 => 
      array (
        'code' => 'BU',
        'name' => 'Burgos',
      ),
      12 => 
      array (
        'code' => 'CC',
        'name' => 'Cáceres',
      ),
      13 => 
      array (
        'code' => 'CZ',
        'name' => 'Cádiz',
      ),
      14 => 
      array (
        'code' => 'CT',
        'name' => 'Cantabria',
      ),
      15 => 
      array (
        'code' => 'CL',
        'name' => 'Castellón',
      ),
      16 => 
      array (
        'code' => 'CE',
        'name' => 'Ceuta',
      ),
      17 => 
      array (
        'code' => 'CR',
        'name' => 'Ciudad Real',
      ),
      18 => 
      array (
        'code' => 'CD',
        'name' => 'Córdoba',
      ),
      19 => 
      array (
        'code' => 'CU',
        'name' => 'Cuenca',
      ),
      20 => 
      array (
        'code' => 'GI',
        'name' => 'Gerona',
      ),
      21 => 
      array (
        'code' => 'GD',
        'name' => 'Granada',
      ),
      22 => 
      array (
        'code' => 'GJ',
        'name' => 'Guadalajara',
      ),
      23 => 
      array (
        'code' => 'GP',
        'name' => 'Guipúzcoa',
      ),
      24 => 
      array (
        'code' => 'HL',
        'name' => 'Huelva',
      ),
      25 => 
      array (
        'code' => 'HS',
        'name' => 'Huesca',
      ),
      26 => 
      array (
        'code' => 'JN',
        'name' => 'Jaén',
      ),
      27 => 
      array (
        'code' => 'RJ',
        'name' => 'La Rioja',
      ),
      28 => 
      array (
        'code' => 'PM',
        'name' => 'Las Palmas',
      ),
      29 => 
      array (
        'code' => 'LE',
        'name' => 'León',
      ),
      30 => 
      array (
        'code' => 'LL',
        'name' => 'Lérida',
      ),
      31 => 
      array (
        'code' => 'LG',
        'name' => 'Lugo',
      ),
      32 => 
      array (
        'code' => 'MD',
        'name' => 'Madrid',
      ),
      33 => 
      array (
        'code' => 'MA',
        'name' => 'Málaga',
      ),
      34 => 
      array (
        'code' => 'ML',
        'name' => 'Melilla',
      ),
      35 => 
      array (
        'code' => 'MU',
        'name' => 'Murcia',
      ),
      36 => 
      array (
        'code' => 'NV',
        'name' => 'Navarra',
      ),
      37 => 
      array (
        'code' => 'OU',
        'name' => 'Ourense',
      ),
      38 => 
      array (
        'code' => 'PL',
        'name' => 'Palencia',
      ),
      39 => 
      array (
        'code' => 'PO',
        'name' => 'Pontevedra',
      ),
      40 => 
      array (
        'code' => 'SL',
        'name' => 'Salamanca',
      ),
      41 => 
      array (
        'code' => 'SC',
        'name' => 'Santa Cruz de Tenerife',
      ),
      42 => 
      array (
        'code' => 'SG',
        'name' => 'Segovia',
      ),
      43 => 
      array (
        'code' => 'SV',
        'name' => 'Sevilla',
      ),
      44 => 
      array (
        'code' => 'SO',
        'name' => 'Soria',
      ),
      45 => 
      array (
        'code' => 'TA',
        'name' => 'Tarragona',
      ),
      46 => 
      array (
        'code' => 'TE',
        'name' => 'Teruel',
      ),
      47 => 
      array (
        'code' => 'TO',
        'name' => 'Toledo',
      ),
      48 => 
      array (
        'code' => 'VC',
        'name' => 'Valencia',
      ),
      49 => 
      array (
        'code' => 'VD',
        'name' => 'Valladolid',
      ),
      50 => 
      array (
        'code' => 'VZ',
        'name' => 'Vizcaya',
      ),
      51 => 
      array (
        'code' => 'ZM',
        'name' => 'Zamora',
      ),
      52 => 
      array (
        'code' => 'ZR',
        'name' => 'Zaragoza',
      ),
    ),
    'ET' => 
    array (
      1 => 
      array (
        'code' => 'AF',
        'name' => 'Afar',
      ),
      2 => 
      array (
        'code' => 'AH',
        'name' => 'Amhara',
      ),
      3 => 
      array (
        'code' => 'BG',
        'name' => 'Benishangul-Gumaz',
      ),
      4 => 
      array (
        'code' => 'GB',
        'name' => 'Gambela',
      ),
      5 => 
      array (
        'code' => 'HR',
        'name' => 'Hariai',
      ),
      6 => 
      array (
        'code' => 'OR',
        'name' => 'Oromia',
      ),
      7 => 
      array (
        'code' => 'SM',
        'name' => 'Somali',
      ),
      8 => 
      array (
        'code' => 'SN',
        'name' => 'Southern Nations - Nationalities',
      ),
      9 => 
      array (
        'code' => 'TG',
        'name' => 'Tigray',
      ),
      10 => 
      array (
        'code' => 'AA',
        'name' => 'Addis Ababa',
      ),
      11 => 
      array (
        'code' => 'DD',
        'name' => 'Dire Dawa',
      ),
    ),
    'FI' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Ahvenanmaan lääni',
      ),
      2 => 
      array (
        'code' => 'ES',
        'name' => 'Etelä-Suomen lääni',
      ),
      3 => 
      array (
        'code' => 'IS',
        'name' => 'Itä-Suomen lääni',
      ),
      4 => 
      array (
        'code' => 'LS',
        'name' => 'Länsi-Suomen lääni',
      ),
      5 => 
      array (
        'code' => 'LA',
        'name' => 'Lapin lääni',
      ),
      6 => 
      array (
        'code' => 'OU',
        'name' => 'Oulun lääni',
      ),
    ),
    'FJ' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => 'Central Division',
      ),
      2 => 
      array (
        'code' => 'E',
        'name' => 'Eastern Division',
      ),
      3 => 
      array (
        'code' => 'N',
        'name' => 'Northern Division',
      ),
      4 => 
      array (
        'code' => 'R',
        'name' => 'Rotuma',
      ),
      5 => 
      array (
        'code' => 'W',
        'name' => 'Western Division',
      ),
    ),
    'FM' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => 'Chuuk',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => 'Kosrae',
      ),
      3 => 
      array (
        'code' => 'P',
        'name' => 'Pohnpei',
      ),
      4 => 
      array (
        'code' => 'Y',
        'name' => 'Yap',
      ),
    ),
    'FO' => 
    array (
      1 => 
      array (
        'code' => 'TÛR',
        'name' => 'Tûrshavnar Kommuna',
      ),
      2 => 
      array (
        'code' => 'KLA',
        'name' => 'Klaksvík',
      ),
      3 => 
      array (
        'code' => 'RUN',
        'name' => 'Runavík',
      ),
      4 => 
      array (
        'code' => 'TVØ',
        'name' => 'Tvøroyri',
      ),
      5 => 
      array (
        'code' => 'FUG',
        'name' => 'Fuglafjørður',
      ),
      6 => 
      array (
        'code' => 'SUN',
        'name' => 'Sunda Kommuna',
      ),
      7 => 
      array (
        'code' => 'VáG',
        'name' => 'Vágur',
      ),
      8 => 
      array (
        'code' => 'NES',
        'name' => 'Nes',
      ),
      9 => 
      array (
        'code' => 'VES',
        'name' => 'Vestmanna',
      ),
      10 => 
      array (
        'code' => 'MIð',
        'name' => 'Miðvágur',
      ),
      11 => 
      array (
        'code' => 'SØR',
        'name' => 'Sørvágur',
      ),
      12 => 
      array (
        'code' => 'GØT',
        'name' => 'Gøtu Kommuna',
      ),
      13 => 
      array (
        'code' => 'SJû',
        'name' => 'Sjûvar Kommuna',
      ),
      14 => 
      array (
        'code' => 'LEI',
        'name' => 'Leirvík',
      ),
      15 => 
      array (
        'code' => 'SAN',
        'name' => 'Sandavágur',
      ),
      16 => 
      array (
        'code' => 'HVA',
        'name' => 'Hvalba',
      ),
      17 => 
      array (
        'code' => 'EIð',
        'name' => 'Eiði',
      ),
      18 => 
      array (
        'code' => 'KVí',
        'name' => 'Kvívík',
      ),
      19 => 
      array (
        'code' => 'SAN',
        'name' => 'Sandur',
      ),
      20 => 
      array (
        'code' => 'SKO',
        'name' => 'Skopun',
      ),
      21 => 
      array (
        'code' => 'HVA',
        'name' => 'Hvannasund',
      ),
      22 => 
      array (
        'code' => 'SUM',
        'name' => 'Sumba',
      ),
      23 => 
      array (
        'code' => 'VIð',
        'name' => 'Viðareiði',
      ),
      24 => 
      array (
        'code' => 'POR',
        'name' => 'Porkeri',
      ),
      25 => 
      array (
        'code' => 'SKá',
        'name' => 'Skálavík',
      ),
      26 => 
      array (
        'code' => 'KUN',
        'name' => 'Kunoy',
      ),
      27 => 
      array (
        'code' => 'HÚS',
        'name' => 'Húsavík',
      ),
      28 => 
      array (
        'code' => 'HOV',
        'name' => 'Hov',
      ),
      29 => 
      array (
        'code' => 'FáM',
        'name' => 'Fámjin',
      ),
      30 => 
      array (
        'code' => 'FUN',
        'name' => 'Funningur',
      ),
      31 => 
      array (
        'code' => 'HÚS',
        'name' => 'HÚsar',
      ),
      32 => 
      array (
        'code' => 'SKÚ',
        'name' => 'SkÚvoy',
      ),
      33 => 
      array (
        'code' => 'SVí',
        'name' => 'Svínoy',
      ),
      34 => 
      array (
        'code' => 'FUG',
        'name' => 'Fugloy',
      ),
    ),
    'FR' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Alsace',
      ),
      2 => 
      array (
        'code' => 'AQ',
        'name' => 'Aquitaine',
      ),
      3 => 
      array (
        'code' => 'AU',
        'name' => 'Auvergne',
      ),
      4 => 
      array (
        'code' => 'BR',
        'name' => 'Brittany',
      ),
      5 => 
      array (
        'code' => 'BU',
        'name' => 'Burgundy',
      ),
      6 => 
      array (
        'code' => 'CE',
        'name' => 'Center Loire Valley',
      ),
      7 => 
      array (
        'code' => 'CH',
        'name' => 'Champagne',
      ),
      8 => 
      array (
        'code' => 'CO',
        'name' => 'Corse',
      ),
      9 => 
      array (
        'code' => 'FR',
        'name' => 'France Comte',
      ),
      10 => 
      array (
        'code' => 'LA',
        'name' => 'Languedoc Roussillon',
      ),
      11 => 
      array (
        'code' => 'LI',
        'name' => 'Limousin',
      ),
      12 => 
      array (
        'code' => 'LO',
        'name' => 'Lorraine',
      ),
      13 => 
      array (
        'code' => 'MI',
        'name' => 'Midi Pyrenees',
      ),
      14 => 
      array (
        'code' => 'NO',
        'name' => 'Nord Pas de Calais',
      ),
      15 => 
      array (
        'code' => 'NR',
        'name' => 'Normandy',
      ),
      16 => 
      array (
        'code' => 'PA',
        'name' => 'Paris / Ile de France',
      ),
      17 => 
      array (
        'code' => 'PI',
        'name' => 'Picardie',
      ),
      18 => 
      array (
        'code' => 'PO',
        'name' => 'Poitou Charente',
      ),
      19 => 
      array (
        'code' => 'PR',
        'name' => 'Provence',
      ),
      20 => 
      array (
        'code' => 'RH',
        'name' => 'Rhone Alps',
      ),
      21 => 
      array (
        'code' => 'RI',
        'name' => 'Riviera',
      ),
      22 => 
      array (
        'code' => 'WE',
        'name' => 'Western Loire Valley',
      ),
    ),
    'FX' => 
    array (
      1 => 
      array (
        'code' => 'Et',
        'name' => 'Etranger',
      ),
      2 => 
      array (
        'code' => '01',
        'name' => 'Ain',
      ),
      3 => 
      array (
        'code' => '02',
        'name' => 'Aisne',
      ),
      4 => 
      array (
        'code' => '03',
        'name' => 'Allier',
      ),
      5 => 
      array (
        'code' => '04',
        'name' => 'Alpes de Haute Provence',
      ),
      6 => 
      array (
        'code' => '05',
        'name' => 'Hautes-Alpes',
      ),
      7 => 
      array (
        'code' => '06',
        'name' => 'Alpes Maritimes',
      ),
      8 => 
      array (
        'code' => '07',
        'name' => 'Ardèche',
      ),
      9 => 
      array (
        'code' => '08',
        'name' => 'Ardennes',
      ),
      10 => 
      array (
        'code' => '09',
        'name' => 'Ariège',
      ),
      11 => 
      array (
        'code' => '10',
        'name' => 'Aube',
      ),
      12 => 
      array (
        'code' => '11',
        'name' => 'Aude',
      ),
      13 => 
      array (
        'code' => '12',
        'name' => 'Aveyron',
      ),
      14 => 
      array (
        'code' => '13',
        'name' => 'Bouches du Rhône',
      ),
      15 => 
      array (
        'code' => '14',
        'name' => 'Calvados',
      ),
      16 => 
      array (
        'code' => '15',
        'name' => 'Cantal',
      ),
      17 => 
      array (
        'code' => '16',
        'name' => 'Charente',
      ),
      18 => 
      array (
        'code' => '17',
        'name' => 'Charente Maritime',
      ),
      19 => 
      array (
        'code' => '18',
        'name' => 'Cher',
      ),
      20 => 
      array (
        'code' => '19',
        'name' => 'Corrèze',
      ),
      21 => 
      array (
        'code' => '2A',
        'name' => 'Corse du Sud',
      ),
      22 => 
      array (
        'code' => '2B',
        'name' => 'Haute Corse',
      ),
      23 => 
      array (
        'code' => '21',
        'name' => 'Côte d\'or',
      ),
      24 => 
      array (
        'code' => '22',
        'name' => 'Côtes d\'Armor',
      ),
      25 => 
      array (
        'code' => '23',
        'name' => 'Creuse',
      ),
      26 => 
      array (
        'code' => '24',
        'name' => 'Dordogne',
      ),
      27 => 
      array (
        'code' => '25',
        'name' => 'Doubs',
      ),
      28 => 
      array (
        'code' => '26',
        'name' => 'Drôme',
      ),
      29 => 
      array (
        'code' => '27',
        'name' => 'Eure',
      ),
      30 => 
      array (
        'code' => '28',
        'name' => 'Eure et Loir',
      ),
      31 => 
      array (
        'code' => '29',
        'name' => 'Finistère',
      ),
      32 => 
      array (
        'code' => '30',
        'name' => 'Gard',
      ),
      33 => 
      array (
        'code' => '31',
        'name' => 'Haute Garonne',
      ),
      34 => 
      array (
        'code' => '32',
        'name' => 'Gers',
      ),
      35 => 
      array (
        'code' => '33',
        'name' => 'Gironde',
      ),
      36 => 
      array (
        'code' => '34',
        'name' => 'Hérault',
      ),
      37 => 
      array (
        'code' => '35',
        'name' => 'Ille et Vilaine',
      ),
      38 => 
      array (
        'code' => '36',
        'name' => 'Indre',
      ),
      39 => 
      array (
        'code' => '37',
        'name' => 'Indre et Loire',
      ),
      40 => 
      array (
        'code' => '38',
        'name' => 'Isére',
      ),
      41 => 
      array (
        'code' => '39',
        'name' => 'Jura',
      ),
      42 => 
      array (
        'code' => '40',
        'name' => 'Landes',
      ),
      43 => 
      array (
        'code' => '41',
        'name' => 'Loir et Cher',
      ),
      44 => 
      array (
        'code' => '42',
        'name' => 'Loire',
      ),
      45 => 
      array (
        'code' => '43',
        'name' => 'Haute Loire',
      ),
      46 => 
      array (
        'code' => '44',
        'name' => 'Loire Atlantique',
      ),
      47 => 
      array (
        'code' => '45',
        'name' => 'Loiret',
      ),
      48 => 
      array (
        'code' => '46',
        'name' => 'Lot',
      ),
      49 => 
      array (
        'code' => '47',
        'name' => 'Lot et Garonne',
      ),
      50 => 
      array (
        'code' => '48',
        'name' => 'Lozère',
      ),
      51 => 
      array (
        'code' => '49',
        'name' => 'Maine et Loire',
      ),
      52 => 
      array (
        'code' => '50',
        'name' => 'Manche',
      ),
      53 => 
      array (
        'code' => '51',
        'name' => 'Marne',
      ),
      54 => 
      array (
        'code' => '52',
        'name' => 'Haute Marne',
      ),
      55 => 
      array (
        'code' => '53',
        'name' => 'Mayenne',
      ),
      56 => 
      array (
        'code' => '54',
        'name' => 'Meurthe et Moselle',
      ),
      57 => 
      array (
        'code' => '55',
        'name' => 'Meuse',
      ),
      58 => 
      array (
        'code' => '56',
        'name' => 'Morbihan',
      ),
      59 => 
      array (
        'code' => '57',
        'name' => 'Moselle',
      ),
      60 => 
      array (
        'code' => '58',
        'name' => 'Nièvre',
      ),
      61 => 
      array (
        'code' => '59',
        'name' => 'Nord',
      ),
      62 => 
      array (
        'code' => '60',
        'name' => 'Oise',
      ),
      63 => 
      array (
        'code' => '61',
        'name' => 'Orne',
      ),
      64 => 
      array (
        'code' => '62',
        'name' => 'Pas de Calais',
      ),
      65 => 
      array (
        'code' => '63',
        'name' => 'Puy de Dôme',
      ),
      66 => 
      array (
        'code' => '64',
        'name' => 'Pyrenees Atlantique',
      ),
      67 => 
      array (
        'code' => '65',
        'name' => 'Hautes Pyrenees',
      ),
      68 => 
      array (
        'code' => '66',
        'name' => 'Pyrenees Orientale',
      ),
      69 => 
      array (
        'code' => '67',
        'name' => 'Bas Rhin',
      ),
      70 => 
      array (
        'code' => '68',
        'name' => 'Haut Rhin',
      ),
      71 => 
      array (
        'code' => '69',
        'name' => 'Rhône',
      ),
      72 => 
      array (
        'code' => '70',
        'name' => 'Haute Saône',
      ),
      73 => 
      array (
        'code' => '71',
        'name' => 'Saône et Loire',
      ),
      74 => 
      array (
        'code' => '72',
        'name' => 'Sarthe',
      ),
      75 => 
      array (
        'code' => '73',
        'name' => 'Savoie',
      ),
      76 => 
      array (
        'code' => '74',
        'name' => 'Haute Savoie',
      ),
      77 => 
      array (
        'code' => '75',
        'name' => 'Paris',
      ),
      78 => 
      array (
        'code' => '76',
        'name' => 'Seine Martitime',
      ),
      79 => 
      array (
        'code' => '77',
        'name' => 'Seine et Marne',
      ),
      80 => 
      array (
        'code' => '78',
        'name' => 'Yvelines',
      ),
      81 => 
      array (
        'code' => '79',
        'name' => 'Deux Sèvres',
      ),
      82 => 
      array (
        'code' => '80',
        'name' => 'Somme',
      ),
      83 => 
      array (
        'code' => '81',
        'name' => 'Tarn',
      ),
      84 => 
      array (
        'code' => '82',
        'name' => 'Tarn et Garonne',
      ),
      85 => 
      array (
        'code' => '83',
        'name' => 'Var',
      ),
      86 => 
      array (
        'code' => '84',
        'name' => 'Vaucluse',
      ),
      87 => 
      array (
        'code' => '85',
        'name' => 'Vendée',
      ),
      88 => 
      array (
        'code' => '86',
        'name' => 'Vienne',
      ),
      89 => 
      array (
        'code' => '87',
        'name' => 'Haute Vienne',
      ),
      90 => 
      array (
        'code' => '88',
        'name' => 'Vosges',
      ),
      91 => 
      array (
        'code' => '89',
        'name' => 'Yonne',
      ),
      92 => 
      array (
        'code' => '90',
        'name' => 'Territoire de Belfort',
      ),
      93 => 
      array (
        'code' => '91',
        'name' => 'Essonne',
      ),
      94 => 
      array (
        'code' => '92',
        'name' => 'Hauts de Seine',
      ),
      95 => 
      array (
        'code' => '93',
        'name' => 'Seine St-Denis',
      ),
      96 => 
      array (
        'code' => '94',
        'name' => 'Val de Marne',
      ),
      97 => 
      array (
        'code' => '95',
        'name' => 'Val d\'oise',
      ),
    ),
    'GA' => 
    array (
      1 => 
      array (
        'code' => 'ES',
        'name' => 'Estuaire',
      ),
      2 => 
      array (
        'code' => 'HO',
        'name' => 'Haut-Ogooue',
      ),
      3 => 
      array (
        'code' => 'MO',
        'name' => 'Moyen-Ogooue',
      ),
      4 => 
      array (
        'code' => 'NG',
        'name' => 'Ngounie',
      ),
      5 => 
      array (
        'code' => 'NY',
        'name' => 'Nyanga',
      ),
      6 => 
      array (
        'code' => 'OI',
        'name' => 'Ogooue-Ivindo',
      ),
      7 => 
      array (
        'code' => 'OL',
        'name' => 'Ogooue-Lolo',
      ),
      8 => 
      array (
        'code' => 'OM',
        'name' => 'Ogooue-Maritime',
      ),
      9 => 
      array (
        'code' => 'WN',
        'name' => 'Woleu-Ntem',
      ),
    ),
    'GB' => 
    array (
      1 => 
      array (
        'code' => 'ABN',
        'name' => 'Aberdeen',
      ),
      2 => 
      array (
        'code' => 'ABNS',
        'name' => 'Aberdeenshire',
      ),
      3 => 
      array (
        'code' => 'ANG',
        'name' => 'Anglesey',
      ),
      4 => 
      array (
        'code' => 'AGS',
        'name' => 'Angus',
      ),
      5 => 
      array (
        'code' => 'ARY',
        'name' => 'Argyll and Bute',
      ),
      6 => 
      array (
        'code' => 'BEDS',
        'name' => 'Bedfordshire',
      ),
      7 => 
      array (
        'code' => 'BERKS',
        'name' => 'Berkshire',
      ),
      8 => 
      array (
        'code' => 'BLA',
        'name' => 'Blaenau Gwent',
      ),
      9 => 
      array (
        'code' => 'BRI',
        'name' => 'Bridgend',
      ),
      10 => 
      array (
        'code' => 'BSTL',
        'name' => 'Bristol',
      ),
      11 => 
      array (
        'code' => 'BUCKS',
        'name' => 'Buckinghamshire',
      ),
      12 => 
      array (
        'code' => 'CAE',
        'name' => 'Caerphilly',
      ),
      13 => 
      array (
        'code' => 'CAMBS',
        'name' => 'Cambridgeshire',
      ),
      14 => 
      array (
        'code' => 'CDF',
        'name' => 'Cardiff',
      ),
      15 => 
      array (
        'code' => 'CARM',
        'name' => 'Carmarthenshire',
      ),
      16 => 
      array (
        'code' => 'CDGN',
        'name' => 'Ceredigion',
      ),
      17 => 
      array (
        'code' => 'CHES',
        'name' => 'Cheshire',
      ),
      18 => 
      array (
        'code' => 'CLACK',
        'name' => 'Clackmannanshire',
      ),
      19 => 
      array (
        'code' => 'CON',
        'name' => 'Conwy',
      ),
      20 => 
      array (
        'code' => 'CORN',
        'name' => 'Cornwall',
      ),
      21 => 
      array (
        'code' => 'DNBG',
        'name' => 'Denbighshire',
      ),
      22 => 
      array (
        'code' => 'DERBY',
        'name' => 'Derbyshire',
      ),
      23 => 
      array (
        'code' => 'DVN',
        'name' => 'Devon',
      ),
      24 => 
      array (
        'code' => 'DOR',
        'name' => 'Dorset',
      ),
      25 => 
      array (
        'code' => 'DGL',
        'name' => 'Dumfries and Galloway',
      ),
      26 => 
      array (
        'code' => 'DUND',
        'name' => 'Dundee',
      ),
      27 => 
      array (
        'code' => 'DHM',
        'name' => 'Durham',
      ),
      28 => 
      array (
        'code' => 'ARYE',
        'name' => 'East Ayrshire',
      ),
      29 => 
      array (
        'code' => 'DUNBE',
        'name' => 'East Dunbartonshire',
      ),
      30 => 
      array (
        'code' => 'LOTE',
        'name' => 'East Lothian',
      ),
      31 => 
      array (
        'code' => 'RENE',
        'name' => 'East Renfrewshire',
      ),
      32 => 
      array (
        'code' => 'ERYS',
        'name' => 'East Riding of Yorkshire',
      ),
      33 => 
      array (
        'code' => 'SXE',
        'name' => 'East Sussex',
      ),
      34 => 
      array (
        'code' => 'EDIN',
        'name' => 'Edinburgh',
      ),
      35 => 
      array (
        'code' => 'ESX',
        'name' => 'Essex',
      ),
      36 => 
      array (
        'code' => 'FALK',
        'name' => 'Falkirk',
      ),
      37 => 
      array (
        'code' => 'FFE',
        'name' => 'Fife',
      ),
      38 => 
      array (
        'code' => 'FLINT',
        'name' => 'Flintshire',
      ),
      39 => 
      array (
        'code' => 'GLAS',
        'name' => 'Glasgow',
      ),
      40 => 
      array (
        'code' => 'GLOS',
        'name' => 'Gloucestershire',
      ),
      41 => 
      array (
        'code' => 'LDN',
        'name' => 'Greater London',
      ),
      42 => 
      array (
        'code' => 'MCH',
        'name' => 'Greater Manchester',
      ),
      43 => 
      array (
        'code' => 'GDD',
        'name' => 'Gwynedd',
      ),
      44 => 
      array (
        'code' => 'HANTS',
        'name' => 'Hampshire',
      ),
      45 => 
      array (
        'code' => 'HWR',
        'name' => 'Herefordshire',
      ),
      46 => 
      array (
        'code' => 'HERTS',
        'name' => 'Hertfordshire',
      ),
      47 => 
      array (
        'code' => 'HLD',
        'name' => 'Highlands',
      ),
      48 => 
      array (
        'code' => 'IVER',
        'name' => 'Inverclyde',
      ),
      49 => 
      array (
        'code' => 'IOW',
        'name' => 'Isle of Wight',
      ),
      50 => 
      array (
        'code' => 'KNT',
        'name' => 'Kent',
      ),
      51 => 
      array (
        'code' => 'LANCS',
        'name' => 'Lancashire',
      ),
      52 => 
      array (
        'code' => 'LEICS',
        'name' => 'Leicestershire',
      ),
      53 => 
      array (
        'code' => 'LINCS',
        'name' => 'Lincolnshire',
      ),
      54 => 
      array (
        'code' => 'MSY',
        'name' => 'Merseyside',
      ),
      55 => 
      array (
        'code' => 'MERT',
        'name' => 'Merthyr Tydfil',
      ),
      56 => 
      array (
        'code' => 'MLOT',
        'name' => 'Midlothian',
      ),
      57 => 
      array (
        'code' => 'MMOUTH',
        'name' => 'Monmouthshire',
      ),
      58 => 
      array (
        'code' => 'MORAY',
        'name' => 'Moray',
      ),
      59 => 
      array (
        'code' => 'NPRTAL',
        'name' => 'Neath Port Talbot',
      ),
      60 => 
      array (
        'code' => 'NEWPT',
        'name' => 'Newport',
      ),
      61 => 
      array (
        'code' => 'NOR',
        'name' => 'Norfolk',
      ),
      62 => 
      array (
        'code' => 'ARYN',
        'name' => 'North Ayrshire',
      ),
      63 => 
      array (
        'code' => 'LANN',
        'name' => 'North Lanarkshire',
      ),
      64 => 
      array (
        'code' => 'YSN',
        'name' => 'North Yorkshire',
      ),
      65 => 
      array (
        'code' => 'NHM',
        'name' => 'Northamptonshire',
      ),
      66 => 
      array (
        'code' => 'NLD',
        'name' => 'Northumberland',
      ),
      67 => 
      array (
        'code' => 'NOT',
        'name' => 'Nottinghamshire',
      ),
      68 => 
      array (
        'code' => 'ORK',
        'name' => 'Orkney Islands',
      ),
      69 => 
      array (
        'code' => 'OFE',
        'name' => 'Oxfordshire',
      ),
      70 => 
      array (
        'code' => 'PEM',
        'name' => 'Pembrokeshire',
      ),
      71 => 
      array (
        'code' => 'PERTH',
        'name' => 'Perth and Kinross',
      ),
      72 => 
      array (
        'code' => 'PWS',
        'name' => 'Powys',
      ),
      73 => 
      array (
        'code' => 'REN',
        'name' => 'Renfrewshire',
      ),
      74 => 
      array (
        'code' => 'RHON',
        'name' => 'Rhondda Cynon Taff',
      ),
      75 => 
      array (
        'code' => 'RUT',
        'name' => 'Rutland',
      ),
      76 => 
      array (
        'code' => 'BOR',
        'name' => 'Scottish Borders',
      ),
      77 => 
      array (
        'code' => 'SHET',
        'name' => 'Shetland Islands',
      ),
      78 => 
      array (
        'code' => 'SPE',
        'name' => 'Shropshire',
      ),
      79 => 
      array (
        'code' => 'SOM',
        'name' => 'Somerset',
      ),
      80 => 
      array (
        'code' => 'ARYS',
        'name' => 'South Ayrshire',
      ),
      81 => 
      array (
        'code' => 'LANS',
        'name' => 'South Lanarkshire',
      ),
      82 => 
      array (
        'code' => 'YSS',
        'name' => 'South Yorkshire',
      ),
      83 => 
      array (
        'code' => 'SFD',
        'name' => 'Staffordshire',
      ),
      84 => 
      array (
        'code' => 'STIR',
        'name' => 'Stirling',
      ),
      85 => 
      array (
        'code' => 'SFK',
        'name' => 'Suffolk',
      ),
      86 => 
      array (
        'code' => 'SRY',
        'name' => 'Surrey',
      ),
      87 => 
      array (
        'code' => 'SWAN',
        'name' => 'Swansea',
      ),
      88 => 
      array (
        'code' => 'TORF',
        'name' => 'Torfaen',
      ),
      89 => 
      array (
        'code' => 'TWR',
        'name' => 'Tyne and Wear',
      ),
      90 => 
      array (
        'code' => 'VGLAM',
        'name' => 'Vale of Glamorgan',
      ),
      91 => 
      array (
        'code' => 'WARKS',
        'name' => 'Warwickshire',
      ),
      92 => 
      array (
        'code' => 'WDUN',
        'name' => 'West Dunbartonshire',
      ),
      93 => 
      array (
        'code' => 'WLOT',
        'name' => 'West Lothian',
      ),
      94 => 
      array (
        'code' => 'WMD',
        'name' => 'West Midlands',
      ),
      95 => 
      array (
        'code' => 'SXW',
        'name' => 'West Sussex',
      ),
      96 => 
      array (
        'code' => 'YSW',
        'name' => 'West Yorkshire',
      ),
      97 => 
      array (
        'code' => 'WIL',
        'name' => 'Western Isles',
      ),
      98 => 
      array (
        'code' => 'WLT',
        'name' => 'Wiltshire',
      ),
      99 => 
      array (
        'code' => 'WORCS',
        'name' => 'Worcestershire',
      ),
      100 => 
      array (
        'code' => 'WRX',
        'name' => 'Wrexham',
      ),
    ),
    'GE' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Abkhazia',
      ),
      2 => 
      array (
        'code' => 'AJ',
        'name' => 'Ajaria',
      ),
      3 => 
      array (
        'code' => 'GU',
        'name' => 'Guria',
      ),
      4 => 
      array (
        'code' => 'IM',
        'name' => 'Imereti',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'Kakheti',
      ),
      6 => 
      array (
        'code' => 'KK',
        'name' => 'Kvemo Kartli',
      ),
      7 => 
      array (
        'code' => 'MM',
        'name' => 'Mtskheta-Mtianeti',
      ),
      8 => 
      array (
        'code' => 'RL',
        'name' => 'Racha Lechkhumi and Kvemo Svanet',
      ),
      9 => 
      array (
        'code' => 'SJ',
        'name' => 'Samtskhe-Javakheti',
      ),
      10 => 
      array (
        'code' => 'SK',
        'name' => 'Shida Kartli',
      ),
      11 => 
      array (
        'code' => 'SZ',
        'name' => 'Samegrelo-Zemo Svaneti',
      ),
      12 => 
      array (
        'code' => 'TB',
        'name' => 'Tbilisi',
      ),
    ),
    'GF' => 
    array (
      1 => 
      array (
        'code' => 'AWA',
        'name' => 'Awala-Yalimapo',
      ),
      2 => 
      array (
        'code' => 'MAN',
        'name' => 'Mana',
      ),
      3 => 
      array (
        'code' => 'SAI',
        'name' => 'Saint-Laurent-Du-Maroni',
      ),
      4 => 
      array (
        'code' => 'APA',
        'name' => 'Apatou',
      ),
      5 => 
      array (
        'code' => 'GRA',
        'name' => 'Grand-Santi',
      ),
      6 => 
      array (
        'code' => 'PAP',
        'name' => 'Papaïchton',
      ),
      7 => 
      array (
        'code' => 'SAÜ',
        'name' => 'Saül',
      ),
      8 => 
      array (
        'code' => 'MAR',
        'name' => 'Maripasoula',
      ),
      9 => 
      array (
        'code' => 'CAM',
        'name' => 'Camopi',
      ),
      10 => 
      array (
        'code' => 'SAI',
        'name' => 'Saint-Georges',
      ),
      11 => 
      array (
        'code' => 'OUA',
        'name' => 'Ouanary',
      ),
      12 => 
      array (
        'code' => 'RéG',
        'name' => 'Régina',
      ),
      13 => 
      array (
        'code' => 'ROU',
        'name' => 'Roura',
      ),
      14 => 
      array (
        'code' => 'SAI',
        'name' => 'Saint-élie',
      ),
      15 => 
      array (
        'code' => 'IRA',
        'name' => 'Iracoubo',
      ),
      16 => 
      array (
        'code' => 'SIN',
        'name' => 'Sinnamary',
      ),
      17 => 
      array (
        'code' => 'KOU',
        'name' => 'Kourou',
      ),
      18 => 
      array (
        'code' => 'MAC',
        'name' => 'Macouria',
      ),
      19 => 
      array (
        'code' => 'MON',
        'name' => 'Montsinéry-Tonnegrande',
      ),
      20 => 
      array (
        'code' => 'MAT',
        'name' => 'Matoury',
      ),
      21 => 
      array (
        'code' => 'CAY',
        'name' => 'Cayenne',
      ),
      22 => 
      array (
        'code' => 'REM',
        'name' => 'Remire-Montjoly',
      ),
    ),
    'GH' => 
    array (
      1 => 
      array (
        'code' => 'AS',
        'name' => 'Ashanti Region',
      ),
      2 => 
      array (
        'code' => 'BA',
        'name' => 'Brong-Ahafo Region',
      ),
      3 => 
      array (
        'code' => 'CE',
        'name' => 'Central Region',
      ),
      4 => 
      array (
        'code' => 'EA',
        'name' => 'Eastern Region',
      ),
      5 => 
      array (
        'code' => 'GA',
        'name' => 'Greater Accra Region',
      ),
      6 => 
      array (
        'code' => 'NO',
        'name' => 'Northern Region',
      ),
      7 => 
      array (
        'code' => 'UE',
        'name' => 'Upper East Region',
      ),
      8 => 
      array (
        'code' => 'UW',
        'name' => 'Upper West Region',
      ),
      9 => 
      array (
        'code' => 'VO',
        'name' => 'Volta Region',
      ),
      10 => 
      array (
        'code' => 'WE',
        'name' => 'Western Region',
      ),
    ),
    'GI' => 
    array (
      1 => 
      array (
        'code' => 'EAS',
        'name' => 'East Side',
      ),
      2 => 
      array (
        'code' => 'NOR',
        'name' => 'North District',
      ),
      3 => 
      array (
        'code' => 'REC',
        'name' => 'Reclamation Areas',
      ),
      4 => 
      array (
        'code' => 'SAN',
        'name' => 'Sandpits Area',
      ),
      5 => 
      array (
        'code' => 'SOU',
        'name' => 'South District',
      ),
      6 => 
      array (
        'code' => 'TOW',
        'name' => 'Town Area',
      ),
      7 => 
      array (
        'code' => 'UPP',
        'name' => 'Upper Town',
      ),
      8 => 
      array (
        'code' => 'OTH',
        'name' => 'Other',
      ),
    ),
    'GL' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'Avannaa',
      ),
      2 => 
      array (
        'code' => 'T',
        'name' => 'Tunu',
      ),
      3 => 
      array (
        'code' => 'K',
        'name' => 'Kitaa',
      ),
    ),
    'GM' => 
    array (
      1 => 
      array (
        'code' => 'BJ',
        'name' => 'Banjul',
      ),
      2 => 
      array (
        'code' => 'BS',
        'name' => 'Basse',
      ),
      3 => 
      array (
        'code' => 'BR',
        'name' => 'Brikama',
      ),
      4 => 
      array (
        'code' => 'JA',
        'name' => 'Janjangbure',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'Kanifeng',
      ),
      6 => 
      array (
        'code' => 'KE',
        'name' => 'Kerewan',
      ),
      7 => 
      array (
        'code' => 'KU',
        'name' => 'Kuntaur',
      ),
      8 => 
      array (
        'code' => 'MA',
        'name' => 'Mansakonko',
      ),
      9 => 
      array (
        'code' => 'LR',
        'name' => 'Lower River',
      ),
      10 => 
      array (
        'code' => 'CR',
        'name' => 'Central River',
      ),
      11 => 
      array (
        'code' => 'NB',
        'name' => 'North Bank',
      ),
      12 => 
      array (
        'code' => 'UR',
        'name' => 'Upper River',
      ),
      13 => 
      array (
        'code' => 'WE',
        'name' => 'Western',
      ),
    ),
    'GN' => 
    array (
      1 => 
      array (
        'code' => 'CNK',
        'name' => 'Conakry',
      ),
      2 => 
      array (
        'code' => 'BYL',
        'name' => 'Beyla',
      ),
      3 => 
      array (
        'code' => 'BFA',
        'name' => 'Boffa',
      ),
      4 => 
      array (
        'code' => 'BOK',
        'name' => 'Boke',
      ),
      5 => 
      array (
        'code' => 'COY',
        'name' => 'Coyah',
      ),
      6 => 
      array (
        'code' => 'DBL',
        'name' => 'Dabola',
      ),
      7 => 
      array (
        'code' => 'DLB',
        'name' => 'Dalaba',
      ),
      8 => 
      array (
        'code' => 'DGR',
        'name' => 'Dinguiraye',
      ),
      9 => 
      array (
        'code' => 'DBR',
        'name' => 'Dubreka',
      ),
      10 => 
      array (
        'code' => 'FRN',
        'name' => 'Faranah',
      ),
      11 => 
      array (
        'code' => 'FRC',
        'name' => 'Forecariah',
      ),
      12 => 
      array (
        'code' => 'FRI',
        'name' => 'Fria',
      ),
      13 => 
      array (
        'code' => 'GAO',
        'name' => 'Gaoual',
      ),
      14 => 
      array (
        'code' => 'GCD',
        'name' => 'Gueckedou',
      ),
      15 => 
      array (
        'code' => 'KNK',
        'name' => 'Kankan',
      ),
      16 => 
      array (
        'code' => 'KRN',
        'name' => 'Kerouane',
      ),
      17 => 
      array (
        'code' => 'KND',
        'name' => 'Kindia',
      ),
      18 => 
      array (
        'code' => 'KSD',
        'name' => 'Kissidougou',
      ),
      19 => 
      array (
        'code' => 'KBA',
        'name' => 'Koubia',
      ),
      20 => 
      array (
        'code' => 'KDA',
        'name' => 'Koundara',
      ),
      21 => 
      array (
        'code' => 'KRA',
        'name' => 'Kouroussa',
      ),
      22 => 
      array (
        'code' => 'LAB',
        'name' => 'Labe',
      ),
      23 => 
      array (
        'code' => 'LLM',
        'name' => 'Lelouma',
      ),
      24 => 
      array (
        'code' => 'LOL',
        'name' => 'Lola',
      ),
      25 => 
      array (
        'code' => 'MCT',
        'name' => 'Macenta',
      ),
      26 => 
      array (
        'code' => 'MAL',
        'name' => 'Mali',
      ),
      27 => 
      array (
        'code' => 'MAM',
        'name' => 'Mamou',
      ),
      28 => 
      array (
        'code' => 'MAN',
        'name' => 'Mandiana',
      ),
      29 => 
      array (
        'code' => 'NZR',
        'name' => 'Nzerekore',
      ),
      30 => 
      array (
        'code' => 'PIT',
        'name' => 'Pita',
      ),
      31 => 
      array (
        'code' => 'SIG',
        'name' => 'Siguiri',
      ),
      32 => 
      array (
        'code' => 'TLM',
        'name' => 'Telimele',
      ),
      33 => 
      array (
        'code' => 'TOG',
        'name' => 'Tougue',
      ),
      34 => 
      array (
        'code' => 'YOM',
        'name' => 'Yomou',
      ),
    ),
    'GP' => 
    array (
      1 => 
      array (
        'code' => 'ARR',
        'name' => 'Arrondissements Of The Guadeloup',
      ),
      2 => 
      array (
        'code' => 'CAN',
        'name' => 'Cantons Of The Guadeloup Depart',
      ),
      3 => 
      array (
        'code' => 'COM',
        'name' => 'Communes Of The Guadeloup Depart',
      ),
    ),
    'GQ' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Provincia Annobon',
      ),
      2 => 
      array (
        'code' => 'BN',
        'name' => 'Provincia Bioko Norte',
      ),
      3 => 
      array (
        'code' => 'BS',
        'name' => 'Provincia Bioko Sur',
      ),
      4 => 
      array (
        'code' => 'CS',
        'name' => 'Provincia Centro Sur',
      ),
      5 => 
      array (
        'code' => 'KN',
        'name' => 'Provincia Kie-Ntem',
      ),
      6 => 
      array (
        'code' => 'LI',
        'name' => 'Provincia Litoral',
      ),
      7 => 
      array (
        'code' => 'WN',
        'name' => 'Provincia Wele-Nzas',
      ),
    ),
    'GR' => 
    array (
      1 => 
      array (
        'code' => 'AT',
        'name' => 'Attica',
      ),
      2 => 
      array (
        'code' => 'CN',
        'name' => 'Central Greece',
      ),
      3 => 
      array (
        'code' => 'CM',
        'name' => 'Central Macedonia',
      ),
      4 => 
      array (
        'code' => 'CR',
        'name' => 'Crete',
      ),
      5 => 
      array (
        'code' => 'EM',
        'name' => 'East Macedonia and Thrace',
      ),
      6 => 
      array (
        'code' => 'EP',
        'name' => 'Epirus',
      ),
      7 => 
      array (
        'code' => 'II',
        'name' => 'Ionian Islands',
      ),
      8 => 
      array (
        'code' => 'NA',
        'name' => 'North Aegean',
      ),
      9 => 
      array (
        'code' => 'PP',
        'name' => 'Peloponnesos',
      ),
      10 => 
      array (
        'code' => 'SA',
        'name' => 'South Aegean',
      ),
      11 => 
      array (
        'code' => 'TH',
        'name' => 'Thessaly',
      ),
      12 => 
      array (
        'code' => 'WG',
        'name' => 'West Greece',
      ),
      13 => 
      array (
        'code' => 'WM',
        'name' => 'West Macedonia',
      ),
    ),
    'GT' => 
    array (
      1 => 
      array (
        'code' => 'AV',
        'name' => 'Alta Verapaz',
      ),
      2 => 
      array (
        'code' => 'BV',
        'name' => 'Baja Verapaz',
      ),
      3 => 
      array (
        'code' => 'CM',
        'name' => 'Chimaltenango',
      ),
      4 => 
      array (
        'code' => 'CQ',
        'name' => 'Chiquimula',
      ),
      5 => 
      array (
        'code' => 'PE',
        'name' => 'El Peten',
      ),
      6 => 
      array (
        'code' => 'PR',
        'name' => 'El Progreso',
      ),
      7 => 
      array (
        'code' => 'QC',
        'name' => 'El Quiche',
      ),
      8 => 
      array (
        'code' => 'ES',
        'name' => 'Escuintla',
      ),
      9 => 
      array (
        'code' => 'GU',
        'name' => 'Guatemala',
      ),
      10 => 
      array (
        'code' => 'HU',
        'name' => 'Huehuetenango',
      ),
      11 => 
      array (
        'code' => 'IZ',
        'name' => 'Izabal',
      ),
      12 => 
      array (
        'code' => 'JA',
        'name' => 'Jalapa',
      ),
      13 => 
      array (
        'code' => 'JU',
        'name' => 'Jutiapa',
      ),
      14 => 
      array (
        'code' => 'QZ',
        'name' => 'Quetzaltenango',
      ),
      15 => 
      array (
        'code' => 'RE',
        'name' => 'Retalhuleu',
      ),
      16 => 
      array (
        'code' => 'ST',
        'name' => 'Sacatepequez',
      ),
      17 => 
      array (
        'code' => 'SM',
        'name' => 'San Marcos',
      ),
      18 => 
      array (
        'code' => 'SR',
        'name' => 'Santa Rosa',
      ),
      19 => 
      array (
        'code' => 'SO',
        'name' => 'Solola',
      ),
      20 => 
      array (
        'code' => 'SU',
        'name' => 'Suchitepequez',
      ),
      21 => 
      array (
        'code' => 'TO',
        'name' => 'Totonicapan',
      ),
      22 => 
      array (
        'code' => 'ZA',
        'name' => 'Zacapa',
      ),
    ),
    'GU' => 
    array (
      1 => 
      array (
        'code' => 'AGA',
        'name' => 'Agana Heights',
      ),
      2 => 
      array (
        'code' => 'AGA',
        'name' => 'Agat',
      ),
      3 => 
      array (
        'code' => 'ASA',
        'name' => 'Asan Maina',
      ),
      4 => 
      array (
        'code' => 'BAR',
        'name' => 'Barrigada',
      ),
      5 => 
      array (
        'code' => 'CHA',
        'name' => 'Chalan Pago Ordot',
      ),
      6 => 
      array (
        'code' => 'DED',
        'name' => 'Dededo',
      ),
      7 => 
      array (
        'code' => 'HAG',
        'name' => 'HagÅtña',
      ),
      8 => 
      array (
        'code' => 'INA',
        'name' => 'Inarajan',
      ),
      9 => 
      array (
        'code' => 'MAN',
        'name' => 'Mangilao',
      ),
      10 => 
      array (
        'code' => 'MER',
        'name' => 'Merizo',
      ),
      11 => 
      array (
        'code' => 'MON',
        'name' => 'Mongmong Toto Maite',
      ),
      12 => 
      array (
        'code' => 'PIT',
        'name' => 'Piti',
      ),
      13 => 
      array (
        'code' => 'SAN',
        'name' => 'Santa Rita',
      ),
      14 => 
      array (
        'code' => 'SIN',
        'name' => 'Sinajana',
      ),
      15 => 
      array (
        'code' => 'TAL',
        'name' => 'Talofofo',
      ),
      16 => 
      array (
        'code' => 'TAM',
        'name' => 'Tamuning',
      ),
      17 => 
      array (
        'code' => 'UMA',
        'name' => 'Umatac',
      ),
      18 => 
      array (
        'code' => 'YIG',
        'name' => 'Yigo',
      ),
      19 => 
      array (
        'code' => 'YON',
        'name' => 'Yona',
      ),
    ),
    'GW' => 
    array (
      1 => 
      array (
        'code' => 'BF',
        'name' => 'Bafata Region',
      ),
      2 => 
      array (
        'code' => 'BB',
        'name' => 'Biombo Region',
      ),
      3 => 
      array (
        'code' => 'BS',
        'name' => 'Bissau Region',
      ),
      4 => 
      array (
        'code' => 'BL',
        'name' => 'Bolama Region',
      ),
      5 => 
      array (
        'code' => 'CA',
        'name' => 'Cacheu Region',
      ),
      6 => 
      array (
        'code' => 'GA',
        'name' => 'Gabu Region',
      ),
      7 => 
      array (
        'code' => 'OI',
        'name' => 'Oio Region',
      ),
      8 => 
      array (
        'code' => 'QU',
        'name' => 'Quinara Region',
      ),
      9 => 
      array (
        'code' => 'TO',
        'name' => 'Tombali Region',
      ),
    ),
    'GY' => 
    array (
      1 => 
      array (
        'code' => 'BW',
        'name' => 'Barima-Waini',
      ),
      2 => 
      array (
        'code' => 'CM',
        'name' => 'Cuyuni-Mazaruni',
      ),
      3 => 
      array (
        'code' => 'DM',
        'name' => 'Demerara-Mahaica',
      ),
      4 => 
      array (
        'code' => 'EC',
        'name' => 'East Berbice-Corentyne',
      ),
      5 => 
      array (
        'code' => 'EW',
        'name' => 'Essequibo Islands-West Demerara',
      ),
      6 => 
      array (
        'code' => 'MB',
        'name' => 'Mahaica-Berbice',
      ),
      7 => 
      array (
        'code' => 'PM',
        'name' => 'Pomeroon-Supenaam',
      ),
      8 => 
      array (
        'code' => 'PI',
        'name' => 'Potaro-Siparuni',
      ),
      9 => 
      array (
        'code' => 'UD',
        'name' => 'Upper Demerara-Berbice',
      ),
      10 => 
      array (
        'code' => 'UT',
        'name' => 'Upper Takutu-Upper Essequibo',
      ),
    ),
    'HK' => 
    array (
      1 => 
      array (
        'code' => 'HCW',
        'name' => 'Central and Western Hong Kong Is',
      ),
      2 => 
      array (
        'code' => 'HEA',
        'name' => 'Eastern Hong Kong Island',
      ),
      3 => 
      array (
        'code' => 'HSO',
        'name' => 'Southern Hong Kong Island',
      ),
      4 => 
      array (
        'code' => 'HWC',
        'name' => 'Wan Chai Hong Kong Island',
      ),
      5 => 
      array (
        'code' => 'KKC',
        'name' => 'Kowloon City Kowloon',
      ),
      6 => 
      array (
        'code' => 'KKT',
        'name' => 'Kwun Tong Kowloon',
      ),
      7 => 
      array (
        'code' => 'KSS',
        'name' => 'Sham Shui Po Kowloon',
      ),
      8 => 
      array (
        'code' => 'KWT',
        'name' => 'Wong Tai Sin Kowloon',
      ),
      9 => 
      array (
        'code' => 'KYT',
        'name' => 'Yau Tsim Mong Kowloon',
      ),
      10 => 
      array (
        'code' => 'NIS',
        'name' => 'Islands New Territories',
      ),
      11 => 
      array (
        'code' => 'NKT',
        'name' => 'Kwai Tsing New Territories',
      ),
      12 => 
      array (
        'code' => 'NNO',
        'name' => 'North New Territories',
      ),
      13 => 
      array (
        'code' => 'NSK',
        'name' => 'Sai Kung New Territories',
      ),
      14 => 
      array (
        'code' => 'NST',
        'name' => 'Sha Tin New Territories',
      ),
      15 => 
      array (
        'code' => 'NTP',
        'name' => 'Tai Po New Territories',
      ),
      16 => 
      array (
        'code' => 'NTW',
        'name' => 'Tsuen Wan New Territories',
      ),
      17 => 
      array (
        'code' => 'NTM',
        'name' => 'Tuen Mun New Territories',
      ),
      18 => 
      array (
        'code' => 'NYL',
        'name' => 'Yuen Long New Territories',
      ),
    ),
    'HM' => 
    array (
      1 => 
      array (
        'code' => 'F',
        'name' => 'Flat Island',
      ),
      2 => 
      array (
        'code' => 'M',
        'name' => 'McDonald Island',
      ),
      3 => 
      array (
        'code' => 'S',
        'name' => 'Shag Island',
      ),
      4 => 
      array (
        'code' => 'H',
        'name' => 'Heard Island',
      ),
    ),
    'HN' => 
    array (
      1 => 
      array (
        'code' => 'AT',
        'name' => 'Atlantida',
      ),
      2 => 
      array (
        'code' => 'CH',
        'name' => 'Choluteca',
      ),
      3 => 
      array (
        'code' => 'CL',
        'name' => 'Colon',
      ),
      4 => 
      array (
        'code' => 'CM',
        'name' => 'Comayagua',
      ),
      5 => 
      array (
        'code' => 'CP',
        'name' => 'Copan',
      ),
      6 => 
      array (
        'code' => 'CR',
        'name' => 'Cortes',
      ),
      7 => 
      array (
        'code' => 'PA',
        'name' => 'El Paraiso',
      ),
      8 => 
      array (
        'code' => 'FM',
        'name' => 'Francisco Morazan',
      ),
      9 => 
      array (
        'code' => 'GD',
        'name' => 'Gracias a Dios',
      ),
      10 => 
      array (
        'code' => 'IN',
        'name' => 'Intibuca',
      ),
      11 => 
      array (
        'code' => 'IB',
        'name' => 'Islas de la Bahia (Bay Islands)',
      ),
      12 => 
      array (
        'code' => 'PZ',
        'name' => 'La Paz',
      ),
      13 => 
      array (
        'code' => 'LE',
        'name' => 'Lempira',
      ),
      14 => 
      array (
        'code' => 'OC',
        'name' => 'Ocotepeque',
      ),
      15 => 
      array (
        'code' => 'OL',
        'name' => 'Olancho',
      ),
      16 => 
      array (
        'code' => 'SB',
        'name' => 'Santa Barbara',
      ),
      17 => 
      array (
        'code' => 'VA',
        'name' => 'Valle',
      ),
      18 => 
      array (
        'code' => 'YO',
        'name' => 'Yoro',
      ),
    ),
    'HR' => 
    array (
      1 => 
      array (
        'code' => 'BB',
        'name' => 'Bjelovar-Bilogora',
      ),
      2 => 
      array (
        'code' => 'CZ',
        'name' => 'City of Zagreb',
      ),
      3 => 
      array (
        'code' => 'DN',
        'name' => 'Dubrovnik-Neretva',
      ),
      4 => 
      array (
        'code' => 'IS',
        'name' => 'Istra',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'Karlovac',
      ),
      6 => 
      array (
        'code' => 'KK',
        'name' => 'Koprivnica-Krizevci',
      ),
      7 => 
      array (
        'code' => 'KZ',
        'name' => 'Krapina-Zagorje',
      ),
      8 => 
      array (
        'code' => 'LS',
        'name' => 'Lika-Senj',
      ),
      9 => 
      array (
        'code' => 'ME',
        'name' => 'Medimurje',
      ),
      10 => 
      array (
        'code' => 'OB',
        'name' => 'Osijek-Baranja',
      ),
      11 => 
      array (
        'code' => 'PS',
        'name' => 'Pozega-Slavonia',
      ),
      12 => 
      array (
        'code' => 'PG',
        'name' => 'Primorje-Gorski Kotar',
      ),
      13 => 
      array (
        'code' => 'SI',
        'name' => 'Sibenik',
      ),
      14 => 
      array (
        'code' => 'SM',
        'name' => 'Sisak-Moslavina',
      ),
      15 => 
      array (
        'code' => 'SB',
        'name' => 'Slavonski Brod-Posavina',
      ),
      16 => 
      array (
        'code' => 'SD',
        'name' => 'Split-Dalmatia',
      ),
      17 => 
      array (
        'code' => 'VA',
        'name' => 'Varazdin',
      ),
      18 => 
      array (
        'code' => 'VP',
        'name' => 'Virovitica-Podravina',
      ),
      19 => 
      array (
        'code' => 'VS',
        'name' => 'Vukovar-Srijem',
      ),
      20 => 
      array (
        'code' => 'ZK',
        'name' => 'Zadar-Knin',
      ),
      21 => 
      array (
        'code' => 'ZA',
        'name' => 'Zagreb',
      ),
    ),
    'HT' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'Artibonite',
      ),
      2 => 
      array (
        'code' => 'CE',
        'name' => 'Centre',
      ),
      3 => 
      array (
        'code' => 'GA',
        'name' => 'Grand\'Anse',
      ),
      4 => 
      array (
        'code' => 'ND',
        'name' => 'Nord',
      ),
      5 => 
      array (
        'code' => 'NE',
        'name' => 'Nord-Est',
      ),
      6 => 
      array (
        'code' => 'NO',
        'name' => 'Nord-Ouest',
      ),
      7 => 
      array (
        'code' => 'OU',
        'name' => 'Ouest',
      ),
      8 => 
      array (
        'code' => 'SD',
        'name' => 'Sud',
      ),
      9 => 
      array (
        'code' => 'SE',
        'name' => 'Sud-Est',
      ),
    ),
    'HU' => 
    array (
      1 => 
      array (
        'code' => 'BK',
        'name' => 'Bacs-Kiskun',
      ),
      2 => 
      array (
        'code' => 'BA',
        'name' => 'Baranya',
      ),
      3 => 
      array (
        'code' => 'BE',
        'name' => 'Bekes',
      ),
      4 => 
      array (
        'code' => 'BS',
        'name' => 'Bekescsaba',
      ),
      5 => 
      array (
        'code' => 'BZ',
        'name' => 'Borsod-Abauj-Zemplen',
      ),
      6 => 
      array (
        'code' => 'BU',
        'name' => 'Budapest',
      ),
      7 => 
      array (
        'code' => 'CS',
        'name' => 'Csongrad',
      ),
      8 => 
      array (
        'code' => 'DE',
        'name' => 'Debrecen',
      ),
      9 => 
      array (
        'code' => 'DU',
        'name' => 'Dunaujvaros',
      ),
      10 => 
      array (
        'code' => 'EG',
        'name' => 'Eger',
      ),
      11 => 
      array (
        'code' => 'FE',
        'name' => 'Fejer',
      ),
      12 => 
      array (
        'code' => 'GY',
        'name' => 'Gyor',
      ),
      13 => 
      array (
        'code' => 'GM',
        'name' => 'Gyor-Moson-Sopron',
      ),
      14 => 
      array (
        'code' => 'HB',
        'name' => 'Hajdu-Bihar',
      ),
      15 => 
      array (
        'code' => 'HE',
        'name' => 'Heves',
      ),
      16 => 
      array (
        'code' => 'HO',
        'name' => 'Hodmezovasarhely',
      ),
      17 => 
      array (
        'code' => 'JN',
        'name' => 'Jasz-Nagykun-Szolnok',
      ),
      18 => 
      array (
        'code' => 'KA',
        'name' => 'Kaposvar',
      ),
      19 => 
      array (
        'code' => 'KE',
        'name' => 'Kecskemet',
      ),
      20 => 
      array (
        'code' => 'KO',
        'name' => 'Komarom-Esztergom',
      ),
      21 => 
      array (
        'code' => 'MI',
        'name' => 'Miskolc',
      ),
      22 => 
      array (
        'code' => 'NA',
        'name' => 'Nagykanizsa',
      ),
      23 => 
      array (
        'code' => 'NO',
        'name' => 'Nograd',
      ),
      24 => 
      array (
        'code' => 'NY',
        'name' => 'Nyiregyhaza',
      ),
      25 => 
      array (
        'code' => 'PE',
        'name' => 'Pecs',
      ),
      26 => 
      array (
        'code' => 'PS',
        'name' => 'Pest',
      ),
      27 => 
      array (
        'code' => 'SO',
        'name' => 'Somogy',
      ),
      28 => 
      array (
        'code' => 'SP',
        'name' => 'Sopron',
      ),
      29 => 
      array (
        'code' => 'SS',
        'name' => 'Szabolcs-Szatmar-Bereg',
      ),
      30 => 
      array (
        'code' => 'SZ',
        'name' => 'Szeged',
      ),
      31 => 
      array (
        'code' => 'SE',
        'name' => 'Szekesfehervar',
      ),
      32 => 
      array (
        'code' => 'SL',
        'name' => 'Szolnok',
      ),
      33 => 
      array (
        'code' => 'SM',
        'name' => 'Szombathely',
      ),
      34 => 
      array (
        'code' => 'TA',
        'name' => 'Tatabanya',
      ),
      35 => 
      array (
        'code' => 'TO',
        'name' => 'Tolna',
      ),
      36 => 
      array (
        'code' => 'VA',
        'name' => 'Vas',
      ),
      37 => 
      array (
        'code' => 'VE',
        'name' => 'Veszprem',
      ),
      38 => 
      array (
        'code' => 'ZA',
        'name' => 'Zala',
      ),
      39 => 
      array (
        'code' => 'ZZ',
        'name' => 'Zalaegerszeg',
      ),
    ),
    'ID' => 
    array (
      1 => 
      array (
        'code' => 'DA',
        'name' => 'Daista Aceh',
      ),
      2 => 
      array (
        'code' => 'SU',
        'name' => 'Sumatera Utara',
      ),
      3 => 
      array (
        'code' => 'SB',
        'name' => 'Sumatera Barat',
      ),
      4 => 
      array (
        'code' => 'SI',
        'name' => 'Riau',
      ),
      5 => 
      array (
        'code' => 'JA',
        'name' => 'Jambi',
      ),
      6 => 
      array (
        'code' => 'SS',
        'name' => 'Sumatera Selatan',
      ),
      7 => 
      array (
        'code' => 'BE',
        'name' => 'Bengkulu',
      ),
      8 => 
      array (
        'code' => 'LA',
        'name' => 'Lampung',
      ),
      9 => 
      array (
        'code' => 'JK',
        'name' => 'Dki Jakarta',
      ),
      10 => 
      array (
        'code' => 'JB',
        'name' => 'Jawa Barat',
      ),
      11 => 
      array (
        'code' => 'JT',
        'name' => 'Jawa Tengah',
      ),
      12 => 
      array (
        'code' => 'DY',
        'name' => 'Daista Yogyakarta',
      ),
      13 => 
      array (
        'code' => 'JT',
        'name' => 'Jawa Timur',
      ),
      14 => 
      array (
        'code' => 'KB',
        'name' => 'Kalimantan Barat',
      ),
      15 => 
      array (
        'code' => 'KT',
        'name' => 'Kalimantan Tengah',
      ),
      16 => 
      array (
        'code' => 'KI',
        'name' => 'Kalimantan Timur',
      ),
      17 => 
      array (
        'code' => 'KS',
        'name' => 'Kalimantan Selatan',
      ),
      18 => 
      array (
        'code' => 'BA',
        'name' => 'Bali',
      ),
      19 => 
      array (
        'code' => 'NB',
        'name' => 'Nusa Tenggara Barat',
      ),
      20 => 
      array (
        'code' => 'NT',
        'name' => 'Nusa Tenggara Timur',
      ),
      21 => 
      array (
        'code' => 'SN',
        'name' => 'Sulawesi Selatan',
      ),
      22 => 
      array (
        'code' => 'ST',
        'name' => 'Sulawesi Tengah',
      ),
      23 => 
      array (
        'code' => 'SA',
        'name' => 'Sulawesi Utara',
      ),
      24 => 
      array (
        'code' => 'SG',
        'name' => 'Sulawesi Tenggara',
      ),
      25 => 
      array (
        'code' => 'MA',
        'name' => 'Maluku',
      ),
      26 => 
      array (
        'code' => 'MU',
        'name' => 'Maluku Utara',
      ),
      27 => 
      array (
        'code' => 'IJ',
        'name' => 'Irian Jaya Timur',
      ),
      28 => 
      array (
        'code' => 'IT',
        'name' => 'Irian Jaya Tengah',
      ),
      29 => 
      array (
        'code' => 'IB',
        'name' => 'Irian Jawa Barat',
      ),
      30 => 
      array (
        'code' => 'BT',
        'name' => 'Banten',
      ),
      31 => 
      array (
        'code' => 'BB',
        'name' => 'Bangka Belitung',
      ),
      32 => 
      array (
        'code' => 'GO',
        'name' => 'Gorontalo',
      ),
    ),
    'IE' => 
    array (
      1 => 
      array (
        'code' => 'CA',
        'name' => 'Carlow',
      ),
      2 => 
      array (
        'code' => 'CV',
        'name' => 'Cavan',
      ),
      3 => 
      array (
        'code' => 'CL',
        'name' => 'Clare',
      ),
      4 => 
      array (
        'code' => 'CO',
        'name' => 'Cork',
      ),
      5 => 
      array (
        'code' => 'DO',
        'name' => 'Donegal',
      ),
      6 => 
      array (
        'code' => 'DU',
        'name' => 'Dublin',
      ),
      7 => 
      array (
        'code' => 'GA',
        'name' => 'Galway',
      ),
      8 => 
      array (
        'code' => 'KE',
        'name' => 'Kerry',
      ),
      9 => 
      array (
        'code' => 'KI',
        'name' => 'Kildare',
      ),
      10 => 
      array (
        'code' => 'KL',
        'name' => 'Kilkenny',
      ),
      11 => 
      array (
        'code' => 'LA',
        'name' => 'Laois',
      ),
      12 => 
      array (
        'code' => 'LE',
        'name' => 'Leitrim',
      ),
      13 => 
      array (
        'code' => 'LI',
        'name' => 'Limerick',
      ),
      14 => 
      array (
        'code' => 'LO',
        'name' => 'Longford',
      ),
      15 => 
      array (
        'code' => 'LU',
        'name' => 'Louth',
      ),
      16 => 
      array (
        'code' => 'MA',
        'name' => 'Mayo',
      ),
      17 => 
      array (
        'code' => 'ME',
        'name' => 'Meath',
      ),
      18 => 
      array (
        'code' => 'MO',
        'name' => 'Monaghan',
      ),
      19 => 
      array (
        'code' => 'OF',
        'name' => 'Offaly',
      ),
      20 => 
      array (
        'code' => 'RO',
        'name' => 'Roscommon',
      ),
      21 => 
      array (
        'code' => 'SL',
        'name' => 'Sligo',
      ),
      22 => 
      array (
        'code' => 'TI',
        'name' => 'Tipperary',
      ),
      23 => 
      array (
        'code' => 'WA',
        'name' => 'Waterford',
      ),
      24 => 
      array (
        'code' => 'WE',
        'name' => 'Westmeath',
      ),
      25 => 
      array (
        'code' => 'WX',
        'name' => 'Wexford',
      ),
      26 => 
      array (
        'code' => 'WI',
        'name' => 'Wicklow',
      ),
    ),
    'IL' => 
    array (
      1 => 
      array (
        'code' => 'BS',
        'name' => 'Be\'er Sheva',
      ),
      2 => 
      array (
        'code' => 'BH',
        'name' => 'Bika\'at Hayarden',
      ),
      3 => 
      array (
        'code' => 'EA',
        'name' => 'Eilat and Arava',
      ),
      4 => 
      array (
        'code' => 'GA',
        'name' => 'Galil',
      ),
      5 => 
      array (
        'code' => 'HA',
        'name' => 'Haifa',
      ),
      6 => 
      array (
        'code' => 'JM',
        'name' => 'Jehuda Mountains',
      ),
      7 => 
      array (
        'code' => 'JE',
        'name' => 'Jerusalem',
      ),
      8 => 
      array (
        'code' => 'NE',
        'name' => 'Negev',
      ),
      10 => 
      array (
        'code' => 'SE',
        'name' => 'Semaria',
      ),
      11 => 
      array (
        'code' => 'SH',
        'name' => 'Sharon',
      ),
      12 => 
      array (
        'code' => 'TA',
        'name' => 'Tel Aviv (Gosh Dan)',
      ),
    ),
    'IN' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Andaman and Nicobar Islands',
      ),
      2 => 
      array (
        'code' => 'AP',
        'name' => 'Andhra Pradesh',
      ),
      3 => 
      array (
        'code' => 'AR',
        'name' => 'Arunachal Pradesh',
      ),
      4 => 
      array (
        'code' => 'AS',
        'name' => 'Assam',
      ),
      5 => 
      array (
        'code' => 'BI',
        'name' => 'Bihar',
      ),
      6 => 
      array (
        'code' => 'CH',
        'name' => 'Chandigarh',
      ),
      7 => 
      array (
        'code' => 'DA',
        'name' => 'Dadra and Nagar Haveli',
      ),
      8 => 
      array (
        'code' => 'DM',
        'name' => 'Daman and Diu',
      ),
      9 => 
      array (
        'code' => 'DE',
        'name' => 'Delhi',
      ),
      10 => 
      array (
        'code' => 'GO',
        'name' => 'Goa',
      ),
      11 => 
      array (
        'code' => 'GU',
        'name' => 'Gujarat',
      ),
      12 => 
      array (
        'code' => 'HA',
        'name' => 'Haryana',
      ),
      13 => 
      array (
        'code' => 'HP',
        'name' => 'Himachal Pradesh',
      ),
      14 => 
      array (
        'code' => 'JA',
        'name' => 'Jammu and Kashmir',
      ),
      15 => 
      array (
        'code' => 'KA',
        'name' => 'Karnataka',
      ),
      16 => 
      array (
        'code' => 'KE',
        'name' => 'Kerala',
      ),
      17 => 
      array (
        'code' => 'LI',
        'name' => 'Lakshadweep Islands',
      ),
      18 => 
      array (
        'code' => 'MP',
        'name' => 'Madhya Pradesh',
      ),
      19 => 
      array (
        'code' => 'MA',
        'name' => 'Maharashtra',
      ),
      20 => 
      array (
        'code' => 'MN',
        'name' => 'Manipur',
      ),
      21 => 
      array (
        'code' => 'ME',
        'name' => 'Meghalaya',
      ),
      22 => 
      array (
        'code' => 'MI',
        'name' => 'Mizoram',
      ),
      23 => 
      array (
        'code' => 'NA',
        'name' => 'Nagaland',
      ),
      24 => 
      array (
        'code' => 'OR',
        'name' => 'Orissa',
      ),
      25 => 
      array (
        'code' => 'PO',
        'name' => 'Pondicherry',
      ),
      26 => 
      array (
        'code' => 'PU',
        'name' => 'Punjab',
      ),
      27 => 
      array (
        'code' => 'RA',
        'name' => 'Rajasthan',
      ),
      28 => 
      array (
        'code' => 'SI',
        'name' => 'Sikkim',
      ),
      29 => 
      array (
        'code' => 'TN',
        'name' => 'Tamil Nadu',
      ),
      30 => 
      array (
        'code' => 'TR',
        'name' => 'Tripura',
      ),
      31 => 
      array (
        'code' => 'UP',
        'name' => 'Uttar Pradesh',
      ),
      32 => 
      array (
        'code' => 'WB',
        'name' => 'West Bengal',
      ),
    ),
    'IO' => 
    array (
      1 => 
      array (
        'code' => 'DG',
        'name' => 'Diego Garcia',
      ),
      2 => 
      array (
        'code' => 'DI',
        'name' => 'Danger Island',
      ),
      3 => 
      array (
        'code' => 'EA',
        'name' => 'Eagle Islands',
      ),
      4 => 
      array (
        'code' => 'EG',
        'name' => 'Egmont Islands',
      ),
      5 => 
      array (
        'code' => 'NI',
        'name' => 'Nelsons Island',
      ),
      6 => 
      array (
        'code' => 'PB',
        'name' => 'Peros Banhos',
      ),
      7 => 
      array (
        'code' => 'SI',
        'name' => 'Salomon Islands',
      ),
      8 => 
      array (
        'code' => 'TB',
        'name' => 'Three Brothers',
      ),
    ),
    'IQ' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Al Anbar',
      ),
      2 => 
      array (
        'code' => 'AL',
        'name' => 'Arbil',
      ),
      3 => 
      array (
        'code' => 'BA',
        'name' => 'Al Basrah',
      ),
      4 => 
      array (
        'code' => 'BB',
        'name' => 'Babil',
      ),
      5 => 
      array (
        'code' => 'BD',
        'name' => 'Baghdad',
      ),
      6 => 
      array (
        'code' => 'DH',
        'name' => 'Dahuk',
      ),
      7 => 
      array (
        'code' => 'DQ',
        'name' => 'Dhi Qar',
      ),
      8 => 
      array (
        'code' => 'DY',
        'name' => 'Diyala',
      ),
      9 => 
      array (
        'code' => 'KB',
        'name' => 'Al Karbala',
      ),
      10 => 
      array (
        'code' => 'MU',
        'name' => 'Al Muthanna',
      ),
      11 => 
      array (
        'code' => 'MY',
        'name' => 'Maysan',
      ),
      12 => 
      array (
        'code' => 'NJ',
        'name' => 'An Najaf',
      ),
      13 => 
      array (
        'code' => 'NN',
        'name' => 'Ninawa',
      ),
      14 => 
      array (
        'code' => 'QA',
        'name' => 'Al Qadisyah',
      ),
      15 => 
      array (
        'code' => 'SD',
        'name' => 'Salah ad Din',
      ),
      16 => 
      array (
        'code' => 'SL',
        'name' => 'As Sulaymaniyah',
      ),
      17 => 
      array (
        'code' => 'TM',
        'name' => 'At Ta\'mim',
      ),
      18 => 
      array (
        'code' => 'WS',
        'name' => 'Wasit',
      ),
    ),
    'IR' => 
    array (
      1 => 
      array (
        'code' => 'ARD',
        'name' => 'Ardabil',
      ),
      2 => 
      array (
        'code' => 'BSH',
        'name' => 'Bushehr',
      ),
      3 => 
      array (
        'code' => 'CMB',
        'name' => 'Chahar Mahaal and Bakhtiari',
      ),
      4 => 
      array (
        'code' => 'EAZ',
        'name' => 'East Azarbaijan',
      ),
      5 => 
      array (
        'code' => 'EFH',
        'name' => 'Esfahan',
      ),
      6 => 
      array (
        'code' => 'FAR',
        'name' => 'Fars',
      ),
      7 => 
      array (
        'code' => 'GIL',
        'name' => 'Gilan',
      ),
      8 => 
      array (
        'code' => 'GLS',
        'name' => 'Golestan',
      ),
      9 => 
      array (
        'code' => 'HMD',
        'name' => 'Hamadan',
      ),
      10 => 
      array (
        'code' => 'HRM',
        'name' => 'Hormozgan',
      ),
      11 => 
      array (
        'code' => 'ILM',
        'name' => 'Ilam',
      ),
      12 => 
      array (
        'code' => 'KBA',
        'name' => 'Kohkiluyeh and Buyer Ahmad',
      ),
      13 => 
      array (
        'code' => 'KRB',
        'name' => 'Kerman',
      ),
      14 => 
      array (
        'code' => 'KRD',
        'name' => 'Kurdistan',
      ),
      15 => 
      array (
        'code' => 'KRM',
        'name' => 'Kermanshah',
      ),
      16 => 
      array (
        'code' => 'KZT',
        'name' => 'Khuzestan',
      ),
      17 => 
      array (
        'code' => 'LRS',
        'name' => 'Lorestan',
      ),
      18 => 
      array (
        'code' => 'MKZ',
        'name' => 'Markazi',
      ),
      19 => 
      array (
        'code' => 'MZD',
        'name' => 'Mazandaran',
      ),
      20 => 
      array (
        'code' => 'NKH',
        'name' => 'North Khorasan',
      ),
      21 => 
      array (
        'code' => 'QAZ',
        'name' => 'Qazvin',
      ),
      22 => 
      array (
        'code' => 'QOM',
        'name' => 'Qom',
      ),
      23 => 
      array (
        'code' => 'RKH',
        'name' => 'Razavi Khorasan',
      ),
      24 => 
      array (
        'code' => 'SBL',
        'name' => 'Sistan and Baluchistan',
      ),
      25 => 
      array (
        'code' => 'SKH',
        'name' => 'South Khorasan',
      ),
      26 => 
      array (
        'code' => 'SMN',
        'name' => 'Semnan',
      ),
      27 => 
      array (
        'code' => 'TEH',
        'name' => 'Tehran',
      ),
      28 => 
      array (
        'code' => 'WEZ',
        'name' => 'West Azarbaijan',
      ),
      29 => 
      array (
        'code' => 'YZD',
        'name' => 'Yazd',
      ),
      30 => 
      array (
        'code' => 'ZAN',
        'name' => 'Zanjan',
      ),
    ),
    'IS' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Austurland',
      ),
      2 => 
      array (
        'code' => 'HF',
        'name' => 'Hofuoborgarsvaeoi',
      ),
      3 => 
      array (
        'code' => 'NE',
        'name' => 'Norourland eystra',
      ),
      4 => 
      array (
        'code' => 'NV',
        'name' => 'Norourland vestra',
      ),
      5 => 
      array (
        'code' => 'SL',
        'name' => 'Suourland',
      ),
      6 => 
      array (
        'code' => 'SN',
        'name' => 'Suournes',
      ),
      7 => 
      array (
        'code' => 'VF',
        'name' => 'Vestfiroir',
      ),
      8 => 
      array (
        'code' => 'VL',
        'name' => 'Vesturland',
      ),
    ),
    'IT' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'Agrigento',
      ),
      2 => 
      array (
        'code' => 'AL',
        'name' => 'Alessandria',
      ),
      3 => 
      array (
        'code' => 'AN',
        'name' => 'Ancona',
      ),
      4 => 
      array (
        'code' => 'AO',
        'name' => 'Aosta',
      ),
      5 => 
      array (
        'code' => 'AR',
        'name' => 'Arezzo',
      ),
      6 => 
      array (
        'code' => 'AP',
        'name' => 'Ascoli Piceno',
      ),
      7 => 
      array (
        'code' => 'AT',
        'name' => 'Asti',
      ),
      8 => 
      array (
        'code' => 'AV',
        'name' => 'Avellino',
      ),
      9 => 
      array (
        'code' => 'BA',
        'name' => 'Bari',
      ),
      10 => 
      array (
        'code' => 'BL',
        'name' => 'Belluno',
      ),
      11 => 
      array (
        'code' => 'BN',
        'name' => 'Benevento',
      ),
      12 => 
      array (
        'code' => 'BG',
        'name' => 'Bergamo',
      ),
      13 => 
      array (
        'code' => 'BI',
        'name' => 'Biella',
      ),
      14 => 
      array (
        'code' => 'BO',
        'name' => 'Bologna',
      ),
      15 => 
      array (
        'code' => 'BZ',
        'name' => 'Bolzano',
      ),
      16 => 
      array (
        'code' => 'BS',
        'name' => 'Brescia',
      ),
      17 => 
      array (
        'code' => 'BR',
        'name' => 'Brindisi',
      ),
      18 => 
      array (
        'code' => 'CA',
        'name' => 'Cagliari',
      ),
      19 => 
      array (
        'code' => 'CL',
        'name' => 'Caltanissetta',
      ),
      20 => 
      array (
        'code' => 'CB',
        'name' => 'Campobasso',
      ),
      21 => 
      array (
        'code' => 'CE',
        'name' => 'Caserta',
      ),
      22 => 
      array (
        'code' => 'CT',
        'name' => 'Catania',
      ),
      23 => 
      array (
        'code' => 'CZ',
        'name' => 'Catanzaro',
      ),
      24 => 
      array (
        'code' => 'CH',
        'name' => 'Chieti',
      ),
      25 => 
      array (
        'code' => 'CO',
        'name' => 'Como',
      ),
      26 => 
      array (
        'code' => 'CS',
        'name' => 'Cosenza',
      ),
      27 => 
      array (
        'code' => 'CR',
        'name' => 'Cremona',
      ),
      28 => 
      array (
        'code' => 'KR',
        'name' => 'Crotone',
      ),
      29 => 
      array (
        'code' => 'CN',
        'name' => 'Cuneo',
      ),
      30 => 
      array (
        'code' => 'EN',
        'name' => 'Enna',
      ),
      31 => 
      array (
        'code' => 'FE',
        'name' => 'Ferrara',
      ),
      32 => 
      array (
        'code' => 'FI',
        'name' => 'Firenze',
      ),
      33 => 
      array (
        'code' => 'FG',
        'name' => 'Foggia',
      ),
      34 => 
      array (
        'code' => 'FO',
        'name' => 'Forlì',
      ),
      35 => 
      array (
        'code' => 'FR',
        'name' => 'Frosinone',
      ),
      36 => 
      array (
        'code' => 'GE',
        'name' => 'Genova',
      ),
      37 => 
      array (
        'code' => 'GO',
        'name' => 'Gorizia',
      ),
      38 => 
      array (
        'code' => 'GR',
        'name' => 'Grosseto',
      ),
      39 => 
      array (
        'code' => 'IM',
        'name' => 'Imperia',
      ),
      40 => 
      array (
        'code' => 'IS',
        'name' => 'Isernia',
      ),
      41 => 
      array (
        'code' => 'AQ',
        'name' => 'Aquila',
      ),
      42 => 
      array (
        'code' => 'SP',
        'name' => 'La Spezia',
      ),
      43 => 
      array (
        'code' => 'LT',
        'name' => 'Latina',
      ),
      44 => 
      array (
        'code' => 'LE',
        'name' => 'Lecce',
      ),
      45 => 
      array (
        'code' => 'LC',
        'name' => 'Lecco',
      ),
      46 => 
      array (
        'code' => 'LI',
        'name' => 'Livorno',
      ),
      47 => 
      array (
        'code' => 'LO',
        'name' => 'Lodi',
      ),
      48 => 
      array (
        'code' => 'LU',
        'name' => 'Lucca',
      ),
      49 => 
      array (
        'code' => 'MC',
        'name' => 'Macerata',
      ),
      50 => 
      array (
        'code' => 'MN',
        'name' => 'Mantova',
      ),
      51 => 
      array (
        'code' => 'MS',
        'name' => 'Massa-Carrara',
      ),
      52 => 
      array (
        'code' => 'MT',
        'name' => 'Matera',
      ),
      53 => 
      array (
        'code' => 'ME',
        'name' => 'Messina',
      ),
      54 => 
      array (
        'code' => 'MI',
        'name' => 'Milano',
      ),
      55 => 
      array (
        'code' => 'MO',
        'name' => 'Modena',
      ),
      56 => 
      array (
        'code' => 'NA',
        'name' => 'Napoli',
      ),
      57 => 
      array (
        'code' => 'NO',
        'name' => 'Novara',
      ),
      58 => 
      array (
        'code' => 'NU',
        'name' => 'Nuoro',
      ),
      59 => 
      array (
        'code' => 'OR',
        'name' => 'Oristano',
      ),
      60 => 
      array (
        'code' => 'PD',
        'name' => 'Padova',
      ),
      61 => 
      array (
        'code' => 'PA',
        'name' => 'Palermo',
      ),
      62 => 
      array (
        'code' => 'PR',
        'name' => 'Parma',
      ),
      63 => 
      array (
        'code' => 'PG',
        'name' => 'Perugia',
      ),
      64 => 
      array (
        'code' => 'PV',
        'name' => 'Pavia',
      ),
      65 => 
      array (
        'code' => 'PU',
        'name' => 'Pesaro Urbino',
      ),
      66 => 
      array (
        'code' => 'PE',
        'name' => 'Pescara',
      ),
      67 => 
      array (
        'code' => 'PC',
        'name' => 'Piacenza',
      ),
      68 => 
      array (
        'code' => 'PI',
        'name' => 'Pisa',
      ),
      69 => 
      array (
        'code' => 'PT',
        'name' => 'Pistoia',
      ),
      70 => 
      array (
        'code' => 'PN',
        'name' => 'Pordenone',
      ),
      71 => 
      array (
        'code' => 'PZ',
        'name' => 'Potenza',
      ),
      72 => 
      array (
        'code' => 'PO',
        'name' => 'Prato',
      ),
      73 => 
      array (
        'code' => 'RG',
        'name' => 'Ragusa',
      ),
      74 => 
      array (
        'code' => 'RA',
        'name' => 'Ravenna',
      ),
      75 => 
      array (
        'code' => 'RC',
        'name' => 'Reggio Calabria',
      ),
      76 => 
      array (
        'code' => 'RE',
        'name' => 'Reggio Emilia',
      ),
      77 => 
      array (
        'code' => 'RI',
        'name' => 'Rieti',
      ),
      78 => 
      array (
        'code' => 'RN',
        'name' => 'Rimini',
      ),
      79 => 
      array (
        'code' => 'RM',
        'name' => 'Roma',
      ),
      80 => 
      array (
        'code' => 'RO',
        'name' => 'Rovigo',
      ),
      81 => 
      array (
        'code' => 'SA',
        'name' => 'Salerno',
      ),
      82 => 
      array (
        'code' => 'SS',
        'name' => 'Sassari',
      ),
      83 => 
      array (
        'code' => 'SV',
        'name' => 'Savona',
      ),
      84 => 
      array (
        'code' => 'SI',
        'name' => 'Siena',
      ),
      85 => 
      array (
        'code' => 'SR',
        'name' => 'Siracusa',
      ),
      86 => 
      array (
        'code' => 'SO',
        'name' => 'Sondrio',
      ),
      87 => 
      array (
        'code' => 'TA',
        'name' => 'Taranto',
      ),
      88 => 
      array (
        'code' => 'TE',
        'name' => 'Teramo',
      ),
      89 => 
      array (
        'code' => 'TR',
        'name' => 'Terni',
      ),
      90 => 
      array (
        'code' => 'TO',
        'name' => 'Torino',
      ),
      91 => 
      array (
        'code' => 'TP',
        'name' => 'Trapani',
      ),
      92 => 
      array (
        'code' => 'TN',
        'name' => 'Trento',
      ),
      93 => 
      array (
        'code' => 'TV',
        'name' => 'Treviso',
      ),
      94 => 
      array (
        'code' => 'TS',
        'name' => 'Trieste',
      ),
      95 => 
      array (
        'code' => 'UD',
        'name' => 'Udine',
      ),
      96 => 
      array (
        'code' => 'VA',
        'name' => 'Varese',
      ),
      97 => 
      array (
        'code' => 'VE',
        'name' => 'Venezia',
      ),
      98 => 
      array (
        'code' => 'VB',
        'name' => 'Verbania',
      ),
      99 => 
      array (
        'code' => 'VC',
        'name' => 'Vercelli',
      ),
      100 => 
      array (
        'code' => 'VR',
        'name' => 'Verona',
      ),
      101 => 
      array (
        'code' => 'VV',
        'name' => 'Vibo Valentia',
      ),
      102 => 
      array (
        'code' => 'VI',
        'name' => 'Vicenza',
      ),
      103 => 
      array (
        'code' => 'VT',
        'name' => 'Viterbo',
      ),
      104 => 
      array (
        'code' => 'CI',
        'name' => 'Carbonia-Iglesias',
      ),
      105 => 
      array (
        'code' => 'VS',
        'name' => 'Medio Campidano',
      ),
      106 => 
      array (
        'code' => 'OG',
        'name' => 'Ogliastra',
      ),
      107 => 
      array (
        'code' => 'OT',
        'name' => 'Olbia-Tempio',
      ),
      108 => 
      array (
        'code' => 'MB',
        'name' => 'Monza e Brianza',
      ),
      109 => 
      array (
        'code' => 'FM',
        'name' => 'Fermo',
      ),
      110 => 
      array (
        'code' => 'BT',
        'name' => 'Barletta-Andria-Trani',
      ),
    ),
    'JM' => 
    array (
      1 => 
      array (
        'code' => 'CLA',
        'name' => 'Clarendon Parish',
      ),
      2 => 
      array (
        'code' => 'HAN',
        'name' => 'Hanover Parish',
      ),
      3 => 
      array (
        'code' => 'KIN',
        'name' => 'Kingston Parish',
      ),
      4 => 
      array (
        'code' => 'MAN',
        'name' => 'Manchester Parish',
      ),
      5 => 
      array (
        'code' => 'POR',
        'name' => 'Portland Parish',
      ),
      6 => 
      array (
        'code' => 'AND',
        'name' => 'Saint Andrew Parish',
      ),
      7 => 
      array (
        'code' => 'ANN',
        'name' => 'Saint Ann Parish',
      ),
      8 => 
      array (
        'code' => 'CAT',
        'name' => 'Saint Catherine Parish',
      ),
      9 => 
      array (
        'code' => 'ELI',
        'name' => 'Saint Elizabeth Parish',
      ),
      10 => 
      array (
        'code' => 'JAM',
        'name' => 'Saint James Parish',
      ),
      11 => 
      array (
        'code' => 'MAR',
        'name' => 'Saint Mary Parish',
      ),
      12 => 
      array (
        'code' => 'THO',
        'name' => 'Saint Thomas Parish',
      ),
      13 => 
      array (
        'code' => 'TRL',
        'name' => 'Trelawny Parish',
      ),
      14 => 
      array (
        'code' => 'WML',
        'name' => 'Westmoreland Parish',
      ),
    ),
    'JO' => 
    array (
      1 => 
      array (
        'code' => 'AM',
        'name' => '\'Amman',
      ),
      2 => 
      array (
        'code' => 'AJ',
        'name' => 'Ajlun',
      ),
      3 => 
      array (
        'code' => 'AA',
        'name' => 'Al\'Aqabah',
      ),
      4 => 
      array (
        'code' => 'AB',
        'name' => 'Al Balqa\'',
      ),
      5 => 
      array (
        'code' => 'AK',
        'name' => 'Al Karak',
      ),
      6 => 
      array (
        'code' => 'AL',
        'name' => 'Al Mafraq',
      ),
      7 => 
      array (
        'code' => 'AT',
        'name' => 'At Tafilah',
      ),
      8 => 
      array (
        'code' => 'AZ',
        'name' => 'Az Zarqa\'',
      ),
      9 => 
      array (
        'code' => 'IR',
        'name' => 'Irbid',
      ),
      10 => 
      array (
        'code' => 'JA',
        'name' => 'Jarash',
      ),
      11 => 
      array (
        'code' => 'MA',
        'name' => 'Ma\'an',
      ),
      12 => 
      array (
        'code' => 'MD',
        'name' => 'Madaba',
      ),
    ),
    'JP' => 
    array (
      1 => 
      array (
        'code' => 'AI',
        'name' => 'Aichi',
      ),
      2 => 
      array (
        'code' => 'AK',
        'name' => 'Akita',
      ),
      3 => 
      array (
        'code' => 'AO',
        'name' => 'Aomori',
      ),
      4 => 
      array (
        'code' => 'CH',
        'name' => 'Chiba',
      ),
      5 => 
      array (
        'code' => 'EH',
        'name' => 'Ehime',
      ),
      6 => 
      array (
        'code' => 'FK',
        'name' => 'Fukui',
      ),
      7 => 
      array (
        'code' => 'FU',
        'name' => 'Fukuoka',
      ),
      8 => 
      array (
        'code' => 'FS',
        'name' => 'Fukushima',
      ),
      9 => 
      array (
        'code' => 'GI',
        'name' => 'Gifu',
      ),
      10 => 
      array (
        'code' => 'GU',
        'name' => 'Gumma',
      ),
      11 => 
      array (
        'code' => 'HI',
        'name' => 'Hiroshima',
      ),
      12 => 
      array (
        'code' => 'HO',
        'name' => 'Hokkaido',
      ),
      13 => 
      array (
        'code' => 'HY',
        'name' => 'Hyogo',
      ),
      14 => 
      array (
        'code' => 'IB',
        'name' => 'Ibaraki',
      ),
      15 => 
      array (
        'code' => 'IS',
        'name' => 'Ishikawa',
      ),
      16 => 
      array (
        'code' => 'IW',
        'name' => 'Iwate',
      ),
      17 => 
      array (
        'code' => 'KA',
        'name' => 'Kagawa',
      ),
      18 => 
      array (
        'code' => 'KG',
        'name' => 'Kagoshima',
      ),
      19 => 
      array (
        'code' => 'KN',
        'name' => 'Kanagawa',
      ),
      20 => 
      array (
        'code' => 'KO',
        'name' => 'Kochi',
      ),
      21 => 
      array (
        'code' => 'KU',
        'name' => 'Kumamoto',
      ),
      22 => 
      array (
        'code' => 'KY',
        'name' => 'Kyoto',
      ),
      23 => 
      array (
        'code' => 'MI',
        'name' => 'Mie',
      ),
      24 => 
      array (
        'code' => 'MY',
        'name' => 'Miyagi',
      ),
      25 => 
      array (
        'code' => 'MZ',
        'name' => 'Miyazaki',
      ),
      26 => 
      array (
        'code' => 'NA',
        'name' => 'Nagano',
      ),
      27 => 
      array (
        'code' => 'NG',
        'name' => 'Nagasaki',
      ),
      28 => 
      array (
        'code' => 'NR',
        'name' => 'Nara',
      ),
      29 => 
      array (
        'code' => 'NI',
        'name' => 'Niigata',
      ),
      30 => 
      array (
        'code' => 'OI',
        'name' => 'Oita',
      ),
      31 => 
      array (
        'code' => 'OK',
        'name' => 'Okayama',
      ),
      32 => 
      array (
        'code' => 'ON',
        'name' => 'Okinawa',
      ),
      33 => 
      array (
        'code' => 'OS',
        'name' => 'Osaka',
      ),
      34 => 
      array (
        'code' => 'SA',
        'name' => 'Saga',
      ),
      35 => 
      array (
        'code' => 'SI',
        'name' => 'Saitama',
      ),
      36 => 
      array (
        'code' => 'SH',
        'name' => 'Shiga',
      ),
      37 => 
      array (
        'code' => 'SM',
        'name' => 'Shimane',
      ),
      38 => 
      array (
        'code' => 'SZ',
        'name' => 'Shizuoka',
      ),
      39 => 
      array (
        'code' => 'TO',
        'name' => 'Tochigi',
      ),
      40 => 
      array (
        'code' => 'TS',
        'name' => 'Tokushima',
      ),
      41 => 
      array (
        'code' => 'TK',
        'name' => 'Tokyo',
      ),
      42 => 
      array (
        'code' => 'TT',
        'name' => 'Tottori',
      ),
      43 => 
      array (
        'code' => 'TY',
        'name' => 'Toyama',
      ),
      44 => 
      array (
        'code' => 'WA',
        'name' => 'Wakayama',
      ),
      45 => 
      array (
        'code' => 'YA',
        'name' => 'Yamagata',
      ),
      46 => 
      array (
        'code' => 'YM',
        'name' => 'Yamaguchi',
      ),
      47 => 
      array (
        'code' => 'YN',
        'name' => 'Yamanashi',
      ),
    ),
    'KE' => 
    array (
      1 => 
      array (
        'code' => 'CE',
        'name' => 'Central',
      ),
      2 => 
      array (
        'code' => 'CO',
        'name' => 'Coast',
      ),
      3 => 
      array (
        'code' => 'EA',
        'name' => 'Eastern',
      ),
      4 => 
      array (
        'code' => 'NA',
        'name' => 'Nairobi Area',
      ),
      5 => 
      array (
        'code' => 'NE',
        'name' => 'North Eastern',
      ),
      6 => 
      array (
        'code' => 'NY',
        'name' => 'Nyanza',
      ),
      7 => 
      array (
        'code' => 'RV',
        'name' => 'Rift Valley',
      ),
      8 => 
      array (
        'code' => 'WE',
        'name' => 'Western',
      ),
    ),
    'KG' => 
    array (
      1 => 
      array (
        'code' => 'GB',
        'name' => 'Bishkek',
      ),
      2 => 
      array (
        'code' => 'B',
        'name' => 'Batken',
      ),
      3 => 
      array (
        'code' => 'C',
        'name' => 'Chu',
      ),
      4 => 
      array (
        'code' => 'J',
        'name' => 'Jalal-Abad',
      ),
      5 => 
      array (
        'code' => 'N',
        'name' => 'Naryn',
      ),
      6 => 
      array (
        'code' => 'O',
        'name' => 'Osh',
      ),
      7 => 
      array (
        'code' => 'T',
        'name' => 'Talas',
      ),
      8 => 
      array (
        'code' => 'Y',
        'name' => 'Ysyk-Kol',
      ),
    ),
    'KH' => 
    array (
      1 => 
      array (
        'code' => 'BA',
        'name' => 'Battambang',
      ),
      2 => 
      array (
        'code' => 'BM',
        'name' => 'Banteay Meanchey',
      ),
      3 => 
      array (
        'code' => 'KB',
        'name' => 'Keb',
      ),
      4 => 
      array (
        'code' => 'KK',
        'name' => 'Kaoh Kong',
      ),
      5 => 
      array (
        'code' => 'KL',
        'name' => 'Kandal',
      ),
      6 => 
      array (
        'code' => 'KM',
        'name' => 'Kampong Cham',
      ),
      7 => 
      array (
        'code' => 'KN',
        'name' => 'Kampong Chhnang',
      ),
      8 => 
      array (
        'code' => 'KO',
        'name' => 'Kampong Som',
      ),
      9 => 
      array (
        'code' => 'KP',
        'name' => 'Kampot',
      ),
      10 => 
      array (
        'code' => 'KR',
        'name' => 'Kratie',
      ),
      11 => 
      array (
        'code' => 'KT',
        'name' => 'Kampong Thom',
      ),
      12 => 
      array (
        'code' => 'KU',
        'name' => 'Kampong Speu',
      ),
      13 => 
      array (
        'code' => 'MK',
        'name' => 'Mondul Kiri',
      ),
      14 => 
      array (
        'code' => 'OM',
        'name' => 'Oddar Meancheay',
      ),
      15 => 
      array (
        'code' => 'PA',
        'name' => 'Pailin',
      ),
      16 => 
      array (
        'code' => 'PG',
        'name' => 'Prey Veng',
      ),
      17 => 
      array (
        'code' => 'PP',
        'name' => 'Phnom Penh',
      ),
      18 => 
      array (
        'code' => 'PR',
        'name' => 'Preah Vihear',
      ),
      19 => 
      array (
        'code' => 'PS',
        'name' => 'Preah Seihanu (Kompong Som or Si)',
      ),
      20 => 
      array (
        'code' => 'PU',
        'name' => 'Pursat',
      ),
      21 => 
      array (
        'code' => 'RK',
        'name' => 'Ratanak Kiri',
      ),
      22 => 
      array (
        'code' => 'SI',
        'name' => 'Siemreap',
      ),
      23 => 
      array (
        'code' => 'SR',
        'name' => 'Svay Rieng',
      ),
      24 => 
      array (
        'code' => 'ST',
        'name' => 'Stung Treng',
      ),
      25 => 
      array (
        'code' => 'TK',
        'name' => 'Takeo',
      ),
    ),
    'KI' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'Abaiang',
      ),
      2 => 
      array (
        'code' => 'AM',
        'name' => 'Abemama',
      ),
      3 => 
      array (
        'code' => 'AK',
        'name' => 'Aranuka',
      ),
      4 => 
      array (
        'code' => 'AO',
        'name' => 'Arorae',
      ),
      5 => 
      array (
        'code' => 'BA',
        'name' => 'Banaba',
      ),
      6 => 
      array (
        'code' => 'BE',
        'name' => 'Beru',
      ),
      7 => 
      array (
        'code' => 'bT',
        'name' => 'Butaritari',
      ),
      8 => 
      array (
        'code' => 'KA',
        'name' => 'Kanton',
      ),
      9 => 
      array (
        'code' => 'KR',
        'name' => 'Kiritimati',
      ),
      10 => 
      array (
        'code' => 'KU',
        'name' => 'Kuria',
      ),
      11 => 
      array (
        'code' => 'MI',
        'name' => 'Maiana',
      ),
      12 => 
      array (
        'code' => 'MN',
        'name' => 'Makin',
      ),
      13 => 
      array (
        'code' => 'ME',
        'name' => 'Marakei',
      ),
      14 => 
      array (
        'code' => 'NI',
        'name' => 'Nikunau',
      ),
      15 => 
      array (
        'code' => 'NO',
        'name' => 'Nonouti',
      ),
      16 => 
      array (
        'code' => 'ON',
        'name' => 'Onotoa',
      ),
      17 => 
      array (
        'code' => 'TT',
        'name' => 'Tabiteuea',
      ),
      18 => 
      array (
        'code' => 'TR',
        'name' => 'Tabuaeran',
      ),
      19 => 
      array (
        'code' => 'TM',
        'name' => 'Tamana',
      ),
      20 => 
      array (
        'code' => 'TW',
        'name' => 'Tarawa',
      ),
      21 => 
      array (
        'code' => 'TE',
        'name' => 'Teraina',
      ),
    ),
    'KM' => 
    array (
      1 => 
      array (
        'code' => 'G',
        'name' => 'Grande Comore',
      ),
      2 => 
      array (
        'code' => 'A',
        'name' => 'Anjouan',
      ),
      3 => 
      array (
        'code' => 'M',
        'name' => 'Moheli',
      ),
    ),
    'KN' => 
    array (
      1 => 
      array (
        'code' => 'CCN',
        'name' => 'Christ Church Nichola Town',
      ),
      2 => 
      array (
        'code' => 'SAS',
        'name' => 'Saint Anne Sandy Point',
      ),
      3 => 
      array (
        'code' => 'SGB',
        'name' => 'Saint George Basseterre',
      ),
      4 => 
      array (
        'code' => 'SGG',
        'name' => 'Saint George Gingerland',
      ),
      5 => 
      array (
        'code' => 'SJW',
        'name' => 'Saint James Windward',
      ),
      6 => 
      array (
        'code' => 'SJC',
        'name' => 'Saint John Capesterre',
      ),
      7 => 
      array (
        'code' => 'SJF',
        'name' => 'Saint John Figtree',
      ),
      8 => 
      array (
        'code' => 'SMC',
        'name' => 'Saint Mary Cayon',
      ),
      9 => 
      array (
        'code' => 'CAP',
        'name' => 'Saint Paul Capesterre',
      ),
      10 => 
      array (
        'code' => 'CHA',
        'name' => 'Saint Paul Charlestown',
      ),
      11 => 
      array (
        'code' => 'SPB',
        'name' => 'Saint Peter Basseterre',
      ),
      12 => 
      array (
        'code' => 'STL',
        'name' => 'Saint Thomas Lowland',
      ),
      13 => 
      array (
        'code' => 'STM',
        'name' => 'Saint Thomas Middle Island',
      ),
      14 => 
      array (
        'code' => 'TPP',
        'name' => 'Trinity Palmetto Point',
      ),
    ),
    'KP' => 
    array (
      1 => 
      array (
        'code' => 'CHA',
        'name' => 'Chagang-do',
      ),
      2 => 
      array (
        'code' => 'HAB',
        'name' => 'Hamgyong-bukto',
      ),
      3 => 
      array (
        'code' => 'HAN',
        'name' => 'Hamgyong-namdo',
      ),
      4 => 
      array (
        'code' => 'HWB',
        'name' => 'Hwanghae-bukto',
      ),
      5 => 
      array (
        'code' => 'HWN',
        'name' => 'Hwanghae-namdo',
      ),
      6 => 
      array (
        'code' => 'KAN',
        'name' => 'Kangwon-do',
      ),
      7 => 
      array (
        'code' => 'PYB',
        'name' => 'P\'yongan-bukto',
      ),
      8 => 
      array (
        'code' => 'PYN',
        'name' => 'P\'yongan-namdo',
      ),
      9 => 
      array (
        'code' => 'YAN',
        'name' => 'Ryanggang-do (Yanggang-do)',
      ),
      10 => 
      array (
        'code' => 'NAJ',
        'name' => 'Rason Directly Governed City',
      ),
      11 => 
      array (
        'code' => 'PYO',
        'name' => 'P\'yongyang Special City',
      ),
    ),
    'KR' => 
    array (
      1 => 
      array (
        'code' => 'CO',
        'name' => 'Ch\'ungch\'ong-bukto',
      ),
      2 => 
      array (
        'code' => 'CH',
        'name' => 'Ch\'ungch\'ong-namdo',
      ),
      3 => 
      array (
        'code' => 'CD',
        'name' => 'Cheju-do',
      ),
      4 => 
      array (
        'code' => 'CB',
        'name' => 'Cholla-bukto',
      ),
      5 => 
      array (
        'code' => 'CN',
        'name' => 'Cholla-namdo',
      ),
      6 => 
      array (
        'code' => 'IG',
        'name' => 'Inch\'on-gwangyoksi',
      ),
      7 => 
      array (
        'code' => 'KA',
        'name' => 'Kangwon-do',
      ),
      8 => 
      array (
        'code' => 'KG',
        'name' => 'Kwangju-gwangyoksi',
      ),
      9 => 
      array (
        'code' => 'KD',
        'name' => 'Kyonggi-do',
      ),
      10 => 
      array (
        'code' => 'KB',
        'name' => 'Kyongsang-bukto',
      ),
      11 => 
      array (
        'code' => 'KN',
        'name' => 'Kyongsang-namdo',
      ),
      12 => 
      array (
        'code' => 'PG',
        'name' => 'Pusan-gwangyoksi',
      ),
      13 => 
      array (
        'code' => 'SO',
        'name' => 'Soul-t\'ukpyolsi',
      ),
      14 => 
      array (
        'code' => 'TA',
        'name' => 'Taegu-gwangyoksi',
      ),
      15 => 
      array (
        'code' => 'TG',
        'name' => 'Taejon-gwangyoksi',
      ),
    ),
    'KW' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Al\'Asimah',
      ),
      2 => 
      array (
        'code' => 'AA',
        'name' => 'Al Ahmadi',
      ),
      3 => 
      array (
        'code' => 'AF',
        'name' => 'Al Farwaniyah',
      ),
      4 => 
      array (
        'code' => 'AJ',
        'name' => 'Al Jahra\'',
      ),
      5 => 
      array (
        'code' => 'HA',
        'name' => 'Hawalli',
      ),
    ),
    'KY' => 
    array (
      1 => 
      array (
        'code' => 'CR',
        'name' => 'Creek',
      ),
      2 => 
      array (
        'code' => 'EA',
        'name' => 'Eastern',
      ),
      3 => 
      array (
        'code' => 'ML',
        'name' => 'Midland',
      ),
      4 => 
      array (
        'code' => 'ST',
        'name' => 'South Town',
      ),
      5 => 
      array (
        'code' => 'SP',
        'name' => 'Spot Bay',
      ),
      6 => 
      array (
        'code' => 'SK',
        'name' => 'Stake Bay',
      ),
      7 => 
      array (
        'code' => 'WD',
        'name' => 'West End',
      ),
      8 => 
      array (
        'code' => 'WN',
        'name' => 'Western',
      ),
    ),
    'KZ' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Almaty',
      ),
      2 => 
      array (
        'code' => 'AC',
        'name' => 'Almaty City',
      ),
      3 => 
      array (
        'code' => 'AM',
        'name' => 'Aqmola',
      ),
      4 => 
      array (
        'code' => 'AQ',
        'name' => 'Aqtobe',
      ),
      5 => 
      array (
        'code' => 'AS',
        'name' => 'Astana City',
      ),
      6 => 
      array (
        'code' => 'AT',
        'name' => 'Atyrau',
      ),
      7 => 
      array (
        'code' => 'BA',
        'name' => 'Batys Qazaqstan',
      ),
      8 => 
      array (
        'code' => 'BY',
        'name' => 'Bayqongyr City',
      ),
      9 => 
      array (
        'code' => 'MA',
        'name' => 'Mangghystau',
      ),
      10 => 
      array (
        'code' => 'ON',
        'name' => 'Ongtustik Qazaqstan',
      ),
      11 => 
      array (
        'code' => 'PA',
        'name' => 'Pavlodar',
      ),
      12 => 
      array (
        'code' => 'QA',
        'name' => 'Qaraghandy',
      ),
      13 => 
      array (
        'code' => 'QO',
        'name' => 'Qostanay',
      ),
      14 => 
      array (
        'code' => 'QY',
        'name' => 'Qyzylorda',
      ),
      15 => 
      array (
        'code' => 'SH',
        'name' => 'Shyghys Qazaqstan',
      ),
      16 => 
      array (
        'code' => 'SO',
        'name' => 'Soltustik Qazaqstan',
      ),
      17 => 
      array (
        'code' => 'ZH',
        'name' => 'Zhambyl',
      ),
    ),
    'LA' => 
    array (
      1 => 
      array (
        'code' => 'VT',
        'name' => 'Vientiane',
      ),
      2 => 
      array (
        'code' => 'AT',
        'name' => 'Attapu',
      ),
      3 => 
      array (
        'code' => 'BK',
        'name' => 'Bokeo',
      ),
      4 => 
      array (
        'code' => 'BL',
        'name' => 'Bolikhamxai',
      ),
      5 => 
      array (
        'code' => 'CH',
        'name' => 'Champasak',
      ),
      6 => 
      array (
        'code' => 'HO',
        'name' => 'Houaphan',
      ),
      7 => 
      array (
        'code' => 'KH',
        'name' => 'Khammouan',
      ),
      8 => 
      array (
        'code' => 'LM',
        'name' => 'Louang Namtha',
      ),
      9 => 
      array (
        'code' => 'LP',
        'name' => 'Louangphabang',
      ),
      10 => 
      array (
        'code' => 'OU',
        'name' => 'Oudomxai',
      ),
      11 => 
      array (
        'code' => 'PH',
        'name' => 'Phongsali',
      ),
      12 => 
      array (
        'code' => 'SL',
        'name' => 'Salavan',
      ),
      13 => 
      array (
        'code' => 'SV',
        'name' => 'Savannakhet',
      ),
      14 => 
      array (
        'code' => 'VI',
        'name' => 'Vientiane',
      ),
      15 => 
      array (
        'code' => 'XA',
        'name' => 'Xaignabouli',
      ),
      16 => 
      array (
        'code' => 'XE',
        'name' => 'Xekong',
      ),
      17 => 
      array (
        'code' => 'XI',
        'name' => 'Xiangkhoang',
      ),
      18 => 
      array (
        'code' => 'XN',
        'name' => 'Xaisomboun',
      ),
    ),
    'LB' => 
    array (
      1 => 
      array (
        'code' => 'BIN',
        'name' => 'Bint Jbeil',
      ),
      2 => 
      array (
        'code' => 'HAS',
        'name' => 'Hasbaya',
      ),
      3 => 
      array (
        'code' => 'MAR',
        'name' => 'Marjeyoun',
      ),
      4 => 
      array (
        'code' => 'NAB',
        'name' => 'Nabatieh',
      ),
      5 => 
      array (
        'code' => 'BAA',
        'name' => 'Baalbek',
      ),
      6 => 
      array (
        'code' => 'HER',
        'name' => 'Hermel',
      ),
      7 => 
      array (
        'code' => 'RAS',
        'name' => 'Rashaya',
      ),
      8 => 
      array (
        'code' => 'WES',
        'name' => 'Western Beqaa',
      ),
      9 => 
      array (
        'code' => 'ZAH',
        'name' => 'Zahle',
      ),
      10 => 
      array (
        'code' => 'AKK',
        'name' => 'Akkar',
      ),
      11 => 
      array (
        'code' => 'BAT',
        'name' => 'Batroun',
      ),
      12 => 
      array (
        'code' => 'BSH',
        'name' => 'Bsharri',
      ),
      13 => 
      array (
        'code' => 'KOU',
        'name' => 'Koura',
      ),
      14 => 
      array (
        'code' => 'MIN',
        'name' => 'Miniyeh-Danniyeh',
      ),
      15 => 
      array (
        'code' => 'TRI',
        'name' => 'Tripoli',
      ),
      16 => 
      array (
        'code' => 'ZGH',
        'name' => 'Zgharta',
      ),
      17 => 
      array (
        'code' => 'ALE',
        'name' => 'Aley',
      ),
      18 => 
      array (
        'code' => 'BAA',
        'name' => 'Baabda',
      ),
      19 => 
      array (
        'code' => 'BYB',
        'name' => 'Byblos',
      ),
      20 => 
      array (
        'code' => 'CHO',
        'name' => 'Chouf',
      ),
      21 => 
      array (
        'code' => 'KES',
        'name' => 'Kesrwan',
      ),
      22 => 
      array (
        'code' => 'MAT',
        'name' => 'Matn',
      ),
      23 => 
      array (
        'code' => 'JEZ',
        'name' => 'Jezzine',
      ),
      24 => 
      array (
        'code' => 'SID',
        'name' => 'Sidon',
      ),
      25 => 
      array (
        'code' => 'TYR',
        'name' => 'Tyre',
      ),
    ),
    'LC' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'Anse-la-Raye',
      ),
      2 => 
      array (
        'code' => 'CA',
        'name' => 'Castries',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'Choiseul',
      ),
      4 => 
      array (
        'code' => 'DA',
        'name' => 'Dauphin',
      ),
      5 => 
      array (
        'code' => 'DE',
        'name' => 'Dennery',
      ),
      6 => 
      array (
        'code' => 'GI',
        'name' => 'Gros-Islet',
      ),
      7 => 
      array (
        'code' => 'LA',
        'name' => 'Laborie',
      ),
      8 => 
      array (
        'code' => 'MI',
        'name' => 'Micoud',
      ),
      9 => 
      array (
        'code' => 'PR',
        'name' => 'Praslin',
      ),
      10 => 
      array (
        'code' => 'SO',
        'name' => 'Soufriere',
      ),
      11 => 
      array (
        'code' => 'VF',
        'name' => 'Vieux-Fort',
      ),
    ),
    'LI' => 
    array (
      1 => 
      array (
        'code' => 'V',
        'name' => 'Vaduz',
      ),
      2 => 
      array (
        'code' => 'A',
        'name' => 'Schaan',
      ),
      3 => 
      array (
        'code' => 'B',
        'name' => 'Balzers',
      ),
      4 => 
      array (
        'code' => 'N',
        'name' => 'Triesen',
      ),
      5 => 
      array (
        'code' => 'E',
        'name' => 'Eschen',
      ),
      6 => 
      array (
        'code' => 'M',
        'name' => 'Mauren',
      ),
      7 => 
      array (
        'code' => 'T',
        'name' => 'Triesenberg',
      ),
      8 => 
      array (
        'code' => 'R',
        'name' => 'Ruggell',
      ),
      9 => 
      array (
        'code' => 'G',
        'name' => 'Gamprin',
      ),
      10 => 
      array (
        'code' => 'L',
        'name' => 'Schellenberg',
      ),
      11 => 
      array (
        'code' => 'P',
        'name' => 'Planken',
      ),
    ),
    'LK' => 
    array (
      1 => 
      array (
        'code' => 'CE',
        'name' => 'Central',
      ),
      2 => 
      array (
        'code' => 'EA',
        'name' => 'Eastern',
      ),
      3 => 
      array (
        'code' => 'NC',
        'name' => 'North Central',
      ),
      4 => 
      array (
        'code' => 'NO',
        'name' => 'Northern',
      ),
      5 => 
      array (
        'code' => 'NW',
        'name' => 'North Western',
      ),
      6 => 
      array (
        'code' => 'SA',
        'name' => 'Sabaragamuwa',
      ),
      7 => 
      array (
        'code' => 'SO',
        'name' => 'Southern',
      ),
      8 => 
      array (
        'code' => 'UV',
        'name' => 'Uva',
      ),
      9 => 
      array (
        'code' => 'WE',
        'name' => 'Western',
      ),
    ),
    'LR' => 
    array (
      1 => 
      array (
        'code' => 'BI',
        'name' => 'Bomi',
      ),
      2 => 
      array (
        'code' => 'BG',
        'name' => 'Bong',
      ),
      3 => 
      array (
        'code' => 'GB',
        'name' => 'Grand Bassa',
      ),
      4 => 
      array (
        'code' => 'CM',
        'name' => 'Grand Cape Mount',
      ),
      5 => 
      array (
        'code' => 'GG',
        'name' => 'Grand Gedeh',
      ),
      6 => 
      array (
        'code' => 'GK',
        'name' => 'Grand Kru',
      ),
      7 => 
      array (
        'code' => 'LO',
        'name' => 'Lofa',
      ),
      8 => 
      array (
        'code' => 'MG',
        'name' => 'Margibi',
      ),
      9 => 
      array (
        'code' => 'ML',
        'name' => 'Maryland',
      ),
      10 => 
      array (
        'code' => 'MS',
        'name' => 'Montserrado',
      ),
      11 => 
      array (
        'code' => 'NB',
        'name' => 'Nimba',
      ),
      12 => 
      array (
        'code' => 'RC',
        'name' => 'River Cess',
      ),
      13 => 
      array (
        'code' => 'SN',
        'name' => 'Sinoe',
      ),
    ),
    'LS' => 
    array (
      1 => 
      array (
        'code' => 'BE',
        'name' => 'Berea',
      ),
      2 => 
      array (
        'code' => 'BB',
        'name' => 'Butha-Buthe',
      ),
      3 => 
      array (
        'code' => 'LE',
        'name' => 'Leribe',
      ),
      4 => 
      array (
        'code' => 'MF',
        'name' => 'Mafeteng',
      ),
      5 => 
      array (
        'code' => 'MS',
        'name' => 'Maseru',
      ),
      6 => 
      array (
        'code' => 'MH',
        'name' => 'Mohale\'s Hoek',
      ),
      7 => 
      array (
        'code' => 'MK',
        'name' => 'Mokhotlong',
      ),
      8 => 
      array (
        'code' => 'QN',
        'name' => 'Qacha\'s Nek',
      ),
      9 => 
      array (
        'code' => 'QT',
        'name' => 'Quthing',
      ),
      10 => 
      array (
        'code' => 'TT',
        'name' => 'Thaba-Tseka',
      ),
    ),
    'LT' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Alytus',
      ),
      2 => 
      array (
        'code' => 'KA',
        'name' => 'Kaunas',
      ),
      3 => 
      array (
        'code' => 'KL',
        'name' => 'Klaipeda',
      ),
      4 => 
      array (
        'code' => 'MA',
        'name' => 'Marijampole',
      ),
      5 => 
      array (
        'code' => 'PA',
        'name' => 'Panevezys',
      ),
      6 => 
      array (
        'code' => 'SI',
        'name' => 'Siauliai',
      ),
      7 => 
      array (
        'code' => 'TA',
        'name' => 'Taurage',
      ),
      8 => 
      array (
        'code' => 'TE',
        'name' => 'Telsiai',
      ),
      9 => 
      array (
        'code' => 'UT',
        'name' => 'Utena',
      ),
      10 => 
      array (
        'code' => 'VI',
        'name' => 'Vilnius',
      ),
    ),
    'LU' => 
    array (
      1 => 
      array (
        'code' => 'DD',
        'name' => 'Diekirch',
      ),
      2 => 
      array (
        'code' => 'DC',
        'name' => 'Clervaux',
      ),
      3 => 
      array (
        'code' => 'DR',
        'name' => 'Redange',
      ),
      4 => 
      array (
        'code' => 'DV',
        'name' => 'Vianden',
      ),
      5 => 
      array (
        'code' => 'DW',
        'name' => 'Wiltz',
      ),
      6 => 
      array (
        'code' => 'GG',
        'name' => 'Grevenmacher',
      ),
      7 => 
      array (
        'code' => 'GE',
        'name' => 'Echternach',
      ),
      8 => 
      array (
        'code' => 'GR',
        'name' => 'Remich',
      ),
      9 => 
      array (
        'code' => 'LL',
        'name' => 'Luxembourg',
      ),
      10 => 
      array (
        'code' => 'LC',
        'name' => 'Capellen',
      ),
      11 => 
      array (
        'code' => 'LE',
        'name' => 'Esch-sur-Alzette',
      ),
      12 => 
      array (
        'code' => 'LM',
        'name' => 'Mersch',
      ),
    ),
    'LV' => 
    array (
      1 => 
      array (
        'code' => 'AIZ',
        'name' => 'Aizkraukles Rajons',
      ),
      2 => 
      array (
        'code' => 'ALU',
        'name' => 'Aluksnes Rajons',
      ),
      3 => 
      array (
        'code' => 'BAL',
        'name' => 'Balvu Rajons',
      ),
      4 => 
      array (
        'code' => 'BAU',
        'name' => 'Bauskas Rajons',
      ),
      5 => 
      array (
        'code' => 'CES',
        'name' => 'Cesu Rajons',
      ),
      6 => 
      array (
        'code' => 'DGR',
        'name' => 'Daugavpils Rajons',
      ),
      7 => 
      array (
        'code' => 'DOB',
        'name' => 'Dobeles Rajons',
      ),
      8 => 
      array (
        'code' => 'GUL',
        'name' => 'Gulbenes Rajons',
      ),
      9 => 
      array (
        'code' => 'JEK',
        'name' => 'Jekabpils Rajons',
      ),
      10 => 
      array (
        'code' => 'JGR',
        'name' => 'Jelgavas Rajons',
      ),
      11 => 
      array (
        'code' => 'KRA',
        'name' => 'Kraslavas Rajons',
      ),
      12 => 
      array (
        'code' => 'KUL',
        'name' => 'Kuldigas Rajons',
      ),
      13 => 
      array (
        'code' => 'LPR',
        'name' => 'Liepajas Rajons',
      ),
      14 => 
      array (
        'code' => 'LIM',
        'name' => 'Limbazu Rajons',
      ),
      15 => 
      array (
        'code' => 'LUD',
        'name' => 'Ludzas Rajons',
      ),
      16 => 
      array (
        'code' => 'MAD',
        'name' => 'Madonas Rajons',
      ),
      17 => 
      array (
        'code' => 'OGR',
        'name' => 'Ogres Rajons',
      ),
      18 => 
      array (
        'code' => 'PRE',
        'name' => 'Preilu Rajons',
      ),
      19 => 
      array (
        'code' => 'RZR',
        'name' => 'Rezeknes Rajons',
      ),
      20 => 
      array (
        'code' => 'RGR',
        'name' => 'Rigas Rajons',
      ),
      21 => 
      array (
        'code' => 'SAL',
        'name' => 'Saldus Rajons',
      ),
      22 => 
      array (
        'code' => 'TAL',
        'name' => 'Talsu Rajons',
      ),
      23 => 
      array (
        'code' => 'TUK',
        'name' => 'Tukuma Rajons',
      ),
      24 => 
      array (
        'code' => 'VLK',
        'name' => 'Valkas Rajons',
      ),
      25 => 
      array (
        'code' => 'VLM',
        'name' => 'Valmieras Rajons',
      ),
      26 => 
      array (
        'code' => 'VSR',
        'name' => 'Ventspils Rajons',
      ),
      27 => 
      array (
        'code' => 'DGV',
        'name' => 'Daugavpils',
      ),
      28 => 
      array (
        'code' => 'JGV',
        'name' => 'Jelgava',
      ),
      29 => 
      array (
        'code' => 'JUR',
        'name' => 'Jurmala',
      ),
      30 => 
      array (
        'code' => 'LPK',
        'name' => 'Liepaja',
      ),
      31 => 
      array (
        'code' => 'RZK',
        'name' => 'Rezekne',
      ),
      32 => 
      array (
        'code' => 'RGA',
        'name' => 'Riga',
      ),
      33 => 
      array (
        'code' => 'VSL',
        'name' => 'Ventspils',
      ),
    ),
    'LY' => 
    array (
      1 => 
      array (
        'code' => 'AJ',
        'name' => 'Ajdabiya',
      ),
      2 => 
      array (
        'code' => 'AZ',
        'name' => 'Al \'Aziziyah',
      ),
      3 => 
      array (
        'code' => 'FA',
        'name' => 'Al Fatih',
      ),
      4 => 
      array (
        'code' => 'JA',
        'name' => 'Al Jabal al Akhdar',
      ),
      5 => 
      array (
        'code' => 'JU',
        'name' => 'Al Jufrah',
      ),
      6 => 
      array (
        'code' => 'KH',
        'name' => 'Al Khums',
      ),
      7 => 
      array (
        'code' => 'KU',
        'name' => 'Al Kufrah',
      ),
      8 => 
      array (
        'code' => 'NK',
        'name' => 'An Nuqat al Khams',
      ),
      9 => 
      array (
        'code' => 'AS',
        'name' => 'Ash Shati\'',
      ),
      10 => 
      array (
        'code' => 'AW',
        'name' => 'Awbari',
      ),
      11 => 
      array (
        'code' => 'ZA',
        'name' => 'Az Zawiyah',
      ),
      12 => 
      array (
        'code' => 'BA',
        'name' => 'Banghazi',
      ),
      13 => 
      array (
        'code' => 'DA',
        'name' => 'Darnah',
      ),
      14 => 
      array (
        'code' => 'GD',
        'name' => 'Ghadamis',
      ),
      15 => 
      array (
        'code' => 'GY',
        'name' => 'Gharyan',
      ),
      16 => 
      array (
        'code' => 'MI',
        'name' => 'Misratah',
      ),
      17 => 
      array (
        'code' => 'MZ',
        'name' => 'Murzuq',
      ),
      18 => 
      array (
        'code' => 'SB',
        'name' => 'Sabha',
      ),
      19 => 
      array (
        'code' => 'SW',
        'name' => 'Sawfajjin',
      ),
      20 => 
      array (
        'code' => 'SU',
        'name' => 'Surt',
      ),
      21 => 
      array (
        'code' => 'TL',
        'name' => 'Tarabulus (Tripoli)',
      ),
      22 => 
      array (
        'code' => 'TH',
        'name' => 'Tarhunah',
      ),
      23 => 
      array (
        'code' => 'TU',
        'name' => 'Tubruq',
      ),
      24 => 
      array (
        'code' => 'YA',
        'name' => 'Yafran',
      ),
      25 => 
      array (
        'code' => 'ZL',
        'name' => 'Zlitan',
      ),
    ),
    'MA' => 
    array (
      1 => 
      array (
        'code' => 'AGD',
        'name' => 'Agadir',
      ),
      2 => 
      array (
        'code' => 'HOC',
        'name' => 'Al Hoceima',
      ),
      3 => 
      array (
        'code' => 'AZI',
        'name' => 'Azilal',
      ),
      4 => 
      array (
        'code' => 'BME',
        'name' => 'Beni Mellal',
      ),
      5 => 
      array (
        'code' => 'BSL',
        'name' => 'Ben Slimane',
      ),
      6 => 
      array (
        'code' => 'BLM',
        'name' => 'Boulemane',
      ),
      7 => 
      array (
        'code' => 'CBL',
        'name' => 'Casablanca',
      ),
      8 => 
      array (
        'code' => 'CHA',
        'name' => 'Chaouen',
      ),
      9 => 
      array (
        'code' => 'EJA',
        'name' => 'El Jadida',
      ),
      10 => 
      array (
        'code' => 'EKS',
        'name' => 'El Kelaa des Sraghna',
      ),
      11 => 
      array (
        'code' => 'ERA',
        'name' => 'Er Rachidia',
      ),
      12 => 
      array (
        'code' => 'ESS',
        'name' => 'Essaouira',
      ),
      13 => 
      array (
        'code' => 'FES',
        'name' => 'Fes',
      ),
      14 => 
      array (
        'code' => 'FIG',
        'name' => 'Figuig',
      ),
      15 => 
      array (
        'code' => 'GLM',
        'name' => 'Guelmim',
      ),
      16 => 
      array (
        'code' => 'IFR',
        'name' => 'Ifrane',
      ),
      17 => 
      array (
        'code' => 'KEN',
        'name' => 'Kenitra',
      ),
      18 => 
      array (
        'code' => 'KHM',
        'name' => 'Khemisset',
      ),
      19 => 
      array (
        'code' => 'KHN',
        'name' => 'Khenifra',
      ),
      20 => 
      array (
        'code' => 'KHO',
        'name' => 'Khouribga',
      ),
      21 => 
      array (
        'code' => 'LYN',
        'name' => 'Laayoune',
      ),
      22 => 
      array (
        'code' => 'LAR',
        'name' => 'Larache',
      ),
      23 => 
      array (
        'code' => 'MRK',
        'name' => 'Marrakech',
      ),
      24 => 
      array (
        'code' => 'MKN',
        'name' => 'Meknes',
      ),
      25 => 
      array (
        'code' => 'NAD',
        'name' => 'Nador',
      ),
      26 => 
      array (
        'code' => 'ORZ',
        'name' => 'Ouarzazate',
      ),
      27 => 
      array (
        'code' => 'OUJ',
        'name' => 'Oujda',
      ),
      28 => 
      array (
        'code' => 'RSA',
        'name' => 'Rabat-Sale',
      ),
      29 => 
      array (
        'code' => 'SAF',
        'name' => 'Safi',
      ),
      30 => 
      array (
        'code' => 'SET',
        'name' => 'Settat',
      ),
      31 => 
      array (
        'code' => 'SKA',
        'name' => 'Sidi Kacem',
      ),
      32 => 
      array (
        'code' => 'TGR',
        'name' => 'Tangier',
      ),
      33 => 
      array (
        'code' => 'TAN',
        'name' => 'Tan-Tan',
      ),
      34 => 
      array (
        'code' => 'TAO',
        'name' => 'Taounate',
      ),
      35 => 
      array (
        'code' => 'TRD',
        'name' => 'Taroudannt',
      ),
      36 => 
      array (
        'code' => 'TAT',
        'name' => 'Tata',
      ),
      37 => 
      array (
        'code' => 'TAZ',
        'name' => 'Taza',
      ),
      38 => 
      array (
        'code' => 'TET',
        'name' => 'Tetouan',
      ),
      39 => 
      array (
        'code' => 'TIZ',
        'name' => 'Tiznit',
      ),
      40 => 
      array (
        'code' => 'ADK',
        'name' => 'Ad Dakhla',
      ),
      41 => 
      array (
        'code' => 'BJD',
        'name' => 'Boujdour',
      ),
      42 => 
      array (
        'code' => 'ESM',
        'name' => 'Es Smara',
      ),
    ),
    'MC' => 
    array (
      1 => 
      array (
        'code' => 'FV',
        'name' => 'Fontvieille',
      ),
      2 => 
      array (
        'code' => 'LC',
        'name' => 'La Condamine',
      ),
      3 => 
      array (
        'code' => 'MV',
        'name' => 'Monaco-Ville',
      ),
      4 => 
      array (
        'code' => 'MC',
        'name' => 'Monte-Carlo',
      ),
    ),
    'MD' => 
    array (
      1 => 
      array (
        'code' => 'GA',
        'name' => 'Gagauzia',
      ),
      2 => 
      array (
        'code' => 'CU',
        'name' => 'Chisinau',
      ),
      3 => 
      array (
        'code' => 'BA',
        'name' => 'Balti',
      ),
      4 => 
      array (
        'code' => 'CA',
        'name' => 'Cahul',
      ),
      5 => 
      array (
        'code' => 'ED',
        'name' => 'Edinet',
      ),
      6 => 
      array (
        'code' => 'LA',
        'name' => 'Lapusna',
      ),
      7 => 
      array (
        'code' => 'OR',
        'name' => 'Orhei',
      ),
      8 => 
      array (
        'code' => 'SO',
        'name' => 'Soroca',
      ),
      9 => 
      array (
        'code' => 'TI',
        'name' => 'Tighina',
      ),
      10 => 
      array (
        'code' => 'UN',
        'name' => 'Ungheni',
      ),
      11 => 
      array (
        'code' => 'SN',
        'name' => 'Stânga Nistrului',
      ),
    ),
    'MG' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Antananarivo',
      ),
      2 => 
      array (
        'code' => 'AS',
        'name' => 'Antsiranana',
      ),
      3 => 
      array (
        'code' => 'FN',
        'name' => 'Fianarantsoa',
      ),
      4 => 
      array (
        'code' => 'MJ',
        'name' => 'Mahajanga',
      ),
      5 => 
      array (
        'code' => 'TM',
        'name' => 'Toamasina',
      ),
      6 => 
      array (
        'code' => 'TL',
        'name' => 'Toliara',
      ),
    ),
    'MH' => 
    array (
      1 => 
      array (
        'code' => 'ALG',
        'name' => 'Ailinginae',
      ),
      2 => 
      array (
        'code' => 'ALL',
        'name' => 'Ailinglaplap',
      ),
      3 => 
      array (
        'code' => 'ALK',
        'name' => 'Ailuk',
      ),
      4 => 
      array (
        'code' => 'ARN',
        'name' => 'Arno',
      ),
      5 => 
      array (
        'code' => 'AUR',
        'name' => 'Aur',
      ),
      6 => 
      array (
        'code' => 'BKR',
        'name' => 'Bikar',
      ),
      7 => 
      array (
        'code' => 'BKN',
        'name' => 'Bikini',
      ),
      8 => 
      array (
        'code' => 'BKK',
        'name' => 'Bokak',
      ),
      9 => 
      array (
        'code' => 'EBN',
        'name' => 'Ebon',
      ),
      10 => 
      array (
        'code' => 'ENT',
        'name' => 'Enewetak',
      ),
      11 => 
      array (
        'code' => 'EKB',
        'name' => 'Erikub',
      ),
      12 => 
      array (
        'code' => 'JBT',
        'name' => 'Jabat',
      ),
      13 => 
      array (
        'code' => 'JLT',
        'name' => 'Jaluit',
      ),
      14 => 
      array (
        'code' => 'JEM',
        'name' => 'Jemo',
      ),
      15 => 
      array (
        'code' => 'KIL',
        'name' => 'Kili',
      ),
      16 => 
      array (
        'code' => 'KWJ',
        'name' => 'Kwajalein',
      ),
      17 => 
      array (
        'code' => 'LAE',
        'name' => 'Lae',
      ),
      18 => 
      array (
        'code' => 'LIB',
        'name' => 'Lib',
      ),
      19 => 
      array (
        'code' => 'LKP',
        'name' => 'Likiep',
      ),
      20 => 
      array (
        'code' => 'MJR',
        'name' => 'Majuro',
      ),
      21 => 
      array (
        'code' => 'MLP',
        'name' => 'Maloelap',
      ),
      22 => 
      array (
        'code' => 'MJT',
        'name' => 'Mejit',
      ),
      23 => 
      array (
        'code' => 'MIL',
        'name' => 'Mili',
      ),
      24 => 
      array (
        'code' => 'NMK',
        'name' => 'Namorik',
      ),
      25 => 
      array (
        'code' => 'NAM',
        'name' => 'Namu',
      ),
      26 => 
      array (
        'code' => 'RGL',
        'name' => 'Rongelap',
      ),
      27 => 
      array (
        'code' => 'RGK',
        'name' => 'Rongrik',
      ),
      28 => 
      array (
        'code' => 'TOK',
        'name' => 'Toke',
      ),
      29 => 
      array (
        'code' => 'UJA',
        'name' => 'Ujae',
      ),
      30 => 
      array (
        'code' => 'UJL',
        'name' => 'Ujelang',
      ),
      31 => 
      array (
        'code' => 'UTK',
        'name' => 'Utirik',
      ),
      32 => 
      array (
        'code' => 'WTH',
        'name' => 'Wotho',
      ),
      33 => 
      array (
        'code' => 'WTJ',
        'name' => 'Wotje',
      ),
    ),
    'MK' => 
    array (
      1 => 
      array (
        'code' => 'AER',
        'name' => 'Aerodrom',
      ),
      2 => 
      array (
        'code' => 'ARA',
        'name' => 'Aračinovo',
      ),
      3 => 
      array (
        'code' => 'BER',
        'name' => 'Berovo',
      ),
      4 => 
      array (
        'code' => 'BIT',
        'name' => 'Bitola',
      ),
      5 => 
      array (
        'code' => 'BOG',
        'name' => 'Bogdanci',
      ),
      6 => 
      array (
        'code' => 'BOG',
        'name' => 'Bogovinje',
      ),
      7 => 
      array (
        'code' => 'BOS',
        'name' => 'Bosilovo',
      ),
      8 => 
      array (
        'code' => 'BRV',
        'name' => 'Brvenica',
      ),
      9 => 
      array (
        'code' => 'BUT',
        'name' => 'Butel',
      ),
      10 => 
      array (
        'code' => 'ČAI',
        'name' => 'Čair',
      ),
      11 => 
      array (
        'code' => 'ČAš',
        'name' => 'Čaška',
      ),
      12 => 
      array (
        'code' => 'CEN',
        'name' => 'Centar',
      ),
      13 => 
      array (
        'code' => 'CEN',
        'name' => 'Centar Župa',
      ),
      14 => 
      array (
        'code' => 'Češ',
        'name' => 'Češinovo-Obleš',
      ),
      15 => 
      array (
        'code' => 'ČUČ',
        'name' => 'Čučer-Sandevo',
      ),
      16 => 
      array (
        'code' => 'DEB',
        'name' => 'Debar',
      ),
      17 => 
      array (
        'code' => 'DEB',
        'name' => 'Debarca',
      ),
      18 => 
      array (
        'code' => 'DEL',
        'name' => 'Delčevo',
      ),
      19 => 
      array (
        'code' => 'DEM',
        'name' => 'Demir Hisar',
      ),
      20 => 
      array (
        'code' => 'DEM',
        'name' => 'Demir Kapija',
      ),
      21 => 
      array (
        'code' => 'DOL',
        'name' => 'Dolneni',
      ),
      22 => 
      array (
        'code' => 'DRU',
        'name' => 'Drugovo',
      ),
      23 => 
      array (
        'code' => 'GAZ',
        'name' => 'Gazi Baba',
      ),
      24 => 
      array (
        'code' => 'GEV',
        'name' => 'Gevgelija',
      ),
      25 => 
      array (
        'code' => 'GJO',
        'name' => 'Gjorče Petrov',
      ),
      26 => 
      array (
        'code' => 'GOS',
        'name' => 'Gostivar',
      ),
      27 => 
      array (
        'code' => 'GRA',
        'name' => 'Gradsko',
      ),
      28 => 
      array (
        'code' => 'ILI',
        'name' => 'Ilinden',
      ),
      29 => 
      array (
        'code' => 'JEG',
        'name' => 'Jegunovce',
      ),
      30 => 
      array (
        'code' => 'KAR',
        'name' => 'Karbinci',
      ),
      31 => 
      array (
        'code' => 'KAR',
        'name' => 'Karpoš',
      ),
      32 => 
      array (
        'code' => 'KAV',
        'name' => 'Kavadarci',
      ),
      33 => 
      array (
        'code' => 'KIČ',
        'name' => 'Kičevo',
      ),
      34 => 
      array (
        'code' => 'KIS',
        'name' => 'Kisela Voda',
      ),
      35 => 
      array (
        'code' => 'KOč',
        'name' => 'Kočani',
      ),
      36 => 
      array (
        'code' => 'KON',
        'name' => 'Konče',
      ),
      37 => 
      array (
        'code' => 'KRA',
        'name' => 'Kratovo',
      ),
      38 => 
      array (
        'code' => 'KRI',
        'name' => 'Kriva Palanka',
      ),
      39 => 
      array (
        'code' => 'KRI',
        'name' => 'Krivogaštani',
      ),
      40 => 
      array (
        'code' => 'KRU',
        'name' => 'Kruševo',
      ),
      41 => 
      array (
        'code' => 'KUM',
        'name' => 'Kumanovo',
      ),
      42 => 
      array (
        'code' => 'LIP',
        'name' => 'Lipkovo',
      ),
      43 => 
      array (
        'code' => 'LOZ',
        'name' => 'Lozovo',
      ),
      44 => 
      array (
        'code' => 'MAK',
        'name' => 'Makedonska Kamenica',
      ),
      45 => 
      array (
        'code' => 'MAK',
        'name' => 'Makedonski Brod',
      ),
      46 => 
      array (
        'code' => 'MAV',
        'name' => 'Mavrovo and Rostuša',
      ),
      47 => 
      array (
        'code' => 'MOG',
        'name' => 'Mogila',
      ),
      48 => 
      array (
        'code' => 'NEG',
        'name' => 'Negotino',
      ),
      49 => 
      array (
        'code' => 'NOV',
        'name' => 'Novaci',
      ),
      50 => 
      array (
        'code' => 'NOV',
        'name' => 'Novo Selo',
      ),
      51 => 
      array (
        'code' => 'OHR',
        'name' => 'Ohrid',
      ),
      52 => 
      array (
        'code' => 'OSL',
        'name' => 'Oslomej',
      ),
      53 => 
      array (
        'code' => 'PEH',
        'name' => 'Pehčevo',
      ),
      54 => 
      array (
        'code' => 'PET',
        'name' => 'Petrovec',
      ),
      55 => 
      array (
        'code' => 'PLA',
        'name' => 'Plasnica',
      ),
      56 => 
      array (
        'code' => 'PRI',
        'name' => 'Prilep',
      ),
      57 => 
      array (
        'code' => 'PRO',
        'name' => 'Probištip',
      ),
      58 => 
      array (
        'code' => 'RAD',
        'name' => 'Radoviš',
      ),
      59 => 
      array (
        'code' => 'RAN',
        'name' => 'Rankovce',
      ),
      60 => 
      array (
        'code' => 'RES',
        'name' => 'Resen',
      ),
      61 => 
      array (
        'code' => 'ROS',
        'name' => 'Rosoman',
      ),
      62 => 
      array (
        'code' => 'SAR',
        'name' => 'Saraj',
      ),
      63 => 
      array (
        'code' => 'SOP',
        'name' => 'Sopište',
      ),
      64 => 
      array (
        'code' => 'STA',
        'name' => 'Star Dojran',
      ),
      65 => 
      array (
        'code' => 'STA',
        'name' => 'Staro Nagoričane',
      ),
      66 => 
      array (
        'code' => 'ŠTI',
        'name' => 'Štip',
      ),
      67 => 
      array (
        'code' => 'STR',
        'name' => 'Struga',
      ),
      68 => 
      array (
        'code' => 'STR',
        'name' => 'Strumica',
      ),
      69 => 
      array (
        'code' => 'STU',
        'name' => 'Studeničani',
      ),
      70 => 
      array (
        'code' => 'ŠUT',
        'name' => 'Šuto Orizari',
      ),
      71 => 
      array (
        'code' => 'SVE',
        'name' => 'Sveti Nikole',
      ),
      72 => 
      array (
        'code' => 'TEA',
        'name' => 'Tearce',
      ),
      73 => 
      array (
        'code' => 'TET',
        'name' => 'Tetovo',
      ),
      74 => 
      array (
        'code' => 'VAL',
        'name' => 'Valandovo',
      ),
      75 => 
      array (
        'code' => 'VAS',
        'name' => 'Vasilevo',
      ),
      76 => 
      array (
        'code' => 'VEL',
        'name' => 'Veles',
      ),
      77 => 
      array (
        'code' => 'VEV',
        'name' => 'Vevčani',
      ),
      78 => 
      array (
        'code' => 'VIN',
        'name' => 'Vinica',
      ),
      79 => 
      array (
        'code' => 'VRA',
        'name' => 'Vraneštica',
      ),
      80 => 
      array (
        'code' => 'VRA',
        'name' => 'Vrapčište',
      ),
      81 => 
      array (
        'code' => 'ZAJ',
        'name' => 'Zajas',
      ),
      82 => 
      array (
        'code' => 'ZEL',
        'name' => 'Zelenikovo',
      ),
      83 => 
      array (
        'code' => 'ŽEL',
        'name' => 'Želino',
      ),
      84 => 
      array (
        'code' => 'ZRN',
        'name' => 'Zrnovci',
      ),
    ),
    'ML' => 
    array (
      1 => 
      array (
        'code' => 'GA',
        'name' => 'Gao',
      ),
      2 => 
      array (
        'code' => 'KY',
        'name' => 'Kayes',
      ),
      3 => 
      array (
        'code' => 'KD',
        'name' => 'Kidal',
      ),
      4 => 
      array (
        'code' => 'KL',
        'name' => 'Koulikoro',
      ),
      5 => 
      array (
        'code' => 'MP',
        'name' => 'Mopti',
      ),
      6 => 
      array (
        'code' => 'SG',
        'name' => 'Segou',
      ),
      7 => 
      array (
        'code' => 'SK',
        'name' => 'Sikasso',
      ),
      8 => 
      array (
        'code' => 'TB',
        'name' => 'Tombouctou',
      ),
      9 => 
      array (
        'code' => 'CD',
        'name' => 'Bamako Capital District',
      ),
    ),
    'MM' => 
    array (
      1 => 
      array (
        'code' => 'AY',
        'name' => 'Ayeyarwady',
      ),
      2 => 
      array (
        'code' => 'BG',
        'name' => 'Bago',
      ),
      3 => 
      array (
        'code' => 'MG',
        'name' => 'Magway',
      ),
      4 => 
      array (
        'code' => 'MD',
        'name' => 'Mandalay',
      ),
      5 => 
      array (
        'code' => 'SG',
        'name' => 'Sagaing',
      ),
      6 => 
      array (
        'code' => 'TN',
        'name' => 'Tanintharyi',
      ),
      7 => 
      array (
        'code' => 'YG',
        'name' => 'Yangon',
      ),
      8 => 
      array (
        'code' => 'CH',
        'name' => 'Chin State',
      ),
      9 => 
      array (
        'code' => 'KC',
        'name' => 'Kachin State',
      ),
      10 => 
      array (
        'code' => 'KH',
        'name' => 'Kayah State',
      ),
      11 => 
      array (
        'code' => 'KN',
        'name' => 'Kayin State',
      ),
      12 => 
      array (
        'code' => 'MN',
        'name' => 'Mon State',
      ),
      13 => 
      array (
        'code' => 'RK',
        'name' => 'Rakhine State',
      ),
      14 => 
      array (
        'code' => 'SH',
        'name' => 'Shan State',
      ),
    ),
    'MN' => 
    array (
      1 => 
      array (
        'code' => '1',
        'name' => 'Ulanbaatar',
      ),
      2 => 
      array (
        'code' => '035',
        'name' => 'Orhon',
      ),
      3 => 
      array (
        'code' => '037',
        'name' => 'Darhan uul',
      ),
      4 => 
      array (
        'code' => '039',
        'name' => 'Hentiy',
      ),
      5 => 
      array (
        'code' => '041',
        'name' => 'Hovsgol',
      ),
      6 => 
      array (
        'code' => '043',
        'name' => 'Hovd',
      ),
      7 => 
      array (
        'code' => '046',
        'name' => 'Uvs',
      ),
      8 => 
      array (
        'code' => '047',
        'name' => 'Tov',
      ),
      9 => 
      array (
        'code' => '049',
        'name' => 'Selenge',
      ),
      10 => 
      array (
        'code' => '051',
        'name' => 'Suhbaatar',
      ),
      11 => 
      array (
        'code' => '053',
        'name' => 'Omnogovi',
      ),
      12 => 
      array (
        'code' => '055',
        'name' => 'Ovorhangay',
      ),
      13 => 
      array (
        'code' => '057',
        'name' => 'Dzavhan',
      ),
      14 => 
      array (
        'code' => '059',
        'name' => 'DundgovL',
      ),
      15 => 
      array (
        'code' => '061',
        'name' => 'Dornod',
      ),
      16 => 
      array (
        'code' => '063',
        'name' => 'Dornogov',
      ),
      17 => 
      array (
        'code' => '064',
        'name' => 'Govi-Sumber',
      ),
      18 => 
      array (
        'code' => '065',
        'name' => 'Govi-Altay',
      ),
      19 => 
      array (
        'code' => '067',
        'name' => 'Bulgan',
      ),
      20 => 
      array (
        'code' => '069',
        'name' => 'Bayanhongor',
      ),
      21 => 
      array (
        'code' => '071',
        'name' => 'Bayan-Olgiy',
      ),
      22 => 
      array (
        'code' => '073',
        'name' => 'Arhangay',
      ),
    ),
    'MO' => 
    array (
      1 => 
      array (
        'code' => 'OLF',
        'name' => 'Our Lady Fatima Parish',
      ),
      2 => 
      array (
        'code' => 'ANT',
        'name' => 'St. Anthony Parish',
      ),
      3 => 
      array (
        'code' => 'LAZ',
        'name' => 'St. Lazarus Parish',
      ),
      4 => 
      array (
        'code' => 'CAT',
        'name' => 'Cathedral Parish',
      ),
      5 => 
      array (
        'code' => 'LAW',
        'name' => 'St. Lawrence Parish',
      ),
    ),
    'MP' => 
    array (
      1 => 
      array (
        'code' => 'N',
        'name' => 'Northern Islands',
      ),
      2 => 
      array (
        'code' => 'R',
        'name' => 'Rota',
      ),
      3 => 
      array (
        'code' => 'S',
        'name' => 'Saipan',
      ),
      4 => 
      array (
        'code' => 'T',
        'name' => 'Tinian',
      ),
    ),
    'MQ' => 
    array (
      1 => 
      array (
        'code' => 'LAJ',
        'name' => 'L\'Ajoupa-Bouillon',
      ),
      2 => 
      array (
        'code' => 'LES',
        'name' => 'Les Anses-d\'Arlet',
      ),
      3 => 
      array (
        'code' => 'BAS',
        'name' => 'Basse-Pointe',
      ),
      4 => 
      array (
        'code' => 'BEL',
        'name' => 'Bellefontaine',
      ),
      5 => 
      array (
        'code' => 'LE',
        'name' => 'Le Carbet',
      ),
      6 => 
      array (
        'code' => 'CAS',
        'name' => 'Case-Pilote',
      ),
      7 => 
      array (
        'code' => 'LE',
        'name' => 'Le Diamant',
      ),
      8 => 
      array (
        'code' => 'DUC',
        'name' => 'Ducos',
      ),
      9 => 
      array (
        'code' => 'FON',
        'name' => 'Fonds-Saint-Denis',
      ),
      10 => 
      array (
        'code' => 'FOR',
        'name' => 'Fort-De-France',
      ),
      11 => 
      array (
        'code' => 'LE',
        'name' => 'Le François',
      ),
      12 => 
      array (
        'code' => 'GRA',
        'name' => 'Grand\'Rivière',
      ),
      13 => 
      array (
        'code' => 'GRO',
        'name' => 'Gros-Morne',
      ),
      14 => 
      array (
        'code' => 'LE',
        'name' => 'Le Lamentin',
      ),
      15 => 
      array (
        'code' => 'LE',
        'name' => 'Le Lorrain',
      ),
      16 => 
      array (
        'code' => 'MAC',
        'name' => 'Macouba',
      ),
      17 => 
      array (
        'code' => 'LE',
        'name' => 'Le Marigot',
      ),
      18 => 
      array (
        'code' => 'LE',
        'name' => 'Le Marin',
      ),
      19 => 
      array (
        'code' => 'LE',
        'name' => 'Le Morne-Rouge',
      ),
      20 => 
      array (
        'code' => 'LE',
        'name' => 'Le Morne-Vert',
      ),
      21 => 
      array (
        'code' => 'LE',
        'name' => 'Le Prêcheur',
      ),
      22 => 
      array (
        'code' => 'RIV',
        'name' => 'Rivière-Pilote',
      ),
      23 => 
      array (
        'code' => 'RIV',
        'name' => 'Rivière-Salée',
      ),
      24 => 
      array (
        'code' => 'LE',
        'name' => 'Le Robert',
      ),
      25 => 
      array (
        'code' => 'SAI',
        'name' => 'Sainte-Anne',
      ),
      26 => 
      array (
        'code' => 'SAI',
        'name' => 'Sainte-Luce',
      ),
      27 => 
      array (
        'code' => 'SAI',
        'name' => 'Sainte-Marie',
      ),
      28 => 
      array (
        'code' => 'SAI',
        'name' => 'Saint-Esprit',
      ),
      29 => 
      array (
        'code' => 'SAI',
        'name' => 'Saint-Joseph',
      ),
      30 => 
      array (
        'code' => 'SAI',
        'name' => 'Saint-Pierre',
      ),
      31 => 
      array (
        'code' => 'SCH',
        'name' => 'Schœlcher',
      ),
      32 => 
      array (
        'code' => 'LA',
        'name' => 'La Trinité',
      ),
      33 => 
      array (
        'code' => 'LES',
        'name' => 'Les Trois-Îlets',
      ),
      34 => 
      array (
        'code' => 'LE',
        'name' => 'Le Vauclin',
      ),
    ),
    'MR' => 
    array (
      1 => 
      array (
        'code' => 'AD',
        'name' => 'Adrar',
      ),
      2 => 
      array (
        'code' => 'AS',
        'name' => 'Assaba',
      ),
      3 => 
      array (
        'code' => 'BR',
        'name' => 'Brakna',
      ),
      4 => 
      array (
        'code' => 'DN',
        'name' => 'Dakhlet Nouadhibou',
      ),
      5 => 
      array (
        'code' => 'GO',
        'name' => 'Gorgol',
      ),
      6 => 
      array (
        'code' => 'GM',
        'name' => 'Guidimaka',
      ),
      7 => 
      array (
        'code' => 'HC',
        'name' => 'Hodh Ech Chargui',
      ),
      8 => 
      array (
        'code' => 'HG',
        'name' => 'Hodh El Gharbi',
      ),
      9 => 
      array (
        'code' => 'IN',
        'name' => 'Inchiri',
      ),
      10 => 
      array (
        'code' => 'TA',
        'name' => 'Tagant',
      ),
      11 => 
      array (
        'code' => 'TZ',
        'name' => 'Tiris Zemmour',
      ),
      12 => 
      array (
        'code' => 'TR',
        'name' => 'Trarza',
      ),
      13 => 
      array (
        'code' => 'NO',
        'name' => 'Nouakchott',
      ),
    ),
    'MS' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'Saint Anthony',
      ),
      2 => 
      array (
        'code' => 'G',
        'name' => 'Saint Georges',
      ),
      3 => 
      array (
        'code' => 'P',
        'name' => 'Saint Peter',
      ),
    ),
    'MT' => 
    array (
      1 => 
      array (
        'code' => 'ATT',
        'name' => 'Attard',
      ),
      2 => 
      array (
        'code' => 'BAL',
        'name' => 'Balzan',
      ),
      3 => 
      array (
        'code' => 'BGU',
        'name' => 'Birgu',
      ),
      4 => 
      array (
        'code' => 'BKK',
        'name' => 'Birkirkara',
      ),
      5 => 
      array (
        'code' => 'BRZ',
        'name' => 'Birzebbuga',
      ),
      6 => 
      array (
        'code' => 'BOR',
        'name' => 'Bormla',
      ),
      7 => 
      array (
        'code' => 'DIN',
        'name' => 'Dingli',
      ),
      8 => 
      array (
        'code' => 'FGU',
        'name' => 'Fgura',
      ),
      9 => 
      array (
        'code' => 'FLO',
        'name' => 'Floriana',
      ),
      10 => 
      array (
        'code' => 'GDJ',
        'name' => 'Gudja',
      ),
      11 => 
      array (
        'code' => 'GZR',
        'name' => 'Gzira',
      ),
      12 => 
      array (
        'code' => 'GRG',
        'name' => 'Gargur',
      ),
      13 => 
      array (
        'code' => 'GXQ',
        'name' => 'Gaxaq',
      ),
      14 => 
      array (
        'code' => 'HMR',
        'name' => 'Hamrun',
      ),
      15 => 
      array (
        'code' => 'IKL',
        'name' => 'Iklin',
      ),
      16 => 
      array (
        'code' => 'ISL',
        'name' => 'Isla',
      ),
      17 => 
      array (
        'code' => 'KLK',
        'name' => 'Kalkara',
      ),
      18 => 
      array (
        'code' => 'KRK',
        'name' => 'Kirkop',
      ),
      19 => 
      array (
        'code' => 'LIJ',
        'name' => 'Lija',
      ),
      20 => 
      array (
        'code' => 'LUQ',
        'name' => 'Luqa',
      ),
      21 => 
      array (
        'code' => 'MRS',
        'name' => 'Marsa',
      ),
      22 => 
      array (
        'code' => 'MKL',
        'name' => 'Marsaskala',
      ),
      23 => 
      array (
        'code' => 'MXL',
        'name' => 'Marsaxlokk',
      ),
      24 => 
      array (
        'code' => 'MDN',
        'name' => 'Mdina',
      ),
      25 => 
      array (
        'code' => 'MEL',
        'name' => 'Melliea',
      ),
      26 => 
      array (
        'code' => 'MGR',
        'name' => 'Mgarr',
      ),
      27 => 
      array (
        'code' => 'MST',
        'name' => 'Mosta',
      ),
      28 => 
      array (
        'code' => 'MQA',
        'name' => 'Mqabba',
      ),
      29 => 
      array (
        'code' => 'MSI',
        'name' => 'Msida',
      ),
      30 => 
      array (
        'code' => 'MTF',
        'name' => 'Mtarfa',
      ),
      31 => 
      array (
        'code' => 'NAX',
        'name' => 'Naxxar',
      ),
      32 => 
      array (
        'code' => 'PAO',
        'name' => 'Paola',
      ),
      33 => 
      array (
        'code' => 'PEM',
        'name' => 'Pembroke',
      ),
      34 => 
      array (
        'code' => 'PIE',
        'name' => 'Pieta',
      ),
      35 => 
      array (
        'code' => 'QOR',
        'name' => 'Qormi',
      ),
      36 => 
      array (
        'code' => 'QRE',
        'name' => 'Qrendi',
      ),
      37 => 
      array (
        'code' => 'RAB',
        'name' => 'Rabat',
      ),
      38 => 
      array (
        'code' => 'SAF',
        'name' => 'Safi',
      ),
      39 => 
      array (
        'code' => 'SGI',
        'name' => 'San Giljan',
      ),
      40 => 
      array (
        'code' => 'SLU',
        'name' => 'Santa Lucija',
      ),
      41 => 
      array (
        'code' => 'SPB',
        'name' => 'San Pawl il-Bahar',
      ),
      42 => 
      array (
        'code' => 'SGW',
        'name' => 'San Gwann',
      ),
      43 => 
      array (
        'code' => 'SVE',
        'name' => 'Santa Venera',
      ),
      44 => 
      array (
        'code' => 'SIG',
        'name' => 'Siggiewi',
      ),
      45 => 
      array (
        'code' => 'SLM',
        'name' => 'Sliema',
      ),
      46 => 
      array (
        'code' => 'SWQ',
        'name' => 'Swieqi',
      ),
      47 => 
      array (
        'code' => 'TXB',
        'name' => 'Ta Xbiex',
      ),
      48 => 
      array (
        'code' => 'TRX',
        'name' => 'Tarxien',
      ),
      49 => 
      array (
        'code' => 'VLT',
        'name' => 'Valletta',
      ),
      50 => 
      array (
        'code' => 'XGJ',
        'name' => 'Xgajra',
      ),
      51 => 
      array (
        'code' => 'ZBR',
        'name' => 'Zabbar',
      ),
      52 => 
      array (
        'code' => 'ZBG',
        'name' => 'Zebbug',
      ),
      53 => 
      array (
        'code' => 'ZJT',
        'name' => 'Zejtun',
      ),
      54 => 
      array (
        'code' => 'ZRQ',
        'name' => 'Zurrieq',
      ),
      55 => 
      array (
        'code' => 'FNT',
        'name' => 'Fontana',
      ),
      56 => 
      array (
        'code' => 'GHJ',
        'name' => 'Ghajnsielem',
      ),
      57 => 
      array (
        'code' => 'GHR',
        'name' => 'Gharb',
      ),
      58 => 
      array (
        'code' => 'GHS',
        'name' => 'Ghasri',
      ),
      59 => 
      array (
        'code' => 'KRC',
        'name' => 'Kercem',
      ),
      60 => 
      array (
        'code' => 'MUN',
        'name' => 'Munxar',
      ),
      61 => 
      array (
        'code' => 'NAD',
        'name' => 'Nadur',
      ),
      62 => 
      array (
        'code' => 'QAL',
        'name' => 'Qala',
      ),
      63 => 
      array (
        'code' => 'VIC',
        'name' => 'Victoria',
      ),
      64 => 
      array (
        'code' => 'SLA',
        'name' => 'San Lawrenz',
      ),
      65 => 
      array (
        'code' => 'SNT',
        'name' => 'Sannat',
      ),
      66 => 
      array (
        'code' => 'ZAG',
        'name' => 'Xagra',
      ),
      67 => 
      array (
        'code' => 'XEW',
        'name' => 'Xewkija',
      ),
      68 => 
      array (
        'code' => 'ZEB',
        'name' => 'Zebbug',
      ),
    ),
    'MU' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'Agalega Islands',
      ),
      2 => 
      array (
        'code' => 'BL',
        'name' => 'Black River',
      ),
      3 => 
      array (
        'code' => 'BR',
        'name' => 'Beau Bassin-Rose Hill',
      ),
      4 => 
      array (
        'code' => 'CC',
        'name' => 'Cargados Carajos Shoals (Saint B)',
      ),
      5 => 
      array (
        'code' => 'CU',
        'name' => 'Curepipe',
      ),
      6 => 
      array (
        'code' => 'FL',
        'name' => 'Flacq',
      ),
      7 => 
      array (
        'code' => 'GP',
        'name' => 'Grand Port',
      ),
      8 => 
      array (
        'code' => 'MO',
        'name' => 'Moka',
      ),
      9 => 
      array (
        'code' => 'PA',
        'name' => 'Pamplemousses',
      ),
      10 => 
      array (
        'code' => 'PL',
        'name' => 'Port Louis',
      ),
      11 => 
      array (
        'code' => 'PU',
        'name' => 'Port Louis',
      ),
      12 => 
      array (
        'code' => 'PW',
        'name' => 'Plaines Wilhems',
      ),
      13 => 
      array (
        'code' => 'QB',
        'name' => 'Quatre Bornes',
      ),
      14 => 
      array (
        'code' => 'RO',
        'name' => 'Rodrigues',
      ),
      15 => 
      array (
        'code' => 'RR',
        'name' => 'Riviere du Rempart',
      ),
      16 => 
      array (
        'code' => 'SA',
        'name' => 'Savanne',
      ),
      17 => 
      array (
        'code' => 'VP',
        'name' => 'Vacoas-Phoenix',
      ),
    ),
    'MV' => 
    array (
      1 => 
      array (
        'code' => 'AAD',
        'name' => 'Ari Atoll Dheknu',
      ),
      2 => 
      array (
        'code' => 'AAU',
        'name' => 'Ari Atoll Uthuru',
      ),
      3 => 
      array (
        'code' => 'ADD',
        'name' => 'Addu',
      ),
      4 => 
      array (
        'code' => 'FAA',
        'name' => 'Faadhippolhu',
      ),
      5 => 
      array (
        'code' => 'FEA',
        'name' => 'Felidhe Atoll',
      ),
      6 => 
      array (
        'code' => 'FMU',
        'name' => 'Fua Mulaku',
      ),
      7 => 
      array (
        'code' => 'HAD',
        'name' => 'Huvadhu Atoll Dhekunu',
      ),
      8 => 
      array (
        'code' => 'HAU',
        'name' => 'Huvadhu Atoll Uthuru',
      ),
      9 => 
      array (
        'code' => 'HDH',
        'name' => 'Hadhdhunmathi',
      ),
      10 => 
      array (
        'code' => 'KLH',
        'name' => 'Kolhumadulu',
      ),
      11 => 
      array (
        'code' => 'MAA',
        'name' => 'Male Atoll',
      ),
      12 => 
      array (
        'code' => 'MAD',
        'name' => 'Maalhosmadulu Dhekunu',
      ),
      13 => 
      array (
        'code' => 'MAU',
        'name' => 'Maalhosmadulu Uthuru',
      ),
      14 => 
      array (
        'code' => 'MLD',
        'name' => 'Miladhunmadulu Dhekunu',
      ),
      15 => 
      array (
        'code' => 'MLU',
        'name' => 'Miladhunmadulu Uthuru',
      ),
      16 => 
      array (
        'code' => 'MUA',
        'name' => 'Mulaku Atoll',
      ),
      17 => 
      array (
        'code' => 'NAD',
        'name' => 'Nilandhe Atoll Dhekunu',
      ),
      18 => 
      array (
        'code' => 'NAU',
        'name' => 'Nilandhe Atoll Uthuru',
      ),
      19 => 
      array (
        'code' => 'THD',
        'name' => 'Thiladhunmathi Dhekunu',
      ),
      20 => 
      array (
        'code' => 'THU',
        'name' => 'Thiladhunmathi Uthuru',
      ),
    ),
    'MW' => 
    array (
      1 => 
      array (
        'code' => 'BLK',
        'name' => 'Balaka',
      ),
      2 => 
      array (
        'code' => 'BLT',
        'name' => 'Blantyre',
      ),
      3 => 
      array (
        'code' => 'CKW',
        'name' => 'Chikwawa',
      ),
      4 => 
      array (
        'code' => 'CRD',
        'name' => 'Chiradzulu',
      ),
      5 => 
      array (
        'code' => 'CTP',
        'name' => 'Chitipa',
      ),
      6 => 
      array (
        'code' => 'DDZ',
        'name' => 'Dedza',
      ),
      7 => 
      array (
        'code' => 'DWA',
        'name' => 'Dowa',
      ),
      8 => 
      array (
        'code' => 'KRG',
        'name' => 'Karonga',
      ),
      9 => 
      array (
        'code' => 'KSG',
        'name' => 'Kasungu',
      ),
      10 => 
      array (
        'code' => 'LKM',
        'name' => 'Likoma',
      ),
      11 => 
      array (
        'code' => 'LLG',
        'name' => 'Lilongwe',
      ),
      12 => 
      array (
        'code' => 'MCG',
        'name' => 'Machinga',
      ),
      13 => 
      array (
        'code' => 'MGC',
        'name' => 'Mangochi',
      ),
      14 => 
      array (
        'code' => 'MCH',
        'name' => 'Mchinji',
      ),
      15 => 
      array (
        'code' => 'MLJ',
        'name' => 'Mulanje',
      ),
      16 => 
      array (
        'code' => 'MWZ',
        'name' => 'Mwanza',
      ),
      17 => 
      array (
        'code' => 'MZM',
        'name' => 'Mzimba',
      ),
      18 => 
      array (
        'code' => 'NTU',
        'name' => 'Ntcheu',
      ),
      19 => 
      array (
        'code' => 'NKB',
        'name' => 'Nkhata Bay',
      ),
      20 => 
      array (
        'code' => 'NKH',
        'name' => 'Nkhotakota',
      ),
      21 => 
      array (
        'code' => 'NSJ',
        'name' => 'Nsanje',
      ),
      22 => 
      array (
        'code' => 'NTI',
        'name' => 'Ntchisi',
      ),
      23 => 
      array (
        'code' => 'PHL',
        'name' => 'Phalombe',
      ),
      24 => 
      array (
        'code' => 'RMP',
        'name' => 'Rumphi',
      ),
      25 => 
      array (
        'code' => 'SLM',
        'name' => 'Salima',
      ),
      26 => 
      array (
        'code' => 'THY',
        'name' => 'Thyolo',
      ),
      27 => 
      array (
        'code' => 'ZBA',
        'name' => 'Zomba',
      ),
    ),
    'MX' => 
    array (
      1 => 
      array (
        'code' => 'AGU',
        'name' => 'Aguascalientes',
      ),
      2 => 
      array (
        'code' => 'BCN',
        'name' => 'Baja California Norte',
      ),
      3 => 
      array (
        'code' => 'BCS',
        'name' => 'Baja California Sur',
      ),
      4 => 
      array (
        'code' => 'CAM',
        'name' => 'Campeche',
      ),
      5 => 
      array (
        'code' => 'CHP',
        'name' => 'Chiapas',
      ),
      6 => 
      array (
        'code' => 'CHH',
        'name' => 'Chihuahua',
      ),
      7 => 
      array (
        'code' => 'COA',
        'name' => 'Coahuila de Zaragoza',
      ),
      8 => 
      array (
        'code' => 'COL',
        'name' => 'Colima',
      ),
      9 => 
      array (
        'code' => 'DIF',
        'name' => 'Distrito Federal',
      ),
      10 => 
      array (
        'code' => 'DUR',
        'name' => 'Durango',
      ),
      11 => 
      array (
        'code' => 'GUA',
        'name' => 'Guanajuato',
      ),
      12 => 
      array (
        'code' => 'GRO',
        'name' => 'Guerrero',
      ),
      13 => 
      array (
        'code' => 'HID',
        'name' => 'Hidalgo',
      ),
      14 => 
      array (
        'code' => 'JAL',
        'name' => 'Jalisco',
      ),
      15 => 
      array (
        'code' => 'MEX',
        'name' => 'Mexico',
      ),
      16 => 
      array (
        'code' => 'MIC',
        'name' => 'Michoacan de Ocampo',
      ),
      17 => 
      array (
        'code' => 'MOR',
        'name' => 'Morelos',
      ),
      18 => 
      array (
        'code' => 'NAY',
        'name' => 'Nayarit',
      ),
      19 => 
      array (
        'code' => 'NLE',
        'name' => 'Nuevo Leon',
      ),
      20 => 
      array (
        'code' => 'OAX',
        'name' => 'Oaxaca',
      ),
      21 => 
      array (
        'code' => 'PUE',
        'name' => 'Puebla',
      ),
      22 => 
      array (
        'code' => 'QUE',
        'name' => 'Queretaro de Arteaga',
      ),
      23 => 
      array (
        'code' => 'ROO',
        'name' => 'Quintana Roo',
      ),
      24 => 
      array (
        'code' => 'SLP',
        'name' => 'San Luis Potosi',
      ),
      25 => 
      array (
        'code' => 'SIN',
        'name' => 'Sinaloa',
      ),
      26 => 
      array (
        'code' => 'SON',
        'name' => 'Sonora',
      ),
      27 => 
      array (
        'code' => 'TAB',
        'name' => 'Tabasco',
      ),
      28 => 
      array (
        'code' => 'TAM',
        'name' => 'Tamaulipas',
      ),
      29 => 
      array (
        'code' => 'TLA',
        'name' => 'Tlaxcala',
      ),
      30 => 
      array (
        'code' => 'VER',
        'name' => 'Veracruz-Llave',
      ),
      31 => 
      array (
        'code' => 'YUC',
        'name' => 'Yucatan',
      ),
      32 => 
      array (
        'code' => 'ZAC',
        'name' => 'Zacatecas',
      ),
    ),
    'MY' => 
    array (
      1 => 
      array (
        'code' => 'Johor',
        'name' => 'Johor',
      ),
      2 => 
      array (
        'code' => 'Kedah',
        'name' => 'Kedah',
      ),
      3 => 
      array (
        'code' => 'Kelantan',
        'name' => 'Kelantan',
      ),
      4 => 
      array (
        'code' => 'Labuan',
        'name' => 'Labuan',
      ),
      5 => 
      array (
        'code' => 'Melaka',
        'name' => 'Melaka',
      ),
      6 => 
      array (
        'code' => 'Negeri Sembilan',
        'name' => 'Negeri Sembilan',
      ),
      7 => 
      array (
        'code' => 'Pahang',
        'name' => 'Pahang',
      ),
      8 => 
      array (
        'code' => 'Perak',
        'name' => 'Perak',
      ),
      9 => 
      array (
        'code' => 'Perlis',
        'name' => 'Perlis',
      ),
      10 => 
      array (
        'code' => 'Pulau Pinang',
        'name' => 'Pulau Pinang',
      ),
      11 => 
      array (
        'code' => 'Sabah',
        'name' => 'Sabah',
      ),
      12 => 
      array (
        'code' => 'Sarawak',
        'name' => 'Sarawak',
      ),
      13 => 
      array (
        'code' => 'Selangor',
        'name' => 'Selangor',
      ),
      14 => 
      array (
        'code' => 'Terengganu',
        'name' => 'Terengganu',
      ),
      15 => 
      array (
        'code' => 'Kuala Lumpur',
        'name' => 'Kuala Lumpur',
      ),
    ),
    'MZ' => 
    array (
      1 => 
      array (
        'code' => 'CD',
        'name' => 'Cabo Delgado',
      ),
      2 => 
      array (
        'code' => 'GZ',
        'name' => 'Gaza',
      ),
      3 => 
      array (
        'code' => 'IN',
        'name' => 'Inhambane',
      ),
      4 => 
      array (
        'code' => 'MN',
        'name' => 'Manica',
      ),
      5 => 
      array (
        'code' => 'MC',
        'name' => 'Maputo (city)',
      ),
      6 => 
      array (
        'code' => 'MP',
        'name' => 'Maputo',
      ),
      7 => 
      array (
        'code' => 'NA',
        'name' => 'Nampula',
      ),
      8 => 
      array (
        'code' => 'NI',
        'name' => 'Niassa',
      ),
      9 => 
      array (
        'code' => 'SO',
        'name' => 'Sofala',
      ),
      10 => 
      array (
        'code' => 'TE',
        'name' => 'Tete',
      ),
      11 => 
      array (
        'code' => 'ZA',
        'name' => 'Zambezia',
      ),
    ),
    'NA' => 
    array (
      1 => 
      array (
        'code' => 'CA',
        'name' => 'Caprivi',
      ),
      2 => 
      array (
        'code' => 'ER',
        'name' => 'Erongo',
      ),
      3 => 
      array (
        'code' => 'HA',
        'name' => 'Hardap',
      ),
      4 => 
      array (
        'code' => 'KR',
        'name' => 'Karas',
      ),
      5 => 
      array (
        'code' => 'KV',
        'name' => 'Kavango',
      ),
      6 => 
      array (
        'code' => 'KH',
        'name' => 'Khomas',
      ),
      7 => 
      array (
        'code' => 'KU',
        'name' => 'Kunene',
      ),
      8 => 
      array (
        'code' => 'OW',
        'name' => 'Ohangwena',
      ),
      9 => 
      array (
        'code' => 'OK',
        'name' => 'Omaheke',
      ),
      10 => 
      array (
        'code' => 'OT',
        'name' => 'Omusati',
      ),
      11 => 
      array (
        'code' => 'ON',
        'name' => 'Oshana',
      ),
      12 => 
      array (
        'code' => 'OO',
        'name' => 'Oshikoto',
      ),
      13 => 
      array (
        'code' => 'OJ',
        'name' => 'Otjozondjupa',
      ),
    ),
    'NC' => 
    array (
      1 => 
      array (
        'code' => 'L',
        'name' => 'Iles Loyaute',
      ),
      2 => 
      array (
        'code' => 'N',
        'name' => 'Nord',
      ),
      3 => 
      array (
        'code' => 'S',
        'name' => 'Sud',
      ),
    ),
    'NE' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'Agadez',
      ),
      2 => 
      array (
        'code' => 'DF',
        'name' => 'Diffa',
      ),
      3 => 
      array (
        'code' => 'DS',
        'name' => 'Dosso',
      ),
      4 => 
      array (
        'code' => 'MA',
        'name' => 'Maradi',
      ),
      5 => 
      array (
        'code' => 'NM',
        'name' => 'Niamey',
      ),
      6 => 
      array (
        'code' => 'TH',
        'name' => 'Tahoua',
      ),
      7 => 
      array (
        'code' => 'TL',
        'name' => 'Tillaberi',
      ),
      8 => 
      array (
        'code' => 'ZD',
        'name' => 'Zinder',
      ),
    ),
    'NF' => 
    array (
      1 => 
      array (
        'code' => 'NOR',
        'name' => 'Norfolk Island',
      ),
    ),
    'NG' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Abia',
      ),
      2 => 
      array (
        'code' => 'CT',
        'name' => 'Abuja Federal Capital Territory',
      ),
      3 => 
      array (
        'code' => 'AD',
        'name' => 'Adamawa',
      ),
      4 => 
      array (
        'code' => 'AK',
        'name' => 'Akwa Ibom',
      ),
      5 => 
      array (
        'code' => 'AN',
        'name' => 'Anambra',
      ),
      6 => 
      array (
        'code' => 'BC',
        'name' => 'Bauchi',
      ),
      7 => 
      array (
        'code' => 'BY',
        'name' => 'Bayelsa',
      ),
      8 => 
      array (
        'code' => 'BN',
        'name' => 'Benue',
      ),
      9 => 
      array (
        'code' => 'BO',
        'name' => 'Borno',
      ),
      10 => 
      array (
        'code' => 'CR',
        'name' => 'Cross River',
      ),
      11 => 
      array (
        'code' => 'DE',
        'name' => 'Delta',
      ),
      12 => 
      array (
        'code' => 'EB',
        'name' => 'Ebonyi',
      ),
      13 => 
      array (
        'code' => 'ED',
        'name' => 'Edo',
      ),
      14 => 
      array (
        'code' => 'EK',
        'name' => 'Ekiti',
      ),
      15 => 
      array (
        'code' => 'EN',
        'name' => 'Enugu',
      ),
      16 => 
      array (
        'code' => 'GO',
        'name' => 'Gombe',
      ),
      17 => 
      array (
        'code' => 'IM',
        'name' => 'Imo',
      ),
      18 => 
      array (
        'code' => 'JI',
        'name' => 'Jigawa',
      ),
      19 => 
      array (
        'code' => 'KD',
        'name' => 'Kaduna',
      ),
      20 => 
      array (
        'code' => 'KN',
        'name' => 'Kano',
      ),
      21 => 
      array (
        'code' => 'KT',
        'name' => 'Katsina',
      ),
      22 => 
      array (
        'code' => 'KE',
        'name' => 'Kebbi',
      ),
      23 => 
      array (
        'code' => 'KO',
        'name' => 'Kogi',
      ),
      24 => 
      array (
        'code' => 'KW',
        'name' => 'Kwara',
      ),
      25 => 
      array (
        'code' => 'LA',
        'name' => 'Lagos',
      ),
      26 => 
      array (
        'code' => 'NA',
        'name' => 'Nassarawa',
      ),
      27 => 
      array (
        'code' => 'NI',
        'name' => 'Niger',
      ),
      28 => 
      array (
        'code' => 'OG',
        'name' => 'Ogun',
      ),
      29 => 
      array (
        'code' => 'ONG',
        'name' => 'Ondo',
      ),
      30 => 
      array (
        'code' => 'OS',
        'name' => 'Osun',
      ),
      31 => 
      array (
        'code' => 'OY',
        'name' => 'Oyo',
      ),
      32 => 
      array (
        'code' => 'PL',
        'name' => 'Plateau',
      ),
      33 => 
      array (
        'code' => 'RI',
        'name' => 'Rivers',
      ),
      34 => 
      array (
        'code' => 'SO',
        'name' => 'Sokoto',
      ),
      35 => 
      array (
        'code' => 'TA',
        'name' => 'Taraba',
      ),
      36 => 
      array (
        'code' => 'YO',
        'name' => 'Yobe',
      ),
      37 => 
      array (
        'code' => 'ZA',
        'name' => 'Zamfara',
      ),
    ),
    'NI' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Atlantico Norte',
      ),
      2 => 
      array (
        'code' => 'AS',
        'name' => 'Atlantico Sur',
      ),
      3 => 
      array (
        'code' => 'BO',
        'name' => 'Boaco',
      ),
      4 => 
      array (
        'code' => 'CA',
        'name' => 'Carazo',
      ),
      5 => 
      array (
        'code' => 'CI',
        'name' => 'Chinandega',
      ),
      6 => 
      array (
        'code' => 'CO',
        'name' => 'Chontales',
      ),
      7 => 
      array (
        'code' => 'ES',
        'name' => 'Esteli',
      ),
      8 => 
      array (
        'code' => 'GR',
        'name' => 'Granada',
      ),
      9 => 
      array (
        'code' => 'JI',
        'name' => 'Jinotega',
      ),
      10 => 
      array (
        'code' => 'LE',
        'name' => 'Leon',
      ),
      11 => 
      array (
        'code' => 'MD',
        'name' => 'Madriz',
      ),
      12 => 
      array (
        'code' => 'MN',
        'name' => 'Managua',
      ),
      13 => 
      array (
        'code' => 'MS',
        'name' => 'Masaya',
      ),
      14 => 
      array (
        'code' => 'MT',
        'name' => 'Matagalpa',
      ),
      15 => 
      array (
        'code' => 'NS',
        'name' => 'Nuevo Segovia',
      ),
      16 => 
      array (
        'code' => 'RS',
        'name' => 'Rio San Juan',
      ),
      17 => 
      array (
        'code' => 'RI',
        'name' => 'Rivas',
      ),
    ),
    'NL' => 
    array (
      1 => 
      array (
        'code' => 'DR',
        'name' => 'Drenthe',
      ),
      2 => 
      array (
        'code' => 'FL',
        'name' => 'Flevoland',
      ),
      3 => 
      array (
        'code' => 'FR',
        'name' => 'Friesland',
      ),
      4 => 
      array (
        'code' => 'GE',
        'name' => 'Gelderland',
      ),
      5 => 
      array (
        'code' => 'GR',
        'name' => 'Groningen',
      ),
      6 => 
      array (
        'code' => 'LI',
        'name' => 'Limburg',
      ),
      7 => 
      array (
        'code' => 'NB',
        'name' => 'Noord Brabant',
      ),
      8 => 
      array (
        'code' => 'NH',
        'name' => 'Noord Holland',
      ),
      9 => 
      array (
        'code' => 'OV',
        'name' => 'Overijssel',
      ),
      10 => 
      array (
        'code' => 'UT',
        'name' => 'Utrecht',
      ),
      11 => 
      array (
        'code' => 'ZE',
        'name' => 'Zeeland',
      ),
      12 => 
      array (
        'code' => 'ZH',
        'name' => 'Zuid Holland',
      ),
    ),
    'NO' => 
    array (
      1 => 
      array (
        'code' => 'AK',
        'name' => 'Akershus',
      ),
      2 => 
      array (
        'code' => 'AA',
        'name' => 'Aust-Agder',
      ),
      3 => 
      array (
        'code' => 'BU',
        'name' => 'Buskerud',
      ),
      4 => 
      array (
        'code' => 'FM',
        'name' => 'Finnmark',
      ),
      5 => 
      array (
        'code' => 'HM',
        'name' => 'Hedmark',
      ),
      6 => 
      array (
        'code' => 'HL',
        'name' => 'Hordaland',
      ),
      7 => 
      array (
        'code' => 'MR',
        'name' => 'Møre og Romsdal',
      ),
      8 => 
      array (
        'code' => 'NL',
        'name' => 'Nordland',
      ),
      9 => 
      array (
        'code' => 'NT',
        'name' => 'Nord-Trøndelag',
      ),
      10 => 
      array (
        'code' => 'OP',
        'name' => 'Oppland',
      ),
      11 => 
      array (
        'code' => 'OL',
        'name' => 'Oslo',
      ),
      12 => 
      array (
        'code' => 'RL',
        'name' => 'Rogaland',
      ),
      13 => 
      array (
        'code' => 'SJ',
        'name' => 'Sogn og Fjordane',
      ),
      14 => 
      array (
        'code' => 'ST',
        'name' => 'Sør-Trøndelag',
      ),
      15 => 
      array (
        'code' => 'SV',
        'name' => 'Svalbard',
      ),
      16 => 
      array (
        'code' => 'TM',
        'name' => 'Telemark',
      ),
      17 => 
      array (
        'code' => 'TR',
        'name' => 'Troms',
      ),
      18 => 
      array (
        'code' => 'VA',
        'name' => 'Vest-Agder',
      ),
      19 => 
      array (
        'code' => 'VF',
        'name' => 'Vestfold',
      ),
      20 => 
      array (
        'code' => 'OF',
        'name' => 'Østfold',
      ),
    ),
    'NP' => 
    array (
      1 => 
      array (
        'code' => 'BA',
        'name' => 'Bagmati',
      ),
      2 => 
      array (
        'code' => 'BH',
        'name' => 'Bheri',
      ),
      3 => 
      array (
        'code' => 'DH',
        'name' => 'Dhawalagiri',
      ),
      4 => 
      array (
        'code' => 'GA',
        'name' => 'Gandaki',
      ),
      5 => 
      array (
        'code' => 'JA',
        'name' => 'Janakpur',
      ),
      6 => 
      array (
        'code' => 'KA',
        'name' => 'Karnali',
      ),
      7 => 
      array (
        'code' => 'KO',
        'name' => 'Kosi',
      ),
      8 => 
      array (
        'code' => 'LU',
        'name' => 'Lumbini',
      ),
      9 => 
      array (
        'code' => 'MA',
        'name' => 'Mahakali',
      ),
      10 => 
      array (
        'code' => 'ME',
        'name' => 'Mechi',
      ),
      11 => 
      array (
        'code' => 'NA',
        'name' => 'Narayani',
      ),
      12 => 
      array (
        'code' => 'RA',
        'name' => 'Rapti',
      ),
      13 => 
      array (
        'code' => 'SA',
        'name' => 'Sagarmatha',
      ),
      14 => 
      array (
        'code' => 'SE',
        'name' => 'Seti',
      ),
    ),
    'NR' => 
    array (
      1 => 
      array (
        'code' => 'AO',
        'name' => 'Aiwo',
      ),
      2 => 
      array (
        'code' => 'AA',
        'name' => 'Anabar',
      ),
      3 => 
      array (
        'code' => 'AT',
        'name' => 'Anetan',
      ),
      4 => 
      array (
        'code' => 'AI',
        'name' => 'Anibare',
      ),
      5 => 
      array (
        'code' => 'BA',
        'name' => 'Baiti',
      ),
      6 => 
      array (
        'code' => 'BO',
        'name' => 'Boe',
      ),
      7 => 
      array (
        'code' => 'BU',
        'name' => 'Buada',
      ),
      8 => 
      array (
        'code' => 'DE',
        'name' => 'Denigomodu',
      ),
      9 => 
      array (
        'code' => 'EW',
        'name' => 'Ewa',
      ),
      10 => 
      array (
        'code' => 'IJ',
        'name' => 'Ijuw',
      ),
      11 => 
      array (
        'code' => 'ME',
        'name' => 'Meneng',
      ),
      12 => 
      array (
        'code' => 'NI',
        'name' => 'Nibok',
      ),
      13 => 
      array (
        'code' => 'UA',
        'name' => 'Uaboe',
      ),
      14 => 
      array (
        'code' => 'YA',
        'name' => 'Yaren',
      ),
    ),
    'NU' => 
    array (
      1 => 
      array (
        'code' => 'MAK',
        'name' => 'Makefu',
      ),
      2 => 
      array (
        'code' => 'TUA',
        'name' => 'Tuapa',
      ),
      3 => 
      array (
        'code' => 'NAM',
        'name' => 'Namukulu',
      ),
      4 => 
      array (
        'code' => 'HIK',
        'name' => 'Hikutavake',
      ),
      5 => 
      array (
        'code' => 'TOI',
        'name' => 'Toi',
      ),
      6 => 
      array (
        'code' => 'MUT',
        'name' => 'Mutalau',
      ),
      7 => 
      array (
        'code' => 'LAK',
        'name' => 'Lakepa',
      ),
      8 => 
      array (
        'code' => 'LIK',
        'name' => 'Liku',
      ),
      9 => 
      array (
        'code' => 'HAK',
        'name' => 'Hakupu',
      ),
      10 => 
      array (
        'code' => 'VAI',
        'name' => 'Vaiea',
      ),
      11 => 
      array (
        'code' => 'AVA',
        'name' => 'Avatele',
      ),
      12 => 
      array (
        'code' => 'TAM',
        'name' => 'Tamakautoga',
      ),
      13 => 
      array (
        'code' => 'ALO',
        'name' => 'Alofi South',
      ),
      14 => 
      array (
        'code' => 'ALO',
        'name' => 'Alofi North',
      ),
    ),
    'NZ' => 
    array (
      1 => 
      array (
        'code' => 'AUK',
        'name' => 'Auckland',
      ),
      2 => 
      array (
        'code' => 'BOP',
        'name' => 'Bay of Plenty',
      ),
      3 => 
      array (
        'code' => 'CAN',
        'name' => 'Canterbury',
      ),
      4 => 
      array (
        'code' => 'COR',
        'name' => 'Coromandel',
      ),
      5 => 
      array (
        'code' => 'GIS',
        'name' => 'Gisborne',
      ),
      6 => 
      array (
        'code' => 'FIO',
        'name' => 'Fiordland',
      ),
      7 => 
      array (
        'code' => 'HKB',
        'name' => 'Hawke\'s Bay',
      ),
      8 => 
      array (
        'code' => 'MBH',
        'name' => 'Marlborough',
      ),
      9 => 
      array (
        'code' => 'MWT',
        'name' => 'Manawatu-Wanganui',
      ),
      10 => 
      array (
        'code' => 'MCM',
        'name' => 'Mt Cook-Mackenzie',
      ),
      11 => 
      array (
        'code' => 'NSN',
        'name' => 'Nelson',
      ),
      12 => 
      array (
        'code' => 'NTL',
        'name' => 'Northland',
      ),
      13 => 
      array (
        'code' => 'OTA',
        'name' => 'Otago',
      ),
      14 => 
      array (
        'code' => 'STL',
        'name' => 'Southland',
      ),
      15 => 
      array (
        'code' => 'TKI',
        'name' => 'Taranaki',
      ),
      16 => 
      array (
        'code' => 'WGN',
        'name' => 'Wellington',
      ),
      17 => 
      array (
        'code' => 'WKO',
        'name' => 'Waikato',
      ),
      18 => 
      array (
        'code' => 'WAI',
        'name' => 'Wairprarapa',
      ),
      19 => 
      array (
        'code' => 'WTC',
        'name' => 'West Coast',
      ),
    ),
    'OM' => 
    array (
      1 => 
      array (
        'code' => 'DA',
        'name' => 'Ad Dakhiliyah',
      ),
      2 => 
      array (
        'code' => 'BA',
        'name' => 'Al Batinah',
      ),
      3 => 
      array (
        'code' => 'WU',
        'name' => 'Al Wusta',
      ),
      4 => 
      array (
        'code' => 'SH',
        'name' => 'Ash Sharqiyah',
      ),
      5 => 
      array (
        'code' => 'ZA',
        'name' => 'Az Zahirah',
      ),
      6 => 
      array (
        'code' => 'MA',
        'name' => 'Masqat',
      ),
      7 => 
      array (
        'code' => 'MU',
        'name' => 'Musandam',
      ),
      8 => 
      array (
        'code' => 'ZU',
        'name' => 'Zufar',
      ),
    ),
    'PA' => 
    array (
      1 => 
      array (
        'code' => 'BT',
        'name' => 'Bocas del Toro',
      ),
      2 => 
      array (
        'code' => 'CH',
        'name' => 'Chiriqui',
      ),
      3 => 
      array (
        'code' => 'CC',
        'name' => 'Cocle',
      ),
      4 => 
      array (
        'code' => 'CL',
        'name' => 'Colon',
      ),
      5 => 
      array (
        'code' => 'DA',
        'name' => 'Darien',
      ),
      6 => 
      array (
        'code' => 'HE',
        'name' => 'Herrera',
      ),
      7 => 
      array (
        'code' => 'LS',
        'name' => 'Los Santos',
      ),
      8 => 
      array (
        'code' => 'PA',
        'name' => 'Panama',
      ),
      9 => 
      array (
        'code' => 'SB',
        'name' => 'San Blas',
      ),
      10 => 
      array (
        'code' => 'VG',
        'name' => 'Veraguas',
      ),
    ),
    'PE' => 
    array (
      1 => 
      array (
        'code' => 'AM',
        'name' => 'Amazonas',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'Ancash',
      ),
      3 => 
      array (
        'code' => 'AP',
        'name' => 'Apurimac',
      ),
      4 => 
      array (
        'code' => 'AR',
        'name' => 'Arequipa',
      ),
      5 => 
      array (
        'code' => 'AY',
        'name' => 'Ayacucho',
      ),
      6 => 
      array (
        'code' => 'CJ',
        'name' => 'Cajamarca',
      ),
      7 => 
      array (
        'code' => 'CL',
        'name' => 'Callao',
      ),
      8 => 
      array (
        'code' => 'CU',
        'name' => 'Cusco',
      ),
      9 => 
      array (
        'code' => 'HV',
        'name' => 'Huancavelica',
      ),
      10 => 
      array (
        'code' => 'HO',
        'name' => 'Huanuco',
      ),
      11 => 
      array (
        'code' => 'IC',
        'name' => 'Ica',
      ),
      12 => 
      array (
        'code' => 'JU',
        'name' => 'Junin',
      ),
      13 => 
      array (
        'code' => 'LD',
        'name' => 'La Libertad',
      ),
      14 => 
      array (
        'code' => 'LY',
        'name' => 'Lambayeque',
      ),
      15 => 
      array (
        'code' => 'LI',
        'name' => 'Lima',
      ),
      16 => 
      array (
        'code' => 'LO',
        'name' => 'Loreto',
      ),
      17 => 
      array (
        'code' => 'MD',
        'name' => 'Madre de Dios',
      ),
      18 => 
      array (
        'code' => 'MO',
        'name' => 'Moquegua',
      ),
      19 => 
      array (
        'code' => 'PA',
        'name' => 'Pasco',
      ),
      20 => 
      array (
        'code' => 'PI',
        'name' => 'Piura',
      ),
      21 => 
      array (
        'code' => 'PU',
        'name' => 'Puno',
      ),
      22 => 
      array (
        'code' => 'SM',
        'name' => 'San Martin',
      ),
      23 => 
      array (
        'code' => 'TA',
        'name' => 'Tacna',
      ),
      24 => 
      array (
        'code' => 'TU',
        'name' => 'Tumbes',
      ),
      25 => 
      array (
        'code' => 'UC',
        'name' => 'Ucayali',
      ),
    ),
    'PF' => 
    array (
      1 => 
      array (
        'code' => 'M',
        'name' => 'Archipel des Marquises',
      ),
      2 => 
      array (
        'code' => 'T',
        'name' => 'Archipel des Tuamotu',
      ),
      3 => 
      array (
        'code' => 'I',
        'name' => 'Archipel des Tubuai',
      ),
      4 => 
      array (
        'code' => 'V',
        'name' => 'Iles du Vent',
      ),
      5 => 
      array (
        'code' => 'S',
        'name' => 'Iles Sous-le-Vent',
      ),
    ),
    'PG' => 
    array (
      1 => 
      array (
        'code' => 'BV',
        'name' => 'Bougainville',
      ),
      2 => 
      array (
        'code' => 'CE',
        'name' => 'Central',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'Chimbu',
      ),
      4 => 
      array (
        'code' => 'EH',
        'name' => 'Eastern Highlands',
      ),
      5 => 
      array (
        'code' => 'EB',
        'name' => 'East New Britain',
      ),
      6 => 
      array (
        'code' => 'ES',
        'name' => 'East Sepik',
      ),
      7 => 
      array (
        'code' => 'EN',
        'name' => 'Enga',
      ),
      8 => 
      array (
        'code' => 'GU',
        'name' => 'Gulf',
      ),
      9 => 
      array (
        'code' => 'MD',
        'name' => 'Madang',
      ),
      10 => 
      array (
        'code' => 'MN',
        'name' => 'Manus',
      ),
      11 => 
      array (
        'code' => 'MB',
        'name' => 'Milne Bay',
      ),
      12 => 
      array (
        'code' => 'MR',
        'name' => 'Morobe',
      ),
      13 => 
      array (
        'code' => 'NC',
        'name' => 'National Capital',
      ),
      14 => 
      array (
        'code' => 'NI',
        'name' => 'New Ireland',
      ),
      15 => 
      array (
        'code' => 'NO',
        'name' => 'Northern',
      ),
      16 => 
      array (
        'code' => 'SA',
        'name' => 'Sandaun',
      ),
      17 => 
      array (
        'code' => 'SH',
        'name' => 'Southern Highlands',
      ),
      18 => 
      array (
        'code' => 'WE',
        'name' => 'Western',
      ),
      19 => 
      array (
        'code' => 'WH',
        'name' => 'Western Highlands',
      ),
      20 => 
      array (
        'code' => 'WB',
        'name' => 'West New Britain',
      ),
    ),
    'PH' => 
    array (
      1 => 
      array (
        'code' => 'ABR',
        'name' => 'Abra',
      ),
      2 => 
      array (
        'code' => 'ANO',
        'name' => 'Agusan del Norte',
      ),
      3 => 
      array (
        'code' => 'ASU',
        'name' => 'Agusan del Sur',
      ),
      4 => 
      array (
        'code' => 'AKL',
        'name' => 'Aklan',
      ),
      5 => 
      array (
        'code' => 'ALB',
        'name' => 'Albay',
      ),
      6 => 
      array (
        'code' => 'ANT',
        'name' => 'Antique',
      ),
      7 => 
      array (
        'code' => 'APY',
        'name' => 'Apayao',
      ),
      8 => 
      array (
        'code' => 'AUR',
        'name' => 'Aurora',
      ),
      9 => 
      array (
        'code' => 'BAS',
        'name' => 'Basilan',
      ),
      10 => 
      array (
        'code' => 'BTA',
        'name' => 'Bataan',
      ),
      11 => 
      array (
        'code' => 'BTE',
        'name' => 'Batanes',
      ),
      12 => 
      array (
        'code' => 'BTG',
        'name' => 'Batangas',
      ),
      13 => 
      array (
        'code' => 'BLR',
        'name' => 'Biliran',
      ),
      14 => 
      array (
        'code' => 'BEN',
        'name' => 'Benguet',
      ),
      15 => 
      array (
        'code' => 'BOL',
        'name' => 'Bohol',
      ),
      16 => 
      array (
        'code' => 'BUK',
        'name' => 'Bukidnon',
      ),
      17 => 
      array (
        'code' => 'BUL',
        'name' => 'Bulacan',
      ),
      18 => 
      array (
        'code' => 'CAG',
        'name' => 'Cagayan',
      ),
      19 => 
      array (
        'code' => 'CNO',
        'name' => 'Camarines Norte',
      ),
      20 => 
      array (
        'code' => 'CSU',
        'name' => 'Camarines Sur',
      ),
      21 => 
      array (
        'code' => 'CAM',
        'name' => 'Camiguin',
      ),
      22 => 
      array (
        'code' => 'CAP',
        'name' => 'Capiz',
      ),
      23 => 
      array (
        'code' => 'CAT',
        'name' => 'Catanduanes',
      ),
      24 => 
      array (
        'code' => 'CAV',
        'name' => 'Cavite',
      ),
      25 => 
      array (
        'code' => 'CEB',
        'name' => 'Cebu',
      ),
      26 => 
      array (
        'code' => 'CMP',
        'name' => 'Compostela',
      ),
      27 => 
      array (
        'code' => 'DNO',
        'name' => 'Davao del Norte',
      ),
      28 => 
      array (
        'code' => 'DSU',
        'name' => 'Davao del Sur',
      ),
      29 => 
      array (
        'code' => 'DOR',
        'name' => 'Davao Oriental',
      ),
      30 => 
      array (
        'code' => 'ESA',
        'name' => 'Eastern Samar',
      ),
      31 => 
      array (
        'code' => 'GUI',
        'name' => 'Guimaras',
      ),
      32 => 
      array (
        'code' => 'IFU',
        'name' => 'Ifugao',
      ),
      33 => 
      array (
        'code' => 'INO',
        'name' => 'Ilocos Norte',
      ),
      34 => 
      array (
        'code' => 'ISU',
        'name' => 'Ilocos Sur',
      ),
      35 => 
      array (
        'code' => 'ILO',
        'name' => 'Iloilo',
      ),
      36 => 
      array (
        'code' => 'ISA',
        'name' => 'Isabela',
      ),
      37 => 
      array (
        'code' => 'KAL',
        'name' => 'Kalinga',
      ),
      38 => 
      array (
        'code' => 'LAG',
        'name' => 'Laguna',
      ),
      39 => 
      array (
        'code' => 'LNO',
        'name' => 'Lanao del Norte',
      ),
      40 => 
      array (
        'code' => 'LSU',
        'name' => 'Lanao del Sur',
      ),
      41 => 
      array (
        'code' => 'UNI',
        'name' => 'La Union',
      ),
      42 => 
      array (
        'code' => 'LEY',
        'name' => 'Leyte',
      ),
      43 => 
      array (
        'code' => 'MAG',
        'name' => 'Maguindanao',
      ),
      44 => 
      array (
        'code' => 'MRN',
        'name' => 'Marinduque',
      ),
      45 => 
      array (
        'code' => 'MSB',
        'name' => 'Masbate',
      ),
      46 => 
      array (
        'code' => 'MIC',
        'name' => 'Mindoro Occidental',
      ),
      47 => 
      array (
        'code' => 'MIR',
        'name' => 'Mindoro Oriental',
      ),
      48 => 
      array (
        'code' => 'MSC',
        'name' => 'Misamis Occidental',
      ),
      49 => 
      array (
        'code' => 'MOR',
        'name' => 'Misamis Oriental',
      ),
      50 => 
      array (
        'code' => 'MOP',
        'name' => 'Mountain',
      ),
      51 => 
      array (
        'code' => 'NOC',
        'name' => 'Negros Occidental',
      ),
      52 => 
      array (
        'code' => 'NOR',
        'name' => 'Negros Oriental',
      ),
      53 => 
      array (
        'code' => 'NCT',
        'name' => 'North Cotabato',
      ),
      54 => 
      array (
        'code' => 'NSM',
        'name' => 'Northern Samar',
      ),
      55 => 
      array (
        'code' => 'NEC',
        'name' => 'Nueva Ecija',
      ),
      56 => 
      array (
        'code' => 'NVZ',
        'name' => 'Nueva Vizcaya',
      ),
      57 => 
      array (
        'code' => 'PLW',
        'name' => 'Palawan',
      ),
      58 => 
      array (
        'code' => 'PMP',
        'name' => 'Pampanga',
      ),
      59 => 
      array (
        'code' => 'PNG',
        'name' => 'Pangasinan',
      ),
      60 => 
      array (
        'code' => 'QZN',
        'name' => 'Quezon',
      ),
      61 => 
      array (
        'code' => 'QRN',
        'name' => 'Quirino',
      ),
      62 => 
      array (
        'code' => 'RIZ',
        'name' => 'Rizal',
      ),
      63 => 
      array (
        'code' => 'ROM',
        'name' => 'Romblon',
      ),
      64 => 
      array (
        'code' => 'SMR',
        'name' => 'Samar',
      ),
      65 => 
      array (
        'code' => 'SRG',
        'name' => 'Sarangani',
      ),
      66 => 
      array (
        'code' => 'SQJ',
        'name' => 'Siquijor',
      ),
      67 => 
      array (
        'code' => 'SRS',
        'name' => 'Sorsogon',
      ),
      68 => 
      array (
        'code' => 'SCO',
        'name' => 'South Cotabato',
      ),
      69 => 
      array (
        'code' => 'SLE',
        'name' => 'Southern Leyte',
      ),
      70 => 
      array (
        'code' => 'SKU',
        'name' => 'Sultan Kudarat',
      ),
      71 => 
      array (
        'code' => 'SLU',
        'name' => 'Sulu',
      ),
      72 => 
      array (
        'code' => 'SNO',
        'name' => 'Surigao del Norte',
      ),
      73 => 
      array (
        'code' => 'SSU',
        'name' => 'Surigao del Sur',
      ),
      74 => 
      array (
        'code' => 'TAR',
        'name' => 'Tarlac',
      ),
      75 => 
      array (
        'code' => 'TAW',
        'name' => 'Tawi-Tawi',
      ),
      76 => 
      array (
        'code' => 'ZBL',
        'name' => 'Zambales',
      ),
      77 => 
      array (
        'code' => 'ZNO',
        'name' => 'Zamboanga del Norte',
      ),
      78 => 
      array (
        'code' => 'ZSU',
        'name' => 'Zamboanga del Sur',
      ),
      79 => 
      array (
        'code' => 'ZSI',
        'name' => 'Zamboanga Sibugay',
      ),
    ),
    'PK' => 
    array (
      1 => 
      array (
        'code' => 'B',
        'name' => 'Balochistan',
      ),
      2 => 
      array (
        'code' => 'T',
        'name' => 'Federally Administered Tribal Ar',
      ),
      3 => 
      array (
        'code' => 'I',
        'name' => 'Islamabad Capital Territory',
      ),
      4 => 
      array (
        'code' => 'N',
        'name' => 'North-West Frontier',
      ),
      5 => 
      array (
        'code' => 'P',
        'name' => 'Punjab',
      ),
      6 => 
      array (
        'code' => 'S',
        'name' => 'Sindh',
      ),
    ),
    'PL' => 
    array (
      1 => 
      array (
        'code' => 'DO',
        'name' => 'Dolnośląskie',
      ),
      2 => 
      array (
        'code' => 'KP',
        'name' => 'Kujawsko-Pomorskie',
      ),
      3 => 
      array (
        'code' => 'LL',
        'name' => 'Lubelskie',
      ),
      4 => 
      array (
        'code' => 'LU',
        'name' => 'Lubuskie',
      ),
      5 => 
      array (
        'code' => 'LO',
        'name' => 'Łódzkie',
      ),
      6 => 
      array (
        'code' => 'ML',
        'name' => 'Małopolskie',
      ),
      7 => 
      array (
        'code' => 'MZ',
        'name' => 'Mazowieckie',
      ),
      8 => 
      array (
        'code' => 'OP',
        'name' => 'Opolskie',
      ),
      9 => 
      array (
        'code' => 'PP',
        'name' => 'Podkarpackie',
      ),
      10 => 
      array (
        'code' => 'PL',
        'name' => 'Podlaskie',
      ),
      11 => 
      array (
        'code' => 'PM',
        'name' => 'Pomorskie',
      ),
      12 => 
      array (
        'code' => 'SL',
        'name' => 'Śląskie',
      ),
      13 => 
      array (
        'code' => 'SW',
        'name' => 'Świętokrzyskie',
      ),
      14 => 
      array (
        'code' => 'WM',
        'name' => 'Warmińsko-Mazurskie',
      ),
      15 => 
      array (
        'code' => 'WP',
        'name' => 'Wielkopolskie',
      ),
      16 => 
      array (
        'code' => 'ZA',
        'name' => 'Zachodniopomorskie',
      ),
    ),
    'PM' => 
    array (
      1 => 
      array (
        'code' => 'P',
        'name' => 'Saint Pierre',
      ),
      2 => 
      array (
        'code' => 'M',
        'name' => 'Miquelon',
      ),
    ),
    'PN' => 
    array (
      1 => 
      array (
        'code' => 'PIT',
        'name' => 'Pitcairn Island',
      ),
    ),
    'PR' => 
    array (
      1 => 
      array (
        'code' => 'A-A',
        'name' => 'Añasco',
      ),
      2 => 
      array (
        'code' => 'ADJ',
        'name' => 'Adjuntas',
      ),
      3 => 
      array (
        'code' => 'AGU',
        'name' => 'Aguada',
      ),
      4 => 
      array (
        'code' => 'AGU',
        'name' => 'Aguadilla',
      ),
      5 => 
      array (
        'code' => 'AGU',
        'name' => 'Aguas Buenas',
      ),
      6 => 
      array (
        'code' => 'AIB',
        'name' => 'Aibonito',
      ),
      7 => 
      array (
        'code' => 'ARE',
        'name' => 'Arecibo',
      ),
      8 => 
      array (
        'code' => 'ARR',
        'name' => 'Arroyo',
      ),
      9 => 
      array (
        'code' => 'BAR',
        'name' => 'Barceloneta',
      ),
      10 => 
      array (
        'code' => 'BAR',
        'name' => 'Barranquitas',
      ),
      11 => 
      array (
        'code' => 'BAY',
        'name' => 'Bayamón',
      ),
      12 => 
      array (
        'code' => 'CAB',
        'name' => 'Cabo Rojo',
      ),
      13 => 
      array (
        'code' => 'CAG',
        'name' => 'Caguas',
      ),
      14 => 
      array (
        'code' => 'CAM',
        'name' => 'Camuy',
      ),
      15 => 
      array (
        'code' => 'CAN',
        'name' => 'Canóvanas',
      ),
      16 => 
      array (
        'code' => 'CAR',
        'name' => 'Carolina',
      ),
      17 => 
      array (
        'code' => 'CAT',
        'name' => 'Cataño',
      ),
      18 => 
      array (
        'code' => 'CAY',
        'name' => 'Cayey',
      ),
      19 => 
      array (
        'code' => 'CEI',
        'name' => 'Ceiba',
      ),
      20 => 
      array (
        'code' => 'CIA',
        'name' => 'Ciales',
      ),
      21 => 
      array (
        'code' => 'CID',
        'name' => 'Cidra',
      ),
      22 => 
      array (
        'code' => 'COA',
        'name' => 'Coamo',
      ),
      23 => 
      array (
        'code' => 'COM',
        'name' => 'Comerío',
      ),
      24 => 
      array (
        'code' => 'COR',
        'name' => 'Corozal',
      ),
      25 => 
      array (
        'code' => 'CUL',
        'name' => 'Culebra',
      ),
      26 => 
      array (
        'code' => 'DOR',
        'name' => 'Dorado',
      ),
      27 => 
      array (
        'code' => 'FAJ',
        'name' => 'Fajardo',
      ),
      28 => 
      array (
        'code' => 'FLO',
        'name' => 'Florida',
      ),
      29 => 
      array (
        'code' => 'GUA',
        'name' => 'Guayama',
      ),
      30 => 
      array (
        'code' => 'GUA',
        'name' => 'Guayanilla',
      ),
      31 => 
      array (
        'code' => 'GUA',
        'name' => 'Guaynabo',
      ),
      32 => 
      array (
        'code' => 'GUR',
        'name' => 'Gurabo',
      ),
      33 => 
      array (
        'code' => 'GU¡',
        'name' => 'Guánica',
      ),
      34 => 
      array (
        'code' => 'HAT',
        'name' => 'Hatillo',
      ),
      35 => 
      array (
        'code' => 'HOR',
        'name' => 'Hormigueros',
      ),
      36 => 
      array (
        'code' => 'HUM',
        'name' => 'Humacao',
      ),
      37 => 
      array (
        'code' => 'ISA',
        'name' => 'Isabela',
      ),
      38 => 
      array (
        'code' => 'JAY',
        'name' => 'Jayuya',
      ),
      39 => 
      array (
        'code' => 'JUA',
        'name' => 'Juana Díaz',
      ),
      40 => 
      array (
        'code' => 'JUN',
        'name' => 'Juncos',
      ),
      41 => 
      array (
        'code' => 'LAJ',
        'name' => 'Lajas',
      ),
      42 => 
      array (
        'code' => 'LAR',
        'name' => 'Lares',
      ),
      43 => 
      array (
        'code' => 'LAS',
        'name' => 'Las Marías',
      ),
      44 => 
      array (
        'code' => 'LAS',
        'name' => 'Las Piedras',
      ),
      45 => 
      array (
        'code' => 'LOÕ',
        'name' => 'Loíza',
      ),
      46 => 
      array (
        'code' => 'LUQ',
        'name' => 'Luquillo',
      ),
      47 => 
      array (
        'code' => 'MAN',
        'name' => 'Manatí',
      ),
      48 => 
      array (
        'code' => 'MAR',
        'name' => 'Maricao',
      ),
      49 => 
      array (
        'code' => 'MAU',
        'name' => 'Maunabo',
      ),
      50 => 
      array (
        'code' => 'MAY',
        'name' => 'Mayagüez',
      ),
      51 => 
      array (
        'code' => 'MOC',
        'name' => 'Moca',
      ),
      52 => 
      array (
        'code' => 'MOR',
        'name' => 'Morovis',
      ),
      53 => 
      array (
        'code' => 'NAG',
        'name' => 'Naguabo',
      ),
      54 => 
      array (
        'code' => 'NAR',
        'name' => 'Naranjito',
      ),
      55 => 
      array (
        'code' => 'ORO',
        'name' => 'Orocovis',
      ),
      56 => 
      array (
        'code' => 'PAT',
        'name' => 'Patillas',
      ),
      57 => 
      array (
        'code' => 'PE-',
        'name' => 'Peñuelas',
      ),
      58 => 
      array (
        'code' => 'PON',
        'name' => 'Ponce',
      ),
      59 => 
      array (
        'code' => 'QUE',
        'name' => 'Quebradillas',
      ),
      60 => 
      array (
        'code' => 'RIN',
        'name' => 'Rincón',
      ),
      61 => 
      array (
        'code' => 'RIO',
        'name' => 'Rio Grande',
      ),
      62 => 
      array (
        'code' => 'SAB',
        'name' => 'Sabana Grande',
      ),
      63 => 
      array (
        'code' => 'SAL',
        'name' => 'Salinas',
      ),
      64 => 
      array (
        'code' => 'SAN',
        'name' => 'San Germàn',
      ),
      65 => 
      array (
        'code' => 'SAN',
        'name' => 'San Juan',
      ),
      66 => 
      array (
        'code' => 'SAN',
        'name' => 'San Lorenzo',
      ),
      67 => 
      array (
        'code' => 'SAN',
        'name' => 'San Sebastiàn',
      ),
      68 => 
      array (
        'code' => 'SAN',
        'name' => 'Santa Isabel',
      ),
      69 => 
      array (
        'code' => 'TOA',
        'name' => 'Toa Alta',
      ),
      70 => 
      array (
        'code' => 'TOA',
        'name' => 'Toa Baja',
      ),
      71 => 
      array (
        'code' => 'TRU',
        'name' => 'Trujillo Alto',
      ),
      72 => 
      array (
        'code' => 'UTU',
        'name' => 'Utuado',
      ),
      73 => 
      array (
        'code' => 'VEG',
        'name' => 'Vega Alta',
      ),
      74 => 
      array (
        'code' => 'VEG',
        'name' => 'Vega Baja',
      ),
      75 => 
      array (
        'code' => 'VIE',
        'name' => 'Vieques',
      ),
      76 => 
      array (
        'code' => 'VIL',
        'name' => 'Villalba',
      ),
      77 => 
      array (
        'code' => 'YAB',
        'name' => 'Yabucoa',
      ),
      78 => 
      array (
        'code' => 'YAU',
        'name' => 'Yauco',
      ),
    ),
    'PT' => 
    array (
      1 => 
      array (
        'code' => 'AC',
        'name' => 'Açores',
      ),
      2 => 
      array (
        'code' => 'AV',
        'name' => 'Aveiro',
      ),
      3 => 
      array (
        'code' => 'BE',
        'name' => 'Beja',
      ),
      4 => 
      array (
        'code' => 'BR',
        'name' => 'Braga',
      ),
      5 => 
      array (
        'code' => 'BA',
        'name' => 'Bragança',
      ),
      6 => 
      array (
        'code' => 'CB',
        'name' => 'Castelo Branco',
      ),
      7 => 
      array (
        'code' => 'CO',
        'name' => 'Coimbra',
      ),
      8 => 
      array (
        'code' => 'EV',
        'name' => 'évora',
      ),
      9 => 
      array (
        'code' => 'FA',
        'name' => 'Faro',
      ),
      10 => 
      array (
        'code' => 'GU',
        'name' => 'Guarda',
      ),
      12 => 
      array (
        'code' => 'LE',
        'name' => 'Leiria',
      ),
      13 => 
      array (
        'code' => 'LI',
        'name' => 'Lisboa',
      ),
      14 => 
      array (
        'code' => 'ME',
        'name' => 'Madeira',
      ),
      15 => 
      array (
        'code' => 'PO',
        'name' => 'Portalegre',
      ),
      16 => 
      array (
        'code' => 'PR',
        'name' => 'Porto',
      ),
      17 => 
      array (
        'code' => 'SA',
        'name' => 'Santarém',
      ),
      18 => 
      array (
        'code' => 'SE',
        'name' => 'SetÚbal',
      ),
      19 => 
      array (
        'code' => 'VC',
        'name' => 'Viana do Castelo',
      ),
      20 => 
      array (
        'code' => 'VR',
        'name' => 'Vila Real',
      ),
      21 => 
      array (
        'code' => 'VI',
        'name' => 'Viseu',
      ),
    ),
    'PW' => 
    array (
      1 => 
      array (
        'code' => 'AM',
        'name' => 'Aimeliik',
      ),
      2 => 
      array (
        'code' => 'AR',
        'name' => 'Airai',
      ),
      3 => 
      array (
        'code' => 'AN',
        'name' => 'Angaur',
      ),
      4 => 
      array (
        'code' => 'HA',
        'name' => 'Hatohobei',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'Kayangel',
      ),
      6 => 
      array (
        'code' => 'KO',
        'name' => 'Koror',
      ),
      7 => 
      array (
        'code' => 'ME',
        'name' => 'Melekeok',
      ),
      8 => 
      array (
        'code' => 'NA',
        'name' => 'Ngaraard',
      ),
      9 => 
      array (
        'code' => 'NG',
        'name' => 'Ngarchelong',
      ),
      10 => 
      array (
        'code' => 'ND',
        'name' => 'Ngardmau',
      ),
      11 => 
      array (
        'code' => 'NT',
        'name' => 'Ngatpang',
      ),
      12 => 
      array (
        'code' => 'NC',
        'name' => 'Ngchesar',
      ),
      13 => 
      array (
        'code' => 'NR',
        'name' => 'Ngeremlengui',
      ),
      14 => 
      array (
        'code' => 'NW',
        'name' => 'Ngiwal',
      ),
      15 => 
      array (
        'code' => 'PE',
        'name' => 'Peleliu',
      ),
      16 => 
      array (
        'code' => 'SO',
        'name' => 'Sonsorol',
      ),
    ),
    'PY' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'Alto Paraguay',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'Alto Parana',
      ),
      3 => 
      array (
        'code' => 'AM',
        'name' => 'Amambay',
      ),
      4 => 
      array (
        'code' => 'AS',
        'name' => 'Asuncion',
      ),
      5 => 
      array (
        'code' => 'BO',
        'name' => 'Boqueron',
      ),
      6 => 
      array (
        'code' => 'CG',
        'name' => 'Caaguazu',
      ),
      7 => 
      array (
        'code' => 'CZ',
        'name' => 'Caazapa',
      ),
      8 => 
      array (
        'code' => 'CN',
        'name' => 'Canindeyu',
      ),
      9 => 
      array (
        'code' => 'CE',
        'name' => 'Central',
      ),
      10 => 
      array (
        'code' => 'CC',
        'name' => 'Concepcion',
      ),
      11 => 
      array (
        'code' => 'CD',
        'name' => 'Cordillera',
      ),
      12 => 
      array (
        'code' => 'GU',
        'name' => 'Guaira',
      ),
      13 => 
      array (
        'code' => 'IT',
        'name' => 'Itapua',
      ),
      14 => 
      array (
        'code' => 'MI',
        'name' => 'Misiones',
      ),
      15 => 
      array (
        'code' => 'NE',
        'name' => 'Neembucu',
      ),
      16 => 
      array (
        'code' => 'PA',
        'name' => 'Paraguari',
      ),
      17 => 
      array (
        'code' => 'PH',
        'name' => 'Presidente Hayes',
      ),
      18 => 
      array (
        'code' => 'SP',
        'name' => 'San Pedro',
      ),
    ),
    'QA' => 
    array (
      1 => 
      array (
        'code' => 'DW',
        'name' => 'Ad Dawhah',
      ),
      2 => 
      array (
        'code' => 'GW',
        'name' => 'Al Ghuwayriyah',
      ),
      3 => 
      array (
        'code' => 'JM',
        'name' => 'Al Jumayliyah',
      ),
      4 => 
      array (
        'code' => 'KR',
        'name' => 'Al Khawr',
      ),
      5 => 
      array (
        'code' => 'WK',
        'name' => 'Al Wakrah',
      ),
      6 => 
      array (
        'code' => 'RN',
        'name' => 'Ar Rayyan',
      ),
      7 => 
      array (
        'code' => 'JB',
        'name' => 'Jarayan al Batinah',
      ),
      8 => 
      array (
        'code' => 'MS',
        'name' => 'Madinat ash Shamal',
      ),
      9 => 
      array (
        'code' => 'UD',
        'name' => 'Umm Sa\'id',
      ),
      10 => 
      array (
        'code' => 'UL',
        'name' => 'Umm Salal',
      ),
    ),
    'RO' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Alba',
      ),
      2 => 
      array (
        'code' => 'AR',
        'name' => 'Arad',
      ),
      3 => 
      array (
        'code' => 'AG',
        'name' => 'Arges',
      ),
      4 => 
      array (
        'code' => 'BC',
        'name' => 'Bacau',
      ),
      5 => 
      array (
        'code' => 'BH',
        'name' => 'Bihor',
      ),
      6 => 
      array (
        'code' => 'BN',
        'name' => 'Bistrita-Nasaud',
      ),
      7 => 
      array (
        'code' => 'BT',
        'name' => 'Botosani',
      ),
      8 => 
      array (
        'code' => 'BV',
        'name' => 'Brasov',
      ),
      9 => 
      array (
        'code' => 'BR',
        'name' => 'Braila',
      ),
      10 => 
      array (
        'code' => 'B',
        'name' => 'Bucuresti',
      ),
      11 => 
      array (
        'code' => 'BZ',
        'name' => 'Buzau',
      ),
      12 => 
      array (
        'code' => 'CS',
        'name' => 'Caras-Severin',
      ),
      13 => 
      array (
        'code' => 'CL',
        'name' => 'Calarasi',
      ),
      14 => 
      array (
        'code' => 'CJ',
        'name' => 'Cluj',
      ),
      15 => 
      array (
        'code' => 'CT',
        'name' => 'Constanta',
      ),
      16 => 
      array (
        'code' => 'CV',
        'name' => 'Covasna',
      ),
      17 => 
      array (
        'code' => 'DB',
        'name' => 'Dimbovita',
      ),
      18 => 
      array (
        'code' => 'DJ',
        'name' => 'Dolj',
      ),
      19 => 
      array (
        'code' => 'GL',
        'name' => 'Galati',
      ),
      20 => 
      array (
        'code' => 'GR',
        'name' => 'Giurgiu',
      ),
      21 => 
      array (
        'code' => 'GJ',
        'name' => 'Gorj',
      ),
      22 => 
      array (
        'code' => 'HR',
        'name' => 'Harghita',
      ),
      23 => 
      array (
        'code' => 'HD',
        'name' => 'Hunedoara',
      ),
      24 => 
      array (
        'code' => 'IL',
        'name' => 'Ialomita',
      ),
      25 => 
      array (
        'code' => 'IS',
        'name' => 'Iasi',
      ),
      26 => 
      array (
        'code' => 'IF',
        'name' => 'Ilfov',
      ),
      27 => 
      array (
        'code' => 'MM',
        'name' => 'Maramures',
      ),
      28 => 
      array (
        'code' => 'MH',
        'name' => 'Mehedinti',
      ),
      29 => 
      array (
        'code' => 'MS',
        'name' => 'Mures',
      ),
      30 => 
      array (
        'code' => 'NT',
        'name' => 'Neamt',
      ),
      31 => 
      array (
        'code' => 'OT',
        'name' => 'Olt',
      ),
      32 => 
      array (
        'code' => 'PH',
        'name' => 'Prahova',
      ),
      33 => 
      array (
        'code' => 'SM',
        'name' => 'Satu-Mare',
      ),
      34 => 
      array (
        'code' => 'SJ',
        'name' => 'Salaj',
      ),
      35 => 
      array (
        'code' => 'SB',
        'name' => 'Sibiu',
      ),
      36 => 
      array (
        'code' => 'SV',
        'name' => 'Suceava',
      ),
      37 => 
      array (
        'code' => 'TR',
        'name' => 'Teleorman',
      ),
      38 => 
      array (
        'code' => 'TM',
        'name' => 'Timis',
      ),
      39 => 
      array (
        'code' => 'TL',
        'name' => 'Tulcea',
      ),
      40 => 
      array (
        'code' => 'VS',
        'name' => 'Vaslui',
      ),
      41 => 
      array (
        'code' => 'VL',
        'name' => 'Valcea',
      ),
      42 => 
      array (
        'code' => 'VN',
        'name' => 'Vrancea',
      ),
    ),
    'RU' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Abakan',
      ),
      2 => 
      array (
        'code' => 'AG',
        'name' => 'Aginskoye',
      ),
      3 => 
      array (
        'code' => 'AN',
        'name' => 'Anadyr',
      ),
      4 => 
      array (
        'code' => 'AR',
        'name' => 'Arkahangelsk',
      ),
      5 => 
      array (
        'code' => 'AS',
        'name' => 'Astrakhan',
      ),
      6 => 
      array (
        'code' => 'BA',
        'name' => 'Barnaul',
      ),
      7 => 
      array (
        'code' => 'BE',
        'name' => 'Belgorod',
      ),
      8 => 
      array (
        'code' => 'BI',
        'name' => 'Birobidzhan',
      ),
      9 => 
      array (
        'code' => 'BL',
        'name' => 'Blagoveshchensk',
      ),
      10 => 
      array (
        'code' => 'BR',
        'name' => 'Bryansk',
      ),
      11 => 
      array (
        'code' => 'CH',
        'name' => 'Cheboksary',
      ),
      12 => 
      array (
        'code' => 'CL',
        'name' => 'Chelyabinsk',
      ),
      13 => 
      array (
        'code' => 'CR',
        'name' => 'Cherkessk',
      ),
      14 => 
      array (
        'code' => 'CI',
        'name' => 'Chita',
      ),
      15 => 
      array (
        'code' => 'DU',
        'name' => 'Dudinka',
      ),
      16 => 
      array (
        'code' => 'EL',
        'name' => 'Elista',
      ),
      17 => 
      array (
        'code' => 'GO',
        'name' => 'Gomo-Altaysk',
      ),
      18 => 
      array (
        'code' => 'GA',
        'name' => 'Gorno-Altaysk',
      ),
      19 => 
      array (
        'code' => 'GR',
        'name' => 'Groznyy',
      ),
      20 => 
      array (
        'code' => 'IR',
        'name' => 'Irkutsk',
      ),
      21 => 
      array (
        'code' => 'IV',
        'name' => 'Ivanovo',
      ),
      22 => 
      array (
        'code' => 'IZ',
        'name' => 'Izhevsk',
      ),
      23 => 
      array (
        'code' => 'KA',
        'name' => 'Kalinigrad',
      ),
      24 => 
      array (
        'code' => 'KL',
        'name' => 'Kaluga',
      ),
      25 => 
      array (
        'code' => 'KS',
        'name' => 'Krasnodar',
      ),
      26 => 
      array (
        'code' => 'KZ',
        'name' => 'Kazan',
      ),
      27 => 
      array (
        'code' => 'KE',
        'name' => 'Kemerovo',
      ),
      28 => 
      array (
        'code' => 'KH',
        'name' => 'Khabarovsk',
      ),
      29 => 
      array (
        'code' => 'KM',
        'name' => 'Khanty-Mansiysk',
      ),
      30 => 
      array (
        'code' => 'KO',
        'name' => 'Kostroma',
      ),
      31 => 
      array (
        'code' => 'KR',
        'name' => 'Karelia',
      ),
      32 => 
      array (
        'code' => 'KN',
        'name' => 'Krasnoyarsk',
      ),
      33 => 
      array (
        'code' => 'KU',
        'name' => 'Kudymkar',
      ),
      34 => 
      array (
        'code' => 'KG',
        'name' => 'Kurgan',
      ),
      35 => 
      array (
        'code' => 'KK',
        'name' => 'Kursk',
      ),
      36 => 
      array (
        'code' => 'KY',
        'name' => 'Kyzyl',
      ),
      37 => 
      array (
        'code' => 'LI',
        'name' => 'Lipetsk',
      ),
      38 => 
      array (
        'code' => 'MA',
        'name' => 'Magadan',
      ),
      39 => 
      array (
        'code' => 'MK',
        'name' => 'Makhachkala',
      ),
      40 => 
      array (
        'code' => 'MY',
        'name' => 'Maykop',
      ),
      41 => 
      array (
        'code' => 'MO',
        'name' => 'Moskva',
      ),
      42 => 
      array (
        'code' => 'MU',
        'name' => 'Murmansk',
      ),
      43 => 
      array (
        'code' => 'NA',
        'name' => 'Nalchik',
      ),
      44 => 
      array (
        'code' => 'NR',
        'name' => 'Naryan Mar',
      ),
      45 => 
      array (
        'code' => 'NZ',
        'name' => 'Nazran',
      ),
      46 => 
      array (
        'code' => 'NI',
        'name' => 'Nizhniy Novgorod',
      ),
      47 => 
      array (
        'code' => 'NO',
        'name' => 'Novgorod',
      ),
      48 => 
      array (
        'code' => 'NV',
        'name' => 'Novosibirsk',
      ),
      49 => 
      array (
        'code' => 'OM',
        'name' => 'Omsk',
      ),
      50 => 
      array (
        'code' => 'OR',
        'name' => 'Orel',
      ),
      51 => 
      array (
        'code' => 'OE',
        'name' => 'Orenburg',
      ),
      52 => 
      array (
        'code' => 'PA',
        'name' => 'Palana',
      ),
      53 => 
      array (
        'code' => 'PE',
        'name' => 'Penza',
      ),
      54 => 
      array (
        'code' => 'PR',
        'name' => 'Perm',
      ),
      55 => 
      array (
        'code' => 'PK',
        'name' => 'Petropavlovsk-Kamchatskiy',
      ),
      56 => 
      array (
        'code' => 'PT',
        'name' => 'Petrozavodsk',
      ),
      57 => 
      array (
        'code' => 'PS',
        'name' => 'Pskov',
      ),
      58 => 
      array (
        'code' => 'RO',
        'name' => 'Rostov-na-Donu',
      ),
      59 => 
      array (
        'code' => 'RY',
        'name' => 'Ryazan',
      ),
      60 => 
      array (
        'code' => 'SL',
        'name' => 'Salekhard',
      ),
      61 => 
      array (
        'code' => 'SA',
        'name' => 'Samara',
      ),
      62 => 
      array (
        'code' => 'SR',
        'name' => 'Saransk',
      ),
      63 => 
      array (
        'code' => 'SV',
        'name' => 'Saratov',
      ),
      64 => 
      array (
        'code' => 'SM',
        'name' => 'Smolensk',
      ),
      65 => 
      array (
        'code' => 'SP',
        'name' => 'Sankt-Peterburg',
      ),
      66 => 
      array (
        'code' => 'ST',
        'name' => 'Stavropol',
      ),
      67 => 
      array (
        'code' => 'SY',
        'name' => 'Syktyvkar',
      ),
      68 => 
      array (
        'code' => 'TA',
        'name' => 'Tambov',
      ),
      69 => 
      array (
        'code' => 'TO',
        'name' => 'Tomsk',
      ),
      70 => 
      array (
        'code' => 'TU',
        'name' => 'Tula',
      ),
      71 => 
      array (
        'code' => 'TR',
        'name' => 'Tura',
      ),
      72 => 
      array (
        'code' => 'TV',
        'name' => 'Tver',
      ),
      73 => 
      array (
        'code' => 'TY',
        'name' => 'Tyumen',
      ),
      74 => 
      array (
        'code' => 'UF',
        'name' => 'Ufa',
      ),
      75 => 
      array (
        'code' => 'UL',
        'name' => 'Ul\'yanovsk',
      ),
      76 => 
      array (
        'code' => 'UU',
        'name' => 'Ulan-Ude',
      ),
      77 => 
      array (
        'code' => 'US',
        'name' => 'Ust\'-Ordynskiy',
      ),
      78 => 
      array (
        'code' => 'VL',
        'name' => 'Vladikavkaz',
      ),
      79 => 
      array (
        'code' => 'VA',
        'name' => 'Vladimir',
      ),
      80 => 
      array (
        'code' => 'VV',
        'name' => 'Vladivostok',
      ),
      81 => 
      array (
        'code' => 'VG',
        'name' => 'Volgograd',
      ),
      82 => 
      array (
        'code' => 'VD',
        'name' => 'Vologda',
      ),
      83 => 
      array (
        'code' => 'VO',
        'name' => 'Voronezh',
      ),
      84 => 
      array (
        'code' => 'VY',
        'name' => 'Vyatka',
      ),
      85 => 
      array (
        'code' => 'YA',
        'name' => 'Yakutsk',
      ),
      86 => 
      array (
        'code' => 'YR',
        'name' => 'Yaroslavl',
      ),
      87 => 
      array (
        'code' => 'YE',
        'name' => 'Yekaterinburg',
      ),
      88 => 
      array (
        'code' => 'YO',
        'name' => 'Yoshkar-Ola',
      ),
    ),
    'RW' => 
    array (
      1 => 
      array (
        'code' => 'BU',
        'name' => 'Butare',
      ),
      2 => 
      array (
        'code' => 'BY',
        'name' => 'Byumba',
      ),
      3 => 
      array (
        'code' => 'CY',
        'name' => 'Cyangugu',
      ),
      4 => 
      array (
        'code' => 'GK',
        'name' => 'Gikongoro',
      ),
      5 => 
      array (
        'code' => 'GS',
        'name' => 'Gisenyi',
      ),
      6 => 
      array (
        'code' => 'GT',
        'name' => 'Gitarama',
      ),
      7 => 
      array (
        'code' => 'KG',
        'name' => 'Kibungo',
      ),
      8 => 
      array (
        'code' => 'KY',
        'name' => 'Kibuye',
      ),
      9 => 
      array (
        'code' => 'KR',
        'name' => 'Kigali Rurale',
      ),
      10 => 
      array (
        'code' => 'KV',
        'name' => 'Kigali-ville',
      ),
      11 => 
      array (
        'code' => 'RU',
        'name' => 'Ruhengeri',
      ),
      12 => 
      array (
        'code' => 'UM',
        'name' => 'Umutara',
      ),
    ),
    'SA' => 
    array (
      1 => 
      array (
        'code' => 'BH',
        'name' => 'Al Bahah',
      ),
      2 => 
      array (
        'code' => 'HS',
        'name' => 'Al Hudud ash Shamaliyah',
      ),
      3 => 
      array (
        'code' => 'JF',
        'name' => 'Al Jawf',
      ),
      4 => 
      array (
        'code' => 'MD',
        'name' => 'Al Madinah',
      ),
      5 => 
      array (
        'code' => 'QS',
        'name' => 'Al Qasim',
      ),
      6 => 
      array (
        'code' => 'RD',
        'name' => 'Ar Riyad',
      ),
      7 => 
      array (
        'code' => 'AQ',
        'name' => 'Ash Sharqiyah (Eastern)',
      ),
      8 => 
      array (
        'code' => 'AS',
        'name' => '\'Asir',
      ),
      9 => 
      array (
        'code' => 'HL',
        'name' => 'Ha\'il',
      ),
      10 => 
      array (
        'code' => 'JZ',
        'name' => 'Jizan',
      ),
      11 => 
      array (
        'code' => 'ML',
        'name' => 'Makkah',
      ),
      12 => 
      array (
        'code' => 'NR',
        'name' => 'Najran',
      ),
      13 => 
      array (
        'code' => 'TB',
        'name' => 'Tabuk',
      ),
    ),
    'SB' => 
    array (
      1 => 
      array (
        'code' => 'CE',
        'name' => 'Central',
      ),
      2 => 
      array (
        'code' => 'CH',
        'name' => 'Choiseul',
      ),
      3 => 
      array (
        'code' => 'GC',
        'name' => 'Guadalcanal',
      ),
      4 => 
      array (
        'code' => 'HO',
        'name' => 'Honiara',
      ),
      5 => 
      array (
        'code' => 'IS',
        'name' => 'Isabel',
      ),
      6 => 
      array (
        'code' => 'MK',
        'name' => 'Makira',
      ),
      7 => 
      array (
        'code' => 'ML',
        'name' => 'Malaita',
      ),
      8 => 
      array (
        'code' => 'RB',
        'name' => 'Rennell and Bellona',
      ),
      9 => 
      array (
        'code' => 'TM',
        'name' => 'Temotu',
      ),
      10 => 
      array (
        'code' => 'WE',
        'name' => 'Western',
      ),
    ),
    'SC' => 
    array (
      1 => 
      array (
        'code' => 'AP',
        'name' => 'Anse aux Pins',
      ),
      2 => 
      array (
        'code' => 'AB',
        'name' => 'Anse Boileau',
      ),
      3 => 
      array (
        'code' => 'AE',
        'name' => 'Anse Etoile',
      ),
      4 => 
      array (
        'code' => 'AL',
        'name' => 'Anse Louis',
      ),
      5 => 
      array (
        'code' => 'AR',
        'name' => 'Anse Royale',
      ),
      6 => 
      array (
        'code' => 'BL',
        'name' => 'Baie Lazare',
      ),
      7 => 
      array (
        'code' => 'BS',
        'name' => 'Baie Sainte Anne',
      ),
      8 => 
      array (
        'code' => 'BV',
        'name' => 'Beau Vallon',
      ),
      9 => 
      array (
        'code' => 'BA',
        'name' => 'Bel Air',
      ),
      10 => 
      array (
        'code' => 'BO',
        'name' => 'Bel Ombre',
      ),
      11 => 
      array (
        'code' => 'CA',
        'name' => 'Cascade',
      ),
      12 => 
      array (
        'code' => 'GL',
        'name' => 'Glacis',
      ),
      13 => 
      array (
        'code' => 'GM',
        'name' => 'Grand\' Anse (on Mahe)',
      ),
      14 => 
      array (
        'code' => 'GP',
        'name' => 'Grand\' Anse (on Praslin)',
      ),
      15 => 
      array (
        'code' => 'DG',
        'name' => 'La Digue',
      ),
      16 => 
      array (
        'code' => 'RA',
        'name' => 'La Riviere Anglaise',
      ),
      17 => 
      array (
        'code' => 'MB',
        'name' => 'Mont Buxton',
      ),
      18 => 
      array (
        'code' => 'MF',
        'name' => 'Mont Fleuri',
      ),
      19 => 
      array (
        'code' => 'PL',
        'name' => 'Plaisance',
      ),
      20 => 
      array (
        'code' => 'PR',
        'name' => 'Pointe La Rue',
      ),
      21 => 
      array (
        'code' => 'PG',
        'name' => 'Port Glaud',
      ),
      22 => 
      array (
        'code' => 'SL',
        'name' => 'Saint Louis',
      ),
      23 => 
      array (
        'code' => 'TA',
        'name' => 'Takamaka',
      ),
    ),
    'SD' => 
    array (
      1 => 
      array (
        'code' => 'ANL',
        'name' => 'A\'ali an Nil',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'Al Bahr al Ahmar',
      ),
      3 => 
      array (
        'code' => 'BRT',
        'name' => 'Al Buhayrat',
      ),
      4 => 
      array (
        'code' => 'JZR',
        'name' => 'Al Jazirah',
      ),
      5 => 
      array (
        'code' => 'KRT',
        'name' => 'Al Khartum',
      ),
      6 => 
      array (
        'code' => 'QDR',
        'name' => 'Al Qadarif',
      ),
      7 => 
      array (
        'code' => 'WDH',
        'name' => 'Al Wahdah',
      ),
      8 => 
      array (
        'code' => 'ANB',
        'name' => 'An Nil al Abyad',
      ),
      9 => 
      array (
        'code' => 'ANZ',
        'name' => 'An Nil al Azraq',
      ),
      10 => 
      array (
        'code' => 'ASH',
        'name' => 'Ash Shamaliyah',
      ),
      11 => 
      array (
        'code' => 'BJA',
        'name' => 'Bahr al Jabal',
      ),
      12 => 
      array (
        'code' => 'GIS',
        'name' => 'Gharb al Istiwa\'iyah',
      ),
      13 => 
      array (
        'code' => 'GBG',
        'name' => 'Gharb Bahr al Ghazal',
      ),
      14 => 
      array (
        'code' => 'GDA',
        'name' => 'Gharb Darfur',
      ),
      15 => 
      array (
        'code' => 'GKU',
        'name' => 'Gharb Kurdufan',
      ),
      16 => 
      array (
        'code' => 'JDA',
        'name' => 'Janub Darfur',
      ),
      17 => 
      array (
        'code' => 'JKU',
        'name' => 'Janub Kurdufan',
      ),
      18 => 
      array (
        'code' => 'JQL',
        'name' => 'Junqali',
      ),
      19 => 
      array (
        'code' => 'KSL',
        'name' => 'Kassala',
      ),
      20 => 
      array (
        'code' => 'NNL',
        'name' => 'Nahr an Nil',
      ),
      21 => 
      array (
        'code' => 'SBG',
        'name' => 'Shamal Bahr al Ghazal',
      ),
      22 => 
      array (
        'code' => 'SDA',
        'name' => 'Shamal Darfur',
      ),
      23 => 
      array (
        'code' => 'SKU',
        'name' => 'Shamal Kurdufan',
      ),
      24 => 
      array (
        'code' => 'SIS',
        'name' => 'Sharq al Istiwa\'iyah',
      ),
      25 => 
      array (
        'code' => 'SNR',
        'name' => 'Sinnar',
      ),
      26 => 
      array (
        'code' => 'WRB',
        'name' => 'Warab',
      ),
    ),
    'SE' => 
    array (
      1 => 
      array (
        'code' => 'K',
        'name' => 'Blekinge',
      ),
      2 => 
      array (
        'code' => 'W',
        'name' => 'Dalarna',
      ),
      3 => 
      array (
        'code' => 'I',
        'name' => 'Gotland',
      ),
      4 => 
      array (
        'code' => 'X',
        'name' => 'Gävleborg',
      ),
      5 => 
      array (
        'code' => 'N',
        'name' => 'Halland',
      ),
      6 => 
      array (
        'code' => 'Z',
        'name' => 'Jämtland',
      ),
      7 => 
      array (
        'code' => 'F',
        'name' => 'Jönköping',
      ),
      8 => 
      array (
        'code' => 'H',
        'name' => 'Kalmar',
      ),
      9 => 
      array (
        'code' => 'G',
        'name' => 'Kronoberg',
      ),
      10 => 
      array (
        'code' => 'BD',
        'name' => 'Norrbotten',
      ),
      11 => 
      array (
        'code' => 'M',
        'name' => 'Skåne',
      ),
      12 => 
      array (
        'code' => 'AB',
        'name' => 'Stockholm',
      ),
      13 => 
      array (
        'code' => 'D',
        'name' => 'Södermanland',
      ),
      14 => 
      array (
        'code' => 'C',
        'name' => 'Uppsala',
      ),
      15 => 
      array (
        'code' => 'S',
        'name' => 'Värmland',
      ),
      16 => 
      array (
        'code' => 'AC',
        'name' => 'Västerbotten',
      ),
      17 => 
      array (
        'code' => 'Y',
        'name' => 'Västernorrland',
      ),
      18 => 
      array (
        'code' => 'U',
        'name' => 'Västmanland',
      ),
      19 => 
      array (
        'code' => 'O',
        'name' => 'Västra Götaland',
      ),
      20 => 
      array (
        'code' => 'T',
        'name' => 'Örebro',
      ),
      21 => 
      array (
        'code' => 'E',
        'name' => 'Östergötland',
      ),
    ),
    'SH' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'Ascension',
      ),
      2 => 
      array (
        'code' => 'S',
        'name' => 'Saint Helena',
      ),
      3 => 
      array (
        'code' => 'T',
        'name' => 'Tristan da Cunha',
      ),
    ),
    'SI' => 
    array (
      1 => 
      array (
        'code' => '4',
        'name' => 'Štajerska',
      ),
      2 => 
      array (
        'code' => '2A',
        'name' => 'Gorenjska',
      ),
      3 => 
      array (
        'code' => '5',
        'name' => 'Prekmurje',
      ),
      4 => 
      array (
        'code' => '3',
        'name' => 'Koroška',
      ),
      5 => 
      array (
        'code' => '2B',
        'name' => 'Notranjska',
      ),
      6 => 
      array (
        'code' => '1',
        'name' => 'Primorska',
      ),
      7 => 
      array (
        'code' => '2C',
        'name' => 'Dolenjska',
      ),
      8 => 
      array (
        'code' => '2C',
        'name' => 'Bela Krajina',
      ),
    ),
    'SK' => 
    array (
      1 => 
      array (
        'code' => 'BA',
        'name' => 'Banskobystricky',
      ),
      2 => 
      array (
        'code' => 'BR',
        'name' => 'Bratislavsky',
      ),
      3 => 
      array (
        'code' => 'KO',
        'name' => 'Kosicky',
      ),
      4 => 
      array (
        'code' => 'NI',
        'name' => 'Nitriansky',
      ),
      5 => 
      array (
        'code' => 'PR',
        'name' => 'Presovsky',
      ),
      6 => 
      array (
        'code' => 'TC',
        'name' => 'Trenciansky',
      ),
      7 => 
      array (
        'code' => 'TV',
        'name' => 'Trnavsky',
      ),
      8 => 
      array (
        'code' => 'ZI',
        'name' => 'Zilinsky',
      ),
    ),
    'SL' => 
    array (
      1 => 
      array (
        'code' => 'E',
        'name' => 'Eastern',
      ),
      2 => 
      array (
        'code' => 'N',
        'name' => 'Northern',
      ),
      3 => 
      array (
        'code' => 'S',
        'name' => 'Southern',
      ),
      4 => 
      array (
        'code' => 'W',
        'name' => 'Western',
      ),
    ),
    'SM' => 
    array (
      1 => 
      array (
        'code' => 'AC',
        'name' => 'Acquaviva',
      ),
      2 => 
      array (
        'code' => 'BM',
        'name' => 'Borgo Maggiore',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'Chiesanuova',
      ),
      4 => 
      array (
        'code' => 'DO',
        'name' => 'Domagnano',
      ),
      5 => 
      array (
        'code' => 'FA',
        'name' => 'Faetano',
      ),
      6 => 
      array (
        'code' => 'FI',
        'name' => 'Fiorentino',
      ),
      7 => 
      array (
        'code' => 'MO',
        'name' => 'Montegiardino',
      ),
      8 => 
      array (
        'code' => 'SM',
        'name' => 'Citta di San Marino',
      ),
      9 => 
      array (
        'code' => 'SE',
        'name' => 'Serravalle',
      ),
    ),
    'SN' => 
    array (
      1 => 
      array (
        'code' => 'DA',
        'name' => 'Dakar',
      ),
      2 => 
      array (
        'code' => 'DI',
        'name' => 'Diourbel',
      ),
      3 => 
      array (
        'code' => 'FA',
        'name' => 'Fatick',
      ),
      4 => 
      array (
        'code' => 'KA',
        'name' => 'Kaolack',
      ),
      5 => 
      array (
        'code' => 'KO',
        'name' => 'Kolda',
      ),
      6 => 
      array (
        'code' => 'LO',
        'name' => 'Louga',
      ),
      7 => 
      array (
        'code' => 'MA',
        'name' => 'Matam',
      ),
      8 => 
      array (
        'code' => 'SL',
        'name' => 'Saint-Louis',
      ),
      9 => 
      array (
        'code' => 'TA',
        'name' => 'Tambacounda',
      ),
      10 => 
      array (
        'code' => 'TH',
        'name' => 'Thies',
      ),
      11 => 
      array (
        'code' => 'ZI',
        'name' => 'Ziguinchor',
      ),
    ),
    'SO' => 
    array (
      1 => 
      array (
        'code' => 'AW',
        'name' => 'Awdal',
      ),
      2 => 
      array (
        'code' => 'BK',
        'name' => 'Bakool',
      ),
      3 => 
      array (
        'code' => 'BN',
        'name' => 'Banaadir',
      ),
      4 => 
      array (
        'code' => 'BR',
        'name' => 'Bari',
      ),
      5 => 
      array (
        'code' => 'BY',
        'name' => 'Bay',
      ),
      6 => 
      array (
        'code' => 'GA',
        'name' => 'Galguduud',
      ),
      7 => 
      array (
        'code' => 'GE',
        'name' => 'Gedo',
      ),
      8 => 
      array (
        'code' => 'HI',
        'name' => 'Hiiraan',
      ),
      9 => 
      array (
        'code' => 'JD',
        'name' => 'Jubbada Dhexe',
      ),
      10 => 
      array (
        'code' => 'JH',
        'name' => 'Jubbada Hoose',
      ),
      11 => 
      array (
        'code' => 'MU',
        'name' => 'Mudug',
      ),
      12 => 
      array (
        'code' => 'NU',
        'name' => 'Nugaal',
      ),
      13 => 
      array (
        'code' => 'SA',
        'name' => 'Sanaag',
      ),
      14 => 
      array (
        'code' => 'SD',
        'name' => 'Shabeellaha Dhexe',
      ),
      15 => 
      array (
        'code' => 'SH',
        'name' => 'Shabeellaha Hoose',
      ),
      16 => 
      array (
        'code' => 'SL',
        'name' => 'Sool',
      ),
      17 => 
      array (
        'code' => 'TO',
        'name' => 'Togdheer',
      ),
      18 => 
      array (
        'code' => 'WG',
        'name' => 'Woqooyi Galbeed',
      ),
    ),
    'SR' => 
    array (
      1 => 
      array (
        'code' => 'BR',
        'name' => 'Brokopondo',
      ),
      2 => 
      array (
        'code' => 'CM',
        'name' => 'Commewijne',
      ),
      3 => 
      array (
        'code' => 'CR',
        'name' => 'Coronie',
      ),
      4 => 
      array (
        'code' => 'MA',
        'name' => 'Marowijne',
      ),
      5 => 
      array (
        'code' => 'NI',
        'name' => 'Nickerie',
      ),
      6 => 
      array (
        'code' => 'PA',
        'name' => 'Para',
      ),
      7 => 
      array (
        'code' => 'PM',
        'name' => 'Paramaribo',
      ),
      9 => 
      array (
        'code' => 'SA',
        'name' => 'Saramacca',
      ),
      10 => 
      array (
        'code' => 'SI',
        'name' => 'Sipaliwini',
      ),
      11 => 
      array (
        'code' => 'WA',
        'name' => 'Wanica',
      ),
    ),
    'ST' => 
    array (
      1 => 
      array (
        'code' => 'S',
        'name' => 'Sao Tome',
      ),
      2 => 
      array (
        'code' => 'P',
        'name' => 'Principe',
      ),
    ),
    'SV' => 
    array (
      1 => 
      array (
        'code' => 'AH',
        'name' => 'Ahuachapan',
      ),
      2 => 
      array (
        'code' => 'CA',
        'name' => 'Cabanas',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'Chalatenango',
      ),
      4 => 
      array (
        'code' => 'CU',
        'name' => 'Cuscatlan',
      ),
      5 => 
      array (
        'code' => 'LB',
        'name' => 'La Libertad',
      ),
      6 => 
      array (
        'code' => 'PZ',
        'name' => 'La Paz',
      ),
      7 => 
      array (
        'code' => 'UN',
        'name' => 'La Union',
      ),
      8 => 
      array (
        'code' => 'MO',
        'name' => 'Morazan',
      ),
      9 => 
      array (
        'code' => 'SM',
        'name' => 'San Miguel',
      ),
      10 => 
      array (
        'code' => 'SS',
        'name' => 'San Salvador',
      ),
      11 => 
      array (
        'code' => 'SV',
        'name' => 'San Vicente',
      ),
      12 => 
      array (
        'code' => 'SA',
        'name' => 'Santa Ana',
      ),
      13 => 
      array (
        'code' => 'SO',
        'name' => 'Sonsonate',
      ),
      14 => 
      array (
        'code' => 'US',
        'name' => 'Usulutan',
      ),
    ),
    'SY' => 
    array (
      1 => 
      array (
        'code' => 'HA',
        'name' => 'Al Hasakah',
      ),
      2 => 
      array (
        'code' => 'LA',
        'name' => 'Al Ladhiqiyah',
      ),
      3 => 
      array (
        'code' => 'QU',
        'name' => 'Al Qunaytirah',
      ),
      4 => 
      array (
        'code' => 'RQ',
        'name' => 'Ar Raqqah',
      ),
      5 => 
      array (
        'code' => 'SU',
        'name' => 'As Suwayda',
      ),
      6 => 
      array (
        'code' => 'DA',
        'name' => 'Dara',
      ),
      7 => 
      array (
        'code' => 'DZ',
        'name' => 'Dayr az Zawr',
      ),
      8 => 
      array (
        'code' => 'DI',
        'name' => 'Dimashq',
      ),
      9 => 
      array (
        'code' => 'HL',
        'name' => 'Halab',
      ),
      10 => 
      array (
        'code' => 'HM',
        'name' => 'Hamah',
      ),
      11 => 
      array (
        'code' => 'HI',
        'name' => 'Hims',
      ),
      12 => 
      array (
        'code' => 'ID',
        'name' => 'Idlib',
      ),
      13 => 
      array (
        'code' => 'RD',
        'name' => 'Rif Dimashq',
      ),
      14 => 
      array (
        'code' => 'TA',
        'name' => 'Tartus',
      ),
    ),
    'SZ' => 
    array (
      1 => 
      array (
        'code' => 'H',
        'name' => 'Hhohho',
      ),
      2 => 
      array (
        'code' => 'L',
        'name' => 'Lubombo',
      ),
      3 => 
      array (
        'code' => 'M',
        'name' => 'Manzini',
      ),
      4 => 
      array (
        'code' => 'S',
        'name' => 'Shishelweni',
      ),
    ),
    'TC' => 
    array (
      1 => 
      array (
        'code' => 'AC',
        'name' => 'Ambergris Cays',
      ),
      2 => 
      array (
        'code' => 'DC',
        'name' => 'Dellis Cay',
      ),
      3 => 
      array (
        'code' => 'FC',
        'name' => 'French Cay',
      ),
      4 => 
      array (
        'code' => 'LW',
        'name' => 'Little Water Cay',
      ),
      5 => 
      array (
        'code' => 'RC',
        'name' => 'Parrot Cay',
      ),
      6 => 
      array (
        'code' => 'PN',
        'name' => 'Pine Cay',
      ),
      7 => 
      array (
        'code' => 'SL',
        'name' => 'Salt Cay',
      ),
      8 => 
      array (
        'code' => 'GT',
        'name' => 'Grand Turk',
      ),
      9 => 
      array (
        'code' => 'SC',
        'name' => 'South Caicos',
      ),
      10 => 
      array (
        'code' => 'EC',
        'name' => 'East Caicos',
      ),
      11 => 
      array (
        'code' => 'MC',
        'name' => 'Middle Caicos',
      ),
      12 => 
      array (
        'code' => 'NC',
        'name' => 'North Caicos',
      ),
      13 => 
      array (
        'code' => 'PR',
        'name' => 'Providenciales',
      ),
      14 => 
      array (
        'code' => 'WC',
        'name' => 'West Caicos',
      ),
    ),
    'TD' => 
    array (
      1 => 
      array (
        'code' => 'BA',
        'name' => 'Batha',
      ),
      2 => 
      array (
        'code' => 'BI',
        'name' => 'Biltine',
      ),
      3 => 
      array (
        'code' => 'BE',
        'name' => 'Borkou-Ennedi-Tibesti',
      ),
      4 => 
      array (
        'code' => 'CB',
        'name' => 'Chari-Baguirmi',
      ),
      5 => 
      array (
        'code' => 'GU',
        'name' => 'Guera',
      ),
      6 => 
      array (
        'code' => 'KA',
        'name' => 'Kanem',
      ),
      7 => 
      array (
        'code' => 'LA',
        'name' => 'Lac',
      ),
      8 => 
      array (
        'code' => 'LC',
        'name' => 'Logone Occidental',
      ),
      9 => 
      array (
        'code' => 'LR',
        'name' => 'Logone Oriental',
      ),
      10 => 
      array (
        'code' => 'MK',
        'name' => 'Mayo-Kebbi',
      ),
      11 => 
      array (
        'code' => 'MC',
        'name' => 'Moyen-Chari',
      ),
      12 => 
      array (
        'code' => 'OU',
        'name' => 'Ouaddai',
      ),
      13 => 
      array (
        'code' => 'SA',
        'name' => 'Salamat',
      ),
      14 => 
      array (
        'code' => 'TA',
        'name' => 'Tandjile',
      ),
    ),
    'TF' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => 'Iles Crozet',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => 'Iles Kerguelen',
      ),
      3 => 
      array (
        'code' => 'A',
        'name' => 'Ile Amsterdam',
      ),
      4 => 
      array (
        'code' => 'P',
        'name' => 'Ile Saint-Paul',
      ),
      5 => 
      array (
        'code' => 'D',
        'name' => 'Adelie Land',
      ),
    ),
    'TG' => 
    array (
      1 => 
      array (
        'code' => 'K',
        'name' => 'Kara',
      ),
      2 => 
      array (
        'code' => 'P',
        'name' => 'Plateaux',
      ),
      3 => 
      array (
        'code' => 'S',
        'name' => 'Savanes',
      ),
      4 => 
      array (
        'code' => 'C',
        'name' => 'Centrale',
      ),
      5 => 
      array (
        'code' => 'M',
        'name' => 'Maritime',
      ),
    ),
    'TH' => 
    array (
      1 => 
      array (
        'code' => 'Amnat Charoen',
        'name' => 'Amnat Charoen',
      ),
      2 => 
      array (
        'code' => 'Ang Thong',
        'name' => 'Ang Thong',
      ),
      3 => 
      array (
        'code' => 'Ayutthaya',
        'name' => 'Ayutthaya',
      ),
      4 => 
      array (
        'code' => 'Bangkok',
        'name' => 'Bangkok',
      ),
      5 => 
      array (
        'code' => 'Buriram',
        'name' => 'Buriram',
      ),
      6 => 
      array (
        'code' => 'Chachoengsao',
        'name' => 'Chachoengsao',
      ),
      7 => 
      array (
        'code' => 'Chai Nat',
        'name' => 'Chai Nat',
      ),
      8 => 
      array (
        'code' => 'Chaiyaphum',
        'name' => 'Chaiyaphum',
      ),
      9 => 
      array (
        'code' => 'Chanthaburi',
        'name' => 'Chanthaburi',
      ),
      10 => 
      array (
        'code' => 'Chiang Mai',
        'name' => 'Chiang Mai',
      ),
      11 => 
      array (
        'code' => 'Chiang Rai',
        'name' => 'Chiang Rai',
      ),
      12 => 
      array (
        'code' => 'Chon Buri',
        'name' => 'Chon Buri',
      ),
      13 => 
      array (
        'code' => 'Chumphon',
        'name' => 'Chumphon',
      ),
      14 => 
      array (
        'code' => 'Kalasin',
        'name' => 'Kalasin',
      ),
      15 => 
      array (
        'code' => 'Kamphaeng Phet',
        'name' => 'Kamphaeng Phet',
      ),
      16 => 
      array (
        'code' => 'Kanchanaburi',
        'name' => 'Kanchanaburi',
      ),
      17 => 
      array (
        'code' => 'Khon Kaen',
        'name' => 'Khon Kaen',
      ),
      18 => 
      array (
        'code' => 'Krabi',
        'name' => 'Krabi',
      ),
      19 => 
      array (
        'code' => 'Lampang',
        'name' => 'Lampang',
      ),
      20 => 
      array (
        'code' => 'Lamphun',
        'name' => 'Lamphun',
      ),
      21 => 
      array (
        'code' => 'Loei',
        'name' => 'Loei',
      ),
      22 => 
      array (
        'code' => 'Lop Buri',
        'name' => 'Lop Buri',
      ),
      23 => 
      array (
        'code' => 'Mae Hong Son',
        'name' => 'Mae Hong Son',
      ),
      24 => 
      array (
        'code' => 'Maha Sarakham',
        'name' => 'Maha Sarakham',
      ),
      25 => 
      array (
        'code' => 'Mukdahan',
        'name' => 'Mukdahan',
      ),
      26 => 
      array (
        'code' => 'Nakhon Nayok',
        'name' => 'Nakhon Nayok',
      ),
      27 => 
      array (
        'code' => 'Nakhon Pathom',
        'name' => 'Nakhon Pathom',
      ),
      28 => 
      array (
        'code' => 'Nakhon Phanom',
        'name' => 'Nakhon Phanom',
      ),
      29 => 
      array (
        'code' => 'Nakhon Ratchasima',
        'name' => 'Nakhon Ratchasima',
      ),
      30 => 
      array (
        'code' => 'Nakhon Sawan',
        'name' => 'Nakhon Sawan',
      ),
      31 => 
      array (
        'code' => 'Nakhon Si Thammarat',
        'name' => 'Nakhon Si Thammarat',
      ),
      32 => 
      array (
        'code' => 'Nan',
        'name' => 'Nan',
      ),
      33 => 
      array (
        'code' => 'Narathiwat',
        'name' => 'Narathiwat',
      ),
      34 => 
      array (
        'code' => 'Nong Bua Lamphu',
        'name' => 'Nong Bua Lamphu',
      ),
      35 => 
      array (
        'code' => 'Nong Khai',
        'name' => 'Nong Khai',
      ),
      36 => 
      array (
        'code' => 'Nonthaburi',
        'name' => 'Nonthaburi',
      ),
      37 => 
      array (
        'code' => 'Pathum Thani',
        'name' => 'Pathum Thani',
      ),
      38 => 
      array (
        'code' => 'Pattani',
        'name' => 'Pattani',
      ),
      39 => 
      array (
        'code' => 'Phangnga',
        'name' => 'Phangnga',
      ),
      40 => 
      array (
        'code' => 'Phatthalung',
        'name' => 'Phatthalung',
      ),
      41 => 
      array (
        'code' => 'Phayao',
        'name' => 'Phayao',
      ),
      42 => 
      array (
        'code' => 'Phetchabun',
        'name' => 'Phetchabun',
      ),
      43 => 
      array (
        'code' => 'Phetchaburi',
        'name' => 'Phetchaburi',
      ),
      44 => 
      array (
        'code' => 'Phichit',
        'name' => 'Phichit',
      ),
      45 => 
      array (
        'code' => 'Phitsanulok',
        'name' => 'Phitsanulok',
      ),
      46 => 
      array (
        'code' => 'Phrae',
        'name' => 'Phrae',
      ),
      47 => 
      array (
        'code' => 'Phuket',
        'name' => 'Phuket',
      ),
      48 => 
      array (
        'code' => 'Prachin Buri',
        'name' => 'Prachin Buri',
      ),
      49 => 
      array (
        'code' => 'Prachuap Khiri Khan',
        'name' => 'Prachuap Khiri Khan',
      ),
      50 => 
      array (
        'code' => 'Ranong',
        'name' => 'Ranong',
      ),
      51 => 
      array (
        'code' => 'Ratchaburi',
        'name' => 'Ratchaburi',
      ),
      52 => 
      array (
        'code' => 'Rayong',
        'name' => 'Rayong',
      ),
      53 => 
      array (
        'code' => 'Roi Et',
        'name' => 'Roi Et',
      ),
      54 => 
      array (
        'code' => 'Sa Kaeo',
        'name' => 'Sa Kaeo',
      ),
      55 => 
      array (
        'code' => 'Sakon Nakhon',
        'name' => 'Sakon Nakhon',
      ),
      56 => 
      array (
        'code' => 'Samut Prakan',
        'name' => 'Samut Prakan',
      ),
      57 => 
      array (
        'code' => 'Samut Sakhon',
        'name' => 'Samut Sakhon',
      ),
      58 => 
      array (
        'code' => 'Samut Songkhram',
        'name' => 'Samut Songkhram',
      ),
      59 => 
      array (
        'code' => 'Sara Buri',
        'name' => 'Sara Buri',
      ),
      60 => 
      array (
        'code' => 'Satun',
        'name' => 'Satun',
      ),
      61 => 
      array (
        'code' => 'Sing Buri',
        'name' => 'Sing Buri',
      ),
      62 => 
      array (
        'code' => 'Sisaket',
        'name' => 'Sisaket',
      ),
      63 => 
      array (
        'code' => 'Songkhla',
        'name' => 'Songkhla',
      ),
      64 => 
      array (
        'code' => 'Sukhothai',
        'name' => 'Sukhothai',
      ),
      65 => 
      array (
        'code' => 'Suphan Buri',
        'name' => 'Suphan Buri',
      ),
      66 => 
      array (
        'code' => 'Surat Thani',
        'name' => 'Surat Thani',
      ),
      67 => 
      array (
        'code' => 'Surin',
        'name' => 'Surin',
      ),
      68 => 
      array (
        'code' => 'Tak',
        'name' => 'Tak',
      ),
      69 => 
      array (
        'code' => 'Trang',
        'name' => 'Trang',
      ),
      70 => 
      array (
        'code' => 'Trat',
        'name' => 'Trat',
      ),
      71 => 
      array (
        'code' => 'Ubon Ratchathani',
        'name' => 'Ubon Ratchathani',
      ),
      72 => 
      array (
        'code' => 'Udon Thani',
        'name' => 'Udon Thani',
      ),
      73 => 
      array (
        'code' => 'Uthai Thani',
        'name' => 'Uthai Thani',
      ),
      74 => 
      array (
        'code' => 'Uttaradit',
        'name' => 'Uttaradit',
      ),
      75 => 
      array (
        'code' => 'Yala',
        'name' => 'Yala',
      ),
      76 => 
      array (
        'code' => 'Yasothon',
        'name' => 'Yasothon',
      ),
    ),
    'TJ' => 
    array (
      1 => 
      array (
        'code' => 'GB',
        'name' => 'Gorno-Badakhstan',
      ),
      2 => 
      array (
        'code' => 'KT',
        'name' => 'Khatlon',
      ),
      3 => 
      array (
        'code' => 'SU',
        'name' => 'Sughd',
      ),
    ),
    'TK' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'Atafu',
      ),
      2 => 
      array (
        'code' => 'F',
        'name' => 'Fakaofo',
      ),
      3 => 
      array (
        'code' => 'N',
        'name' => 'Nukunonu',
      ),
    ),
    'TM' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'Ahal Welayaty',
      ),
      2 => 
      array (
        'code' => 'B',
        'name' => 'Balkan Welayaty',
      ),
      3 => 
      array (
        'code' => 'D',
        'name' => 'Dashhowuz Welayaty',
      ),
      4 => 
      array (
        'code' => 'L',
        'name' => 'Lebap Welayaty',
      ),
      5 => 
      array (
        'code' => 'M',
        'name' => 'Mary Welayaty',
      ),
    ),
    'TN' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'Ariana',
      ),
      2 => 
      array (
        'code' => 'BJ',
        'name' => 'Beja',
      ),
      3 => 
      array (
        'code' => 'BA',
        'name' => 'Ben Arous',
      ),
      4 => 
      array (
        'code' => 'BI',
        'name' => 'Bizerte',
      ),
      5 => 
      array (
        'code' => 'GB',
        'name' => 'Gabes',
      ),
      6 => 
      array (
        'code' => 'GF',
        'name' => 'Gafsa',
      ),
      7 => 
      array (
        'code' => 'JE',
        'name' => 'Jendouba',
      ),
      8 => 
      array (
        'code' => 'KR',
        'name' => 'Kairouan',
      ),
      9 => 
      array (
        'code' => 'KS',
        'name' => 'Kasserine',
      ),
      10 => 
      array (
        'code' => 'KB',
        'name' => 'Kebili',
      ),
      11 => 
      array (
        'code' => 'KF',
        'name' => 'Kef',
      ),
      12 => 
      array (
        'code' => 'MH',
        'name' => 'Mahdia',
      ),
      13 => 
      array (
        'code' => 'MN',
        'name' => 'Manouba',
      ),
      14 => 
      array (
        'code' => 'ME',
        'name' => 'Medenine',
      ),
      15 => 
      array (
        'code' => 'MO',
        'name' => 'Monastir',
      ),
      16 => 
      array (
        'code' => 'NA',
        'name' => 'Nabeul',
      ),
      17 => 
      array (
        'code' => 'SF',
        'name' => 'Sfax',
      ),
      18 => 
      array (
        'code' => 'SD',
        'name' => 'Sidi',
      ),
      19 => 
      array (
        'code' => 'SL',
        'name' => 'Siliana',
      ),
      20 => 
      array (
        'code' => 'SO',
        'name' => 'Sousse',
      ),
      21 => 
      array (
        'code' => 'TA',
        'name' => 'Tataouine',
      ),
      22 => 
      array (
        'code' => 'TO',
        'name' => 'Tozeur',
      ),
      23 => 
      array (
        'code' => 'TU',
        'name' => 'Tunis',
      ),
      24 => 
      array (
        'code' => 'ZA',
        'name' => 'Zaghouan',
      ),
    ),
    'TO' => 
    array (
      1 => 
      array (
        'code' => 'H',
        'name' => 'Ha\'apai',
      ),
      2 => 
      array (
        'code' => 'T',
        'name' => 'Tongatapu',
      ),
      3 => 
      array (
        'code' => 'V',
        'name' => 'Vava\'u',
      ),
    ),
    'TP' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Aileu',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'Ainaro',
      ),
      3 => 
      array (
        'code' => 'BA',
        'name' => 'Baucau',
      ),
      4 => 
      array (
        'code' => 'BO',
        'name' => 'Bobonaro',
      ),
      5 => 
      array (
        'code' => 'CO',
        'name' => 'Cova Lima',
      ),
      6 => 
      array (
        'code' => 'DI',
        'name' => 'Dili',
      ),
      7 => 
      array (
        'code' => 'ER',
        'name' => 'Ermera',
      ),
      8 => 
      array (
        'code' => 'LA',
        'name' => 'Lautem',
      ),
      9 => 
      array (
        'code' => 'LI',
        'name' => 'Liquica',
      ),
      10 => 
      array (
        'code' => 'MT',
        'name' => 'Manatuto',
      ),
      11 => 
      array (
        'code' => 'MF',
        'name' => 'Manufahi',
      ),
      12 => 
      array (
        'code' => 'OE',
        'name' => 'Oecussi',
      ),
      13 => 
      array (
        'code' => 'VI',
        'name' => 'Viqueque',
      ),
    ),
    'TR' => 
    array (
      1 => 
      array (
        'code' => 'ADA',
        'name' => 'Adana',
      ),
      2 => 
      array (
        'code' => 'ADI',
        'name' => 'Adiyaman',
      ),
      3 => 
      array (
        'code' => 'AFY',
        'name' => 'Afyonkarahisar',
      ),
      4 => 
      array (
        'code' => 'AGR',
        'name' => 'Agri',
      ),
      5 => 
      array (
        'code' => 'AKS',
        'name' => 'Aksaray',
      ),
      6 => 
      array (
        'code' => 'AMA',
        'name' => 'Amasya',
      ),
      7 => 
      array (
        'code' => 'ANK',
        'name' => 'Ankara',
      ),
      8 => 
      array (
        'code' => 'ANT',
        'name' => 'Antalya',
      ),
      9 => 
      array (
        'code' => 'ARD',
        'name' => 'Ardahan',
      ),
      10 => 
      array (
        'code' => 'ART',
        'name' => 'Artvin',
      ),
      11 => 
      array (
        'code' => 'AYI',
        'name' => 'Aydin',
      ),
      12 => 
      array (
        'code' => 'BAL',
        'name' => 'Balikesir',
      ),
      13 => 
      array (
        'code' => 'BAR',
        'name' => 'Bartin',
      ),
      14 => 
      array (
        'code' => 'BAT',
        'name' => 'Batman',
      ),
      15 => 
      array (
        'code' => 'BAY',
        'name' => 'Bayburt',
      ),
      16 => 
      array (
        'code' => 'BIL',
        'name' => 'Bilecik',
      ),
      17 => 
      array (
        'code' => 'BIN',
        'name' => 'Bingol',
      ),
      18 => 
      array (
        'code' => 'BIT',
        'name' => 'Bitlis',
      ),
      19 => 
      array (
        'code' => 'BOL',
        'name' => 'Bolu',
      ),
      20 => 
      array (
        'code' => 'BRD',
        'name' => 'Burdur',
      ),
      21 => 
      array (
        'code' => 'BRS',
        'name' => 'Bursa',
      ),
      22 => 
      array (
        'code' => 'CKL',
        'name' => 'Canakkale',
      ),
      23 => 
      array (
        'code' => 'CKR',
        'name' => 'Cankiri',
      ),
      24 => 
      array (
        'code' => 'COR',
        'name' => 'Corum',
      ),
      25 => 
      array (
        'code' => 'DEN',
        'name' => 'Denizli',
      ),
      26 => 
      array (
        'code' => 'DIY',
        'name' => 'Diyarbakir',
      ),
      27 => 
      array (
        'code' => 'DUZ',
        'name' => 'Duzce',
      ),
      28 => 
      array (
        'code' => 'EDI',
        'name' => 'Edirne',
      ),
      29 => 
      array (
        'code' => 'ELA',
        'name' => 'Elazig',
      ),
      30 => 
      array (
        'code' => 'EZC',
        'name' => 'Erzincan',
      ),
      31 => 
      array (
        'code' => 'EZR',
        'name' => 'Erzurum',
      ),
      32 => 
      array (
        'code' => 'ESK',
        'name' => 'Eskisehir',
      ),
      33 => 
      array (
        'code' => 'GAZ',
        'name' => 'Gaziantep',
      ),
      34 => 
      array (
        'code' => 'GIR',
        'name' => 'Giresun',
      ),
      35 => 
      array (
        'code' => 'GMS',
        'name' => 'Gumushane',
      ),
      36 => 
      array (
        'code' => 'HKR',
        'name' => 'Hakkari',
      ),
      37 => 
      array (
        'code' => 'HTY',
        'name' => 'Hatay',
      ),
      38 => 
      array (
        'code' => 'IGD',
        'name' => 'Igdir',
      ),
      39 => 
      array (
        'code' => 'ISP',
        'name' => 'Isparta',
      ),
      40 => 
      array (
        'code' => 'IST',
        'name' => 'Istanbul',
      ),
      41 => 
      array (
        'code' => 'IZM',
        'name' => 'Izmir',
      ),
      42 => 
      array (
        'code' => 'KAH',
        'name' => 'Kahramanmaras',
      ),
      43 => 
      array (
        'code' => 'KRB',
        'name' => 'Karabuk',
      ),
      44 => 
      array (
        'code' => 'KRM',
        'name' => 'Karaman',
      ),
      45 => 
      array (
        'code' => 'KRS',
        'name' => 'Kars',
      ),
      46 => 
      array (
        'code' => 'KAS',
        'name' => 'Kastamonu',
      ),
      47 => 
      array (
        'code' => 'KAY',
        'name' => 'Kayseri',
      ),
      48 => 
      array (
        'code' => 'KLS',
        'name' => 'Kilis',
      ),
      49 => 
      array (
        'code' => 'KRK',
        'name' => 'Kirikkale',
      ),
      50 => 
      array (
        'code' => 'KLR',
        'name' => 'Kirklareli',
      ),
      51 => 
      array (
        'code' => 'KRH',
        'name' => 'Kirsehir',
      ),
      52 => 
      array (
        'code' => 'KOC',
        'name' => 'Kocaeli',
      ),
      53 => 
      array (
        'code' => 'KON',
        'name' => 'Konya',
      ),
      54 => 
      array (
        'code' => 'KUT',
        'name' => 'Kutahya',
      ),
      55 => 
      array (
        'code' => 'MAL',
        'name' => 'Malatya',
      ),
      56 => 
      array (
        'code' => 'MAN',
        'name' => 'Manisa',
      ),
      57 => 
      array (
        'code' => 'MAR',
        'name' => 'Mardin',
      ),
      58 => 
      array (
        'code' => 'MER',
        'name' => 'Mersin',
      ),
      59 => 
      array (
        'code' => 'MUG',
        'name' => 'Mugla',
      ),
      60 => 
      array (
        'code' => 'MUS',
        'name' => 'Mus',
      ),
      61 => 
      array (
        'code' => 'NEV',
        'name' => 'Nevsehir',
      ),
      62 => 
      array (
        'code' => 'NIG',
        'name' => 'Nigde',
      ),
      63 => 
      array (
        'code' => 'ORD',
        'name' => 'Ordu',
      ),
      64 => 
      array (
        'code' => 'OSM',
        'name' => 'Osmaniye',
      ),
      65 => 
      array (
        'code' => 'RIZ',
        'name' => 'Rize',
      ),
      66 => 
      array (
        'code' => 'SAK',
        'name' => 'Sakarya',
      ),
      67 => 
      array (
        'code' => 'SAM',
        'name' => 'Samsun',
      ),
      68 => 
      array (
        'code' => 'SAN',
        'name' => 'Sanliurfa',
      ),
      69 => 
      array (
        'code' => 'SII',
        'name' => 'Siirt',
      ),
      70 => 
      array (
        'code' => 'SIN',
        'name' => 'Sinop',
      ),
      71 => 
      array (
        'code' => 'SIR',
        'name' => 'Sirnak',
      ),
      72 => 
      array (
        'code' => 'SIV',
        'name' => 'Sivas',
      ),
      73 => 
      array (
        'code' => 'TEL',
        'name' => 'Tekirdag',
      ),
      74 => 
      array (
        'code' => 'TOK',
        'name' => 'Tokat',
      ),
      75 => 
      array (
        'code' => 'TRA',
        'name' => 'Trabzon',
      ),
      76 => 
      array (
        'code' => 'TUN',
        'name' => 'Tunceli',
      ),
      77 => 
      array (
        'code' => 'USK',
        'name' => 'Usak',
      ),
      78 => 
      array (
        'code' => 'VAN',
        'name' => 'Van',
      ),
      79 => 
      array (
        'code' => 'YAL',
        'name' => 'Yalova',
      ),
      80 => 
      array (
        'code' => 'YOZ',
        'name' => 'Yozgat',
      ),
      81 => 
      array (
        'code' => 'ZON',
        'name' => 'Zonguldak',
      ),
    ),
    'TT' => 
    array (
      1 => 
      array (
        'code' => 'CT',
        'name' => 'Couva/Tabaquite/Talparo',
      ),
      2 => 
      array (
        'code' => 'DM',
        'name' => 'Diego Martin',
      ),
      3 => 
      array (
        'code' => 'MR',
        'name' => 'Mayaro/Rio Claro',
      ),
      4 => 
      array (
        'code' => 'PD',
        'name' => 'Penal/Debe',
      ),
      5 => 
      array (
        'code' => 'PT',
        'name' => 'Princes Town',
      ),
      6 => 
      array (
        'code' => 'SG',
        'name' => 'Sangre Grande',
      ),
      7 => 
      array (
        'code' => 'SL',
        'name' => 'San Juan/Laventille',
      ),
      8 => 
      array (
        'code' => 'SI',
        'name' => 'Siparia',
      ),
      9 => 
      array (
        'code' => 'TP',
        'name' => 'Tunapuna/Piarco',
      ),
      10 => 
      array (
        'code' => 'PS',
        'name' => 'Port of Spain',
      ),
      11 => 
      array (
        'code' => 'SF',
        'name' => 'San Fernando',
      ),
      12 => 
      array (
        'code' => 'AR',
        'name' => 'Arima',
      ),
      13 => 
      array (
        'code' => 'PF',
        'name' => 'Point Fortin',
      ),
      14 => 
      array (
        'code' => 'CH',
        'name' => 'Chaguanas',
      ),
      15 => 
      array (
        'code' => 'TO',
        'name' => 'Tobago',
      ),
    ),
    'TV' => 
    array (
      1 => 
      array (
        'code' => 'NMG',
        'name' => 'Nanumanga',
      ),
      2 => 
      array (
        'code' => 'NLK',
        'name' => 'Niulakita',
      ),
      3 => 
      array (
        'code' => 'NTO',
        'name' => 'Niutao',
      ),
      4 => 
      array (
        'code' => 'FUN',
        'name' => 'Funafuti',
      ),
      5 => 
      array (
        'code' => 'NME',
        'name' => 'Nanumea',
      ),
      6 => 
      array (
        'code' => 'NUI',
        'name' => 'Nui',
      ),
      7 => 
      array (
        'code' => 'NFT',
        'name' => 'Nukufetau',
      ),
      8 => 
      array (
        'code' => 'NLL',
        'name' => 'Nukulaelae',
      ),
      9 => 
      array (
        'code' => 'VAI',
        'name' => 'Vaitupu',
      ),
    ),
    'TW' => 
    array (
      1 => 
      array (
        'code' => 'CH',
        'name' => 'Chang-hua',
      ),
      2 => 
      array (
        'code' => 'CI',
        'name' => 'Chia-i',
      ),
      3 => 
      array (
        'code' => 'HS',
        'name' => 'Hsin-chu',
      ),
      4 => 
      array (
        'code' => 'HL',
        'name' => 'Hua-lien',
      ),
      5 => 
      array (
        'code' => 'IL',
        'name' => 'I-lan',
      ),
      6 => 
      array (
        'code' => 'KH',
        'name' => 'Kao-hsiung county',
      ),
      7 => 
      array (
        'code' => 'KM',
        'name' => 'Kin-men',
      ),
      8 => 
      array (
        'code' => 'LC',
        'name' => 'Lien-chiang',
      ),
      9 => 
      array (
        'code' => 'ML',
        'name' => 'Miao-li',
      ),
      10 => 
      array (
        'code' => 'NT',
        'name' => 'Nan-t\'ou',
      ),
      11 => 
      array (
        'code' => 'PH',
        'name' => 'P\'eng-hu',
      ),
      12 => 
      array (
        'code' => 'PT',
        'name' => 'P\'ing-tung',
      ),
      13 => 
      array (
        'code' => 'TG',
        'name' => 'T\'ai-chung',
      ),
      14 => 
      array (
        'code' => 'TA',
        'name' => 'T\'ai-nan',
      ),
      15 => 
      array (
        'code' => 'TP',
        'name' => 'T\'ai-pei county',
      ),
      16 => 
      array (
        'code' => 'TT',
        'name' => 'T\'ai-tung',
      ),
      17 => 
      array (
        'code' => 'TY',
        'name' => 'T\'ao-yuan',
      ),
      18 => 
      array (
        'code' => 'YL',
        'name' => 'Yun-lin',
      ),
      19 => 
      array (
        'code' => 'CC',
        'name' => 'Chia-i city',
      ),
      20 => 
      array (
        'code' => 'CL',
        'name' => 'Chi-lung',
      ),
      21 => 
      array (
        'code' => 'HC',
        'name' => 'Hsin-chu',
      ),
      22 => 
      array (
        'code' => 'TH',
        'name' => 'T\'ai-chung',
      ),
      23 => 
      array (
        'code' => 'TN',
        'name' => 'T\'ai-nan',
      ),
      24 => 
      array (
        'code' => 'KC',
        'name' => 'Kao-hsiung city',
      ),
      25 => 
      array (
        'code' => 'TC',
        'name' => 'T\'ai-pei city',
      ),
    ),
    'TZ' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'Arusha',
      ),
      2 => 
      array (
        'code' => 'DS',
        'name' => 'Dar es Salaam',
      ),
      3 => 
      array (
        'code' => 'DO',
        'name' => 'Dodoma',
      ),
      4 => 
      array (
        'code' => 'IR',
        'name' => 'Iringa',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'Kagera',
      ),
      6 => 
      array (
        'code' => 'KI',
        'name' => 'Kigoma',
      ),
      7 => 
      array (
        'code' => 'KJ',
        'name' => 'Kilimanjaro',
      ),
      8 => 
      array (
        'code' => 'LN',
        'name' => 'Lindi',
      ),
      9 => 
      array (
        'code' => 'MY',
        'name' => 'Manyara',
      ),
      10 => 
      array (
        'code' => 'MR',
        'name' => 'Mara',
      ),
      11 => 
      array (
        'code' => 'MB',
        'name' => 'Mbeya',
      ),
      12 => 
      array (
        'code' => 'MO',
        'name' => 'Morogoro',
      ),
      13 => 
      array (
        'code' => 'MT',
        'name' => 'Mtwara',
      ),
      14 => 
      array (
        'code' => 'MW',
        'name' => 'Mwanza',
      ),
      15 => 
      array (
        'code' => 'PN',
        'name' => 'Pemba North',
      ),
      16 => 
      array (
        'code' => 'PS',
        'name' => 'Pemba South',
      ),
      17 => 
      array (
        'code' => 'PW',
        'name' => 'Pwani',
      ),
      18 => 
      array (
        'code' => 'RK',
        'name' => 'Rukwa',
      ),
      19 => 
      array (
        'code' => 'RV',
        'name' => 'Ruvuma',
      ),
      20 => 
      array (
        'code' => 'SH',
        'name' => 'Shinyanga',
      ),
      21 => 
      array (
        'code' => 'SI',
        'name' => 'Singida',
      ),
      22 => 
      array (
        'code' => 'TB',
        'name' => 'Tabora',
      ),
      23 => 
      array (
        'code' => 'TN',
        'name' => 'Tanga',
      ),
      24 => 
      array (
        'code' => 'ZC',
        'name' => 'Zanzibar Central/South',
      ),
      25 => 
      array (
        'code' => 'ZN',
        'name' => 'Zanzibar North',
      ),
      26 => 
      array (
        'code' => 'ZU',
        'name' => 'Zanzibar Urban/West',
      ),
    ),
    'UA' => 
    array (
      1 => 
      array (
        'code' => 'CK',
        'name' => 'Cherkasy',
      ),
      2 => 
      array (
        'code' => 'CH',
        'name' => 'Chernihiv',
      ),
      3 => 
      array (
        'code' => 'CV',
        'name' => 'Chernivtsi',
      ),
      4 => 
      array (
        'code' => 'CR',
        'name' => 'Crimea',
      ),
      5 => 
      array (
        'code' => 'DN',
        'name' => 'Dnipropetrovs\'k',
      ),
      6 => 
      array (
        'code' => 'DO',
        'name' => 'Donets\'k',
      ),
      7 => 
      array (
        'code' => 'IV',
        'name' => 'Ivano-Frankivs\'k',
      ),
      8 => 
      array (
        'code' => 'KL',
        'name' => 'Kharkiv Kherson',
      ),
      9 => 
      array (
        'code' => 'KM',
        'name' => 'Khmel\'nyts\'kyy',
      ),
      10 => 
      array (
        'code' => 'KR',
        'name' => 'Kirovohrad',
      ),
      11 => 
      array (
        'code' => 'KV',
        'name' => 'Kiev',
      ),
      12 => 
      array (
        'code' => 'KY',
        'name' => 'Kyyiv',
      ),
      13 => 
      array (
        'code' => 'LU',
        'name' => 'Luhans\'k',
      ),
      14 => 
      array (
        'code' => 'LV',
        'name' => 'L\'viv',
      ),
      15 => 
      array (
        'code' => 'MY',
        'name' => 'Mykolayiv',
      ),
      16 => 
      array (
        'code' => 'OD',
        'name' => 'Odesa',
      ),
      17 => 
      array (
        'code' => 'PO',
        'name' => 'Poltava',
      ),
      18 => 
      array (
        'code' => 'RI',
        'name' => 'Rivne',
      ),
      19 => 
      array (
        'code' => 'SE',
        'name' => 'Sevastopol',
      ),
      20 => 
      array (
        'code' => 'SU',
        'name' => 'Sumy',
      ),
      21 => 
      array (
        'code' => 'TE',
        'name' => 'Ternopil\'',
      ),
      22 => 
      array (
        'code' => 'VI',
        'name' => 'Vinnytsya',
      ),
      23 => 
      array (
        'code' => 'VO',
        'name' => 'Volyn\'',
      ),
      24 => 
      array (
        'code' => 'ZK',
        'name' => 'Zakarpattya',
      ),
      25 => 
      array (
        'code' => 'ZA',
        'name' => 'Zaporizhzhya',
      ),
      26 => 
      array (
        'code' => 'ZH',
        'name' => 'Zhytomyr',
      ),
    ),
    'UG' => 
    array (
      1 => 
      array (
        'code' => 'KAL',
        'name' => 'Kalangala',
      ),
      2 => 
      array (
        'code' => 'KMP',
        'name' => 'Kampala',
      ),
      3 => 
      array (
        'code' => 'KAY',
        'name' => 'Kayunga',
      ),
      4 => 
      array (
        'code' => 'KIB',
        'name' => 'Kiboga',
      ),
      5 => 
      array (
        'code' => 'LUW',
        'name' => 'Luwero',
      ),
      6 => 
      array (
        'code' => 'MAS',
        'name' => 'Masaka',
      ),
      7 => 
      array (
        'code' => 'MPI',
        'name' => 'Mpigi',
      ),
      8 => 
      array (
        'code' => 'MUB',
        'name' => 'Mubende',
      ),
      9 => 
      array (
        'code' => 'MUK',
        'name' => 'Mukono',
      ),
      10 => 
      array (
        'code' => 'NKS',
        'name' => 'Nakasongola',
      ),
      11 => 
      array (
        'code' => 'RAK',
        'name' => 'Rakai',
      ),
      12 => 
      array (
        'code' => 'SEM',
        'name' => 'Sembabule',
      ),
      13 => 
      array (
        'code' => 'WAK',
        'name' => 'Wakiso',
      ),
      14 => 
      array (
        'code' => 'BUG',
        'name' => 'Bugiri',
      ),
      15 => 
      array (
        'code' => 'BUS',
        'name' => 'Busia',
      ),
      16 => 
      array (
        'code' => 'IGA',
        'name' => 'Iganga',
      ),
      17 => 
      array (
        'code' => 'JIN',
        'name' => 'Jinja',
      ),
      18 => 
      array (
        'code' => 'KAB',
        'name' => 'Kaberamaido',
      ),
      19 => 
      array (
        'code' => 'KML',
        'name' => 'Kamuli',
      ),
      20 => 
      array (
        'code' => 'KPC',
        'name' => 'Kapchorwa',
      ),
      21 => 
      array (
        'code' => 'KTK',
        'name' => 'Katakwi',
      ),
      22 => 
      array (
        'code' => 'KUM',
        'name' => 'Kumi',
      ),
      23 => 
      array (
        'code' => 'MAY',
        'name' => 'Mayuge',
      ),
      24 => 
      array (
        'code' => 'MBA',
        'name' => 'Mbale',
      ),
      25 => 
      array (
        'code' => 'PAL',
        'name' => 'Pallisa',
      ),
      26 => 
      array (
        'code' => 'SIR',
        'name' => 'Sironko',
      ),
      27 => 
      array (
        'code' => 'SOR',
        'name' => 'Soroti',
      ),
      28 => 
      array (
        'code' => 'TOR',
        'name' => 'Tororo',
      ),
      29 => 
      array (
        'code' => 'ADJ',
        'name' => 'Adjumani',
      ),
      30 => 
      array (
        'code' => 'APC',
        'name' => 'Apac',
      ),
      31 => 
      array (
        'code' => 'ARU',
        'name' => 'Arua',
      ),
      32 => 
      array (
        'code' => 'GUL',
        'name' => 'Gulu',
      ),
      33 => 
      array (
        'code' => 'KIT',
        'name' => 'Kitgum',
      ),
      34 => 
      array (
        'code' => 'KOT',
        'name' => 'Kotido',
      ),
      35 => 
      array (
        'code' => 'LIR',
        'name' => 'Lira',
      ),
      36 => 
      array (
        'code' => 'MRT',
        'name' => 'Moroto',
      ),
      37 => 
      array (
        'code' => 'MOY',
        'name' => 'Moyo',
      ),
      38 => 
      array (
        'code' => 'NAK',
        'name' => 'Nakapiripirit',
      ),
      39 => 
      array (
        'code' => 'NEB',
        'name' => 'Nebbi',
      ),
      40 => 
      array (
        'code' => 'PAD',
        'name' => 'Pader',
      ),
      41 => 
      array (
        'code' => 'YUM',
        'name' => 'Yumbe',
      ),
      42 => 
      array (
        'code' => 'BUN',
        'name' => 'Bundibugyo',
      ),
      43 => 
      array (
        'code' => 'BSH',
        'name' => 'Bushenyi',
      ),
      44 => 
      array (
        'code' => 'HOI',
        'name' => 'Hoima',
      ),
      45 => 
      array (
        'code' => 'KBL',
        'name' => 'Kabale',
      ),
      46 => 
      array (
        'code' => 'KAR',
        'name' => 'Kabarole',
      ),
      47 => 
      array (
        'code' => 'KAM',
        'name' => 'Kamwenge',
      ),
      48 => 
      array (
        'code' => 'KAN',
        'name' => 'Kanungu',
      ),
      49 => 
      array (
        'code' => 'KAS',
        'name' => 'Kasese',
      ),
      50 => 
      array (
        'code' => 'KBA',
        'name' => 'Kibaale',
      ),
      51 => 
      array (
        'code' => 'KIS',
        'name' => 'Kisoro',
      ),
      52 => 
      array (
        'code' => 'KYE',
        'name' => 'Kyenjojo',
      ),
      53 => 
      array (
        'code' => 'MSN',
        'name' => 'Masindi',
      ),
      54 => 
      array (
        'code' => 'MBR',
        'name' => 'Mbarara',
      ),
      55 => 
      array (
        'code' => 'NTU',
        'name' => 'Ntungamo',
      ),
      56 => 
      array (
        'code' => 'RUK',
        'name' => 'Rukungiri',
      ),
    ),
    'UM' => 
    array (
      1 => 
      array (
        'code' => 'BI',
        'name' => 'Baker Island',
      ),
      2 => 
      array (
        'code' => 'HI',
        'name' => 'Howland Island',
      ),
      3 => 
      array (
        'code' => 'JI',
        'name' => 'Jarvis Island',
      ),
      4 => 
      array (
        'code' => 'JA',
        'name' => 'Johnston Atoll',
      ),
      5 => 
      array (
        'code' => 'KR',
        'name' => 'Kingman Reef',
      ),
      6 => 
      array (
        'code' => 'MA',
        'name' => 'Midway Atoll',
      ),
      7 => 
      array (
        'code' => 'NI',
        'name' => 'Navassa Island',
      ),
      8 => 
      array (
        'code' => 'PA',
        'name' => 'Palmyra Atoll',
      ),
      9 => 
      array (
        'code' => 'WI',
        'name' => 'Wake Island',
      ),
    ),
    'US' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Alabama',
      ),
      2 => 
      array (
        'code' => 'AK',
        'name' => 'Alaska',
      ),
      3 => 
      array (
        'code' => 'AS',
        'name' => 'American Samoa',
      ),
      4 => 
      array (
        'code' => 'AZ',
        'name' => 'Arizona',
      ),
      5 => 
      array (
        'code' => 'AR',
        'name' => 'Arkansas',
      ),
      6 => 
      array (
        'code' => 'AF',
        'name' => 'Armed Forces Africa',
      ),
      7 => 
      array (
        'code' => 'AA',
        'name' => 'Armed Forces Americas',
      ),
      8 => 
      array (
        'code' => 'AC',
        'name' => 'Armed Forces Canada',
      ),
      9 => 
      array (
        'code' => 'AE',
        'name' => 'Armed Forces Europe',
      ),
      10 => 
      array (
        'code' => 'AM',
        'name' => 'Armed Forces Middle East',
      ),
      11 => 
      array (
        'code' => 'AP',
        'name' => 'Armed Forces Pacific',
      ),
      12 => 
      array (
        'code' => 'CA',
        'name' => 'California',
      ),
      13 => 
      array (
        'code' => 'CO',
        'name' => 'Colorado',
      ),
      14 => 
      array (
        'code' => 'CT',
        'name' => 'Connecticut',
      ),
      15 => 
      array (
        'code' => 'DE',
        'name' => 'Delaware',
      ),
      16 => 
      array (
        'code' => 'DC',
        'name' => 'District of Columbia',
      ),
      17 => 
      array (
        'code' => 'FM',
        'name' => 'Federated States Of Micronesia',
      ),
      18 => 
      array (
        'code' => 'FL',
        'name' => 'Florida',
      ),
      19 => 
      array (
        'code' => 'GA',
        'name' => 'Georgia',
      ),
      20 => 
      array (
        'code' => 'GU',
        'name' => 'Guam',
      ),
      21 => 
      array (
        'code' => 'HI',
        'name' => 'Hawaii',
      ),
      22 => 
      array (
        'code' => 'ID',
        'name' => 'Idaho',
      ),
      23 => 
      array (
        'code' => 'IL',
        'name' => 'Illinois',
      ),
      24 => 
      array (
        'code' => 'IN',
        'name' => 'Indiana',
      ),
      25 => 
      array (
        'code' => 'IA',
        'name' => 'Iowa',
      ),
      26 => 
      array (
        'code' => 'KS',
        'name' => 'Kansas',
      ),
      27 => 
      array (
        'code' => 'KY',
        'name' => 'Kentucky',
      ),
      28 => 
      array (
        'code' => 'LA',
        'name' => 'Louisiana',
      ),
      29 => 
      array (
        'code' => 'ME',
        'name' => 'Maine',
      ),
      30 => 
      array (
        'code' => 'MH',
        'name' => 'Marshall Islands',
      ),
      31 => 
      array (
        'code' => 'MD',
        'name' => 'Maryland',
      ),
      32 => 
      array (
        'code' => 'MA',
        'name' => 'Massachusetts',
      ),
      33 => 
      array (
        'code' => 'MI',
        'name' => 'Michigan',
      ),
      34 => 
      array (
        'code' => 'MN',
        'name' => 'Minnesota',
      ),
      35 => 
      array (
        'code' => 'MS',
        'name' => 'Mississippi',
      ),
      36 => 
      array (
        'code' => 'MO',
        'name' => 'Missouri',
      ),
      37 => 
      array (
        'code' => 'MT',
        'name' => 'Montana',
      ),
      38 => 
      array (
        'code' => 'NE',
        'name' => 'Nebraska',
      ),
      39 => 
      array (
        'code' => 'NV',
        'name' => 'Nevada',
      ),
      40 => 
      array (
        'code' => 'NH',
        'name' => 'New Hampshire',
      ),
      41 => 
      array (
        'code' => 'NJ',
        'name' => 'New Jersey',
      ),
      42 => 
      array (
        'code' => 'NM',
        'name' => 'New Mexico',
      ),
      43 => 
      array (
        'code' => 'NY',
        'name' => 'New York',
      ),
      44 => 
      array (
        'code' => 'NC',
        'name' => 'North Carolina',
      ),
      45 => 
      array (
        'code' => 'ND',
        'name' => 'North Dakota',
      ),
      46 => 
      array (
        'code' => 'MP',
        'name' => 'Northern Mariana Islands',
      ),
      47 => 
      array (
        'code' => 'OH',
        'name' => 'Ohio',
      ),
      48 => 
      array (
        'code' => 'OK',
        'name' => 'Oklahoma',
      ),
      49 => 
      array (
        'code' => 'OR',
        'name' => 'Oregon',
      ),
      50 => 
      array (
        'code' => 'PW',
        'name' => 'Palau',
      ),
      51 => 
      array (
        'code' => 'PA',
        'name' => 'Pennsylvania',
      ),
      52 => 
      array (
        'code' => 'PR',
        'name' => 'Puerto Rico',
      ),
      53 => 
      array (
        'code' => 'RI',
        'name' => 'Rhode Island',
      ),
      54 => 
      array (
        'code' => 'SC',
        'name' => 'South Carolina',
      ),
      55 => 
      array (
        'code' => 'SD',
        'name' => 'South Dakota',
      ),
      56 => 
      array (
        'code' => 'TN',
        'name' => 'Tennessee',
      ),
      57 => 
      array (
        'code' => 'TX',
        'name' => 'Texas',
      ),
      58 => 
      array (
        'code' => 'UT',
        'name' => 'Utah',
      ),
      59 => 
      array (
        'code' => 'VT',
        'name' => 'Vermont',
      ),
      60 => 
      array (
        'code' => 'VI',
        'name' => 'Virgin Islands',
      ),
      61 => 
      array (
        'code' => 'VA',
        'name' => 'Virginia',
      ),
      62 => 
      array (
        'code' => 'WA',
        'name' => 'Washington',
      ),
      63 => 
      array (
        'code' => 'WV',
        'name' => 'West Virginia',
      ),
      64 => 
      array (
        'code' => 'WI',
        'name' => 'Wisconsin',
      ),
      65 => 
      array (
        'code' => 'WY',
        'name' => 'Wyoming',
      ),
    ),
    'UY' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'Artigas',
      ),
      2 => 
      array (
        'code' => 'CA',
        'name' => 'Canelones',
      ),
      3 => 
      array (
        'code' => 'CL',
        'name' => 'Cerro Largo',
      ),
      4 => 
      array (
        'code' => 'CO',
        'name' => 'Colonia',
      ),
      5 => 
      array (
        'code' => 'DU',
        'name' => 'Durazno',
      ),
      6 => 
      array (
        'code' => 'FS',
        'name' => 'Flores',
      ),
      7 => 
      array (
        'code' => 'FA',
        'name' => 'Florida',
      ),
      8 => 
      array (
        'code' => 'LA',
        'name' => 'Lavalleja',
      ),
      9 => 
      array (
        'code' => 'MA',
        'name' => 'Maldonado',
      ),
      10 => 
      array (
        'code' => 'MO',
        'name' => 'Montevideo',
      ),
      11 => 
      array (
        'code' => 'PA',
        'name' => 'Paysandu',
      ),
      12 => 
      array (
        'code' => 'RN',
        'name' => 'Rio Negro',
      ),
      13 => 
      array (
        'code' => 'RV',
        'name' => 'Rivera',
      ),
      14 => 
      array (
        'code' => 'RO',
        'name' => 'Rocha',
      ),
      15 => 
      array (
        'code' => 'SL',
        'name' => 'Salto',
      ),
      16 => 
      array (
        'code' => 'SJ',
        'name' => 'San Jose',
      ),
      17 => 
      array (
        'code' => 'SO',
        'name' => 'Soriano',
      ),
      18 => 
      array (
        'code' => 'TA',
        'name' => 'Tacuarembo',
      ),
      19 => 
      array (
        'code' => 'TT',
        'name' => 'Treinta y Tres',
      ),
    ),
    'UZ' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Andijon',
      ),
      2 => 
      array (
        'code' => 'BU',
        'name' => 'Buxoro',
      ),
      3 => 
      array (
        'code' => 'FA',
        'name' => 'Farg\'ona',
      ),
      4 => 
      array (
        'code' => 'JI',
        'name' => 'Jizzax',
      ),
      5 => 
      array (
        'code' => 'NG',
        'name' => 'Namangan',
      ),
      6 => 
      array (
        'code' => 'NW',
        'name' => 'Navoiy',
      ),
      7 => 
      array (
        'code' => 'QA',
        'name' => 'Qashqadaryo',
      ),
      8 => 
      array (
        'code' => 'QR',
        'name' => 'Qoraqalpog\'iston Republikasi',
      ),
      9 => 
      array (
        'code' => 'SA',
        'name' => 'Samarqand',
      ),
      10 => 
      array (
        'code' => 'SI',
        'name' => 'Sirdaryo',
      ),
      11 => 
      array (
        'code' => 'SU',
        'name' => 'Surxondaryo',
      ),
      12 => 
      array (
        'code' => 'TK',
        'name' => 'Toshkent City',
      ),
      13 => 
      array (
        'code' => 'TO',
        'name' => 'Toshkent Region',
      ),
      14 => 
      array (
        'code' => 'XO',
        'name' => 'Xorazm',
      ),
    ),
    'VC' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => 'Charlotte',
      ),
      2 => 
      array (
        'code' => 'R',
        'name' => 'Grenadines',
      ),
      3 => 
      array (
        'code' => 'A',
        'name' => 'Saint Andrew',
      ),
      4 => 
      array (
        'code' => 'D',
        'name' => 'Saint David',
      ),
      5 => 
      array (
        'code' => 'G',
        'name' => 'Saint George',
      ),
      6 => 
      array (
        'code' => 'P',
        'name' => 'Saint Patrick',
      ),
    ),
    'VE' => 
    array (
      1 => 
      array (
        'code' => 'AM',
        'name' => 'Amazonas',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'Anzoategui',
      ),
      3 => 
      array (
        'code' => 'AP',
        'name' => 'Apure',
      ),
      4 => 
      array (
        'code' => 'AR',
        'name' => 'Aragua',
      ),
      5 => 
      array (
        'code' => 'BA',
        'name' => 'Barinas',
      ),
      6 => 
      array (
        'code' => 'BO',
        'name' => 'Bolivar',
      ),
      7 => 
      array (
        'code' => 'CA',
        'name' => 'Carabobo',
      ),
      8 => 
      array (
        'code' => 'CO',
        'name' => 'Cojedes',
      ),
      9 => 
      array (
        'code' => 'DA',
        'name' => 'Delta Amacuro',
      ),
      10 => 
      array (
        'code' => 'DF',
        'name' => 'Dependencias Federales',
      ),
      11 => 
      array (
        'code' => 'DI',
        'name' => 'Distrito Federal',
      ),
      12 => 
      array (
        'code' => 'FA',
        'name' => 'Falcon',
      ),
      13 => 
      array (
        'code' => 'GU',
        'name' => 'Guarico',
      ),
      14 => 
      array (
        'code' => 'LA',
        'name' => 'Lara',
      ),
      15 => 
      array (
        'code' => 'ME',
        'name' => 'Merida',
      ),
      16 => 
      array (
        'code' => 'MI',
        'name' => 'Miranda',
      ),
      17 => 
      array (
        'code' => 'MO',
        'name' => 'Monagas',
      ),
      18 => 
      array (
        'code' => 'NE',
        'name' => 'Nueva Esparta',
      ),
      19 => 
      array (
        'code' => 'PO',
        'name' => 'Portuguesa',
      ),
      20 => 
      array (
        'code' => 'SU',
        'name' => 'Sucre',
      ),
      21 => 
      array (
        'code' => 'TA',
        'name' => 'Tachira',
      ),
      22 => 
      array (
        'code' => 'TR',
        'name' => 'Trujillo',
      ),
      23 => 
      array (
        'code' => 'VA',
        'name' => 'Vargas',
      ),
      24 => 
      array (
        'code' => 'YA',
        'name' => 'Yaracuy',
      ),
      25 => 
      array (
        'code' => 'ZU',
        'name' => 'Zulia',
      ),
    ),
    'VI' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => 'Saint Croix',
      ),
      2 => 
      array (
        'code' => 'J',
        'name' => 'Saint John',
      ),
      3 => 
      array (
        'code' => 'T',
        'name' => 'Saint Thomas',
      ),
    ),
    'VN' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'An Giang',
      ),
      2 => 
      array (
        'code' => 'BG',
        'name' => 'Bac Giang',
      ),
      3 => 
      array (
        'code' => 'BK',
        'name' => 'Bac Kan',
      ),
      4 => 
      array (
        'code' => 'BL',
        'name' => 'Bac Lieu',
      ),
      5 => 
      array (
        'code' => 'BC',
        'name' => 'Bac Ninh',
      ),
      6 => 
      array (
        'code' => 'BR',
        'name' => 'Ba Ria-Vung Tau',
      ),
      7 => 
      array (
        'code' => 'BN',
        'name' => 'Ben Tre',
      ),
      8 => 
      array (
        'code' => 'BH',
        'name' => 'Binh Dinh',
      ),
      9 => 
      array (
        'code' => 'BU',
        'name' => 'Binh Duong',
      ),
      10 => 
      array (
        'code' => 'BP',
        'name' => 'Binh Phuoc',
      ),
      11 => 
      array (
        'code' => 'BT',
        'name' => 'Binh Thuan',
      ),
      12 => 
      array (
        'code' => 'CM',
        'name' => 'Ca Mau',
      ),
      13 => 
      array (
        'code' => 'CT',
        'name' => 'Can Tho',
      ),
      14 => 
      array (
        'code' => 'CB',
        'name' => 'Cao Bang',
      ),
      15 => 
      array (
        'code' => 'DL',
        'name' => 'Dak Lak',
      ),
      16 => 
      array (
        'code' => 'DG',
        'name' => 'Dak Nong',
      ),
      17 => 
      array (
        'code' => 'DN',
        'name' => 'Da Nang',
      ),
      18 => 
      array (
        'code' => 'DB',
        'name' => 'Dien Bien',
      ),
      19 => 
      array (
        'code' => 'DI',
        'name' => 'Dong Nai',
      ),
      20 => 
      array (
        'code' => 'DT',
        'name' => 'Dong Thap',
      ),
      21 => 
      array (
        'code' => 'GL',
        'name' => 'Gia Lai',
      ),
      22 => 
      array (
        'code' => 'HG',
        'name' => 'Ha Giang',
      ),
      23 => 
      array (
        'code' => 'HD',
        'name' => 'Hai Duong',
      ),
      24 => 
      array (
        'code' => 'HP',
        'name' => 'Hai Phong',
      ),
      25 => 
      array (
        'code' => 'HM',
        'name' => 'Ha Nam',
      ),
      26 => 
      array (
        'code' => 'HI',
        'name' => 'Ha Noi',
      ),
      27 => 
      array (
        'code' => 'HT',
        'name' => 'Ha Tay',
      ),
      28 => 
      array (
        'code' => 'HH',
        'name' => 'Ha Tinh',
      ),
      29 => 
      array (
        'code' => 'HB',
        'name' => 'Hoa Binh',
      ),
      30 => 
      array (
        'code' => 'HC',
        'name' => 'Ho Chi Minh',
      ),
      31 => 
      array (
        'code' => 'HU',
        'name' => 'Hau Giang',
      ),
      32 => 
      array (
        'code' => 'HY',
        'name' => 'Hung Yen',
      ),
    ),
    'VU' => 
    array (
      1 => 
      array (
        'code' => 'MA',
        'name' => 'Malampa',
      ),
      2 => 
      array (
        'code' => 'PE',
        'name' => 'Penama',
      ),
      3 => 
      array (
        'code' => 'SA',
        'name' => 'Sanma',
      ),
      4 => 
      array (
        'code' => 'SH',
        'name' => 'Shefa',
      ),
      5 => 
      array (
        'code' => 'TA',
        'name' => 'Tafea',
      ),
      6 => 
      array (
        'code' => 'TO',
        'name' => 'Torba',
      ),
    ),
    'WF' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'Alo',
      ),
      2 => 
      array (
        'code' => 'S',
        'name' => 'Sigave',
      ),
      3 => 
      array (
        'code' => 'W',
        'name' => 'Wallis',
      ),
    ),
    'WS' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'A\'ana',
      ),
      2 => 
      array (
        'code' => 'AI',
        'name' => 'Aiga-i-le-Tai',
      ),
      3 => 
      array (
        'code' => 'AT',
        'name' => 'Atua',
      ),
      4 => 
      array (
        'code' => 'FA',
        'name' => 'Fa\'asaleleaga',
      ),
      5 => 
      array (
        'code' => 'GE',
        'name' => 'Gaga\'emauga',
      ),
      6 => 
      array (
        'code' => 'GF',
        'name' => 'Gagaifomauga',
      ),
      7 => 
      array (
        'code' => 'PA',
        'name' => 'Palauli',
      ),
      8 => 
      array (
        'code' => 'SA',
        'name' => 'Satupa\'itea',
      ),
      9 => 
      array (
        'code' => 'TU',
        'name' => 'Tuamasaga',
      ),
      10 => 
      array (
        'code' => 'VF',
        'name' => 'Va\'a-o-Fonoti',
      ),
      11 => 
      array (
        'code' => 'VS',
        'name' => 'Vaisigano',
      ),
    ),
    'YE' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Abyan',
      ),
      2 => 
      array (
        'code' => 'AD',
        'name' => 'Adan',
      ),
      3 => 
      array (
        'code' => 'AM',
        'name' => 'Amran',
      ),
      4 => 
      array (
        'code' => 'BA',
        'name' => 'Al Bayda',
      ),
      5 => 
      array (
        'code' => 'DA',
        'name' => 'Ad Dali',
      ),
      6 => 
      array (
        'code' => 'DH',
        'name' => 'Dhamar',
      ),
      7 => 
      array (
        'code' => 'HD',
        'name' => 'Hadramawt',
      ),
      8 => 
      array (
        'code' => 'HJ',
        'name' => 'Hajjah',
      ),
      9 => 
      array (
        'code' => 'HU',
        'name' => 'Al Hudaydah',
      ),
      10 => 
      array (
        'code' => 'IB',
        'name' => 'Ibb',
      ),
      11 => 
      array (
        'code' => 'JA',
        'name' => 'Al Jawf',
      ),
      12 => 
      array (
        'code' => 'LA',
        'name' => 'Lahij',
      ),
      13 => 
      array (
        'code' => 'MA',
        'name' => 'Ma\'rib',
      ),
      14 => 
      array (
        'code' => 'MR',
        'name' => 'Al Mahrah',
      ),
      15 => 
      array (
        'code' => 'MW',
        'name' => 'Al Mahwit',
      ),
      16 => 
      array (
        'code' => 'SD',
        'name' => 'Sa\'dah',
      ),
      17 => 
      array (
        'code' => 'SN',
        'name' => 'San\'a',
      ),
      18 => 
      array (
        'code' => 'SH',
        'name' => 'Shabwah',
      ),
      19 => 
      array (
        'code' => 'TA',
        'name' => 'Ta\'izz',
      ),
    ),
    'YT' => 
    array (
      1 => 
      array (
        'code' => 'DZA',
        'name' => 'Dzaoudzi',
      ),
      2 => 
      array (
        'code' => 'PAM',
        'name' => 'Pamandzi',
      ),
      3 => 
      array (
        'code' => 'MAM',
        'name' => 'Mamoudzou',
      ),
      4 => 
      array (
        'code' => 'DEM',
        'name' => 'Dembeni',
      ),
      5 => 
      array (
        'code' => 'BAN',
        'name' => 'Bandrele',
      ),
      6 => 
      array (
        'code' => 'KAN',
        'name' => 'Kani-Kéli',
      ),
      7 => 
      array (
        'code' => 'BOU',
        'name' => 'Bouéni',
      ),
      8 => 
      array (
        'code' => 'CHI',
        'name' => 'Chirongui',
      ),
      9 => 
      array (
        'code' => 'SAD',
        'name' => 'Sada',
      ),
      10 => 
      array (
        'code' => 'OUA',
        'name' => 'Ouangani',
      ),
      11 => 
      array (
        'code' => 'CHI',
        'name' => 'Chiconi',
      ),
      12 => 
      array (
        'code' => 'TSI',
        'name' => 'Tsingoni',
      ),
      13 => 
      array (
        'code' => 'MTS',
        'name' => 'M\'Tsangamouji',
      ),
      14 => 
      array (
        'code' => 'ACO',
        'name' => 'Acoua',
      ),
      15 => 
      array (
        'code' => 'MTS',
        'name' => 'Mtsamboro',
      ),
      16 => 
      array (
        'code' => 'BAN',
        'name' => 'Bandraboua',
      ),
      17 => 
      array (
        'code' => 'KOU',
        'name' => 'Koungou',
      ),
    ),
    'YU' => 
    array (
      1 => 
      array (
        'code' => 'KOS',
        'name' => 'Kosovo',
      ),
      2 => 
      array (
        'code' => 'MON',
        'name' => 'Montenegro',
      ),
      3 => 
      array (
        'code' => 'SER',
        'name' => 'Serbia',
      ),
      4 => 
      array (
        'code' => 'VOJ',
        'name' => 'Vojvodina',
      ),
    ),
    'ZA' => 
    array (
      1 => 
      array (
        'code' => 'EC',
        'name' => 'Eastern Cape',
      ),
      2 => 
      array (
        'code' => 'FS',
        'name' => 'Free State',
      ),
      3 => 
      array (
        'code' => 'GT',
        'name' => 'Gauteng',
      ),
      4 => 
      array (
        'code' => 'KN',
        'name' => 'KwaZulu-Natal',
      ),
      5 => 
      array (
        'code' => 'LP',
        'name' => 'Limpopo',
      ),
      6 => 
      array (
        'code' => 'MP',
        'name' => 'Mpumalanga',
      ),
      7 => 
      array (
        'code' => 'NW',
        'name' => 'North West',
      ),
      8 => 
      array (
        'code' => 'NC',
        'name' => 'Northern Cape',
      ),
      9 => 
      array (
        'code' => 'WC',
        'name' => 'Western Cape',
      ),
    ),
    'ZM' => 
    array (
      1 => 
      array (
        'code' => 'CE',
        'name' => 'Central',
      ),
      2 => 
      array (
        'code' => 'CB',
        'name' => 'Copperbelt',
      ),
      3 => 
      array (
        'code' => 'EA',
        'name' => 'Eastern',
      ),
      4 => 
      array (
        'code' => 'LP',
        'name' => 'Luapula',
      ),
      5 => 
      array (
        'code' => 'LK',
        'name' => 'Lusaka',
      ),
      6 => 
      array (
        'code' => 'NO',
        'name' => 'Northern',
      ),
      7 => 
      array (
        'code' => 'NW',
        'name' => 'North-Western',
      ),
      8 => 
      array (
        'code' => 'SO',
        'name' => 'Southern',
      ),
      9 => 
      array (
        'code' => 'WE',
        'name' => 'Western',
      ),
    ),
    'ZR' => 
    array (
      1 => 
      array (
        'code' => 'BC',
        'name' => 'Bas-Congo',
      ),
      2 => 
      array (
        'code' => 'BN',
        'name' => 'Bandundu',
      ),
      3 => 
      array (
        'code' => 'EQ',
        'name' => 'Equateur',
      ),
      4 => 
      array (
        'code' => 'KA',
        'name' => 'Katanga',
      ),
      5 => 
      array (
        'code' => 'KE',
        'name' => 'Kasai-Oriental',
      ),
      6 => 
      array (
        'code' => 'KN',
        'name' => 'Kinshasa',
      ),
      7 => 
      array (
        'code' => 'KW',
        'name' => 'Kasai-Occidental',
      ),
      8 => 
      array (
        'code' => 'MA',
        'name' => 'Maniema',
      ),
      9 => 
      array (
        'code' => 'NK',
        'name' => 'Nord-Kivu',
      ),
      10 => 
      array (
        'code' => 'OR',
        'name' => 'Orientale',
      ),
      11 => 
      array (
        'code' => 'SK',
        'name' => 'Sud-Kivu',
      ),
    ),
    'ZW' => 
    array (
      1 => 
      array (
        'code' => 'BU',
        'name' => 'Bulawayo',
      ),
      2 => 
      array (
        'code' => 'HA',
        'name' => 'Harare',
      ),
      3 => 
      array (
        'code' => 'ML',
        'name' => 'Manicaland',
      ),
      4 => 
      array (
        'code' => 'MC',
        'name' => 'Mashonaland Central',
      ),
      5 => 
      array (
        'code' => 'ME',
        'name' => 'Mashonaland East',
      ),
      6 => 
      array (
        'code' => 'MW',
        'name' => 'Mashonaland West',
      ),
      7 => 
      array (
        'code' => 'MV',
        'name' => 'Masvingo',
      ),
      8 => 
      array (
        'code' => 'MN',
        'name' => 'Matabeleland North',
      ),
      9 => 
      array (
        'code' => 'MS',
        'name' => 'Matabeleland South',
      ),
      10 => 
      array (
        'code' => 'MD',
        'name' => 'Midlands',
      ),
    ),
    86 => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'Saint Andrew',
      ),
      2 => 
      array (
        'code' => 'D',
        'name' => 'Saint David',
      ),
      3 => 
      array (
        'code' => 'G',
        'name' => 'Saint George',
      ),
      4 => 
      array (
        'code' => 'J',
        'name' => 'Saint John',
      ),
      5 => 
      array (
        'code' => 'M',
        'name' => 'Saint Mark',
      ),
      6 => 
      array (
        'code' => 'P',
        'name' => 'Saint Patrick',
      ),
      7 => 
      array (
        'code' => 'C',
        'name' => 'Carriacou',
      ),
      8 => 
      array (
        'code' => 'Q',
        'name' => 'Petit Martinique',
      ),
    ),
  ),
  'document_category_dom' => 
  array (
    '' => '',
    'Knowledege Base' => 'Tietämyskanta',
    'Marketing' => 'Markkinointi',
    'Sales' => 'Uusi liidi',
  ),
  'document_status_dom' => 
  array (
    'Active' => 'Aktiivinen',
    'Draft' => 'Luonnos',
    'Expired' => 'Vanhentunut',
    'FAQ' => 'Kysymykset',
    'Pending' => 'Odottaa',
    'Under Review' => 'Arvioidaan',
  ),
  'document_subcategory_dom' => 
  array (
    '' => '',
    'FAQ' => 'Kysymykset',
    'Marketing Collateral' => 'Markkinointimateriaali',
    'Product Brochures' => 'Tuote-esitteet',
  ),
  'document_template_type_dom' => 
  array (
    '' => '',
    'eula' => 'Käyttöoikeussopimus',
    'license' => 'Lisenssisopimus',
    'mailmerge' => 'Joukkokirje',
    'nda' => 'Salassapitosopimus',
  ),
  'documentation' => 
  array (
    'COM' => '05_Sugar_Community_Edition',
    'CORP' => '03_Sugar_Corporate',
    'ENT' => '02_Sugar_Enterprise',
    'LBL_DOCS' => 'Dokumentaatio',
    'PRO' => '04_Sugar_Professional',
    'ULT' => '01_Sugar_Ultimate',
  ),
  'dom_cal_day_long' => 
  array (
    0 => '',
    1 => 'sunnuntai',
    2 => 'maanantai',
    3 => 'tiistai',
    4 => 'keskiviikko',
    5 => 'torstai',
    6 => 'perjantai',
    7 => 'lauantai',
  ),
  'dom_cal_day_of_week' => 
  array (
    0 => 'su',
    1 => 'ma',
    2 => 'ti',
    3 => 'ke',
    4 => 'to',
    5 => 'pe',
    6 => 'la',
  ),
  'dom_cal_day_short' => 
  array (
    0 => '',
    1 => 'su',
    2 => 'ma',
    3 => 'ti',
    4 => 'ke',
    5 => 'to',
    6 => 'pe',
    7 => 'la',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'tammikuu',
    2 => 'helmikuu',
    3 => 'maaliskuu',
    4 => 'huhtikuu',
    5 => 'toukokuu',
    6 => 'kesäkuu',
    7 => 'heinäkuu',
    8 => 'elokuu',
    9 => 'syyskuu',
    10 => 'lokakuu',
    11 => 'marraskuu',
    12 => 'joulukuu',
  ),
  'dom_cal_month_short' => 
  array (
    0 => '',
    1 => 'tammi',
    2 => 'helmi',
    3 => 'maalis',
    4 => 'huhti',
    5 => 'touko',
    6 => 'kesä',
    7 => 'heinä',
    8 => 'elo',
    9 => 'syys',
    10 => 'loka',
    11 => 'marras',
    12 => 'joulu',
  ),
  'dom_email_archived_status' => 
  array (
    'archived' => 'Arkistoitu',
  ),
  'dom_email_bool' => 
  array (
    'bool_false' => 'Ei',
    'bool_true' => 'Kyllä',
  ),
  'dom_email_distribution' => 
  array (
    '' => '--None--',
    'direct' => 'Valitse vastuuhenkilö',
    'leastBusy' => 'Vähiten kiireinen',
    'roundRobin' => 'Round-Robin',
  ),
  'dom_email_distribution_for_auto_create' => 
  array (
    'leastBusy' => 'Vähiten kiireinen',
    'roundRobin' => 'Round-Robin',
  ),
  'dom_email_editor_option' => 
  array (
    '' => 'Oletussähköpostiformaatti',
    'html' => 'HTML-sähköposti',
    'plain' => 'Pelkkä teksti -sähköposti',
  ),
  'dom_email_errors' => 
  array (
    1 => 'Valise vain yksi käyttäjä, kun asetat kohteita suoraan.',
    2 => 'Sinun täytyy asettaa Vain Valitut kohteet, kun asetat kohteita suoraan',
  ),
  'dom_email_link_type' => 
  array (
    'mailto' => 'Ulkopuolinen sähköpostiohjelma',
    'sugar' => 'Sugar-sähköpostiasiakasohjelma',
  ),
  'dom_email_server_type' => 
  array (
    '' => '--None--',
    'imap' => 'IMAP',
  ),
  'dom_email_status' => 
  array (
    'archived' => 'Arkistoitu',
    'closed' => 'Suljettu',
    'draft' => 'Luonnos',
    'read' => 'Luettu',
    'replied' => 'Vastattu',
    'send_error' => 'Lähetysvirhe',
    'sent' => 'Lähetetty',
    'unread' => 'Ei luettu',
  ),
  'dom_email_types' => 
  array (
    'archived' => 'Arkistoitu',
    'campaign' => 'Kampanja',
    'draft' => 'Luonnos',
    'inbound' => 'Tuleva',
    'out' => 'Lähetetty',
  ),
  'dom_int_bool' => 
  array (
    0 => 'Kyllä',
    1 => 'Ei',
  ),
  'dom_mailbox_type' => 
  array (
    'bounce' => 'Palautuneiden sähköpostien käsittely',
    'createcase' => 'Luo palvelupyyntö',
    'pick' => 'Uusi [mikä tahansa]',
  ),
  'dom_meeting_accept_options' => 
  array (
    'accept' => 'Hyväksytty',
    'decline' => 'Hylätty',
    'tentative' => 'Epävarma',
  ),
  'dom_meeting_accept_status' => 
  array (
    'accept' => 'Hyväksytty',
    'decline' => 'Hylätty',
    'none' => 'Ei mitään',
    'tentative' => 'Epävarma',
  ),
  'dom_meridiem_lowercase' => 
  array (
    'am' => 'am',
    'pm' => 'pm',
  ),
  'dom_meridiem_uppercase' => 
  array (
    'AM' => 'AM',
    'PM' => 'PM',
  ),
  'dom_report_types' => 
  array (
    'Matrix' => 'Matriisiraportti',
    'detailed_summary' => 'Summaatioraportti yksityiskohdilla',
    'summary' => 'Summaatioraportti',
    'tabular' => 'Rivit ja sarakkeet',
  ),
  'dom_switch_bool' => 
  array (
    '' => 'ei',
    'off' => 'ei',
    'on' => 'on',
  ),
  'dselect_type_dom' => 
  array (
    'Does not Equal' => 'ei ole yhtäsuuri',
    'Equals' => 'yhtäsuuri',
    'Less Than' => 'vähemmän',
    'More Than' => 'enemmän',
  ),
  'dtselect_type_dom' => 
  array (
    'Less Than' => 'on vähemmän kuin',
    'More Than' => 'on enemmän kuin',
  ),
  'duration_dom' => 
  array (
    '' => 'Ei mitään',
    900 => '15 minuttia',
    1800 => '30 minuuttia',
    2700 => '45 minuuttia',
    3600 => '1 tunti',
    5400 => '1,5 tuntia',
    7200 => '2 tuntia',
    10800 => '3 tuntia',
    21600 => '6 tuntia',
    86400 => '1 päivä',
    172800 => '2 päivää',
    259200 => '3 päivää',
    604800 => '1 viikko',
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
    'Google' => 'Google',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Sugar' => 'SugarCRM',
    'Twitter' => 'Twitter',
    'WebEx' => 'WebEx',
  ),
  'eapm_list_documents' => 
  array (
    'Google' => 'Google',
  ),
  'eapm_list_import' => 
  array (
    'Google' => 'Google',
  ),
  'emailTemplates_type_list' => 
  array (
    '' => '',
    'campaign' => 'Kampanja',
    'email' => 'Sähköposti',
    'workflow' => 'Work Flow',
  ),
  'emailTemplates_type_list_campaigns' => 
  array (
    '' => '',
    'campaign' => 'Kampanja',
  ),
  'emailTemplates_type_list_no_workflow' => 
  array (
    '' => '',
    'campaign' => 'Kampanja',
    'email' => 'Sähköposti',
  ),
  'email_check_interval_dom' => 
  array (
    -1 => 'Manuaalisesti',
    5 => '5 minuutin välein',
    15 => '15 minuutin välein',
    30 => 'Puolen tunnin välein',
    60 => 'Tunnin välein',
  ),
  'email_marketing_status_dom' => 
  array (
    '' => '',
    'active' => 'Aktiivinen',
    'inactive' => 'Epäaktiivinen',
  ),
  'email_settings_for_ssl' => 
  array (
    0 => '',
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
    'Active' => 'Aktiivinen',
    'Leave of Absence' => 'Ei paikalla',
    'Terminated' => 'Lopetettu',
  ),
  'extapi_meeting_password' => 
  array (
    'WebEx' => 'WebEx',
  ),
  'filter_checkbox_dom' => 
  array (
    0 => 'Epätosi',
    1 => 'Tosi',
  ),
  'font_size_dom' => 
  array (
    -5 => 'Pienempi (-5)',
    -4 => 'Pienempi (-4)',
    -3 => 'Pienempi (-3)',
    -2 => 'Pienempi (-2)',
    -1 => 'Pienempi (-1)',
    'Default' => 'Oletus',
    1 => 'Suurempi (+1)',
    2 => 'Suurempi (+2)',
    3 => 'Suurempi (+3)',
    4 => 'Suurempi (+4)',
    5 => 'Suurempi (+5)',
  ),
  'forecast_fiscal_year_options' => 
  array (
    'current_year' => '{{year}}',
    'next_year' => '{{year}}',
  ),
  'forecast_pareto_visibility_options' => 
  array (
    'group' => 'Tiimini ennuste',
    'user' => 'Ennusteeni',
  ),
  'forecast_pipeline_visibility_options' => 
  array (
    'group' => 'Tiimini myyntiputki',
    'user' => 'Myyntiputkeni',
  ),
  'forecast_schedule_status_dom' => 
  array (
    'Active' => 'Aktiivinen',
    'Inactive' => 'Ei-aktiivinen',
  ),
  'forecast_type_dom' => 
  array (
    'Direct' => 'Suora',
    'Rollup' => 'Rollup',
  ),
  'forecasts_chart_options_group' => 
  array (
    'forecast' => 'Ennusteessa',
    'probability' => 'Todennäköisyys',
    'sales_stage' => 'Myyntivaihe',
  ),
  'forecasts_config_ranges_options_dom' => 
  array (
    'show_binary' => 'Kaksi valikoimaa',
    'show_buckets' => 'Kolme valikoimaa',
    'show_custom_buckets' => 'Mukautetut valikoimat',
  ),
  'forecasts_config_worksheet_layout_forecast_by_options_dom' => 
  array (
    'Opportunities' => 'Myyntimahdollisuudet',
    'RevenueLineItems' => 'Tuoterivit',
  ),
  'forecasts_options_dataset' => 
  array (
    'best' => 'Paras',
    'likely' => 'Todennäköinen',
    'worst' => 'Huonoin',
  ),
  'forecasts_timeperiod_options_dom' => 
  array (
    'Annual' => 'Viosittainen (alijaksotettu neljänneksiin)',
    'Quarter' => 'Neljännettäinen (alijaksotettu kuukausiin)',
  ),
  'forecasts_timeperiod_types_dom' => 
  array (
    'chronological' => 'Päivämääräpohjainen vuosi',
  ),
  'fts_type' => 
  array (
    'Elastic' => 'elasticsearch',
  ),
  'gender_list' => 
  array (
    'female' => 'Nainen',
    'male' => 'Mies',
  ),
  'generic_timeperiod_options' => 
  array (
    'current' => 'Tämä neljännes',
    'next' => 'Seuraava neljännes',
    'year' => 'Tämä vuosi',
  ),
  'history_filter_options' => 
  array (
    7 => 'Edelliset 7 päivää',
    30 => 'Edelliset 30 päivää',
    90 => 'Edellinen neljännes',
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
    'group' => 'Ei',
    'user' => 'Kyllä',
  ),
  'import_delimeter_options' => 
  array (
    ',' => ',',
    '.' => '.',
    ':' => ':',
    ';' => ';',
    '\\t' => '\\t',
    'other' => 'Muu:',
    '|' => '|',
  ),
  'import_enclosure_options' => 
  array (
    '' => 'Ei mitään',
    '"' => 'Lainausmerkki ( &#39;&#39; )',
    '\'' => 'Heittomerkki ( &#39; )',
    'other' => 'Muu:',
  ),
  'in_total_group_stages' => 
  array (
    'Closed Accepted' => 'Suljettu / hyväksytty',
    'Closed Dead' => 'Suljettu / lopetettu',
    'Closed Lost' => 'Suljettu / hävitty',
    'Confirmed' => 'Vahvistettu',
    'Delivered' => 'Toimitettu',
    'Draft' => 'Luonnos',
    'Negotiation' => 'Neuvottelu',
    'On Hold' => 'Odottaa',
  ),
  'industry_dom' => 
  array (
    '' => '',
    'Apparel' => 'Vaatetus',
    'Banking' => 'Pankki',
    'Biotechnology' => 'Bioteknologia',
    'Chemicals' => 'Kemikaalit',
    'Communications' => 'Kommunikaatio',
    'Construction' => 'Rakentaminen',
    'Consulting' => 'Konsultointi',
    'Education' => 'Training',
    'Electronics' => 'Elektroniikka',
    'Energy' => 'Energia',
    'Engineering' => 'Suunnittelu',
    'Entertainment' => 'Viihde',
    'Environmental' => 'Ympäristö',
    'Finance' => 'Finanssi',
    'Government' => 'Valtionhallinto',
    'Healthcare' => 'Terveys',
    'Hospitality' => 'Majoitus',
    'Insurance' => 'Vakuutus',
    'Machinery' => 'Koneistus',
    'Manufacturing' => 'Valmistus',
    'Media' => 'Media',
    'Not For Profit' => 'Voittoa tuottamaton',
    'Other' => 'Muuta',
    'Recreation' => 'Virkistys',
    'Retail' => 'Vähittäismyynti',
    'Shipping' => 'Postitus',
    'Technology' => 'Teknologia',
    'Telecommunications' => 'Telekommunikaatio',
    'Transportation' => 'Kuljetus',
    'Utilities' => 'Hyödykkeet',
  ),
  'interactions_options' => 
  array (
    'custom' => 'Mukautettu suodattimeni',
    'favorites' => 'Suosikit',
    7 => 'Edelliset 7 päivää',
    30 => 'Edelliset 30 päivää',
    90 => 'Edellinen neljännes',
  ),
  'issue_priority_dom' => 
  array (
    'High' => 'Korkea',
    'Low' => 'Alhainen',
    'Medium' => 'Normaali',
    'Urgent' => 'Kiireinen',
  ),
  'issue_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Hyväksytty',
    'Closed' => 'Suljettu',
    'Duplicate' => 'Kaksoiskappale',
    'Invalid' => 'Virheellinen',
    'Out of Date' => 'Vanhentunut',
  ),
  'issue_status_dom' => 
  array (
    'Assigned' => 'Vastuuhenkilö valittu',
    'Closed' => 'Suljettu',
    'New' => 'Uusi',
    'Pending' => 'Odottaa',
    'Rejected' => 'Hylätty',
  ),
  'kbadmin_actions_dom' => 
  array (
    '' => '--Ylläpitäjän toiminnot--',
    'Apply Tags On Articles' => 'Osoita tagit valituille artikkeleille',
    'Create New Tag' => 'Luo uusi tagi',
    'Delete Selected Articles' => 'Poista valitut artikkelit',
    'Delete Tag' => 'Poista tagi',
    'Move Selected Articles' => 'Siirrä valitut artikkelit',
    'Rename Tag' => 'Nimeä tagi uudelleen',
  ),
  'kbdocument_attachment_option_dom' => 
  array (
    '' => '',
    'mime' => 'Määrittelt Mimetyyppi',
    'name' => 'Määrittele nimi',
    'none' => 'ei liitteitä|ei mitään',
    'some' => 'on liitteitä',
  ),
  'kbdocument_canned_search' => 
  array (
    'added' => 'Lisätty viimeisen 30 päivän aikana',
    'all' => 'Kaikki',
    'faqs' => 'UKK',
    'pending' => 'Odottaa hyväksymistä',
    'updated' => 'Päivitetty viimeisen 30 päivän aikana',
  ),
  'kbdocument_date_filter_options' => 
  array (
    '' => '',
    'after' => 'jälkeen',
    'before' => 'ennen',
    'between_dates' => 'välillä',
    'isnull' => 'Is Null',
    'last_30_days' => 'Edelliset 30 päivää',
    'last_7_days' => 'Edelliset 7 päivää',
    'last_month' => 'Edellinen kuukausi',
    'last_year' => 'Viime vuosi',
    'next_30_days' => 'Seuraavat 30 päivää',
    'next_7_days' => 'Seuraavat 7 päivää',
    'next_month' => 'Seuraava kuukausi',
    'next_year' => 'Ensi vuosi',
    'on' => 'Kyllä',
    'this_month' => 'Tämä kuukausi',
    'this_year' => 'Tämä vuosi',
  ),
  'kbdocument_status_dom' => 
  array (
    'Draft' => 'Luonnos',
    'Expired' => 'Vanhentunut',
    'In Review' => 'Arvioitavana',
    'Published' => 'Julkaistu',
  ),
  'kbdocument_viewing_frequency_dom' => 
  array (
    '' => '',
    'Bot_10' => 'Huonoin 10',
    'Bot_20' => 'Huonoin 20',
    'Bot_5' => 'Huonoin 5',
    'Top_10' => 'Paras 10',
    'Top_20' => 'Paras 20',
    'Top_5' => 'Paras 5',
  ),
  'language_pack_name' => 'FI Suomi',
  'layouts_dom' => 
  array (
    'Invoice' => 'Lasku',
    'Standard' => 'Tarjous',
  ),
  'lead_conv_activity_opt' => 
  array (
    'copy' => 'Kopioi',
    'donothing' => 'Älä tee mitään',
    'move' => 'Siirrä',
  ),
  'lead_source_dom' => 
  array (
    '' => '',
    'Campaign' => 'Kampanja',
    'Cold Call' => 'Soitto',
    'Conference' => 'Konferenssi',
    'Direct Mail' => 'Suoraposti',
    'Email' => 'Sähköposti',
    'Employee' => 'Työntekijä',
    'Existing Customer' => 'Olemassa oleva asiakas',
    'Other' => 'Muuta',
    'Partner' => 'Yhteistyökumppani',
    'Public Relations' => 'Suhdetoiminta',
    'Self Generated' => 'Itse huomattu',
    'Support Portal User Registration' => 'Tukiportaalin käyttäjärekisteröinti',
    'Trade Show' => 'Messut',
    'Web Site' => 'Internet-sivusto',
    'Word of mouth' => 'Kuultu joltakin',
  ),
  'lead_status_dom' => 
  array (
    '' => '',
    'Assigned' => 'Vastuuhenkilö valittu',
    'Converted' => 'Muunnettu',
    'Dead' => 'Loppunut',
    'In Process' => 'Prosessoidaan',
    'New' => 'Uusi',
    'Recycled' => 'Kierrätetty',
  ),
  'library_type' => 
  array (
    'Books' => 'Kirja',
    'DVD' => 'DVD',
    'Magazines' => 'Lehdet',
    'Music' => 'Musiikki',
  ),
  'link_target_dom' => 
  array (
    '_blank' => 'Uusi ikkuna',
    '_self' => 'Sama ikkuna',
  ),
  'list_visibility_options' => 
  array (
    0 => 'Kyllä',
    1 => 'Ei',
  ),
  'meeting_status_dom' => 
  array (
    'Held' => 'Pidetty',
    'Not Held' => 'Peruutettu',
    'Planned' => 'Varattu',
  ),
  'meeting_type_dom' => 
  array (
    'Other' => 'Muuta',
    'Sugar' => 'SugarCRM',
  ),
  'merge_operators_dom' => 
  array (
    'exact' => 'Täsmälleen',
    'like' => 'Sisältää',
    'start' => 'Alkaa',
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
    'Calls' => 'Pl',
    'Campaigns' => 'Ka',
    'Cases' => 'Pa',
    'Notes' => 'Mt',
    'Quotas' => 'Q',
    'Tasks' => 'Tv',
  ),
  'moduleList' => 
  array (
    'ACLRoles' => 'Roolit',
    'Accounts' => 'Asiakkaat',
    'Activities' => 'Aktiviteetit',
    'Administration' => 'Ylläpito',
    'Bugs' => 'Bugit',
    'Calendar' => 'Kalenteri',
    'Calls' => 'Puhelut',
    'CampaignLog' => 'Kampanjaloki',
    'CampaignTrackers' => 'Kampanjan seuraajat',
    'Campaigns' => 'Kampanjat',
    'Cases' => 'Palvelupyynnöt',
    'Comments' => 'Kommentit',
    'Connectors' => 'Konnektorit',
    'Contacts' => 'Kontaktit',
    'ContractTypes' => 'Sopimustyypit',
    'Contracts' => 'Sopimukset',
    'Currencies' => 'Valuutat',
    'CustomQueries' => 'Custom queryt',
    'DataSets' => 'Data Formatit',
    'DocumentRevisions' => 'Dokumentin revisio',
    'Documents' => 'Dokumentit',
    'EAPM' => 'Ulkoiset accountit',
    'EmailAddresses' => 'Sähköpostiosoite',
    'EmailMarketing' => 'Sähköpostimarkkinointi',
    'EmailTemplates' => 'Viestipohjat',
    'Emails' => 'Sähköpostit',
    'Employees' => 'Työntekijät',
    'FAQ' => 'Kysymykset',
    'Feedbacks' => 'Palaute',
    'Feeds' => 'RSS-syötteet',
    'Filters' => 'Suodattimet',
    'ForecastManagerWorksheets' => 'Ennustehallintatyökirjat',
    'ForecastSchedule' => 'Ennusteaikataulu',
    'ForecastWorksheets' => 'Ennustetyökirjat',
    'Forecasts' => 'Ennusteet',
    'Home' => 'Etusivu',
    'InboundEmail' => 'Sähköposti',
    'KBDocuments' => 'Tietämyskanta',
    'Leads' => 'Liidit',
    'Library' => 'Kirjasto',
    'Manufacturers' => 'Valmistajat',
    'Meetings' => 'Tapaamiset',
    'MergeRecords' => 'Yhdistä tietueet',
    'Newsletters' => 'Uutiskirjeet',
    'Notes' => 'Muistiinpanot',
    'Notifications' => 'Huomautukset',
    'OAuthKeys' => 'OAuth -kuluttajan avaimet',
    'OAuthTokens' => 'OAuth -turvatunnisteet',
    'Opportunities' => 'Myyntimahdollisuudet',
    'PdfManager' => 'PDF manager',
    'ProductCategories' => 'Tuotekategoriat',
    'ProductTemplates' => 'Tuotekatalogi',
    'ProductTypes' => 'Tuotetyypit',
    'Products' => 'Tarjotut tuoterivit',
    'Project' => 'Projekti',
    'ProjectTask' => 'Projektitehtävät',
    'ProspectLists' => 'Tavoitelistat',
    'Prospects' => 'Tavoitteet',
    'Queues' => 'Jonot',
    'Quotas' => 'Tavoitteet',
    'Quotes' => 'Tarjoukset',
    'Releases' => 'Julkaisut',
    'ReportMaker' => 'Kehittyneet raportit',
    'Reports' => 'Raportit',
    'Reports_1' => 'Tallennetut raportit',
    'RevenueLineItems' => 'Tuoterivit',
    'Roles' => 'Roolit',
    'SNIP' => 'Sähköpostin arkistointi',
    'SavedSearch' => 'Tallennetut haut',
    'Schedulers' => 'Ajoitusohjelmat',
    'Shippers' => 'Toimittaja',
    'Styleguide' => 'Tyyliopas',
    'Subscriptions' => 'Tilaukset',
    'SugarFavorites' => 'Sugar -Suosikit',
    'Sugar_Favorites' => 'Suosikit',
    'Sync' => 'Synkronisoi',
    'Tags' => 'Tägit',
    'Tasks' => 'Tehtävät',
    'TaxRates' => 'Verokannat',
    'TeamNotices' => 'Tiimimuistutukset',
    'Teams' => 'tiimit',
    'TimePeriods' => 'Ajanjaksot',
    'TrackerPerfs' => 'Seuraajien toiminta',
    'TrackerQueries' => 'Seuraajien pyynnöt',
    'TrackerSessions' => 'Seuraajasessiot',
    'Trackers' => 'Trackerit',
    'UpgradeWizard' => 'Ohjattu päivitys',
    'UserSignatures' => 'Käyttäjien allekirjoitukset',
    'Users' => 'Käyttäjät',
    'WebLogicHooks' => 'Web Logic Hooks',
    'Words' => 'Sanat',
    'WorkFlow' => 'Work Flow -määritelmät',
    'Worksheet' => 'Työkirja',
    'iFrames' => 'Oma portaali',
    'pmse_Business_Rules' => 'Prosessiyrityssäännöt',
    'pmse_Emails_Templates' => 'Prosessisähköpostimallit',
    'pmse_Inbox' => 'Prosessit',
    'pmse_Project' => 'Prosessimääritelmät',
  ),
  'moduleListSingular' => 
  array (
    'ACLRoles' => 'Rooli',
    'Accounts' => 'Asiakas',
    'Activities' => 'Aktiviteetit',
    'ActivityStream' => 'Aktiviteettivirta',
    'Administration' => 'Hallinto',
    'Bugs' => 'Bugit',
    'Calendar' => 'Kalenteri',
    'Calls' => 'Puhelut',
    'CampaignLog' => 'Kampanjaloki',
    'CampaignTrackers' => 'Kampanjanseuraaja',
    'Campaigns' => 'Kampanjat',
    'Cases' => 'Palvelupyyntö',
    'Comments' => 'Kommentti',
    'Connectors' => 'Konnektori',
    'Contacts' => 'Kontakti',
    'ContractTypes' => 'Sopimustyypit',
    'Contracts' => 'Sopimus',
    'Currencies' => 'Valuutta',
    'CustomQueries' => 'Mukautettu kysely',
    'Dashboard' => 'Johdon näkymä',
    'DataSets' => 'Data Format',
    'DocumentRevisions' => 'Dokumenttiversio',
    'Documents' => 'Dokumentit',
    'EAPM' => 'Ulkoinen account',
    'EmailAddresses' => 'Sähköpostiosoite',
    'EmailMarketing' => 'Sähköpostimarkkinointi',
    'EmailTemplates' => 'Sähköpostimalli',
    'Emails' => 'Sähköpostit',
    'Employees' => 'Työntekijä',
    'FAQ' => 'Kysymykset',
    'Feedbacks' => 'Palaute',
    'Feeds' => 'RSS-syötteet',
    'Filters' => 'Suodatin',
    'ForecastManagerWorksheets' => 'Ennustehallintatyökirja',
    'ForecastSchedule' => 'Ennusteaikataulu',
    'ForecastWorksheets' => 'Ennustetyökirja',
    'Forecasts' => 'Ennuste',
    'Home' => 'Etusivu',
    'InboundEmail' => 'Saapuva sähköposti',
    'KBDocuments' => 'Tietämyskantadokumentti',
    'Leads' => 'Liidi',
    'Library' => 'Kirjasto',
    'Manufacturers' => 'Valmistaja',
    'Meetings' => 'Tapaamiset',
    'MergeRecords' => 'Tietueiden yhdistys',
    'Newsletters' => 'Uutiskirje',
    'Notes' => 'Muistiot',
    'Notifications' => 'Huomautus',
    'OAuthKeys' => 'OAuth-consumer key',
    'OAuthTokens' => 'OAuth-token',
    'Opportunities' => 'Myyntimahdollisuus',
    'PdfManager' => 'PDF manager',
    'ProductCategories' => 'Tuotekategoria',
    'ProductTemplates' => 'Tuote',
    'ProductTypes' => 'Tuotetyyppi',
    'Products' => 'Tarjottu tuoterivi',
    'Project' => 'Projekti',
    'ProjectTask' => 'Projektitehtävä',
    'ProspectLists' => 'Tavoitelista',
    'Prospects' => 'Prospekti',
    'Queues' => 'Jono',
    'Quotas' => 'Tavoite',
    'Quotes' => 'Tarjous',
    'Releases' => 'Julkaisu',
    'ReportMaker' => 'SweetReport',
    'Reports' => 'Raportti',
    'Reports_1' => 'Tallennettu raportti',
    'RevenueLineItems' => 'Tuoterivi',
    'Roles' => 'Rooli',
    'SNIP' => 'Sähköpostin arkistointi',
    'SavedSearch' => 'Tallennettu haku',
    'Schedulers' => 'Ajastin',
    'Shippers' => 'Toimittaja',
    'Styleguide' => 'Tyyliopas',
    'Subscriptions' => 'Tilaus',
    'SugarFavorites' => 'Sugar -suosikit',
    'Sugar_Favorites' => 'Suosikki',
    'Sync' => 'Synkronisoi',
    'Tags' => 'Tägi',
    'Tasks' => 'Tehtävä',
    'TaxRates' => 'Verokanta',
    'TeamNotices' => 'Tiimimuistutus',
    'Teams' => 'Tiimi',
    'TimePeriods' => 'Ajanjaksot',
    'TrackerPerfs' => 'Trackerin suorituskyky',
    'TrackerQueries' => 'Tracker query',
    'TrackerSessions' => 'Trackersessio',
    'Trackers' => 'Trackeri',
    'UpgradeWizard' => 'Päivitystyökalu',
    'UserSignatures' => 'Käyttäjän allekirjoitus',
    'Users' => 'Käyttäjät',
    'WebLogicHooks' => 'Web Logic Hook',
    'Words' => 'Sana',
    'WorkFlow' => 'Work Flow -määritelmä',
    'Worksheet' => 'Työkirja',
    'iFrames' => 'Oma portaali',
    'pmse_Business_Rules' => 'Prosessiyrityssääntö',
    'pmse_Emails_Templates' => 'Prosessisähköpostimalli',
    'pmse_Inbox' => 'Prosessi',
    'pmse_Project' => 'Prosessimääritelmä',
  ),
  'mselect_multi_type_dom' => 
  array (
    'in' => 'on ryhmässä',
    'not_in' => 'ei ole ryhmässä',
  ),
  'mselect_type_dom' => 
  array (
    'Equals' => 'on yhtäsuuri',
    'in' => 'on ryhmässä',
  ),
  'navigation_paradigms' => 
  array (
    'gm' => 'Ryhmitellyt moduulit',
    'm' => 'Moduulit',
  ),
  'newsletter_frequency_dom' => 
  array (
    '' => '',
    'Annually' => 'Vuosittain',
    'Monthly' => 'Kuukausittain',
    'Quarterly' => 'Neljännesvuosittain',
    'Weekly' => 'Viikottain',
  ),
  'notifications_severity_list' => 
  array (
    'alert' => 'Huomautus',
    'information' => 'Info',
    'other' => 'Muu',
    'success' => 'Onnistui',
    'warning' => 'Varoitus',
  ),
  'notifications_status_dom' => 
  array (
    0 => 'Lukematon',
    1 => 'Luettu',
  ),
  'notifymail_sendtype' => 
  array (
    'SMTP' => 'SMTP',
  ),
  'numeric_range_search_dom' => 
  array (
    '=' => 'On yhtäsuuri',
    'between' => 'On välissä',
    'greater_than' => 'Suurempi kuin',
    'greater_than_equals' => 'Suurempi tai yhtäsuuri kuin',
    'less_than' => 'Pienempi kuin',
    'less_than_equals' => 'Pienempi tai yhtäsuuri kuin',
    'not_equal' => 'On erisuuri',
  ),
  'oauth_client_type_dom' => 
  array (
    'support_portal' => 'Tukiportaali',
    'user' => 'Sugar-käyttäjä',
  ),
  'oauth_type_dom' => 
  array (
    'oauth1' => 'OAuth 1.0',
    'oauth2' => 'OAuth 2.0',
  ),
  'oc_status_dom' => 
  array (
    '' => '',
    'Active' => 'Aktiivinen',
    'Inactive' => 'Epäaktiivinen',
  ),
  'opportunity_metrics_dom' => 
  array (
    'active' => 'Aktiivinen',
    'lost' => 'Hävitty',
    'won' => 'Voitettu',
  ),
  'opportunity_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Liiketoiminnasta päättävä',
    'Business Evaluator' => 'Liiketoimintaa arvioiva',
    'Executive Sponsor' => 'Johtava sponsori',
    'Influencer' => 'Vaikuttaja',
    'Other' => 'Muuta',
    'Primary Decision Maker' => 'Ensisijainen päättäjä',
    'Technical Decision Maker' => 'Tekninen päätöksentekijä',
    'Technical Evaluator' => 'Tekninen arvioija',
  ),
  'opportunity_type_dom' => 
  array (
    '' => '',
    'Existing Business' => 'Toiminnassa oleva liiketoiminta',
    'New Business' => 'Uusi liiketoiminta',
  ),
  'opps_config_view_by_closedate_rollup_dom' => 
  array (
    'earliest' => 'Aikaisin sulkupäivämäärä',
    'latest' => 'Myöhäisin sulkupäivämäärä',
  ),
  'opps_config_view_by_options_dom' => 
  array (
    'Opportunities' => 'Myyntimahdollisuudet',
    'RevenueLineItems' => 'Myyntimahdollisuudet ja tuoterivit',
  ),
  'optout_dom' => 
  array (
    '' => '-ei mitään-',
    'false' => 'Ei',
    'true' => 'Kyllä',
  ),
  'order_stage_dom' => 
  array (
    'Cancelled' => 'Peruutettu',
    'Confirmed' => 'Vahvistettu',
    'On Hold' => 'Odottaa',
    'Pending' => 'Odottaa',
    'Shipped' => 'Toimitettu',
  ),
  'parent_type_display' => 
  array (
    'Accounts' => 'Asiakas',
    'Bugs' => 'Bugit',
    'Cases' => 'Palvelupyyntö',
    'Contacts' => 'Kontakti',
    'Leads' => 'Liidi',
    'Opportunities' => 'Myyntimahdollisuus',
    'Products' => 'Tarjottu tuoterivi',
    'Project' => 'Projekti',
    'ProjectTask' => 'Projektitehtävä',
    'Prospects' => 'Prospekti',
    'Quotes' => 'Tarjous',
    'RevenueLineItems' => 'Tuoterivi',
    'Tasks' => 'Tehtävä',
  ),
  'payment_terms' => 
  array (
    '' => '',
    'Net 15' => 'Netto 15',
    'Net 30' => 'Netto 30',
  ),
  'pdfmanager_yes_no_list' => 
  array (
    'no' => 'Ei',
    'yes' => 'Kyllä',
  ),
  'pipeline_chart_dom' => 
  array (
    'fun' => 'Suppilo',
    'hbar' => 'Vaakaviiva',
  ),
  'planned_activities_filter_options' => 
  array (
    'future' => 'Tulevaisuus',
    'today' => 'Tänään',
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
    'group' => 'Ei',
    'user' => 'Kyllä',
  ),
  'pricing_formula_dom' => 
  array (
    'Fixed' => 'Korjattu hinta',
    'IsList' => 'Sama kuin listassa',
    'PercentageDiscount' => 'Alennus listasta',
    'PercentageMarkup' => 'Voittomarginaali / kustannukset',
    'ProfitMargin' => 'Tuottomarginaali',
  ),
  'product_category_dom' => 
  array (
    '' => '',
    'Accounts' => 'Asiakkaat',
    'Activities' => 'Aktiviteetit',
    'Bug Tracker' => 'Bugien seuranta',
    'Calendar' => 'Kalenteri',
    'Calls' => 'Puhelut',
    'Campaigns' => 'Kampanjat',
    'Cases' => 'Palvelupyynnöt',
    'Contacts' => 'Kontaktit',
    'Currencies' => 'Valuutat',
    'Dashboard' => 'Johdon näkymä',
    'Documents' => 'Dokumentit',
    'Emails' => 'Sähköpostit',
    'Feeds' => 'RSS-syötteet',
    'Forecasts' => 'Ennusteet',
    'Help' => 'Ohje',
    'Home' => 'Etusivu',
    'Leads' => 'Liidit',
    'Meetings' => 'Tapaamiset',
    'Notes' => 'Muistiot',
    'Opportunities' => 'Myyntimahdollisuudet',
    'Outlook Plugin' => 'Outlook-komponentti',
    'Product Catalog' => 'Tuotekatalogi',
    'Products' => 'Tarjotut tuoterivit',
    'Projects' => 'Projektit',
    'Quotes' => 'Tarjoukset',
    'RSS' => 'RSS-syötteet',
    'Releases' => 'Julkaisut',
    'RevenueLineItems' => 'Tuoterivit',
    'Studio' => 'Studio',
    'Upgrade' => 'Päivitä',
    'Users' => 'Käyttäjät',
  ),
  'product_status_dom' => 
  array (
    '' => '',
    'Orders' => 'Tilattu',
    'Quotes' => 'Tarjottu',
    'Ship' => 'Toimitettu',
  ),
  'product_status_quote_key' => 'Tarjoukset',
  'product_template_status_dom' => 
  array (
    'Available' => 'Varastossa',
    'Unavailable' => 'Loppunut',
  ),
  'project_duration_units_dom' => 
  array (
    'Days' => 'Päivää',
    'Hours' => 'Tuntia',
  ),
  'project_priority_options' => 
  array (
    'High' => 'Korkea',
    'Low' => 'Alhainen',
    'Medium' => 'Normaali',
  ),
  'project_status_dom' => 
  array (
    'Draft' => 'Luonnos',
    'In Review' => 'Arvioitavana',
    'Published' => 'Julkaistu',
  ),
  'project_task_priority_options' => 
  array (
    'High' => 'Korkea',
    'Low' => 'Matala',
    'Medium' => 'Normaali',
  ),
  'project_task_status_options' => 
  array (
    'Completed' => 'Valmis',
    'Deferred' => 'Siirretty',
    'In Progress' => 'Käynnissä',
    'Not Started' => 'Ei aloitettu',
    'Pending Input' => 'Odottaa lisätietoja',
  ),
  'project_task_utilization_options' => 
  array (
    0 => 'none',
    25 => '25',
    50 => '50',
    75 => '75',
    100 => '100',
  ),
  'projects_priority_options' => 
  array (
    'high' => 'Korkea',
    'low' => 'Alhainen',
    'medium' => 'Normaali',
  ),
  'projects_status_options' => 
  array (
    'completed' => 'Valmis',
    'inprogress' => 'Käynnissä',
    'notstarted' => 'Ei aloitettu',
  ),
  'prospect_list_type_dom' => 
  array (
    'default' => 'Oletus',
    'exempt' => 'Poistettujen lista id:n mukaan',
    'exempt_address' => 'Estolista - sähköpostiosoitteen mukaan',
    'exempt_domain' => 'Estolista - domainin Mukaan',
    'seed' => 'Syöte',
    'test' => 'Testi',
  ),
  'query_calc_calc_type_dom' => 
  array (
    'AVG' => 'Keskiarvo',
    'COUNT' => 'Lukumäärä',
    'MAX' => 'Maksimi',
    'MIN' => 'Minimi',
    'STDDEV' => 'Keskihajonta',
    'SUM' => 'Summa',
    'VARIANCE' => 'Varianssi',
  ),
  'query_calc_leftright_type_dom' => 
  array (
    'Field' => 'Kenttä',
    'Group' => 'Ryhmä',
    'Value' => 'Arvo',
  ),
  'query_calc_oper_dom' => 
  array (
    '*' => '(×) Kertaa',
    '+' => '(+) Plus',
    '-' => '(−) Miinus',
    '/' => '(÷) Jaettuna',
  ),
  'query_calc_type_dom' => 
  array (
    'Math' => 'Matematiikkakalkulaatio',
    'Standard' => 'Standardi',
  ),
  'query_column_type_dom' => 
  array (
    'Calculation' => 'Laskelma',
    'Display' => 'Näyttö',
  ),
  'query_display_type_dom' => 
  array (
    'Custom' => 'Mukautettu',
    'Default' => 'Oletus',
    'Hidden' => 'Piilotettu',
  ),
  'query_groupby_axis_dom' => 
  array (
    'Columns' => 'Sarakkeet (X-akseli)',
    'Rows' => 'Rivit (Y-akseli)',
  ),
  'query_groupby_calc_type_dom' => 
  array (
    'AVG' => 'KESKIARVO',
    'COUNT' => 'Lukumäärä',
    'STDDEV' => 'Keskihajonta',
    'SUM' => 'SUMMA',
    'VARIANCE' => 'Varianssi',
  ),
  'query_groupby_qualifier_dom' => 
  array (
    'Day' => 'Päivä',
    'Month' => 'Kuukausi',
    'Quarter' => 'Neljännes',
    'Week' => 'Viikko',
    'Year' => 'Vuosi',
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
    -12 => '-24',
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
    0 => 'Nyt',
  ),
  'query_groupby_type_dom' => 
  array (
    'Field' => 'Standardikenttä',
    'Time' => 'Ajanjakso',
  ),
  'query_type_dom' => 
  array (
    'Main Query' => 'Pääquery',
  ),
  'quote_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Liiketoiminnasta päättävä',
    'Business Evaluator' => 'Liiketoimintaa arvioiva',
    'Executive Sponsor' => 'Johtava sponsori',
    'Influencer' => 'Vaikuttaja',
    'Other' => 'Muu',
    'Primary Decision Maker' => 'Ensisijainen päättäjä',
    'Technical Decision Maker' => 'Tekninen päätöksentekijä',
    'Technical Evaluator' => 'Tekninen arvioija',
  ),
  'quote_stage_dom' => 
  array (
    'Closed Accepted' => 'Suljettu / hyväksytty',
    'Closed Dead' => 'Suljettu / lopetettu',
    'Closed Lost' => 'Suljettu / hävitty',
    'Confirmed' => 'Vahvistettu',
    'Delivered' => 'Toimitettu',
    'Draft' => 'Luonnos',
    'Negotiation' => 'Neuvottelu',
    'On Hold' => 'Odottaa',
  ),
  'quote_type_dom' => 
  array (
    'Orders' => 'Tilaus',
    'Quotes' => 'Tarjous',
  ),
  'record_type_display' => 
  array (
    '' => '',
    'Accounts' => 'Asiakas',
    'Bugs' => 'Bugit',
    'Cases' => 'Palvelupyyntö',
    'Contacts' => 'Kontaktit',
    'Leads' => 'Liidi',
    'Opportunities' => 'Myyntimahdollisuus',
    'Products' => 'Tarjottu tuoterivi',
    'Project' => 'Projekti',
    'ProjectTask' => 'Projektitehtävä',
    'Prospects' => 'Prospekti',
    'Quotes' => 'Tarjous',
    'Tasks' => 'Tehtävä',
  ),
  'record_type_display_notes' => 
  array (
    'Accounts' => 'Asiakas',
    'Bugs' => 'Bugit',
    'Calls' => 'Puhelut',
    'Cases' => 'Palvelupyyntö',
    'Contacts' => 'Kontakti',
    'Contracts' => 'Sopimus',
    'Emails' => 'Sähköpostit',
    'Leads' => 'Liidi',
    'Meetings' => 'Tapaamiset',
    'Opportunities' => 'Myyntimahdollisuus',
    'ProductTemplates' => 'Tuotekatalogi',
    'Products' => 'Tarjottu tuoterivi',
    'Project' => 'Projekti',
    'ProjectTask' => 'Projektitehtävä',
    'Prospects' => 'Prospekti',
    'Quotes' => 'Tarjous',
    'Tasks' => 'Tehtävä',
  ),
  'release_status_dom' => 
  array (
    'Active' => 'Aktiivinen',
    'Inactive' => 'Ei-aktiivinen',
  ),
  'reminder_max_time' => '90000',
  'reminder_time_options' => 
  array (
    -1 => 'Ei mitään',
    60 => 'Minuutti ennen',
    300 => '5 minuuttia ennen',
    600 => '10 minuuttia ennen',
    900 => '15 minuuttia ennen',
    1800 => '30 minuuttia ennen',
    3600 => 'Tunti ennen',
    7200 => '2 tuntia ennen',
    10800 => '3 tuntia ennen',
    18000 => '5 tuntia ennen',
    86400 => 'Päivä ennen',
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
    '' => '',
    'Daily' => 'Päivittäin',
    'Monthly' => 'Kuukausittain',
    'Weekly' => 'Viikottain',
    'Yearly' => 'Vuosittain',
  ),
  'repeat_type_dom' => 
  array (
    '' => 'Ei mitään',
    'Daily' => 'Päivittäin',
    'Monthly' => 'Kuukausittain',
    'Weekly' => 'Viikottain',
    'Yearly' => 'Vuosittain',
  ),
  'report_align_dom' => 
  array (
    'center' => 'Keski',
    'left' => 'Vasen',
    'right' => 'Oikea',
  ),
  'report_color_dom' => 
  array (
    '' => 'Oletus',
    'DarkGreen' => 'Tummanvihreä',
    'DodgerBlue' => 'Dodgersininen',
    'LightBlue' => 'Vaaleansininen',
    'LightGray' => 'Vaaleanharmaa',
    'black' => 'Musta',
    'blue' => 'Sininen',
    'green' => 'Vihreä',
    'red' => 'Punainen',
    'white' => 'Valkoinen',
  ),
  'report_maker_status_dom' => 
  array (
    'Multi Module' => 'Monta moduulia',
    'Single Module' => 'Yksi moduuli',
  ),
  'roi_type_dom' => 
  array (
    'Budget' => 'Budjetti',
    'Expected_Revenue' => 'Odotettu liikevaihto',
    'Investment' => 'Investointi',
    'Revenue' => 'Liikevaihto',
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
    'Closed Lost' => 'Suljettu / hävitty',
    'Closed Won' => 'Suljettu / voitettu',
    'Id. Decision Makers' => 'Tunnista päättäjät',
    'Needs Analysis' => 'Tarveanalyysi',
    'Negotiation/Review' => 'Neuvottelu/arvio',
    'Perception Analysis' => 'Mielikuva-analyysi',
    'Proposal/Price Quote' => 'Tarjous',
    'Prospecting' => 'Prospektointi',
    'Qualification' => 'Valinta',
    'Value Proposition' => 'Arvolupaus',
  ),
  'sales_status_dom' => 
  array (
    'Closed Lost' => 'Suljettu / hävitty',
    'Closed Won' => 'Suljettu / voitettu',
    'In Progress' => 'Käynnissä',
    'New' => 'Uusi',
  ),
  'sales_status_with_quote_dom' => 
  array (
    'Closed Lost' => 'Suljettu / hävitty',
    'Closed Won' => 'Suljettu / voitettu',
    'Converted to Quote' => 'Muunnetti tarjoukseksi',
    'In Progress' => 'Käynnissä',
    'New' => 'Uusi',
  ),
  'salutation_dom' => 
  array (
    '' => '',
    'Dr.' => 'Tohtori',
    'Mr.' => 'Hra',
    'Mrs.' => 'Rva',
    'Ms.' => 'Nti',
    'Prof.' => 'Professori',
  ),
  'scheduler_period_dom' => 
  array (
    'hour' => 'Tunnit',
    'min' => 'Minuutit',
  ),
  'scheduler_status_dom' => 
  array (
    'Active' => 'Aktiivinen',
    'Inactive' => 'Ei-aktiivinen',
  ),
  'schedulers_times_dom' => 
  array (
    'completed' => 'Valmis',
    'failed' => 'Epäonnistui',
    'in progress' => 'Käynnissä',
    'no curl' => 'Ei suoritettu: cURL -kirjasto ei käytettävissä',
    'not run' => 'Viimeinen ajokerta, ei suoritettu',
    'ready' => 'Valmis',
  ),
  'source_dom' => 
  array (
    '' => '',
    'Forum' => 'Foorumi',
    'InboundEmail' => 'Sähköposti',
    'Internal' => 'Sisäinen',
    'Twitter' => 'Twitter',
    'Web' => 'Web',
  ),
  'state_dom' => 
  array (
    'AK' => 'Alaska',
    'AL' => 'Alabama',
    'AR' => 'Arkansas',
    'AZ' => 'Arizona',
    'CA' => 'Kalifornia',
    'CO' => 'Colorado',
    'CT' => 'Connecticut',
    'DC' => 'Columbian liittopiiri (Washington DC)',
    'DE' => 'Delaware',
    'FL' => 'Florida',
    'GA' => 'Georgia',
    'HI' => 'Havaiji',
    'IA' => 'Iowa',
    'ID' => 'Idaho',
    'IL' => 'Illinois',
    'IN' => 'Indiana',
    'KS' => 'Kansas',
    'KY' => 'Kentucky',
    'LA' => 'Louisiana',
    'MA' => 'Massachusetts',
    'MD' => 'Maryland',
    'ME' => 'Maine',
    'MI' => 'Michigan',
    'MN' => 'Minnesota',
    'MO' => 'Missouri',
    'MS' => 'Mississippi',
    'MT' => 'Montana',
    'NC' => 'Pohjois-Carolina',
    'ND' => 'Pohjois-Dakota',
    'NE' => 'Nebraska',
    'NH' => 'New Hampshire',
    'NJ' => 'New Jersey',
    'NM' => 'New Mexico',
    'NV' => 'Nevada',
    'NY' => 'New York',
    'OH' => 'Ohio',
    'OK' => 'Oklahoma',
    'OR' => 'Oregon',
    'PA' => 'Penssylvania',
    'RI' => 'Rhode Island',
    'SC' => 'Etelä-Carolina',
    'SD' => 'Etelä-Dakota',
    'TN' => 'Tennessee',
    'TX' => 'Teksas',
    'UT' => 'Utah',
    'VA' => 'Virginia',
    'VT' => 'Vermont',
    'WA' => 'Washington',
    'WI' => 'Wisconsin',
    'WV' => 'Länsi-Virginia',
    'WY' => 'Wyoming',
  ),
  'sugar7_dashlet_auto_refresh_options' => 
  array (
    0 => 'Ei mitään',
    1 => 'Minuutin välein',
    5 => '5 minuutin välein',
    10 => '10 minuutin välein',
    15 => '15 minuutin välein',
    30 => '30 minuutin välein',
  ),
  'sugar7_dashlet_reports_auto_refresh_options' => 
  array (
    0 => 'Ei mitään',
    15 => '15 minuutin välein',
    30 => '30 minuutin välein',
    45 => '45 minuutin välein',
    60 => 'Tunneittain',
    120 => '2 tunnin välein',
  ),
  'support_term_dom' => 
  array (
    '+1 year' => 'Yksi vuosi',
    '+2 years' => 'Kaksi vuotta',
    '+6 months' => 'Kuusi kuukautta',
  ),
  'task_priority_dom' => 
  array (
    'High' => 'Korkea',
    'Low' => 'Alhainen',
    'Medium' => 'Normaali',
  ),
  'task_status_dom' => 
  array (
    'Completed' => 'Valmis',
    'Deferred' => 'Siirretty',
    'In Progress' => 'Käynnissä',
    'Not Started' => 'Ei aloitettu',
    'Pending Input' => 'Odottaa lisätietoja',
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
    'group' => 'Ei',
    'user' => 'Kyllä',
  ),
  'tax_class_dom' => 
  array (
    'Non-Taxable' => 'Ei-verotettava',
    'Taxable' => 'Verotettava',
  ),
  'timezone_dom' => 
  array (
    'Africa/Abidjan' => 'Africa/Abidjan',
    'Africa/Accra' => 'Africa/Accra',
    'Africa/Addis_Ababa' => 'Africa/Addis_Ababa',
    'Africa/Algiers' => 'Africa/Algiers',
    'Africa/Asmera' => 'Africa/Asmera',
    'Africa/Bamako' => 'Africa/Bamako',
    'Africa/Bangui' => 'Africa/Bangui',
    'Africa/Banjul' => 'Africa/Banjul',
    'Africa/Bissau' => 'Africa/Bissau',
    'Africa/Blantyre' => 'Africa/Blantyre',
    'Africa/Brazzaville' => 'Africa/Brazzaville',
    'Africa/Bujumbura' => 'Africa/Bujumbura',
    'Africa/Cairo' => 'Africa/Cairo',
    'Africa/Casablanca' => 'Africa/Casablanca',
    'Africa/Ceuta' => 'Africa/Ceuta',
    'Africa/Conakry' => 'Africa/Conakry',
    'Africa/Dakar' => 'Africa/Dakar',
    'Africa/Dar_es_Salaam' => 'Africa/Dar_es_Salaam',
    'Africa/Djibouti' => 'Africa/Djibouti',
    'Africa/Douala' => 'Africa/Douala',
    'Africa/El_Aaiun' => 'Africa/El_Aaiun',
    'Africa/Freetown' => 'Africa/Freetown',
    'Africa/Gaborone' => 'Africa/Gaborone',
    'Africa/Harare' => 'Africa/Harare',
    'Africa/Johannesburg' => 'Africa/Johannesburg',
    'Africa/Kampala' => 'Africa/Kampala',
    'Africa/Khartoum' => 'Africa/Khartoum',
    'Africa/Kigali' => 'Africa/Kigali',
    'Africa/Kinshasa' => 'Africa/Kinshasa',
    'Africa/Lagos' => 'Africa/Lagos',
    'Africa/Libreville' => 'Africa/Libreville',
    'Africa/Lome' => 'Africa/Lome',
    'Africa/Luanda' => 'Africa/Luanda',
    'Africa/Lubumbashi' => 'Africa/Lubumbashi',
    'Africa/Lusaka' => 'Africa/Lusaka',
    'Africa/Malabo' => 'Africa/Malabo',
    'Africa/Maputo' => 'Africa/Maputo',
    'Africa/Maseru' => 'Africa/Maseru',
    'Africa/Mbabane' => 'Africa/Mbabane',
    'Africa/Mogadishu' => 'Africa/Mogadishu',
    'Africa/Monrovia' => 'Africa/Monrovia',
    'Africa/Nairobi' => 'Africa/Nairobi',
    'Africa/Ndjamena' => 'Africa/Ndjamena',
    'Africa/Niamey' => 'Africa/Niamey',
    'Africa/Nouakchott' => 'Africa/Nouakchott',
    'Africa/Ouagadougou' => 'Africa/Ouagadougou',
    'Africa/Porto-Novo' => 'Africa/Porto-Novo',
    'Africa/Sao_Tome' => 'Africa/Sao_Tome',
    'Africa/Tripoli' => 'Africa/Tripoli',
    'Africa/Tunis' => 'Africa/Tunis',
    'Africa/Windhoek' => 'Africa/Windhoek',
    'America/Adak' => 'America/Adak',
    'America/Anchorage' => 'America/Anchorage',
    'America/Anguilla' => 'America/Anguilla',
    'America/Antigua' => 'America/Antigua',
    'America/Araguaina' => 'America/Araguaina',
    'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos_Aires',
    'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
    'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
    'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
    'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
    'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio_Gallegos',
    'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
    'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
    'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia',
    'America/Aruba' => 'America/Aruba',
    'America/Asuncion' => 'America/Asuncion',
    'America/Bahia' => 'America/Bahia',
    'America/Barbados' => 'America/Barbados',
    'America/Belem' => 'America/Belem',
    'America/Belize' => 'America/Belize',
    'America/Boa_Vista' => 'America/Boa_Vista',
    'America/Bogota' => 'America/Bogota',
    'America/Boise' => 'America/Boise',
    'America/Cambridge_Bay' => 'America/Cambridge_Bay',
    'America/Campo_Grande' => 'America/Campo_Grande',
    'America/Cancun' => 'America/Cancun',
    'America/Caracas' => 'America/Caracas',
    'America/Cayenne' => 'America/Cayenne',
    'America/Cayman' => 'America/Cayman',
    'America/Chicago' => 'America/Chicago',
    'America/Chihuahua' => 'America/Chihuahua',
    'America/Coral_Harbour' => 'America/Coral_Harbour',
    'America/Costa_Rica' => 'America/Costa_Rica',
    'America/Cuiaba' => 'America/Cuiaba',
    'America/Curacao' => 'America/Curacao',
    'America/Danmarkshavn' => 'America/Danmarkshavn',
    'America/Dawson' => 'America/Dawson',
    'America/Dawson_Creek' => 'America/Dawson_Creek',
    'America/Denver' => 'America/Denver',
    'America/Detroit' => 'America/Detroit',
    'America/Dominica' => 'America/Dominica',
    'America/Edmonton' => 'America/Edmonton',
    'America/Eirunepe' => 'America/Eirunepe',
    'America/El_Salvador' => 'America/El_Salvador',
    'America/Fortaleza' => 'America/Fortaleza',
    'America/Glace_Bay' => 'America/Glace_Bay',
    'America/Godthab' => 'America/Godthab',
    'America/Goose_Bay' => 'America/Goose_Bay',
    'America/Grand_Turk' => 'America/Grand_Turk',
    'America/Grenada' => 'America/Grenada',
    'America/Guadeloupe' => 'America/Guadeloupe',
    'America/Guatemala' => 'America/Guatemala',
    'America/Guayaquil' => 'America/Guayaquil',
    'America/Guyana' => 'America/Guyana',
    'America/Halifax' => 'America/Halifax',
    'America/Havana' => 'America/Havana',
    'America/Hermosillo' => 'America/Hermosillo',
    'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
    'America/Indiana/Knox' => 'America/Indiana/Knox',
    'America/Indiana/Marengo' => 'America/Indiana/Marengo',
    'America/Indiana/Vevay' => 'America/Indiana/Vevay',
    'America/Inuvik' => 'America/Inuvik',
    'America/Iqaluit' => 'America/Iqaluit',
    'America/Jamaica' => 'America/Jamaica',
    'America/Juneau' => 'America/Juneau',
    'America/Kentucky/Louisville' => 'America/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'America/Kentucky/Monticello',
    'America/La_Paz' => 'America/La_Paz',
    'America/Lima' => 'America/Lima',
    'America/Los_Angeles' => 'America/Los_Angeles',
    'America/Maceio' => 'America/Maceio',
    'America/Managua' => 'America/Managua',
    'America/Manaus' => 'America/Manaus',
    'America/Martinique' => 'America/Martinique',
    'America/Mazatlan' => 'America/Mazatlan',
    'America/Menominee' => 'America/Menominee',
    'America/Merida' => 'America/Merida',
    'America/Mexico_City' => 'America/Mexico_City',
    'America/Miquelon' => 'America/Miquelon',
    'America/Monterrey' => 'America/Monterrey',
    'America/Montevideo' => 'America/Montevideo',
    'America/Montreal' => 'America/Montreal',
    'America/Montserrat' => 'America/Montserrat',
    'America/Nassau' => 'America/Nassau',
    'America/New_York' => 'America/New_York',
    'America/Nipigon' => 'America/Nipigon',
    'America/Nome' => 'America/Nome',
    'America/Noronha' => 'America/Noronha',
    'America/North_Dakota/Center' => 'America/North_Dakota/Center',
    'America/Panama' => 'America/Panama',
    'America/Pangnirtung' => 'America/Pangnirtung',
    'America/Paramaribo' => 'America/Paramaribo',
    'America/Phoenix' => 'America/Phoenix',
    'America/Port-au-Prince' => 'America/Port-au-Prince',
    'America/Port_of_Spain' => 'America/Port_of_Spain',
    'America/Porto_Velho' => 'America/Porto_Velho',
    'America/Puerto_Rico' => 'America/Puerto_Rico',
    'America/Rainy_River' => 'America/Rainy_River',
    'America/Rankin_Inlet' => 'America/Rankin_Inlet',
    'America/Recife' => 'America/Recife',
    'America/Regina' => 'America/Regina',
    'America/Rio_Branco' => 'America/Rio_Branco',
    'America/Santiago' => 'America/Santiago',
    'America/Santo_Domingo' => 'America/Santo_Domingo',
    'America/Sao_Paulo' => 'America/Sao_Paulo',
    'America/Scoresbysund' => 'America/Scoresbysund',
    'America/St_Johns' => 'America/St_Johns',
    'America/St_Kitts' => 'America/St_Kitts',
    'America/St_Lucia' => 'America/St_Lucia',
    'America/St_Thomas' => 'America/St_Thomas',
    'America/St_Vincent' => 'America/St_Vincent',
    'America/Swift_Current' => 'America/Swift_Current',
    'America/Tegucigalpa' => 'America/Tegucigalpa',
    'America/Thule' => 'America/Thule',
    'America/Thunder_Bay' => 'America/Thunder_Bay',
    'America/Tijuana' => 'America/Tijuana',
    'America/Toronto' => 'America/Toronto',
    'America/Tortola' => 'America/Tortola',
    'America/Vancouver' => 'America/Vancouver',
    'America/Whitehorse' => 'America/Whitehorse',
    'America/Winnipeg' => 'America/Winnipeg',
    'America/Yakutat' => 'America/Yakutat',
    'America/Yellowknife' => 'America/Yellowknife',
    'Antarctica/Casey' => 'Antarctica/Casey',
    'Antarctica/Davis' => 'Antarctica/Davis',
    'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
    'Antarctica/Mawson' => 'Antarctica/Mawson',
    'Antarctica/McMurdo' => 'Antarctica/McMurdo',
    'Antarctica/Palmer' => 'Antarctica/Palmer',
    'Antarctica/Rothera' => 'Antarctica/Rothera',
    'Antarctica/Syowa' => 'Antarctica/Syowa',
    'Antarctica/Vostok' => 'Antarctica/Vostok',
    'Asia/Aden' => 'Asia/Aden',
    'Asia/Almaty' => 'Asia/Almaty',
    'Asia/Amman' => 'Asia/Amman',
    'Asia/Anadyr' => 'Asia/Anadyr',
    'Asia/Aqtau' => 'Asia/Aqtau',
    'Asia/Aqtobe' => 'Asia/Aqtobe',
    'Asia/Ashgabat' => 'Asia/Ashgabat',
    'Asia/Baghdad' => 'Asia/Baghdad',
    'Asia/Bahrain' => 'Asia/Bahrain',
    'Asia/Baku' => 'Asia/Baku',
    'Asia/Bangkok' => 'Asia/Bangkok',
    'Asia/Beijing' => 'Asia/Beijing',
    'Asia/Beirut' => 'Asia/Beirut',
    'Asia/Bishkek' => 'Asia/Bishkek',
    'Asia/Brunei' => 'Asia/Brunei',
    'Asia/Calcutta' => 'Asia/Calcutta',
    'Asia/Choibalsan' => 'Asia/Choibalsan',
    'Asia/Chongqing' => 'Asia/Chongqing',
    'Asia/Colombo' => 'Asia/Colombo',
    'Asia/Damascus' => 'Asia/Damascus',
    'Asia/Dhaka' => 'Asia/Dhaka',
    'Asia/Dili' => 'Asia/Dili',
    'Asia/Dubai' => 'Asia/Dubai',
    'Asia/Dushanbe' => 'Asia/Dushanbe',
    'Asia/Gaza' => 'Asia/Gaza',
    'Asia/Harbin' => 'Asia/Harbin',
    'Asia/Hong_Kong' => 'Asia/Hong_Kong',
    'Asia/Hovd' => 'Asia/Hovd',
    'Asia/Irkutsk' => 'Asia/Irkutsk',
    'Asia/Jakarta' => 'Asia/Jakarta',
    'Asia/Jayapura' => 'Asia/Jayapura',
    'Asia/Jerusalem' => 'Asia/Jerusalem',
    'Asia/Kabul' => 'Asia/Kabul',
    'Asia/Kamchatka' => 'Asia/Kamchatka',
    'Asia/Karachi' => 'Asia/Karachi',
    'Asia/Kashgar' => 'Asia/Kashgar',
    'Asia/Katmandu' => 'Asia/Katmandu',
    'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
    'Asia/Kuala_Lumpur' => 'Asia/Kuala_Lumpur',
    'Asia/Kuching' => 'Asia/Kuching',
    'Asia/Kuwait' => 'Asia/Kuwait',
    'Asia/Macau' => 'Asia/Macau',
    'Asia/Magadan' => 'Asia/Magadan',
    'Asia/Makassar' => 'Asia/Makassar',
    'Asia/Manila' => 'Asia/Manila',
    'Asia/Muscat' => 'Asia/Muscat',
    'Asia/Nicosia' => 'Asia/Nicosia',
    'Asia/Novosibirsk' => 'Asia/Novosibirsk',
    'Asia/Omsk' => 'Asia/Omsk',
    'Asia/Oral' => 'Asia/Oral',
    'Asia/Phnom_Penh' => 'Asia/Phnom_Penh',
    'Asia/Pontianak' => 'Asia/Pontianak',
    'Asia/Pyongyang' => 'Asia/Pyongyang',
    'Asia/Qatar' => 'Asia/Qatar',
    'Asia/Qyzylorda' => 'Asia/Qyzylorda',
    'Asia/Rangoon' => 'Asia/Rangoon',
    'Asia/Riyadh' => 'Asia/Riyadh',
    'Asia/Saigon' => 'Asia/Saigon',
    'Asia/Sakhalin' => 'Asia/Sakhalin',
    'Asia/Samarkand' => 'Asia/Samarkand',
    'Asia/Seoul' => 'Asia/Seoul',
    'Asia/Shanghai' => 'Asia/Shanghai',
    'Asia/Singapore' => 'Asia/Singapore',
    'Asia/Taipei' => 'Asia/Taipei',
    'Asia/Tashkent' => 'Asia/Tashkent',
    'Asia/Tbilisi' => 'Asia/Tbilisi',
    'Asia/Tehran' => 'Asia/Tehran',
    'Asia/Thimphu' => 'Asia/Thimphu',
    'Asia/Tokyo' => 'Asia/Tokyo',
    'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
    'Asia/Urumqi' => 'Asia/Urumqi',
    'Asia/Vientiane' => 'Asia/Vientiane',
    'Asia/Vladivostok' => 'Asia/Vladivostok',
    'Asia/Yakutsk' => 'Asia/Yakutsk',
    'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
    'Asia/Yerevan' => 'Asia/Yerevan',
    'Atlantic/Azores' => 'Atlantic/Azores',
    'Atlantic/Bermuda' => 'Atlantic/Bermuda',
    'Atlantic/Canary' => 'Atlantic/Canary',
    'Atlantic/Cape_Verde' => 'Atlantic/Cape_Verde',
    'Atlantic/Faeroe' => 'Atlantic/Faeroe',
    'Atlantic/Madeira' => 'Atlantic/Madeira',
    'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
    'Atlantic/South_Georgia' => 'Atlantic/South_Georgia',
    'Atlantic/St_Helena' => 'Atlantic/St_Helena',
    'Atlantic/Stanley' => 'Atlantic/Stanley',
    'Australia/Adelaide' => 'Australia/Adelaide',
    'Australia/Brisbane' => 'Australia/Brisbane',
    'Australia/Broken_Hill' => 'Australia/Broken_Hill',
    'Australia/Currie' => 'Australia/Currie',
    'Australia/Darwin' => 'Australia/Darwin',
    'Australia/Hobart' => 'Australia/Hobart',
    'Australia/Lindeman' => 'Australia/Lindeman',
    'Australia/Melbourne' => 'Australia/Melbourne',
    'Australia/Perth' => 'Australia/Perth',
    'Australia/Sydney' => 'Australia/Sydney',
    'CET' => 'CET (UTC+1)',
    'EET' => 'EET (UTC+2)',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Andorra' => 'Europe/Andorra',
    'Europe/Athens' => 'Europe/Athens',
    'Europe/Belgrade' => 'Europe/Belgrade',
    'Europe/Berlin' => 'Europe/Berlin',
    'Europe/Brussels' => 'Europe/Brussels',
    'Europe/Bucharest' => 'Europe/Bucharest',
    'Europe/Budapest' => 'Europe/Budapest',
    'Europe/Chisinau' => 'Europe/Chisinau',
    'Europe/Copenhagen' => 'Europe/Copenhagen',
    'Europe/Dublin' => 'Europe/Dublin',
    'Europe/Gibraltar' => 'Europe/Gibraltar',
    'Europe/Helsinki' => 'Europe/Helsinki',
    'Europe/Istanbul' => 'Europe/Istanbul',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Kiev' => 'Europe/Kiev',
    'Europe/Lisbon' => 'Europe/Lisbon',
    'Europe/London' => 'Europe/London',
    'Europe/Luxembourg' => 'Europe/Luxembourg',
    'Europe/Madrid' => 'Europe/Madrid',
    'Europe/Malta' => 'Europe/Malta',
    'Europe/Minsk' => 'Europe/Minsk',
    'Europe/Monaco' => 'Europe/Monaco',
    'Europe/Moscow' => 'Europe/Moscow',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Paris' => 'Europe/Paris',
    'Europe/Prague' => 'Europe/Prague',
    'Europe/Riga' => 'Europe/Riga',
    'Europe/Rome' => 'Europe/Rome',
    'Europe/Samara' => 'Europe/Samara',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'Europe/Sofia' => 'Europe/Sofia',
    'Europe/Stockholm' => 'Europe/Stockholm',
    'Europe/Tallinn' => 'Europe/Tallinn',
    'Europe/Tirane' => 'Europe/Tirane',
    'Europe/Uzhgorod' => 'Europe/Uzhgorod',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vienna' => 'Europe/Vienna',
    'Europe/Vilnius' => 'Europe/Vilnius',
    'Europe/Warsaw' => 'Europe/Warsaw',
    'Europe/Zaporozhye' => 'Europe/Zaporozhye',
    'Europe/Zurich' => 'Europe/Zurich',
    'Indian/Antananarivo' => 'Indian/Antananarivo',
    'Indian/Chagos' => 'Indian/Chagos',
    'Indian/Christmas' => 'Indian/Christmas',
    'Indian/Cocos' => 'Indian/Cocos',
    'Indian/Comoro' => 'Indian/Comoro',
    'Indian/Kerguelen' => 'Indian/Kerguelen',
    'Indian/Mahe' => 'Indian/Mahe',
    'Indian/Maldives' => 'Indian/Maldives',
    'Indian/Mauritius' => 'Indian/Mauritius',
    'Indian/Mayotte' => 'Indian/Mayotte',
    'Indian/Reunion' => 'Indian/Reunion',
    'MET' => 'MET (UTC+1)',
    'Pacific/Apia' => 'Pacific/Apia',
    'Pacific/Auckland' => 'Pacific/Auckland',
    'Pacific/Chatham' => 'Pacific/Chatham',
    'Pacific/Easter' => 'Pacific/Easter',
    'Pacific/Efate' => 'Pacific/Efate',
    'Pacific/Enderbury' => 'Pacific/Enderbury',
    'Pacific/Fakaofo' => 'Pacific/Fakaofo',
    'Pacific/Fiji' => 'Pacific/Fiji',
    'Pacific/Funafuti' => 'Pacific/Funafuti',
    'Pacific/Galapagos' => 'Pacific/Galapagos',
    'Pacific/Gambier' => 'Pacific/Gambier',
    'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
    'Pacific/Guam' => 'Pacific/Guam',
    'Pacific/Honolulu' => 'Pacific/Honolulu',
    'Pacific/Johnston' => 'Pacific/Johnston',
    'Pacific/Kiritimati' => 'Pacific/Kiritimati',
    'Pacific/Kosrae' => 'Pacific/Kosrae',
    'Pacific/Kwajalein' => 'Pacific/Kwajalein',
    'Pacific/Majuro' => 'Pacific/Majuro',
    'Pacific/Marquesas' => 'Pacific/Marquesas',
    'Pacific/Midway' => 'Pacific/Midway',
    'Pacific/Nauru' => 'Pacific/Nauru',
    'Pacific/Niue' => 'Pacific/Niue',
    'Pacific/Norfolk' => 'Pacific/Norfolk',
    'Pacific/Noumea' => 'Pacific/Noumea',
    'Pacific/Pago_Pago' => 'Pacific/Pago_Pago',
    'Pacific/Palau' => 'Pacific/Palau',
    'Pacific/Pitcairn' => 'Pacific/Pitcairn',
    'Pacific/Ponape' => 'Pacific/Ponape',
    'Pacific/Port_Moresby' => 'Pacific/Port_Moresby',
    'Pacific/Rarotonga' => 'Pacific/Rarotonga',
    'Pacific/Saipan' => 'Pacific/Saipan',
    'Pacific/Tahiti' => 'Pacific/Tahiti',
    'Pacific/Tarawa' => 'Pacific/Tarawa',
    'Pacific/Tongatapu' => 'Pacific/Tongatapu',
    'Pacific/Truk' => 'Pacific/Truk',
    'Pacific/Wake' => 'Pacific/Wake',
    'Pacific/Wallis' => 'Pacific/Wallis',
    'WET' => 'WET (UTC)',
  ),
  'token_status' => 
  array (
    1 => 'Pyyntö',
    2 => 'Pääsy',
    3 => 'Virheellinen',
  ),
  'top10_opportunities_duration_options' => 
  array (
    0 => 'Tämä neljännes',
    3 => 'Seuraava neljännes',
    12 => 'Tämä vuosi',
  ),
  'top10_opportunities_visibility_options' => 
  array (
    'group' => '',
    'user' => '',
  ),
  'tselect_type_dom' => 
  array (
    0 => '0 tuntia',
    14440 => '4 tuntia',
    28800 => '8 tuntia',
    43200 => '12 tuntia',
    86400 => '1 päivä',
    172800 => '2 päivää',
    259200 => '3 päivää',
    345600 => '4 päivää',
    432000 => '5 päivää',
    604800 => '1 viikko',
    1209600 => '2 päivää',
    1814400 => '3 päivää',
    2592000 => '30 päivää',
    5184000 => '60 päivää',
    7776000 => '90 päivää',
    10368000 => '120 päivää',
    12960000 => '150 päivää',
    15552000 => '180 päivää',
  ),
  'user_status_dom' => 
  array (
    'Active' => 'Aktiivinen',
    'Inactive' => 'Ei-aktiivinen',
  ),
  'user_type_dom' => 
  array (
    'Administrator' => 'Järjestelmänhaltija',
    'RegularUser' => 'Peruskäyttäjä',
  ),
  'webLogicHookList' => 
  array (
    'after_delete' => 'Poiston jälkeen',
    'after_login' => 'Sisäänkirjautumisen jälkeen',
    'after_login_failed' => 'Sisäänkirjautumisen epäonnistumisen jälkeen',
    'after_logout' => 'Uloskirjautumisen jälkeen',
    'after_relationship_add' => 'Suhteen lisäyksen jälkeen',
    'after_relationship_delete' => 'Suhteen poiston jälkeen',
    'after_save' => 'Tallennuksen jälkeen',
  ),
  'web_hook_request_method_list' => 
  array (
    'DELETE' => 'DELETE',
    'GET' => 'GET',
    'POST' => 'POST',
    'PUT' => 'PUT',
  ),
  'wflow_action_datetime_type_dom' => 
  array (
    'Existing Value' => 'Olemassa oleva arvo',
    'Triggered Date' => 'Laukaistu päivämäärä',
  ),
  'wflow_action_type_dom' => 
  array (
    'new' => 'Uusi tietue',
    'update' => 'Päivitä tietue',
    'update_rel' => 'Päivitä liittyvä tietue',
  ),
  'wflow_address_type_dom' => 
  array (
    'bcc' => 'Bcc:',
    'cc' => 'Cc:',
    'to' => 'Vastaanottaja:',
  ),
  'wflow_address_type_invite_dom' => 
  array (
    'bcc' => 'Bcc:',
    'cc' => 'Cc:',
    'invite_only' => '(Vain kutsulla)',
    'to' => 'Vastaanottaja:',
  ),
  'wflow_address_type_to_only_dom' => 
  array (
    'to' => 'Vastaanottaja:',
  ),
  'wflow_adv_enum_type_dom' => 
  array (
    'advance' => 'Siirrä pudotusvalikkoa eteenpäin',
    'retreat' => 'Siirrä pudotusvalikkoa taaksepäin',
  ),
  'wflow_adv_team_type_dom' => 
  array (
    'current_team' => 'Sisäänkirjautuneen käyttäjän tiimi',
    'team_id' => 'Lauenneen tietueen nykyinen tiimi',
  ),
  'wflow_adv_user_type_dom' => 
  array (
    'assigned_user_id' => 'Käyttäjä osoitettu lauetulle tietueelle',
    'created_by' => 'Käyttäjä, joka loi lauenneen tietueen',
    'current_user' => 'Sisäänkirjautunut käyttäjä',
    'modified_user_id' => 'Käyttäjä, joka viimeksi muokkasi lauennutta tietuetta',
  ),
  'wflow_alert_type_dom' => 
  array (
    'Email' => 'Sähköposti',
    'Invite' => 'Kutsu',
  ),
  'wflow_array_type_dom' => 
  array (
    'future' => 'Uusi arvo',
    'past' => 'Vanha arvo',
  ),
  'wflow_fire_order_dom' => 
  array (
    'actions_alerts' => 'Ensiksi toiminnot, sitten huomautukset',
    'alerts_actions' => 'Ensiksi huomautukset, sitten toiminnot',
  ),
  'wflow_record_type_dom' => 
  array (
    'All' => 'Uudet ja päivitetyt tietueet',
    'New' => 'Vain uudet tietueet',
    'Update' => 'Vain päivitetyt tietueet',
  ),
  'wflow_rel_type_dom' => 
  array (
    'all' => 'Kaikki liittyvät',
    'filter' => 'Suodata liittyvät',
  ),
  'wflow_relate_type_dom' => 
  array (
    'Manager' => 'Käyttäjän manageri',
    'Self' => 'Käyttäjä',
  ),
  'wflow_relfilter_type_dom' => 
  array (
    'all' => 'kaikki liittyvät',
    'any' => 'mitkä tahansa liittyvät',
  ),
  'wflow_set_type_dom' => 
  array (
    'Advanced' => 'Lisäasetukset',
    'Basic' => 'Yleiset asetukset',
  ),
  'wflow_source_type_dom' => 
  array (
    'Custom Template' => 'Mukautettu malli',
    'Normal Message' => 'Normaali viesti',
    'System Default' => 'Järjestelmän oletus',
  ),
  'wflow_type_dom' => 
  array (
    'Normal' => 'Kun tietue tallennetaan',
    'Time' => 'Ajan kulumisen jälkeen',
  ),
  'wflow_user_type_dom' => 
  array (
    'current_user' => 'Tämänhetkiset käyttäjät',
    'rel_user' => 'Liittyvät käyttäjät',
    'rel_user_custom' => 'Liittyvät mukautetut käyttäjät',
    'specific_role' => 'Tietty rooli',
    'specific_team' => 'Tietty tiimi',
    'specific_user' => 'Tietty käyttäjä',
  ),
  'width_type_dom' => 
  array (
    '%' => 'Prosenttia (%)',
    'px' => 'Pikseliä (px)',
  ),
);

$app_strings = array (
  'BorderColor' => 'Rajojen väri',
  'DATA_TYPE_DUE' => 'Erääntyy:',
  'DATA_TYPE_MODIFIED' => 'Muokattu:',
  'DATA_TYPE_SENT' => 'Lähetetty:',
  'DATA_TYPE_START' => 'Alku:',
  'DEFAULT' => 'Perus',
  'ERROR_ACCESS_MODULE' => 'Sinulla ei ole pääsyoikeutta tähän moduuliin.',
  'ERROR_CONNECTOR_CONFIGURE' => 'Ei voitu hakea dataa. Palvelu voi olla hetkellisesti pääsemättömissä tai konfiguraatio voi olla väärin.',
  'ERROR_DATETIME' => 'Virhe: tämä kenttä vaatii validin päivämäärän.',
  'ERROR_DUPLICATE_EMAIL' => 'Virhe: duplikoitu sähköpostiosoite: {{#each this}}{{this}} {{/each}}',
  'ERROR_EMAIL' => 'Virhe: kelpaamaton sähköpostiosoite: {{#each this}}{{this}} {{/each}}',
  'ERROR_EMPTY_LINK_MODULE' => 'Valitse ensiksi suhde.',
  'ERROR_EXAMINE_MSG' => 'Tutki alla olevaa virheviestiä:',
  'ERROR_EXCEEDING_OC_LICENSES' => 'Päällä olevien offline clientien määrä ylittää lisenssissä sallitun määrän.',
  'ERROR_FIELD_REQUIRED' => 'Virhe: tämä kenttä on pakollinen.',
  'ERROR_FULLY_EXPIRED' => 'Yhtiösi SugarCRM-lisenssi on vanhentunut yli 7 päivää sitten ja se tulee uudistaa. Vain ylläpitäjät voivat kirjautua.',
  'ERROR_IS_AFTER' => 'Virhe: tämän kentän päivämäärä ei voi olla ennen kentän {{this}} päivämäärää.',
  'ERROR_IS_BEFORE' => 'Virhe: tämän kentän päivämäärä ei voi olla kentän {{this}} päivämäärän jälkeen.',
  'ERROR_IS_GREATER_THAN' => 'Virhe: tämän kentän arvon on oltava suurempi kuin {{this}}.',
  'ERROR_IS_LESS_THAN' => 'Virhe: tämän kentän arvo on oltava pienempi kuin {{this}}.',
  'ERROR_LICENSE_EXPIRED' => 'SugarCRM lisenssi tulee päivittää. Vain ylläpitäjät voivat kirjautua.',
  'ERROR_LICENSE_VALIDATION' => 'SugarCRM lisenssi tulee validoida. Vain ylläpitäjät voivat kirjautua.',
  'ERROR_MAXVALUE' => 'Virhe: tämän kentän maksimiarvo on {{this}}.',
  'ERROR_MAX_FIELD_LENGTH' => 'Virhe: tämän kentän maksimipituus on {{this}}.',
  'ERROR_MAX_FILESIZE_EXCEEDED' => 'Virhe: liitetiedosto on liian suuri.',
  'ERROR_MINVALUE' => 'Virhe: tämän kentän minimiarvo on {{this}}.',
  'ERROR_MIN_FIELD_LENGTH' => 'Virhe: tämän kentän minimipituus on {{this}}.',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'Tyhjä vaadittu kenttä',
  'ERROR_NOTIFY_OVERRIDE' => 'Virhe: ResourceObserver->notify() pitää olla ohitettuna.',
  'ERROR_NO_BEAN' => 'Ei saatu beania.',
  'ERROR_NO_RECORD' => 'Virhe tietuetta haettaessa. Tietue on poistettu tai sinulla ei ole oikeuksia nähdä sitä.',
  'ERROR_NUMBER' => 'Virhe: tämä kenttä vaatii validin numeron.',
  'ERROR_PRIMARY_EMAIL' => 'Virhe: asetettuna pitäisi olla vähintään yksi ensisijainen osoite.',
  'ERROR_TYPE_NOT_VALID' => 'Virhe: Virheellinen tyyppi.',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Virhe: Ei saada dataa konnektorille {0}. Palvelu voi tällä hetkellä olla pois käytöstä tai asetukset voivat olla virheelliset.  Konnektorin virheviesti: ({1}).',
  'ERROR_UPLOAD_FAILED' => 'Virhe: tiedoston lataus epäonnistui.',
  'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Määrittele <code>key</code> indeksi displayParams attribuutissa metadatamääritelmäksi.',
  'ERR_AJAX_LOAD' => 'Virhe:',
  'ERR_AJAX_LOAD_FAILURE' => 'Prosessoitaessa pyyntöäsi tapahtui virhe. Yritä myöhemmin uudelleen',
  'ERR_AJAX_LOAD_FOOTER' => 'Jos tämä virhe jää, pyydä järjestelmän ylläpitäjää kytkemään ajax pois päältä tämä moduulin osalta.',
  'ERR_BAD_RESPONSE_FROM_SERVER' => 'Huono vastaus palvelimelta',
  'ERR_BLANK_PAGE_NAME' => 'Anna sivun nimi.',
  'ERR_CALENDAR_CANNOT_UPDATE_FROM_CHILD' => 'Muutokset toistoon pitää tehdä sarjan ensimmäiseen tietueeseen.',
  'ERR_CANNOT_CREATE_METADATA_FILE' => 'Virhe: tiedosto <code>[[file]]</code> puuttuu. Luonti ei onnistunut, koska vastaavaa HTML-tiedostoa ei löytynyt.',
  'ERR_CANNOT_FIND_MODULE' => 'Virhe: Moduulia <code>[module]</code> ei ole olemassa.',
  'ERR_COMPATIBLE_PRECISION_VALUE' => 'Kenttä ei ole yhteensopiva tarkkuusarvon kanssa',
  'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Virhe: Bean-parametrien array count ei vastaa tulosten array countia',
  'ERR_CONNECTOR_NOT_ARRAY' => 'connector array kohdassa {0} on määritelty väärin tai on tyhjä ja ei voitu käyttää.',
  'ERR_CONTACT_TECH_SUPPORT' => 'Ota yhteyttä tekniseen tukeen.',
  'ERR_CREATING_FIELDS' => 'Virhe lisätietokentissä:',
  'ERR_CREATING_TABLE' => 'Virhe taulun luonnissa:',
  'ERR_DATABASE_CONN_DROPPED' => 'Virhe kyselyä suoritettaessa. Yhteys tietokantaan mahdollisesti menetetty. Päivitä sivu. Voi olla että web-palvelin tulee käynnistää uudelleen.',
  'ERR_DATABSE_RELATIONSHIP_QUERY' => 'Virhe asetettasessa {0} suhde: {1}',
  'ERR_DB_FAIL' => 'Virhe tietokannassa. Tarkista sugarcrm.log',
  'ERR_DB_QUERY' => '{0}: kysely epäonnistui: {1}',
  'ERR_DB_VERSION' => 'Sugar CRM {0} tiedostoja voi käyttää ainoastaan Sugar CRM {1} tietokannan kanssa.',
  'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Desimaalierotin on sama kuin tuhaterotin.<br /><br /> Valitse jokin toinen erotinmerkki.',
  'ERR_DELETE_RECORD' => 'Tietuenumero tulee määritellä jotta voit poistaa tilin.',
  'ERR_DNB_BAL_COMPARISON' => 'Virhe: alarajan pitää olla ylärajaa pienempi',
  'ERR_ELASTIC_TEST_FAILED' => 'Yhteyttä Elastic-palvelimeen ei saatu',
  'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Syötä salasanan vahvistus.',
  'ERR_ENTER_NEW_PASSWORD' => 'Syötä uusi salasana.',
  'ERR_ENTER_OLD_PASSWORD' => 'Syötä nykyinen salasana.',
  'ERR_EXISTING_PORTAL_USERNAME' => 'Virhe: Portaalin nimi on jo käytössä.',
  'ERR_EXPORT_DISABLED' => 'Tietojen vienti estetty.',
  'ERR_EXPORT_TYPE' => 'Virhe tietoja vietäessä',
  'ERR_EXTERNAL_API_403' => 'Lupa evätty. Tiedostotyyppiä ei tueta.',
  'ERR_EXTERNAL_API_LOTUS_LIVE_CONFLICT' => 'Samanniminen tiedosto on jo järjestelmässä.',
  'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'OAuth access token puuttuu.',
  'ERR_EXTERNAL_API_SAVE_FAIL' => 'Virhe tallennettaessa ulkopuoliselle tilille',
  'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Virhe ladattaessa. Varmista ettei lataamasi tiedosto ole tyhjä.',
  'ERR_FILE_NOT_FOUND' => 'Virhe: Ei voitu avata tiedostoa {0}. Tarkista järjestelmän ja palvelimen käyttöoikeudet.',
  'ERR_FILE_WRITE' => 'Virhe: Ei Voi kirjoittaa tiedostoon {0}. Tarkista järjestelmän ja palvelimen käyttöoikeudet.',
  'ERR_GENERIC_SERVER_ERROR' => 'Virhe yhdistättäessä palvelimeen. Yritä uudelleen.',
  'ERR_GENERIC_TITLE' => 'Virhe',
  'ERR_GOOGLE_API_415' => 'Google Docs ei tue antamaasi tiedostomuotoa.',
  'ERR_HTTP_404_ACTION' => 'Palaa edelliselle sivulle.',
  'ERR_HTTP_404_TEXT' => 'Pyytämäsi resurssia ei löydetty.',
  'ERR_HTTP_404_TITLE' => 'HTTP: 404 Ei löydetty',
  'ERR_HTTP_404_TYPE' => '404',
  'ERR_HTTP_500_ACTION' => 'Ota yhteyttä tekniseen tukeen.',
  'ERR_HTTP_500_TEXT' => 'Palvelimessa oli virhe. Ota yhteyttä tekniseen tukeen.',
  'ERR_HTTP_500_TITLE' => 'HTTP: 500 Sisäinen palvelinvirhe',
  'ERR_HTTP_500_TYPE' => '500',
  'ERR_HTTP_DEFAULT_ACTION' => 'Palaa edelliselle sivulle.',
  'ERR_HTTP_DEFAULT_TEXT' => 'Tuntematon virhe.',
  'ERR_HTTP_DEFAULT_TITLE' => 'Tunnistamaton virhe',
  'ERR_HTTP_DEFAULT_TYPE' => 'Tuntematon',
  'ERR_INTERNAL_ERR_MSG' => 'Sisäinen virhe',
  'ERR_INVALID_AMOUNT' => 'Anna summa.',
  'ERR_INVALID_DATE' => 'Anna päivämäärä.',
  'ERR_INVALID_DATE_FORMAT' => 'Päivämäärän tulee olla muotoa: vvvv-kk-pp',
  'ERR_INVALID_DAY' => 'Anna päivä.',
  'ERR_INVALID_EMAIL_ADDRESS' => 'ei voimassaoleva sähköpostiosoite.',
  'ERR_INVALID_FILE_REFERENCE' => 'Virheellinen tiedostoviittaus',
  'ERR_INVALID_HOUR' => 'Anna tunti.',
  'ERR_INVALID_MONTH' => 'Anna kuukausi.',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Virheellinen vaadittu kenttä:',
  'ERR_INVALID_TIME' => 'Anna kellonaika.',
  'ERR_INVALID_VALUE' => 'Virheellinen arvo:',
  'ERR_INVALID_YEAR' => 'Anna nelinumeroinen vuosiluku.',
  'ERR_LAYOUT_RENDER_MSG' => 'Hupsista! Mitään ei saada renderöityä. Yritä myöhemmin uudelleen tai ota yhteyttä tukeen.',
  'ERR_LAYOUT_RENDER_TITLE' => 'Asettelun renderöinti epäonnistui',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Virhe: Moduulilta puuttuu mapping entry',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Syötä tieto vaadittuihin kenttiin:',
  'ERR_MISSING_VARDEF_NAME' => 'Varoitus: kentällä <code>[[field]]</code> ei ole tarvittavaa riviä tiedostossa <code>[moduleDir] vardefs.php</code>',
  'ERR_MOBILE_BROWSER_FORBIDDEN' => 'Kielletty.',
  'ERR_MOBILE_BROWSER_INTERNAL_SERVER_ERROR' => 'Sisäinen palvelinvirhe.',
  'ERR_MOBILE_BROWSER_NOT_AUTHORIZED' => 'Autentikointi epäonnistui.',
  'ERR_MOBILE_BROWSER_PAGE_NOT_FOUND' => 'Pyydettyä resurssia ei löytynyt.',
  'ERR_MOBILE_BROWSER_SERVICE_UNAVAILABLE' => 'Palvelu ei saatavilla.',
  'ERR_MOBILE_CONFLICT' => 'Joku on muokannut samaa tietuetta palvelimella. Vahvista muutosten automaattinen yhdistys, tai kiellä (kieltäminen poistaa muutokset).',
  'ERR_MOBILE_CONNECTION_FAILED' => 'Palvelimeen ei saada yhteyttä.',
  'ERR_MOBILE_CONNECTION_FAILED_LOGIN' => 'Palvelin ei saatavilla annettuun URL:iin.',
  'ERR_MOBILE_EMAIL' => 'Virhe. Kelpaamaton sähköpostiosoite.',
  'ERR_MOBILE_FILE_ABORTED' => 'Lukuoperaatio keskeytettiin',
  'ERR_MOBILE_FILE_NOT_FOUND' => 'Tiedostoa ei löytynyt',
  'ERR_MOBILE_FILE_NOT_READABLE' => 'Tiedosto ei luettavissa',
  'ERR_MOBILE_FILE_NOT_SUPPORTED' => 'Tätä dokumenttityyppiä ei tueta.',
  'ERR_MOBILE_FILE_PROCESSING' => 'Virhe tiedoston prosessoinnissa',
  'ERR_MOBILE_FILE_READ' => 'Tiedoston lukeminen epäonnistui',
  'ERR_MOBILE_FILE_SECURITY' => 'Tiedosto on lukittu',
  'ERR_MOBILE_FILE_SIZE_LIMIT_EXCEEDED' => 'Tiedosto on liian suuri. Suurin sallittu tiedostokoko on {{size}}.',
  'ERR_MOBILE_GENERIC_NATIVE_ERROR' => 'Tapahtui odottamaton virhe.',
  'ERR_MOBILE_INCOMPATIBLE_CLIENT_VERSION' => 'Sovelluksesi on vanhentunut, eikä enää yhteensopiva {{{brandName}}}-instanssin kanssa. Haluaisitko ladata sovelluksen uuden version App Storesta?',
  'ERR_MOBILE_INTERNAL' => 'Sisäinen virhe ({{{code}}}). Yritä myöhemmin uudelleen.',
  'ERR_MOBILE_INTERNET_UNAVAILABLE' => 'Internet-yhteys ei saatavilla.',
  'ERR_MOBILE_INVALID_CREDS' => 'Väärä käyttäjänimi tai salasana.',
  'ERR_MOBILE_METADATA_CHANGED' => 'Palvelinkonfiguraatio on muuttunut.',
  'ERR_MOBILE_METADATA_CHANGED_RELOAD' => 'Palvelinkonfiguraatio on muuttunut, ja jälleenlataus on tarpeen. Jatketaanko?',
  'ERR_MOBILE_NOT_AUTHORIZED' => 'Pääsy estetty.',
  'ERR_MOBILE_NOT_FOUND' => 'Resurssia ei löytynyt.',
  'ERR_MOBILE_NOT_FOUND_LOGIN' => '{{{brandName}}}-palvelinta ei löydetty annetussa URL:ssa.',
  'ERR_MOBILE_SESSION_EXPIRED' => 'Sessiosi on vanhentunut.',
  'ERR_MOBILE_SSO_NOT_CONFIGURED' => 'SSO-kirjautuminen ei ole käytettävissä. Onhan Sugar-versio 7.5 tai uudempi? Onhan instanssi konfiguroitu kunnolla SSO:n suhteen?',
  'ERR_MOBILE_STORAGE_UNAVAILABLE' => 'Laitteen tallennustila ei saatavilla',
  'ERR_MOBILE_TIMEOUT' => 'Palvelin ei vastaa :(',
  'ERR_MOBILE_TIMEOUT_LOGIN' => 'Palvelin ei vastaa annettuun URL:iin.',
  'ERR_MOBILE_UPLOAD' => 'Virhe tiedoston latauksessa.',
  'ERR_MOBILE_VALIDATION' => 'Tietue on epävalidi',
  'ERR_MOBILE_VIEW_NOT_SUPPORTED' => 'Mobiiliversio ei tue tätä toimintoa. Avataanko työpöytäversio?',
  'ERR_MONITOR_FILE_MISSING' => 'Virhe: Monitoria ei voida luoda, koska metadatatiedosto on tyhjä tai tiedostoa ei ole olemassa.',
  'ERR_MONITOR_NOT_CONFIGURED' => 'Virhe: Monitorin konfiguraatiota ei löydy',
  'ERR_MSSQL_DB_CONTEXT' => 'Muutettu tietokannan konteksti arvoon',
  'ERR_MSSQL_WARNING' => 'Varoitus:',
  'ERR_NEED_ACTIVE_SESSION' => 'Istunnon (session) tulee olla aktiivinen jotta tietoja voidaan viedä.',
  'ERR_NOTHING_SELECTED' => 'Valitse jotain ennen kuin jatkat.',
  'ERR_NOT_ADMIN' => 'Ylläpitoliittymään pääsy estetty.',
  'ERR_NO_DB' => 'Ei saatu yhteyttä tietokantaan. Tarkista sugarcrm.log.',
  'ERR_NO_DOCS' => 'Dokumentteja ei saatavilla',
  'ERR_NO_HEADER_ID' => 'Toiminto ei ole käytettävissä tämän teeman kanssa.',
  'ERR_NO_PRIMARY_TEAM_SPECIFIED' => 'Ensisijaista ryhmää ei ole määritelty',
  'ERR_NO_RECORDS_SELECTED' => 'Et ole valinnut tietueita.',
  'ERR_NO_SINGLE_QUOTE' => 'Ei voida käyttää yksittäistä lainausmerkkiä nimikkeelle',
  'ERR_NO_SUCH_FILE' => 'Tiedostoa ei ole järjestelmässä',
  'ERR_NO_VIEW_ACCESS_ACTION' => 'Ota yhteyttä järjestelmänvalvojaan pyytääksesi pääsyoikeudet.',
  'ERR_NO_VIEW_ACCESS_MSG' => 'Ota yhteyttä järjestelmänvalvojaan saadaksesi pääsyoikeudet moduulin {0} näkymälle.',
  'ERR_NO_VIEW_ACCESS_REASON' => 'Sinulla ei ole oiketta päästä tälle sivulle.',
  'ERR_NO_VIEW_ACCESS_TITLE' => 'Pääsy kielletty',
  'ERR_OFFLINE' => 'Offline-virhe',
  'ERR_OFFLINE_CLEAN_UP_CONFIRMATION' => 'Sinulta on loppunut tila paikalliselle tietovarastolle. Suositellaan tietokannan siivousta. Tehdäänkö siivous nyt?',
  'ERR_OFFLINE_DB_CLEANING_ERROR' => 'Tietokannan siivous epäonnistui',
  'ERR_OFFLINE_OUT_OF_SPACE' => 'Sinulla ei ole enää tilaa tietovarastolle.',
  'ERR_OFFLINE_PREFETCH_FAILED' => 'Tietueiden aikaishaku palvelimelta epäonnistui',
  'ERR_OFFLINE_SERVERTIME_UNAVAILABLE' => 'Ei saatu palvelimen aikaa',
  'ERR_OFFLINE_START_FAILED_OUT_OF_SPACE' => 'Virhe luodessa paikallista tietovarastoa: tila on loppunut.',
  'ERR_OFFLINE_STORAGE_CREATE' => 'Virhe luodessa paikallista tietovarastoa',
  'ERR_OFFLINE_STORAGE_UNAVAILABLE' => 'Virhe avattaessa paikallista tietovarastoa',
  'ERR_OFFLINE_SYNC_CONFLICT' => 'Synkronointikonflikti',
  'ERR_OFFLINE_SYNC_ERROR' => 'Synkronoíntiongelma',
  'ERR_OPPORTUNITY_NAME_DUPE' => 'Myyntimahdollisuus nimellä %s on jo olemassa. Anna toinen nimi.',
  'ERR_OPPORTUNITY_NAME_MISSING' => 'Et antanut myyntimahdollisuuden nimeä. Kirjoita nimi alle.',
  'ERR_PASSWORD_MISMATCH' => 'Syötetty salasana ei täsmää järjestelmässä olevaa.',
  'ERR_PORTAL_NAME_CHECK' => 'Ei voitu varmistaa, että Portal-käyttäjänimi on uniikki.',
  'ERR_POTENTIAL_SEGFAULT' => 'Todennäköinen Apache segmentointivirhe havaittu. Ota yhteyttä ylläpitäjään vahvistaaksesi ongelman. Ylläpitäjä voi raportoida SugarCRM -yritykselle.',
  'ERR_QUERY_LIMIT' => 'Virhe: Kyselyraja ($limit) on ylittynyt moduulissa $module.',
  'ERR_QUOTE_CONVERTED' => 'Tämä tarjous on jo muutettu myyntimahdollisuudeksi.',
  'ERR_REENTER_PASSWORDS' => 'Uusi salasana ja sen vahvistus eivät täsmää.',
  'ERR_RENDER_FAILED_MSG' => 'Virhe renderöidessä näkymää',
  'ERR_RENDER_FAILED_TITLE' => 'Näkymän renderöinti epäonnistui',
  'ERR_RENDER_FIELD_FAILED_MSG' => 'Kentän {0} renderöinti epäonnistui.',
  'ERR_RENDER_FIELD_FAILED_TITLE' => 'Kentän renderöinti epäonnistui',
  'ERR_RESOLVE_ERRORS' => 'Korjaa virheet ennen jatkamista.',
  'ERR_RSS_INVALID_INPUT' => 'RSS:llä virheellinen input_type',
  'ERR_RSS_INVALID_RESPONSE' => 'RSS:llä virheellinen response_type',
  'ERR_SELF_REPORTING' => 'Käyttäjä ei voi raportoida itselleen.',
  'ERR_SERVER_FLAVOR_INCOMPATIBLE' => 'Yhteensopimaton palvelimen flavor: {{{flavor}}}. Tuetut flavorit: {{{supportedFlavors}}}.',
  'ERR_SERVER_VERSION_INCOMPATIBLE' => 'Yhteensopimaton palvelimen versio: {{{version}}}. Vaadittu minimiversio: {{{minVersion}}}.',
  'ERR_SINGLE_QUOTE' => 'Yksittäistä lainausmerkkiä ei voi käyttää tässä kentässä. Muuta kentän arvoa.',
  'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'displayParams taulukossa puuttuu indeksi',
  'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Virhe: <code>key</code> ja <code>copy</code> elementeissä displayParams taulukossa on eri määrä argumentteja.',
  'ERR_SQS_NO_MATCH' => 'Ei löydetty',
  'ERR_SQS_NO_MATCH_FIELD' => 'Ei täsmäävää kenttää:',
  'ERR_STORE_FILE_MISSING' => 'Virhe: Store implementation -tiedostoa ei löydy.',
  'ERR_SUHOSIN' => 'Suhosin esti lataamisen, lisää <code>upload<code> kohtaan <code>suhosin.executor.include.whitelist</code> (Katso <code>sugarcrm.log</code>)',
  'ERR_SYNC_FAILED' => 'Ei voida synkronoida palvelimen kanssa.',
  'ERR_TIMEPERIOD_ALREADY_HAS_LEAVES' => 'Tällä ajanjaksolla on jo alijaksoja (<i>sub-period</i>)',
  'ERR_TIMEPERIOD_ALREADY_LEAF' => 'Ali-ajanjaksoilla (<i>sub time period</i>) ei voi olla alijaksoja',
  'ERR_TIMEPERIOD_TYPE_DOES_NOT_EXIST' => 'Ei pystytty hakemaan seuraavantyyppisiä ajanjaksoja: ‘{0}’',
  'ERR_TIMEPERIOD_UNDEFINED_FOR_DATE' => 'Virhe: päiväyksen {0} ajanjakso (<i>timeperiod</i>) määrittämätön',
  'ERR_UNDEFINED_METRIC' => 'Virhe: Arvoa ei voitu asettaa määrittelemättömälle',
  'ERR_UW_RETIRED' => 'Päivitystyökalua ei ole saatavilla tälle versiolle.',
  'ERR_VCARD_FILE_MISSING' => 'vcf-tiedosto puuttuu',
  'ERR_VCARD_FILE_PARSE' => 'vCard-formaatin tulkinta epäonnistui',
  'EXCEPTION_ACCESS_MODULE_CONFIG_NOT_AUTHORIZED' => 'Tämänhetkisellä käyttäjällä ei ole oikeuksia muuttaa moduulin ‘{moduleNameLower}’ konfiguraatioasetuksia',
  'EXCEPTION_CHANGE_MODULE_CONFIG_NOT_AUTHORIZED' => 'Tämänhetkisellä käyttäjällä ei ole oikeuksia muuttaa moduulin ‘{moduleNameLower}’ konfiguraatioasetuksia',
  'EXCEPTION_CLIENT_OUTDATED' => 'Ohjelmistosi ei ole ajan tasalla. Päivitä clientisi, ennen kuin yrität päivittää uudelleen.',
  'EXCEPTION_CLIENT_OUTDATED_DESC' => 'Indikoi, että rajapintaa syövä clientti on vanhentunut, ja pitää päivittää ennen kuin rajapintaa voidaan syöddä lisää.',
  'EXCEPTION_CONNECTOR_RESPONSE' => 'Konnektori- tai integraatiopyyntö johti virhe-palautusarvoon.',
  'EXCEPTION_CONNECTOR_RESPONSE_DESC' => 'Indikoi, että rajapinnan yli tehty pyyntö toiseen palveluun, endpointtiin tain URI:iin epäonnistui, tai palvelin ei osannut prosessoida pyyntöä',
  'EXCEPTION_CREATE_MODULE_NOT_AUTHORIZED' => 'Sinulla ei ole oikeuksia luoda ‘{moduleSingularLower}’-tyyppistä tietuetta. Ota yhteyttä järjestelmänvalvojaan, jos tarvitset oikeudet.',
  'EXCEPTION_EDIT_CONFLICT' => 'Muokkauskonflikti. Lataa tietuedata uudelleen.',
  'EXCEPTION_EDIT_CONFLICT_DESC' => 'Indikoi, että tietueeseen on saattanut tapahtua samanaikaisia muokkauksia. Pyyntö muokata tietuetta haittaisi edellistä tietueen muokkausta.',
  'EXCEPTION_FATAL_ERROR' => 'Pyyntösi ei päättynyt. Tapahtui vakava virhe. Lisätietoja saa lokitiedostoista.',
  'EXCEPTION_FATAL_ERROR_DESC' => 'Pyyntöä ei voitu prosessoida, tai vastauksessa oli virhe. Tämä useiten tarkoittaa, että tapahtui fataali virhe. Tarkempia tietoja saa sovelluslokista.',
  'EXCEPTION_FAVORITE_MODULE_NOT_AUTHORIZED' => 'Sinua ei ole autorisoitu valitsemaan {moduleName}-moduulia suosikiksi. Ota yhteyttä järjestelmänvalvojaan jos tarvitset pääsyn.',
  'EXCEPTION_INACTIVE_PORTAL_USER' => 'Et saa yhteytta Portaliin koska portal-tilisi on epäaktiivinen. Ota yhteyttä asiakastukeen jos tarvitset yhteyden.',
  'EXCEPTION_INACTIVE_PORTAL_USER_DESC' => 'Sisäänkirjautuneeseen käyttäjään assosioitu portal-tili ei ole aktiivinen. Asiakastuen (customer support) pitää aktivoida tili.',
  'EXCEPTION_INCORRECT_VERSION_DESC' => 'Käyttämäsi API-versio ei kelpaa tälle pyynnölle. (\'The version of the API you are using is not correct for the current request.\')',
  'EXCEPTION_INVALID_PARAMETER' => 'Jokin pyyntösi parametreista on kelpaamaton.',
  'EXCEPTION_INVALID_PARAMETER_DESC' => 'Indikoi, että pyynnössä lähetetty parametri on kelvoton.',
  'EXCEPTION_INVALID_TOKEN' => 'Autentikointitokenisi ei ole validi.',
  'EXCEPTION_INVALID_TOKEN_DESC' => 'Kertoo, että pyynnön yhteydessä annettu autentikaatiosarja (auth taken) on kelpaamaton. Usein tämä johtuu sarjan vanhenemisesta.',
  'EXCEPTION_MAINTENANCE' => 'SugarCRM on huoltotilassa. Vain järjestelmänvalvojat voivat kirjautua sisään. Jos haluat lisätietoja, ota yhteyttä järjestelmänvalvojaan.',
  'EXCEPTION_MAINTENANCE_DESC' => 'Tämän rajapinnan tarjoava SugarCRM-instanssi on huoltotilassa. Vain admineilla on pääsy rajapintaan.',
  'EXCEPTION_METADATA_CONFLICT' => 'Metadatakonflikti. Lataa metadata uudelleen.',
  'EXCEPTION_METADATA_OUT_OF_DATE' => 'Metadatasi tai käyttäjä-hashisi ei vastaa palvelimella olevaa. Resynkronoi metadatasi.',
  'EXCEPTION_METADATA_OUT_OF_DATE_DESC' => 'Indikoi, että palvelimen metadata ei vastaa clientin metadataa. Näin voi käydä järjestelmä­asetusten muutoksen jälkeen, tai moduulien muokkaamisen tai asentamisen jälkeen, tai muiden järjestelmää muuttavien toimintojen jälkeen.',
  'EXCEPTION_MISSING_PARAMTER' => 'Pyynnöstäsi puuttui pakollinen parametri.',
  'EXCEPTION_MISSING_PARAMTER_DESC' => 'Indikoi, että pyynnöstä puuttuu pakollinen parametri.',
  'EXCEPTION_NEED_LOGIN' => 'Sinun pitää kirjautua sisään tämän toiminnon tekemiseksi.',
  'EXCEPTION_NEED_LOGIN_DESC' => 'Pyydetty päätepiste tarvitsee autentikaatiota, mutta pyynnön tekevä olio ei ole autentikoitunut. (\'The requested endpoint requires authentication and the requesting consumer has not yet authenticated.\')',
  'EXCEPTION_NOT_AUTHORIZED' => 'Sinulla ei ole oikeutta suorittaa tätä toimintoa. Ota yhteyttä järjestelmänvalvojaan jos tarvitset oikeuden.',
  'EXCEPTION_NOT_AUTHORIZED_DESC' => 'Indikoi, että pyydetty konsuumeri ei ole autorisoitu suorittamaan pyydettyä toimintoa.',
  'EXCEPTION_NOT_FOUND' => 'Pyytämäsi resurssia ei löytynyt. Ei löydetty pyynnön polulle käsittelijää (<i>handler</i>).',
  'EXCEPTION_NOT_FOUND_DESC' => 'Endpointti ei löytänyt resurssia pyynnölle, tai sillä ei ole käsittelijää pyynnölle.',
  'EXCEPTION_NO_METHOD' => 'Pyyntöäsi ei tueta. Ei löydetty pyyntösi HTTP-metodia tälle polulle.',
  'EXCEPTION_NO_METHOD_DESC' => 'Endpointti ei tue käytettyä HTTP-pyyntötyyppiä. Tämä voisi johtua esimerkiksi siksi, että GET-pyyntöä odottavaan endpointtiin on lähetetty POST-pyyntö.',
  'EXCEPTION_PORTAL_NOT_CONFIGURED' => 'Portalia ei ole konfiguroitu kunnolla. Ota yhteyttä Portal-järjestelmänvalvojaan tukea varten.',
  'EXCEPTION_PORTAL_NOT_CONFIGURED_DESC' => 'Indikoi, että portal-sovellusta ei ole konfiguroitu kunnolla, joten sovellusta ei voida käyttää. Portal-adminin pitää korjata tilanne.',
  'EXCEPTION_REQUEST_FAILURE' => 'Pyyntösi ei päättynyt.',
  'EXCEPTION_REQUEST_FAILURE_DESC' => 'Pyynnön suoritus epäonnistui.',
  'EXCEPTION_REQUEST_TOO_LARGE' => 'Pyyntösi on liian suuri prosessoitavaksi.',
  'EXCEPTION_REQUEST_TOO_LARGE_DESC' => 'Pyyntö on palvelimen mielestä liian suuri, eikä palvelin pysty käsittelemään sitä.',
  'EXCEPTION_SUBSCRIBE_MODULE_NOT_AUTHORIZED' => 'Sinua ei ole autorisoitu tilaamaan {moduleName}-moduulia. Ota yhteyttä järjestelmänvalvojaan jos tarvitset pääsyn.',
  'EXCEPTION_UNKNOWN_EXCEPTION' => 'Pyyntösi epäonnistui tuntemattoman poikkeuksen takia.',
  'EXCEPTION_UNKNOWN_EXCEPTION_DESC' => 'Tapahtui yleinen poikkeustilanne. Syyt tälle tilanteelle vaihtelevat, mutta putoavat tarkemman API-poikkeusviestin ulkopuolelle.',
  'FATAL_LICENSE_ALTERED' => 'Lisenssiäsi on muutettu sen jälkeen, kun viimeksi validoit sen.',
  'LBL_1_COLUMN' => '1 sarake',
  'LBL_2_COLUMN' => '2 sarake',
  'LBL_3_COLUMN' => '3 sarake',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Tyhjennä asiakas',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Tyhjennä asiakas',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Tyhjennä kampanja',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Tyhjennä kampanja',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Tyhjennä valinta',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Tyhjennä valinta',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Tyhjennä kontakti',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Tyhjennä kontakti',
  'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Tyhjennä tiedosto',
  'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Tyhjennä tiedosto',
  'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Tyhjennä valinta',
  'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Tyhjennä valinta',
  'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Tyhjennä tiimi',
  'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Tyhjennä tiimi',
  'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Tyhjennä käyttäjä',
  'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Tyhjennä käyttäjä',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Valitse asiakas',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Valitse asiakas',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Valitse kampanja',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Valitse kampanja',
  'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
  'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Valitse kontakti',
  'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Valitse kontakti',
  'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
  'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Valitse tiedosto',
  'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Valitse tiedosto',
  'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
  'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Valitse tiimi',
  'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Valitse tiimi',
  'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
  'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Valitse käyttäjä',
  'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Valitse käyttäjä',
  'LBL_ACCOUNT' => 'Asiakas',
  'LBL_ACCOUNTS' => 'Asiakkaat',
  'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
  'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Näytä yhteenveto',
  'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Näytä yhteenveto [Alt+H]',
  'LBL_ACTION' => 'Toiminto',
  'LBL_ACTION_CREATE' => 'LUO',
  'LBL_ACTION_CREATE_EXPLANATION' => 'Luotiin ‘{{moduleSingular}}: {{name}}’',
  'LBL_ACTION_CREATE_RELATED_EXPLANATION' => 'Luotiin ‘{{moduleSingular}}: {{name}}’, joka liittyy tietueeseen ‘{{relatedModule}}: {{relatedName}}’',
  'LBL_ACTION_DELETE' => 'POISTA',
  'LBL_ACTION_DELETE_EXPLANATION' => 'Poistettiin ‘{{moduleSingular}}: {{name}}’',
  'LBL_ACTION_FAVORITE' => 'SUOSIKITA',
  'LBL_ACTION_FAVORITE_EXPLANATION' => 'Valittiin suosikiksi ‘{{moduleSingular}}: {{name}}’',
  'LBL_ACTION_FOLLOW' => 'SEURAA',
  'LBL_ACTION_FOLLOW_EXPLANATION' => 'Valittiin seurattavaksi ‘{{moduleSingular}}: {{name}}’',
  'LBL_ACTION_LINK' => 'LINKITÄ',
  'LBL_ACTION_LINK_EXPLANATION' => 'Linkitettiin ‘{{moduleSingular}}: {{name}}’ tietueeseen ‘{{relatedModule}}: {{relatedName}}’',
  'LBL_ACTION_UNFAVORITE_EXPLANATION' => 'Ei enää suosikki: ‘{{moduleSingular}}: {{name}}’',
  'LBL_ACTION_UNFOLLOW_EXPLANATION' => 'Ei enää seurata ‘{{moduleSingular}}: {{name}}’',
  'LBL_ACTION_UNLINK' => 'EPÄLINKITÄ',
  'LBL_ACTION_UNLINK_EXPLANATION' => 'Poistettiin linkitys tietueesta ‘{{moduleSingular}}: {{name}}’ tietueeseen ‘{{relatedModule}}: {{relatedName}}’',
  'LBL_ACTION_UPDATE' => 'PÄIVITÄ',
  'LBL_ACTION_UPDATE_EXPLANATION' => 'Päivitettiin ‘{{moduleSingular}}: {{name}}’',
  'LBL_ACTIVE' => 'Sessio aktiivinen',
  'LBL_ACTIVE_TASKS_DASHLET' => 'Aktiiviset tehtävät',
  'LBL_ACTIVE_TASKS_DASHLET_COMPLETE_TASK' => 'Valmis',
  'LBL_ACTIVE_TASKS_DASHLET_CONFIRM_CLOSE' => 'Haluatko varmasti sulkea {0} päätettynä?',
  'LBL_ACTIVE_TASKS_DASHLET_DESCRIPTION' => 'Aktiiviset tehtävät -dashlet näyttää myöhässä olevat, tulevat ja suoritettavat tehtävät.',
  'LBL_ACTIVE_TASKS_DASHLET_DUE_NOW' => 'Tehtävä heti',
  'LBL_ACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL' => 'Tiimin tehtävät',
  'LBL_ACTIVE_TASKS_DASHLET_TODO' => 'Tehtävät',
  'LBL_ACTIVE_TASKS_DASHLET_UPCOMING' => 'Tulevat',
  'LBL_ACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL' => 'Tehtäväni',
  'LBL_ACTIVITIES' => 'Aktiviteettivirta',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
  'LBL_ACTIVITYSTREAM_COMMENT_PLACEHOLDER' => 'Lisää kommenttisi... kirjoita @ mainitaksesi käyttäjä, ja kirjoita # viittaaksesi tietueeseen.',
  'LBL_ACTIVITYSTREAM_POST_PLACEHOLDER' => 'Kirjoita muistiinpano tai vedä ja pudota liite. Kirjoita @ mainitaksesi käyttäjän. Kirjoita # viittaaksesi tietueen.',
  'LBL_ACTIVITYSTREAM_RELATIVETIME_ON' => 'on',
  'LBL_ACTIVITY_STREAM' => 'Aktiviteettivirta',
  'LBL_ACTIVITY_STREAM_DASHLET_DESCRIPTION' => 'Näe lista toiminnoista, jota tehdään tietueille, sekä luo ja lue kommentteja.',
  'LBL_ACTIVITY_STREAM_DASHLET_NAME' => 'Minun aktiviteettivirta',
  'LBL_ACTIVITY_STREAM_DISABLED' => 'Aktiviteettivirta ei ole käytössä',
  'LBL_ACTIVITY_STREAM_DISABLED_MODULE' => 'Aktiviteettivirta ei ole käytössä tälle moduulille.',
  'LBL_ACTIVITY_VIEW_TOUR' => 'Aktiviteettinäkymän esittely',
  'LBL_ACTIVTY_STREAM_SHOW_MORE' => 'Enemmän viestejä...',
  'LBL_ADD' => 'Lisää',
  'LBL_ADDED_DASHLET' => 'Dashlet lisätty',
  'LBL_ADDING_DASHLET' => 'Lisätään Dashlet ...',
  'LBL_ADDITIONAL_DETAILS' => 'Lisätiedot',
  'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Sulje',
  'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Sulje',
  'LBL_ADD_ALL_LEAD_FIELDS' => 'Lisää kaikki kentät',
  'LBL_ADD_BUTTON' => 'Lisää',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_TITLE' => 'Lisää [Alt+A]',
  'LBL_ADD_DASHLETS' => 'Lisää dashlet',
  'LBL_ADD_DOCUMENT' => 'Lisää dokumentti',
  'LBL_ADD_PAGE' => 'Lisää sivu',
  'LBL_ADD_TO_FAVORITES' => 'Lisää suosikkeihin',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Lisää prospektilistaan',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Lisää prospektilistaan',
  'LBL_ADMIN' => 'Hallinta',
  'LBL_ADVANCED' => 'Laajat asetukset',
  'LBL_ADVANCEDSEARCH' => 'Laaja haku',
  'LBL_ADVANCED_SEARCH' => 'Laaja haku',
  'LBL_ADV_SEARCH_LNK_KEY' => '8',
  'LBL_AJAX_FAILURE' => 'Ajax-virhe',
  'LBL_ALERT_BROWSER_NOT_SUPPORTED' => 'Selainversiotasi ei enää tueta tai käytät tukematonta selainta.',
  'LBL_ALERT_BROWSER_SUPPORT' => 'Suosittelemme seuraavia selainversioita: <ul><li>Internet Explorer 9</li><li>Firefox 22</lI><li>Safari 6</li><li>Chrome 27</li></ul>',
  'LBL_ALERT_TITLE_ERROR' => 'Virhe:',
  'LBL_ALERT_TITLE_LOADING' => 'Ladataan',
  'LBL_ALERT_TITLE_NOTICE' => 'Huomautus:',
  'LBL_ALERT_TITLE_SUCCESS' => 'Onnistui:',
  'LBL_ALERT_TITLE_WARNING' => 'Varoitus:',
  'LBL_ALT_ADDRESS' => 'Muu osoite:',
  'LBL_ALT_ADD_TEAM_ROW' => 'Lisää tiimi-rivi',
  'LBL_ALT_HIDE_OPTIONS' => 'Piilota ominaisuudet',
  'LBL_ALT_HOT_KEY' => 'Alt+',
  'LBL_ALT_INFO' => 'Tietoa',
  'LBL_ALT_MOVE_COLUMN_DOWN' => 'Siirrä valittua kohdetta alas näytettyjen listalla',
  'LBL_ALT_MOVE_COLUMN_LEFT' => 'Siirrä valittu kohde vasemmanpuoleiselle listalle',
  'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Siirrä valittu kohde oikeanpuoleiselle listalle',
  'LBL_ALT_MOVE_COLUMN_UP' => 'Siirrä valittua kohdetta ylös näytettyjen listalla',
  'LBL_ALT_REMOVE_TEAM_ROW' => 'Poista tiimi',
  'LBL_ALT_SHOW_OPTIONS' => 'Näytä ominaisuudet',
  'LBL_ALT_SORT' => 'Järjestä',
  'LBL_ALT_SORT_ASC' => 'Nouseva järjestys',
  'LBL_ALT_SORT_DESC' => 'Laskeva järjestys',
  'LBL_ALT_SPOT_SEARCH' => 'Spot-haku',
  'LBL_AMOUNT_USDOLLAR' => 'Määrä',
  'LBL_AND' => 'ja',
  'LBL_ANNUAL_TIMEPERIOD_FORMAT' => 'Vuosi {0}',
  'LBL_ARCHIVE' => 'Arkistoitu',
  'LBL_ARCHIVE_EMAIL' => 'Arkistoi sähköposti',
  'LBL_ASSIGN' => 'Valitse {{{this}}}',
  'LBL_ASSIGNED_TO' => 'Vastuuhenkilö:',
  'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
  'LBL_ASSIGNED_TO_USER' => 'Vastuuhenkilö',
  'LBL_ASSOC' => 'Linkitä {{{this}}}',
  'LBL_ASSOC_EXISTING' => 'Linkitä olemassa oleva {{{this}}}',
  'LBL_ASSOC_RELATED_RECORD' => 'Linkitä olemassa oleva tietue',
  'LBL_AUTH_FAILED' => 'Client-autentikointi epäonnistui.',
  'LBL_AUTH_FAILED_TITLE' => 'Epävalidi client',
  'LBL_BACK' => 'Takaisin',
  'LBL_BAL' => 'Listarakennus',
  'LBL_BASE_RATE' => 'Peruskorko',
  'LBL_BASIC' => 'Perusasetukset',
  'LBL_BASIC_QUICK_SEARCH' => 'Etsi...',
  'LBL_BASIC_SEARCH' => 'Hae',
  'LBL_BEFORE' => 'Ennen',
  'LBL_BEST' => 'Paras',
  'LBL_BEST_ADJUSTED' => 'Paras (oikaistu)',
  'LBL_BILLING_ADDRESS' => 'Laskutusosoite',
  'LBL_BILLING_STREET' => 'Katuosoite:',
  'LBL_BILL_TO_ACCOUNT' => 'Laskuta asiakasta',
  'LBL_BILL_TO_CONTACT' => 'Laskuta kontakti',
  'LBL_BLANK_VALUE' => ' ',
  'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack käyttäjälle jonka ID on {0}',
  'LBL_BROWSER_TITLE' => 'SugarCRM - kaupallinen Open Source CRM',
  'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
  'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Selaa dokumentteja',
  'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Selaa dokumentteja',
  'LBL_BUGS' => 'Bugit',
  'LBL_BY' => 'tekijä',
  'LBL_Blank' => ' ',
  'LBL_CALENDAR_DURATION' => 'Kesto',
  'LBL_CALENDAR_END_DATE' => 'Päättymispäivä',
  'LBL_CALENDAR_EVENT_RESPONSE_ACCEPT' => 'Varmistettu',
  'LBL_CALENDAR_EVENT_RESPONSE_DECLINE' => 'Hylätty',
  'LBL_CALENDAR_EVENT_RESPONSE_NONE' => 'Ei vastausta',
  'LBL_CALENDAR_EVENT_RESPONSE_TENTATIVE' => 'Epävarma',
  'LBL_CALENDAR_EVENT_SCHEDULE_UNAVAILABLE' => 'Aikataulu ei saatavilla',
  'LBL_CALENDAR_RECURRENCE' => 'Toistuminen',
  'LBL_CALENDAR_REMINDERS' => 'Muistutukset',
  'LBL_CALENDAR_REPEAT_COUNT' => 'Toistojen määrä',
  'LBL_CALENDAR_REPEAT_DOW' => 'Toista näinä viikonpäivinä',
  'LBL_CALENDAR_REPEAT_INTERVAL' => 'Toiston aikaväli',
  'LBL_CALENDAR_REPEAT_TYPE' => 'Toiston tyyppi',
  'LBL_CALENDAR_REPEAT_UNTIL_DATE' => 'Toista kunnes',
  'LBL_CALENDAR_START_DATE' => 'Aloituspäivä',
  'LBL_CALL' => 'Puhelu',
  'LBL_CALLS' => 'Puhelut',
  'LBL_CALLS_SUBPANEL_TITLE' => 'Puhelut',
  'LBL_CALL_BUTTON' => 'Puhelu',
  'LBL_CAMPAIGN' => 'Kampanja:',
  'LBL_CAMPAIGNLOG' => 'Kampanjalogi',
  'LBL_CAMPAIGNS' => 'Kampanjat',
  'LBL_CAMPAIGNS_SEND_QUEUED' => 'Lähetä jonossa olevat kampanjasähköpostit',
  'LBL_CAMPAIGN_CONTACT' => 'Kampanjat',
  'LBL_CAMPAIGN_ID' => 'campaign_id',
  'LBL_CANCEL_BUTTON_KEY' => 'X',
  'LBL_CANCEL_BUTTON_LABEL' => 'Peru',
  'LBL_CANCEL_BUTTON_LABEL_CONT' => 'lopettaaksesi.',
  'LBL_CANCEL_BUTTON_LABEL_UNSAVED_CONT' => 'pysyäksesi sivulla.',
  'LBL_CANCEL_BUTTON_TITLE' => 'Peru [Alt+X]',
  'LBL_CANNOT_SEND_PASSWORD' => 'Ei voida lähettää salasanaa',
  'LBL_CAN_NOT_DISABLE_ALL_LANG' => 'Et voi poistaa kaikkia kieliä.',
  'LBL_CASE' => 'Palvelupyyntö:',
  'LBL_CASES' => 'Palvelupyynnöt',
  'LBL_CASE_SUMMARY_CHART' => 'Case Summary',
  'LBL_CASE_SUMMARY_CHART_DESC' => 'Näyttää yhteenvedon liittyvistä caseista.',
  'LBL_CHANGE_BUTTON_KEY' => 'G',
  'LBL_CHANGE_BUTTON_LABEL' => 'Muuta',
  'LBL_CHANGE_BUTTON_TITLE' => 'Muuta [Alt+G]',
  'LBL_CHANGE_LAYOUT' => 'Muuta ulkoasua',
  'LBL_CHANGE_PASSWORD' => 'Muuta salasana',
  'LBL_CHARSET' => 'ISO-8859-1',
  'LBL_CHART' => 'Kaavio',
  'LBL_CHART_CONFIG_ALLOW_SCROLLING' => 'Salli rullaus',
  'LBL_CHART_CONFIG_BAR_CHART_OPTIONS' => 'Pylväskaavion esitysvaihtoehdot',
  'LBL_CHART_CONFIG_CHART_TYPE' => 'Kaaviotyyppi',
  'LBL_CHART_CONFIG_HIDE_EMPTY_GROUPS' => 'Piilota tyhjät ryhmät',
  'LBL_CHART_CONFIG_SHOW_TITLE' => 'Näytä titteli',
  'LBL_CHART_CONFIG_SHOW_XAXIS_LABEL' => 'Näytä x-akseli nimike',
  'LBL_CHART_CONFIG_SHOW_YAXIS_LABEL' => 'Näytä y-akseli nimike',
  'LBL_CHART_CONFIG_STACK_DATA' => 'Kasaa datasarjat',
  'LBL_CHART_CONFIG_TICK_DISPLAY' => 'Asteikkomerkin esitystavat',
  'LBL_CHART_CONFIG_TICK_ROTATE' => 'Asteikkomerkkien kääntö',
  'LBL_CHART_CONFIG_TICK_STAGGER' => 'Asteikkomerkkien porrastus',
  'LBL_CHART_CONFIG_TICK_WRAP' => 'Asteikkomerkkien pakkaus',
  'LBL_CHART_CONFIG_VALUE_PLACEMENT' => 'Pylväskaavion arvojen asetus',
  'LBL_CHART_CONTROLS_CLOSE' => 'Piilota nappulat',
  'LBL_CHART_CONTROLS_OPEN' => 'Näytä nappulat',
  'LBL_CHART_LEGEND_CLOSE' => 'Piilota selite',
  'LBL_CHART_LEGEND_OPEN' => 'Näytä selite',
  'LBL_CHART_NO_DATA' => 'Dataa ei löytynyt.',
  'LBL_CHART_UNDEFINED' => 'määrittelemätön',
  'LBL_CHECKALL' => 'Valitse kaikki',
  'LBL_CHOOSE_ITEMS' => 'Valitse kohteet',
  'LBL_CHOOSE_LINK' => 'Valitse linkin tyyppi',
  'LBL_CHOOSE_MONTH' => 'Valitse kuukausi',
  'LBL_CHOOSE_PARENT_TYPE' => 'Valitse vanhemman tyyppi',
  'LBL_CITY' => 'Kaupunki',
  'LBL_CLEARALL' => 'Tyhjennä kaikki',
  'LBL_CLEAR_BUTTON_KEY' => 'C',
  'LBL_CLEAR_BUTTON_LABEL' => 'Tyhjennä',
  'LBL_CLEAR_BUTTON_TITLE' => 'Tyhjennä',
  'LBL_CLICK_HERE' => 'Klikkaa tästä',
  'LBL_CLICK_TO_DRILLDOWN' => 'Klikkaa porataksesi alas',
  'LBL_CLIENT_IP' => 'Clientin IP-osoite',
  'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
  'LBL_CLOSEALL_BUTTON_LABEL' => 'Sulje kaikki',
  'LBL_CLOSEALL_BUTTON_TITLE' => 'Sulje kaikki [Alt+I]',
  'LBL_CLOSEINLINE' => 'Sulje',
  'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Haluatko sulkea tämän moduulin?',
  'LBL_CLOSE_ACTIVITY_HEADER' => 'Vahvista',
  'LBL_CLOSE_ACTIVITY_REMEMBER' => 'Älä näytä tätä viestiä tulevaisuudessa:',
  'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
  'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Sulje ja luo uusi',
  'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Sulje ja luo uusi [Alt+C]',
  'LBL_CLOSE_BUTTON_KEY' => 'Q',
  'LBL_CLOSE_BUTTON_LABEL' => 'Sulje',
  'LBL_CLOSE_BUTTON_TITLE' => 'Sulje',
  'LBL_CLOSE_DASHLETS' => 'Sulje',
  'LBL_CLOSE_SAVE_BUTTON' => 'Sulje ja tallenna',
  'LBL_CLOSE_WINDOW' => 'Sulje ikkuna',
  'LBL_COFIGURE_PORTAL_THEME' => 'Konfiguroi Portal-teema',
  'LBL_COLLAPSE_ALL' => 'Piilota kaikki',
  'LBL_COLLECTION_EXACT' => 'Eksakti',
  'LBL_COLLECTION_NAME' => 'Nimi',
  'LBL_COLLECTION_PRIMARY' => 'Ensisijainen',
  'LBL_COLORS' => 'Värit',
  'LBL_COLUMNS' => 'Sarakkeet',
  'LBL_COLUMNS_CAN_BE_DISPLAYED' => 'saraketta voidaan näyttää.',
  'LBL_COMMENT' => 'Kommentti',
  'LBL_COMPANY_LOGO' => 'Yrityksen logo',
  'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
  'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Uusi sähköposti',
  'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Uusi sähköposti [Alt+E]',
  'LBL_CONFIGURE_TWITTER' => 'Ota yhteyttä järjestelmänvalvojaan, jotta Twitter voidaan konfiguroida.',
  'LBL_CONFIG_BLOCKED_DESC_CONFIG_ACCESS' => 'Moduulin “{{module}}” tietokanta-asetukset pitää korjata',
  'LBL_CONFIG_BLOCKED_DESC_MODULE_ACCESS' => 'Käyttäjällä ei ole oikeutta päästä konfiguroimaan {{module}}-moduulin asetuksia',
  'LBL_CONFIG_BLOCKED_DESC_NO_CONFIG_METADATA' => '{{module}}-moduulilla ei ole konfiguroitavia asetuksia',
  'LBL_CONFIG_BLOCKED_DESC_USER_ACCESS' => 'Käyttäjällä ei ole pääsyä moduuliin “{{module}}”',
  'LBL_CONFIG_BLOCKED_TITLE' => 'Virhe konfiguroitaessa {{module}}-moduulia',
  'LBL_CONFIG_MODULE_SETTINGS_SAVED' => '{{module}}-moduulin asetukset on tallennettu.',
  'LBL_CONFIG_TITLE_MODULE_SETTINGS' => '{{module}}-moduulin asetukset',
  'LBL_CONFIRM' => 'Vahvista',
  'LBL_CONFIRM_BUTTON_LABEL' => 'Vahvista',
  'LBL_CONFIRM_BUTTON_LABEL_CONT' => 'jatkaaksesi.',
  'LBL_CONFIRM_BUTTON_LABEL_UNSAVED_CONT' => 'poistuaksesi sivulta ja hylätä muutokset.',
  'LBL_CONNECTORS_POPUPS' => 'Konnektorin ponnahdusikkuna',
  'LBL_CONNECT_TEST_FAIL' => 'Virhe: Konnektorin konfiguraatioasetukset voivat olla väärin. Ota yhteyttä järjestlemänvalvojaan.',
  'LBL_CONNECT_TWITTER' => 'Yhdistä Twitteriin',
  'LBL_CONNECT_TWITTER_FOR_ADMIN' => 'Konfiguroi Twitter-konnektori',
  'LBL_CONTACT' => 'Kontaktin nimi:',
  'LBL_CONTACTS' => 'Kontaktit',
  'LBL_CONTACT_EDIT_PASSWORD_LNK_TEXT' => 'Vaihda salasana',
  'LBL_CONTACT_LIST' => 'Kontaktilista',
  'LBL_CONTEXTUAL_SHORTCUTS' => 'Tilannekohtaiset pikanäppäimet',
  'LBL_CONTRACTS' => 'Sopimukset',
  'LBL_COPYRIGHT' => 'Copyright © 2004-2014 SugarCRM Inc. Kaikki oikeudet pidätetään.',
  'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopioi osoite vasemmalta:',
  'LBL_COUNTRY' => 'Maa:',
  'LBL_CREATED' => 'Luonut',
  'LBL_CREATED_BY_USER' => 'Luonut',
  'LBL_CREATED_ID' => 'Luojan ID',
  'LBL_CREATED_USER' => 'Luoja',
  'LBL_CREATE_ATTACHMENT' => 'Luo liite',
  'LBL_CREATE_BUG' => 'Uusi bugi',
  'LBL_CREATE_BUTTON_LABEL' => 'Luo',
  'LBL_CREATE_CASE' => 'Luo palvelupyyntö',
  'LBL_CREATE_CONTACT' => 'Luo kontakti',
  'LBL_CREATE_KB_DOCUMENT' => 'Luo artikkeli',
  'LBL_CREATE_LINK_BUTTON_LABEL' => 'Luo ja linkitä tietue',
  'LBL_CREATE_LINK_RECORD' => 'Luo ja linkitä tietue',
  'LBL_CREATE_MODULE' => 'Luo {{{this}}}',
  'LBL_CREATE_NEW_TARGET_LIST' => 'Luo uusi tavoitelista',
  'LBL_CREATE_NOTE' => 'Luo muistio',
  'LBL_CREATE_OPPORTUNITY' => 'Luo myyntimahdollisuus',
  'LBL_CREATE_RELATED' => 'Luo liittyvä {{{this}}}',
  'LBL_CREATE_RELATED_RECORD' => 'Luo liittyvä tietue',
  'LBL_CREATE_TASK' => 'Luo tehtävä',
  'LBL_CREATING_NEW_PAGE' => 'Luodaan uutta sivua ...',
  'LBL_CURRENCIES' => 'Valuutat',
  'LBL_CURRENCY' => 'Valuutta:',
  'LBL_CURRENCY_ID' => 'Valuutta-ID',
  'LBL_CURRENCY_NAME' => 'Valuutan nimi',
  'LBL_CURRENCY_RATE' => 'Valuuttakurssi',
  'LBL_CURRENCY_SYMBOL' => 'Valuuttasymboli',
  'LBL_CURRENT_PASSWORD' => 'Nykyinen salasana',
  'LBL_CURRENT_TIMEPERIOD' => 'Nykyinen ajankajso',
  'LBL_CURRENT_USER_FILTER' => 'Vain omat tiedot:',
  'LBL_DASHBOARD_BWC' => 'Minun legacy-työpöytä',
  'LBL_DASHBOARD_NO_RECORDS' => 'Ei tallennettuja työpöytiä',
  'LBL_DASHBOARD_TOGGLE' => 'Avaa tai sulje työpöytä',
  'LBL_DASHLET' => 'Dashlet',
  'LBL_DASHLET_ATTACHMENTS_DESCRIPTION' => 'Liitteet ja muistiinpanot, jotka kuuluvat tietueeseen',
  'LBL_DASHLET_ATTACHMENTS_NAME' => 'Liitteet & muistiinpanot',
  'LBL_DASHLET_CASESSUMMARY_CLOSE_CASES' => 'Suljetut palvelupyynnöt',
  'LBL_DASHLET_CASESSUMMARY_OPEN_CASES' => 'Avoimet palvelupyynnöt',
  'LBL_DASHLET_CASESSUMMARY_SUMMARY' => 'Yhteenveto',
  'LBL_DASHLET_CASES_SUMMARY_NAME' => 'Case Summary',
  'LBL_DASHLET_CLOSE' => 'Sulje',
  'LBL_DASHLET_COMPANY_INFO' => 'D&B: tuo ja rikasta',
  'LBL_DASHLET_COMPANY_INFO_DESC' => 'Rikasta olemassa olevaa asiakastietuetta D&B-datalla. Vaatii D&B-tilauksen.',
  'LBL_DASHLET_COMPANY_INFO_LONG_DESC' => 'Pidä asiakastietosi ajan tasalla D&B:n maahantuo-ja-rikasta -ominaisuudella.',
  'LBL_DASHLET_CONFIGURE' => 'Konfiguroi',
  'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automaattinen päivitys',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Näytä rivit',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Suodattimet',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Yleinen',
  'LBL_DASHLET_CONFIGURE_INTELLIGENT' => 'Linkitä (relate) tähän tietueeseen',
  'LBL_DASHLET_CONFIGURE_LINKED' => 'Linkitetty kenttä',
  'LBL_DASHLET_CONFIGURE_MY_FAVORITES_ONLY' => 'Vain suosikit',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Vain omat nimikkeet',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Otsikko',
  'LBL_DASHLET_CONFIG_EDIT_LABEL' => 'Muokkaa',
  'LBL_DASHLET_COUNTRY_CHART_DESCRIPTION' => 'Näytä kartta, jossa myyntikaaviot maattain.',
  'LBL_DASHLET_COUNTRY_CHART_NAME' => 'Myynnit maattain',
  'LBL_DASHLET_DROP_HERE' => 'Pudota tähän',
  'LBL_DASHLET_FORECASTS_CHART_DESC' => 'Näyttää ennusteen palkkikaavion valitulle ajanjaksolle',
  'LBL_DASHLET_FORECASTS_CHART_NAME' => 'Ennusteen palkkikaavio',
  'LBL_DASHLET_FORECASTS_DATASET' => 'Dataset',
  'LBL_DASHLET_FORECASTS_DETAILS' => 'Ennusteen yksityiskohdat',
  'LBL_DASHLET_FORECASTS_DETAILS_DESC' => 'Näyttää nykyisen ennusteen yksityiskohdat.',
  'LBL_DASHLET_FORECASTS_FOR_CHART_NAME' => 'Ennuste seuraavalle:',
  'LBL_DASHLET_FORECASTS_GROUPBY' => 'Ryhmitä',
  'LBL_DASHLET_FORECAST_NAME' => 'Ennusteessa',
  'LBL_DASHLET_FORECAST_PARETO_CHART_NAME' => 'Ennusteen Pareto-kaavio',
  'LBL_DASHLET_ITERACTIONS_NAME' => 'Interaktiot',
  'LBL_DASHLET_LISTVIEW_DESCRIPTION' => 'Listaa tietyn moduulin tietueet määrittelemiesi kriteerien mukaan.',
  'LBL_DASHLET_LISTVIEW_NAME' => 'Listanäkymä',
  'LBL_DASHLET_MAXIMIZE' => 'Suurenna',
  'LBL_DASHLET_MAXIMIZE_ALL' => 'Suurenna kaikki',
  'LBL_DASHLET_MINIMIZE' => 'Pienennä',
  'LBL_DASHLET_MINIMIZE_ALL' => 'Pienennä kaikki',
  'LBL_DASHLET_MODULE_UNAVAILABLE' => 'Tietoja ei saatavilla. Sinulla ei ole oikeuksia päästä tähän moduuliin. Päivitä tai poista tämä dashlet.',
  'LBL_DASHLET_MOVE' => 'Siirrä',
  'LBL_DASHLET_NEWS_DESCRIPTION' => 'Google News -syöte liittyvälle accountille',
  'LBL_DASHLET_NEWS_FEED_NAME' => 'Uutissyöte',
  'LBL_DASHLET_NEWS_NAME' => 'Uutiset',
  'LBL_DASHLET_NO_RECORDS' => 'Tietueita ei löytynyt.',
  'LBL_DASHLET_OPPORTUNITY_DESCRIPTION' => 'Myyntimahdollisuusmittarit liittyvälle accountille',
  'LBL_DASHLET_OPPORTUNITY_NAME' => 'Myyntimahdollisusmittarit',
  'LBL_DASHLET_PIPLINE_NAME' => 'Suppilo',
  'LBL_DASHLET_RECENT_TWEETS_SUGARCRM_NAME' => 'Uusimmat twiitit - @{{twitter}}',
  'LBL_DASHLET_REFRESH' => 'Päivitä',
  'LBL_DASHLET_REFRESH_LABEL' => 'Päivitä',
  'LBL_DASHLET_REMOVE_LABEL' => 'Poista',
  'LBL_DASHLET_SAVED_REPORTS_CHART' => 'Tallennettujen raporttien kaavion dashlet',
  'LBL_DASHLET_SAVED_REPORTS_CHART_DESC' => 'Näyttää minkä tahansa kaavion tallennetusta raportista.',
  'LBL_DASHLET_TOGGLE' => 'Vaihda työpöydän näkyvyyttä',
  'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => '10 parasta myynnin tuoteriviä',
  'LBL_DATA_VIEW' => 'Tietonäkymä',
  'LBL_DATE' => 'Päivämäärä',
  'LBL_DATE_ENTERED' => 'Luontipäivä',
  'LBL_DATE_LAST_ACTION' => 'Viimeisen toiminnon päivämäärä',
  'LBL_DATE_MODIFIED' => 'Muokattu viimeksi',
  'LBL_DATE_START' => 'Aloituspäivä',
  'LBL_DB_ROUND_TRIPS' => 'Tietokanta-roundtrippejä',
  'LBL_DEFAULT_DASHBOARD_TITLE' => 'Työpöytä',
  'LBL_DEFAULT_HELP_DASHBOARD_TITLE' => 'Työpöydän ohje',
  'LBL_DEFAULT_HELP_DASHLET_DESC' => 'Ohje-dashlet tarjoaa moduuli- ja näkymäkohtaisia ohjeita.',
  'LBL_DEFAULT_HELP_DASHLET_TITLE' => 'Dashlet-ohje',
  'LBL_DEFAULT_LINK_TEXT' => 'Oletuslinkin teksti',
  'LBL_DELETE' => 'Poista',
  'LBL_DELETED' => 'Poistettu',
  'LBL_DELETE_BUTTON' => 'Poista',
  'LBL_DELETE_BUTTON_KEY' => 'D',
  'LBL_DELETE_BUTTON_LABEL' => 'Poista',
  'LBL_DELETE_BUTTON_TITLE' => 'Poista',
  'LBL_DELETE_FILTER_CONFIRMATION' => 'Tämä suodatin poistetaan kaikista näkymistä. Tämä saattaa sisältää dashletien tiedonkonfigurointia. Poistetaanko suodatin silti?',
  'LBL_DELETE_INLINE' => 'Poista',
  'LBL_DELETE_PAGE' => 'Poista sivu',
  'LBL_DELETE_PAGE_CONFIRM' => 'Haluatko poistaa sivun?',
  'LBL_DELETING' => 'Poistetaan...',
  'LBL_DESCRIPTION' => 'Kuvaus',
  'LBL_DETAILVIEW' => 'Kaikki tiedot -näkymä',
  'LBL_DETAILVIEW_NO_RECORDS' => 'Tätä tietuetta ei voitu renderöitä nyt.',
  'LBL_DIRECT_REPORTS' => 'Raportoi henkilölle',
  'LBL_DISPLAY_COLUMNS' => 'Näytä sarakkeet',
  'LBL_DISPLAY_LOG' => 'Näytä loki',
  'LBL_DNB_ACC_CRT' => 'D&B tilinluonti',
  'LBL_DNB_ACC_CRT_DESC' => 'Luo tili käyttäen D&B:tä. Vaatii D&B-tilauksen.',
  'LBL_DNB_ACT_OPER' => 'Aktiviteetit ja operaatiot',
  'LBL_DNB_ACT_OPER_DESC' => 'Tallentaa kuvauksen yrityksen toiminnasta, kuten markkinatietoa, kuten asiakkaiden määrä, agenssitiedot, ja maa(h/st)a(ntuonti/vienti)tiedot',
  'LBL_DNB_ADDRESS' => 'Osoite',
  'LBL_DNB_ADDRESS_TENURE_DETAILS' => 'Osoitteen hallussapidon yksityiskohdat',
  'LBL_DNB_ADMIN_CONFIG' => 'Konfiguroi D&B-konnektori',
  'LBL_DNB_AGENT_IND' => 'Agentti-indikaattori',
  'LBL_DNB_AGENT_INDICATOR' => 'Agentti-indikaattori',
  'LBL_DNB_AGENT_IND_DESC' => 'Kun tosi (asetettu arvoon 1), kertoo, että subjekti toimii toisen organisaation tuotteita tai palveluita mainostavana agenttina; esimerkiksi myyntiagentti, hankinta-agentti',
  'LBL_DNB_AIRPRT_DISADV_ENT' => 'Airport Concession Disadvantaged Business Enterprise -indikaattori',
  'LBL_DNB_AIRPRT_DISADV_ENT_DESC' => 'Arvo TRUE indikoi, että yritys toimii toimiluvan haltijana yhdessä valtion (eli USAn) lentokentistä, ja tavoittaa omistusoikeuden kelpoisuusvaatimukset, niin kuin on määritelty säännöksessä ‘49 CFR Part 23’.',
  'LBL_DNB_ALASNAT_IND' => 'Alaskan Native -indikaattori',
  'LBL_DNB_ALASNAT_IND_DESC' => 'Arvo TRUE indikoi, että heimo on Alaskan Native -yhtiö',
  'LBL_DNB_AND' => 'ja',
  'LBL_DNB_ANNUAL_SALES_US_DOLLAR' => 'Vuosittaiset myynnit',
  'LBL_DNB_API_ERR' => 'D&B rajapintavirhe',
  'LBL_DNB_ASSESMENT' => 'D&B-assesmentti',
  'LBL_DNB_ASSESMENT_DESC' => 'Tallentaa mielenkiintoista tietoa organisaatioista, kuten:<br />- paljonko luottoa antaa organisaatiolle,<br />- maksuvalmiuden arviointi,<br />- täsmällisiä arvioita organisaation käyttäytymisestä ja suorituskyvystä,<br />- ennusteita liiketoiminnallisesta riskistä organisaation kanssa.<br />Ennustepisteet yleensä laskee ja määrittelee D&B, mutta arvioinnin voi myös suorittaa kolmannet osapuolet.',
  'LBL_DNB_ASSESMENT_TYPE_VALUE' => 'Assesmenttityyppiarvo',
  'LBL_DNB_ASSESMENT_VALUE' => 'Assesmenttiarvo',
  'LBL_DNB_ASSESSMENT' => 'Arviointi',
  'LBL_DNB_ASSIGNMENT_METHOD_TEXT' => 'Assignment Method Text',
  'LBL_DNB_ASSOCIATE' => 'Assosiaatti',
  'LBL_DNB_BACK_TO_IMPORT_ENRICH' => 'Takaisin maahantuontiin ja rikastukseen',
  'LBL_DNB_BACK_TO_SRCH' => 'Takaisin D&B hakutuloksiin',
  'LBL_DNB_BAL' => 'D&B Listarakennus',
  'LBL_DNB_BAL_ACCT_HEADER' => 'Asiakkaat',
  'LBL_DNB_BAL_AFTER' => 'jälkeen',
  'LBL_DNB_BAL_ALL_SITE' => 'Kaikki  sijainnit',
  'LBL_DNB_BAL_AREA_CODE' => 'Aluekoodi',
  'LBL_DNB_BAL_ASSETS' => 'Varat',
  'LBL_DNB_BAL_BEFORE' => 'ennen',
  'LBL_DNB_BAL_BIO' => 'Biografia',
  'LBL_DNB_BAL_BOTH' => 'Molemmat',
  'LBL_DNB_BAL_BTW' => 'väliltä',
  'LBL_DNB_BAL_DISTANCE' => 'Etäisyys',
  'LBL_DNB_BAL_DUNS' => 'DUNS',
  'LBL_DNB_BAL_FILING_DATE' => 'Jättöpäivä',
  'LBL_DNB_BAL_FINANCIAL_INFO' => 'Finanssitietoja',
  'LBL_DNB_BAL_GTE' => 'enemmän tai yhtä suuri kuin',
  'LBL_DNB_BAL_HIGH' => 'Korkea',
  'LBL_DNB_BAL_HINT' => 'Valitse kriteerit rakentaaksesi listan',
  'LBL_DNB_BAL_IMPORT_AS' => 'Tuo tyyppinä:',
  'LBL_DNB_BAL_INDUSTRY' => 'Ala',
  'LBL_DNB_BAL_INDUSTRY_WARN' => 'Alakoodin tyypin muuttaminen tyhjentää jo valitut alan kriteerit. Vaihdetaanko silti alakoodin tyyppiä?',
  'LBL_DNB_BAL_IND_CODE_TYPE' => 'Alan koodityyppi',
  'LBL_DNB_BAL_IND_CODE_TYPE_PRI_SEC' => 'Sisällytä ensi/toissijainen',
  'LBL_DNB_BAL_IPO_DATA' => 'Osakeantitiedot',
  'LBL_DNB_BAL_IPO_OFFER_AMT' => 'Osakeannin tarjontamäärä',
  'LBL_DNB_BAL_IPO_PRICE_RANGE' => 'Osakeannin hintaväli',
  'LBL_DNB_BAL_JOBCD_PH' => 'Valitse työfunktio',
  'LBL_DNB_BAL_KM' => 'kilometriä',
  'LBL_DNB_BAL_LIST' => 'Takaisin D&B Listarakennuksen tuloksiin',
  'LBL_DNB_BAL_LOAD' => 'Rakennetaan listaa',
  'LBL_DNB_BAL_LOW' => 'Alhainen',
  'LBL_DNB_BAL_LTE' => 'vähemmäin tai yhtä suuri kuin',
  'LBL_DNB_BAL_MED' => 'Keskisuuri',
  'LBL_DNB_BAL_MILES' => 'mailia',
  'LBL_DNB_BAL_NAICS' => 'NAICS -koodi',
  'LBL_DNB_BAL_NET_INCOME' => 'Nettotulot',
  'LBL_DNB_BAL_NET_INCOME_GROWTH' => 'Nettotulojen kasvu',
  'LBL_DNB_BAL_ORG_ID' => 'Organisaation tunnistenumero',
  'LBL_DNB_BAL_ORG_NAME' => 'Yrityksen nimi',
  'LBL_DNB_BAL_PARAM_ANNL_SALES' => 'Vuosittainen myynti',
  'LBL_DNB_BAL_PARAM_COMP' => 'Yrityksen sijainti',
  'LBL_DNB_BAL_PARAM_COMP_INFORMATION' => 'Yrityksen tiedot',
  'LBL_DNB_BAL_PARAM_COMP_SZ' => 'Yrityksen koko',
  'LBL_DNB_BAL_PARAM_EMP_CNT' => 'Työläisten määrä',
  'LBL_DNB_BAL_PARAM_EMP_GRWT' => 'Työntekijöiden määrän kasvuprosentti',
  'LBL_DNB_BAL_PARAM_EMP_GRWTH' => 'Työläisten määrän kasvuprosentti',
  'LBL_DNB_BAL_PARAM_JOB_FN' => 'Työfunktio',
  'LBL_DNB_BAL_PARAM_KEYWORD' => 'Avainsana',
  'LBL_DNB_BAL_PARAM_LIMIT_ERR' => 'Törmättiin kriteerien maksimimäärään. Poista syötetyt parametrit',
  'LBL_DNB_BAL_PARAM_MKT_CAP' => 'Markkina-arvo',
  'LBL_DNB_BAL_PARAM_MRKT_CAP' => 'Markkina-arvo',
  'LBL_DNB_BAL_PARAM_NUM_EMP' => 'Työntekijöiden määrä',
  'LBL_DNB_BAL_PARAM_PEOPLE' => 'Ihmiset',
  'LBL_DNB_BAL_PARAM_STATES' => 'Osavaltiot',
  'LBL_DNB_BAL_POSTAL_CODE' => 'Postikoodi',
  'LBL_DNB_BAL_PRESCREEN_SCORE' => 'D&B Prescreen -pisteet',
  'LBL_DNB_BAL_PRIMARY_ONLY' => 'Vain ensisijainen',
  'LBL_DNB_BAL_PRIMARY_SECONDARY' => 'Ensi- sekä toissijainen',
  'LBL_DNB_BAL_RADIUS_SRCH' => 'Sädehaku',
  'LBL_DNB_BAL_RSLT' => 'D&B: Listarakennus: esikatselu',
  'LBL_DNB_BAL_SIC' => 'SIC-koodi',
  'LBL_DNB_BAL_SIC_NAICS_EXAMPLE' => 'Esimerkkejä SIC-koodeista: 5734 → Tietokone- ja ohjelmistokaupat, 3711 → Autojen valmistus',
  'LBL_DNB_BAL_SINGLE_SITE' => 'Yksi sijainti',
  'LBL_DNB_BAL_TITLE' => 'Otsikko',
  'LBL_DNB_BAL_TRADING_DATE' => 'Kaupankäynnin päivä',
  'LBL_DNB_BAL_UK_REG_NO' => 'UK Reg. No.',
  'LBL_DNB_BAL_UK_VAT_NO' => 'UK VAT No.',
  'LBL_DNB_BAL_YEAR_OF_FOUNDING' => 'Perustamisvuosi',
  'LBL_DNB_BAL_ZIP' => 'Postinro',
  'LBL_DNB_BASIC_FIN_INF' => 'Perus-finanssitiedot',
  'LBL_DNB_BI_API_ERR' => 'Virhe tuotaessa tietueita',
  'LBL_DNB_BI_DUP_MSG' => 'asiakastietuetta olivat duplikaatteja, eikä niitä lisätty',
  'LBL_DNB_BI_ERR' => 'Yhtään tietuetta ei tuotu',
  'LBL_DNB_BI_LOADING' => 'Tuodaan D&B-asiakastietoja',
  'LBL_DNB_BI_NEW_ACCT' => 'uutta asiakasta.',
  'LBL_DNB_BI_NO_SLCT' => 'Ei valittuja tietueita',
  'LBL_DNB_BI_REC_LIMIT' => 'Enintään 20 tietuetta voidaan valita tuotavaksi',
  'LBL_DNB_BI_YOU_ADD' => 'Lisäsit',
  'LBL_DNB_BONE_ORG_IND' => 'Kuollut organisaatio -indikaattori',
  'LBL_DNB_BONE_ORG_IND_DESC' => 'Kun päällä (asetettu arvoon 1), kertoo, että yrityksestä ei enää kerätä tietoja. Viimeisimmät tiedot haki Hoover&#39;s Editorial Staff ennen liiketoiminnan lakkautusta.',
  'LBL_DNB_CCS' => 'Kaupallinen luottoluokitus',
  'LBL_DNB_CCS_DESC' => 'Tallenne tuoreimmista riskiarvioista, joita tälle organisaatiolle on annettu jollakin päivämäärällä, käyttäen pisteytysmallia joka edesauttaa sen todennäköisyyden ennustamisessa, että organisaatio maksaa laskunsa erittäin myöhässä (yli 90 päivää eräpäivän jälkeen) seuraavan 12 kuukauden aikana.',
  'LBL_DNB_CI_CITY' => 'Kaupunki',
  'LBL_DNB_CI_CTRY' => 'Maa',
  'LBL_DNB_CI_POSTAL_CD' => 'Postinumero',
  'LBL_DNB_CI_SRCH' => 'D&B: yrityshaku',
  'LBL_DNB_CI_SRCH_HINT' => 'Syötä yrityksen nimi hakeaksesi D&B:stä',
  'LBL_DNB_CI_STATE' => 'Osavaltio',
  'LBL_DNB_CI_STREET' => 'Katuosoite',
  'LBL_DNB_CLEAR' => 'Tyhjennä',
  'LBL_DNB_CM_LOADING' => 'Suoritetaan D&B cleanse match...',
  'LBL_DNB_CM_MATCH' => 'Osuma',
  'LBL_DNB_CNTCT_LOADING' => 'Ladataan kontakteja D&B:stä',
  'LBL_DNB_CNTRL_OWN_DATE' => 'Omistusoikeuden kontrollin päiväys',
  'LBL_DNB_CNTRL_OWN_DATE_DESC' => 'Päiväys, jolloin nykyiset omistajat ottivat yrityksen haltuunsa.',
  'LBL_DNB_CNTRL_TYP_TEXT' => 'Kontrollin omistajuuden tyyppi',
  'LBL_DNB_CNTRL_TYP_TEXT_DESC' => 'Teksti, joka määrittää kontrollin omistajuustyypin; esimerkiksi julkisesti omistettu, yksityisesti omistettu, valtion omistama',
  'LBL_DNB_COMPANY_INFO_LOADING' => 'Haetaan yritystietoja D&B:stä...',
  'LBL_DNB_COMPETITORS' => 'D&B: kilpailijat',
  'LBL_DNB_COMPETITORS_DESC' => 'Kilpailijatiedot D&B:stä. Vaatii D&B-tilauksen.',
  'LBL_DNB_COMPETITORS_LIST' => 'Takaisin D&B -kilpailijalistaan',
  'LBL_DNB_COMPETITORS_LOADING' => 'Ladataan kilpailijoita D&B:stä...',
  'LBL_DNB_COMPETITORS_LONG_DESC' => 'Etsi tämän asiakkaan kilpailijoita. Näin voit laajentaa prospektejasi. D&B antaa "top-kilpailija" -määritelmän perustuen yhtiön ja töimiälän analyysiin. Julkiset yritykset mainitsevat julkisissa jutuissaan (korkealla taajuudella) heidän vahvimmat kilpailijansa; tämä tieto otetaan myös huomioon. Tämä vaatii D&B-tilauksen.',
  'LBL_DNB_COMPETITORS_TOP' => 'Suurin kilpailija',
  'LBL_DNB_COMPINFO_LONG_DESC' => 'Effisienttisin tapa saada perusmarkkinointitietoa potentiaalisesta prospektista, kuten yrityksen nimeä, osoitetta, D&B DUNS-numeroa, faksi- ja puhelinnumeroa, ja kaupustelutyyliä. Sisältää yritysintelligenssiä, kuten johtajien nimiä ja titteleitä, finanssitietoja, työläisten määrää, maahantuonti ja maahanvientikoodeja, sivutoimipisteindikaattoreita sunmuuta. Vaatii D&B-tilauksen.',
  'LBL_DNB_COMP_INFO' => 'D&B: yritystieto',
  'LBL_DNB_COMP_INFO_LOAD' => 'Haetaan D&B yritystieto',
  'LBL_DNB_COMP_SUMM' => 'Yrityksen kuvaus',
  'LBL_DNB_COMP_SUMM_DESC' => 'Teksti, joka kertoo pikaisen kertomuksen tästä organisaatiosta.',
  'LBL_DNB_CONFIDENCE' => 'Konfidenssi',
  'LBL_DNB_CONFIG' => 'Ota yhteyttä järjestelmänvalvojaasi, jotta D&B-konnektori voidaan konfiguroida',
  'LBL_DNB_CONNECTOR_ERR' => 'D&B-konnektoria ei ole konfiguroitu. Valita järjestelmänvalvojalle tästä ongelmasta.',
  'LBL_DNB_CONTACT' => 'D&B: kontaktitietoja',
  'LBL_DNB_CONTACT_BIO' => 'Biografia',
  'LBL_DNB_CONTACT_COMP_HIST' => 'Kompensaatiohistoria',
  'LBL_DNB_CONTACT_DESC' => 'Näyttää kontaktit D&B:stä. Vaatii D&B-tilauksen.',
  'LBL_DNB_CONTACT_EMAIL' => 'Sähköposti',
  'LBL_DNB_CONTACT_EMP_PROF' => 'Työntekijäprofiili',
  'LBL_DNB_CONTACT_FNAME' => 'Etunimi',
  'LBL_DNB_CONTACT_FROM' => 'Lähettäjä',
  'LBL_DNB_CONTACT_JOBTITLE' => 'Titteli',
  'LBL_DNB_CONTACT_JOB_HIST' => 'Työhistoria',
  'LBL_DNB_CONTACT_LIST' => 'Takaisin D&B kontaktilistaan',
  'LBL_DNB_CONTACT_LNAME' => 'Sukunimi',
  'LBL_DNB_CONTACT_LOADING' => 'Ladataan kontaktitietoja tietueelle',
  'LBL_DNB_CONTACT_LONG_DESC' => 'D&B-kontaktit antaa pääsyn yli sataan miljoonaan kontaktiin. Etsi etu- ja sukunimen tai työnimikkeen mukaan.',
  'LBL_DNB_CONTACT_NAME' => 'Nimi',
  'LBL_DNB_CONTACT_PHONE' => 'Puhelin',
  'LBL_DNB_CONTACT_RESP' => 'Hallinnallinen vastuu',
  'LBL_DNB_CONTACT_SHOW_MORE' => 'Näytä enemmän D&B kontakteja',
  'LBL_DNB_CONTACT_TO' => 'Vastaanottaja',
  'LBL_DNB_CONTROL_OWNERSHIP_DATE' => 'Omistusoikeuden kontrollin päiväys',
  'LBL_DNB_CONTROL_OWNERSHIP_TYPE_TEXT' => 'Omistusoikeuden kontrollin teksti',
  'LBL_DNB_CON_EMP_CNT' => 'Konsolidoitu työntekijöiden määrä',
  'LBL_DNB_CON_EMP_CNT_DESC' => 'Tallentaa tämänhetkistä tietoa työntekijöistä. Tämä sisältää kaikki työntekijät, jotka suorittavat tehtäviä lakientiteetille (myös työntekijät sivutoimipisteissä), sekä kaikki työntekijät, jotka suorittavat työtehtäviä jokaiselle entiteetin suoralle jälkeläiselle sukupuussa, eli tytäryhtiöille.',
  'LBL_DNB_COUNTRY' => 'Maa',
  'LBL_DNB_COUNTRY_GROUP_NAME' => 'Maan alueen nimi',
  'LBL_DNB_COUNTRY_OFFICIAL_NAME' => 'Maan virallinen nimi',
  'LBL_DNB_CURRENCY_ISO_ALPHA_CODE' => 'Valuutan ISO-alfakoodi',
  'LBL_DNB_CURRENT_PRINCIPAL_FULL_NAME' => 'Tämänhetkinen pääasiallinen koko nimi',
  'LBL_DNB_CURRENT_PRINCIPAL_IDENTIFICATION_NUMBER' => 'Tämänhetkinen pääasiallinen tunnistuskoodi',
  'LBL_DNB_CURRENT_PRINCIPAL_JOB_TITLE' => 'Tämänhetkinen pääasiallinen titteli',
  'LBL_DNB_DATA_ERR' => 'D&B-tietoja ei ole saatavilla',
  'LBL_DNB_DATA_OVERRIDE_MULTIPLE_FIELDS' => 'Ylikirjoitetaanko varmasti kentät {{fields}} ja muut kentät?',
  'LBL_DNB_DATA_OVERRIDE_SINGLE_FIELD' => 'Ylikirjoitetaanko varmasti {{fieldName}} arvolla {{value}}?',
  'LBL_DNB_DATA_OVERRIDE_TWO_FIELDS' => 'Ylikirjoitetaanko varmasti kentät {{fields}}?',
  'LBL_DNB_DISAB_IND' => 'Vammaisuusindikaattori',
  'LBL_DNB_DISAB_IND_DESC' => 'Arvo TRUE indikoi, että tämä organisaatio on sertifioitu yrityksenä, josta omistaa yli puolet, ja jonka hallinnolliset ja päivittäiset tehtävät suorittaa, yksi tai useampi henkilö, jolla on fyysinen tai psyykkinen sairaus, joka estää henkilöä suorittamasta kaikkia tavallisia fyysisiä tai psyykkisiä toimintoja.',
  'LBL_DNB_DISAB_VET_ENT' => 'Vammautunut veteraani -yritys -indikaattori',
  'LBL_DNB_DISAB_VET_ENT_DESC' => 'Arvo TRUE indikoi, että yritys on Kalifornian osavaltion tunnustama, tarkoittaen Yhdysvaltain maa-, meri- tai ilmavoimien sotaveteraania, jolla on palvelukseen liittyvä vamma vähintään 10% tai enemmän ja joka on Kalifornian asukas; missä vähintään 51% omistaa vammautunut veteraani tai veteraanit joka hoitaa päivittäisiä liikeasioita. Kotitoimisto ei voi olla ulkomaalaisen korporaation, firman tai muun ulkomaalaisen yrityksen sivutoimipiste tai tytäryhtiö.',
  'LBL_DNB_DISADV_ENT' => 'Heikossa asemassa oleva yritys -indikaattori',
  'LBL_DNB_DISADV_ENT_DESC' => 'Arvo TRUE indikoi, että yritys on sertifioitu kaikki valtiolliset vaatimukset ja standardit täyttäväksi. Sertifioinnin on suorittanut valtiollinen, osavaltiollinen, tai paikallinen virasto. Standardien täyttäminen tarkoittaa, että yritys on tukikelpoitettu, mutta saattaa sisältää naisia, vähemmistöjä, vammaisia, tai muulla tavalla heikkoasemaisia yrityksiä seuraten taloudellisia heikkouksia liittyen koulutukseen, työllistymiseen, asumiseen, yrityksen sijaintiin tai sosiaaliseen heikko-osaisuuteen sekä yrityskoulutuksen puute.',
  'LBL_DNB_DISADV_VET_ENT' => 'Heikossa asemassa oleva sotaveteraaniyritys -indikaattori',
  'LBL_DNB_DISADV_VET_ENT_DESC' => 'Arvo TRUE indikoi, että yritys on pieni yrityskonserni, joka on vähintään 51% veteraanien omistama ja hallinnoima.',
  'LBL_DNB_DNB_CODE_VALUE' => 'DNB-koodiarvo',
  'LBL_DNB_DUNS' => 'DUNS',
  'LBL_DNB_DUNSSELF_IND' => 'DUNS Self Request -indikaattori',
  'LBL_DNB_DUNSSELF_IND_DESC' => 'Arvo TRUE indikoi, että subjektin DUNS-numero luotiin subjektin pyynnöstä',
  'LBL_DNB_DUPLICATE' => 'Kahdenna',
  'LBL_DNB_EIGHTA_CRT' => 'Eight A Certified -indikaattori',
  'LBL_DNB_EIGHTA_CRT_DESC' => 'Arvo TRUE indikoi, että tämä organisaatio on Yhdysvaltain Small Business Administrationin sertifioima 8(a) Business Development Program:in vastaanottaja. 8(a) Business Development Program on yrityksenkehitysohjelma, jolla autetaan pieniä, heikossa asemassa olevia yrityksiä kilpailussa amerikan talousmaailmassa, ja päästetään liittovaltion hankintojen markkinoille',
  'LBL_DNB_EMPLOYEE_QUANTITY_GROWTH' => 'Työntekijöiden määrän kasvu',
  'LBL_DNB_EMPTY_PARAM' => 'D&B-duplicate-check -rajapintaan syötettiin tyhjä parametri.',
  'LBL_DNB_EMP_DET' => 'Seniorityöntekijöiden tiedot',
  'LBL_DNB_EMP_DET_DESC' => 'Tiedot pääjohtajista (esimerkiksi presidentin, varapresidentin, tirehtöörien) ja managereista, jotka ovat vastuussa yrityksen liikestrategiasta, päätöksenteosta, ja päivittäisestä operaatioista. Tiedot sisältävät johtajien nimet, osoitteet ja tunnistenumerot.<br /><br />Vaikka useimmissa maissa yrityksen johtajat ovat henkilöitä, joissakin maissa on sallittua johtajan olla toinen yritys. Tämä poissulkee osakkaat ja vastaavat omistajat, jotka eivät ole vastuussa organisaation hallinnosta, mutta sisältää tiedot haltijoista ja yhtiökumppaneista, jotka ovat sekä yrityksen omistajia että johtajia.',
  'LBL_DNB_EMP_INF' => 'Työntekijän tiedot',
  'LBL_DNB_EMP_INF_DESC' => 'Organisaation työntekijätietoja, kuten työntekijöiden määrä ja tietoja päämanageroinnista',
  'LBL_DNB_ERROR_CURL_CONNECTION_FAIL' => 'Hostiin tai proxyyn yhdistäminen epäonnistui. Tarkista proxyasetukset.',
  'LBL_DNB_ERROR_CURL_NETWORK_FAIL' => 'Ongelma vastaanottaessa verkkodataa.',
  'LBL_DNB_ERROR_CURL_RESOLVE_HOST' => 'Ei osattu resolvata hostia. Annettua remote hostia ei resolvattu.',
  'LBL_DNB_ERROR_CURL_RESOLVE_PROXY' => 'ei osattu resolvata proxya. annettu proxyhostia ei osattu resolvata. tarkista proxyasetukset.',
  'LBL_DNB_ETHN' => 'Omistajan etnisyys',
  'LBL_DNB_ETHNICITY_TYPE_TEXT' => 'Etnisyystyyppiteksti',
  'LBL_DNB_ETHN_DESC' => 'Ainutlaatuisesti määrittelee tämän organisaation etnisen klassifioinnin, perustuien organisaation pääomistajien rotu-, kansalais-, heimo- tai kulttuuriryhmiin; esimerkiksi aasialainen, latinalaisamerikkalainen, afrikkalaisamerikkalainen.',
  'LBL_DNB_EXPORT_DETAILS_INDICATOR' => 'Yksityiskohtien viennin indikaattori',
  'LBL_DNB_EXP_IND' => 'Maastavienti-indikaattori',
  'LBL_DNB_EXP_IND_DESC' => 'Kun tosi (asetettu arvoon 1), kertoo, että yritys vie maasta tavaraa muihin maihin.',
  'LBL_DNB_FACSIMILE_NUMBER' => 'Faksinumeronumero',
  'LBL_DNB_FAMILY_TREE' => 'D&B: sukupuu',
  'LBL_DNB_FAMILY_TREE_BACK' => 'Takaisin D&B-sukupuuhun.',
  'LBL_DNB_FAMILY_TREE_DESC' => 'Sukupuu D&B:ltä. Vaatii D&B-tilauksen.',
  'LBL_DNB_FAMILY_TREE_LOADING' => 'Ladataan sukupuu D&B:stä.',
  'LBL_DNB_FAMILY_TREE_MEMBER_ROLE' => 'Sukupuujäsenyysroolin teksti',
  'LBL_DNB_FAMILY_TREE_MEMBER_ROLE_TEXT' => 'Sukupuujäsenyysroolin teksti',
  'LBL_DNB_FAX' => 'Fax',
  'LBL_DNB_FAX_DESC' => 'Organisaation faksinumero',
  'LBL_DNB_FEM_ENT' => 'Naisyritys -indikaattori',
  'LBL_DNB_FEM_ENT_DESC' => 'Arvo TRUE indikoi, että yritys on sertifioitu kaikki valtiolliset vaatimukset ja standardit täyttäväksi. Sertifioinnin on suorittanut valtiollinen, osavaltiollinen, tai paikallinen virasto.',
  'LBL_DNB_FEM_IND' => 'Naisen omistama -indikaattori',
  'LBL_DNB_FEM_IND_DESC' => 'Arvo TRUE indikoi, että tämä organisaatio on sertifioitu yrityksenä, jonka omistaa yli 50 %:sti, ja jota hallitsee ja päivittäisoperaatioita kontrolloi, naispuolinen henkilö.',
  'LBL_DNB_FILLING_ORGANISATION_NAME' => 'Täyttävän organisaation nimi',
  'LBL_DNB_FINANCIAL' => 'D&B: Finanssitiedot',
  'LBL_DNB_FINANCIALS' => 'Finanssiaalit',
  'LBL_DNB_FINANCIAL_DESC' => 'Finanssitietoja D&B:ltä. Vaatii D&B-tilauksen.',
  'LBL_DNB_FINANCIAL_DESCRIPTION' => 'Taloudellinen kuvaus',
  'LBL_DNB_FINANCIAL_LOADING' => 'Ladataan finanssitietoja D&B:stä.',
  'LBL_DNB_FINANCIAL_LONG_DESC' => 'Arvioi yritysken taloudellinen hyvinvointi sellaisilla tiedoilla kuten: myyntivolyymi, nettoarvo, voimavarat ja vastuut. Vaatii D&B-tilauksen.',
  'LBL_DNB_FINANCIAL_PERIOD' => 'Finanssiperiodi',
  'LBL_DNB_FINANCIAL_RATIO' => 'Taloudellinen suhde',
  'LBL_DNB_FIN_COMP_TYPE' => 'Yhtiötyyppi',
  'LBL_DNB_FIN_STCK_EXCH' => 'Osakemarkkinat',
  'LBL_DNB_FIN_STCK_SYM' => 'Osakesymboli',
  'LBL_DNB_FIN_STMT' => 'Vuosittaiset tuloraportit',
  'LBL_DNB_FOUNDATION_YEAR' => 'Perustusvuosi',
  'LBL_DNB_FRAN_TYP_TEXT' => 'Franchise-operaation tyyppi',
  'LBL_DNB_FRAN_TYP_TEXT_DESC' => 'Teksti, joka kertoo, operoiko yritys franchise-oikeuksia vai operoiko niitä franchiset; esimerkiksi "franchise", "franchisenantaja"',
  'LBL_DNB_FROM' => '→',
  'LBL_DNB_GEOGRAPHICAL_NAME' => 'Maantieteellinen tarkkuusteksti',
  'LBL_DNB_HIGH_CONF' => 'Korkea luottamus',
  'LBL_DNB_HISTORY_RATING_TEXT' => 'Historialuokitus',
  'LBL_DNB_HIST_RAT' => 'Historialuokitus',
  'LBL_DNB_HIST_RAT_DESC' => 'Teksti, joka määrittää, onko D&B:llä tietoja, jotka kertovat organisaatiosta negatiivisessa valossa; esimerkiksi kirkas, epätäysi, managerointi, yritys.',
  'LBL_DNB_HUB_CRT' => 'Hub Zone Certified -indikaattori',
  'LBL_DNB_HUB_CRT_DESC' => 'Tää on niin jenkkikohtainen että oon jättäny kääntämättä: Value TRUE indicates that this organization is certified by the US Small Business Administration as being a recipient of the HUB Zone program. A small business must meet all of the following criteria to qualify for the HUB Zone program: It must be located in a &#39;historically underutilized business zone&#39;. It must be owned and controlled by one or more U.S Citizens. Greater than 35% of its employees must reside in a HUBZone. A HUBZone (Historically Underutilized Business Zone) is an area that is located in one or more of the following - a) A qualified census tract (as defined in section 42(d)(5)(C)(i)(I) of the Internal Revenue Code of 1986). b) A qualified &#39;non-metropolitan county&#39; (as defined in section 143(k)(2)(B) of the Internal Revenue Code of 1986) with a median household income of less than 80% of the State median household income or with an unemployment rate of not less than 140% of the statewide average, based on U.S. Department of Labor recent data. c) Lands within the boundaries of federally recognized Indian reservations',
  'LBL_DNB_IMPORT' => 'Tuonti',
  'LBL_DNB_IMPORT_DETAILS_' => 'Tuo yksityiskohdat',
  'LBL_DNB_IMPORT_DETAILS_INDICATOR' => 'Tuontiyksityiskohtien indikaattori',
  'LBL_DNB_IMP_IND' => 'Maahantuonti-indikaattori',
  'LBL_DNB_IMP_IND_DESC' => 'Kun tosi (asetettu arvoon 1), kertoo, että yritys tuo maahan tavaraa muista maista.',
  'LBL_DNB_IN' => 'in',
  'LBL_DNB_INCORPORATION_YEAR' => 'Liitosvuosi',
  'LBL_DNB_INDUSTRY_CODE' => 'Teollisuuskoodi',
  'LBL_DNB_INDUSTRY_CODE_DESCRIPTION' => 'Teollisuuskoodin kuvaus',
  'LBL_DNB_INDUSTRY_CODE_DISPLAY_SEQUENCE' => 'Teollisuuskoodin näyttösekvenssi',
  'LBL_DNB_INDUSTRY_INFO' => 'D&B: Toimialatietoja',
  'LBL_DNB_INDUSTRY_INFO_DESC' => 'Toimialatietoja D&B:ltä. Vaatii D&B-tilauksen.',
  'LBL_DNB_INDUSTRY_INFO_LONG_DESC' => 'Pysy ajan tasalla avaintrendeistä ja mahdollisuuksista 900 teollisuussegmentin sisällä. Jokainen teollisuusprofiili sisältää analyysiä, statistiikkaa, ja ennusteita, joka (ehkä) auttaa prospektien lähestymisessä, asiakkaiden valmentamisessa, ja asiakassuhteiden parantamisessa.',
  'LBL_DNB_IND_CD' => 'Alakoodi',
  'LBL_DNB_IND_CD_DESC' => 'Alfanumeerinen arvo, joka tunnistaa liiketoiminnan perustuen typeTextissä olevaan skeemaan. Esimerkiksi, ‘1611’ tarkoittaa tienrakennusteollisuutta yhdysvaltalaisessa SIC-koodijärjestelmässä. Huomioi: koodit yleensä määrittää ulkoinen organisaatio, kuten yhdysvaltojen Office of Management and Budget (OMB), mutta D&B saattaa luoda lisäyksiä tarkentaakseen toimintoja. Näin on sattunut SIC 2+2 -koodissa (viimeiset 4 numeroa 8-numeroisesta SIC-koodista).',
  'LBL_DNB_IND_CD_HED' => 'Alatietoja',
  'LBL_DNB_IND_CD_HED_DESC' => 'Tallentaa liiketoiminnat, joissa organisaatio on aktiivisesti mukana, käyttäen standardoitua koodausmenetelmää, kuten eurooppalaista NACEa tai yhdysvaltalaista SIC-koodia. Liiketoimintojen esimerkkejä on: kaupallinen tulostus, lakipalvelut, huumekauppa, peltilevytöiden valmistaja.',
  'LBL_DNB_IND_EMP_CNT' => 'Yksilöity työntekiijöiden määrä',
  'LBL_DNB_IND_EMP_CNT_DESC' => 'Tallentaa entiteettikohtaista työntekijätietoa, jos D&B on luokitellut organisaation yritykseksi',
  'LBL_DNB_IND_INF_LOAD' => 'Ladataan toimialatietoja D&B:ltä.',
  'LBL_DNB_INF_INF_OVERVIEW' => 'Yleiskatsaus',
  'LBL_DNB_INQ_CNT' => 'Kyselyitä yhteensä',
  'LBL_DNB_INQ_CNT_DESC' => 'Uniikkien tilaajakyselyjen määrä rekisteröity subjektia vastaan edellisen 12 kuukauden aikana',
  'LBL_DNB_INTERNATIONAL_DIALLING_CODE' => 'Kansainvälinen suuntanumero',
  'LBL_DNB_INT_DIALLING_CODE' => 'Kansainvälinen suuntanumero',
  'LBL_DNB_INVALID_MODULE_NAME' => 'D&B-duplicate-check -rajapintaan syötettiin kelpaamaton moduulin nimi.',
  'LBL_DNB_IPO_DATE' => 'Osakeannin päiväys',
  'LBL_DNB_JOB_TITLE_TEXT' => 'Titteli',
  'LBL_DNB_KEYWORD_SEARCH_HINT' => 'Klikkaa tästä hakeaksesi pelkästään yrityksen nimen perusteella',
  'LBL_DNB_LAST_UPDATE' => 'Viimeisin päivitys',
  'LBL_DNB_LAST_UPDATE_DATE' => 'Viimeisimmän päivityksen päiväys',
  'LBL_DNB_LAST_UPD_DATE' => 'Edellisen päivityksen päiväys',
  'LBL_DNB_LAST_UPD_DATE_DESC' => 'Päiväys, jolloin subjektin tietue päivitettiin viimeksi D&B-järjestelmissä',
  'LBL_DNB_LAT' => 'Leveysaste',
  'LBL_DNB_LATITUDE_MEASUREMENT' => 'Pituusastemittaus',
  'LBL_DNB_LAT_DESC' => 'Leveysaste',
  'LBL_DNB_LINE_OF_BUSINESS' => 'Toimintalinja',
  'LBL_DNB_LINE_OF_BUSINESS_DESCRIPTION' => 'Toimintalinjan kuvaus',
  'LBL_DNB_LITE_COMPANY_INFO' => 'D&B: Yritystiedot - kevyt',
  'LBL_DNB_LITE_COMPANY_INFO_DESC' => 'Kevyempää yritystietoa D&B:ltä. Vaatii D&B-tilauksen.',
  'LBL_DNB_LITE_COMPANY_INFO_LOADING' => 'Ladataan kevyt yritystieto D&B:stä...',
  'LBL_DNB_LOB' => 'Toimintalinja',
  'LBL_DNB_LOB_DESC' => 'Tallentaa kuvauksen yrityksen toiminnasta',
  'LBL_DNB_LOC' => 'Sijainti',
  'LBL_DNB_LOCATION' => 'Sijainti',
  'LBL_DNB_LOCATION_TYPE' => 'Paikan tyyppi',
  'LBL_DNB_LOCATION_TYPE_DESC' => 'Teksti, joka kuvailee, millaisessa roolissa subjekti on omistajuuden sukupuussa; esimerkiksi haara, divisio, vanhempi, päämaja, tytäryhtiö, maailmanlaajuinen ultimaatti, kotimainen ultimaatti.',
  'LBL_DNB_LOC_DESC' => 'Tallentaa subjektin osoitetiedot. ‘Osoite’ määritellään sellaiseksi tekstiksi, joka kertoo Maapallolla olevasta paikasta, mistä subjektin voi fyysisesti löytää, tai mihin voidaan lähettää kommunikaatiotarkoituksella paperista tai muusta materiaalista tehtyjä ns. ‘kirjeitä’.',
  'LBL_DNB_LONG' => 'Pituusaste',
  'LBL_DNB_LONGITUDE_MEASUREMENT' => 'Leveysastemittaus',
  'LBL_DNB_LONG_DESC' => 'Pituusaste',
  'LBL_DNB_LOW_CONF' => 'Matala luottamus',
  'LBL_DNB_LS_IND' => 'Liikaa työvoimaa -indikaattori',
  'LBL_DNB_LS_IND_DESC' => 'Arvo TRUE indikoi, että tämä organisaatio on sertifioitu yritykseksi, joka operoi ylimääräalueella. Ylimäääräalue on yhdysvaltalaisen Department of Labor:in määrittelemä maantieteellinen alue, johon on keskittynyt työttömyyttä tai vähäistä työllistymistä, tai alue jossa on ylimääräistä työvoimaa.',
  'LBL_DNB_MAIL_CITY' => 'Postituksen kaupunki',
  'LBL_DNB_MAIL_CTRY_CD' => 'Postituksen maakoodi',
  'LBL_DNB_MAIL_STATE_ABBR' => 'Postituksen lääni (lyh.)',
  'LBL_DNB_MAIL_STREET' => 'Postitusosoitten katuosoite',
  'LBL_DNB_MAIL_ZIP' => 'Postituksen postikoodi',
  'LBL_DNB_MARKETABILITY_INDICATOR' => 'Markkinoitavuusindikaattori',
  'LBL_DNB_MARKET_IND' => 'Markkinoitavuusindikaattori',
  'LBL_DNB_MARKET_IND_DESC' => 'Kun tosi (arvona siis 1), indikoi, että tietue täyttää D&B:n markkinoitavuus­vaatimukset',
  'LBL_DNB_MATCH_GRADE' => 'Match Grade',
  'LBL_DNB_MEASUREMENT_RELIABILITY_TEXT' => 'Mittauksen luotettavuusteksti',
  'LBL_DNB_MEASUREMENT_UNIT_TEXT' => 'Mittauksen yksikköteksti',
  'LBL_DNB_MED_CONF' => 'Keskitason luottamus',
  'LBL_DNB_METROPOLITAN_STAT_CODE' => 'Metropolitan Statistical Area US Census Code',
  'LBL_DNB_MILLION' => 'M',
  'LBL_DNB_MINORITY_OWNER_INDICATOR' => 'Vähemmistön omistama',
  'LBL_DNB_MIN_COLL' => 'Vähemmistölukio -indikaattori',
  'LBL_DNB_MIN_COLL_DESC' => 'Arvo TRUE indikoi, että tämä organisaatio on yliopisto (college), jonka opiskelijoista enemmistö on vähemmistöetnisiä.',
  'LBL_DNB_MIN_ENT' => 'Vähemmistöyritys -indikaattori',
  'LBL_DNB_MIN_ENT_DESC' => 'Arvo TRUE indikoi, että tämä organisaatio on pieni yritys, joka on sertifioitu kaikki valtiolliset standardit ja vaatimukset täyttäväksi. Sertifikaation on suorittanut valtiollinen, osavaltiollinen, tai paikallinen virasto tai organisaatio. Sertifiointi tapahtui hakemuksen tai paikallakäyntiprosessin kautta.',
  'LBL_DNB_MIN_IND' => 'Vähemmistöjäsenen omistama -indikaattori',
  'LBL_DNB_MIN_IND_DESC' => 'Arvo TRUE indikoi, että tämä organisaatio on sertifioitu yrityksenä, josta omistaa yli puolet, ja jonka hallinnolliset ja päivittäiset tehtävät suorittaa, yksi tai useampi vähemmistöön kuuluva henkilö.',
  'LBL_DNB_MORE_SRCH_RES' => 'Näytä enemmä D&B hakutuloksia',
  'LBL_DNB_NAICS' => 'NAICS',
  'LBL_DNB_NAME' => 'Nimi',
  'LBL_DNB_NEWS' => 'Uutiset',
  'LBL_DNB_NEWS_AND_MEDIA' => 'D&B: Uutiset',
  'LBL_DNB_NEWS_AND_MEDIA_DESC' => 'Hakee uutiset D&B-palveluista. Vaatii D&B-tilauksen.',
  'LBL_DNB_NEWS_AND_MEDIA_LOADING' => 'Ladataan uutisia D&B:stä',
  'LBL_DNB_NEWS_AND_MEDIA_LONG_DESC' => 'Hae täydet tiedot asiakkaastasi ‘D&B News and Social’ -palvelun avulla! Käytä ‘DUNSright’-prosessin voimaa varmistaaksesi, että saat tietosi oikeista tietolähteistä ja sosiaalisista kahvoista. Vaatii D&B-tilauksen.',
  'LBL_DNB_NEWS_AND_MEDIA_MORE' => 'Lue lisää',
  'LBL_DNB_NEWS_FACEBOOK' => 'Facebook',
  'LBL_DNB_NEWS_TWITTER' => 'Twitter',
  'LBL_DNB_NEWS_WIKI' => 'Wikipedia',
  'LBL_DNB_NEWS_YOUTUBE' => 'YouTube',
  'LBL_DNB_NONMARK_REAS_TXT' => '‘Ei markkinoitavissa’ -syyn teksti',
  'LBL_DNB_NONMARK_REAS_TXT_DESC' => 'Teksti, joka kertoo syyn, miksi D&B ei pidä subjektin tietoja markkinoitavina.',
  'LBL_DNB_NON_MARKETABILITY_INDICATOR' => 'Epämarkkinoitavuusindikaattori',
  'LBL_DNB_NOT_CONFIGURED' => 'D&B-konnektoria ei ole konfiguroitu. Konfiguroi konnektori.',
  'LBL_DNB_NO_DATA' => 'Ei tietoja',
  'LBL_DNB_NO_DUNS' => 'Ei yksiĺöivää DUNSia',
  'LBL_DNB_NO_DUNS_FIELD' => 'Huomioi: DUNS-kenttä ei näy tietuenäkymässä. Ota yhteyttä järjestelmänvalvojaasi jotta kenttä saadaan näkyviin.',
  'LBL_DNB_NO_INDUSTRY' => 'Ei linkitettyä toimialakoodia',
  'LBL_DNB_NO_SIC_FIELD' => 'Huomioi: SIC-kenttä ei näy tietuenäkymässä. Ota yhteyttä järjestelmänvalvojaasi jotta kenttä saadaan näkyviin.',
  'LBL_DNB_OPERATING_STATUS_TEXT' => 'Operaatiostatuksen teksti',
  'LBL_DNB_OPERL_STA_TEXT' => 'Toiminnallisuuden tilanne',
  'LBL_DNB_OPERL_STA_TEXT_DESC' => 'Teksti, joka kuvailee tämän organisaation toiminnan tilan (tai kaupallisen tilan); esimerkiksi aktiivinen, konkurssissa, toimimaton.',
  'LBL_DNB_OPER_TEXT' => 'Operaatioteksti',
  'LBL_DNB_OPER_TEXT_DESC' => 'Teksti, joka kuvailee tarkkaa tietoa liittyen yritystoimintaan',
  'LBL_DNB_ORGANISATION_IDENTIFICATION_NUMBER' => 'Organisaation tunnistusnumero',
  'LBL_DNB_ORGANISATION_IDENTIFICATION_START_DATE' => 'Organisaation tunnistuksen aloituspäivä',
  'LBL_DNB_ORGANIZATION_DISPLAY_SEQUENCE' => 'Organisaation näyttösekvenssi',
  'LBL_DNB_ORGANIZATION_FILLING_NAME' => 'Organisaation täyttönimi',
  'LBL_DNB_ORGANIZATION_IDENTIFICATION_NUMBER' => 'Organisaation tunnistenumero',
  'LBL_DNB_ORGANIZATION_NAME' => 'Organisaation nimi',
  'LBL_DNB_ORGANIZATION_START_DATE' => 'Organisaation aloituspäiväys',
  'LBL_DNB_ORGS_STRT_YEAR' => 'Organisaation aloitusvuosi',
  'LBL_DNB_ORGS_STRT_YEAR_DESC' => 'Vuosi, jolloin organisaation operaatiot alkoivat',
  'LBL_DNB_ORG_DET' => 'Organisaation yksityiskohdat',
  'LBL_DNB_ORG_DET_DESC' => 'Tallentaa organisaatiosta sellaisia perustietoja, jotka voivat muuttua ajan kuluessa.',
  'LBL_DNB_ORG_ID' => 'Organisaation tunnistenumero',
  'LBL_DNB_ORG_ID_DESC' => 'Ulkoisen osapuolen tai D&B:n antama numero, joka yksilöi ja tunnistaa organisaation. Osapuoli voi olla jonkinlainen rekisteröintiauktoriteetti, valtiollinen osasto tai kaupallinen yritys. Esimerkkinä Y-tunnus.',
  'LBL_DNB_ORG_NAME' => 'Organisaation nimi',
  'LBL_DNB_ORG_NAME_DESC' => 'Ne nimet, jolla organisaatio tunnetaan.',
  'LBL_DNB_OTHER' => 'Muu',
  'LBL_DNB_OTHER_FIELDS' => 'muissa kentissä',
  'LBL_DNB_OUTOFDATE' => 'Vanhentunut',
  'LBL_DNB_OUTOFDATE_MSG' => 'Yritystiedot ovat vanhentuneet',
  'LBL_DNB_OVERRIDE_SUCCESS' => 'D&B tiedontuonti onnistui',
  'LBL_DNB_OVERVIEW' => 'Yleiskatsaus',
  'LBL_DNB_OWNERSHIP_TYPE' => 'Omistustyyppi',
  'LBL_DNB_PAGESZ' => 'Sivun koko',
  'LBL_DNB_PHONE' => 'Puhelin',
  'LBL_DNB_PHONE_DESC' => 'Organisaation puhelinnumero',
  'LBL_DNB_PREMISES_AREA_MEASUREMENT' => 'Toimitilan alueen mittaus',
  'LBL_DNB_PREMIUM' => 'Premium',
  'LBL_DNB_PREMIUM_COMPANY_INFO' => 'D&B: Yritystiedot - premium',
  'LBL_DNB_PREMIUM_COMPANY_INFO_DESC' => 'D&B premium-yritystietojen infokuvaus. Vaatii D&B-tilauksen.',
  'LBL_DNB_PREMIUM_COMPANY_INFO_LOADING' => 'Ladataan premium-yritystietoja D&B:stä...',
  'LBL_DNB_PRIMARY' => 'Ensisijainen',
  'LBL_DNB_PRIMARY_ADDRESS_POSTAL_CODE' => 'Ensisijaisen osoitteen postinumero',
  'LBL_DNB_PRIMARY_TOWN' => 'Ensisijainen kaupunki',
  'LBL_DNB_PRIMARY_TOWN_NAME' => 'Ensisijaisen kaupungin nimi',
  'LBL_DNB_PRIM_CEN_CD' => 'Väestönlaskentakoodi',
  'LBL_DNB_PRIM_CEN_CD_DESC' => 'Maantieteellinen alue, jonka ytimessä on tiheästi asutettu alue, ja jolla on tiiviit taloudelliset yhteydet ympäristöönsä.',
  'LBL_DNB_PRIM_CITY' => 'Ensisijainen kaupunki/postitoimipaikka',
  'LBL_DNB_PRIM_CITY_DESC' => 'Postiauktoriteetin hyväksymä kaupungin nimi',
  'LBL_DNB_PRIM_COUNTY_NAME' => 'Maan nimi',
  'LBL_DNB_PRIM_COUNTY_NAME_DESC' => 'Kunnan virallinen nimi',
  'LBL_DNB_PRIM_CTRY_CD' => 'Ensisijainen maakoodi',
  'LBL_DNB_PRIM_CTRY_CD_DESC' => 'Kaksikirjaiminen maakoodi, joka on määritelty ISO 3166-1 -standardissa.',
  'LBL_DNB_PRIM_CTRY_GRP' => 'Maaryhmä',
  'LBL_DNB_PRIM_CTRY_GRP_DESC' => 'Maaryhmän tunniste, esimerkiksi ‘Eurooppa’.',
  'LBL_DNB_PRIM_NAME' => 'Nimi',
  'LBL_DNB_PRIM_NAME_DESC' => 'Teksti, joka kertoo tämän organisaation nimen.',
  'LBL_DNB_PRIM_STATE' => 'Ensisijainen lääni',
  'LBL_DNB_PRIM_STATE_ABBR' => 'Ensisijainen lääni (lyh.)',
  'LBL_DNB_PRIM_STATE_ABBR_DESC' => 'Läänin/provinssin/osavaltion/muunlaisen valtion osan lyhennetty nimi.',
  'LBL_DNB_PRIM_STATE_DESC' => 'Läänin/provinssin/osavaltion/muunlaisen valtion osan nimi.',
  'LBL_DNB_PRIM_STREET' => 'Ensisijainen katuosoite',
  'LBL_DNB_PRIM_STREET_DESC' => 'Teksti, joka tallentaa katuosoitteen komponentit, siinä muodossa miten ne näkyisivät osoitelapussa.',
  'LBL_DNB_PRIM_ZIP' => 'Ensisjainen postikoodi',
  'LBL_DNB_PRIM_ZIP_DESC' => 'Maan postiauktoriteetin käyttämä tunniste, jolla viitataan jonkinlaiseen maantieteelliseen alueeseen.',
  'LBL_DNB_PRINCIPAL_IDENTIFICATION_NUMBER' => 'Pääasiallinen tunnistuskoodi',
  'LBL_DNB_RATING' => 'Luokitus',
  'LBL_DNB_REC_MARK_ANALYSIS' => 'Tuore markkina-analyysi',
  'LBL_DNB_REGISTERED_ADDRESS_INDICATOR' => 'Rekisteröity osoite indikaattori',
  'LBL_DNB_REGISTRATION_ISSUER_NAME' => 'Rekisteröinnin antajan nimi',
  'LBL_DNB_REGISTRATION_LOCATION_POSTAL_CODE' => 'Rekisteröidyn alueen postikoodi',
  'LBL_DNB_REG_DET_HED' => 'Rekisteröidyt tiedot',
  'LBL_DNB_REG_DET_HED_DESC' => 'Tallentaa olion perustuslaillisen tilanteen niin kuin maan lakisäädännössä on määritelty. Esimerkiksi toiminimi, osakeyhtiö.| E.g.; Limited Company, Partnership, co-operative Society and the Stock Equity or share structure employed by a business according to the legal form and rules of incorporation. The owners of the stock or shares are the owners of the business.',
  'LBL_DNB_RELIABILITY_TEXT' => 'Tarkkuusteksti',
  'LBL_DNB_RESIDENTIAL_ADDRESS_INDICATOR' => 'Asumisosoite-indikaattori',
  'LBL_DNB_RFR' => 'Päivitä',
  'LBL_DNB_RFR_HINT' => 'Päivitä nyt',
  'LBL_DNB_RFR_LOADING' => 'D&B päivitystarkistus käynnissä',
  'LBL_DNB_RISK_CLASS' => 'Riskiluokka',
  'LBL_DNB_SALES' => 'Myynti',
  'LBL_DNB_SALES_REVENUE' => 'Myyntitulot',
  'LBL_DNB_SALES_REVENUE_AMOUNT' => 'Myynnin tuoton määrä',
  'LBL_DNB_SEARCH_LOADING' => 'Haetaan D&B:stä...',
  'LBL_DNB_SELF_REQUEST_INDICATOR' => 'Itsepyyntöindikaattori',
  'LBL_DNB_SENIOR_PRINCIPAL' => 'Seniorijäsen',
  'LBL_DNB_SHOW_LESS' => 'Näytä vähemmän',
  'LBL_DNB_SHOW_MORE' => 'Näytä enemmän',
  'LBL_DNB_SIC' => 'SIC-koodi',
  'LBL_DNB_SLCT_CTRY' => 'Valitse maa',
  'LBL_DNB_SLCT_STATE' => 'Valitse osavaltio',
  'LBL_DNB_SMALL_BUSINESS_INDICATOR' => 'Pienyritys',
  'LBL_DNB_SMBDISADV_IND' => 'Pieni ja heikommassa asemassa oleva yritys',
  'LBL_DNB_SMBDISADV_IND_DESC' => 'Arvo TRUE indikoi, että tämä organisaatio on sertifioitu yrityksenä, josta omistaa yli puolet, ja jonka hallinnolliset ja päivittäiset tehtävät suorittaa, sosiaalisesti ja taloudellisesti heikko-osaiset henkilöt.',
  'LBL_DNB_SMB_CERT' => 'Sertifioitu pienyritys -indikaattori',
  'LBL_DNB_SMB_CERT_DESC' => 'Arvo TRUE indikoi, että tämä organisaatio on pieni yritys, ja sertifioitu pienuuden ehtojen täyttämiseksi. Sertifikaation on suorittanut valtiollinen, osavaltiollinen, tai paikallinen virasto tai organisaatio.',
  'LBL_DNB_SMB_IND' => 'Pienyritys -indikaattori',
  'LBL_DNB_SMB_IND_DESC' => 'Arvo TRUE indikoi, että tämä organisaatio on sertifioitu pieni yritys. Pieni yritys on entiteetti, joka on yksityisomistuksessa ja -hallinnassa, pienellä työntekijämäärällä ja verrattain pienellä myyntimäärällä. Pienen yrityksen laillinen määritelmä vaihtelee maattain ja aloittain.',
  'LBL_DNB_SOCIAL' => 'Sosiaalinen media',
  'LBL_DNB_SOCIO_IND' => 'Sosioekonominen tunniste',
  'LBL_DNB_SOCIO_INDICATOR' => 'Sosiaalisen taloustieteen indikaattori',
  'LBL_DNB_SOCIO_IND_DESC' => 'Tallentaa tietoja subjektien luokittelusta sosioekonomisiin tai tilastollisiin ryhmiin.',
  'LBL_DNB_SRCH' => 'Haku',
  'LBL_DNB_SRCH_LOAD' => 'Haetaan D&B',
  'LBL_DNB_SRCH_RES' => 'D&B: hakutulokset',
  'LBL_DNB_STAND_ALONE_ORGANIZATION_INDICATOR' => 'Itsenäinen organisaatio indikaattori',
  'LBL_DNB_STATE' => 'Osavaltio/provinssi/alue',
  'LBL_DNB_STD_COMPANY_INFO' => 'D&B: Yritystiedot - standardi',
  'LBL_DNB_STD_COMPANY_INFO_DESC' => 'Standardit yritystiedot D&B:ltä. Vaatii D&B-tilauksen.',
  'LBL_DNB_STD_COMPANY_INFO_LOADING' => 'Ladataan standardit yritystiedot D&B:stä...',
  'LBL_DNB_STOCK_EXCHANGE_COUNTRY_ISO_ALPHA_CODE' => 'Pörssin maa ISO Alpha-koodi',
  'LBL_DNB_STOCK_EXCHANGE_ISO_CODE' => 'Pörssin ISO-koodi',
  'LBL_DNB_STOCK_EXCHANGE_NAME' => 'Pörssin nimi',
  'LBL_DNB_STOCK_EXCHANGE_TICKER_NAME' => 'Pörssikaupankäyntitunnus',
  'LBL_DNB_STREET_ADDRESSLINE' => 'Katusosoiterivi',
  'LBL_DNB_STREET_ADDRESS_LINE_TEXT' => 'Katuosoitteen rivi teksti',
  'LBL_DNB_SUBAGENT_INDICATOR' => 'Aliagentti-indikaattori',
  'LBL_DNB_SUBJ_HEADER' => 'Subjektin ylätunniste',
  'LBL_DNB_SUBJ_HEADER_DESC' => 'Tallentaa korkean tason tietoa subjektista, kuten subjektin ensisijainen kieli ja ensisijainen valuutta. Silloin kun subjekti on organisaatio, tämä voi sisältää tietoja kuten DUNS-numeron.',
  'LBL_DNB_SUMMARY' => 'Yhteenveto',
  'LBL_DNB_SVC_DISAB_VET' => 'Palveluksessa vammautunut veteraani -indikaattori',
  'LBL_DNB_SVC_DISAB_VET_DESC' => 'Arvo TRUE indikoi, että tämän yrityksen enemmistön omistaa yksi tai useampi veteraani, jolla on palvelukseen liittyvä vamma. ‘Palvelukseen liittyvä vamma’ tarkoittaa armeijan, meri- tai ilmavoimien palveluksen aikana sotarintamalla saatua vammaa.',
  'LBL_DNB_SVC_ERR' => 'D&B palveluvirhe',
  'LBL_DNB_TELECOMM' => 'Telekommunikaatio',
  'LBL_DNB_TELECOMMUNICATION_NUMBER' => 'Telekommunikaationumero',
  'LBL_DNB_TELECOMM_DESC' => 'Tallentaa subjektin telekommunikaatiotietoja. ‘Telekommunikaatiotietoja’ ovat puhelinnumerot, sähköpostiosoitteet ja muut nettiosoitteet.',
  'LBL_DNB_TERRITORY_ABBREVATIVE_NAME' => 'Alueen lyhennetty nimi',
  'LBL_DNB_TERRITORY_ABBREVIATED_NAME' => 'Alueen lyhennetty nimi',
  'LBL_DNB_TERRITORY_OFFICIAL_NAME' => 'Alueen virallinen nimi',
  'LBL_DNB_TF_DUNS' => 'Siirretty DUNS-numero',
  'LBL_DNB_TOTAL_EMPLOYEE_QUANTITY' => 'Työntekijöitä yhteensä',
  'LBL_DNB_TOTAL_ENQUIERY_COUNT' => 'Kyselyitä yhteensä',
  'LBL_DNB_TOTAL_INQUIRY_COUNT' => 'Kyselyitä yhteensä',
  'LBL_DNB_TPA' => 'Kolmannen osapuolen arviointi',
  'LBL_DNB_TPA_DESC' => 'Tälle subjektille annetut mielipiteet tai arvioinnit, muilta kuin D&B Worldwide Networkiltä',
  'LBL_DNB_TRADE_STYLE_NAME' => 'Kauppatyylin nimi',
  'LBL_DNB_TRANSFERRED_FROM_DUNS_NUMBER' => 'Siirretty DUNS-numerosta',
  'LBL_DNB_TRD_NAME' => 'Kauppanimi',
  'LBL_DNB_TRD_NAME_DESC' => 'Nimi, jolla organisaatio tekee kauppaa, kaupallisista syistä.',
  'LBL_DNB_TRNS_DUNS' => 'Siirretty DUNS-numero',
  'LBL_DNB_TRNS_DUNS_DESC' => 'Tämä on DUNS-numero subjektista joka poistetaan host-tietokannasta',
  'LBL_DNB_UNDELIVERABLE_INDICATOR' => 'Toimittamattomana-indikaattori',
  'LBL_DNB_UNKNOWN_ERROR' => 'Tuntematon virhe. Tutki lokia.',
  'LBL_DNB_UNREACHABLE_INDICATOR' => 'Luoksepääsemätön-indikaattori',
  'LBL_DNB_UPLOAD' => 'Lataa (upload)',
  'LBL_DNB_UPTODATE' => 'Tuore',
  'LBL_DNB_UPTODATE_MSG' => 'Yritystiedot ovat tuoreita',
  'LBL_DNB_URL' => 'URL',
  'LBL_DNB_USPAT_SCR' => 'USA:n PATRIOT Act:in Compliance Risk -pisteet',
  'LBL_DNB_USPAT_SCR_DESC' => 'Komplianssiriski-indeksin tarkoituksena on antaa USA:n PATRIOT Act:in alaisille organisaatioille lisätyökalu, kun he suorittavat komplianssiriskipohjaista arviointia liikekumppaneista. Indeksi on numeerinen arvo, joka kuvaa yhdistelmää painotettuja riskimerkkejä. Indeksin laskee salainen algoritmi. Arvojen mahdollinen väli on 0:sta noin 255:een. Korkeampi indeksiarvo kertoo korkeammasta koetusta riskistä.',
  'LBL_DNB_VET_ENT' => 'Sotaveteraaniyritys-indikaattori',
  'LBL_DNB_VET_ENT_DESC' => 'Arvo TRUE indikoi, että yritys putoaa regulaation ‘SBA Guidelines Small Business Act (PL 85-536)’ piiriin. Regulaatio (laajennuksineen) sanoo: ‘Small Business Concerns owned and controlled by veterans not less than 51% owned by one or more veterans and in the case of a publicly owned business not less than 51% of the stock is owned by one or more veterans’',
  'LBL_DNB_VET_IND' => 'Veteraani-indikaattori',
  'LBL_DNB_VET_IND_DESC' => 'Arvo TRUE indikoi, että tämä organisaatio on sertifioitu yrityksenä, josta omistaa yli puolet, ja jonka hallinnolliset ja päivittäiset tehtävät suorittaa, yksi tai useampi veteraani. Veteraani on henkilö, joka palveli aktiivisessa maa-, meri- tai ilmavoimissa, ja joka vapautettiin muuten kuin häpeällisesti.',
  'LBL_DNB_VIET_VET' => 'Vietnam-veteraani -indikaattori',
  'LBL_DNB_VIET_VET_DESC' => 'Arvo TRUE indikoi, että tämän yrityksen enemmistön omistaa yksi tai useampi Vietnamin sodan veteraani, joka palveli päivien 1.1.1959 ja 7.5.1975 välillä, ja joka hallinnoi ja operoi yritystä. Hallinnolla tarkoitetaan sellaisen vallan käyttöä, jolla voidaan tehdä poliittisia päätöksiä. Operoinnilla tarkoitetaan osallistumista yrityksen päivittäiseen liiketoimintaan.',
  'LBL_DNB_VIEW_ACCT' => 'Näytä asiakkaat',
  'LBL_DNB_WEBPAGE' => 'Web-sivu',
  'LBL_DNB_WEBPAGE_ADDRESS' => 'Websivujen osoite',
  'LBL_DNB_WEBPAGE_DESC' => 'Organisaation websivu',
  'LBL_DNB_WITH' => '&nbsp;',
  'LBL_DOCUMENTS' => 'Dokumentit',
  'LBL_DONE_BUTTON_KEY' => 'X',
  'LBL_DONE_BUTTON_LABEL' => 'Valmis',
  'LBL_DONE_BUTTON_TITLE' => 'Valmis [Alt+X]',
  'LBL_DROPDOWN_LIST_ALL' => 'Kaikki',
  'LBL_DROP_HERE' => '[Pudota tähän]',
  'LBL_DST_NEEDS_FIXIN' => 'Sovellus edellyttää että kesäajan käsittelyyn liittyvä korjaus asennetaan. Siirry linkkiin <a href=\'index.php?module=Administration&action=DstFix\'>Korjaa</a> ylläpitoliittymässä ja ota käyttään kesäajan korjauspaketti.',
  'LBL_DUPECHECK_FILTER_DEFAULT' => 'Kaikki duplikaatit',
  'LBL_DUPLICATES_FOUND' => 'Löydettiin {{duplicateCount}} duplikaattia.',
  'LBL_DUPLICATE_BUTTON' => 'Kopioi',
  'LBL_DUPLICATE_BUTTON_KEY' => 'U',
  'LBL_DUPLICATE_BUTTON_LABEL' => 'Kopioi',
  'LBL_DUPLICATE_BUTTON_TITLE' => 'Kopioi',
  'LBL_DUP_MERGE' => 'Etsi kaksoiskappaleita',
  'LBL_DURATION_DAY' => 'päivä',
  'LBL_DURATION_DAYS' => 'päiviä',
  'LBL_DURATION_HOUR' => 'tunti',
  'LBL_DURATION_HOURS' => 'Kesto tunteja:',
  'LBL_DURATION_MINUTE' => 'minuutti',
  'LBL_DURATION_MINUTES' => 'Kesto minuuttia:',
  'LBL_DURATION_SECONDS' => 'sekuntia',
  'LBL_EDIT' => 'Muokkaa {{{this}}}',
  'LBL_EDITINLINE' => 'Muokkaa',
  'LBL_EDITVIEW' => 'Muokkausnäkymä',
  'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Muokkaa uutena',
  'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Muokkaa uutena',
  'LBL_EDIT_BUTTON' => 'Muokkaa',
  'LBL_EDIT_BUTTON_KEY' => 'E',
  'LBL_EDIT_BUTTON_LABEL' => 'Muokkaa',
  'LBL_EDIT_BUTTON_TITLE' => 'Muokkaa [Alt+E]',
  'LBL_EDIT_INLINE' => 'Muokkaa',
  'LBL_EDIT_RELATED' => 'Muokkaa liittyvää {{{this}}}',
  'LBL_EMAIL' => 'Sähköposti',
  'LBL_EMAILS' => 'Sähköpostit',
  'LBL_EMAILS_SUBPANEL_TITLE' => 'Sähköpostit',
  'LBL_EMAIL_ACCOUNTS_EDIT' => 'Muokkaa',
  'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Aseta Gmailin oletusarvot',
  'LBL_EMAIL_ACCOUNTS_NAME' => 'Nimi',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Lähtevän postin palvelin',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Syötä SMTP-palvelimen tiedot käyttääksesi ulosmenevää sähköpostia',
  'LBL_EMAIL_ACCOUNTS_SENDTYPE' => 'Mail transfer agent',
  'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ' => 'Käytä SMTP autentikointia?',
  'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Oletus',
  'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP salasana',
  'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD' => 'SMTP Salasana vaaditaan',
  'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP portti',
  'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP palvelin',
  'LBL_EMAIL_ACCOUNTS_SMTPSSL' => 'Käytä SSL-salausta kun otetaan yhteyttä palvelimeen',
  'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP käyttäjätunnus',
  'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD' => 'SMTP käyttäjätunnus vaaditaan',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Perusta sähköpostitili nähdäksesi saapuvat sähköpostisi',
  'LBL_EMAIL_ACCOUNTS_TITLE' => 'Sähköpostitilien hallinta',
  'LBL_EMAIL_ACTION_SET_INVALID' => 'Virheellinen',
  'LBL_EMAIL_ACTION_SET_OPT_IN' => 'Sisällytys',
  'LBL_EMAIL_ACTION_SET_OPT_OUT' => 'Jättäydy',
  'LBL_EMAIL_ACTION_SET_PRIMARY' => 'Ensisijainen',
  'LBL_EMAIL_ACTION_SET_VALID' => 'Validi',
  'LBL_EMAIL_ADD' => 'Lisää sähköposti',
  'LBL_EMAIL_ADDRESSES' => 'Sähköpostiosoitteet',
  'LBL_EMAIL_ADDRESSES_TITLE' => 'Sähköpostiosoitteet',
  'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Lisää',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'BCC:',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'CC:',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST' => 'Lisää lista',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Vastaanottaja:',
  'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Vastaanottaja/Cc/Bcc',
  'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Tyhjennä',
  'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Sähköposti',
  'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT' => 'Vain kontaktin muokaamista tuetaan toistaiseksi.',
  'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Hakuavain',
  'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME' => 'Etunimi',
  'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME' => 'Sukunimi',
  'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS' => 'Omat kontaktit',
  'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS' => 'Omat postituslistat',
  'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nimi',
  'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Osoitteita ei löydetty',
  'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Tallenna ja lisää osoitekirjaan',
  'LBL_EMAIL_ADDRESS_BOOK_SEARCH' => 'Etsi',
  'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Valitse osoitekirjan nimikkeet',
  'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Osoitekirja',
  'LBL_EMAIL_ADDRESS_PRIMARY' => 'Sähköpostiosoite',
  'LBL_EMAIL_ADDR_DISPLAY_MSG' => 'Näytetään sähköpostiosoitteet {0} - {1} / {2}',
  'LBL_EMAIL_ARCHIVED' => 'Sähköposti arkistoitu',
  'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Tuo Sugariin',
  'LBL_EMAIL_ASSIGNED_TO_USER' => 'Vastuuhenkilö',
  'LBL_EMAIL_ASSIGNMENT' => 'Allokaatio (assignment)',
  'LBL_EMAIL_ASSIGN_TO' => 'Valitse vastuuhenkilö',
  'LBL_EMAIL_ATTACHMENT' => 'Liitä',
  'LBL_EMAIL_ATTACHMENTS' => 'Liitä tiedostoja',
  'LBL_EMAIL_ATTACHMENTS2' => 'Lisää Sugar-dokumentteja',
  'LBL_EMAIL_ATTACHMENTS3' => 'Sivupohjan liitteet',
  'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokumentti',
  'LBL_EMAIL_ATTACHMENTS_EMBEDED' => 'Upotettu',
  'LBL_EMAIL_ATTACHMENTS_FILE' => 'Tiedosto',
  'LBL_EMAIL_ATTACHMENT_UPLOAD_FAILED' => 'Liitteen lataus epäonnistui',
  'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Liitä tiedosto sähköpostiin',
  'LBL_EMAIL_BCC' => 'BCC',
  'LBL_EMAIL_BUTTON' => 'Sähköposti',
  'LBL_EMAIL_CANCEL' => 'Peru',
  'LBL_EMAIL_CC' => 'Kopio',
  'LBL_EMAIL_CHARSET' => 'Merkistö',
  'LBL_EMAIL_CHECK' => 'Tarkista sähköposti',
  'LBL_EMAIL_CHECKING_DESC' => 'Uusien tilien ensimmäinen tarkistus voi viedä aikaa, odota.',
  'LBL_EMAIL_CHECKING_NEW' => 'Tarkistetaan sähköpostia',
  'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Tyhjennetään välimuistia...',
  'LBL_EMAIL_CLOSE' => 'Sulje',
  'LBL_EMAIL_COFFEE_BREAK' => 'Suuret sähköpostilaatikot voivat viedä aikaa, odota.',
  'LBL_EMAIL_COMMON' => 'Yhteinen',
  'LBL_EMAIL_COMPOSE' => 'Uusi viesti',
  'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Tällä sähköpostilla ei ole vastaanottajia.',
  'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Anna voimassa oleva sähköpostiosoite kenttiin: vastaanottaja, kopio ja piilokopio',
  'LBL_EMAIL_COMPOSE_LINK_TO' => 'Liitä objektiin',
  'LBL_EMAIL_COMPOSE_NO_BODY' => 'Sähköposti ei sisällä tekstiä, lähetä silti?',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Sähköpostilla ei ole aihetta, lähetä silti?',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(ei aihetta)',
  'LBL_EMAIL_COMPOSE_OPTIONS' => 'Valinnat',
  'LBL_EMAIL_COMPOSE_READ' => 'Lue ja luo sähköposti',
  'LBL_EMAIL_COMPOSE_SEND_FROM' => 'Lähetä käyttäen sähköpostitiliä',
  'LBL_EMAIL_CONFIRM_CLOSE' => 'Sivuuta tämä sähköposti?',
  'LBL_EMAIL_CONFIRM_DELETE' => 'Poista nimikkeet osoitekirjasta?',
  'LBL_EMAIL_CONFIRM_DELETE_LIST' => 'Poistetaanko nämä tietueet postituslistoilta?',
  'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Haluatko varmasti poistaa tämän allekirjoituksen?',
  'LBL_EMAIL_CREATE_NEW' => '--luo tallennettaessa--',
  'LBL_EMAIL_DATE_RECEIVED' => 'Vastaanotettu',
  'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Päivämäärä lähettäjältä',
  'LBL_EMAIL_DATE_TODAY' => 'Tänään',
  'LBL_EMAIL_DATE_YESTERDAY' => 'Eilen',
  'LBL_EMAIL_DD_TEXT' => 'sähköpostia valittu.',
  'LBL_EMAIL_DEFAULTS' => 'Oletusarvot',
  'LBL_EMAIL_DELETE' => 'Poista',
  'LBL_EMAIL_DELETE_CONFIRM' => 'Poista valitut viestit?',
  'LBL_EMAIL_DELETE_ERROR_DESC' => 'Sinulla ei ole oikeuksia tähän alueeseen. Ota yhteyttä ylläpitoon saadaksesi oikeudet.',
  'LBL_EMAIL_DELETE_SUCCESS' => 'Viesin poistaminen onnistui.',
  'LBL_EMAIL_DELETING_MESSAGE' => 'Viestiä poistetaan',
  'LBL_EMAIL_DELETING_OUTBOUND' => 'Poistetaan lähetyspalvelinta...',
  'LBL_EMAIL_DELIMITER' => '::;::',
  'LBL_EMAIL_DETAILS' => 'Tarkemmat tiedot',
  'LBL_EMAIL_DISPLAY_MSG' => 'Näytetään sähköpostiosoitteet {0} - {1} / {2}',
  'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Valmis',
  'LBL_EMAIL_DOWNLOAD_STATUS' => '[[count]]/[[total]] sähköposteista ladattu.',
  'LBL_EMAIL_EDIT_CONTACT' => 'Muokkaa kontaktia',
  'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Vain ensisijaista osoitetta käytetään kontaktien kanssa.',
  'LBL_EMAIL_EDIT_MAILING_LIST' => 'Muokkaa postituslistaa',
  'LBL_EMAIL_EMPTYING_TRASH' => 'Tyhjennetään roskakoria...',
  'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Esitettäviä sähköpostiosoitteita ei ole.',
  'LBL_EMAIL_EMPTY_MSG' => 'Ei sähköpostiosoitteita näytettäväksi.',
  'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Nimeämätöntä kansiota ei voida tallentaa. Anna nimi ja yritä uudelleen.',
  'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Käyttöyhteydestä ei voida päätellä haluttua kansiota. Yritä uudelleen.',
  'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Tarkista asetukset.',
  'LBL_EMAIL_ERROR_CONTACT_NAME' => 'Varmista, että annat sukunimen.',
  'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Kansiota ei voida poistaa. Kansion tai sen alikansioon liittyy sähköpostilaatikko.',
  'LBL_EMAIL_ERROR_DESC' => 'Havaittiin virheitä:',
  'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Sugar-kansioiden nimien tulee olla yksilöllisiä.',
  'LBL_EMAIL_ERROR_EMPTY' => 'Anna hakukriteeri.',
  'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Lähettäjän osoite vaaditaan.',
  'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Virhe havaittu',
  'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Viesti on poistettu palvelimelta tai siirretty toiseen kansioon',
  'LBL_EMAIL_ERROR_LIST_NAME' => 'Samalla nimellä oleva sähköpostilista on jo olemassa',
  'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Yhteys sähköpostipalvelimeen epäonnistui. Ota yhteys ylläpitoon.',
  'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Viesti poistettu palvelimelta',
  'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Valvottu kansio tarvitaan.',
  'LBL_EMAIL_ERROR_MOVE' => 'Sähköpostien siirtoa palvelinten ja/tai käyttäjätilien välillä ei tällä hetkellä tueta.',
  'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Siirtovirhe',
  'LBL_EMAIL_ERROR_NAME' => 'Nimi vaaditaan.',
  'LBL_EMAIL_ERROR_NO_FILE' => 'Anna tiedosto.',
  'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'IMAP-kansioiden nimeämistä ei tueta tällä hetkellä.',
  'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Ulosmenevän postin palvelinta ei ole määritetty.',
  'LBL_EMAIL_ERROR_PASSWORD' => 'Salasana vaaditaan.',
  'LBL_EMAIL_ERROR_PORT' => 'Sähköpostipalvelimen portti vaaditaan.',
  'LBL_EMAIL_ERROR_PREPEND' => 'Virhe:',
  'LBL_EMAIL_ERROR_PROTOCOL' => 'Palvelimen protokolla vaaditaan.',
  'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Sähköpostitiliä ei ehkä ole tallennettu.',
  'LBL_EMAIL_ERROR_SERVER' => 'Sähköpostipalvelimen osoite vaaditaan.',
  'LBL_EMAIL_ERROR_TIMEOUT' => 'Sähköpostipalvelin vastaus kestää liian kauan',
  'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Roskakori tarvitaan.',
  'LBL_EMAIL_ERROR_USER' => 'Kirjautumistunnus vaaditaan.',
  'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Tietoa ei ole saatavilla',
  'LBL_EMAIL_FOLDERS_ACTIONS' => 'Siirrä osoitteeseen',
  'LBL_EMAIL_FOLDERS_ADD' => 'Lisää',
  'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Lisää uusi kansio',
  'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Lisää uusi ryhmäkansio',
  'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Lisää kansio osoitteeseen',
  'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Kansiota ei voida muuttaa',
  'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Haluatko poistaa tämän kansion?<br />Toimintoa ei voida perua.<br />Toiminto poistaa myös kaikki alikansiot.',
  'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Uusi kansio',
  'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Valitse kansio ennen toiminnon suorittamista.',
  'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Nimeä kansio uudelleen',
  'LBL_EMAIL_FOLDERS_TITLE' => 'Sugar-kansioiden hallinta',
  'LBL_EMAIL_FOLDERS_USING_GROUP_USER' => 'Käyttäen ryhmää',
  'LBL_EMAIL_FOLDERS_USING_TEAM' => 'Määritä tiimille',
  'LBL_EMAIL_FORWARD' => 'Jatkolähetä',
  'LBL_EMAIL_FOUND' => 'löydetty',
  'LBL_EMAIL_FROM' => 'Lähettäjä',
  'LBL_EMAIL_GROUP' => 'ryhmä',
  'LBL_EMAIL_HOME_FOLDER' => 'Etusivu',
  'LBL_EMAIL_HTML_RTF' => 'Lähetä HTML',
  'LBL_EMAIL_IE_DELETE' => 'Poistetaan asiakas',
  'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Haluatko poistaa tämän asiakkaan?',
  'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Postetaan allekirjoitus',
  'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Poisto onnistui.',
  'LBL_EMAIL_IE_SAVE' => 'Tallennetaan tilitietoja',
  'LBL_EMAIL_IMPORTING_EMAIL' => 'Tuodaan sähköposteja',
  'LBL_EMAIL_IMPORT_EMAIL' => 'Tuo Sugariin',
  'LBL_EMAIL_IMPORT_FAIL' => 'Tuonti epäonnistui. Joko viesti on jo tuotu tai se on poistettu palvelimelta',
  'LBL_EMAIL_IMPORT_SETTINGS' => 'Tuo asetukset',
  'LBL_EMAIL_IMPORT_SUCCESS' => 'Tuonti onnistui',
  'LBL_EMAIL_INVALID' => 'Virheellinen',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Sähköpostitilin ulosmenevän postin palvelin on epäkelpo. Tarkista asetukset ja valitse toinen palvelin.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Ulosmenevän postin palvelinta ei ole konfiguroitu lähettämään sähköpostia. Konfiguroi ulosmenevän postin palvelin tai valitse ulosmenevän postin palvelin kohdasta Asetukset >> Sähköpostitili',
  'LBL_EMAIL_INV_TITLE' => 'virheellinen sähköpostiosoite',
  'LBL_EMAIL_LINK_RECORD' => 'Klikkaa tästä',
  'LBL_EMAIL_LIST_RENAME_DESC ' => 'Syötä tälle postitusĺistalle uusi nimi',
  'LBL_EMAIL_LIST_RENAME_TITLE' => 'Nimeä postituslista uudelleen',
  'LBL_EMAIL_LOADING' => 'Ladataan...',
  'LBL_EMAIL_MARK' => 'Merkitse',
  'LBL_EMAIL_MARK_FLAGGED' => 'Merkityksi',
  'LBL_EMAIL_MARK_READ' => 'Luetuksi',
  'LBL_EMAIL_MARK_UNFLAGGED' => 'Ei-merkityksi',
  'LBL_EMAIL_MARK_UNREAD' => 'Ei-luetuksi',
  'LBL_EMAIL_MENU_ADD_FOLDER' => 'Luo kansio',
  'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Tyhjennä välimuisti',
  'LBL_EMAIL_MENU_COMPOSE' => 'Muodosta kohteeseen',
  'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Poista kansio',
  'LBL_EMAIL_MENU_EDIT' => 'Muokkaa',
  'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Tyhjennä roskakori',
  'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Luo kansio (etäkansio tai Sugarissa oleva)',
  'LBL_EMAIL_MENU_HELP_ARCHIVE' => 'Arkistoi nämä sähköpostit SugarCRM-ohjelmaan',
  'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST' => 'Lähetä sähköpostia valituille postituslistoille',
  'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE' => 'Lähetä sähköpostia tälle kontaktille',
  'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE' => 'Poista kontakti',
  'LBL_EMAIL_MENU_HELP_DELETE' => 'Poista nämä sähköpostit',
  'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Poista kansio (etäkansio tai Sugarissa oleva)',
  'LBL_EMAIL_MENU_HELP_EDIT_CONTACT' => 'Muokkaa kontaktia',
  'LBL_EMAIL_MENU_HELP_EDIT_LIST' => 'Muokkaa postituslistaa',
  'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Tyhjentää kaikkien sähköpostitiliesi roskakorit',
  'LBL_EMAIL_MENU_HELP_MARK_FLAGGED' => 'Merkitse sähköpostit käsitellyksi',
  'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Merkitse sähköpostit luetuksi',
  'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Merkitse nämä sähköpostit ei-käsitellyksi',
  'LBL_EMAIL_MENU_HELP_MARK_UNREAD' => 'Merkitse sähköpostit ei-luetuksi',
  'LBL_EMAIL_MENU_HELP_REMOVE_LIST' => 'Poistaa postituslistat',
  'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Nimeä kansio (etäkansio tai Sugarissa oleva)',
  'LBL_EMAIL_MENU_HELP_REPLY' => 'Vastaa näihin sähköposteihin',
  'LBL_EMAIL_MENU_HELP_REPLY_ALL' => 'Vastaa kaikille tämän viestin/viestien vastaanottajille',
  'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Valitse halutut kohteet ennen toiminnon suorittamista.',
  'LBL_EMAIL_MENU_REMOVE' => 'Poista',
  'LBL_EMAIL_MENU_RENAME' => 'Nimeä',
  'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Nimeä kansio',
  'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Nimetään kansiota',
  'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synkronisoi',
  'LBL_EMAIL_MESSAGES' => 'viestiä',
  'LBL_EMAIL_MESSAGE_NO' => 'Viesti numero',
  'LBL_EMAIL_ML_ADDRESSES_1' => 'Valitut listan osoitteet',
  'LBL_EMAIL_ML_ADDRESSES_2' => 'Käytettävissä olevat listan osoitteet',
  'LBL_EMAIL_ML_NAME' => 'Listan nimi',
  'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> valitaksesi useampia<br />(Mac käyttäjät käyttävät <b>CMD-Click</b>)',
  'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Useita',
  'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Tyhjä',
  'LBL_EMAIL_NO' => 'Ei',
  'LBL_EMAIL_NOT_SENT' => 'Järjestelmä ei kyennyt prosessoimaan pyyntöäsi. Ota yhteys järjestälmän ylläpitäjään!',
  'LBL_EMAIL_OK' => 'OK',
  'LBL_EMAIL_ONE_MOMENT' => 'Odota...',
  'LBL_EMAIL_OPEN_ALL' => 'Avaa useita viestejä',
  'LBL_EMAIL_OPTIONS' => 'Valinnat',
  'LBL_EMAIL_OPT_OUT' => 'ei lähetetä sähköpostia',
  'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Ei sähköpostia ja epäkelpo_(2664)_',
  'LBL_EMAIL_OPT_TITLE' => 'Pois jätetty sähköpostiosoite',
  'LBL_EMAIL_PAGE_AFTER' => '/ {0}',
  'LBL_EMAIL_PAGE_BEFORE' => 'Sivu',
  'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
  'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Lähetä PDF-muodossa',
  'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Lähetä PDF-muodossa [Alt+M]',
  'LBL_EMAIL_PERFORMING_TASK' => 'Suoritetaan tehtävää',
  'LBL_EMAIL_POP3_REMOVE_MESSAGE' => 'POP3-tyypin protokollaa ei tueta seuraavassa versiossa. Vain imap-protokollaa tuetaan.',
  'LBL_EMAIL_PRIMARY' => 'Ensisijainen',
  'LBL_EMAIL_PRIM_TITLE' => 'ensisijainen sähköpostiosoite',
  'LBL_EMAIL_PRINT' => 'Tulosta',
  'LBL_EMAIL_QC_BUGS' => 'Bugi',
  'LBL_EMAIL_QC_CASES' => 'Palvelupyyntö',
  'LBL_EMAIL_QC_CONTACTS' => 'Kontakti',
  'LBL_EMAIL_QC_LEADS' => 'Liidi',
  'LBL_EMAIL_QC_OPPORTUNITIES' => 'Myyntimahdollisuus',
  'LBL_EMAIL_QC_TASKS' => 'Tehtävä',
  'LBL_EMAIL_QUICK_COMPOSE' => 'Pikalähtetys',
  'LBL_EMAIL_QUICK_CREATE' => 'Luo',
  'LBL_EMAIL_REBUILDING_FOLDERS' => 'Muodostetaan kansiot uudelleen',
  'LBL_EMAIL_RECORD' => 'Sähköpostiarkisto',
  'LBL_EMAIL_RECV' => 'vast.ott.',
  'LBL_EMAIL_RELATE_EMAIL' => 'Aseta sähköpostin suhde',
  'LBL_EMAIL_RELATE_TO' => 'Liitä kohteeseen',
  'LBL_EMAIL_REMOVE' => 'Poista',
  'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Varoitus! Ulosmenevän postin tili, jota olet poistamassa liittyy toiseen sisäänmenevän postin tiliin! Haluatko varmasti jatkaa?',
  'LBL_EMAIL_REPLY' => 'Vastaa',
  'LBL_EMAIL_REPLY_ALL' => 'Vastaa kaikille',
  'LBL_EMAIL_REPLY_TO' => 'Vastaa osoitteeseen',
  'LBL_EMAIL_REPORTS_TITLE' => 'Raportit',
  'LBL_EMAIL_RETRIEVING_LIST' => 'Noudetaan sähköpostilistaa',
  'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Noudetaan viestiä',
  'LBL_EMAIL_RETRIEVING_RECORD' => 'Noudetaan sähköpostiarkistoa',
  'LBL_EMAIL_RETURN_TO_VIEW' => 'Palaa edelliseen moduuliin?',
  'LBL_EMAIL_REVERT' => 'Palaa edelliseen',
  'LBL_EMAIL_RULES_TITLE' => 'Sääntöjen hallinta',
  'LBL_EMAIL_SAVE' => 'Tallenna',
  'LBL_EMAIL_SAVE_AND_REPLY' => 'Tallenna ja vastaan',
  'LBL_EMAIL_SAVE_DRAFT' => 'Tallenna luonnos',
  'LBL_EMAIL_SEARCHING' => 'Etsitään',
  'LBL_EMAIL_SEARCH_ADVANCED' => 'Edistynyt haku',
  'LBL_EMAIL_SEARCH_DATE_FROM' => 'Päivämäärästä',
  'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Päivämäärään',
  'LBL_EMAIL_SEARCH_FULL_TEXT' => 'Runkoteksti',
  'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Hakukriteerit eivät palauttaneet tuloksia.',
  'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Hakutulokset',
  'LBL_EMAIL_SEARCH_TITLE' => 'Yksinkertainen haku',
  'LBL_EMAIL_SEARCH__FROM_ACCOUNTS' => 'Hae sähköpostitiliä',
  'LBL_EMAIL_SELECT' => 'Valitse',
  'LBL_EMAIL_SELECT_ONE_RECORD' => 'Valitse vain yksi sähköpostiarkisto.',
  'LBL_EMAIL_SEND' => 'Lähetä',
  'LBL_EMAIL_SENDING_EMAIL' => 'Lähetetään sähköpostia',
  'LBL_EMAIL_SENT' => 'läh.',
  'LBL_EMAIL_SETTINGS' => 'Asetukset',
  'LBL_EMAIL_SETTINGS_2_ROWS' => '2 riviä',
  'LBL_EMAIL_SETTINGS_3_COLS' => '3 saraketta',
  'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Sähköpostitilit',
  'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Tyhjennä lomake',
  'LBL_EMAIL_SETTINGS_AUTO_IMPORT' => 'Tuo sähköposti sitä katseltaessa',
  'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Tarkista sähköpostit',
  'LBL_EMAIL_SETTINGS_COMPOSE_INLINE' => 'Käytä esikatselupaneelia',
  'LBL_EMAIL_SETTINGS_COMPOSE_POPUP' => 'Käytä popup-ikkunaa',
  'LBL_EMAIL_SETTINGS_DISPLAY_NUM' => 'Sähköposteja sivulla',
  'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT' => 'Muokkaa tiliä',
  'LBL_EMAIL_SETTINGS_FOLDERS' => 'Kansiot',
  'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Lähettäjän osoite',
  'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Lähettäjän nimi',
  'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Sähköpostiosoite testi-ilmoitukselle',
  'LBL_EMAIL_SETTINGS_FULL_SCREEN' => 'Koko näyttö',
  'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synkronisoi kaikki sähköpostitilit',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC' => 'Toiminto synronisoi kaikki sähköpostitilit ja niiden sisällön.',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Suorita koko synkronisointi?<br />Paljon viestejä sisältävät sähköpostitilit voivat viedä useita minuutteja.',
  'LBL_EMAIL_SETTINGS_GENERAL' => 'Yleiset',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS' => 'Käytettävissä olevat ryhmäkansiot',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Luo ryhmäkansiot',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Muokkaa ryhmäkansiota',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Tallennetaan ryhmäkansioita',
  'LBL_EMAIL_SETTINGS_LAYOUT' => 'Ulkoasun tyyli',
  'LBL_EMAIL_SETTINGS_MUST_RELOAD' => 'Sivu täytyy ladata uudelleen jotta asetukset tulisivat voimaan.',
  'LBL_EMAIL_SETTINGS_NAME' => 'Nimi',
  'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Vastausosoite',
  'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Nämä asetukset voivat edellyttää sivun uudelleenlatauksen aktivointia.',
  'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Noudetaan sähköpostitili',
  'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP' => 'Noudetaan ryhmäkansio',
  'LBL_EMAIL_SETTINGS_RULES' => 'Säännöt',
  'LBL_EMAIL_SETTINGS_SAVED' => 'Asetukset tallennettu',
  'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Lähetä sähköpostit pelkkänä tekstinä',
  'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS' => 'Aktiiviset sähköpostilaatikot',
  'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Sähköposteja sivulla',
  'LBL_EMAIL_SETTINGS_TAB_POS' => 'Sijoita kielekkeet alas',
  'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Visuaaliset asetukset',
  'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Asetukset',
  'LBL_EMAIL_SETTINGS_TOGGLE_ADV' => 'Näytä edistyneet',
  'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR' => 'Sähköpostiosoitteeseen',
  'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Käytettävissä olevat käyttäjäkansiot',
  'LBL_EMAIL_SHOW_READ' => 'Näytä kaikki',
  'LBL_EMAIL_SHOW_UNREAD_ONLY' => 'Näytä vain ei-luetut viestit',
  'LBL_EMAIL_SIGNATURES' => 'Allekirjoitukset',
  'LBL_EMAIL_SIGNATURE_CREATE' => 'Luo allekirjoitus',
  'LBL_EMAIL_SIGNATURE_NAME' => 'Allekirjoituksen nimi',
  'LBL_EMAIL_SIGNATURE_TEXT' => 'Allekirjoituksen sisältö',
  'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Käytä SMTP:tä SSL- tai TLS- yhteydellä',
  'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ Sugar-kansiot ]',
  'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ etäkansiot ]',
  'LBL_EMAIL_SUBJECT' => 'Aihe',
  'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Paina pohjaan Shift tai Control -näppäin valitaksesi useamman kansion.',
  'LBL_EMAIL_SUCCESS' => 'Onnistui',
  'LBL_EMAIL_SUGAR_FOLDER' => 'Sugar-kansio',
  'LBL_EMAIL_TEAMS' => 'Määritä tiimeille',
  'LBL_EMAIL_TEMPLATES' => 'Mallit',
  'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Sähköpostimallin sisältökenttä on tyhjä',
  'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Sähköposti lähetettiin annettuun osoitteeseen syötetyillä asetuksilla. Varmista nyt, että sähköposti on saapunut vastaanottajalleen varmistaaksesi asetukset.',
  'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Lähetä testisähköposti',
  'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Testaa sähköpostin lähetys_(2934)_',
  'LBL_EMAIL_TEXT_FIRST' => 'Ensimmänen sivu',
  'LBL_EMAIL_TEXT_LAST' => 'Viimeinen sivu',
  'LBL_EMAIL_TEXT_NEXT' => 'Seuraava sivu',
  'LBL_EMAIL_TEXT_PREV' => 'Edellinen sivu',
  'LBL_EMAIL_TEXT_REFRESH' => 'Päivitä',
  'LBL_EMAIL_TITLE' => 'Sähköposti',
  'LBL_EMAIL_TO' => 'Vastaanottaja',
  'LBL_EMAIL_TOGGLE_LIST' => 'Vaihda listan valinnat',
  'LBL_EMAIL_UPPER_CASE_GROUP' => 'Ryhmä',
  'LBL_EMAIL_VIEW' => 'Näkymä',
  'LBL_EMAIL_VIEWS' => 'Näkymät',
  'LBL_EMAIL_VIEW_HEADERS' => 'Näytä otsikot',
  'LBL_EMAIL_VIEW_PRINTABLE' => 'Tulostusversio',
  'LBL_EMAIL_VIEW_RAW' => 'Näytä sähköpostin raakadata (raw data)',
  'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Näytä suhteet',
  'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Toimintoa ei tueta kun käytössä POP3.',
  'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Varoitus: Ulosmenevän sähköpostin käyttäjätunnus ja salasana puuttuvat.',
  'LBL_EMAIL_YES' => 'Kyllä',
  'LBL_EMPLOYEES' => 'Työntekijät',
  'LBL_EMPTY' => 'Tyhjä',
  'LBL_EMPTY_REQUIRED_VCARD' => 'vCardilla ei ole tarvittavia tietoja kaikkien (tämän moduulin) pakollisten kenttien täyttämiseen.',
  'LBL_EMPTY_VCARD' => 'Valitse vCard -tiedosto',
  'LBL_ENABLE_JAVASCRIPT' => 'SugarCRM vaatii Javascriptin toimiakseen. Salli Javascript selaimessasi käyttääksesi SugarCRMää.',
  'LBL_ENTER_DATE' => 'Anna päivä',
  'LBL_ENTER_EMAIL' => 'Syötä kutsuttavan sähköpostiosoite:',
  'LBL_ENTER_VALID_YEAR' => 'Aseta kelpaava vuosi',
  'LBL_ENTER_YEAR' => 'Syötä vuosi',
  'LBL_ERROR' => 'Virhe',
  'LBL_ERROR_CANNOT_FIND_TWITTER' => 'Ei löydetty validia aikajanaa Twitter ID:lle',
  'LBL_ERROR_RETRIEVING_FREE_BUSY' => 'Tapahtui virhe hakiessa aikataulua.',
  'LBL_ERR_LOADING_RSS_FEED' => 'RSS-syötteen lataaminen epäonnistui',
  'LBL_EXISTING' => 'Oleva',
  'LBL_EXPAND_ALL' => 'Näytä kaikki',
  'LBL_EXPORT' => 'Vie',
  'LBL_EXPORT_ALL' => 'Vie kaikki',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Vastuuhenkilö',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Vastuuhenkilö',
  'LBL_EXPORT_FULL_NAME' => 'Koko Nimi',
  'LBL_EXPORT_REPORTS_TO_ID' => 'Raportit ID:lle',
  'LBL_EXPORT_TEAM_ID' => 'Tiimin ID',
  'LBL_EXPORT_TEAM_NAME' => 'Tiimit',
  'LBL_EXPORT_TEAM_SET_ID' => 'Tiimin asetettu ID',
  'LBL_EXTERNAL_LOGIN_BUTTON_TITLE' => 'Single sign-on (SSO)',
  'LBL_EXTERNAL_SECURITY_LEVEL' => 'Turvallisuus',
  'LBL_FAILED' => 'Epäonnistui!',
  'LBL_FASTCGI_LOGGING' => 'Jotta saisit parhaan käyttökokemuksen ohjelmistoilla IIS/FastCGI sapi, aseta fastcgi.logging arvoon 0 php.ini -tiedostossa.',
  'LBL_FAVORITE' => 'Suosikki',
  'LBL_FAVORITES' => 'Suosikit',
  'LBL_FAVORITES_FILTER' => 'Suosikkini:',
  'LBL_FEEDBACK' => 'Palaute',
  'LBL_FILES_OPENED' => 'Tiedostoja avattu',
  'LBL_FILE_BUTTON' => 'Tiedosto',
  'LBL_FILE_DELETED' => 'Tiedosto poistettu',
  'LBL_FILE_DELETE_CONFIRM' => 'Haluatko varmasti poistaa tämän tiedoston? Poistettua tiedostoa ei saa takaisin.',
  'LBL_FILE_SIZE_UNITS_B' => 'tavua',
  'LBL_FILE_SIZE_UNITS_KB' => 'kt',
  'LBL_FILE_SIZE_UNITS_MB' => 'Mt',
  'LBL_FILTER' => 'Suodata',
  'LBL_FILTERED' => 'Suodatettu',
  'LBL_FILTER_ALL_RECORDS' => 'Kaikki tietueet',
  'LBL_FILTER_BETWEEN_FROM' => 'From',
  'LBL_FILTER_BETWEEN_TO' => 'To',
  'LBL_FILTER_CREATE_NEW' => 'Luo suodatin',
  'LBL_FILTER_DATEBETWEEN_FROM' => 'Aloituspäivä',
  'LBL_FILTER_DATEBETWEEN_TO' => 'Päättymispäivä',
  'LBL_FILTER_MENU_BY' => 'Suodata menu',
  'LBL_FILTER_SELECT_FIELD' => 'Valitse kenttä...',
  'LBL_FILTER_SELECT_OPERATOR' => 'Valise operaattori...',
  'LBL_FINISH_BUTTON_LABEL' => 'Lopeta',
  'LBL_FINISH_BUTTON_TITLE' => 'Lopeta',
  'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'Ensi kuun ensimmäinen päivä',
  'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
  'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
  'LBL_FIXED_IN_RELEASE' => 'Korjattu versiossa',
  'LBL_FOLLOW' => 'Seuraa',
  'LBL_FOLLOWING' => 'Seurataan',
  'LBL_FOLLOW_LINK' => 'Seuraa linkkiä',
  'LBL_FONTSIZE_EXTRA_HUGE' => 'Jättiläsmäinen',
  'LBL_FONTSIZE_HUGE' => 'Suurin, melkein',
  'LBL_FONTSIZE_LARGE' => 'Suuri',
  'LBL_FONTSIZE_LARGER' => 'Suurempi',
  'LBL_FONTSIZE_NORMAL' => 'Normaali',
  'LBL_FONTSIZE_SMALL' => 'Pienempi',
  'LBL_FONTSIZE_TINY' => 'Pienin',
  'LBL_FORECAST_WORKSHEET' => 'Ennustetyökirja',
  'LBL_FORECAST_WORKSHEETS' => 'Ennustetyökirjat',
  'LBL_FOUND_IN_RELEASE' => 'Löydetty versiosta',
  'LBL_FULL_FORM_BUTTON_KEY' => 'L',
  'LBL_FULL_FORM_BUTTON_LABEL' => 'Koko lomake',
  'LBL_FULL_FORM_BUTTON_TITLE' => 'Koko lomake',
  'LBL_GENERATE_QUOTE' => 'Generoi tarjous',
  'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Luo lomake',
  'LBL_GETTINGAIR' => 'Getting Air',
  'LBL_GLOBAL_SEARCH' => 'Globaali haku',
  'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
  'LBL_GLOBAL_SEARCH_MODULE_FILTER' => 'Globaalin haun moduulisuodatin',
  'LBL_GLOBAL_SEARCH_RUN' => 'Suorita globaali haku',
  'LBL_GLOBAL_SHORTCUTS' => 'Globaalit pikanäppäimet',
  'LBL_GO_BUTTON_LABEL' => 'Suorita',
  'LBL_GRID_SELECTED_FILE' => 'valittu tiedosto',
  'LBL_GRID_SELECTED_FILES' => 'valitut tiedostot',
  'LBL_GROUP_EMAIL_ACCOUNT_CONFIGURATION' => 'ryhmätili',
  'LBL_GS_HELP' => 'Tässä haussa käytetyt kentät näkyvät yllä tuloksissa. Korostettu teksti vastaa hakukriteereitäsi.',
  'LBL_HELP' => 'Ohje',
  'LBL_HELP_CREATE' => 'Tietueen luonnin vaiheet:

1. Syötä kentille arvoja.

  Pakollisiksi merkityt kentät pitää täyttää ennen kuin tietue voidaan luoda. Muut kentät ovat valinnaisia.

2. Paina ‘Tallenna’ luodaksesi tietueen. Tämän jälkeen palaat edelliselle sivulle.

  Painamalla ‘Tallenna ja näytä’, tietue luodaan, jonka jälkeen näytetään tietueen tietuenäkymä.

  Paina ‘Tallenna ja luo uusi’, jos haluat heti luoda toisen tietueen.',
  'LBL_HELP_CREATE_TITLE' => '{{module_name}}-tyyppisen tietueen luonti',
  'LBL_HELP_DUPLICATE' => 'Sugar on havainnut, että yrität luoda jo ehkä olemassa olevaa tietuetta.

Jos haluat tietueen luonnin sijaan muokata olemassaolevaa tietuetta, valitse "Valitse ja muokkaa". Tietueessa olevat tyhjät kentät täytetään nyt syöttämilläsi arvoilla. Klikkaa "tallenna" tehdäksesi muutokset olemassa olevaan tietueeseen.

Jos sen sijaa haluat korvata olemassa olevan tietueen tiedot juuri syöttämilläsi arvoilla, valitse "Palauta alkuperäiseen". Syöttämäsi arvot korvaavat olemassa olevan tietueen arvot, jonka jälkeen voit muokata olemassa olevaa tietuetta vielä lisää. Lopuksi klikkaa "tallenna" tallentaaksesi muutokset olemassa olevaan tietueeseen.

Luodaksesi kokonaan uuden tietueen, valitse "Unohda tuplatietue ja tallenna", ikkunan oikean yläkulman suunnalla.',
  'LBL_HELP_DUPLICATE_TITLE' => 'Huomattiin mahdollinen duplikaatti',
  'LBL_HELP_MORE_INFO' => 'Lisätietoja saa {{{more_info_url}}} {{plural_module_name}}-dokumentaatiosta.{{{more_info_url_close}}}',
  'LBL_HELP_NO_HELP' => 'Ei tietoja',
  'LBL_HELP_PREVIEW' => 'Ohjedashlet tarjoaa spesifejä tietoja liittyen käyttämääsi moduuliin. Dashletissä myös linkki viralliseen dokumentaatioon, joka löytyy sovellusoppaasta.',
  'LBL_HELP_RECORD' => 'Tietuenäkymä näyttää tietueen kaikki tiedot, sekä joitakin tietoja tietueeseen linkitetyistä tietueista.

- Muokkaa tietueen kenttiä klikkaamalla itse kenttää, tai vaihtoehtoisesti ‘Muokkaa’-painiketta.

- Muokkaa linkkejä muihin teitueisiin valitsemalla alavasemmalla oleva paneeli ‘tietonäkymään’.

- Luo ja lue käyttäjäkommentteja ja tietueen historiaa aktiviteettivirrassa. Aktiviteettivirran saat valitsemalla alavasemmalla oleva paneeli ‘aktiviteettivirta’-näkymään.

- Seuraa tai merkkaa tämä tietue suosikiksi käyttämällä tietueen nimen oikealta puolelta löytyviä kuvakkeita.

- Muut toiminnot löytyvät ‘Muokkaa’-painikkeen oikealla puolella olevasta ‘Toiminnot’-valikosta.',
  'LBL_HELP_RECORDS' => 'Moduulin listanäkymä näyttää kaikki tietueet, jotka vastaavat hakukriteerejä ja joihin käyttäjillä on pääsyoikeudet. Listanäkymästä näkee tietueiden perustiedot. Tietueen nimeä klikkaamalla pääsee tietuenäkymään, josta näkee kaikki tiedot.',
  'LBL_HELP_RECORDS_TITLE' => 'Listanäkymän ohje',
  'LBL_HELP_RECORD_TITLE' => 'Tietuenäkymän ohje',
  'LBL_HIDE' => 'Piilota',
  'LBL_HIDE_COLUMNS' => 'Piilota sarakkeet',
  'LBL_HIDE_SHOW' => 'Piilota/Näytä',
  'LBL_HISTORICAL_SUMMARY' => 'Historiallinen yhteenveto',
  'LBL_HISTORICAL_SUMMARY_EMAIL_FROM' => 'Viestin lähettäjä:',
  'LBL_HISTORICAL_SUMMARY_EMAIL_TO' => 'Viestin vastaanottaja:',
  'LBL_HISTORY_DASHLET' => 'Historia',
  'LBL_HISTORY_DASHLET_DESCRIPTION' => 'Historia-dashlet näyttää pidetyt kokoukset, lokiin kirjatut puhelut, ja saadut ja lähetetyt sähköpostit.',
  'LBL_HISTORY_DASHLET_EMAIL_PLURAL' => 'Sähköpostit',
  'LBL_HISTORY_DASHLET_EMAIL_SINGULAR' => 'Sähköposti',
  'LBL_HISTORY_DASHLET_GROUP_BUTTON_LABEL' => 'Tiimin historia',
  'LBL_HISTORY_DASHLET_USER_BUTTON_LABEL' => 'Historiani',
  'LBL_HOME' => 'Etusivu',
  'LBL_HONEYPOT' => 'Jos olet oikea ihminen, älä täytä tätä.',
  'LBL_HOURS' => 'tuntia',
  'LBL_ICON_COLUMN_1' => 'Sarake',
  'LBL_ICON_COLUMN_2' => '2 Saraketta',
  'LBL_ICON_COLUMN_3' => '3 Saraketta',
  'LBL_ID' => 'ID',
  'LBL_ID_FF_ADD' => 'Näytä',
  'LBL_ID_FF_CLEAR' => 'Tyhjennä',
  'LBL_ID_FF_REMOVE' => 'Poista',
  'LBL_ID_FF_SELECT' => 'Valitse',
  'LBL_ID_FF_VCARD' => 'vCard',
  'LBL_IGNORE_DUPLICATE_AND_SAVE' => 'Ohita duplikaatit ja tallenna',
  'LBL_IMAGE' => 'Kuva',
  'LBL_IMAGE_DELETE_CONFIRM' => 'Haluatko varmasti poistaa tämän kuvan?',
  'LBL_IMPORT' => 'Tuo',
  'LBL_IMPORT_SAMPLE_FILE_TEXT' => 'Tämä on esimerkkitiedosto, jossa on tuotavassa tiedostossa odotettavissa olevaa sisältöä.<br />Tiedosto on pilkulla eroteltu .csv -tiedosto, joka käyttää lainausmerkkejä kentän tunnisteena.<br /><br />Tiedoston ylin rivi sisältää kenttien nimet siten kuten näet ne sovelluksessasi.<br />Näitä rivejä käytetään datan kohdentamiseen sovelluksen kenttiin.<br /><br />Huom: Myös tietokantojen nimiä voi käyttää ylimmällä rivillä. Se voi olla hyödyllistä jos käytät phpMyAdminia tai muuta tietokantasovellusta datan hakemiseen.<br />Sarakkeitten järjestys ei ole kriittinen, sillä tuontiprosessi kohdistaa datan oikeisiin kenttiin otsikkorivin avulla.<br /><br /><br />Käyttääksesi tätä tiedostoa pohjana, tee seuraavat:<br />1. Poista esimerkkirivit datasta<br />2. Poista tämä aputeksti, jota juuri nyt luet<br />3. Siirrä oma datasi oikeisiin riveihin ja sarakkeisiin.<br />4. Tallenna tiedosto tunnettuun paikkaan järjestelmässäsi<br />5. Valitse Tuonti Toiminnot-valikosta ja valitse ladattava tiedosto',
  'LBL_IMPORT_STARTED' => 'Tuonti aloitettu:',
  'LBL_IMPORT_VCARD' => 'Tuo vCard',
  'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
  'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Tuo vCard',
  'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Tuo vCard',
  'LBL_INACTIVE_TASKS_DASHLET' => 'Epäaktiiviset tehtävät',
  'LBL_INACTIVE_TASKS_DASHLET_COMPLETED' => 'Valmis',
  'LBL_INACTIVE_TASKS_DASHLET_DEFERRED' => 'Siirretty',
  'LBL_INACTIVE_TASKS_DASHLET_DESCRIPTION' => 'Tehtävät -dashlet näyttää siirretyt ja suoritetut tehtävät.',
  'LBL_INACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL' => 'Tiimin tehtävät',
  'LBL_INACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL' => 'Tehtäväni',
  'LBL_INBOUNDEMAIL_ID' => 'Saapuvan sähköpostin ID',
  'LBL_INCORRECT_PASSWORD' => 'Virhe: virheellinen salasana.',
  'LBL_INFOINLINE' => 'Info',
  'LBL_INSTANCES' => 'Instanssit',
  'LBL_INSTANCE_ACTIVE' => 'Olet jo käyttämässä tätä instanssia!',
  'LBL_INSTANCE_INVITE_SENT' => 'Kutsu lähetetty',
  'LBL_INSTANCE_IN_USE' => 'Instanssi käytössä',
  'LBL_INSTANCE_SWITCH_FAILED' => 'Instanssin vaihto epäonnistui',
  'LBL_INSTANCE_USERS' => 'Instanssin käyttäjät',
  'LBL_INVALID_412_RESPONSE' => 'Sovellusta on rikkomassa epäonnistuva pyyntö (412). Ota yhteyttä tekniseen tukeen.',
  'LBL_INVALID_CREDS' => 'Syöttetty käyttäjänimi/salasana-yhdistelmä on virheellinen. Yritä uudelleen.',
  'LBL_INVALID_CREDS_TITLE' => 'Virheelliset tunnistetiedot',
  'LBL_INVALID_FILE_EXTENSION' => 'Epäkelpo tiedoston pääte',
  'LBL_INVALID_GRANT' => 'Kirjaudu sisään uudelleen.',
  'LBL_INVALID_GRANT_TITLE' => 'Kirjautumissarja vanhentunut.',
  'LBL_INVALID_REQUEST' => 'Pyyntö on epävalidi tai epämuodostunut. Ota yhteyttä tekniseen tukeen.',
  'LBL_INVALID_REQUEST_TITLE' => 'Epävalidi pyyntö',
  'LBL_INVALID_USA_PHONE_FORMAT' => 'Aseta yhdysvaltalainen puhelinnumero numeerisessa muodossa suuntanumeroineen.',
  'LBL_INVITE' => 'Kutsu',
  'LBL_INVITED' => 'Kutsuttu',
  'LBL_INVITEES' => 'Kutsutut',
  'LBL_IS_EMPTY' => 'On tyhjä',
  'LBL_IS_NOT_EMPTY' => 'Ei ole tyhjä',
  'LBL_ITEM_ID' => 'Kohdan ID',
  'LBL_ITEM_SUMMARY' => 'Kohdan tiedot',
  'LBL_JOB_NOTIFICATION_BODY_GENERIC' => 'Ajastettu tehtävä on suoritettu.',
  'LBL_JOB_NOTIFICATION_DOC_LINK_TEXT' => 'Myyntimahdollisuuksien konfiguroinnin dokumentointi',
  'LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_BODY' => 'Tuoterivit -ominaisuus on nyt käytössä Sugar-instanssisasi, ja kaikki myyntimahdollisuudet on prosessoitu. Instanssisi on valmiina käyttämään tuoterivejä. Lisätietoja saa osoitteesta {{doc_url}}<br /><br />Terveisin, SugarCRM',
  'LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_SUBJECT' => 'Tuoterivit-ominaisuus on nyt käytössä Sugar-instanssisasi.',
  'LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_BODY' => 'Sugar-instanssisi Ennusteet-moduuli on nyt valmiina käyttöön. Ennusteita voidaan käyttää myyntimahdollisuuksien kanssa. Olemassaolevat tuoterivi-ennuste-commit -tiedot on poistettu, ja instanssi on valmiina uusille luoduille ja commitoiduille myyntimahdollisuuksille. Lisätietoja tehdyistä muutoksista saa osoitteesta {{doc_url}}<br /><br />Terveisin, SugarCRM',
  'LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_SUBJECT' => 'Ennusteet-moduuli on valmiina käyttämään tuoterivejä Sugar-instanssisasi',
  'LBL_JOB_NOTIFICATION_RLI_NOTE_BODY' => 'Tuoterivit -ominaisuus on otettu pois käytöstä Sugar-instanssistasi, ja kaikki olemassaolevat tuoterivit on prosessoitu. Instanssisi on valmiina käyttämään myyntimahdollisuuksia. Lisätietoja saa osoitteesta {{doc_url}}<br /><br />Terveisin, SugarCRM',
  'LBL_JOB_NOTIFICATION_RLI_NOTE_SUBJECT' => 'Tuoterivit poistettu käytöstä Sugar-instanssisasi',
  'LBL_JOB_NOTIFICATION_SUBJECT_GENERIC' => 'Tehtävä suoritettu',
  'LBL_JS_CALENDAR' => 'Kalenteri',
  'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Lomaketoiminnot - Alt+</strong><br /><b>I</b> = Muokkaa (yksityiskohtanäkymä)<br /><b>U</b> = Kahdenna (yksityiskohtanäkymä)<br /><b>D</b> = Poista (yksityiskohtanäkymä)<br /><b>A</b> = Tallenna (muokkausnäkymä)<br /><b>L</b> = Peruuta (muokkausnäkymä)<br /><br /></p><p><strong>Haku ja navigointi - Alt+</strong><br /><b>7</b> = Ensimmäinen muokkauslomakkeen syötekenttä<br /><b>8</b> = Tarkennettu haku -linkki<br /><b>9</b> = Ensimmäinen hakulomakkeen syötekenttä<br /><b>0</b> = Yhtenäisen haun syöte<br /></p>',
  'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Näppäinlyhenteet',
  'LBL_LANGUAGE' => 'Kieli',
  'LBL_LAST_COMMIT' => 'Viimeisin commit:',
  'LBL_LAST_LOGIN' => 'edellinen sisäänkirjautuminen',
  'LBL_LAST_TOUCHED' => 'Viimeksi koskettu {{relativetime}}, {{date}} klo {{time}}',
  'LBL_LAST_VIEWED' => 'Viimeksi katsottu',
  'LBL_LATER' => 'Myöhemmin',
  'LBL_LEADS' => 'Liidit',
  'LBL_LEARNING_RESOURCES_COMMUNITY_LINK' => 'Yhteisöfoorumit',
  'LBL_LEARNING_RESOURCES_COMMUNITY_TEASER' => 'Ota osaa keskusteluun ja auta ongelmanratkaisussa muiden Sugar-käyttäjien kanssa.',
  'LBL_LEARNING_RESOURCES_DESC' => 'SugarCRM-oppimisresurssit',
  'LBL_LEARNING_RESOURCES_NAME' => 'Oppimisresurssit',
  'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_LINK' => 'Sugar-yliopisto',
  'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_TEASER' => 'Tule Sugar-ekspertiksi päivityskoulutuksella, videoilla, kursseilla, nettiseminaareilla ja sertifioinnilla.',
  'LBL_LEARNING_RESOURCES_SUPPORT_LINK' => 'Dokumentaatio ja tuki',
  'LBL_LEARNING_RESOURCES_SUPPORT_TEASER' => 'Opi, miten Sugar toimii sisältä ja ulkoa.',
  'LBL_LEARNING_RESOURCES_TITLE' => 'Oppimisresurssit',
  'LBL_LEGAL' => 'Laillinen',
  'LBL_LESS' => 'vähemmän',
  'LBL_LIKELY' => 'Todennäköinen',
  'LBL_LIKELY_ADJUSTED' => 'Todennäköinen (oikaistu)',
  'LBL_LINK_ACTIONS' => 'Toiminnot',
  'LBL_LINK_ALL' => 'Kaikki',
  'LBL_LINK_BUTTON' => 'Linkki',
  'LBL_LINK_FROM_REPORT_NO_DATA' => 'Ei linkitettäviä tietueita.',
  'LBL_LINK_FROM_REPORT_SUCCESS' => 'Linkitettiin {{reportCount}} tietuetta.',
  'LBL_LINK_FROM_REPORT_WRONG_MODULE' => 'Valittu raportti ei perustu korrektiin moduulityyppiin.',
  'LBL_LINK_MORE' => 'Lisää',
  'LBL_LINK_NONE' => 'Ei mitään',
  'LBL_LINK_RECORDS' => 'Tietueet',
  'LBL_LINK_SELECT' => 'Valitse',
  'LBL_LIST' => 'Lista',
  'LBL_LISTVIEW' => 'Listanäkymä',
  'LBL_LISTVIEW_ACTIONS' => 'Toiminnot',
  'LBL_LISTVIEW_ALL' => 'Kaikki',
  'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Valitse vähemmän kuin 10 tietuetta jatkaaksi.',
  'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Haluatko päivittää koko listan?',
  'LBL_LISTVIEW_NONE' => 'Ei mitään',
  'LBL_LISTVIEW_NO_RECORDS' => 'Tietoja ei löydy.',
  'LBL_LISTVIEW_NO_SELECTED' => 'Valitse ainakin yksi tietue.',
  'LBL_LISTVIEW_OPTION_CURRENT' => 'Nykyinen sivu',
  'LBL_LISTVIEW_OPTION_ENTIRE' => 'Koko lista',
  'LBL_LISTVIEW_OPTION_SELECTED' => 'Valitut tietueet',
  'LBL_LISTVIEW_SELECTED_CLEAR' => 'Tyhjennä valinnat.',
  'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Valittu:',
  'LBL_LISTVIEW_SELECT_ALL_RECORDS' => 'Valitse kaikki tietueet',
  'LBL_LISTVIEW_SELECT_AND_EDIT' => 'Valitse ja muokkaa',
  'LBL_LISTVIEW_TWO_REQUIRED' => 'Valitse ainakin kaksi tietuetta jatkaaksesi.',
  'LBL_LIST_ACCOUNT_NAME' => 'Asiakkaan nimi',
  'LBL_LIST_ASSIGNED_USER' => 'Vastuuhenkilö',
  'LBL_LIST_CONTACT_NAME' => 'Kontaktit',
  'LBL_LIST_CONTACT_ROLE' => 'Rooli',
  'LBL_LIST_DATE_ENTERED' => 'Luontipäivä',
  'LBL_LIST_EMAIL' => 'Sähköposti',
  'LBL_LIST_NAME' => 'Nimi',
  'LBL_LIST_OF' => '/',
  'LBL_LIST_PHONE' => 'Puhelin',
  'LBL_LIST_RELATED_TO' => 'Liittyy',
  'LBL_LIST_REMOVE_EMAIL_INFO' => 'Tietueeseen, jota muokkaat, tuli uusi sähköpostiosoite. Se on nyt ensisijainen osoite, ja on lisätty alle.',
  'LBL_LIST_TEAM' => 'Tiimi',
  'LBL_LIST_USER_NAME' => 'Käyttäjätunnus',
  'LBL_LOADING' => 'Haetaan tietoja...',
  'LBL_LOADING_FILES' => 'Ladataan dokumenttilistaa. Yritä myöhemmin uudelleen.',
  'LBL_LOADING_LANGUAGE' => 'Ladataan kielipakettia',
  'LBL_LOADING_PAGE' => 'Sivua ladataan, odota...',
  'LBL_LOADING_PREVIEW' => 'Ladataan esikatselua',
  'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Matti',
  'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Virtanen',
  'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Herra',
  'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Myyntijohtaja',
  'LBL_LOGGED_OUT' => 'Sinut on kirjauduttu ulos.',
  'LBL_LOGIN_ADMIN_CALL' => 'Ota yhteyttä järjestelmänvalvojaan.',
  'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Liian monta epäonnistunutta kirjautumisyritystä.',
  'LBL_LOGIN_BUTTON_KEY' => 'L',
  'LBL_LOGIN_BUTTON_LABEL' => 'Kirjaudu sisään',
  'LBL_LOGIN_BUTTON_TITLE' => 'Kirjaudu sisään',
  'LBL_LOGIN_FORGOT_PASSWORD' => 'Unohtuiko salasana?',
  'LBL_LOGIN_FORM_LABEL' => 'Näytä sisäänkirjautumislomake',
  'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Voit yrittää kirjautua uudelleen sisään',
  'LBL_LOGIN_LOGIN_TIME_DAYS' => 'päivässä.',
  'LBL_LOGIN_LOGIN_TIME_HOURS' => 'tunnissa.',
  'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'minuutissa.',
  'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'sekunnissa.',
  'LBL_LOGIN_OPTIONS' => 'Asetukset',
  'LBL_LOGIN_PASSWORD' => 'Salasana',
  'LBL_LOGIN_SUBMIT' => 'Lähetä',
  'LBL_LOGIN_TO_ACCESS' => 'Sinun on kirjauduttava sisään.',
  'LBL_LOGIN_USERNAME' => 'Käyttäjätunnus',
  'LBL_LOGIN_WELCOME_TO' => 'Tervetuloa',
  'LBL_LOGOUT' => 'Kirjaudu ulos',
  'LBL_LOWER_OR' => 'tai',
  'LBL_MAILMERGE' => 'Joukkopostitus:',
  'LBL_MAILMERGE_KEY' => 'M',
  'LBL_MANAGE_SUBSCRIPTIONS' => 'Tilausten hallinta',
  'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Tilausten hallinta kohteelle',
  'LBL_MAP_BUTTON' => 'Map',
  'LBL_MARK_AS_FAVORITES' => 'Merkitse suosikiksi',
  'LBL_MASSUPDATE_DATE' => 'Valitse päivämäärä',
  'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM' => 'Laiton toiminto. Toiminto keskeytetty.',
  'LBL_MASSUPDATE_DELETE_USER_EXISTS' => 'Tiimiä [{0}] ei voi poistaa ennen kuin käyttäjä [{1}] on poistettu.',
  'LBL_MASS_UPDATE' => 'Massapäivitys',
  'LBL_MASS_UPDATE_ADD_FIELD' => 'Lisää kenttä',
  'LBL_MASS_UPDATE_EMPTY_CONFIRM' => 'Olemassa olevat arvot korvataan tyhjillä arvoilla. Haluatko jatkaa?',
  'LBL_MASS_UPDATE_EMPTY_VALUES' => 'Seuraavilla attribuuteilla on tyhjiä arvoja:',
  'LBL_MASS_UPDATE_JOB_QUEUED' => 'Pyyntösi massapäivitystä varten on lisätty jonoon.',
  'LBL_MASS_UPDATE_REMOVE_FIELD' => 'Poista kenttä',
  'LBL_MASS_UPDATE_SUCCESS' => 'Kaikki tietueet päivitetty.',
  'LBL_MAXIMUM_OF' => 'Maksimissaan',
  'LBL_MAX_DASHLETS_REACHED' => 'Ylläpitäjän asettama suurin sallittu dashlet-määrä on saavutettu. Poista jokin dashlet ennen kuin lisäät seuraavan',
  'LBL_MEETING' => 'Tapaaminen',
  'LBL_MEETINGS' => 'Tapaamiset',
  'LBL_MEETINGS_SUBPANEL_TITLE' => 'Kokoukset',
  'LBL_MEETING_GO_BACK' => 'Palaa tapaamiseen',
  'LBL_MEMBERS' => 'Jäsenet',
  'LBL_MEMBER_OF' => 'Jäsen',
  'LBL_MEMORY_USAGE' => 'Muistia käytetty, tavuina',
  'LBL_MERGE' => 'Yhdistä',
  'LBL_MERGE_CONNECTORS' => 'Hae Dataa',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_MERGE_DUPLICATES' => 'Yhdistä duplikaatit',
  'LBL_MERGE_DUPLICATES_CONFIRM' => 'Tämä toiminto poistaa seuraavat tietueet:',
  'LBL_MERGE_DUPLICATES_FAIL_PROCESS' => 'Liittyvien tietueiden yhdistäminen kesken. Jotkin tietueet jätetty yhdistämättä. Jatketaanko?',
  'LBL_MERGE_DUPLICATES_PROCEED' => 'Haluatko jatkaa?',
  'LBL_MERGE_DUPLICATES_REMOVE' => 'Poistetaanko varmasti tämä tietue yhdistyksestä?',
  'LBL_MERGE_DUPLICATES_REMOVE_TOOLTIP' => 'Poista tietue yhdistyksestä',
  'LBL_MERGE_DUPLICATES_TITLE' => 'Yhdistä liittyvät tietueet',
  'LBL_MERGE_DUPLICATES_WARNING_CLOSE' => 'Liittyvien tietueiden yhdistäminen kesken. Jotkin tietueet jätetty yhdistämättä.',
  'LBL_MERGE_NO_ACCESS' => 'Sinulla ei ole pääsyä tähän toimintoon.',
  'LBL_MERGE_NO_ACCESS_TO_A_FEW_RECORDS' => 'Yhtä tai useampaa tietuetta ei voida poistaa. Nuo tietueet poistettiin yhdistettävästä listasta.',
  'LBL_MERGE_UNSAVED_CHANGES' => 'Aiot muuttaa primääritietuetta tallentamatta tekemiäsi muutoksia. Kaikki muutokset menetetään. Jatketaanko silti?',
  'LBL_MERIDIEM' => 'Keskipäivä',
  'LBL_MESSAGE_BOX_TITLE' => 'Huomautus',
  'LBL_METHOD_NOT_ALLOWED' => 'Sallimaton HTTP-metodi tälle resurssille. Ota yhteyttä tekniseen tukeen.',
  'LBL_METHOD_NOT_ALLOWED_TITLE' => 'Kielletty metodi',
  'LBL_MINUTES' => 'minuuttia',
  'LBL_MISSING_CUSTOM_DELIMITER' => 'Erotinmerkki tulee määritellä.',
  'LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_LINK_TEXT' => 'sähkö­posti­asetuk­sissa',
  'LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_SUBJECT' => 'Puuttuvat SMTP-palvelinasetukset',
  'LBL_MOBILE' => 'Mobiili',
  'LBL_MOBILE_APP_VERSION' => 'Sovelluksen versio',
  'LBL_MOBILE_CHOOSE_DOC' => 'Valitse dokumentti',
  'LBL_MOBILE_CHOOSE_LOCATION' => 'Valitse paikka',
  'LBL_MOBILE_CHOOSE_PHONE' => 'Valitse puhelinnumero',
  'LBL_MOBILE_CHOOSE_RECIPIENT' => 'Valitse vastaanottaja',
  'LBL_MOBILE_CHOOSE_URL' => 'Valitse URL',
  'LBL_MOBILE_DELETE_CONFIRM' => 'Haluatko varmasti poistaa tämän tietueen?',
  'LBL_MOBILE_DESKTOP' => 'Työpöytäversio',
  'LBL_MOBILE_DETAIL_SHOW_LESS' => 'Vähemmän',
  'LBL_MOBILE_DETAIL_SHOW_MORE' => 'Enemmän',
  'LBL_MOBILE_DOC' => 'Dokumentti',
  'LBL_MOBILE_DOWNLOAD_COMPLETED' => 'Lataus päättynyt: {{{this}}}',
  'LBL_MOBILE_DOWNLOAD_FAILED' => 'Lataus epäonnistui
<br />{{{this}}}',
  'LBL_MOBILE_DOWNLOAD_STARTED' => 'Lataus aloitettu: {{{this}}}',
  'LBL_MOBILE_EDIT_REL' => 'Muokkaa suhdetta',
  'LBL_MOBILE_FEEDBACK' => 'Palaute',
  'LBL_MOBILE_LOGING_OUT' => 'Kirjaudutaan ulos, odota...',
  'LBL_MOBILE_LOG_CALL_CONFIRM' => 'Haluaisitko kirjata edellisen puhelusi?',
  'LBL_MOBILE_META_SYNC_FAILED' => 'Ei voida synkronoida palvelimen kanssa.',
  'LBL_MOBILE_META_SYNC_FAILED_RETRY' => 'Ei voida synkronoida palvelimen kanssa. Yritä yydelleen?',
  'LBL_MOBILE_NO_ACTIONS_AVAILABLE' => 'Ei toimintoja saatavilla',
  'LBL_MOBILE_NO_RECORDS' => 'Ei löydetty tietueita',
  'LBL_MOBILE_PRIVACY_TERMS_CONDITIONS' => 'Yksityisyys ja käyttöehdot',
  'LBL_MOBILE_PROCESSING_FILE' => 'Valmistellaan tiedostoa...',
  'LBL_MOBILE_PROCESSING_IMAGE' => 'Valmistellaan kuvaa...',
  'LBL_MOBILE_PTR_PULL' => 'Päivitä vetämällä alas...',
  'LBL_MOBILE_PTR_RELEASE' => 'Irrota päivittääksesi',
  'LBL_MOBILE_RELOGIN_BUTTON' => 'Kirjaudu uudelleen',
  'LBL_MOBILE_SEARCH_TEAMS' => 'Etsi tiimejä...',
  'LBL_MOBILE_SELECT_TEAMS' => 'Valitse tiimit',
  'LBL_MOBILE_SERVER_URL' => 'Palvelimen URL',
  'LBL_MOBILE_SERVER_VERSION' => 'Palvelimen versio',
  'LBL_MOBILE_SHOW_MORE' => 'Näytä enemmän...',
  'LBL_MOBILE_SHOW_MORE_TOP' => 'Näytä enemmän...',
  'LBL_MOBILE_SUPPORT' => 'Tuki',
  'LBL_MOBILE_TUTORIAL_CONTROL_PANEL' => 'Käytä alla olevia nuolia navigoidaksesi tämän valikon pikaesittelyn läpi.',
  'LBL_MOBILE_TUTORIAL_DETAIL_BACK' => 'Palaa edelliselle sivulle.',
  'LBL_MOBILE_TUTORIAL_DETAIL_BACK_TABLET' => 'Takaisin.',
  'LBL_MOBILE_TUTORIAL_DETAIL_CARD' => 'Tietueen tärkeimmät tiedot.',
  'LBL_MOBILE_TUTORIAL_DETAIL_FOLLOW' => 'Seuraa/epäseuraa tietue.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO' => 'Tämä on yksityiskohtasivu.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO_TEXT' => 'Kaikki tiedot -näkymä avautuu näytön oikealta laidalta.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO_TITLE' => 'Kaikki tiedot -näkymä',
  'LBL_MOBILE_TUTORIAL_DETAIL_RECORD_ACTIONS' => 'Tietueen toiminnot.',
  'LBL_MOBILE_TUTORIAL_DETAIL_RELATE_LINK' => 'Klikkaa avataksesi liittyvän tietueen.',
  'LBL_MOBILE_TUTORIAL_DETAIL_RIGHT_ACTION' => 'Näe lisätietoja tietueesta tai muokkaa tietuetta.',
  'LBL_MOBILE_TUTORIAL_DETAIL_SHOW_MORE' => 'Klikkaa avataksesi kaikki tietueen tiedot.',
  'LBL_MOBILE_TUTORIAL_HOME_CREATE' => 'Näkymäkohtaiset toiminnot.',
  'LBL_MOBILE_TUTORIAL_HOME_END' => 'Nauti uusista toiminnoista!',
  'LBL_MOBILE_TUTORIAL_HOME_FAVORITES_BTN' => 'Suosikkitietueet saat suodattamalla listan.',
  'LBL_MOBILE_TUTORIAL_HOME_FAVORITES_ICON' => 'Merkkaa suosikkitietue.',
  'LBL_MOBILE_TUTORIAL_HOME_GRIP' => 'Tietueen toiminnot.',
  'LBL_MOBILE_TUTORIAL_HOME_INTRO' => '{{{brandName}}} toivottaa sinut tervetulleeksi.<br /><br />Seuraavaki näytämme muutaman uuden ominaisuuden...',
  'LBL_MOBILE_TUTORIAL_HOME_LOGO' => 'Päävalikon navigaatio.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_DESKTOP' => 'Avaa Sugar web-selaimessa.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO' => 'Tämä on kotivalikko.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO_TEXT' => 'Päävalikko avautuu näytön vasemmalta laidalta.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO_TITLE' => 'Päävalikkonäkymä.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_LOGO' => 'Sulje kotivalikko.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_MODULES' => 'Näytä tietty moduuli.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_PROFILE' => 'Näe profiilisi.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_SETTINGS' => 'Kustomoi sovellus.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_TOUR' => 'Pääset esittelyyn milloin vain.',
  'LBL_MOBILE_TUTORIAL_HOME_MY_ITEMS_BTN' => 'Sinulle määrätyt tietueet saat suodattamalla listan.',
  'LBL_MOBILE_TUTORIAL_HOME_RECENT' => 'Viimeksi muutetut tietueet.',
  'LBL_MOBILE_TUTORIAL_HOME_SEARCH' => 'Tietueiden globaali haku.',
  'LBL_MOBILE_TUTORIAL_HOME_UPCOMING' => 'Tänään alkavat tulevat tapahtumat.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_ACTIONS' => 'Valitse suoritettava toiminto.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_CREATE' => 'Sulje plus-valikko.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_INTRO' => 'Tämä on plus-valikko.',
  'LBL_MOBILE_UNLINK_CONFIRM' => 'Haluatko varmasti epälinkittää tämän tietueen?',
  'LBL_MOBILE_UPLOAD_IN_PROGRESS' => 'Uploadataan tiedostoa...',
  'LBL_MOBILE_UPLOAD_SUCCESS' => 'Tiedosto uploadattu.',
  'LBL_MOBILE_WAIT' => 'Odota...',
  'LBL_MODIFIED' => 'Muokannut',
  'LBL_MODIFIED_BY_USER' => 'Muokannut',
  'LBL_MODIFIED_ID' => 'Muokkaajan ID',
  'LBL_MODIFIED_NAME' => 'Muokkaajan nimi',
  'LBL_MODIFIED_USER' => 'Käyttäjä muokannut',
  'LBL_MODIFY_CURRENT_SEARCH' => 'Muokkaa nykyistä hakua',
  'LBL_MODULE' => 'Moduuli',
  'LBL_MODULE_ALL' => 'Kaikki',
  'LBL_MODULE_ATTACHMENTS_TITLE' => '{{module}} liitteet',
  'LBL_MODULE_FILTER' => 'Suodata',
  'LBL_MODULE_NAME' => 'Moduulin nimi',
  'LBL_MODULE_TYPE' => 'Tyyppi',
  'LBL_MONITOR_ID' => 'Monitorin Id',
  'LBL_MONTH_TIMEPERIOD_FORMAT' => '{0}',
  'LBL_MORE' => 'enemmän?',
  'LBL_MOREDETAIL' => 'Tarkempia tietoja',
  'LBL_MORE_ACTION' => 'Enemmän toimintoja',
  'LBL_MORE_HISTORY' => 'Enemmän historiaa...',
  'LBL_MORE_MODULES' => 'Enemmän moduuleja',
  'LBL_MY_ACCOUNT' => 'Omat tiedot',
  'LBL_MY_AREA_LINKS' => 'Linkit:',
  'LBL_NAME' => 'Nimi',
  'LBL_NAVIGATE_TO_REPORTS' => 'Olet siirtymässä raportit-moduuliin. Dashlettiin tehtyjä muutoksia ei tallenneta. Jatketaanko silti?',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => 'Luo',
  'LBL_NEW_BUTTON_TITLE' => 'Uusi',
  'LBL_NEW_PAGE_FEEDBACK' => 'Olet luonut uuden sivun. Voit lisätä uutta sisältöä Lisää Dashlet -valikon avulla.',
  'LBL_NEW_PASSWORD1' => 'Uusi salasana',
  'LBL_NEW_PASSWORD2' => 'Vahvista salasana',
  'LBL_NEW_USER_PASSWORD_1' => 'Salasana on vaihdettu.',
  'LBL_NEW_WEB_VERSION' => 'SugarCRM Mobilesta on saatavilla uusi versio. Päivitetäänkö?',
  'LBL_NEXT_BUTTON_LABEL' => 'Seuraava',
  'LBL_NEXT_FRIDAY' => 'ensi perjantaina',
  'LBL_NEXT_MONDAY' => 'ensi maanantaina',
  'LBL_NEXT_MONTH' => 'Seuraava kuukausi',
  'LBL_NEXT_TIMEPERIOD' => 'Seuraava ajanjakso',
  'LBL_NEXT_WEEK' => 'Seuraavalla viikolla',
  'LBL_NEXT_YEAR' => 'Seuraava vuosi',
  'LBL_NO' => 'Ei',
  'LBL_NONE' => '-tyhjä-',
  'LBL_NOTES' => 'Lisämerkinnät',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Muistiinpanot',
  'LBL_NOTIFICATIONS' => 'Huomautukset',
  'LBL_NOT_AUTHORIZED' => 'Sinulla ei ole oikeutta nähdä tätä tietuetta.',
  'LBL_NOT_AVAILABLE' => 'ei saatavilla',
  'LBL_NO_ACCESS' => '(Ei pääsyä)',
  'LBL_NO_ACCESS_LOWER' => 'Käyttäjällä ei ole pääsyä tietueeseen',
  'LBL_NO_ACTION' => 'Nimellä ei ole toimintoja',
  'LBL_NO_DATA' => 'Tietoja ei ole',
  'LBL_NO_DATA_AVAILABLE' => 'Tietoja ei löydy.',
  'LBL_NO_FIELD_ACCESS' => 'Ei pääsyä',
  'LBL_NO_FLASH_PLAYER' => 'Flash on joko pois päältä tai käytössä on liian vanha versio.<br /><a href=\'http://www.adobe.com/go/getflashplayer/\'>Lataa Flash</a> tai laita se päälle.',
  'LBL_NO_IMAGE' => 'Ei kuvaa',
  'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Ei kenttiä joille voisi tehdä massapäivitysoperaatioita',
  'LBL_NO_PDF_TEMPLATE' => 'PDF-mallia ei löytynyt',
  'LBL_NO_RECORDS_FOUND' => '- 0 tallennetta löytynyt -',
  'LBL_NUMBER_OF_COLUMNS' => 'Napsauta kuvaketta valitaksesi sarakkeiden lukumäärän',
  'LBL_OBJECT_IMAGE' => 'objekti kuva',
  'LBL_OC_DEFAULT_STATUS' => 'Epäaktiivinen',
  'LBL_OC_STATUS' => 'Offline clientin status',
  'LBL_OC_STATUS_TEXT' => 'Indikoi, voiko käyttäjä käyttää offline clientia.',
  'LBL_OFFLINE_CLEAN_UP_PROMPT' => 'Tämä toiminto poistaa tietueita joita et ole käyttänyt vähään aikaan. Jatketaanko?',
  'LBL_OFFLINE_CLEAR_DB' => 'Tyhjennä tietokanta...',
  'LBL_OFFLINE_CLEAR_DB_PROMPT' => 'Poistetaanko varmasti kaikki tietueet paikallisesta tietokannasta?',
  'LBL_OFFLINE_COMPACT_DB' => 'Tiivistä tietokanta...',
  'LBL_OFFLINE_DB_CLEANING_COMPLETED' => 'Tyhjennys valmis',
  'LBL_OFFLINE_DB_CLEANING_IN_PROGRESS' => 'Tyhjennetään tietovarastoa...',
  'LBL_OFFLINE_DB_SIZE' => 'Tietokannan koko',
  'LBL_OFFLINE_DELETED' => 'Tietuetta ei löytynyt.',
  'LBL_OFFLINE_DELETED_RELATED' => 'Ei löydetty linkitettyä tietuetta. Tietue saatettiin poistaa tai linkitys purkaa.',
  'LBL_OFFLINE_DISABLED' => 'Offline-tila pois käytöstä',
  'LBL_OFFLINE_DISABLE_PROMPT' => 'Otetaanko pois tuki offline-tilalle? Kaikki synkronointia odottavat muutokset perutaan.',
  'LBL_OFFLINE_ENABLED' => 'Offline-tila käytössä',
  'LBL_OFFLINE_ENABLE_PROMPT' => 'Otetaanko offline-tilan tuki käyttöön?',
  'LBL_OFFLINE_LAST_SYNC_TS' => 'Viimeisin synkronointiyritys: {{ts}}',
  'LBL_OFFLINE_MERGE_DATA_CONFIRM' => 'Joku on muokannut samaa tietuetta palvelimella. Vahvista muutosten automaattinen yhdistys, tai kiellä (kieltäminen poistaa muutokset).',
  'LBL_OFFLINE_MODE' => 'Offline mode',
  'LBL_OFFLINE_PREFETCHING' => 'Ladataan tietueita...',
  'LBL_OFFLINE_PREFETCHING_EST_TIME' => 'Arvioitu jäljellä oleva aika: {{estimatedTime}} sek.',
  'LBL_OFFLINE_PREFETCHING_MODULE' => 'Ladataan tietuetyyppiä ‘{{module}}’: {{progressValue}}',
  'LBL_OFFLINE_PREFETCHING_MODULE_COMPLETE' => 'Moduulin {{module}} lataus valmis',
  'LBL_OFFLINE_PREFETCH_ACTION' => 'Lataa tietueesi...',
  'LBL_OFFLINE_PREFETCH_ERROR' => 'Virhe ladattaessa tietueita',
  'LBL_OFFLINE_PREFETCH_FIRST_PROMPT' => 'Voit ladata vastuutietueesi, sekä suosikkitietueesi että seuraamasi tietueet, siten että voit käyttää niitä ilman internet-yhteyttä. Lataaminen saattaa kuitenkin kestää jonkin aikaa. Suositellaan nopeaa yhteyttä. Voit ladata tietueet myöhemmin valitsemalla Päävalikko > Offline. Ladataanko tietueet nyt?',
  'LBL_OFFLINE_PREFETCH_PROMPT' => 'Voit ladata vastuutietueesi, sekä suosikkitietueesi että seuraamasi tietueet, siten että voit käyttää niitä ilman internet-yhteyttä. Lataaminen saattaa kuitenkin kestää jonkin aikaa. Suositellaan nopeaa yhteyttä. Jatketaanko?',
  'LBL_OFFLINE_PREFETCH_SUCCESS' => 'Tietueiten lataus onnistui.',
  'LBL_OFFLINE_RECORDS_PER_MODULE' => 'Tietueita per moduuli',
  'LBL_OFFLINE_ROLLBACK_FAILED' => 'Kumous epäonnistui.',
  'LBL_OFFLINE_ROLLBACK_PROMPT' => 'Kumotaanko tämä muutos?',
  'LBL_OFFLINE_ROLLBACK_SUCCESS' => 'Kumous suoritettu.',
  'LBL_OFFLINE_SERVER_FETCH' => 'Haetaan palvelimelta...',
  'LBL_OFFLINE_SETTINGS' => 'Debug-asetukset',
  'LBL_OFFLINE_STATS' => 'Tietokannan statistiikka',
  'LBL_OFFLINE_STATUS_BAD_NETWORK' => 'Ei saatu yhteyttä palvelimeen.',
  'LBL_OFFLINE_STATUS_NO_PENDING_TX' => 'Ei synkronointia odottavia muutoksia.',
  'LBL_OFFLINE_STATUS_OFFLINE' => 'Kone on offline-tilassa.',
  'LBL_OFFLINE_STATUS_ONLINE' => 'Kone on online-tilassa.',
  'LBL_OFFLINE_STATUS_PENDING_TX' => 'On synkronointia odottavia muutoksia.',
  'LBL_OFFLINE_STATUS_SYNC_FAILED' => 'Viimeisin synkronointiyritys epäonnistui. Katso transaktioloki.',
  'LBL_OFFLINE_SYNC_IN_PROGRESS' => 'Synkronointi käynnissä...',
  'LBL_OFFLINE_TOTAL_RECORDS_COUNT' => 'Tietueiden yhteismäärä',
  'LBL_OFFLINE_TRANSACTION_SYNCED' => 'Transaktio synkronoitu.',
  'LBL_OK' => 'Ok',
  'LBL_OLD_ACCOUNT_LINK' => 'Vanha asiakas',
  'LBL_ONLY_IMAGE_ATTACHMENT' => 'Vain JPG- ja PNG-tyyppisiä kuvatiedostoliitteitä voi upottaa.',
  'LBL_OPENALL_BUTTON_KEY' => 'O',
  'LBL_OPENALL_BUTTON_LABEL' => 'Avaa kaikki',
  'LBL_OPENALL_BUTTON_TITLE' => 'Avaa kaikki',
  'LBL_OPENTO_BUTTON_KEY' => 'T',
  'LBL_OPENTO_BUTTON_LABEL' => 'Avaa kohteeseen:',
  'LBL_OPENTO_BUTTON_TITLE' => 'Avaa kohteeseen:',
  'LBL_OPEN_ITEMS' => 'Avaa kohteet:',
  'LBL_OPERATOR_IN_TEXT' => 'on yksi seuraavista:',
  'LBL_OPERATOR_NOT_IN_TEXT' => 'ei ole yksi seuraavista:',
  'LBL_OPPORTUNITIES' => 'Myyntimahdollisuudet',
  'LBL_OPPORTUNITY' => 'Myyntimahdollisuus',
  'LBL_OPPORTUNITY_METRICS' => 'Myyntimahdollisuusmittarit',
  'LBL_OPPORTUNITY_NAME' => 'Mahdollisuuden nimi:',
  'LBL_OPTIONAL' => 'Valinnainen',
  'LBL_OPTIONS' => 'Valinnat',
  'LBL_OPT_OUT_FLAG_PRIMARY' => 'Älä käytä ensisijaista sähköpostiosoitetta',
  'LBL_OR' => 'TAI',
  'LBL_ORG_CHART' => 'Organisaatiokaavio',
  'LBL_ORG_CHART_DESC' => 'Näyttää organisaatiosi henkilöstön rakenteen.',
  'LBL_ORG_CHART_TOOLTIP_NODES' => 'Näytä kaikki noodit',
  'LBL_ORG_CHART_TOOLTIP_TOGGLE' => 'Vaihda orientaatiota',
  'LBL_ORG_CHART_TOOLTIP_ZOOM' => 'Suurenna sopivaksi',
  'LBL_OUTBOUND_EMAIL_ADD_SERVER' => 'Lisää palvelin...',
  'LBL_OVERDUE' => 'Myöhässä',
  'LBL_OVERWRITE_POPULATED_DATA_FROM' => 'Täältä:',
  'LBL_OVERWRITE_POPULATED_DATA_TO' => 'Tänne:',
  'LBL_PAGE_NAME' => 'Sivun nimi',
  'LBL_PANEL_ADVANCED' => 'Lisätietoja',
  'LBL_PANEL_ASSIGNMENT' => 'Muu',
  'LBL_PANEL_BODY' => 'Yleiskatsaus',
  'LBL_PANEL_DEFAULT' => 'Oletus',
  'LBL_PARENT_TYPE' => 'Isännän tyyppi',
  'LBL_PASSWORD' => 'Salasana',
  'LBL_PASSWORD_REQUEST_ERROR' => 'Käyttäjänimesi ja sähköpostiosoitteesi haku epäonnistui.',
  'LBL_PASSWORD_REQUEST_SENT' => 'Pyyntösi on lähetetty.',
  'LBL_PASSWORD_UPDATE_GENERIC_ISSUE' => 'Virhe: tapahtui virhe päivitettäessä käyttäjän salasanaa.',
  'LBL_PA_PRODEF_HAS_PENDING_PROCESSES' => 'Et voi poistaa tätä prosessimääritelmää koska on olemassa odottavia prosesseja juoksemassa.',
  'LBL_PDF_EMAIL' => 'Lähetä PDF',
  'LBL_PDF_VIEW' => 'Lataa PDF',
  'LBL_PENDING_NOTIFICATIONS' => 'Huomautukset',
  'LBL_PERCENTAGE_SYMBOL' => '%',
  'LBL_PHASE' => 'Vaihe',
  'LBL_PICTURE_FILE' => 'Avatar',
  'LBL_PLANNED_ACTIVITIES_DASHLET' => 'Suunniteltut aktiviteetit',
  'LBL_PLANNED_ACTIVITIES_DASHLET_CONFIRM_CLOSE' => 'Haluatko varmasti merkitä {0} suljetuksi?',
  'LBL_PLANNED_ACTIVITIES_DASHLET_DESCRIPTION' => 'Suunniteltut aktiviteetit -dashlet näyttää suunnitellut kokoukset ja puhelut.',
  'LBL_PLANNED_ACTIVITIES_DASHLET_FUTURE_BUTTON_LABEL' => 'Tulevaisuus',
  'LBL_PLANNED_ACTIVITIES_DASHLET_GROUP_BUTTON_LABEL' => 'Tiimihistoria',
  'LBL_PLANNED_ACTIVITIES_DASHLET_HELD_ACTIVITY' => 'Pidetty',
  'LBL_PLANNED_ACTIVITIES_DASHLET_TODAY_BUTTON_LABEL' => 'Tänään',
  'LBL_PLANNED_ACTIVITIES_DASHLET_USER_BUTTON_LABEL' => 'Historia',
  'LBL_PLEASE_SELECT' => 'Valitse',
  'LBL_PLUGINS_DESC' => 'Lue plugineiden ominaisuuksista <a href=\'https://www.sugarcrm.com/crm/support/documentation/SugarPlugIns\'>plugin-dokumentaatiossa</a>.',
  'LBL_PLUGINS_LOTUS_TITLE' => 'Sugar-pluginit Lotus Notes&trade;:lle',
  'LBL_PLUGINS_TITLE' => 'Sugar-plugineita Microsoft Office&trade;:lle',
  'LBL_PLUGIN_EXCEL_DESC' => 'Integroi Sugar laskentataulukoilla parantaaksesi mittausten (<i>key metrics</i>) analyysiä.',
  'LBL_PLUGIN_EXCEL_NAME' => 'Sugar plugin Excelille',
  'LBL_PLUGIN_LOTUS_DESC' => 'Integroi Sugar Lotus Notesiin.',
  'LBL_PLUGIN_LOTUS_NAME' => 'Sugar plugin Lotus Notesille',
  'LBL_PLUGIN_OUTLOOK_DESC' => 'Integroi Sugarin sähköpostit ja kalenteritiedot Microsoft Outlookin kanssa.',
  'LBL_PLUGIN_OUTLOOK_NAME' => 'Sugar plugin Outlookille',
  'LBL_PLUGIN_WORD_DESC' => 'Populoi automaattisesti SugarCRM-dataa Microsoft Word -dokumentteihin.',
  'LBL_PLUGIN_WORD_NAME' => 'Sugar plugin Wordille',
  'LBL_PLUS_INLINE' => 'Lisää',
  'LBL_PMSE_ALL_PROCESSES_LABEL' => 'Kaikki prosessit',
  'LBL_PMSE_BUSINESS_RULES_DASHLET' => 'Prosessiyrityssäännöt',
  'LBL_PMSE_BUSINESS_RULES_DASHLET_DESCRIPTION' => 'Prosessiyrityssäännöt-dashlet näyttää mallit, joita voidaan käyttää prosessikirjoittajassa.',
  'LBL_PMSE_CANCELLED_STATUS' => 'Peruutettu',
  'LBL_PMSE_COMPLETED_STATUS' => 'Valmis',
  'LBL_PMSE_EMAIL_TEMPLATES_DASHLET' => 'Prosessisähköpostimallit',
  'LBL_PMSE_EMAIL_TEMPLATES_DASHLET_DESCRIPTION' => 'Prosessisähköpostimallit -dashlet näyttää mallit, joita voidaan käyttää prosessikirjoittajassa.',
  'LBL_PMSE_ERROR_STATUS' => 'Virhe',
  'LBL_PMSE_IN_PROGESS_STATUS' => 'Käynnissä',
  'LBL_PMSE_PROCESSES_DASHLET' => 'Prosessit',
  'LBL_PMSE_PROCESSES_DASHLET_DESCRIPTION' => 'Prosessit-dashlet näyttää mallit, joita voidaan käyttää prosesskirjoittajassa',
  'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET' => 'Prosessimääritelmät',
  'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET_DESCRIPTION' => 'Prosessimääritelmät-dashlet näyttää mallit, joita voidaan käyttää prosessikirjoittajassa.',
  'LBL_PMSE_PROCESS_STATUS_CHART_DESCRIPTION' => 'Prosessistatuskuvaus',
  'LBL_PMSE_PROCESS_STATUS_CHART_NAME' => 'Prosessistatusyhteenveto',
  'LBL_PMSE_PROCESS_USERS_CHART_DESCRIPTION' => 'Odottavat aktiviteetit prosesseittain',
  'LBL_PMSE_PROCESS_USERS_CHART_NAME' => 'Odottavat aktiviteetit prosesseittain.',
  'LBL_PMSE_PROCESS_USERS_CHART_NAME_RECORD' => 'Odottavat aktiviteetit',
  'LBL_PMSE_SETTINGS' => 'Prosessikirjoittajan asetukset',
  'LBL_PMSE_TERMINATED_STATUS' => 'Lopetettu',
  'LBL_PORTAL_AUTH_FAILED' => 'Client-autentikointi epäonnistui.',
  'LBL_PORTAL_AUTH_FAILED_TITLE' => 'Epävalidi client',
  'LBL_PORTAL_ERROR' => 'Virhe',
  'LBL_PORTAL_INVALID_CREDS' => 'Syöttetty käyttäjänimi/salasana-yhdistelmä on virheellinen. Yritä uudelleen.',
  'LBL_PORTAL_INVALID_CREDS_TITLE' => 'Virheelliset tunnistetiedot',
  'LBL_PORTAL_INVALID_GRANT' => 'Kirjaudu sisään uudelleen.',
  'LBL_PORTAL_INVALID_GRANT_TITLE' => 'Kirjautumissarja umpeutunut.',
  'LBL_PORTAL_INVALID_REQUEST' => 'Tehty pyyntö on epävalidi tai epämuodostunut. Ota yhteyttä tekniseen tukeen.',
  'LBL_PORTAL_INVALID_REQUEST_TITLE' => 'Epävalidi pyyntö',
  'LBL_PORTAL_LOADING' => 'Ladataan',
  'LBL_PORTAL_LOGIN_FORGOTPASSWORD' => 'Sinun pitää ottaa yhteyttä Sugar-järjestelmänvalvojaan palauttaaksesi salasanasi.',
  'LBL_PORTAL_LOGIN_PASSWORD' => 'Salasana',
  'LBL_PORTAL_LOGIN_USERNAME' => 'Käyttäjätunnus',
  'LBL_PORTAL_METHOD_NOT_ALLOWED' => 'Sallimaton HTTP-metodi tälle resurssille. Ota yhteyttä tekniseen tukeen.',
  'LBL_PORTAL_METHOD_NOT_ALLOWED_TITLE' => 'Kielletty metodi',
  'LBL_PORTAL_MIN_MODULES' => 'Käytössä pitää olla ainakin ‘Palvelupyynnöt’, ‘Bugit’ tai ‘Tietämyskanta’ -moduuli päällä, jotta tätä applikaatiota voi käyttää.',
  'LBL_PORTAL_NOT_ENABLED_MSG' => 'Tämä toiminto ei ole tällä hetkellä saatavilla.',
  'LBL_PORTAL_OFFLINE' => 'Sovellus ei ole saatavilla tällä hetkellä. Ota yhteyttä sivuston järjestelmänvalvojaan.',
  'LBL_PORTAL_PAGE_NOT_AVAIL' => 'Sivu ei ole saatavilla',
  'LBL_PORTAL_PRECONDITION_MISSING' => 'Vika pyynnössä, tai puuttuva (tai epävalidi) parametri. Ota yhteyttä tekniseen tukeen.',
  'LBL_PORTAL_PRECONDITION_MISSING_TITLE' => 'Virhe:',
  'LBL_PORTAL_REQUEST_TIMEOUT' => 'Pyyntö timeouttasi',
  'LBL_PORTAL_REQUEST_TIMEOUT_TITLE' => 'Pyyntö timeout',
  'LBL_PORTAL_RESOURCE_UNAVAILABLE' => 'Resurssi ei ole saatavilla.',
  'LBL_PORTAL_RESOURCE_UNAVAILABLE_TITLE' => 'Kielletty',
  'LBL_PORTAL_ROUTE_ERROR' => 'Ongelma ladattaessa moduulia. Yritä uudelleen pian tai ota yhteyttä tekniseen tukeen.',
  'LBL_PORTAL_SAVING' => 'Tallennetaan',
  'LBL_PORTAL_SEARCH' => 'Etsi nimen tai numeron mukaan',
  'LBL_PORTAL_SEARCH_RESULTS_TITLE' => 'Katso kyselyn ‘{query}’ tulokset',
  'LBL_PORTAL_SIGNUP' => 'Asiakaspalvelun edustaja ottaa sinuun pian yhteyttä vahvistaaksesi tilisi.',
  'LBL_PORTAL_SIGNUP_COMPANY' => 'Yritys',
  'LBL_PORTAL_SIGNUP_COUNTRY' => 'Maa',
  'LBL_PORTAL_SIGNUP_EMAIL' => 'Sähköposti',
  'LBL_PORTAL_SIGNUP_FIRST_NAME' => 'Etunimi',
  'LBL_PORTAL_SIGNUP_JOBTITLE' => 'Työnimike (valinnainen)',
  'LBL_PORTAL_SIGNUP_LAST_NAME' => 'Sukunimi',
  'LBL_PORTAL_SIGNUP_PHONE' => '### ####### (valinnainen)',
  'LBL_PORTAL_SIGNUP_PROCESS' => 'Rekisteröidy',
  'LBL_PORTAL_SIGNUP_STATE' => 'Osavaltio',
  'LBL_PORTAL_SIGNUP_TITLE' => 'Kiitos rekisteröinnistä!',
  'LBL_PORTAL_THEME' => 'Portal-teema',
  'LBL_PORTAL_TOUR_RECORD_ADD_NOTE' => 'Klikkaa tästä lisätäksesi muistiinpanon tähän tietueeseen.',
  'LBL_PORTAL_TOUR_RECORD_DETAILS' => 'Tietuenäkymästä näet tietueen yksityiskohdat.',
  'LBL_PORTAL_TOUR_RECORD_NOTES' => 'Muistiinpanoilla voit tehdä yhteistyötä muiden portalin käyttäjien ja tukihenkilöiden kanssa.',
  'LBL_PORTAL_TOUR_RECORD_VIEW_NOTE' => 'Klikkaa näitä kuvakkeita nähdäksesi liitettyjen muistiinpanojen yksityiskohdat.',
  'LBL_PORTAL_UNAUTHORIZED' => 'Vaikuttaa siltä, että sinulla ei ole oikeuksia tähän resurssiin.',
  'LBL_PORTAL_UNAUTHORIZED_TITLE' => 'Pääsy estetty',
  'LBL_PORTAL_WELCOME_INFO' => 'Sugar Portal on arkkitehtuuri, joka tarjoaa reaaliaikaisen kuvan palvelupyynnöistä, bugeista ja uutiskirjeistä asiakkaille. Tämä on ulkopuolinen rajapinta Sugariin, jota voi käyttää millä tahansa verkkosivustolla. Tulevissa versioissa tulee olemaan lisää asiakkaan itsepalveluominaisuuksia kuten projektinhallintaa ja foorumeita.',
  'LBL_PORTAL_WELCOME_TITLE' => 'Sugar Portal 5.1.0 - Tervetuloa',
  'LBL_POSTAL_CODE' => 'Postinumero:',
  'LBL_POWERED_BY_SUGARCRM' => 'Pohjalla SugarCRM',
  'LBL_PRECONDITION_MISSING' => 'Vika pyynnössä, tai puuttuva (tai epävalidi) parametri. Ota yhteyttä tekniseen tukeen.',
  'LBL_PRECONDITION_MISSING_TITLE' => 'Virhe:',
  'LBL_PREFERRED_LANGUAGE' => 'Kielipreferenssi:',
  'LBL_PREVIEW' => 'Esikatsele',
  'LBL_PREVIEW_BWC_TOOLTIP' => 'Vanhanaikaisia moduuleja ei voida esikatsella',
  'LBL_PREVIEW_DISABLED_ATTACHMENT' => 'Esikatselu pois käytöstä: ei dataa saatavilla',
  'LBL_PREVIEW_DISABLED_DELETED_OR_NO_ACCESS' => 'Esikatselu pois käytöstä: tietue poistettu, tai ei pääsyä tietueeseen',
  'LBL_PREVIEW_DISABLED_NO_ACCESS' => 'Esikatselu pois käytöstä: ei pääsyä tietueeseen',
  'LBL_PREVIEW_DISABLED_NO_RECORD' => 'Esikatselu pois käytöstä: tietoja ei löydetty.',
  'LBL_PREVIEW_DISABLED_SAME_RECORD' => 'Esikatselu pois käytöstä: samassa näkymässä kuin tämänhetkinen tietue',
  'LBL_PREVIOUS_CURRENT_NEXT_TIMEPERIODS' => 'Edellinen,Nykyinen,Seuraava',
  'LBL_PREVIOUS_TIMEPERIOD' => 'Edellinen ajanjakso',
  'LBL_PRIMARY_ADDRESS' => 'Ensisijainen osoite:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Kaupunki:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Maa:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postinumero:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Osavaltio:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Katuosoite:',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Katuosoite 2:',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Katuosoite 3:',
  'LBL_PRINT' => 'Tulosta',
  'LBL_PROCESSING_REQUEST' => 'Suoritetaan...',
  'LBL_PRODUCTS' => 'Syötä nimikkeet tuotekuvastoon',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Tarjotut tuoterivit',
  'LBL_PRODUCT_BUNDLES' => 'Tuotepaketit',
  'LBL_PRODUCT_TEMPLATES' => 'Tuotemallit',
  'LBL_PROFILE' => 'Profiili',
  'LBL_PROJECTS' => 'Projektit',
  'LBL_PROJECT_MINUS' => 'Poista',
  'LBL_PROJECT_PLUS' => 'Lisää',
  'LBL_PROJECT_TASKS' => 'Projektitehtävät',
  'LBL_PROSPECTS' => 'Tavoitteet',
  'LBL_PRO_DELETE_CONFIRMATION' => 'Poistetaanko varmasti tämä tietue?',
  'LBL_PRO_DISABLE' => 'Päivitetään',
  'LBL_PRO_DISABLE_CONFIRMATION' => 'Poistetaanko varmasti käytöstä tämä tietue?',
  'LBL_PRO_ENABLE' => 'Päivitetään',
  'LBL_PRO_ENABLE_CONFIRMATION' => 'Otetaanko varmasti käyttöön tämä tietue?',
  'LBL_QUARTER_TIMEPERIOD_FORMAT' => 'Q{0} {1}',
  'LBL_QUERY_CHILD' => 'Validi alikysely',
  'LBL_QUERY_ERROR' => 'Virhe',
  'LBL_QUERY_HASH' => 'SQL hash',
  'LBL_QUERY_VALID' => 'Validi',
  'LBL_QUESTION_MARK' => '?',
  'LBL_QUICKEDIT_NODEFS_NAVIGATION' => 'Navigoidaan?',
  'LBL_QUICK_CREATE_MENU' => 'Pikaluontivalikko',
  'LBL_QUICK_CREATE_TITLE' => 'Pikaluonti',
  'LBL_QUOTES' => 'Tarjoukset',
  'LBL_QUOTES_SHIP_TO' => 'Tarjoukset lähetetään',
  'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
  'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Uusi myyntimahdollisuus tarjouksen pohjalta',
  'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Uusi myyntimahdollisuus tarjouksen pohjalta',
  'LBL_RECENTLY_UPDATED' => 'Äskettäin pävitetty',
  'LBL_RECENTS' => 'Äskettäiset',
  'LBL_RECOMMENDED_INVITES' => 'Suositellut kutsuttavat',
  'LBL_RECORD_BODY' => 'Käyntikortti',
  'LBL_RECORD_DELETED' => '(Tietue poistettu)',
  'LBL_RECORD_HEADER' => 'Tietueen header',
  'LBL_RECORD_NOT_FOUND' => 'Tietuetta ei löytynyt.',
  'LBL_RECORD_SAVED' => 'Tietue tallennettu.',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Loit tämän tietueen, muttei sinulla ole oikeuksia päästä tähän tietueeseen.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Luotiin {{moduleSingularLower}} ‘<a href=\'#{{buildRoute model=this}}\'>{{full_name}}</a>’.',
  'LBL_RECORD_SHARE_BUTTON' => 'Jaa',
  'LBL_RECORD_SHOWMORE' => 'Näytä enemmän',
  'LBL_REDIRECT_URL' => 'Uudelleenohjaus URL',
  'LBL_REFINE_LIST' => 'Jalosta listaa',
  'LBL_RELATED' => 'Liittyvät',
  'LBL_RELATED_CAMPAIGN' => 'Liittyvä kampanja',
  'LBL_RELATED_CONTACT' => 'Liittyvä kontakti',
  'LBL_RELATED_INFORMATION' => 'Lisätietoja',
  'LBL_RELATED_MODULE' => 'Liittyvä {{{this}}}',
  'LBL_RELATED_MODULE_PLURAL' => 'Liittyvä {{{this}}}',
  'LBL_RELATED_RECORDS' => 'Liittyvät tietueet',
  'LBL_RELATED_RECORD_NOT_FOUND' => 'Liittyvää tietuetta ei löytynyt.',
  'LBL_RELATIONSHIP' => 'Suhde',
  'LBL_RELOAD_PAGE' => '<a href=\'javascript: window.location.reload()\'>Päivitä selainikkuna</a> käyttääksesi dashletia.',
  'LBL_REMINDERS' => 'Muistutukset',
  'LBL_REMINDERS_FINISHED' => 'Valmis!',
  'LBL_REMINDERS_NONE_FOUND' => 'Ei löydetty muistutuksia',
  'LBL_REMINDERS_OVERDUE' => 'Myöhässä',
  'LBL_REMINDERS_UPCOMING' => 'Tulevat',
  'LBL_REMINDER_TITLE' => 'Muistutus',
  'LBL_REMOVE' => 'Poista',
  'LBL_REMOVED_DASHLET' => 'Dashlet poistettu',
  'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Poista kaikki kentät',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Haluatko varmasti poistaa Dashletin?',
  'LBL_REMOVE_DASHLET_ROW_CONFIRM' => 'Poistetaanko rivi varmasti?',
  'LBL_REMOVE_FROM_FAVORITES' => 'Poista suosikeista',
  'LBL_REMOVE_MODULE_ENTRY' => 'Haluatko varmasti poistaa konnektorien integraation tästä moduulista?',
  'LBL_REMOVE_PRIMARY_TEAM_ERROR' => 'Virhe yrittäessä poistaa primääritiimin IDtä [{0}] moduulille [{1}] ID:llä [{2}]',
  'LBL_REMOVING_ATTACHMENT' => 'Poistetaan liitettä ...',
  'LBL_REMOVING_DASHLET' => 'Poistetaan Dashlet ...',
  'LBL_RENAME_PAGE' => 'Nimeä sivu',
  'LBL_REPLACE_BUTTON' => 'Korvaa',
  'LBL_REPORTS_TO' => 'Raportoi henkilölle:',
  'LBL_REPORT_AUTO_REFRESH' => 'Automaattinen päivitys',
  'LBL_REPORT_EDIT' => 'Muokkaa valittua raporttia',
  'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Lkm',
  'LBL_REPORT_SELECT' => 'Valitse raportti',
  'LBL_REQUEST_PASSWORD' => 'Pyydä salasanaa',
  'LBL_REQUEST_PROCESSED' => 'Valmis',
  'LBL_REQUEST_TIMEOUT' => 'Pyyntö kesti liian kauan ja lopetettiin.',
  'LBL_REQUEST_TIMEOUT_TITLE' => 'Pyyntö timeouttasi',
  'LBL_REQUIRED_FIELD' => 'Pakollinen',
  'LBL_REQUIRED_SYMBOL' => '*',
  'LBL_REQUIRED_TITLE' => 'Merkitsee vaadittua kenttää',
  'LBL_RESET' => 'Palauta',
  'LBL_RESET_DEFAULT_VIEW' => 'Palauta oletusnäkymä',
  'LBL_RESET_DEFAULT_WIDTHS' => 'Palauta oletusleveys',
  'LBL_RESET_THEME_LNK' => 'Palauta oletusteema',
  'LBL_RESET_THEME_MODAL_INFO' => 'Aiot poistaa mukautetun teemasi palauttamalla oletusteeman.',
  'LBL_RESET_THEME_PROCESS' => 'Palautetaan oletusteemaa...',
  'LBL_RESOLVE_CONFLICT' => 'Ratkaise konflikti objektille {{name}}',
  'LBL_RESOURCE_UNAVAILABLE' => 'Resurssi ei ole saatavilla.',
  'LBL_RESOURCE_UNAVAILABLE_TITLE' => 'Kielletty',
  'LBL_RESTORE' => 'Palauta alkuperäiseen',
  'LBL_RETRIEVING_PAGE' => 'Noudetaan sivua...',
  'LBL_ROLLBACK_BUTTON' => 'Kumoa',
  'LBL_ROUNDTRIPS' => 'Toimintojen määrä',
  'LBL_ROUTING_ACTIONS_COPY_MAIL' => 'Kopioi sähköposti',
  'LBL_ROUTING_ACTIONS_DELETE_BEAN' => 'Poista Sugar-objekti',
  'LBL_ROUTING_ACTIONS_DELETE_FILE' => 'Poista tiedosto',
  'LBL_ROUTING_ACTIONS_DELETE_MAIL' => 'Poista sähköposti',
  'LBL_ROUTING_ACTIONS_FORWARD' => 'Jatkolähetä sähköposti',
  'LBL_ROUTING_ACTIONS_MARK_FLAGGED' => 'Merkitse sähköposti',
  'LBL_ROUTING_ACTIONS_MARK_READ' => 'Merkitse luetuksi',
  'LBL_ROUTING_ACTIONS_MARK_UNREAD' => 'Merkitse ei-luetuksi',
  'LBL_ROUTING_ACTIONS_MOVE_MAIL' => 'Siirrä sähköposti',
  'LBL_ROUTING_ACTIONS_PEFORM' => 'Tee seuraavat toiminnot',
  'LBL_ROUTING_ACTIONS_REPLY' => 'Vastaa sähköpostiin',
  'LBL_ROUTING_ADD_RULE' => 'Lisää sääntö',
  'LBL_ROUTING_ALL' => 'Kaikki',
  'LBL_ROUTING_ANY' => 'Mikä tahansa',
  'LBL_ROUTING_BREAK' => '-',
  'LBL_ROUTING_BUTTON_CANCEL' => 'Peru',
  'LBL_ROUTING_BUTTON_SAVE' => 'Tallenna sääntö',
  'LBL_ROUTING_CHECK_RULE' => 'Havaittiin virhe:',
  'LBL_ROUTING_CHECK_RULE_DESC' => 'Tarkista kaikki merkityt kentät.',
  'LBL_ROUTING_CONFIRM_DELETE' => 'Haluatko poistaa säännön? Toimintoa ei voi perua.',
  'LBL_ROUTING_FLAGGED' => 'merkki asetettu',
  'LBL_ROUTING_FORM_DESC' => 'Tallennetut säännöt ovat välittömästi aktiivisia.',
  'LBL_ROUTING_FW' => 'FW:',
  'LBL_ROUTING_LIST_TITLE' => 'Säännöt',
  'LBL_ROUTING_MATCH' => 'Jos',
  'LBL_ROUTING_MATCH_2' => 'seuraavat ehdot täyttyvät:',
  'LBL_ROUTING_MATCH_CC_ADDR' => 'Kopio',
  'LBL_ROUTING_MATCH_DESCRIPTION' => 'Tekstisisältö',
  'LBL_ROUTING_MATCH_FROM_ADDR' => 'Lähettäjä',
  'LBL_ROUTING_MATCH_NAME' => 'Aihe',
  'LBL_ROUTING_MATCH_PRIORITY_HIGH' => 'Korkea prioriteetti',
  'LBL_ROUTING_MATCH_PRIORITY_LOW' => 'Alhainen prioriteetti',
  'LBL_ROUTING_MATCH_PRIORITY_NORMAL' => 'Normaali prioriteetti',
  'LBL_ROUTING_MATCH_TO_ADDR' => 'Vastaanottaja',
  'LBL_ROUTING_MATCH_TYPE_MATCH' => 'Sisältää',
  'LBL_ROUTING_MATCH_TYPE_NOT_MATCH' => 'Ei sisällä',
  'LBL_ROUTING_NAME' => 'Säännön nimi',
  'LBL_ROUTING_NEW_NAME' => 'Uusi sääntö',
  'LBL_ROUTING_ONE_MOMENT' => 'Odota...',
  'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS' => 'Alkuperäinen viesti seuraa.',
  'LBL_ROUTING_RE' => 'VS:',
  'LBL_ROUTING_SAVING_RULE' => 'Tallennetaan sääntö',
  'LBL_ROUTING_SUB_DESC' => 'Valitut säännöt ovat aktiivisia. Napsauta nimeä muokataksesi niitä.',
  'LBL_ROUTING_TO' => 'vastaanottaja',
  'LBL_ROUTING_TO_ADDRESS' => 'vastaanottajan osoite',
  'LBL_ROUTING_WITH_TEMPLATE' => 'käytä pohjaa',
  'LBL_RSS_FEED' => 'RSS Syöte',
  'LBL_RSS_FEED_AUTHOR' => 'Kirjoittaja:',
  'LBL_RSS_FEED_DASHLET' => 'RSS Syöte',
  'LBL_RSS_FEED_DASHLET_DESCRIPTION' => 'Pysy jännitteenä lisäämällä ulkoinen RSS- tai blogisyöte.',
  'LBL_RSS_FEED_ENTRIES_COUNT' => 'Näytettävien alkupalojen määrä.',
  'LBL_RSS_FEED_URL' => 'Syötteen URL',
  'LBL_RSS_RECORDS_FOUND' => 'kenttää löytyi',
  'LBL_RUN_COUNT' => 'Kyselyiden määrä',
  'LBL_SAVED' => 'Tallennettu',
  'LBL_SAVED_LAYOUT' => 'Ulkoasu on tallennettu',
  'LBL_SAVED_SEARCH_ERROR' => 'Anna näkymälle nimi.',
  'LBL_SAVED_SEARCH_SHORTCUT' => 'Tallennetut haut',
  'LBL_SAVED_VIEWS' => 'Tallennetut näkymät',
  'LBL_SAVE_AND_CONTINUE' => 'Tallenna ja jatka',
  'LBL_SAVE_AND_CREATE_ANOTHER' => 'Tallenna ja luo uusi',
  'LBL_SAVE_AND_DEPLOY_BTN' => 'Tallenna ja julkaise',
  'LBL_SAVE_AND_SEND_INVITES_BUTTON' => 'Tallenna ja lähetä kutsut',
  'LBL_SAVE_AND_VIEW' => 'Tallenna ja näytä',
  'LBL_SAVE_AS_BUTTON_KEY' => 'A',
  'LBL_SAVE_AS_BUTTON_LABEL' => 'Tallenna nimellä',
  'LBL_SAVE_AS_BUTTON_TITLE' => 'Tallenna nimellä',
  'LBL_SAVE_BUTTON_KEY' => 'S',
  'LBL_SAVE_BUTTON_LABEL' => 'Tallenna',
  'LBL_SAVE_BUTTON_TITLE' => 'Tallenna',
  'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
  'LBL_SAVE_NEW_BUTTON_LABEL' => 'Tallenna ja luo uusi',
  'LBL_SAVE_NEW_BUTTON_TITLE' => 'Tallenna ja luo uusi',
  'LBL_SAVE_OBJECT' => 'Tallenna {0}',
  'LBL_SAVE_THEME_PROCESS' => 'Tallennetaan teemaa...',
  'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Tallenna liidilomake',
  'LBL_SAVING' => 'Tallennetaan',
  'LBL_SAVING_LAYOUT' => 'Tallennetaan ulkoasua...',
  'LBL_SAVING_PAGE_TITLE' => 'Tallennetaan sivun otsikkoa ...',
  'LBL_SCHEDULE_CALL' => 'Uusi puhelinsoitto',
  'LBL_SCHEDULE_MEETING' => 'Uusi tapaaminen',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Aikatauluta kokous',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Aikatauluta kokous',
  'LBL_SEARCH' => 'Etsi',
  'LBL_SEARCHFORM' => 'Hakulomake',
  'LBL_SEARCHING' => 'Etsitään...',
  'LBL_SEARCH_ALL' => '{{{this}}}-haku...',
  'LBL_SEARCH_ALL_MODULES' => 'Etsi kaikki',
  'LBL_SEARCH_ALL_RECORDS' => 'Hae kaikista tietueista...',
  'LBL_SEARCH_AND_SELECT' => 'Hae ja valitse {{module}}',
  'LBL_SEARCH_BUTTON_KEY' => 'Q',
  'LBL_SEARCH_BUTTON_LABEL' => 'Etsi',
  'LBL_SEARCH_BUTTON_TITLE' => 'Etsi',
  'LBL_SEARCH_BY' => 'Hae',
  'LBL_SEARCH_CHARTS' => 'Kaaviot',
  'LBL_SEARCH_CRITERIA' => 'Hakukriteeri',
  'LBL_SEARCH_DROPDOWN_NO' => 'Ei',
  'LBL_SEARCH_DROPDOWN_YES' => 'Kyllä',
  'LBL_SEARCH_EXTERNAL_API' => 'Tiedosto ulkopuolisesta lähteestä',
  'LBL_SEARCH_FOR' => 'Hae:',
  'LBL_SEARCH_FOR_MORE' => 'Hae lisää...',
  'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Sulje',
  'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Monivalintalistat</strong></p><ul><li>Klikkaa listaa valitaksesi solun.</li><li>Ctrl-klikkaa valitaksesi useampia soluja.</li><li>Valitaksesi kaikki solut kahden solun välillä, klikkaa ensimmäistä arvoa ja shift-klikkaa viimeistä solua.</li></ul><p><strong>Tarkemmat haku- ja esitysasetukset</strong><br /><br />Käyttämällä <b>Tallennetut haut ja esitykset</b> vaihtoehtoa, voit tallentaa hakuvaihtoehtoja ja/tai listanäkymän saadaksesi jatkossa nopeasti haluamasi hakutulokset. Voit tallentaa rajoittamattoman määrän kustomoituja hakuja ja layoutteja. Kaikki tallennetut haut näkyvät omalla nimellään Tallennetut haut -listassa niin, että viimeksi ladattu haku on ensimmäisenä listassa.<br /><br />Kustomoidaksesi Listanäkymän layoutin, käytä Piilota sarakkeet ja Näytä sarakkeet -laatikoita valitaksesi, mitkä kentät haluat näyttää hakutuloksissa. Voit esimerkiksi näyttää tai piilottaa yksityiskohtia kuten tallenteen nimen, käyttäjän ja joukon hakutuloksissa. Lisätäksesi sarakkeen Listanäkymään, valitse kenttä Piilota sarakkeet -listasta ja käytä vasemmalle osoittavaa nuolta siirtääksesi sen Näytä sarakkeet -listaan. Poistaaksesi sarakkeen Listanäkymästä, valitse se Näytä sarakkeet -listasta ja käytä oikealle osoittavaa nuolta siirtääksesi sen Piilota sarakkeet -listaan.<br /><br />Jos tallennat layoutin asetukset, voit ladata ne katsoaksesi hakutuloksia kustomoidulla layoutilla.<br /><br />Tallentaaksesi ja päivittääksesi haun tai layoutin:<ol><li>Syötä nimi hakutuloksiin <b>Tallenna haku nimellä</b> kenttään ja paina <b>Save</b>. Nimi näkyy nyt Tallennetut haut -listassa <b>Tyhjennä</b>-napin vieressä.</li><li>Katsoaksesi haun, valitse se Tallennetut haut -listasta. Hakutulokset näytetään Listanäkymässä.</li><li>Päivittääksesi tallennetun haun asetukset, valitse tallennettu haku listasta, syötä uudet hakuparametrit ja layoutin asetukset Kehittynyt haku -kentässä ja klikkaa <b>Päivitä</b>.</li><li>Poistaaksesi tallennetun haun, valitse se Tallennetut haut listasta, klikkaa <b>Delete</b> ja <b>OK</b>.</li></ol>',
  'LBL_SEARCH_HELP_TITLE' => 'Monivalintojen ja tallennettujen hakujen kanssa työskentely',
  'LBL_SEARCH_LOAD_MORE' => 'Lataa lisää',
  'LBL_SEARCH_MODULES' => 'Moduulit',
  'LBL_SEARCH_MORE' => 'lisää',
  'LBL_SEARCH_NO_RESULTS' => 'Ei löydetty tuloksia:',
  'LBL_SEARCH_PARENT_RELATED_ITEM' => 'Haku...',
  'LBL_SEARCH_POPULATE_ONLY' => 'Hae tietoja alla olevan lomakkeen avulla',
  'LBL_SEARCH_REPORT_CHARTS' => 'Raporttikaaviot',
  'LBL_SEARCH_RESULTS' => 'Hakutulokset',
  'LBL_SEARCH_RESULTS_FOUND' => 'hakutulosta löytynyt',
  'LBL_SEARCH_RESULTS_TIME' => 'ms',
  'LBL_SEARCH_SELECT' => 'Valitse...',
  'LBL_SEARCH_SELECT_MODULE' => 'Valitse {{moduleSingular}}...',
  'LBL_SEARCH_TIPS' => 'Paina haku-nappulaa tai paina Enter saadaksesi tarkan tarkan hakuosuman.',
  'LBL_SEARCH_TIPS_2' => 'Paina haku-nappulaa tai paina Enter saadaksesi tarkan hakutuloksen',
  'LBL_SEARCH_TOOLS' => 'Työkalut',
  'LBL_SEARCH_UNAVAILABLE' => 'Haku ei ole saatavilla. Yritä myöhemmin uudelleen.',
  'LBL_SECONDS' => 'Sekuntia aktiivisena',
  'LBL_SEC_AVG' => 'Sekuntien keskiarvo',
  'LBL_SEC_TOTAL' => 'Sekunnit yhteensä',
  'LBL_SEE_ALL' => 'Näytä kaikki',
  'LBL_SELECT_ACTION_LABEL' => 'Valitse toiminto',
  'LBL_SELECT_ALL_TITLE' => 'Valitse kaikki',
  'LBL_SELECT_APPEND_TEAMS' => 'Appendaa tiimeihin',
  'LBL_SELECT_APPEND_VALUES' => 'Liitä arvoja',
  'LBL_SELECT_BUTTON_KEY' => 'T',
  'LBL_SELECT_BUTTON_LABEL' => 'Valitse',
  'LBL_SELECT_BUTTON_TITLE' => 'Valitse',
  'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
  'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Valitse kontakti',
  'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Valitse kontakti',
  'LBL_SELECT_MODULE' => 'Valitse moduuli:',
  'LBL_SELECT_PHOTO' => 'Valitse valokuva',
  'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Valitse raporteista',
  'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Valitse raportit',
  'LBL_SELECT_TEAMS_KEY' => 'Z',
  'LBL_SELECT_TEAMS_LABEL' => 'Lisää Tiimejä',
  'LBL_SELECT_TEAMS_TITLE' => 'Lisää tiimejä',
  'LBL_SELECT_THIS_ROW_TITLE' => 'Valitse tämä rivi',
  'LBL_SELECT_USER_BUTTON_KEY' => 'U',
  'LBL_SELECT_USER_BUTTON_LABEL' => 'Valitse käyttäjä',
  'LBL_SELECT_USER_BUTTON_TITLE' => 'Valitse käyttäjä',
  'LBL_SEND_INVITE' => 'Lähetä kutsu',
  'LBL_SERVER_MEMORY_BYTES' => 'tavua',
  'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Käyttö: - moduuli: {0} - toiminto: {1}',
  'LBL_SERVER_MEMORY_USAGE' => 'Palvelimen muistin käyttö: {0} ({1})',
  'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Palvelimen muistinkäytön maksimi: {0} ({1})',
  'LBL_SERVER_RESPONSE_RESOURCES' => 'Tämän sivun tekemiseen käytetyt resurssit (kysely, tiedostot)',
  'LBL_SERVER_RESPONSE_TIME' => 'Palvelimen vasteaika:',
  'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekuntia.',
  'LBL_SESSION_ID' => 'Istunnon ID',
  'LBL_SETUP_COMPLETE_INFO' => 'Aloita Sugarin käyttö!',
  'LBL_SETUP_PROGRESS' => 'Asennuksen eteneminen',
  'LBL_SETUP_USER_INFO' => 'Määritä käyttäjätietosi',
  'LBL_SETUP_USER_LOCALE_INFO' => 'Aseta aikavyöhykkeesi ja päivämäärä- ja nimiformaatit.',
  'LBL_SET_FONTSIZE' => 'Fontin koko',
  'LBL_SET_NEW_PASSWORD' => 'Syötä uusi salasana',
  'LBL_SHARE_BUTTON_KEY' => 'r',
  'LBL_SHARE_BUTTON_LABEL' => 'Jaa',
  'LBL_SHARE_BUTTON_TITLE' => 'Jaa',
  'LBL_SHARE_COMPANY' => 'Yritys',
  'LBL_SHARE_LINKABLE' => 'Linkitettävä',
  'LBL_SHARE_PRIVATE' => 'Yksityinen',
  'LBL_SHARE_PUBLIC' => 'Julkinen',
  'LBL_SHIPPING_ADDRESS' => 'Toimitusosoite',
  'LBL_SHIPPING_STREET' => 'Katuosoite:',
  'LBL_SHIP_TO_ACCOUNT' => 'Lähetä asiakkaalle',
  'LBL_SHIP_TO_CONTACT' => 'Lähetä kontaktille',
  'LBL_SHORTCUTS' => 'Pikavalinnat',
  'LBL_SHORTCUT_ALERT_CANCEL' => 'Peruuta',
  'LBL_SHORTCUT_ALERT_CONFIRM' => 'Vahvista',
  'LBL_SHORTCUT_CANCEL_INLINE_EDIT' => 'Poistu listansisäisestä muokkauksesta tallentamatta muutoksia',
  'LBL_SHORTCUT_CLOSE_DRAWER' => 'Sulje laatikko',
  'LBL_SHORTCUT_COPY_RECORD' => 'Kopioi tämä tietue',
  'LBL_SHORTCUT_CREATE_RECORD' => 'Luo uusi tietue',
  'LBL_SHORTCUT_EDIT_SELECTED' => 'Muokkaa listan valittua tietuetta',
  'LBL_SHORTCUT_FAVORITE_RECORD' => 'Merkitse tietue suosikiksi',
  'LBL_SHORTCUT_FILTER_ADD' => 'Lisää suodattimeen lisäkriteerejä',
  'LBL_SHORTCUT_FILTER_CLOSE' => 'Sulje suodatin',
  'LBL_SHORTCUT_FILTER_CREATE' => 'Luo uusi listasuodatin',
  'LBL_SHORTCUT_FILTER_DELETE' => 'Poista suodatin',
  'LBL_SHORTCUT_FILTER_EDIT' => 'Muokkaa tämänhetkistä listasuodatinta',
  'LBL_SHORTCUT_FILTER_REMOVE' => 'Poista viimeisin kriteeri suodattimesta',
  'LBL_SHORTCUT_FILTER_RESET' => 'Nollaa suodatin',
  'LBL_SHORTCUT_FILTER_SAVE' => 'Tallenna suodatin',
  'LBL_SHORTCUT_FILTER_SEARCH' => 'Siirrä fokus listasuodattimien kenttään',
  'LBL_SHORTCUT_FILTER_SHOW' => 'Avaa listasuodatinvalikko',
  'LBL_SHORTCUT_FOLLOW_RECORD' => 'Seuraa tietuetta',
  'LBL_SHORTCUT_FUNCTION' => 'Toiminto',
  'LBL_SHORTCUT_HELP' => 'Näytä pikanäppäinten ohjesivu',
  'LBL_SHORTCUT_KEYS_HELP_ABOUT' => 'SugarCRM antaa tehokäyttäjien käyttää pikanäppäimiä joidenkin toimintojen suorittamiseen nopeammin. Taulukosta näkee saatavilla olevat pikanäppäimet kuvauksineen.',
  'LBL_SHORTCUT_KEY_KEY' => 'Näppäin',
  'LBL_SHORTCUT_MARK_SELECTED' => 'Merkitse tietue valituksi',
  'LBL_SHORTCUT_MASS_UPDATE_ADD' => 'Lisää rivi',
  'LBL_SHORTCUT_MASS_UPDATE_CANCEL' => 'Sulje massapäivitys',
  'LBL_SHORTCUT_MASS_UPDATE_REMOVE' => 'Poista rivi',
  'LBL_SHORTCUT_MASS_UPDATE_SAVE' => 'Päivitä tietueet',
  'LBL_SHORTCUT_NAVIGATE_DOWN' => 'Valitse listan seuraava tietue',
  'LBL_SHORTCUT_NAVIGATE_UP' => 'Valitse listan edellinen tietue',
  'LBL_SHORTCUT_OPEN' => 'Avaa listan valittu tietue',
  'LBL_SHORTCUT_OPEN_MASS_ACTION' => 'Avaa massatoimintojen pudotusvalikko',
  'LBL_SHORTCUT_OPEN_MORE_ACTION' => 'Avaa primääritoimintojen pudotusvalikko',
  'LBL_SHORTCUT_PREVIEW_SELECTED' => 'Esikatsele tietuetta',
  'LBL_SHORTCUT_QUICK_CREATE' => 'Avaa/sulje pikaluontivalikko',
  'LBL_SHORTCUT_RECORD_CANCEL' => 'Tyhjennä muutokset tietueeseen',
  'LBL_SHORTCUT_RECORD_DELETE' => 'Poista tietue',
  'LBL_SHORTCUT_RECORD_EDIT' => 'Muokkaa tietuetta',
  'LBL_SHORTCUT_RECORD_NEXT' => 'Avaa seuraava tietue',
  'LBL_SHORTCUT_RECORD_PREVIOUS' => 'Avaa edellinen tietue',
  'LBL_SHORTCUT_RECORD_SAVE' => 'Tallenna tietue',
  'LBL_SHORTCUT_SCROLL_LEFT' => 'Skrollaa listaa vasemmalle',
  'LBL_SHORTCUT_SCROLL_RIGHT' => 'Skrollaa listaa oikealle',
  'LBL_SHORTCUT_SEARCH' => 'Siirrä fokus globaaliin hakukenttään',
  'LBL_SHORTCUT_SELECT_ALL' => 'Valitse kaikki',
  'LBL_SHORTCUT_SIDEBAR_TOGGLE' => 'Avaa/sulje sivupalkki',
  'LBL_SHOW' => 'Näytä',
  'LBL_SHOW_LESS' => 'Näytä vähemmän',
  'LBL_SHOW_LESS_RECENTS' => 'vähemmän tuoreita',
  'LBL_SHOW_MORE' => 'Näytä enemmän',
  'LBL_SHOW_MORE_GENERIC' => 'Näytä lisää...',
  'LBL_SHOW_MORE_MODULE' => 'Enemmän {{{module}}}...',
  'LBL_SHOW_MORE_RECENTS' => 'Enemmän tuoreita...',
  'LBL_SIGNUP_BUTTON_LABEL' => 'Ilmoittaudu',
  'LBL_SIXMONTHS' => 'kuusi kuukautta',
  'LBL_SMS_BUTTON' => 'SMS',
  'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
  'LBL_SMTPTYPE_GMAIL' => 'Gmail',
  'LBL_SMTPTYPE_OTHER' => 'Muu',
  'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
  'LBL_SORT' => 'Järjestä',
  'LBL_SQL_TEXT' => 'SQL text',
  'LBL_SQS_INDICATOR' => '',
  'LBL_START_AND_END_DATE' => '{{start}} ↣ {{end}} ({{duration}})',
  'LBL_START_AND_END_DATE_DETAIL_VIEW' => 'Aloitus- ja päättymispäivä',
  'LBL_START_AND_END_DATE_SAME_DAY' => '{{date}} {{start}} ↣ {{end}} ({{duration}})',
  'LBL_START_AND_END_DATE_TO' => '↣',
  'LBL_START_BUTTON_LABEL' => 'Aloita',
  'LBL_START_BUTTON_TITLE' => 'Aloita',
  'LBL_STATE' => 'Osavaltio:',
  'LBL_STATUS' => 'Tila:',
  'LBL_STATUS_UPDATED' => 'Tapahtuman tila on kohdaltasi päivitetty.',
  'LBL_STREAM_NO_RECORDS' => 'Tässä tietueeta ei ole muistiinpanoja. Lisää muistiinpano klikkaamalla ‘lisää muistiinpano’ -linkkiä.',
  'LBL_STREET' => 'Katuosoite',
  'LBL_SUBJECT' => 'Aihe',
  'LBL_SUBMIT_BUTTON_LABEL' => 'Lähetä',
  'LBL_SUBSCRIBE' => 'Tilaa',
  'LBL_SUCCESS' => 'Onnistui',
  'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2016 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> Kaikki oikeudet pidätetään.<br />‘SugarCRM’ on SugarCRM, Inc.:in rekisteröity tavaramerkki. Kaikkien muiden yhtiöiden ja tuotteiden tavaramerkit ovat kyseisten yhtiöiden omaisuutta.',
  'LBL_SUPPORT' => 'Tuki',
  'LBL_SWITCH_INSTANCE' => 'Vaihda tähän instanssiin',
  'LBL_SYNC' => 'Synkronoi',
  'LBL_SYNCED_RECURRING_MSG' => 'Tätä tietuetta ei voida muokata, koska se synkronoitiin ulkoisesta tietueesta.',
  'LBL_SYSTEM_DEFAULT_OUTBOUND_EMAIL_CONFIGURATION' => 'järjestelmän oletus',
  'LBL_TABGROUP_HOME' => 'Työpöytä',
  'LBL_TASKS' => 'Tehtävät',
  'LBL_TASKS_SUBPANEL_TITLE' => 'Tehtävät',
  'LBL_TEAM' => 'Tiimi:',
  'LBL_TEAMS' => 'Tiimit',
  'LBL_TEAMS_LINK' => 'Tiimit',
  'LBL_TEAM_ADD' => 'Lisää tiimi',
  'LBL_TEAM_ID' => 'Tiimin ID',
  'LBL_TEAM_PRIMARY' => 'Aseta primääritiimiksi',
  'LBL_TEAM_REMOVE' => 'Poista tiimi',
  'LBL_TEAM_SELECTED_TITLE' => 'Tiimi valittu',
  'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Valitse tehdäksesi tästä tiimistä ensisijaisen',
  'LBL_TEAM_SET' => 'Team set',
  'LBL_TEAM_SET_ID' => 'Team set ID',
  'LBL_TEXTAREA_LESS' => 'vähemmän',
  'LBL_TEXTAREA_MORE' => 'enemmän',
  'LBL_THEME' => 'Teema:',
  'LBL_THEME_COLOR' => 'Väri',
  'LBL_THEME_FONT' => 'Fontti',
  'LBL_THEME_PICKER' => 'Sivun tyyli',
  'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Varoitus: Valittu teema ei tue selainta Internet Explorer 6. Klikkaa OK valitaksesi teeman tai Peruuta, jos haluat valita toisen teeman.',
  'LBL_THEME_PREVIEW' => 'Teeman esikatselu',
  'LBL_THOUSANDS_SYMBOL' => 'K',
  'LBL_THREE_MONTHS' => 'kolme kuukautta',
  'LBL_TIMEZONE_DIFFERENT_LINK' => 'Muuta aikavyöhykettäsi.',
  'LBL_TIME_AGO_DAY' => 'eilen',
  'LBL_TIME_AGO_DAYS' => '{{this}} päivää sitten',
  'LBL_TIME_AGO_HOUR' => 'noin tunti sitten',
  'LBL_TIME_AGO_HOURS' => '{{this}} tuntia sitten',
  'LBL_TIME_AGO_MINUTE' => 'noin minuutti sitten',
  'LBL_TIME_AGO_MINUTES' => '{{this}} minuuttia sitten',
  'LBL_TIME_AGO_NOW' => 'nyt',
  'LBL_TIME_AGO_SECONDS' => 'alle minuutti sitten',
  'LBL_TIME_AGO_YEAR' => 'yli vuosi sitten',
  'LBL_TIME_RELATIVE' => 'Lähetetty {{relativetime}}, {{date}} klo {{time}}',
  'LBL_TIME_RELATIVE_ACTIVITIES' => '{{relativetime}} - {{date}} klo {{time}}',
  'LBL_TIME_UNTIL_DAY' => 'huomenna',
  'LBL_TIME_UNTIL_DAYS' => 'noin {{this}} päivässä',
  'LBL_TIME_UNTIL_HOUR' => 'noin tunnissa',
  'LBL_TIME_UNTIL_HOURS' => 'noin {{this}} tunnissa',
  'LBL_TIME_UNTIL_MINUTE' => 'noin minuutissa',
  'LBL_TIME_UNTIL_MINUTES' => 'noin {{this}} minuutissa',
  'LBL_TIME_UNTIL_SECONDS' => 'alle minuutissa',
  'LBL_TIME_UNTIL_YEAR' => 'yli vuodessa',
  'LBL_TODAY' => 'Tänään',
  'LBL_TODAYS_ACTIVITIES' => 'Päivän aktiviteetit',
  'LBL_TOGGLE_DRAWER' => 'Vaihda laatikkoa',
  'LBL_TOGGLE_VISIBILITY' => 'Vaihda näkyvyyttä',
  'LBL_TOMORROW' => 'Huomenna',
  'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Listaa 10 parasta tuoteriviä kuplakaaviossa.',
  'LBL_TOP10_OPPORTUNITIES_DEFAULT_DATASET' => 'Oletus-dataset',
  'LBL_TOP10_OPPORTUNITIES_FILTER_DURATIONS' => 'Oletuspäivämääräsuodatin',
  'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Tuoterivini',
  'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => 'Tiimini tuoterivit',
  'LBL_TOUR' => 'Esittely',
  'LBL_TOUR_ADD' => 'Luo tietue tästä',
  'LBL_TOUR_AVATAR' => 'Näytä enemmän tietoja sovelluksesta, tai kirjaudu ulos',
  'LBL_TOUR_BACK' => 'Takaisin',
  'LBL_TOUR_BTN_DONE' => 'Valmis',
  'LBL_TOUR_CALENDAR_URL_1' => 'Jaatko SugarCRM:n kalenterin kolmannen osapuolen sovelluksille, kuten Microsoft Outlookille tai Exchangelle? Jos jaat, tähän on uusi URL. Tämä uusi, turvallisempi URL sisältää henkilökohtaisen avaimen, joka estää kalenterisi luvattoman julkaisun.',
  'LBL_TOUR_CALENDAR_URL_2' => 'Näytä jaetun kalenterisi uusi IRL',
  'LBL_TOUR_CLOSE' => 'Sulje',
  'LBL_TOUR_CUBE' => 'Pääsy työpöytään ja aktiviteettivirtaan',
  'LBL_TOUR_DONE' => 'Valmis!',
  'LBL_TOUR_END_TOUR' => 'Lopeta kierros',
  'LBL_TOUR_FEATURES_670' => '<ul style=\'\'><li class=\'icon-ok\'>Parannettu käyttötuntuma &mdash; uudella, modernilla teemalla.</li><li class=\'icon-ok\'>Parannettu Ennusteet-moduuli &mdash; intuitiivisella käyttöliittymällä ja tietojen visualisoinnilla</li></ul>',
  'LBL_TOUR_FORECASTS_CHART' => 'Lue ennusteiden jakauma',
  'LBL_TOUR_FORECASTS_COMMITS' => 'Klikkaa nähdäksesi edelliset commitit',
  'LBL_TOUR_FORECASTS_INLINEEDIT' => 'Klikkaa muokataksesi tietoja välittömästi',
  'LBL_TOUR_FORECASTS_PROGRESS' => 'Review distance to quota',
  'LBL_TOUR_FORECASTS_TIMEPERIODS' => 'Valitse ajanjakso nähdäksesi siihen liittyvä ennuste',
  'LBL_TOUR_FORECAST_INTRO' => 'Hallitse myyntiputkea ja ennusteita.',
  'LBL_TOUR_FULL_TOUR' => 'Esittely',
  'LBL_TOUR_INTRO' => 'Tervetuloa Sugar seiskaan. Katso esittely käyttämällä nuolia.',
  'LBL_TOUR_LIST_ACTIVTYSTREAMLIST_TOGGLE' => 'Valitse nähdäksesi aktiviteetit tai listan tietueista',
  'LBL_TOUR_LIST_FILTER1' => 'Moduulin sisäinen haku tapahtuu suodatinpalkista',
  'LBL_TOUR_LIST_FILTER2' => 'Valitse olemassa oleva suodatin tai määritä uusi',
  'LBL_TOUR_LIST_FILTER_PREVIEW' => 'Muokkaa riviä tai näytä tarkempia tietoja',
  'LBL_TOUR_LIST_FILTER_SEARCH' => 'Kirjoita tähän hakeaksesi nimen perusteella',
  'LBL_TOUR_LIST_INTRO' => 'Tietueiden listaus ja toimintojen suoritus',
  'LBL_TOUR_LIST_INT_TOGGLE' => 'Avaa tai sulje älykkyyspaneeli',
  'LBL_TOUR_MODULE' => 'Navigoi esittelyn läpi',
  'LBL_TOUR_NAV_BAR' => 'Pääsy moduuleihin ja toimintoihin navigointivalikosta',
  'LBL_TOUR_NEXT' => 'Seuraava',
  'LBL_TOUR_NOTIFICATIONS' => 'Klikkaa nähdäksesi huomautukset',
  'LBL_TOUR_OVERVIEW' => 'Sivun yleiskatsaus',
  'LBL_TOUR_RECORD_ACTIONS' => 'Toimintoja tietueelle',
  'LBL_TOUR_RECORD_DASHBOARDACTIONS' => 'Luo uusia dashlet-ryhmiä',
  'LBL_TOUR_RECORD_DASHBOARDNAME' => 'Anna dashlet-ryhmälle nimi',
  'LBL_TOUR_RECORD_DASHLETCOG' => 'Valitse poistaaksesi dashlet tai muuttaaksesi asetuksia',
  'LBL_TOUR_RECORD_INLINEEDIT' => 'Tietueen nimi voidaan päivittää heti',
  'LBL_TOUR_RECORD_INLINEEDITRECORD' => 'Klikkaa muokataksesi heti jokaista kenttää',
  'LBL_TOUR_RECORD_INTRO' => 'Näytä yksityiskohtia tästä tietueesta ja näe kaikki siihen liittyvä data.',
  'LBL_TOUR_RECORD_SHOWMORE' => 'Klikkaa nähdäksesi enemmän tietueen tiedoista',
  'LBL_TOUR_RECORD_STATUS' => 'Find record level status here',
  'LBL_TOUR_RECORD_TOGGLEACTIVITIES' => 'Valitse nähdäksesi aktiviteetteja tai liittyviä tietueita',
  'LBL_TOUR_REFERENCE_1' => 'You can always reference our',
  'LBL_TOUR_REFERENCE_2' => 'through the &#39;Support&#39; link under the profile menu.',
  'LBL_TOUR_REVISIT' => 'Esittelyyn pääsee takaisin tästä.',
  'LBL_TOUR_SCREEN_1_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Setup your forecasting parameters</li><li class="icon-ok">Easily track projected sales and pipeline health</li><li class="icon-ok">Forecast based on projected sales from your sales team</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen1-thumb.png" width="220" id="thumbnail_1" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_1_TITLE_670' => 'Enhanced forecasting functionality in Sugar',
  'LBL_TOUR_SCREEN_2_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Choose fiscal year start date</li><li class="icon-ok">Setup Time Periods to be either yearly or quarterly</li><li class="icon-ok">Decide how many past and future Time Periods need to be visible in the worksheet</li><li class="icon-ok">Select Forecast ranges to tag Opportunities as Include, Exclude or Upside</li><li class="icon-ok">Select Forecast scenarios to identify Likely, Best and Worst forecast</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen2-thumb.png" width="220" id="thumbnail_2" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_2_TITLE_670' => 'Setup your forecasting parameters',
  'LBL_TOUR_SCREEN_3_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Select the Time Period to review the Forecast</li><li class="icon-ok">View your sales team members’ worksheets and provide adjusted forecasts</li><li class="icon-ok">See alert on worksheet when a sales team member commits a new Forecast</li><li class="icon-ok">Save the Forecast worksheet as a draft version or commit the Forecast to your manager</li><li class="icon-ok">View history of previous commits</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen3-thumb.png" width="220" id="thumbnail_3" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_3_TITLE_670' => 'Manage your Sales Team&#39;s Projected Sales',
  'LBL_TOUR_SCREEN_4_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">View Pareto chart for pipeline analysis across all your sales team members&#39; forecasts</li><li class="icon-ok">Choose to visualize projected sales by Likely, Best or Worst forecast</li><li class="icon-ok">View projected sales and how close you are to make your team Quota</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen4-thumb.png" width="220" id="thumbnail_4" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_4_TITLE_670' => 'Manage your Sales Team&#39;s Projected Sales',
  'LBL_TOUR_SCREEN_5_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Select the Time Period for your Forecast</li><li class="icon-ok">Review and in-line edit amounts and Win Probability for a quick what-if analysis</li><li class="icon-ok">Save the Forecast worksheet as a draft version or commit the Forecast to your manager</li><li class="icon-ok">View history of previous commits</li><li class="icon-ok">Commit Forecast to Manager and view History of previous Commits</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen5-thumb.png" width="220" id="thumbnail_5" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_5_TITLE_670' => 'Manage your own Projected Sales',
  'LBL_TOUR_SCREEN_6_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">View Pareto chart for pipeline analysis over time for your Opportunities</li><li class="icon-ok">Choose to visualize pipeline distribution by Sales Stage or Win Probability</li><li class="icon-ok">View projected sales and how close you are to make your assigned Quota</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen6-thumb.png" width="220" id="thumbnail_6" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_6_TITLE_670' => 'Manage your own Projected Sales',
  'LBL_TOUR_SEARCH' => 'Valitse yksi tai useampi moduuli ja hae',
  'LBL_TOUR_SKIP' => 'Ohita',
  'LBL_TOUR_TAKE_TOUR' => 'Esittely',
  'LBL_TOUR_TOUR' => 'Esittelyyn pääsee milloin vain',
  'LBL_TOUR_VISIT' => 'For more information please visit our application',
  'LBL_TOUR_WATCH' => 'Katso, mikä on uutta Sugarissa',
  'LBL_TOUR_WELCOME' => 'Uutta Sugarissa',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arkistoi sähköposti',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arkistoi sähköposti',
  'LBL_TRADEMARK' => 'SugarCRM on SugarCRM,&nbsp;Inc.in omistama tuotemerkki. Kaikki muut yritys- ja tuotenimet voivat olla niiden omistajien tuotemerkkejä.',
  'LBL_TRADEMARK2' => 'SugarCRM&reg;, Sugar Enterprise&trade; ja Sugar&trade; ovat SugarCRM Inc.in tuotemerkkejä.',
  'LBL_TRAINING' => 'Koulutus',
  'LBL_TT_DNB_BAL_AREA_CODE' => 'Yhdysvaltalaiset ja kandadalaiset puhelinnumeron aluekoodit. Esimerkiksi: 512, 732, 973.',
  'LBL_TT_DNB_BAL_CODE_TYPE' => 'Valitse alakoodityyppi: SIC tai NAICS',
  'LBL_TT_DNB_BAL_DUNS' => 'Syötä 9-merkkinen DUNS-numero. Esimerkkejä: 060704780, 047897855',
  'LBL_TT_DNB_BAL_IND_CODE' => 'Järjestelmä tukee 2-8 merkin SIC-koodeja, TAI 2-6 merkin NAICS-koodeja. Molempia koodityyppejä ei voida käyttää samanaikaisesti. Erota koodit pilkulla.',
  'LBL_TT_DNB_BAL_IPO_PRICE_RANGE' => 'Yhdysvaltain dollareissa. Esimerkki: Osakeannin hintaväli 2.00 - 2.50',
  'LBL_TT_DNB_BAL_MILLIONS' => 'miljoonissa amerikandollareissa',
  'LBL_TT_DNB_BAL_MILLIONS_EX' => 'Miljoonissa yhdysvaltain dollareissa (USD). Esim.: 100 tai 4.3',
  'LBL_TT_DNB_BAL_NET_INCOME_GROWTH' => 'Prosentti (%)',
  'LBL_TT_DNB_BAL_ORGID' => 'Rekisteröintinumero. Esimerkkejä: 130871985, 160468020',
  'LBL_TT_DNB_BAL_ORG_NAME' => 'Syötä yrityksen nimi',
  'LBL_TT_DNB_BAL_POSTAL_CODE' => 'Järjestelmä tukee sarjoja yhdysvaltalaisia postikoodeja. Esimerkkipostikoodeja: 78701, SW1P 1JA, 78701-78752',
  'LBL_TT_DNB_BAL_PRESCREEN_SCORE' => 'Valitse riskitaso: korkea, keskitaso, matala.',
  'LBL_TT_DNB_BAL_RADIUS_SRCH' => 'Hae kohteita jonkin tietyn etäisyyden päästä annetusta postikoodista',
  'LBL_TT_DNB_BAL_STATES' => 'Lääni/provinssi/osavaltio/tms',
  'LBL_TT_DNB_BAL_YEAR_OF_FOUNDING' => 'Esimerkki: 1964 tai 2009. Vain yksi perustamisvuosi voidaan määrittää.',
  'LBL_TWITTER_DATA_EMPTY' => 'Twitteriltä ei saatavilla dataa',
  'LBL_TWITTER_DATA_LOADING' => 'Ladataan Twitter-konnektoria',
  'LBL_TWITTER_DESCRIPTION' => 'Näytä vastaavan twitter-käyttäjän bio ja twiitit, uudelleentwiittaa, ja vastaa twiitteihin',
  'LBL_TWITTER_DISPLAY_ROWS' => 'Näytä rivit',
  'LBL_TWITTER_FAVORITE' => 'Suosikki',
  'LBL_TWITTER_FOLLOW' => 'Seuraa',
  'LBL_TWITTER_ID' => 'Twitter-tili',
  'LBL_TWITTER_MY_ACCOUNT' => 'Oma tili',
  'LBL_TWITTER_NAME' => 'Twitter',
  'LBL_TWITTER_REPLY' => 'Vastaa',
  'LBL_TWITTER_RETWEET' => 'Uudelleentwiittaa',
  'LBL_TWITTER_SOURCE' => 'Lähdetweetti:',
  'LBL_TWO_WEEKS' => 'kaksi viikkoa',
  'LBL_TX_LOG' => 'Transaktioloki',
  'LBL_TX_LOG_DETAIL' => 'Transaktiotiedot',
  'LBL_UNASSIGNED' => 'Määrittämätön',
  'LBL_UNAUTHORIZED' => 'Vaikuttaa siltä, että sinulla ei ole oikeuksia tähän resurssiin.',
  'LBL_UNAUTHORIZED_TITLE' => 'Pääsy estetty',
  'LBL_UNAUTH_ADMIN' => 'Pääsy ylläpitoon estetty',
  'LBL_UNDELETE' => 'Peru poisto',
  'LBL_UNDELETE_BUTTON' => 'Peru poisto',
  'LBL_UNDELETE_BUTTON_LABEL' => 'Peru poisto',
  'LBL_UNDELETE_BUTTON_TITLE' => 'Peru poisto',
  'LBL_UNFOLLOW' => 'Lopeta seuraaminen',
  'LBL_UNLINKED' => 'Epälinkitetty',
  'LBL_UNLINKING' => 'Epälinkitetään...',
  'LBL_UNLINK_BUTTON' => 'Poista',
  'LBL_UNSUBSCRIBE' => 'Lopeta tilaus',
  'LBL_UNSYNC' => 'Poista synkronointi',
  'LBL_UPCOMING' => 'Omat tulevat tapahtumat',
  'LBL_UPDATE' => 'Päivitä',
  'LBL_UPDATE_CALC_FIELDS' => 'Laske uudelleen arvot',
  'LBL_UPLOADING' => 'Ladataan',
  'LBL_UPLOAD_FROM_COMPUTER' => 'Lataa tietokoneeltasi',
  'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Virheellinen tiedostopääte. Vain kuvia voi ladata.',
  'LBL_UPLOAD_IMAGE_FILE_NOT_SUPPORTED' => 'Kuvaformaattia {0} ei tueta.',
  'LBL_URL_BUTTON' => 'Web',
  'LBL_USERS' => 'Käyttäjät',
  'LBL_USERS_SYNC' => 'Käyttäjien synkronisointi',
  'LBL_USER_DEFAULT_OUTBOUND_EMAIL_CONFIGURATION' => 'käyttäjän oletus',
  'LBL_USER_ID' => 'Käyttäjä-ID',
  'LBL_USER_LIST' => 'Käyttäjälista',
  'LBL_USER_MENU' => 'Käyttäjävalikko',
  'LBL_USER_OUTBOUND_EMAIL_ACCOUNT_CONFIGURATION' => 'käyttäjän tili',
  'LBL_USE_HTTPS' => 'Käytä salattua yhteyttä',
  'LBL_VALIDATE_RANGE' => 'ei ole sallituissa rajoissa',
  'LBL_VALIDATING' => 'Validoitaan...',
  'LBL_VCARD' => 'vCard',
  'LBL_VCARD_DOWNLOAD' => 'Lataa .vcf',
  'LBL_VCARD_ERROR_DEFAULT' => 'Virhe ladattaessa vCard-tiedostoa.',
  'LBL_VCARD_ERROR_FILESIZE' => 'Ladatun tiedoston koko ylittää HTML-lomakkeessa määritetyn 30 000 tavun rajan.',
  'LBL_VERIFY_EMAIL_ADDRESS' => 'Tarkistetaan onko sähköposti jo käytössä...',
  'LBL_VERIFY_PORTAL_NAME' => 'Tarkastetaan onko portaalin nimi jo käytössä...',
  'LBL_VIEWINLINE' => 'Näytä',
  'LBL_VIEW_BUTTON' => 'Näytä',
  'LBL_VIEW_BUTTON_KEY' => 'V',
  'LBL_VIEW_BUTTON_LABEL' => 'Näytä',
  'LBL_VIEW_BUTTON_TITLE' => 'Näytä [Alt+V]',
  'LBL_VIEW_IMAGE' => 'näytä',
  'LBL_VIEW_INLINE' => 'Näytä',
  'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
  'LBL_VIEW_PDF_BUTTON_LABEL' => 'Tulosta PDF',
  'LBL_VIEW_PDF_BUTTON_TITLE' => 'Tulosta PDF',
  'LBL_VISIBLE' => 'Merkintä näkyy',
  'LBL_WARNING' => 'Varoitus',
  'LBL_WARN_UNSAVED_CHANGES' => 'Sinulla on tallentamattomia muutoksia. Sivulta lähteminen poistaa muutokset. Lähdetäänkö silti?',
  'LBL_WELCOMEBAR' => 'Tervetuloa',
  'LBL_WIZ_APPLICATION_SETTINGS' => 'Järjestelmäasetukset',
  'LBL_WIZ_COMPLETE_TITLE' => 'Asennus valmis',
  'LBL_WIZ_CONFIGURE_APPLICATION' => 'Studio',
  'LBL_WIZ_CREATE_USERS' => 'Luo käyttäjiä',
  'LBL_WIZ_DATE_FORMAT' => 'Päivämäärän muoto',
  'LBL_WIZ_DOCUMENTATION' => 'Dokumentaatio',
  'LBL_WIZ_EMAIL' => 'Sähköposti',
  'LBL_WIZ_EMAIL_SETTINGS' => 'Sähköpostiasetukset',
  'LBL_WIZ_FIRST_NAME' => 'Etunimi',
  'LBL_WIZ_FORUMS' => 'Foorumit',
  'LBL_WIZ_IMPORT_DATA' => 'Tuo tietoa',
  'LBL_WIZ_KNOWLEDGE_BASE' => 'Knowledge base',
  'LBL_WIZ_LAST_NAME' => 'Sukunimi',
  'LBL_WIZ_NAME_FORMAT' => 'Nimimuoto',
  'LBL_WIZ_START_SUGAR' => 'Aloita Sugar',
  'LBL_WIZ_SUGAR_TRAINING' => 'Sugar-koulutus',
  'LBL_WIZ_SYSTEM_LOCALE_SETTINGS' => 'Lokaaliasetukset',
  'LBL_WIZ_TIMEFORMAT' => 'Ajan muoto',
  'LBL_WIZ_TIMEZONE' => 'Aikavyöhyke',
  'LBL_WIZ_USER_LOCALE_TITLE' => 'Käyttäjän lokaaliasetukset',
  'LBL_WIZ_USER_PROFILE_TITLE' => 'Käyttäjäprofiili',
  'LBL_WORST' => 'Huonoin',
  'LBL_WORST_ADJUSTED' => 'Huonoin (oikaistu)',
  'LBL_YES' => 'Kyllä',
  'LBL_YESTERDAY' => 'Eilen',
  'LBL_YOU' => 'Sinä',
  'LBL_YOUR_INSTANCES' => 'Instanssisi',
  'LNK_ABOUT' => 'Tietoja',
  'LNK_ADVANCED_SEARCH' => 'Laajennettu haku',
  'LNK_BACKTOTOP' => 'Takaisin ylös',
  'LNK_BASIC_SEARCH' => 'Perushaku',
  'LNK_CLOSE' => 'sulje',
  'LNK_CREATE' => 'Luo',
  'LNK_CREATE_WHEN_EMPTY' => 'Luo tietue nyt.',
  'LNK_DELETE' => 'Poista',
  'LNK_DELETE_ALL' => 'poista kaikki',
  'LNK_EDIT' => 'Muokkaa',
  'LNK_GET_LATEST' => 'Hae viimeisimmät',
  'LNK_GET_LATEST_TOOLTIP' => 'Korvaa viimeisimmällä versiolla',
  'LNK_HELP' => 'Ohje',
  'LNK_LIST_END' => 'Loppu',
  'LNK_LIST_NEXT' => 'Seuraava',
  'LNK_LIST_PREVIOUS' => 'Edellinen',
  'LNK_LIST_RETURN' => 'Palaa listaan',
  'LNK_LIST_START' => 'Alku',
  'LNK_LOAD_SIGNED' => 'Allekirjoita',
  'LNK_LOAD_SIGNED_TOOLTIP' => 'Korvaa allekirjoitetulla dokumentilla',
  'LNK_MOBILE' => 'Mobiili',
  'LNK_OFFLINE_SETTINGS' => 'Offline',
  'LNK_PMSE_BUSINESS_RULES_IMPORT_RECORD' => 'Tuo prosessiyrityssääntöjä',
  'LNK_PMSE_BUSINESS_RULES_NEW_RECORD' => 'Luo prosessiyrityssääntö',
  'LNK_PMSE_EMAIL_TEMPLATES_IMPORT_RECORD' => 'Tuo prosessisähköpostimalleja',
  'LNK_PMSE_EMAIL_TEMPLATES_NEW_RECORD' => 'Luo prosessisähköpostimalli',
  'LNK_PMSE_PROCESS_DEFINITIONS_IMPORT_RECORD' => 'Tuo prosessimääritelmiä',
  'LNK_PMSE_PROCESS_DEFINITIONS_NEW_RECORD' => 'Luo prosessimääritelmä',
  'LNK_PORTAL_LOGIN_FORGOTPASSWORD' => 'Unohtuiko salasana?',
  'LNK_PRINT' => 'Tulosta',
  'LNK_PRIVACY_POLICY' => 'Yksityisyydensuoja',
  'LNK_REMOVE' => 'poista',
  'LNK_RESUME' => 'Jatka',
  'LNK_SAVED_VIEWS' => 'Tallennettu haku ja ulkoasu',
  'LNK_SEARCH_FTS_VIEW_ALL' => 'Näytä kaikki tulokset',
  'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Näytä kaikki',
  'LNK_SEARCH_NO_RESULTS' => 'Tuloksia ei löytynyt.',
  'LNK_SETTINGS' => 'Asetukset',
  'LNK_TERMS_OF_USE' => 'Käyttöehdot',
  'LNK_THIRD_PARTY_SOFTWARE' => 'kolmannen osapuolen ohjelmisto',
  'LNK_TOUR' => 'Esittely',
  'LNK_TOUR_DOCUMENTATION' => 'dokumentaatio',
  'LNK_VIEW' => 'näytä',
  'LNK_VIEW_CHANGE_LOG' => 'Näytä muutosloki',
  'LOGIN_LOGO_ERROR' => 'Korvaa SugarCRM-logot.',
  'MSG_DUPLICATE' => '{0}-tietue jonka aiot luoda saattaa olla kopio olemassa olevasta {0} tietueesta. {1} tietueet joilla on samankaltainen nimi ovat listattuna alla.<br />Klikkaa Luo {1} jatkaaksesi {0} luomista, tai valitse olemassa oleva, alla listattu {0}.',
  'MSG_EMPTY_LIST_VIEW_GO_TO_PARENT' => 'Voit luoda . listasta',
  'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Järjestelmässä ei ole tietueita. <item2> tai <item3> tietue.',
  'MSG_EMPTY_LIST_VIEW_NO_RESULTS_NO_IMPORT' => 'Ei tietueita. <item2> uusi.',
  'MSG_IS_LESS_THAN' => 'on vähemmän kuin',
  'MSG_IS_MORE_THAN' => 'on enemmän kuin',
  'MSG_IS_NOT_BEFORE' => 'ei ole ennen',
  'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => 'Klikkaa OK nähdäksesi tämän puhelun tai klikkaa Peruuta hylätäksesi tämän viestin.',
  'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Kuvaus:',
  'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Sijainti:',
  'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => 'Klikkaa OK nähdäksesi tämän kokouksen tai klikkaa Peruuta hylätäksesi tämän viestin.',
  'MSG_JS_ALERT_MTG_REMINDER_START' => 'aloitetaan',
  'MSG_LIST_VIEW_NO_RESULTS' => 'Ei löydetty tuloksia kohteelle <item1>',
  'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Ei löydetty tuloksia.',
  'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Luo <item1> uutena <item2>na',
  'MSG_OR_GREATER' => 'tai suurempi',
  'MSG_SHOULD_BE' => 'pitäisi olla',
  'MSG_SHOW_DUPLICATES' => '{0}-tietue jonka aiot luoda saattaa olla kopio olemassa olevasta {0} tietueesta. {1} tietueet joilla on samankaltainen nimi on listattu alle.<br />Klikkaa tallenna luodaksesi tietueen, tai klikkaa Peruuta palataksesi moduuliin luomatta tietuetta.',
  'NOTICE_NO_DELETE_CLOSED' => 'Et voi poistaa tietueita, joiden myyntistatus on ‘suljettu’.',
  'NOTICE_NO_DELETE_CLOSED_STAGE' => 'Et voi poistaa tietueita, joiden myyntivaihe on suljettu.',
  'NOTICE_NO_DELETE_CLOSED_STATUS' => 'Et voi poistaa tietueita, joiden myyntistatus on suljettu.',
  'NO_QUERY_SELECTED' => 'Valitsemasi data format ei sisällä kyselyä. Valitse mukatuettu kysely (<i>custom query</i>) tälle data formatille.',
  'NTC_CLICK_BACK' => 'Napsauta selaimen Takaisin-painiketta ja korjaa ongelma.',
  'NTC_DATE_FORMAT' => '(vvvv-kk-pp)',
  'NTC_DATE_TIME_FORMAT' => '(vvvv-kk-pp 24:00)',
  'NTC_DELETE_CONFIRMATION' => 'Haluatko poistaa tämän tietueen?',
  'NTC_DELETE_CONFIRMATION_FORMATTED' => 'Haluatko varmasti poistaa tämän? {0}',
  'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Haluatko varmasti poistaa valitut tietueet?',
  'NTC_DELETE_CONFIRMATION_NUM' => 'Haluatko varmasti poistaa valitut tietueet?',
  'NTC_DELETE_SELECTED_RECORDS' => 'kpl',
  'NTC_DELETE_SUCCESS' => 'Poistettiin ‘{0}’.',
  'NTC_LOGIN_MESSAGE' => 'Syötä käyttäjätunnus ja salasana.',
  'NTC_NO_ITEMS_DISPLAY' => 'ei mitään',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Puhelinnumero- ja Osoite-kentät eivät ole tyhjiä. Paina “OK”, jos haluat korvata puhelinnumeron ja osoitteen valitsemasi asiakkaan tiedoilla. Jos haluat pitää nykyiset tiedot, paina “Peruuta”.',
  'NTC_REMOVE_CONFIRMATION' => 'Haluatko poistaa tämän viittaussuhteen? Vain viittaussuhde poistetaan ja tietuetta ei.',
  'NTC_REQUIRED' => 'Kenttä vaaditaan',
  'NTC_SUPPORT_SUGARCRM' => 'Tue SugarCRM open source projektia PayPal-lahjoituksen avulla &mdash; se on nopea ja turvallinen maksumuoto',
  'NTC_TEMPLATES_IS_USED' => 'Seuraavia mallipohjia käytetään sähköpostimarkkinointitietueissa. Oletko varma, että haluat poistaa ne?',
  'NTC_TEMPLATE_IS_USED' => 'Pohjaa käytetään ainakin yhdessä sähköpostimarkkinointitietueista. Haluatko varmasti poistaa sen?',
  'NTC_TIME_FORMAT' => '(24:00)',
  'NTC_UNLINK_CONFIRMATION' => 'Haluatko varmasti epälinkittää tämän tietueen?',
  'NTC_UNLINK_CONFIRMATION_FORMATTED' => 'Poistetaanko varmasti linkitys? {0}',
  'NTC_UNLINK_SUCCESS' => 'Epälinkitettiin {0}',
  'NTC_UPDATE_CONFIRMATION_NUM' => 'Haluatko varmasti päivittää valitut tietueet?',
  'NTC_WELCOME' => 'Tervetuloa',
  'NTC_YEAR_FORMAT' => '(vvvv)',
  'NavigationBar' => 'Navigaatiopalkki',
  'PrimaryButton' => 'Ensisijainen painike',
  'SUGAR_API_EXCEPTION_NOT_AUTHORIZED' => 'Moduulissa {1} olevan kentän {0} muokkaus ei ole sallittu',
  'SUGAR_API_EXCEPTION_RECORD_NOT_AUTHORIZED' => 'Toiminnon ‘{0}’ suorittaminen tälle tietueelle ei ole sallittu',
  'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{{module}}} &raquo; {{appId}}',
  'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if name}}{{name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
  'TPL_DASHLET_MY_MODULE' => '{{module}}',
  'TPL_DELETE_FILTER_SUCCESS' => 'Suodatin ‘{{name}}’ poistettiin.',
  'TPL_FILTER_SAVE' => 'Suodatin ‘{{name}}‘ luotiin.',
  'TPL_HISTORICAL_SUMMARY' => 'Historian yhteenveto objektille ‘{{name}}’',
  'TPL_IMPORT_VCARD_FAILURE' => '{{moduleSingular}}-tietueen luonti vCardista epäonnistui.',
  'TPL_INACTIVE_TASKS_DASHLET_TIME_RELATIVE' => 'viimeksi muutettu {{relativetime}}, {{date}} klo {{time}}',
  'TPL_LISTVIEW_SELECTED_ALL' => 'Valittuna on tulosten kaikki {{num}} tietuetta.',
  'TPL_LISTVIEW_SELECTED_FIRST_OFFSET' => 'Tuloksissa on enemmän kuin {{num}} tietuetta. Valittuna on ensimmäiset {{num}} tietuetta.',
  'TPL_LISTVIEW_SELECT_ALL_RECORDS' => 'Valittuna tämän näkymän kaikki {{num}} tietuetta. {{link}} tietuetta hakutuloksissa.',
  'TPL_MASSADDTOLIST_DURATION_FORMAT' => '(noin {{time}} {{unit}} jäljellä)',
  'TPL_MASSADDTOLIST_FAIL_TO_ATTEMPT' => 'Massalisäys tavoitelistaan epäonnistui. Yritetään uudelleen ({{num}}/{{total}}).',
  'TPL_MASSADDTOLIST_PROGRESS_STATUS' => 'Lisätään {{num}}/{{total}}.',
  'TPL_MASSADDTOLIST_SUCCESS' => 'Lisättiin {{num}} tietuetta.',
  'TPL_MASSADDTOLIST_TITLE' => '{{module}} massalisäys tavoitelistaan',
  'TPL_MASSADDTOLIST_WARNING_CLOSE' => 'Massalisäys tavoitelistaan puutteellinen. {{num}} tietuetta jätettiin lisäämättä.',
  'TPL_MASSADDTOLIST_WARNING_INCOMPLETE' => 'Massalisäys tavoitelistaan puutteellinen. {{num}} tietuetta jätettiin lisäämättä.',
  'TPL_MASSDELETE_DURATION_FORMAT' => '(noin {{time}} {{unit}} jäljellä)',
  'TPL_MASSDELETE_FAIL_TO_ATTEMPT' => 'Massapäivitys epäonnistui. Yritetään uudelleen ({{num}}/{{total}}).',
  'TPL_MASSDELETE_PROGRESS_STATUS' => 'Poistetaan {{num}}/{{total}}.',
  'TPL_MASSDELETE_SUCCESS' => 'Poistettiin {{num}} tietuetta.',
  'TPL_MASSDELETE_TITLE' => '{{module}} massapoisto.',
  'TPL_MASSDELETE_WARNING_CLOSE' => 'Massapäivitys puutteellinen. {{num}} tietuetta jäljellä.',
  'TPL_MASSDELETE_WARNING_INCOMPLETE' => 'Massapäivitys puutteellinen. {{num}} tietuetta jäljellä.',
  'TPL_MASSLINK_DURATION_FORMAT' => '(noin {{time}} {{unit}} jäljellä)',
  'TPL_MASSLINK_FAIL_TO_ATTEMPT' => 'Massalinkitys epäonnistui. Yritetään uudelleen ({{num}}/{{total}}).',
  'TPL_MASSLINK_PROGRESS_STATUS' => 'Linkitetään {{num}}/{{total}}',
  'TPL_MASSLINK_SUCCESS' => '{{num}} tietuetta linkitettiin.',
  'TPL_MASSLINK_TITLE' => 'Massalinkitys: {{module}}',
  'TPL_MASSLINK_WARNING_CLOSE' => 'Massalinkitys kesken. {{num}} tietuetta lisäämättä.',
  'TPL_MASSLINK_WARNING_INCOMPLETE' => 'Massalinkitys kesken. {{num}} tietuetta lisäämättä.',
  'TPL_MASSUPDATE_DURATION_FORMAT' => '(noin {{time}} {{unit}} jäljellä)',
  'TPL_MASSUPDATE_FAIL_TO_ATTEMPT' => 'Massapäivitys epäonnistui. Yritetään uudelleen ({{num}}/{{total}}).',
  'TPL_MASSUPDATE_PROGRESS_STATUS' => 'Päivitetään {{num}}/{{total}}.',
  'TPL_MASSUPDATE_SUCCESS' => 'Päivitettiin {{num}} tietuetta.',
  'TPL_MASSUPDATE_TITLE' => '{{module}} massapäivitys',
  'TPL_MASSUPDATE_WARNING_CLOSE' => 'Massapäivitys puutteellinen. {{num}} tietuetta jätettiin muuttamatta.',
  'TPL_MASSUPDATE_WARNING_INCOMPLETE' => 'Massapäivitys puutteellinen. {{num}} tietuetta jätettiin muuttamatta.',
  'TPL_MASSUPDATE_WARNING_PERMISSION' => '{{remain}} tietuetta ohitettiin oikeuksien takia.',
  'TPL_MASS_ADD_TO_LIST_QUEUED' => 'Pyyntösi lisätä tietueita tavoitelistaan <a href=\'{{listUrl}}\'>{{listName}}</a> on lisätty jonoon.',
  'TPL_MASS_ADD_TO_LIST_SUCCESS' => 'Valitut tietueet lisättiin tavoitelistaan <a href=\'{{listUrl}}\'>{{listName}}</a>.',
  'TPL_MERGE_DUPLICATES_FAIL' => 'Liittyvien {{objectName}} yhdistäminen epäonnistui.',
  'TPL_MERGE_DUPLICATES_FAIL_TO_ATTEMPT' => 'Liittyvien {{objectName}} yhdistäminen epäonnistui. Yritetään uudelleen ({{num}}/{{total}}).',
  'TPL_MERGE_DUPLICATES_IDENTICAL' => 'Kaikki liittyvät tietueet siirretään ensisijaiseen tietueeseen.',
  'TPL_MERGE_DUPLICATES_PROGRESS_STATUS' => 'Yhdistetty {{percent}} %.',
  'TPL_MERGE_DUPLICATES_STAT' => 'Yhdistettiin {{#with stat}}{{records}} tietuetta. {{total}} liittyvää tietuetta lisättiin.{{/with}}',
  'TPL_MERGE_INVALID_NUMBER_RECORDS' => 'Syötettiin virheellinen määrä tietueita. Validi tietuemäärä on {{minRecords}} ja {{maxRecords}} välillä.',
  'TPL_MERGING_RECORDS' => 'Yhdistetään {{mergeCount}} tietuetta',
  'TPL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_DESCRIPTION' => 'Jotta tietueen­määritys­ilmoituksia voidaan lähettää, pitää {{emailSettingsUrl}} konfiguroida SMTP-palvelin.',
  'TPL_OVERWRITE_POPULATED_DATA_CONFIRM' => 'Valittu tietue sisältää seuraavat arvot: {{{values}}}. Klikkaa “Vahvista” kopioidaksesi nämä arvot tähän tietueeseen. Klikkaa “Peruuta” pitääksesi nykyiset arvot.',
  'TPL_OVERWRITE_POPULATED_DATA_CONFIRM_WITH_MODULE_SINGULAR' => 'Valitulla {{moduleSingularLower}} on liittyviä arvoja: {{values}}. Peruuta pitääksesi olemassa olevat arvot. Vahvista ylikirjoittaaksesi uusilla arvoilla.',
  'TPL_RECORD_SHARE_BODY' => 'Checkouttaa {{moduleSingular}} {{name}} ohjelmasta {{appId}}',
  'TPL_RECORD_SHARE_SUBJECT' => 'Jaettu {{moduleSingular}} {{name}} ohjelmasta {{appId}}',
  'TPL_SHOW_MORE_MODULE' => 'Lisää {{moduleSingular}}-tietueita',
  'TPL_STATUS_CHANGE_SUCCESS' => '{{moduleSingular}}-tietueen status on nyt {{status}}.',
  'TPL_TABBED_DASHLET_GROUP_BUTTON_LABEL' => 'Tiimihistoria',
  'TPL_TABBED_DASHLET_USER_BUTTON_LABEL' => 'Historia',
  'TPL_TIMEZONE_DIFFERENT' => 'Selaimesi aikavyöhyke ei täsmää tallennettua aikavyöhykettä. {{link}}',
  'UPLOAD_ERROR_HOME_TEXT' => 'VIRHE: Virhe ladattaessa tiedostoa palvelimelle. Ota yhteys järjestelmän ylläpitäjään.',
  'UPLOAD_ERROR_TEXT' => 'VIRHE: Virhe ladattaessa tiedostoa palvelimelle. Virhekoodi: {0} - {1}',
  'UPLOAD_ERROR_TEXT_SIZEINFO' => 'VIRHE: Virhe ladattaessa tiedostoa palvelimelle. Virhekoodi: {0} - {1}. Suurin tiedoston koko {2}',
  'UPLOAD_MAXIMUM_EXCEEDED' => 'Latauksen koko {0} tavua. Ylitettiin sallittu maksimi, joka on {1} tavua.',
  'UPLOAD_REQUEST_ERROR' => 'Virhe on tapahtunut. Päivitä sivu ja yritä uudelleen.',
  'WARNING_NO_DELETE_CLOSED_SELECTED_STATUS' => 'Yhtellä tai useammalla valituista tietueita on tuoterivi, jonka status on "suljettu - voitettu" tai "suljettu - hävitty", eikä täten tietueita voi poistaa.',
  'WARNING_NO_DELETE_SELECTED' => 'Valituista tietueista yhden tai useamman myyntivaihe on ‘Suljettu / voitettu’ tai ‘Suljettu / hävitty’, ja tietueita ei voida poistaa.',
  'WARNING_NO_DELETE_SELECTED_STAGE' => 'Yhtellä tai useammalla valituista tietueita on myyntivaiheena “suljettu - voitettu” tai “suljettu - hävitty”, eikä täten tietueita voi poistaa.',
  'WARNING_NO_DELETE_SELECTED_STATUS' => 'Yhtellä tai useammalla valituista tietueita on myyntistatuksena “suljettu - voitettu” tai “suljettu - hävitty”, eikä täten tietueita voi poistaa.',
  'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Huomautus:</b> Selaimesi on IE:n yhteensopivuustilassa. Yhteensopivuustilaa ei tueta.',
  'WARN_BROWSER_VERSION_WARNING' => '<b>Huomautus:</b> Selainversiotasi ei tueta enää tai käytät ei-tuettua selainta.<br />Suosittelemme seuraavia selainversioita:<br /><ul><li>Internet Explorer 9 (yhteensopivuustilaa ei tueta)</li><li>Firefox 17</li><li>Safari 5.1</li><li>Chrome 24</li></ul>',
  'WARN_LICENSE_EXPIRED' => 'Yrityksesi SugarCRM-lisenssi umpeutuu pian.',
  'WARN_LICENSE_SEATS' => 'Varoitus: Aktiivisten käyttäjien määrä ylittää lisenssien salliman määrän.',
  'WARN_LICENSE_SEATS_MAXED' => 'Varoitus: aktiivisten käyttäjien määrä ylittää sallitun lisenssien enimmäismäärän.',
  'WARN_LICENSE_VALIDATION' => 'Yrityksesi SugarCRM-lisenssi pitää validoida pian.',
  'WARN_ONLY_ADMINS' => 'Vain järjestelmänvalvojat voivat kirjautua sisään.',
  'WARN_UNSAVED_CHANGES' => 'Olet lähdössä tästä tietueesta tallentamatta mahdollisesti tekemiäsi muutoksia. Oletko varma että haluat poistua tietueelta?',
);

