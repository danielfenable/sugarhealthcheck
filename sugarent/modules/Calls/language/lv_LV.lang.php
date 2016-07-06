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
  'ERR_DELETE_RECORD' => 'Lai dzēstu uzņēmumu, ir jānorāda ieraksta numurs.',
  'LBL_ACCEPT_LINK' => 'Apstiprināt saiti',
  'LBL_ACCEPT_STATUS' => 'Apstiprināt statusu',
  'LBL_ACCOUNT_NAME' => 'Klients',
  'LBL_ACTIVITIES_REPORTS' => 'Darbību atskaite',
  'LBL_ADD_BUTTON' => 'Pievienot',
  'LBL_ADD_INVITEE' => 'Pievienot ielūgtos',
  'LBL_ASSIGNED_TO_ID' => 'Piešķirts lietotājam',
  'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
  'LBL_BLANK' => ' ',
  'LBL_CALL' => 'Zvani:',
  'LBL_CALL_INFORMATION' => 'Apskats',
  'LBL_CANCEL_CREATE_INVITEE' => 'Atcelt',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Vai tiešām vēlaties izņemt visus periodiskos ierakstus?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktpersonas',
  'LBL_CONTACT_NAME' => 'Kontaktpersona:',
  'LBL_CREATE_AND_ADD' => 'Izveidot un Pievienot',
  'LBL_CREATE_CONTACT' => 'Kā kontaktu',
  'LBL_CREATE_INVITEE' => 'Izveidot ielūgumu',
  'LBL_CREATE_LEAD' => 'Kā interesentu',
  'LBL_CREATE_MODULE' => 'Pieteikt zvanu',
  'LBL_DATE' => 'Sākuma datums:',
  'LBL_DATE_END' => 'Beigu datums',
  'LBL_DATE_END_ERROR' => 'Beigu datums ir pirms sākuma datuma',
  'LBL_DATE_TIME' => 'Sākuma datums un laiks:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Zvani',
  'LBL_DEL' => 'Dzēst',
  'LBL_DESCRIPTION' => 'Apraksts:',
  'LBL_DESCRIPTION_INFORMATION' => 'Apraksta informācija',
  'LBL_DIRECTION' => 'Virziens:',
  'LBL_DURATION' => 'Ilgums:',
  'LBL_DURATION_HOURS' => 'Ilgums stundās:',
  'LBL_DURATION_MINUTES' => 'Ilgums minūtēs:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Rediģēt visus atkārtojumus',
  'LBL_EMAIL' => 'E-pasts',
  'LBL_EMAIL_REMINDER' => 'E-pasta atgādinājums',
  'LBL_EMAIL_REMINDER_SENT' => 'E-pasta atgādinājums nosūtīts',
  'LBL_EMAIL_REMINDER_TIME' => 'E-pasta atgādinājuma laiks',
  'LBL_EMPTY_SEARCH_RESULT' => 'Atvainojiet, rezultāti netika atrasti. Lūdzu zemāk izveidojiet ielūgumu.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Piešķirts lietotājam ID',
  'LBL_EXPORT_CREATED_BY' => 'Izveidotāja ID',
  'LBL_EXPORT_DATE_START' => 'Sākuma datums un laiks',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificētāja ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Attiecas uz moduli',
  'LBL_EXPORT_REMINDER_TIME' => 'Atgādinājuma laiks (minūtēs)',
  'LBL_FIRST_NAME' => 'Vārds',
  'LBL_HELP_CREATE' => 'The {{plural_module_name}} module consists of {{calls_singular_module}} records logged by users in your organization.  {{plural_module_name}} may be in a status of "Scheduled", "Held", or "Canceled". Sugar users as well as contacts and leads may be added as invitees.

To create a {{calls_singular_module}}:
1. Provide values for the fields as desired.
    - Fields marked "Required" must be completed prior to saving.
    - Click "Show More" to expose additional fields if necessary.
2. Add invitees to the {{calls_singular_module}}.
    - Click "Select an Attendee" to add an existing user, contact, or lead to the {{calls_singular_module}}.
    - Click the plus icon to the right of "Select an Attendee" to create a {{calls_singular_module}} attendee as a new Sugar record.
3. Click "Save" to finalize the new record and return to the previous page.
    - Choose "Save and view" to open the new {{calls_singular_module}} in record view.
    - Choose "Save and create new" to immediately create another new {{calls_singular_module}}.',
  'LBL_HELP_RECORD' => 'The {{plural_module_name}} module consists of {{calls_singular_module}} records logged by users in your organization.  {{plural_module_name}} may be in a status of "Scheduled", "Held", or "Canceled". Sugar users as well as {{contacts_module}} and {{leads_module}} may be added as invitees.

- Edit this record&#39;s fields by clicking an individual field or the Edit button.
- View or modify links to other records in the subpanels by toggling the bottom left pane to "Data View".
- Make and view user comments and record change history in the activity stream by toggling the bottom left pane to "Activity Stream".
- Follow or favorite this record using the icons to the right of the record name.
- Additional actions are available in the dropdown Actions menu to the right of the Edit button.',
  'LBL_HELP_RECORDS' => 'The {{plural_module_name}} module consists of call records which may be in a status of "Scheduled", "Held", or "Canceled". Upcoming calls scheduled within the next 24 hours have the start date highlighted in blue. Overdue calls have the start date highlighted in red.

From this {{plural_module_name}} list view, you can view and in-line edit call information. Additional actions are available in the menu at the end of each call&#39;s row. You can select "Close" from the menu on any scheduled call&#39;s row in order to mark it as held.

Sugar users, contacts, and leads may be added as call invitees. {{plural_module_name}} may be created via the {{plural_module_name}} module, Calendar module, import, as well as via the Activities subpanel (for Legacy modules) or Planned Activities dashlet (for Sidecar modules) on related module records (e.g. Contacts, Accounts, etc.), which automatically creates a relationship between both records.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Piezīmes',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINUTES' => '(stundas/minūtes)',
  'LBL_INVITEE' => 'Ielūgtais',
  'LBL_LAST_NAME' => 'Uzvārds',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interesenti',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
  'LBL_LIST_CLOSE' => 'Aizvērts',
  'LBL_LIST_CONTACT' => 'Kontaktpersonas',
  'LBL_LIST_DATE' => 'Sākuma datums',
  'LBL_LIST_DIRECTION' => 'Virziens',
  'LBL_LIST_DURATION' => 'Ilgums',
  'LBL_LIST_FORM_TITLE' => 'Zvanu saraksts',
  'LBL_LIST_MY_CALLS' => 'Mani zvani',
  'LBL_LIST_RELATED_TO' => 'Saistīts ar',
  'LBL_LIST_RELATED_TO_ID' => 'Attiecas uz ID',
  'LBL_LIST_SUBJECT' => 'Temats',
  'LBL_LIST_TIME' => 'Sākuma laiks',
  'LBL_LOG_CALL' => 'Reģistrēt zvanu',
  'LBL_MEMBER_OF' => 'Dalībnieks',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Zvani',
  'LBL_MODULE_NAME_SINGULAR' => 'Zvans',
  'LBL_MODULE_TITLE' => 'Zvani: Sākums',
  'LBL_MY_SCHEDULED_CALLS' => 'Mani ieplānotie zvani',
  'LBL_NAME' => 'Nosaukums',
  'LBL_NEW_FORM_TITLE' => 'Izveidot tikšanos',
  'LBL_NO_ACCESS' => 'Jums nav pieejas tiesības, lai izveidotu $moduli',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Priekšteča ID',
  'LBL_PHONE' => 'Tālrunis',
  'LBL_POPUP_REMINDER_TIME' => 'Izlecošā atgādinājuma laiks',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Jūs ieplānojāt {{moduleSingularLower}} uz {{formatDate date_start}}, bet jums nav tiesību tam piekļūt.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Jūs ieplānojāt {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> uz {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Atkārtošanās',
  'LBL_RECURRING_LIMIT_ERROR' => 'Atkārtotos zvanu nevar ieplānot jo tas pārsniedz maksimāli atļauto atkārtojumu skaitu',
  'LBL_RECURRING_SOURCE' => 'Atkārtojošs avots',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Zvans {{{this}}}',
  'LBL_RELATED_TO' => 'Saistīts ar:',
  'LBL_REMINDER' => 'Atgādinājumi:',
  'LBL_REMINDER_EMAIL' => 'E-pasts',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-pasts visiem dalībniekiem',
  'LBL_REMINDER_POPUP' => 'Uznirstošais atgādinājums',
  'LBL_REMINDER_TIME' => 'Atgādināšanas laiks',
  'LBL_REMINDER_TITLE' => 'Zvans:',
  'LBL_REMOVE' => 'noņemt',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Dzēst visus atkārtojumus',
  'LBL_REPEAT_COUNT' => 'Atkārtošanas skaits',
  'LBL_REPEAT_DOW' => 'Atkārtot uz leju',
  'LBL_REPEAT_END' => 'Beigas',
  'LBL_REPEAT_END_AFTER' => 'Pēc',
  'LBL_REPEAT_END_BY' => 'Ar',
  'LBL_REPEAT_INTERVAL' => 'Atkārtošanas intervāls',
  'LBL_REPEAT_OCCURRENCES' => 'atkārtoti notikumi',
  'LBL_REPEAT_PARENT_ID' => 'Atkārtojošs priekšteča ID',
  'LBL_REPEAT_TYPE' => 'Atkārtošanas veids',
  'LBL_REPEAT_UNTIL' => 'Atkārtot, kamēr',
  'LBL_REVENUELINEITEMS' => 'Ieņēmumu posteņi',
  'LBL_SCHEDULING_FORM_TITLE' => 'Plānošana',
  'LBL_SEARCH_BUTTON' => 'Meklēšana',
  'LBL_SEARCH_FORM_TITLE' => 'Zvanu meklēšana',
  'LBL_SELECT_FROM_DROPDOWN' => 'Vispirms izdariet izvēli nolaižamajā sarakstā - Saistīts ar.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Saglabāt un nosūtīt ielūgumus',
  'LBL_SEND_BUTTON_TITLE' => 'Saglabāt un Nosūtīt ielūgumus [Alt+I]',
  'LBL_SEND_INVITES' => 'Sūtīt uzaicinājumus',
  'LBL_STATUS' => 'Statuss:',
  'LBL_SUBJECT' => 'Temats:',
  'LBL_SYNCED_RECURRING_MSG' => 'Šī tikšanās ir izveidota citā sistēmā un sinhronizēta ar Sugar. Izmaiņu veikšanai izmantojiet tikšanās avota sistēmu. Izmaiņas avota sistēmā var sasinhronizēt ar šo ierakstu.',
  'LBL_TIME' => 'Sākuma laiks:',
  'LBL_TIME_END' => 'Beigu laiks',
  'LBL_USERS_SUBPANEL_TITLE' => 'Lietotāji',
  'LNK_CALL_LIST' => 'Aplūkot zvanus',
  'LNK_IMPORT_CALLS' => 'Importēt zvanus',
  'LNK_NEW_ACCOUNT' => 'Jauns uzņēmums',
  'LNK_NEW_APPOINTMENT' => 'Izveidot tikšanos',
  'LNK_NEW_CALL' => 'Reģistrēt zvanu',
  'LNK_NEW_MEETING' => 'Ieplānot tikšanos',
  'LNK_NEW_OPPORTUNITY' => 'Jauna iespēja',
  'LNK_SELECT_ACCOUNT' => 'Izvēlēties uzņēmumu',
  'NOTICE_DURATION_TIME' => 'Ilgumam jābūt lielākam par 0',
  'NTC_REMOVE_INVITEE' => 'Vai tiešām vēlaties izņemt šo ielūgto no zvana?',
  'TPL_CALL_STATUS_CHANGED' => 'Zvans atzīmēts kā {{status}}.',
);

