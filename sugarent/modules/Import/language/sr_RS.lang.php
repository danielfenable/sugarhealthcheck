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
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Ne možete da uvezete korisnika tipa sistemskog administratora',
  'ERR_MISSING_MAP_NAME' => 'Nedostaje naziv prilagođenog mapiranja',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Nedostaje obavezno polje:',
  'ERR_MULTIPLE' => 'Više kolona je definisano sa istim nazivom polja.',
  'ERR_MULTIPLE_PARENTS' => 'Možete da imate definisan samo jedan matični ID broj',
  'ERR_SELECT_FILE' => 'Odeberite fajl koji će biti uvežen.',
  'ERR_SELECT_FULL_NAME' => 'Ne možete odabrati Puno ime kada su odabrani Ime i Prezime.',
  'LBL_' => '',
  'LBL_ACCOUNTS_NOTE_1' => 'Krajevi polja u Ulica br.2 i Ulica br.3 kada se unesu u bazu spajaju se sa glavnim poljem Ulica.',
  'LBL_ACT' => 'Act!',
  'LBL_ACT_NUM_1' => 'Pokreni <b>ACT!</b>',
  'LBL_ACT_NUM_10' => 'Izaberite <b>Svi zapisi</b> a zatim kliknite <b>Kraj</b>',
  'LBL_ACT_NUM_2' => 'Izaberite <b>Fajl</b> meni, opciju menija <b>Razmena podataka</b>, a zatim opciju menija <b>Izvoz...</b>',
  'LBL_ACT_NUM_3' => 'Izaberite fajl tipa <b>Text-Delimited</b>',
  'LBL_ACT_NUM_4' => 'Izaberite naziv fajla i lokaciju za izvoz podataka i kliknite<b>Sledeći</b>',
  'LBL_ACT_NUM_5' => 'Izaberite <b>Samo zapise Kontakata</b>',
  'LBL_ACT_NUM_6' => 'Kliknite na dugme <b>Opcije...</b>',
  'LBL_ACT_NUM_7' => 'Izaberite <b>Zarez</b> kao karakter separatora polja',
  'LBL_ACT_NUM_8' => 'Označite <b>Da, izvezi nazive polja</b> i kliknite <b>OK</b>',
  'LBL_ACT_NUM_9' => 'Kliknite <b>Sledeći</b>',
  'LBL_ADD_FIELD_HELP' => 'Iskoristite ovu opciju da dodate vrednost u polje u svim zapisima koji su kreirani i/ili ažurirani. Odaberite polje i zatim unesite vrednost za to polje u koloni za podrazumevanu vrednost.',
  'LBL_ADD_ROW' => 'Dodaj polje',
  'LBL_ARE_YOU_SURE' => 'Da li ste sigurni? Ovim će biti obrisani svi podaci u ovom modulu.',
  'LBL_ASSIGNED_USER' => 'Ako korisnik ne postoji koristite trenutnog korisnika',
  'LBL_AUTO_DETECT_ERROR' => 'Nije moguće detektovati razdelnik polja i kvalifikator u datoteci koja se uvozi. Molmo proverite podešavanja za datoteke koju uvozite.',
  'LBL_BACK' => '< Nazad',
  'LBL_CANCEL' => 'Otkaži',
  'LBL_CANNOT_OPEN' => 'Uveženi fajl ne može da se otvori za čitanje',
  'LBL_CHARSET' => 'Enkoding fajla',
  'LBL_CONFIRM_EXT_TITLE' => 'Korak {0}: Potvrđivanje svojstava eksternog izvora',
  'LBL_CONFIRM_IMPORT' => 'Morate da odaberete da ažurirate zapise za vreme procesa uvoza. Izmene na postojećim zapisima ne mogu biti poništene. Nasuprot tome, zapisi kreirani za vreme procesa uvoza mogu biti obrisani ukoliko je potrebno. Kliknite na "Otkaži" da biste napravili novi zapis ili "U redu" da nastavite.',
  'LBL_CONFIRM_MAP_OVERRIDE' => 'Upozorenje: Već ste odabrali sopstveno mapiranje za ovaj uvoz, da li želite da nastavite?',
  'LBL_CONFIRM_TITLE' => 'Korak {0}: Potvrđivanje podešavanja datoteka za uvoz',
  'LBL_CONTACTS_NOTE_1' => 'Ili Prezime ili Puno ime moraju biti mapirani.',
  'LBL_CONTACTS_NOTE_2' => 'Ako je mapirano Puno ime, onda se Ime i Prezime ignorišu.',
  'LBL_CONTACTS_NOTE_3' => 'Ako je mapirano Puno ime, onda će podaci iz Punog imena biti razdvojeni na Ime i Prezime kada se budu unosili u bazu.',
  'LBL_CONTACTS_NOTE_4' => 'Krajevi polja u Ulica br.2 i Ulica br.3 kada se unesu u bazu spajaju se sa glavnim poljem Ulica.',
  'LBL_CREATED_TAB' => 'Kreirani  zapisi',
  'LBL_CREATE_BUTTON_HELP' => 'Iskoristite ovu opciju da napravite nove zapise. Napomena: redovi u datoteci za uvoz koji sadrže vrednosti koje se poklapaju sa ID vrednostima postojećih zapisa neće biti uvezena ako su vrednosti mapirane na ID polje.',
  'LBL_CSV' => 'Fajl razdvojen zarezom',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_CURRENCY_SIG_DIGITS' => 'Značajne cifre valute',
  'LBL_CUSTOM' => 'Prilagođen',
  'LBL_CUSTOM_CSV' => 'Prilagođen fajl razdvojen zarezom',
  'LBL_CUSTOM_DELIMITED' => 'Prilagodi razdvojen fajl',
  'LBL_CUSTOM_DELIMITER' => 'Polja razdvojena po:',
  'LBL_CUSTOM_ENCLOSURE' => 'Polja kvalifikovana po:',
  'LBL_CUSTOM_NUM_1' => 'Pokrenite aplikaciju i otvorite fajl sa podacima',
  'LBL_CUSTOM_NUM_2' => 'Označite <b>Sačuvaj kao...</b> ili <b>Izvezi...</b>opciju',
  'LBL_CUSTOM_NUM_3' => 'Sačuvaj ovaj fajl u formatu<b>CSV</b>odnosno u <b>Comma Separated Values (vrednosti razdvojene zarezom)</b> formatu',
  'LBL_CUSTOM_TAB' => 'Prilagođen fajl razdvojen tabulatorima',
  'LBL_DATABASE_FIELD' => 'Polje baze',
  'LBL_DATABASE_FIELD_HELP' => 'Izaberite polje iz liste polja koja postoji u bazi podataka za modul.',
  'LBL_DATE_FORMAT' => 'Format datuma:',
  'LBL_DEBUG_MODE' => 'Uključi mod za uklanjanje grešaka',
  'LBL_DECIMAL_SEP' => 'Decimalni simbol',
  'LBL_DEFAULT_VALUE' => 'Podrazumevana vrednost',
  'LBL_DEFAULT_VALUE_HELP' => 'Označava vrednost koju treba koristiti za polje pri kreiranju ili ažuriranju zapisa ako polje u uvoznom fajlu ne sadrži podatke.',
  'LBL_DELETE' => 'Obriši',
  'LBL_DELETE_MAP_CONFIRMATION' => 'Da li ste sigurni da želite da obrišete ovo mapiranje?',
  'LBL_DELIMITER_COMMA_HELP' => 'Izaberite ovu opciju ako je karakter koji razdvaja polja u uvoznom fajlu <b>zarez</b>, ili ako je ekstenzija datoteke tipa .csv.',
  'LBL_DELIMITER_CUSTOM_HELP' => 'Izaberite ovu opciju ako karakter koji odvaja polja pri uvozu nije ni zarez ni tabulator, i ukucajte karakter u susedno polje.',
  'LBL_DELIMITER_TAB_HELP' => 'Izaberite ovu opciju ako je karakter koji razdvaja polja u uvoznom fajlu <b>tabulator</b>, ili ako je ekstanzija fajla .txt.',
  'LBL_DESELECT' => 'otkazan odabir',
  'LBL_DONT_MAP' => '-- Ne mapiraj ovo polje --',
  'LBL_DUPLICATES' => 'Nađeni duplikati',
  'LBL_DUPLICATE_TAB' => 'Duplikati',
  'LBL_DUP_HELP' => 'Ovo su redovi u datoteci za uvoz koji nisu uvezeni zato što sadrže podatke koji se poklapaju sa vrednostima u postojećim zapisima, bazirano na proveri duplikata. Podaci koji se poklapaju su osenčeni, Da biste ponovo uvezli ove redove, preuzmite listu, napravite promene i kliknite na <b>Uvezi ponovo</b>.',
  'LBL_ENCLOSURE_HELP' => '<p><b>Granični karakter</b> je korišćen za razdvajanje sadržaja namenjenog za polje, uključujući bilo koje karaktere koji se koriste za razdvajanje .<br><br>Primer: Ako je separator zarez (,) a graničnik je dvostruki navodnik ("),<br><b>"Kupertino, Kalifornija"</b> je uvežen u polje u aplikaciji i prikazuje se <b>Kupertino, Kalifornija</b>.<br>Ako nema granični karakter, ili ako je graničnik neki drugi karakter,<br><b>"Kupertino, Kalifornija"</b> je uvežen u dva različita polja kao <b>"Kupertino</b> i <b>Kalifornija\\"</b>.<br><br>Napomena: Uvozni fajl možda neće sadržati granični karakter.<br>Podrazumevani granični karakter za fajlove razdvojene zarezima ili tabulatorima kreirane u Excel-u je znak navoda.</p>',
  'LBL_ERROR' => 'Greška:',
  'LBL_ERROR_DELETING_RECORD' => 'Greška pri brisanju zapisa:',
  'LBL_ERROR_HELP' => 'Ovo su redovi u datoteci za uvoz koji nisu uvezeni zbog grešaka. Da biste ponovo uvezli ove redove, preuzmite listu, napravite promene i kliknite na <b>Uvezi ponovo</b>.',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Uvoz nije podešen za ovaj tip modula',
  'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Nije moguće pisanje u direktorijum za keširanje uvoza.',
  'LBL_ERROR_INVALID_ACCOUNT' => 'Neispravan naziv kompanije ili ID broj',
  'LBL_ERROR_INVALID_BOOL' => 'Pogrešna vrednost (treba da bude 1 ili 0)',
  'LBL_ERROR_INVALID_CURRENCY' => 'Neispravna vrednost valute',
  'LBL_ERROR_INVALID_DATE' => 'Neispravan format datuma (string)',
  'LBL_ERROR_INVALID_DATETIME' => 'Neispravno vreme/datum',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Neispravno vreme/datum',
  'LBL_ERROR_INVALID_EMAIL' => 'Neispravna Email adresa',
  'LBL_ERROR_INVALID_FLOAT' => 'Neispravan broj sa pokretnim zarezom (tačkom)',
  'LBL_ERROR_INVALID_ID' => 'ID broj koji je dat je suviše dugačak da bi stao u polje (maksimalna dužina je 36 karaktera)',
  'LBL_ERROR_INVALID_INT' => 'Neispravna celobrojna vrednost',
  'LBL_ERROR_INVALID_NAME' => 'String je previše dugačak da bi stao u polje',
  'LBL_ERROR_INVALID_NUM' => 'Neispravna numerička vrednost',
  'LBL_ERROR_INVALID_PHONE' => 'Neispravan broj telefona',
  'LBL_ERROR_INVALID_RELATE' => 'Neispravno relaciono polje',
  'LBL_ERROR_INVALID_TEAM' => 'Neispravan naziv tima ili ID broj',
  'LBL_ERROR_INVALID_TIME' => 'Neispravno vreme',
  'LBL_ERROR_INVALID_USER' => 'Neispravno koisničko ime ili ID broj',
  'LBL_ERROR_INVALID_VARCHAR' => 'String je previše dugačak da bi stao u polje',
  'LBL_ERROR_NOT_IN_ENUM' => 'Vrednost nije u padajućoj listi. Dozvoljene vrednosti su:',
  'LBL_ERROR_SELECTING_RECORD' => 'Greška pri izboru zapisa:',
  'LBL_ERROR_SYNC_USERS' => 'Vrednost nije validna za sinhronizaciju sa Outlook-om:',
  'LBL_ERROR_TAB' => 'Greške',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Ne može da se objavi. Postoji druga objavljena mapa Uvoza sa istim imenom.',
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Ne možete da poništite objavu mapiranja koje pripada drugom korisniku. Imate mapiranje Uvoza sa istim imenom.',
  'LBL_EXAMPLE_FILE' => 'Preuzmite šablon datoteke za uvoz',
  'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Da biste dodelili nove zapise korisniku koji niste vi, koristite kolonu za podrazumevanu vrednost da odaberete drugog korisnika.',
  'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Naznačite koju vrednost koristiti u polju kreiranih zapisa ako polje u eksternom izvoru ne sadrži podatke.',
  'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Nemoguće je pribaviti podatke sa eksternog izvora, pokušajte ponovo kasnije.',
  'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Nemoguće je pribaviti adapter za eksterni izvor, pokušajte ponovo kasnije.',
  'LBL_EXTERNAL_FIELD' => 'Eksterno polje',
  'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Ova kolona prikazuje polja u eksternom izvoru koja sadrže podatke koji će biti korišćeni za kreiranje novih zapisa.',
  'LBL_EXTERNAL_MAP_HELP' => 'Tabela ispod sadži polja u eksternom izvoru i polja modula na koja su mapirana. Proverite mapiranje kako biste osigurali da su onakvi kakvim ih očekujete i napravite promene, ukoliko je potrebno. Osigurajte da ste mapirali sva zahtevana polja (notirano znakom uzvika).',
  'LBL_EXTERNAL_MAP_NOTE' => 'Biće pokušan uvoz kontakata u okviru svih Google Contacts grupa',
  'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Korisnička imena novih kontakata podrazumevano će biti njihova Google Contacts puna imena. Kasnije mogu biti promenjena.',
  'LBL_EXTERNAL_MAP_SUB_HELP' => 'Kliknite na <b>Uvezi sad</b> da započnete uvoz. Zapisi će biti kreirani samo za unose koji imaju prezime. Zapisi neće biti kreirani za podatke koji su identifikovani kao duplikati na osnovu imena i/ili email adresa koje se poklapaju sa postojećim zapisima.',
  'LBL_EXTERNAL_SOURCE' => 'eksterna aplikacija ili servis',
  'LBL_EXTERNAL_SOURCE_HELP' => 'Iskoristite ovu opciju da uvezete podatke direktno iz eksterne aplikacije ili servisa, kao što je Gmail.',
  'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Kako biste dodelili nove zapise timovima koji nisu vaši podrazumevani timovi, koristite kolonu sa podrazumevanim vrednostima da odaberete druge timove.',
  'LBL_EXT_SOURCE_SIGN_IN' => 'Prijavi se',
  'LBL_FAIL' => 'Neuspešno:',
  'LBL_FAILURE' => 'Uvoz nije uspeo:',
  'LBL_FIELD_DELIMETED_HELP' => 'Razdelnik polja je karakter koji se koristi da odvoji kolone polja',
  'LBL_FIELD_NAME' => 'Naziv polja',
  'LBL_FILE_ALREADY_BEEN_OR' => 'Fajl za uvoz je već obrađen ili ne postoji',
  'LBL_FILE_OPTIONS' => 'Opcije fajla',
  'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Odaberite datoteku koja sadrži podatke koji su odvojeni razdelnikom, kao što je tab ili tačka-zarez. Preporučuje se korišćenje datoteka tipa .csv',
  'LBL_FINISHED' => 'Povratak na',
  'LBL_GOOD_FILE' => 'Fajl za uvoz je uspešno pročitan',
  'LBL_HAS_HEADER' => 'Ima zaglavlje:',
  'LBL_HEADER_ROW' => 'Zaglavlje',
  'LBL_HEADER_ROW_HELP' => 'Ovo su naslovi polja u zaglavlju uvoznog fajla.',
  'LBL_HEADER_ROW_OPTION_HELP' => 'Odaberite gornji red datoteke za uvoz kao red sa zaglavljem koji sadrži labele polja.',
  'LBL_HIDE_ADVANCED_OPTIONS' => 'Sakrij Napredne Opcije',
  'LBL_HIDE_NOTES' => 'Sakri beleške',
  'LBL_HIDE_PREVIEW_COLUMNS' => 'Sakrij pregled kolona',
  'LBL_IDS_EXISTED_OR_LONGER' => 'Zapisi su preskočeni zato što ID brojevi ili postoje ili su duži od 36 karaktera',
  'LBL_ID_EXISTS_ALREADY' => 'U ovoj tabeli već postoji ID broj',
  'LBL_IMPORT_ACT_TITLE' => 'Act! može da izveze podatke u formatu <b>csv</b>, koji može da se koristi za uvoz podataka u sistem. Da bi izvezli podatke iz Act!, sledite korake ispod:',
  'LBL_IMPORT_BUTTON' => 'Kreiraj zapise',
  'LBL_IMPORT_COMPLETE' => 'Uvoz završen',
  'LBL_IMPORT_COMPLETED' => 'Uvoz završen',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Mnoge aplikacije daju Vam mogućnost da izvezete fajl kao <b>tekstualni fajl razdvojen zarezima (.csv)</b>, pratite sledeće opšte korake:',
  'LBL_IMPORT_ERROR' => 'Došlo je do grešaka pri uvozu',
  'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Datoteka za uvoz sadrži {0} redova. Optimalni broj redova je {1}. Višak redova može usporiti proces uvoza. Kliknite na "U redu" da nastavite uvoz. Kliknite na "Poništi" da revidirate i ponovo postavite datoteku za uvoz.',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Korisničko ime ili ID broj',
  'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; ili &#39;1&#39;',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numerički (dozvoljen decimalni)',
  'LBL_IMPORT_FIELDDEF_DATE' => 'Datum',
  'LBL_IMPORT_FIELDDEF_DATETIME' => 'Datum i vreme',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numerički (ne decimalni)',
  'LBL_IMPORT_FIELDDEF_EMAIL' => 'Email Adresa',
  'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
  'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numerički (dozvoljen decimalni)',
  'LBL_IMPORT_FIELDDEF_ID' => 'Jedinstveni ID broj',
  'LBL_IMPORT_FIELDDEF_INT' => 'Numerički (ne decimalni)',
  'LBL_IMPORT_FIELDDEF_NAME' => 'Bilo koji tekst',
  'LBL_IMPORT_FIELDDEF_NUM' => 'Numerički (ne decimalni)',
  'LBL_IMPORT_FIELDDEF_PHONE' => 'Broj telefona',
  'LBL_IMPORT_FIELDDEF_RELATE' => 'Ime ili ID broj',
  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Ime tima ili ID broj',
  'LBL_IMPORT_FIELDDEF_TEXT' => 'Bilo koji tekst',
  'LBL_IMPORT_FIELDDEF_TIME' => 'Vreme',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Bilo koji tekst',
  'LBL_IMPORT_FILE_SETTINGS' => 'Podešavanja uvoza fajla',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Određuje podešavanja u uvoznom fajlu da bi obezbedili da su podaci uveženi<br> tačno. Ova podešavanja neće pregaziti Vaša podešavanja. Zapisi<br> kreirani ili ažurirani sadržaće podešavanja koja su navedena na strani Moj nalog.',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Fajl je prevelik. Maks:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'bajtova. Promenite $sugar_config[&#39;upload_maxsize&#39;] u fajlu config.php',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Fajl nije uspešno uvežen. Proverite dozvole nad fajlom u Vašem keš direktorijumu Sugar instalacije.',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Fajl nije uspešno uvežen. Možda je &#39;upload_max_filesize&#39; podešavanje u Vašem php.ini fajlu  postavljeno na mali broj',
  'LBL_IMPORT_MODULE_MAP_ERROR' => 'Ne može da se objavi. Postoji druga objavljena mapa Uvoza sa istim imenom.',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Ne možete da poništite objavu mapiranja koje pripada drugom korisniku. Imate mapiranje Uvoza sa istim imenom.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Direktorijum',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'ne postoji ili nije upisiv',
  'LBL_IMPORT_MODULE_NO_TYPE' => 'Uvoz nije podešen za ovaj tip modula',
  'LBL_IMPORT_MODULE_NO_USERS' => 'UPOZORENJE: Na sistemu nemate definisanih korisnika. Ako želite da uradite uvoz bez prethodnog dodavanja korisnika, svi zapisi biće vlasništvo administratora.',
  'LBL_IMPORT_MORE' => 'Uvezi još',
  'LBL_IMPORT_NOW' => 'Uvezi sada',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 and 2000 mogu da izvezu podatke u <b>CSV</b> formatu, koji može da se koristi za uvoz podataka u sistem. Da bi izvezli Vaše podatke iz Outlook-a, sledite uputstva ispod:',
  'LBL_IMPORT_RECORDS' => 'Uvoz zapisa',
  'LBL_IMPORT_RECORDS_OF' => 'od',
  'LBL_IMPORT_RECORDS_TO' => 'za',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com može da izvozi podatke u <b>CSV</b> formatu, koji može da se koristi za uvoz podataka u sistem. Da bi izvezli Vaše podatke iz Salesforce.com, sledite uputstva ispod:',
  'LBL_IMPORT_STARTED' => 'Uvoz započet:',
  'LBL_IMPORT_TAB_TITLE' => 'U mnogim aplikacijama omogućano je da se podaci izvoze kao<b>tekst fajl razdvojen tabulatorima (.tsv or .tab)</b>, pratite sledeće opšte korake:',
  'LBL_IMPORT_TYPE' => 'Akcija uvoza',
  'LBL_INDEX_NOT_USED' => 'Nekorišćen(i) indeks(i):',
  'LBL_INDEX_USED' => 'Korišćen(i) indeks(i):',
  'LBL_LAST_IMPORTED' => 'Poslednji kreiran',
  'LBL_LAST_IMPORT_UNDONE' => 'Vaš poslednji uvoz je poništen',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Format za prikaz imena',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Primer',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '"s" Pozdrav<br>"f" Ime <br>"l" Prezime',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_MICROSOFT_OUTLOOK_HELP' => 'Sopstvena mapiranja za Microsoft Outlook oslanjaju se na to da datoteka za uvoz bude .csv Ukoliko je vaš razdelnik tab, mapiranje neće proći sa očekivanim rezultatima.',
  'LBL_MIME_TYPE_ERROR_1' => 'Odabrana datoteka ne sadrži razdeljenu listu. Molimo proverite tip datoteke. Preporučujemo .csv datoteku.',
  'LBL_MIME_TYPE_ERROR_2' => 'Kako biste nastavili sa uvozom postojeće datoteke, klikinte na "U redu". Da biste postavili novu datoteku, kliknite na "Pokušaj ponovo"',
  'LBL_MISSING_HEADER_ROW' => 'Nije pronađen red sa zaglavljem',
  'LBL_MODULE_NAME' => 'Uvoz',
  'LBL_MODULE_NAME_SINGULAR' => 'Uvoz',
  'LBL_MY_PUBLISHED_HELP' => 'Objavljena mapiranja određuju ranije korišćene kombinacije specifičnih izvora podataka i skup polja baze za mapiranje u polja u uvoznom fajlu.',
  'LBL_MY_SAVED' => 'Moja sačuvana mapiranja:',
  'LBL_MY_SAVED_ADMIN_HELP' => 'Iskoristite ovu opciju da primenite prethodno određena podešavanja, uključujući svojstva uvoza, mapiranja i podešavanja provere duplikata, na ovaj uvoz.<br><br><br /><br />Kliknite na <b>Objavi</b> kako bi mapiranja bila dostupna drugim korisnicima<br><br />Kliknite na <b>Povuci</b> kako bi mapiranja prestala da budu dostupna drugim korisnicima<br><br />Kliknite na <b>Obriši</b> kako bi mapiranja bila obrisana za sve korisnike',
  'LBL_MY_SAVED_HELP' => 'Sačuvana mapiranja određuju ranije korišćene kombinacije specifičnih izvora podataka i skup polja baze za mapiranje u polja u uvoznom fajlu.<br>Kliknite <b>Objavi</b> da bi uradili mapiranje dostupno drugom korisniku.<br>Kliknite <b>Poništenje objave</b> da bi mapiranje učinili nedostupno ostalim korisnicima.',
  'LBL_NEXT' => 'Sledeći >',
  'LBL_NOLOCALE_NEEDED' => 'Nije potrebna lokalna konverzija',
  'LBL_NONE' => 'Nijedna',
  'LBL_NOTES' => 'Napomene:',
  'LBL_NOT_MULTIENUM' => 'Nije MultiEnum tip',
  'LBL_NOT_SAME_NUMBER' => 'Broj polja po redu u Vašem fajlu nije isti.',
  'LBL_NOT_SET_UP' => 'Uvoz nije podešen za ovaj tip modula',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Uvoz nije podešen za ovaj tip modula',
  'LBL_NOW_CHOOSE' => 'Sada odaberite fajl za uvoz:',
  'LBL_NO_DATECHECK' => 'Preskoči proveru datuma (brži način ali neće proći ako je neki datum pogrešan)',
  'LBL_NO_EMAILS' => 'Ne šalji Email obaveštenja za vreme ovog uvoza',
  'LBL_NO_EMAIL_DEFS_IN_MODULE' => 'Pokušaj obrade email adrese u BEAN-u koji to ne podržava.',
  'LBL_NO_ID' => 'ID broj je obavezan',
  'LBL_NO_IMPORT_TO_UNDO' => 'Nije bilo uvoza za poništavanje.',
  'LBL_NO_LINES' => 'U Vašem fajlu za uvoz nema redova',
  'LBL_NO_PRECHECK' => 'Izvorni Format mod',
  'LBL_NO_RECORD' => 'Nema zapisa za ažuriranje sa ovim ID brojem',
  'LBL_NO_WORKFLOW' => 'Ne pokreći radni tok za vreme ovog uvoza.',
  'LBL_NUMBER_GROUPING_SEP' => 'Separator hiljada',
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
  'LBL_OK' => 'U redu',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Dvostruki navodnik (\\")',
  'LBL_OPTION_ENCLOSURE_NONE' => 'Nijedna',
  'LBL_OPTION_ENCLOSURE_OTHER' => 'Ostalo:',
  'LBL_OPTION_ENCLOSURE_QUOTE' => 'Jednostruki navodnik (&#39;)',
  'LBL_OUTLOOK_NUM_1' => 'Pokreni <b>Outlook</b>',
  'LBL_OUTLOOK_NUM_2' => 'Odaberite <b>Fajl</b>meni, zatim <b>Uvezi i izvezi ...</b> opciju iz menija',
  'LBL_OUTLOOK_NUM_3' => 'Odaberi <b>Izvezi u fajl</b> i klikni na Sledeći',
  'LBL_OUTLOOK_NUM_4' => 'Odaberite <b>CSV (Windows)</b> i kliknite <b>Sledeći</b>.<br>Pažnja: Možda ćete biti upozoreni da instalirate izveženu komponentu',
  'LBL_OUTLOOK_NUM_5' => 'Izaberite folder<b>Kontakti</b> i kliknite <b>Sledeći</b>. Možete da izaberete različite foldere kontakata ako su Vaši kontakti smešteni u više foldera',
  'LBL_OUTLOOK_NUM_6' => 'Odaberite naziv fajla i kliknite na <b>Sledeći</b>',
  'LBL_OUTLOOK_NUM_7' => 'Kliknite na <b>Kraj</b>',
  'LBL_PRE_CHECK_SKIPPED' => 'Prekočena provera pre pokretanja',
  'LBL_PUBLISH' => 'Objavi',
  'LBL_PUBLISHED_SOURCES' => 'Objavljena mapiranja:',
  'LBL_RECORDS_SKIPPED' => 'Zapisi su preskočeni zato što im nedostaje jedan ili više obaveznih polja',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'zapisi nisu uvezeni zbog greške.',
  'LBL_RECORD_CANNOT_BE_UPDATED' => 'Zapis nije moguće ažurirati zbog problema sa dozvolama.',
  'LBL_RELATED_ACCOUNTS' => 'Ne kreiraj povezane kompanije',
  'LBL_REMOVE_ROW' => 'Ukloni polje',
  'LBL_REQUIRED_NOTE' => 'Obavezno(a) polje(a):',
  'LBL_REQUIRED_VALUE' => 'Nedostaje obavezna vrednost',
  'LBL_RESULTS' => 'Rezultati',
  'LBL_ROW' => 'Red',
  'LBL_ROW_HELP' => 'Ovo je podatak u prvom redu uvoznog fajla koje nije zaglavlje.',
  'LBL_ROW_NUMBER' => 'Broj reda',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_SAMPLE_URL_HELP' => 'Preuzmite primer datoteke za uvoz koji sadrži red sa zaglavljem polja modula. Datoteka može biti korišćena kao šablon za kreiranje datoteke za uvoz koja sadrži podatke koje želite da uvezete.',
  'LBL_SAVE_AS_CUSTOM' => 'Sačuvaj kao prilagođeno mapiranje:',
  'LBL_SAVE_AS_CUSTOM_NAME' => 'Naziv prilagođenog mapiranja',
  'LBL_SAVE_MAPPING_AS' => 'Sačuvaj mapiranje',
  'LBL_SAVE_MAPPING_HELP' => 'Unesite ime za skup polja baze podataka koja se koriste iznad za mapiranje polja u polja uvoznog fajla.<br>Skup polja, uključujući redosled polja i izvora podataka koji su izabrani u Koraku 1 uvoza, biće sačuvani tokom pokušaja uvoza.<br>Sačuvano mapiranje može onda da bude izabrano u Koraku 1 uvoza za drugi uvoz.',
  'LBL_SELECT_DS_INSTRUCTION' => 'Spremi za početak uvoza? Odaberite izvor podataka koje želite da uvezete.',
  'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Da biste izbegli kreiranje duplikata, odaberite za koja mapirana polja je potrebno izvesti proveru za vreme uvoza, Vrednosti u okviru postojećih zapisa u odabranim poljima biće proverena u odnosu na podatke u datoteci za uvoz. Ukoliko se pronađu podaci koji se poklapaju, redovi u datoteci za uvoz koji sadrže ove podatke biće prikazana sa rezultatima uvoza (sledeća strana). Tada ćete biti u mogućnosti da odaberete za koje od ovih redova je potrebno nastaviti uvoz.',
  'LBL_SELECT_FIELDS_TO_MAP' => 'U listi ispod, izaberite polja u uvoznom fajlu koja bi trebalo da budu uvežena u svako polje sistema. Kada završite, kliknite <b>Uvezi sada</b>:',
  'LBL_SELECT_FILE' => 'Odaberite fajl:',
  'LBL_SELECT_MAPPING_INSTRUCTION' => 'Tabela ispod sadrži sva polja modula koja se mogu mapirati na podatke u datoteci za uvoz. Ako datoteka sadrži red sa zaglavljima, kolone u datoteci su mapirane na odgovarajuća polja. Proverite mapiranje da biste osigurali da su onakvi kakvim ih očekujete i, ako je potrebno, napravite izmene. Da bi Vam pomogli, prikazali smo prvi red iz datoteke sa podacima. Mapirajte sva neophodna polja (označena znakom uzvika).',
  'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Evo kako će izgledati prvih nekoliko redova datoteke za uvoz sa detektovanim svojstvima. Ako je detektovan red sa zaglavljem, prikazan je kao gornji red tabele. Pogledajte svojstva datoteke za uvoz da biste napravili promene i dodali svojstva. Ažuriranje podešavanja će ažurirati podatke koji se pojavljuju u tabeli.',
  'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Odaberite datoteku na vašem računaru koja sadrži podatke koje želite da uvezete, ili preuzmite šablon da biste saznali kako da kreirate datoteku za uvoz.',
  'LBL_SF_NUM_1' => 'Otvorite Vaš pretraživač, idite na  http://www.salesforce.com, i prijavite se sa Vašom email adresom i lozinkom',
  'LBL_SF_NUM_10' => 'U <b>Izvezi izveštaj:</b>, za <b>format izvezenog fajla:</b>, izaberite <b>razdvojen zarezom .csv</b>. Kliknite <b>Izvezi</b>.',
  'LBL_SF_NUM_11' => 'Pojaviće se okvir za dijalog kako bi sačuvali izveženi fajl na Vaš računar.',
  'LBL_SF_NUM_2' => 'Kliknite na karticu<b>Izveštaji</b> u gornjem meniju',
  'LBL_SF_NUM_3' => '<b>Da bi izvezli Kompanije</b> kliknite na link<b>Aktivne kompanije</b> <br><b>Da bi izvezli Konatkte:</b>Kliknite na link <b>Lista slanja</b>',
  'LBL_SF_NUM_4' => 'U <b>Koraku 1: Izaberite tip Vašeg izveštaja</b>, izaberite <b>Tabelarni izveštaj</b> kliknite <b>Sledeći</b>',
  'LBL_SF_NUM_5' => 'U <b> Koraku 2: Izaberite kolone izveštaja</b>, izaberite kolone koje želite da izvezete i kliknite <b>Sledeći</b>',
  'LBL_SF_NUM_6' => 'U <b>Koraku 3: Izaberite informacije za sumiranje</b>, samo kliknite<b>Sledeći</b>',
  'LBL_SF_NUM_7' => 'U <b>Koraku 4: Poređajte kolone izveštaja</b>, samo kliknite <b>Sledeći</b>',
  'LBL_SF_NUM_8' => 'U <b>Koraku 5: Izaberite kriterijume za Vaš izvešataj</b>, pod <b>Datum početka</b>, izaberite datum koji je dovoljno daleko u prošlosti da bi uključio i sve Vaše kompanije. Možete takođe da izvezete i podskup kompanija koristeći napredne kriterijume. Kada završite, kliknite<b>Pokreni izveštaj</b>',
  'LBL_SF_NUM_9' => 'Izveštaj će biti generisan i na stani će se prikazati <b>Status generisanja izveštaja: Završeno.</b> Sada kliknite <b>Izvezi u Excel</b>',
  'LBL_SHOW_ADVANCED_OPTIONS' => 'Prikaži Napredne Opcije',
  'LBL_SHOW_HIDDEN' => 'Prikaži polja koja obično nisu za uvoz',
  'LBL_SHOW_NOTES' => 'Pregledaj beleške',
  'LBL_SHOW_PREVIEW_COLUMNS' => 'Prikaži pregled kolona',
  'LBL_SIGN_IN_HELP' => 'Da biste omogućili ovaj servis, molimo prijavite se na kartici za eksterne naloge u okviru korisničke strane sa podešavanjima.',
  'LBL_START_OVER' => 'Počni ponovo',
  'LBL_STEP_1_TITLE' => 'Korak 1: Izaberite izvor podataka i akciju uvoza',
  'LBL_STEP_2_TITLE' => 'Korak 2: Prosledi fajl za uvoz',
  'LBL_STEP_3_TITLE' => 'Korak 3: Potvrda polja i Uvoz',
  'LBL_STEP_4_TITLE' => 'Korak 4: Uvoz fajla',
  'LBL_STEP_5_TITLE' => 'Korak 5: Pregled rezultata',
  'LBL_STEP_DUP_TITLE' => 'Korak {0}: Provera mogućih duplikata',
  'LBL_STEP_MODULE' => 'U koji modul želite da uvezete podatke?',
  'LBL_STRICT_CHECKS' => 'Strogo koristi skup pravila (Proveri takođe email adrese i brojeve telefona)',
  'LBL_SUCCESS' => 'Uspešno:',
  'LBL_SUCCESSFULLY' => 'Uspešno uveženo',
  'LBL_SUCCESSFULLY_IMPORTED' => 'zapisi su uspešno kreirani',
  'LBL_SUMMARY' => 'Sadržaj',
  'LBL_SYSTEM_SIG_DIGITS' => 'Značajne sistemske cifre',
  'LBL_TAB' => 'Fajl razdvojen tabulatorima',
  'LBL_TAB_NUM_1' => 'Pokrenite aplikaciju i otvorite fajl sa podacima',
  'LBL_TAB_NUM_2' => 'Označite <b>Sačuvaj kao...</b> ili <b>Izvezi...</b>opciju',
  'LBL_TAB_NUM_3' => 'Sačuvaj ovaj fajl u formatu <b>TSV</b>odnosno u <b>vrednosti odvojene tabulatorima </b> formatu',
  'LBL_TEST' => 'Test uvoz (ne čuvaj i ne menjaj podatke)',
  'LBL_THIRD_PARTY_CSV_SOURCES' => 'Ako je datoteka za uvoz izvezena iz nekog od sledećih izvora, molimo odaberite iz kog:',
  'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Odaberite izvor kako biste automatski primenili sopstvena mapiranja u cilju pojednostavljenja procesa mapiranja (sledeći korak).',
  'LBL_TIMEZONE' => 'Vremenska zona:',
  'LBL_TIME_FORMAT' => 'Format vremena:',
  'LBL_TRUNCATE_TABLE' => 'Isprazni tabelu pre uvoza (obriši sve zapise)',
  'LBL_TRY_AGAIN' => 'Pokušajte ponovo',
  'LBL_UNDO_LAST_IMPORT' => 'Poništi poslednji uvoz',
  'LBL_UNIQUE_INDEX' => 'Izaberite indeks za poređenje duplikata',
  'LBL_UNPUBLISH' => 'Poništi objavu',
  'LBL_UPDATE_BUTTON' => 'Kreiraj i ažuriraj zapise',
  'LBL_UPDATE_BUTTON_HELP' => 'Iskoristite ovu opciju da biste ažurirali postojeće zapise. Podaci u datoteci za uvoz biće upoređeni sa postojećim zapisima na osnovu ID broja zapisa u datoteci za uvoz.',
  'LBL_UPDATE_RECORDS' => 'Ažuriraj postojeće zapise umesto da ih uvezeš (Nema Poništi)',
  'LBL_UPDATE_SUCCESSFULLY' => 'zapisi su uspešno ažurirani.',
  'LBL_VALUE' => 'Vrednost',
  'LBL_VERIFY_DUPLCATES_HELP' => 'Izaberite polja u uvoznom fajli koja će biti korišćena za proveru duplikata.<br>Ako podaci u izabranim poljima odgovaraju podacima u poljima u postojećim zapisima, novi zapisi neće biti kreirani za redove koji sadrže duplirane podatke polja.<br>Red koji sadrži duplirane podatke polja biće prepoznati u rezultatima uvoza.',
  'LBL_VERIFY_DUPS' => 'Proverite dvostruke unose prema izabranim indeksima.',
  'LBL_WHAT_IS' => 'Šta je izvor podataka?',
  'LNK_DUPLICATE_LIST' => 'Preuzmi listu duplikata',
  'LNK_ERROR_LIST' => 'Preuzmi listu grešaka',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Preuzmi listu zapisa koji nisu uveženi.',
);

