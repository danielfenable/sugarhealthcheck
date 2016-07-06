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
  'LBL_ACTIVITY_OWNER' => 'Përdorues procesi',
  'LBL_ASSIGNED_USER' => 'Përdorues i caktuar',
  'LBL_CANCEL_MESSAGE' => 'Jeni të sigurt se dëshironi të anuloni procesin: [] me proces ID: {}',
  'LBL_CASE_TITLE' => 'Titulli i procesit',
  'LBL_CAS_ID' => 'Proceso ID',
  'LBL_MODULE_NAME' => 'Proceset',
  'LBL_MODULE_NAME_SINGULAR' => 'Proceset',
  'LBL_MODULE_TITLE' => 'Proceset',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 në <strong>%s</strong> Aprovuar',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 në <strong>%s</strong> Kërkuar',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 në <strong>%s</strong> të caktuara tek përdoruesi &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 në <strong>%s</strong> Refuzuar',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 në <strong>%s</strong> Drejtuar',
  'LBL_PMSE_BUTTON_CANCEL' => 'Anulo',
  'LBL_PMSE_BUTTON_CLOSE' => 'Mbyll',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Proceso logimin e autorit',
  'LBL_PMSE_BUTTON_REFRESH' => 'Rifresko',
  'LBL_PMSE_BUTTON_SAVE' => 'Ruaj',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'Logimi SugarCRM',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Jeni të sigurt se dëshironi të anuloni procesin:  [] with Process Id: {}',
  'LBL_PMSE_FILTER' => 'Filtër',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Shënim',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Lloji',
  'LBL_PMSE_FORM_LABEL_USER' => 'Përdorues',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Selekto...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'Veprimi i performuar ishte: <span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'Detyra është ende e caktuar.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'emëruar: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'krijuar',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'ka krijuar Proces # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'aktualisht ka TaskId %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Bërë detyrë e panjohur',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'edituar',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'e modulit %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'E panjohur (sipas UserId:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'ska veprim të regjistruar',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '(nuk ka filluar ende)',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'rutë',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'detyra është',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'detyra ishte',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'me ngjarjen %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'me largimin %s ishte evaluar dhe dërguar në detyrën vijuese',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Sho shënime',
  'LBL_PMSE_LABEL_APPROVE' => 'Aprovo',
  'LBL_PMSE_LABEL_CANCEL' => 'Anulo',
  'LBL_PMSE_LABEL_CLAIM' => 'Kërkesë',
  'LBL_PMSE_LABEL_CURRENT' => 'Aktual',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Aktiviteti momental',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Data e caktuar',
  'LBL_PMSE_LABEL_EXECUTE' => 'Kryej',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Koha e pritur',
  'LBL_PMSE_LABEL_HISTORY' => 'Historia',
  'LBL_PMSE_LABEL_IN_TIME' => 'Në kohë',
  'LBL_PMSE_LABEL_NOTES' => 'Shënime',
  'LBL_PMSE_LABEL_OVERDUE' => 'Vonuar',
  'LBL_PMSE_LABEL_PROCESS' => 'Process',
  'LBL_PMSE_LABEL_REJECT' => 'Refuzo',
  'LBL_PMSE_LABEL_ROUTE' => 'Ruta',
  'LBL_PMSE_LABEL_STATUS' => 'Statusi',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'E pacaktuar',
  'LBL_PMSE_MY_PROCESSES' => 'Proceset e mia',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Proceset e vetëshërbimit',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Cikli i numrave të gabuar',
  'LBL_PMSE_SHOW_PROCESS' => 'Trego procesin',
  'LBL_PMSE_TITLE_HISTORY' => 'Proceso historinë',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Procesi #%s: Statusi aktual',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Shikimi i logimit të autorit të procesit',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Proceso listën',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Shënime procesi',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Procese të pambajtura',
  'LBL_PROCESS_DEFINITION_NAME' => 'Emri i definimit të procesit',
  'LBL_PROCESS_NAME' => 'Emri i procesit',
  'LBL_PROCESS_OWNER' => 'Pronar procesi',
  'LBL_RECORD_NAME' => 'Emri i regjistrimit',
  'LBL_STATUS_CANCELLED' => 'Procesi u anulua',
  'LBL_STATUS_COMPLETED' => 'Procesi u kompletua',
  'LBL_STATUS_ERROR' => 'Gabim procesesh',
  'LBL_STATUS_IN_PROGRESS' => 'Procesi ne progres',
  'LBL_STATUS_TERMINATED' => 'Procesi u ndalua',
  'LNK_LIST' => 'Shiko proceset',
);

