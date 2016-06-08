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
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_SEND_DATE_TIME'						=> 'Data de Envio',
	'LBL_IN_QUEUE'								=> 'Em Processamento',
	'LBL_IN_QUEUE_DATE'							=> 'Data de Fila',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Apenas valores inteiros são aceites para o número de e-mails enviados por lote',

	'LBL_ATTACHMENT_AUDIT'						=> 'foi enviado. Não foi duplicado localmente para preservar o uso do disco',
	'LBL_CONFIGURE_SETTINGS'					=> 'Configurar Definições de E-mail',
	'LBL_CUSTOM_LOCATION'						=> 'Definido pelo Utilizador',
	'LBL_DEFAULT_LOCATION'						=> 'Padrão',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Adicione a Mensagem de Divulgação a Todos os E-mails',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Conteúdos de Divulgação',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'AVISO: Esta mensagem de e-mail destina-se unicamente a ser utilizada pelo(s) destinatário(s) pretendido(s) e pode conter informação confidencial e privilegiada. Qualquer revisão, uso, divulgação ou distribuição não autorizada é proibida. Se você não é o destinatário pretendido, por favor destrua todas as cópias da mensagem original e notifique o remetente para que o nosso registo de endereços seja corrigido. Obrigado.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Criar mensagem de e-mail com esta definição de caracteres',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Criar e-mail utilizando este cliente',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Elimine Notas relacionadas e ficheiros em anexo com E-mails eliminados',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Preencher Padrões do Gmail&#153;',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Número de e-mails enviados por lote:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Permitir SMTP sobre SSL',
	'LBL_EMAIL_USER_TITLE'						=> 'Padrões de E-mail do Utilizador',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Configuração de E-mail de Saída',
	'LBL_EMAILS_PER_RUN'						=> 'Número de e-mails enviados por lote:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Campanha',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Processado',
	'LBL_LIST_FORM_TITLE'						=> 'Fila',
	'LBL_LIST_FROM_EMAIL'						=> 'E-mail do Remetente',
	'LBL_LIST_FROM_NAME'						=> 'Nome do Remetente',
	'LBL_LIST_IN_QUEUE'							=> 'Em Processamento',
	'LBL_LIST_MESSAGE_NAME'						=> 'Mensagem de Marketing',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'E-mail do Destinatário',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Nome do Destinatário',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Tentativas de Envio',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Enviar Em',
	'LBL_LIST_USER_NAME'						=> 'Nome do Utilizador',
	'LBL_LOCATION_ONLY'							=> 'Localização',
	'LBL_LOCATION_TRACK'						=> 'Localização dos ficheiros de Tracking da campanha (como p.e. o campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Guarde cópias de mensagens de campanha:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Pretende armazenar cópias completas de <bold>CADA</bold> mensagem de e-mail enviada durante todas as campanhas? <bold>Recomendamos-lhe Não por defeito</bold>. Escolhendo Não irá armazenar apenas os modelos que são enviados e as variáveis necessárias para recriar a mensagem individual.',
	'LBL_MAIL_SENDTYPE'							=> 'MTA:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Utilizar Autenticação SMTP?',
	'LBL_MAIL_SMTPPASS'							=> 'Palavra-passe SMTP:',
	'LBL_MAIL_SMTPPORT'							=> 'Porta SMTP:',
	'LBL_MAIL_SMTPSERVER'						=> 'Servidor SMTP:',
	'LBL_MAIL_SMTPUSER'							=> 'Nome do Utilizador:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Escolha o seu fornecedor de e-mail',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Password Yahoo! Mail',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'ID Yahoo! Mail',
	'LBL_GMAIL_SMTPPASS'					=> 'Password Gmail',
	'LBL_GMAIL_SMTPUSER'					=> 'Endereço de e-mail Gmail',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Palavra-passe Exchange',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Nome de Utilizador do Exchange',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Porta Servidor Exchange',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Servidor Exchange',
	'LBL_EMAIL_LINK_TYPE'				=> 'Cliente de e-mail',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Cliente de E-mail do Sugar:</b> Envie e-mails utilizando o cliente de e-mail na aplicação Sugar.<br>Esta opção só está disponível se o administrador tiver configurado as suas definições de e-mail de modo a permitir esta ação. Contacte o administrador se tiver alguma questão.<br><b>Cliente de E-mail Externo:</b> Envie e-mails utilizando um cliente de e-mail fora da aplicação Sugar, tal como o Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Id de Marketing',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Definições de E-mail',
	'LBL_MODULE_NAME_SINGULAR'						=> 'Definições de E-mail',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Configurar Campanhas de e-mail',
	'LBL_MODULE_TITLE'							=> 'Gestão da Fila de E-mails de Saída',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Enviar notificações via e-mail quando determinados registos forem atribuídos.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Endereço "De":',
	'LBL_NOTIFY_FROMNAME' 						=> 'Nome "De":',
	'LBL_NOTIFY_ON'								=> 'Notificações ligadas?',
	'LBL_ALLOW_USER_EMAIL_ACCOUNT'				=> 'Allow users to configure email accounts',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Enviar notificações por defeito a novos Utilizadores?',
	'LBL_NOTIFY_TITLE'							=> 'Opções de Notificações via E-mail',
	'LBL_OLD_ID'								=> 'Id Anterior',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Opções de E-mail de Saída',
	'LBL_RELATED_ID'							=> 'Id Relacionado',
	'LBL_RELATED_TYPE'							=> 'Tipo Relacionado',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Gravar E-mails de Saída Não Tratados',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Pesquisar Processados',
	'LBL_SEARCH_FORM_TITLE'						=> 'Pesquisar Filas',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Exibir E-mails Processados',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Exibir E-mails em Fila de Espera',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Valor definido para o parâmetro site_url no ficheiro Config.php',
	'TXT_REMOVE_ME_ALT'							=> 'Para se remover desta lista de e-mails vá a',
	'TXT_REMOVE_ME_CLICK'						=> 'clique aqui',
	'TXT_REMOVE_ME'								=> 'Para se remover desta lista de e-mails',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Enviar notificação do endereço de e-mail do Utilizador atribuído?',

	'LBL_SECURITY_TITLE'						=> 'Definições de Segurança do E-mail',
	'LBL_SECURITY_DESC'							=> 'Verificar o seguinte que NÃO deve ser permitido via E-mail de Entrada ou exibido no módulo de E-mails',
	'LBL_SECURITY_APPLET'						=> 'Etiqueta de Applet',
	'LBL_SECURITY_BASE'							=> 'Etiqueta de base',
	'LBL_SECURITY_EMBED'						=> 'Etiqueta de incorporar',
	'LBL_SECURITY_FORM'							=> 'Etiqueta de formulário',
	'LBL_SECURITY_FRAME'						=> 'Etiqueta de moldura',
	'LBL_SECURITY_FRAMESET'						=> 'Etiqueta de conjunto de molduras',
	'LBL_SECURITY_IFRAME'						=> 'etiqueta de iFrame',
	'LBL_SECURITY_IMPORT'						=> 'Etiqueta de importação',
	'LBL_SECURITY_LAYER'						=> 'Etiqueta de camada',
	'LBL_SECURITY_LINK'							=> 'Etiqueta de ligação',
	'LBL_SECURITY_OBJECT'						=> 'Etiqueta de objeto',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Selecionar precauções de segurança mínimas por defeito do Outlook (erros do lado da exibição correta).',
	'LBL_SECURITY_SCRIPT'						=> 'Etiqueta de script',
	'LBL_SECURITY_STYLE'						=> 'Etiqueta de estilo',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Activar Todas as Opções',
	'LBL_SECURITY_XMP'							=> 'Etiqueta Xmp',
    'LBL_YES'                                   => 'Sim',
    'LBL_NO'                                    => 'Não',
    'LBL_PREPEND_TEST'                          => '[Teste]:',
	'LBL_SEND_ATTEMPTS'							=> 'Tentativas de Envio',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Configurar o servidor de correio de saída padrão para enviar notificações por e-mail, inclusive alertas de workflow.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Permitir que utilizadores usem esta conta para enviar e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Quando esta opção for selecionada, todos os utilizadores serão capazes de enviar e-mails utilizando a mesma conta de correio de saída<br> utilizada para enviar notificações e alertas do sistema. Se a opção não estiver selecionada,<br> os utilizadores podem, mesmo assim, utilizar o servidor de correio de saída depois de fornecerem as respetivas informações da conta.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Quando ativado, o nome do utilizador será incluído no campo do e-mail. Este recurso pode não funcionar com servidores SMTP que não permitem o envio de uma conta de e-mail diferente da conta do servidor.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Ajuda' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Acesso não autorizado para administração.',
    'LBL_INVALID_ENTRY_POINT' => 'Não é um ponto de entrada válido',
);
