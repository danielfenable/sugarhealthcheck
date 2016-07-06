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
  'ERR_NO_OPPS' => 'Per vedere i grafici delle opportunità si prega di creare qualche opportunità.',
  'LBL_ALL_OPPORTUNITIES' => 'Il totale di tutte le opportunità è',
  'LBL_CAMPAIGN_ROI_TITLE_DESC' => 'Mostra il risultato della campagna per il ritorno di investimento.',
  'LBL_CHART_ACTION' => 'Azione',
  'LBL_CHART_DCE_ACTIONS_MONTH' => 'DCE Azioni per Tipo (Mese Corrente)',
  'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Fonte del Lead per Risultato',
  'LBL_CHART_MODULES_USED_DIRECT_REPORTS_30_DAYS' => 'Moduli Utilizzati per i Miei Report Diretti (Ultimi 30 Giorni)',
  'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'I miei Moduli Utilizzati (Ultimi 30 giorni)',
  'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'La mia Pipeline per Fase di Vendita',
  'LBL_CHART_OPPORTUNITIES_THIS_QUARTER' => 'Opportunità di questo Trimestre',
  'LBL_CHART_OUTCOME_BY_MONTH' => 'Risultati per Mese',
  'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline per Fonte del Lead',
  'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline per Fase di Vendita',
  'LBL_CHART_PIPELINE_BY_SALES_STAGE_FUNNEL' => 'Funnel Pipeline per Fase di Vendita',
  'LBL_CHART_TYPE' => 'Tipo Grafico:',
  'LBL_CLOSE_DATE_END' => 'Data Prevista Chiusura - A:',
  'LBL_CLOSE_DATE_START' => 'Data Prevista Chiusura - Da:',
  'LBL_CREATED_ON' => 'Ultimo aggiornamento',
  'LBL_DATE_END' => 'Data Fine:',
  'LBL_DATE_RANGE' => 'L´intervallo di tempo è',
  'LBL_DATE_RANGE_TO' => 'a',
  'LBL_DATE_START' => 'Data Inizio:',
  'LBL_EDIT' => 'Modifica',
  'LBL_LEAD_SOURCES' => 'Fonti del Lead:',
  'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Tutte le Opportunità per Fonte del Lead e per Risultato',
  'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Mostra gli importi cumulativi delle opportunità per i lead selezionati e per ricavo degli utenti selezionati. Il risultato si basa sulla fase di vendita Chiuso Vinto, Chiuso Perso o qualsiasi altro valore.',
  'LBL_LEAD_SOURCE_FORM_DESC' => 'Mostra gli importi cumulativi delle opportunità per i lead selezionati e per gli utenti selezionati.',
  'LBL_LEAD_SOURCE_FORM_TITLE' => 'Tutte le Opportunità per Fonte del Lead',
  'LBL_LEAD_SOURCE_OTHER' => 'Altro',
  'LBL_MODULE_NAME' => 'Dashboard',
  'LBL_MODULE_NAME_SINGULAR' => 'Dashboard',
  'LBL_MODULE_TITLE' => 'Dashboard: Home',
  'LBL_MONTH_BY_OUTCOME_DESC' => 'Mostra gli importi cumulativi delle opportunità per mese, per risultato, per utenti selezionati, ove la data di chiusura rientra nell´arco di tempo specificato. Il risultato si basa sulla fase di vendita Chiuso Vinto, Chiuso Perso o qualsiasi altra fase.',
  'LBL_MY_MODULES_USED_SIZE' => 'Conteggio Accessi',
  'LBL_NUMBER_OF_OPPS' => 'Numero delle Opportunità',
  'LBL_OPPS_IN_LEAD_SOURCE' => 'Opportunità dove la Fonte del Lead è',
  'LBL_OPPS_IN_STAGE' => 'dove la fase di vendita è',
  'LBL_OPPS_OUTCOME' => 'dove il risultato è',
  'LBL_OPPS_WORTH' => 'Valore Ppportunità',
  'LBL_OPP_SIZE' => 'Dimensioni Opportunità in',
  'LBL_OPP_THOUSANDS' => 'K',
  'LBL_PIPELINE_FORM_TITLE_DESC' => 'Mostra gli importi cumulativi per le fasi di vendita selezionate, per le tue opportunità dove la data di chiusura rientra nell´arco di tempo specificato.',
  'LBL_REFRESH' => 'Aggiorna',
  'LBL_ROLLOVER_DETAILS' => 'Passa sopra alle colonne per i dettagli.',
  'LBL_ROLLOVER_WEDGE_DETAILS' => 'Passa sopra alle fette per i dettagli.',
  'LBL_SALES_STAGES' => 'Fase di Vendita:',
  'LBL_SALES_STAGE_FORM_DESC' => 'Mostra gli importi cumulativi delle opportunità per le fase di vendita selezionate, per gli utenti selezionati dove la data di chiusura rientra nell´arco di tempo specificato.',
  'LBL_SALES_STAGE_FORM_TITLE' => 'Pipeline per Fase di Vendita',
  'LBL_TITLE' => 'Titolo:',
  'LBL_TOTAL_PIPELINE' => 'La Pipeline totale è',
  'LBL_USERS' => 'Utenti:',
  'LBL_YEAR' => 'Anno:',
  'LBL_YEAR_BY_OUTCOME' => 'Pipeline per Mese per Risultato',
  'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
  'LNK_NEW_CALL' => 'Nuova Chiamata',
  'LNK_NEW_CASE' => 'Nuovo Reclamo',
  'LNK_NEW_CONTACT' => 'Nuovo Contatto',
  'LNK_NEW_ISSUE' => 'Report Bug',
  'LNK_NEW_LEAD' => 'Nuovo Lead',
  'LNK_NEW_MEETING' => 'Nuova Riunione',
  'LNK_NEW_NOTE' => 'Nuova Nota o Allegato',
  'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
  'LNK_NEW_QUOTE' => 'Nuova Offerta',
  'LNK_NEW_TASK' => 'Nuovo Compito',
  'NTC_NO_LEGENDS' => 'Nessuno',
);

