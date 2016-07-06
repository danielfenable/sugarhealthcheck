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
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Λογαριασμοί',
  'LBL_ASSIGNED_TO' => 'Ανατέθηκε σε:',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Εκστρατείες',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Επαφές',
  'LBL_COPY_PREFIX' => 'Αντίγραφο του',
  'LBL_CREATED' => 'Δημιουργήθηκε από',
  'LBL_CREATED_BY' => 'Δημιουργήθηκε από',
  'LBL_DATE_CREATED' => 'Ημερομηνία δημιουργίας',
  'LBL_DATE_ENTERED' => 'Ημερομηνία Δημιουργίας',
  'LBL_DATE_LAST_MODIFIED' => 'Ημερομηνία τροποποίησης:',
  'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
  'LBL_DESCRIPTION' => 'Περιγραφή',
  'LBL_DOMAIN' => 'Κανένα email στην Περιοχή',
  'LBL_DOMAIN_NAME' => 'Όνομα Περιοχής',
  'LBL_ENTRIES' => 'Σύνολο Καταχωρήσεων',
  'LBL_HELP_CREATE' => 'Η {{module_name}}ενότητα, αποτελείται από μια συλλογή μεμονομένων ατόμων ή οργανισμών που θέλετε να συμπεριλάβετε ή να εξαιρέσετε σε μία μαζική εκστρατεία {{campaigns_singular_module}}.

Για να δημιουργήσετε μία εγγραφή {{module_name}}:
1. Παρέχετε τιμές για τα πεδία, όπως επιθυμείτε.
 - Τα πεδία με σήμανση "Υποχρεωτικό", πρέπει να συμπληρωθούν πριν από την αποθήκευση.
 - Κάντε κλικ στην επιλογή "Εμφάνιση Περισσότερων" να εκθέσει πρόσθετα πεδία, εάν είναι απαραίτητο.
2. Κάντε κλικ στην επιλογή "Αποθήκευση" να οριστικοποιήσει τη νέα εγγραφή και να επιστρέψετε στην προηγούμενη σελίδα.
 - Επιλέξτε "Αποθήκευση και προβολή" για να ανοίξετε τη νέα εγγραφή {{module_name}} στην προβολή.
 - Επιλέξτε "Αποθήκευση και δημιουργία νέας" για να δημιουργήσει αμέσως μία νέα εγγραφή {{module_name}}.
3. Μετά την αποθήκευση, χρησιμοποιήστε τους υποπίνακες που διατίθενται στην προβολή εγγραφών των στόχων, για να προσθέσετε {{campaigns_singular_module}} παραλήπτες.',
  'LBL_HELP_RECORD' => 'Η {{module_name}}ενότητα, αποτελείται από μια συλλογή μεμονομένων ατόμων ή οργανισμών που θέλετε να συμπεριλάβετε ή να εξαιρέσετε σε μία μαζική εκστρατεία {{campaigns_singular_module}}.

- Επεξεργαστείτε αυτό το πεδίο εγγραφής κάνοντας κλικ στο μεμονωμένο πεδίο ή το κουμπί "Επεξεργασία".
- Προβάλετε ή τροποποιήστε συνδέσεις με άλλες εγγραφές στους υποπίνακες, συμπεριλαμβανομένων {{campaigns_singular_module}} των παραληπτών, από την εναλλαγή του κάτω αριστερού παραθύρου σε "Προβολή Δεδομένων".
- Αλληλεπιδράστε με τα σχόλια των χρηστών και την προβολή του ιστορικού των αλλαγών των εγγραφών {{activitystream_singular_module}}, από την εναλλαγή του κάτω αριστερού παραθύρου "Ροή Δραστηριοτήτων".
- Ακολουθήστε ή κάντε Αγαπημένες εγγραφές χρησιμοποιώντας τα εικονίδια στα δεξιά του ονόματος της εγγραφής.
- Πρόσθετες ενέργειες είναι διαθέσιμες στο αναπτυσσόμενο μενού "Ενέργειες", δεξιά από το κουμπί "Επεξεργασία".',
  'LBL_HELP_RECORDS' => 'Η {{module_name}}ενότητα, αποτελείται από μια συλλογή μεμονομένων ατόμων ή οργανισμών που θέλετε να συμπεριλάβετε ή να εξαιρέσετε σε μία μαζική εκστρατεία {{campaigns_singular_module}}. {{plural_module_name}} μπορεί να περιέχει οποιοδήποτε αριθμό και συνδυασµό Στόχων, {{contacts_module}}, {{leads_module}}, Χρήστες, και {{accounts_module}}. Στόχοι μπορούν να ομαδοποιηθούν σε into a {{module_name}} σύμφωνα με ένα σύνολο από προκαθορισμένα κριτήρια, όπως ηλικιακή ομάδα, τη γεωγραφική θέση, ή τις συνήθειες εξόδων {{plural_module_name}}. Χρησιμοποιείται στην μαζική αποστολή email εκστρατείας {{campaigns_module}} και μπορεί να διαμορφωθεί {{campaigns_module}} στην ενότητα.',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Δυνητικοί Πελάτες',
  'LBL_LIST_DESCRIPTION' => 'Περιγραφή',
  'LBL_LIST_END_DATE' => 'Ημερομηνία Λήξης',
  'LBL_LIST_ENTRIES' => 'Στόχοι σε Λίστα',
  'LBL_LIST_FORM_TITLE' => 'Λίστες Στόχων',
  'LBL_LIST_PROSPECTLIST_NAME' => 'Όνομα',
  'LBL_LIST_PROSPECT_LIST_NAME' => 'Λίστα Στόχου',
  'LBL_LIST_TYPE' => 'Τύπος',
  'LBL_LIST_TYPE_LIST_NAME' => 'Τύπος',
  'LBL_LIST_TYPE_NO' => 'Τύπος',
  'LBL_MARKETING_ID' => 'Ταυτότητα Μάρκετινγκ',
  'LBL_MARKETING_MESSAGE' => 'Μήνυμα Email Μάρκετινγκ',
  'LBL_MARKETING_NAME' => 'Όνομα Μάρκετινγκ',
  'LBL_MODIFIED' => 'Τροποποιήθηκε από',
  'LBL_MODIFIED_BY' => 'Τροποποιήθηκε από',
  'LBL_MODULE_ID' => 'Λίστες Στόχων',
  'LBL_MODULE_NAME' => 'Λίστες Στόχων',
  'LBL_MODULE_NAME_SINGULAR' => 'Λίστα Στόχου',
  'LBL_MODULE_TITLE' => 'Λίστες Στόχων: Αρχή',
  'LBL_MORE_DETAIL' => 'Περισσότερες Λεπτομέρειες',
  'LBL_NAME' => 'Όνομα',
  'LBL_NEW_FORM_TITLE' => 'Νέα Λίστα Στόχου',
  'LBL_PROSPECTS_SUBPANEL_TITLE' => 'Στόχοι',
  'LBL_PROSPECT_LISTS_SUBPANEL_TITLE' => 'Λίστες Στόχων',
  'LBL_PROSPECT_LIST_NAME' => 'Λίστα Στόχου:',
  'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Λίστες Στόχων',
  'LBL_TEAM' => 'Ομάδα',
  'LBL_TYPE' => 'Τύπος',
  'LBL_USERS_SUBPANEL_TITLE' => 'Χρήστες',
  'LNK_CAMPAIGN_LIST' => 'Εκστρατείες',
  'LNK_NEW_CAMPAIGN' => 'Δημιουργία Εκστρατείας',
  'LNK_NEW_PROSPECT' => 'Δημιουργία Στόχου',
  'LNK_NEW_PROSPECT_LIST' => 'Δημιουργία Λίστας Στόχου',
  'LNK_PROSPECT_LIST' => 'Στόχοι',
  'LNK_PROSPECT_LIST_LIST' => 'Προβολή Λίστες Στόχων',
);

