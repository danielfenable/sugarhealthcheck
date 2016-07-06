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
  'ERR_DELETE_RECORD' => 'Ha d´especificar un número de registre per eliminar la incidència.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitats',
  'LBL_ASSIGNED_TO_NAME' => 'Assignat a',
  'LBL_BUG' => 'Incidència:',
  'LBL_BUG_INFORMATION' => 'Visió General',
  'LBL_BUG_NUMBER' => 'Número d´Incidència:',
  'LBL_BUG_SUBJECT' => 'Assumpte de la Incidència:',
  'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactes',
  'LBL_CONTACT_BUG_TITLE' => 'Contacte-Incidència:',
  'LBL_CONTACT_NAME' => 'Contacte:',
  'LBL_CONTACT_ROLE' => 'Rol:',
  'LBL_CREATED_BY' => 'Creat per:',
  'LBL_DATE_CREATED' => 'Data de creació:',
  'LBL_DATE_LAST_MODIFIED' => 'Última modificació:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Seguiment d´Incidències',
  'LBL_DESCRIPTION' => 'Descripció:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID d&#39;usuari assignat',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nom d&#39;usuari assignat',
  'LBL_EXPORT_CREATED_BY' => 'Creat per ID',
  'LBL_EXPORT_FIXED_IN_RELEASE_NAMR' => 'Fix en versió',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificat per ID',
  'LBL_FIXED_IN_RELEASE' => 'Corregit en Llançament:',
  'LBL_FOUND_IN_RELEASE' => 'Trobat en Llançament:',
  'LBL_FOUND_IN_RELEASE_NAME' => 'Es troben en la versió',
  'LBL_HELP_CREATE' => 'El mòdul {{plural_module_name}} es fa servir per seguir i gestionar problemes, normalment anomenats {{plural_module_name}}, o defectes que s&#39;han trobat internament o  declarats pels clients. Per crear un {{module_name}}: 1. Proporcioneu els valors desitjats per als camps. - Els camps marcats "Obligatori" s&#39;han de completar abans de desar. - Feu clic a "Mostra més" per exposar camps addicionals si és necessari. 2. Feu clic a "Desa" per finalitzar el nou registre i torneu a la pàgina anterior. - Seleccioneu l&#39;opció "Guarda i vegeu" per obrir el nou {{module_name}}  en vista de registre. - Seleccioneu "Guarda i crea nou" per crear un nou {{module_name}} immediatament.',
  'LBL_HELP_RECORD' => 'El mòdul {{plural_module_name}} es fa servir per seguir i gestionar problemes, normalment anomenats {{plural_module_name}}, o defectes que s&#39;han trobat internament o  declarats pels clients. 
- Editeu els camps d&#39;aquest registre fent clic a un camp individual o amb el botó Edita.
- Vegeu o modifiqueu enllaços a altres registres als subpanells mitjançant la commutació de la subfinestra inferior esquerra a la "Vista de dades".
- Feu i vegeu comentaris d&#39;usuari i l&#39;historial de canvis del registre al {{activitystream_singular_module}} mitjançant la commutació de la subfinestra inferior esquerra al "Canal d&#39;activitat".
- Feu el seguiment d&#39;aquest favorit o marqueu-lo com a favorit amb les icones que hi han a la dreta del nom del registre.
- Hi han accions addicionals disponibles al menú desplegable d&#39;accions a la dreta del botó Edita.',
  'LBL_HELP_RECORDS' => 'El mòdul {{plural_module_name}} es fa servir per seguir i gestionar problemes, normalment anomenats {{plural_module_name}}, o defectes que s&#39;han trobat internament o  declarats pels clients. El {{plural_module_name}} es pot seguir mitjançant un seguiment del que es trobi i se solucioni al llançament. El {{plural_module_name}} proporciona als usuaris una manera ràpida per revisar tots els detalls del {{module_name}} i els processos que es fan servir per rectificar-lo. Quan ja s&#39;ha creat el {{module_name}}, podeu veure i editar la informació que pertany al {{module_name}} a la vista de registre de {{module_name}}. A continuació cada registre de {{module_name}} es pot relacionar amb altres registres de Sugar, com ara {{calls_module}}, {{contacts_module}}, {{cases_module}} i molts altres.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Històrial',
  'LBL_INVITEE' => 'Contactes',
  'LBL_LIST_ACCOUNT_NAME' => 'Compte',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuari Assignat',
  'LBL_LIST_CONTACT_NAME' => 'Contacte',
  'LBL_LIST_EMAIL_ADDRESS' => 'Correu',
  'LBL_LIST_FIXED_IN_RELEASE' => 'Corregit en Llançament',
  'LBL_LIST_FORM_TITLE' => 'Llista d´Incidències',
  'LBL_LIST_LAST_MODIFIED' => 'Modificat',
  'LBL_LIST_MY_BUGS' => 'Les Meves Incidències Assignades',
  'LBL_LIST_NUMBER' => 'Núm.',
  'LBL_LIST_PHONE' => 'Telèfon',
  'LBL_LIST_PRIORITY' => 'Prioritat',
  'LBL_LIST_RELEASE' => 'Release',
  'LBL_LIST_RESOLUTION' => 'Resolució',
  'LBL_LIST_STATUS' => 'Estat',
  'LBL_LIST_SUBJECT' => 'Assumpte',
  'LBL_LIST_TYPE' => 'Tipus',
  'LBL_MODIFIED_BY' => 'Modificat per:',
  'LBL_MODULE_ID' => 'Incidències',
  'LBL_MODULE_NAME' => 'Incidències',
  'LBL_MODULE_NAME_SINGULAR' => 'Incidència',
  'LBL_MODULE_TITLE' => 'Seguiment d´Incidències: Inici',
  'LBL_NEW_FORM_TITLE' => 'Nova Incidència',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Notes',
  'LBL_NUMBER' => 'Número:',
  'LBL_PORTAL_TOUR_RECORDS_CREATE' => 'Si vostè té un nou cas del suport que voleu enviar, pot fer clic aquí per afegir un nou cas.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER' => 'Pot realitzar un filtrat cap avall la llista de casos, proporcionant un terme de cerca.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER_EXAMPLE' => 'Per exemple, podeu usar això per trobar un tema que ha estat presentada amb anterioritat.',
  'LBL_PORTAL_TOUR_RECORDS_INTRO' => 'El mòdul per a la gestió de casos és problemes de suport que afecten al seu Compte. Utilitzeu les fletxes de sota per anar a través d&#39;una visita ràpida.',
  'LBL_PORTAL_TOUR_RECORDS_PAGE' => 'Aquesta pàgina mostra la llista d&#39;incidencies publicades.',
  'LBL_PORTAL_TOUR_RECORDS_RETURN' => 'En fer clic aquí, tornarà a aquest punt de vista en qualsevol moment.',
  'LBL_PORTAL_VIEWABLE' => 'Visible portal',
  'LBL_PRIORITY' => 'Prioritat:',
  'LBL_PRODUCT_CATEGORY' => 'Categoria:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projectes',
  'LBL_RELEASE' => 'Release:',
  'LBL_RESOLUTION' => 'Resolució:',
  'LBL_SEARCH_FORM_TITLE' => 'Recerca d´Incidències',
  'LBL_SHOW_IN_PORTAL' => 'Mostrar en el Portal',
  'LBL_SHOW_MORE' => 'Mostra més incidències',
  'LBL_SOURCE' => 'Font:',
  'LBL_STATUS' => 'Estat:',
  'LBL_SUBJECT' => 'Assumpte:',
  'LBL_SYSTEM_ID' => 'ID Sistema',
  'LBL_TYPE' => 'Tipus:',
  'LBL_WORK_LOG' => 'Registre d´Activitat:',
  'LNK_BUG_LIST' => 'Incidències',
  'LNK_BUG_REPORTS' => 'Informes d´Incidències',
  'LNK_CREATE' => 'Informes d´incidència',
  'LNK_CREATE_WHEN_EMPTY' => 'Crear una nova incidència',
  'LNK_IMPORT_BUGS' => 'Importar Incidencies',
  'LNK_NEW_BUG' => 'Informe d´Incidència',
  'NTC_DELETE_CONFIRMATION' => 'Està segur que desitja treure aquest contacte d´aquesta incidència?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Està segur que desitja moure aquesta incidència fora d´aquest compte?',
  'NTC_REMOVE_INVITEE' => 'Està segur que desitja treure aquest contacte de la incidència?',
);

