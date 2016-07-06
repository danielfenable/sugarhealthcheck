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
  'LBL_ASSIGNED_USER' => 'משתמש שהוקצה',
  'LBL_CAS_ID' => 'תהליך ID',
  'LBL_MODULE_NAME' => 'תהליכים',
  'LBL_MODULE_NAME_SINGULAR' => 'תהליכים',
  'LBL_MODULE_TITLE' => 'תהליכים',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 ב <strong>%s</strong> מאושר',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => 'בטענה s% &0',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => 'בהקצאה למשתמש s% &0',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => 'בדחיית s% &0',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => 'בניתוב s% &0',
  'LBL_PMSE_BUTTON_CANCEL' => 'בטל',
  'LBL_PMSE_BUTTON_CLOSE' => 'סגור',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'תהליך לוג מחבר',
  'LBL_PMSE_BUTTON_REFRESH' => 'רענן',
  'LBL_PMSE_BUTTON_SAVE' => 'שמור',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'לוג שוגר',
  'LBL_PMSE_CANCEL_MESSAGE' => 'האם אתה בטוח שברצונך לבטל את תהליך ID מספר {}?',
  'LBL_PMSE_FILTER' => 'פילטר',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'פתק',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'סוג',
  'LBL_PMSE_FORM_LABEL_USER' => 'משתמש',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'בחר...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'המשימה שבוצעה הייתה %s',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'המשימה עדיין מוקצת',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'בשם: %s',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'נוצרה',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'נוצר תהליך  # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'כעת משימה ID %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'בוצעה משימה לא ידועה',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'נערכה',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'של מודול  %s %s',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'לא ידוע (לפי ID מתמש s%)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'אין משימה שנרשמה',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '(טרם התחיל)',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'נותבה',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'המשימה',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'המשימה',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'עם האירוע %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => '%s הוערך ונותב למשימה הבאה',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'הוסף פתקים',
  'LBL_PMSE_LABEL_APPROVE' => 'אישור',
  'LBL_PMSE_LABEL_CANCEL' => 'בטל',
  'LBL_PMSE_LABEL_CLAIM' => 'תביעה',
  'LBL_PMSE_LABEL_CURRENT' => 'נוכחי',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'פעילות נוכחית',
  'LBL_PMSE_LABEL_DUE_DATE' => 'תאריך סיום',
  'LBL_PMSE_LABEL_EXECUTE' => 'בצע',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'זמן מצופה',
  'LBL_PMSE_LABEL_HISTORY' => 'היסטוריה',
  'LBL_PMSE_LABEL_IN_TIME' => 'בזמן',
  'LBL_PMSE_LABEL_NOTES' => 'הצג פתקים',
  'LBL_PMSE_LABEL_OVERDUE' => 'איחור',
  'LBL_PMSE_LABEL_PROCESS' => 'תהליך',
  'LBL_PMSE_LABEL_REJECT' => 'דחיה',
  'LBL_PMSE_LABEL_ROUTE' => 'ניתוב',
  'LBL_PMSE_LABEL_STATUS' => 'סטטוס',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'לא מוקצה',
  'LBL_PMSE_MY_PROCESSES' => 'התהליכים שלי',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'תהליך בשירות עצמי',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'שגיאה במספר המחזורים',
  'LBL_PMSE_SHOW_PROCESS' => 'הצג תהליך',
  'LBL_PMSE_TITLE_HISTORY' => 'היסטוריית תהליך',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'סטטוס של תהליך מספר %s',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'לוג מחבר תהליך',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'רשימת תהליכים',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'פתקי תהליך',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'תהליך ללא השגחה',
  'LBL_PROCESS_DEFINITION_NAME' => 'שם הגדרת תהליך',
  'LBL_PROCESS_NAME' => 'שם תהליך',
  'LBL_RECORD_NAME' => 'שם רשומה',
  'LBL_STATUS_CANCELLED' => 'תהליך בוטל',
  'LBL_STATUS_COMPLETED' => 'תהליך הושלם',
  'LBL_STATUS_ERROR' => 'שגיאה בתהליך',
  'LBL_STATUS_IN_PROGRESS' => 'תהליך בהתקדמות',
  'LBL_STATUS_TERMINATED' => 'תהליך הופסק',
  'LNK_LIST' => 'צפה בתהליכים',
);

