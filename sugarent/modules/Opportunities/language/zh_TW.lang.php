<?php

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

$mod_strings = array(
    'LBL_MODULE_NAME' => '商機',
    'LBL_MODULE_NAME_SINGULAR' => '商機',
    'LBL_MODULE_TITLE' => '商機：首頁',
    'LBL_SEARCH_FORM_TITLE' => '商機搜尋',
    'LBL_VIEW_FORM_TITLE' => '商機檢視',
    'LBL_LIST_FORM_TITLE' => '商機清單',
    'LBL_OPPORTUNITY_NAME' => '商機名稱：',
    'LBL_OPPORTUNITY' => '商機：',
    'LBL_NAME' => '商機名稱',
    'LBL_INVITEE' => '連絡人',
    'LBL_CURRENCIES' => '貨幣：',
    'LBL_LIST_OPPORTUNITY_NAME' => '名稱',
    'LBL_LIST_ACCOUNT_NAME' => '帳戶名稱',
    'LBL_LIST_DATE_CLOSED' => '預計結束日期',
    'LBL_LIST_AMOUNT' => '可能',
    'LBL_LIST_AMOUNT_USDOLLAR' => '已轉換金額',
    'LBL_ACCOUNT_ID' => '帳戶 ID',
    'LBL_CURRENCY_RATE' => '貨幣匯率',
    'LBL_CURRENCY_ID' => '貨幣 ID',
    'LBL_CURRENCY_NAME' => '貨幣名稱',
    'LBL_CURRENCY_SYMBOL' => '貨幣符號',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => '商機－貨幣更新',
    'UPDATE_DOLLARAMOUNTS' => '更新美元金額',
    'UPDATE_VERIFY' => '驗證金額',
    'UPDATE_VERIFY_TXT' => '驗證「商機」中的金額數值是否為有效的十進位數字，僅包含數字字元 (0-9) 以及小數點 (.)',
    'UPDATE_FIX' => '修正金額',
    'UPDATE_FIX_TXT' => '透過在目前金額中建立有效小數點嘗試修正無效金額。所有修改后的金額在 amount_backup 資料庫欄位中備份。如果執行此資料庫並發現錯誤，則切勿在未透過備份還原的情況下重新執行此資料庫，因為新的無效資料可能會覆寫備份。',
    'UPDATE_DOLLARAMOUNTS_TXT' => '依據目前設定的「貨幣」匯率更新「商機」的美元金額。此數值用於計算「圖表和清單檢視貨幣金額」。',
    'UPDATE_CREATE_CURRENCY' => '正在建立新貨幣：',
    'UPDATE_VERIFY_FAIL' => '記錄失敗驗證：',
    'UPDATE_VERIFY_CURAMOUNT' => '目前金額：',
    'UPDATE_VERIFY_FIX' => '「執行修正」將',
    'UPDATE_INCLUDE_CLOSE' => '包括「結束的記錄」',
    'UPDATE_VERIFY_NEWAMOUNT' => '新金額：',
    'UPDATE_VERIFY_NEWCURRENCY' => '新貨幣：',
    'UPDATE_DONE' => '已完成',
    'UPDATE_BUG_COUNT' => '已找到並嘗試解決的錯誤：',
    'UPDATE_BUGFOUND_COUNT' => '已找到的錯誤：',
    'UPDATE_COUNT' => '已更新的記錄：',
    'UPDATE_RESTORE_COUNT' => '已還原的記錄金額：',
    'UPDATE_RESTORE' => '還原金額',
    'UPDATE_RESTORE_TXT' => '透過在修正過程中建立的備份還原金額數值。',
    'UPDATE_FAIL' => '無法更新－',
    'UPDATE_NULL_VALUE' => '金額為空，將其設為 0－',
    'UPDATE_MERGE' => '合併貨幣',
    'UPDATE_MERGE_TXT' => '將多個「貨幣」合併為單個「貨幣」。如果同一「貨幣」存在多個「貨幣」記錄，則可同時合併這些記錄。此動作還會合併所有其他模組的「貨幣」。',
    'LBL_ACCOUNT_NAME' => '帳戶名稱：',
    'LBL_CURRENCY' => '貨幣：',
    'LBL_DATE_CLOSED' => '預計結束日期：',
    'LBL_DATE_CLOSED_TIMESTAMP' => '預計結束日期時間戳記',
    'LBL_TYPE' => '類型：',
    'LBL_CAMPAIGN' => '推廣活動：',
    'LBL_NEXT_STEP' => '下一步：',
    'LBL_LEAD_SOURCE' => '潛在客戶來源',
    'LBL_SALES_STAGE' => '銷售階段',
    'LBL_SALES_STATUS' => '狀態',
    'LBL_PROBABILITY' => '可能性 (%)',
    'LBL_DESCRIPTION' => '描述',
    'LBL_DUPLICATE' => '可能重複的商機',
    'MSG_DUPLICATE' => '您將建立的「商機」記錄可能是已存在「商機」記錄的重複。以下列出了包含類似名稱的「商機」記錄。<br>按一下「儲存」繼續建立此新「商機」，或者按一下「取消」返回模組，而不建立「商機」。',
    'LBL_NEW_FORM_TITLE' => '建立商機',
    'LNK_NEW_OPPORTUNITY' => '建立商機',
    'LNK_CREATE' => '建立交易',
    'LNK_OPPORTUNITY_LIST' => '檢視商機',
    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除「商機」。',
    'LBL_TOP_OPPORTUNITIES' => '我的主要開放商機',
    'NTC_REMOVE_OPP_CONFIRMATION' => '確定要從「商機」中移除此「連絡人」嗎？',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => '確定要從專案中移除此「商機」嗎？',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '商機',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_HISTORY_SUBPANEL_TITLE' => '歷史',
    'LBL_RAW_AMOUNT' => '原始金額',
    'LBL_LEADS_SUBPANEL_TITLE' => '潛在客戶',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡人',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文件',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '專案',
    'LBL_ASSIGNED_TO_NAME' => '指派至：',
    'LBL_LIST_ASSIGNED_TO_NAME' => '指派的使用者',
    'LBL_LIST_SALES_STAGE' => '銷售階段',
    'LBL_MY_CLOSED_OPPORTUNITIES' => '我的已結束商機',
    'LBL_TOTAL_OPPORTUNITIES' => '總商機',
    'LBL_CLOSED_WON_OPPORTUNITIES' => '結束並贏得客戶的商機',
    'LBL_ASSIGNED_TO_ID' => '指派的使用者：',
    'LBL_CREATED_ID' => '按 ID 建立',
    'LBL_MODIFIED_ID' => '按 ID 修改',
    'LBL_MODIFIED_NAME' => '按使用者名稱修改',
    'LBL_CREATED_USER' => '已建立使用者',
    'LBL_MODIFIED_USER' => '已修改使用者',
    'LBL_CAMPAIGN_OPPORTUNITY' => '推廣活動商機',
    'LBL_PROJECT_SUBPANEL_TITLE' => '專案',
    'LABEL_PANEL_ASSIGNMENT' => '指派',
    'LNK_IMPORT_OPPORTUNITIES' => '匯入商機',
    'LBL_EDITLAYOUT' => '編輯配置' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => '推廣活動 ID',
    'LBL_OPPORTUNITY_TYPE' => '商機類型',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => '指派的使用者名稱',
    'LBL_EXPORT_ASSIGNED_USER_ID' => '指派的使用者 ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => '按 ID 修改',
    'LBL_EXPORT_CREATED_BY' => '按 ID 建立',
    'LBL_EXPORT_NAME' => '名稱',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => '關聯連絡人電子郵件',
    'LBL_FILENAME' => '附件',
    'LBL_PRIMARY_QUOTE_ID' => '主報價',
    'LBL_CONTRACTS' => '合約',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => '合約',
    'LBL_PRODUCTS' => '報價項目',
    'LBL_RLI' => '營收項目',
    'LNK_OPPORTUNITY_REPORTS' => '檢視商機報表',
    'LBL_QUOTES_SUBPANEL_TITLE' => '報價',
    'LBL_TEAM_ID' => '小組 ID',
    'LBL_TIMEPERIODS' => '時間週期',
    'LBL_TIMEPERIOD_ID' => '時間週期 ID',
    'LBL_COMMITTED' => '已提交',
    'LBL_FORECAST' => '包括於預測中',
    'LBL_COMMIT_STAGE' => '提交階段',
    'LBL_COMMIT_STAGE_FORECAST' => '預測',
    'LBL_WORKSHEET' => '工作表',


    'LBL_QUOTE_SUBPANEL_TITLE' => '報價',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => '商機階層',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => '將結果「商機」記錄的「預計結束日期」欄位設為現有「營收項目」的最早或最晚結束日期',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => '案源總數為',

    'LBL_OPPORTUNITY_ROLE'=>'商機角色',
    'LBL_NOTES_SUBPANEL_TITLE' => '附註',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => '按一下「確認」，將會清除「所有預測」資料並變更「商機檢視」。如果您不無需執行此動作，則按一下取消返回之前的設定。',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => '如果所有「營收項目」已結束而且已贏得至少一個，',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => '則「商機銷售階段」設為「結束並贏得客戶」。',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => '如果所有「營收項目」處於「結束但客戶流失」銷售階段，',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => '則「商機銷售階段」設為「結束但客戶流失」。',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => '如果有「營收項目」仍然開放，',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => '則「商機」會標記為最低級的「銷售階段」。',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => '透過 {{plural_module_name}} 模組，您可從頭至尾追蹤單個銷售及其所屬項目。各 {{module_name}} 記錄代表一組 {{revenuelineitems_module}} 的標題，以及關聯至其他重要記錄，比如 {{quotes_module}}、{{contacts_module}} 等。各 {{revenuelineitems_singular_module}} 是特定產品的潛在銷售，包含相關銷售資料。各 {{revenuelineitems_singular_module}} 一般會經歷數個「銷售階段」，直到它標記為「結束並贏得客戶」或「結束但客戶流失」。{{module_name}} 記錄反映其 {{revenuelineitems_module}} 的金額及預計結束日期。透過使用 Sugar 的 {{forecasts_singular_module}} 模組來了解和預測銷售趨勢以及實現銷售配額的工作重心，可對 {{plural_module_name}} 和 {{revenuelineitems_module}} 進一步加以利用。',

    // Record View Help Text
    'LBL_HELP_RECORD' => '透過 {{plural_module_name}} 模組，您可從頭至尾追蹤單個銷售及其所屬項目。各 {{module_name}} 記錄代表一組 {{revenuelineitems_module}} 的標題，以及關聯至其他重要記錄，比如 {{quotes_module}}、{{contacts_module}} 等。

- 透過按一下單個欄位或「編輯」按鈕，編輯此記錄的欄位。
- 透過切換左下角窗格至「資料檢視」，檢視或修改子面板其他記錄的連結（包括 {{revenuelineitems_module}}）。
- 透過切換左下角窗格至「活動流」，在 {{activitystream_singular_module}} 中執行和檢視使用者註解和記錄變更歷史。
- 使用記錄名稱右側的圖示追蹤此記錄或將此記錄新增至我的最愛。
- 「編輯」按鈕右側的下拉式「動作」功能表提供其他動作選項。',

    // Create View Help Text
    'LBL_HELP_CREATE' => '透過 {{plural_module_name}} 模組，您可從頭至尾追蹤單個銷售及其所屬項目。各 {{module_name}} 記錄代表一組 {{revenuelineitems_module}} 的標題，以及關聯至其他重要記錄，比如 {{quotes_module}}、{{contacts_module}} 等。

建立 {{module_name}}：
1. 按需提供欄位值。
 - 標記為「必填」的欄位在儲存前必須先填寫完整。
 - 按一下「顯示更多」以顯示更多欄位（若需）。
2. 按一下「儲存」以完成新記錄並返回至上一頁。
3. 儲存后，使用 {{revenuelineitems_module}} 子面板新增項目至 {{module_name}}。',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => '同步至 Marketo&reg;',
    'LBL_MKTO_ID' => 'Marketo 潛在客戶 ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => '前 10 個銷售商機',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => '在泡泡圖中顯示前十個商機。',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => '我的商機',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "我的小組的商機",
);
