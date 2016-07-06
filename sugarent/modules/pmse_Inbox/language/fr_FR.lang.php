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
  'LBL_ACTIVITY_OWNER' => 'Utilisateur du processus',
  'LBL_ASSIGNED_USER' => 'Assigné à',
  'LBL_CAS_ID' => 'Processus ID',
  'LBL_MODULE_NAME' => 'Processus',
  'LBL_MODULE_NAME_SINGULAR' => 'Processus',
  'LBL_MODULE_TITLE' => 'Processus',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 sur <strong>%s</strong> approuvés',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 sur <strong>%s</strong> déclarés',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 sur <strong>%s</strong> assigné à l&#39;utilisateur &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 sur <strong>%s</strong> rejetés',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 sur <strong>%s</strong> routés',
  'LBL_PMSE_BUTTON_CANCEL' => 'Annuler',
  'LBL_PMSE_BUTTON_CLEAR' => 'Vider',
  'LBL_PMSE_BUTTON_CLOSE' => 'Fermer',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Log du gestionnaire de processus',
  'LBL_PMSE_BUTTON_REFRESH' => 'Rafraîchir',
  'LBL_PMSE_BUTTON_SAVE' => 'Sauvegarder',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'Log SugarCRM',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Etes-vous sur de vouloir annuler le processus avec l&#39;ID #{} ?',
  'LBL_PMSE_FILTER' => 'Filtre',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Note',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Type',
  'LBL_PMSE_FORM_LABEL_USER' => 'Utilisateur',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Sélection...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'La tâche exécutée était : [%s]',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'La tâche est toujours assignée.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'nommée : &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'créée',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'a créé le processus # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'a actuellement la tache avec l&#39;ID %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Fait une tâche inconnue',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'éditée',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'au module %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Inconnu (lié à l&#39;ID utilisateur :&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'n&#39;est pas une action enregistrée',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '(pas encore démarrée)',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'routée',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'tâche a été',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'tâche été',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'avec l’événement %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'avec la paserelle %s qui a été évalué et aiguillé vers la tâche suivante',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Ajouter des notes',
  'LBL_PMSE_LABEL_APPROVE' => 'Approuver',
  'LBL_PMSE_LABEL_CANCEL' => 'Annuler',
  'LBL_PMSE_LABEL_CLAIM' => 'Déclarer',
  'LBL_PMSE_LABEL_CURRENT' => 'Courant',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Activité courante',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Date d&#39;échéance',
  'LBL_PMSE_LABEL_EXECUTE' => 'Executer',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Durée prévue',
  'LBL_PMSE_LABEL_HISTORY' => 'Historique',
  'LBL_PMSE_LABEL_IN_TIME' => 'Dans les temps',
  'LBL_PMSE_LABEL_NOTES' => 'Voir les notes',
  'LBL_PMSE_LABEL_OVERDUE' => 'Echues',
  'LBL_PMSE_LABEL_PROCESS' => 'Processus',
  'LBL_PMSE_LABEL_REJECT' => 'Rejeter',
  'LBL_PMSE_LABEL_ROUTE' => 'Router',
  'LBL_PMSE_LABEL_STATUS' => 'Statut',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Non assigné',
  'LBL_PMSE_MY_PROCESSES' => 'Mes processus',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Processus en libre service',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Nombre de cycles en erreurs',
  'LBL_PMSE_SHOW_PROCESS' => 'Voir le processus',
  'LBL_PMSE_TITLE_HISTORY' => 'Historique des processus',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Processus #%s: Statut courant',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Visualiseur de log du gestionnaire de processus',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Liste des processus',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Notes du processus',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Processus indépendants',
  'LBL_PMSE_WARNING_CLEAR' => 'Etes-vous sûr de vouloir vider les données de log? Cette action est irréversible.',
  'LBL_PROCESS_DEFINITION_NAME' => 'Nom de la définition du proecessus',
  'LBL_PROCESS_NAME' => 'Nom du processus',
  'LBL_PROCESS_OWNER' => 'Propriétaire du processus',
  'LBL_RECORD_NAME' => 'Nom de l&#39;enregistrement',
  'LBL_STATUS_CANCELLED' => 'Processus annulé',
  'LBL_STATUS_COMPLETED' => 'Processus terminé et réussi',
  'LBL_STATUS_ERROR' => 'Processus en erreur',
  'LBL_STATUS_IN_PROGRESS' => 'Processus en cours',
  'LBL_STATUS_TERMINATED' => 'Processus terminé',
  'LNK_LIST' => 'Voir les processus',
);

