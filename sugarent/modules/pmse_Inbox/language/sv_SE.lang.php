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
  'LBL_ACTIVITY_OWNER' => 'Processanvändare',
  'LBL_ASSIGNED_USER' => 'Användare Tilldelad',
  'LBL_CAS_ID' => 'Processnummer',
  'LBL_MODULE_NAME' => 'Processer',
  'LBL_MODULE_NAME_SINGULAR' => 'Processer',
  'LBL_MODULE_TITLE' => 'Processer',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 på <strong>%s</strong> Godkänd',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 on <strong>%s</strong> Claimed',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 på <strong>%s</strong> tilldelad till användare &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 på <strong>%s</strong> Avvisad',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 på <strong>%s</strong> Omdirigerad',
  'LBL_PMSE_BUTTON_CANCEL' => 'Avbryt',
  'LBL_PMSE_BUTTON_CLOSE' => 'Stäng',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Process Author Log',
  'LBL_PMSE_BUTTON_REFRESH' => 'Uppdatera',
  'LBL_PMSE_BUTTON_SAVE' => 'Spara',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'SugarCRM Log',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Är du säker på att du vill cancellera process nummer #{}?',
  'LBL_PMSE_FILTER' => 'Filter',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Anteckning',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Typ',
  'LBL_PMSE_FORM_LABEL_USER' => 'Användare',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Välj...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'Aktiviteten utförd var: [%s]',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'Uppgiften är fortfarande tilldelad.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'namngiven: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'skapad',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'har skapat Process # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'för närvarande har TaskId %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Avslutad en okänd uppgift',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'editerad',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'av Module %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Okänd (enligt användarid:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'ej registrerad aktivitet',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '( ej startad )',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'omdirigerad',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'uppgifter har blivit',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'uppgiften var',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'med Eventet %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'med Gatewayen %s blev evaluerad och omdirigerad till nästa uppgift',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Lägg till Anteckningar',
  'LBL_PMSE_LABEL_APPROVE' => 'Godkänn',
  'LBL_PMSE_LABEL_CANCEL' => 'Avbryt',
  'LBL_PMSE_LABEL_CLAIM' => 'Claim',
  'LBL_PMSE_LABEL_CURRENT' => 'Aktuell',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Nuvarande Aktivitet',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Genomförandedatum',
  'LBL_PMSE_LABEL_EXECUTE' => 'Exekvera',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Förväntat Tid',
  'LBL_PMSE_LABEL_HISTORY' => 'Historik',
  'LBL_PMSE_LABEL_NOTES' => 'Visa Anteckningar',
  'LBL_PMSE_LABEL_OVERDUE' => 'Försenade',
  'LBL_PMSE_LABEL_PROCESS' => 'Process',
  'LBL_PMSE_LABEL_REJECT' => 'Avvisa',
  'LBL_PMSE_LABEL_ROUTE' => 'Dirigera',
  'LBL_PMSE_LABEL_STATUS' => 'Status',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Ej tilldelad',
  'LBL_PMSE_MY_PROCESSES' => 'Mina Processer',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Self Service Processes',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Error Number of Cycles',
  'LBL_PMSE_SHOW_PROCESS' => 'Visa Process',
  'LBL_PMSE_TITLE_HISTORY' => 'Processhistorik',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Process #%s: Nuvarande Status',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Process Author Log Viewer',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Processhantering',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Processanteckningar',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Oövervakade Processer',
  'LBL_PROCESS_DEFINITION_NAME' => 'Processdefinitionsnamn',
  'LBL_PROCESS_NAME' => 'Processnamn',
  'LBL_PROCESS_OWNER' => 'Processägare',
  'LBL_RECORD_NAME' => 'Record Namn',
  'LBL_STATUS_CANCELLED' => 'Processer Cancellerade',
  'LBL_STATUS_COMPLETED' => 'Processer Avslutade',
  'LBL_STATUS_ERROR' => 'Processer Felmeddelande',
  'LBL_STATUS_IN_PROGRESS' => 'Pågående Processer',
  'LBL_STATUS_TERMINATED' => 'Processer Terminerade',
  'LNK_LIST' => 'Visa Processer',
);

