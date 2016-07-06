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
  'LBL_ACTIVITY_OWNER' => 'Usuário do Processo',
  'LBL_ASSIGNED_USER' => 'Usuário Atribuído',
  'LBL_CAS_ID' => 'Número do Processo',
  'LBL_MODULE_NAME' => 'Processos',
  'LBL_MODULE_NAME_SINGULAR' => 'Processos',
  'LBL_MODULE_TITLE' => 'Processos',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 em <strong>%s</strong> Aprovado',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 em <strong>%s</strong> Declarado',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 em <strong>%s</strong> atribuído para usuário &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 em <strong>%s</strong> Rejeitado',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 em <strong>%s</strong> Redirecionado',
  'LBL_PMSE_BUTTON_CANCEL' => 'Cancelar',
  'LBL_PMSE_BUTTON_CLEAR' => 'Limpar',
  'LBL_PMSE_BUTTON_CLOSE' => 'Fechar',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Log do Autor do Processo',
  'LBL_PMSE_BUTTON_REFRESH' => 'Atualizar',
  'LBL_PMSE_BUTTON_SAVE' => 'Salvar',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'Log do SugarCRM',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Tem certeza que deseja cancelar o Número de Processo #{}?',
  'LBL_PMSE_FILTER' => 'Filtro',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Nota',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Tipo',
  'LBL_PMSE_FORM_LABEL_USER' => 'Usuário',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Selecionar...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'A ação realizada foi: <span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'A tarefa ainda está atribuída.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'nomeado: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'criada',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'criou o Processo nº %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'atualmente tem o ID da Tarefa %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Realizada como tarefa desconhecida',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'editada',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'do Módulo %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Desconhecido (ID de Usuário correspondente:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'ação não registrada',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '(ainda não iniciada)',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'redirecionada',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'a tarefa foi',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'a tarefa foi',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'com o Evento %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'com o Gateway %s foi avaliado e redirecionado para a próxima tarefa',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Adicionar Notas',
  'LBL_PMSE_LABEL_APPROVE' => 'Aprovar',
  'LBL_PMSE_LABEL_CANCEL' => 'Cancelar',
  'LBL_PMSE_LABEL_CLAIM' => 'Declarar',
  'LBL_PMSE_LABEL_CURRENT' => 'Atual',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Atividade Atual',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Prazo Limite',
  'LBL_PMSE_LABEL_EXECUTE' => 'Executar',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Horário Esperado',
  'LBL_PMSE_LABEL_HISTORY' => 'Histórico',
  'LBL_PMSE_LABEL_NOTES' => 'Mostrar Notas',
  'LBL_PMSE_LABEL_OVERDUE' => 'Atrasado',
  'LBL_PMSE_LABEL_PROCESS' => 'Processo',
  'LBL_PMSE_LABEL_REJECT' => 'Rejeitar',
  'LBL_PMSE_LABEL_ROUTE' => 'Redirecionar',
  'LBL_PMSE_LABEL_STATUS' => 'Status',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Não atribuído',
  'LBL_PMSE_MY_PROCESSES' => 'Meus Processos',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Processos de Autosserviço',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Número de Erro de Ciclos',
  'LBL_PMSE_SHOW_PROCESS' => 'Mostrar Processo',
  'LBL_PMSE_TITLE_HISTORY' => 'Histórico de Processos',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Processo nº %s: Status Atual',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Visualizador do Log do Autor do Processo',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Gerenciamento de Processos',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Notas do Processo',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Processos Autônomos',
  'LBL_PMSE_WARNING_CLEAR' => 'Tem certeza que deseja limpar os dados do registro? Essa ação não pode ser desfeita.',
  'LBL_PROCESS_DEFINITION_NAME' => 'Nome de Definição do Processo',
  'LBL_PROCESS_NAME' => 'Nome do Processo',
  'LBL_PROCESS_OWNER' => 'Proprietário do Processo',
  'LBL_RECORD_NAME' => 'Nome do Registro',
  'LBL_STATUS_CANCELLED' => 'Processos Cancelados',
  'LBL_STATUS_COMPLETED' => 'Processos Concluídos',
  'LBL_STATUS_ERROR' => 'Processos com Erro',
  'LBL_STATUS_IN_PROGRESS' => 'Processos em Andamento',
  'LBL_STATUS_TERMINATED' => 'Processos Terminados',
  'LNK_LIST' => 'Visualizar Processos',
);

