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
  'LBL_ACTIVITY_OWNER' => 'Prozessbenutzer',
  'LBL_ASSIGNED_USER' => 'Zugewiesen an',
  'LBL_CAS_ID' => 'Prozessnummer',
  'LBL_MODULE_NAME' => 'Prozesse',
  'LBL_MODULE_NAME_SINGULAR' => 'Prozesse',
  'LBL_MODULE_TITLE' => 'Prozesse',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 in <strong>%s</strong> Angenommen',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 in <strong>%s</strong> Angefordert',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 in <strong>%s</strong> zugewiesen an Benutzer &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 in <strong>%s</strong> Abgelehnt',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 in <strong>%s</strong> Weitergeleitet',
  'LBL_PMSE_BUTTON_CANCEL' => 'Abbrechen',
  'LBL_PMSE_BUTTON_CLEAR' => 'Löschen',
  'LBL_PMSE_BUTTON_CLOSE' => 'Schließen',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Process Author-Protokoll',
  'LBL_PMSE_BUTTON_REFRESH' => 'Aktualisieren',
  'LBL_PMSE_BUTTON_SAVE' => 'Speichern',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'SugarCRM-Protokoll',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Sind Sie sicher, dass Sie den Prozess mit der Nummer #{} abbrechen möchten?',
  'LBL_PMSE_FILTER' => 'Filter',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Notiz',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Typ',
  'LBL_PMSE_FORM_LABEL_USER' => 'Benutzer',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Auswählen...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'Die durchgeführte Aktion war: <span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'Die Aufgabe ist noch zugewiesen.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'genannt: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'erstellt',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'hat Prozess # %s  erstellt',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'hat aktuell die Aufgaben-ID %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Unbekannte Aufgabe ausgeführt',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'bearbeitet',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'von Modul %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Unbekannt (gemäß Benutzer-ID:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'keine registrierte Aktion',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '(noch nicht gestartet)',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'weitergeleitet',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'Aufgabe wurde',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'Aufgabe wurde',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'mit Ereignis %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'mit Gateway %s wurde bewertet und an die nächste Aufgabe weitergeleitet',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Notizen hinzufügen',
  'LBL_PMSE_LABEL_APPROVE' => 'Annehmen',
  'LBL_PMSE_LABEL_CANCEL' => 'Abbrechen',
  'LBL_PMSE_LABEL_CLAIM' => 'Anfordern',
  'LBL_PMSE_LABEL_CURRENT' => 'Aktuell',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Aktuelle Aktivität',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Fällig am',
  'LBL_PMSE_LABEL_EXECUTE' => 'Ausführen',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Erwartete Zeit',
  'LBL_PMSE_LABEL_HISTORY' => 'Verlauf',
  'LBL_PMSE_LABEL_NOTES' => 'Notizen anzeigen',
  'LBL_PMSE_LABEL_OVERDUE' => 'Überfällig',
  'LBL_PMSE_LABEL_PROCESS' => 'Prozess',
  'LBL_PMSE_LABEL_REJECT' => 'Ablehnen',
  'LBL_PMSE_LABEL_ROUTE' => 'Weiterleiten',
  'LBL_PMSE_LABEL_STATUS' => 'Status',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Nicht zugewiesen',
  'LBL_PMSE_MY_PROCESSES' => 'Meine Prozesse',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Selbstbedienungsprozesse',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Fehleranzahl von Zyklen',
  'LBL_PMSE_SHOW_PROCESS' => 'Prozess anzeigen',
  'LBL_PMSE_TITLE_HISTORY' => 'Prozessverlauf',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Prozess #%s: Aktueller Status',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Process Author Protokoll-Viewer',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Prozess-Management',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Prozessnotizen',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Unbeaufsichtigte Prozesse',
  'LBL_PMSE_WARNING_CLEAR' => 'Sind Sie sicher, dass die Protokolldaten gelöscht werden sollen? Dies kann nicht rückgängig gemacht werden.',
  'LBL_PROCESS_DEFINITION_NAME' => 'Prozessdefinitionsname',
  'LBL_PROCESS_NAME' => 'Prozessname',
  'LBL_PROCESS_OWNER' => 'Prozesseigentümer',
  'LBL_RECORD_NAME' => 'Eintragsname',
  'LBL_STATUS_CANCELLED' => 'Abgebrochene Prozesse',
  'LBL_STATUS_COMPLETED' => 'Abgeschlossene Prozesse',
  'LBL_STATUS_ERROR' => 'Prozesse mit Fehler',
  'LBL_STATUS_IN_PROGRESS' => 'Laufende Prozesse',
  'LBL_STATUS_TERMINATED' => 'Beendete Prozesse',
  'LNK_LIST' => 'Prozesse anzeigen',
);

