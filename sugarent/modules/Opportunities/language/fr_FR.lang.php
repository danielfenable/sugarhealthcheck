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
    'LBL_MODULE_NAME' => 'Affaires',
    'LBL_MODULE_NAME_SINGULAR' => 'Affaire',
    'LBL_MODULE_TITLE' => 'Affaires',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher une Affaire',
    'LBL_VIEW_FORM_TITLE' => 'Vue Affaire',
    'LBL_LIST_FORM_TITLE' => 'Liste des Affaires',
    'LBL_OPPORTUNITY_NAME' => 'Nom Affaire :',
    'LBL_OPPORTUNITY' => 'Affaire :',
    'LBL_NAME' => 'Nom Affaire',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Devises',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Affaires',
    'LBL_LIST_ACCOUNT_NAME' => 'Compte',
    'LBL_LIST_DATE_CLOSED' => 'Clôture',
    'LBL_LIST_AMOUNT' => 'Réaliste',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Montant',
    'LBL_ACCOUNT_ID' => 'Compte (ID)',
    'LBL_CURRENCY_RATE' => 'Taux de change',
    'LBL_CURRENCY_ID' => 'Devise (ID)',
    'LBL_CURRENCY_NAME' => 'Devise',
    'LBL_CURRENCY_SYMBOL' => 'Symbole de la devise',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Affaire - Devise mise à jour',
    'UPDATE_DOLLARAMOUNTS' => 'Mise à jour des montants en devise par défaut',
    'UPDATE_VERIFY' => 'Vérifier les montants',
    'UPDATE_VERIFY_TXT' => 'Vérifie que les montants des Affaires contiennent des valeurs numériques correctes (valeurs numériques (0-9) et séparateur (,.)',
    'UPDATE_FIX' => 'Réparer les montants',
    'UPDATE_FIX_TXT' => 'Tentative de correction des montants invalides. Les anciens montants seront sauvegardés en base dans le champ amount_backup. Si vous constatez des dysfonctionnement ne l’exécuter pas une seconde fois car vous perdriez votre backup du champ.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Mise à jour des montants des Affaires basés sur le cours actuel des devises. Cette valeur est utilisée pour réaliser les montants en devises des graphiques et vues liste.',
    'UPDATE_CREATE_CURRENCY' => 'Créer une devise :',
    'UPDATE_VERIFY_FAIL' => 'Échec de Verification de cet enregistrement :',
    'UPDATE_VERIFY_CURAMOUNT' => 'Montant actuel :',
    'UPDATE_VERIFY_FIX' => 'Lancer la réparation',
    'UPDATE_INCLUDE_CLOSE' => 'Inclure enregistrements clos',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nouveau Montant :',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Nouvelle devise :',
    'UPDATE_DONE' => 'Terminé',
    'UPDATE_BUG_COUNT' => 'Bugs trouvés, tentative de correction :',
    'UPDATE_BUGFOUND_COUNT' => 'Bugs trouvés :',
    'UPDATE_COUNT' => 'Enregistrement mis à jour :',
    'UPDATE_RESTORE_COUNT' => 'Montants enregistrés restaurés :',
    'UPDATE_RESTORE' => 'Restaurer les montants',
    'UPDATE_RESTORE_TXT' => 'Restaurer les montants depuis le backup créé lors de la réparation.',
    'UPDATE_FAIL' => 'Impossible de mettre à jour -',
    'UPDATE_NULL_VALUE' => 'Le montant est NULL et remplacé par 0 -',
    'UPDATE_MERGE' => 'Fusionner les devises',
    'UPDATE_MERGE_TXT' => 'Fusionner les devises. Si vous notez qu&#39;il y a plusieurs devises enregistrées pour la même devise, vous pouvez choisir de les fusionner. Cela va également fusionner les devises pour tous les autres modules.',
    'LBL_ACCOUNT_NAME' => 'Compte:',
    'LBL_CURRENCY' => 'Devise:',
    'LBL_DATE_CLOSED' => 'Date de Clôture :',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Timestamp date clôture attendue',
    'LBL_TYPE' => 'Type :',
    'LBL_CAMPAIGN' => 'Campagne :',
    'LBL_NEXT_STEP' => 'Prochaine étape:',
    'LBL_LEAD_SOURCE' => 'Origine Principale:',
    'LBL_SALES_STAGE' => 'Phase de vente:',
    'LBL_SALES_STATUS' => 'Statut',
    'LBL_PROBABILITY' => 'Probabilité (%):',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DUPLICATE' => 'Possibilité de duplication des Affaires',
    'MSG_DUPLICATE' => 'Possibilité de doublon avec une Affaire existante. La liste ci-dessous reprend les Affaires similaires. Vous pouvez soit en sélectionner une dans la liste ci-dessous, soit cliquer sur "Sauvegarder" pour poursuivre la création, soit cliquer sur "Annuler".',
    'LBL_NEW_FORM_TITLE' => 'Créer une Affaire',
    'LNK_NEW_OPPORTUNITY' => 'Créer une Affaire',
    'LNK_CREATE' => 'Créer Affaire',
    'LNK_OPPORTUNITY_LIST' => 'Affaires',
    'ERR_DELETE_RECORD' => 'Un ID doit être sélectionné pour toute suppression.',
    'LBL_TOP_OPPORTUNITIES' => 'Top des Affaires',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Êtes-vous sûr de vouloir supprimer ce contact pour cette Affaire ?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Êtes-vous sûr de vouloir supprimer cette Affaire de ce Projet ?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Affaires',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités à Réaliser',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique et Activités terminées',
    'LBL_RAW_AMOUNT' => 'Montant Brut',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_LIST_SALES_STAGE' => 'Phase de vente',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mes Affaires clôturées',
    'LBL_TOTAL_OPPORTUNITIES' => 'Total des Affaires',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Affaires cloturées et gagnées',
    'LBL_ASSIGNED_TO_ID' => 'Assigné à (ID)',
    'LBL_CREATED_ID' => 'Créé par (ID)',
    'LBL_MODIFIED_ID' => 'Modifié par (ID)',
    'LBL_MODIFIED_NAME' => 'Modifié par',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campagnes',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LABEL_PANEL_ASSIGNMENT' => 'Assignation',
    'LNK_IMPORT_OPPORTUNITIES' => 'Import Affaires',
    'LBL_EDITLAYOUT' => 'Éditer la mise en page' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Campagne (ID)',
    'LBL_OPPORTUNITY_TYPE' => 'Type',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigné à',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigné à (ID)',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modifié par (ID)',
    'LBL_EXPORT_CREATED_BY' => 'Créé par (ID)',
    'LBL_EXPORT_NAME' => 'Nom',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Historique des emails des contacts liés',
    'LBL_FILENAME' => 'Pièce jointe',
    'LBL_PRIMARY_QUOTE_ID' => 'Devis principal',
    'LBL_CONTRACTS' => 'Contrats',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contrats',
    'LBL_PRODUCTS' => 'Produits',
    'LBL_RLI' => 'Lignes de revenu',
    'LNK_OPPORTUNITY_REPORTS' => 'Rapports sur les Affaires',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Devis',
    'LBL_TEAM_ID' => 'Équipe (ID)',
    'LBL_TIMEPERIODS' => 'Périodes',
    'LBL_TIMEPERIOD_ID' => 'Période (ID)',
    'LBL_COMMITTED' => 'Soumis',
    'LBL_FORECAST' => 'Incluse dans Prévision',
    'LBL_COMMIT_STAGE' => 'Étape de soumission',
    'LBL_COMMIT_STAGE_FORECAST' => 'Prévision',
    'LBL_WORKSHEET' => 'Feuille de travail',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Devis',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Hiérarchie Affaire',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Définit la date de clôture sur l&#39;Affaire, par rapport à la date la plus proche ou la plus lointaine des dates sur les Lignes de revenu associées',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Montant du portefeuille',

    'LBL_OPPORTUNITY_ROLE'=>'Rôle pour cette Affaire',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Notes',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'En cliquant sur Confirmer, vous effacerez TOUTES les données des Prévisions et modifierez la vue des Affaires. Si vous ne souhaitez pas faire cela veuillez cliquer sur Annuler.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Si toutes les Lignes de revenu sont closes et qu&#39;au moins une a été gagnée,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'la phase de vente de l&#39;Affaire est définie à "Gagné"',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Si toutes les Lignes de revenu sont dans la phase de vente "Perdu",',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'la phase de vente de l&#39;Affaire est définie à "Perdu"',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Si au moins une Ligne de revenu est toujours ouverte,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'la phase de vente de l&#39;Affaire sera définie à la phase la moins avancée.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Le module {{plural_module_name}} vous permet de suivre les ventes individuelles ainsi que les articles associés à ces ventes de bout en bout. Chaque enregistrement d&#39;{{module_name}} représente un en-tête pour un groupe de {{revenuelineitems_module}} et est associé à d&#39;autres documents importants tels que {{quotes_module}}, {{contacts_module}}, etc. Chaque {{revenuelineitems_singular_module}} représente la vente future d&#39;un produit particulier et inclut des informations pertinentes sur la vente. Chaque {{revenuelineitems_singular_module}} passera en général par plusieurs phases de vente jusqu&#39;à ce qu&#39;elle soit marquée « Gagné » ou « Perdu ». L&#39;enregistrement {{module_name}} reflète le montant et la date de clôture prévue de ses {{revenuelineitems_module}}. Les données {{plural_module_name}} et {{revenuelineitems_module}} peuvent être exploitées encore davantage à l&#39;aide du module {{forecasts_singular_module}} de Sugar pour comprendre et prédire l&#39;évolution des ventes et pour mieux cibler les efforts afin d&#39;atteindre les quotas de vente.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Le module {{plural_module_name}} vous permet de suivre les ventes individuelles ainsi que les articles associés à ces ventes de bout en bout. Chaque enregistrement de {{module_name}} représente un en-tête pour un groupe de {{revenuelineitems_module}} et est associé à d&#39;autres documents importants tels que {{quotes_module}}, {{contacts_module}}, etc.
 - Modifier les champs de l&#39;enregistrement en cliquant sur un champ individuel ou sur le bouton Edit. 
- Afficher ou modifier des liens vers d&#39;autres enregistrements dans les sous-panels, y compris {{revenuelineitems_module}}, en activant/désactivant le volet en bas à gauche sur « Voir les données ». 
- Saisir et voir les commentaires des utilisateurs et l&#39;historique des modifications de l&#39;enregistrement dans {{activitystream_singular_module}} en activant/désactivant le volet en bas à gauche sur « Flux de l&#39;activité ». 
- Suivre ou mettre en favori cet enregistrement à l&#39;aide des icônes à droite du nom de l&#39;enregistrement. 
- D&#39;autres actions sont disponibles dans le menu déroulant Actions à droite de la touche Edit.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Le module {{plural_module_name}} vous permet de suivre les ventes individuelles, ainsi que les postes liés à ces ventes, du début à la fin. Chaque enregistrement {{module_name}} représente un en-tête pour un groupe de {{revenuelineitems_module}} et est associé à d&#39;autres enregistrements importants, tels que {{quotes_module}}, {{contacts_module}}, etc.

Pour créer un enregistrement {{module_name}}, les étapes suivantes sont nécessaires : 
1. Remplir les champs souhaités.
 - Les champs identifiés comme "Obligatoire" doivent être complétés avant la sauvegarde.
 - Cliquer sur "Voir plus" pour afficher plus de champs, si nécessaire.
2. Cliquer sur "Sauvegarder" pour finaliser l&#39;enregistrement et retourner sur la page précédente. 
3. Après l&#39;enregistrement, utiliser le sous-panneau {{revenuelineitems_module}} pour ajouter des articles à {{module_name}}.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Synchronisé avec Marketo®',
    'LBL_MKTO_ID' => 'ID du Lead dans Marketo',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Top 10 des Affaires',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Afficher le top 10 des Affaires dans un graphique à bulles.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Mes Affaires',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Les Affaires de mon équipe",
);
