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
  'ERR_DELETE_RECORD' => 'Jānorāda ieraksta numurs, lai izdzēstu tikšanos.',
  'LBL_ACCEPT_LINK' => 'Akceptēt saiti',
  'LBL_ACCEPT_STATUS' => 'Apstiprināt statusu',
  'LBL_ACCEPT_THIS' => 'Apstiprināt?',
  'LBL_ACCOUNT_NAME' => 'Uzņēmums',
  'LBL_ACTIVITIES_REPORTS' => 'Darbību atskaite',
  'LBL_ADD_BUTTON' => 'Pievienot',
  'LBL_ADD_INVITEE' => 'Pievienot dalībniekus',
  'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam:',
  'LBL_CANCEL_CREATE_INVITEE' => 'Atcelt',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Vai tiešām vēlaties dzēst visus atkārtojumus?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
  'LBL_CONTACT_NAME' => 'Kontakts:',
  'LBL_CREATED_BY' => 'Izveidoja',
  'LBL_CREATED_USER' => 'Izveidoja',
  'LBL_CREATE_AND_ADD' => 'Izveidot un Pievienot',
  'LBL_CREATE_CONTACT' => 'Kā kontaktu',
  'LBL_CREATE_INVITEE' => 'Izveidot ielūgumu',
  'LBL_CREATE_LEAD' => 'Kā interesentu',
  'LBL_CREATE_MODULE' => 'Ieplānot tikšanos',
  'LBL_CREATOR' => 'Tikšanās organizators',
  'LBL_DATE' => 'Sākuma datums:',
  'LBL_DATE_END' => 'Beigu datums',
  'LBL_DATE_END_ERROR' => 'Beigu datums ir pirms sākuma datuma',
  'LBL_DATE_TIME' => 'Sākuma datums un laiks:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tikšanās',
  'LBL_DEL' => 'Dzēst',
  'LBL_DESCRIPTION' => 'Apraksts:',
  'LBL_DESCRIPTION_INFORMATION' => 'Apraksta informācija',
  'LBL_DIRECTION' => 'Virziens',
  'LBL_DISPLAYED_URL' => 'Attēlojamais URL',
  'LBL_DURATION' => 'Ilgums:',
  'LBL_DURATION_HOURS' => 'Ilgums stundās:',
  'LBL_DURATION_MINUTES' => 'Ilgums minūtēs:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Rediģēt visus atkārtojumus',
  'LBL_EMAIL' => 'E-pasts',
  'LBL_EMAIL_REMINDER' => 'E-pasta atgādinājums',
  'LBL_EMAIL_REMINDER_SENT' => 'E-pasta atgādinājums nosūtīts',
  'LBL_EMAIL_REMINDER_TIME' => 'E-pasta atgādinājuma laiks',
  'LBL_EMPTY_SEARCH_RESULT' => 'Atvainojiet, rezultāti netika atrasti. Lūdzu zemāk izveidojiet ielūgumu.',
  'LBL_ERROR_LAUNCH_MEETING_GENERAL' => 'Radas kļūda palaižot tikšanos. Lūdzu sazinieties ar administratoru.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Piešķirts lietotājam ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Piešķirts lietotājam',
  'LBL_EXPORT_CREATED_BY' => 'Izveidoja ID',
  'LBL_EXPORT_DATE_END' => 'Baigu datums un laiks',
  'LBL_EXPORT_DATE_START' => 'Sākuma datums un laiks',
  'LBL_EXPORT_DISPLAYED_URL' => 'Attēlotais Url',
  'LBL_EXPORT_EXTERNAL_ID' => 'Ārējais ID',
  'LBL_EXPORT_HOST_URL' => 'Bāzes Url',
  'LBL_EXPORT_JOIN_URL' => 'Apvienojuma Url',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificētāja ID',
  'LBL_EXPORT_PARENT_ID' => 'Vecāka ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Saistītais tips',
  'LBL_EXPORT_REMINDER_TIME' => 'Atgādinājuma laiks (minūtēs)',
  'LBL_EXTERNALID' => 'Ārējās aplikācijas  ID',
  'LBL_EXTNOSTART_HEADER' => 'Kļūda: Nevar uzsākt tikšanos',
  'LBL_EXTNOSTART_MAIN' => 'Jūs nevariet uzsākt tikšanos, jo neesat sistēmas administrators vai tikšanās organizators',
  'LBL_EXTNOT_GO_BACK' => 'Doties atpakaļ uz iepriekšējo ierakstu',
  'LBL_EXTNOT_HEADER' => 'Kļūda: Nav uzaicināts',
  'LBL_EXTNOT_MAIN' => 'Jūs nevariet pievienoties tikšanās, jo neesat ielūgts',
  'LBL_EXTNOT_RECORD_LINK' => 'Skatīt tikšanos',
  'LBL_FIRST_NAME' => 'Vārds',
  'LBL_HELP_CREATE' => 'The {{plural_module_name}} module consists of {{meetings_module}} records logged by users in your organization. {{plural_module_name}} may be in a status of "Scheduled", "Held", or "Canceled". Sugar users as well as {{contacts_module}} and {{leads_module}} may be added as invitees.

To create a {{meetings_singular_module}}:
1. Provide values for the fields as desired.
    - Fields marked "Required" must be completed prior to saving.
    - Click "Show More" to expose additional fields if necessary.
2. Add invitees to the {{meetings_singular_module}}.
    - Click "Select an Attendee" to add an existing user, contact, or lead to the {{meetings_singular_module}}.
    - Click the plus icon to the right of "Select an Attendee" to create a {{meetings_singular_module}} attendee as a new Sugar record.
3. Click "Save" to finalize the new record and return to the previous page.
    - Choose "Save and view" to open the new meeting in record view.
    - Choose "Save and create new" to immediately create another new {{meetings_singular_module}}.',
  'LBL_HELP_RECORD' => 'The {{plural_module_name}} module consists of {{meetings_singular_module}} records logged by users in your organization. {{plural_module_name}} may be in a status of "Scheduled", "Held", or "Canceled". Sugar users as well as {{contacts_module}} and {{leads_module}} may be added as invitees.

- Edit this record&#39;s fields by clicking an individual field or the Edit button.
- View or modify links to other records in the subpanels by toggling the bottom left pane to "Data View".
- Make and view user comments and record change history in the activity stream by toggling the bottom left pane to "Activity Stream".
- Follow or favorite this record using the icons to the right of the record name.
- Additional actions are available in the dropdown Actions menu to the right of the Edit button.',
  'LBL_HELP_RECORDS' => 'The {{plural_module_name}} module consists of meeting records which may be in a status of "Scheduled", "Held", or "Canceled". Upcoming meetings scheduled within the next 24 hours show the start date highlighted in blue. Overdue meetings show the start date highlighted in red.

From this {{plural_module_name}} list view, you can view and in-line edit meeting information. Additional actions are available in the menu at the end of each meeting&#39;s row. You can select "Close" from the menu on any scheduled meeting&#39;s row in order to mark it as held.

Sugar users, contacts, and leads may be added as meeting invitees. {{plural_module_name}} may be created via the {{plural_module_name}} module, Calendar module, import, as well as via the Activities subpanel (for Legacy modules) or Planned Activities dashlet (for Sidecar modules) on related module records (e.g. Contacts, Accounts, etc.), which automatically creates a relationship between both records.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Piezīmes',
  'LBL_HOST_EXT_MEETING' => 'Sākt tikšanos',
  'LBL_HOST_URL' => 'Bāzes URL',
  'LBL_HOURS_ABBREV' => 'st',
  'LBL_HOURS_MINS' => '(stundas/minūtes)',
  'LBL_INVITEE' => 'Dalībnieki',
  'LBL_JOIN_EXT_MEETING' => 'Pievienoties tikšanās',
  'LBL_JOIN_MEETING' => 'Pieslēgties {{meetingType}}',
  'LBL_LAST_NAME' => 'Uzvārds',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interesenti',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
  'LBL_LIST_CLOSE' => 'Aizvērt',
  'LBL_LIST_CONTACT' => 'Kontakts',
  'LBL_LIST_DATE' => 'Sākuma datums',
  'LBL_LIST_DATE_MODIFIED' => 'Modificēts',
  'LBL_LIST_DIRECTION' => 'Virziens',
  'LBL_LIST_DUE_DATE' => 'Izpildes datums',
  'LBL_LIST_FORM_TITLE' => 'Tikšanos saraksts',
  'LBL_LIST_JOIN_MEETING' => 'Pievienoties tikšanās',
  'LBL_LIST_MY_MEETINGS' => 'Manas tikšanās',
  'LBL_LIST_RELATED_TO' => 'Attiecas uz',
  'LBL_LIST_STATUS' => 'Statuss',
  'LBL_LIST_SUBJECT' => 'Temats',
  'LBL_LIST_TIME' => 'Sākuma laiks',
  'LBL_LOCATION' => 'Vieta:',
  'LBL_MEETING' => 'Tikšanās:',
  'LBL_MEETING_CLOSE_SUCCESS' => 'Tikšanās veiksmīgi aizvērta.',
  'LBL_MEETING_INFORMATION' => 'Apraksts',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODIFIED_BY' => 'Modificēja',
  'LBL_MODIFIED_USER' => 'Modificēja',
  'LBL_MODULE_NAME' => 'Tikšanās',
  'LBL_MODULE_NAME_SINGULAR' => 'Tikšanās',
  'LBL_MODULE_TITLE' => 'Tikšanās',
  'LBL_MY_SCHEDULED_MEETINGS' => 'Manas plānotās tikšanās',
  'LBL_NAME' => 'Nosaukums',
  'LBL_NEW_FORM_TITLE' => 'Izveidot tikšanos:',
  'LBL_NO_ACCESS' => 'Jums nav tiesības veidot $moduli',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Vecāka ID',
  'LBL_PARENT_TYPE' => 'Vecāka tips',
  'LBL_PASSWORD' => 'Tikšanās parole',
  'LBL_PHONE' => 'Biroja tālrunis:',
  'LBL_POPUP_REMINDER' => 'Izlecošais atgādinājums',
  'LBL_POPUP_REMINDER_TIME' => 'Izlecošā atgādinājuma laiks',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Jūs ieplānojāt {{moduleSingularLower}} uz {{formatDate date_start}}, bet jums nav tiesību tam piekļūt.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Jūs ieplānojāt {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> uz {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Atkārtošanās',
  'LBL_RECURRING_LIMIT_ERROR' => 'Atkārtotās tikšanās nevar ieplānot, jo tās pārsniedz maksimāli atļauto atkārtojumu skaitu  $limit.',
  'LBL_RECURRING_SOURCE' => 'Atkārtošanas avots',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Tikšanās ar {{{this}}}',
  'LBL_RELATED_TO' => 'Saistīts ar:',
  'LBL_REMINDER' => 'Atgādinājums:',
  'LBL_REMINDER_EMAIL' => 'E-pasts',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-pasts visiem dalībniekiem',
  'LBL_REMINDER_POPUP' => 'Uznirstošais atgādinājums',
  'LBL_REMINDER_TIME' => 'Atgādinājuma laiks',
  'LBL_REMINDER_TITLE' => 'Tikšanās:',
  'LBL_REMOVE' => 'noņemt',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Dzēst visus atkārtojumus',
  'LBL_REPEAT_COUNT' => 'Atkārtošanās skaits',
  'LBL_REPEAT_DOW' => 'Atkārtot uz leju',
  'LBL_REPEAT_END' => 'Beigas',
  'LBL_REPEAT_END_AFTER' => 'Pēc',
  'LBL_REPEAT_END_BY' => 'Ar',
  'LBL_REPEAT_INTERVAL' => 'Intervāls',
  'LBL_REPEAT_OCCURRENCES' => 'atkārtoti notikumi',
  'LBL_REPEAT_PARENT_ID' => 'Atkārtošanās vecāka ID',
  'LBL_REPEAT_TYPE' => 'Atkārtošanās veids',
  'LBL_REPEAT_UNTIL' => 'Atkārtot kamēr',
  'LBL_REVENUELINEITEMS' => 'Ieņēmumu posteņi',
  'LBL_SCHEDULING_FORM_TITLE' => 'Plānošana',
  'LBL_SEARCH_BUTTON' => 'Meklēšana',
  'LBL_SEARCH_FORM_TITLE' => 'Tikšanās meklēšana',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Sūtīt uzaicinājumus',
  'LBL_SEND_BUTTON_TITLE' => 'Sūtīt uzaicinājumus [Alt+I]',
  'LBL_SEND_INVITES' => 'Sūtīt uzaicinājumus',
  'LBL_SEQUENCE' => 'Tikšanās atjaunināšanas secība',
  'LBL_START_MEETING' => 'Sākt {{meetingType}}',
  'LBL_STATUS' => 'Statuss:',
  'LBL_SUBJECT' => 'Temats:',
  'LBL_SYNCED_RECURRING_MSG' => 'Šī tikšanās tika izveidota citā sistēmā un tā tika sinhronizēta ar Sugar. Lai veiktu izmaiņas, izmantojiet tikšanās avota sistēmu. Izmaiņas avota sistēmā var tikt sasinhronizētas ar šo ierakstu.',
  'LBL_TIME' => 'Sākuma laiks:',
  'LBL_TYPE' => 'Tikšanās tips',
  'LBL_URL' => 'Sākt/Pievienoties tikšanās',
  'LBL_USERS_SUBPANEL_TITLE' => 'Lietotāji',
  'LNK_IMPORT_MEETINGS' => 'Importēt tikšanās',
  'LNK_MEETING_LIST' => 'Tikšanās',
  'LNK_NEW_APPOINTMENT' => 'Izveidot tikšanos',
  'LNK_NEW_MEETING' => 'Ieplānot tikšanos',
  'NOTICE_DURATION_TIME' => 'Ilgumam jābūt lielākam par 0',
  'NTC_REMOVE_INVITEE' => 'Vai tiešām vēlaties dzēst tikšanās uzaicinājumu?',
);

