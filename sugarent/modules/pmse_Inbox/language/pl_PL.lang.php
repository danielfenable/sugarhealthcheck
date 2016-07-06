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
  'LBL_ASSIGNED_USER' => 'Przydzielono do',
  'LBL_CAS_ID' => 'Numer procesu',
  'LBL_MODULE_NAME' => 'Procesy',
  'LBL_MODULE_NAME_SINGULAR' => 'Procesy',
  'LBL_MODULE_TITLE' => 'Procesy',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 w <strong>%s</strong> Zatwierdzono',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 w <strong>%s</strong> Żądano',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 w <strong>%s</strong> przydzielono do użytkownika &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 w <strong>%s</strong> Odrzucono',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 w <strong>%s</strong> Przekierowano',
  'LBL_PMSE_BUTTON_CANCEL' => 'Anuluj',
  'LBL_PMSE_BUTTON_CLOSE' => 'Zamknij',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Dziennik autora procesów',
  'LBL_PMSE_BUTTON_REFRESH' => 'Odśwież',
  'LBL_PMSE_BUTTON_SAVE' => 'Zapisz',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'Dziennik SugarCRM',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Na pewno chcesz anulować Proces numer #{}?',
  'LBL_PMSE_FILTER' => 'Filtr',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Notatka',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Typ',
  'LBL_PMSE_FORM_LABEL_USER' => 'Użytkownik',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Wybierz...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'Wykonane działanie to: <span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'Zadanie jest wciąż przydzielone.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'o nazwie: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'utworzone',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'utworzył(a) Proces # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'aktualnie ma TaskId %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Zrobił(a) nieznane zadanie',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'edytowane',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'z modułu %s %s,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Nieznane (według UserId:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'niezarejestrowana akcja',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '(jeszcze nierozpoczęte)',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'przekierowane',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'zadanie zostało',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'zadanie zostało',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'z wydarzeniem %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'z %s zostało ocenione i przekierowane do następnego zadania',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Dodaj notatki',
  'LBL_PMSE_LABEL_APPROVE' => 'Akceptuj',
  'LBL_PMSE_LABEL_CANCEL' => 'Anuluj',
  'LBL_PMSE_LABEL_CLAIM' => 'Żądaj',
  'LBL_PMSE_LABEL_CURRENT' => 'Bieżący',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Bieżące aktywności',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Data wymagalności',
  'LBL_PMSE_LABEL_EXECUTE' => 'Wykonaj',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Oczekiwany czas',
  'LBL_PMSE_LABEL_HISTORY' => 'Historia',
  'LBL_PMSE_LABEL_IN_TIME' => '',
  'LBL_PMSE_LABEL_NOTES' => 'Pokaż notatki',
  'LBL_PMSE_LABEL_OVERDUE' => 'Przeterminowane',
  'LBL_PMSE_LABEL_PROCESS' => 'Proces',
  'LBL_PMSE_LABEL_REJECT' => 'Odrzuć',
  'LBL_PMSE_LABEL_ROUTE' => 'Przekieruj',
  'LBL_PMSE_LABEL_STATUS' => 'Status',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Nieprzydzielone',
  'LBL_PMSE_MY_PROCESSES' => 'Moje procesy',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Procesy samoobsługowe',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Błąd liczby cykli',
  'LBL_PMSE_SHOW_PROCESS' => 'Pokaż proces',
  'LBL_PMSE_TITLE_HISTORY' => 'Historia procesów',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Proces #%s: Aktualny status',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Dziennik autora procesu',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Zarządzanie procesami',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Notatki procesu',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Proces bez opieki',
  'LBL_PROCESS_DEFINITION_NAME' => 'Nazwa definicji procesu',
  'LBL_PROCESS_NAME' => 'Nazwa procesu',
  'LBL_RECORD_NAME' => 'Nazwa rekordu',
  'LBL_STATUS_CANCELLED' => 'Proces anulowany',
  'LBL_STATUS_COMPLETED' => 'Proces ukończony',
  'LBL_STATUS_ERROR' => 'Błąd procesu',
  'LBL_STATUS_IN_PROGRESS' => 'Proces w trakcie',
  'LBL_STATUS_TERMINATED' => 'Proces zatrzymany',
  'LNK_LIST' => 'Zobacz procesy',
);

