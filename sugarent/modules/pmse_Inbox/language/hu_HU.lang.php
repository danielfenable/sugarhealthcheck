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
  'LBL_ACTIVITY_OWNER' => 'Folyamat Felhasználó',
  'LBL_ASSIGNED_USER' => 'Kijelölt Felhasználó',
  'LBL_CAS_ID' => 'Folyamat száma',
  'LBL_MODULE_NAME' => 'Folyamatok',
  'LBL_MODULE_NAME_SINGULAR' => 'Folyamatok',
  'LBL_MODULE_TITLE' => 'Folyamatok',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 on <strong>%s</strong> Engedélyezve',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 on <strong>%s</strong> Benyújtva',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 on <strong>%s</strong> kiadva a &1 felhasználónak',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 on <strong>%s</strong> Elutasítva',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 on <strong>%s</strong> Átirányítva',
  'LBL_PMSE_BUTTON_CANCEL' => 'Mégsem',
  'LBL_PMSE_BUTTON_CLEAR' => 'Töröl',
  'LBL_PMSE_BUTTON_CLOSE' => 'Bezárás',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Szerzői Napló Feldolgozása',
  'LBL_PMSE_BUTTON_REFRESH' => 'Frissítés',
  'LBL_PMSE_BUTTON_SAVE' => 'Mentés',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'SugarCRM Napló',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Biztosan törölni kívánja a #{} Számú Folyamatot?',
  'LBL_PMSE_FILTER' => 'Szűrő',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Megjegyzés',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Típus',
  'LBL_PMSE_FORM_LABEL_USER' => 'Felhasználó',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Kiválasztás...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'Elvégzett művelet: [%s]',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'A feladat még mindig ki van adva.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'neve: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'létrehozva',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'létrehozta a Folyamathoz # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'jelenlegi feladatazonosító %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Ismeretlen feladat elvégezve',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'szerkesztve',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'a Modulhoz tartozó %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Ismeretlen (a felhasználói azonosító:&#39;%s&#39; szerint)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'nem regisztrált művelet',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '(még nincs elkezdve)',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'átirányítva',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'feladat...',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'feladat...',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'a %s-el eseménnyel',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'a %s kiértékelésre és átvezetésre került a következő feladathoz az átjárón keresztül',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Megjegyzések hozzáadása',
  'LBL_PMSE_LABEL_APPROVE' => 'Jóváhagyás',
  'LBL_PMSE_LABEL_CANCEL' => 'Mégsem',
  'LBL_PMSE_LABEL_CLAIM' => 'Igénybejelentés',
  'LBL_PMSE_LABEL_CURRENT' => 'Aktuális',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Jelenlegi Tevékenység',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Esedékesség dátuma',
  'LBL_PMSE_LABEL_EXECUTE' => 'Végrehajtás',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Becsült Idő',
  'LBL_PMSE_LABEL_HISTORY' => 'Előzmények',
  'LBL_PMSE_LABEL_NOTES' => 'Megjegyzések megjelenítése',
  'LBL_PMSE_LABEL_OVERDUE' => 'Lejárt esedékességű',
  'LBL_PMSE_LABEL_PROCESS' => 'Folyamat',
  'LBL_PMSE_LABEL_REJECT' => 'Elutasítás',
  'LBL_PMSE_LABEL_ROUTE' => 'Átvezetés',
  'LBL_PMSE_LABEL_STATUS' => 'Állapot',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Nem hozzárendelt',
  'LBL_PMSE_MY_PROCESSES' => 'Folyamataim',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Önkiszolgáló Folyamatok',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Ciklus Hibaszáma',
  'LBL_PMSE_SHOW_PROCESS' => 'Folyamat megjelenítés',
  'LBL_PMSE_TITLE_HISTORY' => 'Folyamatelőzmények',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Folyamat #%s: Aktuális Státusz',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Folyamat Szerzői Napló Nézet',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Folyamat-Menedzsment',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Folyamat Megjegyzések',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Nem felügyelt Folyamatok',
  'LBL_PMSE_WARNING_CLEAR' => 'Biztosan törli a napló-adatokat? Ezt nem lehet visszacsinálni.',
  'LBL_PROCESS_DEFINITION_NAME' => 'Folyamatmeghatározás Neve',
  'LBL_PROCESS_NAME' => 'Folyamatnév',
  'LBL_PROCESS_OWNER' => 'Folyamat Tulajdonos',
  'LBL_RECORD_NAME' => 'Adatnév',
  'LBL_STATUS_CANCELLED' => 'Folyamatok Törölve',
  'LBL_STATUS_COMPLETED' => 'Folyamatok Elvégezve',
  'LBL_STATUS_ERROR' => 'Folyamatok Hiba',
  'LBL_STATUS_IN_PROGRESS' => 'Folyamatok Folyamatban',
  'LBL_STATUS_TERMINATED' => 'Folyamatok Befejezve',
  'LNK_LIST' => 'Folyamatok megtekintése',
);

