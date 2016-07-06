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
  'LBL_ACTIVITY_OWNER' => 'Usuari de procés',
  'LBL_ASSIGNED_USER' => 'Assignat a l&#39;usuari',
  'LBL_CAS_ID' => 'Nombre de procès',
  'LBL_MODULE_NAME' => 'Processos',
  'LBL_MODULE_NAME_SINGULAR' => 'Processos',
  'LBL_MODULE_TITLE' => 'Processos',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 a <strong>%s</strong> Aprovat',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 a <strong>%s</strong> Reclamat',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 a <strong>%s</strong> assignat a l&#39;usuari &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 a <strong>%s</strong> Rebutjat',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 a <strong>%s</strong> Encaminat',
  'LBL_PMSE_BUTTON_CANCEL' => 'Cancel·la',
  'LBL_PMSE_BUTTON_CLEAR' => 'Esborra',
  'LBL_PMSE_BUTTON_CLOSE' => 'Tanca',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Registre d&#39;autors de processos',
  'LBL_PMSE_BUTTON_REFRESH' => 'Actualitza',
  'LBL_PMSE_BUTTON_SAVE' => 'Desa',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'Registre de SugarCRM',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Esteu segur que voleu cancel·lar el procés amb el nombre #{}?',
  'LBL_PMSE_FILTER' => 'Filtre',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Nota',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Tipus',
  'LBL_PMSE_FORM_LABEL_USER' => 'Usuari',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Selecciona...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'L&#39;acció realitzada va ser: <span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'La tasca encara està assignada',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'anomenat: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'creada',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'ha creat el procés # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'en l&#39;actualitat té l&#39;Id de tasca %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'S&#39;ha fet una tasca desconeguda',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'editada',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'del mòdul %s %s,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Desconegut (segons l&#39;Id d&#39;usuari:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'acció no registrada',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '( no començada encara )',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'dirigida',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'la tasca s&#39;ha',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'la taska va ser',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'amb l&#39;esdeveniment %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'amb la passarel·la %s es va avaluar i es va encaminar cap a la següent tasca',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Afegeix notes',
  'LBL_PMSE_LABEL_APPROVE' => 'Aprova',
  'LBL_PMSE_LABEL_CANCEL' => 'Cancel·la',
  'LBL_PMSE_LABEL_CLAIM' => 'Reclama',
  'LBL_PMSE_LABEL_CURRENT' => 'Actual',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Activitat actual',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Data de venciment',
  'LBL_PMSE_LABEL_EXECUTE' => 'Executa',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Temps esperat',
  'LBL_PMSE_LABEL_HISTORY' => 'Historial',
  'LBL_PMSE_LABEL_NOTES' => 'Mostra notes',
  'LBL_PMSE_LABEL_OVERDUE' => 'Endarrerit',
  'LBL_PMSE_LABEL_PROCESS' => 'Procés',
  'LBL_PMSE_LABEL_REJECT' => 'Rebutja',
  'LBL_PMSE_LABEL_ROUTE' => 'Encamina',
  'LBL_PMSE_LABEL_STATUS' => 'Estat',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Sense assignar',
  'LBL_PMSE_MY_PROCESSES' => 'Els meus processos',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Processos d&#39;autoservei',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Nombre d&#39;error dels cicles',
  'LBL_PMSE_SHOW_PROCESS' => 'Mostra el procés',
  'LBL_PMSE_TITLE_HISTORY' => 'Historial de processos',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Procés #%s: estat actual',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Visualitzador del registre d&#39;autors de processos',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Gestió de processos',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Notes de processos',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Processos desatesos',
  'LBL_PMSE_WARNING_CLEAR' => 'Esteu segur que voleu esborrar les dades del registre? Aquesta acció no es pot desfer.',
  'LBL_PROCESS_DEFINITION_NAME' => 'Nom de definició de procés',
  'LBL_PROCESS_NAME' => 'Nom de procés',
  'LBL_PROCESS_OWNER' => 'Propietari de procés',
  'LBL_RECORD_NAME' => 'Nom de registre',
  'LBL_STATUS_CANCELLED' => 'Processos cancel·lats',
  'LBL_STATUS_COMPLETED' => 'Processos completats',
  'LBL_STATUS_ERROR' => 'Error de processos',
  'LBL_STATUS_IN_PROGRESS' => 'Processos en curs',
  'LBL_STATUS_TERMINATED' => 'Processos finalitzats',
  'LNK_LIST' => 'Veure processos',
);

