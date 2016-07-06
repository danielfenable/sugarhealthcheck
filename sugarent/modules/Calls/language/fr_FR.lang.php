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
  'ERR_DELETE_RECORD' => 'Un enregistrement au moins doit être sélectionné pour réaliser une suppression.',
  'LBL_ACCEPT_LINK' => 'Lien acceptation',
  'LBL_ACCEPT_STATUS' => 'Statut acceptation',
  'LBL_ACCOUNT_NAME' => 'Compte',
  'LBL_ACTIVITIES_REPORTS' => 'Rapport d&#39;activités',
  'LBL_ADD_BUTTON' => 'Ajouter',
  'LBL_ADD_INVITEE' => 'Ajouter des participants',
  'LBL_ASSIGNED_TO_ID' => 'Utilisateur assigné',
  'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
  'LBL_BLANK' => '-vide-',
  'LBL_CALL' => 'Appel:',
  'LBL_CALL_INFORMATION' => 'Informations Appel',
  'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Etes vous sûr de vouloir supprimer tous les enregistrements récurrents ?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
  'LBL_CONTACT_NAME' => 'Contact:',
  'LBL_CREATE_AND_ADD' => 'Créer et Ajouter',
  'LBL_CREATE_CONTACT' => 'Comme un Contact',
  'LBL_CREATE_INVITEE' => 'Créer un invité',
  'LBL_CREATE_LEAD' => 'Comme un Lead',
  'LBL_CREATE_MODULE' => 'Ajouter Appel',
  'LBL_DATE' => 'Date de début:',
  'LBL_DATE_END' => 'Date de fin',
  'LBL_DATE_END_ERROR' => 'La date de fin est avant la date de début',
  'LBL_DATE_TIME' => 'Date et Heure début:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Appels',
  'LBL_DEL' => 'Sup',
  'LBL_DESCRIPTION' => 'Description:',
  'LBL_DESCRIPTION_INFORMATION' => 'Description',
  'LBL_DIRECTION' => 'Type:',
  'LBL_DURATION' => 'Durée:',
  'LBL_DURATION_HOURS' => 'Durée en Heures:',
  'LBL_DURATION_MINUTES' => 'Durée en Minutes:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Editer toutes les occurrences',
  'LBL_EMAIL' => 'Email',
  'LBL_EMAIL_REMINDER' => 'Notification par email',
  'LBL_EMAIL_REMINDER_SENT' => 'Notification par email envoyée',
  'LBL_EMAIL_REMINDER_TIME' => 'Email de rappel',
  'LBL_EMPTY_SEARCH_RESULT' => 'Désolé, aucun résultat trouvé. Veuillez créer un invité ci-dessous.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigné à (ID)',
  'LBL_EXPORT_CREATED_BY' => 'Créé par (ID)',
  'LBL_EXPORT_DATE_START' => 'Date et heure de début',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modifié par (ID)',
  'LBL_EXPORT_PARENT_TYPE' => 'Relatif à',
  'LBL_EXPORT_REMINDER_TIME' => 'Rappel (en minutes)',
  'LBL_FIRST_NAME' => 'Prénom',
  'LBL_HELP_CREATE' => 'L&#39;entité {{plural_module_name}} contient des enregistrements {{calls_singular_module}} créés par les utilisateurs dans votre société. Les {{plural_module_name}} peuvent être en statut "Planifié", "Tenu", ou "Annulé(e)". Les utilisateurs de Sugar ainsi que les contacts et les leads peuvent être ajoutés en tant qu&#39;invités.

Pour créer un {{calls_singular_module}}:
1. Renseignez les valeurs pour les champs.
    - Les champs "Requis" sont obligatoires pour sauvegarder.
    - Cliquez sur "Voir plus" pour faire afficher les champs secondaires si nécessaire.
2. Ajoutez des invités à la {{calls_singular_module}}.
    - Cliquez sur Sélectionner des invités pour ajouter un utilisateur, contact ou lead à la {{calls_singular_module}}.
    - Cliquez sur l&#39;icône plus à droite de la sélection d&#39;invités pour créer un nouvel enregistrement Sugar que vous souhaitez inviter à cet {{calls_singular_module}}.
3. Cliquez sur "Sauvegarder" pour finaliser la création de l&#39;enregistrement et retourner à la page précédente.
    - Sélectionner "Sauvegarder et voir" pour ouvrir la nouvelle réunion dans la vue enregistrement.
    - Sélectionner "Sauvegarder et créer nouveau" pour créer immédiatement une nouvelle {{meetings_singular_module}}.',
  'LBL_HELP_RECORD' => 'Le module {{plural_module_name}} permet de gérer les personnes en relation avec votre société. Les {{plural_module_name}} peuvent être en statut "Planifié", "Tenu", or "Annulé". Les Utilisateurs, aussi bien que les {{contacts_module}} et les {{leads_module}} peuvent être ajoutés comme invités.

- Modifiez les champs de cet enregistrement en cliquant sur chaque champ individuellement ou en utilisant le bouton Editer.
- Afficher ou modifier les liens vers les autres enregistrements dans les sous panels en utilisant le bouton permettant de basculer le panneau en bas à gauche en "Vue des données".
- Faites des commentaires et visualisez les avec l&#39;historique des modifications dans le Flux d&#39;activités en cliquant sur le bouton permettant de basculer le panneau en bas à gauche en " Flux d&#39;activités".
- Suivez ou mettez en favori cet enregistrement en utilisant les icônes à droite du nom de l&#39;enregistrement.
- Des actions supplémentaires sont disponibles dans les listes déroulantes d&#39;actions à droite du bouton éditer.',
  'LBL_HELP_RECORDS' => 'L&#39;entité {{plural_module_name}} contient des Appels qui peuvent être en statut "Planifié", "Tenu", or "Annulé". Les Appels planifiés sur les 24 prochaines heures ont la date de début mise en surbrillance en bleu. Les Appels dont la date est dépassée sont mis en avant en rouge.

Depuis la vue liste des {{plural_module_name}}, vous visualiser et éditer en ligne les informations. Des actions supplémentaires sont disponibles dans le menu au bout de chaque ligne d&#39;Appel. Vous pouvez sélectionner "Terminer" depuis le menu sur toute ligne d&#39;Appel afin de le marquer comme tenu.

D&#39;autres Utilisateurs, des Contacts et des Leads peuvent être ajoutés en invités des Appels. Les {{plural_module_name}} peuvent être créés depuis l&#39;entité {{plural_module_name}}, le module Calendrier, l&#39;import, aussi bien que depuis le sous panel Activités (pour les entité en héritage) ou le dashlet des Activités planifiées (pour les entités au nouveau design) sur les modules liés (e.g. Contacts, Comptes, etc.), lesquels créeront automatiquement la relation entre les 2 enregistrements.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINUTES' => '(heures/minutes)',
  'LBL_INVITEE' => 'Participants',
  'LBL_LAST_NAME' => 'Nom',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigné à',
  'LBL_LIST_CLOSE' => 'Fermer',
  'LBL_LIST_CONTACT' => 'Contact',
  'LBL_LIST_DATE' => 'Date de début',
  'LBL_LIST_DIRECTION' => 'Type',
  'LBL_LIST_DURATION' => 'Durée',
  'LBL_LIST_FORM_TITLE' => 'Liste des Appels',
  'LBL_LIST_MY_CALLS' => 'Mes Appels',
  'LBL_LIST_RELATED_TO' => 'Relatif à',
  'LBL_LIST_RELATED_TO_ID' => 'Relatif à (ID)',
  'LBL_LIST_SUBJECT' => 'Sujet',
  'LBL_LIST_TIME' => 'Heure début',
  'LBL_LOG_CALL' => 'Ajouter Appel',
  'LBL_MEMBER_OF' => 'Membre de',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Appels',
  'LBL_MODULE_NAME_SINGULAR' => 'Appel',
  'LBL_MODULE_TITLE' => 'Appels',
  'LBL_MY_SCHEDULED_CALLS' => 'Mes appels planifiés',
  'LBL_NAME' => 'Nom',
  'LBL_NEW_FORM_TITLE' => 'Planifier Appel',
  'LBL_NO_ACCESS' => 'Vous n&#39;avez aucun accès pour créer $module',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Parent (ID)',
  'LBL_PHONE' => 'Téléphone',
  'LBL_POPUP_REMINDER_TIME' => 'Popup de rappel',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Vous avez créé un/une {{moduleSingularLower}} pour {{formatDate date_start}}, mais vous n&#39;avez pas la permission d&#39;y accéder.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Vous avez planifié un/une {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> pour {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Récurrence',
  'LBL_RECURRING_LIMIT_ERROR' => 'Cet appel ne peut être planifié car il dépasse le nombre maximum de récurrence autorisé qui est de $limit.',
  'LBL_RECURRING_SOURCE' => 'Source récurrence',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Appeler avec {{{this}}}',
  'LBL_RELATED_TO' => 'Lié à:',
  'LBL_REMINDER' => 'Notification:',
  'LBL_REMINDER_EMAIL' => 'Email',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Rapp. email tous',
  'LBL_REMINDER_POPUP' => 'Rappel utilisateurs',
  'LBL_REMINDER_TIME' => 'Heure de la notification',
  'LBL_REMINDER_TITLE' => 'Appel :',
  'LBL_REMOVE' => 'Sup',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Supprimer toutes les occurrences',
  'LBL_REPEAT_COUNT' => 'Répétition occurences',
  'LBL_REPEAT_DOW' => 'Répétition depuis',
  'LBL_REPEAT_END' => 'Fin',
  'LBL_REPEAT_END_AFTER' => 'Après',
  'LBL_REPEAT_END_BY' => 'Le',
  'LBL_REPEAT_INTERVAL' => 'Répétition intervalle',
  'LBL_REPEAT_OCCURRENCES' => 'occurrences',
  'LBL_REPEAT_PARENT_ID' => 'Répétition ID parent',
  'LBL_REPEAT_TYPE' => 'Répétition type',
  'LBL_REPEAT_UNTIL' => 'Répétition jusque',
  'LBL_REVENUELINEITEMS' => 'Lignes de revenu',
  'LBL_SCHEDULING_FORM_TITLE' => 'Planification',
  'LBL_SEARCH_BUTTON' => 'Rechercher',
  'LBL_SEARCH_FORM_TITLE' => 'Rechercher un Appel',
  'LBL_SELECT_FROM_DROPDOWN' => 'Merci de sélectionner en premier la liste déroulante Lié à.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Envoyer Invitations',
  'LBL_SEND_BUTTON_TITLE' => 'Envoyer les invitations [Alt+I]',
  'LBL_SEND_INVITES' => 'Envoyer Invitations',
  'LBL_STATUS' => 'Statut:',
  'LBL_SUBJECT' => 'Sujet:',
  'LBL_SYNCED_RECURRING_MSG' => 'Cet appel provient d&#39;une application externe et a été synchronisé avec Sugar. Une fois éditer dans Sugar, cet appel ne sera plus synchronisé avec cette application externe.',
  'LBL_TIME' => 'Heure de début:',
  'LBL_TIME_END' => 'Heure de fin',
  'LBL_USERS_SUBPANEL_TITLE' => 'Utilisateurs',
  'LNK_CALL_LIST' => 'Appels',
  'LNK_IMPORT_CALLS' => 'Import Appels',
  'LNK_NEW_ACCOUNT' => 'Nouveau Compte',
  'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
  'LNK_NEW_CALL' => 'Planifier Appel',
  'LNK_NEW_MEETING' => 'Planifier Réunion',
  'LNK_NEW_OPPORTUNITY' => 'Nouvelle Affaire',
  'LNK_SELECT_ACCOUNT' => 'Choisir un Compte',
  'NOTICE_DURATION_TIME' => 'La durée doit être supérieure à 0',
  'NTC_REMOVE_INVITEE' => 'Etes vous sûr de vouloir supprimer ce contact de cet appel ?',
  'TPL_CALL_STATUS_CHANGED' => 'L&#39;appel est maintenant {{status}}.',
);

