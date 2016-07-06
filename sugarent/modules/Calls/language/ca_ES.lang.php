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
  'LBL_ACCEPT_LINK' => 'Acceptar enllaç',
  'LBL_ACCEPT_STATUS' => 'Acceptar estat',
  'LBL_ACCOUNT_NAME' => 'Compte',
  'LBL_ACTIVITIES_REPORTS' => 'Informe d&#39;activitat',
  'LBL_ADD_BUTTON' => 'Afegir',
  'LBL_ADD_INVITEE' => 'Afegir Convidats',
  'LBL_ASSIGNED_TO_ID' => 'Usuari Assignat',
  'LBL_ASSIGNED_TO_NAME' => 'Assignat a',
  'LBL_BLANK' => ' ',
  'LBL_CALL' => 'Trucada:',
  'LBL_CALL_INFORMATION' => 'Visió General',
  'LBL_CANCEL_CREATE_INVITEE' => 'Cancel·lar',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Està segur de voler eliminar tots els registres que es repeteixen?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactes',
  'LBL_CONTACT_NAME' => 'Contacte:',
  'LBL_CREATE_AND_ADD' => 'Crear i Afegir',
  'LBL_CREATE_CONTACT' => 'Com contacte',
  'LBL_CREATE_INVITEE' => 'Crear un convidat',
  'LBL_CREATE_LEAD' => 'Com client potencial',
  'LBL_CREATE_MODULE' => 'Registrar trucada',
  'LBL_DATE' => 'Data Inici:',
  'LBL_DATE_END' => 'Data de Fi',
  'LBL_DATE_END_ERROR' => 'Data de finalització és abans de la data d&#39;inici',
  'LBL_DATE_TIME' => 'Inici:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Trucades',
  'LBL_DEL' => 'Esborrar',
  'LBL_DESCRIPTION' => 'Descripció:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informació addicional',
  'LBL_DIRECTION' => 'Direcció:',
  'LBL_DURATION' => 'Durada:',
  'LBL_DURATION_HOURS' => 'Hores Durada:',
  'LBL_DURATION_MINUTES' => 'Minuts Durada:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Edita totes les recurrències',
  'LBL_EMAIL' => 'Correu',
  'LBL_EMAIL_REMINDER' => 'Recordatori per correu electrònic',
  'LBL_EMAIL_REMINDER_SENT' => 'Recordatori per correu electrònic enviat',
  'LBL_EMAIL_REMINDER_TIME' => 'Temps de recordatori per correu electrònic',
  'LBL_EMPTY_SEARCH_RESULT' => 'Ho sentim, no es van trobar resultats. Creeu un convidat més endavant.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID d&#39;usuari assignat',
  'LBL_EXPORT_CREATED_BY' => 'Creat per ID',
  'LBL_EXPORT_DATE_START' => 'Data i hora de inici',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificat per ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Relacionat al mòdul',
  'LBL_EXPORT_REMINDER_TIME' => 'Temps de recordatori (en minuts)',
  'LBL_FIRST_NAME' => 'Nom',
  'LBL_HELP_CREATE' => 'El  mòdul {{plural_module_name}} consisteix en registres {{calls_singular_module}} registrats per usuaris a la seva organització. Potser {{plural_module_name}} tindrà l&#39;estat "Programat", "Celebrat" o "Cancel·lat". Els usuaris de Sugar, així com els contactes i clients potencials es poden afegir com a convidats.

Per crear un {{calls_singular_module}}:
1. Proporcioni els valors desitjats per als camps.
    - Els camps marcats "Necessari" s&#39;han de completar abans de desar-los.
    - Feu clic a "Mostra més" per exposar camps addicionals si és necessari.
2. Afegiu convidats a {{calls_singular_module}}.
    - Feu clic a "Selecciona un convidat" per afegir un usuari, contacte o client potencial al {{calls_singular_module}}.
    - Feu clic a la icona "més" a la dreta de "Selecciona un convidat" per crear un convidat de {{calls_singular_module}} com a nou registre de Sugar.
3. Feu clic a "Desar" per finalitzar el nou registre i tornar a la pàgina anterior.
    - Trieu "Desa i veu" per obrir el nou {{calls_singular_module}} a la vista de registres.
    - Trieu "Desa i crea nou" per crear un altre {{calls_singular_module}} nou immediatament.',
  'LBL_HELP_RECORD' => 'El mòdul {{plural_module_name}} consisteix en registres de {{calls_singular_module}} registrats per usuaris de la vostra organització. Potser {{plural_module_name}} tindrà un estat de "Programat", "Celebrat" o "Cancel·lat". Usuaris de Sugar, així com {{contacts_module}} i {{leads_module}} es poden afegir com convidats.

- Editeu aquests camps del registre fent clic a un camp individual o al botó Edita.
- Vegeu o modifiqueu enllaços a altres registres en els subpanells commutant la subfinestra inferior esquerra a "Vista de dades".
- Feu i vegeu comentaris d&#39;usuari i registreu l&#39;historial de canvis al canal d&#39;activitat mitjançant la commutació de la subfinestra inferior esquerra a "Canal d&#39;activitat".
- Feu el seguiment d&#39;aquest registre o marqueu-lo com a favorit amb les icones que hi han a la dreta del nom del registre.
- Hi han accions addicional disponibles al menú d&#39;accions desplegable a la dreta del botó Edita.',
  'LBL_HELP_RECORDS' => 'El mòdul {{plural_module_name}} consisteix en uns registres de trucades que poden tenir l&#39;estat "Programades", "Celebrades" o "Cancel·lades". Les trucades vinents programades per a les pròximes 24 hores mostren la data d&#39;inici marcada en blau. Les trucades vençudes mostren la data d&#39;inici marcada en vermell.

Des d&#39;aquesta vista de llista {{plural_module_name}}, podeu veure i editar en línia la informació de la trucada. Hi han accions addicionals disponibles al menú del final de cada fila de trucada. Podeu seleccionar "Tanca" al menú de qualsevol fila de trucada programada per marcar-la com celebrada.

Es poden afegir usuaris de Sugar, contactes i clients potencials com a convidats a la trucada. {{plural_module_name}} es pot crear mitjançant el mòdul {{plural_module_name}}, mòdul del calendari, importa, així com amb el subpanell d&#39;Activitats (per a mòduls heretats) o amb el dashlet d&#39;activitats planificades (per a mòduls Sidecar) a registres de mòduls relacionats (per exemple, contactes, comptes, etc.), la qual cosa crearà automàticament una relació entre ambdós registres..',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINUTES' => '(hores/minuts)',
  'LBL_INVITEE' => 'Participants',
  'LBL_LAST_NAME' => 'Cognom',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Clients Potencials',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuari Assignat',
  'LBL_LIST_CLOSE' => 'Tancar',
  'LBL_LIST_CONTACT' => 'Contacte',
  'LBL_LIST_DATE' => 'Data Inici',
  'LBL_LIST_DIRECTION' => 'Direcció',
  'LBL_LIST_DURATION' => 'Durada',
  'LBL_LIST_FORM_TITLE' => 'Llista de Trucades',
  'LBL_LIST_MY_CALLS' => 'Les Meves Trucades',
  'LBL_LIST_RELATED_TO' => 'Relatiu a',
  'LBL_LIST_RELATED_TO_ID' => 'Relatiu a ID',
  'LBL_LIST_SUBJECT' => 'Assumpte',
  'LBL_LIST_TIME' => 'Hora Inici',
  'LBL_LOG_CALL' => 'Registrar Trucada',
  'LBL_MEMBER_OF' => 'Membre De',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Trucades',
  'LBL_MODULE_NAME_SINGULAR' => 'Trucada',
  'LBL_MODULE_TITLE' => 'Trucades: Inici',
  'LBL_MY_SCHEDULED_CALLS' => 'Les meves trucades programades',
  'LBL_NAME' => 'Nom',
  'LBL_NEW_FORM_TITLE' => 'Crear Cita',
  'LBL_NO_ACCESS' => 'No té accés per crear $module',
  'LBL_OUTLOOK_ID' => 'ID Outlook',
  'LBL_PARENT_ID' => 'ID Pare',
  'LBL_PHONE' => 'Telèfon',
  'LBL_POPUP_REMINDER_TIME' => 'Hora de recordatori emergent',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Heu programat {{moduleSingularLower}} per al {{formatDate date_start}}, però no teniu permís per accedir-hi.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Heu programat {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> per al {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Reaparició',
  'LBL_RECURRING_LIMIT_ERROR' => 'La recurrència de no es pot programar pel fet que excedeix el màxim permès de recurrència $limit.',
  'LBL_RECURRING_SOURCE' => 'Font periódico',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Trucada amb {{{this}}}',
  'LBL_RELATED_TO' => 'Relatiu a',
  'LBL_REMINDER' => 'Avís',
  'LBL_REMINDER_EMAIL' => 'Email',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Enviar correu electrònic a tots els convidats',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Hora Avís',
  'LBL_REMINDER_TITLE' => 'Truqui:',
  'LBL_REMOVE' => 'treure',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Eliminar totes les recurrències',
  'LBL_REPEAT_COUNT' => 'Nombre de repeticions',
  'LBL_REPEAT_DOW' => 'Repetiu el Dow',
  'LBL_REPEAT_END' => 'Fi',
  'LBL_REPEAT_END_AFTER' => 'Desprès',
  'LBL_REPEAT_END_BY' => 'Per',
  'LBL_REPEAT_INTERVAL' => 'Interval de repetició',
  'LBL_REPEAT_OCCURRENCES' => 'ocurrències',
  'LBL_REPEAT_PARENT_ID' => 'Repetiu l&#39;ID principal',
  'LBL_REPEAT_TYPE' => 'Repetició',
  'LBL_REPEAT_UNTIL' => 'Repetiu fins que',
  'LBL_REVENUELINEITEMS' => 'Línia d&#39;impostos articles',
  'LBL_SCHEDULING_FORM_TITLE' => 'Planificació',
  'LBL_SEARCH_BUTTON' => 'Buscar',
  'LBL_SEARCH_FORM_TITLE' => 'Recerca de Trucades',
  'LBL_SELECT_FROM_DROPDOWN' => 'Si us plau, seleccioni abans un element de la llista desplegable Relatiu A.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Enviar Invitacions',
  'LBL_SEND_BUTTON_TITLE' => 'Enviar Invitacions [Alt+I]',
  'LBL_SEND_INVITES' => 'Enviar Invitacions',
  'LBL_STATUS' => 'Estat:',
  'LBL_SUBJECT' => 'Assumpte:',
  'LBL_SYNCED_RECURRING_MSG' => 'Aquesta trucada es va originar en un altre sistema i es sincronitzen amb el Sugar. Per realitzar canvis, aneu a la trucada original en l$#39;altre sistema. Els canvis realitzats en l$#39;altre sistema es pot sincronitzar amb aquest registre.',
  'LBL_TIME' => 'Hora inici:',
  'LBL_TIME_END' => 'Hora de Fi',
  'LBL_USERS_SUBPANEL_TITLE' => 'Usuaris',
  'LNK_CALL_LIST' => 'Trucades',
  'LNK_IMPORT_CALLS' => 'Importar Trucades',
  'LNK_NEW_ACCOUNT' => 'Nou Compte',
  'LNK_NEW_APPOINTMENT' => 'Crear Cita',
  'LNK_NEW_CALL' => 'Programar Trucada',
  'LNK_NEW_MEETING' => 'Programar Reunió',
  'LNK_NEW_OPPORTUNITY' => 'Nova Oportunitat',
  'LNK_SELECT_ACCOUNT' => 'Seleccionar Compte',
  'NOTICE_DURATION_TIME' => 'El temps de durada te que ser major que 0',
  'NTC_REMOVE_INVITEE' => 'Està segur que desitja treure aquest participant de la trucada?',
  'TPL_CALL_STATUS_CHANGED' => 'Trucada marcada com {{status}}.',
);

