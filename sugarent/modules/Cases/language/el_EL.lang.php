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
  'ERR_DELETE_RECORD' => 'Πρέπει να προσδιορίσετε έναν αριθμό εγγραφής για να διαγράψετε τον λογαριασμό.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Λογιαριασμοί',
  'LBL_ACCOUNT_ID' => 'Ταυτότητα Λογαριασμού',
  'LBL_ACCOUNT_NAME' => 'Όνομα Λογαριασμού:',
  'LBL_ACCOUNT_NAME_MOD' => 'Όνομα Λογαριασμού Διαμορφωτή',
  'LBL_ACCOUNT_NAME_OWNER' => 'Όνομα Λογαριασμού Ιδιοκτήτη',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Δραστηριότητες',
  'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε',
  'LBL_ASSIGNED_USER_NAME_MOD' => 'Ανατεθειμένος Χειριστής, Όνομα Διαμορφωτή',
  'LBL_ASSIGNED_USER_NAME_OWNER' => 'Ανατεθειμένος Χειριστής, Όνομα Ιδιοκτήτη',
  'LBL_ATTACH_NOTE' => 'Επισύναψη Σημείωσης',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Σφάλματα',
  'LBL_CASE' => 'Υπόθεση:',
  'LBL_CASE_FROM_TWITTER_TITLE' => 'Tweet',
  'LBL_CASE_INFORMATION' => 'Επισκόπηση',
  'LBL_CASE_NUMBER' => 'Αριθμός Υπόθεσης:',
  'LBL_CASE_SUBJECT' => 'Θέμα Υπόθεσης:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Επαφές',
  'LBL_CONTACT_CASE_TITLE' => 'Επαφή-Υπόθεση:',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Σχετικές Επαφές Emails',
  'LBL_CONTACT_NAME' => 'Όνομα Επαφής:',
  'LBL_CONTACT_ROLE' => 'Ρόλος:',
  'LBL_CREATED_BY_NAME_MOD' => 'Δημιουργήθηκε Από Όνομα Διαμορφωτή',
  'LBL_CREATED_BY_NAME_OWNER' => 'Δημιουργήθηκε Από Όνομα Ιδιοκτήτη',
  'LBL_CREATED_USER' => 'Δημιουργήθηκε από Χειριστή',
  'LBL_CREATE_KB_DOCUMENT' => 'Δημιουργία Άρθρου',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Υποθέσεις',
  'LBL_DESCRIPTION' => 'Περιγραφή:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Έγγραφα',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Ταυτότητα Ανατεθειμένου Χειριστή',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Ανατεθειμένο Όνομα Χειριστή',
  'LBL_EXPORT_CREATED_BY' => 'Δημιουργήθηκε Από Ταυτότητα',
  'LBL_EXPORT_CREATED_BY_NAME' => 'Δημιουργήθηκε από Όνομα Χειριστή',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Τροποποιήθηκε από Ταυτότητα',
  'LBL_EXPORT_TEAM_COUNT' => 'Αρίθμηση Ομάδας',
  'LBL_FILENANE_ATTACHMENT' => 'Επισύναψη Αρχείου',
  'LBL_HELP_CREATE' => 'Η {{plural_module_name}} ενότητα, χρησιμοποιείται για την παρακολούθηση και διαχείριση προϊόντος ή συναφή προβλήματα που αναφέρθηκαν για τον οργανισμό σας από τους πελάτες.

Για να δημιουργήσετε μία εγγραφή {{module_name}}:
1. Παρέχετε τιμές για τα πεδία, όπως επιθυμείτε.
- Τα "Υποχρεωτικά" πεδία πρέπει να συμπληρωθούν πριν από την αποθήκευση.
- Κάντε κλικ στην επιλογή "Εμφάνιση Περισσότερων" να εκθέσει πρόσθετα πεδία, εάν είναι απαραίτητο.
2. Κάντε κλικ στην επιλογή "Αποθήκευση" να οριστικοποιήσει τη νέα εγγραφή και να επιστρέψετε στην προηγούμενη σελίδα.
- Επιλέξτε "Αποθήκευση και προβολή" για να ανοίξετε τη νέα εγγραφή {{module_name}} στην προβολή.
- Επιλέξτε "Αποθήκευση και δημιουργία νέας" για να δημιουργήσει αμέσως μία νέα {{module_name}}.',
  'LBL_HELP_RECORD' => 'Η {{plural_module_name}} ενότητα, χρησιμοποιείται για την παρακολούθηση και διαχείριση προϊόντος ή συναφή προβλήματα που αναφέρθηκαν για τον οργανισμό σας από τους πελάτες.

- Επεξεργαστείτε αυτό το πεδίο εγγραφής κάνοντας κλικ στο μεμονωμένο πεδίο ή στο κουμπί "Επεξεργασία".
- Προβάλετε ή τροποποιήστε συνδέσεις με άλλες εγγραφές στους υποπίνακες, από την εναλλαγή του κάτω αριστερού παραθύρου σε "Προβολή Δεδομένων".
- Αλληλεπιδράστε με τα σχόλια των χρηστών και την προβολή του ιστορικού των αλλαγών των εγγραφών {{activitystream_singular_module}}, από την εναλλαγή του κάτω αριστερού παραθύρου "Ροή Δραστηριοτήτων".
- Ακολουθήστε ή κάντε Αγαπημένες εγγραφές χρησιμοποιώντας τα εικονίδια στα δεξιά του ονόματος της εγγραφής.
- Πρόσθετες ενέργειες είναι διαθέσιμες στο αναπτυσσόμενο μενού "Ενέργειες", δεξιά από το κουμπί "Επεξεργασία".',
  'LBL_HELP_RECORDS' => 'Η {{plural_module_name}} ενότητα, χρησιμοποιείται για την παρακολούθηση και διαχείριση προϊόντος ή συναφή προβλήματα που αναφέρθηκαν για τον οργανισμό σας από τους πελάτες. {{plural_module_name}} συνήθως συνδέονται με μια {{accounts_singular_module}} εγγραφή, και πολλαπλές {{plural_module_name}} που μπορούν να συνδεθούν σε μία {{accounts_singular_module}}. Υπάρχουν πολλοί τρόποι στο Sugar που μπορείτε να δημιουργήσετε εγγραφές {{plural_module_name}} μέσω της ενότητας {{plural_module_name}}, να εισαγάγετε δεδομένα {{plural_module_name}}, ή τροποποιημένα από το email. Αφού δημιουργήσετε την εγγραφή {{module_name}}, μπορείτε να προβάλετε και να επεξεργαστείτε τις πληροφορίες που την αφορούν {{module_name}} μέσω της ενότητας {{module_name}} προβολή εγγραφής. Κάθε εγγραφή {{module_name}}, μπορεί στη συνέχεια να συσχετιστεί με άλλες εγγραφές στο Sugar {{calls_module}}, {{contacts_module}}, {{bugs_module}}, και πολλές άλλες.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Ιστορικό',
  'LBL_INVITEE' => 'Επαφές',
  'LBL_KBDOCUMENTS_SUBPANEL_TITLE' => 'Βάση Γνώσεων',
  'LBL_LIST_ACCOUNT_NAME' => 'Όνομα Λογαριασμού',
  'LBL_LIST_ASSIGNED' => 'Ανατέθηκε Σε',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Ανατεθειμένος Χειριστής',
  'LBL_LIST_CLOSE' => 'Κλείσιμο',
  'LBL_LIST_DATE_CREATED' => 'Ημερομηνία Δημιουργίας',
  'LBL_LIST_FORM_TITLE' => 'Λίστα Υποθέσεων',
  'LBL_LIST_LAST_MODIFIED' => 'Τελευταία Τροποποίηση',
  'LBL_LIST_MY_CASES' => 'Ανοικτές Μου Υποθέσεις',
  'LBL_LIST_NUMBER' => 'Αριθ.',
  'LBL_LIST_PRIORITY' => 'Προτεραιότητα',
  'LBL_LIST_STATUS' => 'Κατάσταση',
  'LBL_LIST_SUBJECT' => 'Θέμα',
  'LBL_MEMBER_OF' => 'Λογαριασμός',
  'LBL_MODIFIED_BY_NAME_MOD' => 'Τροποποιήθηκε Από Όνομα Διαμορφωτή',
  'LBL_MODIFIED_BY_NAME_OWNER' => 'Τροποποιήθηκε Από Όνομα Ιδιοκτήτη',
  'LBL_MODIFIED_USER' => 'Χειριστής Τροποποίησης',
  'LBL_MODIFIED_USER_NAME' => 'Όνομα Χειριστή Τροποποίησης',
  'LBL_MODIFIED_USER_NAME_MOD' => 'Χειριστής Τροποποίησης, Όνομα Διαμορφωτή',
  'LBL_MODIFIED_USER_NAME_OWNER' => 'Χειριστής Τροποποίησης, Όνομα Ιδιοκτήτη',
  'LBL_MODULE_NAME' => 'Υποθέσεις',
  'LBL_MODULE_NAME_SINGULAR' => 'Υπόθεση',
  'LBL_MODULE_TITLE' => 'Υποθέσεις: Αρχή',
  'LBL_NEW_FORM_TITLE' => 'Νέα Υπόθεση',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Σημειώσεις',
  'LBL_NUMBER' => 'Αριθμός:',
  'LBL_PORTAL_TOUR_RECORDS_CREATE' => 'Εάν έχετε μια νέα Υπόθεση υποστήριξης που θα επιθυμούσατε να υποβάλετε, μπορείτε να πατήσετε εδώ για να υποβάλει μια νέα Υπόθεση.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER' => 'Μπορείτε να φιλτράρετε κάτω στη λίστα Υποθέσεις, παρέχοντας έναν όρο αναζήτησης.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER_EXAMPLE' => 'Για παράδειγμα, μπορείτε να χρησιμοποιήσετε αυτό, για να βρείτε ένα ζήτημα το οποίο υποβλήθηκε προηγουμένως.',
  'LBL_PORTAL_TOUR_RECORDS_INTRO' => 'Η ενότητα Υποθέσεις, είναι για να διαχειρίζεται τα θέματα υποστήριξης που επηρεάζουν το Λογαριασμό σας. Χρησιμοποιήστε τα βέλη παρακάτω, για να περάσουν από μια γρήγορη περιήγηση.',
  'LBL_PORTAL_TOUR_RECORDS_PAGE' => 'Αυτή η σελίδα εμφανίζει τον κατάλογο των υφιστάμενων Υποθέσεων που συνδέονται με το Λογαριασμό σας.',
  'LBL_PORTAL_TOUR_RECORDS_RETURN' => 'Κάνοντας κλικ εδώ, θα σας επιστρέψει σε αυτήν την προβολή ανά πάσα στιγμή.',
  'LBL_PORTAL_VIEWABLE' => 'Ικανή Προβολή Portal',
  'LBL_PRIORITY' => 'Προτεραιότητα:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Έργα',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Έργα',
  'LBL_RESOLUTION' => 'Επίλυση:',
  'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Υπόθεσης',
  'LBL_SHOW_IN_PORTAL' => 'Εμφάνιση στο Portal',
  'LBL_SHOW_MORE' => 'Εμφάνιση Περισσότερων Υποθέσεων',
  'LBL_SOURCE' => 'Πηγή:',
  'LBL_STATUS' => 'Κατάσταση:',
  'LBL_SUBJECT' => 'Θέμα:',
  'LBL_SYSTEM_ID' => 'Ταυτότητα Συστήματος',
  'LBL_TEAM_COUNT_MOD' => 'Αρίθμηση Ομάδας Διαμορφωτή',
  'LBL_TEAM_COUNT_OWNER' => 'Αρίθμηση Ομάδας Ιδιοκτήτη',
  'LBL_TEAM_NAME_MOD' => 'Όνομα Ομάδας Διαμορφωτή',
  'LBL_TEAM_NAME_OWNER' => 'Όνομα Ομάδας Ιδιοκτήτη',
  'LBL_TYPE' => 'Τύπος',
  'LBL_WORK_LOG' => 'Καταγραφή Εργασίας',
  'LNK_CASE_LIST' => 'Προβολή Υποθέσεων',
  'LNK_CASE_REPORTS' => 'Προβολή Αναφορών Υποθέσεων',
  'LNK_CREATE' => 'Δημιουργία Υπόθεσης',
  'LNK_CREATE_WHEN_EMPTY' => 'Δημιουργήστε μία Υπόθεση τώρα.',
  'LNK_IMPORT_CASES' => 'Εισαγωγή Υποθέσεων',
  'LNK_NEW_CASE' => 'Δημιουργία Υπόθεσης',
  'NTC_REMOVE_FROM_BUG_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτή την υπόθεση από το σφάλμα;',
  'NTC_REMOVE_INVITEE' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτή την επαφή από την υπόθεση;',
);

