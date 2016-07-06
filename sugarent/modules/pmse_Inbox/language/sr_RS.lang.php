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
  'LBL_ASSIGNED_USER' => 'Dodeljen korisnik',
  'LBL_CASE_TITLE' => 'Naslov procesa',
  'LBL_CAS_ID' => 'ID procesa',
  'LBL_MODULE_NAME' => 'Procesi',
  'LBL_MODULE_NAME_SINGULAR' => 'Procesi',
  'LBL_MODULE_TITLE' => 'Procesi',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 on %s Prihvaćeno',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 on %s Potvrđeno',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 on %s dodeljeno korisniku &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 on %s Odbijeno',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 on %s Usađeno',
  'LBL_PMSE_BUTTON_CANCEL' => 'Otkaži',
  'LBL_PMSE_BUTTON_CLOSE' => 'Zatvori',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Prijava procesnog autora',
  'LBL_PMSE_BUTTON_REFRESH' => 'Osveži',
  'LBL_PMSE_BUTTON_SAVE' => 'Sačuvaj',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'Prijava SugarCRM',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Da li ste sigurni da želite da prekinete proces: [] with Process Id: {}',
  'LBL_PMSE_FILTER' => 'Filter',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Beleška',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Tip',
  'LBL_PMSE_FORM_LABEL_USER' => 'Korisnik',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Izaberi...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'Izvedena akcija je: [%s]',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'Zadatak je još uvek u fazi izrade.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'nazvan: %s',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'Kreiran',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'je kreirao proces # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'trenutno poseduje zadatak %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Urađeno kao nepoznat zadatak',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'Izmenjen',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'modula %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Nepoznato (according UserId:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'Neregistrovana akcija',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '(nije započeto)',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'Usađen',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'Zadatak je bio',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'Zadatak je bio',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'sa događajem %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'sa kapijom %s  je procenjen i usađen u sledeći zadatak',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Dodaj beleške',
  'LBL_PMSE_LABEL_APPROVE' => 'Odobriti',
  'LBL_PMSE_LABEL_CANCEL' => 'Otkaži',
  'LBL_PMSE_LABEL_CLAIM' => 'Tvrditi',
  'LBL_PMSE_LABEL_CURRENT' => 'Trenutni',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Trenutna aktivnost',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Krajnji rok',
  'LBL_PMSE_LABEL_EXECUTE' => 'Izvrši',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Očekivano vreme',
  'LBL_PMSE_LABEL_HISTORY' => 'Istorija',
  'LBL_PMSE_LABEL_IN_TIME' => 'Na vreme',
  'LBL_PMSE_LABEL_NOTES' => 'Beleške',
  'LBL_PMSE_LABEL_OVERDUE' => 'U kašnjenju',
  'LBL_PMSE_LABEL_PROCESS' => 'Procesi',
  'LBL_PMSE_LABEL_REJECT' => 'Odbiti',
  'LBL_PMSE_LABEL_ROUTE' => 'Put',
  'LBL_PMSE_LABEL_STATUS' => 'Status',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Nije dodeljeno',
  'LBL_PMSE_MY_PROCESSES' => 'Moji procesi',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Samouslužni procesi',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Greška u broju ciklusa',
  'LBL_PMSE_SHOW_PROCESS' => 'Prikaži proces',
  'LBL_PMSE_TITLE_HISTORY' => 'Istorija procesa',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Proces #%s: Trenutni status',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Prikaz procesa autorskog prijavljivanja',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Lista procesa',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Obraditi beleške',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Neprisutni procesi',
  'LBL_PROCESS_DEFINITION_NAME' => 'Naziv procesne definicije',
  'LBL_PROCESS_NAME' => 'Naziv procesa',
  'LBL_RECORD_NAME' => 'Naziv zapisa',
  'LBL_STATUS_CANCELLED' => 'Procesi su otkazani',
  'LBL_STATUS_COMPLETED' => 'Procesi su komletirani',
  'LBL_STATUS_ERROR' => 'Procesne greške',
  'LBL_STATUS_IN_PROGRESS' => 'Procesi su u toku',
  'LBL_STATUS_TERMINATED' => 'Procesi su izvršeni',
  'LNK_LIST' => 'Prikazati procese',
);

