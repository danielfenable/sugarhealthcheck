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
  'ERR_DELETE_RECORD' => 'Um número de registro deve ser especificado para eliminar a conta',
  'LBL_ACCEPT_LINK' => 'Aceitar link',
  'LBL_ACCEPT_STATUS' => 'Aceitar Status',
  'LBL_ACCOUNT_NAME' => 'Conta',
  'LBL_ACTIVITIES_REPORTS' => 'Relatório de Atividades',
  'LBL_ADD_BUTTON' => 'Adicionar',
  'LBL_ADD_INVITEE' => 'Adicionar convidados',
  'LBL_ASSIGNED_TO_ID' => 'Atribuído a:',
  'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
  'LBL_BLANK' => '-Nenhuma-',
  'LBL_CALL' => 'Ligações:',
  'LBL_CALL_INFORMATION' => 'Informação da Chamada',
  'LBL_CANCEL_CREATE_INVITEE' => 'Cancelar',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Tem certeza que deseja remover todos os registros recorrentes?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
  'LBL_CONTACT_NAME' => 'Contato:',
  'LBL_CREATE_AND_ADD' => 'Criar e adicionar',
  'LBL_CREATE_CONTACT' => 'Criar contato',
  'LBL_CREATE_INVITEE' => 'Criar um convite',
  'LBL_CREATE_LEAD' => 'Criar Potencial',
  'LBL_CREATE_MODULE' => 'Criar Nova Ligação',
  'LBL_DATE' => 'Data de Início:',
  'LBL_DATE_END' => 'Data de conclusão',
  'LBL_DATE_END_ERROR' => 'Data final está antes de data incial',
  'LBL_DATE_TIME' => 'Data e Hora de Início:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ligações',
  'LBL_DEL' => 'Elim',
  'LBL_DESCRIPTION' => 'Descrição',
  'LBL_DESCRIPTION_INFORMATION' => 'Informações da Descrição',
  'LBL_DIRECTION' => 'Direção:',
  'LBL_DURATION' => 'Duração:',
  'LBL_DURATION_HOURS' => 'Duração (horas):',
  'LBL_DURATION_MINUTES' => 'Duração (minutos):',
  'LBL_EDIT_ALL_RECURRENCES' => 'Editar todas as recorrências',
  'LBL_EMAIL' => 'E-mail',
  'LBL_EMAIL_REMINDER' => 'Alerta de E-mail',
  'LBL_EMAIL_REMINDER_SENT' => 'Alerta de E-mail Enviado',
  'LBL_EMAIL_REMINDER_TIME' => 'Alerta de E-mail',
  'LBL_EMPTY_SEARCH_RESULT' => 'Descuple, nenhum resultado foi achado. Favor criar um convite abaixo.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID usuário Atribuído',
  'LBL_EXPORT_CREATED_BY' => 'Criado pelo ID',
  'LBL_EXPORT_DATE_START' => 'Data de Início',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Atribuído a ID:',
  'LBL_EXPORT_PARENT_TYPE' => 'Relacionado ao Módulo',
  'LBL_EXPORT_REMINDER_TIME' => 'Tempo lembrete (em minutos)',
  'LBL_FIRST_NAME' => 'Nome',
  'LBL_HELP_CREATE' => 'O módulo {{plural_module_name}} consiste em registros de {{calls_singular_module}} criados por usuários em sua organização. O {{plural_module_name}} pode estar em um status de "Planejado", "Em Espera" ou "Cancelado". Usuários do Sugar, assim como contatos e leads, podem ser adicionados como convidados.

Para criar um {{calls_singular_module}}:
1. Forneça valores para os campos conforme desejado.
    - Campos marcados como "Obrigatório" devem ser completados antes de salvar.
    - Clique em "Mostrar Mais" para expor campos adicionais se necessário.
2. Adicionar convidados para o {{calls_singular_module}}.
    - Clique em "Selecionar Participante" para adicionar um usuário, contato ou lead existente ao {{calls_singular_module}}.
    - Clique no ícone de mais à direita de "Selecionar um Participante" para criar um participante do {{calls_singular_module}} como um novo registro do Sugar.
3. Clique em "Salvar" para finalizar o novo registro e retornar à página anterior.
    - Escolha "Salvar e visualizar" para abrir o novo {{calls_singular_module}} em visualização de registro.
    - Escolha "Salvar e criar novo" para criar imediatamente outro novo {{calls_singular_module}}.',
  'LBL_HELP_RECORD' => 'O módulo {{plural_module_name}} consiste em registros de {{calls_singular_module}} criado por usuários em sua organização. O {{plural_module_name}} pode estar em um status de "Agendado", "Em Espera" ou "Cancelado". Usuários do Sugar, assim como {{contacts_module}} e {{leads_module}}, podem ser adicionados como convidados.

- Edite os campos deste registro clicando em um campo individual ou no botão Editar.
- Visualize ou modifique links para outros registros nos subpainéis alternando o painel esquerdo inferior para "Visualização de Dados".
- Faça e visualize comentários de usuários e registre o histórico de alterações na cadeia de atividades alternando o painel esquerdo inferior para "Cadeia de Atividades".
- Siga ou marque como favorito este registro usando os ícones à direita do nome do registro.
- Ações adicionais estão disponíveis no menu suspenso Ações à direita do botão Editar.',
  'LBL_HELP_RECORDS' => 'O módulo {{plural_module_name}} consiste em registros de chamada que podem estar em um status de "Agendado", "Em Espera" ou "Cancelado". Chamadas futuras agendadas nas próximas 24 horas têm a data de início destacada em azul. Chamadas passadas têm a data de início destacada em vermelho.

Nesta visualização de lista {{plural_module_name}}, é possível visualizar e editar de forma linear as informações de chamada. Ações adicionais estão disponíveis no menu no final de cada linha de chamada. Você pode selecionar "Fechar" no menu em qualquer linha da chamada agendada para marcá-la como em espera.

Usuários, contatos e leads do Sugar podem ser adicionados como convidados. O {{plural_module_name}} pode ser criado por meio do módulo {{plural_module_name}}, módulo Calendário, importar, assim como do subpainel Atividades (para módulos de Legado) ou do dashlet Atividades Planejadas(para módulos de Resseguro) nos registros do módulo relacionado (por ex., Contatos, Contas, etc.), que cria automaticamente um relacionamento entre ambos os registros.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas ou Anexos',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINUTES' => '(horas/minutos)',
  'LBL_INVITEE' => 'Convidados',
  'LBL_LAST_NAME' => 'Último Nome',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciais',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuído a',
  'LBL_LIST_CLOSE' => 'Fechar',
  'LBL_LIST_CONTACT' => 'Contato',
  'LBL_LIST_DATE' => 'Data de Início',
  'LBL_LIST_DIRECTION' => 'Direção',
  'LBL_LIST_DURATION' => 'Duração',
  'LBL_LIST_FORM_TITLE' => 'Listar Ligações',
  'LBL_LIST_MY_CALLS' => 'As Minhas Ligações',
  'LBL_LIST_RELATED_TO' => 'Referente a',
  'LBL_LIST_RELATED_TO_ID' => 'Referente ao ID',
  'LBL_LIST_SUBJECT' => 'Assunto',
  'LBL_LIST_TIME' => 'Hora de Início',
  'LBL_LOG_CALL' => 'Registo de Ligações',
  'LBL_MEMBER_OF' => 'Membro de',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Ligações',
  'LBL_MODULE_NAME_SINGULAR' => 'Ligações:',
  'LBL_MODULE_TITLE' => 'Ligações: Tela Principal',
  'LBL_MY_SCHEDULED_CALLS' => 'Minhas Chamadas Agendadas',
  'LBL_NAME' => 'Nome completo',
  'LBL_NEW_FORM_TITLE' => 'Criar Compromisso',
  'LBL_NO_ACCESS' => 'Você não tem acesso para criação de Módulos',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'ID Origem:',
  'LBL_PHONE' => 'Telefone',
  'LBL_POPUP_REMINDER_TIME' => 'Horário do Lembrete Pop-up',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Você agendou o {{moduleSingularLower}} para {{formatDate date_start}}, mas não tem permissão para acessá-lo.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Você agendou o {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> para {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'recorrência',
  'LBL_RECURRING_LIMIT_ERROR' => 'Esta chamada recorrente não pode ser programado porque excede o máximo permitido de recorrência limite',
  'LBL_RECURRING_SOURCE' => 'Recurring Source',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Ligação com {{{this}}}',
  'LBL_RELATED_TO' => 'Referente a:',
  'LBL_REMINDER' => 'Aviso:',
  'LBL_REMINDER_EMAIL' => 'E-mail',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email para todos os convidados',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Hora do aviso',
  'LBL_REMINDER_TITLE' => 'Ligação',
  'LBL_REMOVE' => 'Remover',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Remover todas recorrências',
  'LBL_REPEAT_COUNT' => 'Repetir Contagem',
  'LBL_REPEAT_DOW' => 'Repetir Dow',
  'LBL_REPEAT_END' => 'Fim',
  'LBL_REPEAT_END_AFTER' => 'Depois',
  'LBL_REPEAT_END_BY' => 'Por',
  'LBL_REPEAT_INTERVAL' => 'Repetir Intervalo',
  'LBL_REPEAT_OCCURRENCES' => 'Recorrências',
  'LBL_REPEAT_PARENT_ID' => 'Repetir Parent ID',
  'LBL_REPEAT_TYPE' => 'Repetir Tipo',
  'LBL_REPEAT_UNTIL' => 'Repetir até',
  'LBL_REVENUELINEITEMS' => 'Receita Itens de Linha',
  'LBL_SCHEDULING_FORM_TITLE' => 'Calendario',
  'LBL_SEARCH_BUTTON' => 'Pesquisar',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Ligações',
  'LBL_SELECT_FROM_DROPDOWN' => 'Por favor faça primeiro uma selecção da lista Referente A',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Enviar convites',
  'LBL_SEND_BUTTON_TITLE' => 'Enviar convites [Alt+I]',
  'LBL_SEND_INVITES' => 'Enviar convites',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Assunto:',
  'LBL_SYNCED_RECURRING_MSG' => 'Esta ligação foi criada em outro sistema e syncronizada com o Sugar. Para realizar alterações vá para o sistema onde foi gravada a ligação original. Alterações realizadas no outro sistema podem ser sincronizadas neste registro.',
  'LBL_TIME' => 'Hora de Início:',
  'LBL_TIME_END' => 'Hora de conclusão',
  'LBL_USERS_SUBPANEL_TITLE' => 'Usuários',
  'LNK_CALL_LIST' => 'Ligações',
  'LNK_IMPORT_CALLS' => 'Importar Ligações',
  'LNK_NEW_ACCOUNT' => 'Nova conta',
  'LNK_NEW_APPOINTMENT' => 'Criar Compromisso',
  'LNK_NEW_CALL' => 'Nova Ligação',
  'LNK_NEW_MEETING' => 'Criar Reunião',
  'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
  'LNK_SELECT_ACCOUNT' => 'Seleccionar conta',
  'NOTICE_DURATION_TIME' => 'Tempo de duração deve ser maior que 0',
  'NTC_REMOVE_INVITEE' => 'Tem certeza que deseja remover este convidado da Ligação?',
  'TPL_CALL_STATUS_CHANGED' => 'Ligação marcada como {{status}}.',
);

