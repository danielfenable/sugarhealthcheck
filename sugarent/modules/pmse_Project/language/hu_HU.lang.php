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
  'LBL_MODULE_NAME' => 'Folyamatdefiníciók',
  'LBL_MODULE_NAME_SINGULAR' => 'Folyamatdefiníció',
  'LBL_MODULE_TITLE' => 'Folyamatdefiníciók',
  'LBL_PMSE_ADAM_DESIGNER_ACTION' => 'Művelet',
  'LBL_PMSE_ADAM_DESIGNER_COMMENT' => 'Megjegyzés',
  'LBL_PMSE_ADAM_DESIGNER_DOCUMENTS' => 'Dokumentumok',
  'LBL_PMSE_ADAM_DESIGNER_DOCUMENT_START_EVENT' => 'Dokumentum Kezdési Esemény',
  'LBL_PMSE_ADAM_DESIGNER_END_EVENT' => 'Befejezési Esemény',
  'LBL_PMSE_ADAM_DESIGNER_EXCLUSIVE' => 'Kizárólagos',
  'LBL_PMSE_ADAM_DESIGNER_EXCLUSIVE_GATEWAY' => 'Kizárólagos Átjáró',
  'LBL_PMSE_ADAM_DESIGNER_LEADS' => 'Ajánlások',
  'LBL_PMSE_ADAM_DESIGNER_LEAD_START_EVENT' => 'Ajánlás Kezdési Esemény',
  'LBL_PMSE_ADAM_DESIGNER_MESSAGE_EVENT' => 'Üzenet Esemény',
  'LBL_PMSE_ADAM_DESIGNER_OPPORTUNITY' => 'Lehetőség',
  'LBL_PMSE_ADAM_DESIGNER_OPPORTUNITY_START_EVENT' => 'Lehetőség Kezdési Esemény',
  'LBL_PMSE_ADAM_DESIGNER_PARALLEL' => 'Párhuzamos',
  'LBL_PMSE_ADAM_DESIGNER_PARALLEL_GATEWAY' => 'Párhuzamos Átjáró',
  'LBL_PMSE_ADAM_DESIGNER_RECEIVE_MESSAGE' => 'Üzenet Fogadása',
  'LBL_PMSE_ADAM_DESIGNER_REDO' => 'Ismét',
  'LBL_PMSE_ADAM_DESIGNER_SAVE' => 'Mentés',
  'LBL_PMSE_ADAM_DESIGNER_SEND_MESSAGE' => 'Üzenet Küldése',
  'LBL_PMSE_ADAM_DESIGNER_TASK' => 'Tevékenység',
  'LBL_PMSE_ADAM_DESIGNER_TEXT_ANNOTATION' => 'Szövegmagyarázat',
  'LBL_PMSE_ADAM_DESIGNER_UNDO' => 'Visszavonás',
  'LBL_PMSE_ADAM_DESIGNER_USER_TASK' => 'Tevékenység',
  'LBL_PMSE_ADAM_DESIGNER_WAIT' => 'Várakozás',
  'LBL_PMSE_ADAM_DESIGNER_WAIT_EVENT' => 'Várakozási Esemény',
  'LBL_PMSE_ALL_PROCESS_DEFINITIONS' => 'Minden Folyamatdefiníció',
  'LBL_PMSE_BPMN_WARNING_LABEL' => 'Hibák',
  'LBL_PMSE_BPMN_WARNING_PANEL_TITLE' => 'Elemhibák',
  'LBL_PMSE_BPMN_WARNING_SINGULAR_LABEL' => 'Hiba',
  'LBL_PMSE_BUTTON_CANCEL' => 'Mégsem',
  'LBL_PMSE_BUTTON_NO' => 'Nem',
  'LBL_PMSE_BUTTON_OK' => 'OK',
  'LBL_PMSE_BUTTON_SAVE' => 'Mentés',
  'LBL_PMSE_BUTTON_YES' => 'Igen',
  'LBL_PMSE_CONTEXT_MENU_100' => '100%',
  'LBL_PMSE_CONTEXT_MENU_125' => '125%',
  'LBL_PMSE_CONTEXT_MENU_150' => '150%',
  'LBL_PMSE_CONTEXT_MENU_50' => '50%',
  'LBL_PMSE_CONTEXT_MENU_75' => '75%',
  'LBL_PMSE_CONTEXT_MENU_ACTION' => 'Művelet',
  'LBL_PMSE_CONTEXT_MENU_ACTION_TYPE' => 'Művelettípus',
  'LBL_PMSE_CONTEXT_MENU_ADD_RELATED_RECORD' => 'Megfelelő Adat Hozzáadása',
  'LBL_PMSE_CONTEXT_MENU_ASSIGN_TEAM' => 'Ciklikus ütemezés',
  'LBL_PMSE_CONTEXT_MENU_ASSIGN_USER' => 'Felhasználó Hozzáadása',
  'LBL_PMSE_CONTEXT_MENU_BUSINESS_RULE' => 'Üzleti Szabály',
  'LBL_PMSE_CONTEXT_MENU_CHANGE_FIELD' => 'Mező Változtatása',
  'LBL_PMSE_CONTEXT_MENU_CONVERGING' => 'Konvergál',
  'LBL_PMSE_CONTEXT_MENU_CONVERT' => 'Átalakít...',
  'LBL_PMSE_CONTEXT_MENU_DEFAULT_EVENT' => '(Esemény)',
  'LBL_PMSE_CONTEXT_MENU_DEFAULT_FLOW' => 'Alapértelmezett Folyamat',
  'LBL_PMSE_CONTEXT_MENU_DEFAULT_GATEWAY' => '(Átjáró)',
  'LBL_PMSE_CONTEXT_MENU_DEFAULT_TASK' => '(Tevékenység)',
  'LBL_PMSE_CONTEXT_MENU_DELETE' => 'Törlés',
  'LBL_PMSE_CONTEXT_MENU_DIRECTION' => 'Irány...',
  'LBL_PMSE_CONTEXT_MENU_DIVERGING' => 'Divergál',
  'LBL_PMSE_CONTEXT_MENU_DO_NOTHING' => 'Nem csinál semmit',
  'LBL_PMSE_CONTEXT_MENU_EVENT_BASED_GATEWAY' => 'Esemény-Alapú Átjáró',
  'LBL_PMSE_CONTEXT_MENU_EXCLUSIVE_GATEWAY' => 'Kizárólagos Átjáró',
  'LBL_PMSE_CONTEXT_MENU_FORMS' => 'Nyomtatványok..',
  'LBL_PMSE_CONTEXT_MENU_INCLUSIVE_GATEWAY' => 'Átjáróval együtt',
  'LBL_PMSE_CONTEXT_MENU_LISTEN' => 'Hallgat',
  'LBL_PMSE_CONTEXT_MENU_NONE' => 'Egyik sem',
  'LBL_PMSE_CONTEXT_MENU_PARELLEL_GATEWAY' => 'Párhuzamos Átjáró',
  'LBL_PMSE_CONTEXT_MENU_PROCESS_DEFINITION' => 'Folyamatdefiníció',
  'LBL_PMSE_CONTEXT_MENU_RECEIVE_MESSAGE' => 'Üzenet Fogadása',
  'LBL_PMSE_CONTEXT_MENU_REFRESH' => 'Frissítés',
  'LBL_PMSE_CONTEXT_MENU_RESULT' => 'Eredmény',
  'LBL_PMSE_CONTEXT_MENU_SAVE' => 'Mentés',
  'LBL_PMSE_CONTEXT_MENU_SEND_MESSAGE' => 'Üzenet Küldése',
  'LBL_PMSE_CONTEXT_MENU_SETTINGS' => 'Beállítások...',
  'LBL_PMSE_CONTEXT_MENU_TERMINATE_PROCESS' => 'Folyamat Befejezése',
  'LBL_PMSE_CONTEXT_MENU_TIMER' => 'Időzítő',
  'LBL_PMSE_CONTEXT_MENU_UNASSIGNED' => 'Nem hozzárendelt',
  'LBL_PMSE_CONTEXT_MENU_USERS' => 'Felhasználók...',
  'LBL_PMSE_CONTEXT_MENU_ZOOM' => 'Nagyítás',
  'LBL_PMSE_EMAILPICKER_CURRENT_USER' => 'Aktuális felhasználó',
  'LBL_PMSE_EMAILPICKER_RECORD_OWNER' => 'Adattulajdonos',
  'LBL_PMSE_EMAILPICKER_RESULTS_TITLE' => '%NUMBER% javaslat(ok) ehhez "%TEXT%"',
  'LBL_PMSE_EMAILPICKER_SUGGESTIONS' => 'Javaslatok',
  'LBL_PMSE_EMAILPICKER_SUPERVISOR' => 'Felügyelő',
  'LBL_PMSE_EMAILPICKER_TEAMS' => 'Csoportok',
  'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_BR' => 'Üzleti Szabály',
  'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_RESPONSE' => 'Válasz',
  'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_TITLE' => 'Üzleti Szabályok Kiértékelése',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC' => 'Sztring, Szám és Logiaki változó',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_BOOLEAN' => 'BLogikai változó hozzáadása',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_NUMBER' => 'szám hozzáadása',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_STRING' => 'sztring hozzáadása',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_VALUE' => 'Érték',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_FIXED_DATE' => 'Rögzített Dátum',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_FIXED_DATETIME' => 'Rögzített Dátumidő',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_TITLE' => 'Állandók',
  'LBL_PMSE_EXPCONTROL_EVALUATIONS_TITLE' => 'Értékelések',
  'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_FORM' => 'Nyomtatvány',
  'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_STATUS' => 'Állapot',
  'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_TITLE' => 'Válasz Kiértékelési Nyomtatvány',
  'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_MODULE' => 'Modul',
  'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_TITLE' => 'Modulmező Értékelése',
  'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_VALUE' => 'Érték',
  'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_VARIABLE' => 'Mező',
  'LBL_PMSE_EXPCONTROL_OPERATOR_EQUAL' => 'egyenlő ezzel:',
  'LBL_PMSE_EXPCONTROL_OPERATOR_EQUAL_TEXT' => 'ez:',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR' => 'több, mint',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_DATE' => 'később',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_EQUAL' => 'nagyobb, vagy egyenlő ezzel:',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_EQUAL_THAN' => 'kevesebb, vagy egyenlő ezzel:',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_THAN' => 'kevesebb, mint',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_THAN_DATE' => 'korábban',
  'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL' => 'nem egyenlő ezzel:',
  'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL_TEXT' => 'nem ez:',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_CURRENT' => 'Aktuális felhasználó',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ADMIN' => 'Adminisztrátor',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ADMIN' => 'Nem Adminisztrátor',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ROLE' => 'Nem Szerep',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_USER' => 'Nem Felhasználó',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ROLE' => 'Szerep',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_USER' => 'Felhasználó',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_OPERATOR' => 'Kezelő',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_OWNER' => 'Adattulajdonos',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_SUPERVISOR' => 'Felügyelő',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_AMOUNT' => 'Érték',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_DAYS' => 'nap',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_HOURS' => 'óra',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_MINUTES' => 'perc',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_MONTHS' => 'hónap',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_TITLE' => 'Időintervallum',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_UNIT' => 'Egység',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_WEEKS' => 'hét',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_YEARS' => 'év',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TITLE' => 'Falhasználó Kiértékelése',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_USER' => 'Felhasználó',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_VALUE' => 'Érték',
  'LBL_PMSE_EXPCONTROL_VARIABLES_PANEL_TITLE' => 'Mezők',
  'LBL_PMSE_FORMPANEL_SUBMIT' => 'Elküld',
  'LBL_PMSE_FORM_LABEL_APPLIES_TO' => 'Alkalmazható',
  'LBL_PMSE_FORM_LABEL_ASSIGNMENT_METHOD' => 'Kijelölési Módszer',
  'LBL_PMSE_FORM_LABEL_ASSIGN_TO_TEAM' => 'Csoporthoz rendelés',
  'LBL_PMSE_FORM_LABEL_ASSIGN_TO_USER' => 'Felhasználóhoz rendelés',
  'LBL_PMSE_FORM_LABEL_CRITERIA' => 'Feltétel',
  'LBL_PMSE_FORM_LABEL_DURATION' => 'Időtartam',
  'LBL_PMSE_FORM_LABEL_EMAIL_BCC' => 'Bcc',
  'LBL_PMSE_FORM_LABEL_EMAIL_CC' => 'Cc',
  'LBL_PMSE_FORM_LABEL_EMAIL_TEMPLATE' => 'Email sablon',
  'LBL_PMSE_FORM_LABEL_EMAIL_TO' => 'Ide',
  'LBL_PMSE_FORM_LABEL_EXPECTED_TIME' => 'Becsült Idő',
  'LBL_PMSE_FORM_LABEL_FIELDS' => 'Mezők',
  'LBL_PMSE_FORM_LABEL_FIXED_DATE' => 'Meghatározott Dátum',
  'LBL_PMSE_FORM_LABEL_FORM_TYPE' => 'Nyomtatvány Típusa',
  'LBL_PMSE_FORM_LABEL_GENERAL_SETTINGS' => 'Általános',
  'LBL_PMSE_FORM_LABEL_MODULE' => 'Modul',
  'LBL_PMSE_FORM_LABEL_OTHER_DERIVATION_OPTIONS' => 'Más Átvezetési Opciók',
  'LBL_PMSE_FORM_LABEL_READ_ONLY_FIELDS' => 'Csak olvasható mezők',
  'LBL_PMSE_FORM_LABEL_RELATED_MODULE' => 'Kapcsolódó Modul',
  'LBL_PMSE_FORM_LABEL_REQUIRED_FIELDS' => 'Kötelező Mezők',
  'LBL_PMSE_FORM_LABEL_RESPONSE_BUTTONS' => 'Nyomtatvány Gombjai',
  'LBL_PMSE_FORM_LABEL_TEAM' => 'Csapat',
  'LBL_PMSE_FORM_LABEL_UNIT' => 'Egység',
  'LBL_PMSE_FORM_LABEL_UPDATE_RECORD_OWNER' => 'Adattulajdonos Megváltoztatása',
  'LBL_PMSE_FORM_OPTION_ADMINISTRATOR' => 'Adminisztrátor',
  'LBL_PMSE_FORM_OPTION_APPROVE_REJECT' => 'Jováhagyás/Elutasítás',
  'LBL_PMSE_FORM_OPTION_CURRENT_USER' => 'Jelenlegi felhasználó',
  'LBL_PMSE_FORM_OPTION_DAYS' => 'Napok',
  'LBL_PMSE_FORM_OPTION_HOURS' => 'Órák',
  'LBL_PMSE_FORM_OPTION_MINUTES' => 'Percek',
  'LBL_PMSE_FORM_OPTION_RECORD_OWNER' => 'Adattulajdonos',
  'LBL_PMSE_FORM_OPTION_ROUND_ROBIN' => 'Ciklikus ütemezés',
  'LBL_PMSE_FORM_OPTION_ROUTE' => 'Átvezetés',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Kiválasztás...',
  'LBL_PMSE_FORM_OPTION_SELF_SERVICE' => 'Önkiszolgáló',
  'LBL_PMSE_FORM_OPTION_STATIC_ASSIGNMENT' => 'Statikus Kijelölés',
  'LBL_PMSE_FORM_OPTION_SUPERVISOR' => 'Felügyelő',
  'LBL_PMSE_FORM_OPTION_TARGET_MODULE' => 'Cél Modul',
  'LBL_PMSE_FORM_TITLE_ACTIVITY' => 'Tevékenység',
  'LBL_PMSE_FORM_TITLE_ADD_RELATED_RECORD' => 'Megfelelő Adat Hozzáadása',
  'LBL_PMSE_FORM_TITLE_ASSIGN_TEAM' => 'Körkörös',
  'LBL_PMSE_FORM_TITLE_ASSIGN_USER' => 'Felhasználó Hozzárendelése',
  'LBL_PMSE_FORM_TITLE_BUSINESS_RULE' => 'Üzleti Szabály',
  'LBL_PMSE_FORM_TITLE_CHANGE_FIELDS' => 'Mezők Megváltoztatása',
  'LBL_PMSE_FORM_TITLE_GATEWAY' => 'Átjáró',
  'LBL_PMSE_FORM_TITLE_LABEL_EVENT' => 'Esemény',
  'LBL_PMSE_FORM_TITLE_USER_DEFINITION' => 'Felhasználói Definíció',
  'LBL_PMSE_FORM_TOOLTIP_DURATION' => 'Meghatározza az időmérő esemény időtartamát',
  'LBL_PMSE_FORM_TOOLTIP_EVENT_MODULE' => 'Válassza ki a SugarCRM modult az eseményindító alkalmazásához',
  'LBL_PMSE_IMPORT_BUTTON_LABEL' => 'Importálás',
  'LBL_PMSE_IMPORT_PROCESS_DEFINITION_FAILURE' => 'Nem sikerült a fájlból Folyamat Definíciót generálni.',
  'LBL_PMSE_LABEL_DELETE' => 'Törlés',
  'LBL_PMSE_LABEL_DESCRIPTION' => 'Leírás',
  'LBL_PMSE_LABEL_DESIGN' => 'Tervezés',
  'LBL_PMSE_LABEL_DISABLE' => 'Tiltás',
  'LBL_PMSE_LABEL_ENABLE' => 'Engedélyezés',
  'LBL_PMSE_LABEL_EXPORT' => 'Export',
  'LBL_PMSE_LABEL_LOCKED_FIELDS' => 'Zárolt Mezők',
  'LBL_PMSE_LABEL_PROCESS_NAME' => 'Folyamatnév',
  'LBL_PMSE_LABEL_RULE' => 'Szabály',
  'LBL_PMSE_LABEL_TERMINATE_PROCESS' => 'Folyamat Befejezése',
  'LBL_PMSE_MESSAGE_ACTIVITY_NAME_ALREADY_EXISTS' => 'A "%s" név már létezik az alakcsaládban.',
  'LBL_PMSE_MESSAGE_ACTIVITY_NAME_EMPTY' => 'A tevékenység neve üres.',
  'LBL_PMSE_MESSAGE_CANCEL_CONFIRM' => 'Néhány beállítás megváltozott. Figyelmen kívül akarja hagyni a változtatásokat?',
  'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_INCOMING' => 'A Tevékenységnek egy befelé irányuló sorrendje kell, hogy legyen',
  'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_OUTGOING' => 'A Tevékenységnek egy kifelé irányuló sorrendje kell, hogy legyen',
  'LBL_PMSE_MESSAGE_ERROR_ANNOTATION' => 'A Szövegmagyarázatnak kell, hogy legyen egy hivatkozási sora.',
  'LBL_PMSE_MESSAGE_ERROR_BOUNDARY_EVENT_OUTGOING' => 'A Határ Eseménynek egy kifelé irányuló sorrendje kell, hogy legyen',
  'LBL_PMSE_MESSAGE_ERROR_END_EVENT_INCOMING' => 'A Befejező Eseménynek egy befelé irányuló sorrendje kell, hogy legyen',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_CONVERGING_INCOMING' => 'Az Átjárónak kell, hogy legyen kettő vagy több befelé irányuló sorrendje',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_CONVERGING_OUTGOING' => 'Az Átjárónak nem lehet egy kifelé irányuló sorrendje',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_DIVERGING_INCOMING' => 'Az Átjárónak lehet egy vagy több befelé irányuló sorrendje',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_DIVERGING_OUTGOING' => 'Az Átjárónak kell, hogy legyen kettő vagy több kifelé irányuló sorrendje',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_MIXED_INCOMING' => 'Az Átjárónak kell, hogy legyen kettő vagy több befelé irányuló sorrendje',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_MIXED_OUTGOING' => 'Az Átjárónak kell, hogy legyen kettő vagy több kifelé irányuló sorrendje',
  'LBL_PMSE_MESSAGE_ERROR_INTERMEDIATE_EVENT_INCOMING' => 'A Köztes Eseménynek egy befelé irányuló, vagy több sorrendje kell, hogy legyen',
  'LBL_PMSE_MESSAGE_ERROR_INTERMEDIATE_EVENT_OUTGOING' => 'A Köztes Eseménynek egy kifelé irányuló sorrendje kell, hogy legyen',
  'LBL_PMSE_MESSAGE_ERROR_START_EVENT_OUTGOING' => 'A Kezdő Eseménynek egy kifelé irányuló sorrendje kell, hogy legyen',
  'LBL_PMSE_MESSAGE_INVALID_CONNECTION' => 'Érvénytelen kapcsolat',
  'LBL_PMSE_MESSAGE_REMOVE_ALL_START_CRITERIA' => 'A modul megváltoztatásra kerül, így a feltétel is el lesz távolítva, mivel nem lesz kapcsolata az új  modulhoz.',
  'LBL_PMSE_MY_PROCESS_DEFINITIONS' => 'Folyamatdefinícióim',
  'LBL_PMSE_PROCESS_DEFINITIONS_DISABLED' => 'Letiltva',
  'LBL_PMSE_PROCESS_DEFINITIONS_ENABLED' => 'Engedélyezve',
  'LBL_PMSE_PROCESS_DEFINITION_EMPTY_WARNING' => 'Kérjük, válasszon ki egy érvényes *.bpm fájlt.',
  'LBL_PMSE_PROCESS_DEFINITION_IMPORT_SUCCESS' => 'A Folyamatdefiníció sikeresen importálásra került a rendszerbe.',
  'LBL_PMSE_PROCESS_DEFINITION_IMPORT_TEXT' => 'Új Folyamatdefiníció automatikus létrehozása egy *.bpm fájl importálásával az Ön fájlrendszeréből.',
  'LBL_PMSE_SAVE_DESIGN_BUTTON_LABEL' => 'Mentés és Tervezés',
  'LBL_PMSE_UPDATERFIELD_VARIABLES_LIST_TITLE' => '%MODULE% mezők',
  'LBL_PRJ_MODULE' => 'Cél Modul',
  'LBL_PRJ_STATUS' => 'Állapot',
  'LNK_LIST' => 'Folyamatdefiníciók Megtekintése',
);

