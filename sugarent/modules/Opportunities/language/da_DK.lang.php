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
    'LBL_MODULE_NAME' => 'Salgsmuligheder',
    'LBL_MODULE_NAME_SINGULAR' => 'Salgsmulighed',
    'LBL_MODULE_TITLE' => 'Salgsmuligheder: Startside',
    'LBL_SEARCH_FORM_TITLE' => 'Søg efter salgsmulighed',
    'LBL_VIEW_FORM_TITLE' => 'Vis salgsmulighed',
    'LBL_LIST_FORM_TITLE' => 'Salgsmulighedsliste',
    'LBL_OPPORTUNITY_NAME' => 'Salgsmulighedsnavn:',
    'LBL_OPPORTUNITY' => 'Salgsmulighed:',
    'LBL_NAME' => 'Salgsmulighedsnavn',
    'LBL_INVITEE' => 'Kontakter',
    'LBL_CURRENCIES' => 'Valutaer',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Navn',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontonavn',
    'LBL_LIST_DATE_CLOSED' => 'Luk',
    'LBL_LIST_AMOUNT' => 'Beløb',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Beløb',
    'LBL_ACCOUNT_ID' => 'Virksomheds-id',
    'LBL_CURRENCY_RATE' => 'Valuta kurs',
    'LBL_CURRENCY_ID' => 'Valuta-id',
    'LBL_CURRENCY_NAME' => 'Valutanavn',
    'LBL_CURRENCY_SYMBOL' => 'Valutasymbol',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LISTE_DATO_LUKKET',
//END DON'T CONVERT
    'UPDATE' => 'Salgsmulighed - valutaopdatering',
    'UPDATE_DOLLARAMOUNTS' => 'Opdater USD-beløb',
    'UPDATE_VERIFY' => 'Bekræft beløb',
    'UPDATE_VERIFY_TXT' => 'Kontrollerer, at beløbsværdierne i salgsmuligheder er gyldige decimaltal med kun numeriske tegn "0-9" og decimaler "."',
    'UPDATE_FIX' => 'Ret beløb',
    'UPDATE_FIX_TXT' => 'Forsøg på at rette ugyldige beløb ved at oprette en gyldig decimal ud fra det nuværende beløb. Ændrede beløb sikkerhedskopieres i databasefeltet amount_backup. Hvis du kører denne og får fejl, skal du ikke køre den igen uden at gendanne sikkerhedskopien, da det kan overskrive sikkerhedskopien med nye ugyldige data.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Opdater USD-beløb for salgsmuligheder baseret på de aktuelle valutakurser. Denne værdi bruges til at beregne diagrammer og vise valutabeløb.',
    'UPDATE_CREATE_CURRENCY' => 'Opretter ny valuta:',
    'UPDATE_VERIFY_FAIL' => 'Registrer mislykket verifikation:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Aktuelt beløb:',
    'UPDATE_VERIFY_FIX' => 'Kørsel af rettelse vil give',
    'UPDATE_INCLUDE_CLOSE' => 'Medtag lukkede poster',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nyt beløb:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Ny valuta:',
    'UPDATE_DONE' => 'Udført',
    'UPDATE_BUG_COUNT' => 'Der blev fundet fejl og gjort forsøg på at løse dem:',
    'UPDATE_BUGFOUND_COUNT' => 'Der blev fundet fejl:',
    'UPDATE_COUNT' => 'Poster opdateret:',
    'UPDATE_RESTORE_COUNT' => 'Postbeløb gendannet:',
    'UPDATE_RESTORE' => 'Gendan beløb',
    'UPDATE_RESTORE_TXT' => 'Gendanner beløbsværdier ud fra de sikkerhedskopier, der blev oprettet under rettelsen.',
    'UPDATE_FAIL' => 'Kunne ikke opdatere -',
    'UPDATE_NULL_VALUE' => 'Beløbet er NULL. Angiver det til 0 -',
    'UPDATE_MERGE' => 'Flet valutaer',
    'UPDATE_MERGE_TXT' => 'Fletter flere valutaer til en fælles valuta. Hvis der er flere valutaposter for samme valuta, skal du flette dem. Derved flettes også valutaerne for alle andre moduler.',
    'LBL_ACCOUNT_NAME' => 'Virksomhedsnavn:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Forventet lukkedato:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Forventet Close Date Tidsstempel',
    'LBL_TYPE' => 'Type:',
    'LBL_CAMPAIGN' => 'Kampagne:',
    'LBL_NEXT_STEP' => 'Næste trin:',
    'LBL_LEAD_SOURCE' => 'Kilde til kundeemne:',
    'LBL_SALES_STAGE' => 'Salgsfase:',
    'LBL_SALES_STATUS' => 'Status',
    'LBL_PROBABILITY' => 'Sandsynlighed "%":',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DUPLICATE' => 'Mulig identisk salgsmulighed',
    'MSG_DUPLICATE' => 'Den salgsmulighedspost, du er ved at oprette, kan være en dublet af en salgsmulighedspost, der allerede findes. Salgsmulighedsposter, der indeholder lignende navne, er angivet nedenfor.<br>Klik på Gem for at fortsætte med at oprette denne nye salgsmulighed, eller klik på Annuller for at vende tilbage til modulet uden at oprette salgsmuligheden.',
    'LBL_NEW_FORM_TITLE' => 'Opret salgsmulighed',
    'LNK_NEW_OPPORTUNITY' => 'Opret salgsmulighed',
    'LNK_CREATE' => 'Opret sag',
    'LNK_OPPORTUNITY_LIST' => 'Salgsmuligheder',
    'ERR_DELETE_RECORD' => 'Der skal angives et postnummer for at slette salgsmuligheden.',
    'LBL_TOP_OPPORTUNITIES' => 'Mine bedste åbne salgsmuligheder',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Er du sikker på, at du vil fjerne denne kontakt fra salgsmuligheden?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Er du sikker på, at du vil fjerne denne salgsmulighed fra projektet?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Salgsmuligheder',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    'LBL_RAW_AMOUNT' => 'Bruttobeløb',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Kundeemner',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenter',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekter',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruger',
    'LBL_LIST_SALES_STAGE' => 'Salgsfase',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mine lukkede salgsmuligheder',
    'LBL_TOTAL_OPPORTUNITIES' => 'Samlede salgsmuligheder',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Lukkede vundne salgsmuligheder',
    'LBL_ASSIGNED_TO_ID' => 'Tildelt til id',
    'LBL_CREATED_ID' => 'Oprettet af id',
    'LBL_MODIFIED_ID' => 'Ændret af id',
    'LBL_MODIFIED_NAME' => 'Ændret af brugernavn',
    'LBL_CREATED_USER' => 'Oprettet bruger',
    'LBL_MODIFIED_USER' => 'Ændret bruger',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampagner',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekter',
    'LABEL_PANEL_ASSIGNMENT' => 'Tildeling',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importér salgsmuligheder',
    'LBL_EDITLAYOUT' => 'Rediger layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Kampagne-id',
    'LBL_OPPORTUNITY_TYPE' => 'Salgsmulighedstype',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Tildelt brugernavn',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tildelt bruger-id',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Ændret af id',
    'LBL_EXPORT_CREATED_BY' => 'Oprettet af id',
    'LBL_EXPORT_NAME' => 'Navn',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Relaterede kontakters e-mail-adresser',
    'LBL_FILENAME' => 'Vedhæftet fil',
    'LBL_PRIMARY_QUOTE_ID' => 'Primært tilbud',
    'LBL_CONTRACTS' => 'Kontrakter',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontrakter',
    'LBL_PRODUCTS' => 'Relaterede produkter',
    'LBL_RLI' => 'Revenue Line Items',
    'LNK_OPPORTUNITY_REPORTS' => 'Salgsmulighedsrapporter',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Tilbud',
    'LBL_TEAM_ID' => 'Team-id',
    'LBL_TIMEPERIODS' => 'Tidsperioder',
    'LBL_TIMEPERIOD_ID' => 'Tidsperiode-id',
    'LBL_COMMITTED' => 'Forpligted',
    'LBL_FORECAST' => 'Inkluder i prognose',
    'LBL_COMMIT_STAGE' => 'Forpligtet fase',
    'LBL_COMMIT_STAGE_FORECAST' => 'Forpligte stadie prognose',
    'LBL_WORKSHEET' => 'Regneark',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Tilbud',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Muligheders hierarki',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Indstil forventet lukkedatofelt på de resulterende mulighedsposter for at være de tidligste eller seneste lukkedatoer for de eksisterende indtægt linje-emner',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Pipeline total er ',

    'LBL_OPPORTUNITY_ROLE'=>'Salgsmuligheds rolle:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Noter',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'Ved at klikke Bekræft, vil du blive slette ALLE data og prognosedata og ændre dine mulighedsvisning. Hvis dette ikke er, hvad du havde tænkt dig, skal du klikke på Annullér for at vende tilbage til tidligere indstillinger.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Hvis alle indtægt linje-emner er lukket og mindst én blev vundet',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'bliver mulighedssalgsfasen indstillet til "Lukket vundet".',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Hvis alle indtægt linje-emner er i "Lukket tabt" salgsfasen,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'bliver mulighedssalgsfasen indstillet til "Lukket tabt".',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Hvis eventuelle indtægt linje-emner stadigt er åbne,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'vil muligheden blive markeret med den mindst avancerede salgsfase.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Dette {{plural_module_name}} modul giver dig mulighed for at spore individuelle salg og linjeelementer, der hører til disse salg fra start til slut. Hver {{MODULE_NAME}} post repræsenterer en overskrift for en gruppe af {{revenuelineitems_module}} samt andre vigtige elementer, såsom {{quotes_module}}, {{contacts_module}}, osv. Hver {{revenuelineitems_singular_module}} er det potentielle salg i flere salgsfaser, indtil det mærkes enten "Closed Won" eller "Closed Lost". Dette {{MODULE_NAME}} element afspejler beløbet og den forventede Lukkedato for dens {{revenuelineitems_module}}. {{plural_module_name}} og {{revenuelineitems_module}} kan endda udnyttes yderligere ved at bruge Sugars {{forecasts_singular_module}} modul til at forstå og forudsige salgstendenser samt holde fokus på arbejdet med salgskvoter.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Dette {{plural_module_name}} modul giver dig mulighed for at spore individuelle salg og linjeposter, der hører til disse salg fra start til slut. Hver {{MODULE_NAME}} post repræsenterer en overskrift for en gruppe af {{revenuelineitems_module}} samt andre vigtige poster, såsom {{quotes_module}}, {{contacts_module}} osv. - Rediger 

-Rediger denne posts felter ved at klikke på et felt eller på knappen Rediger.
- Vis eller ændr links til andre poster i underpanelerne, herunder {{revenuelineitems_module}} ved at skifte den nederste venstre rude til "Data View".
- Foretag og vis brugernes kommentarer og post ændringer i {{activitystream_singular_module}} ved at skifte den nederste venstre rude til "Activity Stream". 
- Følg eller lad denne post være favorit med ikonerne til højre for posten navn.
- Yderligere handlinger er tilgængelige i dropdown menuen Actions til højre for redigeringsknappen.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Dette {{plural_module_name}} modul giver dig mulighed for at spore individuelle salg og tilhørende linjeposter, der hører til disse salg fra start til slut. Hver {{module_name}} post repræsenterer en overskrift for en gruppe af {{revenuelineitems_module}} samt ancre vigtige poster såsom {{quotes_module}}, {{contacts_module}}, etc.

For at oprette et {{module_name}}:
1. Angiv værdier i felterne som ønsket.
 - Felter markeret som "krævet" skal være udfyldt, før der gemmes.
 - Klik på¨"Vis mere" for at vise yderligere felter, om nødvendigt.
2. Klik på "Gem" for at færdiggøre den nye post og vende tilbage til forrige side.
3. Efter, der er gemt, anvend {{revenuelineitems_module}} underpanelet til at tilføje linjeposter til {{module_name}}.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Synkroniser til Marketo ®',
    'LBL_MKTO_ID' => 'Marketo Lead ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Top 10 salgsmuligheder',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Viser top Ti muligheder i et boblediagram.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Mine muligheder',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Mit teams muligheder",
);
