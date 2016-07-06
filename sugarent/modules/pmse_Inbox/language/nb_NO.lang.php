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
  'LBL_ASSIGNED_USER' => 'Tildelt bruker:',
  'LBL_CAS_ID' => 'Prosess nummer',
  'LBL_MODULE_NAME' => 'Prosesses',
  'LBL_MODULE_NAME_SINGULAR' => 'Prosesses',
  'LBL_MODULE_TITLE' => 'Prosesses',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 on <strong>%s</strong> Godkjent',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 on <strong>%s</strong> Claimed',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 on <strong>%s</strong> tildelt til bruker &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 on <strong>%s</strong> Avslått',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 on <strong>%s</strong> Routed',
  'LBL_PMSE_BUTTON_CANCEL' => 'Avbryt [Alt+X]',
  'LBL_PMSE_BUTTON_CLOSE' => 'Lukk:',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Process Author Log',
  'LBL_PMSE_BUTTON_REFRESH' => 'Oppdatér',
  'LBL_PMSE_BUTTON_SAVE' => 'Lagre [Alt+S]',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'SugarCRM Log',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Er du sikker at du vil avbryte Prosess Nummer #{}?',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Notat:',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Type:',
  'LBL_PMSE_FORM_LABEL_USER' => 'Bruker:',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Velg...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'Handlingen utført var : [% s]',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'Oppgaven er fortsatt tildelt',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'Navn',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'Opprettet',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'Har opprettet prosessen',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'Har TaskID',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Utført en ikke kjent oppgave',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'Endred',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'Av Modul %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Ukjent',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'Ikke registret Handling',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '(ikke påbegynt)',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'routed',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'Oppgave har vert',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'Oppgave var',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'Med Event %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'med Gateway % s ble evaluert og rutes til neste oppgave',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Legg til  Notat',
  'LBL_PMSE_LABEL_APPROVE' => 'Godkjen',
  'LBL_PMSE_LABEL_CANCEL' => 'Avbryt [Alt+X]',
  'LBL_PMSE_LABEL_CLAIM' => 'Claim',
  'LBL_PMSE_LABEL_CURRENT' => 'Nåværende',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Nåværende Aktivitet',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Tidsfrist',
  'LBL_PMSE_LABEL_EXECUTE' => 'Utfør',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Forventet Tid',
  'LBL_PMSE_LABEL_HISTORY' => 'Historikk',
  'LBL_PMSE_LABEL_NOTES' => 'VIs Notater',
  'LBL_PMSE_LABEL_OVERDUE' => 'Forfalt',
  'LBL_PMSE_LABEL_PROCESS' => 'Prosess',
  'LBL_PMSE_LABEL_REJECT' => 'Avslå',
  'LBL_PMSE_LABEL_ROUTE' => 'Route',
  'LBL_PMSE_LABEL_STATUS' => 'Status:',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Ikke tilordnet',
  'LBL_PMSE_MY_PROCESSES' => 'Mine Prosesses',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Self Service Processes',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Error Number of Cycles',
  'LBL_PMSE_SHOW_PROCESS' => 'Vis Prosess',
  'LBL_PMSE_TITLE_HISTORY' => 'Prosess Historikk',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Prosess #%s:  Status',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Process Author Log Viewer',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Process Management',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Prosess notater',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Ubetjente Prosesser',
  'LBL_PROCESS_DEFINITION_NAME' => 'Prosess Definisjon Navn',
  'LBL_PROCESS_NAME' => 'Prosess Navn',
  'LBL_RECORD_NAME' => 'Record Navn',
  'LBL_STATUS_CANCELLED' => 'Prosesses Avbrutt',
  'LBL_STATUS_COMPLETED' => 'Prosesser utført',
  'LBL_STATUS_ERROR' => 'Processes Error',
  'LBL_STATUS_IN_PROGRESS' => 'Prosesses i Progress',
  'LBL_STATUS_TERMINATED' => 'Prosessen Avbrutt',
  'LNK_LIST' => 'Vis Prosess',
);

