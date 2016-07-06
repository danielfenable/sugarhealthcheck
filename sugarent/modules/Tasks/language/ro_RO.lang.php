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
  'DATE_FORMAT' => 'format data',
  'ERR_DELETE_RECORD' => 'Trebuie sa specifici un numar de inregistrare pentru a sterge contul',
  'ERR_INVALID_HOUR' => 'Va rugam introduceti un numar intre 0 si 24',
  'LBL_ACTIVITIES_REPORTS' => 'Raport Activitati',
  'LBL_ASSIGNED_TO_NAME' => 'Atrbuit lui',
  'LBL_ASSIGNED_USER' => 'Atrbuit lui',
  'LBL_COLON' => ':',
  'LBL_CONTACT' => 'Contact',
  'LBL_CONTACT_FIRST_NAME' => 'contact prenume',
  'LBL_CONTACT_ID' => 'contact id',
  'LBL_CONTACT_LAST_NAME' => 'contact nume',
  'LBL_CONTACT_NAME' => 'nume contact',
  'LBL_CONTACT_PHONE' => 'contact telefon',
  'LBL_DATE_DUE' => 'Pana la data',
  'LBL_DATE_DUE_FLAG' => 'Nu pana la data de',
  'LBL_DATE_START_FLAG' => 'Nu incepe pana la data de',
  'LBL_DEFAULT_PRIORITY' => 'Mediu',
  'LBL_DESCRIPTION' => 'Descriere',
  'LBL_DESCRIPTION_INFORMATION' => 'Descriere Informatie',
  'LBL_DUE_DATE' => 'Pana la data',
  'LBL_DUE_DATE_AND_TIME' => 'Pana la data&ora:',
  'LBL_DUE_TIME' => 'Pana la ora',
  'LBL_EDITLAYOUT' => 'Editeaza Plan General',
  'LBL_EMAIL' => 'Adresa Email:',
  'LBL_EMAIL_ADDRESS' => 'adresa email',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Alocat utilizatorului ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Alocat utilizatorului',
  'LBL_EXPORT_CREATED_BY' => 'Creat de ID',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificat de ID-ul',
  'LBL_EXPORT_PARENT_ID' => 'Legat de ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Legat de modul',
  'LBL_HELP_CREATE' => 'Modulul {{module_name}} este format din acţiuni flexibile, elemente planificate sau alte tipuri de activităţi care necesită finalizare. Pentru a crea {{module_name}}: 1. Completează valori în câmpurile dorite. - Câmpurile marcate "Obligatoriu" trebuie să fie completate înainte de a salva. - Apasă butonul "Afişează mai mult" pentru a vedea câmpuri adiţionale dacă este necesar. 2. Apasă "Salvează" pentru a finaliza noua înregistrare şi pentru a reveni la pagina anterioară. - Apasă "Salvează şi vizualizează" pentru a deschide noul (noua) {{module_name}} în fereastra de vizualizare a înregistrărilor. - Apasă "Salvează şi creează o înregistrare nouă" pentru a crea imediat un nou (o nouă) {{module_name}}.',
  'LBL_HELP_RECORD' => 'Modulul {{plural_module_name}} este format din acţiuni flexibile, elemente planificate sau alte tipuri de activităţi care necesită finalizare. - Editează câmpurile acestei înregistrări apăsând pe fiecare câmp individual sau pe butonul Editare. - Vizualizează sau modifică linkuri către alte înregistrări in panourile secundare, trecând fereastra din stânga jos în stadiul "Vizualizare Date". - Creează şi vizualizează comentariile utilizatorilor şi istoricul modificărilor în {{activitystream_singular_module}} trecând fereastra din stânga jos în stadiul "Flux de activitate". - Urmăreşte sau marchează ca favorit această înregistrare folosind pictogramele din dreapta numelui înregistrării. - Sunt disponibile acţiuni suplimentare în meniul cu listă derulantă Acţiuni din dreapta butonului Editare.',
  'LBL_HELP_RECORDS' => 'Modulul {{plural_module_name}} este format din acţiuni flexibile, elemente planificate sau alte tipuri de activităţi care necesită finalizare. Înregistrările {{module_name}} pot fi legate de o înregistrare în majoritatea modulelor prin câmpul relaţionat flexibil sau mai pot fi legate de un/o singur/ă {{contacts_singular_module}}. Există mai multe modalităţi prin care puteţi crea {{plural_module_name}} în Sugar, cum ar fi prin intermediul modulului {{plural_module_name}}, prin duplicare, prin import de {{plural_module_name}} etc. Odată ce a fost creată înregistrarea {{module_name}}, puteţi vizualiza şi edita informaţiile privitoare la {{module_name}} prin intermediul ferestrei de vizualizare a înregistrării {{plural_module_name}}. În funcţie de detaliile din {{module_name}}, puteţi de asemenea vizualiza şi edita informaţiile {{module_name}} prin intermediul modulului Calendar. Fiecare înregistrare {{module_name}} poate apoi relaţiona cu alte înregistrări Sugar, cum ar fi {{accounts_module}}, {{contacts_module}}, {{opportunities_module}} şi multe altele.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Note',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizator Atribuit',
  'LBL_LIST_CLOSE' => 'inchis',
  'LBL_LIST_COMPLETE' => 'complet',
  'LBL_LIST_CONTACT' => 'lista contact',
  'LBL_LIST_DATE_MODIFIED' => 'Data Modificare',
  'LBL_LIST_DUE_DATE' => 'Pana la data',
  'LBL_LIST_DUE_TIME' => 'Pana la ora',
  'LBL_LIST_FORM_TITLE' => 'Lista sarcini',
  'LBL_LIST_MY_TASKS' => 'sarcina deschisa',
  'LBL_LIST_PRIORITY' => 'Prioritate',
  'LBL_LIST_RELATED_TO' => 'Asociat cu',
  'LBL_LIST_START_DATE' => 'Data Inceput:',
  'LBL_LIST_START_TIME' => 'Timp Inceput',
  'LBL_LIST_STATUS' => 'Stare',
  'LBL_LIST_SUBJECT' => 'subiect',
  'LBL_MODULE_NAME' => 'Sarcini',
  'LBL_MODULE_NAME_SINGULAR' => 'Sarcina',
  'LBL_MODULE_TITLE' => 'Sarcini: Acasa',
  'LBL_NAME' => 'Nume',
  'LBL_NEW_FORM_DUE_DATE' => 'Pana la data:',
  'LBL_NEW_FORM_DUE_TIME' => 'Pana la ora:',
  'LBL_NEW_FORM_SUBJECT' => 'Subiect',
  'LBL_NEW_FORM_TITLE' => 'Creeaza sarcini',
  'LBL_NEW_TIME_FORMAT' => '(24:00)',
  'LBL_NONE' => 'Niciunul',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Note',
  'LBL_PARENT_ID' => 'parent id',
  'LBL_PARENT_NAME' => 'Tip Parinte',
  'LBL_PHONE' => 'telefon',
  'LBL_PRIORITY' => 'Prioritate',
  'LBL_REVENUELINEITEMS' => 'Elemente venit',
  'LBL_SEARCH_FORM_TITLE' => 'Cautare sarcini',
  'LBL_START_DATE' => 'Data Inceput:',
  'LBL_START_DATE_AND_TIME' => 'Incepand de la data&ora',
  'LBL_START_TIME' => 'Oara de start:',
  'LBL_STATUS' => 'Stare',
  'LBL_SUBJECT' => 'subiect',
  'LBL_TASK' => 'Sarcini',
  'LBL_TASK_CLOSE_SUCCESS' => 'Sarcina încheiat cu succes.',
  'LBL_TASK_INFORMATION' => 'Privire de ansamblu asupra sarcinii',
  'LNK_IMPORT_TASKS' => 'Importa artibutii',
  'LNK_NEW_TASK' => 'Creaza sarcina',
  'LNK_TASK_LIST' => 'vezi lista sarcini',
);

