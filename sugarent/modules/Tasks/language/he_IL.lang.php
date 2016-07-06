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
  'DATE_FORMAT' => '(dd-mm-yyyy)',
  'ERR_DELETE_RECORD' => 'למחיקת איש הקשר אנא ציין מספר רשומה.',
  'ERR_INVALID_HOUR' => 'אנא הזן שעה שבין 0 ל 24',
  'LBL_ACTIVITIES_REPORTS' => 'דוח פעיליות',
  'LBL_ASSIGNED_TO_NAME' => 'הוקצה עבור:',
  'LBL_ASSIGNED_USER' => 'הוקצה עבור',
  'LBL_COLON' => ':',
  'LBL_CONTACT' => 'איש קשר:',
  'LBL_CONTACT_FIRST_NAME' => 'שם פרטי של איש הקשר',
  'LBL_CONTACT_ID' => 'איש קשר זהות:',
  'LBL_CONTACT_LAST_NAME' => 'שם משפחה של איש הקשר',
  'LBL_CONTACT_NAME' => 'שם איש קשר',
  'LBL_CONTACT_PHONE' => 'טלפון של איש השקשר:',
  'LBL_DATE_DUE' => 'תאריך תפוגה',
  'LBL_DATE_DUE_FLAG' => 'אין תאריך תפוגה',
  'LBL_DATE_START_FLAG' => 'אין תאריך התחלה',
  'LBL_DEFAULT_PRIORITY' => 'בינוני',
  'LBL_DESCRIPTION' => 'תיאור:',
  'LBL_DESCRIPTION_INFORMATION' => 'תיאור המידע',
  'LBL_DUE_DATE' => 'תאריך תפוגה:',
  'LBL_DUE_DATE_AND_TIME' => 'תאריך ושעת תפוגה:',
  'LBL_DUE_TIME' => 'שעת תפוגה:',
  'LBL_EDITLAYOUT' => 'ערוך תצורה',
  'LBL_EMAIL' => 'כתובת דואר אלקטרוני:',
  'LBL_EMAIL_ADDRESS' => 'כתובת דואר אלקטרוני:',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'הוקצה למשתמש ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'הוקצה למשתמש ששמו',
  'LBL_EXPORT_CREATED_BY' => 'נוצר על ידי ID',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'שונה על ידי ID',
  'LBL_EXPORT_PARENT_ID' => 'זהות הורה:',
  'LBL_EXPORT_PARENT_TYPE' => 'קשור למודול',
  'LBL_HELP_CREATE' => 'The {{plural_module_name}} module consists of flexible actions, to-do items, or other type of activity which requires completion.

To create a {{module_name}}:
1. Provide values for the fields as desired.
 - Fields marked "Required" must be completed prior to saving.
 - Click "Show More" to expose additional fields if necessary.
2. Click "Save" to finalize the new record and return to the previous page.
 - Choose "Save and view" to open the new {{module_name}} in record view.
 - Choose "Save and create new" to immediately create another new {{module_name}}.',
  'LBL_HELP_RECORD' => 'The {{plural_module_name}} module consists of flexible actions, to-do items, or other type of activity which requires completion.

- Edit this record&#39;s fields by clicking an individual field or the Edit button.
- View or modify links to other records in the subpanels by toggling the bottom left pane to "Data View".
- Make and view user comments and record change history in the {{activitystream_singular_module}} by toggling the bottom left pane to "Activity Stream".
- Follow or favorite this record using the icons to the right of the record name.
- Additional actions are available in the dropdown Actions menu to the right of the Edit button.',
  'LBL_HELP_RECORDS' => 'The {{plural_module_name}} module consists of flexible actions, to-do items, or other type of activity which requires completion. {{module_name}} records can be related to one record in most modules via the flex relate field and can also be related to a single {{contacts_singular_module}}. There are various ways you can create {{plural_module_name}} in Sugar such as via the {{plural_module_name}} module, duplication, importing {{plural_module_name}}, etc. Once the {{module_name}} record is created, you can view and edit information pertaining to the {{module_name}} via the {{plural_module_name}} record view. Depending on the details on the {{module_name}}, you may also be able to view and edit the {{module_name}} information via the Calendar module. Each {{module_name}} record may then relate to other Sugar records such as {{accounts_module}}, {{contacts_module}}, {{opportunities_module}}, and many others.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'פתקים',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'הוקצה למשתמש',
  'LBL_LIST_CLOSE' => 'סגור',
  'LBL_LIST_COMPLETE' => 'הושלם:',
  'LBL_LIST_CONTACT' => 'איש קשר',
  'LBL_LIST_DATE_MODIFIED' => 'שונה בתאריך',
  'LBL_LIST_DUE_DATE' => 'תאריך תפוגה',
  'LBL_LIST_DUE_TIME' => 'שעת תפוגה',
  'LBL_LIST_FORM_TITLE' => 'רשימת משימות',
  'LBL_LIST_MY_TASKS' => 'המשימות הפתוחות שלי',
  'LBL_LIST_PRIORITY' => 'עדיפות',
  'LBL_LIST_RELATED_TO' => 'קשור אל',
  'LBL_LIST_START_DATE' => 'תאריך התחלה',
  'LBL_LIST_START_TIME' => 'שעת התחלה',
  'LBL_LIST_STATUS' => 'הושלם',
  'LBL_LIST_SUBJECT' => 'נושא',
  'LBL_MODULE_NAME' => 'משימות',
  'LBL_MODULE_NAME_SINGULAR' => 'משימה',
  'LBL_MODULE_TITLE' => 'משימות: דף ראשי',
  'LBL_NAME' => 'שם:',
  'LBL_NEW_FORM_DUE_DATE' => 'תאריך תפוגה:',
  'LBL_NEW_FORM_DUE_TIME' => 'שעת תפוגה:',
  'LBL_NEW_FORM_SUBJECT' => 'נושא:',
  'LBL_NEW_FORM_TITLE' => 'צור משימה',
  'LBL_NEW_TIME_FORMAT' => '(24:00)',
  'LBL_NONE' => 'כלום',
  'LBL_NOTES_SUBPANEL_TITLE' => 'פתקים',
  'LBL_PARENT_ID' => 'Parent ID:',
  'LBL_PARENT_NAME' => 'Parent Type:',
  'LBL_PHONE' => 'טלפון:',
  'LBL_PRIORITY' => 'עדיפות:',
  'LBL_REVENUELINEITEMS' => 'שורות פרטי הכנסה',
  'LBL_SEARCH_FORM_TITLE' => 'חפש משימה',
  'LBL_START_DATE' => 'תאריך התחלה:',
  'LBL_START_DATE_AND_TIME' => 'תאריך ושעת התחלה:',
  'LBL_START_TIME' => 'שעת התחלה:',
  'LBL_STATUS' => 'סטאטוס:',
  'LBL_SUBJECT' => 'נושא:',
  'LBL_TASK' => 'משימות:',
  'LBL_TASK_CLOSE_SUCCESS' => 'המסימה נסגרה בהצלחה',
  'LBL_TASK_INFORMATION' => 'סקירת משימות',
  'LNK_IMPORT_TASKS' => 'ייבא משימות',
  'LNK_NEW_TASK' => 'צור משימה',
  'LNK_TASK_LIST' => 'View Tasks',
);

