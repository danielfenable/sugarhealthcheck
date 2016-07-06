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
  'ERR_DELETE_EMPTY' => 'Η εγγραφή έχει ήδη διαγραφεί ή δεν υπάρχει.',
  'ERR_DELETE_RECORD' => 'Πρέπει να προσδιορίσετε αριθμό εγγραφής για να διαγράψετε την εγγραφή.',
  'LBL_ALERT_TEMPLATES' => 'Πρότυπα Προειδοποίησης',
  'LBL_APOSTROPHE_S' => '΄',
  'LBL_COMPARE_ANY_TIME_PART2' => 'δεν αλλάζει για',
  'LBL_COMPARE_ANY_TIME_PART3' => 'καθορισμένο χρονικό διάστημα',
  'LBL_COMPARE_ANY_TIME_TITLE' => 'Το πεδίο δεν αλλάζει για ένα καθορισμένο χρονικό διάστημα',
  'LBL_COMPARE_CHANGE_PART' => 'αλλαγές',
  'LBL_COMPARE_CHANGE_TITLE' => 'Όταν το πεδίο στην ενότητα στόχων αλλάζει',
  'LBL_COMPARE_COUNT_TITLE' => 'Trigger σε καθορισμένη αρίθμηση',
  'LBL_COMPARE_SPECIFIC_PART' => 'αλλάζει προς μία καθορισμένη τιμή',
  'LBL_COMPARE_SPECIFIC_PART_TIME' => ' ',
  'LBL_COMPARE_SPECIFIC_TITLE' => 'Όταν ένα πεδίο στην ενότητα στόχων αλλάζει προς, ή από μια καθορισμένη τιμή',
  'LBL_COUNT_TRIGGER1' => 'Σύνολο',
  'LBL_COUNT_TRIGGER1_2' => 'σύγκριση με αυτό το ποσό',
  'LBL_COUNT_TRIGGER2' => 'φίλτρο από σχετικό',
  'LBL_COUNT_TRIGGER2_2' => 'μόνο',
  'LBL_COUNT_TRIGGER3' => 'φίλτρο καθορισμένο ανά',
  'LBL_COUNT_TRIGGER4' => 'φίλτρο ανά δευτερόλεπτο',
  'LBL_EVAL' => 'Αξιολόγηση Trigger:',
  'LBL_FIELD' => 'πεδίο',
  'LBL_FILTER_FIELD_PART1' => 'Φίλτρο ανά',
  'LBL_FILTER_FIELD_TITLE' => 'Όταν ένα πεδίο στην ενότητα στόχων περιέχει μια καθορισμένη τιμή',
  'LBL_FILTER_FORM_TITLE' => 'Ορίστε Κατάσταση Ροής Εργασίας',
  'LBL_FILTER_LIST_STATEMEMT' => 'Αντικείμενα φίλτρων βασισμένα στα εξής:',
  'LBL_FILTER_REL_FIELD_PART1' => 'Καθορισμός σχετικού',
  'LBL_FILTER_REL_FIELD_TITLE' => 'Όταν η ενότητα στόχων αλλάζει και ένα πεδίο σε μια σχετική ενότητα περιέχει μια καθορισμένη τιμή',
  'LBL_FUTURE_TRIGGER' => 'Καθορισμός νέου',
  'LBL_LIST_EVAL' => 'Αξιολόγηση:',
  'LBL_LIST_FIELD' => 'Πεδίο:',
  'LBL_LIST_FORM_TITLE' => 'Λίστα Trigger',
  'LBL_LIST_FRAME_PRI' => 'Trigger:',
  'LBL_LIST_FRAME_SEC' => 'Φίλτρο:',
  'LBL_LIST_NAME' => 'Περιγραφή:',
  'LBL_LIST_STATEMEMT' => 'Trigger ενός γεγονότος βασισμένο στα εξής:',
  'LBL_LIST_TYPE' => 'Τύπος:',
  'LBL_LIST_VALUE' => 'Τιμή:',
  'LBL_MODULE' => 'ενότητα',
  'LBL_MODULE_NAME' => 'Συνθήκες',
  'LBL_MODULE_NAME_SINGULAR' => 'Κατάσταση',
  'LBL_MODULE_SECTION_TITLE' => 'Όταν πληρούνται αυτές οι συνθήκες',
  'LBL_MODULE_TITLE' => 'Ροή Εργασίας Triggers: Αρχή',
  'LBL_MUST_SELECT_VALUE' => 'Πρέπει να επιλέξετε μια τιμή για αυτό το πεδίο',
  'LBL_NAME' => 'Όνομα Trigger:',
  'LBL_NEW_FILTER_BUTTON_KEY' => 'F',
  'LBL_NEW_FILTER_BUTTON_LABEL' => 'Δημιουργία Φίλτρου',
  'LBL_NEW_FILTER_BUTTON_TITLE' => 'Δημιουργία Φίλτρου',
  'LBL_NEW_FORM_TITLE' => 'Δημιουργία Trigger',
  'LBL_NEW_TRIGGER_BUTTON_KEY' => 'T',
  'LBL_NEW_TRIGGER_BUTTON_LABEL' => 'Δημιουργία Trigger',
  'LBL_NEW_TRIGGER_BUTTON_TITLE' => 'Δημιουργία Trigger',
  'LBL_PAST_TRIGGER' => 'Καθορισμός παλαιού',
  'LBL_RECORD' => 'ενότητες',
  'LBL_SEARCH_FORM_TITLE' => 'Ροή Εργασίας Trigger, Αναζήτηση',
  'LBL_SELECT_1ST_FILTER' => 'Πρέπει να επιλέξετε ένα έγκυρο 1ο πεδίο φίλτρου',
  'LBL_SELECT_2ND_FILTER' => 'Πρέπει να επιλέξετε ένα έγκυρο 2ο πεδίο φίλτρου',
  'LBL_SELECT_AMOUNT' => 'Πρέπει να επιλέξετε το ποσό',
  'LBL_SELECT_OPTION' => 'Παρακαλώ επιλέξτε μία επιλογή.',
  'LBL_SELECT_TARGET_FIELD' => 'Παρακαλώ επιλέξτε ένα πεδίο στόχου.',
  'LBL_SELECT_TARGET_MOD' => 'Παρακαλώ επιλέξτε μία σχετική ενότητα στόχου.',
  'LBL_SHOW' => 'Εμφάνιση',
  'LBL_SHOW_PAST' => 'Τροποποίηση Παλαιάς Τιμής:',
  'LBL_SPECIFIC_FIELD' => '΄ καθορισμένο πεδίο',
  'LBL_SPECIFIC_FIELD_LNK' => 'καθορισμός πεδίου',
  'LBL_TRIGGER' => 'Όταν',
  'LBL_TRIGGER_FILTER_TITLE' => 'Φίλτρα Trigger',
  'LBL_TRIGGER_FORM_TITLE' => 'Ορίστε Κατάσταση για Εκτέλεση Ροής Εργασίας',
  'LBL_TRIGGER_RECORD_CHANGE_TITLE' => 'Όταν η ενότητα στόχων αλλάζει',
  'LBL_TYPE' => 'Τύπος:',
  'LBL_VALUE' => 'τιμή',
  'LBL_WHEN_VALUE1' => 'Όταν η τιμή του πεδίου είναι',
  'LBL_WHEN_VALUE2' => 'Όταν η τιμή των',
  'LNK_NEW_TRIGGER' => 'Δημιουργία Trigger',
  'LNK_NEW_WORKFLOW' => 'Δημιουργία Ροής Εργασίας',
  'LNK_TRIGGER' => 'Ροή Εργασίας Triggers',
  'LNK_WORKFLOW' => 'Αντικείμενα Ροής Εργασίας',
  'NTC_REMOVE_TRIGGER' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτό το trigger;',
  'NTC_REMOVE_TRIGGER_PRIMARY' => 'Αφαιρώντας τον πρωτεύων trigger θα αφαιρεθούν όλοι οι triggers.',
);

