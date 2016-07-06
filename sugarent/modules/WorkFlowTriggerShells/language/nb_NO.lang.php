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
  'ERR_DELETE_EMPTY' => 'Registreringen er allerede slettet eller ikke-eksisterende.',
  'ERR_DELETE_RECORD' => 'Du må oppgi et registeringsnummer for å slette registreringen.',
  'LBL_ALERT_TEMPLATES' => 'Alarmmaler',
  'LBL_APOSTROPHE_S' => '&#39;s',
  'LBL_COMPARE_ANY_TIME_PART2' => 'endres ikke over',
  'LBL_COMPARE_ANY_TIME_PART3' => 'bestemt tidsperiode',
  'LBL_COMPARE_ANY_TIME_TITLE' => 'Feltene forandres ikke over en bestemt tidsperiode',
  'LBL_COMPARE_CHANGE_PART' => 'endres',
  'LBL_COMPARE_CHANGE_TITLE' => 'Når en del av målgruppen endres',
  'LBL_COMPARE_COUNT_TITLE' => 'Trigger ved et særskilt tidspunkt',
  'LBL_COMPARE_SPECIFIC_PART' => 'endres til eller fra en spesifisert verdi',
  'LBL_COMPARE_SPECIFIC_PART_TIME' => 'LBL_COMPARE_SPECIFIC_PART_TIME',
  'LBL_COMPARE_SPECIFIC_TITLE' => 'Når en del av målgruppen endres til eller fra en spesifisert verdi',
  'LBL_COUNT_TRIGGER1' => 'Total',
  'LBL_COUNT_TRIGGER1_2' => 'sammenlignet med denne verdien',
  'LBL_COUNT_TRIGGER2' => 'filtrér gjennom beslektning',
  'LBL_COUNT_TRIGGER2_2' => 'kun',
  'LBL_COUNT_TRIGGER3' => 'filtrér spesielt gjennom',
  'LBL_COUNT_TRIGGER4' => 'filtrér gjennom en annen',
  'LBL_EVAL' => 'Triggerevaluering:',
  'LBL_FIELD' => 'område',
  'LBL_FILTER_FIELD_PART1' => 'Filtrér gjennom',
  'LBL_FILTER_FIELD_TITLE' => 'Når en del av målgruppen oppnår en gitt verdi',
  'LBL_FILTER_FORM_TITLE' => 'Definér en Workflow-forutsetning',
  'LBL_FILTER_LIST_STATEMEMT' => 'Filtrér objektene basert på det følgende:',
  'LBL_FILTER_REL_FIELD_PART1' => 'Oppgi beslektning',
  'LBL_FILTER_REL_FIELD_TITLE' => 'Når målgruppen endres og en del av en nærtliggende målgruppe oppnår en gitt verdi',
  'LBL_FUTURE_TRIGGER' => 'Oppgi ny',
  'LBL_LIST_EVAL' => 'Evaluering:',
  'LBL_LIST_FIELD' => 'Område:',
  'LBL_LIST_FORM_TITLE' => 'Triggerliste',
  'LBL_LIST_FRAME_PRI' => 'Trigger:',
  'LBL_LIST_FRAME_SEC' => 'Filter:',
  'LBL_LIST_NAME' => 'Beskrivelse:',
  'LBL_LIST_STATEMEMT' => 'Påskynd en hendelse basert på det følgende:',
  'LBL_LIST_TYPE' => 'Type:',
  'LBL_LIST_VALUE' => 'Verdi:',
  'LBL_MODULE' => 'modul',
  'LBL_MODULE_NAME' => 'Forutsettninger',
  'LBL_MODULE_NAME_SINGULAR' => 'Tilstand',
  'LBL_MODULE_SECTION_TITLE' => 'Når disse forutsetningene oppfylles',
  'LBL_MODULE_TITLE' => 'Workflow Triggers: Hjem',
  'LBL_MUST_SELECT_VALUE' => 'Du må velge en verdi for dette feltet',
  'LBL_NAME' => 'Triggernavn:',
  'LBL_NEW_FILTER_BUTTON_KEY' => 'F',
  'LBL_NEW_FILTER_BUTTON_LABEL' => 'Skap filter',
  'LBL_NEW_FILTER_BUTTON_TITLE' => 'Skap filter [Alt+F]',
  'LBL_NEW_FORM_TITLE' => 'Skap trigger',
  'LBL_NEW_TRIGGER_BUTTON_KEY' => 'T',
  'LBL_NEW_TRIGGER_BUTTON_LABEL' => 'Skap trigger',
  'LBL_NEW_TRIGGER_BUTTON_TITLE' => 'Skap trigger  [Alt+T]',
  'LBL_PAST_TRIGGER' => 'Oppgi gammel',
  'LBL_RECORD' => 'moduler',
  'LBL_SEARCH_FORM_TITLE' => 'Workflow Trigger Søk',
  'LBL_SELECT_1ST_FILTER' => 'Du må velge et gyldig første filter felt',
  'LBL_SELECT_2ND_FILTER' => 'Du må velge et gyldig andre filter felt',
  'LBL_SELECT_AMOUNT' => 'Du må velge mengde',
  'LBL_SELECT_OPTION' => 'Vennligst velg en valgmulighet.',
  'LBL_SELECT_TARGET_FIELD' => 'Vennligst velg et målområde.',
  'LBL_SELECT_TARGET_MOD' => 'Vennligst velg et område i nærhet av målet.',
  'LBL_SHOW' => 'Vis',
  'LBL_SHOW_PAST' => 'Endre tidligere verdi:',
  'LBL_SPECIFIC_FIELD' => '&#39;s spesifiserte område',
  'LBL_SPECIFIC_FIELD_LNK' => 'spesifikt område',
  'LBL_TRIGGER' => 'Når',
  'LBL_TRIGGER_FILTER_TITLE' => 'Triggerfiltere',
  'LBL_TRIGGER_FORM_TITLE' => 'Definér forutsetning for Workflow-utførelse',
  'LBL_TRIGGER_RECORD_CHANGE_TITLE' => 'Når målgruppen forandres',
  'LBL_TYPE' => 'Type:',
  'LBL_VALUE' => 'verdi',
  'LBL_WHEN_VALUE1' => 'Når verdien av området er',
  'LBL_WHEN_VALUE2' => 'Når verdien av',
  'LNK_NEW_TRIGGER' => 'Skap trigger',
  'LNK_NEW_WORKFLOW' => 'Skap Workflow',
  'LNK_TRIGGER' => 'Workflow Triggere',
  'LNK_WORKFLOW' => 'Workflowobjekter',
  'NTC_REMOVE_TRIGGER' => 'Er du sikker på at du vil slette denne triggeren?',
  'NTC_REMOVE_TRIGGER_PRIMARY' => 'Å fjerne en primær trigger vil fjerne alle triggere.',
);

