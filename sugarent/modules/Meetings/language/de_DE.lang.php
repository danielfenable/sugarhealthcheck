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
  'ERR_DELETE_RECORD' => 'Die Datensatznummer muß angegeben werden, um diesen Eintrag löschen.',
  'LBL_ACCEPT_LINK' => 'Link annehmen',
  'LBL_ACCEPT_STATUS' => 'Status annehmen',
  'LBL_ACCEPT_THIS' => 'Bestätigen?',
  'LBL_ACCOUNT_NAME' => 'Firma',
  'LBL_ACTIVITIES_REPORTS' => 'Aktivitäten Reports',
  'LBL_ADD_BUTTON' => 'Hinzufügen',
  'LBL_ADD_INVITEE' => 'Teilnehmer hinzufügen',
  'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an:',
  'LBL_CANCEL_CREATE_INVITEE' => 'Abbrechen',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Wollen Sie wirklich alle Serientermine',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_CREATED_BY' => 'Erstellt von:',
  'LBL_CREATED_USER' => 'Erstellter Benutzer',
  'LBL_CREATE_AND_ADD' => 'Erstellen und hinzufügen',
  'LBL_CREATE_CONTACT' => 'Neuer Kontakt',
  'LBL_CREATE_INVITEE' => 'Eingeladener erstellen',
  'LBL_CREATE_LEAD' => 'Neuer Interessent',
  'LBL_CREATE_MODULE' => 'Neues Meeting',
  'LBL_CREATOR' => 'Meeting Erfasser',
  'LBL_DATE' => 'Startdatum:',
  'LBL_DATE_END' => 'Enddatum',
  'LBL_DATE_END_ERROR' => 'Enddatum liegt vor dem Stardatum',
  'LBL_DATE_TIME' => 'Startdatum und -zeit:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Meetings',
  'LBL_DEL' => 'Löschen',
  'LBL_DESCRIPTION' => 'Beschreibung:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beschreibungsinformation',
  'LBL_DIRECTION' => 'Richtung:',
  'LBL_DISPLAYED_URL' => 'Anzeige URL',
  'LBL_DURATION' => 'Dauer:',
  'LBL_DURATION_HOURS' => 'Stunden:',
  'LBL_DURATION_MINUTES' => 'Minuten:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Alle Ereignisse bearbeieten',
  'LBL_EMAIL' => 'E-Mail',
  'LBL_EMAIL_REMINDER' => 'E-Mail Erinnerung',
  'LBL_EMAIL_REMINDER_SENT' => 'E-Mail Erinnerung geschickt',
  'LBL_EMAIL_REMINDER_TIME' => 'E-Mail Erinnerungszeit',
  'LBL_EMPTY_SEARCH_RESULT' => 'Leider keine Ergebnisse gefunden, Bitte ein neuer Eingeladender erstellen',
  'LBL_ERROR_LAUNCH_MEETING_GENERAL' => 'Beim Starten dieses Meetings ist ein Fehler aufgetreten. Bitte kontaktieren Sie Ihren Administrator.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Zugewiesen an',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Zugewiesen an',
  'LBL_EXPORT_CREATED_BY' => 'Ersteller',
  'LBL_EXPORT_DATE_END' => 'Enddatum und -zeit',
  'LBL_EXPORT_DATE_START' => 'Startdatum und -zeit',
  'LBL_EXPORT_DISPLAYED_URL' => 'Angezeigte URL',
  'LBL_EXPORT_EXTERNAL_ID' => 'Externer ID',
  'LBL_EXPORT_HOST_URL' => 'Host URL',
  'LBL_EXPORT_JOIN_URL' => 'Join URL',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Bearbeiter:',
  'LBL_EXPORT_PARENT_ID' => 'Eltern ID:',
  'LBL_EXPORT_PARENT_TYPE' => 'Verknüpfter Typ',
  'LBL_EXPORT_REMINDER_TIME' => 'Erinnerungszeit (in Minuten)',
  'LBL_EXTERNALID' => 'Externe App ID',
  'LBL_EXTNOSTART_HEADER' => 'Fehler: Meeting kann nicht gestartet werden.',
  'LBL_EXTNOSTART_MAIN' => 'Sie können diesem Meeting nicht starten, da Sie weder der Meetingbesitzer noch Administrator sind.',
  'LBL_EXTNOT_GO_BACK' => 'Gehe zurück',
  'LBL_EXTNOT_HEADER' => 'Fehler: nicht eingeladen',
  'LBL_EXTNOT_MAIN' => 'Sie können an diesem Meeting nicht teilnehmen, das Sie nicht eingeladen sind.',
  'LBL_EXTNOT_RECORD_LINK' => 'Meeting anschauen',
  'LBL_FIRST_NAME' => 'Vorname',
  'LBL_HELP_CREATE' => 'Das Modul {{plural_module_name}} besteht aus {{meetings_module}} Einträgen, die von Benutzern in Ihrer Organisation protokolliert wurden. {{plural_module_name}} kann sich im Status "Geplant", "Durchgeführt" oder "Storniert" befinden. Sugar-Benutzer sowie {{contacts_module}} und {{leads_module}} können als Eingeladene hinzugefügt werden.

Um {{meetings_singular_module}} zu erstellen: 
1. Geben Sie für alle Felder nach Wunsch Werte ein.
 - Felder, die als "Pflichtfeld" markiert sind, müssen vor dem Speichern ausgefüllt werden.
 - Klicken Sie auf "Mehr anzeigen", um bei Bedarf weitere Felder anzuzeigen. 
2. Fügen Sie Eingeladene zu {{meetings_Singular_module}} hinzu.
    - Klicken Sie auf "Teilnehmer auswählen", um einen bestehenden Benutzer, Kontakt oder Interessent zu {{meetings_singular_module}} hinzuzufügen.
    - Klicken Sie auf das Plus-Icon rechts von "Teilnehmer auswählen", um einen {{meetings_singular_module}} Teilnehmer als neuen Sugar-Eintrag hinzuzufügen.
3. Klicken Sie auf "Speichern", um den neuen Eintrag fertigzustellen und zur vorhergehenden Seite zurückzukehren.
    - Wählen Sie "Speichern und anzeigen", um das neue Meeting in der Eintragsansicht anzuzeigen.
   - Wählen Sie "Speichern und Neues erstellen", um sofort ein weiteres neues {{meetings_singular_module}} zu erstellen.',
  'LBL_HELP_RECORD' => 'Das Modul {{plural_module_name}} besteht aus {{meetings_singular_module}} Einträgen, die von Benutzern in Ihrer Organisation protokolliert wurden. {{plural_module_name}} kann sich im Status "Geplant", "Durchgeführt" oder "Storniert" befinden. Sugar-Benutzer sowie {{contacts_module}} und {{leads_module}} können als Eingeladene hinzugefügt werden..
- Bearbeiten Sie die Felder dieses Eintrags, indem Sie auf ein Feld klicken oder auf die Schaltfläche Bearbeiten.
- Zeigen Sie Links zu anderen Einträgen an oder ändern Sie sie, indem Sie das Fenster unten links zu "Datenansicht" wechseln.
- Kommentieren Sie oder betrachten Sie Benutzerkommentare und den Eintragsänderungsverlauf im Aktivitäts-Stream, indem Sie das Fenster unten links zu "Aktivitäts-Stream" wechseln.
- Folgen Sie diesem Eintrag oder markieren Sie ihn als Favoriten mit den Icons rechts vom Eintragsnamen.
- Weitere Aktionen sind im Dropdown-Menü Aktionen rechts von der Schaltfläche Bearbeiten verfügbar.',
  'LBL_HELP_RECORDS' => 'Das Modul {{plural_module_name}} besteht aus Meeting-Einträgen, die sich im Status "Geplant", "Durchgeführt" oder "Storniert" befinden können. Bei anstehenden Meetings, die innerhalb der nächsten 24 Stunden geplant sind, wird das Startdatum blau markiert. Bei überfälligen Meetings wird das Startdatum in rot angezeigt.

In dieser Listenansicht {{plural_module_name}} können Sie Meeting-Information anzeigen und bearbeiten. Weitere Aktionen sind im Menü am Ende jeder Meeting-Zeile verfügbar. Sie können im Menü in jeder Zeile eines geplanten Meetings "Schließen" auswählen, um es als Durchgeführt zu markieren.

Sugar-Benutzer, Kontakte und Interessenten können als Meeting-Eingeladene hinzugefügt werden. {{plural_module_name}} kann über das Modul {{plural_module_name}}, das Kalender-Modul bzw. über Importieren erstellt werden, sowie über das Aktivitäten-Fenster (für ältere Module) oder das Dashlet Geplante Aktivitäten (für Sidecar-Module) in den dazugehörigen Moduleinträgen (z. B. Kontakte, Konten usw.), wodurch automatisch eine Beziehung zwischen den beiden Einträgen erstellt wird.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notizen',
  'LBL_HOST_EXT_MEETING' => 'Meeting starten',
  'LBL_HOST_URL' => 'Host URL',
  'LBL_HOURS_ABBREV' => 'St.',
  'LBL_HOURS_MINS' => '(Stunden/Minuten)',
  'LBL_INVITEE' => 'Teilnehmer',
  'LBL_JOIN_EXT_MEETING' => 'An Meeting teilnehmen',
  'LBL_JOIN_MEETING' => 'An {{meetingType}} teilnehmen',
  'LBL_LAST_NAME' => 'Nachname',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interessenten',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugew. Benutzer',
  'LBL_LIST_CLOSE' => 'Schließen',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_DATE' => 'Startdatum',
  'LBL_LIST_DATE_MODIFIED' => 'Geändert am',
  'LBL_LIST_DIRECTION' => 'Richtung',
  'LBL_LIST_DUE_DATE' => 'Fällig am',
  'LBL_LIST_FORM_TITLE' => 'Meetingliste',
  'LBL_LIST_JOIN_MEETING' => 'An Meeting teilnehmen',
  'LBL_LIST_MY_MEETINGS' => 'Meine Meetings',
  'LBL_LIST_RELATED_TO' => 'Gehört zu',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUBJECT' => 'Betreff',
  'LBL_LIST_TIME' => 'Startzeit',
  'LBL_LOCATION' => 'Ort:',
  'LBL_MEETING' => 'Meeting:',
  'LBL_MEETING_CLOSE_SUCCESS' => 'Termine wurden erfolgreich geschlossen.',
  'LBL_MEETING_INFORMATION' => 'Übersicht Meetings',
  'LBL_MINSS_ABBREV' => 'min',
  'LBL_MODIFIED_BY' => 'Geändert von',
  'LBL_MODIFIED_USER' => 'Veränderter Benutzer',
  'LBL_MODULE_NAME' => 'Meetings',
  'LBL_MODULE_NAME_SINGULAR' => 'Sitzung:',
  'LBL_MODULE_TITLE' => 'Meetings: Home',
  'LBL_MY_SCHEDULED_MEETINGS' => 'Meine geplanten Meetings',
  'LBL_NAME' => 'Name',
  'LBL_NEW_FORM_TITLE' => 'Neuer Termin',
  'LBL_NO_ACCESS' => 'Sie haben keine Rechte das Modul $module zu erstellen',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Eltern ID:',
  'LBL_PARENT_TYPE' => 'Eltern-Typ',
  'LBL_PASSWORD' => 'Meeting Passwort',
  'LBL_PHONE' => 'Telefon Büro:',
  'LBL_POPUP_REMINDER' => 'Popup-Erinnerung',
  'LBL_POPUP_REMINDER_TIME' => 'Popup-Erinnerungszeit',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Sie haben {{moduleSingularLower}} für {{formatDate date_start}} geplant, aber Sie haben keine Berechtigung für den Zugriff.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Sie haben {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> für {{formatDate date_start}} geplant.',
  'LBL_RECURRENCE' => 'Ereignis',
  'LBL_RECURRING_LIMIT_ERROR' => 'Dieses wiederkommende Meeting kann nicht angesetzt werden, weil es die maximal erlaubten vorkommnisse von $limit überschreitet.',
  'LBL_RECURRING_SOURCE' => 'Wiederholquelle',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Meeting mit {{{this}}}',
  'LBL_RELATED_TO' => 'Bezieht sich auf:',
  'LBL_REMINDER' => 'Erinnerung:',
  'LBL_REMINDER_EMAIL' => 'E-Mail',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-Mail an alle Eingeladenen',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Erinnerungs Zeitpunkt',
  'LBL_REMINDER_TITLE' => 'Meeting:',
  'LBL_REMOVE' => 'Entfernen',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Alle Ereignisse entfernen',
  'LBL_REPEAT_COUNT' => 'Wiederholanzahl',
  'LBL_REPEAT_DOW' => 'Am Kalendertag wiederholen',
  'LBL_REPEAT_END' => 'Ende',
  'LBL_REPEAT_END_AFTER' => 'nach',
  'LBL_REPEAT_END_BY' => 'Nach',
  'LBL_REPEAT_INTERVAL' => 'Wiederholintervall',
  'LBL_REPEAT_OCCURRENCES' => 'Ereignisse',
  'LBL_REPEAT_PARENT_ID' => 'Wiederhole Eltern-ID',
  'LBL_REPEAT_TYPE' => 'Wiederholtyp',
  'LBL_REPEAT_UNTIL' => 'Wiederholen bis',
  'LBL_REVENUELINEITEMS' => 'Umsatzposten',
  'LBL_SCHEDULING_FORM_TITLE' => 'Planung',
  'LBL_SEARCH_BUTTON' => 'Suchen',
  'LBL_SEARCH_FORM_TITLE' => 'Meetings Suche',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Einladungen senden',
  'LBL_SEND_BUTTON_TITLE' => 'Einladungen senden [Alt-I]',
  'LBL_SEND_INVITES' => 'Einladungen senden',
  'LBL_SEQUENCE' => 'Meeting Update Reihenfolge',
  'LBL_START_MEETING' => '{{meetingType}} starten',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Betreff:',
  'LBL_SYNCED_RECURRING_MSG' => 'Dieses Meeting wurde in einem anderem System erstellt und wurde nach Sugar synchronisiert. Um es zu ändern, öffnen Sie das original meeting im anderen System und ändern Sie es dort. Änderungen können dann wieder synchronisiert werden.',
  'LBL_TIME' => 'Beginn:',
  'LBL_TYPE' => 'Meetingtyp',
  'LBL_URL' => 'Meeting anfangen/teilnehmen',
  'LBL_USERS_SUBPANEL_TITLE' => 'Benutzer',
  'LNK_IMPORT_MEETINGS' => 'Meetings importieren',
  'LNK_MEETING_LIST' => 'Meetings',
  'LNK_NEW_APPOINTMENT' => 'Neuer Termin',
  'LNK_NEW_MEETING' => 'Neues Meeting',
  'NOTICE_DURATION_TIME' => 'Zeitdauer muss größer als 0 sein',
  'NTC_REMOVE_INVITEE' => 'Möchten Sie diesen Teilnehmer wirklich aus diesem Meeting entfernen?',
);

