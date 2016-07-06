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
  'LBL_ACTIVITY_OWNER' => 'Usuario de proceso',
  'LBL_ASSIGNED_USER' => 'Usuario asignado',
  'LBL_CAS_ID' => 'Número de proceso',
  'LBL_MODULE_NAME' => 'Procesos',
  'LBL_MODULE_NAME_SINGULAR' => 'Procesos',
  'LBL_MODULE_TITLE' => 'Procesos',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 en %s aprobado',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 en %s reclamado',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 en %s asignado al usuario &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 en %s rechazado',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 en %s dirigido',
  'LBL_PMSE_BUTTON_CANCEL' => 'Cancelar',
  'LBL_PMSE_BUTTON_CLEAR' => 'Borrar',
  'LBL_PMSE_BUTTON_CLOSE' => 'Cerrar',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Registro de autores de procesos',
  'LBL_PMSE_BUTTON_REFRESH' => 'Actualizar',
  'LBL_PMSE_BUTTON_SAVE' => 'Guardar',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'Registro de SugarCRM',
  'LBL_PMSE_CANCEL_MESSAGE' => '¿Está seguro de que desea cancelar el proceso número #{}?',
  'LBL_PMSE_FILTER' => 'Filtro',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Nota',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Tipo',
  'LBL_PMSE_FORM_LABEL_USER' => 'Usuario',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Seleccionar...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'La acción realizada fue: [%s]',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'La tarea todavía está asignada.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'llamada: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'creada',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'ha creado el proceso # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'en la actualidad tiene la ID de tarea %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Se ha hecho una tarea desconocida',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'editada',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'del módulo %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Desconocido (según ID de usuario:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'acción no registrada',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '( todavía no se ha iniciado )',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'dirigida',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'la tarea ha sido',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'la tarea fue',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'con el evento %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'con la pasarela %s se ha evaluado y dirigido a la siguiente tarea',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Añadir notas',
  'LBL_PMSE_LABEL_APPROVE' => 'Aprobar',
  'LBL_PMSE_LABEL_CANCEL' => 'Cancelar',
  'LBL_PMSE_LABEL_CLAIM' => 'Reclamar',
  'LBL_PMSE_LABEL_CURRENT' => 'Actual',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Actividad actual',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Fecha de vencimiento',
  'LBL_PMSE_LABEL_EXECUTE' => 'Ejecutar',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Tiempo esperado',
  'LBL_PMSE_LABEL_HISTORY' => 'Historial',
  'LBL_PMSE_LABEL_NOTES' => 'Mostrar notas',
  'LBL_PMSE_LABEL_OVERDUE' => 'Vencido',
  'LBL_PMSE_LABEL_PROCESS' => 'Proceso',
  'LBL_PMSE_LABEL_REJECT' => 'Rechazar',
  'LBL_PMSE_LABEL_ROUTE' => 'Ruta',
  'LBL_PMSE_LABEL_STATUS' => 'Estado',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Sin asignar',
  'LBL_PMSE_MY_PROCESSES' => 'Mis procesos',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Procesos de autoservicio',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Número de ciclos erróneo',
  'LBL_PMSE_SHOW_PROCESS' => 'Mostrar proceso',
  'LBL_PMSE_TITLE_HISTORY' => 'Historial del proceso',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Proceso #%s: estado actual',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Visor del registro de autores de procesos',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Administración de procesos',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Notas de procesos',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Procesos desatendidos',
  'LBL_PMSE_WARNING_CLEAR' => '¿Está seguro de que desea borrar los datos del registro? Está acción no se puede deshacer.',
  'LBL_PROCESS_DEFINITION_NAME' => 'Nombre de definición de procesos',
  'LBL_PROCESS_NAME' => 'Nombre del proceso',
  'LBL_PROCESS_OWNER' => 'Propietario de proceso',
  'LBL_RECORD_NAME' => 'Nombre del registro',
  'LBL_STATUS_CANCELLED' => 'Procesos cancelados',
  'LBL_STATUS_COMPLETED' => 'Procesos completados',
  'LBL_STATUS_ERROR' => 'Error de procesos',
  'LBL_STATUS_IN_PROGRESS' => 'Procesos en curso',
  'LBL_STATUS_TERMINATED' => 'Procesos finalizados',
  'LNK_LIST' => 'Ver procesos',
);

