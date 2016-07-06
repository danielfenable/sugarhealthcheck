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
    0 => 'Isključeno',
    1 => 'Malo povećanje',
    2 => 'Srednje povećanje',
    3 => 'Veliko povećanje',
  ),
  'account_type_dom' => 
  array (
    '' => '',
    'Analyst' => 'Analitičar',
    'Competitor' => 'Konkurent',
    'Customer' => 'Korisnik',
    'Integrator' => 'Integrator',
    'Investor' => 'Investitor',
    'Other' => 'Ostalo',
    'Partner' => 'Partner',
    'Press' => 'Novinar',
    'Prospect' => 'Verovatni Kupac',
    'Reseller' => 'Preprodavac',
  ),
  'activity_dom' => 
  array (
    'Call' => 'Poziv',
    'Email' => 'Email',
    'Meeting' => 'Sastanak',
    'Note' => 'Beleška',
    'Task' => 'Zadatak',
  ),
  'activity_user_options' => 
  array (
    7 => 'Poslednjih 7 dana',
    30 => 'Poslednjih 30 dana',
    90 => 'Prethodni kvartal',
  ),
  'bopselect_type_dom' => 
  array (
    'Equals' => 'Jednako',
  ),
  'bselect_type_dom' => 
  array (
    'bool_false' => 'Ne',
    'bool_true' => 'Da',
  ),
  'bug_priority_dom' => 
  array (
    'High' => 'Visok',
    'Low' => 'Nizak',
    'Medium' => 'Srednje',
    'Urgent' => 'Hitno',
  ),
  'bug_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Prihvaćen',
    'Duplicate' => 'Duplikat',
    'Fixed' => 'Popravljeno',
    'Invalid' => 'Neispravno',
    'Later' => 'Kasnije',
    'Out of Date' => 'Van roka važnosti',
  ),
  'bug_status_dom' => 
  array (
    'Assigned' => 'Dodeljen',
    'Closed' => 'Zatvoren',
    'New' => 'Novi',
    'Pending' => 'Očekuje se',
    'Rejected' => 'Odbijen',
  ),
  'bug_type_dom' => 
  array (
    'Defect' => 'Defekt',
    'Feature' => 'Funkcija',
  ),
  'business_rule_type_list' => 
  array (
    'single' => 'Jednostrani',
  ),
  'call_direction_dom' => 
  array (
    'Inbound' => 'Dolazni',
    'Outbound' => 'Odlazni',
  ),
  'call_status_dom' => 
  array (
    'Held' => 'Održan',
    'Not Held' => 'Poništen',
    'Planned' => 'Zakazan',
  ),
  'campaign_status_dom' => 
  array (
    '' => '',
    'Active' => 'Aktivna',
    'Complete' => 'Završena',
    'In Queue' => 'Na čekanju',
    'Inactive' => 'Neaktivna',
    'Planning' => 'U planu',
    'Sending' => 'na slanju',
  ),
  'campaign_type_dom' => 
  array (
    '' => '',
    'Email' => 'Email',
    'Mail' => 'Mail',
    'NewsLetter' => 'Bilten',
    'Print' => 'Štampa',
    'Radio' => 'Radio',
    'Telesales' => 'Teleprodaja',
    'Television' => 'Televizija',
    'Web' => 'Web',
  ),
  'campainglog_activity_type_dom' => 
  array (
    '' => '',
    'blocked' => 'Suppressed by address or domain',
    'contact' => 'Kreirani kontakti',
    'invalid email' => 'Vraćene poruke, nevažeći Email',
    'lead' => 'Kreirani potencijalni klijenti',
    'link' => 'Klik kroz link',
    'removed' => 'Odjavite',
    'send error' => 'Vraćene poruke, ostalo',
    'targeted' => 'Poruka poslata/Pokušano',
    'viewed' => 'Pregledana poruka',
  ),
  'campainglog_target_type_dom' => 
  array (
    'Accounts' => 'Kompanije',
    'Contacts' => 'Kontakti',
    'Leads' => 'Potencijalni klijenti',
    'Prospects' => 'Ciljevi',
    'Users' => 'Korisnici',
  ),
  'case_priority_dom' => 
  array (
    'P1' => 'Visok',
    'P2' => 'Srednje',
    'P3' => 'Nizak',
  ),
  'case_relationship_type_dom' => 
  array (
    '' => '',
    'Alternate Contact' => 'Alternativni kontakt',
    'Primary Contact' => 'Primarni kontakt',
  ),
  'case_status_dom' => 
  array (
    'Assigned' => 'Dodeljeno',
    'Closed' => 'Zatvoren',
    'Duplicate' => 'Duplikat',
    'New' => 'Novi',
    'Pending Input' => 'Unos na čekanju',
    'Rejected' => 'Odbijen',
  ),
  'case_type_dom' => 
  array (
    'Administration' => 'Administracija',
    'Product' => 'Proizvod',
    'User' => 'Korisnik',
  ),
  'charset_dom' => 
  array (
    'BIG-5' => 'BIG-5 (Tajvan i Hongkong)',
    'CP1251' => 'CP1251 (MS ćirilica)',
    'CP1252' => 'CP1252 (MS Zapadna Evropa & US)',
    'EUC-CN' => 'EUC-CN (Pojednostavljen kineski GB2312)',
    'EUC-JP' => 'EUC-JP (Unix japanski)',
    'EUC-KR' => 'EUC-KR (Koreanski)',
    'EUC-TW' => 'EUC-TW (Tajvanski)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Koreanski)',
    'ISO-8859-1' => 'ISO-8859-1 (Zapadna Evropa i US)',
    'ISO-8859-10' => 'ISO-8859-10 (Latinica 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latinica 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latinica 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latinica 9)',
    'ISO-8859-2' => 'ISO-8859-2 (Centralna i istočna Evropa)',
    'ISO-8859-3' => 'ISO-8859-3 (Latinica 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latinica 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Ćirilica)',
    'ISO-8859-6' => 'ISO-8859-6 (Arapski)',
    'ISO-8859-7' => 'ISO-8859-7 (Grčki)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebrejski)',
    'ISO-8859-9' => 'ISO-8859-9 (Latinica 5)',
    'KOI8-R' => 'KOI8-R (Ruska ćirilica)',
    'KOI8-U' => 'KOI8-U (Ukrajinska ćirilica)',
    'SJIS' => '&#39;SJIS (MS Japanski)',
    'UTF-8' => 'UTF-8',
  ),
  'chart_strings' => 
  array (
    'barchart' => 'Dijagram stubaca',
    'clickfordrilldown' => 'Klikni da bi istražio',
    'collapselegend' => 'Suzi Legendu',
    'detailview' => 'Detaljnije ...',
    'drilldownoptions' => 'Opcije istraživanja',
    'expandlegend' => 'Proširi Legendu',
    'groupchart' => 'Grupni dijagram',
    'horizontalbarchart' => 'Horizontalni dijagram stubaca',
    'linechart' => 'Linijski dijagram',
    'noData' => 'Podaci nisu dostupni',
    'pieWedgeName' => 'sekcije',
    'piechart' => 'Kružni dijagram',
    'print' => 'Štampanje',
    'stackedchart' => 'Stacked Chart',
  ),
  'checkbox_dom' => 
  array (
    '' => '',
    1 => 'Da',
    2 => 'Ne',
  ),
  'checkbox_massupdate_dom' => 
  array (
    0 => 'Ne',
    1 => 'Da',
  ),
  'commit_stage_binary_dom' => 
  array (
    'exclude' => 'Isključiti',
    'include' => 'uključiti',
  ),
  'commit_stage_custom_dom' => 
  array (
    'exclude' => 'Isključeno',
    'include' => 'Uključeno',
    'upside' => 'Naopaka',
  ),
  'commit_stage_dom' => 
  array (
    'exclude' => 'Isključiti',
    'include' => 'Uključeno',
    'upside' => 'Naopaka',
  ),
  'contract_expiration_notice_dom' => 
  array (
    1 => '1 dan',
    3 => '3 dana',
    5 => '5 dana',
    7 => '1 nedelja',
    14 => '2 nedelje',
    21 => '3 nedelje',
    31 => '1 mesec',
  ),
  'contract_payment_frequency_dom' => 
  array (
    'halfyearly' => 'Polugodišnje',
    'monthly' => 'Mesečno',
    'quarterly' => 'Kvartalno',
    'yearly' => 'Godišnje',
  ),
  'contract_status_dom' => 
  array (
    'inprogress' => 'U toku',
    'notstarted' => 'Nije započet',
    'signed' => 'Potpisan',
  ),
  'countries_dom' => 
  array (
    '' => '',
    'ABU DHABI' => 'Abu Dabi',
    'ADEN' => 'Aden',
    'AFGHANISTAN' => 'Avganistan',
    'ALBANIA' => 'Albanija',
    'ALGERIA' => 'Alžir',
    'AMERICAN SAMOA' => 'Američka Samoa',
    'ANDORRA' => 'Andora',
    'ANGOLA' => 'Angola',
    'ANTARCTICA' => 'Antartik',
    'ANTIGUA' => 'Antigva',
    'ARGENTINA' => 'Argentina',
    'ARMENIA' => 'Jermenija',
    'ARUBA' => 'Aruba',
    'AUSTRALIA' => 'Australija',
    'AUSTRIA' => 'Austrija',
    'AZERBAIJAN' => 'Azerbejdžan',
    'BAHAMAS' => 'Bahami',
    'BAHRAIN' => 'Bahrein',
    'BANGLADESH' => 'Bangladeš',
    'BARBADOS' => 'Barbados',
    'BELARUS' => 'Belorusija',
    'BELGIUM' => 'Belgija',
    'BELIZE' => 'Belize',
    'BENIN' => 'Benin',
    'BERMUDA' => 'Bermudi',
    'BHUTAN' => 'Butan',
    'BOLIVIA' => 'Bolivija',
    'BOSNIA' => 'Bosna',
    'BOTSWANA' => 'Bocvana',
    'BOUVET ISLAND' => 'Ostrvo Buvet',
    'BRAZIL' => 'Brazil',
    'BRITISH ANTARCTICA TERRITORY' => 'Britanska teritorija na Antarktiku',
    'BRITISH INDIAN OCEAN TERRITORY' => 'Britanska teritorija na Indijskom okeanu',
    'BRITISH VIRGIN ISLANDS' => 'Britanska Devičanska ostrva',
    'BRITISH WEST INDIES' => 'Britanska teritorija zapadnog Indijskog okeana',
    'BRUNEI' => 'Brunej',
    'BULGARIA' => 'Bugarska',
    'BURKINA FASO' => 'Burkina Faso',
    'BURUNDI' => 'Burundi',
    'CAMBODIA' => 'Kambodža',
    'CAMEROON' => 'Kamerun',
    'CANADA' => 'Kanada',
    'CANAL ZONE' => 'Kanalska zona',
    'CANARY ISLAND' => 'Kanarska ostrva',
    'CAPE VERDI ISLANDS' => 'Ostrva Rt Verdi',
    'CAYMAN ISLANDS' => 'Kajmanska ostrva',
    'CEVLON' => 'Cejlon',
    'CHAD' => 'Čad',
    'CHANNEL ISLAND UK' => 'Britansko kanal ostrvo',
    'CHILE' => 'Čile',
    'CHINA' => 'Kina',
    'CHRISTMAS ISLAND' => 'Božićno ostrvo',
    'COCOS (KEELING) ISLAND' => 'Kokosova ostrva',
    'COLOMBIA' => 'Kolumbija',
    'COMORO ISLANDS' => 'Komorska ostrva',
    'CONGO' => 'Kongo',
    'CONGO KINSHASA' => 'Kongo Kinšasa',
    'COOK ISLANDS' => 'Kukovo ostrvo',
    'COSTA RICA' => 'Kostarika',
    'CROATIA' => 'Hrvatska',
    'CUBA' => 'Kuba',
    'CURACAO' => 'Kurakao',
    'CYPRUS' => 'Kipar',
    'CZECH REPUBLIC' => 'Češka Republika',
    'DAHOMEY' => 'Dahomeji',
    'DENMARK' => 'Danska',
    'DJIBOUTI' => 'Džibuti',
    'DOMINICA' => 'Dominika',
    'DOMINICAN REPUBLIC' => 'Dominikanska Republika',
    'DUBAI' => 'Dubai',
    'ECUADOR' => 'Ekvador',
    'EGYPT' => 'Egipat',
    'EL SALVADOR' => 'El Salvador',
    'EQUATORIAL GUINEA' => 'Ekvatorijalna Gvineja',
    'ESTONIA' => 'Estonija',
    'ETHIOPIA' => 'Etiopija',
    'FAEROE ISLANDS' => 'Farska ostrva',
    'FALKLAND ISLANDS' => 'Foklandska ostrva',
    'FIJI' => 'Fidži',
    'FINLAND' => 'Finska',
    'FRANCE' => 'Francuska',
    'FRENCH GUIANA' => 'Francuska Gvajana',
    'FRENCH POLYNESIA' => 'Francuska Polinezija',
    'GABON' => 'Gabon',
    'GAMBIA' => 'Gambija',
    'GEORGIA' => 'Džordžija',
    'GERMANY' => 'Nemačka',
    'GHANA' => 'Gana',
    'GIBRALTAR' => 'Gibraltar',
    'GREECE' => 'Grčka',
    'GREENLAND' => 'Grinland',
    'GUADELOUPE' => 'Gvadalupe',
    'GUAM' => 'Guam',
    'GUATEMALA' => 'Gvatemala',
    'GUINEA' => 'Gvineja',
    'GUYANA' => 'Gvajana',
    'HAITI' => 'Haiti',
    'HONDURAS' => 'Honduras',
    'HONG KONG' => 'Hong Kong',
    'HUNGARY' => 'Mađarska',
    'ICELAND' => 'Island',
    'IFNI' => 'Ifni',
    'INDIA' => 'Indija',
    'INDONESIA' => 'Indonezija',
    'IRAN' => 'Iran',
    'IRAQ' => 'Irak',
    'IRELAND' => 'Irska',
    'ISRAEL' => 'Izrael',
    'ITALY' => 'Italija',
    'IVORY COAST' => 'Obala Slonovače',
    'JAMAICA' => 'Jamajka',
    'JAPAN' => 'Japan',
    'JORDAN' => 'Jordan',
    'KAZAKHSTAN' => 'Kazahstan',
    'KENYA' => 'Kenija',
    'KOREA' => 'Koreja',
    'KOREA, SOUTH' => 'Južna Koreja',
    'KUWAIT' => 'Kuvajt',
    'KYRGYZSTAN' => 'Kirgistan',
    'LAOS' => 'Laos',
    'LATVIA' => 'Letonija',
    'LEBANON' => 'Liban',
    'LEEWARD ISLANDS' => 'Livardska ostrva',
    'LESOTHO' => 'Lesoto',
    'LIBYA' => 'Libija',
    'LIECHTENSTEIN' => 'Lihtenštajn',
    'LITHUANIA' => 'Litvanija',
    'LUXEMBOURG' => 'Luksemburg',
    'MACAO' => 'Makao',
    'MACEDONIA' => 'Makedonija',
    'MADAGASCAR' => 'Madagaskar',
    'MALAWI' => 'Malavi',
    'MALAYSIA' => 'Malezija',
    'MALDIVES' => 'Maldivi',
    'MALI' => 'Mali',
    'MALTA' => 'Malta',
    'MARTINIQUE' => 'Martinik',
    'MAURITANIA' => 'Mauritanija',
    'MAURITIUS' => 'Mauricijus',
    'MELANESIA' => 'Mikronezija',
    'MEXICO' => 'Meksiko',
    'MOLDOVIA' => 'Moldavija',
    'MONACO' => 'Monako',
    'MONGOLIA' => 'Mongolija',
    'MOROCCO' => 'Maroko',
    'MOZAMBIQUE' => 'Mozambik',
    'MYANAMAR' => 'Mijanamar',
    'NAMIBIA' => 'Nambija',
    'NEPAL' => 'Nepal',
    'NETHERLANDS' => 'Holandija',
    'NETHERLANDS ANTILLES' => 'Holandski Antili',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'Holandski Antili - Neutralna zona',
    'NEW CALADONIA' => 'Nova Kaladonija',
    'NEW HEBRIDES' => 'Novi Hebridi',
    'NEW ZEALAND' => 'Novi Zeland',
    'NICARAGUA' => 'Nikaragva',
    'NIGER' => 'Niger',
    'NIGERIA' => 'Nigerija',
    'NORFOLK ISLAND' => 'Ostrvo Norfolk',
    'NORWAY' => 'Norveška',
    'OMAN' => 'Oman',
    'OTHER' => 'Ostalo',
    'PACIFIC ISLAND' => 'Pacifičko ostrvo',
    'PAKISTAN' => 'Pakistan',
    'PANAMA' => 'Panama',
    'PAPUA NEW GUINEA' => 'Papua Nova Gvineja',
    'PARAGUAY' => 'Paragvaj',
    'PERU' => 'Peru',
    'PHILIPPINES' => 'Filipini',
    'POLAND' => 'Poljska',
    'PORTUGAL' => 'Portugalija',
    'PORTUGUESE TIMOR' => 'Portugalski Timor',
    'PUERTO RICO' => 'Porto Riko',
    'QATAR' => 'Katar',
    'REPUBLIC OF BELARUS' => 'Beloruska Republika',
    'REPUBLIC OF SOUTH AFRICA' => 'Južnoafrička Republika',
    'REUNION' => 'Reunion',
    'ROMANIA' => 'Rumunija',
    'RUSSIA' => 'Rusija',
    'RWANDA' => 'Ruanda',
    'RYUKYU ISLANDS' => 'Ostrva Riukiu',
    'SABAH' => 'Sabah',
    'SAN MARINO' => 'San Marino',
    'SAUDI ARABIA' => 'Saudijska Arabija',
    'SENEGAL' => 'Senegal',
    'SERBIA' => 'Srbija',
    'SEYCHELLES' => 'Sejšeli',
    'SIERRA LEONE' => 'Siera Leone',
    'SINGAPORE' => 'Singapur',
    'SLOVAKIA' => 'Slovačka',
    'SLOVENIA' => 'Slovenija',
    'SOMALILIAND' => 'Somalilend',
    'SOUTH AFRICA' => 'Južna Afrika',
    'SOUTH YEMEN' => 'Južni Jemen',
    'SPAIN' => 'Španija',
    'SPANISH SAHARA' => 'Španska Sahara',
    'SRI LANKA' => 'Šri Lanka',
    'ST. KITTS AND NEVIS' => 'Sveti Kits i Nevis',
    'ST. LUCIA' => 'Sveta Lucija',
    'SUDAN' => 'Sudan',
    'SURINAM' => 'Surinam',
    'SW AFRICA' => 'Južnozapadna Afrika',
    'SWAZILAND' => 'Svazilend',
    'SWEDEN' => 'Švedska',
    'SWITZERLAND' => 'Švajcarska',
    'SYRIA' => 'Sirija',
    'TAIWAN' => 'Tajvan',
    'TAJIKISTAN' => 'Tadžikistan',
    'TANZANIA' => 'Tanzania',
    'THAILAND' => 'Tajland',
    'TONGA' => 'Tonga',
    'TRINIDAD' => 'Trinidad',
    'TUNISIA' => 'Tunis',
    'TURKEY' => 'Turska',
    'UGANDA' => 'Uganda',
    'UKRAINE' => 'Ukraina',
    'UNITED ARAB EMIRATES' => 'Ujedinjeni Arapski Emirati',
    'UNITED KINGDOM' => 'Velika Britanija',
    'UPPER VOLTA' => 'Gornja Volta',
    'URUGUAY' => 'Urugvaj',
    'US PACIFIC ISLAND' => 'Američko Pacifičko ostrvo',
    'US VIRGIN ISLANDS' => 'Američka Devičanska ostrva',
    'USA' => 'Sjedinjene Američke Države',
    'UZBEKISTAN' => 'Uzbekistan',
    'VANUATU' => 'Vanuatu',
    'VATICAN CITY' => 'Vatikan',
    'VENEZUELA' => 'Venecuela',
    'VIETNAM' => 'Vijetnam',
    'WAKE ISLAND' => 'Ostrvo Vejk',
    'WEST INDIES' => 'Zapadni Indijski okean',
    'WESTERN SAHARA' => 'Zapadna Sahara',
    'YEMEN' => 'Jemen',
    'ZAIRE' => 'Zair',
    'ZAMBIA' => 'Zambija',
    'ZIMBABWE' => 'Zimbabve',
  ),
  'cselect_type_dom' => 
  array (
    'Does not Equal' => 'Nije jednak',
    'Equals' => 'Jednak',
  ),
  'custom_fields_importable_dom' => 
  array (
    'false' => 'Ne',
    'required' => 'Zahtevano',
    'true' => 'Da',
  ),
  'custom_fields_merge_dup_dom' => 
  array (
    0 => 'Isključeno',
    1 => 'Enabled',
    2 => 'U filteru',
    3 => 'Podrazumevani izabrani filter',
    4 => 'Samo filter',
  ),
  'custom_layout_dom' => 
  array (
    'Disabled' => 'Onemogućen',
    'Enabled' => 'Omogućen',
  ),
  'd3_chart_types' => 
  array (
    'bar chart' => 'Dijagram sa stupcima',
    'funnel chart 3D' => 'Levkasti dijagram',
    'group by chart' => 'Dijagram sa grupisanim stupcima',
    'horizontal bar chart' => 'Horizontalni dijagram stubaca',
    'horizontal group by chart' => 'Horizontalni dijagram sa grupisanim stupcima',
    'line chart' => 'Linijski dijagram',
    'pie chart' => 'Kružni dijagram',
  ),
  'd3_value_placement' => 
  array (
    'start' => 'Početak',
    'top' => 'Vrh',
    0 => 'Nijedna',
    'end' => 'Kraj',
    'middle' => 'Sredina',
    1 => 'Podrazumevano',
  ),
  'dashlet_auto_refresh_options' => 
  array (
    -1 => 'Ne osvežavaj automatski',
    30 => 'Svakih 30 sekundi',
    60 => 'Svaki minut',
    180 => 'Svaka 3 minuta',
    300 => 'Svakih 5 minuta',
    600 => 'Svakih 10 minuta',
  ),
  'dashlet_auto_refresh_options_admin' => 
  array (
    -1 => 'Nikad',
    30 => 'Svakih 30 sekundi',
    60 => 'Svaki minut',
    180 => 'Svaka 3 minuta',
    300 => 'Svakih 5 minuta',
    600 => 'Svakih 10 minuta',
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
    'Normal' => 'Običan',
    'Scalar' => 'Skalar',
  ),
  'dataset_att_format_type_dom' => 
  array (
    'Accounting' => 'Račun',
    'Date' => 'Datum',
    'Datetime' => 'Datum i vreme',
    'Text' => 'Tekst',
  ),
  'dataset_att_format_type_scalar_dom' => 
  array (
    'Day' => 'Dan',
    'Month' => 'Mesec',
    'Quarter' => 'Kvartal',
    'Week' => 'Nedelja',
    'Year' => 'Godina',
  ),
  'dataset_layout_type_dom' => 
  array (
    'Column' => 'Kolona',
  ),
  'dataset_style_dom' => 
  array (
    'bold' => 'Podebljan',
    'italic' => 'Ukošen',
    'normal' => 'Normalan',
  ),
  'date_range_operator_dom' => 
  array (
    'last_30_days' => 'Poslednjih 30 dana',
    'last_7_days' => 'Poslednjih 7 dana',
    'last_month' => 'Prošli mesec',
    'last_year' => 'Prošla godina',
    'next_30_days' => 'Narednih 30 dana',
    'next_7_days' => 'Narednih 7 dana',
    'next_month' => 'Sledeći mesec',
    'next_year' => 'Sledeća godina',
    'this_month' => 'Ovog meseca',
    'this_year' => 'Ove godine',
  ),
  'date_range_search_dom' => 
  array (
    '=' => 'Jednako',
    'between' => 'Između',
    'greater_than' => 'Nakon',
    'last_30_days' => 'Poslednjih 30 dana',
    'last_7_days' => 'Poslednjih 7 dana',
    'last_month' => 'Prošli mesec',
    'last_year' => 'Prošla godina',
    'less_than' => 'Pre',
    'next_30_days' => 'Narednih 30 dana',
    'next_7_days' => 'Narednih 7 dana',
    'next_month' => 'Sledeći mesec',
    'next_year' => 'Sledeća godina',
    'not_equal' => 'Nejednako',
    'this_month' => 'Ovaj mesec',
    'this_year' => 'Ove godine',
  ),
  'dnb_bal_after_before_btw' => 
  array (
    'btw' => 'Između',
    'gte' => 'Posle',
    'lte' => 'Pre',
  ),
  'dnb_bal_filing_trading_option' => 
  array (
    'filingdate' => 'Datum početka',
    'tradingdate' => 'Datum trgovine',
  ),
  'dnb_bal_gte_lte_btw' => 
  array (
    'btw' => 'Između',
    'gte' => 'Veće od ili jednako',
    'lte' => 'Manje od ili jednako',
  ),
  'dnb_bal_miles_km' => 
  array (
    3349 => 'KM',
    3353 => 'Milja',
  ),
  'dnb_bal_prescreen_options' => 
  array (
    10925 => 'Nizak',
    10926 => 'Srednji',
    10927 => 'Visok',
  ),
  'dnb_bal_primary_secondary' => 
  array (
    'false' => 'Primarni i Sekundarni',
    'true' => 'Samo Primarni',
  ),
  'dnb_bal_single_all' => 
  array (
    'allsites' => 'Svi sajtovi',
    'singlesite' => 'Jedan sajt',
  ),
  'dnb_contact_kw_scope' => 
  array (
    'Bio' => 'Biografija',
    'Both' => 'Oba/oboje',
    'Title' => 'Naslov',
  ),
  'dnb_contact_types' => 
  array (
    'Contacts' => 'Kontakti',
    'Leads' => 'Potencijalni klijenti',
    'Prospects' => 'Ciljevi',
  ),
  'dnb_countries_iso' => 
  array (
    'AD' => 'Andora',
    'AE' => 'Ujedinjeni Arapski Emirati',
    'AF' => 'Avganistan',
    'AG' => 'Antigva i Barbuda',
    'AI' => 'Angvila',
    'AL' => 'Albanija',
    'AM' => 'Jermenija',
    'AN' => 'Holandski Antili',
    'AO' => 'Angola',
    'AQ' => 'Antartik',
    'AR' => 'Argentina',
    'AS' => 'Američka Samoa',
    'AT' => 'Austrija',
    'AU' => 'Australija',
    'AW' => 'Aruba',
    'AZ' => 'Azerbejdžan',
    'BA' => 'Bosna i Hercegovina',
    'BB' => 'Barbados',
    'BD' => 'Bangladeš',
    'BE' => 'Belgija',
    'BF' => 'Burkina Faso',
    'BG' => 'Bugarska',
    'BH' => 'Bahrein',
    'BI' => 'Burundi',
    'BJ' => 'Benin',
    'BM' => 'Bermudska ostrva',
    'BN' => 'Brunei',
    'BO' => 'Bolivija',
    'BR' => 'Brazil',
    'BS' => 'Bahami',
    'BT' => 'Butan',
    'BV' => 'Buve',
    'BW' => 'Bocvana',
    'BY' => 'Belorusija',
    'BZ' => 'Belize',
    'CA' => 'Kanada',
    'CC' => 'Kokosova Ostrva',
    'CD' => 'Demokratska Republika Kongo',
    'CF' => 'Centralnoafrička Republika',
    'CG' => 'Kongo',
    'CH' => 'Švajcarska',
    'CI' => 'Obala Slonovače',
    'CK' => 'Kukova Ostrva',
    'CL' => 'Čile',
    'CM' => 'Kamerun',
    'CN' => 'Kina',
    'CO' => 'Kolumbija',
    'CR' => 'Kostarika',
    'CU' => 'Kuba',
    'CV' => 'Zelenortska Ostrva',
    'CX' => 'Božićno ostrvo',
    'CY' => 'Kipar',
    'CZ' => 'Češka republika',
    'DE' => 'Nemačka',
    'DJ' => 'Džibuti',
    'DK' => 'Danska',
    'DM' => 'Dominikana',
    'DO' => 'Dominikanska Republika',
    'DZ' => 'Alžir',
    'EC' => 'Ekvador',
    'EE' => 'Estonija',
    'EG' => 'Egipat',
    'EH' => 'Zapadna Sahara',
    'ER' => 'Eritreja',
    'ES' => 'Španija',
    'ET' => 'Etiopija',
    'FI' => 'Finska',
    'FJ' => 'Fidži',
    'FK' => 'Foklandska Ostrva',
    'FM' => 'Mikronezija',
    'FO' => 'Farska Ostrva',
    'FR' => 'Francuska',
    'FX' => 'Kontinentalna Francuska',
    'GA' => 'Gabon',
    'GB' => 'Ujedinjeno Kraljevstvo',
    'GD' => 'Granada',
    'GE' => 'Gruzija',
    'GF' => 'Francuska Gvajana',
    'GH' => 'Gana',
    'GI' => 'Gibraltar',
    'GL' => 'Grenland',
    'GM' => 'Gambija',
    'GN' => 'Gvineja',
    'GP' => 'Gvadelup',
    'GQ' => 'Ekvatorijalna Gvineja',
    'GR' => 'Grčka',
    'GS' => 'Južna Džordžija i Južna Sendvička Ostrva',
    'GT' => 'Gvatemala',
    'GU' => 'Gvam',
    'GW' => 'Gvineja Bisao',
    'GY' => 'Gvajana',
    'HK' => 'Hong Kong',
    'HM' => 'Ostrva Herd I Mekdonald',
    'HN' => 'Honduras',
    'HR' => 'Hrvatska',
    'HT' => 'Haiti',
    'HU' => 'Mađarska',
    'ID' => 'Indonezija',
    'IE' => 'Irska',
    'IL' => 'Izrael',
    'IN' => 'Indija',
    'IO' => 'Britanska teritorija Indijskog okeana',
    'IQ' => 'Irak',
    'IR' => 'Iran',
    'IS' => 'Island',
    'IT' => 'Italija',
    'JM' => 'Jamajka',
    'JO' => 'Jordan',
    'JP' => 'Japan',
    'KE' => 'Kenija',
    'KG' => 'Kirgistan',
    'KH' => 'Kambodža',
    'KI' => 'Kiribati',
    'KM' => 'Komori',
    'KN' => 'Sent Kits i Nevis',
    'KP' => 'Severna Koreja',
    'KR' => 'Južna Koreja',
    'KW' => 'Kuvajt',
    'KY' => 'Kajmanska ostrva',
    'KZ' => 'Kazahstan',
    'LA' => 'Laos',
    'LB' => 'Liban',
    'LC' => 'Sent Vinsent i Grenadini',
    'LI' => 'Lihenštajn',
    'LK' => 'Šri Lanka',
    'LR' => 'Liberija',
    'LS' => 'Lesoto',
    'LT' => 'Litvanija',
    'LU' => 'Luksemburg',
    'LV' => 'Letonija',
    'LY' => 'Libija',
    'MA' => 'Maroko',
    'MC' => 'Monako',
    'MD' => 'Moldavija',
    'ME' => 'Crna Gora',
    'MG' => 'Madagaskar',
    'MH' => 'Maršalska Ostrva',
    'MK' => 'Bivša Jugoslovenska Republika Makedonija',
    'ML' => 'Mali',
    'MM' => 'Mjanmar',
    'MN' => 'Mongolija',
    'MO' => 'Makao',
    'MP' => 'Severna Marijanska ostrva',
    'MQ' => 'Martinik',
    'MR' => 'Mauritanija',
    'MS' => 'Montserat',
    'MT' => 'Malta',
    'MU' => 'Mauricijus',
    'MV' => 'Maldivi',
    'MW' => 'Malavi',
    'MX' => 'Meksiko',
    'MY' => 'Malezija',
    'MZ' => 'Mozambik',
    'NA' => 'Namibija',
    'NC' => 'Nova Kaledonija',
    'NE' => 'Niger',
    'NF' => 'Ostrvo Norfok',
    'NG' => 'Nigerija',
    'NI' => 'Nikaragva',
    'NL' => 'Holandija',
    'NO' => 'Norveška',
    'NP' => 'Nepal',
    'NR' => 'Nauru',
    'NU' => 'Nijue',
    'NZ' => 'Novi Zeland',
    'OM' => 'Oman',
    'PA' => 'Panama',
    'PE' => 'Peru',
    'PF' => 'Francuska Polinezija',
    'PG' => 'Papua Nova Gvineja',
    'PH' => 'Filipini',
    'PK' => 'Paksitan',
    'PL' => 'Poljska',
    'PM' => 'Sen Pjer i Mikelion',
    'PN' => 'Ostrva Pitkern',
    'PR' => 'Portoriko',
    'PS' => 'Palestina',
    'PT' => 'Portugalija',
    'PW' => 'Palau',
    'PY' => 'Paragvaj',
    'QA' => 'Katar',
    'RE' => 'Reinion',
    'RO' => 'Rumunija',
    'RS' => 'Srbija',
    'RU' => 'Rusija',
    'RW' => 'Ruanda',
    'SA' => 'Saudijska Arabija',
    'SB' => 'Solomonova Ostrva',
    'SC' => 'Sejšeli',
    'SD' => 'Sudan',
    'SE' => 'Švedska',
    'SG' => 'Singapur',
    'SH' => 'Sveta Jelena',
    'SI' => 'Slovenija',
    'SJ' => 'Svalbard i Jan Majen',
    'SK' => 'Slovačka',
    'SL' => 'Siera Leone',
    'SM' => 'San Marino',
    'SN' => 'Senegal',
    'SO' => 'Somalija',
    'SR' => 'Surinam',
    'ST' => 'Sao Tome i Prinsipe',
    'SV' => 'Salvador',
    'SY' => 'Sirija',
    'SZ' => 'Svaziland',
    'TC' => 'Turks i Kajkos',
    'TD' => 'Čad',
    'TF' => 'Francuske južne teritorije',
    'TG' => 'Togo',
    'TH' => 'Tajland',
    'TJ' => 'Tadžikistan',
    'TK' => 'Tokelau',
    'TM' => 'Turkmenistan',
    'TN' => 'Tunis',
    'TO' => 'Tonga',
    'TP' => 'Istočni Timor',
    'TR' => 'Turska',
    'TT' => 'Trinidad i Tobago',
    'TV' => 'Tuvalu',
    'TW' => 'Tajvan',
    'TZ' => 'Tanzanija',
    'UA' => 'Ukrajna',
    'UG' => 'Uganda',
    'UM' => 'Mala spoljna ostrva Sjedinjenih Država',
    'US' => 'Sjedinjene Države',
    'UY' => 'Urugvaj',
    'UZ' => 'Uzbekistan',
    'VA' => 'Vatikan',
    'VC' => 'Sent Vinsent i Grenadini',
    'VE' => 'Venecuela',
    'VG' => 'Britanska Devičanska ostrva',
    'VI' => 'Američka Devičanska Ostrva',
    'VN' => 'Vijetnam',
    'VU' => 'Vanuatu',
    'WF' => 'Valis i Futuna',
    'WS' => 'Samoa',
    'YE' => 'Jemen',
    'YT' => 'Majot',
    'ZA' => 'Južna Afrika',
    'ZM' => 'Zambija',
    'ZW' => 'Zimbabve',
  ),
  'dnb_countries_radius_iso' => 
  array (
    'CA' => 'Kanada',
    'US' => 'Sjedinjene Države',
  ),
  'dnb_sic_naics_code' => 
  array (
    700 => 'NAICS kod',
    3599 => 'SIC kod',
  ),
  'dnb_states_iso' => 
  array (
    'AD' => 
    array (
      1 => 
      array (
        'code' => 'ALV',
        'name' => 'Andora la Vela',
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
        'name' => 'Badakšhan',
      ),
      5 => 
      array (
        'code' => 'EA',
        'name' => 'Baglan',
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
        'name' => 'Parvan',
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
        'name' => 'Geghark &#39;unik&#39;',
      ),
      5 => 
      array (
        'code' => 'KOT',
        'name' => 'Kotayk&#39;',
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
        'name' => 'Syunik&#39;',
      ),
      9 => 
      array (
        'code' => 'TAV',
        'name' => 'Tavush',
      ),
      10 => 
      array (
        'code' => 'VAY',
        'name' => 'Vayots&#39; Dzor',
      ),
      11 => 
      array (
        'code' => 'YER',
        'name' => 'Yerevan',
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
        'name' => 'Istočni',
      ),
      2 => 
      array (
        'code' => 'M',
        'name' => 'Manu&#39;a',
      ),
      3 => 
      array (
        'code' => 'R',
        'name' => 'Ostrvo Ruža',
      ),
      4 => 
      array (
        'code' => 'S',
        'name' => 'Svainska ostrva',
      ),
      5 => 
      array (
        'code' => 'W',
        'name' => 'Zapadni',
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
    ),
    'BA' => 
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
    'BB' => 
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
    ),
    'BD' => 
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
    ),
    'BE' => 
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
    'BF' => 
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
    ),
    'BG' => 
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
    ),
    'BH' => 
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
    ),
    'BI' => 
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
    ),
    'BJ' => 
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
    ),
    'BM' => 
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
    ),
    'BN' => 
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
    'BO' => 
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
    'BR' => 
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
    ),
    'BS' => 
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
    ),
    'BT' => 
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
    ),
    'BW' => 
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
    'BY' => 
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
    ),
    'BZ' => 
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
    ),
    'CA' => 
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
    ),
    'CF' => 
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
    ),
    'CL' => 
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
    ),
    'CM' => 
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
    'CN' => 
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
    ),
    'CV' => 
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
    ),
    'Country' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => 'Države',
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
        'name' => 'M&#39;Sila',
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
        'code' => '',
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
    'IO' => 
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
    'KH' => 
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
    ),
    'KY' => 
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
    'TD' => 
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
    ),
  ),
  'document_category_dom' => 
  array (
    '' => '',
    'Knowledege Base' => 'Baza znanja',
    'Marketing' => 'Marketing',
    'Sales' => 'Prodaja',
  ),
  'document_status_dom' => 
  array (
    'Active' => 'Aktivan',
    'Draft' => 'Nacrt',
    'Expired' => 'Istekao',
    'FAQ' => 'Česta pitanja',
    'Pending' => 'Očekuje se',
    'Under Review' => 'U pregledu',
  ),
  'document_subcategory_dom' => 
  array (
    '' => '',
    'FAQ' => 'Česta pitanja',
    'Marketing Collateral' => 'Indirektni marketing',
    'Product Brochures' => 'Brošure proizvoda',
  ),
  'document_template_type_dom' => 
  array (
    '' => '',
    'eula' => 'EULA',
    'license' => 'Sporazum o licenci',
    'mailmerge' => 'Spajanje Email-ova',
    'nda' => 'NDA',
  ),
  'documentation' => 
  array (
    'COM' => '05_Sugar_Community_Edition',
    'CORP' => '03_Sugar_Corporate',
    'ENT' => '02_Sugar_Enterprise',
    'LBL_DOCS' => 'Dokumentacija',
    'PRO' => '04_Sugar_Professional',
    'ULT' => '01_Sugar_Ultimate',
  ),
  'dom_cal_day_long' => 
  array (
    0 => '',
    1 => 'Nedelja',
    2 => 'Ponedeljak',
    3 => 'Utorak',
    4 => 'Sreda',
    5 => 'Četvrtak',
    6 => 'Petak',
    7 => 'Subota',
  ),
  'dom_cal_day_of_week' => 
  array (
    0 => 'Ned',
    1 => 'Pon',
    2 => 'Uto',
    3 => 'Sre',
    4 => 'Čet',
    5 => 'Pet',
    6 => 'Sub',
  ),
  'dom_cal_day_short' => 
  array (
    0 => '',
    1 => 'Ned',
    2 => 'Pon',
    3 => 'Uto',
    4 => 'Sre',
    5 => 'Čet',
    6 => 'Pet',
    7 => 'Sub',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Januar',
    2 => 'Februar',
    3 => 'Mart',
    4 => 'April',
    5 => 'Maj',
    6 => 'Jun',
    7 => 'Jul',
    8 => 'Avgust',
    9 => 'Septembar',
    10 => 'Oktobar',
    11 => 'Novembar',
    12 => 'Decembar',
  ),
  'dom_cal_month_short' => 
  array (
    0 => '',
    1 => 'Jan',
    2 => 'Feb',
    3 => 'Mar',
    4 => 'Apr',
    5 => 'Maj',
    6 => 'Jun',
    7 => 'Jul',
    8 => 'Avg',
    9 => 'Sep',
    10 => 'Okt',
    11 => 'Nov',
    12 => 'Dec',
  ),
  'dom_email_archived_status' => 
  array (
    'archived' => 'Arhivirano',
  ),
  'dom_email_bool' => 
  array (
    'bool_false' => 'Ne',
    'bool_true' => 'Da',
  ),
  'dom_email_distribution' => 
  array (
    '' => '--Prazno--',
    'direct' => 'Direktno dodeljeno',
    'leastBusy' => 'Najmanje zauzet',
    'roundRobin' => 'U krug',
  ),
  'dom_email_distribution_for_auto_create' => 
  array (
    'leastBusy' => 'Najmanje zauzet',
    'roundRobin' => 'U krug',
  ),
  'dom_email_editor_option' => 
  array (
    '' => 'Podrazumevani Email Format',
    'html' => 'HTML Email',
    'plain' => 'Tekstualni Email',
  ),
  'dom_email_errors' => 
  array (
    1 => 'Izaberite samo jednog korisnika kada direktno dodeljujete artikle.',
    2 => 'Možete da dodelite samo označene artikle kako direktno dodeljujete artikle.',
  ),
  'dom_email_link_type' => 
  array (
    'mailto' => 'External Email Klijent',
    'sugar' => 'Sugar Email Klijent',
  ),
  'dom_email_server_type' => 
  array (
    '' => '--Prazno--',
    'imap' => 'IMAP',
  ),
  'dom_email_status' => 
  array (
    'archived' => 'Arhivirano',
    'closed' => 'Zatvoreno',
    'draft' => 'U nacrtu',
    'read' => 'Pročitano',
    'replied' => 'Odgovoreno',
    'send_error' => 'Greška pri slanju',
    'sent' => 'Poslato',
    'unread' => 'Nepročitano',
  ),
  'dom_email_types' => 
  array (
    'archived' => 'Arhivirano',
    'campaign' => 'Kampanja',
    'draft' => 'Nacrt',
    'inbound' => 'Dolazni',
    'out' => 'Poslato',
  ),
  'dom_int_bool' => 
  array (
    0 => 'Ne',
    1 => 'Da',
  ),
  'dom_mailbox_type' => 
  array (
    'bounce' => 'Obrada vraćenih',
    'createcase' => 'Kreiraj slučaj',
    'pick' => '--Prazno--',
  ),
  'dom_meeting_accept_options' => 
  array (
    'accept' => 'Prihvati',
    'decline' => 'Odbij',
    'tentative' => 'Neodlučen',
  ),
  'dom_meeting_accept_status' => 
  array (
    'accept' => 'Prihvaćen',
    'decline' => 'Odbijen',
    'none' => 'Nijedno',
    'tentative' => 'Neodlučen',
  ),
  'dom_meridiem_lowercase' => 
  array (
    'am' => 'prepodne',
    'pm' => 'popodne',
  ),
  'dom_meridiem_uppercase' => 
  array (
    'AM' => 'Pre podne',
    'PM' => 'Po podne',
  ),
  'dom_report_types' => 
  array (
    'Matrix' => 'Matrica',
    'detailed_summary' => 'Sumiranje sa detaljima',
    'summary' => 'Sumiranje',
    'tabular' => 'Redovi i kolone',
  ),
  'dom_switch_bool' => 
  array (
    '' => 'Ne',
    'off' => 'Ne',
    'on' => 'Na',
  ),
  'dselect_type_dom' => 
  array (
    'Does not Equal' => 'Nije jednak',
    'Equals' => 'Jednak',
    'Less Than' => 'Manje od',
    'More Than' => 'Više od',
  ),
  'dtselect_type_dom' => 
  array (
    'Less Than' => 'manje od',
    'More Than' => 'više od',
  ),
  'duration_dom' => 
  array (
    '' => 'nema trajanje',
    900 => '15 minuta',
    1800 => '30 minuta',
    2700 => '45 minuta',
    3600 => '1 sat',
    5400 => '1.5 sati',
    7200 => '2 sata',
    10800 => '3 sata',
    21600 => '6 sati',
    86400 => '1 dan',
    172800 => '2 dana',
    259200 => '3 dana',
    604800 => '1 nedelja',
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
    'Google' => 'Google Docs',
  ),
  'eapm_list_import' => 
  array (
    'Google' => 'Google Docs',
  ),
  'emailTemplates_type_list' => 
  array (
    '' => 'Nijedan',
    'campaign' => 'Kampanja:',
    'email' => 'Email',
    'workflow' => 'RadniTok',
  ),
  'emailTemplates_type_list_campaigns' => 
  array (
    '' => 'Nijedna',
    'campaign' => 'Kampanja:',
  ),
  'emailTemplates_type_list_no_workflow' => 
  array (
    '' => 'Nijedna',
    'campaign' => 'Kampanja:',
    'email' => 'Email',
  ),
  'email_check_interval_dom' => 
  array (
    -1 => 'Ručno',
    5 => 'Svakih 5 minuta',
    15 => 'Svakih 15 minuta',
    30 => 'Svakih 30 minuta',
    60 => 'Svakih sta vremena',
  ),
  'email_marketing_status_dom' => 
  array (
    '' => '',
    'active' => 'Aktivan',
    'inactive' => 'Neaktivan',
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
    'Active' => 'Aktivan',
    'Leave of Absence' => 'Odsustvo',
    'Terminated' => 'Prekinut',
  ),
  'extapi_meeting_password' => 
  array (
    'WebEx' => 'WebEx',
  ),
  'filter_checkbox_dom' => 
  array (
    0 => 'Netačno',
    1 => 'tačno',
  ),
  'font_size_dom' => 
  array (
    -5 => 'Manje (-5)',
    -4 => 'Manje (-4)',
    -3 => 'Manje (-3)',
    -2 => 'Manje (-2)',
    -1 => 'Manje (-1)',
    'Default' => 'Podrazumevano',
    1 => 'Veće (+1)',
    2 => 'Veće (+2)',
    3 => 'Veće (+3)',
    4 => 'Veće (+4)',
    5 => 'Veće (+5)',
  ),
  'forecast_fiscal_year_options' => 
  array (
    'current_year' => '{{year}}',
    'next_year' => '{{year}}',
  ),
  'forecast_pareto_visibility_options' => 
  array (
    'group' => 'Prognoze mog tima',
    'user' => 'Moje prognoze',
  ),
  'forecast_pipeline_visibility_options' => 
  array (
    'group' => 'Prodajni levak moga tima',
    'user' => 'Moj prodajni levak',
  ),
  'forecast_schedule_status_dom' => 
  array (
    'Active' => 'Aktivan',
    'Inactive' => 'Neaktivan',
  ),
  'forecast_type_dom' => 
  array (
    'Direct' => 'Direktan',
    'Rollup' => 'Udružen',
  ),
  'forecasts_chart_options_group' => 
  array (
    'forecast' => 'Uključeno u prognozu',
    'probability' => 'Verovatnoća',
    'sales_stage' => 'Faza prodaje',
  ),
  'forecasts_config_ranges_options_dom' => 
  array (
    'show_binary' => 'Dva opsega',
    'show_buckets' => 'Tri opsega',
    'show_custom_buckets' => 'Prilagođeni opsezi',
  ),
  'forecasts_config_worksheet_layout_forecast_by_options_dom' => 
  array (
    'Opportunities' => 'Prodajne prilike',
    'RevenueLineItems' => 'Stavke prihoda',
  ),
  'forecasts_options_dataset' => 
  array (
    'best' => 'Najbolje',
    'likely' => 'Verovatno',
    'worst' => 'Najgore',
  ),
  'forecasts_timeperiod_options_dom' => 
  array (
    'Annual' => 'Godišnje (Kvartalni pod-periodi)',
    'Quarter' => 'Kvartalno (Mesečni pod-periodi)',
  ),
  'forecasts_timeperiod_types_dom' => 
  array (
    'chronological' => 'Godina zasnovana na datumima',
  ),
  'fts_type' => 
  array (
    'Elastic' => 'elastična pretraga',
  ),
  'gender_list' => 
  array (
    'female' => 'Žensko',
    'male' => 'Muško',
  ),
  'generic_timeperiod_options' => 
  array (
    'current' => 'Ovaj kvartal',
    'next' => 'Sledećeg kvartala',
    'year' => 'Ove godine',
  ),
  'history_filter_options' => 
  array (
    7 => 'Poslednjih 7 dana',
    30 => 'Poslednjih 30 dana',
    90 => 'Prethodni kvartal',
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
    'group' => 'Ne',
    'user' => 'Da',
  ),
  'import_delimeter_options' => 
  array (
    ',' => ',',
    '.' => '.',
    ':' => ':',
    ';' => ';',
    '\\t' => '\\t',
    'other' => 'Drugi:',
    '|' => '|',
  ),
  'import_enclosure_options' => 
  array (
    '' => 'Nijedan',
    '"' => 'Dvostruki navodnik (\\")',
    '\'' => 'Jednostruki navodnik ($#39;)',
    'other' => 'Drugi:',
  ),
  'in_total_group_stages' => 
  array (
    'Closed Accepted' => 'Zatvoreno prihvaćeno',
    'Closed Dead' => 'Zatvoreno napušteno',
    'Closed Lost' => 'Zatvoreno izgubljeno',
    'Confirmed' => 'Potvrđeno',
    'Delivered' => 'Isporučeno',
    'Draft' => 'Nacrt',
    'Negotiation' => 'Pregovori',
    'On Hold' => 'Na čekanju',
  ),
  'industry_dom' => 
  array (
    '' => '',
    'Apparel' => 'Oprema',
    'Banking' => 'Bankarstvo',
    'Biotechnology' => 'Biotehnologija',
    'Chemicals' => 'Hemijska industrija',
    'Communications' => 'Komunikacije',
    'Construction' => 'Građevinarstvo',
    'Consulting' => 'Konsalting',
    'Education' => 'Obrazovanje',
    'Electronics' => 'Elektronika',
    'Energy' => 'Energetika',
    'Engineering' => 'Inženjering',
    'Entertainment' => 'Zabava',
    'Environmental' => 'Ekologija',
    'Finance' => 'Finansije',
    'Government' => 'Državna uprava',
    'Healthcare' => 'Zdravstvo',
    'Hospitality' => 'Ugostiteljstvo',
    'Insurance' => 'Osiguranje',
    'Machinery' => 'Mašinstvo',
    'Manufacturing' => 'Proizvodnja',
    'Media' => 'Mediji',
    'Not For Profit' => 'Neprofitna delatnost',
    'Other' => 'Ostalo',
    'Recreation' => 'Rekreacija',
    'Retail' => 'Maloprodaja',
    'Shipping' => 'Dostava',
    'Technology' => 'Tehnologija',
    'Telecommunications' => 'Telekomunikacije',
    'Transportation' => 'Transport',
    'Utilities' => 'Komunalne usluge',
  ),
  'interactions_options' => 
  array (
    'custom' => 'Moj prilagođeni filter',
    'favorites' => 'Omiljeni',
    7 => 'Poslednjih 7 dana',
    30 => 'Poslednjih 30 dana',
    90 => 'Poslednji kvartal',
  ),
  'issue_priority_dom' => 
  array (
    'High' => 'Visok',
    'Low' => 'Nizak',
    'Medium' => 'Srednje',
    'Urgent' => 'Hitno',
  ),
  'issue_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Prihvaćen',
    'Closed' => 'Zatvoren',
    'Duplicate' => 'Duplikat',
    'Invalid' => 'Nevažeći',
    'Out of Date' => 'Van roka važnosti',
  ),
  'issue_status_dom' => 
  array (
    'Assigned' => 'Dodeljen',
    'Closed' => 'Zatvoren',
    'New' => 'Novo',
    'Pending' => 'Očekuje se',
    'Rejected' => 'Odbijen',
  ),
  'kbadmin_actions_dom' => 
  array (
    '' => '--Admin Akcije--',
    'Apply Tags On Articles' => 'Primeni oznake na artikle',
    'Create New Tag' => 'Kreiraj novu oznaku',
    'Delete Selected Articles' => 'Obriši izabrane artikle',
    'Delete Tag' => 'Obriši oznaku',
    'Move Selected Articles' => 'Premesti izabrane artikle',
    'Rename Tag' => 'Promeni oznaku',
  ),
  'kbdocument_attachment_option_dom' => 
  array (
    '' => '',
    'mime' => 'Navedi MIME tip',
    'name' => 'Navedi ime',
    'none' => 'Nema ništa',
    'some' => 'Ima dodatke',
  ),
  'kbdocument_canned_search' => 
  array (
    'added' => 'Dodani u poslednjih 30 dana',
    'all' => 'Svi',
    'faqs' => 'Česta pitanja',
    'pending' => 'Na čekanju za odobrenje',
    'updated' => 'Ažurirani u poslednjih 30 dana',
  ),
  'kbdocument_date_filter_options' => 
  array (
    '' => '',
    'after' => 'Posle',
    'before' => 'Pre',
    'between_dates' => 'Između',
    'isnull' => 'je NULL',
    'last_30_days' => 'Poslednjih 30 dana',
    'last_7_days' => 'Poslednjih 7 dana',
    'last_month' => 'Prošli mesec',
    'last_year' => 'Prošla godina',
    'next_30_days' => 'Narednih 30 dana',
    'next_7_days' => 'Narednih 7 dana',
    'next_month' => 'Sledeći mesec',
    'next_year' => 'Sledeća godina',
    'on' => 'Na',
    'this_month' => 'Ovaj mesec',
    'this_year' => 'Ove godine',
  ),
  'kbdocument_status_dom' => 
  array (
    'Draft' => 'Nacrt',
    'Expired' => 'Istekao',
    'In Review' => 'Na pregledu',
    'Published' => 'Objavljen',
  ),
  'kbdocument_viewing_frequency_dom' => 
  array (
    '' => '',
    'Bot_10' => 'Poslednjih 10',
    'Bot_20' => 'Poslednjih 20',
    'Bot_5' => 'Poslednjih 5',
    'Top_10' => 'Prvih 10',
    'Top_20' => 'Prvih 20',
    'Top_5' => 'Prvih 5',
  ),
  'language_pack_name' => 'US Engleski',
  'layouts_dom' => 
  array (
    'Invoice' => 'Faktura',
    'Standard' => 'Ponuda',
  ),
  'lead_conv_activity_opt' => 
  array (
    'copy' => 'Kopiraj',
    'donothing' => 'Ne uradi ništa',
    'move' => 'Pomeri',
  ),
  'lead_source_dom' => 
  array (
    '' => '',
    'Campaign' => 'Kampanja',
    'Cold Call' => 'Prvi poziv',
    'Conference' => 'Konferencija',
    'Direct Mail' => 'Direktna pošta',
    'Email' => 'Email',
    'Employee' => 'Zaposleni',
    'Existing Customer' => 'Postojeći klijent',
    'Other' => 'Ostalo',
    'Partner' => 'Partner',
    'Public Relations' => 'Odnosi sa javnošću',
    'Self Generated' => 'Automatski generisan',
    'Support Portal User Registration' => 'Registracija portala za podršku',
    'Trade Show' => 'Sajam',
    'Web Site' => 'Web Sajt',
    'Word of mouth' => 'Usmena preporuka',
  ),
  'lead_status_dom' => 
  array (
    '' => '',
    'Assigned' => 'Dodeljeno',
    'Converted' => 'Konvertovan',
    'Dead' => 'Zastareo',
    'In Process' => 'U procesu',
    'New' => 'Novo',
    'Recycled' => 'Obnovljen',
  ),
  'library_type' => 
  array (
    'Books' => 'Knjiga',
    'DVD' => 'DVD',
    'Magazines' => 'Časopisi',
    'Music' => 'Muzika',
  ),
  'link_target_dom' => 
  array (
    '_blank' => 'Novi prozor',
    '_self' => 'Isti prozor',
  ),
  'list_visibility_options' => 
  array (
    0 => 'Ne',
    1 => 'Da',
  ),
  'meeting_status_dom' => 
  array (
    'Held' => 'Održan',
    'Not Held' => 'Poništen',
    'Planned' => 'Zakazan',
  ),
  'meeting_type_dom' => 
  array (
    'Other' => 'Ostalo',
    'Sugar' => 'SugarCRM',
  ),
  'merge_operators_dom' => 
  array (
    'exact' => 'Tačno',
    'like' => 'Sadrži',
    'start' => 'Počinje na',
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
    'Calls' => 'Po',
    'Campaigns' => 'Ka',
    'Cases' => 'Sl',
    'Notes' => 'Be',
    'Quotas' => 'Kvota',
    'Tasks' => 'Za',
  ),
  'moduleList' => 
  array (
    'ACLRoles' => 'Uloge',
    'Accounts' => 'Kompanije',
    'Activities' => 'Aktivnosti',
    'Administration' => 'Administracija',
    'Bugs' => 'Praćenje defekata',
    'Calendar' => 'Kalendar',
    'Calls' => 'Pozivi',
    'CampaignLog' => 'Log kampanje',
    'CampaignTrackers' => 'Sistem za praćenje kampanja',
    'Campaigns' => 'Kampanje',
    'Cases' => 'Slučajevi',
    'Comments' => 'Komentari',
    'Connectors' => 'Konektori',
    'Contacts' => 'Kontakti',
    'ContractTypes' => 'Tipovi Ugovora',
    'Contracts' => 'Ugovori',
    'Currencies' => 'Valute',
    'CustomQueries' => 'Prilagođeni upiti',
    'DataSets' => 'Formati podataka',
    'DocumentRevisions' => 'Revizije dokumenta',
    'Documents' => 'Dokumenta',
    'EAPM' => 'Eksterni nalozi',
    'EmailAddresses' => 'Email adresa',
    'EmailMarketing' => 'Email Marketing',
    'EmailTemplates' => 'Email šabloni',
    'Emails' => 'Email poruke',
    'Employees' => 'Zaposleni',
    'FAQ' => 'Česta pitanja',
    'Feedbacks' => 'Povratna informacija',
    'Feeds' => 'RSS',
    'Filters' => 'Filteri',
    'ForecastManagerWorksheets' => 'Upravljanje tabelama sa prognozama',
    'ForecastSchedule' => 'Plan prognoze',
    'ForecastWorksheets' => 'Tabela prognoza',
    'Forecasts' => 'Prognoze',
    'Home' => 'Početna strana',
    'InboundEmail' => 'Dolazni Email',
    'KBDocuments' => 'Baza Znanja',
    'Leads' => 'Potencijalni klijenti',
    'Library' => 'Biblioteka',
    'Manufacturers' => 'Proizvođači',
    'Meetings' => 'Sastanci',
    'MergeRecords' => 'Spajanje zapisa',
    'Newsletters' => 'Bilteni',
    'Notes' => 'Beleške',
    'Notifications' => 'Obaveštenja',
    'OAuthKeys' => 'OAuth consumer ključevi',
    'OAuthTokens' => 'OAuth tokeni',
    'Opportunities' => 'Prodajne prilike',
    'PdfManager' => 'PDF Menadžer',
    'ProductCategories' => 'Kategorije proizvoda',
    'ProductTemplates' => 'Katalog proizvoda',
    'ProductTypes' => 'Tipovi proizvoda',
    'Products' => 'Proizvodi',
    'Project' => 'Projekat',
    'ProjectTask' => 'Projektni Zadatak',
    'ProspectLists' => 'Liste ciljeva',
    'Prospects' => 'Ciljevi',
    'Queues' => 'Redovi',
    'Quotas' => 'Kvote',
    'Quotes' => 'Ponude',
    'Releases' => 'Izdanja',
    'ReportMaker' => 'Napredni Izveštaji',
    'Reports' => 'Izveštaji',
    'Reports_1' => 'Izveštaji',
    'Roles' => 'Uloge',
    'SNIP' => 'Arhiviranje Email poruka',
    'SavedSearch' => 'Sačuvane pretrage',
    'Schedulers' => 'Planeri',
    'Shippers' => 'Dostavljači',
    'Styleguide' => 'Vodič za stil',
    'Subscriptions' => 'Pretplate',
    'SugarFavorites' => 'Omiljeni',
    'Sugar_Favorites' => 'Omiljeni',
    'Sync' => 'Sinhronizacija',
    'Tags' => 'Oznake',
    'Tasks' => 'Zadaci',
    'TaxRates' => 'Poreske stope',
    'TeamNotices' => 'Timska obaveštenja',
    'Teams' => 'Timovi',
    'TimePeriods' => 'Vremenski periodi',
    'TrackerPerfs' => 'Performanse sistema za praćenje',
    'TrackerQueries' => 'Upiti za sisteme praćenja',
    'TrackerSessions' => 'Sesije sistema za praćenje',
    'Trackers' => 'Sistemi za praćenje',
    'UpgradeWizard' => 'Čarobnjak nadgradnje',
    'UserSignatures' => 'Potpisi korisnika',
    'Users' => 'Korisnici',
    'WebLogicHooks' => 'Web logički izrazi',
    'Words' => 'Reči',
    'WorkFlow' => 'Definicije radnog toka',
    'Worksheet' => 'Radna lista',
    'iFrames' => 'Moji sajtovi',
    'pmse_Business_Rules' => 'Pravila procesnog poslovanja',
    'pmse_Emails_Templates' => 'Šabloni procesnih Email-ova',
    'pmse_Inbox' => 'Procesi',
    'pmse_Project' => 'Definicija procesa',
  ),
  'moduleListSingular' => 
  array (
    'ACLRoles' => 'Role',
    'Accounts' => 'Kompanija',
    'Activities' => 'Aktivnost',
    'ActivityStream' => 'Aktivnosti',
    'Administration' => 'Administration',
    'Bugs' => 'Praćenje defekata',
    'Calendar' => 'Kalendar',
    'Calls' => 'Poziv',
    'CampaignLog' => 'Campaign Log',
    'CampaignTrackers' => 'Sistem za praćenje kampanja',
    'Campaigns' => 'Kampanja',
    'Cases' => 'Slučaj',
    'Comments' => 'Comment',
    'Connectors' => 'Connector',
    'Contacts' => 'Kontakt',
    'ContractTypes' => 'Contract Type',
    'Contracts' => 'Ugovor',
    'Currencies' => 'Valuta',
    'CustomQueries' => 'Custom Query',
    'Dashboard' => 'Kontrolna tabla',
    'DataSets' => 'Data Format',
    'DocumentRevisions' => 'Document Revision',
    'Documents' => 'Dokument',
    'EAPM' => 'Spoljni nalog',
    'EmailAddresses' => 'Email Address',
    'EmailMarketing' => 'Email Marketing',
    'EmailTemplates' => 'Email Template',
    'Emails' => 'Email',
    'Employees' => 'Zaposleni',
    'FAQ' => 'FAQ',
    'Feedbacks' => 'Povratna informacija',
    'Feeds' => 'RSS',
    'Filters' => 'Filter',
    'ForecastManagerWorksheets' => 'Upravljanje tabelama sa prognozama',
    'ForecastSchedule' => 'Plan prognoze',
    'ForecastWorksheets' => 'Tabela prognoza',
    'Forecasts' => 'Prognoza',
    'Home' => 'Početna strana',
    'InboundEmail' => 'Inbound Email',
    'KBDocuments' => 'Baza Znanja',
    'Leads' => 'Potencijalni klijent',
    'Library' => 'Library',
    'Manufacturers' => 'Proizvođač',
    'Meetings' => 'Sastanak',
    'MergeRecords' => 'Merge Record',
    'Newsletters' => 'Newsletter',
    'Notes' => 'Beleška',
    'Notifications' => 'Notification',
    'OAuthKeys' => 'OAuth Consumer Key',
    'OAuthTokens' => 'OAuth Token',
    'Opportunities' => 'Prodajna prilika',
    'PdfManager' => 'PDF Menadžer',
    'ProductCategories' => 'Kategorija Proizvoda',
    'ProductTemplates' => 'Šablon proizvoda:',
    'ProductTypes' => 'Tip proizvoda',
    'Products' => 'Proizvodi',
    'Project' => 'Project',
    'ProjectTask' => 'Projektni Zadatak',
    'ProspectLists' => 'Lista ciljeva',
    'Prospects' => 'Cilj',
    'Queues' => 'Queue',
    'Quotas' => 'Kvota',
    'Quotes' => 'Ponuda',
    'Releases' => 'Release',
    'ReportMaker' => 'SweetReport',
    'Reports' => 'Izveštaj',
    'Reports_1' => 'Saved Report',
    'RevenueLineItems' => 'Stavka prihoda',
    'Roles' => 'Role',
    'SNIP' => 'Email Archiving',
    'SavedSearch' => 'Saved Search',
    'Schedulers' => 'Scheduler',
    'Shippers' => 'Shipping Provider',
    'Styleguide' => 'Vodič za stil',
    'Subscriptions' => 'Subscription',
    'SugarFavorites' => 'SugarOmiljeni',
    'Sugar_Favorites' => 'Favorite',
    'Sync' => 'Sinhronizacija',
    'Tags' => 'Oznaka',
    'Tasks' => 'Zadatak',
    'TaxRates' => 'Tax Rate',
    'TeamNotices' => 'Team Notice',
    'Teams' => 'Tim',
    'TimePeriods' => 'Vremenski period',
    'TrackerPerfs' => 'Tracker Performance',
    'TrackerQueries' => 'Tracker Query',
    'TrackerSessions' => 'Tracker Session',
    'Trackers' => 'Tracker',
    'UpgradeWizard' => 'Upgrade Wizard',
    'UserSignatures' => 'User Signature',
    'Users' => 'Korisnik',
    'WebLogicHooks' => 'Web logički izraz',
    'Words' => 'Word',
    'WorkFlow' => 'RadniTok',
    'Worksheet' => 'Worksheet',
    'iFrames' => 'Moji sajtovi',
    'pmse_Business_Rules' => 'Pravila procesnog poslovanja',
    'pmse_Emails_Templates' => 'Šablon procesnog Email-a',
    'pmse_Inbox' => 'Procesi',
    'pmse_Project' => 'Definicija procesa',
  ),
  'mselect_multi_type_dom' => 
  array (
    'in' => 'Je jedan od',
    'not_in' => 'Nije jedan od',
  ),
  'mselect_type_dom' => 
  array (
    'Equals' => 'Je',
    'in' => 'Je jedan od',
  ),
  'navigation_paradigms' => 
  array (
    'gm' => 'Grupisani moduli',
    'm' => 'Moduli',
  ),
  'newsletter_frequency_dom' => 
  array (
    '' => '',
    'Annually' => 'Godišnje',
    'Monthly' => 'Mesečno',
    'Quarterly' => 'Kvartalno',
    'Weekly' => 'Nedeljno',
  ),
  'notifications_severity_list' => 
  array (
    'alert' => 'Uzbuna',
    'information' => 'Informacije',
    'other' => 'Ostalo',
    'success' => 'Uspešno',
    'warning' => 'Upozorenje',
  ),
  'notifications_status_dom' => 
  array (
    0 => 'Nepročitano',
    1 => 'Pročitano',
  ),
  'notifymail_sendtype' => 
  array (
    'SMTP' => 'SMTP',
  ),
  'numeric_range_search_dom' => 
  array (
    '=' => 'Jednako',
    'between' => 'Između',
    'greater_than' => 'Veće od',
    'greater_than_equals' => 'Veće ili jednako',
    'less_than' => 'Manje od',
    'less_than_equals' => 'Manje ili jednako',
    'not_equal' => 'Nejednako',
  ),
  'oauth_client_type_dom' => 
  array (
    'support_portal' => 'Portal za podršku',
    'user' => 'Sugar korisnik',
  ),
  'oauth_type_dom' => 
  array (
    'oauth1' => 'OAuth 1.0',
    'oauth2' => 'OAuth 2.0',
  ),
  'oc_status_dom' => 
  array (
    '' => '',
    'Active' => 'Aktivan',
    'Inactive' => 'Neaktivan',
  ),
  'opportunity_metrics_dom' => 
  array (
    'active' => 'Aktivan',
    'lost' => 'Izgubljen',
    'won' => 'Dobijen',
  ),
  'opportunity_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Donosilac poslovnih odluka',
    'Business Evaluator' => 'Poslovni procenitelj',
    'Executive Sponsor' => 'Rukovodilac sponzorstva',
    'Influencer' => 'Od uticaja',
    'Other' => 'Ostalo',
    'Primary Decision Maker' => 'Donosilac osnovnih odluka',
    'Technical Decision Maker' => 'Donosilac tehničkih odluka',
    'Technical Evaluator' => 'Tehnički procenitelj',
  ),
  'opportunity_type_dom' => 
  array (
    '' => '',
    'Existing Business' => 'Postojeći biznis',
    'New Business' => 'Novi biznis',
  ),
  'opps_config_view_by_closedate_rollup_dom' => 
  array (
    'earliest' => 'Najraniji datum završetka',
    'latest' => 'Najkasniji datum završetka',
  ),
  'opps_config_view_by_options_dom' => 
  array (
    'Opportunities' => 'Prodajne prilike',
    'RevenueLineItems' => 'Stavke prihoda',
  ),
  'optout_dom' => 
  array (
    '' => '-prazno-',
    'false' => 'Ne',
    'true' => 'Da',
  ),
  'order_stage_dom' => 
  array (
    'Cancelled' => 'Otkazano',
    'Confirmed' => 'Potvrđeno',
    'On Hold' => 'Na čekanju',
    'Pending' => 'Na čekanju',
    'Shipped' => 'Dostavljeno',
  ),
  'parent_type_display' => 
  array (
    'Accounts' => 'Kompanija',
    'Bugs' => 'Praćenje defekata',
    'Cases' => 'Slučaj',
    'Contacts' => 'Kontakt',
    'Leads' => 'Potencijalni klijent',
    'Opportunities' => 'Prodajna prilika',
    'Products' => 'Proizvodi',
    'Project' => 'Projekat',
    'ProjectTask' => 'Projektni Zadatak',
    'Prospects' => 'Cilj',
    'Quotes' => 'Ponuda',
    'RevenueLineItems' => 'Stavka prihoda',
    'Tasks' => 'Zadatak',
  ),
  'payment_terms' => 
  array (
    '' => '',
    'Net 15' => '15 dana',
    'Net 30' => '30 dana',
  ),
  'pdfmanager_yes_no_list' => 
  array (
    'no' => 'Ne',
    'yes' => 'Da',
  ),
  'pipeline_chart_dom' => 
  array (
    'fun' => 'Levak',
    'hbar' => 'Horizontalini stubac',
  ),
  'planned_activities_filter_options' => 
  array (
    'future' => 'U budućnosti',
    'today' => 'Danas',
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
    'group' => 'Ne',
    'user' => 'Da',
  ),
  'pricing_formula_dom' => 
  array (
    'Fixed' => 'Fiksna cena',
    'IsList' => 'Isto kao na listi',
    'PercentageDiscount' => 'Popust sa liste',
    'PercentageMarkup' => 'Marža iznad troškova',
    'ProfitMargin' => 'Margina profita',
  ),
  'product_category_dom' => 
  array (
    '' => '',
    'Accounts' => 'Kompanije',
    'Activities' => 'Aktivnosti',
    'Bug Tracker' => 'Praćenje defekata',
    'Calendar' => 'Kalendar',
    'Calls' => 'Pozivi',
    'Campaigns' => 'Kampanje',
    'Cases' => 'Slučajevi',
    'Contacts' => 'Kontakti',
    'Currencies' => 'Valute',
    'Dashboard' => 'Kontrolna tabla',
    'Documents' => 'Dokumenta',
    'Emails' => 'Email-ovi',
    'Feeds' => 'Feed-ovi',
    'Forecasts' => 'Prognoze',
    'Help' => 'Pomoć',
    'Home' => 'Početna strana',
    'Leads' => 'Potencijalni klijenti',
    'Meetings' => 'Sastanci',
    'Notes' => 'Beleške',
    'Opportunities' => 'Prodajne prilike',
    'Outlook Plugin' => 'Dodatak za Outlook',
    'Product Catalog' => 'Katalog proizvoda',
    'Products' => 'Proizvodi',
    'Projects' => 'Projekti',
    'Quotes' => 'Ponude',
    'RSS' => 'RSS',
    'Releases' => 'Izdanja',
    'RevenueLineItems' => 'Stavke prihoda',
    'Studio' => 'Studio',
    'Upgrade' => 'Nadgradi',
    'Users' => 'Korisnici',
  ),
  'product_status_dom' => 
  array (
    '' => '',
    'Orders' => 'Naručene',
    'Quotes' => 'Ponuđene',
    'Ship' => 'Dostavljene',
  ),
  'product_status_quote_key' => 'Ponude',
  'product_template_status_dom' => 
  array (
    'Available' => 'Na zalihama',
    'Unavailable' => 'Nema na zalihama',
  ),
  'project_duration_units_dom' => 
  array (
    'Days' => 'Dana',
    'Hours' => 'Sati',
  ),
  'project_priority_options' => 
  array (
    'High' => 'Visok',
    'Low' => 'Nizak',
    'Medium' => 'Srednje',
  ),
  'project_status_dom' => 
  array (
    'Draft' => 'Nacrt',
    'In Review' => 'Na pregledu',
    'Published' => 'Objavljen',
  ),
  'project_task_priority_options' => 
  array (
    'High' => 'Visok',
    'Low' => 'Nizak',
    'Medium' => 'Srednje',
  ),
  'project_task_status_options' => 
  array (
    'Completed' => 'Završeno',
    'Deferred' => 'Odložen',
    'In Progress' => 'U toku',
    'Not Started' => 'Nije započet',
    'Pending Input' => 'Unos na čekanju',
  ),
  'project_task_utilization_options' => 
  array (
    0 => 'nijedan',
    25 => '25',
    50 => '50',
    75 => '75',
    100 => '100',
  ),
  'projects_priority_options' => 
  array (
    'high' => 'Visok',
    'low' => 'Nizak',
    'medium' => 'Srednje',
  ),
  'projects_status_options' => 
  array (
    'completed' => 'Završeno',
    'inprogress' => 'U toku',
    'notstarted' => 'Nije započet',
  ),
  'prospect_list_type_dom' => 
  array (
    'default' => 'Podrazumevano',
    'exempt' => 'Suppression List - By Id',
    'exempt_address' => 'Suppression List - By Email Address',
    'exempt_domain' => 'Suppression List - By Domain',
    'seed' => 'Seed',
    'test' => 'Test',
  ),
  'query_calc_calc_type_dom' => 
  array (
    'AVG' => 'Prosek',
    'COUNT' => 'Broj',
    'MAX' => 'Maksimum',
    'MIN' => 'Minimum',
    'STDDEV' => 'Standardno odstupanje',
    'SUM' => 'Suma (Ukupno)',
    'VARIANCE' => 'Varijansa',
  ),
  'query_calc_leftright_type_dom' => 
  array (
    'Field' => 'Polje',
    'Group' => 'Grupa',
    'Value' => 'Vrednost',
  ),
  'query_calc_oper_dom' => 
  array (
    '*' => '(X) Množenje sa',
    '+' => '(+) Plus',
    '-' => '(-) Minus',
    '/' => '(/) Deljenje sa',
  ),
  'query_calc_type_dom' => 
  array (
    'Math' => 'Mat. Kalkulator',
    'Standard' => 'Standardno',
  ),
  'query_column_type_dom' => 
  array (
    'Calculation' => 'Proračun',
    'Display' => 'Prikaz',
  ),
  'query_display_type_dom' => 
  array (
    'Custom' => 'Prilagođen',
    'Default' => 'Podrazumevano',
    'Hidden' => 'Sakriven',
  ),
  'query_groupby_axis_dom' => 
  array (
    'Columns' => 'Kolone (X-osa)',
    'Rows' => 'Redovi (Y-osa)',
  ),
  'query_groupby_calc_type_dom' => 
  array (
    'AVG' => 'AVG',
    'COUNT' => 'Count',
    'STDDEV' => 'Standard Deviation',
    'SUM' => 'SUM',
    'VARIANCE' => 'Variance',
  ),
  'query_groupby_qualifier_dom' => 
  array (
    'Day' => 'Dan',
    'Month' => 'Mesec',
    'Quarter' => 'Kvartal',
    'Week' => 'Nedelja',
    'Year' => 'Godina',
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
    0 => 'Sad',
  ),
  'query_groupby_type_dom' => 
  array (
    'Field' => 'Standardno polje',
    'Time' => 'Vremenski interval',
  ),
  'query_type_dom' => 
  array (
    'Main Query' => 'Glavni upit',
  ),
  'quote_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Donosilac poslovnih odluka',
    'Business Evaluator' => 'Poslovni procenitelj',
    'Executive Sponsor' => 'Rukovodilac sponzorstva',
    'Influencer' => 'Od uticaja',
    'Other' => 'Ostalo',
    'Primary Decision Maker' => 'Donosilac osnovnih odluka',
    'Technical Decision Maker' => 'Donosilac tehničkih odluka',
    'Technical Evaluator' => 'Tehnički procenitelj',
  ),
  'quote_stage_dom' => 
  array (
    'Closed Accepted' => 'Zatvoreno prihvaćeno',
    'Closed Dead' => 'Zatvoreno napušteno',
    'Closed Lost' => 'Zatvoreno izgubljeno',
    'Confirmed' => 'Potvrđeno',
    'Delivered' => 'Isporučeno',
    'Draft' => 'Nacrt',
    'Negotiation' => 'U pregovoru',
    'On Hold' => 'Na čekanju',
  ),
  'quote_type_dom' => 
  array (
    'Orders' => 'Porudžbina',
    'Quotes' => 'Ponuda',
  ),
  'record_type_display' => 
  array (
    '' => '',
    'Accounts' => 'Kompanija',
    'Bugs' => 'Defekt',
    'Cases' => 'Slučaj',
    'Contacts' => 'Kontakt',
    'Leads' => 'Potencijalni klijent',
    'Opportunities' => 'Prodajna prilika',
    'Products' => 'Proizvodi',
    'Project' => 'Projekat',
    'ProjectTask' => 'Projektni Zadatak',
    'Prospects' => 'Cilj',
    'Quotes' => 'Ponuda',
    'Tasks' => 'Zadatak',
  ),
  'record_type_display_notes' => 
  array (
    'Accounts' => 'Kompanija',
    'Bugs' => 'Defekt',
    'Calls' => 'Poziv',
    'Cases' => 'Slučaj',
    'Contacts' => 'Kontakt',
    'Contracts' => 'Ugovor',
    'Emails' => 'Email',
    'Leads' => 'Potencijalni klijent',
    'Meetings' => 'Sastanak',
    'Opportunities' => 'Prodajna prilika',
    'ProductTemplates' => 'Katalog proizvoda:',
    'Products' => 'Proizvodi',
    'Project' => 'Projekat',
    'ProjectTask' => 'Projektni Zadatak',
    'Prospects' => 'Cilj',
    'Quotes' => 'Ponuda',
    'Tasks' => 'Zadatak',
  ),
  'release_status_dom' => 
  array (
    'Active' => 'Aktivan',
    'Inactive' => 'Neaktivan',
  ),
  'reminder_max_time' => '3600',
  'reminder_time_options' => 
  array (
    -1 => '-1',
    60 => 'Pre jednog minuta',
    300 => 'Pre pet minuta',
    600 => 'Pre 10 minuta',
    900 => 'Pre 15 minuta',
    1800 => 'Pre 30 minuta',
    3600 => 'Pre jednog časa',
    7200 => 'Pre dva časa',
    10800 => 'Pre tri časa',
    18000 => 'Pre pet časova',
    86400 => 'Pre jednog dana',
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
    '' => 'Nijednom',
    'Daily' => 'Dnevno',
    'Monthly' => 'Mesečno',
    'Weekly' => 'Nedeljno',
    'Yearly' => 'Godišnje',
  ),
  'repeat_type_dom' => 
  array (
    '' => 'Nijednom',
    'Daily' => 'Dnevno',
    'Monthly' => 'Mesečno',
    'Weekly' => 'Nedeljno',
    'Yearly' => 'Godišnje',
  ),
  'report_align_dom' => 
  array (
    'center' => 'Centar',
    'left' => 'Levo',
    'right' => 'Desno',
  ),
  'report_color_dom' => 
  array (
    '' => 'Podrazumevana',
    'DarkGreen' => 'Tamno zelena',
    'DodgerBlue' => 'Tamno plava',
    'LightBlue' => 'Svetlo plava',
    'LightGray' => 'Svetlo siva',
    'black' => 'Crna',
    'blue' => 'Plava',
    'green' => 'Zelena',
    'red' => 'Crvena',
    'white' => 'Bela',
  ),
  'report_maker_status_dom' => 
  array (
    'Multi Module' => 'Višestruki modul',
    'Single Module' => 'Jednostruki modul',
  ),
  'roi_type_dom' => 
  array (
    'Budget' => 'Budžet',
    'Expected_Revenue' => 'Očekivana dobit',
    'Investment' => 'Ulaganje',
    'Revenue' => 'Dobit',
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
    'Closed Lost' => 'Završeni izgubljeni',
    'Closed Won' => 'Završeni osvojeni',
    'Id. Decision Makers' => 'ID broj donosilaca odluka',
    'Needs Analysis' => 'Analize potreba',
    'Negotiation/Review' => 'Pregovori/Pregledi',
    'Perception Analysis' => 'Analiza sagledavanja',
    'Proposal/Price Quote' => 'Predlog/Cene ponuda',
    'Prospecting' => 'Istraživanje',
    'Qualification' => 'Kvalifikacija',
    'Value Proposition' => 'Preporučena cena',
  ),
  'sales_status_dom' => 
  array (
    'Closed Lost' => 'Zatvoreni izgubljeni',
    'Closed Won' => 'Završeni osvojeni',
    'In Progress' => 'U toku',
    'New' => 'Novo',
  ),
  'sales_status_with_quote_dom' => 
  array (
    'Closed Lost' => 'Zatvoreni izgubljeni',
    'Closed Won' => 'Završeni osvojeni',
    'Converted to Quote' => 'Pretvoreno u ponudu',
    'In Progress' => 'U toku',
    'New' => 'Novo',
  ),
  'salutation_dom' => 
  array (
    '' => '',
    'Dr.' => 'Dr.',
    'Mr.' => 'Gosp.',
    'Mrs.' => 'Gđica.',
    'Ms.' => 'Gđa.',
    'Prof.' => 'Prof.',
  ),
  'scheduler_period_dom' => 
  array (
    'hour' => 'Sati',
    'min' => 'Minuta',
  ),
  'scheduler_status_dom' => 
  array (
    'Active' => 'Aktivan',
    'Inactive' => 'Neaktivan',
  ),
  'schedulers_times_dom' => 
  array (
    'completed' => 'Završeno',
    'failed' => 'Neuspešno',
    'in progress' => 'U toku',
    'no curl' => 'Ne radi: cURL nije dostupan',
    'not run' => 'Odrađeno u prošlosti, neizvršeno',
    'ready' => 'Spremno',
  ),
  'source_dom' => 
  array (
    '' => '',
    'Forum' => 'Forum',
    'InboundEmail' => 'Email',
    'Internal' => 'Interni',
    'Twitter' => 'Twitter',
    'Web' => 'Web',
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
    0 => 'Nijedan',
    1 => 'Svaki minut',
    5 => 'Svakih 5 minuta',
    10 => 'Svakih 10 minuta',
    15 => 'Svakih 15 minuta',
    30 => 'Svakih 30 minuta',
  ),
  'sugar7_dashlet_reports_auto_refresh_options' => 
  array (
    0 => 'Nijedan',
    15 => 'Svakih 15 minuta',
    30 => 'Svakih 30 minuta',
    45 => 'Svakih 45 minuta',
    60 => 'Svaki sat',
    120 => 'Svakih 2 sata',
  ),
  'support_term_dom' => 
  array (
    '+1 year' => 'Godinu dana',
    '+2 years' => 'Dve godine',
    '+6 months' => 'Šest meseci',
  ),
  'task_priority_dom' => 
  array (
    'High' => 'Visok',
    'Low' => 'Nizak',
    'Medium' => 'Srednje',
  ),
  'task_status_dom' => 
  array (
    'Completed' => 'Završen',
    'Deferred' => 'Odložen',
    'In Progress' => 'U toku',
    'Not Started' => 'Nije započet',
    'Pending Input' => 'Unos na čekanju',
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
    'group' => 'Ne',
    'user' => 'Da',
  ),
  'tax_class_dom' => 
  array (
    'Non-Taxable' => 'Neoporezivo',
    'Taxable' => 'Oporezivo',
  ),
  'timezone_dom' => 
  array (
    'Africa/Abidjan' => 'Afrika/Abidžan',
    'Africa/Accra' => 'Afrika/Akra',
    'Africa/Addis_Ababa' => 'Afrika/Adis_Abeba',
    'Africa/Algiers' => 'Afrika/Alžir',
    'Africa/Asmera' => 'Afrika/Asmara',
    'Africa/Bamako' => 'Afrika/Bamako',
    'Africa/Bangui' => 'Afrika/Banguj',
    'Africa/Banjul' => 'Afrika/Bandžul',
    'Africa/Bissau' => 'Afrika/Bisao',
    'Africa/Blantyre' => 'Afrika/Blantire',
    'Africa/Brazzaville' => 'Afrika/Brazavil',
    'Africa/Bujumbura' => 'Afrika/Budžumbura',
    'Africa/Cairo' => 'Afrika/Kairo',
    'Africa/Casablanca' => 'Afrika/Kazablanka',
    'Africa/Ceuta' => 'Afrika/Seuta',
    'Africa/Conakry' => 'Afrika/Konarki',
    'Africa/Dakar' => 'Afrika/Dakar',
    'Africa/Dar_es_Salaam' => 'Afrika/Dar_es_Salam',
    'Africa/Djibouti' => 'Afrika/Džibuti',
    'Africa/Douala' => 'Afrika/Douala',
    'Africa/El_Aaiun' => 'Afrika/El_Ajun',
    'Africa/Freetown' => 'Afrika/Fritaun',
    'Africa/Gaborone' => 'Afrika/Gaborone',
    'Africa/Harare' => 'Afrika/Harare',
    'Africa/Johannesburg' => 'Afrika/Johanesburg',
    'Africa/Kampala' => 'Afrika/Kampala',
    'Africa/Khartoum' => 'Afrika/Kartum',
    'Africa/Kigali' => 'Afrika/Kigali',
    'Africa/Kinshasa' => 'Afrika/Kinšasa',
    'Africa/Lagos' => 'Afrika/Lagos',
    'Africa/Libreville' => 'Afrika/Librevil',
    'Africa/Lome' => 'Afrika/Lome',
    'Africa/Luanda' => 'Afrika/Luanda',
    'Africa/Lubumbashi' => 'Afrika/Lubumbaši',
    'Africa/Lusaka' => 'Afrika/Lusaka',
    'Africa/Malabo' => 'Afrika/Malabo',
    'Africa/Maputo' => 'Afrika/Maputo',
    'Africa/Maseru' => 'Afrika/Maseru',
    'Africa/Mbabane' => 'Afrika/Mbabane',
    'Africa/Mogadishu' => 'Afrika/Mogadiš',
    'Africa/Monrovia' => 'Afrika/Monrovija',
    'Africa/Nairobi' => 'Afrika/Najrobi',
    'Africa/Ndjamena' => 'Afrika/Ndžamena',
    'Africa/Niamey' => 'Afrika/Nijamej',
    'Africa/Nouakchott' => 'Afrika/Nuakšot',
    'Africa/Ouagadougou' => 'Afrika/Uagadugu',
    'Africa/Porto-Novo' => 'Afrika/Porto-Novo',
    'Africa/Sao_Tome' => 'Afrika/Sao_Tome',
    'Africa/Tripoli' => 'Afrika/Tripoli',
    'Africa/Tunis' => 'Afrika/Tunis',
    'Africa/Windhoek' => 'Afrika/Vindhuk',
    'America/Adak' => 'Amerika/Adak',
    'America/Anchorage' => 'Amerika/Enkoridž',
    'America/Anguilla' => 'Amerika/Angvila',
    'America/Antigua' => 'Amerika/Antigva',
    'America/Araguaina' => 'Amerika/Aragvijana',
    'America/Argentina/Buenos_Aires' => 'Amerika/Argentina/Buenos_Ajres',
    'America/Argentina/Catamarca' => 'Amerika/Argentina/Katamarka',
    'America/Argentina/Cordoba' => 'Amerika/Argentina/Kordoba',
    'America/Argentina/Jujuy' => 'Amerika/Argentina/Huhui',
    'America/Argentina/La_Rioja' => 'Amerika/Argentina/La_Rioha',
    'America/Argentina/Mendoza' => 'Amerika/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amerika/Argentina/Rio_Galjegos',
    'America/Argentina/San_Juan' => 'Amerika/Argentina/San_Huan',
    'America/Argentina/Tucuman' => 'Amerika/Argentina/Tukuman',
    'America/Argentina/Ushuaia' => 'Amerika/Argentina/Ušuaja',
    'America/Aruba' => 'Amerika/Aruba',
    'America/Asuncion' => 'Amerika/Asunsion',
    'America/Bahia' => 'Amerika/Baija',
    'America/Barbados' => 'Amerika/Barbados',
    'America/Belem' => 'Amerika/Belem',
    'America/Belize' => 'Amerika/Belize',
    'America/Boa_Vista' => 'Amerika/Boa_Vista',
    'America/Bogota' => 'Amerika/Bogota',
    'America/Boise' => 'Amerika/Boize',
    'America/Cambridge_Bay' => 'Amerika/Kembridž_Bej',
    'America/Campo_Grande' => 'Amerika/Kampo_Grande',
    'America/Cancun' => 'Amerika/Kankun',
    'America/Caracas' => 'Amerika/Karakas',
    'America/Cayenne' => 'Amerika/Kajen',
    'America/Cayman' => 'Amerika/Kajman',
    'America/Chicago' => 'Amerika/Čikago',
    'America/Chihuahua' => 'Amerika/Čivava',
    'America/Coral_Harbour' => 'Amerika/Koral_Harbor',
    'America/Costa_Rica' => 'Amerika/Kostarika',
    'America/Cuiaba' => 'Amerika/Kujuba',
    'America/Curacao' => 'Amerika/Kurakao',
    'America/Danmarkshavn' => 'Amerika/Danmarkšavn',
    'America/Dawson' => 'Amerika/Doson',
    'America/Dawson_Creek' => 'Amerika/Doson_Krik',
    'America/Denver' => 'Amerika/Denver',
    'America/Detroit' => 'Amerika/Detroit',
    'America/Dominica' => 'Amerika/Dominika',
    'America/Edmonton' => 'Amerika/Edmonton',
    'America/Eirunepe' => 'Amerika/Ejrunepe',
    'America/El_Salvador' => 'Amerika/El_Salvador',
    'America/Fortaleza' => 'Amerika/Fortaleza',
    'America/Glace_Bay' => 'Amerika/Glejs_Bej',
    'America/Godthab' => 'Amerika/Godthab',
    'America/Goose_Bay' => 'Amerika/Gus_Bej',
    'America/Grand_Turk' => 'Amerika/Grand_Turk',
    'America/Grenada' => 'Amerika/Grenada',
    'America/Guadeloupe' => 'Amerika/Gvadelupe',
    'America/Guatemala' => 'Amerika/Gvatemala',
    'America/Guayaquil' => 'Amerika/Gvajakvil',
    'America/Guyana' => 'Amerika/Gijana',
    'America/Halifax' => 'Amerika/Halifaks',
    'America/Havana' => 'Amerika/Havana',
    'America/Hermosillo' => 'Amerika/Ermosiljo',
    'America/Indiana/Indianapolis' => 'Amerika/Indijana/Indijanopolis',
    'America/Indiana/Knox' => 'Amerika/Indijana/Noks',
    'America/Indiana/Marengo' => 'Amerika/Indijana/Marengo',
    'America/Indiana/Vevay' => 'Amerika/Indijana/Vevaj',
    'America/Inuvik' => 'Amerika/Inuvik',
    'America/Iqaluit' => 'Amerika/Ikalujt',
    'America/Jamaica' => 'Amerika/Jamajka',
    'America/Juneau' => 'Amerika/Žuno',
    'America/Kentucky/Louisville' => 'Amerika/Kentaki/Luivil',
    'America/Kentucky/Monticello' => 'Amerika/Kentaki/Montičelo',
    'America/La_Paz' => 'Amerika/La_Paz',
    'America/Lima' => 'Amerika/Lima',
    'America/Los_Angeles' => 'Amerika/Los_Anđeles',
    'America/Maceio' => 'Amerika/Masejo',
    'America/Managua' => 'Amerika/Managva',
    'America/Manaus' => 'Amerika/Manaus',
    'America/Martinique' => 'Amerika/Martinik',
    'America/Mazatlan' => 'Amerika/Mazatlan',
    'America/Menominee' => 'Amerika/Menomini',
    'America/Merida' => 'Amerika/Merida',
    'America/Mexico_City' => 'Amerika/Meksiko_Siti',
    'America/Miquelon' => 'Amerika/Mikelon',
    'America/Monterrey' => 'Amerika/Moterej',
    'America/Montevideo' => 'Amerika/Montevideo',
    'America/Montreal' => 'Amerika/Montreal',
    'America/Montserrat' => 'Amerika/Montserat',
    'America/Nassau' => 'Amerika/Nasau',
    'America/New_York' => 'Amerika/Njujork',
    'America/Nipigon' => 'Amerika/Nipigon',
    'America/Nome' => 'Amerika/Nom',
    'America/Noronha' => 'Amerika/Noronja',
    'America/North_Dakota/Center' => 'Amerika/Severna_Dakota/Centar',
    'America/Panama' => 'Amerika/Panama',
    'America/Pangnirtung' => 'Amerika/Pangnirtung',
    'America/Paramaribo' => 'Amerika/Paramaribo',
    'America/Phoenix' => 'Amerika/Feniks',
    'America/Port-au-Prince' => 'Amerika/Port-o-Prins',
    'America/Port_of_Spain' => 'Amerika/Port_ov_Spejn',
    'America/Porto_Velho' => 'Amerika/Porto_Velo',
    'America/Puerto_Rico' => 'Amerika/Portoriko',
    'America/Rainy_River' => 'Amerika/Rejni_River',
    'America/Rankin_Inlet' => 'Amerika/Rankin_Inlet',
    'America/Recife' => 'Amerika/Resifi',
    'America/Regina' => 'Amerika/Regina',
    'America/Rio_Branco' => 'Amerika/Rio_Branko',
    'America/Santiago' => 'Amerika/Santiago',
    'America/Santo_Domingo' => 'Amerika/Santo_Domingo',
    'America/Sao_Paulo' => 'Amerika/Sao_Paulo',
    'America/Scoresbysund' => 'Amerika/Skorzbisund',
    'America/St_Johns' => 'Amerika/Sent_Džons',
    'America/St_Kitts' => 'Amerika/Sv_Kits',
    'America/St_Lucia' => 'Amerika/Sv_Lucija',
    'America/St_Thomas' => 'Amerika/Sv_Tomas',
    'America/St_Vincent' => 'Amerika/Sv_Vinsent',
    'America/Swift_Current' => 'Amerika/Svift_Karent',
    'America/Tegucigalpa' => 'Amerika/Tegucigalpa',
    'America/Thule' => 'Amerika/Tule',
    'America/Thunder_Bay' => 'Amerika/Tander_Bej',
    'America/Tijuana' => 'Amerika/Tihuana',
    'America/Toronto' => 'Amerika/Toronto',
    'America/Tortola' => 'Amerika/Tortola',
    'America/Vancouver' => 'Amerika/Vankuver',
    'America/Whitehorse' => 'Amerika/Vajthors',
    'America/Winnipeg' => 'Amerika/Vinipeg',
    'America/Yakutat' => 'Amerika/Jakutat',
    'America/Yellowknife' => 'Amerika/Jelounajf',
    'Antarctica/Casey' => 'Antarktik/Kejsi',
    'Antarctica/Davis' => 'Antarktik/Dejvis',
    'Antarctica/DumontDUrville' => 'Antarktik/DumontDUrville',
    'Antarctica/Mawson' => 'Antarktik/Moson',
    'Antarctica/McMurdo' => 'Antarktik/MekMurdo',
    'Antarctica/Palmer' => 'Antarktik/Palmer',
    'Antarctica/Rothera' => 'Antarktik/Rotera',
    'Antarctica/Syowa' => 'Antarktik/Sjova',
    'Antarctica/Vostok' => 'Antarktik/Vostok',
    'Asia/Aden' => 'Azija/Aden',
    'Asia/Almaty' => 'Azija/Almati',
    'Asia/Amman' => 'Azija/Aman',
    'Asia/Anadyr' => 'Azija/Anadir',
    'Asia/Aqtau' => 'Azija/Aktau',
    'Asia/Aqtobe' => 'Azija/Aktobe',
    'Asia/Ashgabat' => 'Azija/Ašgabat',
    'Asia/Baghdad' => 'Azija/Bagdad',
    'Asia/Bahrain' => 'Azija/Bahrein',
    'Asia/Baku' => 'Azija/Baku',
    'Asia/Bangkok' => 'Azija/Bangkok',
    'Asia/Beijing' => 'Azija/Peking',
    'Asia/Beirut' => 'Azija/Bejrut',
    'Asia/Bishkek' => 'Azija/Biškek',
    'Asia/Brunei' => 'Azija/Brunej',
    'Asia/Calcutta' => 'Azija/Kalkuta',
    'Asia/Choibalsan' => 'Azija/Čojbalsan',
    'Asia/Chongqing' => 'Azija/Čonking',
    'Asia/Colombo' => 'Azija/Kolombo',
    'Asia/Damascus' => 'Azija/Damask',
    'Asia/Dhaka' => 'Azija/Daka',
    'Asia/Dili' => 'Azija/Dili',
    'Asia/Dubai' => 'Azija/Dubaji',
    'Asia/Dushanbe' => 'Azija/Dušanbe',
    'Asia/Gaza' => 'Azija/Gaza',
    'Asia/Harbin' => 'Azija/Harbin',
    'Asia/Hong_Kong' => 'Azija/Hong_Kong',
    'Asia/Hovd' => 'Azija/Hovd',
    'Asia/Irkutsk' => 'Azija/Irkutsk',
    'Asia/Jakarta' => 'Azija/Džakarta',
    'Asia/Jayapura' => 'Azija/Džajapura',
    'Asia/Jerusalem' => 'Azija/Jerusalim',
    'Asia/Kabul' => 'Azija/Kabul',
    'Asia/Kamchatka' => 'Azija/Kamčatka',
    'Asia/Karachi' => 'Azija/Karači',
    'Asia/Kashgar' => 'Azija/Kašgar',
    'Asia/Katmandu' => 'Azija/Katmandu',
    'Asia/Krasnoyarsk' => 'Azija/Krasnojarsk',
    'Asia/Kuala_Lumpur' => 'Azija/Kuala_Lumpur',
    'Asia/Kuching' => 'Azija/Kuačing',
    'Asia/Kuwait' => 'Azija/Kuvajt',
    'Asia/Macau' => 'Azija/Makao',
    'Asia/Magadan' => 'Azija/Magadan',
    'Asia/Makassar' => 'Azija/Makasar',
    'Asia/Manila' => 'Azija/Manila',
    'Asia/Muscat' => 'Azija/Muskat',
    'Asia/Nicosia' => 'Azija/Nikozija',
    'Asia/Novosibirsk' => 'Azija/Novosibirsk',
    'Asia/Omsk' => 'Azija/Omsk',
    'Asia/Oral' => 'Azija/Oral',
    'Asia/Phnom_Penh' => 'Azija/Pnom_Pen',
    'Asia/Pontianak' => 'Azija/Pontianak',
    'Asia/Pyongyang' => 'Azija/Pjongjang',
    'Asia/Qatar' => 'Azija/Katar',
    'Asia/Qyzylorda' => 'Azija/Kizilorda',
    'Asia/Rangoon' => 'Azija/Rangun',
    'Asia/Riyadh' => 'Azija/Rijad',
    'Asia/Saigon' => 'Azija/Sajgon',
    'Asia/Sakhalin' => 'Azija/Sahalin',
    'Asia/Samarkand' => 'Azija/Samarkand',
    'Asia/Seoul' => 'Azija/Seul',
    'Asia/Shanghai' => 'Azija/Šangaj',
    'Asia/Singapore' => 'Azija/Singapur',
    'Asia/Taipei' => 'Azija/Tajpej',
    'Asia/Tashkent' => 'Azija/Taškent',
    'Asia/Tbilisi' => 'Azija/Tbilisi',
    'Asia/Tehran' => 'Azija/Teheran',
    'Asia/Thimphu' => 'Azija/Timpu',
    'Asia/Tokyo' => 'Azija/Tokijo',
    'Asia/Ulaanbaatar' => 'Azija/Ulan_Bator',
    'Asia/Urumqi' => 'Azija/Urumqi',
    'Asia/Vientiane' => 'Azija/Viijentijan',
    'Asia/Vladivostok' => '&#39;Azija/Vladivostok',
    'Asia/Yakutsk' => 'Azija/Jakutsk',
    'Asia/Yekaterinburg' => 'Azija/Jekaterinburg',
    'Asia/Yerevan' => 'Azija/Jerevan',
    'Atlantic/Azores' => 'Atlantik/Azori',
    'Atlantic/Bermuda' => 'Atlantik/Bermudi',
    'Atlantic/Canary' => 'Atlantik/Kanarska_ostrva',
    'Atlantic/Cape_Verde' => 'Atlantik/Kejp_Verde',
    'Atlantic/Faeroe' => 'Atlantik/Farska_ostrva',
    'Atlantic/Madeira' => 'Atlantik/Madera',
    'Atlantic/Reykjavik' => 'Atlantik/Rejkjavik',
    'Atlantic/South_Georgia' => 'Atlantik/Južna_Džodžija',
    'Atlantic/St_Helena' => 'Atlantik/Sv._Helena',
    'Atlantic/Stanley' => 'Atlantik/Stenli',
    'Australia/Adelaide' => 'Australija/Adelejd',
    'Australia/Brisbane' => 'Australija/Brizbejn',
    'Australia/Broken_Hill' => 'Australija/Broken_Hil',
    'Australia/Currie' => 'Australija/Kjuri',
    'Australia/Darwin' => 'Australija/Darvin',
    'Australia/Hobart' => 'Australija/Hobart',
    'Australia/Lindeman' => 'Australija/Lindeman',
    'Australia/Melbourne' => 'Australija/Melburn',
    'Australia/Perth' => 'Australija/Pert',
    'Australia/Sydney' => 'Australija/Sidnej',
    'CET' => 'CET',
    'EET' => 'EET',
    'Europe/Amsterdam' => 'Evropa/Amstredam',
    'Europe/Andorra' => 'Evropa/Andora',
    'Europe/Athens' => 'Evropa/Atina',
    'Europe/Belgrade' => 'Evropa/Beograd',
    'Europe/Berlin' => 'Evropa/Berlin',
    'Europe/Brussels' => 'Evropa/Brisel',
    'Europe/Bucharest' => 'Evropa/Bukurešt',
    'Europe/Budapest' => 'Evropa/Budimpešta',
    'Europe/Chisinau' => 'Evropa/Kišinjev',
    'Europe/Copenhagen' => 'Evropa/Kopenhagen',
    'Europe/Dublin' => 'Evropa/Dablin',
    'Europe/Gibraltar' => 'Evropa/Gibraltar',
    'Europe/Helsinki' => 'Evropa/Helsinki',
    'Europe/Istanbul' => 'Evropa/Istanbul',
    'Europe/Kaliningrad' => 'Evropa/Kaljiningrad',
    'Europe/Kiev' => 'Evropa/Kijev',
    'Europe/Lisbon' => 'Evropa/Lisabon',
    'Europe/London' => 'Evropa/London',
    'Europe/Luxembourg' => 'Evropa/Luksemburg',
    'Europe/Madrid' => 'Evropa/Madrid',
    'Europe/Malta' => 'Evropa/Malta',
    'Europe/Minsk' => 'Evropa/Minsk',
    'Europe/Monaco' => 'Evropa/Monako',
    'Europe/Moscow' => 'Evropa/Moskva',
    'Europe/Oslo' => 'Evropa/Oslo',
    'Europe/Paris' => 'Evropa/Pariz',
    'Europe/Prague' => 'Evropa/Prag',
    'Europe/Riga' => 'Evropa/Riga',
    'Europe/Rome' => 'Evropa/Rim',
    'Europe/Samara' => 'Evropa/Samara',
    'Europe/Simferopol' => 'Evropa/Simferopolj',
    'Europe/Sofia' => 'Evropa/Sofija',
    'Europe/Stockholm' => 'Evropa/Stokholm',
    'Europe/Tallinn' => 'Evropa/Talin',
    'Europe/Tirane' => 'Evropa/Tirana',
    'Europe/Uzhgorod' => 'Evropa/Užnogord',
    'Europe/Vaduz' => 'Evropa/Vaduz',
    'Europe/Vienna' => 'Evropa/Beč',
    'Europe/Vilnius' => 'vropa/Vilnijus',
    'Europe/Warsaw' => 'Evropa/Varšava',
    'Europe/Zaporozhye' => 'Evropa/Zaporožje',
    'Europe/Zurich' => '&#39;Evropa/Cirih',
    'Indian/Antananarivo' => 'Indijski_okean/Antananarivo',
    'Indian/Chagos' => 'Indijski_okean/Čagos',
    'Indian/Christmas' => 'Indijski_okean/Božićna_ostrva',
    'Indian/Cocos' => 'Indijski_okean/Kokos',
    'Indian/Comoro' => 'Indijski_okean/Komori',
    'Indian/Kerguelen' => 'Indijski_okean/Kergulen',
    'Indian/Mahe' => 'Indijski_okean/Mahe',
    'Indian/Maldives' => 'Indijski_okean/Maldivi',
    'Indian/Mauritius' => 'Indijski_okean/Mauricijus',
    'Indian/Mayotte' => 'Indijski_okean/Majot',
    'Indian/Reunion' => 'Indijski_okean/Reinion',
    'MET' => 'MET',
    'Pacific/Apia' => 'Pacifik/Apia',
    'Pacific/Auckland' => 'Pacifik/Oklend',
    'Pacific/Chatham' => 'Pacifik/Čatam',
    'Pacific/Easter' => 'Pacifik/Uskršnje_ostrvo',
    'Pacific/Efate' => 'Pacifik/Efate',
    'Pacific/Enderbury' => 'Pacifik/Enderburi',
    'Pacific/Fakaofo' => 'Pacifik/Fakaofo',
    'Pacific/Fiji' => 'Pacifik/Fidži',
    'Pacific/Funafuti' => 'Pacifik/Funafuti',
    'Pacific/Galapagos' => 'Pacifik/Galapagos',
    'Pacific/Gambier' => 'Pacifik/Gambir',
    'Pacific/Guadalcanal' => 'Pacifik/Gvadalkanal',
    'Pacific/Guam' => 'Pacifik/Guam',
    'Pacific/Honolulu' => 'Pacifik/Honolulu',
    'Pacific/Johnston' => 'Pacifik/Džonston',
    'Pacific/Kiritimati' => 'Pacifik/Kiritimati',
    'Pacific/Kosrae' => 'Pacifik/Kosre',
    'Pacific/Kwajalein' => 'Pacifik/Kvadžalin',
    'Pacific/Majuro' => 'Pacifik/Majuro',
    'Pacific/Marquesas' => 'Pacifik/Markezas',
    'Pacific/Midway' => 'Pacifik/Midvej',
    'Pacific/Nauru' => 'Pacifik/Nauru',
    'Pacific/Niue' => 'Pacifik/Niue',
    'Pacific/Norfolk' => 'Pacifik/Norfolk',
    'Pacific/Noumea' => 'Pacifik/Numea',
    'Pacific/Pago_Pago' => 'Pacifik/Pago_Pago',
    'Pacific/Palau' => 'Pacifik/Palau',
    'Pacific/Pitcairn' => 'Pacifik/Pitkairn',
    'Pacific/Ponape' => 'Pacifik/Ponape',
    'Pacific/Port_Moresby' => 'Pacifik/Port_Morezbi',
    'Pacific/Rarotonga' => 'Pacifik/Rarotonga',
    'Pacific/Saipan' => 'Pacifik/Saipan',
    'Pacific/Tahiti' => 'Pacifik/Tahiti',
    'Pacific/Tarawa' => 'Pacifik/Tarava',
    'Pacific/Tongatapu' => 'Pacifik/Tongatapu',
    'Pacific/Truk' => 'Pacifik/Truk',
    'Pacific/Wake' => 'Pacifik/Vejk',
    'Pacific/Wallis' => 'Pacifik/Valis',
    'WET' => 'WET',
  ),
  'token_status' => 
  array (
    1 => 'Zahtev',
    2 => 'Pristup',
    3 => 'Neispravno',
  ),
  'top10_opportunities_duration_options' => 
  array (
    0 => 'Ovaj kvartal',
    3 => 'Sledeći kvartal',
    12 => 'Ove godine',
  ),
  'top10_opportunities_visibility_options' => 
  array (
    'group' => '',
    'user' => '',
  ),
  'tselect_type_dom' => 
  array (
    0 => '0 sati',
    14440 => '4 sata',
    28800 => '8 sati',
    43200 => '12 sati',
    86400 => '1 dan',
    172800 => '2 dana',
    259200 => '3 dana',
    345600 => '4 dana',
    432000 => '5 dana',
    604800 => '1 nedelja',
    1209600 => '2 nedelje',
    1814400 => '3 nedelje',
    2592000 => '30 dana',
    5184000 => '60 dana',
    7776000 => '90 dana',
    10368000 => '120 dana',
    12960000 => '150 dana',
    15552000 => '180 dana',
  ),
  'user_status_dom' => 
  array (
    'Active' => 'Aktivan',
    'Inactive' => 'Neaktivan',
  ),
  'user_type_dom' => 
  array (
    'Administrator' => 'Administrator:',
    'RegularUser' => 'Redovni Korisnik',
  ),
  'webLogicHookList' => 
  array (
    'after_delete' => 'Posle brisanja',
    'after_login' => 'Posle prijave',
    'after_login_failed' => 'Posle neuspele prijave',
    'after_logout' => 'Posle odjave',
    'after_relationship_add' => 'Nakon dodavanja veze',
    'after_relationship_delete' => 'Nakon brisanja veze',
    'after_save' => 'Posle čuvanja',
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
    'Existing Value' => 'Postojeća vrednost',
    'Triggered Date' => 'Datum pokretanja',
  ),
  'wflow_action_type_dom' => 
  array (
    'new' => 'Novi zapis',
    'update' => 'Ažuriraj zapis',
    'update_rel' => 'Ažuriraj povezani zapis',
  ),
  'wflow_address_type_dom' => 
  array (
    'bcc' => 'Tajna kopija:',
    'cc' => 'Kopija za:',
    'to' => 'Za:',
  ),
  'wflow_address_type_invite_dom' => 
  array (
    'bcc' => 'Tajna kopija:',
    'cc' => 'Kopija za:',
    'invite_only' => '(Samo pozvani)',
    'to' => 'Za:',
  ),
  'wflow_address_type_to_only_dom' => 
  array (
    'to' => 'Za:',
  ),
  'wflow_adv_enum_type_dom' => 
  array (
    'advance' => 'Pomeri napred padajući meni po',
    'retreat' => 'Pomeri unazad padajući meni po',
  ),
  'wflow_adv_team_type_dom' => 
  array (
    'current_team' => 'Tim prijavljnenog korisnika',
    'team_id' => 'Trenutni tim okinutog zapisa',
  ),
  'wflow_adv_user_type_dom' => 
  array (
    'assigned_user_id' => 'Korisnik dodeljen okinutom zapisu',
    'created_by' => 'Korisnik koji je kreirao okinut zapis',
    'current_user' => 'Prijavljeni korisnik',
    'modified_user_id' => 'Korisnik koji je poslednji izmenio okinut zapis',
  ),
  'wflow_alert_type_dom' => 
  array (
    'Email' => 'Email',
    'Invite' => 'Pozovi',
  ),
  'wflow_array_type_dom' => 
  array (
    'future' => 'Nova vrednost',
    'past' => 'Stara vrednost',
  ),
  'wflow_fire_order_dom' => 
  array (
    'actions_alerts' => 'Akcije pa upozorenja',
    'alerts_actions' => 'Upozorenja pa akcije',
  ),
  'wflow_record_type_dom' => 
  array (
    'All' => 'Novi i ažurirani zapisi',
    'New' => 'Samo novi zapisi',
    'Update' => 'Samo ažurirani zapisi',
  ),
  'wflow_rel_type_dom' => 
  array (
    'all' => 'Svi povezani',
    'filter' => 'Filtriraj povezane',
  ),
  'wflow_relate_type_dom' => 
  array (
    'Manager' => 'Menadžer korisnika',
    'Self' => 'Korisnik',
  ),
  'wflow_relfilter_type_dom' => 
  array (
    'all' => 'svi povezani',
    'any' => 'bilo koji povezani',
  ),
  'wflow_set_type_dom' => 
  array (
    'Advanced' => 'Napredne opcije',
    'Basic' => 'Osnovne opcije',
  ),
  'wflow_source_type_dom' => 
  array (
    'Custom Template' => 'Prilagođeni šablon',
    'Normal Message' => 'Obična poruka',
    'System Default' => 'Sistemski Podrazumevano',
  ),
  'wflow_type_dom' => 
  array (
    'Normal' => 'Kada je zapis sačuvan',
    'Time' => 'Nakon isteka vremena',
  ),
  'wflow_user_type_dom' => 
  array (
    'current_user' => 'Trenutni korisnici',
    'rel_user' => 'Povezani korisnici',
    'rel_user_custom' => 'Povezani prilagođeni korisnici',
    'specific_role' => 'Određena uloga',
    'specific_team' => 'Određeni tim',
    'specific_user' => 'Određeni korisnik',
  ),
  'width_type_dom' => 
  array (
    '%' => 'Procenata (%)',
    'px' => 'Piksela (px)',
  ),
);

$app_strings = array (
  'BorderColor' => 'Boja okvira',
  'DATA_TYPE_DUE' => 'Zbog:',
  'DATA_TYPE_MODIFIED' => 'Izmenjeno:',
  'DATA_TYPE_SENT' => 'Poslato:',
  'DATA_TYPE_START' => 'Start:',
  'DEFAULT' => 'Osnovno',
  'ERROR_ACCESS_MODULE' => 'Nemate pristup ovom modulu.',
  'ERROR_CONNECTOR_CONFIGURE' => 'Nije moguće preuzimanje podataka. Ovaj servisnije trenutno dostupan ili podešavanja nisu ispravna.',
  'ERROR_DATETIME' => 'Greška: Ovo polje zahteva validan datum',
  'ERROR_DUPLICATE_EMAIL' => 'Greška. Duplikat email adrese: {{#each this}}{{this}} {{/each}}',
  'ERROR_EMAIL' => 'Greška: Nevalidna email adresa: {{#each this}}{{this}} {{/each}}',
  'ERROR_EMPTY_LINK_MODULE' => 'Izaberite prvo odnos, molimo vas.',
  'ERROR_EXAMINE_MSG' => 'Molim, pogledajte poruku o grešci ispod:',
  'ERROR_EXCEEDING_OC_LICENSES' => 'Broj trenutno omogućenih nepovezanih klijenata prevazilazi broj naveden u vašoj licenci.',
  'ERROR_FIELD_REQUIRED' => 'Greška: Ovo je obavezno plje',
  'ERROR_FULLY_EXPIRED' => 'Licenca vaše kompanije za SugarCRM je istekla pre više od 30 dana i potrebno je da se ažurira. Samo administratori mogu da se prijave',
  'ERROR_IS_AFTER' => 'Greška. Datum u ovom polju ne može biti pre datuma u {{this}} polju.',
  'ERROR_IS_BEFORE' => 'Greška. Datum u ovom polju ne može biti posle datuma u {{this}} polju.',
  'ERROR_IS_GREATER_THAN' => 'Greška. Vrednost ovog polja mora biti veća od {{ovoga}}',
  'ERROR_IS_LESS_THAN' => 'Greška. Vrednost ovog polja mora biti manja od {{ovoga}}',
  'ERROR_LICENSE_EXPIRED' => 'Licenca vaše kompanije za SugarCRM mora da se obnovi. Samo administratori mogu da se prijave',
  'ERROR_LICENSE_VALIDATION' => 'Licenca vaše kompanije za SugarCRM mora da se validira. Samo administratori mogu da se prijave',
  'ERROR_MAXVALUE' => 'Greška: Maksimalna vrednost ovog polja je {{this}}.',
  'ERROR_MAX_FIELD_LENGTH' => 'Greška: Maksimalna dužina ovog polja je: {{this}}.',
  'ERROR_MAX_FILESIZE_EXCEEDED' => 'Greška. Prikačeni dokument je preveliki.',
  'ERROR_MINVALUE' => 'Greška: Minimalna vrednost ovog polja je {{this}}.',
  'ERROR_MIN_FIELD_LENGTH' => 'Greška: Minimalna dužina ovog polja je: {{this}}.',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'Prazno obavezno polje',
  'ERROR_NOTIFY_OVERRIDE' => 'Greška: ResourceObserver->notify() treba da bude zamenjena.',
  'ERROR_NO_BEAN' => 'Neuspelo dohvatanje zrna.',
  'ERROR_NO_RECORD' => 'Greška pri preuzimanju zapisa. Ovaj zapis je obrisan ili Vi nemate dozvolu da ga pogledate.',
  'ERROR_NUMBER' => 'Greška. Ovo polje zahteva validni broj.',
  'ERROR_PRIMARY_EMAIL' => 'Greška. Neophodna je bar jedna primarna adresa.',
  'ERROR_TYPE_NOT_VALID' => 'Greška. Ovaj tip nije validan.',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Greška: Ne mogu da se preuzmu podaci za {0} Konektor. Postoji mogućnost da je servis trenutno nedostupan ili su konfiguraciona podešavanja možda nevažeća. Poruke greške konektora: ({1}).',
  'ERROR_UPLOAD_FAILED' => 'Greška. Fajl se nije otpremio.',
  'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Molim navedite &#39;key&#39; index u displayParams atributu za definisanje meta-podatka',
  'ERR_AJAX_LOAD' => 'Došlo je do greške:',
  'ERR_AJAX_LOAD_FAILURE' => 'Došlo je do greške u procesiranju Vašeg zahteva, molimo pokušajte kasnije.',
  'ERR_AJAX_LOAD_FOOTER' => 'Ukoliko se greška ponavlja, zamolite Vašeg administratora da onemogući Ajax za ovaj modul.',
  'ERR_BAD_RESPONSE_FROM_SERVER' => 'Pogrešan odgovor od servera',
  'ERR_BLANK_PAGE_NAME' => 'Unesite ime stranice.',
  'ERR_CALENDAR_CANNOT_UPDATE_FROM_CHILD' => 'Vraćanje promena mora biti izvedeno korišćenjem prvih zapisa iz serije.',
  'ERR_CANNOT_CREATE_METADATA_FILE' => 'Greška: Fajl [[file]] nedostaje. Kreiranje je nemoguće jer odgovarajući HTML fajl nedostaje.',
  'ERR_CANNOT_FIND_MODULE' => 'Greška: Modul [module] na postoji.',
  'ERR_COMPATIBLE_PRECISION_VALUE' => 'Vrednost polja nije kompatibilna sa tačnom vrednošću',
  'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Greška: Broj niza bean parametra se ne podudara sa brojem niza rezultata.',
  'ERR_CONNECTOR_NOT_ARRAY' => 'Niz konektora u {0} je loše definisan ili je prazan i nemoguće je koristiti ga.',
  'ERR_CONTACT_TECH_SUPPORT' => 'Molimo kontaktirajte tehničku podršku.',
  'ERR_CREATING_FIELDS' => 'Greška pri popunjavanju polja dodatnih podataka:',
  'ERR_CREATING_TABLE' => 'Greška pri kreiranju tabele:',
  'ERR_DATABASE_CONN_DROPPED' => 'Greška prilikom izvršavanja upita. Moguće je da je Vaša baza izgubila vezu. Molim, osvežite ovu stranicu, možda ćete morati da ponovo pokrenete web server.',
  'ERR_DATABSE_RELATIONSHIP_QUERY' => 'Greška pri setovanju {0} veze: {1}',
  'ERR_DB_FAIL' => 'Greška sa bazom podataka. Molimo Vas da pogledate sugarcrm.log za detalje.',
  'ERR_DB_QUERY' => '{0}: greška u upitu ka bazi: {1}',
  'ERR_DB_VERSION' => 'Sugar CRM {0} fajlovi mogu biti korišćeni samo sa Sugar CRM {1} bazom podataka.',
  'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Decimalni separator ne može da koristi isti karakter kao i separator hiljad.\\n\\n  Molim vas promenite vrednosti.',
  'ERR_DELETE_RECORD' => 'Morate navesti odgovarajući broj zapisa da bi obrisali kontakt.',
  'ERR_DNB_BAL_COMPARISON' => 'Greška. Niža granica mora biti manja od više granice',
  'ERR_ELASTIC_TEST_FAILED' => 'Neuspela konekcija ka Elastic serveru',
  'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Molim, unesite potvrdu svoje lozinke.',
  'ERR_ENTER_NEW_PASSWORD' => 'Molim, unesite svoju novu lozinku.',
  'ERR_ENTER_OLD_PASSWORD' => 'Molim, unesite svoju trenutnu lozinku.',
  'ERR_EXISTING_PORTAL_USERNAME' => 'Greška: Ime portala je već dodeljeno drugom kontaktu.',
  'ERR_EXPORT_DISABLED' => 'Izvoz je onemogućen.',
  'ERR_EXPORT_TYPE' => 'Greška pri izvozu',
  'ERR_EXTERNAL_API_403' => 'Dozvola je odbijena. Tip fajla nije podržan.',
  'ERR_EXTERNAL_API_LOTUS_LIVE_CONFLICT' => 'Datoteka sa istim imenom već postoji u sistemu.',
  'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'OAuth pristupni token nedostaje',
  'ERR_EXTERNAL_API_SAVE_FAIL' => 'Došlo je do greške pri pokušaju da sačuvate na spoljni nalog.',
  'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Došlo je do greške prilikom slanja. Proverite da fajl koji šaljete nije prazan.',
  'ERR_FILE_NOT_FOUND' => 'Greška: Nije moguće učitati fajl {0}. Molimo proverite dozvole sistema i web servera.',
  'ERR_FILE_WRITE' => 'Greška: Nije moguće upisati u fajl {0}. Molimo proverite dozvole sistema i web servera.',
  'ERR_GENERIC_SERVER_ERROR' => 'Došlo je do greške pri povezivanju na server. Molimo vas probajte ponovo.',
  'ERR_GENERIC_TITLE' => 'Greška',
  'ERR_GOOGLE_API_415' => 'Google Docs ne poržava format fajla koji ste obezbedili.',
  'ERR_HTTP_404_ACTION' => 'Povratak na prethodnu stranu.',
  'ERR_HTTP_404_TEXT' => 'Žao nam je, ali resurs koji ste tražili ne može biti pronađen.',
  'ERR_HTTP_404_TITLE' => 'HTTP: 404 Nije pronađen',
  'ERR_HTTP_404_TYPE' => '404',
  'ERR_HTTP_500_ACTION' => 'Molimo kontaktirajte tehničku podršku.',
  'ERR_HTTP_500_TEXT' => 'Došlo je do greške na serveru. Molimo kontaktirajte tehničku podršku.',
  'ERR_HTTP_500_TITLE' => 'HTTP: 500 Interna greška na serveru',
  'ERR_HTTP_500_TYPE' => '500',
  'ERR_HTTP_DEFAULT_ACTION' => 'Povratak na prethodnu stranu.',
  'ERR_HTTP_DEFAULT_TEXT' => 'Nepoznata greška.',
  'ERR_HTTP_DEFAULT_TITLE' => 'Nepoznata greška',
  'ERR_HTTP_DEFAULT_TYPE' => 'Nepoznato',
  'ERR_INTERNAL_ERR_MSG' => 'Interna greška',
  'ERR_INVALID_AMOUNT' => 'Molim,  unesite važeći iznos.',
  'ERR_INVALID_DATE' => 'Molim,  unesite važeći datum.',
  'ERR_INVALID_DATE_FORMAT' => 'Format datuma mora biti:',
  'ERR_INVALID_DAY' => 'Molim,  unesite važeći dan.',
  'ERR_INVALID_EMAIL_ADDRESS' => 'nije važeća email adresa.',
  'ERR_INVALID_FILE_REFERENCE' => 'Nevažeća referenca fajla.',
  'ERR_INVALID_HOUR' => 'Molim unesite validan sat.',
  'ERR_INVALID_MONTH' => 'Molim unesite validan mesec.',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Obavezno polje nije validno:',
  'ERR_INVALID_TIME' => 'Molim unesite validno vreme.',
  'ERR_INVALID_VALUE' => 'Nevažeća vrednost:',
  'ERR_INVALID_YEAR' => 'Molim unesite validnu godinu (4 cifre).',
  'ERR_LAYOUT_RENDER_MSG' => 'Ups! Nismo uspeli ništa da obradimo. Molimo pokušajte kasnije ili kontaktirajte podršku.',
  'ERR_LAYOUT_RENDER_TITLE' => 'Obrada rasporeda nije uspela',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Greška: Nedostaje unos mapirnja unos za module.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Nedostaje obavezno polje:',
  'ERR_MISSING_VARDEF_NAME' => 'Upozorenje: polje [[field]]  nema mapiran unos u  [moduleDir] vardefs.php fajlu',
  'ERR_MOBILE_BROWSER_FORBIDDEN' => 'Zabranjen.',
  'ERR_MOBILE_BROWSER_INTERNAL_SERVER_ERROR' => 'Interna greška na serveru.',
  'ERR_MOBILE_BROWSER_NOT_AUTHORIZED' => 'Autentifikacija nije uspela.',
  'ERR_MOBILE_BROWSER_PAGE_NOT_FOUND' => 'Traženi resorsi nisu nadjeni.',
  'ERR_MOBILE_BROWSER_SERVICE_UNAVAILABLE' => 'Servis je nedostupan.',
  'ERR_MOBILE_CONFLICT' => 'Neko je izmenuio isti zapis na serveru. Potvrdite za automatsko spajanje vaših izmena ili otkažite za odbacivanje promena.',
  'ERR_MOBILE_CONNECTION_FAILED' => 'Nemogu da dostići server.',
  'ERR_MOBILE_CONNECTION_FAILED_LOGIN' => 'Server je nedostupan na datom URL-u.',
  'ERR_MOBILE_EMAIL' => 'Greška. Pogrešna Email Adresa.',
  'ERR_MOBILE_FILE_ABORTED' => 'Operacija čitanja je otkazana',
  'ERR_MOBILE_FILE_NOT_FOUND' => 'Fajl nije pronađen',
  'ERR_MOBILE_FILE_NOT_READABLE' => 'Fajl nije za čitanje',
  'ERR_MOBILE_FILE_NOT_SUPPORTED' => 'Ovaj tip dokumenta se ne podržava.',
  'ERR_MOBILE_FILE_PROCESSING' => 'Greška pri procesiranju fajla',
  'ERR_MOBILE_FILE_READ' => 'Neuspelo čitanje fajla',
  'ERR_MOBILE_FILE_SECURITY' => 'Fajl je zaključan',
  'ERR_MOBILE_FILE_SIZE_LIMIT_EXCEEDED' => 'Fajl je previše velik. Maksimalna dozvoljena veličina je {{size}}',
  'ERR_MOBILE_GENERIC_NATIVE_ERROR' => 'Desila se neočekivana graška.',
  'ERR_MOBILE_INCOMPATIBLE_CLIENT_VERSION' => 'Vaša aplikacija je zastarela i više nije kompatibilna sa {{{brandName}}} instancom na koju se konektujete. Da li želite da preuzmete novu verziju iz prodavnice aplikacija?',
  'ERR_MOBILE_INTERNAL' => 'Unutrašnja greška ({{{code}}}). Molim vas probajte kasnije.',
  'ERR_MOBILE_INTERNET_UNAVAILABLE' => 'Nedostupna internet konekcija.',
  'ERR_MOBILE_INVALID_CREDS' => 'Pogrešno korisničko ime ili lozinka.',
  'ERR_MOBILE_METADATA_CHANGED' => 'Konfiguracija servera je promenjena.',
  'ERR_MOBILE_METADATA_CHANGED_RELOAD' => 'Serverska konfiguracija je promenjena i ponovno učitavanje je neopodno. Nastaviti?',
  'ERR_MOBILE_NOT_AUTHORIZED' => 'Pristup nije autorizovan',
  'ERR_MOBILE_NOT_FOUND' => 'Resorsi nisu nadjeni.',
  'ERR_MOBILE_NOT_FOUND_LOGIN' => 'Server nije nadjen na datom URL-u.',
  'ERR_MOBILE_SESSION_EXPIRED' => 'Vaša sesija je istekla.',
  'ERR_MOBILE_SSO_NOT_CONFIGURED' => 'SSO prijavljivanje je nedozvoljeno. Obezbediti instancu na Sugar 7.5 ili i podesiti je za SSO.',
  'ERR_MOBILE_STORAGE_UNAVAILABLE' => 'Skladište uređaja nije dostupno',
  'ERR_MOBILE_TIMEOUT' => 'Server ne odgovara.',
  'ERR_MOBILE_TIMEOUT_LOGIN' => 'Server ne reaguje na datom URL-u.',
  'ERR_MOBILE_UPLOAD' => 'Greška pri otpremanju fajla',
  'ERR_MOBILE_VALIDATION' => 'Rekord je nevažeći',
  'ERR_MOBILE_VIEW_NOT_SUPPORTED' => 'Verzija za mobilne uređaje ne podržava ovu funkcionalnost. Da li želite da otvorite desktop verziju?',
  'ERR_MONITOR_FILE_MISSING' => 'Greška: Kreiranje monitora nije moguće jer je metadata fajl prazan ili ne postoji.',
  'ERR_MONITOR_NOT_CONFIGURED' => 'Greška: Na postoji monitor koji je konfigurisan za traženi naziv',
  'ERR_MSSQL_DB_CONTEXT' => 'Sadržaj baze je promenjen u',
  'ERR_MSSQL_WARNING' => 'Upozorenje:',
  'ERR_NEED_ACTIVE_SESSION' => 'Od aktivne sesije se zahteva da izveze sadržaj.',
  'ERR_NOTHING_SELECTED' => 'Molim, izaberite pre nego što nastavite dalje.',
  'ERR_NOT_ADMIN' => 'Neovlašćen pristup administraciji.',
  'ERR_NO_DB' => 'Neije moguće povezati se sa bazom podataka. Molimo Vas da pogledate sugarcrm.log za detalje.',
  'ERR_NO_DOCS' => 'Nema dostupnih dokumenata',
  'ERR_NO_HEADER_ID' => 'Ovaj opcija je nedostupna u ovoj temi.',
  'ERR_NO_PRIMARY_TEAM_SPECIFIED' => 'Osnovni Tim nije određen',
  'ERR_NO_RECORDS_SELECTED' => 'Niste odabrali ni jedan zapis',
  'ERR_NO_SINGLE_QUOTE' => 'Ne možete koristiti jedan znak navodnika za označavanje',
  'ERR_NO_SUCH_FILE' => 'Fajl ne postoji u sistemu',
  'ERR_NO_VIEW_ACCESS_ACTION' => 'Kontaktirajte vašeg administratora za prava pristupa.',
  'ERR_NO_VIEW_ACCESS_MSG' => 'Kontaktirajte Vašeg administratora podrške kako biste dobili pristup ovom pogledu za modul {0}',
  'ERR_NO_VIEW_ACCESS_REASON' => 'Nemate prava pristupa ovoj stranici.',
  'ERR_NO_VIEW_ACCESS_TITLE' => 'Pristup odbijen',
  'ERR_OFFLINE' => 'Offline greška',
  'ERR_OFFLINE_CLEAN_UP_CONFIRMATION' => 'Ostali ste bez prostora na offline skladištu. Preporučuje se čišćenje skladišta. Da li želite da ga sada izvršite?',
  'ERR_OFFLINE_DB_CLEANING_ERROR' => 'Čišćenje baze podataka nije uspelo',
  'ERR_OFFLINE_OUT_OF_SPACE' => 'Ostali ste bez mesta na lokalnom skladištu podataka.',
  'ERR_OFFLINE_PREFETCH_FAILED' => 'Neuspelo ranije dohvatanje zapisa sa servera',
  'ERR_OFFLINE_SERVERTIME_UNAVAILABLE' => 'Preuzimanje serverskog vremena nije uspelo',
  'ERR_OFFLINE_START_FAILED_OUT_OF_SPACE' => 'Nije uspelo pravljenje lokalnog skladišta podataka: nema dovoljno mesta.',
  'ERR_OFFLINE_STORAGE_CREATE' => 'Nije uspelo pravljenje lokalnog skladišta podataka',
  'ERR_OFFLINE_STORAGE_UNAVAILABLE' => 'Nije uspelo otvaranje lokalnog skladišta podataka',
  'ERR_OFFLINE_SYNC_CONFLICT' => 'Konflikt pri sinhronizaciji',
  'ERR_OFFLINE_SYNC_ERROR' => 'Greška pri sinhronizaciji',
  'ERR_OPPORTUNITY_NAME_DUPE' => 'Prodajna prilika sa imenom %s već postoji.  Molim, unesite drugo ime ispod.',
  'ERR_OPPORTUNITY_NAME_MISSING' => 'Ime za prodajnu priliku nije uneseno. Molim, unesite ime prodajne prilike ispod.',
  'ERR_PASSWORD_MISMATCH' => 'Lozinke nisu iste.',
  'ERR_PORTAL_NAME_CHECK' => 'Nemogućnost potvrde da je korisničko ime za portal jedinstveno',
  'ERR_POTENTIAL_SEGFAULT' => 'Potencijalna greška: "Apache segmentation fault" je detektovana. Molim, kontaktirajte vašeg administratora sistema kako bi potvrdili ovu grešku i prosledili je SugarCRM-u.',
  'ERR_QUERY_LIMIT' => 'Greška: Granica upita $limit je dostignuta za $module modul.',
  'ERR_QUOTE_CONVERTED' => 'Ova ponuda je veće konvertovana u poslovnu prliku.',
  'ERR_REENTER_PASSWORDS' => 'Vrednost nove i trenutne lozinke se ne podudaraju.',
  'ERR_RENDER_FAILED_MSG' => 'Neuspešna obrada pogleda',
  'ERR_RENDER_FAILED_TITLE' => 'Neuspešna obrada polja',
  'ERR_RENDER_FIELD_FAILED_MSG' => 'Neuspešna obrada polja {0}.',
  'ERR_RENDER_FIELD_FAILED_TITLE' => 'Neuspešna obrada polja',
  'ERR_RESOLVE_ERRORS' => 'Molimo vas rešite sve nastale greške pre nastavka.',
  'ERR_RSS_INVALID_INPUT' => 'RSS nije validan input_type',
  'ERR_RSS_INVALID_RESPONSE' => 'RSS nije validan response_type za ovu metodu',
  'ERR_SELF_REPORTING' => 'Korisnik ne može da podnese izveštaj sam sebi.',
  'ERR_SERVER_FLAVOR_INCOMPATIBLE' => 'Nekompaktibilni tip servera: {{{flavor}}}',
  'ERR_SERVER_VERSION_INCOMPATIBLE' => 'Nekompaktibilna verzija servera: {{{version}}}',
  'ERR_SINGLE_QUOTE' => 'Za ovo polje nije moguće koristiti samo jednu ponudu. Molim, promenite vrednost.',
  'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Nedostaje index displayParams Array za:',
  'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Greška: Postoji nejednak broj argumenta za  &#39;key&#39; i &#39;copy&#39; elemente u displayParams nizu.',
  'ERR_SQS_NO_MATCH' => 'Nema podudaranja',
  'ERR_SQS_NO_MATCH_FIELD' => 'Nema podudaranja za polje:',
  'ERR_STORE_FILE_MISSING' => 'Greška: Nije moguće pronaći Store implementacioni fajl',
  'ERR_SUHOSIN' => 'Tok za postavljanje datoteka je blokirao Suhosin, molimo dodajte "upload" u suhosin.executor.include.whitelist (pogledajte sugarcrm.log za više informacija)',
  'ERR_SYNC_FAILED' => 'Nemoguće sinhronizovati sa serverom',
  'ERR_TIMEPERIOD_ALREADY_HAS_LEAVES' => 'Ovaj TimePeriod već ima definisane pod-periode',
  'ERR_TIMEPERIOD_ALREADY_LEAF' => 'Pod-vremenski periodi ne mogu imati pod-periode.',
  'ERR_TIMEPERIOD_TYPE_DOES_NOT_EXIST' => 'Nije moguće povratiti vremeneske periode tipa: {0}',
  'ERR_TIMEPERIOD_UNDEFINED_FOR_DATE' => 'Greška Timeperiod nije definisan za datum {0}',
  'ERR_UNDEFINED_METRIC' => 'Greška: Nije moguće postaviti vrednost za nedefinisanu meru',
  'ERR_UW_RETIRED' => 'Čarobnjak za nadogradnju nije dostupan u ovoj verziji.',
  'ERR_VCARD_FILE_MISSING' => 'vcf fajl nedostaje',
  'ERR_VCARD_FILE_PARSE' => 'Nije uspelo parsiranje vCard formata',
  'EXCEPTION_ACCESS_MODULE_CONFIG_NOT_AUTHORIZED' => 'Trenutni korisnik nije autorizovan da menja konfiguraciion podešavanja {moduleName}',
  'EXCEPTION_CHANGE_MODULE_CONFIG_NOT_AUTHORIZED' => 'Trenutni korisnik nije autorizovan da menja konfiguraciion podešavanja {moduleName}',
  'EXCEPTION_CLIENT_OUTDATED' => 'Vaš softver je zastareo, molimo vas ažurirajte vaš klijent pre ponovnog pokušaja konekcije',
  'EXCEPTION_CLIENT_OUTDATED_DESC' => 'API koji se koristi je zastareo i mora biti ažuriran pre daljeg korišćenja.',
  'EXCEPTION_CONNECTOR_RESPONSE' => 'Konektor zahteva za integraciju nije uspešno odgovorio.',
  'EXCEPTION_CONNECTOR_RESPONSE_DESC' => 'Zahtev pokrenut kroz API ka drugom servisu, krajnjoj tačci ili URI ukazuje da je on propao ili nije mogao biti obrađen od strane servera.',
  'EXCEPTION_CREATE_MODULE_NOT_AUTHORIZED' => 'Niste autorizovani da kreirate {moduleName}. Kontaktirajte Vašeg administratora ako Vam je potreban pristup.',
  'EXCEPTION_EDIT_CONFLICT' => 'Konflik pri izmeni, molimo vas učitajte ponovo podatke zapisa.',
  'EXCEPTION_EDIT_CONFLICT_DESC' => 'Ukazuje da možda postoje uporedne izmene zapisa i da trenutni zahtev za izmenu zapisa može da ugrozi prethodne izmene.',
  'EXCEPTION_FATAL_ERROR' => 'Vaš zahtev nije izvršen. Došlo je do fatalne greške. Proverite log za više detalja.',
  'EXCEPTION_FATAL_ERROR_DESC' => 'Zahtev ne može biti obradjen ili je došlo do greške sa odgovorom. Ovo generalno znači da je došlo do fatalne greške a detalji se mogu videti u logu aplikacije.',
  'EXCEPTION_FAVORITE_MODULE_NOT_AUTHORIZED' => 'Niste autorizovani da označite kao omiljeni {moduleName}. Kontaktirajte sistem administratora ukoliko Vam je potreban pristup.',
  'EXCEPTION_INACTIVE_PORTAL_USER' => 'Ne možete pristupiti Portalu jer Vam je neaktivan nalog. Molimo Vas kontaktirajte korisničku podršku ako Vam je potreban pristup.',
  'EXCEPTION_INACTIVE_PORTAL_USER_DESC' => 'Nalog na portalu povezan sa ulogovanim korisnikom nije više aktivan. Neophodna Vam je je podrška od korisničkog servisa',
  'EXCEPTION_INCORRECT_VERSION_DESC' => 'Verzija API-ja koji koristite nije korektna za trenutni zahtev.',
  'EXCEPTION_INVALID_PARAMETER' => 'Parametar u Vašem zahtevu nije validan.',
  'EXCEPTION_INVALID_PARAMETER_DESC' => 'Ukazuje da je parametar poslat u zahtevu nevažeći.',
  'EXCEPTION_INVALID_TOKEN' => 'Token za autentifikaciju je nevažeći',
  'EXCEPTION_INVALID_TOKEN_DESC' => 'Autentikacioni token prezentovan uz zahtev je nekorektan. Ovo se obično dešava usled isteka tokena ili pak ako je token loše formatian ili netačan.',
  'EXCEPTION_MAINTENANCE' => 'SugarCRM je u modu za održavanje. Samo administratori mogu da se prijave. Molimo vas kontaktirajte vašeg administratora za dodatne informacije.',
  'EXCEPTION_MAINTENANCE_DESC' => 'Inastanca SugarCRM koju opslužuje API je u režimu održavanja. Pristup API-ju je dozvoljen samo administratorima.',
  'EXCEPTION_METADATA_CONFLICT' => 'Konflikt sa meta podacima, molimo vas učitajte ponovno meta podatke',
  'EXCEPTION_METADATA_OUT_OF_DATE' => 'Vaši meta podaci ili korisnički heš se ne slaže sa serverom. Molimo vas izvršite ponovnu sinhronizaciju vaših meta podataka.',
  'EXCEPTION_METADATA_OUT_OF_DATE_DESC' => 'Ukazuje da meta podaci na serveru se ne slažu sa meta podacima koje klijent trenutno koristi. Ovo može da se dogodi posle izmene sistemskih podešavanja, izmena modula u Studiju, postavljanja novih modula, kao i sistemskih izmena.',
  'EXCEPTION_MISSING_PARAMTER' => 'Vašem zahtevu fali neophodan parametar.',
  'EXCEPTION_MISSING_PARAMTER_DESC' => 'Ukazuje da neophodni parametar zahteva nedostaje.',
  'EXCEPTION_NEED_LOGIN' => 'Neophodno je da budete prijavljeni na sistem kako biste izvršili ovu akciju.',
  'EXCEPTION_NEED_LOGIN_DESC' => 'Ciljani destinacija zahteva autentikaciju ali pošiljalac zahteva nije autentikovan.',
  'EXCEPTION_NOT_AUTHORIZED' => 'Niste autorizovani da izvršite ovu akciju. Kontaktirajte Vašeg administratora ako Vam je potreban pristup.',
  'EXCEPTION_NOT_AUTHORIZED_DESC' => 'Korisnik nije autorizovan za obavljanje zahtevane operacije.',
  'EXCEPTION_NOT_FOUND' => 'Resurs koji ste tražili nije pronađen. Nije moguće pronaći skriptu za obradu za putanju specificiranu u zahtevu.',
  'EXCEPTION_NOT_FOUND_DESC' => 'Krajnja tačka ne može da pronađe resurse za poslati zahtev ili ne zna kako da obradi zahtev.',
  'EXCEPTION_NO_METHOD' => 'Vaš zahtev nije podržan. Nije moguće pronaći HTTP metodu Vašeg zahteva za ovu putanju.',
  'EXCEPTION_NO_METHOD_DESC' => 'Krajnja tačka ne podržava tip poslatog HTTP zahteva. Ovo, na primer, može da se desi kada se šalje POST tip zahteva krajnjoj tački projektovanoj za primanje GET zahteva.',
  'EXCEPTION_PORTAL_NOT_CONFIGURED' => 'Portal nije pravilno konfigurisan. Kontaktirajte Vašeg administratora ako Vam je potrebna pomoć.',
  'EXCEPTION_PORTAL_NOT_CONFIGURED_DESC' => 'Portal nije korektno konfigurisan i ne može se koristiti.  Neophodna Vam je podrška od administratora portala',
  'EXCEPTION_REQUEST_FAILURE' => 'Vaš zahtev nije izvršen.',
  'EXCEPTION_REQUEST_FAILURE_DESC' => 'Izvršavanje zahteva nije uspelo.',
  'EXCEPTION_REQUEST_TOO_LARGE' => 'Vaš zahtev je preveliki kako bi bio procesuiran.',
  'EXCEPTION_REQUEST_TOO_LARGE_DESC' => 'Zahtev je previše veliki da bi ga server obradio.',
  'EXCEPTION_SUBSCRIBE_MODULE_NOT_AUTHORIZED' => 'Niste autorizovani da se pretplatite na {moduleName}. Kontaktirajte sistem administratora ukoliko Vam je potreban pristup.',
  'EXCEPTION_UNKNOWN_EXCEPTION' => 'Vaš zahtev nije uspeo zbog nepoznate greške.',
  'EXCEPTION_UNKNOWN_EXCEPTION_DESC' => 'Stanje je uzrokovano uopštenom greškom. Razlozi za ovu grešku mogu biti različiti ali su generalno van opsega preciznih API grešaka.',
  'FATAL_LICENSE_ALTERED' => 'Vaša licenca je promenjena od trenutka zadnje validacije.',
  'LBL_1_COLUMN' => '1 Kolona',
  'LBL_2_COLUMN' => '2 Kolone',
  'LBL_3_COLUMN' => '3 Kolone',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Očisti kompaniju',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Očisti kompaniju',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Očisti kampanju',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Očisti kampanju',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Očisti selekciju',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Očisti selekciju',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Očisti kontakt',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Očisti kontakt',
  'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Očisti datoteku',
  'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Očisti datoteku',
  'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Očisti odabir',
  'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Očisti odabir',
  'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Očisti tim',
  'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Očisti tim',
  'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Očisti korisnika',
  'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Očisti korisnika',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Izaberi Kompaniju',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Izaberi Kompaniju',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Izaberi kampanju',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Izaberi kampanju',
  'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
  'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Izaberi kontakt',
  'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Izaberi kontakt',
  'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
  'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Izaberi datoteku',
  'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Izaberi datoteku',
  'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
  'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Izaberi tim',
  'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Izaberi tim',
  'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
  'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Izaberi korisnika',
  'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Izaberi korisnika',
  'LBL_ACCOUNT' => 'Kompanija',
  'LBL_ACCOUNTS' => 'Kompanije',
  'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
  'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Pogledaj sadržaj',
  'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Pogledaj sadržaj [Alt+H]',
  'LBL_ACTION' => 'Akcija',
  'LBL_ACTION_CREATE' => 'NAPRAVI',
  'LBL_ACTION_CREATE_EXPLANATION' => 'Napravljen modul {{module}} "{{name}}"',
  'LBL_ACTION_CREATE_RELATED_EXPLANATION' => 'Napravljeni modul {{module}} "{{name}}" je povezan sa modulom {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_DELETE' => 'OBRIŠI',
  'LBL_ACTION_DELETE_EXPLANATION' => 'Obrisan modul {{module}} "{{name}}"',
  'LBL_ACTION_FAVORITE' => 'OMILJENO',
  'LBL_ACTION_FAVORITE_EXPLANATION' => 'Dodat u omiljene {{module}} "{{name}}"',
  'LBL_ACTION_FOLLOW' => 'PRATI',
  'LBL_ACTION_FOLLOW_EXPLANATION' => 'Dodat u praćene {{module}} "{{name}}"',
  'LBL_ACTION_LINK' => 'POVEŽI',
  'LBL_ACTION_LINK_EXPLANATION' => 'Povezan modul {{module}} "{{name}}" sa {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_UNFAVORITE_EXPLANATION' => 'Uklonjen iz omiljenih {{module}} "{{name}}"',
  'LBL_ACTION_UNFOLLOW_EXPLANATION' => 'Uklonjen iz praćenih {{module}} "{{name}}"',
  'LBL_ACTION_UNLINK' => 'Raskini vezu',
  'LBL_ACTION_UNLINK_EXPLANATION' => 'Raskinuta veza {{module}} "{{name}}" od {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_UPDATE' => 'AŽURIRAJ',
  'LBL_ACTION_UPDATE_EXPLANATION' => 'Ažuriran modul {{module}} "{{name}}"',
  'LBL_ACTIVE' => 'Aktivna sesija',
  'LBL_ACTIVE_TASKS_DASHLET' => 'Aktivni zadaci',
  'LBL_ACTIVE_TASKS_DASHLET_COMPLETE_TASK' => 'Završeno',
  'LBL_ACTIVE_TASKS_DASHLET_CONFIRM_CLOSE' => 'Da li ste sigruni da želite da zatovrite {0} kao kompletirano?',
  'LBL_ACTIVE_TASKS_DASHLET_DESCRIPTION' => 'Dešlet aktivni zadaci prikazuje trenutne, dolazeće i taskove koje trebaju da se urade.',
  'LBL_ACTIVE_TASKS_DASHLET_DUE_NOW' => 'Prispelo',
  'LBL_ACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL' => 'Timski zadaci',
  'LBL_ACTIVE_TASKS_DASHLET_TODO' => 'Za uraditi',
  'LBL_ACTIVE_TASKS_DASHLET_UPCOMING' => 'Nadolazeće',
  'LBL_ACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL' => 'Moji zadaci',
  'LBL_ACTIVITIES' => 'Aktivnosti',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
  'LBL_ACTIVITYSTREAM_COMMENT_PLACEHOLDER' => 'Dodajte vaš komentart&hellip; Ukucajte @ da pomenete korisnika. Ukucajte # da referencirate zapis.',
  'LBL_ACTIVITYSTREAM_POST_PLACEHOLDER' => 'Ukucajte poruku i prevucite željeni prilog. Ukucajte @ da pomenete korisnika. Ukucajte # da referencirate zapis.',
  'LBL_ACTIVITYSTREAM_RELATIVETIME_ON' => 'Na',
  'LBL_ACTIVITY_STREAM' => 'Aktivnosti',
  'LBL_ACTIVITY_STREAM_DASHLET_DESCRIPTION' => 'Prikazati listu aktivnosti izvedenih na zapisu i kreirati i postaviti komentare',
  'LBL_ACTIVITY_STREAM_DASHLET_NAME' => 'Moj tok aktivnosti',
  'LBL_ACTIVITY_STREAM_DISABLED' => 'Pregled aktivnosti nije uključen',
  'LBL_ACTIVITY_STREAM_DISABLED_MODULE' => 'Tok aktivnosti nije dozvoljen za ovaj modul',
  'LBL_ACTIVITY_VIEW_TOUR' => 'Tura pregleda aktivnosti',
  'LBL_ACTIVTY_STREAM_SHOW_MORE' => 'Još poruka...',
  'LBL_ADD' => 'Dodaj',
  'LBL_ADDED_DASHLET' => 'Sugar dašlet je dodat',
  'LBL_ADDING_DASHLET' => 'Dodajem Sugar dašlet ...',
  'LBL_ADDITIONAL_DETAILS' => 'Dodatni detalji',
  'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Zatvori',
  'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klikni da zatvoriš',
  'LBL_ADD_ALL_LEAD_FIELDS' => 'Dodaj sva polja',
  'LBL_ADD_BUTTON' => 'Dodaj',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_TITLE' => 'Dodaj [Alt+A]',
  'LBL_ADD_DASHLETS' => 'Dodaj Sugar dašlete',
  'LBL_ADD_DOCUMENT' => 'Dodaj dokument',
  'LBL_ADD_PAGE' => 'Dodaj stranu',
  'LBL_ADD_TO_FAVORITES' => 'Dodaj u Moje omiljene',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Dodaj u listu ciljeva',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Dodaj u listu ciljeva',
  'LBL_ADMIN' => 'Administracija',
  'LBL_ADVANCED' => 'Napredno',
  'LBL_ADVANCEDSEARCH' => 'Napredna pretraga',
  'LBL_ADVANCED_SEARCH' => 'Napredna pretraga',
  'LBL_ADV_SEARCH_LNK_KEY' => '8',
  'LBL_AJAX_FAILURE' => 'Ajax greška',
  'LBL_ALERT_BROWSER_NOT_SUPPORTED' => 'Verzija vašeg pregledača više nije podržana ili koritite nepodržani pregledač.',
  'LBL_ALERT_BROWSER_SUPPORT' => 'Preporučene su sledeće verzije pregledača: <ul><li>Internet Explorer 9</li><li>Firefox 22</li><li>Safari 6</li><li>Chrome 27</li></ul>',
  'LBL_ALERT_TITLE_ERROR' => 'Greška:',
  'LBL_ALERT_TITLE_LOADING' => 'Učitavanje',
  'LBL_ALERT_TITLE_NOTICE' => 'Obaveštenje',
  'LBL_ALERT_TITLE_SUCCESS' => 'Uspeh:',
  'LBL_ALERT_TITLE_WARNING' => 'Upozorenje:',
  'LBL_ALT_ADDRESS' => 'Druga adresa:',
  'LBL_ALT_ADD_TEAM_ROW' => 'Dodaj novi red tima',
  'LBL_ALT_HIDE_OPTIONS' => 'Sakrij Opcije',
  'LBL_ALT_HOT_KEY' => 'Alt+',
  'LBL_ALT_INFO' => 'Informacija',
  'LBL_ALT_MOVE_COLUMN_DOWN' => 'Pomeri odabrani unos dole u redosledu prikazane liste',
  'LBL_ALT_MOVE_COLUMN_LEFT' => 'Pomeri odabrani unos u listsu sa leve strane',
  'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Pomeri odabrani unos u listsu sa desne strane',
  'LBL_ALT_MOVE_COLUMN_UP' => 'Pomeri odabrani unos gore u redosledu prikazane liste',
  'LBL_ALT_REMOVE_TEAM_ROW' => 'Ukloni tim',
  'LBL_ALT_SHOW_OPTIONS' => 'Pokaži opcije',
  'LBL_ALT_SORT' => 'Sortiraj',
  'LBL_ALT_SORT_ASC' => 'Sortiraj rastuće',
  'LBL_ALT_SORT_DESC' => 'Sortiraj opadajuće',
  'LBL_ALT_SPOT_SEARCH' => 'Spot pretraga',
  'LBL_AMOUNT_USDOLLAR' => 'Iznos',
  'LBL_AND' => 'i',
  'LBL_ANNUAL_TIMEPERIOD_FORMAT' => 'Godina {0}',
  'LBL_ARCHIVE' => 'Arhiva',
  'LBL_ARCHIVE_EMAIL' => 'Arhiviraj Email',
  'LBL_ASSIGN' => 'Izaberi {{{this}}}',
  'LBL_ASSIGNED_TO' => 'Dodeljeno',
  'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno',
  'LBL_ASSIGNED_TO_USER' => 'Dodeljeno korisniku',
  'LBL_ASSOC' => 'Saradnik {{{this}}}',
  'LBL_ASSOC_EXISTING' => 'Asocirajte postojeći {{{this}}}',
  'LBL_ASSOC_RELATED_RECORD' => 'Asocirajte postojeći zapis',
  'LBL_AUTH_FAILED' => 'Autentikacija klijenta nije uspela',
  'LBL_AUTH_FAILED_TITLE' => 'Pogrešan klijent',
  'LBL_BACK' => 'Nazad',
  'LBL_BAL' => 'Napraviti listu',
  'LBL_BASE_RATE' => 'Osnovna Stopa',
  'LBL_BASIC' => 'Osnovno',
  'LBL_BASIC_QUICK_SEARCH' => 'Pretraži...',
  'LBL_BASIC_SEARCH' => 'Pretraga',
  'LBL_BEFORE' => 'Pre',
  'LBL_BEST' => 'Najbolje',
  'LBL_BEST_ADJUSTED' => 'Najbolje (prilagođeno)',
  'LBL_BILLING_ADDRESS' => 'Adresa naplate',
  'LBL_BILLING_STREET' => 'Ulica:',
  'LBL_BILL_TO_ACCOUNT' => 'Naplatiti kompaniji',
  'LBL_BILL_TO_CONTACT' => 'Naplatiti kontaktu',
  'LBL_BLANK_VALUE' => '<empty>',
  'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack kreiran za ID korisnika {0}',
  'LBL_BROWSER_TITLE' => 'SugarCRM - Komercijalni CRM Otvorenog Koda',
  'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
  'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Pregledaj dokumente',
  'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Pregledaj dokumente [Alt+B]',
  'LBL_BUGS' => 'Defekti',
  'LBL_BY' => 'od',
  'LBL_Blank' => ' ',
  'LBL_CALENDAR_DURATION' => 'Trajanje',
  'LBL_CALENDAR_END_DATE' => 'Datum završetka',
  'LBL_CALENDAR_EVENT_RESPONSE_ACCEPT' => 'Prisustvujem',
  'LBL_CALENDAR_EVENT_RESPONSE_DECLINE' => 'Odbijen',
  'LBL_CALENDAR_EVENT_RESPONSE_NONE' => 'Bez odgovora',
  'LBL_CALENDAR_EVENT_RESPONSE_TENTATIVE' => 'Neodlučen',
  'LBL_CALENDAR_EVENT_SCHEDULE_UNAVAILABLE' => 'Zakazati nedostupne',
  'LBL_CALENDAR_RECURRENCE' => 'Ponavljanje',
  'LBL_CALENDAR_REMINDERS' => 'Podsetnici',
  'LBL_CALENDAR_REPEAT_COUNT' => 'Ponoviti slučajeve',
  'LBL_CALENDAR_REPEAT_DOW' => 'Ponoviti sledećim danima u okviru nedelje',
  'LBL_CALENDAR_REPEAT_INTERVAL' => 'Intervali ponavljanja',
  'LBL_CALENDAR_REPEAT_TYPE' => 'Tip ponavljanja',
  'LBL_CALENDAR_REPEAT_UNTIL_DATE' => 'Ponavlja se do',
  'LBL_CALENDAR_START_DATE' => 'Datum početka',
  'LBL_CALL' => 'Poziv',
  'LBL_CALLS' => 'Pozivi',
  'LBL_CALLS_SUBPANEL_TITLE' => 'Pozivi',
  'LBL_CALL_BUTTON' => 'Poziv',
  'LBL_CAMPAIGN' => 'Kampanja:',
  'LBL_CAMPAIGNLOG' => 'LogKampanje',
  'LBL_CAMPAIGNS' => 'Kampanje',
  'LBL_CAMPAIGNS_SEND_QUEUED' => 'Pošalji Email poruke Kapmanje za slanje',
  'LBL_CAMPAIGN_CONTACT' => 'Kampanje',
  'LBL_CAMPAIGN_ID' => 'ID kampanje',
  'LBL_CANCEL_BUTTON_KEY' => 'X',
  'LBL_CANCEL_BUTTON_LABEL' => 'Otkaži',
  'LBL_CANCEL_BUTTON_LABEL_CONT' => 'da ostanete na stranici.',
  'LBL_CANCEL_BUTTON_LABEL_UNSAVED_CONT' => 'da ostanete na stranici.',
  'LBL_CANCEL_BUTTON_TITLE' => 'Otkaži [Alt+X]',
  'LBL_CANNOT_SEND_PASSWORD' => 'Ne mogu poslati lozinku',
  'LBL_CAN_NOT_DISABLE_ALL_LANG' => 'Nije moguće isključiti sve jezike.',
  'LBL_CASE' => 'Slučaj',
  'LBL_CASES' => 'Slučajevi',
  'LBL_CASE_SUMMARY_CHART' => 'Pregled slučaja',
  'LBL_CASE_SUMMARY_CHART_DESC' => 'Prikazuje pregled povezanih slučajeva',
  'LBL_CHANGE_BUTTON_KEY' => 'G',
  'LBL_CHANGE_BUTTON_LABEL' => 'Promeni',
  'LBL_CHANGE_BUTTON_TITLE' => 'Promeni [Alt+G]',
  'LBL_CHANGE_LAYOUT' => 'Promeni izgled',
  'LBL_CHANGE_PASSWORD' => 'Promena lozinke',
  'LBL_CHARSET' => 'UTF-8',
  'LBL_CHART' => 'Grafik',
  'LBL_CHART_CONFIG_ALLOW_SCROLLING' => 'Dozvoliti pomeranje teksta',
  'LBL_CHART_CONFIG_BAR_CHART_OPTIONS' => 'Opcije za prikazivanje dijagrama s stubićima',
  'LBL_CHART_CONFIG_CHART_TYPE' => 'Tip grafika',
  'LBL_CHART_CONFIG_HIDE_EMPTY_GROUPS' => 'Sakriti prazne grupe',
  'LBL_CHART_CONFIG_SHOW_TITLE' => 'Prikazati naslov',
  'LBL_CHART_CONFIG_SHOW_XAXIS_LABEL' => 'Prikazati x-axis oznaku',
  'LBL_CHART_CONFIG_SHOW_YAXIS_LABEL' => 'Prikazati y-axis oznaku',
  'LBL_CHART_CONFIG_STACK_DATA' => 'Naslagane serije podataka',
  'LBL_CHART_CONFIG_TICK_DISPLAY' => 'Označiti metodu prikaza',
  'LBL_CHART_CONFIG_TICK_ROTATE' => 'Rotirati obeleživače',
  'LBL_CHART_CONFIG_TICK_STAGGER' => 'Uzdrmati obeleživače',
  'LBL_CHART_CONFIG_TICK_WRAP' => 'Zamotati obeleživače',
  'LBL_CHART_CONFIG_VALUE_PLACEMENT' => 'Dijagram za prikaz vrednosti',
  'LBL_CHART_CONTROLS_CLOSE' => 'Sakrij kontrole',
  'LBL_CHART_CONTROLS_OPEN' => 'Prikaži kontrole',
  'LBL_CHART_LEGEND_CLOSE' => 'Sakrij legendu',
  'LBL_CHART_LEGEND_OPEN' => 'Prikaži legendu',
  'LBL_CHART_NO_DATA' => 'Nisu pronađeni podaci.',
  'LBL_CHART_UNDEFINED' => 'Nedefinisano',
  'LBL_CHECKALL' => 'Proveri sve',
  'LBL_CHOOSE_ITEMS' => 'Izaberite stavke',
  'LBL_CHOOSE_LINK' => 'Odaberite tip linka',
  'LBL_CHOOSE_MONTH' => 'Odaberite mesec',
  'LBL_CHOOSE_PARENT_TYPE' => 'Odaberite tip matičnog zapisa',
  'LBL_CITY' => 'Grad',
  'LBL_CLEARALL' => 'Obriši sve',
  'LBL_CLEAR_BUTTON_KEY' => 'C',
  'LBL_CLEAR_BUTTON_LABEL' => 'Obriši',
  'LBL_CLEAR_BUTTON_TITLE' => 'Obriši [Alt+C]',
  'LBL_CLICK_HERE' => 'Klikni ovde',
  'LBL_CLICK_TO_DRILLDOWN' => 'kliknuti za rotaciju u dubinu',
  'LBL_CLIENT_IP' => 'IP adresa klijenta',
  'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
  'LBL_CLOSEALL_BUTTON_LABEL' => 'Zatvori sve',
  'LBL_CLOSEALL_BUTTON_TITLE' => 'Zatvori sve [Alt+I]',
  'LBL_CLOSEINLINE' => 'Zatvori',
  'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Da li želite da zatvorite ovaj #modul#?',
  'LBL_CLOSE_ACTIVITY_HEADER' => 'Potvrdi',
  'LBL_CLOSE_ACTIVITY_REMEMBER' => 'Ne prikazuj više ovu poruku.',
  'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
  'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Zatvori i kreiraj novi',
  'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Zatvori i kreiraj novi',
  'LBL_CLOSE_BUTTON_KEY' => 'Q',
  'LBL_CLOSE_BUTTON_LABEL' => 'Zatvori',
  'LBL_CLOSE_BUTTON_TITLE' => 'Zatvori',
  'LBL_CLOSE_DASHLETS' => 'Zatvori',
  'LBL_CLOSE_SAVE_BUTTON' => 'Zatvori i sačuvaj zadatak',
  'LBL_CLOSE_WINDOW' => 'Zatvori prozor',
  'LBL_COFIGURE_PORTAL_THEME' => 'Podesite temu portala',
  'LBL_COLLAPSE_ALL' => 'Suzi sve',
  'LBL_COLLECTION_EXACT' => 'Tačno',
  'LBL_COLLECTION_NAME' => 'Naziv',
  'LBL_COLLECTION_PRIMARY' => 'Primarno',
  'LBL_COLORS' => 'Boje',
  'LBL_COLUMNS' => 'Kolona',
  'LBL_COLUMNS_CAN_BE_DISPLAYED' => 'Kolone mogu biti prikazane',
  'LBL_COMMENT' => 'Komentar',
  'LBL_COMPANY_LOGO' => 'Logo kompanije',
  'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
  'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Sastavi Email',
  'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Sastavi Email [Alt+L]',
  'LBL_CONFIGURE_TWITTER' => 'Kontaktirajte vašeg administratora za konfiguraciju Twitter-a',
  'LBL_CONFIG_BLOCKED_DESC_CONFIG_ACCESS' => 'Podešavanje baze podataka za {{module}} mora biti definisano',
  'LBL_CONFIG_BLOCKED_DESC_MODULE_ACCESS' => 'Korisnik ne treba da podesi {{module}}',
  'LBL_CONFIG_BLOCKED_DESC_NO_CONFIG_METADATA' => '{{module}} nema nikakvo podešavanje',
  'LBL_CONFIG_BLOCKED_DESC_USER_ACCESS' => 'Korisnik ne treba da pristupi {{module}}',
  'LBL_CONFIG_BLOCKED_TITLE' => '{{module}} greška u podešavanju',
  'LBL_CONFIG_MODULE_SETTINGS_SAVED' => '{{module}} podešavanja su sačuvana.',
  'LBL_CONFIG_TITLE_MODULE_SETTINGS' => '{{module}} Podešavanje',
  'LBL_CONFIRM' => 'Potvrdi',
  'LBL_CONFIRM_BUTTON_LABEL' => 'OK',
  'LBL_CONFIRM_BUTTON_LABEL_CONT' => 'da napustite stranicu i odbacite promene.',
  'LBL_CONFIRM_BUTTON_LABEL_UNSAVED_CONT' => 'da napustite stranicu i odbacite promene.',
  'LBL_CONNECTORS_POPUPS' => 'Popupi konektora',
  'LBL_CONNECT_TEST_FAIL' => 'Greška: Podešavanja konektora nisu dobra. Molimo vas kontaktirajte vašeg administratora.',
  'LBL_CONNECT_TWITTER' => 'Povežite se sa Twitter-om',
  'LBL_CONNECT_TWITTER_FOR_ADMIN' => 'Podesite Twitter konektor',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_CONTACTS' => 'Kontakti',
  'LBL_CONTACT_EDIT_PASSWORD_LNK_TEXT' => 'Promena lozinke',
  'LBL_CONTACT_LIST' => 'Lista kontakata',
  'LBL_CONTEXTUAL_SHORTCUTS' => 'Dodatne prečice',
  'LBL_CONTRACTS' => 'Ugovori',
  'LBL_COPYRIGHT' => 'Copyright © 2004-2014 SugarCRM Inc. Sva prava zadržana.',
  'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopiraj adresu s leva:',
  'LBL_COUNTRY' => 'Država:',
  'LBL_CREATED' => 'Autor',
  'LBL_CREATED_BY_USER' => 'Kreirao korisnik',
  'LBL_CREATED_ID' => 'ID broj autora',
  'LBL_CREATED_USER' => 'Kreirao korisnik',
  'LBL_CREATE_ATTACHMENT' => 'Napravite prilog',
  'LBL_CREATE_BUG' => 'Kreiraj defekt',
  'LBL_CREATE_BUTTON_LABEL' => 'Kreiraj',
  'LBL_CREATE_CASE' => 'Kreiraj slučaj',
  'LBL_CREATE_CONTACT' => 'Kreiraj kontakt',
  'LBL_CREATE_KB_DOCUMENT' => 'Kreiraj artikal',
  'LBL_CREATE_LINK_BUTTON_LABEL' => 'Napravite i povežite zapis',
  'LBL_CREATE_LINK_RECORD' => 'Napravite i povežite zapis',
  'LBL_CREATE_MODULE' => 'Kreirati {{{this}}}',
  'LBL_CREATE_NEW_TARGET_LIST' => 'Napravite novu listu ciljeva',
  'LBL_CREATE_NOTE' => 'Kreiraj belešku',
  'LBL_CREATE_OPPORTUNITY' => 'Kreiraj prodajnu priliku',
  'LBL_CREATE_RELATED' => 'Kreirajte povezan {{{this}}}',
  'LBL_CREATE_RELATED_RECORD' => 'Kreirajte povezani zapis',
  'LBL_CREATE_TASK' => 'Kreiraj zadatak',
  'LBL_CREATING_NEW_PAGE' => 'Kreiram novu stranicu...',
  'LBL_CURRENCIES' => 'Valute',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_CURRENCY_ID' => 'ID broj valute',
  'LBL_CURRENCY_NAME' => 'Ime valute',
  'LBL_CURRENCY_RATE' => 'Kursna Lista',
  'LBL_CURRENCY_SYMBOL' => 'Simbol valute',
  'LBL_CURRENT_PASSWORD' => 'Trenutna lozinka',
  'LBL_CURRENT_TIMEPERIOD' => 'Trenutni Vremenski Period',
  'LBL_CURRENT_USER_FILTER' => 'Samo moje stavke:',
  'LBL_DASHBOARD_BWC' => 'Moj Lični Dashbord',
  'LBL_DASHBOARD_NO_RECORDS' => 'Nema sačuvanih tabla sa dašletima',
  'LBL_DASHBOARD_TOGGLE' => 'Otvori/Zatvori tablu sa dašletima',
  'LBL_DASHLET' => 'Sugar dašlet',
  'LBL_DASHLET_ATTACHMENTS_DESCRIPTION' => 'Belečke i prilozi pripadaju zapisu',
  'LBL_DASHLET_ATTACHMENTS_NAME' => 'Prilozi',
  'LBL_DASHLET_CASESSUMMARY_CLOSE_CASES' => 'Zatvoreni slučajevi',
  'LBL_DASHLET_CASESSUMMARY_OPEN_CASES' => 'Otvoreni slučajevi',
  'LBL_DASHLET_CASESSUMMARY_SUMMARY' => 'Sadržaj',
  'LBL_DASHLET_CASES_SUMMARY_NAME' => 'Pregled slučaja',
  'LBL_DASHLET_CLOSE' => 'Zatvori',
  'LBL_DASHLET_COMPANY_INFO' => 'D&B: Uvezi i Obogati',
  'LBL_DASHLET_COMPANY_INFO_DESC' => 'Dopunite postojeći nalog koristeći D&B podatke. Potrebna D&B prijava.',
  'LBL_DASHLET_COMPANY_INFO_LONG_DESC' => 'Održavajte vaše podatke naloga ažurnim pomoću D&B uvoza podataka i obogaćenih Funkcija.',
  'LBL_DASHLET_CONFIGURE' => 'Podešavanja',
  'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automatski osveži',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Prikaži redove',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filteri',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Opšte',
  'LBL_DASHLET_CONFIGURE_INTELLIGENT' => 'Poveži sa trenutnim zapisom',
  'LBL_DASHLET_CONFIGURE_LINKED' => 'Povezana polja',
  'LBL_DASHLET_CONFIGURE_MY_FAVORITES_ONLY' => 'Moji omiljeni',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Samo moje stavke',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Naslov',
  'LBL_DASHLET_CONFIG_EDIT_LABEL' => 'Izmeni',
  'LBL_DASHLET_COUNTRY_CHART_DESCRIPTION' => 'Prikazuje grafikon prodaje po mapi država',
  'LBL_DASHLET_COUNTRY_CHART_NAME' => 'Prodaja po državi',
  'LBL_DASHLET_DROP_HERE' => 'Spustite ovde',
  'LBL_DASHLET_FORECASTS_CHART_DESC' => 'Prikazuje stubičasti grefikon prodaje za određeni vremenski period',
  'LBL_DASHLET_FORECASTS_CHART_NAME' => 'Stubičasti grafikon prognoze',
  'LBL_DASHLET_FORECASTS_DATASET' => 'Set podataka',
  'LBL_DASHLET_FORECASTS_DETAILS' => 'Detalji prognoze',
  'LBL_DASHLET_FORECASTS_DETAILS_DESC' => 'Prikazuje detalje trenutne prognoze.',
  'LBL_DASHLET_FORECASTS_FOR_CHART_NAME' => 'Prognoza za',
  'LBL_DASHLET_FORECASTS_GROUPBY' => 'Grupiši po',
  'LBL_DASHLET_FORECAST_NAME' => 'Prognoza',
  'LBL_DASHLET_FORECAST_PARETO_CHART_NAME' => 'Pareto grafikon prognoze',
  'LBL_DASHLET_ITERACTIONS_NAME' => 'Interakcije',
  'LBL_DASHLET_LISTVIEW_DESCRIPTION' => 'Lista zapisa dodeljenih vama',
  'LBL_DASHLET_LISTVIEW_NAME' => 'Pregled u vidu liste',
  'LBL_DASHLET_MAXIMIZE' => 'Povećaj',
  'LBL_DASHLET_MAXIMIZE_ALL' => 'Povećaj sve',
  'LBL_DASHLET_MINIMIZE' => 'Smanji',
  'LBL_DASHLET_MINIMIZE_ALL' => 'Smanji sve',
  'LBL_DASHLET_MODULE_UNAVAILABLE' => 'Podaci nisu dostupni. Nemate dozvolu da pristupite ovom modulu. Molimo ažurirajte ili uklonite ovaj dashlet.',
  'LBL_DASHLET_MOVE' => 'Pomeri',
  'LBL_DASHLET_NEWS_DESCRIPTION' => 'Google vesti za povezani nalog',
  'LBL_DASHLET_NEWS_FEED_NAME' => 'Vesti',
  'LBL_DASHLET_NEWS_NAME' => 'Vesti',
  'LBL_DASHLET_NO_RECORDS' => 'Nema pronađenih zapisa u ovom trenutku.',
  'LBL_DASHLET_OPPORTUNITY_DESCRIPTION' => 'Pokazatelji prilike za prodaju za povezanu kompaniju',
  'LBL_DASHLET_OPPORTUNITY_NAME' => 'Pokazatelji prilike za prodaju',
  'LBL_DASHLET_PIPLINE_NAME' => 'Levak prodaje',
  'LBL_DASHLET_RECENT_TWEETS_SUGARCRM_NAME' => 'Skorašnji Tweet-ovi - @{{twitter}}',
  'LBL_DASHLET_REFRESH' => 'Osveži',
  'LBL_DASHLET_REFRESH_LABEL' => 'Osveži',
  'LBL_DASHLET_REMOVE_LABEL' => 'Ukloni',
  'LBL_DASHLET_SAVED_REPORTS_CHART' => 'Dešlet sačuvanih grafikona izveštaja',
  'LBL_DASHLET_SAVED_REPORTS_CHART_DESC' => 'Prikazuje bilo koji grafikon iz sačuvanog izveštaja.',
  'LBL_DASHLET_TOGGLE' => 'Podesi vidljivost table sa dašletima',
  'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Top 10 mogućnosti prodaje',
  'LBL_DATA_VIEW' => 'Pregled podataka',
  'LBL_DATE' => 'Datum',
  'LBL_DATE_ENTERED' => 'Datum kreiranja',
  'LBL_DATE_LAST_ACTION' => 'Datum poslednje akcije',
  'LBL_DATE_MODIFIED' => 'Datum izmene:',
  'LBL_DATE_START' => 'Datum početka',
  'LBL_DB_ROUND_TRIPS' => 'DB ciklusi',
  'LBL_DEFAULT_DASHBOARD_TITLE' => 'Moja tabla sa dašletima',
  'LBL_DEFAULT_HELP_DASHBOARD_TITLE' => 'Tabla sa dašletima Pomoć',
  'LBL_DEFAULT_HELP_DASHLET_DESC' => 'Dashlet Help omogućava modul i poseban izgled pomoći.',
  'LBL_DEFAULT_HELP_DASHLET_TITLE' => 'Dašlet Pomoć',
  'LBL_DEFAULT_LINK_TEXT' => 'Podrazumevani link tekst.',
  'LBL_DELETE' => 'Obriši',
  'LBL_DELETED' => 'Obrisan',
  'LBL_DELETE_BUTTON' => 'Obriši',
  'LBL_DELETE_BUTTON_KEY' => 'D',
  'LBL_DELETE_BUTTON_LABEL' => 'Obriši',
  'LBL_DELETE_BUTTON_TITLE' => 'Obriši [Alt+D]',
  'LBL_DELETE_FILTER_CONFIRMATION' => 'Ovaj filter će biti uklonjen iz svih pogleda; ovo može uključivati i konfiguraciju podataka za dašlet. Da li ste sigurni da želite da obrišete ovaj filter?',
  'LBL_DELETE_INLINE' => 'Obriši',
  'LBL_DELETE_PAGE' => 'Obriši stranu',
  'LBL_DELETE_PAGE_CONFIRM' => 'Da li ste sigurni da želite da obrišete ovu stranicu?',
  'LBL_DELETING' => 'Briše se...',
  'LBL_DESCRIPTION' => 'Opis',
  'LBL_DETAILVIEW' => 'Detaljni pregled',
  'LBL_DETAILVIEW_NO_RECORDS' => 'Zapis nije mogao biti procesuiran u ovom trenutku.',
  'LBL_DIRECT_REPORTS' => 'Direktni izveštaj',
  'LBL_DISPLAY_COLUMNS' => 'Prikaži kolone',
  'LBL_DISPLAY_LOG' => 'Dnevnik pregleda',
  'LBL_DNB_ACC_CRT' => 'D&B pravljenje naloga',
  'LBL_DNB_ACC_CRT_DESC' => 'Kreirajte nalog koristeći D&B. Potrebna D&B prijava.',
  'LBL_DNB_ACT_OPER' => 'Aktivnosti i Operacije',
  'LBL_DNB_ACT_OPER_DESC' => 'Snima opis poslovnih operacija uključujući marketinške informacija kao što su broj mušterija, detalji agencija i uvozno/izvozni detalji',
  'LBL_DNB_ADDRESS' => 'Adresa',
  'LBL_DNB_ADDRESS_TENURE_DETAILS' => 'Detalji Adrese Poseda',
  'LBL_DNB_ADMIN_CONFIG' => 'Podešavanje D&B konektora',
  'LBL_DNB_AGENT_IND' => 'Agent Indikator',
  'LBL_DNB_AGENT_INDICATOR' => 'Agent Indikator',
  'LBL_DNB_AGENT_IND_DESC' => 'Kada je tačno(vrednost podešena na 1) to ukazuje ulogu subjekta kao agenta u promociji dobara i usluga druge organizacije, npr., Agent Prodavac, Agent Nabavke',
  'LBL_DNB_AIRPRT_DISADV_ENT' => 'Indikator Aerodromskih koncesionih onesposobljenih poslavnih preduzeća',
  'LBL_DNB_AIRPRT_DISADV_ENT_DESC' => 'Vrednost TAČNO ukazuje da preduzeće posluje kao koncesionar na jednom od nacionalnih aerodroma i zadovoljava vlasniške potrebe propisanie od strane regulatora u 49 CFR Part 23 dokumentu',
  'LBL_DNB_ALASNAT_IND' => 'Ukazuje da je rođen na Aljasci',
  'LBL_DNB_ALASNAT_IND_DESC' => 'Vrednost TAČNO ukazuje da je pleme  Alaskan Native Corporation',
  'LBL_DNB_AND' => 'i',
  'LBL_DNB_ANNUAL_SALES_US_DOLLAR' => 'Godišnja Prodaja',
  'LBL_DNB_API_ERR' => 'D&B API greška',
  'LBL_DNB_ASSESMENT' => 'D&B procena',
  'LBL_DNB_ASSESMENT_DESC' => 'Zapisi informacija iznutra ili informacije dodate vrednosti o organizacijama, kao što su:- preporuke koliko kredita im možemo dozvoliti, - procena njihove likvidnosti, - precizni proračuni njihovih performansi i ponašanja, - predviđenja rizika poslovonja sa njima. Rezultati predviđanja se obično računaju i dodeljuju od strane D&B, ali takve procene mogu takođe biti snimljene kada du dodeljene od treće strane.',
  'LBL_DNB_ASSESMENT_TYPE_VALUE' => 'Tip Vrednosti Procene',
  'LBL_DNB_ASSESMENT_VALUE' => 'Procena vrednosti',
  'LBL_DNB_ASSESSMENT' => 'Procena',
  'LBL_DNB_ASSIGNMENT_METHOD_TEXT' => 'Tekst Metoda Dodeljivanja',
  'LBL_DNB_ASSOCIATE' => 'Saradnik',
  'LBL_DNB_BACK_TO_IMPORT_ENRICH' => 'Nazad na Uvezi i Obogati',
  'LBL_DNB_BACK_TO_SRCH' => 'Povratak na D&B rezultate pretrage',
  'LBL_DNB_BAL' => 'D&B napraviti listu',
  'LBL_DNB_BAL_ACCT_HEADER' => 'Kompanije',
  'LBL_DNB_BAL_AFTER' => 'Posle',
  'LBL_DNB_BAL_ALL_SITE' => 'Svi sajtovi',
  'LBL_DNB_BAL_AREA_CODE' => 'Sifra regiona',
  'LBL_DNB_BAL_ASSETS' => 'Aktiva',
  'LBL_DNB_BAL_BEFORE' => 'Pre',
  'LBL_DNB_BAL_BIO' => 'Biografija',
  'LBL_DNB_BAL_BOTH' => 'Oba/oboje',
  'LBL_DNB_BAL_BTW' => 'Između',
  'LBL_DNB_BAL_DISTANCE' => 'Rastojanje',
  'LBL_DNB_BAL_DUNS' => 'DUNS',
  'LBL_DNB_BAL_FILING_DATE' => 'Datum početka',
  'LBL_DNB_BAL_FINANCIAL_INFO' => 'Finansijske informacije',
  'LBL_DNB_BAL_GTE' => 'Veće od ili jednako',
  'LBL_DNB_BAL_HIGH' => 'Visok',
  'LBL_DNB_BAL_HINT' => 'Izabrati kriterijum za pravljenje liste',
  'LBL_DNB_BAL_IMPORT_AS' => 'Uvesti kao:',
  'LBL_DNB_BAL_INDUSTRY' => 'Industrija',
  'LBL_DNB_BAL_INDUSTRY_WARN' => 'Promena tipa industrije će obrisati prethodno odabran industrijski kriterijum. Da li želite da promenite tip industrijskog koda?',
  'LBL_DNB_BAL_IND_CODE_TYPE' => 'Tip industrijskog koda',
  'LBL_DNB_BAL_IND_CODE_TYPE_PRI_SEC' => 'Uključujući primarni/sekundarni',
  'LBL_DNB_BAL_IPO_DATA' => 'IPO podaci',
  'LBL_DNB_BAL_IPO_OFFER_AMT' => 'IPO ponuda iznosa',
  'LBL_DNB_BAL_IPO_PRICE_RANGE' => 'IPO raspon cene',
  'LBL_DNB_BAL_JOBCD_PH' => 'Odabrati poslovnu funkciju',
  'LBL_DNB_BAL_KM' => 'KM',
  'LBL_DNB_BAL_LIST' => 'Nazad do D&B rezultata pravljenja liste',
  'LBL_DNB_BAL_LOAD' => 'Pravljenje liste',
  'LBL_DNB_BAL_LOW' => 'Nizak',
  'LBL_DNB_BAL_LTE' => 'Manje od ili jednako',
  'LBL_DNB_BAL_MED' => 'Srednji',
  'LBL_DNB_BAL_MILES' => 'Milja',
  'LBL_DNB_BAL_NAICS' => 'NAICS kod',
  'LBL_DNB_BAL_NET_INCOME' => 'Neto prihod',
  'LBL_DNB_BAL_NET_INCOME_GROWTH' => 'Rast neto prihoda',
  'LBL_DNB_BAL_ORG_ID' => 'Identifikacija organizacije #',
  'LBL_DNB_BAL_ORG_NAME' => 'Naziv kompanije',
  'LBL_DNB_BAL_PARAM_ANNL_SALES' => 'Godišnja Prodaja',
  'LBL_DNB_BAL_PARAM_COMP' => 'Lokacija kompanije',
  'LBL_DNB_BAL_PARAM_COMP_INFORMATION' => 'Podaci o kompaniji',
  'LBL_DNB_BAL_PARAM_COMP_SZ' => 'Veličina kompanije',
  'LBL_DNB_BAL_PARAM_EMP_CNT' => 'Broj zaposlenih',
  'LBL_DNB_BAL_PARAM_EMP_GRWT' => 'Ukupni rast zaposlenih u %',
  'LBL_DNB_BAL_PARAM_EMP_GRWTH' => 'Ukupni rast zaposlenih u %',
  'LBL_DNB_BAL_PARAM_JOB_FN' => 'Poslovna funkcija',
  'LBL_DNB_BAL_PARAM_KEYWORD' => 'Ključna reč',
  'LBL_DNB_BAL_PARAM_LIMIT_ERR' => 'Maksimalni kriterijum dosegnut. Molim izbrisati prethodno unete parametre',
  'LBL_DNB_BAL_PARAM_MKT_CAP' => 'Tržišna kapitalizacija',
  'LBL_DNB_BAL_PARAM_MRKT_CAP' => 'Tržišna kapitalizacija',
  'LBL_DNB_BAL_PARAM_NUM_EMP' => 'Broj zaposlenih',
  'LBL_DNB_BAL_PARAM_PEOPLE' => 'Ljudi',
  'LBL_DNB_BAL_PARAM_STATES' => 'Države',
  'LBL_DNB_BAL_POSTAL_CODE' => 'Zip/poštanski kod',
  'LBL_DNB_BAL_PRESCREEN_SCORE' => 'D&B rezultat',
  'LBL_DNB_BAL_PRIMARY_ONLY' => 'Samo primarni',
  'LBL_DNB_BAL_PRIMARY_SECONDARY' => 'Primarni i Sekundarni',
  'LBL_DNB_BAL_RADIUS_SRCH' => 'Pretraga opsega',
  'LBL_DNB_BAL_RSLT' => 'D&B Napraviti prikaz liste',
  'LBL_DNB_BAL_SIC' => 'SIC kod',
  'LBL_DNB_BAL_SIC_NAICS_EXAMPLE' => 'Primer: SIC kodovi : 5734  -> Prodavnice kompjutera i softvera , 3711  -> Proizvodnja automobila',
  'LBL_DNB_BAL_SINGLE_SITE' => 'Jedan sajt',
  'LBL_DNB_BAL_TITLE' => 'Naslov',
  'LBL_DNB_BAL_TRADING_DATE' => 'Datum trgovine',
  'LBL_DNB_BAL_UK_REG_NO' => 'UK registarski broj',
  'LBL_DNB_BAL_UK_VAT_NO' => 'UK VAT broj',
  'LBL_DNB_BAL_YEAR_OF_FOUNDING' => 'Godina osnivanja',
  'LBL_DNB_BAL_ZIP' => 'ZIP',
  'LBL_DNB_BASIC_FIN_INF' => 'Osnovne finansijske informacije',
  'LBL_DNB_BI_API_ERR' => 'Greška prilikom uvoza zapisa.',
  'LBL_DNB_BI_DUP_MSG' => 'Kompanije su duplirane i nisu dodate',
  'LBL_DNB_BI_ERR' => 'Nijedan zapis nije uvezen.',
  'LBL_DNB_BI_LOADING' => 'Uvoz D&B kompanija',
  'LBL_DNB_BI_NEW_ACCT' => 'nove kompanije.',
  'LBL_DNB_BI_NO_SLCT' => 'Nijedan zapis nije odabran.',
  'LBL_DNB_BI_REC_LIMIT' => 'Maksimum možete odabrati 20 zapisa koje ćete uvesti',
  'LBL_DNB_BI_YOU_ADD' => 'Dodali ste',
  'LBL_DNB_BONE_ORG_IND' => 'Boneyard Indikator Organizacije',
  'LBL_DNB_BONE_ORG_IND_DESC' => 'Kada je Uključeno(vrednost postavljena na 1) to ukazauje da se podaci više ne sakupljaju za ovu kompaniju i bili su pokriveni Hoover&#39;s Editorial osobljem pre prikupljanja ili izlaska iz posla',
  'LBL_DNB_CCS' => 'Pre Screen Rezultat',
  'LBL_DNB_CCS_DESC' => 'Snimanje najskorijeg rezultata rizika koji je dodeljen organizaciji na zadati datum/vreme korišćenjem modela proračuna koji pomažu u predviđanju verovatnoće da će ta organizacija platiti račune na ozbiljno delikventan način(90+ dana posle datuma dospeća) u narednih 12meseci.',
  'LBL_DNB_CI_CITY' => 'Grad',
  'LBL_DNB_CI_CTRY' => 'Država',
  'LBL_DNB_CI_POSTAL_CD' => 'Poštanski broj',
  'LBL_DNB_CI_SRCH' => 'D&B: Pretraga kompanija',
  'LBL_DNB_CI_SRCH_HINT' => 'Unesite ime kompanije za D&B pretragu',
  'LBL_DNB_CI_STATE' => 'Opština',
  'LBL_DNB_CI_STREET' => 'Ulica',
  'LBL_DNB_CLEAR' => 'Obriši',
  'LBL_DNB_CM_LOADING' => 'Pozivanje D&B čišćenja uparenog ...',
  'LBL_DNB_CM_MATCH' => 'Uparenost',
  'LBL_DNB_CNTCT_LOADING' => 'Učitavanje kontakata iz D&B',
  'LBL_DNB_CNTRL_OWN_DATE' => 'Kontrolni Vlasnički Datum',
  'LBL_DNB_CNTRL_OWN_DATE_DESC' => 'Datum kada su trenutni vlasnici preuzeli ovaj posao.',
  'LBL_DNB_CNTRL_TYP_TEXT' => 'Tip Vlasničke Kontrole',
  'LBL_DNB_CNTRL_TYP_TEXT_DESC' => 'Tekst koji opisuje tip vlasničke kontrole, npr. javno vlasništvo, privatno vlasništvo, državno vlasništvo',
  'LBL_DNB_COMPANY_INFO_LOADING' => 'Učitavanje kompanijskih informacija iz D&B...',
  'LBL_DNB_COMPETITORS' => 'D&B: Konkurenti',
  'LBL_DNB_COMPETITORS_DESC' => 'Informacije konkurenata od D&B. Potrebna D&B prijava.',
  'LBL_DNB_COMPETITORS_LIST' => 'Povratak na D&B listu konkurenata',
  'LBL_DNB_COMPETITORS_LOADING' => 'Učitavanje konkurenata iz D&B ...',
  'LBL_DNB_COMPETITORS_LONG_DESC' => 'Pronađi konkurente tekućeg naloga kako bi poboljšali vaše izglede. Najbolji konkurent je određen preko D&B na osnovu analiziranja kompanije i industrije u kojoj deluje. Javne kompanije često identifikuju najbolje konkurente u njihovim javnim podnescima, koji se takođe uzimaju u razmatranje. Potrebna D&B prijava.',
  'LBL_DNB_COMPETITORS_TOP' => 'Glavni konkurent',
  'LBL_DNB_COMPINFO_LONG_DESC' => 'Najefikasniji način za dobijanje osnovnih marketinških informacija o potencijalnom kandidatu kao što su ime, adresa, D&B® D-U-N-S® broj, fax, telefon i žanr trgovine. Uključujući poslovne podatke kao što su izvršna imena i titule, finansije, broj zaposlenih, uvozni ili izlazni kod, indikator filijale, i više. Potrebna D&B prijava.',
  'LBL_DNB_COMP_INFO' => 'D&B: Informacije o kompaniji',
  'LBL_DNB_COMP_INFO_LOAD' => 'Povlačenje D&B kompanijskih informacija',
  'LBL_DNB_COMP_SUMM' => 'Opis kompanije',
  'LBL_DNB_COMP_SUMM_DESC' => 'Tekst koji beleži kratku izjavu ili račun ove organizacije',
  'LBL_DNB_CONFIDENCE' => 'Pouzdanost',
  'LBL_DNB_CONFIG' => 'Kontaktirajte vašeg administratora za podešavanje D&B konektora',
  'LBL_DNB_CONNECTOR_ERR' => 'D&B konektor nije podešen. Kontaktirati administratora',
  'LBL_DNB_CONTACT' => 'D&B: Kontakt informacije',
  'LBL_DNB_CONTACT_BIO' => 'Biografija',
  'LBL_DNB_CONTACT_COMP_HIST' => 'Istorija naknada',
  'LBL_DNB_CONTACT_DESC' => 'Prikazivanje D&B kontakata. Zahteva D&B pretplatu.',
  'LBL_DNB_CONTACT_EMAIL' => 'Email',
  'LBL_DNB_CONTACT_EMP_PROF' => 'Profil zaposlenog',
  'LBL_DNB_CONTACT_FNAME' => 'Ime',
  'LBL_DNB_CONTACT_FROM' => 'Od',
  'LBL_DNB_CONTACT_JOBTITLE' => 'Pozicija',
  'LBL_DNB_CONTACT_JOB_HIST' => 'Istorija zaposlenja',
  'LBL_DNB_CONTACT_LIST' => 'Povratak na D&B kontakt listu',
  'LBL_DNB_CONTACT_LNAME' => 'Prezime',
  'LBL_DNB_CONTACT_LOADING' => 'Učitavanje kontakt informacija za',
  'LBL_DNB_CONTACT_LONG_DESC' => 'D&B kontakti vam daju pristup preko 100 milona kontakata. Pretraga po imenu, prezimenu ili poziciji',
  'LBL_DNB_CONTACT_NAME' => 'Ime',
  'LBL_DNB_CONTACT_PHONE' => 'Telefon',
  'LBL_DNB_CONTACT_RESP' => 'Rukovodstvena odgovornost',
  'LBL_DNB_CONTACT_SHOW_MORE' => 'Prikaži još D&B kontakata',
  'LBL_DNB_CONTACT_TO' => 'Do',
  'LBL_DNB_CONTROL_OWNERSHIP_DATE' => 'Kontrolni Vlasnički Datum',
  'LBL_DNB_CONTROL_OWNERSHIP_TYPE_TEXT' => 'Kontrolni Vlasnički Tip Teksta',
  'LBL_DNB_CON_EMP_CNT' => 'Zbirni broj zaposlenih',
  'LBL_DNB_CON_EMP_CNT_DESC' => 'Snima trenutne podatke zaposlenih koji uključuju zaposlene koji su angažovani u operacijama pravnog lica(uključujući zaposlene u ograncima) kao i zaposlene koji su angažovani u operacijama svakog direktnog potomka u familijarnom stablu(na osnovu kontrolnog intresa) npr., Produžnice',
  'LBL_DNB_COUNTRY' => 'Država',
  'LBL_DNB_COUNTRY_GROUP_NAME' => 'Ime Grupe Zemalja',
  'LBL_DNB_COUNTRY_OFFICIAL_NAME' => 'Zvanično Ime Zemlje',
  'LBL_DNB_CURRENCY_ISO_ALPHA_CODE' => 'Valuta ISO Alpha Koda',
  'LBL_DNB_CURRENT_PRINCIPAL_FULL_NAME' => 'Puno Ime Trenutnog Direktora',
  'LBL_DNB_CURRENT_PRINCIPAL_IDENTIFICATION_NUMBER' => 'Identifikacioni Broj Trenutnog Direktora',
  'LBL_DNB_CURRENT_PRINCIPAL_JOB_TITLE' => 'Poslovna Pozicija Trenutnog Direktora',
  'LBL_DNB_DATA_ERR' => 'D&B podaci nisu dostupni',
  'LBL_DNB_DATA_OVERRIDE_MULTIPLE_FIELDS' => 'Da li želite da izmenite {{fields}} i druga polja ?',
  'LBL_DNB_DATA_OVERRIDE_SINGLE_FIELD' => 'Da li ste sigurni da želite da prepišete {{fieldName}} sa {{value}} ?',
  'LBL_DNB_DATA_OVERRIDE_TWO_FIELDS' => 'Da li želite da izmenite {{fields}} ?',
  'LBL_DNB_DISAB_IND' => 'Ukazuje da je invalid',
  'LBL_DNB_DISAB_IND_DESC' => 'Vrednost TAČNO ukazuje da je ova organizacija certifikovana kao preduzeće koje je više od 50% u vlasništvu, i čiji menadžment i dnevne poslovne operacije, jedne osobe ili više osoba koje imaju stanje koje sprečava izvršavanje svih psihofizičkih aktivnosti.',
  'LBL_DNB_DISAB_VET_ENT' => 'Indikator preduzeća onesposobljenog veterana',
  'LBL_DNB_DISAB_VET_ENT_DESC' => 'Vrednost TAČNO ukazuje da je preduzeće prepoznato od strane države Kalifornija, znači veteran U.S. vojske, mornarice ili vazdhoplovnih snaga, sa službenom invalidnosti od najmanje 10% ili više i koji je žitelj Kalifornije, gde je bar 51% vlasništva vetrana/a sa invaliditetom i sprovodi dnevne poslovne menadžerske i kontrolne aktivnosti. Kuća kancelarija ne može biti ogrnaka ili produžnica strane korporacije, strane firme ili drugog stranog preduzeća.',
  'LBL_DNB_DISADV_ENT' => 'Indikator preduzeća u nepovoljnom položaju',
  'LBL_DNB_DISADV_ENT_DESC' => 'Vrednost TAČNO ukazuje da je preduzeće certifikovano od strane državnih ili lokalnih vladinih agencija, koje zadovoljavaju standarde koji garantuju podobnost, ali mogu uključivati žene, manjine, invalide i druge u nepovoljnom položaju kao rezultat ekonomskih nepovoljnosti uz oprez na edukaciji zaposlenosti, prebivalištu ili poslovnoj lokaciji ili socijalne nepovoljnosti i nedostatak poslovne obuke',
  'LBL_DNB_DISADV_VET_ENT' => 'Indikator veteranskog preduzeća u nepovoljnom položaju',
  'LBL_DNB_DISADV_VET_ENT_DESC' => 'Vrednost TAŠNO prikazuje da je ovaj posao mali biznis u vlasništvu i kontrolisan od strane veterana, i da ne manje od 51%  je u vlasništvu, kontrolisano i vođeno od strane veterana.',
  'LBL_DNB_DNB_CODE_VALUE' => 'DNB Code Vrednost',
  'LBL_DNB_DUNS' => 'DUNS',
  'LBL_DNB_DUNSSELF_IND' => 'DUNS Indikator Ličnog Zahteva',
  'LBL_DNB_DUNSSELF_IND_DESC' => 'Vrednost Tačno označava da je D_U_N_S broj za ovog subjekta kreiran na zahtev subjekta',
  'LBL_DNB_DUPLICATE' => 'Napravi duplikat',
  'LBL_DNB_EIGHTA_CRT' => 'Osam A certifikovani Indikator',
  'LBL_DNB_EIGHTA_CRT_DESC' => 'Vrednost Tačno ukazuje na organizaciju certifikovanu od strane US Agencije za Mala Preduzeća kao korisnik 8(a) Razvojnog Poslovnog Programa, razvojni poslovni program je kreiran kao pomoć malim preduzećima u nepovojnom položaju kako bi se takmičili u Američkoj ekonomiji i u pristupu federalnog prodajnog tržišta',
  'LBL_DNB_EMPLOYEE_QUANTITY_GROWTH' => 'Ras borja zaposlenih',
  'LBL_DNB_EMPTY_PARAM' => 'Prazan parametar prosleđen D&B Duplicate Check API-ju',
  'LBL_DNB_EMP_DET' => 'Detalji Senior Zaposlenih',
  'LBL_DNB_EMP_DET_DESC' => 'Detalji Upravitelja(npr Predsednik, Podpredsednik, direktori) i menadžeri odgovorni za poslovnu strategiju, donošenje odluka i vođenje dnevnih poslova subjekta. Ovo uključuje imena, adrese, i indetifikacione brojeve upravitelja. Dok će u nekim zemljama upravitelji biti individualna lica, u nekim zemljama je legalno da registrovan poslovni entitet bude upravitelj u drugom poslu. Ovo isključuje deoničare i slične vlasnike koji nisu zaduženi za menadžment organizacije ali uključuje vlasnike i partnere, dok su vlasnici, su takođe direktori koji vode posao.',
  'LBL_DNB_EMP_INF' => 'Informacije o zaposlenom',
  'LBL_DNB_EMP_INF_DESC' => 'Informacije Zaspolenih u Organizaciji kao što su broj zaposlenih i detalji glavnog menadžmenta',
  'LBL_DNB_ERROR_CURL_CONNECTION_FAIL' => 'Nije uspelo povezivanje sa host-om ili proksi serverom. Molimo vas proverite proksi podešavanja.',
  'LBL_DNB_ERROR_CURL_NETWORK_FAIL' => 'Preuizmanje mrežnih podataka nije uspelo.',
  'LBL_DNB_ERROR_CURL_RESOLVE_HOST' => 'Nije moguć pristup host-u. Navedenom hostu-u nije moguće pristupiti.',
  'LBL_DNB_ERROR_CURL_RESOLVE_PROXY' => 'Nije moguć pristup proksi serveru. Navedenom proksi serveru nije moguće pristupiti. Molimo vas proverite proksi podešavanja.',
  'LBL_DNB_ETHN' => 'Etnička pripadnost vlasnika',
  'LBL_DNB_ETHNICITY_TYPE_TEXT' => 'Etnički Tip Telsta',
  'LBL_DNB_ETHN_DESC' => 'Jedinstvena identifikacija etničke klasifikacije koja je primenjena na ovu organizaciju na osnovu rase, nacije, plemena, ili kulturološke grupe koja opisuje većinu vlasništva, npr. Asian, Hispanic, Afric American(Black)',
  'LBL_DNB_EXPORT_DETAILS_INDICATOR' => 'Indikator Izvoznih detalja',
  'LBL_DNB_EXP_IND' => 'Indikator izvoza',
  'LBL_DNB_EXP_IND_DESC' => 'Kada je uključeno (namešteno na 1) znači da kompanija izvozi dobra u druge zemlje.',
  'LBL_DNB_FACSIMILE_NUMBER' => 'Faks broj',
  'LBL_DNB_FAMILY_TREE' => 'D&B: Porodično stablo',
  'LBL_DNB_FAMILY_TREE_BACK' => 'Povratak na D&B porodično stablo',
  'LBL_DNB_FAMILY_TREE_DESC' => 'D&B porodično stablo. Zahteva D&B pretplatu.',
  'LBL_DNB_FAMILY_TREE_LOADING' => 'Učitavanje D&B porodičnog stabla',
  'LBL_DNB_FAMILY_TREE_MEMBER_ROLE' => 'Tekst Uloge Člana Familijarnog Stabla',
  'LBL_DNB_FAMILY_TREE_MEMBER_ROLE_TEXT' => 'Tekst Uloge Člana Familijarnog Stabla',
  'LBL_DNB_FAX' => 'Faks',
  'LBL_DNB_FAX_DESC' => 'Fax organizacije',
  'LBL_DNB_FEM_ENT' => 'Indikator ženskog preduzeća',
  'LBL_DNB_FEM_ENT_DESC' => 'Vrednost TAČNO prikazuje da je posao sertifikovan od strane federalne, državne ili lokalne vladine agencije da je ispuni sve državne standarde i zahteve.',
  'LBL_DNB_FEM_IND' => 'Ukazuje da je vlasnik ženska osoba',
  'LBL_DNB_FEM_IND_DESC' => 'Vrednost TAČNO ukazuje da je ova organizacija certifikovana kao preduzeće u vlasništvu večem od 50<br />5, i čiji menadžment i dnevne poslovne aktivnosti su kontrolisane od strane, jedne ili više osoba ženskog pola',
  'LBL_DNB_FILLING_ORGANISATION_NAME' => 'Popunjevanje Imena Organizacije',
  'LBL_DNB_FINANCIAL' => 'D&B: Finansijske informacije',
  'LBL_DNB_FINANCIALS' => 'Finansije',
  'LBL_DNB_FINANCIAL_DESC' => 'D&B finansijske informacije. Zahteva D&B pretpaltu.',
  'LBL_DNB_FINANCIAL_DESCRIPTION' => 'Finasijski opis',
  'LBL_DNB_FINANCIAL_LOADING' => 'Učitavanje finansijskih informacija iz D&B',
  'LBL_DNB_FINANCIAL_LONG_DESC' => 'Procenite finansijsko stanje kompanije kros obim prodaje, neto vrednost, aktivu i pasivu. Zahteva D&B pretplatu.',
  'LBL_DNB_FINANCIAL_PERIOD' => 'Finansijski period',
  'LBL_DNB_FINANCIAL_RATIO' => 'Finansijski Odnos',
  'LBL_DNB_FIN_COMP_TYPE' => 'Tip kompanije',
  'LBL_DNB_FIN_STCK_EXCH' => 'Berza akcija',
  'LBL_DNB_FIN_STCK_SYM' => 'Zaliha Berzanskih Simbola',
  'LBL_DNB_FIN_STMT' => 'Godišnja izjava o prihodima',
  'LBL_DNB_FOUNDATION_YEAR' => 'Datum osnivanja',
  'LBL_DNB_FRAN_TYP_TEXT' => 'Operativni Tip Franšize',
  'LBL_DNB_FRAN_TYP_TEXT_DESC' => 'Tekst koji određuje da li su prava franšize upravljana od strana kompanije ili direktno od strane korisnika franšize',
  'LBL_DNB_FROM' => 'od',
  'LBL_DNB_GEOGRAPHICAL_NAME' => 'Tekst Geografske Preciznosti',
  'LBL_DNB_HIGH_CONF' => 'Visoka pouzdanost',
  'LBL_DNB_HISTORY_RATING_TEXT' => 'Istorija Ocenjivanja',
  'LBL_DNB_HIST_RAT' => 'Istorija Ocenjivanja',
  'LBL_DNB_HIST_RAT_DESC' => 'Tekst koji određuje da li D&B ima bilo kakvu informaciju koja može nepovoljno uticati na ovu organizaciju, npe., čisto, nekompletno, menadžment, posao.',
  'LBL_DNB_HUB_CRT' => 'Indikator certifikovanog čvorišta',
  'LBL_DNB_HUB_CRT_DESC' => 'Vrednost TAČNO ukazuje da je organizacija certifikovana od strane US administracije za mala preduzeća kao korisnik HUB ZONE programa. Malo preduzeće mora zadovoljiti sledeće kriterijume za kvaliikovanje za HUB Zone program: Mora biti smeštena u &#39;istorijski neprimerenoj poslovnoj zoni&#39;. Mora biti u vlasništvu i kontrolisana jednog ili više U.S građana. Više od 35% zaposlenih mora biti unutar HUBZone. HUBZone(Isortijski neprimerena poslovna zona) je oblast koja se nalazi unutar jednog ili više od sledečih: -a) Kvalifikovanom cenzusnom putu(Kako je definisano u sekciji 42(d)(5)(C)(i)(l) Internal Revenue Koda iz 1986). -b) Kvalifikovani ne-gradski okrug (kako je definisano u sekciji 143(k)(2)(B) Internal Revenue Koda iz 1986) sa prosečnim kućnim prihodima ispod 80% od Državnog proseka ili sa nezaposlenošću ne manjom od 140% od državnog proseka, na osnovu U.S Departmenta za rad. c) Zemlje u okviru granica federalnih rezervata Indijanaca',
  'LBL_DNB_IMPORT' => 'Uvoz',
  'LBL_DNB_IMPORT_DETAILS_' => 'Detalji uvoza',
  'LBL_DNB_IMPORT_DETAILS_INDICATOR' => 'Indikator Uvoznih Detalja',
  'LBL_DNB_IMP_IND' => 'Indikator uvoza',
  'LBL_DNB_IMP_IND_DESC' => 'Kada je uključeno (namešteno na 1) znači da kompanija uvozi dobra iz drugih zemalja.',
  'LBL_DNB_IN' => 'u',
  'LBL_DNB_INCORPORATION_YEAR' => 'Godina Osnivanja',
  'LBL_DNB_INDUSTRY_CODE' => 'Industrijski Kod',
  'LBL_DNB_INDUSTRY_CODE_DESCRIPTION' => 'Opis Industrijskog Koda',
  'LBL_DNB_INDUSTRY_CODE_DISPLAY_SEQUENCE' => 'Sekvenca za prikaz Industrijskog Koda',
  'LBL_DNB_INDUSTRY_INFO' => 'D&B: Informacije o industriji',
  'LBL_DNB_INDUSTRY_INFO_DESC' => 'D&B informacije o industriji. Zahteva D&B pretplatu.',
  'LBL_DNB_INDUSTRY_INFO_LONG_DESC' => 'Ostanite ažurni sa ključnim trendovima i prilikama između 900 industrijskih segmenata. Svaki industrijski profil sadrži analize, statistike i predviđanja da vam pomogne da nagažujete perspektive, obučite klijente i produbite odnose sa mušterijama.',
  'LBL_DNB_IND_CD' => 'Industrijski kodovi',
  'LBL_DNB_IND_CD_DESC' => 'Alfanumerička vrednost identifikuje poslovnu aktivnost na osnovu sheme određenu pomoću tipa teksta. Na primer, 1611 predstavlja autoput i uličnu konstrukciju industrije u U.S SIC(Standardna industrijska klasifikacija) sistemu. Klasifikaciona beleška: Ovo su generalno eksterni kodovi kreirani od strane eksternog ovlašćenog tela, kao U.S Office of Management and Budget (OMB), ali D&B može kreirati dodatke za još preciznije određivanje aktivnosti, kao u slučaju SIC 2+2(poslednje 4 cifre od 8-cifrenog SIC)',
  'LBL_DNB_IND_CD_HED' => 'Industrijske informacije',
  'LBL_DNB_IND_CD_HED_DESC' => 'Beleži poslovnu aktivnost u kojoj je organizacija aktivno angažovana koristeći standardne sheme kodiranja kao što su Evropski NACE i U.S Standard Industrz Classifications (SIC). Primeri poslovnih aktivnosti su: komercijalno štampanje, pravne usluge, prodavnica lekova',
  'LBL_DNB_IND_EMP_CNT' => 'Broj zaposlenih',
  'LBL_DNB_IND_EMP_CNT_DESC' => 'Snima trenutne podatke zaposlenih svakom individualno. Ako je organizacija klasifikovana od strane D&N kao poslovna',
  'LBL_DNB_IND_INF_LOAD' => 'Učitavanje D&B informacija o industriji',
  'LBL_DNB_INF_INF_OVERVIEW' => 'Pregled',
  'LBL_DNB_INQ_CNT' => 'Ukupan broj upita',
  'LBL_DNB_INQ_CNT_DESC' => 'Broj registrovanih jedinstvenih pretplatničkih upita za subjekta u poslednjih 12 meseci',
  'LBL_DNB_INTERNATIONAL_DIALLING_CODE' => 'Međunarodni pozivni broj',
  'LBL_DNB_INT_DIALLING_CODE' => 'Međunarodni pozivni broj',
  'LBL_DNB_INVALID_MODULE_NAME' => 'Nevažeće ime modula prodleđeno  D&B Duplicate Check API-ju',
  'LBL_DNB_IPO_DATE' => 'IPO datum',
  'LBL_DNB_JOB_TITLE_TEXT' => 'Pozicija',
  'LBL_DNB_KEYWORD_SEARCH_HINT' => 'Kliknite ovde za pretragu kompanija samo po imenu kompanije',
  'LBL_DNB_LAST_UPDATE' => 'Poslednje ažuriranje',
  'LBL_DNB_LAST_UPDATE_DATE' => 'Datum poslednjeg ađuriranja',
  'LBL_DNB_LAST_UPD_DATE' => 'Datum poslednjeg ažuriranja',
  'LBL_DNB_LAST_UPD_DATE_DESC' => 'Datum poslednjeg ažuriranja zapisa na D&B sistemu.',
  'LBL_DNB_LAT' => 'Geografska širina',
  'LBL_DNB_LATITUDE_MEASUREMENT' => 'Širina Merenja',
  'LBL_DNB_LAT_DESC' => 'Koordinate gografske širine',
  'LBL_DNB_LINE_OF_BUSINESS' => 'Oblast poslovanja',
  'LBL_DNB_LINE_OF_BUSINESS_DESCRIPTION' => 'Opis oblasi poslovanja',
  'LBL_DNB_LITE_COMPANY_INFO' => 'D&B: Informacije Kompanije - Osnovno',
  'LBL_DNB_LITE_COMPANY_INFO_DESC' => 'Osnovne informacije od D&B. Potrebna D&B prijava.',
  'LBL_DNB_LITE_COMPANY_INFO_LOADING' => 'Učitavanje osnovnih podataka kompanije iz D&B..',
  'LBL_DNB_LOB' => 'Oblast poslovanja',
  'LBL_DNB_LOB_DESC' => 'Beleži tesktualni opis poslovnih operacija',
  'LBL_DNB_LOC' => 'Lokacija',
  'LBL_DNB_LOCATION' => 'Lokacija',
  'LBL_DNB_LOCATION_TYPE' => 'Tip lokacije',
  'LBL_DNB_LOCATION_TYPE_DESC' => 'Tekst koji opisuje Subjektovu ulogu kao člana vlasničke strukture familijarnog stabla, npr grana, divizija, roditelj, sedište, ogranak, kranji globalno, krajnji domaći.',
  'LBL_DNB_LOC_DESC' => 'Beleži detalje adrese od subjekta. Adresa je određivanje mesta gde možemo pronaći subjekta ili gde se može komunicirati sa njim',
  'LBL_DNB_LONG' => 'Geografska dužina',
  'LBL_DNB_LONGITUDE_MEASUREMENT' => 'Dužina Merenja',
  'LBL_DNB_LONG_DESC' => 'Kordinate geografske dužine',
  'LBL_DNB_LOW_CONF' => 'Niska pouzdanost',
  'LBL_DNB_LS_IND' => 'Ukazuje da postoji suficit radne snage',
  'LBL_DNB_LS_IND_DESC' => 'Vrednost Tačno ukazuje na organizaciju certifikovanu kao preduzeće u zoni sa viškom radne snage. Zona viška radne snage je geografski okrug identifikovan od strane Ministarstva za rad, kao zona sa koncentracijom nezaposlenih, nedovoljno zaposlenih ili kao zonu sa viškom radne snage',
  'LBL_DNB_MAIL_CITY' => 'Poštanski Grad / Mesto',
  'LBL_DNB_MAIL_CTRY_CD' => 'Poštanski Pozivni Broj',
  'LBL_DNB_MAIL_STATE_ABBR' => 'Poštanska Teritorija ( skraćeno )',
  'LBL_DNB_MAIL_STREET' => 'Poštanska Adresa',
  'LBL_DNB_MAIL_ZIP' => 'Poštanski Poštanski broj',
  'LBL_DNB_MARKETABILITY_INDICATOR' => 'Indikator marketinške mogućnosti',
  'LBL_DNB_MARKET_IND' => 'Indikator marketinške mogućnosti',
  'LBL_DNB_MARKET_IND_DESC' => 'Kada je tačno(vrednost podešena na 1) to znači da zapis zadovoljava D&B marketinška pravila',
  'LBL_DNB_MATCH_GRADE' => 'Ocena uparenosti',
  'LBL_DNB_MEASUREMENT_RELIABILITY_TEXT' => 'Tekst Pouzdanosti Merenja',
  'LBL_DNB_MEASUREMENT_UNIT_TEXT' => 'Tekst Jedenice Merenja',
  'LBL_DNB_MED_CONF' => 'Srednja pouzdanost',
  'LBL_DNB_METROPOLITAN_STAT_CODE' => 'Us Cenzus kod Metropolske Statističke zone',
  'LBL_DNB_MILLION' => 'M',
  'LBL_DNB_MINORITY_OWNER_INDICATOR' => 'Manjinsko Vlanisštvo',
  'LBL_DNB_MIN_COLL' => 'Indikator Koledža manje važnosti',
  'LBL_DNB_MIN_COLL_DESC' => 'Vrednost TAČNO ukazuje da je organizacija ili fakultet gde je profil većine studenata iz etničke manjine. Na primer, ako je maksimalni procenat studenata fakulteta iz crne etničke zajednice, to bi bio "Fakultet manjine" crne etničke zajednice.',
  'LBL_DNB_MIN_ENT' => 'Indikator Predužeća manje važnosti',
  'LBL_DNB_MIN_ENT_DESC' => 'Vrednost TAČNO prikazuje da je ovaj posao sertifikovan od strane federalne, državne ili lokalne vladine agencije kroz aplikaciju i/ili posetu lokaciji zbog ispunjavanja svih državnih standarda i zahteva.',
  'LBL_DNB_MIN_IND' => 'Indikator manjinskog vlasništva',
  'LBL_DNB_MIN_IND_DESC' => 'Vrednost TAČNO ukazuje da je ova organizacija certifikovana kao posao koji je u vlasništvu većem od 50%, i čiji menadžment i dnevne operacije kontrolišu, jedan ili više manjinskih članova grupe',
  'LBL_DNB_MORE_SRCH_RES' => 'Prikaži dodatne rezultate pretrage D&B',
  'LBL_DNB_NAICS' => 'NAICS',
  'LBL_DNB_NAME' => 'Ime',
  'LBL_DNB_NEWS' => 'Vesti',
  'LBL_DNB_NEWS_AND_MEDIA' => 'D&B: Vesti',
  'LBL_DNB_NEWS_AND_MEDIA_DESC' => 'Dohvatanje vesti sa D&B servisa. Potrebna D&B prijava.',
  'LBL_DNB_NEWS_AND_MEDIA_LOADING' => 'Učitavanje novosti i socijalnih mreža sa D&B',
  'LBL_DNB_NEWS_AND_MEDIA_LONG_DESC' => 'Imajte kompletan pregled vašeg klijenta sa D&B Vestima i društvenim aktivnostima! Koristite snagu DUNSright procesa da osigurate da izvlačite iz pravih izvora vesti  i socijalnih zbivanja. Potrebna D&B prijava.',
  'LBL_DNB_NEWS_AND_MEDIA_MORE' => 'Pročitaj više',
  'LBL_DNB_NEWS_FACEBOOK' => 'Facebook',
  'LBL_DNB_NEWS_TWITTER' => 'Twitter',
  'LBL_DNB_NEWS_WIKI' => 'Wikipedia',
  'LBL_DNB_NEWS_YOUTUBE' => 'YouTube',
  'LBL_DNB_NONMARK_REAS_TXT' => 'Tekst razloga marketinške nemogućnosti',
  'LBL_DNB_NONMARK_REAS_TXT_DESC' => 'Tekst određuje razlog zašto podaci subjekta nisu uzeti u obzir kao marketinški od strane D&B',
  'LBL_DNB_NON_MARKETABILITY_INDICATOR' => 'Tekst razloga marketinške nemogućnosti',
  'LBL_DNB_NOT_CONFIGURED' => 'D&B konektor nije podešen. Molimo vas podesite konektor.',
  'LBL_DNB_NO_DATA' => 'Nema dostupnih podataka',
  'LBL_DNB_NO_DUNS' => 'Nema identifikacije DUNS&#39;a',
  'LBL_DNB_NO_DUNS_FIELD' => 'Upozorenje: DUNS polje trenutno nije uključeno u zapis prikazivanja rasporeda. Kontaktirati administratora.',
  'LBL_DNB_NO_INDUSTRY' => 'Nema veze ka industrijskoj šifri',
  'LBL_DNB_NO_SIC_FIELD' => 'Upozorenje: SIC polje trenutno nije uključeno u zapis prikazivanja rasporeda. Kontaktirati administratora.',
  'LBL_DNB_OPERATING_STATUS_TEXT' => 'Tekst Operativnog Stausa',
  'LBL_DNB_OPERL_STA_TEXT' => 'Operativni Status',
  'LBL_DNB_OPERL_STA_TEXT_DESC' => 'Tekst koji objašnjava funkcionalno/poslovno stanje ove organizacije, npr. aktivno, van posla, zamrznut',
  'LBL_DNB_OPER_TEXT' => 'Operacioni tekst',
  'LBL_DNB_OPER_TEXT_DESC' => 'Tekst koji opisuje detaljne informacije povezane sa poslovanjem',
  'LBL_DNB_ORGANISATION_IDENTIFICATION_NUMBER' => 'Identifikacion broj organizacije',
  'LBL_DNB_ORGANISATION_IDENTIFICATION_START_DATE' => 'Identifikacioni Startni Datum Organizacion',
  'LBL_DNB_ORGANIZATION_DISPLAY_SEQUENCE' => 'Organizaciona sekvenca za prikaz',
  'LBL_DNB_ORGANIZATION_FILLING_NAME' => 'Popunjavanje Imena Organizacije',
  'LBL_DNB_ORGANIZATION_IDENTIFICATION_NUMBER' => 'Identifikacioni Broj Organizacije',
  'LBL_DNB_ORGANIZATION_NAME' => 'Ime organizacije',
  'LBL_DNB_ORGANIZATION_START_DATE' => 'Startni Datum Organizacije',
  'LBL_DNB_ORGS_STRT_YEAR' => 'Startna Godina Organizacije',
  'LBL_DNB_ORGS_STRT_YEAR_DESC' => 'Godina kada su operacije preuzete od strane organizacije',
  'LBL_DNB_ORG_DET' => 'Detalji organizacije',
  'LBL_DNB_ORG_DET_DESC' => 'Beleži osnovne informacije o organizaciji koje mogu varirati tokom vremena',
  'LBL_DNB_ORG_ID' => 'Identifikacioni Broj Organizacije',
  'LBL_DNB_ORG_ID_DESC' => 'Broj dodeljen spoljnjem telu ili dodeljen od strane D&B jedinstveno definiše identitet organizacije ili pomaže prilikom identifikovanja organizacije. Pronađena organizacija može biti registrovani organ, Vladin odsek, organizacija, privredna komora, VAT brojevi itd.',
  'LBL_DNB_ORG_NAME' => 'Ime organizacije',
  'LBL_DNB_ORG_NAME_DESC' => 'Beleži različita imena organizacije po kojima je poznata',
  'LBL_DNB_OTHER' => 'Ostalo',
  'LBL_DNB_OTHER_FIELDS' => 'druga polja',
  'LBL_DNB_OUTOFDATE' => 'Zastarelo',
  'LBL_DNB_OUTOFDATE_MSG' => 'Kompanijski podaci su zastareli',
  'LBL_DNB_OVERRIDE_SUCCESS' => 'D&B podaci uspešno uvezeni',
  'LBL_DNB_OVERVIEW' => 'Pregled',
  'LBL_DNB_OWNERSHIP_TYPE' => 'Tip vlasništva',
  'LBL_DNB_PAGESZ' => 'Veličina stranice',
  'LBL_DNB_PHONE' => 'Telefon',
  'LBL_DNB_PHONE_DESC' => 'Telefon organizacije',
  'LBL_DNB_PREMISES_AREA_MEASUREMENT' => 'Prostor Površine Merenja',
  'LBL_DNB_PREMIUM' => 'Premium',
  'LBL_DNB_PREMIUM_COMPANY_INFO' => 'D&B: Kompanijske informacije - premium',
  'LBL_DNB_PREMIUM_COMPANY_INFO_DESC' => 'D&B premium kompanijeks informacije. Zahteva D&B pretplatu.',
  'LBL_DNB_PREMIUM_COMPANY_INFO_LOADING' => 'Učitavanje premium kompanijskih informacija iz D&B ...',
  'LBL_DNB_PRIMARY' => 'Primarno',
  'LBL_DNB_PRIMARY_ADDRESS_POSTAL_CODE' => 'Poštanski broj primarne adrese',
  'LBL_DNB_PRIMARY_TOWN' => 'Primarni Grad',
  'LBL_DNB_PRIMARY_TOWN_NAME' => 'Primarno Ime Grada',
  'LBL_DNB_PRIM_CEN_CD' => 'Kod Cenzusa',
  'LBL_DNB_PRIM_CEN_CD_DESC' => 'Geografski region sa relativno visokom gustinom populacije u jezgru i sa jakim ekonmskim vezama kroz  oblast',
  'LBL_DNB_PRIM_CITY' => 'Primarni Grad / Mesto',
  'LBL_DNB_PRIM_CITY_DESC' => 'Ime grada prepoznato od strane Poštanslih ustanov za dostavu pošte',
  'LBL_DNB_PRIM_COUNTY_NAME' => 'Država',
  'LBL_DNB_PRIM_COUNTY_NAME_DESC' => 'Zvanično ime Države, npr Michigan',
  'LBL_DNB_PRIM_CTRY_CD' => 'Primarni Pozivni Broj',
  'LBL_DNB_PRIM_CTRY_CD_DESC' => 'Dvo-slovna oznaka države, definisana u ISO 3166-1 šemi objavljenoj od strane Internacionalne Organizacije za Standarde(ISO), identifikujući državu za ovu adresu.',
  'LBL_DNB_PRIM_CTRY_GRP' => 'Državna Grupa',
  'LBL_DNB_PRIM_CTRY_GRP_DESC' => 'Identifikator Državne Grupe, kao npr. Severna Amerika',
  'LBL_DNB_PRIM_NAME' => 'Ime',
  'LBL_DNB_PRIM_NAME_DESC' => 'Tekstualno beleženje imena ove organizacije',
  'LBL_DNB_PRIM_STATE' => 'Primarna Teritorija',
  'LBL_DNB_PRIM_STATE_ABBR' => 'Primarna Teritorija ( skraćeno )',
  'LBL_DNB_PRIM_STATE_ABBR_DESC' => 'Skraćeno ime lokalno upravne zone koja formira deo centralne nacionalne uprave',
  'LBL_DNB_PRIM_STATE_DESC' => 'Ime lokalno upravne zone koja formira deo centralne nacionalne uprave',
  'LBL_DNB_PRIM_STREET' => 'Primarna Adresa',
  'LBL_DNB_PRIM_STREET_DESC' => 'Tekst koji beleži komponente ulične adrese kako će izgledati na adresnoj traci',
  'LBL_DNB_PRIM_ZIP' => 'Primarni Poštanski Broj',
  'LBL_DNB_PRIM_ZIP_DESC' => 'Identifikator korišćen od strane lokalnih Ustanova pošte za identifikaciju određenog geografskog područja',
  'LBL_DNB_PRINCIPAL_IDENTIFICATION_NUMBER' => 'Identifikacioni Broj Direktora',
  'LBL_DNB_RATING' => 'Rang:',
  'LBL_DNB_REC_MARK_ANALYSIS' => 'Skorašnje tržišne analize',
  'LBL_DNB_REGISTERED_ADDRESS_INDICATOR' => 'Indikator Registrovane Adrese',
  'LBL_DNB_REGISTRATION_ISSUER_NAME' => 'Ime Problema pri Registraciji',
  'LBL_DNB_REGISTRATION_LOCATION_POSTAL_CODE' => 'Registracija Lokacija Poštanskog Broja',
  'LBL_DNB_REG_DET_HED' => 'Registrovani detalji',
  'LBL_DNB_REG_DET_HED_DESC' => 'Memoriše ustavni status subjekta koji je definisan zakonima zemlje. Npr.: DOO, partnerstvo, državna zadruga, zalihe ili deo zaposlenih u privredi prema zakonu ili pravilima unutar organizacije. Vlasnici zaliha ili akcija su vlasnici poslovanja.',
  'LBL_DNB_RELIABILITY_TEXT' => 'Tekst Pouzdanosti',
  'LBL_DNB_RESIDENTIAL_ADDRESS_INDICATOR' => 'Indikator Adrese Prebivališta',
  'LBL_DNB_RFR' => 'Osveži',
  'LBL_DNB_RFR_HINT' => 'Osveži sad',
  'LBL_DNB_RFR_LOADING' => 'D&B provera osvežavanja u toku',
  'LBL_DNB_RISK_CLASS' => 'Klasa rizika',
  'LBL_DNB_SALES' => 'Prodaja',
  'LBL_DNB_SALES_REVENUE' => 'Prihod od prodaje',
  'LBL_DNB_SALES_REVENUE_AMOUNT' => 'Prihodi od prodaje',
  'LBL_DNB_SEARCH_LOADING' => 'Pretraga D&B',
  'LBL_DNB_SELF_REQUEST_INDICATOR' => 'Indikator ličnog zahteva',
  'LBL_DNB_SENIOR_PRINCIPAL' => 'Stariji Član',
  'LBL_DNB_SHOW_LESS' => 'Prikaži manje',
  'LBL_DNB_SHOW_MORE' => 'Prikaži više',
  'LBL_DNB_SIC' => 'SIC kod:',
  'LBL_DNB_SLCT_CTRY' => 'Izaberite državu',
  'LBL_DNB_SLCT_STATE' => 'Izaberite saveznu državu',
  'LBL_DNB_SMALL_BUSINESS_INDICATOR' => 'Mali biznis',
  'LBL_DNB_SMBDISADV_IND' => 'Mali Nepovoljni Posao',
  'LBL_DNB_SMBDISADV_IND_DESC' => 'Vrednost TAČNO ukazuje da je ova organizacija certifikovana kao preduzeće u vlasništvu večem od 50<br />5, i čiji menadžment i dnevne poslovne aktivnosti su kontrolisane od strane osoba sa nepovoljnim položajem socijalno i ekonomski',
  'LBL_DNB_SMB_CERT' => 'Indikator sertifikovanog malog preduzeća',
  'LBL_DNB_SMB_CERT_DESC' => 'Vrednost TAČNO ukazuje da je preduzeće malo, certifikovano od strane državne ili lokalne vladine agencije ili organizacije koja zadovoljava sve vladine standarde koji određuju podobnost.',
  'LBL_DNB_SMB_IND' => 'Indikator malog preduzeća',
  'LBL_DNB_SMB_IND_DESC' => 'Vrednost TAČNO ukazuje da je ova organizacija certifikovana kao malo preduzeće. Malo preduzeće je entitet koji je obično u privatnom vlasništvu i koji posluje, sa malim brojem zaposlenih i relativno niskim obimom prodaje. Mala preduzeća su normalno u privatnom vlasništvu korporacija, partnerstava ili preduzetnika. Pravna definicija malih" varira od zemlje do zemlje i od industrije',
  'LBL_DNB_SOCIAL' => 'Socijalne mreže',
  'LBL_DNB_SOCIO_IND' => 'Društveno-ekonomska identifikacija',
  'LBL_DNB_SOCIO_INDICATOR' => 'Socio Ekonomski Indikator',
  'LBL_DNB_SOCIO_IND_DESC' => 'Beleži informacije o subjektovoj kateoriji Socialne, Ekonomske ili Statističke grupe',
  'LBL_DNB_SRCH' => 'Pretraga',
  'LBL_DNB_SRCH_LOAD' => 'Pretraži D&B',
  'LBL_DNB_SRCH_RES' => 'D&B: rezultati pretrage',
  'LBL_DNB_STAND_ALONE_ORGANIZATION_INDICATOR' => 'Indikator Stand Alone Organizacije',
  'LBL_DNB_STATE' => 'Država / Provincija / Region',
  'LBL_DNB_STD_COMPANY_INFO' => 'D&B: Informacije Kompanije - Standardno',
  'LBL_DNB_STD_COMPANY_INFO_DESC' => 'Standardne informacije od D&B. Potrebna D&B prijava.',
  'LBL_DNB_STD_COMPANY_INFO_LOADING' => 'Učitavanje standardnih podataka kompanije iz D&B..',
  'LBL_DNB_STOCK_EXCHANGE_COUNTRY_ISO_ALPHA_CODE' => 'Berza ISO Alpha Kod Zemalja',
  'LBL_DNB_STOCK_EXCHANGE_ISO_CODE' => 'Berzanski ISO Kod',
  'LBL_DNB_STOCK_EXCHANGE_NAME' => 'Berzansko Ime',
  'LBL_DNB_STOCK_EXCHANGE_TICKER_NAME' => 'Berza Simbola Imena',
  'LBL_DNB_STREET_ADDRESSLINE' => 'Adresna stavka ulice',
  'LBL_DNB_STREET_ADDRESS_LINE_TEXT' => 'Tekstulna stvaka ulične adrese',
  'LBL_DNB_SUBAGENT_INDICATOR' => 'Indikator Podagenta',
  'LBL_DNB_SUBJ_HEADER' => 'Zaglavlje subjekta',
  'LBL_DNB_SUBJ_HEADER_DESC' => 'Zapisi visokog nivoa informacija o subjektu kao što su primarni jezik subjekta i primarna valuta u kojoj subjekt posluje. Kada je subjekt ogranizacija, ovo takođe može da uključi detalje kao što je DUNS broj',
  'LBL_DNB_SUMMARY' => 'Sadržaj',
  'LBL_DNB_SVC_DISAB_VET' => 'Ukazuje da je invalid rata',
  'LBL_DNB_SVC_DISAB_VET_DESC' => 'Vrednost TAČNO ukazuje da je preduzeće najmanje 51% u vlasništvu jednog ili više veterana sa invaliditetom koji je povezan sa ulugom. Termin "povezan sa uslugom" znači, uz poštovanje invalidnosti ili smrti, takav invaliditet je nastao ili pogoršan tokom aktivne vojne službe.',
  'LBL_DNB_SVC_ERR' => 'Greška D&B servisa',
  'LBL_DNB_TELECOMM' => 'Telekomunikacije',
  'LBL_DNB_TELECOMMUNICATION_NUMBER' => 'Telekomunikacioni broj',
  'LBL_DNB_TELECOMM_DESC' => 'Beleži informacije o različitim režimima Telekomunikacionih adresa koje su korišćene od strane subjekta u svrhu eksternog kontaktiranja. Režimi komunikacije uključuju telefon, fax, e-mail, web adresu.',
  'LBL_DNB_TERRITORY_ABBREVATIVE_NAME' => 'Skraćeno ime teritorije',
  'LBL_DNB_TERRITORY_ABBREVIATED_NAME' => 'Skraćeno ime teritorije',
  'LBL_DNB_TERRITORY_OFFICIAL_NAME' => 'Puno ime teritorije',
  'LBL_DNB_TF_DUNS' => 'Prenet DUNS Broj',
  'LBL_DNB_TOTAL_EMPLOYEE_QUANTITY' => 'Ukupan broj zaposlenih',
  'LBL_DNB_TOTAL_ENQUIERY_COUNT' => 'Ukupan broj upita',
  'LBL_DNB_TOTAL_INQUIRY_COUNT' => 'Ukupan broj upita',
  'LBL_DNB_TPA' => 'Procena neutralne strane',
  'LBL_DNB_TPA_DESC' => 'Ocene/mišljenja dodeljenje ovom Subjektu od strane druge nego D&B Svetske mreže(WWN)',
  'LBL_DNB_TRADE_STYLE_NAME' => 'Stil Poslovnog Imena',
  'LBL_DNB_TRANSFERRED_FROM_DUNS_NUMBER' => 'Prenet od DUNS broja',
  'LBL_DNB_TRD_NAME' => 'Poslovno ime',
  'LBL_DNB_TRD_NAME_DESC' => 'Beleženje imena pod kojim organizacija posluje u komercijalne svrhe',
  'LBL_DNB_TRNS_DUNS' => 'Prenešeni DUNS broj',
  'LBL_DNB_TRNS_DUNS_DESC' => 'Ovo je D_U_N_S broj subjekta koji je obrisan iz baze podataka domaćina',
  'LBL_DNB_UNDELIVERABLE_INDICATOR' => 'Indikator Neisporučivosti',
  'LBL_DNB_UNKNOWN_ERROR' => 'Nepoznata greška. Proverite log za više detalja.',
  'LBL_DNB_UNREACHABLE_INDICATOR' => 'Indikator Nedostuponosti',
  'LBL_DNB_UPLOAD' => 'Uvezi',
  'LBL_DNB_UPTODATE' => 'Ažurno',
  'LBL_DNB_UPTODATE_MSG' => 'Kompanijski podaci su ažurni',
  'LBL_DNB_URL' => 'URL',
  'LBL_DNB_USPAT_SCR' => 'US Patriot Akt Usaglašenosti Rezultat Rizika',
  'LBL_DNB_USPAT_SCR_DESC' => 'Indeks usklađenosti rizika nastoji da dostavi organizacijama subjekt ka USA Patriot Aktu sa dodatnim alatom u izvršenju usklađenosti rizika zasnovanim na procenama poslovnih partnera. Indeks je numerička vrednost koja predstavlja agregaciju od težinskog indikatora rizika, dodeljenog preko algoritma zasnovanog na vlasničkim pravima.',
  'LBL_DNB_VET_ENT' => 'Indikator veteranskog preduzeća',
  'LBL_DNB_VET_ENT_DESC' => 'Vrednost Tačno ukazuje na organizaciju koja potpada pod SBA Smernice za Mala Preduzeća Akt (PL 85-536) kao dodatak stanju: Koncern Malih Prezueća u vlasništvu i kontroli veterana ne manjem od 51% a u slučaju javnog vlasništva preduzeća ne manje od 51% vlasništva deonica od strane jednog ili više veterana',
  'LBL_DNB_VET_IND' => 'Veteranski indikator',
  'LBL_DNB_VET_IND_DESC' => 'Vrednost Tačno ukazuje na organizaciju certifikovanu kao preduzeće koje je u vlasništvu većem od 50%, i čiji menadžment i dnevne poslovne aktivnosti, od strane jednog ili više veterana. Veteran je osoba koja je aktivno služila u vojsci, mornarici ili vazduhoplovnim snagama i koji su razduženi ili otpušteni u uslovima različitim od nečasnih',
  'LBL_DNB_VIET_VET' => 'Ukazuje da je veteran Vijetnamskog rata',
  'LBL_DNB_VIET_VET_DESC' => 'Vrednost TAČNO ukazuje da je preduzeće najmanje 51% u vlasništvu jednog ili više Vijetnamskih veterana koji su službovali između 1/1/59 i 5/7/75 i koji imaju kontrolu i upravljaju poslom. Kontrola u ovom kontekstu znači potrebna moć za donošenje političkih odluka a upravljanje znači aktivno učestvovanje u dnevnim poslovnim aktivnostima.',
  'LBL_DNB_VIEW_ACCT' => 'Prikaži kompanije',
  'LBL_DNB_WEBPAGE' => 'Web stranica',
  'LBL_DNB_WEBPAGE_ADDRESS' => 'Adresa web stranice',
  'LBL_DNB_WEBPAGE_DESC' => 'Web strana organizacije',
  'LBL_DNB_WITH' => 'sa',
  'LBL_DOCUMENTS' => 'Dokumenta',
  'LBL_DONE_BUTTON_KEY' => 'X',
  'LBL_DONE_BUTTON_LABEL' => 'Završeno',
  'LBL_DONE_BUTTON_TITLE' => 'Završeno [Alt+X]',
  'LBL_DROPDOWN_LIST_ALL' => 'Svi',
  'LBL_DROP_HERE' => '[Spusti ovde]',
  'LBL_DST_NEEDS_FIXIN' => 'Aplikacija zahteva da se popravi Letnje računanje vremena. Molim idite na <a href="index.php?module=Administration&action=DstFix">Popravka</a> u Admin delu i izvršite popravku Letnjeg računanja vremena.',
  'LBL_DUPECHECK_FILTER_DEFAULT' => 'Svi duplikati',
  'LBL_DUPLICATES_FOUND' => '{{duplicateCount}} duplikata je pronađeno.',
  'LBL_DUPLICATE_BUTTON' => 'Napravi duplikat',
  'LBL_DUPLICATE_BUTTON_KEY' => 'U',
  'LBL_DUPLICATE_BUTTON_LABEL' => 'Napravi duplikat',
  'LBL_DUPLICATE_BUTTON_TITLE' => 'Napravi duplikat [Alt+U]',
  'LBL_DUP_MERGE' => 'Nađi duplikate',
  'LBL_DURATION_DAY' => 'dan',
  'LBL_DURATION_DAYS' => 'dana',
  'LBL_DURATION_HOUR' => 'sat',
  'LBL_DURATION_HOURS' => 'sati',
  'LBL_DURATION_MINUTE' => 'minut',
  'LBL_DURATION_MINUTES' => 'minuta',
  'LBL_DURATION_SECONDS' => 'sekundi',
  'LBL_EDIT' => 'Izmeni {{{this}}}',
  'LBL_EDITINLINE' => 'Izmeni',
  'LBL_EDITVIEW' => 'Pregled za izmenu',
  'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Izmeni kao novo',
  'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Izmeni kao novo',
  'LBL_EDIT_BUTTON' => 'Izmeni',
  'LBL_EDIT_BUTTON_KEY' => 'E',
  'LBL_EDIT_BUTTON_LABEL' => 'Izmeni',
  'LBL_EDIT_BUTTON_TITLE' => 'Izmeni [Alt+E]',
  'LBL_EDIT_INLINE' => 'Izmeni',
  'LBL_EDIT_RELATED' => 'Uredite povezan {{{this}}}',
  'LBL_EMAIL' => 'Email',
  'LBL_EMAILS' => 'Email-ovi',
  'LBL_EMAILS_SUBPANEL_TITLE' => 'Email-ovi',
  'LBL_EMAIL_ACCOUNTS_EDIT' => 'Izmeni',
  'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Podrazumevana podešavanja za Gmail™',
  'LBL_EMAIL_ACCOUNTS_NAME' => 'Ime',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Svojstva odlaznog Mail servera',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Obezbedite informacije o SMTP mail serveru koji se koristi za odlaznu email poštu u mail nalozima.',
  'LBL_EMAIL_ACCOUNTS_SENDTYPE' => 'Mail transfer agent',
  'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ' => 'Koristiti SMTP autentifikaciju?',
  'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Podrazumevano',
  'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP lozinka',
  'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD' => 'Lozinka za SMTP je obavezna',
  'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP Port',
  'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP Server',
  'LBL_EMAIL_ACCOUNTS_SMTPSSL' => 'Koristi SSL pri povezivanju',
  'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP korisničko ime',
  'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD' => 'Korisnčko ime za SMTP je obavezno',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Podešavanje Mail naloga kako bi ste videli dolazne email poruke sa vaših email naloga.',
  'LBL_EMAIL_ACCOUNTS_TITLE' => 'Upravljanje Mail nalogom',
  'LBL_EMAIL_ACTION_SET_INVALID' => 'Nevažeći',
  'LBL_EMAIL_ACTION_SET_OPT_IN' => 'Prijava',
  'LBL_EMAIL_ACTION_SET_OPT_OUT' => 'Odjava',
  'LBL_EMAIL_ACTION_SET_PRIMARY' => 'Primarno',
  'LBL_EMAIL_ACTION_SET_VALID' => 'Važeći',
  'LBL_EMAIL_ADD' => 'Dodajte Email',
  'LBL_EMAIL_ADDRESSES' => 'Email',
  'LBL_EMAIL_ADDRESSES_TITLE' => 'Email adrese',
  'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Završeno',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST' => 'Nova lista',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Za:',
  'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Za/Cc/Bcc',
  'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Obriši',
  'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Email adresa',
  'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT' => 'Trenutno je podržana samo izmena kontakata.',
  'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filter',
  'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME' => 'Ime/Naziv kompanije',
  'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME' => 'Prezime',
  'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS' => 'Moji kontakti',
  'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS' => 'Moje Mailing liste',
  'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Naziv',
  'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Nema pronađenih adresa',
  'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Snimi i dodaj u Adresar',
  'LBL_EMAIL_ADDRESS_BOOK_SEARCH' => 'Pretraga',
  'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Izaberite Email primaoce',
  'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Adresar',
  'LBL_EMAIL_ADDRESS_PRIMARY' => 'Email adresa',
  'LBL_EMAIL_ADDR_DISPLAY_MSG' => 'Prikaz email adresa {0} - {1} od {2}',
  'LBL_EMAIL_ARCHIVED' => 'Email arhiviran',
  'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'uvezi u Sugar',
  'LBL_EMAIL_ASSIGNED_TO_USER' => 'Dodeljeno korisniku',
  'LBL_EMAIL_ASSIGNMENT' => 'Zadatak',
  'LBL_EMAIL_ASSIGN_TO' => 'Dodeli',
  'LBL_EMAIL_ATTACHMENT' => 'Dodaj',
  'LBL_EMAIL_ATTACHMENTS' => 'Sa lokalnog sistema',
  'LBL_EMAIL_ATTACHMENTS2' => 'Iz Sugar dokumenata',
  'LBL_EMAIL_ATTACHMENTS3' => 'Šablon priloga',
  'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokument',
  'LBL_EMAIL_ATTACHMENTS_EMBEDED' => 'Ugrađen',
  'LBL_EMAIL_ATTACHMENTS_FILE' => 'Fajl',
  'LBL_EMAIL_ATTACHMENT_UPLOAD_FAILED' => 'Prilog nije uspešno otpremljen',
  'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Dodaj',
  'LBL_EMAIL_BCC' => 'BCC',
  'LBL_EMAIL_BUTTON' => 'Email',
  'LBL_EMAIL_CANCEL' => 'Otkaži',
  'LBL_EMAIL_CC' => 'CC',
  'LBL_EMAIL_CHARSET' => 'Skup karaktera',
  'LBL_EMAIL_CHECK' => 'Proveri Email',
  'LBL_EMAIL_CHECKING_DESC' => 'Sačekajte trenutak... <br><br>Ako je ovo prva provera za ovaj mail nalog, može potrajati.',
  'LBL_EMAIL_CHECKING_NEW' => 'Provera novih Email poruka',
  'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Brisanje keš fajlova',
  'LBL_EMAIL_CLOSE' => 'Zatvori',
  'LBL_EMAIL_COFFEE_BREAK' => 'Provera novih Email poruka<br><br>Veliki mail nalozi mogu da potraju mnogo vremena.',
  'LBL_EMAIL_COMMON' => 'Zajednički',
  'LBL_EMAIL_COMPOSE' => 'Email',
  'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Molim, unesite primaoce za ovaj email.',
  'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Molim unesite validne email adrese za Za, CC i BCC polja',
  'LBL_EMAIL_COMPOSE_LINK_TO' => 'Poveži sa',
  'LBL_EMAIL_COMPOSE_NO_BODY' => 'Ovaj email je prazan. Ipak poslati?',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'ovaj email nema naslov. Ipak poslati?',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(nema naslova)',
  'LBL_EMAIL_COMPOSE_OPTIONS' => 'Opcije',
  'LBL_EMAIL_COMPOSE_READ' => 'Pročitaj i sastavi Email',
  'LBL_EMAIL_COMPOSE_SEND_FROM' => 'Pošalji sa Mail naloga',
  'LBL_EMAIL_CONFIRM_CLOSE' => 'Odbaci ovu poruku?',
  'LBL_EMAIL_CONFIRM_DELETE' => 'Ukloni ove unose iz tvog Adresara?',
  'LBL_EMAIL_CONFIRM_DELETE_LIST' => 'Uklonite ove ukose iz vaše mailing liste?',
  'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Da li ste sigurni da želite da obrišete ovaj potpis?',
  'LBL_EMAIL_CREATE_NEW' => '--Kreirano pri snimanju--',
  'LBL_EMAIL_DATE_RECEIVED' => 'Datum prijema',
  'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Datum slanja od strane pošiljaoca',
  'LBL_EMAIL_DATE_TODAY' => 'Danas',
  'LBL_EMAIL_DATE_YESTERDAY' => 'Juče',
  'LBL_EMAIL_DD_TEXT' => 'email(ovi) odabrani.',
  'LBL_EMAIL_DEFAULTS' => 'Podrazumevano',
  'LBL_EMAIL_DELETE' => 'Obriši',
  'LBL_EMAIL_DELETE_CONFIRM' => 'Obrisati izabrane poruke?',
  'LBL_EMAIL_DELETE_ERROR_DESC' => 'Nemate pristup ovom delu. Kontaktirajte administratora vašeg sajta kako bi dobili mogućnost pristupa.',
  'LBL_EMAIL_DELETE_SUCCESS' => 'Email uspešno obrisan.',
  'LBL_EMAIL_DELETING_MESSAGE' => 'Brisanje poruke',
  'LBL_EMAIL_DELETING_OUTBOUND' => 'Brisanje odlaznog servera',
  'LBL_EMAIL_DELIMITER' => '::;::',
  'LBL_EMAIL_DETAILS' => 'Detalji',
  'LBL_EMAIL_DISPLAY_MSG' => 'Prikaz email poruka {0} - {1} od {2}',
  'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Završeno',
  'LBL_EMAIL_DOWNLOAD_STATUS' => 'Preuzeto [[count]] od [[total]] email poruka',
  'LBL_EMAIL_EDIT_CONTACT' => 'Izmeni Kontakt',
  'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Samo primarne adrese će biti korišćene pri radu sa Kontaktima.',
  'LBL_EMAIL_EDIT_MAILING_LIST' => 'Izmeni listu slanja',
  'LBL_EMAIL_EMPTYING_TRASH' => 'Isprazni smeće',
  'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Nema email adresa za prikaz.',
  'LBL_EMAIL_EMPTY_MSG' => 'Nema email poruka za prikaz.',
  'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Naziv foldera treba da bude jedinstveno i da nije prazno. Pokušajte ponovo.',
  'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Ne mogu da izdvojim željeni folder iz konteksta. Probajte ponovo.',
  'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Molim, proverite Vaša podešavanja.',
  'LBL_EMAIL_ERROR_CONTACT_NAME' => 'Proverite da li ste uneli prezime.',
  'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Ne mogu da obrišem folder. Ili folder ili njegovi podfolderi imaju email poruke ili su povezani sa poštanskim sandučetom.',
  'LBL_EMAIL_ERROR_DESC' => 'Greške su pronađene:',
  'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Imena Sugar foldera moraju biti jedinstvena.',
  'LBL_EMAIL_ERROR_EMPTY' => 'Unesite neki kriterijum za pretragu.',
  'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Adresa pošiljaoca je obavezna. Molim unesite validnu email adresu.',
  'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Došlo je do greške',
  'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Poruka je obrisana sa servera ili prebačena u drugi folder.',
  'LBL_EMAIL_ERROR_LIST_NAME' => 'Email lista sa tim nazivom već postoji',
  'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Veza sa mail serverom nije uspostavljena. Molim, kontaktirajte vašeg Administratora',
  'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Poruka je obrisana sa servera.',
  'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Nadgledani folder je obavezan.',
  'LBL_EMAIL_ERROR_MOVE' => 'Prebacivanje email pošte između servera i/ili email naloga trenutno nije podržano.',
  'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Greška pri prebacivanju',
  'LBL_EMAIL_ERROR_NAME' => 'Ime je obavezno.',
  'LBL_EMAIL_ERROR_NO_FILE' => 'Molim, dostavite fajl.',
  'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'Promena naziva IMAP foldera nije podržana u ovom trenutku.',
  'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Nije naveden server za odlaznu poštu',
  'LBL_EMAIL_ERROR_PASSWORD' => 'Lozinka je obavezna.',
  'LBL_EMAIL_ERROR_PORT' => 'Port mail servera je obavezan.',
  'LBL_EMAIL_ERROR_PREPEND' => 'Greška:',
  'LBL_EMAIL_ERROR_PROTOCOL' => 'Protokol servera je obavezan.',
  'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Mail nalog možda nije sačuvan.',
  'LBL_EMAIL_ERROR_SERVER' => 'Adresa mail servera je obavezna.',
  'LBL_EMAIL_ERROR_TIMEOUT' => 'Došlo je do greške tokom komunikacije sa email serverom.',
  'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Folder za otpatke je obavezan.',
  'LBL_EMAIL_ERROR_USER' => 'Korisničko ime je obavezno.',
  'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Ova informacija nije dostupna',
  'LBL_EMAIL_FOLDERS_ACTIONS' => 'Premesti u',
  'LBL_EMAIL_FOLDERS_ADD' => 'Dodaj',
  'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Dodaj novi folder',
  'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Sačuvaj',
  'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'dodaj ovaj folder u',
  'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Ovaj folder ne može biti promenjen',
  'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Da li ste sigurni da želite da obrišete ovaj folder?\\nOvaj proces ne može biti vraćen na prethodno stanje.\\nBrisanje foldera će obrisati sve njegove podfoldere.',
  'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Naziv novog foldera',
  'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Molim, izaberite folder pre izvršenja ove akcije.',
  'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Preimenuj folder',
  'LBL_EMAIL_FOLDERS_TITLE' => 'Upravljanje folderima',
  'LBL_EMAIL_FOLDERS_USING_GROUP_USER' => 'Upotreba grupe',
  'LBL_EMAIL_FOLDERS_USING_TEAM' => 'Dodeli timu',
  'LBL_EMAIL_FORWARD' => 'Prosledi',
  'LBL_EMAIL_FOUND' => 'Nađen',
  'LBL_EMAIL_FROM' => 'Od',
  'LBL_EMAIL_GROUP' => 'grupa',
  'LBL_EMAIL_HOME_FOLDER' => 'Početna strana',
  'LBL_EMAIL_HTML_RTF' => 'Pošalji HTML',
  'LBL_EMAIL_IE_DELETE' => 'Brisanje mail naloga',
  'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Da li ste sigurni da želite da obrišete ovaj mail nalog?',
  'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Brisanje potpisa',
  'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Uspešno je obrisano.',
  'LBL_EMAIL_IE_SAVE' => 'Čuvanje informacije mail naloga',
  'LBL_EMAIL_IMPORTING_EMAIL' => 'Uvoz Email-a',
  'LBL_EMAIL_IMPORT_EMAIL' => 'Uvezi u Sugar',
  'LBL_EMAIL_IMPORT_FAIL' => 'Uvoz nije uspeo zato što je poruka već uvezena ili izbrisana sa servera',
  'LBL_EMAIL_IMPORT_SETTINGS' => 'Podešavanje uvoza',
  'LBL_EMAIL_IMPORT_SUCCESS' => 'Uvoz je prošao',
  'LBL_EMAIL_INVALID' => 'Nevažeći',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Izabrani server za odlaznu elektronsku poštu za nalog koji koristite je nevažeći. Proverite podešavanja ili izaberite drugi server za elektronsku poštu za nalog koji koristite.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Server za odlaznu elektronsku poštu nije konfigurisan da bi slao email poruke. Molim vas odaberite ili dodajte server za odlaznu elektronsku poštu za nalog koji koristite u Podešavanja >> Mail nalog.',
  'LBL_EMAIL_INV_TITLE' => 'nevalidna email adresa',
  'LBL_EMAIL_LINK_RECORD' => 'Kliknite',
  'LBL_EMAIL_LIST_RENAME_DESC ' => 'Unesite nov naziv za ovu mailing listu',
  'LBL_EMAIL_LIST_RENAME_TITLE' => 'Promeni naziv Mailing liste',
  'LBL_EMAIL_LOADING' => 'Učitava se...',
  'LBL_EMAIL_MARK' => 'Označi',
  'LBL_EMAIL_MARK_FLAGGED' => 'Kao Sa zastavicom',
  'LBL_EMAIL_MARK_READ' => 'Kao Pročitano',
  'LBL_EMAIL_MARK_UNFLAGGED' => 'Kao Pročitano',
  'LBL_EMAIL_MARK_UNREAD' => 'Kao Nepročitano',
  'LBL_EMAIL_MENU_ADD_FOLDER' => 'kreiraj folder',
  'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Obriši keš fajlove',
  'LBL_EMAIL_MENU_COMPOSE' => 'Sastavi za',
  'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Obriši folder',
  'LBL_EMAIL_MENU_EDIT' => 'Izmeni',
  'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Isprazni smeće',
  'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Kreiraj folder (na udaljenoj lokaciji ili u Sugar-u)',
  'LBL_EMAIL_MENU_HELP_ARCHIVE' => 'Arhiviraj ove email poruke u SugarCRM',
  'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST' => 'Email odabranih mailing lista',
  'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE' => 'Email ovom kontatku',
  'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE' => 'Ukloni kontakt',
  'LBL_EMAIL_MENU_HELP_DELETE' => 'Obriši ove email(ove)',
  'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Obriši folder (na udaljenoj lokaciji ili u Sugar-u)',
  'LBL_EMAIL_MENU_HELP_EDIT_CONTACT' => 'Izmeni kontakt',
  'LBL_EMAIL_MENU_HELP_EDIT_LIST' => 'Izmeni mailing listu',
  'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Isprazni sve foldere sa smećem za tvoje mail naloge',
  'LBL_EMAIL_MENU_HELP_MARK_FLAGGED' => 'Označi ovu email poruku(e) zastavicom',
  'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Označi ovu email poruku(e)kao pročitane',
  'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Označi ovu email poruku(e) bez zastavice',
  'LBL_EMAIL_MENU_HELP_MARK_UNREAD' => 'Označi ovu email poruku(e) kao nepročitane',
  'LBL_EMAIL_MENU_HELP_REMOVE_LIST' => 'Uklonjanje mailing liste',
  'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Preimenuj folder (na udaljenoj lokaciji ili u Sugar-u)',
  'LBL_EMAIL_MENU_HELP_REPLY' => 'Odgovori na ovu email poruku(e)',
  'LBL_EMAIL_MENU_HELP_REPLY_ALL' => 'Odgovori svim primaocima za ove email poruka(e)',
  'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Molim, napravite izbor pre nego što pokušate ovu operaciju.',
  'LBL_EMAIL_MENU_REMOVE' => 'Ukloni',
  'LBL_EMAIL_MENU_RENAME' => 'Preimenuj',
  'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Preimenuj folder',
  'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Preimenujem folder',
  'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sinhronizuj',
  'LBL_EMAIL_MESSAGES' => 'poruke',
  'LBL_EMAIL_MESSAGE_NO' => 'Nema poruka',
  'LBL_EMAIL_ML_ADDRESSES_1' => 'Izabrana lista adresa',
  'LBL_EMAIL_ML_ADDRESSES_2' => 'Dostupna lista adresa',
  'LBL_EMAIL_ML_NAME' => 'Naziv liste',
  'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Klik</b> za višestruko selektovanje<br />(Mac korisnici koriste <b>CMD-Klik</b>)',
  'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Višestruki',
  'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Prazno',
  'LBL_EMAIL_NO' => 'Ne',
  'LBL_EMAIL_NOT_SENT' => 'Sistem ne može da obradi vaš zahtev. Molimo kontaktirajte administratora sistema.',
  'LBL_EMAIL_OK' => 'OK',
  'LBL_EMAIL_ONE_MOMENT' => 'Samo trenutak, molim...',
  'LBL_EMAIL_OPEN_ALL' => 'Otvori višestruke poruke',
  'LBL_EMAIL_OPTIONS' => 'Opcije',
  'LBL_EMAIL_OPT_OUT' => 'Odjavite',
  'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Odjavi i nevažeći',
  'LBL_EMAIL_OPT_TITLE' => 'isključena email adresa',
  'LBL_EMAIL_PAGE_AFTER' => 'od {0}',
  'LBL_EMAIL_PAGE_BEFORE' => 'Stranica',
  'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
  'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email kao PDF',
  'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email kao PDF [Alt+M]',
  'LBL_EMAIL_PERFORMING_TASK' => 'Izvršavanje zadatka',
  'LBL_EMAIL_POP3_REMOVE_MESSAGE' => 'POP3 vrsta protokola za mail server neće biti podržana u sledećoj verziji. Samo IMAP će biti podržan.',
  'LBL_EMAIL_PRIMARY' => 'Primarno',
  'LBL_EMAIL_PRIM_TITLE' => 'primarna email adresa',
  'LBL_EMAIL_PRINT' => 'Štampanje',
  'LBL_EMAIL_QC_BUGS' => 'Defekt',
  'LBL_EMAIL_QC_CASES' => 'Slučaj',
  'LBL_EMAIL_QC_CONTACTS' => 'Kontakt',
  'LBL_EMAIL_QC_LEADS' => 'Potencijalni klijent',
  'LBL_EMAIL_QC_OPPORTUNITIES' => 'Prodajna prilika',
  'LBL_EMAIL_QC_TASKS' => 'Zadatak',
  'LBL_EMAIL_QUICK_COMPOSE' => 'Brzo Sastavljenje',
  'LBL_EMAIL_QUICK_CREATE' => 'Brzo kreiranje',
  'LBL_EMAIL_REBUILDING_FOLDERS' => 'Obnavljanje foldera',
  'LBL_EMAIL_RECORD' => 'Email zapis',
  'LBL_EMAIL_RECV' => 'rec',
  'LBL_EMAIL_RELATE_EMAIL' => 'Email se odnosi',
  'LBL_EMAIL_RELATE_TO' => 'Povezivanje',
  'LBL_EMAIL_REMOVE' => 'Ukloni',
  'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Upozorenje! Odlazni mail nalog koji pokušavate da obrišete je povezan sa potojećim dolaznim mail nalogom. Da li ste sigurni da želite da nastavite?',
  'LBL_EMAIL_REPLY' => 'Odgovori',
  'LBL_EMAIL_REPLY_ALL' => 'Odgovori svima',
  'LBL_EMAIL_REPLY_TO' => 'Reply-to',
  'LBL_EMAIL_REPORTS_TITLE' => 'Izveštaji',
  'LBL_EMAIL_RETRIEVING_LIST' => 'Preuzimanje Email liste',
  'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Preuzimanje poruke',
  'LBL_EMAIL_RETRIEVING_RECORD' => 'Preuzimanje Email zapisa',
  'LBL_EMAIL_RETURN_TO_VIEW' => 'Povratak na prethodni modul?',
  'LBL_EMAIL_REVERT' => 'Vrati',
  'LBL_EMAIL_RULES_TITLE' => 'Upravljanje pravilima',
  'LBL_EMAIL_SAVE' => 'Sačuvaj',
  'LBL_EMAIL_SAVE_AND_REPLY' => 'Sačuvaj & Odgovori',
  'LBL_EMAIL_SAVE_DRAFT' => 'Sačuvaj nacrt',
  'LBL_EMAIL_SEARCHING' => 'Sprovodim pretragu',
  'LBL_EMAIL_SEARCH_ADVANCED' => 'Napredna pretraga',
  'LBL_EMAIL_SEARCH_DATE_FROM' => 'Datum od',
  'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Datum do',
  'LBL_EMAIL_SEARCH_FULL_TEXT' => 'Glavni tekst',
  'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Nema rezultata na osnovu Vašeg kriterijuma za pretragu',
  'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Rezultati pretrage',
  'LBL_EMAIL_SEARCH_TITLE' => 'Osnovna pretraga',
  'LBL_EMAIL_SEARCH__FROM_ACCOUNTS' => 'Pretraga email naloga',
  'LBL_EMAIL_SELECT' => 'Izaberi',
  'LBL_EMAIL_SELECT_ONE_RECORD' => 'Molim odaberite samo jedan email zapis',
  'LBL_EMAIL_SEND' => 'Pošalji',
  'LBL_EMAIL_SENDING_EMAIL' => 'Slanje Email-a',
  'LBL_EMAIL_SENT' => 'poslato',
  'LBL_EMAIL_SETTINGS' => 'Podešavanja',
  'LBL_EMAIL_SETTINGS_2_ROWS' => '2 Reda',
  'LBL_EMAIL_SETTINGS_3_COLS' => '3 Kolone',
  'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Mail Nalozi',
  'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Obriši formu',
  'LBL_EMAIL_SETTINGS_AUTO_IMPORT' => 'Nakon pregleda uvezi Email',
  'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Proveri za novi Email',
  'LBL_EMAIL_SETTINGS_COMPOSE_INLINE' => 'Koristi okvir za pregled',
  'LBL_EMAIL_SETTINGS_COMPOSE_POPUP' => 'Koristi Popup prozor',
  'LBL_EMAIL_SETTINGS_DISPLAY_NUM' => 'Broj email poruka po strani',
  'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT' => 'Izmeni Mail nalog',
  'LBL_EMAIL_SETTINGS_FOLDERS' => 'Folderi',
  'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Adresa pošiljaoca',
  'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Ime pošiljaoca',
  'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Email adresa za Test obaveštenje:',
  'LBL_EMAIL_SETTINGS_FULL_SCREEN' => 'Pun ekran',
  'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Sinhronizuj sve Mail naloge',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC' => 'Pokretanjem ove radnje svi email nalozi i njihovi sadržaji biće sinhronizovani.',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Pokrenuti potpunu sinhronizaciju?\\nZa velike mail naloge sinhronizacija će možda trajati nekoliko minuta.',
  'LBL_EMAIL_SETTINGS_GENERAL' => 'Opšte',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS' => 'Dostupni grupni folderi',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Kreiraj gupni folder',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Izmeni grupni folder',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Čuvanje grupnog foldera',
  'LBL_EMAIL_SETTINGS_LAYOUT' => 'Stil rasporeda',
  'LBL_EMAIL_SETTINGS_MUST_RELOAD' => 'Morate ponovo učitati stranu da bi nova podešavanja bila primenjena.',
  'LBL_EMAIL_SETTINGS_NAME' => 'Naziv Mail naloga',
  'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Odgovori na adresu',
  'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Odaberi broj email poruka po strani u Dolaznim porukama. Ovo podešavanje može da zahteva osvežavanje strane da bi imalo efekta.',
  'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Preuzimanje mail naloga',
  'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP' => 'Preuzimanje grupnog foldera',
  'LBL_EMAIL_SETTINGS_RULES' => 'Pravila',
  'LBL_EMAIL_SETTINGS_SAVED' => 'Podešavanja su sačuvana.\\n\\nMorate ponovo da učitate stranu da za njhov efekat.',
  'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Pošalji email poruke samo kao običan tekst',
  'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS' => 'Aktivan',
  'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Broj email poruka po strani',
  'LBL_EMAIL_SETTINGS_TAB_POS' => 'Postavi kartice na dno',
  'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Vizuelna podešavanja',
  'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Podešavanja',
  'LBL_EMAIL_SETTINGS_TOGGLE_ADV' => 'Prikaži napredno',
  'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR' => 'Na Email adresu',
  'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Dostupni korisnički folderi',
  'LBL_EMAIL_SHOW_READ' => 'Prikaži sve',
  'LBL_EMAIL_SHOW_UNREAD_ONLY' => 'Prikaži samo nepročitano',
  'LBL_EMAIL_SIGNATURES' => 'Potpisi',
  'LBL_EMAIL_SIGNATURE_CREATE' => 'Kreiraj potpis',
  'LBL_EMAIL_SIGNATURE_NAME' => 'Naziv potpisa',
  'LBL_EMAIL_SIGNATURE_TEXT' => 'Tekst potpisa',
  'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Omogući SMTP preko SSL ili TLS',
  'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ Sugar Folderi ]',
  'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Udaljeni Folderi ]',
  'LBL_EMAIL_SUBJECT' => 'Naslov',
  'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Kliknte na "Shift" ili "Ctrl" da bi izabrali više foldera.',
  'LBL_EMAIL_SUCCESS' => 'Uspešno',
  'LBL_EMAIL_SUGAR_FOLDER' => 'SugarFolder',
  'LBL_EMAIL_TEAMS' => 'Dodeli timovima',
  'LBL_EMAIL_TEMPLATES' => 'Šabloni',
  'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Glavni deo email šablona je prazan',
  'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Email je poslat na navedenu email adresu koristeći navedena podešavanja za odlaznu elektronsku poštu. Molim vas proverite da li je email primljen kako bi potvrdili da su podešavanja tačna.',
  'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Pošalji test Email',
  'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test Email je poslat',
  'LBL_EMAIL_TEXT_FIRST' => 'Prva stranica',
  'LBL_EMAIL_TEXT_LAST' => 'Poslednja stranica',
  'LBL_EMAIL_TEXT_NEXT' => 'Naredna stranica',
  'LBL_EMAIL_TEXT_PREV' => 'Prethodna stranica',
  'LBL_EMAIL_TEXT_REFRESH' => 'Osveži',
  'LBL_EMAIL_TITLE' => 'Email',
  'LBL_EMAIL_TO' => 'Za',
  'LBL_EMAIL_TOGGLE_LIST' => 'Promeni stanje liste',
  'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grupa',
  'LBL_EMAIL_VIEW' => 'Pregled',
  'LBL_EMAIL_VIEWS' => 'Pregledi',
  'LBL_EMAIL_VIEW_HEADERS' => 'Prikaži Zaglavlja',
  'LBL_EMAIL_VIEW_PRINTABLE' => 'Verzija za štampu',
  'LBL_EMAIL_VIEW_RAW' => 'Prikaži izvorni Email',
  'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Pregled veza',
  'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Ova funkcija nije podržana kada se koristi POP3 protokol.',
  'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Upozorenje: Nedostaju korisničko ime i lozinka za nalog odlazni mail nalog.',
  'LBL_EMAIL_YES' => 'Da',
  'LBL_EMPLOYEES' => 'Zaposleni',
  'LBL_EMPTY' => 'Prazno',
  'LBL_EMPTY_REQUIRED_VCARD' => 'Virtuelni imenik ne sadrži sva potrebna polja za ovaj modul.',
  'LBL_EMPTY_VCARD' => 'Molim odaberite fajl digitalne vizitkarte',
  'LBL_ENABLE_JAVASCRIPT' => 'SugarCRM zahteva javascript. Molim odobrite javascript kako biste nastavili da koristite SugarCRM.',
  'LBL_ENTER_DATE' => 'Unesi datum',
  'LBL_ENTER_EMAIL' => 'Ukucajte email pozvane osobe',
  'LBL_ENTER_VALID_YEAR' => 'Molim, unesite validnu godinu',
  'LBL_ENTER_YEAR' => 'Unesite godinu',
  'LBL_ERROR' => 'Greška',
  'LBL_ERROR_CANNOT_FIND_TWITTER' => 'Nije moguće naći ispravn vremensku liniju za Twiter ID',
  'LBL_ERROR_RETRIEVING_FREE_BUSY' => 'Greška prilikom vraćanja rasporeda',
  'LBL_ERR_LOADING_RSS_FEED' => 'Neuspelno učitavanje RSS-a',
  'LBL_EXISTING' => 'Postojeći',
  'LBL_EXPAND_ALL' => 'Proširi sve',
  'LBL_EXPORT' => 'Izvoz',
  'LBL_EXPORT_ALL' => 'Izvezi sve',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Dodeljeno',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Dodeljeni korisnik',
  'LBL_EXPORT_FULL_NAME' => 'Puno ime',
  'LBL_EXPORT_REPORTS_TO_ID' => 'ID broj nadređenog',
  'LBL_EXPORT_TEAM_ID' => 'ID broj tima',
  'LBL_EXPORT_TEAM_NAME' => 'Timovi',
  'LBL_EXPORT_TEAM_SET_ID' => 'ID Postavljenog tima',
  'LBL_EXTERNAL_LOGIN_BUTTON_TITLE' => 'Jedinstveni potpis',
  'LBL_EXTERNAL_SECURITY_LEVEL' => 'Bezbednost',
  'LBL_FAILED' => 'Nije uspelo!',
  'LBL_FASTCGI_LOGGING' => 'Za optimalno iskustvo korišćenja IIS/FastCGI sapi, podesite fastcgi.logging na 0 u php.ini fajlu.',
  'LBL_FAVORITE' => 'Omiljeni',
  'LBL_FAVORITES' => 'Omiljeni',
  'LBL_FAVORITES_FILTER' => 'Moje Omiljene',
  'LBL_FEEDBACK' => 'Povratna informacija',
  'LBL_FILES_OPENED' => 'Pristupljeno fajlovima',
  'LBL_FILE_BUTTON' => 'Fajl',
  'LBL_FILE_DELETED' => 'Fajl je uspešno obrisan',
  'LBL_FILE_DELETE_CONFIRM' => 'Da li ste sigurni da želite da obrišete ovaj fajl? Ovo ne može biti poništeno.',
  'LBL_FILE_SIZE_UNITS_B' => 'Bajtova',
  'LBL_FILE_SIZE_UNITS_KB' => 'kB',
  'LBL_FILE_SIZE_UNITS_MB' => 'MB',
  'LBL_FILTER' => 'Filter',
  'LBL_FILTERED' => 'Filtriran',
  'LBL_FILTER_ALL_RECORDS' => 'Svi zapisi',
  'LBL_FILTER_BETWEEN_FROM' => 'Od',
  'LBL_FILTER_BETWEEN_TO' => 'Do',
  'LBL_FILTER_CREATE_NEW' => 'Kreiraj filter',
  'LBL_FILTER_DATEBETWEEN_FROM' => 'Početni datum',
  'LBL_FILTER_DATEBETWEEN_TO' => 'Krajni datum',
  'LBL_FILTER_MENU_BY' => 'Filtriraj meni po',
  'LBL_FILTER_SELECT_FIELD' => 'Izaberite polje...',
  'LBL_FILTER_SELECT_OPERATOR' => 'Izaberite operator...',
  'LBL_FINISH_BUTTON_LABEL' => 'Kraj',
  'LBL_FINISH_BUTTON_TITLE' => 'Kraj',
  'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'prvi dan meseca',
  'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
  'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
  'LBL_FIXED_IN_RELEASE' => 'Popravljen u izdanju',
  'LBL_FOLLOW' => 'Prati',
  'LBL_FOLLOWING' => 'Pratim',
  'LBL_FOLLOW_LINK' => 'Sledi link',
  'LBL_FONTSIZE_EXTRA_HUGE' => 'Najveće',
  'LBL_FONTSIZE_HUGE' => 'Veoma veliko',
  'LBL_FONTSIZE_LARGE' => 'Veliko',
  'LBL_FONTSIZE_LARGER' => 'Veće',
  'LBL_FONTSIZE_NORMAL' => 'Normalno (podrazumevano)',
  'LBL_FONTSIZE_SMALL' => 'Malo',
  'LBL_FONTSIZE_TINY' => 'Veoma malo',
  'LBL_FORECAST_WORKSHEET' => 'Tabela prognoze',
  'LBL_FORECAST_WORKSHEETS' => 'Tabela prognoza',
  'LBL_FOUND_IN_RELEASE' => 'Nađen u izdanju',
  'LBL_FULL_FORM_BUTTON_KEY' => 'F',
  'LBL_FULL_FORM_BUTTON_LABEL' => 'Pun formular',
  'LBL_FULL_FORM_BUTTON_TITLE' => 'Pun formular [Alt+F]',
  'LBL_GENERATE_QUOTE' => 'Napravi ponudu',
  'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Generiši Formular',
  'LBL_GETTINGAIR' => 'Dobijanje vazduha',
  'LBL_GLOBAL_SEARCH' => 'Globalna pretraga',
  'LBL_GLOBAL_SEARCH_LNK_KEY' => '',
  'LBL_GLOBAL_SEARCH_MODULE_FILTER' => 'Filter globalne pretrage',
  'LBL_GLOBAL_SEARCH_RUN' => 'Pokrenuti globalnu pretragu',
  'LBL_GLOBAL_SHORTCUTS' => 'Globalne prečice',
  'LBL_GO_BUTTON_LABEL' => 'Idi',
  'LBL_GRID_SELECTED_FILE' => 'izabrani fajl',
  'LBL_GRID_SELECTED_FILES' => 'izabrani fajlovi',
  'LBL_GROUP_EMAIL_ACCOUNT_CONFIGURATION' => 'grupni nalog',
  'LBL_GS_HELP' => 'Polja u ovom modulu koja se koriste za pretragu pojavljuju se iznad. Osenčeni tekst poklapa se sa Vašim kriterijumom pretrage.',
  'LBL_HELP' => 'Pomoć',
  'LBL_HELP_CREATE' => '•	{{plural_module_name}}  modul se sastoji od stavki individualnih linija posla koje su uključene na {{opportunities_singular_module}} zapis i praćen kroz ceo prodajni životni ciklus. {{opportunities_singular_module}} zapis ima ulugo zaglavlja za jedan ili više {{module_name}} zapis. Da bi  {{module_name}} bio kreiran: 1. Obezbediti vrednost za polja po želji. - Polja označena kao "Obavezna" moraju biti uneta pre čuvanja podataka. - Klik na "Pokaži više" za prikaz dodatnih polja ako je potrebno. 2. Klik na "Sačuvaj" da dovršimo novi zapis i povratak na predhodnu stranu. - Izaberi "Sačuvaj i pregledaj" za otvaranje novog {{module_name}} u pogledu zapisa. - Izaberi "Sačuvaj i kreiraj novi" za momentalno kreiranje novog {{module_name}}.',
  'LBL_HELP_CREATE_TITLE' => '{{module_name}} Pravljenje',
  'LBL_HELP_DUPLICATE' => 'Sugar je detektovao da zapis koji pokušavate da kreirate već postoji. Za izmenu postojećeg zapisa umesto kreiranja novog, kliknuti na dugme "Odaberi i izmeni" desno od željenog zapisa. Sva prazna polja u postojećem zapisu biće popunjena vrednostima koje ste upravo uneli. Kliknite "Sačuvaj" za snimanje promena na postojećem zapisu. Ako ne želite da koristite vrednosti postojećeg zapisa umesto onih vrednosti koje ste upravo uneli kliknite na "Vrati na orginalno". Vrednosti koje ste uneli će onda biti primenjene na postojeći zapis, i sada možete da uradite dodatne promene i kliknite na "Sačuvaj" za završetak izmene na postojećem zapisu. Za kreiranje novog zapisa vrednostima koje ste upravo uneli kliknite na "Zanemari duplikate i i Sačuvaj" na gornjem desnom uglu ekrana.',
  'LBL_HELP_DUPLICATE_TITLE' => 'Potencijalni duplikat pronađen',
  'LBL_HELP_MORE_INFO' => 'Za više informacija pogledajte {{{more_info_url}}} {{plural_module_name}} dokumentaciju.{{{more_info_url_close}}}',
  'LBL_HELP_NO_HELP' => 'Nema dostupnih podataka',
  'LBL_HELP_PREVIEW' => 'Pomoćni dashlet pruža specifične informacije koje se tiču modula kojitrenutno pregledate zajedno sa vezom ka odgovorajućom dokumentaciju(npr. dokumentacija Uprave) u Aplikacionom uputstvu za više informacija.',
  'LBL_HELP_RECORD' => 'Ovaj pregled zapisa pruža temeljne informacije o individualnom zapisu kao i neke detalje o zapisima za koej je vezan - Izmena polja ovog zapisa klikom na pojedinačno polje ili pritiskom na dugme Izmena. - Pregled ili izmena linkova ka drugim zapisima u podformama, uključujući {{campaigns_singular_module}} korisnike, prebacivanjem donjeg levog okvira na "Pregled Podataka". - Kreiraj i pregledaj korisničke komentare i snimi istoriju izmena u {{activitystream_singular_module}} prebacivanjem donjeg levog okvira na "Tok Aktivnosti". - Prati ili favorizuj ovaj zapis koristeći ikone desno od imena zapisa. - Dodatne akcije su dostupne u padajućem Akcija meniju desno od dugmeta Izmena.',
  'LBL_HELP_RECORDS' => 'Pregled liste modula prikazuje sve zapise koji zadovoljavaju trenutne kriterijume pretrage i na koje korisnik ima prava. Možete videti osnovne detalje svakog zapisa u poljima kolone pregleda liste ili klikom na ime zapisa za otvaranje u pregledu zapisa.',
  'LBL_HELP_RECORDS_TITLE' => 'Pomoć Pregleda Liste',
  'LBL_HELP_RECORD_TITLE' => 'Pomoć Pregledu Zapisa',
  'LBL_HIDE' => 'Sakrij',
  'LBL_HIDE_COLUMNS' => 'Sakrij kolone',
  'LBL_HIDE_SHOW' => 'Prikaži/Sakrij',
  'LBL_HISTORICAL_SUMMARY' => 'Istorijski sumarum',
  'LBL_HISTORICAL_SUMMARY_EMAIL_FROM' => 'E - mejl od',
  'LBL_HISTORICAL_SUMMARY_EMAIL_TO' => 'E - mejl za',
  'LBL_HISTORY_DASHLET' => 'Istorija',
  'LBL_HISTORY_DASHLET_DESCRIPTION' => 'Dešlet Istorija prokazuje održane sastanek, obavljene pozive, primljene email poruke i poslete email poruke.',
  'LBL_HISTORY_DASHLET_EMAIL_PLURAL' => 'Email-ovi',
  'LBL_HISTORY_DASHLET_EMAIL_SINGULAR' => 'Email',
  'LBL_HISTORY_DASHLET_GROUP_BUTTON_LABEL' => 'Timska Istorija',
  'LBL_HISTORY_DASHLET_USER_BUTTON_LABEL' => 'Moja Istorija',
  'LBL_HOME' => 'Početna',
  'LBL_HONEYPOT' => 'Ako ste stvarna osoba nemojte popuniti ovo.',
  'LBL_HOURS' => 'Sati',
  'LBL_ICON_COLUMN_1' => 'Kolona',
  'LBL_ICON_COLUMN_2' => '2 kolone',
  'LBL_ICON_COLUMN_3' => '3 Kolone',
  'LBL_ID' => 'ID',
  'LBL_ID_FF_ADD' => 'Dodaj',
  'LBL_ID_FF_CLEAR' => 'Obriši',
  'LBL_ID_FF_REMOVE' => 'Ukloni',
  'LBL_ID_FF_SELECT' => 'Izaberi',
  'LBL_ID_FF_VCARD' => 'Digitalna vizitkarta',
  'LBL_IGNORE_DUPLICATE_AND_SAVE' => 'Ignoriši duplikat i sačuvaj',
  'LBL_IMAGE' => 'Slika',
  'LBL_IMAGE_DELETE_CONFIRM' => 'Da li ste sigurni da želite da obrišete ovu sliku?',
  'LBL_IMPORT' => 'Uvoz',
  'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"Ovo je primer datoteke za uvoz koji predstavlja sadržaj datoteke spremne za uvoz." "Datoteka je .csv (vrednosti odvojene zarezom), koja koristi duple znake navoda kao kvalifikator polja." "Red sa zaglavljem je prvi red u datoteci i sadrži labele polja onakve kakve ih vidite u Vašoj aplikaciji." "Ove labele koriste se za mapiranje podataka u datoteci na polja u aplikaciji." "Napomene: Imena baza podataka mogu biti korišćena u redu sa zaglavljem. Ovo je korisno kad koristite phpMyAdmin ili neki drugi alat za rad sa bazama podataka da izvezete listu podataka za uvoz." "Redosled kolona nije bitan dok god proces uvoza može da mapira podatke na odgovarajuće redove na osnovu reda sa zaglavljem." "Da biste koristili ovu datoteku kao šablon, uradite sledeće:" "1. Uklonite primere podataka" "2. Uklonite pomoćni tekst koji upravo čitate" "3. Unesite sopstvene podatke u odgovarajuće redove i kolone" "4. Sačuvajte datoteku na poznatu lokaciju na Vašem sistemu" "5. Kliknite na opciju uvoza iz menija sa akcijama i odaberite datoteku za postavljanje"',
  'LBL_IMPORT_STARTED' => 'Uvoz započet:',
  'LBL_IMPORT_VCARD' => 'Uvezi digitalnu vizitkartu',
  'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
  'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Uvezi digitalnu vizitkartu',
  'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Uvezi digitalnu vizitkartu [Alt+I]',
  'LBL_INACTIVE_TASKS_DASHLET' => 'Neaktivni zadaci',
  'LBL_INACTIVE_TASKS_DASHLET_COMPLETED' => 'Završeno',
  'LBL_INACTIVE_TASKS_DASHLET_DEFERRED' => 'Odložen',
  'LBL_INACTIVE_TASKS_DASHLET_DESCRIPTION' => 'Dašlet Zadaci prikazuje odložene i završene zadatke.',
  'LBL_INACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL' => 'Timski zadaci',
  'LBL_INACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL' => 'Moji zadaci',
  'LBL_INBOUNDEMAIL_ID' => 'ID dolaznog Email-a',
  'LBL_INCORRECT_PASSWORD' => 'Greška : Netačna šifra.',
  'LBL_INFOINLINE' => 'Informacije',
  'LBL_INSTANCES' => 'Instance',
  'LBL_INSTANCE_ACTIVE' => 'Već koristite ovu instancu',
  'LBL_INSTANCE_INVITE_SENT' => 'Poziv poslat za',
  'LBL_INSTANCE_IN_USE' => 'Instanca u upotrebi',
  'LBL_INSTANCE_SWITCH_FAILED' => 'Promena instance nije uspela',
  'LBL_INSTANCE_USERS' => 'Korisnici instance',
  'LBL_INVALID_412_RESPONSE' => 'Zahtev je neuspešan jer čini aplikaciju neupotrebljivom. Molim kontaktirajte tehničku podršku',
  'LBL_INVALID_CREDS' => 'Kombinacija korisničko ime / lozinka nije dobra, molimo pokušajte ponovo.',
  'LBL_INVALID_CREDS_TITLE' => 'Pogrešni akreditivi',
  'LBL_INVALID_FILE_EXTENSION' => 'Ekstenzija fajla nije validna',
  'LBL_INVALID_GRANT' => 'Vaš token nije validan ili je istekao. Molimo prijavite se ponovo.',
  'LBL_INVALID_GRANT_TITLE' => 'Token je istekao',
  'LBL_INVALID_REQUEST' => 'Zahtev je nevalidan ili pogrešan. Molimo kontaktirajte tehničku podršku.',
  'LBL_INVALID_REQUEST_TITLE' => 'Nevalidan zahtev',
  'LBL_INVALID_USA_PHONE_FORMAT' => 'Molim, unesite numerički SAD broj telefona, uključujući i pozivni broj.',
  'LBL_INVITE' => 'Pozovi',
  'LBL_INVITED' => 'Pozvani',
  'LBL_INVITEES' => 'Pozvani',
  'LBL_IS_EMPTY' => 'Je prazan',
  'LBL_IS_NOT_EMPTY' => 'Nije prazan',
  'LBL_ITEM_ID' => 'ID broj stavke',
  'LBL_ITEM_SUMMARY' => 'Sadržaj stavke',
  'LBL_JOB_NOTIFICATION_BODY_GENERIC' => 'Zakazani posao se uspešno obavlja',
  'LBL_JOB_NOTIFICATION_DOC_LINK_TEXT' => 'Dokumentacija podešavanja Prodajnih Prilika.',
  'LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_BODY' => 'Linija stavki Prihoda je sada dozvoljena u Vašem Sugar-u, i svi postojeći podaci iz Prodajne Prilike su obrađeni. Vaš Sugar je spreman da bude korišćen sa Linijom stavki Prihoda. Za više informacija o sprovedenim promenama, pogledajte {{doc_url}}. Iskreno, SugarCRM',
  'LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_SUBJECT' => 'Linija stavki Prihoda je sada dozvoljena u Vašem Sugar-u',
  'LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_BODY' => 'Modul Prognoze se sada može koristiti zajedno sa prodajnim prilikama. Sve ranije stavke prognoze Linije Prihoda su uklonjene, pa se mogu kreirati nove prognoze i povezati sa prodajnim prilikama. Za više informacija koje se tiču sprvodenih promena, otvoriti {{doc_url}}. Iskreno, vaš SugarCRM',
  'LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_SUBJECT' => 'Modul Prognoza je sada spreman za upotrebu sa Potencijalnim Prodajama u Vašem Sugar-u.',
  'LBL_JOB_NOTIFICATION_RLI_NOTE_BODY' => 'Stavke Linije Prihoda su onemogućene u okviru Vašeg Sugar - a, a sve postojeće stavke su obrađene. Sada možete Stavke Linije Prihoda koristiti zajedno sa Prodajnim Prilikama. Za više informacija koje se tiču sprovedenih promena, otvoriti {{doc_url}}. Iskreno, Vaš SugarCRM.',
  'LBL_JOB_NOTIFICATION_RLI_NOTE_SUBJECT' => 'Stavke Linije Prihoda su onemogućene u okviru Vašeg Sugar - a',
  'LBL_JOB_NOTIFICATION_SUBJECT_GENERIC' => 'Zakazani posao je završen.',
  'LBL_JS_CALENDAR' => 'Kalendar',
  'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><br /><strong>Funkcionalnost formi - Alt+</strong><br/><br />I = uredi (detaljni prikaz)<br/><br />U = dupliciraj (detaljni prikaz)<br/> <br />D = obriši (detaljni prikaz)<br/><br />A = sačuvaj (prikaz za uređivanje)<br/<br />L = otkaži (prikaz za uređivanje) <br/><br /><br/><br /></p><br /><br /><p><br /><strong>Pretraga i navigacija  - Alt+</strong><br/><br />7 = prvi input na formi za uređivanje<br/><br />8 = link za naprednu pretragu<br/><br />9 = prvi input na formi za pretragu<br/><br />0 = input za unifikovanu pretragu<br><br /></p>',
  'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Prečice na tastaturi',
  'LBL_LANGUAGE' => 'Jezik:',
  'LBL_LAST_COMMIT' => 'Poslednje izvršenje',
  'LBL_LAST_LOGIN' => 'poslednje prijavljivanje',
  'LBL_LAST_TOUCHED' => 'Poslednja promena {{relativetime}} na {{date}} u {{time}}',
  'LBL_LAST_VIEWED' => 'Poslednje pregledano',
  'LBL_LATER' => 'Kasnije',
  'LBL_LEADS' => 'Potencijalni klijenti',
  'LBL_LEARNING_RESOURCES_COMMUNITY_LINK' => 'Forum',
  'LBL_LEARNING_RESOURCES_COMMUNITY_TEASER' => 'Pridružite se diskusijama, rešavanju problema kao i razmeni ideja sa drugim korisnicima.',
  'LBL_LEARNING_RESOURCES_DESC' => 'SugarCRM Resursi za učenje',
  'LBL_LEARNING_RESOURCES_NAME' => 'Resursi za učenje',
  'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_LINK' => 'Sugar Univerzitet',
  'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_TEASER' => 'Postanite Sugar ekspert uz pomoć treninga, video snimaka, časova, internet seminara i sertifikata.',
  'LBL_LEARNING_RESOURCES_SUPPORT_LINK' => 'Dokumentacija i Podrška',
  'LBL_LEARNING_RESOURCES_SUPPORT_TEASER' => 'Saznajte detalje o tome kako funkcioniše Sugar i komunicirajte sa podrškom',
  'LBL_LEARNING_RESOURCES_TITLE' => 'Resursi za učenje',
  'LBL_LEGAL' => 'Legalno',
  'LBL_LESS' => 'manje',
  'LBL_LIKELY' => 'Verovatno',
  'LBL_LIKELY_ADJUSTED' => 'Verovatne (prilagođeno)',
  'LBL_LINK_ACTIONS' => 'Akcije',
  'LBL_LINK_ALL' => 'Svi',
  'LBL_LINK_BUTTON' => 'Link',
  'LBL_LINK_FROM_REPORT_NO_DATA' => 'Nema zapisa za povezivanje.',
  'LBL_LINK_FROM_REPORT_SUCCESS' => '{{reportCount}} zapisa je povezano.',
  'LBL_LINK_FROM_REPORT_WRONG_MODULE' => 'Izabrani izveštaj nije bazirana na korektnom tipu modula.',
  'LBL_LINK_MORE' => 'Više',
  'LBL_LINK_NONE' => 'Nijedna',
  'LBL_LINK_RECORDS' => 'Zapisi',
  'LBL_LINK_SELECT' => 'Izaberi',
  'LBL_LIST' => 'Lista',
  'LBL_LISTVIEW' => 'Pregled u vidu liste',
  'LBL_LISTVIEW_ACTIONS' => 'Akcije',
  'LBL_LISTVIEW_ALL' => 'Svi',
  'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Molim, izaberite manje od 10 zapisa da bi nastavili.',
  'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Da li ste sigurni da želite da ažurirate celu listu?',
  'LBL_LISTVIEW_NONE' => 'Nijedna',
  'LBL_LISTVIEW_NO_RECORDS' => 'Trenutno nije pronađen ni jedan zapis',
  'LBL_LISTVIEW_NO_SELECTED' => 'Molim, izaberite bar jedan zapis da bi nastavili.',
  'LBL_LISTVIEW_OPTION_CURRENT' => 'Ova strana',
  'LBL_LISTVIEW_OPTION_ENTIRE' => 'Svi zapisi',
  'LBL_LISTVIEW_OPTION_SELECTED' => 'Izabrani zapisi',
  'LBL_LISTVIEW_SELECTED_CLEAR' => 'Obriši selektovano.',
  'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Izabrani:',
  'LBL_LISTVIEW_SELECT_ALL_RECORDS' => 'Izaberite sve zapise',
  'LBL_LISTVIEW_SELECT_AND_EDIT' => 'Izaberi i izmeni',
  'LBL_LISTVIEW_TWO_REQUIRED' => 'Molim, izaberite bar dva zapisa da bi nastavili.',
  'LBL_LIST_ACCOUNT_NAME' => 'Naziv kompanije',
  'LBL_LIST_ASSIGNED_USER' => 'Korisnik',
  'LBL_LIST_CONTACT_NAME' => 'Ime kontakta',
  'LBL_LIST_CONTACT_ROLE' => 'Uloga kontakta',
  'LBL_LIST_DATE_ENTERED' => 'Datum kreiranja',
  'LBL_LIST_EMAIL' => 'Email',
  'LBL_LIST_NAME' => 'Naziv',
  'LBL_LIST_OF' => 'od',
  'LBL_LIST_PHONE' => 'Telefon',
  'LBL_LIST_RELATED_TO' => 'Povezano sa',
  'LBL_LIST_REMOVE_EMAIL_INFO' => 'Postoji dodatni e - mejl na zapisu koji menjate. On je sada primara i dodat je ispod',
  'LBL_LIST_TEAM' => 'Tim',
  'LBL_LIST_USER_NAME' => 'Korisničko ime',
  'LBL_LOADING' => 'Učitavanje ...',
  'LBL_LOADING_FILES' => 'Lista dokumenta se i dalje učitava. Molimo vas pokušajte kasnije.',
  'LBL_LOADING_LANGUAGE' => 'Učitavanje jezičkog paketa',
  'LBL_LOADING_PAGE' => 'Stranica se učitava, molim sačekajte...',
  'LBL_LOADING_PREVIEW' => 'Učitavanje pregleda',
  'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Petar',
  'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Petrović',
  'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
  'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'junior programer',
  'LBL_LOGGED_OUT' => 'Izlogovani ste.',
  'LBL_LOGIN_ADMIN_CALL' => 'Molim Vas kontaktirajte administratora sistema.',
  'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Previše neuspešnih pokušaja pristupa sistemu.',
  'LBL_LOGIN_BUTTON_KEY' => 'L',
  'LBL_LOGIN_BUTTON_LABEL' => 'Prijava',
  'LBL_LOGIN_BUTTON_TITLE' => 'Prijava',
  'LBL_LOGIN_FORGOT_PASSWORD' => 'Zaboravili ste lozinku?',
  'LBL_LOGIN_FORM_LABEL' => 'Prikaži formu za prijavu',
  'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Možete da pokušate da se prijavite za',
  'LBL_LOGIN_LOGIN_TIME_DAYS' => 'dana.',
  'LBL_LOGIN_LOGIN_TIME_HOURS' => 'č.',
  'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'min.',
  'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'sek.',
  'LBL_LOGIN_OPTIONS' => 'Opcije',
  'LBL_LOGIN_PASSWORD' => 'Lozinka',
  'LBL_LOGIN_SUBMIT' => 'Pošalji',
  'LBL_LOGIN_TO_ACCESS' => 'Da bi pristupili ovoj oblasti molimo Vas da se prijavite.',
  'LBL_LOGIN_USERNAME' => 'Korisničko ime',
  'LBL_LOGIN_WELCOME_TO' => 'Dobrodošli u',
  'LBL_LOGOUT' => 'Odjavi se',
  'LBL_LOWER_OR' => 'ili',
  'LBL_MAILMERGE' => 'Spajanje Email-ova',
  'LBL_MAILMERGE_KEY' => 'M',
  'LBL_MANAGE_SUBSCRIPTIONS' => 'Upravljanje pretplatama',
  'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Upravljanje pretplatama za',
  'LBL_MAP_BUTTON' => 'Mapa',
  'LBL_MARK_AS_FAVORITES' => 'Označi kao Omiljeno',
  'LBL_MASSUPDATE_DATE' => 'Izaberite datum',
  'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM' => 'Globalni tim ne može biti obrisan.',
  'LBL_MASSUPDATE_DELETE_USER_EXISTS' => 'Ovaj privatni tim [{0}] ne može biti obrisan dok je [{1}] korisnik obrisan.',
  'LBL_MASS_UPDATE' => 'Masovno ažuriranje',
  'LBL_MASS_UPDATE_ADD_FIELD' => 'Dodaj polje',
  'LBL_MASS_UPDATE_EMPTY_CONFIRM' => 'Postojeće vrednosti će biti izbrisane. Da li želite da nastavite?',
  'LBL_MASS_UPDATE_EMPTY_VALUES' => 'Sledeći atributi nemaju zadate vrednosti:',
  'LBL_MASS_UPDATE_JOB_QUEUED' => 'Vaš zahtev za grupnim ažuriranjem je zakazan.',
  'LBL_MASS_UPDATE_REMOVE_FIELD' => 'Ukloni polje',
  'LBL_MASS_UPDATE_SUCCESS' => 'Svi zapisi su uspešno ažurirani.',
  'LBL_MAXIMUM_OF' => 'Maksimum od',
  'LBL_MAX_DASHLETS_REACHED' => 'Broj Vaših Sugar dašleta dostigao je maksimum koji je podesio administrator. Molim, uklonite Sugar dašlet kako bi dodali novi.',
  'LBL_MEETING' => 'Sastanak',
  'LBL_MEETINGS' => 'Sastanci',
  'LBL_MEETINGS_SUBPANEL_TITLE' => 'Sastanci',
  'LBL_MEETING_GO_BACK' => 'Nazad na sastanak',
  'LBL_MEMBERS' => 'Članovi',
  'LBL_MEMBER_OF' => 'Član',
  'LBL_MEMORY_USAGE' => 'Zauzeće memorije (bajtova)',
  'LBL_MERGE' => 'Spoji',
  'LBL_MERGE_CONNECTORS' => 'Nabavi podatke',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_MERGE_DUPLICATES' => 'Spoji',
  'LBL_MERGE_DUPLICATES_CONFIRM' => 'Ovo će obrisati sledeće zapis(e):',
  'LBL_MERGE_DUPLICATES_FAIL_PROCESS' => 'Spajanje povezanih zapisa je nepotpuno. Neki zapisi nisu spojeni. Da li želite da nastavite?',
  'LBL_MERGE_DUPLICATES_PROCEED' => 'Da li želite da nastavite?',
  'LBL_MERGE_DUPLICATES_REMOVE' => 'Da li ste sigurni da želite da uklonite ovaj zapis iz spajanja?',
  'LBL_MERGE_DUPLICATES_REMOVE_TOOLTIP' => 'Ukloniti zapis iz spajanja',
  'LBL_MERGE_DUPLICATES_TITLE' => 'Spoj povezane zapise',
  'LBL_MERGE_DUPLICATES_WARNING_CLOSE' => 'Spajanje povezanih zapisa je nepotpuno. Neki zapisi nisu spojeni.',
  'LBL_MERGE_NO_ACCESS' => 'Nemate pristup za obavljanje ove radnje',
  'LBL_MERGE_NO_ACCESS_TO_A_FEW_RECORDS' => 'Jedan ili više odabranih zapisa ne može se izbrisati. Ti zapisi su uklonjeni sa liste za spajanje.',
  'LBL_MERGE_UNSAVED_CHANGES' => 'Izvršićete promenu glavnog zapisa bez čuvanje promena koje ste napravili. Sve promene će biti izgubljene. Da li želite da nastavite?',
  'LBL_MERIDIEM' => 'Podne',
  'LBL_MESSAGE_BOX_TITLE' => 'Uzbuna',
  'LBL_METHOD_NOT_ALLOWED' => 'HTTP metoda nije dozvoljena za ovaj resurs. Molimo kontaktirajte tehničku podršku.',
  'LBL_METHOD_NOT_ALLOWED_TITLE' => 'Metod nije dozvoljen',
  'LBL_MINUTES' => 'Minuta',
  'LBL_MISSING_CUSTOM_DELIMITER' => 'Morate navesti prilagođeni graničnik.',
  'LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_LINK_TEXT' => 'Email podešavanja',
  'LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_SUBJECT' => 'Nedostaju SMTPServer podešavanja',
  'LBL_MOBILE' => 'Mob. telefon:',
  'LBL_MOBILE_APP_VERSION' => 'Verzija aplikacije',
  'LBL_MOBILE_CHOOSE_DOC' => 'Izaberite dokument',
  'LBL_MOBILE_CHOOSE_LOCATION' => 'Izaberite lokaciju',
  'LBL_MOBILE_CHOOSE_PHONE' => 'Izaberite broj telefona',
  'LBL_MOBILE_CHOOSE_RECIPIENT' => 'Izaberite primalaca',
  'LBL_MOBILE_CHOOSE_URL' => 'Izaberite URL',
  'LBL_MOBILE_DELETE_CONFIRM' => 'Da li ste sigurni da želite da obrišete ovaj zapis?',
  'LBL_MOBILE_DESKTOP' => 'Desktop verzija',
  'LBL_MOBILE_DETAIL_SHOW_LESS' => '..Manje',
  'LBL_MOBILE_DETAIL_SHOW_MORE' => 'Više...',
  'LBL_MOBILE_DOC' => 'Dokument',
  'LBL_MOBILE_DOWNLOAD_COMPLETED' => 'Preuzimanje završeno: {{{this}}}',
  'LBL_MOBILE_DOWNLOAD_FAILED' => 'Preuzimanje neuspelo\\r\\n{{{this}}}',
  'LBL_MOBILE_DOWNLOAD_STARTED' => 'Preuzimanje počelo: {{{this}}}',
  'LBL_MOBILE_EDIT_REL' => 'Izmeni vezu',
  'LBL_MOBILE_FEEDBACK' => 'Povratna informacija',
  'LBL_MOBILE_LOGING_OUT' => 'Molim sačekajte dok se ne izlogujete...',
  'LBL_MOBILE_LOG_CALL_CONFIRM' => 'Da li bi ste želili da logujete svoj poslednji poziv?',
  'LBL_MOBILE_META_SYNC_FAILED' => 'Sinhronizacija sa serverom nije moguća. Da pokušam ponovo?',
  'LBL_MOBILE_META_SYNC_FAILED_RETRY' => 'Nemogućnost sinhronizacije sa serverom. Pokušati ponovo?',
  'LBL_MOBILE_NO_ACTIONS_AVAILABLE' => 'Nema Dostupnih Akcija',
  'LBL_MOBILE_NO_RECORDS' => 'Nema pronađenih zapisa',
  'LBL_MOBILE_PRIVACY_TERMS_CONDITIONS' => 'Privatnost, termini i uslovi',
  'LBL_MOBILE_PROCESSING_FILE' => 'Pripremam fajl...',
  'LBL_MOBILE_PROCESSING_IMAGE' => 'Priprema slike...',
  'LBL_MOBILE_PTR_PULL' => 'Povucite na dole za osvežavanje ...',
  'LBL_MOBILE_PTR_RELEASE' => 'Otpustite da osvežite ...',
  'LBL_MOBILE_RELOGIN_BUTTON' => 'Ponovno logovanje',
  'LBL_MOBILE_SEARCH_TEAMS' => 'Pretraži timove...',
  'LBL_MOBILE_SELECT_TEAMS' => 'Odaberi timove',
  'LBL_MOBILE_SERVER_URL' => 'URL Servera:',
  'LBL_MOBILE_SERVER_VERSION' => 'Verzija servera',
  'LBL_MOBILE_SHOW_MORE' => 'Pokaži više...',
  'LBL_MOBILE_SHOW_MORE_TOP' => 'Pokaži više...',
  'LBL_MOBILE_SUPPORT' => 'Podrška',
  'LBL_MOBILE_TUTORIAL_CONTROL_PANEL' => 'Koristiti strelice koje se nalaze ispod za brzi tutorijal kroz ključne komponente ovog menija.',
  'LBL_MOBILE_TUTORIAL_DETAIL_BACK' => 'Vrati se na prethodnu stranicu.',
  'LBL_MOBILE_TUTORIAL_DETAIL_BACK_TABLET' => 'Nazad.',
  'LBL_MOBILE_TUTORIAL_DETAIL_CARD' => 'Najvažnije informacije o zapisu.',
  'LBL_MOBILE_TUTORIAL_DETAIL_FOLLOW' => 'Prati/Ne prati zapis.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO' => 'Ovo je stranica sa detaljima.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO_TEXT' => 'Detaljni prikaz se otvara s desne strane Vašeg ekrana.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO_TITLE' => 'Detaljni pregled',
  'LBL_MOBILE_TUTORIAL_DETAIL_RECORD_ACTIONS' => 'Dostupne akcije na zapisu.',
  'LBL_MOBILE_TUTORIAL_DETAIL_RELATE_LINK' => 'Kliknite kako biste otvorili srodni zapis.',
  'LBL_MOBILE_TUTORIAL_DETAIL_RIGHT_ACTION' => 'Pogledajte dodatne informacije ili uredite zapis.',
  'LBL_MOBILE_TUTORIAL_DETAIL_SHOW_MORE' => 'Kliknuti za vise detaljnih informacija.',
  'LBL_MOBILE_TUTORIAL_HOME_CREATE' => 'Dostupe akcije u pogledu.',
  'LBL_MOBILE_TUTORIAL_HOME_END' => 'Uživajte u svim novim mogućnostima!',
  'LBL_MOBILE_TUTORIAL_HOME_FAVORITES_BTN' => 'Filtrirajte listu kako bi prikazali moje omiljene zapise.',
  'LBL_MOBILE_TUTORIAL_HOME_FAVORITES_ICON' => 'Označite zapis kao omiljeni.',
  'LBL_MOBILE_TUTORIAL_HOME_GRIP' => 'Dostupne akcije nad zapisom',
  'LBL_MOBILE_TUTORIAL_HOME_INTRO' => 'Dobrodošli u SugarCRM.<br/><br/> Dozvolite nam da naznačimo nekoliko novih funkcionalnosti...',
  'LBL_MOBILE_TUTORIAL_HOME_LOGO' => 'Navigacija u glavnom meniju.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_DESKTOP' => 'Otvori Sugar u web browseru.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO' => 'Ovo je home meni.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO_TEXT' => 'Glavni meni se otvara s leve strane Vašeg ekrana.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO_TITLE' => 'Prikaz glavnog menija.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_LOGO' => 'Zatvori home meni.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_MODULES' => 'Pogledaj određeni modul',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_PROFILE' => 'Pogledaj svoj profil.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_SETTINGS' => 'Kastomizuj aplikaciju',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_TOUR' => 'Pristupite tutorijalu u bilo kom trenutku.',
  'LBL_MOBILE_TUTORIAL_HOME_MY_ITEMS_BTN' => 'Filtrirajte listu kako bi prikazali zapise dodeljene meni.',
  'LBL_MOBILE_TUTORIAL_HOME_RECENT' => 'Najskorije modifikovani zapisi.',
  'LBL_MOBILE_TUTORIAL_HOME_SEARCH' => 'Globalna pretraga za zapise.',
  'LBL_MOBILE_TUTORIAL_HOME_UPCOMING' => 'Moji predstojeći događaji koji počinju danas.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_ACTIONS' => 'Odaberite specifičnu akciju koji bi pogled trebao da izvrši.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_CREATE' => 'Zatvori plus meni.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_INTRO' => 'Ovo je plus meni.',
  'LBL_MOBILE_UNLINK_CONFIRM' => 'Da li ste sigurni da želite da otkačite ovaj zapis?',
  'LBL_MOBILE_UPLOAD_IN_PROGRESS' => 'Otpremanje fajla...',
  'LBL_MOBILE_UPLOAD_SUCCESS' => 'Fajl uspešno otpremljen',
  'LBL_MOBILE_WAIT' => 'Molim vas sačekajte...',
  'LBL_MODIFIED' => 'Promenio',
  'LBL_MODIFIED_BY_USER' => 'Promenio korisnik',
  'LBL_MODIFIED_ID' => 'ID broj korisnika koji je promenio',
  'LBL_MODIFIED_NAME' => 'Ime korisnika koji je promenio',
  'LBL_MODIFIED_USER' => 'Promenio korisnik',
  'LBL_MODIFY_CURRENT_SEARCH' => 'Promeni tekuću pretragu',
  'LBL_MODULE' => 'Modul',
  'LBL_MODULE_ALL' => 'Svi',
  'LBL_MODULE_ATTACHMENTS_TITLE' => '{{module}} prilozi',
  'LBL_MODULE_FILTER' => 'Filtriraj po',
  'LBL_MODULE_NAME' => 'Naziv modula',
  'LBL_MODULE_TYPE' => 'Tip',
  'LBL_MONITOR_ID' => 'ID broj monitora',
  'LBL_MONTH_TIMEPERIOD_FORMAT' => '{0}',
  'LBL_MORE' => 'više',
  'LBL_MOREDETAIL' => 'Više detalja',
  'LBL_MORE_ACTION' => 'Više akcija',
  'LBL_MORE_HISTORY' => 'Još istorije...',
  'LBL_MORE_MODULES' => 'Više modula',
  'LBL_MY_ACCOUNT' => 'Moja podešavanja',
  'LBL_MY_AREA_LINKS' => 'Moji oblasni linkovi',
  'LBL_NAME' => 'Naziv',
  'LBL_NAVIGATE_TO_REPORTS' => 'Prelazite na modul Izveštaji. Vaše izmene dašleta neće biti sačuvane. Nastaviti dalje?',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => 'Kreiraj',
  'LBL_NEW_BUTTON_TITLE' => 'Kreiraj [Alt+N]',
  'LBL_NEW_PAGE_FEEDBACK' => 'Kreirali ste novu stranicu. Novi sadržaj možete dodati opcijom Dodaj Sugar dašlet.',
  'LBL_NEW_PASSWORD1' => 'Nova lozinka',
  'LBL_NEW_PASSWORD2' => 'Potvrdite lozinku',
  'LBL_NEW_USER_PASSWORD_1' => 'Lozinka je uspešno promenjena.',
  'LBL_NEW_WEB_VERSION' => 'Nova verzija SugarCRM Mobile je dostupna. Da li želite ažuriranje?',
  'LBL_NEXT_BUTTON_LABEL' => 'Sledeći',
  'LBL_NEXT_FRIDAY' => 'sledeći petak',
  'LBL_NEXT_MONDAY' => 'sledeći ponedeljak',
  'LBL_NEXT_MONTH' => 'sledećeg meseca',
  'LBL_NEXT_TIMEPERIOD' => 'Budući Vremenski Period',
  'LBL_NEXT_WEEK' => 'sledeće nedelje',
  'LBL_NEXT_YEAR' => 'sledeća godina',
  'LBL_NO' => 'Ne',
  'LBL_NONE' => '-nema-',
  'LBL_NOTES' => 'Beleške',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Beleške',
  'LBL_NOTIFICATIONS' => 'Obaveštenja',
  'LBL_NOT_AUTHORIZED' => 'Niste ovlašćeni da vidite ovaj zapis',
  'LBL_NOT_AVAILABLE' => 'nije dostupno',
  'LBL_NO_ACCESS' => '(Nemate pristup)',
  'LBL_NO_ACCESS_LOWER' => 'Korisnik nema pristup ovom zapisu',
  'LBL_NO_ACTION' => 'Ne postoji akcija sa tim imenom.',
  'LBL_NO_DATA' => 'Nema podataka',
  'LBL_NO_DATA_AVAILABLE' => 'Nema dostupnih podataka.',
  'LBL_NO_FIELD_ACCESS' => 'Nemate pristup',
  'LBL_NO_FLASH_PLAYER' => 'Ili imate isključen Abobe Flash ili koristite stariju verziju Abobe Flash Player-a. Da bi ste nabavili poslednju verziju Flash Player-a, <a href="http://www.adobe.com/go/getflashplayer/">kliknite ovde</a>.',
  'LBL_NO_IMAGE' => 'Nema slike',
  'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Nije dostupno ni jedno polje za operaciju masovnog ažuriranja',
  'LBL_NO_PDF_TEMPLATE' => 'Nije pronađen PDF šablon.',
  'LBL_NO_RECORDS_FOUND' => '- 0 zapisa nađeno -',
  'LBL_NUMBER_OF_COLUMNS' => 'Izaberite broj kolona',
  'LBL_OBJECT_IMAGE' => 'slika objekta',
  'LBL_OC_DEFAULT_STATUS' => 'Neaktivan',
  'LBL_OC_STATUS' => 'Status Offline klijenta',
  'LBL_OC_STATUS_TEXT' => 'Označava da li trenutni korisnik ima mogućnost korišćenja Offline klijenta.',
  'LBL_OFFLINE_CLEAN_UP_PROMPT' => 'Ova akcija će obrisati zapise kojima niste pristupali duže vreme. Nastaviti?',
  'LBL_OFFLINE_CLEAR_DB' => 'Obriši skladište...',
  'LBL_OFFLINE_CLEAR_DB_PROMPT' => 'Da li želite da obrišete sve zapise sa lokalnog skladišta?',
  'LBL_OFFLINE_COMPACT_DB' => 'Kompaktno Skladište...',
  'LBL_OFFLINE_DB_CLEANING_COMPLETED' => 'Čišćenje završeno',
  'LBL_OFFLINE_DB_CLEANING_IN_PROGRESS' => 'Brisanje skladišta...',
  'LBL_OFFLINE_DB_SIZE' => 'Veličina baze podataka',
  'LBL_OFFLINE_DELETED' => 'Zapis nije pronađen.',
  'LBL_OFFLINE_DELETED_RELATED' => 'Povezani zapis nije pronađen. Verovatno je obrisan ili je veza raskinuta.',
  'LBL_OFFLINE_DISABLED' => 'Offline režim isključen',
  'LBL_OFFLINE_DISABLE_PROMPT' => 'Da li želite da isključite offline podršku? Sve izmene koji čekaju sinhronizaciju će biti izgubljeni.',
  'LBL_OFFLINE_ENABLED' => 'Offline režim uključen',
  'LBL_OFFLINE_ENABLE_PROMPT' => 'Da li ste sigurni da hoćete da isključite offline podršku?',
  'LBL_OFFLINE_LAST_SYNC_TS' => 'Poslednji pokušaj sinhronizacije: {{ts}}',
  'LBL_OFFLINE_MERGE_DATA_CONFIRM' => 'Neko je izmenuio isti zapis na serveru. Potvrdite za automatsko spajanje vaših izmena ili otkažite za odbacivanje promena.',
  'LBL_OFFLINE_MODE' => 'Offline Režim',
  'LBL_OFFLINE_PREFETCHING' => 'Učitavanje zapisa...',
  'LBL_OFFLINE_PREFETCHING_EST_TIME' => 'Preostalo vreme je oko {{estimatedTime}} sekundi...',
  'LBL_OFFLINE_PREFETCHING_MODULE' => 'Učitavanje modula {{module}} {{progressValue}}...',
  'LBL_OFFLINE_PREFETCHING_MODULE_COMPLETE' => 'Učitavanje modula {{module}} završeno',
  'LBL_OFFLINE_PREFETCH_ACTION' => 'Preuzmi sve zapise...',
  'LBL_OFFLINE_PREFETCH_ERROR' => 'Greška pri preuzimanju zapisa',
  'LBL_OFFLINE_PREFETCH_FIRST_PROMPT' => 'Da li želite da vaši dodeljeni, omiljeni i zapisi koje pratite budu preuzeti za offline pristup? Brza konekcija je preporučena jer ova operacija može da potraje neko vreme. Možete kasnije da preuzmete iz Meni > Offline.',
  'LBL_OFFLINE_PREFETCH_PROMPT' => 'Preuzimanje vaših dodeljenih, omiljenih i zapisa koje pratite za offline pristup mogu potrajati neko vreme za završetak. Brza konekcija je preporučena. Da li želite da nastavite?',
  'LBL_OFFLINE_PREFETCH_SUCCESS' => 'Zapisi uspešno preuzeti',
  'LBL_OFFLINE_RECORDS_PER_MODULE' => 'Zapisa po modulu',
  'LBL_OFFLINE_ROLLBACK_FAILED' => 'Vraćanje izmene neuspelo',
  'LBL_OFFLINE_ROLLBACK_PROMPT' => 'Da li želite da vratite ovu izmenu',
  'LBL_OFFLINE_ROLLBACK_SUCCESS' => 'Vraćanje izmene završeno',
  'LBL_OFFLINE_SERVER_FETCH' => 'Preuzimanje sa servera...',
  'LBL_OFFLINE_SETTINGS' => 'Podešavanje otklanjanja grešaka',
  'LBL_OFFLINE_STATS' => 'Statistika skladišta',
  'LBL_OFFLINE_STATUS_BAD_NETWORK' => 'Pristup serveru nije uspeo.',
  'LBL_OFFLINE_STATUS_NO_PENDING_TX' => 'Nema izmena koji čekaju sinhronizaciju.',
  'LBL_OFFLINE_STATUS_OFFLINE' => 'Uređaj nije na mreži.',
  'LBL_OFFLINE_STATUS_ONLINE' => 'Uređaj je na mreži.',
  'LBL_OFFLINE_STATUS_PENDING_TX' => 'Izmene čekaju sinhronizaciju.',
  'LBL_OFFLINE_STATUS_SYNC_FAILED' => 'Posledni pokušaj sinhronizacije nije uspeo. Proverite log transakcija.',
  'LBL_OFFLINE_SYNC_IN_PROGRESS' => 'Sinhronizacija u toku...',
  'LBL_OFFLINE_TOTAL_RECORDS_COUNT' => 'Ukupan broj zapisa',
  'LBL_OFFLINE_TRANSACTION_SYNCED' => 'Transkacija sinhronizovana.',
  'LBL_OK' => 'OK',
  'LBL_OLD_ACCOUNT_LINK' => 'Stara kompanija',
  'LBL_ONLY_IMAGE_ATTACHMENT' => 'Moguće je dodavanje isključivo slika',
  'LBL_OPENALL_BUTTON_KEY' => 'O',
  'LBL_OPENALL_BUTTON_LABEL' => 'Otvori sve',
  'LBL_OPENALL_BUTTON_TITLE' => 'Otvori sve [Alt+O]',
  'LBL_OPENTO_BUTTON_KEY' => 'T',
  'LBL_OPENTO_BUTTON_LABEL' => 'Otvori za:',
  'LBL_OPENTO_BUTTON_TITLE' => 'Otvori za: [Alt+T]',
  'LBL_OPEN_ITEMS' => 'Otvorene stavke:',
  'LBL_OPERATOR_IN_TEXT' => 'je jedan od sledećih:',
  'LBL_OPERATOR_NOT_IN_TEXT' => 'nije jedan od sledećih:',
  'LBL_OPPORTUNITIES' => 'Prodajne prilike',
  'LBL_OPPORTUNITY' => 'Prodajna prilika',
  'LBL_OPPORTUNITY_METRICS' => 'Pokazatelji prilike za prodaju',
  'LBL_OPPORTUNITY_NAME' => 'Ime prodajne prilike:',
  'LBL_OPTIONAL' => 'Opciono',
  'LBL_OPTIONS' => 'Opcije',
  'LBL_OPT_OUT_FLAG_PRIMARY' => 'Odjavi primarni Email',
  'LBL_OR' => 'ILI',
  'LBL_ORG_CHART' => 'Organizaciona šema',
  'LBL_ORG_CHART_DESC' => 'Prikazuje strukturu zaposlenih u vašoj organizaciji.',
  'LBL_ORG_CHART_TOOLTIP_NODES' => 'Prikaži sve tačke',
  'LBL_ORG_CHART_TOOLTIP_TOGGLE' => 'Podesite orijanteciju',
  'LBL_ORG_CHART_TOOLTIP_ZOOM' => 'Uvećati da se uklopi',
  'LBL_OUTBOUND_EMAIL_ADD_SERVER' => 'Dodaj Server...',
  'LBL_OVERDUE' => 'U kašnjenju',
  'LBL_OVERWRITE_POPULATED_DATA_FROM' => 'Od:',
  'LBL_OVERWRITE_POPULATED_DATA_TO' => 'Za:',
  'LBL_PAGE_NAME' => 'Naziv stranice',
  'LBL_PANEL_ADVANCED' => 'Više informacija',
  'LBL_PANEL_ASSIGNMENT' => 'Ostalo',
  'LBL_PANEL_BODY' => 'Pregled',
  'LBL_PANEL_DEFAULT' => 'Podrazumevano',
  'LBL_PARENT_TYPE' => 'Matični tip',
  'LBL_PASSWORD' => 'Lozinka',
  'LBL_PASSWORD_REQUEST_ERROR' => 'Došlo je do problema pri preuzimanju kombinacije vašeg korisničkog imena i email-a.',
  'LBL_PASSWORD_REQUEST_SENT' => 'Vaš zahtev je podnet.',
  'LBL_PASSWORD_UPDATE_GENERIC_ISSUE' => 'Greška: Došlo je do problema sa izmenom šifre ovog korisnika.',
  'LBL_PA_PRODEF_HAS_PENDING_PROCESSES' => 'Ne možete izbrisati ovu procesnu definiciju zato što poseduje procese koji čekaju da se pokrenu.',
  'LBL_PDF_EMAIL' => 'Pošalji PDF email-om',
  'LBL_PDF_VIEW' => 'Preuzmi PDF',
  'LBL_PENDING_NOTIFICATIONS' => 'Obaveštenja',
  'LBL_PERCENTAGE_SYMBOL' => '%',
  'LBL_PHASE' => 'Opseg',
  'LBL_PICTURE_FILE' => 'Slika',
  'LBL_PLANNED_ACTIVITIES_DASHLET' => 'Planirane aktivnosti',
  'LBL_PLANNED_ACTIVITIES_DASHLET_CONFIRM_CLOSE' => 'Da li ste sigruni da želite da obeležite {0} kao zatvoreno?',
  'LBL_PLANNED_ACTIVITIES_DASHLET_DESCRIPTION' => 'Dešlet planiranih aktivnosti prikazuje zakazane sastanke i pozive.',
  'LBL_PLANNED_ACTIVITIES_DASHLET_FUTURE_BUTTON_LABEL' => 'U budućnosti',
  'LBL_PLANNED_ACTIVITIES_DASHLET_GROUP_BUTTON_LABEL' => 'Timska istorija',
  'LBL_PLANNED_ACTIVITIES_DASHLET_HELD_ACTIVITY' => 'Održan',
  'LBL_PLANNED_ACTIVITIES_DASHLET_TODAY_BUTTON_LABEL' => 'Danas',
  'LBL_PLANNED_ACTIVITIES_DASHLET_USER_BUTTON_LABEL' => 'Moja istorija',
  'LBL_PLEASE_SELECT' => 'Molim, izaberite',
  'LBL_PLUGINS_DESC' => 'Pročitajte o  funkcijama dodataka u <a href="https://www.sugarcrm.com/crm/support/documentation/SugarPlugIns">Plug-Ins Documentation</a>.',
  'LBL_PLUGINS_LOTUS_TITLE' => 'Sugar dodatak za Lotus Notes<sup>TM</sup>',
  'LBL_PLUGINS_TITLE' => 'Sugar dodaci za Microsoft Office<sup>TM</sup>',
  'LBL_PLUGIN_EXCEL_DESC' => 'Integriše Sugar sa tabelama za bolju analizu ključne metrike.',
  'LBL_PLUGIN_EXCEL_NAME' => 'Sugar dodatak za Excel',
  'LBL_PLUGIN_LOTUS_DESC' => 'Integriši Sugar sa Notus Notes.',
  'LBL_PLUGIN_LOTUS_NAME' => 'Sugar dodatak za Lotus Notes',
  'LBL_PLUGIN_OUTLOOK_DESC' => 'Integrišite informacije Sugar email-a i kalendara sa Microsoft Outlook-om.',
  'LBL_PLUGIN_OUTLOOK_NAME' => 'Sugar dodatak za Outlook',
  'LBL_PLUGIN_WORD_DESC' => 'Automatski popunjava informacije iz SugarCRM-a u oblik slova, direktnan mail  i druge Microsoft dokumente.',
  'LBL_PLUGIN_WORD_NAME' => 'Sugar dodatak za Word',
  'LBL_PLUS_INLINE' => 'Dodaj',
  'LBL_PMSE_ALL_PROCESSES_LABEL' => 'Svi procesi',
  'LBL_PMSE_BUSINESS_RULES_DASHLET' => 'Pravila procesnog poslovanja',
  'LBL_PMSE_BUSINESS_RULES_DASHLET_DESCRIPTION' => 'Dešlet Pravila Procesnog Poslovanja prikazuje šablone koji se mogu koristiti unutar Procesnog Autora.',
  'LBL_PMSE_CANCELLED_STATUS' => 'Otkazano',
  'LBL_PMSE_COMPLETED_STATUS' => 'Završeno',
  'LBL_PMSE_EMAIL_TEMPLATES_DASHLET' => 'Šablon procesnog Email-a',
  'LBL_PMSE_EMAIL_TEMPLATES_DASHLET_DESCRIPTION' => 'Dešlet Šabloni Procesnog Email-a prikazuju šablone koji se mogu koristiti unutar Procesnog Autora.',
  'LBL_PMSE_ERROR_STATUS' => 'Greška',
  'LBL_PMSE_IN_PROGESS_STATUS' => 'U toku',
  'LBL_PMSE_PROCESSES_DASHLET' => 'Procesi',
  'LBL_PMSE_PROCESSES_DASHLET_DESCRIPTION' => 'Dešlet Procesi prikazuje šablone koji se mogu koristiti unutar Procesnog Autora.',
  'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET' => 'Procesne definicije',
  'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET_DESCRIPTION' => 'Dešlet Procesne Definicije prikazuje šablone koji se mogu koristiti unutar Procesnog Autora.',
  'LBL_PMSE_PROCESS_STATUS_CHART_DESCRIPTION' => 'Opis statusnih procesa',
  'LBL_PMSE_PROCESS_STATUS_CHART_NAME' => 'Suma statusnih procesa',
  'LBL_PMSE_PROCESS_USERS_CHART_DESCRIPTION' => 'Nerešene aktivnosti prema procesima',
  'LBL_PMSE_PROCESS_USERS_CHART_NAME' => 'Nerešene aktivnosti prema procesima',
  'LBL_PMSE_PROCESS_USERS_CHART_NAME_RECORD' => 'Nerešene aktivnosti',
  'LBL_PMSE_SETTINGS' => 'Podešavanja',
  'LBL_PMSE_TERMINATED_STATUS' => 'Prekinut',
  'LBL_PORTAL_AUTH_FAILED' => 'Autentikacija klijenta nije uspela',
  'LBL_PORTAL_AUTH_FAILED_TITLE' => 'Pogrešan klijent',
  'LBL_PORTAL_ERROR' => 'Greška:',
  'LBL_PORTAL_INVALID_CREDS' => 'Kombinacija korisničko ime / lozinka nije dobra, molimo pokušajte ponovo.',
  'LBL_PORTAL_INVALID_CREDS_TITLE' => 'Pogrešni kredencijali',
  'LBL_PORTAL_INVALID_GRANT' => 'Vaš token nije validan ili je istekao. Molimo prijavite se ponovo.',
  'LBL_PORTAL_INVALID_GRANT_TITLE' => 'Token je istekao',
  'LBL_PORTAL_INVALID_REQUEST' => 'Zahtev je nevalidan ili pogrešan. Molimo kontaktirajte tehničku podršku.',
  'LBL_PORTAL_INVALID_REQUEST_TITLE' => 'Nevalidan zahtev',
  'LBL_PORTAL_LOADING' => 'Učitavanje',
  'LBL_PORTAL_LOGIN_FORGOTPASSWORD' => 'Potrebno je da kontaktirate Vašeg Sugar administratora kako biste resetovali lozinku.',
  'LBL_PORTAL_LOGIN_PASSWORD' => 'Lozinka:',
  'LBL_PORTAL_LOGIN_USERNAME' => 'Korisničko ime',
  'LBL_PORTAL_METHOD_NOT_ALLOWED' => 'HTTP metoda nije dozvoljena za ovaj resurs. Molimo kontaktirajte tehničku podršku.',
  'LBL_PORTAL_METHOD_NOT_ALLOWED_TITLE' => 'HTTP Greška: 405 Metod nije dozvoljen',
  'LBL_PORTAL_MIN_MODULES' => 'Kao minimum, neophodno je da imate omogućene module Slučajevi, Bagovi ili Baza znanja kako biste koristili ovu aplikaciju.',
  'LBL_PORTAL_NOT_ENABLED_MSG' => 'Žao nam je, ali ova funkcionalnost trenutno nije dostupna.',
  'LBL_PORTAL_OFFLINE' => 'Žao nam je, ali aplikacija trenutno nije dostupna. Molimo kontaktirajte administratora sajta.',
  'LBL_PORTAL_PAGE_NOT_AVAIL' => 'Strana nije dostupna.',
  'LBL_PORTAL_PRECONDITION_MISSING' => 'Greška u obradi zahteva ili nedostaju / nevalidni su neki parametri. Molimo kontaktirajte tehničku podršku.',
  'LBL_PORTAL_PRECONDITION_MISSING_TITLE' => 'HTTP Greška: 412',
  'LBL_PORTAL_REQUEST_TIMEOUT' => 'Zahtevu je isteklo vreme',
  'LBL_PORTAL_REQUEST_TIMEOUT_TITLE' => 'Vreme zahteva',
  'LBL_PORTAL_RESOURCE_UNAVAILABLE' => 'Resurs nije dostupan.',
  'LBL_PORTAL_RESOURCE_UNAVAILABLE_TITLE' => 'HTTP Greška: 403 Pristup je zabranjen',
  'LBL_PORTAL_ROUTE_ERROR' => 'Problem u učitavanju modula. Molimo pokušajte kasnije ili kontaktirajte podršku.',
  'LBL_PORTAL_SAVING' => 'Čuvanje',
  'LBL_PORTAL_SEARCH' => 'Pretraga po imenu, broju',
  'LBL_PORTAL_SEARCH_RESULTS_TITLE' => 'Prikaži rezultate pretrage za "{query}"',
  'LBL_PORTAL_SIGNUP' => 'Predstavnik korisničkog servisa će Vas kontaktirati u najkraćem roku da kofiguriše Vaš nalog.',
  'LBL_PORTAL_SIGNUP_COMPANY' => 'Kompanija',
  'LBL_PORTAL_SIGNUP_COUNTRY' => 'Država:',
  'LBL_PORTAL_SIGNUP_EMAIL' => 'Email',
  'LBL_PORTAL_SIGNUP_FIRST_NAME' => 'Ime',
  'LBL_PORTAL_SIGNUP_JOBTITLE' => 'Titula',
  'LBL_PORTAL_SIGNUP_LAST_NAME' => 'Prezime',
  'LBL_PORTAL_SIGNUP_PHONE' => '(###) ###-#### (opciono)',
  'LBL_PORTAL_SIGNUP_PROCESS' => 'Registrovanje',
  'LBL_PORTAL_SIGNUP_STATE' => 'Opština:',
  'LBL_PORTAL_SIGNUP_TITLE' => 'Hvala na prijavi!',
  'LBL_PORTAL_THEME' => 'Portal sa temama',
  'LBL_PORTAL_TOUR_RECORD_ADD_NOTE' => 'Kliknite ovde da dodate belešku na ovaj zapis.',
  'LBL_PORTAL_TOUR_RECORD_DETAILS' => 'Prikaz zapisa vam omogućava da vidite detalje o tom zapisu.',
  'LBL_PORTAL_TOUR_RECORD_NOTES' => 'Poruke vam omogućavaju saradnju sa drugim korisnicima portala kao i sa predstavnicima podrške',
  'LBL_PORTAL_TOUR_RECORD_VIEW_NOTE' => 'Kliknite na ove ikonice za prikaz detalja o priloženim beleškama',
  'LBL_PORTAL_UNAUTHORIZED' => 'Žao nam je, ali izgleda da niste autorizovani da pristupite ovom resursu.',
  'LBL_PORTAL_UNAUTHORIZED_TITLE' => 'HTTP Greška: 401 Niste autorizovani',
  'LBL_PORTAL_WELCOME_INFO' => 'Sugar portal je okvir koji omogućava korisnicima da u realnom vremenu pogledaju slučajeve, defekte & biltene, itd. Ovo je spoljni interfejs Sugar-a koji može da se rasporedi u okviru bilo koje internet prezentacije. Ostanite u toku za više uslužnih korisničkih funkcionalnosti kao što je Upravljanje projektima i Forumima u našim budućim izdanjima.',
  'LBL_PORTAL_WELCOME_TITLE' => 'Dobrodošli u  Sugar portal 5.1.0',
  'LBL_POSTAL_CODE' => 'Poštanski broj:',
  'LBL_POWERED_BY_SUGARCRM' => 'Pokreće SugarCRM',
  'LBL_PRECONDITION_MISSING' => 'Greška u obradi zahteva ili nedostaju / nevalidni su neki parametri. Molimo kontaktirajte tehničku podršku',
  'LBL_PRECONDITION_MISSING_TITLE' => 'Greška:',
  'LBL_PREFERRED_LANGUAGE' => 'Preferirani jezik',
  'LBL_PREVIEW' => 'Pregled',
  'LBL_PREVIEW_BWC_TOOLTIP' => 'Nasledni moduli se ne mogu prikazati',
  'LBL_PREVIEW_DISABLED_ATTACHMENT' => 'Pregled je isključen: Nema dostupnih podataka.',
  'LBL_PREVIEW_DISABLED_DELETED_OR_NO_ACCESS' => 'Pregled je onemogućen: Zapis je obrisan ili nedostaje pristup zapisu',
  'LBL_PREVIEW_DISABLED_NO_ACCESS' => 'Pregled je onemogućen: Nedostaje pristup podacima',
  'LBL_PREVIEW_DISABLED_NO_RECORD' => 'Pregled je isključen: Nema dostupnih podataka.',
  'LBL_PREVIEW_DISABLED_SAME_RECORD' => 'Pregled nije moguć: Zapis se trenutno prikazuje',
  'LBL_PREVIOUS_CURRENT_NEXT_TIMEPERIODS' => 'Prethodni, Sadašnji, Budući',
  'LBL_PREVIOUS_TIMEPERIOD' => 'Prethodni Vremenski Period',
  'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Grad primarne adrese:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Država primarne adrese:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Poštanski broj primarne adrese:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Pokrajina primarne adrese:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Ulica primarne adrese:',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Ulica br.2 primarne adrese:',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Ulica br.3 primarne adrese:',
  'LBL_PRINT' => 'Štampanje',
  'LBL_PROCESSING_REQUEST' => 'Obrada..',
  'LBL_PRODUCTS' => 'Proizvodi',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Proizvodi',
  'LBL_PRODUCT_BUNDLES' => 'Kompleti proizvoda',
  'LBL_PRODUCT_TEMPLATES' => 'Šabloni proizvoda',
  'LBL_PROFILE' => 'Profil',
  'LBL_PROJECTS' => 'Projekti',
  'LBL_PROJECT_MINUS' => 'Ukloni',
  'LBL_PROJECT_PLUS' => 'Dodaj',
  'LBL_PROJECT_TASKS' => 'Projektni zadaci',
  'LBL_PROSPECTS' => 'Ciljevi',
  'LBL_PRO_DELETE_CONFIRMATION' => 'Da li ste sigurni da želite da obrišete ovaj zapis?',
  'LBL_PRO_DISABLE' => 'Ažuriranje',
  'LBL_PRO_DISABLE_CONFIRMATION' => 'Da li ste sigurni da želite da onesposobite ovaj zapis?',
  'LBL_PRO_ENABLE' => 'Ažuriranje',
  'LBL_PRO_ENABLE_CONFIRMATION' => 'Da li ste sigurni da želite da dozvolite ovaj zapis?',
  'LBL_QUARTER_TIMEPERIOD_FORMAT' => '{1} Q{0}',
  'LBL_QUERY_CHILD' => 'Važeći pod-upit',
  'LBL_QUERY_ERROR' => 'Greška!',
  'LBL_QUERY_HASH' => 'SQL Hash',
  'LBL_QUERY_VALID' => 'Važeći',
  'LBL_QUESTION_MARK' => '?',
  'LBL_QUICKEDIT_NODEFS_NAVIGATION' => 'Navigacija u toku...',
  'LBL_QUICK_CREATE_MENU' => 'Brzo kreiranje menija',
  'LBL_QUICK_CREATE_TITLE' => 'Brzo kreiranje',
  'LBL_QUOTES' => 'Ponude',
  'LBL_QUOTES_SHIP_TO' => 'Ponude dostaviti',
  'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
  'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Kreiraj prodajnu priliku iz ponude',
  'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Kreiraj prodajnu priliku iz ponude [Alt+O]',
  'LBL_RECENTLY_UPDATED' => 'Skoro ažurirano',
  'LBL_RECENTS' => 'Skorašnji',
  'LBL_RECOMMENDED_INVITES' => 'Predloženi pozivi',
  'LBL_RECORD_BODY' => 'Vizit karta',
  'LBL_RECORD_DELETED' => '(Zapis obrisan)',
  'LBL_RECORD_HEADER' => 'Naslov zapisa',
  'LBL_RECORD_NOT_FOUND' => 'Zapis nije pronađen.',
  'LBL_RECORD_SAVED' => 'Zapis sačuvan.',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Uspešno ste napravili zapis, ali nemate dovoljna ovlašćenja da pristupite zapisu.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Uspešno ste napravili {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a>.',
  'LBL_RECORD_SHARE_BUTTON' => 'Podeli',
  'LBL_RECORD_SHOWMORE' => 'Prikaži više',
  'LBL_REDIRECT_URL' => 'URL za preusmeravanje',
  'LBL_REFINE_LIST' => 'Refinisati listu',
  'LBL_RELATED' => 'Povezan',
  'LBL_RELATED_CAMPAIGN' => 'Povezane kampanje',
  'LBL_RELATED_CONTACT' => 'Povezani kontakti',
  'LBL_RELATED_INFORMATION' => 'Povezana informacija',
  'LBL_RELATED_MODULE' => 'Povezani {{{this}}}',
  'LBL_RELATED_MODULE_PLURAL' => 'Povezani {{{this}}}',
  'LBL_RELATED_RECORDS' => 'Povezani zapisi',
  'LBL_RELATED_RECORD_NOT_FOUND' => 'Srodni zapis nije pronađen',
  'LBL_RELATIONSHIP' => 'Veza',
  'LBL_RELOAD_PAGE' => 'Molim <a href=\\"javascript: window.location.reload()\\">otvorite ponovo prozor</a> da bi koristili ovaj Sugar dašlet.',
  'LBL_REMINDERS' => 'Podsetnici',
  'LBL_REMINDERS_FINISHED' => 'Gotovo!',
  'LBL_REMINDERS_NONE_FOUND' => 'Nisu pronađeni podsetnici.',
  'LBL_REMINDERS_OVERDUE' => 'U kašnjenju',
  'LBL_REMINDERS_UPCOMING' => 'Nadolazeće',
  'LBL_REMINDER_TITLE' => 'Podsetnik',
  'LBL_REMOVE' => 'Ukloni',
  'LBL_REMOVED_DASHLET' => 'Sugar dašlet je uklonjen',
  'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Ukloni sva polja',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Da li ste sigurni da želite da uklonite Sugar dašlet?',
  'LBL_REMOVE_DASHLET_ROW_CONFIRM' => 'Da li ste sigurni da želite da uklonite red?',
  'LBL_REMOVE_FROM_FAVORITES' => 'Ukloni iz Moje omiljene',
  'LBL_REMOVE_MODULE_ENTRY' => 'Da li ste sigurni da hoćete da onemogućite integraciju konektora za ovaj modul?',
  'LBL_REMOVE_PRIMARY_TEAM_ERROR' => 'Greška prilikom pokušaja uklanjanja osnovnog tima id [{0}] za [{1}] modul sa id [{2}]',
  'LBL_REMOVING_ATTACHMENT' => 'Uklanjam prilog...',
  'LBL_REMOVING_DASHLET' => 'Uklanjam Sugar dašlet...',
  'LBL_RENAME_PAGE' => 'Preimenuj stranu',
  'LBL_REPLACE_BUTTON' => 'Zameni',
  'LBL_REPORTS_TO' => 'Nadređeni',
  'LBL_REPORT_AUTO_REFRESH' => 'Automatsko ažuriranje',
  'LBL_REPORT_EDIT' => 'Izmena izabranog izveštaja',
  'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Broj',
  'LBL_REPORT_SELECT' => 'Izaberite izveštaj',
  'LBL_REQUEST_PASSWORD' => 'Traži šifru',
  'LBL_REQUEST_PROCESSED' => 'Završeno',
  'LBL_REQUEST_TIMEOUT' => 'Zahtevu je isteklo vreme',
  'LBL_REQUEST_TIMEOUT_TITLE' => 'Vreme zahteva',
  'LBL_REQUIRED_FIELD' => 'Obavezno',
  'LBL_REQUIRED_SYMBOL' => '*',
  'LBL_REQUIRED_TITLE' => 'Označava obavezno polje',
  'LBL_RESET' => 'Resetuj',
  'LBL_RESET_DEFAULT_VIEW' => 'Resetovati podrazumevani prikaz',
  'LBL_RESET_DEFAULT_WIDTHS' => 'Resetovati podrazumevanu širinu',
  'LBL_RESET_THEME_LNK' => 'Povrati podrazumevanu temu',
  'LBL_RESET_THEME_MODAL_INFO' => 'Da li ste sigurni da želite da obrišete vašu prilagođenu temu sa podrazumevanom temom.',
  'LBL_RESET_THEME_PROCESS' => 'Vraćanje podrazumevane teme...',
  'LBL_RESOLVE_CONFLICT' => 'Rešite konflikt za {{name}}',
  'LBL_RESOURCE_UNAVAILABLE' => 'Resurs nije dostupan.',
  'LBL_RESOURCE_UNAVAILABLE_TITLE' => 'Pristup je zabranjen',
  'LBL_RESTORE' => 'Vrati na original',
  'LBL_RETRIEVING_PAGE' => 'Učitavam stranicu...',
  'LBL_ROLLBACK_BUTTON' => 'Vraćanje promena',
  'LBL_ROUNDTRIPS' => 'Broj akcije',
  'LBL_ROUTING_ACTIONS_COPY_MAIL' => 'Kopiraj mail',
  'LBL_ROUTING_ACTIONS_DELETE_BEAN' => 'Obriši Sugar objekat',
  'LBL_ROUTING_ACTIONS_DELETE_FILE' => 'Obriši fajl',
  'LBL_ROUTING_ACTIONS_DELETE_MAIL' => 'Obriši Email',
  'LBL_ROUTING_ACTIONS_FORWARD' => 'Prosledi Email',
  'LBL_ROUTING_ACTIONS_MARK_FLAGGED' => 'Označi Email',
  'LBL_ROUTING_ACTIONS_MARK_READ' => 'Označi kao pročitano',
  'LBL_ROUTING_ACTIONS_MARK_UNREAD' => 'Označi kao nepročitano',
  'LBL_ROUTING_ACTIONS_MOVE_MAIL' => 'Premesti Email',
  'LBL_ROUTING_ACTIONS_PEFORM' => 'Izvrši sledeće akcije',
  'LBL_ROUTING_ACTIONS_REPLY' => 'Reply to Email',
  'LBL_ROUTING_ADD_RULE' => 'Dodaj Pravilo',
  'LBL_ROUTING_ALL' => 'Najmanje',
  'LBL_ROUTING_ANY' => 'Bilo koji',
  'LBL_ROUTING_BREAK' => '-',
  'LBL_ROUTING_BUTTON_CANCEL' => 'Otkaži',
  'LBL_ROUTING_BUTTON_SAVE' => 'Snimi Pravilo',
  'LBL_ROUTING_CHECK_RULE' => 'Greška je otkrivena:',
  'LBL_ROUTING_CHECK_RULE_DESC' => 'Proverite da li su sva polja obeležena.',
  'LBL_ROUTING_CONFIRM_DELETE' => 'Da li ste sigurni da želite da obrišete ovo pravilo? Ovo se ne može poništiti.',
  'LBL_ROUTING_FLAGGED' => 'podešavanje zastavice',
  'LBL_ROUTING_FORM_DESC' => 'Sačuvana Pravila su odmah aktivna.',
  'LBL_ROUTING_FW' => 'FW:',
  'LBL_ROUTING_LIST_TITLE' => 'Pravila',
  'LBL_ROUTING_MATCH' => 'Ako',
  'LBL_ROUTING_MATCH_2' => 'od sledećih uslova su ispunjeni:',
  'LBL_ROUTING_MATCH_CC_ADDR' => 'CC',
  'LBL_ROUTING_MATCH_DESCRIPTION' => 'Glavni sadržaj',
  'LBL_ROUTING_MATCH_FROM_ADDR' => 'Od',
  'LBL_ROUTING_MATCH_NAME' => 'Naslov',
  'LBL_ROUTING_MATCH_PRIORITY_HIGH' => 'Visok prioritet',
  'LBL_ROUTING_MATCH_PRIORITY_LOW' => 'Nizak prioritet',
  'LBL_ROUTING_MATCH_PRIORITY_NORMAL' => 'Normalan prioritet',
  'LBL_ROUTING_MATCH_TO_ADDR' => 'Za',
  'LBL_ROUTING_MATCH_TYPE_MATCH' => 'Sadrži',
  'LBL_ROUTING_MATCH_TYPE_NOT_MATCH' => 'Ne sadrži',
  'LBL_ROUTING_NAME' => 'Naziv pravila',
  'LBL_ROUTING_NEW_NAME' => 'Novo pravilo',
  'LBL_ROUTING_ONE_MOMENT' => 'Samo trenutak, molim...',
  'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS' => 'Sledi originalna poruka.',
  'LBL_ROUTING_RE' => 'RE:',
  'LBL_ROUTING_SAVING_RULE' => 'Čuvanje pravila',
  'LBL_ROUTING_SUB_DESC' => 'Odabrana pravila su aktivna. Kliknite na naziv za izmenu.',
  'LBL_ROUTING_TO' => 'za',
  'LBL_ROUTING_TO_ADDRESS' => 'na adresu',
  'LBL_ROUTING_WITH_TEMPLATE' => 'sa šablonom',
  'LBL_RSS_FEED' => 'RSS Feed',
  'LBL_RSS_FEED_AUTHOR' => 'Autor:',
  'LBL_RSS_FEED_DASHLET' => 'RSS vesti',
  'LBL_RSS_FEED_DASHLET_DESCRIPTION' => 'Zadržati postojeće kroz dodavanje spoljnih RSS vesti ili vesti s bloga.',
  'LBL_RSS_FEED_ENTRIES_COUNT' => 'Prikazati broj unosa',
  'LBL_RSS_FEED_URL' => 'URL vesti',
  'LBL_RSS_RECORDS_FOUND' => 'zapis(a) nađeno',
  'LBL_RUN_COUNT' => 'Broj upita',
  'LBL_SAVED' => 'Sačuvano',
  'LBL_SAVED_LAYOUT' => 'Izgled je sačuvan.',
  'LBL_SAVED_SEARCH_ERROR' => 'Molim, unesite naziv za ovaj prikaz.',
  'LBL_SAVED_SEARCH_SHORTCUT' => 'Sačuvane pretrage',
  'LBL_SAVED_VIEWS' => 'Sačuvani Pregledi',
  'LBL_SAVE_AND_CONTINUE' => 'Sačuvaj i nastavi',
  'LBL_SAVE_AND_CREATE_ANOTHER' => 'Sačuvaj i napravi novi',
  'LBL_SAVE_AND_DEPLOY_BTN' => 'Sačuvaj i Razvij',
  'LBL_SAVE_AND_SEND_INVITES_BUTTON' => 'Sačuvati i poslati pozivnice',
  'LBL_SAVE_AND_VIEW' => 'Sačuvaj i pogledaj',
  'LBL_SAVE_AS_BUTTON_KEY' => 'A',
  'LBL_SAVE_AS_BUTTON_LABEL' => 'Sačuvaj kao',
  'LBL_SAVE_AS_BUTTON_TITLE' => 'Sačuvaj kao [Alt+A]',
  'LBL_SAVE_BUTTON_KEY' => 'S',
  'LBL_SAVE_BUTTON_LABEL' => 'Sačuvaj',
  'LBL_SAVE_BUTTON_TITLE' => 'Sačuvaj [Alt+S]',
  'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
  'LBL_SAVE_NEW_BUTTON_LABEL' => 'Sačuvaj i kreiraj novi',
  'LBL_SAVE_NEW_BUTTON_TITLE' => 'Sačuvaj i kreiraj novi [Alt+V]',
  'LBL_SAVE_OBJECT' => 'Sačuvaj {0}',
  'LBL_SAVE_THEME_PROCESS' => 'Sačuvavanje teme...',
  'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Sačuvaj Formular za dodavanje potencijalnih klijenata preko web-a',
  'LBL_SAVING' => 'Čuvanje',
  'LBL_SAVING_LAYOUT' => 'Čuvanje izgleda ...',
  'LBL_SAVING_PAGE_TITLE' => 'Čuvam naslov stranice...',
  'LBL_SCHEDULE_CALL' => 'Evidentiraj poziv',
  'LBL_SCHEDULE_MEETING' => 'Zakaži sastanak',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Zakaži sastanak',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Zakaži sastanak',
  'LBL_SEARCH' => 'Pretraga',
  'LBL_SEARCHFORM' => 'Forma pretrage',
  'LBL_SEARCHING' => 'Pretraga ...',
  'LBL_SEARCH_ALL' => 'Pretraži sve {{{this}}}...',
  'LBL_SEARCH_ALL_MODULES' => 'Pretražite sve',
  'LBL_SEARCH_ALL_RECORDS' => 'Pretraži sve zapise...',
  'LBL_SEARCH_AND_SELECT' => 'Pronađi i izaberi {{module}}',
  'LBL_SEARCH_BUTTON_KEY' => 'Q',
  'LBL_SEARCH_BUTTON_LABEL' => 'Pretraga',
  'LBL_SEARCH_BUTTON_TITLE' => 'Pretraga [Alt+Q]',
  'LBL_SEARCH_BY' => 'Pretraži po',
  'LBL_SEARCH_CHARTS' => 'Dijagrami',
  'LBL_SEARCH_CRITERIA' => 'Kriterijum pretraživanja',
  'LBL_SEARCH_DROPDOWN_NO' => 'Ne',
  'LBL_SEARCH_DROPDOWN_YES' => 'Da',
  'LBL_SEARCH_EXTERNAL_API' => 'Fajl na spoljnim izvoru',
  'LBL_SEARCH_FOR' => 'Traži za',
  'LBL_SEARCH_FOR_MORE' => 'Traži još...',
  'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Zatvori',
  'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Kontrole višestrukog odabira</strong></p><ul><li>Kliknite na vrednosti da označite atribut.</li><li>Ctrl-Klik&nbsp;da&nbsp;označite više atributa. Mac korisnici koriste CMD-klik.</li><li>Da označite sve vrednosti između 2 atributa,&nbsp;kliknite prvu vrednost&nbsp;a zatim shift-kliknite poslednju vrednost.</li></ul><p><strong>Opcije naprednog pretraživanja & prikaza</strong><br><br>Korišćenjem opcije <b>Sačuvana pretraga & prikaz</b>, možete sačuvati skup parametara pretrage i/ili prilagođenog prikaza liste rezultata kako biste ubuduće mogli brzo dobiti tražene rezultate pretrage. Broj različitih parametara pretrage i prikaza koje možete snimiti nije ograničen. Sve sačuvane pretrage prikazane su svojim nazivom u listi "Sačuvane pretrage", pri čemu se na vrhu nalazi poslednja učitana sačuvana pretraga.<br><br>Za prilagođavanje prikaza liste rezultata možete koristiti opcije "Sakrij kolone" i "Prikaži kolone" da označite koje polje će biti prikazano u rezultatima pretrage. Na primer, možete sakriti ili prikazati podatke kao što su naziv zapisa, dodeljeni korisnik ili dodeljeni tim. Da dodate kolonu u listu, označite polje iz liste "Sakrij kolone" i koristeći strelicu levo prebacite ga u listu "Prikaži kolone". Da izbacite kolonu iz liste, označite polje iz liste "Prikaži kolone" i koristeći strelicu desno prebacite ga u listu "Sakrij kolone".<br><br>Ukoliko sačuvate parametre prikaza, moći ćete da ih kasnije u bilo kom trenutku učitate da biste prikazali rezultate pretrage u željenom obliku.<br><br>Da sačuvate ili promenite parametre pretrage i/ili prikaza:<ol><li>Unesite naziv za trenutnu postavku parametara pretgrage i/ili prikaza u polje <b>Sačuvajte ovu pretragu kao</b> i kliknite <b>Sačuvaj</b>. Naziv će biti dodat u listu "Sačuvane pretrage" odmah do dugmeta <b>Izbriši</b>.</li><li>Da pokrenete sačuvanu pretragu, izaberite je iz liste "Sačuvane pretrage". Rezultati pretrage biće prikazani u formi liste.</li><li>Da izmenite parametre sačuvane pretrage, označite je u listi, izmenite parametre pretrage ili prikaza u sekciji "Napredna pretraga", i kliknite <b>Sačuvaj izmene</b> pored <b>Izmeni parametre trenutne pretrage</b>.</li><li>Da obrišete sačuvanu pretragu, označite je u listi, kliknite <b>Obriši</b> pored <b>Izmeni parametre trenutne pretrage</b>, a zatim klikinte <b>OK</b> da potvrdite brisanje.</li></ol><p><strong>Saveti</strong><br><br>Koristeći % kao džoker operator imate mogućnost da učinite širu pretragu. Na primer, umesto da samo traže rezultate koji jednake "jabuke" možete promeniti pretragu u "jabuke%" koja će prikazati sve rezultate koji počinju sa reči jabuke ali isto tako mogu da sadrže i druge karaktere.</p>',
  'LBL_SEARCH_HELP_TITLE' => 'Saveti za pretragu',
  'LBL_SEARCH_LOAD_MORE' => 'UČITAJ JOŠ',
  'LBL_SEARCH_MODULES' => 'Moduli',
  'LBL_SEARCH_MORE' => 'više',
  'LBL_SEARCH_NO_RESULTS' => 'Nema razultata za',
  'LBL_SEARCH_PARENT_RELATED_ITEM' => 'Pretraživanje...',
  'LBL_SEARCH_POPULATE_ONLY' => 'Obavite pretragu koristeći formu pretraživanja iznad',
  'LBL_SEARCH_REPORT_CHARTS' => 'Dijagrami izveštaja',
  'LBL_SEARCH_RESULTS' => 'Rezultati pretrage',
  'LBL_SEARCH_RESULTS_FOUND' => 'Pronađeni rezultati pretrage',
  'LBL_SEARCH_RESULTS_TIME' => 'ms.',
  'LBL_SEARCH_SELECT' => 'Izaberi...',
  'LBL_SEARCH_SELECT_MODULE' => 'Izaberi {{module}}...',
  'LBL_SEARCH_TIPS' => 'Nastavite da kucate kako biste uradili džoker pretragu. Pritisnite Enter/Return ili kliknite na ikonicu za pretragu kako biste uradili konkretnu pretragu.<br><br />Primer:<br><br />Kucanje reči "pacifik" vratiće i "pacifik" i "pacifica"<br><br />Kucanje "pacifik" i pritisak na Enter vratiće samo "pacific"',
  'LBL_SEARCH_TIPS_2' => 'Pritisnite dugme za pretragu ili kliknite enter da dobijete tačno poklapanje za',
  'LBL_SEARCH_TOOLS' => 'Alati',
  'LBL_SEARCH_UNAVAILABLE' => 'Pretraga nije dostupna, molimo pokušajte kasnije.',
  'LBL_SECONDS' => 'Aktivno sekundi',
  'LBL_SEC_AVG' => 'Prosečno sekundi',
  'LBL_SEC_TOTAL' => 'Ukupno sekundi',
  'LBL_SEE_ALL' => 'Vidi sve',
  'LBL_SELECT_ACTION_LABEL' => 'Izaberite akciju',
  'LBL_SELECT_ALL_TITLE' => 'Odaberi sve',
  'LBL_SELECT_APPEND_TEAMS' => 'Dodaj tim(ove)',
  'LBL_SELECT_APPEND_VALUES' => 'Dodaj vrednost(i)',
  'LBL_SELECT_BUTTON_KEY' => 'T',
  'LBL_SELECT_BUTTON_LABEL' => 'Izaberi',
  'LBL_SELECT_BUTTON_TITLE' => 'Izaberi [Alt+T]',
  'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
  'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Izaberi kontakt',
  'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Izaberi kontakt [Alt+T]',
  'LBL_SELECT_MODULE' => 'Izaberite modul:',
  'LBL_SELECT_PHOTO' => 'Izaberite sliku',
  'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Izaberi iz izveštaja',
  'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Izaberi izveštaje',
  'LBL_SELECT_TEAMS_KEY' => 'Z',
  'LBL_SELECT_TEAMS_LABEL' => 'Dodaj Tim(ove)',
  'LBL_SELECT_TEAMS_TITLE' => 'Dodaj Tim(ove) [Alt+Z]',
  'LBL_SELECT_THIS_ROW_TITLE' => 'Odaberi ovaj red',
  'LBL_SELECT_USER_BUTTON_KEY' => 'U',
  'LBL_SELECT_USER_BUTTON_LABEL' => 'Izaberi korisnika',
  'LBL_SELECT_USER_BUTTON_TITLE' => 'Izaberi korisnika [Alt+U]',
  'LBL_SEND_INVITE' => 'Pošalji poziv',
  'LBL_SERVER_MEMORY_BYTES' => 'Bajtova',
  'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Korišćenje: - modul: {0} - akcija: {1}',
  'LBL_SERVER_MEMORY_USAGE' => 'Iskorišćenje memorije servera: {0} ({1})',
  'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Najveće iskorišćenje memorije servera: {0} ({1})',
  'LBL_SERVER_RESPONSE_RESOURCES' => 'Resursi korišćeni za izradu ove strane (upiti, fajlovi)',
  'LBL_SERVER_RESPONSE_TIME' => 'Odziv servera:',
  'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekundi.',
  'LBL_SESSION_ID' => 'ID broj sesije',
  'LBL_SETUP_COMPLETE_INFO' => 'Počnite da koristite Sugar!',
  'LBL_SETUP_PROGRESS' => 'Napredak podešavanja',
  'LBL_SETUP_USER_INFO' => 'Podesite vaše korisničke podatke',
  'LBL_SETUP_USER_LOCALE_INFO' => 'Podesite vašu vremenski zonu, datum i formate imena',
  'LBL_SET_FONTSIZE' => 'Veličina teksta',
  'LBL_SET_NEW_PASSWORD' => 'Unesite lozinku',
  'LBL_SHARE_BUTTON_KEY' => 'r',
  'LBL_SHARE_BUTTON_LABEL' => 'Podeli',
  'LBL_SHARE_BUTTON_TITLE' => 'Podeli',
  'LBL_SHARE_COMPANY' => 'Kompanija',
  'LBL_SHARE_LINKABLE' => 'Povezivo',
  'LBL_SHARE_PRIVATE' => 'Privatni',
  'LBL_SHARE_PUBLIC' => 'Javno',
  'LBL_SHIPPING_ADDRESS' => 'Adresa dostave',
  'LBL_SHIPPING_STREET' => 'Ulica:',
  'LBL_SHIP_TO_ACCOUNT' => 'Dostaviti kompaniji',
  'LBL_SHIP_TO_CONTACT' => 'Dostaviti kontaktu',
  'LBL_SHORTCUTS' => 'Prečice',
  'LBL_SHORTCUT_ALERT_CANCEL' => 'Otkaži',
  'LBL_SHORTCUT_ALERT_CONFIRM' => 'Potvrdi',
  'LBL_SHORTCUT_CANCEL_INLINE_EDIT' => 'Napustiti mod izmena bez čuvanja',
  'LBL_SHORTCUT_CLOSE_DRAWER' => 'Zatvori fionku',
  'LBL_SHORTCUT_COPY_RECORD' => 'Kopirati trenutni zapis',
  'LBL_SHORTCUT_CREATE_RECORD' => 'Kreirati novi zapis',
  'LBL_SHORTCUT_EDIT_SELECTED' => 'Izmeni odabrani zapis iz liste',
  'LBL_SHORTCUT_FAVORITE_RECORD' => 'Označiti zapis kao omiljeni',
  'LBL_SHORTCUT_FILTER_ADD' => 'Dodati dodatni kriterijum filteru',
  'LBL_SHORTCUT_FILTER_CLOSE' => 'Zatvoriti filter',
  'LBL_SHORTCUT_FILTER_CREATE' => 'Kreirati novu listu filtera',
  'LBL_SHORTCUT_FILTER_DELETE' => 'Izbrisati filter',
  'LBL_SHORTCUT_FILTER_EDIT' => 'Izmeniti postojeću listu filtera',
  'LBL_SHORTCUT_FILTER_REMOVE' => 'Obrisati poslenji kriterijum iz filtera',
  'LBL_SHORTCUT_FILTER_RESET' => 'Ponovo pokrenuti filter',
  'LBL_SHORTCUT_FILTER_SAVE' => 'Sačuvati filter',
  'LBL_SHORTCUT_FILTER_SEARCH' => 'Fokus na polje liste filtera',
  'LBL_SHORTCUT_FILTER_SHOW' => 'Otvoriti meni liste filtera',
  'LBL_SHORTCUT_FOLLOW_RECORD' => 'Prati zapis',
  'LBL_SHORTCUT_FUNCTION' => 'Funkcija',
  'LBL_SHORTCUT_HELP' => 'Prikazati pomoć u vezi prečica',
  'LBL_SHORTCUT_KEYS_HELP_ABOUT' => 'SugarCRM dozvoljava korisnicima da na brz način obave određene zadatke uz pomoću prečica na tastaturi koje uvećavaju produktivnost. Tabela',
  'LBL_SHORTCUT_KEY_KEY' => 'Ključ',
  'LBL_SHORTCUT_MARK_SELECTED' => 'Označi zapis kao odabran',
  'LBL_SHORTCUT_MASS_UPDATE_ADD' => 'Dodati red',
  'LBL_SHORTCUT_MASS_UPDATE_CANCEL' => 'Zatvoriti masovno ažuriranje',
  'LBL_SHORTCUT_MASS_UPDATE_REMOVE' => 'Ukloniti red',
  'LBL_SHORTCUT_MASS_UPDATE_SAVE' => 'Ažurirati zapise',
  'LBL_SHORTCUT_NAVIGATE_DOWN' => 'Odaberi sledeći zapis iz liste',
  'LBL_SHORTCUT_NAVIGATE_UP' => 'Odaberi prethodni zapis iz liste',
  'LBL_SHORTCUT_OPEN' => 'Otvori odabrani zapis iz liste',
  'LBL_SHORTCUT_OPEN_MASS_ACTION' => 'Otvoriti padajuću listu sa mnoštvom akcija',
  'LBL_SHORTCUT_OPEN_MORE_ACTION' => 'Otvoriti padajući meni primarnih akcija',
  'LBL_SHORTCUT_PREVIEW_SELECTED' => 'Prikazati zapis',
  'LBL_SHORTCUT_QUICK_CREATE' => 'Postaviti meni brzog kreiranja',
  'LBL_SHORTCUT_RECORD_CANCEL' => 'Izbrisati bilo koju promenu zapisa',
  'LBL_SHORTCUT_RECORD_DELETE' => 'Izbrisati zapis',
  'LBL_SHORTCUT_RECORD_EDIT' => 'Izmeniti zapis',
  'LBL_SHORTCUT_RECORD_NEXT' => 'Otvoriti sledeći zapis',
  'LBL_SHORTCUT_RECORD_PREVIOUS' => 'Otvoriti prethodni zapis',
  'LBL_SHORTCUT_RECORD_SAVE' => 'Sačuvati zapis',
  'LBL_SHORTCUT_SCROLL_LEFT' => 'Pomeri listu levo',
  'LBL_SHORTCUT_SCROLL_RIGHT' => 'Pomeri listu desno',
  'LBL_SHORTCUT_SEARCH' => 'Fokus na polje globalne pretrage',
  'LBL_SHORTCUT_SELECT_ALL' => 'Odaberi sve',
  'LBL_SHORTCUT_SIDEBAR_TOGGLE' => 'Postaviti klizač',
  'LBL_SHOW' => 'Prikaži',
  'LBL_SHOW_LESS' => 'Prikaži manje',
  'LBL_SHOW_LESS_RECENTS' => 'Manje skorašnjih...',
  'LBL_SHOW_MORE' => 'Prikaži više',
  'LBL_SHOW_MORE_GENERIC' => 'Još {{name}}...',
  'LBL_SHOW_MORE_MODULE' => 'Još {{module}}...',
  'LBL_SHOW_MORE_RECENTS' => 'Još skorašnjih...',
  'LBL_SIGNUP_BUTTON_LABEL' => 'Prijava',
  'LBL_SIXMONTHS' => 'šest meseci',
  'LBL_SMS_BUTTON' => 'Poruka',
  'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
  'LBL_SMTPTYPE_GMAIL' => 'Gmail',
  'LBL_SMTPTYPE_OTHER' => 'Ostalo',
  'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
  'LBL_SORT' => 'Sortiraj',
  'LBL_SQL_TEXT' => 'SQL tekst',
  'LBL_SQS_INDICATOR' => '',
  'LBL_START_AND_END_DATE' => '{{start}} - {{end}} ({{duration}})',
  'LBL_START_AND_END_DATE_DETAIL_VIEW' => 'Datum početka i završetka',
  'LBL_START_AND_END_DATE_SAME_DAY' => '{{date}} {{start}} - {{end}} ({{duration}})',
  'LBL_START_AND_END_DATE_TO' => 'za',
  'LBL_START_BUTTON_LABEL' => 'Početak',
  'LBL_START_BUTTON_TITLE' => 'Početak',
  'LBL_STATE' => 'Opština:',
  'LBL_STATUS' => 'Status:',
  'LBL_STATUS_UPDATED' => 'Vaš status za ovaj događaj je ažuriran!',
  'LBL_STREAM_NO_RECORDS' => 'Za ovaj zapis u ovom momentu ne postoje zabeleške. Molimo dodajte zabelešku klikom na link za dodavanje.',
  'LBL_STREET' => 'Ulica',
  'LBL_SUBJECT' => 'Naslov',
  'LBL_SUBMIT_BUTTON_LABEL' => 'Prosledi',
  'LBL_SUBSCRIBE' => 'Pretplati',
  'LBL_SUCCESS' => 'Uspešno',
  'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2016 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> Sva prava zadržana.<br />SugarCRM je zaštitni znak kompanije SugarCRM, Inc. Svi drugi nazivi kompanija i proizvoda mogu biti zaštitni znaci odgovarajućih kompanija sa kojima su povezani.',
  'LBL_SUPPORT' => 'Podrška',
  'LBL_SWITCH_INSTANCE' => 'Prelazak na ovu instancu',
  'LBL_SYNC' => 'Sinhronizuj',
  'LBL_SYNCED_RECURRING_MSG' => 'Ne možete izmeniti ovaj zapis zato što je sinhronizovan u Sugar iz eksternog sistema.',
  'LBL_SYSTEM_DEFAULT_OUTBOUND_EMAIL_CONFIGURATION' => 'Podrazumevana vrednost sistema',
  'LBL_TABGROUP_HOME' => 'Početna strana',
  'LBL_TAG_FETCH_ERROR' => 'Greška se pojavila prilikom povratka oznaka.',
  'LBL_TAG_NEW_TAG' => '(New Tag)',
  'LBL_TASKS' => 'Zadaci',
  'LBL_TASKS_SUBPANEL_TITLE' => 'Zadaci',
  'LBL_TEAM' => 'Tim:',
  'LBL_TEAMS' => 'Timovi',
  'LBL_TEAMS_LINK' => 'Timovi',
  'LBL_TEAM_ADD' => 'Dodajte tim',
  'LBL_TEAM_ID' => 'ID broj tima',
  'LBL_TEAM_PRIMARY' => 'Postavite kao glavni tim',
  'LBL_TEAM_REMOVE' => 'Uklonite tim',
  'LBL_TEAM_SELECTED_TITLE' => 'Odabrani tim',
  'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Odaberi da bi postavio ovaj tim kao primaran',
  'LBL_TEAM_SET' => 'Postavljeni tim',
  'LBL_TEAM_SET_ID' => 'ID Postavljenog tima',
  'LBL_TEXTAREA_LESS' => 'manje',
  'LBL_TEXTAREA_MORE' => 'više',
  'LBL_THEME' => 'Tema:',
  'LBL_THEME_COLOR' => 'Boja',
  'LBL_THEME_FONT' => 'Font',
  'LBL_THEME_PICKER' => 'Stil stranice',
  'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Upozorenje: Odabrana tema ne podržava Internet Explorer 6. Kliknite na OK da je izaberete ili na Odustani da izaberete drugu temu.',
  'LBL_THEME_PREVIEW' => 'Pregled teme',
  'LBL_THOUSANDS_SYMBOL' => 'K',
  'LBL_THREE_MONTHS' => 'tri meseca',
  'LBL_TIMEZONE_DIFFERENT_LINK' => 'Prilagodite vašu vremensku zonu.',
  'LBL_TIME_AGO_DAY' => 'juče',
  'LBL_TIME_AGO_DAYS' => 'pre {{this}} dan(a)',
  'LBL_TIME_AGO_HOUR' => 'pre oko 1 sat',
  'LBL_TIME_AGO_HOURS' => 'pre {{this}} sat(i)',
  'LBL_TIME_AGO_MINUTE' => 'pre oko 1 minut',
  'LBL_TIME_AGO_MINUTES' => 'pre {{this}} minut(a)',
  'LBL_TIME_AGO_NOW' => 'upravo',
  'LBL_TIME_AGO_SECONDS' => 'pre manje od jednog minuta',
  'LBL_TIME_AGO_YEAR' => 'pre više od godinu dana',
  'LBL_TIME_RELATIVE' => 'Poslato: {{relativetime}} dana {{date}} u {{time}}',
  'LBL_TIME_RELATIVE_ACTIVITIES' => '{{relativetime}} na {{date}} u {{time}}',
  'LBL_TIME_UNTIL_DAY' => 'sutra',
  'LBL_TIME_UNTIL_DAYS' => 'za {{this}} dana',
  'LBL_TIME_UNTIL_HOUR' => 'za oko sat vremena',
  'LBL_TIME_UNTIL_HOURS' => 'za {{this}} sati',
  'LBL_TIME_UNTIL_MINUTE' => 'oko jednog minuta',
  'LBL_TIME_UNTIL_MINUTES' => 'kroz {{this}} minuta',
  'LBL_TIME_UNTIL_SECONDS' => 'manje od jednog minuta',
  'LBL_TIME_UNTIL_YEAR' => 'za više od godinu dana',
  'LBL_TODAY' => 'danas',
  'LBL_TODAYS_ACTIVITIES' => 'Današnje aktivnosti',
  'LBL_TOGGLE_DRAWER' => 'Uključi ladicu',
  'LBL_TOGGLE_VISIBILITY' => 'Izmeni vidljivost',
  'LBL_TOMORROW' => 'sutra',
  'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Prikazuje deset najboljih prodajnih prilika kružnim grafikonom.',
  'LBL_TOP10_OPPORTUNITIES_DEFAULT_DATASET' => 'Podrazumevani set podataka',
  'LBL_TOP10_OPPORTUNITIES_FILTER_DURATIONS' => 'Podrazumevani filter za datum',
  'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Moje prodajne prilike',
  'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => 'Prodajne prilike moga tima',
  'LBL_TOUR' => 'Tura pogleda aktivnosti',
  'LBL_TOUR_ADD' => 'Napravite zapis odavde',
  'LBL_TOUR_AVATAR' => 'Pogledajte još podataka o aplikaciji ili se odjavite',
  'LBL_TOUR_BACK' => 'Nazad',
  'LBL_TOUR_BTN_DONE' => 'Završeno',
  'LBL_TOUR_CALENDAR_URL_1' => 'Da li delite Vaš SugarCRM kalendar sa aplikacijama trećih lica, kao što su Microsoft Outlook ili Exchange? Ako da, imate novi URL. Ovaj novi, sigurniji URL uključuje lični ključ koji će sprečiti neautorizovanu objavljivanje Vašeg kalendara.',
  'LBL_TOUR_CALENDAR_URL_2' => 'Dohvatite novi dodeljeni URL Vašeg kalendara.',
  'LBL_TOUR_CLOSE' => 'Zatvori',
  'LBL_TOUR_CUBE' => 'Pristupite tabli sa dašletima i pregledu aktivnosti',
  'LBL_TOUR_DONE' => 'Gotovi ste!',
  'LBL_TOUR_END_TOUR' => 'Kraj obilaska',
  'LBL_TOUR_FEATURES_670' => '<ul style=""><li class="icon-ok">Unapređen izgled i osećaj - sada sa novim modernim temama.</li><li class="icon-ok">Unapređen modul za prognozu - sada sa intuitivnim korisničkim interfejsom i novim načinom prikaza podataka</li></ul>',
  'LBL_TOUR_FORECASTS_CHART' => 'Pogledajte raspodelu prognoza',
  'LBL_TOUR_FORECASTS_COMMITS' => 'Kliknite za pregled prethodnih prihvaćaja',
  'LBL_TOUR_FORECASTS_INLINEEDIT' => 'Kliknite za brzu izmenu podataka',
  'LBL_TOUR_FORECASTS_PROGRESS' => 'Pogledajte udaljenost od kvote',
  'LBL_TOUR_FORECASTS_TIMEPERIODS' => 'Izaberite vremenski period za pregled odgovarajuće prognoze',
  'LBL_TOUR_FORECAST_INTRO' => 'Upravljajte levkom prodaje i prognozom.',
  'LBL_TOUR_FULL_TOUR' => 'Celokupan obilazak',
  'LBL_TOUR_INTRO' => '<h4>Welcome to Sugar</h4> We&#39;d like to walk you through some of the features.  Use the < and > arrows on the bottom of the screen to take a tour.<ul class="resource-list"><li class="resource"><a href="http://support.sugarcrm.com/02_Documentation/01_Sugar_Editions/" target="_blank"><span class="label label-module label-module-md pull-left blue"><i class="fa fa-2x fa-magic"></i></span></a><div class="resource-info"><a href="http://support.sugarcrm.com/02_Documentation/01_Sugar_Editions/" target="_blank">What&#39;s New</a><p class="details">Find out the key changes between releases.</p></div></li><li class="resource"><a href="http://university.sugarcrm.com/" target="_blank"><span class="label label-module label-module-md pull-left green"><i class="fa fa-2x fa-book"></i></span></a><div class="resource-info"><a href="http://university.sugarcrm.com/" target="_blank">Find out more about Sugar</a><p class="details">A robust library of eLearning, live and virtual classroom training, webinars and video tutorials.</p></div></li><li class="resource"><a href="http://support.sugarcrm.com/" target="_blank"><span class="label label-module label-module-md pull-left red"><i class="fa fa-2x fa-question-circle"></i></span></a><div class="resource-info"><a href="http://support.sugarcrm.com/" target="_blank">Get Support</a><p class="details">Need help, have a issue or want to suggest how to make Sugar better?</p></div></li></ul>',
  'LBL_TOUR_LIST_ACTIVTYSTREAMLIST_TOGGLE' => 'Pogledajte aktivnosti ili listu zapisa',
  'LBL_TOUR_LIST_FILTER1' => 'Filter traka omogućava pretragu ovog modula',
  'LBL_TOUR_LIST_FILTER2' => 'Izaberite predefinisani filter ili napravite novi',
  'LBL_TOUR_LIST_FILTER_PREVIEW' => 'Izmenite red ili pogledajte detalje',
  'LBL_TOUR_LIST_FILTER_SEARCH' => 'Kucajte ovde za pretragu po imenu',
  'LBL_TOUR_LIST_INTRO' => 'Pogledajte listu zapisa i radite sa njima',
  'LBL_TOUR_LIST_INT_TOGGLE' => 'Kliknite za otvaranje ili zatvaranje panela sa obaveštenjima',
  'LBL_TOUR_MODULE' => 'Obilazak ove strane',
  'LBL_TOUR_NAV_BAR' => 'Pristupite i radite sa svim modulima preko navigacionog menija',
  'LBL_TOUR_NEXT' => 'Sledeći',
  'LBL_TOUR_NOTIFICATIONS' => 'Kliknite za pregled obaveštenja',
  'LBL_TOUR_OVERVIEW' => 'Pregled stranice',
  'LBL_TOUR_RECORD_ACTIONS' => 'Radite sa zapisom',
  'LBL_TOUR_RECORD_DASHBOARDACTIONS' => 'Napravite nove grupe dašleta',
  'LBL_TOUR_RECORD_DASHBOARDNAME' => 'Dajte ime grupi dašleta',
  'LBL_TOUR_RECORD_DASHLETCOG' => 'Izaberite da uklonite dašlet ili da promenite podešavanja',
  'LBL_TOUR_RECORD_INLINEEDIT' => 'Ime zapisa može biti izmenjeno na mestu',
  'LBL_TOUR_RECORD_INLINEEDITRECORD' => 'Kliknite za brzu izmenu svakog polja',
  'LBL_TOUR_RECORD_INTRO' => 'Pogledajte detalje ovog zapisa kao i sve podatke povezane sa njim.',
  'LBL_TOUR_RECORD_SHOWMORE' => 'Kliknite ovde za više podataka o zapisu',
  'LBL_TOUR_RECORD_STATUS' => 'Ovde možete naći status na nivou zapisa',
  'LBL_TOUR_RECORD_TOGGLEACTIVITIES' => 'Pogledajte aktivnosti ili povezane zapise',
  'LBL_TOUR_REFERENCE_1' => 'Možete se uvek pozvati na naš',
  'LBL_TOUR_REFERENCE_2' => 'putem "Podrške" linka koji se nalazi u profil meniju.',
  'LBL_TOUR_REVISIT' => 'Click here to show the tour at any time.<br />Kliknite ovde da biste prikazali turu bilo kada.',
  'LBL_TOUR_SCREEN_1_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Podesite vaše parametre za prognozu</li><li class="icon-ok">Lako ispratite projektovane prodaje i levak prodaje</li><li class="icon-ok">Prognoza je bazirana na projektovanim prodajama vašeg prodajnog tima</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen1-thumb.png" width="220" id="thumbnail_1" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_1_TITLE_670' => 'Unapređena funkcionalnost prognoziranja u Sugar-u',
  'LBL_TOUR_SCREEN_2_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Odaberite početni datum fiskalne godine</li><li class="icon-ok">Odaberite godišnji ili kvartalni vremenski period</li><li class="icon-ok">Odlučite koliko prošlih i budućih vremenskih perioda je potrebno da bude vidljivo u tabeli</li><li class="icon-ok">Izaberite opsege prognoze da bi ste označili poslovne prilike kao uključene, isključene ili naopake</li><li class="icon-ok">Izaberite scenarije prognoze za identifikaciju verovatne, najbolje i najgore prognoze</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen2-thumb.png" width="220" id="thumbnail_2" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_2_TITLE_670' => 'Podesite parametre vaše prognoze',
  'LBL_TOUR_SCREEN_3_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Izaberite vremenski period za pregled prognoze</li><li class="icon-ok">Pogledajte radne listove članova vašeg prodajnog tima i prilagodite prognozu</li><li class="icon-ok">Kada član prodajnog tima predloži novu prognozu vidi se upozorenje na radnom listu</li><li class="icon-ok">Sačuvajte nacrt vaše prognoze ili je prosledite vašem menadžeru</li><li class="icon-ok">Pogledajte prethodne komentare</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen3-thumb.png" width="220" id="thumbnail_3" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_3_TITLE_670' => 'Upravljajte projektovanim prodajama vašeg prodajnog tima',
  'LBL_TOUR_SCREEN_4_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Uz pomoć Pareto grafikona analizirajte prognoze vašeg celokupnog prodajnog tima</li><li class="icon-ok">Izaberite prikaz Verovatne, Najbolje ili Najgore prognoze</li><li class="icon-ok">Pogledajte planirane prodaje i koliko ste blizu timske kvote</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen4-thumb.png" width="220" id="thumbnail_4" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_4_TITLE_670' => 'Upravljajte projektovanim prodajama vašeg prodajnog tima',
  'LBL_TOUR_SCREEN_5_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Izaberite vremenski period za vašu prognozu</li><li class="icon-ok">Pregledajte i lako izmenite količine i verovatnoću uspeha za brzu "šta-ako" analizu</li><li class="icon-ok">Sačuvajte nacrt vaše prognoze ili je pošaljite vašem menadžeru</li><li class="icon-ok">Pogledajte ranije poslate prognoze</li><li class="icon-ok">Pošaljite prognozu vašem menadžeru i pogledajte ranije poslate prognoze</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen5-thumb.png" width="220" id="thumbnail_5" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_5_TITLE_670' => 'Upravljajte sopstvenim projektovanim prodajama',
  'LBL_TOUR_SCREEN_6_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Izaberite vremenski period za vašu prognozu</li><li class="icon-ok">Pregledajte i lako izmenite količine i verovatnoću uspeha za brzu "šta-ako" analizu</li><li class="icon-ok">Sačuvajte nacrt vaše prognoze ili je pošaljite vašem menadžeru</li><li class="icon-ok">Pogledajte ranije poslate prognoze</li><li class="icon-ok">Pošaljite prognozu vašem menadžeru i pogledajte ranije poslate prognoze</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen5-thumb.png" width="220" id="thumbnail_5" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_6_TITLE_670' => 'Upravljajte sopstvenim projektovanim prodajama',
  'LBL_TOUR_SEARCH' => 'Izaberite jedan ili više modula i pretražite',
  'LBL_TOUR_SKIP' => 'Preskoči',
  'LBL_TOUR_TAKE_TOUR' => 'Pođi na obilazak',
  'LBL_TOUR_TOUR' => 'Pristupni Pregled u bilo koje vreme',
  'LBL_TOUR_VISIT' => 'Za dodatne informacije molimo Vas posetite našu aplikaciju',
  'LBL_TOUR_WATCH' => 'Pogledaj štaj novo u Sugar-u',
  'LBL_TOUR_WELCOME' => 'Dobrodošli u Sugar',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arhiviraj Email',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arhiviraj Email [Alt+K]',
  'LBL_TRADEMARK' => 'SugarCRM je zaštitni znak SugarCRM, Inc. Sva ostala imena kompanija i proizvoda mogu biti zaštitni znakovi kompanija sa kojima su povezani.',
  'LBL_TRADEMARK2' => 'SugarCRM ®, Sugar Enterprise™ i Sugar™ su zaštitni znak SugarCRM Inc.',
  'LBL_TRAINING' => 'Podrška',
  'LBL_TT_DNB_BAL_AREA_CODE' => 'Američki i kanadski telefonski kodovi. Primer: 512 ili 723 ili973',
  'LBL_TT_DNB_BAL_CODE_TYPE' => 'Odabrati tip industrijskog koda: SIC ili NAICS',
  'LBL_TT_DNB_BAL_DUNS' => 'Uneti devetocifreni DUNS® broj. Primer:  060704780, 047897855',
  'LBL_TT_DNB_BAL_IND_CODE' => '2 do 8 cifara SIC koda su podržane ili 2 do 6 cifara NAICS koda su podržane. Odvajati višestruke kodove zarezima.',
  'LBL_TT_DNB_BAL_IPO_PRICE_RANGE' => 'U $. Primer: IPO raspon cena 2.00 do 2.50',
  'LBL_TT_DNB_BAL_MILLIONS' => 'U milionima $',
  'LBL_TT_DNB_BAL_MILLIONS_EX' => 'U milionima $. Primer: 100 ili 4.3',
  'LBL_TT_DNB_BAL_NET_INCOME_GROWTH' => 'Procenat (%)',
  'LBL_TT_DNB_BAL_ORGID' => 'Registracija #. Primer 130871985, 160468020',
  'LBL_TT_DNB_BAL_ORG_NAME' => 'Uneti naziv kompanije',
  'LBL_TT_DNB_BAL_POSTAL_CODE' => 'Američki raspon ZIP kodova su podržani. Primeri: 78701 ili SW1P 1JA ili SWW1, ili 78701-78752',
  'LBL_TT_DNB_BAL_PRESCREEN_SCORE' => 'Odabrati nivo rizika: visok, srednji, nizak',
  'LBL_TT_DNB_BAL_RADIUS_SRCH' => 'Pretraga rezultata unutar datih granica jednog ZIP/poštanskog koda',
  'LBL_TT_DNB_BAL_STATES' => 'Država/Pokrajina/Region',
  'LBL_TT_DNB_BAL_YEAR_OF_FOUNDING' => 'Primer: 1964 ili 2009. Samo jedna godina osnivanja može biti dodata',
  'LBL_TWITTER_DATA_EMPTY' => 'Nema dostupnih podataka sa Twitter-a',
  'LBL_TWITTER_DATA_LOADING' => 'Učitavanje Twitter Konektora...',
  'LBL_TWITTER_DESCRIPTION' => 'Pogledajte biografiju tweeter korisnika kao i tweet-ove, ponovljenje tweet-ove i odgovore na tweet-ove',
  'LBL_TWITTER_DISPLAY_ROWS' => 'Prikaži redove',
  'LBL_TWITTER_FAVORITE' => 'Omiljeni',
  'LBL_TWITTER_FOLLOW' => 'Prati',
  'LBL_TWITTER_ID' => 'Twitter ID',
  'LBL_TWITTER_MY_ACCOUNT' => 'Moj nalog',
  'LBL_TWITTER_NAME' => 'Twitter',
  'LBL_TWITTER_REPLY' => 'Odgovori',
  'LBL_TWITTER_RETWEET' => 'Prosledi tweet',
  'LBL_TWITTER_SOURCE' => 'Izvor objave',
  'LBL_TWO_WEEKS' => 'dve nedelje',
  'LBL_TX_LOG' => 'Dnevnik transakcija',
  'LBL_TX_LOG_DETAIL' => 'Detalji transakcije',
  'LBL_UNASSIGNED' => 'Nije dodeljeno',
  'LBL_UNAUTHORIZED' => 'Žao nam je, ali izgleda da niste autorizovani da pristupite ovom resursu.',
  'LBL_UNAUTHORIZED_TITLE' => 'Niste autorizovani',
  'LBL_UNAUTH_ADMIN' => 'Neautorizovan pristup administraciji',
  'LBL_UNDELETE' => 'Poništi brisanje',
  'LBL_UNDELETE_BUTTON' => 'Poništi brisanje',
  'LBL_UNDELETE_BUTTON_LABEL' => 'Poništi brisanje',
  'LBL_UNDELETE_BUTTON_TITLE' => 'Poništi brisanje [Alt+D]',
  'LBL_UNFOLLOW' => 'Prestani da pratiš',
  'LBL_UNLINKED' => 'Nepovezano',
  'LBL_UNLINKING' => 'Manje verovatno...',
  'LBL_UNLINK_BUTTON' => 'Ukloni',
  'LBL_UNSUBSCRIBE' => 'Poništi pretplatu',
  'LBL_UNSYNC' => 'Poništi sinhronizovanje',
  'LBL_UPCOMING' => 'Moji nadolazeći sastanci',
  'LBL_UPDATE' => 'Ažuriraj',
  'LBL_UPDATE_CALC_FIELDS' => 'Preračunaj vrednosti',
  'LBL_UPLOADING' => 'Postavljanje',
  'LBL_UPLOAD_FROM_COMPUTER' => 'Dodaj sa svog računara',
  'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Nevažeći format fajla, samo fajl slike se može poslati.',
  'LBL_UPLOAD_IMAGE_FILE_NOT_SUPPORTED' => 'Format slike {0} više nije podržan.',
  'LBL_URL_BUTTON' => 'Web',
  'LBL_USERS' => 'Korisnici',
  'LBL_USERS_SYNC' => 'Sinh. korisnika',
  'LBL_USER_DEFAULT_OUTBOUND_EMAIL_CONFIGURATION' => 'Podrazumevana vrednost korinika',
  'LBL_USER_ID' => 'ID broj korisnika',
  'LBL_USER_LIST' => 'Lista korisnika',
  'LBL_USER_MENU' => 'Korisnički meni',
  'LBL_USER_OUTBOUND_EMAIL_ACCOUNT_CONFIGURATION' => 'korisnički nalog',
  'LBL_USE_HTTPS' => 'Korišćenje bezbedne konekcije',
  'LBL_VALIDATE_RANGE' => 'nije u važećem dometu',
  'LBL_VALIDATING' => 'Validacija...',
  'LBL_VCARD' => 'Digitalna vizitkarta',
  'LBL_VCARD_DOWNLOAD' => 'Preuzmite .vcf',
  'LBL_VCARD_ERROR_DEFAULT' => 'Došlo je do greške pri otpremanju virtuelnog imenika.',
  'LBL_VCARD_ERROR_FILESIZE' => 'Fajl za otpremanje je veći od 30000 bajtova, što je limit za HTML.',
  'LBL_VERIFY_EMAIL_ADDRESS' => 'Proveravanje za postojeći Email unos...',
  'LBL_VERIFY_PORTAL_NAME' => 'Proveravanje za postojeći naziv portala...',
  'LBL_VIEWINLINE' => 'Pregled',
  'LBL_VIEW_BUTTON' => 'Pregled',
  'LBL_VIEW_BUTTON_KEY' => 'V',
  'LBL_VIEW_BUTTON_LABEL' => 'Pregled',
  'LBL_VIEW_BUTTON_TITLE' => 'Pregled [Alt+V]',
  'LBL_VIEW_IMAGE' => 'pregled',
  'LBL_VIEW_INLINE' => 'Pregled',
  'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
  'LBL_VIEW_PDF_BUTTON_LABEL' => 'Štampaj kao PDF',
  'LBL_VIEW_PDF_BUTTON_TITLE' => 'Štampaj kao PDF [Alt+P]',
  'LBL_VISIBLE' => 'Vidljiv zapis',
  'LBL_WARNING' => 'Upozorenje',
  'LBL_WARN_UNSAVED_CHANGES' => 'Imate nesačuvane izmene. Da li ste sigurni da želite da napustite stranicu i odbacite promene?',
  'LBL_WELCOMEBAR' => 'Dobrodošli',
  'LBL_WIZ_APPLICATION_SETTINGS' => 'Pregledaj i upravljaj podešavanjima aplikacije',
  'LBL_WIZ_COMPLETE_TITLE' => 'Podešavanje je završeno',
  'LBL_WIZ_CONFIGURE_APPLICATION' => 'Podesi aplikaciju',
  'LBL_WIZ_CREATE_USERS' => 'Napravi korisnike',
  'LBL_WIZ_DATE_FORMAT' => 'Format datuma',
  'LBL_WIZ_DOCUMENTATION' => 'Dokumentacija',
  'LBL_WIZ_EMAIL' => 'Email',
  'LBL_WIZ_EMAIL_SETTINGS' => 'Email podešavanja',
  'LBL_WIZ_FIRST_NAME' => 'Ime',
  'LBL_WIZ_FORUMS' => 'Forumi',
  'LBL_WIZ_IMPORT_DATA' => 'Uvezi podatke',
  'LBL_WIZ_KNOWLEDGE_BASE' => 'Baza znanja',
  'LBL_WIZ_LAST_NAME' => 'Prezime',
  'LBL_WIZ_NAME_FORMAT' => 'Format za prikaz imena',
  'LBL_WIZ_START_SUGAR' => 'Pokreni Sugar',
  'LBL_WIZ_SUGAR_TRAINING' => 'Sugar trening',
  'LBL_WIZ_SYSTEM_LOCALE_SETTINGS' => 'Lokalna podešavanja sistema',
  'LBL_WIZ_TIMEFORMAT' => 'Format vremena',
  'LBL_WIZ_TIMEZONE' => 'Vremenska zona',
  'LBL_WIZ_USER_LOCALE_TITLE' => 'Lokalna podešavanja korisnika',
  'LBL_WIZ_USER_PROFILE_TITLE' => 'Profil korisnika',
  'LBL_WORST' => 'Najgore',
  'LBL_WORST_ADJUSTED' => 'Najgore (prilagođeno)',
  'LBL_YES' => 'Da',
  'LBL_YESTERDAY' => 'juče',
  'LBL_YOU' => 'Vi',
  'LBL_YOUR_INSTANCES' => 'Vaše instance',
  'LNK_ABOUT' => 'O nama',
  'LNK_ADVANCED_SEARCH' => 'Napredna pretraga',
  'LNK_BACKTOTOP' => 'Nazad na vrh',
  'LNK_BASIC_SEARCH' => 'Osnovna pretraga',
  'LNK_CLOSE' => 'zatvori',
  'LNK_CREATE' => 'Kreiraj',
  'LNK_CREATE_WHEN_EMPTY' => 'Kreirajte zapis sad.',
  'LNK_DELETE' => 'obriši',
  'LNK_DELETE_ALL' => 'obriši sve',
  'LNK_EDIT' => 'izmeni',
  'LNK_GET_LATEST' => 'Nabavi najnoviji',
  'LNK_GET_LATEST_TOOLTIP' => 'Zameni sa najnovijom verzijom',
  'LNK_HELP' => 'Pomoć',
  'LNK_LIST_END' => 'Kraj',
  'LNK_LIST_NEXT' => 'Sledeći',
  'LNK_LIST_PREVIOUS' => 'Prethodni',
  'LNK_LIST_RETURN' => 'Povratak na listu',
  'LNK_LIST_START' => 'Početak',
  'LNK_LOAD_SIGNED' => 'Potpis',
  'LNK_LOAD_SIGNED_TOOLTIP' => 'Zameni potpisanim dokumentom',
  'LNK_MOBILE' => 'Mob. telefon',
  'LNK_OFFLINE_SETTINGS' => 'Offline',
  'LNK_PMSE_BUSINESS_RULES_IMPORT_RECORD' => 'Uvesti Pravila Procesnog Poslovanja',
  'LNK_PMSE_BUSINESS_RULES_NEW_RECORD' => 'Kreirati Pravila Procesnog Poslovanja',
  'LNK_PMSE_EMAIL_TEMPLATES_IMPORT_RECORD' => 'Uvesti Šablon Procesnog Email-a',
  'LNK_PMSE_EMAIL_TEMPLATES_NEW_RECORD' => 'Kreirati Šablon Procesnog Email-a',
  'LNK_PMSE_PROCESS_DEFINITIONS_IMPORT_RECORD' => 'Uvesti Procesne Definicije',
  'LNK_PMSE_PROCESS_DEFINITIONS_NEW_RECORD' => 'Kreirati Procesne Definicije',
  'LNK_PORTAL_LOGIN_FORGOTPASSWORD' => 'Zaboravili ste lozinku?',
  'LNK_PRINT' => 'Štampanje',
  'LNK_PRIVACY_POLICY' => 'Politika privatnosti',
  'LNK_REMOVE' => 'Ukloni',
  'LNK_RESUME' => 'Nastavi',
  'LNK_SAVED_VIEWS' => 'Opcije za Izgled',
  'LNK_SEARCH_FTS_VIEW_ALL' => 'Pregledaj sve rezultate',
  'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Prikaži sve',
  'LNK_SEARCH_NO_RESULTS' => 'Nije pronađen ni jedan rezultat.',
  'LNK_SETTINGS' => 'Podešavanja',
  'LNK_TERMS_OF_USE' => 'Uslovi korišćenja',
  'LNK_THIRD_PARTY_SOFTWARE' => 'Treća strana softvera',
  'LNK_TOUR' => 'Tura',
  'LNK_TOUR_DOCUMENTATION' => 'dokumentacija',
  'LNK_VIEW' => 'pregled',
  'LNK_VIEW_CHANGE_LOG' => 'Pogledaj dnevnik promena',
  'LOGIN_LOGO_ERROR' => 'Molim, promenite SugarCRM logoe.',
  'MSG_DUPLICATE' => 'Zapis {0} koji pokušavate da kreirate može biti duplikat {0} zapisa koji već postoji. {1} zapisi koji imaju slična imena izlistani su ispod.<br /><br><br />Kliknite na "Napravi {1}" da biste nastavili kreiranje ovog novog {0}, ili odaberite postojeći {0} iz liste ispod.',
  'MSG_EMPTY_LIST_VIEW_GO_TO_PARENT' => 'Možete kreirati iz . list.',
  'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Trenutno nemate ni jedan sačuvan zapis.',
  'MSG_EMPTY_LIST_VIEW_NO_RESULTS_NO_IMPORT' => 'Trenutno nemate sačuvanih zapisa. sada jedan.',
  'MSG_IS_LESS_THAN' => 'je manje od',
  'MSG_IS_MORE_THAN' => 'je više od',
  'MSG_IS_NOT_BEFORE' => 'nije pre',
  'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => 'Kliknite OK da bi videli ovaj poziv ili kliknite Otkaži da odbacite ovu poruku.',
  'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Opis:',
  'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Lokacija:',
  'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => 'Kliknite OK da bi videli ovaj sastanak ili kliknite Otkaži da odbacite ovu poruku.',
  'MSG_JS_ALERT_MTG_REMINDER_START' => 'počinje',
  'MSG_LIST_VIEW_NO_RESULTS' => 'Nisu pronađeni rezultati za',
  'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Nije pronađen ni jedan rezultat.',
  'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Napravi kao novi',
  'MSG_OR_GREATER' => 'ili veće',
  'MSG_SHOULD_BE' => 'treba da bude',
  'MSG_SHOW_DUPLICATES' => 'Zapis {0} koji pokušavate da kreirate može biti duplikat {0} zapisa koji već postoji. {1} zapisi koji imaju slična imena izlistani su ispod.<br /><br><br />Kliknite na "Sačuvaj {1}" da biste nastavili kreiranje ovog novog {0}, ili kliknite na "Poništi" da biste se vratili na modul bez kreiranja {0}',
  'NOTICE_NO_DELETE_CLOSED' => 'Ne možete da izbrišete zapise koji imaju zatvoren status prodaje.',
  'NOTICE_NO_DELETE_CLOSED_STAGE' => 'Ne možete obrisati zapise koji su u fazi zatvaranja prodaje.',
  'NOTICE_NO_DELETE_CLOSED_STATUS' => 'Ne možete obrisati zapise koji imaju status zatvorene prodaje.',
  'NO_QUERY_SELECTED' => 'Format podatka koji ste izabrali ne sadrži upit. Molim, izaberite sopstveni upit za ovaj format podatka.',
  'NTC_CLICK_BACK' => 'Molim, kliknite na svom internet pretraživaču dugme za nazad da bi ispravili grešku.',
  'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
  'NTC_DATE_TIME_FORMAT' => '(yyyy-mm-dd 24:00)',
  'NTC_DELETE_CONFIRMATION' => 'Da li ste sigurni da želite da obrišete ovaj zapis?',
  'NTC_DELETE_CONFIRMATION_FORMATTED' => 'Da li ste sigurni da želite da obrišete {0}?',
  'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Da li ste sigurni da želite da obrišete izabrane zapise?',
  'NTC_DELETE_CONFIRMATION_NUM' => 'Da li ste sigurni da želite da obrišete',
  'NTC_DELETE_SELECTED_RECORDS' => 'izabrani zapis(i)?',
  'NTC_DELETE_SUCCESS' => 'Izbrisali ste',
  'NTC_LOGIN_MESSAGE' => 'Molim, unesite svoje korisničko ime i lozinku.',
  'NTC_NO_ITEMS_DISPLAY' => 'nijedan',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Ovaj zapis trenutno sadrži vrednosti u poljima Poslovni telefon i Adresa. Da bi prepisali sve vrednosti sa sledećim Poslovnim telefonom i Adresom Kompanije koju ste izabrali, kliknite "OK". Da bi sačuvali trenutne vrednosti , kliknite na "Otkaži" .',
  'NTC_REMOVE_CONFIRMATION' => 'Da li ste sigurni da želite da uklonite ovu vezu? Samo veza će biti uklonjena. Zapis neće biti obrisan.',
  'NTC_REQUIRED' => 'Označava obavezno polje',
  'NTC_SUPPORT_SUGARCRM' => 'Podržite SugarCRM projekat otvorenog koda donacijom preko PayPal-a - brzo je, besplatno i sigurno!',
  'NTC_TEMPLATES_IS_USED' => 'Sledeći šabloni su korišćeni u makar jednom email marketing zapisu. Da li ste sigurni da hoćete da ih obrišete?',
  'NTC_TEMPLATE_IS_USED' => 'Šablon je korišćen u makar jednom email marketing zapisu. Da li ste sigurni da hoćete da ga obrišete?',
  'NTC_TIME_FORMAT' => '(24:00)',
  'NTC_UNLINK_CONFIRMATION' => 'Da li ste sigurni da želite da otkačite ovaj zapis?',
  'NTC_UNLINK_CONFIRMATION_FORMATTED' => 'Da li si siguran da želiš da raskineš vezu {0}?',
  'NTC_UNLINK_SUCCESS' => 'Raskinuli ste vezu',
  'NTC_UPDATE_CONFIRMATION_NUM' => 'Da li ste sigurni da želite da ažurirate',
  'NTC_WELCOME' => 'Dobrodošli',
  'NTC_YEAR_FORMAT' => '(yyyy)',
  'NavigationBar' => 'Navigacioni bar',
  'PrimaryButton' => 'Primarno dugme',
  'SUGAR_API_EXCEPTION_NOT_AUTHORIZED' => 'Nije dozvoljeno promeniti polje {0} u modulu: {1}',
  'SUGAR_API_EXCEPTION_RECORD_NOT_AUTHORIZED' => 'Nije dozvoljeno izvršavanje akcije "{0}" na ovom zapisu',
  'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
  'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if name}}{{name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
  'TPL_DASHLET_MY_MODULE' => 'Moje {{module}}',
  'TPL_DELETE_FILTER_SUCCESS' => 'Izbrisali ste filter {{name}}.',
  'TPL_FILTER_SAVE' => 'Uspešno ste napravili filter {{name}}.',
  'TPL_HISTORICAL_SUMMARY' => 'Istorijski prikaz za {{name}}',
  'TPL_IMPORT_VCARD_FAILURE' => 'Pravljenje modula {{module}} iz virtuelnog imenika nije uspelo',
  'TPL_INACTIVE_TASKS_DASHLET_TIME_RELATIVE' => 'poslednja izmena {{relativetime}} ne {{date}} u {{time}}',
  'TPL_LISTVIEW_SELECTED_ALL' => 'Izabrali ste svih {{num}} zapisa iz skupa rezultata.',
  'TPL_LISTVIEW_SELECTED_FIRST_OFFSET' => 'Postoji više od {{num}} zapisa u grupi rezultata. Izabrali ste prvih {{num}} zapisa.',
  'TPL_LISTVIEW_SELECT_ALL_RECORDS' => 'Izabrali ste svih {{num}} zapisa u ovom pogledu. {{link}} u skupu rezultata.',
  'TPL_MASSADDTOLIST_DURATION_FORMAT' => '(oko {{time}} {{unit}} preostalo)',
  'TPL_MASSADDTOLIST_FAIL_TO_ATTEMPT' => 'Grupno dodavanj na listu ciljeva nije uspelo. Iniciram novi pokušaj ({{num}} of {{total}}).',
  'TPL_MASSADDTOLIST_PROGRESS_STATUS' => 'Dodavanje {{num}} od {{total}}.',
  'TPL_MASSADDTOLIST_SUCCESS' => '{{num}} zapisa je uspešno dodato.',
  'TPL_MASSADDTOLIST_TITLE' => '{{module}} Grupno dodavanje na listu ciljeva',
  'TPL_MASSADDTOLIST_WARNING_CLOSE' => 'Grupno dodavanje na listu ciljeva je nepotpuno. {{num}} zapisa nije dodato.',
  'TPL_MASSADDTOLIST_WARNING_INCOMPLETE' => 'Grupno dodavanje na listu ciljeva je nepotpuno. {{num}} zapisa nije dodato.',
  'TPL_MASSDELETE_DURATION_FORMAT' => '(oko {{time}} {{unit}} preostalo)',
  'TPL_MASSDELETE_FAIL_TO_ATTEMPT' => 'Grupno brisanje nije uspelo. Pokušavam ponovo ({{num}} of {{total}}).',
  'TPL_MASSDELETE_PROGRESS_STATUS' => 'Briše se {{num}} od {{total}}.',
  'TPL_MASSDELETE_SUCCESS' => '{{num}} zapisa je uspešno obrisano.',
  'TPL_MASSDELETE_TITLE' => '{{module}} Grupno prosanje',
  'TPL_MASSDELETE_WARNING_CLOSE' => 'Grupno brisanje nije završeno. {{num}} zapisa je preostalo.',
  'TPL_MASSDELETE_WARNING_INCOMPLETE' => 'Grupno brisanje nije završeno. {{num}} zapisa je preostalo.',
  'TPL_MASSLINK_DURATION_FORMAT' => '(oko {{time}} {{unit}} preostalo)',
  'TPL_MASSLINK_FAIL_TO_ATTEMPT' => 'Grupno povezivanje nije uspelo.  Novi pokušaj ({{num}} of {{total}}).',
  'TPL_MASSLINK_PROGRESS_STATUS' => 'Povezivanje {{num}} od {{total}}.',
  'TPL_MASSLINK_SUCCESS' => '{{num}} zapisa je uspešno povezano.',
  'TPL_MASSLINK_TITLE' => '{{module}} Grupno Povezivanje',
  'TPL_MASSLINK_WARNING_CLOSE' => 'Grupno povezivanje nije završeno. {{num}} zapisa nije dodato.',
  'TPL_MASSLINK_WARNING_INCOMPLETE' => 'Grupno povezivanje nije završeno. {{num}} zapisa nije dodato.',
  'TPL_MASSUPDATE_DURATION_FORMAT' => '(oko {{time}} {{unit}} preostalo)',
  'TPL_MASSUPDATE_FAIL_TO_ATTEMPT' => 'Grupno ažuriranje nije uspelo. Pokušavam ponovo ({{num}} of {{total}}).',
  'TPL_MASSUPDATE_PROGRESS_STATUS' => 'Ažurira se {{num}} od {{total}}.',
  'TPL_MASSUPDATE_SUCCESS' => '{{num}} zapisa je uspešno ažurirano.',
  'TPL_MASSUPDATE_TITLE' => '{{module}} Grupno ažuriranje',
  'TPL_MASSUPDATE_WARNING_CLOSE' => 'Grupno ažuriranje nije potpuno. {{num}} zapisa je ostalo nepromenjeno.',
  'TPL_MASSUPDATE_WARNING_INCOMPLETE' => 'Grupno ažuriranje nije potpuno. {{num}} zapisa je ostalo nepromenjeno.',
  'TPL_MASSUPDATE_WARNING_PERMISSION' => '{{remain}} zapis(a) je ignorisno zbog permisija.',
  'TPL_MASS_ADD_TO_LIST_QUEUED' => 'Vaš zahtev za dodavanje izabranih zapisa na <a href="{{listUrl}}">{{listName}}</a> listu ciljeva je zakazan.',
  'TPL_MASS_ADD_TO_LIST_SUCCESS' => 'Izabrani zapisi su dodati na  <a href="{{listUrl}}">{{listName}}</a> listu ciljeva.',
  'TPL_MERGE_DUPLICATES_FAIL' => 'Spajanje povezanih {{objectName}} nije uspelo.',
  'TPL_MERGE_DUPLICATES_FAIL_TO_ATTEMPT' => 'Spajanje povezanih {{objectName}} nije uspelo. Iniciram novi pokušaj ({{num}} of {{total}}).',
  'TPL_MERGE_DUPLICATES_IDENTICAL' => 'Svi povezani zapisi će biti prebačeni u primarni zapis',
  'TPL_MERGE_DUPLICATES_PROGRESS_STATUS' => 'Spojeno: {{percent}}%.',
  'TPL_MERGE_DUPLICATES_STAT' => '{{#with stat}}{{records}} zapisa je uspešno spojeno. {{total}} povezanih zapisa je dodato.{{/with}}',
  'TPL_MERGE_INVALID_NUMBER_RECORDS' => 'Prosleđen je neispravan broj zapisa. Ispravan opseg je između 2 i {{maxRecords}} zapisa.',
  'TPL_MERGING_RECORDS' => 'Spajanje {{mergeCount}} zapisa',
  'TPL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_DESCRIPTION' => 'Za slanje notifikacije dodeljivanja zapisa, SMTP sever mora biti konfigurisan u {{emailSettingsUrl}}.',
  'TPL_OVERWRITE_POPULATED_DATA_CONFIRM' => 'Izabrani zapis sadrži sledeće povezane vrednosti: {{{values}}}. Kliknite "Potvrđujem" za kopiranje ovih vrednosti u ovaj zapis. Kliknite "Otkazujem" da zadržite trenutne vrednosti.',
  'TPL_OVERWRITE_POPULATED_DATA_CONFIRM_WITH_MODULE_SINGULAR' => 'Izabrani modul {{moduleSingularLower}} ima povezane vrednosti: {{values}}. Otkažite promenu da zadržite postojeće vrednosti. Potvrdite promenu da upišete nove vrednosti.',
  'TPL_RECORD_SHARE_BODY' => 'Pogledaj {{module}} {{name}} od {{appId}}',
  'TPL_RECORD_SHARE_SUBJECT' => 'Podeljen je {{module}} {{name}} od {{appId}}',
  'TPL_SHOW_MORE_MODULE' => 'Još {{module}}...',
  'TPL_STATUS_CHANGE_SUCCESS' => '{{moduleSingular}} označen kao {{status}}.',
  'TPL_TABBED_DASHLET_GROUP_BUTTON_LABEL' => 'Timska istorija',
  'TPL_TABBED_DASHLET_USER_BUTTON_LABEL' => 'Moja istorija',
  'TPL_TIMEZONE_DIFFERENT' => 'Vremenska zona vašeg pregledača se ne podudara sa vašom sačuvanom vremenskom zonom {{link}}',
  'UPLOAD_ERROR_HOME_TEXT' => 'Greška: Došlo je do greške za vreme postavljanja, molimo kontaktirajte administratora za pomoć.',
  'UPLOAD_ERROR_TEXT' => 'Greška: Došlo je do greške za vreme postavljanja datoteke. Šifra greške: {0} - {1}',
  'UPLOAD_ERROR_TEXT_SIZEINFO' => 'Greška: Došlo je do greške za vreme postavljanja datoteke. Šifra greške: {0} - {1}. Maksimalna veličina datoteke za postavljanje je {2}',
  'UPLOAD_MAXIMUM_EXCEEDED' => 'Veličina datoteke za postavljanje ({0} bytes) prekoračila je dozvoljeni maksimum od {1} bajtova',
  'UPLOAD_REQUEST_ERROR' => 'Desila se greška. Molim osvežite vašu stranicu i probajte ponovo.',
  'WARNING_NO_DELETE_CLOSED_SELECTED_STATUS' => 'Jedan ili više odabranih zapisa imaju RLI sa statusom Zatvoreni Dobitak ili Zatvoreni Gubitak i ne može biti izbrisan.',
  'WARNING_NO_DELETE_SELECTED' => 'Jedan ili više izabranih zapisa ima status zatvoren i dobijen ili zatvoren i izgubljen i ne mogu biti obrisani.',
  'WARNING_NO_DELETE_SELECTED_STAGE' => 'Jedan ili više odabranih zapisa se nalaze u fazi Zatvorenog Dobitka ili Zatvorenog Gubitna i ne mogu biti obrisani.',
  'WARNING_NO_DELETE_SELECTED_STATUS' => 'Jedan ili više odabranih zapisa su u statusu Zatvorenog Dobitka ili Zatvorenog Gubitna i ne mogu biti obrisani.',
  'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Upozorenje:</b> Vaš pregledač je u IE modu kompatibilnosti što nije podržano.',
  'WARN_BROWSER_VERSION_WARNING' => '<b>Upozorenje</b>: Verzija Vašeg web pregledača više nije podržana ili koristite pregledač koji nije podržan.',
  'WARN_LICENSE_EXPIRED' => 'Vaša kompanijska licenca za SugarCRM uskoro ističe.',
  'WARN_LICENSE_SEATS' => 'Upozorenje: Broj aktivnih korisnika je već maksimalni broj dozvoljenih licenci.',
  'WARN_LICENSE_SEATS_MAXED' => 'Upozorenje: Broj aktivnih korisnika prelazi maksimalni broj dozvoljenih licenci.',
  'WARN_LICENSE_VALIDATION' => 'Potrebna je validacija vaše kompanijske licence za SugarCRM.',
  'WARN_ONLY_ADMINS' => 'Samo administratori mogu da se prijave.',
  'WARN_UNSAVED_CHANGES' => 'Napuštate ovaj zapis bez da ste sačuvali izvršene izmene koje ste napravili. Da li ste sigurni da želite da napustite ovaj zapia?',
);

