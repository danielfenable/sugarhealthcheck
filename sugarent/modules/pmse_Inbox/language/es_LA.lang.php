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
  'LBL_ACTIVITY_OWNER' => 'Proceso de Usuario',
  'LBL_ASSIGNED_USER' => 'Usuario Asignado',
  'LBL_CANCEL_MESSAGE' => '',
  'LBL_CAS_ID' => 'Id de Procesos',
  'LBL_MODULE_NAME' => 'Procesos',
  'LBL_MODULE_NAME_SINGULAR' => 'Procesos',
  'LBL_MODULE_TITLE' => 'Procesos',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 en <strong>%s</strong> Aprobado',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 en <strong>%s</strong> Reclamado',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 en <strong>%s</strong> asignado a user &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 en <strong>%s</strong> Rechazado',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 en <strong>%s</strong> Ruteado',
  'LBL_PMSE_BUTTON_CANCEL' => 'Cancelar',
  'LBL_PMSE_BUTTON_CLOSE' => 'Cerrar',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Ingreso de Proceso Autor',
  'LBL_PMSE_BUTTON_REFRESH' => 'Actualizar',
  'LBL_PMSE_BUTTON_SAVE' => 'Guardar',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'Ingreso SugarCRM',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Estás seguro que deseas cancelar el Número de Proceso #{}?',
  'LBL_PMSE_FILTER' => 'Filtro',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Nota',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Tipo',
  'LBL_PMSE_FORM_LABEL_USER' => 'Usuario',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Seleccionar...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'La acción realizada fue: <span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'La tarea sigue estando asignada.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'nombrado: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'creada',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'ha sido creado el Proceso # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'actualmente tiene el Id de Tarea %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Concretar tarea desconocida',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'editada',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'de Módulo %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Desconocidos (according UserId:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'acción no registrada',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '( sin empezar aún )',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'ruteada',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'tarea ha sido',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'tarea que fue',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'con el Evento %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'con el Portal %s fue evaluado y ruteado a la siguiente tarea',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Agregar Notas',
  'LBL_PMSE_LABEL_APPROVE' => 'Aprobar',
  'LBL_PMSE_LABEL_CANCEL' => 'Cancelar',
  'LBL_PMSE_LABEL_CLAIM' => 'Reclamar',
  'LBL_PMSE_LABEL_CURRENT' => 'Actual',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Actividad Actual',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Fecha de Vencimiento',
  'LBL_PMSE_LABEL_EXECUTE' => 'Ejecutar',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Tiempo Esperado',
  'LBL_PMSE_LABEL_HISTORY' => 'Historial',
  'LBL_PMSE_LABEL_IN_TIME' => '',
  'LBL_PMSE_LABEL_NOTES' => 'Notas',
  'LBL_PMSE_LABEL_OVERDUE' => 'Vencida',
  'LBL_PMSE_LABEL_PROCESS' => 'Proceso',
  'LBL_PMSE_LABEL_REJECT' => 'Rechazar',
  'LBL_PMSE_LABEL_ROUTE' => 'Ruta',
  'LBL_PMSE_LABEL_STATUS' => 'Estatus',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Sin asignar',
  'LBL_PMSE_MY_PROCESSES' => 'Mis Procesos',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Procesos de Autoservicio',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Error en el Numero de Ciclos',
  'LBL_PMSE_SHOW_PROCESS' => 'Mostrar Proceso',
  'LBL_PMSE_TITLE_HISTORY' => 'Historial de Proceso',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Proceso #%s: Estado Actual',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Visualizador de Ingreso de Proceso Autor',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Lista de Procesos',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Notas de Proceso',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Procesos Desatendidos',
  'LBL_PROCESS_DEFINITION_NAME' => 'Nombre de Definición de Proceso',
  'LBL_PROCESS_NAME' => 'Nombre de Proceso',
  'LBL_PROCESS_OWNER' => 'Proceso de Propietario',
  'LBL_RECORD_NAME' => 'Nombre de Registro',
  'LBL_STATUS_CANCELLED' => 'Procesos Cancelados',
  'LBL_STATUS_COMPLETED' => 'Procesos Completados',
  'LBL_STATUS_ERROR' => 'Error de Procesos',
  'LBL_STATUS_IN_PROGRESS' => 'Procesos en Progreso',
  'LBL_STATUS_TERMINATED' => 'Procesos Terminados',
  'LNK_LIST' => 'Vista Procesos',
);

