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
  'ERR_DELETE_RECORD' => 'למחיקת הרשומה יש לציין מספר רשומה',
  'LBL_ACCEPT_LINK' => 'קבל קישור',
  'LBL_ACCEPT_STATUS' => 'קבל סטאטוס',
  'LBL_ACCEPT_THIS' => 'לקבל',
  'LBL_ACCOUNT_NAME' => 'חשבון',
  'LBL_ACTIVITIES_REPORTS' => 'דוחות פעילים',
  'LBL_ADD_BUTTON' => 'הוסף',
  'LBL_ADD_INVITEE' => 'הוסף מוזמנים',
  'LBL_ASSIGNED_TO_NAME' => 'הוקצה עבור:',
  'LBL_CANCEL_CREATE_INVITEE' => 'בטל',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'אתה בטוח שברצונך להסיר את כל הרשומות החוזרות',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'אנשי קשר',
  'LBL_CONTACT_NAME' => 'איש קשר',
  'LBL_CREATED_BY' => 'נוצר על ידי',
  'LBL_CREATED_USER' => 'צור משתמש',
  'LBL_CREATE_AND_ADD' => 'צור והוסף',
  'LBL_CREATE_CONTACT' => 'כאיש קשר',
  'LBL_CREATE_INVITEE' => 'צור מוזמן',
  'LBL_CREATE_LEAD' => 'כליד',
  'LBL_CREATE_MODULE' => 'תזמן פגישה',
  'LBL_CREATOR' => 'יוצר הפגישה',
  'LBL_DATE' => 'תאריך התחלה',
  'LBL_DATE_END' => 'מסתיים בתאריך',
  'LBL_DATE_END_ERROR' => 'תאריך הסיום לפני תאריך ההתחלה',
  'LBL_DATE_TIME' => 'תאריך ושעת התחלה',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'פגישות',
  'LBL_DEL' => 'מחק',
  'LBL_DESCRIPTION' => 'תיאור',
  'LBL_DESCRIPTION_INFORMATION' => 'תיאור המידע',
  'LBL_DIRECTION' => 'כיוון:',
  'LBL_DISPLAYED_URL' => 'הצג כתובת אינטרנט',
  'LBL_DURATION' => 'משך',
  'LBL_DURATION_HOURS' => 'משך בשעות',
  'LBL_DURATION_MINUTES' => 'משך בדקות',
  'LBL_EDIT_ALL_RECURRENCES' => 'ערוך כל החזרות',
  'LBL_EMAIL' => 'דואר אלקטרוני',
  'LBL_EMAIL_REMINDER' => 'תזכורת בדואר אלקטרוני',
  'LBL_EMAIL_REMINDER_SENT' => 'תזכורת דואר נשלחה',
  'LBL_EMAIL_REMINDER_TIME' => 'זמן תזכורת דואר אלקטרוני',
  'LBL_EMPTY_SEARCH_RESULT' => 'מצטער לא נמאו תוצאות,אנא צור את המוזמן הרשום מטה',
  'LBL_ERROR_LAUNCH_MEETING_GENERAL' => 'הייתה שגיאה בהתחלת פגישה זו. אנא פנה למנהל.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'הוקצה למשתמש ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'הוקצה למשתמש ששמו',
  'LBL_EXPORT_CREATED_BY' => 'נוצר על ידי ID',
  'LBL_EXPORT_DATE_END' => 'תאריך ושעת סיום',
  'LBL_EXPORT_DATE_START' => 'תאריך וזמן התחלה',
  'LBL_EXPORT_DISPLAYED_URL' => 'כתובת אינטרנט שתוצג',
  'LBL_EXPORT_EXTERNAL_ID' => 'זהות חיצונית',
  'LBL_EXPORT_HOST_URL' => 'כתובת אינטרנט מארח',
  'LBL_EXPORT_JOIN_URL' => 'הצטרף לכתובת אינטרנט',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'שונה על ידי ID',
  'LBL_EXPORT_PARENT_ID' => 'זהות הורה:',
  'LBL_EXPORT_PARENT_TYPE' => 'קשור בסוג',
  'LBL_EXPORT_REMINDER_TIME' => 'זמן תזכורת (בדקות)',
  'LBL_EXTERNALID' => 'זהות אפליקציה חיצונית',
  'LBL_EXTNOSTART_HEADER' => 'שגיאה:לא מצליח לאתחל הפגישה',
  'LBL_EXTNOSTART_MAIN' => 'אתה לא יכול לאתחל פגישה זו בגלל שאינך מנהל המערכת או בעליה של הפגישה',
  'LBL_EXTNOT_GO_BACK' => 'לך אחורה לרשומה הקודמת',
  'LBL_EXTNOT_HEADER' => 'שגיאה:לא מוזמן',
  'LBL_EXTNOT_MAIN' => 'אינך יכול להצטרף לפגישה זו מאחר ואינך מוזמן',
  'LBL_EXTNOT_RECORD_LINK' => 'צפה בפגישה',
  'LBL_FIRST_NAME' => 'שם פרטי',
  'LBL_HELP_CREATE' => 'The {{plural_module_name}} module consists of {{meetings_module}} records logged by users in your organization. {{plural_module_name}} may be in a status of "Scheduled", "Held", or "Canceled". Sugar users as well as {{contacts_module}} and {{leads_module}} may be added as invitees.

To create a {{meetings_singular_module}}:
1. Provide values for the fields as desired.
    - Fields marked "Required" must be completed prior to saving.
    - Click "Show More" to expose additional fields if necessary.
2. Add invitees to the {{meetings_singular_module}}.
    - Click "Select an Attendee" to add an existing user, contact, or lead to the {{meetings_singular_module}}.
    - Click the plus icon to the right of "Select an Attendee" to create a {{meetings_singular_module}} attendee as a new Sugar record.
3. Click "Save" to finalize the new record and return to the previous page.
    - Choose "Save and view" to open the new meeting in record view.
    - Choose "Save and create new" to immediately create another new {{meetings_singular_module}}.',
  'LBL_HELP_RECORD' => 'The {{plural_module_name}} module consists of {{meetings_singular_module}} records logged by users in your organization. {{plural_module_name}} may be in a status of "Scheduled", "Held", or "Canceled". Sugar users as well as {{contacts_module}} and {{leads_module}} may be added as invitees.

- Edit this record&#39;s fields by clicking an individual field or the Edit button.
- View or modify links to other records in the subpanels by toggling the bottom left pane to "Data View".
- Make and view user comments and record change history in the activity stream by toggling the bottom left pane to "Activity Stream".
- Follow or favorite this record using the icons to the right of the record name.
- Additional actions are available in the dropdown Actions menu to the right of the Edit button.',
  'LBL_HELP_RECORDS' => 'The {{plural_module_name}} module consists of meeting records which may be in a status of "Scheduled", "Held", or "Canceled". Upcoming meetings scheduled within the next 24 hours show the start date highlighted in blue. Overdue meetings show the start date highlighted in red.

From this {{plural_module_name}} list view, you can view and in-line edit meeting information. Additional actions are available in the menu at the end of each meeting&#39;s row. You can select "Close" from the menu on any scheduled meeting&#39;s row in order to mark it as held.

Sugar users, contacts, and leads may be added as meeting invitees. {{plural_module_name}} may be created via the {{plural_module_name}} module, Calendar module, import, as well as via the Activities subpanel (for Legacy modules) or Planned Activities dashlet (for Sidecar modules) on related module records (e.g. Contacts, Accounts, etc.), which automatically creates a relationship between both records.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'פתקים',
  'LBL_HOST_EXT_MEETING' => 'התחל פגישה',
  'LBL_HOST_URL' => 'כתובת אינטרנט של המארח',
  'LBL_HOURS_ABBREV' => 'ש&#39;',
  'LBL_HOURS_MINS' => 'שעות/דקות',
  'LBL_INVITEE' => 'מוזמנים',
  'LBL_JOIN_EXT_MEETING' => 'הצטרף פגישה',
  'LBL_JOIN_MEETING' => 'הצטרף ל{{meetingType}}',
  'LBL_LAST_NAME' => 'שם משפחה',
  'LBL_LEADS_SUBPANEL_TITLE' => 'לידים',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'משתמש שהוקצה',
  'LBL_LIST_CLOSE' => 'סגור',
  'LBL_LIST_CONTACT' => 'איש קשר',
  'LBL_LIST_DATE' => 'תאריך התחלה',
  'LBL_LIST_DATE_MODIFIED' => 'שונה בתאריך',
  'LBL_LIST_DIRECTION' => 'הנחיות',
  'LBL_LIST_DUE_DATE' => 'תאריך סיום',
  'LBL_LIST_FORM_TITLE' => 'רשימת פגישות',
  'LBL_LIST_JOIN_MEETING' => 'הצטרף לפגישה',
  'LBL_LIST_MY_MEETINGS' => 'הפגישות שלי',
  'LBL_LIST_RELATED_TO' => 'קשור אל',
  'LBL_LIST_STATUS' => 'סטאטוס:',
  'LBL_LIST_SUBJECT' => 'נושא',
  'LBL_LIST_TIME' => 'שעת התחלה',
  'LBL_LOCATION' => 'מיקום',
  'LBL_MEETING' => 'פגישה:',
  'LBL_MEETING_CLOSE_SUCCESS' => 'פגישה נסגרה בהצלחה',
  'LBL_MEETING_INFORMATION' => 'סקירת פגישות',
  'LBL_MINSS_ABBREV' => 'דקות',
  'LBL_MODIFIED_BY' => 'שונה על ידי',
  'LBL_MODIFIED_USER' => 'שנה משתמש',
  'LBL_MODULE_NAME' => 'פגישות',
  'LBL_MODULE_NAME_SINGULAR' => 'פגישה',
  'LBL_MODULE_TITLE' => 'פגישות: דף ראשי',
  'LBL_MY_SCHEDULED_MEETINGS' => 'הפגישות המתוזמנות שלי',
  'LBL_NAME' => 'שם',
  'LBL_NEW_FORM_TITLE' => 'צור פגישה',
  'LBL_NO_ACCESS' => 'אין לך גישה ליצירת $module',
  'LBL_OUTLOOK_ID' => 'זהות אווטלוק',
  'LBL_PARENT_ID' => 'זהות הורה:',
  'LBL_PARENT_TYPE' => 'סוג הורה',
  'LBL_PASSWORD' => 'סיסמא לפגישה',
  'LBL_PHONE' => 'טלפון במשרד',
  'LBL_POPUP_REMINDER' => 'תזכורת פופאפ',
  'LBL_POPUP_REMINDER_TIME' => 'מועד תזכורת פופאפ',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'יצרת רשומה זו בהצלחה אך אין לך הרשאת גישה אליה',
  'LBL_RECORD_SAVED_SUCCESS' => 'יצרת בהצלחה את {{moduleSingularLower}} {{full_name}}.',
  'LBL_RECURRENCE' => 'חזרה',
  'LBL_RECURRING_LIMIT_ERROR' => 'לא ניתן לקבוע שיחה חוזרת כיוון שהוא חורג ממספר החזרות המותר שהוא $limit.',
  'LBL_RECURRING_SOURCE' => 'התרחשות שנית של המקור',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'פגישה עם {{{this}}}',
  'LBL_RELATED_TO' => 'קשור אל:',
  'LBL_REMINDER' => 'תיזכורת',
  'LBL_REMINDER_EMAIL' => 'דואר אלקטרוני',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'שלח מייל לכל המוזמנים',
  'LBL_REMINDER_POPUP' => 'הודעה קופצת',
  'LBL_REMINDER_TIME' => 'התראה מראש',
  'LBL_REMINDER_TITLE' => 'פגשיה',
  'LBL_REMOVE' => 'הערה',
  'LBL_REMOVE_ALL_RECURRENCES' => 'מחק את כל החזרות',
  'LBL_REPEAT_COUNT' => 'מונה חזרות',
  'LBL_REPEAT_DOW' => 'Repeat Dow',
  'LBL_REPEAT_END' => 'סיום',
  'LBL_REPEAT_END_AFTER' => 'אחרי',
  'LBL_REPEAT_END_BY' => 'על ידי',
  'LBL_REPEAT_INTERVAL' => 'מרווחי זמן בין החזרות',
  'LBL_REPEAT_OCCURRENCES' => 'חזרות',
  'LBL_REPEAT_PARENT_ID' => 'זהות הורה של החזרה',
  'LBL_REPEAT_TYPE' => 'סוג חזרה',
  'LBL_REPEAT_UNTIL' => 'חזור עד',
  'LBL_REVENUELINEITEMS' => 'שורות פרטי הכנסה',
  'LBL_SCHEDULING_FORM_TITLE' => 'תזמן',
  'LBL_SEARCH_BUTTON' => 'חיפוש',
  'LBL_SEARCH_FORM_TITLE' => 'חפש פגישה',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'שלח הזמנה',
  'LBL_SEND_BUTTON_TITLE' => 'שלח הזמנה',
  'LBL_SEND_INVITES' => 'שלח למוזמנים',
  'LBL_SEQUENCE' => 'רצף עדכון פגישה',
  'LBL_START_MEETING' => 'התחל {{meetingType}}',
  'LBL_STATUS' => 'סטאטוס:',
  'LBL_SUBJECT' => 'נושא',
  'LBL_SYNCED_RECURRING_MSG' => 'This meeting originated in another system and was synced to Sugar. To make changes, go to the original meeting within the other system. Changes made in the other system can be synced to this record.',
  'LBL_TIME' => 'שעת התחלה',
  'LBL_TYPE' => 'סוג פגישה',
  'LBL_URL' => 'התחל/הצטרף לפגישה',
  'LBL_USERS_SUBPANEL_TITLE' => 'משתמשים',
  'LNK_IMPORT_MEETINGS' => 'ייבוא פגישות',
  'LNK_MEETING_LIST' => 'צפייה בפגישות',
  'LNK_NEW_APPOINTMENT' => 'צור פגישה',
  'LNK_NEW_MEETING' => 'פגישה מתוזמנת',
  'NOTICE_DURATION_TIME' => 'משך זמן חייב להיות גדול מאפס',
  'NTC_REMOVE_INVITEE' => 'האם אתה בטוח שברצונך להסיר את המוזמן הזה מהפגישה',
);

