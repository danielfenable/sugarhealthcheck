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
  'ERR_DELETE_RECORD' => 'Lai dzēstu klientu, jānorāda ieraksta numurs.',
  'LBL_ACCEPT' => 'Apstiprināt',
  'LBL_ACCEPT_THIS' => 'Apstiprināt?',
  'LBL_COLON' => ':',
  'LBL_CONTACT_NAME' => 'Kontaktpersonas vārds:',
  'LBL_DATE' => 'Sākuma datums:',
  'LBL_DATE_TIME' => 'Sākuma datums un laiks:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Atvērtās darbības',
  'LBL_DELETE_ACTIVITY' => 'Vai tiešām vēlaties dzēst šo aktivitāti?',
  'LBL_DESCRIPTION' => 'Apraksts:',
  'LBL_DESCRIPTION_INFORMATION' => 'Apraksta informācija',
  'LBL_DIRECTION' => 'Virziens',
  'LBL_DURATION' => 'Ilgums:',
  'LBL_DURATION_MINUTES' => 'Ilgums minutēs:',
  'LBL_HISTORY' => 'Vēsture',
  'LBL_HOURS_MINS' => '(stundas/minūtes)',
  'LBL_INVITEE' => 'Uzaicinātie',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
  'LBL_LIST_CLOSE' => 'Aizvērt',
  'LBL_LIST_CONTACT' => 'Kontaktpersona',
  'LBL_LIST_DATE' => 'Datums',
  'LBL_LIST_DIRECTION' => 'Virziens',
  'LBL_LIST_DUE_DATE' => 'Izpildes termiņš',
  'LBL_LIST_FORM_TITLE' => 'Aktivitāšu saraksts',
  'LBL_LIST_LAST_MODIFIED' => 'Pēdējās izmaiņas',
  'LBL_LIST_RELATED_TO' => 'Saistīts ar',
  'LBL_LIST_STATUS' => 'Statuss',
  'LBL_LIST_SUBJECT' => 'Temats',
  'LBL_LIST_TIME' => 'Sākuma laiks',
  'LBL_LOCATION' => 'Novietojums:',
  'LBL_MEETING' => 'Tikšanās:',
  'LBL_MODULE_NAME' => 'Darbības',
  'LBL_MODULE_NAME_SINGULAR' => 'Darbība',
  'LBL_MODULE_TITLE' => 'Darbības',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Izveidot piezīmi vai pielikumu',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Izveidot piezīmi vai pielikumu [Alt+T]',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Izveidot uzdevumu',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Izveidot uzdevumu [Alt+N]',
  'LBL_OPEN_ACTIVITIES' => 'Atvērtās darbības',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Ieplānot zvanu',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Ieplānot zvanu [Alt+C]',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Ieplānot tikšanos',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Ieplānot tikšanos [Alt+M]',
  'LBL_SEARCH_FORM_TITLE' => 'Darbību meklēšana',
  'LBL_STATUS' => 'Statuss:',
  'LBL_SUBJECT' => 'Temats:',
  'LBL_TIME' => 'Sākuma laiks:',
  'LBL_TODAY' => 'caur',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arhivēt E-pastu',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arhivēt E-pastu [Alt+K]',
  'LBL_UPCOMING' => 'Manas gaidāmās tikšanās',
  'LNK_CALL_LIST' => 'Zvani',
  'LNK_EMAIL_LIST' => 'E-pasti',
  'LNK_IMPORT_CALLS' => 'Importēt zvanus',
  'LNK_IMPORT_MEETINGS' => 'Importēt tikšanās',
  'LNK_IMPORT_NOTES' => 'Importēt piezīmes',
  'LNK_IMPORT_TASKS' => 'Importēt uzdevumus',
  'LNK_MEETING_LIST' => 'Tikšanās',
  'LNK_NEW_APPOINTMENT' => 'Jauna tikšanās',
  'LNK_NEW_CALL' => 'Ieplānot zvanu',
  'LNK_NEW_EMAIL' => 'Izveidot arh. E-pastu',
  'LNK_NEW_MEETING' => 'Ieplānot tikšanos',
  'LNK_NEW_NOTE' => 'Izveidot piezīmi vai pielikumu',
  'LNK_NEW_TASK' => 'Izveidot uzdevumu',
  'LNK_NOTE_LIST' => 'Piezīmes',
  'LNK_TASK_LIST' => 'Uzdevumi',
  'LNK_VIEW_CALENDAR' => 'Šodien',
  'NTC_NONE' => 'Neviens',
  'NTC_NONE_SCHEDULED' => 'Nekas nav ieplānots.',
  'NTC_REMOVE_INVITEE' => 'Vai tiešām vēlaties izņemt šo uzaicināto personu no tikšanās?',
  'appointment_filter_dom' => 
  array (
    'last next_month' => 'nākamajā mēnesī',
    'last this_month' => 'šomēnes',
    'next Saturday' => 'nākamnedēļ',
    'this Saturday' => 'šonedēļ',
    'today' => 'šodien',
    'tomorrow' => 'rīt',
  ),
);

