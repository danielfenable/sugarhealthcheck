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
  'ERR_DELETE_RECORD' => 'Ett postnummer måste specificeras för att kunna radera mötet.',
  'LBL_ACCEPT_LINK' => 'Acceptera Länk',
  'LBL_ACCEPT_STATUS' => 'Acceptera status',
  'LBL_ACCEPT_THIS' => 'Acceptera?',
  'LBL_ACCOUNT_NAME' => 'Konto',
  'LBL_ACTIVITIES_REPORTS' => 'Aktivitetsrapport',
  'LBL_ADD_BUTTON' => 'Lägg till',
  'LBL_ADD_INVITEE' => 'Lägg till inbjudna',
  'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
  'LBL_CANCEL_CREATE_INVITEE' => 'Avbryt',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Är du säker på att du vill radera alla upprepade protokoll?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_CREATED_BY' => 'Skapad av',
  'LBL_CREATED_USER' => 'Skapad användare',
  'LBL_CREATE_AND_ADD' => 'Skapa & Lägg Till',
  'LBL_CREATE_CONTACT' => 'Som Kontakt',
  'LBL_CREATE_INVITEE' => 'Skapa en Inbjudan',
  'LBL_CREATE_LEAD' => 'Som Lead',
  'LBL_CREATE_MODULE' => 'Schemalägg möte',
  'LBL_CREATOR' => 'Skapare av Möte',
  'LBL_DATE' => 'Startdatum:',
  'LBL_DATE_END' => 'Slutdatum',
  'LBL_DATE_END_ERROR' => 'Slutdatum är före startdatum',
  'LBL_DATE_TIME' => 'Startdatum & tid',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Möten',
  'LBL_DEL' => 'Radera',
  'LBL_DESCRIPTION' => 'Beskrivning:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beskrivande information',
  'LBL_DIRECTION' => 'Riktning:',
  'LBL_DISPLAYED_URL' => 'Visa URL',
  'LBL_DURATION' => 'Varaktighet:',
  'LBL_DURATION_HOURS' => 'Varaktighet timmar:',
  'LBL_DURATION_MINUTES' => 'Varaktighet minuter:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Redigera Alla Upprepningar',
  'LBL_EMAIL' => 'Epost',
  'LBL_EMAIL_REMINDER' => 'Epost påminnelse',
  'LBL_EMAIL_REMINDER_SENT' => 'Epost påminnelse skickad',
  'LBL_EMAIL_REMINDER_TIME' => 'Tid för Epost Påminnelse',
  'LBL_EMPTY_SEARCH_RESULT' => 'Tyvärr, inga resultat hittades. Var vänlig skapa en inbjudan nedanför.',
  'LBL_ERROR_LAUNCH_MEETING_GENERAL' => 'Det uppstod ett fel när mötet startades. Vänligen kontakta din administratör.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tilldelad Användar ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Tilldelat Användarnamn',
  'LBL_EXPORT_CREATED_BY' => 'Skapad av ID',
  'LBL_EXPORT_DATE_END' => 'Slutdatum och sluttid',
  'LBL_EXPORT_DATE_START' => 'Startdatum och starttid',
  'LBL_EXPORT_DISPLAYED_URL' => 'Visad Url',
  'LBL_EXPORT_EXTERNAL_ID' => 'External ID',
  'LBL_EXPORT_HOST_URL' => 'Host Url',
  'LBL_EXPORT_JOIN_URL' => 'Join Url',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Ändrad av ID',
  'LBL_EXPORT_PARENT_ID' => 'Föräldra ID:',
  'LBL_EXPORT_PARENT_TYPE' => 'Relaterad typ',
  'LBL_EXPORT_REMINDER_TIME' => 'Påminnelsetid (i minuter)',
  'LBL_EXTERNALID' => 'External App ID',
  'LBL_EXTNOSTART_HEADER' => 'Fel: Kan inte starta möte',
  'LBL_EXTNOSTART_MAIN' => 'Du kan inte start det här mötet för du är inte Administratör eller ägare av mötet.',
  'LBL_EXTNOT_GO_BACK' => 'Gå tillbaka till tidigare protokoll',
  'LBL_EXTNOT_HEADER' => 'Fel: Inte Inbjuden',
  'LBL_EXTNOT_MAIN' => 'Du har inte möjlighet att delta i det här mötet för du är inte inbjuden.',
  'LBL_EXTNOT_RECORD_LINK' => 'Visa Möte',
  'LBL_FIRST_NAME' => 'Förnamn',
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
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Anteckningar',
  'LBL_HOST_EXT_MEETING' => 'Starta Möte',
  'LBL_HOST_URL' => 'Host URL',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINS' => '(timmar/minuter)',
  'LBL_INVITEE' => 'Inbjudna',
  'LBL_JOIN_EXT_MEETING' => 'Delta i Möte',
  'LBL_JOIN_MEETING' => 'Join {{meetingType}}',
  'LBL_LAST_NAME' => 'Efternamn',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
  'LBL_LIST_CLOSE' => 'Stäng',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_DATE' => 'Startdatum',
  'LBL_LIST_DATE_MODIFIED' => 'Redigeringsdatum',
  'LBL_LIST_DIRECTION' => 'Riktning',
  'LBL_LIST_DUE_DATE' => 'Genomförandedatum',
  'LBL_LIST_FORM_TITLE' => 'Lista möten',
  'LBL_LIST_JOIN_MEETING' => 'Delta i Möte',
  'LBL_LIST_MY_MEETINGS' => 'Mina möten',
  'LBL_LIST_RELATED_TO' => 'Relaterad till',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUBJECT' => 'Ämne',
  'LBL_LIST_TIME' => 'Start tid',
  'LBL_LOCATION' => 'Plats:',
  'LBL_MEETING' => 'Möte:',
  'LBL_MEETING_CLOSE_SUCCESS' => 'Möte stängd med framgång.',
  'LBL_MEETING_INFORMATION' => 'Mötes översikt',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODIFIED_BY' => 'Redigerad av',
  'LBL_MODIFIED_USER' => 'Ändrad användare',
  'LBL_MODULE_NAME' => 'Möten',
  'LBL_MODULE_NAME_SINGULAR' => 'Möte',
  'LBL_MODULE_TITLE' => 'Möten:Hem',
  'LBL_MY_SCHEDULED_MEETINGS' => 'Mina Schemalagda Möten',
  'LBL_NAME' => 'Namn',
  'LBL_NEW_FORM_TITLE' => 'Skapa aktivitet',
  'LBL_NO_ACCESS' => 'Du har inte behörighet att skapa $module.',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Föräldra ID:',
  'LBL_PARENT_TYPE' => 'Föräldratyp',
  'LBL_PASSWORD' => 'Mötes lösenord',
  'LBL_PHONE' => 'Kontorstelefon:',
  'LBL_POPUP_REMINDER' => 'Popup Påminnelse',
  'LBL_POPUP_REMINDER_TIME' => 'Popup Påminnelsetid',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'You scheduled the {{moduleSingularLower}} for {{formatDate date_start}}, but you do not have permission to access it.',
  'LBL_RECORD_SAVED_SUCCESS' => 'You scheduled the {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> for {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Upprepning',
  'LBL_RECURRING_LIMIT_ERROR' => 'Det här upprepade mötet kan inte schemaläggas för det överskirder maximalt antal tillåtna upprepningar av $limit.',
  'LBL_RECURRING_SOURCE' => 'Upprepa Source',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Möte med {{{this}}}',
  'LBL_RELATED_TO' => 'Relaterad till:',
  'LBL_REMINDER' => 'Påminnelse:',
  'LBL_REMINDER_EMAIL' => 'Epost',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Maila alla inbjudna',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Tid för påminnelse',
  'LBL_REMINDER_TITLE' => 'Möte:',
  'LBL_REMOVE' => 'ta bort',
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
  'LBL_SEARCH_FORM_TITLE' => 'Sök möte',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Skicka inbjudan',
  'LBL_SEND_BUTTON_TITLE' => 'Skicka inbjudan [Alt+I]',
  'LBL_SEND_INVITES' => 'Skicka inbjudningar',
  'LBL_SEQUENCE' => 'Mötesuppdaterings sekvens',
  'LBL_START_MEETING' => 'Starta {{meetingType}}',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Ämne:',
  'LBL_SYNCED_RECURRING_MSG' => 'Det här mötet skapades i ett annat system och synkroniserades till Sugar. För att göra ändringar, gå till originalet av mötet i det andra systemet. Ändringar gjorda i det andra systemet synkroniseras till det här protokollet.',
  'LBL_TIME' => 'Start tid:',
  'LBL_TYPE' => 'Mötes typ',
  'LBL_URL' => 'Starta/Delta Möte',
  'LBL_USERS_SUBPANEL_TITLE' => 'Användare',
  'LNK_IMPORT_MEETINGS' => 'Importera möten',
  'LNK_MEETING_LIST' => 'Möten',
  'LNK_NEW_APPOINTMENT' => 'Skapa aktivitet',
  'LNK_NEW_MEETING' => 'Schemalägg möte',
  'NOTICE_DURATION_TIME' => 'Varaktighetstiden måste vara större än 0',
  'NTC_REMOVE_INVITEE' => 'Är du säker på att du vill ta bort den inbjudna från mötet?',
);

