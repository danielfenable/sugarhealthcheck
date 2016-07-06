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
  'ERR_DELETE_RECORD' => 'Um diese Firma zu löschen, muss eine Datensatznummer angegeben werden.',
  'LBL_ACCEPT_LINK' => 'Link annehmen',
  'LBL_ACCEPT_STATUS' => 'Status annehmen',
  'LBL_ACCOUNT_NAME' => 'Firma',
  'LBL_ACTIVITIES_REPORTS' => 'Aktivitäten Reports',
  'LBL_ADD_BUTTON' => 'Hinzufügen',
  'LBL_ADD_INVITEE' => 'Teilnehmer hinzufügen',
  'LBL_ASSIGNED_TO_ID' => 'Zugew. Benutzer',
  'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
  'LBL_BLANK' => '-leer-',
  'LBL_CALL' => 'Anruf:',
  'LBL_CALL_INFORMATION' => 'Übersicht Anrufe',
  'LBL_CANCEL_CREATE_INVITEE' => 'Abbrechen [Alt+X]',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Wollen Sie wirklich alle Serientermine löschen?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_CREATE_AND_ADD' => 'Erstellen und hinzufügen',
  'LBL_CREATE_CONTACT' => 'Neuer Kontakt',
  'LBL_CREATE_INVITEE' => 'Eingeladener erstellen',
  'LBL_CREATE_LEAD' => 'Neuer Interessent',
  'LBL_CREATE_MODULE' => 'Neuer Anruf',
  'LBL_DATE' => 'Startdatum:',
  'LBL_DATE_END' => 'Enddatum',
  'LBL_DATE_END_ERROR' => 'Enddatum liegt vor dem Stardatum',
  'LBL_DATE_TIME' => 'Startdatum und -zeit:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Anrufe',
  'LBL_DEL' => 'Löschen',
  'LBL_DESCRIPTION' => 'Beschreibung:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beschreibungsinformation',
  'LBL_DIRECTION' => 'Richtung:',
  'LBL_DURATION' => 'Dauer:',
  'LBL_DURATION_HOURS' => 'Stunden:',
  'LBL_DURATION_MINUTES' => 'Minuten:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Alle Ereignisse bearbeieten',
  'LBL_EMAIL' => 'E-Mail',
  'LBL_EMAIL_REMINDER' => 'E-Mail Erinnerung',
  'LBL_EMAIL_REMINDER_SENT' => 'E-Mail Erinnerung geschickt',
  'LBL_EMAIL_REMINDER_TIME' => 'E-Mail Erinnerungszeit',
  'LBL_EMPTY_SEARCH_RESULT' => 'Leider keine Ergebnisse gefunden, Bitte ein neuer Eingeladender erstellen',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Zugewiesen an',
  'LBL_EXPORT_CREATED_BY' => 'Ersteller',
  'LBL_EXPORT_DATE_START' => 'Startdatum und -zeit',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Bearbeiter:',
  'LBL_EXPORT_PARENT_TYPE' => 'Verknüpft mit Modul',
  'LBL_EXPORT_REMINDER_TIME' => 'Erinnerungszeit (in Minuten)',
  'LBL_FIRST_NAME' => 'Vorname',
  'LBL_HELP_CREATE' => 'Das Modul {{plural_module_name}} besteht aus {{calls_singular_module}} Einträgen, die von Benutzern Ihrer Organisation protokolliert wurden. {{plural_module_name}} kann sich im Status "Geplant", "Durchgeführt" oder "Storniert" befinden. Sugar-Benutzer sowie Kontake und Interessenten können als Eingeladene hinzugefügt werden.

Um {{calls_singular_module}} zu erstellen: 
1. Geben Sie für alle Felder nach Wunsch Werte ein.
 - Felder, die als "Pflichtfeld" markiert sind, müssen vor dem Speichern ausgefüllt werden.
 - Klicken Sie auf "Mehr anzeigen", um bei Bedarf weitere Felder anzuzeigen. 
2. Fügen Sie Eingeladene zu {{calls_singular_module}} hinzu.
    - Klicken Sie auf "Teilnehmer auswählen", um einen bestehenden Benutzer, Kontakt oder Interessent zu {{calls_singular_module}} hinzuzufügen.
    - Klicken Sie auf das Plus-Icon rechts von "Teilnehmer auswählen", um einen {{calls_singular_module}} Teilnehmer als neuen Sugar-Eintrag hinzuzufügen.
3. Klicken Sie auf "Speichern", um den neuen Eintrag fertigzustellen und zur vorhergehenden Seite zurückzukehren.
    - Wählen Sie "Speichern und anzeigen", um den neuen {{calls_singular_module}} in der Eintragsansicht anzuzeigen.
   - Wählen Sie "Speichern und Neuen erstellen", um sofort einen weiteren neuen {{calls_singular_module}} zu erstellen.',
  'LBL_HELP_RECORD' => 'Das Modul {{plural_module_name}} besteht aus {{calls_singular_module}} Einträgen, die von Benutzern in Ihrer Organisation protokolliert wurden. {{plural_module_name}} kann sich im Status "Geplant", "Durchgeführt" oder "Storniert" befinden. Sugar-Benutzer sowie {{contacts_module}} und {{leads_module}} können als Eingeladene hinzugefügt werden..
- Bearbieten Sie die Felder dieses Eintrags, indem Sie auf ein Feld klicken oder auf die Schaltfläche Bearbeiten.
- Zeigen Sie Links zu anderen Einträgen an oder ändern Sie sie, indem Sie das Fenster unten links zu "Datenansicht" wechseln.
- Kommentieren Sie oder betrachten Sie Benutzerkommentare und den Eintragsänderungsverlauf im Aktivitäts-Stream, indem Sie das Fenster unten links zu "Aktivitäts-Stream" wechseln.
- Folgen Sie diesem Eintrag oder markieren Sie ihn als Favorite mit den Icons rechts vom Eintragsnamen.
- Weitere Aktionen sind im Dropdown-Menü Aktionen rechts von der Schaltfläche Bearbeiten verfügbar.',
  'LBL_HELP_RECORDS' => 'Das Modul {{plural_module_name}} besteht aus Anrufeinträgen, die sich im Status "Geplant", "Durchgeführt" oder "Storniert" befinden können. Bei anstehenden Anrufen, die für die nächsten 24 Stunden geplant sind, wird das Startdatum blau markiert. Bei überfälligen Anrufen wird das Startdatum rot markiert. In dieser Listenansicht {{plural_module_name}} können Sie Anrufinformationen anzeigen und bearbeiten. Weitere Aktionen sind im Menü am Ende jeder Anrufzeile verfügbar. Sie können im Menü "Schließen" für jeden geplanten Anruf auswählen, um ihn als "Durchgeführt" zu markieren.

Sugar-Benutzer, Kontakte und Interessenten können als Anrufeingeladene hinzugefügt werden. {{plural_module_name}} kann über das Modul {{plural_module_name}}, Kalender-Modul erstellt bzw. importiert werden, sowie über das Aktivitäten-Unterfenster (für ältere Module) oder das Dashlet Geplante Aktivitäten (für Sidecar-Module) in den dazugehörigen Moduleinträgen (z. B. Kontakte, Konten usw.) erstellt werden, wodurch automatisch eine Beziehung zwischen beiden Einträgen erstellt wird.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notizen',
  'LBL_HOURS_ABBREV' => 'St.',
  'LBL_HOURS_MINUTES' => '(Stunden/Minuten)',
  'LBL_INVITEE' => 'Teilnehmer',
  'LBL_LAST_NAME' => 'Nachname',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interessenten',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugewiesen an',
  'LBL_LIST_CLOSE' => 'Schließen',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_DATE' => 'Startdatum',
  'LBL_LIST_DIRECTION' => 'Richtung',
  'LBL_LIST_DURATION' => 'Dauer',
  'LBL_LIST_FORM_TITLE' => 'Anrufliste',
  'LBL_LIST_MY_CALLS' => 'Meine Anrufe',
  'LBL_LIST_RELATED_TO' => 'Verknüpft mit',
  'LBL_LIST_RELATED_TO_ID' => 'Verknüpft mit ID',
  'LBL_LIST_SUBJECT' => 'Betreff',
  'LBL_LIST_TIME' => 'Startzeit',
  'LBL_LOG_CALL' => 'Anruf aufzeichnen',
  'LBL_MEMBER_OF' => 'Mitglied von',
  'LBL_MINSS_ABBREV' => 'min',
  'LBL_MODULE_NAME' => 'Anrufe',
  'LBL_MODULE_NAME_SINGULAR' => 'Anruf',
  'LBL_MODULE_TITLE' => 'Anrufe: Home',
  'LBL_MY_SCHEDULED_CALLS' => 'Meine geplanten Anrufe',
  'LBL_NAME' => 'Name',
  'LBL_NEW_FORM_TITLE' => 'Neuer Termin',
  'LBL_NO_ACCESS' => 'Sie haben keine Rechte das Modul $module zu erstellen',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Eltern ID:',
  'LBL_PHONE' => 'Telefon',
  'LBL_POPUP_REMINDER_TIME' => 'Popup-Erinnerungszeit',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Sie haben {{moduleSingularLower}} für {{formatDate date_start}} geplant, aber Sie haben keine Berechtigung für den Zugriff.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Sie haben {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> für {{formatDate date_start}} geplant.',
  'LBL_RECURRENCE' => 'Ereignis',
  'LBL_RECURRING_LIMIT_ERROR' => 'Dieses wiederkommende Meeting kann nicht angesetzt werden, weil es die maximal erlaubten Vorkommnisse von $limit überschreitet.',
  'LBL_RECURRING_SOURCE' => 'Wiederholquelle',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Telefonat mit {{{this}}}',
  'LBL_RELATED_TO' => 'Verknüpft mit',
  'LBL_REMINDER' => 'Erinnerung:',
  'LBL_REMINDER_EMAIL' => 'E-Mail',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-Mail an alle Eingeladenen',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Erinnerungs Zeitpunkt',
  'LBL_REMINDER_TITLE' => 'Anruf:',
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
  'LBL_SEARCH_FORM_TITLE' => 'Anrufe Suche',
  'LBL_SELECT_FROM_DROPDOWN' => 'Bitte wählen Sie zuerst einen Eintrag aus der &#39;Zugewiesen an&#39; Auswahlliste.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Einladungen senden',
  'LBL_SEND_BUTTON_TITLE' => 'Einladungen senden [Alt-I]',
  'LBL_SEND_INVITES' => 'Einladungen senden',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Betreff:',
  'LBL_SYNCED_RECURRING_MSG' => 'Dieses Meeting wurde in einem anderem System erstellt und wurde nach Sugar synchronisiert. Um es zu ändern, öffnen Sie das original meeting im anderen System und ändern Sie es dort. Änderungen können dann wieder synchronisiert werden.',
  'LBL_TIME' => 'Beginn:',
  'LBL_TIME_END' => 'Endezeit',
  'LBL_USERS_SUBPANEL_TITLE' => 'Benutzer',
  'LNK_CALL_LIST' => 'Anrufe',
  'LNK_IMPORT_CALLS' => 'Anrufe importieren',
  'LNK_NEW_ACCOUNT' => 'Neue Firma',
  'LNK_NEW_APPOINTMENT' => 'Neuer Termin',
  'LNK_NEW_CALL' => 'Neuer Anruf',
  'LNK_NEW_MEETING' => 'Neues Meeting',
  'LNK_NEW_OPPORTUNITY' => 'Neue Verkaufschance',
  'LNK_SELECT_ACCOUNT' => 'Firma auswählen',
  'NOTICE_DURATION_TIME' => 'Zeitdauer muss größer als 0 sein',
  'NTC_REMOVE_INVITEE' => 'Möchten Sie diesen Teilnehmer wirklich aus diesem Anruf löschen?',
  'TPL_CALL_STATUS_CHANGED' => 'Anruf wurde als {{status}} gekennzeichnet.',
);

