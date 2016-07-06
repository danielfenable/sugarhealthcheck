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

  'LBL_MODULE_NAME' => '流程定義',
  'LBL_MODULE_TITLE' => '流程定義',
  'LBL_MODULE_NAME_SINGULAR' => '流程定義',

  'LNK_LIST' => '檢視流程定義',
  'LNK_NEW_PMSE_PROJECT' => '建立流程定義',
  'LNK_IMPORT_PMSE_PROJECT' => '匯入流程定義',

  'LBL_PRJ_STATUS' => '狀態',
  'LBL_PRJ_MODULE' => '目標模組',
  'LBL_PMSE_BUTTON_SAVE' => '儲存',
  'LBL_PMSE_BUTTON_CANCEL' => '取消',
  'LBL_PMSE_BUTTON_YES' => '是',
  'LBL_PMSE_BUTTON_NO' => '否',
  'LBL_PMSE_BUTTON_OK' => '確定',

    'LBL_PMSE_LABEL_DESIGN' => '設計',
    'LBL_PMSE_LABEL_EXPORT' => '匯出',
    'LBL_PMSE_LABEL_DELETE' => '刪除',
    'LBL_PMSE_LABEL_ENABLE' => '啟用',
    'LBL_PMSE_LABEL_DISABLE' => '停用',

    'LBL_PMSE_SAVE_DESIGN_BUTTON_LABEL' => '儲存與設計',
    'LBL_PMSE_IMPORT_BUTTON_LABEL' => '匯入',

    'LBL_PMSE_MY_PROCESS_DEFINITIONS' => '我的流程定義',
    'LBL_PMSE_ALL_PROCESS_DEFINITIONS' => '所有流程定義',

    'LBL_PMSE_PROCESS_DEFINITIONS_ENABLED' => '已啟用',
    'LBL_PMSE_PROCESS_DEFINITIONS_DISABLED' => '已停用',
    'LBL_PMSE_PROCESS_DEFINITIONS_EDIT' => '有使用中流程與此「流程定義」相違背。更新此流程定義會影響這些流程。仍然要編輯此「流程定義」嗎？',
    'LBL_PMSE_DISABLE_CONFIRMATION_PD' => '有使用中流程與此「流程定義」相違背。更新此流程定義會影響這些流程。仍然要停用此「流程定義」嗎？',

    'LBL_PMSE_PROCESS_DEFINITION_IMPORT_TEXT' => '透過從檔案系統匯入 *.bpm 檔案，自動建立新「流程定義」記錄。',
    'LBL_PMSE_PROCESS_DEFINITION_IMPORT_SUCCESS' => '「流程定義」已成功匯入系統。',
    'LBL_PMSE_PROCESS_DEFINITION_EMPTY_WARNING' => '請選取有效的 *.bpm 檔案。',
    'LBL_PMSE_PROCESS_DEFINITION_IMPORT_BR' => '「流程定義」已匯入，但是包含一個或多個「商務規則」動作，而這些動作未選取商務規則。',


//    /*PMSE*/

//    'LBL_PMSE_LABEL_TERMINATE_CASES' => 'Terminate Process',

//    'LBL_PMSE_LABEL_CUSTOM_FORM_MODULE' => 'Custom Form Module',
//    'LBL_PMSE_LABEL_CUSTOM_FORM_PROCESS' => 'Custom Form Process',
//    'LBL_PMSE_LABEL_CUSTOM_FORM_NAME' => 'Custom Form name',
//    'LBL_PMSE_LABEL_CUSTOM_FORM_DESC' => 'Custom Form description',
//    'LBL_PMSE_LABEL_LOADING' => 'Loading, please wait...',
//    'LBL_PMSE_LABEL_CASETAKEN' => 'This Process was already taken by another User',
//    'LBL_PMSE_LABEL_CASECOMPLETED' => 'The Process is already closed',
//    'LBL_PMSE_LABEL_UNASSIGNED' => 'Unassigned',
//    'LBL_PMSE_LABEL_SEARCHBYDUEDATE' => 'Search By Due Date',
//    'LBL_PMSE_LABEL_SETTINGSEARCHBYDUEDATE' => 'Setting Search by  Due Date',
//    'LBL_PMSE_LABEL_SEARCH' => 'Search',
//    'LBL_PMSE_LABEL_DELETED_RECORD'=>'The records related to this Process has been removed',


    /**TOOLBAR**/
    'LBL_PMSE_ADAM_DESIGNER_LEADS' => '潛在客戶',
    'LBL_PMSE_ADAM_DESIGNER_OPPORTUNITY' => '商機',
    'LBL_PMSE_ADAM_DESIGNER_DOCUMENTS' => '文件',
    'LBL_PMSE_ADAM_DESIGNER_OTHER_MODULES' => '目標模組',
    'LBL_PMSE_ADAM_DESIGNER_WAIT' => '請稍等',
    'LBL_PMSE_ADAM_DESIGNER_RECEIVE_MESSAGE' => '接收訊息',
    'LBL_PMSE_ADAM_DESIGNER_SEND_MESSAGE' => '傳送訊息',
    'LBL_PMSE_ADAM_DESIGNER_USER_TASK' => '活動',
    'LBL_PMSE_ADAM_DESIGNER_EXCLUSIVE' => '獨佔',
    'LBL_PMSE_ADAM_DESIGNER_PARALLEL' => '平行',
    'LBL_PMSE_ADAM_DESIGNER_COMMENT' => '註解',
    'LBL_PMSE_ADAM_DESIGNER_UNDO' => '復原',
    'LBL_PMSE_ADAM_DESIGNER_REDO' => '取消復原',
    'LBL_PMSE_ADAM_DESIGNER_SAVE' => '儲存',

    /**ELEMENTS NAMES**/
    'LBL_PMSE_ADAM_DESIGNER_TASK' => '活動',
    'LBL_PMSE_ADAM_DESIGNER_ACTION' => '動作',
    'LBL_PMSE_ADAM_DESIGNER_LEAD_START_EVENT' => '潛在客戶開始事件',
    'LBL_PMSE_ADAM_DESIGNER_OPPORTUNITY_START_EVENT' => '商機開始事件' ,
    'LBL_PMSE_ADAM_DESIGNER_DOCUMENT_START_EVENT' => '文件開始事件',
    'LBL_PMSE_ADAM_DESIGNER_OTHER_MODULE_EVENT' => '開始事件',
    'LBL_PMSE_ADAM_DESIGNER_WAIT_EVENT' => '等候事件',
    'LBL_PMSE_ADAM_DESIGNER_MESSAGE_EVENT' => '訊息事件',
//    'LBL_PMSE_ADAM_DESIGNER_BOUNDARY_EVENT' => 'Boundary Event',
    'LBL_PMSE_ADAM_DESIGNER_EXCLUSIVE_GATEWAY' => '獨佔閘道',
    'LBL_PMSE_ADAM_DESIGNER_PARALLEL_GATEWAY' => '平行閘道',
    'LBL_PMSE_ADAM_DESIGNER_END_EVENT' => '結束事件',
    'LBL_PMSE_ADAM_DESIGNER_TEXT_ANNOTATION' => '文字註解',


    /**GENERAL**/
    'LBL_PMSE_MESSAGE_CANCEL_CONFIRM' => ' 部分設定已變更。要捨棄變更嗎？',
    'LBL_PMSE_MESSAGE_REMOVE_ALL_START_CRITERIA' => '模組正在變更，因此準則也會移除，因為它所包含的欄位與新模組沒有關聯。',
    'LBL_PMSE_MESSAGE_INVALID_CONNECTION' => '無效連接',

    'LBL_PMSE_CONTEXT_MENU_SETTINGS' => '設定...',
    'LBL_PMSE_CONTEXT_MENU_DELETE' => '刪除',

    'LBL_PMSE_FORM_LABEL_MODULE' => '模組',
    'LBL_PMSE_FORM_LABEL_CRITERIA' => '準則',
    'LBL_PMSE_FORM_LABEL_DURATION' => '持續時間',
    'LBL_PMSE_FORM_LABEL_UNIT' => '單位',

    'LBL_PMSE_FORM_OPTION_SELECT' => '選取...',
    'LBL_PMSE_FORM_OPTION_TARGET_MODULE' => '目標模組',
    'LBL_PMSE_FORM_OPTION_DAYS' => '天',
    'LBL_PMSE_FORM_OPTION_HOURS' => '小時',
    'LBL_PMSE_FORM_OPTION_MINUTES' => '分鐘',
    'LBL_PMSE_MESSAGE_CANNOTDROPOUTSIDECANVAS' => '無法在畫布外放置元素',
    'LBL_PMSE_FORM_TOOLTIP_DURATION' => '定義計時器事件的持續時間',

    /**PROCESSDEFINTION**/
    // CONTEXT MENU
    'LBL_PMSE_CONTEXT_MENU_PROCESS_DEFINITION' => '流程定義',
    'LBL_PMSE_CONTEXT_MENU_SAVE' => '儲存',
    'LBL_PMSE_CONTEXT_MENU_REFRESH' => '重新整理',
    'LBL_PMSE_CONTEXT_MENU_ZOOM' => '縮放',
    'LBL_PMSE_CONTEXT_MENU_50' => '50%',
    'LBL_PMSE_CONTEXT_MENU_75' => '75%',
    'LBL_PMSE_CONTEXT_MENU_100' => '100%',
    'LBL_PMSE_CONTEXT_MENU_125' => '125%',
    'LBL_PMSE_CONTEXT_MENU_150' => '150%',
    // FORMS
    'LBL_PMSE_LABEL_PROCESS_NAME' => '流程名稱',
    'LBL_PMSE_LABEL_DESCRIPTION' => '描述',
    'LBL_PMSE_LABEL_TERMINATE_PROCESS' => '終止流程',
    'LBL_PMSE_LABEL_LOCKED_FIELDS' => '鎖定的欄位',

    /**TASKS**/
    // CONTEXT MENU
    'LBL_PMSE_CONTEXT_MENU_FORMS' => '表單...',
    'LBL_PMSE_CONTEXT_MENU_USERS' => '使用者...',
    'LBL_PMSE_CONTEXT_MENU_ACTION_TYPE' => '動作類型',
    'LBL_PMSE_CONTEXT_MENU_UNASSIGNED' => '[Unassigned]',
    'LBL_PMSE_CONTEXT_MENU_BUSINESS_RULE' => '商務規則',
    'LBL_PMSE_CONTEXT_MENU_ASSIGN_USER' => '指派使用者',
    'LBL_PMSE_CONTEXT_MENU_ASSIGN_TEAM' => '循環配置資源',
    'LBL_PMSE_CONTEXT_MENU_CHANGE_FIELD' => '變更欄位',
    'LBL_PMSE_CONTEXT_MENU_ADD_RELATED_RECORD' => '新增關聯記錄',
    // CONFIRMATIONS
    'LBL_PMSE_CHANGE_ACTION_TYPE_CONFIRMATION' => '若變更此動作類型，此動作所有之前的設定會遺失。要繼續嗎？',
    // FORMS
    'LBL_PMSE_FORM_TITLE_ACTIVITY' => '活動',
    'LBL_PMSE_FORM_LABEL_READ_ONLY_FIELDS' => '唯讀欄位',
    'LBL_PMSE_FORM_LABEL_REQUIRED_FIELDS' => '必填欄位',
    'LBL_PMSE_FORM_LABEL_GENERAL_SETTINGS' => '一般',
    'LBL_PMSE_FORM_LABEL_EXPECTED_TIME' => '預計時間',
    'LBL_PMSE_FORM_LABEL_FORM_TYPE' => '表單類型',
    'LBL_PMSE_FORM_LABEL_RESPONSE_BUTTONS' => '表單按鈕',
    'LBL_PMSE_FORM_OPTION_APPROVE_REJECT' => '核准/拒絕',
    'LBL_PMSE_FORM_OPTION_ROUTE' => '路由',
    'LBL_PMSE_FORM_LABEL_OTHER_DERIVATION_OPTIONS' => '其他路由選項',
    'LBL_PMSE_FORM_LABEL_RECORD_OWNERSHIP' => '變更指派至使用者',
    'LBL_PMSE_FORM_LABEL_TEAM' => '小組',
    'LBL_PMSE_FORM_LABEL_REASSIGN' => '選取新流程使用者',

    'LBL_PMSE_FORM_TITLE_USER_DEFINITION' => '使用者定義',
    'LBL_PMSE_FORM_LABEL_ASSIGNMENT_METHOD' => '指派方法',
    'LBL_PMSE_FORM_OPTION_ROUND_ROBIN' => '循環配置資源',
    'LBL_PMSE_FORM_OPTION_SELF_SERVICE' => '自助',
    'LBL_PMSE_FORM_OPTION_STATIC_ASSIGNMENT' => '靜態指派',
    'LBL_PMSE_FORM_LABEL_ASSIGN_TO_TEAM' => '指派至小組',
    'LBL_PMSE_FORM_LABEL_ASSIGN_TO_USER' => '指派至使用者',
    'LBL_PA_FORM_COMBO_ASSIGN_TO_USER_HELP_TEXT' => '選取...',
    'LBL_PA_FORM_COMBO_NO_MATCHES_FOUND' => '未找到匹配項',
    'LBL_PA_FORM_LABEL_ASSIGN_TO_TEAM' => '從小組中選取流程使用者',
    'LBL_PA_FORM_LABEL_ASSIGN_TO_USER' => '選取流程使用者',
    'LBL_PMSE_FORM_OPTION_CURRENT_USER' => '目前使用者',
    'LBL_PMSE_FORM_OPTION_RECORD_OWNER' => '記錄擁有者',
    'LBL_PMSE_FORM_OPTION_SUPERVISOR' => '主管',
    //'LBL_PMSE_FORM_OPTION_CURRENT_RECORD' => 'Current record',

    'LBL_PMSE_FORM_TITLE_BUSINESS_RULE' => '商務規則',
    'LBL_PMSE_LABEL_RULE' => '規則',

    'LBL_PMSE_FORM_TITLE_ASSIGN_USER' => '指派使用者',
    'LBL_PA_FORM_LABEL_UPDATE_RECORD_OWNER' => '更新記錄上的「指派至」',

    'LBL_PMSE_FORM_TITLE_ADD_RELATED_RECORD' => '新增關聯記錄',
    'LBL_PMSE_FORM_LABEL_RELATED_MODULE' => '相關模組',
    'LBL_PMSE_FORM_LABEL_FIELDS' => '欄位',

    'LBL_PMSE_FORM_TITLE_CHANGE_FIELDS' => '變更欄位',

    'LBL_PMSE_FORM_TITLE_ASSIGN_TEAM' => '循環配置資源',

    'LBL_PMSE_MESSAGE_ACTIVITY_NAME_EMPTY' => '活動名稱為空。',
    'LBL_PMSE_MESSAGE_ACTIVITY_NAME_ALREADY_EXISTS' => '圖形家族已存在名稱 "%s"。',

    /**EVENTS**/
    // CONTEXT MENU
    'LBL_PMSE_CONTEXT_MENU_ACTION' => '動作',
    'LBL_PMSE_CONTEXT_MENU_RECEIVE_MESSAGE' => '接收訊息',
    'LBL_PMSE_CONTEXT_MENU_SEND_MESSAGE' => '傳送訊息',
    'LBL_PMSE_CONTEXT_MENU_TIMER' => '計時器',
    'LBL_PMSE_CONTEXT_MENU_RESULT' => '結果',
    'LBL_PMSE_CONTEXT_MENU_DO_NOTHING' => '不操作',
    'LBL_PMSE_CONTEXT_MENU_TERMINATE_PROCESS' => '終止流程',
    'LBL_PMSE_CONTEXT_MENU_LISTEN' => '接聽',

    // FORMS
    'LBL_PMSE_FORM_TITLE_LABEL_EVENT' => '事件',
    'LBL_PMSE_FORM_LABEL_APPLIES_TO' => '適用於',
    'LBL_PMSE_FORM_OPTION_NEW_RECORDS_ONLY' => '僅限新記錄',
    'LBL_PMSE_FORM_OPTION_UPDATED_RECORDS_ONLY' => '僅限更新記錄（第一次更新—參見說明文字）',
    'LBL_PMSE_FORM_OPTION_UPDATED_RECORDS_ONLY_AU' => '僅限更新記錄（所有更新—參見說明文字）',

    'LBL_PMSE_FORM_TOOLTIP_WHEN_START_EVENT' => '選取流程的開始時間。<br><br>新增：建立新記錄時執行流程。<br><br>第一次更新：只有在第一次滿足現有記錄的準則時才執行流程。<br><br>所有更新：只要滿足現有記錄的準則，就執行一次流程。',
    'LBL_PMSE_FORM_TOOLTIP_EVENT_MODULE' => '選擇要套用事件觸發程序的 SugarCRM 模組',

    'LBL_PMSE_FORM_LABEL_FIXED_DATE' => '修復日期',

    'LBL_PMSE_FORM_LABEL_EMAIL_TEMPLATE' => '電子郵件範本',

    'LBL_PMSE_FORM_LABEL_EMAIL_TO' => '至',
    'LBL_PMSE_FORM_LABEL_EMAIL_CC' => '副本',
    'LBL_PMSE_FORM_LABEL_EMAIL_BCC' => '密件副本',

    //ROLES IN EXPRESSION BUILDER
    'LBL_PMSE_FORM_OPTION_ADMINISTRATOR' => '管理員',

    /**GATEWAYS**/
    // CONTEXT MENU
    'LBL_PMSE_CONTEXT_MENU_DIRECTION' => '方向...',
    'LBL_PMSE_CONTEXT_MENU_CONVERGING' => '正在集中',
    'LBL_PMSE_CONTEXT_MENU_DIVERGING' => '正在發散',
    'LBL_PMSE_CONTEXT_MENU_CONVERT' => '轉換...',
    'LBL_PMSE_CONTEXT_MENU_EXCLUSIVE_GATEWAY' => '獨佔閘道',
    'LBL_PMSE_CONTEXT_MENU_PARELLEL_GATEWAY' => '平行閘道',
    'LBL_PMSE_CONTEXT_MENU_INCLUSIVE_GATEWAY' => '內含的閘道',
    'LBL_PMSE_CONTEXT_MENU_EVENT_BASED_GATEWAY' => '事件型閘道',
    'LBL_PMSE_CONTEXT_MENU_DEFAULT_FLOW' => '預設流程',
    'LBL_PMSE_CONTEXT_MENU_NONE' => '無',

    // FORMS
    'LBL_PMSE_FORM_TITLE_GATEWAY' => '閘道',

    'LBL_PMSE_CONTEXT_MENU_DEFAULT_TASK' => '（活動）',
    'LBL_PMSE_CONTEXT_MENU_DEFAULT_EVENT' => '（事件）',
    'LBL_PMSE_CONTEXT_MENU_DEFAULT_GATEWAY' => '（閘道）',

    'LBL_PMSE_BPMN_WARNING_PANEL_TITLE' => '元素錯誤',
    'LBL_PMSE_BPMN_WARNING_LABEL' => ' 錯誤',
    'LBL_PMSE_BPMN_WARNING_SINGULAR_LABEL' => ' 錯誤',

    /**CRITERIA BUILDER**/
    'LBL_PMSE_EXPCONTROL_VARIABLES_PANEL_TITLE' => '欄位',
    'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_TITLE' => '模組欄位評估',
    'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_MODULE' => '模組',
    'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_VARIABLE' => '欄位',
    'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_VALUE' => '值',
    'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_TITLE' => '表單回應評估',
    'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_FORM' => '表單',
    'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_STATUS' => '狀態',
    'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_TITLE' => '商務規則評估',
    'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_BR' => '商務規則',
    'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_RESPONSE' => '回應',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TITLE' => '使用者評估',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_USER' => '使用者',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_CURRENT' => '目前使用者',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_SUPERVISOR' => '主管',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_OWNER' => '記錄擁有者',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_OPERATOR' => '運算子',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ADMIN' => '是管理員',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ADMIN_FULL' => '%TARGET% 是管理員',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ROLE' => '的角色為',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ROLE_FULL' => '%TARGET% 的角色為 %VALUE%',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_USER' => '是使用者',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_USER_FULL' => '%TARGET% 是使用者 %VALUE%',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ADMIN' => '不是管理員',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ADMIN_FULL' => '%TARGET% 不是管理員',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ROLE' => '不擔任角色',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ROLE_FULL' => '%TARGET% 不擔任角色 %VALUE%',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_USER' => '不是使用者',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_USER_FULL' => '%TARGET% 不是使用者 %VALUE%',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_VALUE' => '值',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_FIXED_DATE' => '修復日期',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_FIXED_DATETIME' => '修復日期時間',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_TITLE' => '時間範圍',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_AMOUNT' => '值',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_UNIT' => '單位',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_YEARS' => '年',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_MONTHS' => '月',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_WEEKS' => '週',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_DAYS' => '天',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_HOURS' => '小時',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_MINUTES' => '分鐘',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC' => '字串、數字和布林值',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_VALUE' => '值',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_STRING' => '新增字串',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_NUMBER' => '新增數字',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_BOOLEAN' => '新增布林值',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_CURRENCY' => '貨幣',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_CURRENCY_CURRENCY' => '貨幣',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_CURRENCY_AMOUNT' => '金額',
    'LBL_PMSE_EXPCONTROL_EVALUATIONS_TITLE' => '評估',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TITLE' => '常數',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_THAN' => '小於',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_THAN_DATE' => '之前',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_EQUAL_THAN' => '小於等於',
    'LBL_PMSE_EXPCONTROL_OPERATOR_EQUAL' => '等於',
    'LBL_PMSE_EXPCONTROL_OPERATOR_EQUAL_TEXT' => '是',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_EQUAL' => '大於等於',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR' => '大於',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_DATE' => '之後',

    'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_EQUAL_DATE' => '此時或之後',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_EQUAL_DATE' => '此時或之前',
    'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL' => '不等於',
    'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL_TEXT' => '不是',
    'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL_DATE' => '不等於',

    'LBL_PMSE_FORMPANEL_SUBMIT' => '提交',

    'LBL_PMSE_EMAILPICKER_TEAMS' => '小組',
    'LBL_PMSE_EMAILPICKER_USER_CREATED' => '建立記錄的 %MODULE% 中的使用者',
    'LBL_PMSE_EMAILPICKER_USER_LAST_MODIFIED' => '上次修改記錄的 %MODULE% 中的使用者',
    'LBL_PMSE_EMAILPICKER_USER_IS_ASSIGNED' => '指派至記錄的 %MODULE% 中的使用者',
    'LBL_PMSE_EMAILPICKER_USER_WAS_ASSIGNED' => '已指派至記錄的 %MODULE% 中的使用者',
    'LBL_PMSE_EMAILPICKER_MANAGER_CREATED' => '%MODULE% 中的使用者，為建立記錄人員之經理',
    'LBL_PMSE_EMAILPICKER_MANAGER_LAST_MODIFIED' => '%MODULE% 中的使用者，為上次修改記錄人員之經理',
    'LBL_PMSE_EMAILPICKER_MANAGER_IS_ASSIGNED' => '%MODULE% 中的使用者，為指派至記錄人員之經理',
    'LBL_PMSE_EMAILPICKER_MANAGER_WAS_ASSIGNED' => '%MODULE% 中的使用者，為指派至記錄人員之經理',
    'LBL_PMSE_EMAILPICKER_ROLE_ITEM' => '角色：%ROLE%',
    'LBL_PMSE_EMAILPICKER_TEAM_ITEM' => '小組：%TEAM%',
    'LBL_PMSE_EMAILPICKER_SUGGESTIONS' => '建議',
    'LBL_PMSE_EMAILPICKER_RESULTS_TITLE' => '"%TEXT%" 的 %NUMBER% 建議',
    'LBL_PMSE_EMAILPICKER_USER_RECORD_CREATOR' => '建立記錄',
    'LBL_PMSE_EMAILPICKER_USER_LAST_MODIFIER' => '上次修改記錄',
    'LBL_PMSE_EMAILPICKER_USER_IS_ASIGNEE' => '指派至記錄',

    'LBL_PMSE_UPDATERFIELD_VARIABLES_LIST_TITLE' => '%MODULE% 欄位',
    'LBL_PMSE_UPDATERFIELD_ADD_TEAM' => '添加團隊...',

    //ERRORS ELEMENTS MESSAGE
    'LBL_PMSE_MESSAGE_ERROR_START_EVENT_OUTGOING' => '「開始事件」必須具有向外序列流程',
    'LBL_PMSE_MESSAGE_ERROR_END_EVENT_INCOMING' => '「結束事件」必須具有進入序列流程',
    'LBL_PMSE_MESSAGE_ERROR_INTERMEDIATE_EVENT_INCOMING' => '「中期事件」必須具有進入或更多序列流程',
    'LBL_PMSE_MESSAGE_ERROR_INTERMEDIATE_EVENT_OUTGOING' => '「中期事件」必須具有一個向外序列流程',
    'LBL_PMSE_MESSAGE_ERROR_BOUNDARY_EVENT_OUTGOING' => '「邊界事件」必須具有一個向外序列流程',
    'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_INCOMING' => '「活動」必須具有進入序列流程',
    'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_OUTGOING' => '「活動」必須具有向外序列流程',
    'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_SCRIPT_TASK' => '指令碼工作必須具有不同於 [Unassigned] 的有效類型',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_DIVERGING_INCOMING' => '閘道可具有一個或多個進入序列流程',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_DIVERGING_OUTGOING' => '閘道必須具有兩個或更多向外序列流程',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_CONVERGING_INCOMING' => '閘道必須具有兩個或更多進入序列流程',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_CONVERGING_OUTGOING' => '閘道不得具有向外序列流程',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_MIXED_INCOMING' => '閘道必須具有兩個或更多進入序列流程',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_MIXED_OUTGOING' => '閘道必須具有兩個或更多向外序列流程',
    'LBL_PMSE_MESSAGE_ERROR_ANNOTATION' => '「文字註解」必須具有關聯線',

    'LBL_PMSE_IMPORT_PROCESS_DEFINITION_FAILURE' => '從檔案建立「流程定義」失敗',
    'LBL_PMSE_CANNOT_CONFIGURE_ADD_RELATED_RECORD' => '此目標模組沒有關聯模組可用',
    'LBL_PMSE_PROJECT_NAME_EMPTY' => '「流程定義名稱」不得為空，因為它是必填欄位。',

    'LBL_PMSE_INVALID_EXPRESSION_SYNTAX' => '無效運算式語法。',
    'LBL_PMSE_MESSAGE_ERROR_CURRENCIES_MIX' => 'Can&#39;t use two different currencies in the same expression.',
);