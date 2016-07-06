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
  'ERR_NO_OPPS' => 'Vennligst opprett noen Muligheter for å se Mulighetsgrafene',
  'LBL_ALL_OPPORTUNITIES' => 'Totalt antall Muligheter er',
  'LBL_CAMPAIGN_ROI_TITLE_DESC' => 'Viser kampanjerespons gjennom avkastning på investering.',
  'LBL_CHART_ACTION' => 'Handling',
  'LBL_CHART_DCE_ACTIONS_MONTH' => 'DCE handlinger etter type (nåværende måned)',
  'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Lead kilde etter utfall',
  'LBL_CHART_MODULES_USED_DIRECT_REPORTS_30_DAYS' => 'Moduler brukt av mine direkte rapporter (Siste 30 dager)',
  'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Mine moduler benyttet (siste 30 dager)',
  'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Min PIpeline etter salgstrinn',
  'LBL_CHART_OPPORTUNITIES_THIS_QUARTER' => 'Salgsmuligheter dette kvartal',
  'LBL_CHART_OUTCOME_BY_MONTH' => 'Resultat etter måned',
  'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline etter Lead kilde',
  'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline etter salgstrinn',
  'LBL_CHART_PIPELINE_BY_SALES_STAGE_FUNNEL' => 'Pipeline etter salgtrinns trakt',
  'LBL_CHART_TYPE' => 'Listetype:',
  'LBL_CLOSE_DATE_END' => 'Forventet avslutningsdato - Til:',
  'LBL_CLOSE_DATE_START' => 'Forventet avslutningsdato - Fra:',
  'LBL_CREATED_ON' => 'Sist kjørt den',
  'LBL_DATE_END' => 'Sluttdato:',
  'LBL_DATE_RANGE' => 'Tidsrommet er',
  'LBL_DATE_RANGE_TO' => 'til',
  'LBL_DATE_START' => 'Startdato:',
  'LBL_EDIT' => 'Redigér',
  'LBL_LEAD_SOURCES' => 'Lead-kilder:',
  'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Alle Muligheter fra en Lead-kilde fra utdata',
  'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Viser kumulativt mulighetsantall for en valgt lead-kilde fra utdata for valgte brukere. Utdata er basert på om salgsfasene er lukket vinner, lukket taper, eller av noen annen verdi.',
  'LBL_LEAD_SOURCE_FORM_DESC' => 'Viser kumulativt Mulighetsantall for en valgt Lead-kilde og valgte brukere.',
  'LBL_LEAD_SOURCE_FORM_TITLE' => 'Alle Muligheter etter Lead-kilde',
  'LBL_LEAD_SOURCE_OTHER' => 'Annen',
  'LBL_MODULE_NAME' => 'Instrumentpanel',
  'LBL_MODULE_NAME_SINGULAR' => 'Dashbord',
  'LBL_MODULE_TITLE' => 'Instrumentpanel: Hovedside',
  'LBL_MONTH_BY_OUTCOME_DESC' => 'Viser kumulativt mulighetsantall fra måned fra utdata for valgte brukere, der den forventede sluttdatoen er innenfor det valgte tidsrommet.  Utdata er basert på om salgsfasene er lukket vinner, lukket taper, eller av noen annen verdi.',
  'LBL_MY_MODULES_USED_SIZE' => 'Access Count',
  'LBL_NUMBER_OF_OPPS' => 'Antall muligheter',
  'LBL_OPPS_IN_LEAD_SOURCE' => 'muligheter hvor lead-kilden er',
  'LBL_OPPS_IN_STAGE' => 'der salgsfasen er',
  'LBL_OPPS_OUTCOME' => 'der resultatet er',
  'LBL_OPPS_WORTH' => 'mulighetsverdi',
  'LBL_OPP_SIZE' => 'Mulighetsstørrelse i',
  'LBL_OPP_THOUSANDS' => 'K',
  'LBL_PIPELINE_FORM_TITLE_DESC' => 'Viser kumulative verdier for valgte salgsfaser for dine muligheter, hvor den forventede sluttdatoen er innenfor den valgte tidsperioden.',
  'LBL_REFRESH' => 'Oppdatér',
  'LBL_ROLLOVER_DETAILS' => 'Svev over en stolpe for mer informasjon.',
  'LBL_ROLLOVER_WEDGE_DETAILS' => 'Svev over en kil for mer informasjon.',
  'LBL_SALES_STAGES' => 'Salgsfaser:',
  'LBL_SALES_STAGE_FORM_DESC' => 'Viser kumulative mulighetsantall for valgte salgsfaser for valgte brukere, hvor den forventede sluttdatoen er innenfor den valgte tidsperioden.',
  'LBL_SALES_STAGE_FORM_TITLE' => 'Salgstrakt etter salgsfase',
  'LBL_TITLE' => 'Tittel:',
  'LBL_TOTAL_PIPELINE' => 'Salgstraktsum:',
  'LBL_USERS' => 'Brukere:',
  'LBL_YEAR' => 'År:',
  'LBL_YEAR_BY_OUTCOME' => 'Salgstrakt pr måned etter resultat',
  'LNK_NEW_ACCOUNT' => 'Opprett bedrift',
  'LNK_NEW_CALL' => 'Opprett oppringning',
  'LNK_NEW_CASE' => 'Opprett sak',
  'LNK_NEW_CONTACT' => 'Opprett kontakt',
  'LNK_NEW_ISSUE' => 'Rapportér feil',
  'LNK_NEW_LEAD' => 'Opprett Lead',
  'LNK_NEW_MEETING' => 'Opprett møte',
  'LNK_NEW_NOTE' => 'Opprett notat eller vedlegg',
  'LNK_NEW_OPPORTUNITY' => 'Opprett Mulighet',
  'LNK_NEW_QUOTE' => 'Opprett forespørsel',
  'LNK_NEW_TASK' => 'Opprett oppgave',
  'NTC_NO_LEGENDS' => 'Ingen',
);

