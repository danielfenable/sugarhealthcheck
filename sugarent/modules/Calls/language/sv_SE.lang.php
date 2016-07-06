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
  'ERR_DELETE_RECORD' => 'Ett objektnummer måste specificeras för att kunna radera organisationen.',
  'LBL_ACCEPT_LINK' => 'Acceptera Länk',
  'LBL_ACCEPT_STATUS' => 'Acceptera status',
  'LBL_ACCOUNT_NAME' => 'Konto',
  'LBL_ACTIVITIES_REPORTS' => 'Aktivitetsrapport',
  'LBL_ADD_BUTTON' => 'Lägg till',
  'LBL_ADD_INVITEE' => 'Lägg till inbjudna',
  'LBL_ASSIGNED_TO_ID' => 'Tilldelad användare',
  'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
  'LBL_BLANK' => '-blank-',
  'LBL_CALL' => 'Telefonsamtal:',
  'LBL_CALL_INFORMATION' => 'Samtalsöversikt',
  'LBL_CANCEL_CREATE_INVITEE' => 'Avbryt',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Är du säker på att du vill radera alla upprepade protokoll?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_CREATE_AND_ADD' => 'Skapa & Lägg Till',
  'LBL_CREATE_CONTACT' => 'Som Kontakt',
  'LBL_CREATE_INVITEE' => 'Skapa en Inbjudan',
  'LBL_CREATE_LEAD' => 'Som Lead',
  'LBL_CREATE_MODULE' => 'Logga samtal',
  'LBL_DATE' => 'Startdatum',
  'LBL_DATE_END' => 'Slutdatum',
  'LBL_DATE_END_ERROR' => 'Slutdatum är före startdatum',
  'LBL_DATE_TIME' => 'Startdatum & tid',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Telefonsamtal',
  'LBL_DEL' => 'Radera',
  'LBL_DESCRIPTION' => 'Beskrivning:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beskrivande information',
  'LBL_DIRECTION' => 'Riktning:',
  'LBL_DURATION' => 'Varaktighet:',
  'LBL_DURATION_HOURS' => 'Varaktighet timmar:',
  'LBL_DURATION_MINUTES' => 'Varaktighet minuter:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Redigera Alla Upprepningar',
  'LBL_EMAIL' => 'Epost',
  'LBL_EMAIL_REMINDER' => 'Epost påminnelse',
  'LBL_EMAIL_REMINDER_SENT' => 'Epost påminnelse skickad',
  'LBL_EMAIL_REMINDER_TIME' => 'Tid för Epost Påminnelse',
  'LBL_EMPTY_SEARCH_RESULT' => 'Tyvärr, inga resultat hittades. Var vänlig skapa en inbjudan nedanför.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tilldelad Användar ID',
  'LBL_EXPORT_CREATED_BY' => 'Skapad av ID',
  'LBL_EXPORT_DATE_START' => 'Startdatum och starttid',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Ändrad av ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Relaterad Till Modul',
  'LBL_EXPORT_REMINDER_TIME' => 'Påminnelsetid (i minuter)',
  'LBL_FIRST_NAME' => 'Förnamn',
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
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Anteckningar',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINUTES' => '(timmar/minuter)',
  'LBL_INVITEE' => 'Inbjudna',
  'LBL_LAST_NAME' => 'Efternamn',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
  'LBL_LIST_CLOSE' => 'Stäng',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_DATE' => 'Startdatum',
  'LBL_LIST_DIRECTION' => 'Riktning',
  'LBL_LIST_DURATION' => 'Varaktighet',
  'LBL_LIST_FORM_TITLE' => 'Lista telefonsamtal',
  'LBL_LIST_MY_CALLS' => 'Mina telefonsamtal',
  'LBL_LIST_RELATED_TO' => 'Relaterad till',
  'LBL_LIST_RELATED_TO_ID' => 'Relaterad till ID',
  'LBL_LIST_SUBJECT' => 'Ämne',
  'LBL_LIST_TIME' => 'Start tid',
  'LBL_LOG_CALL' => 'Telefonsamtals logg',
  'LBL_MEMBER_OF' => 'Medlem av',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Telefonsamtal',
  'LBL_MODULE_NAME_SINGULAR' => 'Telefonsamtal',
  'LBL_MODULE_TITLE' => 'Telefonsamtal: Hem',
  'LBL_MY_SCHEDULED_CALLS' => 'Mina Schemalagda Samtal',
  'LBL_NAME' => 'Namn',
  'LBL_NEW_FORM_TITLE' => 'Skapa aktivitet',
  'LBL_NO_ACCESS' => 'Du har inte behörighet att skapa $module.',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Föräldra ID',
  'LBL_PHONE' => 'Telefon',
  'LBL_POPUP_REMINDER_TIME' => 'Popup Påminnelsetid',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Du schedulerade {{moduleSingularLower}} till {{formatDate date_start}}, men du saknar behörighet att komma åt det.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Du schedulerade {{moduleSingularLower}} {{name}} till {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Upprepning',
  'LBL_RECURRING_LIMIT_ERROR' => 'Det här upprepade mötet kan inte schemaläggas för det överskrider maximalt antal tillåtna upprepningar av $limit.',
  'LBL_RECURRING_SOURCE' => 'Upprepa Source',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Samtal med {{{this}}}',
  'LBL_RELATED_TO' => 'Relaterad till:',
  'LBL_REMINDER' => 'Påminnelse:',
  'LBL_REMINDER_EMAIL' => 'Epost',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Maila alla inbjudna',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Påminnelse tid',
  'LBL_REMINDER_TITLE' => 'Samtal:',
  'LBL_REMOVE' => 'radera',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Radera Alla Upprepningar',
  'LBL_REPEAT_COUNT' => 'Antal upprepningar',
  'LBL_REPEAT_DOW' => 'På',
  'LBL_REPEAT_END' => 'Slut',
  'LBL_REPEAT_END_AFTER' => 'Efter',
  'LBL_REPEAT_END_BY' => 'Av',
  'LBL_REPEAT_INTERVAL' => 'Varje',
  'LBL_REPEAT_OCCURRENCES' => 'upprepning',
  'LBL_REPEAT_PARENT_ID' => 'Repetera Parent ID',
  'LBL_REPEAT_TYPE' => 'Repetera',
  'LBL_REPEAT_UNTIL' => 'Repetera Ända Till',
  'LBL_REVENUELINEITEMS' => 'Intäktsposter',
  'LBL_SCHEDULING_FORM_TITLE' => 'Schemaläggning',
  'LBL_SEARCH_BUTTON' => 'Sök',
  'LBL_SEARCH_FORM_TITLE' => 'Sök telefonsamtal',
  'LBL_SELECT_FROM_DROPDOWN' => 'Var god välj först från dropdownmenyn Relaterad till.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Skicka inbjudan',
  'LBL_SEND_BUTTON_TITLE' => 'Skicka inbjudan [Alt+I]',
  'LBL_SEND_INVITES' => 'Skicka inbjudningar',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Ämne:',
  'LBL_SYNCED_RECURRING_MSG' => 'Det här mötet skapades i ett annat system och synkroniserades till Sugar. För att göra ändringar, gå till originalet av mötet i det andra systemet. Ändringar gjorda i det andra systemet synkroniseras till det här protokollet.',
  'LBL_TIME' => 'Start tid:',
  'LBL_TIME_END' => 'Slut tid',
  'LBL_USERS_SUBPANEL_TITLE' => 'Användare',
  'LNK_CALL_LIST' => 'Telefonsamtal',
  'LNK_IMPORT_CALLS' => 'Importera telefonsamtal',
  'LNK_NEW_ACCOUNT' => 'Ny organisation',
  'LNK_NEW_APPOINTMENT' => 'Skapa aktivitet',
  'LNK_NEW_CALL' => 'Schemalägg telefonsamtal',
  'LNK_NEW_MEETING' => 'Schemalägg möte',
  'LNK_NEW_OPPORTUNITY' => 'Ny affärsmöjlighet',
  'LNK_SELECT_ACCOUNT' => 'Välj organisation',
  'NOTICE_DURATION_TIME' => 'Varaktighetstiden måste vara större än 0',
  'NTC_REMOVE_INVITEE' => 'Är du säker på att du vill ta bort den inbjudna från detta telefonsamtal?',
  'TPL_CALL_STATUS_CHANGED' => 'Samtal markerad som {{status}}.',
);

