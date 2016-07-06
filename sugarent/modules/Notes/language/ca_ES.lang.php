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
  'ERR_DELETE_RECORD' => 'Ha d´especificar un número de registre a eliminar.',
  'ERR_REMOVING_ATTACHMENT' => 'Error al treure adjunt...',
  'LBL_ACCOUNT_ID' => 'ID Compte:',
  'LBL_ACTIVITIES_REPORTS' => 'Informe d&#39;Activitat',
  'LBL_CASE_ID' => 'ID Cas:',
  'LBL_CLOSE' => 'Tancar:',
  'LBL_COLON' => ':',
  'LBL_CONTACT_ID' => 'ID Contacte:',
  'LBL_CONTACT_NAME' => 'Contacte:',
  'LBL_CREATED_BY' => 'Creat Per',
  'LBL_DATE_ENTERED' => 'Data de creació',
  'LBL_DATE_MODIFIED' => 'Data de modificació',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notes',
  'LBL_DELETED' => 'Eliminat',
  'LBL_DESCRIPTION' => 'Descripció',
  'LBL_EDITLAYOUT' => 'Editar disseny',
  'LBL_EMAIL_ADDRESS' => 'Correu:',
  'LBL_EMAIL_ATTACHMENT' => 'Adjunt de Correu:',
  'LBL_EMBED_FLAG' => 'Incloure en correu?',
  'LBL_EXPORT_PARENT_ID' => 'Relacionat al ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Relacionat al mòdul',
  'LBL_FILENAME' => 'Adjunt:',
  'LBL_FILE_MIME_TYPE' => 'Tipus MIME',
  'LBL_FILE_URL' => 'URL d´Arxiu',
  'LBL_FIRST_NAME' => 'Nom',
  'LBL_HELP_CREATE' => 'Per crear un {{module_name}}: 1. Proporcioneu els valors desitjats per als camps. - Els camps marcats "Obligatori" s&#39;han de completar abans de desar. - Feu clic a "Mostra més" per exposar camps addicionals si és necessari. 2. Feu clic a "Desa" per finalitzar el nou registre i torneu a la pàgina anterior. - Seleccioneu l&#39;opció "Guarda i vegeu" per obrir el nou {{module_name}}  en vista de registre. - Seleccioneu "Guarda i crea nou" per crear un nou {{module_name}} immediatament.',
  'LBL_HELP_RECORD' => 'El mòdul {{plural_module_name}} consisteix en {{plural_module_name}} individuals que contenen text o un arxiu adjunt que pertany al registre relacionat.

- Editeu els camps d&#39;aquest registre fent clic a un camp individual o amb el botó Edita.
- Vegeu o modifiqueu enllaços a altres registres als subpanells mitjançant la commutació de la subfinestra inferior esquerra a la "Vista de dades".
- Feu i vegeu comentaris d&#39;usuari i l&#39;historial de canvis del registre al {{activitystream_singular_module}} mitjançant la commutació de la subfinestra inferior esquerra al "Canal d&#39;activitat".
- Feu el seguiment d&#39;aquest favorit o marqueu-lo com a favorit amb les icones que hi han a la dreta del nom del registre.
- Hi han accions addicionals disponibles al menú desplegable d&#39;accions a la dreta del botó Edita.',
  'LBL_HELP_RECORDS' => 'El mòdul {{plural_module_name}} consisteix en {{plural_module_name}} individuals que contenen text o un arxiu adjunt que pertany al registre relacionat. Els registres de {{module_name}} es poden relacionar amb un registre a la majoria de mòduls mitjançant el camp de relació flexible i també es pot relacionar amb un {{contacts_singular_module}}. {{plural_module_name}} pot contenir text associat amb un registre o inclús un arxiu adjunt relacionat amb el registre. Hi han vàries maneres de crear un {{plural_module_name}} a Sugar, com ara amb el mòdul {{plural_module_name}}, importació de {{plural_module_name}}, subpanells d&#39;historial, etc. Quan es crea el registre del {{module_name}}, podeu veure i editar la informació que pertany al {{module_name}} mitjançant la vista de registres de {{plural_module_name}}. Cada registre de {{module_name}} es pot relacionar a altres registres de Sugar, com ara {{accounts_module}}, {{contacts_module}}, {{opportunities_module}}, i molts altres.',
  'LBL_LAST_NAME' => 'Cognoms',
  'LBL_LEAD_ID' => 'ID Client Potencial:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuari Assignat',
  'LBL_LIST_CONTACT' => 'Contacte',
  'LBL_LIST_CONTACT_NAME' => 'Contacte',
  'LBL_LIST_DATE_MODIFIED' => 'Modificat',
  'LBL_LIST_EDIT_BUTTON' => 'Editar',
  'LBL_LIST_FILENAME' => 'Adjunt',
  'LBL_LIST_FORM_TITLE' => 'Llista de Notes',
  'LBL_LIST_RELATED_TO' => 'Relatiu a',
  'LBL_LIST_STATUS' => 'Estat',
  'LBL_LIST_SUBJECT' => 'Assumpte',
  'LBL_MEMBER_OF' => 'Membre de:',
  'LBL_MODIFIED_BY' => 'Modificat Per',
  'LBL_MODULE_NAME' => 'Notes',
  'LBL_MODULE_NAME_SINGULAR' => 'Nota',
  'LBL_MODULE_TITLE' => 'Notes: Inici',
  'LBL_MY_NOTES_DASHLETNAME' => 'Els meus notes',
  'LBL_NEW_FORM_BTN' => 'Afegir una nota',
  'LBL_NEW_FORM_TITLE' => 'Nova Nota o Arxiu Adjunt',
  'LBL_NOTE' => 'Nota:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Adjunts',
  'LBL_NOTE_INFORMATION' => 'Visió general',
  'LBL_NOTE_STATUS' => 'Nota',
  'LBL_NOTE_SUBJECT' => 'Assumpte:',
  'LBL_OC_FILE_NOTICE' => 'Si us plau, iniciï la sessió al servidor per veure l´arxiu',
  'LBL_OPPORTUNITY_ID' => 'ID Oportunitat:',
  'LBL_PANEL_DETAILS' => 'Detalls',
  'LBL_PARENT_ID' => 'ID Padre:',
  'LBL_PARENT_TYPE' => 'Tipus de Padre',
  'LBL_PHONE' => 'Telèfon:',
  'LBL_PORTAL_FLAG' => 'Mostrar en el Portal?',
  'LBL_PRODUCT_ID' => 'ID Producte:',
  'LBL_QUOTE_ID' => 'ID Pressupost:',
  'LBL_RELATED_TO' => 'Relatiu a:',
  'LBL_REMOVING_ATTACHMENT' => 'Traient adjunt...',
  'LBL_REVENUELINEITEMS' => 'Línia d&#39;impostos articles',
  'LBL_SEARCH_FORM_TITLE' => 'Recerca de Notes',
  'LBL_SEND_ANYWAYS' => 'Aquest correu no te assumpte. Enviar/guardar de tota manera?',
  'LBL_STATUS' => 'Estat',
  'LBL_SUBJECT' => 'Assumpte:',
  'LNK_IMPORT_NOTES' => 'Importar Notes',
  'LNK_NEW_NOTE' => 'Nova Nota o Adjunt',
  'LNK_NOTE_LIST' => 'Notes',
);

