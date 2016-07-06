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
  'ERR_DELETE_RECORD' => 'Um número de registo deve ser especificado para eliminar a entidade',
  'LBL_ACCEPT_LINK' => 'Link de Aceitação',
  'LBL_ACCEPT_STATUS' => 'Estado de Aceitação',
  'LBL_ACCOUNT_NAME' => 'Conta',
  'LBL_ACTIVITIES_REPORTS' => 'Relatório de Actividades',
  'LBL_ADD_BUTTON' => 'Adicionar',
  'LBL_ADD_INVITEE' => 'Adicionar convidados',
  'LBL_ASSIGNED_TO_ID' => 'Atribuído a:',
  'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
  'LBL_BLANK' => '-Nenhuma-',
  'LBL_CALL' => 'Chamada Telefónica:',
  'LBL_CALL_INFORMATION' => 'Informação da Chamada',
  'LBL_CANCEL_CREATE_INVITEE' => 'Cancelar',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Tem a certeza que quer remover todos os registos recorrentes?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_CONTACT_NAME' => 'Contacto:',
  'LBL_CREATE_AND_ADD' => 'Criar & Adicionar',
  'LBL_CREATE_CONTACT' => 'Como Contacto',
  'LBL_CREATE_INVITEE' => 'Criar um convidado',
  'LBL_CREATE_LEAD' => 'Como Lead',
  'LBL_CREATE_MODULE' => 'Registo de Chamada Telefónica',
  'LBL_DATE' => 'Data de Início:',
  'LBL_DATE_END' => 'Data de conclusão',
  'LBL_DATE_END_ERROR' => 'A data de fim é anterior à data de início',
  'LBL_DATE_TIME' => 'Data e Hora de Início:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Chamadas Telefónicas',
  'LBL_DEL' => 'Elim',
  'LBL_DESCRIPTION' => 'Descrição',
  'LBL_DESCRIPTION_INFORMATION' => 'Informações da Descrição',
  'LBL_DIRECTION' => 'Direcção:',
  'LBL_DURATION' => 'Duração:',
  'LBL_DURATION_HOURS' => 'Duração (horas):',
  'LBL_DURATION_MINUTES' => 'Duração (minutos):',
  'LBL_EDIT_ALL_RECURRENCES' => 'Editar Todas as Recorrências',
  'LBL_EMAIL' => 'E-mail',
  'LBL_EMAIL_REMINDER' => 'Email de aviso',
  'LBL_EMAIL_REMINDER_SENT' => 'Email de aviso enviado',
  'LBL_EMAIL_REMINDER_TIME' => 'Hora de envio do email de aviso',
  'LBL_EMPTY_SEARCH_RESULT' => 'Não foram encontrados resultados. Por favor criar um convidado abaixo.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID de Utilizador Atribuído',
  'LBL_EXPORT_CREATED_BY' => 'ID do Utilizador que Criou',
  'LBL_EXPORT_DATE_START' => 'Data e Hora de Inicio',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'ID do Utilizador que Modificou',
  'LBL_EXPORT_PARENT_TYPE' => 'Relacionado com o módulo',
  'LBL_EXPORT_REMINDER_TIME' => 'Tempo Restante (em minutos)',
  'LBL_FIRST_NAME' => 'Nome',
  'LBL_HELP_CREATE' => 'O módulo de {{plural_module_name}} é usado para seguir e gerir problemas relacionados com produtos ou serviços reportados pela sua organização ou clientes.



Para criar um {{module_name}}:
1. Fornecer valores para os campos como desejado.
- Campos marcados como "Obrigatórios" deverão ser preenchidos antes de gravar.
- Carregar "Mostrar mais" para mostrar campos adicionais se necessário.

2. Carregar em "Gravar" para finalizar o novo registo e retornar à página anterior.
- Escolher "Gravar e ver" para abrir o novo {{module_name}} na visualização do registo.
- Escolher "Gravar e criar novo" para criar imediatamente outro novo {{module_name}}.',
  'LBL_HELP_RECORD' => 'O módulo de {{plural_module_name}} é usado para seguir e gerir problemas relacionados com produtos ou serviços reportados pela sua organização ou clientes.

- Edite os campos deste registo carregando em um campo individualmente ou no botão Editar.
- Visualize ou modifique ligações para outros registos nos sub-paineis alterando o painel esquerdo do fundo para "Visaulização de Dados".
- Crie e visualize comentários de utilizador e grande alterações do histórico no {{activitystream_singular_module}}  alterando o painel esquerdo do fundo para "Fluxo de Actividade".
- Siga ou torne favorito este registo utilizando os ícones à direita do nome do registo.
- Acções adicionais estão disponíveis no menu de selecção Acções à direita do botão Editar.',
  'LBL_HELP_RECORDS' => 'O módulo {{module_name}} consiste em indivíduos que são prospectos não qualificados dos quais tem alguma informação, mas que ainda não são uma {{leads_singular_module}} qualificada. Informação (e.g. nome, e-mail, morada) acerca destes {{plural_module_name}} normalmente são obtidos de business cards que recebe quando participa em feiras, conferências, etc. {{plural_module_name}} no Sugar são registos soltos porque não estão relacionados com {{contacts_module}}, {{leads_module}}, {{accounts_module}}, ou {{opportunities_module}}. Existem diversas maneiras que pode usar para criar {{plural_module_name}} no Sugar, por exemplo através do módulo de {{plural_module_name}}, importando {{plural_module_name}}, etc. Uma vez criado o registo do {{module_name}} pode visualizar ou editar a informação relativa ao {{module_name}} através da vista de detalhe de {{plural_module_name}}.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas ou Anexos',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINUTES' => '(horas/minutos)',
  'LBL_INVITEE' => 'Convidados',
  'LBL_LAST_NAME' => 'Último Nome',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuído a',
  'LBL_LIST_CLOSE' => 'Fechar',
  'LBL_LIST_CONTACT' => 'Contacto',
  'LBL_LIST_DATE' => 'Data de Início',
  'LBL_LIST_DIRECTION' => 'Direcção',
  'LBL_LIST_DURATION' => 'Duração',
  'LBL_LIST_FORM_TITLE' => 'Listar Chamadas Telefónicas',
  'LBL_LIST_MY_CALLS' => 'As Minhas Chamadas Telefónicas',
  'LBL_LIST_RELATED_TO' => 'Referente a',
  'LBL_LIST_RELATED_TO_ID' => 'Referente ao ID',
  'LBL_LIST_SUBJECT' => 'Assunto',
  'LBL_LIST_TIME' => 'Hora de Início',
  'LBL_LOG_CALL' => 'Registo de Chamada Telefónica',
  'LBL_MEMBER_OF' => 'Membro de',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Chamadas Telefónicas',
  'LBL_MODULE_NAME_SINGULAR' => 'Chamada Telefónica',
  'LBL_MODULE_TITLE' => 'Chamadas Telefónicas: Ecrã Principal',
  'LBL_MY_SCHEDULED_CALLS' => 'As minhas chamadas ao Registo',
  'LBL_NAME' => 'Nome completo',
  'LBL_NEW_FORM_TITLE' => 'Criar Compromisso',
  'LBL_NO_ACCESS' => 'Não tem permissões para criar $module',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'ID Pai',
  'LBL_PHONE' => 'Telefone',
  'LBL_POPUP_REMINDER_TIME' => 'Popup Lembrete',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Você criou com êxito o registo {{moduleSingularLower}} em {{formatDate date_start}}, mas não tem permissões para aceder a esse registo.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Criou com sucesso o {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> em {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Recorrência',
  'LBL_RECURRING_LIMIT_ERROR' => 'Esta chamada recorrente não pode ser agendada porque excede o limite $limit máximo permitido de ocorrências.',
  'LBL_RECURRING_SOURCE' => 'Fonte Recorrente',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Chamada com {{{this}}}',
  'LBL_RELATED_TO' => 'Referente a:',
  'LBL_REMINDER' => 'Aviso:',
  'LBL_REMINDER_EMAIL' => 'E-mail',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Enviar email a todos os convidados',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Hora do aviso',
  'LBL_REMINDER_TITLE' => 'Chamada:',
  'LBL_REMOVE' => 'Remover',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Remover Todas as Recorrências',
  'LBL_REPEAT_COUNT' => 'Contagem de Repetição',
  'LBL_REPEAT_DOW' => 'Dow de Repetição',
  'LBL_REPEAT_END' => 'Fim',
  'LBL_REPEAT_END_AFTER' => 'Depois',
  'LBL_REPEAT_END_BY' => 'Por',
  'LBL_REPEAT_INTERVAL' => 'Intervalo de Repetição',
  'LBL_REPEAT_OCCURRENCES' => 'ocorrências',
  'LBL_REPEAT_PARENT_ID' => 'Id do Parente da Repetição',
  'LBL_REPEAT_TYPE' => 'Tipo de Repetição',
  'LBL_REPEAT_UNTIL' => 'Repetir Até',
  'LBL_REVENUELINEITEMS' => 'Itens de Linha de Receita',
  'LBL_SCHEDULING_FORM_TITLE' => 'Calendarização',
  'LBL_SEARCH_BUTTON' => 'Pesquisar',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Chamadas Telefónicas',
  'LBL_SELECT_FROM_DROPDOWN' => 'Por favor faça primeiro uma selecção da lista Referente A',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Enviar convites',
  'LBL_SEND_BUTTON_TITLE' => 'Enviar convites [Alt+I]',
  'LBL_SEND_INVITES' => 'Enviar convites',
  'LBL_STATUS' => 'Estado:',
  'LBL_SUBJECT' => 'Assunto:',
  'LBL_SYNCED_RECURRING_MSG' => 'Esta chamada é oriunda de outro sistema e foi sincronizada com o Sugar. Assim que esta chamada for editada no Sugar, irá deixar de ser possível sincronizar com outro sistema.',
  'LBL_TIME' => 'Hora de Início:',
  'LBL_TIME_END' => 'Hora de conclusão',
  'LBL_USERS_SUBPANEL_TITLE' => 'Utilizadores',
  'LNK_CALL_LIST' => 'Chamadas Telefónicas',
  'LNK_IMPORT_CALLS' => 'Importar Chamadas Telefónicas',
  'LNK_NEW_ACCOUNT' => 'Nova Entidade',
  'LNK_NEW_APPOINTMENT' => 'Criar Compromisso',
  'LNK_NEW_CALL' => 'Nova Chamada Telefónica',
  'LNK_NEW_MEETING' => 'Criar Reunião',
  'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
  'LNK_SELECT_ACCOUNT' => 'Seleccionar Entidade',
  'NOTICE_DURATION_TIME' => 'Tempo de duração deve ser maior que 0',
  'NTC_REMOVE_INVITEE' => 'Tem certeza que deseja remover este convidado da Chamada Telefónica?',
  'TPL_CALL_STATUS_CHANGED' => 'Chamada marcada como {{status}}.',
);

