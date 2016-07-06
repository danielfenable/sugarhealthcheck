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
  'ERR_DELETE_RECORD' => 'U dient een recordnummer op te geven om deze organisatie te verwijderen.',
  'LBL_ACCEPT_LINK' => 'Acceptatie Link',
  'LBL_ACCEPT_STATUS' => 'Acceptatiestatus',
  'LBL_ACCOUNT_NAME' => 'Organisatie',
  'LBL_ACTIVITIES_REPORTS' => 'Activiteitenrapport',
  'LBL_ADD_BUTTON' => 'Toevoegen',
  'LBL_ADD_INVITEE' => 'Uitnodigen',
  'LBL_ASSIGNED_TO_ID' => 'Toegewezen aan',
  'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
  'LBL_BLANK' => '-leeg-',
  'LBL_CALL' => 'Telefoongesprek:',
  'LBL_CALL_INFORMATION' => 'Overzicht',
  'LBL_CANCEL_CREATE_INVITEE' => 'Annuleren',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Weet u het zeker dat u alle records in de reeks wilt verwijderen?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Personen',
  'LBL_CONTACT_NAME' => 'Contactpersoon:',
  'LBL_CREATE_AND_ADD' => 'Nieuw & Toevoegen',
  'LBL_CREATE_CONTACT' => 'Als Persoon',
  'LBL_CREATE_INVITEE' => 'Uitnodigen',
  'LBL_CREATE_LEAD' => 'Als Lead',
  'LBL_CREATE_MODULE' => 'Vastleggen Telefoongesprek',
  'LBL_DATE' => 'Begindatum:',
  'LBL_DATE_END' => 'Einddatum',
  'LBL_DATE_END_ERROR' => 'Einddatum ligt voor de Startdatum',
  'LBL_DATE_TIME' => 'Begindatum & tijd:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Telefoongesprekken',
  'LBL_DEL' => 'Verwijderen',
  'LBL_DESCRIPTION' => 'Beschrijving:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beschrijving',
  'LBL_DIRECTION' => 'Richting:',
  'LBL_DURATION' => 'Gespreksduur:',
  'LBL_DURATION_HOURS' => 'Duur (uren):',
  'LBL_DURATION_MINUTES' => 'Duur (minuten):',
  'LBL_EDIT_ALL_RECURRENCES' => 'Wijzig alle herhaalde afspraken',
  'LBL_EMAIL' => 'E-mail',
  'LBL_EMAIL_REMINDER' => 'E-mail Reminder',
  'LBL_EMAIL_REMINDER_SENT' => 'E-mail reminder verstuurd',
  'LBL_EMAIL_REMINDER_TIME' => 'E-mail Reminder Tijd',
  'LBL_EMPTY_SEARCH_RESULT' => 'Helaas werden geen resultaten gevonden. Voeg hieronder aub een gast toe.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Toegewezen aan ID',
  'LBL_EXPORT_CREATED_BY' => 'Aangemaakt door ID',
  'LBL_EXPORT_DATE_START' => 'Startdatum en tijd',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Gewijzigd door ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Gerelateerd aan Module',
  'LBL_EXPORT_REMINDER_TIME' => 'Reminder Tijd (in minuten)',
  'LBL_FIRST_NAME' => 'Voornaam',
  'LBL_HELP_CREATE' => 'De {{plural_module_name}} module bestaat uit {{calls_singular_module}} records vastgelegd door gebruikers in uw organisatie. {{plural_module_name}} kunnen de status "Gepland", "Gehouden" of "Niet Gehouden" hebben. 

Sugar gebruikers, contacten of leads kunnen als genodigde worden toegevoegd.

Om een {{calls_singular_module}} aan te maken: 

1. Vul de velden in met de gewenste waarden. 
- Velden die als "vereist" zijn aangemerkt moeten zijn ingevuld voordat het record wordt opgeslagen. 
- Klik op "Toon Meer" om additionele velden te tonen. 

2. Voeg genodigden toe aan een {{calls_singular_module}}. 
- Klik op "Selecteer een Genodigde" om een gebruiker, contact of lead aan het {{calls_singular_module}} toe te voegen. 
- Klik op het plus icoon aan de rechterzijde van "Selecteer een Genodigde" om een {{calls_singular_module}} genodigde als een nieuwe Sugar record aan te maken.

3. Klik op "Opslaan" om het nieuwe record af te ronden en terug te keren naar de voorgaande pagina. 
- Selecteer "Bewaar en bekijk" om het nieuwe {{calls_singular_module}} record te openen in record view. 
- Selecteer "Bewaar en maak een nieuw record" om direct een nieuw {{calls_singular_module}} aan te maken.',
  'LBL_HELP_RECORD' => 'De {{plural_module_name}} module bestaat uit {{calls_singular_module}} records vastgelegd door gebruikers binnen een organisatie. {{plural_module_name}} kunnen de status "Gepland", "Gehouden" of "Niet Gehouden" hebben. SugarCRM gebruikers, {{contacts_module}} en {{leads_module}} kunnen worden toegevoegd als genodigde. - Wijzig de velden uit dit record door op een individueel veld te klikken of door de Wijzig button te selecteren. - Bekijk of wijzig links met andere records in subpanels door gebruik te maken van de "Data View". - Bekijk en voeg comments toe aan de Activity Stream waarin tevens de wijzigingshistorie van het record is in te zien door gebruik te maken van de "Activity Stream View". - Volg en markeer dit record als favoriet door de icoontjes rechts naast de record naam te gebruiken. - Additionele acties zijn beschikbaar in de "Actions" dropdown rechts naast de Wijzig button.',
  'LBL_HELP_RECORDS' => 'De {{plural_module_name}} module bestaat uit alle telefoongesprekken met als status "Gepland", "Gehouden" of "Niet gehouden". Bij geplande telefoongesprekken binnen de volgende 24 uur is de start datum blauw gemarkeerd. Bij telefoongesprekken die al plaats hadden moeten vinden is de start datum rood gemarkeerd.

In de {{plural_module_name}} list view kun je gespreksinformatie bekijken en via in-line editing bewerken. Additionele acties zijn beschikbaar in het menu aan het eind van elk record. Met de button "Sluiten" in het menu kun je elk gepland telefoongesprek markeren als gehouden.

Sugar gebruikers, contacten en leads kunnen worden toegevoegd als &#39;genodigden&#39;. {{plural_module_name}} kunnen worden aangemaakt via de {{plural_module_name}} module en Agenda module, via import en via de Activiteiten subpanel(s) (voor Legacy modules) of het Geplande Activiteiten Dashlet (voor Sidecar modules) bij gerelateerde module records (Bijv. Contacten, Organisaties etc.), die automatisch een een relatie aanmaakt tussen deze records.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notities',
  'LBL_HOURS_ABBREV' => 'uur',
  'LBL_HOURS_MINUTES' => '(uren/minuten)',
  'LBL_INVITEE' => 'Genodigden',
  'LBL_LAST_NAME' => 'Achternaam',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen aan',
  'LBL_LIST_CLOSE' => 'Sluiten',
  'LBL_LIST_CONTACT' => 'Contactpersoon',
  'LBL_LIST_DATE' => 'Begindatum',
  'LBL_LIST_DIRECTION' => 'Richting',
  'LBL_LIST_DURATION' => 'Gespreksduur',
  'LBL_LIST_FORM_TITLE' => 'Telefoongesprekken',
  'LBL_LIST_MY_CALLS' => 'Mijn Telefoongesprekken',
  'LBL_LIST_RELATED_TO' => 'Gerelateerd aan',
  'LBL_LIST_RELATED_TO_ID' => 'Gerelateerd aan ID',
  'LBL_LIST_SUBJECT' => 'Onderwerp',
  'LBL_LIST_TIME' => 'Aanvangstijd',
  'LBL_LOG_CALL' => 'Log Oproep',
  'LBL_MEMBER_OF' => 'Lid van',
  'LBL_MINSS_ABBREV' => 'min',
  'LBL_MODULE_NAME' => 'Telefoongesprekken',
  'LBL_MODULE_NAME_SINGULAR' => 'Telefoongesprek',
  'LBL_MODULE_TITLE' => 'Telefoongesprekken: Start',
  'LBL_MY_SCHEDULED_CALLS' => 'Mijn geplande Telefoongesprekken',
  'LBL_NAME' => 'Naam',
  'LBL_NEW_FORM_TITLE' => 'Nieuw Telefoongesprek',
  'LBL_NO_ACCESS' => 'U heeft geen toegang om $module te maken',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Bovenliggende ID',
  'LBL_PHONE' => 'Telefoon',
  'LBL_POPUP_REMINDER_TIME' => 'Popup tijd ter herinnering',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'U heeft {{moduleSingularLower}} aangemaakt voor {{formatDate date_start}}, maar u heeft geen permissie om het record te bekijken.',
  'LBL_RECORD_SAVED_SUCCESS' => 'U heeft {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> succesvol aangemaakt.',
  'LBL_RECURRENCE' => 'Herhaling',
  'LBL_RECURRING_LIMIT_ERROR' => 'Deze herhaalde afspraak kan niet opgeslagen worden, omdat het maximale toegestane aantal ($limit) herhaalde afspraken overschreven wordt.',
  'LBL_RECURRING_SOURCE' => 'Bron Herhaling',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Gesproken met {{{this}}}',
  'LBL_RELATED_TO' => 'Gerelateerd aan:',
  'LBL_REMINDER' => 'Herinnering:',
  'LBL_REMINDER_EMAIL' => 'E-mail',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-Mail alle genodigden',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Remindertijd',
  'LBL_REMINDER_TITLE' => 'Telefoongesprek:',
  'LBL_REMOVE' => 'Verwijderen',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Verwijder alle herhaalde afspraken',
  'LBL_REPEAT_COUNT' => 'Aantal Herhalingen',
  'LBL_REPEAT_DOW' => 'Herhaling',
  'LBL_REPEAT_END' => 'Einde',
  'LBL_REPEAT_END_AFTER' => 'Na',
  'LBL_REPEAT_END_BY' => 'Door',
  'LBL_REPEAT_INTERVAL' => 'Herhalingsinterval',
  'LBL_REPEAT_OCCURRENCES' => 'Herhalingen',
  'LBL_REPEAT_PARENT_ID' => 'Herhaal Bovenliggend ID',
  'LBL_REPEAT_TYPE' => 'Herhalingstype',
  'LBL_REPEAT_UNTIL' => 'Herhalen tot',
  'LBL_REVENUELINEITEMS' => 'Opportunityregels',
  'LBL_SCHEDULING_FORM_TITLE' => 'Inplannen',
  'LBL_SEARCH_BUTTON' => 'Zoeken',
  'LBL_SEARCH_FORM_TITLE' => 'Telefoongesprek zoeken',
  'LBL_SELECT_FROM_DROPDOWN' => 'Selecteer aub uit de gerelateerde keuzelijst.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Opslaan & Versturen Uitnodigingen',
  'LBL_SEND_BUTTON_TITLE' => 'Verstuur Uitnodigingen [ALT+I]',
  'LBL_SEND_INVITES' => 'Verstuur Uitnodigingen',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Onderwerp:',
  'LBL_SYNCED_RECURRING_MSG' => 'Deze afspraak is in een ander systeem gemaakt en is gesynchroniseerd naar Sugar. U kunt deze afspraak daar wijzigen en opnieuw synchroniseren met deze afspraak.',
  'LBL_TIME' => 'Aanvangstijd:',
  'LBL_TIME_END' => 'Eindtijd',
  'LBL_USERS_SUBPANEL_TITLE' => 'Gebruikers',
  'LNK_CALL_LIST' => 'Telefoongesprekken',
  'LNK_IMPORT_CALLS' => 'Importeer Gesprekken',
  'LNK_NEW_ACCOUNT' => 'Nieuwe Organisatie',
  'LNK_NEW_APPOINTMENT' => 'Nieuwe Afspraak',
  'LNK_NEW_CALL' => 'Nieuw Telefoongesprek',
  'LNK_NEW_MEETING' => 'Nieuwe Afspraak',
  'LNK_NEW_OPPORTUNITY' => 'Nieuwe Opportunity',
  'LNK_SELECT_ACCOUNT' => 'Kies een Organisatie',
  'NOTICE_DURATION_TIME' => 'Tijdsduur moet groter zijn dan 0',
  'NTC_REMOVE_INVITEE' => 'Weet u zeker dat u deze uitgenodigde persoon wilt verwijderen bij dit telefoongesprek?',
  'TPL_CALL_STATUS_CHANGED' => 'Telefoongesprek gemarkeerd als {{status}}.',
);

