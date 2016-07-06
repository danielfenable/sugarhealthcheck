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
  'LBL_ACTIVITY_OWNER' => 'Utilizator proces',
  'LBL_ASSIGNED_USER' => 'Utilizator alocat',
  'LBL_CAS_ID' => 'Număr proces',
  'LBL_MODULE_NAME' => 'Procese',
  'LBL_MODULE_NAME_SINGULAR' => 'Procese',
  'LBL_MODULE_TITLE' => 'Procese',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 în <strong>%s</strong> Aprobat',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 în <strong>%s</strong> Solicitat',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 în <strong>%s</strong> alocat utilizatorului &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 în <strong>%s</strong> Refuzat',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 în <strong>%s</strong> Dirijat',
  'LBL_PMSE_BUTTON_CANCEL' => 'Anulează',
  'LBL_PMSE_BUTTON_CLEAR' => 'Ştergere',
  'LBL_PMSE_BUTTON_CLOSE' => 'Închide',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Jurnal Autor Proces',
  'LBL_PMSE_BUTTON_REFRESH' => 'Împrospătează',
  'LBL_PMSE_BUTTON_SAVE' => 'Salvează',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'Jurnal SugarCRM',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Sunteţi sigur/ă că doriţi să anulaţi Procesul Numărul #{}?',
  'LBL_PMSE_FILTER' => 'Filtru',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Notă',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Tip',
  'LBL_PMSE_FORM_LABEL_USER' => 'Utilizator',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Selectează...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'Acţiunea efectuată a fost: <span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'Sarcina este încă alocată.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'denumit: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'creată',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 's-a creat Procesul # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'momentan are TaskId %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'S-a efectuat o sarcină necunoscută',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'editată',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'din Modulul %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Necunoscut (conform UserId:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'acţiune neînregistrată',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '(nu a început încă)',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'dirijată',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'sarcina a fost',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'sarcina a fost',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'cu Evenimentul %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'Cu Poarta %s s-a evaluat şi dirijat la următoarea sarcină',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Adaugă Note',
  'LBL_PMSE_LABEL_APPROVE' => 'Aprobă',
  'LBL_PMSE_LABEL_CANCEL' => 'Anulează',
  'LBL_PMSE_LABEL_CLAIM' => 'Solicită',
  'LBL_PMSE_LABEL_CURRENT' => 'Curent',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Activitate curentă',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Termen',
  'LBL_PMSE_LABEL_EXECUTE' => 'Execută',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Timp aşteptat',
  'LBL_PMSE_LABEL_HISTORY' => 'Istoric',
  'LBL_PMSE_LABEL_NOTES' => 'Afişează Note',
  'LBL_PMSE_LABEL_OVERDUE' => 'Întârziat',
  'LBL_PMSE_LABEL_PROCESS' => 'Proces',
  'LBL_PMSE_LABEL_REJECT' => 'Refuză',
  'LBL_PMSE_LABEL_ROUTE' => 'Dirijează',
  'LBL_PMSE_LABEL_STATUS' => 'Stare',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Nealocat',
  'LBL_PMSE_MY_PROCESSES' => 'Procesele mele',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Procese servicii proprii',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Eroare Număr de cicluri',
  'LBL_PMSE_SHOW_PROCESS' => 'Afişează Proces',
  'LBL_PMSE_TITLE_HISTORY' => 'Istoric proces',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Proces #%s: Stare curentă',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Vizualizare jurnal autor proces',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Gestionare procese',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Note proces',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Procese negestionate',
  'LBL_PMSE_WARNING_CLEAR' => 'Sigur doriţi ştergerea datelor din jurnal? Această acţiune nu poate fi revocată.',
  'LBL_PROCESS_DEFINITION_NAME' => 'Nume definiţie proces',
  'LBL_PROCESS_NAME' => 'Nume proces',
  'LBL_PROCESS_OWNER' => 'Deţinător proces',
  'LBL_RECORD_NAME' => 'Nume înregistrare',
  'LBL_STATUS_CANCELLED' => 'Procese anulate',
  'LBL_STATUS_COMPLETED' => 'Procese efectuate',
  'LBL_STATUS_ERROR' => 'Eroare procese',
  'LBL_STATUS_IN_PROGRESS' => 'Procese în derulare',
  'LBL_STATUS_TERMINATED' => 'Procese finalizate',
  'LNK_LIST' => 'Vizualizează procese',
);

