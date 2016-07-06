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
  'DATE_FORMAT' => '(yyyy-mm-dd)',
  'ERR_DELETE_RECORD' => 'Te que especificar un número de registre per eliminar el contacte.',
  'ERR_INVALID_HOUR' => 'Si us plau, posi una hora entre 0 i 24',
  'LBL_ACTIVITIES_REPORTS' => 'Informe d&#39;Activitat',
  'LBL_ASSIGNED_TO_NAME' => 'Assignat a:',
  'LBL_ASSIGNED_USER' => 'Assignat a',
  'LBL_COLON' => ':',
  'LBL_CONTACT' => 'Contacte:',
  'LBL_CONTACT_FIRST_NAME' => 'Nom del Contacte',
  'LBL_CONTACT_ID' => 'ID de Contacte:',
  'LBL_CONTACT_LAST_NAME' => 'Cognom del Contacte',
  'LBL_CONTACT_NAME' => 'Contacte',
  'LBL_CONTACT_PHONE' => 'Telèfon de Contacte:',
  'LBL_DATE_DUE' => 'Data venciment',
  'LBL_DATE_DUE_FLAG' => 'Sense data de venciment',
  'LBL_DATE_START_FLAG' => 'Sense data d´inici',
  'LBL_DEFAULT_PRIORITY' => 'Mitja',
  'LBL_DESCRIPTION' => 'Descripció:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informació addicional',
  'LBL_DUE_DATE' => 'Data venciment:',
  'LBL_DUE_DATE_AND_TIME' => 'Data i hora de venciment:',
  'LBL_DUE_TIME' => 'Hora venciment:',
  'LBL_EDITLAYOUT' => 'Editar disseny',
  'LBL_EMAIL' => 'Correu:',
  'LBL_EMAIL_ADDRESS' => 'Direcció de Correu:',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID d&#39;usuari assignat',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nom d&#39;usuari assignat',
  'LBL_EXPORT_CREATED_BY' => 'Creat per ID',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificat per ID',
  'LBL_EXPORT_PARENT_ID' => 'Relacionat al ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Relacionat al mòdul',
  'LBL_HELP_CREATE' => 'El mòdul {{plural_module_name}} està format per accions flexibles, tasques pendents i altres tipus d&#39;activitats que s&#39;han de completar. Per crear un {{module_name}}:. 1 Proporcioneu valors per als camps com desitgi. - Els camps marcats "Obligatori" s&#39;han de completat abans de desar. - Feu clic a "Mostra més" per exposar camps addicionals si és necessari. 2. Feu clic a "Desa" per finalitzar el nou registre i torneu a la pàgina anterior. - Seleccioneu l&#39;opció "Guarda i vegeu" per obrir el nou {{module_name}}  en vista de registre. - Seleccioneu "Guarda i crea nou" per crear un nou {{module_name}} immediatament.',
  'LBL_HELP_RECORD' => 'El mòdul {{plural_module_name}} està format per accions flexibles, tasques pendents i altres tipus d&#39;activitats que s&#39;han de completar.
- Editeu els camps d&#39;aquest registre fent clic a un camp individual o amb el botó Edita.
- Vegeu o modifiqueu enllaços a altres registres als subpanells mitjançant la commutació de la subfinestra inferior esquerra a la "Vista de dades".
- Feu i vegeu comentaris d&#39;usuari i l&#39;historial de canvis del registre al {{activitystream_singular_module}} mitjançant la commutació de la subfinestra inferior esquerra al "Canal d&#39;activitat".
- Feu el seguiment d&#39;aquest favorit o marqueu-lo com a favorit amb les icones que hi han a la dreta del nom del registre.
- Hi han accions addicionals disponibles al menú desplegable d&#39;accions a la dreta del botó Edita.',
  'LBL_HELP_RECORDS' => 'El mòdul {{plural_module_name}} està format per accions flexibles, tasques pendents i altres tipus d&#39;activitats que s&#39;han de completar. El registres de {{module_name}} poden estar relacionats amb un registre a la majoria de mòduls mitjançant el camp de relació flexible i també es poden associar a un {{accounts_singular_module}} individual. Hi han vàries maneres de crear un {{plural_module_name}} a Sugar, com ara amb el mòdul {{plural_module_name}}, duplicació, importació de {{plural_module_name}}, etc. Quan es crea el registre del {{module_name}}, podeu veure i editar la informació que pertany al {{module_name}} mitjançant la vista de registres de {{plural_module_name}}. Segons els detalls al {{module_name}}, potser podreu veure i editar la informació del {{module_name}} mitjançant el mòdul del calendari. Cada registre de {{module_name}} es pot relacionar a altres registres de Sugar, com ara {{meetings_module}}, {{cases_module}}, {{opportunities_module}}, i molts altres.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuari Assignat',
  'LBL_LIST_CLOSE' => 'Tancar',
  'LBL_LIST_COMPLETE' => 'Complert:',
  'LBL_LIST_CONTACT' => 'Contacte',
  'LBL_LIST_DATE_MODIFIED' => 'Data de Modificació',
  'LBL_LIST_DUE_DATE' => 'Data Venciment',
  'LBL_LIST_DUE_TIME' => 'Hora Venciment',
  'LBL_LIST_FORM_TITLE' => 'Llista de Tasques',
  'LBL_LIST_MY_TASKS' => 'Les Meves Tasques Obertes',
  'LBL_LIST_PRIORITY' => 'Prioritat',
  'LBL_LIST_RELATED_TO' => 'Relatiu a',
  'LBL_LIST_START_DATE' => 'Data d´inici',
  'LBL_LIST_START_TIME' => 'Hora d´inici',
  'LBL_LIST_STATUS' => 'Estat',
  'LBL_LIST_SUBJECT' => 'Assumpte',
  'LBL_MODULE_NAME' => 'Tasques',
  'LBL_MODULE_NAME_SINGULAR' => 'Tasca',
  'LBL_MODULE_TITLE' => 'Tasques: Inici',
  'LBL_NAME' => 'Nom:',
  'LBL_NEW_FORM_DUE_DATE' => 'Data Venciment:',
  'LBL_NEW_FORM_DUE_TIME' => 'Hora Venciment:',
  'LBL_NEW_FORM_SUBJECT' => 'Assumpte:',
  'LBL_NEW_FORM_TITLE' => 'Nova Tasca',
  'LBL_NEW_TIME_FORMAT' => '(24:00)',
  'LBL_NONE' => 'Cap',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Notes',
  'LBL_PARENT_ID' => 'ID de Padre:',
  'LBL_PARENT_NAME' => 'Tipus de Padre:',
  'LBL_PHONE' => 'Telèfon:',
  'LBL_PRIORITY' => 'Prioritat:',
  'LBL_REVENUELINEITEMS' => 'Línia d&#39;impostos articles',
  'LBL_SEARCH_FORM_TITLE' => 'Recerca de Tasques',
  'LBL_START_DATE' => 'Data d´inici:',
  'LBL_START_DATE_AND_TIME' => 'Data i hora d´inici:',
  'LBL_START_TIME' => 'Hora d´inici:',
  'LBL_STATUS' => 'Estat:',
  'LBL_SUBJECT' => 'Assumpte:',
  'LBL_TASK' => 'Tasques:',
  'LBL_TASK_CLOSE_SUCCESS' => 'Tasca tancada amb èxit.',
  'LBL_TASK_INFORMATION' => 'Visió General',
  'LNK_IMPORT_TASKS' => 'Importar Tasques',
  'LNK_NEW_TASK' => 'Nova Tasca',
  'LNK_TASK_LIST' => 'Tasques',
);

