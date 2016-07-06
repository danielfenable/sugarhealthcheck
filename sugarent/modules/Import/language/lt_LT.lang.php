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
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Jūs negalite importuoti administracinio vartotojo',
  'ERR_MISSING_MAP_NAME' => 'Trūksta susijusio pavadinimo',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Trūksta reikiamų laukų:',
  'ERR_MULTIPLE' => 'Keli stulpeliai buvo pavadinti tuo pačiu lauko pavadinimu.',
  'ERR_MULTIPLE_PARENTS' => 'Jūs galite nurodyti tik vieną pagrindinį ID',
  'ERR_SELECT_FILE' => 'Pasirinkite failą užkrovimui.',
  'ERR_SELECT_FULL_NAME' => 'Negalima pasirinkti pilno vardo, kai vardas ir pavardė yra jau pasirinkti.',
  'LBL_' => '',
  'LBL_ACCOUNTS_NOTE_1' => 'Laukai pasibaigiantys Adresas gatvė 2 ir Adresas gatvė 3 yra susiejami kartu su pagrindine Adresas gatvė lauku kai įdedama į duomenų bazę.',
  'LBL_ACT' => 'ACT!',
  'LBL_ACT_NUM_1' => 'Paleisti <b>ACT!</b>',
  'LBL_ACT_NUM_10' => 'Pasirinkite <b>Visi įrašai</b> ir tada paspauskite <b>Užbaigti</b>',
  'LBL_ACT_NUM_2' => 'Pasirinkite  <b>failą</b> meniu,  <b>Duomenų apsikeitimas</b> meniu pasirinkime, tada  <b>Eksportuoti...</b> meniu pasirinkime',
  'LBL_ACT_NUM_3' => 'Pasirinkite failo tipą <b>Text-Delimited</b>',
  'LBL_ACT_NUM_4' => 'Pasirinkite failo pavadinimą ir vietą eksportuotiems duomenims ir paspauskite <b>Next</b>',
  'LBL_ACT_NUM_5' => 'Pasirinkite <b>Contacts records only</b>',
  'LBL_ACT_NUM_6' => 'Paspauskite  <b>Options..</b> mygtuką',
  'LBL_ACT_NUM_7' => 'Pasirinkite <b>Comma</b> kaip lauko skiriamąjį ženklą',
  'LBL_ACT_NUM_8' => 'Pažymėkite  <b>Yes, export field names</b> ir paspauskite <b>OK</b>',
  'LBL_ACT_NUM_9' => 'Paspauskite <b>Toliaut</b>',
  'LBL_ADD_FIELD_HELP' => 'Naudokite šį metodą, kad reikšmę priskirti visiems to stulpelio įrašams.',
  'LBL_ADD_ROW' => 'Pridėti lauką',
  'LBL_ARE_YOU_SURE' => 'Ar tikrai? Tai ištrins visą informaciją šiame modulyje.',
  'LBL_ASSIGNED_USER' => 'Jeigu tokio vartotojo nėra, naudoti esamą vartotoją',
  'LBL_AUTO_DETECT_ERROR' => 'Nepavyko nustatyti laukų skirtuko. Prašome importuojamo failo nustatymus.',
  'LBL_BACK' => '< Atgal',
  'LBL_CANCEL' => 'Atšaukti',
  'LBL_CANNOT_OPEN' => 'Nepavyksta atidaryti skaitymui importuoto failo',
  'LBL_CHARSET' => 'Failo koduotė',
  'LBL_CONFIRM_EXT_TITLE' => '{0} žingsnis: Patvirtinti išorinių šaltinių savybes',
  'LBL_CONFIRM_IMPORT' => 'Jūs pasirinkote atnaujinti įrašus importavimo metu.',
  'LBL_CONFIRM_MAP_OVERRIDE' => 'Įspėjimas: Jūs jau esate pasirinkę šiam importui nestandartinį susiejimą. Ar norite tęsti?',
  'LBL_CONFIRM_TITLE' => 'Step {0}: Patvirtinti importuojamos bylos nustatymus',
  'LBL_CONTACTS_NOTE_1' => 'Vardas ir pavardė turi būti susieti.',
  'LBL_CONTACTS_NOTE_2' => 'Jeigu pilnas vardas yra susietas, tai vardas ir pavardė bus ignoruojami.',
  'LBL_CONTACTS_NOTE_3' => 'Jeigu pilnas vardas yra susietas, tai duomenys esantys pilname varde importo metu bus padalinti į vardą ir pavardę.',
  'LBL_CONTACTS_NOTE_4' => 'Laukai pasibaigiantys Adresas gatvė 2 ir Adresas gatvė 3 yra susiejami kartu su pagrindine Adresas gatvė lauku kai įdedama į duomenų bazę.',
  'LBL_CREATED_TAB' => 'Sukurti įrašai',
  'LBL_CREATE_BUTTON_HELP' => 'Naudoti šį metodą, kad sukurti naujus įrašus.',
  'LBL_CSV' => 'Kableliais atskirtas tekstinis failas',
  'LBL_CURRENCY' => 'Valiuta',
  'LBL_CURRENCY_SIG_DIGITS' => 'Valiutos skaičiai',
  'LBL_CUSTOM' => 'Įprastas',
  'LBL_CUSTOM_CSV' => 'Nestandartiniais kableliais atskirtas tekstinis failas',
  'LBL_CUSTOM_DELIMITED' => 'Kitoks duomenų atskyrimas',
  'LBL_CUSTOM_DELIMITER' => 'Laukai atriboti:',
  'LBL_CUSTOM_ENCLOSURE' => 'Laukai tarp:',
  'LBL_CUSTOM_NUM_1' => 'Paleiskite programą ir atidarykite duomenų failą',
  'LBL_CUSTOM_NUM_2' => 'Pasirinkite  <b>Išsaugoti kaip...</b> arba <b>Eksportuoti...</b> meniu pasirinkime',
  'LBL_CUSTOM_NUM_3' => 'Išsaugokite failą  <b>CSV</b> arba <b>kableliais atskirtos reikšmės</b>formatu',
  'LBL_CUSTOM_TAB' => 'Nestandartiniais tarpais atskirtas tekstinis failas',
  'LBL_DATABASE_FIELD' => 'Duomenų bazė laukas',
  'LBL_DATABASE_FIELD_HELP' => 'Pasirinkite lauką iš sąrašo visų laukų esamų duomenų bazėje moduliui.',
  'LBL_DATE_FORMAT' => 'Datos formatas:',
  'LBL_DEBUG_MODE' => 'Įjungti klaidų ieškojimo rėžimą',
  'LBL_DECIMAL_SEP' => 'Dešimtainės skirtukas',
  'LBL_DEFAULT_VALUE' => 'Numatyta reikšmė',
  'LBL_DEFAULT_VALUE_HELP' => 'Nurodo reikšmę, kurią reikia naudoti laukui sukurti arba atnaujinti įrašą jeigu laukas importuojamame faile neturi duomenų.',
  'LBL_DELETE' => 'Ištrinti',
  'LBL_DELETE_MAP_CONFIRMATION' => 'Ar Jūs tikrai norite ištrinti šiuos išsaugotus importavimo nustatymus?',
  'LBL_DELIMITER_COMMA_HELP' => 'Pasirinkite šį pasirinkimą jeigu simbolis, kuris atskiria laukus importavimo faile yra <b>kablelis</b>, arba jeigu failo praplėtimas yra .csv.',
  'LBL_DELIMITER_CUSTOM_HELP' => 'Pasirinkite šį pasirinkimą jeigu simbolis, kuris atskiria laukus importavimo faile nėra nei kablelis arba tarpas, ir įrašykite į gretimą lauką.',
  'LBL_DELIMITER_TAB_HELP' => 'Pasirinkite šį pasirinkimą jeigu simbolis, kuris atskiria laukus importavimo faile yra <b>tarpas</b>, ir jeigu failo praplėtimas yra .txt.',
  'LBL_DESELECT' => 'atžymėti',
  'LBL_DONT_MAP' => '-- Nesusieti šio lauko --',
  'LBL_DUPLICATES' => 'Rasti dublikatai',
  'LBL_DUPLICATE_TAB' => 'Dublikatai',
  'LBL_DUP_HELP' => 'Štai besidubliuojančios eilutės, kurios nebuvo įkeltos.',
  'LBL_ENCLOSURE_HELP' => '<p><b>Apibrėžtas simbolis</b> naudojamas pridėti reikiamus lauko elementus, įskaitant bet kokį simbolį, kurie naudojami kaip atskyrėjai.<br><br>Pavyzdžiui: Jeigu skyriklis yra kablelis (,) ir  specialus simbolis yra ("),<br><b>"Cupertino, California"</b> yra importuojamas į vieną lauką programoje ir atrodo taip:<b>Cupertino, California</b>.<br>Jeigu nėra skyriklio arba skirtingi skyrikliai,<br><b>"Cupertino, California"</b> yra importuojama į du laukus <b>"Cupertino"</b> ir <b>"California"</b>.<br><br>Pastaba: Importuojamas failas gali talpinti bet kokį specialų simbolį.<br>Numatytasis skyriklis yra kablelis- ir kortelė- atskirti failams sukurti Excelyje .</p>',
  'LBL_ERROR' => 'Klaida:',
  'LBL_ERROR_DELETING_RECORD' => 'Klaida trinant įrašą',
  'LBL_ERROR_HELP' => 'Štai eilutės, kurių nepavyko įkelti dėl atsiradusių klaidų. Nusikraukite šį sąrašą, padarykite atitinkamas korekcija ir spauskite Importuoti vėl.',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Importavimo funkcija nėra įjungta šiam modulio tipui',
  'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Import cache direktorija nėra įrašoma.',
  'LBL_ERROR_INVALID_ACCOUNT' => 'Neteisingas kliento vardas arba ID',
  'LBL_ERROR_INVALID_BOOL' => 'Neteisinga reikšmė (turi būti 1 arba 0)',
  'LBL_ERROR_INVALID_CURRENCY' => 'Neteisinga valiutos reikšmė',
  'LBL_ERROR_INVALID_DATE' => 'Neteisingas datos laukas',
  'LBL_ERROR_INVALID_DATETIME' => 'Neteisingi data-laikas',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Neteisingi data-laikas',
  'LBL_ERROR_INVALID_EMAIL' => 'Neteisingas el. pašto adresas',
  'LBL_ERROR_INVALID_FLOAT' => 'Neteisingas slenkančio kablelio skaičius',
  'LBL_ERROR_INVALID_ID' => 'Duotas ID yra per ilgas, kad tilptų į lauką (maksimalus ilgis 36 simboliai)',
  'LBL_ERROR_INVALID_INT' => 'Neteisinga sveiko skaičiaus reikšmė',
  'LBL_ERROR_INVALID_NAME' => 'Žodis per ilgas kad tilptų į lauką',
  'LBL_ERROR_INVALID_NUM' => 'Neteisinga skaitmenų reikšmė',
  'LBL_ERROR_INVALID_PHONE' => 'Neteisingas telefono numeris',
  'LBL_ERROR_INVALID_RELATE' => 'Neteisingas susiejimo laukas',
  'LBL_ERROR_INVALID_TEAM' => 'Neteisingas komandos vardas arba ID',
  'LBL_ERROR_INVALID_TIME' => 'Neteisingas laikas',
  'LBL_ERROR_INVALID_USER' => 'Neteisingas vartotojo vardas arba ID',
  'LBL_ERROR_INVALID_VARCHAR' => 'Žodis per ilgas kad tilptų į lauką',
  'LBL_ERROR_NOT_IN_ENUM' => 'Tokios reikšmės nėra iššokančiame sąraše. Galimos reikšmės:',
  'LBL_ERROR_SELECTING_RECORD' => 'Klaida pasirenkant įrašą',
  'LBL_ERROR_SYNC_USERS' => 'Neteisingos reikšmės sinchronizuojamos į Outlook:',
  'LBL_ERROR_TAB' => 'Klaidos',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Nepavyko paskelbti. Kitas importo išdėstymas jau yra paskelbtas tokiu pačiu pavadinimu.',
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Nepavyko paslėpti kito vartotojo importo išdėstymo. Jums priklauso importo išdėstymas tokiu pačiu pavadinimu.',
  'LBL_EXAMPLE_FILE' => 'Nusikrauti importuojamo failo šabloną',
  'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Jei norite naujus įrašus priskirti kitam darbuotojui,  tam panaudokite numatytos reikšmės stulpelį ir pasirinkite kitą vartotoją.',
  'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Nurodykite kokią reikšmę priskirti įrašui, jeigu laukas tuo atveju būtų tuščias.',
  'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Nepavyko aptikti išorinio kanalo, prašome pabandyti vėliau.',
  'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Nepavyko aptikti šaltinio adapterio, prašome pabandyti vėliau.',
  'LBL_EXTERNAL_FIELD' => 'Išorinis laukas',
  'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Šis stulpelis atvaizduoja duomenis, kurie bus įkelti į SugarCRM sistemą.',
  'LBL_EXTERNAL_MAP_HELP' => 'Lentelė žemiau atspindi laukų susiejimą iš importuojamų duomenų ir modulio duomenų. Patikrinkite, kad visi susiejimai yra teisingi. Taip pat būtinai susiekite privalomus laukus.',
  'LBL_EXTERNAL_MAP_NOTE' => 'Bus bandoma importuoti kontaktus iš visų Google kontaktų grupių.',
  'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Naujai sukurtų vartotojų vardai atitiks Google kontakto pilnus vardus. Prisireikus bus galima vėliau pasikeisti vartotojų vardus.',
  'LBL_EXTERNAL_MAP_SUB_HELP' => 'Spauskite Importuoti dabar, kad pradėti importavimą. Tik tie įrašai bus įkelti, kurie turi pavardę kaip netuščią reikšmę.',
  'LBL_EXTERNAL_SOURCE' => 'išorinė aplikacija ar servisas',
  'LBL_EXTERNAL_SOURCE_HELP' => 'Naudoti šį metodą,kai duomenys tiesiai įkeliami iš išorinių aplikacijų ir servisų, kaip Gmail.',
  'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Jei norite naujus įrašus priskirti kitai komandai,  tam panaudokite numatytos reikšmės stulpelį ir pasirinkite kitą komandą.',
  'LBL_EXT_SOURCE_SIGN_IN' => 'Prisijungti',
  'LBL_FAIL' => 'Nesėkmė:',
  'LBL_FAILURE' => 'Importas nepavyko:',
  'LBL_FIELD_DELIMETED_HELP' => 'Lauko skirtukas nurodo kokiu simboliu bus atskirti stulpeliai.',
  'LBL_FIELD_NAME' => 'Lauko pavadinimas',
  'LBL_FILE_ALREADY_BEEN_OR' => 'Importuojamas failas jau buvo įvykdytas arba neegzistuoja',
  'LBL_FILE_OPTIONS' => 'Failo savybės',
  'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Pasirinkite failą kuris turi duomenis atskirtus skirtukais, pavyzdžiui kableliu arba tarpeliu. Rekomenduojami .csv tipo failai.',
  'LBL_FINISHED' => 'Grįžti į',
  'LBL_GOOD_FILE' => 'Importuotas failas sėkmingai nuskaitytas',
  'LBL_HAS_HEADER' => 'Turi antraštę:',
  'LBL_HEADER_ROW' => 'Antraštės Eilutė',
  'LBL_HEADER_ROW_HELP' => 'Čia yra laukų pavadinimai antraštėje importuojamame faile.',
  'LBL_HEADER_ROW_OPTION_HELP' => 'Pažymėkite, jeigu pirma eilutė yra skirta stulpelių pavadinimams.',
  'LBL_HIDE_ADVANCED_OPTIONS' => 'Slėpti detalesnį pasirinkimą',
  'LBL_HIDE_NOTES' => 'Paslėpti užrašus',
  'LBL_HIDE_PREVIEW_COLUMNS' => 'Slėpti peržiūrimus stulpelius',
  'LBL_IDS_EXISTED_OR_LONGER' => 'Įrašai praleisti, nes id neegzistuoja arba yra ilgesnis nei 36 simboliai',
  'LBL_ID_EXISTS_ALREADY' => 'ID jau egzistuoja šioje lentelėje',
  'LBL_IMPORT_ACT_TITLE' => 'Act! gali eksportuoti duomenis <b>kableliais atskirtas reikšmes</b> formatu, kuriuos po to galima  importuoti į sistemą. Jei norite eksportuoti duomenys iš Act!, sekite šiuos žingsnius:',
  'LBL_IMPORT_BUTTON' => 'Sukurti įrašus',
  'LBL_IMPORT_COMPLETE' => 'Importavimas baigtas',
  'LBL_IMPORT_COMPLETED' => 'Importas užbaigtas',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Daugybė programų leidžia eksportuoti duomenis į <b>kableliais atskirtą tekstinį failą (.csv)</b> pagal šiuos žingsnius:',
  'LBL_IMPORT_ERROR' => 'Įvyko importo klaida',
  'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Importavimo failas turi {0} eilutes. Rekomenduotinas eilučių skaičius yra {1}. Didesnis kiekis eilučių gali sulėtinti importavimo eigą. Spauskite Gerai, kad tęsti importavimą. Spauskite Atšaukti, jei norite iš naujo naujo įkelti mažesnį failą.',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Vartotojas vardas arba ID',
  'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; arba &#39;1&#39;',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Skaitinis (leidžiamas dešimtainis)',
  'LBL_IMPORT_FIELDDEF_DATE' => 'Data',
  'LBL_IMPORT_FIELDDEF_DATETIME' => 'Data ir laikas',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Skaitinis (Ne dešimtainis)',
  'LBL_IMPORT_FIELDDEF_EMAIL' => 'El. pašto adresas',
  'LBL_IMPORT_FIELDDEF_ENUM' => 'Sąrašas',
  'LBL_IMPORT_FIELDDEF_FLOAT' => 'Skaitinis (leidžiamas dešimtainis)',
  'LBL_IMPORT_FIELDDEF_ID' => 'Unikalus ID numeris',
  'LBL_IMPORT_FIELDDEF_INT' => 'Skaitinis (Ne dešimtainis)',
  'LBL_IMPORT_FIELDDEF_NAME' => 'Bet koks tekstas',
  'LBL_IMPORT_FIELDDEF_NUM' => 'Skaitinis (Ne dešimtainis)',
  'LBL_IMPORT_FIELDDEF_PHONE' => 'Telefono numeris',
  'LBL_IMPORT_FIELDDEF_RELATE' => 'Vardas arba ID',
  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Komandos pavadinimas arba ID',
  'LBL_IMPORT_FIELDDEF_TEXT' => 'Bet koks tekstas',
  'LBL_IMPORT_FIELDDEF_TIME' => 'Laikas',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Bet koks tekstas',
  'LBL_IMPORT_FILE_SETTINGS' => 'Importuoti failo nustatymus',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Nurodykite nustatymus importuojamo failo, kad užtikrintumėte, kad importuoti duomenys yra<br> teisingi.  Šie nustatymai neapeis privilegijų. Įrašai<br> sukurti arba atnaujinti talpins nustatymus esančius Mano klientai puslapyje.',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Failas yra per didelis. Maksimalus:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Baitai. Pakeisti $sugar_config[&#39;upload_maxsize&#39;] config.php',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Nepavyko sėkmingai užkrauti failo. Patikrinkite failų prieigų teises Sugar cache aplanke.',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Nepavyko sėkmingai užkrauti failo. Tai gali būti dėl to, kad php.ini  nustatymuose Jūsų php.ini faile &#39;upload_max_filesize&#39; parametro reikšmė yra labai mažas skaičius.',
  'LBL_IMPORT_MODULE_MAP_ERROR' => 'Nepavyko paskelbti. Jau egzistuoja tokiu pavadinimu.',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Nepavyko paslėpti kito vartotojo importo išdėstymo. Jums priklauso importo išdėstymas tokiu pačiu pavadinimu.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Aplankas',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'neegzistuoja arba nėra įrašomas',
  'LBL_IMPORT_MODULE_NO_TYPE' => 'Importavimo funkcija nėra įjungta šiam modulio tipui',
  'LBL_IMPORT_MODULE_NO_USERS' => 'Dėmesio: Jūs nesukūrėte vartotojų sistemoje. Jeigu importuosite pirmiau negu sukursite vartotojus, visi įrašai bus automatiškai priskirti administratoriui.',
  'LBL_IMPORT_MORE' => 'Importuoti daugiau',
  'LBL_IMPORT_NOW' => 'Importuoti dabar',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 ir 2000 gali eksportuoti duomenis į <b>kablelis atskirtas reikšmes</b> formatu, kuris gali būti naudojamas importuoti duomenims į sistemą. Eksportuoti jūsų duomenis iš Outlook, sekite šiais žingsniais:',
  'LBL_IMPORT_RECORDS' => 'Importuojami įrašai',
  'LBL_IMPORT_RECORDS_OF' => 'iš',
  'LBL_IMPORT_RECORDS_TO' => 'į',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com gali eksportuoti duomenis <b>kableliu atskirtas reikšmes</b> formatu, kurie gali būti naudojami importuoti duomenis į sistemą. Eksportuoti jūsų duomenis iš Salesforce.com, sekite šiuos žingsnius:',
  'LBL_IMPORT_STARTED' => 'Importavimas prasidėjo:',
  'LBL_IMPORT_TAB_TITLE' => 'Daugybė programų leidžia eksportuoti duomenis į <b>tarpais atskirtą tekstinį failą  (.tsv arba .tab)</b> pagal šiuos žingsnius:',
  'LBL_IMPORT_TYPE' => 'Importavimo veiksmas',
  'LBL_INDEX_NOT_USED' => 'Nenaudojami raktai:',
  'LBL_INDEX_USED' => 'Naudojami raktai:',
  'LBL_LAST_IMPORTED' => 'Paskutinis importuotas',
  'LBL_LAST_IMPORT_UNDONE' => 'Jūsų paskutinis importavimas buvo panaikintas',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Vardas numatytasis formatas',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Pavyzdys',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Sveikinimas, "f" vardas, "l" pavardė</i>',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_MICROSOFT_OUTLOOK_HELP' => 'Microsoft Outlook naudoja .csv formatą. Jeigu Jūsų importuojamas failas yra tab formato, duomenys nebus teisingai surišti.',
  'LBL_MIME_TYPE_ERROR_1' => 'Pasirinktas failas neturi skirtukų. Prašome patikrinti failo tipą. mes rekomenduojame .csv tipo failus.',
  'LBL_MIME_TYPE_ERROR_2' => 'Jei norite toliau tęsti su failo importavimu, spauskite Gerai. Jei norite užkrauti naują failą, spauskite Bandyti vėl.',
  'LBL_MISSING_HEADER_ROW' => 'Nerasta stulpelių pavadinimų',
  'LBL_MODULE_NAME' => 'Importuoti',
  'LBL_MODULE_NAME_SINGULAR' => 'Importas',
  'LBL_MY_PUBLISHED_HELP' => 'Paskelbtas nurodo anksčiau naudota kombinaciją specifinių duomenų šaltinių ir rinkinį duomenų bazės laukų susietų su laukais importavimo faile.',
  'LBL_MY_SAVED' => 'Mano išsaugoti susiejimai:',
  'LBL_MY_SAVED_ADMIN_HELP' => 'Naudokite šį metodą, jei norite pasinaudoti tais pačiais importavimo nustatymais, kaip kad importavote anksčiau. <br /><br />Spauskite Paskelbti susiejimus prieinamus kitiems vartotojams.<br />Spauskite Paslėpti susiejimus nematomus kitiems vartotojams.<br />Spauskite Trinti ir susiejimai bus ištrinti visiems vartotojams.',
  'LBL_MY_SAVED_HELP' => 'Išsaugotas susiejimas nurodo anksčiau naudotą kombinaciją specifinių duomenų šaltinių ir rinkinį duomenų bazės laukų susietų su laukais importavimo faile.<br>Paspauskite <b>Paskelbti</b> įgalinti susiejimą prieinamą kitiems vartotojams.<br>Paspauskite <b>atšauti skelbimą</b> kad susiejimas būtų neprieinamas kitiems vartotojams.',
  'LBL_NEXT' => 'Toliau >',
  'LBL_NOLOCALE_NEEDED' => 'Jokių vietinių nustatymų keitimo nereikia',
  'LBL_NONE' => 'Joks',
  'LBL_NOTES' => 'Užrašai:',
  'LBL_NOT_MULTIENUM' => 'Nėra daugiamatis pasirinkimo sąrašas',
  'LBL_NOT_SAME_NUMBER' => 'Jūsų faile nesutampa laukų skaičius eilutėje',
  'LBL_NOT_SET_UP' => 'Importavimo funkcija nėra įjungta šiam modulio tipui',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Importavimo funkcija nėra įjungta šiam modulio tipui',
  'LBL_NOW_CHOOSE' => 'Dabar pasirinkite failą importavimui:',
  'LBL_NO_DATECHECK' => 'Netikrinti datų (bus greičiau, bet sustos, jei ras klaidą kurioje nors datoje)',
  'LBL_NO_EMAILS' => 'Nesiųsti el. pašto per importavimą',
  'LBL_NO_ID' => 'ID privalomas',
  'LBL_NO_IMPORT_TO_UNDO' => 'Nėra jokio importo kurį būtų galima panaikinti',
  'LBL_NO_LINES' => 'Nerasta eilučių Jūsų importuojamame faile',
  'LBL_NO_PRECHECK' => 'Vietinis formato rėžimas',
  'LBL_NO_RECORD' => 'Nėra ką atnaujinti su šiuo ID',
  'LBL_NO_WORKFLOW' => 'Nepaleidinėkite darbo sekų, kai vykdote šį importavimą',
  'LBL_NUMBER_GROUPING_SEP' => '1000 skirtukas',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_OK' => 'Gerai',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Dvigubos kabutės (")',
  'LBL_OPTION_ENCLOSURE_NONE' => 'Joks',
  'LBL_OPTION_ENCLOSURE_OTHER' => 'Kita:',
  'LBL_OPTION_ENCLOSURE_QUOTE' => 'Viengubos kabutės (&#39;)',
  'LBL_OUTLOOK_NUM_1' => 'Pradėti <b>Outlook</b>',
  'LBL_OUTLOOK_NUM_2' => 'Pasirinkite  <b>failas</b> meniu, tada  <b>Importuoti ir eksportuoti ...</b> meniu pasirinkimą',
  'LBL_OUTLOOK_NUM_3' => 'Pasirinkite <b>Eksportuoti į failą to a file</b> ir paspauskite Kitas',
  'LBL_OUTLOOK_NUM_4' => 'Pasirinkite <b> kableliu atskirtas reikšmes (Windows)</b> ir paspauskite <b>Toliau</b>.<br>    Pastaba: Jums gali sakyti, kad reikia instaliuoti eksportavimo komponentus',
  'LBL_OUTLOOK_NUM_5' => 'Pasirinkite  <b>Kontaktai</b> katalogą ir paspauskite <b>Toliau</b>. Galite pasirinkti skirtingus kontaktų katalogus, jeigu kontaktai talpinami daugybėje katalogų.',
  'LBL_OUTLOOK_NUM_6' => 'Pasirinkite failą ir paspauskite <b>Toliau</b>',
  'LBL_OUTLOOK_NUM_7' => 'Paspauskite <b>Užbaigti</b>',
  'LBL_PRE_CHECK_SKIPPED' => 'Pertikrinimas praleistas',
  'LBL_PUBLISH' => 'Paskelbti',
  'LBL_PUBLISHED_SOURCES' => 'Paskelbti susiejimai:',
  'LBL_RECORDS_SKIPPED' => 'Įrašai praleisti, nes jiems trūksta vieno ar kelių privalomų laukų',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Įrašai praleisti dėl klaidos',
  'LBL_RECORD_CANNOT_BE_UPDATED' => 'Duomenys nebuvo atnaujinti dėl saugumo priežasčių',
  'LBL_RELATED_ACCOUNTS' => 'Nesukurti susijusių klientų',
  'LBL_REMOVE_ROW' => 'Išmesti lauką',
  'LBL_REQUIRED_NOTE' => 'Privalomi laukai:',
  'LBL_REQUIRED_VALUE' => 'Trūksta privalomo lauko',
  'LBL_RESULTS' => 'Rezultatai',
  'LBL_ROW' => 'Eilutė',
  'LBL_ROW_HELP' => 'Tai yra duomenys pirmoje eilutėje importuojamo failo.',
  'LBL_ROW_NUMBER' => 'Eilutės Nr.',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_SAMPLE_URL_HELP' => 'Nusikraukite pavyzdinį importavimo failą su stulpelių pavadinimais. Šį failą galite naudoti kaip šabloną savo duomenims įkelti į SugarCRM.',
  'LBL_SAVE_AS_CUSTOM' => 'Išsaugoti kaip nestandartinį susiejimą:',
  'LBL_SAVE_AS_CUSTOM_NAME' => 'Nestandartinio susiejimo pavadinimas:',
  'LBL_SAVE_MAPPING_AS' => 'Išsaugoti susiejimą kaip',
  'LBL_SAVE_MAPPING_HELP' => 'Įveskite pavadinimą skirtą susieti duomenų bazės laukus esančius importavimo faile laukams.<br> Laukų rinkinys turintis laukų tvarką ir duomenų šaltinį pasirenkamas importavimo 1 žingsnyje, bus išsaugotas per importavimą.<br>Išsaugotas susiejimas gali būti pasirinktas 2 importavimo žingsnyje.',
  'LBL_SELECT_DS_INSTRUCTION' => 'Pasiruošę importuoti? Tada pasirinkite duomenų šaltinį.',
  'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Jeigu norite išvengti besidubliuojančių įrašų, prašome nurodyti pagal kuriuos stulpelius tikrinsime ar įrašai yra unikalūs.',
  'LBL_SELECT_FIELDS_TO_MAP' => 'Sąraše, pasirinkite laukus kuriuos norėtumėte importuoti iš failo. Kai tai padarysite, paspauskite <b>Importuoti dabar</b>:',
  'LBL_SELECT_FILE' => 'Pasirinkite failą:',
  'LBL_SELECT_MAPPING_INSTRUCTION' => 'Lentelė žemiau atspindi laukų susiejimą iš importuojamų duomenų ir modulio duomenų.',
  'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Štai taip SugarCRM nuskaitė importuojama failą. Patikrinkite importuojamo failo nustatymus ir padarykite atitinkamas korekcijas.',
  'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Pasirinkite failą savo kompiuteryje, kurio duomenis norėtumėte importuoti į SugarCRM arba nusikraukite šabloną, pagal kurį paruošite importuojamą failą.',
  'LBL_SF_NUM_1' => 'Atsidarykite naršyklę, eikite į http://www.salesforce.com, prisijunkite su savo el. pašto adresu ir slaptažodžiu',
  'LBL_SF_NUM_10' => '<b>Eksportuoti ataskaitą:</b>, <b>eksportuoti failą formatu:</b>, pasirinkite <b>Kableliu atskirtą .csv</b>. Paspauskite <b>Eksportuoti</b>.',
  'LBL_SF_NUM_11' => 'Iššoks naujas langas, kad galėtumėte išsaugoti eksporto failą į savo kompiuterį.',
  'LBL_SF_NUM_2' => 'Viršutiniame meniu paspauskite <b>Ataskaitos</b> kortelę',
  'LBL_SF_NUM_3' => '<b> Eksportuoti Klientus:</b> Paspauskite ant <b>Aktyvūs klientai</b> nuorodą<br><b> Eksportuoti kontaktus:</b> Paspauskite ant <b>Mailing List</b> link',
  'LBL_SF_NUM_4' => 'On <b>Žingsnis 1: Pasirinkite savo ataskaitą type</b>, pasirinkite <b>Kortelių ataskaita</b> paspauskite <b>Toliau</b>',
  'LBL_SF_NUM_5' => '<b>2 žingsnis: Pasirinkite  ataskaitą stulpeliais</b>, pasirinkite stulpelius, kuriuos norite eksportuoti ir paspauskite <b>Toliau</b>',
  'LBL_SF_NUM_6' => '<b>3 žingsnis: Pasirinkite apibendrinti informaciją</b>, just paspauskite <b>Kitas</b>',
  'LBL_SF_NUM_7' => '<b>4 žingsnis: Surikiuoti ataskaitos stulpelius</b>, paspauskite <b>Kitas</b>',
  'LBL_SF_NUM_8' => '<b>5 žingsnis: Pasirinkite  ataskaitos kriterijų</b>, virš <b>Pradžios datos</b>, pasirinkite data pakankamai atgal į laiką, kad galėtumėte importuoti visus klientus. Jūs galite taip pat eksportuoti  klientus naudojant detalesnius kriterijus. Kai baigsite paspauskite mygtuką <b>Vykdyti ataskaitas</b>',
  'LBL_SF_NUM_9' => 'Ataskaita bus sugeneruota ir puslapis parodys<b>Ataskaitos generavimo statusą: Baigta.</b> Dabar paspauskite <b>Eksportuoti į Excel</b>',
  'LBL_SHOW_ADVANCED_OPTIONS' => 'Rodyti detalesnį pasirinkimą',
  'LBL_SHOW_HIDDEN' => 'Rodo laukus, kurie standartiškai nėra importuojami',
  'LBL_SHOW_NOTES' => 'Užrašai',
  'LBL_SHOW_PREVIEW_COLUMNS' => 'Rodyti peržiūrimus stulpelius',
  'LBL_SIGN_IN_HELP' => 'Kad įjungti šį servisą, prašome nurodyti  savo vartotojo profilyje->Išoriniai prisijungimai.',
  'LBL_START_OVER' => 'Pradėti iš naujo',
  'LBL_STEP_1_TITLE' => '1 žingsnis: Pasirinkite duomenų šaltinį ir importavimo veiksmą',
  'LBL_STEP_2_TITLE' => '2 žingsnis: Užkrauti importuojamą failą',
  'LBL_STEP_3_TITLE' => '3 žingsnis: Patvirtinti laukus ir importuoti',
  'LBL_STEP_4_TITLE' => '4 žingsnis: Importuoti failą',
  'LBL_STEP_5_TITLE' => '5 žingsnis: Rodyti Rezultatus',
  'LBL_STEP_DUP_TITLE' => 'Step {0}: Patikrinti dėl galimų dublikatų',
  'LBL_STEP_MODULE' => 'Į kurį modulį Jūs norite importuoti duomenis?',
  'LBL_STRICT_CHECKS' => 'Naudoti griežtas taisyklių rinkinius (Tikrinti el. pašto adresus ir telefono numerius)',
  'LBL_SUCCESS' => 'Sėkmė:',
  'LBL_SUCCESSFULLY' => 'Sėkmingai importuotas',
  'LBL_SUCCESSFULLY_IMPORTED' => 'Įrašai sukurti sėkmingai',
  'LBL_SUMMARY' => 'Santrauka',
  'LBL_TAB' => 'Duomenys atskirti tarpais',
  'LBL_TAB_NUM_1' => 'Paleiskite programą ir atidarykite duomenų failą',
  'LBL_TAB_NUM_2' => 'Pasirinkite  <b>Išsaugoti kaip...</b> arba <b>Eksportuoti...</b> meniu pasirinkime',
  'LBL_TAB_NUM_3' => 'Išsaugokite failą <b>TSV</b> arba <b>tarpais atskirtos reikšmės</b> formatu',
  'LBL_TEST' => 'Testuoti importavimą (nepakeičia ir neišsaugo duomenų)',
  'LBL_THIRD_PARTY_CSV_SOURCES' => 'Prašome nurodyti iš kokios šaltinio importo duomenys yra kilę.',
  'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Pasirinkite šaltinį, kad automatiškai susieti laukus.',
  'LBL_TIMEZONE' => 'Laiko juosta:',
  'LBL_TIME_FORMAT' => 'Laiko formatas:',
  'LBL_TRUNCATE_TABLE' => 'Išvalyti lentelę prieš importavimą (ištrinti visus įrašus)',
  'LBL_TRY_AGAIN' => 'Bandyti dar kartą',
  'LBL_UNDO_LAST_IMPORT' => 'Pašalinti paskutinį importą',
  'LBL_UNIQUE_INDEX' => 'Pasirinkite raktą, pagal kurį bus tikrinami dublikatai',
  'LBL_UNPUBLISH' => 'Paslėpti',
  'LBL_UPDATE_BUTTON' => 'Sukurti ir atnaujinti įrašus',
  'LBL_UPDATE_BUTTON_HELP' => 'Naudoti šį metodą, kad atnaujinti esamus įrašus.',
  'LBL_UPDATE_RECORDS' => 'Atnaujinti egzistuojančius įrašus',
  'LBL_UPDATE_SUCCESSFULLY' => 'Įrašai sukurti arba atnaujinti sėkmingai',
  'LBL_VALUE' => 'Reikšmė',
  'LBL_VERIFY_DUPLCATES_HELP' => 'Pasirinkite laukus importuojamame faile dublikatų tikrinimui.<br> Jeigu duomenys atitinka pasirinktuose laukuose ir egzistuojančiuose įrašuose, naujas įrašas nebus sukurtas jeigu yra dublikatas.<br>Eilutės talpinančios dublikatų laukus bus nustatytos Importuoti rezultatai.',
  'LBL_VERIFY_DUPS' => 'Patikrinkite dublikatų įrašus pagal pasirinktus raktus.',
  'LBL_WHAT_IS' => 'Koks duomenų šaltinis?',
  'LNK_DUPLICATE_LIST' => 'Nusikrauti dublikatų sąrašą',
  'LNK_ERROR_LIST' => 'Nusikrauti klaidų sąrašą',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Nusikrauti įrašus kurių nepavyko importuoti.',
);

