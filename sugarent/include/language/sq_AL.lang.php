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
    0 => 'E pamundësuar',
    1 => 'Rritje e ulët',
    2 => 'Rritje e mesme',
    3 => 'Rritje e lartë',
  ),
  'account_type_dom' => 
  array (
    '' => '',
    'Analyst' => 'Analist',
    'Competitor' => 'Konkurent',
    'Customer' => 'Konsumator',
    'Integrator' => 'Integrues',
    'Investor' => 'Investitor',
    'Other' => 'Tjetër',
    'Partner' => 'Partner',
    'Press' => 'shtypi',
    'Prospect' => 'Prospekti',
    'Reseller' => 'Rishitës',
  ),
  'activity_dom' => 
  array (
    'Call' => 'Thirje',
    'Email' => 'Email',
    'Meeting' => 'Mbledhje',
    'Note' => 'Shënim',
    'Task' => 'Detyrë',
  ),
  'activity_user_options' => 
  array (
    7 => '7 ditët e fundit',
    30 => '30 ditët e fundit',
    90 => 'Kurtali i fundit',
  ),
  'bopselect_type_dom' => 
  array (
    'Equals' => 'Është i barabrtë',
  ),
  'bselect_type_dom' => 
  array (
    'bool_false' => 'Jo',
    'bool_true' => 'Po',
  ),
  'bug_priority_dom' => 
  array (
    'High' => 'I lartë',
    'Low' => 'I ulët',
    'Medium' => 'Mesatar',
    'Urgent' => 'Urgjente',
  ),
  'bug_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'I pranuar',
    'Duplicate' => 'Dublo',
    'Fixed' => 'Fiks',
    'Invalid' => 'Jo valide',
    'Later' => 'Më vonë',
    'Out of Date' => 'Jashtë datës',
  ),
  'bug_status_dom' => 
  array (
    'Assigned' => 'Drejtuar',
    'Closed' => 'I mbyllur',
    'New' => 'I ri',
    'Pending' => 'Pezull',
    'Rejected' => 'Anuluar',
  ),
  'bug_type_dom' => 
  array (
    'Defect' => 'Defekt',
    'Feature' => 'Ardhmëri',
  ),
  'business_rule_type_list' => 
  array (
    'single' => 'Gjuajtje e vetme',
  ),
  'call_direction_dom' => 
  array (
    'Inbound' => 'përbrenda',
    'Outbound' => 'për jashtë',
  ),
  'call_status_dom' => 
  array (
    'Held' => 'I mbajtur',
    'Not Held' => 'Anuluar',
    'Planned' => 'Caktuar',
  ),
  'campaign_status_dom' => 
  array (
    '' => '',
    'Active' => 'aktive',
    'Complete' => 'Plotëso',
    'In Queue' => 'Në radhë',
    'Inactive' => 'pasive',
    'Planning' => 'Planifikim',
    'Sending' => 'Dërgim',
  ),
  'campaign_type_dom' => 
  array (
    '' => '',
    'Email' => 'Email',
    'Mail' => 'Mail',
    'NewsLetter' => 'Buletinat',
    'Print' => 'Shtyp',
    'Radio' => 'Radio',
    'Telesales' => 'Teleshitjet',
    'Television' => 'Televizion',
    'Web' => 'Uebi',
  ),
  'campainglog_activity_type_dom' => 
  array (
    '' => '',
    'blocked' => 'Shtypur nga adresa ose domaini',
    'contact' => 'Kontakted e krijuara',
    'invalid email' => 'Mesazhet e refuzuara,Email jovalid',
    'lead' => 'Udhëheqjet e krijuara',
    'link' => 'Shtyp përmes lidhjes',
    'removed' => 'e zgjedhur jashtë',
    'send error' => 'Mesazhet e refuzuara,Tjera',
    'targeted' => 'Mesazhi është dërguar/ Është provuar',
    'viewed' => 'Mesazhet e para',
  ),
  'campainglog_target_type_dom' => 
  array (
    'Accounts' => 'llogaritë',
    'Contacts' => 'Kontaktet',
    'Leads' => 'udhëheqjet',
    'Prospects' => 'synimet',
    'Users' => 'përdoruesit',
  ),
  'case_priority_dom' => 
  array (
    'P1' => 'I lartë',
    'P2' => 'Mesatar',
    'P3' => 'I ulët',
  ),
  'case_relationship_type_dom' => 
  array (
    '' => '',
    'Alternate Contact' => 'Kontakti alternativ',
    'Primary Contact' => 'Kontakti primar',
  ),
  'case_status_dom' => 
  array (
    'Assigned' => 'Drejtuar',
    'Closed' => 'Mbyllur',
    'Duplicate' => 'Dublo',
    'New' => 'I ri',
    'Pending Input' => 'Të hyrat e pezulluara',
    'Rejected' => 'Anuluar',
  ),
  'case_type_dom' => 
  array (
    'Administration' => 'Administrimi',
    'Product' => 'Produkti',
    'User' => 'Përdorues',
  ),
  'charset_dom' => 
  array (
    'BIG-5' => '5 e madhe (Tajvani dhe Hong Kongu)',
    'CP1251' => 'CP1251 (MS KIrilliK)',
    'CP1252' => 'CP1252 (MS Europa Perendimore & SHBA)',
    'EUC-CN' => 'EUC-CN (Kinezisht e thjeshtuar GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Japoneze)',
    'EUC-KR' => 'EUC-KR (Koreane)',
    'EUC-TW' => 'EUC-TW (Tajvanese)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japonese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Koreane)',
    'ISO-8859-1' => 'ISO-8859-1 (Europës Perendimore dhe SHBA)',
    'ISO-8859-10' => 'ISO-8859-10 (Latinic 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latinic 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latinic 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latinic 9)',
    'ISO-8859-2' => 'ISO-8859-2 (Europaës Qendrore dhe Lindore)',
    'ISO-8859-3' => 'ISO-8859-3 (LatinIC 3)',
    'ISO-8859-4' => 'ISO-8859-4 (LatinIC 4)',
    'ISO-8859-5' => 'ISO-8859-5 (KIrilliK)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabike)',
    'ISO-8859-7' => 'ISO-8859-7 (Greqishte)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebreike)',
    'ISO-8859-9' => 'ISO-8859-9 (Latincë 5)',
    'KOI8-R' => 'KOI8-R (Rusishta Kirilike)',
    'KOI8-U' => 'KOI8-U (Ukraniase në kirilisht)',
    'SJIS' => 'SJIS (MS Japonese)',
    'UTF-8' => 'UTF-8',
  ),
  'chart_strings' => 
  array (
    'barchart' => 'Grafiku në formë shtylle',
    'clickfordrilldown' => 'Klikoni për stërvitjen poshtë',
    'collapselegend' => 'Legjenda e Kolapsit',
    'detailview' => 'Më tepër detaje',
    'drilldownoptions' => 'Opsioni i stërvitjes poshtë',
    'expandlegend' => 'Zgjerimi i legjendës',
    'groupchart' => 'Grafiku në fomrë grupi',
    'horizontalbarchart' => 'Grafiku në formë shtylle horizontale',
    'linechart' => 'Grafiku në fomrë drejtëze',
    'noData' => 'Të dhënat nuk janë të disponueshme',
    'pieWedgeName' => 'pjesët',
    'piechart' => 'Grafiku në formë torte',
    'print' => 'Shtyp',
    'stackedchart' => 'Grafiku i rregulluar',
  ),
  'checkbox_dom' => 
  array (
    '' => '',
    1 => 'PO',
    2 => 'Jo',
  ),
  'checkbox_massupdate_dom' => 
  array (
    0 => 'Jo',
    1 => 'Po',
  ),
  'commit_stage_binary_dom' => 
  array (
    'exclude' => 'përjashto',
    'include' => 'përfshij',
  ),
  'commit_stage_custom_dom' => 
  array (
    'exclude' => 'përjashto',
    'include' => 'përfshij',
    'upside' => 'përmbysur',
  ),
  'commit_stage_dom' => 
  array (
    'exclude' => 'përjashto',
    'include' => 'përfshij',
    'upside' => 'përmbysur',
  ),
  'contract_expiration_notice_dom' => 
  array (
    1 => '1 ditë',
    3 => '3 ditë',
    5 => '5 ditë',
    7 => '1 javë',
    14 => '2 javë',
    21 => '3 javë',
    31 => '1 muaj',
  ),
  'contract_payment_frequency_dom' => 
  array (
    'halfyearly' => 'Gjysëmvjetore',
    'monthly' => 'Mujore',
    'quarterly' => 'Semestrale',
    'yearly' => 'Vjetore',
  ),
  'contract_status_dom' => 
  array (
    'inprogress' => 'Në progres',
    'notstarted' => 'Nuk ka filluar',
    'signed' => 'Nënshkruar',
  ),
  'countries_dom' => 
  array (
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGANISTAN',
    'ALBANIA' => 'Shqipëria',
    'ALGERIA' => 'ALGjERIA',
    'AMERICAN SAMOA' => 'AMERICAN SAMOA',
    'ANDORRA' => 'ANDORA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARKTIKU',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGJENTINA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'AUSTRIA',
    'AZERBAIJAN' => 'AZERBEXHAN',
    'BAHAMAS' => 'BAHAMA',
    'BAHRAIN' => 'BAHRAN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BELARUSIA',
    'BELGIUM' => 'BELGJIA',
    'BELIZE' => 'BELIZI',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNJA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET ISLAND',
    'BRAZIL' => 'BRAZIL',
    'BRITISH ANTARCTICA TERRITORY' => 'Territori i Antartikut Britanik',
    'BRITISH INDIAN OCEAN TERRITORY' => 'Teritori i Oqeanit Indian Britanik',
    'BRITISH VIRGIN ISLANDS' => 'Ishujt e Virxhinjës Britanike',
    'BRITISH WEST INDIES' => 'Britanikët e Indisë Perëndimore',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULLGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'KAMBODIA',
    'CAMEROON' => 'KAMERON',
    'CANADA' => 'KANADA',
    'CANAL ZONE' => 'ZONA E KANALIT',
    'CANARY ISLAND' => 'KANARY ISLAND',
    'CAPE VERDI ISLANDS' => 'kAPE VERDI ISLANDS',
    'CAYMAN ISLANDS' => 'kAYMAN ISLANDS',
    'CEVLON' => 'CEVLON',
    'CHAD' => 'CHAD',
    'CHANNEL ISLAND UK' => 'Kanali i ishullit në Britaninë e Madhe',
    'CHILE' => 'KILI',
    'CHINA' => 'KINA',
    'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
    'COLOMBIA' => 'KOLUMBIA',
    'COMORO ISLANDS' => 'COMORO ISLANDS',
    'CONGO' => 'KONGO',
    'CONGO KINSHASA' => 'KONGO KINSHASA',
    'COOK ISLANDS' => 'COOK ISLANDS',
    'COSTA RICA' => 'KOSTA RIKA',
    'CROATIA' => 'KROACI',
    'CUBA' => 'KUBA',
    'CURACAO' => 'KURAKAO',
    'CYPRUS' => 'QIPRI',
    'CZECH REPUBLIC' => 'REPUBLIKA E ÇEKISË',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DANIMARKË',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINIKA',
    'DOMINICAN REPUBLIC' => 'REPUBLICA DOMENIKANE',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'EKUADOR',
    'EGYPT' => 'EGJIPT',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'GUINEA EKUATORIALE',
    'ESTONIA' => 'ESTONI',
    'ETHIOPIA' => 'ETIOPI',
    'FAEROE ISLANDS' => 'Ishujt Faeroe',
    'FALKLAND ISLANDS' => 'FALKLAND ISLANDS',
    'FIJI' => 'FIJI',
    'FINLAND' => 'FINLANDA',
    'FRANCE' => 'FRANCA',
    'FRENCH GUIANA' => 'GUIANA FRANCEZE',
    'FRENCH POLYNESIA' => 'POLYNESIA FRACENZE',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'XHORXHIA',
    'GERMANY' => 'GJERMANIA',
    'GHANA' => 'GANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GREQIA',
    'GREENLAND' => 'GRINLAND',
    'GUADELOUPE' => 'GUADELUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'HUNGARIA',
    'ICELAND' => 'IRLANDA',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIA',
    'INDONESIA' => 'INDONESIA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'IRLAND',
    'ISRAEL' => 'IZRAEL',
    'ITALY' => 'ITALIA',
    'IVORY COAST' => 'IVORY KOAST',
    'JAMAICA' => 'JAMAIKA',
    'JAPAN' => 'JAPONIA',
    'JORDAN' => 'JORDAN',
    'KAZAKHSTAN' => 'KAZAKISTAN',
    'KENYA' => 'KENIA',
    'KOREA' => 'KOREA',
    'KOREA, SOUTH' => 'KOREA, JUGORE',
    'KUWAIT' => 'KUVAITI',
    'KYRGYZSTAN' => 'KIRGIZISTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LATVIA',
    'LEBANON' => 'LEBANON',
    'LEEWARD ISLANDS' => 'ISHUJTË E LEEWARD',
    'LESOTHO' => 'LESOTO',
    'LIBYA' => 'LIBIA',
    'LIECHTENSTEIN' => 'LITENSHTAJN',
    'LITHUANIA' => 'LITUANIA',
    'LUXEMBOURG' => 'LUKSEMBURG',
    'MACAO' => 'MAKAO',
    'MACEDONIA' => 'MAQEDONIA',
    'MADAGASCAR' => 'MADAGASKAR',
    'MALAWI' => 'MALAVIA',
    'MALAYSIA' => 'MALAZIA',
    'MALDIVES' => 'MALDIVI',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIKUE',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANEZIA',
    'MEXICO' => 'MEKSIKË',
    'MOLDOVIA' => 'MOLDOVI',
    'MONACO' => 'MONAKO',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MAROKO',
    'MOZAMBIQUE' => 'MOZAMBIK',
    'MYANAMAR' => 'MIANAMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'HOLANDI',
    'NETHERLANDS ANTILLES' => 'Antilet Hollandeze',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'Antilet Hollandeze të zonës neutrale',
    'NEW CALADONIA' => 'KALADONIA E RE',
    'NEW HEBRIDES' => 'HEBRIDET E REJA',
    'NEW ZEALAND' => 'ZEJLANDI I RI',
    'NICARAGUA' => 'NIKARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'ISHUJTË E NORFLOK',
    'NORWAY' => 'NORVEGJIA',
    'OMAN' => 'OMAN',
    'OTHER' => 'TJERËi',
    'PACIFIC ISLAND' => 'ISHULLI PACIFIK',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA  GUINEA E RE',
    'PARAGUAY' => 'PARAGUAJ',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'FILIPINËT',
    'POLAND' => 'POLONIA',
    'PORTUGAL' => 'PORTUGALIA',
    'PORTUGUESE TIMOR' => 'Timori i portugezit',
    'PUERTO RICO' => 'PUERTO RIKO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'REPUBLIKA E BELARUSISË',
    'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIKA E  AFRIKËS JUGORE',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'ROMANIA',
    'RUSSIA' => 'RUSIA',
    'RWANDA' => 'RUANDA',
    'RYUKYU ISLANDS' => 'ISHUJTË RUKUJI',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'SAUDI ARABIA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SËRBIA',
    'SEYCHELLES' => 'Sishell',
    'SIERRA LEONE' => 'SIERRA LIONE',
    'SINGAPORE' => 'SINGAPUR',
    'SLOVAKIA' => 'SLOVAKIA',
    'SLOVENIA' => 'SLOVENIA',
    'SOMALILIAND' => 'SOMALIA',
    'SOUTH AFRICA' => 'AFRIKA JUGORE',
    'SOUTH YEMEN' => 'JEMENI JUGOR',
    'SPAIN' => 'SPANJA',
    'SPANISH SAHARA' => 'SAHARA SPANJOLLE',
    'SRI LANKA' => 'SHRI LANKA',
    'ST. KITTS AND NEVIS' => 'SHËN. KITTS AND NEVIS',
    'ST. LUCIA' => 'SHËN. LUSIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'SW AFRIKA',
    'SWAZILAND' => 'ZVICRA',
    'SWEDEN' => 'SUEDIA',
    'SWITZERLAND' => 'ZVICRA',
    'SYRIA' => 'SIRIA',
    'TAIWAN' => 'TAJVANI',
    'TAJIKISTAN' => 'TAZAKISTANI',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'TAJLANDA',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNIZI',
    'TURKEY' => 'TURQIA',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINA',
    'UNITED ARAB EMIRATES' => 'SHTETET E BASKUARA TË EMIRATËVE',
    'UNITED KINGDOM' => 'KOMBET E BASHKUARA',
    'UPPER VOLTA' => 'VOLTA E SIPËRME',
    'URUGUAY' => 'URUGUAJ',
    'US PACIFIC ISLAND' => 'Ishulli paqësor Amerikan',
    'US VIRGIN ISLANDS' => 'ISHUJTË E VIRXHINJËS SË SHTETEVE TË BASHKUARA',
    'USA' => 'SHBA',
    'UZBEKISTAN' => 'UZBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'QYTETI I VATIKANIT',
    'VENEZUELA' => 'VENECUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'ISHULLI WAKE',
    'WEST INDIES' => 'INDIETDIMORE PERENDIMOR',
    'WESTERN SAHARA' => 'SAHARA PERENDIMORE',
    'YEMEN' => 'JEMEN',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABUE',
  ),
  'cselect_type_dom' => 
  array (
    'Does not Equal' => 'Nuk është i barabartë',
    'Equals' => 'Është i barabrtë',
  ),
  'custom_fields_importable_dom' => 
  array (
    'false' => 'Jo',
    'required' => 'E nevojshme',
    'true' => 'Po',
  ),
  'custom_fields_merge_dup_dom' => 
  array (
    0 => 'E pamundësuar',
    1 => 'Mundësuar',
    2 => 'Në filtër',
    3 => 'Çaktivizo filtrin e selektuar',
    4 => 'Filtro vetëm',
  ),
  'custom_layout_dom' => 
  array (
    'Disabled' => 'e pamundur',
    'Enabled' => 'e mundur',
  ),
  'd3_chart_types' => 
  array (
    'bar chart' => 'Diagrami i linjave vertikale',
    'funnel chart 3D' => 'Diagrami gypor',
    'group by chart' => 'Diagrami grupor i linjave vertikale',
    'horizontal bar chart' => 'Grafiku në formë shtylle horizontale',
    'horizontal group by chart' => 'Diagrami grupor i linjave horizontale',
    'line chart' => 'Grafiku në fomrë drejtëze',
    'pie chart' => 'Grafiku në formë torte',
  ),
  'd3_value_placement' => 
  array (
    'end' => 'End',
    'middle' => 'Middle',
    0 => 'None',
    'start' => 'Start',
    'top' => 'Top',
    1 => 'Default',
  ),
  'dashlet_auto_refresh_options' => 
  array (
    -1 => 'Do not auto-refresh',
    30 => 'Every 30 seconds',
    60 => 'Every 1 minute',
    180 => 'Every 3 minutes',
    300 => 'Every 5 minutes',
    600 => 'Every 10 minutes',
  ),
  'dashlet_auto_refresh_options_admin' => 
  array (
    -1 => 'Asnjëherë',
    30 => 'Çdo 30 sekonda',
    60 => 'Çdo 1 minutë',
    180 => 'Çdo 3 minuta',
    300 => 'Çdo 5 minuta',
    600 => 'Çdo 10 minuta',
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
    'Normal' => 'Normal',
    'Scalar' => 'Shkallë',
  ),
  'dataset_att_format_type_dom' => 
  array (
    'Accounting' => 'Kontabilitet',
    'Date' => 'Data',
    'Datetime' => 'Data dhe koha',
    'Text' => 'Tekst',
  ),
  'dataset_att_format_type_scalar_dom' => 
  array (
    'Day' => 'dita',
    'Month' => 'Muaji',
    'Quarter' => 'Semestri',
    'Week' => 'Java',
    'Year' => 'Viti',
  ),
  'dataset_layout_type_dom' => 
  array (
    'Column' => 'Kolona',
  ),
  'dataset_style_dom' => 
  array (
    'bold' => 'i zi',
    'italic' => 'kursive',
    'normal' => 'Normal',
  ),
  'date_range_operator_dom' => 
  array (
    'last_30_days' => '30 ditët e fundit',
    'last_7_days' => '7 ditët e fundit',
    'last_month' => 'Muajin e kaluar',
    'last_year' => 'Vitin e kaluar',
    'next_30_days' => '30 ditët e ardhëshme',
    'next_7_days' => '7 ditët e ardhëshme',
    'next_month' => 'Muajin e ardhshëm',
    'next_year' => 'Viti i  ardhshëm',
    'this_month' => 'Këtë muaj',
    'this_year' => 'Këtë vit',
  ),
  'date_range_search_dom' => 
  array (
    '=' => 'Është i barabrtë',
    'between' => 'është mes',
    'greater_than' => 'pas',
    'last_30_days' => '30 ditët e fundit',
    'last_7_days' => '7 ditët e fundit',
    'last_month' => 'Muajin e kaluar',
    'last_year' => 'Vitin e kaluar',
    'less_than' => 'para',
    'next_30_days' => '30 ditët e ardhëshme',
    'next_7_days' => '7 ditët e ardhëshme',
    'next_month' => 'Muajin e ardhshëm',
    'next_year' => 'Vitin e ardhshëm',
    'not_equal' => 'nuk është',
    'this_month' => 'Këtë muaj',
    'this_year' => 'Këtë vit',
  ),
  'dnb_bal_after_before_btw' => 
  array (
    'btw' => 'Ndërmjet',
    'gte' => 'Pas',
    'lte' => 'Para',
  ),
  'dnb_bal_filing_trading_option' => 
  array (
    'filingdate' => 'Data e mbushjes',
    'tradingdate' => 'Data e tregtimit',
  ),
  'dnb_bal_gte_lte_btw' => 
  array (
    'btw' => 'Ndërmjet',
    'gte' => 'Më e madhe ose e barabartë me',
    'lte' => 'Më e vogël ose e barabartë me',
  ),
  'dnb_bal_miles_km' => 
  array (
    3349 => 'KM',
    3353 => 'Milje',
  ),
  'dnb_bal_prescreen_options' => 
  array (
    10925 => 'Poshtë',
    10926 => 'Mesatarisht',
    10927 => 'Lart',
  ),
  'dnb_bal_primary_secondary' => 
  array (
    'false' => 'Primare dhe sekondare',
    'true' => 'Vetëm primare',
  ),
  'dnb_bal_single_all' => 
  array (
    'allsites' => 'Të gjitha faqet',
    'singlesite' => 'Faqe e vetme',
  ),
  'dnb_contact_kw_scope' => 
  array (
    'Bio' => 'Bio',
    'Both' => 'Të dyja',
    'Title' => 'Titull',
  ),
  'dnb_contact_types' => 
  array (
    'Contacts' => 'Kontakte',
    'Leads' => 'Udhëheqje',
    'Prospects' => 'Prospekte',
  ),
  'dnb_countries_iso' => 
  array (
    'AD' => 'Andora',
    'AE' => '',
    'AF' => 'Afganistan',
    'AG' => 'Antigua dhe Barbuda',
    'AI' => 'Anguilla',
    'AL' => 'Shqipëria',
    'AM' => 'Armenia',
    'AN' => '',
    'AO' => 'Angola',
    'AQ' => 'Antarktika',
    'AR' => 'Argjentina',
    'AS' => 'Samoa amerikane',
    'AT' => 'Austria',
    'AU' => 'Australia',
    'AW' => 'Aruba',
    'AZ' => 'Azerbejxhani',
    'BA' => '',
    'BB' => '',
    'BD' => 'Bangladeshi',
    'BE' => '',
    'BF' => '',
    'BG' => '',
    'BH' => 'Bahreni',
    'BI' => '',
    'BJ' => '',
    'BM' => '',
    'BN' => '',
    'BO' => '',
    'BR' => '',
    'BS' => '',
    'BT' => '',
    'BV' => '',
    'BW' => '',
    'BY' => '',
    'BZ' => '',
    'CA' => '',
    'CC' => '',
    'CD' => '',
    'CF' => '',
    'CG' => '',
    'CH' => '',
    'CI' => '',
    'CK' => '',
    'CL' => '',
    'CM' => '',
    'CN' => '',
    'CO' => '',
    'CR' => '',
    'CU' => '',
    'CV' => '',
    'CX' => '',
    'CY' => '',
    'CZ' => '',
    'DE' => '',
    'DJ' => '',
    'DK' => '',
    'DM' => '',
    'DO' => '',
    'DZ' => 'Alzheria',
    'EC' => '',
    'EE' => '',
    'EG' => '',
    'EH' => '',
    'ER' => '',
    'ES' => '',
    'ET' => '',
    'FI' => '',
    'FJ' => '',
    'FK' => '',
    'FM' => '',
    'FO' => '',
    'FR' => '',
    'FX' => '',
    'GA' => '',
    'GB' => '',
    'GD' => '',
    'GE' => '',
    'GF' => '',
    'GH' => '',
    'GI' => '',
    'GL' => '',
    'GM' => '',
    'GN' => '',
    'GP' => '',
    'GQ' => '',
    'GR' => '',
    'GS' => '',
    'GT' => '',
    'GU' => '',
    'GW' => '',
    'GY' => '',
    'HK' => '',
    'HM' => '',
    'HN' => '',
    'HR' => '',
    'HT' => '',
    'HU' => '',
    'ID' => '',
    'IE' => '',
    'IL' => '',
    'IN' => '',
    'IO' => '',
    'IQ' => '',
    'IR' => '',
    'IS' => '',
    'IT' => '',
    'JM' => '',
    'JO' => '',
    'JP' => '',
    'KE' => '',
    'KG' => '',
    'KH' => '',
    'KI' => '',
    'KM' => '',
    'KN' => '',
    'KP' => '',
    'KR' => '',
    'KW' => '',
    'KY' => '',
    'KZ' => '',
    'LA' => '',
    'LB' => '',
    'LC' => '',
    'LI' => '',
    'LK' => '',
    'LR' => '',
    'LS' => '',
    'LT' => '',
    'LU' => '',
    'LV' => '',
    'LY' => '',
    'MA' => '',
    'MC' => '',
    'MD' => '',
    'ME' => '',
    'MG' => '',
    'MH' => '',
    'MK' => '',
    'ML' => '',
    'MM' => '',
    'MN' => '',
    'MO' => '',
    'MP' => '',
    'MQ' => '',
    'MR' => '',
    'MS' => '',
    'MT' => '',
    'MU' => '',
    'MV' => '',
    'MW' => '',
    'MX' => '',
    'MY' => '',
    'MZ' => '',
    'NA' => '',
    'NC' => '',
    'NE' => '',
    'NF' => '',
    'NG' => '',
    'NI' => '',
    'NL' => '',
    'NO' => '',
    'NP' => '',
    'NR' => '',
    'NU' => '',
    'NZ' => '',
    'OM' => '',
    'PA' => '',
    'PE' => '',
    'PF' => '',
    'PG' => '',
    'PH' => '',
    'PK' => '',
    'PL' => '',
    'PM' => '',
    'PN' => '',
    'PR' => '',
    'PS' => '',
    'PT' => '',
    'PW' => '',
    'PY' => '',
    'QA' => '',
    'RE' => '',
    'RO' => '',
    'RS' => '',
    'RU' => '',
    'RW' => '',
    'SA' => '',
    'SB' => '',
    'SC' => '',
    'SD' => '',
    'SE' => '',
    'SG' => '',
    'SH' => '',
    'SI' => '',
    'SJ' => '',
    'SK' => '',
    'SL' => '',
    'SM' => '',
    'SN' => '',
    'SO' => '',
    'SR' => '',
    'ST' => '',
    'SV' => '',
    'SY' => '',
    'SZ' => '',
    'TC' => '',
    'TD' => '',
    'TF' => '',
    'TG' => '',
    'TH' => '',
    'TJ' => '',
    'TK' => '',
    'TM' => '',
    'TN' => '',
    'TO' => '',
    'TP' => '',
    'TR' => '',
    'TT' => '',
    'TV' => '',
    'TW' => '',
    'TZ' => '',
    'UA' => '',
    'UG' => '',
    'UM' => '',
    'US' => '',
    'UY' => '',
    'UZ' => '',
    'VA' => '',
    'VC' => '',
    'VE' => '',
    'VG' => '',
    'VI' => '',
    'VN' => '',
    'VU' => '',
    'WF' => '',
    'WS' => '',
    'YE' => '',
    'YT' => '',
    'ZA' => '',
    'ZM' => '',
    'ZW' => '',
  ),
  'dnb_countries_radius_iso' => 
  array (
    'CA' => 'Kanada',
    'US' => 'Shtetet e bashkuara',
  ),
  'dnb_sic_naics_code' => 
  array (
    700 => 'NAICS kodi',
    3599 => 'SIC kodi',
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
        'name' => 'Abu Zaby',
      ),
      2 => 
      array (
        'code' => 'AJ',
        'name' => '\'Ajman',
      ),
      3 => 
      array (
        'code' => 'FU',
        'name' => 'Al Fujayrah',
      ),
      4 => 
      array (
        'code' => 'SH',
        'name' => 'Ash Shariqah',
      ),
      5 => 
      array (
        'code' => 'DU',
        'name' => 'Dubayy',
      ),
      6 => 
      array (
        'code' => 'RK',
        'name' => 'R\'as al Khaymah',
      ),
      7 => 
      array (
        'code' => 'UQ',
        'name' => 'Umm al Qaywayn',
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
        'name' => 'Jarvamaa (Paide)',
      ),
      5 => 
      array (
        'code' => 'JO',
        'name' => 'Jogevamaa (Jogeva)',
      ),
      6 => 
      array (
        'code' => 'LV',
        'name' => 'Laane-Virumaa (Rakvere)',
      ),
      7 => 
      array (
        'code' => 'LA',
        'name' => 'Laanemaa (Haapsalu)',
      ),
      8 => 
      array (
        'code' => 'PA',
        'name' => 'Parnumaa (Parnu)',
      ),
      9 => 
      array (
        'code' => 'PO',
        'name' => 'Polvamaa (Polva)',
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
        'name' => 'Vorumaa (Voru)',
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
        'name' => 'Ahvenanmaan Laani',
      ),
      2 => 
      array (
        'code' => 'ES',
        'name' => 'Etela-Suomen Laani',
      ),
      3 => 
      array (
        'code' => 'IS',
        'name' => 'Ita-Suomen Laani',
      ),
      4 => 
      array (
        'code' => 'LS',
        'name' => 'Lansi-Suomen Laani',
      ),
      5 => 
      array (
        'code' => 'LA',
        'name' => 'Lapin Lanani',
      ),
      6 => 
      array (
        'code' => 'OU',
        'name' => 'Oulun Laani',
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
        'name' => 'HÚsavík',
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
        'name' => 'SaÜl',
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
        'name' => 'P\\\'yongan-bukto',
      ),
      8 => 
      array (
        'code' => 'PYN',
        'name' => 'P\\\'yongan-namdo',
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
        'name' => 'Kasnodar',
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
        'name' => 'Krasnodar',
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
        'name' => 'Moscow',
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
        'name' => 'St. Petersburg',
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
        'name' => 'Dalama',
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
        'name' => 'Ho Chin Minh',
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
    'Knowledege Base' => 'baza e njohurisë',
    'Marketing' => 'marketingu',
    'Sales' => 'Shitjet',
  ),
  'document_status_dom' => 
  array (
    'Active' => 'aktive',
    'Draft' => 'Skicë',
    'Expired' => 'Skaduar',
    'FAQ' => 'pyetje më shpesh të parashtruara',
    'Pending' => 'Pezull',
    'Under Review' => 'Në shqyrtim',
  ),
  'document_subcategory_dom' => 
  array (
    '' => '',
    'FAQ' => 'pyetje më shpesh të parashtruara',
    'Marketing Collateral' => 'marketingu kolateral',
    'Product Brochures' => 'Broshurë e produkteve',
  ),
  'document_template_type_dom' => 
  array (
    '' => '',
    'eula' => 'EULA',
    'license' => 'Kontrata e licencës',
    'mailmerge' => 'Bashkim i  maileve',
    'nda' => 'NDA',
  ),
  'documentation' => 
  array (
    'COM' => '05_Sugar_Community_Edition',
    'CORP' => '03_Sugar_Corporate',
    'ENT' => '02_Sugar_Enterprise',
    'LBL_DOCS' => 'Dokumentacioni',
    'PRO' => '04_Sugar_Professional',
    'ULT' => '01_Sugar_Ultimate',
  ),
  'dom_cal_day_long' => 
  array (
    0 => '',
    1 => 'E diel',
    2 => 'E hënë',
    3 => 'E martë',
    4 => 'E mërkurë',
    5 => 'E enjte',
    6 => 'E premte',
    7 => 'E shtunë',
  ),
  'dom_cal_day_of_week' => 
  array (
    0 => 'E Diel',
    1 => 'E hënë',
    2 => 'E Martë',
    3 => 'E Mërkurë',
    4 => 'E Enjte',
    5 => 'E Premte',
    6 => 'E Shtunë',
  ),
  'dom_cal_day_short' => 
  array (
    0 => '',
    1 => 'Diel',
    2 => 'Hënë',
    3 => 'Mart',
    4 => 'Mërk',
    5 => 'Enjt',
    6 => 'Prem',
    7 => 'Shtu',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Janar',
    2 => 'Shkurt',
    3 => 'Mars',
    4 => 'Prill',
    5 => 'Maj',
    6 => 'Qershor',
    7 => 'Korrik',
    8 => 'Gusht',
    9 => 'Shtator',
    10 => 'Tetor',
    11 => 'Nëntor',
    12 => 'Dhjetor',
  ),
  'dom_cal_month_short' => 
  array (
    0 => '',
    1 => 'Jan',
    2 => 'Shku',
    3 => 'Mar',
    4 => 'Pri',
    5 => 'Maj',
    6 => 'Qer',
    7 => 'Korr',
    8 => 'Gush',
    9 => 'Shat',
    10 => 'Tet',
    11 => 'Nënt',
    12 => 'Dhjet',
  ),
  'dom_email_archived_status' => 
  array (
    'archived' => 'Arkivuar',
  ),
  'dom_email_bool' => 
  array (
    'bool_false' => 'Jo',
    'bool_true' => 'Po',
  ),
  'dom_email_distribution' => 
  array (
    '' => '-asnjëra-',
    'direct' => 'drejtim direkt',
    'leastBusy' => 'Më pak i zënët',
    'roundRobin' => 'Rotull-Robin',
  ),
  'dom_email_distribution_for_auto_create' => 
  array (
    'leastBusy' => 'Më pak i zënët',
    'roundRobin' => 'Rotull-Robin',
  ),
  'dom_email_editor_option' => 
  array (
    '' => 'Format i emailit të çaktivizuar',
    'html' => 'HTML Email',
    'plain' => 'Email me tekst të thjeshtë',
  ),
  'dom_email_errors' => 
  array (
    1 => 'Selekto vetëm një përdorues kur i dërgoni artikujt e caktuar',
    2 => 'Duhet të caktoni vetëm artikujt e kontrollluar kur i dërgoni artikujt e caktuar.',
  ),
  'dom_email_link_type' => 
  array (
    'mailto' => 'Klient i emailit të jashtëm',
    'sugar' => 'Klienti i emailit Sugar',
  ),
  'dom_email_server_type' => 
  array (
    '' => '-Asnjëra',
    'imap' => 'IMAP',
  ),
  'dom_email_status' => 
  array (
    'archived' => 'Arkivuar',
    'closed' => 'I mbyllur',
    'draft' => 'Në skicë',
    'read' => 'Lexo',
    'replied' => 'e përgjigjur',
    'send_error' => 'Dërgo gabim',
    'sent' => 'e dërguar',
    'unread' => 'E palexuar',
  ),
  'dom_email_types' => 
  array (
    'archived' => 'Arkivuar',
    'campaign' => 'Fushata',
    'draft' => 'Skicë',
    'inbound' => 'përbrenda',
    'out' => 'e dërguar',
  ),
  'dom_int_bool' => 
  array (
    0 => 'Jo',
    1 => 'Po',
  ),
  'dom_mailbox_type' => 
  array (
    'bounce' => 'Kthimi i Trajtimit',
    'createcase' => 'Krijo rast',
    'pick' => 'asnjëra',
  ),
  'dom_meeting_accept_options' => 
  array (
    'accept' => 'I pranuar',
    'decline' => 'Refuzo',
    'tentative' => 'Tentativa',
  ),
  'dom_meeting_accept_status' => 
  array (
    'accept' => 'I pranuar',
    'decline' => 'Refuzo',
    'none' => 'Asnjëra',
    'tentative' => 'Tentativa',
  ),
  'dom_meridiem_lowercase' => 
  array (
    'am' => 'Paradite',
    'pm' => 'pasdite',
  ),
  'dom_meridiem_uppercase' => 
  array (
    'AM' => 'Paradite',
    'PM' => 'Pasdite',
  ),
  'dom_report_types' => 
  array (
    'Matrix' => 'Matica',
    'detailed_summary' => 'Përmbledhje me detaje',
    'summary' => 'Përmbledhje',
    'tabular' => 'Reshtat dhe kolonat',
  ),
  'dom_switch_bool' => 
  array (
    '' => 'Jo',
    'off' => 'Jo',
    'on' => 'Po',
  ),
  'dselect_type_dom' => 
  array (
    'Does not Equal' => 'Nuk është i barabartë',
    'Equals' => 'Është i barabrtë',
    'Less Than' => 'më pak se',
    'More Than' => 'më shumë se',
  ),
  'dtselect_type_dom' => 
  array (
    'Less Than' => 'është më pak se',
    'More Than' => 'ishte më shumë se',
  ),
  'duration_dom' => 
  array (
    '' => 'Asnjë',
    900 => '15 minuta',
    1800 => '30 minuta',
    2700 => '45 minuta',
    3600 => '1 orë',
    5400 => '1.5 orë',
    7200 => '2 orë',
    10800 => '3 orë',
    21600 => '6 orë',
    86400 => '1 ditë',
    172800 => '2 ditë',
    259200 => '3 ditë',
    604800 => '1 javë',
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
    'Sugar' => 'Sugar',
    'Twitter' => 'Twitter',
    'WebEx' => 'WebEx',
  ),
  'eapm_list_documents' => 
  array (
    'Google' => 'Google Dok',
  ),
  'eapm_list_import' => 
  array (
    'Google' => 'Google Kontakte',
  ),
  'emailTemplates_type_list' => 
  array (
    '' => '',
    'campaign' => 'Fushata',
    'email' => 'Email',
    'workflow' => 'Rrjedha e punës',
  ),
  'emailTemplates_type_list_campaigns' => 
  array (
    '' => '',
    'campaign' => 'Fushata:',
  ),
  'emailTemplates_type_list_no_workflow' => 
  array (
    '' => '',
    'campaign' => 'Fushata',
    'email' => 'Email',
  ),
  'email_check_interval_dom' => 
  array (
    -1 => 'Manualisht',
    5 => 'çdo 5 minuta',
    15 => 'çdo 15 minuta',
    30 => 'çdo 10 minuta',
    60 => 'çdo orë',
  ),
  'email_marketing_status_dom' => 
  array (
    '' => '',
    'active' => 'aktive',
    'inactive' => 'pasive',
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
    'Active' => 'aktive',
    'Leave of Absence' => 'Largim i mungesave',
    'Terminated' => 'e ndërpritura',
  ),
  'extapi_meeting_password' => 
  array (
    'WebEx' => 'WebEx',
  ),
  'filter_checkbox_dom' => 
  array (
    0 => 'Falso',
    1 => 'E vërtetë',
  ),
  'font_size_dom' => 
  array (
    -5 => 'Më e vogël (-5)',
    -4 => 'Më e vogël (-4)',
    -3 => 'Më e vogël (-3)',
    -2 => 'Më e vogël (-2)',
    -1 => 'Më e vogël (-1)',
    'Default' => 'Çaktivizuar',
    1 => 'Më e madhe (+1)',
    2 => 'Më e madhe (+2)',
    3 => 'Më e madhe (+3)',
    4 => 'Më e madhe (+4)',
    5 => 'Më e madhe (+5)',
  ),
  'forecast_fiscal_year_options' => 
  array (
    'current_year' => '{{vit}}',
    'next_year' => '{{vit}}',
  ),
  'forecast_pareto_visibility_options' => 
  array (
    'group' => 'Parashikimi i ekipit tim',
    'user' => 'Parashikimi im',
  ),
  'forecast_pipeline_visibility_options' => 
  array (
    'group' => 'Tubacioni i ekipit',
    'user' => 'Tubacioni im',
  ),
  'forecast_schedule_status_dom' => 
  array (
    'Active' => 'aktive',
    'Inactive' => 'pasive',
  ),
  'forecast_type_dom' => 
  array (
    'Direct' => 'Direkt',
    'Rollup' => 'Mbështjell',
  ),
  'forecasts_chart_options_group' => 
  array (
    'forecast' => 'Përfshirë në planifikimin',
    'probability' => 'Probabiliteti',
    'sales_stage' => 'Faza e shitjes',
  ),
  'forecasts_config_ranges_options_dom' => 
  array (
    'show_binary' => 'Dy vargjet',
    'show_buckets' => 'tri vargjet',
    'show_custom_buckets' => 'Gjërësa',
  ),
  'forecasts_config_worksheet_layout_forecast_by_options_dom' => 
  array (
    'Opportunities' => 'Mundësite',
    'RevenueLineItems' => 'Rreshti i llojeve të të ardhurave',
  ),
  'forecasts_options_dataset' => 
  array (
    'best' => 'Më i miri',
    'likely' => 'I përshtatshëm',
    'worst' => 'Më i keq',
  ),
  'forecasts_timeperiod_options_dom' => 
  array (
    'Annual' => 'Vjetor (nën-periudha Tremujore)',
    'Quarter' => 'Tremujore (nën-periudha mujore)',
  ),
  'forecasts_timeperiod_types_dom' => 
  array (
    'chronological' => 'vit i bazuar ne datë',
  ),
  'fts_type' => 
  array (
    'Elastic' => 'Kërkim elastik',
  ),
  'gender_list' => 
  array (
    'female' => 'femër',
    'male' => 'Mashkull',
  ),
  'generic_timeperiod_options' => 
  array (
    'current' => 'Këtë semestër',
    'next' => 'Semestrin e ardhshëm',
    'year' => 'Këtë vit',
  ),
  'history_filter_options' => 
  array (
    7 => '7 ditët e fundit',
    30 => '30 ditët e fundit',
    90 => 'Kuartali i fundit',
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
    'group' => 'Jo',
    'user' => 'Po',
  ),
  'import_delimeter_options' => 
  array (
    ',' => ',',
    '.' => '.',
    ':' => ':',
    ';' => ';',
    '\\t' => '\\t',
    'other' => 'Tjetër:',
    '|' => '|',
  ),
  'import_enclosure_options' => 
  array (
    '' => 'Asnjëra',
    '"' => 'Thojëza (")',
    '\'' => 'Citim i vetëm',
    'other' => 'Tjetër:',
  ),
  'in_total_group_stages' => 
  array (
    'Closed Accepted' => 'Afër të pranuara',
    'Closed Dead' => 'Afër të vdekura',
    'Closed Lost' => 'Humbje e mbyllur',
    'Confirmed' => 'Konfirmuar',
    'Delivered' => 'E dërguar',
    'Draft' => 'Skicë',
    'Negotiation' => 'Nogocimi',
    'On Hold' => 'Në pritje',
  ),
  'industry_dom' => 
  array (
    '' => '',
    'Apparel' => 'Veshje',
    'Banking' => 'Veprime bankare',
    'Biotechnology' => 'Bioteknlogjia',
    'Chemicals' => 'Kimikale',
    'Communications' => 'Komunikimi',
    'Construction' => 'Ndërtimtari',
    'Consulting' => 'Konsulting',
    'Education' => 'Edukimi',
    'Electronics' => 'Elektronika',
    'Energy' => 'Energjia',
    'Engineering' => 'Inxhinjeri',
    'Entertainment' => 'Dëfrimi',
    'Environmental' => 'Mjedisi',
    'Finance' => 'Financa',
    'Government' => 'Publike',
    'Healthcare' => 'Kujdesi mjeksor',
    'Hospitality' => 'Mikpritja',
    'Insurance' => 'Sigurimi',
    'Machinery' => 'Maqineria',
    'Manufacturing' => 'Prodhimtaria',
    'Media' => 'Media',
    'Not For Profit' => 'Jo profitabile',
    'Other' => 'Tjetër',
    'Recreation' => 'Rikrijim',
    'Retail' => 'Rishitje',
    'Shipping' => 'Transporti',
    'Technology' => 'Teknologjia',
    'Telecommunications' => 'Telekomunikimi',
    'Transportation' => 'Transporti',
    'Utilities' => 'Shërbimet',
  ),
  'interactions_options' => 
  array (
    'custom' => 'Filteri im',
    'favorites' => 'Favoritet',
    7 => '7 ditët e fundit',
    30 => '30 ditët e fundit',
    90 => 'Kuartali im i fundit',
  ),
  'issue_priority_dom' => 
  array (
    'High' => 'I lartë',
    'Low' => 'I ulët',
    'Medium' => 'Mesatar',
    'Urgent' => 'Urgjente',
  ),
  'issue_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'I pranuar',
    'Closed' => 'I mbyllur',
    'Duplicate' => 'Dublo',
    'Invalid' => 'Jo valide',
    'Out of Date' => 'Jashtë datës',
  ),
  'issue_status_dom' => 
  array (
    'Assigned' => 'Drejtuar',
    'Closed' => 'I mbyllur',
    'New' => 'I ri',
    'Pending' => 'Pezull',
    'Rejected' => 'Anuluar',
  ),
  'kbadmin_actions_dom' => 
  array (
    '' => '--Admin Veprimet--',
    'Apply Tags On Articles' => 'Aplikoni etiketimet në artikuj',
    'Create New Tag' => 'krijo ngjitje të re',
    'Delete Selected Articles' => 'Fshini artikujt të selektuar',
    'Delete Tag' => 'fshi ngjitjen',
    'Move Selected Articles' => 'Lëvizni artikujt e selektuar',
    'Rename Tag' => 'Riemërtoni etikimin',
  ),
  'kbdocument_attachment_option_dom' => 
  array (
    '' => '',
    'mime' => 'Specifiko llojin e pantomimës',
    'name' => 'Specifiko emrin',
    'none' => 'Nuk ka ndonjë',
    'some' => 'Ka bashkëngjitje',
  ),
  'kbdocument_canned_search' => 
  array (
    'added' => 'Shtuar 30 ditët e fundit',
    'all' => 'Të gjitha',
    'faqs' => 'Pyetjet më shpesh të parashtruara',
    'pending' => 'Pritje e miratimit tim',
    'updated' => 'Rinovuar 30 ditët e fundit',
  ),
  'kbdocument_date_filter_options' => 
  array (
    '' => '',
    'after' => 'pas',
    'before' => 'para',
    'between_dates' => 'është mes',
    'isnull' => 'është zero',
    'last_30_days' => '30 ditët e fundit',
    'last_7_days' => '7 ditët e fundit',
    'last_month' => 'Muajin e kaluar',
    'last_year' => 'Vitin e kaluar',
    'next_30_days' => '30 ditët e ardhëshme',
    'next_7_days' => '7 ditët e ardhëshme',
    'next_month' => 'Muajin e ardhshëm',
    'next_year' => 'Vitin e ardhshëm',
    'on' => 'në',
    'this_month' => 'Këtë muaj',
    'this_year' => 'Këtë vit',
  ),
  'kbdocument_status_dom' => 
  array (
    'Draft' => 'Skicë',
    'Expired' => 'Skaduar',
    'In Review' => 'Në shqyrtim',
    'Published' => 'publikuar',
  ),
  'kbdocument_viewing_frequency_dom' => 
  array (
    '' => '',
    'Bot_10' => 'Bottom 10',
    'Bot_20' => 'Bottom 20',
    'Bot_5' => 'Bottom 5',
    'Top_10' => 'Top 10',
    'Top_20' => 'Top 20',
    'Top_5' => 'Top 5',
  ),
  'language_pack_name' => 'Gjuhë angleze',
  'layouts_dom' => 
  array (
    'Invoice' => 'Faktura',
    'Standard' => 'Kuota',
  ),
  'lead_conv_activity_opt' => 
  array (
    'copy' => 'Kopjo',
    'donothing' => 'Mos bë gjë',
    'move' => 'lëviz',
  ),
  'lead_source_dom' => 
  array (
    '' => '',
    'Campaign' => 'Fushata',
    'Cold Call' => 'Thirje e ftohtë',
    'Conference' => 'Konferencë',
    'Direct Mail' => 'Mail direkt',
    'Email' => 'Email',
    'Employee' => 'Punëtorët',
    'Existing Customer' => 'Konsumator ekzitues',
    'Other' => 'Tjerë',
    'Partner' => 'Partner',
    'Public Relations' => 'Mardhënie publike',
    'Self Generated' => 'E vetëgjeneruar',
    'Support Portal User Registration' => 'Mbështetje Regjistrimi për përdoruesin e portalit.',
    'Trade Show' => 'Ekspozimi i tregtisë',
    'Web Site' => 'Ueb faqe',
    'Word of mouth' => 'Fjalë e gojës',
  ),
  'lead_status_dom' => 
  array (
    '' => '',
    'Assigned' => 'Drejtuar',
    'Converted' => 'I konvertuar',
    'Dead' => 'Vdekur',
    'In Process' => 'Në proces e sipër',
    'New' => 'I ri',
    'Recycled' => 'ricikluar',
  ),
  'library_type' => 
  array (
    'Books' => 'Libër',
    'DVD' => 'DVD',
    'Magazines' => 'Revistat',
    'Music' => 'Muzik',
  ),
  'link_target_dom' => 
  array (
    '_blank' => 'Dritare e re',
    '_self' => 'Dritare e njejtë',
  ),
  'list_visibility_options' => 
  array (
    0 => 'Jo',
    1 => 'PO',
  ),
  'meeting_status_dom' => 
  array (
    'Held' => 'I mbajtur',
    'Not Held' => 'Anuluar',
    'Planned' => 'Caktuar',
  ),
  'meeting_type_dom' => 
  array (
    'Other' => 'Tjerë',
    'Sugar' => 'SugarCRM',
  ),
  'merge_operators_dom' => 
  array (
    'exact' => 'Saktësisht',
    'like' => 'Përmban',
    'start' => 'fillon me',
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
    'Calls' => 'Cl',
    'Campaigns' => 'Ca',
    'Cases' => 'Cs',
    'Notes' => 'Nt',
    'Quotas' => 'Fo',
    'Tasks' => 'Ts',
  ),
  'moduleList' => 
  array (
    'ACLRoles' => 'Rolet',
    'Accounts' => 'llogaritë',
    'Activities' => 'Aktivitetet',
    'Administration' => 'Administrata',
    'Bugs' => 'Gjyrmues i gabimeve',
    'Calendar' => 'Kalendari',
    'Calls' => 'Thirjet',
    'CampaignLog' => 'identifikimi i fushatës',
    'CampaignTrackers' => 'Gjurmuesit e fushatës',
    'Campaigns' => 'fushatat',
    'Cases' => 'rastet',
    'Comments' => 'Comment',
    'Connectors' => 'Lidhjet',
    'Contacts' => 'Kontaktet',
    'ContractTypes' => 'Llojet e kontratës',
    'Contracts' => 'Kontratat',
    'Currencies' => 'Monedhat',
    'CustomQueries' => 'Pyetje të rëndomta',
    'DataSets' => 'Formatimi i datës',
    'DocumentRevisions' => 'Revizioni i dokumentacionit',
    'Documents' => 'Dokumentacionet',
    'EAPM' => 'Llogaritë e jashtme',
    'EmailAddresses' => 'Email adresa',
    'EmailMarketing' => 'Email marketingu',
    'EmailTemplates' => 'Shabllona të emailit',
    'Emails' => 'Emailet',
    'Employees' => 'Punëtorët',
    'FAQ' => 'pyetje më shpesh të parashtruara',
    'Feedbacks' => 'Informatë kthyese',
    'Feeds' => 'RSS',
    'Filters' => 'Filterë',
    'ForecastManagerWorksheets' => 'Fleta pune per Menaxherin e parashikimeve',
    'ForecastSchedule' => 'Orari i parashikimeve',
    'ForecastWorksheets' => 'Fletë pune e parashikimeve',
    'Forecasts' => 'Parashikimet',
    'Home' => 'Ballina',
    'InboundEmail' => 'Email drejtuar përbrenda',
    'KBDocuments' => 'baza e njohurisë',
    'Leads' => 'udhëheqjet',
    'Library' => 'Libraria',
    'Manufacturers' => 'Prodhuesit',
    'Meetings' => 'Mbledhjet',
    'MergeRecords' => 'regjistrimet e bashkuara',
    'Newsletters' => 'Buletinet',
    'Notes' => 'Shënimet',
    'Notifications' => 'Shënimet',
    'OAuthKeys' => 'OAuth çelësat e konsumimit',
    'OAuthTokens' => 'OAuth Shenjat',
    'Opportunities' => 'Mundësite',
    'PdfManager' => 'PDF Menaxher',
    'ProductCategories' => 'Kategoritë e produkteve',
    'ProductTemplates' => 'Katalogu i Produktit:',
    'ProductTypes' => 'Llojet e Produkteve',
    'Products' => 'Artikujt e rreshtave të cituar',
    'Project' => 'Projektet',
    'ProjectTask' => 'Detyrat projektuese',
    'ProspectLists' => 'listat e synuara',
    'Prospects' => 'synimet',
    'Queues' => 'Radhët',
    'Quotas' => 'Kuotat',
    'Quotes' => 'Kuotat',
    'Releases' => 'Publikimet',
    'ReportMaker' => 'Raportet e avancuara',
    'Reports' => 'Raportet',
    'Reports_1' => 'Raportet',
    'Roles' => 'Rolet',
    'SNIP' => 'Arkivimi i emailit',
    'SavedSearch' => 'Kërkimet e ruajtura',
    'Schedulers' => 'Planifikuesit',
    'Shippers' => 'Ofruesit e transportit',
    'Styleguide' => 'Udhëheqës stili',
    'Subscriptions' => 'Abonimet',
    'SugarFavorites' => 'Favoritet',
    'Sugar_Favorites' => 'Favoritet',
    'Sync' => 'Sinkronizim',
    'Tags' => 'Ngjitje',
    'Tasks' => 'Detyrat',
    'TaxRates' => 'Norma e tatimit',
    'TeamNotices' => 'Shënimet grupore',
    'Teams' => 'Grupi',
    'TimePeriods' => 'Kohëzgjatja',
    'TrackerPerfs' => 'Performanca e gjurmuesit',
    'TrackerQueries' => 'Pyetjet e gjurmuesit',
    'TrackerSessions' => 'sesionet e gjurmuesit',
    'Trackers' => 'Gjurmuesit',
    'UpgradeWizard' => 'Rindërto wizardin',
    'UserSignatures' => 'Nënshkrimet e përdoruesit',
    'Users' => 'përdoruesit',
    'WebLogicHooks' => 'Grepat e logjikës së webit',
    'Words' => 'Word',
    'WorkFlow' => 'Rrjedha e punës',
    'Worksheet' => 'Fletë pune',
    'iFrames' => 'Faqet e mia',
    'pmse_Business_Rules' => 'Rregulla biznes procesi',
    'pmse_Emails_Templates' => 'Templejta proces emaili',
    'pmse_Inbox' => 'Procese',
    'pmse_Project' => 'Definime procesi',
  ),
  'moduleListSingular' => 
  array (
    'ACLRoles' => 'Role',
    'Accounts' => 'llogaritë',
    'Activities' => 'Aktivitetet',
    'ActivityStream' => 'Rrjedhë aktiviteti',
    'Administration' => 'Administration',
    'Bugs' => 'Gjyrmues i gabimeve',
    'Calendar' => 'Kalendari',
    'Calls' => 'Thirjet',
    'CampaignLog' => 'Campaign Log',
    'CampaignTrackers' => 'Campaign Tracker',
    'Campaigns' => 'fushatat',
    'Cases' => 'rastet',
    'Comments' => 'Comment',
    'Connectors' => 'Connector',
    'Contacts' => 'Kontaktet',
    'ContractTypes' => 'Contract Type',
    'Contracts' => 'Kontratat',
    'Currencies' => 'Currency',
    'CustomQueries' => 'Custom Query',
    'Dashboard' => 'Paneli',
    'DataSets' => 'Data Format',
    'DocumentRevisions' => 'Document Revision',
    'Documents' => 'Dokumentacionet',
    'EAPM' => 'Llogaria e jashtme',
    'EmailAddresses' => 'Email Address',
    'EmailMarketing' => 'Email Marketing',
    'EmailTemplates' => 'Email Template',
    'Emails' => 'Emailet',
    'Employees' => 'Punëtorë',
    'FAQ' => 'FAQ',
    'Feedbacks' => 'Informatë kthyese',
    'Feeds' => 'RSS',
    'Filters' => 'Filter',
    'ForecastManagerWorksheets' => 'Fleta pune per Menaxherin e parashikimeve',
    'ForecastSchedule' => 'Orari i parashikimeve',
    'ForecastWorksheets' => 'Fletë pune e parashikimeve',
    'Forecasts' => 'Parashikimet',
    'Home' => 'Ballina',
    'InboundEmail' => 'Inbound Email',
    'KBDocuments' => 'KBDokument',
    'Leads' => 'udhëheqjet',
    'Library' => 'Library',
    'Manufacturers' => 'Prodhues',
    'Meetings' => 'Mbledhjet',
    'MergeRecords' => 'Bashko regjistrim',
    'Newsletters' => 'Newsletter',
    'Notes' => 'Shënimet',
    'Notifications' => 'Notification',
    'OAuthKeys' => 'OAuth Consumer Key',
    'OAuthTokens' => 'OAuth Token',
    'Opportunities' => 'Mundësite',
    'PdfManager' => 'PDF Menaxher',
    'ProductCategories' => 'Kategori produkti',
    'ProductTemplates' => 'Product Template',
    'ProductTypes' => 'Product Type',
    'Products' => 'Artikujt e rreshtave të cituar',
    'Project' => 'Projekti',
    'ProjectTask' => 'Detyrat projektuese',
    'ProspectLists' => 'Target List',
    'Prospects' => 'Synim',
    'Queues' => 'Queue',
    'Quotas' => 'Kuotat',
    'Quotes' => 'Kuotat',
    'Releases' => 'Release',
    'ReportMaker' => 'SweetRaport',
    'Reports' => 'raportet',
    'Reports_1' => 'Saved Report',
    'RevenueLineItems' => 'Rreshti i llojeve të të ardhurave',
    'Roles' => 'Role',
    'SNIP' => 'Email Archiving',
    'SavedSearch' => 'Saved Search',
    'Schedulers' => 'Scheduler',
    'Shippers' => 'Shipping Provider',
    'Styleguide' => 'Udhëheqës stili',
    'Subscriptions' => 'Subscription',
    'SugarFavorites' => 'SugarFavoritet',
    'Sugar_Favorites' => 'Favorite',
    'Sync' => 'Sinkronizim',
    'Tags' => 'Ngjitje',
    'Tasks' => 'Detyrat',
    'TaxRates' => 'Tax Rate',
    'TeamNotices' => 'Shënim ekipor',
    'Teams' => 'Grupi',
    'TimePeriods' => 'Kohëzgjatja',
    'TrackerPerfs' => 'Tracker Performance',
    'TrackerQueries' => 'Tracker Query',
    'TrackerSessions' => 'Tracker Session',
    'Trackers' => 'Tracker',
    'UpgradeWizard' => 'Upgrade Wizard',
    'UserSignatures' => 'User Signature',
    'Users' => 'përdoruesit',
    'WebLogicHooks' => 'Fiksim i ueb logjikës',
    'Words' => 'Word',
    'WorkFlow' => 'Rrjedha e punës',
    'Worksheet' => 'Worksheet',
    'iFrames' => 'Faqet e mia',
    'pmse_Business_Rules' => 'Rregulla biznes procesi',
    'pmse_Emails_Templates' => 'Templejta proces emaili',
    'pmse_Inbox' => 'Proces',
    'pmse_Project' => 'Definimi procesit',
  ),
  'mselect_multi_type_dom' => 
  array (
    'in' => 'është një nga',
    'not_in' => 'nuk është një nga',
  ),
  'mselect_type_dom' => 
  array (
    'Equals' => 'Është',
    'in' => 'është një nga',
  ),
  'navigation_paradigms' => 
  array (
    'gm' => 'Modulet e grupuara',
    'm' => 'Modulet',
  ),
  'newsletter_frequency_dom' => 
  array (
    '' => '',
    'Annually' => 'Vjetore',
    'Monthly' => 'Mujore',
    'Quarterly' => 'Semestrale',
    'Weekly' => 'Javore',
  ),
  'notifications_severity_list' => 
  array (
    'alert' => 'Alarm',
    'information' => 'Info',
    'other' => 'Tjetër',
    'success' => 'sukses',
    'warning' => 'Paralajmërim',
  ),
  'notifications_status_dom' => 
  array (
    0 => 'E pa lexuar',
    1 => 'Lexo',
  ),
  'notifymail_sendtype' => 
  array (
    'SMTP' => 'SMTP',
  ),
  'numeric_range_search_dom' => 
  array (
    '=' => 'Është i barabrtë',
    'between' => 'është mes',
    'greater_than' => 'Më i madh se',
    'greater_than_equals' => 'Më e madhe ose e barabartë me',
    'less_than' => 'Më i vogël se',
    'less_than_equals' => 'Më e vogël ose e barabartë me',
    'not_equal' => 'Nuk është e barabrtë',
  ),
  'oauth_client_type_dom' => 
  array (
    'support_portal' => 'Portali mbështetjës',
    'user' => 'Sugar Përdorues',
  ),
  'oauth_type_dom' => 
  array (
    'oauth1' => 'OAuth 1.0',
    'oauth2' => 'OAuth 2.0',
  ),
  'oc_status_dom' => 
  array (
    '' => '',
    'Active' => 'aktive',
    'Inactive' => 'pasive',
  ),
  'opportunity_metrics_dom' => 
  array (
    'active' => 'aktive',
    'lost' => 'Humbi',
    'won' => 'Fitoi',
  ),
  'opportunity_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Vendimarës biznesi',
    'Business Evaluator' => 'Vlerësues biznesi',
    'Executive Sponsor' => 'Sponzor ekzekutiv',
    'Influencer' => 'Influencues',
    'Other' => 'Tjerë',
    'Primary Decision Maker' => 'Vendimmarës kryesor',
    'Technical Decision Maker' => 'Vendimmarës teknik',
    'Technical Evaluator' => 'Vlerësues teknik',
  ),
  'opportunity_type_dom' => 
  array (
    '' => '',
    'Existing Business' => 'Biznes ekzistues',
    'New Business' => 'Biznes i ri',
  ),
  'opps_config_view_by_closedate_rollup_dom' => 
  array (
    'earliest' => 'Data e mbylljes së hershme',
    'latest' => 'Data e mbylljes së fundit',
  ),
  'opps_config_view_by_options_dom' => 
  array (
    'Opportunities' => 'Mundësite',
    'RevenueLineItems' => 'Rreshti i llojeve të të ardhurave',
  ),
  'optout_dom' => 
  array (
    '' => 'asnjëra',
    'false' => 'Jo',
    'true' => 'Po',
  ),
  'order_stage_dom' => 
  array (
    'Cancelled' => 'Anuluar',
    'Confirmed' => 'Konfirmuar',
    'On Hold' => 'Në pritje',
    'Pending' => 'Pezull',
    'Shipped' => 'Transportuar',
  ),
  'parent_type_display' => 
  array (
    'Accounts' => 'Account',
    'Bugs' => 'Bugs',
    'Cases' => 'Case',
    'Contacts' => 'Contact',
    'Leads' => 'Lead',
    'Opportunities' => 'Opportunity',
    'Products' => 'Quoted Line Item',
    'Project' => 'Project',
    'ProjectTask' => 'Project Task',
    'Prospects' => 'Target',
    'Quotes' => 'Quote',
    'Tasks' => 'Task',
  ),
  'payment_terms' => 
  array (
    '' => '',
    'Net 15' => 'Net 15',
    'Net 30' => 'Net 30',
  ),
  'pdfmanager_yes_no_list' => 
  array (
    'no' => 'Jo',
    'yes' => 'Po',
  ),
  'pipeline_chart_dom' => 
  array (
    'fun' => 'Drejtoj',
    'hbar' => 'Shirit horizontal',
  ),
  'planned_activities_filter_options' => 
  array (
    'future' => 'E ardhmja',
    'today' => 'Sot',
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
    'group' => 'Jo',
    'user' => 'Po',
  ),
  'pricing_formula_dom' => 
  array (
    'Fixed' => 'Çmimi fiks',
    'IsList' => 'Njejtë si lista',
    'PercentageDiscount' => 'Lirimi nga lista',
    'PercentageMarkup' => 'Shënimet mbi koston',
    'ProfitMargin' => 'Fitimi margjinal',
  ),
  'product_category_dom' => 
  array (
    '' => '',
    'Accounts' => 'llogaritë',
    'Activities' => 'Aktivitetet',
    'Bug Tracker' => 'Gjyrmues i gabimeve',
    'Calendar' => 'Kalendari',
    'Calls' => 'Thirjet',
    'Campaigns' => 'fushatat',
    'Cases' => 'rastet',
    'Contacts' => 'Kontaktet',
    'Currencies' => 'Monedhat',
    'Dashboard' => 'Paneli',
    'Documents' => 'Dokumentacionet',
    'Emails' => 'Emailet',
    'Feeds' => 'Furnizimet',
    'Forecasts' => 'Parashikimet',
    'Help' => 'ndihmë',
    'Home' => 'Ballina',
    'Leads' => 'udhëheqjet',
    'Meetings' => 'Mbledhjet',
    'Notes' => 'Shënimet',
    'Opportunities' => 'Mundësite',
    'Outlook Plugin' => 'Vendosja e pikëpamjes',
    'Product Catalog' => 'Katalogu i produkteve',
    'Products' => 'Artikujt e rreshtave të cituar',
    'Projects' => 'Projektet',
    'Quotes' => 'Kuotat',
    'RSS' => 'RSS',
    'Releases' => 'Publikimet',
    'RevenueLineItems' => 'Rreshti i llojeve të të ardhurave',
    'Studio' => 'Studio',
    'Upgrade' => 'Rindërto',
    'Users' => 'Përdoruesit',
  ),
  'product_status_dom' => 
  array (
    '' => '',
    'Orders' => 'Porosia',
    'Quotes' => 'Kuotat',
    'Ship' => 'Transportuar',
  ),
  'product_status_quote_key' => 'Kuotat',
  'product_template_status_dom' => 
  array (
    'Available' => 'Në magazinë',
    'Unavailable' => 'Jashtë magazinës',
  ),
  'project_duration_units_dom' => 
  array (
    'Days' => 'Ditë',
    'Hours' => 'Orët',
  ),
  'project_priority_options' => 
  array (
    'High' => 'I lartë',
    'Low' => 'I ulët',
    'Medium' => 'Mesatar',
  ),
  'project_status_dom' => 
  array (
    'Draft' => 'Skicë',
    'In Review' => 'Në shqyrtim',
    'Published' => 'Të publikuara',
  ),
  'project_task_priority_options' => 
  array (
    'High' => 'I lartë',
    'Low' => 'I ulët',
    'Medium' => 'Mesatar',
  ),
  'project_task_status_options' => 
  array (
    'Completed' => 'Ka përfunduar',
    'Deferred' => 'I shtyrë',
    'In Progress' => 'Në progres',
    'Not Started' => 'Nuk ka filluar',
    'Pending Input' => 'Të hyrat e pezulluara',
  ),
  'project_task_utilization_options' => 
  array (
    0 => 'asnjë',
    25 => '25',
    50 => '50',
    75 => '75',
    100 => '100',
  ),
  'projects_priority_options' => 
  array (
    'high' => 'I lartë',
    'low' => 'I ulët',
    'medium' => 'Mesatar',
  ),
  'projects_status_options' => 
  array (
    'completed' => 'Ka përfunduar',
    'inprogress' => 'Në progres',
    'notstarted' => 'Nuk ka filluar',
  ),
  'prospect_list_type_dom' => 
  array (
    'default' => 'Çaktivizuar',
    'exempt' => 'Shtypja e listës - Nga identifikimi',
    'exempt_address' => 'Shtypja e listës - Nga Email Adresa',
    'exempt_domain' => 'Shtypja e listës - Nga Sfera',
    'seed' => 'fillim',
    'test' => 'Testo',
  ),
  'query_calc_calc_type_dom' => 
  array (
    'AVG' => 'Mesatare',
    'COUNT' => 'Numri',
    'MAX' => 'Maksimumi',
    'MIN' => 'Minimumi',
    'STDDEV' => 'Devijimi standard',
    'SUM' => 'Shuma(totali)',
    'VARIANCE' => 'Varianca',
  ),
  'query_calc_leftright_type_dom' => 
  array (
    'Field' => 'Fusha',
    'Group' => 'Grupi',
    'Value' => 'Vlera',
  ),
  'query_calc_oper_dom' => 
  array (
    '*' => '(X) Shumëzuar me',
    '+' => '(+) Plus',
    '-' => '(-) Minus',
    '/' => '(/) Pjestuar me',
  ),
  'query_calc_type_dom' => 
  array (
    'Math' => 'Kalkulim matematikor',
    'Standard' => 'Standard',
  ),
  'query_column_type_dom' => 
  array (
    'Calculation' => 'Llogaritje',
    'Display' => 'Shfaq',
  ),
  'query_display_type_dom' => 
  array (
    'Custom' => 'Zakonshëm',
    'Default' => 'Çaktivizuar',
    'Hidden' => 'E fshehur',
  ),
  'query_groupby_axis_dom' => 
  array (
    'Columns' => 'Kolonat (Boshti X)',
    'Rows' => 'Reshtat (boshti Y)',
  ),
  'query_groupby_calc_type_dom' => 
  array (
    'AVG' => 'Mesatarja',
    'COUNT' => 'Numri',
    'STDDEV' => 'Devijimi standard',
    'SUM' => 'Shuma',
    'VARIANCE' => 'Varianca',
  ),
  'query_groupby_qualifier_dom' => 
  array (
    'Day' => 'dita',
    'Month' => 'Muaji',
    'Quarter' => 'Semestri',
    'Week' => 'Java',
    'Year' => 'Viti',
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
    0 => 'Tani',
  ),
  'query_groupby_type_dom' => 
  array (
    'Field' => 'Fusha standarde',
    'Time' => 'Intervali kohor',
  ),
  'query_type_dom' => 
  array (
    'Main Query' => 'Pyetje kryesore',
  ),
  'quote_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Vendimarës biznesi',
    'Business Evaluator' => 'Vlerësues biznesi',
    'Executive Sponsor' => 'Sponzor ekzekutiv',
    'Influencer' => 'Influencues',
    'Other' => 'Tjerë',
    'Primary Decision Maker' => 'Vendimmarës kryesor',
    'Technical Decision Maker' => 'Vendimmarës teknik',
    'Technical Evaluator' => 'Vlerësues teknik',
  ),
  'quote_stage_dom' => 
  array (
    'Closed Accepted' => 'Afër e pranuar',
    'Closed Dead' => 'Afër e vdekur',
    'Closed Lost' => 'Humbje e mbyllur',
    'Confirmed' => 'Konfirmuar',
    'Delivered' => 'E dërguar',
    'Draft' => 'Skicë',
    'Negotiation' => 'Nogocimi',
    'On Hold' => 'Në pritje',
  ),
  'quote_type_dom' => 
  array (
    'Orders' => 'Porosia',
    'Quotes' => 'Kuotat',
  ),
  'record_type_display' => 
  array (
    '' => '',
    'Accounts' => 'llogaria',
    'Bugs' => 'Gabimi',
    'Cases' => 'rastet',
    'Contacts' => 'Kontaktet',
    'Leads' => 'udhëheqjet',
    'Opportunities' => 'Mundësite',
    'Products' => 'Artikujt e rreshtave të cituar',
    'Project' => 'Projekti',
    'ProjectTask' => 'Detyrat projektuese',
    'Prospects' => 'synimet',
    'Quotes' => 'Kuotat',
    'Tasks' => 'Detyrë',
  ),
  'record_type_display_notes' => 
  array (
    'Accounts' => 'llogaritë',
    'Bugs' => 'Gabimi',
    'Calls' => 'Thirjet',
    'Cases' => 'rastet',
    'Contacts' => 'Kontaktet',
    'Contracts' => 'Kontrata',
    'Emails' => 'Emailet',
    'Leads' => 'udhëheqjet',
    'Meetings' => 'Mbledhjet',
    'Opportunities' => 'Mundësite',
    'ProductTemplates' => 'Katalogu i produkteve',
    'Products' => 'Artikujt e rreshtave të cituar',
    'Project' => 'Projekti',
    'ProjectTask' => 'Detyrat projektuese',
    'Prospects' => 'synimet',
    'Quotes' => 'Kuotat',
    'Tasks' => 'Detyrë',
  ),
  'release_status_dom' => 
  array (
    'Active' => 'aktive',
    'Inactive' => 'pasive',
  ),
  'reminder_max_time' => '3600',
  'reminder_time_options' => 
  array (
    -1 => 'Asnjë',
    60 => '1 minutë përpara',
    300 => '5 minuta përpara',
    600 => '10 minuta përpara',
    900 => '15 minuta përpara',
    1800 => '30 minuta përpara',
    3600 => '1 orë përpara',
    7200 => '2 orë përpara',
    10800 => '3 orë përpara',
    18000 => '5 orë përpara',
    86400 => '1 ditë përpara',
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
    '' => '-bosh-',
    'Daily' => 'Për ditë',
    'Monthly' => 'Mujore',
    'Weekly' => 'Javore',
    'Yearly' => 'Vjetore',
  ),
  'repeat_type_dom' => 
  array (
    '' => 'Asnjë',
    'Daily' => 'Për ditë',
    'Monthly' => 'Mujore',
    'Weekly' => 'Javore',
    'Yearly' => 'Vjetore',
  ),
  'report_align_dom' => 
  array (
    'center' => 'Mes',
    'left' => 'Majt',
    'right' => 'Djathtë',
  ),
  'report_color_dom' => 
  array (
    '' => 'Çaktivizuar',
    'DarkGreen' => 'Gjelbërt e errët',
    'DodgerBlue' => 'kaltërt mashtruese',
    'LightBlue' => 'kaltërt e çelur',
    'LightGray' => 'Gri e çelur',
    'black' => 'Zi',
    'blue' => 'Kaltërt',
    'green' => 'Gjelbërt',
    'red' => 'Kuqe',
    'white' => 'Bardhë',
  ),
  'report_maker_status_dom' => 
  array (
    'Multi Module' => 'Module e shumfishtë',
    'Single Module' => 'Module e vetëm',
  ),
  'roi_type_dom' => 
  array (
    'Budget' => 'Buxheti',
    'Expected_Revenue' => 'Të ardhurat e pritura',
    'Investment' => 'Investimi',
    'Revenue' => 'Të ardhurat',
  ),
  'sales_probability_dom' => 
  array (
    'Closed Lost' => '',
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
    'Closed Lost' => 'Humbja e mbyllur',
    'Closed Won' => 'Fitimi i mbyllur',
    'Id. Decision Makers' => 'Id e vendimmarësve',
    'Needs Analysis' => 'Nevojitet analizë',
    'Negotiation/Review' => 'Negocimi/Shqyrtimi',
    'Perception Analysis' => 'Analiza e perceptimit',
    'Proposal/Price Quote' => 'Kuota Propozim/Çmim',
    'Prospecting' => 'Kërkim',
    'Qualification' => 'Kualifikimi',
    'Value Proposition' => 'Propozim me vlerë',
  ),
  'sales_status_dom' => 
  array (
    'Closed Lost' => 'Humbje e mbyllur',
    'Closed Won' => 'Fitimi i mbyllur',
    'In Progress' => 'Në progres',
    'New' => 'E re',
  ),
  'sales_status_with_quote_dom' => 
  array (
    'Closed Lost' => 'Humbje e mbyllur',
    'Closed Won' => 'Fitimi i mbyllur',
    'Converted to Quote' => 'E shndruar në kootë',
    'In Progress' => 'Në progres',
    'New' => 'E re',
  ),
  'salutation_dom' => 
  array (
    '' => '',
    'Dr.' => 'Dr.',
    'Mr.' => 'Zr.',
    'Mrs.' => 'Z-një',
    'Ms.' => 'Z-shë',
    'Prof.' => 'Prof.',
  ),
  'scheduler_period_dom' => 
  array (
    'hour' => 'Orët',
    'min' => 'Minutat',
  ),
  'scheduler_status_dom' => 
  array (
    'Active' => 'aktive',
    'Inactive' => 'pasive',
  ),
  'schedulers_times_dom' => 
  array (
    'completed' => 'Ka përfunduar',
    'failed' => 'dështuar',
    'in progress' => 'Në progres',
    'no curl' => 'Nuk është drejtuar: Nuk ka asnjë URL të disponueshëm',
    'not run' => 'Koha e drejtimit të fundit, nuk u ekzekutua',
    'ready' => 'Gati',
  ),
  'source_dom' => 
  array (
    '' => '',
    'Forum' => 'Forum',
    'InboundEmail' => 'Email',
    'Internal' => 'I brendshëm',
    'Twitter' => 'Twitter',
    'Web' => 'Uebi',
  ),
  'state_dom' => 
  array (
    'AK' => 'Alaska',
    'AL' => 'Alabama',
    'AR' => 'Arkansas',
    'AZ' => 'Arizona',
    'CA' => 'California',
    'CO' => 'Colorado',
    'CT' => 'Connecticut',
    'DC' => 'District Of Columbia',
    'DE' => 'Delaware',
    'FL' => 'Florida',
    'GA' => 'Georgia',
    'HI' => 'Hawaii',
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
    'NC' => 'North Carolina',
    'ND' => 'North Dakota',
    'NE' => 'Nebraska',
    'NH' => 'New Hampshire',
    'NJ' => 'New Jersey',
    'NM' => 'New Mexico',
    'NV' => 'Nevada',
    'NY' => 'New York',
    'OH' => 'Ohio',
    'OK' => 'Oklahoma',
    'OR' => 'Oregon',
    'PA' => 'Pennsylvania',
    'RI' => 'Rhode Island',
    'SC' => 'South Carolina',
    'SD' => 'South Dakota',
    'TN' => 'Tennessee',
    'TX' => 'Texas',
    'UT' => 'Utah',
    'VA' => 'Virginia',
    'VT' => 'Vermont',
    'WA' => 'Washington',
    'WI' => 'Wisconsin',
    'WV' => 'West Virginia',
    'WY' => 'Wyoming',
  ),
  'sugar7_dashlet_auto_refresh_options' => 
  array (
    0 => 'Asnjë',
    1 => 'çdo 1 minut',
    5 => 'çdo 5 minuta',
    10 => 'çdo10 minuta',
    15 => 'çdo 15 minuta',
    30 => 'çdo 30 minuta',
  ),
  'sugar7_dashlet_reports_auto_refresh_options' => 
  array (
    0 => 'Asnjë',
    15 => 'çdo 15 minuta',
    30 => 'çdo 30 minuta',
    45 => 'çdo 45 minuta',
    60 => 'çdo orë',
    120 => 'çdo 2 orë',
  ),
  'support_term_dom' => 
  array (
    '+1 year' => '1 vit',
    '+2 years' => '2 vite',
    '+6 months' => '6 muaj',
  ),
  'task_priority_dom' => 
  array (
    'High' => 'I lartë',
    'Low' => 'I ulët',
    'Medium' => 'Mesatar',
  ),
  'task_status_dom' => 
  array (
    'Completed' => 'Ka përfunduar',
    'Deferred' => 'I shtyrë',
    'In Progress' => 'Në progres',
    'Not Started' => 'Nuk ka filluar',
    'Pending Input' => 'Të hyrat e pezulluara',
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
    'group' => 'Jo',
    'user' => 'Po',
  ),
  'tax_class_dom' => 
  array (
    'Non-Taxable' => 'e pataimuar',
    'Taxable' => 'E tatimuar',
  ),
  'timezone_dom' => 
  array (
    'Africa/Abidjan' => 'Afrika/Abidxhan',
    'Africa/Accra' => 'Afrika/Akra',
    'Africa/Addis_Ababa' => 'Afrika/Addis_Ababa',
    'Africa/Algiers' => 'Afrika/Algjeria',
    'Africa/Asmera' => 'Afrika/Asmera',
    'Africa/Bamako' => 'Afrika/Bamako',
    'Africa/Bangui' => 'Afrika/Bangai',
    'Africa/Banjul' => 'Afrika/Banjul',
    'Africa/Bissau' => 'Afrika/Bisau',
    'Africa/Blantyre' => 'Afrika/Blantir',
    'Africa/Brazzaville' => 'Afrika/Brazavill',
    'Africa/Bujumbura' => 'Afrika/Bujumbura',
    'Africa/Cairo' => 'Afrika/Kairo',
    'Africa/Casablanca' => 'Afrika/Kasablanka',
    'Africa/Ceuta' => 'Afrika/Ceuta',
    'Africa/Conakry' => 'Afrika/Konakri',
    'Africa/Dakar' => 'Afrika/Dakar',
    'Africa/Dar_es_Salaam' => 'Afrika/Dar_es_Salam',
    'Africa/Djibouti' => 'Afrika/Dxhibouti',
    'Africa/Douala' => 'Afrika/Douala',
    'Africa/El_Aaiun' => 'Afrika/El_Aaiun',
    'Africa/Freetown' => 'Afrika/Fritaun',
    'Africa/Gaborone' => 'Afrika/Gaboron',
    'Africa/Harare' => 'Afrika/Harar',
    'Africa/Johannesburg' => 'Afrika/Johanesburg',
    'Africa/Kampala' => 'Afrika/Kampala',
    'Africa/Khartoum' => 'Afrika/Kartoum',
    'Africa/Kigali' => 'Afrika/Kigali',
    'Africa/Kinshasa' => 'Afrika/Kinshasa',
    'Africa/Lagos' => 'Afrika/Lagos',
    'Africa/Libreville' => 'Afrika/Libreville',
    'Africa/Lome' => 'Afrika/Lome',
    'Africa/Luanda' => 'Afrika/Luanda',
    'Africa/Lubumbashi' => 'Afrika/Lubumbashi',
    'Africa/Lusaka' => 'Afrika/Lusaka',
    'Africa/Malabo' => 'Afrika/Malabo',
    'Africa/Maputo' => 'Afrika/Maputo',
    'Africa/Maseru' => 'Afrika/Maseru',
    'Africa/Mbabane' => 'Afrikia/Mbabane',
    'Africa/Mogadishu' => 'Afrika/Mogadishu',
    'Africa/Monrovia' => 'Afrika/Monrovia',
    'Africa/Nairobi' => 'Afrika/Nairobi',
    'Africa/Ndjamena' => 'Afrika/Ndxhamena',
    'Africa/Niamey' => 'Afrika/Namej',
    'Africa/Nouakchott' => 'Afrika/Nouakchott',
    'Africa/Ouagadougou' => 'Africa/Ouagadougou',
    'Africa/Porto-Novo' => 'Afrika/Porto-Novo',
    'Africa/Sao_Tome' => 'Afrika/Sao_Tome',
    'Africa/Tripoli' => 'Afrika/Tripoli',
    'Africa/Tunis' => 'Afrika/Tunis',
    'Africa/Windhoek' => 'Afrika/Windhoek',
    'America/Adak' => 'Amerika/Adak',
    'America/Anchorage' => 'Amerika/Ançorag',
    'America/Anguilla' => 'Amerika/Anguilla',
    'America/Antigua' => 'Amerika/Antigua',
    'America/Araguaina' => 'Amerika/Araguana',
    'America/Argentina/Buenos_Aires' => 'Amerika/Argjentina/Buenos_Aires',
    'America/Argentina/Catamarca' => 'Amerika/Argjentina/Katamarka',
    'America/Argentina/Cordoba' => 'Amerika/Argjentina/Kordoba',
    'America/Argentina/Jujuy' => 'Amerika/Argjentina/Juju',
    'America/Argentina/La_Rioja' => 'Amerika/Argjentina/La_Rioja',
    'America/Argentina/Mendoza' => 'Amerika/Argjentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amerika/Argjentina/Rio_Gallegos',
    'America/Argentina/San_Juan' => 'Amerika/Argjentina/San_Huan',
    'America/Argentina/Tucuman' => 'Amerika/Argjentina/Tukuman',
    'America/Argentina/Ushuaia' => 'Amerika/Argjentina/Ushuaia',
    'America/Aruba' => 'Amerika/Aruba',
    'America/Asuncion' => 'Amerika/Asunsion',
    'America/Bahia' => 'Amerika/Bahia',
    'America/Barbados' => 'Amerika/Barbados',
    'America/Belem' => 'Amerika/Belem',
    'America/Belize' => 'Amerika/Beliz',
    'America/Boa_Vista' => 'Amerika/Boa_Vista',
    'America/Bogota' => 'Amerika/Bogota',
    'America/Boise' => 'Amerika/Boise',
    'America/Cambridge_Bay' => 'Amerika/Kembridxh_Bej',
    'America/Campo_Grande' => 'Amerika/Kampo_Grande',
    'America/Cancun' => 'Amerika/Kankun',
    'America/Caracas' => 'Amerika/Karakas',
    'America/Cayenne' => 'Amerika/Kajeni',
    'America/Cayman' => 'Amerika/Kajman',
    'America/Chicago' => 'Amerika/Çikago',
    'America/Chihuahua' => 'Amerika/Çihuahua',
    'America/Coral_Harbour' => 'Amerika/Koral_Harbur',
    'America/Costa_Rica' => 'Amerika/Kosta_Rika',
    'America/Cuiaba' => 'Amerika/Suiaba',
    'America/Curacao' => 'Amerika/Kurakao',
    'America/Danmarkshavn' => 'Amerikë/Danmarkshavn',
    'America/Dawson' => 'Amerika/Dauson',
    'America/Dawson_Creek' => 'Amerika/Dauson_Krik',
    'America/Denver' => 'Amerika/Denver',
    'America/Detroit' => 'Amerika/Detroit',
    'America/Dominica' => 'Amerika/Dominika',
    'America/Edmonton' => 'Amerika/Edmonton',
    'America/Eirunepe' => 'Amerika/Erunepi',
    'America/El_Salvador' => 'Amerika/El_Salvador',
    'America/Fortaleza' => 'Amerika/Fortaleza',
    'America/Glace_Bay' => 'Amerika/Glejs_Bej',
    'America/Godthab' => 'Amerika/Godthab',
    'America/Goose_Bay' => 'Amerika/Goose_Bay',
    'America/Grand_Turk' => 'Amerika/Grand_Turk',
    'America/Grenada' => 'Amerika/Grenada',
    'America/Guadeloupe' => 'Amerika/Guadalupe',
    'America/Guatemala' => 'Amerika/Guatamala',
    'America/Guayaquil' => 'Amerija/Guayakul',
    'America/Guyana' => 'Amerika/Guyana',
    'America/Halifax' => 'Amerika/Halifaks',
    'America/Havana' => 'Amerika/Havana',
    'America/Hermosillo' => 'Amerika/Hermosillo',
    'America/Indiana/Indianapolis' => 'Amerika/Indiana/Indianapolis',
    'America/Indiana/Knox' => 'Amerika/Indiana/Knox',
    'America/Indiana/Marengo' => 'Amerika/Indiana/Marengo',
    'America/Indiana/Vevay' => 'Amerika/Indiana/Vevay',
    'America/Inuvik' => 'Amerika/Inuvik',
    'America/Iqaluit' => 'Amerika/Ikaluit',
    'America/Jamaica' => 'Amerika/Xhamajka',
    'America/Juneau' => 'Amerika/Juneau',
    'America/Kentucky/Louisville' => 'Amerika/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'Amerika/Kentucky/Monticello',
    'America/La_Paz' => 'Amerika/La_Paz',
    'America/Lima' => 'Amerika/Lima',
    'America/Los_Angeles' => 'Amerika/Los_Anxheles',
    'America/Maceio' => 'Amerika/Maseio',
    'America/Managua' => 'Amerika/Managua',
    'America/Manaus' => 'Amerika/Manaus',
    'America/Martinique' => 'Amerika/Martiniku',
    'America/Mazatlan' => 'Amerika/Mazatlan',
    'America/Menominee' => 'Amerika/Menominee',
    'America/Merida' => 'Amerika/Merida',
    'America/Mexico_City' => 'Amerika/Meksiko_Siti',
    'America/Miquelon' => 'Amerika/Mikelon',
    'America/Monterrey' => 'Amerika/Monterej',
    'America/Montevideo' => 'Amerika/Montevideo',
    'America/Montreal' => 'Amerika/Montreal',
    'America/Montserrat' => 'Amerika/Montserat',
    'America/Nassau' => 'Amerika/Nasai',
    'America/New_York' => 'Amerika/Nju_Jork',
    'America/Nipigon' => 'Amerika/Nipigon',
    'America/Nome' => 'Amerika/Nomi',
    'America/Noronha' => 'Amerika/Noronha',
    'America/North_Dakota/Center' => 'Amerika e/Veriut_Qendra e/Dakotës',
    'America/Panama' => 'Amerika/Panama',
    'America/Pangnirtung' => 'Amerika/Pangnirtung',
    'America/Paramaribo' => 'Amerika/Paramaribo',
    'America/Phoenix' => 'Amerika/Phoenix',
    'America/Port-au-Prince' => 'Amerika/Port-au-Princ',
    'America/Port_of_Spain' => 'Amerika/Porit_i_Spanjës',
    'America/Porto_Velho' => 'Amerika/Porto_Velho',
    'America/Puerto_Rico' => 'Amerika/Puerto_Riko',
    'America/Rainy_River' => 'Amerika/Reini_River',
    'America/Rankin_Inlet' => 'Amerika/Rankin_Inlet',
    'America/Recife' => 'Amerika/Rekife',
    'America/Regina' => 'Amerika/Regina',
    'America/Rio_Branco' => 'Amerika/Rio_Branko',
    'America/Santiago' => 'Amerika/Santiago',
    'America/Santo_Domingo' => 'Amerika/Santo_Domingo',
    'America/Sao_Paulo' => 'Amerika/Sao_Paulo',
    'America/Scoresbysund' => 'Amerika/Skorsbisund',
    'America/St_Johns' => 'Amerika/St_Johns',
    'America/St_Kitts' => 'Amerika/Shën_Kits',
    'America/St_Lucia' => 'Amerika/Shën_Lusia',
    'America/St_Thomas' => 'Amerika/Shën_Tomas',
    'America/St_Vincent' => 'Amerika/Shën_Vinsent',
    'America/Swift_Current' => 'Amerika/Suift_Kjurënt',
    'America/Tegucigalpa' => 'Amerika/Tegusigalpa',
    'America/Thule' => 'Amerika/Thule',
    'America/Thunder_Bay' => 'Amerika/Thander_Bej',
    'America/Tijuana' => 'Amerika/Tihuana',
    'America/Toronto' => 'Amerika/Toronto',
    'America/Tortola' => 'Amerika/Tortola',
    'America/Vancouver' => 'Amerika/Vancuvër',
    'America/Whitehorse' => 'Amerika/Uajthors',
    'America/Winnipeg' => 'Amerika/Uinipeg',
    'America/Yakutat' => 'Amerika/Jakutat',
    'America/Yellowknife' => 'Amerika/Jellounife',
    'Antarctica/Casey' => 'Antarctiku/Kejsi',
    'Antarctica/Davis' => 'Antarctiku/Davis',
    'Antarctica/DumontDUrville' => 'Antarctiku/DumontDUrville',
    'Antarctica/Mawson' => 'Antarctiku/Mauson',
    'Antarctica/McMurdo' => 'Antarctiku/McMurdo',
    'Antarctica/Palmer' => 'Antarctiku/Palmer',
    'Antarctica/Rothera' => 'Antarctiku/Rotera',
    'Antarctica/Syowa' => 'Antarctiku/Syova',
    'Antarctica/Vostok' => 'Antarctiku/Vostok',
    'Asia/Aden' => 'Azia/Aden',
    'Asia/Almaty' => 'Azia/Almati',
    'Asia/Amman' => 'Azia/Aman',
    'Asia/Anadyr' => 'Azia/Anadyr',
    'Asia/Aqtau' => 'Azia/Aktau',
    'Asia/Aqtobe' => 'Azia/Aktobe',
    'Asia/Ashgabat' => 'Azia/Ashgabat',
    'Asia/Baghdad' => 'Azia/Bagdad',
    'Asia/Bahrain' => 'Azia/Bahrain',
    'Asia/Baku' => 'Azia/Baku',
    'Asia/Bangkok' => 'Azia/Bangkok',
    'Asia/Beijing' => 'Azia/Bejing',
    'Asia/Beirut' => 'Asza/Bejrut',
    'Asia/Bishkek' => 'Azia/Bishkek',
    'Asia/Brunei' => 'Azia/Brunej',
    'Asia/Calcutta' => 'Azia/Kalkuta',
    'Asia/Choibalsan' => 'Azia/Çoibalsan',
    'Asia/Chongqing' => 'Azia/Kongqing',
    'Asia/Colombo' => 'Azia/Kolombo',
    'Asia/Damascus' => 'Azia/Damaskus',
    'Asia/Dhaka' => 'Azia/Dhaka',
    'Asia/Dili' => 'Azia/Dili',
    'Asia/Dubai' => 'Azia/Dubai',
    'Asia/Dushanbe' => 'Azia/Dushanb',
    'Asia/Gaza' => 'Azia/Gaza',
    'Asia/Harbin' => 'Azia/Harbin',
    'Asia/Hong_Kong' => 'Azia/Hong_Kong',
    'Asia/Hovd' => 'Azia/Hovd',
    'Asia/Irkutsk' => 'Azia/Irkutsk',
    'Asia/Jakarta' => 'Azia/Xhakarta',
    'Asia/Jayapura' => 'Azia/Xhajapura',
    'Asia/Jerusalem' => 'Azia/Jerusalem',
    'Asia/Kabul' => 'Azia/Kabul',
    'Asia/Kamchatka' => 'Azia/Kamçatka',
    'Asia/Karachi' => 'Azia/Karaçi',
    'Asia/Kashgar' => 'Azia/Kashgar',
    'Asia/Katmandu' => 'Azia/Katmandu',
    'Asia/Krasnoyarsk' => 'Azia/Krasnoyarsk',
    'Asia/Kuala_Lumpur' => 'Azia/Kuala_Lumpur',
    'Asia/Kuching' => 'Azia/Kuçing',
    'Asia/Kuwait' => 'Azia/Kuvait',
    'Asia/Macau' => 'Azia/Makau',
    'Asia/Magadan' => 'Azia/Magadan',
    'Asia/Makassar' => 'Azia/Makasar',
    'Asia/Manila' => 'Azia/Manila',
    'Asia/Muscat' => 'Azia/Muskat',
    'Asia/Nicosia' => 'Azia/Nikosia',
    'Asia/Novosibirsk' => 'Azia/Novosibirsk',
    'Asia/Omsk' => 'Azia/Omsk',
    'Asia/Oral' => 'Azia/Oral',
    'Asia/Phnom_Penh' => 'Azia/Phnom_Penh',
    'Asia/Pontianak' => 'Azia/Pontianak',
    'Asia/Pyongyang' => 'Azia/Pyongjang',
    'Asia/Qatar' => 'Azia/Qatar',
    'Asia/Qyzylorda' => 'Azia/Kyzylorda',
    'Asia/Rangoon' => 'Azia/Rangun',
    'Asia/Riyadh' => 'Azia/Rijad',
    'Asia/Saigon' => 'Azia/Saigon',
    'Asia/Sakhalin' => 'Azia/Sakhalin',
    'Asia/Samarkand' => 'Azia/Samarkand',
    'Asia/Seoul' => 'Azia/Seul',
    'Asia/Shanghai' => 'Azia/Shangai',
    'Asia/Singapore' => 'Azia/Singapor',
    'Asia/Taipei' => 'Azia/Tajpei',
    'Asia/Tashkent' => 'Azia/Tashkent',
    'Asia/Tbilisi' => 'Azia/Tbilisi',
    'Asia/Tehran' => 'Azia/Tehran',
    'Asia/Thimphu' => 'Azia/Timfu',
    'Asia/Tokyo' => 'Azia/Tokio',
    'Asia/Ulaanbaatar' => 'Azia/Ulanbatar',
    'Asia/Urumqi' => 'Azia/Urumqi',
    'Asia/Vientiane' => 'Azia/Vientane',
    'Asia/Vladivostok' => 'Azia/Vladivostok',
    'Asia/Yakutsk' => 'Azia/Yakutsk',
    'Asia/Yekaterinburg' => 'Azia/Yekaterinburg',
    'Asia/Yerevan' => 'Azia/Jerevan',
    'Atlantic/Azores' => 'Atlantiku/Azores',
    'Atlantic/Bermuda' => 'Atlantiku/Bermuda',
    'Atlantic/Canary' => 'Atlantiku/Canari',
    'Atlantic/Cape_Verde' => 'Atlantiku/Kape_Verde',
    'Atlantic/Faeroe' => 'Atlantiku/Faroi',
    'Atlantic/Madeira' => 'Atlantiku/Madeira',
    'Atlantic/Reykjavik' => 'Atlantik/Reykjavik',
    'Atlantic/South_Georgia' => 'Atlantiku/Xhorxhia Jugore',
    'Atlantic/St_Helena' => 'Atlantiku/Shën_Helena',
    'Atlantic/Stanley' => 'Atlantkuc/Stanli',
    'Australia/Adelaide' => 'Australi/Adelaide',
    'Australia/Brisbane' => 'Australi/Brisban',
    'Australia/Broken_Hill' => 'Australi/Broken_Hill',
    'Australia/Currie' => 'Australia/Kuri',
    'Australia/Darwin' => 'Australi/Darvin',
    'Australia/Hobart' => 'Australi/Hobart',
    'Australia/Lindeman' => 'Australi/Lindman',
    'Australia/Melbourne' => 'Australi/Melburn',
    'Australia/Perth' => 'Australi/Pert',
    'Australia/Sydney' => 'Australi/Sidnej',
    'CET' => 'CET',
    'EET' => 'EET',
    'Europe/Amsterdam' => 'Europë/Amsterdam',
    'Europe/Andorra' => 'Europë/Andora',
    'Europe/Athens' => 'Europa/Athina',
    'Europe/Belgrade' => 'Europë/Beograd',
    'Europe/Berlin' => 'Europa/Berlin',
    'Europe/Brussels' => 'Europë/Brisel',
    'Europe/Bucharest' => 'Europa/Bukuresht',
    'Europe/Budapest' => 'Europa/Budapest',
    'Europe/Chisinau' => 'Europa/Chisinau',
    'Europe/Copenhagen' => 'Europë/Kopenhagen',
    'Europe/Dublin' => 'Europë/Dublin',
    'Europe/Gibraltar' => 'Europa/Gibraltar',
    'Europe/Helsinki' => 'Europa/Helsinki',
    'Europe/Istanbul' => 'Europë/Stanboll',
    'Europe/Kaliningrad' => 'Europa/Kaliningrad',
    'Europe/Kiev' => 'Europë/Kiev',
    'Europe/Lisbon' => 'Europë/Lisabon',
    'Europe/London' => 'Europë/Londër',
    'Europe/Luxembourg' => 'Europë/Luksemburg',
    'Europe/Madrid' => 'Europë/Madrid',
    'Europe/Malta' => 'Europë/Malta',
    'Europe/Minsk' => 'Europë/Minsk',
    'Europe/Monaco' => 'Europë/Monako',
    'Europe/Moscow' => 'Europë/Moskë',
    'Europe/Oslo' => 'Europë/Oslo',
    'Europe/Paris' => 'Europa/Paris',
    'Europe/Prague' => 'Europë/Prag',
    'Europe/Riga' => 'Europa/Riga',
    'Europe/Rome' => 'Europa/Roma',
    'Europe/Samara' => 'Europë/Samara',
    'Europe/Simferopol' => 'Europë/Simferopol',
    'Europe/Sofia' => 'Europë/Sofi',
    'Europe/Stockholm' => 'Europë/Stokholm',
    'Europe/Tallinn' => 'Europa/Tallinn',
    'Europe/Tirane' => 'EuropëTiranë',
    'Europe/Uzhgorod' => 'Europë/Uzhgorod',
    'Europe/Vaduz' => 'Europa/Vaduz',
    'Europe/Vienna' => 'Europë/Vienë',
    'Europe/Vilnius' => 'Europë/Vilnius',
    'Europe/Warsaw' => 'Europë/Varshavë',
    'Europe/Zaporozhye' => 'Europë/Zaporozhie',
    'Europe/Zurich' => 'Europë/Zvicër',
    'Indian/Antananarivo' => 'India/Antananarivo',
    'Indian/Chagos' => 'India/Çagos',
    'Indian/Christmas' => 'India/Kristmas',
    'Indian/Cocos' => 'Indian/Kokos',
    'Indian/Comoro' => 'India/Komoro',
    'Indian/Kerguelen' => 'India/Kerguelen',
    'Indian/Mahe' => 'India/Mahe',
    'Indian/Maldives' => 'India/Maldivis',
    'Indian/Mauritius' => 'India/Mauritis',
    'Indian/Mayotte' => 'India/Majot',
    'Indian/Reunion' => 'India/Reunion',
    'MET' => 'MET',
    'Pacific/Apia' => 'Pacifik/Apia',
    'Pacific/Auckland' => 'Pacifik/Aukland',
    'Pacific/Chatham' => 'Pacifi/Katam',
    'Pacific/Easter' => 'Pacifkuc/Easter',
    'Pacific/Efate' => 'Pacifik/Efate',
    'Pacific/Enderbury' => 'Pacifik/Enderbur',
    'Pacific/Fakaofo' => 'Pacifik/Fakaofo',
    'Pacific/Fiji' => 'Pacifik/Fixhi',
    'Pacific/Funafuti' => 'Pacifik/Funafuti',
    'Pacific/Galapagos' => 'Pacifiku/Galapagos',
    'Pacific/Gambier' => 'Pacifik/Gambier',
    'Pacific/Guadalcanal' => 'PacifickGuadalkanal',
    'Pacific/Guam' => 'Pacifik/Guam',
    'Pacific/Honolulu' => 'Honolulu/Paqësor',
    'Pacific/Johnston' => 'Pacifik/Jonston',
    'Pacific/Kiritimati' => 'Pacifik/Kiritimati',
    'Pacific/Kosrae' => 'Pacifik/Kosra',
    'Pacific/Kwajalein' => 'Pacifik/Kajalein',
    'Pacific/Majuro' => 'Pacifik/Maxhuro',
    'Pacific/Marquesas' => 'Pacifik/Markusas',
    'Pacific/Midway' => 'Pacifik/Miduej',
    'Pacific/Nauru' => 'Pacifik/Nauru',
    'Pacific/Niue' => 'Pacifik/Niue',
    'Pacific/Norfolk' => 'Pacifik/Norfolk',
    'Pacific/Noumea' => 'Pacifik/Noumia',
    'Pacific/Pago_Pago' => 'Pacifik/Pago_Pago',
    'Pacific/Palau' => 'PacifickPalai',
    'Pacific/Pitcairn' => 'Pacifik/Pitkairn',
    'Pacific/Ponape' => 'Pacifik/Ponape',
    'Pacific/Port_Moresby' => 'Pacifik/Port_Moresbi',
    'Pacific/Rarotonga' => 'Pacifik/Rarotonga',
    'Pacific/Saipan' => 'PacifickSaipan',
    'Pacific/Tahiti' => 'Pacifik/Tahiti',
    'Pacific/Tarawa' => 'Pacifik/Tarava',
    'Pacific/Tongatapu' => 'Pacifik/Tongatapu',
    'Pacific/Truk' => 'Pacifik/Truk',
    'Pacific/Wake' => 'Pacific/Uejk',
    'Pacific/Wallis' => 'Pacifik/Vallis',
    'WET' => 'WET',
  ),
  'token_status' => 
  array (
    1 => 'Kërkesë',
    2 => 'Qasje',
    3 => 'Jo valide',
  ),
  'top10_opportunities_duration_options' => 
  array (
    0 => 'Ky kuartal',
    3 => 'Kuartali i ardhshëm',
    12 => 'Ky vit',
  ),
  'top10_opportunities_visibility_options' => 
  array (
    'group' => '',
    'user' => '',
  ),
  'tselect_type_dom' => 
  array (
    0 => '0 orë',
    14440 => '4 orë',
    28800 => '8 orë',
    43200 => '12 orë',
    86400 => '1 ditë',
    172800 => '2 ditë',
    259200 => '3 ditë',
    345600 => '4 ditë',
    432000 => '5 ditë',
    604800 => '1 javë',
    1209600 => '2 javë',
    1814400 => '3 javë',
    2592000 => '30 ditë',
    5184000 => '60 ditë',
    7776000 => '90 ditë',
    10368000 => '120 ditë',
    12960000 => '150 ditë',
    15552000 => '180 ditë',
  ),
  'user_status_dom' => 
  array (
    'Active' => 'aktive',
    'Inactive' => 'pasive',
  ),
  'user_type_dom' => 
  array (
    'Administrator' => 'Administratori',
    'RegularUser' => 'Përdorues i rregullt',
  ),
  'webLogicHookList' => 
  array (
    'after_delete' => 'Mbas fshirjes',
    'after_login' => 'Mbas logimit',
    'after_login_failed' => 'Mbas dështimit të logimit',
    'after_logout' => 'Mbas dislogimit',
    'after_relationship_add' => 'Mbas shtimit të lidhjes',
    'after_relationship_delete' => 'Mbas fshirjes së lidhjes',
    'after_save' => 'Mbas ruajtjes',
  ),
  'web_hook_request_method_list' => 
  array (
    'DELETE' => 'FSHI',
    'GET' => 'MERR',
    'POST' => 'POST',
    'PUT' => 'VENDOS',
  ),
  'wflow_action_datetime_type_dom' => 
  array (
    'Existing Value' => 'Vlera ekzistuese',
    'Triggered Date' => 'Data e shkrepjes',
  ),
  'wflow_action_type_dom' => 
  array (
    'new' => 'Regjistrim i ri',
    'update' => 'Rinovo regjistrimin',
    'update_rel' => 'Rinovo regjistrimet e lidhura',
  ),
  'wflow_address_type_dom' => 
  array (
    'bcc' => 'BCC:',
    'cc' => 'CC:',
    'to' => 'Tek',
  ),
  'wflow_address_type_invite_dom' => 
  array (
    'bcc' => 'BCC:',
    'cc' => 'CC:',
    'invite_only' => '( Fto vetëm )',
    'to' => 'Tek',
  ),
  'wflow_address_type_to_only_dom' => 
  array (
    'to' => 'Tek',
  ),
  'wflow_adv_enum_type_dom' => 
  array (
    'advance' => 'Lëviz përpara shpalosjen nga',
    'retreat' => 'Lëviz mbrapa shpalosjen nga',
  ),
  'wflow_adv_team_type_dom' => 
  array (
    'current_team' => 'Grupi i Përdoruesit të qasur',
    'team_id' => 'Grupi aktual i aktivizimit të regjistrimit',
  ),
  'wflow_adv_user_type_dom' => 
  array (
    'assigned_user_id' => 'Përdoruesi caktohet në shkaktimin e të dhënave',
    'created_by' => 'Përdoruesi që krijoi aktivizimin e regjistrimeve',
    'current_user' => 'Përdoruesi i qasur',
    'modified_user_id' => 'Përdoruesi që ka modifikuar për herë te fundit aktivizimin e regjistrimeve',
  ),
  'wflow_alert_type_dom' => 
  array (
    'Email' => 'Email',
    'Invite' => 'Fto',
  ),
  'wflow_array_type_dom' => 
  array (
    'future' => 'Vlera e re',
    'past' => 'Vlera e vjetër',
  ),
  'wflow_fire_order_dom' => 
  array (
    'actions_alerts' => 'Veprimet pastaj alarmet',
    'alerts_actions' => 'Alarmet pastaj veprimet',
  ),
  'wflow_record_type_dom' => 
  array (
    'All' => 'Regjistrime të reja dhe rinovuara',
    'New' => 'Vetëm regjistrime të reja',
    'Update' => 'Vetëm regjistrime të rinovuara',
  ),
  'wflow_rel_type_dom' => 
  array (
    'all' => 'Të gjitha',
    'filter' => 'Filtër i lidhur',
  ),
  'wflow_relate_type_dom' => 
  array (
    'Manager' => 'Menaxheri i përdoruesit',
    'Self' => 'Përdorues',
  ),
  'wflow_relfilter_type_dom' => 
  array (
    'all' => 'Të gjitha të lidhura',
    'any' => 'çdo një e lidhur',
  ),
  'wflow_set_type_dom' => 
  array (
    'Advanced' => 'Opcionet e avancuara',
    'Basic' => 'Opcione bazike',
  ),
  'wflow_source_type_dom' => 
  array (
    'Custom Template' => 'Shabllon i zakonshëm',
    'Normal Message' => 'Mesazh normal',
    'System Default' => 'Sistem i çaktivizuar',
  ),
  'wflow_type_dom' => 
  array (
    'Normal' => 'Kur është ruajtur regjistrimi',
    'Time' => 'Pas kalimit të kohës',
  ),
  'wflow_user_type_dom' => 
  array (
    'current_user' => 'Përdoruesit aktual',
    'rel_user' => 'Përdorues të lidhur me',
    'rel_user_custom' => 'Përdorues të lidhur të zakonshëm',
    'specific_role' => 'Rol specifik',
    'specific_team' => 'Grup specifik',
    'specific_user' => 'Përdorues specifik',
  ),
  'width_type_dom' => 
  array (
    '%' => 'Përqindje (%)',
    'px' => 'Piksel (px)',
  ),
);

$app_strings = array (
  'BorderColor' => 'Ngjyra e kufireve',
  'DATA_TYPE_DUE' => 'Shkak:',
  'DATA_TYPE_MODIFIED' => 'Modifikuar',
  'DATA_TYPE_SENT' => 'Dërguar:',
  'DATA_TYPE_START' => 'Fillluari:',
  'DEFAULT' => 'Bazike',
  'ERROR_ACCESS_MODULE' => 'Ju nuk keni qasje në këtë modul.',
  'ERROR_CONNECTOR_CONFIGURE' => 'Në pamundësi për të tërhequr të dhënat. Shërbimi mund aktualisht të jetë i paarritshëm apo cilësimet e konfigurimit mund të jenë të pavlefshme.',
  'ERROR_DATETIME' => 'Gabim. Kjo fushë kërkon datë valide.',
  'ERROR_DUPLICATE_EMAIL' => 'Gabim. Adresë emaili duplikat: {{#each this}}{{this}} {{/each}}',
  'ERROR_EMAIL' => 'Gabim.Email adresa e gabuar: {{#each this}} {{this}} {{/each}}',
  'ERROR_EMPTY_LINK_MODULE' => 'Ju lutemi zgjidhni para marrëdhënien.',
  'ERROR_EXAMINE_MSG' => 'Ju lutemi shqyrtoni gabimin e mesazhit më poshtë:',
  'ERROR_EXCEEDING_OC_LICENSES' => 'Numri i mundësuar klientëve offline aktualisht e tejkalon numrin e përcaktuar në licencën tuaj.',
  'ERROR_FIELD_REQUIRED' => 'Gabim. Kjo fushë është e nevojshme.',
  'ERROR_FULLY_EXPIRED' => 'Licenca e kompanisë suaj për SugarCRM ka mbaruar për më shumë se 30 ditë, dhe duhen të sillen deri tani. Vetëm administratorët mund të logohen.',
  'ERROR_IS_AFTER' => 'Gabim.Data e kësaj fushe nuk mund të jetë pas datës së {{this}} fushe.',
  'ERROR_IS_BEFORE' => 'Gabim.Data e kësaj fushe nuk mund të jetë pas datës së {{this}} fushe.',
  'ERROR_IS_GREATER_THAN' => 'Gabim. Vlera e kësaj fushe duhet të jetë më e madhe se {{this}}.',
  'ERROR_IS_LESS_THAN' => 'Gabim. Vlera e kësaj fushe duhet të jetë më e vogël se {{this}}.',
  'ERROR_LICENSE_EXPIRED' => 'Licenca e kompanisë suaj për SugarCRM duhet të azhurnohet. Vetëm administratorët mund të identifikohen',
  'ERROR_LICENSE_VALIDATION' => 'Licenca e kompanisë suaj për SugarCRM duhet të jetë valide.Vetëm administratorët mund të identifikohen',
  'ERROR_MAXVALUE' => 'Gabim. Vlera maksimale e kësaj fushe është {{this}}.',
  'ERROR_MAX_FIELD_LENGTH' => 'Gabim.Gjatësia maksimale e kësaj fushe është {{this}}.',
  'ERROR_MAX_FILESIZE_EXCEEDED' => 'Gabim. Bashkangjitja është shumë e madhe.',
  'ERROR_MINVALUE' => 'Gabim. Kjo vlerë minimale e kësaj fushe është {{this}}.',
  'ERROR_MIN_FIELD_LENGTH' => 'Gabim.Gjatësia maksimale e kësaj fushe është {{this}}.',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'Zbraz fushat e nevojshme',
  'ERROR_NOTIFY_OVERRIDE' => 'Gabim: Burimet vëzhguese-> njoftimi () duhet të parandalohen.',
  'ERROR_NO_BEAN' => 'Nuk arriti të marrë kokërr.',
  'ERROR_NO_RECORD' => 'Gabim në marrje të rekordit. Ky proces mund të fshihet ose ju mund të mos jetë i autorizuar për të parë atë.',
  'ERROR_NUMBER' => 'Gabim. Kjo fushë kërkon një numër të vlefshëm.',
  'ERROR_PRIMARY_EMAIL' => 'Gabim. Së paku një adresë primare duhet të jetë vendosur.',
  'ERROR_TYPE_NOT_VALID' => 'Gabim: Ky lloj nuk është valid.',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Gabim: Në gjendje të pamudshme që të marrë të dhënat për {0} lidhësin.Shërbimi mund të jetë aktualisht i paaritshëm apo parametrat e konfigurimit mund të jenë jovalide. Lidhësi gabim i mesazhit: ({1}).',
  'ERROR_UPLOAD_FAILED' => 'Gabim. Fajli dështoi të ngarkohet.',
  'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Ju lutemi specifikoni "çelësin" e indeksit në shfaqjen parametrave që atribuojnë për definimin e të dhënave- Meta',
  'ERR_AJAX_LOAD' => 'Një gabim ka ndodhur:',
  'ERR_AJAX_LOAD_FAILURE' => 'Ndodhi një gabim gjatë përpunimit të kërkesës tuaj, ju lutemi provoni përsëri në një kohë të mëvonshme.',
  'ERR_AJAX_LOAD_FOOTER' => 'Nëse ky gabim vazhdon, ju lutemi të keni administratori tuaj disaktivizuar Ajax për këtë modul',
  'ERR_BAD_RESPONSE_FROM_SERVER' => 'Përgjigje e keqe nga serveri',
  'ERR_BLANK_PAGE_NAME' => 'Ju lutemi shkruani emrin e faqes.I',
  'ERR_CALENDAR_CANNOT_UPDATE_FROM_CHILD' => 'Ndryshimet e përsëritjes duhet të bëhen duke përdorur regjistrimin e parë në seritë.',
  'ERR_CANNOT_CREATE_METADATA_FILE' => 'Gabim: Dosja [[Dosja]] është zhdukur. Në pamundësi për të krijuar, sepse asnjë dosje që korrespondon HTML nuk është gjetur.',
  'ERR_CANNOT_FIND_MODULE' => 'Gabim: Moduli [moduli] nuk ekziston.',
  'ERR_COMPATIBLE_PRECISION_VALUE' => 'Vlera e fushë nuk është në përputhje me vlerën precize',
  'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Gabim: Koleksioni i numërimi të parametrit kokërr nuk përputhet me numërimin e koleksionit të rezultateve.',
  'ERR_CONNECTOR_NOT_ARRAY' => 'koleksioni lidhës në {0} është përcaktuar gabimisht ose është bosh dhe nuk mund të përdoret.',
  'ERR_CONTACT_TECH_SUPPORT' => 'Ju lutemi kontaktoni mbështetjen teknike.',
  'ERR_CREATING_FIELDS' => 'Gabim gjatë mbushjes së fushave shtesë të detajuara',
  'ERR_CREATING_TABLE' => 'Gabim gjatë krijimit të tabelës',
  'ERR_DATABASE_CONN_DROPPED' => 'Gabim i ekzekutimit në pyetje. Ndoshta, baza e të dhënave tuaja e ka ndërprerë lidhjen. Ju lutemi rifreskoni këtë faqe, ju mund të keni nevojë për të rifilluar faqën tuaj të serverit.',
  'ERR_DATABSE_RELATIONSHIP_QUERY' => 'Gabim konfigurim {0} lidhje: {1}',
  'ERR_DB_FAIL' => 'Dështimi i bazës së të dhënave. Ju lutemi referohuni në sugarcrm.log për detajet.',
  'ERR_DB_QUERY' => '{0}:pyetje e dështuar: {1}',
  'ERR_DB_VERSION' => 'Fajllat e Sugar CRM {0} mund të përdoren vetëm me databazën {1} të Sugar CRM.',
  'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Ndarësi decimal nuk mund të përdorë karakterin e njëjtë si mijëra ndarës.\\n\\n Ju lutemi ndryshoni vlerat.',
  'ERR_DELETE_RECORD' => 'Duhet përcaktuar numrin e regjistrimit për të fshirë konaktin',
  'ERR_DNB_BAL_COMPARISON' => 'Gabim. Limiti i poashtëm duhet të jetë më i vogël se limiti i epërm',
  'ERR_ELASTIC_TEST_FAILED' => 'Dështoi të konektojë serverin Elastic',
  'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Ju lutemi shtypeni konfirmimin e fjalëkalimit',
  'ERR_ENTER_NEW_PASSWORD' => 'Ju lutemi shtypeni fjalëkalimin tuaj të ri',
  'ERR_ENTER_OLD_PASSWORD' => 'ju lutem shtypeni fjalëkalimin tuaj aktual',
  'ERR_EXISTING_PORTAL_USERNAME' => 'Gabim: Emri i portalit është caktuar tashmë në një tjetër kontakt.',
  'ERR_EXPORT_DISABLED' => 'eksportimi i çaktivizuar',
  'ERR_EXPORT_TYPE' => 'gabim gjatë eksportim',
  'ERR_EXTERNAL_API_403' => 'Ndalohet hyrja. Lloji i dosjes nuk është i mbështetur.',
  'ERR_EXTERNAL_API_LOTUS_LIVE_CONFLICT' => 'Një dosje me të njëjtin emër tashmë ekziston në sistem.',
  'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'Mungon OAuth Access Token.',
  'ERR_EXTERNAL_API_SAVE_FAIL' => 'Një gabim ka ndodhur duke u përpjekur për të ruajtur llogarinë e jashtme.',
  'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Një gabim ka ndodhur duke ngarkuar. Ju lutemi sigurohuni që dosja të cilën ju keni ngarkuar nuk është e zbrazët.',
  'ERR_FILE_NOT_FOUND' => 'Gabim: Nuk arrin të ngarkoje dosjen {0}. Ju lutemi kontrolloni sistemin dhe lejet e web serverit.',
  'ERR_FILE_WRITE' => 'Gabim: Nuk arrin të shkruaje dosjen {0}. Ju lutemi kontrolloni sistemin dhe lejet e web serverit.',
  'ERR_GENERIC_SERVER_ERROR' => 'Pati një gabim gjatë lidhjes me serverin. Ju lutemi provoni përsëri.',
  'ERR_GENERIC_TITLE' => 'Gabim',
  'ERR_GOOGLE_API_415' => 'Dokumentat Google nuk mbështetin formatin e dosjeve që ju ofrohet.',
  'ERR_HTTP_404_ACTION' => 'Kthehu mbrapa tek faqja e mëparshme',
  'ERR_HTTP_404_TEXT' => 'Na vjen keq por resursi që ju kërkuat nuk mund të gjindet.',
  'ERR_HTTP_404_TITLE' => 'HTTP: 404 nuk u gjet',
  'ERR_HTTP_404_TYPE' => '404',
  'ERR_HTTP_500_ACTION' => 'Ju lutemi kontaktoni mbështetjen teknike.',
  'ERR_HTTP_500_TEXT' => 'Pati një gabim në server. Ju lutemi kontaktoni mbështetjen teknike.',
  'ERR_HTTP_500_TITLE' => 'HTTP: 500 gabim në serverin e brendshëm',
  'ERR_HTTP_500_TYPE' => '500',
  'ERR_HTTP_DEFAULT_ACTION' => 'Kthehu mbrapa tek faqja e mëparshme',
  'ERR_HTTP_DEFAULT_TEXT' => 'Gabim i panjohur.',
  'ERR_HTTP_DEFAULT_TITLE' => 'Gabim i panjohur',
  'ERR_HTTP_DEFAULT_TYPE' => 'E panjohur',
  'ERR_INTERNAL_ERR_MSG' => 'Gabim i brendshëm',
  'ERR_INVALID_AMOUNT' => 'Ju lutemi vendosni një sasi valide',
  'ERR_INVALID_DATE' => 'Ju lutemi vendosni datë valide',
  'ERR_INVALID_DATE_FORMAT' => 'Formati i datës duhet të jetë:',
  'ERR_INVALID_DAY' => 'Ju lutem vendosni ditë valide',
  'ERR_INVALID_EMAIL_ADDRESS' => 'Nuk është email adresë valide',
  'ERR_INVALID_FILE_REFERENCE' => 'Referenca jovalide e dosjes',
  'ERR_INVALID_HOUR' => 'Ju lutemi shkruani një orë valide',
  'ERR_INVALID_MONTH' => 'Ju lutemi vendosni një muaj valid',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Fushë  e nevojshme jo valide',
  'ERR_INVALID_TIME' => 'Ju lutemi vendosni një kohë valide',
  'ERR_INVALID_VALUE' => 'Vlerë jo valide:',
  'ERR_INVALID_YEAR' => 'Ju lutemi vendosni një vit valid me 4 numra',
  'ERR_LAYOUT_RENDER_MSG' => 'Oops! Ne nuk jemi në dispozicion të rradhitim asgjë. Ju lutemi provoni më vonë edhe njëherë ose kontaktoni mbështetjen teknike.',
  'ERR_LAYOUT_RENDER_TITLE' => 'Rradhitësi i ekspozimit dështoi',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Gabim: Mungon hyrja e hartimit për modulin.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Mungojnë fushat e nevojshme:',
  'ERR_MISSING_VARDEF_NAME' => 'Paralajmërim: Fusha [[fusha]] nuk ka një hyrje të hartuar në[moduleDir] dosjen vardefs.php',
  'ERR_MOBILE_BROWSER_FORBIDDEN' => 'E ndaluar.',
  'ERR_MOBILE_BROWSER_INTERNAL_SERVER_ERROR' => 'Gabim i brendshëm i serverit.',
  'ERR_MOBILE_BROWSER_NOT_AUTHORIZED' => 'Vërtetimi dështoj.',
  'ERR_MOBILE_BROWSER_PAGE_NOT_FOUND' => 'Burimi i kërkuar nuk u gjet.',
  'ERR_MOBILE_BROWSER_SERVICE_UNAVAILABLE' => 'Shërbimi nuk është në dispozicion.',
  'ERR_MOBILE_CONFLICT' => 'Dikush e ka redaktuar të njëjtin regjistrim në server. Konfirmo që të auto-përputhni ndryshimet tuaja ose të refuzoni ti hidhni ato.',
  'ERR_MOBILE_CONNECTION_FAILED' => 'Nuk mund të arrihet serveri',
  'ERR_MOBILE_CONNECTION_FAILED_LOGIN' => 'Serveri i padisponueshëm në URL-në e dhënë',
  'ERR_MOBILE_EMAIL' => 'Gabim. Email adresa e pavlefshme.',
  'ERR_MOBILE_FILE_ABORTED' => 'Veprimi i leximit u ndërpre',
  'ERR_MOBILE_FILE_NOT_FOUND' => 'Fajlli nuk u gjet',
  'ERR_MOBILE_FILE_NOT_READABLE' => 'Fajli jo i lexueshëm',
  'ERR_MOBILE_FILE_NOT_SUPPORTED' => 'Ky lloji i dokumentit nuk është i mbështetur.',
  'ERR_MOBILE_FILE_PROCESSING' => 'Procesimi i gabimit të fajlit',
  'ERR_MOBILE_FILE_READ' => 'Dështoi leximi i fajllit',
  'ERR_MOBILE_FILE_SECURITY' => 'Fajli është mbyllur',
  'ERR_MOBILE_FILE_SIZE_LIMIT_EXCEEDED' => 'Dokumentit është tepër i madh. Madhësia maksimale e lejuar është {{size}}',
  'ERR_MOBILE_GENERIC_NATIVE_ERROR' => 'Ka ndodhur një gabim i papritur.',
  'ERR_MOBILE_INCOMPATIBLE_CLIENT_VERSION' => 'Aplikacioni juaj është vjetruar dhe nuk është më në pajtueshmëri me instancën e SugarCRM me të cilën ju jeni duke u lidhur. A dëshironi të shkarkoni versionin e ri prej nga App Store?',
  'ERR_MOBILE_INTERNAL' => 'Gabim i brendshëm ({{{code}}}). Ju lutemi provoni përsëri më vonë.',
  'ERR_MOBILE_INTERNET_UNAVAILABLE' => 'Nuk ka lidhje të disponueshme të internetit',
  'ERR_MOBILE_INVALID_CREDS' => 'Emri përdorues ose fjalëkalimi i pavlefshëm',
  'ERR_MOBILE_METADATA_CHANGED' => 'Konfigurimi i serverit ka ndryshuar.',
  'ERR_MOBILE_METADATA_CHANGED_RELOAD' => 'Konfigurimi i server ka ndryshuar dhe rifreskimi është i nevojshme. Të vazhdohet?',
  'ERR_MOBILE_NOT_AUTHORIZED' => 'Qasje e paautorizuar',
  'ERR_MOBILE_NOT_FOUND' => 'Nuk u gjet burimi',
  'ERR_MOBILE_NOT_FOUND_LOGIN' => 'Një SugarCRM server i përshtatshëm nuk u gjet në URL-në e dhënë ({{{minVersion}}} {{{supportedFlavors}}} e kërkuara).',
  'ERR_MOBILE_SESSION_EXPIRED' => 'Sesioni juaj ka skaduar',
  'ERR_MOBILE_SSO_NOT_CONFIGURED' => 'SSO logimi nuk është në disponim. Sigurohuni që është në Sugar 7.5 ose më i madh dhe i konfiguruar për SSO.',
  'ERR_MOBILE_STORAGE_UNAVAILABLE' => 'Paisja e magazinimit nuk është në dispozicion',
  'ERR_MOBILE_TIMEOUT' => 'Serveri nuk përgjigjet',
  'ERR_MOBILE_TIMEOUT_LOGIN' => 'Serveri nuk përgjigjet në URL-në e dhënë',
  'ERR_MOBILE_UPLOAD' => 'Gabim gjatë ngarkimit të fajlit',
  'ERR_MOBILE_VALIDATION' => 'Regjistrimi i pavlefshëm',
  'ERR_MOBILE_VIEW_NOT_SUPPORTED' => 'Verzioni celular nuk e mbështet këtë funksionalitet. A doni të hapni verzionin desktop?',
  'ERR_MONITOR_FILE_MISSING' => 'Gabim: Në pamundësi për të krijuar monitor sepse dosja metadata është e zbrazët ose nuk ekziston.',
  'ERR_MONITOR_NOT_CONFIGURED' => 'Gabim: Nuk ka monitor të konfiguruar për emrin e kërkuar',
  'ERR_MSSQL_DB_CONTEXT' => 'Ndryshoi konteksti i bazës së të dhënave për',
  'ERR_MSSQL_WARNING' => 'Paralajmërim:',
  'ERR_NEED_ACTIVE_SESSION' => 'Sesion aktiv është i nevojshëm për të eksportuar përmbajtien.',
  'ERR_NOTHING_SELECTED' => 'Ju lutemi bëni një zgjedhje para se të vazhdoni.',
  'ERR_NOT_ADMIN' => 'Qasje të paautorizuar në administratë.',
  'ERR_NO_DB' => 'Nuk mund të lidheni në bazën e të dhënave. Ju lutemi referohuni në sugarcrm.log per detajet.',
  'ERR_NO_DOCS' => 'Asnjë dokument në dispozicion',
  'ERR_NO_HEADER_ID' => 'Ky funksion është i padisponueshëm në këtë temë.',
  'ERR_NO_PRIMARY_TEAM_SPECIFIED' => 'Asnjë grup primar i specifikuar',
  'ERR_NO_RECORDS_SELECTED' => 'Nuk keni zgjedhur asnjë të dhënë.',
  'ERR_NO_SINGLE_QUOTE' => 'Nuk mund të përdor shenjën e citimit për',
  'ERR_NO_SUCH_FILE' => 'Dosja nuk ekziston në sistem',
  'ERR_NO_VIEW_ACCESS_ACTION' => 'Kontaktoni administratorin tuaj për të kërkuar qasje.',
  'ERR_NO_VIEW_ACCESS_MSG' => 'Kontaktoni administratori e mbështetjes teknike që të keni qasje në pamjen e {0} modulit.',
  'ERR_NO_VIEW_ACCESS_REASON' => 'Ju nuk keni lejen për qasje në këtë faqe.',
  'ERR_NO_VIEW_ACCESS_TITLE' => 'Refuzohet qasja',
  'ERR_OFFLINE' => 'Gabim offline',
  'ERR_OFFLINE_CLEAN_UP_CONFIRMATION' => 'Ju keni drejtuar nga hapësira për ruajtje offline. Storage pastër-up është i rekomanduar. A doni për të kryer atë tani?',
  'ERR_OFFLINE_DB_CLEANING_ERROR' => 'Pastrimi i databazës dështoi',
  'ERR_OFFLINE_OUT_OF_SPACE' => 'Ju nuk keni hapsirë për magazinimin lokal',
  'ERR_OFFLINE_PREFETCH_FAILED' => 'Dështoi në të dhënat Prefetch nga server',
  'ERR_OFFLINE_SERVERTIME_UNAVAILABLE' => 'Dështoi për të marrë kohën e serverit',
  'ERR_OFFLINE_START_FAILED_OUT_OF_SPACE' => 'Dështoi për të krijuar magazinimin lokal: ju nuk keni hapsirë',
  'ERR_OFFLINE_STORAGE_CREATE' => 'Dështoi për të krijuar magazinimin lokal',
  'ERR_OFFLINE_STORAGE_UNAVAILABLE' => 'Dështoi për të hapur magazinimin lokal',
  'ERR_OFFLINE_SYNC_CONFLICT' => 'Konflikt sinkronizimi',
  'ERR_OFFLINE_SYNC_ERROR' => 'Gabim sinkronizimi',
  'ERR_OPPORTUNITY_NAME_DUPE' => 'Mundësi me emër të njëjtë % tashmë ekziston. Ju lutemi shënoni një emër tjetër  poshtë.',
  'ERR_OPPORTUNITY_NAME_MISSING' => 'Emri i mundësisë nuk ishte e shënuar. Ju lutemi shënoni poshtë një emër të mundësisë.',
  'ERR_PASSWORD_MISMATCH' => 'Fjalëkalimi i dhënë nuk përputhet me atë në sistemin tonë.',
  'ERR_PORTAL_NAME_CHECK' => 'E paaftë për të verifikuar se emri i portalit është unik',
  'ERR_POTENTIAL_SEGFAULT' => 'Një potencial i segmentit Apache gabimisht është zbuluar. Ju lutemi njoftoni administratorin e sistemit për të konfirmuar këtë problem dhe të keni raportin e saj/tij për SugarCRM.',
  'ERR_QUERY_LIMIT' => 'Gabim: Afati i pyetjes prej $afatit të arritur për $ modulë modulë.',
  'ERR_QUOTE_CONVERTED' => 'Kjo kuotë është konvertuar në mundësi.',
  'ERR_REENTER_PASSWORDS' => 'Vlerat e fjalëkalimit të ri dhe konfirmimit të fjalëkalimit nuk përputhen.',
  'ERR_RENDER_FAILED_MSG' => 'Dështoi rradhitësi i pamjes.',
  'ERR_RENDER_FAILED_TITLE' => 'Rradhitësi i pamjes dështoi.',
  'ERR_RENDER_FIELD_FAILED_MSG' => 'Nuk mund të rradhitet fusha {0}.',
  'ERR_RENDER_FIELD_FAILED_TITLE' => 'Rradhitësi i fushës dështoi.',
  'ERR_RESOLVE_ERRORS' => 'Ju lutemi zgjidhni ndonjë gabim para se të vazhdoni.',
  'ERR_RSS_INVALID_INPUT' => 'RSS nuk është një input_i llojit valid',
  'ERR_RSS_INVALID_RESPONSE' => 'RSS nuk është një reagim valid_i llojit për këtë metodë',
  'ERR_SELF_REPORTING' => 'Përdoruesi nuk mund ti raportojë vetes së tij ose saj.',
  'ERR_SERVER_FLAVOR_INCOMPATIBLE' => 'Shija e serverit është e papajtueshme: {{{flavor}}}. Shijet e mbështetura: {{{supportedFlavors}}}.',
  'ERR_SERVER_VERSION_INCOMPATIBLE' => 'Versioni i serverit është i papajtueshëm: {{{version}}}. Minimumi i versionit të kerkuar: {{{minVersion}}}.',
  'ERR_SINGLE_QUOTE' => 'Përdorimi i kuotës së vetme nuk është mbështetur për këtë fushë. Ju lutemi ndryshoni vlerën.',
  'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Mungon indeksi në shfaqjen e parametrave të rrjetit për:',
  'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Gabim: Ka një numër të pabarabartë për argumentët e $#39;çelësit$#39; dhe $#39;kopjimit$#39; të elementëve në shfaqjen e rrjetit të parametrave.',
  'ERR_SQS_NO_MATCH' => 'Asjnë përputhje',
  'ERR_SQS_NO_MATCH_FIELD' => 'Nuk ka asnjë përputhje për fushën:',
  'ERR_STORE_FILE_MISSING' => 'Gabim: Në pamundësi për të gjetur implementimin e dosjes Store',
  'ERR_SUHOSIN' => 'Ngarkimi i rrjedhjes është i bllokuar nga Suhosin, ju lutemi shtoni "ngarkim" për  suhosin.executor.include.whitelist (Shih sugarcrm.log për më shumë informacione)',
  'ERR_SYNC_FAILED' => 'Në pamundësi për të sinkronizuar me serverin.',
  'ERR_TIMEPERIOD_ALREADY_HAS_LEAVES' => 'Kjo periudhë kohore tani më ka nën-periudha',
  'ERR_TIMEPERIOD_ALREADY_LEAF' => 'Nën periudhat kohore nuk mund të kenë nën-periudha',
  'ERR_TIMEPERIOD_TYPE_DOES_NOT_EXIST' => 'E pamundur për të rikthyer periudha kohore të tipit: {0}',
  'ERR_TIMEPERIOD_UNDEFINED_FOR_DATE' => 'Gabim periudhë kohore e padefinuar për datën {0}',
  'ERR_UNDEFINED_METRIC' => 'Gabim: Në pamundësi për të vendosur vlerën për metrikën e padefinuar',
  'ERR_UW_RETIRED' => 'Përditësimi i Wizard nuk është në disponim',
  'ERR_VCARD_FILE_MISSING' => 'vcf fajli mungon',
  'ERR_VCARD_FILE_PARSE' => 'E pamundur analizimi vCard formatit',
  'EXCEPTION_ACCESS_MODULE_CONFIG_NOT_AUTHORIZED' => 'Përdoruesi aktual nuk është i autorizuar të ndryshojë termat e konfigurimit {moduleName}',
  'EXCEPTION_CHANGE_MODULE_CONFIG_NOT_AUTHORIZED' => 'Përdoruesi aktual nuk është i autorizuar të ndryshojë termat e konfigurimit {moduleName}',
  'EXCEPTION_CLIENT_OUTDATED' => 'Softveri juaj është jashtë skadimit, ju lutemi përditësojeni klientin tuaj përpara se të lidheni përsëri.',
  'EXCEPTION_CLIENT_OUTDATED_DESC' => 'Tregon se klienti konsumon API është i tejkaluar dhe duhet të rifreskohet para se konsumi i mëtejshëm i API mund të bëhet.',
  'EXCEPTION_CONNECTOR_RESPONSE' => 'Konektor ose kërkesa për integrim ka rezultuar në përgjigje të dështuar.',
  'EXCEPTION_CONNECTOR_RESPONSE_DESC' => 'Indikon se një kërkesë e bërë nëpvrmjet API ndaj një shërbimi tjetër, fundpike ose URI ka dështuar ose nuk mund të rregullohet nga serveri.',
  'EXCEPTION_CREATE_MODULE_NOT_AUTHORIZED' => 'Ju nuk jeni të autorizuar të krijoni {moduleName}. Kontaktoni administratorin nëse doni qasje.',
  'EXCEPTION_EDIT_CONFLICT' => 'Editoni konfliktin, ju lutemi ringarkoni të dhënat tuaja.',
  'EXCEPTION_EDIT_CONFLICT_DESC' => 'Tregon se nuk mund të ketë qenë në harmoni me redaktimet e një regjistrimi të ndodhur dhe kërkesa e tanishme për të redaktuar të dhënat do të ndikonte një edit mëparshëm për rekord.',
  'EXCEPTION_FATAL_ERROR' => 'Kërkesa juaj dështoi të kompletohet.Ndodhi një gabim i madh. kontrolloni shkrimet tuaja për më shumë detaje.',
  'EXCEPTION_FATAL_ERROR_DESC' => 'Kërkesa nuk mund të përpunohet si paraqitet apo ka pasur gabim me përgjigjen. Kjo zakonisht do të thotë një gabim fatal ka ndodhur dhe se dështimi i veçantë mund të identifikohet në loginin e aplikimit.',
  'EXCEPTION_FAVORITE_MODULE_NOT_AUTHORIZED' => 'Ju nuk jeni të autorizuar të favorizoni {moduleName}. Kontakoni administratorin tuaj nëse ju duhet qasje.',
  'EXCEPTION_INACTIVE_PORTAL_USER' => 'Ju nuk mund të keni qasje në portal përshkak se llogaria juaj nuk është aktive. Ju lutemi kontaktoni mbështetjen për klientë nëse doni qasje.',
  'EXCEPTION_INACTIVE_PORTAL_USER_DESC' => 'Llogaria e portalit e lidhur me miqtë e tyre përdorues nuk është aktualisht aktiv. Kjo kërkon veprim nga ana e mbështetjes së klientëve.',
  'EXCEPTION_INCORRECT_VERSION_DESC' => 'Versioni i API që ju jeni duke përdorur nuk është i saktë për kërkesën aktuale.',
  'EXCEPTION_INVALID_PARAMETER' => 'Parametri në kërkesën tuaj ishte i gabuar.',
  'EXCEPTION_INVALID_PARAMETER_DESC' => 'Tregon se një parametër i dërguar në kërkesë është i pavlefshëm.',
  'EXCEPTION_INVALID_TOKEN' => 'Autentikimi juaj është jo valid.',
  'EXCEPTION_INVALID_TOKEN_DESC' => 'Tregon se shenja e vertetimit e paraqitur me kërkesë është e pavlefshme. Kjo zakonisht ndodh për shkak se shenjs i ka kaluar afati, por mund të jetë edhe për shkak se shenja është shformuar ose është e pasaktë.',
  'EXCEPTION_MAINTENANCE' => 'SugarCRM është në modën e mirëmbajtjes. Vetëm administratorët mund të logohen. Ju lutem kontaktoni administratorin tuaj për detaje.',
  'EXCEPTION_MAINTENANCE_DESC' => 'Instanca e SugarCRM që është në shërbim të API është në mënyrën e mirëmbajtjes. Qasja në API është e kufizuar për vetëm administratorët.',
  'EXCEPTION_METADATA_CONFLICT' => 'Metadata konflikt, ju lutemi ringarkoni metadatat.',
  'EXCEPTION_METADATA_OUT_OF_DATE' => 'Metadatat tuaja ose përdoruesi nuk përshtaten me serverin. Ju lutemi risinkronizoni metadatat tuaja.',
  'EXCEPTION_METADATA_OUT_OF_DATE_DESC' => 'Tregon se metadata në server nuk përputhet me metadatën e klientit që është aktualisht duke u përdorur. Kjo mund të ndodhë pas një ndryshimi në parametrat e sistemit, ndryshimet në modulet në Studio apo vendosjen e moduleve të reja, në mesin e ndryshimeve të tjera të sistemit.',
  'EXCEPTION_MISSING_PARAMTER' => 'Parametri i kërkuar në kërkesën tuaj ishte zhdukur.',
  'EXCEPTION_MISSING_PARAMTER_DESC' => 'Tregon se një parametër i kërkuar i kërkesës mungon.',
  'EXCEPTION_NEED_LOGIN' => 'Ju duhet të jeni të kyçur për të kryer këtë veprim.',
  'EXCEPTION_NEED_LOGIN_DESC' => 'Endpoint i kërkuar kërkon vertetim dhe klienti kërkues nuk e ka vërtetuar ende.',
  'EXCEPTION_NOT_AUTHORIZED' => 'Ju nuk jeni të autorizuar për të kryer këtë veprim. Kontaktoni administratorin nëse doni qasje.',
  'EXCEPTION_NOT_AUTHORIZED_DESC' => 'Tregon se konsumatori i kërkuar nuk është i autorizuar për të kryer veprimin e kërkuar.',
  'EXCEPTION_NOT_FOUND' => 'Resurset e kërkesës tuaj nuk u gjindën. Nuk mund të gjindet mbajtësi deri te mënyra e caktuar në kërkesë.',
  'EXCEPTION_NOT_FOUND_DESC' => 'Endpoint nuk mund të gjejë një burim për kërkesën ose nuk ka një mbajtës për kërkesën.',
  'EXCEPTION_NO_METHOD' => 'Kërkesa juaj nuk është mbështetur. Nuk mund të gjindet HTTP metoda për kërkesën tuaj në këtë mënyrë.',
  'EXCEPTION_NO_METHOD_DESC' => 'Endpoint nuk e mbështet llojin kërkesën HTTP që është duke u bërë. Kjo mund të ndodhë kur një kërkesë POST është duke u bërë për një endpoint të projektuar për një GET kërkesë për shembull.',
  'EXCEPTION_PORTAL_NOT_CONFIGURED' => 'Portali nuk është konfiguruar siç duhet. Kontaktoni administratorin e portalit për ndihmë.',
  'EXCEPTION_PORTAL_NOT_CONFIGURED_DESC' => 'Tregon se aplikimi i portalit nuk është i konfiguruar si duhet dhe nuk mund të përdoret. Kjo kërkon veprim nga ana e administratorit të portalit.',
  'EXCEPTION_REQUEST_FAILURE' => 'Kërkesa juaj ka dështuar për të përfundu.',
  'EXCEPTION_REQUEST_FAILURE_DESC' => 'Kërkesa dështoi për tu kompletuar.',
  'EXCEPTION_REQUEST_TOO_LARGE' => 'Kërkesa juaj është tepër e madhe për t&#39;u kryer.',
  'EXCEPTION_REQUEST_TOO_LARGE_DESC' => 'Kërkesa është shumë e gjatë për tu trajtuar nga serveri.',
  'EXCEPTION_SUBSCRIBE_MODULE_NOT_AUTHORIZED' => 'Ju nuk jeni të autorizuar të paraqiteni në {moduleName}. Kontaktoni administratorin tuaj nëse ju duhet qasje.',
  'EXCEPTION_UNKNOWN_EXCEPTION' => 'Kërkesa juaj dështoi për shkaqe të panjohura.',
  'EXCEPTION_UNKNOWN_EXCEPTION_DESC' => 'Një kusht është hasur për shkak të dështimit të përgjithshëm apo gabimit. Arsyet për këtë përjashtim variojnë, por në përgjithësi bie jashtë sferës së një përjashtim shumë të veçantë API.',
  'FATAL_LICENSE_ALTERED' => 'Licenca juaj ka ndryshuar që nga koha e fundit kur e keni bë valide atë.',
  'LBL_1_COLUMN' => '1 Kolonë',
  'LBL_2_COLUMN' => '2 Kolona',
  'LBL_3_COLUMN' => '3 Kolona',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => 'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Fshi llogarinë',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Fshi llogarinë',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => 'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Fshi fushatën',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Fshi fushatën',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => 'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Fshi selektimin',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Fshi selektimin',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => 'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Fshi kontaktin',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Fshi kontaktin',
  'LBL_ACCESSKEY_CLEAR_FILE_KEY' => 'LBL_ACCESSKEY_CLEAR_FILE_KEY',
  'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Fshi dosje',
  'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Fshi dosje',
  'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => 'LBL_ACCESSKEY_CLEAR_RELATE_KEY',
  'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Fshi selektimin',
  'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Fshi selektimin',
  'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => 'LBL_ACCESSKEY_CLEAR_TEAMS_KEY',
  'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Fshi ruping',
  'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Fshi grupin',
  'LBL_ACCESSKEY_CLEAR_USERS_KEY' => 'LBL_ACCESSKEY_CLEAR_USERS_KEY',
  'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Fshi përdoruesin',
  'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Fshi përdoruesin',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Selekto llogarinë',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Selekto llogarinë [Alt+A]',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Selekto fushatën',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Selekto fushatën [Alt+M]',
  'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
  'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Selekto kontaktin',
  'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Selekto kontaktin [Alt+C]',
  'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
  'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Selekto dosje',
  'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Selekto dosje [Alt+F]',
  'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
  'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Selekto grupin',
  'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Selekto grupin [Alt+Z]',
  'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
  'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Selekto përdoruesin',
  'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Selekto përdoruesin [Alt+U]',
  'LBL_ACCOUNT' => 'Llogari',
  'LBL_ACCOUNTS' => 'llogaritë',
  'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
  'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Shih përmbatjen',
  'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Shih përmbatjen [Alt+H]',
  'LBL_ACTION' => 'Veprim',
  'LBL_ACTION_CREATE' => 'KRIJO',
  'LBL_ACTION_CREATE_EXPLANATION' => 'Krijuar {{module}} "{{name}}"',
  'LBL_ACTION_CREATE_RELATED_EXPLANATION' => '{{module}} "{{name}}" i krijuar lidhur me {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_DELETE' => 'FSHI',
  'LBL_ACTION_DELETE_EXPLANATION' => 'Fshirë {{module}} "{{name}}"',
  'LBL_ACTION_FAVORITE' => 'FAVORIT',
  'LBL_ACTION_FAVORITE_EXPLANATION' => '{{module}} "{{name}}" preferuar',
  'LBL_ACTION_FOLLOW' => 'NDIQ',
  'LBL_ACTION_FOLLOW_EXPLANATION' => '{{module}} "{{name}}" i ndjekur',
  'LBL_ACTION_LINK' => 'LINK',
  'LBL_ACTION_LINK_EXPLANATION' => '{{module}} "{{name}}"  lidhur me {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_UNFAVORITE_EXPLANATION' => '{{module}} "{{name}}" jo i preferuar',
  'LBL_ACTION_UNFOLLOW_EXPLANATION' => 'Unfollowed {{module}} "{{name}}"',
  'LBL_ACTION_UNLINK' => 'UNLINK',
  'LBL_ACTION_UNLINK_EXPLANATION' => '{{module}} "{{name}}" jo lidhur nga {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_UPDATE' => 'PËRDITËSO',
  'LBL_ACTION_UPDATE_EXPLANATION' => 'Përditësuar {{module}} "{{name}}"',
  'LBL_ACTIVE' => 'Sesioni aktiv',
  'LBL_ACTIVE_TASKS_DASHLET' => 'Detyra aktive',
  'LBL_ACTIVE_TASKS_DASHLET_COMPLETE_TASK' => 'Ka përfunduar',
  'LBL_ACTIVE_TASKS_DASHLET_CONFIRM_CLOSE' => 'Jeni të sigurtë që doni të mbyllni {0} sa të përfundojë?',
  'LBL_ACTIVE_TASKS_DASHLET_DESCRIPTION' => 'Paneli i detyrave aktive shfaq detyrat e tashme, të ardhshme dhe detyrat për ti bërë.',
  'LBL_ACTIVE_TASKS_DASHLET_DUE_NOW' => 'Tani',
  'LBL_ACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL' => 'Detyrat e ekipit',
  'LBL_ACTIVE_TASKS_DASHLET_TODO' => 'Për të bërë',
  'LBL_ACTIVE_TASKS_DASHLET_UPCOMING' => 'Vjen',
  'LBL_ACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL' => 'Detyrat e mia',
  'LBL_ACTIVITIES' => 'Aktivitetet',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitetet',
  'LBL_ACTIVITYSTREAM_COMMENT_PLACEHOLDER' => 'Shtoni komentin tuaj ... Shkruaj @ për të përmendur një përdorues. Shkruaj # për t&#39;iu referuar një regjistrimi.',
  'LBL_ACTIVITYSTREAM_POST_PLACEHOLDER' => 'Shkruani një shënim ose tërhiq dhe lësho një shtojcë. Lloji @ përmend një përdorues. Shkruaj # për t&#39;iu referuar një regjistrimi.',
  'LBL_ACTIVITYSTREAM_RELATIVETIME_ON' => 'në',
  'LBL_ACTIVITY_STREAM' => 'Aktivitetet',
  'LBL_ACTIVITY_STREAM_DASHLET_DESCRIPTION' => 'Shiko një listë të aktivitetetve të performuara në regjistrime dhe krijo dhe posto komente',
  'LBL_ACTIVITY_STREAM_DASHLET_NAME' => 'Lumi i aktiviteteve të mia',
  'LBL_ACTIVITY_STREAM_DISABLED' => 'Paneli i aktivitetit nuk është i mundësuar',
  'LBL_ACTIVITY_STREAM_DISABLED_MODULE' => 'Lumi i aktivitetit nuk është aktivizuar për këtë modul',
  'LBL_ACTIVITY_VIEW_TOUR' => 'Shiko pamje të aktiviteteve',
  'LBL_ACTIVTY_STREAM_SHOW_MORE' => 'Më shumë postime',
  'LBL_ADD' => 'shto',
  'LBL_ADDED_DASHLET' => 'Nënvizimi i Sugar është shtuar',
  'LBL_ADDING_DASHLET' => 'Shtimi i nënvizimit të Sugar...',
  'LBL_ADDITIONAL_DETAILS' => 'Detaje plotësuese',
  'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Mbyll',
  'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Shtyp për ta mbyll',
  'LBL_ADD_ALL_LEAD_FIELDS' => 'Shto të gjitha fushat',
  'LBL_ADD_BUTTON' => 'shto',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_TITLE' => 'Shto [Alt+A]',
  'LBL_ADD_DASHLETS' => 'Shto nënvizime',
  'LBL_ADD_DOCUMENT' => 'Shto dokumentacion',
  'LBL_ADD_PAGE' => 'Shto faqe',
  'LBL_ADD_TO_FAVORITES' => 'Sho tek favoritet e mia',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Shto në listën e synimeve',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Shto në listën e synimeve',
  'LBL_ADMIN' => 'Administratori',
  'LBL_ADVANCED' => 'Avancuar',
  'LBL_ADVANCEDSEARCH' => 'Kërkim i avancuar',
  'LBL_ADVANCED_SEARCH' => 'Kërkim i avancuar',
  'LBL_ADV_SEARCH_LNK_KEY' => '8',
  'LBL_AJAX_FAILURE' => 'Dështimi i Ajaxit',
  'LBL_ALERT_BROWSER_NOT_SUPPORTED' => 'Versioni i shfletuesit më nuk është i mbështetur ose jeni duke përdorur një shfletues të pambuluar.',
  'LBL_ALERT_BROWSER_SUPPORT' => 'Versionet e mëposhtme të kërkimit janë të rekomanduara:<br />-Internet Explorer 9<br />-Firefox 22<br />-Safari 6<br />-Chrome27',
  'LBL_ALERT_TITLE_ERROR' => 'Gabim',
  'LBL_ALERT_TITLE_LOADING' => 'Ngarkim',
  'LBL_ALERT_TITLE_NOTICE' => 'Njoftim:',
  'LBL_ALERT_TITLE_SUCCESS' => 'Me sukses:',
  'LBL_ALERT_TITLE_WARNING' => 'Paralajmërim:',
  'LBL_ALT_ADDRESS' => 'Adresë tjetër:',
  'LBL_ALT_ADD_TEAM_ROW' => 'Shto resht të ri të grupit',
  'LBL_ALT_HIDE_OPTIONS' => 'Fshih opcione',
  'LBL_ALT_HOT_KEY' => 'Alt+',
  'LBL_ALT_INFO' => 'Informacioni',
  'LBL_ALT_MOVE_COLUMN_DOWN' => 'Lëvize hyrjen e selektuar poshtë me qëllim të listës së shfaqur',
  'LBL_ALT_MOVE_COLUMN_LEFT' => 'Lëvize hyrjen e selektuar në listën majtas',
  'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Lëvize hyrjen e selektuar në listën djathtas',
  'LBL_ALT_MOVE_COLUMN_UP' => 'Levizë hyrjen e selektuar në mënyrë që të shfaqet lista',
  'LBL_ALT_REMOVE_TEAM_ROW' => 'Largo grupin',
  'LBL_ALT_SHOW_OPTIONS' => 'Shfaq opcionet',
  'LBL_ALT_SORT' => 'Lloj',
  'LBL_ALT_SORT_ASC' => 'Të renditura në ngjitje',
  'LBL_ALT_SORT_DESC' => 'Të renditura në zbritje',
  'LBL_ALT_SPOT_SEARCH' => 'Kërkimi i vendit',
  'LBL_AMOUNT_USDOLLAR' => 'Vlera e konvertuar',
  'LBL_AND' => 'Dhe',
  'LBL_ANNUAL_TIMEPERIOD_FORMAT' => 'viti {0}',
  'LBL_ARCHIVE' => 'Arkiva',
  'LBL_ARCHIVE_EMAIL' => 'Emaili i arkivuar',
  'LBL_ASSIGN' => 'zgjedh  {{{this}}}',
  'LBL_ASSIGNED_TO' => 'drejtuar',
  'LBL_ASSIGNED_TO_NAME' => 'Drejtuar',
  'LBL_ASSIGNED_TO_USER' => 'Drejtuar përdoruesit',
  'LBL_ASSOC' => 'Shoqëro {{{this}}}',
  'LBL_ASSOC_EXISTING' => 'Shoqëro gjërat ekzistuese',
  'LBL_ASSOC_RELATED_RECORD' => 'Asocio të dhëna ekzistuese',
  'LBL_AUTH_FAILED' => 'Vërtetimi i klientit dështoi.',
  'LBL_AUTH_FAILED_TITLE' => 'Klienti pavlefshme',
  'LBL_BACK' => 'Kthe',
  'LBL_BAL' => 'Ndërtoni një listë',
  'LBL_BASE_RATE' => 'Rata bazë',
  'LBL_BASIC' => 'Bazike',
  'LBL_BASIC_QUICK_SEARCH' => 'Kërko...',
  'LBL_BASIC_SEARCH' => 'Kërkim',
  'LBL_BEFORE' => 'Para',
  'LBL_BEST' => 'Më i miri',
  'LBL_BEST_ADJUSTED' => 'Më mirë (e rregulluar)',
  'LBL_BILLING_ADDRESS' => 'Adresa e faturës',
  'LBL_BILLING_STREET' => 'Rruga:',
  'LBL_BILL_TO_ACCOUNT' => 'Llogaria për faturën',
  'LBL_BILL_TO_CONTACT' => 'Kontakti për faturën',
  'LBL_BLANK_VALUE' => '<empty>',
  'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack e krijuar për id përdoruesit {0}',
  'LBL_BROWSER_TITLE' => 'SugarCRM - Burim i hapur komercial CRM',
  'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
  'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Shfleto dokumentet',
  'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Shfleto dokumentet [Alt+B]',
  'LBL_BUGS' => 'gabimet',
  'LBL_BY' => 'nga',
  'LBL_Blank' => 'LBL_Blank',
  'LBL_CALENDAR_DURATION' => 'Kohëzgjatja',
  'LBL_CALENDAR_END_DATE' => 'Data e përfundimit',
  'LBL_CALENDAR_EVENT_RESPONSE_ACCEPT' => 'Duke marrë pjesë',
  'LBL_CALENDAR_EVENT_RESPONSE_DECLINE' => 'Refuzo',
  'LBL_CALENDAR_EVENT_RESPONSE_NONE' => 'Ska përgjigje',
  'LBL_CALENDAR_EVENT_RESPONSE_TENTATIVE' => 'Tentativa',
  'LBL_CALENDAR_EVENT_SCHEDULE_UNAVAILABLE' => 'Skedulo të padisponuara',
  'LBL_CALENDAR_RECURRENCE' => 'Përsërit',
  'LBL_CALENDAR_REMINDERS' => 'Kujtuesit',
  'LBL_CALENDAR_REPEAT_COUNT' => 'Përsërit ndodhitë',
  'LBL_CALENDAR_REPEAT_DOW' => 'Përsërit në ditët e javës',
  'LBL_CALENDAR_REPEAT_INTERVAL' => 'Intervali i përsëritjes',
  'LBL_CALENDAR_REPEAT_TYPE' => 'Lloji i përsëritjes',
  'LBL_CALENDAR_REPEAT_UNTIL_DATE' => 'Përsërit deri',
  'LBL_CALENDAR_START_DATE' => 'Data e nisjes',
  'LBL_CALL' => 'Thirje',
  'LBL_CALLS' => 'Thirjet',
  'LBL_CALLS_SUBPANEL_TITLE' => 'Thirjet',
  'LBL_CALL_BUTTON' => 'Telefono',
  'LBL_CAMPAIGN' => 'Fushata:',
  'LBL_CAMPAIGNLOG' => 'Identifikimi i Fushatës',
  'LBL_CAMPAIGNS' => 'Fushatat',
  'LBL_CAMPAIGNS_SEND_QUEUED' => 'Dërgo emaile fushatash të radhitura',
  'LBL_CAMPAIGN_CONTACT' => 'Fushatat',
  'LBL_CAMPAIGN_ID' => 'ID e fushatës',
  'LBL_CANCEL_BUTTON_KEY' => 'X',
  'LBL_CANCEL_BUTTON_LABEL' => 'Anulo',
  'LBL_CANCEL_BUTTON_LABEL_CONT' => 'stopo',
  'LBL_CANCEL_BUTTON_LABEL_UNSAVED_CONT' => 'për të qëndruar në faqe.',
  'LBL_CANCEL_BUTTON_TITLE' => 'Anulo [Alt+X]',
  'LBL_CANNOT_SEND_PASSWORD' => 'Nuk mund të dërgoj fjalëkalimin',
  'LBL_CAN_NOT_DISABLE_ALL_LANG' => 'Ju nuk mund të çaktivizoni të gjitha gjuhët.',
  'LBL_CASE' => 'rasti',
  'LBL_CASES' => 'rastet',
  'LBL_CASE_SUMMARY_CHART' => 'Përmbledhje shembull',
  'LBL_CASE_SUMMARY_CHART_DESC' => 'Tregon një pasqyrë të rasteve të ndëlidhura.',
  'LBL_CHANGE_BUTTON_KEY' => 'G',
  'LBL_CHANGE_BUTTON_LABEL' => 'ndrysho',
  'LBL_CHANGE_BUTTON_TITLE' => 'Ndrysho [Alt+G]',
  'LBL_CHANGE_LAYOUT' => 'Ndrysho formatin',
  'LBL_CHANGE_PASSWORD' => 'Ndrysho fjalëkalimin',
  'LBL_CHARSET' => 'UTF-8',
  'LBL_CHART' => 'Diagra,',
  'LBL_CHART_CONFIG_ALLOW_SCROLLING' => 'Lejo lëvizjen teposhtë',
  'LBL_CHART_CONFIG_BAR_CHART_OPTIONS' => 'Opcionet e shfaqjes së diagramit me linja',
  'LBL_CHART_CONFIG_CHART_TYPE' => 'Lloji diagrami',
  'LBL_CHART_CONFIG_HIDE_EMPTY_GROUPS' => 'Fshih grupet e zbrazura',
  'LBL_CHART_CONFIG_SHOW_TITLE' => 'Trego titull',
  'LBL_CHART_CONFIG_SHOW_XAXIS_LABEL' => 'Trego etiketimin e boshtit x',
  'LBL_CHART_CONFIG_SHOW_YAXIS_LABEL' => 'Trego etiketimin e boshtit y',
  'LBL_CHART_CONFIG_STACK_DATA' => 'Grumbullo të dhënat serike',
  'LBL_CHART_CONFIG_TICK_DISPLAY' => 'Shëno metodat e shfaqjes',
  'LBL_CHART_CONFIG_TICK_ROTATE' => 'Rrotullo shënimet',
  'LBL_CHART_CONFIG_TICK_STAGGER' => 'Merr shënimet',
  'LBL_CHART_CONFIG_TICK_WRAP' => 'Mbështjell shënimet',
  'LBL_CHART_CONFIG_VALUE_PLACEMENT' => 'Vendosja e vlerës së diagramit me linja',
  'LBL_CHART_CONTROLS_CLOSE' => 'Fshih kontollat',
  'LBL_CHART_CONTROLS_OPEN' => 'Shiko kontrollet',
  'LBL_CHART_LEGEND_CLOSE' => 'Fshih legjendën',
  'LBL_CHART_LEGEND_OPEN' => 'Trego legjendë',
  'LBL_CHART_NO_DATA' => 'Asnjë rezultat nuk u gjet deri tani.',
  'LBL_CHART_UNDEFINED' => 'E papërcaktuar',
  'LBL_CHECKALL' => 'Verifiko të gjitha',
  'LBL_CHOOSE_ITEMS' => 'Zgjidh gjërat',
  'LBL_CHOOSE_LINK' => 'Zgjidh llojin e linkut',
  'LBL_CHOOSE_MONTH' => 'Zgjidh Muajin',
  'LBL_CHOOSE_PARENT_TYPE' => 'Zgjidh llojin amë',
  'LBL_CITY' => 'Qyteti',
  'LBL_CLEARALL' => 'Fshi të gjitha',
  'LBL_CLEAR_BUTTON_KEY' => 'C',
  'LBL_CLEAR_BUTTON_LABEL' => 'Fshi',
  'LBL_CLEAR_BUTTON_TITLE' => 'Fshi [Alt+C]',
  'LBL_CLICK_HERE' => 'Shtyp këtu',
  'LBL_CLICK_TO_DRILLDOWN' => 'Kliko në drilldown',
  'LBL_CLIENT_IP' => 'IP adresa e klientit',
  'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
  'LBL_CLOSEALL_BUTTON_LABEL' => 'Mbyll të gjitha',
  'LBL_CLOSEALL_BUTTON_TITLE' => 'Mbyll të gjitha [Alt+I]',
  'LBL_CLOSEINLINE' => 'Mbyll',
  'LBL_CLOSE_ACTIVITY_CONFIRM' => 'A dëshiron ta mbyllish këtë #modulë#?',
  'LBL_CLOSE_ACTIVITY_HEADER' => 'Konfirmo',
  'LBL_CLOSE_ACTIVITY_REMEMBER' => 'Mos e shfaqni këtë mesazh në të ardhmen:',
  'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
  'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Mbyll dhe krijo të re',
  'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Mbyll dhe krijo të re',
  'LBL_CLOSE_BUTTON_KEY' => 'Q',
  'LBL_CLOSE_BUTTON_LABEL' => 'Mbyll:',
  'LBL_CLOSE_BUTTON_TITLE' => 'Mbyll',
  'LBL_CLOSE_DASHLETS' => 'Mbyll',
  'LBL_CLOSE_SAVE_BUTTON' => 'Mbylle detyrën dhe ruaje',
  'LBL_CLOSE_WINDOW' => 'Mbyll dritaren',
  'LBL_COFIGURE_PORTAL_THEME' => 'Konfiguro temën e portalit',
  'LBL_COLLAPSE_ALL' => 'shemb të gjitha',
  'LBL_COLLECTION_EXACT' => 'Saktë',
  'LBL_COLLECTION_NAME' => 'Emri',
  'LBL_COLLECTION_PRIMARY' => 'Primare',
  'LBL_COLORS' => 'Ngjyra',
  'LBL_COLUMNS' => 'Kolonat',
  'LBL_COLUMNS_CAN_BE_DISPLAYED' => 'kolonat mund të shfaqen.',
  'LBL_COMMENT' => 'Koment',
  'LBL_COMPANY_LOGO' => 'Logoja e Kompanisë',
  'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
  'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Ndërto email',
  'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Ndërto email [Alt+L]',
  'LBL_CONFIGURE_TWITTER' => 'Kontaktoni administratorin tuaj për të konfiguruar Twitter-in',
  'LBL_CONFIG_BLOCKED_DESC_CONFIG_ACCESS' => 'Konfigurimet e databazës për {{module}} duhet të rregullohen',
  'LBL_CONFIG_BLOCKED_DESC_MODULE_ACCESS' => 'Përdoruesi nuk ka qasje të konfigurojë caktimet e {{module}}',
  'LBL_CONFIG_BLOCKED_DESC_NO_CONFIG_METADATA' => '{{module}} nuk ka asnjë caktim konfigurimi',
  'LBL_CONFIG_BLOCKED_DESC_USER_ACCESS' => 'Përdoruesi nuk ka qasje në {{module}}',
  'LBL_CONFIG_BLOCKED_TITLE' => '{{module}} Gabim konfigurimi',
  'LBL_CONFIG_MODULE_SETTINGS_SAVED' => 'caktimi i konfigurimeve {{module}} është ruajtur.',
  'LBL_CONFIG_TITLE_MODULE_SETTINGS' => '{{module}} Konfigurimet',
  'LBL_CONFIRM' => 'Konfirmo',
  'LBL_CONFIRM_BUTTON_LABEL' => 'OK',
  'LBL_CONFIRM_BUTTON_LABEL_CONT' => 'vazhdo',
  'LBL_CONFIRM_BUTTON_LABEL_UNSAVED_CONT' => 'për të lënë faqen dhe për të hequr dorë nga ndryshimet.',
  'LBL_CONNECTORS_POPUPS' => 'Shfaqjet e lidhjeve',
  'LBL_CONNECT_TEST_FAIL' => 'Gabim: cilësimet e konfigurimit lidhës mund të jetë të pavlefshme. Ju lutem kontaktoni administratorin tuaj.',
  'LBL_CONNECT_TWITTER' => 'Lidhu me Twitter',
  'LBL_CONNECT_TWITTER_FOR_ADMIN' => 'Konfiguro konektorin e Twitter',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_CONTACTS' => 'Kontaktet',
  'LBL_CONTACT_EDIT_PASSWORD_LNK_TEXT' => 'Ndrysho fjalëkalimin',
  'LBL_CONTACT_LIST' => 'Lista e kontakteve',
  'LBL_CONTEXTUAL_SHORTCUTS' => 'Shkurtore kontekstuale',
  'LBL_CONTRACTS' => 'Kontratat',
  'LBL_COPYRIGHT' => 'Të drejtat e autorit © 2004-2014 SugarCRM Inc. Të gjitha të drejtat e rezervuara.',
  'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopjo adresën nga e majta:',
  'LBL_COUNTRY' => 'Shteti',
  'LBL_CREATED' => 'Krijuar nga',
  'LBL_CREATED_BY_USER' => 'Krijuar nga përdoruesi',
  'LBL_CREATED_ID' => 'Krijuar nga Id',
  'LBL_CREATED_USER' => 'Krijuar nga përdoruesi',
  'LBL_CREATE_ATTACHMENT' => 'Krijo bashkangjitje',
  'LBL_CREATE_BUG' => 'Krijo gabim',
  'LBL_CREATE_BUTTON_LABEL' => 'Krijo',
  'LBL_CREATE_CASE' => 'Krijo Rast',
  'LBL_CREATE_CONTACT' => 'Krijo Kontakt',
  'LBL_CREATE_KB_DOCUMENT' => 'Krijo artikull',
  'LBL_CREATE_LINK_BUTTON_LABEL' => 'Krijo dhe lidh regjistrim',
  'LBL_CREATE_LINK_RECORD' => 'Krijo dhe lidh regjistrim',
  'LBL_CREATE_MODULE' => 'Krijo {{{this}}}',
  'LBL_CREATE_NEW_TARGET_LIST' => 'Krijoni një list të re të targeteve',
  'LBL_CREATE_NOTE' => 'Krijo shënim',
  'LBL_CREATE_OPPORTUNITY' => 'Krijo Mundësi',
  'LBL_CREATE_RELATED' => 'Krijo lidhje  {{{this}}}',
  'LBL_CREATE_RELATED_RECORD' => 'Krijo të dhëna të lidhura',
  'LBL_CREATE_TASK' => 'Krijo detyrë',
  'LBL_CREATING_NEW_PAGE' => 'Krijimi i faqes së re...',
  'LBL_CURRENCIES' => 'Monedhat',
  'LBL_CURRENCY' => 'monedha',
  'LBL_CURRENCY_ID' => 'ID e Monedhës',
  'LBL_CURRENCY_NAME' => 'Emri i Monedhës',
  'LBL_CURRENCY_RATE' => 'Kursi i valutës',
  'LBL_CURRENCY_SYMBOL' => 'Simboli i monedhës',
  'LBL_CURRENT_PASSWORD' => 'Fjalëkalimi aktual',
  'LBL_CURRENT_TIMEPERIOD' => 'Periudha kohore aktuale',
  'LBL_CURRENT_USER_FILTER' => 'Artikujt e mia',
  'LBL_DASHBOARD_BWC' => 'Paneli i drejtimit im',
  'LBL_DASHBOARD_NO_RECORDS' => 'S&#39;ka panele të ruajtura',
  'LBL_DASHBOARD_TOGGLE' => 'Hap/Mbyll panelin',
  'LBL_DASHLET' => 'Nënvizimi i Sugar',
  'LBL_DASHLET_ATTACHMENTS_DESCRIPTION' => 'Shënime dhe bashkangjitjet i përkasin regjistrimit',
  'LBL_DASHLET_ATTACHMENTS_NAME' => 'Shënime & bashkëngjitje',
  'LBL_DASHLET_CASESSUMMARY_CLOSE_CASES' => 'Rastet e mbyllura',
  'LBL_DASHLET_CASESSUMMARY_OPEN_CASES' => 'Rastet e hapura',
  'LBL_DASHLET_CASESSUMMARY_SUMMARY' => 'Përmbledhje',
  'LBL_DASHLET_CASES_SUMMARY_NAME' => 'Përmbledhje shembull',
  'LBL_DASHLET_CLOSE' => 'Mbyll',
  'LBL_DASHLET_COMPANY_INFO' => 'D&B: Importo dhe zgjero',
  'LBL_DASHLET_COMPANY_INFO_DESC' => 'Zgjero llogarinë me të dhëna D&B. Kërkon regjistrim D&B.',
  'LBL_DASHLET_COMPANY_INFO_LONG_DESC' => 'Përditësojeni informacionin e llogarisë me import të D&B  dhe zgjero karakteristikën.',
  'LBL_DASHLET_CONFIGURE' => 'Konfiguro',
  'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Rifreskim automatik',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Shfaq reshtat',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'fFlterë',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'E përgjithëshme',
  'LBL_DASHLET_CONFIGURE_INTELLIGENT' => 'Lidh me regjistrimin aktual',
  'LBL_DASHLET_CONFIGURE_LINKED' => 'Lidhja dështoi',
  'LBL_DASHLET_CONFIGURE_MY_FAVORITES_ONLY' => 'Vetëm favoritet e mia',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Vetëm artikujtë e mi.',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Titulli',
  'LBL_DASHLET_CONFIG_EDIT_LABEL' => 'Ndrysho',
  'LBL_DASHLET_COUNTRY_CHART_DESCRIPTION' => 'Shfaq diagramin e shitjeve nga harta e vendit.',
  'LBL_DASHLET_COUNTRY_CHART_NAME' => 'Shitjet nga vendi',
  'LBL_DASHLET_DROP_HERE' => 'Hudhe këtu',
  'LBL_DASHLET_FORECASTS_CHART_DESC' => 'Shfaq diagramin e shiritit të parashikimit për një periudhë të caktuar kohe',
  'LBL_DASHLET_FORECASTS_CHART_NAME' => 'Diagrami i shiritit të parashikimit',
  'LBL_DASHLET_FORECASTS_DATASET' => 'Vendosje e datës',
  'LBL_DASHLET_FORECASTS_DETAILS' => 'Detaje të parashikimit',
  'LBL_DASHLET_FORECASTS_DETAILS_DESC' => 'Shfaq detaje të parashikimit total',
  'LBL_DASHLET_FORECASTS_FOR_CHART_NAME' => 'Parashiko për',
  'LBL_DASHLET_FORECASTS_GROUPBY' => 'grup nga',
  'LBL_DASHLET_FORECAST_NAME' => 'Në parashikim',
  'LBL_DASHLET_FORECAST_PARETO_CHART_NAME' => 'Diagrami i shiritit të parashikimit',
  'LBL_DASHLET_ITERACTIONS_NAME' => 'Interaksione',
  'LBL_DASHLET_LISTVIEW_DESCRIPTION' => 'Listo të dhënat nga një modul i veçantë në bazë të kritereve që përcaktojnë.',
  'LBL_DASHLET_LISTVIEW_NAME' => 'Pamja e listës',
  'LBL_DASHLET_MAXIMIZE' => 'Hap',
  'LBL_DASHLET_MAXIMIZE_ALL' => 'Hap të gjitha',
  'LBL_DASHLET_MINIMIZE' => 'Mbyll',
  'LBL_DASHLET_MINIMIZE_ALL' => 'Mbyll të gjitha',
  'LBL_DASHLET_MODULE_UNAVAILABLE' => 'Mungojnë të dhënat. Ju nuk u lejohet hyrja në këtë modul. Ju lutemi përditësojeni ose hiqeni këtë dashlet.',
  'LBL_DASHLET_MOVE' => 'lëviz',
  'LBL_DASHLET_NEWS_DESCRIPTION' => 'Google lajme për llogarinë e lidhur',
  'LBL_DASHLET_NEWS_FEED_NAME' => 'Furnizimet e reja',
  'LBL_DASHLET_NEWS_NAME' => 'Lajme',
  'LBL_DASHLET_NO_RECORDS' => 'Ska regjistrime të gjatura në këtë kohë.',
  'LBL_DASHLET_OPPORTUNITY_DESCRIPTION' => 'Certifikatë metrikash për mundësi për llogarinë e të ngjashme. Kërkon D&B abonim.',
  'LBL_DASHLET_OPPORTUNITY_NAME' => 'Metrika mundësie',
  'LBL_DASHLET_PIPLINE_NAME' => 'Tubacion',
  'LBL_DASHLET_RECENT_TWEETS_SUGARCRM_NAME' => 'Tweets të fundit - @{{twitter}}',
  'LBL_DASHLET_REFRESH' => 'Rifreskim',
  'LBL_DASHLET_REFRESH_LABEL' => 'Rifreskim',
  'LBL_DASHLET_REMOVE_LABEL' => 'Heq',
  'LBL_DASHLET_SAVED_REPORTS_CHART' => 'Diagrami i panelit të raporteve të ruajtura',
  'LBL_DASHLET_SAVED_REPORTS_CHART_DESC' => 'Shfaq çdo diagram nga raporti i ruajtur.',
  'LBL_DASHLET_TOGGLE' => 'Hap/Mbyll',
  'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => '10 rreshtat më të lartë të të ardhurave',
  'LBL_DATA_VIEW' => 'Shikim i të dhënave',
  'LBL_DATE' => 'minutData',
  'LBL_DATE_ENTERED' => 'Data e krijuar',
  'LBL_DATE_LAST_ACTION' => 'Data e veprimit të fundit',
  'LBL_DATE_MODIFIED' => 'Data e modifikuar',
  'LBL_DATE_START' => 'Data e nisjes',
  'LBL_DB_ROUND_TRIPS' => 'Baza e të dhënave të udhëtimeve të rrumbullakëta',
  'LBL_DEFAULT_DASHBOARD_TITLE' => 'Paneli im',
  'LBL_DEFAULT_HELP_DASHBOARD_TITLE' => 'Paneli ndihmues',
  'LBL_DEFAULT_HELP_DASHLET_DESC' => 'Paneli ndihmues jep modul dhe ndihmë e të të shikuarit specifik',
  'LBL_DEFAULT_HELP_DASHLET_TITLE' => 'Paneli ndihmues',
  'LBL_DEFAULT_LINK_TEXT' => 'Lidhja e albumit të teksiti.',
  'LBL_DELETE' => 'Fshi',
  'LBL_DELETED' => 'E fshirë',
  'LBL_DELETE_BUTTON' => 'Fshi',
  'LBL_DELETE_BUTTON_KEY' => 'D',
  'LBL_DELETE_BUTTON_LABEL' => 'Fshi',
  'LBL_DELETE_BUTTON_TITLE' => 'Fshi [Alt+D]',
  'LBL_DELETE_FILTER_CONFIRMATION' => 'Ky filtër do të hiqet nga të gjitha pikëpamjet; kjo mund të përfshijë konfigurimin e të dhënave për panelet. Jeni të sigurtë që doni të fshini këtë filtër?',
  'LBL_DELETE_INLINE' => 'Fshi',
  'LBL_DELETE_PAGE' => 'Fshih faqen',
  'LBL_DELETE_PAGE_CONFIRM' => 'A jeni i sigurt që dëshironi të fshini këtë faqe?',
  'LBL_DELETING' => 'Fshirja...',
  'LBL_DESCRIPTION' => 'Përshkrimi',
  'LBL_DETAILVIEW' => 'Shikim i detajuar',
  'LBL_DETAILVIEW_NO_RECORDS' => 'Ky regjistrim nuk mund të radhitet në këtë kohë.',
  'LBL_DIRECT_REPORTS' => 'Raportet direkte',
  'LBL_DISPLAY_COLUMNS' => 'Shfaq kolonat',
  'LBL_DISPLAY_LOG' => 'Identifikimi i shfaqjes',
  'LBL_DNB_ACC_CRT' => 'Krijimi i llogarisë D&B',
  'LBL_DNB_ACC_CRT_DESC' => 'Krijoni llogari duke përdorur D&B. Kërkon D&B paraqitje.',
  'LBL_DNB_ACT_OPER' => 'Aktivitete dhe operacione',
  'LBL_DNB_ACT_OPER_DESC' => 'Regjistro përshkrimin e operacioneve pa ndërprerje nga një biznes duke përfshirë informacionin e tregut të tilla si numri i konsumatorëve, të dhënat e agjencisë dhe detaje të import / eksportit',
  'LBL_DNB_ADDRESS' => 'Adresa',
  'LBL_DNB_ADDRESS_TENURE_DETAILS' => 'Detaje të adresës së qëndrimit',
  'LBL_DNB_ADMIN_CONFIG' => 'Konfiguro D&B konektorin',
  'LBL_DNB_AGENT_IND' => 'Tregues i agjentit',
  'LBL_DNB_AGENT_INDICATOR' => 'Tregues i agjentit',
  'LBL_DNB_AGENT_IND_DESC' => 'Kur e vërtetë (i vendosur në 1), kjo tregon se subjekti vepron si një agjent, promovon mallrat ose shërbimet e një organizatë tjetër, për shembull, agjent shitës, agjent blerës',
  'LBL_DNB_AIRPRT_DISADV_ENT' => 'Treguesi i koncesioni të aeroportit të bizneseve jo të favorizuara',
  'LBL_DNB_AIRPRT_DISADV_ENT_DESC' => 'Vlera TRUE tregon se biznesi operon si një koncesioner në një nga aeroportet e vendit dhe i përmbush kërkesat e përshtatshmërisë të pronësisë, të përcaktuara nga rregulloret e përcaktuara në 49 CFR pjesa 23',
  'LBL_DNB_ALASNAT_IND' => 'Treguesi Alaskan',
  'LBL_DNB_ALASNAT_IND_DESC' => 'Vlera TRUE tregon se fisi është një korporatë Alaskan',
  'LBL_DNB_AND' => 'dhe',
  'LBL_DNB_ANNUAL_SALES_US_DOLLAR' => 'Shitjet vjetore',
  'LBL_DNB_API_ERR' => 'Gabim D&B API',
  'LBL_DNB_ASSESMENT' => 'Vlerësim D&B',
  'LBL_DNB_ASSESMENT_DESC' => 'Regjistrimet e brendshme dhe vlera e shtuar e të dhënave për organizata, të tilla si: - rekomandimeve të kreditit të zgjatur, - vlerësimet e likuiditetit të tyre, - e vlerësimit konciz të performancës dhe sjelljes së tyre, - parashikimet për rrezikun e kryerjen e biznesit me ta. Rezultatet parashikuese janë llogaritur zakonisht dhe të caktuar nga D&B, por vlerësimet e tilla gjithashtu mund të regjistrohen kur të caktohen nga palët e treta.',
  'LBL_DNB_ASSESMENT_TYPE_VALUE' => 'Vlera e llojit të vlerësimit',
  'LBL_DNB_ASSESMENT_VALUE' => 'Vlera e vlerësimit',
  'LBL_DNB_ASSESSMENT' => 'Vlerësim',
  'LBL_DNB_ASSIGNMENT_METHOD_TEXT' => 'Teksti i metodës vlerësuese',
  'LBL_DNB_ASSOCIATE' => 'Vlerësim',
  'LBL_DNB_BACK_TO_IMPORT_ENRICH' => 'Kthehu në import & zgjero',
  'LBL_DNB_BACK_TO_SRCH' => 'Kthim në D&B kërkim të rezultateve',
  'LBL_DNB_BAL' => 'D&B: Ndërtoni një listë',
  'LBL_DNB_BAL_ACCT_HEADER' => 'Llogaritë',
  'LBL_DNB_BAL_AFTER' => 'Pas',
  'LBL_DNB_BAL_ALL_SITE' => 'Të gjitha faqet',
  'LBL_DNB_BAL_AREA_CODE' => 'Kodi i vendit',
  'LBL_DNB_BAL_ASSETS' => 'Mjete',
  'LBL_DNB_BAL_BEFORE' => 'Para',
  'LBL_DNB_BAL_BIO' => 'Bio',
  'LBL_DNB_BAL_BOTH' => 'Të dyja',
  'LBL_DNB_BAL_BTW' => 'Ndërmjet',
  'LBL_DNB_BAL_DISTANCE' => 'Distansa',
  'LBL_DNB_BAL_DUNS' => 'DUNS',
  'LBL_DNB_BAL_FILING_DATE' => 'Data e mbushjes',
  'LBL_DNB_BAL_FINANCIAL_INFO' => 'Informacion financiar',
  'LBL_DNB_BAL_GTE' => 'Më e madhe ose e barabartë me',
  'LBL_DNB_BAL_HIGH' => 'I lartë',
  'LBL_DNB_BAL_HINT' => 'Zgjidhni kriter për të ndërtuar listën',
  'LBL_DNB_BAL_IMPORT_AS' => 'Importo si:',
  'LBL_DNB_BAL_INDUSTRY' => 'Industria',
  'LBL_DNB_BAL_INDUSTRY_WARN' => 'Ndërrimi i llojeve të industrisë do të fshijë kriteret e zgjedhura paraprakisht. Dëshironi të ndryshoni llojin e kodit industrial?',
  'LBL_DNB_BAL_IND_CODE_TYPE' => 'Lloji i kodit industrial',
  'LBL_DNB_BAL_IND_CODE_TYPE_PRI_SEC' => 'Përfshij primaren/sekondaren',
  'LBL_DNB_BAL_IPO_DATA' => 'Të dhëna IPO',
  'LBL_DNB_BAL_IPO_OFFER_AMT' => 'Vlera ofruese e IPO',
  'LBL_DNB_BAL_IPO_PRICE_RANGE' => 'Niveli i çmimit IPO',
  'LBL_DNB_BAL_JOBCD_PH' => 'Selekto funksionin e punës',
  'LBL_DNB_BAL_KM' => 'KM',
  'LBL_DNB_BAL_LIST' => 'Kthehu tek D&B ndërto listë rezultatesh',
  'LBL_DNB_BAL_LOAD' => 'Ndërtimi i listës',
  'LBL_DNB_BAL_LOW' => 'I ulët',
  'LBL_DNB_BAL_LTE' => 'Më pak ose e barabartë me',
  'LBL_DNB_BAL_MED' => 'Mesatar',
  'LBL_DNB_BAL_MILES' => 'Milje',
  'LBL_DNB_BAL_NAICS' => 'NAICS kodi',
  'LBL_DNB_BAL_NET_INCOME' => 'Të ardhura neto',
  'LBL_DNB_BAL_NET_INCOME_GROWTH' => 'Rritja e të ardhurave neto',
  'LBL_DNB_BAL_ORG_ID' => 'Identifikimi i organizatës #',
  'LBL_DNB_BAL_ORG_NAME' => 'Emri i kompanisë',
  'LBL_DNB_BAL_PARAM_ANNL_SALES' => 'Shitjet vjetore',
  'LBL_DNB_BAL_PARAM_COMP' => 'Lokacioni i kompanisë',
  'LBL_DNB_BAL_PARAM_COMP_INFORMATION' => 'Informacioni i kompanisë',
  'LBL_DNB_BAL_PARAM_COMP_SZ' => 'Madhësia e kompanisë',
  'LBL_DNB_BAL_PARAM_EMP_CNT' => 'Numri i të punësuarve',
  'LBL_DNB_BAL_PARAM_EMP_GRWT' => 'Rritja totale e punëtorëve %',
  'LBL_DNB_BAL_PARAM_EMP_GRWTH' => 'Rritja totale e punëtorëve %',
  'LBL_DNB_BAL_PARAM_JOB_FN' => 'Funksioni i punës',
  'LBL_DNB_BAL_PARAM_KEYWORD' => 'Fjalë kyçë',
  'LBL_DNB_BAL_PARAM_LIMIT_ERR' => 'U arit limiti maksimal i kriterit. Ju lutemi fshini parametrat paraprak',
  'LBL_DNB_BAL_PARAM_MKT_CAP' => 'Kapaku i tregut',
  'LBL_DNB_BAL_PARAM_MRKT_CAP' => 'Kapaku i tregut',
  'LBL_DNB_BAL_PARAM_NUM_EMP' => 'Numri i punëtorëve',
  'LBL_DNB_BAL_PARAM_PEOPLE' => 'Njerëz',
  'LBL_DNB_BAL_PARAM_STATES' => 'Shtetet',
  'LBL_DNB_BAL_POSTAL_CODE' => 'Kodi Zip/postal',
  'LBL_DNB_BAL_PRESCREEN_SCORE' => 'D&B parashfaqje',
  'LBL_DNB_BAL_PRIMARY_ONLY' => 'Vetëm primere',
  'LBL_DNB_BAL_PRIMARY_SECONDARY' => 'Primare dhe sekondare',
  'LBL_DNB_BAL_RADIUS_SRCH' => 'Kërkimi i radiusit',
  'LBL_DNB_BAL_RSLT' => 'D&B: Ndërtoni një shikim liste',
  'LBL_DNB_BAL_SIC' => 'Shifra SIC',
  'LBL_DNB_BAL_SIC_NAICS_EXAMPLE' => 'Shembull: SIC Kode :  5734 ->  Shitore kompjuteri & softveri, 3711 -> Prodhues automobili',
  'LBL_DNB_BAL_SINGLE_SITE' => 'Faqe e vetme',
  'LBL_DNB_BAL_TITLE' => 'Titulli',
  'LBL_DNB_BAL_TRADING_DATE' => 'Data e tregtimit',
  'LBL_DNB_BAL_UK_REG_NO' => 'Nr. regj. të UK',
  'LBL_DNB_BAL_UK_VAT_NO' => 'Numri i TVSH së UK',
  'LBL_DNB_BAL_YEAR_OF_FOUNDING' => 'Viti i themelimit',
  'LBL_DNB_BAL_ZIP' => 'ZIP',
  'LBL_DNB_BASIC_FIN_INF' => 'Informacion bazik financiar',
  'LBL_DNB_BI_API_ERR' => 'Gabim gjatë importimit të regjistrimeve.',
  'LBL_DNB_BI_DUP_MSG' => 'llogaritë ishin duplikate dhe nuk u shtuan',
  'LBL_DNB_BI_ERR' => 'Nuk janë importuar asnjë regjistrim.',
  'LBL_DNB_BI_LOADING' => 'Importim i D&B llogarive',
  'LBL_DNB_BI_NEW_ACCT' => 'llogari të reja.',
  'LBL_DNB_BI_NO_SLCT' => 'Nuk janë selektuar regjistrime.',
  'LBL_DNB_BI_REC_LIMIT' => 'Mund të importohet një maksimum prej 20 regjistrimeve të selektuara',
  'LBL_DNB_BI_YOU_ADD' => 'Ju shtuat',
  'LBL_DNB_BONE_ORG_IND' => 'Boneyard treguesi i organizatës',
  'LBL_DNB_BONE_ORG_IND_DESC' => 'Kur ON (e vendosur në 1), kjo tregon se të dhënat për të kompanisë nuk janë mbledhur dhe janë mbuluar nga stafi Editorial Hoover-para se të bëhet i blerë ose duke dalë nga biznesi',
  'LBL_DNB_CCS' => 'Vota para ekranit',
  'LBL_DNB_CCS_DESC' => 'Regjistrimi i rezultateve më të fundit të rrezikut që janë caktuar për këtë organizatë mbi një datë/kohë të caktuar duke përdorur një model të vlerësimit me pikë që të ndihmojë të parashikojnë mundësinë që organizata do të paguajë faturat e saj në një mënyrë të rëndë delikuente (90 + ditë) gjatë së kaluar për shkak tjetër 12 muaj',
  'LBL_DNB_CI_CITY' => 'Qyteti',
  'LBL_DNB_CI_CTRY' => 'Shteti',
  'LBL_DNB_CI_POSTAL_CD' => 'Kodi postal',
  'LBL_DNB_CI_SRCH' => 'D&B: kërkim i kompanisë',
  'LBL_DNB_CI_SRCH_HINT' => 'Vendosni emrin e kompanisë për të kërkuar D&B',
  'LBL_DNB_CI_STATE' => 'Shteti',
  'LBL_DNB_CI_STREET' => 'Rruga',
  'LBL_DNB_CLEAR' => 'Fshi',
  'LBL_DNB_CM_LOADING' => 'Thirrja e pastrimit D&B...',
  'LBL_DNB_CM_MATCH' => 'Përputh',
  'LBL_DNB_CNTCT_LOADING' => 'Ngarkimi i kontakteve nga D&B',
  'LBL_DNB_CNTRL_OWN_DATE' => 'Data e kontrollimit të pronësisë',
  'LBL_DNB_CNTRL_OWN_DATE_DESC' => 'Data kur pronarët e tanishëm e morën këtë biznes.',
  'LBL_DNB_CNTRL_TYP_TEXT' => 'Lloji i kontrollimit të pronësisë',
  'LBL_DNB_CNTRL_TYP_TEXT_DESC' => 'Teksti që përshkruan llojin e pronësisë kontrollit, p.sh. në pronësi publike, në pronësi private, në pronësi të shtetit',
  'LBL_DNB_COMPANY_INFO_LOADING' => 'Ngarkimi i informacionit të kompanisë nga D&B',
  'LBL_DNB_COMPETITORS' => 'D&B: konkurrentët',
  'LBL_DNB_COMPETITORS_DESC' => 'Informacioni i konkurrentit nga D&B. Kërkon D&B abonim.',
  'LBL_DNB_COMPETITORS_LIST' => 'Kthehu në D&B listën e konkurrentëve',
  'LBL_DNB_COMPETITORS_LOADING' => 'Ngarkimi i konkurrentëve nga D&B ...',
  'LBL_DNB_COMPETITORS_LONG_DESC' => 'Gjej konkurrentët në llogarinëaktuale në mënyrë të zgjeroni perspektivat tuaja. Një përcaktim i lartë i konkurrentit është caktuar nga D&B bazuar në analizën e kompanisë dhe industrisë në të cilën vepron. Kompanitë publike shpesh identifikojnë konkurrentët e lartë në mbushje publike, e cila është marrë gjithashtu në konsideratë. Kërkon D&B abonim.',
  'LBL_DNB_COMPETITORS_TOP' => 'Konkurrenti më i madh',
  'LBL_DNB_COMPINFO_LONG_DESC' => 'Mënyra më efikase për të fituar informata themelore të marketingut në lidhje me një perspektivë të mundshme të tilla si emri i biznesit, adresa, D & B ® ® numri DUNS, faks, telefon dhe stili tregtisë. Përfshin zbulimint e biznesit të tilla si emra dhe tituj ekzekutive, financat, numrin e të punësuarve, import apo eksport kodi, dega treguese dhe më shumë. Kërkon D & B abonim.',
  'LBL_DNB_COMP_INFO' => 'D&B: informacion i kompanisë',
  'LBL_DNB_COMP_INFO_LOAD' => 'Marrja e D&B informacion i kompanisë',
  'LBL_DNB_COMP_SUMM' => 'Përshkrimi i kompanisë',
  'LBL_DNB_COMP_SUMM_DESC' => 'Tekst që regjistron një deklaratë të shkurtër apo llogari të kësaj organizate',
  'LBL_DNB_CONFIDENCE' => 'Besimi',
  'LBL_DNB_CONFIG' => 'Kontaktoni administratorin tuaj për të konfiguruar D&B konektorin',
  'LBL_DNB_CONNECTOR_ERR' => 'D&B konektori nuk u konfigurua. Kontaktoni administratorin',
  'LBL_DNB_CONTACT' => 'D&B: informacion kontaktues',
  'LBL_DNB_CONTACT_BIO' => 'Bio',
  'LBL_DNB_CONTACT_COMP_HIST' => 'Historia e kompenzimit',
  'LBL_DNB_CONTACT_DESC' => 'Shfaq kontakte nga D&B. Kërkon D&B abonim.',
  'LBL_DNB_CONTACT_EMAIL' => 'Email',
  'LBL_DNB_CONTACT_EMP_PROF' => 'Profili i punëtorit',
  'LBL_DNB_CONTACT_FNAME' => 'Emri',
  'LBL_DNB_CONTACT_FROM' => 'nga',
  'LBL_DNB_CONTACT_JOBTITLE' => 'Titulli i punës',
  'LBL_DNB_CONTACT_JOB_HIST' => 'Historia e punës',
  'LBL_DNB_CONTACT_LIST' => 'Kthehu në listën e kontakteve D&B',
  'LBL_DNB_CONTACT_LNAME' => 'Mbiemri',
  'LBL_DNB_CONTACT_LOADING' => 'Ngarkimi i detajeve kontaktuese për',
  'LBL_DNB_CONTACT_LONG_DESC' => 'D&B kontaktet ju japin qasje deri më 100M kontakte. Kërkoni me emra, mbiemra dhe titull pune',
  'LBL_DNB_CONTACT_NAME' => 'Emri',
  'LBL_DNB_CONTACT_PHONE' => 'Telefoni',
  'LBL_DNB_CONTACT_RESP' => 'Përgjegjësia menaxhuese',
  'LBL_DNB_CONTACT_SHOW_MORE' => 'Trego më shumë D&B kontakte',
  'LBL_DNB_CONTACT_TO' => 'Deri',
  'LBL_DNB_CONTROL_OWNERSHIP_DATE' => 'Data e kontrollimit të pronësisë',
  'LBL_DNB_CONTROL_OWNERSHIP_TYPE_TEXT' => 'Teksti i llojit të kontrollit të pronësisë',
  'LBL_DNB_CON_EMP_CNT' => 'Numërimi individual i  të konsoliduar',
  'LBL_DNB_CON_EMP_CNT_DESC' => 'Regjistron të dhënat aktuale të punonjësit i cili përfshin të gjithë të punësuarit të cilët janë të angazhuar në veprimtarinë e personit juridik (përfshirë punonjësit të vendosur në vende të degës), si dhe të gjithë të punësuarit të cilët janë të angazhuar në operacionet e çdo pasardhësi të drejtpërdrejtë në pemën e saj familjare (të bazuara në kontrollin e interesit ). Dmth filialet',
  'LBL_DNB_COUNTRY' => 'Shteti',
  'LBL_DNB_COUNTRY_GROUP_NAME' => 'Emri grupor i vendit',
  'LBL_DNB_COUNTRY_OFFICIAL_NAME' => 'Emri zyrtar i vendit',
  'LBL_DNB_CURRENCY_ISO_ALPHA_CODE' => 'Kodi Alfa e ISO monedhës',
  'LBL_DNB_CURRENT_PRINCIPAL_FULL_NAME' => 'Emri i plotë i kryetarit aktual',
  'LBL_DNB_CURRENT_PRINCIPAL_IDENTIFICATION_NUMBER' => 'Numri i identifikimit të kryetarit aktual',
  'LBL_DNB_CURRENT_PRINCIPAL_JOB_TITLE' => 'Titulli i ktyetarit aktual',
  'LBL_DNB_DATA_ERR' => 'S&#39;ka D&B të dhëna në dispozicion',
  'LBL_DNB_DATA_OVERRIDE_MULTIPLE_FIELDS' => 'Dëshironi të rishkruani {{fields}} dhe fushat tjera ?',
  'LBL_DNB_DATA_OVERRIDE_SINGLE_FIELD' => 'Dëshironi të rishkruani {{fieldName}} me {{value}} ?',
  'LBL_DNB_DATA_OVERRIDE_TWO_FIELDS' => 'Dëshironi të rishkruani {{fields}} ?',
  'LBL_DNB_DISAB_IND' => 'Treguesi me aftësi të kufizuara',
  'LBL_DNB_DISAB_IND_DESC' => 'Vlera TRUE tregon se kjo organizatë është çertifikuar si një biznes që është më i madh se 50% në pronësi dhe menaxhimin dhe operacionet e përditshme të biznesit e të cilit janë të kontrolluara nga një ose më shumë persona që kanë një kusht i cili nuk lejon personin të kryejë të gjitha funksionet e zakonshme fizike ose mendore',
  'LBL_DNB_DISAB_VET_ENT' => 'Treguesi i veteranëve me aftësi të kufizuara',
  'LBL_DNB_DISAB_VET_ENT_DESC' => 'Vlera TRUE tregon se biznesi është njohur nga shteti i Kalifornisë, që do të thotë se një veteran i ushtrisë amerikane, detare, apo shërbimit ajror, me aftësi të kufizuara të shërbimit-lidhur të paktën 10% ose më shumë dhe i cili është banor i Kalifornisë; ku së paku 51% është në pronësi të paaftë veteran dhe kryen menaxhimin e përditshëm të biznesit dhe kontrollit. Zyra në shtëpi nuk mund të jetë degë ose filial i një korporate të huaj, firmave të huaja apo të tjerave të biznesit të huaj',
  'LBL_DNB_DISADV_ENT' => 'Treguesi i bizneseve jo të favorizuara',
  'LBL_DNB_DISADV_ENT_DESC' => 'Vlera TRUE tregon se biznesi është i çertifikuar nga një agjensi federale, shtetërore apo lokale që i ka përmbushur të gjitha standardet e qeverisë, por që mund të përfshijnë gratë, pakicë, me aftësi të kufizuara dhe bizneseve të tjera të pafavorizuara, si rezultat i disavantazheve ekonomike në lidhje me arsimin, punësimin, qëndrimin ose vendndodhjen e biznesit apo disavantazh social dhe mungesa e trajnimit të biznesit',
  'LBL_DNB_DISADV_VET_ENT' => 'Treguesi  i veteranëve jo të favorizuar',
  'LBL_DNB_DISADV_VET_ENT_DESC' => 'Vlera TRUE tregon se biznesi është një shqetësim të biznesit të vogël në pronësi dhe të kontrolluara nga veteranët, ku jo më pak se 51% është në pronësi të kontrolluar dhe menaxhuar nga veteranët',
  'LBL_DNB_DNB_CODE_VALUE' => 'Vlera e kodir DNB',
  'LBL_DNB_DUNS' => 'DUNS',
  'LBL_DNB_DUNSSELF_IND' => 'Indikatori i DUNS vetë-kërkesës',
  'LBL_DNB_DUNSSELF_IND_DESC' => 'Vlera e vërtetë tregon se numri DUNS për këtë temë është krijuar me kërkesë të subjektit',
  'LBL_DNB_DUPLICATE' => 'Dublo',
  'LBL_DNB_EIGHTA_CRT' => 'Treguesi i Tetë A çertifikatës',
  'LBL_DNB_EIGHTA_CRT_DESC' => 'Vlera TRUE tregon se kjo organizatë është e çertifikuar nga Administrata e Biznesit të Vogël të SHBA duke qenë marrës i 8-të në Programin e Zhvillimit të Biznesit, program për zhvillimin e biznesit i krijuar për të ndihmuar bizneset e vogla të disavantazhuara duke konkuruar në ekonominë amerikane dhe qasjen në tregun federal',
  'LBL_DNB_EMPLOYEE_QUANTITY_GROWTH' => 'Rritja sasiore e të punësuarve',
  'LBL_DNB_EMPTY_PARAM' => 'Parametri bosh ka kaluar në D&B duplikat Kontrollo API',
  'LBL_DNB_EMP_DET' => 'Detajet e punonjësit senior',
  'LBL_DNB_EMP_DET_DESC' => 'Detajet e drejtuesit (p.sh., Kryetari, Nënkryetari, Drejtorët) dhe menaxherët përgjegjës për strategjinë e biznesit, marrjen e vendimeve dhe drejtimin e operacioneve ditore të subjekteve. Kjo përfshin emrat, adresat dhe numrat e identifikimit të drejtorëve. Përderisa një drejtor zakonisht do të jetë një individ në disa vende ai është ligjërisht  i pranueshëm për një entitet biznesi të regjistruar për të vepruar si kryesor në një tjetër biznes. Kjo përjashton aksionerët dhe pronarët të ngjashme që nuk janë përgjegjës për menaxhimin e organizatës, por përfshin pronarët dhe partnerëve, ndërsa pronarët, janë gjithashtu në përgjithësi drejtorë për drejtimin e biznesit.',
  'LBL_DNB_EMP_INF' => 'Informacioni i punëtorit',
  'LBL_DNB_EMP_INF_DESC' => 'Informacion i të të punësuarve në organizatat si numërim i punonjësve dhe detajet e menaxhimit kryesor',
  'LBL_DNB_ERROR_CURL_CONNECTION_FAIL' => 'Dështoi për të lidhur hostin ose prokurën. Ju lutem kontrolloni prokurën.',
  'LBL_DNB_ERROR_CURL_NETWORK_FAIL' => 'Dështimi në marrjen e të dhënave të rrjetit.',
  'LBL_DNB_ERROR_CURL_RESOLVE_HOST' => 'Nuk mund të zgjidhë hostin.Hosti i dhënë nuk është zgjidhur.',
  'LBL_DNB_ERROR_CURL_RESOLVE_PROXY' => 'Nuk mund të zgjidhë prokurën. Host prokura e dhënë nuk mund të zgjidhet. Ju lutem kontrolloni prokurën.',
  'LBL_DNB_ETHN' => 'Përkatësia etnike e pronarit',
  'LBL_DNB_ETHNICITY_TYPE_TEXT' => 'Teksti i llojit të etnicitetit',
  'LBL_DNB_ETHN_DESC' => 'Identifikon në mënyrë unike klasifikimin etnik që është aplikuar në këtë organizatë në bazë të grupit racor, nacional, fisnor, apo kulturor që përshkruan shumicën e pronësisë së saj, p.sh., aziatike, hispanike, afrikano-amerikane (e zezë)',
  'LBL_DNB_EXPORT_DETAILS_INDICATOR' => 'Treguesi i detajeve të eksportit',
  'LBL_DNB_EXP_IND' => 'Tregues i eksportit',
  'LBL_DNB_EXP_IND_DESC' => 'Kur e vërtetë (i vendosur në 1), kjo tregon se kompania subjekt eksporton një sasi të mallrave nga vendet e tjera',
  'LBL_DNB_FACSIMILE_NUMBER' => 'Numri faksimil',
  'LBL_DNB_FAMILY_TREE' => 'D&B: trungu familjar',
  'LBL_DNB_FAMILY_TREE_BACK' => 'Kthehu tek D&B trungu familjar',
  'LBL_DNB_FAMILY_TREE_DESC' => 'Trungu familjar nga D&B. Kërkon abonim D&B.',
  'LBL_DNB_FAMILY_TREE_LOADING' => 'Ngarkimi i trungut familjar nga D&B',
  'LBL_DNB_FAMILY_TREE_MEMBER_ROLE' => 'Teksti i rolit të anëtarit të trungut familjar',
  'LBL_DNB_FAMILY_TREE_MEMBER_ROLE_TEXT' => 'Teksti i rolit të anëtarit të trungut familjar',
  'LBL_DNB_FAX' => 'Faks',
  'LBL_DNB_FAX_DESC' => 'Numri i faksit i organizatës',
  'LBL_DNB_FEM_ENT' => 'Treguesi i bizneseve femra',
  'LBL_DNB_FEM_ENT_DESC' => 'Vlera TRUE tregon se biznesi është i çertifikuar nga një agjesni federale, shtetërore apo lokale që i ka përmbushur të gjitha standardet e qeverisë dhe kërkesat',
  'LBL_DNB_FEM_IND' => 'Indikatori në pronë të femrave',
  'LBL_DNB_FEM_IND_DESC' => 'Vlera TRUE tregon se kjo organizatë është çertifikuar si një biznes që është më i madh se 50% në pronësi dhe menaxhimin dhe operacionet e përditshme të biznesit e të cilit janë të kontrolluara nga një ose më shumë personave femra',
  'LBL_DNB_FILLING_ORGANISATION_NAME' => 'Emri plotësues i organizatës',
  'LBL_DNB_FINANCIAL' => 'D&B: informacion financiar',
  'LBL_DNB_FINANCIALS' => 'Financiare',
  'LBL_DNB_FINANCIAL_DESC' => 'Informacion financiar nga D&B. Kërkon D&B abonim.',
  'LBL_DNB_FINANCIAL_DESCRIPTION' => 'Përshkrim financiar',
  'LBL_DNB_FINANCIAL_LOADING' => 'Nagrkimi i financave nga D&B',
  'LBL_DNB_FINANCIAL_LONG_DESC' => 'Vlerëso fuqinë financiare të kompanisë me të dhëna të tilla si shitje vëllime, vlerë neto, mjeteve dhe detyrimeve. Kërkon D&B abonim.',
  'LBL_DNB_FINANCIAL_PERIOD' => 'Periudha financiare',
  'LBL_DNB_FINANCIAL_RATIO' => 'Norma financiare',
  'LBL_DNB_FIN_COMP_TYPE' => 'Lloji i kompanisë',
  'LBL_DNB_FIN_STCK_EXCH' => 'Bursa',
  'LBL_DNB_FIN_STCK_SYM' => 'Simboli i bursës',
  'LBL_DNB_FIN_STMT' => 'Deklaratat e të ardhurave vjetore',
  'LBL_DNB_FOUNDATION_YEAR' => 'Viti i themelimit',
  'LBL_DNB_FRAN_TYP_TEXT' => 'Lloji i operimit të françizës',
  'LBL_DNB_FRAN_TYP_TEXT_DESC' => 'Teksti që tregon nëse të drejtat e françizës janë të operuar nga një kompani ose drejtpërdrejt nga françiza psh. françizori, françizanti',
  'LBL_DNB_FROM' => 'nga',
  'LBL_DNB_GEOGRAPHICAL_NAME' => 'Teksti i precizimit gjeografik',
  'LBL_DNB_HIGH_CONF' => 'Besim i lartë',
  'LBL_DNB_HISTORY_RATING_TEXT' => 'Vlerësim historie',
  'LBL_DNB_HIST_RAT' => 'Vlerësim historie',
  'LBL_DNB_HIST_RAT_DESC' => 'Teksti specifikon nëse D&B ka ndonjë informacion që mund të reflektojë në mënyrë të pafavorshme në këtë organizatë, p.sh., të qartë, jo të plota, të menaxhimit, të biznesit.',
  'LBL_DNB_HUB_CRT' => 'Treguesi i Hub zonave të çertifikuara',
  'LBL_DNB_HUB_CRT_DESC' => 'Vlera TRUE indikon se ky organizacion është i certifikuar nga US Small Business Administration duke qenë një marrës i Programit  HUB Zone. Një Bizniz i vogël duhet ti përmbush  te gjitha kriteret në vijim për kualifikim të programit HUB Zone: Duhet te jene te vendosur ne nje &#39;Zone e pa shfrytëzuar biznesi historikisht&#39;',
  'LBL_DNB_IMPORT' => 'Importo',
  'LBL_DNB_IMPORT_DETAILS_' => 'Importo Detalet',
  'LBL_DNB_IMPORT_DETAILS_INDICATOR' => 'Treguesi i detajeve të importit',
  'LBL_DNB_IMP_IND' => 'Linja e biznesit',
  'LBL_DNB_IMP_IND_DESC' => 'Kur e vërtetë (i vendosur në 1), kjo tregon se kompania subjekt importon një sasi të mallrave nga vendet e tjera',
  'LBL_DNB_IN' => 'në',
  'LBL_DNB_INCORPORATION_YEAR' => 'Viti i inkorporimit',
  'LBL_DNB_INDUSTRY_CODE' => 'Kodi industrial',
  'LBL_DNB_INDUSTRY_CODE_DESCRIPTION' => 'Përshkrimi i kodit industrial',
  'LBL_DNB_INDUSTRY_CODE_DISPLAY_SEQUENCE' => 'Sekuenca e shfaqjes së kodit industrial',
  'LBL_DNB_INDUSTRY_INFO' => 'D&B: informacion për industrinë',
  'LBL_DNB_INDUSTRY_INFO_DESC' => 'Informacion për industrinë nga D&B. Kërkon abonim D&B.',
  'LBL_DNB_INDUSTRY_INFO_LONG_DESC' => 'Përditësohuni me tendencat kryesore dhe mundësitë brenda 900 segmentet e industrisë. Çdo profil industrie përmban analiza, statistika dhe parashikime për t&#39;ju ndihmuar të angazhohen perspektivat, trajnerët e klientëve dhe për të thelluar marrëdhëniet e konsumatorit.',
  'LBL_DNB_IND_CD' => 'Shifrat e industrisë',
  'LBL_DNB_IND_CD_DESC' => 'Një vlerë alfanumerike për identifikimin e një biznesi të bazuar në skemën e përcaktuar nga lloji i tekst. Për shembull, 1611 përfaqëson në autostradë dhe industrinë e ndërtimit të rrugëve në sistemin U.S. SIC (Standard Industrial Classification). Shënim për sqarim: Këto janë kode përgjithësisht të jashtme të krijuara nga një organ i jashtëm autoritativ, si Zyra e SHBA të Menaxhimit dhe të Buxhetit (OMB), por D&B mund të ketë krijuar zgjatje për të përcaktuar më saktë një aktivitet, si në rastin e SIC 2 +2 e (4 shifrat e fundit e një KIS 8-shifrore)',
  'LBL_DNB_IND_CD_HED' => 'Informacion për industrinë',
  'LBL_DNB_IND_CD_HED_DESC' => 'Regjistron aktivitetet e biznesit në të cilin organizata në mënyrë aktive duke përdorur skema standarde kodimi si European NACE dhe U.S. Standard Industry Classifications (SIC). Shembuj të aktiviteteve biznesore janë: planifikim komercial, shërbime juridike, famraci, fabrikim i punës metalit',
  'LBL_DNB_IND_EMP_CNT' => 'Numërimi individual i punonjësit',
  'LBL_DNB_IND_EMP_CNT_DESC' => 'Regjistron të dhënat aktuale të punonjësve të njësisë ekonomike individuale. Nëse organizata është klasifikuar nga D&B si një biznes',
  'LBL_DNB_IND_INF_LOAD' => 'Ngarkimi i informacionit të industrisë nga D&B',
  'LBL_DNB_INF_INF_OVERVIEW' => 'Pasqyra',
  'LBL_DNB_INQ_CNT' => 'Vlera totale e kërkesave',
  'LBL_DNB_INQ_CNT_DESC' => 'Numri i pyetjeve unike të abonuesit të regjistruar kundër subjektit gjatë 12 muajve të fundit',
  'LBL_DNB_INTERNATIONAL_DIALLING_CODE' => 'Kodi i thirrjeve internacionale',
  'LBL_DNB_INT_DIALLING_CODE' => 'Kodi i thirrjeve ndërkombëtare',
  'LBL_DNB_INVALID_MODULE_NAME' => 'Emri jovalid i modulit ka kaluar në D&B duplikat Kontrollo API',
  'LBL_DNB_IPO_DATE' => 'Dta IPO',
  'LBL_DNB_JOB_TITLE_TEXT' => 'Titulli i punës',
  'LBL_DNB_KEYWORD_SEARCH_HINT' => 'Klikoni këtu për të kërkuar për kompani nëpërmjet emrit të kompanisë',
  'LBL_DNB_LAST_UPDATE' => 'Përditësimi i fundit',
  'LBL_DNB_LAST_UPDATE_DATE' => 'Data e përditësimit të fundit',
  'LBL_DNB_LAST_UPD_DATE' => 'Data e fundit e përditësimit',
  'LBL_DNB_LAST_UPD_DATE_DESC' => 'Data kur dhënat e subjektit u përditësuan me D&B sistemin',
  'LBL_DNB_LAT' => 'Gjerësia',
  'LBL_DNB_LATITUDE_MEASUREMENT' => 'Matjet e gjërësisë',
  'LBL_DNB_LAT_DESC' => 'Koordinimi i gjerësisë',
  'LBL_DNB_LINE_OF_BUSINESS' => 'Linja e biznesit',
  'LBL_DNB_LINE_OF_BUSINESS_DESCRIPTION' => 'Linja e përshkrimit të biznesit',
  'LBL_DNB_LITE_COMPANY_INFO' => 'D&B: Informacion për kompaninë - bazik',
  'LBL_DNB_LITE_COMPANY_INFO_DESC' => 'Informacione bazike për kompaninë nga D&B. Kërkon D&B abonim.',
  'LBL_DNB_LITE_COMPANY_INFO_LOADING' => 'Ngarkimi i informacionit bazik të kompanisë nga D&B...',
  'LBL_DNB_LOB' => 'Linja e biznesit',
  'LBL_DNB_LOB_DESC' => 'Regjistro përshkrimin tekstual të operacioneve pa ndërprerje nga një biznes',
  'LBL_DNB_LOC' => 'Lokacioni',
  'LBL_DNB_LOCATION' => 'Lokacioni',
  'LBL_DNB_LOCATION_TYPE' => 'Lloji i lokacionit',
  'LBL_DNB_LOCATION_TYPE_DESC' => 'Tekst i përshkruar pjesën që subjekti luan si anëtar i një të pronësisë strukturuar pemë familjare, p.sh., një degë, ndarje, një prind, selinë, filial, globale fundit, vendas përfundimtar .',
  'LBL_DNB_LOC_DESC' => 'Regjistro detajet e adresës për një subjekt. Një adresë është përcaktimi i një vendi ku një subjekt mund të gjendet ose mund të komunikohet me të',
  'LBL_DNB_LONG' => 'Gjatësia',
  'LBL_DNB_LONGITUDE_MEASUREMENT' => 'Matjet e gjatësisë',
  'LBL_DNB_LONG_DESC' => 'Kordinimi i gjatësisë',
  'LBL_DNB_LOW_CONF' => 'Besim i ulët',
  'LBL_DNB_LS_IND' => 'Treguesi i suficitit punonjës',
  'LBL_DNB_LS_IND_DESC' => 'Vlera TRUE tregon se kjo organizatë është çertifikuar si biznes i cili operon në fushë me suficit pune. Një fushë me suficit pune është vend gjeografik i identifikuar nga Departamentit të Punës, si një vend i papunësisë së koncentruar apo papunësisë me shifra ose një sipërfaqe prej suficitit të punës',
  'LBL_DNB_MAIL_CITY' => 'Qyteti postar',
  'LBL_DNB_MAIL_CTRY_CD' => 'Shifra e vendit postar',
  'LBL_DNB_MAIL_STATE_ABBR' => 'Territori postar',
  'LBL_DNB_MAIL_STREET' => 'Rreshti i rrugës së postës',
  'LBL_DNB_MAIL_ZIP' => 'Shifra e postes',
  'LBL_DNB_MARKETABILITY_INDICATOR' => 'Treguesi i tregut',
  'LBL_DNB_MARKET_IND' => 'Treguesi i tregut',
  'LBL_DNB_MARKET_IND_DESC' => 'Kur është e vërtetë (i vendosur në 1), kjo tregon se kënaq rregullat tregtisë të regjistrimeve D&B',
  'LBL_DNB_MATCH_GRADE' => 'Përputh notën',
  'LBL_DNB_MEASUREMENT_RELIABILITY_TEXT' => 'Teksti i matjeve të besueshme',
  'LBL_DNB_MEASUREMENT_UNIT_TEXT' => 'Teksti i njësive të matjes',
  'LBL_DNB_MED_CONF' => 'Besim i mesëm',
  'LBL_DNB_METROPOLITAN_STAT_CODE' => 'Kodi cenzuror i fushës statistikore metropolitane e SHBA',
  'LBL_DNB_MILLION' => 'M',
  'LBL_DNB_MINORITY_OWNER_INDICATOR' => 'Në pronësi nga minoritete',
  'LBL_DNB_MIN_COLL' => 'Treguesi i kolegjeve minoritete',
  'LBL_DNB_MIN_COLL_DESC' => 'Vlera TRUE tregon se kjo organizatë është një kolegj apo universitet ku profilin e shumicës së nxënësve është i përkatësisë etnike të pakicave. Për shembull, në qoftë se përqindja maksimale e studentëve në një kolegj apo universitet janë nga përkatësia etnike e zezë, kjo do të ishte një &#39;Kolegji i pakicës&#39; me të zezë',
  'LBL_DNB_MIN_ENT' => 'Treguesi i bizneseve minorene',
  'LBL_DNB_MIN_ENT_DESC' => 'Vlera TRUE tregon se biznesi është i çertifikuar nga një agjensi federale, shtetërore apo lokale  nëpërmjet një aplikimi dhe/ose procesin e vizitës premisë që i ka plotësuar të gjitha standardet dhe kërkesat e qeverisë',
  'LBL_DNB_MIN_IND' => 'Treguesi në pronë të minoriteteve',
  'LBL_DNB_MIN_IND_DESC' => 'Vlera TRUE tregon se kjo organizatë është çertifikuar si një biznes që është më i madh se 50% në pronësi të dhe menaxhimin dhe operacionet e përditshme të biznesit e të cilit janë të kontrolluara nga, një ose më shumë anëtarët e grupit të minoriteteve',
  'LBL_DNB_MORE_SRCH_RES' => 'Trego më shumë D&B rezultate të kërkuara',
  'LBL_DNB_NAICS' => 'NAICS',
  'LBL_DNB_NAME' => 'Emri',
  'LBL_DNB_NEWS' => 'Lajme',
  'LBL_DNB_NEWS_AND_MEDIA' => 'D&B: Lajme',
  'LBL_DNB_NEWS_AND_MEDIA_DESC' => 'Fetches lajme nga D&B shërbimet. Kërkon D&B abonim.',
  'LBL_DNB_NEWS_AND_MEDIA_LOADING' => 'Ngarkimi i lajmeve dhe mediave sociale nga D&B',
  'LBL_DNB_NEWS_AND_MEDIA_LONG_DESC' => 'Merr pamje të plotë të klientit tuaj me D&B Lajme dhe Sociale! Përdorni fuqinë e procesit DUNSright për të siguruar që ju jeni të tërhequr nga burimet e drejtë të lajmeve dhetrajtimeve sociale. Kërkon D&B abonim.',
  'LBL_DNB_NEWS_AND_MEDIA_MORE' => 'Lexo më shumë',
  'LBL_DNB_NEWS_FACEBOOK' => 'Facebook',
  'LBL_DNB_NEWS_TWITTER' => 'Twitter',
  'LBL_DNB_NEWS_WIKI' => 'Wikipedia',
  'LBL_DNB_NEWS_YOUTUBE' => 'YouTube',
  'LBL_DNB_NONMARK_REAS_TXT' => 'Teks i arsyetimit të jo tregtimit',
  'LBL_DNB_NONMARK_REAS_TXT_DESC' => 'Teksti specifikon arsyen pse të dhënat e subjektit nuk konsiderohet nga D&B',
  'LBL_DNB_NON_MARKETABILITY_INDICATOR' => 'Teksti i arsyes të jo tregtimit',
  'LBL_DNB_NOT_CONFIGURED' => 'D&B konektori nuk është konfiguruar. Ju lutemi konfiguroni konektorin.',
  'LBL_DNB_NO_DATA' => 'S&#39;ka të dhëna në disponim',
  'LBL_DNB_NO_DUNS' => 'Ska identifikim DUNS',
  'LBL_DNB_NO_DUNS_FIELD' => 'Paralajmërim: Fusha DUNS aktualisht nuk është e përfshirë në shikimin e faqosjes së regjistrimit. Kontaktoni administratorin tuaj për të shtuar atë.',
  'LBL_DNB_NO_INDUSTRY' => 'Ska shifër të lidhur industriale',
  'LBL_DNB_NO_SIC_FIELD' => 'Paralajmërim: Fusha SIC aktualisht nuk është e përfshirë në shikimin e faqosjes së regjistrimit. Kontaktoni administratorin tuaj për të shtuar atë.',
  'LBL_DNB_OPERATING_STATUS_TEXT' => 'Teksti i statusit të operimit',
  'LBL_DNB_OPERL_STA_TEXT' => 'Statusi i operimit',
  'LBL_DNB_OPERL_STA_TEXT_DESC' => 'Tekst përshkruan statusin funksional të shtetit / statusin e tregtisë, p.sh. aktive, jashtë biznesit, në gjumë',
  'LBL_DNB_OPER_TEXT' => 'Teksti i operacioneve',
  'LBL_DNB_OPER_TEXT_DESC' => 'Tekst që përshkruan informacion të detajuar në lidhje me një operacion të biznesit',
  'LBL_DNB_ORGANISATION_IDENTIFICATION_NUMBER' => 'Numri identifikues i organizatës',
  'LBL_DNB_ORGANISATION_IDENTIFICATION_START_DATE' => 'Data e fillimit e identifikimit të organizatës',
  'LBL_DNB_ORGANIZATION_DISPLAY_SEQUENCE' => 'Sekuenca e shfaqjes së organizatës',
  'LBL_DNB_ORGANIZATION_FILLING_NAME' => 'Emri plotësues i organizatës',
  'LBL_DNB_ORGANIZATION_IDENTIFICATION_NUMBER' => 'Numri identifikues i organizatës',
  'LBL_DNB_ORGANIZATION_NAME' => 'Emri i organizatës',
  'LBL_DNB_ORGANIZATION_START_DATE' => 'Data e fillimit të organizatës',
  'LBL_DNB_ORGS_STRT_YEAR' => 'Fillimi i vitit të organizatës',
  'LBL_DNB_ORGS_STRT_YEAR_DESC' => 'Vitin kur operacionet e ndërmarra nga organizata kanë filluar',
  'LBL_DNB_ORG_DET' => 'Detaje të organizatës',
  'LBL_DNB_ORG_DET_DESC' => 'Informata të të dhënave themelore për një organizatë që mund të ndryshojnë me kalimin e kohës',
  'LBL_DNB_ORG_ID' => 'Numri identifikues i organizatës',
  'LBL_DNB_ORG_ID_DESC' => 'Një numër i caktuar nga një organ i jashtëm ose nga D&B e cila ose identifikon në mënyrë unike ose ndihmon për të identifikuar një organizatë.Organizata e Lëshimit mund të jetë një Autoritet e Regjistrimit, Departament Qeveritar ose Shoqëri Komerciale. P.sh. numrat e Dhomës së Tregtisë, numrat e TVSH-së etj.',
  'LBL_DNB_ORG_NAME' => 'Emri i organizatës',
  'LBL_DNB_ORG_NAME_DESC' => 'Regjistro emrat e ndryshme të organizatës me të cilin ajo është e njohur',
  'LBL_DNB_OTHER' => 'Tjerë',
  'LBL_DNB_OTHER_FIELDS' => 'fusha tjera',
  'LBL_DNB_OUTOFDATE' => 'Jashtë afatit',
  'LBL_DNB_OUTOFDATE_MSG' => 'Informacioni i kompanisë është jashtë afatit',
  'LBL_DNB_OVERRIDE_SUCCESS' => 'D&B të dhënat u importuan me sukses',
  'LBL_DNB_OVERVIEW' => 'Pasqyra',
  'LBL_DNB_OWNERSHIP_TYPE' => 'Lloji i pronësisë',
  'LBL_DNB_PAGESZ' => 'Madhësia e faqes',
  'LBL_DNB_PHONE' => 'Telefoni',
  'LBL_DNB_PHONE_DESC' => 'Numri i telefonit i organizatës',
  'LBL_DNB_PREMISES_AREA_MEASUREMENT' => 'Matjet e zonës',
  'LBL_DNB_PREMIUM' => 'Premium',
  'LBL_DNB_PREMIUM_COMPANY_INFO' => 'D&B: Informacion i kompanisë - premium',
  'LBL_DNB_PREMIUM_COMPANY_INFO_DESC' => 'Informacion primar i kompanisë D&B. Kërkon D&B abonim.',
  'LBL_DNB_PREMIUM_COMPANY_INFO_LOADING' => 'Ngarkimi i informacionit premium nga D&B ...',
  'LBL_DNB_PRIMARY' => 'Primare',
  'LBL_DNB_PRIMARY_ADDRESS_POSTAL_CODE' => 'Adresë primare e kodit postal',
  'LBL_DNB_PRIMARY_TOWN' => 'Qyteti primar',
  'LBL_DNB_PRIMARY_TOWN_NAME' => 'Emri i qytetit kryesor',
  'LBL_DNB_PRIM_CEN_CD' => 'Shifra e censusit',
  'LBL_DNB_PRIM_CEN_CD_DESC' => 'Një rajon gjeografik me një dendësi relativisht të lartë të popullsisë në thelbin e saj dhe lidhje të ngushta ekonomike në të gjithë zonën e',
  'LBL_DNB_PRIM_CITY' => 'Qyteti primar',
  'LBL_DNB_PRIM_CITY_DESC' => 'Emri i qytetit ose qytetit njohur nga autoriteti postar për dërgimin e postës',
  'LBL_DNB_PRIM_COUNTY_NAME' => 'Emri i shtetit',
  'LBL_DNB_PRIM_COUNTY_NAME_DESC' => 'Emri zyrtar i vendit, psh. Michigan',
  'LBL_DNB_PRIM_CTRY_CD' => 'Shifra primare e vendit',
  'LBL_DNB_PRIM_CTRY_CD_DESC' => 'Kodi vendi dy-shkronja, të përcaktuara në skemën e ISO 3166-1 të publikuar nga Organizata Ndërkombëtare për Standardizim (ISO), duke identifikuar vendin për këtë adresë.',
  'LBL_DNB_PRIM_CTRY_GRP' => 'Grupi i vendit',
  'LBL_DNB_PRIM_CTRY_GRP_DESC' => 'Identifikimi grupor i vendit, psh. Amerikë Veriore',
  'LBL_DNB_PRIM_NAME' => 'Emri',
  'LBL_DNB_PRIM_NAME_DESC' => 'Teksti i shënuar një emër të kësaj organizate',
  'LBL_DNB_PRIM_STATE' => 'Territori primar',
  'LBL_DNB_PRIM_STATE_ABBR' => 'Territori primar',
  'LBL_DNB_PRIM_STATE_ABBR_DESC' => 'Emri i shkurtuar i zonës së qeverisur në nivel lokal e cila është pjesë e një kombi të qeverisur nga qendra',
  'LBL_DNB_PRIM_STATE_DESC' => 'Emri i zonës së qeverisur në nivel lokal e cila është pjesë e një kombi të qeverisur nga qendra',
  'LBL_DNB_PRIM_STREET' => 'Rreshti i rrugës primare',
  'LBL_DNB_PRIM_STREET_DESC' => 'Tekst që të dhënat e komponentëve të adresës së rrugës që ajo të paraqitet në një etiketë të adresave',
  'LBL_DNB_PRIM_ZIP' => 'Shifra primare e postës',
  'LBL_DNB_PRIM_ZIP_DESC' => 'Një përdorues identifikues nga vendi lokal i Autoritetit Postar për të identifikuar një vend të veçantë gjeografik',
  'LBL_DNB_PRINCIPAL_IDENTIFICATION_NUMBER' => 'Numri i identifikimin e kryetarit',
  'LBL_DNB_RATING' => 'Klasifikimi',
  'LBL_DNB_REC_MARK_ANALYSIS' => 'Analiza e fundit të tregut',
  'LBL_DNB_REGISTERED_ADDRESS_INDICATOR' => 'Treguesi i adresës së regjistruar',
  'LBL_DNB_REGISTRATION_ISSUER_NAME' => 'Emri i lëshuesit të regjistruesit',
  'LBL_DNB_REGISTRATION_LOCATION_POSTAL_CODE' => 'Kodi postal i regjistrimit të lokacionit',
  'LBL_DNB_REG_DET_HED' => 'Detaje regjistrimi',
  'LBL_DNB_REG_DET_HED_DESC' => 'Regjistron statusin kushtetues të një subjekti të përcaktuar sipas ligjeve të një vendi p.sh.; Company e Limituar, Partneritet, Shoqëri bashkëpunuese dhe aksionare  ose strukturë e punësuar nga një biznes sipas formës ligjore dhe rregullave të inkorporimit. Pronarët e aksioneve janë pronarët e biznesit.',
  'LBL_DNB_RELIABILITY_TEXT' => 'Tekst i besueshmërisë',
  'LBL_DNB_RESIDENTIAL_ADDRESS_INDICATOR' => 'Treguesi i adresës rezidenciale',
  'LBL_DNB_RFR' => 'Rifreskim',
  'LBL_DNB_RFR_HINT' => 'Rifrekso tani',
  'LBL_DNB_RFR_LOADING' => 'D&B kontrolli i rifreskimit në progres',
  'LBL_DNB_RISK_CLASS' => 'Klasa e riskut',
  'LBL_DNB_SALES' => 'Shitjet',
  'LBL_DNB_SALES_REVENUE' => 'Të ardhurat e shitjes',
  'LBL_DNB_SALES_REVENUE_AMOUNT' => 'Shuma e të ardhurave shitëse',
  'LBL_DNB_SEARCH_LOADING' => 'Kërkim D&B ...',
  'LBL_DNB_SELF_REQUEST_INDICATOR' => 'Treguesi i i vetë kërkesës',
  'LBL_DNB_SENIOR_PRINCIPAL' => 'Anëtar i lartë',
  'LBL_DNB_SHOW_LESS' => 'Trego më pak',
  'LBL_DNB_SHOW_MORE' => 'Trego më shumë',
  'LBL_DNB_SIC' => 'Shifra SIC',
  'LBL_DNB_SLCT_CTRY' => 'Selektoni një shtet',
  'LBL_DNB_SLCT_STATE' => 'Selektoni një shtet',
  'LBL_DNB_SMALL_BUSINESS_INDICATOR' => 'Biznes i vogël',
  'LBL_DNB_SMBDISADV_IND' => 'Bizneset e vogla të disavantazhuara',
  'LBL_DNB_SMBDISADV_IND_DESC' => 'Vlera TRUE tregon se kjo organizatë është çertifikuar si një biznes që është më i madh se 50% në pronësidhe menaxhimin dhe operacionet e përditshme të biznesit e të cilit janë të kontrolluara nga persona shoqërisht dhe ekonomikisht të pafavorizuara',
  'LBL_DNB_SMB_CERT' => 'Treguesi i bizneseve të vogla të çertifikuara',
  'LBL_DNB_SMB_CERT_DESC' => 'Vlera TRUE tregon se biznesi është i vogël, i çertifikuar nga një agjensi federale, shtetërore ose lokale  ose organizatë që i ka përmbushur të gjitha standardet e qeverisë',
  'LBL_DNB_SMB_IND' => 'Treguesi i bizneseve të vogla',
  'LBL_DNB_SMB_IND_DESC' => 'Vlera TRUE tregon se kjo organizatë është certifikuar si një biznes të vogël. Një biznes i vogël është një entitet që është zakonisht në pronësi private dhe operohet, me një numër të vogël të të punësuarve dhe të vëllimit relativisht të ulët të shitjeve. Bizneset e vogla janë zakonisht në pronësi të shoqëritve private, ortakërive apo pronave vetanake. Përkufizimi ligjor i vogël", ndryshon nga vendi dhe nga industria',
  'LBL_DNB_SOCIAL' => 'Mediat sociale',
  'LBL_DNB_SOCIO_IND' => 'Identifikimi socioekonomik',
  'LBL_DNB_SOCIO_INDICATOR' => 'Treguesi socio-ekonomik',
  'LBL_DNB_SOCIO_IND_DESC' => 'Regjistron informacion në lidhje me kategorizimin e subjekteve në gruper socio-ekonomike ose statistikore',
  'LBL_DNB_SRCH' => 'Kërkim',
  'LBL_DNB_SRCH_LOAD' => 'Kërkim D&B',
  'LBL_DNB_SRCH_RES' => 'D&B: Kërkim rezultatesh',
  'LBL_DNB_STAND_ALONE_ORGANIZATION_INDICATOR' => 'Treguesi i vetëm i organizatës',
  'LBL_DNB_STATE' => 'Shteti / Provinca / Regjioni',
  'LBL_DNB_STD_COMPANY_INFO' => 'D&B: informacioni standard i kompanisë',
  'LBL_DNB_STD_COMPANY_INFO_DESC' => 'Ngarkimi i informacionit standard të kompanisë nga D&B. Kërkon abonim D&B.',
  'LBL_DNB_STD_COMPANY_INFO_LOADING' => 'Ngarkimi i informacionit standard të kompanisë nga D&B...',
  'LBL_DNB_STOCK_EXCHANGE_COUNTRY_ISO_ALPHA_CODE' => 'ISO Alfa kodi i burës së vendit',
  'LBL_DNB_STOCK_EXCHANGE_ISO_CODE' => 'Kodi ISO i bursës',
  'LBL_DNB_STOCK_EXCHANGE_NAME' => 'Emri i bursës',
  'LBL_DNB_STOCK_EXCHANGE_TICKER_NAME' => 'Emri teleshkrues i bursës',
  'LBL_DNB_STREET_ADDRESSLINE' => 'Adresa e rrugës',
  'LBL_DNB_STREET_ADDRESS_LINE_TEXT' => 'Teksti i adresës së rrugës',
  'LBL_DNB_SUBAGENT_INDICATOR' => 'Treguesi subagjent',
  'LBL_DNB_SUBJ_HEADER' => 'Titulli i subjektit',
  'LBL_DNB_SUBJ_HEADER_DESC' => 'Informacion i regjistrimeve të nivelit të lartë për subjekt të tilla si gjuhë primare të subjektit dhe monedhës primare në të cilat ky subjekt tregton. Kur subjekti është një organizatë, kjo mund të përfshijë detaje të tilla si Duns numrin',
  'LBL_DNB_SUMMARY' => 'Përmbledhje',
  'LBL_DNB_SVC_DISAB_VET' => 'Treguesi  i shërbimit të veteranëve me aftësi të kufizuara',
  'LBL_DNB_SVC_DISAB_VET_DESC' => 'Vlera TRUE tregon se biznesi është të paktën 51% në pronësi të një ose më shumë veteranëve me aftësi të kufizuar që është shërbim i lidhur. Termi "shërbim i lidhur" do të thotë, në lidhje me aftësinë e kufizuar ose vdekje, se aftësia e kufizuar i tillë është bërë ose të rënduara, në krye të detyrës në ushtri aktive, shërbim detare apo ajrore',
  'LBL_DNB_SVC_ERR' => 'Gabim D&B serveri',
  'LBL_DNB_TELECOMM' => 'Telekomunikacioni',
  'LBL_DNB_TELECOMMUNICATION_NUMBER' => 'Numri i Telekomunikimit',
  'LBL_DNB_TELECOMM_DESC' => 'Informacionet e regjistrimeve në lidhje me mënyrat e ndryshme të adresave të telekomunikacionit të përdorura nga një subjekt për qëllimet e kontaktit të jashtme. Mënyrat e komunikimit përfshijnë telefon, faks, e-mail, web adresa',
  'LBL_DNB_TERRITORY_ABBREVATIVE_NAME' => 'Emri i shkurtuar i territorit',
  'LBL_DNB_TERRITORY_ABBREVIATED_NAME' => 'Emri i shkurtuar i territorit',
  'LBL_DNB_TERRITORY_OFFICIAL_NAME' => 'Emri oficial i territorit',
  'LBL_DNB_TF_DUNS' => 'Numri DUNS i transferuar',
  'LBL_DNB_TOTAL_EMPLOYEE_QUANTITY' => 'Kuantiteti total i të punësuarve',
  'LBL_DNB_TOTAL_ENQUIERY_COUNT' => 'Vlera totale e hyrjeve',
  'LBL_DNB_TOTAL_INQUIRY_COUNT' => 'Vlera totale e hyrjeve',
  'LBL_DNB_TPA' => 'Vlerësimi i palës së tretë',
  'LBL_DNB_TPA_DESC' => 'Vlerësimet/opinionet e caktuar në këtë subjekt nga një njësi ekonomike tjetër përveç rrjetit botëror të D&B (WWN)',
  'LBL_DNB_TRADE_STYLE_NAME' => 'Emri i llojit të tregtisë',
  'LBL_DNB_TRANSFERRED_FROM_DUNS_NUMBER' => 'Transferuar nga DUNS numri',
  'LBL_DNB_TRD_NAME' => 'Emri i tregtisë',
  'LBL_DNB_TRD_NAME_DESC' => 'Regjistrimi i një emri me të cilin një organizatë tregton për qëllime komerciale',
  'LBL_DNB_TRNS_DUNS' => 'Numri i DUNS të transferuara',
  'LBL_DNB_TRNS_DUNS_DESC' => 'Ky është numri DUNS i subjektit që fshihet nga baza e të dhënave të hostit',
  'LBL_DNB_UNDELIVERABLE_INDICATOR' => 'Indikatori i padërgueshëm',
  'LBL_DNB_UNKNOWN_ERROR' => 'Gabim i panjohur. Ju lutem kontrolloni shkrimet për më shumë detaje.',
  'LBL_DNB_UNREACHABLE_INDICATOR' => 'Treguesi i pakapshmërisë',
  'LBL_DNB_UPLOAD' => 'Ngarko',
  'LBL_DNB_UPTODATE' => 'Përditësim',
  'LBL_DNB_UPTODATE_MSG' => 'Informacioni i kompanisë është përditësuar',
  'LBL_DNB_URL' => 'URL',
  'LBL_DNB_USPAT_SCR' => 'Vota e rriskut e partiotit SHBA',
  'LBL_DNB_USPAT_SCR_DESC' => 'Indeksi i rrezikut të pajtueshmërisë ka për qëllim tu ofrojë organizatave që i nënshtrohen të aktit patriotik të SHBA-s me një mjet shtesë në kryerjen e vlerësimit të rrezikut të bazuar pajtueshmërinë e partnerëve tregtarë. Indeksi është një vlerë numerike që përfaqëson një grumbull të flamujve të ponderuara me rrezik, të caktuar me anë të një rregullave të pronarit në bazë të algoritmit. Vlerat shkojnë nga 0 deri ~ 255. Vlerat më të larta të indeksit paraqesin një nivel më të lartë e perceptuar të rrezikut',
  'LBL_DNB_VET_ENT' => 'Treguesi  i veteranëve jbiznesmenë',
  'LBL_DNB_VET_ENT_DESC' => 'Vlera TRUE tregon se biznesi bie ndër Udhëzimet SBA të Aktit të Bizneseve të Vogla (PL 85-536), i cili si amandemend thotë: Shqetësimet e Biznesit të Vogël në pronësi dhe të kontrolluara nga veteranët jo më pak se 51% nga një ose më shumë veteranë dhe në rastin e bizneseve publicistike në pronësi jo më pak se 51% nga aksione në pronësi nga një ose më shumë veteranë',
  'LBL_DNB_VET_IND' => 'Treguesi veteran',
  'LBL_DNB_VET_IND_DESC' => 'Vlera TRUE tregon se kjo organizatë është e çertifikuar si biznes i cili është më shumë se 50% në pronësi dhe menaxhmenti dhe operimet ditore biznesore janë të kontrolluara nga një ose më shumë veteranë. Një veteran i referohet një personi i cili ka shërbyer në ushtrinë aktive, detare dhe ajrore dhe i cili ka qenë i shkarkuar ose i liruar prej tyre në kushte të tjera',
  'LBL_DNB_VIET_VET' => 'Treguesi  i veteranëve Vietnamez',
  'LBL_DNB_VIET_VET_DESC' => 'Vlera TRUE tregon se biznesi është një paktën 51% në pronësi të një ose më shumë veteranëve të Vietnamit që shërbyen në mes 1/1/59 dhe 5/7/75 dhe kanë kontroll dhe të veprojnë në biznes. Kontrolli në këtë kontekst do të thotë të ushtroshr pushtetin për të marrë vendime politike dhe për të operuar mjetet për të përfshirë në mënyrë aktive në menaxhimin ditor të biznesit',
  'LBL_DNB_VIEW_ACCT' => 'Shih llogaritë',
  'LBL_DNB_WEBPAGE' => 'Web faqe',
  'LBL_DNB_WEBPAGE_ADDRESS' => 'Adresa e web faqes',
  'LBL_DNB_WEBPAGE_DESC' => 'Web faqja e organizatës',
  'LBL_DNB_WITH' => 'me',
  'LBL_DOCUMENTS' => 'Dokumentacionet',
  'LBL_DONE_BUTTON_KEY' => 'X',
  'LBL_DONE_BUTTON_LABEL' => 'E bërë',
  'LBL_DONE_BUTTON_TITLE' => 'E bërë [Alt+X]',
  'LBL_DROPDOWN_LIST_ALL' => 'Të gjitha',
  'LBL_DROP_HERE' => 'Hudhu këtu',
  'LBL_DST_NEEDS_FIXIN' => 'Aplikimi kërkon që të aplikohet ndreqja e kohës së ruajtjes së dritës së ditës . Ju lutemi shkoni në lidhjen e Riparim në tastierën e admin dhe apiko ndreqje të kohës së ruajtjes së dritës së ditës.',
  'LBL_DUPECHECK_FILTER_DEFAULT' => 'Të gjitha kopje identike',
  'LBL_DUPLICATES_FOUND' => '{{duplicateCount}} u gjetën duplikate',
  'LBL_DUPLICATE_BUTTON' => 'Dublo',
  'LBL_DUPLICATE_BUTTON_KEY' => 'U',
  'LBL_DUPLICATE_BUTTON_LABEL' => 'Dublo',
  'LBL_DUPLICATE_BUTTON_TITLE' => 'Dublo [Alt+U]',
  'LBL_DUP_MERGE' => 'Gjej dublimet',
  'LBL_DURATION_DAY' => 'dita',
  'LBL_DURATION_DAYS' => 'Ditët',
  'LBL_DURATION_HOUR' => 'orë',
  'LBL_DURATION_HOURS' => 'orët',
  'LBL_DURATION_MINUTE' => 'minuta',
  'LBL_DURATION_MINUTES' => 'minutat',
  'LBL_DURATION_SECONDS' => 'sekonda',
  'LBL_EDIT' => 'Ndrysho {{{this}}}',
  'LBL_EDITINLINE' => 'Ndrysho',
  'LBL_EDITVIEW' => 'Ndrysho pamje',
  'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Ndrysho si e re',
  'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Ndrysho si e re',
  'LBL_EDIT_BUTTON' => 'Ndrysho',
  'LBL_EDIT_BUTTON_KEY' => 'E',
  'LBL_EDIT_BUTTON_LABEL' => 'Ndrysho',
  'LBL_EDIT_BUTTON_TITLE' => 'Ndrysho [Alt+E]',
  'LBL_EDIT_INLINE' => 'Ndrysho njëshkolonën',
  'LBL_EDIT_RELATED' => 'ndrysho lidhje  {{{this}}}',
  'LBL_EMAIL' => 'Email:',
  'LBL_EMAILS' => 'Emailet',
  'LBL_EMAILS_SUBPANEL_TITLE' => 'Emailet',
  'LBL_EMAIL_ACCOUNTS_EDIT' => 'Ndrysho',
  'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Parambush çaktivizimet e Gmail™',
  'LBL_EMAIL_ACCOUNTS_NAME' => 'Emri',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Vetitë e serverit të emailit të dërguar për jashtë.',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Mundëso infomracione të mail serverit SMTP për të përdorur për emailit të dërguar për jashta në Llogaritë e Maileve.',
  'LBL_EMAIL_ACCOUNTS_SENDTYPE' => 'Faktori i transferit të mailit',
  'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ' => 'Përdor SMTP Autentikim?',
  'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Çaktivizuar',
  'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Fjalëkalimi i SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD' => 'SMTP fjalëkalimi është i nevojshëm',
  'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP Port',
  'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Severi i SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPSSL' => 'Përdor SSL gjatë konektimit',
  'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Emri i përdorimit SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD' => 'SMTP emër përdorimi është e nevojshme',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Vendosni postën e llogarive për të parë emailat hyrëse nga llogaritë tuaja të emailit.',
  'LBL_EMAIL_ACCOUNTS_TITLE' => 'Menaxhmenti i mail llogarisë',
  'LBL_EMAIL_ACTION_SET_INVALID' => 'Jo valide',
  'LBL_EMAIL_ACTION_SET_OPT_IN' => 'Opt-in',
  'LBL_EMAIL_ACTION_SET_OPT_OUT' => 'Prirje e jashtme',
  'LBL_EMAIL_ACTION_SET_PRIMARY' => 'Primare',
  'LBL_EMAIL_ACTION_SET_VALID' => 'Valide',
  'LBL_EMAIL_ADD' => 'Shto email',
  'LBL_EMAIL_ADDRESSES' => 'Email',
  'LBL_EMAIL_ADDRESSES_TITLE' => 'Email adresat',
  'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'E bërë',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST' => 'Listë e re',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Tek:',
  'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Tek/Cc/Bcc',
  'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Fshi',
  'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Email adresa',
  'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT' => 'Vetëm Ndryshimi i kontakteve është i mbështetur tani.',
  'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtër',
  'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME' => 'Emri/ Emri i llogarisë',
  'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME' => 'Mbiemri',
  'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS' => 'Kontaktet e mia',
  'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS' => 'Lista e maileve të mia',
  'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Emri',
  'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Nuk është gjetur asnjë adresë',
  'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Ruaj dhe Shto në librin e adresave.',
  'LBL_EMAIL_ADDRESS_BOOK_SEARCH' => 'Kërkim',
  'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Selekto pranuesin e emailit',
  'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Libri i adresave',
  'LBL_EMAIL_ADDRESS_PRIMARY' => 'Email adresa',
  'LBL_EMAIL_ADDR_DISPLAY_MSG' => 'Shfaqja e email adresave  {0} - {1} nga {2}',
  'LBL_EMAIL_ARCHIVED' => 'Email i arkivuar',
  'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Importo në Sugar',
  'LBL_EMAIL_ASSIGNED_TO_USER' => 'Drejtuar përdoruesit',
  'LBL_EMAIL_ASSIGNMENT' => 'Detyrë',
  'LBL_EMAIL_ASSIGN_TO' => 'Drejtuar',
  'LBL_EMAIL_ATTACHMENT' => 'Bashkëngjit',
  'LBL_EMAIL_ATTACHMENTS' => 'Nga sistemi lokal',
  'LBL_EMAIL_ATTACHMENTS2' => 'Nga Sugar dokumentacioni',
  'LBL_EMAIL_ATTACHMENTS3' => 'Bashkëngjitjet e shablloneve',
  'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokumentacioni',
  'LBL_EMAIL_ATTACHMENTS_EMBEDED' => 'E ngulitur',
  'LBL_EMAIL_ATTACHMENTS_FILE' => 'Dosja',
  'LBL_EMAIL_ATTACHMENT_UPLOAD_FAILED' => 'Bashkangjitja dështoi për tu ngarkuar',
  'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Bashkëngjit',
  'LBL_EMAIL_BCC' => 'BCC:',
  'LBL_EMAIL_BUTTON' => 'Email',
  'LBL_EMAIL_CANCEL' => 'Anulo',
  'LBL_EMAIL_CC' => 'CC',
  'LBL_EMAIL_CHARSET' => 'Përcaktimi i karakterit',
  'LBL_EMAIL_CHECK' => 'Kontrollo mailin',
  'LBL_EMAIL_CHECKING_DESC' => 'Një moment ju lutem...<br /><br />Nëse ky është kontrolli i parë për mail llogarinë, munt të zgjasë për një kohë.',
  'LBL_EMAIL_CHECKING_NEW' => 'Kontrolli për email të ri',
  'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Pastrimi i sasisë së dosjeve',
  'LBL_EMAIL_CLOSE' => 'Mbyll',
  'LBL_EMAIL_COFFEE_BREAK' => 'Kontrolli për email të ri.<br /><br />Mail llogaritë e mëdha mund të marrin njësasi të konisderueshme të kohës.',
  'LBL_EMAIL_COMMON' => 'Zakonshëm',
  'LBL_EMAIL_COMPOSE' => 'Email',
  'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Ju lutemi shënoni pranuesin (it) e këtij emaili.T',
  'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Ju lutemi shkruani email adresë valide për Tek, CC dhe BCC fushat',
  'LBL_EMAIL_COMPOSE_LINK_TO' => 'Lidhet me',
  'LBL_EMAIL_COMPOSE_NO_BODY' => 'Trupi i këtij emaili është i zbrazët. Dërgoni gjithsesi?',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Ky email nuk ka subjekt. Dërgoni gjithsesi?',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '( pa subjekt)',
  'LBL_EMAIL_COMPOSE_OPTIONS' => 'Opcionet',
  'LBL_EMAIL_COMPOSE_READ' => 'Lexo dhe kompozo Email',
  'LBL_EMAIL_COMPOSE_SEND_FROM' => 'Dërguar nga Mail llogariaA',
  'LBL_EMAIL_CONFIRM_CLOSE' => 'Hidhe posht këtë email?',
  'LBL_EMAIL_CONFIRM_DELETE' => 'Largo këtë të hyra nga libri juaj i adresave?',
  'LBL_EMAIL_CONFIRM_DELETE_LIST' => 'Largoni këtë të hyra nga lista juaj e mailit?',
  'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'A jeni i sigurt që dëshironi të fshini këtë nënshkrim?',
  'LBL_EMAIL_CREATE_NEW' => '-- krijo në Ruaj--',
  'LBL_EMAIL_DATE_RECEIVED' => 'Data e pranimit',
  'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Data e dërgimit sipas dërguesit',
  'LBL_EMAIL_DATE_TODAY' => 'Sot',
  'LBL_EMAIL_DATE_YESTERDAY' => 'Dje',
  'LBL_EMAIL_DD_TEXT' => 'emaili(et) i selektuar',
  'LBL_EMAIL_DEFAULTS' => 'Çaktivzuar',
  'LBL_EMAIL_DELETE' => 'Fshi',
  'LBL_EMAIL_DELETE_CONFIRM' => 'Fshi mesazhet e selektuara?',
  'LBL_EMAIL_DELETE_ERROR_DESC' => 'Nuk keni qasje për këtë sipërfaqe. Kontakoni administratorin e faqes për të siguruar qasje',
  'LBL_EMAIL_DELETE_SUCCESS' => 'Fshirja e emailit me sukses.',
  'LBL_EMAIL_DELETING_MESSAGE' => 'Fshirja e mesazhit',
  'LBL_EMAIL_DELETING_OUTBOUND' => 'Fshirja e serverit të drejtuar nga jashtë',
  'LBL_EMAIL_DELIMITER' => '::;::',
  'LBL_EMAIL_DETAILS' => 'Detajet',
  'LBL_EMAIL_DISPLAY_MSG' => 'Shfaqja e email(eve) {0} - {1} nga {2}',
  'LBL_EMAIL_DONE_BUTTON_LABEL' => 'E bërë',
  'LBL_EMAIL_DOWNLOAD_STATUS' => 'Ngarkimi(numrimi) (total) i emaileve',
  'LBL_EMAIL_EDIT_CONTACT' => 'Ndysho kontaktin',
  'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Vetëm adresa primare do të përdoret kur punoni me Kontaktet.',
  'LBL_EMAIL_EDIT_MAILING_LIST' => 'Ndrysho listën e mailit',
  'LBL_EMAIL_EMPTYING_TRASH' => 'Zbrazja e plehrave',
  'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Nuk ka email adresa për të shfaqur.',
  'LBL_EMAIL_EMPTY_MSG' => 'Nuk ka emaile për të shfaqur.',
  'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Emri i folderit duhet të jetë unik dhe jo i zbrazët. Ju lutemi provoni përsëri.',
  'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Nuk mund të përcaktohet dosja me qëllim nga konteksti. Provoni përsëri.',
  'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Ju lutemi kontrolloni parametrat tuaja.',
  'LBL_EMAIL_ERROR_CONTACT_NAME' => 'Ju lutemi të siguroheni që keni shkruar mbiemrin.',
  'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Nuk mund të fshi folderin. Ose folderi ose bijtë kanë emaile ose kutia postare e ka lidhur me të.',
  'LBL_EMAIL_ERROR_DESC' => 'Janë detektuar gabime:',
  'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Emri i Sugar Folderit duhet të jetë unik.',
  'LBL_EMAIL_ERROR_EMPTY' => 'Ju lutemi shruani ca kriteriume kërkimi.',
  'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Prej Adresës është e nevojshme. Ju lutemi shkruani një adresë valide të emailit.',
  'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Ka ndodhur një gabim',
  'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Ose mesazhin heqni nga serveri ose lëvizni në një dosje të ndryshme',
  'LBL_EMAIL_ERROR_LIST_NAME' => 'Një listë emaili me atë emër tashmë ekziston',
  'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Lidhja me serverin e postës ka dështuar. Ju lutemi kontaktoni administratorin',
  'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Mesazhi është larguar nga ServeriLlo',
  'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Është i nevojshëm Folder i monitoruar.',
  'LBL_EMAIL_ERROR_MOVE' => 'Lëvizni emailin midis serverave dhe/ose llogaritë e postës që nuk janë të mbështetura në këtë kohë.',
  'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Lëvizni gabimin',
  'LBL_EMAIL_ERROR_NAME' => 'Është e nevojshme një emër',
  'LBL_EMAIL_ERROR_NO_FILE' => 'Ju lutemi ofroni një dosje.',
  'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'Riemërtimi i dosjes IMAP nuk është e mbështetur në këtë kohë.',
  'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Nuk është specifikuar asnjë server i email të drejtuar për jashtë.',
  'LBL_EMAIL_ERROR_PASSWORD' => 'Një fjalëkalim është i nevojshëm.',
  'LBL_EMAIL_ERROR_PORT' => 'Nevoitet port i mail serverit.',
  'LBL_EMAIL_ERROR_PREPEND' => 'Gabim:',
  'LBL_EMAIL_ERROR_PROTOCOL' => 'Është i nevojshëm protokoli i serverit',
  'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Llogaria e ostës nuk mund të jetë ruajtur.',
  'LBL_EMAIL_ERROR_SERVER' => 'Një postë e adresës të serverit është e nevojshme.',
  'LBL_EMAIL_ERROR_TIMEOUT' => 'Një gabim ka ndodhur, duke komunikuar me serverin e postës.',
  'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Është i nevojshëm Folder i plehrave.',
  'LBL_EMAIL_ERROR_USER' => 'Një emër i identifikimit është i nevojshëm.',
  'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Ky informacion nuk është i disponueshëm',
  'LBL_EMAIL_FOLDERS_ACTIONS' => 'Lëviz tek',
  'LBL_EMAIL_FOLDERS_ADD' => 'shto',
  'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Shto folder të ri',
  'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Ruaj',
  'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Shtoja këtë folderin',
  'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Ky folder nuk mund të ndryshojë',
  'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'A jeni të sigurt që dëshironi të fshini këtë folder? Ky proces nuk mund të ndryshohet. Fshirjet e \\nFolderave do të kaskadojnë tek të gjitha folderët e përfshira.',
  'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'emri i ri i folderit',
  'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Ju lutemi selektoni një folder para se të perfomoni veprimin.',
  'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Riemëro folderin',
  'LBL_EMAIL_FOLDERS_TITLE' => 'Menaxhmenti i Folderit',
  'LBL_EMAIL_FOLDERS_USING_GROUP_USER' => 'Përdorimi i grupit',
  'LBL_EMAIL_FOLDERS_USING_TEAM' => 'Drejtuar grupit',
  'LBL_EMAIL_FORWARD' => 'Përcill',
  'LBL_EMAIL_FOUND' => 'Gjetur.',
  'LBL_EMAIL_FROM' => 'nga',
  'LBL_EMAIL_GROUP' => 'Grup',
  'LBL_EMAIL_HOME_FOLDER' => 'Ballina',
  'LBL_EMAIL_HTML_RTF' => 'Dërgo HTML',
  'LBL_EMAIL_IE_DELETE' => 'Fshirja e llogarisë së mailit',
  'LBL_EMAIL_IE_DELETE_CONFIRM' => 'A jeni i sigurt që dëshironi të fshini këtë mail llogari?',
  'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Fshirja e nënshkrimit',
  'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Fshirja me sukses.',
  'LBL_EMAIL_IE_SAVE' => 'Ruajtja e informacionit të mail llogarisë',
  'LBL_EMAIL_IMPORTING_EMAIL' => 'Importimi i emailit',
  'LBL_EMAIL_IMPORT_EMAIL' => 'Importo në Sugar',
  'LBL_EMAIL_IMPORT_FAIL' => 'Importi dështoi sepse ose mesazhi është tashmë i importuar ose fshihet nga serveri',
  'LBL_EMAIL_IMPORT_SETTINGS' => 'Parametrat e importit',
  'LBL_EMAIL_IMPORT_SUCCESS' => 'Importo fjalëkaliminRe',
  'LBL_EMAIL_INVALID' => 'Jo valide',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Posta në drejtim të jashtëm të serverit selektohet për llogari të postës që ju jeni duke përdorur është jovalide. Kontrolloni parametrat ose selektoni një server tjetër të postës për llogarinë e postës.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Një postë dalëse të serverit nuk është konfiguruar për të dërguar emailat. Ju lutemi të konfiguroni një postë dalësë të serverit ose selektoni një postë dalëse të serverit për llogarinë e postës që ju jeni duke e përdorur në parametrat >> e llogarisë së postës.  >>',
  'LBL_EMAIL_INV_TITLE' => 'email adresë jo valide',
  'LBL_EMAIL_LINK_RECORD' => 'Klikoni këtu',
  'LBL_EMAIL_LIST_RENAME_DESC ' => 'Shkruaj emër të ri për këtë listë të mailit',
  'LBL_EMAIL_LIST_RENAME_TITLE' => 'Riemëro listën e mailit',
  'LBL_EMAIL_LOADING' => 'Ngarkimi...',
  'LBL_EMAIL_MARK' => 'Nënvizo',
  'LBL_EMAIL_MARK_FLAGGED' => 'Me flamur.',
  'LBL_EMAIL_MARK_READ' => 'Si të lexuar',
  'LBL_EMAIL_MARK_UNFLAGGED' => 'Pa flamur.',
  'LBL_EMAIL_MARK_UNREAD' => 'Si të palexuara',
  'LBL_EMAIL_MENU_ADD_FOLDER' => 'Krijo folder',
  'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Fshi dosjet e fshehta',
  'LBL_EMAIL_MENU_COMPOSE' => 'Kompozoi',
  'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Fshi Folderin',
  'LBL_EMAIL_MENU_EDIT' => 'Ndrysho',
  'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Zbraz plehrat',
  'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Krijo Folder (distanco ose në Sugar)',
  'LBL_EMAIL_MENU_HELP_ARCHIVE' => 'Arkivo këto emaile në SugarCRM',
  'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST' => 'Dërgo email listave të selektuara të mailit',
  'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE' => 'Dërgo Email këtij Kontakti',
  'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE' => 'Largo kontaktin',
  'LBL_EMAIL_MENU_HELP_DELETE' => 'fshi këtë email (e)',
  'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Krijo Folder (distanco ose në Sugar)',
  'LBL_EMAIL_MENU_HELP_EDIT_CONTACT' => 'Ndrysho një kontakt',
  'LBL_EMAIL_MENU_HELP_EDIT_LIST' => 'Ndrysho Listën  e mailit',
  'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Zbrazni të gjitha dosjet e shportës për llogaritë tuaja të emailit',
  'LBL_EMAIL_MENU_HELP_MARK_FLAGGED' => 'Shënoi këto emaile me flamur',
  'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Shnoi këto emaile si të lexuara',
  'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Shënoi këto emaile pa flamur',
  'LBL_EMAIL_MENU_HELP_MARK_UNREAD' => 'Shënoi këto emaile si të palexuara',
  'LBL_EMAIL_MENU_HELP_REMOVE_LIST' => 'Largon listën e maileve',
  'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Riemëro Folderin (distanco ose në Sugar)',
  'LBL_EMAIL_MENU_HELP_REPLY' => 'Përgjigju këtij emaili',
  'LBL_EMAIL_MENU_HELP_REPLY_ALL' => 'Përgjigju të gjithë pranuesve të emaileve',
  'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Ju lutemi bëni një selektim para se të provoni këtë operim.',
  'LBL_EMAIL_MENU_REMOVE' => 'Largo',
  'LBL_EMAIL_MENU_RENAME' => 'Riemëro',
  'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Riemëro folderin',
  'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Riemërimi i folderit',
  'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sinkronizo',
  'LBL_EMAIL_MESSAGES' => 'mesazhet',
  'LBL_EMAIL_MESSAGE_NO' => 'Asnjë mesazh',
  'LBL_EMAIL_ML_ADDRESSES_1' => 'Adresat e selektuara të listës',
  'LBL_EMAIL_ML_ADDRESSES_2' => 'Adresat e disponueshme të listës',
  'LBL_EMAIL_ML_NAME' => 'Emri i listës',
  'LBL_EMAIL_MULTISELECT' => 'Ctrl-Kliko për të selektuar shumëfishtë<br />(Përdoruesit Mac përdorin CKM-Kliko)',
  'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Shumfishe',
  'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Bosh',
  'LBL_EMAIL_NO' => 'Jo',
  'LBL_EMAIL_NOT_SENT' => 'Sistemi nuk mund të përpunoj kërkimin tuaj. Ju lutemi kontaktoni administratorin e sistemit.',
  'LBL_EMAIL_OK' => 'OK',
  'LBL_EMAIL_ONE_MOMENT' => 'Një moment ju lutem...',
  'LBL_EMAIL_OPEN_ALL' => 'Hapni mesazhe të shumta',
  'LBL_EMAIL_OPTIONS' => 'Opcionet',
  'LBL_EMAIL_OPT_OUT' => 'e zgjedhur jashtë',
  'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Përjashtuar dhe jovalid',
  'LBL_EMAIL_OPT_TITLE' => 'Përjashtimi i email adresës',
  'LBL_EMAIL_PAGE_AFTER' => 'e {0}',
  'LBL_EMAIL_PAGE_BEFORE' => 'Faqja',
  'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
  'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email si PDF',
  'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email si PDF [Alt+M]',
  'LBL_EMAIL_PERFORMING_TASK' => 'Detyrat e performuara',
  'LBL_EMAIL_POP3_REMOVE_MESSAGE' => 'Protokoli i Mail Serverit të llojit POP3 nuk do të mbështetet në publikimin e ardhëshëm. Vetë IMAP do të mbështetet.',
  'LBL_EMAIL_PRIMARY' => 'Primare',
  'LBL_EMAIL_PRIM_TITLE' => 'email adresë primare',
  'LBL_EMAIL_PRINT' => 'Shtyp',
  'LBL_EMAIL_QC_BUGS' => 'Bug',
  'LBL_EMAIL_QC_CASES' => 'rasti',
  'LBL_EMAIL_QC_CONTACTS' => 'Kontakt',
  'LBL_EMAIL_QC_LEADS' => 'udhëheqje',
  'LBL_EMAIL_QC_OPPORTUNITIES' => 'Mundësia',
  'LBL_EMAIL_QC_TASKS' => 'Detyrë',
  'LBL_EMAIL_QUICK_COMPOSE' => 'Kompozim i shpejtë',
  'LBL_EMAIL_QUICK_CREATE' => 'Krijim i shpejtë',
  'LBL_EMAIL_REBUILDING_FOLDERS' => 'Rindërtimi i Folderëve',
  'LBL_EMAIL_RECORD' => 'Regjistrimet e emailit',
  'LBL_EMAIL_RECV' => 'rec',
  'LBL_EMAIL_RELATE_EMAIL' => 'Lidh emailin',
  'LBL_EMAIL_RELATE_TO' => 'Lidh',
  'LBL_EMAIL_REMOVE' => 'Largo',
  'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Kujdes!Llogaria e drejtuar nga jashtë që ju jeni duke u përpjekur për të fshirë është e lidhur në një llogari ekzistuese të drejtuar përbrenda. A jeni te sigurte që doni te vazhdoni?',
  'LBL_EMAIL_REPLY' => 'Përgjigju',
  'LBL_EMAIL_REPLY_ALL' => 'Përgjigju të gjithve',
  'LBL_EMAIL_REPLY_TO' => 'PërgjigjuRua',
  'LBL_EMAIL_REPORTS_TITLE' => 'Raportet',
  'LBL_EMAIL_RETRIEVING_LIST' => 'Marrja e listës të Emailit',
  'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Rigjetja e mesazhit',
  'LBL_EMAIL_RETRIEVING_RECORD' => 'Rigjetja e regjistrimit të emailit',
  'LBL_EMAIL_RETURN_TO_VIEW' => 'Kthehu në modulën e mëparshme?',
  'LBL_EMAIL_REVERT' => 'Kthehu',
  'LBL_EMAIL_RULES_TITLE' => 'Menaxhmenti i rregullit',
  'LBL_EMAIL_SAVE' => 'Ruaj',
  'LBL_EMAIL_SAVE_AND_REPLY' => 'Ruaj dhe Përgjigju',
  'LBL_EMAIL_SAVE_DRAFT' => 'Ruaj skicë',
  'LBL_EMAIL_SEARCHING' => 'Kryerja e kërkimit',
  'LBL_EMAIL_SEARCH_ADVANCED' => 'Kërkim i avancuar',
  'LBL_EMAIL_SEARCH_DATE_FROM' => 'Nga Data',
  'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Deri në Datën',
  'LBL_EMAIL_SEARCH_FULL_TEXT' => 'Trupi shkrues',
  'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Asnjë rezultat  nuk i përshtatet kriteriumit tënd.',
  'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Rezultatet e kërkimit',
  'LBL_EMAIL_SEARCH_TITLE' => 'Kërkim i thjeshtë',
  'LBL_EMAIL_SEARCH__FROM_ACCOUNTS' => 'Kërko email llogari',
  'LBL_EMAIL_SELECT' => 'Selekto',
  'LBL_EMAIL_SELECT_ONE_RECORD' => 'Ju lutemi selektoni vetëm një regjistrim emaili',
  'LBL_EMAIL_SEND' => 'Dërgo',
  'LBL_EMAIL_SENDING_EMAIL' => 'Dërgimi i emailit',
  'LBL_EMAIL_SENT' => 'u dërgua',
  'LBL_EMAIL_SETTINGS' => 'parametrat',
  'LBL_EMAIL_SETTINGS_2_ROWS' => '2 reshta',
  'LBL_EMAIL_SETTINGS_3_COLS' => '3 Kolona',
  'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Mail llogaritë',
  'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Fshi formën',
  'LBL_EMAIL_SETTINGS_AUTO_IMPORT' => 'Importo Emailin mbi pamje',
  'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Kontrollo për email të rind',
  'LBL_EMAIL_SETTINGS_COMPOSE_INLINE' => 'Përdorni panelit e parapamjes',
  'LBL_EMAIL_SETTINGS_COMPOSE_POPUP' => 'Përdorni Popup Window',
  'LBL_EMAIL_SETTINGS_DISPLAY_NUM' => 'Numri i emailave për faqë',
  'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT' => 'Ndrysho mail llogarinë',
  'LBL_EMAIL_SETTINGS_FOLDERS' => 'Folderat',
  'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Nga adresa',
  'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Nga emri',
  'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Email adresa për njoftimin e testimit',
  'LBL_EMAIL_SETTINGS_FULL_SCREEN' => 'Ekran i plotë',
  'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Sinkronizo të gjithë mail llogaritë',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC' => 'Performimi i këtij veprimi do të sinkronizojë mail llogaritë dhe përmbajtjet e tyre.',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Performo sinkronizim të plotë? \\n Mail llogaritë e mëdha mund të zgjasin disa minuta.',
  'LBL_EMAIL_SETTINGS_GENERAL' => 'E përgjithëshme',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS' => 'Foldera të grupit të disponieshëm',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Krijo Foldera të grupit',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Ndryshi Folderin e grupit',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Ruatje e folderave të grupit',
  'LBL_EMAIL_SETTINGS_LAYOUT' => 'stili i formatit',
  'LBL_EMAIL_SETTINGS_MUST_RELOAD' => 'Ju duhet ringarkoni faqen per kushtet e reja të hyjnë në fuqi.',
  'LBL_EMAIL_SETTINGS_NAME' => 'Emri i mail llogarisë',
  'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Përgjigju adresës',
  'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Selektoni numrin e emailave për faqë në postë. Kjo mund të kërkojë vendosjen e rifreskimit të faqës në mënyrë që të ketë efekt.',
  'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Rigjetja e Mail llogarive',
  'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP' => 'Rigjetja e Folderit të grupit',
  'LBL_EMAIL_SETTINGS_RULES' => 'Regullat',
  'LBL_EMAIL_SETTINGS_SAVED' => 'Parametrat janë ruajtur. \\n\\n Duhet të ringarkoni faqen për parametra të reja për të pasur efekt.',
  'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Dërgoni vetëm emailat e tekstit të thjeshtë',
  'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS' => 'aktive',
  'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Emaile për faqe',
  'LBL_EMAIL_SETTINGS_TAB_POS' => 'Vendi i skedave në fund',
  'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Parametrat vizuale',
  'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Preferencat',
  'LBL_EMAIL_SETTINGS_TOGGLE_ADV' => 'Trego të avancuara',
  'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR' => 'Tek Email adresa',
  'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Dosjet e disponueshme të përdoruesit',
  'LBL_EMAIL_SHOW_READ' => 'Trego të gjitha',
  'LBL_EMAIL_SHOW_UNREAD_ONLY' => 'Trego vetëm ata që nuk janë lexuar',
  'LBL_EMAIL_SIGNATURES' => 'Nënshkrimet',
  'LBL_EMAIL_SIGNATURE_CREATE' => 'Krijo nënshkrim',
  'LBL_EMAIL_SIGNATURE_NAME' => 'Emri i nënshkruesit',
  'LBL_EMAIL_SIGNATURE_TEXT' => 'trupi nënshkrues',
  'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Mundëso SMTP gjatë SSL ose TLS?',
  'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ Sugar Folderat ]',
  'LBL_EMAIL_SPACER_MAIL_SERVER' => '(Distanco Folderat)',
  'LBL_EMAIL_SUBJECT' => 'Subjekti',
  'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Klikoni butonin Shift ose butonin Ctrl për të selektuar dosje të shumta.',
  'LBL_EMAIL_SUCCESS' => 'sukses',
  'LBL_EMAIL_SUGAR_FOLDER' => 'SugarFolderi',
  'LBL_EMAIL_TEAMS' => 'Drejtuar grupeve',
  'LBL_EMAIL_TEMPLATES' => 'Shabllonet',
  'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Trupi i Email shabllonit është i zbarzët.',
  'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Një email është dërguar në adresën e specifikuar të emailit duke përdorur parametrat e ofruara të postës dalëse. Ju lutemi kontrolloni për të parë nëse emaili është pranuar për të verifikuar a janë parametrat e sakta.',
  'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Dërgoni një email testues',
  'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Emaili i testimit të dërguar',
  'LBL_EMAIL_TEXT_FIRST' => 'Faqja e parë',
  'LBL_EMAIL_TEXT_LAST' => 'Faqja e fundit',
  'LBL_EMAIL_TEXT_NEXT' => 'faqja në vijim',
  'LBL_EMAIL_TEXT_PREV' => 'Faqja e kaluar',
  'LBL_EMAIL_TEXT_REFRESH' => 'rifreskim',
  'LBL_EMAIL_TITLE' => 'email adresa',
  'LBL_EMAIL_TO' => 'deri',
  'LBL_EMAIL_TOGGLE_LIST' => 'Lista e shkëputur',
  'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grup',
  'LBL_EMAIL_VIEW' => 'Pamje',
  'LBL_EMAIL_VIEWS' => 'Pamjet',
  'LBL_EMAIL_VIEW_HEADERS' => 'Shfaqni kryefaqët',
  'LBL_EMAIL_VIEW_PRINTABLE' => 'Version i printueshëm',
  'LBL_EMAIL_VIEW_RAW' => 'Shfaqni emailin e papërpunuar',
  'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Shih lidhjet',
  'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Ky funksion është i pambështetur, kur përdoret me POP3.',
  'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Paralajmërim: Mungon emri i përdorimit dhe fjalëkalimi për llogaritë e maileve të dërguar për jashtë.',
  'LBL_EMAIL_YES' => 'Po',
  'LBL_EMPLOYEES' => 'Punëtorët',
  'LBL_EMPTY' => 'Bosh',
  'LBL_EMPTY_REQUIRED_VCARD' => 'vCard nuk i ka të gjitha fushat e kërkuara për këtë modul.',
  'LBL_EMPTY_VCARD' => 'Ju lutemi selektoni dosje të vCard',
  'LBL_ENABLE_JAVASCRIPT' => 'SugarCRM kërkon javascript. Ju lutemi aktivizoni javascript për të vazhduar përdorimin e SugarCRM.',
  'LBL_ENTER_DATE' => 'Data e nisjes',
  'LBL_ENTER_EMAIL' => 'Vendos email ftues...',
  'LBL_ENTER_VALID_YEAR' => 'Ju lutemi shkruani vit valid',
  'LBL_ENTER_YEAR' => 'Zgjidh Vitin',
  'LBL_ERROR' => 'Gabim',
  'LBL_ERROR_CANNOT_FIND_TWITTER' => 'Nuk mund të gjeni afat kohor të vlefshëm për Twitter ID:',
  'LBL_ERROR_RETRIEVING_FREE_BUSY' => 'Gabim gjatë kthimit të orarit.',
  'LBL_ERR_LOADING_RSS_FEED' => 'Dështoi të ngarkojë furnizim RSS',
  'LBL_EXISTING' => 'Ekzistues',
  'LBL_EXPAND_ALL' => 'Zgjero të gjitha',
  'LBL_EXPORT' => 'Eksporto',
  'LBL_EXPORT_ALL' => 'Eksporto të gjitha',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Drejtuar',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Përdorues i caktuar',
  'LBL_EXPORT_FULL_NAME' => 'Emri i plotë',
  'LBL_EXPORT_REPORTS_TO_ID' => 'I raporton ID',
  'LBL_EXPORT_TEAM_ID' => 'Id e grupit',
  'LBL_EXPORT_TEAM_NAME' => 'Grupet',
  'LBL_EXPORT_TEAM_SET_ID' => 'Vendos grupin ID',
  'LBL_EXTERNAL_LOGIN_BUTTON_TITLE' => 'Logim i vetëm',
  'LBL_EXTERNAL_SECURITY_LEVEL' => 'Sigurimi',
  'LBL_FAILED' => 'Ka dështuar!',
  'LBL_FASTCGI_LOGGING' => 'Për eksperiencën optimale duhet përdorur IIS/FastCGI sapi, të vendosur fastcgi.kycu në 0 te skedari juaj php.ini',
  'LBL_FAVORITE' => 'Favoritë',
  'LBL_FAVORITES' => 'Favoritet',
  'LBL_FAVORITES_FILTER' => 'Favoritet e mia:',
  'LBL_FEEDBACK' => 'Feedback',
  'LBL_FILES_OPENED' => 'Dosjet e qasura',
  'LBL_FILE_BUTTON' => 'Dosja',
  'LBL_FILE_DELETED' => 'Fajli u fshi me sukses',
  'LBL_FILE_DELETE_CONFIRM' => 'Jeni të sigurtë që doni të fshini këtë fotografi? Kjo nuk mund të zhbëhet.',
  'LBL_FILE_SIZE_UNITS_B' => 'Bytes',
  'LBL_FILE_SIZE_UNITS_KB' => 'kB',
  'LBL_FILE_SIZE_UNITS_MB' => 'MB',
  'LBL_FILTER' => 'Filtër:',
  'LBL_FILTERED' => 'Filtruar',
  'LBL_FILTER_ALL_RECORDS' => 'Të gjitha regjistrimet',
  'LBL_FILTER_BETWEEN_FROM' => 'nga',
  'LBL_FILTER_BETWEEN_TO' => 'Deri',
  'LBL_FILTER_CREATE_NEW' => 'Krijo',
  'LBL_FILTER_DATEBETWEEN_FROM' => 'Data e fillimit',
  'LBL_FILTER_DATEBETWEEN_TO' => 'Data e përfundimit',
  'LBL_FILTER_MENU_BY' => 'Filtro menynë sipas',
  'LBL_FILTER_SELECT_FIELD' => 'Selekto fushën...',
  'LBL_FILTER_SELECT_OPERATOR' => 'Selekto operatotin...',
  'LBL_FINISH_BUTTON_LABEL' => 'Mbaro',
  'LBL_FINISH_BUTTON_TITLE' => 'Mbaro',
  'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'ditën e arë të muajit të ardshëm',
  'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
  'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
  'LBL_FIXED_IN_RELEASE' => 'Ndrequr në publikim',
  'LBL_FOLLOW' => 'Ndiq',
  'LBL_FOLLOWING' => 'Vijuese',
  'LBL_FOLLOW_LINK' => 'Ndiq linkun',
  'LBL_FONTSIZE_EXTRA_HUGE' => 'Stër madhe',
  'LBL_FONTSIZE_HUGE' => 'Gjigant',
  'LBL_FONTSIZE_LARGE' => 'E madhe',
  'LBL_FONTSIZE_LARGER' => 'Më e madhe',
  'LBL_FONTSIZE_NORMAL' => 'Normal (e parazgjedhur)',
  'LBL_FONTSIZE_SMALL' => 'I vogël',
  'LBL_FONTSIZE_TINY' => 'I imët',
  'LBL_FORECAST_WORKSHEET' => 'Tabela e parashikimeve',
  'LBL_FORECAST_WORKSHEETS' => 'Fletë pune e parashikimeve',
  'LBL_FOUND_IN_RELEASE' => 'Gjetur në publikim',
  'LBL_FULL_FORM_BUTTON_KEY' => 'L',
  'LBL_FULL_FORM_BUTTON_LABEL' => 'Formë e plotë',
  'LBL_FULL_FORM_BUTTON_TITLE' => 'Formë e plotë [Alt+F]',
  'LBL_GENERATE_QUOTE' => 'Gjeneroni kuotë',
  'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Formular i gjenruar',
  'LBL_GETTINGAIR' => 'Mrrje e ajrit',
  'LBL_GLOBAL_SEARCH' => 'Kërkim global',
  'LBL_GLOBAL_SEARCH_LNK_KEY' => '',
  'LBL_GLOBAL_SEARCH_MODULE_FILTER' => 'Moduli filtrues i kërkimit global',
  'LBL_GLOBAL_SEARCH_RUN' => 'Zbato kërkimin global',
  'LBL_GLOBAL_SHORTCUTS' => 'Shkurtore globale',
  'LBL_GO_BUTTON_LABEL' => 'Shko',
  'LBL_GRID_SELECTED_FILE' => 'dosja e selktuar',
  'LBL_GRID_SELECTED_FILES' => 'dosjet e selektuara',
  'LBL_GROUP_EMAIL_ACCOUNT_CONFIGURATION' => 'llogari grupore',
  'LBL_GS_HELP' => 'Fushat në këtë modul të përdorura në këtë kërkim shfaqen më sipër.Teksti i theksuar përputhet me kriteret tuaja të kërkimit.',
  'LBL_HELP' => 'Ndihmë',
  'LBL_HELP_CREATE' => 'Për të krijuar {{module_name}}: 1. Jepni vlera për fushat sa dëshironi. -Fushat e shënuara me "Patjetër" duhet të kompletohen para se të ruhen. -Klikoni "Trego më shumë" për të paraqitur fushat shtesë nëse është e nevojshme. 2. Klikoni "Ruaj" për të finalizuar një regjistrim të ri dhe të ktheheni në faqen paraprake. -Zgjedhni "Ruaj dhe shiko" për të hapur {{module_name}} të ri në pamjen e regjistrimeve. -Zgjedhni "Ruaj dhe krijo të ri" që menjëherë të krijoni {{module_name}} të ri. 3. Mbasi ta ruani, përdorni subpanelin {{revenuelineitems_module}} për të shtuar rresht në linjat e {{module_name}}.',
  'LBL_HELP_CREATE_TITLE' => '{{module_name}} Krijo',
  'LBL_HELP_DUPLICATE' => 'Sugar ka zbuluar se të dhënat që ju jeni duke u përpjekur për të krijuar mund të ekzistojnë. Për të modifikuar një regjistrim ekzistues në vend që të krijoni një të ri, klikoni "Zgjidh dhe edito" për të drejtën e procesverbalit të dëshiruar. Çdo fushë boshe në të dhënat ekzistuese do të plotësohet me vlerat që ju sapo i keni vendosur. Klikoni "Ruaj" për të bërë këto ndryshime në të dhënat ekzistuese. Në qoftë se, në vend të kësaj, ju dëshironi të përdorni vlerat që sapo i keni futur në vend të vlerave mbi të dhënat ekzistuese, kliko "Reseto origjinalin". Vlerat që ju keni futur më pas do të aplikohen në të dhënat ekzistuese dhe ju tani mund të ofroni ndonjë ndryshim shtesë dhe kliko "Ruaj" për të finalizuar ndryshimet në të dhënat ekzistuese. Për të krijuar një rekord të ri duke përdorur vlerat që keni futur, klikoni "Shpërfill kopjimin dhe Ruaj" djathtas në krye të ekranit.',
  'LBL_HELP_DUPLICATE_TITLE' => 'Zbulim i duplikatit potencial',
  'LBL_HELP_MORE_INFO' => 'Për më shumë informacion, referojuni dokumentacionit  {{{more_info_url}}} {{plural_module_name}}. {{{more_info_url_close}}}',
  'LBL_HELP_NO_HELP' => 'Nuk ka të dhëna në dispozicion',
  'LBL_HELP_PREVIEW' => 'Paneli ndihmues përmbanë informata specifike që lidhet me modulin që ju jeni duke shfletuar së bashku një lidhje me dokumentacionin përkatës (p.sh. dokumentacionin kryesor) në udhëzuesin e aplikimit për më shumë informacion.',
  'LBL_HELP_RECORD' => 'Moduli {{plural_module_name}} u lejon juve të gjurmoni shitjet individuale dhe rreshtat të cilat u përkasin atyre shitjeve nga fillimi deri në fund. Çdo regjistrim {{module_name}} përfaqëson një titull për ekipin e {{revenuelineitems_module}} si dhe është i ndërlidhur me regjistrime tjera të rëndësishme si {{quotes_module}}, {{contacts_module}} etj. -Editoni këtë fushë regjistrimesh duke klikuar në fushën individuale ose në butonin Edit. -Veprime tjera shtesë janë në dispozicion në veprimet e poshtme në menu në të djathtë të butonit Edit.',
  'LBL_HELP_RECORDS' => 'Pamja e modult të listës shfaq të gjitha të dhënat që plotëson kriteret e kërkimit aktual dhe për të cilat përdoruesit kanë qasje. Ju mund të shikoni të dhënat themelore të çdo regjistrimi brenda shtyllave në fushën e listës së parë ose klikoni emrin e regjistrimit për të hapur pamjen e regjistrimit.',
  'LBL_HELP_RECORDS_TITLE' => 'Ndihma e pamjes së listës',
  'LBL_HELP_RECORD_TITLE' => 'Ndihma e pamjes së regjistrimit',
  'LBL_HIDE' => 'Fsheh',
  'LBL_HIDE_COLUMNS' => 'Fsheh kolonat',
  'LBL_HIDE_SHOW' => 'Fshih/Shfaq',
  'LBL_HISTORICAL_SUMMARY' => 'Përmbledhje historike',
  'LBL_HISTORICAL_SUMMARY_EMAIL_FROM' => 'Email nga',
  'LBL_HISTORICAL_SUMMARY_EMAIL_TO' => 'Email deri te',
  'LBL_HISTORY_DASHLET' => 'Historia',
  'LBL_HISTORY_DASHLET_DESCRIPTION' => 'Paneli i historisë tregon takimet e zhvilluara, thirrjet e regjistruara, emailat e dërguar dhe emailat e marrë.',
  'LBL_HISTORY_DASHLET_EMAIL_PLURAL' => 'Emailet',
  'LBL_HISTORY_DASHLET_EMAIL_SINGULAR' => 'Email',
  'LBL_HISTORY_DASHLET_GROUP_BUTTON_LABEL' => 'Historia e ekipit',
  'LBL_HISTORY_DASHLET_USER_BUTTON_LABEL' => 'Historia ime',
  'LBL_HOME' => 'Ballina',
  'LBL_HONEYPOT' => 'Nëse ju jeni një person i vërtetë mos e plotësoni këtë.',
  'LBL_HOURS' => 'Orët',
  'LBL_ICON_COLUMN_1' => 'Kolona',
  'LBL_ICON_COLUMN_2' => '2 Kolona',
  'LBL_ICON_COLUMN_3' => '3 Kolona',
  'LBL_ID' => 'ID',
  'LBL_ID_FF_ADD' => 'shto',
  'LBL_ID_FF_CLEAR' => 'Fshi',
  'LBL_ID_FF_REMOVE' => 'Largo',
  'LBL_ID_FF_SELECT' => 'Selekto',
  'LBL_ID_FF_VCARD' => 'vCard',
  'LBL_IGNORE_DUPLICATE_AND_SAVE' => 'Injoro duplifikimin dhe ruaj',
  'LBL_IMAGE' => 'Image',
  'LBL_IMAGE_DELETE_CONFIRM' => 'Jeni të sigurtë që doni të fshini këtë imazh?',
  'LBL_IMPORT' => 'Importo',
  'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"Ky është një shembull i importit të dosjes e cila ofron një shembull të përmbajtjes së pritur të një dosjeje që është gati për importim." "Dosja është një presje- e palimituar.të dosjes .csv, duke përdorur  dyfishimin e -kuotave si fushë kualifikuese." "Rreshti i kryefaqës është rreshti më i lartë në dosjen dhe përmban etiketat në fushë që ju do t$#39;i shihni ato në aplikim." "Këto etiketa janë përdorur për ndarjen e të dhënave në dosjen për fushat në aplikim." "Shënime:.. Emrat e bazës së të dhënave mund të përdoret gjithashtu në rreshtin e kryefaqës. Kjo është e dobishme kur ju jeni duke përdorur phpMyAdmin ose një tjetër mjetë të bazës së të dhënave për të siguruar një listë për eksportimit e të dhënave për importim" "Rendi i kolonës nuk është kritike si procesi i importit të përputhjes me të dhënat për fushat përkatëse të bazuara në rreshtin e kryefaqës." "Për të përdorur këtë dosje si një shabllon, veproni në vijim:" "1 ​​Hiqni rreshtat e shembullit të të dhënave" "2 Hiqni ndihmën e tekstit që  jeni duke e lexuar tani". "3 Vendosni të dhënat tuaja në rreshtat e duhura dhe kolonat "" 4. Ruani dosjen në një vend të njohur në sistemin tuaj "" 5. Klikoni mbi opsionin e Importit nga menyja e veprimeve në aplikimin dhe zgjidhni dosjen për të ngarkuar "',
  'LBL_IMPORT_STARTED' => 'Importimi ka filluar',
  'LBL_IMPORT_VCARD' => 'Importo vCard',
  'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
  'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importo vCard',
  'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importo vCard [Alt+I]',
  'LBL_INACTIVE_TASKS_DASHLET' => 'Detyrat jo aktive',
  'LBL_INACTIVE_TASKS_DASHLET_COMPLETED' => 'Ka përfunduar',
  'LBL_INACTIVE_TASKS_DASHLET_DEFERRED' => 'I shtyrë',
  'LBL_INACTIVE_TASKS_DASHLET_DESCRIPTION' => 'Paneli i detyrave tregon detyrat e shtyra dhe të përfunduara.',
  'LBL_INACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL' => 'Detyrat e ekipit',
  'LBL_INACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL' => 'Detyrat e mia',
  'LBL_INBOUNDEMAIL_ID' => 'ID e emailit të dërguar përbrenda',
  'LBL_INCORRECT_PASSWORD' => 'Gabim: fjalëkalim i pasaktë',
  'LBL_INFOINLINE' => 'Info',
  'LBL_INSTANCES' => 'Instanca',
  'LBL_INSTANCE_ACTIVE' => 'Ju jeni tashmë të përdorur këtë instancë!',
  'LBL_INSTANCE_INVITE_SENT' => 'Ftesa i është dërguar',
  'LBL_INSTANCE_IN_USE' => 'Instanca në përdorim',
  'LBL_INSTANCE_SWITCH_FAILED' => 'Dështoi pët të ndrruar instancat',
  'LBL_INSTANCE_USERS' => 'Instanca e përdoruesve',
  'LBL_INVALID_412_RESPONSE' => 'Një kërkesë është duke dështuar e cila e bën aplikacionin të papërdorshëm. Ju lutemi kontaktoni mbështetjen teknike.',
  'LBL_INVALID_CREDS' => 'Kombinimi i emrit të përdoruesit/fjalëkalimit i ofruar nuk është korekt, ju lutemi provoni edhe njëherë.',
  'LBL_INVALID_CREDS_TITLE' => 'Kredencialet pavlefshme',
  'LBL_INVALID_FILE_EXTENSION' => 'Zgjerim jovalid i dosjes',
  'LBL_INVALID_GRANT' => 'Shenja juaj është jovalid ose ka skaduar. Ju lutemi logoheni edhe njëherë.',
  'LBL_INVALID_GRANT_TITLE' => 'Shenja e skaduar',
  'LBL_INVALID_REQUEST' => 'Kërkesa e bërë nuk është valide ose e shformuar. Ju lutemi kontaktoni mbështetjen teknike.',
  'LBL_INVALID_REQUEST_TITLE' => 'Kërkesë e pavlefshme',
  'LBL_INVALID_USA_PHONE_FORMAT' => 'Ju lutemi shkruani numrin e telefonit të numerikës së U.S, duke përfshirë kodin e zonës.',
  'LBL_INVITE' => 'Fto',
  'LBL_INVITED' => 'Shpikur',
  'LBL_INVITEES' => 'Të ftuarit',
  'LBL_IS_EMPTY' => 'është bosh',
  'LBL_IS_NOT_EMPTY' => 'nuk është bosh',
  'LBL_ITEM_ID' => 'Id e artikullit',
  'LBL_ITEM_SUMMARY' => 'Përmbledhja e artikullit',
  'LBL_JOB_NOTIFICATION_BODY_GENERIC' => 'Puna e skeduluar u zhvillua me sukses',
  'LBL_JOB_NOTIFICATION_DOC_LINK_TEXT' => 'Dokumentimi i konfigurimit të mundësive',
  'LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_BODY' => 'Rrjeshti i të të ardhurave tani u aktivizua në instancën tuaj Sugar dhe të gjitha të dhënat e mundësive janë procesuar. Instanca juaj tani ështv gati të përdoret me rreshtin e të të ardhurave. Për më shumë informacion rreth ndryshimeve të cilat janë bërë, ju lutemi referojuni {{doc_url}}. Sinqerisht, SugarCRM',
  'LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_SUBJECT' => 'Rrjeshti i të të ardhurave tani u aktivizua në instancën tuaj Sugar',
  'LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_BODY' => 'Moduli i parashikimeve në instancën tuaj Sugar tani është në dispozicion për tu përdorur me mundësitë. Parashikimi i rrjeshtave të të ardhurave kryen të dhëna të cilat janë fshirë dhe instanca është e gatshme për parashikime për tu krijuar dhe kryer me mundësitë. Për më shumë informacion rreth ndryshimeve të cilat janë bërë, ju lutemi referojuni {{doc_url}}. Sinqerisht, SugarCRM',
  'LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_SUBJECT' => 'Moduli i parashikimeve tani vshtë gati të përdoret me mundësistë në instancën tuaj Sugar',
  'LBL_JOB_NOTIFICATION_RLI_NOTE_BODY' => 'Rrjeshti i të të ardhurave tani u çaktivizua në instancën tuaj Sugar dhe të gjitha të dhënat e mundësive janë procesuar. Instanca juaj tani ështv gati të përdoret me rreshtin e të të ardhurave. Për më shumë informacion rreth ndryshimeve të cilat janë bërë, ju lutemi referojuni {{doc_url}}. Sinqerisht, SugarCRM',
  'LBL_JOB_NOTIFICATION_RLI_NOTE_SUBJECT' => 'Rrjeshti i të të ardhurave tani u çaktivizua në instancën tuaj Sugar',
  'LBL_JOB_NOTIFICATION_SUBJECT_GENERIC' => 'Puna e skeduluar u kompletua',
  'LBL_JS_CALENDAR' => 'Kalendari',
  'LBL_KEYBOARD_SHORTCUTS_HELP' => 'Funksionaliteti i formës - Alt +<br />I =  ndryshim (shikoni detajin)<br />U = dublikatë (shikoni detajin)<br />D = Fshije (shikoni detajin)<br />A = Ruaj = (shikoni detajin)<br />L = Anulo (shikoni detajin)<br /><br />Kërkimi dhe Navigacionit - Alt +<br />7 = input i parë në formën e Ndryshimit<br />8 = Linku i kërkimit të avancuar <br />9 = Kërkim i parë i Formularit input<br />0 = Unifikimi i kërkimit të inputit',
  'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Shkurtesat e tastierës',
  'LBL_LANGUAGE' => 'Gjuha',
  'LBL_LAST_COMMIT' => 'Kryerja e fundit:',
  'LBL_LAST_LOGIN' => 'logimi i fundit',
  'LBL_LAST_TOUCHED' => 'Prekja e fundit {{relativetime}} më {{date}} në {{time}}',
  'LBL_LAST_VIEWED' => 'Shikuar i fundit',
  'LBL_LATER' => 'Më vonë',
  'LBL_LEADS' => 'Udhëheqjet',
  'LBL_LEARNING_RESOURCES_COMMUNITY_LINK' => 'Forumet e Komunitetit',
  'LBL_LEARNING_RESOURCES_COMMUNITY_TEASER' => 'Bashkoju diskutimit, problem i zgjidhur, dhe shkëmbe idejat me përdorues të tjerë.',
  'LBL_LEARNING_RESOURCES_DESC' => 'Burimet e të mësuarit të SugarCRM',
  'LBL_LEARNING_RESOURCES_NAME' => 'Burimet e të mësuarit',
  'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_LINK' => 'Universiteti Sugar',
  'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_TEASER' => 'Bëhuni ekspert i Sugar me trajnime të përmirësuara, video, klasa, vebinare dhe çertifikatë.',
  'LBL_LEARNING_RESOURCES_SUPPORT_LINK' => 'Dokumentacion & Mbështetje',
  'LBL_LEARNING_RESOURCES_SUPPORT_TEASER' => 'Mëso detajet se si punon Sugar dhe angazhohu me mbështetjen',
  'LBL_LEARNING_RESOURCES_TITLE' => 'Burimet e të mësuarit',
  'LBL_LEGAL' => 'Legal',
  'LBL_LESS' => 'më pak',
  'LBL_LIKELY' => 'I përshtatshëm',
  'LBL_LIKELY_ADJUSTED' => 'Gjasa (e rregulluar)',
  'LBL_LINK_ACTIONS' => 'Veprimet',
  'LBL_LINK_ALL' => 'Të gjitha',
  'LBL_LINK_BUTTON' => 'Lidhje',
  'LBL_LINK_FROM_REPORT_NO_DATA' => 'S&#39;ka regjistrime të lidhura.',
  'LBL_LINK_FROM_REPORT_SUCCESS' => '{{reportCount}} regjistrimet janë lidhur.',
  'LBL_LINK_FROM_REPORT_WRONG_MODULE' => 'Raporti i zgjedhur nuk është i bazuar në llojin e saktë të modulit.',
  'LBL_LINK_MORE' => 'Më tepër',
  'LBL_LINK_NONE' => 'Asnjëra',
  'LBL_LINK_RECORDS' => 'Regjistrimet',
  'LBL_LINK_SELECT' => 'Selekto',
  'LBL_LIST' => 'Lista',
  'LBL_LISTVIEW' => 'Pamje në formë liste',
  'LBL_LISTVIEW_ACTIONS' => 'Veprimet',
  'LBL_LISTVIEW_ALL' => 'Të gjitha',
  'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Ju lutemi selektoni më pak se 10 regjistrime për të vazhduar.',
  'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'A jeni i sigurt që dëshironi të rinovoni listën e tërë?',
  'LBL_LISTVIEW_NONE' => 'Deselkto të gjitha',
  'LBL_LISTVIEW_NO_RECORDS' => 'Asnjë rezultat nuk u gjet deri tani.',
  'LBL_LISTVIEW_NO_SELECTED' => 'Ju lutemi selektoni së paku një regjistrim për të vazhduar.',
  'LBL_LISTVIEW_OPTION_CURRENT' => 'Selekto këtë faqe',
  'LBL_LISTVIEW_OPTION_ENTIRE' => 'Selekto të gjitha',
  'LBL_LISTVIEW_OPTION_SELECTED' => 'Regjistrimet e selektuara',
  'LBL_LISTVIEW_SELECTED_CLEAR' => 'Pastro zgjedhjet.',
  'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Selektuara:',
  'LBL_LISTVIEW_SELECT_ALL_RECORDS' => 'Selekto të gjitha regjistrimet',
  'LBL_LISTVIEW_SELECT_AND_EDIT' => 'Selekto dhe edito',
  'LBL_LISTVIEW_TWO_REQUIRED' => 'Ju lutemi selektoni të paktën 2 regjistrime për të vazhduar.',
  'LBL_LIST_ACCOUNT_NAME' => 'Emri i llogarisë',
  'LBL_LIST_ASSIGNED_USER' => 'Përdorues',
  'LBL_LIST_CONTACT_NAME' => 'Emri i kontaktit',
  'LBL_LIST_CONTACT_ROLE' => 'Roli i kontaktit',
  'LBL_LIST_DATE_ENTERED' => 'Data e krijuar',
  'LBL_LIST_EMAIL' => 'Email',
  'LBL_LIST_NAME' => 'Emri',
  'LBL_LIST_OF' => 'nga',
  'LBL_LIST_PHONE' => 'Telefoni',
  'LBL_LIST_RELATED_TO' => 'Në lidhje me',
  'LBL_LIST_REMOVE_EMAIL_INFO' => 'Ekziston një email shtesë në regjistrimin që ju e modifikoni. Tani është primar dhe është populuar në vijim.',
  'LBL_LIST_TEAM' => 'Grupi',
  'LBL_LIST_USER_NAME' => 'Emri i përdoruesit',
  'LBL_LOADING' => 'Ngarkimi...',
  'LBL_LOADING_FILES' => 'Ende duke ngarkuar listën e dokumentit. Ju lutemi të provoni përsëri më vonë',
  'LBL_LOADING_LANGUAGE' => 'Ngarko paketen e gjuheve',
  'LBL_LOADING_PAGE' => 'Ngarkimi i faqes, ju lutemi prisni...',
  'LBL_LOADING_PREVIEW' => 'Ngarkimi i shikimit',
  'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
  'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
  'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
  'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Kodi monkey i shtesës ordinare',
  'LBL_LOGGED_OUT' => 'Ju jeni loguar',
  'LBL_LOGIN_ADMIN_CALL' => 'Ju lutemi kontaktoni administratorin e sistemit.',
  'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Shumë përpjekje të dhështuara për kyqje.',
  'LBL_LOGIN_BUTTON_KEY' => 'L',
  'LBL_LOGIN_BUTTON_LABEL' => 'Kyqeni',
  'LBL_LOGIN_BUTTON_TITLE' => 'Kyçeni',
  'LBL_LOGIN_FORGOT_PASSWORD' => 'Keni haruar fjalëkalimin?',
  'LBL_LOGIN_FORM_LABEL' => 'Trego formën e logimit',
  'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Mund të provoni të kyqeni përsëri në',
  'LBL_LOGIN_LOGIN_TIME_DAYS' => 'Ditët.',
  'LBL_LOGIN_LOGIN_TIME_HOURS' => 'h.',
  'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'min.',
  'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'sek.',
  'LBL_LOGIN_OPTIONS' => 'Opcionet',
  'LBL_LOGIN_PASSWORD' => 'Fjalëkalimi',
  'LBL_LOGIN_SUBMIT' => 'Paraqit',
  'LBL_LOGIN_TO_ACCESS' => 'Ju lutemi hyni që të keni qasje në këtë hapsirë.',
  'LBL_LOGIN_USERNAME' => 'Emri i përdoruesit',
  'LBL_LOGIN_WELCOME_TO' => 'Mirësevini në',
  'LBL_LOGOUT' => 'Dalje',
  'LBL_LOWER_OR' => 'ose',
  'LBL_MAILMERGE' => 'Bashkim i  maileve',
  'LBL_MAILMERGE_KEY' => 'M',
  'LBL_MANAGE_SUBSCRIPTIONS' => 'Menaxho abonimet',
  'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Menaxho abonime për',
  'LBL_MAP_BUTTON' => 'Hartë',
  'LBL_MARK_AS_FAVORITES' => 'Sëno si Favoritë',
  'LBL_MASSUPDATE_DATE' => 'Selekto datën',
  'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM' => 'Grupi Global nuk mund të fshihet.',
  'LBL_MASSUPDATE_DELETE_USER_EXISTS' => 'Ky grup privat [{0}] nuk mund të fshihet derisa përdoruesi të  {1}] fshihet.',
  'LBL_MASS_UPDATE' => 'Masa e rinovuar',
  'LBL_MASS_UPDATE_ADD_FIELD' => 'Shto fushë',
  'LBL_MASS_UPDATE_EMPTY_CONFIRM' => 'Anulo për të mbajtur vlerat ekzistuese. Konfirmo për të hequr vlerat.',
  'LBL_MASS_UPDATE_EMPTY_VALUES' => 'Përditësimi do të heqë vlerat e mëposhtme:',
  'LBL_MASS_UPDATE_JOB_QUEUED' => 'Kërkesa juaj për përditësim në masë ka qenë e planifikuar.',
  'LBL_MASS_UPDATE_REMOVE_FIELD' => 'Largo fushën',
  'LBL_MASS_UPDATE_SUCCESS' => 'Regjistrimet u përditësuan me sukses.',
  'LBL_MAXIMUM_OF' => 'Maksimumi i',
  'LBL_MAX_DASHLETS_REACHED' => 'Keni arritur numrin maksimum të nënvizimeve të Sugar që administruesi ka përcaktuar. Ju lutemi largoni një nënvizim të Sugar për të shtuar një të re.',
  'LBL_MEETING' => 'Mbledhje',
  'LBL_MEETINGS' => 'Mbledhjet',
  'LBL_MEETINGS_SUBPANEL_TITLE' => 'Mbledhjet',
  'LBL_MEETING_GO_BACK' => 'Kthehu mbrapa në mbledhjen',
  'LBL_MEMBERS' => 'Antarët',
  'LBL_MEMBER_OF' => 'Anëtar i',
  'LBL_MEMORY_USAGE' => 'Përdorimi i memorisë (bit)',
  'LBL_MERGE' => 'Bashko',
  'LBL_MERGE_CONNECTORS' => 'Merr të dhëna',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_MERGE_DUPLICATES' => 'Bashko',
  'LBL_MERGE_DUPLICATES_CONFIRM' => 'Veprimi do të fshijë regjistrimet vijuese:',
  'LBL_MERGE_DUPLICATES_FAIL_PROCESS' => 'Disa nga regjistrimet e ngjajshme nuk u bashkuan siç duhet. Ndaloni për të anuluar. Konfirmoni për të vazhduar bashkimin.',
  'LBL_MERGE_DUPLICATES_PROCEED' => 'A doni të vazhdoni? Ndërptit për të anuluar. Konfirmo për të fshirë të dhënat.',
  'LBL_MERGE_DUPLICATES_REMOVE' => 'Jeni të sigurtë që doni të hiqni këtë regjistrim nga bashkimi?',
  'LBL_MERGE_DUPLICATES_REMOVE_TOOLTIP' => 'Hiq regjistrimin nga bashkimi',
  'LBL_MERGE_DUPLICATES_TITLE' => 'Bashko regjistrimet e ngjajshme',
  'LBL_MERGE_DUPLICATES_WARNING_CLOSE' => 'Bashkimi i regjistrimeve të ngjajshmeve jokomplet. Disa nga regjistrimet ngelën të pabashkuara.',
  'LBL_MERGE_NO_ACCESS' => 'Ju nuk kanë qasje për të kryer këtë veprim. Të paktën një regjistrim duhet të jetë i editueshëm.',
  'LBL_MERGE_NO_ACCESS_TO_A_FEW_RECORDS' => 'Një ose më shumë të dhëna të zgjedhura nuk mund të fshihen. Këto të dhëna janë hequr nga lista për të bashkuar.',
  'LBL_MERGE_UNSAVED_CHANGES' => 'Të gjitha ndryshimet do të largohen kur ju të kaloni në një rekord të ri primar. Jeni te sigurtë që doni të kaloni?',
  'LBL_MERIDIEM' => 'Pasditë',
  'LBL_MESSAGE_BOX_TITLE' => 'Alarm',
  'LBL_METHOD_NOT_ALLOWED' => 'HTTP metoda nuk është e lejueshme për këtë resurs. Ju lutemi kontaktoni mbështetjen teknike.',
  'LBL_METHOD_NOT_ALLOWED_TITLE' => 'Gabim në HTTP: Metoda nuk është e lejuar',
  'LBL_MINUTES' => 'Minutat',
  'LBL_MISSING_CUSTOM_DELIMITER' => 'Duhet të specifikoni një delimiter me porosi.',
  'LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_LINK_TEXT' => 'Parametrat e emailit',
  'LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_SUBJECT' => 'Mungojnë parametrat e SMTP Serverit',
  'LBL_MOBILE' => 'Celulari',
  'LBL_MOBILE_APP_VERSION' => 'Versioni i aplikacionit',
  'LBL_MOBILE_CHOOSE_DOC' => 'Zgjidh dokumentin',
  'LBL_MOBILE_CHOOSE_LOCATION' => 'Zgjidh lokacionin',
  'LBL_MOBILE_CHOOSE_PHONE' => 'Zgjidh numrin e telefonit',
  'LBL_MOBILE_CHOOSE_RECIPIENT' => 'Zgjidh pranuesin',
  'LBL_MOBILE_CHOOSE_URL' => 'Zgjidh URL',
  'LBL_MOBILE_DELETE_CONFIRM' => 'A jeni të sigurtë që dëshironi që të fshini këtë regjistrim?',
  'LBL_MOBILE_DESKTOP' => 'versioni desktop',
  'LBL_MOBILE_DETAIL_SHOW_LESS' => 'Më pak...',
  'LBL_MOBILE_DETAIL_SHOW_MORE' => 'Më tepër...',
  'LBL_MOBILE_DOC' => 'Dokument',
  'LBL_MOBILE_DOWNLOAD_COMPLETED' => 'Shkarkimi mbaroi: {{{this}}}',
  'LBL_MOBILE_DOWNLOAD_FAILED' => 'Shkarkimi dështoi\\r\\n{{{this}}}',
  'LBL_MOBILE_DOWNLOAD_STARTED' => 'Shkarkimi ka filluar: {{{this}}}',
  'LBL_MOBILE_EDIT_REL' => 'Ndrysho lidhjen',
  'LBL_MOBILE_FEEDBACK' => 'Feedback',
  'LBL_MOBILE_LOGING_OUT' => 'Ju lutemi të prisni ndërkohë që dilni...',
  'LBL_MOBILE_LOG_CALL_CONFIRM' => 'A dëshironi të ruani thirjen tuaj të fundit?',
  'LBL_MOBILE_META_SYNC_FAILED' => 'Në pamundësi për të sinkronizuar me serverin. Provoni përsëri?',
  'LBL_MOBILE_META_SYNC_FAILED_RETRY' => 'Në pamundësi për të sinkronizuar me serverin. Riprovoni?',
  'LBL_MOBILE_NO_ACTIONS_AVAILABLE' => 'asnjë veprim në dispozicion',
  'LBL_MOBILE_NO_RECORDS' => 'Nuk janë gjetur regjistrime',
  'LBL_MOBILE_PRIVACY_TERMS_CONDITIONS' => 'Privatësia, termet dhe kushtet',
  'LBL_MOBILE_PROCESSING_FILE' => 'Përgaditja e fajllit...',
  'LBL_MOBILE_PROCESSING_IMAGE' => 'Përgaditja e imazhit...',
  'LBL_MOBILE_PTR_PULL' => 'Tërhiqe posht për të rifreskuar...',
  'LBL_MOBILE_PTR_RELEASE' => 'Lësho për të rifreskuar...',
  'LBL_MOBILE_RELOGIN_BUTTON' => 'Ri-kycu',
  'LBL_MOBILE_SEARCH_TEAMS' => 'Ekipet e kërkimit',
  'LBL_MOBILE_SELECT_TEAMS' => 'Selekto grupet',
  'LBL_MOBILE_SERVER_URL' => 'Server URL:',
  'LBL_MOBILE_SERVER_VERSION' => 'Versioni i serverit',
  'LBL_MOBILE_SHOW_MORE' => 'Shih më shumë...',
  'LBL_MOBILE_SHOW_MORE_TOP' => 'Shih më shumë...',
  'LBL_MOBILE_SUPPORT' => 'Mbështetje',
  'LBL_MOBILE_TUTORIAL_CONTROL_PANEL' => 'Përdor shigjetat më poshtë për një turë të shpejtë përgjatë komponentave kyçe të kësaj menyje.',
  'LBL_MOBILE_TUTORIAL_DETAIL_BACK' => 'Shko tek faqja e mëparshme.',
  'LBL_MOBILE_TUTORIAL_DETAIL_BACK_TABLET' => 'Shko mbrapa.',
  'LBL_MOBILE_TUTORIAL_DETAIL_CARD' => 'Informata më kryesore për një regjistrim',
  'LBL_MOBILE_TUTORIAL_DETAIL_FOLLOW' => 'Ndiq/mos ndiq regjistrim.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO' => 'Kjo është faqja e detajeve',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO_TEXT' => 'Shikimi detaj hapet në anën e djathtë të ekranit tuaj.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO_TITLE' => 'Shikim i detajuar',
  'LBL_MOBILE_TUTORIAL_DETAIL_RECORD_ACTIONS' => 'Veprimet në dispozicion në një regjistrim',
  'LBL_MOBILE_TUTORIAL_DETAIL_RELATE_LINK' => 'Kliko të hapësh regjistrimin e lidhur.',
  'LBL_MOBILE_TUTORIAL_DETAIL_RIGHT_ACTION' => 'Shiko informacione shtesë apo redakto një regjistrim',
  'LBL_MOBILE_TUTORIAL_DETAIL_SHOW_MORE' => 'Kliko të zgjerosh informacionin detaj.',
  'LBL_MOBILE_TUTORIAL_HOME_CREATE' => 'Veprimet në dispozicion për të parë.',
  'LBL_MOBILE_TUTORIAL_HOME_END' => 'Gëzoji të gjitha tiparet e reja!',
  'LBL_MOBILE_TUTORIAL_HOME_FAVORITES_BTN' => 'Filtroni listën për të treguar të dhënat e mia të preferuara.',
  'LBL_MOBILE_TUTORIAL_HOME_FAVORITES_ICON' => 'Shënoje si një rekord të preferuar.',
  'LBL_MOBILE_TUTORIAL_HOME_GRIP' => 'Veprimet në dispozicion në një rekord.',
  'LBL_MOBILE_TUTORIAL_HOME_INTRO' => 'Mirë se vini në SugarCRM.<br /><br />Na lejoni që të nxjerrim në pah disa karakteristika të reja ...',
  'LBL_MOBILE_TUTORIAL_HOME_LOGO' => 'Navigacion i menus kryesore',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_DESKTOP' => 'Hape Sugar në shfletuesin e internetit.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO' => 'Kjo është menu Ballina',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO_TEXT' => 'Manyja kryesore hapet në anën e majtë të ekranit tuaj.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO_TITLE' => 'Shikimi i menysë kryesore.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_LOGO' => 'Mbyll menu ballinën',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_MODULES' => 'Shiko një modul të veçantë.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_PROFILE' => 'Shihni profilin tuaj',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_SETTINGS' => 'Rregulloje aplikimin.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_TOUR' => 'Qasju turës në çdo kohë.',
  'LBL_MOBILE_TUTORIAL_HOME_MY_ITEMS_BTN' => 'Filtroni listën për të treguar të dhënat e caktuara për mua.',
  'LBL_MOBILE_TUTORIAL_HOME_RECENT' => 'Të dhënat e modifikuara së fundmi.',
  'LBL_MOBILE_TUTORIAL_HOME_SEARCH' => 'Kërkimi globale për të dhëna.',
  'LBL_MOBILE_TUTORIAL_HOME_UPCOMING' => 'Ngjarjet e ardhshme e mia duke filluar nga sot.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_ACTIONS' => 'Zgjidh veprimet e caktuara për të parë dhe për të kryer.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_CREATE' => 'Mbylle menu plus',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_INTRO' => 'Kjo është menu plus.',
  'LBL_MOBILE_UNLINK_CONFIRM' => 'A jeni të sigurtë që doni të hiqni linkun këtij regjistrimi?',
  'LBL_MOBILE_UPLOAD_IN_PROGRESS' => 'Ngarkim i fajlit...',
  'LBL_MOBILE_UPLOAD_SUCCESS' => 'Fajli i ngarkua me sukses',
  'LBL_MOBILE_WAIT' => 'Ju lutemi të prisni...',
  'LBL_MODIFIED' => 'Modifikuar nga',
  'LBL_MODIFIED_BY_USER' => 'Modifikuar nga përdoruesi',
  'LBL_MODIFIED_ID' => 'Modifikuar nga Id',
  'LBL_MODIFIED_NAME' => 'Modifikuar nga emri',
  'LBL_MODIFIED_USER' => 'Modifikuar nga përdoruesi',
  'LBL_MODIFY_CURRENT_SEARCH' => 'modifiko kërkimin aktual',
  'LBL_MODULE' => 'Modul',
  'LBL_MODULE_ALL' => 'Të gjitha',
  'LBL_MODULE_ATTACHMENTS_TITLE' => '{{module}} bashkangjitje',
  'LBL_MODULE_FILTER' => 'Filtro sipas',
  'LBL_MODULE_NAME' => 'Emri i modulit',
  'LBL_MODULE_TYPE' => 'Lloji:',
  'LBL_MONITOR_ID' => 'Id e monitorit',
  'LBL_MONTH_TIMEPERIOD_FORMAT' => '{0}',
  'LBL_MORE' => 'Më tepër',
  'LBL_MOREDETAIL' => 'Më tepër detaje',
  'LBL_MORE_ACTION' => 'Më shumë veprime',
  'LBL_MORE_HISTORY' => 'Më shumë histori...',
  'LBL_MORE_MODULES' => 'Më shumë module',
  'LBL_MY_ACCOUNT' => 'Parametrat e mia',
  'LBL_MY_AREA_LINKS' => 'Lidhjet e  zonës sime',
  'LBL_NAME' => 'Emri',
  'LBL_NAVIGATE_TO_REPORTS' => 'Ju jeni duke lëvizur në modulin e raportet. Ndryshimet e tua për panelet nuk do të ruhen. Vazhdo?',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => 'Krijo',
  'LBL_NEW_BUTTON_TITLE' => 'Krijo [Alt+N]',
  'LBL_NEW_PAGE_FEEDBACK' => 'Keni krijuar një faqe të re. Mund të shtoni përmbatjen me opcionin Shto nënvizim të Sugar.',
  'LBL_NEW_PASSWORD1' => 'Fjalëkalim i ri',
  'LBL_NEW_PASSWORD2' => 'Konfirmo fjalëkalimin',
  'LBL_NEW_USER_PASSWORD_1' => 'Ndryshimi i fjalëkalimit u krye me sukses',
  'LBL_NEW_WEB_VERSION' => 'Një version i ri i këtij aplikacioni është në dispozicion. Dëshironi të përditësoni?',
  'LBL_NEXT_BUTTON_LABEL' => 'Vijues',
  'LBL_NEXT_FRIDAY' => 'të premten e ardhëshme',
  'LBL_NEXT_MONDAY' => 'të hënën e ardhëshme',
  'LBL_NEXT_MONTH' => 'muajin e ardhshëm',
  'LBL_NEXT_TIMEPERIOD' => 'Periudha kohore e ardhshme',
  'LBL_NEXT_WEEK' => 'javën e ardhëshme',
  'LBL_NEXT_YEAR' => 'vitin e ardhshëm',
  'LBL_NO' => 'Jo',
  'LBL_NONE' => 'asnjëra',
  'LBL_NOTES' => 'Shënimet',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Shënimet',
  'LBL_NOTIFICATIONS' => 'Shënimet',
  'LBL_NOT_AUTHORIZED' => 'Nuk jeni të autorizuar të shihni këtë regjistrim',
  'LBL_NOT_AVAILABLE' => 'N/A',
  'LBL_NO_ACCESS' => 'Nuk keni qasje',
  'LBL_NO_ACCESS_LOWER' => 'Ska qasje',
  'LBL_NO_ACTION' => 'Nuk ekziston veprim me atë emër',
  'LBL_NO_DATA' => 'Nuk ka të dhëna',
  'LBL_NO_DATA_AVAILABLE' => 'Asnjë rezultat',
  'LBL_NO_FIELD_ACCESS' => 'Ska qasje',
  'LBL_NO_FLASH_PLAYER' => 'Ju ose keni Abobe Flash të fikur ose jeni duke përdorur një version të vjetër të Flash Player Adobe. Për të marrë versionin e fundit të Flash Player, klikoni këtu.',
  'LBL_NO_IMAGE' => 'Pa figurë',
  'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Nuk ka asnjë fushë në dispozicion për operacionin masiv të azhurnimit',
  'LBL_NO_PDF_TEMPLATE' => 'Nuk u gjet PDF shabllon.',
  'LBL_NO_RECORDS_FOUND' => 'O regjistrime të gjetura',
  'LBL_NUMBER_OF_COLUMNS' => 'Selekto numrin e kolonave',
  'LBL_OBJECT_IMAGE' => 'imazhi i objektit',
  'LBL_OC_DEFAULT_STATUS' => 'pasive',
  'LBL_OC_STATUS' => 'Statusi i klinetëve jashtë linje',
  'LBL_OC_STATUS_TEXT' => 'Tregoni nëse është apo nuk është përdoruesi aktual në gjendje që të përdorë nje klient Offline.',
  'LBL_OFFLINE_CLEAN_UP_PROMPT' => 'Ky veprim do të fshijë të dhënat që ju nuk u jeni qasur që kohë. Të vazhdohet?',
  'LBL_OFFLINE_CLEAR_DB' => 'Pastimi i magazinimit...',
  'LBL_OFFLINE_CLEAR_DB_PROMPT' => 'A dëshironi të fshini të gjitha të dhënat nga magazinim lokal?',
  'LBL_OFFLINE_COMPACT_DB' => 'Magazinimi kompakt...',
  'LBL_OFFLINE_DB_CLEANING_COMPLETED' => 'Pastimi përfundoi',
  'LBL_OFFLINE_DB_CLEANING_IN_PROGRESS' => 'Pastimi i magazinimit...',
  'LBL_OFFLINE_DB_SIZE' => 'Madhësia e databazës',
  'LBL_OFFLINE_DELETED' => 'Regjistrimi nuk u gjet.',
  'LBL_OFFLINE_DELETED_RELATED' => 'Regjistrimi i ndërlidhur nuk u gjet. Ndoshta është fshirë ose nuk është lidhur.',
  'LBL_OFFLINE_DISABLED' => 'U pamundësua moduli offline',
  'LBL_OFFLINE_DISABLE_PROMPT' => 'A doni të fikni offline mbështetjen? Të gjitha ndryshimet në pritje të sinkronizimit do të jenë humbur.',
  'LBL_OFFLINE_ENABLED' => 'U mundësua offline',
  'LBL_OFFLINE_ENABLE_PROMPT' => 'Jeni të sigurtë që doni të kthehet në mbështetjen offline?',
  'LBL_OFFLINE_LAST_SYNC_TS' => 'Përpjekja e fundit për sinkronizim: {{ts}}',
  'LBL_OFFLINE_MERGE_DATA_CONFIRM' => 'Dikush e ka redaktuar të njëjtin regjistrim në server. Konfirmo që të auto-përputhni ndryshimet tuaja ose të refuzoni ti hidhni ato.',
  'LBL_OFFLINE_MODE' => 'Moduli jo në linjë',
  'LBL_OFFLINE_PREFETCHING' => 'Ngarkim i regjistrimeve...',
  'LBL_OFFLINE_PREFETCHING_EST_TIME' => 'Koha e ngelur është rreth {{estimatedTime}}...',
  'LBL_OFFLINE_PREFETCHING_MODULE' => 'Ngarkim {{module}} {{progressValue}}...',
  'LBL_OFFLINE_PREFETCHING_MODULE_COMPLETE' => 'Ngarkimi i {{module}} përfundoi',
  'LBL_OFFLINE_PREFETCH_ACTION' => 'Shkarko regjistrimet tuaja...',
  'LBL_OFFLINE_PREFETCH_ERROR' => 'Gabim gjatë shkarkimit të regjistrimeve',
  'LBL_OFFLINE_PREFETCH_FIRST_PROMPT' => 'Dëshironi që të dhënat tuaja të caktuara, preferuara dhe të ndjekura të shkarkohen tani offline? Një lidhje e shpejtë është e rekomanduar sepse ky operim mund të marri kohë. Ju mund të shkarkoni më vonë nga Menuja kryesore > Offline',
  'LBL_OFFLINE_PREFETCH_PROMPT' => 'Shkarkimi i të dhënave të caktuara, preferuara dhe të ndjekura për qasje offline mund të marrë kohë për të përfunduar. Një lidhje e shpejtë është e rekomanduar. Dëshironi të vazhdoni?',
  'LBL_OFFLINE_PREFETCH_SUCCESS' => 'Regjistrimet u shkarkuan me sukses',
  'LBL_OFFLINE_RECORDS_PER_MODULE' => 'Regjistrime për modul',
  'LBL_OFFLINE_ROLLBACK_FAILED' => 'Rikthimi dështoi',
  'LBL_OFFLINE_ROLLBACK_PROMPT' => 'A doni të riktheni këtë ndryshim?',
  'LBL_OFFLINE_ROLLBACK_SUCCESS' => 'Rikthimi u përfundua',
  'LBL_OFFLINE_SERVER_FETCH' => 'Duke ngarkuar nga server ...',
  'LBL_OFFLINE_SETTINGS' => 'Debug cilësimet',
  'LBL_OFFLINE_STATS' => 'Statistikat e magazinimit',
  'LBL_OFFLINE_STATUS_BAD_NETWORK' => 'Në pamundësi për të arritur në server.',
  'LBL_OFFLINE_STATUS_NO_PENDING_TX' => 'Nuk ka ndryshime në pritje të sinkronizimit.',
  'LBL_OFFLINE_STATUS_OFFLINE' => 'Pajisja është offline.',
  'LBL_OFFLINE_STATUS_ONLINE' => 'Pajisja është online.',
  'LBL_OFFLINE_STATUS_PENDING_TX' => 'Ndryshimet janë në pritje të sinkronizimit.',
  'LBL_OFFLINE_STATUS_SYNC_FAILED' => 'Përpjekja e fundit për sinkronizim dështoi. Kontrolloni log transaksionin.',
  'LBL_OFFLINE_SYNC_IN_PROGRESS' => 'Sinkronizimi në progres ...',
  'LBL_OFFLINE_TOTAL_RECORDS_COUNT' => 'Numri total i regjistrimeve',
  'LBL_OFFLINE_TRANSACTION_SYNCED' => 'Transaksionit u sinkronizua.',
  'LBL_OK' => 'OK',
  'LBL_OLD_ACCOUNT_LINK' => 'Llogari e vjetër',
  'LBL_ONLY_IMAGE_ATTACHMENT' => 'Vetëm lloji i imazhit të bashkangjitjes mund të fiksohet',
  'LBL_OPENALL_BUTTON_KEY' => 'O',
  'LBL_OPENALL_BUTTON_LABEL' => 'Hap të gjitha',
  'LBL_OPENALL_BUTTON_TITLE' => 'Hap të gjitha [Alt+O]',
  'LBL_OPENTO_BUTTON_KEY' => 'T',
  'LBL_OPENTO_BUTTON_LABEL' => 'I hap',
  'LBL_OPENTO_BUTTON_TITLE' => 'I hap: [Alt+T]',
  'LBL_OPEN_ITEMS' => 'Artikujtë e hapur:',
  'LBL_OPERATOR_IN_TEXT' => 'është një nga vijueset:',
  'LBL_OPERATOR_NOT_IN_TEXT' => 'nuk është një nga vijueset:',
  'LBL_OPPORTUNITIES' => 'Mundësitë',
  'LBL_OPPORTUNITY' => 'Mundësi',
  'LBL_OPPORTUNITY_METRICS' => 'Metrika mundësie<br />.',
  'LBL_OPPORTUNITY_NAME' => 'Emri i mundësisë',
  'LBL_OPTIONAL' => 'fakultativ',
  'LBL_OPTIONS' => 'Opcionet',
  'LBL_OPT_OUT_FLAG_PRIMARY' => 'C$#39;kycja e emailit primar',
  'LBL_OR' => 'OSE',
  'LBL_ORG_CHART' => 'Diagram i organizatës',
  'LBL_ORG_CHART_DESC' => 'Shfaq strukturën e të punësuarve në organizatën tuaj.',
  'LBL_ORG_CHART_TOOLTIP_NODES' => 'Trego të gjitha nyjet',
  'LBL_ORG_CHART_TOOLTIP_TOGGLE' => 'Orientim nyjëzor',
  'LBL_ORG_CHART_TOOLTIP_ZOOM' => 'Zmadhoje të përshtatet',
  'LBL_OUTBOUND_EMAIL_ADD_SERVER' => 'Shto server',
  'LBL_OVERDUE' => 'I/E vonuar',
  'LBL_OVERWRITE_POPULATED_DATA_FROM' => 'Nga:',
  'LBL_OVERWRITE_POPULATED_DATA_TO' => 'Deri te:',
  'LBL_PAGE_NAME' => 'Emri i faqes',
  'LBL_PANEL_ADVANCED' => 'Më tepër informacione',
  'LBL_PANEL_ASSIGNMENT' => 'Tjetër',
  'LBL_PANEL_BODY' => 'Pasqyra',
  'LBL_PANEL_DEFAULT' => 'I papërcaktuar',
  'LBL_PARENT_TYPE' => 'Lloji mëmë',
  'LBL_PASSWORD' => 'Fjalëkalimi',
  'LBL_PASSWORD_REQUEST_ERROR' => 'Ka një problem në marrjen e kombinimit të emrit të përdoruesit dhe të postës elektronike.',
  'LBL_PASSWORD_REQUEST_SENT' => 'Kërkesa juaj është paraqitur',
  'LBL_PASSWORD_UPDATE_GENERIC_ISSUE' => 'Gabim. Ka problem gjatë përditësimit të fjalëkalimit për këtë përdorues.',
  'LBL_PA_PRODEF_HAS_PENDING_PROCESSES' => 'Ju nuk mund ta fshini këtë Definim Procesi sepse keni procese në pritje të cilat operojnë.',
  'LBL_PDF_EMAIL' => 'Email PDF',
  'LBL_PDF_VIEW' => 'Shkarko PDF',
  'LBL_PENDING_NOTIFICATIONS' => 'Shënimet',
  'LBL_PERCENTAGE_SYMBOL' => '%',
  'LBL_PHASE' => 'Gama:',
  'LBL_PICTURE_FILE' => 'Fotografia',
  'LBL_PLANNED_ACTIVITIES_DASHLET' => 'Aktivitete të planifikuara',
  'LBL_PLANNED_ACTIVITIES_DASHLET_CONFIRM_CLOSE' => 'Jeni të sigurtë që doni të shënoni {0} si të mbyllur?',
  'LBL_PLANNED_ACTIVITIES_DASHLET_DESCRIPTION' => 'Paneli i aktiviteteve të planifikuara tregon mbledhjet dhe telefonatat e programuara.',
  'LBL_PLANNED_ACTIVITIES_DASHLET_FUTURE_BUTTON_LABEL' => 'E ardhmja',
  'LBL_PLANNED_ACTIVITIES_DASHLET_GROUP_BUTTON_LABEL' => 'Aktivitete të ekipit',
  'LBL_PLANNED_ACTIVITIES_DASHLET_HELD_ACTIVITY' => 'I mbajtur',
  'LBL_PLANNED_ACTIVITIES_DASHLET_TODAY_BUTTON_LABEL' => 'Sot',
  'LBL_PLANNED_ACTIVITIES_DASHLET_USER_BUTTON_LABEL' => 'Aktivitetet e mia',
  'LBL_PLEASE_SELECT' => 'Ju lutemi selektoni',
  'LBL_PLUGINS_DESC' => 'Leximi rrëth prizës të karakteristikave brenda Dokumentacionit e prizave.',
  'LBL_PLUGINS_LOTUS_TITLE' => 'Prizat e Sugar për Lotus NotesTM',
  'LBL_PLUGINS_TITLE' => 'Prizat e Sugar për Microsoft OfficeTM',
  'LBL_PLUGIN_EXCEL_DESC' => 'Integrimi i Sugarit me faqët e shpërndara për analizë më të mirë të metrikës kryesore.',
  'LBL_PLUGIN_EXCEL_NAME' => 'Priza e Sugar për Excel.',
  'LBL_PLUGIN_LOTUS_DESC' => 'Integro Sugar me Lotus Notes.',
  'LBL_PLUGIN_LOTUS_NAME' => 'Priza e Sugar për Lotus Notes',
  'LBL_PLUGIN_OUTLOOK_DESC' => 'Integro Sugar emailin dhe informacionin e kalendarit me Microsoft Outlook.',
  'LBL_PLUGIN_OUTLOOK_NAME' => 'Priza e Sugarit për Outlook',
  'LBL_PLUGIN_WORD_DESC' => 'Automatikisht populloni informacione nga SugarCRM në formë të letrave, postës direkte dhe dokumentet e tjera të Microsoft.',
  'LBL_PLUGIN_WORD_NAME' => 'Priza e Sugar për fjalën',
  'LBL_PLUS_INLINE' => 'shto',
  'LBL_PMSE_ALL_PROCESSES_LABEL' => 'Të gjitha proceset',
  'LBL_PMSE_BUSINESS_RULES_DASHLET' => 'Rregullat e procesit të biznesit',
  'LBL_PMSE_BUSINESS_RULES_DASHLET_DESCRIPTION' => 'Faqosjet biznesore të proceseve tregojnë templejta që mund të përdoret brenda Autorit të Procesit.',
  'LBL_PMSE_CANCELLED_STATUS' => 'Anuluar',
  'LBL_PMSE_COMPLETED_STATUS' => 'Ka përfunduar',
  'LBL_PMSE_EMAIL_TEMPLATES_DASHLET' => 'Proceso email templejtat',
  'LBL_PMSE_EMAIL_TEMPLATES_DASHLET_DESCRIPTION' => 'Email templejtat e proceseve tregojnë templejta që mund të përdoret brenda Autorit të Procesit.',
  'LBL_PMSE_ERROR_STATUS' => 'Gabim',
  'LBL_PMSE_IN_PROGESS_STATUS' => 'Në progres',
  'LBL_PMSE_PROCESSES_DASHLET' => 'Proceset',
  'LBL_PMSE_PROCESSES_DASHLET_DESCRIPTION' => 'Faqosjet e proceseve tregojnë templejta që mund të përdoret brenda Autorit të Procesit.',
  'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET' => 'Definimet e procesit',
  'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET_DESCRIPTION' => 'Definimet e proceseve tregojnë templejta që mund të përdoret brenda Autorit të Procesit.',
  'LBL_PMSE_PROCESS_STATUS_CHART_DESCRIPTION' => 'Përshkrimi i statuseve të proceseve',
  'LBL_PMSE_PROCESS_STATUS_CHART_NAME' => 'Përmbledhja e statuseve të proceseve',
  'LBL_PMSE_PROCESS_USERS_CHART_DESCRIPTION' => 'Aktivitete në peng për nga procesi',
  'LBL_PMSE_PROCESS_USERS_CHART_NAME' => 'Aktivitete në peng për nga procesi',
  'LBL_PMSE_PROCESS_USERS_CHART_NAME_RECORD' => 'Aktivitete në peng',
  'LBL_PMSE_SETTINGS' => 'Parametra',
  'LBL_PMSE_TERMINATED_STATUS' => 'E ndërpritur',
  'LBL_PORTAL_AUTH_FAILED' => 'Vërtetimi i klientit dështoi.',
  'LBL_PORTAL_AUTH_FAILED_TITLE' => 'Klienti pavlefshme',
  'LBL_PORTAL_ERROR' => 'Gabim',
  'LBL_PORTAL_INVALID_CREDS' => 'Kombinimi i emrit të përdoruesit/fjalëkalimit i ofruar nuk është korekt, ju lutemi provoni edhe njëherë.',
  'LBL_PORTAL_INVALID_CREDS_TITLE' => 'Kredencialet pavlefshme',
  'LBL_PORTAL_INVALID_GRANT' => 'Shenja juaj është jovalid ose ka skaduar. Ju lutemi logoheni edhe njëherë.',
  'LBL_PORTAL_INVALID_GRANT_TITLE' => 'Shenja e skaduar',
  'LBL_PORTAL_INVALID_REQUEST' => 'Kërkesa e bërë nuk është valide ose e shformuar. Ju lutemi kontaktoni mbështetjen teknike.',
  'LBL_PORTAL_INVALID_REQUEST_TITLE' => 'Kërkesë e pavlefshme',
  'LBL_PORTAL_LOADING' => 'Ngarkim',
  'LBL_PORTAL_LOGIN_FORGOTPASSWORD' => 'Ju duhet të kontaktoni administratorin e Sugar për të resetuar fjalëkalimin tuaj.',
  'LBL_PORTAL_LOGIN_PASSWORD' => 'Fjalëkalimi',
  'LBL_PORTAL_LOGIN_USERNAME' => 'Emri i përdorimit',
  'LBL_PORTAL_METHOD_NOT_ALLOWED' => 'HTTP metoda nuk është e lejueshme për këtë resurs. Ju lutemi kontaktoni mbështetjen teknike.',
  'LBL_PORTAL_METHOD_NOT_ALLOWED_TITLE' => 'Gabim në HTTP: Metoda nuk është e lejuar',
  'LBL_PORTAL_MIN_MODULES' => 'Në minimum, ju duhet të keni rastet,bugs ose njohuri për modul skriptet për të përdorur këtë aplikacion.',
  'LBL_PORTAL_NOT_ENABLED_MSG' => 'Na vjen keq, por ky tipar nuk është në dispozocion në këtë kohë.',
  'LBL_PORTAL_OFFLINE' => 'Na vjen keq por aplikacioni nuk është në dispozicion në këtë kohë. Ju lutemi kontaktoni administratorin e faqes.',
  'LBL_PORTAL_PAGE_NOT_AVAIL' => 'Faqja nuk ështe në dispozicion',
  'LBL_PORTAL_PRECONDITION_MISSING' => 'Kërkesa dështoi,ose,parametri është i zhdukur/i pa vlefshëm. Ju lutemi kontaktoni mbështetjen teknike.',
  'LBL_PORTAL_PRECONDITION_MISSING_TITLE' => 'Gabim në HTTP:',
  'LBL_PORTAL_REQUEST_TIMEOUT' => 'Kërkesës i kaloi afati.',
  'LBL_PORTAL_REQUEST_TIMEOUT_TITLE' => 'Afati i kërkesës',
  'LBL_PORTAL_RESOURCE_UNAVAILABLE' => 'Resurset nuk janë në dispozicion.',
  'LBL_PORTAL_RESOURCE_UNAVAILABLE_TITLE' => 'Gabim në HTTP: I ndaluar',
  'LBL_PORTAL_ROUTE_ERROR' => 'Çështja e ngarkimit të modulit. Ju lutemi provoni edhe njëherë ose kontaktoni mbështetjen teknike.',
  'LBL_PORTAL_SAVING' => 'Ruatje',
  'LBL_PORTAL_SEARCH' => 'Kërkoni nga baz të emrit, numrit',
  'LBL_PORTAL_SEARCH_RESULTS_TITLE' => 'Trego rezultatet e kërkimit për "{query}"',
  'LBL_PORTAL_SIGNUP' => 'Përfaqësuesi i shërbimit ndaj klientit do t&#39;ju kontaktojë juve shkurtimisht që ju të konfiguroni llogarinë tuaj.',
  'LBL_PORTAL_SIGNUP_COMPANY' => 'Kompania',
  'LBL_PORTAL_SIGNUP_COUNTRY' => 'Shteti',
  'LBL_PORTAL_SIGNUP_EMAIL' => 'Email',
  'LBL_PORTAL_SIGNUP_FIRST_NAME' => 'Emër',
  'LBL_PORTAL_SIGNUP_JOBTITLE' => 'Titulli i punës',
  'LBL_PORTAL_SIGNUP_LAST_NAME' => 'Mbiemër',
  'LBL_PORTAL_SIGNUP_PHONE' => '(###) ###-#### (fakultativ)',
  'LBL_PORTAL_SIGNUP_PROCESS' => 'Regjistrimi',
  'LBL_PORTAL_SIGNUP_STATE' => 'Shteti',
  'LBL_PORTAL_SIGNUP_TITLE' => 'Faleminderit për regjistrimin tuaj!',
  'LBL_PORTAL_THEME' => 'Tema e portalit',
  'LBL_PORTAL_TOUR_RECORD_ADD_NOTE' => 'Kliko këtu për të shtuar një shënim për këtë regjistrim.',
  'LBL_PORTAL_TOUR_RECORD_DETAILS' => 'Pamja e regjistrimeve ju lejon për të parë detajet e një regjistrimi.',
  'LBL_PORTAL_TOUR_RECORD_NOTES' => 'Shënimet ju lejojnë të bashkëpunoni me përdorues të tjerë të portalit dhe përfaqësues të mbështetjes.',
  'LBL_PORTAL_TOUR_RECORD_VIEW_NOTE' => 'Kliko në këto ikona për të parë detajet e shënimeve të bashkangjitura.',
  'LBL_PORTAL_UNAUTHORIZED' => 'Na vjen keq, por si duket ju nuk jeni të autorizuar të keni qasje në këtë resurs.',
  'LBL_PORTAL_UNAUTHORIZED_TITLE' => 'Gabim në HTTP: I paautorizuar',
  'LBL_PORTAL_WELCOME_INFO' => 'Portali Sugar është një kornizë e cila siguron kohën-reale të pamjes së rasteve, gabimet dhe gazetat etj për klientët. Kjo është një ndërfaqë e jashtme që përballet me Sugar që mund të vendoset brenda çdo faqë të internetit. Qëndroni më tepër për konsumatorët e karakteristikave të vetë shërbimit si Menaxhim të Projektit dhe forume në njoftimet e ardhmës tonë.',
  'LBL_PORTAL_WELCOME_TITLE' => 'Mirësevini në  Sugar Portalin 5.1.0',
  'LBL_POSTAL_CODE' => 'Kodi postal',
  'LBL_POWERED_BY_SUGARCRM' => 'Mundësuar nga SugarCRM',
  'LBL_PRECONDITION_MISSING' => 'Kërkesa dështoi,ose,parametri është i zhdukur/i pa vlefshëm. Ju lutemi kontaktoni mbështetjen teknike.',
  'LBL_PRECONDITION_MISSING_TITLE' => 'Gabim:',
  'LBL_PREFERRED_LANGUAGE' => 'Gjuha e preferuar',
  'LBL_PREVIEW' => 'Shikim paraprak',
  'LBL_PREVIEW_BWC_TOOLTIP' => 'Modulet e trashigimisë nuk mund të shikohen',
  'LBL_PREVIEW_DISABLED_ATTACHMENT' => 'Shfaqja e pamundësuar: Nuk ka të dhëna',
  'LBL_PREVIEW_DISABLED_DELETED_OR_NO_ACCESS' => 'Shfaqja e pamundësuar: Regjistrimi është hequr ose ska qasje për të regjistruar',
  'LBL_PREVIEW_DISABLED_NO_ACCESS' => 'Shfaqja e pamundësuar: Nuk ka qasje për të regjistruar',
  'LBL_PREVIEW_DISABLED_NO_RECORD' => 'Shfaqja e pamundësuar: Nuk ka të dhëna në dispozicion',
  'LBL_PREVIEW_DISABLED_SAME_RECORD' => 'Shfaqja e pamundësuar: Në shikim si regjistrim aktual<br />.',
  'LBL_PREVIOUS_CURRENT_NEXT_TIMEPERIODS' => 'E mëparshme, aktuale, e ardhshme',
  'LBL_PREVIOUS_TIMEPERIOD' => 'Periudha kohore e mëparshme',
  'LBL_PRIMARY_ADDRESS' => 'Adresa primare',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Adresë primare e qytetit',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresë primare e shtetit',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresë primare e kodit postal',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Adresë primare e shtetit',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Adresë primare e rrugës',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adresa  e rrugës primare 2',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adresa e rrugës primare 3',
  'LBL_PRINT' => 'Shtyp',
  'LBL_PROCESSING_REQUEST' => 'Procesimi...',
  'LBL_PRODUCTS' => 'Produktet',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Artikujt e rreshtave të cituar',
  'LBL_PRODUCT_BUNDLES' => 'p=Pako të produkteve',
  'LBL_PRODUCT_TEMPLATES' => 'Shabllone produkti',
  'LBL_PROFILE' => 'Profili',
  'LBL_PROJECTS' => 'Projektet',
  'LBL_PROJECT_MINUS' => 'Hiq',
  'LBL_PROJECT_PLUS' => 'Shto',
  'LBL_PROJECT_TASKS' => 'Detyrat e projektit',
  'LBL_PROSPECTS' => 'synimet',
  'LBL_PRO_DELETE_CONFIRMATION' => 'A jeni të sigurtë që dëshironi të fshini këtë regjistrim?',
  'LBL_PRO_DISABLE' => 'Përditësim',
  'LBL_PRO_DISABLE_CONFIRMATION' => 'Jeni të sigurt se dëshironi të çaktivizoni këtë regjistrim?',
  'LBL_PRO_ENABLE' => 'Përditësim',
  'LBL_PRO_ENABLE_CONFIRMATION' => 'Jeni të sigurt se dëshironi të aktivizoni këtë regjistrim?',
  'LBL_QUARTER_TIMEPERIOD_FORMAT' => '{1} Q{0}',
  'LBL_QUERY_CHILD' => 'Nën-pyetja valide',
  'LBL_QUERY_ERROR' => 'Gabim!',
  'LBL_QUERY_HASH' => 'SQL Hash',
  'LBL_QUERY_VALID' => 'Valide',
  'LBL_QUESTION_MARK' => '?',
  'LBL_QUICKEDIT_NODEFS_NAVIGATION' => 'Navigacioni...',
  'LBL_QUICK_CREATE_MENU' => 'Shpejt krijo meny',
  'LBL_QUICK_CREATE_TITLE' => 'Krijim i shpejtë',
  'LBL_QUOTES' => 'Kuotat',
  'LBL_QUOTES_SHIP_TO' => 'Kuotat ( transport deri)',
  'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
  'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Krijo mundësi nga kuota',
  'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Krijo mundësi nga kuota [Alt+O]',
  'LBL_RECENTLY_UPDATED' => 'Përditësuar kohëve të fundit',
  'LBL_RECENTS' => 'Të fundit',
  'LBL_RECOMMENDED_INVITES' => 'Ftesat e rekomanduara',
  'LBL_RECORD_BODY' => 'Biznes Karta',
  'LBL_RECORD_DELETED' => '(regjistrimi u fshi)',
  'LBL_RECORD_HEADER' => 'Regjistrim i lartë',
  'LBL_RECORD_NOT_FOUND' => 'Regjistrimi nuk u gjet.',
  'LBL_RECORD_SAVED' => 'Regjistrimi u ruajt.',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Ju me sukses keni krijuar këtë regjistrim, por nuk keni të drejtë ti qaseni kërij regjistrimi.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Ju me sukses keni krijuar {{moduleSingularLower}} {{full_name}}.',
  'LBL_RECORD_SHARE_BUTTON' => 'Ndaj',
  'LBL_RECORD_SHOWMORE' => 'Trego më shumë',
  'LBL_REDIRECT_URL' => 'Përcjellja e URL:',
  'LBL_REFINE_LIST' => 'Pastrojë listen',
  'LBL_RELATED' => 'Në lidhje me',
  'LBL_RELATED_CAMPAIGN' => 'Fushata e lidhur',
  'LBL_RELATED_CONTACT' => 'Kontakt i ndërlidhur',
  'LBL_RELATED_INFORMATION' => 'Informacioni e lidhura',
  'LBL_RELATED_MODULE' => 'e lidhur {{{this}}}',
  'LBL_RELATED_MODULE_PLURAL' => 'e lidhur {{{this}}}',
  'LBL_RELATED_RECORDS' => 'Regjistrimet e lidhura',
  'LBL_RELATED_RECORD_NOT_FOUND' => 'Regjistrimi i lidhur nuk u gjet.',
  'LBL_RELATIONSHIP' => 'Lidhja',
  'LBL_RELOAD_PAGE' => 'Ju lutemi të ringarkoni dritaren për të përdorur këtë Sugar Dashlet.',
  'LBL_REMINDERS' => 'Rikujtuesit',
  'LBL_REMINDERS_FINISHED' => 'Mbaroi!',
  'LBL_REMINDERS_NONE_FOUND' => 'Nuk u gjet asnjë lajmërim.',
  'LBL_REMINDERS_OVERDUE' => 'I vonuar',
  'LBL_REMINDERS_UPCOMING' => 'Vjen',
  'LBL_REMINDER_TITLE' => 'Kujtues:',
  'LBL_REMOVE' => 'Largo',
  'LBL_REMOVED_DASHLET' => 'Nënvizimi i Suarg është larguar',
  'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Largo të gjitha fushat',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'A jeni të sigurt që dëshironi të largoni nënvizimin e Sugar?',
  'LBL_REMOVE_DASHLET_ROW_CONFIRM' => 'Jeni të sigurtë që doni të hiqni rreshtin?',
  'LBL_REMOVE_FROM_FAVORITES' => 'Largo nga favoritet e mia',
  'LBL_REMOVE_MODULE_ENTRY' => 'A jeni te sigurtë që doni te disaktivizoni integrimin lidhës për këtë modul?',
  'LBL_REMOVE_PRIMARY_TEAM_ERROR' => 'Gabim gjatë përpjekjes për të hequr id primare të grupit [{0}] për [{1}] modulin me id [{2}]',
  'LBL_REMOVING_ATTACHMENT' => 'Heqje të bashkëngjitjes',
  'LBL_REMOVING_DASHLET' => 'Largimi i Nënvizimit të Sugar...',
  'LBL_RENAME_PAGE' => 'Riemëro faqen',
  'LBL_REPLACE_BUTTON' => 'Zëvendëso',
  'LBL_REPORTS_TO' => 'I reporton',
  'LBL_REPORT_AUTO_REFRESH' => 'Auto përditësim',
  'LBL_REPORT_EDIT' => 'Edito raportin e selektuar',
  'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Numri',
  'LBL_REPORT_SELECT' => 'Selekto raport',
  'LBL_REQUEST_PASSWORD' => 'Kërko fjalëkalim',
  'LBL_REQUEST_PROCESSED' => 'SE bërë',
  'LBL_REQUEST_TIMEOUT' => 'Kërkesës i mbaroi koha.',
  'LBL_REQUEST_TIMEOUT_TITLE' => 'Kërkesës i kaloi koha.',
  'LBL_REQUIRED_FIELD' => 'E nevojshme',
  'LBL_REQUIRED_SYMBOL' => '*',
  'LBL_REQUIRED_TITLE' => 'Fushat e nevojshme të indikuara',
  'LBL_RESET' => 'Rivendos',
  'LBL_RESET_DEFAULT_VIEW' => 'Ricakto shikimin e caktuar',
  'LBL_RESET_DEFAULT_WIDTHS' => 'Ricakto madhësitë e caktuara',
  'LBL_RESET_THEME_LNK' => 'Rikthe temën standarde',
  'LBL_RESET_THEME_MODAL_INFO' => 'Ju jeni gati për të fshirë temën tuaj me porosi me temën standarde.',
  'LBL_RESET_THEME_PROCESS' => 'Rivendosja e temës standarde...',
  'LBL_RESOLVE_CONFLICT' => 'Zgjidhe Konfliktin për {{emri}}',
  'LBL_RESOURCE_UNAVAILABLE' => 'Resurset nuk janë në dispozicion.',
  'LBL_RESOURCE_UNAVAILABLE_TITLE' => 'I ndaluar',
  'LBL_RESTORE' => 'Kthehu tek origjinali',
  'LBL_RETRIEVING_PAGE' => 'Rigjetja e faqes...',
  'LBL_ROLLBACK_BUTTON' => 'Rikthe',
  'LBL_ROUNDTRIPS' => 'Numrimi i veprimit',
  'LBL_ROUTING_ACTIONS_COPY_MAIL' => 'Kopjo mailin',
  'LBL_ROUTING_ACTIONS_DELETE_BEAN' => 'Fshi Sugar objektin',
  'LBL_ROUTING_ACTIONS_DELETE_FILE' => 'Fshi dosjen',
  'LBL_ROUTING_ACTIONS_DELETE_MAIL' => 'Fshi emailin',
  'LBL_ROUTING_ACTIONS_FORWARD' => 'Përcill emailin',
  'LBL_ROUTING_ACTIONS_MARK_FLAGGED' => 'Email flamuri',
  'LBL_ROUTING_ACTIONS_MARK_READ' => 'nënvizoe si të lexuar',
  'LBL_ROUTING_ACTIONS_MARK_UNREAD' => 'nënvizoe si të palexuar',
  'LBL_ROUTING_ACTIONS_MOVE_MAIL' => 'Lëvize emailin',
  'LBL_ROUTING_ACTIONS_PEFORM' => 'Performo veprimet vijuese',
  'LBL_ROUTING_ACTIONS_REPLY' => 'Përgjigju emailit',
  'LBL_ROUTING_ADD_RULE' => 'Shto regull',
  'LBL_ROUTING_ALL' => 'Më së paku',
  'LBL_ROUTING_ANY' => 'Çdonjë',
  'LBL_ROUTING_BREAK' => '-',
  'LBL_ROUTING_BUTTON_CANCEL' => 'Anulo',
  'LBL_ROUTING_BUTTON_SAVE' => 'Ruaj rregulin',
  'LBL_ROUTING_CHECK_RULE' => 'NJë gabim është detektuar:',
  'LBL_ROUTING_CHECK_RULE_DESC' => 'Ju lutemi verifikoni të gjitha fushat e shënuara',
  'LBL_ROUTING_CONFIRM_DELETE' => 'A jeni i sigurt që dëshironi të fshini këtë rregull? Kjo nuk mund të bëhet.',
  'LBL_ROUTING_FLAGGED' => 'vednosje flamuri',
  'LBL_ROUTING_FORM_DESC' => 'Regullat e zakonshme janë menjëherë aktive.',
  'LBL_ROUTING_FW' => 'FW:',
  'LBL_ROUTING_LIST_TITLE' => 'Regullat',
  'LBL_ROUTING_MATCH' => 'Nëse',
  'LBL_ROUTING_MATCH_2' => 'nga kushtet vijuese ekziston:',
  'LBL_ROUTING_MATCH_CC_ADDR' => 'CC',
  'LBL_ROUTING_MATCH_DESCRIPTION' => 'Përmbatja trupore',
  'LBL_ROUTING_MATCH_FROM_ADDR' => 'nga',
  'LBL_ROUTING_MATCH_NAME' => 'Subjekti',
  'LBL_ROUTING_MATCH_PRIORITY_HIGH' => 'Prioritet të lartë',
  'LBL_ROUTING_MATCH_PRIORITY_LOW' => 'Prioritet të ulët',
  'LBL_ROUTING_MATCH_PRIORITY_NORMAL' => 'Prioritet normal',
  'LBL_ROUTING_MATCH_TO_ADDR' => 'deri',
  'LBL_ROUTING_MATCH_TYPE_MATCH' => 'Përmban',
  'LBL_ROUTING_MATCH_TYPE_NOT_MATCH' => 'Nuk përmban',
  'LBL_ROUTING_NAME' => 'Emri i rregullit',
  'LBL_ROUTING_NEW_NAME' => 'Regull i ri',
  'LBL_ROUTING_ONE_MOMENT' => 'Një moment ju lutem...',
  'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS' => 'Mesazhi origjinal ndjek.',
  'LBL_ROUTING_RE' => 'RE:',
  'LBL_ROUTING_SAVING_RULE' => 'Ruajtje e rregullit',
  'LBL_ROUTING_SUB_DESC' => 'Rregullat e kontrolluara janë aktive. Shtyp emrin për ndryshim.',
  'LBL_ROUTING_TO' => 'tek',
  'LBL_ROUTING_TO_ADDRESS' => 'tek adresa',
  'LBL_ROUTING_WITH_TEMPLATE' => 'Me shabllon',
  'LBL_RSS_FEED' => 'RSS Lajme',
  'LBL_RSS_FEED_AUTHOR' => 'Autori:',
  'LBL_RSS_FEED_DASHLET' => 'RSS Lajme',
  'LBL_RSS_FEED_DASHLET_DESCRIPTION' => 'Qëndroni në rrjedha duke shtuar RSS të jashtëm ose Blog Feed.',
  'LBL_RSS_FEED_ENTRIES_COUNT' => 'Numri i hyrjeve të dukura',
  'LBL_RSS_FEED_URL' => 'Ushqe URL',
  'LBL_RSS_RECORDS_FOUND' => 'Regjistrim(e) i gjetur',
  'LBL_RUN_COUNT' => 'Numërim i pyetjes',
  'LBL_SAVED' => 'E ruajtur',
  'LBL_SAVED_LAYOUT' => 'Formati është ruajtur',
  'LBL_SAVED_SEARCH_ERROR' => 'Ju lutemi siguroni një emër për këtë pamje.',
  'LBL_SAVED_SEARCH_SHORTCUT' => 'Kërkimet e ruajtura',
  'LBL_SAVED_VIEWS' => 'Pamjet e ruajtura',
  'LBL_SAVE_AND_CONTINUE' => 'Ruaj dhe vazhdo',
  'LBL_SAVE_AND_CREATE_ANOTHER' => 'Ruaj dhe krijo të reja',
  'LBL_SAVE_AND_DEPLOY_BTN' => 'Ruaj dhe vendos',
  'LBL_SAVE_AND_SEND_INVITES_BUTTON' => 'Ruaj dhe dërgo ftesat',
  'LBL_SAVE_AND_VIEW' => 'Ruani dhe shikoni',
  'LBL_SAVE_AS_BUTTON_KEY' => 'A',
  'LBL_SAVE_AS_BUTTON_LABEL' => 'Ruaj si',
  'LBL_SAVE_AS_BUTTON_TITLE' => 'Ruaj si [Alt+A]',
  'LBL_SAVE_BUTTON_KEY' => 'S',
  'LBL_SAVE_BUTTON_LABEL' => 'Ruaj',
  'LBL_SAVE_BUTTON_TITLE' => 'Ruaj [Alt+S]',
  'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
  'LBL_SAVE_NEW_BUTTON_LABEL' => 'Ruaj dhe krijo të re',
  'LBL_SAVE_NEW_BUTTON_TITLE' => 'Ruaj dhe krijo të re [Alt+V]',
  'LBL_SAVE_OBJECT' => 'Ruaj {0}',
  'LBL_SAVE_THEME_PROCESS' => 'Ruhet tema...',
  'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Ruani faqën për të drejtuar formularin',
  'LBL_SAVING' => 'DështuarRuatje',
  'LBL_SAVING_LAYOUT' => 'Ruajtje të formatit...',
  'LBL_SAVING_PAGE_TITLE' => 'Ruatje e titullit të faqes',
  'LBL_SCHEDULE_CALL' => 'Thirje identifikuese',
  'LBL_SCHEDULE_MEETING' => 'Cakto mbledhje',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Cakto mbledhje',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Cakto mbledhje',
  'LBL_SEARCH' => 'Kërkim',
  'LBL_SEARCHFORM' => 'Forma e kërkimit',
  'LBL_SEARCHING' => 'Kërkim...',
  'LBL_SEARCH_ALL' => 'Kërko të gjitha {{{this}}}...',
  'LBL_SEARCH_ALL_MODULES' => 'Kërko të gjitha',
  'LBL_SEARCH_ALL_RECORDS' => 'Kërko të gjitha regjistrimet',
  'LBL_SEARCH_AND_SELECT' => 'Kërko dhe Selekto {{module}}',
  'LBL_SEARCH_BUTTON_KEY' => 'Q',
  'LBL_SEARCH_BUTTON_LABEL' => 'Kërkim',
  'LBL_SEARCH_BUTTON_TITLE' => 'Kërkim [Alt+Q]',
  'LBL_SEARCH_BY' => 'Kërkoni nga',
  'LBL_SEARCH_CHARTS' => 'Grafiket',
  'LBL_SEARCH_CRITERIA' => 'Kriteriumi i kërkimit',
  'LBL_SEARCH_DROPDOWN_NO' => 'Jo',
  'LBL_SEARCH_DROPDOWN_YES' => 'Po',
  'LBL_SEARCH_EXTERNAL_API' => 'Dosja në Burimin e jashtëm',
  'LBL_SEARCH_FOR' => 'Kërkim për',
  'LBL_SEARCH_FOR_MORE' => 'Kërko më shumë...',
  'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Mbyll',
  'LBL_SEARCH_HELP_TEXT' => 'Kontrollet e shumë selektimit<br />Klikoni mbi vlerat për të selektuar një atribut.<br />Klikoni-Ctrl për të selektuar të shumtë. Përdoruesit Mac përdorin klikim-CKM.<br />Për të selektuar të gjitha vlerat ndërmjet dy atributeve, klikoni vlerën e parë dhe pastaj klikoni Shift për vlerën e fundit.<br />Kërkim i Avancuar & Opsionet e faqosjes<br /><br />Duke përdorur kërkimin e ruajtur & opsionin e faqosjes, ju mund të ruani një sërë parametra të kërkimit dhe/ose një porosi të faqosjes për pamjen e listës me qëllim të shpejtë të merrni rezultatet e dëshiruara të kërkimit në të ardhmen. Ju mund të ruani një numër të palimituar me porosi të kërkimeve dhe faqosjeve. Të gjitha kërkimet e ruajtura shfaqen sipas emrit në listën e ruajtur të kërkimit, me ngrakimin e fundit të kërkimit të ruajtur që shfaqet në krye të listës.<br /><br />Për të rregulluar faqosjen e pamjes të listës, përdorni kolonat e fshehura dhe kolona e shfaqjes të kutive për të selektuar se cilat fusha do të shfaqen në rezultatet e kërkimit. Për shembull, ju mund të shikoni ose të fshini detajet të tilla si emrin e regjistrimit, dhe përdoruesin e caktuar, dhe grupi i caktuar në rezultatet e kërkimit. Për të shtuar një kolonë në listën e pamjes, selektoni fushën nga lista e kolonave të fshehura dhe përdorni shigjetën e majtë për të lëvizur atë në listën e kolonave të shfaqjes. Për të hequr një kolonë prej listës së shikuar, selektoni atë nga lista e kolonës të shfaqjes dhe të përdorni shigjetën e drejtë për të lëvizur atë në listën e kolonave të fshehur.<br /><br />Nëse keni ruajtur parametrat e faqosjes, ju do të jeni në gjendje të ngarkoni ato në çdo kohë për të parë rezultatet e kërkimit në faqosjen me porosi.<br /><br />Për të ruajtur dhe azhurnuar një kërkim dhe/ose faqosjen:<br />1.Shkruani një emër për rezultatet e kërkimit në Ruaj këtë kërkim si fushë dhe klikoni Ruaj.Emri tani shfaqet në listën e ruajtur të ngjitur me butonin e qartë.<br />2.Për të parë një kërkim të ruajtur, selektoni atë nga lista e ruajtur. Rezultatet e kërkimit janë shfaqur në Listën e pamjes.<br />3.Për të azhurnuar karakteristikat e një kërkimi të ruajtur, selektoni kërkimin e ruajtur nga lista, shkruani kriteret e kërkimit të reja dhe/ose opsionet e faqosjes në fushën e kërkimit të avancuar, dhe klikoni azhurno pranë Modifikimit të Kërkimit aktual.<br />4.Për të fshirë një kërkim të ruajtur, selektoni atë në listën e ruajtur, klikoni Fshijë pranë Modifikimit të Kërkimit aktual, dhe pastaj klikoni OK për të konfirmuar fshirjen.<br /><br />Këshillat<br /><br />Duke përdorur % si një operator të wildcard ju mund të bëni kërkimin tuaj më të gjerë. Për shembull në vend të kërkimit të vetëm për rezultatet që janë të barabarta "Apples" ju mund të ndryshoni kërkimin tuaj për "% Apples" e cili do të përputhet me të gjitha rezultatet që fillojnë me fjalën Apples, por mund të përmbajë karaktere të tjera.',
  'LBL_SEARCH_HELP_TITLE' => 'Këshillat e kërkimit',
  'LBL_SEARCH_LOAD_MORE' => 'NGARKO MË SHUMË',
  'LBL_SEARCH_MODULES' => 'Modulet',
  'LBL_SEARCH_MORE' => 'më tepër',
  'LBL_SEARCH_NO_RESULTS' => 'Nuk u gjetën rezultate',
  'LBL_SEARCH_PARENT_RELATED_ITEM' => 'Kërkim ...',
  'LBL_SEARCH_POPULATE_ONLY' => 'Kryeni një kërkim duke përdorur formularin e kërkimit më lart',
  'LBL_SEARCH_REPORT_CHARTS' => 'Raport grafikat',
  'LBL_SEARCH_RESULTS' => 'Rezultatet e kërkimit',
  'LBL_SEARCH_RESULTS_FOUND' => 'Rezultatet e kërkimit janë gjetur.',
  'LBL_SEARCH_RESULTS_TIME' => 'znj.',
  'LBL_SEARCH_SELECT' => 'Selekto...',
  'LBL_SEARCH_SELECT_MODULE' => 'Selekto {{module}}...',
  'LBL_SEARCH_TIPS' => 'Shkruani përpara për të kryer kërkimin wildcard. Shtypni butonin Enter/Kthehuni ose klikoni në ikonën Kërko për të kryer kërkimin e saktë.<br />Shembull:<br />Shtypja "Pacific" do të kthehet nga të dyja "Pacific" dhe "Pacific".<br />Shtypja "Pacific" e ndjekur nga butoni Enter që do të kthehet vetëm "Pacific".',
  'LBL_SEARCH_TIPS_2' => 'Shtypni butonin e kërkimit ose klikoni hyrjë për të marrë një përputhje të saktë për',
  'LBL_SEARCH_TOOLS' => 'Mjetet',
  'LBL_SEARCH_UNAVAILABLE' => 'Kërkoni padisponueshëm, ju lutemi provoni përsëri më vonë.',
  'LBL_SECONDS' => 'Sekondat aktive',
  'LBL_SEC_AVG' => 'Sekondat mesatare',
  'LBL_SEC_TOTAL' => 'Sekondat totale',
  'LBL_SEE_ALL' => 'Shih të gjitha',
  'LBL_SELECT_ACTION_LABEL' => 'Selekto veprim',
  'LBL_SELECT_ALL_TITLE' => 'Selekto të gjitha',
  'LBL_SELECT_APPEND_TEAMS' => 'Shtojca të ekipit',
  'LBL_SELECT_APPEND_VALUES' => 'Shtojca të vlerës',
  'LBL_SELECT_BUTTON_KEY' => 'T',
  'LBL_SELECT_BUTTON_LABEL' => 'Selekto',
  'LBL_SELECT_BUTTON_TITLE' => 'Selekto [Alt+T]',
  'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
  'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Selekto kontaktin',
  'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Selekto kontaktin [Alt+T]',
  'LBL_SELECT_MODULE' => 'Selekto modulin:',
  'LBL_SELECT_PHOTO' => 'Zgjidh Foto',
  'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Selekto nga raportet',
  'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Selekto raportet',
  'LBL_SELECT_TEAMS_KEY' => 'Z',
  'LBL_SELECT_TEAMS_LABEL' => 'Shto grup (e)',
  'LBL_SELECT_TEAMS_TITLE' => 'Shto grup (e) [Alt+Z]',
  'LBL_SELECT_THIS_ROW_TITLE' => 'Selekto këtë reshtin',
  'LBL_SELECT_USER_BUTTON_KEY' => 'U',
  'LBL_SELECT_USER_BUTTON_LABEL' => 'Selekto përdoruesin',
  'LBL_SELECT_USER_BUTTON_TITLE' => 'Selekto përdoruesin [Alt+U]',
  'LBL_SEND_INVITE' => 'Dërgo ftesë',
  'LBL_SERVER_MEMORY_BYTES' => 'Bitë',
  'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Përdorimi: - modula: {0} - veprimi: {1}',
  'LBL_SERVER_MEMORY_USAGE' => 'Përdorimi i mamorisë së serverit: {0} ({1})',
  'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Kulmi i serverit të memorjes së përdorimit : {0} ({1})',
  'LBL_SERVER_RESPONSE_RESOURCES' => 'Burimet e përdorura për të ndërtuar këtë faqe (pyetjet, dosjet)',
  'LBL_SERVER_RESPONSE_TIME' => 'Koha e reagimit të serverit:',
  'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekonda.',
  'LBL_SESSION_ID' => 'Id e sesionit',
  'LBL_SETUP_COMPLETE_INFO' => 'Fillo të përdorësh Sugar!',
  'LBL_SETUP_PROGRESS' => 'Progresi i fillimit',
  'LBL_SETUP_USER_INFO' => 'Cakto informacionin tënd të përdoruesit',
  'LBL_SETUP_USER_LOCALE_INFO' => 'Cakto formatin e zonës tuaj kohore, datën dhe emrin',
  'LBL_SET_FONTSIZE' => 'Madhësia e fontit',
  'LBL_SET_NEW_PASSWORD' => 'Shkruaj Fjalëkalimin',
  'LBL_SHARE_BUTTON_KEY' => 'r',
  'LBL_SHARE_BUTTON_LABEL' => 'Ndaj',
  'LBL_SHARE_BUTTON_TITLE' => 'Ndaj',
  'LBL_SHARE_COMPANY' => 'PuKompania',
  'LBL_SHARE_LINKABLE' => 'E lidhur',
  'LBL_SHARE_PRIVATE' => 'Privat',
  'LBL_SHARE_PUBLIC' => 'Publike',
  'LBL_SHIPPING_ADDRESS' => 'Adresa e transportit',
  'LBL_SHIPPING_STREET' => 'Rruga:',
  'LBL_SHIP_TO_ACCOUNT' => 'Llogaria për transportin,',
  'LBL_SHIP_TO_CONTACT' => 'Kontakti për transportin',
  'LBL_SHORTCUTS' => 'Shkurtimet',
  'LBL_SHORTCUT_ALERT_CANCEL' => 'Anulo',
  'LBL_SHORTCUT_ALERT_CONFIRM' => 'Konfirmo',
  'LBL_SHORTCUT_CANCEL_INLINE_EDIT' => 'Dilni nga lista e modulit të editimit duke mos e ruajtur',
  'LBL_SHORTCUT_CLOSE_DRAWER' => 'Mbylleni sirtarin',
  'LBL_SHORTCUT_COPY_RECORD' => 'Kopjoni regjistrimin aktual',
  'LBL_SHORTCUT_CREATE_RECORD' => 'Krijo regjistrim të ri',
  'LBL_SHORTCUT_EDIT_SELECTED' => 'Edito regjistrimin e selektuar në listë',
  'LBL_SHORTCUT_FAVORITE_RECORD' => 'Bëjeni regjistrimin si favorit',
  'LBL_SHORTCUT_FILTER_ADD' => 'Shtoni kritere shtesë për filtrim',
  'LBL_SHORTCUT_FILTER_CLOSE' => 'Mbylleni filtrimin',
  'LBL_SHORTCUT_FILTER_CREATE' => 'Krijoni nhjë filtrim të ri të listës',
  'LBL_SHORTCUT_FILTER_DELETE' => 'Fshini filtrimin',
  'LBL_SHORTCUT_FILTER_EDIT' => 'Editoni filtrimin aktual të listës',
  'LBL_SHORTCUT_FILTER_REMOVE' => 'Hiqni kriterin e fundit nga filtrimi',
  'LBL_SHORTCUT_FILTER_RESET' => 'Ricaktoni filtrimin',
  'LBL_SHORTCUT_FILTER_SAVE' => 'Ruani filtrimin',
  'LBL_SHORTCUT_FILTER_SEARCH' => 'Fokusohuni në fushën e filtrimit të listës',
  'LBL_SHORTCUT_FILTER_SHOW' => 'Hapni menynë e filtrimit të listës',
  'LBL_SHORTCUT_FOLLOW_RECORD' => 'Ndiq regjistrimin',
  'LBL_SHORTCUT_FUNCTION' => 'Funksion',
  'LBL_SHORTCUT_HELP' => 'Trego shkurtoret që e ndihmojnë faqen',
  'LBL_SHORTCUT_KEYS_HELP_ABOUT' => 'SugarCRM ju aktivizon fuqinë përdoruesve që shpejt të kryejnë detyra të caktuara me shkurtore të tastierës për të rritur produktivitetin. Tabelat në të djathtë përshkruajnë shkurtoret në disponim bashkë me çelësathe veprimet që ato i kryejnë.',
  'LBL_SHORTCUT_KEY_KEY' => 'Çelësi',
  'LBL_SHORTCUT_MARK_SELECTED' => 'Shëno regjistrimin si të zgjedhur',
  'LBL_SHORTCUT_MASS_UPDATE_ADD' => 'Shtoni rresht',
  'LBL_SHORTCUT_MASS_UPDATE_CANCEL' => 'Mbyllni përditësimet masive',
  'LBL_SHORTCUT_MASS_UPDATE_REMOVE' => 'Hiqni rresht',
  'LBL_SHORTCUT_MASS_UPDATE_SAVE' => 'Përditësoni regjistrimet',
  'LBL_SHORTCUT_NAVIGATE_DOWN' => 'Selekto regjistrim të ri në listë',
  'LBL_SHORTCUT_NAVIGATE_UP' => 'Selekto regjistrimin paraprak në listë',
  'LBL_SHORTCUT_OPEN' => 'Hap regjistrimin e selektuar në listë',
  'LBL_SHORTCUT_OPEN_MASS_ACTION' => 'Hap menynë e aktiviteteve masive',
  'LBL_SHORTCUT_OPEN_MORE_ACTION' => 'Hapeni menynë e aksioneve primare',
  'LBL_SHORTCUT_PREVIEW_SELECTED' => 'Shiko regjistrimin',
  'LBL_SHORTCUT_QUICK_CREATE' => 'Nyjëzo për të krijuar së shpejti meny',
  'LBL_SHORTCUT_RECORD_CANCEL' => 'Pastroni të gjitha ndryshimet në regjistrim',
  'LBL_SHORTCUT_RECORD_DELETE' => 'Fshi regjistrimin',
  'LBL_SHORTCUT_RECORD_EDIT' => 'Editoni regjistrimin',
  'LBL_SHORTCUT_RECORD_NEXT' => 'Hapeni regjistrimin e ardhshëm',
  'LBL_SHORTCUT_RECORD_PREVIOUS' => 'Hapeni regjistrimin paraprak',
  'LBL_SHORTCUT_RECORD_SAVE' => 'Ruani regjistrimin',
  'LBL_SHORTCUT_SCROLL_LEFT' => 'Lëviz listën në të majtë',
  'LBL_SHORTCUT_SCROLL_RIGHT' => 'Lëviz listën në të djathë',
  'LBL_SHORTCUT_SEARCH' => 'Fokusohu në fushën e kërkimit global',
  'LBL_SHORTCUT_SELECT_ALL' => 'Selekto të gjitha',
  'LBL_SHORTCUT_SIDEBAR_TOGGLE' => 'Nyjëzo  barin anësor',
  'LBL_SHOW' => 'trego',
  'LBL_SHOW_LESS' => 'Trego më pak',
  'LBL_SHOW_LESS_RECENTS' => 'Më pak recentë....',
  'LBL_SHOW_MORE' => 'Trego më shumë',
  'LBL_SHOW_MORE_GENERIC' => 'Më shumë {{name}}...',
  'LBL_SHOW_MORE_MODULE' => 'Më shumë {{{module}}}...',
  'LBL_SHOW_MORE_RECENTS' => 'Më shumë recentë...',
  'LBL_SIGNUP_BUTTON_LABEL' => 'Regjistrohu',
  'LBL_SIXMONTHS' => 'gjashtë muaj',
  'LBL_SMS_BUTTON' => 'SMS',
  'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Shkëmbimi',
  'LBL_SMTPTYPE_GMAIL' => 'Gmail',
  'LBL_SMTPTYPE_OTHER' => 'Tjetër',
  'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
  'LBL_SORT' => 'Lloj',
  'LBL_SQL_TEXT' => 'SQL Tekst',
  'LBL_SQS_INDICATOR' => '',
  'LBL_START_AND_END_DATE' => '{{start}} - {{end}} ({{duration}})',
  'LBL_START_AND_END_DATE_DETAIL_VIEW' => 'Data e fillimit & mbarimit',
  'LBL_START_AND_END_DATE_SAME_DAY' => '{{date}} {{start}} - {{end}} ({{duration}})',
  'LBL_START_AND_END_DATE_TO' => 'tek',
  'LBL_START_BUTTON_LABEL' => 'Fillo',
  'LBL_START_BUTTON_TITLE' => 'Fillo',
  'LBL_STATE' => 'Shteti',
  'LBL_STATUS' => 'Statusi:',
  'LBL_STATUS_UPDATED' => 'Statusi juaj për këtë ndodhi është rinovuar.',
  'LBL_STREAM_NO_RECORDS' => 'Ky regjistrim nuk ka shënime në këtë kohë. Ju lutemi shtoni shënime duke klikuar në linkun shto shënime.',
  'LBL_STREET' => 'Rruga',
  'LBL_SUBJECT' => 'subjekti',
  'LBL_SUBMIT_BUTTON_LABEL' => 'Paraqit',
  'LBL_SUBSCRIBE' => 'Abonohu',
  'LBL_SUCCESS' => 'Sukses:',
  'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2016 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> Të gjitha të drejtat e rezervuara.<br />SugarCRM është markë tregtare e SugarCRM, Inc. Të gjitha kompanitë tjera dhe emrat e produktit mund të jenë marka tregtare të kompanive respektive me të cilat ata ndërlidhen.',
  'LBL_SUPPORT' => 'Mbështetje',
  'LBL_SWITCH_INSTANCE' => 'Kalo në këtë instancë',
  'LBL_SYNC' => 'Sinkronizim',
  'LBL_SYNCED_RECURRING_MSG' => 'Kjo mbledhje ka origjinën në sistemin tjetër dhe është sinkronizuar në Sugar. Pasi mbledhja ka qenë e redaktuar në Sugar, nuk do të jetë në gjendje për t&#39;u sinkronizuar për sistemin tjetër.',
  'LBL_SYSTEM_DEFAULT_OUTBOUND_EMAIL_CONFIGURATION' => 'Sistemi i parazgjedhur',
  'LBL_TABGROUP_HOME' => 'Ballina',
  'LBL_TAG_FETCH_ERROR' => 'Një gabim ka ndodhur gjatë marrjesh së tagve.',
  'LBL_TAG_NEW_TAG' => '(Tag i ri)',
  'LBL_TASKS' => 'Detyrat',
  'LBL_TASKS_SUBPANEL_TITLE' => 'Detyrat',
  'LBL_TEAM' => 'Grupi',
  'LBL_TEAMS' => 'Grupet',
  'LBL_TEAMS_LINK' => 'Grupet',
  'LBL_TEAM_ADD' => 'Shto ekip',
  'LBL_TEAM_ID' => 'Id e grupit',
  'LBL_TEAM_PRIMARY' => 'Cakto si ekip primar',
  'LBL_TEAM_REMOVE' => 'Hiq ekip',
  'LBL_TEAM_SELECTED_TITLE' => 'Grupi i selektuar',
  'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Selekto për tëshënuar këtë grup si kryesor',
  'LBL_TEAM_SET' => 'Përcaktimi i grupit',
  'LBL_TEAM_SET_ID' => 'Vendos grupin ID',
  'LBL_TEXTAREA_LESS' => 'më pak',
  'LBL_TEXTAREA_MORE' => 'më tepër',
  'LBL_THEME' => 'Albumi:',
  'LBL_THEME_COLOR' => 'Ngjyra',
  'LBL_THEME_FONT' => 'Shkronja',
  'LBL_THEME_PICKER' => 'Stili i faqes',
  'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Paralajmërim: Internet Explorer 6 nuk është i mbështetur për temën e selektuar. Kliko OK për të selektar atë sidoqoftë ose Anulo që të selektoni një temë tjetër.',
  'LBL_THEME_PREVIEW' => 'Shikimi i temës',
  'LBL_THOUSANDS_SYMBOL' => 'K',
  'LBL_THREE_MONTHS' => 'tre muaj',
  'LBL_TIMEZONE_DIFFERENT_LINK' => 'Rregullo zonën tuaj kohore',
  'LBL_TIME_AGO_DAY' => 'Dje',
  'LBL_TIME_AGO_DAYS' => '{{this}} ditë më parë',
  'LBL_TIME_AGO_HOUR' => 'Afër një ore më parë',
  'LBL_TIME_AGO_HOURS' => '{{this}} orë më parë',
  'LBL_TIME_AGO_MINUTE' => 'Afër 1 minute më parë',
  'LBL_TIME_AGO_MINUTES' => '{{this}} minuta më parë',
  'LBL_TIME_AGO_NOW' => 'Menjëherë',
  'LBL_TIME_AGO_SECONDS' => 'Më pak se një minute më parë',
  'LBL_TIME_AGO_YEAR' => 'Afër një viti më parë',
  'LBL_TIME_RELATIVE' => 'E postuar {{relativetime}} më {{date}} në {{time}}.',
  'LBL_TIME_RELATIVE_ACTIVITIES' => '{{relativetime}} në {{date}} më {{time}}',
  'LBL_TIME_UNTIL_DAY' => 'nesër',
  'LBL_TIME_UNTIL_DAYS' => 'në {{this}} ditë',
  'LBL_TIME_UNTIL_HOUR' => 'për rreth një orë',
  'LBL_TIME_UNTIL_HOURS' => 'në {{this}} orë',
  'LBL_TIME_UNTIL_MINUTE' => 'në reth 1 minutë',
  'LBL_TIME_UNTIL_MINUTES' => 'në {{this}} minuta',
  'LBL_TIME_UNTIL_SECONDS' => 'në më pak se 1 minutë',
  'LBL_TIME_UNTIL_YEAR' => 'për rreth një viti',
  'LBL_TODAY' => 'sot',
  'LBL_TODAYS_ACTIVITIES' => 'Aktivitet e sotshme',
  'LBL_TOGGLE_DRAWER' => 'Nyjëzo drawer',
  'LBL_TOGGLE_VISIBILITY' => 'Njyjëzo shfaqjen',
  'LBL_TOMORROW' => 'nesër',
  'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Shfaq dhjetë rreshtat më të lartë në diagram fluskash',
  'LBL_TOP10_OPPORTUNITIES_DEFAULT_DATASET' => 'Paracaktim i vendosjes së datës',
  'LBL_TOP10_OPPORTUNITIES_FILTER_DURATIONS' => 'Filter i paracaktuar i datës',
  'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Rrjeshti i të ardhurave të mia',
  'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => 'Rrjeshti i të ardhurave të ekipit tim',
  'LBL_TOUR' => 'Pamja e aktiviteteve të turneve',
  'LBL_TOUR_ADD' => 'Krijoni regjistrim nga këtu',
  'LBL_TOUR_AVATAR' => 'Merrni më shumë detaje në lidhje me zbatimin ose logohuni',
  'LBL_TOUR_BACK' => 'Kthe',
  'LBL_TOUR_BTN_DONE' => 'E bërë',
  'LBL_TOUR_CALENDAR_URL_1' => 'A e ndani SugarCRM kalendar me aplikacione të partisë 3, të tilla si Microsoft Outlook ose Exchange? Nëse është kështu, ju keni një URL të re. Ky i ri, më të sigurt URL përfshin një çelës personal i cili do të parandalojë publikimin e paautorizuar të kalendarit tuaj.',
  'LBL_TOUR_CALENDAR_URL_2' => 'Retrieve URL-in tuaj të re të përbashkët kalendar.',
  'LBL_TOUR_CLOSE' => 'Mbyll:',
  'LBL_TOUR_CUBE' => 'Qasje e panelit dhe aktivitetit',
  'LBL_TOUR_DONE' => 'Keni mbaruar!',
  'LBL_TOUR_END_TOUR' => 'Turë e faqes',
  'LBL_TOUR_FEATURES_670' => '<ul style=""><li class="icon-ok">Pamje dhe ndjenjë të ëmbël- tani me një temë të re moderne!</li><li class="icon-ok">Moduli i parashikimeve është ndryshuar - tani me funksionalitet më të mirë dhe me pamje të re.</li></ul>',
  'LBL_TOUR_FORECASTS_CHART' => 'Rishikimi i shpërndarjes së parashikuar',
  'LBL_TOUR_FORECASTS_COMMITS' => 'Klikoni për të parë angazhimin e mëparshëm',
  'LBL_TOUR_FORECASTS_INLINEEDIT' => 'Kliko për të redaktuar të dhënat në linjë',
  'LBL_TOUR_FORECASTS_PROGRESS' => 'Rishikimi distancë i kuotave',
  'LBL_TOUR_FORECASTS_TIMEPERIODS' => 'Zgjidhni një periudhë kohore për të parë parashikimin përkatës',
  'LBL_TOUR_FORECAST_INTRO' => 'Menaxho tubacionin dhe parashikimin.',
  'LBL_TOUR_FULL_TOUR' => 'Turë e plotë',
  'LBL_TOUR_INTRO' => 'Mirëse erdhët në Sugar 7. Përdorni shigjetat për një turë të shkurtër.',
  'LBL_TOUR_LIST_ACTIVTYSTREAMLIST_TOGGLE' => 'Zgjidhni për të parë aktivitetet apo listën e shënimeve',
  'LBL_TOUR_LIST_FILTER1' => 'Shiriti i filtrimit mundëson kërkim për këtë modul',
  'LBL_TOUR_LIST_FILTER2' => 'Zgjidhni filtër të paracaktuar ose krijoni të reja',
  'LBL_TOUR_LIST_FILTER_PREVIEW' => 'Shkruani këtu për të kërkuar në bazë të emrit',
  'LBL_TOUR_LIST_FILTER_SEARCH' => 'Shkruani këtu për të kërkuar në bazë të emrit',
  'LBL_TOUR_LIST_INTRO' => 'Shiko një listë të shënimeve dhe merrni veprimet për të dhënat.',
  'LBL_TOUR_LIST_INT_TOGGLE' => 'Kliko për të mbyllur ose për të hapur panelin e inteligjencës',
  'LBL_TOUR_MODULE' => 'Turë e faqes',
  'LBL_TOUR_NAV_BAR' => 'Qasu të gjitha moduleve në menunë e navigimit dhe merr veprime',
  'LBL_TOUR_NEXT' => 'Vijues',
  'LBL_TOUR_NOTIFICATIONS' => 'Kliko për të parë lajmërime',
  'LBL_TOUR_OVERVIEW' => 'Rishikim i faqes',
  'LBL_TOUR_RECORD_ACTIONS' => 'Ndërmirr veprime për regjistrimin',
  'LBL_TOUR_RECORD_DASHBOARDACTIONS' => 'Krijo grupe të reja të paneleve',
  'LBL_TOUR_RECORD_DASHBOARDNAME' => 'Cakto një emër për grupin e paneleve',
  'LBL_TOUR_RECORD_DASHLETCOG' => 'Zgjidhni për të hequr panelet ose të ndryshoni parametrat',
  'LBL_TOUR_RECORD_INLINEEDIT' => 'Emri i regjistrimit mund të përditësohet në vend',
  'LBL_TOUR_RECORD_INLINEEDITRECORD' => 'Kliko për të redaktuar çdo fushë në linjë',
  'LBL_TOUR_RECORD_INTRO' => 'Shiko detajet mbi këtë regjistrim dhe të gjitha të dhënat që lidhen me të.',
  'LBL_TOUR_RECORD_SHOWMORE' => 'Kliko për të parë më shumë të dhëna për regjistrimin',
  'LBL_TOUR_RECORD_STATUS' => 'Gjej statusin e nivelit të regjistrimit këtu',
  'LBL_TOUR_RECORD_TOGGLEACTIVITIES' => 'Zgjidhni për të parë të aktivitetet apo të dhënat përkatëse',
  'LBL_TOUR_REFERENCE_1' => 'Ju mund gjithmonë t&#39;na referoni',
  'LBL_TOUR_REFERENCE_2' => 'përmes linkun "Mbështetje" nën menu profil.',
  'LBL_TOUR_REVISIT' => 'Klikoni këtu për të filluar turën',
  'LBL_TOUR_SCREEN_1_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">krijoni parametrat tuaja te parashikimeve</li><li class="icon-ok">Të ndiqni tubacionin tuaj dhe distancën prej kuotës</li><li class="icon-ok">Parashiko tubacionin e ekipës suaj të shitjes</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen1-thumb.png" width="220" id="thumbnail_1" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_1_TITLE_670' => 'Moduli i ri i parashikimeve ju mundëson që të',
  'LBL_TOUR_SCREEN_2_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Zgjidhni datën e fillimit të vitit fiskal</li><li class="icon-ok">Zgjidhni periudhën kohore të jetë vjetore apo tremujore</li><li class="icon-ok">Zgjidhni numrin e periudhave kohore që doni ti parashikoni</li><li class="icon-ok">Zgjidhni gamën e probabilitetit për të përfshirë në parashikime</li><li class="icon-ok">Zgjidhni skenarin për të parashikuar, si më të pëlqyeshmën, më të mirën ose më të keqën</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen2-thumb.png" width="220" id="thumbnail_2" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_2_TITLE_670' => 'Krijo parametrat tuaja të parashikimeve',
  'LBL_TOUR_SCREEN_3_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Zgjidhni periudhën kohore për parashikimet tuaja</li><li class="icon-ok">Rishikoni dhe redakton shumat dhe probabilitetët për mundësitë tuaja</li><li class="icon-ok">Ruani fletën tuaj të punës të pakryer ose;</li><li class="icon-ok">Angazhoni parashikimet deri tek menaxheri, dhe shihni historinë e angazhimeve të mëparshme</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen5-thumb.png" width="220" id="thumbnail_5" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_3_TITLE_670' => 'Menaxhoni tubacionin tuaj',
  'LBL_TOUR_SCREEN_4_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Shih listat dhe tabelat e shumës së shitjeve të projektuara për mundësitë tuaja</li><li class="icon-ok">Redakto konfigurimet për të parë fazën e shitjes dhe probabilitetin</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen6-thumb.png" width="220" id="thumbnail_6" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_4_TITLE_670' => 'Menaxhoni tubacionin tuaj',
  'LBL_TOUR_SCREEN_5_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Zgjidh cilën periudhë kohore doni ta shihni</li><li class="icon-ok">Shihni fletat e punës së ekipit tuaj të shitjes dhe rregulloni parashikimet e tyre</li><li class="icon-ok">Merrni njoftim kur anëtarët e ekipës suaj të shitjes kryejnë parashikime të reja</li><li class="icon-ok">Ruani fletën e punës të pakryer ose;</li><li class="icon-ok">Angazhoni parashikimet deri tek menaxheri dhe shikoni historinë e angazhimeve të mëparshme</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen3-thumb.png" width="220" id="thumbnail_3" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_5_TITLE_670' => 'menaxhoni tubacionin e ekipit të shitjes',
  'LBL_TOUR_SCREEN_6_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Shiko listat ose tabelat me numrat e projektuara të shitjes për të gjithë ekipin e shitjes ose nga një anëtari individual të ekipit</li><li class="icon-ok">Ndrysho listën që të përfytyroje shitjet e projektuara si skenari më i pëlqyeshëm, më i mirë, ose më i keq </li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen4-thumb.png" width="220" id="thumbnail_4" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_6_TITLE_670' => 'Menaxhoni tubacionin e ekipit tuaj të shitjes',
  'LBL_TOUR_SEARCH' => 'Selekto një ose më shumë module dhe kërko',
  'LBL_TOUR_SKIP' => 'Anashkalo',
  'LBL_TOUR_TAKE_TOUR' => 'Merre një turne',
  'LBL_TOUR_TOUR' => 'Qasju turës në çdo kohë',
  'LBL_TOUR_VISIT' => 'Për më shumë informacion ju lutemi vizitoni aplikacionin tonë',
  'LBL_TOUR_WATCH' => 'Shikojnë Çfarë ka të re në Sugar',
  'LBL_TOUR_WELCOME' => 'Çfarë ka të re në Sugar',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Emaili i arkivuar',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Emaili i arkivuar [Alt+K]',
  'LBL_TRADEMARK' => 'SugarCRM është markë tregtare e SugarCRM Inc. Të gjitha kompanitë tjera dhe emrat e produkteve mund të jenë marka tregtare të kompanive përkatëse me të cilën ato janë të ndërlidhura.',
  'LBL_TRADEMARK2' => 'SugarCRM ®, Sugar Enterprise™ dhe Sugar™ janë marka tregtare të SugarCRM Inc.',
  'LBL_TRAINING' => 'Mbështetje',
  'LBL_TT_DNB_BAL_AREA_CODE' => 'Kodi i vendit të telefonit të SHBA ose Kanadasë. Shambull: 512 ose 732 ose 973',
  'LBL_TT_DNB_BAL_CODE_TYPE' => 'Zgjidhni llojin e kodit industrial: SIC ose NAICS',
  'LBL_TT_DNB_BAL_DUNS' => 'Fut numër 9 DUNS®  digit. Shembull: 060704780, 047897855',
  'LBL_TT_DNB_BAL_IND_CODE' => '2 deri më 8 digjit kode SIC janë mbështetur OSE 2 deri më 6 digjit kode NAICS janë të mbështetura. Ndani multi kodet me presje.',
  'LBL_TT_DNB_BAL_IPO_PRICE_RANGE' => 'Në $USD. Shembull: Rangu i IPO çmimit 2.00 deri më 2.50',
  'LBL_TT_DNB_BAL_MILLIONS' => 'në miliona $USD',
  'LBL_TT_DNB_BAL_MILLIONS_EX' => 'Në $USD miliona. Shembull: 100 ose 4.3',
  'LBL_TT_DNB_BAL_NET_INCOME_GROWTH' => 'Përqindje (%)',
  'LBL_TT_DNB_BAL_ORGID' => 'Regjistrim#. Shembull: 130871985, 160468020',
  'LBL_TT_DNB_BAL_ORG_NAME' => 'Fut emrin e kompanisë',
  'LBL_TT_DNB_BAL_POSTAL_CODE' => 'Rangu i zip kodeve të SHBA-ve janë të mbështetura. Shembuj: 78701 ose SW1P 1JA ose SWW1, ose 78701-78752',
  'LBL_TT_DNB_BAL_PRESCREEN_SCORE' => 'Zgjidhni nivelin e rrezikut: I lartë, Mesatar ose i Ulët',
  'LBL_TT_DNB_BAL_RADIUS_SRCH' => 'Kërko për rezultate me një distancë të dhënë të një kodi të vetëm ZIP/postal',
  'LBL_TT_DNB_BAL_STATES' => 'Steti/Provinca/Regjioni',
  'LBL_TT_DNB_BAL_YEAR_OF_FOUNDING' => 'Shembuj: 1964 ose 2009. Vetëm një vit i themelimit mund të shtohet',
  'LBL_TWITTER_DATA_EMPTY' => 'Nuk ka të dhëna të disponueshme prej në Twitter',
  'LBL_TWITTER_DATA_LOADING' => 'Ngarkimi lidhës i Twitter...',
  'LBL_TWITTER_DESCRIPTION' => 'Shih bio Twitter të ngjashëm, përdoruesit dhe tweets, Retweet, dhe përgjigjeni tweets',
  'LBL_TWITTER_DISPLAY_ROWS' => 'Shfaq reshtat',
  'LBL_TWITTER_FAVORITE' => 'Favorite',
  'LBL_TWITTER_FOLLOW' => 'Ndiq',
  'LBL_TWITTER_ID' => 'Twitter ID',
  'LBL_TWITTER_MY_ACCOUNT' => 'Llogaria ime',
  'LBL_TWITTER_NAME' => 'Twitter',
  'LBL_TWITTER_REPLY' => 'Përgjigju',
  'LBL_TWITTER_RETWEET' => 'Retweet',
  'LBL_TWITTER_SOURCE' => 'Tweet burimi:',
  'LBL_TWO_WEEKS' => 'dy javë',
  'LBL_TX_LOG' => 'Log transakcioni',
  'LBL_TX_LOG_DETAIL' => 'Detaj transakcioni',
  'LBL_UNASSIGNED' => 'E pacaktuar',
  'LBL_UNAUTHORIZED' => 'Na vjen keq, por si duket ju nuk jeni të autorizuar të keni qasje në këtë resurs.',
  'LBL_UNAUTHORIZED_TITLE' => 'Gabim në HTTP: I paautorizuar',
  'LBL_UNAUTH_ADMIN' => 'Qasje e pautorizuar në administratë',
  'LBL_UNDELETE' => 'Mos fshi',
  'LBL_UNDELETE_BUTTON' => 'Mos fshi',
  'LBL_UNDELETE_BUTTON_LABEL' => 'Mos fshi',
  'LBL_UNDELETE_BUTTON_TITLE' => 'Mos fshi [Alt+D]',
  'LBL_UNFOLLOW' => 'Mos ndiq',
  'LBL_UNLINKED' => 'Pa link',
  'LBL_UNLINKING' => 'Hiqet linku...',
  'LBL_UNLINK_BUTTON' => 'Hiq linkun',
  'LBL_UNSUBSCRIBE' => 'ç$#39;abonimi',
  'LBL_UNSYNC' => 'Mos sinkronizo',
  'LBL_UPCOMING' => 'Takimet e mia të ardhëshme',
  'LBL_UPDATE' => 'Rifresko',
  'LBL_UPDATE_CALC_FIELDS' => 'Rikalkuloni vlerat',
  'LBL_UPLOADING' => 'Ngarkimi',
  'LBL_UPLOAD_FROM_COMPUTER' => 'Ngarko nga kompjuteri im',
  'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Format jovalid i dosjes, vetëm imazhi i dosjes mund të jetë i ngarkuar.',
  'LBL_UPLOAD_IMAGE_FILE_NOT_SUPPORTED' => 'Formati i imazhit {0} nuk është i mbështetur.',
  'LBL_URL_BUTTON' => 'Uebi',
  'LBL_USERS' => 'përdoruesit',
  'LBL_USERS_SYNC' => 'Sinkronizimi i përdoruesve',
  'LBL_USER_DEFAULT_OUTBOUND_EMAIL_CONFIGURATION' => 'përdoruesi i parazgjedhur',
  'LBL_USER_ID' => 'ID e përdoruesit',
  'LBL_USER_LIST' => 'Lista e përdoruesve',
  'LBL_USER_MENU' => 'Menyja e përdouesit',
  'LBL_USER_OUTBOUND_EMAIL_ACCOUNT_CONFIGURATION' => 'llogaria e përdoruesit',
  'LBL_USE_HTTPS' => 'Përdor lidhje të sigurt',
  'LBL_VALIDATE_RANGE' => 'nuk është brenda gamës valide',
  'LBL_VALIDATING' => 'Duke vërtetuar...',
  'LBL_VCARD' => 'vCard',
  'LBL_VCARD_DOWNLOAD' => 'Shkarko .vcf',
  'LBL_VCARD_ERROR_DEFAULT' => 'Ka një gabim gjatë ngarkimit të fajlit vCard.',
  'LBL_VCARD_ERROR_FILESIZE' => 'Skedari i ngarkuar e kalon kufirin me permasa 30000 bytes cila është e specifikuar në formularin e HTML.',
  'LBL_VERIFY_EMAIL_ADDRESS' => 'Kontrolloni për hyrjen ekzistuese të emailit ...',
  'LBL_VERIFY_PORTAL_NAME' => 'Kontrolloni për emrin ekzistues të portalit ..',
  'LBL_VIEWINLINE' => 'Pamje',
  'LBL_VIEW_BUTTON' => 'Pamje',
  'LBL_VIEW_BUTTON_KEY' => 'V',
  'LBL_VIEW_BUTTON_LABEL' => 'Pamje',
  'LBL_VIEW_BUTTON_TITLE' => 'Pamjet [Alt+V]',
  'LBL_VIEW_IMAGE' => 'pamje',
  'LBL_VIEW_INLINE' => 'Pamje',
  'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
  'LBL_VIEW_PDF_BUTTON_LABEL' => 'Shtyp si PDF',
  'LBL_VIEW_PDF_BUTTON_TITLE' => 'Shtyp si PDF [Alt+P]',
  'LBL_VISIBLE' => 'Regjistrimi i dukshëm',
  'LBL_WARNING' => 'Paralajmërim',
  'LBL_WARN_UNSAVED_CHANGES' => 'Ju nuk i keni ruajtur ndryshimet. Jeni të sigurtë që doni të largoheni nga faqja dhe të hidhni ndryshimet?',
  'LBL_WELCOMEBAR' => 'Mirësevini',
  'LBL_WIZ_APPLICATION_SETTINGS' => 'Parametrat e sistemit',
  'LBL_WIZ_COMPLETE_TITLE' => 'Fillimi u kompletua',
  'LBL_WIZ_CONFIGURE_APPLICATION' => 'Studio',
  'LBL_WIZ_CREATE_USERS' => 'Krijo përdorues',
  'LBL_WIZ_DATE_FORMAT' => 'Formati i datës',
  'LBL_WIZ_DOCUMENTATION' => 'Dokumentacioni',
  'LBL_WIZ_EMAIL' => 'Email',
  'LBL_WIZ_EMAIL_SETTINGS' => 'Parametrat e emailit',
  'LBL_WIZ_FIRST_NAME' => 'Emri',
  'LBL_WIZ_FORUMS' => 'Forumet',
  'LBL_WIZ_IMPORT_DATA' => 'Importo të dhëna',
  'LBL_WIZ_KNOWLEDGE_BASE' => 'Baza e njohurisë',
  'LBL_WIZ_LAST_NAME' => 'Mbiemri',
  'LBL_WIZ_NAME_FORMAT' => 'Emri i Formatit',
  'LBL_WIZ_START_SUGAR' => 'Filloje Sugar',
  'LBL_WIZ_SUGAR_TRAINING' => 'Trajnim Sugar',
  'LBL_WIZ_SYSTEM_LOCALE_SETTINGS' => 'Parametrat Lokale',
  'LBL_WIZ_TIMEFORMAT' => 'Formati i kohës',
  'LBL_WIZ_TIMEZONE' => 'Koha e zonës',
  'LBL_WIZ_USER_LOCALE_TITLE' => 'Përdor cilësimet lokale',
  'LBL_WIZ_USER_PROFILE_TITLE' => 'Profil i përdoruesit',
  'LBL_WORST' => 'Më i keq',
  'LBL_WORST_ADJUSTED' => 'Më keq (e rregulluar)',
  'LBL_YES' => 'Po',
  'LBL_YESTERDAY' => 'dje',
  'LBL_YOU' => 'Ti',
  'LBL_YOUR_INSTANCES' => 'Instanca tuaja',
  'LNK_ABOUT' => 'Rreth',
  'LNK_ADVANCED_SEARCH' => 'Kërkim i avancuar',
  'LNK_BACKTOTOP' => 'Mbrapsht në krye',
  'LNK_BASIC_SEARCH' => 'Kërkim bazik',
  'LNK_CLOSE' => 'mbyll',
  'LNK_CREATE' => 'Krijo',
  'LNK_CREATE_WHEN_EMPTY' => 'Krijo rekorde tani.',
  'LNK_DELETE' => 'fshi',
  'LNK_DELETE_ALL' => 'fshi të gjitha',
  'LNK_EDIT' => 'ndrysho',
  'LNK_GET_LATEST' => 'Mer të fundit',
  'LNK_GET_LATEST_TOOLTIP' => 'Zavendëso me versionin e fundit',
  'LNK_HELP' => 'Ndihmë',
  'LNK_LIST_END' => 'Përfundim',
  'LNK_LIST_NEXT' => 'Vijues',
  'LNK_LIST_PREVIOUS' => 'Mëparshëm',
  'LNK_LIST_RETURN' => 'Kthehu në listë',
  'LNK_LIST_START' => 'Fillim',
  'LNK_LOAD_SIGNED' => 'Nënshkrim',
  'LNK_LOAD_SIGNED_TOOLTIP' => 'Zëvendësuar me dokument të nënshkruar',
  'LNK_MOBILE' => 'Celulari',
  'LNK_OFFLINE_SETTINGS' => 'Offline',
  'LNK_PMSE_BUSINESS_RULES_IMPORT_RECORD' => 'Importo rregullat e procesit të biznesit',
  'LNK_PMSE_BUSINESS_RULES_NEW_RECORD' => 'Krijo rregullat e procesit të biznesit',
  'LNK_PMSE_EMAIL_TEMPLATES_IMPORT_RECORD' => 'Importo templejtat e emailave të procesuar',
  'LNK_PMSE_EMAIL_TEMPLATES_NEW_RECORD' => 'Krijo procesimin e email templejtave',
  'LNK_PMSE_PROCESS_DEFINITIONS_IMPORT_RECORD' => 'Importo definimet e procesit',
  'LNK_PMSE_PROCESS_DEFINITIONS_NEW_RECORD' => 'Krijo definimet e procesit',
  'LNK_PORTAL_LOGIN_FORGOTPASSWORD' => 'Harruat fjalëkalimin',
  'LNK_PRINT' => 'Shtyp',
  'LNK_PRIVACY_POLICY' => 'Politika e privatësisë',
  'LNK_REMOVE' => 'largo',
  'LNK_RESUME' => 'Rezyme',
  'LNK_SAVED_VIEWS' => 'Opcionet e formatit:',
  'LNK_SEARCH_FTS_VIEW_ALL' => 'Shikoni gjitha rezultatet',
  'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Trego të gjitha',
  'LNK_SEARCH_NO_RESULTS' => 'Rezultatet nuk u gjetën.',
  'LNK_SETTINGS' => 'Parametra',
  'LNK_TERMS_OF_USE' => 'Kushtet e përdorimit',
  'LNK_THIRD_PARTY_SOFTWARE' => 'Softuer i palës së tretë',
  'LNK_TOUR' => 'Turne',
  'LNK_TOUR_DOCUMENTATION' => 'dokumentacion',
  'LNK_VIEW' => 'pamje',
  'LNK_VIEW_CHANGE_LOG' => 'Shih ndryshimin e hyrjes',
  'LOGIN_LOGO_ERROR' => 'Ju lutemi zëvendosoni logot e SugarCRM.Ve',
  'MSG_DUPLICATE' => 'Regjistrimi i llogarisë që kryeni mund të jetë dublim i llogarisë së regjistruar që tashmë ekziston. Llogaritë e regjistruara që përmbajnë emra të ngjashëm janë të rënditura posht. Shtyp Krijo Llogari për të vazhduar me krijimin e llogarisë së re, ose selekto një nga llogaritë ekzistuese të poshtërënditura',
  'MSG_EMPTY_LIST_VIEW_GO_TO_PARENT' => 'Ju mund të krijoni nga a. lista',
  'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Ju aktualisht nuk keni asnjë regjistrim të ruajtur. ose një tani.',
  'MSG_EMPTY_LIST_VIEW_NO_RESULTS_NO_IMPORT' => 'Ju aktualisht nuk keni shënime të ruajtura. një tani.',
  'MSG_IS_LESS_THAN' => 'është më pak se',
  'MSG_IS_MORE_THAN' => 'është më shumë se',
  'MSG_IS_NOT_BEFORE' => 'nuk është para',
  'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => 'Kliko OK për të parë këtë thirrje ose klikoni Anulo për të shkarkuar këtë mesazh.',
  'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Përshkrimi:',
  'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Lokacioni:',
  'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => 'Shtyp OK për të parë këtë mbledhje ose shtyp Anulo për të larguar këtë mbledhje.',
  'MSG_JS_ALERT_MTG_REMINDER_START' => 'fillimi',
  'MSG_LIST_VIEW_NO_RESULTS' => 'Nuk janë gjetur rezultate për',
  'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Nuk janë gjetur rezultate.',
  'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Krijo si të re',
  'MSG_OR_GREATER' => 'ose më e madhe',
  'MSG_SHOULD_BE' => 'duhet të jetë',
  'MSG_SHOW_DUPLICATES' => 'Regjistrimi i llogarisë që kryeni mund të jetë dublim i llogarisë së regjistruar që tashmë ekziston. Llogaritë e regjistruara që përmbajnë emra të ngjashëm janë të rënditura posht. Shtyp Ruaj për të vazhduar me krijimin e llogarisë së re, ose shtyp Anulo për tu kthyer në modulë pa krijuar llogarinë.',
  'NOTICE_NO_DELETE_CLOSED' => 'Ju nuk mund të fshini të dhënat që kanë një status të mbyllur të shitjes.',
  'NOTICE_NO_DELETE_CLOSED_STAGE' => 'Nuk mund të fshini regjistrimet të cilat kanë një fazë të mbyllur shitjeje.',
  'NOTICE_NO_DELETE_CLOSED_STATUS' => 'Ju nuk mund të fshini regjistrime të cilat kanë status të mbyllur shitjeje.',
  'NO_QUERY_SELECTED' => 'Formati i të dhënave që ju keni selektuar nuk përmban një pyetje. Ju lutemi selektoni një pyetje me porosi për këtë format të dhënave.',
  'NTC_CLICK_BACK' => 'Ju lutem klikoni butonin mbrapa shfletuesit dhe rregulloni gabimin.',
  'NTC_DATE_FORMAT' => '(vvvvv-mm-dd)',
  'NTC_DATE_TIME_FORMAT' => '(vvvv-mm-dd 24:00)',
  'NTC_DELETE_CONFIRMATION' => 'A jeni të sigurtë që dëshironi të fshini këtë regjistrim?',
  'NTC_DELETE_CONFIRMATION_FORMATTED' => 'Jeni të sigurtë që doni të fshini {0}?',
  'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'A jeni të sigurt që dëshironi të fshini regjistrimin-et e selektuar',
  'NTC_DELETE_CONFIRMATION_NUM' => 'A jeni të sigurtë që dëshironi të fshini',
  'NTC_DELETE_SELECTED_RECORDS' => 'regjistrimin(et) e selektuar?',
  'NTC_DELETE_SUCCESS' => 'Ju fshitë {0}.',
  'NTC_LOGIN_MESSAGE' => 'Ju lutemi shtypni emrin e përdoruesit dhe fjalëkalimin',
  'NTC_NO_ITEMS_DISPLAY' => 'asnjë',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Ky regjistrim përmban vlera në telefonin e zyrës dhe fushat e adresës. Për të rishkruajtur këtë vlera në telefonin e tyrës dhe adresën vijuese të llogarisë që keni zgjedhur, shtypni OK. Për të ruajtur vlerat aktuale shtyp Anulo.',
  'NTC_REMOVE_CONFIRMATION' => 'A jeni të sigurt që dëshironi të largoni këtë lidhje? Vetëm lidhja do të largohet. Regjistrimi nuk do të fshihet.',
  'NTC_REQUIRED' => 'Fushat e nevojshme të indikuara',
  'NTC_SUPPORT_SUGARCRM' => 'Mbështetje të projektit SugarCRM me burim të hapur me një donacion nëpërmjet PayPal - është e shpejtë, e lirë dhe e sigurtë!',
  'NTC_TEMPLATES_IS_USED' => 'Shabllonet në vijim janë përdorur në regjistrimet e emailit të marketingut. A jeni të sigurtë që dëshironi të fshini ato?',
  'NTC_TEMPLATE_IS_USED' => 'Shablloni është përdorur të paktën në një regjistrim të emailit të marketingut. A jeni të sigurtë që doni të fshini atë?',
  'NTC_TIME_FORMAT' => '(24:00)',
  'NTC_UNLINK_CONFIRMATION' => 'A jeni të sigurtë që doni të hiqni linkun këtij regjistrimi?',
  'NTC_UNLINK_CONFIRMATION_FORMATTED' => 'Jeni të sigurtë që doni fshirjen e {0}?',
  'NTC_UNLINK_SUCCESS' => 'Ju fshitë {0}.',
  'NTC_UPDATE_CONFIRMATION_NUM' => 'A jeni të sigurtë që dëshironi të rinovoni',
  'NTC_WELCOME' => 'Mirësevini',
  'NTC_YEAR_FORMAT' => '(vvvv)',
  'NavigationBar' => 'Butoni i navigacionit',
  'PrimaryButton' => 'Butoni primare',
  'SUGAR_API_EXCEPTION_NOT_AUTHORIZED' => 'Nuk lejohet të redaktohët fusha {0} në modulin: {1}',
  'SUGAR_API_EXCEPTION_RECORD_NOT_AUTHORIZED' => 'Nuk lejohet për të kryer veprimin "{0}" në këtë regjistrim',
  'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} » {{appId}}',
  'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} » {{/if}}{{module}} » {{appId}}',
  'TPL_DASHLET_MY_MODULE' => '{{module}} im',
  'TPL_DELETE_FILTER_SUCCESS' => 'Ju fshitë filtrin {{name}}.',
  'TPL_FILTER_SAVE' => 'Ju me sukses krijuat filtrin {{name}}.',
  'TPL_HISTORICAL_SUMMARY' => 'Përmbledhje historike për {{name}}',
  'TPL_IMPORT_VCARD_FAILURE' => 'Dështoi në krijimin e {{module}} nga vCard',
  'TPL_INACTIVE_TASKS_DASHLET_TIME_RELATIVE' => 'modifikimi i fundit {{relativetime}} në {{date}} më {{time}}',
  'TPL_LISTVIEW_SELECTED_ALL' => 'Ju keni zgjedhur të gjitha {{num}} të dhënat në setin e rezultatit.',
  'TPL_LISTVIEW_SELECTED_FIRST_OFFSET' => 'Ka më shumë se {{num}} të dhënave në setin e rezultatit. Ju keni zgjedhur {{num}} të dhënat e para.',
  'TPL_LISTVIEW_SELECT_ALL_RECORDS' => 'Ju keni zgjedhur të gjitha {{num}} të dhënat në këtë pikëpamje. {{link}} në setin e rezultatit.',
  'TPL_MASSADDTOLIST_DURATION_FORMAT' => '(për {{time}} {{unit}} majtas)',
  'TPL_MASSADDTOLIST_FAIL_TO_ATTEMPT' => 'Mass Add to Target Lista dështoi. Inicimi i një përpjekje të re ({{num}} nga {{total}}).',
  'TPL_MASSADDTOLIST_PROGRESS_STATUS' => 'Shtimi {{num}} nga {{total}}.',
  'TPL_MASSADDTOLIST_SUCCESS' => '{{num}}} regjistrimet janë shtuar me sukses.',
  'TPL_MASSADDTOLIST_TITLE' => '{{module}} Mass Add to Target List',
  'TPL_MASSADDTOLIST_WARNING_CLOSE' => 'Mass Add to Target Lista jo e kompletuar. {{num}} regjistrimet nuk u shtuan.',
  'TPL_MASSADDTOLIST_WARNING_INCOMPLETE' => 'Mass Add to Target Lista jo e kompletuar. {{num}} regjistrimet nuk u shtuan.',
  'TPL_MASSDELETE_DURATION_FORMAT' => '(për {{time}} {{unit}} majtas)',
  'TPL_MASSDELETE_FAIL_TO_ATTEMPT' => 'Mass fshirja dështoi. Inicimi i përpjekjes së re ({{num}} nga {{total}}).',
  'TPL_MASSDELETE_PROGRESS_STATUS' => 'Fshirja e {{num}} nga {{total}}.',
  'TPL_MASSDELETE_SUCCESS' => '{{num}} regjistrimet janë fshirë me sukses.',
  'TPL_MASSDELETE_TITLE' => '{{module}} Mass fshirja',
  'TPL_MASSDELETE_WARNING_CLOSE' => 'Mass fshirja jo e kompletuar. {{num}}  regjistrimi ngeli.',
  'TPL_MASSDELETE_WARNING_INCOMPLETE' => 'Mass fshirja jo e kompletuar. {{num}}  regjistrimi ngeli.',
  'TPL_MASSLINK_DURATION_FORMAT' => '(për {{time}} {{unit}} majtas)',
  'TPL_MASSLINK_FAIL_TO_ATTEMPT' => 'Mass Link Mass dështoi. Inicimi i një përpjekje të re ({{num}} nga {{total}}).',
  'TPL_MASSLINK_PROGRESS_STATUS' => 'Lidhja {{num}} nga {{total}}.',
  'TPL_MASSLINK_SUCCESS' => '{{num}} regjistrimet janë të lidhura me sukses.',
  'TPL_MASSLINK_TITLE' => '{{module}} Mass Link',
  'TPL_MASSLINK_WARNING_CLOSE' => 'Mass Link Mass jo i kompletuar. {{num}} regjistrimi nuk u shtua.',
  'TPL_MASSLINK_WARNING_INCOMPLETE' => 'Mass Link Mass jo i kompletuar. {{num}} regjistrimi nuk u shtua.',
  'TPL_MASSUPDATE_DURATION_FORMAT' => '(për {{time}} {{unit}} majtas)',
  'TPL_MASSUPDATE_FAIL_TO_ATTEMPT' => 'Mass përditësimi dështoi. Inicimi i përpjekjes të re ({{num}} nga {{total}}).',
  'TPL_MASSUPDATE_PROGRESS_STATUS' => 'Përditësimi {{num}} nga {{total}}.',
  'TPL_MASSUPDATE_SUCCESS' => '{{num}} të dhënat u përditësuan me sukses.',
  'TPL_MASSUPDATE_TITLE' => '{{module}} Mass përditësim',
  'TPL_MASSUPDATE_WARNING_CLOSE' => 'Mass përditësimi jo i kompletuar. {{num}} regjistrimet ngelin të pandryshuara.',
  'TPL_MASSUPDATE_WARNING_INCOMPLETE' => 'Mass përditësimi jo i kompletuar. {{num}} regjistrimet ngelin të pandryshuara.',
  'TPL_MASSUPDATE_WARNING_PERMISSION' => '{{remain}} regjistrimet janë injoruar për shkak të lejes.',
  'TPL_MASS_ADD_TO_LIST_QUEUED' => 'Kërkesa juaj për të shtuar të dhënat e zgjedhura në {{listName}} listën e synuar është planifikuar.',
  'TPL_MASS_ADD_TO_LIST_SUCCESS' => 'Të dhënat e zgjedhura janë shtuar në {{listName}} listë të synuar.',
  'TPL_MERGE_DUPLICATES_FAIL' => 'Bashkimi i të ngjajshmeve {{objectName}} dështoi.',
  'TPL_MERGE_DUPLICATES_FAIL_TO_ATTEMPT' => 'Bashkimi i të ngjajshmeve {{objectName}} dështoi. Nisja e një përpjekje të re ({{num}} nga {{total}}).',
  'TPL_MERGE_DUPLICATES_IDENTICAL' => 'Të gjitha të dhënat që kanë të bëjnë do të zhvendosen në procesverbalet primare.',
  'TPL_MERGE_DUPLICATES_PROGRESS_STATUS' => 'Bashkuar: {{percent}}%.',
  'TPL_MERGE_DUPLICATES_STAT' => '{{#with stat}}{{records}} regjistrime u bashkuan me sukses. {{total}} regjistrime të lidhura janë shtuar.{{/with}}',
  'TPL_MERGE_INVALID_NUMBER_RECORDS' => 'Numër i pavlefshëm i të dhënave të kaluara. Varg i vlefshme është nga {{minRecords}} deri te regjistrimet {{maxRecords}}.',
  'TPL_MERGING_RECORDS' => 'Bashko regjistrimet {{mergeCount}}',
  'TPL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_DESCRIPTION' => 'Për të dërguar njoftimin e detyrës, serveri i SMTP duhet të jetë i konfiguruar ne {{emailSettingsUrl}}',
  'TPL_OVERWRITE_POPULATED_DATA_CONFIRM' => 'Regjistrimi i zgjedhur do të prishë vlerat e mëposhtme: {{values}}. Anulo për të mbajtur vlerat ekzistuese. Konfirmo që të shkruash vlera të reja.',
  'TPL_OVERWRITE_POPULATED_DATA_CONFIRM_WITH_MODULE_SINGULAR' => '{{moduleSingularLower}} i selektuar ka vlerat e lidhura: {{values}}. Anulo për të mbajtur vlerat ekzistuese. Konfirmo që të shkruash vlera të reja.',
  'TPL_RECORD_SHARE_BODY' => 'Ju lutemi kontrollojeni {{module}} {{name}} nga {{appId}}',
  'TPL_RECORD_SHARE_SUBJECT' => '{{module}} {{name}} i ndarë nga {{appId}}',
  'TPL_SHOW_MORE_MODULE' => 'Më shumë',
  'TPL_STATUS_CHANGE_SUCCESS' => '{{moduleSingular}} shënuar si {{status}}.',
  'TPL_TABBED_DASHLET_GROUP_BUTTON_LABEL' => 'Gjëra të ekipit',
  'TPL_TABBED_DASHLET_USER_BUTTON_LABEL' => 'Artikujt e mia',
  'TPL_TIMEZONE_DIFFERENT' => 'Zona kohore e shfletuesit tuaj nuk përputhet me zonën kohore të ruajtur {{link}}',
  'UPLOAD_ERROR_HOME_TEXT' => 'GABIM: Ndodhi një gabim gjatë ngarkimit tuaj, ju lutemi kontaktoni një administrator për ndihmë.',
  'UPLOAD_ERROR_TEXT' => 'GABIM: Ndoshi një gabim gjatë ngarkimit. Kodi Gabim: {0} - {1}',
  'UPLOAD_ERROR_TEXT_SIZEINFO' => 'GABIM: Ndodhi një gabim gjatë ngarkimit. Kodi Gabim: {0} - {1}.Ngarkim_i madhësisë maksimale  është {2}',
  'UPLOAD_MAXIMUM_EXCEEDED' => 'Madhësia e ngarkimit ({0} bytes) tejkalon lejimin maksimal: {1} byte',
  'UPLOAD_REQUEST_ERROR' => 'Ka ndodhur një gabim. Ju lutemi të rifreskoni faqën tuaj dhe të provoni përsëri.',
  'WARNING_NO_DELETE_CLOSED_SELECTED_STATUS' => 'Një ose më shume nga regjistrimet e selektuara ka RLI me status i Mbyllur i Fituar ose i Mbyllur i Humbur dhe nuk mund të fshihet.',
  'WARNING_NO_DELETE_SELECTED' => 'Një ose më shumë të të dhënave të zgjedhura ka statusin e Closed Won ose Closed Lost dhe nuk mund të fshihen.',
  'WARNING_NO_DELETE_SELECTED_STAGE' => 'Një ose më shumë nga regjistrimet e selektuara kanë fazë shitjeje të mbyllur me fitim ose të mbyllur me humbje dhe nuk mund të fshihen.',
  'WARNING_NO_DELETE_SELECTED_STATUS' => 'Një ose më shumë nga regjistrimet e selektuara kanë status shitjeje të mbyllur me fitim ose të mbyllur me humbje dhe nuk mund të fshihen.',
  'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => 'Paralajmërim: Shfletuesi juaj është në funksion të pajtueshëm me IE e cila nuk është e mbështetur.',
  'WARN_BROWSER_VERSION_WARNING' => 'Kujdes: Versioni i shfletuesit ose shfletuesi që ju jeni duke përdorur nuk është i mbështetur.<br />Versionet e shfletuesve që janë të rekomanduara<br />                  *Internet Explorer 9<br />                  * Mozilla Firefox 14, 15<br />                  *Safari 6<br />                  *Google Chrome 22 (ose versioni më i fundit)',
  'WARN_LICENSE_EXPIRED' => 'Licenca SugarCRM e kompanisë suaj do të përfundojë së shpejti.',
  'WARN_LICENSE_SEATS' => 'Paralajmërim: Numri i përdoruesve aktivë tashmë është numri maksimal i licencave të lejuara.',
  'WARN_LICENSE_SEATS_MAXED' => 'Paralajmërim: Numri i përdoruesve aktivë e tejkalon numrin maksimal të licencave të lejuara:',
  'WARN_LICENSE_VALIDATION' => 'Licenca SugarCRM e kompanisë suaj duhet të validohet shpejti.',
  'WARN_ONLY_ADMINS' => 'Vetëm administratorët mund të hynë.',
  'WARN_UNSAVED_CHANGES' => 'Ju jeni gati për të lënë këtë regjistrim pa ruajtur çdo ndryshim që mund të keni bërë në regjistrim. A jeni të sigurtë që doni të navigoni larg nga ky regjistrim?',
);

