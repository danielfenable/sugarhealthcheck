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
  'ERR_DELETE_RECORD' => 'Πρέπει να προσδιορίσετε αριθμό εγγραφής για να διαγράψετε τον Λογαριασμό.',
  'LBL_ACCEPT_LINK' => 'Αποδοχή Συνδέσμου',
  'LBL_ACCEPT_STATUS' => 'Αποδοχή Κατάστασης',
  'LBL_ACCOUNT_NAME' => 'Λογαριασμός',
  'LBL_ACTIVITIES_REPORTS' => 'Αναφορά Δραστηριοτήτων',
  'LBL_ADD_BUTTON' => 'Προσθήκη',
  'LBL_ADD_INVITEE' => 'Προσθήκη Προσκεκλημένων',
  'LBL_ASSIGNED_TO_ID' => 'Ανατεθειμένος Χειριστής',
  'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε:',
  'LBL_BLANK' => '-κενό-',
  'LBL_CALL' => 'Κλήση:',
  'LBL_CALL_INFORMATION' => 'Επισκόπηση',
  'LBL_CANCEL_CREATE_INVITEE' => 'Ακύρωση',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε όλες τις επαναλαμβανόμενες εγγραφές;',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Επαφές',
  'LBL_CONTACT_NAME' => 'Επαφή:',
  'LBL_CREATE_AND_ADD' => 'Δημιουργία και Προσθήκη',
  'LBL_CREATE_CONTACT' => 'Σαν Επαφή',
  'LBL_CREATE_INVITEE' => 'Δημιουργία προσκεκλημένου',
  'LBL_CREATE_LEAD' => 'Σαν Δυνητικός Πελάτης',
  'LBL_CREATE_MODULE' => 'Καταγραφή Κλήσης',
  'LBL_DATE' => 'Ημερομηνία Έναρξης:',
  'LBL_DATE_END' => 'Ημερομηνία Λήξης',
  'LBL_DATE_END_ERROR' => 'Η ημερομηνία λήξης είναι πριν από την ημερομηνία έναρξης',
  'LBL_DATE_TIME' => 'Ημερομηνία & Ώρα Έναρξης:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Κλήσεις',
  'LBL_DEL' => 'Διαγρ.',
  'LBL_DESCRIPTION' => 'Περιγραφή:',
  'LBL_DESCRIPTION_INFORMATION' => 'Περιγραφή Πληροφορίας',
  'LBL_DIRECTION' => 'Κατεύθυνση:',
  'LBL_DURATION' => 'Διάρκεια:',
  'LBL_DURATION_HOURS' => 'Διάρκεια σε Ώρες:',
  'LBL_DURATION_MINUTES' => 'Διάρκεια σε Λεπτά:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Επεξεργασία Επαναλαμβανόμενων',
  'LBL_EMAIL' => 'Email',
  'LBL_EMAIL_REMINDER' => 'Email Υπενθύμισης',
  'LBL_EMAIL_REMINDER_SENT' => 'Αποστολή Email Υπενθύμισης',
  'LBL_EMAIL_REMINDER_TIME' => 'Ώρα Email Υπενθύμισης',
  'LBL_EMPTY_SEARCH_RESULT' => 'Μας συγχωρείτε, δε βρέθηκαν αποτελέσματα. Παρακαλούμε δημιουργήστε έναν προσκεκλημένο.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Ταυτότητα Ανατεθειμένου Χειριστή',
  'LBL_EXPORT_CREATED_BY' => 'Δημιουργήθηκε Από Ταυτότητα',
  'LBL_EXPORT_DATE_START' => 'Ημερομηνία & Ώρα Έναρξης',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Τροποποιήθηκε από Ταυτότητα',
  'LBL_EXPORT_PARENT_TYPE' => 'Σχετίζεται με Ενότητα',
  'LBL_EXPORT_REMINDER_TIME' => 'Υπενθύμιση Ώρας (σε λεπτά)',
  'LBL_FIRST_NAME' => 'Όνομα',
  'LBL_HELP_CREATE' => 'Η {{plural_module_name}} ενότητα, αποτελείται  από εγγραφές {{calls_singular_module}} που καταγράφονται από τους χρήστες του οργανισμού σας.  Η {plural_module_name}} ενότητα, μπορεί να είναι σε κατάσταση "Προγραμματισμένη", "Πραγματοποιήθηκε" ή "Ακυρώθηκε". Οι χρήστες του Sugar μπορούν όπως οι επαφές και οι δυνητικοί πελάτες, να προστεθούν ως προσκεκλημένοι.

Για να δημιουργήσετε {{calls_singular_module}}:
1. Παρέχετε τιμές για τα πεδία, όπως επιθυμείτε.
    - Τα "Υποχρεωτικά" πεδία πρέπει να συμπληρωθούν πριν από την αποθήκευση.
    - Κάντε κλικ στην επιλογή "Εμφάνιση Περισσότερων", να εκθέσει πρόσθετα πεδία, εάν είναι απαραίτητο.
2. Προσθέστε προσκεκλημένους στο {{calls_singular_module}}.
    - Κάντε κλικ στο "Επιλέξτε ένα Συμμετέχοντα" για να προσθέσετε έναν υπάρχοντα χρήστη, επαφή, ή δυνητικό πελάτη στην ενότητα {{calls_singular_module}}.
    - Κάντε κλικ στο εικονίδιο συν, στα δεξιά "Επιλέξτε ένα Συμμετέχοντα" για να δημιουργήσετε ένα συμμετέχοντα {{calls_singular_module}} ως νέα εγγραφή στο Sugar.
3. Κάντε κλικ στην επιλογή "Αποθήκευση" να οριστικοποιήσει τη νέα εγγραφή και να επιστρέψετε στην προηγούμενη σελίδα.
    - Επιλέξτε "Αποθήκευση και προβολή" για να ανοίξετε τη νέα εγγραφή {{calls_singular_module}} στην προβολή.
    - Επιλέξτε "Αποθήκευση και δημιουργία νέας",  για να δημιουργήσει αμέσως μία νέα {{calls_singular_module}}.',
  'LBL_HELP_RECORD' => 'Η {{plural_module_name}} ενότητα, αποτελείται  από εγγραφές {{calls_singular_module}} που καταγράφονται από τους χρήστες του οργανισμού σας. Η {{plural_module_name}} ενότητα, μπορεί να είναι σε κατάσταση "Προγραμματισμένη", "Πραγματοποιήθηκε" ή "Ακυρώθηκε".  Οι χρήστες του Sugar μπορούν επίσης από την ενότητα {{contacts_module}} και {{leads_module}} να προστεθούν ως προσκεκλημένοι.

- Επεξεργαστείτε αυτό το πεδίο εγγραφής,  κάνοντας κλικ στο μεμονωμένο πεδίο ή το κουμπί "Επεξεργασία".
- Προβάλετε ή τροποποιήστε συνδέσεις με άλλες εγγραφές, στον υποπίνακα από την εναλλαγή του κάτω αριστερού παραθύρου στην "Προβολή Δεδομένων".
- Καταστήστε και δείτε τα σχόλια των χρηστών και το ιστορικό εγγραφών των αλλαγών, στη ροή δραστηριοτήτων, από την εναλλαγή του κάτω αριστερού παραθύρου στην "Ροή Δραστηριοτήτων".
- Ακολουθήστε ή κάντε Αγαπημένες εγγραφές,  χρησιμοποιώντας τα εικονίδια στα δεξιά του ονόματος της εγγραφής.
- Πρόσθετες ενέργειες είναι διαθέσιμες στο αναπτυσσόμενο μενού "Ενέργειες" δεξιά από το κουμπί "Επεξεργασία".',
  'LBL_HELP_RECORDS' => 'Η {{plural_module_name}} ενότητα, αποτελείται από κλήσεις που καταγράφονται από τους χρήστες του οργανισμού σας. Η {{plural_module_name}} ενότητα, μπορεί να είναι σε κατάσταση "Προγραμματισμένη", "Πραγματοποιήθηκε" ή "Ακυρώθηκε". Από αυτή {{plural_module_name}} την προβολή λίστας, μπορείτε να κάνετε κλικ στο εικονίδιο "X", στην γραμμή σε κάθε προγραμματισμένη κλήση, προκειμένου να την επισημάνει ότι πραγματοποιήθηκε. Οι χειριστές του Sugar καθώς και oi επαφές και οι δυνητικοί πελάτες, μπορούν να προστεθούν ως προσκεκλημένοι. Υπάρχουν διάφοροι τρόποι για να δημιουργείτε κλήσεις στο Sugar, όπως μέσω της ενότητας {{calls_module}}, της ενότητας {{calendar_module}}, και εισαγωγή. Οι χρήστες, μπορούν να χρονοπρογραμματίσουν επίσης, (για την Κληρονομιά Ενότητες) ή στον Πίνακα Στοιχείων Αρχικής Σελίδας να προγραμματίσουν δραστηριότητες (για τις ενότητες Sidecar) σε συναφή ενότητες (π.χ. {{contacts_module}}, {{accounts_module}}, {{leads_module}}, κ.α.), που δημιουργεί αυτόματα μια σχέση μεταξύ των δύο εγγραφών. Αφού δημιουργηθεί η εγγραφή κλήσης, μπορείτε να προβάλετε και να επεξεργαστείτε τις πληροφορίες που αφορούν την κλήση μέσω της προβολής εγγραφής στην ενότητα {{plural_module_name}}.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Σημειώσεις',
  'LBL_HOURS_ABBREV' => 'ω',
  'LBL_HOURS_MINUTES' => '(ώρες/λεπτά)',
  'LBL_INVITEE' => 'Προσκεκλημένοι',
  'LBL_LAST_NAME' => 'Επώνυμο',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Δυνητικοί Πελάτες',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε',
  'LBL_LIST_CLOSE' => 'Κλείσιμο',
  'LBL_LIST_CONTACT' => 'Επαφή',
  'LBL_LIST_DATE' => 'Ημερομηνία Έναρξης',
  'LBL_LIST_DIRECTION' => 'Κατεύθυνση',
  'LBL_LIST_DURATION' => 'Διάρκεια',
  'LBL_LIST_FORM_TITLE' => 'Λίστα Κλήσεων',
  'LBL_LIST_MY_CALLS' => 'Κλήσεις Μου',
  'LBL_LIST_RELATED_TO' => 'Σχετίζεται με',
  'LBL_LIST_RELATED_TO_ID' => 'Σχετίζεται με Ταυτότητα',
  'LBL_LIST_SUBJECT' => 'Θέμα',
  'LBL_LIST_TIME' => 'Ώρα Έναρξης',
  'LBL_LOG_CALL' => 'Καταγραφή Κλήσης',
  'LBL_MEMBER_OF' => 'Μέλος Του',
  'LBL_MINSS_ABBREV' => 'λ',
  'LBL_MODULE_NAME' => 'Κλήσεις',
  'LBL_MODULE_NAME_SINGULAR' => 'Κλήση',
  'LBL_MODULE_TITLE' => 'Κλήσεις: Αρχή',
  'LBL_MY_SCHEDULED_CALLS' => 'Προγραμματισμένες Κλήσεις Μου',
  'LBL_NAME' => 'Όνομα',
  'LBL_NEW_FORM_TITLE' => 'Δημιουργία Ραντεβού',
  'LBL_NO_ACCESS' => 'Δεν έχετε πρόσβαση για τη δημιουργία ενότητας',
  'LBL_OUTLOOK_ID' => 'Ταυτότητα Outlook',
  'LBL_PARENT_ID' => 'Γονική Ταυτότητα',
  'LBL_PHONE' => 'Τηλέφωνο',
  'LBL_POPUP_REMINDER_TIME' => 'Popup Ώρα Υπενθύμισης',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Προγραμματίσατε το {{moduleSingularLower}} for {{formatDate date_start}}, αλλά δεν έχετε δικαίωμα πρόσβασης σε αυτό.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Προγραμματίσατε το {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> για {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Επαναλαμβανόμενο',
  'LBL_RECURRING_LIMIT_ERROR' => 'Αυτή η επαναλαμβανόμενη τηλεφωνική κλήση δεν μπορεί να προγραμματιστεί, διότι υπερβαίνει το μέγιστο επιτρεπόμενο όριο επαναλήψεων.',
  'LBL_RECURRING_SOURCE' => 'Επαναλαμβανόμενη Πηγή',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Κλήση με {{{this}}}',
  'LBL_RELATED_TO' => 'Σχετίζεται Με:',
  'LBL_REMINDER' => 'Υπενθυμίσεις:',
  'LBL_REMINDER_EMAIL' => 'Email',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email υπενθύμισης προσκεκλημένων',
  'LBL_REMINDER_POPUP' => 'Αναδυόμενη',
  'LBL_REMINDER_TIME' => 'Ώρα Υπενθύμισης',
  'LBL_REMINDER_TITLE' => 'Κλήση:',
  'LBL_REMOVE' => 'αφαίρ.',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Διαγραφή Επαναλαμβανόμενων',
  'LBL_REPEAT_COUNT' => 'Αριθμός Επαναλαμβανόμενων',
  'LBL_REPEAT_DOW' => 'Κάτω',
  'LBL_REPEAT_END' => 'Τέλος',
  'LBL_REPEAT_END_AFTER' => 'Μετά',
  'LBL_REPEAT_END_BY' => 'Από',
  'LBL_REPEAT_INTERVAL' => 'Κάθε',
  'LBL_REPEAT_OCCURRENCES' => 'επαναλαμβανόμενα',
  'LBL_REPEAT_PARENT_ID' => 'Επανάληψη Γονικής Ταυτότητας',
  'LBL_REPEAT_TYPE' => 'Επανάληψη',
  'LBL_REPEAT_UNTIL' => 'Επανάληψη Μέχρι',
  'LBL_REVENUELINEITEMS' => 'Γραμμή Στοιχείων Εσόδων',
  'LBL_SCHEDULING_FORM_TITLE' => 'Προγραμματισμός',
  'LBL_SEARCH_BUTTON' => 'Αναζήτηση',
  'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Κλήσεων',
  'LBL_SELECT_FROM_DROPDOWN' => 'Παρακαλώ κάνετε μια επιλογή από την Σχετική Αναπτυσσόμενη λίστα, αρχικά.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Αποθήκευση & Αποστολή Προσκεκλημένων',
  'LBL_SEND_BUTTON_TITLE' => 'Αποθήκευση & Αποστολή Προσκεκλημένων [Alt+I]',
  'LBL_SEND_INVITES' => 'Αποστολή Προσκεκλημένων',
  'LBL_STATUS' => 'Κατάσταση:',
  'LBL_SUBJECT' => 'Θέμα:',
  'LBL_SYNCED_RECURRING_MSG' => 'Η κλήση αυτή δημιουργήθηκε σε ένα άλλο σύστημα και ήταν συγχρονισμένη στο Sugar.  Για να κάνετε τις αλλαγές, πηγαίνετε στην αρχική κλήση μέσα στο άλλο σύστημα. Οι αλλαγές που γίνονται στο άλλο σύστημα μπορούν να είναι σε αυτήν την εγγραφή.',
  'LBL_TIME' => 'Ώρα Έναρξης:',
  'LBL_TIME_END' => 'Ώρα Λήξης',
  'LBL_USERS_SUBPANEL_TITLE' => 'Χειριστές',
  'LNK_CALL_LIST' => 'Προβολή Κλήσεων',
  'LNK_IMPORT_CALLS' => 'Εισαγωγή Κλήσεων',
  'LNK_NEW_ACCOUNT' => 'Νέος Λογαριασμός',
  'LNK_NEW_APPOINTMENT' => 'Δημιουργία Ραντεβού',
  'LNK_NEW_CALL' => 'Καταγραφή Κλήσης',
  'LNK_NEW_MEETING' => 'Προγραμματισμός Συνάντησης',
  'LNK_NEW_OPPORTUNITY' => 'Νέα Ευκαιρία',
  'LNK_SELECT_ACCOUNT' => 'Επιλογή Λογαριασμού',
  'NOTICE_DURATION_TIME' => 'Η Διάρκεια χρόνου πρέπει να είναι μεγαλύτερη από 0',
  'NTC_REMOVE_INVITEE' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτόν τον προσκεκλημένο από την πρόσκληση;',
  'TPL_CALL_STATUS_CHANGED' => 'Η Κλήση χαρακτηρίστηκε ως {{κατάσταση}}.',
);

