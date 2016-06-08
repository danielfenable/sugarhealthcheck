<?php

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

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Müügivõimalused',
    'LBL_MODULE_NAME_SINGULAR' => 'Opportunity',
    'LBL_MODULE_TITLE' => 'Müügivõimalused: Avaleht',
    'LBL_SEARCH_FORM_TITLE' => 'Müügivõimaluse otsing',
    'LBL_VIEW_FORM_TITLE' => 'Müügivõimaluse vaade',
    'LBL_LIST_FORM_TITLE' => 'Müügivõimaluse loend',
    'LBL_OPPORTUNITY_NAME' => 'Müügivõimaluse nimi:',
    'LBL_OPPORTUNITY' => 'Müügivõimalus:',
    'LBL_NAME' => 'Müügivõimaluse nimi:',
    'LBL_INVITEE' => 'Kontaktid',
    'LBL_CURRENCIES' => 'Valuutad',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nimi',
    'LBL_LIST_ACCOUNT_NAME' => 'Ettevõtte nimi',
    'LBL_LIST_DATE_CLOSED' => 'Sulge',
    'LBL_LIST_AMOUNT' => 'Müügivõimaluse summa',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Summa',
    'LBL_ACCOUNT_ID' => 'Ettevõtte ID',
    'LBL_CURRENCY_RATE' => 'Currency Rate',
    'LBL_CURRENCY_ID' => 'Valuuta ID',
    'LBL_CURRENCY_NAME' => 'Valuuta nimi',
    'LBL_CURRENCY_SYMBOL' => 'Valuuta sümbol',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Müügivõimalus - valuuta uuendamine',
    'UPDATE_DOLLARAMOUNTS' => 'Uuenda USD summasid',
    'UPDATE_VERIFY' => 'Kontrolli summasid',
    'UPDATE_VERIFY_TXT' => 'Konttrollib, et müügivõimaluste koguväärtused on kehtivad kümnendmurdudes ainult numbrisümbolites (0-9) ja kümnendikes(.)',
    'UPDATE_FIX' => 'Fix summad',
    'UPDATE_FIX_TXT' => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for sales based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
    'UPDATE_CREATE_CURRENCY' => 'Uue valuuta loomine:',
    'UPDATE_VERIFY_FAIL' => 'Kirje ebaõnnestumise kontroll:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Praegune summa:',
    'UPDATE_VERIFY_FIX' => 'Running Fix would give',
    'UPDATE_INCLUDE_CLOSE' => 'Lisa suletud kirjed',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Uus summa:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Uus valuuta:',
    'UPDATE_DONE' => 'Tehtud',
    'UPDATE_BUG_COUNT' => 'Bugid on leitud ja neid üritatakse lahendada:',
    'UPDATE_BUGFOUND_COUNT' => 'Leitud bugid:',
    'UPDATE_COUNT' => 'Uuendatud kirjed:',
    'UPDATE_RESTORE_COUNT' => 'Kirje summad taastatud:',
    'UPDATE_RESTORE' => 'Taasta summad',
    'UPDATE_RESTORE_TXT' => 'Restores amount values from the backups created during fix.',
    'UPDATE_FAIL' => 'Ei saa uuendada -',
    'UPDATE_NULL_VALUE' => 'Amount is NULL setting it to 0 -',
    'UPDATE_MERGE' => 'Mesti valuutad',
    'UPDATE_MERGE_TXT' => 'Mesti erinevad valuutad üheks valuutaks. Kui on ernevaid valuutakirjeid ühe valuuta kohta, siis mesti need kokku. See mestib valuutad ka kõigi teiste moodulite jaoks.',
    'LBL_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_CURRENCY' => 'Valuuta:',
    'LBL_DATE_CLOSED' => 'Oodatav sulgemiskuupäev:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Expected Close Date Timestamp',
    'LBL_TYPE' => 'Tüüp:',
    'LBL_CAMPAIGN' => 'Kampaania:',
    'LBL_NEXT_STEP' => 'Järgmine samm:',
    'LBL_LEAD_SOURCE' => 'Müügivihje allikas:',
    'LBL_SALES_STAGE' => 'Müügistaadium:',
    'LBL_SALES_STATUS' => 'Olek',
    'LBL_PROBABILITY' => 'Tõenäosus (%)',
    'LBL_DESCRIPTION' => 'Kirjeldus:',
    'LBL_DUPLICATE' => 'Võimalik topelt müügivõimalus',
    'MSG_DUPLICATE' => 'Müügivõimaluse kirje, mida hetkel lood võib olla duplikaat juba olemasolevast müügivõimaluse kirjest. Müügivõimaluse kirjed, mis sisaldavad sarnaseid nimesid ja/või aadresse on väljatoodud allpool. Kliki Salvesta selle uue müügivõimaluse loomiseks või kliki Tühista moodulisse tagasiminemiseks müügivõimalust loomata.',
    'LBL_NEW_FORM_TITLE' => 'Loo müügivõimalus',
    'LNK_NEW_OPPORTUNITY' => 'Loo müügivõimalus',
    'LNK_CREATE' => 'Create Deal',
    'LNK_OPPORTUNITY_LIST' => 'Vaata müügivõimalusi',
    'ERR_DELETE_RECORD' => 'Müügivõimaluse kustutamiseks täpsusta kirje numbrit.',
    'LBL_TOP_OPPORTUNITIES' => 'Minu Top avatud müügivõimalused',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Oled kindel, et soovid selle kontakti müügivõimalustest eemaldada?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Oled kindel, et soovid selle müügivõimaluse projektist eemaldada?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Müügivõimalused',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tegevused',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ajalugu',
    'LBL_RAW_AMOUNT' => 'Rea summa',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Müügivihjed',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktid',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumendid',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektid',
    'LBL_ASSIGNED_TO_NAME' => 'Vastutaja:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Määratud kasutaja',
    'LBL_LIST_SALES_STAGE' => 'Müügistaadium',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Minu suletud müügivõimalused',
    'LBL_TOTAL_OPPORTUNITIES' => 'Müügivõimalused kokku',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Suletud võidetud müügivõimalused',
    'LBL_ASSIGNED_TO_ID' => 'Määratud kasutaja:',
    'LBL_CREATED_ID' => 'Looja Id',
    'LBL_MODIFIED_ID' => 'Muutja Id',
    'LBL_MODIFIED_NAME' => 'Muutja nime järgi',
    'LBL_CREATED_USER' => 'Loodud kasutaja',
    'LBL_MODIFIED_USER' => 'Muudetud kasutaja',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampaaniad',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektid',
    'LABEL_PANEL_ASSIGNMENT' => 'Määramine',
    'LNK_IMPORT_OPPORTUNITIES' => 'Impordi müügivõimalused',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_OPPORTUNITY_TYPE' => 'Opportunity Type',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User Name',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigned User ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Muutja ID',
    'LBL_EXPORT_CREATED_BY' => 'Created By ID',
    'LBL_EXPORT_NAME' => 'Nimi',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Related Contacts&#39; Emails',
    'LBL_FILENAME' => 'Attachment',
    'LBL_PRIMARY_QUOTE_ID' => 'Primary Quote',
    'LBL_CONTRACTS' => 'Lepingud',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Lepingud',
    'LBL_PRODUCTS' => 'Quoted Line Items',
    'LBL_RLI' => 'Revenue Line Items',
    'LNK_OPPORTUNITY_REPORTS' => 'Vaata müügivõimaluste aruandeid',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Pakkumised',
    'LBL_TEAM_ID' => 'Meeskonna ID:',
    'LBL_TIMEPERIODS' => 'Ajaperioodid',
    'LBL_TIMEPERIOD_ID' => 'Time Period ID',
    'LBL_COMMITTED' => 'Committed',
    'LBL_FORECAST' => 'Include in Forecast',
    'LBL_COMMIT_STAGE' => 'Commit Stage',
    'LBL_COMMIT_STAGE_FORECAST' => 'Forecast',
    'LBL_WORKSHEET' => 'Worksheet',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Quotes',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Opportunity Hierarchy',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Set the Expected Close Date field on the resulting Opportunity records to be the earliest or latest close dates of the existing Revenue Line Items',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Pipeline Total is ',

    'LBL_OPPORTUNITY_ROLE'=>'Opportunity Role',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Märkused:',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'By clicking Confirm, you will be erasing ALL Forecasts data and changing your Opportunities View. If this is not what you intended, click cancel to return to previous settings.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'If all Revenue Line Items are closed and at least one was won,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'the Opportunity Sales Stage is set to "Closed Won".',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'If all Revenue Line Items are in the "Closed Lost" Sales Stage,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'the Opportunity Sales Stage is set to "Closed Lost".',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'If any Revenue Line Items are still open,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'the Opportunity will be marked with the least-advanced Sales Stage.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'The {{plural_module_name}} module allows you to track individual sales and the line items belonging to those sales from start to finish. Each {{module_name}} record represents a header for a group of {{revenuelineitems_module}} as well as relating to other important records such as {{quotes_module}}, {{contacts_module}}, etc. Each {{revenuelineitems_singular_module}} is the prospective sale of a particular product and includes relevant sale data. Each {{revenuelineitems_singular_module}} will typically progress through several Sales Stages until it is marked either "Closed Won" or "Closed Lost". The {{module_name}} record reflects the amount and expected close date of its {{revenuelineitems_module}}. {{plural_module_name}} and {{revenuelineitems_module}} can be leveraged even further by using Sugar&#39;s {{forecasts_singular_module}}ing module to understand and predict sales trends as well as focus work to achieve sales quotas.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'The {{plural_module_name}} module allows you to track individual sales and the line items belonging to those sales from start to finish. Each {{module_name}} record represents a header for a group of {{revenuelineitems_module}} as well as relating to other important records such as {{quotes_module}}, {{contacts_module}}, etc.

- Edit this record&#39;s fields by clicking an individual field or the Edit button.
- View or modify links to other records in the subpanels, including {{revenuelineitems_module}}, by toggling the bottom left pane to "Data View".
- Make and view user comments and record change history in the {{activitystream_singular_module}} by toggling the bottom left pane to "Activity Stream".
- Follow or favorite this record using the icons to the right of the record name.
- Additional actions are available in the dropdown Actions menu to the right of the Edit button.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'The {{plural_module_name}} module allows you to track individual sales and the line items belonging to those sales from start to finish. Each {{module_name}} record represents a header for a group of {{revenuelineitems_module}} as well as relating to other important records such as {{quotes_module}}, {{contacts_module}}, etc.

To create an {{module_name}}:
1. Provide values for the fields as desired.
 - Fields marked "Required" must be completed prior to saving.
 - Click "Show More" to expose additional fields if necessary.
2. Click "Save" to finalize the new record and return to the previous page.
3. After saving, use the {{revenuelineitems_module}} subpanel to add line items to the {{module_name}}.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Sync to Marketo&reg;',
    'LBL_MKTO_ID' => 'Marketo Lead ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Top 10 Sales Opportunities',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Displays top ten Opportunities in a bubble chart.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'My Opportunities',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "My Team's Opportunities",
);
