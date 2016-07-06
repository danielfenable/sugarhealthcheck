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
  'LBL_ASSIGNED_USER' => 'Piešķirts lietotājam',
  'LBL_CAS_ID' => 'Procesa numurs',
  'LBL_MODULE_NAME' => 'Procesi',
  'LBL_MODULE_NAME_SINGULAR' => 'Procesi',
  'LBL_MODULE_TITLE' => 'Procesi',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 no <strong>%s</strong> apstiprināts',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 no <strong>%s</strong> pieņemts',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 no <strong>%s</strong> piešķirts lietotājam &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 no <strong>%s</strong> noraidīts',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 no <strong>%s</strong> pārsūtīts',
  'LBL_PMSE_BUTTON_CANCEL' => 'Atcelt',
  'LBL_PMSE_BUTTON_CLOSE' => 'Aizvērt',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Procesu veidotāja žurnāls',
  'LBL_PMSE_BUTTON_REFRESH' => 'Atsvaidzināt',
  'LBL_PMSE_BUTTON_SAVE' => 'Saglabāt',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'SugarCRM žurnāls',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Vai tiešām vēlaties pārtraukt procesu numur #{}?',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Piezīme',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Veids',
  'LBL_PMSE_FORM_LABEL_USER' => 'Lietotājs',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Atlasīt...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'Izpildītā darbība bija: <span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'Uzdevums joprojām ir piešķirts.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'nosaukts: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'izveidots',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'tika izveidots process # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'pašlaik ir TaskId %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Izpidlīts nezināms uzdevums',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'labots',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'modulim %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Nezināms (attiecībā uz UserId:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'nereģistrēta darbība',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '( nav vēl sākts )',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'pārsūtīts',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'uzdevums ir',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'uzdevums bija',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'ar notikumu %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'ar vārteju %s tika izvērtēts un pārsūtīts uz nākošo uzdevumu',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Pievienot piezīmes',
  'LBL_PMSE_LABEL_APPROVE' => 'Apstiprināt',
  'LBL_PMSE_LABEL_CANCEL' => 'Atcelt',
  'LBL_PMSE_LABEL_CLAIM' => 'Paņemt',
  'LBL_PMSE_LABEL_CURRENT' => 'pašreizējais',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Pašreizējā aktivitāte',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Izpildes termiņš',
  'LBL_PMSE_LABEL_EXECUTE' => 'Izpildīt',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Paredzamais laiks',
  'LBL_PMSE_LABEL_HISTORY' => 'Vēsture',
  'LBL_PMSE_LABEL_IN_TIME' => 'Laikā',
  'LBL_PMSE_LABEL_NOTES' => 'Rādīt piezīmes',
  'LBL_PMSE_LABEL_OVERDUE' => 'Nokavēts',
  'LBL_PMSE_LABEL_PROCESS' => 'Process',
  'LBL_PMSE_LABEL_REJECT' => 'Noraidīt',
  'LBL_PMSE_LABEL_ROUTE' => 'Pārsūtīt',
  'LBL_PMSE_LABEL_STATUS' => 'Statuss',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Nepiešķirts',
  'LBL_PMSE_MY_PROCESSES' => 'Mani procesi',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Pašapkalpošanās procesi',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Ciklu kļūdu skaits',
  'LBL_PMSE_SHOW_PROCESS' => 'Parādīt procesu',
  'LBL_PMSE_TITLE_HISTORY' => 'Procesa vēsture',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Procesa #%s: pašreizējais statuss',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Procesu veidotāja žurnāls',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Procesu pārvaldība',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Procesa piezīmes',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Procesi bez uzraudzības',
  'LBL_PROCESS_DEFINITION_NAME' => 'Procesa definīcijas nosaukums',
  'LBL_PROCESS_NAME' => 'Procesa nosaukums',
  'LBL_RECORD_NAME' => 'Ieraksta nosaukums',
  'LBL_STATUS_CANCELLED' => 'Procesi atcelti',
  'LBL_STATUS_COMPLETED' => 'Procesi pabeigti',
  'LBL_STATUS_ERROR' => 'Procesu kļūdas',
  'LBL_STATUS_IN_PROGRESS' => 'Procesi procesā',
  'LBL_STATUS_TERMINATED' => 'Procesi pārtraukti',
  'LNK_LIST' => 'Skatīt procesus',
);

