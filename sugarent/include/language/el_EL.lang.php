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


$app_strings = array (
  'BorderColor' => 'Χρώμα Περιγράμματος',
  'DATA_TYPE_DUE' => 'Μέχρι:',
  'DATA_TYPE_MODIFIED' => 'Τροποποιημένο:',
  'DATA_TYPE_SENT' => 'Αποστολή:',
  'DATA_TYPE_START' => 'Έναρξη:',
  'DEFAULT' => 'Βασική',
  'ERROR_ACCESS_MODULE' => 'Δεν έχετε πρόσβαση σε αυτή την ενότητα.',
  'ERROR_CONNECTOR_CONFIGURE' => 'Δεν είναι δυνατή η ανάκτηση δεδομένων. Η υπηρεσία μπορεί επί του παρόντος να είναι απρόσιτη ή οι ρυθμίσεις παραμέτρων μπορεί να είναι άκυρες.',
  'ERROR_DATETIME' => 'Λάθος: Το πεδίο απαιτεί έγκυρη ημερομηνία.',
  'ERROR_DUPLICATE_EMAIL' => 'Σφάλμα. Αντίγραφο Διεύθυνσης Email: {{#each this}}{{this}} {{/each}}',
  'ERROR_EMAIL' => 'Λάθος: Άκυρη Διεύθυνση Email: {{#each this}} {{this}} {{/each}}',
  'ERROR_EMPTY_LINK_MODULE' => 'Παρακαλώ, επιλέξτε πρώτα τη σχέση.',
  'ERROR_EXAMINE_MSG' => 'Παρακαλώ εξετάστε το παρακάτω μήνυμα λάθους:',
  'ERROR_EXCEEDING_OC_LICENSES' => 'Ο αριθμός των ενεργοποιημένων Offline Clients υπερβαίνει τον αριθμό που καθορίζεται στην άδεια χρήσης σας.',
  'ERROR_FIELD_REQUIRED' => 'Λάθος: Αυτό το πεδίο είναι υποχρεωτικό.',
  'ERROR_FULLY_EXPIRED' => 'Η άδεια της εταιρείας σας για το SugarCRM έχει λήξει για περισσότερες από 7 ημέρες και πρέπει να εκσυγχρονιστεί. Μόνο οι διαχειριστές μπορούν να συνδεθούν.',
  'ERROR_IS_AFTER' => 'Σφάλμα.  Η ημερομηνία αυτού του πεδίου δεν μπορεί να είναι πριν από την ημερομηνία του πεδίου {{this}}.',
  'ERROR_IS_BEFORE' => 'Σφάλμα. Η ημερομηνία αυτού του πεδίου δεν μπορεί να είναι μεταγενέστερη από την ημερομηνία του πεδίου {{this}}.',
  'ERROR_IS_GREATER_THAN' => 'Σφάλμα.  Η αξία αυτού του πεδίου πρέπει να είναι μεγαλύτερη από {{αυτό}}.',
  'ERROR_IS_LESS_THAN' => 'Σφάλμα.  Η αξία αυτού του πεδίου πρέπει να είναι μικρότερτη από {{αυτό}}.',
  'ERROR_LICENSE_EXPIRED' => 'Η άδεια της εταιρείας σας για το SugarCRM πρέπει να ενημερωθεί. Μόνο οι διαχειριστές μπορούν να συνδεθούν.',
  'ERROR_LICENSE_VALIDATION' => 'Η άδεια της εταιρείας σας για το SugarCRM πρέπει να επικυρωθεί. Μόνο οι διαχειριστές μπορούν να συνδεθούν.',
  'ERROR_MAXVALUE' => 'Λάθος: Η μέγιστη τιμή αυτού του πεδίου είναι {{this}}.',
  'ERROR_MAX_FIELD_LENGTH' => 'Λάθος: Το μέγιστο μήκος του πεδίου αυτού {{this}}.',
  'ERROR_MAX_FILESIZE_EXCEEDED' => 'Λάθος: Το επισυναπτόμενο αρχείο είναι πολύ μεγάλο.',
  'ERROR_MINVALUE' => 'Λάθος: Η ελάχιστη τιμή αυτού του πεδίου είναι {{this}}.',
  'ERROR_MIN_FIELD_LENGTH' => 'Λάθος: Το ελάχιστο μήκος του πεδίου αυτού {{this}}.',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'Άδειο υποχρεωτικό πεδίο',
  'ERROR_NOTIFY_OVERRIDE' => 'Λάθος: Ο Παρατηρητής Πόρων->ειδοποίησης() πρέπει να αντικατασταθεί.',
  'ERROR_NO_BEAN' => 'Απέτυχε να πάρει bean.',
  'ERROR_NO_RECORD' => 'Λάθος κατά την ανάκτηση εγγραφής. Αυτή η εγγραφή μπορεί να διαγράφηκε ή ίσως δεν επιτρέπεται να την δείτε.',
  'ERROR_NUMBER' => 'Λάθος. Αυτό το πεδίο απαιτεί έναν έγκυρο αριθμό.',
  'ERROR_PRIMARY_EMAIL' => 'Σφάλμα. Τουλάχιστον μία κύρια διεύθυνση θα πρέπει να οριστεί.',
  'ERROR_TYPE_NOT_VALID' => 'Λάθος: Ο τύπος αυτός είναι άκυρος.',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Λάθος: Ανίκανο να ανακτήσει τα δεδομένα {0} Connector.  Η υπηρεσία μπορεί επί του παρόντος να είναι μη διαθέσιμη ή οι ρυθμίσεις ενδέχεται να είναι άκυρες.  Μήνυμα σφάλματος  Connector: ({1}).',
  'ERROR_UPLOAD_FAILED' => 'Λάθος: Το αρχείο απέτυχε να φορτωθεί.',
  'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Παρακαλώ καθορίστε "κλειδί" ευρετηρίου στην ιδιότητα displayParams για τον προορισμό Meta-Data',
  'ERR_AJAX_LOAD' => 'Ένα λάθος έχει εμφανιστεί.',
  'ERR_AJAX_LOAD_FAILURE' => 'Υπήρξε λάθος κατά την επεξεργασία του αιτήματός σας, δοκιμάστε ξανά αργότερα.',
  'ERR_AJAX_LOAD_FOOTER' => 'Αν αυτό το σφάλμα επιμένει, παρακαλούμε να απενεργοποιήσετε τον διαχειριστή Ajax για αυτήν την ενότητα',
  'ERR_BAD_RESPONSE_FROM_SERVER' => 'Κακή ανταπόκριση από το διακομιστή',
  'ERR_BLANK_PAGE_NAME' => 'Παρακαλώ εισάγετε ένα όνομα σελίδας.',
  'ERR_CALENDAR_CANNOT_UPDATE_FROM_CHILD' => 'Η Επανάληψη των αλλαγών, πρέπει να γίνονται με τη χρήση της πρώτης εγγραφής στη σειρά.',
  'ERR_CANNOT_CREATE_METADATA_FILE' => 'Λάθος: Πεδίο [[πεδίο]] λείπει. Δεν είναι δυνατή η δημιουργία γιατί δεν βρέθηκε αντίστοιχο αρχείο HTML.',
  'ERR_CANNOT_FIND_MODULE' => 'Λάθος: Η Ενότητα [ενότητα] δεν υπάρχει.',
  'ERR_COMPATIBLE_PRECISION_VALUE' => 'Η αξία του πεδίου δεν είναι συμβατή με την ακριβής αξία',
  'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Λάθος: Η καταμέτρηση Array της παραμέτρου bean, δεν ταιριάζει με την καταμέτρηση Array των αποτελεσμάτων.',
  'ERR_CONNECTOR_NOT_ARRAY' => 'του connector η σειρά {0} ορίστηκε λανθασμένη ή είναι άδεια και δεν μπορεί να χρησιμοποιηθεί.',
  'ERR_CONTACT_TECH_SUPPORT' => 'Παρακαλώ επικοινωνήστε με την τεχνική υποστήριξη.',
  'ERR_CREATING_FIELDS' => 'Λάθος κατά την ενημέρωση πεδίων:',
  'ERR_CREATING_TABLE' => 'Λάθος κατά την δημιουργία πίνακα:',
  'ERR_DATABASE_CONN_DROPPED' => 'Λάθος εκτέλεσης ερωτήματος. Ενδεχομένως, να έχει πέσει η σύνδεση στη βάση δεδομένων σας. Παρακαλώ ανανεώστε την σελίδα, μπορεί να χρειαστεί να επανεκκινήσετε τον web server.',
  'ERR_DATABSE_RELATIONSHIP_QUERY' => 'Λάθος ρύθμιση {0} σχέση: {1}',
  'ERR_DB_FAIL' => 'Αποτυχία Βάσης Δεδομένων. Παρακαλώ ανατρέξτε για λεπτομέρειες στο sugarcrm.log.',
  'ERR_DB_QUERY' => '{0}: αποτυχημένο ερώτημα: {1}',
  'ERR_DB_VERSION' => 'Sugar CRM {0} Τα Αρχεία Μπορούν να Χρησιμοποιηθούν Μόνο με Sugar CRM {1}Βάση Δεδομένων.',
  'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Η υποδιαστολή δεν μπορεί να χρησιμοποιεί τον ίδιο χαρακτήρα ως διαχωριστικό χιλιάδων. Παρακαλώ αλλάξτε τις αξίες.',
  'ERR_DELETE_RECORD' => 'Πρέπει να προσδιόρισετε έναν αριθμό εγγραφής, προκειμένου να διαγράψετε την επαφή.',
  'ERR_DNB_BAL_COMPARISON' => 'Σφάλμα. Το κατώτερο όριο πρέπει να είναι μικρότερο από το ανώτατο όριο',
  'ERR_ELASTIC_TEST_FAILED' => 'Απέτυχε η σύνδεση στον διακομιστή Elastic',
  'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Παρακαλώ εισάγετε την επιβεβαίωση του κωδικού πρόσβασής σας.',
  'ERR_ENTER_NEW_PASSWORD' => 'Παρακαλώ εισάγετε τον νέο κωδικό πρόσβασης.',
  'ERR_ENTER_OLD_PASSWORD' => 'Παρακαλώ εισάγετε τον τρέχον κωδικό πρόσβασης.',
  'ERR_EXISTING_PORTAL_USERNAME' => 'Λάθος: Το Όνομα του Portal είναι ανατεθειμένο σε άλλη επαφή.',
  'ERR_EXPORT_DISABLED' => 'Δεν επιτρέπεται εξαγωγή δεδομένων.',
  'ERR_EXPORT_TYPE' => 'Λάθος κατά την εξαγωγή δεδομένων.',
  'ERR_EXTERNAL_API_403' => 'Άρνηση άδειας. Ο τύπος αρχείου δεν υποστηρίζεται.',
  'ERR_EXTERNAL_API_LOTUS_LIVE_CONFLICT' => 'Ένα αρχείο με το ίδιο όνομα υπάρχει ήδη στο σύστημα.',
  'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'Λείπει το διακριτικό πρόσβασης.',
  'ERR_EXTERNAL_API_SAVE_FAIL' => 'Παρουσιάστηκε σφάλμα όταν προσπαθήσατε να αποθηκεύσετε τον εξωτερικό λογαριασμό.',
  'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Παρουσιάστηκε σφάλμα κατά την μεταφόρτωση. Παρακαλώ βεβαιωθείτε ότι το αρχείο που ανεβάζετε δεν είναι άδειο.',
  'ERR_FILE_NOT_FOUND' => 'Λάθος: Δεν μπόρεσε να φορτώσει το αρχείο {0}. Παρακαλώ ελέγξτε το σύστημα και τα δικαιώματα διαδικτύου του διακομιστή.',
  'ERR_FILE_WRITE' => 'Λάθος: Δεν μπόρεσε να γράψει το αρχείο {0}. Παρακαλώ ελέγξτε το σύστημα και τα δικαιώματα διαδικτύου του διακομιστή.',
  'ERR_GENERIC_SERVER_ERROR' => 'Παρουσιάστηκε σφάλμα κατά τη σύνδεση με το Διακομιστή. Παρακαλώ ξαναπροσπαθήστε.',
  'ERR_GENERIC_TITLE' => 'Σφάλμα',
  'ERR_GOOGLE_API_415' => 'Google Docs δεν υποστηρίζει τη μορφή αρχείου που δώσατε.',
  'ERR_HTTP_400_ACTION' => 'Επιστρέψτε στην προηγούμενη σελίδα.',
  'ERR_HTTP_400_TEXT_LINE1' => 'Ο περιηγητής σας, έστειλε ένα αίτημα ότι ο διακομιστής δεν μπόρεσε να το καταλάβει.',
  'ERR_HTTP_400_TEXT_LINE2' => 'Παρακαλώ επικοινωνήστε με τον Διαχειριστή του Sugar για περισσότερες λεπτομέρειες.',
  'ERR_HTTP_400_TITLE' => 'Σφάλμα: Μη έγκυρο Αίτημα',
  'ERR_HTTP_400_TYPE' => '400',
  'ERR_HTTP_404_ACTION' => 'Επιστρέψτε στην προηγούμενη σελίδα.',
  'ERR_HTTP_404_TEXT' => 'Λυπούμαστε, αλλά ο πόρος που ζητήσατε δεν μπορεί να βρεθεί.',
  'ERR_HTTP_404_TITLE' => 'HTTP: 404 Δεν βρέθηκε',
  'ERR_HTTP_404_TYPE' => '404',
  'ERR_HTTP_500_ACTION' => 'Παρακαλώ επικοινωνήστε με την τεχνική υποστήριξη.',
  'ERR_HTTP_500_TEXT' => 'Υπήρξε ένα σφάλμα στον διακομιστή. Παρακαλώ επικοινωνήστε με την τεχνική υποστήριξη.',
  'ERR_HTTP_500_TITLE' => 'HTTP: 500 Εσωτερικό Σφάλμα Διακομιστή',
  'ERR_HTTP_500_TYPE' => '500',
  'ERR_HTTP_DEFAULT_ACTION' => 'Επιστρέψτε στην προηγούμενη σελίδα.',
  'ERR_HTTP_DEFAULT_TEXT' => 'Άγνωστο λάθος.',
  'ERR_HTTP_DEFAULT_TITLE' => 'Άγνωστο Λάθος',
  'ERR_HTTP_DEFAULT_TYPE' => 'Άγνωστο',
  'ERR_INTERNAL_ERR_MSG' => 'Εσωτερικό σφάλμα',
  'ERR_INVALID_AMOUNT' => 'Παρακαλώ εισάγετε έγκυρο ποσό.',
  'ERR_INVALID_DATE' => 'Παρακαλώ εισάγετε μια έγκυρη ημερομηνία.',
  'ERR_INVALID_DATE_FORMAT' => 'H μορφή της ημερομηνίας πρέπει να είναι:',
  'ERR_INVALID_DAY' => 'Παρακαλώ εισάγετε μια έγκυρη ημερομηνία.',
  'ERR_INVALID_EMAIL_ADDRESS' => 'άκυρη διεύθυνση email.',
  'ERR_INVALID_FILE_REFERENCE' => 'Άκυρη Αναφορά Αρχείου',
  'ERR_INVALID_HOUR' => 'Παρακαλώ εισάγετε μία έγκυρη ώρα.',
  'ERR_INVALID_MONTH' => 'Παρακαλώ εισάγετε έναν έγκυρο μήνα.',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Άκυρο το υποχρεωτικό πεδίο:',
  'ERR_INVALID_TIME' => 'Παρακαλώ εισάγετε έναν έγκυρο χρόνο.',
  'ERR_INVALID_VALUE' => 'Άκυρη Αξία:',
  'ERR_INVALID_YEAR' => 'Παρακαλώ εισάγετε έγκυρο έτος με 4 ψηφία.',
  'ERR_LAYOUT_RENDER_MSG' => 'Ωχ! Δεν είμαστε σε θέση να καταστήσετε τίποτα.Παρακαλώ δοκιμάστε ξανά αργότερα ή επικοινωνήστε με την υποστήριξη.',
  'ERR_LAYOUT_RENDER_TITLE' => 'Καθιστά Αποτυχημένη Διάταξη',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Λάθος: Λείπει η χαρτογράφηση εισόδου για την ενότητα.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Λείπει το υποχρεωτικό πεδίο:',
  'ERR_MISSING_VARDEF_NAME' => 'Προειδοποίηση: πεδίο [[πεδίο]] δεν έχει μία αντιστοιχισμένη εισόδο [moduleDir] vardefs.php αρχείο',
  'ERR_MOBILE_BROWSER_FORBIDDEN' => 'Απαγορευμένο.',
  'ERR_MOBILE_BROWSER_INTERNAL_SERVER_ERROR' => 'Εσωτερικό σφάλμα διακομιστή.',
  'ERR_MOBILE_BROWSER_NOT_AUTHORIZED' => 'Αποτυχημένη Πιστοποίηση.',
  'ERR_MOBILE_BROWSER_PAGE_NOT_FOUND' => 'Πόρος που ζητήθηκε δε βρέθηκε.',
  'ERR_MOBILE_BROWSER_SERVICE_UNAVAILABLE' => 'Υπηρεσία μη διαθέσιμη.',
  'ERR_MOBILE_CONFLICT' => 'Κάποιος έχει επιμεληθεί την ίδια εγγραφή στον διακομιστή. Επιβεβαιώση για αυτόματη-συγχώνευση των αλλαγών σας, ή απόρριψη για να τις απορρίψει.',
  'ERR_MOBILE_CONNECTION_FAILED' => 'Δεν μπορεί να βρει τον διακομιστή.',
  'ERR_MOBILE_CONNECTION_FAILED_LOGIN' => 'Ο διακομιστής είναι μη διαθέσιμος στην δεδομένη διεύθυνση URL..',
  'ERR_MOBILE_EMAIL' => 'Σφάλμα. Άκυρη διεύθυνση Email.',
  'ERR_MOBILE_FILE_ABORTED' => 'Ματαιώθηκε η λειτουργία ανάγνωσης',
  'ERR_MOBILE_FILE_NOT_FOUND' => 'Το αρχείο δεν βρέθηκε',
  'ERR_MOBILE_FILE_NOT_READABLE' => 'Το αρχείο δεν μπορεί να διαβαστεί',
  'ERR_MOBILE_FILE_NOT_SUPPORTED' => 'Αυτός ο τύπος του εγγράφου, δεν υποστηρίζεται.',
  'ERR_MOBILE_FILE_PROCESSING' => 'Σφάλμα στην επεξεργασία του αρχείου',
  'ERR_MOBILE_FILE_READ' => 'Απέτυχε η ανάγνωση του αρχείου',
  'ERR_MOBILE_FILE_SECURITY' => 'Το αρχείο είναι κλειδωμένο',
  'ERR_MOBILE_FILE_SIZE_LIMIT_EXCEEDED' => 'Το αρχείο είναι πολύ μεγάλο. Μέγιστο επιτρεπόμενο μέγεθος είναι {{μέγεθος}}',
  'ERR_MOBILE_GENERIC_NATIVE_ERROR' => 'Ένα απροσδόκητο λάθος έχει εμφανιστεί.',
  'ERR_MOBILE_INCOMPATIBLE_CLIENT_VERSION' => 'Η εφαρμογή σας είναι παλαιά έκδοση και δεν είναι πλέον συμβατή με το SugarCRM, στην περίπτωση που προσπαθείτε να συνδεθείτε. Θέλετε να κατεβάσετε τη νέα έκδοση από το App Store?',
  'ERR_MOBILE_INTERNAL' => 'Εσωτερικό σφάλμα ({{{code}}}). Παρακαλώ δοκιμάστε ξανά αργότερα.',
  'ERR_MOBILE_INTERNET_UNAVAILABLE' => 'Μη διαθέσιμη σύνδεση στο Διαδίκτυο.',
  'ERR_MOBILE_INVALID_CREDS' => 'Άκυρο όνομα χειριστή και κωδικός πρόσβασης.',
  'ERR_MOBILE_METADATA_CHANGED' => 'Οι παράμετροι του διακομιστή έχουν αλλάξει.',
  'ERR_MOBILE_METADATA_CHANGED_RELOAD' => 'Έχουν αλλάξει οι παράμετροι του διακομιστή και απαιτείται νέα φόρτωση. Να προχωρήσει;',
  'ERR_MOBILE_NOT_AUTHORIZED' => 'Μη Εξουσιοδοτημένη Πρόσβαση.',
  'ERR_MOBILE_NOT_FOUND' => 'Δεν βρέθηκε πόρος.',
  'ERR_MOBILE_NOT_FOUND_LOGIN' => 'Δεν μπόρεσε να βρει τον διακομιστή στην δεδομένη διεύθυνση URL.',
  'ERR_MOBILE_SESSION_EXPIRED' => 'Η συνεδρία σας έληξε.',
  'ERR_MOBILE_SSO_NOT_CONFIGURED' => 'SSO σύνδεση δεν είναι διαθέσιμη. Εξασφαλίστε ότι είναι για το Sugar 7.5 ή μεγαλύτερο και διαμορφωμένο για SSO.',
  'ERR_MOBILE_STORAGE_UNAVAILABLE' => 'Η συσκευή αποθήκευσης δεν είναι διαθέσιμη',
  'ERR_MOBILE_TIMEOUT' => 'Ο Διακομιστής δεν ανταποκρίνεται.',
  'ERR_MOBILE_TIMEOUT_LOGIN' => 'Ο διακομιστής δεν ανταπικρίθηκε στην δεδομένη διεύθυνση URL.',
  'ERR_MOBILE_UPLOAD' => 'Σφάλμα κατά τη λήψη αρχείου',
  'ERR_MOBILE_VALIDATION' => 'Άκυρη εγγραφή',
  'ERR_MOBILE_VIEW_NOT_SUPPORTED' => 'Η Mobile έκδοση δεν υποστηρίζει αυτή τη λειτουργία. Θέλετε να ανοίξετε την έκδοση desktop;',
  'ERR_MONITOR_FILE_MISSING' => 'Λάθος: Δεν είναι δυνατή η δημιουργία οθόνης, διότι το αρχείο μεταδεδομένων είναι άδειο ή το αρχείο δεν υπάρχει.',
  'ERR_MONITOR_NOT_CONFIGURED' => 'Λάθος: Δεν έχει ρυθμιστεί οθόνη για το ζητούμενο όνομα',
  'ERR_MSSQL_DB_CONTEXT' => 'Άλλαξε το πλαίσιο της βάσης δεδομένων',
  'ERR_MSSQL_WARNING' => 'Προειδοποίηση:',
  'ERR_NEED_ACTIVE_SESSION' => 'Μια ενεργή συνεδρία απαιτείται για την εξαγωγή περιεχομένου.',
  'ERR_NOTHING_SELECTED' => 'Παρακαλώ κάντε μια επιλογή πριν προχωρήσετε.',
  'ERR_NOT_ADMIN' => 'Μη εξουσιοδοτημένη πρόσβαση στη διαχείριση.',
  'ERR_NO_DB' => 'Δεν μπόρεσε να συνδεθεί με την βάση δεδομένων. Παρακαλώ ανατρέξτε  για λεπτόμερειες στο sugarcrm.log.',
  'ERR_NO_DOCS' => 'Κανένα Διαθέσιμο Έγγραφο',
  'ERR_NO_HEADER_ID' => 'Αυτο το χαρακτηριστικό δεν είναι διαθέσιμο σε αυτό το θέμα.',
  'ERR_NO_PRIMARY_TEAM_SPECIFIED' => 'Καμία ομάδα που διευκρινίζεται Κύρια',
  'ERR_NO_RECORDS_SELECTED' => 'Δεν έχετε επιλέξει καμία εγγραφή.',
  'ERR_NO_SINGLE_QUOTE' => 'Δεν μπορείτε να χρησιμοποιήσετε το μονό εισαγωγικό για',
  'ERR_NO_SUCH_FILE' => 'Το αρχείο δεν υπάρχει στο σύστημα',
  'ERR_NO_VIEW_ACCESS_ACTION' => 'Επικοινωνήστε με το διαχειριστή σας για να ζητήσετε πρόσβαση.',
  'ERR_NO_VIEW_ACCESS_MSG' => 'Επικοινωνήστε με την Υποστήριξη του Διαχειριστή σας για να αποκτήσετε πρόσβαση σε αυτή την προβολή για {0} ενότητα.',
  'ERR_NO_VIEW_ACCESS_REASON' => 'Δεν έχετε δικαίωμα πρόσβασης σε αυτή τη σελίδα.',
  'ERR_NO_VIEW_ACCESS_TITLE' => 'Δεν επιτρέπεται η Πρόσβαση',
  'ERR_OFFLINE' => 'Σφάλμα Offline',
  'ERR_OFFLINE_CLEAN_UP_CONFIRMATION' => 'Έχετε εξαντλήσει τον χώρο για αποθήκευση offline. Συνιστάται η εκκαθάριση αποθήκευσης. Θέλετε να το εκτελέσει τώρα;',
  'ERR_OFFLINE_DB_CLEANING_ERROR' => 'Απέτυχε η εκκαθάριση της βάσης δεδομένων',
  'ERR_OFFLINE_OUT_OF_SPACE' => 'Έχει εξαντληθεί ο χώρος της τοπικής αποθήκευσης.',
  'ERR_OFFLINE_PREFETCH_FAILED' => 'Απέτυχε η προφόρτωση αρχείων από το διακομιστή',
  'ERR_OFFLINE_SERVERTIME_UNAVAILABLE' => 'Απέτυχε η λήψη του διακομιστή',
  'ERR_OFFLINE_START_FAILED_OUT_OF_SPACE' => 'Απέτυχε η δημιουργία τοπικού χώρου αποθήκευσης: έχει εξαντληθεί ο χώρος.',
  'ERR_OFFLINE_STORAGE_CREATE' => 'Απέτυχε η δημιουργία τοπικής αποθήκευσης',
  'ERR_OFFLINE_STORAGE_UNAVAILABLE' => 'Απέτυχε το άνοιγμα τοπικής αποθήκευσης',
  'ERR_OFFLINE_SYNC_CONFLICT' => 'Διένεξη συγχρονισμού',
  'ERR_OFFLINE_SYNC_ERROR' => 'Σφάλμα συγχρονισμού',
  'ERR_OPPORTUNITY_NAME_DUPE' => 'Η ευκαιρία με το όνομα % ήδη υπάρχει. Παρακαλώ εισάγετε ένα άλλο όνομα παρακάτω.',
  'ERR_OPPORTUNITY_NAME_MISSING' => 'Το όνομα της ευκαιρίας δεν έχει εισαχθεί. Παρακαλώ εισάγετε ένα όνομα ευκαιρίας παρακάτω.',
  'ERR_PASSWORD_MISMATCH' => 'Οι κωδικοί πρόσβασης που εισάγατε δεν ταιριάζουν με τους κωδικούς του συστήματος μας.',
  'ERR_PORTAL_NAME_CHECK' => 'Δεν μπορεί να βεβαιώσει ότι το όνομα χειριστή του Portal είναι μοναδικό',
  'ERR_POTENTIAL_SEGFAULT' => 'Ένα πιθανό σφάλμα κατάτμησης Apache ανιχνεύθηκε. Παρακαλώ ενημερώστε τον διαχειριστή του συστήματός σας, για να επιβεβαιώσετε αυτό το πρόβλημα και να το αναφέρετε στο SugarCRM.',
  'ERR_QUERY_LIMIT' => 'Λάθος:  Όριο ερωτήματος του $ορίου επιτεύχθηκε για $ενότητα ενότητα.',
  'ERR_QUOTE_CONVERTED' => 'Αυτή η Προσφορά έχει ήδη μετατραπεί σε Ευκαιρία',
  'ERR_REENTER_PASSWORDS' => 'Οι κωδικοί πρόσβασης δεν ταιριάζουν.',
  'ERR_RENDER_FAILED_MSG' => 'Απέτυχε η απόδοση της προβολής',
  'ERR_RENDER_FAILED_TITLE' => 'Προβολή Αποτυχημένης Απόδοσης',
  'ERR_RENDER_FIELD_FAILED_MSG' => 'Δεν είναι δυνατή η απόδοση του {0} πεδίου.',
  'ERR_RENDER_FIELD_FAILED_TITLE' => 'Αποτυχημένο Πεδίο Απόδοσης',
  'ERR_RESOLVE_ERRORS' => 'Πρέπει να το επαναπροσδιορίσετε οποιαδήποτε σφάλματα, πριν προχωρήσετε.',
  'ERR_RSS_INVALID_INPUT' => 'RSS δεν είναι έγκυρο, εισαγωγή_τύπου',
  'ERR_RSS_INVALID_RESPONSE' => 'RSS δεν είναι έγκυρο, απάντηση_τύπου για αυτήν την μέθοδο',
  'ERR_SELF_REPORTING' => 'Ο χειριστής δεν μπορεί να υποβάλει αναφορά στον εαυτό του.',
  'ERR_SERVER_FLAVOR_INCOMPATIBLE' => 'Ασύμβατο flavor διακομιστή: {{{flavor}}}',
  'ERR_SERVER_VERSION_INCOMPATIBLE' => 'Ασύμβατη έκδοση διακομιστή: {{{version}}}. Ελάχιστη απαιτούμενη έκδοση: {{{minVersion}}}.',
  'ERR_SINGLE_QUOTE' => 'Το απλό εισαγωγικό δεν υποστηρίζεται για αυτό το πεδίο. Παρακαλώ να αλλάξετε την τιμή.',
  'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Λείπει το ευρετήριο στην εμφάνιση Params Array για:',
  'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Λάθος: Υπάρχει ένας άνισος αριθμός των επιχειρημάτων για το &#39;κλειδί&#39;  και την &#39;αντιγραφή&#39; στοιχείων στην εμφάνιση Params array.',
  'ERR_SQS_NO_MATCH' => 'Καμία Αντιστοιχία',
  'ERR_SQS_NO_MATCH_FIELD' => 'Καμία αντιστοιχία για το πεδίο:',
  'ERR_STORE_FILE_MISSING' => 'Λάθος: Ανίκανο να βρει το αρχείο εφαρμογής',
  'ERR_SUHOSIN' => 'Η μεταφόρτωση του ρεύματος είναι αποκλεισμένη από το Suhosin, παρακαλώ προσθέστε "μεταφόρτωση" στο suhosin.executor.include.whitelist (Δείτε sugarcrm.log για περισσότερες πληροφορίες)',
  'ERR_SYNC_FAILED' => 'Ανίκανο να συγχρονιστεί με τον διακομιστή.',
  'ERR_TIMEPERIOD_ALREADY_HAS_LEAVES' => 'Αυτή η χρονική περίοδος έχει ήδη υπο-περιόδους',
  'ERR_TIMEPERIOD_ALREADY_LEAF' => 'Οι Χρονικές Περιόδους δεν μπορούν να έχουν υπο-περιόδους',
  'ERR_TIMEPERIOD_TYPE_DOES_NOT_EXIST' => 'Ανίκανο να ανακτήσει οποιεσδήποτε χρονικές περιόδους του τύπου: {0}',
  'ERR_TIMEPERIOD_UNDEFINED_FOR_DATE' => 'Λάθος Χρονική Περίοδος, απροσδιόριστη για την ημερομηνία {0}',
  'ERR_UNDEFINED_METRIC' => 'Λάθος: Δεν είναι δυνατή η τιμή για απροσδιόριστο μετρικό',
  'ERR_UW_RETIRED' => 'Ο "Οδηγός Αναβάθμισης" δεν είναι διαθέσιμος σε αυτήν την έκδοση.',
  'ERR_VCARD_FILE_MISSING' => 'vcf αρχείο λείπει',
  'ERR_VCARD_FILE_PARSE' => 'Απέτυχε η ανάλυση μορφής vCard',
  'EXCEPTION_ACCESS_MODULE_CONFIG_NOT_AUTHORIZED' => 'Ο Τρέχων Χειριστής δεν επιτρέπεται να αλλάξει τις ρυθμίσεις διαμόρφωσης {moduleName}',
  'EXCEPTION_CHANGE_MODULE_CONFIG_NOT_AUTHORIZED' => 'Ο Τρέχων Χειριστής δεν επιτρέπεται να αλλάξει τις ρυθμίσεις διαμόρφωσης {moduleName}',
  'EXCEPTION_CLIENT_OUTDATED' => 'Το λογισμικό σας δεν είναι ενημερωμένο, ενημερώστε τον πελάτη σας πριν επιχειρήσετε να συνδεθείτε ξανά.',
  'EXCEPTION_CLIENT_OUTDATED_DESC' => 'Δηλώνει ότι ο client που καταναλώνει το API είναι ξεπερασμένος, και πρέπει να ενημερωθεί πριν από την περαιτέρω κατανάλωση του API που μπορεί να λάβει χώρα.',
  'EXCEPTION_CONNECTOR_RESPONSE' => 'Μια υποδοχή ή μια ολοκλήρωση αίτησης, είχε ως αποτέλεσμα μια αποτυχημένη απάντηση.',
  'EXCEPTION_CONNECTOR_RESPONSE_DESC' => 'Δηλώνει ότι μια αίτηση μέσω του API σε άλλη υπηρεσία, τελικό σημείο ή URI έχει αποτύχει ή δεν θα μπορούσαν να αντιμετωπιστούν από το διακομιστή.',
  'EXCEPTION_CREATE_MODULE_NOT_AUTHORIZED' => 'Δεν έχετε δικαίωμα να δημιουργήσετε {moduleName}. Επικοινωνήστε με τον Διαχειριστή σας για πρόσβαση.',
  'EXCEPTION_EDIT_CONFLICT' => 'Επεξεργασία σύγκρουσης, παρακαλώ ξαναφορτώστε το αρχείο.',
  'EXCEPTION_EDIT_CONFLICT_DESC' => 'Δείχνει ότι μπορεί να υπήρξαν ταυτόχρονες αλλαγές στη λήψη εγγραφής και την τρέχουσα αίτηση, για να επεξεργαστείτε το αρχείο θα επηρεάσει μια προηγούμενη επεξεργασία του αρχείου.',
  'EXCEPTION_FATAL_ERROR' => 'Το αίτημά σας απέτυχε. Παρουσιάστηκε ανεπανόρθωτο σφάλμα. Ελέγξτε τα αρχεία καταγραφής για περισσότερες λεπτομέρειες.',
  'EXCEPTION_FATAL_ERROR_DESC' => 'Η αίτηση δεν μπορεί να επεξεργαστεί όπως παρουσιάστηκε, ή υπήρξε σφάλμα με την απάντηση. Αυτό σημαίνει, γενικά, παρουσιάστηκε ένα ανεπανόρθωτο σφάλμα και ότι μπορεί να προσδιοριστεί η συγκεκριμένη αποτυχία στο αρχείο καταγραφής της εφαρμογής.',
  'EXCEPTION_FAVORITE_MODULE_NOT_AUTHORIZED' => 'Δεν έχετε εξουσιοδήτηση στα αγαπημένα {moduleName}. Επικοινωνήστε με το διαχειριστή σας, εάν χρειάζεστε πρόσβαση.',
  'EXCEPTION_INACTIVE_PORTAL_USER' => 'Δεν έχετε πρόσβαση στο Portal, επειδή ο λογαριασμός του portal σας είναι ανενεργός. Παρακαλώ επικοινωνήστε με την υποστήριξη πελατών, αν χρειάζεστε πρόσβαση.',
  'EXCEPTION_INACTIVE_PORTAL_USER_DESC' => 'Ο λογαριασμός του portal που συσχετίζεται με τον συνδεδεμένο χειριστή, δεν είναι ενεργός. Αυτό απαιτεί ενέργεια εκ μέρους της υποστήριξης πελατών.',
  'EXCEPTION_INCORRECT_VERSION_DESC' => 'Η έκδοση που χρησιμοποιείτε για αυτό το API δεν είναι σωστή, για την τρέχουσα αίτηση.',
  'EXCEPTION_INVALID_PARAMETER' => 'Η υποχρεωτική παράμετρος του αιτήματός σας ήταν άκυρη.',
  'EXCEPTION_INVALID_PARAMETER_DESC' => 'Υποδεικνύει μια παράμετρος που αποστέλλεται στην αίτηση, είναι άκυρη.',
  'EXCEPTION_INVALID_TOKEN' => 'Τα σημεία ελέγχου δεν είναι έγκυρα.',
  'EXCEPTION_INVALID_TOKEN_DESC' => 'Δηλώνει ότι η συμβολική ταυτότητα που παρουσιάζεται με την αίτηση, δεν είναι έγκυρη.  Αυτό συμβαίνει συνήθως λόγω του διακριτικού σημείου που λήγει, αλλά θα μπορούσε επίσης να είναι επειδή το δείγμα είναι ακατάλληλο ή δεν είναι σωστό.',
  'EXCEPTION_MAINTENANCE' => 'Το SugarCRM είναι σε λειτουργία συντήρησης. Μόνο οι διαχειριστές μπορούν να συνδεθούν. Επικοινωνήστε με το διαχειριστή σας για λεπτομέρειες.',
  'EXCEPTION_MAINTENANCE_DESC' => 'Η περίπτωση του SugarCRM που εκτίει το API, είναι σε λειτουργία συντήρησης. Η πρόσβαση στο API περιορίζεται μόνο στους διαχειριστές.',
  'EXCEPTION_METADATA_CONFLICT' => 'Τα μετα-δεδομένα έρχονται σε σύγκρουση, παρακαλούμε να φορτώσετε τα μετα-δεδομένα.',
  'EXCEPTION_METADATA_OUT_OF_DATE' => 'Τα metadata σας ή ο χρήστης hash δεν ταιριάζει στο διακομιστή. Παρακαλώ συγχρονίστε ξανά τα metadata σας.',
  'EXCEPTION_METADATA_OUT_OF_DATE_DESC' => 'Δηλώνει ότι τα metadata στον διακομιστή δεν ταιριάζουν με τα metadata που χρησιμοποιεί ο πελάτης. Αυτό μπορεί να συμβεί μετά από μια αλλαγή στις ρυθμίσεις του συστήματος, την αλλαγή των ενοτήτων σε Στούντιο ή την ανάπτυξη νέων ενοτήτων, μεταξύ άλλων αλλαγών του συστήματος.',
  'EXCEPTION_MISSING_PARAMTER' => 'Η υποχρεωτική παράμετρος του αιτήματός σας λείπει.',
  'EXCEPTION_MISSING_PARAMTER_DESC' => 'Υποδεικνύει μια παράμετρος απαιτεί την αίτηση, λείπει.',
  'EXCEPTION_NEED_LOGIN' => 'Θα πρέπει να συνδεθείτε για να εκτελέσετε αυτήν την ενέργεια.',
  'EXCEPTION_NEED_LOGIN_DESC' => 'Η ζητούμενη παράμετρο απαιτεί έλεγχο ταυτότητας και η αίτηση του καταναλωτή δεν έχει επαληθευτεί ακόμα.',
  'EXCEPTION_NOT_AUTHORIZED' => 'Δεν έχετε δικαίωμα να εκτελέσετε αυτή την ενέργεια. Επικοινωνήστε με τον διαχειριστή σας εάν χρειάζεστε πρόσβαση.',
  'EXCEPTION_NOT_AUTHORIZED_DESC' => 'Δηλώνει ότι ο καταναλωτής που ζητήθηκε, δεν έχει το δικαίωμα να εκτελέσει την απαιτούμενη ενέργεια.',
  'EXCEPTION_NOT_FOUND' => 'Ο πόρος που ζητήσατε δεν βρέθηκε. Δεν ήταν δυνατή η εύρεση ενός χρήστη για τη διαδρομή του αιτήματος που ορίσατε.',
  'EXCEPTION_NOT_FOUND_DESC' => 'Το τελικό σημείο δεν μπόρεσε να εντοπίσει έναν πόρο για την αίτηση, ή δεν έχει έναν δείκτη χειρισμού για το αίτημα.',
  'EXCEPTION_NO_METHOD' => 'Το αίτημά σας δεν υποστηρίζεται. Δεν είναι δυνατή η εύρεση της μεθόδου HTTP του αιτήματός σας για αυτή την διαδρομή.',
  'EXCEPTION_NO_METHOD_DESC' => 'Το τελικό σημείο δεν υποστηρίζει τον τύπο αίτησης HTTP. Αυτό μπορεί να συμβεί όταν μια αίτηση POST στο ένα τελικό σημείο σχεδιαστεί για μια αίτηση GET, για παράδειγμα.',
  'EXCEPTION_PORTAL_NOT_CONFIGURED' => 'Το Portal δεν έχει ρυθμιστεί σωστά. Επικοινωνήστε με τον Διαχειριστή του Portal για βοήθεια.',
  'EXCEPTION_PORTAL_NOT_CONFIGURED_DESC' => 'Δείχνει ότι η εφαρμογή του portal δεν έχει ρυθμιστεί σωστά, και δεν μπορεί να χρησιμοποιηθεί. Αυτό απαιτεί ενέργεια εκ μέρους του διαχειριστή του portal.',
  'EXCEPTION_REQUEST_FAILURE' => 'Το αίτημά σας απέτυχε.',
  'EXCEPTION_REQUEST_FAILURE_DESC' => 'Η αίτηση απέτυχε να ολοκληρώσει.',
  'EXCEPTION_REQUEST_TOO_LARGE' => 'Το αίτημά σας είναι πολύ μεγάλο για να το επεξεργαστεί.',
  'EXCEPTION_REQUEST_TOO_LARGE_DESC' => 'Η αίτηση είναι πολύ μεγάλη για χειρισμό από το διακομιστή.',
  'EXCEPTION_SUBSCRIBE_MODULE_NOT_AUTHORIZED' => 'Δεν έχετε εξουσιοδήτηση για εγγραφή {moduleName}. Επικοινωνήστε με το διαχειριστή σας, εάν χρειάζεστε πρόσβαση.',
  'EXCEPTION_UNKNOWN_EXCEPTION' => 'Το αίτημά σας απέτυχε λόγω άγνωστης εξαίρεσης.',
  'EXCEPTION_UNKNOWN_EXCEPTION_DESC' => 'Μια κατάσταση παρουσιάστηκε λόγω μιας γενικής αποτυχίας ή λάθους. Οι λόγοι για αυτό το εύρος εξαίρεσης, αλλά γενικά δεν εμπίπτει στο πεδίο εφαρμογής, για περισσότερο από μία συγκεκριμένη εξαίρεση API.',
  'FATAL_LICENSE_ALTERED' => 'Η άδεια σας έχει αλλάξει από την τελευταία φορά που επικυρώθηκε.',
  'LBL_1_COLUMN' => '1 Στήλη',
  'LBL_2_COLUMN' => '2 Στήλες',
  'LBL_3_COLUMN' => '3 Στήλες',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Εκκαθάριση Λογαριασμού',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Εκκαθάριση Λογαριασμού',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Εκκαθάριση Εκστρατείας',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Εκκαθάριση Εκστρατείας',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Εκκαθάριση Επιλογής',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Σαφή Επιλογή',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Εκκαθάριση Επαφής',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Εκκαθάριση Επαφής',
  'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Εκκαθάριση Αρχείου',
  'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Εκκαθάριση Αρχείου',
  'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Εκκαθάριση Επιλογής',
  'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Εκκαθάριση Επιλογής',
  'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Επιλογή Ομάδας',
  'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Εκκαθάριση Ομάδας',
  'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Εκκαθάριση Χρήστη',
  'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Εκκαθάριση Χρήστη',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Επιλογή Λογαριασμού',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Επιλογή Λογαριασμού',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Επιλογή Εκστρατείας',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Επιλογή Εκστρατείας',
  'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
  'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Επιλογή Επαφής',
  'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Επιλογή Επαφής',
  'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
  'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Επιλογή Αρχείου',
  'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Επιλογή Αρχείου',
  'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
  'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Επιλογή Ομάδας',
  'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Επιλογή Ομάδας',
  'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
  'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Επιλογή Χρήστη',
  'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Επιλογή Χρήστη',
  'LBL_ACCOUNT' => 'Λογαριασμός',
  'LBL_ACCOUNTS' => 'Λογαριασμοί',
  'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
  'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Προβολή Περίληψης',
  'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Προβολή Περίληψης',
  'LBL_ACTION' => 'Ενέργεια',
  'LBL_ACTION_CREATE' => 'ΔΗΜΙΟΥΡΓΙΑ',
  'LBL_ACTION_CREATE_EXPLANATION' => 'Δημιουργήθηκε {{module}} "{{name}}"',
  'LBL_ACTION_CREATE_RELATED_EXPLANATION' => 'Δημιουργήθηκε {{module}} "{{name}}" σχετίζεται με {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_DELETE' => 'ΔΙΑΓΡΑΦΗ',
  'LBL_ACTION_DELETE_EXPLANATION' => 'Διαγράφηκε {{module}} "{{name}}"',
  'LBL_ACTION_FAVORITE' => 'ΑΓΑΠΗΜΕΝΟ',
  'LBL_ACTION_FAVORITE_EXPLANATION' => 'Αγαπημένα {{module}} "{{name}}"',
  'LBL_ACTION_FOLLOW' => 'FOLLOW',
  'LBL_ACTION_FOLLOW_EXPLANATION' => 'Ακολούθησε {{module}} "{{name}}"',
  'LBL_ACTION_LINK' => 'ΣΥΝΔΕΣΗ',
  'LBL_ACTION_LINK_EXPLANATION' => 'Συνδέθηκε {{module}} "{{name}}" σε {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_UNFAVORITE_EXPLANATION' => 'Μη Αγαπημένα {{module}} "{{name}}"',
  'LBL_ACTION_UNFOLLOW_EXPLANATION' => 'Δεν Ακολούθησε {{module}} "{{name}}"',
  'LBL_ACTION_UNLINK' => 'ΑΠΟΣΎΝΔΕΣΗ',
  'LBL_ACTION_UNLINK_EXPLANATION' => 'Αποσυνδέθηκε {{module}} "{{name}}" από {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_UPDATE' => 'ΕΝΗΜΕΡΩΣΗ',
  'LBL_ACTION_UPDATE_EXPLANATION' => 'Ενημερώθηκε {{module}} "{{name}}"',
  'LBL_ACTIVE' => 'Ενεργή Συνεδρία',
  'LBL_ACTIVE_TASKS_DASHLET' => 'Ενεργές Εργασίες',
  'LBL_ACTIVE_TASKS_DASHLET_COMPLETE_TASK' => 'Ολοκληρώθηκε',
  'LBL_ACTIVE_TASKS_DASHLET_CONFIRM_CLOSE' => 'Είστε βέβαιοι ότι θέλετε να κλείσετε το {0} ως ολοκληρωμένη;',
  'LBL_ACTIVE_TASKS_DASHLET_DESCRIPTION' => 'Οι Ενεργές Εργασίες του πίνακα στοιχείων εμφανίζονται δεόντως τώρα, ξεκινήστε να κάνετε Εργασίες.',
  'LBL_ACTIVE_TASKS_DASHLET_DUE_NOW' => 'Λόγω Τώρα',
  'LBL_ACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL' => 'Εργασίες Ομάδας',
  'LBL_ACTIVE_TASKS_DASHLET_TODO' => 'Να Κάνει',
  'LBL_ACTIVE_TASKS_DASHLET_UPCOMING' => 'Επερχόμενη',
  'LBL_ACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL' => 'Εργασίες Μου',
  'LBL_ACTIVITIES' => 'Ροή Δραστηριοτήτων',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Δραστηριότητες',
  'LBL_ACTIVITYSTREAM_COMMENT_PLACEHOLDER' => 'Εισάγετε το σχόλιό σας&hellip; Τύπος @ να αναφέρετε ένα χρήστη Τύπος # με αναφορά σε μία εγγραφή.',
  'LBL_ACTIVITYSTREAM_POST_PLACEHOLDER' => 'Πληκτρολογήστε μια σημείωση ή drag and drop τα συνημμένο. Τύπος @ να αναφέρετε ένα χρήστη. Τύπος # με αναφορά σε μία εγγραφή.',
  'LBL_ACTIVITYSTREAM_RELATIVETIME_ON' => 'στις',
  'LBL_ACTIVITY_STREAM' => 'Ροή Δραστηριοτήτων',
  'LBL_ACTIVITY_STREAM_DASHLET_DESCRIPTION' => 'Δείτε μια λίστα με τις δραστηριότητες που εκτελούνται στα αρχεία και δημιουργήσετε και σχολιάσετε.',
  'LBL_ACTIVITY_STREAM_DASHLET_NAME' => 'Ροή Δραστηριοτήτων Μου',
  'LBL_ACTIVITY_STREAM_DISABLED' => 'Η Ροή Δραστηριοτήτων δεν είναι διαθέσιμη',
  'LBL_ACTIVITY_STREAM_DISABLED_MODULE' => 'Η Ροή Δραστηριοτήτων, δεν είναι διαθέσιμη γι&#39; αυτή την ενότητα',
  'LBL_ACTIVITY_VIEW_TOUR' => 'Προβολή Περιήγησης',
  'LBL_ACTIVTY_STREAM_SHOW_MORE' => 'Περισσότερες θέσεις...',
  'LBL_ADD' => 'Προσθήκη',
  'LBL_ADDED_DASHLET' => 'Προστέθηκε Πίνακας Στοιχείων Αρχικής Σελίδας Sugar',
  'LBL_ADDING_DASHLET' => 'Προσθήκη Πίνακα Στοιχείων Αρχικής Σελίδας Sugar ...',
  'LBL_ADDITIONAL_DETAILS' => 'Πρόσθετες Λεπτομέρειες',
  'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Κλείσιμο',
  'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Πατήστε για Κλείσιμο',
  'LBL_ADD_ALL_LEAD_FIELDS' => 'Προσθήκη Όλων των Πεδίων',
  'LBL_ADD_BUTTON' => 'Προσθήκη',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_TITLE' => 'Προσθήκη',
  'LBL_ADD_DASHLETS' => 'Προσθήκη Πίνακα Στοιχείων Sugar',
  'LBL_ADD_DOCUMENT' => 'Προσθήκη Εγγράφου',
  'LBL_ADD_PAGE' => 'Προσθήκη Σελίδας',
  'LBL_ADD_TO_FAVORITES' => 'Προσθήκη στα Αγαπημένα Μου',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Προσθήκη στη Λίστα Στόχων',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Προσθήκη στη Λίστα Στόχων',
  'LBL_ADMIN' => 'Διαχειριστής',
  'LBL_ADVANCED' => 'Προηγμένη',
  'LBL_ADVANCEDSEARCH' => 'Προηγμένη Αναζήτηση',
  'LBL_ADVANCED_SEARCH' => 'Προηγμένη Αναζήτηση',
  'LBL_ADV_SEARCH_LNK_KEY' => '8',
  'LBL_AJAX_FAILURE' => 'Ajax αποτυχία',
  'LBL_ALERT_BROWSER_NOT_SUPPORTED' => 'Η έκδοση του προγράμματος περιήγησης δεν υποστηρίζεται πλέον ή χρησιμοποιείτε ένα πρόγραμμα περιήγησης που δεν υποστηρίζεται.',
  'LBL_ALERT_BROWSER_SUPPORT' => 'Συνιστώνται οι ακόλουθες εκδόσεις του προγράμματος περιήγησης: <ul><li>Internet Explorer 9</li><li>Firefox 22</li><li>Safari 6</li><li>Chrome 27</li></ul>',
  'LBL_ALERT_TITLE_ERROR' => 'Σφάλμα:',
  'LBL_ALERT_TITLE_LOADING' => 'Φορτώνει',
  'LBL_ALERT_TITLE_NOTICE' => 'Ανακοίνωση:',
  'LBL_ALERT_TITLE_SUCCESS' => 'Επιτυχία:',
  'LBL_ALERT_TITLE_WARNING' => 'Προειδοποίηση:',
  'LBL_ALT_ADDRESS' => 'Άλλη Διεύθυνση:',
  'LBL_ALT_ADD_TEAM_ROW' => 'Εισαγωγή νέας ομάδας τώρα',
  'LBL_ALT_HIDE_OPTIONS' => 'Απόκρυψη Επιλογών',
  'LBL_ALT_HOT_KEY' => '-κενό-',
  'LBL_ALT_INFO' => 'Πληροφορία',
  'LBL_ALT_MOVE_COLUMN_DOWN' => 'Μετακίνηση επιλεγμένης εισόδου κάτω στην εμφανιζόμενη σειρά λίστας',
  'LBL_ALT_MOVE_COLUMN_LEFT' => 'Μετακίνηση επιλεγμένης εισόδου στην λίστα στα αριστερά',
  'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Μετακίνηση επιλεγμένης εισόδου στην λίστα στα δεξιά',
  'LBL_ALT_MOVE_COLUMN_UP' => 'Μετακίνηση επιλεγμένης εισόδου επάνω στην εμφανιζόμενη σειρά λίστας',
  'LBL_ALT_REMOVE_TEAM_ROW' => 'Αφαίρεση ομάδας',
  'LBL_ALT_SHOW_OPTIONS' => 'Εμφάνιση Επιλογών',
  'LBL_ALT_SORT' => 'Είδος',
  'LBL_ALT_SORT_ASC' => 'Αύξουσα Ταξινόμηση',
  'LBL_ALT_SORT_DESC' => 'Φθίνουσα Ταξινόμηση',
  'LBL_ALT_SPOT_SEARCH' => 'Αναζήτηση Spot',
  'LBL_AMOUNT_USDOLLAR' => 'Μετατροπή Ποσού',
  'LBL_AND' => 'Και',
  'LBL_ANNUAL_TIMEPERIOD_FORMAT' => 'Έτος {0}',
  'LBL_ARCHIVE' => 'Αρχειοθέτηση',
  'LBL_ARCHIVE_EMAIL' => 'Αρχειοθέτηση Email',
  'LBL_ASSIGN' => 'Επιλέξτε {{{this}}}',
  'LBL_ASSIGNED_TO' => 'Ανατέθηκε σε:',
  'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε',
  'LBL_ASSIGNED_TO_USER' => 'Ανατέθηκε σε Χειριστή',
  'LBL_ASSOC' => 'Συσχετίστε {{{this}}}',
  'LBL_ASSOC_EXISTING' => 'Συσχετισμός Υπάρχουσας {{{this}}}',
  'LBL_ASSOC_RELATED_RECORD' => 'Συσχετισμός Υπάρχουσας Εγγραφής',
  'LBL_AUTH_FAILED' => 'Απέτυχε η πιστοποίηση πελάτη.',
  'LBL_AUTH_FAILED_TITLE' => 'Άκυρος Πελάτης',
  'LBL_BACK' => 'Πίσω',
  'LBL_BAL' => 'Οικοδόμηση Μιας Λίστας',
  'LBL_BASE_RATE' => 'Βασικό Επιτόκιο',
  'LBL_BASIC' => 'Βασική',
  'LBL_BASIC_QUICK_SEARCH' => 'Αναζήτηση...',
  'LBL_BASIC_SEARCH' => 'Αναζήτηση',
  'LBL_BEFORE' => 'Πριν',
  'LBL_BEST' => 'Καλύτερη',
  'LBL_BEST_ADJUSTED' => 'Καλύτερο (Προσαρμοσμένο)',
  'LBL_BILLING_ADDRESS' => 'Διεύθυνση Τιμολόγησης',
  'LBL_BILLING_STREET' => 'Οδός:',
  'LBL_BILL_TO_ACCOUNT' => 'Τιμολόγηση σε Λογαριασμό',
  'LBL_BILL_TO_CONTACT' => 'Τιμολόγηση σε Επαφή',
  'LBL_BLANK_VALUE' => '<άδειο>',
  'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack δημιουργήθηκε για ταυτότητα χρήστη {0}',
  'LBL_BROWSER_TITLE' => 'SugarCRM - Commercial Open Source CRM',
  'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
  'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Ξεφύλλισμα Εγγράφων',
  'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Ξεφύλλισμα Εγγράφων',
  'LBL_BUGS' => 'Σφάλματα',
  'LBL_BY' => 'από',
  'LBL_Blank' => ' ',
  'LBL_CALENDAR_DURATION' => 'Διάρκεια',
  'LBL_CALENDAR_END_DATE' => 'Ημερομηνία Λήξης',
  'LBL_CALENDAR_EVENT_RESPONSE_ACCEPT' => 'Προσπάθειες',
  'LBL_CALENDAR_EVENT_RESPONSE_DECLINE' => 'Απορριπτέα',
  'LBL_CALENDAR_EVENT_RESPONSE_NONE' => 'Καμία Απάντηση',
  'LBL_CALENDAR_EVENT_RESPONSE_TENTATIVE' => 'Διερευνητική',
  'LBL_CALENDAR_EVENT_SCHEDULE_UNAVAILABLE' => 'Μη Διαθέσιμο Χρονοδιάγραμμα',
  'LBL_CALENDAR_RECURRENCE' => 'Επαναλαμβανόμενο',
  'LBL_CALENDAR_REMINDERS' => 'Υπενθυμίσεις',
  'LBL_CALENDAR_REPEAT_COUNT' => 'Επαναλαμβανόμενες Εμφανίσεις',
  'LBL_CALENDAR_REPEAT_DOW' => 'Επαναλάβετε τις Ημέρες της Εβδομάδας',
  'LBL_CALENDAR_REPEAT_INTERVAL' => 'Διάστημα Επανάληψης',
  'LBL_CALENDAR_REPEAT_TYPE' => 'Τύπος Επανάληψης',
  'LBL_CALENDAR_REPEAT_UNTIL_DATE' => 'Επανάληψη Μέχρι',
  'LBL_CALENDAR_START_DATE' => 'Ημερομηνία Έναρξης',
  'LBL_CALL' => 'Κλήση',
  'LBL_CALLS' => 'Κλήσεις',
  'LBL_CALLS_SUBPANEL_TITLE' => 'Τηλεφωνικές Κλήσεις',
  'LBL_CALL_BUTTON' => 'Τηλεφωνική Κλήση',
  'LBL_CAMPAIGN' => 'Εκστρατεία:',
  'LBL_CAMPAIGNLOG' => 'Καταγραφή Εκστρατείας',
  'LBL_CAMPAIGNS' => 'Εκστρατείες',
  'LBL_CAMPAIGNS_SEND_QUEUED' => 'Αποστολή Emails Εκστρατείας από Ουρά Αναμονής',
  'LBL_CAMPAIGN_CONTACT' => 'Εκστρατείες',
  'LBL_CAMPAIGN_ID' => 'campaign_id',
  'LBL_CANCEL_BUTTON_KEY' => 'l',
  'LBL_CANCEL_BUTTON_LABEL' => 'Ακύρωση',
  'LBL_CANCEL_BUTTON_LABEL_CONT' => 'να σταματήσει.',
  'LBL_CANCEL_BUTTON_LABEL_UNSAVED_CONT' => 'να μείνετε στη σελίδα.',
  'LBL_CANCEL_BUTTON_TITLE' => 'Ακύρωση',
  'LBL_CANNOT_SEND_PASSWORD' => 'Δεν μπορεί να στείλει τον κωδικό πρόσβασης',
  'LBL_CAN_NOT_DISABLE_ALL_LANG' => 'Δεν μπορείτε να απενεργοποιήσετε όλες τις γλώσσες.',
  'LBL_CASE' => 'Υπόθεση',
  'LBL_CASES' => 'Υποθέσεις',
  'LBL_CASE_SUMMARY_CHART' => 'Περίληψη Υπόθεσης',
  'LBL_CASE_SUMMARY_CHART_DESC' => 'Εμφανίζει μια επισκόπηση των σχετικών Υποθέσεων.',
  'LBL_CHANGE_BUTTON_KEY' => 'G',
  'LBL_CHANGE_BUTTON_LABEL' => 'Αλλαγή',
  'LBL_CHANGE_BUTTON_TITLE' => 'Αλλαγή',
  'LBL_CHANGE_LAYOUT' => 'Αλλαγή Διάταξης',
  'LBL_CHANGE_PASSWORD' => 'Αλλαγή Κωδικού Πρόσβασης',
  'LBL_CHARSET' => 'UTF-8',
  'LBL_CHART' => 'Γράφημα',
  'LBL_CHART_CONFIG_ALLOW_SCROLLING' => 'Επιτρέπεται η κύλιση',
  'LBL_CHART_CONFIG_BAR_CHART_OPTIONS' => 'Εμφάνιση επιλογών μπάρας γραφήματος',
  'LBL_CHART_CONFIG_CHART_TYPE' => 'Τύπος Γραφήματος',
  'LBL_CHART_CONFIG_HIDE_EMPTY_GROUPS' => 'Απόκρυψη κενών ομάδων',
  'LBL_CHART_CONFIG_SHOW_TITLE' => 'Εμφάνιση τίτλου',
  'LBL_CHART_CONFIG_SHOW_XAXIS_LABEL' => 'Εμφάνιση x-axis ετικέτας',
  'LBL_CHART_CONFIG_SHOW_YAXIS_LABEL' => 'Εμφάνιση y-axis ετικέτας',
  'LBL_CHART_CONFIG_STACK_DATA' => 'Στοίβα σειρών δεδομένων',
  'LBL_CHART_CONFIG_TICK_DISPLAY' => 'Μέθοδοι απεικόνισης επιλογών',
  'LBL_CHART_CONFIG_TICK_ROTATE' => 'Επιλογές Περιστροφής',
  'LBL_CHART_CONFIG_TICK_STAGGER' => 'Επιλογές Κλιμάκωσης',
  'LBL_CHART_CONFIG_TICK_WRAP' => 'Επιλογές Τυλίγματος',
  'LBL_CHART_CONFIG_VALUE_PLACEMENT' => 'Τιμή γραφήματος',
  'LBL_CHART_CONTROLS_CLOSE' => 'Απόκρυψη στοιχείων ελέγχου',
  'LBL_CHART_CONTROLS_OPEN' => 'Εμφάνιση στοιχείων ελέγχου',
  'LBL_CHART_LEGEND_CLOSE' => 'Απόκρυψη υπομνήματος',
  'LBL_CHART_LEGEND_OPEN' => 'Εμφάνιση υπομνήματος',
  'LBL_CHART_NO_DATA' => 'Δεν βρέθηκαν δεδομένα.',
  'LBL_CHART_UNDEFINED' => 'Απροσδιόριστο',
  'LBL_CHECKALL' => 'Επιλογή Όλων',
  'LBL_CHOOSE_ITEMS' => 'Επιλέξτε στοιχεία',
  'LBL_CHOOSE_LINK' => 'Επιλογή Τύπου Συνδέσμου',
  'LBL_CHOOSE_MONTH' => 'Επιλογή Μήνα',
  'LBL_CHOOSE_PARENT_TYPE' => 'Επιλογή Γονικού Τύπου',
  'LBL_CITY' => 'Πόλη',
  'LBL_CLEARALL' => 'Εκκαθάριση Όλων',
  'LBL_CLEAR_BUTTON_KEY' => 'C',
  'LBL_CLEAR_BUTTON_LABEL' => 'Εκκαθάριση',
  'LBL_CLEAR_BUTTON_TITLE' => 'Εκκαθάριση',
  'LBL_CLICK_HERE' => 'Πατήστε εδώ',
  'LBL_CLICK_TO_DRILLDOWN' => 'Κάντε κλικ για περαιτέρω αναζήτηση',
  'LBL_CLIENT_IP' => 'Διεύθυνση IP Client',
  'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
  'LBL_CLOSEALL_BUTTON_LABEL' => 'Κλείσιμο Όλων',
  'LBL_CLOSEALL_BUTTON_TITLE' => 'Κλείσιμο Όλων',
  'LBL_CLOSEINLINE' => 'Κλείσιμο',
  'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Θέλετε να κλείσετε αυτήν την #ενότητα#;',
  'LBL_CLOSE_ACTIVITY_HEADER' => 'Επιβεβαίωση:',
  'LBL_CLOSE_ACTIVITY_REMEMBER' => 'Μην εμφανιστεί αυτό το μήνυμα στο μέλλον:',
  'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
  'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Κλείσιμο και Δημιουργία Νέου',
  'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Κλείσιμο και Δημιουργία Νέου',
  'LBL_CLOSE_BUTTON_KEY' => 'Q',
  'LBL_CLOSE_BUTTON_LABEL' => 'Κλείσιμο',
  'LBL_CLOSE_BUTTON_TITLE' => 'Κλείσιμο',
  'LBL_CLOSE_DASHLETS' => 'Κλείσιμο',
  'LBL_CLOSE_SAVE_BUTTON' => 'Κλείσιμο εργασίας και αποθήκευση',
  'LBL_CLOSE_WINDOW' => 'Κλείσιμο Παραθύρου',
  'LBL_COFIGURE_PORTAL_THEME' => 'Διαμόρφωση Portal Θέματος',
  'LBL_COLLAPSE_ALL' => 'Σύμπτυξη Όλων',
  'LBL_COLLECTION_EXACT' => 'Ακριβής',
  'LBL_COLLECTION_NAME' => 'Όνομα',
  'LBL_COLLECTION_PRIMARY' => 'Βασική',
  'LBL_COLORS' => 'Χρώματα',
  'LBL_COLUMNS' => 'Στήλες',
  'LBL_COLUMNS_CAN_BE_DISPLAYED' => 'των στηλών που μπορούν να εμφανιστούν',
  'LBL_COMMENT' => 'Σχόλιο',
  'LBL_COMPANY_LOGO' => 'Λογότυπο Επιχείρησης',
  'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
  'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Σύνταξη Email',
  'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Σύνταξη Email',
  'LBL_CONFIGURE_TWITTER' => 'Επικοινωνήστε με τον διαχειριστή για να ρυθμίσετε τις παραμέτρους του Twitter',
  'LBL_CONFIG_BLOCKED_DESC_CONFIG_ACCESS' => 'Οι Ρυθμίσεις της Βάσης Δεδομένων για {{module}} πρέπει να καθοριστούν',
  'LBL_CONFIG_BLOCKED_DESC_MODULE_ACCESS' => 'Ο χειριστής δεν έχει δικαίωμα πρόσβασης στη διαμόρφωση {{module}} ρυθμίσεων',
  'LBL_CONFIG_BLOCKED_DESC_NO_CONFIG_METADATA' => '{{module}} δεν έχει ρυθμίσεις διαμόρφωσης',
  'LBL_CONFIG_BLOCKED_DESC_USER_ACCESS' => 'Ο χειριστής δεν έχει δικαίωμα πρόσβασης σε {{module}}',
  'LBL_CONFIG_BLOCKED_TITLE' => '{{module}} Λάθος Διαμόρφωσης',
  'LBL_CONFIG_MODULE_SETTINGS_SAVED' => '{{module}} οι ρυθμίσεις διαμόρφωσης έχουν αποθηκευτεί.',
  'LBL_CONFIG_TITLE_MODULE_SETTINGS' => '{{module}} Ρυθμίσεις',
  'LBL_CONFIRM' => 'Επιβεβαίωση',
  'LBL_CONFIRM_BUTTON_LABEL' => 'Εντάξει',
  'LBL_CONFIRM_BUTTON_LABEL_CONT' => 'να συνεχίσει.',
  'LBL_CONFIRM_BUTTON_LABEL_UNSAVED_CONT' => 'να εγκαταλείψετε τη σελίδα και να απορρίψετε τις αλλαγές.',
  'LBL_CONNECTORS_POPUPS' => 'Connectors Popups',
  'LBL_CONNECT_TEST_FAIL' => 'Σφάλμα: Οι ρυθμίσεις σύνδεσης μπορεί να είναι μη έγκυρες. Επικοινωνήστε με το διαχειριστή σας.',
  'LBL_CONNECT_TWITTER' => 'Συνδεθείτε στο Twitter',
  'LBL_CONNECT_TWITTER_FOR_ADMIN' => 'Διαμόρφωση Twitter Connector',
  'LBL_CONTACT' => 'Επαφή',
  'LBL_CONTACTS' => 'Επαφές',
  'LBL_CONTACT_EDIT_PASSWORD_LNK_TEXT' => 'Αλλαγή Κωδικού Πρόσβασης',
  'LBL_CONTACT_LIST' => 'Λίστα Επαφών',
  'LBL_CONTEXTUAL_SHORTCUTS' => 'Συμφραζόμενες Συντομεύσεις',
  'LBL_CONTRACTS' => 'Συμβάσεις',
  'LBL_COPYRIGHT' => 'Copyright © 2004-2014 SugarCRM Inc. Με Επιφύλαξη Παντός Δικαιώματος.',
  'LBL_COPY_ADDRESS_FROM_LEFT' => 'Αντιγραφή διεύθυνσης από αριστερά:',
  'LBL_COUNTRY' => 'Χώρα',
  'LBL_CREATED' => 'Δημιουργήθηκε από',
  'LBL_CREATED_BY_USER' => 'Δημιουργήθηκε από Χειριστή',
  'LBL_CREATED_ID' => 'Δημιουργήθηκε Από Ταυτότητα',
  'LBL_CREATED_USER' => 'Δημιουργήθηκε από Χειριστή',
  'LBL_CREATE_ATTACHMENT' => 'Δημιουργία Επισύναψης',
  'LBL_CREATE_BUG' => 'Δημιουργία Σφάλματος',
  'LBL_CREATE_BUTTON_LABEL' => 'Δημιουργία',
  'LBL_CREATE_CASE' => 'Δημιουργία Υπόθεσης',
  'LBL_CREATE_CONTACT' => 'Δημιουργία Επαφής',
  'LBL_CREATE_KB_DOCUMENT' => 'Δημιουργία Άρθρου',
  'LBL_CREATE_LINK_BUTTON_LABEL' => 'Δημιουργία και Σύνδεση Εγγραφής',
  'LBL_CREATE_LINK_RECORD' => 'Δημιουργία και Σύνδεση Εγγραφής',
  'LBL_CREATE_MODULE' => 'Δημιουργία {{{this}}}',
  'LBL_CREATE_NEW_TARGET_LIST' => 'Δημιουργία νέας λίστας στόχου',
  'LBL_CREATE_NOTE' => 'Δημιουργία Σημείωσης',
  'LBL_CREATE_OPPORTUNITY' => 'Δημιουργία Ευκαιρίας',
  'LBL_CREATE_RELATED' => 'Δημιουργία Σχετικού {{{this}}}',
  'LBL_CREATE_RELATED_RECORD' => 'Δημιουργία Σχετικής Εγγραφής',
  'LBL_CREATE_TASK' => 'Δημιουργία Εργασίας',
  'LBL_CREATING_NEW_PAGE' => 'Δημιουργία Νέας Σελίδας...',
  'LBL_CURRENCIES' => 'Νομίσματα',
  'LBL_CURRENCY' => 'Νόμισμα',
  'LBL_CURRENCY_ID' => 'Ταυτότητα Νομίσματος',
  'LBL_CURRENCY_NAME' => 'Όνομα Νομίσματος',
  'LBL_CURRENCY_RATE' => 'Βασικό Επιτόκιο',
  'LBL_CURRENCY_SYMBOL' => 'Σύμβολο Νομίσματος',
  'LBL_CURRENT_PASSWORD' => 'Τρέχων Κωδικός Πρόσβασης:',
  'LBL_CURRENT_TIMEPERIOD' => 'Τρέχουσα Χρονική Περίοδος',
  'LBL_CURRENT_USER_FILTER' => 'Δικά μου στοιχεία:',
  'LBL_DASHBOARD_BWC' => 'Πίνακας Εργαλείων Μου',
  'LBL_DASHBOARD_NO_RECORDS' => 'Κανένας αποθηκευμένος Πίνακας Εργαλειών',
  'LBL_DASHBOARD_TOGGLE' => 'Άνοιγμα/Κλείσιμο Πίνακα Εργαλείων',
  'LBL_DASHLET' => 'Πίνακας Στοιχείων Αρχικής Σελίδας',
  'LBL_DASHLET_ATTACHMENTS_DESCRIPTION' => 'Σημειώσεις και Συνημμένα ανήκουν στην εγγραφή',
  'LBL_DASHLET_ATTACHMENTS_NAME' => 'Σημειώσεις και Συνημμένα',
  'LBL_DASHLET_CASESSUMMARY_CLOSE_CASES' => 'Κλειστές Υποθέσεις',
  'LBL_DASHLET_CASESSUMMARY_OPEN_CASES' => 'Ανοιχτές Υποθέσεις',
  'LBL_DASHLET_CASESSUMMARY_SUMMARY' => 'Περίληψη',
  'LBL_DASHLET_CASES_SUMMARY_NAME' => 'Περίληψη Υπόθεσης',
  'LBL_DASHLET_CLOSE' => 'Κλείσιμο',
  'LBL_DASHLET_COMPANY_INFO' => 'D&B: Εισαγωγή και Εμπλουτισμός',
  'LBL_DASHLET_COMPANY_INFO_DESC' => 'Εμπλουτισμός του υπάρχον λογαριαμσού με D & Β δεδομένα. Απαιτείται συνδρομή D&B.',
  'LBL_DASHLET_COMPANY_INFO_LONG_DESC' => 'Κρατήστε ενημερωμένα τα στοιχεία του λογαριασμού σας με εισαγωγή D&B και Εμπλουτίστε Χαρακτηριστικά.',
  'LBL_DASHLET_CONFIGURE' => 'Διαμόρφωση',
  'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Αυτόματη Ανανέωση',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Εμφάνιση Γραμμών',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Φίλτρα',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Γενικά',
  'LBL_DASHLET_CONFIGURE_INTELLIGENT' => 'Σχετίζονται με την τρέχουσα εγγραφή',
  'LBL_DASHLET_CONFIGURE_LINKED' => 'Συνδεδεμένο πεδίο',
  'LBL_DASHLET_CONFIGURE_MY_FAVORITES_ONLY' => 'Μόνο τα Αγαπημένα Μου',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Μόνο τα Στοιχεία Μου',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Τίτλος',
  'LBL_DASHLET_CONFIG_EDIT_LABEL' => 'Επεξεργασία',
  'LBL_DASHLET_COUNTRY_CHART_DESCRIPTION' => 'Εμφανίζει το διάγραμμα των πωλήσεων ανά χώρα.',
  'LBL_DASHLET_COUNTRY_CHART_NAME' => 'Πωλήσεις ανά Χώρα',
  'LBL_DASHLET_DROP_HERE' => 'Πτώση εδώ',
  'LBL_DASHLET_FORECASTS_CHART_DESC' => 'Εμφανίζει το Ραβδόγραμμα Πρόβλεψης για μία συγκεκριμένη Χρονική Περίοδο',
  'LBL_DASHLET_FORECASTS_CHART_NAME' => 'Ραβδόγραμμα Πρόβλεψης',
  'LBL_DASHLET_FORECASTS_DATASET' => 'Σύνολο δεδομένων',
  'LBL_DASHLET_FORECASTS_DETAILS' => 'Προβλέψεις Συνόλου δεδομένων',
  'LBL_DASHLET_FORECASTS_DETAILS_DESC' => 'Εμφανίζει λεπτομέρειες της τρέχουσας πρόβλεψης',
  'LBL_DASHLET_FORECASTS_FOR_CHART_NAME' => 'Πρόβλεψη για',
  'LBL_DASHLET_FORECASTS_GROUPBY' => 'Ομάδα Από',
  'LBL_DASHLET_FORECAST_NAME' => 'στην Πρόβλεψη',
  'LBL_DASHLET_FORECAST_PARETO_CHART_NAME' => 'Ραβδόγραμμα Πρόβλεψης',
  'LBL_DASHLET_ITERACTIONS_NAME' => 'Αλληλεπιδράσεις',
  'LBL_DASHLET_LISTVIEW_DESCRIPTION' => 'Λίστα εγγραφών από μια συγκεκριμένη ενότητα, σύμφωνα με τα κριτήρια που ορίζετε.',
  'LBL_DASHLET_LISTVIEW_NAME' => 'Προβολή Λίστας',
  'LBL_DASHLET_MAXIMIZE' => 'Μεγιστοποίηση',
  'LBL_DASHLET_MAXIMIZE_ALL' => 'Μεγιστοποίηση Όλων',
  'LBL_DASHLET_MINIMIZE' => 'Ελαχιστοποίηση',
  'LBL_DASHLET_MINIMIZE_ALL' => 'Ελαχιστοποίηση Όλων',
  'LBL_DASHLET_MODULE_UNAVAILABLE' => 'Δεν υπάρχουν διαθέσιμα δεδομένα. Δεν έχετε δικαίωμα πρόσβασης σε αυτή την ενότητα. Παρακαλούμε να ενημερώσετε ή να αφαιρέσετε αυτόν τον πίνακα.',
  'LBL_DASHLET_MOVE' => 'Μετακίνηση',
  'LBL_DASHLET_NEWS_DESCRIPTION' => 'Google News feed για Σχετικό Λογαριασμό',
  'LBL_DASHLET_NEWS_FEED_NAME' => 'Ειδησεογραφία',
  'LBL_DASHLET_NEWS_NAME' => 'Νέα',
  'LBL_DASHLET_NO_RECORDS' => 'Δεν βρέθηκαν εγγραφές αυτή τη στιγμή.',
  'LBL_DASHLET_OPPORTUNITY_DESCRIPTION' => 'Μετρήσεις Ευκαιρίας για Σχετικό Λογαριασμό. Απαιτείται D&B συνδρομή.',
  'LBL_DASHLET_OPPORTUNITY_NAME' => 'Ευκαιρία Μετρήσεων',
  'LBL_DASHLET_PIPLINE_NAME' => 'Αγωγός',
  'LBL_DASHLET_RECENT_TWEETS_SUGARCRM_NAME' => 'Πρόσφατα Tweets - @{{twitter}}',
  'LBL_DASHLET_REFRESH' => 'Ανανέωση',
  'LBL_DASHLET_REFRESH_LABEL' => 'Ανανέωση',
  'LBL_DASHLET_REMOVE_LABEL' => 'Αφαίρεση',
  'LBL_DASHLET_SAVED_REPORTS_CHART' => 'Αποθηκευμένες Αναφορές του Πίνακα Στοιχείων σε Διάγραμμα',
  'LBL_DASHLET_SAVED_REPORTS_CHART_DESC' => 'Εμφανίζει κάθε γράφημα από μια αποθηκευμένη αναφορά.',
  'LBL_DASHLET_TOGGLE' => 'Εναλλαγή Ορατότητας του Πίνακα Εργαλείων',
  'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Γραμμή Ειδών 10 Κορυφαίων Εσόδων από Πωλήσεις',
  'LBL_DATA_VIEW' => 'Προβολή Δεδομένων',
  'LBL_DATE' => 'Ημερομηνία',
  'LBL_DATE_ENTERED' => 'Ημερομηνία Δημιουργίας:',
  'LBL_DATE_LAST_ACTION' => 'Ημερομηνία Τελευταίας Ενέργειας',
  'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης:',
  'LBL_DATE_START' => 'Ημερομηνία Έναρξης',
  'LBL_DB_ROUND_TRIPS' => 'Roundtrips Βάσης Δεδομένων',
  'LBL_DEFAULT_DASHBOARD_TITLE' => 'Πίνακας Εργαλείων Μου',
  'LBL_DEFAULT_HELP_DASHBOARD_TITLE' => 'Βοήθεια Πίνακα Εργαλείων',
  'LBL_DEFAULT_HELP_DASHLET_DESC' => 'Η Βοήθεια του Πίνακα Στοιχείων, παρέχει συγκεκριμένα μια προβολή βοήθειας στην ενότητα.',
  'LBL_DEFAULT_HELP_DASHLET_TITLE' => 'Βοήθεια Πίνακα Στοιχείων Αρχικής Σελίδας',
  'LBL_DEFAULT_LINK_TEXT' => 'Προεπιλογή κείμενο συνδέσμου.',
  'LBL_DELETE' => 'Διαγραφή',
  'LBL_DELETED' => 'Διαγράφηκε',
  'LBL_DELETE_BUTTON' => 'Διαγραφή',
  'LBL_DELETE_BUTTON_KEY' => 'd',
  'LBL_DELETE_BUTTON_LABEL' => 'Διαγραφή',
  'LBL_DELETE_BUTTON_TITLE' => 'Διαγράφηκε',
  'LBL_DELETE_FILTER_CONFIRMATION' => 'Αυτό το φίλτρο θα αφαιρεθεί από αυτή την προβολή; αυτό μπορεί να περιλαμβάνει δεδομένα διαμόρφωσης για τον πίνακα στοιχείων αρχικής σελίδας. Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το φίλτρο;',
  'LBL_DELETE_INLINE' => 'Διαγραφή',
  'LBL_DELETE_PAGE' => 'Διαγραφή Σελίδας',
  'LBL_DELETE_PAGE_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτή την σελίδα;',
  'LBL_DELETING' => 'Διαγράφει...',
  'LBL_DESCRIPTION' => 'Περιγραφή',
  'LBL_DETAILVIEW' => 'Λεπτομέρειες',
  'LBL_DETAILVIEW_NO_RECORDS' => 'Αυτή η εγγραφή δεν θα μπορούσε να καταστεί αυτή τη στιγμή.',
  'LBL_DIRECT_REPORTS' => 'Άμεσες Αναφορές',
  'LBL_DISPLAY_COLUMNS' => 'Εμφάνιση Στηλών',
  'LBL_DISPLAY_LOG' => 'Καταγραφή Σύνδεσης',
  'LBL_DNB_ACC_CRT' => 'D&B Δημιουργία Λογαριασμού',
  'LBL_DNB_ACC_CRT_DESC' => 'Δημιουργία Λογαριασμού Χρησιμοποιώντας D&B. Απαιτείται συνδρομή D&B.',
  'LBL_DNB_ACT_OPER' => 'Δραστηριότητες και Λειτουργίες',
  'LBL_DNB_ACT_OPER_DESC' => 'Καταγράφει την περιγραφή των πράξεων από μια επιχείρηση, συμπεριλαμβανομένων των πληροφοριών μάρκετινγκ, όπως ο αριθμός των πελατών, λεπτομέρειες οργανισμού και εισαγωγή/εξαγωγή λεπτομερειών',
  'LBL_DNB_ADDRESS' => 'Διεύθυνση',
  'LBL_DNB_ADDRESS_TENURE_DETAILS' => 'Λεπτομέρειες Διεύθυνσης Θητείας',
  'LBL_DNB_ADMIN_CONFIG' => 'Διαμόρφωση D&B Connector',
  'LBL_DNB_AGENT_IND' => 'Δείκτης Πράκτορα',
  'LBL_DNB_AGENT_INDICATOR' => 'Δείκτης Πράκτορα',
  'LBL_DNB_AGENT_IND_DESC' => 'Όταν είναι αληθής (ορισμός σε 1), δείχνει ότι το θέμα ενεργεί ως πράκτορας την προώθηση προϊόντων ή υπηρεσιών της άλλης οργάνωσης π.χ., Αντιπρόσωπος Πωλήσεων, Αγορά Αντιπροσώπου',
  'LBL_DNB_AIRPRT_DISADV_ENT' => 'Αεροδρόμιο Παραχώρησης Δείκτης σε Μειονεκτική Θέση Επιχείρησης',
  'LBL_DNB_AIRPRT_DISADV_ENT_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, η επιχείρηση λειτουργεί ως αναδόχος σε ένα από τα αεροδρόμια του έθνους και πληροί τις απαιτήσεις επιλεξιμότητας ιδιοκτησίας που ορίζονται από τους κανονισμούς που περιγράφονται στο 49 CFR Part 23',
  'LBL_DNB_ALASNAT_IND' => 'Alaskan Native Δείκτης',
  'LBL_DNB_ALASNAT_IND_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, η φυλή είναι μια Μητρική Εταιρεία της Αλάσκα',
  'LBL_DNB_AND' => 'και',
  'LBL_DNB_ANNUAL_SALES_US_DOLLAR' => 'Ετήσιες Πωλήσεις',
  'LBL_DNB_API_ERR' => 'Σφάλμα D&B API',
  'LBL_DNB_ASSESMENT' => 'D&B Αξιολόγηση',
  'LBL_DNB_ASSESMENT_DESC' => 'Καταγράφει την τιμή που προστίθονται πληροφορίες στις οργανώσεις, όπως: - συστάσεις για πόσο χρόνο να επεκταθούν σε αυτούς, - εκτιμήσεις όσον αφορά την ρευστότητα τους, - συνοπτικές αξιολογήσεις στην απόδοση και συμπεριφορά τους, - προβλέψεις σχετικά με τον κίνδυνο από τη διεξαγωγή των επιχειρήσεων τους. Τα προγνωστικά αποτελέσματα, υπολογίζονται συνήθως και χορηγούνται από το D&B, αλλά οι αξιολογήσεις αυτές μπορεί επίσης να καταγράφονται όταν ανατεθούν από τρίτους.',
  'LBL_DNB_ASSESMENT_TYPE_VALUE' => 'Τύπος Εκτίμησης Τιμής',
  'LBL_DNB_ASSESMENT_VALUE' => 'Εκτίμηση Τιμής',
  'LBL_DNB_ASSESSMENT' => 'Εκτίμηση',
  'LBL_DNB_ASSIGNMENT_METHOD_TEXT' => 'Ανατεθειμένη Μέθοδος Κειμένου',
  'LBL_DNB_ASSOCIATE' => 'Αναπληρωτής',
  'LBL_DNB_BACK_TO_IMPORT_ENRICH' => 'Επιστροφή Στην Εισαγωγή & Εμπλουτισμό',
  'LBL_DNB_BACK_TO_SRCH' => 'Επιστροφή στο D&B Αναζήτηση Αποτελεσμάτων',
  'LBL_DNB_BAL' => 'D&B Οικοδόμηση Μιας Λίστας',
  'LBL_DNB_BAL_ACCT_HEADER' => 'Λογαριασμοί',
  'LBL_DNB_BAL_AFTER' => 'Μετά',
  'LBL_DNB_BAL_ALL_SITE' => 'Όλες οι Ιστοσελίδες',
  'LBL_DNB_BAL_AREA_CODE' => 'Υπεραστικός Κωδικός',
  'LBL_DNB_BAL_ASSETS' => 'Περιουσιακά Στοιχεία',
  'LBL_DNB_BAL_BEFORE' => 'Πριν',
  'LBL_DNB_BAL_BIO' => 'Bio',
  'LBL_DNB_BAL_BOTH' => 'Και τα δύο',
  'LBL_DNB_BAL_BTW' => 'Μεταξύ',
  'LBL_DNB_BAL_DISTANCE' => 'Απόσταση',
  'LBL_DNB_BAL_DUNS' => 'DUNS',
  'LBL_DNB_BAL_FILING_DATE' => 'Ημερομηνία Κατάθεσης',
  'LBL_DNB_BAL_FINANCIAL_INFO' => 'Οικονομικές Πληροφορίες',
  'LBL_DNB_BAL_GTE' => 'Μεγαλύτερη από ή ίση με',
  'LBL_DNB_BAL_HIGH' => 'Υψηλή',
  'LBL_DNB_BAL_HINT' => 'Επιλέξτε κριτήρια για να οικοδομήσετε μια λίστα',
  'LBL_DNB_BAL_IMPORT_AS' => 'Εισαγωγή Ως:',
  'LBL_DNB_BAL_INDUSTRY' => 'Κλάδος',
  'LBL_DNB_BAL_INDUSTRY_WARN' => 'Εναλλάσοντας τους τύπους των κλάδων, θα καθαρίσει προηγουμένως τα επιλεγμένα κριτήρια του κλάδου. Θέλετε να αλλάξετε τον Τύπο Κωδικού Κλάδου;',
  'LBL_DNB_BAL_IND_CODE_TYPE' => 'Τύπος Κωδικού Κλάδου',
  'LBL_DNB_BAL_IND_CODE_TYPE_PRI_SEC' => 'Περιλαμβάνει Πρωτοβάθμια/Δευτεροβάθμια',
  'LBL_DNB_BAL_IPO_DATA' => 'Δεδομένα IPO',
  'LBL_DNB_BAL_IPO_OFFER_AMT' => 'Ποσό Προσφοράς IPO',
  'LBL_DNB_BAL_IPO_PRICE_RANGE' => 'Εύρος Τιμών IPO',
  'LBL_DNB_BAL_JOBCD_PH' => 'Επιλέξτε Λειτουργία Εργασίας',
  'LBL_DNB_BAL_KM' => 'KM',
  'LBL_DNB_BAL_LIST' => 'Επιστροφή Σε D&B Αποτελέσματα της Οικοδόμησης Μιας Λίστας',
  'LBL_DNB_BAL_LOAD' => 'Κατασκευή Λίστας',
  'LBL_DNB_BAL_LOW' => 'Χαμηλή',
  'LBL_DNB_BAL_LTE' => 'Μικρότερη από ή ίση με',
  'LBL_DNB_BAL_MED' => 'Μεσαία',
  'LBL_DNB_BAL_MILES' => 'Μίλια',
  'LBL_DNB_BAL_NAICS' => 'NAICS Κώδικας',
  'LBL_DNB_BAL_NET_INCOME' => 'Καθαρό Εισόδημα',
  'LBL_DNB_BAL_NET_INCOME_GROWTH' => 'Αύξηση Καθαρού Εισοδήματος',
  'LBL_DNB_BAL_ORG_ID' => 'Οργανισμός Αναγνώρισης',
  'LBL_DNB_BAL_ORG_NAME' => 'Όνομα Εταιρείας',
  'LBL_DNB_BAL_PARAM_ANNL_SALES' => 'Ετήσιες Πωλήσεις',
  'LBL_DNB_BAL_PARAM_COMP' => 'Έδρα Εταιρείας',
  'LBL_DNB_BAL_PARAM_COMP_INFORMATION' => 'Πληροφορίες Εταιρείας',
  'LBL_DNB_BAL_PARAM_COMP_SZ' => 'Μέγεθος Εταιρείας',
  'LBL_DNB_BAL_PARAM_EMP_CNT' => 'Αριθμός Εργαζομένων',
  'LBL_DNB_BAL_PARAM_EMP_GRWT' => 'Σύνολο Εργαζομένων Ανάπτυξη %',
  'LBL_DNB_BAL_PARAM_EMP_GRWTH' => 'Σύνολο Εργαζομένων Ανάπτυξη %',
  'LBL_DNB_BAL_PARAM_JOB_FN' => 'Λειτουργία Εργασίας',
  'LBL_DNB_BAL_PARAM_KEYWORD' => 'Λέξη Κλειδί',
  'LBL_DNB_BAL_PARAM_LIMIT_ERR' => 'Ανώτατο όριο κριτηρίων. Παρακαλούμε εκκαθαρίστε τις προηγούμενες παραμέτρους',
  'LBL_DNB_BAL_PARAM_MKT_CAP' => 'Κεφαλαιοποίηση',
  'LBL_DNB_BAL_PARAM_MRKT_CAP' => 'Κεφαλαιοποίηση',
  'LBL_DNB_BAL_PARAM_NUM_EMP' => 'Αριθμός εργαζομένων',
  'LBL_DNB_BAL_PARAM_PEOPLE' => 'Άνθρωποι',
  'LBL_DNB_BAL_PARAM_STATES' => 'Περιοχές',
  'LBL_DNB_BAL_POSTAL_CODE' => 'Ταχυδρομικός Κωδικός',
  'LBL_DNB_BAL_PRESCREEN_SCORE' => 'D&B Prescreen Score',
  'LBL_DNB_BAL_PRIMARY_ONLY' => 'Μόνο Πρωτοβάθμια',
  'LBL_DNB_BAL_PRIMARY_SECONDARY' => 'Πρωτοβάθμια και Δευτεροβάθμια',
  'LBL_DNB_BAL_RADIUS_SRCH' => 'Αναζήτηση',
  'LBL_DNB_BAL_RSLT' => 'D&B: Προεπισκόπηση Οικοδόμησης Μιας Λίστας',
  'LBL_DNB_BAL_SIC' => 'SIC Κώδικας',
  'LBL_DNB_BAL_SIC_NAICS_EXAMPLE' => 'Παράδειγμα: SIC Κωδικοί :  5734 ->  Υπολογιστών και Καταστήματα  Λογισμικού, 3711 -> Αυτοκινητοβιομηχανία',
  'LBL_DNB_BAL_SINGLE_SITE' => 'Μοναδική Ιστοσελίδα',
  'LBL_DNB_BAL_TITLE' => 'Τίτλος',
  'LBL_DNB_BAL_TRADING_DATE' => 'Ημερομηνία Συναλλαγής',
  'LBL_DNB_BAL_UK_REG_NO' => 'UK Reg. No.',
  'LBL_DNB_BAL_UK_VAT_NO' => 'UK VAT No.',
  'LBL_DNB_BAL_YEAR_OF_FOUNDING' => 'Έτος Ίδρυσης',
  'LBL_DNB_BAL_ZIP' => 'ZIP',
  'LBL_DNB_BASIC_FIN_INF' => 'Βασικές Οικονομικές Πληροφορίες',
  'LBL_DNB_BI_API_ERR' => 'Λάθος κατά την εισαγωγή εγγραφών.',
  'LBL_DNB_BI_DUP_MSG' => 'οι διπλότυποι λογαριασμοί δεν προστέθηκαν',
  'LBL_DNB_BI_ERR' => 'Καμία εγγραφή δεν εισήχθηκε.',
  'LBL_DNB_BI_LOADING' => 'Εισαγωγή D&B Λογαριασμών',
  'LBL_DNB_BI_NEW_ACCT' => 'νέους λογαριασμούς.',
  'LBL_DNB_BI_NO_SLCT' => 'Κμία εγγραφή δεν Επιλέχθηκε.',
  'LBL_DNB_BI_REC_LIMIT' => 'Το ανώτερο 20 εγγραφές μπορούν να επιλεχθούν για εισαγωγή',
  'LBL_DNB_BI_YOU_ADD' => 'Προσθέσατε',
  'LBL_DNB_BONE_ORG_IND' => 'Δείκτης Σωρού Οργάνωσης',
  'LBL_DNB_BONE_ORG_IND_DESC' => 'Όταν είναι Σε Λειτουργία ON (ορισμός σε 1), δείχνει ότι τα δεδομένα για την εταιρεία δεν είναι συλλέγονται πλέον και καλύφθηκαν από το εκδοτικό προσωπικό του Hoover, πριν αποκτηθούν ή πριν τη παύση της δραστηριότητας',
  'LBL_DNB_CCS' => 'Πιστωτικό Εμπορικό Αποτέλεσμα',
  'LBL_DNB_CCS_DESC' => 'καταγραφή των πιο πρόσφατων κινδύνων βαθμολογιών που εκχωρούνται σε αυτήν την οργάνωση σε μια δεδομένη ημερομηνία/χρόνο, χρησιμοποιώντας ένα σκορ μοντέλου που βοηθά να προβλέψουμε την πιθανότητα ότι η οργάνωση θα πληρώσει τους λογαριασμούς της με σοβαρά εκπρόθεσμο τρόπο (90 + ημέρες καθυστέρηση) κατά τους επόμενους 12 μήνες',
  'LBL_DNB_CI_CITY' => 'Πόλη',
  'LBL_DNB_CI_CTRY' => 'Χώρα',
  'LBL_DNB_CI_POSTAL_CD' => 'Τ.Κ',
  'LBL_DNB_CI_SRCH' => 'D&B: Αναζήτηση Εταιρείας',
  'LBL_DNB_CI_SRCH_HINT' => 'Εισαγωγή Όνομα Εταιρείας για Αναζήτηση D&B',
  'LBL_DNB_CI_STATE' => 'Περιοχή',
  'LBL_DNB_CI_STREET' => 'Οδός',
  'LBL_DNB_CLEAR' => 'Εκκαθάριση',
  'LBL_DNB_CM_LOADING' => 'Επίκληση D&Β Καθορισμός Αντιστοιχίας...',
  'LBL_DNB_CM_MATCH' => 'Αντιστοιχία',
  'LBL_DNB_CNTCT_LOADING' => 'Φόρτωση Επαφών Από D&B',
  'LBL_DNB_CNTRL_OWN_DATE' => 'Ημερομηνία Ελέγχου Ιδιοκτησίας',
  'LBL_DNB_CNTRL_OWN_DATE_DESC' => 'Η ημερομηνία κατά την οποία οι σημερινοί ιδιοκτήτες ανέλαβαν την επιχείρηση.',
  'LBL_DNB_CNTRL_TYP_TEXT' => 'Τύπος Ιδιοκτησίας Ελέγχου',
  'LBL_DNB_CNTRL_TYP_TEXT_DESC' => 'Κείμενο που περιγράφει τον τύπο ελέγχου ιδιοκτησίας, π.χ., δημόσια, ιδιωτική, ανήκει στο κράτος',
  'LBL_DNB_COMPANY_INFO_LOADING' => 'Φόρτωση Πληροφοριών Εταιρείας Από D&B ...',
  'LBL_DNB_COMPETITORS' => 'D&B: Ανταγωνιστές',
  'LBL_DNB_COMPETITORS_DESC' => 'Στοιχεία Ανταγωνιστών Από DNB. Απαιτείται D&B συνδρομή.',
  'LBL_DNB_COMPETITORS_LIST' => 'Επιστροφή Στο D&B Λίστα Ανταγωνιστών',
  'LBL_DNB_COMPETITORS_LOADING' => 'Φόρτωση Ανταγωνιστών Από D&B...',
  'LBL_DNB_COMPETITORS_LONG_DESC' => 'Βρείτε ανταγωνιστές με τον τρεχούμενο λογαριασμό προκειμένου να επεκτείνουν τις προοπτικές σας. Μια κορυφαία ονομασία ανταγωνιστή εκχωρείται από D&Β με βάση την ανάλυση της εταιρείας και βιομηχανίας, στην οποία δραστηριοποιείται. Δημόσιες επιχειρήσεις συχνά προσδιορίζουν κορυφαίοι ανταγωνιστές στις δημόσιες εγγραφές, το οποίο λαμβάνεται επίσης υπόψη. Απαιτείται συνδρομή D&Β.',
  'LBL_DNB_COMPETITORS_TOP' => 'Κορυφαίοι Ανταγωνιστές',
  'LBL_DNB_COMPINFO_LONG_DESC' => 'Ο πιο αποτελεσματικός τρόπος για να αποκτήσετε τις βασικές πληροφορίες μάρκετινγκ για μια πιθανή προοπτική, όπως το όνομα της επιχείρησης, διεύθυνση, <br />                                     D&B® D-U-N-S® Νούμερο, φαξ, τηλέφωνο και στυλ εμπορίου.<br />                                     Περιλαμβάνει επιχειρηματικής ευφυΐας, όπως εκτελεστικά ονόματα και τίτλους, τα οικονομικά, τον αριθμό των εργαζομένων,<br />                                    εισαγωγή ή εξαγωγή κώδικα, υποκατάστημα δείκτη, και περισσότερα. Απαιτείται D&B Συνδρομή.',
  'LBL_DNB_COMP_INFO' => 'D&B: Πληροφορίες Εταιρείας',
  'LBL_DNB_COMP_INFO_LOAD' => 'Ανάκτηση D & Β Πληροφορίες Εταιρείας',
  'LBL_DNB_COMP_SUMM' => 'Περιγραφή Εταιρίας',
  'LBL_DNB_COMP_SUMM_DESC' => 'Κείμενο που καταγράφει μια σύντομη δήλωση ή λογαριασμό αυτής της οργάνωσης',
  'LBL_DNB_CONFIDENCE' => 'Εμπιστοσύνη',
  'LBL_DNB_CONFIG' => 'Επικοινωνήστε με τον Διαχειριστή να Διαμορφώσετε το D&B Connector',
  'LBL_DNB_CONNECTOR_ERR' => 'D&B connector δεν διαμορφώθηκε. Επικοινωνήστε με τον διαχειριστή',
  'LBL_DNB_CONTACT' => 'D&B: Πληροφορίες Εταιρείας',
  'LBL_DNB_CONTACT_BIO' => 'Bio',
  'LBL_DNB_CONTACT_COMP_HIST' => 'Ιστορικό Αποζημίωσης',
  'LBL_DNB_CONTACT_DESC' => 'Εμφανίζει τις Επαφές Από D&B. Απαιτείται D&B συνδρομή.',
  'LBL_DNB_CONTACT_EMAIL' => 'Email',
  'LBL_DNB_CONTACT_EMP_PROF' => 'Προφίλ Εργαζόμενου',
  'LBL_DNB_CONTACT_FNAME' => 'Όνομα',
  'LBL_DNB_CONTACT_FROM' => 'Από',
  'LBL_DNB_CONTACT_JOBTITLE' => 'Τίτλο Εργασίας',
  'LBL_DNB_CONTACT_JOB_HIST' => 'Ιστορικό Εργασίας',
  'LBL_DNB_CONTACT_LIST' => 'Επιστροφή Στη Λίστα Επαφών D&B',
  'LBL_DNB_CONTACT_LNAME' => 'Επώνυμο',
  'LBL_DNB_CONTACT_LOADING' => 'Φόρτωση Πληροφοριών Επαφής Για',
  'LBL_DNB_CONTACT_LONG_DESC' => 'Οι επαφές σας στο D&B δίνει πρόσβαση σε πάνω από 100M επαφές. Αναζητήστε ανά Όνομα, Επώνυμο, και Τίτλο Εργασίας',
  'LBL_DNB_CONTACT_NAME' => 'Όνομα',
  'LBL_DNB_CONTACT_PHONE' => 'Τηλέφωνο',
  'LBL_DNB_CONTACT_RESP' => 'Διαχείριση Ευθύνης',
  'LBL_DNB_CONTACT_SHOW_MORE' => 'Εμφάνιση Περισσότερων Επαφών D&B',
  'LBL_DNB_CONTACT_TO' => 'Σε',
  'LBL_DNB_CONTROL_OWNERSHIP_DATE' => 'Ημερομηνία Ελέγχου Ιδιοκτησίας',
  'LBL_DNB_CONTROL_OWNERSHIP_TYPE_TEXT' => 'Τύπος Κειμένου Ελέγχου Ιδιοκτησίας',
  'LBL_DNB_CON_EMP_CNT' => 'Ενοποιημένος Αριθμός Υπαλλήλων',
  'LBL_DNB_CON_EMP_CNT_DESC' => 'Καταγράφει τα δεδομένα υπαλλήλων, που περιλαμβάνουν εγγραφές όλων των εργαζομένων που εμπλέκονται στις επιχειρήσεις της νομικής οντότητας (συμπεριλαμβανομένων των υπαλλήλων που βρίσκονται σε θέσεις του κλάδου) καθώς και όλους τους εργαζόμενους που εμπλέκονται στις επιχειρήσεις, καθώς και το οικογενειακό δένδρο (με βάση την ελέγχουσα συμμετοχή). Δηλαδή, Θυγατρικές',
  'LBL_DNB_COUNTRY' => 'Χώρα',
  'LBL_DNB_COUNTRY_GROUP_NAME' => 'Όνομα Ομάδας Χώρας',
  'LBL_DNB_COUNTRY_OFFICIAL_NAME' => 'Επίσημη Ονομασία της Χώρας',
  'LBL_DNB_CURRENCY_ISO_ALPHA_CODE' => 'Κωδικός Νομίσματος ISO Άλφα',
  'LBL_DNB_CURRENT_PRINCIPAL_FULL_NAME' => 'Τρέχων Ονοματεπώνυμο Principal',
  'LBL_DNB_CURRENT_PRINCIPAL_IDENTIFICATION_NUMBER' => 'Τρέχων Κύριος αριθμός αναγνώρισης',
  'LBL_DNB_CURRENT_PRINCIPAL_JOB_TITLE' => 'Τρέχων Κύριος Τίτλος Εργασίας',
  'LBL_DNB_DATA_ERR' => 'D&B Δεδομένα δεν είναι Διαθέσιμα',
  'LBL_DNB_DATA_OVERRIDE_MULTIPLE_FIELDS' => 'Θέλετε να επανεγγράψετε τα {{fields}} και άλλα πεδία;',
  'LBL_DNB_DATA_OVERRIDE_SINGLE_FIELD' => 'Θέλετε να επανεγγράψετε {{fieldName}} με {{value}};',
  'LBL_DNB_DATA_OVERRIDE_TWO_FIELDS' => 'Θέλετε να επανεγγράψετε τα {{fields}};',
  'LBL_DNB_DISAB_IND' => 'Απενεργοποιημένος Δείκτης',
  'LBL_DNB_DISAB_IND_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, αυτή η οργάνωση έχει πιστοποιηθεί ως επιχείρηση που είναι μεγαλύτερη από 50% που ανήκει, και των οποίων η διαχείριση και οι καθημερινές επιχειρηματικές πράξεις ελέγχονται από ένα ή περισσότερα πρόσωπα που έχουν μια κατάσταση που εμποδίζει το άτομο να εκτελεί όλες τις συνηθισμένες σωματικές ή ψυχικές λειτουργίες',
  'LBL_DNB_DISAB_VET_ENT' => 'Απενεργοποιημένος  Δείκτης Βετεράνος Επιχείρησης',
  'LBL_DNB_DISAB_VET_ENT_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, η επιχείρηση είναι αναγνωρισμένη από την πολιτεία της Καλιφόρνια, δηλαδή ένας βετεράνος του στρατού των ΗΠΑ, Ναυτικός, ή των Αεροπορικών Υπηρεσιών, με μια υπηρεσία-που συνδέεται με αναπηρία τουλάχιστον 10% ή περισσότερο και που είναι κάτοικος της Καλιφόρνια όπου τουλάχιστον το 51% ανήκει σε άτομα με ειδικές ανάγκες βετεράνων, όπου διεξάγει την καθημερινή διαχείριση των επιχειρήσεων και τον έλεγχο. Το Υπουργείο Εσωτερικών δεν μπορεί να είναι ένα υποκατάστημα ή θυγατρική μια ξένης εταιρείας, ξένη εταιρεία ή άλλων ξένων-επιχειρήσεων',
  'LBL_DNB_DISADV_ENT' => 'Δείκτης Μειονεκτούσας Επιχείρησης',
  'LBL_DNB_DISADV_ENT_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, η επιχείρηση πιστοποιείται από μια ομοσπονδιακή, πολιτειακή ή τοπική κυβερνητική υπηρεσία, πληρώντας όλα τα πρότυπα της κυβέρνησης που την επέλεξε, αλλά μπορεί να περιλαμβάνει γυναίκες, μειονοτήτες, ατόμα με αναπηρίες και άλλες μειονεκτούσες επιχειρήσεις ως αποτέλεσμα οικονομικών μειονεκτημάτων, όσον αφορά την εκπαίδευση, απασχόληση, κατοικία ή έδρα ή κοινωνική μειονεξία και έλλειψη κατάρτισης των επιχειρήσεων',
  'LBL_DNB_DISADV_VET_ENT' => 'Δείκτης Βετεράνος Μειονεκτούσας Επιχείρησης',
  'LBL_DNB_DISADV_VET_ENT_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, η επιχείρηση είναι μια μικρή ανησυχία των επιχειρήσεων που ανήκει και ελέγχεται από τους παλαιμάχους, όπου τουλάχιστον το 51% ανήκει ελέγχεται και διαχειρίζεται από βετεράνους',
  'LBL_DNB_DNB_CODE_VALUE' => 'DNB Τιμή Κώδικα',
  'LBL_DNB_DUNS' => 'DUNS',
  'LBL_DNB_DUNSSELF_IND' => 'DUNS Αυτο Αίτηση Δείκτη',
  'LBL_DNB_DUNSSELF_IND_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι ο Αριθμός D-U-N-S γι&#39; αυτό το θέμα δημιουργήθηκε κατόπιν αιτήματος του θέματος',
  'LBL_DNB_DUPLICATE' => 'Αντίγραφο',
  'LBL_DNB_EIGHTA_CRT' => 'Δείκτης Πιστοποιημένος Οχτώ',
  'LBL_DNB_EIGHTA_CRT_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, αυτή η οργάνωση είναι πιστοποιημένη από τη  US Small Business Administration, ως υπότροφος του 8(a) Business Development Program, ένα πρόγραμμα ανάπτυξης επιχειρήσεων που δημιουργήθηκε για να βοηθήσει μικρές μειονεκτούσες επιχειρήσεις που ανταγωνίζονται στην αμερικανική οικονομία και έχουν πρόσβαση στην ομοσπονδιακή αγορά δημοσίων συμβάσεων',
  'LBL_DNB_EMPLOYEE_QUANTITY_GROWTH' => 'Ποσότητα Ανάπτυξης Εργαζομένου',
  'LBL_DNB_EMPTY_PARAM' => 'Άδεια παράμετρος διαβιβάστηκε στο D & Β. Αντίγραφο, ελέγξτε το API',
  'LBL_DNB_EMP_DET' => 'Ανώτερος Υπάλληλος, Λεπτομέρειες',
  'LBL_DNB_EMP_DET_DESC' => 'Λεπτομέρειες των Διευθυντικών (π.χ., Πρόεδρος, Αντιπρόεδρος, Διευθυντές) και οι διευθυντές που είναι υπεύθυνοι για την επιχειρηματική στρατηγική, τη λήψη αποφάσεων και την καθημερινή διαχείριση των εργασιών. Αυτό περιλαμβάνει ονόματα, διευθύνσεις και αριθμούς αναγνώρισης των εντολέων. Ενώ ο Διευθυντής θα είναι συνήθως ένα άτομο σε ορισμένες χώρες που είναι νομικά αποδεκτός για μια οντότητα της εντασσόμενης επιχείρησης να ενεργεί ως Διευθυντής σε άλλη επιχείρηση. Αυτό αποκλείει μετόχους και παρόμοιους ιδιοκτήτες που δεν είναι υπεύθυνοι για τη διαχείριση του οργανισμού, αλλά περιλαμβάνει δικαιούχους και συνεργάτες που, των οποίων οι ιδιοκτήτες, είναι επίσης γενικά οι εντολείς για τη λειτουργία της επιχείρησης. Καταγράφει λεπτομέρειες των εντολέων (π.χ., Πρόεδρος, Αντιπρόεδρος, Διευθυντές) και Διευθυντές που είναι υπεύθυνοι για την επιχειρηματική στρατηγική, τη λήψη αποφάσεων για την καθημερινή διαχείριση των εργασιών. Αυτό περιλαμβάνει ονόματα, διευθύνσεις και αριθμούς αναγνώρισης των εντολέων.  Αυτό περιλαμβάνει ονόματα, διευθύνσεις και αριθμούς αναγνώρισης των εντολέων. Ενώ ο Διευθυντής θα είναι συνήθως ένα άτομο σε ορισμένες χώρες που είναι νομικά αποδεκτός για μια οντότητα της εντασσόμενης επιχείρησης να ενεργεί ως Διευθυντής σε άλλη επιχείρηση. Αυτό αποκλείει μετόχους και παρόμοιους ιδιοκτήτες που δεν είναι υπεύθυνοι για τη διαχείριση του οργανισμού αλλά περιλαμβάνει δικαιούχους και συνεργάτες που, των οποίων οι ιδιοκτήτες, είναι επίσης γενικά οι εντολείς για τη λειτουργία της επιχείρησης.',
  'LBL_DNB_EMP_INF' => 'Πληροφορίες Εργαζομένου',
  'LBL_DNB_EMP_INF_DESC' => 'Ενημέρωση των εργαζομένων για Επιχειρήσεις και Οργανισμούς, όπως αριθμός υπαλλήλων και λεπτομέρειες σχετικά με την κύρια διαχείριση',
  'LBL_DNB_ERROR_CURL_CONNECTION_FAIL' => 'Απέτυχε να συνδεθεί με υποδοχή(host) ή διακομιστή μεσολάβησης(proxy). Παρακαλώ ελέγξτε τις ρυθμίσεις διακομιστή μεσολάβησης.',
  'LBL_DNB_ERROR_CURL_NETWORK_FAIL' => 'Αποτυχία με την παραλαβή του δικτύου δεδομένων.',
  'LBL_DNB_ERROR_CURL_RESOLVE_HOST' => 'Δεν ήταν δυνατή η επίλυση υποδοχής(host). Η δεδομένη απομακρυσμένη υποδοχή, δεν μπόρεσε να επιλυθεί.',
  'LBL_DNB_ERROR_CURL_RESOLVE_PROXY' => 'Δεν ήταν δυνατή η επίλυση μεσολάβησης(proxy). Η δεδομένη υποδοχή μεσολάβησης, δεν μπόρεσε να επιλυθεί. Παρακαλώ ελέγξτε τις ρυθμίσεις του διακομιστή μεσολάβησης.',
  'LBL_DNB_ETHN' => 'Εθνικότητα Ιιδιοκτήτη',
  'LBL_DNB_ETHNICITY_TYPE_TEXT' => 'Εθνότητα Κειμένου',
  'LBL_DNB_ETHN_DESC' => 'Προσδιορίζει μοναδικά την εθνική ταξινόμηση που εφαρμόζεται σε αυτήν την οργάνωση, με βάση την φυλετική, εθνική, ή πολιτιστική ομάδα, που περιγράφει μια πλειοψηφία κυριότητας π.χ, Ασιατικός, Ισπανικός, Αφροαμερικάνος',
  'LBL_DNB_EXPORT_DETAILS_INDICATOR' => 'Εξαγωγή Λεπτομερειών Δείκτη',
  'LBL_DNB_EXP_IND' => 'Εξαγωγή Δείκτη',
  'LBL_DNB_EXP_IND_DESC' => 'Όταν είναι αληθής (καθορισμός σε 1), δείχνει ότι η υποκείμενη εταιρεία εισαγάγει ποσότητα αγαθών σε άλλες χώρες',
  'LBL_DNB_FACSIMILE_NUMBER' => 'FacsimileNumber Αριθμός',
  'LBL_DNB_FAMILY_TREE' => 'D&B: Οικογενειακό Δένδρο',
  'LBL_DNB_FAMILY_TREE_BACK' => 'Επιστροφή Στο D&B Οικογενειακό Δένδρο',
  'LBL_DNB_FAMILY_TREE_DESC' => 'Οικογενειακό Δένδρο από D&B. Απαιτείται D&B συνδρομή.',
  'LBL_DNB_FAMILY_TREE_LOADING' => 'Φόρτωση Οικογενειακού Δένδρου Από D&B',
  'LBL_DNB_FAMILY_TREE_MEMBER_ROLE' => 'Ρόλος Κειμένου Μέλος Οικογενειακού Δένδρου',
  'LBL_DNB_FAMILY_TREE_MEMBER_ROLE_TEXT' => 'Ρόλος Κειμένου Μέλους Οικογενειακού Δένδρου',
  'LBL_DNB_FAX' => 'Φαξ',
  'LBL_DNB_FAX_DESC' => 'Οργάνωση Αριθμός Φαξ',
  'LBL_DNB_FEM_ENT' => 'Δείκτης Γυναικείας Επιχείρησης',
  'LBL_DNB_FEM_ENT_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, η επιχείρηση πιστοποιείται από μια ομοσπονδιακή, πολιτειακή ή τοπική κυβερνητική υπηρεσία και ότι πληρεί όλα τα πρότυπα και τις απαιτήσεις της κυβέρνησης',
  'LBL_DNB_FEM_IND' => 'Γυναίκα που Ανήκει ο Δείκτης',
  'LBL_DNB_FEM_IND_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, αυτή η οργάνωση έχει πιστοποιηθεί ως επιχείρηση που είναι μεγαλύτερη από 50% που ανήκει, και των οποίων η διαχείριση και οι καθημερινές επιχειρηματικές πράξεις ελέγχονται από ένα ή περισσότερα θηλυκά πρόσωπα',
  'LBL_DNB_FILLING_ORGANISATION_NAME' => 'Επωνυμία του Οργανισμού',
  'LBL_DNB_FINANCIAL' => 'D&B: Οικονομικές Πληροφορίες',
  'LBL_DNB_FINANCIALS' => 'Οικονομικά',
  'LBL_DNB_FINANCIAL_DESC' => 'Οικονομικές Πληροφορίες από D&B. Απαιτείται D&B συνδρομή.',
  'LBL_DNB_FINANCIAL_DESCRIPTION' => 'Οικονομική Περιγραφή',
  'LBL_DNB_FINANCIAL_LOADING' => 'Φόρτωση Οικονομικών Από D&B',
  'LBL_DNB_FINANCIAL_LONG_DESC' => 'Αξιολογεί την οικονομική ευρωστία μιας εταιρείας με δεδομένα, όπως όγκους πωλήσεων, καθαρή θέση, περιουσιακών στοιχείων και υποχρεώσεων. Απαιτείται D&B συνδρομή.',
  'LBL_DNB_FINANCIAL_PERIOD' => 'Οικονομική Περίοδο',
  'LBL_DNB_FINANCIAL_RATIO' => 'Οικονομική Αναλογία',
  'LBL_DNB_FIN_COMP_TYPE' => 'Τύπος Εταιρείας',
  'LBL_DNB_FIN_STCK_EXCH' => 'Χρηματιστήριο',
  'LBL_DNB_FIN_STCK_SYM' => 'Σύμβολο Ticker Μετοχής',
  'LBL_DNB_FIN_STMT' => 'Ετήσιες Δηλώσεις Εισοδήματος',
  'LBL_DNB_FOUNDATION_YEAR' => 'Έτος Ίδρυσης',
  'LBL_DNB_FRAN_TYP_TEXT' => 'Τύπος Λειτουργίας Franchise',
  'LBL_DNB_FRAN_TYP_TEXT_DESC' => 'Κείμενο που υποδηλώνει εάν τα δικαιώματα franchise λειτουργούν από μια εταιρεία ή απευθείας από το δικαιοδόχο π.χ., franchisee, δικαιοπάροχος(franchisor)',
  'LBL_DNB_FROM' => 'από',
  'LBL_DNB_GEOGRAPHICAL_NAME' => 'Γεωγραφικής Ακριβείας Κείμενο',
  'LBL_DNB_HIGH_CONF' => 'Υψηλή Αυτοπεποίθηση',
  'LBL_DNB_HISTORY_RATING_TEXT' => 'Κατάταξη Ιστορικού',
  'LBL_DNB_HIST_RAT' => 'Κατάταξη Ιστορικού',
  'LBL_DNB_HIST_RAT_DESC' => 'Κείμενο που καθορίζει αν η D&B έχει όλες τις πληροφορίες που μπορεί να αντανακλούν δυσμενώς σε αυτόν τον οργανισμό, π.χ., σαφές, ελλιπείς, διαχείριση, επιχειρήσεις.',
  'LBL_DNB_HUB_CRT' => 'Ζώνη Άξονα Πιστοποιημένου Δείκτη',
  'LBL_DNB_HUB_CRT_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, αυτή η οργάνωση είναι πιστοποιημένη από τη US Small Business Administration, ως υπότροφος του προγράμματος HUB ζώνη. Μια μικρή επιχείρηση πρέπει να πληρεί όλα τα ακόλουθα κριτήρια να πληρεί τις προϋποθέσεις για το πρόγραμμα HUB ζώνη: αυτό πρέπει να βρίσκεται σε  "ιστορικά υποεκμετάλλευση ζώνη των επιχειρήσεων". Πρέπει να ανήκει και να ελέγχεται από έναν ή περισσότερους πολίτες των ΗΠΑ. Να υπερβαίνει το 35% των εργαζομένων και θα πρέπει να βρίσκονται σε μία HUBZone. Μια HUBZone (ιστορικά υποεκμετάλλευση ζώνη των επιχειρήσεων), είναι μια περιοχή που βρίσκεται σε ένα ή περισσότερα από τα ακόλουθα - α) Μια ειδική απογραφή του συστήματος (όπως ορίζεται στο τμήμα του 42(d)(5)(C)(i)(I),  εσωτερικό εισόδημα Κώδικα του 1986). β) Μια ειδική «μη μητροπολιτική κομητεία» (όπως ορίζεται στο τμήμα 143(k)(2)(B), εσωτερικό εισόδημα Κώδικα του 1986) με ένα διαμέσου εισοδήματος των λιγότερο από το 80% του διάμεσου εισοδήματος νοικοκυριών, κράτους νοικοκυριών ή με ποσοστό ανεργίας, που δεν είναι λιγότερο από 140% του μέσου όρου statewide, και που βασίζεται σε πρόσφατα δεδομένα US Department of Labor. γ) Εδάφη εντός των ορίων του ομοσπονδιακού αναγνωρισμένου καταυλισμού',
  'LBL_DNB_IMPORT' => 'Εισαγωγή',
  'LBL_DNB_IMPORT_DETAILS_' => 'Εισαγωγή Λεπτομερειών',
  'LBL_DNB_IMPORT_DETAILS_INDICATOR' => 'Εισαγωγή Λεπτομερειών Δείκτη',
  'LBL_DNB_IMP_IND' => 'Εισαγωγή Δείκτη',
  'LBL_DNB_IMP_IND_DESC' => 'Όταν είναι αληθής (καθορισμός σε 1), δείχνει ότι η υποκείμενη εταιρεία εισαγάγει ποσότητα αγαθών από άλλες χώρες',
  'LBL_DNB_IN' => 'σε',
  'LBL_DNB_INCORPORATION_YEAR' => 'Ενσωμάτωση Έτους',
  'LBL_DNB_INDUSTRY_CODE' => 'Κώδικας Βιομηχανίας',
  'LBL_DNB_INDUSTRY_CODE_DESCRIPTION' => 'Περιγραφή του Κώδικα Βιομηχανίας',
  'LBL_DNB_INDUSTRY_CODE_DISPLAY_SEQUENCE' => 'Εμφάνιση Ακολουθίας Κωδικός Βιομηχανίας',
  'LBL_DNB_INDUSTRY_INFO' => 'D&B: Πληροφορίες Βιομηχανίας',
  'LBL_DNB_INDUSTRY_INFO_DESC' => 'Πληροφορίες Βιομηχανίας από D&B. Απαιτείται D&B συνδρομή.',
  'LBL_DNB_INDUSTRY_INFO_LONG_DESC' => 'Μείνετε ενημερωμένοι για τις βασικές τάσεις και τις ευκαιρίες μέσα σε 900 τμήματα της βιομηχανίας. Κάθε προφίλ βιομηχανίας περιέχει ανάλυση, στατιστικές και προβλέψεις για να σας βοηθήσει να συμμετάσχετε σε προοπτικές, πελάτες, και να εμβαθύνει τις πελατειακές σχέσεις.',
  'LBL_DNB_IND_CD' => 'Κώδικες Βιομηχανίας',
  'LBL_DNB_IND_CD_DESC' => 'Μια αλφαριθμητική τιμή που προσδιορίζει την επιχειρηματική δραστηριότητα βάσει του καθεστώτος που καθορίζεται από το typeText. Για παράδειγμα, το 1611 αντιπροσωπεύει τον αυτοκινητόδρομο και τη βιομηχανία κατασκευής του δρόμου στο σύστημα των ΗΠΑ SIC (Standard Industrial Classification). Σημείωση Διευκρίνιση: Αυτοί είναι γενικά εξωτερικοί κωδικοί που εκπονούνται από εξωτερικούς επίσημος φορείς, όπως η ΗΠΑ. Γραφείο Διαχείρισης και Προϋπολογισμού (OMB-Office of Management and Budget), αλλά και το D&B μπορεί να έχουν δημιουργήσει επεκτάσεις, να προσδιορίσουν επακριβέστερα μια δραστηριότητα, όπως στην περίπτωση της SIC 2 + 2 (τα τελευταία 4 ψηφία του ένα 8-ψήφιο SIC)',
  'LBL_DNB_IND_CD_HED' => 'Πληροφορίες Βιομηχανίας',
  'LBL_DNB_IND_CD_HED_DESC' => 'Καταγράφει τις επιχειρηματικές δραστηριότητες στις οποίες ένας οργανισμός δραστηριοποιείται χρησιμοποιώντας τυποποιημένα σχεδία όπως Ευρωπαϊκό NACE και κωδικοποίηση U.S. Standard Industry Classifications (SIC). Παραδείγματα δραστηριοτήτων είναι: τυπογραφείο, νομικές υπηρεσίες, φαρμακείο, φύλλο fabricator μεταλλοτεχνίας',
  'LBL_DNB_IND_EMP_CNT' => 'Ατομικός Αριθμός Υπαλλήλων',
  'LBL_DNB_IND_EMP_CNT_DESC' => 'Καταγράφει τρέχοντα δεδομένα εργαζομένων στην ατομική οντότητα. Εάν η οργάνωση έχει χαρακτηρισθεί από D&B ως επιχείρηση',
  'LBL_DNB_IND_INF_LOAD' => 'Φόρτωση Πληρφοριών Βιομηχανίας Από D&B.',
  'LBL_DNB_INF_INF_OVERVIEW' => 'Επισκόπηση',
  'LBL_DNB_INQ_CNT' => 'Καταμέτρηση Συνόλου Ερευνών',
  'LBL_DNB_INQ_CNT_DESC' => 'Ο αριθμός των μοναδικών ερευνών του συνδρομητή, καταχωρείται κατά θέμα κατά τη διάρκεια των τελευταίων 12 μηνών',
  'LBL_DNB_INTERNATIONAL_DIALLING_CODE' => 'Κωδικός Διεθνής Κλήσης',
  'LBL_DNB_INT_DIALLING_CODE' => 'Κωδικός Κλήσης',
  'LBL_DNB_INVALID_MODULE_NAME' => 'Μη έγκυρο όνομα διαβιβάστηκε στο D & Β. Αντίγραφο, ελέγξτε το API',
  'LBL_DNB_IPO_DATE' => 'Ημερομηνία IPO',
  'LBL_DNB_JOB_TITLE_TEXT' => 'Τίτλο Εργασίας',
  'LBL_DNB_KEYWORD_SEARCH_HINT' => 'Κάντε κλικ εδώ, για να αναζητήσετε την εταιρεία, μόνο από την Επωνυμία',
  'LBL_DNB_LAST_UPDATE' => 'Τελευταία Ενημέρωση',
  'LBL_DNB_LAST_UPDATE_DATE' => 'Τελευταία Ημερομηνία Ενημέρωσης',
  'LBL_DNB_LAST_UPD_DATE' => 'Τελευταία Ημερομηνία Ενημέρωσης',
  'LBL_DNB_LAST_UPD_DATE_DESC' => 'Η ημερομηνία κατά την εγγραφή του θέματος ενημερώθηκε τελευταία στο σύστημα D&B',
  'LBL_DNB_LAT' => 'Γεωγραφικό πλάτος',
  'LBL_DNB_LATITUDE_MEASUREMENT' => 'Μέτρηση Γεωγραφικού Πλάτους',
  'LBL_DNB_LAT_DESC' => 'Συντεταγμένες γεωγραφικού πλάτους',
  'LBL_DNB_LINE_OF_BUSINESS' => 'Γραμμή των Επιχειρήσεων',
  'LBL_DNB_LINE_OF_BUSINESS_DESCRIPTION' => 'Γραμμή της Περιγραφής των Επιχειρήσεων',
  'LBL_DNB_LITE_COMPANY_INFO' => 'D&B: Πληροφορίες Εταιρείας - Τίτλος',
  'LBL_DNB_LITE_COMPANY_INFO_DESC' => 'Πληροφορίες Lite Εταιρείας Από D&B. Απαιτείται D&B συνδρομή.',
  'LBL_DNB_LITE_COMPANY_INFO_LOADING' => 'Φόρτωση Πληροφοριών Εταιρείας Lite D&B...',
  'LBL_DNB_LOB' => 'Γραμμή των Επιχειρήσεων',
  'LBL_DNB_LOB_DESC' => 'Καταγράφει την αναλυτική περιγραφή των εργασιών που συνεχίστηκε από μια επιχείρηση',
  'LBL_DNB_LOC' => 'Τοποθεσία',
  'LBL_DNB_LOCATION' => 'Τοποθεσία',
  'LBL_DNB_LOCATION_TYPE' => 'Τύπος Τοποθεσίας',
  'LBL_DNB_LOCATION_TYPE_DESC' => 'Κείμενο που περιγράφει το μέρος που το Θέμα παίζει ως μέλος μιας ιδιοκτησίας δομημένη σε οικογενειακό δέντρο, π.χ, υποκατάστηµα, διαίρεση, ένα γονέα, έδρα, θυγατρική, παγκόσμια ultimate, εγχώρια απόλυτη.',
  'LBL_DNB_LOC_DESC' => 'Καταγράφει τις λεπτομέρειες της διεύθυνσης για ένα θέμα. Μια διεύθυνση είναι ο προσδιορισμός ενός τόπου όπου ένα θέμα μπορεί να βρεθεί ή να επιτρέπεται να επικοινωνεί',
  'LBL_DNB_LONG' => 'Γεωγραφικό μήκος',
  'LBL_DNB_LONGITUDE_MEASUREMENT' => 'Μέτρηση Γεωγραφικού Μήκους',
  'LBL_DNB_LONG_DESC' => 'Συντεταγμένες γεωγραφικού μήκους',
  'LBL_DNB_LOW_CONF' => 'Χαμηλήα Αυτοπεποίθηση',
  'LBL_DNB_LS_IND' => 'Δείκτης Πλεονάσματος Εργασίας',
  'LBL_DNB_LS_IND_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι αυτή η οργάνωση έχει πιστοποιηθεί ως μια επιχείρηση που δραστηριοποιείται στο χώρο εργασίας με πλεόνασμα. Ένα πλεόνασμα στο χώρο εργασίας είναι μια γεωγραφική περιοχή που προσδιορίζεται από το Υπουργείο εργασίας, ως χώρος συγκέντρωσης της ανεργίας ή της υποαπασχόλησης ή μιας περιοχής της υπερεργασίας',
  'LBL_DNB_MAIL_CITY' => 'Πόλη Αλληλογραφίας',
  'LBL_DNB_MAIL_CTRY_CD' => 'Κώδικας Χώρας Αλληλογραφίας',
  'LBL_DNB_MAIL_STATE_ABBR' => 'Έδαφος Abbr Αλληλογραφίας',
  'LBL_DNB_MAIL_STREET' => 'Γραμμή, Οδός Αλληλογραφίας',
  'LBL_DNB_MAIL_ZIP' => 'Ταχυδρομικός Κώδικας Αλληλογραφίας',
  'LBL_DNB_MARKETABILITY_INDICATOR' => 'Δείκτης Εμπορευσιμότητας',
  'LBL_DNB_MARKET_IND' => 'Δείκτης Εμπορευσιμότητας',
  'LBL_DNB_MARKET_IND_DESC' => 'Όταν είναι αληθής (σε θέση 1), αυτό δείχνει ότι η εγγραφή πληρή του κανόνες εμπορίου του D&B',
  'LBL_DNB_MATCH_GRADE' => 'Αντιστοιχία Βαθμού',
  'LBL_DNB_MEASUREMENT_RELIABILITY_TEXT' => 'Μέτρηση Αξιοπιστίας Κείμενου',
  'LBL_DNB_MEASUREMENT_UNIT_TEXT' => 'Μέτρηση Μονάδας Κειμένου',
  'LBL_DNB_MED_CONF' => 'Μέτρια Αυτοπεποίθηση',
  'LBL_DNB_METROPOLITAN_STAT_CODE' => 'Μητροπολιτική Στατιστική Περιοχή ΗΠΑ Απογραφή Κώδικα',
  'LBL_DNB_MILLION' => 'M',
  'LBL_DNB_MINORITY_OWNER_INDICATOR' => 'Μειονότητα που Ανήκει',
  'LBL_DNB_MIN_COLL' => 'Δείκτης Μειονότητας Κολεγίου',
  'LBL_DNB_MIN_COLL_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, αυτή η οργάνωση είναι ένα κολέγιο ή πανεπιστήμιο όπου το προφίλ της πλειοψηφίας των φοιτητών είναι εθνοτική μειονότητα. Για παράδειγμα, εάν το μέγιστο ποσοστό των μαθητών σε ένα κολέγιο ή πανεπιστήμιο είναι από μαύρη εθνικότητα, αυτό θα ήταν μια «Μειονότητα Κολεγίου» με μαύρη εθνικότητα',
  'LBL_DNB_MIN_ENT' => 'Δείκτης Μειοψηφίας Επιχείρησης',
  'LBL_DNB_MIN_ENT_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, η επιχείρηση πιστοποιείται από ένα ομοσπονδιακό, κρατικό ή τοπικό κυβερνητικό πρακτορείο, μέσα από μια εφαρμογή, ότι πληρεί όλα τα πρότυπα και τις απαιτήσεις της κυβέρνησης',
  'LBL_DNB_MIN_IND' => 'Μειονότητα που ανήκει ο Δείκτης',
  'LBL_DNB_MIN_IND_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, αυτή η οργάνωση έχει πιστοποιηθεί ως επιχείρηση που είναι μεγαλύτερη από 50% που ανήκει, και των οποίων η διαχείριση και οι καθημερινές επιχειρηματικές πράξεις ελέγχονται από ένα ή περισσότερα μέλη της ομάδας μειοψηφίας',
  'LBL_DNB_MORE_SRCH_RES' => 'Εμφάνιση περισσότερων Αποτελεσμάτων Αναζήτησης D&B',
  'LBL_DNB_NAICS' => 'NAICS',
  'LBL_DNB_NAME' => 'Όνομα',
  'LBL_DNB_NEWS' => 'Νέα',
  'LBL_DNB_NEWS_AND_MEDIA' => 'D&B: Ειδήσεις',
  'LBL_DNB_NEWS_AND_MEDIA_DESC' => 'Φέρνει Ειδήσεις Από D&B Υπηρεσίες. Απαιτείται D&B συνδρομή.',
  'LBL_DNB_NEWS_AND_MEDIA_LOADING' => 'Φόρτωση Ειδήσεων Από D&B',
  'LBL_DNB_NEWS_AND_MEDIA_LONG_DESC' => 'Λάβετε την πλήρη άποψη του πελάτη σας με D&B Ειδήσεις και Κοινωνικά! Χρησιμοποιήστε τη δύναμη της διαδικασίας DUNSright, για να εξασφαλίσετε ότι τραβάτε από τις κατάλληλες πηγές ειδήσεων και τις κοινωνικές λαβές. Απαιτείται D&B Συνδρομή.',
  'LBL_DNB_NEWS_AND_MEDIA_MORE' => 'Διαβάστε Περισσότερα',
  'LBL_DNB_NEWS_FACEBOOK' => 'Facebook',
  'LBL_DNB_NEWS_TWITTER' => 'Twitter',
  'LBL_DNB_NEWS_WIKI' => 'Wikipedia',
  'LBL_DNB_NEWS_YOUTUBE' => 'YouTube',
  'LBL_DNB_NONMARK_REAS_TXT' => 'Μη Εμπορεύσιμα Λόγο Κειμένου',
  'LBL_DNB_NONMARK_REAS_TXT_DESC' => 'Το Κείμενο προσδιορίζει το λόγο για τον οποίο τα δεδομένα του θέματος δεν θεωρούνται ως εμπορεύσιμα από το D&B',
  'LBL_DNB_NON_MARKETABILITY_INDICATOR' => 'Κανένας Δείκτης Εμπορευσιμότητας',
  'LBL_DNB_NOT_CONFIGURED' => 'D&B Connector δεν έχει ρυθμιστεί. Ρυθμίστε τις παραμέτρους της σύνδεσης.',
  'LBL_DNB_NO_DATA' => 'Δεν υπάρχουν διαθέσιμα δεδομένα',
  'LBL_DNB_NO_DUNS' => 'Κανένα Προσδιορισμένο DUNS',
  'LBL_DNB_NO_DUNS_FIELD' => 'Προειδοποίηση: Το πεδίο DUNS επί του παρόντος δεν συμπεριλαμβάνεται στην εγγραφή - προβολή διάταξης. Επικοινωνήστε με τον διαχειριστή σας, για να το προσθέσει.',
  'LBL_DNB_NO_INDUSTRY' => 'Κανένας Συνδεδεμένος Κωδικός Βιομηχανίας',
  'LBL_DNB_NO_SIC_FIELD' => 'Προειδοποίηση: Το πεδίο SIC επί του παρόντος δεν συμπεριλαμβάνεται στην εγγραφή - προβολή διάταξης. Επικοινωνήστε με τον διαχειριστή σας, για να το προσθέσει.',
  'LBL_DNB_OPERATING_STATUS_TEXT' => 'Κατάσταση Λειτουργίας Κειμένου',
  'LBL_DNB_OPERL_STA_TEXT' => 'Κατάσταση Λειτουργίας',
  'LBL_DNB_OPERL_STA_TEXT_DESC' => 'Κείμενο που περιγράφει τη λειτουργική κατάσταση αυτού του οργανισμού / την κατάσταση συναλλαγών, π.χ., ενεργός, παύση λειτουργίας, αδρανής.',
  'LBL_DNB_OPER_TEXT' => 'Λειτουργίες Κειμένου',
  'LBL_DNB_OPER_TEXT_DESC' => 'Κείμενο που περιγράφει τις λεπτομερείς πληροφορίες σχετικά με τη λειτουργία των επιχειρήσεων',
  'LBL_DNB_ORGANISATION_IDENTIFICATION_NUMBER' => 'Αριθμός Αναγνώρισης Οργάνωσης',
  'LBL_DNB_ORGANISATION_IDENTIFICATION_START_DATE' => 'Ημερομηνία Έναρξης Οργανισμού Αναγνώρισης',
  'LBL_DNB_ORGANIZATION_DISPLAY_SEQUENCE' => 'Εμφάνιση Ακολουθίας Οργάνωσης',
  'LBL_DNB_ORGANIZATION_FILLING_NAME' => 'Πλήρες Όνομα Οργανισμού',
  'LBL_DNB_ORGANIZATION_IDENTIFICATION_NUMBER' => 'Αριθμός Αναγνώρισης Οργανισμού',
  'LBL_DNB_ORGANIZATION_NAME' => 'Όνομα Οργανισμού',
  'LBL_DNB_ORGANIZATION_START_DATE' => 'Ημερομηνία Έναρξης Οργανισμού',
  'LBL_DNB_ORGS_STRT_YEAR' => 'Έτος Έναρξης Οργανισμού',
  'LBL_DNB_ORGS_STRT_YEAR_DESC' => 'Το έτος κατά το οποίο οι ενέργειες δεσμεύθηκαν από τον οργανισμό',
  'LBL_DNB_ORG_DET' => 'Λαεπτομέρειες Οργανισμού',
  'LBL_DNB_ORG_DET_DESC' => 'Καταγράφει σημαντικές πληροφορίες σχετικά με μια οργάνωση η οποία μπορεί να ποικίλλει διαχρονικά',
  'LBL_DNB_ORG_ID' => 'Αριθμός Αναγνώρισης Οργανισμού',
  'LBL_DNB_ORG_ID_DESC' => 'Ένας αριθμός που αποδίδεται από ένα εξωτερικό οργανισμό ή από D&B που είτε μεμονωμένα προσδιορίζει ή βοηθά να προσδιορίσει έναν οργανισμό. Ο εκδίδων οργανισμός μπορεί να είναι μια Αρχή Καταχώρισης, Κυβερνητική Υπηρεσία ή Εμπορική Επιχείρηση παράδειγμα: Εμπορικό Επιμελητήριο, ΦΠΑ, κ.λ.π.',
  'LBL_DNB_ORG_NAME' => 'Όνομα Οργανισμού',
  'LBL_DNB_ORG_NAME_DESC' => 'Καταγράφει τα διαφορετικά ονόματα του οργανισμού, με τα οποία είναι γνωστός',
  'LBL_DNB_OTHER' => 'Άλλο',
  'LBL_DNB_OTHER_FIELDS' => 'άλλα πεδία',
  'LBL_DNB_OUTOFDATE' => 'Άκυρο',
  'LBL_DNB_OUTOFDATE_MSG' => 'Οι πληροφορίες της Εταιρείας είναι Άκυρες',
  'LBL_DNB_OVERRIDE_SUCCESS' => 'D&B Δεδομένα Εισήχθησαν με Επιτυχία',
  'LBL_DNB_OVERVIEW' => 'Επισκόπηση',
  'LBL_DNB_OWNERSHIP_TYPE' => 'Τύπος Ιδιοκτησίας',
  'LBL_DNB_PAGESZ' => 'Μέγεθος Σελίδας',
  'LBL_DNB_PHONE' => 'Τηλέφωνο',
  'LBL_DNB_PHONE_DESC' => 'Οργάνωση Αριθμός Τηλεφώνου',
  'LBL_DNB_PREMISES_AREA_MEASUREMENT' => 'Μέτρηση Περιοχής Εγκαταστάσεων',
  'LBL_DNB_PREMIUM' => 'Premium',
  'LBL_DNB_PREMIUM_COMPANY_INFO' => 'D&B: Πληροφορίες Εταιρείας - Premium',
  'LBL_DNB_PREMIUM_COMPANY_INFO_DESC' => 'D&B Πληροφορίες για την Εταιρία Premium. Απαιτείται D&B συνδρομή.',
  'LBL_DNB_PREMIUM_COMPANY_INFO_LOADING' => 'Φορτώνει Πληροφορίες για την Εταιρία Premium Από D&B ...',
  'LBL_DNB_PRIMARY' => 'Βασική',
  'LBL_DNB_PRIMARY_ADDRESS_POSTAL_CODE' => 'Κύρια Διεύθυνση, Τ.Κ',
  'LBL_DNB_PRIMARY_TOWN' => 'Βασική Πόλη',
  'LBL_DNB_PRIMARY_TOWN_NAME' => 'Κύριο όνομα Πόλης',
  'LBL_DNB_PRIM_CEN_CD' => 'Απογραφή Κώδικα',
  'LBL_DNB_PRIM_CEN_CD_DESC' => 'Μια Γεωγραφική Περιοχή με σχετικά υψηλή πυκνότητα πληθυσμού στον πυρήνα του, και τους στενούς οικονομικούς δεσμούς με την περιοχή',
  'LBL_DNB_PRIM_CITY' => 'Κύρια Πόλη',
  'LBL_DNB_PRIM_CITY_DESC' => 'Το όνομα της πόλης ή της κωμόπολης, αναγνωρίζεται από την Ταχυδρομική Αρχή για τη διανομή της αλληλογραφίας',
  'LBL_DNB_PRIM_COUNTY_NAME' => 'Όνομα Χώρας',
  'LBL_DNB_PRIM_COUNTY_NAME_DESC' => 'Όνομα Χώρας, π.χ. Michigan',
  'LBL_DNB_PRIM_CTRY_CD' => 'Κύριος Κώδικας Χώρας',
  'LBL_DNB_PRIM_CTRY_CD_DESC' => 'Ο κωδικός δύο γραμμάτων της χώρας, ορίζεται στο ISO 3166-1, σχέδιο που δημοσιεύθηκε από διεθνή οργανισμό τυποποίησης (ISO), αναγνωριστικό της χώρας για αυτή τη διεύθυνση.',
  'LBL_DNB_PRIM_CTRY_GRP' => 'Γκρουπ Χώρας',
  'LBL_DNB_PRIM_CTRY_GRP_DESC' => 'Αναγνωριστικό Χώρας π.χ Βόρεια Αμερική',
  'LBL_DNB_PRIM_NAME' => 'Όνομα',
  'LBL_DNB_PRIM_NAME_DESC' => 'Κείμενο που καταγράφει ένα όνομα αυτής της οργάνωσης',
  'LBL_DNB_PRIM_STATE' => 'Κύριο Έδαφος',
  'LBL_DNB_PRIM_STATE_ABBR' => 'Κύριο Έδαφος Abbr',
  'LBL_DNB_PRIM_STATE_ABBR_DESC' => 'Η συντομευμένη ονομασία της περιοχής που τοπικά διέπεται, αποτελεί μέρος ενός έθνους',
  'LBL_DNB_PRIM_STATE_DESC' => 'Το όνομα της τοπικής περιοχής, αποτελεί μέρος ενός έθνους',
  'LBL_DNB_PRIM_STREET' => 'Γραμμή, Κύρια Οδός',
  'LBL_DNB_PRIM_STREET_DESC' => 'Το κείμενο καταγράφει τα στοιχεία της διεύθυνσης του δρόμου όπως θα παρουσιαστεί σε μια ετικέτα διεύθυνσης',
  'LBL_DNB_PRIM_ZIP' => 'Κύριος Ταχυδρομικός Κώδικας',
  'LBL_DNB_PRIM_ZIP_DESC' => 'Ένα αναγνωριστικό που χρησιμοποιείται από την Ταχυδρομική Αρχή για τον εντοπισμό μιας ιδιαίτερης γεωγραφικής θέσης',
  'LBL_DNB_PRINCIPAL_IDENTIFICATION_NUMBER' => 'Κύριος Αριθμός Αναγνώρισης',
  'LBL_DNB_RATING' => 'Αξιολόγηση',
  'LBL_DNB_REC_MARK_ANALYSIS' => 'Πρόσφατη Ανάλυση Αγοράς',
  'LBL_DNB_REGISTERED_ADDRESS_INDICATOR' => 'Εγγεγραμμένη Διεύθυνση Δείκτη',
  'LBL_DNB_REGISTRATION_ISSUER_NAME' => 'Όνομα Εκδότη Εγγραφής',
  'LBL_DNB_REGISTRATION_LOCATION_POSTAL_CODE' => 'Τ.Κ Τοποθεσίας Εγγραφής',
  'LBL_DNB_REG_DET_HED' => 'Λεπτομέρειες Εγγεγραμμένων',
  'LBL_DNB_REG_DET_HED_DESC' => 'Καταγράφει το συνταγματικό καθεστώς ενός ατόμου, όπως ορίζεται σύμφωνα με τους νόμους της χώρας π.χ. Εταιρεία Περιορισμένης Ευθύνης, Εταιρική Σχέση, Συνεργατική Κοινωνία και το Απόθεμα Ιδίων Κεφαλαίων ή τη μετοχική δομή που εργάζονται σε μία επιχείρηση, ανάλογα με τη νομική μορφή και τους κανόνες της ενσωμάτωσης. Οι ιδιοκτήτες του αποθέματος ή των μετοχών είναι οι ιδιοκτήτες της επιχείρησης.',
  'LBL_DNB_RELIABILITY_TEXT' => 'Αξιοπιστία Κειμένου',
  'LBL_DNB_RESIDENTIAL_ADDRESS_INDICATOR' => 'Διεύθυνση Κατοικίας του Δείκτη',
  'LBL_DNB_RFR' => 'Ανανέωση',
  'LBL_DNB_RFR_HINT' => 'Ανανέωση Τώρα',
  'LBL_DNB_RFR_LOADING' => 'D&B Ανανέωση Ελέγχου σε Εξέλιξη',
  'LBL_DNB_RISK_CLASS' => 'Κατηγορία Κινδύνου',
  'LBL_DNB_SALES' => 'Πωλήσεις',
  'LBL_DNB_SALES_REVENUE' => 'Έσοδα Πωλήσεων',
  'LBL_DNB_SALES_REVENUE_AMOUNT' => 'Ποσό Εσόδων Πωλήσεων',
  'LBL_DNB_SEARCH_LOADING' => 'Αναζήτηση D&B ...',
  'LBL_DNB_SELF_REQUEST_INDICATOR' => 'Αίτηση ιδίου Δείκτη',
  'LBL_DNB_SENIOR_PRINCIPAL' => 'Ανώτερο Μέλος',
  'LBL_DNB_SHOW_LESS' => 'Εμφάνιση Λιγότερων',
  'LBL_DNB_SHOW_MORE' => 'Εμφάνιση Περισσότερων',
  'LBL_DNB_SIC' => 'SIC Κώδικας',
  'LBL_DNB_SLCT_CTRY' => 'Επιλογή Χώρας',
  'LBL_DNB_SLCT_STATE' => 'Επιλογή Περιοχής',
  'LBL_DNB_SMALL_BUSINESS_INDICATOR' => 'Μικρές Επιχειρήσεις',
  'LBL_DNB_SMBDISADV_IND' => 'Μικρές Επιχειρήσεις σε Μειονεκτική Θέση',
  'LBL_DNB_SMBDISADV_IND_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, αυτή η οργάνωση έχει πιστοποιηθεί ως επιχείρηση που είναι μεγαλύτερη από 50% που ανήκει, και των οποίων η διαχείριση και οι καθημερινές επιχειρηματικές πράξεις ελέγχονται από κοινωνικά και οικονομικά μειονεκτούντα άτομα',
  'LBL_DNB_SMB_CERT' => 'Δείκτης Πιστοποιημένων Μικρών Επιχειρήσεων',
  'LBL_DNB_SMB_CERT_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, η επιχείρηση είναι μικρή, πιστοποιημένη από μια ομοσπονδιακή, πολιτειακή ή τοπική κρατική υπηρεσία ή οργάνωση, καθώς πληρεί όλα τα πρότυπα της κυβέρνησης που απονέμουν την επιλεξιμότητα',
  'LBL_DNB_SMB_IND' => 'Δείκτης Μικρών Επιχειρήσεων',
  'LBL_DNB_SMB_IND_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, αυτή η οργάνωση έχει πιστοποιηθεί ως μια μικρή επιχείρηση. Μια μικρή επιχείρηση είναι μια οντότητα που συνήθως ανήκει και λειτουργεί από ιδιώτη, με ένα μικρό αριθμό εργαζομένων και σχετικά χαμηλό όγκο των πωλήσεων. Οι μικρές επιχειρήσεις είναι κανονικά ιδιόκτητες εταιρείες, κοινοπραξίες ή ατομικές. Ο νομικός ορισμός των μικρών επιχειρήσεων ποικίλλει ανά χώρα και ανά κλάδο',
  'LBL_DNB_SOCIAL' => 'Social Media',
  'LBL_DNB_SOCIO_IND' => 'Κοινωνικοοικονομική Ταυτοποίηση',
  'LBL_DNB_SOCIO_INDICATOR' => 'Κοινωνικός Οικονομικός Δείκτης',
  'LBL_DNB_SOCIO_IND_DESC' => 'Καταγράφει πληροφορίες σχετικά με την κατηγοριοποίηση των υποκειμένων σε ομάδες, Κοινωνικά Οικονομικά ή Στατιστικά',
  'LBL_DNB_SRCH' => 'Αναζήτηση',
  'LBL_DNB_SRCH_LOAD' => 'Αναζήτηση D&B',
  'LBL_DNB_SRCH_RES' => 'D&B: Αναζήτηση Αποτελεσμάτων',
  'LBL_DNB_STAND_ALONE_ORGANIZATION_INDICATOR' => 'Δείκτης Αυτόνομου Οργανισμού',
  'LBL_DNB_STATE' => 'Περιοχή / Επαρχία / Περιφέρεια',
  'LBL_DNB_STD_COMPANY_INFO' => 'D&B: Πληροφορίες Εταιρείας - Πρότυπο',
  'LBL_DNB_STD_COMPANY_INFO_DESC' => 'Πληροφοριες Πρότυπης Εταιρείας Από D & Β. Απαιτείται D&B συνδρομή.',
  'LBL_DNB_STD_COMPANY_INFO_LOADING' => 'Φόρτωση Πληροφοριών Πρότυπης Εταιρείας Από D & Β...',
  'LBL_DNB_STOCK_EXCHANGE_COUNTRY_ISO_ALPHA_CODE' => 'Χρηματιστήριο Χώρας ISO Άλφα Κώδικα',
  'LBL_DNB_STOCK_EXCHANGE_ISO_CODE' => 'Κωδικός ISO Χρηματιστηρίου',
  'LBL_DNB_STOCK_EXCHANGE_NAME' => 'Όνομα Χρηματιστηρίου',
  'LBL_DNB_STOCK_EXCHANGE_TICKER_NAME' => 'Ticker Όνομα Χρηματιστηρίου',
  'LBL_DNB_STREET_ADDRESSLINE' => 'Οδός Addressline',
  'LBL_DNB_STREET_ADDRESS_LINE_TEXT' => 'Γραμμή Κειμένου Κύριας Διεύθυνσης',
  'LBL_DNB_SUBAGENT_INDICATOR' => 'Δείκτης Συνεργάτη',
  'LBL_DNB_SUBJ_HEADER' => 'Θέμα Κεφαλίδας',
  'LBL_DNB_SUBJ_HEADER_DESC' => 'Καταγράφει πληροφορίες υψηλού επιπέδου σχετικά με το θέμα, όπως η κύρια γλώσσα του θέματος και το πρωτογενή νόμισμα στο οποίο αυτό το θέμα συναλλάσσεται. Όταν το θέμα είναι ένας οργανισμός, μπορεί επίσης να περιλαμβάνει στοιχεία όπως DUNS Αριθμό',
  'LBL_DNB_SUMMARY' => 'Περίληψη',
  'LBL_DNB_SVC_DISAB_VET' => 'Απενεργοποιημένος Βετεράνος Δείκτης Υπηρεσίας',
  'LBL_DNB_SVC_DISAB_VET_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, η επιχείρηση τουλάχιστον το 51% ανήκει σε ένα ή περισσότερους Βετεράνους με αναπηρία που είναι υπηρεσία που συνδέεται. Ο όρος "Συνδεδεμένη Υπηρεσία" σημαίνει, σε σχέση με αναπηρία ή θάνατο, ότι η εν λόγω αναπηρία γεννάται ή επιδεινώνεται, στη γραμμή του καθήκοντος στην ενεργό στρατιωτική, ναυτική ή αεροπορικών υπηρεσία',
  'LBL_DNB_SVC_ERR' => 'D&B Σφάλμα Υπηρεσίας',
  'LBL_DNB_TELECOMM' => 'Τηλεπικοινωνιών',
  'LBL_DNB_TELECOMMUNICATION_NUMBER' => 'Αριθμός των Τηλεπικοινωνιών',
  'LBL_DNB_TELECOMM_DESC' => 'Καταγράφει πληροφορίες για διευθύνσεις τηλεπικοινωνιών που χρησιμοποιούνται ανά θέμα για εξωτερικούς σκοπούς επικοινωνίας των διαφόρων τρόπων. Οι τρόποι επικοινωνίας περιλαμβάνουν τηλέφωνο, φαξ, email, διεύθυνση ιστοσελίδας.',
  'LBL_DNB_TERRITORY_ABBREVATIVE_NAME' => 'Όνομα Εδάφους Abbrevative',
  'LBL_DNB_TERRITORY_ABBREVIATED_NAME' => 'Συντετμημένο Όνομα Εδάφους',
  'LBL_DNB_TERRITORY_OFFICIAL_NAME' => 'Επίσημη Ονομασία του Εδάφους',
  'LBL_DNB_TF_DUNS' => 'Μεταφορά DUNSNumber',
  'LBL_DNB_TOTAL_EMPLOYEE_QUANTITY' => 'Συνολική ποσότητα των Εργαζομένων',
  'LBL_DNB_TOTAL_ENQUIERY_COUNT' => 'Άθροισμα Συνόλου ΄Ερευνας',
  'LBL_DNB_TOTAL_INQUIRY_COUNT' => 'Συνολικό Άθροισμα Έρευνας',
  'LBL_DNB_TPA' => 'Εκτίμηση Τρίτων',
  'LBL_DNB_TPA_DESC' => 'Αξιολογήσεις/γνώμες που έχουν αυτό το θέμα από μια οντότητα εκτός από το D&Β παγκόσμιο δίκτυο Worldwide Network (WWN)',
  'LBL_DNB_TRADE_STYLE_NAME' => 'Στυλ Επωνυμίας',
  'LBL_DNB_TRANSFERRED_FROM_DUNS_NUMBER' => 'Μεταφέρονται Από Αριθμό DUNS',
  'LBL_DNB_TRD_NAME' => 'Εμπορική Επωνυμία',
  'LBL_DNB_TRD_NAME_DESC' => 'Καταγραφή ενός ονόματος που εμπορεύεται μια οργάνωση στο πλαίσιο για εμπορικούς σκοπούς',
  'LBL_DNB_TRNS_DUNS' => 'Μεταφέρονται DUNS Αριθμοί',
  'LBL_DNB_TRNS_DUNS_DESC' => 'Αυτό είναι ο αριθμός D-U-N-S του θέματος που διαγράφονται από τη βάση δεδομένων υποδοχής',
  'LBL_DNB_UNDELIVERABLE_INDICATOR' => 'Μη Παραδοτέος Δείκτης',
  'LBL_DNB_UNKNOWN_ERROR' => 'Άγνωστο σφάλμα. Ελέγξτε τα αρχεία καταγραφής για περισσότερες λεπτομέρειες.',
  'LBL_DNB_UNREACHABLE_INDICATOR' => 'Άπιαστος Δείκτης',
  'LBL_DNB_UPLOAD' => 'Φορτώνει',
  'LBL_DNB_UPTODATE' => 'Έγκυρο',
  'LBL_DNB_UPTODATE_MSG' => 'Οι πληροφορίες της Εταιρείας είναι Έγκυρες',
  'LBL_DNB_URL' => 'Διεύθυνση URL',
  'LBL_DNB_USPAT_SCR' => 'ΗΠΑ Patriot Act Συμμόρφωση Βαθμολογία Επικινδυνότητας',
  'LBL_DNB_USPAT_SCR_DESC' => 'Ο δείκτης κινδύνου συμμόρφωσης, προορίζεται για να παρέχει ένα πρόσθετο εργαλείο για την άσκηση του κινδύνου με βάση την αξιολόγηση της συμμόρφωσης των εμπορικών εταίρων οργανισμών υπό το νόμο Αμερικανικων ΠΑΤΡΙΩΤΩΝ. Το ευρετήριο είναι μια αριθμητική τιμή, που αντιπροσωπεύει μια συνάθροιση του σταθμισμένου κινδύνου (σημαίες), που αποδίδεται μέσα από ένα ιδιόκτητους κανόνες με βάση αλγόριθμου. Οι τιμές κυμαίνονται σε μορφή 0 έως 255 ~. Οι υψηλότερες τιμές δείκτη αντιπροσωπεύουν ένα υψηλότερο επίπεδο κινδύνου',
  'LBL_DNB_VET_ENT' => 'Δείκτης Βετεράνος Επιχείρησης',
  'LBL_DNB_VET_ENT_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, η επιχείρηση που εμπίπτει SBA κατευθυντήριες γραμμές, Μικρές Επιχειρήσεις Act (PL 85-536), η οποία όπως τροποποιήθηκε, ορίζει: μικρές ανησυχίες των επιχειρήσεων που ανήκουν και ελέγχονται από τους παλαιμάχους λιγότερο από το 51%, που ανήκουν σε έναν ή περισσότερους Βετεράνους, και στην περίπτωση μιας επιχείρησης που ανήκουν στο δημόσιο όχι λιγότερο από το 51% των μετοχών που ανήκουν σε έναν ή περισσότερους Βετεράνους.',
  'LBL_DNB_VET_IND' => 'Δείκτης Βετεράνος',
  'LBL_DNB_VET_IND_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, αυτή η οργάνωση έχει πιστοποιηθεί ως επιχείρηση που είναι μεγαλύτερη από το 50% που ανήκει, και των οποίων η διαχείριση και οι καθημερινές επιχειρηματικές πράξεις ελέγχονται από, έναν ή περισσότερους Βετεράνους. Ένας Βετεράνος αναφέρεται σε ένα πρόσωπο που υπηρέτησε στο ενεργό στρατιωτικό, Ναυτικό, ή Αεροπορία, και που απορρίφθηκαν ή κυκλοφόρησαν υπό όρους διαφορετικούς από επαίσχυντα.',
  'LBL_DNB_VIET_VET' => 'Βιετνάμ Βετεράνος Δείκτης',
  'LBL_DNB_VIET_VET_DESC' => 'Η τιμή ΑΛΗΘΗΣ δηλώνει ότι, η επιχείρηση είναι τουλάχιστον 51%, ανήκει σε έναν ή περισσότερους Βετεράνους του Βιετνάμ, που υπηρέτησαν μεταξύ 1/1/59 και 5/7/75 και έχουν τον έλεγχο και λειτουργεί η επιχείρηση. Ελέγχος σε αυτό το πλαίσιο σημαίνει την άσκηση της εξουσίας για τη λήψη αποφάσεων πολιτικής, για να συμμετέχουν ενεργά στη διαχείριση της επιχείρησης ημέρα με την ημέρα.',
  'LBL_DNB_VIEW_ACCT' => 'Προβολή Λογαριασμών',
  'LBL_DNB_WEBPAGE' => 'Ιστοσελίδα',
  'LBL_DNB_WEBPAGE_ADDRESS' => 'Διεύθυνση Ιστοσελίδας',
  'LBL_DNB_WEBPAGE_DESC' => 'Οργάνωση Ιστοσελίδα',
  'LBL_DNB_WITH' => 'με',
  'LBL_DOCUMENTS' => 'Έγγραφα',
  'LBL_DONE_BUTTON_KEY' => 'X',
  'LBL_DONE_BUTTON_LABEL' => 'Έτοιμο',
  'LBL_DONE_BUTTON_TITLE' => 'Έτοιμο',
  'LBL_DROPDOWN_LIST_ALL' => 'Όλες',
  'LBL_DROP_HERE' => '[Πτώση Εδώ]',
  'LBL_DST_NEEDS_FIXIN' => 'Η εφαρμογή απαιτεί μια επιδιόρθωση Θερινής Ώρας, για να εφαρμοστεί. Παρακαλώ πηγαίνετε στον Σύνδεσμο <a href="index.php?module=Administration&action=DstFix">Επιδιόρθωση</a> στην κονσόλα Διαχειριστή και εφαρμόστε την επιδιόρθωση της Θερινής Ώρας.',
  'LBL_DUPECHECK_FILTER_DEFAULT' => 'Όλα τα αντίγραφα',
  'LBL_DUPLICATES_FOUND' => '{{duplicateCount}} βρέθηκαν αντίγραφα.',
  'LBL_DUPLICATE_BUTTON' => 'Αντίγραφο',
  'LBL_DUPLICATE_BUTTON_KEY' => 'u',
  'LBL_DUPLICATE_BUTTON_LABEL' => 'Αντίγραφο',
  'LBL_DUPLICATE_BUTTON_TITLE' => 'Αντίγραφο',
  'LBL_DUP_MERGE' => 'Εύρεση Αντιγράφων',
  'LBL_DURATION_DAY' => 'ημέρα',
  'LBL_DURATION_DAYS' => 'ημέρες',
  'LBL_DURATION_HOUR' => 'ώρα',
  'LBL_DURATION_HOURS' => 'ώρες',
  'LBL_DURATION_MINUTE' => 'λεπτό',
  'LBL_DURATION_MINUTES' => 'λεπτά',
  'LBL_DURATION_SECONDS' => 'δευτερόλεπτα',
  'LBL_EDIT' => 'Επεξεργασία {{{this}}}',
  'LBL_EDITINLINE' => 'Επεξεργασία',
  'LBL_EDITVIEW' => 'Επεξεργασία',
  'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Επεξεργασία Ως Νέο',
  'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Επεξεργασία Ως Νέο',
  'LBL_EDIT_BUTTON' => 'Επεξεργασία',
  'LBL_EDIT_BUTTON_KEY' => 'i',
  'LBL_EDIT_BUTTON_LABEL' => 'Επεξεργασία',
  'LBL_EDIT_BUTTON_TITLE' => 'Επεξεργασία',
  'LBL_EDIT_INLINE' => 'Επεξεργασία επιτόπου',
  'LBL_EDIT_RELATED' => 'Επεξεργασία Σχετικού {{{this}}}',
  'LBL_EMAIL' => 'Email',
  'LBL_EMAILS' => 'Emails',
  'LBL_EMAILS_SUBPANEL_TITLE' => 'Emails',
  'LBL_EMAIL_ACCOUNTS_EDIT' => 'Επεξεργασία',
  'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Προπληρωμή Προεπιλογών Gmail™',
  'LBL_EMAIL_ACCOUNTS_NAME' => 'Όνομα',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Ιδιότητες Διακομιστή Εξερχόμενου Ταχυδρομείου',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Παροχή πληροφοριών SMTP διακομιστή ταχυδρομείου για να χρησιμοποιήσετε τα εξερχόμενα email σε Λογαριασμούς Ταχυδρομείου.',
  'LBL_EMAIL_ACCOUNTS_SENDTYPE' => 'Πράκτορας μεταφοράς ταχυδρομείου',
  'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ' => 'Χρήση SMTP Πιστοποίησης;',
  'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Προεπιλογή',
  'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Κωδικός SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD' => 'Υποχρεωτικός ο Κωδικός Πρόσβασης SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Θύρα SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Διακομιστής SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPSSL' => 'Χρήση SSL κατά τη σύνδεση',
  'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Όνομα Χειριστή SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD' => 'Υποχρεωτικό το όνομα Χειριστή SMTP',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Ρύθμιση Λογαριασμών Ταχυδρομείου για να δείτε τα εισερχόμενα μηνύματα από τους λογαριασμούς των email σας.',
  'LBL_EMAIL_ACCOUNTS_TITLE' => 'Διαχείριση Λογαριασμού Ταχυδρομείου',
  'LBL_EMAIL_ACTION_SET_INVALID' => 'Άκυρο',
  'LBL_EMAIL_ACTION_SET_OPT_IN' => 'Ενεργό',
  'LBL_EMAIL_ACTION_SET_OPT_OUT' => 'Αποχώρηση',
  'LBL_EMAIL_ACTION_SET_PRIMARY' => 'Κύρια',
  'LBL_EMAIL_ACTION_SET_VALID' => 'Έγκυρο',
  'LBL_EMAIL_ADD' => 'Προσθήκη Διεύθυνσης email',
  'LBL_EMAIL_ADDRESSES' => 'Email',
  'LBL_EMAIL_ADDRESSES_TITLE' => 'Διευθύνσεις Email',
  'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Έτοιμο',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Κρυφή Κοιν:',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Κοιν:',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST' => 'Νέα Λίστα',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Σε:',
  'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Σε/ Κοινοποίηση/Κρυφή Κοινοποίηση',
  'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Εκκαθάριση',
  'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Διευθύνσεις Email',
  'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT' => 'Μόνο Επεξεργασία Επαφής υποστηρίζεται αυτή τη στιγμή.',
  'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Φιλτράρισμα',
  'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME' => 'Όνομα/Όνομα Λογαριασμού',
  'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME' => 'Επώνυμο',
  'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS' => 'Επαφές Μου',
  'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS' => 'Λίστα Email Μου',
  'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Όνομα',
  'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Δεν Βρέθηκε Διεύθυνση',
  'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Αποθήκευση και Προσθήκη στο Βιβλίο Διευθύνσεων',
  'LBL_EMAIL_ADDRESS_BOOK_SEARCH' => 'Αναζήτηση',
  'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Επιλογή Email Παραληπτών',
  'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Βιβλίο Διεύθυνσης',
  'LBL_EMAIL_ADDRESS_PRIMARY' => 'Διευθύνσεις Email',
  'LBL_EMAIL_ADDR_DISPLAY_MSG' => 'Εμφάνιση διεύθυνσης email {0} - {1} από {2}',
  'LBL_EMAIL_ARCHIVED' => 'Το Email αρχειοθετήθηκε',
  'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Εισαγωγή Email στο Sugar',
  'LBL_EMAIL_ASSIGNED_TO_USER' => 'Ανατέθηκε σε Χειριστή',
  'LBL_EMAIL_ASSIGNMENT' => 'Ανατεθειμένο',
  'LBL_EMAIL_ASSIGN_TO' => 'Ανατέθηκε Σε',
  'LBL_EMAIL_ATTACHMENT' => 'Επισύναψη',
  'LBL_EMAIL_ATTACHMENTS' => 'Από Τοπικό Σύστημα',
  'LBL_EMAIL_ATTACHMENTS2' => 'Από Sugar Έγγραφα',
  'LBL_EMAIL_ATTACHMENTS3' => 'Επισυνάψεις Προτύπων',
  'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Έγγραφο',
  'LBL_EMAIL_ATTACHMENTS_EMBEDED' => 'Ενσωματωμένο',
  'LBL_EMAIL_ATTACHMENTS_FILE' => 'Αρχείο',
  'LBL_EMAIL_ATTACHMENT_UPLOAD_FAILED' => 'Το Συνημμένο απέτυχε να φορτώσει',
  'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Επισύναψη',
  'LBL_EMAIL_BCC' => 'Κρυφή Κοινοποίηση:',
  'LBL_EMAIL_BUTTON' => 'Email',
  'LBL_EMAIL_CANCEL' => 'Ακύρωση',
  'LBL_EMAIL_CC' => 'Κοινοποίηση',
  'LBL_EMAIL_CHARSET' => 'Σύνολο Χαρακτήρων',
  'LBL_EMAIL_CHECK' => 'Έλεγχος Ταχυδρομείου',
  'LBL_EMAIL_CHECKING_DESC' => 'Ένα λεπτό παρακαλώ... <br><br>Εάν αυτός είναι ο πρώτος έλεγχος για τον λογαριασμό ταχυδρομείου, μπορεί να πάρει κάποιο χρόνο.',
  'LBL_EMAIL_CHECKING_NEW' => 'Έλεγχος για Νέο Email',
  'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Εκκαθάριση αρχείων cache',
  'LBL_EMAIL_CLOSE' => 'Κλείσιμο',
  'LBL_EMAIL_COFFEE_BREAK' => 'Έλεγχος για Νέο Email. <br><br>Οι μεγάλοι λογαριασμοί ταχυδρομείου μπορούν να πάρουν ένα ιδιαίτερο χρονικό διάστημα.',
  'LBL_EMAIL_COMMON' => 'Κοινό',
  'LBL_EMAIL_COMPOSE' => 'Email',
  'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Παρακαλώ εισάγετε τον παραλήπτη(ες) για αυτό το email.',
  'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Παρακαλώ εισάγετε διαθέσιμη διεύθυνση email στα πεδία Σε, Κοινοποίηση, και Κρυφή Κοινοποίηση',
  'LBL_EMAIL_COMPOSE_LINK_TO' => 'Συσχέτιση με',
  'LBL_EMAIL_COMPOSE_NO_BODY' => 'Το σώμα αυτού του email είναι άδειο. Αποστολή ούτως ή άλλως;',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Αυτό το email δεν έχει θέμα. Αποστολή ούτως ή άλλως;',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(χωρίς θέμα)',
  'LBL_EMAIL_COMPOSE_OPTIONS' => 'Επιλογές',
  'LBL_EMAIL_COMPOSE_READ' => 'Διαβάστε και Συντάξτε το Email',
  'LBL_EMAIL_COMPOSE_SEND_FROM' => 'Αποστολή Από Λογαριασμό Ταχυδρομείου',
  'LBL_EMAIL_CONFIRM_CLOSE' => 'Απόρριψη αυτού του email;',
  'LBL_EMAIL_CONFIRM_DELETE' => 'Αφαίρεση αυτών των καταχωρήσεων από το Βιβλίο Διευθύνσεών σας;',
  'LBL_EMAIL_CONFIRM_DELETE_LIST' => 'Κατάργηση αυτών των καταχωρήσεων από τις λίστες ταχυδρομείου σας;',
  'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτήν την υπογραφή;',
  'LBL_EMAIL_CREATE_NEW' => '--Δημιουργία Στην Αποθήκευση--',
  'LBL_EMAIL_DATE_RECEIVED' => 'Ημερομηνία Παραλαβής',
  'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Ημερομηνία Αποστολής από Αποστολέα',
  'LBL_EMAIL_DATE_TODAY' => 'Σήμερα',
  'LBL_EMAIL_DATE_YESTERDAY' => 'Χθες',
  'LBL_EMAIL_DD_TEXT' => 'επιλεγμένο email(s).',
  'LBL_EMAIL_DEFAULTS' => 'Προεπιλογές',
  'LBL_EMAIL_DELETE' => 'Διαγραφή',
  'LBL_EMAIL_DELETE_CONFIRM' => 'Διαγραφή επιλεγμένων μηνυμάτων;',
  'LBL_EMAIL_DELETE_ERROR_DESC' => 'Δεν έχετε πρόσβαση σε αυτή την περιοχή. Επικοινωνήστε με τον διαχειριστή τοποθεσίας σας για να αποκτήσετε πρόσβαση.',
  'LBL_EMAIL_DELETE_SUCCESS' => 'Επιτυχής διαγραφή Email.',
  'LBL_EMAIL_DELETING_MESSAGE' => 'Διαγραφή Μηνύματος',
  'LBL_EMAIL_DELETING_OUTBOUND' => 'Διαγραφή εξερχόμενου διακομιστή',
  'LBL_EMAIL_DELIMITER' => '::;::',
  'LBL_EMAIL_DETAILS' => 'Λεπτομέρειες',
  'LBL_EMAIL_DISPLAY_MSG' => 'Εμφάνιση email {0} - {1} από {2}',
  'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Έγινε',
  'LBL_EMAIL_DOWNLOAD_STATUS' => 'Κατεβασμένο [[καταμέτρηση]] των [[συνολικών]] emails',
  'LBL_EMAIL_EDIT_CONTACT' => 'Επεξεργασία Επαφής',
  'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Μόνο η Κύρια Διεύθυνση θα χρησιμοποιηθεί κατά την εργασία με Επαφές.',
  'LBL_EMAIL_EDIT_MAILING_LIST' => 'Επεξεργασία Λίστας Ταχυδρομείου',
  'LBL_EMAIL_EMPTYING_TRASH' => 'Άδειος Κάδος Απορριμμάτων',
  'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Δεν υπάρχουν διευθύνσεις email για να εμφανίσει.',
  'LBL_EMAIL_EMPTY_MSG' => 'Κανένα email για εμφάνιση.',
  'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Το όνομα του φακέλου να είναι μοναδικό και όχι κενό. Παρακαλώ δοκιμάστε ξανά.',
  'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Δεν μπορεί να προσδιορίσει το προβλεπόμενο από το φάκελο πλαίσιο. Δοκιμάστε ξανά.',
  'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Παρακαλώ ελέγξτε τις ρυθμίσεις σας.',
  'LBL_EMAIL_ERROR_CONTACT_NAME' => 'Παρακαλώ βεβαιωθείτε ότι έχετε εισάγει ένα επώνυμο.',
  'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Δεν μπορείτε να διαγράψετε ένα φάκελο. Ο φάκελος ή τα παιδιά του, έχουν emails ή μια ταχυδρομική θυρίδα που συνδέεται με αυτόν.',
  'LBL_EMAIL_ERROR_DESC' => 'Ανιχνεύθηκαν λάθη:',
  'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Τα ονόματα των φακέλων Sugar πρέπει να είναι μοναδικά.',
  'LBL_EMAIL_ERROR_EMPTY' => 'Παρακαλώ εισάγετε μερικά κριτήρια αναζήτησης.',
  'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Από τη διεύθυνση απαιτείται. Παρακαλώ εισάγετε μια έγκυρη διεύθυνση email.',
  'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Ένα λάθος έχει εμφανιστεί.',
  'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Είτε μήνυμα που Αφαιρείται από τον διακομιστή είτε που κινείται προς έναν διαφορετικό φάκελο',
  'LBL_EMAIL_ERROR_LIST_NAME' => 'Μία λίστα emai με αυτό το όνομα υπάρχει ήδη',
  'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Η σύνδεση στον διακομιστή απέτυχε. Παρακαλώ επικοινωνήστε με τον Διαχειριστή σας',
  'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Το μήνυμα Αφαιρέθηκε από τον Διακομιστή',
  'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Υποχρεωτικός ο Ελεγχόμενος Φάκελος.',
  'LBL_EMAIL_ERROR_MOVE' => 'Η μετακίνηση του email μεταξύ των διακομιστών ή/και των λογαριασμών ταχυδρομείου δεν υποστηρίζεται αυτή τη στιγμή.',
  'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Λάθος Μετακίνησης',
  'LBL_EMAIL_ERROR_NAME' => 'Υποχρεωτικό όνομα.',
  'LBL_EMAIL_ERROR_NO_FILE' => 'Παρακαλώ παρέχετε ένα αρχείο.',
  'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'IMAP μετονομασία φακέλου δεν υποστηρίζεται αυτή τη στιγμή.',
  'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Δεν έχει προσδιοριστεί εξερχόμενος διακομιστής ταχυδρομείου.',
  'LBL_EMAIL_ERROR_PASSWORD' => 'Υποχρεωτικός ο κωδικός πρόσβασης.',
  'LBL_EMAIL_ERROR_PORT' => 'Υποχρεωτική η θύρα ταχυδρομείου του διακομιστή.',
  'LBL_EMAIL_ERROR_PREPEND' => 'Λάθος:',
  'LBL_EMAIL_ERROR_PROTOCOL' => 'Υποχρεωτικό το πρωτόκολλο του διακομιστή.',
  'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Ο λογαριασμός ταχυδρομείου μπορεί να μην έχει αποθηκευτεί.',
  'LBL_EMAIL_ERROR_SERVER' => 'Υποχρεωτική η διεύθυνση ταχυδρομείου του διακομιστή.',
  'LBL_EMAIL_ERROR_TIMEOUT' => 'Ένα λάθος έχει εμφανιστεί κατά την επικοινωνία με τον διακομιστή του ταχυδρομείου.',
  'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Υποχρεωτικός ο Φάκελος Απορριμμάτων.',
  'LBL_EMAIL_ERROR_USER' => 'Υποχρεωτικό το όνομα σύνδεσης.',
  'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Η πληροφορία δεν είναι διαθέσιμη',
  'LBL_EMAIL_FOLDERS_ACTIONS' => 'Μετακίνηση Σε',
  'LBL_EMAIL_FOLDERS_ADD' => 'Προσθήκη',
  'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Προσθήκη Νέου Φακέλου',
  'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Αποθήκευση',
  'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Προσθήκη του Φακέλου σε',
  'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Αυτός ο φάκελος δεν μπορεί να αλλάξει',
  'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτόν τον φάκελο; Αυτή η διαδικασία δεν μπορεί να αναστραφεί. Οι διαγραφές φακέλων θα πέσουν σε όλους τους αλληλένδετους φακέλους.',
  'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Νέο Όνομα Φακέλου',
  'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Παρακαλώ επιλέξτε ένα φάκελο πριν από την εκτέλεση αυτής της δράσης.',
  'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Μετονομασία Φακέλου',
  'LBL_EMAIL_FOLDERS_TITLE' => 'Διαχείριση Φακέλων',
  'LBL_EMAIL_FOLDERS_USING_GROUP_USER' => 'Χρησιμοποίηση Γκρουπ',
  'LBL_EMAIL_FOLDERS_USING_TEAM' => 'Ανατέθηκε σε Ομάδα',
  'LBL_EMAIL_FORWARD' => 'Προωθημένο',
  'LBL_EMAIL_FOUND' => 'Εύρεση',
  'LBL_EMAIL_FROM' => 'Από',
  'LBL_EMAIL_GROUP' => 'γκρουπ',
  'LBL_EMAIL_HOME_FOLDER' => 'Αρχή',
  'LBL_EMAIL_HTML_RTF' => 'Αποστολή HTML',
  'LBL_EMAIL_IE_DELETE' => 'Διαγραφή Λογαριασμού Ταχυδρομείου',
  'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτόν τον λογαριασμό ταχυδρομείου;',
  'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Διαγραφή υπογραφής',
  'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Επιτυχής διαγραφή',
  'LBL_EMAIL_IE_SAVE' => 'Αποθήκευση Πληροφορίας Λογαριασμού Ταχυδρομείου',
  'LBL_EMAIL_IMPORTING_EMAIL' => 'Εισαγωγή Email',
  'LBL_EMAIL_IMPORT_EMAIL' => 'Εισαγωγή στο Sugar',
  'LBL_EMAIL_IMPORT_FAIL' => 'Η εισαγωγή απέτυχε, επειδή είτε το μήνυμα έχει ήδη εισαχθεί ή διαγραφεί από το διακομιστή',
  'LBL_EMAIL_IMPORT_SETTINGS' => 'Ρυθμίσεις Εισαγωγής',
  'LBL_EMAIL_IMPORT_SUCCESS' => 'Επιτυχής Εισαγωγή',
  'LBL_EMAIL_INVALID' => 'Άκυρο',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Ο Εξερχόμενος διακομιστής ταχυδρομείου που έχει επιλεγεί για το λογαριασμό ηλεκτρονικού ταχυδρομείου που χρησιμοποιείτε είναι άκυρος. Ελέγξτε τις ρυθμίσεις ή επιλέξτε έναν διαφορετικό διακομιστή ταχυδρομείου για το λογαριασμό ηλεκτρονικού ταχυδρομείου.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Ο Εξερχόμενος διακομιστής ταχυδρομείου δεν έχει ρυθμιστεί να στείλει email. Παρακαλούμε να ρυθμίσετε τις παραμέτρους ενός διακομιστή εξερχόμενου ταχυδρομείου ή επιλέξτε ένα διακομιστή εξερχόμενου ταχυδρομείου για το λογαριασμό ηλεκτρονικού ταχυδρομείου που χρησιμοποιείτε στις Ρυθμίσεις >> Λογαριασμός Ταχυδρομείου.',
  'LBL_EMAIL_INV_TITLE' => 'άκυρη διεύθυνση email',
  'LBL_EMAIL_LINK_RECORD' => 'Κλικ Εδώ',
  'LBL_EMAIL_LIST_RENAME_DESC ' => 'Εισάγετε ένα νέο όνομα για αυτήν την λίστα ταχυδρομείου',
  'LBL_EMAIL_LIST_RENAME_TITLE' => 'Μετονομασία Λίστας Ταχυδρομείου',
  'LBL_EMAIL_LOADING' => 'Φόρτωση...',
  'LBL_EMAIL_MARK' => 'Σημειωμένο',
  'LBL_EMAIL_MARK_FLAGGED' => 'Με Σημαία',
  'LBL_EMAIL_MARK_READ' => 'Ως Αναγνωσμένο',
  'LBL_EMAIL_MARK_UNFLAGGED' => 'Χωρίς Σημαία',
  'LBL_EMAIL_MARK_UNREAD' => 'Ως Μη Αναγνωσμένο',
  'LBL_EMAIL_MENU_ADD_FOLDER' => 'Δημιουργία Φακέλου',
  'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Εκκαθάριση αρχείων cache',
  'LBL_EMAIL_MENU_COMPOSE' => 'Σύνταξη Email σε',
  'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Διαγραφή Φακέλου',
  'LBL_EMAIL_MENU_EDIT' => 'Επεξεργασία',
  'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Άδειος Κάδος Απορριμμάτων',
  'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Δημιουργία Φακέλου (απομακρυσμένα ή στο Sugar)',
  'LBL_EMAIL_MENU_HELP_ARCHIVE' => 'Αρχειοθέτηση αυτών των email στο SugarCRM',
  'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST' => 'Επιλεγμένα Email Λίστας Ταχυδρομείου',
  'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE' => 'Email αυτής της Επαφής',
  'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE' => 'Αφαίρεση μίας Επαφής',
  'LBL_EMAIL_MENU_HELP_DELETE' => 'Διαγραφή αυτού του email(s);',
  'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Διαγραφή Φακέλου (απομακρυσμένα ή στο Sugar)',
  'LBL_EMAIL_MENU_HELP_EDIT_CONTACT' => 'Επεξεργασία Επαφής',
  'LBL_EMAIL_MENU_HELP_EDIT_LIST' => 'Επεξεργασία Λίστας Ταχυδρομείου',
  'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Σβήνει όλους τους φακέλους Απορριμμάτων για τους λογαριασμούς ταχυδρομείου σας',
  'LBL_EMAIL_MENU_HELP_MARK_FLAGGED' => 'Σημειώστε αυτό το email(s) με σημαία',
  'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Σημειώστε αυτό το email(s) ως αναγνωσμένο',
  'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Σημειώστε αυτό το email(s) χωρίς σημαία',
  'LBL_EMAIL_MENU_HELP_MARK_UNREAD' => 'Σημειώστε αυτό το email(s) ως μη αναγνωσμένο',
  'LBL_EMAIL_MENU_HELP_REMOVE_LIST' => 'Αφαίρεση Λίστες Ταχυδρομείου',
  'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Μετονομασία Φακέλου (απομακρυσμένα ή στο Sugar)',
  'LBL_EMAIL_MENU_HELP_REPLY' => 'Απάντηση σε αυτά τα email(s)',
  'LBL_EMAIL_MENU_HELP_REPLY_ALL' => 'Απάντηση σε όλους τους παραλήπτες για αυτά τα email(s)',
  'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Παρακαλώ κάντε μια επιλογή πριν δοκιμάσετε αυτή τη λειτουργία.',
  'LBL_EMAIL_MENU_REMOVE' => 'Αφαίρεση',
  'LBL_EMAIL_MENU_RENAME' => 'Μετονομασία',
  'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Μετονομασία Φακέλου',
  'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Μετονομασία Φακέλου',
  'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Συγχρονισμός',
  'LBL_EMAIL_MESSAGES' => 'μηνύματα',
  'LBL_EMAIL_MESSAGE_NO' => 'Όχι Μήνυμα',
  'LBL_EMAIL_ML_ADDRESSES_1' => 'Επιλογή Λίστας Διευθύνσεων',
  'LBL_EMAIL_ML_ADDRESSES_2' => 'Διαθέσιμη Λίστα Διευθύνσεων',
  'LBL_EMAIL_ML_NAME' => 'Όνομα Λίστας',
  'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Πατήστε</b> για επιλογή πολλαπλών<br />(Οι Χειριστές Mac χρησιμοποιείστε <b>CMD-Πατήστε</b>)',
  'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Πολλαπλά',
  'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Άδειο',
  'LBL_EMAIL_NO' => 'Όχι',
  'LBL_EMAIL_NOT_SENT' => 'Το σύστημα δεν είναι ικανό να επεξεργαστεί το αίτημα σας. Παρακαλώ επικοινωνήστε με τον Διαχειριστή του συστήματος.',
  'LBL_EMAIL_OK' => 'Εντάξει',
  'LBL_EMAIL_ONE_MOMENT' => 'Μια στιγμή παρακαλώ...',
  'LBL_EMAIL_OPEN_ALL' => 'Άνοιγμα Πολλαπλών Μηνυμάτων',
  'LBL_EMAIL_OPTIONS' => 'Επιλογές',
  'LBL_EMAIL_OPT_OUT' => 'Αποχωρημένο Email',
  'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Αποχωρημένο και Άκυρο Email',
  'LBL_EMAIL_OPT_TITLE' => 'αποχωρημένη διεύθυνση email',
  'LBL_EMAIL_PAGE_AFTER' => 'από {0}',
  'LBL_EMAIL_PAGE_BEFORE' => 'Σελίδα',
  'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
  'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email σε PDF',
  'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email σε PDF',
  'LBL_EMAIL_PERFORMING_TASK' => 'Εκτέλεση Εργασίας',
  'LBL_EMAIL_POP3_REMOVE_MESSAGE' => 'Το πρωτόκολλο διακομιστή ταχυδρομείου του τύπου POP3 δεν θα υποστηριχθεί στην επόμενη αποδέσμευση. Μόνο IMAP θα υποστηριχθεί.',
  'LBL_EMAIL_PRIMARY' => 'Κύρια Διεύθυνση Email',
  'LBL_EMAIL_PRIM_TITLE' => 'βασική διεύθυνση email',
  'LBL_EMAIL_PRINT' => 'Εκτύπωση',
  'LBL_EMAIL_QC_BUGS' => 'Σφάλμα',
  'LBL_EMAIL_QC_CASES' => 'Υπόθεση',
  'LBL_EMAIL_QC_CONTACTS' => 'Επαφή',
  'LBL_EMAIL_QC_LEADS' => 'Δυνητικός Πελάτης',
  'LBL_EMAIL_QC_OPPORTUNITIES' => 'Ευκαιρία',
  'LBL_EMAIL_QC_TASKS' => 'Εργασία',
  'LBL_EMAIL_QUICK_COMPOSE' => 'Γρήγορη Σύνταξη Email',
  'LBL_EMAIL_QUICK_CREATE' => 'Γρήγορη Δημιουργία',
  'LBL_EMAIL_REBUILDING_FOLDERS' => 'Επαναδόμηση Φακέλων',
  'LBL_EMAIL_RECORD' => 'Εγγραφή Email',
  'LBL_EMAIL_RECV' => 'εστ..',
  'LBL_EMAIL_RELATE_EMAIL' => 'Συναφή Email',
  'LBL_EMAIL_RELATE_TO' => 'Συναφή',
  'LBL_EMAIL_REMOVE' => 'Αφαίρεση',
  'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Προειδοποίηση! Ο εξερχόμενος λογαριασμός που προσπαθείτε να διαγράψετε συνδέεται σε έναν υφιστάμενο εισερχόμενο λογαριασμό. Είστε βέβαιοι ότι θέλετε να συνεχίσετε;',
  'LBL_EMAIL_REPLY' => 'Απάντηση',
  'LBL_EMAIL_REPLY_ALL' => 'Απάντηση σε Όλα',
  'LBL_EMAIL_REPLY_TO' => 'Απάντηση-σε',
  'LBL_EMAIL_REPORTS_TITLE' => 'Αναφορές',
  'LBL_EMAIL_RETRIEVING_LIST' => 'Ανάκτηση Email Λίστας',
  'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Ανάκτηση Μηνύματος',
  'LBL_EMAIL_RETRIEVING_RECORD' => 'Ανάκτηση Εγγραφής Email',
  'LBL_EMAIL_RETURN_TO_VIEW' => 'Επιστροφή στην Προηγούμενη Ενότητα;',
  'LBL_EMAIL_REVERT' => 'Επαναφορά',
  'LBL_EMAIL_RULES_TITLE' => 'Διαχείριση Κανόνα',
  'LBL_EMAIL_SAVE' => 'Αποθήκευση',
  'LBL_EMAIL_SAVE_AND_REPLY' => 'Αποθήκευση και Απάντηση',
  'LBL_EMAIL_SAVE_DRAFT' => 'Αποθήκευση Πρόχειρου',
  'LBL_EMAIL_SEARCHING' => 'Διεξαγωγή Αναζήτησης',
  'LBL_EMAIL_SEARCH_ADVANCED' => 'Σύνθετη Αναζήτηση',
  'LBL_EMAIL_SEARCH_DATE_FROM' => 'Από Ημερομηνία',
  'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Μέχρι Ημερομηνία',
  'LBL_EMAIL_SEARCH_FULL_TEXT' => 'Σώμα Κειμένου',
  'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Δεν βρέθηκαν αποτελέσματα να ταιριάζουν με τα κριτήρια αναζήτησης σας.',
  'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Αναζήτηση Αποτελεσμάτων',
  'LBL_EMAIL_SEARCH_TITLE' => 'Απλή Αναζήτηση',
  'LBL_EMAIL_SEARCH__FROM_ACCOUNTS' => 'Αναζήτηση λογαριασμού email',
  'LBL_EMAIL_SELECT' => 'Επιλογή',
  'LBL_EMAIL_SELECT_ONE_RECORD' => 'Παρακαλώ επιλέξτε μόνο μία εγγραφή email',
  'LBL_EMAIL_SEND' => 'Αποστολή',
  'LBL_EMAIL_SENDING_EMAIL' => 'Αποστολή Email',
  'LBL_EMAIL_SENT' => 'εστάλη',
  'LBL_EMAIL_SETTINGS' => 'Ρυθμίσεις',
  'LBL_EMAIL_SETTINGS_2_ROWS' => '2 Γραμμές',
  'LBL_EMAIL_SETTINGS_3_COLS' => '3 Στήλες',
  'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Λογαριασμοί Ταχυδρομείου',
  'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Εκκαθάριση Φόρμας',
  'LBL_EMAIL_SETTINGS_AUTO_IMPORT' => 'Εισαγωγή Email Στην Προβολή',
  'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Έλεγχος για Νέο Ταχυδρομείο',
  'LBL_EMAIL_SETTINGS_COMPOSE_INLINE' => 'Χρήση Προηγούμενου Παραθύρου',
  'LBL_EMAIL_SETTINGS_COMPOSE_POPUP' => 'Χρήση Αναδυόμενου Παραθύρου',
  'LBL_EMAIL_SETTINGS_DISPLAY_NUM' => 'Αριθμός emails ανά σελίδα',
  'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT' => 'Επεξεργασία Λογαριασμού Ταχυδρομείου',
  'LBL_EMAIL_SETTINGS_FOLDERS' => 'Φάκελοι',
  'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Από Διεύθυνση',
  'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Από Όνομα',
  'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Διεύθυνση Email Για Δοκιμή Ειδοποίησης:',
  'LBL_EMAIL_SETTINGS_FULL_SCREEN' => 'Πλήρης Οθόνη',
  'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Συγχρονισμός Όλων των Λογαριασμών Ταχυδρομείου',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC' => 'Η εκτέλεση αυτής της δράσης θα συγχρονίσει τους λογαριασμούς ηλεκτρονικού ταχυδρομείου και το περιεχόμενο τους.',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Εκτέλεση πλήρη συγχρονισμού;/Μεγάλος λογαριασμός ηλεκτρονικού ταχυδρομείου μπορεί να διαρκέσει μερικά λεπτά.',
  'LBL_EMAIL_SETTINGS_GENERAL' => 'Γενικά',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS' => 'Διαθέσιμοι Φακέλοι Γκρουπ',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Δημιουργία Φακέλων Γκρουπ',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Επεξεργασία Φακέλου Γκρουπ',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Αποθήκευση Φακέλου Γκρουπ',
  'LBL_EMAIL_SETTINGS_LAYOUT' => 'Ύφος Διάταξης',
  'LBL_EMAIL_SETTINGS_MUST_RELOAD' => 'Πρέπει να ξαναφορτώσετε τη σελίδα για να τεθούν σε ισχύ οι νέες ρυθμίσεις.',
  'LBL_EMAIL_SETTINGS_NAME' => 'Όνομα Λογαριασμού Email:',
  'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Απάντηση σε Διεύθυνση',
  'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Επιλέξτε τον αριθμό των μηνυμάτων emails ανά σελίδα στα Εισερχόμενα. Αυτή η ρύθμιση ενδέχεται να απαιτεί ανανέωση της σελίδας, ώστε να τεθεί σε ισχύ.',
  'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Ανάκτηση Λογαριαμού Ταχυδρομείου',
  'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP' => 'Ανάκτηση Φακέλου Γκρουπ',
  'LBL_EMAIL_SETTINGS_RULES' => 'Κανόνες',
  'LBL_EMAIL_SETTINGS_SAVED' => 'Οι ρυθμίσεις έχουν αποθηκευτεί. Πρέπει να ανανεώσετε τη σελίδα για να τεθούν σε ισχύ οι νέες ρυθμίσεις.',
  'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Αποστολή Μόνο Απλών Κειμένων Emails',
  'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS' => 'Ενεργό',
  'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Emails ανά Σελίδα',
  'LBL_EMAIL_SETTINGS_TAB_POS' => 'Καρτέλες στο Κάτω μέρος',
  'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Οπτικές Ρυθμίσεις',
  'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Προτιμήσεις',
  'LBL_EMAIL_SETTINGS_TOGGLE_ADV' => 'Εμφάνιση Σύνθετης',
  'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR' => 'Σε Διεύθυνση Email',
  'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Διαθέσιμοι Φάκελοι Χειριστών',
  'LBL_EMAIL_SHOW_READ' => 'Εμφάνιση Όλων',
  'LBL_EMAIL_SHOW_UNREAD_ONLY' => 'Εμφάνιση Μόνο των Μη Αναγνωσμένων',
  'LBL_EMAIL_SIGNATURES' => 'Υπογραφές',
  'LBL_EMAIL_SIGNATURE_CREATE' => 'Δημιουργία Υπογραφής',
  'LBL_EMAIL_SIGNATURE_NAME' => 'Όνομα Υπογραφής',
  'LBL_EMAIL_SIGNATURE_TEXT' => 'Σώμα Υπογραφής',
  'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Ενεργοποίηση SMTP μέσω SSL ή TLS;',
  'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ Sugar Φάκελοι ]',
  'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Απομακρυσμένοι Φάκελοι ]',
  'LBL_EMAIL_SUBJECT' => 'Θέμα',
  'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Πατήστε το κλειδί Shift ή το κλειδί Ctrl για να επιλέξετε πολλαπλούς φακέλους.',
  'LBL_EMAIL_SUCCESS' => 'Επιτυχία',
  'LBL_EMAIL_SUGAR_FOLDER' => 'Φάκελος Sugar',
  'LBL_EMAIL_TEAMS' => 'Ανατέθηκε σε Ομάδες',
  'LBL_EMAIL_TEMPLATES' => 'Πρότυπα',
  'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Σώμα Προτύπου Email είναι άδειο.',
  'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Ένα μήνυμα email εστάλη στην καθορισμένη διεύθυνση email χρησιμοποιώντας τις ρυθμίσεις που παρέχει το εξερχόμενα ταχυδρομείο. Παρακαλώ ελέγξτε αν το email ελήφθη για να βεβαιωθείτε ότι οι ρυθμίσεις είναι σωστές.',
  'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Αποστολή Δοκιμαστικού Email',
  'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Εστάλη Δοκιμαστικό Email',
  'LBL_EMAIL_TEXT_FIRST' => 'Αρχική Σελίδα',
  'LBL_EMAIL_TEXT_LAST' => 'Τελευταία Σελίδα',
  'LBL_EMAIL_TEXT_NEXT' => 'Επόμενη Σελίδα',
  'LBL_EMAIL_TEXT_PREV' => 'Προηγούμενη Σελίδα',
  'LBL_EMAIL_TEXT_REFRESH' => 'Ανανέωση',
  'LBL_EMAIL_TITLE' => 'Διεύθυνση Email',
  'LBL_EMAIL_TO' => 'Σε',
  'LBL_EMAIL_TOGGLE_LIST' => 'Εναλλαγή Λίστας',
  'LBL_EMAIL_UPPER_CASE_GROUP' => 'Γκρουπ',
  'LBL_EMAIL_VIEW' => 'Προβολή',
  'LBL_EMAIL_VIEWS' => 'Προβολές',
  'LBL_EMAIL_VIEW_HEADERS' => 'Εμφάνιση Επικεφαλίδων',
  'LBL_EMAIL_VIEW_PRINTABLE' => 'Εκτυπώσιμη Έκδοση',
  'LBL_EMAIL_VIEW_RAW' => 'Εμφάνιση Ακατέργαστου Email',
  'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Προβολή Σχέσεων',
  'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Αυτό το χαρακτηριστικό δεν υποστηρίζεται όταν χρησιμοποιείται με POP3.',
  'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Προειδοποίηση: Λείπει το όνομα χειριστή και ο κωδικός πρόσβασης για τον εξερχόμενο λογαριασμό ταχυδρομείου.',
  'LBL_EMAIL_YES' => 'Ναι',
  'LBL_EMPLOYEES' => 'Eργαζόμενοι',
  'LBL_EMPTY' => 'Άδειο',
  'LBL_EMPTY_REQUIRED_VCARD' => 'Το αρχείο vCard δεν έχει όλα τα απαιτούμενα πεδία γι&#39; αυτή την ενότητα.',
  'LBL_EMPTY_VCARD' => 'Παρακαλώ επιλέξτε ένα αρχείο vCard',
  'LBL_ENABLE_JAVASCRIPT' => 'Η SugarCRM απαιτεί javascript. Παρακαλώ ενεργοποιήστε το javascript για να συνεχίσετε να χρησιμοποιείτε την SugarCRM.',
  'LBL_ENTER_DATE' => 'Ημερομηνία Εισαγωγής',
  'LBL_ENTER_EMAIL' => 'Εισαγωγή email προσκεκλημένου...',
  'LBL_ENTER_VALID_YEAR' => 'Παρακαλώ εισάγετε έγκυρο έτος',
  'LBL_ENTER_YEAR' => 'Εισαγωγή Έτους',
  'LBL_ERROR' => 'Λάθος',
  'LBL_ERROR_CANNOT_FIND_TWITTER' => 'Δεν μπορείτε να βρείτε έγκυρο χρονοδιάγραμμα για Twitter ID:',
  'LBL_ERROR_RETRIEVING_FREE_BUSY' => 'Παρουσιάστηκε σφάλμα κατά την ανάκτηση χρονοδιαγράμματος.',
  'LBL_ERR_LOADING_RSS_FEED' => 'Αποτυχία φόρτωσης RSS Feed',
  'LBL_EXISTING' => 'Υφιστάμενο',
  'LBL_EXPAND_ALL' => 'Ανάπτυξη Όλων',
  'LBL_EXPORT' => 'Εξαγωγή',
  'LBL_EXPORT_ALL' => 'Εξαγωγή Όλων',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Ανατέθηκε Σε',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Ανατεθειμένος Χρήστης',
  'LBL_EXPORT_FULL_NAME' => 'Ονοματεπώνυμο',
  'LBL_EXPORT_REPORTS_TO_ID' => 'Αναφέρεται Σε Ταυτότητα',
  'LBL_EXPORT_TEAM_ID' => 'Ταυτότητα Ομάδας',
  'LBL_EXPORT_TEAM_NAME' => 'Ομάδες',
  'LBL_EXPORT_TEAM_SET_ID' => 'Καθορισμός Ταυτότητας Ομάδας',
  'LBL_EXTERNAL_LOGIN_BUTTON_TITLE' => 'Single Sign-On',
  'LBL_EXTERNAL_SECURITY_LEVEL' => 'Ασφάλεια',
  'LBL_FAILED' => 'Απέτυχε!',
  'LBL_FASTCGI_LOGGING' => 'Για βέλτιστη εμπειρία χρησιμοποιώντας IIS/FastCGI sapi, καθορίστε fastcgi.logging σε 0 στο δικό σας php.ini αρχείο.',
  'LBL_FAVORITE' => 'Αγαπημένο',
  'LBL_FAVORITES' => 'Αγαπημένα',
  'LBL_FAVORITES_FILTER' => 'Αγαπημένα Μου:',
  'LBL_FEEDBACK' => 'Feedback',
  'LBL_FILES_OPENED' => 'Ανοιχτά Αρχεία',
  'LBL_FILE_BUTTON' => 'Αρχείο',
  'LBL_FILE_DELETED' => 'Αρχείο διαγράφηκε με επιτυχία',
  'LBL_FILE_DELETE_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το αρχείο; Αυτό δεν μπορεί να αναιρεθεί.',
  'LBL_FILE_SIZE_UNITS_B' => 'Bytes',
  'LBL_FILE_SIZE_UNITS_KB' => 'kB',
  'LBL_FILE_SIZE_UNITS_MB' => 'MB',
  'LBL_FILTER' => 'Φίλτρο',
  'LBL_FILTERED' => 'Φιλτραρισμένο',
  'LBL_FILTER_ALL_RECORDS' => 'Όλες οι Εγγραφές',
  'LBL_FILTER_BETWEEN_FROM' => 'Από',
  'LBL_FILTER_BETWEEN_TO' => 'Προς',
  'LBL_FILTER_CREATE_NEW' => 'Δημιουργία Φίλτρου',
  'LBL_FILTER_DATEBETWEEN_FROM' => 'Ημερομηνία έναρξης',
  'LBL_FILTER_DATEBETWEEN_TO' => 'Ημερομηνία λήξης',
  'LBL_FILTER_MENU_BY' => 'Φιλτράρισμα Μενού Ανά',
  'LBL_FILTER_SELECT_FIELD' => 'Επιλογή πεδίου...',
  'LBL_FILTER_SELECT_OPERATOR' => 'Επιλογή τελεστή...',
  'LBL_FINISH_BUTTON_LABEL' => 'Τέλος',
  'LBL_FINISH_BUTTON_TITLE' => 'Τέλος',
  'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'πρώτη ημέρα του επόμενου μήνα',
  'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
  'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
  'LBL_FIXED_IN_RELEASE' => 'Επιδιόρθωση στην Αναβάθμιση',
  'LBL_FOLLOW' => 'Follow',
  'LBL_FOLLOWING' => 'Following',
  'LBL_FOLLOW_LINK' => 'Follow Link',
  'LBL_FONTSIZE_EXTRA_HUGE' => 'Πολύ τεράστια',
  'LBL_FONTSIZE_HUGE' => 'Τεράστια',
  'LBL_FONTSIZE_LARGE' => 'Μεγάλη',
  'LBL_FONTSIZE_LARGER' => 'Μεγαλύτερη',
  'LBL_FONTSIZE_NORMAL' => 'Κανονική (προεπιλογή)',
  'LBL_FONTSIZE_SMALL' => 'Μικρή',
  'LBL_FONTSIZE_TINY' => 'Μικροσκοπική',
  'LBL_FORECAST_WORKSHEET' => 'Πρόβλεψη Φύλλου Εργασίας',
  'LBL_FORECAST_WORKSHEETS' => 'Φύλλο Εργασίας Πρόβλεψης',
  'LBL_FOUND_IN_RELEASE' => 'Βρέθηκε στην Αναβάθμιση',
  'LBL_FULL_FORM_BUTTON_KEY' => 'L',
  'LBL_FULL_FORM_BUTTON_LABEL' => 'Πλήρης Φόρμα',
  'LBL_FULL_FORM_BUTTON_TITLE' => 'Πλήρης Φόρμα',
  'LBL_GENERATE_QUOTE' => 'Παραγμένη Προσφορά',
  'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Δημιουργία Φόρμας',
  'LBL_GETTINGAIR' => 'Λήψη',
  'LBL_GLOBAL_SEARCH' => 'Σφαιρική Αναζήτηση',
  'LBL_GLOBAL_SEARCH_LNK_KEY' => '',
  'LBL_GLOBAL_SEARCH_MODULE_FILTER' => 'Σφαιρική Αναζήτηση Ενότητας Φίλτρου',
  'LBL_GLOBAL_SEARCH_RUN' => 'Εκτέλεση Σφαιρικής Αναζήτησης',
  'LBL_GLOBAL_SHORTCUTS' => 'Σφαιρικές Συντομεύσεις',
  'LBL_GO_BUTTON_LABEL' => 'Πηγαίνετε',
  'LBL_GRID_SELECTED_FILE' => 'επιλεγμένο αρχείο',
  'LBL_GRID_SELECTED_FILES' => 'επιλεγμένα αρχεία',
  'LBL_GROUP_EMAIL_ACCOUNT_CONFIGURATION' => 'λογαριασμός γκρουπ',
  'LBL_GS_HELP' => 'Τα πεδία σε αυτή την ενότητα που χρησιμοποιούνται σε αυτήν την αναζήτηση, εμφανίζονται πάνω. Το επιλεγμένο κείμενο ταιριάζει με τα κριτήρια αναζήτησής σας.',
  'LBL_HELP' => 'Βοήθεια',
  'LBL_HELP_CREATE' => 'Για να δημιουργήσετε μία εγγραφή {{plural_module_name}}:
1. Παρέχετε τιμές για τα πεδία, όπως επιθυμείτε.
 - Τα πεδία "Υποχρεωτικό", πρέπει να συμπληρωθούν πριν από την αποθήκευση.
 - Κάντε κλικ στην επιλογή "Εμφάνιση Περισσότερων" να εκθέσει πρόσθετα πεδία, εάν είναι απαραίτητο.
2. Κάντε κλικ στην επιλογή "Αποθήκευση" να οριστικοποιήσει τη νέα εγγραφή και να επιστρέψετε στην προηγούμενη σελίδα.
 - Επιλέξτε "Αποθήκευση και προβολή" για να ανοίξετε τη νέα εγγραφή {{module_name}} στην προβολή.
 - Επιλέξτε "Αποθήκευση και δημιουργία νέας" για να δημιουργήσει αμέσως μία νέα εγγραφή {{module_name}}.',
  'LBL_HELP_CREATE_TITLE' => '{{module_name}} Δημιουργία',
  'LBL_HELP_DUPLICATE' => 'Το Sugar έχει εντοπίσει ότι η εγγραφή που προσπαθείτε να δημιουργήσετε μπορεί να υπάρχει ήδη. Για να τροποποιήσετε μια υπάρχουσα εγγραφή και όχι δημιουργία μίας νέας, κάντε κλικ στο κουμπί "Επιλογή και Επεξεργασία" στα δεξιά της εγγραφής που θέλετε. Οποιοδήποτε κενό πεδίο στην υπάρχουσα εγγραφή θα συμπληρώνεται με τις τιμές που μόλις πληκτρολογήσατε. Κάντε κλικ στο κουμπί "Αποθήκευση" για να κάνετε αυτές τις αλλαγές στην υπάρχουσα εγγραφή. Εάν, αντί αυτού, επιθυμείτε να χρησιμοποιήσετε τις τιμές που έχετε εισαγάγει μόνο αντί των τιμών για την υπάρχουσα εγγραφή, κάντε κλικ στην επιλογή "Επαναφορά στο αρχικό". Οι τιμές που εισαγάγατε θα εφαρμοστούν στη συνέχεια στην υπάρχουσα εγγραφή, και τώρα μπορείτε να παρέχετε πρόσθετες αλλαγές και κάντε κλικ "Αποθήκευση" για να οριστικοποιήσετε τις τροποποιήσεις στην υπάρχουσα εγγραφή. Για να δημιουργήσετε μια νέα εγγραφή, χρησιμοποιώντας τις τιμές που καταχωρήσατε, κάντε κλικ στην επιλογή "Παράβλεψη διπλότυπου και Αποθήκευση" στην επάνω δεξιά γωνία της οθόνης.',
  'LBL_HELP_DUPLICATE_TITLE' => 'Εντοπίστηκε πιθανά διπλότυπη εγγραφή',
  'LBL_HELP_MORE_INFO' => 'Για περισσότερες πληροφορίες, ανατρέξτε στη {{{more_info_url}}} {{plural_module_name}} τεκμηρίωση.{{{more_info_url_close}}}',
  'LBL_HELP_NO_HELP' => 'Μη Διαθέσιμα Δεδομένα',
  'LBL_HELP_PREVIEW' => 'Η βοήθεια του πίνακα στοιχείων, παρέχει συγκεκριμένες πληροφορίες που αφορούν την ενότητα που βλέπετε μαζί με μια σύνδεση με τα αντίστοιχα έγγραφα (π.χ. Τεκμηρίωση Δυνητικών Πελατών) στον οδηγό της Εφαρμογής για περισσότερες πληροφορίες.',
  'LBL_HELP_RECORD' => 'Η Προβολή της εγγραφής, παρέχει λεπτομερή στοιχεία σχετικά με μια μεμονωμένη εγγραφή, καθώς και ορισμένες λεπτομέρειες των εγγραφών που συνδέονται με αυτήν. 

- Επεξεργαστείτε αυτό το πεδίο εγγραφής κάνοντας κλικ στο μεμονωμένο πεδίο ή το κουμπί "Επεξεργασία".
- Προβάλετε ή τροποποιήστε συνδέσεις με άλλες εγγραφές στους υποπίνακες, από την εναλλαγή του κάτω αριστερού παραθύρου σε "Προβολή Δεδομένων".
- Αλληλεπιδράστε με τα σχόλια των χρηστών και την προβολή του ιστορικού των αλλαγών των εγγραφών, από την εναλλαγή του κάτω αριστερού παραθύρου "Ροή Δραστηριοτήτων".
- Ακολουθήστε ή κάντε Αγαπημένες εγγραφές χρησιμοποιώντας τα εικονίδια στα δεξιά του ονόματος της εγγραφής.
- Πρόσθετες ενέργειες είναι διαθέσιμες στο αναπτυσσόμενο μενού "Ενέργειες", δεξιά από το κουμπί "Επεξεργασία".',
  'LBL_HELP_RECORDS' => 'Η ενότητα της προβολή λίστας, εμφανίζει όλα τα αρχεία που πληρούν τα ισχύοντα κριτήρια για την αναζήτηση και στις οποίες οι χρήστες έχουν πρόσβαση. Μπορείτε να προβάλετε τις βασικές λεπτομέρειες κάθε εγγραφής, τις στήλες πεδίου της προβολής λίστας ή κάντε κλικ στο όνομα της εγγραφής για να ανοίξετε την προβολή της καρτέλας.',
  'LBL_HELP_RECORDS_TITLE' => 'Βοήθεια Προβολής Λίστας',
  'LBL_HELP_RECORD_TITLE' => 'Βοήθεια Προβολής Εγγραφής',
  'LBL_HIDE' => 'Απόκρυψη',
  'LBL_HIDE_COLUMNS' => 'Απόκρυψη Στηλών',
  'LBL_HIDE_SHOW' => 'Απόκρυψη/Εμφάνιση',
  'LBL_HISTORICAL_SUMMARY' => 'Περίληψη Ιστορικού',
  'LBL_HISTORICAL_SUMMARY_EMAIL_FROM' => 'Email Από',
  'LBL_HISTORICAL_SUMMARY_EMAIL_TO' => 'Email Σε',
  'LBL_HISTORY_DASHLET' => 'Ιστορικό',
  'LBL_HISTORY_DASHLET_DESCRIPTION' => 'Το Ιστορικό του Πίνακα στοιχείων εμφανίζει τις πραγματοποιημένες Συναντήσεις, Την Καταγραφή των Κλήσεων, τα Εισερχόμενα και Εξερχόμενα Emails.',
  'LBL_HISTORY_DASHLET_EMAIL_PLURAL' => 'Emails',
  'LBL_HISTORY_DASHLET_EMAIL_SINGULAR' => 'Email',
  'LBL_HISTORY_DASHLET_GROUP_BUTTON_LABEL' => 'Ιστορικό Ομάδας',
  'LBL_HISTORY_DASHLET_USER_BUTTON_LABEL' => 'Ιστορικό Μου',
  'LBL_HOME' => 'Αρχή',
  'LBL_HONEYPOT' => 'Αν είστε ένα πραγματικό πρόσωπο μην συμπληρώσετε αυτό.',
  'LBL_HOURS' => 'Ώρες',
  'LBL_ICON_COLUMN_1' => 'Στήλη',
  'LBL_ICON_COLUMN_2' => '2 Στήλες',
  'LBL_ICON_COLUMN_3' => '3 Στήλες',
  'LBL_ID' => 'Ταυτότητα',
  'LBL_ID_FF_ADD' => 'Προσθήκη',
  'LBL_ID_FF_CLEAR' => 'Εκκαθάριση',
  'LBL_ID_FF_REMOVE' => 'Αφαίρεση',
  'LBL_ID_FF_SELECT' => 'Επιλογή',
  'LBL_ID_FF_VCARD' => 'vCard',
  'LBL_IGNORE_DUPLICATE_AND_SAVE' => 'Παράβλεψη Αντιγράφου και Αποθήκευση',
  'LBL_IMAGE' => 'Εικόνα',
  'LBL_IMAGE_DELETE_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτήν την εικόνα;',
  'LBL_IMPORT' => 'Εισαγωγή',
  'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"Αυτό είναι ένα δείγμα εισαγωγής αρχείου, που παρέχει ένα παράδειγμα περιεχομένου ενός αρχείου που είναι έτοιμο για την εισαγωγή."<br />"Το αρχείο είναι οριοθετημένο με κόμματα .csv αρχείο, χρησιμοποιώντας διπλά εισαγωγικά ως προσδιοριστικό πεδίο."<br /><br />" Η γραμμή επικεφαλίδας είναι η κορυφαία γραμμή στο αρχείο, και περιέχει τις ετικέτες πεδίου όπως θα τα δείτε στην εφαρμογή."<br />"Αυτές οι ετικέτες χρησιμοποιούνται για τη χαρτογράφηση των δεδομένων στο αρχείο στα πεδία της εφαρμογής."<br /><br />"Σημειώσεις: Τα ονόματα της βάσης δεδομένων θα μπορούσε επίσης να χρησιμοποιηθούν στη γραμμή επικεφαλίδας. Αυτό είναι χρήσιμο όταν χρησιμοποιείτε το phpMyAdmin ή άλλο εργαλείο της βάσης δεδομένων, για να παρέχει μια εξαγώμενη λίστα των δεδομένων στην εισαγωγή."<br />"Η σειρά της στήλης δεν είναι κρίσιμη καθώς η διαδικασία εισαγωγής ταιριάζει με τα δεδομένα στα κατάλληλα πεδία, με βάση τη γραμμή επικεφαλίδας."<br /><br /><br />"Για να χρησιμοποιήσετε το αρχείο ως πρότυπο, κάντε τα ακόλουθα:"<br />"1. Αφαιρέστε τις σειρές δειγμάτων των δεδομένων"<br />"2. Αφαιρέστε το βοηθητικό κείμενο που διαβάζετε αυτήν την στιγμή"<br />"3. Εισάγετε τα δεδομένα σας στις σχετικές σειρές και στήλες"<br />"4. Αποθηκεύστε το αρχείο σε γνωστή τοποθεσία στο σύστημά σας"<br />"5. Πατήστε την επιλογή Εισαγωγή από το μενού Ενέργειες της εφαρμογής και επιλέξτε το αρχείο για να φορτώσετε"',
  'LBL_IMPORT_STARTED' => 'Έναρξη Εισαγωγής:',
  'LBL_IMPORT_VCARD' => 'Εισαγωγή vCard:',
  'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
  'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Εισαγωγή vCard',
  'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Εισαγωγή vCard',
  'LBL_INACTIVE_TASKS_DASHLET' => 'Ανενεργές Εργασίες',
  'LBL_INACTIVE_TASKS_DASHLET_COMPLETED' => 'Ολοκληρώθηκε',
  'LBL_INACTIVE_TASKS_DASHLET_DEFERRED' => 'Αναβαλλόμενη',
  'LBL_INACTIVE_TASKS_DASHLET_DESCRIPTION' => 'Οι Εργασίες του πίνακα στοιχείων εμφανίζονται αναβαλλόμενες και ολοκληρωμένες Εργασίες.',
  'LBL_INACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL' => 'Εργασίες Ομάδας',
  'LBL_INACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL' => 'Εργασίες Μου',
  'LBL_INBOUNDEMAIL_ID' => 'Ταυτότητα Εισερχόμενου Email',
  'LBL_INCORRECT_PASSWORD' => 'Σφάλμα: Εσφαλμένος Κωδικός Πρόσβασης.',
  'LBL_INFOINLINE' => 'Πληροφορίες',
  'LBL_INSTANCES' => 'Περιπτώσεις',
  'LBL_INSTANCE_ACTIVE' => 'Χρησιμοποιείτε ήδη αυτή την περίπτωση!',
  'LBL_INSTANCE_INVITE_SENT' => 'Η πρόσκληση εστάλη σε',
  'LBL_INSTANCE_IN_USE' => 'Περίπτωση σε Χρήση',
  'LBL_INSTANCE_SWITCH_FAILED' => 'Απέτυχε να μεταβεί τις περιπτώσεις',
  'LBL_INSTANCE_USERS' => 'Περιπτώσεις Χρηστών',
  'LBL_INVALID_412_RESPONSE' => 'Το αίτημα απέτυχε κάνοντας την εφαρμογή ακατάλληλη για χρήση. Παρακαλούμε, επικοινωνήστε με την τεχνική υποστήριξη.',
  'LBL_INVALID_CREDS' => 'Ο συνδυασμός όνομα χειριστή/κωδικός πρόσβασης είναι λανθασμένος, παρακαλώ δοκιμάστε ξανά.',
  'LBL_INVALID_CREDS_TITLE' => 'Άκυρα Πιστοποιητικά',
  'LBL_INVALID_FILE_EXTENSION' => 'Διαθέσιμη Επέκταση Αρχείου',
  'LBL_INVALID_GRANT' => 'Το σημείο σας είναι άκυρο ή έχει λήξει. Παρακαλώ συνδεθείτε ξανά.',
  'LBL_INVALID_GRANT_TITLE' => 'Ληγμένο Σημείο',
  'LBL_INVALID_REQUEST' => 'Το αίτημά σας είναι άκυρο ή ακατάλληλο. Παρακαλώ, επικοινωνήστε με την τεχνική υποστήριξη.',
  'LBL_INVALID_REQUEST_TITLE' => 'Άκυρο Αίτημα',
  'LBL_INVALID_USA_PHONE_FORMAT' => 'Παρακαλώ εισάγετε ένα αριθμητικό U.S αριθμό τηλεφώνου, συμπεριλαμβανομένου του κωδικού περιοχής.',
  'LBL_INVITE' => 'Πρόσκληση',
  'LBL_INVITED' => 'Προσκλήθηκε',
  'LBL_INVITEES' => 'Προσκεκλημένοι',
  'LBL_IS_EMPTY' => 'Είναι άδειο',
  'LBL_IS_NOT_EMPTY' => 'Δεν είναι άδειο',
  'LBL_ITEM_ID' => 'ταυτότητα στοιχείου',
  'LBL_ITEM_SUMMARY' => 'Περίληψη στοιχείου',
  'LBL_JOB_NOTIFICATION_BODY_GENERIC' => 'Η Προγραμματισμένη Εργασία έτρεξε επιτυχώς',
  'LBL_JOB_NOTIFICATION_DOC_LINK_TEXT' => 'Τεκμηρίωση διαμόρφωσης ευκαιριών',
  'LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_BODY' => 'Η Γραμμή Εσόδων στο δικό σας Sugar, έχει τώρα ενεργοποιηθεί και όλα τα υπάρχοντα δεδομένα Ευκαιριών έχουν υποστεί επεξεργασία. Τώρα μπορείτε να χρησιμοποιείτε το δικό σας Sugar, με την Γραμμή Εσόδων. Για περισσότερες πληροφορίες σχετικά με τις αλλαγές που έχουν γίνει, ανατρέξτε στο {{doc_url}}. Με εκτίμηση, SugarCRM',
  'LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_SUBJECT' => 'Η Γραμμή Εσόδων είναι τώρα Διαθέσιμη στο δικό σας Sugar',
  'LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_BODY' => 'Η Ενότητα "Προβλέψεις" στο Sugar σας, είναι τώρα διαθέσιμη για Χρήση με Ευκαιρίες. Όλα τα προηγούμενα δεδομένα πρόβλεψης commit στη γραμμή εσόδων έχουν αφαιρεθεί, και είναι έτοιμα για προβλέψεις που δημιουργούνται και που διαπράττονται με ευκαιρίες. Για περισσότερες πληροφορίες σχετικά με τις αλλαγές που έχουν γίνει, ανατρέξτε στο {{doc_url}}. Με εκτίμηση, SugarCRM',
  'LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_SUBJECT' => 'Η Ενότητα "Προβλέψεις", είναι τώρα έτοιμη για Χρήση με Ευκαιρίες στο Sugar σας',
  'LBL_JOB_NOTIFICATION_RLI_NOTE_BODY' => 'Η Γραμμή Εσόδων στο δικό σας Sugar, έχει τώρα απενεργοποιηθεί και όλα τα υπάρχοντα δεδομένα της Γραμμή Εσόδων έχουν υποστεί επεξεργασία. Τώρα μπορείτε να χρησιμοποιείτε το δικό σας Sugar, με  Ευκαιρίες. Για περισσότερες πληροφορίες σχετικά με τις αλλαγές που έχουν γίνει, ανατρέξτε στο {{doc_url}}. Με εκτίμηση, SugarCRM',
  'LBL_JOB_NOTIFICATION_RLI_NOTE_SUBJECT' => 'Η Γραμμή Εσόδων είναι τώρα Απενεργοποιημένη στο δικό σας Sugar',
  'LBL_JOB_NOTIFICATION_SUBJECT_GENERIC' => 'Οληκληρώθηκε η Προγραμματισμένη Εργασία',
  'LBL_JS_CALENDAR' => 'Ημερολόγιο',
  'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Μορφή Λειτουργικότητας - Alt+</strong><br/> I = <b>επεξεργασία</b>(προβολή πληροφορίας)<br/> U = <b>αντίγραφο</b> (προβολή πληροφορίας)<br/> D = <b>διαγραφή</b> (προβολή πληροφορίας)<br/> A = <b>αποθήκευση</b> (επεξεργασία πληροφορίας)<br/> L = ακύρωση<b>L</b> (επεξεργασία πληροφορίας) <br/><br/></p><p><strong>Αναζήτηση και Πλοήγηση  - Alt+</strong><br/> 7 = πρώτη είσοδος στην φόρμα Επεξεργασία<br/> 8 = Σύνδεσμος Προηγμένη Αναζήτηση<br/> 9 = Φόρμα Εισόδου Πρώτης Αναζήτησης<br/> 0 = Ενιαία εισόδος αναζήτησης<br></p>',
  'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Συντομεύσεις Πληκτρολογίου',
  'LBL_LANGUAGE' => 'Γλώσσα',
  'LBL_LAST_COMMIT' => 'Τελευταία Αντιστοίχηση:',
  'LBL_LAST_LOGIN' => 'Τελευταία σύνδεση',
  'LBL_LAST_TOUCHED' => 'Τελευταία ενέργεια {{relativetime}} την {{date}} στις {{time}}',
  'LBL_LAST_VIEWED' => 'Τελευταία Προβολή',
  'LBL_LATER' => 'Αργότερα',
  'LBL_LEADS' => 'Δυνητικοί Πελάτες',
  'LBL_LEARNING_RESOURCES_COMMUNITY_LINK' => 'Κοινοτικά Forums',
  'LBL_LEARNING_RESOURCES_COMMUNITY_TEASER' => 'Γίνεται μέλος στη συζήτηση, στην επίλυση προβλημάτων, και μοιραστείτε τις ιδέες σας με άλλους χρήστες.',
  'LBL_LEARNING_RESOURCES_DESC' => 'SugarCRM, Εκπαιδευτικό Υλικό',
  'LBL_LEARNING_RESOURCES_NAME' => 'Εκπαιδευτικό Υλικό',
  'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_LINK' => 'Πανεπιστήμιο της Sugar',
  'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_TEASER' => 'Γίνετε ένας εμπειρογνώμονας της Sugar με αναβάθμιση της εκπαίδευσης, βίντεο, μαθήματα, webinars, και πιστοποίηση.',
  'LBL_LEARNING_RESOURCES_SUPPORT_LINK' => 'Τεκμηρίωση & Υποστήριξη',
  'LBL_LEARNING_RESOURCES_SUPPORT_TEASER' => 'Μάθετε τις λεπτομέρειες για το πώς λειτουργεί η Sugar και πως εμπλέκονται με την υποστήριξη.',
  'LBL_LEARNING_RESOURCES_TITLE' => 'Εκπαιδευτικό Υλικό',
  'LBL_LEGAL' => 'Νόμιμο',
  'LBL_LESS' => 'λιγότερο',
  'LBL_LIKELY' => 'Πιθανή',
  'LBL_LIKELY_ADJUSTED' => 'Πιθανό (Προσαρμοσμένο)',
  'LBL_LINK_ACTIONS' => 'Ενέργειες',
  'LBL_LINK_ALL' => 'Όλες',
  'LBL_LINK_BUTTON' => 'Σύνδεσμος',
  'LBL_LINK_FROM_REPORT_NO_DATA' => 'Καμία Εγγραφή για σύνδεση.',
  'LBL_LINK_FROM_REPORT_SUCCESS' => '{{reportCount}} οι εγγραφές έχουν συνδεθεί.',
  'LBL_LINK_FROM_REPORT_WRONG_MODULE' => 'Η αναφορά που έχει επιλεγεί δεν βασίζεται στον σωστό τύπο ενότητας.',
  'LBL_LINK_MORE' => 'Περισσότερα',
  'LBL_LINK_NONE' => 'Κανένα',
  'LBL_LINK_RECORDS' => 'Εγγραφές',
  'LBL_LINK_SELECT' => 'Επιλογή',
  'LBL_LIST' => 'Λίστα',
  'LBL_LISTVIEW' => 'Προβολή Λίστας',
  'LBL_LISTVIEW_ACTIONS' => 'Ενέργειες',
  'LBL_LISTVIEW_ALL' => 'Όλες',
  'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Παρακαλώ επιλέξτε λιγότερες από 10 εγγραφές για να προχωρήσετε.',
  'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να ενημερώσετε ολόκληρη την λίστα;',
  'LBL_LISTVIEW_NONE' => 'Αποεπιλογή Όλων',
  'LBL_LISTVIEW_NO_RECORDS' => 'Δεν βρέθηκαν εγγραφές αυτή τη στιγμή.',
  'LBL_LISTVIEW_NO_SELECTED' => 'Παρακαλώ επιλέξτε τουλάχιστον 1 εγγραφή για να προχωρήσετε.',
  'LBL_LISTVIEW_OPTION_CURRENT' => 'Επιλογή Τρέχουσας Σελίδας',
  'LBL_LISTVIEW_OPTION_ENTIRE' => 'Επιλογή Όλων',
  'LBL_LISTVIEW_OPTION_SELECTED' => 'Επιλεγμένες Εγγραφές',
  'LBL_LISTVIEW_SELECTED_CLEAR' => 'Σαφείς επιλογές',
  'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Επιλεγμένα:',
  'LBL_LISTVIEW_SELECT_ALL_RECORDS' => 'Επιλέξτε όλες τις εγγραφές',
  'LBL_LISTVIEW_SELECT_AND_EDIT' => 'Επιλέξτε και επεξεργαστείτε',
  'LBL_LISTVIEW_TWO_REQUIRED' => 'Παρακαλώ επιλέξτε τουλάχιστον 2 εγγραφές για να προχωρήσετε.',
  'LBL_LIST_ACCOUNT_NAME' => 'Όνομα Λογαριασμού',
  'LBL_LIST_ASSIGNED_USER' => 'Χειριστής',
  'LBL_LIST_CONTACT_NAME' => 'Όνομα Επαφής',
  'LBL_LIST_CONTACT_ROLE' => 'Ρόλος Επαφής',
  'LBL_LIST_DATE_ENTERED' => 'Ημερομηνία Δημιουργίας',
  'LBL_LIST_EMAIL' => 'Email',
  'LBL_LIST_NAME' => 'Όνομα',
  'LBL_LIST_OF' => 'από',
  'LBL_LIST_PHONE' => 'Τηλέφωνο',
  'LBL_LIST_RELATED_TO' => 'Σχετίζεται με',
  'LBL_LIST_REMOVE_EMAIL_INFO' => 'Υπήρχε ένα επιπλέον email στην εγγραφή που τροποποιείτε.  Τώρα είναι η πρωτοβάθμια και συμπληρώθηκε παρακάτω.',
  'LBL_LIST_TEAM' => 'Ομάδα',
  'LBL_LIST_USER_NAME' => 'Όνομα Χειριστή',
  'LBL_LOADING' => 'Φορτώνει...',
  'LBL_LOADING_FILES' => 'Ακόμα φορτώνει τη λίστα καταλόγου. Παρακαλώ δοκιμάστε ξανά αργότερα',
  'LBL_LOADING_LANGUAGE' => 'Φορτώνει το πακέτο γλώσσας',
  'LBL_LOADING_PAGE' => 'Φόρτωση σελίδας, παρακαλώ περιμένετε...',
  'LBL_LOADING_PREVIEW' => 'Φόρτωση Προεπισκόπησης',
  'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Δαβίδ',
  'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
  'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Δρ.',
  'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Συνθηματικός Κώδικας',
  'LBL_LOGGED_OUT' => 'Έχετε αποσυνδεθεί.',
  'LBL_LOGIN_ADMIN_CALL' => 'Παρακαλώ επικοινωνήστε με τον Διαχειρστή του συστήματος.',
  'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Πάρα πολλές αποτυχημένες προσπάθειες σύνδεσης.',
  'LBL_LOGIN_BUTTON_KEY' => 'L',
  'LBL_LOGIN_BUTTON_LABEL' => 'Σύνδεση',
  'LBL_LOGIN_BUTTON_TITLE' => 'Σύνδεση',
  'LBL_LOGIN_FORGOT_PASSWORD' => 'Ξεχάσατε τον Κωδικό Πρόσβασης;',
  'LBL_LOGIN_FORM_LABEL' => 'Δείτε την καταγραφή σε μορφή',
  'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Μπορείτε να δοκιμάσετε να συνδεθείτε ξανά',
  'LBL_LOGIN_LOGIN_TIME_DAYS' => 'ημέρες.',
  'LBL_LOGIN_LOGIN_TIME_HOURS' => 'ω.',
  'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'λεπ.',
  'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'δευ.',
  'LBL_LOGIN_OPTIONS' => 'Επιλογές',
  'LBL_LOGIN_PASSWORD' => 'Κωδικός Πρόσβασης',
  'LBL_LOGIN_SUBMIT' => 'Υποβολή',
  'LBL_LOGIN_TO_ACCESS' => 'Παρακαλώ εγγραφείτε για να αποκτήσετε πρόσβαση σε αυτήν την περιοχή.',
  'LBL_LOGIN_USERNAME' => 'Όνομα Χρήστη',
  'LBL_LOGIN_WELCOME_TO' => 'Καλώς Ήλθατε στο',
  'LBL_LOGOUT' => 'Έξοδος',
  'LBL_LOWER_OR' => 'ή',
  'LBL_MAILMERGE' => 'Συγχώνευση Ταχυδρομείου',
  'LBL_MAILMERGE_KEY' => 'M',
  'LBL_MANAGE_SUBSCRIPTIONS' => 'Διαχείριση Συνδρομών',
  'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Διαχείριση Συνδρομών για',
  'LBL_MAP_BUTTON' => 'Map',
  'LBL_MARK_AS_FAVORITES' => 'Επισήμανση ως Αγαπημένο',
  'LBL_MASSUPDATE_DATE' => 'Επιλογή Ημερομηνίας',
  'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM' => 'Η Σφαιρική ομάδα δεν μπορεί να διαγραφεί.',
  'LBL_MASSUPDATE_DELETE_USER_EXISTS' => 'Αυτή η ιδιωτική ομάδα [{0}] δεν μπορεί να διαγραφεί μέχρις ότου ο χειριστής [{1}] διαγραφεί.',
  'LBL_MASS_UPDATE' => 'Μαζική Ενημέρωση',
  'LBL_MASS_UPDATE_ADD_FIELD' => 'Προσθήκη Πεδίου',
  'LBL_MASS_UPDATE_EMPTY_CONFIRM' => '"Άκυρο" για να διατηρήσετε τις υπάρχουσες τιμές. Επιβεβαιώστε για να αφαιρέσετε τις τιμές.',
  'LBL_MASS_UPDATE_EMPTY_VALUES' => 'Η ενημέρωση θα αφαιρέσει τις ακόλουθες τιμές:',
  'LBL_MASS_UPDATE_JOB_QUEUED' => 'Το αίτημά σας για μαζική ενημέρωση έχει προγραμματιστεί.',
  'LBL_MASS_UPDATE_REMOVE_FIELD' => 'Αφαίρεση Πεδίου',
  'LBL_MASS_UPDATE_SUCCESS' => 'Όλες οι εγγραφές ενημερώθηκαν με επιτυχία.',
  'LBL_MAXIMUM_OF' => 'Μέγιστο',
  'LBL_MAX_DASHLETS_REACHED' => 'Έχετε φτάσει στον μέγιστο αριθμό των Πινάκων Στοιχείων Αρχικής Σελίδας του Sugar που σας έχει ορίσει ο διαχειριστής. Παρακαλώ αφαιρέσετε έναν Πίνακα Στοιχείων για να προσθέσετε έναν νέο.',
  'LBL_MEETING' => 'Συνάντηση',
  'LBL_MEETINGS' => 'Συναντήσεις',
  'LBL_MEETINGS_SUBPANEL_TITLE' => 'Συναντήσεις',
  'LBL_MEETING_GO_BACK' => 'Επιστροφή στην συνάντηση',
  'LBL_MEMBERS' => 'Μέλη',
  'LBL_MEMBER_OF' => 'Μέλος Του',
  'LBL_MEMORY_USAGE' => 'Χρήση Μνήμης (bytes)',
  'LBL_MERGE' => 'Συγχώνευση',
  'LBL_MERGE_CONNECTORS' => 'Πάρτε Δεδομένα',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_MERGE_DUPLICATES' => 'Συγχώνευση',
  'LBL_MERGE_DUPLICATES_CONFIRM' => 'Αυτή η ενέργεια θα διαγράψει τις ακόλουθες εγγραφές:',
  'LBL_MERGE_DUPLICATES_FAIL_PROCESS' => 'Ορισμένες σχετιζόμενες εγγραφές δεν συγχωνεύτηκαν κατάλληλα. Ακύρωση για να ακυρώσετε. Επιβεβαίωση για να συνεχίσετε τη συγχώνευση.',
  'LBL_MERGE_DUPLICATES_PROCEED' => 'Θέλετε να συνεχίσετε; Ακύρωση για να ακυρώσετε. Επιβεβαίωση για διαγραφή των εγγραφών.',
  'LBL_MERGE_DUPLICATES_REMOVE' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτή την εγγραφή από συγχώνευση;',
  'LBL_MERGE_DUPLICATES_REMOVE_TOOLTIP' => 'Αφαίρεση εγγραφής από συγχώνευση',
  'LBL_MERGE_DUPLICATES_TITLE' => 'Συγχώνευση Σχετιζόμενων Εγγραφών',
  'LBL_MERGE_DUPLICATES_WARNING_CLOSE' => 'Η Συγχώνευση των Σχετιζόμενων Εγγραφών δεν ολοκληρώθηκε. Κάποιες εγγραφές παραμένουν μη συγχωνευμένες.',
  'LBL_MERGE_NO_ACCESS' => 'Δεν έχετε πρόσβαση να εκτελέσετε αυτήν την ενέργεια. Τουλάχιστον μία εγγραφή πρέπει να είναι επεξεργάσιμη.',
  'LBL_MERGE_NO_ACCESS_TO_A_FEW_RECORDS' => 'Μία ή περισσότερες επιλεγμένες εγγραφές δεν μπορούν να διαγραφούν. Οι εν λόγω εγγραφές έχουν αφαιρεθεί από την λίστα για συγχώνευση.',
  'LBL_MERGE_UNSAVED_CHANGES' => 'Όλες οι αλλαγές θα απορριφθούν όταν μεταβείτε σε μια νέα κύρια εγγραφή. Είστε βέβαιοι ότι θέλετε να μεταβείτε;',
  'LBL_MERIDIEM' => 'Μεσημβρία',
  'LBL_MESSAGE_BOX_TITLE' => 'Ειδοποίηση',
  'LBL_METHOD_NOT_ALLOWED' => 'Η μέθοδος HTTP δεν επιτρέπεται για αυτόν τον πόρο. Παρακαλώ επικοινωνήστε με την τεχνική υποστήριξη.',
  'LBL_METHOD_NOT_ALLOWED_TITLE' => 'Δεν Επιτρέπεται η Μέθοδος',
  'LBL_MINUTES' => 'Λεπτά',
  'LBL_MISSING_CUSTOM_DELIMITER' => 'Πρέπει να προσδιορίσετε έναν οριοθέτη προσαρμογής.',
  'LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_LINK_TEXT' => 'Ρυθμίσεις Email',
  'LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_SUBJECT' => 'Λείπουν οι ρυθμίσεις Διακομιστή SMTP',
  'LBL_MOBILE' => 'Κινητό Τηλέφωνο',
  'LBL_MOBILE_APP_VERSION' => 'Έκδοση Εφαρμογής',
  'LBL_MOBILE_CHOOSE_DOC' => 'Επιλογή εγγράφου',
  'LBL_MOBILE_CHOOSE_LOCATION' => 'Επιλογή τοποθεσίας',
  'LBL_MOBILE_CHOOSE_PHONE' => 'Επιλογή τηλεφωνικού αριθμού',
  'LBL_MOBILE_CHOOSE_RECIPIENT' => 'Επιλογή Παραλήπτη',
  'LBL_MOBILE_CHOOSE_URL' => 'Επιλογή Διεύθυνσης URL',
  'LBL_MOBILE_DELETE_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτή την εγγραφή;',
  'LBL_MOBILE_DESKTOP' => 'Έκδοση Επιφάνειας Εργασίας',
  'LBL_MOBILE_DETAIL_SHOW_LESS' => '...Λιγότερα',
  'LBL_MOBILE_DETAIL_SHOW_MORE' => 'Περισσότερα...',
  'LBL_MOBILE_DOC' => 'Έγγραφο',
  'LBL_MOBILE_DOWNLOAD_COMPLETED' => 'Η Λήψη Ολοκληρώθηκε: {{{this}}}',
  'LBL_MOBILE_DOWNLOAD_FAILED' => 'Η λήψη απέτυχε\\r\\n{{{this}}}',
  'LBL_MOBILE_DOWNLOAD_STARTED' => 'Ξεκίνησε η Λήψη: {{{this}}}',
  'LBL_MOBILE_EDIT_REL' => 'Επεξεργασία Σχέσης',
  'LBL_MOBILE_FEEDBACK' => 'Feedback',
  'LBL_MOBILE_LOGING_OUT' => 'Παρακαλώ περιμένετε ενώ αποσυνδέεται...',
  'LBL_MOBILE_LOG_CALL_CONFIRM' => 'Θα επιθυμούσατε να καταγράψετε την τελευταία τηλεφωνική σας κλήση;',
  'LBL_MOBILE_META_SYNC_FAILED' => 'Ανίκανο να συγχρονιστεί με τον διακομιστή. Προσπάθεια ξανά;',
  'LBL_MOBILE_META_SYNC_FAILED_RETRY' => 'Δεν είναι ικανό να συγχρονιστεί με τον διακομιστή. Επανάληψη;',
  'LBL_MOBILE_NO_ACTIONS_AVAILABLE' => 'Καμία Διαθέσιμη Ενέργεια',
  'LBL_MOBILE_NO_RECORDS' => 'Δεν βρέθηκαν εγγραφές',
  'LBL_MOBILE_PRIVACY_TERMS_CONDITIONS' => 'Όροι και Προϋποθέσεις Απορρήτου',
  'LBL_MOBILE_PROCESSING_FILE' => 'Προετοιμασία αρχείου...',
  'LBL_MOBILE_PROCESSING_IMAGE' => 'Πρετοιμασία εικόνας...',
  'LBL_MOBILE_PTR_PULL' => 'Τραβήξτε κάτω για ανανέωση...',
  'LBL_MOBILE_PTR_RELEASE' => 'Αποδέσμευση για ανανέωση...',
  'LBL_MOBILE_RELOGIN_BUTTON' => 'Επανα-σύνδεση',
  'LBL_MOBILE_SEARCH_TEAMS' => 'Αναζήτηση όλων των ομάδων...',
  'LBL_MOBILE_SELECT_TEAMS' => 'Επιλογή Ομάδων',
  'LBL_MOBILE_SERVER_URL' => 'Διεύθυνση Διακομιστή URL:',
  'LBL_MOBILE_SERVER_VERSION' => 'Έκδοση Διακομιστή',
  'LBL_MOBILE_SHOW_MORE' => 'Προβολή περισσοτέρων...',
  'LBL_MOBILE_SHOW_MORE_TOP' => 'Προβολή περισσοτέρων...',
  'LBL_MOBILE_SUPPORT' => 'Υποστήριξη',
  'LBL_MOBILE_TUTORIAL_CONTROL_PANEL' => 'Χρησιμοποιήστε το βέλος παρακάτω για μια γρήγορη περιήγηση μέσα από τα βασικά στοιχεία αυτού του μενού.',
  'LBL_MOBILE_TUTORIAL_DETAIL_BACK' => 'Πηγαίνετε στην προηγούμενη σελίδα.',
  'LBL_MOBILE_TUTORIAL_DETAIL_BACK_TABLET' => 'Πηγαίνετε πίσω.',
  'LBL_MOBILE_TUTORIAL_DETAIL_CARD' => 'Οι σημαντικότερες πληροφορίες για μία εγγραφή.',
  'LBL_MOBILE_TUTORIAL_DETAIL_FOLLOW' => 'Follow/Unfollow μία εγγραφή.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO' => 'Αυτή είναι η σελίδα λεπτομερειών.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO_TEXT' => 'Η προβολή λεπτομερειών, ανοίγει από την δεξιά πλευρά της οθόνης σας.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO_TITLE' => 'Λεπτομέρειες',
  'LBL_MOBILE_TUTORIAL_DETAIL_RECORD_ACTIONS' => 'Διαθέσιμες ενέργειες σε μία εγγραφή.',
  'LBL_MOBILE_TUTORIAL_DETAIL_RELATE_LINK' => 'Κάντε κλικ, για να ανοίξετε μία σχετική εγγραφή.',
  'LBL_MOBILE_TUTORIAL_DETAIL_RIGHT_ACTION' => 'Προβολή πρόσθετων πληροφοριών ή εεπεξεργασία μιας εγγραφής.',
  'LBL_MOBILE_TUTORIAL_DETAIL_SHOW_MORE' => 'Κάντε κλικ για να επεκτείνετε τις λεπτομερείς πληροφορίες.',
  'LBL_MOBILE_TUTORIAL_HOME_CREATE' => 'Διαθέσιμες ενέργειες ανά προβολή.',
  'LBL_MOBILE_TUTORIAL_HOME_END' => 'Απολαύστε όλα τα νέα χαρακτηριστικά!',
  'LBL_MOBILE_TUTORIAL_HOME_FAVORITES_BTN' => 'Φιλτράρισμα της λίστας για να εμφανίσει τις αγαπημένες μου εγγραφές.',
  'LBL_MOBILE_TUTORIAL_HOME_FAVORITES_ICON' => 'Επισήμανση εγγραφής, ως αγαπημένη.',
  'LBL_MOBILE_TUTORIAL_HOME_GRIP' => 'Διαθέσιμες ενέργειες σε μία εγγραφή.',
  'LBL_MOBILE_TUTORIAL_HOME_INTRO' => 'Καλώς Ήλθατε στη SugarCRM.<br/><br/> Επιτρέψτε μας, να σας επισημάνουμε ορισμένα νέα χαρακτηριστικά...',
  'LBL_MOBILE_TUTORIAL_HOME_LOGO' => 'Πλοήγησ στο κεντρικό μενού.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_DESKTOP' => 'Open Sugar  στο πρόγραμμα περιήγησης.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO' => 'Αυτό είναι το αρχικό μενού.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO_TEXT' => 'Το κεντρικό μενού, ανοίγει από την αριστερή πλευρά της οθόνης σας.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO_TITLE' => 'Προβολή Κεντρικού Μνεού.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_LOGO' => 'Κλείστε το αρχικό μενού.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_MODULES' => 'Προβολή μιας συγκεκριμένης ενότητας.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_PROFILE' => 'Προβολή του προφίλ σας.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_SETTINGS' => 'Προσαρμόστε την εφαρμογή.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_TOUR' => 'Πρόσβαση στη Περιήγηση ανά πάσα στιγμή.',
  'LBL_MOBILE_TUTORIAL_HOME_MY_ITEMS_BTN' => 'Φιλτράρισμα της λίστας για να εμφανίσει τις ανατεθειμένες μου εγγραφές.',
  'LBL_MOBILE_TUTORIAL_HOME_RECENT' => 'Πιο πρόσφατες τροποποιημένες εγγραφές.',
  'LBL_MOBILE_TUTORIAL_HOME_SEARCH' => 'Σφαιρική αναζήτηση για εγγραφές.',
  'LBL_MOBILE_TUTORIAL_HOME_UPCOMING' => 'Επερχόμενα γεγονότα μου ξεκινώντας από σήμερα.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_ACTIONS' => 'Επιλέξτε τη συγκεκριμένη ενέργεια για να δει για να εκτελέσει',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_CREATE' => 'Κλείστε το πρόσθετο μενού.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_INTRO' => 'Αυτο είναι το πρόσθετο μενού',
  'LBL_MOBILE_UNLINK_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να αποσυνδέσετε αυτή την εγγραφή;',
  'LBL_MOBILE_UPLOAD_IN_PROGRESS' => 'Μεταφόρτωση αρχείου...',
  'LBL_MOBILE_UPLOAD_SUCCESS' => 'Το αρχείο μεταφορτώθηκε με επιτυχία',
  'LBL_MOBILE_WAIT' => 'Παρακαλώ περιμένετε...',
  'LBL_MODIFIED' => 'Τροποποιήθηκε από',
  'LBL_MODIFIED_BY_USER' => 'Τροποποιήθηκε από Χρήστη',
  'LBL_MODIFIED_ID' => 'Τροποποιήθηκε από Ταυτότητα',
  'LBL_MODIFIED_NAME' => 'Τροποποιήθηκε Από',
  'LBL_MODIFIED_USER' => 'Τροποποιήθηκε από Χρήστη',
  'LBL_MODIFY_CURRENT_SEARCH' => 'Τροποποίηση τρέχουσας αναζήτησης',
  'LBL_MODULE' => 'Ενότητα',
  'LBL_MODULE_ALL' => 'Όλες',
  'LBL_MODULE_ATTACHMENTS_TITLE' => '{{module}} επισυνάψεις',
  'LBL_MODULE_FILTER' => 'Φιλτράρισμα ανά...',
  'LBL_MODULE_NAME' => 'Όνομα Ενότητας',
  'LBL_MODULE_TYPE' => 'Τύπος',
  'LBL_MONITOR_ID' => 'Ταυτότητα Οθόνης',
  'LBL_MONTH_TIMEPERIOD_FORMAT' => '{0}',
  'LBL_MORE' => 'Περισσότερα',
  'LBL_MOREDETAIL' => 'Περισσότερες Λεπτομέρειες',
  'LBL_MORE_ACTION' => 'Περισσότερες Ενέργειες',
  'LBL_MORE_HISTORY' => 'Περισσότερο ιστορικό...',
  'LBL_MORE_MODULES' => 'Περισσότερες Ενότητες',
  'LBL_MY_ACCOUNT' => 'Ρυθμίσεις Μου',
  'LBL_MY_AREA_LINKS' => 'Σύνδεσμος περιοχής μου:',
  'LBL_NAME' => 'Όνομα',
  'LBL_NAVIGATE_TO_REPORTS' => 'Μεταφέρεστε στην ενότητα Αναφορών. Οι αλλαγές σας στον πίνακα στοιχείων αρχικής σελίδας, δεν θα αποθηκευτούν. Συνέχεια;',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => 'Δημιουργία',
  'LBL_NEW_BUTTON_TITLE' => 'Δημιουργία',
  'LBL_NEW_PAGE_FEEDBACK' => 'Έχετε δημιουργήσει μία νέα σελίδα. Μπορείτε να προσθέσετε νέο περιεχόμενο με την επιλογή Προσθήκη Πίνακα Στοιχείων Αρχικής Σελίδας του Sugar.',
  'LBL_NEW_PASSWORD1' => 'Nέος Κωδικός Πρόσβασης:',
  'LBL_NEW_PASSWORD2' => 'Επιβεβαίωση Κωδικού Πρόσβασης',
  'LBL_NEW_USER_PASSWORD_1' => 'Ο Κωδικός Πρόσβασης άλλαξε με επιτυχία.',
  'LBL_NEW_WEB_VERSION' => 'Μια νέα έκδοση του SugarCRM Mobile είναι διαθέσιμη. Θέλετε να αναβαθμίσετε;',
  'LBL_NEXT_BUTTON_LABEL' => 'Επόμενο',
  'LBL_NEXT_FRIDAY' => 'επόμενη Παρασκευή',
  'LBL_NEXT_MONDAY' => 'επόμενη Δευτέρα',
  'LBL_NEXT_MONTH' => 'επόμενο μήνα',
  'LBL_NEXT_TIMEPERIOD' => 'Επόμενη Χρονική Περίοδος',
  'LBL_NEXT_WEEK' => 'επόμενη εβδομάδα',
  'LBL_NEXT_YEAR' => 'επόμενο έτος',
  'LBL_NO' => 'Όχι',
  'LBL_NONE' => '-κανένα-',
  'LBL_NOTES' => 'Σημειώσεις',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Σημειώσεις',
  'LBL_NOTIFICATIONS' => 'Ανακοινώσεις',
  'LBL_NOT_AUTHORIZED' => 'Δεν έχετε δικαίωμα να δείτε αυτή την εγγραφή.',
  'LBL_NOT_AVAILABLE' => 'όχι διαθέσιμο',
  'LBL_NO_ACCESS' => '(Δεν έχετε Πρόσβαση)',
  'LBL_NO_ACCESS_LOWER' => 'Κανένα Δικαίωμα Πρόσβασης',
  'LBL_NO_ACTION' => 'Δεν υπάρχει καμία δράση από εκείνο το όνομα.',
  'LBL_NO_DATA' => 'Κανένα Δεδομένο',
  'LBL_NO_DATA_AVAILABLE' => 'Δεν βρέθηκαν εγγραφές.',
  'LBL_NO_FIELD_ACCESS' => 'Κανένα Δικαίωμα Πρόσβασης',
  'LBL_NO_FLASH_PLAYER' => 'Μπορείτε είτε να έχετε απενεργοποιήσετε το Abobe Flash, είτε να χρησιμοποιείτε μια παλαιότερη έκδοση του Adobe Flash Player. Για να πάρετε την πιο πρόσφατη έκδοση του Flash Player, <a href="http://www.adobe.com/go/getflashplayer/">πατήστε εδώ</a>.',
  'LBL_NO_IMAGE' => 'Καμία Εικόνα',
  'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Δεν υπάρχουν διαθέσιμα πεδία για τη λειτουργία Μαζικής Ενημέρωσης',
  'LBL_NO_PDF_TEMPLATE' => 'Δεν βρέθηκε πρότυπο PDF.',
  'LBL_NO_RECORDS_FOUND' => '- 0 Εγγραφές Βρέθηκαν -',
  'LBL_NUMBER_OF_COLUMNS' => 'Επιλέξτε τον αριθμό των στηλών',
  'LBL_OBJECT_IMAGE' => 'εικόνα αντικειμένου',
  'LBL_OC_DEFAULT_STATUS' => 'Ανενεργή',
  'LBL_OC_STATUS' => 'Προεπιλογή Κατάσταση Offline Client',
  'LBL_OC_STATUS_TEXT' => 'Υποδεικνύει εάν ο τρέχων χρήστης είναι σε θέση ή δεν είναι σε θέση, να χρησιμοποιήσει τον Offline  Client.',
  'LBL_OFFLINE_CLEAN_UP_PROMPT' => 'Αυτή η ενέργεια θα διαγράψει εγγραφές που δεν έχουν πρόσβαση. Να συνεχίσει;',
  'LBL_OFFLINE_CLEAR_DB' => 'Εκκαθάριση χώρου Αποθήκευσης...',
  'LBL_OFFLINE_CLEAR_DB_PROMPT' => 'Μήπως θέλετε να διαγράψετε όλες τις εγγραφές από την τοπική αποθήκευση;',
  'LBL_OFFLINE_COMPACT_DB' => 'Συμπαγή Aποθήκευση...',
  'LBL_OFFLINE_DB_CLEANING_COMPLETED' => 'Η Εκκαθάριση ολοκληρώθηκε',
  'LBL_OFFLINE_DB_CLEANING_IN_PROGRESS' => 'Εκκαθάριση αποθήκευσης...',
  'LBL_OFFLINE_DB_SIZE' => 'Μέγεθος βάσης δεδομένων',
  'LBL_OFFLINE_DELETED' => 'Δεν βρέθηκε εγγραφή.',
  'LBL_OFFLINE_DELETED_RELATED' => 'Η σχετική εγγραφή δεν βρέθηκε. Ίσως έχει διαγραφεί ή αποσυνδεθεί.',
  'LBL_OFFLINE_DISABLED' => 'Κατάσταση λειτουργίας χωρίς σύνδεση Offline',
  'LBL_OFFLINE_DISABLE_PROMPT' => 'Είστε βέβαιοι ότι θέλετε να απενεργοποιήσετε την υποστήριξη σε offline; Όλες οι αλλαγές εν αναμονή συγχρονισμού θα χαθούν.',
  'LBL_OFFLINE_ENABLED' => 'Ενεργοποιημένο Offline',
  'LBL_OFFLINE_ENABLE_PROMPT' => 'Είστε βέβαιοι ότι θέλετε να ενεργοποιήσετε την υποστήριξη σε offline;',
  'LBL_OFFLINE_LAST_SYNC_TS' => 'Τελευταία προσπάθεια συγχρονισμού: {{ts}}',
  'LBL_OFFLINE_MERGE_DATA_CONFIRM' => 'Κάποιος έχει επιμεληθεί την ίδια εγγραφή στον διακομιστή. Επιβεβαιώση για αυτόματη-συγχώνευση των αλλαγών σας, ή απόρριψη για να τις απορρίψει.',
  'LBL_OFFLINE_MODE' => 'Κατάσταση Offline',
  'LBL_OFFLINE_PREFETCHING' => 'Φόρτωση εγγραφών...',
  'LBL_OFFLINE_PREFETCHING_EST_TIME' => 'Χρόνος είναι περίπου {{estimatedTime}}s...',
  'LBL_OFFLINE_PREFETCHING_MODULE' => 'Φόρτωση {{module}} {{progressValue}}...',
  'LBL_OFFLINE_PREFETCHING_MODULE_COMPLETE' => 'Φόρτωση {{module}} ολοκληρώθηκε',
  'LBL_OFFLINE_PREFETCH_ACTION' => 'Κατεβάστε τις εγγραφές σας...',
  'LBL_OFFLINE_PREFETCH_ERROR' => 'Σφάλμα κατά την λήψη των εγγραφών',
  'LBL_OFFLINE_PREFETCH_FIRST_PROMPT' => 'Θα θέλατε στις ανατεθειμένες, αγαπημένες και ακολουθημένες εγγραφές σας να γίνει λήψη τώρα για offline πρόσβαση; Μια γρήγορη σύνδεση συνιστάται καθώς αυτή η λειτουργία ενδέχεται να πάρει κάποιο χρόνο. Μπορείτε να τα κατεβάσετε αργότερα από το Κύριο Μενού > Offline.',
  'LBL_OFFLINE_PREFETCH_PROMPT' => 'Η Λήψη των ανατεθειμένων, αγαπημένων και ακολουθημένων εγγραφών σας για offline πρόσβαση, μπορεί να πάρει κάποιο χρόνο για να ολοκληρωθεί. Συνιστάται μια γρήγορη σύνδεση. Θέλετε να συνεχίσετε;',
  'LBL_OFFLINE_PREFETCH_SUCCESS' => 'Η λήψη των εγγραφών ολοκληρώθηκε με επιτυχία',
  'LBL_OFFLINE_RECORDS_PER_MODULE' => 'Εγγραφές ανά ενότητα',
  'LBL_OFFLINE_ROLLBACK_FAILED' => 'Η επαναφορά απέτυχε',
  'LBL_OFFLINE_ROLLBACK_PROMPT' => 'Θέλετε να κάνετε επαναφορά αυτής της αλλαγής;',
  'LBL_OFFLINE_ROLLBACK_SUCCESS' => 'Η επαναφορά ολοκληρώθηκε',
  'LBL_OFFLINE_SERVER_FETCH' => 'Λήψη από το διακομιστή...',
  'LBL_OFFLINE_SETTINGS' => 'Ρυθμίσεις Debug',
  'LBL_OFFLINE_STATS' => 'Στατιστικά στοιχεία αποθήκευσης',
  'LBL_OFFLINE_STATUS_BAD_NETWORK' => 'Δεν είναι δυνατή η πρόσβαση στον διακομιστή.',
  'LBL_OFFLINE_STATUS_NO_PENDING_TX' => 'Καμία αλλαγή εν αναμονή συγχρονισμού.',
  'LBL_OFFLINE_STATUS_OFFLINE' => 'Η συσκευή είναι offline.',
  'LBL_OFFLINE_STATUS_ONLINE' => 'Η συσκευή είναι online.',
  'LBL_OFFLINE_STATUS_PENDING_TX' => 'οΙ Αλλαγές είναι εν αναμονή συγχρονισμού.',
  'LBL_OFFLINE_STATUS_SYNC_FAILED' => 'Η τελευταία προσπάθεια συγχρονισμού απέτυχε. Ελέγξτε την καταγραφή συναλλαγής.',
  'LBL_OFFLINE_SYNC_IN_PROGRESS' => 'Συγχρονισμός σε εξέλιξη...',
  'LBL_OFFLINE_TOTAL_RECORDS_COUNT' => 'Συνολικός αριθμός εγγραφών',
  'LBL_OFFLINE_TRANSACTION_SYNCED' => 'Συναλλαγή συγχρονισμού.',
  'LBL_OK' => 'Εντάξει',
  'LBL_OLD_ACCOUNT_LINK' => 'Παλαιός Λογαριασμός',
  'LBL_ONLY_IMAGE_ATTACHMENT' => 'Μόνο συνημμένος τύπος εικόνας μπορεί να ενσωματωθεί',
  'LBL_OPENALL_BUTTON_KEY' => 'O',
  'LBL_OPENALL_BUTTON_LABEL' => 'Άνοιγμα Όλων',
  'LBL_OPENALL_BUTTON_TITLE' => 'Άνοιγμα Όλων',
  'LBL_OPENTO_BUTTON_KEY' => 'T',
  'LBL_OPENTO_BUTTON_LABEL' => 'Άνοιγμα Σε:',
  'LBL_OPENTO_BUTTON_TITLE' => 'Άνοιγμα Σε: [Alt+T]',
  'LBL_OPEN_ITEMS' => 'Άνοιγμα στοιχείων:',
  'LBL_OPERATOR_IN_TEXT' => 'είναι ένα από τα ακόλουθα:',
  'LBL_OPERATOR_NOT_IN_TEXT' => 'δεν είναι ένα από τα ακόλουθα:',
  'LBL_OPPORTUNITIES' => 'Ευκαιρίες',
  'LBL_OPPORTUNITY' => 'Ευκαιρία',
  'LBL_OPPORTUNITY_METRICS' => 'Ευκαιρία Μετρήσεων',
  'LBL_OPPORTUNITY_NAME' => 'Όνομα Ευκαιρίας',
  'LBL_OPTIONAL' => 'Προαιρετικό',
  'LBL_OPTIONS' => 'Επιλογές',
  'LBL_OPT_OUT_FLAG_PRIMARY' => 'Αποχωρημένο Βασικό Email',
  'LBL_OR' => 'Ή',
  'LBL_ORG_CHART' => 'Οργανόγραμμα',
  'LBL_ORG_CHART_DESC' => 'Εμφανίζει τη δομή των εργαζομένων της εταιρείας σας.',
  'LBL_ORG_CHART_TOOLTIP_NODES' => 'Εμφάνιση όλων των κόμβων',
  'LBL_ORG_CHART_TOOLTIP_TOGGLE' => 'Εναλλαγή προσανατολισμού',
  'LBL_ORG_CHART_TOOLTIP_ZOOM' => 'Ζουμ για να χωρέσει',
  'LBL_OUTBOUND_EMAIL_ADD_SERVER' => 'Προσθήκη Διακομιστή...',
  'LBL_OVERDUE' => 'Εκπρόθεσμο',
  'LBL_OVERWRITE_POPULATED_DATA_FROM' => 'Από:',
  'LBL_OVERWRITE_POPULATED_DATA_TO' => 'Σε:',
  'LBL_PAGE_NAME' => 'Όνομα Σελίδας',
  'LBL_PANEL_ADVANCED' => 'Περισσότερες πληροφορίες',
  'LBL_PANEL_ASSIGNMENT' => 'Άλλο:',
  'LBL_PANEL_BODY' => 'Επισκόπηση',
  'LBL_PANEL_DEFAULT' => 'Προεπιλογή',
  'LBL_PARENT_TYPE' => 'Γονικός Τύπος',
  'LBL_PASSWORD' => 'Κωδικός Πρόσβασης',
  'LBL_PASSWORD_REQUEST_ERROR' => 'Υπήρξε ένα πρόβλημα κατά την ανάκτηση του ονόματος του χρήστη σας και ο συνδυασμός email .',
  'LBL_PASSWORD_REQUEST_SENT' => 'Η αίτησή σας έχει υποβληθεί.',
  'LBL_PASSWORD_UPDATE_GENERIC_ISSUE' => 'Σφάλμα: Υπήρξε ένα πρόβλημα κατά την ενημέρωση του κωδικού πρόσβασης για αυτόν τον χρήστη.',
  'LBL_PA_PRODEF_HAS_PENDING_PROCESSES' => 'Δεν μπορείτε να διαγράψετε αυτόν τον Ορισμό Διεργασίας, επειδή υπάρχουν εκκρεμείς διεργασίες που τρέχουν.',
  'LBL_PDF_EMAIL' => 'Email PDF',
  'LBL_PDF_VIEW' => 'Λήψη PDF',
  'LBL_PENDING_NOTIFICATIONS' => 'Ειδοποιήσεις',
  'LBL_PERCENTAGE_SYMBOL' => '%',
  'LBL_PHASE' => 'Εύρος',
  'LBL_PICTURE_FILE' => 'Εικόνα',
  'LBL_PLANNED_ACTIVITIES_DASHLET' => 'Προγραμματισμένες Δραστηριότητες',
  'LBL_PLANNED_ACTIVITIES_DASHLET_CONFIRM_CLOSE' => 'Είστε βέβαιοι ότι θέλετε να σημάνετε {0} ως κλειστό;',
  'LBL_PLANNED_ACTIVITIES_DASHLET_DESCRIPTION' => 'Οι Προγραμματισμένες Δραστηριότητες του Πίνακα Στοιχείων εμφανίζουν τις προγραμματισμένες Συναντήσεις και Κλήσεις.',
  'LBL_PLANNED_ACTIVITIES_DASHLET_FUTURE_BUTTON_LABEL' => 'Μέλλον',
  'LBL_PLANNED_ACTIVITIES_DASHLET_GROUP_BUTTON_LABEL' => 'Δραστηριότητες Ομάδας',
  'LBL_PLANNED_ACTIVITIES_DASHLET_HELD_ACTIVITY' => 'Πραγματοποιήθηκε',
  'LBL_PLANNED_ACTIVITIES_DASHLET_TODAY_BUTTON_LABEL' => 'Σήμερα',
  'LBL_PLANNED_ACTIVITIES_DASHLET_USER_BUTTON_LABEL' => 'Δραστηριότητες Μου',
  'LBL_PLEASE_SELECT' => 'Παρακαλώ Eπιλέξτε',
  'LBL_PLUGINS_DESC' => 'Διαβάστε για τα χαρακτηριστικά του plug-in στο <a href="https://www.sugarcrm.com/crm/support/documentation/SugarPlugIns">Plug-ins Documentation</a>.',
  'LBL_PLUGINS_LOTUS_TITLE' => 'Sugar Plug-ins for Lotus Notes<sup>TM</sup>',
  'LBL_PLUGINS_TITLE' => 'Sugar Plug-ins for Microsoft Office<sup>TM</sup>',
  'LBL_PLUGIN_EXCEL_DESC' => 'Ενσωμάτωση του Sugar με υπολογιστικά φύλλα για την καλύτερη ανάλυση των βασικών μετρήσεων.',
  'LBL_PLUGIN_EXCEL_NAME' => 'Sugar Plug-in for Excel',
  'LBL_PLUGIN_LOTUS_DESC' => 'Ενσωμάτωση Sugar με Lotus Notes.',
  'LBL_PLUGIN_LOTUS_NAME' => 'Sugar Plug-in For Lotus Notes',
  'LBL_PLUGIN_OUTLOOK_DESC' => 'Ενσωμάτωση πληροφοριών ημερολογίου και email του Sugar με το Microsoft Outlook.',
  'LBL_PLUGIN_OUTLOOK_NAME' => 'Sugar Plug-in for Outlook',
  'LBL_PLUGIN_WORD_DESC' => 'Αυτόματη συμπλήρωση πληροφοριών από το SugarCRM σε μορφή επιστολών, άμεσο ηλεκτρονικό ταχυδρομείο και άλλα Microsoft έγγραφα.',
  'LBL_PLUGIN_WORD_NAME' => 'Sugar Plug-in for Word',
  'LBL_PLUS_INLINE' => 'Προσθήκη',
  'LBL_PMSE_ALL_PROCESSES_LABEL' => 'Όλες οι Διεργασίες',
  'LBL_PMSE_BUSINESS_RULES_DASHLET' => 'Διεργασία Επιχειρησιακών Κανόνων',
  'LBL_PMSE_BUSINESS_RULES_DASHLET_DESCRIPTION' => 'Η Διεργασία Επιχειρησιακών Κανόνων στον Πίνακα Στοιχείων της Αρχικής Σελίδας, εμφανίζει τα πρότυπα που μπορούν να χρησιμοποιηθούν στο εσωτερικό της Διεργασίας Συγγραφέα.',
  'LBL_PMSE_CANCELLED_STATUS' => 'Άκυρη',
  'LBL_PMSE_COMPLETED_STATUS' => 'Ολοκληρώθηκε',
  'LBL_PMSE_EMAIL_TEMPLATES_DASHLET' => 'Διεργασία Προτύπου Email',
  'LBL_PMSE_EMAIL_TEMPLATES_DASHLET_DESCRIPTION' => 'Η Διεργασία Προτύπου Email στον Πίνακα Στοιχείων της Αρχικής Σελίδας, εμφανίζει τα πρότυπα που μπορούν να χρησιμοποιηθούν στο εσωτερικό της Διεργασίας Συγγραφέα.',
  'LBL_PMSE_ERROR_STATUS' => 'Σφάλμα',
  'LBL_PMSE_IN_PROGESS_STATUS' => 'Σε Εξέλιξη',
  'LBL_PMSE_PROCESSES_DASHLET' => 'Διεργασίες',
  'LBL_PMSE_PROCESSES_DASHLET_DESCRIPTION' => 'Η Διεργασία στον Πίνακα Στοιχείων της Αρχικής Σελίδας, εμφανίζει τα πρότυπα που μπορούν να χρησιμοποιηθούν στο εσωτερικό της Διεργασίας Συγγραφέα.',
  'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET' => 'Ορισμοί Διεργασιών',
  'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET_DESCRIPTION' => 'Οι Ορισμοί Διεργασιών στον Πίνακα Στοιχείων της Αρχικής Σελίδας, εμφανίζει τα πρότυπα που μπορούν να χρησιμοποιηθούν στο εσωτερικό της Διεργασίας Συγγραφέα.',
  'LBL_PMSE_PROCESS_STATUS_CHART_DESCRIPTION' => 'Πληροφορίες Κατάστασης Διεργασίας',
  'LBL_PMSE_PROCESS_STATUS_CHART_NAME' => 'Περίληψη Κατάστασης Διεργασίας',
  'LBL_PMSE_PROCESS_USERS_CHART_DESCRIPTION' => 'Εκκρεμείς Δραστηριότητες ανά Διεργασία',
  'LBL_PMSE_PROCESS_USERS_CHART_NAME' => 'Εκκρεμείς Δραστηριότητες ανά Διεργασία',
  'LBL_PMSE_PROCESS_USERS_CHART_NAME_RECORD' => 'Εκκρεμείς Δραστηριότητες',
  'LBL_PMSE_SETTINGS' => 'Ρυθμίσεις',
  'LBL_PMSE_TERMINATED_STATUS' => 'Τερματίστηκε',
  'LBL_PORTAL_AUTH_FAILED' => 'Απέτυχε η πιστοποίηση πελάτη.',
  'LBL_PORTAL_AUTH_FAILED_TITLE' => 'Άκυρος Πελάτης',
  'LBL_PORTAL_ERROR' => 'Λάθος',
  'LBL_PORTAL_INVALID_CREDS' => 'Ο συνδυασμός όνομα χειριστή/κωδικός πρόσβασης είναι λανθασμένος, παρακαλώ δοκιμάστε ξανά.',
  'LBL_PORTAL_INVALID_CREDS_TITLE' => 'Άκυρα Πιστοποιητικά',
  'LBL_PORTAL_INVALID_GRANT' => 'Το σημείο σας είναι άκυρο ή έχει λήξει. Παρακαλώ συνδεθείτε ξανά.',
  'LBL_PORTAL_INVALID_GRANT_TITLE' => 'Ληγμένο Σημείο',
  'LBL_PORTAL_INVALID_REQUEST' => 'Το αίτημά σας είναι άκυρο ή ακατάλληλο. Παρακαλώ, επικοινωνήστε με την τεχνική υποστήριξη.',
  'LBL_PORTAL_INVALID_REQUEST_TITLE' => 'Άκυρο Αίτημα',
  'LBL_PORTAL_LOADING' => 'Φορτώνει',
  'LBL_PORTAL_LOGIN_FORGOTPASSWORD' => 'Πρέπει να επικοινωνήσετε με τον διαχειριστή του Sugar, για να επαναφέρετε τον κωδικό πρόσβασής σας.',
  'LBL_PORTAL_LOGIN_PASSWORD' => 'Κωδικός Πρόσβασης',
  'LBL_PORTAL_LOGIN_USERNAME' => 'Όνομα Χειριστή',
  'LBL_PORTAL_METHOD_NOT_ALLOWED' => 'Η μέθοδος HTTP δεν επιτρέπεται για αυτόν τον πόρο. Παρακαλώ επικοινωνήστε με την τεχνική υποστήριξη.',
  'LBL_PORTAL_METHOD_NOT_ALLOWED_TITLE' => 'HTTP Λάθος: Δεν Επιτρέπεται η Μέθοδος',
  'LBL_PORTAL_MIN_MODULES' => 'Στο ελάχιστο, θα πρέπει να έχετε διαθέσιμες τις Υποθέσεις, τα Σφάλματα ή  την ενότητα της Βάσης Γνώσεων για χρήση αυτής της εφαρμογής.',
  'LBL_PORTAL_NOT_ENABLED_MSG' => 'Λυπούμαστε, αλλά αυτή η δυνατότητα δεν είναι διαθέσιμη αυτή τη στιγμή.',
  'LBL_PORTAL_OFFLINE' => 'Μας συγχωρείτε, η εφαρμογή δεν είναι διαθέσιμη αυτήν την στιγμή. Παρακαλώ, επικοινωνήστε με τον διαχειριστή της ιστοσελίδας.',
  'LBL_PORTAL_PAGE_NOT_AVAIL' => 'Μη Διαθέσιμη Σελίδα',
  'LBL_PORTAL_PRECONDITION_MISSING' => 'Το αίτημα απέτυχε, ή, λείπει/άκυρη παράμετρος. Παρακαλώ επικοινωνήστε με την τεχνική υποστήριξη.',
  'LBL_PORTAL_PRECONDITION_MISSING_TITLE' => 'HTTP Λάθος:',
  'LBL_PORTAL_REQUEST_TIMEOUT' => 'Λήκη χρονικού ορίου αιτήματος.',
  'LBL_PORTAL_REQUEST_TIMEOUT_TITLE' => 'Λήξη χρονικού ορίου αιτήματος',
  'LBL_PORTAL_RESOURCE_UNAVAILABLE' => 'Ο πόρος δεν είναι διαθέσιμος.',
  'LBL_PORTAL_RESOURCE_UNAVAILABLE_TITLE' => 'HTTP Λάθος: Απαγορευμένο',
  'LBL_PORTAL_ROUTE_ERROR' => 'ενότητα φόρτωσης ζητημάτων. Παρακαλώ δοκιμάστε ξανά αργότερα ή επικοινωνήστε με την υποστήριξη.',
  'LBL_PORTAL_SAVING' => 'Αποθήκευση',
  'LBL_PORTAL_SEARCH' => 'Αναζήτηση ανά Όνομα, Αριθμό',
  'LBL_PORTAL_SEARCH_RESULTS_TITLE' => 'Εμφάνιση αναζήτησης αποτελεσμάτων για "{query}"',
  'LBL_PORTAL_SIGNUP' => 'Ένας εκπρόσωπος εξυπηρέτησης πελατών, θα επικοινωνήσει μαζί σας σύντομα, για να ρυθμίσετε τον λογαριασμό σας.',
  'LBL_PORTAL_SIGNUP_COMPANY' => 'Εταιρεία',
  'LBL_PORTAL_SIGNUP_COUNTRY' => 'Χώρα',
  'LBL_PORTAL_SIGNUP_EMAIL' => 'Email',
  'LBL_PORTAL_SIGNUP_FIRST_NAME' => 'Όνομα',
  'LBL_PORTAL_SIGNUP_JOBTITLE' => 'Τίτλος Εργασίας (προαιρετικό)',
  'LBL_PORTAL_SIGNUP_LAST_NAME' => 'Επώνυμο',
  'LBL_PORTAL_SIGNUP_PHONE' => '(###) ###-#### (προαιρετικό)',
  'LBL_PORTAL_SIGNUP_PROCESS' => 'Εγγραφή',
  'LBL_PORTAL_SIGNUP_STATE' => 'Περιοχή',
  'LBL_PORTAL_SIGNUP_TITLE' => 'Ευχαριστούμε για την εγγραφή σας!',
  'LBL_PORTAL_THEME' => 'Θέμα Portal',
  'LBL_PORTAL_TOUR_RECORD_ADD_NOTE' => 'Κάντε κλικ εδώ, για να προσθέσετε σημείωση στην εγγραφή.',
  'LBL_PORTAL_TOUR_RECORD_DETAILS' => 'Η προβολή σας δίνει τη δυνατότητα να δείτε τις λεπτομέρειες μιας εγγραφής.',
  'LBL_PORTAL_TOUR_RECORD_NOTES' => 'Οι Σημειώσεις επιτρέπουν να συνεργάζονται με άλλους χρήστες του portal και των εκπροσώπων υποστήριξης.',
  'LBL_PORTAL_TOUR_RECORD_VIEW_NOTE' => 'Κάντε κλικ σε αυτά τα εικονίδια για να δείτε τις λεπτομέρειες των συνημμένων σημειώσεων.',
  'LBL_PORTAL_UNAUTHORIZED' => 'Λυπούμαστε, αλλά φαίνεται ότι δεν έχετε εξουσιοδοτημένη πρόσβαση σε αυτόν τον πόρο.',
  'LBL_PORTAL_UNAUTHORIZED_TITLE' => 'HTTP Λάθος: Μη Εξουσιοδοτημένο',
  'LBL_PORTAL_WELCOME_INFO' => 'Το Sugar Portal είναι ένα πλαίσιο που παρέχει σε πραγματικό χρόνο προβολή των υποθέσεων, σφαλμάτων & δελτίων τύπου, των πελατών κ.α. Αυτό είναι ένα εξωτερικό περιβάλλον που αντιμετωπίζει το Sugar, που μπορεί να αναπτυχθεί σε οποιαδήποτε ιστοσελίδα.  Μείνετε συντονισμένοι για περισσότερες δυνατότητες εξυπηρέτησης πελατών όπως στην Διαχείριση Έργου και Forums σε μελλοντικές εκδόσεις μας.',
  'LBL_PORTAL_WELCOME_TITLE' => 'Καλώς Ήλθατε στο Sugar Portal 5.1.0',
  'LBL_POSTAL_CODE' => 'Τ.Κ:',
  'LBL_POWERED_BY_SUGARCRM' => 'Με την ισχύ της SugarCRM',
  'LBL_PRECONDITION_MISSING' => 'Το αίτημα απέτυχε, ή, λείπει/άκυρη παράμετρος. Παρακαλώ επικοινωνήστε με την τεχνική υποστήριξη.',
  'LBL_PRECONDITION_MISSING_TITLE' => 'Σφάλμα:',
  'LBL_PREFERRED_LANGUAGE' => 'Προτίμηση Γλώσσας:',
  'LBL_PREVIEW' => 'Προηγούμενο',
  'LBL_PREVIEW_BWC_TOOLTIP' => 'Δεν είναι δυνατή η προεπισκόπηση του παλαιού τύπου ενοτήτων',
  'LBL_PREVIEW_DISABLED_ATTACHMENT' => 'Απενεργοποιημένη Προεπισκόπηση. Δεν υπάρχουν δεδομένα',
  'LBL_PREVIEW_DISABLED_DELETED_OR_NO_ACCESS' => 'Απενεργοποιημένη Προεπισκόπηση: Η εγγραφή αφαιρέθηκε ή δεν υπάρχει δικαίωμα πρόσβασης στην εγγραφή',
  'LBL_PREVIEW_DISABLED_NO_ACCESS' => 'Απενεργοποιημένη Προεπισκόπηση. Κανένα δικαίωμα πρόσβασης στην εγγραφή',
  'LBL_PREVIEW_DISABLED_NO_RECORD' => 'Απενεργοποιημένη Προεπισκόπηση. Δεν υπάρχουν δεδομένα',
  'LBL_PREVIEW_DISABLED_SAME_RECORD' => 'Απενεργοποιημένη Προεπισκόπηση: Προδολή ως τρέχουσα εγγραφή',
  'LBL_PREVIOUS_CURRENT_NEXT_TIMEPERIODS' => 'Προηγούμενη, Τρέχουσα, Επόμενη',
  'LBL_PREVIOUS_TIMEPERIOD' => 'Προηγούμενη Χρονική Περίοδος',
  'LBL_PRIMARY_ADDRESS' => 'Κύρια Διεύθυνση:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Κύρια Διεύθυνση, Πόλη:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Κύρια Διεύθυνση, Χώρα:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Κύρια Διεύθυνση, Τ.Κ:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Κύρια Διεύθυνση, Περιοχή:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Κύρια Διεύθυνση, Οδός:',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Κύρια Διεύθυνση, Οδός 2:',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Κύρια Διεύθυνση, Οδός 3:',
  'LBL_PRINT' => 'Εκτύπωση',
  'LBL_PROCESSING_REQUEST' => 'Επεξεργασία..',
  'LBL_PRODUCTS' => 'Προϊόντα',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Γραμμή Εισηγμένων Ειδών',
  'LBL_PRODUCT_BUNDLES' => 'Πακέτα Προϊόντων',
  'LBL_PRODUCT_TEMPLATES' => 'Πρότυπα Προϊόντων',
  'LBL_PROFILE' => 'Προφίλ',
  'LBL_PROJECTS' => 'Έργα',
  'LBL_PROJECT_MINUS' => 'Αφαίρεση',
  'LBL_PROJECT_PLUS' => 'Προσθήκη',
  'LBL_PROJECT_TASKS' => 'Εργασίες Έργων',
  'LBL_PROSPECTS' => 'Στόχοι',
  'LBL_PRO_DELETE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτή την εγγραφή;',
  'LBL_PRO_DISABLE' => 'Ενημέρωση',
  'LBL_PRO_DISABLE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να απενεργοποιήσετε αυτή την εγγραφή;',
  'LBL_PRO_ENABLE' => 'Ενημέρωση',
  'LBL_PRO_ENABLE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να ενεργοποιήσετε αυτή την εγγραφή;',
  'LBL_QUARTER_TIMEPERIOD_FORMAT' => '{1} Q{0}',
  'LBL_QUERY_CHILD' => 'Διαθέσιμη Εγγραφή-Ερωτήματος',
  'LBL_QUERY_ERROR' => 'Λάθος!',
  'LBL_QUERY_HASH' => 'SQL Hash',
  'LBL_QUERY_VALID' => 'Έγκυρο',
  'LBL_QUESTION_MARK' => '?',
  'LBL_QUICKEDIT_NODEFS_NAVIGATION' => 'Πλοήγηση...',
  'LBL_QUICK_CREATE_MENU' => 'Γρήγορη Δημιουργία Μενού',
  'LBL_QUICK_CREATE_TITLE' => 'Γρήγορη Δημιουργία',
  'LBL_QUOTES' => 'Προσφορές',
  'LBL_QUOTES_SHIP_TO' => 'Παράδοση των Προσφορών σε',
  'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
  'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Δημιουργία Ευκαιρίας από Προσφορά',
  'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Δημιουργία Ευκαιρίας από Προσφορά',
  'LBL_RECENTLY_UPDATED' => 'Πρόσφατα Ενημερωμένα',
  'LBL_RECENTS' => 'Πρόσφατα',
  'LBL_RECOMMENDED_INVITES' => 'Προτεινόμενες Προσκλήσεις',
  'LBL_RECORD_BODY' => 'Επαγγελματική Κάρτα',
  'LBL_RECORD_DELETED' => '(Διαγραμμένη Εγγραφή)',
  'LBL_RECORD_HEADER' => 'Εγγραφή Επικεφαλίδας',
  'LBL_RECORD_NOT_FOUND' => 'Δεν βρέθηκε εγγραφή.',
  'LBL_RECORD_SAVED' => 'Η Εγγραφή αποθηκεύτηκε.',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Δημιουργήσατε με επιτυχία αυτή την εγγραφή, αλλά δεν έχετε δικαίωμα πρόσβασης σε αυτή την εγγραφή.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Δημιουργήσατε με επιτυχία το {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a>.',
  'LBL_RECORD_SHARE_BUTTON' => 'Μοιραστείτε',
  'LBL_RECORD_SHOWMORE' => 'Εμφάνιση Περισσότερων',
  'LBL_REDIRECT_URL' => 'URL Επαναπροσανατολισμού',
  'LBL_REFINE_LIST' => 'Βελτίωση λίστας',
  'LBL_RELATED' => 'Σχετικά',
  'LBL_RELATED_CAMPAIGN' => 'Σχετική εκστρατεία',
  'LBL_RELATED_CONTACT' => 'Σχετική Επαφή',
  'LBL_RELATED_INFORMATION' => 'Σχετική Πληροφορία',
  'LBL_RELATED_MODULE' => 'Σχετικό {{{this}}}',
  'LBL_RELATED_MODULE_PLURAL' => 'Σχετικό {{{this}}}',
  'LBL_RELATED_RECORDS' => 'Σχετικές Εγγραφές',
  'LBL_RELATED_RECORD_NOT_FOUND' => 'Δεν βρέθηκε σχετική εγγραφή.',
  'LBL_RELATIONSHIP' => 'Σχέση',
  'LBL_RELOAD_PAGE' => 'Παρακαλώ <a href="javascript: window.location.reload()">ξαναφορτώστε το παράθυρο</a> για να χρησιμοποιήσετε αυτόν τον Πίνακα Στοιχείων Sugar.',
  'LBL_REMINDERS' => 'Υπενθυμίσεις',
  'LBL_REMINDERS_FINISHED' => 'Ολοκληρώθηκε!',
  'LBL_REMINDERS_NONE_FOUND' => 'Δεν βρέθηκαν υπενθυμίσεις.',
  'LBL_REMINDERS_OVERDUE' => 'Εκπρόθεσμο',
  'LBL_REMINDERS_UPCOMING' => 'Επερχόμενη',
  'LBL_REMINDER_TITLE' => 'Υπενθύμιση',
  'LBL_REMOVE' => 'Αφαίρεση',
  'LBL_REMOVED_DASHLET' => 'Αφαιρέθηκε ο Πίνακας Στοιχείων Sugar',
  'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Αφαίρεση Όλων των Πεδίων',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Είστε βέβαιοι ότι θέλτε να αφαιρέσετε τον Πίνακα Στοιχείων Sugar;',
  'LBL_REMOVE_DASHLET_ROW_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε τη γραμμή;',
  'LBL_REMOVE_FROM_FAVORITES' => 'Αφαίρεση Από Αγαπημένα Μου',
  'LBL_REMOVE_MODULE_ENTRY' => 'Είστε βέβαιοι ότι θέλετε να απενεργοποιήσετε τον connector για αυτήν την ενότητα;',
  'LBL_REMOVE_PRIMARY_TEAM_ERROR' => 'Σφάλμα επιχειρήσατε να αφαιρέσετε την κύρια ταυτότητα ομάδας [{0}] για [{1}] ενότητα με ταυτότητα [{2}]',
  'LBL_REMOVING_ATTACHMENT' => 'Αφαίρεση επισύναψης...',
  'LBL_REMOVING_DASHLET' => 'Αφαίρεση Πίνακα Στοιχείων Sugar ...',
  'LBL_RENAME_PAGE' => 'Μετονομασία Σελίδας',
  'LBL_REPLACE_BUTTON' => 'Αντικατάσταση',
  'LBL_REPORTS_TO' => 'Αναφέρεται Σε',
  'LBL_REPORT_AUTO_REFRESH' => 'Αυτόματη Ανανέωση',
  'LBL_REPORT_EDIT' => 'Επεξεργασία Επιλεγμένης Αναφοράς',
  'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Αρίθμηση',
  'LBL_REPORT_SELECT' => 'Επιλογή Αναφοράς',
  'LBL_REQUEST_PASSWORD' => 'Αίτημα Κωδικού Πρόσβασης',
  'LBL_REQUEST_PROCESSED' => 'Έτοιμο',
  'LBL_REQUEST_TIMEOUT' => 'Λήξη χρονικού ορίου αιτήματος.',
  'LBL_REQUEST_TIMEOUT_TITLE' => 'Λήξη χρονικού ορίου αιτήματος',
  'LBL_REQUIRED_FIELD' => 'Υποχρεωτικό',
  'LBL_REQUIRED_SYMBOL' => '*',
  'LBL_REQUIRED_TITLE' => 'Υποδεικνύει υποχρεωτικό πεδίο',
  'LBL_RESET' => 'Επαναφορά',
  'LBL_RESET_DEFAULT_VIEW' => 'Επαναφορά προεπιλεγμένης προβολής',
  'LBL_RESET_DEFAULT_WIDTHS' => 'Επαναφορά προεπιλεγμένου πλάτους',
  'LBL_RESET_THEME_LNK' => 'Αποκατάσταση προεπιλεγμένου θέματος',
  'LBL_RESET_THEME_MODAL_INFO' => 'Είστε έτοιμος να διαγράψετε το προσαρμοσμένο θέμα σας με το προεπιλεγμένο θέμα.',
  'LBL_RESET_THEME_PROCESS' => 'Αποκατάσταση προεπιλεγμένου θέματος...',
  'LBL_RESOLVE_CONFLICT' => 'Επίλυση Διένεξης για {{name}}',
  'LBL_RESOURCE_UNAVAILABLE' => 'Ο πόρος δεν είναι διαθέσιμος.',
  'LBL_RESOURCE_UNAVAILABLE_TITLE' => 'Απαγορεύεται',
  'LBL_RESTORE' => 'Επαναφορά στην Αρχική',
  'LBL_RETRIEVING_PAGE' => 'Ανάκτηση Σελίδας...',
  'LBL_ROLLBACK_BUTTON' => 'Επαναφορά',
  'LBL_ROUNDTRIPS' => 'Μέτρηση Δράσης',
  'LBL_ROUTING_ACTIONS_COPY_MAIL' => 'Αντιγραφή Ταχυδρομείου',
  'LBL_ROUTING_ACTIONS_DELETE_BEAN' => 'Διαγραφή Αντικειμένου Sugar',
  'LBL_ROUTING_ACTIONS_DELETE_FILE' => 'Διαγραφή Αρχείου',
  'LBL_ROUTING_ACTIONS_DELETE_MAIL' => 'Διαγραφή Email',
  'LBL_ROUTING_ACTIONS_FORWARD' => 'Προώθηση Email',
  'LBL_ROUTING_ACTIONS_MARK_FLAGGED' => 'Παρακολούθηση Email με Σημαία',
  'LBL_ROUTING_ACTIONS_MARK_READ' => 'Σήμανση Ως Αναγνωσμένο',
  'LBL_ROUTING_ACTIONS_MARK_UNREAD' => 'Σήμανση Ως Μη Αναγνωσμένο',
  'LBL_ROUTING_ACTIONS_MOVE_MAIL' => 'Μετακίνηση Email',
  'LBL_ROUTING_ACTIONS_PEFORM' => 'Εκτελέστε τις ακόλουθες ενέργειες',
  'LBL_ROUTING_ACTIONS_REPLY' => 'Απάντηση σε Email',
  'LBL_ROUTING_ADD_RULE' => 'Προσθήκη Κανόνα',
  'LBL_ROUTING_ALL' => 'Τουλάχιστον',
  'LBL_ROUTING_ANY' => 'Οποιοιδήποτε',
  'LBL_ROUTING_BREAK' => '-',
  'LBL_ROUTING_BUTTON_CANCEL' => 'Ακύρωση',
  'LBL_ROUTING_BUTTON_SAVE' => 'Αποθήκευση Κανόνα',
  'LBL_ROUTING_CHECK_RULE' => 'Ένα λάθος ανιχνεύθηκε:',
  'LBL_ROUTING_CHECK_RULE_DESC' => 'Παρακαλώ ελέγξτε όλα τα επιλεγμένα πεδία.',
  'LBL_ROUTING_CONFIRM_DELETE' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτόν τον κανόνα; Αυτό δεν μπορεί να αναιρεθεί.',
  'LBL_ROUTING_FLAGGED' => 'καθορισμός σημαιών',
  'LBL_ROUTING_FORM_DESC' => 'Οι αποθηκευμένοι Κανόνες είναι άμεσα ενεργοί.',
  'LBL_ROUTING_FW' => 'Προώθηση:',
  'LBL_ROUTING_LIST_TITLE' => 'Κανόνες',
  'LBL_ROUTING_MATCH' => 'Αν',
  'LBL_ROUTING_MATCH_2' => 'πληρούνται οι ακόλουθες προϋποθέσεις:',
  'LBL_ROUTING_MATCH_CC_ADDR' => 'Κοινοποίηση',
  'LBL_ROUTING_MATCH_DESCRIPTION' => 'Σώμα Περιεχομένου',
  'LBL_ROUTING_MATCH_FROM_ADDR' => 'Από',
  'LBL_ROUTING_MATCH_NAME' => 'Θέμα',
  'LBL_ROUTING_MATCH_PRIORITY_HIGH' => 'Υψηλή Προτεραιότητα',
  'LBL_ROUTING_MATCH_PRIORITY_LOW' => 'Χαμηλή Προτεραιότητα',
  'LBL_ROUTING_MATCH_PRIORITY_NORMAL' => 'Κανονική Προτεραιότητα',
  'LBL_ROUTING_MATCH_TO_ADDR' => 'Προς',
  'LBL_ROUTING_MATCH_TYPE_MATCH' => 'Περιέχει',
  'LBL_ROUTING_MATCH_TYPE_NOT_MATCH' => 'Δεν περιέχει',
  'LBL_ROUTING_NAME' => 'Όνομα Κανόνα',
  'LBL_ROUTING_NEW_NAME' => 'Όνομα Κανόνα',
  'LBL_ROUTING_ONE_MOMENT' => 'Μια στιγμή παρακαλώ...',
  'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS' => 'Το αρχικό μήνυμα ακολουθεί.',
  'LBL_ROUTING_RE' => 'Απάντηση:',
  'LBL_ROUTING_SAVING_RULE' => 'Αποθήκευση Κανόνα',
  'LBL_ROUTING_SUB_DESC' => 'Οι κανόνες που ελέγχθηκαν είναι ενεργοί. Πατήστε όνομα για επεξεργασία.',
  'LBL_ROUTING_TO' => 'σε',
  'LBL_ROUTING_TO_ADDRESS' => 'σε διεύθυνση',
  'LBL_ROUTING_WITH_TEMPLATE' => 'μαζί με πρότυπο',
  'LBL_RSS_FEED' => 'RSS Feed',
  'LBL_RSS_FEED_AUTHOR' => 'Συγγραφέας:',
  'LBL_RSS_FEED_DASHLET' => 'RSS Feed',
  'LBL_RSS_FEED_DASHLET_DESCRIPTION' => 'Μείνετε ενημερωμένοι με την προσθήκη ενός εξωτερικού RSS ή Blog Feed.',
  'LBL_RSS_FEED_ENTRIES_COUNT' => 'Αριθμός καταχωρήσεων',
  'LBL_RSS_FEED_URL' => 'Feed URL',
  'LBL_RSS_RECORDS_FOUND' => 'βρέθηκε εγγραφή(ες)',
  'LBL_RUN_COUNT' => 'Μέτρηση Ερωτημάτων',
  'LBL_SAVED' => 'Αποθηκεύτηκε',
  'LBL_SAVED_LAYOUT' => 'Η Διάταξη έχει αποθηκευτεί.',
  'LBL_SAVED_SEARCH_ERROR' => 'Παρακαλώ δώστε ένα όνομα.',
  'LBL_SAVED_SEARCH_SHORTCUT' => 'Αποθηκευμένες Αναζητήσεις',
  'LBL_SAVED_VIEWS' => 'Αποθηκευμένες Προβολές',
  'LBL_SAVE_AND_CONTINUE' => 'Αποθήκευση και Συνέχεια',
  'LBL_SAVE_AND_CREATE_ANOTHER' => 'Αποθήκευση και δημιουργία νέας',
  'LBL_SAVE_AND_DEPLOY_BTN' => 'Αποθήκευση & Ανάπτυξη',
  'LBL_SAVE_AND_SEND_INVITES_BUTTON' => 'Αποθήκευση και Αποστολή Προσκλήσεων',
  'LBL_SAVE_AND_VIEW' => 'Αποθήκευση και προβολή',
  'LBL_SAVE_AS_BUTTON_KEY' => 'A',
  'LBL_SAVE_AS_BUTTON_LABEL' => 'Αποθήκευση Ως',
  'LBL_SAVE_AS_BUTTON_TITLE' => 'Αποθήκευση Ως',
  'LBL_SAVE_BUTTON_KEY' => 'a',
  'LBL_SAVE_BUTTON_LABEL' => 'Αποθήκευση',
  'LBL_SAVE_BUTTON_TITLE' => 'Αποθήκευση',
  'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
  'LBL_SAVE_NEW_BUTTON_LABEL' => 'Αποθήκευση και Δημιουργία Νέας',
  'LBL_SAVE_NEW_BUTTON_TITLE' => 'Αποθήκευση και Δημιουργία Νέας',
  'LBL_SAVE_OBJECT' => 'Αποθήκευση {0}',
  'LBL_SAVE_THEME_PROCESS' => 'Αποθήκευση θέματος...',
  'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Αποθήκευση Διαδικτύου στην Φόρμα Δυνητικού Πελάτη',
  'LBL_SAVING' => 'Αποθήκευση',
  'LBL_SAVING_LAYOUT' => 'Αποθήκευση Διάταξης...',
  'LBL_SAVING_PAGE_TITLE' => 'Αποθήκευση Τίτλου Σελίδας ...',
  'LBL_SCHEDULE_CALL' => 'Καταγραφή Κλήσης',
  'LBL_SCHEDULE_MEETING' => 'Προγραμματισμός Συνάντησης',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'Σ',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Προγραμματισμός Συνάντησης',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Προγραμματισμός Συνάντησης',
  'LBL_SEARCH' => 'Αναζήτηση',
  'LBL_SEARCHFORM' => 'Φόρμα Αναζήτησης',
  'LBL_SEARCHING' => 'Εύρεση...',
  'LBL_SEARCH_ALL' => 'Αναζήτηση όλων {{{this}}}...',
  'LBL_SEARCH_ALL_MODULES' => 'Αναζήτηση όλων',
  'LBL_SEARCH_ALL_RECORDS' => 'Αναζήτηση όλων των εγγραφών...',
  'LBL_SEARCH_AND_SELECT' => 'Αναζήτηση και Επιλογή {{module}}',
  'LBL_SEARCH_BUTTON_KEY' => 'Q',
  'LBL_SEARCH_BUTTON_LABEL' => 'Αναζήτηση',
  'LBL_SEARCH_BUTTON_TITLE' => 'Αναζήτηση',
  'LBL_SEARCH_BY' => 'Αναζήτηση ανά',
  'LBL_SEARCH_CHARTS' => 'Γραφήματα',
  'LBL_SEARCH_CRITERIA' => 'Κριτήρια Αναζήτησης',
  'LBL_SEARCH_DROPDOWN_NO' => 'Όχι',
  'LBL_SEARCH_DROPDOWN_YES' => 'Ναι',
  'LBL_SEARCH_EXTERNAL_API' => 'Αρχείο για Εξωτερική Πηγή',
  'LBL_SEARCH_FOR' => 'Αναζήτηση για',
  'LBL_SEARCH_FOR_MORE' => 'Αναζήτηση για περισσότερα...',
  'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Κλείσιμο',
  'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Πολλαπλές επιλογές Χειριστηρίων</strong></p><ul><li>Πατήστε στις τιμές για να επιλέξετε ένα χαρακτηριστικό.</li><li>Ctrl-click για επιλογή πολλαπλών επιλογών. Οι Mac χρήστες χρησιμοποιούν CMD-click.</li><li>Για να επιλέξετε όλες τις τιμές μεταξύ των δύο χαρακτηριστικών, πατήστε την πρώτη τιμή, και μετά shift-click τελευταία τιμή.</li></ul><p><strong>Σύνθετη Αναζήτηση & Επιλογές Διάταξης</strong><br><br>Χρησιμοποιώντας την επιλογή <b>Αποθηκευμένη Αναζήτηση & Διάταξη</b>, μπορείτε να σώσετε ένα σύνολο παραμέτρων αναζήτησης και/ή μία προσαρμοσμένη διάταξη Προβολή Λίστας, προκειμένου να επιτευχθούν πιο  γρήγορα τα επιθυμητά αποτελέσματα αναζήτησης στο μέλλον. Μπορείτε να αποθηκεύσετε έναν απεριόριστο αριθμό προσαρμοσμένων αναζητήσεων και διατάξεων. Όλες οι Αποθηκευμένες Αναζητήσεις εμφανίζονται ανά όνομα στην λίστα "Αποθηκευμένες Αναζητήσεις", και η τελευταία φορτωμένη αποθηκευμένη αναζήτηση εμφανίζεται στην κορυφή της λίστας.<br><br>Για να προσαρμόσετε την διάταξη της Προβολής Λίστας, χρησιμοποιήστε τα κουτιά στην "Απόκρυψη Στηλών" και "Εμφάνιση Στηλών", για να επιλέξετε ποια πεδία θα εμφανίζονται στα αποτελέσματα αναζήτησης. Για παράδειγμα, μπορείτε να εμφανίσετε ή να αποκρύψετε λεπτομέρειες όπως το όνομα εγγραφής, τον ανατεθειμένο χρήστη, την ανατεθειμένη ομάδα, στα αποτελέσματα αναζητήσεων. Για να προσθέσετε μια στήλη στην Προβολή Λίστας, επιλέξτε το πεδίο από την λίστα "Απόκρυψη Στηλών"  και χρησιμοποιήστε το αριστερό βέλος για να μετακινηθείτε στην λίστα Εμφάνιση Στηλών. Για να αφαιρέσετε μία στήλη από την Προβολή Λίστας, επιλέξτε την από την λίστα "Εμφάνιση Στηλών" και χρησιμοποιήστε το δεξί βέλος για να μετακινηθείτε στην λίστα Εμφάνιση Στηλών.<br><br>Αν αποθηκεύσετε τις ρυθμίσεις διάταξης, θα είστε σε θέση να τις φορτώσετε ανά πάσα στιγμή, να δείτε τα αποτελέσματα της αναζήτησης στην προσαρμοσμένη διάταξη.<br><br>Για να αποθηκεύσετε και να ενημερώσετε μια αναζήτηση και/ή διάταξη:<ol><li>Εισάγετε ένα όνομα για τα αποτελέσματα αναζήτησης στο πεδίο <b>Απόθήκευση αυτής της αναζήτησης ως</b> και πατήστε <b>"Αποθήκευση"</b>.Το όνομα τώρα εμφανίζεται στην λίστα Αποθηκευμένη Αναζήτηση δίπλα στο κουμπί <b>Εκκαθάριση</b>.</li><li> Για προβολή της αποθηκευμένης αναζήτησης, επιλέξτε την από την λίστα Αποθηκευμένη Αναζήτηση. Τα αποτελέσματα αναζήτησης εμφανίζονται στην Προβολή Λίστας.</li><li>Για να ενημερώσετε τις ιδιότητες μίας αποθηκευμένης αναζήτησης, επιλέξτε την αποθηκευμένη αναζήτηση από τη λίστα, πληκτρολογήστε τα νέα κριτήρια αναζήτησης και/ή επιλογές διάταξης στην περιοχή "Σύνθετη Αναζήτηση", και πατήστε <b>Ενημέρωση</b> δίπλα στην <b>Τροποποίηση Τρέχουσας Αναζήτησης</b>.</li><li>Για να διαγράψετε μία αποθηκευμένη αναζήτηση, επιλέξτε την από την λίστα Αποθηκευμένη Αναζήτηση, πατήστε <b>Διαγραφή</b>δίπλα στην <b>Τροποποίηση Τρέχουσας Αναζήτησης</b>, και μετά πατήστε <b>Εντάξει</b> για να επιβεβαιώσετε τη διαγραφή.</li></ol><p><strong>Συμβουλές</strong><br><br>Χρησιμοποιώντας το % ως μπαλαντέρ, μπορείτε να κάνετε την αναζήτησή σας πιο ευρεία.  Για παράδειγμα, αντί να ψάχνετε για αποτέλεσμα που ισούται με "Apples",  θα μπορούσατε να αλλάξετε την αναζήτηση σε "Apples%" το οποίο θα ταιριάζει με όλα τα αποτελέσματα που ξεκινούν με τη λέξη Apples αλλά θα μπορούσε να περιέχει επίσης και άλλους χαρακτήρες.</p>',
  'LBL_SEARCH_HELP_TITLE' => 'Συμβουλές Αναζήτησης',
  'LBL_SEARCH_LOAD_MORE' => 'ΦΟΡΤΩΣΗ ΠΕΡΙΣΣΟΤΕΡΩΝ',
  'LBL_SEARCH_MODULES' => 'Ενότητες',
  'LBL_SEARCH_MORE' => 'περισσότερα',
  'LBL_SEARCH_NO_RESULTS' => 'Δεν βρέθηκαν αποτελέσματα για',
  'LBL_SEARCH_PARENT_RELATED_ITEM' => 'Αναζήτηση...',
  'LBL_SEARCH_POPULATE_ONLY' => 'Εκτελέστε μια αναζήτηση χρησιμοποιώντας την παραπάνω φόρμα αναζήτησης',
  'LBL_SEARCH_REPORT_CHARTS' => 'Αναφορές Γραφημάτων',
  'LBL_SEARCH_RESULTS' => 'Αναζήτηση Αποτελεσμάτων',
  'LBL_SEARCH_RESULTS_FOUND' => 'Βρέθηκαν Αποτελέσματα Αναζήτησης',
  'LBL_SEARCH_RESULTS_TIME' => 'ms.',
  'LBL_SEARCH_SELECT' => 'Επιλέξτε...',
  'LBL_SEARCH_SELECT_MODULE' => 'Επιλέξτε {{ενότητα}}...',
  'LBL_SEARCH_TIPS' => 'Πατήστε το κουμπί Αναζήτησης ή πατήστε Enter για να πάρετε μια ακριβή αντιστοιχία για αυτούς.',
  'LBL_SEARCH_TIPS_2' => 'Πατήστε το κουμπί Αναζήτησης ή πατήστε Enter για να πάρετε μια ακριβή αντιστοιχία για',
  'LBL_SEARCH_TOOLS' => 'Εργαλεία',
  'LBL_SEARCH_UNAVAILABLE' => 'Αναζήτηση μη διαθέσιμων, παρακαλώ προσπαθήστε ξανά αργότερα.',
  'LBL_SECONDS' => 'Ενεργά Δευτερόλεπτα',
  'LBL_SEC_AVG' => 'Μέσος Όρος Δευτερολέπτων',
  'LBL_SEC_TOTAL' => 'Συνολικά Δευτερόλεπτα',
  'LBL_SEE_ALL' => 'Εμφάνιση Όλων',
  'LBL_SELECT_ACTION_LABEL' => 'Επιλογή Ενέργειας',
  'LBL_SELECT_ALL_TITLE' => 'Επιλογή όλων',
  'LBL_SELECT_APPEND_TEAMS' => 'Προσάρτηση της Ομάδας(ων)',
  'LBL_SELECT_APPEND_VALUES' => 'Προσάρτηση αξίας(ων)',
  'LBL_SELECT_BUTTON_KEY' => 'T',
  'LBL_SELECT_BUTTON_LABEL' => 'Επιλογή',
  'LBL_SELECT_BUTTON_TITLE' => 'Επιλογή',
  'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
  'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Επιλογή Επαφής',
  'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Επιλογή Επαφής',
  'LBL_SELECT_MODULE' => 'Επιλογή Ενότητας:',
  'LBL_SELECT_PHOTO' => 'Επιλέξτε μια Φωτογραφία',
  'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Επιλογή από Αναφορές',
  'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Επιλογή Αναφορών',
  'LBL_SELECT_TEAMS_KEY' => 'Z',
  'LBL_SELECT_TEAMS_LABEL' => 'Προσθήκη Ομάδας(ων)',
  'LBL_SELECT_TEAMS_TITLE' => 'Προσθήκη Ομάδας(ων)',
  'LBL_SELECT_THIS_ROW_TITLE' => 'Επιλογή αυτής της σειρά',
  'LBL_SELECT_USER_BUTTON_KEY' => 'U',
  'LBL_SELECT_USER_BUTTON_LABEL' => 'Επιλογή Χρήστη',
  'LBL_SELECT_USER_BUTTON_TITLE' => 'Επιλογή Χρήστη',
  'LBL_SEND_INVITE' => 'Αποστολή πρόσκλησης',
  'LBL_SERVER_MEMORY_BYTES' => 'bytes',
  'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Χρήση: - ενότητα: {0} - δράση: {1}',
  'LBL_SERVER_MEMORY_USAGE' => 'Χρήση Μνήμης Διακομιστή: {0} ({1})',
  'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Χρήση Διακομιστή Μνήμης Peak: {0} ({1})',
  'LBL_SERVER_RESPONSE_RESOURCES' => 'Πόροι χρησιμοποιούνται για την κατασκευή αυτής της σελίδας (ερωτήματα, πεδία)',
  'LBL_SERVER_RESPONSE_TIME' => 'Χρόνος Απόκρισης διακομιστή:',
  'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'δευτερόλεπτα.',
  'LBL_SESSION_ID' => 'Ταυτότητα Συνεδρίας',
  'LBL_SETUP_COMPLETE_INFO' => 'Ξεκινήστε χρησιμοποιώντας το Sugar!',
  'LBL_SETUP_PROGRESS' => 'Πρόοδος εγκατάστασης',
  'LBL_SETUP_USER_INFO' => 'Εγκαταστήστε τις πληροφορίες του χρήστη σας',
  'LBL_SETUP_USER_LOCALE_INFO' => 'Ρυθμίστε τη ζώνη ώρας, την ημερομηνία και τη μορφή του ονόματος σας',
  'LBL_SET_FONTSIZE' => 'Μέγεθος γραμματοσειράς',
  'LBL_SET_NEW_PASSWORD' => 'Εισαγωγή Κωδικού Πρόσβασης',
  'LBL_SHARE_BUTTON_KEY' => 'r',
  'LBL_SHARE_BUTTON_LABEL' => 'Μοιραστείτε',
  'LBL_SHARE_BUTTON_TITLE' => 'Μοιραστείτε',
  'LBL_SHARE_COMPANY' => 'Εταιρεία',
  'LBL_SHARE_LINKABLE' => 'Συσχετίζονται',
  'LBL_SHARE_PRIVATE' => 'Ιδιωτική',
  'LBL_SHARE_PUBLIC' => 'Δημόσια',
  'LBL_SHIPPING_ADDRESS' => 'Διεύθυνση Παράδοσης',
  'LBL_SHIPPING_STREET' => 'Οδός:',
  'LBL_SHIP_TO_ACCOUNT' => 'Παράδοση σε Λογαριασμό',
  'LBL_SHIP_TO_CONTACT' => 'Παράδοση σε Επαφή',
  'LBL_SHORTCUTS' => 'Συντομεύσεις',
  'LBL_SHORTCUT_ALERT_CANCEL' => 'Ακύρωση',
  'LBL_SHORTCUT_ALERT_CONFIRM' => 'Επιβεβαίωση',
  'LBL_SHORTCUT_CANCEL_INLINE_EDIT' => 'Έξοδος από τη λειτουργία επεξεργασίας inline λίστα χωρίς αποθήκευση',
  'LBL_SHORTCUT_CLOSE_DRAWER' => 'Κλείσιμο συρταριού',
  'LBL_SHORTCUT_COPY_RECORD' => 'Αντιγραφή τρέχουσας εγγραφής',
  'LBL_SHORTCUT_CREATE_RECORD' => 'Δημιουργία νέας εγγραφής',
  'LBL_SHORTCUT_EDIT_SELECTED' => 'Επεξεργασία της επιλεγμένης εγγραφής από τη λίστα',
  'LBL_SHORTCUT_FAVORITE_RECORD' => 'Σήμανση εγγραφής ως αγαπημένης',
  'LBL_SHORTCUT_FILTER_ADD' => 'Προσθήκη επιπλέον κριτηρίων για το φιλτράρισμα',
  'LBL_SHORTCUT_FILTER_CLOSE' => 'Κλείσιμο φίλτρου',
  'LBL_SHORTCUT_FILTER_CREATE' => 'Δημιουργία νέου φίλτρου λίστας',
  'LBL_SHORTCUT_FILTER_DELETE' => 'Διαγραφή φίλτρου',
  'LBL_SHORTCUT_FILTER_EDIT' => 'Επεξεργασία τρέχον φίλτρου λίστας',
  'LBL_SHORTCUT_FILTER_REMOVE' => 'Αφαίρεση τελευταίων κριτηρίων από το φίλτρο',
  'LBL_SHORTCUT_FILTER_RESET' => 'Επαναφορά φίλτρου',
  'LBL_SHORTCUT_FILTER_SAVE' => 'Αποθήκευση φίλτρου',
  'LBL_SHORTCUT_FILTER_SEARCH' => 'Έμφαση στην λίστα πεδίο φίλτρου',
  'LBL_SHORTCUT_FILTER_SHOW' => 'Άνοιγμα μενού φίλτρου λίστας',
  'LBL_SHORTCUT_FOLLOW_RECORD' => 'Ακολουθία εγγραφής',
  'LBL_SHORTCUT_FUNCTION' => 'Λειτουργία',
  'LBL_SHORTCUT_HELP' => 'Εμφάνιση σελίδας βοηθείας συντομεύσεων',
  'LBL_SHORTCUT_KEYS_HELP_ABOUT' => 'Το SugarCRM επιτρέπει στους δυναμικούς χρήστες να εκτελούν γρήγορα ορισμένες εργασίες με τις συντομεύσεις πληκτρολογίου για την αύξηση της παραγωγικότητας. Οι πίνακες στα δεξιά περιγράφουν διαθέσιμες συντομεύσεις μαζί με τα πλήκτρα και τις ενέργειες που εκτελούν.',
  'LBL_SHORTCUT_KEY_KEY' => 'Κλειδί',
  'LBL_SHORTCUT_MARK_SELECTED' => 'Σήμανση εγγραφής ως επιλεγμένη',
  'LBL_SHORTCUT_MASS_UPDATE_ADD' => 'Εισαγωγή σειράς',
  'LBL_SHORTCUT_MASS_UPDATE_CANCEL' => 'Κλείσιμο μαζικής ενημέρωσης',
  'LBL_SHORTCUT_MASS_UPDATE_REMOVE' => 'Αφαίρεση σειράς',
  'LBL_SHORTCUT_MASS_UPDATE_SAVE' => 'Ενημέρωση εγγραφών',
  'LBL_SHORTCUT_NAVIGATE_DOWN' => 'Επιλογή επόμενης εγγραφής από την λίστα',
  'LBL_SHORTCUT_NAVIGATE_UP' => 'Επιλογή προηγούμενης εγγραφής από την λίστα',
  'LBL_SHORTCUT_OPEN' => 'Άνοιγμα της επιλεγμένης εγγραφής από τη λίστα',
  'LBL_SHORTCUT_OPEN_MASS_ACTION' => 'Άνοιγμα μαζικής δράσης αναπτυσσόμενου μενού',
  'LBL_SHORTCUT_OPEN_MORE_ACTION' => 'Πρωτογενή ενέργεια, άνοιγμα αναπτυσσόμενου μενού',
  'LBL_SHORTCUT_PREVIEW_SELECTED' => 'Προεπισκόπηση εγγραφής',
  'LBL_SHORTCUT_QUICK_CREATE' => 'Γρήγορη εναλλαγή δημιουργίας μενού',
  'LBL_SHORTCUT_RECORD_CANCEL' => 'Καταργήστε τυχόν αλλαγές στην εγγραφή',
  'LBL_SHORTCUT_RECORD_DELETE' => 'Διαγραφή εγγραφής',
  'LBL_SHORTCUT_RECORD_EDIT' => 'Επεξεργασία φίλτρου',
  'LBL_SHORTCUT_RECORD_NEXT' => 'Άνοιγμα επόμενης εγγραφής',
  'LBL_SHORTCUT_RECORD_PREVIOUS' => 'Άνοιγμα προηγούμενης εγγραφής',
  'LBL_SHORTCUT_RECORD_SAVE' => 'Αποθήκευση εγγραφής',
  'LBL_SHORTCUT_SCROLL_LEFT' => 'Λίστα κύλισης αριστερά',
  'LBL_SHORTCUT_SCROLL_RIGHT' => 'Λίστα κύλισης δεξιά',
  'LBL_SHORTCUT_SEARCH' => 'Έμφαση στο πεδίο σφαιρικής αναζήτησης',
  'LBL_SHORTCUT_SELECT_ALL' => 'Επιλογή όλων',
  'LBL_SHORTCUT_SIDEBAR_TOGGLE' => 'Εναλλαγή πλαϊνή μπάρα',
  'LBL_SHOW' => 'Εμφάνιση',
  'LBL_SHOW_LESS' => 'Εμφάνιση Λιγότερων',
  'LBL_SHOW_LESS_RECENTS' => 'Λιγότερο πρόσφατα...',
  'LBL_SHOW_MORE' => 'Εμφάνιση Περισσότερων',
  'LBL_SHOW_MORE_GENERIC' => 'Περισσότερα {{name}}...',
  'LBL_SHOW_MORE_MODULE' => 'Περισσότερα {{{module}}}...',
  'LBL_SHOW_MORE_RECENTS' => 'Πιο πρόσφατα...',
  'LBL_SIGNUP_BUTTON_LABEL' => 'Εγγραφή',
  'LBL_SIXMONTHS' => 'έξι μήνες',
  'LBL_SMS_BUTTON' => 'SMS',
  'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
  'LBL_SMTPTYPE_GMAIL' => 'Gmail',
  'LBL_SMTPTYPE_OTHER' => 'Άλλο',
  'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
  'LBL_SORT' => 'Είδος',
  'LBL_SQL_TEXT' => 'SQL Text',
  'LBL_SQS_INDICATOR' => '',
  'LBL_START_AND_END_DATE' => '{{start}} - {{end}} ({{duration}})',
  'LBL_START_AND_END_DATE_DETAIL_VIEW' => 'Ημερομηνία Έναρξης & Λήξης',
  'LBL_START_AND_END_DATE_SAME_DAY' => '{{date}} {{start}} - {{end}} ({{duration}})',
  'LBL_START_AND_END_DATE_TO' => 'σε',
  'LBL_START_BUTTON_LABEL' => 'Έναρξη',
  'LBL_START_BUTTON_TITLE' => 'Έναρξη',
  'LBL_STATE' => 'Περιοχή:',
  'LBL_STATUS' => 'Κατάσταση:',
  'LBL_STATUS_UPDATED' => 'Η Κατάσταση σας για αυτό το συμβάν έχει ενημερωθεί!',
  'LBL_STREAM_NO_RECORDS' => 'Αυτή η εγγραφή δεν έχει σημειώσεις αυτήν την στιγμή. Παρακαλείσθε να προσθέσετε μια σημείωση, πατώντας στον σύνδεσμο Προσθήκη Σημείωσης.',
  'LBL_STREET' => 'Οδός',
  'LBL_SUBJECT' => 'Θέμα',
  'LBL_SUBMIT_BUTTON_LABEL' => 'Υποβολή',
  'LBL_SUBSCRIBE' => 'Εγγραφή',
  'LBL_SUCCESS' => 'Επιτυχία',
  'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2016 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> Διατηρούνται όλα τα Πνευματικά Δικαιώματα.<br />SugarCRM είναι ένα εμπορικό σήμα του SugarCRM, Inc. Όλα τα άλλα ονόματα εταιρειών και προϊόντων μπορεί να είναι εμπορικά σήματα των αντίστοιχων εταιρειών με τα οποία συνδέονται.',
  'LBL_SUPPORT' => 'Υποστήριξη',
  'LBL_SWITCH_INSTANCE' => 'Μεταβείτε σε αυτήν την περίπτωση',
  'LBL_SYNC' => 'Συγχρονισμός',
  'LBL_SYNCED_RECURRING_MSG' => 'Δεν μπορείτε να επεξεργαστείτε αυτό το αρχείο επειδή συγχρονίζεται από έναν εξωτερικό client.',
  'LBL_SYSTEM_DEFAULT_OUTBOUND_EMAIL_CONFIGURATION' => 'προεπιλογή συστήματος',
  'LBL_TABGROUP_HOME' => 'Πίνακας Εργαλείων',
  'LBL_TAG_FETCH_ERROR' => 'Παρουσιάστηκε σφάλμα κατά την ανάκτηση ετικέτας.',
  'LBL_TAG_NEW_TAG' => '(New Tag)',
  'LBL_TASKS' => 'Εργασίες',
  'LBL_TASKS_SUBPANEL_TITLE' => 'Εργασίες',
  'LBL_TEAM' => 'Ομάδα:',
  'LBL_TEAMS' => 'Ομάδες',
  'LBL_TEAMS_LINK' => 'Ομάδες',
  'LBL_TEAM_ADD' => 'Προσθήκη Ομάδας',
  'LBL_TEAM_ID' => 'Ταυτότητα Ομάδας',
  'LBL_TEAM_PRIMARY' => 'Ορισμός ως Κύρια Ομάδα',
  'LBL_TEAM_REMOVE' => 'Αφαίρεση Ομάδας',
  'LBL_TEAM_SELECTED_TITLE' => 'Επιλεγμένη Ομάδα',
  'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Επιλέξτε για να κάνει αυτή η ομάδα βασική',
  'LBL_TEAM_SET' => 'Καθορισμός Ομάδας',
  'LBL_TEAM_SET_ID' => 'Καθορισμένη Ταυτότητα Ομάδας',
  'LBL_TEXTAREA_LESS' => 'λιγότερο',
  'LBL_TEXTAREA_MORE' => 'περισσότερο',
  'LBL_THEME' => 'Θέμα:',
  'LBL_THEME_COLOR' => 'Χρώμα',
  'LBL_THEME_FONT' => 'Γραμματοσειρά',
  'LBL_THEME_PICKER' => 'Ύφος Σελίδας',
  'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Προειδοποίηση: Ο Internet Explorer 6 δεν υποστηρίζεται για το επιλεγμένο θέμα. Πατήστε "Εντάξει" για να επιλέξετε ένα διαφορετικό θέμα.',
  'LBL_THEME_PREVIEW' => 'Προεπισκόπηση Θέματος',
  'LBL_THOUSANDS_SYMBOL' => 'K',
  'LBL_THREE_MONTHS' => 'τρείς μήνες',
  'LBL_TIMEZONE_DIFFERENT_LINK' => 'Προσαρμόστε τη Ζώνη Ώρας.',
  'LBL_TIME_AGO_DAY' => 'χθες',
  'LBL_TIME_AGO_DAYS' => '{{this}} ημέρες πριν',
  'LBL_TIME_AGO_HOUR' => 'περίπου μία ώρα πριν',
  'LBL_TIME_AGO_HOURS' => '{{this}} ώρες πριν',
  'LBL_TIME_AGO_MINUTE' => 'περίπου ένα λεπτό πριν',
  'LBL_TIME_AGO_MINUTES' => '{{this}} λεπτά πριν',
  'LBL_TIME_AGO_NOW' => 'τώρα αμέσως',
  'LBL_TIME_AGO_SECONDS' => 'λιγότερο από ένα λεπτό πριν',
  'LBL_TIME_AGO_YEAR' => 'πάνω από ένα χρόνο πριν',
  'LBL_TIME_RELATIVE' => 'Δημοσιεύτηκε {{relativetime}} στις {{date}} στις {{time}}',
  'LBL_TIME_RELATIVE_ACTIVITIES' => '{{relativetime}} στις {{date}} στις {{time}}',
  'LBL_TIME_UNTIL_DAY' => 'αύριο',
  'LBL_TIME_UNTIL_DAYS' => 'σε {{this}} ημέρες',
  'LBL_TIME_UNTIL_HOUR' => 'σε περίπου μία ώρα',
  'LBL_TIME_UNTIL_HOURS' => 'σε {{this}} ώρες',
  'LBL_TIME_UNTIL_MINUTE' => 'σε περίπου 1 λεπτό',
  'LBL_TIME_UNTIL_MINUTES' => 'σε {{this}} λεπτά',
  'LBL_TIME_UNTIL_SECONDS' => 'σε λιγότερο από ένα λεπτό',
  'LBL_TIME_UNTIL_YEAR' => 'σε πάνω από ένα χρόνο',
  'LBL_TODAY' => 'σήμερα',
  'LBL_TODAYS_ACTIVITIES' => 'Σημερινές Δραστηριότητες',
  'LBL_TOGGLE_DRAWER' => 'Συρτάρι Εναλλαγής',
  'LBL_TOGGLE_VISIBILITY' => 'Εναλλαγή Ορατότητας',
  'LBL_TOMORROW' => 'αύριο',
  'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Εμφανίζει τα 10 καλύτερα Έσοδα στη Γραμμή Ειδών σε γράφημα φυσαλίδας.',
  'LBL_TOP10_OPPORTUNITIES_DEFAULT_DATASET' => 'Προεπιλεγμένο σύνολο δεδομένων',
  'LBL_TOP10_OPPORTUNITIES_FILTER_DURATIONS' => 'Προεπιλεγμένο φίλτρο ημερομηνίας',
  'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Γραμμή Εσόδων Ειδών, Δικά Μου',
  'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => 'Γραμμή Εσόδων Ειδών, Ομάδας Μου',
  'LBL_TOUR' => 'Προβολή Περιοδείας',
  'LBL_TOUR_ADD' => 'Δημιουργήστε μία εγγραφή από εδώ',
  'LBL_TOUR_AVATAR' => 'Πάρτε περισσότερες λεπτομέρειες σχετικά με την εφαρμογή ή Αποσυνδεθείτε',
  'LBL_TOUR_BACK' => 'Πίσω',
  'LBL_TOUR_BTN_DONE' => 'Έτοιμο',
  'LBL_TOUR_CALENDAR_URL_1' => 'Μοιράζεστε το SugarCRM ημερολόγιό σας με άλλες εφαρμογές, όπως το Microsoft Outlook ή του Exchange; Σε αυτήν την περίπτωση, έχετε νέα διεύθυνση URL. Αυτή η νέα, πιο ασφαλή διεύθυνση URL περιλαμβάνει ένα προσωπικό κλειδί που θα αποτρέψει την μη εξουσιοδοτημένη δημοσίευση του ημερολογίου σας.',
  'LBL_TOUR_CALENDAR_URL_2' => 'Διεύθυνση URL Ανάκτηση νέου κοινόχρηστου ημερολογίου σας.',
  'LBL_TOUR_CLOSE' => 'Κλείσιμο',
  'LBL_TOUR_CUBE' => 'Πρόσβαση στον Πίνακα Εργαλείων και στη Ροή Δραστηριοτήτων',
  'LBL_TOUR_DONE' => 'Τελειώσατε!',
  'LBL_TOUR_END_TOUR' => 'Τέλος Περιήγησης',
  'LBL_TOUR_FEATURES_670' => '<ul style=""><li class="icon-ok">Πιο ωραία εμφάνιση και αίσθηση-τώρα με νέο μοντέρνο θέμα!</li><li class="icon-ok">Η ενότητα Προβλέψεων έχει αναθεωρηθεί - τώρα με καλύτερη λειτουργικότητα και νέα γραφικά.</li></ul>',
  'LBL_TOUR_FORECASTS_CHART' => 'Αναθεώρηση Προβλέψεων διανομής',
  'LBL_TOUR_FORECASTS_COMMITS' => 'Κάντε κλικ, για να δείτε τις προηγούμενες δεσμεύσεις',
  'LBL_TOUR_FORECASTS_INLINEEDIT' => 'Κάντε κλικ για να επεξεργαστείτε δεδομένα επιτόπου',
  'LBL_TOUR_FORECASTS_PROGRESS' => 'Αναθεώρηση απόστασης Ποσόστωσης',
  'LBL_TOUR_FORECASTS_TIMEPERIODS' => 'Επιλέξτε μια Χρονική Περίοδο για να δείτε την αντίστοιχη Πρόβλεψη',
  'LBL_TOUR_FORECAST_INTRO' => 'Διαχείριση αγωγών και Πρόβλεψη.',
  'LBL_TOUR_FULL_TOUR' => 'Πλήρη Περιήγηση',
  'LBL_TOUR_INTRO' => 'Καλώς Ήλθατε στο Sugar 7. Χρησιμοποιήστε τα παρακάτω βέλη για μια γρήγορη περιήγηση.',
  'LBL_TOUR_LIST_ACTIVTYSTREAMLIST_TOGGLE' => 'Επιλέξτε να δείτε τις δραστηριότητες ή τη λίστα εγγραφών',
  'LBL_TOUR_LIST_FILTER1' => 'Η Μπάρα φίλτρου, δίνει τη δυνατότητα αναζήτησης για αυτή την ενότητα',
  'LBL_TOUR_LIST_FILTER2' => 'Επιλέξτε προκαθορισμένα φίλτρα ή δημιουργία νέων',
  'LBL_TOUR_LIST_FILTER_PREVIEW' => 'Επιλέξτε για να επεξεργαστείτε τη γραμμή ή την προεπισκόπηση λεπτομερειών',
  'LBL_TOUR_LIST_FILTER_SEARCH' => 'Πληκτρολογήστε εδώ για Αναζήτηση βάσει ονόματος',
  'LBL_TOUR_LIST_INTRO' => 'Δείτε μια λίστα με τις εγγραφές και να αναληφθούν οι ενέργειες των εγγραφών.',
  'LBL_TOUR_LIST_INT_TOGGLE' => 'Κάντε κλικ για να κλείσετε ή να ανοίξετε το παράθυρο πληροφοριών',
  'LBL_TOUR_MODULE' => 'Περιηγηθείτε στη Σελίδα',
  'LBL_TOUR_NAV_BAR' => 'Πρόσβαση σε όλες τις ενότητες στο μενού Πλοήγησης και λήψη ενεργειών',
  'LBL_TOUR_NEXT' => 'Επόμενο',
  'LBL_TOUR_NOTIFICATIONS' => 'Κάντε κλικ για να δείτε τις Ειδοποιήσεις',
  'LBL_TOUR_OVERVIEW' => 'Επισκόπηση Σελίδας',
  'LBL_TOUR_RECORD_ACTIONS' => 'Λάβετε μέτρα σχετικά με την εγγραφή',
  'LBL_TOUR_RECORD_DASHBOARDACTIONS' => 'Δημιουργήστε νέα ομάδα στον Πίνακα Στοιχείων',
  'LBL_TOUR_RECORD_DASHBOARDNAME' => 'Αντιστοιχίστε ένα όνομα στην ομάδα του Πίνακα Στοιχείων',
  'LBL_TOUR_RECORD_DASHLETCOG' => 'Επιλέξτε να μετακινμήσετε το Πίνακα Στοιχείων ή να αλλάξετε τις ρυθμίσεις',
  'LBL_TOUR_RECORD_INLINEEDIT' => 'Το Όνομα εγγραφής μπορεί να ενημερωθεί στη θέση',
  'LBL_TOUR_RECORD_INLINEEDITRECORD' => 'Κάντε κλικ για να επεξεργαστείτε επιτόπου κάθε πεδίο',
  'LBL_TOUR_RECORD_INTRO' => 'Προβολή  λεπτομερειών σχετικά με την καταγραφή και παρουσίαση όλων των δεδομένων που σχετίζονται με αυτή την εγγραφή.',
  'LBL_TOUR_RECORD_SHOWMORE' => 'Κάντε κλικ για να δείτε περισσότερα δεδομένα για την εγγραφή',
  'LBL_TOUR_RECORD_STATUS' => 'Βρειτε την κατάσταση επιπέδου εγγραφής, εδώ',
  'LBL_TOUR_RECORD_TOGGLEACTIVITIES' => 'Επιλέξτε να δείτε δραστηριότητες ή σχετιζόμενες εγγραφές',
  'LBL_TOUR_REFERENCE_1' => 'Μπορείτε πάντα να αναφέρεστε σε εμάς',
  'LBL_TOUR_REFERENCE_2' => 'μέσω του συνδέσμου "Υποστήριξη" κάτω από το μενού προφίλ.',
  'LBL_TOUR_REVISIT' => 'Κάντε κλικ εδώ, για να δείξει την περιήγηση ανά πάσα στιγμή.',
  'LBL_TOUR_SCREEN_1_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Ρύθμιση των παραμέτρων προβλέψεων σας</li><li class="icon-ok">Παρακολούθηση του αγωγού σας και της απόστασης από την ποσόστωση</li><li class="icon-ok">Πρόβλεψη του αγωγού των ομάδων πωλήσεων σας</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen1-thumb.png" width="220" id="thumbnail_1" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_1_TITLE_670' => 'Η νέα ενότητα Προβλέψεων σας επιτρέπει',
  'LBL_TOUR_SCREEN_2_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Επιλογή ημερομηνία έναρξης Φορολογικού Έτους</li><li class="icon-ok">Επιλογή Χρονικής Περιόδου, κάθε Χρόνο ή κάθε Τρίμηνο</li><li class="icon-ok">Επιλογή αριθμού Χρονικών Περιόδων των Προβλέψεων</li><li class="icon-ok">Επιλογή Πιθανών Περιοχών να συμπεριλαμβάνονται στην Πρόβλεψη</li><li class="icon-ok">Επιλογή σεναρίου πρόβλεψης, όπως πιθανή, καλύτερη ή χειρότερη</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen2-thumb.png" width="220" id="thumbnail_2" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_2_TITLE_670' => 'Ρύθμιση των Παραμέτρων Προβλέψεων σας',
  'LBL_TOUR_SCREEN_3_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Επιλογή της Χρονικής Περιόδου για την Πρόβλεψη σας</li><li class="icon-ok">Επανεξέταση και Επεξεργασία των Ποσών και Πιθανοτήτων για τις Ευκαιρίες σας</li><li class="icon-ok">Αποθήκευση του Φύλλου Εργασίας της Πρόβλεψης σας χωρίς δέσμευση ή;</li><li class="icon-ok">Δέσμευση της Πρόβλεψης και προβολή Ιστορικού προηγούμενων Δεσμεύσεων</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen5-thumb.png" width="220" id="thumbnail_5" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_3_TITLE_670' => 'Διαχείριση του αγωγού σας',
  'LBL_TOUR_SCREEN_4_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Προβολή των Γραφημάτων και των Πινάκων των προβλεπόμενων ποσών των πωλήσεων για τις δικές σας Ευκαιρίες</li><li class="icon-ok">Επεξεργασία των ρυθμίσεων για προβολή ανά Στάδιο Πωλήσεων και Πιθανότητα</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen6-thumb.png" width="220" id="thumbnail_6" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_4_TITLE_670' => 'Διαχείριση του αγωγού σας',
  'LBL_TOUR_SCREEN_5_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Επιλογή Χρονικής Περιόδου για προβολή</li><li class="icon-ok">Εμφάνιση των δεσμευμένων εργασιών πωλήσεων της ομάδας και προσαρμογή των προβλέψεων τους</li><li class="icon-ok">Εμφάνιση των Ειδοποιήσεων όταν τα μέλη της ομάδας πωλήσεων σας δεσμεύουν νέες προβλέψεις</li><li class="icon-ok">Αποθήκευση των Εργασιών χωρίς δέσμευση ή ;</li><li class="icon-ok">Δέσμευση της Πρόβλεψης και προβολή Ιστορικού των προηγούμενων Προβλέψεων</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen3-thumb.png" width="220" id="thumbnail_3" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_5_TITLE_670' => 'Διαχείριση του αγωγού των ομάδων πωλήσεων σας',
  'LBL_TOUR_SCREEN_6_DESCRIPTION_670' => '<div style="float: left;"><div style="float: left; width: 300px;"><ul><li class="icon-ok">Προβολή Γραφημάτων ή Πινάκων με  τους αριθμούς των πωλήσεων που προβλέπονται για όλη την ομάδα πωλήσεων ή από μεμονωμένο μέλος της ομάδας</li><li class="icon-ok">Αλλαγή του Γραφήματος για να απεικονίσει προβλεπόμενες τιμές πωλήσεων ανά Πιθανή, Καλύτερη ή Χειρότερη υπόθεση</li></ul></div><div class="well" style="float: left; width: 220px; margin-left: 20px;"><img src="themes/default/images/pt-screen4-thumb.png" width="220" id="thumbnail_4" class="thumb"></div></div><div class="clear"></div>',
  'LBL_TOUR_SCREEN_6_TITLE_670' => 'Διαχείριση του αγωγού των ομάδων πωλήσεων σας',
  'LBL_TOUR_SEARCH' => 'Επιλέξτε μία ή περισσότερες ενότητες και αναζήτηση',
  'LBL_TOUR_SKIP' => 'Μετάβαση',
  'LBL_TOUR_TAKE_TOUR' => 'Πάρτε την περιήγηση',
  'LBL_TOUR_TOUR' => 'Πρόσβαση Περιήγησης ανά πάσα στιγμή',
  'LBL_TOUR_VISIT' => 'Για περισσότερες πληροφορίες, παρακαλώ επισκεφθείτε την εφαρμογή μας.',
  'LBL_TOUR_WATCH' => 'Δείτε τί Νέο υπάρχει στο Sugar',
  'LBL_TOUR_WELCOME' => 'Καλώς Ήλθατε στο Sugar',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Αρχειοθέτηση Email',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Αρχειοθέτηση Email',
  'LBL_TRADEMARK' => 'Το SugarCRM είναι εμπορικό σήμα της SugarCRM, Inc. Όλα τα άλλα ονόματα εταιρειών και προϊόντων είναι εμπορικά σήματα των αντίστοιχων εταιρειών με τις οποίες συνδέονται.',
  'LBL_TRADEMARK2' => 'SugarCRM ®, Sugar Enterprise™ και Sugar™ είναι εμπορικά σήματα της SugarCRM Inc.',
  'LBL_TRAINING' => 'Υποστήριξη',
  'LBL_TT_DNB_BAL_AREA_CODE' => 'Κωδικοί τηλεφώνου περιοχής ΗΠΑ και Καναδά. Παράδειγμα: 512 ή 732 ή 973',
  'LBL_TT_DNB_BAL_CODE_TYPE' => 'Επιλέξτε τον τύπο κωδικού κλάδου: SIC ή NAICS',
  'LBL_TT_DNB_BAL_DUNS' => 'Εισάγετε 9 αριθμητικά ψηφία DUNS®.  Παράδειγμα:  060704780, 047897855',
  'LBL_TT_DNB_BAL_IND_CODE' => '2 έως 8 ψηφία κωδικών SIC υποστηρίζονται Ή 2 έως 6 ψηφία κωδικών NAICS υποστηρίζονται.  Διαχωρίστε πολλαπλούς κωδικούς με κόμμα.',
  'LBL_TT_DNB_BAL_IPO_PRICE_RANGE' => 'σε $USD. Παράδειγμα: IPO Εύρος Τιμών 2.00 σε 2.50',
  'LBL_TT_DNB_BAL_MILLIONS' => 'σε $USD Εκατομμύρια',
  'LBL_TT_DNB_BAL_MILLIONS_EX' => 'σε $USD Εκατομμύρια. Παράδειγμα: 100 ή 4.3',
  'LBL_TT_DNB_BAL_NET_INCOME_GROWTH' => 'Τοις εκατό (%)',
  'LBL_TT_DNB_BAL_ORGID' => 'Εγγραφή #. Παράδειγμα: 130871985, 160468020',
  'LBL_TT_DNB_BAL_ORG_NAME' => 'Εισάγετε το Όνομα Εταιρείας',
  'LBL_TT_DNB_BAL_POSTAL_CODE' => 'Ταχυδρομικοί κωδικοί ΗΠΑ, υποστηρίζονται. Παραδείγματα: 78701 ή SW1P 1JA ή SWW1, ή 78701-78752',
  'LBL_TT_DNB_BAL_PRESCREEN_SCORE' => 'Επιλέξτε το επίπεδο κινδύνου: Υψηλό, Μεσαίο ή Χαμηλό',
  'LBL_TT_DNB_BAL_RADIUS_SRCH' => 'Αναζήτηση για αποτελέσματα σε μια δεδομένη απόσταση από ενιαίοΤαχυδρομικό Κώδικα',
  'LBL_TT_DNB_BAL_STATES' => 'Κράτος/Επαρχία/Περιοχή',
  'LBL_TT_DNB_BAL_YEAR_OF_FOUNDING' => 'Παραδείγματα: 1964 ή 2009.Μόνο ένα Έτος Ίδρυσης μπορεί να προστεθεί.',
  'LBL_TWITTER_DATA_EMPTY' => 'Δεν υπάρχουν διαθέσιμα δεδομένα από το Twitter',
  'LBL_TWITTER_DATA_LOADING' => 'Φορτώνει Twitter Connector...',
  'LBL_TWITTER_DESCRIPTION' => 'Δείτε την αντιστοιχία χρηστών twitter, bio και tweets, retweet και απαντήστε στο tweets',
  'LBL_TWITTER_DISPLAY_ROWS' => 'Εμφάνιση Γραμμών',
  'LBL_TWITTER_FAVORITE' => 'Αγαπημένο',
  'LBL_TWITTER_FOLLOW' => 'Follow',
  'LBL_TWITTER_ID' => 'Ταυτότητα Twitter',
  'LBL_TWITTER_MY_ACCOUNT' => 'Λογαριασμός Mου',
  'LBL_TWITTER_NAME' => 'Twitter',
  'LBL_TWITTER_REPLY' => 'Απάντηση',
  'LBL_TWITTER_RETWEET' => 'Retweet',
  'LBL_TWITTER_SOURCE' => 'Πηγή Tweet:',
  'LBL_TWO_WEEKS' => 'δύο εβδομάδες',
  'LBL_TX_LOG' => 'Καταγραφή Συναλλαγής',
  'LBL_TX_LOG_DETAIL' => 'Λεπτομέρειες Συναλλαγής',
  'LBL_UNASSIGNED' => 'Ανεκχώρητο',
  'LBL_UNAUTHORIZED' => 'Λυπούμαστε, αλλά φαίνεται ότι δεν έχετε εξουσιοδοτημένη πρόσβαση σε αυτόν τον πόρο.',
  'LBL_UNAUTHORIZED_TITLE' => 'Μη Εξουσιοδοτημένο',
  'LBL_UNAUTH_ADMIN' => 'Μη εξουσιοδοτημένη πρόσβαση στον διαχειριστή του συστήματος',
  'LBL_UNDELETE' => 'Ακύρωση Διαγραφής',
  'LBL_UNDELETE_BUTTON' => 'Ακύρωση Διαγραφής',
  'LBL_UNDELETE_BUTTON_LABEL' => 'Ακύρωση Διαγραφής',
  'LBL_UNDELETE_BUTTON_TITLE' => 'Ακύρωση Διαγραφής',
  'LBL_UNFOLLOW' => 'Unfollow',
  'LBL_UNLINKED' => 'Αποσυνδεδεμένο',
  'LBL_UNLINKING' => 'Αποσυνδέεται...',
  'LBL_UNLINK_BUTTON' => 'Αφαίρεση',
  'LBL_UNSUBSCRIBE' => 'Διαγραφή',
  'LBL_UNSYNC' => 'Ακύρωση Συγχρονισμού',
  'LBL_UPCOMING' => 'Προσεχείς Συναντήσεις Μου',
  'LBL_UPDATE' => 'Ενημέρωση',
  'LBL_UPDATE_CALC_FIELDS' => 'Επαναϋπολογισμός Αξιών',
  'LBL_UPLOADING' => 'Μεταφόρτωση',
  'LBL_UPLOAD_FROM_COMPUTER' => 'Μεταφόρτωση Από Τον Υπολογιστή Σας',
  'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'άκυρη μορφή αρχείου, μόνο αρχείο εικόνας μπορεί να φορτωθεί.',
  'LBL_UPLOAD_IMAGE_FILE_NOT_SUPPORTED' => 'Δεν υποστηρίζεται πλέον η μορφή εικόνας {0}.',
  'LBL_URL_BUTTON' => 'Web',
  'LBL_USERS' => 'Χρήστες',
  'LBL_USERS_SYNC' => 'Συγχρονισμός Χρηστών',
  'LBL_USER_DEFAULT_OUTBOUND_EMAIL_CONFIGURATION' => 'προεπιλογή χρήστη',
  'LBL_USER_ID' => 'Ταυτότητα Χειριστή',
  'LBL_USER_LIST' => 'Λίστα Χρηστών',
  'LBL_USER_MENU' => 'Μενού Χειριστή',
  'LBL_USER_OUTBOUND_EMAIL_ACCOUNT_CONFIGURATION' => 'προεπιλογή λογαριασμού',
  'LBL_USE_HTTPS' => 'Χρήση Ασφαλούς Σύνδεσης',
  'LBL_VALIDATE_RANGE' => 'δεν είναι εντός του εύρους, έγκυρο',
  'LBL_VALIDATING' => 'Επικύρωση...',
  'LBL_VCARD' => 'vCard',
  'LBL_VCARD_DOWNLOAD' => 'Μεταφόρτωση .vcf',
  'LBL_VCARD_ERROR_DEFAULT' => 'Παρουσιάστηκε σφάλμα στη μεταφόρτωση του αρχείου vCard.',
  'LBL_VCARD_ERROR_FILESIZE' => 'Το αρχείο υπερβαίνει το όριο μεγέθους 30000 bytes, που καθορίστηκε με τη μορφή HTML.',
  'LBL_VERIFY_EMAIL_ADDRESS' => 'Έλεγχος για υπάρχουσα καταχώρηση email...',
  'LBL_VERIFY_PORTAL_NAME' => 'Έλεγχος για υπάρχουσα καταχώρηση ονόματος portal...',
  'LBL_VIEWINLINE' => 'Προβολή',
  'LBL_VIEW_BUTTON' => 'Προβολή',
  'LBL_VIEW_BUTTON_KEY' => 'V',
  'LBL_VIEW_BUTTON_LABEL' => 'Προβολή',
  'LBL_VIEW_BUTTON_TITLE' => 'Προβολή',
  'LBL_VIEW_IMAGE' => 'προβολή',
  'LBL_VIEW_INLINE' => 'Προβολή',
  'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
  'LBL_VIEW_PDF_BUTTON_LABEL' => 'Εκτύπωση σε PDF',
  'LBL_VIEW_PDF_BUTTON_TITLE' => 'Εκτύπωση σε PDF',
  'LBL_VISIBLE' => 'Ορατή Καταγραφή',
  'LBL_WARNING' => 'Προειδοποίηση',
  'LBL_WARN_UNSAVED_CHANGES' => 'Έχετε μη αποθηκευμένες αλλαγές. Είστε βέβαιοι ότι θέλετε να αφήσετε τη σελίδα και να απορρίψετε τις αλλαγές;',
  'LBL_WELCOMEBAR' => 'Καλώς Ήλθατε',
  'LBL_WIZ_APPLICATION_SETTINGS' => 'Ρυθμίσεις Συστήματος',
  'LBL_WIZ_COMPLETE_TITLE' => 'Η εγκατάσταση ολοκληρώθηκε',
  'LBL_WIZ_CONFIGURE_APPLICATION' => 'Στούντιο',
  'LBL_WIZ_CREATE_USERS' => 'Δημιουργία Χρηστών',
  'LBL_WIZ_DATE_FORMAT' => 'Μορφή Ημερομηνίας',
  'LBL_WIZ_DOCUMENTATION' => 'Τεκμηρίωση',
  'LBL_WIZ_EMAIL' => 'Email',
  'LBL_WIZ_EMAIL_SETTINGS' => 'Ρυθμίσεις Email',
  'LBL_WIZ_FIRST_NAME' => 'Όνομα',
  'LBL_WIZ_FORUMS' => 'Forums',
  'LBL_WIZ_IMPORT_DATA' => 'Εισαγωγή Δεδομένων',
  'LBL_WIZ_KNOWLEDGE_BASE' => 'Βάση Γνώσεων',
  'LBL_WIZ_LAST_NAME' => 'Επώνυμο',
  'LBL_WIZ_NAME_FORMAT' => 'Μορφή Ονόματος',
  'LBL_WIZ_START_SUGAR' => 'Ξεκινήστε το Sugar',
  'LBL_WIZ_SUGAR_TRAINING' => 'Εκπαίδευση Sugar',
  'LBL_WIZ_SYSTEM_LOCALE_SETTINGS' => 'Τοπικές Ρυθμίσεις',
  'LBL_WIZ_TIMEFORMAT' => 'Μορφή Ώρας',
  'LBL_WIZ_TIMEZONE' => 'Ζώνη Ωρας',
  'LBL_WIZ_USER_LOCALE_TITLE' => 'Τοπικές Ρυθμίσεις Χρήστη',
  'LBL_WIZ_USER_PROFILE_TITLE' => 'Προφίλ Χειριστή',
  'LBL_WORST' => 'Χειρότερη',
  'LBL_WORST_ADJUSTED' => 'Χειρότερο (Προσαρμοσμένο)',
  'LBL_YES' => 'Ναι',
  'LBL_YESTERDAY' => 'χθες',
  'LBL_YOU' => 'Σας',
  'LBL_YOUR_INSTANCES' => 'Περιπτώσεις Μου',
  'LNK_ABOUT' => 'Σχετικά',
  'LNK_ADVANCED_SEARCH' => 'Σύνθετη Αναζήτηση',
  'LNK_BACKTOTOP' => 'Επιστροφή στην κορυφή',
  'LNK_BASIC_SEARCH' => 'Βασική Αναζήτηση',
  'LNK_CLOSE' => 'κλείσιμο',
  'LNK_CREATE' => 'Δημιουργία',
  'LNK_CREATE_WHEN_EMPTY' => 'Δημιουργία εγγραφής τώρα:',
  'LNK_DELETE' => 'διαγρ.',
  'LNK_DELETE_ALL' => 'διαγρ. όλων',
  'LNK_EDIT' => 'επεξεργασία',
  'LNK_GET_LATEST' => 'Λάβετε την πιο πρόσφατη',
  'LNK_GET_LATEST_TOOLTIP' => 'Αντικατάσταση με την πιο πρόσφατη έκδοση',
  'LNK_HELP' => 'Βοήθεια',
  'LNK_LIST_END' => 'Τέλος',
  'LNK_LIST_NEXT' => 'Επόμενη',
  'LNK_LIST_PREVIOUS' => 'Προηγούμενη',
  'LNK_LIST_RETURN' => 'Επιστρoφή στην Λίστα',
  'LNK_LIST_START' => 'Έναρξη',
  'LNK_LOAD_SIGNED' => 'Υπογραφή',
  'LNK_LOAD_SIGNED_TOOLTIP' => 'Αντικατάσταση με υπογεγραμμένο έγγραφο',
  'LNK_MOBILE' => 'Κινητό Τηλέφωνο:',
  'LNK_OFFLINE_SETTINGS' => 'Offline',
  'LNK_PMSE_BUSINESS_RULES_IMPORT_RECORD' => 'Εισαγωγή Διεργασιών Επιχειρησιακών Κανόνων',
  'LNK_PMSE_BUSINESS_RULES_NEW_RECORD' => 'Δημιουργία Διεργασιών Επιχειρησιακών Κανόνων',
  'LNK_PMSE_EMAIL_TEMPLATES_IMPORT_RECORD' => 'Εισαγωγή Διεργασίας Προτύπου Email',
  'LNK_PMSE_EMAIL_TEMPLATES_NEW_RECORD' => 'Δημιουργία Διεργασίας Προτύπου Email',
  'LNK_PMSE_PROCESS_DEFINITIONS_IMPORT_RECORD' => 'Εισαγωγή Ορισμών Διεργασίας',
  'LNK_PMSE_PROCESS_DEFINITIONS_NEW_RECORD' => 'Δημιουργία Ορισμών Διεργασίας',
  'LNK_PORTAL_LOGIN_FORGOTPASSWORD' => 'Ξεχάσατε τον Κωδικό Πρόσβασης;',
  'LNK_PRINT' => 'Εκτύπωση',
  'LNK_PRIVACY_POLICY' => 'Πολιτική Προστασίας Προσωπικών Δεδομένων',
  'LNK_REMOVE' => 'αφαίρεση',
  'LNK_RESUME' => 'Επανάληψη',
  'LNK_SAVED_VIEWS' => 'Επιλογές Διάταξης',
  'LNK_SEARCH_FTS_VIEW_ALL' => 'Προβολή όλων των Αποτελεσμάτων',
  'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Εμφάνιση Όλων',
  'LNK_SEARCH_NO_RESULTS' => 'Δεν βρέθηκαν αποτελέσματα.',
  'LNK_SETTINGS' => 'Ρυθμίσεις',
  'LNK_TERMS_OF_USE' => 'Όροι Χρήσης',
  'LNK_THIRD_PARTY_SOFTWARE' => 'Λογισμικό Τρίτων',
  'LNK_TOUR' => 'Περιήγηση',
  'LNK_TOUR_DOCUMENTATION' => 'τεκμηρίωση',
  'LNK_VIEW' => 'προβολή',
  'LNK_VIEW_CHANGE_LOG' => 'Προβολή Αλλαγής Σύνδεσης',
  'LOGIN_LOGO_ERROR' => 'Παρακαλώ αντικαταστήστε τα λογότυπα του SugarCRM.',
  'MSG_DUPLICATE' => 'Η εγγραφή {0} που είναι να δημιουργήσετε, πιθανά είναι αντίγραφο εγγραφής {0} που ήδη υπάρχει. {1} Οι εγγραφές που περιέχουν παρόμοια ονόματα, αναφέρονται παρακάτω.<br>Πατήστε Δημιουργία {1}να συνεχίσει τη δημιουργία αυτής της νέας {0}, ή επιλέξτε μία υφιστάμενη λίστα {0} που αναφέρεται παρακάτω.',
  'MSG_EMPTY_LIST_VIEW_GO_TO_PARENT' => 'Μπορείτε να δημιουργήσετε από μία <item1> from a <item2>. <item3> <item2> λίστα.',
  'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Προς το παρόν δεν υπάρχουν αποθηκευμένες εγγραφές.',
  'MSG_EMPTY_LIST_VIEW_NO_RESULTS_NO_IMPORT' => 'Δεν έχετε αυτήν την περίοδο εγγραφές αποθηκευμένες. μία τώρα.',
  'MSG_IS_LESS_THAN' => 'είναι λιγότερο από',
  'MSG_IS_MORE_THAN' => 'είναι περισσότερο από',
  'MSG_IS_NOT_BEFORE' => 'δεν είναι πριν από',
  'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => 'Πατήστε "Εντάξει" για προβολή της κλήσης ή πατήστε "Ακύρωση" για να απορρίψει αυτό το μήνυμα.',
  'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Περιγραφή:',
  'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Τοποθεσία:',
  'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => 'Πατήστε "Εντάξει" για προβολή της συνάντησης ή πατήστε "Ακύρωση" για να απορρίψει αυτό το μήνυμα.',
  'MSG_JS_ALERT_MTG_REMINDER_START' => 'έναρξη',
  'MSG_LIST_VIEW_NO_RESULTS' => 'Δεν βρέθηκαν αποτελέσματα',
  'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Δεν βρέθηκαν αποτελέσματα.',
  'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Δημιουργία νέας εγγραφής',
  'MSG_OR_GREATER' => 'ή μεγαλύτερη',
  'MSG_SHOULD_BE' => 'πρέπει να είναι',
  'MSG_SHOW_DUPLICATES' => 'Η εγγραφή λογαριασμού που πρόκειται να δημιουργήσετε θα μπορούσε να είναι αντίγραφο εγγραφής. {1} . Τα αρχεία που περιέχουν παρόμοια ονόματα που αναφέρονται παρακάτω<br>Πατήστε το κουμπί Αποθήκευση για να συνεχιστεί η δημιουργία αυτής της εγγραφής {0}, ή πατήστε Ακύρωση για να επιστρέψετε στην ενότητα χωρίς τη δημιουργία εγγραφής {0}.',
  'NOTICE_NO_DELETE_CLOSED' => 'Δεν μπορείτε να διαγράψετε τις εγγραφές που έχουν μια κλειστή κατάσταση πωλήσεων.',
  'NOTICE_NO_DELETE_CLOSED_STAGE' => 'Δεν μπορείτε να διαγράψετε τις εγγραφές που έχουν κλειστό στάδιο πώλησης.',
  'NOTICE_NO_DELETE_CLOSED_STATUS' => 'Δεν μπορείτε να διαγράψετε τις εγγραφές που έχουν κλειστή κατάσταση πώλησης.',
  'NO_QUERY_SELECTED' => 'Η μορφή των δεδομένων που έχετε επιλέξει δεν περιέχει ερώτημα. Παρακαλώ επιλέξτε ένα προσαρμοσμένο ερώτημα για αυτή τη μορφή δεδομένων.',
  'NTC_CLICK_BACK' => 'Για να διορθωθεί το λάθος, παρακαλώ πατήστε το προηγούμενο πλήκτρο του browser.',
  'NTC_DATE_FORMAT' => '(εεεε-μμ-ηη)',
  'NTC_DATE_TIME_FORMAT' => '(εεεε-μμ-ηη 24:00)',
  'NTC_DELETE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτή την εγγραφή;',
  'NTC_DELETE_CONFIRMATION_FORMATTED' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε το {0};',
  'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε την επιλεγμένη εγγραφή(ες);',
  'NTC_DELETE_CONFIRMATION_NUM' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτή την',
  'NTC_DELETE_SELECTED_RECORDS' => 'επιλεγμένη εγγραφή(ες);',
  'NTC_DELETE_SUCCESS' => 'Διαγράψατε το {0}.',
  'NTC_LOGIN_MESSAGE' => 'Παρακαλώ εισάγετε το όνομα χρήστη και τον κωδικό πρόσβασης σας.',
  'NTC_NO_ITEMS_DISPLAY' => 'κανένα',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Αυτή η εγγραφή περιέχει τρέχουσες αξίες στα πεδία Διευθύνσεων και στο πεδίο Τηλέφωνο Γραφείου. Για να επανεγγράψετε αυτές τις αξίες με το ακόλουθο Τηλέφωνο Γραφείου και την Διεύθυνση του Λογαριασμού που επιλέξατε, πατήστε το κουμπί "Εντάξει". Για να διατηρήσετε τις τρέχουσες αξίες, πατήστε το κουμπί "Ακύρωση".',
  'NTC_REMOVE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτή την σχέση; Μόνο η σχέση θα αφαιρεθεί. Το αρχείο δεν θα διαγραφεί.',
  'NTC_REQUIRED' => 'Υποδεικνύει υποχρεωτικό πεδίο',
  'NTC_SUPPORT_SUGARCRM' => 'Υποστήριξη της SugarCRM open source (έργο ανοικτού πηγαίου κώδικα) με μια δωρεά μέσω PayPal - είναι γρήγορο, ελεύθερο και ασφαλές!',
  'NTC_TEMPLATES_IS_USED' => 'Τα ακόλουθα πρότυπα, χρησιμοποιούνται σε αρχεία email μάρκετινγκ. Είστε σίγουροι ότι θέλετε να τα διαγράψετε;',
  'NTC_TEMPLATE_IS_USED' => 'Το πρότυπο χρησιμοποιείται σε τουλάχιστον μία εγγραφή email μάρκετινγκ. Είστε βέβαιοι ότι θέλετε να το διαγράψετε;',
  'NTC_TIME_FORMAT' => '(24:00)',
  'NTC_UNLINK_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να αποσυνδέσετε αυτή την εγγραφή;',
  'NTC_UNLINK_CONFIRMATION_FORMATTED' => 'Είστε βέβαιοι ότι θέλετε να αποσυνδέσετε το {0};',
  'NTC_UNLINK_SUCCESS' => 'Αποσυνδέσατε το {0}.',
  'NTC_UPDATE_CONFIRMATION_NUM' => 'Είστε βέβαιοι ότι θέλετε να ενημερώσετε αυτή την',
  'NTC_WELCOME' => 'Καλώς Ήλθατε',
  'NTC_YEAR_FORMAT' => '(εεεε)',
  'NavigationBar' => 'Μπάρα Πλοήγησης',
  'PrimaryButton' => 'Βασικό Κουμπί',
  'SUGAR_API_EXCEPTION_NOT_AUTHORIZED' => 'Δεν επιτρέπεται να επεξεργαστεί πεδίο  {0} στην ενότητα: {1}',
  'SUGAR_API_EXCEPTION_RECORD_NOT_AUTHORIZED' => 'Δεν επιτρέπεται να εκτελέσετε την ενέργεια "{0}" σε αυτή την εγγραφή',
  'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{{module}}} &raquo; {{appId}}',
  'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if name}}{{name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
  'TPL_DASHLET_MY_MODULE' => 'Η Δική Μου {{module}}',
  'TPL_DELETE_FILTER_SUCCESS' => 'Διαγράψατε το φίλτρο {{name}}.',
  'TPL_FILTER_SAVE' => 'Δημιουργήσατε με επιτυχία το φίλτρο {{όνομα}}.',
  'TPL_HISTORICAL_SUMMARY' => 'Ιστορική Αναδρομή για {{name}}',
  'TPL_IMPORT_VCARD_FAILURE' => 'Απέτυχε η δημιουργία {{ενότητας}} από vCard',
  'TPL_INACTIVE_TASKS_DASHLET_TIME_RELATIVE' => 'τελευταία τροποποίηση {{relativetime}} την {{date}} στις {{time}}',
  'TPL_LISTVIEW_SELECTED_ALL' => 'Έχετε επιλέξει όλες τις εγγραφές {{num}} στο σύνολο αποτελεσμάτων.',
  'TPL_LISTVIEW_SELECTED_FIRST_OFFSET' => 'Υπάρχουν περισσότερες από {{num}} εγγραφές στο σύνολο αποτελεσμάτων. Έχετε επιλέξει τις πρώτες εγγραφές {{num}}.',
  'TPL_LISTVIEW_SELECT_ALL_RECORDS' => 'Έχετε επιλέξει όλες τις εγγραφές {{num} σε αυτλη την προβολή. {{link}} στο σύνολο αποτελεσμάτων.',
  'TPL_MASSADDTOLIST_DURATION_FORMAT' => '(about {{time}} {{unit}} left)',
  'TPL_MASSADDTOLIST_FAIL_TO_ATTEMPT' => 'Η Μαζική Προσθήκη στην Λίστα Στόχων απέτυχε. Έναρξη νέας προσπάθειας ({{num}} του {{total}}).',
  'TPL_MASSADDTOLIST_PROGRESS_STATUS' => 'Προσθήκη {{num}} του {{total}}.',
  'TPL_MASSADDTOLIST_SUCCESS' => '{{num}} εγγραφές προστέθηκαν με επιτυχία.',
  'TPL_MASSADDTOLIST_TITLE' => '{{module}} Μαζική Προσθήκη στην Λίστα Στόχων',
  'TPL_MASSADDTOLIST_WARNING_CLOSE' => 'Η Μαζική Προσθήκη στην Λίστα Στόχων απέτυχε. {{num}} εγγραφές δεν προστέθηκαν.',
  'TPL_MASSADDTOLIST_WARNING_INCOMPLETE' => 'Η Μαζική Προσθήκη στην Λίστα Στόχων δεν ολοκληρώθηκε. {{num}} εγγραφές δεν προστέθηκαν.',
  'TPL_MASSDELETE_DURATION_FORMAT' => '(about {{time}} {{unit}} left)',
  'TPL_MASSDELETE_FAIL_TO_ATTEMPT' => 'Η Μαζική Διαγραφή απέτυχε. Έναρξη νέας προσπάθειας ({{num}} του {{total}}).',
  'TPL_MASSDELETE_PROGRESS_STATUS' => 'Διαγραφή {{num}} του {{total}}.',
  'TPL_MASSDELETE_SUCCESS' => '{{num}} εγγραφές διαγράφηκαν με επιτυχία.',
  'TPL_MASSDELETE_TITLE' => '{{module}} Μαζική Διαγραφή',
  'TPL_MASSDELETE_WARNING_CLOSE' => 'Η Μαζική Διαγραφή δεν ολοκληρώθηκε. {{num}} εγγραφές παραμένουν.',
  'TPL_MASSDELETE_WARNING_INCOMPLETE' => 'Η Μαζική Διαγραφή δεν ολοκληρώθηκε. {{num}} εγγραφές παραμένουν.',
  'TPL_MASSLINK_DURATION_FORMAT' => '(about {{time}} {{unit}} left)',
  'TPL_MASSLINK_FAIL_TO_ATTEMPT' => 'Η Μαζική Σύνδεση απέτυχε. Έναρξη νέας προσπάθειας {{αριθ.}} του {{συνόλου}}.',
  'TPL_MASSLINK_PROGRESS_STATUS' => 'Σύνδεση {{αριθ.}} του {{συνόλου}}.',
  'TPL_MASSLINK_SUCCESS' => '{{αριθ.}} εγγραφών συνδέθηκαν με επιτυχία.',
  'TPL_MASSLINK_TITLE' => '{{ενότητα}} Μαζική Σύνδεση',
  'TPL_MASSLINK_WARNING_CLOSE' => 'Η Μαζική Σύνδεση δεν ολοκληρώθηκε. {{αριθ.}} εγγραφών δεν προστέθηκαν.',
  'TPL_MASSLINK_WARNING_INCOMPLETE' => 'Η Μαζική Σύνδεση δεν ολοκληρώθηκε. {{αριθ.}} εγγραφών δεν προστέθηκαν.',
  'TPL_MASSUPDATE_DURATION_FORMAT' => '(about {{time}} {{unit}} left)',
  'TPL_MASSUPDATE_FAIL_TO_ATTEMPT' => 'Απέτυχε η εΜαζική Ενημέρωση. Έναρξη της νέας προσπάθειας ({{num}} του συνόλου {{total}}).',
  'TPL_MASSUPDATE_PROGRESS_STATUS' => 'Ενημέρωση {{num}} του συνόλου {{total}}.',
  'TPL_MASSUPDATE_SUCCESS' => '{{num}} εγγραφές ενημερώθηκαν με επιτυχία.',
  'TPL_MASSUPDATE_TITLE' => '{{module}} Μαζική Ενημέρωση',
  'TPL_MASSUPDATE_WARNING_CLOSE' => 'Η Μαζική Ενημέρωση δεν ολοκληρώθηκε οι {{num}} εγγραφές παραμένουν αμετάβλητες.',
  'TPL_MASSUPDATE_WARNING_INCOMPLETE' => 'Η Μαζική Ενημέρωση δεν ολοκληρώθηκε οι {{num}} εγγραφές παραμένουν αμετάβλητες.',
  'TPL_MASSUPDATE_WARNING_PERMISSION' => '{{remain}} εγγραφές οι οποίες αγνοήθηκαν λόγω άδειας.',
  'TPL_MASS_ADD_TO_LIST_QUEUED' => 'Το αίτημά σας να προσθέσετε επιλεγμένες εγγραφές σε λίστα στόχων <a href="{{listUrl}}">{{listName}}</a> έχει προγραμματιστεί.',
  'TPL_MASS_ADD_TO_LIST_SUCCESS' => 'Οι επιλεγμένες εγγραφές προστέθηκαν στη λίστα στόχων <a href="{{listUrl}}">{{listName}}</a> .',
  'TPL_MERGE_DUPLICATES_FAIL' => 'Συγχώνευση Σχετιζόμενων {{objectName}} απέτυχε.',
  'TPL_MERGE_DUPLICATES_FAIL_TO_ATTEMPT' => 'Συγχώνευση Σχετιζόμενων {{objectName}} απέτυχε. Έναρξη νέας προσπάθειας ({{num}} του {{total}}).',
  'TPL_MERGE_DUPLICATES_IDENTICAL' => 'Όλες οι σχετικές εγγραφές θα μεταφερθούν στην Βασική εγγραφή.',
  'TPL_MERGE_DUPLICATES_PROGRESS_STATUS' => 'Συγχωνευμένα: {{percent}}%.',
  'TPL_MERGE_DUPLICATES_STAT' => '{{#with stat}}{{records}} εγγραφές συγχωνεύτηκαν με επιτυχία. {{total}} σχετικές εγγραφές προστέθηκαν.{{/with}}',
  'TPL_MERGE_INVALID_NUMBER_RECORDS' => 'Μη έγκυρος αριθμός εγγραφών. Η έγκυρη περιοχή είναι από {{minRecords}} σε {{maxRecords}} εγγραφές.',
  'TPL_MERGING_RECORDS' => 'Συγχώνευση {{mergeCount}} Εγγραφών',
  'TPL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_DESCRIPTION' => 'Για να στείλετε ειδοποιήσεις ανάθεσης εγγραφής , ένας διακομιστής SMTP πρέπει να ρυθμιστεί στο {{emailSettingsUrl}}.',
  'TPL_OVERWRITE_POPULATED_DATA_CONFIRM' => 'Η επιλεγμένη εγγραφή θα επανεγγράψει τις ακόλουθες τιμές: {{values}}. "Άκυρο" για να διατηρήσετε τις υπάρχουσες τιμές. "Επιβεβαίωση" για να επανεγγράψει με τις νέες τιμές.',
  'TPL_OVERWRITE_POPULATED_DATA_CONFIRM_WITH_MODULE_SINGULAR' => 'Το επιλεγμένο {{moduleSingularLower}} σχετίζεται με τιμές: {{values}}. "Άκυρο" για να διατηρήσετε τις υπάρχουσες τιμές. "Επιβεβαίωση" για να επανεγγράψετε με τις νέες τιμές.',
  'TPL_RECORD_SHARE_BODY' => 'Παρακαλώ ολοκληρώστε {{module}} {{name}} από {{appId}}',
  'TPL_RECORD_SHARE_SUBJECT' => 'Κοινό {{module}} {{name}} από {{appId}}',
  'TPL_SHOW_MORE_MODULE' => 'Περισσότερες {{ενότητες}}...',
  'TPL_STATUS_CHANGE_SUCCESS' => '{{moduleSingular}} σημάνθηκε ως {{status}}.',
  'TPL_TABBED_DASHLET_GROUP_BUTTON_LABEL' => 'Στοιχεία Ομάδας',
  'TPL_TABBED_DASHLET_USER_BUTTON_LABEL' => 'Ιστορικό Μου',
  'TPL_TIMEZONE_DIFFERENT' => 'Η Ζώνη ώρας του προγράμματος περιήγησής σας δεν ταιριάζει με την αποθηκευμένη χρονική ζώνη σας {{link}}',
  'UPLOAD_ERROR_HOME_TEXT' => 'ΛΑΘΟΣ: Υπήρξε ένα σφάλμα κατά τη διάρκεια της αποστολής σας, παρακαλώ επικοινωνήστε με έναν διαχειριστή για βοήθεια.',
  'UPLOAD_ERROR_TEXT' => 'ΛΑΘΟΣ: Υπήρξε ένα σφάλμα κατά τη διάρκεια φόρτωσης. Λάθος κώδικας: {0} - {1}',
  'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ΛΑΘΟΣ: Υπήρξε ένα σφάλμα κατά τη διάρκεια φόρτωσης. Λάθος κώδικας: {0} - {1}. Το μέγιστο μέγεθος_φόρτωσης είναι {2}',
  'UPLOAD_MAXIMUM_EXCEEDED' => 'Μέγεθος Φόρτωσης Αρχείου ({0} bytes) Μέγιστη Επιτρεπόμενη Υπέρβαση: {1} bytes',
  'UPLOAD_REQUEST_ERROR' => 'Ένα λάθος έχει εμφανιστεί. Παρακαλώ ανανεώστε τη σελίδα σας και προσπαθήστε πάλι.',
  'WARNING_NO_DELETE_CLOSED_SELECTED_STATUS' => 'Μία ή περισσότερες από τις επιλεγμένες εγγραφές, έχει ένα RLI με κατάσταση πώλησης "Έκλεισε Κερδισμένη" ή "Έκλεισε Χαμένη" και δεν μπορούν να διαγραφούν.',
  'WARNING_NO_DELETE_SELECTED' => 'Μία ή περισσότερες από τις επιλεγμένες εγγραφές ειναι σε κατάσταση "Κλειστή Κερδισμένη" ή "Κλειστή Χαμένη" και δεν μπορεί να διαγραφεί.',
  'WARNING_NO_DELETE_SELECTED_STAGE' => 'Μία ή περισσότερες επιλεγμένες εγγραφές, έχουν στάδιο πώλησης "Έκλεισε Κερδισμένη" ή "Έκλεισε Χαμένη" και δεν μπορούν να διαγραφούν.',
  'WARNING_NO_DELETE_SELECTED_STATUS' => 'Μία ή περισσότερες από τις επιλεγμένες εγγραφές, έχουν κατάσταση πώλησης "Έκλεισε Κερδισμένη" ή "Έκλεισε Χαμένη" και δεν μπορούν να διαγραφούν.',
  'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Προειδοποίηση:</b> Ο browser σας είναι σε IE συμβατότητα, η οποία δεν υποστηρίζεται.',
  'WARN_BROWSER_VERSION_WARNING' => '<p><b>Προειδοποίηση:</b>Το πρόγραμμα του browser ή η έκδοση του προγράμματος του browser που χρησιμοποιείτε, δεν υποστηρίζεται.</p><p>Συνιστώνται οι ακόλουθες εκδόσεις προγραμμάτων περιήγησης</p><ul><li>Internet Explorer 9</li><li>Mozilla Firefox 14, 15 </li><li>Safari 6</li><li>Google Chrome 22 (ή πιο πρόσφατη έκδοση)</li></ul>',
  'WARN_LICENSE_EXPIRED' => 'Η Άδεια Χρήσης της εταιρείας σας για το SugarCRM θα λήξει σύντομα.',
  'WARN_LICENSE_SEATS' => 'Προειδοποίηση: Ο αριθμός των ενεργών χρηστών είναι ήδη ο μέγιστος αριθμός των αδειών που επιτρέπονται.',
  'WARN_LICENSE_SEATS_MAXED' => 'Προειδοποίηση: Ο αριθμός ενεργών χρηστών υπερβαίνει τον μέγιστο αριθμό αδειών που επιτρέπονται.',
  'WARN_LICENSE_VALIDATION' => 'Η Άδεια Χρήσης της εταιρείας σας για το SugarCRM χρειάζεται να επικυρωθεί σύντομα.',
  'WARN_ONLY_ADMINS' => 'Μόνο οι διαχειριστές μπορούν να συνδεθούν.',
  'WARN_UNSAVED_CHANGES' => 'Είστε έτοιμοι να αφήσετε αυτήν την εγγραφή, χωρίς να αποθηκεύσετε τυχόν αλλαγές που μπορεί να γίνουν στο αρχείο. Είστε βέβαιοι ότι θέλετε να φύγετε από αυτήν την εγγραφή;',
);

$app_list_strings = array (
  'Elastic_boost_options' => 
  array (
    0 => 'Απενεργοποιημένο',
    1 => 'Χαμηλή Ώθηση',
    2 => 'Μέτρια Ώθηση',
    3 => 'Υψηλή Ώθηση',
  ),
  'account_type_dom' => 
  array (
    '' => '[-κενό-]',
    'Analyst' => 'Αναλυτής',
    'Competitor' => 'Ανταγωνιστής',
    'Customer' => 'Πελάτης',
    'Integrator' => 'Integrator',
    'Investor' => 'Επενδυτής',
    'Other' => 'Άλλο',
    'Partner' => 'Συνεργάτης',
    'Press' => 'Τύπος',
    'Prospect' => 'Προοπτική',
    'Reseller' => 'Μεταπωλητής',
  ),
  'activity_dom' => 
  array (
    'Call' => 'Κλήση',
    'Email' => 'Email',
    'Meeting' => 'Συνάντηση',
    'Note' => 'Σημείωση',
    'Task' => 'Εργασία',
  ),
  'activity_user_options' => 
  array (
    7 => 'Τελευταίες 7 Ημέρες',
    30 => 'Τελευταίες 30 Ημέρες',
    90 => 'Τελευταίο Τρίμηνο',
  ),
  'bopselect_type_dom' => 
  array (
    'Equals' => 'Ισούται',
  ),
  'bselect_type_dom' => 
  array (
    'bool_false' => 'Όχι',
    'bool_true' => 'Ναι',
  ),
  'bug_priority_dom' => 
  array (
    'High' => 'Υψηλή',
    'Low' => 'Χαμηλή',
    'Medium' => 'Μεσαία',
    'Urgent' => 'Επείγον',
  ),
  'bug_resolution_dom' => 
  array (
    '' => '[-κενό-]',
    'Accepted' => 'Αποδεκτό',
    'Duplicate' => 'Αντίγραφο',
    'Fixed' => 'Διορθωμένο',
    'Invalid' => 'Άκυρο',
    'Later' => 'Αργότερα',
    'Out of Date' => 'Ληγμένο Χρονικά',
  ),
  'bug_status_dom' => 
  array (
    'Assigned' => 'Ανατέθηκε',
    'Closed' => 'Έκλεισε',
    'New' => 'Νέο',
    'Pending' => 'Σε Εκκρεμότητα',
    'Rejected' => 'Απορρίφθηκε',
  ),
  'bug_type_dom' => 
  array (
    'Defect' => 'Ελαττωματικό',
    'Feature' => 'Ιδιόμορφο',
  ),
  'business_rule_type_list' => 
  array (
    'single' => 'Single-Hit',
  ),
  'call_direction_dom' => 
  array (
    'Inbound' => 'Εισερχόμενη',
    'Outbound' => 'Εξερχόμενη',
  ),
  'call_status_dom' => 
  array (
    'Held' => 'Πραγματοποιήθηκε',
    'Not Held' => 'Ακυρώθηκε',
    'Planned' => 'Προγραμματισμένο',
  ),
  'campaign_status_dom' => 
  array (
    '' => '[-κενό-]',
    'Active' => 'Ενεργή',
    'Complete' => 'Ολοκληρωμένη',
    'In Queue' => 'Σε Ουρά Αναμονής',
    'Inactive' => 'Ανενεργή',
    'Planning' => 'Προγραμματισμένη',
    'Sending' => 'Απεσταλμένη',
  ),
  'campaign_type_dom' => 
  array (
    '' => '[-κενό-]',
    'Email' => 'Email',
    'Mail' => 'Αλληλογραφία',
    'NewsLetter' => 'Ενημερωτικά Δελτία',
    'Print' => 'Εκτύπωση',
    'Radio' => 'Ραδιόφωνο',
    'Telesales' => 'Τηλεφωνικές Πωλήσεις',
    'Television' => 'Τηλεόραση',
    'Web' => 'Ιστοχώρος',
  ),
  'campainglog_activity_type_dom' => 
  array (
    '' => '[-κενό-]',
    'blocked' => 'Κατασταλμένη ανά διεύθυνση ή περιοχή',
    'contact' => 'Επαφή',
    'invalid email' => 'Σφαλμένα Μηνύματα, Άκυρο Email',
    'lead' => 'Δυνητικός Πελάτης',
    'link' => 'Πατήστε τον σύνδεσμο thru',
    'removed' => 'Αποχωρημένο',
    'send error' => 'Σφαλμένα Μηνύματα, Άλλο',
    'targeted' => 'Μήνυμα Εστάλη/Προσπάθειες',
    'viewed' => 'Προβολή Μηνύματος',
  ),
  'campainglog_target_type_dom' => 
  array (
    'Accounts' => 'Λογιαριασμοί',
    'Contacts' => 'Επαφές',
    'Leads' => 'Δυνητικοί Πελάτες',
    'Prospects' => 'Στόχοι',
    'Users' => 'Χειριστές',
  ),
  'case_priority_dom' => 
  array (
    'P1' => 'Υψηλή',
    'P2' => 'Μεσαία',
    'P3' => 'Χαμηλή',
  ),
  'case_relationship_type_dom' => 
  array (
    '' => '[-κενό-]',
    'Alternate Contact' => 'Εναλλακτική Επαφή',
    'Primary Contact' => 'Κύρια Επαφή',
  ),
  'case_status_dom' => 
  array (
    'Assigned' => 'Ανατέθηκε',
    'Closed' => 'Έκλεισε',
    'Duplicate' => 'Αντίγραφο',
    'New' => 'Νέα',
    'Pending Input' => 'Εκκρεμής',
    'Rejected' => 'Απορρίφθηκε',
  ),
  'case_type_dom' => 
  array (
    'Administration' => 'Διαχείριση',
    'Product' => 'Προϊόν',
    'User' => 'Χειριστής',
  ),
  'charset_dom' => 
  array (
    'BIG-5' => 'ΜΕΓΑΛΟ-5 (Ταϊβάν και Χονγκ Κονγκ)',
    'CP1251' => 'CP1251 (MS Κυριλλικά)',
    'CP1252' => 'CP1252 (Κράτη μέλη της Δυτικής Ευρώπης)',
    'EUC-CN' => 'EUC-CN (Απλοποιημένα Κινέζικα GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Ιαπωνικά)',
    'EUC-KR' => 'EUC-KR (Κορεάτικα)',
    'EUC-TW' => 'EUC-TW (Ταϊβανέζικα)',
    'ISO-2022-JP' => 'ISO-2022-JP (Ιαπωνικά)',
    'ISO-2022-KR' => 'ISO-2022-KR (Κορεάτικα)',
    'ISO-8859-1' => 'ISO-8859-1 (Δυτικής Ευρώπης και ΗΠΑ)',
    'ISO-8859-10' => 'ISO-8859-10 (Λατινικά 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Λατινικά 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Λατινικά 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Λατινικά 9)',
    'ISO-8859-2' => 'ISO-8859-2 (Κεντρικής και Ανατολικής Ευρώπης)',
    'ISO-8859-3' => 'ISO-8859-3 (Λατινικά 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Λατινικά 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Κυριλλικά)',
    'ISO-8859-6' => 'ISO-8859-6 Αραβικά)',
    'ISO-8859-7' => 'ISO-8859-7 (Ελληνικά)',
    'ISO-8859-8' => 'ISO-8859-8 (Εβραϊκά)',
    'ISO-8859-9' => 'ISO-8859-9 (Λατινικά 5)',
    'KOI8-R' => 'KOI8-R (Κυριλλική Ρωσική)',
    'KOI8-U' => 'KOI8-U (Κυριλλική Ουκρανική)',
    'SJIS' => 'SJIS (MS Ιαπωνικά)',
    'UTF-8' => 'UTF-8',
  ),
  'chart_strings' => 
  array (
    'barchart' => 'Μπάρα Γραφήματος',
    'clickfordrilldown' => 'Πατήστε για Drilldown',
    'collapselegend' => 'Σύμπτυξη Υπομνήματος',
    'detailview' => 'Περισσότερες Λεπτομέρειες...',
    'drilldownoptions' => 'DrillDown Επιλογές',
    'expandlegend' => 'Επέκταση Υπομνήματος',
    'groupchart' => 'Γράφημα Γκρουπ',
    'horizontalbarchart' => 'Οριζόντια Μπάρα Γραφήματος',
    'linechart' => 'Γραμμή Γραφήματος',
    'noData' => 'Δεν υπάρχουν διαθέσιμα Δεδομένα',
    'pieWedgeName' => 'τμήματα',
    'piechart' => 'Γράφημα Πίτας',
    'print' => 'Εκτύπωση',
    'stackedchart' => 'Συσσωρευμένο Γράφημα',
  ),
  'checkbox_dom' => 
  array (
    '' => '[-κενό-]',
    1 => 'Ναι',
    2 => 'Όχι',
  ),
  'checkbox_massupdate_dom' => 
  array (
    0 => 'Όχι',
    1 => 'Ναι',
  ),
  'commit_stage_binary_dom' => 
  array (
    'exclude' => 'Δεν Συμπεριλαμβάνεται',
    'include' => 'Συμπεριλαμβάνεται',
  ),
  'commit_stage_custom_dom' => 
  array (
    'exclude' => 'Δεν Συμπεριλαμβάνεται',
    'include' => 'Συμπεριλαμβάνεται',
    'upside' => 'Ανάποδα',
  ),
  'commit_stage_dom' => 
  array (
    'exclude' => 'Δεν Συμπεριλαμβάνεται',
    'include' => 'Συμπεριλαμβάνεται',
    'upside' => 'Επάνω μέρος',
  ),
  'contract_expiration_notice_dom' => 
  array (
    1 => '1 Ημέρα',
    3 => '3 Ημέρες',
    5 => '5 Ημέρες',
    7 => '1 Εβδομάδα',
    14 => '2 Εβδομάδες',
    21 => '3 Εβδομάδες',
    31 => '1 Μήνα',
  ),
  'contract_payment_frequency_dom' => 
  array (
    'halfyearly' => 'Εξαμηνιαία',
    'monthly' => 'Μηνιαία',
    'quarterly' => 'Τριμηνιαία',
    'yearly' => 'Ετήσια',
  ),
  'contract_status_dom' => 
  array (
    'inprogress' => 'Σε Εξέλιξη',
    'notstarted' => 'Δεν έχει αρχίσει',
    'signed' => 'Υπογεγραμμένη',
  ),
  'countries_dom' => 
  array (
    '' => '[-κενό-]',
    'ABU DHABI' => 'ΑΜΠΟΥ ΝΤΑΜΠΙ',
    'ADEN' => 'ΆΝΤΕΝ',
    'AFGHANISTAN' => 'ΑΦΓΑΝΙΣΤΑΝ',
    'ALBANIA' => 'ΑΛΒΑΝΙΑ',
    'ALGERIA' => 'ΑΛΓΕΡΙΑ',
    'AMERICAN SAMOA' => 'ΑΜΕΡΙΚΑΝΙΚΗ ΣΑΜΟΑ',
    'ANDORRA' => 'ΑΝΔΟΡΡΑ',
    'ANGOLA' => 'ΑΝΓΚΟΛΑ',
    'ANTARCTICA' => 'ΑΝΤΑΡΤΙΚΗ',
    'ANTIGUA' => 'ΑΝΤΙΓΚΟΥΑ',
    'ARGENTINA' => 'ΑΡΓΕΝΤΙΝΗ',
    'ARMENIA' => 'ΑΡΜΕΝΙΑ',
    'ARUBA' => 'ΑΡΟΥΜΠΑ',
    'AUSTRALIA' => 'ΑΥΣΤΡΑΛΙΑ',
    'AUSTRIA' => 'ΑΥΣΤΡΙΑ',
    'AZERBAIJAN' => 'ΑΖΕΡΜΠΑΪΖΑΝ',
    'BAHAMAS' => 'ΜΠΑΧΑΜΕΣ',
    'BAHRAIN' => 'ΜΠΑΧΡΕΪΝ',
    'BANGLADESH' => 'ΜΠΑΝΓΚΛΑΝΤΕΣ',
    'BARBADOS' => 'ΒΑΡΒΑΡΟΣ',
    'BELARUS' => 'ΛΕΥΚΟΡΩΣΙΑ',
    'BELGIUM' => 'ΒΕΛΓΙΟ',
    'BELIZE' => 'ΜΠΕΛΙΖ',
    'BENIN' => 'ΜΠΕΝΙΝ',
    'BERMUDA' => 'ΒΕΡΜΟΥΔΑ',
    'BHUTAN' => 'ΜΠΟΥΤΑΝ',
    'BOLIVIA' => 'ΒΟΛΙΒΙΑ',
    'BOSNIA' => 'ΒΟΣΙΝΙΑ',
    'BOTSWANA' => 'ΜΠΟΤΣΟΥΑΝΑ',
    'BOUVET ISLAND' => 'ΝΗΣΟΣ ΜΠΟΥΒΕ',
    'BRAZIL' => 'ΒΡΑΖΙΛΙΑ',
    'BRITISH ANTARCTICA TERRITORY' => 'ΒΡΕΤΑΝΙΚΟ ΕΔΑΦΟΣ ΑΝΤΑΡΚΤΙΚΗ',
    'BRITISH INDIAN OCEAN TERRITORY' => 'ΒΡΕΤΑΝΙΚΟ ΈΔΑΦΟΣ ΙΝΔΙΚΟΥ ΩΚΕΑΝΟΥ',
    'BRITISH VIRGIN ISLANDS' => 'ΒΡΕΤΑΝΙΚΕΣ ΠΑΡΘΕΝΟΙ ΝΗΣΟΙ',
    'BRITISH WEST INDIES' => 'ΝΗΣΙΑ ΔΥΤΙΚΗΣ ΒΡΕΤΑΝΙΑΣ',
    'BRUNEI' => 'ΜΠΡΟΥΝΕΪ',
    'BULGARIA' => 'ΒΟΥΛΓΑΡΙΑ',
    'BURKINA FASO' => 'ΜΠΟΥΡΚΙΝΑ ΦΑΣΟ',
    'BURUNDI' => 'ΜΠΟΥΡΟΥΝΤΙ',
    'CAMBODIA' => 'ΚΑΜΠΟΤΖΗ',
    'CAMEROON' => 'ΚΑΜΕΡΟΥΝ',
    'CANADA' => 'ΚΑΝΑΔΑ',
    'CANAL ZONE' => 'ΖΩΝΗ ΤΗΣ ΔΙΩΡΥΓΑΣ',
    'CANARY ISLAND' => 'ΚΑΝΑΡΙΑ ΝΗΣΙΑ',
    'CAPE VERDI ISLANDS' => 'ΚΑΠΕ ΒΕΡΝΤΙ ΝΗΣΙΑ',
    'CAYMAN ISLANDS' => 'ΝΗΣΙΑ ΚΑΪΜΑΝ',
    'CEVLON' => 'ΣΕΒΛΟΝ',
    'CHAD' => 'ΤΣΑΝΤ',
    'CHANNEL ISLAND UK' => 'ΚΑΝΑΛΙ ΝΗΣΙΩΝ ΗΝΩΜΕΝΟ ΒΑΣΙΛΕΙΟ',
    'CHILE' => 'ΧΙΛΗ',
    'CHINA' => 'ΚΙΝΑ',
    'CHRISTMAS ISLAND' => 'ΝΗΣΙΑ ΧΡΙΣΤΟΥΓΕΝΝΩΝ',
    'COCOS (KEELING) ISLAND' => 'ΚΟΚΟΣ ΝΗΣΙΑ',
    'COLOMBIA' => 'ΚΟΛΟΜΒΙΑ',
    'COMORO ISLANDS' => 'ΚΟΜΟΡΟ ΝΗΣΙΑ',
    'CONGO' => 'ΚΟΝΓΚΟ',
    'CONGO KINSHASA' => 'ΚΟΝΓΚΟ ΚΙΝΣΑΣΑ',
    'COOK ISLANDS' => 'ΝΗΣΟΙ ΚΟΥΚ',
    'COSTA RICA' => 'ΚΟΣΤΑ ΡΙΚΑ',
    'CROATIA' => 'ΚΡΟΑΤΙΑ',
    'CUBA' => 'ΚΟΥΒΑ',
    'CURACAO' => 'ΚΟΥΡΑΚΑΟ',
    'CYPRUS' => 'ΚΥΠΡΟΣ',
    'CZECH REPUBLIC' => 'ΔΗΜΟΚΡΑΤΙΑ ΤΗΣ ΤΣΕΧΙΑΣ',
    'DAHOMEY' => 'ΝΤΑΧΟΜΕΥ',
    'DENMARK' => 'ΔΑΝΙΑ',
    'DJIBOUTI' => 'ΤΖΙΜΠΟΥΤΙ',
    'DOMINICA' => 'ΔΟΜΙΝΙΚΑ',
    'DOMINICAN REPUBLIC' => 'ΔΟΜΙΝΙΚΟΣ ΔΗΜΟΚΡΑΤΙΑ',
    'DUBAI' => 'ΝΤΟΥΜΠΑΪ',
    'ECUADOR' => 'ΙΣΗΜΕΡΙΝΟΣ',
    'EGYPT' => 'ΑΙΓΥΠΤΟΣ',
    'EL SALVADOR' => 'ΕΛ ΣΑΛΒΑΔΟΡ',
    'EQUATORIAL GUINEA' => 'ΙΣΗΜΕΡΙΝΗΣ ΓΟΥΪΝΕΑΣ',
    'ESTONIA' => 'ΕΣΘΟΝΙΑ',
    'ETHIOPIA' => 'ΑΙΘΙΟΠΙΑ',
    'FAEROE ISLANDS' => 'ΝΗΣΟΙ ΦΕΡΟΕ',
    'FALKLAND ISLANDS' => 'ΝΗΣΙΑ ΦΩΚΛΑΝΤΤ',
    'FIJI' => 'ΦΙΤΖΙ',
    'FINLAND' => 'ΦΙΝΛΑΝΔΙΑ',
    'FRANCE' => 'ΓΑΛΛΙΑ',
    'FRENCH GUIANA' => 'ΓΑΛΛΙΚΗ ΓΟΥΪΑΝΑ',
    'FRENCH POLYNESIA' => 'ΓΑΛΛΙΚΗ ΓΟΥΪΑΝΑ',
    'GABON' => 'ΓΚΑΜΠΟΝ',
    'GAMBIA' => 'ΓΚΑΜΒΙΑ',
    'GEORGIA' => 'ΓΕΩΡΓΙΑ',
    'GERMANY' => 'ΓΕΡΜΑΝΙΑ',
    'GHANA' => 'ΓΚΑΝΑ',
    'GIBRALTAR' => 'ΓΙΒΡΑΛΤΑΡ',
    'GREECE' => 'ΕΛΛΑΔΑ',
    'GREENLAND' => 'ΓΡΟΙΛΑΝΔΙΑ',
    'GUADELOUPE' => 'ΓΟΥΑΔΕΛΟΥΠΗ',
    'GUAM' => 'ΓΚΟΥΑΜ',
    'GUATEMALA' => 'ΓΟΥΑΤΕΜΑΛΑ',
    'GUINEA' => 'ΓΟΥΪΝΕΑ',
    'GUYANA' => 'ΓΚΟΥΪΑΝΑ',
    'HAITI' => 'ΑΪΤΗ',
    'HONDURAS' => 'ΟΝΔΟΥΡΑ',
    'HONG KONG' => 'ΧΟΝΓΚ ΚΟΝΓΚ',
    'HUNGARY' => 'ΟΥΓΓΑΡΙΑ',
    'ICELAND' => 'ΙΣΛΑΝΔΙΑ',
    'IFNI' => 'ΙΦΝΙ',
    'INDIA' => 'ΙΝΔΙΑ',
    'INDONESIA' => 'ΙΝΔΟΝΗΣΙΑ',
    'IRAN' => 'ΙΡΑΝ',
    'IRAQ' => 'ΙΡΑΚ',
    'IRELAND' => 'ΙΡΛΑΝΔΙΑ',
    'ISRAEL' => 'ΙΣΡΑΗΛ',
    'ITALY' => 'ΙΤΑΛΙΑ',
    'IVORY COAST' => 'ΑΚΤΗ ΕΛΕΦΑΝΤΟΣΤΟΥ',
    'JAMAICA' => 'ΤΖΑΜΑΪΚΑ',
    'JAPAN' => 'ΙΑΠΩΝΙΑ',
    'JORDAN' => 'ΙΟΡΔΑΝΙΑ',
    'KAZAKHSTAN' => 'ΚΑΖΑΚΣΤΑΝ',
    'KENYA' => 'ΚΕΝΥΑ',
    'KOREA' => 'ΚΟΡΕΑ',
    'KOREA, SOUTH' => 'ΝΟΤΙΑ ΚΟΡΕΑ',
    'KUWAIT' => 'ΚΟΥΒΕΪΤ',
    'KYRGYZSTAN' => 'ΚΟΥΡΔΙΣΤΑΝ',
    'LAOS' => 'ΛΑΟΣ',
    'LATVIA' => 'ΛΕΤΟΝΙΑ',
    'LEBANON' => 'ΛΙΒΑΝΟΣ',
    'LEEWARD ISLANDS' => 'LEEWARD ΝΗΣΙΑ',
    'LESOTHO' => 'ΛΕΣΟΤΟ',
    'LIBYA' => 'ΛΙΒΥΗ',
    'LIECHTENSTEIN' => 'ΛΙΧΤΕΝΣΤΑΪΝ',
    'LITHUANIA' => 'ΛΙΘΟΥΑΝΙΑ',
    'LUXEMBOURG' => 'ΛΟΥΞΕΜΒΟΥΡΓΟ',
    'MACAO' => 'ΜΑΚΑΟ',
    'MACEDONIA' => 'ΜΑΚΕΔΟΝΙΑ',
    'MADAGASCAR' => 'ΜΑΔΑΓΑΣΚΑΡΗ',
    'MALAWI' => 'ΜΑΛΑΟΥΙ',
    'MALAYSIA' => 'ΜΑΛΑΙΣΙΑ',
    'MALDIVES' => 'ΜΑΛΔΙΒΕΣ',
    'MALI' => 'ΜΑΛΙ',
    'MALTA' => 'ΜΑΛΤΑ',
    'MARTINIQUE' => 'ΜΑΡΤΙΝΙΚΑ',
    'MAURITANIA' => 'ΜΑΥΡΙΤΑΝΙΑ',
    'MAURITIUS' => 'ΜΑΥΡΙΚΙΟΣ',
    'MELANESIA' => 'ΜΕΛΑΝΕΣΙΑ',
    'MEXICO' => 'ΜΕΞΙΚΟ',
    'MOLDOVIA' => 'ΜΟΛΔΑΒΙΑ',
    'MONACO' => 'ΜΟΝΑΚΟ',
    'MONGOLIA' => 'ΜΟΓΓΟΛΙΑ',
    'MOROCCO' => 'ΜΑΡΟΚΟ',
    'MOZAMBIQUE' => 'ΜΟΖΑΜΒΙΚΗ',
    'MYANAMAR' => 'ΜΙΑΝΜΑΡ',
    'NAMIBIA' => 'ΝΑΜΙΜΠΙΑ',
    'NEPAL' => 'ΝΕΠΑΛ',
    'NETHERLANDS' => 'ΟΛΛΑΝΔΙΑ',
    'NETHERLANDS ANTILLES' => 'ΟΛΛΑΝΔΙΚΕΣ ΑΝΤΙΛΛΕΣ',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ΟΛΛΑΝΔΙΚΕΣ ΑΝΤΙΛΛΕΣ ΟΥΔΕΤΕΡΗ ΖΩΝΗ',
    'NEW CALADONIA' => 'ΝΕΑ ΚΑΛΑΔΟΝΙΑ',
    'NEW HEBRIDES' => 'ΝΕΕΣ ΕΒΡΙΔΕΣ',
    'NEW ZEALAND' => 'ΝΕΑ ΖΗΛΑΝΔΙΑ',
    'NICARAGUA' => 'ΝΙΚΑΡΑΓΟΥΑ',
    'NIGER' => 'ΝΙΓΗΡΑΣ',
    'NIGERIA' => 'ΝΙΓΗΡΙΑ',
    'NORFOLK ISLAND' => 'ΝΗΣΙ ΝΟΡΦΟΛΚ',
    'NORWAY' => 'ΝΟΡΒΗΓΙΑ',
    'OMAN' => 'ΟΜΑΝ',
    'OTHER' => 'ΑΛΛΟ',
    'PACIFIC ISLAND' => 'ΝΗΣΙΑ ΤΟΥ ΕΙΡΗΝΙΚΟΥ',
    'PAKISTAN' => 'ΠΑΚΙΣΤΑΝ',
    'PANAMA' => 'ΠΑΝΑΜΑ',
    'PAPUA NEW GUINEA' => 'ΠΑΠΟΥΑ ΝΕΑ ΓΟΥΙΝΕΑ',
    'PARAGUAY' => 'ΠΑΡΑΓΟΥΑΗ',
    'PERU' => 'ΠΕΡΟΥ',
    'PHILIPPINES' => 'ΦΙΛΙΠΠΙΝΕΣ',
    'POLAND' => 'ΠΟΛΩΝΙΑ',
    'PORTUGAL' => 'ΠΟΡΤΟΛΑΛΙΑ',
    'PORTUGUESE TIMOR' => 'ΠΟΡΤΟΓΑΛΙΚΟ ΤΙΜΟΡ',
    'PUERTO RICO' => 'ΠΟΥΕΡΤΟ ΡΙΚΟ',
    'QATAR' => 'ΚΑΤΑΡ',
    'REPUBLIC OF BELARUS' => 'ΔΗΜΟΚΡΑΤΙΑ ΤΗΣ ΛΕΥΚΟΡΩΣΙΑΣ',
    'REPUBLIC OF SOUTH AFRICA' => 'ΔΗΜΟΚΡΑΤΙΑΣ ΤΗΣ ΝΟΤΙΟΥ ΑΦΡΙΚΗΣ',
    'REUNION' => 'ΡΕΟΥΝΙΟΝ',
    'ROMANIA' => 'ΡΟΥΜΑΝΙΑ',
    'RUSSIA' => 'ΡΩΣΙΑ',
    'RWANDA' => 'ΡΟΥΑΝΤΑ',
    'RYUKYU ISLANDS' => 'ΝΗΣΙΑ  RYUKYU',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'ΣΑΝ ΜΑΡΙΝΟ',
    'SAUDI ARABIA' => 'ΣΑΟΥΔΙΚΗ ΑΡΑΒΙΑ',
    'SENEGAL' => 'ΣΕΝΕΓΑΛΗ',
    'SERBIA' => 'ΣΕΡΒΙΑ',
    'SEYCHELLES' => 'ΣΕΫΧΕΛΛΕΣ',
    'SIERRA LEONE' => 'ΣΙΕΡΡΑ ΛΕΟΝΕ',
    'SINGAPORE' => 'ΣΙΓΚΑΠΟΥΡΗ',
    'SLOVAKIA' => 'ΣΛΟΒΑΚΙΑ',
    'SLOVENIA' => 'ΣΛΟΒΕΝΙΑ',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'ΝΟΤΙΑ ΑΦΡΙΚΗ',
    'SOUTH YEMEN' => 'ΝΟΤΙΑ ΥΕΜΕΝΗ',
    'SPAIN' => 'ΙΣΠΑΝΙΑ',
    'SPANISH SAHARA' => 'ΙΣΠΑΝΙΚΗ ΣΑΧΑΡΑ',
    'SRI LANKA' => 'ΣΡΙ ΛΑΝΚΑ',
    'ST. KITTS AND NEVIS' => 'ΑΓΙΟΣ ΧΡΙΣΤΟΦΟΡΟΣ ΚΑΙ ΝΕΒΙΣ',
    'ST. LUCIA' => 'ΑΓΙΑ ΛΟΥΚΙΑ',
    'SUDAN' => 'ΣΟΥΔΑΝ',
    'SURINAM' => 'ΣΟΥΡΙΝΑΜ',
    'SW AFRICA' => 'Ν.Δ ΑΦΡΙΚΗ',
    'SWAZILAND' => 'ΣΟΥΑΖΙΛΑΝΔΗ',
    'SWEDEN' => 'ΣΟΥΗΔΙΑ',
    'SWITZERLAND' => 'ΕΛΒΕΤΙΑ',
    'SYRIA' => 'ΣΥΡΙΑ',
    'TAIWAN' => 'ΤΑΪΒΑΝ',
    'TAJIKISTAN' => 'ΤΑΤΖΙΚΙΣΤΑΝ',
    'TANZANIA' => 'ΤΑΝΖΑΝΙΑ',
    'THAILAND' => 'ΤΑΪΛΑΝΔΗ',
    'TONGA' => 'ΤΟΝΓΚΑ',
    'TRINIDAD' => 'ΤΡΙΝΙΝΤΑΝΤ',
    'TUNISIA' => 'ΤΥΝΗΣΙΑ',
    'TURKEY' => 'ΤΟΥΡΚΙΑ',
    'UGANDA' => 'ΟΥΓΚΑΝΤΑ',
    'UKRAINE' => 'ΟΥΚΡΑΝΙΑ',
    'UNITED ARAB EMIRATES' => 'ΗΝΩΜΕΝΑ ΑΡΑΒΙΚΑ ΕΜΙΡΑΤΑ',
    'UNITED KINGDOM' => 'ΗΝΩΜΕΝΟ ΒΑΣΙΛΕΙΟ',
    'UPPER VOLTA' => 'ΤΖΑΜΑΪΚΑ',
    'URUGUAY' => 'ΟΥΡΟΥΓΟΥΑΗ',
    'US PACIFIC ISLAND' => 'ΗΠΑ ΝΗΣΙΑ ΤΟΥ ΕΙΡΗΝΙΚΟΥ',
    'US VIRGIN ISLANDS' => 'ΑΜΕΡΙΚΑΝΙΚΕΣ ΠΑΡΘΕΝΟΙ ΝΗΣΟΙ',
    'USA' => 'ΗΠΑ',
    'UZBEKISTAN' => 'ΟΥΖΜΠΕΚΙΣΤΑΝ',
    'VANUATU' => 'ΒΑΝΟΥΑΤΟΥ',
    'VATICAN CITY' => 'ΠΟΛΗ ΤΟΥ ΒΑΤΙΚΑΝΟΥ',
    'VENEZUELA' => 'ΒΕΝΕΖΟΥΕΛΑ',
    'VIETNAM' => 'ΒΙΕΤΝΑΜ',
    'WAKE ISLAND' => 'ΝΗΣΟΣ ΓΟΥΕΪΚ',
    'WEST INDIES' => 'ΔΥΤΙΚΗ ΙΝΔΙΑ',
    'WESTERN SAHARA' => 'ΔΥΤΙΚΗ ΣΑΧΑΡΑ',
    'YEMEN' => 'ΥΕΜΕΝΗ',
    'ZAIRE' => 'ΖΑΪΡ',
    'ZAMBIA' => 'ΖΑΜΠΙΑ',
    'ZIMBABWE' => 'ΖΙΜΠΑΜΠΟΥΕ',
  ),
  'cselect_type_dom' => 
  array (
    'Does not Equal' => 'Δεν Ισούται',
    'Equals' => 'Ισούται',
  ),
  'custom_fields_importable_dom' => 
  array (
    'false' => 'Όχι',
    'required' => 'Υποχρεωτικό',
    'true' => 'Ναι',
  ),
  'custom_fields_merge_dup_dom' => 
  array (
    0 => 'Απενεργοποιημένο',
    1 => 'Ενεργοποιημένο',
    2 => 'Σε Φίλτρο',
    3 => 'Προεπιλεγμένο Φίλτρο',
    4 => 'Φίλτρο Μόνο',
  ),
  'custom_layout_dom' => 
  array (
    'Disabled' => 'Απενεργοποιημενη',
    'Enabled' => 'Ενεργοποιημένη',
  ),
  'd3_chart_types' => 
  array (
    'bar chart' => 'Κάθετο Ραβδόγραμμα',
    'funnel chart 3D' => 'Γράφημα Χωνί',
    'group by chart' => 'Κάθετο Ομαδοποιημένο Ραβδόγραμμα',
    'horizontal bar chart' => 'Οριζόντιο Ραβδόγραμμα',
    'horizontal group by chart' => 'Οριζόντιο Ομαδοποιημένο Ραβδόγραμμα',
    'line chart' => 'Γράφημα Γραμμής',
    'pie chart' => 'Γράφημα Πίτας',
  ),
  'd3_value_placement' => 
  array (
    'start' => 'Αρχή',
    'top' => 'Κορυφή',
    0 => 'Καμία',
    'end' => 'Τέλος',
    'middle' => 'Μέση',
    1 => 'Προεπιλογή',
  ),
  'dashlet_auto_refresh_options' => 
  array (
    -1 => 'Μη αυτόματη ανανέωση',
    30 => 'Κάθε 30 δευτερόλεπτα',
    60 => 'Κάθε 1 λεπτό',
    180 => 'Κάθε 3 λεπτά',
    300 => 'Κάθε 5 λεπτά',
    600 => 'Κάθε 10 λεπτά',
  ),
  'dashlet_auto_refresh_options_admin' => 
  array (
    -1 => 'Ποτέ',
    30 => 'Κάθε 30 δευτερόλεπτα',
    60 => 'Κάθε 1 λεπτό',
    180 => 'Κάθε 3 λεπτά',
    300 => 'Κάθε 5 λεπτά',
    600 => 'Κάθε 10 λεπτά',
  ),
  'dashlet_limit_options' => 
  array (
    5 => '5',
    10 => '10',
    15 => '15',
    20 => '20',
  ),
  'dashlet_webpage_limit_options' => 
  array (
    1 => '1',
    3 => '3',
    5 => '5',
    10 => '10',
  ),
  'dataset_att_display_type_dom' => 
  array (
    'Normal' => 'Κανονική',
    'Scalar' => 'Κλιμακωτή',
  ),
  'dataset_att_format_type_dom' => 
  array (
    'Accounting' => 'Λογιστική',
    'Date' => 'Ημερομηνία',
    'Datetime' => 'Ημερομηνία/Ώρα',
    'Text' => 'Κείμενο',
  ),
  'dataset_att_format_type_scalar_dom' => 
  array (
    'Day' => 'Ημέρα',
    'Month' => 'Μήνας',
    'Quarter' => 'Τρίμηνο',
    'Week' => 'Εβδομάδα',
    'Year' => 'Έτος',
  ),
  'dataset_layout_type_dom' => 
  array (
    'Column' => 'Στήλη',
  ),
  'dataset_style_dom' => 
  array (
    'bold' => 'Έντονη',
    'italic' => 'Πλάγια',
    'normal' => 'Κανονική',
  ),
  'date_range_operator_dom' => 
  array (
    'last_30_days' => 'Τελευταίες 30 Ημέρες',
    'last_7_days' => 'Τελευταίες 7 Ημέρες',
    'last_month' => 'Τελευταίο Μήνα',
    'last_year' => 'Τελευταίο Έτος',
    'next_30_days' => 'Επόμενες 30 Ημέρες',
    'next_7_days' => 'Επόμενες 7 Ημέρες',
    'next_month' => 'Επόμενο Μήνα',
    'next_year' => 'Επόμενο Έτος',
    'this_month' => 'Αυτό τον Μήνα',
    'this_year' => 'Αυτό το Έτος',
  ),
  'date_range_search_dom' => 
  array (
    '=' => 'Ισούται',
    'between' => 'είναι Μεταξύ',
    'greater_than' => 'Μετά',
    'last_30_days' => 'Τελευταίες 30 Ημέρες',
    'last_7_days' => 'Τελευταίες 7 ημέρες',
    'last_month' => 'Τελευταίο Μήνα',
    'last_year' => 'Τελευταίο Έτος',
    'less_than' => 'Πριν',
    'next_30_days' => 'Επόμενες 30 Ημέρες',
    'next_7_days' => 'Επόμενες 7 Ημέρες',
    'next_month' => 'Επόμενο Μήνα',
    'next_year' => 'Επόμενο Ετος',
    'not_equal' => 'Δεν Ισούται',
    'this_month' => 'Αυτόν τον Μήνα',
    'this_year' => 'Αυτό το Έτος',
  ),
  'dnb_bal_after_before_btw' => 
  array (
    'btw' => 'Μεταξύ',
    'gte' => 'Μετά',
    'lte' => 'Πριν',
  ),
  'dnb_bal_filing_trading_option' => 
  array (
    'filingdate' => 'Ημερομηνία Κατάθεσης',
    'tradingdate' => 'Ημερομηνία Συναλλαγής',
  ),
  'dnb_bal_gte_lte_btw' => 
  array (
    'btw' => 'Μεταξύ',
    'gte' => 'Μεγαλύτερο από ή Ίσο με',
    'lte' => 'Μικρότερο από ή Ίσο με',
  ),
  'dnb_bal_miles_km' => 
  array (
    3349 => 'ΧΛΜ',
    3353 => 'Μίλια',
  ),
  'dnb_bal_prescreen_options' => 
  array (
    10925 => 'Χαμηλό',
    10926 => 'Μεσαίο',
    10927 => 'Υψηλό',
  ),
  'dnb_bal_primary_secondary' => 
  array (
    'false' => 'Πρωτοβάθμια και Δευτεροβάθμια',
    'true' => 'Μόνο Πρωτοβάθμια',
  ),
  'dnb_bal_single_all' => 
  array (
    'allsites' => 'Όλες οι Ιστοσελίδες',
    'singlesite' => 'Μοναδική Ιστοσελίδα',
  ),
  'dnb_contact_kw_scope' => 
  array (
    'Bio' => 'Bio',
    'Both' => 'Και τα δύο',
    'Title' => 'Τίτλος',
  ),
  'dnb_contact_types' => 
  array (
    'Contacts' => 'Επαφές',
    'Leads' => 'Δυνητικοί Πελάτες',
    'Prospects' => 'Στόχοι',
  ),
  'dnb_countries_iso' => 
  array (
    'AD' => 'Ανδόρρα',
    'AE' => 'Ηνωμένα Αραβικά Εμιράτα',
    'AF' => 'Αφγανιστάν',
    'AG' => 'Αντίγκουα και Μπαρμπούντα',
    'AI' => 'Ανγκουίλα',
    'AL' => 'Αλβανία',
    'AM' => 'Αρμενία',
    'AN' => 'Ολλανδικές Αντίλλες',
    'AO' => 'Ανγκόλα',
    'AQ' => 'Ανταρκτική',
    'AR' => 'Αργεντινή',
    'AS' => 'Αμερικανική Σαμόα',
    'AT' => 'Αυστρία',
    'AU' => 'Αυστραλία',
    'AW' => 'Αρούμπα',
    'AZ' => 'Αζερμπαϊτζάν',
    'BA' => 'Βοσνία και Ερζεγοβίνη',
    'BB' => 'Μπαρμπάντος',
    'BD' => 'Μπανγκλαντές',
    'BE' => 'Βέλγιο',
    'BF' => 'Μπουρκίνα Φάσο',
    'BG' => 'Βουλγαρία',
    'BH' => 'Μπαχρέιν',
    'BI' => 'Μπουρούντι',
    'BJ' => 'Μπενίν',
    'BM' => 'Βερμούδες',
    'BN' => 'Μπρουνέι',
    'BO' => 'Βολιβία',
    'BR' => 'Βραζιλία',
    'BS' => 'Μπαχάμες',
    'BT' => 'Μπουτάν',
    'BV' => 'Νησιά Μπουβέ',
    'BW' => 'Βοσνία και Ερζεγοβίνη',
    'BY' => 'Λευκορωσία',
    'BZ' => 'Μπελίζ',
    'CA' => 'Καναδά',
    'CC' => 'Νησιά Κόκος (Κίλινγκ)',
    'CD' => 'Λαϊκή Δημοκρατία του Κονγκό',
    'CF' => 'Κεντροαφρικανική Δημοκρατία',
    'CG' => 'Κονγκό',
    'CH' => 'Ελβετία',
    'CI' => 'Ακτή Ελεφαντοστού',
    'CK' => 'Νήσοι Κουκ',
    'CL' => 'Χιλή',
    'CM' => 'Καμερούν',
    'CN' => 'Κίνα',
    'CO' => 'Κολομβία',
    'CR' => 'Κόστα Ρίκα',
    'CU' => 'Κούβα',
    'CV' => 'Πράσινο Ακρωτήριο',
    'CX' => 'Νήσος των Χριστουγέννων',
    'CY' => 'Κύπρος',
    'CZ' => 'Δημοκρατία της Τσεχίας',
    'DE' => 'Γερμανία',
    'DJ' => 'Τζιμπουτ',
    'DK' => 'Δανία',
    'DM' => 'Δομινίκα',
    'DO' => 'Δομινικανή Δημοκρατία',
    'DZ' => 'Αλγερία',
    'EC' => 'Ισημερινός',
    'EE' => 'Εσθονία',
    'EG' => 'Αίγυπτος',
    'EH' => 'Δυτική Σαχάρα',
    'ER' => 'Ερυθραία',
    'ES' => 'Ισπανία',
    'ET' => 'Αιθιοπία',
    'FI' => 'Φινλανδία',
    'FJ' => 'Φίτζ',
    'FK' => 'Νήσοι Φώκλαντ',
    'FM' => 'Μικρονησία',
    'FO' => 'Νησιά Φερόε',
    'FR' => 'Γαλλία',
    'FX' => 'Γαλλία, Μητροπολιτική',
    'GA' => 'Γκαμπόν',
    'GB' => 'Ηνωμένο Βασίλειο',
    'GD' => 'Γρενάδα',
    'GE' => 'Γεωργία',
    'GF' => 'Γαλλική Γουιάνα',
    'GH' => 'Γκάνα',
    'GI' => 'Γιβραλτάρ',
    'GL' => 'Γροιλανδία',
    'GM' => 'Γκάμπια',
    'GN' => 'Γουινέα',
    'GP' => 'Γουαδελούπη',
    'GQ' => 'Ισημερινή Γουινέα',
    'GR' => 'Ελλάδα',
    'GS' => 'Νότια Γεωργία και Νότιες Νήσοι Σάντουιτς',
    'GT' => 'Γουατεμάλα',
    'GU' => 'Γκουάμ',
    'GW' => 'Γουινέα-Μπισσάου',
    'GY' => 'Γουιάνα',
    'HK' => 'Χονγκ Κονγκ',
    'HM' => 'Νήσοι Mc Donald',
    'HN' => 'Ονδούρα',
    'HR' => 'Κροατία',
    'HT' => 'Αϊτή',
    'HU' => 'Ουγγαρία',
    'ID' => 'Ινδονησία',
    'IE' => 'Ιρλανδία',
    'IL' => 'Ισραήλ',
    'IN' => 'Ινδία',
    'IO' => 'Βρετανικό Έδαφος Ινδικού Ωκεανού',
    'IQ' => 'Ιράκ',
    'IR' => 'Ιράν',
    'IS' => 'Ισλανδία',
    'IT' => 'Ιταλία',
    'JM' => 'Τζαμάικα',
    'JO' => 'Ιορδανία',
    'JP' => 'Ιαπωνία',
    'KE' => 'Κένυα',
    'KG' => 'Κιργιστάν',
    'KH' => 'Καμπότζη',
    'KI' => 'Κιριμπάτι',
    'KM' => 'Κομόρες',
    'KN' => 'Άγιος Χριστόφορος και Νέβις',
    'KP' => 'Νότια Κορέα',
    'KR' => 'Νότια Κορέα',
    'KW' => 'Κουβέιτ',
    'KY' => 'Κέιμαν Νήσοι',
    'KZ' => 'Καζακστάν',
    'LA' => 'Λάος',
    'LB' => 'Λίβανος',
    'LC' => 'Αγία Λουκία',
    'LI' => 'Λίχτενσταϊν',
    'LK' => 'Σρι Λάνκα',
    'LR' => 'Λιβερία',
    'LS' => 'Λεσότο',
    'LT' => 'Λιθουανία',
    'LU' => 'Λουξεμβούργο',
    'LV' => 'Λετονία',
    'LY' => 'Λιβύη',
    'MA' => 'Μαρόκο',
    'MC' => 'Μονακό',
    'MD' => 'Μολδαβία',
    'ME' => 'Μαυροβούνιο',
    'MG' => 'Μαδαγασκάρη',
    'MH' => 'Νήσος του Μαν',
    'MK' => 'Πρώην Γιουγκοσλαβική Δημοκρατία της Μακεδονίας',
    'ML' => 'Μάλι',
    'MM' => 'Μιανμάρ',
    'MN' => 'Μογγολία',
    'MO' => 'Μακάο',
    'MP' => 'Νήσοι Βόρειες Μαριάνες',
    'MQ' => 'Μαρτινίκα',
    'MR' => 'Μαυριτανία',
    'MS' => 'Μοντσερράτ',
    'MT' => 'Μάλτα',
    'MU' => 'Μαυρίκιος',
    'MV' => 'Μαλδίβες',
    'MW' => 'Μαλάουι',
    'MX' => 'Μεξικό',
    'MY' => 'Μαλαισία',
    'MZ' => 'Μοζαμβίκη',
    'NA' => 'Ναμίμπια',
    'NC' => 'Νέα Καληδονία',
    'NE' => 'Νίγηρας',
    'NF' => 'Νησί Νόρφολκ',
    'NG' => 'Νιγηρία',
    'NI' => 'Νικαράγουα',
    'NL' => 'Ολλανδία',
    'NO' => 'Νορβηγία',
    'NP' => 'Νεπάλ',
    'NR' => 'Ναουρού',
    'NU' => 'Νιούε',
    'NZ' => 'Νέα Ζηλανδία',
    'OM' => 'Ομάν',
    'PA' => 'Παναμάς',
    'PE' => 'Περού',
    'PF' => 'Γαλλική Πολυνησία',
    'PG' => 'Παπούα Νέα Γουινέα',
    'PH' => 'Φιλιππίνες',
    'PK' => 'Πακιστάν',
    'PL' => 'Πολωνία',
    'PM' => 'Σέντ Πιέρ και Μικελόν',
    'PN' => 'Νησιά Πίτκερν',
    'PR' => 'Πουέρτο Ρίκο',
    'PS' => 'Παλαιστίνη',
    'PT' => 'Πορτογαλία',
    'PW' => 'Παραγουάη',
    'PY' => 'Παραγουάη',
    'QA' => 'Κατάρ',
    'RE' => 'Επανένωση',
    'RO' => 'Ρουμανία',
    'RS' => 'Σερβία',
    'RU' => 'Ρωσία',
    'RW' => 'Ρουάντα',
    'SA' => 'Σαουδική Αραβία',
    'SB' => 'Νήσοι Σολομώντα',
    'SC' => 'Σεϋχέλλες',
    'SD' => 'Σουδάν',
    'SE' => 'Σουηδία',
    'SG' => 'Σιγκαπούρη',
    'SH' => 'Αγίας Ελένης',
    'SI' => 'Σλοβενία',
    'SJ' => 'Σβάλμπαρντ και Γιαν Μαγιέν Νήσοι',
    'SK' => 'Σλοβακία',
    'SL' => 'Σιέρα Λεόνε',
    'SM' => 'Σαν Μαρίνο',
    'SN' => 'Σενεγάλη',
    'SO' => 'Σομαλία',
    'SR' => 'Σουρινάμ',
    'ST' => 'Σάο Τομέ και Πρίνσιπε',
    'SV' => 'Ελ Σαλβαδόρ',
    'SY' => 'Συρία',
    'SZ' => 'Σουαζιλάνδη',
    'TC' => 'Νήσοι Τερκς και Κάικος',
    'TD' => 'Τσαντ',
    'TF' => 'Νότια Γαλλικά Εδάφη',
    'TG' => 'Τόγκο',
    'TH' => 'Ταϊλάνδη',
    'TJ' => 'Τατζικιστάν',
    'TK' => 'Τοκελάου',
    'TM' => 'Τουρκμενιστάν',
    'TN' => 'Τυνησία',
    'TO' => 'Τόνγκα',
    'TP' => 'Ανατολικό Τιμόρ',
    'TR' => 'Τουρκία',
    'TT' => 'Τρινιντάντ και Τομπάγκο',
    'TV' => 'Τουβαλού',
    'TW' => 'Ταϊβάν',
    'TZ' => 'Τανζανία',
    'UA' => 'Ουκρανία',
    'UG' => 'Ουγκάντα',
    'UM' => 'Μικρά Εξωτερικά Νησιά των Ηνωμένων Πολιτειών',
    'US' => 'ΗΠΑ',
    'UY' => 'Ουρουγουάη',
    'UZ' => 'Ουζμπεκιστάν',
    'VA' => 'Βατικανό',
    'VC' => 'Άγιος Βικέντιος και Γρεναδίνες',
    'VE' => 'Βενεζουέλα',
    'VG' => 'Βρετανικές Παρθένοι Νήσοι',
    'VI' => 'Αμερικανικές Παρθένοι Νήσοι',
    'VN' => 'Βιετνάμ',
    'VU' => 'Βανουάτου',
    'WF' => 'Νησιά Ουόλις και Φουτούνα',
    'WS' => 'Σαμόα',
    'YE' => 'Υεμένη',
    'YT' => 'Μαγιότ',
    'ZA' => 'Νότια Αφρική',
    'ZM' => 'Ζάμπια',
    'ZW' => 'Ζιμπάμπουε',
  ),
  'dnb_countries_radius_iso' => 
  array (
    'CA' => 'Καναδά',
    'US' => 'ΗΠΑ',
  ),
  'dnb_sic_naics_code' => 
  array (
    700 => 'Κώδικας NAICS...',
    3599 => 'Κώδικας SIC',
  ),
  'dnb_states_iso' => 
  array (
    'AD' => 
    array (
      1 => 
      array (
        'code' => 'ALV',
        'name' => 'Andorra la Vella',
      ),
      2 => 
      array (
        'code' => 'CAN',
        'name' => 'Canillo',
      ),
      3 => 
      array (
        'code' => 'ENC',
        'name' => 'Encamp',
      ),
      4 => 
      array (
        'code' => 'ESE',
        'name' => 'Escaldes-Engordany',
      ),
      5 => 
      array (
        'code' => 'LMA',
        'name' => 'La Massana',
      ),
      6 => 
      array (
        'code' => 'ORD',
        'name' => 'Ordino',
      ),
      7 => 
      array (
        'code' => 'SJL',
        'name' => 'Sant Julià de Lòria',
      ),
    ),
    'AF' => 
    array (
      1 => 
      array (
        'code' => 'BAL',
        'name' => 'Balkh',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'Bamian',
      ),
      3 => 
      array (
        'code' => 'BDG',
        'name' => 'Badghis',
      ),
      4 => 
      array (
        'code' => 'BDS',
        'name' => 'Badakhshan',
      ),
      5 => 
      array (
        'code' => 'BGL',
        'name' => 'Baghlan',
      ),
      6 => 
      array (
        'code' => 'FRA',
        'name' => 'Farah',
      ),
      7 => 
      array (
        'code' => 'FYB',
        'name' => 'Faryab',
      ),
      8 => 
      array (
        'code' => 'MD',
        'name' => 'Ghazni',
      ),
      9 => 
      array (
        'code' => 'GHO',
        'name' => 'Ghowr',
      ),
      10 => 
      array (
        'code' => 'HEL',
        'name' => 'Helmand',
      ),
      11 => 
      array (
        'code' => 'HER',
        'name' => 'Herat',
      ),
      12 => 
      array (
        'code' => 'JOW',
        'name' => 'Jowzjan',
      ),
      13 => 
      array (
        'code' => 'KAB',
        'name' => 'Kabul',
      ),
      14 => 
      array (
        'code' => 'KAN',
        'name' => 'Kandahar',
      ),
      15 => 
      array (
        'code' => 'KAP',
        'name' => 'Kapisa',
      ),
      16 => 
      array (
        'code' => 'KDZ',
        'name' => 'Kondoz',
      ),
      17 => 
      array (
        'code' => 'KHO',
        'name' => 'Khost',
      ),
      18 => 
      array (
        'code' => 'KNR',
        'name' => 'Konar',
      ),
      19 => 
      array (
        'code' => 'LAG',
        'name' => 'Laghman',
      ),
      20 => 
      array (
        'code' => 'LOW',
        'name' => 'Lowgar',
      ),
      21 => 
      array (
        'code' => 'NAN',
        'name' => 'Nangrahar',
      ),
      22 => 
      array (
        'code' => 'NIM',
        'name' => 'Nimruz',
      ),
      23 => 
      array (
        'code' => 'NUR',
        'name' => 'Nurestan',
      ),
      24 => 
      array (
        'code' => 'ORU',
        'name' => 'Oruzgan',
      ),
      25 => 
      array (
        'code' => 'PAR',
        'name' => 'Parwan',
      ),
      26 => 
      array (
        'code' => 'PIA',
        'name' => 'Paktia',
      ),
      27 => 
      array (
        'code' => 'PKA',
        'name' => 'Paktika',
      ),
      28 => 
      array (
        'code' => 'SAM',
        'name' => 'Samangan',
      ),
      29 => 
      array (
        'code' => 'SAR',
        'name' => 'Sar-e Pol',
      ),
      30 => 
      array (
        'code' => 'TAK',
        'name' => 'Takhar',
      ),
      31 => 
      array (
        'code' => 'WAR',
        'name' => 'Wardak',
      ),
      32 => 
      array (
        'code' => 'ZAB',
        'name' => 'Zabol',
      ),
    ),
    'AI' => 
    array (
      1 => 
      array (
        'code' => 'ANG',
        'name' => 'Anguillita',
      ),
      2 => 
      array (
        'code' => 'ANG',
        'name' => 'Anguila',
      ),
      3 => 
      array (
        'code' => 'DOG',
        'name' => 'Dog',
      ),
      4 => 
      array (
        'code' => 'LIT',
        'name' => 'Little Scrub',
      ),
      5 => 
      array (
        'code' => 'PRI',
        'name' => 'Prickly Pear',
      ),
      6 => 
      array (
        'code' => 'SAN',
        'name' => 'Sandy',
      ),
      7 => 
      array (
        'code' => 'SCR',
        'name' => 'Scrub',
      ),
      8 => 
      array (
        'code' => 'SEA',
        'name' => 'Seal',
      ),
      9 => 
      array (
        'code' => 'SOM',
        'name' => 'Sombrero',
      ),
    ),
    'AL' => 
    array (
      1 => 
      array (
        'code' => 'BR',
        'name' => 'Berat',
      ),
      2 => 
      array (
        'code' => 'BU',
        'name' => 'Bulqize',
      ),
      3 => 
      array (
        'code' => 'DI',
        'name' => 'Diber',
      ),
      4 => 
      array (
        'code' => 'DL',
        'name' => 'Delvine',
      ),
      5 => 
      array (
        'code' => 'DR',
        'name' => 'Durres',
      ),
      6 => 
      array (
        'code' => 'DV',
        'name' => 'Devoll',
      ),
      7 => 
      array (
        'code' => 'EL',
        'name' => 'Elbasan',
      ),
      8 => 
      array (
        'code' => 'ER',
        'name' => 'Kolonje',
      ),
      9 => 
      array (
        'code' => 'FR',
        'name' => 'Fier',
      ),
      10 => 
      array (
        'code' => 'GJ',
        'name' => 'Gjirokaster',
      ),
      11 => 
      array (
        'code' => 'GR',
        'name' => 'Gramsh',
      ),
      12 => 
      array (
        'code' => 'HA',
        'name' => 'Has',
      ),
      13 => 
      array (
        'code' => 'KA',
        'name' => 'Kavaje',
      ),
      14 => 
      array (
        'code' => 'KB',
        'name' => 'Kurbin',
      ),
      15 => 
      array (
        'code' => 'KC',
        'name' => 'Kucove',
      ),
      16 => 
      array (
        'code' => 'KO',
        'name' => 'Korce',
      ),
      17 => 
      array (
        'code' => 'KR',
        'name' => 'Kruje',
      ),
      18 => 
      array (
        'code' => 'KU',
        'name' => 'Kukes',
      ),
      19 => 
      array (
        'code' => 'LB',
        'name' => 'Librazhd',
      ),
      20 => 
      array (
        'code' => 'LE',
        'name' => 'Lezhe',
      ),
      21 => 
      array (
        'code' => 'LU',
        'name' => 'Lushnje',
      ),
      22 => 
      array (
        'code' => 'MK',
        'name' => 'Mallakaster',
      ),
      23 => 
      array (
        'code' => 'MM',
        'name' => 'Malesi e Madhe',
      ),
      24 => 
      array (
        'code' => 'MR',
        'name' => 'Mirdite',
      ),
      25 => 
      array (
        'code' => 'MT',
        'name' => 'Mat',
      ),
      26 => 
      array (
        'code' => 'PG',
        'name' => 'Pogradec',
      ),
      27 => 
      array (
        'code' => 'PQ',
        'name' => 'Peqin',
      ),
      28 => 
      array (
        'code' => 'PR',
        'name' => 'Permet',
      ),
      29 => 
      array (
        'code' => 'PU',
        'name' => 'Puke',
      ),
      30 => 
      array (
        'code' => 'SH',
        'name' => 'Shkoder',
      ),
      31 => 
      array (
        'code' => 'SK',
        'name' => 'Skrapar',
      ),
      32 => 
      array (
        'code' => 'SR',
        'name' => 'Sarande',
      ),
      33 => 
      array (
        'code' => 'TE',
        'name' => 'Tepelene',
      ),
      34 => 
      array (
        'code' => 'TP',
        'name' => 'Tropoje',
      ),
      35 => 
      array (
        'code' => 'TR',
        'name' => 'Tirane',
      ),
      36 => 
      array (
        'code' => 'VL',
        'name' => 'Vlore',
      ),
    ),
    'AM' => 
    array (
      1 => 
      array (
        'code' => 'AGT',
        'name' => 'Aragatsotn',
      ),
      2 => 
      array (
        'code' => 'ARR',
        'name' => 'Ararat',
      ),
      3 => 
      array (
        'code' => 'ARM',
        'name' => 'Armavir',
      ),
      4 => 
      array (
        'code' => 'GEG',
        'name' => 'Geghark &#39;unik&#39;',
      ),
      5 => 
      array (
        'code' => 'KOT',
        'name' => 'Kotayk&#39;',
      ),
      6 => 
      array (
        'code' => 'LOR',
        'name' => 'Lorri',
      ),
      7 => 
      array (
        'code' => 'SHI',
        'name' => 'Shirak',
      ),
      8 => 
      array (
        'code' => 'SYU',
        'name' => 'Syunik&#39;',
      ),
      9 => 
      array (
        'code' => 'TAV',
        'name' => 'Tavush',
      ),
      10 => 
      array (
        'code' => 'VAY',
        'name' => 'Vayots&#39; Dzor',
      ),
      11 => 
      array (
        'code' => 'YER',
        'name' => 'Yerevan',
      ),
    ),
    'AN' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'AO' => 
    array (
      1 => 
      array (
        'code' => 'BGO',
        'name' => 'Bengo',
      ),
      2 => 
      array (
        'code' => 'BGU',
        'name' => 'Benguela',
      ),
      3 => 
      array (
        'code' => 'BIE',
        'name' => 'Bie',
      ),
      4 => 
      array (
        'code' => 'CAB',
        'name' => 'Cabinda',
      ),
      5 => 
      array (
        'code' => 'CCU',
        'name' => 'Cuando-Cubango',
      ),
      6 => 
      array (
        'code' => 'CNO',
        'name' => 'Cuanza Norte',
      ),
      7 => 
      array (
        'code' => 'CUS',
        'name' => 'Cuanza Sul',
      ),
      8 => 
      array (
        'code' => 'CNN',
        'name' => 'Cunene',
      ),
      9 => 
      array (
        'code' => 'HUA',
        'name' => 'Huambo',
      ),
      10 => 
      array (
        'code' => 'HUI',
        'name' => 'Huila',
      ),
      11 => 
      array (
        'code' => 'LUA',
        'name' => 'Luanda',
      ),
      12 => 
      array (
        'code' => 'LNO',
        'name' => 'Lunda Norte',
      ),
      13 => 
      array (
        'code' => 'LSU',
        'name' => 'Lunda Sul',
      ),
      14 => 
      array (
        'code' => 'MAL',
        'name' => 'Malange',
      ),
      15 => 
      array (
        'code' => 'MOX',
        'name' => 'Moxico',
      ),
      16 => 
      array (
        'code' => 'NAM',
        'name' => 'Namibe',
      ),
      17 => 
      array (
        'code' => 'UIG',
        'name' => 'Uige',
      ),
      18 => 
      array (
        'code' => 'ZAI',
        'name' => 'Zaire',
      ),
    ),
    'AQ' => 
    array (
      1 => 
      array (
        'code' => 'ASG',
        'name' => 'Saint George',
      ),
      2 => 
      array (
        'code' => 'ASH',
        'name' => 'Saint Philip',
      ),
      3 => 
      array (
        'code' => 'ASJ',
        'name' => 'Saint John',
      ),
      4 => 
      array (
        'code' => 'ASL',
        'name' => 'Saint Paul',
      ),
      5 => 
      array (
        'code' => 'ASM',
        'name' => 'Saint Mary',
      ),
      6 => 
      array (
        'code' => 'ASR',
        'name' => 'Saint Peter',
      ),
      7 => 
      array (
        'code' => 'BAR',
        'name' => 'Barbuda',
      ),
      8 => 
      array (
        'code' => 'RED',
        'name' => 'Redonda',
      ),
    ),
    'AR' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Antartida e Islas del Atlantico',
      ),
      2 => 
      array (
        'code' => 'BA',
        'name' => 'Buenos Aires',
      ),
      3 => 
      array (
        'code' => 'CA',
        'name' => 'Catamarca',
      ),
      4 => 
      array (
        'code' => 'CH',
        'name' => 'Chaco',
      ),
      5 => 
      array (
        'code' => 'CU',
        'name' => 'Chubut',
      ),
      6 => 
      array (
        'code' => 'CO',
        'name' => 'Cordoba',
      ),
      7 => 
      array (
        'code' => 'CR',
        'name' => 'Corrientes',
      ),
      8 => 
      array (
        'code' => 'CF',
        'name' => 'Capital Federal',
      ),
      9 => 
      array (
        'code' => 'ER',
        'name' => 'Entre Rios',
      ),
      10 => 
      array (
        'code' => 'FO',
        'name' => 'Formosa',
      ),
      11 => 
      array (
        'code' => 'JU',
        'name' => 'Jujuy',
      ),
      12 => 
      array (
        'code' => 'LP',
        'name' => 'La Pampa',
      ),
      13 => 
      array (
        'code' => 'LR',
        'name' => 'La Rioja',
      ),
      14 => 
      array (
        'code' => 'ME',
        'name' => 'Mendoza',
      ),
      15 => 
      array (
        'code' => 'MI',
        'name' => 'Misiones',
      ),
      16 => 
      array (
        'code' => 'NE',
        'name' => 'Neuquen',
      ),
      17 => 
      array (
        'code' => 'RN',
        'name' => 'Rio Negro',
      ),
      18 => 
      array (
        'code' => 'SA',
        'name' => 'Salta',
      ),
      19 => 
      array (
        'code' => 'SJ',
        'name' => 'San Juan',
      ),
      20 => 
      array (
        'code' => 'SL',
        'name' => 'San Luis',
      ),
      21 => 
      array (
        'code' => 'SC',
        'name' => 'Santa Cruz',
      ),
      22 => 
      array (
        'code' => 'SF',
        'name' => 'Santa Fe',
      ),
      23 => 
      array (
        'code' => 'SD',
        'name' => 'Santiago del Estero',
      ),
      24 => 
      array (
        'code' => 'TF',
        'name' => 'Tierra del Fuego',
      ),
      25 => 
      array (
        'code' => 'TU',
        'name' => 'Tucuman',
      ),
    ),
    'AS' => 
    array (
      1 => 
      array (
        'code' => 'E',
        'name' => 'Eastern',
      ),
      2 => 
      array (
        'code' => 'M',
        'name' => 'Manu&#39;a',
      ),
      3 => 
      array (
        'code' => 'R',
        'name' => 'Rose Island',
      ),
      4 => 
      array (
        'code' => 'S',
        'name' => 'Swains Island',
      ),
      5 => 
      array (
        'code' => 'W',
        'name' => 'Western',
      ),
    ),
    'AT' => 
    array (
      1 => 
      array (
        'code' => 'BUR',
        'name' => 'Burgenland',
      ),
      2 => 
      array (
        'code' => 'KAR',
        'name' => 'Krnten',
      ),
      3 => 
      array (
        'code' => 'NOS',
        'name' => 'Niederöesterreich',
      ),
      4 => 
      array (
        'code' => 'OOS',
        'name' => 'Oberöesterreich',
      ),
      5 => 
      array (
        'code' => 'SAL',
        'name' => 'Salzburg',
      ),
      6 => 
      array (
        'code' => 'STE',
        'name' => 'Steiermark',
      ),
      7 => 
      array (
        'code' => 'TIR',
        'name' => 'Tirol',
      ),
      8 => 
      array (
        'code' => 'VOR',
        'name' => 'Vorarlberg',
      ),
      9 => 
      array (
        'code' => 'WIE',
        'name' => 'Wien',
      ),
    ),
    'AU' => 
    array (
      1 => 
      array (
        'code' => 'ACT',
        'name' => 'Australian Capital Territory',
      ),
      2 => 
      array (
        'code' => 'NSW',
        'name' => 'New South Wales',
      ),
      3 => 
      array (
        'code' => 'NT',
        'name' => 'Northern Territory',
      ),
      4 => 
      array (
        'code' => 'QLD',
        'name' => 'Queensland',
      ),
      5 => 
      array (
        'code' => 'SA',
        'name' => 'South Australia',
      ),
      6 => 
      array (
        'code' => 'TAS',
        'name' => 'Tasmania',
      ),
      7 => 
      array (
        'code' => 'VIC',
        'name' => 'Victoria',
      ),
      8 => 
      array (
        'code' => 'WA',
        'name' => 'Western Australia',
      ),
    ),
    'AW' => 
    array (
      1 => 
      array (
        'code' => 'ARU',
        'name' => 'Aruba',
      ),
      2 => 
      array (
        'code' => 'DRU',
        'name' => 'Druif Beach',
      ),
      3 => 
      array (
        'code' => 'MAN',
        'name' => 'Manchebo Beach',
      ),
      4 => 
      array (
        'code' => 'NOO',
        'name' => 'Noord',
      ),
      5 => 
      array (
        'code' => 'ORA',
        'name' => 'Oranjestad',
      ),
      6 => 
      array (
        'code' => 'PAL',
        'name' => 'Palm Beach',
      ),
      7 => 
      array (
        'code' => 'ROO',
        'name' => 'Rooi Thomas',
      ),
      8 => 
      array (
        'code' => 'SIN',
        'name' => 'Sint Nicolaas',
      ),
      9 => 
      array (
        'code' => 'SIN',
        'name' => 'Sint Nicolas',
      ),
      10 => 
      array (
        'code' => 'WAY',
        'name' => 'Wayaca',
      ),
    ),
    'AZ' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Ali Bayramli',
      ),
      2 => 
      array (
        'code' => 'ABS',
        'name' => 'Abseron',
      ),
      3 => 
      array (
        'code' => 'AGC',
        'name' => 'AgcabAdi',
      ),
      4 => 
      array (
        'code' => 'AGM',
        'name' => 'Agdam',
      ),
      5 => 
      array (
        'code' => 'AGS',
        'name' => 'Agdas',
      ),
      6 => 
      array (
        'code' => 'AGA',
        'name' => 'Agstafa',
      ),
      7 => 
      array (
        'code' => 'AGU',
        'name' => 'Agsu',
      ),
      8 => 
      array (
        'code' => 'AST',
        'name' => 'Astara',
      ),
      9 => 
      array (
        'code' => 'BA',
        'name' => 'Baki',
      ),
      10 => 
      array (
        'code' => 'BAB',
        'name' => 'BabAk',
      ),
      11 => 
      array (
        'code' => 'BAL',
        'name' => 'BalakAn',
      ),
      12 => 
      array (
        'code' => 'BAR',
        'name' => 'BArdA',
      ),
      13 => 
      array (
        'code' => 'BEY',
        'name' => 'Beylaqan',
      ),
      14 => 
      array (
        'code' => 'BIL',
        'name' => 'Bilasuvar',
      ),
      15 => 
      array (
        'code' => 'CAB',
        'name' => 'Cabrayil',
      ),
      16 => 
      array (
        'code' => 'CAL',
        'name' => 'Calilabab',
      ),
      17 => 
      array (
        'code' => 'CUL',
        'name' => 'Culfa',
      ),
      18 => 
      array (
        'code' => 'DAS',
        'name' => 'Daskasan',
      ),
      19 => 
      array (
        'code' => 'DAV',
        'name' => 'Davaci',
      ),
      20 => 
      array (
        'code' => 'FUZ',
        'name' => 'Fuzuli',
      ),
      21 => 
      array (
        'code' => 'GA',
        'name' => 'Ganca',
      ),
      22 => 
      array (
        'code' => 'GAD',
        'name' => 'Gadabay',
      ),
      23 => 
      array (
        'code' => 'GOR',
        'name' => 'Goranboy',
      ),
      24 => 
      array (
        'code' => 'GOY',
        'name' => 'Goycay',
      ),
      25 => 
      array (
        'code' => 'HAC',
        'name' => 'Haciqabul',
      ),
      26 => 
      array (
        'code' => 'IMI',
        'name' => 'Imisli',
      ),
      27 => 
      array (
        'code' => 'ISM',
        'name' => 'Ismayilli',
      ),
      28 => 
      array (
        'code' => 'KAL',
        'name' => 'Kalbacar',
      ),
      29 => 
      array (
        'code' => 'KUR',
        'name' => 'Kurdamir',
      ),
      30 => 
      array (
        'code' => 'LA',
        'name' => 'Lankaran',
      ),
      31 => 
      array (
        'code' => 'LAC',
        'name' => 'Lacin',
      ),
      32 => 
      array (
        'code' => 'LAN',
        'name' => 'Lankaran',
      ),
      33 => 
      array (
        'code' => 'LER',
        'name' => 'Lerik',
      ),
      34 => 
      array (
        'code' => 'MAS',
        'name' => 'Masalli',
      ),
      35 => 
      array (
        'code' => 'MI',
        'name' => 'Mingacevir',
      ),
      36 => 
      array (
        'code' => 'NA',
        'name' => 'Naftalan',
      ),
      37 => 
      array (
        'code' => 'NX',
        'name' => 'Naxcivan',
      ),
      38 => 
      array (
        'code' => 'NEF',
        'name' => 'Neftcala',
      ),
      39 => 
      array (
        'code' => 'OGU',
        'name' => 'Oguz',
      ),
      40 => 
      array (
        'code' => 'ORD',
        'name' => 'Ordubad',
      ),
      41 => 
      array (
        'code' => 'QAB',
        'name' => 'Qabala',
      ),
      42 => 
      array (
        'code' => 'QAX',
        'name' => 'Qax',
      ),
      43 => 
      array (
        'code' => 'QAZ',
        'name' => 'Qazax',
      ),
      44 => 
      array (
        'code' => 'QOB',
        'name' => 'Qobustan',
      ),
      45 => 
      array (
        'code' => 'QBA',
        'name' => 'Quba',
      ),
      46 => 
      array (
        'code' => 'QBI',
        'name' => 'Qubadli',
      ),
      47 => 
      array (
        'code' => 'QUS',
        'name' => 'Qusar',
      ),
      48 => 
      array (
        'code' => 'SA',
        'name' => 'Saki',
      ),
      49 => 
      array (
        'code' => 'SAT',
        'name' => 'Saatli',
      ),
      50 => 
      array (
        'code' => 'SAB',
        'name' => 'Sabirabad',
      ),
      51 => 
      array (
        'code' => 'SAD',
        'name' => 'Sadarak',
      ),
      52 => 
      array (
        'code' => 'SAH',
        'name' => 'Sahbuz',
      ),
      53 => 
      array (
        'code' => 'SAK',
        'name' => 'Saki',
      ),
      54 => 
      array (
        'code' => 'SAL',
        'name' => 'Salyan',
      ),
      55 => 
      array (
        'code' => 'SM',
        'name' => 'Sumqayit',
      ),
      56 => 
      array (
        'code' => 'SMI',
        'name' => 'Samaxi',
      ),
      57 => 
      array (
        'code' => 'SKR',
        'name' => 'Samkir',
      ),
      58 => 
      array (
        'code' => 'SMX',
        'name' => 'Samux',
      ),
      59 => 
      array (
        'code' => 'SAR',
        'name' => 'Sarur',
      ),
      60 => 
      array (
        'code' => 'SIY',
        'name' => 'Siyazan',
      ),
      61 => 
      array (
        'code' => 'SS',
        'name' => 'Susa',
      ),
      62 => 
      array (
        'code' => 'SUS',
        'name' => 'Susa',
      ),
      63 => 
      array (
        'code' => 'TAR',
        'name' => 'Tartar',
      ),
      64 => 
      array (
        'code' => 'TOV',
        'name' => 'Tovuz',
      ),
      65 => 
      array (
        'code' => 'UCA',
        'name' => 'Ucar',
      ),
      66 => 
      array (
        'code' => 'XA',
        'name' => 'Xankandi',
      ),
      67 => 
      array (
        'code' => 'XAC',
        'name' => 'Xacmaz',
      ),
      68 => 
      array (
        'code' => 'XAN',
        'name' => 'Xanlar',
      ),
      69 => 
      array (
        'code' => 'XIZ',
        'name' => 'Xizi',
      ),
      70 => 
      array (
        'code' => 'XCI',
        'name' => 'Xocali',
      ),
      71 => 
      array (
        'code' => 'XVD',
        'name' => 'Xocavand',
      ),
      72 => 
      array (
        'code' => 'YAR',
        'name' => 'Yardimli',
      ),
      73 => 
      array (
        'code' => 'YEV',
        'name' => 'Yevlax',
      ),
      74 => 
      array (
        'code' => 'ZAN',
        'name' => 'Zangilan',
      ),
      75 => 
      array (
        'code' => 'ZAQ',
        'name' => 'Zaqatala',
      ),
      76 => 
      array (
        'code' => 'ZAR',
        'name' => 'Zardab',
      ),
    ),
    'BA' => 
    array (
      1 => 
      array (
        'code' => 'BRO',
        'name' => 'Brcko district',
      ),
      2 => 
      array (
        'code' => 'FBP',
        'name' => 'Bosanskopodrinjski Kanton',
      ),
      3 => 
      array (
        'code' => 'FHN',
        'name' => 'Hercegovacko-neretvanski Kanton',
      ),
      4 => 
      array (
        'code' => 'FPO',
        'name' => 'Posavski Kanton',
      ),
      5 => 
      array (
        'code' => 'FSA',
        'name' => 'Kanton Sarajevo',
      ),
      6 => 
      array (
        'code' => 'FSB',
        'name' => 'Srednjebosanski Kanton',
      ),
      7 => 
      array (
        'code' => 'FTU',
        'name' => 'Tuzlanski Kanton',
      ),
      8 => 
      array (
        'code' => 'FUS',
        'name' => 'Unsko-Sanski Kanton',
      ),
      9 => 
      array (
        'code' => 'FZA',
        'name' => 'Zapadnobosanska',
      ),
      10 => 
      array (
        'code' => 'FZE',
        'name' => 'Zenicko-Dobojski Kanton',
      ),
      11 => 
      array (
        'code' => 'FZH',
        'name' => 'Zapadnohercegovacka Zupanija',
      ),
      12 => 
      array (
        'code' => 'SBI',
        'name' => 'Bijeljina',
      ),
      13 => 
      array (
        'code' => 'SBL',
        'name' => 'Banja Luka',
      ),
      14 => 
      array (
        'code' => 'SDO',
        'name' => 'Doboj',
      ),
      15 => 
      array (
        'code' => 'SFO',
        'name' => 'Foca',
      ),
      16 => 
      array (
        'code' => 'SSR',
        'name' => 'Sarajevo-Romanija or Sokolac',
      ),
      17 => 
      array (
        'code' => 'STR',
        'name' => 'Trebinje',
      ),
      18 => 
      array (
        'code' => 'SVL',
        'name' => 'Vlasenica',
      ),
    ),
    'BB' => 
    array (
      1 => 
      array (
        'code' => 'CC',
        'name' => 'Christ Church',
      ),
      2 => 
      array (
        'code' => 'AND',
        'name' => 'Saint Andrew',
      ),
      3 => 
      array (
        'code' => 'GEO',
        'name' => 'Saint George',
      ),
      4 => 
      array (
        'code' => 'JAM',
        'name' => 'Saint James',
      ),
      5 => 
      array (
        'code' => 'JOH',
        'name' => 'Saint John',
      ),
      6 => 
      array (
        'code' => 'JOS',
        'name' => 'Saint Joseph',
      ),
      7 => 
      array (
        'code' => 'LUC',
        'name' => 'Saint Lucy',
      ),
      8 => 
      array (
        'code' => 'MIC',
        'name' => 'Saint Michael',
      ),
      9 => 
      array (
        'code' => 'PET',
        'name' => 'Saint Peter',
      ),
      10 => 
      array (
        'code' => 'PHI',
        'name' => 'Saint Philip',
      ),
      11 => 
      array (
        'code' => 'THO',
        'name' => 'Saint Thomas',
      ),
    ),
    'BD' => 
    array (
      1 => 
      array (
        'code' => 'BAR',
        'name' => 'Barisal',
      ),
      2 => 
      array (
        'code' => 'CHI',
        'name' => 'Chittagong',
      ),
      3 => 
      array (
        'code' => 'DHA',
        'name' => 'Dhaka',
      ),
      4 => 
      array (
        'code' => 'KHU',
        'name' => 'Khulna',
      ),
      5 => 
      array (
        'code' => 'RAJ',
        'name' => 'Rajshahi',
      ),
      6 => 
      array (
        'code' => 'SYL',
        'name' => 'Sylhet',
      ),
    ),
    'BE' => 
    array (
      1 => 
      array (
        'code' => 'VAN',
        'name' => 'Antwerpen',
      ),
      2 => 
      array (
        'code' => 'WBR',
        'name' => 'Brabant Wallon',
      ),
      3 => 
      array (
        'code' => 'WHT',
        'name' => 'Hainaut',
      ),
      4 => 
      array (
        'code' => 'WLG',
        'name' => 'Liege',
      ),
      5 => 
      array (
        'code' => 'VLI',
        'name' => 'Limburg',
      ),
      6 => 
      array (
        'code' => 'WLX',
        'name' => 'Luxembourg',
      ),
      7 => 
      array (
        'code' => 'WNA',
        'name' => 'Namur',
      ),
      8 => 
      array (
        'code' => 'VOV',
        'name' => 'Oost-Vlaanderen',
      ),
      9 => 
      array (
        'code' => 'VBR',
        'name' => 'Vlaams Brabant',
      ),
      10 => 
      array (
        'code' => 'VWV',
        'name' => 'West-Vlaanderen',
      ),
    ),
    'BF' => 
    array (
      1 => 
      array (
        'code' => 'BAL',
        'name' => 'Bale',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'Bam',
      ),
      3 => 
      array (
        'code' => 'BAN',
        'name' => 'Banwa',
      ),
      4 => 
      array (
        'code' => 'BAZ',
        'name' => 'Bazega',
      ),
      5 => 
      array (
        'code' => 'BOR',
        'name' => 'Bougouriba',
      ),
      6 => 
      array (
        'code' => 'BLG',
        'name' => 'Boulgou',
      ),
      7 => 
      array (
        'code' => 'BOK',
        'name' => 'Boulkiemde',
      ),
      8 => 
      array (
        'code' => 'COM',
        'name' => 'Comoe',
      ),
      9 => 
      array (
        'code' => 'GAN',
        'name' => 'Ganzourgou',
      ),
      10 => 
      array (
        'code' => 'GNA',
        'name' => 'Gnagna',
      ),
      11 => 
      array (
        'code' => 'GOU',
        'name' => 'Gourma',
      ),
      12 => 
      array (
        'code' => 'HOU',
        'name' => 'Houet',
      ),
      13 => 
      array (
        'code' => 'IOA',
        'name' => 'Ioba',
      ),
      14 => 
      array (
        'code' => 'KAD',
        'name' => 'Kadiogo',
      ),
      15 => 
      array (
        'code' => 'KEN',
        'name' => 'Kenedougou',
      ),
      16 => 
      array (
        'code' => 'KOD',
        'name' => 'Komondjari',
      ),
      17 => 
      array (
        'code' => 'KOP',
        'name' => 'Kompienga',
      ),
      18 => 
      array (
        'code' => 'KOS',
        'name' => 'Kossi',
      ),
      19 => 
      array (
        'code' => 'KOL',
        'name' => 'Koulpelogo',
      ),
      20 => 
      array (
        'code' => 'KOT',
        'name' => 'Kouritenga',
      ),
      21 => 
      array (
        'code' => 'KOW',
        'name' => 'Kourweogo',
      ),
      22 => 
      array (
        'code' => 'LER',
        'name' => 'Leraba',
      ),
      23 => 
      array (
        'code' => 'LOR',
        'name' => 'Loroum',
      ),
      24 => 
      array (
        'code' => 'MOU',
        'name' => 'Mouhoun',
      ),
      25 => 
      array (
        'code' => 'NAH',
        'name' => 'Nahouri',
      ),
      26 => 
      array (
        'code' => 'NAM',
        'name' => 'Namentenga',
      ),
      27 => 
      array (
        'code' => 'NAY',
        'name' => 'Nayala',
      ),
      28 => 
      array (
        'code' => 'NOU',
        'name' => 'Noumbiel',
      ),
      29 => 
      array (
        'code' => 'OUB',
        'name' => 'Oubritenga',
      ),
      30 => 
      array (
        'code' => 'OUD',
        'name' => 'Oudalan',
      ),
      31 => 
      array (
        'code' => 'PAS',
        'name' => 'Passore',
      ),
      32 => 
      array (
        'code' => 'PON',
        'name' => 'Poni',
      ),
      33 => 
      array (
        'code' => 'SAG',
        'name' => 'Sanguie',
      ),
      34 => 
      array (
        'code' => 'SAM',
        'name' => 'Sanmatenga',
      ),
      35 => 
      array (
        'code' => 'SEN',
        'name' => 'Seno',
      ),
      36 => 
      array (
        'code' => 'SIS',
        'name' => 'Sissili',
      ),
      37 => 
      array (
        'code' => 'SOM',
        'name' => 'Soum',
      ),
      38 => 
      array (
        'code' => 'SOR',
        'name' => 'Sourou',
      ),
      39 => 
      array (
        'code' => 'TAP',
        'name' => 'Tapoa',
      ),
      40 => 
      array (
        'code' => 'TUY',
        'name' => 'Tuy',
      ),
      41 => 
      array (
        'code' => 'YAG',
        'name' => 'Yagha',
      ),
      42 => 
      array (
        'code' => 'YAT',
        'name' => 'Yatenga',
      ),
      43 => 
      array (
        'code' => 'ZIR',
        'name' => 'Ziro',
      ),
      44 => 
      array (
        'code' => 'ZOD',
        'name' => 'Zondoma',
      ),
      45 => 
      array (
        'code' => 'ZOW',
        'name' => 'Zoundweogo',
      ),
    ),
    'BG' => 
    array (
      1 => 
      array (
        'code' => 'BG-01',
        'name' => 'Blagoevgrad',
      ),
      2 => 
      array (
        'code' => 'BG-02',
        'name' => 'Burgas',
      ),
      3 => 
      array (
        'code' => 'BG-03',
        'name' => 'Dobrich',
      ),
      4 => 
      array (
        'code' => 'BG-04',
        'name' => 'Gabrovo',
      ),
      5 => 
      array (
        'code' => 'BG-05',
        'name' => 'Haskovo',
      ),
      6 => 
      array (
        'code' => 'BG-06',
        'name' => 'Kardjali',
      ),
      7 => 
      array (
        'code' => 'BG-07',
        'name' => 'Kyustendil',
      ),
      8 => 
      array (
        'code' => 'BG-08',
        'name' => 'Lovech',
      ),
      9 => 
      array (
        'code' => 'BG-09',
        'name' => 'Montana',
      ),
      10 => 
      array (
        'code' => 'BG-10',
        'name' => 'Pazardjik',
      ),
      11 => 
      array (
        'code' => 'BG-11',
        'name' => 'Pernik',
      ),
      12 => 
      array (
        'code' => 'BG-12',
        'name' => 'Pleven',
      ),
      13 => 
      array (
        'code' => 'BG-13',
        'name' => 'Plovdiv',
      ),
      14 => 
      array (
        'code' => 'BG-14',
        'name' => 'Razgrad',
      ),
      15 => 
      array (
        'code' => 'BG-15',
        'name' => 'Shumen',
      ),
      16 => 
      array (
        'code' => 'BG-16',
        'name' => 'Silistra',
      ),
      17 => 
      array (
        'code' => 'BG-17',
        'name' => 'Sliven',
      ),
      18 => 
      array (
        'code' => 'BG-18',
        'name' => 'Smolyan',
      ),
      19 => 
      array (
        'code' => 'BG-19',
        'name' => 'Sofia',
      ),
      20 => 
      array (
        'code' => 'BG-20',
        'name' => 'Sofia - town',
      ),
      21 => 
      array (
        'code' => 'BG-21',
        'name' => 'Stara Zagora',
      ),
      22 => 
      array (
        'code' => 'BG-22',
        'name' => 'Targovishte',
      ),
      23 => 
      array (
        'code' => 'BG-23',
        'name' => 'Varna',
      ),
      24 => 
      array (
        'code' => 'BG-24',
        'name' => 'Veliko Tarnovo',
      ),
      25 => 
      array (
        'code' => 'BG-25',
        'name' => 'Vidin',
      ),
      26 => 
      array (
        'code' => 'BG-26',
        'name' => 'Vratza',
      ),
      27 => 
      array (
        'code' => 'BG-27',
        'name' => 'Yambol',
      ),
    ),
    'BH' => 
    array (
      1 => 
      array (
        'code' => 'CAP',
        'name' => 'Capital',
      ),
      2 => 
      array (
        'code' => 'CEN',
        'name' => 'Central',
      ),
      3 => 
      array (
        'code' => 'MUH',
        'name' => 'Muharraq',
      ),
      4 => 
      array (
        'code' => 'NOR',
        'name' => 'Northern',
      ),
      5 => 
      array (
        'code' => 'SOU',
        'name' => 'Southern',
      ),
    ),
    'BI' => 
    array (
      1 => 
      array (
        'code' => 'BB',
        'name' => 'Bubanza',
      ),
      2 => 
      array (
        'code' => 'BJ',
        'name' => 'Bujumbura',
      ),
      3 => 
      array (
        'code' => 'BR',
        'name' => 'Bururi',
      ),
      4 => 
      array (
        'code' => 'CA',
        'name' => 'Cankuzo',
      ),
      5 => 
      array (
        'code' => 'CI',
        'name' => 'Cibitoke',
      ),
      6 => 
      array (
        'code' => 'GI',
        'name' => 'Gitega',
      ),
      7 => 
      array (
        'code' => 'KR',
        'name' => 'Karuzi',
      ),
      8 => 
      array (
        'code' => 'KY',
        'name' => 'Kayanza',
      ),
      9 => 
      array (
        'code' => 'KI',
        'name' => 'Kirundo',
      ),
      10 => 
      array (
        'code' => 'MA',
        'name' => 'Makamba',
      ),
      11 => 
      array (
        'code' => 'MU',
        'name' => 'Muramvya',
      ),
      12 => 
      array (
        'code' => 'MY',
        'name' => 'Muyinga',
      ),
      13 => 
      array (
        'code' => 'MW',
        'name' => 'Mwaro',
      ),
      14 => 
      array (
        'code' => 'NG',
        'name' => 'Ngozi',
      ),
      15 => 
      array (
        'code' => 'RT',
        'name' => 'Rutana',
      ),
      16 => 
      array (
        'code' => 'RY',
        'name' => 'Ruyigi',
      ),
    ),
    'BJ' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Alibori',
      ),
      2 => 
      array (
        'code' => 'AK',
        'name' => 'Atakora',
      ),
      3 => 
      array (
        'code' => 'AQ',
        'name' => 'Atlantique',
      ),
      4 => 
      array (
        'code' => 'BO',
        'name' => 'Borgou',
      ),
      5 => 
      array (
        'code' => 'CO',
        'name' => 'Collines',
      ),
      6 => 
      array (
        'code' => 'DO',
        'name' => 'Donga',
      ),
      7 => 
      array (
        'code' => 'KO',
        'name' => 'Kouffo',
      ),
      8 => 
      array (
        'code' => 'LI',
        'name' => 'Littoral',
      ),
      9 => 
      array (
        'code' => 'MO',
        'name' => 'Mono',
      ),
      10 => 
      array (
        'code' => 'OU',
        'name' => 'Oueme',
      ),
      11 => 
      array (
        'code' => 'PL',
        'name' => 'Plateau',
      ),
      12 => 
      array (
        'code' => 'ZO',
        'name' => 'Zou',
      ),
    ),
    'BM' => 
    array (
      1 => 
      array (
        'code' => 'DS',
        'name' => 'Devonshire',
      ),
      2 => 
      array (
        'code' => 'HC',
        'name' => 'Hamilton City',
      ),
      3 => 
      array (
        'code' => 'HA',
        'name' => 'Hamilton',
      ),
      4 => 
      array (
        'code' => 'PG',
        'name' => 'Paget',
      ),
      5 => 
      array (
        'code' => 'PB',
        'name' => 'Pembroke',
      ),
      6 => 
      array (
        'code' => 'GC',
        'name' => 'Saint George City',
      ),
      7 => 
      array (
        'code' => 'SG',
        'name' => 'Saint George&#39;s',
      ),
      8 => 
      array (
        'code' => 'SA',
        'name' => 'Sandys',
      ),
      9 => 
      array (
        'code' => 'SM',
        'name' => 'Smith&#39;s',
      ),
      10 => 
      array (
        'code' => 'SH',
        'name' => 'Southampton',
      ),
      11 => 
      array (
        'code' => 'WA',
        'name' => 'Warwick',
      ),
    ),
    'BN' => 
    array (
      1 => 
      array (
        'code' => 'BEL',
        'name' => 'Belait',
      ),
      2 => 
      array (
        'code' => 'BRM',
        'name' => 'Brunei and Muara',
      ),
      3 => 
      array (
        'code' => 'TEM',
        'name' => 'Temburong',
      ),
      4 => 
      array (
        'code' => 'TUT',
        'name' => 'Tutong',
      ),
    ),
    'BO' => 
    array (
      1 => 
      array (
        'code' => 'BEN',
        'name' => 'Beni',
      ),
      2 => 
      array (
        'code' => 'CHU',
        'name' => 'Chuquisaca',
      ),
      3 => 
      array (
        'code' => 'COC',
        'name' => 'Cochabamba',
      ),
      4 => 
      array (
        'code' => 'LPZ',
        'name' => 'La Paz',
      ),
      5 => 
      array (
        'code' => 'ORU',
        'name' => 'Oruro',
      ),
      6 => 
      array (
        'code' => 'PAN',
        'name' => 'Pando',
      ),
      7 => 
      array (
        'code' => 'POT',
        'name' => 'Potosi',
      ),
      8 => 
      array (
        'code' => 'SCZ',
        'name' => 'Santa Cruz',
      ),
      9 => 
      array (
        'code' => 'TAR',
        'name' => 'Tarija',
      ),
    ),
    'BR' => 
    array (
      1 => 
      array (
        'code' => 'AC',
        'name' => 'Acre',
      ),
      2 => 
      array (
        'code' => 'AL',
        'name' => 'Alagoas',
      ),
      3 => 
      array (
        'code' => 'AP',
        'name' => 'Amapa',
      ),
      4 => 
      array (
        'code' => 'AM',
        'name' => 'Amazonas',
      ),
      5 => 
      array (
        'code' => 'BA',
        'name' => 'Bahia',
      ),
      6 => 
      array (
        'code' => 'CE',
        'name' => 'Ceara',
      ),
      7 => 
      array (
        'code' => 'DF',
        'name' => 'Distrito Federal',
      ),
      8 => 
      array (
        'code' => 'ES',
        'name' => 'Espirito Santo',
      ),
      9 => 
      array (
        'code' => 'GO',
        'name' => 'Goias',
      ),
      10 => 
      array (
        'code' => 'MA',
        'name' => 'Maranhao',
      ),
      11 => 
      array (
        'code' => 'MT',
        'name' => 'Mato Grosso',
      ),
      12 => 
      array (
        'code' => 'MS',
        'name' => 'Mato Grosso do Sul',
      ),
      13 => 
      array (
        'code' => 'MG',
        'name' => 'Minas Gerais',
      ),
      14 => 
      array (
        'code' => 'PA',
        'name' => 'Para',
      ),
      15 => 
      array (
        'code' => 'PB',
        'name' => 'Paraiba',
      ),
      16 => 
      array (
        'code' => 'PR',
        'name' => 'Parana',
      ),
      17 => 
      array (
        'code' => 'PE',
        'name' => 'Pernambuco',
      ),
      18 => 
      array (
        'code' => 'PI',
        'name' => 'Piaui',
      ),
      19 => 
      array (
        'code' => 'RJ',
        'name' => 'Rio de Janeiro',
      ),
      20 => 
      array (
        'code' => 'RN',
        'name' => 'Rio Grande do Norte',
      ),
      21 => 
      array (
        'code' => 'RS',
        'name' => 'Rio Grande do Sul',
      ),
      22 => 
      array (
        'code' => 'RO',
        'name' => 'Rondonia',
      ),
      23 => 
      array (
        'code' => 'RR',
        'name' => 'Roraima',
      ),
      24 => 
      array (
        'code' => 'SC',
        'name' => 'Santa Catarina',
      ),
      25 => 
      array (
        'code' => 'SP',
        'name' => 'Sao Paulo',
      ),
      26 => 
      array (
        'code' => 'SE',
        'name' => 'Sergipe',
      ),
      27 => 
      array (
        'code' => 'TO',
        'name' => 'Tocantins',
      ),
    ),
    'BS' => 
    array (
      1 => 
      array (
        'code' => 'ACK',
        'name' => 'Acklins',
      ),
      2 => 
      array (
        'code' => 'BER',
        'name' => 'Berry Islands',
      ),
      3 => 
      array (
        'code' => 'BIM',
        'name' => 'Bimini',
      ),
      4 => 
      array (
        'code' => 'BLK',
        'name' => 'Black Point',
      ),
      5 => 
      array (
        'code' => 'CAT',
        'name' => 'Cat Island',
      ),
      6 => 
      array (
        'code' => 'CAB',
        'name' => 'Central Abaco',
      ),
      7 => 
      array (
        'code' => 'CAN',
        'name' => 'Central Andros',
      ),
      8 => 
      array (
        'code' => 'CEL',
        'name' => 'Central Eleuthera',
      ),
      9 => 
      array (
        'code' => 'FRE',
        'name' => 'City of Freeport',
      ),
      10 => 
      array (
        'code' => 'CRO',
        'name' => 'Crooked Island',
      ),
      11 => 
      array (
        'code' => 'EGB',
        'name' => 'East Grand Bahama',
      ),
      12 => 
      array (
        'code' => 'EXU',
        'name' => 'Exuma',
      ),
      13 => 
      array (
        'code' => 'GRD',
        'name' => 'Grand Cay',
      ),
      14 => 
      array (
        'code' => 'HAR',
        'name' => 'Harbour Island',
      ),
      15 => 
      array (
        'code' => 'HOP',
        'name' => 'Hope Town',
      ),
      16 => 
      array (
        'code' => 'INA',
        'name' => 'Inagua',
      ),
      17 => 
      array (
        'code' => 'LNG',
        'name' => 'Long Island',
      ),
      18 => 
      array (
        'code' => 'MAN',
        'name' => 'Mangrove Cay',
      ),
      19 => 
      array (
        'code' => 'MAY',
        'name' => 'Mayaguana',
      ),
      20 => 
      array (
        'code' => 'MOO',
        'name' => 'Moore&#39;s Island',
      ),
      21 => 
      array (
        'code' => 'NAB',
        'name' => 'North Abaco',
      ),
      22 => 
      array (
        'code' => 'NAN',
        'name' => 'North Andros',
      ),
      23 => 
      array (
        'code' => 'NEL',
        'name' => 'North Eleuthera',
      ),
      24 => 
      array (
        'code' => 'RAG',
        'name' => 'Ragged Island',
      ),
      25 => 
      array (
        'code' => 'RUM',
        'name' => 'Rum Cay',
      ),
      26 => 
      array (
        'code' => 'SAL',
        'name' => 'San Salvador',
      ),
      27 => 
      array (
        'code' => 'SAB',
        'name' => 'South Abaco',
      ),
      28 => 
      array (
        'code' => 'SAN',
        'name' => 'South Andros',
      ),
      29 => 
      array (
        'code' => 'SEL',
        'name' => 'South Eleuthera',
      ),
      30 => 
      array (
        'code' => 'SWE',
        'name' => 'Spanish Wells',
      ),
      31 => 
      array (
        'code' => 'WGB',
        'name' => 'West Grand Bahama',
      ),
    ),
    'BT' => 
    array (
      1 => 
      array (
        'code' => 'BUM',
        'name' => 'Bumthang',
      ),
      2 => 
      array (
        'code' => 'CHU',
        'name' => 'Chukha',
      ),
      3 => 
      array (
        'code' => 'DAG',
        'name' => 'Dagana',
      ),
      4 => 
      array (
        'code' => 'GAS',
        'name' => 'Gasa',
      ),
      5 => 
      array (
        'code' => 'HAA',
        'name' => 'Haa',
      ),
      6 => 
      array (
        'code' => 'LHU',
        'name' => 'Lhuntse',
      ),
      7 => 
      array (
        'code' => 'MON',
        'name' => 'Mongar',
      ),
      8 => 
      array (
        'code' => 'PAR',
        'name' => 'Paro',
      ),
      9 => 
      array (
        'code' => 'PEM',
        'name' => 'Pemagatshel',
      ),
      10 => 
      array (
        'code' => 'PUN',
        'name' => 'Punakha',
      ),
      11 => 
      array (
        'code' => 'SJO',
        'name' => 'Samdrup Jongkhar',
      ),
      12 => 
      array (
        'code' => 'SAT',
        'name' => 'Samtse',
      ),
      13 => 
      array (
        'code' => 'SAR',
        'name' => 'Sarpang',
      ),
      14 => 
      array (
        'code' => 'THI',
        'name' => 'Thimphu',
      ),
      15 => 
      array (
        'code' => 'TRG',
        'name' => 'Trashigang',
      ),
      16 => 
      array (
        'code' => 'TRY',
        'name' => 'Trashiyangste',
      ),
      17 => 
      array (
        'code' => 'TRO',
        'name' => 'Trongsa',
      ),
      18 => 
      array (
        'code' => 'TSI',
        'name' => 'Tsirang',
      ),
      19 => 
      array (
        'code' => 'WPH',
        'name' => 'Wangdue Phodrang',
      ),
      20 => 
      array (
        'code' => 'ZHE',
        'name' => 'Zhemgang',
      ),
    ),
    'BW' => 
    array (
      1 => 
      array (
        'code' => 'CE',
        'name' => 'Central',
      ),
      2 => 
      array (
        'code' => 'GH',
        'name' => 'Ghanzi',
      ),
      3 => 
      array (
        'code' => 'KD',
        'name' => 'Kgalagadi',
      ),
      4 => 
      array (
        'code' => 'KT',
        'name' => 'Kgatleng',
      ),
      5 => 
      array (
        'code' => 'KW',
        'name' => 'Kweneng',
      ),
      6 => 
      array (
        'code' => 'NG',
        'name' => 'Ngamiland',
      ),
      7 => 
      array (
        'code' => 'NE',
        'name' => 'North East',
      ),
      8 => 
      array (
        'code' => 'NW',
        'name' => 'North West',
      ),
      9 => 
      array (
        'code' => 'SE',
        'name' => 'South East',
      ),
      10 => 
      array (
        'code' => 'SO',
        'name' => 'Southern',
      ),
    ),
    'BY' => 
    array (
      1 => 
      array (
        'code' => 'BR',
        'name' => 'Brestskaya (Brest)',
      ),
      2 => 
      array (
        'code' => 'HO',
        'name' => 'Homyel&#39;skaya (Homyel&#39;)',
      ),
      3 => 
      array (
        'code' => 'HM',
        'name' => 'Horad Minsk',
      ),
      4 => 
      array (
        'code' => 'HR',
        'name' => 'Hrodzyenskaya (Hrodna)',
      ),
      5 => 
      array (
        'code' => 'MA',
        'name' => 'Mahilyowskaya (Mahilyow)',
      ),
      6 => 
      array (
        'code' => 'MI',
        'name' => 'Minskaya',
      ),
      7 => 
      array (
        'code' => 'VI',
        'name' => 'Vitsyebskaya (Vitsyebsk)',
      ),
    ),
    'BZ' => 
    array (
      1 => 
      array (
        'code' => 'BZ',
        'name' => 'Belize',
      ),
      2 => 
      array (
        'code' => 'CY',
        'name' => 'Cayo',
      ),
      3 => 
      array (
        'code' => 'CR',
        'name' => 'Corozal',
      ),
      4 => 
      array (
        'code' => 'OW',
        'name' => 'Orange Walk',
      ),
      5 => 
      array (
        'code' => 'SC',
        'name' => 'Stann Creek',
      ),
      6 => 
      array (
        'code' => 'TO',
        'name' => 'Toledo',
      ),
    ),
    'CA' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Alberta',
      ),
      2 => 
      array (
        'code' => 'BC',
        'name' => 'British Columbia',
      ),
      3 => 
      array (
        'code' => 'MB',
        'name' => 'Manitoba',
      ),
      4 => 
      array (
        'code' => 'NB',
        'name' => 'New Brunswick',
      ),
      5 => 
      array (
        'code' => 'NL',
        'name' => 'Newfoundland and Labrador',
      ),
      6 => 
      array (
        'code' => 'NT',
        'name' => 'Northwest Territories',
      ),
      7 => 
      array (
        'code' => 'NS',
        'name' => 'Nova Scotia',
      ),
      8 => 
      array (
        'code' => 'NU',
        'name' => 'Nunavut',
      ),
      9 => 
      array (
        'code' => 'ON',
        'name' => 'Ontario',
      ),
      10 => 
      array (
        'code' => 'PE',
        'name' => 'Prince Edward Island',
      ),
      11 => 
      array (
        'code' => 'QC',
        'name' => 'Québec',
      ),
      12 => 
      array (
        'code' => 'SK',
        'name' => 'Saskatchewan',
      ),
      13 => 
      array (
        'code' => 'YT',
        'name' => 'Yukon Territory',
      ),
    ),
    'CC' => 
    array (
      1 => 
      array (
        'code' => 'D',
        'name' => 'Direction Island',
      ),
      2 => 
      array (
        'code' => 'H',
        'name' => 'Home Island',
      ),
      3 => 
      array (
        'code' => 'O',
        'name' => 'Horsburgh Island',
      ),
      4 => 
      array (
        'code' => 'S',
        'name' => 'South Island',
      ),
      5 => 
      array (
        'code' => 'W',
        'name' => 'West Island',
      ),
    ),
    'CF' => 
    array (
      1 => 
      array (
        'code' => 'BAN',
        'name' => 'Bangui',
      ),
      2 => 
      array (
        'code' => 'BBA',
        'name' => 'Bamingui-Bangoran',
      ),
      3 => 
      array (
        'code' => 'BKO',
        'name' => 'Basse-Kotto',
      ),
      4 => 
      array (
        'code' => 'HKO',
        'name' => 'Haute-Kotto',
      ),
      5 => 
      array (
        'code' => 'HMB',
        'name' => 'Haut-Mbomou',
      ),
      6 => 
      array (
        'code' => 'KEM',
        'name' => 'Kemo',
      ),
      7 => 
      array (
        'code' => 'LOB',
        'name' => 'Lobaye',
      ),
      8 => 
      array (
        'code' => 'MBO',
        'name' => 'Mbomou',
      ),
      9 => 
      array (
        'code' => 'MKD',
        'name' => 'Mambéré-Kadéï',
      ),
      10 => 
      array (
        'code' => 'NGR',
        'name' => 'Nana-Grebizi',
      ),
      11 => 
      array (
        'code' => 'NMM',
        'name' => 'Nana-Mambere',
      ),
      12 => 
      array (
        'code' => 'OMP',
        'name' => 'Ombella-M&#39;Poko',
      ),
      13 => 
      array (
        'code' => 'OPE',
        'name' => 'Ouham-Pende',
      ),
      14 => 
      array (
        'code' => 'OUH',
        'name' => 'Ouham',
      ),
      15 => 
      array (
        'code' => 'OUK',
        'name' => 'Ouaka',
      ),
      16 => 
      array (
        'code' => 'SMB',
        'name' => 'Sangha-Mbaere',
      ),
      17 => 
      array (
        'code' => 'VAK',
        'name' => 'Vakaga',
      ),
    ),
    'CG' => 
    array (
      1 => 
      array (
        'code' => 'BO',
        'name' => 'Bouenza',
      ),
      2 => 
      array (
        'code' => 'BR',
        'name' => 'Brazzaville',
      ),
      3 => 
      array (
        'code' => 'CU',
        'name' => 'Cuvette',
      ),
      4 => 
      array (
        'code' => 'CO',
        'name' => 'Cuvette-Ouest',
      ),
      5 => 
      array (
        'code' => 'KO',
        'name' => 'Kouilou',
      ),
      6 => 
      array (
        'code' => 'LE',
        'name' => 'Lekoumou',
      ),
      7 => 
      array (
        'code' => 'LI',
        'name' => 'Likouala',
      ),
      8 => 
      array (
        'code' => 'NI',
        'name' => 'Niari',
      ),
      9 => 
      array (
        'code' => 'PL',
        'name' => 'Plateaux',
      ),
      10 => 
      array (
        'code' => 'PO',
        'name' => 'Pool',
      ),
      11 => 
      array (
        'code' => 'SA',
        'name' => 'Sangha',
      ),
    ),
    'CI' => 
    array (
      1 => 
      array (
        'code' => 'ABE',
        'name' => 'Abengourou',
      ),
      2 => 
      array (
        'code' => 'ABI',
        'name' => 'Abidjan',
      ),
      3 => 
      array (
        'code' => 'ABO',
        'name' => 'Aboisso',
      ),
      4 => 
      array (
        'code' => 'ADI',
        'name' => 'Adiake',
      ),
      5 => 
      array (
        'code' => 'ADZ',
        'name' => 'Adzope',
      ),
      6 => 
      array (
        'code' => 'AGB',
        'name' => 'Agboville',
      ),
      7 => 
      array (
        'code' => 'AGN',
        'name' => 'Agnibilekrou',
      ),
      8 => 
      array (
        'code' => 'ALE',
        'name' => 'Alepe',
      ),
      9 => 
      array (
        'code' => 'BOC',
        'name' => 'Bocanda',
      ),
      10 => 
      array (
        'code' => 'BAN',
        'name' => 'Bangolo',
      ),
      11 => 
      array (
        'code' => 'BEO',
        'name' => 'Beoumi',
      ),
      12 => 
      array (
        'code' => 'BIA',
        'name' => 'Biankouma',
      ),
      13 => 
      array (
        'code' => 'BDK',
        'name' => 'Bondoukou',
      ),
      14 => 
      array (
        'code' => 'BGN',
        'name' => 'Bongouanou',
      ),
      15 => 
      array (
        'code' => 'BFL',
        'name' => 'Bouafle',
      ),
      16 => 
      array (
        'code' => 'BKE',
        'name' => 'Bouake',
      ),
      17 => 
      array (
        'code' => 'BNA',
        'name' => 'Bouna',
      ),
      18 => 
      array (
        'code' => 'BDL',
        'name' => 'Boundiali',
      ),
      19 => 
      array (
        'code' => 'DKL',
        'name' => 'Dabakala',
      ),
      20 => 
      array (
        'code' => 'DBU',
        'name' => 'Dabou',
      ),
      21 => 
      array (
        'code' => 'DAL',
        'name' => 'Daloa',
      ),
      22 => 
      array (
        'code' => 'DAN',
        'name' => 'Danane',
      ),
      23 => 
      array (
        'code' => 'DAO',
        'name' => 'Daoukro',
      ),
      24 => 
      array (
        'code' => 'DIM',
        'name' => 'Dimbokro',
      ),
      25 => 
      array (
        'code' => 'DIV',
        'name' => 'Divo',
      ),
      26 => 
      array (
        'code' => 'DUE',
        'name' => 'Duekoue',
      ),
      27 => 
      array (
        'code' => 'FER',
        'name' => 'Ferkessedougou',
      ),
      28 => 
      array (
        'code' => 'GAG',
        'name' => 'Gagnoa',
      ),
      29 => 
      array (
        'code' => 'GBA',
        'name' => 'Grand-Bassam',
      ),
      30 => 
      array (
        'code' => 'GLA',
        'name' => 'Grand-Lahou',
      ),
      31 => 
      array (
        'code' => 'GUI',
        'name' => 'Guiglo',
      ),
      32 => 
      array (
        'code' => 'ISS',
        'name' => 'Issia',
      ),
      33 => 
      array (
        'code' => 'JAC',
        'name' => 'Jacqueville',
      ),
      34 => 
      array (
        'code' => 'KAT',
        'name' => 'Katiola',
      ),
      35 => 
      array (
        'code' => 'KOR',
        'name' => 'Korhogo',
      ),
      36 => 
      array (
        'code' => 'LAK',
        'name' => 'Lakota',
      ),
      37 => 
      array (
        'code' => 'MAN',
        'name' => 'Man',
      ),
      38 => 
      array (
        'code' => 'MKN',
        'name' => 'Mankono',
      ),
      39 => 
      array (
        'code' => 'MBA',
        'name' => 'Mbahiakro',
      ),
      40 => 
      array (
        'code' => 'ODI',
        'name' => 'Odienne',
      ),
      41 => 
      array (
        'code' => 'OUM',
        'name' => 'Oume',
      ),
      42 => 
      array (
        'code' => 'SAK',
        'name' => 'Sakassou',
      ),
      43 => 
      array (
        'code' => 'SPE',
        'name' => 'San-Pedro',
      ),
      44 => 
      array (
        'code' => 'SAS',
        'name' => 'Sassandra',
      ),
      45 => 
      array (
        'code' => 'SEG',
        'name' => 'Seguela',
      ),
      46 => 
      array (
        'code' => 'SIN',
        'name' => 'Sinfra',
      ),
      47 => 
      array (
        'code' => 'SOU',
        'name' => 'Soubre',
      ),
      48 => 
      array (
        'code' => 'TAB',
        'name' => 'Tabou',
      ),
      49 => 
      array (
        'code' => 'TAN',
        'name' => 'Tanda',
      ),
      50 => 
      array (
        'code' => 'TIE',
        'name' => 'Tiebissou',
      ),
      51 => 
      array (
        'code' => 'TIN',
        'name' => 'Tingrela',
      ),
      52 => 
      array (
        'code' => 'TIA',
        'name' => 'Tiassale',
      ),
      53 => 
      array (
        'code' => 'TBA',
        'name' => 'Touba',
      ),
      54 => 
      array (
        'code' => 'TLP',
        'name' => 'Toulepleu',
      ),
      55 => 
      array (
        'code' => 'TMD',
        'name' => 'Toumodi',
      ),
      56 => 
      array (
        'code' => 'VAV',
        'name' => 'Vavoua',
      ),
      57 => 
      array (
        'code' => 'YAM',
        'name' => 'Yamoussoukro',
      ),
      58 => 
      array (
        'code' => 'ZUE',
        'name' => 'Zuenoula',
      ),
    ),
    'CK' => 
    array (
      1 => 
      array (
        'code' => 'AI',
        'name' => 'Aitutaki',
      ),
      2 => 
      array (
        'code' => 'AT',
        'name' => 'Atiu',
      ),
      3 => 
      array (
        'code' => 'MA',
        'name' => 'Manuae',
      ),
      4 => 
      array (
        'code' => 'MG',
        'name' => 'Mangaia',
      ),
      5 => 
      array (
        'code' => 'MK',
        'name' => 'Manihiki',
      ),
      6 => 
      array (
        'code' => 'MT',
        'name' => 'Mitiaro',
      ),
      7 => 
      array (
        'code' => 'MU',
        'name' => 'Mauke',
      ),
      8 => 
      array (
        'code' => 'NI',
        'name' => 'Nassau Island',
      ),
      9 => 
      array (
        'code' => 'PA',
        'name' => 'Palmerston',
      ),
      10 => 
      array (
        'code' => 'PE',
        'name' => 'Penrhyn',
      ),
      11 => 
      array (
        'code' => 'PU',
        'name' => 'Pukapuka',
      ),
      12 => 
      array (
        'code' => 'RK',
        'name' => 'Rakahanga',
      ),
      13 => 
      array (
        'code' => 'RR',
        'name' => 'Rarotonga',
      ),
      14 => 
      array (
        'code' => 'SU',
        'name' => 'Surwarrow',
      ),
      15 => 
      array (
        'code' => 'TA',
        'name' => 'Takutea',
      ),
    ),
    'CL' => 
    array (
      1 => 
      array (
        'code' => 'AI',
        'name' => 'Aisen del General Carlos Ibanez',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'Antofagasta',
      ),
      3 => 
      array (
        'code' => 'AR',
        'name' => 'Araucania',
      ),
      4 => 
      array (
        'code' => 'AT',
        'name' => 'Atacama',
      ),
      5 => 
      array (
        'code' => 'BI',
        'name' => 'Bio-Bio',
      ),
      6 => 
      array (
        'code' => 'CO',
        'name' => 'Coquimbo',
      ),
      7 => 
      array (
        'code' => 'LI',
        'name' => 'Libertador General Bernardo O&#39;Hi',
      ),
      8 => 
      array (
        'code' => 'LL',
        'name' => 'Los Lagos',
      ),
      9 => 
      array (
        'code' => 'MA',
        'name' => 'Magallanes y de la Antartica Chi',
      ),
      10 => 
      array (
        'code' => 'ML',
        'name' => 'Maule',
      ),
      11 => 
      array (
        'code' => 'RM',
        'name' => 'Region Metropolitana',
      ),
      12 => 
      array (
        'code' => 'TA',
        'name' => 'Tarapaca',
      ),
      13 => 
      array (
        'code' => 'VS',
        'name' => 'Valparaiso',
      ),
    ),
    'CM' => 
    array (
      1 => 
      array (
        'code' => 'ADA',
        'name' => 'Adamawa (Adamaoua)',
      ),
      2 => 
      array (
        'code' => 'CEN',
        'name' => 'Centre',
      ),
      3 => 
      array (
        'code' => 'EST',
        'name' => 'East (Est)',
      ),
      4 => 
      array (
        'code' => 'EXN',
        'name' => 'Extrême-Nord',
      ),
      5 => 
      array (
        'code' => 'LIT',
        'name' => 'Littoral',
      ),
      6 => 
      array (
        'code' => 'NOR',
        'name' => 'North (Nord)',
      ),
      7 => 
      array (
        'code' => 'NOT',
        'name' => 'Northwest (Nord-Ouest)',
      ),
      8 => 
      array (
        'code' => 'OUE',
        'name' => 'West (Ouest)',
      ),
      9 => 
      array (
        'code' => 'SUD',
        'name' => 'South (Sud)',
      ),
      10 => 
      array (
        'code' => 'SOU',
        'name' => 'Southwest (Sud-Ouest)',
      ),
    ),
    'CN' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Anhui',
      ),
      2 => 
      array (
        'code' => 'BE',
        'name' => 'Beijing',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'Chongqing',
      ),
      4 => 
      array (
        'code' => 'FU',
        'name' => 'Fujian',
      ),
      5 => 
      array (
        'code' => 'GA',
        'name' => 'Gansu',
      ),
      6 => 
      array (
        'code' => 'GU',
        'name' => 'Guangdong',
      ),
      7 => 
      array (
        'code' => 'GX',
        'name' => 'Guangxi',
      ),
      8 => 
      array (
        'code' => 'GZ',
        'name' => 'Guizhou',
      ),
      9 => 
      array (
        'code' => 'HA',
        'name' => 'Hainan',
      ),
      10 => 
      array (
        'code' => 'HB',
        'name' => 'Hebei',
      ),
      11 => 
      array (
        'code' => 'HL',
        'name' => 'Heilongjiang',
      ),
      12 => 
      array (
        'code' => 'HE',
        'name' => 'Henan',
      ),
      13 => 
      array (
        'code' => 'HK',
        'name' => 'Hong Kong',
      ),
      14 => 
      array (
        'code' => 'HU',
        'name' => 'Hubei',
      ),
      15 => 
      array (
        'code' => 'HN',
        'name' => 'Hunan',
      ),
      16 => 
      array (
        'code' => 'IM',
        'name' => 'Inner Mongolia',
      ),
      17 => 
      array (
        'code' => 'JI',
        'name' => 'Jiangsu',
      ),
      18 => 
      array (
        'code' => 'JX',
        'name' => 'Jiangxi',
      ),
      19 => 
      array (
        'code' => 'JL',
        'name' => 'Jilin',
      ),
      20 => 
      array (
        'code' => 'LI',
        'name' => 'Liaoning',
      ),
      21 => 
      array (
        'code' => 'MA',
        'name' => 'Macau',
      ),
      22 => 
      array (
        'code' => 'NI',
        'name' => 'Ningxia',
      ),
      23 => 
      array (
        'code' => 'SH',
        'name' => 'Shaanxi',
      ),
      24 => 
      array (
        'code' => 'SA',
        'name' => 'Shandong',
      ),
      25 => 
      array (
        'code' => 'SG',
        'name' => 'Shanghai',
      ),
      26 => 
      array (
        'code' => 'SX',
        'name' => 'Shanxi',
      ),
      27 => 
      array (
        'code' => 'SI',
        'name' => 'Sichuan',
      ),
      28 => 
      array (
        'code' => 'TI',
        'name' => 'Tianjin',
      ),
      29 => 
      array (
        'code' => 'XI',
        'name' => 'Xinjiang',
      ),
      30 => 
      array (
        'code' => 'YU',
        'name' => 'Yunnan',
      ),
      31 => 
      array (
        'code' => 'ZH',
        'name' => 'Zhejiang',
      ),
    ),
    'CO' => 
    array (
      1 => 
      array (
        'code' => 'AMZ',
        'name' => 'Amazonas',
      ),
      2 => 
      array (
        'code' => 'ANT',
        'name' => 'Antioquia',
      ),
      3 => 
      array (
        'code' => 'ARA',
        'name' => 'Arauca',
      ),
      4 => 
      array (
        'code' => 'ATL',
        'name' => 'Atlantico',
      ),
      5 => 
      array (
        'code' => 'BDC',
        'name' => 'Bogota D.C.',
      ),
      6 => 
      array (
        'code' => 'BOL',
        'name' => 'Bolivar',
      ),
      7 => 
      array (
        'code' => 'BOY',
        'name' => 'Boyaca',
      ),
      8 => 
      array (
        'code' => 'CAL',
        'name' => 'Caldas',
      ),
      9 => 
      array (
        'code' => 'CAQ',
        'name' => 'Caqueta',
      ),
      10 => 
      array (
        'code' => 'CAS',
        'name' => 'Casanare',
      ),
      11 => 
      array (
        'code' => 'CAU',
        'name' => 'Cauca',
      ),
      12 => 
      array (
        'code' => 'CES',
        'name' => 'Cesar',
      ),
      13 => 
      array (
        'code' => 'CHO',
        'name' => 'Choco',
      ),
      14 => 
      array (
        'code' => 'COR',
        'name' => 'Cordoba',
      ),
      15 => 
      array (
        'code' => 'CAM',
        'name' => 'Cundinamarca',
      ),
      16 => 
      array (
        'code' => 'GNA',
        'name' => 'Guainia',
      ),
      17 => 
      array (
        'code' => 'GJR',
        'name' => 'Guajira',
      ),
      18 => 
      array (
        'code' => 'GVR',
        'name' => 'Guaviare',
      ),
      19 => 
      array (
        'code' => 'HUI',
        'name' => 'Huila',
      ),
      20 => 
      array (
        'code' => 'MAG',
        'name' => 'Magdalena',
      ),
      21 => 
      array (
        'code' => 'MET',
        'name' => 'Meta',
      ),
      22 => 
      array (
        'code' => 'NAR',
        'name' => 'Narino',
      ),
      23 => 
      array (
        'code' => 'NDS',
        'name' => 'Norte de Santander',
      ),
      24 => 
      array (
        'code' => 'PUT',
        'name' => 'Putumayo',
      ),
      25 => 
      array (
        'code' => 'QUI',
        'name' => 'Quindio',
      ),
      26 => 
      array (
        'code' => 'RIS',
        'name' => 'Risaralda',
      ),
      27 => 
      array (
        'code' => 'SAP',
        'name' => 'San Andres y Providencia',
      ),
      28 => 
      array (
        'code' => 'SAN',
        'name' => 'Santander',
      ),
      29 => 
      array (
        'code' => 'SUC',
        'name' => 'Sucre',
      ),
      30 => 
      array (
        'code' => 'TOL',
        'name' => 'Tolima',
      ),
      31 => 
      array (
        'code' => 'VDC',
        'name' => 'Valle del Cauca',
      ),
      32 => 
      array (
        'code' => 'VAU',
        'name' => 'Vaupes',
      ),
      33 => 
      array (
        'code' => 'VIC',
        'name' => 'Vichada',
      ),
    ),
    'CR' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Alajuela',
      ),
      2 => 
      array (
        'code' => 'CA',
        'name' => 'Cartago',
      ),
      3 => 
      array (
        'code' => 'GU',
        'name' => 'Guanacaste',
      ),
      4 => 
      array (
        'code' => 'HE',
        'name' => 'Heredia',
      ),
      5 => 
      array (
        'code' => 'LI',
        'name' => 'Limon',
      ),
      6 => 
      array (
        'code' => 'PU',
        'name' => 'Puntarenas',
      ),
      7 => 
      array (
        'code' => 'SJ',
        'name' => 'San Jose',
      ),
    ),
    'CU' => 
    array (
      1 => 
      array (
        'code' => 'CA',
        'name' => 'Camaguey',
      ),
      2 => 
      array (
        'code' => 'CD',
        'name' => 'Ciego de Avila',
      ),
      3 => 
      array (
        'code' => 'CI',
        'name' => 'Cienfuegos',
      ),
      4 => 
      array (
        'code' => 'CH',
        'name' => 'Ciudad de La Habana',
      ),
      5 => 
      array (
        'code' => 'GR',
        'name' => 'Granma',
      ),
      6 => 
      array (
        'code' => 'GU',
        'name' => 'Guantanamo',
      ),
      7 => 
      array (
        'code' => 'HO',
        'name' => 'Holguin',
      ),
      8 => 
      array (
        'code' => 'IJ',
        'name' => 'Isla de la Juventud',
      ),
      9 => 
      array (
        'code' => 'LH',
        'name' => 'La Habana',
      ),
      10 => 
      array (
        'code' => 'LT',
        'name' => 'Las Tunas',
      ),
      11 => 
      array (
        'code' => 'MA',
        'name' => 'Matanzas',
      ),
      12 => 
      array (
        'code' => 'PR',
        'name' => 'Pinar del Rio',
      ),
      13 => 
      array (
        'code' => 'SS',
        'name' => 'Sancti Spiritus',
      ),
      14 => 
      array (
        'code' => 'SC',
        'name' => 'Santiago de Cuba',
      ),
      15 => 
      array (
        'code' => 'VC',
        'name' => 'Villa Clara',
      ),
    ),
    'CV' => 
    array (
      1 => 
      array (
        'code' => 'BV',
        'name' => 'Boa Vista',
      ),
      2 => 
      array (
        'code' => 'BR',
        'name' => 'Brava',
      ),
      3 => 
      array (
        'code' => 'CS',
        'name' => 'Calheta de Sao Miguel',
      ),
      4 => 
      array (
        'code' => 'MA',
        'name' => 'Maio',
      ),
      5 => 
      array (
        'code' => 'MO',
        'name' => 'Mosteiros',
      ),
      6 => 
      array (
        'code' => 'PA',
        'name' => 'Paul',
      ),
      7 => 
      array (
        'code' => 'PN',
        'name' => 'Porto Novo',
      ),
      8 => 
      array (
        'code' => 'PR',
        'name' => 'Praia',
      ),
      9 => 
      array (
        'code' => 'RG',
        'name' => 'Ribeira Grande',
      ),
      10 => 
      array (
        'code' => 'SL',
        'name' => 'Sal',
      ),
      11 => 
      array (
        'code' => 'CA',
        'name' => 'Santa Catarina',
      ),
      12 => 
      array (
        'code' => 'CR',
        'name' => 'Santa Cruz',
      ),
      13 => 
      array (
        'code' => 'SD',
        'name' => 'Sao Domingos',
      ),
      14 => 
      array (
        'code' => 'SF',
        'name' => 'Sao Filipe',
      ),
      15 => 
      array (
        'code' => 'SN',
        'name' => 'Sao Nicolau',
      ),
      16 => 
      array (
        'code' => 'SV',
        'name' => 'Sao Vicente',
      ),
      17 => 
      array (
        'code' => 'TA',
        'name' => 'Tarrafal',
      ),
    ),
    'CY' => 
    array (
      1 => 
      array (
        'code' => 'F',
        'name' => 'Famagusta',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => 'Kyrenia',
      ),
      3 => 
      array (
        'code' => 'A',
        'name' => 'Larnaca',
      ),
      4 => 
      array (
        'code' => 'I',
        'name' => 'Limassol',
      ),
      5 => 
      array (
        'code' => 'N',
        'name' => 'Nicosia',
      ),
      6 => 
      array (
        'code' => 'P',
        'name' => 'Paphos',
      ),
    ),
    'CZ' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'Hlavní město Praha',
      ),
      2 => 
      array (
        'code' => 'B',
        'name' => 'Jihomoravský',
      ),
      3 => 
      array (
        'code' => 'C',
        'name' => 'Jihočeský',
      ),
      4 => 
      array (
        'code' => 'E',
        'name' => 'Pardubický',
      ),
      5 => 
      array (
        'code' => 'H',
        'name' => 'Královéhradecký',
      ),
      6 => 
      array (
        'code' => 'J',
        'name' => 'Vysočina',
      ),
      7 => 
      array (
        'code' => 'K',
        'name' => 'Karlovarský',
      ),
      8 => 
      array (
        'code' => 'L',
        'name' => 'Liberecký',
      ),
      9 => 
      array (
        'code' => 'M',
        'name' => 'Olomoucký',
      ),
      10 => 
      array (
        'code' => 'P',
        'name' => 'Plzeňský',
      ),
      11 => 
      array (
        'code' => 'S',
        'name' => 'Středočeský',
      ),
      12 => 
      array (
        'code' => 'T',
        'name' => 'Moravskoslezský',
      ),
      13 => 
      array (
        'code' => 'U',
        'name' => 'Ústecký',
      ),
      14 => 
      array (
        'code' => 'Z',
        'name' => 'Zlínský',
      ),
    ),
    'Country' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => 'Μέλη',
      ),
    ),
    'DE' => 
    array (
      1 => 
      array (
        'code' => 'BAW',
        'name' => 'Baden-Württemberg',
      ),
      2 => 
      array (
        'code' => 'BAY',
        'name' => 'Bayern',
      ),
      3 => 
      array (
        'code' => 'BER',
        'name' => 'Berlin',
      ),
      4 => 
      array (
        'code' => 'BRG',
        'name' => 'Brandenburg',
      ),
      5 => 
      array (
        'code' => 'BRE',
        'name' => 'Bremen',
      ),
      6 => 
      array (
        'code' => 'HAM',
        'name' => 'Hamburg',
      ),
      7 => 
      array (
        'code' => 'HES',
        'name' => 'Hessen',
      ),
      8 => 
      array (
        'code' => 'MEC',
        'name' => 'Mecklenburg-Vorpommern',
      ),
      9 => 
      array (
        'code' => 'NDS',
        'name' => 'Niedersachsen',
      ),
      10 => 
      array (
        'code' => 'NRW',
        'name' => 'Nordrhein-Westfalen',
      ),
      11 => 
      array (
        'code' => 'RHE',
        'name' => 'Rheinland-Pfalz',
      ),
      12 => 
      array (
        'code' => 'SAR',
        'name' => 'Saarland',
      ),
      13 => 
      array (
        'code' => 'SAS',
        'name' => 'Sachsen',
      ),
      14 => 
      array (
        'code' => 'SAC',
        'name' => 'Sachsen-Anhalt',
      ),
      15 => 
      array (
        'code' => 'SCN',
        'name' => 'Schleswig-Holstein',
      ),
      16 => 
      array (
        'code' => 'THE',
        'name' => 'Thüringen',
      ),
    ),
    'DJ' => 
    array (
      1 => 
      array (
        'code' => 'S',
        'name' => '&#39;Ali Sabih',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => 'Dikhil',
      ),
      3 => 
      array (
        'code' => 'J',
        'name' => 'Djibouti',
      ),
      4 => 
      array (
        'code' => 'O',
        'name' => 'Obock',
      ),
      5 => 
      array (
        'code' => 'T',
        'name' => 'Tadjoura',
      ),
    ),
    'DK' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'Arhus',
      ),
      2 => 
      array (
        'code' => 'BH',
        'name' => 'Bornholm',
      ),
      3 => 
      array (
        'code' => 'CO',
        'name' => 'Copenhagen',
      ),
      4 => 
      array (
        'code' => 'FO',
        'name' => 'Faroe Islands',
      ),
      5 => 
      array (
        'code' => 'FR',
        'name' => 'Frederiksborg',
      ),
      6 => 
      array (
        'code' => 'FY',
        'name' => 'Fyn',
      ),
      7 => 
      array (
        'code' => 'KO',
        'name' => 'Kobenhavn',
      ),
      8 => 
      array (
        'code' => 'NO',
        'name' => 'Nordjylland',
      ),
      9 => 
      array (
        'code' => 'RI',
        'name' => 'Ribe',
      ),
      10 => 
      array (
        'code' => 'RK',
        'name' => 'Ringkobing',
      ),
      11 => 
      array (
        'code' => 'RO',
        'name' => 'Roskilde',
      ),
      12 => 
      array (
        'code' => 'SO',
        'name' => 'Sonderjylland',
      ),
      13 => 
      array (
        'code' => 'ST',
        'name' => 'Storstrom',
      ),
      14 => 
      array (
        'code' => 'VK',
        'name' => 'Vejle',
      ),
      15 => 
      array (
        'code' => 'VJ',
        'name' => 'Vestjælland',
      ),
      16 => 
      array (
        'code' => 'VB',
        'name' => 'Viborg',
      ),
    ),
    'DM' => 
    array (
      1 => 
      array (
        'code' => 'AND',
        'name' => 'Saint Andrew Parish',
      ),
      2 => 
      array (
        'code' => 'DAV',
        'name' => 'Saint David Parish',
      ),
      3 => 
      array (
        'code' => 'GEO',
        'name' => 'Saint George Parish',
      ),
      4 => 
      array (
        'code' => 'JOH',
        'name' => 'Saint John Parish',
      ),
      5 => 
      array (
        'code' => 'JOS',
        'name' => 'Saint Joseph Parish',
      ),
      6 => 
      array (
        'code' => 'LUK',
        'name' => 'Saint Luke Parish',
      ),
      7 => 
      array (
        'code' => 'MAR',
        'name' => 'Saint Mark Parish',
      ),
      8 => 
      array (
        'code' => 'PAT',
        'name' => 'Saint Patrick Parish',
      ),
      9 => 
      array (
        'code' => 'PAU',
        'name' => 'Saint Paul Parish',
      ),
      10 => 
      array (
        'code' => 'PET',
        'name' => 'Saint Peter Parish',
      ),
    ),
    'DO' => 
    array (
      1 => 
      array (
        'code' => 'DN',
        'name' => 'Distrito Nacional',
      ),
      2 => 
      array (
        'code' => 'AZ',
        'name' => 'Azua',
      ),
      3 => 
      array (
        'code' => 'BC',
        'name' => 'Baoruco',
      ),
      4 => 
      array (
        'code' => 'BH',
        'name' => 'Barahona',
      ),
      5 => 
      array (
        'code' => 'DJ',
        'name' => 'Dajabon',
      ),
      6 => 
      array (
        'code' => 'DU',
        'name' => 'Duarte',
      ),
      7 => 
      array (
        'code' => 'EL',
        'name' => 'Elias Pina',
      ),
      8 => 
      array (
        'code' => 'SY',
        'name' => 'El Seybo',
      ),
      9 => 
      array (
        'code' => 'ET',
        'name' => 'Espaillat',
      ),
      10 => 
      array (
        'code' => 'HM',
        'name' => 'Hato Mayor',
      ),
      11 => 
      array (
        'code' => 'IN',
        'name' => 'Independencia',
      ),
      12 => 
      array (
        'code' => 'AL',
        'name' => 'La Altagracia',
      ),
      13 => 
      array (
        'code' => 'RO',
        'name' => 'La Romana',
      ),
      14 => 
      array (
        'code' => 'VE',
        'name' => 'La Vega',
      ),
      15 => 
      array (
        'code' => 'MT',
        'name' => 'Maria Trinidad Sanchez',
      ),
      16 => 
      array (
        'code' => 'MN',
        'name' => 'Monsenor Nouel',
      ),
      17 => 
      array (
        'code' => 'MC',
        'name' => 'Monte Cristi',
      ),
      18 => 
      array (
        'code' => 'MP',
        'name' => 'Monte Plata',
      ),
      19 => 
      array (
        'code' => 'PD',
        'name' => 'Pedernales',
      ),
      20 => 
      array (
        'code' => 'PR',
        'name' => 'Peravia (Bani)',
      ),
      21 => 
      array (
        'code' => 'PP',
        'name' => 'Puerto Plata',
      ),
      22 => 
      array (
        'code' => 'SL',
        'name' => 'Salcedo',
      ),
      23 => 
      array (
        'code' => 'SM',
        'name' => 'Samana',
      ),
      24 => 
      array (
        'code' => 'SH',
        'name' => 'Sanchez Ramirez',
      ),
      25 => 
      array (
        'code' => 'SC',
        'name' => 'San Cristobal',
      ),
      26 => 
      array (
        'code' => 'JO',
        'name' => 'San Jose de Ocoa',
      ),
      27 => 
      array (
        'code' => 'SJ',
        'name' => 'San Juan',
      ),
      28 => 
      array (
        'code' => 'PM',
        'name' => 'San Pedro de Macoris',
      ),
      29 => 
      array (
        'code' => 'SA',
        'name' => 'Santiago',
      ),
      30 => 
      array (
        'code' => 'ST',
        'name' => 'Santiago Rodriguez',
      ),
      31 => 
      array (
        'code' => 'SD',
        'name' => 'Santo Domingo',
      ),
      32 => 
      array (
        'code' => 'VA',
        'name' => 'Valverde',
      ),
    ),
    'DZ' => 
    array (
      1 => 
      array (
        'code' => 'ADE',
        'name' => 'Ain Defla',
      ),
      2 => 
      array (
        'code' => 'ADR',
        'name' => 'Adrar',
      ),
      3 => 
      array (
        'code' => 'ALG',
        'name' => 'Alger',
      ),
      4 => 
      array (
        'code' => 'ANN',
        'name' => 'Annaba',
      ),
      5 => 
      array (
        'code' => 'ATE',
        'name' => 'Ain Temouchent',
      ),
      6 => 
      array (
        'code' => 'BAT',
        'name' => 'Batna',
      ),
      7 => 
      array (
        'code' => 'BBA',
        'name' => 'Bordj Bou Arreridj',
      ),
      8 => 
      array (
        'code' => 'BEC',
        'name' => 'Bechar',
      ),
      9 => 
      array (
        'code' => 'BEJ',
        'name' => 'Bejaia',
      ),
      10 => 
      array (
        'code' => 'BIS',
        'name' => 'Biskra',
      ),
      11 => 
      array (
        'code' => 'BLI',
        'name' => 'Blida',
      ),
      12 => 
      array (
        'code' => 'BMD',
        'name' => 'Boumerdes',
      ),
      13 => 
      array (
        'code' => 'BOA',
        'name' => 'Bouira',
      ),
      14 => 
      array (
        'code' => 'CHL',
        'name' => 'Chlef',
      ),
      15 => 
      array (
        'code' => 'CON',
        'name' => 'Constantine',
      ),
      16 => 
      array (
        'code' => 'DJE',
        'name' => 'Djelfa',
      ),
      17 => 
      array (
        'code' => 'EBA',
        'name' => 'El Bayadh',
      ),
      18 => 
      array (
        'code' => 'EOU',
        'name' => 'El Oued',
      ),
      19 => 
      array (
        'code' => 'ETA',
        'name' => 'El Tarf',
      ),
      20 => 
      array (
        'code' => 'GHA',
        'name' => 'Ghardaia',
      ),
      21 => 
      array (
        'code' => 'GUE',
        'name' => 'Guelma',
      ),
      22 => 
      array (
        'code' => 'ILL',
        'name' => 'Illizi',
      ),
      23 => 
      array (
        'code' => 'JIJ',
        'name' => 'Jijel',
      ),
      24 => 
      array (
        'code' => 'KHE',
        'name' => 'Khenchela',
      ),
      25 => 
      array (
        'code' => 'LAG',
        'name' => 'Laghouat',
      ),
      26 => 
      array (
        'code' => 'MED',
        'name' => 'Medea',
      ),
      27 => 
      array (
        'code' => 'MIL',
        'name' => 'Mila',
      ),
      28 => 
      array (
        'code' => 'MOS',
        'name' => 'Mostaganem',
      ),
      29 => 
      array (
        'code' => 'MSI',
        'name' => 'M&#39;Sila',
      ),
      30 => 
      array (
        'code' => 'MUA',
        'name' => 'Muaskar',
      ),
      31 => 
      array (
        'code' => 'NAA',
        'name' => 'Naama',
      ),
      32 => 
      array (
        'code' => 'OEB',
        'name' => 'Oum el-Bouaghi',
      ),
      33 => 
      array (
        'code' => 'ORA',
        'name' => 'Oran',
      ),
      34 => 
      array (
        'code' => 'OUA',
        'name' => 'Ouargla',
      ),
      35 => 
      array (
        'code' => 'REL',
        'name' => 'Relizane',
      ),
      36 => 
      array (
        'code' => 'SAH',
        'name' => 'Souk Ahras',
      ),
      37 => 
      array (
        'code' => 'SAI',
        'name' => 'Saida',
      ),
      38 => 
      array (
        'code' => 'SBA',
        'name' => 'Sidi Bel Abbes',
      ),
      39 => 
      array (
        'code' => 'SET',
        'name' => 'Setif',
      ),
      40 => 
      array (
        'code' => 'SKI',
        'name' => 'Skikda',
      ),
      41 => 
      array (
        'code' => 'TAM',
        'name' => 'Tamanghasset',
      ),
      42 => 
      array (
        'code' => 'TEB',
        'name' => 'Tebessa',
      ),
      43 => 
      array (
        'code' => 'TIA',
        'name' => 'Tiaret',
      ),
      44 => 
      array (
        'code' => 'TIN',
        'name' => 'Tindouf',
      ),
      45 => 
      array (
        'code' => 'TIP',
        'name' => 'Tipaza',
      ),
      46 => 
      array (
        'code' => 'TIS',
        'name' => 'Tissemsilt',
      ),
      47 => 
      array (
        'code' => 'TLE',
        'name' => 'Tlemcen',
      ),
      48 => 
      array (
        'code' => 'TOU',
        'name' => 'Tizi Ouzou',
      ),
    ),
    'EC' => 
    array (
      1 => 
      array (
        'code' => 'AZU',
        'name' => 'Azuay',
      ),
      2 => 
      array (
        'code' => 'BOL',
        'name' => 'Bolivar',
      ),
      3 => 
      array (
        'code' => 'CAN',
        'name' => 'Cañar',
      ),
      4 => 
      array (
        'code' => 'CAR',
        'name' => 'Carchi',
      ),
      5 => 
      array (
        'code' => 'CHI',
        'name' => 'Chimborazo',
      ),
      6 => 
      array (
        'code' => 'COT',
        'name' => 'Cotopaxi',
      ),
      7 => 
      array (
        'code' => 'EOR',
        'name' => 'El Oro',
      ),
      8 => 
      array (
        'code' => 'ESM',
        'name' => 'Esmeraldas',
      ),
      9 => 
      array (
        'code' => 'GPS',
        'name' => 'Galápagos',
      ),
      10 => 
      array (
        'code' => 'GUA',
        'name' => 'Guayas',
      ),
      11 => 
      array (
        'code' => 'IMB',
        'name' => 'Imbabura',
      ),
      12 => 
      array (
        'code' => 'LOJ',
        'name' => 'Loja',
      ),
      13 => 
      array (
        'code' => 'LRO',
        'name' => 'Los Ríos',
      ),
      14 => 
      array (
        'code' => 'MAN',
        'name' => 'Manabí',
      ),
      15 => 
      array (
        'code' => 'MSA',
        'name' => 'Morona Santiago',
      ),
      16 => 
      array (
        'code' => 'NAP',
        'name' => 'Napo',
      ),
      17 => 
      array (
        'code' => 'ORE',
        'name' => 'Orellana',
      ),
      18 => 
      array (
        'code' => 'PAS',
        'name' => 'Pastaza',
      ),
      19 => 
      array (
        'code' => 'PIC',
        'name' => 'Pichincha',
      ),
      20 => 
      array (
        'code' => 'SUC',
        'name' => 'Sucumbíos',
      ),
      21 => 
      array (
        'code' => 'TUN',
        'name' => 'Tungurahua',
      ),
      22 => 
      array (
        'code' => 'ZCH',
        'name' => 'Zamora Chinchipe',
      ),
    ),
    'EE' => 
    array (
      1 => 
      array (
        'code' => 'HA',
        'name' => 'Harjumaa (Tallinn)',
      ),
      2 => 
      array (
        'code' => 'HI',
        'name' => 'Hiiumaa (Kardla)',
      ),
      3 => 
      array (
        'code' => 'IV',
        'name' => 'Ida-Virumaa (Johvi)',
      ),
      4 => 
      array (
        'code' => 'JA',
        'name' => 'Jarvamaa (Paide)',
      ),
      5 => 
      array (
        'code' => 'JO',
        'name' => 'Jogevamaa (Jogeva)',
      ),
      6 => 
      array (
        'code' => 'LV',
        'name' => 'Laane-Virumaa (Rakvere)',
      ),
      7 => 
      array (
        'code' => 'LA',
        'name' => 'Laanemaa (Haapsalu)',
      ),
      8 => 
      array (
        'code' => 'PA',
        'name' => 'Parnumaa (Parnu)',
      ),
      9 => 
      array (
        'code' => 'PO',
        'name' => 'Polvamaa (Polva)',
      ),
      10 => 
      array (
        'code' => 'RA',
        'name' => 'Raplamaa (Rapla)',
      ),
      11 => 
      array (
        'code' => 'SA',
        'name' => 'Saaremaa (Kuessaare)',
      ),
      12 => 
      array (
        'code' => 'TA',
        'name' => 'Tartumaa (Tartu)',
      ),
      13 => 
      array (
        'code' => 'VA',
        'name' => 'Valgamaa (Valga)',
      ),
      14 => 
      array (
        'code' => 'VI',
        'name' => 'Viljandimaa (Viljandi)',
      ),
      15 => 
      array (
        'code' => 'VO',
        'name' => 'Vorumaa (Voru)',
      ),
    ),
    'EG' => 
    array (
      1 => 
      array (
        'code' => 'DHY',
        'name' => 'Ad Daqahliyah',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'Al Bahr al Ahmar',
      ),
      3 => 
      array (
        'code' => 'BHY',
        'name' => 'Al Buhayrah',
      ),
      4 => 
      array (
        'code' => 'FYM',
        'name' => 'Al Fayyum',
      ),
      5 => 
      array (
        'code' => 'GBY',
        'name' => 'Al Gharbiyah',
      ),
      6 => 
      array (
        'code' => 'IDR',
        'name' => 'Al Iskandariyah',
      ),
      7 => 
      array (
        'code' => 'IML',
        'name' => 'Al Isma &#39;iliyah',
      ),
      8 => 
      array (
        'code' => 'JZH',
        'name' => 'Al Jizah',
      ),
      9 => 
      array (
        'code' => 'MFY',
        'name' => 'Al Minufiyah',
      ),
      10 => 
      array (
        'code' => 'MNY',
        'name' => 'Al Minya',
      ),
      11 => 
      array (
        'code' => 'QHR',
        'name' => 'Al Qahirah',
      ),
      12 => 
      array (
        'code' => 'QLY',
        'name' => 'Al Qalyubiyah',
      ),
      13 => 
      array (
        'code' => 'WJD',
        'name' => 'Al Wadi al Jadid',
      ),
      14 => 
      array (
        'code' => 'SHQ',
        'name' => 'Ash Sharqiyah',
      ),
      15 => 
      array (
        'code' => 'SWY',
        'name' => 'As Suways',
      ),
      16 => 
      array (
        'code' => 'ASW',
        'name' => 'Aswan',
      ),
      17 => 
      array (
        'code' => 'ASY',
        'name' => 'Asyut',
      ),
      18 => 
      array (
        'code' => 'BSW',
        'name' => 'Bani Suwayf',
      ),
      19 => 
      array (
        'code' => 'BSD',
        'name' => 'Bur Sa&#39;id',
      ),
      20 => 
      array (
        'code' => 'DMY',
        'name' => 'Dumyat',
      ),
      21 => 
      array (
        'code' => 'JNS',
        'name' => 'Janub Sina&#39;',
      ),
      22 => 
      array (
        'code' => 'KSH',
        'name' => 'Kafr ash Shaykh',
      ),
      23 => 
      array (
        'code' => 'MAT',
        'name' => 'Matruh',
      ),
      24 => 
      array (
        'code' => 'QIN',
        'name' => 'Qina',
      ),
      25 => 
      array (
        'code' => 'SHS',
        'name' => 'Shamal Sina&#39;',
      ),
      26 => 
      array (
        'code' => 'SUH',
        'name' => 'Suhaj',
      ),
    ),
    'ER' => 
    array (
      1 => 
      array (
        'code' => 'MA',
        'name' => 'Central (Maekel)',
      ),
      2 => 
      array (
        'code' => 'KE',
        'name' => 'Anseba (Keren)',
      ),
      3 => 
      array (
        'code' => 'DK',
        'name' => 'Southern Red Sea (Debub-Keih-Bah)',
      ),
      4 => 
      array (
        'code' => 'SK',
        'name' => 'Northern Red Sea (Semien-Keih-Ba)',
      ),
      5 => 
      array (
        'code' => 'DE',
        'name' => 'Southern (Debub)',
      ),
      6 => 
      array (
        'code' => 'BR',
        'name' => 'Gash-Barka (Barentu)',
      ),
    ),
    'ET' => 
    array (
      1 => 
      array (
        'code' => 'AF',
        'name' => 'Afar',
      ),
      2 => 
      array (
        'code' => 'AH',
        'name' => 'Amhara',
      ),
      3 => 
      array (
        'code' => 'BG',
        'name' => 'Benishangul-Gumaz',
      ),
      4 => 
      array (
        'code' => 'GB',
        'name' => 'Gambela',
      ),
      5 => 
      array (
        'code' => 'HR',
        'name' => 'Hariai',
      ),
      6 => 
      array (
        'code' => 'OR',
        'name' => 'Oromia',
      ),
      7 => 
      array (
        'code' => 'SM',
        'name' => 'Somali',
      ),
      8 => 
      array (
        'code' => 'SN',
        'name' => 'Southern Nations - Nationalities',
      ),
      9 => 
      array (
        'code' => 'TG',
        'name' => 'Tigray',
      ),
      10 => 
      array (
        'code' => 'AA',
        'name' => 'Addis Ababa',
      ),
      11 => 
      array (
        'code' => 'DD',
        'name' => 'Dire Dawa',
      ),
    ),
    'FI' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Ahvenanmaan Laani',
      ),
      2 => 
      array (
        'code' => 'ES',
        'name' => 'Etela-Suomen Laani',
      ),
      3 => 
      array (
        'code' => 'IS',
        'name' => 'Ita-Suomen Laani',
      ),
      4 => 
      array (
        'code' => 'LS',
        'name' => 'Lansi-Suomen Laani',
      ),
      5 => 
      array (
        'code' => 'LA',
        'name' => 'Lapin Lanani',
      ),
      6 => 
      array (
        'code' => 'OU',
        'name' => 'Oulun Laani',
      ),
    ),
    'FJ' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => 'Central Division',
      ),
      2 => 
      array (
        'code' => 'E',
        'name' => 'Eastern Division',
      ),
      3 => 
      array (
        'code' => 'N',
        'name' => 'Northern Division',
      ),
      4 => 
      array (
        'code' => 'R',
        'name' => 'Rotuma',
      ),
      5 => 
      array (
        'code' => 'W',
        'name' => 'Western Division',
      ),
    ),
    'FM' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'FO' => 
    array (
      1 => 
      array (
        'code' => 'TÛR',
        'name' => 'Tûrshavnar Kommuna',
      ),
      2 => 
      array (
        'code' => 'KLA',
        'name' => 'Klaksvík',
      ),
      3 => 
      array (
        'code' => 'RUN',
        'name' => 'Runavík',
      ),
      4 => 
      array (
        'code' => 'TVØ',
        'name' => 'Tvøroyri',
      ),
      5 => 
      array (
        'code' => 'FUG',
        'name' => 'Fuglafjørður',
      ),
      6 => 
      array (
        'code' => 'SUN',
        'name' => 'Sunda Kommuna',
      ),
      7 => 
      array (
        'code' => 'VáG',
        'name' => 'Vágur',
      ),
      8 => 
      array (
        'code' => 'NES',
        'name' => 'Nes',
      ),
      9 => 
      array (
        'code' => 'VES',
        'name' => 'Vestmanna',
      ),
      10 => 
      array (
        'code' => 'MIð',
        'name' => 'Miðvágur',
      ),
      11 => 
      array (
        'code' => 'SØR',
        'name' => 'Sørvágur',
      ),
      12 => 
      array (
        'code' => 'GØT',
        'name' => 'Gøtu Kommuna',
      ),
      13 => 
      array (
        'code' => 'SJû',
        'name' => 'Sjûvar Kommuna',
      ),
      14 => 
      array (
        'code' => 'LEI',
        'name' => 'Leirvík',
      ),
      15 => 
      array (
        'code' => 'SAN',
        'name' => 'Sandavágur',
      ),
      16 => 
      array (
        'code' => 'HVA',
        'name' => 'Hvalba',
      ),
      17 => 
      array (
        'code' => 'EIð',
        'name' => 'Eiði',
      ),
      18 => 
      array (
        'code' => 'KVí',
        'name' => 'Kvívík',
      ),
      19 => 
      array (
        'code' => 'SAN',
        'name' => 'Sandur',
      ),
      20 => 
      array (
        'code' => 'SKO',
        'name' => 'Skopun',
      ),
      21 => 
      array (
        'code' => 'HVA',
        'name' => 'Hvannasund',
      ),
      22 => 
      array (
        'code' => 'SUM',
        'name' => 'Sumba',
      ),
      23 => 
      array (
        'code' => 'VIð',
        'name' => 'Viðareiði',
      ),
      24 => 
      array (
        'code' => 'POR',
        'name' => 'Porkeri',
      ),
      25 => 
      array (
        'code' => 'SKá',
        'name' => 'Skálavík',
      ),
      26 => 
      array (
        'code' => 'KUN',
        'name' => 'Kunoy',
      ),
      27 => 
      array (
        'code' => 'HÚS',
        'name' => 'HÚsavík',
      ),
      28 => 
      array (
        'code' => 'HOV',
        'name' => 'Hov',
      ),
      29 => 
      array (
        'code' => 'FáM',
        'name' => 'Fámjin',
      ),
      30 => 
      array (
        'code' => 'FUN',
        'name' => 'Funningur',
      ),
      31 => 
      array (
        'code' => 'HÚS',
        'name' => 'HÚsar',
      ),
      32 => 
      array (
        'code' => 'SKÚ',
        'name' => 'SkÚvoy',
      ),
      33 => 
      array (
        'code' => 'SVí',
        'name' => 'Svínoy',
      ),
      34 => 
      array (
        'code' => 'FUG',
        'name' => 'Fugloy',
      ),
    ),
    'FR' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Alsace',
      ),
      2 => 
      array (
        'code' => 'AQ',
        'name' => 'Aquitaine',
      ),
      3 => 
      array (
        'code' => 'AU',
        'name' => 'Auvergne',
      ),
      4 => 
      array (
        'code' => 'BR',
        'name' => 'Brittany',
      ),
      5 => 
      array (
        'code' => 'BU',
        'name' => 'Burgundy',
      ),
      6 => 
      array (
        'code' => 'CE',
        'name' => 'Center Loire Valley',
      ),
      7 => 
      array (
        'code' => 'CH',
        'name' => 'Champagne',
      ),
      8 => 
      array (
        'code' => 'CO',
        'name' => 'Corse',
      ),
      9 => 
      array (
        'code' => 'FR',
        'name' => 'France Comte',
      ),
      10 => 
      array (
        'code' => 'LA',
        'name' => 'Languedoc Roussillon',
      ),
      11 => 
      array (
        'code' => 'LI',
        'name' => 'Limousin',
      ),
      12 => 
      array (
        'code' => 'LO',
        'name' => 'Lorraine',
      ),
      13 => 
      array (
        'code' => 'MI',
        'name' => 'Midi Pyrenees',
      ),
      14 => 
      array (
        'code' => 'NO',
        'name' => 'Nord Pas de Calais',
      ),
      15 => 
      array (
        'code' => 'NR',
        'name' => 'Normandy',
      ),
      16 => 
      array (
        'code' => 'PA',
        'name' => 'Paris / Ile de France',
      ),
      17 => 
      array (
        'code' => 'PI',
        'name' => 'Picardie',
      ),
      18 => 
      array (
        'code' => 'PO',
        'name' => 'Poitou Charente',
      ),
      19 => 
      array (
        'code' => 'PR',
        'name' => 'Provence',
      ),
      20 => 
      array (
        'code' => 'RH',
        'name' => 'Rhone Alps',
      ),
      21 => 
      array (
        'code' => 'RI',
        'name' => 'Riviera',
      ),
      22 => 
      array (
        'code' => 'WE',
        'name' => 'Western Loire Valley',
      ),
    ),
    'FX' => 
    array (
      1 => 
      array (
        'code' => 'Et',
        'name' => 'Etranger',
      ),
      2 => 
      array (
        'code' => '01',
        'name' => 'Ain',
      ),
      3 => 
      array (
        'code' => '02',
        'name' => 'Aisne',
      ),
      4 => 
      array (
        'code' => '03',
        'name' => 'Allier',
      ),
      5 => 
      array (
        'code' => '04',
        'name' => 'Alpes de Haute Provence',
      ),
      6 => 
      array (
        'code' => '05',
        'name' => 'Hautes-Alpes',
      ),
      7 => 
      array (
        'code' => '06',
        'name' => 'Alpes Maritimes',
      ),
      8 => 
      array (
        'code' => '07',
        'name' => 'Ardèche',
      ),
      9 => 
      array (
        'code' => '08',
        'name' => 'Ardennes',
      ),
      10 => 
      array (
        'code' => '09',
        'name' => 'Ariège',
      ),
      11 => 
      array (
        'code' => '10',
        'name' => 'Aube',
      ),
      12 => 
      array (
        'code' => '11',
        'name' => 'Aude',
      ),
      13 => 
      array (
        'code' => '12',
        'name' => 'Aveyron',
      ),
      14 => 
      array (
        'code' => '13',
        'name' => 'Bouches du Rhône',
      ),
      15 => 
      array (
        'code' => '14',
        'name' => 'Calvados',
      ),
      16 => 
      array (
        'code' => '15',
        'name' => 'Cantal',
      ),
      17 => 
      array (
        'code' => '16',
        'name' => 'Charente',
      ),
      18 => 
      array (
        'code' => '17',
        'name' => 'Charente Maritime',
      ),
      19 => 
      array (
        'code' => '18',
        'name' => 'Cher',
      ),
      20 => 
      array (
        'code' => '19',
        'name' => 'Corrèze',
      ),
      21 => 
      array (
        'code' => '2A',
        'name' => 'Corse du Sud',
      ),
      22 => 
      array (
        'code' => '2B',
        'name' => 'Haute Corse',
      ),
      23 => 
      array (
        'code' => '21',
        'name' => 'Côte d&#39;or',
      ),
      24 => 
      array (
        'code' => '22',
        'name' => 'Côtes d&#39;Armor',
      ),
      25 => 
      array (
        'code' => '23',
        'name' => 'Creuse',
      ),
      26 => 
      array (
        'code' => '24',
        'name' => 'Dordogne',
      ),
      27 => 
      array (
        'code' => '25',
        'name' => 'Doubs',
      ),
      28 => 
      array (
        'code' => '26',
        'name' => 'Drôme',
      ),
      29 => 
      array (
        'code' => '27',
        'name' => 'Eure',
      ),
      30 => 
      array (
        'code' => '28',
        'name' => 'Eure et Loir',
      ),
      31 => 
      array (
        'code' => '29',
        'name' => 'Finistère',
      ),
      32 => 
      array (
        'code' => '30',
        'name' => 'Gard',
      ),
      33 => 
      array (
        'code' => '31',
        'name' => 'Haute Garonne',
      ),
      34 => 
      array (
        'code' => '32',
        'name' => 'Gers',
      ),
      35 => 
      array (
        'code' => '33',
        'name' => 'Gironde',
      ),
      36 => 
      array (
        'code' => '34',
        'name' => 'Hérault',
      ),
      37 => 
      array (
        'code' => '35',
        'name' => 'Ille et Vilaine',
      ),
      38 => 
      array (
        'code' => '36',
        'name' => 'Indre',
      ),
      39 => 
      array (
        'code' => '37',
        'name' => 'Indre et Loire',
      ),
      40 => 
      array (
        'code' => '38',
        'name' => 'Isére',
      ),
      41 => 
      array (
        'code' => '39',
        'name' => 'Jura',
      ),
      42 => 
      array (
        'code' => '40',
        'name' => 'Landes',
      ),
      43 => 
      array (
        'code' => '41',
        'name' => 'Loir et Cher',
      ),
      44 => 
      array (
        'code' => '42',
        'name' => 'Loire',
      ),
      45 => 
      array (
        'code' => '43',
        'name' => 'Haute Loire',
      ),
      46 => 
      array (
        'code' => '44',
        'name' => 'Loire Atlantique',
      ),
      47 => 
      array (
        'code' => '45',
        'name' => 'Loiret',
      ),
      48 => 
      array (
        'code' => '46',
        'name' => 'Lot',
      ),
      49 => 
      array (
        'code' => '47',
        'name' => 'Lot et Garonne',
      ),
      50 => 
      array (
        'code' => '48',
        'name' => 'Lozère',
      ),
      51 => 
      array (
        'code' => '49',
        'name' => 'Maine et Loire',
      ),
      52 => 
      array (
        'code' => '50',
        'name' => 'Manche',
      ),
      53 => 
      array (
        'code' => '51',
        'name' => 'Marne',
      ),
      54 => 
      array (
        'code' => '52',
        'name' => 'Haute Marne',
      ),
      55 => 
      array (
        'code' => '53',
        'name' => 'Mayenne',
      ),
      56 => 
      array (
        'code' => '54',
        'name' => 'Meurthe et Moselle',
      ),
      57 => 
      array (
        'code' => '55',
        'name' => 'Meuse',
      ),
      58 => 
      array (
        'code' => '56',
        'name' => 'Morbihan',
      ),
      59 => 
      array (
        'code' => '57',
        'name' => 'Moselle',
      ),
      60 => 
      array (
        'code' => '58',
        'name' => 'Nièvre',
      ),
      61 => 
      array (
        'code' => '59',
        'name' => 'Nord',
      ),
      62 => 
      array (
        'code' => '60',
        'name' => 'Oise',
      ),
      63 => 
      array (
        'code' => '61',
        'name' => 'Orne',
      ),
      64 => 
      array (
        'code' => '62',
        'name' => 'Pas de Calais',
      ),
      65 => 
      array (
        'code' => '63',
        'name' => 'Puy de Dôme',
      ),
      66 => 
      array (
        'code' => '64',
        'name' => 'Pyrenees Atlantique',
      ),
      67 => 
      array (
        'code' => '65',
        'name' => 'Hautes Pyrenees',
      ),
      68 => 
      array (
        'code' => '66',
        'name' => 'Pyrenees Orientale',
      ),
      69 => 
      array (
        'code' => '67',
        'name' => 'Bas Rhin',
      ),
      70 => 
      array (
        'code' => '68',
        'name' => 'Haut Rhin',
      ),
      71 => 
      array (
        'code' => '69',
        'name' => 'Rhône',
      ),
      72 => 
      array (
        'code' => '70',
        'name' => 'Haute Saône',
      ),
      73 => 
      array (
        'code' => '71',
        'name' => 'Saône et Loire',
      ),
      74 => 
      array (
        'code' => '72',
        'name' => 'Sarthe',
      ),
      75 => 
      array (
        'code' => '73',
        'name' => 'Savoie',
      ),
      76 => 
      array (
        'code' => '74',
        'name' => 'Haute Savoie',
      ),
      77 => 
      array (
        'code' => '75',
        'name' => 'Paris',
      ),
      78 => 
      array (
        'code' => '76',
        'name' => 'Seine Martitime',
      ),
      79 => 
      array (
        'code' => '77',
        'name' => 'Seine et Marne',
      ),
      80 => 
      array (
        'code' => '78',
        'name' => 'Yvelines',
      ),
      81 => 
      array (
        'code' => '79',
        'name' => 'Deux Sèvres',
      ),
      82 => 
      array (
        'code' => '80',
        'name' => 'Somme',
      ),
      83 => 
      array (
        'code' => '81',
        'name' => 'Tarn',
      ),
      84 => 
      array (
        'code' => '82',
        'name' => 'Tarn et Garonne',
      ),
      85 => 
      array (
        'code' => '83',
        'name' => 'Var',
      ),
      86 => 
      array (
        'code' => '84',
        'name' => 'Vaucluse',
      ),
      87 => 
      array (
        'code' => '85',
        'name' => 'Vendée',
      ),
      88 => 
      array (
        'code' => '86',
        'name' => 'Vienne',
      ),
      89 => 
      array (
        'code' => '87',
        'name' => 'Haute Vienne',
      ),
      90 => 
      array (
        'code' => '88',
        'name' => 'Vosges',
      ),
      91 => 
      array (
        'code' => '89',
        'name' => 'Yonne',
      ),
      92 => 
      array (
        'code' => '90',
        'name' => 'Territoire de Belfort',
      ),
      93 => 
      array (
        'code' => '91',
        'name' => 'Essonne',
      ),
      94 => 
      array (
        'code' => '92',
        'name' => 'Hauts de Seine',
      ),
      95 => 
      array (
        'code' => '93',
        'name' => 'Seine St-Denis',
      ),
      96 => 
      array (
        'code' => '94',
        'name' => 'Val de Marne',
      ),
      97 => 
      array (
        'code' => '95',
        'name' => 'Val d&#39;oise',
      ),
    ),
    'GA' => 
    array (
      1 => 
      array (
        'code' => 'ES',
        'name' => 'Estuaire',
      ),
      2 => 
      array (
        'code' => 'HO',
        'name' => 'Haut-Ogooue',
      ),
      3 => 
      array (
        'code' => 'MO',
        'name' => 'Moyen-Ogooue',
      ),
      4 => 
      array (
        'code' => 'NG',
        'name' => 'Ngounie',
      ),
      5 => 
      array (
        'code' => 'NY',
        'name' => 'Nyanga',
      ),
      6 => 
      array (
        'code' => 'OI',
        'name' => 'Ogooue-Ivindo',
      ),
      7 => 
      array (
        'code' => 'OL',
        'name' => 'Ogooue-Lolo',
      ),
      8 => 
      array (
        'code' => 'OM',
        'name' => 'Ogooue-Maritime',
      ),
      9 => 
      array (
        'code' => 'WN',
        'name' => 'Woleu-Ntem',
      ),
    ),
    'GE' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Abkhazia',
      ),
      2 => 
      array (
        'code' => 'AJ',
        'name' => 'Ajaria',
      ),
      3 => 
      array (
        'code' => 'GU',
        'name' => 'Guria',
      ),
      4 => 
      array (
        'code' => 'IM',
        'name' => 'Imereti',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'Kakheti',
      ),
      6 => 
      array (
        'code' => 'KK',
        'name' => 'Kvemo Kartli',
      ),
      7 => 
      array (
        'code' => 'MM',
        'name' => 'Mtskheta-Mtianeti',
      ),
      8 => 
      array (
        'code' => 'RL',
        'name' => 'Racha Lechkhumi and Kvemo Svanet',
      ),
      9 => 
      array (
        'code' => 'SJ',
        'name' => 'Samtskhe-Javakheti',
      ),
      10 => 
      array (
        'code' => 'SK',
        'name' => 'Shida Kartli',
      ),
      11 => 
      array (
        'code' => 'SZ',
        'name' => 'Samegrelo-Zemo Svaneti',
      ),
      12 => 
      array (
        'code' => 'TB',
        'name' => 'Tbilisi',
      ),
    ),
    'GF' => 
    array (
      1 => 
      array (
        'code' => 'AWA',
        'name' => 'Awala-Yalimapo',
      ),
      2 => 
      array (
        'code' => 'MAN',
        'name' => 'Mana',
      ),
      3 => 
      array (
        'code' => 'SAI',
        'name' => 'Saint-Laurent-Du-Maroni',
      ),
      4 => 
      array (
        'code' => 'APA',
        'name' => 'Apatou',
      ),
      5 => 
      array (
        'code' => 'GRA',
        'name' => 'Grand-Santi',
      ),
      6 => 
      array (
        'code' => 'PAP',
        'name' => 'Papaïchton',
      ),
      7 => 
      array (
        'code' => 'SAÜ',
        'name' => 'SaÜl',
      ),
      8 => 
      array (
        'code' => 'MAR',
        'name' => 'Maripasoula',
      ),
      9 => 
      array (
        'code' => 'CAM',
        'name' => 'Camopi',
      ),
      10 => 
      array (
        'code' => 'SAI',
        'name' => 'Saint-Georges',
      ),
      11 => 
      array (
        'code' => 'OUA',
        'name' => 'Ouanary',
      ),
      12 => 
      array (
        'code' => 'RéG',
        'name' => 'Régina',
      ),
      13 => 
      array (
        'code' => 'ROU',
        'name' => 'Roura',
      ),
      14 => 
      array (
        'code' => 'SAI',
        'name' => 'Saint-élie',
      ),
      15 => 
      array (
        'code' => 'IRA',
        'name' => 'Iracoubo',
      ),
      16 => 
      array (
        'code' => 'SIN',
        'name' => 'Sinnamary',
      ),
      17 => 
      array (
        'code' => 'KOU',
        'name' => 'Kourou',
      ),
      18 => 
      array (
        'code' => 'MAC',
        'name' => 'Macouria',
      ),
      19 => 
      array (
        'code' => 'MON',
        'name' => 'Montsinéry-Tonnegrande',
      ),
      20 => 
      array (
        'code' => 'MAT',
        'name' => 'Matoury',
      ),
      21 => 
      array (
        'code' => 'CAY',
        'name' => 'Cayenne',
      ),
      22 => 
      array (
        'code' => 'REM',
        'name' => 'Remire-Montjoly',
      ),
    ),
    'GH' => 
    array (
      1 => 
      array (
        'code' => 'AS',
        'name' => 'Ashanti Region',
      ),
      2 => 
      array (
        'code' => 'BA',
        'name' => 'Brong-Ahafo Region',
      ),
      3 => 
      array (
        'code' => 'CE',
        'name' => 'Central Region',
      ),
      4 => 
      array (
        'code' => 'EA',
        'name' => 'Eastern Region',
      ),
      5 => 
      array (
        'code' => 'GA',
        'name' => 'Greater Accra Region',
      ),
      6 => 
      array (
        'code' => 'NO',
        'name' => 'Northern Region',
      ),
      7 => 
      array (
        'code' => 'UE',
        'name' => 'Upper East Region',
      ),
      8 => 
      array (
        'code' => 'UW',
        'name' => 'Upper West Region',
      ),
      9 => 
      array (
        'code' => 'VO',
        'name' => 'Volta Region',
      ),
      10 => 
      array (
        'code' => 'WE',
        'name' => 'Western Region',
      ),
    ),
    'GI' => 
    array (
      1 => 
      array (
        'code' => 'EAS',
        'name' => 'East Side',
      ),
      2 => 
      array (
        'code' => 'NOR',
        'name' => 'North District',
      ),
      3 => 
      array (
        'code' => 'REC',
        'name' => 'Reclamation Areas',
      ),
      4 => 
      array (
        'code' => 'SAN',
        'name' => 'Sandpits Area',
      ),
      5 => 
      array (
        'code' => 'SOU',
        'name' => 'South District',
      ),
      6 => 
      array (
        'code' => 'TOW',
        'name' => 'Town Area',
      ),
      7 => 
      array (
        'code' => 'UPP',
        'name' => 'Upper Town',
      ),
      8 => 
      array (
        'code' => 'OTH',
        'name' => 'Other',
      ),
    ),
    'GL' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'Avannaa',
      ),
      2 => 
      array (
        'code' => 'T',
        'name' => 'Tunu',
      ),
      3 => 
      array (
        'code' => 'K',
        'name' => 'Kitaa',
      ),
    ),
    'GM' => 
    array (
      1 => 
      array (
        'code' => 'BJ',
        'name' => 'Banjul',
      ),
      2 => 
      array (
        'code' => 'BS',
        'name' => 'Basse',
      ),
      3 => 
      array (
        'code' => 'BR',
        'name' => 'Brikama',
      ),
      4 => 
      array (
        'code' => 'JA',
        'name' => 'Janjangbure',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'Kanifeng',
      ),
      6 => 
      array (
        'code' => 'KE',
        'name' => 'Kerewan',
      ),
      7 => 
      array (
        'code' => 'KU',
        'name' => 'Kuntaur',
      ),
      8 => 
      array (
        'code' => 'MA',
        'name' => 'Mansakonko',
      ),
      9 => 
      array (
        'code' => 'LR',
        'name' => 'Lower River',
      ),
      10 => 
      array (
        'code' => 'CR',
        'name' => 'Central River',
      ),
      11 => 
      array (
        'code' => 'NB',
        'name' => 'North Bank',
      ),
      12 => 
      array (
        'code' => 'UR',
        'name' => 'Upper River',
      ),
      13 => 
      array (
        'code' => 'WE',
        'name' => 'Western',
      ),
    ),
    'GN' => 
    array (
      1 => 
      array (
        'code' => 'CNK',
        'name' => 'Conakry',
      ),
      2 => 
      array (
        'code' => 'BYL',
        'name' => 'Beyla',
      ),
      3 => 
      array (
        'code' => 'BFA',
        'name' => 'Boffa',
      ),
      4 => 
      array (
        'code' => 'BOK',
        'name' => 'Boke',
      ),
      5 => 
      array (
        'code' => 'COY',
        'name' => 'Coyah',
      ),
      6 => 
      array (
        'code' => 'DBL',
        'name' => 'Dabola',
      ),
      7 => 
      array (
        'code' => 'DLB',
        'name' => 'Dalaba',
      ),
      8 => 
      array (
        'code' => 'DGR',
        'name' => 'Dinguiraye',
      ),
      9 => 
      array (
        'code' => 'DBR',
        'name' => 'Dubreka',
      ),
      10 => 
      array (
        'code' => 'FRN',
        'name' => 'Faranah',
      ),
      11 => 
      array (
        'code' => 'FRC',
        'name' => 'Forecariah',
      ),
      12 => 
      array (
        'code' => 'FRI',
        'name' => 'Fria',
      ),
      13 => 
      array (
        'code' => 'GAO',
        'name' => 'Gaoual',
      ),
      14 => 
      array (
        'code' => 'GCD',
        'name' => 'Gueckedou',
      ),
      15 => 
      array (
        'code' => 'KNK',
        'name' => 'Kankan',
      ),
      16 => 
      array (
        'code' => 'KRN',
        'name' => 'Kerouane',
      ),
      17 => 
      array (
        'code' => 'KND',
        'name' => 'Kindia',
      ),
      18 => 
      array (
        'code' => 'KSD',
        'name' => 'Kissidougou',
      ),
      19 => 
      array (
        'code' => 'KBA',
        'name' => 'Koubia',
      ),
      20 => 
      array (
        'code' => 'KDA',
        'name' => 'Koundara',
      ),
      21 => 
      array (
        'code' => 'KRA',
        'name' => 'Kouroussa',
      ),
      22 => 
      array (
        'code' => 'LAB',
        'name' => 'Labe',
      ),
      23 => 
      array (
        'code' => 'LLM',
        'name' => 'Lelouma',
      ),
      24 => 
      array (
        'code' => 'LOL',
        'name' => 'Lola',
      ),
      25 => 
      array (
        'code' => 'MCT',
        'name' => 'Macenta',
      ),
      26 => 
      array (
        'code' => 'MAL',
        'name' => 'Mali',
      ),
      27 => 
      array (
        'code' => 'MAM',
        'name' => 'Mamou',
      ),
      28 => 
      array (
        'code' => 'MAN',
        'name' => 'Mandiana',
      ),
      29 => 
      array (
        'code' => 'NZR',
        'name' => 'Nzerekore',
      ),
      30 => 
      array (
        'code' => 'PIT',
        'name' => 'Pita',
      ),
      31 => 
      array (
        'code' => 'SIG',
        'name' => 'Siguiri',
      ),
      32 => 
      array (
        'code' => 'TLM',
        'name' => 'Telimele',
      ),
      33 => 
      array (
        'code' => 'TOG',
        'name' => 'Tougue',
      ),
      34 => 
      array (
        'code' => 'YOM',
        'name' => 'Yomou',
      ),
    ),
    'GP' => 
    array (
      1 => 
      array (
        'code' => 'ARR',
        'name' => 'Arrondissements Of The Guadeloup',
      ),
      2 => 
      array (
        'code' => 'CAN',
        'name' => 'Cantons Of The Guadeloup Depart',
      ),
      3 => 
      array (
        'code' => 'COM',
        'name' => 'Communes Of The Guadeloup Depart',
      ),
    ),
    'GQ' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Provincia Annobon',
      ),
      2 => 
      array (
        'code' => 'BN',
        'name' => 'Provincia Bioko Norte',
      ),
      3 => 
      array (
        'code' => 'BS',
        'name' => 'Provincia Bioko Sur',
      ),
      4 => 
      array (
        'code' => 'CS',
        'name' => 'Provincia Centro Sur',
      ),
      5 => 
      array (
        'code' => 'KN',
        'name' => 'Provincia Kie-Ntem',
      ),
      6 => 
      array (
        'code' => 'LI',
        'name' => 'Provincia Litoral',
      ),
      7 => 
      array (
        'code' => 'WN',
        'name' => 'Provincia Wele-Nzas',
      ),
    ),
    'GR' => 
    array (
      1 => 
      array (
        'code' => 'AT',
        'name' => 'Attica',
      ),
      2 => 
      array (
        'code' => 'CN',
        'name' => 'Central Greece',
      ),
      3 => 
      array (
        'code' => 'CM',
        'name' => 'Central Macedonia',
      ),
      4 => 
      array (
        'code' => 'CR',
        'name' => 'Crete',
      ),
      5 => 
      array (
        'code' => 'EM',
        'name' => 'East Macedonia and Thrace',
      ),
      6 => 
      array (
        'code' => 'EP',
        'name' => 'Epirus',
      ),
      7 => 
      array (
        'code' => 'II',
        'name' => 'Ionian Islands',
      ),
      8 => 
      array (
        'code' => 'NA',
        'name' => 'North Aegean',
      ),
      9 => 
      array (
        'code' => 'PP',
        'name' => 'Peloponnesos',
      ),
      10 => 
      array (
        'code' => 'SA',
        'name' => 'South Aegean',
      ),
      11 => 
      array (
        'code' => 'TH',
        'name' => 'Thessaly',
      ),
      12 => 
      array (
        'code' => 'WG',
        'name' => 'West Greece',
      ),
      13 => 
      array (
        'code' => 'WM',
        'name' => 'West Macedonia',
      ),
    ),
    'GT' => 
    array (
      1 => 
      array (
        'code' => 'AV',
        'name' => 'Alta Verapaz',
      ),
      2 => 
      array (
        'code' => 'BV',
        'name' => 'Baja Verapaz',
      ),
      3 => 
      array (
        'code' => 'CM',
        'name' => 'Chimaltenango',
      ),
      4 => 
      array (
        'code' => 'CQ',
        'name' => 'Chiquimula',
      ),
      5 => 
      array (
        'code' => 'PE',
        'name' => 'El Peten',
      ),
      6 => 
      array (
        'code' => 'PR',
        'name' => 'El Progreso',
      ),
      7 => 
      array (
        'code' => 'QC',
        'name' => 'El Quiche',
      ),
      8 => 
      array (
        'code' => 'ES',
        'name' => 'Escuintla',
      ),
      9 => 
      array (
        'code' => 'GU',
        'name' => 'Guatemala',
      ),
      10 => 
      array (
        'code' => 'HU',
        'name' => 'Huehuetenango',
      ),
      11 => 
      array (
        'code' => 'IZ',
        'name' => 'Izabal',
      ),
      12 => 
      array (
        'code' => 'JA',
        'name' => 'Jalapa',
      ),
      13 => 
      array (
        'code' => 'JU',
        'name' => 'Jutiapa',
      ),
      14 => 
      array (
        'code' => 'QZ',
        'name' => 'Quetzaltenango',
      ),
      15 => 
      array (
        'code' => 'RE',
        'name' => 'Retalhuleu',
      ),
      16 => 
      array (
        'code' => 'ST',
        'name' => 'Sacatepequez',
      ),
      17 => 
      array (
        'code' => 'SM',
        'name' => 'San Marcos',
      ),
      18 => 
      array (
        'code' => 'SR',
        'name' => 'Santa Rosa',
      ),
      19 => 
      array (
        'code' => 'SO',
        'name' => 'Solola',
      ),
      20 => 
      array (
        'code' => 'SU',
        'name' => 'Suchitepequez',
      ),
      21 => 
      array (
        'code' => 'TO',
        'name' => 'Totonicapan',
      ),
      22 => 
      array (
        'code' => 'ZA',
        'name' => 'Zacapa',
      ),
    ),
    'GU' => 
    array (
      1 => 
      array (
        'code' => 'AGA',
        'name' => 'Agana Heights',
      ),
      2 => 
      array (
        'code' => 'AGA',
        'name' => 'Agat',
      ),
      3 => 
      array (
        'code' => 'ASA',
        'name' => 'Asan Maina',
      ),
      4 => 
      array (
        'code' => 'BAR',
        'name' => 'Barrigada',
      ),
      5 => 
      array (
        'code' => 'CHA',
        'name' => 'Chalan Pago Ordot',
      ),
      6 => 
      array (
        'code' => 'DED',
        'name' => 'Dededo',
      ),
      7 => 
      array (
        'code' => 'HAG',
        'name' => 'HagÅtña',
      ),
      8 => 
      array (
        'code' => 'INA',
        'name' => 'Inarajan',
      ),
      9 => 
      array (
        'code' => 'MAN',
        'name' => 'Mangilao',
      ),
      10 => 
      array (
        'code' => 'MER',
        'name' => 'Merizo',
      ),
      11 => 
      array (
        'code' => 'MON',
        'name' => 'Mongmong Toto Maite',
      ),
      12 => 
      array (
        'code' => 'PIT',
        'name' => 'Piti',
      ),
      13 => 
      array (
        'code' => 'SAN',
        'name' => 'Santa Rita',
      ),
      14 => 
      array (
        'code' => 'SIN',
        'name' => 'Sinajana',
      ),
      15 => 
      array (
        'code' => 'TAL',
        'name' => 'Talofofo',
      ),
      16 => 
      array (
        'code' => 'TAM',
        'name' => 'Tamuning',
      ),
      17 => 
      array (
        'code' => 'UMA',
        'name' => 'Umatac',
      ),
      18 => 
      array (
        'code' => 'YIG',
        'name' => 'Yigo',
      ),
      19 => 
      array (
        'code' => 'YON',
        'name' => 'Midlands',
      ),
    ),
    'GW' => 
    array (
      1 => 
      array (
        'code' => 'BF',
        'name' => 'Bafata Region',
      ),
      2 => 
      array (
        'code' => 'BB',
        'name' => 'Biombo Region',
      ),
      3 => 
      array (
        'code' => 'BS',
        'name' => 'Bissau Region',
      ),
      4 => 
      array (
        'code' => 'BL',
        'name' => 'Bolama Region',
      ),
      5 => 
      array (
        'code' => 'CA',
        'name' => 'Cacheu Region',
      ),
      6 => 
      array (
        'code' => 'GA',
        'name' => 'Gabu Region',
      ),
      7 => 
      array (
        'code' => 'OI',
        'name' => 'Oio Region',
      ),
      8 => 
      array (
        'code' => 'QU',
        'name' => 'Quinara Region',
      ),
      9 => 
      array (
        'code' => 'TO',
        'name' => 'Tombali Region',
      ),
    ),
    'GY' => 
    array (
      1 => 
      array (
        'code' => 'BW',
        'name' => 'Barima-Waini',
      ),
      2 => 
      array (
        'code' => 'CM',
        'name' => 'Cuyuni-Mazaruni',
      ),
      3 => 
      array (
        'code' => 'DM',
        'name' => 'Demerara-Mahaica',
      ),
      4 => 
      array (
        'code' => 'EC',
        'name' => 'East Berbice-Corentyne',
      ),
      5 => 
      array (
        'code' => 'EW',
        'name' => 'Essequibo Islands-West Demerara',
      ),
      6 => 
      array (
        'code' => 'MB',
        'name' => 'Mahaica-Berbice',
      ),
      7 => 
      array (
        'code' => 'PM',
        'name' => 'Pomeroon-Supenaam',
      ),
      8 => 
      array (
        'code' => 'PI',
        'name' => 'Potaro-Siparuni',
      ),
      9 => 
      array (
        'code' => 'UD',
        'name' => 'Upper Demerara-Berbice',
      ),
      10 => 
      array (
        'code' => 'UT',
        'name' => 'Upper Takutu-Upper Essequibo',
      ),
    ),
    'HK' => 
    array (
      1 => 
      array (
        'code' => 'HCW',
        'name' => 'Central and Western Hong Kong Is',
      ),
      2 => 
      array (
        'code' => 'HEA',
        'name' => 'Eastern Hong Kong Island',
      ),
      3 => 
      array (
        'code' => 'HSO',
        'name' => 'Southern Hong Kong Island',
      ),
      4 => 
      array (
        'code' => 'HWC',
        'name' => 'Wan Chai Hong Kong Island',
      ),
      5 => 
      array (
        'code' => 'KKC',
        'name' => 'Kowloon City Kowloon',
      ),
      6 => 
      array (
        'code' => 'KKT',
        'name' => 'Kwun Tong Kowloon',
      ),
      7 => 
      array (
        'code' => 'KSS',
        'name' => 'Sham Shui Po Kowloon',
      ),
      8 => 
      array (
        'code' => 'KWT',
        'name' => 'Wong Tai Sin Kowloon',
      ),
      9 => 
      array (
        'code' => 'KYT',
        'name' => 'Yau Tsim Mong Kowloon',
      ),
      10 => 
      array (
        'code' => 'NIS',
        'name' => 'Islands New Territories',
      ),
      11 => 
      array (
        'code' => 'NKT',
        'name' => 'Kwai Tsing New Territories',
      ),
      12 => 
      array (
        'code' => 'NNO',
        'name' => 'North New Territories',
      ),
      13 => 
      array (
        'code' => 'NSK',
        'name' => 'Sai Kung New Territories',
      ),
      14 => 
      array (
        'code' => 'NST',
        'name' => 'Sha Tin New Territories',
      ),
      15 => 
      array (
        'code' => 'NTP',
        'name' => 'Tai Po New Territories',
      ),
      16 => 
      array (
        'code' => 'NTW',
        'name' => 'Tsuen Wan New Territories',
      ),
      17 => 
      array (
        'code' => 'NTM',
        'name' => 'Tuen Mun New Territories',
      ),
      18 => 
      array (
        'code' => 'NYL',
        'name' => 'Yuen Long New Territories',
      ),
    ),
    'HM' => 
    array (
      1 => 
      array (
        'code' => 'F',
        'name' => 'Flat Island',
      ),
      2 => 
      array (
        'code' => 'M',
        'name' => 'McDonald Island',
      ),
      3 => 
      array (
        'code' => 'S',
        'name' => 'Shag Island',
      ),
      4 => 
      array (
        'code' => 'H',
        'name' => 'Heard Island',
      ),
    ),
    'HN' => 
    array (
      1 => 
      array (
        'code' => 'AT',
        'name' => 'Atlantida',
      ),
      2 => 
      array (
        'code' => 'CH',
        'name' => 'Choluteca',
      ),
      3 => 
      array (
        'code' => 'CL',
        'name' => 'Colon',
      ),
      4 => 
      array (
        'code' => 'CM',
        'name' => 'Comayagua',
      ),
      5 => 
      array (
        'code' => 'CP',
        'name' => 'Copan',
      ),
      6 => 
      array (
        'code' => 'CR',
        'name' => 'Cortes',
      ),
      7 => 
      array (
        'code' => 'PA',
        'name' => 'El Paraiso',
      ),
      8 => 
      array (
        'code' => 'FM',
        'name' => 'Francisco Morazan',
      ),
      9 => 
      array (
        'code' => 'GD',
        'name' => 'Gracias a Dios',
      ),
      10 => 
      array (
        'code' => 'IN',
        'name' => 'Intibuca',
      ),
      11 => 
      array (
        'code' => 'IB',
        'name' => 'Islas de la Bahia (Bay Islands)',
      ),
      12 => 
      array (
        'code' => 'PZ',
        'name' => 'La Paz',
      ),
      13 => 
      array (
        'code' => 'LE',
        'name' => 'Lempira',
      ),
      14 => 
      array (
        'code' => 'OC',
        'name' => 'Ocotepeque',
      ),
      15 => 
      array (
        'code' => 'OL',
        'name' => 'Olancho',
      ),
      16 => 
      array (
        'code' => 'SB',
        'name' => 'Santa Barbara',
      ),
      17 => 
      array (
        'code' => 'VA',
        'name' => 'Valle',
      ),
      18 => 
      array (
        'code' => 'YO',
        'name' => 'Yoro',
      ),
    ),
    'HR' => 
    array (
      1 => 
      array (
        'code' => 'BB',
        'name' => 'Bjelovar-Bilogora',
      ),
      2 => 
      array (
        'code' => 'CZ',
        'name' => 'City of Zagreb',
      ),
      3 => 
      array (
        'code' => 'DN',
        'name' => 'Dubrovnik-Neretva',
      ),
      4 => 
      array (
        'code' => 'IS',
        'name' => 'Istra',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'Karlovac',
      ),
      6 => 
      array (
        'code' => 'KK',
        'name' => 'Koprivnica-Krizevci',
      ),
      7 => 
      array (
        'code' => 'KZ',
        'name' => 'Krapina-Zagorje',
      ),
      8 => 
      array (
        'code' => 'LS',
        'name' => 'Lika-Senj',
      ),
      9 => 
      array (
        'code' => 'ME',
        'name' => 'Medimurje',
      ),
      10 => 
      array (
        'code' => 'OB',
        'name' => 'Osijek-Baranja',
      ),
      11 => 
      array (
        'code' => 'PS',
        'name' => 'Pozega-Slavonia',
      ),
      12 => 
      array (
        'code' => 'PG',
        'name' => 'Primorje-Gorski Kotar',
      ),
      13 => 
      array (
        'code' => 'SI',
        'name' => 'Sibenik',
      ),
      14 => 
      array (
        'code' => 'SM',
        'name' => 'Sisak-Moslavina',
      ),
      15 => 
      array (
        'code' => 'SB',
        'name' => 'Slavonski Brod-Posavina',
      ),
      16 => 
      array (
        'code' => 'SD',
        'name' => 'Split-Dalmatia',
      ),
      17 => 
      array (
        'code' => 'VA',
        'name' => 'Varazdin',
      ),
      18 => 
      array (
        'code' => 'VP',
        'name' => 'Virovitica-Podravina',
      ),
      19 => 
      array (
        'code' => 'VS',
        'name' => 'Vukovar-Srijem',
      ),
      20 => 
      array (
        'code' => 'ZK',
        'name' => 'Zadar-Knin',
      ),
      21 => 
      array (
        'code' => 'ZA',
        'name' => 'Zagreb',
      ),
    ),
    'HT' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'Artibonite',
      ),
      2 => 
      array (
        'code' => 'CE',
        'name' => 'Centre',
      ),
      3 => 
      array (
        'code' => 'GA',
        'name' => 'Grand&#39;Anse',
      ),
      4 => 
      array (
        'code' => 'ND',
        'name' => 'Nord',
      ),
      5 => 
      array (
        'code' => 'NE',
        'name' => 'Nord-Est',
      ),
      6 => 
      array (
        'code' => 'NO',
        'name' => 'Nord-Ouest',
      ),
      7 => 
      array (
        'code' => 'OU',
        'name' => 'Ouest',
      ),
      8 => 
      array (
        'code' => 'SD',
        'name' => 'Sud',
      ),
      9 => 
      array (
        'code' => 'SE',
        'name' => 'Sud-Est',
      ),
    ),
    'HU' => 
    array (
      1 => 
      array (
        'code' => 'BK',
        'name' => 'Bacs-Kiskun',
      ),
      2 => 
      array (
        'code' => 'BA',
        'name' => 'Baranya',
      ),
      3 => 
      array (
        'code' => 'BE',
        'name' => 'Bekes',
      ),
      4 => 
      array (
        'code' => 'BS',
        'name' => 'Bekescsaba',
      ),
      5 => 
      array (
        'code' => 'BZ',
        'name' => 'Borsod-Abauj-Zemplen',
      ),
      6 => 
      array (
        'code' => 'BU',
        'name' => 'Budapest',
      ),
      7 => 
      array (
        'code' => 'CS',
        'name' => 'Csongrad',
      ),
      8 => 
      array (
        'code' => 'DE',
        'name' => 'Debrecen',
      ),
      9 => 
      array (
        'code' => 'DU',
        'name' => 'Dunaujvaros',
      ),
      10 => 
      array (
        'code' => 'EG',
        'name' => 'Eger',
      ),
      11 => 
      array (
        'code' => 'FE',
        'name' => 'Fejer',
      ),
      12 => 
      array (
        'code' => 'GY',
        'name' => 'Gyor',
      ),
      13 => 
      array (
        'code' => 'GM',
        'name' => 'Gyor-Moson-Sopron',
      ),
      14 => 
      array (
        'code' => 'HB',
        'name' => 'Hajdu-Bihar',
      ),
      15 => 
      array (
        'code' => 'HE',
        'name' => 'Heves',
      ),
      16 => 
      array (
        'code' => 'HO',
        'name' => 'Hodmezovasarhely',
      ),
      17 => 
      array (
        'code' => 'JN',
        'name' => 'Jasz-Nagykun-Szolnok',
      ),
      18 => 
      array (
        'code' => 'KA',
        'name' => 'Kaposvar',
      ),
      19 => 
      array (
        'code' => 'KE',
        'name' => 'Kecskemet',
      ),
      20 => 
      array (
        'code' => 'KO',
        'name' => 'Komarom-Esztergom',
      ),
      21 => 
      array (
        'code' => 'MI',
        'name' => 'Miskolc',
      ),
      22 => 
      array (
        'code' => 'NA',
        'name' => 'Nagykanizsa',
      ),
      23 => 
      array (
        'code' => 'NO',
        'name' => 'Nograd',
      ),
      24 => 
      array (
        'code' => 'NY',
        'name' => 'Nyiregyhaza',
      ),
      25 => 
      array (
        'code' => 'PE',
        'name' => 'Pecs',
      ),
      26 => 
      array (
        'code' => 'PS',
        'name' => 'Pest',
      ),
      27 => 
      array (
        'code' => 'SO',
        'name' => 'Somogy',
      ),
      28 => 
      array (
        'code' => 'SP',
        'name' => 'Sopron',
      ),
      29 => 
      array (
        'code' => 'SS',
        'name' => 'Szabolcs-Szatmar-Bereg',
      ),
      30 => 
      array (
        'code' => 'SZ',
        'name' => 'Szeged',
      ),
      31 => 
      array (
        'code' => 'SE',
        'name' => 'Szekesfehervar',
      ),
      32 => 
      array (
        'code' => 'SL',
        'name' => 'Szolnok',
      ),
      33 => 
      array (
        'code' => 'SM',
        'name' => 'Szombathely',
      ),
      34 => 
      array (
        'code' => 'TA',
        'name' => 'Tatabanya',
      ),
      35 => 
      array (
        'code' => 'TO',
        'name' => 'Tolna',
      ),
      36 => 
      array (
        'code' => 'VA',
        'name' => 'Vas',
      ),
      37 => 
      array (
        'code' => 'VE',
        'name' => 'Veszprem',
      ),
      38 => 
      array (
        'code' => 'ZA',
        'name' => 'Zala',
      ),
      39 => 
      array (
        'code' => 'ZZ',
        'name' => 'Zalaegerszeg',
      ),
    ),
    'ID' => 
    array (
      1 => 
      array (
        'code' => 'DA',
        'name' => 'Daista Aceh',
      ),
      2 => 
      array (
        'code' => 'SU',
        'name' => 'Sumatera Utara',
      ),
      3 => 
      array (
        'code' => 'SB',
        'name' => 'Sumatera Barat',
      ),
      4 => 
      array (
        'code' => 'SI',
        'name' => 'Riau',
      ),
      5 => 
      array (
        'code' => 'JA',
        'name' => 'Jambi',
      ),
      6 => 
      array (
        'code' => 'SS',
        'name' => 'Sumatera Selatan',
      ),
      7 => 
      array (
        'code' => 'BE',
        'name' => 'Bengkulu',
      ),
      8 => 
      array (
        'code' => 'LA',
        'name' => 'Lampung',
      ),
      9 => 
      array (
        'code' => 'JK',
        'name' => 'Dki Jakarta',
      ),
      10 => 
      array (
        'code' => 'JB',
        'name' => 'Jawa Barat',
      ),
      11 => 
      array (
        'code' => 'JT',
        'name' => 'Jawa Tengah',
      ),
      12 => 
      array (
        'code' => 'DY',
        'name' => 'Daista Yogyakarta',
      ),
      13 => 
      array (
        'code' => 'JT',
        'name' => 'Jawa Timur',
      ),
      14 => 
      array (
        'code' => 'KB',
        'name' => 'Kalimantan Barat',
      ),
      15 => 
      array (
        'code' => 'KT',
        'name' => 'Kalimantan Tengah',
      ),
      16 => 
      array (
        'code' => 'KI',
        'name' => 'Kalimantan Timur',
      ),
      17 => 
      array (
        'code' => 'KS',
        'name' => 'Kalimantan Selatan',
      ),
      18 => 
      array (
        'code' => 'BA',
        'name' => 'Bali',
      ),
      19 => 
      array (
        'code' => 'NB',
        'name' => 'Nusa Tenggara Barat',
      ),
      20 => 
      array (
        'code' => 'NT',
        'name' => 'Nusa Tenggara Timur',
      ),
      21 => 
      array (
        'code' => 'SN',
        'name' => 'Sulawesi Selatan',
      ),
      22 => 
      array (
        'code' => 'ST',
        'name' => 'Sulawesi Tengah',
      ),
      23 => 
      array (
        'code' => 'SA',
        'name' => 'Sulawesi Utara',
      ),
      24 => 
      array (
        'code' => 'SG',
        'name' => 'Sulawesi Tenggara',
      ),
      25 => 
      array (
        'code' => 'MA',
        'name' => 'Maluku',
      ),
      26 => 
      array (
        'code' => 'MU',
        'name' => 'Maluku Utara',
      ),
      27 => 
      array (
        'code' => 'IJ',
        'name' => 'Irian Jaya Timur',
      ),
      28 => 
      array (
        'code' => 'IT',
        'name' => 'Irian Jaya Tengah',
      ),
      29 => 
      array (
        'code' => 'IB',
        'name' => 'Irian Jawa Barat',
      ),
      30 => 
      array (
        'code' => 'BT',
        'name' => 'Banten',
      ),
      31 => 
      array (
        'code' => 'BB',
        'name' => 'Bangka Belitung',
      ),
      32 => 
      array (
        'code' => 'GO',
        'name' => 'Gorontalo',
      ),
    ),
    'IE' => 
    array (
      1 => 
      array (
        'code' => 'CA',
        'name' => 'Carlow',
      ),
      2 => 
      array (
        'code' => 'CV',
        'name' => 'Cavan',
      ),
      3 => 
      array (
        'code' => 'CL',
        'name' => 'Clare',
      ),
      4 => 
      array (
        'code' => 'CO',
        'name' => 'Cork',
      ),
      5 => 
      array (
        'code' => 'DO',
        'name' => 'Donegal',
      ),
      6 => 
      array (
        'code' => 'DU',
        'name' => 'Dublin',
      ),
      7 => 
      array (
        'code' => 'GA',
        'name' => 'Galway',
      ),
      8 => 
      array (
        'code' => 'KE',
        'name' => 'Kerry',
      ),
      9 => 
      array (
        'code' => 'KI',
        'name' => 'Kildare',
      ),
      10 => 
      array (
        'code' => 'KL',
        'name' => 'Kilkenny',
      ),
      11 => 
      array (
        'code' => 'LA',
        'name' => 'Laois',
      ),
      12 => 
      array (
        'code' => 'LE',
        'name' => 'Leitrim',
      ),
      13 => 
      array (
        'code' => 'LI',
        'name' => 'Limerick',
      ),
      14 => 
      array (
        'code' => 'LO',
        'name' => 'Longford',
      ),
      15 => 
      array (
        'code' => 'LU',
        'name' => 'Louth',
      ),
      16 => 
      array (
        'code' => 'MA',
        'name' => 'Mayo',
      ),
      17 => 
      array (
        'code' => 'ME',
        'name' => 'Meath',
      ),
      18 => 
      array (
        'code' => 'MO',
        'name' => 'Monaghan',
      ),
      19 => 
      array (
        'code' => 'OF',
        'name' => 'Offaly',
      ),
      20 => 
      array (
        'code' => 'RO',
        'name' => 'Roscommon',
      ),
      21 => 
      array (
        'code' => 'SL',
        'name' => 'Sligo',
      ),
      22 => 
      array (
        'code' => 'TI',
        'name' => 'Tipperary',
      ),
      23 => 
      array (
        'code' => 'WA',
        'name' => 'Waterford',
      ),
      24 => 
      array (
        'code' => 'WE',
        'name' => 'Westmeath',
      ),
      25 => 
      array (
        'code' => 'WX',
        'name' => 'Wexford',
      ),
      26 => 
      array (
        'code' => 'WI',
        'name' => 'Wicklow',
      ),
    ),
    'IL' => 
    array (
      1 => 
      array (
        'code' => 'BS',
        'name' => 'Be&#39;er Sheva',
      ),
      2 => 
      array (
        'code' => 'BH',
        'name' => 'Bika&#39;at Hayarden',
      ),
      3 => 
      array (
        'code' => 'EA',
        'name' => 'Eilat and Arava',
      ),
      4 => 
      array (
        'code' => 'GA',
        'name' => 'Galil',
      ),
      5 => 
      array (
        'code' => 'HA',
        'name' => 'Haifa',
      ),
      6 => 
      array (
        'code' => 'JM',
        'name' => 'Jehuda Mountains',
      ),
      7 => 
      array (
        'code' => 'JE',
        'name' => 'Jerusalem',
      ),
      8 => 
      array (
        'code' => 'NE',
        'name' => 'Negev',
      ),
      10 => 
      array (
        'code' => 'SE',
        'name' => 'Semaria',
      ),
      11 => 
      array (
        'code' => 'SH',
        'name' => 'Sharon',
      ),
      12 => 
      array (
        'code' => 'TA',
        'name' => 'Tel Aviv (Gosh Dan)',
      ),
    ),
    'IN' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Andaman and Nicobar Islands',
      ),
      2 => 
      array (
        'code' => 'AP',
        'name' => 'Andhra Pradesh',
      ),
      3 => 
      array (
        'code' => 'AR',
        'name' => 'Arunachal Pradesh',
      ),
      4 => 
      array (
        'code' => 'AS',
        'name' => 'Assam',
      ),
      5 => 
      array (
        'code' => 'BI',
        'name' => 'Bihar',
      ),
      6 => 
      array (
        'code' => 'CH',
        'name' => 'Chandigarh',
      ),
      7 => 
      array (
        'code' => 'DA',
        'name' => 'Dadra and Nagar Haveli',
      ),
      8 => 
      array (
        'code' => 'DM',
        'name' => 'Daman and Diu',
      ),
      9 => 
      array (
        'code' => 'DE',
        'name' => 'Delhi',
      ),
      10 => 
      array (
        'code' => 'GO',
        'name' => 'Goa',
      ),
      11 => 
      array (
        'code' => 'GU',
        'name' => 'Gujarat',
      ),
      12 => 
      array (
        'code' => 'HA',
        'name' => 'Haryana',
      ),
      13 => 
      array (
        'code' => 'HP',
        'name' => 'Himachal Pradesh',
      ),
      14 => 
      array (
        'code' => 'JA',
        'name' => 'Jammu and Kashmir',
      ),
      15 => 
      array (
        'code' => 'KA',
        'name' => 'Karnataka',
      ),
      16 => 
      array (
        'code' => 'KE',
        'name' => 'Kerala',
      ),
      17 => 
      array (
        'code' => 'LI',
        'name' => 'Lakshadweep Islands',
      ),
      18 => 
      array (
        'code' => 'MP',
        'name' => 'Madhya Pradesh',
      ),
      19 => 
      array (
        'code' => 'MA',
        'name' => 'Maharashtra',
      ),
      20 => 
      array (
        'code' => 'MN',
        'name' => 'Manipur',
      ),
      21 => 
      array (
        'code' => 'ME',
        'name' => 'Meghalaya',
      ),
      22 => 
      array (
        'code' => 'MI',
        'name' => 'Mizoram',
      ),
      23 => 
      array (
        'code' => 'NA',
        'name' => 'Nagaland',
      ),
      24 => 
      array (
        'code' => 'OR',
        'name' => 'Orissa',
      ),
      25 => 
      array (
        'code' => 'PO',
        'name' => 'Pondicherry',
      ),
      26 => 
      array (
        'code' => 'PU',
        'name' => 'Punjab',
      ),
      27 => 
      array (
        'code' => 'RA',
        'name' => 'Rajasthan',
      ),
      28 => 
      array (
        'code' => 'SI',
        'name' => 'Sikkim',
      ),
      29 => 
      array (
        'code' => 'TN',
        'name' => 'Tamil Nadu',
      ),
      30 => 
      array (
        'code' => 'TR',
        'name' => 'Tripura',
      ),
      31 => 
      array (
        'code' => 'UP',
        'name' => 'Uttar Pradesh',
      ),
      32 => 
      array (
        'code' => 'WB',
        'name' => 'West Bengal',
      ),
    ),
    'IO' => 
    array (
      1 => 
      array (
        'code' => 'DG',
        'name' => 'Diego Garcia',
      ),
      2 => 
      array (
        'code' => 'DI',
        'name' => 'Danger Island',
      ),
      3 => 
      array (
        'code' => 'EA',
        'name' => 'Eagle Islands',
      ),
      4 => 
      array (
        'code' => 'EG',
        'name' => 'Egmont Islands',
      ),
      5 => 
      array (
        'code' => 'NI',
        'name' => 'Nelsons Island',
      ),
      6 => 
      array (
        'code' => 'PB',
        'name' => 'Peros Banhos',
      ),
      7 => 
      array (
        'code' => 'SI',
        'name' => 'Salomon Islands',
      ),
      8 => 
      array (
        'code' => 'TB',
        'name' => 'Three Brothers',
      ),
    ),
    'IQ' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'Al Anbar',
      ),
      2 => 
      array (
        'code' => 'AL',
        'name' => 'Arbil',
      ),
      3 => 
      array (
        'code' => 'BA',
        'name' => 'Al Basrah',
      ),
      4 => 
      array (
        'code' => 'BB',
        'name' => 'Babil',
      ),
      5 => 
      array (
        'code' => 'BD',
        'name' => 'Baghdad',
      ),
      6 => 
      array (
        'code' => 'DH',
        'name' => 'Midlands',
      ),
      7 => 
      array (
        'code' => 'DQ',
        'name' => 'Dhi Qar',
      ),
      8 => 
      array (
        'code' => 'DY',
        'name' => 'Diyala',
      ),
      9 => 
      array (
        'code' => 'KB',
        'name' => 'Al Karbala',
      ),
      10 => 
      array (
        'code' => 'MU',
        'name' => 'Al Muthanna',
      ),
      11 => 
      array (
        'code' => 'MY',
        'name' => 'Maysan',
      ),
      12 => 
      array (
        'code' => 'NJ',
        'name' => 'An Najaf',
      ),
      13 => 
      array (
        'code' => 'NN',
        'name' => 'Ninawa',
      ),
      14 => 
      array (
        'code' => 'QA',
        'name' => 'Al Qadisyah',
      ),
      15 => 
      array (
        'code' => 'SD',
        'name' => 'Salah ad Din',
      ),
      16 => 
      array (
        'code' => 'SL',
        'name' => 'As Sulaymaniyah',
      ),
      17 => 
      array (
        'code' => 'TM',
        'name' => 'At Ta&#39;mim',
      ),
      18 => 
      array (
        'code' => 'WS',
        'name' => 'Wasit',
      ),
    ),
    'IR' => 
    array (
      1 => 
      array (
        'code' => 'ARD',
        'name' => 'Ardabil',
      ),
      2 => 
      array (
        'code' => 'BSH',
        'name' => 'Bushehr',
      ),
      3 => 
      array (
        'code' => 'CMB',
        'name' => 'Chahar Mahaal and Bakhtiari',
      ),
      4 => 
      array (
        'code' => 'EAZ',
        'name' => 'East Azarbaijan',
      ),
      5 => 
      array (
        'code' => 'EFH',
        'name' => 'Esfahan',
      ),
      6 => 
      array (
        'code' => 'FAR',
        'name' => 'Fars',
      ),
      7 => 
      array (
        'code' => 'GIL',
        'name' => 'Gilan',
      ),
      8 => 
      array (
        'code' => 'GLS',
        'name' => 'Golestan',
      ),
      9 => 
      array (
        'code' => 'HMD',
        'name' => 'Hamadan',
      ),
      10 => 
      array (
        'code' => 'HRM',
        'name' => 'Hormozgan',
      ),
      11 => 
      array (
        'code' => 'ILM',
        'name' => 'Ilam',
      ),
      12 => 
      array (
        'code' => 'KBA',
        'name' => 'Kohkiluyeh and Buyer Ahmad',
      ),
      13 => 
      array (
        'code' => 'KRB',
        'name' => 'Kerman',
      ),
      14 => 
      array (
        'code' => 'KRD',
        'name' => 'Kurdistan',
      ),
      15 => 
      array (
        'code' => 'KRM',
        'name' => 'Kermanshah',
      ),
      16 => 
      array (
        'code' => 'KZT',
        'name' => 'Khuzestan',
      ),
      17 => 
      array (
        'code' => 'LRS',
        'name' => 'Lorestan',
      ),
      18 => 
      array (
        'code' => 'MKZ',
        'name' => 'Markazi',
      ),
      19 => 
      array (
        'code' => 'MZD',
        'name' => 'Mazandaran',
      ),
      20 => 
      array (
        'code' => 'NKH',
        'name' => 'North Khorasan',
      ),
      21 => 
      array (
        'code' => 'QAZ',
        'name' => 'Qazvin',
      ),
      22 => 
      array (
        'code' => 'QOM',
        'name' => 'Qom',
      ),
      23 => 
      array (
        'code' => 'RKH',
        'name' => 'Razavi Khorasan',
      ),
      24 => 
      array (
        'code' => 'SBL',
        'name' => 'Sistan and Baluchistan',
      ),
      25 => 
      array (
        'code' => 'SKH',
        'name' => 'South Khorasan',
      ),
      26 => 
      array (
        'code' => 'SMN',
        'name' => 'Semnan',
      ),
      27 => 
      array (
        'code' => 'TEH',
        'name' => 'Tehran',
      ),
      28 => 
      array (
        'code' => 'WEZ',
        'name' => 'West Azarbaijan',
      ),
      29 => 
      array (
        'code' => 'YZD',
        'name' => 'Yazd',
      ),
      30 => 
      array (
        'code' => 'ZAN',
        'name' => 'Zanjan',
      ),
    ),
    'IS' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Austurland',
      ),
      2 => 
      array (
        'code' => 'HF',
        'name' => 'Hofuoborgarsvaeoi',
      ),
      3 => 
      array (
        'code' => 'NE',
        'name' => 'Norourland eystra',
      ),
      4 => 
      array (
        'code' => 'NV',
        'name' => 'Norourland vestra',
      ),
      5 => 
      array (
        'code' => 'SL',
        'name' => 'Suourland',
      ),
      6 => 
      array (
        'code' => 'SN',
        'name' => 'Suournes',
      ),
      7 => 
      array (
        'code' => 'VF',
        'name' => 'Vestfiroir',
      ),
      8 => 
      array (
        'code' => 'VL',
        'name' => 'Vesturland',
      ),
    ),
    'IT' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'Agrigento',
      ),
      2 => 
      array (
        'code' => 'AL',
        'name' => 'Alessandria',
      ),
      3 => 
      array (
        'code' => 'AN',
        'name' => 'Ancona',
      ),
      4 => 
      array (
        'code' => 'AO',
        'name' => 'Aosta',
      ),
      5 => 
      array (
        'code' => 'AR',
        'name' => 'Arezzo',
      ),
      6 => 
      array (
        'code' => 'AP',
        'name' => 'Ascoli Piceno',
      ),
      7 => 
      array (
        'code' => 'AT',
        'name' => 'Asti',
      ),
      8 => 
      array (
        'code' => 'AV',
        'name' => 'Avellino',
      ),
      9 => 
      array (
        'code' => 'BA',
        'name' => 'Bari',
      ),
      10 => 
      array (
        'code' => 'BL',
        'name' => 'Belluno',
      ),
      11 => 
      array (
        'code' => 'BN',
        'name' => 'Benevento',
      ),
      12 => 
      array (
        'code' => 'BG',
        'name' => 'Bergamo',
      ),
      13 => 
      array (
        'code' => 'BI',
        'name' => 'Biella',
      ),
      14 => 
      array (
        'code' => 'BO',
        'name' => 'Bologna',
      ),
      15 => 
      array (
        'code' => 'BZ',
        'name' => 'Bolzano',
      ),
      16 => 
      array (
        'code' => 'BS',
        'name' => 'Brescia',
      ),
      17 => 
      array (
        'code' => 'BR',
        'name' => 'Brindisi',
      ),
      18 => 
      array (
        'code' => 'CA',
        'name' => 'Cagliari',
      ),
      19 => 
      array (
        'code' => 'CL',
        'name' => 'Caltanissetta',
      ),
      20 => 
      array (
        'code' => 'CB',
        'name' => 'Campobasso',
      ),
      21 => 
      array (
        'code' => 'CE',
        'name' => 'Caserta',
      ),
      22 => 
      array (
        'code' => 'CT',
        'name' => 'Catania',
      ),
      23 => 
      array (
        'code' => 'CZ',
        'name' => 'Catanzaro',
      ),
      24 => 
      array (
        'code' => 'CH',
        'name' => 'Chieti',
      ),
      25 => 
      array (
        'code' => 'CO',
        'name' => 'Como',
      ),
      26 => 
      array (
        'code' => 'CS',
        'name' => 'Cosenza',
      ),
      27 => 
      array (
        'code' => 'CR',
        'name' => 'Cremona',
      ),
      28 => 
      array (
        'code' => 'KR',
        'name' => 'Crotone',
      ),
      29 => 
      array (
        'code' => 'CN',
        'name' => 'Cuneo',
      ),
      30 => 
      array (
        'code' => 'EN',
        'name' => 'Enna',
      ),
      31 => 
      array (
        'code' => 'FE',
        'name' => 'Ferrara',
      ),
      32 => 
      array (
        'code' => 'FI',
        'name' => 'Firenze',
      ),
      33 => 
      array (
        'code' => 'FG',
        'name' => 'Foggia',
      ),
      34 => 
      array (
        'code' => 'FO',
        'name' => 'Forlì',
      ),
      35 => 
      array (
        'code' => 'FR',
        'name' => 'Frosinone',
      ),
      36 => 
      array (
        'code' => 'GE',
        'name' => 'Genova',
      ),
      37 => 
      array (
        'code' => 'GO',
        'name' => 'Gorizia',
      ),
      38 => 
      array (
        'code' => 'GR',
        'name' => 'Grosseto',
      ),
      39 => 
      array (
        'code' => 'IM',
        'name' => 'Imperia',
      ),
      40 => 
      array (
        'code' => 'IS',
        'name' => 'Isernia',
      ),
      41 => 
      array (
        'code' => 'AQ',
        'name' => 'Aquila',
      ),
      42 => 
      array (
        'code' => 'SP',
        'name' => 'La Spezia',
      ),
      43 => 
      array (
        'code' => 'LT',
        'name' => 'Latina',
      ),
      44 => 
      array (
        'code' => 'LE',
        'name' => 'Lecce',
      ),
      45 => 
      array (
        'code' => 'LC',
        'name' => 'Lecco',
      ),
      46 => 
      array (
        'code' => 'LI',
        'name' => 'Livorno',
      ),
      47 => 
      array (
        'code' => 'LO',
        'name' => 'Lodi',
      ),
      48 => 
      array (
        'code' => 'LU',
        'name' => 'Lucca',
      ),
      49 => 
      array (
        'code' => 'MC',
        'name' => 'Midlands',
      ),
      50 => 
      array (
        'code' => 'MN',
        'name' => 'Mantova',
      ),
      51 => 
      array (
        'code' => 'MS',
        'name' => 'Massa-Carrara',
      ),
      52 => 
      array (
        'code' => 'MT',
        'name' => 'Matera',
      ),
      53 => 
      array (
        'code' => 'ME',
        'name' => 'Messina',
      ),
      54 => 
      array (
        'code' => 'MI',
        'name' => 'Milano',
      ),
      55 => 
      array (
        'code' => 'MO',
        'name' => 'Modena',
      ),
      56 => 
      array (
        'code' => 'NA',
        'name' => 'Napoli',
      ),
      57 => 
      array (
        'code' => 'NO',
        'name' => 'Novara',
      ),
      58 => 
      array (
        'code' => 'NU',
        'name' => 'Nuoro',
      ),
      59 => 
      array (
        'code' => 'OR',
        'name' => 'Oristano',
      ),
      60 => 
      array (
        'code' => 'PD',
        'name' => 'Padova',
      ),
      61 => 
      array (
        'code' => 'PA',
        'name' => 'Palermo',
      ),
      62 => 
      array (
        'code' => 'PR',
        'name' => 'Parma',
      ),
      63 => 
      array (
        'code' => 'PG',
        'name' => 'Perugia',
      ),
      64 => 
      array (
        'code' => 'PV',
        'name' => 'Pavia',
      ),
      65 => 
      array (
        'code' => 'PU',
        'name' => 'Pesaro Urbino',
      ),
      66 => 
      array (
        'code' => 'PE',
        'name' => 'Pescara',
      ),
      67 => 
      array (
        'code' => 'MD',
        'name' => 'Piacenza',
      ),
      68 => 
      array (
        'code' => 'PI',
        'name' => 'Pisa',
      ),
      69 => 
      array (
        'code' => 'PT',
        'name' => 'Pistoia',
      ),
      70 => 
      array (
        'code' => 'PN',
        'name' => 'Pordenone',
      ),
      71 => 
      array (
        'code' => 'PZ',
        'name' => 'Potenza',
      ),
      72 => 
      array (
        'code' => 'PO',
        'name' => 'Prato',
      ),
      73 => 
      array (
        'code' => 'MD',
        'name' => 'Ragusa',
      ),
      74 => 
      array (
        'code' => 'RA',
        'name' => 'Ravenna',
      ),
      75 => 
      array (
        'code' => 'RC',
        'name' => 'Reggio Calabria',
      ),
      76 => 
      array (
        'code' => 'RE',
        'name' => 'Reggio Emilia',
      ),
      77 => 
      array (
        'code' => 'RI',
        'name' => 'Rieti',
      ),
      78 => 
      array (
        'code' => 'RN',
        'name' => 'Rimini',
      ),
      79 => 
      array (
        'code' => 'RM',
        'name' => 'Roma',
      ),
      80 => 
      array (
        'code' => 'RO',
        'name' => 'Rovigo',
      ),
      81 => 
      array (
        'code' => 'SA',
        'name' => 'Salerno',
      ),
      82 => 
      array (
        'code' => 'SS',
        'name' => 'Sassari',
      ),
      83 => 
      array (
        'code' => 'SV',
        'name' => 'Savona',
      ),
      84 => 
      array (
        'code' => 'SI',
        'name' => 'Siena',
      ),
      85 => 
      array (
        'code' => 'SR',
        'name' => 'Siracusa',
      ),
      86 => 
      array (
        'code' => 'SO',
        'name' => 'Sondrio',
      ),
      87 => 
      array (
        'code' => 'TA',
        'name' => 'Taranto',
      ),
      88 => 
      array (
        'code' => 'TE',
        'name' => 'Teramo',
      ),
      89 => 
      array (
        'code' => 'TR',
        'name' => 'Terni',
      ),
      90 => 
      array (
        'code' => 'TO',
        'name' => 'Torino',
      ),
      91 => 
      array (
        'code' => 'TP',
        'name' => 'Trapani',
      ),
      92 => 
      array (
        'code' => 'TN',
        'name' => 'Trento',
      ),
      93 => 
      array (
        'code' => 'TV',
        'name' => 'Treviso',
      ),
      94 => 
      array (
        'code' => 'TS',
        'name' => 'Trieste',
      ),
      95 => 
      array (
        'code' => 'UD',
        'name' => 'Udine',
      ),
      96 => 
      array (
        'code' => 'VA',
        'name' => 'Varese',
      ),
      97 => 
      array (
        'code' => 'VE',
        'name' => 'Venezia',
      ),
      98 => 
      array (
        'code' => 'VB',
        'name' => 'Verbania',
      ),
      99 => 
      array (
        'code' => 'VC',
        'name' => 'Vercelli',
      ),
      100 => 
      array (
        'code' => 'VR',
        'name' => 'Verona',
      ),
      101 => 
      array (
        'code' => 'VV',
        'name' => 'Vibo Valentia',
      ),
      102 => 
      array (
        'code' => 'VI',
        'name' => 'Vicenza',
      ),
      103 => 
      array (
        'code' => 'VT',
        'name' => 'Viterbo',
      ),
      104 => 
      array (
        'code' => 'CI',
        'name' => 'Carbonia-Iglesias',
      ),
      105 => 
      array (
        'code' => 'VS',
        'name' => 'Medio Campidano',
      ),
      106 => 
      array (
        'code' => 'OG',
        'name' => 'Ogliastra',
      ),
      107 => 
      array (
        'code' => 'OT',
        'name' => 'Olbia-Tempio',
      ),
      108 => 
      array (
        'code' => 'MB',
        'name' => 'Monza e Brianza',
      ),
      109 => 
      array (
        'code' => 'FM',
        'name' => 'Fermo',
      ),
      110 => 
      array (
        'code' => 'BT',
        'name' => 'Barletta-Andria-Trani',
      ),
    ),
    'JM' => 
    array (
      1 => 
      array (
        'code' => 'CLA',
        'name' => 'όνομα<br />Το<b> Όνομα</b> του πακέτου θα πρέπει να εμφανίζεται στην Ενότητα Φορτωτή μετά το πακέτο αποστέλλεται για την εγκατάσταση στο Στούντιο.',
      ),
      2 => 
      array (
        'code' => 'HAN',
        'name' => 'Hanover Parish',
      ),
      3 => 
      array (
        'code' => 'KIN',
        'name' => 'Kingston Parish',
      ),
      4 => 
      array (
        'code' => 'MAN',
        'name' => 'Manchester Parish',
      ),
      5 => 
      array (
        'code' => 'POR',
        'name' => 'Portland Parish',
      ),
      6 => 
      array (
        'code' => 'AND',
        'name' => 'Saint Andrew Parish',
      ),
      7 => 
      array (
        'code' => 'ANN',
        'name' => 'Saint Ann Parish',
      ),
      8 => 
      array (
        'code' => 'CAT',
        'name' => 'Saint Catherine Parish',
      ),
      9 => 
      array (
        'code' => 'ELI',
        'name' => 'Saint Elizabeth Parish',
      ),
      10 => 
      array (
        'code' => 'JAM',
        'name' => 'Saint James Parish',
      ),
      11 => 
      array (
        'code' => 'MAR',
        'name' => 'Saint Mary Parish',
      ),
      12 => 
      array (
        'code' => 'THO',
        'name' => 'Saint Thomas Parish',
      ),
      13 => 
      array (
        'code' => 'TRL',
        'name' => 'Trelawny Parish',
      ),
      14 => 
      array (
        'code' => 'WML',
        'name' => 'Westmoreland Parish',
      ),
    ),
    'JO' => 
    array (
      1 => 
      array (
        'code' => 'AM',
        'name' => '&#39;Amman',
      ),
      2 => 
      array (
        'code' => 'AJ',
        'name' => 'Ajlun',
      ),
      3 => 
      array (
        'code' => 'AA',
        'name' => 'Al&#39;Aqabah',
      ),
      4 => 
      array (
        'code' => 'AB',
        'name' => 'Al Balqa&#39;',
      ),
      5 => 
      array (
        'code' => 'AK',
        'name' => 'Al Karak',
      ),
      6 => 
      array (
        'code' => 'AL',
        'name' => 'Al Mafraq',
      ),
      7 => 
      array (
        'code' => 'AT',
        'name' => 'At Tafilah',
      ),
      8 => 
      array (
        'code' => 'AZ',
        'name' => 'Az Zarqa&#39;',
      ),
      9 => 
      array (
        'code' => 'IR',
        'name' => 'Irbid',
      ),
      10 => 
      array (
        'code' => 'JA',
        'name' => 'Jarash',
      ),
      11 => 
      array (
        'code' => 'MA',
        'name' => 'Ma&#39;an',
      ),
      12 => 
      array (
        'code' => 'MD',
        'name' => 'Madaba',
      ),
    ),
    'JP' => 
    array (
      1 => 
      array (
        'code' => 'AI',
        'name' => 'Aichi',
      ),
      2 => 
      array (
        'code' => 'AK',
        'name' => 'Akita',
      ),
      3 => 
      array (
        'code' => 'AO',
        'name' => 'Aomori',
      ),
      4 => 
      array (
        'code' => 'CH',
        'name' => 'Chiba',
      ),
      5 => 
      array (
        'code' => 'EH',
        'name' => 'Ehime',
      ),
      6 => 
      array (
        'code' => 'FK',
        'name' => 'Fukui',
      ),
      7 => 
      array (
        'code' => 'FU',
        'name' => 'Fukuoka',
      ),
      8 => 
      array (
        'code' => 'FS',
        'name' => 'Fukushima',
      ),
      9 => 
      array (
        'code' => 'GI',
        'name' => 'Gifu',
      ),
      10 => 
      array (
        'code' => 'GU',
        'name' => 'Gumma',
      ),
      11 => 
      array (
        'code' => 'HI',
        'name' => 'Hiroshima',
      ),
      12 => 
      array (
        'code' => 'HO',
        'name' => 'Hokkaido',
      ),
      13 => 
      array (
        'code' => 'HY',
        'name' => 'Hyogo',
      ),
      14 => 
      array (
        'code' => 'IB',
        'name' => 'Ibaraki',
      ),
      15 => 
      array (
        'code' => 'IS',
        'name' => 'Ishikawa',
      ),
      16 => 
      array (
        'code' => 'IW',
        'name' => 'Iwate',
      ),
      17 => 
      array (
        'code' => 'KA',
        'name' => 'Kagawa',
      ),
      18 => 
      array (
        'code' => 'KG',
        'name' => 'Kagoshima',
      ),
      19 => 
      array (
        'code' => 'KN',
        'name' => 'Kanagawa',
      ),
      20 => 
      array (
        'code' => 'KO',
        'name' => 'Kochi',
      ),
      21 => 
      array (
        'code' => 'KU',
        'name' => 'Kumamoto',
      ),
      22 => 
      array (
        'code' => 'KY',
        'name' => 'Kyoto',
      ),
      23 => 
      array (
        'code' => 'MI',
        'name' => 'Mie',
      ),
      24 => 
      array (
        'code' => 'MY',
        'name' => 'Miyagi',
      ),
      25 => 
      array (
        'code' => 'MZ',
        'name' => 'Miyazaki',
      ),
      26 => 
      array (
        'code' => 'NA',
        'name' => 'Nagano',
      ),
      27 => 
      array (
        'code' => 'NG',
        'name' => 'Nagasaki',
      ),
      28 => 
      array (
        'code' => 'NR',
        'name' => 'Nara',
      ),
      29 => 
      array (
        'code' => 'NI',
        'name' => 'Niigata',
      ),
      30 => 
      array (
        'code' => 'OI',
        'name' => 'Oita',
      ),
      31 => 
      array (
        'code' => 'OK',
        'name' => 'Okayama',
      ),
      32 => 
      array (
        'code' => 'ON',
        'name' => 'Okinawa',
      ),
      33 => 
      array (
        'code' => 'OS',
        'name' => 'Osaka',
      ),
      34 => 
      array (
        'code' => 'SA',
        'name' => 'Saga',
      ),
      35 => 
      array (
        'code' => 'SI',
        'name' => 'Saitama',
      ),
      36 => 
      array (
        'code' => 'SH',
        'name' => 'Shiga',
      ),
      37 => 
      array (
        'code' => 'SM',
        'name' => 'Shimane',
      ),
      38 => 
      array (
        'code' => 'SZ',
        'name' => 'Shizuoka',
      ),
      39 => 
      array (
        'code' => 'TO',
        'name' => 'Tochigi',
      ),
      40 => 
      array (
        'code' => 'TS',
        'name' => 'Tokushima',
      ),
      41 => 
      array (
        'code' => 'TK',
        'name' => 'Tokyo',
      ),
      42 => 
      array (
        'code' => 'TT',
        'name' => 'Tottori',
      ),
      43 => 
      array (
        'code' => 'TY',
        'name' => 'Toyama',
      ),
      44 => 
      array (
        'code' => 'WA',
        'name' => 'Wakayama',
      ),
      45 => 
      array (
        'code' => 'YA',
        'name' => 'Yamagata',
      ),
      46 => 
      array (
        'code' => 'YM',
        'name' => 'Yamaguchi',
      ),
      47 => 
      array (
        'code' => 'YN',
        'name' => 'Yamanashi',
      ),
    ),
    'KE' => 
    array (
      1 => 
      array (
        'code' => 'CE',
        'name' => 'Central',
      ),
      2 => 
      array (
        'code' => 'CO',
        'name' => 'Coast',
      ),
      3 => 
      array (
        'code' => 'EA',
        'name' => 'Eastern',
      ),
      4 => 
      array (
        'code' => 'NA',
        'name' => 'Nairobi Area',
      ),
      5 => 
      array (
        'code' => 'NE',
        'name' => 'North Eastern',
      ),
      6 => 
      array (
        'code' => 'NY',
        'name' => 'Nyanza',
      ),
      7 => 
      array (
        'code' => 'RV',
        'name' => 'Rift Valley',
      ),
      8 => 
      array (
        'code' => 'WE',
        'name' => 'Western',
      ),
    ),
    'KG' => 
    array (
      1 => 
      array (
        'code' => 'GB',
        'name' => 'Bishkek',
      ),
      2 => 
      array (
        'code' => 'B',
        'name' => 'Batken',
      ),
      3 => 
      array (
        'code' => 'C',
        'name' => 'Chu',
      ),
      4 => 
      array (
        'code' => 'J',
        'name' => 'Jalal-Abad',
      ),
      5 => 
      array (
        'code' => 'N',
        'name' => 'Naryn',
      ),
      6 => 
      array (
        'code' => 'O',
        'name' => 'Osh',
      ),
      7 => 
      array (
        'code' => 'T',
        'name' => 'Talas',
      ),
      8 => 
      array (
        'code' => 'Y',
        'name' => 'Ysyk-Kol',
      ),
    ),
    'KH' => 
    array (
      1 => 
      array (
        'code' => 'BA',
        'name' => 'Battambang',
      ),
      2 => 
      array (
        'code' => 'BM',
        'name' => 'Banteay Meanchey',
      ),
      3 => 
      array (
        'code' => 'KB',
        'name' => 'Keb',
      ),
      4 => 
      array (
        'code' => 'KK',
        'name' => 'Kaoh Kong',
      ),
      5 => 
      array (
        'code' => 'KL',
        'name' => 'Kandal',
      ),
      6 => 
      array (
        'code' => 'KM',
        'name' => 'Kampong Cham',
      ),
      7 => 
      array (
        'code' => 'KN',
        'name' => 'Kampong Chhnang',
      ),
      8 => 
      array (
        'code' => 'KO',
        'name' => 'Kampong Som',
      ),
      9 => 
      array (
        'code' => 'KP',
        'name' => 'Kampot',
      ),
      10 => 
      array (
        'code' => 'KR',
        'name' => 'Kratie',
      ),
      11 => 
      array (
        'code' => 'KT',
        'name' => 'Kampong Thom',
      ),
      12 => 
      array (
        'code' => 'KU',
        'name' => 'Kampong Speu',
      ),
      13 => 
      array (
        'code' => 'MK',
        'name' => 'Mondul Kiri',
      ),
      14 => 
      array (
        'code' => 'OM',
        'name' => 'Oddar Meancheay',
      ),
      15 => 
      array (
        'code' => 'PA',
        'name' => 'Pailin',
      ),
      16 => 
      array (
        'code' => 'PG',
        'name' => 'Prey Veng',
      ),
      17 => 
      array (
        'code' => 'PP',
        'name' => 'Phnom Penh',
      ),
      18 => 
      array (
        'code' => 'PR',
        'name' => 'Preah Vihear',
      ),
      19 => 
      array (
        'code' => 'PS',
        'name' => 'Preah Seihanu (Kompong Som or Si)',
      ),
      20 => 
      array (
        'code' => 'PU',
        'name' => 'Pursat',
      ),
      21 => 
      array (
        'code' => 'RK',
        'name' => 'Ratanak Kiri',
      ),
      22 => 
      array (
        'code' => 'SI',
        'name' => 'Siemreap',
      ),
      23 => 
      array (
        'code' => 'SR',
        'name' => 'Svay Rieng',
      ),
      24 => 
      array (
        'code' => 'ST',
        'name' => 'Stung Treng',
      ),
      25 => 
      array (
        'code' => 'TK',
        'name' => 'Takeo',
      ),
    ),
    'KI' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'Abaiang',
      ),
      2 => 
      array (
        'code' => 'AM',
        'name' => 'Abemama',
      ),
      3 => 
      array (
        'code' => 'AK',
        'name' => 'Aranuka',
      ),
      4 => 
      array (
        'code' => 'AO',
        'name' => 'Arorae',
      ),
      5 => 
      array (
        'code' => 'BA',
        'name' => 'Banaba',
      ),
      6 => 
      array (
        'code' => 'BE',
        'name' => 'Beru',
      ),
      7 => 
      array (
        'code' => 'bT',
        'name' => 'Butaritari',
      ),
      8 => 
      array (
        'code' => 'KA',
        'name' => 'Kanton',
      ),
      9 => 
      array (
        'code' => 'KR',
        'name' => 'Kiritimati',
      ),
      10 => 
      array (
        'code' => 'KU',
        'name' => 'Kuria',
      ),
      11 => 
      array (
        'code' => 'MI',
        'name' => 'Maiana',
      ),
      12 => 
      array (
        'code' => 'MN',
        'name' => 'Makin',
      ),
      13 => 
      array (
        'code' => 'ME',
        'name' => 'Marakei',
      ),
      14 => 
      array (
        'code' => 'NI',
        'name' => 'Nikunau',
      ),
      15 => 
      array (
        'code' => 'NO',
        'name' => 'Nonouti',
      ),
      16 => 
      array (
        'code' => 'ON',
        'name' => 'Onotoa',
      ),
      17 => 
      array (
        'code' => 'TT',
        'name' => 'Tabiteuea',
      ),
      18 => 
      array (
        'code' => 'TR',
        'name' => 'Tabuaeran',
      ),
      19 => 
      array (
        'code' => 'TM',
        'name' => 'Tamana',
      ),
      20 => 
      array (
        'code' => 'TW',
        'name' => 'Tarawa',
      ),
      21 => 
      array (
        'code' => 'TE',
        'name' => 'Teraina',
      ),
    ),
    'KM' => 
    array (
      1 => 
      array (
        'code' => 'G',
        'name' => 'Grande Comore',
      ),
      2 => 
      array (
        'code' => 'A',
        'name' => 'Anjouan',
      ),
      3 => 
      array (
        'code' => 'M',
        'name' => 'Moheli',
      ),
    ),
    'KP' => 
    array (
      1 => 
      array (
        'code' => 'CHA',
        'name' => 'Chagang-do',
      ),
      2 => 
      array (
        'code' => 'HAB',
        'name' => 'Hamgyong-bukto',
      ),
      3 => 
      array (
        'code' => 'HAN',
        'name' => 'Hamgyong-namdo',
      ),
      4 => 
      array (
        'code' => 'HWB',
        'name' => 'Hwanghae-bukto',
      ),
      5 => 
      array (
        'code' => 'HWN',
        'name' => 'Hwanghae-namdo',
      ),
      6 => 
      array (
        'code' => 'KAN',
        'name' => 'Kangwon-do',
      ),
      7 => 
      array (
        'code' => 'PYB',
        'name' => 'P\\&#39;yongan-bukto',
      ),
      8 => 
      array (
        'code' => 'PYN',
        'name' => 'P\\&#39;yongan-namdo',
      ),
      9 => 
      array (
        'code' => 'YAN',
        'name' => 'Ryanggang-do (Yanggang-do)',
      ),
      10 => 
      array (
        'code' => 'NAJ',
        'name' => 'Rason Directly Governed City',
      ),
      11 => 
      array (
        'code' => 'PYO',
        'name' => 'P&#39;yongyang Special City',
      ),
    ),
    'KR' => 
    array (
      1 => 
      array (
        'code' => 'CO',
        'name' => 'Ch&#39;ungch&#39;ong-bukto',
      ),
      2 => 
      array (
        'code' => 'CH',
        'name' => 'Ch&#39;ungch&#39;ong-namdo',
      ),
      3 => 
      array (
        'code' => 'CD',
        'name' => 'Cheju-do',
      ),
      4 => 
      array (
        'code' => 'CB',
        'name' => 'Cholla-bukto',
      ),
      5 => 
      array (
        'code' => 'CN',
        'name' => 'Cholla-namdo',
      ),
      6 => 
      array (
        'code' => 'IG',
        'name' => 'Inch&#39;on-gwangyoksi',
      ),
      7 => 
      array (
        'code' => 'KA',
        'name' => 'Kangwon-do',
      ),
      8 => 
      array (
        'code' => 'KG',
        'name' => 'Kwangju-gwangyoksi',
      ),
      9 => 
      array (
        'code' => 'KD',
        'name' => 'Kyonggi-do',
      ),
      10 => 
      array (
        'code' => 'KB',
        'name' => 'Kyongsang-bukto',
      ),
      11 => 
      array (
        'code' => 'KN',
        'name' => 'Kyongsang-namdo',
      ),
      12 => 
      array (
        'code' => 'PG',
        'name' => 'Pusan-gwangyoksi',
      ),
      13 => 
      array (
        'code' => 'SO',
        'name' => 'Soul-t&#39;ukpyolsi',
      ),
      14 => 
      array (
        'code' => 'TA',
        'name' => 'Taegu-gwangyoksi',
      ),
      15 => 
      array (
        'code' => 'TG',
        'name' => 'Taejon-gwangyoksi',
      ),
    ),
    'KW' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Al&#39;Asimah',
      ),
      2 => 
      array (
        'code' => 'AA',
        'name' => 'Al Ahmadi',
      ),
      3 => 
      array (
        'code' => 'AF',
        'name' => 'Al Farwaniyah',
      ),
      4 => 
      array (
        'code' => 'AJ',
        'name' => 'Al Jahra&#39;',
      ),
      5 => 
      array (
        'code' => 'HA',
        'name' => 'Hawalli',
      ),
    ),
    'KY' => 
    array (
      1 => 
      array (
        'code' => 'CR',
        'name' => 'Creek',
      ),
      2 => 
      array (
        'code' => 'EA',
        'name' => 'Eastern',
      ),
      3 => 
      array (
        'code' => 'ML',
        'name' => 'Midland',
      ),
      4 => 
      array (
        'code' => 'ST',
        'name' => 'South Town',
      ),
      5 => 
      array (
        'code' => 'SP',
        'name' => 'Spot Bay',
      ),
      6 => 
      array (
        'code' => 'SK',
        'name' => 'Stake Bay',
      ),
      7 => 
      array (
        'code' => 'WD',
        'name' => 'West End',
      ),
      8 => 
      array (
        'code' => 'WN',
        'name' => 'Western',
      ),
    ),
    'KZ' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Almaty',
      ),
      2 => 
      array (
        'code' => 'AC',
        'name' => 'Almaty City',
      ),
      3 => 
      array (
        'code' => 'AM',
        'name' => 'Aqmola',
      ),
      4 => 
      array (
        'code' => 'AQ',
        'name' => 'Aqtobe',
      ),
      5 => 
      array (
        'code' => 'AS',
        'name' => 'Astana City',
      ),
      6 => 
      array (
        'code' => 'AT',
        'name' => 'Atyrau',
      ),
      7 => 
      array (
        'code' => 'BA',
        'name' => 'Batys Qazaqstan',
      ),
      8 => 
      array (
        'code' => 'BY',
        'name' => 'Bayqongyr City',
      ),
      9 => 
      array (
        'code' => 'MA',
        'name' => 'Mangghystau',
      ),
      10 => 
      array (
        'code' => 'ON',
        'name' => 'Ongtustik Qazaqstan',
      ),
      11 => 
      array (
        'code' => 'PA',
        'name' => 'Pavlodar',
      ),
      12 => 
      array (
        'code' => 'QA',
        'name' => 'Qaraghandy',
      ),
      13 => 
      array (
        'code' => 'QO',
        'name' => 'Qostanay',
      ),
      14 => 
      array (
        'code' => 'QY',
        'name' => 'Qyzylorda',
      ),
      15 => 
      array (
        'code' => 'SH',
        'name' => 'Shyghys Qazaqstan',
      ),
      16 => 
      array (
        'code' => 'SO',
        'name' => 'Soltustik Qazaqstan',
      ),
      17 => 
      array (
        'code' => 'ZH',
        'name' => 'Zhambyl',
      ),
    ),
    'LA' => 
    array (
      1 => 
      array (
        'code' => 'VT',
        'name' => 'Vientiane',
      ),
      2 => 
      array (
        'code' => 'AT',
        'name' => 'Attapu',
      ),
      3 => 
      array (
        'code' => 'BK',
        'name' => 'Bokeo',
      ),
      4 => 
      array (
        'code' => 'BL',
        'name' => 'Bolikhamxai',
      ),
      5 => 
      array (
        'code' => 'CH',
        'name' => 'Champasak',
      ),
      6 => 
      array (
        'code' => 'HO',
        'name' => 'Houaphan',
      ),
      7 => 
      array (
        'code' => 'KH',
        'name' => 'Khammouan',
      ),
      8 => 
      array (
        'code' => 'LM',
        'name' => 'Louang Namtha',
      ),
      9 => 
      array (
        'code' => 'LP',
        'name' => 'Louangphabang',
      ),
      10 => 
      array (
        'code' => 'OU',
        'name' => 'Oudomxai',
      ),
      11 => 
      array (
        'code' => 'PH',
        'name' => 'Phongsali',
      ),
      12 => 
      array (
        'code' => 'SL',
        'name' => 'Salavan',
      ),
      13 => 
      array (
        'code' => 'SV',
        'name' => 'Savannakhet',
      ),
      14 => 
      array (
        'code' => 'VI',
        'name' => 'Vientiane',
      ),
      15 => 
      array (
        'code' => 'XA',
        'name' => 'Xaignabouli',
      ),
      16 => 
      array (
        'code' => 'XE',
        'name' => 'Xekong',
      ),
      17 => 
      array (
        'code' => 'XI',
        'name' => 'Xiangkhoang',
      ),
      18 => 
      array (
        'code' => 'XN',
        'name' => 'Xaisomboun',
      ),
    ),
    'LB' => 
    array (
      1 => 
      array (
        'code' => 'BIN',
        'name' => 'Bint Jbeil',
      ),
      2 => 
      array (
        'code' => 'HAS',
        'name' => 'Hasbaya',
      ),
      3 => 
      array (
        'code' => 'MAR',
        'name' => 'Marjeyoun',
      ),
      4 => 
      array (
        'code' => 'NAB',
        'name' => 'Nabatieh',
      ),
      5 => 
      array (
        'code' => 'BAA',
        'name' => 'Baalbek',
      ),
      6 => 
      array (
        'code' => 'HER',
        'name' => 'Hermel',
      ),
      7 => 
      array (
        'code' => 'RAS',
        'name' => 'Rashaya',
      ),
      8 => 
      array (
        'code' => 'WES',
        'name' => 'Western Beqaa',
      ),
      9 => 
      array (
        'code' => 'ZAH',
        'name' => 'Zahle',
      ),
      10 => 
      array (
        'code' => 'AKK',
        'name' => 'Akkar',
      ),
      11 => 
      array (
        'code' => 'BAT',
        'name' => 'Batroun',
      ),
      12 => 
      array (
        'code' => 'BSH',
        'name' => 'Bsharri',
      ),
      13 => 
      array (
        'code' => 'KOU',
        'name' => 'Koura',
      ),
      14 => 
      array (
        'code' => 'MIN',
        'name' => 'Miniyeh-Danniyeh',
      ),
      15 => 
      array (
        'code' => 'TRI',
        'name' => 'Tripoli',
      ),
      16 => 
      array (
        'code' => 'ZGH',
        'name' => 'Zgharta',
      ),
      17 => 
      array (
        'code' => 'ALE',
        'name' => 'Aley',
      ),
      18 => 
      array (
        'code' => 'BAA',
        'name' => 'Baabda',
      ),
      19 => 
      array (
        'code' => 'BYB',
        'name' => 'Byblos',
      ),
      20 => 
      array (
        'code' => 'CHO',
        'name' => 'Chouf',
      ),
      21 => 
      array (
        'code' => 'KES',
        'name' => 'Kesrwan',
      ),
      22 => 
      array (
        'code' => 'MAT',
        'name' => 'Matn',
      ),
      23 => 
      array (
        'code' => 'JEZ',
        'name' => 'Jezzine',
      ),
      24 => 
      array (
        'code' => 'SID',
        'name' => 'Sidon',
      ),
      25 => 
      array (
        'code' => 'TYR',
        'name' => 'Tyre',
      ),
    ),
    'LI' => 
    array (
      1 => 
      array (
        'code' => 'V',
        'name' => 'Vaduz',
      ),
      2 => 
      array (
        'code' => 'A',
        'name' => 'Schaan',
      ),
      3 => 
      array (
        'code' => 'B',
        'name' => 'Balzers',
      ),
      4 => 
      array (
        'code' => 'N',
        'name' => 'Triesen',
      ),
      5 => 
      array (
        'code' => 'E',
        'name' => 'Eschen',
      ),
      6 => 
      array (
        'code' => 'M',
        'name' => 'Mauren',
      ),
      7 => 
      array (
        'code' => 'T',
        'name' => 'Triesenberg',
      ),
      8 => 
      array (
        'code' => 'R',
        'name' => 'Ruggell',
      ),
      9 => 
      array (
        'code' => 'G',
        'name' => 'Gamprin',
      ),
      10 => 
      array (
        'code' => 'L',
        'name' => 'Schellenberg',
      ),
      11 => 
      array (
        'code' => 'P',
        'name' => 'Planken',
      ),
    ),
    'LR' => 
    array (
      1 => 
      array (
        'code' => 'BI',
        'name' => 'Bomi',
      ),
      2 => 
      array (
        'code' => 'BG',
        'name' => 'Bong',
      ),
      3 => 
      array (
        'code' => 'GB',
        'name' => 'Grand Bassa',
      ),
      4 => 
      array (
        'code' => 'CM',
        'name' => 'Grand Cape Mount',
      ),
      5 => 
      array (
        'code' => 'GG',
        'name' => 'Grand Gedeh',
      ),
      6 => 
      array (
        'code' => 'GK',
        'name' => 'Grand Kru',
      ),
      7 => 
      array (
        'code' => 'LO',
        'name' => 'Lofa',
      ),
      8 => 
      array (
        'code' => 'MG',
        'name' => 'Margibi',
      ),
      9 => 
      array (
        'code' => 'ML',
        'name' => 'Maryland',
      ),
      10 => 
      array (
        'code' => 'MS',
        'name' => 'Montserrado',
      ),
      11 => 
      array (
        'code' => 'NB',
        'name' => 'Nimba',
      ),
      12 => 
      array (
        'code' => 'RC',
        'name' => 'River Cess',
      ),
      13 => 
      array (
        'code' => 'SN',
        'name' => 'Sinoe',
      ),
    ),
    'LS' => 
    array (
      1 => 
      array (
        'code' => 'BE',
        'name' => 'Berea',
      ),
      2 => 
      array (
        'code' => 'BB',
        'name' => 'Butha-Buthe',
      ),
      3 => 
      array (
        'code' => 'LE',
        'name' => 'Leribe',
      ),
      4 => 
      array (
        'code' => 'MF',
        'name' => 'Mafeteng',
      ),
      5 => 
      array (
        'code' => 'MS',
        'name' => 'Maseru',
      ),
      6 => 
      array (
        'code' => 'MH',
        'name' => 'Mohale&#39;s Hoek',
      ),
      7 => 
      array (
        'code' => 'MK',
        'name' => 'Mokhotlong',
      ),
      8 => 
      array (
        'code' => 'QN',
        'name' => 'Qacha&#39;s Nek',
      ),
      9 => 
      array (
        'code' => 'QT',
        'name' => 'Quthing',
      ),
      10 => 
      array (
        'code' => 'TT',
        'name' => 'Thaba-Tseka',
      ),
    ),
    'LT' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Alytus',
      ),
      2 => 
      array (
        'code' => 'KA',
        'name' => 'Kaunas',
      ),
      3 => 
      array (
        'code' => 'KL',
        'name' => 'Klaipeda',
      ),
      4 => 
      array (
        'code' => 'MA',
        'name' => 'Marijampole',
      ),
      5 => 
      array (
        'code' => 'PA',
        'name' => 'Panevezys',
      ),
      6 => 
      array (
        'code' => 'SI',
        'name' => 'Siauliai',
      ),
      7 => 
      array (
        'code' => 'TA',
        'name' => 'Taurage',
      ),
      8 => 
      array (
        'code' => 'TE',
        'name' => 'Telsiai',
      ),
      9 => 
      array (
        'code' => 'UT',
        'name' => 'Utena',
      ),
      10 => 
      array (
        'code' => 'VI',
        'name' => 'Vilnius',
      ),
    ),
    'LU' => 
    array (
      1 => 
      array (
        'code' => 'DD',
        'name' => 'Diekirch',
      ),
      2 => 
      array (
        'code' => 'DC',
        'name' => 'Clervaux',
      ),
      3 => 
      array (
        'code' => 'DR',
        'name' => 'Redange',
      ),
      4 => 
      array (
        'code' => 'DV',
        'name' => 'Vianden',
      ),
      5 => 
      array (
        'code' => 'DW',
        'name' => 'Wiltz',
      ),
      6 => 
      array (
        'code' => 'GG',
        'name' => 'Grevenmacher',
      ),
      7 => 
      array (
        'code' => 'GE',
        'name' => 'Echternach',
      ),
      8 => 
      array (
        'code' => 'GR',
        'name' => 'Remich',
      ),
      9 => 
      array (
        'code' => 'LL',
        'name' => 'Luxembourg',
      ),
      10 => 
      array (
        'code' => 'LC',
        'name' => 'Capellen',
      ),
      11 => 
      array (
        'code' => 'LE',
        'name' => 'Esch-sur-Alzette',
      ),
      12 => 
      array (
        'code' => 'LM',
        'name' => 'Mersch',
      ),
    ),
    'LV' => 
    array (
      1 => 
      array (
        'code' => 'AIZ',
        'name' => 'Aizkraukles Rajons',
      ),
      2 => 
      array (
        'code' => 'ALU',
        'name' => 'Aluksnes Rajons',
      ),
      3 => 
      array (
        'code' => 'BAL',
        'name' => 'Balvu Rajons',
      ),
      4 => 
      array (
        'code' => 'BAU',
        'name' => 'Bauskas Rajons',
      ),
      5 => 
      array (
        'code' => 'CES',
        'name' => 'Cesu Rajons',
      ),
      6 => 
      array (
        'code' => 'DGR',
        'name' => 'Daugavpils Rajons',
      ),
      7 => 
      array (
        'code' => 'DOB',
        'name' => 'Dobeles Rajons',
      ),
      8 => 
      array (
        'code' => 'GUL',
        'name' => 'Gulbenes Rajons',
      ),
      9 => 
      array (
        'code' => 'JEK',
        'name' => 'Jekabpils Rajons',
      ),
      10 => 
      array (
        'code' => 'JGR',
        'name' => 'Jelgavas Rajons',
      ),
      11 => 
      array (
        'code' => 'KRA',
        'name' => 'Kraslavas Rajons',
      ),
      12 => 
      array (
        'code' => 'KUL',
        'name' => 'Kuldigas Rajons',
      ),
      13 => 
      array (
        'code' => 'LPR',
        'name' => 'Liepajas Rajons',
      ),
      14 => 
      array (
        'code' => 'LIM',
        'name' => 'Limbazu Rajons',
      ),
      15 => 
      array (
        'code' => 'LUD',
        'name' => 'Ludzas Rajons',
      ),
      16 => 
      array (
        'code' => 'MAD',
        'name' => 'Madonas Rajons',
      ),
      17 => 
      array (
        'code' => 'OGR',
        'name' => 'Ogres Rajons',
      ),
      18 => 
      array (
        'code' => 'PRE',
        'name' => 'Preilu Rajons',
      ),
      19 => 
      array (
        'code' => 'RZR',
        'name' => 'Rezeknes Rajons',
      ),
      20 => 
      array (
        'code' => 'RGR',
        'name' => 'Rigas Rajons',
      ),
      21 => 
      array (
        'code' => 'SAL',
        'name' => 'Saldus Rajons',
      ),
      22 => 
      array (
        'code' => 'TAL',
        'name' => 'Talsu Rajons',
      ),
      23 => 
      array (
        'code' => 'TUK',
        'name' => 'Tukuma Rajons',
      ),
      24 => 
      array (
        'code' => 'VLK',
        'name' => 'Valkas Rajons',
      ),
      25 => 
      array (
        'code' => 'VLM',
        'name' => 'Valmieras Rajons',
      ),
      26 => 
      array (
        'code' => 'VSR',
        'name' => 'Ventspils Rajons',
      ),
      27 => 
      array (
        'code' => 'DGV',
        'name' => 'Daugavpils',
      ),
      28 => 
      array (
        'code' => 'JGV',
        'name' => 'Jelgava',
      ),
      29 => 
      array (
        'code' => 'JUR',
        'name' => 'Jurmala',
      ),
      30 => 
      array (
        'code' => 'LPK',
        'name' => 'Liepaja',
      ),
      31 => 
      array (
        'code' => 'RZK',
        'name' => 'Rezekne',
      ),
      32 => 
      array (
        'code' => 'RGA',
        'name' => 'Riga',
      ),
      33 => 
      array (
        'code' => 'VSL',
        'name' => 'Ventspils',
      ),
    ),
    'LY' => 
    array (
      1 => 
      array (
        'code' => 'AJ',
        'name' => 'Ajdabiya',
      ),
      2 => 
      array (
        'code' => 'AZ',
        'name' => 'Al &#39;Aziziyah',
      ),
      3 => 
      array (
        'code' => 'FA',
        'name' => 'Al Fatih',
      ),
      4 => 
      array (
        'code' => 'JA',
        'name' => 'Al Jabal al Akhdar',
      ),
      5 => 
      array (
        'code' => 'JU',
        'name' => 'Al Jufrah',
      ),
      6 => 
      array (
        'code' => 'KH',
        'name' => 'Al Khums',
      ),
      7 => 
      array (
        'code' => 'KU',
        'name' => 'Al Kufrah',
      ),
      8 => 
      array (
        'code' => 'NK',
        'name' => 'An Nuqat al Khams',
      ),
      9 => 
      array (
        'code' => 'AS',
        'name' => 'Ash Shati&#39;',
      ),
      10 => 
      array (
        'code' => 'AW',
        'name' => 'Awbari',
      ),
      11 => 
      array (
        'code' => 'ZA',
        'name' => 'Az Zawiyah',
      ),
      12 => 
      array (
        'code' => 'BA',
        'name' => 'Banghazi',
      ),
      13 => 
      array (
        'code' => 'DA',
        'name' => 'Darnah',
      ),
      14 => 
      array (
        'code' => 'GD',
        'name' => 'Ghadamis',
      ),
      15 => 
      array (
        'code' => 'GY',
        'name' => 'Gharyan',
      ),
      16 => 
      array (
        'code' => 'MI',
        'name' => 'Misratah',
      ),
      17 => 
      array (
        'code' => 'MZ',
        'name' => 'Murzuq',
      ),
      18 => 
      array (
        'code' => 'SB',
        'name' => 'Sabha',
      ),
      19 => 
      array (
        'code' => 'SW',
        'name' => 'Sawfajjin',
      ),
      20 => 
      array (
        'code' => 'SU',
        'name' => 'Surt',
      ),
      21 => 
      array (
        'code' => 'TL',
        'name' => 'Tarabulus (Tripoli)',
      ),
      22 => 
      array (
        'code' => 'TH',
        'name' => 'Tarhunah',
      ),
      23 => 
      array (
        'code' => 'TU',
        'name' => 'Tubruq',
      ),
      24 => 
      array (
        'code' => 'YA',
        'name' => 'Yafran',
      ),
      25 => 
      array (
        'code' => 'ZL',
        'name' => 'Zlitan',
      ),
    ),
    'MA' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
      23 => 
      array (
        'code' => '',
        'name' => '',
      ),
      24 => 
      array (
        'code' => '',
        'name' => '',
      ),
      25 => 
      array (
        'code' => '',
        'name' => '',
      ),
      26 => 
      array (
        'code' => '',
        'name' => '',
      ),
      27 => 
      array (
        'code' => '',
        'name' => '',
      ),
      28 => 
      array (
        'code' => '',
        'name' => '',
      ),
      29 => 
      array (
        'code' => '',
        'name' => '',
      ),
      30 => 
      array (
        'code' => '',
        'name' => '',
      ),
      31 => 
      array (
        'code' => '',
        'name' => '',
      ),
      32 => 
      array (
        'code' => '',
        'name' => '',
      ),
      33 => 
      array (
        'code' => '',
        'name' => '',
      ),
      34 => 
      array (
        'code' => '',
        'name' => '',
      ),
      35 => 
      array (
        'code' => '',
        'name' => '',
      ),
      36 => 
      array (
        'code' => '',
        'name' => '',
      ),
      37 => 
      array (
        'code' => '',
        'name' => '',
      ),
      38 => 
      array (
        'code' => '',
        'name' => '',
      ),
      39 => 
      array (
        'code' => '',
        'name' => '',
      ),
      40 => 
      array (
        'code' => '',
        'name' => '',
      ),
      41 => 
      array (
        'code' => '',
        'name' => '',
      ),
      42 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'MC' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'MD' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'MG' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'Antananarivo',
      ),
      2 => 
      array (
        'code' => 'AS',
        'name' => 'Antsiranana',
      ),
      3 => 
      array (
        'code' => 'FN',
        'name' => 'Fianarantsoa',
      ),
      4 => 
      array (
        'code' => 'MJ',
        'name' => 'Mahajanga',
      ),
      5 => 
      array (
        'code' => 'TM',
        'name' => 'Toamasina',
      ),
      6 => 
      array (
        'code' => 'TL',
        'name' => 'Toliara',
      ),
    ),
    'MH' => 
    array (
      1 => 
      array (
        'code' => 'ALG',
        'name' => 'Ailinginae',
      ),
      2 => 
      array (
        'code' => 'ALL',
        'name' => 'Ailinglaplap',
      ),
      3 => 
      array (
        'code' => 'ALK',
        'name' => 'Ailuk',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
      23 => 
      array (
        'code' => '',
        'name' => '',
      ),
      24 => 
      array (
        'code' => '',
        'name' => '',
      ),
      25 => 
      array (
        'code' => '',
        'name' => '',
      ),
      26 => 
      array (
        'code' => '',
        'name' => '',
      ),
      27 => 
      array (
        'code' => '',
        'name' => '',
      ),
      28 => 
      array (
        'code' => '',
        'name' => '',
      ),
      29 => 
      array (
        'code' => '',
        'name' => '',
      ),
      30 => 
      array (
        'code' => '',
        'name' => '',
      ),
      31 => 
      array (
        'code' => '',
        'name' => '',
      ),
      32 => 
      array (
        'code' => '',
        'name' => '',
      ),
      33 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'MK' => 
    array (
      1 => 
      array (
        'code' => 'AER',
        'name' => 'Aerodrom',
      ),
      2 => 
      array (
        'code' => 'ARA',
        'name' => 'Aračinovo',
      ),
      3 => 
      array (
        'code' => 'BER',
        'name' => 'Berovo',
      ),
      4 => 
      array (
        'code' => 'BIT',
        'name' => 'Bitola',
      ),
      5 => 
      array (
        'code' => 'BOG',
        'name' => 'Bogdanci',
      ),
      6 => 
      array (
        'code' => 'BOG',
        'name' => 'Bogovinje',
      ),
      7 => 
      array (
        'code' => 'BOS',
        'name' => 'Bosilovo',
      ),
      8 => 
      array (
        'code' => 'BRV',
        'name' => 'Brvenica',
      ),
      9 => 
      array (
        'code' => 'BUT',
        'name' => 'Butel',
      ),
      10 => 
      array (
        'code' => 'ČAI',
        'name' => 'Čair',
      ),
      11 => 
      array (
        'code' => 'ČAš',
        'name' => 'Čaška',
      ),
      12 => 
      array (
        'code' => 'CEN',
        'name' => 'Centar',
      ),
      13 => 
      array (
        'code' => 'CEN',
        'name' => 'Centar Župa',
      ),
      14 => 
      array (
        'code' => 'Češ',
        'name' => 'Češinovo-Obleš',
      ),
      15 => 
      array (
        'code' => 'ČUČ',
        'name' => 'Čučer-Sandevo',
      ),
      16 => 
      array (
        'code' => 'DEB',
        'name' => 'Debar',
      ),
      17 => 
      array (
        'code' => 'DEB',
        'name' => 'Debarca',
      ),
      18 => 
      array (
        'code' => 'DEL',
        'name' => 'Delčevo',
      ),
      19 => 
      array (
        'code' => 'DEM',
        'name' => 'Demir Hisar',
      ),
      20 => 
      array (
        'code' => 'DEM',
        'name' => 'Demir Kapija',
      ),
      21 => 
      array (
        'code' => 'DOL',
        'name' => 'Dolneni',
      ),
      22 => 
      array (
        'code' => 'DRU',
        'name' => 'Drugovo',
      ),
      23 => 
      array (
        'code' => 'GAZ',
        'name' => 'Gazi Baba',
      ),
      24 => 
      array (
        'code' => 'GEV',
        'name' => 'Gevgelija',
      ),
      25 => 
      array (
        'code' => 'GJO',
        'name' => 'Gjorče Petrov',
      ),
      26 => 
      array (
        'code' => 'GOS',
        'name' => 'Gostivar',
      ),
      27 => 
      array (
        'code' => 'GRA',
        'name' => 'Gradsko',
      ),
      28 => 
      array (
        'code' => 'ILI',
        'name' => 'Ilinden',
      ),
      29 => 
      array (
        'code' => 'JEG',
        'name' => 'Jegunovce',
      ),
      30 => 
      array (
        'code' => 'KAR',
        'name' => 'Karbinci',
      ),
      31 => 
      array (
        'code' => 'KAR',
        'name' => 'Karpoš',
      ),
      32 => 
      array (
        'code' => 'KAV',
        'name' => 'Kavadarci',
      ),
      33 => 
      array (
        'code' => 'KIČ',
        'name' => 'Kičevo',
      ),
      34 => 
      array (
        'code' => 'KIS',
        'name' => 'Kisela Voda',
      ),
      35 => 
      array (
        'code' => 'KOč',
        'name' => 'Kočani',
      ),
      36 => 
      array (
        'code' => 'KON',
        'name' => 'Konče',
      ),
      37 => 
      array (
        'code' => 'KRA',
        'name' => 'Kratovo',
      ),
      38 => 
      array (
        'code' => 'KRI',
        'name' => 'Kriva Palanka',
      ),
      39 => 
      array (
        'code' => 'KRI',
        'name' => 'Krivogaštani',
      ),
      40 => 
      array (
        'code' => 'KRU',
        'name' => 'Kruševo',
      ),
      41 => 
      array (
        'code' => 'KUM',
        'name' => 'Kumanovo',
      ),
      42 => 
      array (
        'code' => 'LIP',
        'name' => 'Lipkovo',
      ),
      43 => 
      array (
        'code' => 'LOZ',
        'name' => 'Lozovo',
      ),
      44 => 
      array (
        'code' => 'MAK',
        'name' => 'Makedonska Kamenica',
      ),
      45 => 
      array (
        'code' => 'MAK',
        'name' => 'Makedonski Brod',
      ),
      46 => 
      array (
        'code' => 'MAV',
        'name' => 'Mavrovo and Rostuša',
      ),
      47 => 
      array (
        'code' => 'MOG',
        'name' => 'Mogila',
      ),
      48 => 
      array (
        'code' => 'NEG',
        'name' => 'Negotino',
      ),
      49 => 
      array (
        'code' => 'NOV',
        'name' => 'Novaci',
      ),
      50 => 
      array (
        'code' => 'NOV',
        'name' => 'Novo Selo',
      ),
      51 => 
      array (
        'code' => 'OHR',
        'name' => 'Ohrid',
      ),
      52 => 
      array (
        'code' => 'OSL',
        'name' => 'Oslomej',
      ),
      53 => 
      array (
        'code' => 'PEH',
        'name' => 'Pehčevo',
      ),
      54 => 
      array (
        'code' => 'PET',
        'name' => 'Petrovec',
      ),
      55 => 
      array (
        'code' => 'PLA',
        'name' => 'Plasnica',
      ),
      56 => 
      array (
        'code' => 'PRI',
        'name' => 'Prilep',
      ),
      57 => 
      array (
        'code' => 'PRO',
        'name' => 'Probištip',
      ),
      58 => 
      array (
        'code' => 'RAD',
        'name' => 'Radoviš',
      ),
      59 => 
      array (
        'code' => 'RAN',
        'name' => 'Rankovce',
      ),
      60 => 
      array (
        'code' => 'RES',
        'name' => 'Resen',
      ),
      61 => 
      array (
        'code' => 'ROS',
        'name' => 'Rosoman',
      ),
      62 => 
      array (
        'code' => 'SAR',
        'name' => 'Saraj',
      ),
      63 => 
      array (
        'code' => 'SOP',
        'name' => 'Sopište',
      ),
      64 => 
      array (
        'code' => 'STA',
        'name' => 'Star Dojran',
      ),
      65 => 
      array (
        'code' => 'STA',
        'name' => 'Staro Nagoričane',
      ),
      66 => 
      array (
        'code' => 'ŠTI',
        'name' => 'Štip',
      ),
      67 => 
      array (
        'code' => 'STR',
        'name' => 'Struga',
      ),
      68 => 
      array (
        'code' => 'STR',
        'name' => 'Strumica',
      ),
      69 => 
      array (
        'code' => 'STU',
        'name' => 'Studeničani',
      ),
      70 => 
      array (
        'code' => 'ŠUT',
        'name' => 'Šuto Orizari',
      ),
      71 => 
      array (
        'code' => 'SVE',
        'name' => 'Sveti Nikole',
      ),
      72 => 
      array (
        'code' => 'TEA',
        'name' => 'Tearce',
      ),
      73 => 
      array (
        'code' => 'TET',
        'name' => 'Tetovo',
      ),
      74 => 
      array (
        'code' => 'VAL',
        'name' => 'Valandovo',
      ),
      75 => 
      array (
        'code' => 'VAS',
        'name' => 'Vasilevo',
      ),
      76 => 
      array (
        'code' => 'VEL',
        'name' => 'Veles',
      ),
      77 => 
      array (
        'code' => 'MD',
        'name' => 'Vevčani',
      ),
      78 => 
      array (
        'code' => 'VIN',
        'name' => 'Vinica',
      ),
      79 => 
      array (
        'code' => 'VRA',
        'name' => 'Vraneštica',
      ),
      80 => 
      array (
        'code' => 'VRA',
        'name' => 'Vrapčište',
      ),
      81 => 
      array (
        'code' => 'ZAJ',
        'name' => 'Zajas',
      ),
      82 => 
      array (
        'code' => 'ZEL',
        'name' => 'Zelenikovo',
      ),
      83 => 
      array (
        'code' => 'ŽEL',
        'name' => 'Želino',
      ),
      84 => 
      array (
        'code' => 'ZRN',
        'name' => 'Zrnovci',
      ),
    ),
    'ML' => 
    array (
      1 => 
      array (
        'code' => 'GA',
        'name' => 'Gao',
      ),
      2 => 
      array (
        'code' => 'KY',
        'name' => 'Kayes',
      ),
      3 => 
      array (
        'code' => 'KD',
        'name' => 'Kidal',
      ),
      4 => 
      array (
        'code' => 'KL',
        'name' => 'Koulikoro',
      ),
      5 => 
      array (
        'code' => 'MP',
        'name' => 'Mopti',
      ),
      6 => 
      array (
        'code' => 'SG',
        'name' => 'Segou',
      ),
      7 => 
      array (
        'code' => 'SK',
        'name' => 'Sikasso',
      ),
      8 => 
      array (
        'code' => 'TB',
        'name' => 'Tombouctou',
      ),
      9 => 
      array (
        'code' => 'CD',
        'name' => 'Bamako Capital District',
      ),
    ),
    'MM' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'MN' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'MO' => 
    array (
      1 => 
      array (
        'code' => 'OLF',
        'name' => 'Our Lady Fatima Parish',
      ),
      2 => 
      array (
        'code' => 'ANT',
        'name' => 'St. Anthony Parish',
      ),
      3 => 
      array (
        'code' => 'LAZ',
        'name' => 'St. Lazarus Parish',
      ),
      4 => 
      array (
        'code' => 'CAT',
        'name' => 'Cathedral Parish',
      ),
      5 => 
      array (
        'code' => 'LAW',
        'name' => 'St. Lawrence Parish',
      ),
    ),
    'MP' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'MQ' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
      23 => 
      array (
        'code' => '',
        'name' => '',
      ),
      24 => 
      array (
        'code' => '',
        'name' => '',
      ),
      25 => 
      array (
        'code' => '',
        'name' => '',
      ),
      26 => 
      array (
        'code' => '',
        'name' => '',
      ),
      27 => 
      array (
        'code' => '',
        'name' => '',
      ),
      28 => 
      array (
        'code' => '',
        'name' => '',
      ),
      29 => 
      array (
        'code' => '',
        'name' => '',
      ),
      30 => 
      array (
        'code' => '',
        'name' => '',
      ),
      31 => 
      array (
        'code' => '',
        'name' => '',
      ),
      32 => 
      array (
        'code' => '',
        'name' => '',
      ),
      33 => 
      array (
        'code' => '',
        'name' => '',
      ),
      34 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'MR' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'MS' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'MT' => 
    array (
      1 => 
      array (
        'code' => 'ATT',
        'name' => 'Attard',
      ),
      2 => 
      array (
        'code' => 'BAL',
        'name' => 'Balzan',
      ),
      3 => 
      array (
        'code' => 'BGU',
        'name' => 'Birgu',
      ),
      4 => 
      array (
        'code' => 'BKK',
        'name' => 'Birkirkara',
      ),
      5 => 
      array (
        'code' => 'BRZ',
        'name' => 'Birzebbuga',
      ),
      6 => 
      array (
        'code' => 'BOR',
        'name' => 'Bormla',
      ),
      7 => 
      array (
        'code' => 'DIN',
        'name' => 'Dingli',
      ),
      8 => 
      array (
        'code' => 'FGU',
        'name' => 'Fgura',
      ),
      9 => 
      array (
        'code' => 'FLO',
        'name' => 'Floriana',
      ),
      10 => 
      array (
        'code' => 'GDJ',
        'name' => 'Gudja',
      ),
      11 => 
      array (
        'code' => 'GZR',
        'name' => 'Gzira',
      ),
      12 => 
      array (
        'code' => 'GRG',
        'name' => 'Gargur',
      ),
      13 => 
      array (
        'code' => 'GXQ',
        'name' => 'Gaxaq',
      ),
      14 => 
      array (
        'code' => 'HMR',
        'name' => 'Hamrun',
      ),
      15 => 
      array (
        'code' => 'IKL',
        'name' => 'Iklin',
      ),
      16 => 
      array (
        'code' => 'ISL',
        'name' => 'Isla',
      ),
      17 => 
      array (
        'code' => 'KLK',
        'name' => 'Kalkara',
      ),
      18 => 
      array (
        'code' => 'KRK',
        'name' => 'Kirkop',
      ),
      19 => 
      array (
        'code' => 'LIJ',
        'name' => 'Lija',
      ),
      20 => 
      array (
        'code' => 'LUQ',
        'name' => 'Luqa',
      ),
      21 => 
      array (
        'code' => 'MRS',
        'name' => 'Marsa',
      ),
      22 => 
      array (
        'code' => 'MKL',
        'name' => 'Marsaskala',
      ),
      23 => 
      array (
        'code' => 'MXL',
        'name' => 'Marsaxlokk',
      ),
      24 => 
      array (
        'code' => 'MDN',
        'name' => 'Mdina',
      ),
      25 => 
      array (
        'code' => 'MEL',
        'name' => 'Melliea',
      ),
      26 => 
      array (
        'code' => 'MGR',
        'name' => 'Mgarr',
      ),
      27 => 
      array (
        'code' => 'MST',
        'name' => 'Mosta',
      ),
      28 => 
      array (
        'code' => 'MQA',
        'name' => 'Mqabba',
      ),
      29 => 
      array (
        'code' => 'MSI',
        'name' => 'Msida',
      ),
      30 => 
      array (
        'code' => 'MTF',
        'name' => 'Mtarfa',
      ),
      31 => 
      array (
        'code' => 'NAX',
        'name' => 'Naxxar',
      ),
      32 => 
      array (
        'code' => 'PAO',
        'name' => 'Paola',
      ),
      33 => 
      array (
        'code' => 'PEM',
        'name' => 'Pembroke',
      ),
      34 => 
      array (
        'code' => 'PIE',
        'name' => 'Pieta',
      ),
      35 => 
      array (
        'code' => 'QOR',
        'name' => 'Qormi',
      ),
      36 => 
      array (
        'code' => 'QRE',
        'name' => 'Qrendi',
      ),
      37 => 
      array (
        'code' => 'RAB',
        'name' => 'Rabat',
      ),
      38 => 
      array (
        'code' => 'SAF',
        'name' => 'Safi',
      ),
      39 => 
      array (
        'code' => 'SGI',
        'name' => 'San Giljan',
      ),
      40 => 
      array (
        'code' => 'SLU',
        'name' => 'Santa Lucija',
      ),
      41 => 
      array (
        'code' => 'SPB',
        'name' => 'San Pawl il-Bahar',
      ),
      42 => 
      array (
        'code' => 'SGW',
        'name' => 'San Gwann',
      ),
      43 => 
      array (
        'code' => 'SVE',
        'name' => 'Santa Venera',
      ),
      44 => 
      array (
        'code' => 'SIG',
        'name' => 'Siggiewi',
      ),
      45 => 
      array (
        'code' => 'SLM',
        'name' => 'Sliema',
      ),
      46 => 
      array (
        'code' => 'SWQ',
        'name' => 'Swieqi',
      ),
      47 => 
      array (
        'code' => 'TXB',
        'name' => 'Ta Xbiex',
      ),
      48 => 
      array (
        'code' => 'TRX',
        'name' => 'Tarxien',
      ),
      49 => 
      array (
        'code' => 'VLT',
        'name' => 'Valletta',
      ),
      50 => 
      array (
        'code' => 'XGJ',
        'name' => 'Xgajra',
      ),
      51 => 
      array (
        'code' => 'ZBR',
        'name' => 'Zabbar',
      ),
      52 => 
      array (
        'code' => 'ZBG',
        'name' => 'Zebbug',
      ),
      53 => 
      array (
        'code' => 'ZJT',
        'name' => 'Zejtun',
      ),
      54 => 
      array (
        'code' => 'ZRQ',
        'name' => 'Zurrieq',
      ),
      55 => 
      array (
        'code' => 'FNT',
        'name' => 'Fontana',
      ),
      56 => 
      array (
        'code' => 'GHJ',
        'name' => 'Ghajnsielem',
      ),
      57 => 
      array (
        'code' => 'GHR',
        'name' => 'Gharb',
      ),
      58 => 
      array (
        'code' => 'GHS',
        'name' => 'Ghasri',
      ),
      59 => 
      array (
        'code' => 'KRC',
        'name' => 'Kercem',
      ),
      60 => 
      array (
        'code' => 'MUN',
        'name' => 'Munxar',
      ),
      61 => 
      array (
        'code' => 'NAD',
        'name' => 'Nadur',
      ),
      62 => 
      array (
        'code' => 'QAL',
        'name' => 'Qala',
      ),
      63 => 
      array (
        'code' => 'VIC',
        'name' => 'Victoria',
      ),
      64 => 
      array (
        'code' => 'SLA',
        'name' => 'San Lawrenz',
      ),
      65 => 
      array (
        'code' => 'SNT',
        'name' => 'Sannat',
      ),
      66 => 
      array (
        'code' => 'ZAG',
        'name' => 'Xagra',
      ),
      67 => 
      array (
        'code' => 'XEW',
        'name' => 'Xewkija',
      ),
      68 => 
      array (
        'code' => 'ZEB',
        'name' => 'Zebbug',
      ),
    ),
    'MU' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'MV' => 
    array (
      1 => 
      array (
        'code' => 'AAD',
        'name' => 'Ari Atoll Dheknu',
      ),
      2 => 
      array (
        'code' => 'AAU',
        'name' => 'Ari Atoll Uthuru',
      ),
      3 => 
      array (
        'code' => 'ADD',
        'name' => 'Addu',
      ),
      4 => 
      array (
        'code' => 'FAA',
        'name' => 'Faadhippolhu',
      ),
      5 => 
      array (
        'code' => 'FEA',
        'name' => 'Felidhe Atoll',
      ),
      6 => 
      array (
        'code' => 'FMU',
        'name' => 'Fua Mulaku',
      ),
      7 => 
      array (
        'code' => 'HAD',
        'name' => 'Huvadhu Atoll Dhekunu',
      ),
      8 => 
      array (
        'code' => 'HAU',
        'name' => 'Huvadhu Atoll Uthuru',
      ),
      9 => 
      array (
        'code' => 'HDH',
        'name' => 'Hadhdhunmathi',
      ),
      10 => 
      array (
        'code' => 'KLH',
        'name' => 'Kolhumadulu',
      ),
      11 => 
      array (
        'code' => 'MAA',
        'name' => 'Male Atoll',
      ),
      12 => 
      array (
        'code' => 'MAD',
        'name' => 'Maalhosmadulu Dhekunu',
      ),
      13 => 
      array (
        'code' => 'MAU',
        'name' => 'Maalhosmadulu Uthuru',
      ),
      14 => 
      array (
        'code' => 'MLD',
        'name' => 'Miladhunmadulu Dhekunu',
      ),
      15 => 
      array (
        'code' => 'MLU',
        'name' => 'Miladhunmadulu Uthuru',
      ),
      16 => 
      array (
        'code' => 'MUA',
        'name' => 'Mulaku Atoll',
      ),
      17 => 
      array (
        'code' => 'NAD',
        'name' => 'Nilandhe Atoll Dhekunu',
      ),
      18 => 
      array (
        'code' => 'NAU',
        'name' => 'Nilandhe Atoll Uthuru',
      ),
      19 => 
      array (
        'code' => 'THD',
        'name' => 'Thiladhunmathi Dhekunu',
      ),
      20 => 
      array (
        'code' => 'THU',
        'name' => 'Thiladhunmathi Uthuru',
      ),
    ),
    'MW' => 
    array (
      1 => 
      array (
        'code' => 'BLK',
        'name' => 'Balaka',
      ),
      2 => 
      array (
        'code' => 'BLT',
        'name' => 'Blantyre',
      ),
      3 => 
      array (
        'code' => 'CKW',
        'name' => 'Chikwawa',
      ),
      4 => 
      array (
        'code' => 'CRD',
        'name' => 'Chiradzulu',
      ),
      5 => 
      array (
        'code' => 'CTP',
        'name' => 'Chitipa',
      ),
      6 => 
      array (
        'code' => 'DDZ',
        'name' => 'Dedza',
      ),
      7 => 
      array (
        'code' => 'DWA',
        'name' => 'Dowa',
      ),
      8 => 
      array (
        'code' => 'KRG',
        'name' => 'Karonga',
      ),
      9 => 
      array (
        'code' => 'KSG',
        'name' => 'Kasungu',
      ),
      10 => 
      array (
        'code' => 'LKM',
        'name' => 'Likoma',
      ),
      11 => 
      array (
        'code' => 'LLG',
        'name' => 'Lilongwe',
      ),
      12 => 
      array (
        'code' => 'MCG',
        'name' => 'Machinga',
      ),
      13 => 
      array (
        'code' => 'MGC',
        'name' => 'Mangochi',
      ),
      14 => 
      array (
        'code' => 'MCH',
        'name' => 'Mchinji',
      ),
      15 => 
      array (
        'code' => 'MLJ',
        'name' => 'Mulanje',
      ),
      16 => 
      array (
        'code' => 'MWZ',
        'name' => 'Mwanza',
      ),
      17 => 
      array (
        'code' => 'MZM',
        'name' => 'Mzimba',
      ),
      18 => 
      array (
        'code' => 'NTU',
        'name' => 'Ntcheu',
      ),
      19 => 
      array (
        'code' => 'NKB',
        'name' => 'Nkhata Bay',
      ),
      20 => 
      array (
        'code' => 'NKH',
        'name' => 'Nkhotakota',
      ),
      21 => 
      array (
        'code' => 'NSJ',
        'name' => 'Nsanje',
      ),
      22 => 
      array (
        'code' => 'NTI',
        'name' => 'Ntchisi',
      ),
      23 => 
      array (
        'code' => 'PHL',
        'name' => 'Phalombe',
      ),
      24 => 
      array (
        'code' => 'RMP',
        'name' => 'Rumphi',
      ),
      25 => 
      array (
        'code' => 'SLM',
        'name' => 'Salima',
      ),
      26 => 
      array (
        'code' => 'THY',
        'name' => 'Thyolo',
      ),
      27 => 
      array (
        'code' => 'ZBA',
        'name' => 'Zomba',
      ),
    ),
    'MX' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
      23 => 
      array (
        'code' => '',
        'name' => '',
      ),
      24 => 
      array (
        'code' => '',
        'name' => '',
      ),
      25 => 
      array (
        'code' => '',
        'name' => '',
      ),
      26 => 
      array (
        'code' => '',
        'name' => '',
      ),
      27 => 
      array (
        'code' => '',
        'name' => '',
      ),
      28 => 
      array (
        'code' => '',
        'name' => '',
      ),
      29 => 
      array (
        'code' => '',
        'name' => '',
      ),
      30 => 
      array (
        'code' => '',
        'name' => '',
      ),
      31 => 
      array (
        'code' => '',
        'name' => '',
      ),
      32 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'MY' => 
    array (
      1 => 
      array (
        'code' => 'Johor',
        'name' => 'Johor',
      ),
      2 => 
      array (
        'code' => 'Kedah',
        'name' => 'Kedah',
      ),
      3 => 
      array (
        'code' => 'Kelantan',
        'name' => 'Kelantan',
      ),
      4 => 
      array (
        'code' => 'Labuan',
        'name' => 'Labuan',
      ),
      5 => 
      array (
        'code' => 'Melaka',
        'name' => 'Melaka',
      ),
      6 => 
      array (
        'code' => 'Negeri Sembilan',
        'name' => 'Negeri Sembilan',
      ),
      7 => 
      array (
        'code' => 'Pahang',
        'name' => 'Pahang',
      ),
      8 => 
      array (
        'code' => 'Perak',
        'name' => 'Perak',
      ),
      9 => 
      array (
        'code' => 'Perlis',
        'name' => 'Perlis',
      ),
      10 => 
      array (
        'code' => 'Pulau Pinang',
        'name' => 'Pulau Pinang',
      ),
      11 => 
      array (
        'code' => 'Sabah',
        'name' => 'Sabah',
      ),
      12 => 
      array (
        'code' => 'Sarawak',
        'name' => 'Sarawak',
      ),
      13 => 
      array (
        'code' => 'Selangor',
        'name' => 'Selangor',
      ),
      14 => 
      array (
        'code' => 'Terengganu',
        'name' => 'Terengganu',
      ),
      15 => 
      array (
        'code' => 'Kuala Lumpur',
        'name' => 'Kuala Lumpur',
      ),
    ),
    'MZ' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'NA' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'NC' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'NE' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'NF' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'NG' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
      21 => 
      array (
        'code' => '',
        'name' => '',
      ),
      22 => 
      array (
        'code' => '',
        'name' => '',
      ),
      23 => 
      array (
        'code' => '',
        'name' => '',
      ),
      24 => 
      array (
        'code' => '',
        'name' => '',
      ),
      25 => 
      array (
        'code' => '',
        'name' => '',
      ),
      26 => 
      array (
        'code' => '',
        'name' => '',
      ),
      27 => 
      array (
        'code' => '',
        'name' => '',
      ),
      28 => 
      array (
        'code' => '',
        'name' => '',
      ),
      29 => 
      array (
        'code' => '',
        'name' => '',
      ),
      30 => 
      array (
        'code' => '',
        'name' => '',
      ),
      31 => 
      array (
        'code' => '',
        'name' => '',
      ),
      32 => 
      array (
        'code' => '',
        'name' => '',
      ),
      33 => 
      array (
        'code' => '',
        'name' => '',
      ),
      34 => 
      array (
        'code' => '',
        'name' => '',
      ),
      35 => 
      array (
        'code' => '',
        'name' => '',
      ),
      36 => 
      array (
        'code' => '',
        'name' => '',
      ),
      37 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'NI' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'NL' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'NO' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
      20 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'NP' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'NR' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'NU' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'NZ' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
      18 => 
      array (
        'code' => '',
        'name' => '',
      ),
      19 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'OM' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'PA' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'PF' => 
    array (
      1 => 
      array (
        'code' => 'M',
        'name' => 'Archipel des Marquises',
      ),
      2 => 
      array (
        'code' => 'T',
        'name' => 'Archipel des Tuamotu',
      ),
      3 => 
      array (
        'code' => 'I',
        'name' => 'Archipel des Tubuai',
      ),
      4 => 
      array (
        'code' => 'V',
        'name' => 'Iles du Vent',
      ),
      5 => 
      array (
        'code' => 'S',
        'name' => 'Iles Sous-le-Vent',
      ),
    ),
    'PG' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
      ),
    ),
    'PK' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'PW' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => '',
        'name' => '',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    'SV' => 
    array (
      1 => 
      array (
        'code' => 'AH',
        'name' => 'Ahuachapan',
      ),
      2 => 
      array (
        'code' => 'CA',
        'name' => 'Cabanas',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'Chalatenango',
      ),
      4 => 
      array (
        'code' => 'CU',
        'name' => 'Cuscatlan',
      ),
      5 => 
      array (
        'code' => 'LB',
        'name' => 'La Libertad',
      ),
      6 => 
      array (
        'code' => 'PZ',
        'name' => 'La Paz',
      ),
      7 => 
      array (
        'code' => 'UN',
        'name' => 'La Union',
      ),
      8 => 
      array (
        'code' => 'MO',
        'name' => 'Morazan',
      ),
      9 => 
      array (
        'code' => 'SM',
        'name' => 'San Miguel',
      ),
      10 => 
      array (
        'code' => 'SS',
        'name' => 'San Salvador',
      ),
      11 => 
      array (
        'code' => 'SV',
        'name' => 'San Vicente',
      ),
      12 => 
      array (
        'code' => 'SA',
        'name' => 'Santa Ana',
      ),
      13 => 
      array (
        'code' => 'SO',
        'name' => 'Sonsonate',
      ),
      14 => 
      array (
        'code' => 'US',
        'name' => 'Usulutan',
      ),
    ),
    'TD' => 
    array (
      1 => 
      array (
        'code' => 'BA',
        'name' => 'Batha',
      ),
      2 => 
      array (
        'code' => 'BI',
        'name' => 'Biltine',
      ),
      3 => 
      array (
        'code' => 'BE',
        'name' => 'Borkou-Ennedi-Tibesti',
      ),
      4 => 
      array (
        'code' => 'CB',
        'name' => 'Chari-Baguirmi',
      ),
      5 => 
      array (
        'code' => 'GU',
        'name' => 'Guera',
      ),
      6 => 
      array (
        'code' => 'KA',
        'name' => 'Kanem',
      ),
      7 => 
      array (
        'code' => 'LA',
        'name' => 'Lac',
      ),
      8 => 
      array (
        'code' => 'LC',
        'name' => 'Logone Occidental',
      ),
      9 => 
      array (
        'code' => 'LR',
        'name' => 'Logone Oriental',
      ),
      10 => 
      array (
        'code' => 'MK',
        'name' => 'Mayo-Kebbi',
      ),
      11 => 
      array (
        'code' => 'MC',
        'name' => 'Moyen-Chari',
      ),
      12 => 
      array (
        'code' => 'OU',
        'name' => 'Ouaddai',
      ),
      13 => 
      array (
        'code' => 'SA',
        'name' => 'Salamat',
      ),
      14 => 
      array (
        'code' => 'TA',
        'name' => 'Tandjile',
      ),
    ),
    'TF' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => 'Iles Crozet',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => 'Iles Kerguelen',
      ),
      3 => 
      array (
        'code' => 'A',
        'name' => 'Ile Amsterdam',
      ),
      4 => 
      array (
        'code' => 'P',
        'name' => 'Ile Saint-Paul',
      ),
      5 => 
      array (
        'code' => 'D',
        'name' => 'Adelie Land',
      ),
    ),
    'TP' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'Aileu',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'Ainaro',
      ),
      3 => 
      array (
        'code' => 'BA',
        'name' => 'Baucau',
      ),
      4 => 
      array (
        'code' => 'BO',
        'name' => 'Bobonaro',
      ),
      5 => 
      array (
        'code' => 'CO',
        'name' => 'Cova Lima',
      ),
      6 => 
      array (
        'code' => 'DI',
        'name' => 'Dili',
      ),
      7 => 
      array (
        'code' => 'ER',
        'name' => 'Ermera',
      ),
      8 => 
      array (
        'code' => 'LA',
        'name' => 'Lautem',
      ),
      9 => 
      array (
        'code' => 'LI',
        'name' => 'Liquica',
      ),
      10 => 
      array (
        'code' => 'MT',
        'name' => 'Manatuto',
      ),
      11 => 
      array (
        'code' => 'MF',
        'name' => 'Manufahi',
      ),
      12 => 
      array (
        'code' => 'OE',
        'name' => 'Oecussi',
      ),
      13 => 
      array (
        'code' => 'VI',
        'name' => 'Viqueque',
      ),
    ),
    'YT' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => '',
      ),
      2 => 
      array (
        'code' => '',
        'name' => '',
      ),
      3 => 
      array (
        'code' => '',
        'name' => '',
      ),
      4 => 
      array (
        'code' => 'DEM',
        'name' => 'Dembeni',
      ),
      5 => 
      array (
        'code' => '',
        'name' => '',
      ),
      6 => 
      array (
        'code' => '',
        'name' => '',
      ),
      7 => 
      array (
        'code' => '',
        'name' => '',
      ),
      8 => 
      array (
        'code' => '',
        'name' => '',
      ),
      9 => 
      array (
        'code' => '',
        'name' => '',
      ),
      10 => 
      array (
        'code' => '',
        'name' => '',
      ),
      11 => 
      array (
        'code' => '',
        'name' => '',
      ),
      12 => 
      array (
        'code' => '',
        'name' => '',
      ),
      13 => 
      array (
        'code' => '',
        'name' => '',
      ),
      14 => 
      array (
        'code' => '',
        'name' => '',
      ),
      15 => 
      array (
        'code' => '',
        'name' => '',
      ),
      16 => 
      array (
        'code' => '',
        'name' => '',
      ),
      17 => 
      array (
        'code' => '',
        'name' => '',
      ),
    ),
    86 => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'Saint Andrew',
      ),
      2 => 
      array (
        'code' => 'D',
        'name' => 'Saint David',
      ),
      3 => 
      array (
        'code' => 'G',
        'name' => 'Saint George',
      ),
      4 => 
      array (
        'code' => 'J',
        'name' => 'Saint John',
      ),
      5 => 
      array (
        'code' => 'M',
        'name' => 'Saint Mark',
      ),
      6 => 
      array (
        'code' => 'P',
        'name' => 'Saint Patrick',
      ),
      7 => 
      array (
        'code' => 'C',
        'name' => 'Carriacou',
      ),
      8 => 
      array (
        'code' => 'Q',
        'name' => 'Petit Martinique',
      ),
    ),
  ),
  'document_category_dom' => 
  array (
    '' => '[-κενό-]',
    'Knowledege Base' => 'Βάση Γνώσεων',
    'Marketing' => 'Μάρκετινγκ',
    'Sales' => 'Πωλήσεις',
  ),
  'document_status_dom' => 
  array (
    'Active' => 'Ενεργό',
    'Draft' => 'Πρόχειρο',
    'Expired' => 'Έληξε',
    'FAQ' => 'Συχνές Ερωτήσεις',
    'Pending' => 'Σε Εκκρεμότητα',
    'Under Review' => 'Σε Ανασκόπηση',
  ),
  'document_subcategory_dom' => 
  array (
    '' => '[-κενό-]',
    'FAQ' => 'Συχνές Ερωτήσεις',
    'Marketing Collateral' => 'Υλικό Μάρκετινγκ',
    'Product Brochures' => 'Φυλλάδια Προϊόντων',
  ),
  'document_template_type_dom' => 
  array (
    '' => '[-κενό-]',
    'eula' => 'EULA',
    'license' => 'Άδεια Χρήσης',
    'mailmerge' => 'Συγχώνευση Αλληλογραφίας',
    'nda' => 'NDA',
  ),
  'documentation' => 
  array (
    'COM' => '05_Sugar_Community_Edition',
    'CORP' => '03_Sugar_Corporate',
    'ENT' => '02_Sugar_Enterprise',
    'LBL_DOCS' => 'Τεκμηρίωση',
    'PRO' => '04_Sugar_Professional',
    'ULT' => '01_Sugar_Ultimate',
  ),
  'dom_cal_day_long' => 
  array (
    0 => '',
    1 => 'Κυριακή',
    2 => 'Δευτέρα',
    3 => 'Τρίτη',
    4 => 'Τετάρτη',
    5 => 'Πέμπτη',
    6 => 'Παρασκευή',
    7 => 'Σάββατο',
  ),
  'dom_cal_day_of_week' => 
  array (
    0 => 'Κυρ',
    1 => 'Δευ',
    2 => 'Τρί',
    3 => 'Τετ',
    4 => 'Πέμ',
    5 => 'Παρ',
    6 => 'Σάβ',
  ),
  'dom_cal_day_short' => 
  array (
    0 => '',
    1 => 'Κυρ',
    2 => 'Δευτ',
    3 => 'Τρ',
    4 => 'Τετ',
    5 => 'Πέμ',
    6 => 'Παρ',
    7 => 'Σάβ',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Ιανουάριος',
    2 => 'Φεβρουάριος',
    3 => 'Μάρτιος',
    4 => 'Απρίλιος',
    5 => 'Μάιος',
    6 => 'Ιούνιος',
    7 => 'Ιούλιος',
    8 => 'Αύγουστος',
    9 => 'Σεπτέμβριος',
    10 => 'Οκτώβριος',
    11 => 'Νοέμβριος',
    12 => 'Δεκέμβριος',
  ),
  'dom_cal_month_short' => 
  array (
    0 => '',
    1 => 'Ιαν',
    2 => 'Φεβ',
    3 => 'Μαρ',
    4 => 'Απρ',
    5 => 'Μαϊ',
    6 => 'Ιουν',
    7 => 'Ιούλ',
    8 => 'Αυγ',
    9 => 'Σεπ',
    10 => 'Οκτ',
    11 => 'Νοε',
    12 => 'Δεκ',
  ),
  'dom_email_archived_status' => 
  array (
    'archived' => 'Αρχειοθετημένο',
  ),
  'dom_email_bool' => 
  array (
    'bool_false' => 'Όχι',
    'bool_true' => 'Ναι',
  ),
  'dom_email_distribution' => 
  array (
    '' => '--Κανένα--',
    'direct' => 'Απευθείας Ανάθεση',
    'leastBusy' => 'Λιγότερο-Απασχολημένο',
    'roundRobin' => 'Κατόπιν Ψηφοφορίας',
  ),
  'dom_email_distribution_for_auto_create' => 
  array (
    'leastBusy' => 'Λιγότερο-Απασχολημένο',
    'roundRobin' => 'Κατόπιν Ψηφοφορίας',
  ),
  'dom_email_editor_option' => 
  array (
    '' => 'Προεπιλεγμένη Μορφή Email',
    'html' => 'Email HTML',
    'plain' => 'Απλό Κείμενο Email',
  ),
  'dom_email_errors' => 
  array (
    1 => 'Επιλέξτε μόνο έναν χρήστη για απευθείας ανάθεση.',
    2 => 'Μορείτε να αναθέσετε μόνο τα επιλεγμένα στοιχεία.',
  ),
  'dom_email_link_type' => 
  array (
    'mailto' => 'Εξωτερικό Email Client',
    'sugar' => 'SugarCRM',
  ),
  'dom_email_server_type' => 
  array (
    '' => '--Κανένα--',
    'imap' => 'IMAP',
  ),
  'dom_email_status' => 
  array (
    'archived' => 'Αρχειοθετημένο',
    'closed' => 'Κλειστό',
    'draft' => 'Σε Πρόχειρο',
    'read' => 'Αναγνωσμένο',
    'replied' => 'Απαντημένο',
    'send_error' => 'Λάθος Αποστολής',
    'sent' => 'Απεσταλμένο',
    'unread' => 'Μη Αναγνωσμένο',
  ),
  'dom_email_types' => 
  array (
    'archived' => 'Αρχειοθετημένο',
    'campaign' => 'Εκστρατεία',
    'draft' => 'Πρόχειρο',
    'inbound' => 'Εισερχόμενο',
    'out' => 'Απεσταλμένο',
  ),
  'dom_int_bool' => 
  array (
    0 => 'Ναι',
    1 => 'κανένα',
  ),
  'dom_mailbox_type' => 
  array (
    'bounce' => 'Μετάθεση',
    'createcase' => 'Δημιουργία Υπόθεσης',
    'pick' => '--Κανένα--',
  ),
  'dom_meeting_accept_options' => 
  array (
    'accept' => 'Αποδεκτή',
    'decline' => 'Απορριπτέα',
    'tentative' => 'Διερευνητική',
  ),
  'dom_meeting_accept_status' => 
  array (
    'accept' => 'Αποδεκτή',
    'decline' => 'Απορριπτέα',
    'none' => 'Καμία',
    'tentative' => 'Διερευνητική',
  ),
  'dom_meridiem_lowercase' => 
  array (
    'am' => 'π.μ',
    'pm' => 'μ.μ',
  ),
  'dom_meridiem_uppercase' => 
  array (
    'AM' => 'Π.Μ',
    'PM' => 'Μ.Μ',
  ),
  'dom_report_types' => 
  array (
    'Matrix' => 'Μητρική',
    'detailed_summary' => 'Αναλυτική',
    'summary' => 'Περιληπτική',
    'tabular' => 'Γραμμές & Στήλες',
  ),
  'dom_switch_bool' => 
  array (
    '' => 'Όχι',
    'off' => 'Όχι',
    'on' => 'Ναι',
  ),
  'dselect_type_dom' => 
  array (
    'Does not Equal' => 'Δεν Ισούται',
    'Equals' => 'Ισούται',
    'Less Than' => 'Λιγότερο Από',
    'More Than' => 'Περισσότερο Από',
  ),
  'dtselect_type_dom' => 
  array (
    'Less Than' => 'είναι λιγότερο από',
    'More Than' => 'ήταν περισσότερο από',
  ),
  'duration_dom' => 
  array (
    '' => '[-κενό-]',
    900 => '15 λεπτά',
    1800 => '30 λεπτά',
    2700 => '45 λεπτά',
    3600 => '1 ώρα',
    5400 => '1.5 ώρες',
    7200 => '2 ώρες',
    10800 => '3 ώρες',
    21600 => '6 ώρες',
    86400 => '1 ημέρα',
    172800 => '2 ημέρες',
    259200 => '3 ημέρες',
    604800 => '1 εβδομάδα',
  ),
  'duration_intervals' => 
  array (
    0 => '00',
    15 => '15',
    30 => '30',
    45 => '45',
  ),
  'eapm_list' => 
  array (
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'GoToMeeting' => 'Μετάβαση σε Συνάντηση',
    'Google' => 'Google',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Sugar' => 'Sugar',
    'Twitter' => 'Twitter',
    'WebEx' => 'WebEx',
  ),
  'eapm_list_documents' => 
  array (
    'Google' => 'Google Έγγραφα',
  ),
  'eapm_list_import' => 
  array (
    'Google' => 'Google Επαφές',
  ),
  'emailTemplates_type_list' => 
  array (
    '' => '[-κενό-]',
    'campaign' => 'Εκστρατεία',
    'email' => 'Email',
    'workflow' => 'Ροή Εργασίας',
  ),
  'emailTemplates_type_list_campaigns' => 
  array (
    '' => '[-κενό-]',
    'campaign' => 'Εκστρατεία',
  ),
  'emailTemplates_type_list_no_workflow' => 
  array (
    '' => '[-κενό-]',
    'campaign' => 'Εκστρατεία',
    'email' => 'Email',
  ),
  'email_check_interval_dom' => 
  array (
    -1 => 'Χειροκίνητα',
    5 => 'Κάθε 5 λεπτά',
    15 => 'Κάθε 15 λεπτά',
    30 => 'Κάθε 30 λεπτά',
    60 => 'Κάθε ώρα',
  ),
  'email_marketing_status_dom' => 
  array (
    '' => '[-κενό-]',
    'active' => 'Ενεργή',
    'inactive' => 'Ανενεργή',
  ),
  'email_settings_for_ssl' => 
  array (
    0 => '',
    1 => 'SSL',
    2 => 'TLS',
  ),
  'email_settings_num_dom' => 
  array (
    10 => '10',
    20 => '20',
    50 => '50',
  ),
  'employee_status_dom' => 
  array (
    'Active' => 'Ενεργός',
    'Leave of Absence' => 'Αδειούχος',
    'Terminated' => 'Απολυμένος',
  ),
  'extapi_meeting_password' => 
  array (
    'WebEx' => 'WebEx',
  ),
  'filter_checkbox_dom' => 
  array (
    0 => 'Ψέμα',
    1 => 'Αλήθεια',
  ),
  'font_size_dom' => 
  array (
    -5 => 'Μικρότερο (-5)',
    -4 => 'Μικρότερο (-4)',
    -3 => 'Μικρότερο (-3)',
    -2 => 'Μικρότερο (-2)',
    -1 => 'Μικρότερο (-1)',
    'Default' => 'Προεπιλογή',
    1 => 'Μεγαλύτερο (+1)',
    2 => 'Μεγαλύτερο (+2)',
    3 => 'Μεγαλύτερο (+3)',
    4 => 'Μεγαλύτερο (+4)',
    5 => 'Μεγαλύτερο (+5)',
  ),
  'forecast_fiscal_year_options' => 
  array (
    'current_year' => '{{έτος}}',
    'next_year' => '{{έτος}}',
  ),
  'forecast_pareto_visibility_options' => 
  array (
    'group' => 'Προβλέψεις Ομάδας Μου',
    'user' => 'Πρόβλεψη Μου',
  ),
  'forecast_pipeline_visibility_options' => 
  array (
    'group' => 'Αγωγός της Ομάδας Μου',
    'user' => 'Αγωγός Μου',
  ),
  'forecast_schedule_status_dom' => 
  array (
    'Active' => 'Ενεργή',
    'Inactive' => 'Ανενεργή',
  ),
  'forecast_type_dom' => 
  array (
    'Direct' => 'Άμεση',
    'Rollup' => 'Κυλιόμενη',
  ),
  'forecasts_chart_options_group' => 
  array (
    'forecast' => 'Συμπεριλαμβάνεται στις Προβλέψεις',
    'probability' => 'Πιθανότητα',
    'sales_stage' => 'Στάδιο Πώλησης',
  ),
  'forecasts_config_ranges_options_dom' => 
  array (
    'show_binary' => 'Δύο Σειρές',
    'show_buckets' => 'Τρεις Σειρές',
    'show_custom_buckets' => 'Προσαρμοσμένες Σειρές',
  ),
  'forecasts_config_worksheet_layout_forecast_by_options_dom' => 
  array (
    'Opportunities' => 'Ευκαιρίες',
    'RevenueLineItems' => 'Γραμμή Εσόδων',
  ),
  'forecasts_options_dataset' => 
  array (
    'best' => 'Καλύτερη',
    'likely' => 'Πιθανή',
    'worst' => 'Χειρότερη',
  ),
  'forecasts_timeperiod_options_dom' => 
  array (
    'Annual' => 'Ετήσια (Τριμηνιαία υπο-περίοδος)',
    'Quarter' => 'Τριμηνιαία (Μηνιαία υπο-περίοδος)',
  ),
  'forecasts_timeperiod_types_dom' => 
  array (
    'chronological' => 'Έτος & Ημερομηνία',
  ),
  'fts_type' => 
  array (
    'Elastic' => 'Ελαστική Αναζήτηση',
  ),
  'gender_list' => 
  array (
    'female' => 'Θηλυκό',
    'male' => 'Αρσενικό',
  ),
  'generic_timeperiod_options' => 
  array (
    'current' => 'Αυτό το Τρίμηνο',
    'next' => 'Επόμενο Τρίμηνο',
    'year' => 'Αυτό το Έτος',
  ),
  'history_filter_options' => 
  array (
    7 => 'Τελευταίες 7 Ημέρες',
    30 => 'Τελευταίες 30 Ημέρες',
    90 => 'Τελευταίο Τρίμηνο',
  ),
  'history_limit_options' => 
  array (
    5 => '5',
    10 => '10',
    15 => '15',
    20 => '20',
  ),
  'history_visibility_options' => 
  array (
    'group' => 'Όχι',
    'user' => 'Ναι',
  ),
  'import_delimeter_options' => 
  array (
    ',' => ',',
    '.' => '.',
    ':' => ':',
    ';' => ';',
    '\\t' => '\\t',
    'other' => 'Άλλο:',
    '|' => '|',
  ),
  'import_enclosure_options' => 
  array (
    '' => 'Κανένα',
    '"' => 'Διπλό Εισαγωγικό (")',
    '\'' => 'Ενιαίο Εισαγωγικό (*)',
    'other' => 'Άλλο:',
  ),
  'in_total_group_stages' => 
  array (
    'Closed Accepted' => 'Έκλεισε Κερδισμένη',
    'Closed Dead' => 'Έκλεισε Νεκρή',
    'Closed Lost' => 'Έκλεισε Χαμένη',
    'Confirmed' => 'Επιβεβαιωμένη',
    'Delivered' => 'Παραδομένη',
    'Draft' => 'Πρόχειρη',
    'Negotiation' => 'Σε Διαπραγμάτευση',
    'On Hold' => 'Σε Αναμονή',
  ),
  'industry_dom' => 
  array (
    '' => '[-κενό-]',
    'Apparel' => 'Ένδυση',
    'Banking' => 'Τράπεζες',
    'Biotechnology' => 'Βιοτεχνολογία',
    'Chemicals' => 'Χημικά',
    'Communications' => 'Επικοινωνίες',
    'Construction' => 'Κατασκευές',
    'Consulting' => 'Σύμβουλοι',
    'Education' => 'Εκπαίδευση',
    'Electronics' => 'Ηλεκτρονικά',
    'Energy' => 'Ενέργεια',
    'Engineering' => 'Μηχανολογικός Εξοπλισμός',
    'Entertainment' => 'Ψυχαγωγία',
    'Environmental' => 'Περιβαλλοντολογικά',
    'Finance' => 'Οικονομικά',
    'Government' => 'Government',
    'Healthcare' => 'Υγεία',
    'Hospitality' => 'Ξενοδοχειακά',
    'Insurance' => 'Ασφάλειες',
    'Machinery' => 'Μηχανήματα',
    'Manufacturing' => 'Βιομηχανία',
    'Media' => 'Μέσα Ενημέρωσης',
    'Not For Profit' => 'Μη Κερδοσκοπικός Οργανισμός',
    'Other' => 'Άλλο',
    'Recreation' => 'Διασκέδαση',
    'Retail' => 'Λιανική Πώληση',
    'Shipping' => 'Ναυτιλία',
    'Technology' => 'Τεχνολογία',
    'Telecommunications' => 'Τηλεπικοινωνίες',
    'Transportation' => 'Μεταφορές',
    'Utilities' => 'Κοινωφελής Επιχείρηση',
  ),
  'interactions_options' => 
  array (
    'custom' => 'Προσαρμοσμένο μου Φίλτρο',
    'favorites' => 'Αγαπημένα',
    7 => 'Τελευταίες 7 Ημέρες',
    30 => 'Τελευταίες 30 Ημέρες',
    90 => 'Τελευταίο Τρίμηνο',
  ),
  'issue_priority_dom' => 
  array (
    'High' => 'Υψηλή',
    'Low' => 'Χαμηλή',
    'Medium' => 'Μεσαία',
    'Urgent' => 'Επείγων',
  ),
  'issue_resolution_dom' => 
  array (
    '' => '[-κενό-]',
    'Accepted' => 'Αποδεκτό',
    'Closed' => 'Έκλεισε',
    'Duplicate' => 'Αντίγραφο',
    'Invalid' => 'Άκυρο',
    'Out of Date' => 'Ληγμένο Χρονικά',
  ),
  'issue_status_dom' => 
  array (
    'Assigned' => 'Ανατέθηκε',
    'Closed' => 'Έκλεισε',
    'New' => 'Νέο',
    'Pending' => 'Σε Εκκρεμότητα',
    'Rejected' => 'Απορρίφθηκε',
  ),
  'kbadmin_actions_dom' => 
  array (
    '' => '--Ενέργειες Διαχειριστή--',
    'Apply Tags On Articles' => 'Εφαρμογή Ετικετών σε Άρθρα',
    'Create New Tag' => 'Δημιουργία Νέας Ετικέτας',
    'Delete Selected Articles' => 'Διαγραφή Επιλεγμένων Άρθρων',
    'Delete Tag' => 'Διαγραφή Ετικέτας',
    'Move Selected Articles' => 'Μετακίνηση Επιλεγμένων Άρθρων',
    'Rename Tag' => 'Μετονομασία Ετικέτας',
  ),
  'kbdocument_attachment_option_dom' => 
  array (
    '' => '[-κενό-]',
    'mime' => 'Προσδιορισμός Τύπου Mime',
    'name' => 'Προσδιορισμός Ονόματος',
    'none' => 'Δεν έχει Καμία',
    'some' => 'Έχει Επισυνάψεις',
  ),
  'kbdocument_canned_search' => 
  array (
    'added' => 'Προστέθηκε Τελευταίες 30 ημέρες',
    'all' => 'Όλα',
    'faqs' => 'Συχνές Ερωτήσεις',
    'pending' => 'Εν αναμονή Έγκρισης μου',
    'updated' => 'Τελευταία Ενημέρωση 30 ημέρες',
  ),
  'kbdocument_date_filter_options' => 
  array (
    '' => '[-κενό-]',
    'after' => 'Μετά',
    'before' => 'Πριν',
    'between_dates' => 'είναι Μεταξύ',
    'isnull' => 'είναι Άκυρο',
    'last_30_days' => 'Τελευταίες 30 Ημέρες',
    'last_7_days' => 'Τελευταίες 7 Ημέρες',
    'last_month' => 'Τελευταίο Μήνα',
    'last_year' => 'Τελευταίο Έτος',
    'next_30_days' => 'Επόμενες 30 Ημέρες',
    'next_7_days' => 'Επόμενες 7 Ημέρες',
    'next_month' => 'Επόμενο Μήνα',
    'next_year' => 'Επόμενο Ετος',
    'on' => 'Πάνω',
    'this_month' => 'Αυτόν τον Μήνα',
    'this_year' => 'Αυτό το Έτος',
  ),
  'kbdocument_status_dom' => 
  array (
    'Draft' => 'Πρόχειρο',
    'Expired' => 'Ληγμένο',
    'In Review' => 'Σε Αναθεώρηση',
    'Published' => 'Δημοσιευμένο',
  ),
  'kbdocument_viewing_frequency_dom' => 
  array (
    '' => '[-κενό-]',
    'Bot_10' => '10 Τελευταία',
    'Bot_20' => '20 Τελευταία',
    'Bot_5' => '5 Τελευταία',
    'Top_10' => '10 Καλύτερα',
    'Top_20' => '20 Καλύτερα',
    'Top_5' => '5 Καλύτερα',
  ),
  'language_pack_name' => 'Αγγλικά US',
  'layouts_dom' => 
  array (
    'Invoice' => 'Τιμολόγιο',
    'Standard' => 'Προσφορά',
  ),
  'lead_conv_activity_opt' => 
  array (
    'copy' => 'Αντιγραφή',
    'donothing' => 'Καμία ενέργεια',
    'move' => 'Μετακίνηση',
  ),
  'lead_source_dom' => 
  array (
    '' => '[-κενό-]',
    'Campaign' => 'Εκστρατεία',
    'Cold Call' => 'Ψυχρό Τηλεφώνημα',
    'Conference' => 'Συνέδριο',
    'Direct Mail' => 'Άμεση Αλληλογραφία',
    'Email' => 'Email',
    'Employee' => 'Εργαζόμενο',
    'Existing Customer' => 'Δυνητικό Πελάτη',
    'Other' => 'Άλλο',
    'Partner' => 'Συνεργάτη',
    'Public Relations' => 'Δημόσιες Σχέσεις',
    'Self Generated' => 'Αυτοδημιούργητος',
    'Support Portal User Registration' => 'Εγγραφή Χρήστη στο Portal',
    'Trade Show' => 'Εμπορική Έκθεση',
    'Web Site' => 'Ιστοσελίδα',
    'Word of mouth' => 'Από στόμα σε στόμα',
  ),
  'lead_status_dom' => 
  array (
    '' => '[-κενό-]',
    'Assigned' => 'Ανατέθηκε',
    'Converted' => 'Μετατράπηκε',
    'Dead' => 'Νεκρός',
    'In Process' => 'Σε Εξέλιξη',
    'New' => 'Νέος',
    'Recycled' => 'Ανακυκλώθηκε',
  ),
  'library_type' => 
  array (
    'Books' => 'Βιβλίο',
    'DVD' => 'DVD',
    'Magazines' => 'Περιοδικά',
    'Music' => 'Μουσική',
  ),
  'link_target_dom' => 
  array (
    '_blank' => 'Νέο Παράθυρο',
    '_self' => 'Ίδιο Παράθυρο',
  ),
  'list_visibility_options' => 
  array (
    0 => 'Όχι',
    1 => 'Ναι',
  ),
  'meeting_status_dom' => 
  array (
    'Held' => 'Πραγματοποιήθηκε',
    'Not Held' => 'Ακυρώθηκε',
    'Planned' => 'Προγραμματισμένο',
  ),
  'meeting_type_dom' => 
  array (
    'Other' => 'Άλλο',
    'Sugar' => 'SugarCRM',
  ),
  'merge_operators_dom' => 
  array (
    'exact' => 'Ακριβώς',
    'like' => 'Περιέχει',
    'start' => 'Έναρξη Με',
  ),
  'messenger_type_dom' => 
  array (
    '' => '[-κενό-]',
    'AOL' => 'AOL',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
  ),
  'moduleIconList' => 
  array (
    'Calls' => 'Κλ',
    'Campaigns' => 'Εκ',
    'Cases' => 'Υπ',
    'Notes' => 'Ση',
    'Quotas' => 'Πο',
    'Tasks' => 'Ερ',
  ),
  'moduleList' => 
  array (
    'ACLRoles' => 'Ρόλοι',
    'Accounts' => 'Λογαριασμοί',
    'Activities' => 'Δραστηριότητες',
    'Administration' => 'Διοίκηση',
    'Bugs' => 'Σφάλματα',
    'Calendar' => 'Ημερολόγιο',
    'Calls' => 'Κλήσεις',
    'CampaignLog' => 'Καταγραφή Εκστρατείας',
    'CampaignTrackers' => 'Σημείο Εντοπισμού Εκστρατείας',
    'Campaigns' => 'Εκστρατείες',
    'Cases' => 'Υποθέσεις',
    'Comments' => 'Σχόλια',
    'Connectors' => 'Connectors',
    'Contacts' => 'Επαφές',
    'ContractTypes' => 'Τύποι Συμβάσεων',
    'Contracts' => 'Συμβάσεις',
    'Currencies' => 'Νομίσματα',
    'CustomQueries' => 'Προσαρμοσμένα Ερωτήματα',
    'DataSets' => 'Μορφές Δεδομένων',
    'DocumentRevisions' => 'Αναθεωρήσεις Εγγράφων',
    'Documents' => 'Έγγραφα',
    'EAPM' => 'Εξωτερικοί Λογαριασμοί',
    'EmailAddresses' => 'Διεύθυνση Email',
    'EmailMarketing' => 'Email Μάρκετινγκ',
    'EmailTemplates' => 'Πρότυπα Email',
    'Emails' => 'Emails',
    'Employees' => 'Eργαζόμενοι',
    'FAQ' => 'Συχνές Ερωτήσεις',
    'Feedbacks' => 'Feedbacks',
    'Feeds' => 'RSS',
    'Filters' => 'Φίλτρα',
    'ForecastManagerWorksheets' => 'Φύλλο Εργασίας Πρόβλεψης Διαχειριστή',
    'ForecastSchedule' => 'Προγραμματισμός Πρόβλεψης',
    'ForecastWorksheets' => 'Φύλλο Εργασίας Πρόβλεψης',
    'Forecasts' => 'Προβλέψεις',
    'Home' => 'Αρχή',
    'InboundEmail' => 'Εισερχόμενα Email',
    'KBDocuments' => 'Βάση Γνώσεων',
    'Leads' => 'Δυνητικοί Πελάτες',
    'Library' => 'Βιβλιοθήκη',
    'Manufacturers' => 'Κατασκευαστές',
    'Meetings' => 'Συναντήσεις',
    'MergeRecords' => 'Εγγραφές Συγχώνευσης',
    'Newsletters' => 'Ενημερωτικά Δελτία',
    'Notes' => 'Σημειώσεις',
    'Notifications' => 'Ανακοινώσεις',
    'OAuthKeys' => 'Ανοιχτή Εξουσιοδότηση Κλειδιά Καταναλωτών',
    'OAuthTokens' => 'Ανοιχτή Εξουσιοδότηση Σημείων',
    'Opportunities' => 'Ευκαιρίες',
    'PdfManager' => 'Διαχειριστής PDF',
    'ProductCategories' => 'Κατηγορίες Προϊόντων',
    'ProductTemplates' => 'Κατάλογος Προϊόντων',
    'ProductTypes' => 'Τύποι Προϊόντων',
    'Products' => 'Γραμμή Εισηγμένων Στοιχείων',
    'Project' => 'Έργα',
    'ProjectTask' => 'Εργασίες Έργου',
    'ProspectLists' => 'Λίστες Στόχου',
    'Prospects' => 'Στόχοι',
    'Queues' => 'Ουρά Αναμονής',
    'Quotas' => 'Ποσοστώσεις',
    'Quotes' => 'Προσφορές',
    'Releases' => 'Αναβαθμίσεις',
    'ReportMaker' => 'Σύνθετες Αναφορές',
    'Reports' => 'Αναφορές',
    'Reports_1' => 'Αναφορές_1',
    'RevenueLineItems' => 'Γραμμή Εσόδων',
    'Roles' => 'Ρόλοι',
    'SNIP' => 'Αρχειοθέτηση Email',
    'SavedSearch' => 'Αποθηκευμένες Αναζητήσεις',
    'Schedulers' => 'Προγραμματιστές Εργασιών',
    'Shippers' => 'Πάροχος Αποστολής',
    'Styleguide' => 'Οδηγός σχεδίασης',
    'Subscriptions' => 'Συνδρομές',
    'SugarFavorites' => 'Αγαπημένα',
    'Sugar_Favorites' => 'Αγαπημένα',
    'Sync' => 'Συγχρονισμός',
    'Tags' => 'Καρτέλες',
    'Tasks' => 'Εργασίες',
    'TaxRates' => 'Φορολογικοί Συντελεστές',
    'TeamNotices' => 'Ειδοποιήσεις Ομάδας',
    'Teams' => 'Ομάδες',
    'TimePeriods' => 'Χρονικές Περίοδοι',
    'TrackerPerfs' => 'Απόδοση Σημείου Εντοπισμού',
    'TrackerQueries' => 'Ερωτήματα Σημείων Εντοπισμού',
    'TrackerSessions' => 'Συνεδρίες Σημείων Εντοπισμού',
    'Trackers' => 'Σημεία Εντοπισμού',
    'UpgradeWizard' => 'Οδηγός Αναβάθμισης',
    'UserSignatures' => 'Υπογραφές Χειριστή',
    'Users' => 'Χειριστές',
    'WebLogicHooks' => 'Web Logic Hooks',
    'Words' => 'Λέξεις',
    'WorkFlow' => 'Ορισμοί Ροή Εργασίας',
    'Worksheet' => 'Φύλλο Εργασίας',
    'iFrames' => 'Ιστοσελίδες Μου',
    'pmse_Business_Rules' => 'Διεργασίες Επιχειρησιακών Κανόνων',
    'pmse_Emails_Templates' => 'Διεργασίες Προτύπων Emails',
    'pmse_Inbox' => 'Διεργασίες',
    'pmse_Project' => 'Ορισμοί Διεργασιών',
  ),
  'moduleListSingular' => 
  array (
    'ACLRoles' => 'Ρόλος',
    'Accounts' => 'Λογαριασμός',
    'Activities' => 'Δραστηριότητα',
    'ActivityStream' => 'Ροή Δραστηριοτήτων',
    'Administration' => 'Διοίκηση',
    'Bugs' => 'Σφάλμα',
    'Calendar' => 'Ημερολόγιο',
    'Calls' => 'Κλήση',
    'CampaignLog' => 'Καταγραφή Εκστρατείας',
    'CampaignTrackers' => 'Σημεία Εντοπισμού Εκστρατείας',
    'Campaigns' => 'Εκστρατεία',
    'Cases' => 'Υπόθεση',
    'Comments' => 'Σχόλιο',
    'Connectors' => 'Connector',
    'Contacts' => 'Επαφή',
    'ContractTypes' => 'Τύποι Συμβάσεων',
    'Contracts' => 'Σύμβαση',
    'Currencies' => 'Νόμισμα',
    'CustomQueries' => 'Προσαρμοσμένο Ερώτημα',
    'Dashboard' => 'Πίνακας Εργαλείων',
    'DataSets' => 'Μορφή Δεδομένων',
    'DocumentRevisions' => 'Αναθεώρηση Εγγράφου',
    'Documents' => 'Έγγραφο',
    'EAPM' => 'Εξωτερικό Λογαριασμό',
    'EmailAddresses' => 'Διεύθυνση Email',
    'EmailMarketing' => 'Email Μάρκετινγκ',
    'EmailTemplates' => 'Πρότυπο Email',
    'Emails' => 'Email',
    'Employees' => 'Εργαζόμενος',
    'FAQ' => 'Συχνές Ερωτήσεις',
    'Feedbacks' => 'Feedback',
    'Feeds' => 'RSS',
    'Filters' => 'Φίλτρο',
    'ForecastManagerWorksheets' => 'Φύλλο Εργασίας Πρόβλεψης Διαχειριστή',
    'ForecastSchedule' => 'Προγραμματισμός Πρόβλεψης',
    'ForecastWorksheets' => 'Φύλλο Εργασίας Πρόβλεψης',
    'Forecasts' => 'Πρόβλεψη',
    'Home' => 'Αρχή',
    'InboundEmail' => 'Εισερχόμενο Email',
    'KBDocuments' => 'Έγγραφο Βάσης Γνώσεων',
    'Leads' => 'Δυνητικός Πελάτης',
    'Library' => 'Βιβλιοθήκη',
    'Manufacturers' => 'Κατασκευαστής',
    'Meetings' => 'Συνάντηση',
    'MergeRecords' => 'Συγχώνευση Εγγραφής',
    'Newsletters' => 'Ενημερωτικά Δελτία',
    'Notes' => 'Σημείωση',
    'Notifications' => 'Κοινοποίηση',
    'OAuthKeys' => 'Ανοιχτή Εξουσιοδότηση Κλειδί Καταναλωτή',
    'OAuthTokens' => 'Ανοιχτή Εξουσιοδότηση',
    'Opportunities' => 'Ευκαιρία',
    'PdfManager' => 'Διαχειριστής PDF',
    'ProductCategories' => 'Κατηγορία Προϊόντος',
    'ProductTemplates' => 'Πρότυπο Προϊόντος',
    'ProductTypes' => 'Τύπος Προϊόντος',
    'Products' => 'Εισηγμένα Στοιχεία Γραμμής',
    'Project' => 'Έργο',
    'ProjectTask' => 'Εργασία Έργου',
    'ProspectLists' => 'Λίστα Στόχου',
    'Prospects' => 'Στόχος',
    'Queues' => 'Ουρά Αναμονής',
    'Quotas' => 'Ποσόστωση',
    'Quotes' => 'Προσφορά',
    'Releases' => 'Αναβάθμιση',
    'ReportMaker' => 'Αναφορά',
    'Reports' => 'Αναφορά',
    'Reports_1' => 'Αποθηκευμένη Αναφορά',
    'RevenueLineItems' => 'Γραμμή Στοιχείων Εσόδων',
    'Roles' => 'Ρόλος',
    'SNIP' => 'Αρχειοθέτηση Email',
    'SavedSearch' => 'Αποθηκευμένες Αναζητήσεις',
    'Schedulers' => 'Χρονοπρογραμματιστής εργασιών:',
    'Shippers' => 'Πάροχος Αποστολής',
    'Styleguide' => 'Οδηγός σχεδίασης',
    'Subscriptions' => 'Συνδρομή',
    'SugarFavorites' => 'Sugar Αγαπημένα',
    'Sugar_Favorites' => 'Αγαπημένο',
    'Sync' => 'Συγχρονισμός',
    'Tags' => 'Καρτέλα',
    'Tasks' => 'Εργασία',
    'TaxRates' => 'Φορολογικός Συντελεστής',
    'TeamNotices' => 'Ειδοποιήσεις Ομάδας',
    'Teams' => 'Ομάδα',
    'TimePeriods' => 'Χρονική Περίοδος',
    'TrackerPerfs' => 'Απόδοση Σημείου Εντοπισμού',
    'TrackerQueries' => 'Ερωτήματα Σημείων Εντοπισμού',
    'TrackerSessions' => 'Συνεδρίες Σημείων Εντοπισμού',
    'Trackers' => 'Σημείο Εντοπισμού',
    'UpgradeWizard' => 'Οδηγός Αναβάθμισης',
    'UserSignatures' => 'Υπογραφή Χειριστή',
    'Users' => 'Χειριστή',
    'WebLogicHooks' => 'Web Logic Hook',
    'Words' => 'Λέξεις',
    'WorkFlow' => 'Ροή Εργασίας',
    'Worksheet' => 'Φύλλο Εργασίας',
    'iFrames' => 'Ιστοσελίδες Μου',
    'pmse_Business_Rules' => 'Διεργασίες Επιχειρησιακών Κανόνων',
    'pmse_Emails_Templates' => 'Διεργασίες Προτύπων Emails',
    'pmse_Inbox' => 'Διεργασία',
    'pmse_Project' => 'Ορισμοί Διεργασιών',
  ),
  'mselect_multi_type_dom' => 
  array (
    'in' => 'Είναι Ένα από',
    'not_in' => 'Δεν Είναι Ένα από',
  ),
  'mselect_type_dom' => 
  array (
    'Equals' => 'Είναι',
    'in' => 'Είναι Ένα από',
  ),
  'navigation_paradigms' => 
  array (
    'gm' => 'Ενότητες Γκρουπ',
    'm' => 'Ενότητες',
  ),
  'newsletter_frequency_dom' => 
  array (
    '' => '[-κενό-]',
    'Annually' => 'Ετήσια',
    'Monthly' => 'Μηνιαία',
    'Quarterly' => 'Τριμηνιαία',
    'Weekly' => 'Εβδομαδιαία',
  ),
  'notifications_severity_list' => 
  array (
    'alert' => 'Ειδοποίηση',
    'information' => 'Πληροφορίες',
    'other' => 'Άλλο',
    'success' => 'Επιτυχία',
    'warning' => 'Προειδοποίηση',
  ),
  'notifications_status_dom' => 
  array (
    0 => 'Μη αναγνωσμένο',
    1 => 'Αναγνωσμένο',
  ),
  'notifymail_sendtype' => 
  array (
    'SMTP' => 'SMTP',
  ),
  'numeric_range_search_dom' => 
  array (
    '=' => 'Ισούται',
    'between' => 'είναι Μεταξύ',
    'greater_than' => 'Μεγαλύτερο Από',
    'greater_than_equals' => 'Μεγαλύτερο ή Ίσο με',
    'less_than' => 'Λιγότερο Από',
    'less_than_equals' => 'Μικρότερο ή Ίσο με',
    'not_equal' => 'Δεν Ισούται',
  ),
  'oauth_client_type_dom' => 
  array (
    'support_portal' => 'Υποστήριξη Portal',
    'user' => 'Χειριστής Sugar',
  ),
  'oauth_type_dom' => 
  array (
    'oauth1' => 'Ανοιχτή Εξουσιοδότηση 1.0',
    'oauth2' => 'Ανοιχτή Εξουσιοδότηση 2.0',
  ),
  'oc_status_dom' => 
  array (
    '' => '[-κενό-]',
    'Active' => 'Ενεργή',
    'Inactive' => 'Ανενεργή',
  ),
  'opportunity_metrics_dom' => 
  array (
    'active' => 'Ενεργή',
    'lost' => 'Χαμένη',
    'won' => 'Κερδισμένη',
  ),
  'opportunity_relationship_type_dom' => 
  array (
    '' => '[-κενό-]',
    'Business Decision Maker' => 'Υπεύθυνος Επιχείρησης',
    'Business Evaluator' => 'Εκτιμητής Επιχείρησης',
    'Executive Sponsor' => 'Εταιρικός Χορηγός',
    'Influencer' => 'Επηρεάζων',
    'Other' => 'Άλλο',
    'Primary Decision Maker' => 'Βασικός Υπεύθυνος',
    'Technical Decision Maker' => 'Τεχνικός Υπεύθυνος',
    'Technical Evaluator' => 'Τεχνικός Αξιολογητής',
  ),
  'opportunity_type_dom' => 
  array (
    '' => '[-κενό-]',
    'Existing Business' => 'Υφιστάμενο Πελατολόγιο',
    'New Business' => 'Νέο Πελατολόγιο',
  ),
  'opps_config_view_by_closedate_rollup_dom' => 
  array (
    'earliest' => 'Νωρίτερη Ημερομηνία Κλεισίματος',
    'latest' => 'Τελευταία Ημερομηνία Κλεισίματος',
  ),
  'opps_config_view_by_options_dom' => 
  array (
    'Opportunities' => 'Ευκαιρίες',
    'RevenueLineItems' => 'Ευκαιρίες και Γραμμή Εσόδων',
  ),
  'optout_dom' => 
  array (
    '' => '-κανένα-',
    'false' => 'Όχι',
    'true' => 'Ναι',
  ),
  'order_stage_dom' => 
  array (
    'Cancelled' => 'Άκυρη',
    'Confirmed' => 'Επιβεβαιωμένη',
    'On Hold' => 'Σε Αναμονή',
    'Pending' => 'Εκκρεμής',
    'Shipped' => 'Απεσταλμένη',
  ),
  'parent_type_display' => 
  array (
    'Accounts' => 'Λογαριασμό',
    'Bugs' => 'Σφάλμα Σημ. Εντοπισμού',
    'Cases' => 'Υπόθεση',
    'Contacts' => 'Επαφή',
    'Leads' => 'Δυνητικό Πελάτη',
    'Opportunities' => 'Ευκαιρία',
    'Products' => 'Εισηγμένα Στοιχεία Γραμμής',
    'Project' => 'Έργο',
    'ProjectTask' => 'Εργασία Έργου',
    'Prospects' => 'Στόχο',
    'Quotes' => 'Προσφορά',
    'RevenueLineItems' => 'test',
    'Tasks' => 'Εργασία',
  ),
  'payment_terms' => 
  array (
    '' => '[-κενό-]',
    'Net 15' => 'Καθαρό Κέρδος 15',
    'Net 30' => 'Καθαρό Κέρδος 30',
  ),
  'pdfmanager_yes_no_list' => 
  array (
    'no' => 'Όχι',
    'yes' => 'Ναι',
  ),
  'pipeline_chart_dom' => 
  array (
    'fun' => 'Χωνί',
    'hbar' => 'Οριζόντια Μπάρα',
  ),
  'planned_activities_filter_options' => 
  array (
    'future' => 'Μέλλον',
    'today' => 'Σήμερα',
  ),
  'planned_activities_limit_options' => 
  array (
    5 => '5',
    10 => '10',
    15 => '15',
    20 => '20',
  ),
  'planned_activities_visibility_options' => 
  array (
    'group' => 'Όχι',
    'user' => 'Ναι',
  ),
  'pricing_formula_dom' => 
  array (
    'Fixed' => 'Σταθερή Τιμή',
    'IsList' => 'Ίδια με την Λίστα',
    'PercentageDiscount' => 'Έκπτωση από τον Κατάλογο',
    'PercentageMarkup' => 'Σήμανση πάνω από το Κόστος',
    'ProfitMargin' => 'Περιθώριο Κέρδους',
  ),
  'product_category_dom' => 
  array (
    '' => '[-κενό-]',
    'Accounts' => 'Λογαριασμοί',
    'Activities' => 'Δραστηριότητες',
    'Bug Tracker' => 'Σφάλμα Σημ. Εντοπισμού',
    'Calendar' => 'Ημερολόγιο',
    'Calls' => 'Κλήσεις',
    'Campaigns' => 'Εκστρατείες',
    'Cases' => 'Υποθέσεις',
    'Contacts' => 'Επαφές',
    'Currencies' => 'Νομίσματα',
    'Dashboard' => 'Πίνακας Εργαλείων',
    'Documents' => 'Έγγραφα',
    'Emails' => 'Emails',
    'Feeds' => 'Feeds',
    'Forecasts' => 'Προβλέψεις',
    'Help' => 'Βοήθεια',
    'Home' => 'Αρχή',
    'Leads' => 'Δυνητικοί Πελάτες',
    'Meetings' => 'Συναντήσεις',
    'Notes' => 'Σημειώσεις',
    'Opportunities' => 'Ευκαιρίες',
    'Outlook Plugin' => 'Σύνδεση με Outlook',
    'Product Catalog' => 'Κατάλογο Προϊόντος',
    'Products' => 'Γραμμή Εισηγμένων Ειδών',
    'Projects' => 'Έργα',
    'Quotes' => 'Προσφορές',
    'RSS' => 'RSS',
    'Releases' => 'Αναβαθμίσεις',
    'RevenueLineItems' => 'Γραμμή Εσόδων Ειδών',
    'Studio' => 'Στούντιο',
    'Upgrade' => 'Αναβάθμιση',
    'Users' => 'Χειριστές',
  ),
  'product_status_dom' => 
  array (
    '' => '',
    'Orders' => 'Διαταγμένη',
    'Quotes' => 'Εισηγμένη',
    'Ship' => 'Απεσταλμένη',
  ),
  'product_status_quote_key' => 'Προσφορές',
  'product_template_status_dom' => 
  array (
    'Available' => 'Σε Απόθεμα',
    'Unavailable' => 'Εξαντλήθηκε',
  ),
  'project_duration_units_dom' => 
  array (
    'Days' => 'Ημέρες',
    'Hours' => 'Ώρες',
  ),
  'project_priority_options' => 
  array (
    'High' => 'Υψηλή',
    'Low' => 'Χαμηλή',
    'Medium' => 'Μεσαία',
  ),
  'project_status_dom' => 
  array (
    'Draft' => 'Πρόχειρο',
    'In Review' => 'Σε Αναθεώρηση',
    'Published' => 'Δημοσιευμένο',
  ),
  'project_task_priority_options' => 
  array (
    'High' => 'Υψηλή',
    'Low' => 'Χαμηλή',
    'Medium' => 'Μεσαία',
  ),
  'project_task_status_options' => 
  array (
    'Completed' => 'Ολοκληρώθηκε',
    'Deferred' => 'Αναβαλλόμενη',
    'In Progress' => 'Σε Εξέλιξη',
    'Not Started' => 'Δεν έχει αρχίσει',
    'Pending Input' => 'Εκκρεμής',
  ),
  'project_task_utilization_options' => 
  array (
    0 => 'Καμία',
    25 => '25',
    50 => '50',
    75 => '75',
    100 => '100',
  ),
  'projects_priority_options' => 
  array (
    'high' => 'Υψηλή',
    'low' => 'Χαμηλή',
    'medium' => 'Μεσαία',
  ),
  'projects_status_options' => 
  array (
    'completed' => 'Ολοκληρώθηκε',
    'inprogress' => 'Σε Εξέλιξη',
    'notstarted' => 'Δεν έχει αρχίσει',
  ),
  'prospect_list_type_dom' => 
  array (
    'default' => 'Προεπιλογή',
    'exempt' => 'Λίστα Καταστολής - Ανά Ταυτότητα',
    'exempt_address' => 'Λίστα Καταστολής - Ανά Διεύθυνση Email',
    'exempt_domain' => 'Λίστα Καταστολής - Ανά Περιοχή',
    'seed' => 'Seed',
    'test' => 'Δοκιμή',
  ),
  'query_calc_calc_type_dom' => 
  array (
    'AVG' => 'Μέσος Όρος',
    'COUNT' => 'Αρίθμηση',
    'MAX' => 'Μεγαλύτερο',
    'MIN' => 'Μικρότερο',
    'STDDEV' => 'Σταθερή Απόκλιση',
    'SUM' => 'Άθροισμα (Τελικό)',
    'VARIANCE' => 'Διακύμανση',
  ),
  'query_calc_leftright_type_dom' => 
  array (
    'Field' => 'Πεδίο',
    'Group' => 'Γκρουπ',
    'Value' => 'Τιμή',
  ),
  'query_calc_oper_dom' => 
  array (
    '*' => '(X) Πολλαπλασιασμός',
    '+' => '(+) Πρόσθεση',
    '-' => '(-) Αφαίρεση',
    '/' => '(/) Διαίρεση',
  ),
  'query_calc_type_dom' => 
  array (
    'Math' => 'Μαθηματικός Υπολογισμός',
    'Standard' => 'Σταθερός',
  ),
  'query_column_type_dom' => 
  array (
    'Calculation' => 'Υπολογισμός',
    'Display' => 'Εμφάνιση',
  ),
  'query_display_type_dom' => 
  array (
    'Custom' => 'Προσαρμοσμένο',
    'Default' => 'Προεπιλογή',
    'Hidden' => 'Κρυφό',
  ),
  'query_groupby_axis_dom' => 
  array (
    'Columns' => 'Στήλες (Χ-Άξονας)',
    'Rows' => 'Γραμμές (Υ-Άξονας)',
  ),
  'query_groupby_calc_type_dom' => 
  array (
    'AVG' => 'Μέσος Όρος',
    'COUNT' => 'Αρίθμηση',
    'STDDEV' => 'Σταθερή Απόκλιση',
    'SUM' => 'Άθροισμα',
    'VARIANCE' => 'Διακύμανση',
  ),
  'query_groupby_qualifier_dom' => 
  array (
    'Day' => 'Ημέρα',
    'Month' => 'Μήνα',
    'Quarter' => 'Τρίμηνο',
    'Week' => 'Εβδομάδα',
    'Year' => 'Έτος',
  ),
  'query_groupby_qualifier_qty_dom' => 
  array (
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
    6 => '6',
    7 => '7',
    8 => '8',
    9 => '9',
    10 => '10',
    12 => '12',
    18 => '18',
    24 => '24',
  ),
  'query_groupby_qualifier_start_dom' => 
  array (
    -24 => '-24',
    -18 => '-18',
    -12 => '-12',
    -10 => '-10',
    -9 => '-9',
    -8 => '-8',
    -7 => '-7',
    -6 => '-6',
    -5 => '-5',
    -4 => '-4',
    -3 => '-3',
    -2 => '-2',
    -1 => '-1',
    0 => 'Τώρα',
  ),
  'query_groupby_type_dom' => 
  array (
    'Field' => 'Σταθερό Πεδίο',
    'Time' => 'Χρονικό Διάστημα',
  ),
  'query_type_dom' => 
  array (
    'Main Query' => 'Κύριο Ερώτημα',
  ),
  'quote_relationship_type_dom' => 
  array (
    '' => '[-κενό-]',
    'Business Decision Maker' => 'Υπεύθυνος Επιχείρησης',
    'Business Evaluator' => 'Αξιολογητής Επιχείρησης',
    'Executive Sponsor' => 'Εταιρικός Χορηγός',
    'Influencer' => 'Επηρεάζων',
    'Other' => 'Άλλο',
    'Primary Decision Maker' => 'Βασικός Υπεύθυνος',
    'Technical Decision Maker' => 'Τεχνικός Υπεύθυνος',
    'Technical Evaluator' => 'Τεχνικός Αξιολογητής',
  ),
  'quote_stage_dom' => 
  array (
    'Closed Accepted' => 'Έκλεισε Κερδισμένη',
    'Closed Dead' => 'Νεκρή',
    'Closed Lost' => 'Έκλεισε Χαμένη',
    'Confirmed' => 'Επιβεβαιωμένη',
    'Delivered' => 'Παραδομένη',
    'Draft' => 'Πρόχειρη',
    'Negotiation' => 'Σε Διαπραγμάτευση',
    'On Hold' => 'Σε Αναμονή',
  ),
  'quote_type_dom' => 
  array (
    'Orders' => 'Σειρά',
    'Quotes' => 'Προσφορά',
  ),
  'record_type_display' => 
  array (
    '' => '[-κενό-]',
    'Accounts' => 'Λογαριασμό',
    'Bugs' => 'Σφάλμα',
    'Cases' => 'Υπόθεση',
    'Contacts' => 'Επαφές',
    'Leads' => 'Δυνητικό Πελάτη',
    'Opportunities' => 'Ευκαιρία',
    'Products' => 'Εισηγμένα Στοιχεία Γραμμής',
    'Project' => 'Έργο',
    'ProjectTask' => 'Εργασία Έργου',
    'Prospects' => 'Στόχο',
    'Quotes' => 'Προσφορά',
    'Tasks' => 'Εργασία',
  ),
  'record_type_display_notes' => 
  array (
    'Accounts' => 'Λογαριασμό',
    'Bugs' => 'Σφάλμα',
    'Calls' => 'Κλήση',
    'Cases' => 'Υπόθεση',
    'Contacts' => 'Επαφή',
    'Contracts' => 'Σύμβαση',
    'Emails' => 'Email',
    'Leads' => 'Δυνητικό Πελάτη',
    'Meetings' => 'Συνάντηση',
    'Opportunities' => 'Ευκαιρία',
    'ProductTemplates' => 'Κατάλογο Προϊόντος',
    'Products' => 'Εισηγμένα Στοιχεία Γραμμής',
    'Project' => 'Έργο',
    'ProjectTask' => 'Εργασία Έργου',
    'Prospects' => 'Στόχο',
    'Quotes' => 'Προσφορά',
    'Tasks' => 'Εργασία',
  ),
  'release_status_dom' => 
  array (
    'Active' => 'Ενεργή',
    'Inactive' => 'Ανενεργή',
  ),
  'reminder_max_time' => '90000',
  'reminder_time_options' => 
  array (
    -1 => 'Κανένα',
    60 => '1 λεπτό πριν',
    300 => '5 λεπτά πριν',
    600 => '10 λεπτά πριν',
    900 => '15 λεπτά πριν',
    1800 => '30 λεπτά πριν',
    3600 => '1 ώρα πριν',
    7200 => '2 ώρες πριν',
    10800 => '3 ώρες πριν',
    18000 => '5 ώρες πριν',
    86400 => '1 ημέρα πριν',
  ),
  'repeat_interval_number' => 
  array (
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
    6 => '6',
    7 => '7',
    8 => '8',
    9 => '9',
    10 => '10',
    11 => '11',
    12 => '12',
    13 => '13',
    14 => '14',
    15 => '15',
    16 => '16',
    17 => '17',
    18 => '18',
    19 => '19',
    20 => '20',
    21 => '21',
    22 => '22',
    23 => '23',
    24 => '24',
    25 => '25',
    26 => '26',
    27 => '27',
    28 => '28',
    29 => '29',
    30 => '30',
  ),
  'repeat_intervals' => 
  array (
    '' => '[-κενό-]',
    'Daily' => 'ημέρα(ες)',
    'Monthly' => 'μήνα(ες)',
    'Weekly' => 'εβδομάδα(ες)',
    'Yearly' => 'έτος(η)',
  ),
  'repeat_type_dom' => 
  array (
    '' => 'Κανένας',
    'Daily' => 'Καθημερινά',
    'Monthly' => 'Μηνιαία',
    'Weekly' => 'Εβδομαδιαία',
    'Yearly' => 'Ετήσια',
  ),
  'report_align_dom' => 
  array (
    'center' => 'Κέντρο',
    'left' => 'Αριστερά',
    'right' => 'Δεξιά',
  ),
  'report_color_dom' => 
  array (
    '' => 'Προεπιλογή',
    'DarkGreen' => 'Σκούρο Πράσινο',
    'DodgerBlue' => 'Γαλάζιο',
    'LightBlue' => 'Ανοιχτό Μπλε',
    'LightGray' => 'Ανοιχτό Γκρι',
    'black' => 'Μαύρο',
    'blue' => 'Μπλε',
    'green' => 'Πράσινο',
    'red' => 'Κόκκινο',
    'white' => 'Άσπρο',
  ),
  'report_maker_status_dom' => 
  array (
    'Multi Module' => 'Πολλαπλή Ενότητα',
    'Single Module' => 'Κανονική Ενότητα',
  ),
  'roi_type_dom' => 
  array (
    'Budget' => 'Προϋπολογισμό',
    'Expected_Revenue' => 'Αναμενόμενα Έσοδα',
    'Investment' => 'Επένδυση',
    'Revenue' => 'Έσοδα',
  ),
  'sales_probability_dom' => 
  array (
    'Closed Lost' => '',
    'Closed Won' => '100',
    'Id. Decision Makers' => '40',
    'Needs Analysis' => '25',
    'Negotiation/Review' => '80',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Prospecting' => '10',
    'Qualification' => '20',
    'Value Proposition' => '30',
  ),
  'sales_stage_dom' => 
  array (
    'Closed Lost' => 'Έκλεισε Χαμένη',
    'Closed Won' => 'Έκλεισε Κερδισμένη',
    'Id. Decision Makers' => 'Ταυτότητα Υπευθύνου',
    'Needs Analysis' => 'Ανάλυση Αναγκών',
    'Negotiation/Review' => 'Σε Διαπραγμάτευση/Αναθεώρηση',
    'Perception Analysis' => 'Ανάλυση Αντίληψης',
    'Proposal/Price Quote' => 'Πρόταση/Οικονομική Προσφορά',
    'Prospecting' => 'Έρευνα',
    'Qualification' => 'Προσόν',
    'Value Proposition' => 'Αξία Πρότασης',
  ),
  'sales_status_dom' => 
  array (
    'Closed Lost' => 'Έκλεισε Χαμένη',
    'Closed Won' => 'Έκλεισε Κερδισμένη',
    'In Progress' => 'Σε Εξέλιξη',
    'New' => 'Νέα',
  ),
  'sales_status_with_quote_dom' => 
  array (
    'Closed Lost' => 'Έκλεισε Χαμένη',
    'Closed Won' => 'Έκλεισε Κερδισμένη',
    'Converted to Quote' => 'Μετατροπή σε Προσφορά',
    'In Progress' => 'Σε Εξέλιξη',
    'New' => 'Νέα',
  ),
  'salutation_dom' => 
  array (
    '' => '[-κενό-]',
    'Dr.' => 'Δρ.',
    'Mr.' => 'Κύριος',
    'Mrs.' => 'Δεσποινίς',
    'Ms.' => 'Κυρία',
    'Prof.' => 'Καθ.',
  ),
  'scheduler_period_dom' => 
  array (
    'hour' => 'Ώρες',
    'min' => 'Λεπτά',
  ),
  'scheduler_status_dom' => 
  array (
    'Active' => 'Ενεργό',
    'Inactive' => 'Ανενεργό',
  ),
  'schedulers_times_dom' => 
  array (
    'completed' => 'Ολοκληρώθηκε',
    'failed' => 'Απέτυχε',
    'in progress' => 'Σε Εξέλιξη',
    'no curl' => 'Καμία Εκτέλεση: Δεν υπάρχει διαθέσιμο cURL',
    'not run' => 'Δεν Εκτελέστηκε',
    'ready' => 'Έτοιμο',
  ),
  'source_dom' => 
  array (
    '' => '[-κενό-]',
    'Forum' => 'Forum',
    'InboundEmail' => 'Email',
    'Internal' => 'Εσωτερική',
    'Twitter' => 'Twitter',
    'Web' => 'Ιστοχώρος',
  ),
  'state_dom' => 
  array (
    'AK' => 'Αλάσκα',
    'AL' => 'Αλαμπάμα',
    'AR' => 'Αρκάνσας',
    'AZ' => 'Αριζόνα',
    'CA' => 'Καλιφόρνια',
    'CO' => 'Κολοράντο',
    'CT' => 'Κονέκτικατ',
    'DC' => 'Περιοχή της Κολούμπια',
    'DE' => 'Delaware',
    'FL' => 'Φλόριντα',
    'GA' => 'Γεωργία',
    'HI' => 'Χαβάη',
    'IA' => 'Αϊόβα',
    'ID' => 'Idaho',
    'IL' => 'Ιλλινόις',
    'IN' => 'Ιντιάνα',
    'KS' => 'Κάνσας',
    'KY' => 'Κεντάκι',
    'LA' => 'Λουισιάνα',
    'MA' => 'Μασαχουσέτη',
    'MD' => 'Μέρυλαντ',
    'ME' => 'Μάιν',
    'MI' => 'Μίτσιγκαν',
    'MN' => 'Μινεσότα',
    'MO' => 'Μισσούρι',
    'MS' => 'Μισισιπής',
    'MT' => 'Μοντάνα',
    'NC' => 'Βόρεια Καρολίνα',
    'ND' => 'Βόρεια Ντακότα',
    'NE' => 'Νεμπράσκα',
    'NH' => 'Νιού Χάμσαιρ',
    'NJ' => 'Νιου Τζέρσεϋ',
    'NM' => 'Νέο Μεξικό',
    'NV' => 'Νεβάδα',
    'NY' => 'Νέα Υόρκη',
    'OH' => 'Οχάιο',
    'OK' => 'Οκλαχόμα',
    'OR' => 'Όρεγκον',
    'PA' => 'Πενσυλβανία',
    'RI' => 'Ρόδος',
    'SC' => 'Νότια Καρολίνα',
    'SD' => 'Νότια Ντακότα',
    'TN' => 'Tennessee',
    'TX' => 'Τέξας',
    'UT' => 'Utah',
    'VA' => 'Βιρτζίνια',
    'VT' => 'Βερμόντ',
    'WA' => 'Ουάσιγκτον',
    'WI' => 'Wisconsin',
    'WV' => 'Δυτική Βιρτζίνια',
    'WY' => 'Wyoming',
  ),
  'sugar7_dashlet_auto_refresh_options' => 
  array (
    0 => 'Κανένα',
    1 => 'Κάθε 1 Λεπτό',
    5 => 'Κάθε 5 Λεπτά',
    10 => 'Κάθε 10 Λεπτά',
    15 => 'Κάθε 15 Λεπτά',
    30 => 'Κάθε 30 Λεπτά',
  ),
  'sugar7_dashlet_reports_auto_refresh_options' => 
  array (
    0 => 'Κανένα',
    15 => 'Κάθε 15 Λεπτά',
    30 => 'Κάθε 30 Λεπτά',
    45 => 'Κάθε 45 Λεπτά',
    60 => 'Κάθε 1 Ώρα',
    120 => 'Κάθε 2 Ώρες',
  ),
  'support_term_dom' => 
  array (
    '+1 year' => 'Ένα χρόνο',
    '+2 years' => 'Δύο χρόνια',
    '+6 months' => 'Έξι μήνες',
  ),
  'task_priority_dom' => 
  array (
    'High' => 'Υψηλή',
    'Low' => 'Χαμηλή',
    'Medium' => 'Μεσαία',
  ),
  'task_status_dom' => 
  array (
    'Completed' => 'Ολοκληρωμένη',
    'Deferred' => 'Αναβαλλόμενη',
    'In Progress' => 'Σε Εξέλιξη',
    'Not Started' => 'Δεν έχει Αρχίσει',
    'Pending Input' => 'Εκκρεμής',
  ),
  'tasks_limit_options' => 
  array (
    5 => '5',
    10 => '10',
    15 => '15',
    20 => '20',
  ),
  'tasks_visibility_options' => 
  array (
    'group' => 'Όχι',
    'user' => 'Ναι',
  ),
  'tax_class_dom' => 
  array (
    'Non-Taxable' => 'Μη-Φορολογήσιμος',
    'Taxable' => 'Φορολογήσιμος',
  ),
  'timezone_dom' => 
  array (
    'Africa/Abidjan' => 'Αφρική/Αμπιτζάν',
    'Africa/Accra' => 'Αφρική/Άκρα',
    'Africa/Addis_Ababa' => 'Αφρική/Αντίς_Αμπέμπα',
    'Africa/Algiers' => 'Αφρική/Αλγέρι',
    'Africa/Asmera' => 'Αφρική/Ασμέρα',
    'Africa/Bamako' => 'Αφρική/Μπαμάκο',
    'Africa/Bangui' => 'Αφρική/Μπανγκουί',
    'Africa/Banjul' => 'Αφρική/Μπαντζούλ',
    'Africa/Bissau' => 'Αφρική/Μπισσάου',
    'Africa/Blantyre' => 'Αφρική/Μπλαντίρε',
    'Africa/Brazzaville' => 'Αφρική/Μπραζαβίλ',
    'Africa/Bujumbura' => 'Αφρική/Μπουζουμπούρα',
    'Africa/Cairo' => 'Αφρική/Κάιρο',
    'Africa/Casablanca' => 'Αφρική/Καζαμπλάνκα',
    'Africa/Ceuta' => 'Αφρική/Θέουτα',
    'Africa/Conakry' => 'Αφρική/Κόνακρι',
    'Africa/Dakar' => 'Αφρική/Ντακάρ',
    'Africa/Dar_es_Salaam' => 'Αφρική/Νταρ_ες_Σαλάμ',
    'Africa/Djibouti' => 'Αφρική/Τζιμπουτί',
    'Africa/Douala' => 'Αφρική/Ντουάλα',
    'Africa/El_Aaiun' => 'Αφρική/Ελ_Αγιούν',
    'Africa/Freetown' => 'Αφρική/Φρίταουν',
    'Africa/Gaborone' => 'Αφρική/Γκαμπορόνε',
    'Africa/Harare' => 'Αφρική/Χαράρε',
    'Africa/Johannesburg' => 'Αφρική/Γιοχάνεσμπουργκ',
    'Africa/Kampala' => 'Αφρική/Καμπάλα',
    'Africa/Khartoum' => 'Αφρική/Χαρτούμ',
    'Africa/Kigali' => 'Αφρική/Κιγκάλι',
    'Africa/Kinshasa' => 'Αφρική/Κινσάσα',
    'Africa/Lagos' => 'Αφρική/Λαγός',
    'Africa/Libreville' => 'Αφρική/Λιμπρεβίλ',
    'Africa/Lome' => 'Αφρική/Λομέ',
    'Africa/Luanda' => 'Αφρική/Λουάντα',
    'Africa/Lubumbashi' => 'Αφρική/Λουμπουμπάσι',
    'Africa/Lusaka' => 'Αφρική/Λουσάκα',
    'Africa/Malabo' => 'Αφρική/Μαλάμπο',
    'Africa/Maputo' => 'Αφρική/Μαπούτο',
    'Africa/Maseru' => 'Αφρική/Μασερού',
    'Africa/Mbabane' => 'Αφρική/Μπαμπάνε',
    'Africa/Mogadishu' => 'Αφρική/Μογκαντίσου',
    'Africa/Monrovia' => 'Αφρική/Μονρόβια',
    'Africa/Nairobi' => 'Αφρική/Ναϊρόμπι',
    'Africa/Ndjamena' => 'Αφρική/Ντζαμένα',
    'Africa/Niamey' => 'Αφρική/Νιαμέι',
    'Africa/Nouakchott' => 'Αφρική/Νουαξότ',
    'Africa/Ouagadougou' => 'Αφρική/Ουαγκαντούγκου',
    'Africa/Porto-Novo' => 'Αφρική/Πόρτο-Νόβο',
    'Africa/Sao_Tome' => 'Αφρική/Σάο_Τομέ',
    'Africa/Tripoli' => 'Αφρική/Τρίπολη',
    'Africa/Tunis' => 'Αφρική/Τύνιδα',
    'Africa/Windhoek' => 'Αφρική/Γουίντχουκ',
    'America/Adak' => 'Αμερική/Αλάσκα',
    'America/Anchorage' => 'Αμερική/Άνκορατζ',
    'America/Anguilla' => 'Αμερική/Ανγκουίλα',
    'America/Antigua' => 'Αμερική/Αντίγκουα',
    'America/Araguaina' => 'Αμερική/Αραγουάινα',
    'America/Argentina/Buenos_Aires' => 'Αμερική/Αργεντινή/Μπουένος Άιρες',
    'America/Argentina/Catamarca' => 'Αμερική/Αργεντινή/Καταμάρκα',
    'America/Argentina/Cordoba' => 'Αμερική//Αργεντινή/Κόρντομπα',
    'America/Argentina/Jujuy' => 'Αμερική/Αργεντινή/Χουχούι',
    'America/Argentina/La_Rioja' => 'Αμερική/Αργεντινή/Λα_Ριόχα',
    'America/Argentina/Mendoza' => 'Αμερική/Αργεντινή/Μεντόζα',
    'America/Argentina/Rio_Gallegos' => 'Αμερική/Αργεντινή/Ρίο_Γκαλέγκος',
    'America/Argentina/San_Juan' => 'Αμερική/Αργεντινή/Σαν_Χουάν',
    'America/Argentina/Tucuman' => 'Αμερική/Αργεντινή/Τουκουμάν',
    'America/Argentina/Ushuaia' => 'Αμερική/Αργεντινή/Ushuaia',
    'America/Aruba' => 'Αμερική/Αρούμπα',
    'America/Asuncion' => 'Αμερική/Ασουνσιόν',
    'America/Bahia' => 'Αμερική/Bahia',
    'America/Barbados' => 'Αμερική/Μπαρμπάντος',
    'America/Belem' => 'Αμερική/Μπέλεμ',
    'America/Belize' => 'Αμερική/Μπελίζ',
    'America/Boa_Vista' => 'Αμερική/Μπόα Βίστα',
    'America/Bogota' => 'Αμερική/Μπογκοτά',
    'America/Boise' => 'Αμερική/Μπουάζ',
    'America/Cambridge_Bay' => 'Αμερική/Κέμπριτζ_Μπέι',
    'America/Campo_Grande' => 'Αμερική/Κάμπο_Γκράντε',
    'America/Cancun' => 'Αμερική/Κανκούν',
    'America/Caracas' => 'Αμερική/Καράκας',
    'America/Cayenne' => 'Αμερική/Καγιέν',
    'America/Cayman' => 'Αμερική/Καϋμάν',
    'America/Chicago' => 'Αμερική/Σικάγο',
    'America/Chihuahua' => 'Αμερική/Τσιουάουα',
    'America/Coral_Harbour' => 'Αμερική/Coral_Harbour',
    'America/Costa_Rica' => 'Αμερική/Κόστα_Ρίκα',
    'America/Cuiaba' => 'Αμερική/Cuiaba',
    'America/Curacao' => 'Αμερική/Κουρασάο',
    'America/Danmarkshavn' => 'Αμερική/Ντάνμαρκσαβν',
    'America/Dawson' => 'Αμερική/Dawson',
    'America/Dawson_Creek' => 'Αμερική/Κολπίσκος_Dawson',
    'America/Denver' => 'Αμερική/Ντένβερ',
    'America/Detroit' => 'Αμερική/Detroit',
    'America/Dominica' => 'Αμερική/Ντομίνικα',
    'America/Edmonton' => 'Αμερική/Έντμοντον',
    'America/Eirunepe' => 'Αμερική/Eirunepe',
    'America/El_Salvador' => 'Αμερική/Ελ_Σαλβαδόρ',
    'America/Fortaleza' => 'Αμερική/Φορταλέζα',
    'America/Glace_Bay' => 'Αμερική/Glace_Bay',
    'America/Godthab' => 'Αμερική/Godthab',
    'America/Goose_Bay' => 'Αμερική/Γκους Μπέι',
    'America/Grand_Turk' => 'Αμερική/Γκράντ_Τούρκ',
    'America/Grenada' => 'Αμερική/Γρενάδα',
    'America/Guadeloupe' => 'Αμερική/Γουαδελούπη',
    'America/Guatemala' => 'Αμερική/Γουατεμάλα',
    'America/Guayaquil' => 'Αμερική/Γκουαγιακίλ',
    'America/Guyana' => 'Αμερική/Γουιάνα',
    'America/Halifax' => 'Αμερική/Halifax',
    'America/Havana' => 'Αμερική/Χαβάνα',
    'America/Hermosillo' => 'Αμερική/Ερμόσιλλο',
    'America/Indiana/Indianapolis' => 'Αμερική/Ιντιάνα/Ινδιανάπολη',
    'America/Indiana/Knox' => 'Αμερική/Ιντιάνα/Νοξ',
    'America/Indiana/Marengo' => 'Αμερική/Ιντιάνα/Μαρένγκο',
    'America/Indiana/Vevay' => 'Αμερική/Ινδία/Vevay',
    'America/Inuvik' => 'Αμερική/Ινουβίκ',
    'America/Iqaluit' => 'Αμερική/Ικάλουτι',
    'America/Jamaica' => 'Αμερική/Τζαμάικα',
    'America/Juneau' => 'Αμερική/Τζούνο',
    'America/Kentucky/Louisville' => 'Αμερική/Κεντάκι/Λούισβιλ',
    'America/Kentucky/Monticello' => 'Αμερική/Κεντάκι/Μοντισέλλο',
    'America/La_Paz' => 'Αμερική/Λα_Παζ',
    'America/Lima' => 'Αμερική/Λίμα',
    'America/Los_Angeles' => 'Αμερική/Λος Άντζελες',
    'America/Maceio' => 'Αμερική/Μασέιο',
    'America/Managua' => 'Αμερική/Μανάγκουα',
    'America/Manaus' => 'Αμερική/Μανάους',
    'America/Martinique' => 'Αμερική/Μαρτινίκα',
    'America/Mazatlan' => 'Αμερική/Μαζατλάν',
    'America/Menominee' => 'Αμερική/Μενομίνι',
    'America/Merida' => 'Αμερική/Μερίδα',
    'America/Mexico_City' => 'Αμερική/Μεξικό_Πόλη',
    'America/Miquelon' => 'Αμερική/Μικελόν',
    'America/Monterrey' => 'Αμερική/Μοντερέι',
    'America/Montevideo' => 'Αμερική/Μοντεβιδέο',
    'America/Montreal' => 'Αμερική/Μόντρεαλ',
    'America/Montserrat' => 'Αμερική/Μοντσεράτ',
    'America/Nassau' => 'Αμερική/Νασσάου',
    'America/New_York' => 'Αμερική/Νέα_Υόρκη',
    'America/Nipigon' => 'Αμερική/Νίπιγκον',
    'America/Nome' => 'Αμερική/Νόουμ',
    'America/Noronha' => 'Αμερική/Νορόνα',
    'America/North_Dakota/Center' => 'Αμερική/',
    'America/Panama' => 'Αμερική/Παναμά',
    'America/Pangnirtung' => 'Αμερική/Pangnirtung',
    'America/Paramaribo' => 'Αμερική/Παραμαρίμπο',
    'America/Phoenix' => 'Αμερική/Phoenix',
    'America/Port-au-Prince' => 'Αμερική/Πορτ-ο-Πρενς',
    'America/Port_of_Spain' => 'Αμερική/Λιμάνι της Ισπανίας',
    'America/Porto_Velho' => 'Αμερική/Πόρτο_Βέλο',
    'America/Puerto_Rico' => 'Αμερική/Πουέρτο_Ρίκο',
    'America/Rainy_River' => 'Αμερική/Ρέινι_Ρίβερ',
    'America/Rankin_Inlet' => 'Αμερική/Ρέινκιν_Ίνλετ',
    'America/Recife' => 'Αμερική/Ρεσίφε',
    'America/Regina' => 'Αμερική/Ρετζίνα',
    'America/Rio_Branco' => 'Αμερική/Ρίο_Μπράνκο',
    'America/Santiago' => 'Αμερική/Σαντιάγο',
    'America/Santo_Domingo' => 'Αμερική/Σάντο_Ντομίνγκο',
    'America/Sao_Paulo' => 'Αμερική/Σάο Πάολο',
    'America/Scoresbysund' => 'Αμερική/Scoresbysund',
    'America/St_Johns' => 'Αμερική/Αγ_Ιωάννη',
    'America/St_Kitts' => 'Αμερική/Άγ_Χριστόφορος',
    'America/St_Lucia' => 'Αμερική/Αγ_Λουκία',
    'America/St_Thomas' => 'Αμερική/Αγ_Θωμάς',
    'America/St_Vincent' => 'Αμερική/Αγ_Βικέντιος',
    'America/Swift_Current' => 'Αμερική/Swift_Current',
    'America/Tegucigalpa' => 'Αμερική/Τεγκουσιγκάλπα',
    'America/Thule' => 'Αμερική/Θούλη',
    'America/Thunder_Bay' => 'Αμερική/Θάντερ_Μπέι',
    'America/Tijuana' => 'Αμερική/Τιχουάνα',
    'America/Toronto' => 'Αμερική/Τορόντο',
    'America/Tortola' => 'Αμερική/Τορτόλα',
    'America/Vancouver' => 'Αμερική/Βανκούβερ',
    'America/Whitehorse' => 'Αμερική/Ουάιτχορς',
    'America/Winnipeg' => 'Αμερική/Γουίνιπεγκ',
    'America/Yakutat' => 'Αμερική/Γιακούτατ',
    'America/Yellowknife' => 'Αμερική/Γέλοουναϊφ',
    'Antarctica/Casey' => 'Ανταρκτική/Κάσεϊ',
    'Antarctica/Davis' => 'Ανταρκτική/Ντέιβις',
    'Antarctica/DumontDUrville' => 'Ανταρκτική/Ντουμόν',
    'Antarctica/Mawson' => 'Ανταρκτική/Μοσόν',
    'Antarctica/McMurdo' => 'Ανταρκτική/McMurdo',
    'Antarctica/Palmer' => 'Ανταρκτική/Παλμέρ',
    'Antarctica/Rothera' => 'Ανταρκτική/Ροθέρα',
    'Antarctica/Syowa' => 'Ανταρκτική/Σιόβα',
    'Antarctica/Vostok' => 'Ανταρκτική/Βοστόκ',
    'Asia/Aden' => 'Ασία/Άντεν',
    'Asia/Almaty' => 'Ασία/Αλμάτι',
    'Asia/Amman' => 'Ασία/Αμμάν',
    'Asia/Anadyr' => 'Ασία/Αναντίρ',
    'Asia/Aqtau' => 'Ασία/Ακτάου',
    'Asia/Aqtobe' => 'Ασία/Ακτόμπ',
    'Asia/Ashgabat' => 'Ασία/Ασγκαμπάτ',
    'Asia/Baghdad' => 'Ασία/Τεχεράνη',
    'Asia/Bahrain' => 'Ασία/Μπαχρέιν',
    'Asia/Baku' => 'Ασία/Μπακού',
    'Asia/Bangkok' => 'Ασία/Μπανγκόκ',
    'Asia/Beijing' => 'Ασία/Πεκίνο',
    'Asia/Beirut' => 'Ασία/Βηρυτός',
    'Asia/Bishkek' => 'Ασία/Μπισκέκ',
    'Asia/Brunei' => 'Ασία/Μπρουνέι',
    'Asia/Calcutta' => 'Ασία/Καλκούτα',
    'Asia/Choibalsan' => 'Ασία/Σουαμπαλσάν',
    'Asia/Chongqing' => 'Ασία/Τσονγκκίνγκ',
    'Asia/Colombo' => 'Ασία/Κολόμπο',
    'Asia/Damascus' => 'Ασία/Δαμασκός',
    'Asia/Dhaka' => 'Ασία/Ντάκα',
    'Asia/Dili' => 'Ασία/Ντίλι',
    'Asia/Dubai' => 'Ασία/Ντουμπάι',
    'Asia/Dushanbe' => 'Ασία/Ντουσάνμπι',
    'Asia/Gaza' => 'Ασία/Γάζα',
    'Asia/Harbin' => 'Ασία/Χαρμπίν',
    'Asia/Hong_Kong' => 'Ασία/Χονγκ_Χονγκ',
    'Asia/Hovd' => 'Ααία/Χοβντ',
    'Asia/Irkutsk' => 'Ασία/Ιρκούτσκ',
    'Asia/Jakarta' => 'Ασία/Τζακάρτα',
    'Asia/Jayapura' => 'Ασία/Τζαγιαπούρα',
    'Asia/Jerusalem' => 'Ασία/Βαγδάτη',
    'Asia/Kabul' => 'Ασία/Καμπούλ',
    'Asia/Kamchatka' => 'Ασία/Καμτσάτκα',
    'Asia/Karachi' => 'Ασία/Καράτσι',
    'Asia/Kashgar' => 'Ασία/Κάσι',
    'Asia/Katmandu' => 'Ασία/Κατμαντού',
    'Asia/Krasnoyarsk' => 'Ασία/Κρασνογιάρσκ',
    'Asia/Kuala_Lumpur' => 'Ασία/Κουάλα Λουμπούρ',
    'Asia/Kuching' => 'Ασία/Κουτσίνγκ',
    'Asia/Kuwait' => 'Ασία/Κουβέιτ',
    'Asia/Macau' => 'Ασία/Μακάου',
    'Asia/Magadan' => 'Ασία/Μαγκαντάν',
    'Asia/Makassar' => 'Ασία/Μακασσάρ',
    'Asia/Manila' => 'Ασία/Μανίλα',
    'Asia/Muscat' => 'Ασία/Μουσκάτ',
    'Asia/Nicosia' => 'Ασία/Λευκωσία',
    'Asia/Novosibirsk' => 'Ασία/Νοβοσιμπίρσκ',
    'Asia/Omsk' => 'Ασία/Ομσκ',
    'Asia/Oral' => 'Ασία/Οράλ',
    'Asia/Phnom_Penh' => 'Ασία/Πνομ_Πενχ',
    'Asia/Pontianak' => 'Ασία/Ποντιανάκ',
    'Asia/Pyongyang' => 'Ασία/Πιονγκγιάνγκ',
    'Asia/Qatar' => 'Ασία/Κατάρ',
    'Asia/Qyzylorda' => 'Ασία/Qyzylorda',
    'Asia/Rangoon' => 'Ασία/Ρανγκούν',
    'Asia/Riyadh' => 'Ασία/Ριάντ',
    'Asia/Saigon' => 'Ασία/Σαϊγκόν',
    'Asia/Sakhalin' => 'Ασία/Σαχαλίνη',
    'Asia/Samarkand' => 'Ασία/Σαμαρκάνδη',
    'Asia/Seoul' => 'Ασία/Σεούλ',
    'Asia/Shanghai' => 'Ασία/Σαγκάη',
    'Asia/Singapore' => 'Ασία/Σιγκαπούρη',
    'Asia/Taipei' => 'Ασία/Ταϊπέι',
    'Asia/Tashkent' => 'Ασία/Τασκένδη',
    'Asia/Tbilisi' => 'Ασία/Τιφλίδα',
    'Asia/Tehran' => 'Ασία/Τεχεράνη',
    'Asia/Thimphu' => 'Ασία/Τιμπού',
    'Asia/Tokyo' => 'Ασία/Τόκυο',
    'Asia/Ulaanbaatar' => 'Ασία/Ουλάν Μπατόρ',
    'Asia/Urumqi' => 'Ασία/Ουρούμκι',
    'Asia/Vientiane' => 'Ασία/Βιεντιάν',
    'Asia/Vladivostok' => 'Ασία/Βλαδιβοστόκ',
    'Asia/Yakutsk' => 'Ασία/Γιάκουτσκ',
    'Asia/Yekaterinburg' => 'Ασία/Εκατερίνενμπουργκ',
    'Asia/Yerevan' => 'Ασία/Ερεβάν',
    'Atlantic/Azores' => 'Ατλαντικός/Αζόρες',
    'Atlantic/Bermuda' => 'Αμερική/Βερμούδα',
    'Atlantic/Canary' => 'Ατλαντικός/Κανάρι',
    'Atlantic/Cape_Verde' => 'Ατλαντικού/Πράσινο_Ακρωτήριο',
    'Atlantic/Faeroe' => 'Ατλαντικός/Φερόε',
    'Atlantic/Madeira' => 'Ατλαντικός/Μαδέρα',
    'Atlantic/Reykjavik' => 'Ατλαντικός/Ρέικιαβικ',
    'Atlantic/South_Georgia' => 'Αμερική/Νότια Γεωργία',
    'Atlantic/St_Helena' => 'Ατλαντικός/Αγία_Ελένη',
    'Atlantic/Stanley' => 'Ατλαντικός/Στάνλεϊ',
    'Australia/Adelaide' => 'Αυστραλία/Αδελαΐδα',
    'Australia/Brisbane' => 'Αυστραλία/Μπρίσμπαν',
    'Australia/Broken_Hill' => 'Αυστραλία/Μπρόκεν_Χιλ',
    'Australia/Currie' => 'Αυστραλία/Currie',
    'Australia/Darwin' => 'Αυστραλία/Δαρβίνος',
    'Australia/Hobart' => 'Αυστραλία/Χόμπαρτ',
    'Australia/Lindeman' => 'Αυστραλία/Lindeman',
    'Australia/Melbourne' => 'Αυστραλία/Μελβούρνη',
    'Australia/Perth' => 'Αυστραλία/Περθ',
    'Australia/Sydney' => 'Αυστραλία/Σίδνεϊ',
    'CET' => 'Ώρα Κεντρικής Ευρώπης',
    'EET' => 'EET',
    'Europe/Amsterdam' => 'Ευρώπη/Άμστερνταμ',
    'Europe/Andorra' => 'Ευρώπη/Ανδόρα',
    'Europe/Athens' => 'Ευρώπη/Αθήνα',
    'Europe/Belgrade' => 'Ευρώπη/Βελιγράδι',
    'Europe/Berlin' => 'Ευρώπη/Βερολίνο',
    'Europe/Brussels' => 'Ευρώπη/Βρυξέλλες',
    'Europe/Bucharest' => 'Ευρώπη/Βουκουρέστι',
    'Europe/Budapest' => 'Ευρώπη/Βουδαπέστη',
    'Europe/Chisinau' => 'Ευρώπη/Κισινάου',
    'Europe/Copenhagen' => 'Ευρώπη/Κοπεγχάγη',
    'Europe/Dublin' => 'Ευρώπη/Δουβλίνο',
    'Europe/Gibraltar' => 'Ευρώπη/Γιβραλτάρ',
    'Europe/Helsinki' => 'Ευρώπη/Ελσίνκι',
    'Europe/Istanbul' => 'Ευρώπη/Κωνσταντινούπολη',
    'Europe/Kaliningrad' => 'Ευρώπη/Καλίνινγκραντ',
    'Europe/Kiev' => 'Ευρώπη/Κίεβο',
    'Europe/Lisbon' => 'Ευρώπη/Λισαβόνα',
    'Europe/London' => 'Ευρώπη/Λονδίνο',
    'Europe/Luxembourg' => 'Ευρώπη/Λουξεμβούργο',
    'Europe/Madrid' => 'Ευρώπη/Μαδρίτη',
    'Europe/Malta' => 'Ευρώπη/Μάλτα',
    'Europe/Minsk' => 'Ευρώπη/Μινσκ',
    'Europe/Monaco' => 'Ευρώπη/Μονακό',
    'Europe/Moscow' => 'Ευρώπη/Μόσχα',
    'Europe/Oslo' => 'Ευρώπη/Όσλο',
    'Europe/Paris' => 'Ευρώπη/Παρίσι',
    'Europe/Prague' => 'Ευρώπη/Πράγα',
    'Europe/Riga' => 'Ευρώπη/Ρίγα',
    'Europe/Rome' => 'Ευρώπη/Ρώμη',
    'Europe/Samara' => 'Ευρώπη/Σαμάρα',
    'Europe/Simferopol' => 'Ευρώπη/Συμφερούπολη',
    'Europe/Sofia' => 'Ευρώπη/Σόφια',
    'Europe/Stockholm' => 'Ευρώπη/Στοκχόλμη',
    'Europe/Tallinn' => 'Ευρώπη/Ταλίν',
    'Europe/Tirane' => 'Ευρώπη/Τίρανα',
    'Europe/Uzhgorod' => 'Ευρώπη/Ούζγκοροντ',
    'Europe/Vaduz' => 'Ευρώπη/Βαντούζ',
    'Europe/Vienna' => 'Ευρώπη/Βιέννη',
    'Europe/Vilnius' => 'Ευρώπη/Βίλνιους',
    'Europe/Warsaw' => 'Ευρώπη/Βαρσοβία',
    'Europe/Zaporozhye' => 'Ευρώπη/Ζαπορίζια',
    'Europe/Zurich' => 'Ευρώπη/Ζυρίχη',
    'Indian/Antananarivo' => 'Ινδικός/Ανταναναρίβο',
    'Indian/Chagos' => 'Ινδικός/Τσάγκος',
    'Indian/Christmas' => 'Ινδικός/Χριστούγεννα',
    'Indian/Cocos' => 'Ινδικός/Κόκος',
    'Indian/Comoro' => 'Ινδικό/Κομόρες',
    'Indian/Kerguelen' => 'Ινδικός/Κεργκελέν',
    'Indian/Mahe' => 'Ινδικός/Μαέ',
    'Indian/Maldives' => 'Ινδικός/Μαλδίβες',
    'Indian/Mauritius' => 'Ινδική/Μαυρίκιος',
    'Indian/Mayotte' => 'Ινδική/Μαγιότ',
    'Indian/Reunion' => 'Αφρική/Ρεουνιόν',
    'MET' => 'MET',
    'Pacific/Apia' => 'Ειρηνικός/Άπια',
    'Pacific/Auckland' => 'Ειρηνικός/Όκλαντ',
    'Pacific/Chatham' => 'Ειρηνικός/',
    'Pacific/Easter' => 'Ειρηνικός/Πάσχα',
    'Pacific/Efate' => 'Ειρηνικός/Εφάτε',
    'Pacific/Enderbury' => 'Ειρηνικός/Εντέρμπουρι',
    'Pacific/Fakaofo' => 'Ειρηνικός/',
    'Pacific/Fiji' => 'Ειρηνικός/Φίτζι',
    'Pacific/Funafuti' => 'Ειρηνικός/Φουναφούτι',
    'Pacific/Galapagos' => 'Αμερική/Γκαλαπάγκος',
    'Pacific/Gambier' => 'Ειρηνικός/Γκάμπιερ',
    'Pacific/Guadalcanal' => 'Ειρηνικός/Γκουανταλκανάλ',
    'Pacific/Guam' => 'Ειρηνικός/Γκουάμ',
    'Pacific/Honolulu' => 'Αμερική/Χονολουλού',
    'Pacific/Johnston' => 'Ειρηνικός/Johnston',
    'Pacific/Kiritimati' => 'Ειρηνικός/Κιριτιμάτι',
    'Pacific/Kosrae' => 'Ειρηνικός/Κοσράε',
    'Pacific/Kwajalein' => 'Ειρηνικός/Kwajalein',
    'Pacific/Majuro' => 'Ειρηνικός/Μαζούρο',
    'Pacific/Marquesas' => 'Ειρηνικός/Μαρκέσας',
    'Pacific/Midway' => 'Ειρηνικός/Μίντγουεϊ',
    'Pacific/Nauru' => 'Ειρηνικός/Ναούρου',
    'Pacific/Niue' => 'Ειρηνικός/Νιούε',
    'Pacific/Norfolk' => 'Ειρηνικός/Νόρφολκ',
    'Pacific/Noumea' => 'Ειρηνικός/Νουμέα',
    'Pacific/Pago_Pago' => 'Ειρηνικός/Πάγκο_Πάγκο',
    'Pacific/Palau' => 'Ειρηνικός/Παλάου',
    'Pacific/Pitcairn' => 'Ειρηνικός/Πίτκερν',
    'Pacific/Ponape' => 'Ειρηνικός/Πονπέι',
    'Pacific/Port_Moresby' => 'Ειρηνικός/Πορτ Μόρεσμπι',
    'Pacific/Rarotonga' => 'Ειρηνικός/',
    'Pacific/Saipan' => 'Ειρηνικός/Σαϊπάν',
    'Pacific/Tahiti' => 'Ειρηνικός/Ταϊτή',
    'Pacific/Tarawa' => 'Ειρηνικός/Ταράουα',
    'Pacific/Tongatapu' => 'Ειρηνικός/Τονγκατάπου',
    'Pacific/Truk' => 'Ειρηνικός/Τρουκ',
    'Pacific/Wake' => 'Ειρηνικός/Γουέικ',
    'Pacific/Wallis' => 'Ειρηνικός/Γουάλις',
    'WET' => 'Υγρός',
  ),
  'token_status' => 
  array (
    1 => 'Αίτημα',
    2 => 'Πρόσβαση',
    3 => 'Διαθέσιμη',
  ),
  'top10_opportunities_duration_options' => 
  array (
    0 => 'Αυτό το Τρίμηνο',
    3 => 'Επόμενο Τρίμηνο',
    12 => 'Αυτό το Έτος',
  ),
  'top10_opportunities_visibility_options' => 
  array (
    'group' => '',
    'user' => '',
  ),
  'tselect_type_dom' => 
  array (
    0 => '0 ώρες',
    14440 => '4 ώρες',
    28800 => '8 ώρες',
    43200 => '12 ώρες',
    86400 => '1 ημέρα',
    172800 => '2 ημέρες',
    259200 => '3 ημέρες',
    345600 => '4 ημέρες',
    432000 => '5 ημέρες',
    604800 => '1 εβδομάδα',
    1209600 => '2 εβδομάδες',
    1814400 => '3 εβδομάδες',
    2592000 => '30 ημέρες',
    5184000 => '60 ημέρες',
    7776000 => '90 ημέρες',
    10368000 => '120 ημέρες',
    12960000 => '150 ημέρες',
    15552000 => '180 ημέρες',
  ),
  'user_status_dom' => 
  array (
    'Active' => 'Ενεργός',
    'Inactive' => 'Ανενεργός',
  ),
  'user_type_dom' => 
  array (
    'Administrator' => 'Διαχειριστής',
    'RegularUser' => 'Τακτικός Χειριστής',
  ),
  'webLogicHookList' => 
  array (
    'after_delete' => 'Μετά την Διαγραφή',
    'after_login' => 'Μετά την Σύνδεση',
    'after_login_failed' => 'Μετά την Σύνδεση Απέτυχε',
    'after_logout' => 'Μετά την Αποσύνδεση',
    'after_relationship_add' => 'Μετά την Σχέση Προσθήκη',
    'after_relationship_delete' => 'Μετά την Σχέση Διαγραφή',
    'after_save' => 'Μετά την Αποθήκευση',
  ),
  'web_hook_request_method_list' => 
  array (
    'DELETE' => 'ΔΙΑΓΡΑΦΗ',
    'GET' => 'ΠΑΡΤΕ',
    'POST' => 'ΘΕΣΗ',
    'PUT' => 'ΤΟΠΟΘΕΤΗΣΗ',
  ),
  'wflow_action_datetime_type_dom' => 
  array (
    'Existing Value' => 'Ισχύουσα Ημερομηνία',
    'Triggered Date' => 'Προκαλούμενη Ημερομηνία',
  ),
  'wflow_action_type_dom' => 
  array (
    'new' => 'Νέα Εγγραφή',
    'update' => 'Ενημέρωση Εγγραφής',
    'update_rel' => 'Ενημέρωση Σχετικής Εγγραφής',
  ),
  'wflow_address_type_dom' => 
  array (
    'bcc' => 'Κρυφή Κοινοποίηση:',
    'cc' => 'Κοινοποίηση:',
    'to' => 'Σε:',
  ),
  'wflow_address_type_invite_dom' => 
  array (
    'bcc' => 'Κρυφή Κοινοποίηση:',
    'cc' => 'Κοινοποίηση:',
    'invite_only' => '(Πρόσκληση Μόνο)',
    'to' => 'Σε:',
  ),
  'wflow_address_type_to_only_dom' => 
  array (
    'to' => 'Σε:',
  ),
  'wflow_adv_enum_type_dom' => 
  array (
    'advance' => 'Μετακίνηση αναδυόμενης προς τα εμπρός',
    'retreat' => 'Μετακίνηση αναδυόμενης προς τα πίσω',
  ),
  'wflow_adv_team_type_dom' => 
  array (
    'current_team' => 'Ομάδα Συνδεδεμένων Χειριστών',
    'team_id' => 'Τρέχουσα Ομάδα που προκάλεσε Εγγραφή',
  ),
  'wflow_adv_user_type_dom' => 
  array (
    'assigned_user_id' => 'Ανατεθειμένος Χειριστής σε προκαλούμενη εγγραφή',
    'created_by' => 'Χειριστής ο οποίος δημιούργησε την προκαλούμενη εγγραφή',
    'current_user' => 'Συνδεδεμένος Χειριστής',
    'modified_user_id' => 'Χειριστής ο οποίος τροποποίησε τελευταία φορά την προκαλούμενη εγγραφή',
  ),
  'wflow_alert_type_dom' => 
  array (
    'Email' => 'Email',
    'Invite' => 'Πρόσκληση',
  ),
  'wflow_array_type_dom' => 
  array (
    'future' => 'Νέα Αξία',
    'past' => 'Παλαιά Αξία',
  ),
  'wflow_fire_order_dom' => 
  array (
    'actions_alerts' => 'Ενέργειες μετά Ειδοποιήσεις',
    'alerts_actions' => 'Ειδοποιήσεις μετά Ενέργειες',
  ),
  'wflow_record_type_dom' => 
  array (
    'All' => 'Νέες και Ενημερωμένες Εγγραφές',
    'New' => 'Μόνο Νέες Εγγραφές',
    'Update' => 'Μόνο Ενημερωμένες Εγγραφές',
  ),
  'wflow_rel_type_dom' => 
  array (
    'all' => 'Όλοι σχετικοί',
    'filter' => 'Σχετικό Φίλτρο',
  ),
  'wflow_relate_type_dom' => 
  array (
    'Manager' => 'Διαχειριστής Χειριστών',
    'Self' => 'Χειριστής',
  ),
  'wflow_relfilter_type_dom' => 
  array (
    'all' => 'όλοι σχετικοί',
    'any' => 'οποιοιδήποτε σχετικοί',
  ),
  'wflow_set_type_dom' => 
  array (
    'Advanced' => 'Προηγμένες Επιλογές',
    'Basic' => 'Βασικές Επιλογές',
  ),
  'wflow_source_type_dom' => 
  array (
    'Custom Template' => 'Προσαρμοσμένο Πρότυπο',
    'Normal Message' => 'Κανονικό Μήνυμα',
    'System Default' => 'Προεπιλογή Συστήματος',
  ),
  'wflow_type_dom' => 
  array (
    'Normal' => 'Όταν αποθηκευτεί η εγγραφή',
    'Time' => 'Μετά την παρέλευση του χρόνου',
  ),
  'wflow_user_type_dom' => 
  array (
    'current_user' => 'Τρέχον Χειριστές',
    'rel_user' => 'Σχετικοί Χειριστές',
    'rel_user_custom' => 'Σχετικός Προσαρμοσμένος Χειριστής',
    'specific_role' => 'Ειδικός Ρόλος',
    'specific_team' => 'Ειδική Ομάδα',
    'specific_user' => 'Ειδικός Χειριστής',
  ),
  'width_type_dom' => 
  array (
    '%' => 'Τοις εκατό (%)',
    'px' => 'Pixels (px)',
  ),
);

