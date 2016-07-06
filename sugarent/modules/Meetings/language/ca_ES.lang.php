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
  'LBL_ACCEPT_THIS' => 'Acceptar?',
  'LBL_ACCOUNT_NAME' => 'Compte',
  'LBL_ACTIVITIES_REPORTS' => 'Infrome d&#39;activitats',
  'LBL_ADD_BUTTON' => 'Afegeix',
  'LBL_ADD_INVITEE' => 'Afegeix Assistents',
  'LBL_ASSIGNED_TO_NAME' => 'Assignat a:',
  'LBL_CANCEL_CREATE_INVITEE' => 'Cancel·lar',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Està segur de voler eliminar tots els registres que es repeteixen?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactes',
  'LBL_CONTACT_NAME' => 'Nom Contacte:',
  'LBL_CREATED_BY' => 'Creat per',
  'LBL_CREATED_USER' => 'Usuari Creat',
  'LBL_CREATE_AND_ADD' => 'Crear i Afegir',
  'LBL_CREATE_CONTACT' => 'Com contacte',
  'LBL_CREATE_INVITEE' => 'Crear un convidat',
  'LBL_CREATE_LEAD' => 'Com client potencial',
  'LBL_CREATE_MODULE' => 'Planificar reunió',
  'LBL_CREATOR' => 'Creador de la reunió',
  'LBL_DATE' => 'Data Inici:',
  'LBL_DATE_END' => 'Data Fi',
  'LBL_DATE_END_ERROR' => 'Data de finalització és abans de la data d&#39;inici',
  'LBL_DATE_TIME' => 'Data i hora d´inici:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Reunions',
  'LBL_DEL' => 'Esborrar',
  'LBL_DESCRIPTION' => 'Descripció:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informació addicional',
  'LBL_DIRECTION' => 'Direcció:',
  'LBL_DISPLAYED_URL' => 'Veure URL',
  'LBL_DURATION' => 'Durada:',
  'LBL_DURATION_HOURS' => 'Hores Durada:',
  'LBL_DURATION_MINUTES' => 'Minuts Durada:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Edita totes les recurrències',
  'LBL_EMAIL' => 'Correu',
  'LBL_EMAIL_REMINDER' => 'Recordatori per correu electrònic',
  'LBL_EMAIL_REMINDER_SENT' => 'Recordatori per correu electrònic enviat',
  'LBL_EMAIL_REMINDER_TIME' => 'Temps de recordatori per correu electrònic',
  'LBL_EMPTY_SEARCH_RESULT' => 'Ho sentim, no es van trobar resultats. Creeu un convidat més endavant.',
  'LBL_ERROR_LAUNCH_MEETING_GENERAL' => 'S&#39;ha produït un error al iniciar aquesta reunió. contacteu al vostre administrador.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID d&#39;usuari assignat',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nom d&#39;usuari assignat',
  'LBL_EXPORT_CREATED_BY' => 'Creat per ID',
  'LBL_EXPORT_DATE_END' => 'Data i hora de fi',
  'LBL_EXPORT_DATE_START' => 'Data i hora de inici',
  'LBL_EXPORT_DISPLAYED_URL' => 'URL que es mostra',
  'LBL_EXPORT_EXTERNAL_ID' => 'External ID',
  'LBL_EXPORT_HOST_URL' => 'Host Url',
  'LBL_EXPORT_JOIN_URL' => 'Ingrés Url',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificat per ID',
  'LBL_EXPORT_PARENT_ID' => 'ID Pare',
  'LBL_EXPORT_PARENT_TYPE' => 'Tipus relacionat',
  'LBL_EXPORT_REMINDER_TIME' => 'Temps de recordatori (en minuts)',
  'LBL_EXTERNALID' => 'External App ID',
  'LBL_EXTNOSTART_HEADER' => 'Error: No es pot iniciar la reunió',
  'LBL_EXTNOSTART_MAIN' => 'No es pot iniciar aquesta reunió, ja que no és un administrador o el propietari de la reunió.',
  'LBL_EXTNOT_GO_BACK' => 'Tornar al registre anterior',
  'LBL_EXTNOT_HEADER' => 'Error: No convidat',
  'LBL_EXTNOT_MAIN' => 'No són capaços d&#39;unir-se a aquesta reunió, ja que no són un convidat.',
  'LBL_EXTNOT_RECORD_LINK' => 'Veure reunió',
  'LBL_FIRST_NAME' => 'Nom',
  'LBL_HELP_CREATE' => 'El  mòdul {{plural_module_name}} consisteix en registres {{meetings_module}} registrats per usuaris a la seva organització. Potser {{plural_module_name}} tindrà l&#39;estat "Programat", "Celebrat" o "Cancel·lat". Els usuaris de Sugar, així com {{contacts_module}} i {{leads_module}} es poden afegir com a convidats.

Per crear un {{meetings_singular_module}}:
1. Proporcioni els valors desitjats per als camps.
    - Els camps marcats "Necessari" s&#39;han de completar abans de desar-los.
    - Feu clic a "Mostra més" per exposar camps addicionals si és necessari.
2. Afegiu convidats a {{meetings_singular_module}}.
    - Feu clic a "Selecciona un convidat" per afegir un usuari, contacte o client potencial existen al {{meetings_singular_module}}.
    - Feu clic a la icona "més" a la dreta de "Selecciona un convidat" per crear un convidat de {{meetings_singular_module}} com a nou registre de Sugar.
3. Feu clic a "Desar" per finalitzar el nou registre i tornar a la pàgina anterior.
    - Trieu "Desa i veu" per obrir la nova reunió a la vista de registres.
    - Trieu "Desa i crea nou" per crear un altre {{meetings_singular_module}} nou immediatament.',
  'LBL_HELP_RECORD' => 'El mòdul {{plural_module_name}} consisteix en registres de {{meetings_singular_module}} registrats per usuaris de la vostra organització. Potser {{plural_module_name}} tindrà un estat de "Programat", "Celebrat" o "Cancel·lat". Usuaris de Sugar, així com {{contacts_module}} i {{leads_module}} es poden afegir com convidats.

- Editeu aquests camps del registre fent clic a un camp individual o al botó Edita.
- Vegeu o modifiqueu enllaços a altres registres en els subpanells commutant la subfinestra inferior esquerra a "Vista de dades".
- Feu i vegeu comentaris d&#39;usuari i registreu l&#39;historial de canvis al canal d&#39;activitat mitjançant la commutació de la subfinestra inferior esquerra a "Canal d&#39;activitat".
- Feu el seguiment d&#39;aquest favorit o marqueu-lo com a favorit amb les icones que hi han a la dreta del nom del registre.
- Hi han accions addicional disponibles al menú desplegable d&#39;accions a la dreta del botó Edita.',
  'LBL_HELP_RECORDS' => 'El mòdul {{plural_module_name}} consisteix en uns registres de reunions que poden tenir l&#39;estat "Programades", "Celebrades" o "Cancel·lades". Les reunions vinents programades per a les pròximes 24 hores mostren la data d&#39;inici marcada en blau. Les reunions vençudes mostren la data d&#39;inici marcada en vermell.

Des d&#39;aquesta vista de llista {{plural_module_name}}, podeu veure i editar en línia la informació de la reunió. Hi han accions addicionals disponibles al menú del final de cada fila de reunió. Podeu seleccionar "Tanca" al menú de qualsevol fila de reunió programada per marcar-la com celebrada.

Es poden afegir usuaris de Sugar, contactes i clients potencials com a convidats a la reunió. {{plural_module_name}} es pot crear mitjançant el mòdul {{plural_module_name}}, mòdul del calendari, importa, així com amb el subpanell d&#39;Activitats (per a mòduls heretats) o amb el dashlet d&#39;activitats planificades (per a mòduls Sidecar) a registres de mòduls relacionats (per exemple, contactes, comptes, etc.), la qual cosa crearà automàticament una relació entre ambdós registres..',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
  'LBL_HOST_EXT_MEETING' => 'Iniciar reunió',
  'LBL_HOST_URL' => 'Host URL',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINS' => '(hores/minuts)',
  'LBL_INVITEE' => 'Assistents',
  'LBL_JOIN_EXT_MEETING' => 'Unir-se a la reunió',
  'LBL_JOIN_MEETING' => 'Uniu-vos a {{meetingType}}',
  'LBL_LAST_NAME' => 'Cognoms',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Clients Potencials',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuari Assignat',
  'LBL_LIST_CLOSE' => 'Tancat',
  'LBL_LIST_CONTACT' => 'Contacte',
  'LBL_LIST_DATE' => 'Data Inici',
  'LBL_LIST_DATE_MODIFIED' => 'Data de Modificació',
  'LBL_LIST_DIRECTION' => 'Direcció',
  'LBL_LIST_DUE_DATE' => 'Data de Venciment',
  'LBL_LIST_FORM_TITLE' => 'Llista de Reunions',
  'LBL_LIST_JOIN_MEETING' => 'Unir-se a la reunió',
  'LBL_LIST_MY_MEETINGS' => 'Les Meves Reunions',
  'LBL_LIST_RELATED_TO' => 'Relatiu a',
  'LBL_LIST_STATUS' => 'Estat',
  'LBL_LIST_SUBJECT' => 'Assumpte',
  'LBL_LIST_TIME' => 'Hora Inici',
  'LBL_LOCATION' => 'Lloc:',
  'LBL_MEETING' => 'Reunió:',
  'LBL_MEETING_CLOSE_SUCCESS' => 'Reunió tancada satisfactòriament',
  'LBL_MEETING_INFORMATION' => 'Visió General',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODIFIED_BY' => 'Modificat per',
  'LBL_MODIFIED_USER' => 'Usuari Modificat',
  'LBL_MODULE_NAME' => 'Reunions',
  'LBL_MODULE_NAME_SINGULAR' => 'Reunió',
  'LBL_MODULE_TITLE' => 'Reunions: Inici',
  'LBL_MY_SCHEDULED_MEETINGS' => 'Les meves reunions programades',
  'LBL_NAME' => 'Nom',
  'LBL_NEW_FORM_TITLE' => 'Crear Cita',
  'LBL_NO_ACCESS' => 'No té accés per crear $module',
  'LBL_OUTLOOK_ID' => 'ID Outlook',
  'LBL_PARENT_ID' => 'ID Pare',
  'LBL_PARENT_TYPE' => 'Tipus de pare',
  'LBL_PASSWORD' => 'Clau de pas de la reunió',
  'LBL_PHONE' => 'Telèfon',
  'LBL_POPUP_REMINDER' => 'Recordatori emergent',
  'LBL_POPUP_REMINDER_TIME' => 'Hora de recordatori emergent',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Heu programat {{moduleSingularLower}} per al {{formatDate date_start}}, però no teniu permís per accedir-hi.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Heu programat {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> per al {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Reaparició',
  'LBL_RECURRING_LIMIT_ERROR' => 'La recurrència de no es pot programar pel fet que excedeix el màxim permès de recurrència $limit.',
  'LBL_RECURRING_SOURCE' => 'Font periódico',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Reunir amb {{{this}}}',
  'LBL_RELATED_TO' => 'Relatiu a:',
  'LBL_REMINDER' => 'Avís:',
  'LBL_REMINDER_EMAIL' => 'Email',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Enviar correu electrònic a tots els convidats',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Hora Avís',
  'LBL_REMINDER_TITLE' => 'Reunió:',
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
  'LBL_SEARCH_BUTTON' => 'Recerca',
  'LBL_SEARCH_FORM_TITLE' => 'Recerca de Reunions',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Enviar Invitacions',
  'LBL_SEND_BUTTON_TITLE' => 'Enviar Invitacions [Alt+I]',
  'LBL_SEND_INVITES' => 'Enviar Invitacions',
  'LBL_SEQUENCE' => 'Reunió de seqüència d&#39;actualització',
  'LBL_START_MEETING' => 'Inicieu {{meetingType}}',
  'LBL_STATUS' => 'Estat:',
  'LBL_SUBJECT' => 'Assumpte:',
  'LBL_SYNCED_RECURRING_MSG' => 'Aquesta reunió es va originar en un altre sistema i es sincronitzen amb el Sugar. Per realitzar canvis, aneu a la reunió original en l$#39;altre sistema. Els canvis realitzats en l$#39;altre sistema es pot sincronitzar amb aquest registre.',
  'LBL_TIME' => 'Hora Inici:',
  'LBL_TYPE' => 'Tipus de reunió',
  'LBL_URL' => 'Inici/Unir-se a la reunió',
  'LBL_USERS_SUBPANEL_TITLE' => 'Usuaris',
  'LNK_IMPORT_MEETINGS' => 'Importar Reunions',
  'LNK_MEETING_LIST' => 'Reunions',
  'LNK_NEW_APPOINTMENT' => 'Crear Cita',
  'LNK_NEW_MEETING' => 'Programar Reunió',
  'NOTICE_DURATION_TIME' => 'El temps de durada te que ser major que 0',
  'NTC_REMOVE_INVITEE' => 'Està segur de que vol esborrar a aquest assistent de la reunió?',
);

