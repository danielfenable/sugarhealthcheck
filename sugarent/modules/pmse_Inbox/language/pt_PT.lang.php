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
  'LBL_ACTIVITY_OWNER' => 'Utilizador do Processo',
  'LBL_ASSIGNED_USER' => 'Utilizador Atribuido',
  'LBL_CAS_ID' => 'Número de Processo',
  'LBL_MODULE_NAME' => 'Processos',
  'LBL_MODULE_NAME_SINGULAR' => 'Processos',
  'LBL_MODULE_TITLE' => 'Processos',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 em <strong>%s</strong> Aprovado(s)',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 em <strong>%s</strong> Reclamado(s)',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 em <strong>%s</strong> atribuído(s) ao utilizador &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 em <strong>%s</strong> Rejeitado(s)',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 em <strong>%s</strong> Encaminhado(s)',
  'LBL_PMSE_BUTTON_CANCEL' => 'Cancelar',
  'LBL_PMSE_BUTTON_CLEAR' => 'Limpar',
  'LBL_PMSE_BUTTON_CLOSE' => 'Fechar',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Processar Logs do Autor',
  'LBL_PMSE_BUTTON_REFRESH' => 'Actualizar',
  'LBL_PMSE_BUTTON_SAVE' => 'Guardar',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'Log do SugarCRM',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Tem a certeza que pretende cancelar o Processo Número #{}?',
  'LBL_PMSE_FILTER' => 'Filtro',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Nota',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Tipo',
  'LBL_PMSE_FORM_LABEL_USER' => 'Utilizador',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Seleccionar...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'A acção executada foi: <span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'A tarefa ainda está atribuída.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'com o nome: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'criada',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'criou o Processo # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'actualmente tem a tarefa %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Foi concluída uma tarefa desconhecida',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'editada',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'do Módulo %s %s .',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Desconhecido (de acordo com o UserId:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'acção não registada',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '( ainda não foi iniciada )',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'dirigida',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'a tarefa foi',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'a tarefa foi',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'com o evento %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'com a Porta de Entrada %s foi avaliada e encaminhada para a tarefa seguinte',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Adicionar Notas',
  'LBL_PMSE_LABEL_APPROVE' => 'Aprovar',
  'LBL_PMSE_LABEL_CANCEL' => 'Cancelar',
  'LBL_PMSE_LABEL_CLAIM' => 'Reivindicar',
  'LBL_PMSE_LABEL_CURRENT' => 'Actual',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Actividade Actual',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Data de Vencimento',
  'LBL_PMSE_LABEL_EXECUTE' => 'Executar',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Tempo esperado',
  'LBL_PMSE_LABEL_HISTORY' => 'Histórico',
  'LBL_PMSE_LABEL_NOTES' => 'Mostrar Notas',
  'LBL_PMSE_LABEL_OVERDUE' => 'Vencida',
  'LBL_PMSE_LABEL_PROCESS' => 'Processo',
  'LBL_PMSE_LABEL_REJECT' => 'Rejeitar',
  'LBL_PMSE_LABEL_ROUTE' => 'Encaminhar',
  'LBL_PMSE_LABEL_STATUS' => 'Estado',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Não atribuida',
  'LBL_PMSE_MY_PROCESSES' => 'Os Meus Processos',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Processos Self-Service',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Número de Ciclos de Erro',
  'LBL_PMSE_SHOW_PROCESS' => 'Mostrar Processos',
  'LBL_PMSE_TITLE_HISTORY' => 'Histórico dos Processos',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Processo #%s: Estado Actual',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Visualizador de Logs de Processos do Autor',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Gestão de Processos',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Notas do Processo',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Processos Desacompanhados',
  'LBL_PMSE_WARNING_CLEAR' => 'Tem a certeza que pretende apagar os dados do log? Esta ação não pode ser revertida.',
  'LBL_PROCESS_DEFINITION_NAME' => 'Nome da Definição do Processo',
  'LBL_PROCESS_NAME' => 'Nome do Processo',
  'LBL_PROCESS_OWNER' => 'Titular do Processo',
  'LBL_RECORD_NAME' => 'Nome do Registo',
  'LBL_STATUS_CANCELLED' => 'Processos Cancelados',
  'LBL_STATUS_COMPLETED' => 'Processos Concluídos',
  'LBL_STATUS_ERROR' => 'Processos com Erro',
  'LBL_STATUS_IN_PROGRESS' => 'Processos em Curso',
  'LBL_STATUS_TERMINATED' => 'Processos Finalizados',
  'LNK_LIST' => 'Ver Processos',
);

