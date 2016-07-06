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
  'ERR_DELETE_RECORD' => 'Πρέπει να προσδιορίσετε αριθμό εγγραφής για να διαγράψετε το προϊόν.',
  'LBL_ACCOUNT_ID' => 'Ταυτότητα Λογαριασμού',
  'LBL_ACCOUNT_NAME' => 'Όνομα Λογαριασμού:',
  'LBL_ASSET_NUMBER' => 'Αριθμός Ενεργητικού:',
  'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε',
  'LBL_ASSIGNED_USER_ID' => 'Ταυτότητα Ανατεθειμένου Χειριστή:',
  'LBL_ASSOCIATED_QUOTE' => 'Θέμα Προσφοράς:',
  'LBL_BOOK_VALUE' => 'Λογιστική Αξία:',
  'LBL_BOOK_VALUE_DATE' => 'Ημερομηνία Λογιστικής Αξίας:',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Λογιστική Αξία (US Δολλάριο):',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => 'Γραμμή Υπολογιζόμενου Ποσού Προσφοράς',
  'LBL_CAMPAIGN_PRODUCT' => 'Εισηγμένα Στοιχεία Γραμμής, Εκστρατεία',
  'LBL_CATEGORY' => 'Κατηγορία:',
  'LBL_CATEGORY_NAME' => 'Όνομα Κατηγορίας:',
  'LBL_COMMIT_STAGE' => 'Στάδιο Δέσμευσης',
  'LBL_COMMIT_STAGE_FORECAST' => 'Πρόβλεψη',
  'LBL_CONTACT' => 'Επαφή',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Επαφές',
  'LBL_CONTACT_ID' => 'Ταυτότητα Επαφής',
  'LBL_CONTACT_NAME' => 'Όνομα Επαφής:',
  'LBL_CONTRACTS' => 'Συμβάσεις',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Συμβάσεις',
  'LBL_CONVERT_TO_QUOTE_ERROR' => 'Σφάλμα:',
  'LBL_CONVERT_TO_QUOTE_ERROR_MESSAGE' => 'Υπήρξε ένα σφάλμα κατά την μετατροπή της Γραμμής Προσφοράς σε μία Προσφορά',
  'LBL_COST_PRICE' => 'Κόστος:',
  'LBL_COST_USDOLLAR' => 'Κόστος Δολλαρίου',
  'LBL_CREATED_USER' => 'Χειριστής Δημιουργίας',
  'LBL_CURRENCY' => 'Νόμισμα:',
  'LBL_CURRENCY_ID' => 'Ταυτότητα Νομίσματος',
  'LBL_CURRENCY_RATE' => 'Ισοτιμία Νομίσματος',
  'LBL_CURRENCY_SYMBOL_NAME' => 'Όνομα Συμβόλου Νομίσματος',
  'LBL_DATE_CLOSED' => 'Αναμενόμενη Ημερομηνία Κλεισίματος',
  'LBL_DATE_CLOSED_TIMESTAMP' => 'Timestamp Αναμενόμενη Ημερομηνία Κλεισίματος',
  'LBL_DATE_PURCHASED' => 'Αγορά:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Λήξη Υποστήριξης:',
  'LBL_DATE_SUPPORT_STARTS' => 'Έναρξη Υποστήριξης:',
  'LBL_DEAL_TOT' => 'Έκπτωση:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Εισηγμένα Στοιχεία Γραμμής',
  'LBL_DESCRIPTION' => 'Περιγραφή:',
  'LBL_DISCOUNT_AMOUNT' => 'Ποσό Έκπτωσης',
  'LBL_DISCOUNT_AS_PERCENT' => 'Έκπτωση τις %',
  'LBL_DISCOUNT_PRICE' => 'Τιμή Μονάδας:',
  'LBL_DISCOUNT_PRICE_DATE' => 'Ημερομηνία Τιμής Έκπτωσης:',
  'LBL_DISCOUNT_RATE' => 'Τιμή Έκπτωσης',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'Τιμή Έκπτωσης (US Δολλάριο)',
  'LBL_DISCOUNT_TOTAL' => 'Σύνολο Έκπτωσης',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'Έκπτωση (US Δολλάριο)',
  'LBL_DISCOUNT_USDOLLAR' => 'Τιμή Έκπτωσης USD:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Έγγραφα',
  'LBL_EDITLAYOUT' => 'Επεξεργασία Διάταξης',
  'LBL_EXPERT_ID' => 'Ειδικό Προϊόν',
  'LBL_EXPORT_CURRENCY_ID' => 'Ταυτότητα Νομίσματος',
  'LBL_EXT_PRICE' => 'Εξωτ.Τιμή',
  'LBL_FORECAST' => 'Συμπεριλαμβάνεται στην Πρόβλεψη',
  'LBL_HELP_CREATE' => 'Η {{plural_module_name}} ενότητα αποτελείται από όλα τα προϊόντα που έχουν ήδη πωληθεί ή βρίσκονται στη διαδικασία πώλησης σε πελάτες.

Για να δημιουργήσετε μία εγγραφή {{module_name}}:
1. Παρέχετε τιμές για τα πεδία, όπως επιθυμείτε.
 - Τα "Υποχρεωτικά" πεδία πρέπει να ολοκληρωθούν πριν από την αποθήκευση.
 - Κάντε κλικ στην επιλογή "Εμφάνιση Περισσότερων" να εκθέσει πρόσθετα πεδία, εάν είναι απαραίτητο.
2. Κάντε κλικ στην επιλογή "Αποθήκευση" να οριστικοποιήσει τη νέα εγγραφή και να επιστρέψετε στην προηγούμενη σελίδα.
 - Επιλέξτε "Αποθήκευση και προβολή" για να ανοίξετε τη νέα εγγραφή {{module_name}} στην προβολή.
 - Επιλέξτε "Αποθήκευση και δημιουργία νέας" για να δημιουργήσει αμέσως μία νέα εγγραφή {{module_name}}.',
  'LBL_HELP_RECORD' => 'Η {{plural_module_name}} ενότητα αποτελείται από όλα τα προϊόντα που έχουν ήδη πωληθεί ή βρίσκονται στη διαδικασία πώλησης σε πελάτες. 


- Επεξεργαστείτε αυτό το πεδίο εγγραφής κάνοντας κλικ στο μεμονωμένο πεδίο ή το κουμπί "Επεξεργασία".
- Προβάλετε ή τροποποιήστε συνδέσεις με άλλες εγγραφές στους υποπίνακες, από την εναλλαγή του κάτω αριστερού παραθύρου σε "Προβολή Δεδομένων".
- Αλληλεπιδράστε με τα σχόλια των χρηστών και την προβολή του ιστορικού των αλλαγών των εγγραφών, από την εναλλαγή του κάτω αριστερού παραθύρου "Ροή Δραστηριοτήτων".
- Ακολουθήστε ή κάντε Αγαπημένες εγγραφές χρησιμοποιώντας τα εικονίδια στα δεξιά του ονόματος της εγγραφής.
- Πρόσθετες ενέργειες είναι διαθέσιμες στο αναπτυσσόμενο μενού "Ενέργειες", δεξιά από το κουμπί "Επεξεργασία".',
  'LBL_HELP_RECORDS' => 'Η {{plural_module_name}} ενότητα αποτελείται από όλα τα προϊόντα που έχουν ήδη πωληθεί ή βρίσκονται στη διαδικασία πώλησης σε πελάτες. Ο κατάλογος των προϊόντων που πωλούνται από την εταιρεία σας στεγάζεται στον Διαχειριστή > Κατάλογος Προϊόντων και οι διαχειριστές έχουν τη δυνατότητα να προσθέσουν προϊόντα ανάλογα με τις ανάγκες τους. Κατά τη δημιουργία {{plural_module_name}}, έχετε τη δυνατότητα να επιλέξετε προϊόντα από τον κατάλογο ή να δημιουργήσετε νέα προϊόντα μέσω της ενότητας {{plural_module_name}}. Υπάρχουν πολλοί τρόποι στο Sugar που μπορείτε να δημιουργήσετε εγγραφές {{plural_module_name}} όπως μέσω της ενότητας  {{plural_module_name}}, {{quotes_module}} ενότητα, αντίγραφα, εξαγωγή {{plural_module_name}}, κ.λ.π. Αφού δημιουργήσετε την εγγραφή {{module_name}}, μπορείτε να προβάλετε και να επεξεργαστείτε τις πληροφορίες που την αφορούν {{module_name}} μέσω της {{plural_module_name}} προβολής εγγραφής.',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Δυνητικοί Πελάτες',
  'LBL_LEAD_SOURCE' => 'Πηγή Προέλευσης',
  'LBL_LIST_ACCOUNT_NAME' => 'Όνομα Λογαριασμού',
  'LBL_LIST_CONTACT_NAME' => 'Όνομα Επαφής',
  'LBL_LIST_COST_PRICE' => 'Κόστος',
  'LBL_LIST_DATE_PURCHASED' => 'Αγορά',
  'LBL_LIST_DISCOUNT_PRICE' => 'Τιμή',
  'LBL_LIST_FORM_TITLE' => 'Εισηγμένα Στοιχεία Γραμμής, Λίστα',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Αριθμός Παραγωγής Κατασκευαστή',
  'LBL_LIST_LIST_PRICE' => 'Λίστα',
  'LBL_LIST_MANUFACTURER' => 'Κατασκευαστής',
  'LBL_LIST_NAME' => 'Εισηγμένα Στοιχεία Γραμμής',
  'LBL_LIST_PRICE' => 'Τιμοκατάλογος:',
  'LBL_LIST_QUANTITY' => 'Ποσότητα',
  'LBL_LIST_QUOTE_NAME' => 'Όνομα Προσφοράς',
  'LBL_LIST_STATUS' => 'Κατάσταση',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Λήξη',
  'LBL_LIST_USDOLLAR' => 'Λίστα USD',
  'LBL_MANUFACTURER' => 'Κατασκευαστής:',
  'LBL_MANUFACTURERS' => 'Κατασκευαστές',
  'LBL_MANUFACTURER_NAME' => 'Όνομα Κατασκευαστή:',
  'LBL_MEMBER_OF' => 'Μέλος του:',
  'LBL_MFT_PART_NUM' => 'Αριθμός Παρτίδας Κατασκευαστή:',
  'LBL_MODIFIED_USER' => 'Χειριστής Τροποποίησης',
  'LBL_MODULE_NAME' => 'Εισηγμένα Στοιχεία Γραμμής',
  'LBL_MODULE_NAME_SINGULAR' => 'Εισηγμένα Στοιχεία Γραμμής',
  'LBL_MODULE_TITLE' => 'Εισηγμένα Στοιχεία Γραμμής: Αρχή',
  'LBL_NAME' => 'Όνομα',
  'LBL_NEW_FORM_TITLE' => 'Δημιουργία Εισηγμένων Στοιχείων Γραμμής',
  'LBL_NEXT_STEP' => 'Επόμενο Βήμα:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Σημειώσεις',
  'LBL_OPPORTUNITY' => 'Ευκαιρία',
  'LBL_OPPORTUNITY_ID' => 'Ταυτότητα Ευκαιρίας',
  'LBL_PIPELINE_TOTAL_IS' => 'Σύνολο Αγωγού είναι',
  'LBL_PRICING_FACTOR' => 'Παράγοντας Τιμολόγησης',
  'LBL_PRICING_FORMULA' => 'Υπόδειγμα Τιμολόγησης:',
  'LBL_PROBABILITY' => 'Πιθανότητα (%)',
  'LBL_PRODUCT' => 'Εισηγμένα Στοιχεία Γραμμής',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Εισηγμένα Στοιχεία Γραμμής',
  'LBL_PRODUCT_CATEGORIES' => 'Κατηγορίες Προϊόντων',
  'LBL_PRODUCT_TEMPLATE' => 'Πρότυπο Προϊόντος:',
  'LBL_PRODUCT_TEMPLATE_ID' => 'Ταυτότητα Προτύπου Προϊόντος',
  'LBL_PRODUCT_TYPES' => 'Τύποι Προϊόντων',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Έργα',
  'LBL_QUANTITY' => 'Ποσότητα:',
  'LBL_QUOTE' => 'Προσφορά',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Προσφορές',
  'LBL_QUOTE_ID' => 'Ταυτότητα Προσφοράς',
  'LBL_QUOTE_NAME' => 'Όνομα Προσφοράς:',
  'LBL_RELATED_PRODUCTS' => 'Σχετίζεται με Εισηγμένα Στοιχεία Γραμμής',
  'LBL_RELATED_PRODUCTS_TITLE' => 'Εισηγμένα Στοιχεία Γραμμής',
  'LBL_REVENUELINEITEM' => 'Εισηγμένα Στοιχεία Γραμμής Εσόδου',
  'LBL_REVENUELINEITEMS' => 'Εισηγμένα Στοιχεία Γραμμής',
  'LBL_REVENUELINEITEM_ID' => 'Ταυτότητα Εισηγμένου Στοιχείου Εσόδου :',
  'LBL_REVENUELINEITEM_NAME' => 'Όνομα Στοιχείου Εσόδου:',
  'LBL_SALES_STAGE' => 'Στάδιο Πώλησης',
  'LBL_SALES_STATUS' => 'Γραμμή Κατάστασης Εσόδων',
  'LBL_SEARCH_FORM_TITLE' => 'Εισηγμένα Στοιχεία Γραμμής, Αναζήτηση Προϊόντων',
  'LBL_SELECT_DISCOUNT' => 'Επιλογή Έκπτωσης',
  'LBL_SERIAL_NUMBER' => 'Σειριακός Αριθμός:',
  'LBL_STATUS' => 'Κατάσταση:',
  'LBL_SUBTOTAL' => 'Υποσύνολο:',
  'LBL_SUPPORT_CONTACT' => 'Επαφή Υποστήριξης:',
  'LBL_SUPPORT_DESCRIPTION' => 'Περιγραφή Υποστήριξης:',
  'LBL_SUPPORT_NAME' => 'Τίτλος Υποστήριξης:',
  'LBL_SUPPORT_TERM' => 'Περίοδος Υποστήριξης:',
  'LBL_TAX_CLASS' => 'Κατηγορία Φόρου:',
  'LBL_TYPE' => 'Τύπος:',
  'LBL_URL' => 'URL Προϊόντος :',
  'LBL_VENDOR_PART_NUM' => 'Αριθμός Παρτίδας Πωλητή:',
  'LBL_WEBSITE' => 'Ιστοσελίδα',
  'LBL_WEIGHT' => 'Βάρος:',
  'LNK_IMPORT_PRODUCTS' => 'Εισαγωγή Προϊόντων',
  'LNK_NEW_PRODUCT' => 'Δημιουργία Εισηγμένων Στοιχείων Γραμμής',
  'LNK_PRODUCT_LIST' => 'Προβολή Εισηγμένων Στοιχείων Γραμμής',
  'NTC_DELETE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτή την εγγραφή;',
  'NTC_REMOVE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτή την σχέση προϊόντος;',
);

