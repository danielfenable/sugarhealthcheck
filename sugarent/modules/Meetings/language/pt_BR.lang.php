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
  'ERR_DELETE_RECORD' => 'Um número de registro deve ser especificado para eliminar a reunião.',
  'LBL_ACCEPT_LINK' => 'Aceitar link',
  'LBL_ACCEPT_STATUS' => 'Status aceito',
  'LBL_ACCEPT_THIS' => 'Aceitar?',
  'LBL_ACCOUNT_NAME' => 'Conta',
  'LBL_ACTIVITIES_REPORTS' => 'Relatório de Atividades',
  'LBL_ADD_BUTTON' => 'Adicionar',
  'LBL_ADD_INVITEE' => 'Adicionar convidados',
  'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
  'LBL_CANCEL_CREATE_INVITEE' => 'Cancelar',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Tem certeza que deseja remover todos os registros recorrentes?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
  'LBL_CONTACT_NAME' => 'Contato:',
  'LBL_CREATED_BY' => 'Criado por',
  'LBL_CREATED_USER' => 'Usuário Criado',
  'LBL_CREATE_AND_ADD' => 'Criar e adicionar',
  'LBL_CREATE_CONTACT' => 'Criar contato',
  'LBL_CREATE_INVITEE' => 'Criar um convite',
  'LBL_CREATE_LEAD' => 'Criar Potencial',
  'LBL_CREATE_MODULE' => 'Agendar Nova Reunião',
  'LBL_CREATOR' => 'Criador da Reunião',
  'LBL_DATE' => 'Data de Início:',
  'LBL_DATE_END' => 'Data de Fim',
  'LBL_DATE_END_ERROR' => 'Data final está antes de data incial',
  'LBL_DATE_TIME' => 'Data e Hora de Início:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Reuniões',
  'LBL_DEL' => 'Eliminar',
  'LBL_DESCRIPTION' => 'Descrição:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informações da Descrição',
  'LBL_DIRECTION' => 'Direção:',
  'LBL_DISPLAYED_URL' => 'Mostrar URL',
  'LBL_DURATION' => 'Duração:',
  'LBL_DURATION_HOURS' => 'Duração (horas):',
  'LBL_DURATION_MINUTES' => 'Duração (minutos):',
  'LBL_EDIT_ALL_RECURRENCES' => 'Editar todas as recorrências',
  'LBL_EMAIL' => 'E-mail',
  'LBL_EMAIL_REMINDER' => 'Alerta de E-mail',
  'LBL_EMAIL_REMINDER_SENT' => 'Alerta de E-mail Enviado',
  'LBL_EMAIL_REMINDER_TIME' => 'Alerta de E-mail',
  'LBL_EMPTY_SEARCH_RESULT' => 'Descuple, nenhum resultado foi achado. favor criar um convite abaixo.',
  'LBL_ERROR_LAUNCH_MEETING_GENERAL' => 'Houve um erro ao iniciar esta reunião. Entre em contato com seu Administrador.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID usuário Atribuído',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'nome de usuário atribuído',
  'LBL_EXPORT_CREATED_BY' => 'Criado pelo ID',
  'LBL_EXPORT_DATE_END' => 'Data de Término',
  'LBL_EXPORT_DATE_START' => 'Data de Início',
  'LBL_EXPORT_DISPLAYED_URL' => 'URL exibida',
  'LBL_EXPORT_EXTERNAL_ID' => 'ID Externo',
  'LBL_EXPORT_HOST_URL' => 'URL Hospedada',
  'LBL_EXPORT_JOIN_URL' => 'URL',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado Por ID',
  'LBL_EXPORT_PARENT_ID' => 'ID Origem:',
  'LBL_EXPORT_PARENT_TYPE' => 'Tipo Relacionado',
  'LBL_EXPORT_REMINDER_TIME' => 'Tempo lembrete (em minutos)',
  'LBL_EXTERNALID' => 'ID Externo da App',
  'LBL_EXTNOSTART_HEADER' => 'Erro: Não é possível começar a Reunião',
  'LBL_EXTNOSTART_MAIN' => 'Não é possível iniciar esta reunião porque não é um Administrador ou o proprietário desta reunião.',
  'LBL_EXTNOT_GO_BACK' => 'Voltar ao registro anterior',
  'LBL_EXTNOT_HEADER' => 'Erro: Não foi convidado',
  'LBL_EXTNOT_MAIN' => 'Não é possível participar desta reunião porque não é um Convidado.',
  'LBL_EXTNOT_RECORD_LINK' => 'Ver Reunião',
  'LBL_FIRST_NAME' => 'Primeiro Nome',
  'LBL_HELP_CREATE' => 'O módulo {{plural_module_name}} consiste em registros de {{meetings_module}} criados por usuários em sua organização. O {{plural_module_name}} pode estar em status de "Planejado", "Em Espera" ou "Cancelado". Os usuários do Sugar, assim como {{contacts_module}} e {{leads_module}}, podem ser adicionados como convidados.

Para criar um {{meetings_singular_module}}:
1. Forneça valores para os campos conforme desejado.
    - Campos marcados como "Obrigatório" devem ser completados antes de salvar.
    - Clique em "Mostrar Mais" para expor campos adicionais se necessário.
2. Adicione convidados ao {{meetings_singular_module}}.
    - Clique em "Selecionar um Participante" para adicionar um usuário, contato ou lead existente, ao {{meetings_singular_module}}.
    - Clique no ícone de mais à direita de "Selecionar um Participante" para criar um participante do {{meetings_singular_module}} como um novo registro do Sugar.
3. Clique em "Salvar" para finalizar o novo registro e retorne à página anterior.
    - Escolha "Salvar e visualizar" para abrir a nova reunião na visualização de registro.
    - Escolha "Salvar e criar novo" para criar imediatamente outro novo {{meetings_singular_module}}.',
  'LBL_HELP_RECORD' => 'O módulo {{plural_module_name}} consiste em registros de {{meetings_singular_module}} criados por usuários em sua organização. O {{plural_module_name}} pode estar em um status de "Planejado", "Em Espera" ou "Cancelado". Os usuários do Sugar, assim como {{contacts_module}} e {{leads_module}}, podem ser adicionados como convidados.

- Edite os campos deste registro clicando em um campo individual ou no botão Editar.
- Visualize ou modifique os links para outros registros nos subpaineis alternando o painel esquerdo inferior para "Visualização de Dados".
- Faça e visualize comentários de usuário e registre o histórico de alterações na cadeia de atividades alternando o painel esquerdo inferior para "Cadeia de Atividades".
- Siga ou marque como favorito este registro usando os ícones à direita do nome do registro.
- Ações adicionais estão disponíveis na lista suspensa do menu Ações à direita do botão Editar.',
  'LBL_HELP_RECORDS' => 'O módulo {{plural_module_name}} consiste em registros de reuniões que podem estar em um status de "Agendado", "Em Espera" ou "Cancelado". Reuniões futuras agendadas nas próximas 24 horas mostram a data de início destacada em azul. Reuniões passadas mostram a data de início destacada em vermelho.

Nesta visualização de lista {{plural_module_name}}, é possível visualizar e editar de forma linear as informações da reunião. Ações adicionais estão disponíveis no menu no final de cada linha da reunião. Você pode selecionar "Fechar" no menu em qualquer linha da reunião agendada para marcá-la como em espera.

Usuários, contatos e leads do Sugar podem ser adicionados como convidados da reunião. {{plural_module_name}} pode ser criado por meio do módulo {{plural_module_name}}, módulo Calendário, assim como pelo subpainel Atividades (para módulos de Legado) ou pelo dashlet Atividades Planejadas (para módulos de Resseguro) em registros de módulo relacionados (por ex., Contatos, Contas, etc.), que automaticamente cria um relacionamento entre ambos os registros.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas ou Anexos',
  'LBL_HOST_EXT_MEETING' => 'Começar a Reunião',
  'LBL_HOST_URL' => 'Hospedar URL',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINS' => '(horas/minutos)',
  'LBL_INVITEE' => 'Convidados',
  'LBL_JOIN_EXT_MEETING' => 'Participar Reunião',
  'LBL_JOIN_MEETING' => 'Unir-se a {{meetingType}}',
  'LBL_LAST_NAME' => 'Último Nome',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciais',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuário',
  'LBL_LIST_CLOSE' => 'Fechar',
  'LBL_LIST_CONTACT' => 'Contato',
  'LBL_LIST_DATE' => 'Data de Início',
  'LBL_LIST_DATE_MODIFIED' => 'Data da modificação',
  'LBL_LIST_DIRECTION' => 'Direção',
  'LBL_LIST_DUE_DATE' => 'Data Limite',
  'LBL_LIST_FORM_TITLE' => 'Listar Reuniões',
  'LBL_LIST_JOIN_MEETING' => 'Participar da Reunião',
  'LBL_LIST_MY_MEETINGS' => 'As Minhas Reuniões',
  'LBL_LIST_RELATED_TO' => 'Referente a',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUBJECT' => 'Assunto',
  'LBL_LIST_TIME' => 'Hora de Início',
  'LBL_LOCATION' => 'Local:',
  'LBL_MEETING' => 'Reunião:',
  'LBL_MEETING_CLOSE_SUCCESS' => 'Reunião encerrada com sucesso.',
  'LBL_MEETING_INFORMATION' => 'Informação da Reunião',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODIFIED_BY' => 'Modificado por',
  'LBL_MODIFIED_USER' => 'Usuário Modificado',
  'LBL_MODULE_NAME' => 'Reuniões',
  'LBL_MODULE_NAME_SINGULAR' => 'Reunião',
  'LBL_MODULE_TITLE' => 'Reuniões: Tela Principal',
  'LBL_MY_SCHEDULED_MEETINGS' => 'Minhas Reuniões Agendadas',
  'LBL_NAME' => 'Nome',
  'LBL_NEW_FORM_TITLE' => 'Criar Novo Compromisso',
  'LBL_NO_ACCESS' => 'Você não tem acesso para criação de Módulos',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'ID Origem:',
  'LBL_PARENT_TYPE' => 'Tipo de Origem:',
  'LBL_PASSWORD' => 'Senha de Reunião',
  'LBL_PHONE' => 'Telefone do Escritório',
  'LBL_POPUP_REMINDER' => 'Lembrete Pop-up',
  'LBL_POPUP_REMINDER_TIME' => 'Horário do Lembrete Pop-up',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Você agendou o {{moduleSingularLower}} para {{formatDate date_start}}, mas não tem permissão para acessá-lo.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Você agendou o {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> para {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'recorrência',
  'LBL_RECURRING_LIMIT_ERROR' => 'Esta reunião recorrente não pode ser programado porque excede o limite máximo permitido de recorrência.',
  'LBL_RECURRING_SOURCE' => 'Recurring Source',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Encontrou com {{{this}}}',
  'LBL_RELATED_TO' => 'Referente a:',
  'LBL_REMINDER' => 'Aviso:',
  'LBL_REMINDER_EMAIL' => 'E-mail',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email para todos os convidados',
  'LBL_REMINDER_POPUP' => 'Pop Up',
  'LBL_REMINDER_TIME' => 'Hora do Aviso',
  'LBL_REMINDER_TITLE' => 'Reunião:',
  'LBL_REMOVE' => 'rem',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Remover todas recorrências',
  'LBL_REPEAT_COUNT' => 'Repetir Contagem',
  'LBL_REPEAT_DOW' => 'Repetir Dow',
  'LBL_REPEAT_END' => 'Fim',
  'LBL_REPEAT_END_AFTER' => 'Depois',
  'LBL_REPEAT_END_BY' => 'Por',
  'LBL_REPEAT_INTERVAL' => 'Repetir Intervalo',
  'LBL_REPEAT_OCCURRENCES' => 'Recorrências',
  'LBL_REPEAT_PARENT_ID' => 'Repetir Parent ID',
  'LBL_REPEAT_TYPE' => 'Repetir Type',
  'LBL_REPEAT_UNTIL' => 'Repetir até',
  'LBL_REVENUELINEITEMS' => 'Itens da linha de Receita',
  'LBL_SCHEDULING_FORM_TITLE' => 'Agenda',
  'LBL_SEARCH_BUTTON' => 'Pesquisar',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Reuniões',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Enviar convites',
  'LBL_SEND_BUTTON_TITLE' => 'Enviar convites [Alt+I]',
  'LBL_SEND_INVITES' => 'Enviar convites',
  'LBL_SEQUENCE' => 'Atualização da reunião',
  'LBL_START_MEETING' => 'Iniciar {{meetingType}}',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Assunto:',
  'LBL_SYNCED_RECURRING_MSG' => 'Esta reunião foi criada em outro sistema e syncronizada com o Sugar. Para realizar alterações vá para o sistema onde foi gravada a reunião original. Alterações realizadas no outro sistema podem ser sincronizadas neste registro.',
  'LBL_TIME' => 'Hora de Início:',
  'LBL_TYPE' => 'Tipo de Reunião',
  'LBL_URL' => 'Começar/Juntar a Reunião',
  'LBL_USERS_SUBPANEL_TITLE' => 'Usuários',
  'LNK_IMPORT_MEETINGS' => 'Importar Reuniões',
  'LNK_MEETING_LIST' => 'Reuniões',
  'LNK_NEW_APPOINTMENT' => 'Criar Compromisso',
  'LNK_NEW_MEETING' => 'Nova Reunião',
  'NOTICE_DURATION_TIME' => 'Tempo de duração deve ser maior que 0',
  'NTC_REMOVE_INVITEE' => 'Tem certeza que deseja remover este convidado da Reunião?',
);

