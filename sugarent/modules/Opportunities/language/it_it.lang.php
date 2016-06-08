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
    'LBL_MODULE_NAME' => 'Opportunità',
    'LBL_MODULE_NAME_SINGULAR' => 'Opportunità',
    'LBL_MODULE_TITLE' => 'Opportunità: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Opportunità',
    'LBL_VIEW_FORM_TITLE' => 'Vista Opportunità',
    'LBL_LIST_FORM_TITLE' => 'Elenco Opportunità',
    'LBL_OPPORTUNITY_NAME' => 'Nome Opportunità:',
    'LBL_OPPORTUNITY' => 'Opportunità:',
    'LBL_NAME' => 'Nome Opportunità',
    'LBL_INVITEE' => 'Contatti',
    'LBL_CURRENCIES' => 'Valute',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nome',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_LIST_DATE_CLOSED' => 'Chiusa',
    'LBL_LIST_AMOUNT' => 'Importo',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Importo',
    'LBL_ACCOUNT_ID' => 'ID Azienda',
    'LBL_CURRENCY_RATE' => 'Tasso di Valuta',
    'LBL_CURRENCY_ID' => 'ID Valuta',
    'LBL_CURRENCY_NAME' => 'Nome Valuta',
    'LBL_CURRENCY_SYMBOL' => 'Simbolo Valuta',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Aggiornamento Opportunità - Valuta',
    'UPDATE_DOLLARAMOUNTS' => 'Aggiorna Importi Dollari U.S.',
    'UPDATE_VERIFY' => 'Controlla Importi',
    'UPDATE_VERIFY_TXT' => 'Verifica che gli importi nelle opportunità siano numeri decimali validi composti soltanto da caratteri numerici (0-9) e da decimali (.)',
    'UPDATE_FIX' => 'Importo Fisso',
    'UPDATE_FIX_TXT' => 'Prova a correggere gli importi non validi a partire dagli importi correnti. Verrà creata una copia di backup in un campo amount_backup. Se esegui la correzione e noti degli errori ripristina i valori precedenti prima di effettuare altre correzioni, altrimenti perderai  i valori memorizzati nella copia di backup.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Aggiorna gli importi in Dollari USA per le opportunità basandosi sul cambio corrente. Questo valore viene utilizzato per costruire i Grafici e l´elenco delle viste degli importi in valuta.',
    'UPDATE_CREATE_CURRENCY' => 'Creazione Nuova Valuta:',
    'UPDATE_VERIFY_FAIL' => 'Verifica Fallita del Record:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Importo Attuale:',
    'UPDATE_VERIFY_FIX' => 'L´avvio della correzione comporterebbe',
    'UPDATE_INCLUDE_CLOSE' => 'Includi Record Chiusi',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nuovo Importo:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Nuova Valuta:',
    'UPDATE_DONE' => 'Fatto',
    'UPDATE_BUG_COUNT' => 'Bugs trovati e in attesa di essere risolti:',
    'UPDATE_BUGFOUND_COUNT' => 'Bugs Trovati:',
    'UPDATE_COUNT' => 'Record Aggiornati:',
    'UPDATE_RESTORE_COUNT' => 'Importi del record ripristinati:',
    'UPDATE_RESTORE' => 'Ripristina Importi',
    'UPDATE_RESTORE_TXT' => 'Ripristina gli importi dalle copie di backup create durante la correzione.',
    'UPDATE_FAIL' => 'Impossibile aggiornare -',
    'UPDATE_NULL_VALUE' => 'L´importo è NULLO impostandolo a 0 -',
    'UPDATE_MERGE' => 'Unisci Valute',
    'UPDATE_MERGE_TXT' => 'Unisci più valute in un´unica valuta. Se noti che la stessa valuta si ripete più volte puoi scegliere di unirle. Quest´operazione unirà le valute anche per tutti gli altri moduli.',
    'LBL_ACCOUNT_NAME' => 'Nome Azienda:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Data Chiusura Prevista:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Data Chiusura Prevista Timestamp',
    'LBL_TYPE' => 'Tipo:',
    'LBL_CAMPAIGN' => 'Campagna:',
    'LBL_NEXT_STEP' => 'Prossimo Passo:',
    'LBL_LEAD_SOURCE' => 'Fonte del Lead:',
    'LBL_SALES_STAGE' => 'Fase di Vendita:',
    'LBL_SALES_STATUS' => 'Stato',
    'LBL_PROBABILITY' => 'Probabilità (%):',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_DUPLICATE' => 'Possibile Duplicato dell´Opportunità',
    'MSG_DUPLICATE' => 'L´opportunità che stai creando potrebbe generare un duplicato. L´opportunità ha un nome simile rispetto a quelle elencate qui sotto. Clicca Salva per continuare con la creazione di questa nuova opportunità, o clicca Annulla per ritornare al modulo senza creare l´opportunità.',
    'LBL_NEW_FORM_TITLE' => 'Nuova Opportunità',
    'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
    'LNK_CREATE' => 'Crea Trattativa',
    'LNK_OPPORTUNITY_LIST' => 'Visualizza Opportunità',
    'ERR_DELETE_RECORD' => 'Per eliminare questa opportunità deve essere specificato un numero del record.',
    'LBL_TOP_OPPORTUNITIES' => 'Le mie 10 migliori Opportunità',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Sei sicuro di voler eliminare il contatto da questa opportunità?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Sei sicuro di rimuovere questa opportunità dal progetto?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Opportunità',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
    'LBL_RAW_AMOUNT' => 'Importo Riga',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Lead',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenti',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Progetti',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assegnato a',
    'LBL_LIST_SALES_STAGE' => 'Fase di Vendita',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Le mie Oppurtunità Chiuse',
    'LBL_TOTAL_OPPORTUNITIES' => 'Totale Oppurtunità',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oppurtunità Chiuse Vinte',
    'LBL_ASSIGNED_TO_ID' => 'Assegnato a:',
    'LBL_CREATED_ID' => 'Creato da ID',
    'LBL_MODIFIED_ID' => 'Modificato da ID',
    'LBL_MODIFIED_NAME' => 'Modificato da Nome Utente',
    'LBL_CREATED_USER' => 'Utente Creato',
    'LBL_MODIFIED_USER' => 'Utente Modificato',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campagne',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Progetti',
    'LABEL_PANEL_ASSIGNMENT' => 'Assegnazione',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importa Oppurtunità',
    'LBL_EDITLAYOUT' => 'Modifica Layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'ID Campagna',
    'LBL_OPPORTUNITY_TYPE' => 'Tipo Opportunità',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nome Utente Assegnato',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Utente Assegnato',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificato da ID',
    'LBL_EXPORT_CREATED_BY' => 'Creato da ID',
    'LBL_EXPORT_NAME' => 'Nome',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Email Contatti Relazionati',
    'LBL_FILENAME' => 'Allegato',
    'LBL_PRIMARY_QUOTE_ID' => 'Offerta Primaria',
    'LBL_CONTRACTS' => 'Contratti',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contratti',
    'LBL_PRODUCTS' => 'Prodotti',
    'LBL_RLI' => 'Elemento dell´Opportunità',
    'LNK_OPPORTUNITY_REPORTS' => 'Visualizza Report Opportunità',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Offerte',
    'LBL_TEAM_ID' => 'ID Gruppo',
    'LBL_TIMEPERIODS' => 'Archi Temporali',
    'LBL_TIMEPERIOD_ID' => 'ID Arco Temporale',
    'LBL_COMMITTED' => 'Confermato',
    'LBL_FORECAST' => 'Includi nella Previsione',
    'LBL_COMMIT_STAGE' => 'Fase di Conferma',
    'LBL_COMMIT_STAGE_FORECAST' => 'Previsione',
    'LBL_WORKSHEET' => 'Matrice',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Offerte',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Gerarchia Opportunità',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Imposta la Data di Chiusura Prevista nelle seguenti Opportunità che sarà la prima o l´ultima data di chiusura degli Elementi dell´Opportunità esistenti.',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Pipeline Totale',

    'LBL_OPPORTUNITY_ROLE'=>'Ruolo Opportunità',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Note',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'Cliccando Conferma, cancellerai TUTTI i dati delle previsioni e modificherai la Vista Opportunità. Se non  è questo che intendi fare, clicca annulla per ritornare alle impostazioni precedenti.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Se tutte gli Elementi dell´Opportunità sono chiusi o almeno uno è stato vinto,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'la Fase di Vendita dell´Opportunità è "Chiuso Vinto".',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Se tutti gli Elementi dell´Opportunità sono in Fase di vendita "Chiuso Perso",',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'la Fase di Vendita dell´Opportunità è impostata in "Chiuso Perso".',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Se ci sono Elementi dell´Opportunità ancora aperti,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'l´Opportunità verrà contrassegnata con la Fase di Vendita meno avanzata.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Il modulo {{plural_module_name}} consente di tenere traccia delle singole vendite e degli elementi della riga che appartengono a quelle vendite dall&#39;inizio alla fine. Ogni record {{module_name}} rappresenta un&#39;intestazione per un gruppo di {{revenuelineitems_module}} e si riferisce anche ad altri record importanti quali ad esempio {{quotes_module}}, {{contacts_module}}, ecc. 

Ogni {{revenuelineitems_singular_module}} è la potenziale vendita di un determinato prodotto e comprende dati di vendita pertinenti. Ogni {{revenuelineitems_singular_module}} avanza tipicamente attraverso vari Fasi di Vendita fino a che non viene contrassegnato come "Chiuso Vinto" o "Chiuso perso". Il record {{module_name}} riflette l&#39;importo e la data di chiusura prevista del suo {{revenuelineitems_module}}. {{plural_module_name}} e {{revenuelineitems_module}} possono essere ulteriormente sfruttati servendosi del modulo {{forecasts_singular_module}}ing di Sugar per capire e prevedere i trend di vendite oltre che per concentrare il lavoro e ottenere quote di vendita.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Il modulo {{plural_module_name}} consente di tenere traccia delle singole vendite e degli elementi della riga che appartengono a quelle vendite dall&#39;inizio alla fine. Ogni record {{module_name}} rappresenta un&#39;intestazione per un gruppo di {{revenuelineitems_module}} e si riferisce anche ad altri record importanti quali ad esempio {{quotes_module}}, {{contacts_module}}, ecc.

- Modificare i record di questo campo facendo clic su un campo individuale o sul pulsante Edit.
- Visualizzare o modificare i link verso altri record nei sottopannelli, compresi {{revenuelineitems_module}}, spostando il pannello inferiore sinistro su "Visualizzazione Dati".
- Apportare e visualizzare commenti utente e modificare la cronologia dei cambiamenti in {{activitystream_singular_module}} spostando il pannello inferiore sinistro su "Flusso attività".
- Seguire o rendere preferito questo record servendosi delle icone sul lato destro del nome del record.
- Sono disponibili azioni aggiuntive nel menu Azioni a discesa, sul lato destro del pulsante Modifica.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Il modulo {{plural_module_name}} consente di tenere traccia delle singole vendite e degli elementi della riga che appartengono a quelle vendite dall&#39;inizio alla fine. Ogni record {{module_name}} rappresenta un&#39;intestazione per un gruppo di {{revenuelineitems_module}} e si riferisce anche ad altri record importanti quali ad esempio {{quotes_module}}, {{contacts_module}}, ecc.

Per creare un {{module_name}}:
1. Fornire i valori per i campi, come richiesto.
 - I campi contrassegnati con "Richiesto" vanno completati prima del salvataggio.
 - Fare clic su "Mostra di più" per esporre campi aggiuntivi, ove necessario.
2. Fare clic su "Salva" per finalizzare il nuovo record e tornare alla pagina precedente.
3. Dopo il salvataggio, usare il sottopannello {{revenuelineitems_module}} per aggiungere elementi di riga al {{module_name}}.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Sincronizza con Marketo®',
    'LBL_MKTO_ID' => 'ID Lead Marketo',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Top 10 Opportunità',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Visualizza le 10 migliori Opportunità in un grafico a bolle.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Le mie Opportunità',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Le Opportunità del mio Gruppo",
);
