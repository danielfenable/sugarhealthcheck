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
  'ERR_DELETE_RECORD' => 'Morate navesti broj zapisa da bi obrisali prodajnu priliku.',
  'LABEL_PANEL_ASSIGNMENT' => 'Zadatak',
  'LBL_ACCOUNT_ID' => 'ID broj kompanije:',
  'LBL_ACCOUNT_NAME' => 'Naziv kompanije:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
  'LBL_ASSIGNED_TO_ID' => 'Dodeljeni korisnik:',
  'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno',
  'LBL_CAMPAIGN' => 'Kampanja:',
  'LBL_CAMPAIGN_LINK' => 'Link ka kampanji',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanje',
  'LBL_CLOSED_RLIS' => 'Ukupno zatvorenih stavki prihoda',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Zatvorene dobijene prodajne prilike',
  'LBL_COMMITTED' => 'Dodeljeno',
  'LBL_COMMIT_STAGE' => 'Faza Izvršenja',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Email adrese srodnih kontakata',
  'LBL_CONTRACTS' => 'Ugovori',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Ugovori',
  'LBL_CREATED_ID' => 'ID broj autora',
  'LBL_CREATED_USER' => 'Kreirao',
  'LBL_CURRENCIES' => 'Valute',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_CURRENCY_ID' => 'ID broj valute',
  'LBL_CURRENCY_NAME' => 'Ime valute',
  'LBL_CURRENCY_RATE' => 'Kursna Lista',
  'LBL_CURRENCY_SYMBOL' => 'Simbol valute',
  'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Top 10 mogućnosti prodaje',
  'LBL_DATE_CLOSED' => 'Očekivani datum zatvaranja:',
  'LBL_DATE_CLOSED_TIMESTAMP' => 'Očekivani Datum Zatvaranja Vremenskog pečata',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Prodajne prilike',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenta',
  'LBL_DUPLICATE' => 'Moguće duple prodajne prilike',
  'LBL_EDITLAYOUT' => 'Izmeni raspored',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID broj dodeljenog korisnika',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Ime dodeljenog korisnika',
  'LBL_EXPORT_CAMPAIGN_ID' => 'ID kampanje',
  'LBL_EXPORT_CREATED_BY' => 'ID broj osobe koja je kreirala',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'ID korisnika koji je promenio',
  'LBL_EXPORT_NAME' => 'Naziv',
  'LBL_FILENAME' => 'Prilog',
  'LBL_FORECAST' => 'Uključi u Prognozu',
  'LBL_HELP_CONFIG_OPPS' => 'Sales and forecasting will be tracked as {{plural_module_name}}, and {{revenuelineitems_module}} will not be available.

Changing the setting from "{{plural_module_name}} and {{revenuelineitems_module}}" to "{{plural_module_name}}" will result in existing data being changed, added, and removed as follows:

- In addition to the information already summarized in each {{module_name}}, the following information from the {{revenuelineitems_module}} will be will be saved in the {{module_name}}:
    - If all {{revenuelineitems_module}} are in the "Closed Lost" Sales Stage, the {{module_name}} will be marked as "Closed Lost"
    - If all {{revenuelineitems_module}} are closed and at least one was won, the {{module_name}} will be marked as "Closed Won"
    - If any of the {{revenuelineitems_module}} are still open, the {{module_name}} will be marked with the least-advanced sales stage.
- A {{notes_singular_module}} record will be created and attached to the {{module_name}} to preserve the individual {{revenuelineitems_module}} values for the following fields:
    - Likely Amount, Best Amount, Worst Amount
    - Expected Close Date
    - Next Step
    - Sales Stage
    - Probability
    - Please Note: Custom fields in the {{revenuelineitems_module}} will not be preserved.
- All {{revenuelineitems_module}} will be removed from the system.
- All {{forecasts_singular_module}} data will be removed and forecasting starts anew.',
  'LBL_HELP_CONFIG_RLIS' => 'Sales will be tracked as {{plural_module_name}} with {{revenuelineitems_module}}. An {{module_name}} consist of one or more {{revenuelineitems_module}}. This affords sales to be detailed in separate line items, and summarized in an {{module_name}}. {{forecasts_module}} will be created using {{revenuelineitems_module}}.

Changing the setting from "{{plural_module_name}}" to "{{plural_module_name}} and {{revenuelineitems_module}}" will result in existing data being changed, added, and removed as follows:

- Your existing {{plural_module_name}} will each have one {{revenuelineitems_singular_module}} created and attached to the {{module_name}}.
- The following fields and values will be duplicated from the existing {{module_name}} records to the new {{revenuelineitems_singular_module}} records:
    - Likely Amount, Best Amount, Worst Amount
    - Expected Close Date
    - Next Step
- The following fields and values will be moved from the existing {{module_name}} records to the new {{revenuelineitems_singular_module}} records:
    - Sales Stage
    - Probability
- All {{forecasts_singular_module}} data will be removed and forecasting starts anew.',
  'LBL_HELP_CREATE' => '•	{{plural_module_name}} modul omogućava praćenje individualnih prodaja i stavki linija koje pripadaju tim prodajama od početka do kraja. Svaki {{module_name}} zapis predstavlja zaglavlje za grupu {{revenuelineitems_module}} kao što povezuje i druge bitne zapise kao što su {{quotes_module}}, {{contacts_module}}, itd. - Izmena polja ovog zapisa klikom na pojedinačno polje ili pritiskom na dugme Izmena. - Pregled ili izmena linkova ka drugim zapisima u podformama, uključujući {{campaigns_singular_module}} korisnike, prebacivanjem donjeg levog okvira na "Pregled Podataka". - Kreiraj i pregledaj korisničke komentare i snimi istoriju izmena u {{activitystream_singular_module}} prebacivanjem donjeg levog okvira na "Tok Aktivnosti". - Prati ili favorizuj ovaj zapis koristeći ikone desno od imena zapisa. - Dodatne akcije su dostupne u padajućem Akcija meniju desno od dugmeta Izmena.',
  'LBL_HELP_RECORD' => '{{plural_module_name}}  modul se sastoji od stavki individualnih linija posla koje su uključene na {{opportunities_singular_module}} zapis i praćen kroz ceo prodajni životni ciklus. {{opportunities_singular_module}} zapis ima ulugo zaglavlja za jedan ili više {{module_name}} zapis. - Izmena polja ovog zapisa klikom na pojedinačno polje ili pritiskom na dugme Izmena. - Pregled ili izmena linkova ka drugim zapisima u podformama, uključujući {{campaigns_singular_module}} korisnike, prebacivanjem donjeg levog okvira na "Pregled Podataka". - Kreiraj i pregledaj korisničke komentare i snimi istoriju izmena u {{activitystream_singular_module}} prebacivanjem donjeg levog okvira na "To Aktivnosti". - Prati ili favorizuj ovaj zapis koristeći ikone desno od imena zapisa. - Dodatne akcije su dostupne u padajućem Akcija meniju desno od dugmeta Izmena.',
  'LBL_HELP_RECORDS' => '{{plural_module_name}} modul omogućava praćenje individualnih prodaja i stavki linija koje pripadaju tim prodajama od početka do kraja. Svaki {{module_name}} zapis predstavlja zaglavlje za grupu {{revenuelineitems_module}} kao što povezuje i druge bitne zapise kao što su {{quotes_module}}, {{contacts_module}}, itd. Svaki {{revenuelineitems_singular_module}} je potencijalna prodaja određenog proizvoda i uključuje relevantne prodajne podatke. Svaki {{revenuelineitems_singular_module}} će tipično napredovati kroz nekoliko prodajnih nivoa dok ne bude označen kao "Uspešno zatvorena" ili "Neuspešno zatvorena". {{module_name}} zapis prikazuje iznos i očekivani datum zatvaranja od njegovog  {{revenuelineitems_module}}. {{plural_module_name}} i {{revenuelineitems_module}} mogu biti i uzdignuta i dalje korišćenjem Sugarovog {{forecasts_singular_module}} modula za razumevanje i predviđanje trendova prodaje kao i fokus posla kako bi se ostvarile prodajne ponude.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
  'LBL_INVITEE' => 'Kontakti',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potencijalni klijenti',
  'LBL_LEAD_SOURCE' => 'Izvor informacije o potencijalnom klijentu:',
  'LBL_LIST_ACCOUNT_NAME' => 'Naziv kompanije',
  'LBL_LIST_AMOUNT' => 'Verovatno',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Ukupan Iznos',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljeni korisnik',
  'LBL_LIST_DATE_CLOSED' => 'Zatvori',
  'LBL_LIST_FORM_TITLE' => 'Lista prodajnih prilika',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Ime',
  'LBL_LIST_SALES_STAGE' => 'Faza prodaje',
  'LBL_MKTO_ID' => 'Marketo Glavni ID',
  'LBL_MKTO_SYNC' => 'Sinhronizuj sa Marketo&reg;',
  'LBL_MODIFIED_ID' => 'ID broj korisnika koji je promenio',
  'LBL_MODIFIED_NAME' => 'Ime korisnika koji je promenio',
  'LBL_MODIFIED_USER' => 'Promenio',
  'LBL_MODULE_NAME' => 'Prodajne prilike',
  'LBL_MODULE_NAME_SINGULAR' => 'Prilika',
  'LBL_MODULE_TITLE' => 'Prodajne prilike: Početna strana',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Moje zatvorene prodajne prilike',
  'LBL_NAME' => 'Ime prodajne prilike',
  'LBL_NEW_FORM_TITLE' => 'Kreiraj prodajnu priliku',
  'LBL_NEXT_STEP' => 'Sledeći korak:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Beleške',
  'LBL_OPPORTUNITY' => 'Prodajna prilika',
  'LBL_OPPORTUNITY_NAME' => 'Ime prodajne prilike:',
  'LBL_OPPORTUNITY_ROLE' => 'Uloga prodajne prilike',
  'LBL_OPPORTUNITY_TYPE' => 'Tip prodajne prilike',
  'LBL_OPPS_CONFIG_ALERT' => 'Klikom na Potvrdi, biće obrisane svi podaci Prognoze i biće promenjen prikaz Prodajnih prilika. Ukoliko ovo nije ono što nameravate, kliknite na Poništi kako bi se vratili na prethodna podešavanja.',
  'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Ukoliko su Prihodi zatvoreni i samo je jedan dobitan,',
  'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'faza Prodajnih prilika će biti podešena na ,,Zatvoreno dobitna".',
  'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Ukoliko su predmeti linije Prihoda u ,,Zatvoreno izgubljeno" prodajnoj fazi,',
  'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'faza prodajne prilike je podešena na ,,Zatvoreno izgubljeno".',
  'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Ukoliko su predmeti linije Prihoda otvoreni i dalje,',
  'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'prodajna prilika će biti označena sa najmanje naprednom fazom prodaje.',
  'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Vrednosti su sračunate od stavki Prihoda pa do Prodajnih prilika',
  'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Hijerarhija prodajnih prilika',
  'LBL_PIPELINE_TOTAL_IS' => 'Levak prodaje ukupno je',
  'LBL_PRIMARY_QUOTE_ID' => 'Primarni Citat',
  'LBL_PROBABILITY' => 'Verovatnoća (%):',
  'LBL_PRODUCTS' => 'Proizvodi',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Proizvodi',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Ponude',
  'LBL_QUOTE_SUBPANEL_TITLE' => 'Ponude',
  'LBL_RAW_AMOUNT' => 'Neobrađen iznos',
  'LBL_RLI' => 'Stavke prihoda',
  'LBL_RLI_SUBPANEL_TITLE' => 'Stavke prihoda',
  'LBL_SALES_STAGE' => 'Faza prodaje:',
  'LBL_SALES_STATUS' => 'Status',
  'LBL_SEARCH_FORM_TITLE' => 'Pretraga prodajnih prilika',
  'LBL_TEAM_ID' => 'ID broj tima',
  'LBL_TIMEPERIODS' => 'VremenskiPeriodi',
  'LBL_TIMEPERIOD_ID' => 'ID broj VremenskihPerioda',
  'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Prikazuje deset najboljih prodajnih prilika kružnim grafikonom.',
  'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Moje prodajne prilike',
  'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => 'Prodajne prilike moga tima',
  'LBL_TOP_OPPORTUNITIES' => 'Moje najbolje aktuelne prodajne prilike',
  'LBL_TOTAL_OPPORTUNITIES' => 'Ukupno prodajnih prilika',
  'LBL_TOTAL_RLIS' => 'Ukupno stavki prihoda',
  'LBL_TYPE' => 'Tip:',
  'LBL_VIEW_FORM_TITLE' => 'Pregled prodajne prilike',
  'LBL_WORKSHEET' => 'Tabela',
  'LNK_CREATE' => 'Napravi ponudu',
  'LNK_IMPORT_OPPORTUNITIES' => 'Uvezi prodajne prilike',
  'LNK_NEW_OPPORTUNITY' => 'Kreiraj prodajnu priliku',
  'LNK_OPPORTUNITY_LIST' => 'Pregled prodajnih prilika',
  'LNK_OPPORTUNITY_REPORTS' => 'Pregledaj izveštaje prodajnih prilika',
  'MSG_DUPLICATE' => 'Prodajna prilika koju želite da kreirate možda je duplikat već postojeće. Zapisi prodajnih prilika koji sadrže slična imena izlistani su ispod.<br>Kliknite Sačuvaj da bi nastavili kreiranje nove prodajne prilike, ili kliknite Otkaži da bi se vratili u modul bez kreiranja prodajne prilike.',
  'NOTICE_NO_DELETE_CLOSED_RLIS' => 'Nije moguće obirsati prodajne prilike koje sadrže stavke prihoda.',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Da li ste sigurni da želite da uklonite ovaj kontakt iz prodajne prilike?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Da li ste sigurni da želite da uklonite ovu prodajnu priliku iz projekta?',
  'TPL_RLI_CREATE' => 'Prodajna prilika mora da ima povezanu stavku prihoda. <a href="javascript:void(0);" id="createRLI">Napravite stavku prihoda</a>.',
  'TPL_RLI_CREATE_LINK_TEXT' => 'Napravi stavku prihoda.',
  'UPDATE' => 'Prodajne prilike - Ažuriranje valute',
  'UPDATE_BUGFOUND_COUNT' => 'Nađeni defekti:',
  'UPDATE_BUG_COUNT' => 'Defekti koji su pronađeni i za koje će se tražiti rešenje:',
  'UPDATE_COUNT' => 'Ažurirani zapisi:',
  'UPDATE_CREATE_CURRENCY' => 'Kreiranje nove valute:',
  'UPDATE_DOLLARAMOUNTS' => 'Ažuriraj iznose Američkih dolara',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Ažuriraj iznos Američkih dolara za prodajne prilike koje su zasnovane na tekućem kursu valute. Ova vrednost se koristi za proračunavanje grafika i pregleda kursne liste.',
  'UPDATE_DONE' => 'Završeno',
  'UPDATE_FAIL' => 'Ne mogu da ažuriram -',
  'UPDATE_FIX' => 'Ispravi iznose',
  'UPDATE_FIX_TXT' => 'Pokušava da ispravi pogrešne iznose, kreirajući ispravan decimalni broj od unesene količine. Svaki izmenjeni broj je sačuvan u bazi amount_backup. Ako se prilikom ove funkcije dogodi greška, ne pokušavajte ponovo da pokrenete bez povraćaja podataka iz rezervne pošto bi mogli da napravite novu rezervnu kopiju u koju bi se upisali novi nevažeći podaci.',
  'UPDATE_INCLUDE_CLOSE' => 'Uključi zatvorene zapise',
  'UPDATE_MERGE' => 'Spajanje valuta',
  'UPDATE_MERGE_TXT' => 'Svedi više valuta na jednu valutu. Ako postoji više zapisa valute za istu valutu, spoji zapise u jedan. Ovo će takođe svesti valute za sve ostale module.',
  'UPDATE_NULL_VALUE' => 'Vrednost je NULL i biće postavljena na 0 -',
  'UPDATE_RESTORE' => 'Obnovi iznose',
  'UPDATE_RESTORE_COUNT' => 'Obnovljeni iznosi zapisa:',
  'UPDATE_RESTORE_TXT' => 'Rekonstruše vrednost iz rezervne kopije koja je kreirana tokom popravke.',
  'UPDATE_VERIFY' => 'Proveri iznose',
  'UPDATE_VERIFY_CURAMOUNT' => 'Trenutni iznos:',
  'UPDATE_VERIFY_FAIL' => 'Neuspela verifikacija zapisa:',
  'UPDATE_VERIFY_FIX' => 'Pokretanje popravke daće',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Novi iznos:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nova valuta:',
  'UPDATE_VERIFY_TXT' => 'Proverava da li je vrednost prodajne prilike ispravan decimalni broj koji sadrži samo numeričke karaktere (0-9) i decimale (.)',
  'WARNING_NO_DELETE_CLOSED_SELECTED' => 'Jedan ili više izabranih zapisa sadrži zatvorene stavke prihoda i nije ih moguće obrisati.',
);

