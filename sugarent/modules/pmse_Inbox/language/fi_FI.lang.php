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
  'LBL_ASSIGNED_USER' => 'Vastuuhenkilö',
  'LBL_CAS_ID' => 'Prosessinumero',
  'LBL_MODULE_NAME' => 'Prosessit',
  'LBL_MODULE_NAME_SINGULAR' => 'Prosessi',
  'LBL_MODULE_TITLE' => 'Prosessit',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '<strong>%s</strong>–> &0 hyväksytty',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '<strong>%s</strong>–> &0 claimattu',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '<strong>%s</strong>–> &0 määritetty käyttäjälle &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '<strong>%s</strong>–> &0 hylätty',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '<strong>%s</strong>–> &0 reititetty',
  'LBL_PMSE_BUTTON_CANCEL' => 'Peruuta',
  'LBL_PMSE_BUTTON_CLOSE' => 'Sulje',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Prosessin kirjoittajaloki',
  'LBL_PMSE_BUTTON_REFRESH' => 'Päivitä',
  'LBL_PMSE_BUTTON_SAVE' => 'Tallenna',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'SugarCRM-loki',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Perutaanko varmasti prosessi #{}?',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Muistio',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Tyyppi',
  'LBL_PMSE_FORM_LABEL_USER' => 'Käyttäjä',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Valitse...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'Suoritettu toiminto oli: <span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'Toiminto on vielä osoitettu (assigned).',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'on nimeltään “%s”',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'luotu',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'on luonut prosessin # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'on nykyään tehtävä-ID:llä %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Tehtiin tuntematon tehtävä',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'muokattu',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'moduulin “%s” %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Tuntematon (according UserId:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'ei ole rekisteröity toiminto (action)',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '(ei vielä aloitettu)',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'reititetty',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'tehtävä on ollut',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'tehtävä oli',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'tapahtumalla “%s”',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'portilla (gateway) “%s” evaluoitiin, reititettiin, ja palautettiin seuraavalle tehtävälle',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Lisää muistio',
  'LBL_PMSE_LABEL_APPROVE' => 'Hyväksy',
  'LBL_PMSE_LABEL_CANCEL' => 'Peruuta',
  'LBL_PMSE_LABEL_CLAIM' => 'Claim',
  'LBL_PMSE_LABEL_CURRENT' => 'Nykyinen',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Nykyinen aktiviteetti',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Eräpäivä',
  'LBL_PMSE_LABEL_EXECUTE' => 'Suorita',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Odotettu aika',
  'LBL_PMSE_LABEL_HISTORY' => 'Historia',
  'LBL_PMSE_LABEL_NOTES' => 'Näytä muistiot',
  'LBL_PMSE_LABEL_OVERDUE' => 'Myöhässä',
  'LBL_PMSE_LABEL_PROCESS' => 'Prosessi',
  'LBL_PMSE_LABEL_REJECT' => 'Hylkää',
  'LBL_PMSE_LABEL_ROUTE' => 'Reititä',
  'LBL_PMSE_LABEL_STATUS' => 'Status',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Määrittämätön',
  'LBL_PMSE_MY_PROCESSES' => 'Minun prosessini',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Itsepalveluprosessit',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Virhesyklien määrä',
  'LBL_PMSE_SHOW_PROCESS' => 'Näytä prosessit',
  'LBL_PMSE_TITLE_HISTORY' => 'Prosessihistoria',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Process #%s: nykyinen status',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Prosessin kirjoittajalokin näkijä',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Prosessinhallinta',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Prosessin muistiot',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Valvomattomat prosessit',
  'LBL_PROCESS_DEFINITION_NAME' => 'Prosessimääritelmän nimi',
  'LBL_PROCESS_NAME' => 'Prosessin nimi',
  'LBL_RECORD_NAME' => 'Tietueen nimi',
  'LBL_STATUS_CANCELLED' => 'Prosessit peruutettu',
  'LBL_STATUS_COMPLETED' => 'Prosessit suoritettu',
  'LBL_STATUS_ERROR' => 'Virhe prosesseissa',
  'LBL_STATUS_IN_PROGRESS' => 'Prosessit suorittumassa',
  'LBL_STATUS_TERMINATED' => 'Prosessit lopetettu',
  'LNK_LIST' => 'Näytä prosessit',
);

