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
  'LBL_COMPARE_SPECIFIC_PART_TIME' => 'LBL_COMPARE_SPECIFIC_PART_TIME',
  'LBL_LIST_EVAL' => 'Eval:',
  'LBL_COMPARE_COUNT_TITLE' => 'Trigger on specific count',
  'LBL_TRIGGER_RECORD_CHANGE_TITLE' => 'When the target module changes',
  'LBL_COUNT_TRIGGER1_2' => 'compares to this amount',
  'LBL_COUNT_TRIGGER2' => 'filter by related',
  'LBL_COUNT_TRIGGER2_2' => 'only',
  'LBL_COUNT_TRIGGER3' => 'filter specifically by',
  'LBL_COUNT_TRIGGER4' => 'filter by a second',
  'LBL_NEW_FILTER_BUTTON_KEY' => 'F',
  'LBL_NEW_TRIGGER_BUTTON_KEY' => 'T',
  'LBL_SPECIFIC_FIELD' => '\'s specific field',
  'LBL_MODULE_NAME' => 'Tingimused',
  'LBL_MODULE_TITLE' => 'Töövoo käivitajad: Avaleht',
  'LBL_MODULE_SECTION_TITLE' => 'Kui need tngimused on täidetud',
  'LBL_SEARCH_FORM_TITLE' => 'Töövoo käivitaja otsing',
  'LBL_LIST_FORM_TITLE' => 'Käivitaja loend',
  'LBL_NEW_FORM_TITLE' => 'Loo käivitaja',
  'LBL_LIST_NAME' => 'Kirjeldus:',
  'LBL_LIST_VALUE' => 'Väärtus:',
  'LBL_LIST_TYPE' => 'Tüüp:',
  'LBL_LIST_FIELD' => 'Väli:',
  'LBL_NAME' => 'Käivitaja nimi:',
  'LBL_TYPE' => 'Tüüp:',
  'LBL_EVAL' => 'Käivitaja hinnang:',
  'LBL_SHOW_PAST' => 'Muuda viimast väärtust:',
  'LBL_SHOW' => 'Näita',
  'LNK_NEW_TRIGGER' => 'Loo käivitaja',
  'LNK_TRIGGER' => 'Töövoo käivitajad',
  'LBL_LIST_STATEMEMT' => 'Käivitus põhineb järgneval:',
  'LBL_FILTER_LIST_STATEMEMT' => 'Filtri omadused baseeruvad järgneval:',
  'NTC_REMOVE_TRIGGER' => 'Kas oled kindel, et soovid selle käivitaja eemaldada?',
  'LNK_NEW_WORKFLOW' => 'Loo töövoog',
  'LNK_WORKFLOW' => 'Töövoo eesmärgid',
  'LBL_ALERT_TEMPLATES' => 'Teavituse mallid',
  'LBL_TRIGGER' => 'Millal',
  'LBL_FIELD' => 'väli',
  'LBL_VALUE' => 'väärtus',
  'LBL_RECORD' => 'moodulid',
  'LBL_COMPARE_SPECIFIC_TITLE' => 'Kui väli sihtmoodulis muutub määratud väärtuseks või väärtusest',
  'LBL_COMPARE_SPECIFIC_PART' => 'muutub väärtuseks või väärtuseks',
  'LBL_COMPARE_CHANGE_TITLE' => 'Kui väli sihtmoodulis muutub',
  'LBL_COMPARE_CHANGE_PART' => 'muudatused',
  'LBL_COMPARE_ANY_TIME_TITLE' => 'Väli ei muutu teatud aja jooksul',
  'LBL_COMPARE_ANY_TIME_PART2' => 'ei muutu',
  'LBL_COMPARE_ANY_TIME_PART3' => 'määratud aja jooksul',
  'LBL_FILTER_FIELD_TITLE' => 'Kui väli sihtmoodulis sisaldab täpsustatud väärtust',
  'LBL_FILTER_FIELD_PART1' => 'Filter',
  'LBL_FILTER_REL_FIELD_TITLE' => 'Kui sihtmoodul muutub ja väli seotud moodulis sisaldab täpsustatud väärtust',
  'LBL_FILTER_REL_FIELD_PART1' => 'täpsusta seotuid',
  'LBL_FUTURE_TRIGGER' => 'Täpsusta uus',
  'LBL_PAST_TRIGGER' => 'Täpsusta vana',
  'LBL_COUNT_TRIGGER1' => 'Kokku',
  'LBL_MODULE' => 'moodul',
  'LBL_NEW_FILTER_BUTTON_TITLE' => 'Loo filter [Alt+F]',
  'LBL_NEW_FILTER_BUTTON_LABEL' => 'Loo filter',
  'LBL_NEW_TRIGGER_BUTTON_TITLE' => 'Loo käivitaja [Alt+T]',
  'LBL_NEW_TRIGGER_BUTTON_LABEL' => 'Loo käivitaja',
  'LBL_LIST_FRAME_SEC' => 'Filter:',
  'LBL_LIST_FRAME_PRI' => 'Käivitaja:',
  'LBL_TRIGGER_FILTER_TITLE' => 'Käivitusfiltrid:',
  'LBL_TRIGGER_FORM_TITLE' => 'Defineeri töövoo täitmise tingimused',
  'LBL_FILTER_FORM_TITLE' => 'Defineeri töövoo tingimused',
  'LBL_APOSTROPHE_S' => '\'s',
  'LBL_WHEN_VALUE1' => 'Kui selle välja väärtus on',
  'LBL_WHEN_VALUE2' => 'Kui väärtus',
  'LBL_SELECT_OPTION' => 'Palun vali tehing.',
  'LBL_SELECT_TARGET_FIELD' => 'Palun vali sihtväli.',
  'LBL_SELECT_TARGET_MOD' => 'Palun vali eesmärgistatud moodul.',
  'LBL_SPECIFIC_FIELD_LNK' => 'täpsustatud väli',
  'LBL_MUST_SELECT_VALUE' => 'Pead valima selle välja jaoks väärtuse',
  'LBL_SELECT_AMOUNT' => 'Pead valima koguse',
  'LBL_SELECT_1ST_FILTER' => 'Pead valima esimese kehtiva filtri välja',
  'LBL_SELECT_2ND_FILTER' => 'Pead valima teise kehtiva filtri välja',
);

