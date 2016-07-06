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
  'ERR_DELETE_RECORD' => 'U dient een recordnummer op te geven om deze afspraak te verwijderen.',
  'LBL_ACCEPT_LINK' => 'Acceptatie-koppeling',
  'LBL_ACCEPT_STATUS' => 'Acceptatiestatus',
  'LBL_ACCEPT_THIS' => 'Accepteren?',
  'LBL_ACCOUNT_NAME' => 'Organisatie',
  'LBL_ACTIVITIES_REPORTS' => 'Activiteitenrapport',
  'LBL_ADD_BUTTON' => 'Toevoegen',
  'LBL_ADD_INVITEE' => 'Uitnodigen',
  'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan:',
  'LBL_CANCEL_CREATE_INVITEE' => 'Annuleren',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Weet u het zeker dat u alle records in de reeks wilt verwijderen?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Personen',
  'LBL_CONTACT_NAME' => 'Contactpersoon:',
  'LBL_CREATED_BY' => 'Gemaakt door',
  'LBL_CREATED_USER' => 'Gebruiker aangemaakt',
  'LBL_CREATE_AND_ADD' => 'Opslaan & toevoegen',
  'LBL_CREATE_CONTACT' => 'Nieuw Persoon',
  'LBL_CREATE_INVITEE' => 'Toevoegen genodigden',
  'LBL_CREATE_LEAD' => 'Nieuwe Lead',
  'LBL_CREATE_MODULE' => 'Plan een afspraak',
  'LBL_CREATOR' => 'Bijeenkomst geïnitieerd door:',
  'LBL_DATE' => 'Aanvangsdatum:',
  'LBL_DATE_END' => 'Einddatum',
  'LBL_DATE_END_ERROR' => 'Einddatum ligt voor de aanvangsdatum',
  'LBL_DATE_TIME' => 'Aanvangsdatum & tijd:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Afspraken',
  'LBL_DEL' => 'Verwijder',
  'LBL_DESCRIPTION' => 'Beschrijving:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beschrijving',
  'LBL_DIRECTION' => 'Richting:',
  'LBL_DISPLAYED_URL' => 'Toon URL',
  'LBL_DURATION' => 'Gespreksduur:',
  'LBL_DURATION_HOURS' => 'Duur (uren):',
  'LBL_DURATION_MINUTES' => 'Duur (minuten):',
  'LBL_EDIT_ALL_RECURRENCES' => 'Wijzig alle herhaalde afspraken',
  'LBL_EMAIL' => 'E-mail',
  'LBL_EMAIL_REMINDER' => 'E-mail herinnering',
  'LBL_EMAIL_REMINDER_SENT' => 'E-mail herinnering verstuurd',
  'LBL_EMAIL_REMINDER_TIME' => 'E-mail herinnering tijd',
  'LBL_EMPTY_SEARCH_RESULT' => 'Helaas werden geen resultaten gevonden. Voeg hieronder aub een genodigde toe.',
  'LBL_ERROR_LAUNCH_MEETING_GENERAL' => 'There was an error launching this meeting. Please contact your Administrator.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Toegewezen aan ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Toegewezen aan',
  'LBL_EXPORT_CREATED_BY' => 'Aangemaakt door ID',
  'LBL_EXPORT_DATE_END' => 'Einddatum en tijd',
  'LBL_EXPORT_DATE_START' => 'Aanvangsdatum en tijd',
  'LBL_EXPORT_DISPLAYED_URL' => 'Getoonde Url',
  'LBL_EXPORT_EXTERNAL_ID' => 'Externe ID',
  'LBL_EXPORT_HOST_URL' => 'Host Url',
  'LBL_EXPORT_JOIN_URL' => 'Url voor deelname',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Gewijzigd door ID',
  'LBL_EXPORT_PARENT_ID' => 'Bovenliggend ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Gerelateerd Type',
  'LBL_EXPORT_REMINDER_TIME' => 'Herinneringstijd (in minuten)',
  'LBL_EXTERNALID' => 'Externe App ID',
  'LBL_EXTNOSTART_HEADER' => 'Fout: Kan de afspraak niet beginnen',
  'LBL_EXTNOSTART_MAIN' => 'U kunt deze afspraak niet starten omdat u geen Administrator bent en ook niet de eigenaar van de bijeenkomst.',
  'LBL_EXTNOT_GO_BACK' => 'Ga terug naar het vorige record',
  'LBL_EXTNOT_HEADER' => 'Fout: Niet uitgenodigd',
  'LBL_EXTNOT_MAIN' => 'U kunt niet deelnemen aan deze bijeenkomst aangezien u niet bent uitgenodigd.',
  'LBL_EXTNOT_RECORD_LINK' => 'Toon afspraak',
  'LBL_FIRST_NAME' => 'Voornaam',
  'LBL_HELP_CREATE' => 'De {{plural_module_name}} module bestaat uit {{meetings_module}} records vastgelegd door gebruikers in uw organisatie. {{plural_module_name}} kunnen de status "Gepland", "Gehouden" of "Niet Gehouden" hebben. 

Sugar gebruikers, contacten of leads kunnen als genodigde worden toegevoegd.

Om een {{meetings_singular_module}} aan te maken: 

1. Vul de velden in met de gewenste waarden. 
- Velden die als "vereist" zijn aangemerkt moeten zijn ingevuld voordat het record wordt opgeslagen. 
- Klik op "Toon Meer" om additionele velden te tonen. 

2. Voeg genodigden toe aan een {{meetings_singular_module}}. 
- Klik op "Selecteer een Genodigde" om een gebruiker, contact of lead aan het {{meetings_singular_module}} toe te voegen. 
- Klik op het plus icoon aan de rechterzijde van "Selecteer een Genodigde" om een {{meetings_singular_module}} genodigde als een nieuwe Sugar record aan te maken.

3. Klik op "Opslaan" om het nieuwe record af te ronden en terug te keren naar de voorgaande pagina. 
- Selecteer "Bewaar en bekijk" om het nieuwe {{meetings_singular_module}} record te openen in record view. 
- Selecteer "Bewaar en maak een nieuw record" om direct een nieuw {{meetings_singular_module}} aan te maken.',
  'LBL_HELP_RECORD' => 'De {{plural_module_name}} module bestaat uit {{meetings_singular_module}} records vastgelegd door gebruikers binnen een organisatie. {{plural_module_name}} kunnen de status "Gepland", "Gehouden" of "Niet Gehouden" hebben. 

Sugar gebruikers, {{contacts_module}} en {{leads_module}} kunnen worden toegevoegd als genodigde.

- Wijzig de velden uit dit record door op een individueel veld te klikken of door de Wijzig button te selecteren. 
- Bekijk of wijzig links met andere records in subpanels door gebruik te maken van de "Data View". 
- Bekijk en voeg comments toe aan de Activity Stream waarin tevens de wijzigingshistorie van het record is in te zien door gebruik te maken van de "Activity Stream View". 
- Volg en markeer dit record als favoriet door de icoontjes rechts naast de record naam te gebruiken. 
- Additionele acties zijn beschikbaar in de "Actions" dropdown rechts naast de Wijzig button.',
  'LBL_HELP_RECORDS' => 'De {{plural_module_name}} module bestaat uit alle afspraken met als status "Gepland", "Gehouden" of "Niet gehouden". Bij geplande afspraken binnen de volgende 24 uur is de start datum blauw gemarkeerd. Bij afspraken die al plaats hadden moeten vinden is de start datum rood gemarkeerd.

In de {{plural_module_name}} list view kun je afspraak details bekijken en via in-line editing bewerken. Additionele acties zijn beschikbaar in het menu aan het eind van elk record. Met de button "Sluiten" in het menu kun je elke geplande afspraak markeren als gehouden.

Sugar gebruikers, contacten en leads kunnen worden toegevoegd als &#39;genodigden&#39;. {{plural_module_name}} kunnen worden aangemaakt via de {{plural_module_name}} module en Agenda module, via import en via de Activiteiten subpanel(s) (voor Legacy modules) of het Geplande Activiteiten Dashlet (voor Sidecar modules) bij gerelateerde module records (Bijv. Contacten, Organisaties etc.), die automatisch een een relatie aanmaakt tussen deze records.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notities',
  'LBL_HOST_EXT_MEETING' => 'Begin bijeenkomst',
  'LBL_HOST_URL' => 'Host URL',
  'LBL_HOURS_ABBREV' => 'uur',
  'LBL_HOURS_MINS' => '(uren/minuten)',
  'LBL_INVITEE' => 'Genodigden',
  'LBL_JOIN_EXT_MEETING' => 'Deelnemen',
  'LBL_JOIN_MEETING' => 'Join {{meetingType}}',
  'LBL_LAST_NAME' => 'Achternaam',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen aan',
  'LBL_LIST_CLOSE' => 'Sluiten',
  'LBL_LIST_CONTACT' => 'Contactpersoon',
  'LBL_LIST_DATE' => 'Aanvangsdatum',
  'LBL_LIST_DATE_MODIFIED' => 'Datum gewijzigd',
  'LBL_LIST_DIRECTION' => 'Richting',
  'LBL_LIST_DUE_DATE' => 'Vervaldatum',
  'LBL_LIST_FORM_TITLE' => 'Afspraken',
  'LBL_LIST_JOIN_MEETING' => 'Deelnemen',
  'LBL_LIST_MY_MEETINGS' => 'Mijn Afspraken',
  'LBL_LIST_RELATED_TO' => 'Gerelateerd aan',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUBJECT' => 'Onderwerp',
  'LBL_LIST_TIME' => 'Aanvangstijd',
  'LBL_LOCATION' => 'Locatie:',
  'LBL_MEETING' => 'Afspraak:',
  'LBL_MEETING_CLOSE_SUCCESS' => 'Afspraak succesvol afgesloten',
  'LBL_MEETING_INFORMATION' => 'Afspraakgegevens',
  'LBL_MINSS_ABBREV' => 'min',
  'LBL_MODIFIED_BY' => 'Gewijzigd door',
  'LBL_MODIFIED_USER' => 'Gebruiker aangepast',
  'LBL_MODULE_NAME' => 'Afspraken',
  'LBL_MODULE_NAME_SINGULAR' => 'Afspraak',
  'LBL_MODULE_TITLE' => 'Afspraken: Start',
  'LBL_MY_SCHEDULED_MEETINGS' => 'Mijn geplande afspraken',
  'LBL_NAME' => 'Naam',
  'LBL_NEW_FORM_TITLE' => 'Nieuwe Afspraak',
  'LBL_NO_ACCESS' => 'U heeft geen toegangsrechten. Neem contact op met de administrator om toegangsrechten te verkrijgen.',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Bovenliggend ID',
  'LBL_PARENT_TYPE' => 'Bovenliggend Type',
  'LBL_PASSWORD' => 'Wachtwoord:',
  'LBL_PHONE' => 'Telefoon (Werk):',
  'LBL_POPUP_REMINDER' => 'Popup Reminder',
  'LBL_POPUP_REMINDER_TIME' => 'Popup Reminder Time',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'U heeft {{moduleSingularLower}} aangemaakt voor {{formatDate date_start}}, maar u heeft geen permissie om het record te bekijken.',
  'LBL_RECORD_SAVED_SUCCESS' => 'U heeft {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> succesvol aangemaakt.',
  'LBL_RECURRENCE' => 'Herhaling',
  'LBL_RECURRING_LIMIT_ERROR' => 'Deze herhaalde afspraak kan niet opgeslagen worden, omdat het maximale toegestane aantal ($limit) herhaalde afspraken overschreden wordt.',
  'LBL_RECURRING_SOURCE' => 'Bron Herhaling',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Afgesproken met {{{this}}}',
  'LBL_RELATED_TO' => 'Gerelateerd aan:',
  'LBL_REMINDER' => 'Herinnering:',
  'LBL_REMINDER_EMAIL' => 'E-mail',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-mail alle genodigden',
  'LBL_REMINDER_POPUP' => 'Pop-up',
  'LBL_REMINDER_TIME' => 'Herinneringstijd',
  'LBL_REMINDER_TITLE' => 'Afspraak:',
  'LBL_REMOVE' => 'verwijderen',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Verwijder alle herhaalde afspraken',
  'LBL_REPEAT_COUNT' => 'Aantal herhalingen',
  'LBL_REPEAT_DOW' => 'Op',
  'LBL_REPEAT_END' => 'Einde',
  'LBL_REPEAT_END_AFTER' => 'Na',
  'LBL_REPEAT_END_BY' => 'Tot',
  'LBL_REPEAT_INTERVAL' => 'Herhalingsinterval',
  'LBL_REPEAT_OCCURRENCES' => 'herhalingen',
  'LBL_REPEAT_PARENT_ID' => 'Herhaal Bovenliggend ID',
  'LBL_REPEAT_TYPE' => 'Herhalingstype',
  'LBL_REPEAT_UNTIL' => 'Herhalen tot',
  'LBL_REVENUELINEITEMS' => 'Opportunityregels',
  'LBL_SCHEDULING_FORM_TITLE' => 'Inplannen',
  'LBL_SEARCH_BUTTON' => 'Zoeken',
  'LBL_SEARCH_FORM_TITLE' => 'Afspraak zoeken',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Sla op & verstuur uitnodiging',
  'LBL_SEND_BUTTON_TITLE' => 'Sla op & verstuur uitnodiging [ALT+I]',
  'LBL_SEND_INVITES' => 'Verstuur uitnodigingen',
  'LBL_SEQUENCE' => 'Volgorde bijwerken Afspraak',
  'LBL_START_MEETING' => 'Start {{meetingType}}',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Onderwerp:',
  'LBL_SYNCED_RECURRING_MSG' => 'Deze afspraak is in een ander systeem gemaakt en is gesynchroniseerd naar Sugar. U kunt deze afspraak daar wijzigen en opnieuw synchroniseren met deze afspraak.',
  'LBL_TIME' => 'Aanvangstijd:',
  'LBL_TYPE' => 'Type Afspraak',
  'LBL_URL' => 'Start/Deelnemen',
  'LBL_USERS_SUBPANEL_TITLE' => 'Gebruikers',
  'LNK_IMPORT_MEETINGS' => 'Importeer Afspraken',
  'LNK_MEETING_LIST' => 'Bekijk Afspraken',
  'LNK_NEW_APPOINTMENT' => 'Nieuwe Afspraak',
  'LNK_NEW_MEETING' => 'Nieuwe Afspraak',
  'NOTICE_DURATION_TIME' => 'De tijdsduur moet groter zijn dan 0',
  'NTC_REMOVE_INVITEE' => 'Wilt u zeker dat u deze genodigde voor deze afspraak wilt verwijderen?',
);

