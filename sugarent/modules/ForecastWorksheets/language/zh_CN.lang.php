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
  'ERR_FORECAST_AMOUNT' => '必须提交数字金额。',
  'LBL_ACCOUNT_NAME' => '账户名称：',
  'LBL_AMOUNT' => '金额',
  'LBL_BASE_RATE' => '基本利率',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => '计算收入线项目金额',
  'LBL_CATEGORY_NAME' => '类别:',
  'LBL_COMMIT_HEADER' => '销售预测提交',
  'LBL_COMMIT_MESSAGE' => '您要提交这些金额吗?',
  'LBL_COMMIT_NOTE' => '为选择的时段提交输入的金额:',
  'LBL_COMMIT_STAGE' => '提交阶段',
  'LBL_COST_PRICE' => '成本价格',
  'LBL_CREATED_BY' => '创建人',
  'LBL_CURRENCY' => '货币:',
  'LBL_CURRENCY_ID' => '货币编号',
  'LBL_CURRENCY_RATE' => '汇率',
  'LBL_DATE_CLOSED' => '预期完成日期：',
  'LBL_DATE_COMMITTED' => '提交日期',
  'LBL_DATE_ENTERED' => '日期已输入',
  'LBL_DATE_MODIFIED' => '日期已更改',
  'LBL_DELETED' => '已删除',
  'LBL_DISCOUNT_PRICE' => '单价:',
  'LBL_DV_FORECAST_OPPORTUNITY' => '预测商业机会',
  'LBL_DV_FORECAST_PERIOD' => '销售预测时段',
  'LBL_DV_FORECAST_ROLLUP' => '销售预测汇总',
  'LBL_DV_HEADER' => '销售预测:工作单',
  'LBL_DV_LAST_COMMIT_AMOUNT' => '上一次提交金额:',
  'LBL_DV_LAST_COMMIT_DATE' => '上次提交日期:',
  'LBL_DV_MY_FORECASTS' => '我的预测',
  'LBL_DV_MY_TEAM' => '我的团队的销售预测',
  'LBL_DV_TIMEPERIOD' => '时间段:',
  'LBL_DV_TIMEPERIODS' => '时间段:',
  'LBL_DV_TIMPERIOD_DATES' => '日期范围:',
  'LBL_EDITABLE_INVALID' => '无效值 {0}',
  'LBL_EDITABLE_INVALID_RANGE' => '值必须在 {0} 和 {1} 之间',
  'LBL_FC_START_DATE' => '开始日期：',
  'LBL_FC_USER' => '安排为',
  'LBL_FDR_ADJ_AMOUNT' => '调整后金额',
  'LBL_FDR_COMMIT' => '已提交金额',
  'LBL_FDR_DATE_COMMIT' => '提交日期',
  'LBL_FDR_OPPORTUNITIES' => '销售预测中的商业机会:',
  'LBL_FDR_USER_NAME' => '直接报告人',
  'LBL_FDR_WEIGH' => '加权商业机会金额:',
  'LBL_FORECAST' => '销售预测',
  'LBL_FORECAST_HISTORY' => '销售预测:历史',
  'LBL_FORECAST_HISTORY_TITLE' => '历史记录',
  'LBL_FORECAST_ID' => '销售预测ID',
  'LBL_FORECAST_OPP_COUNT' => '总的商业机会计数',
  'LBL_FORECAST_OPP_WEIGH' => '加权金额',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => '商业机会通道计数',
  'LBL_FORECAST_TIME_ID' => '时段编号',
  'LBL_FORECAST_TYPE' => '销售预测类型',
  'LBL_FORECAST_USER' => '用户',
  'LBL_FS_CASCADE' => '级联?',
  'LBL_FS_CREATED_BY' => '创建人',
  'LBL_FS_DATE_ENTERED' => '日期已输入',
  'LBL_FS_DATE_MODIFIED' => '日期已更改',
  'LBL_FS_DELETED' => '删除',
  'LBL_FS_END_DATE' => '结束日期',
  'LBL_FS_FORECAST_FOR' => '安排为:',
  'LBL_FS_FORECAST_START_DATE' => '销售预测开始日期',
  'LBL_FS_MODULE_NAME' => '销售预测进度表',
  'LBL_FS_START_DATE' => '开始日期：',
  'LBL_FS_STATUS' => '状态',
  'LBL_FS_TIMEPERIOD' => '时间段:',
  'LBL_FS_TIMEPERIOD_ID' => '时段编号',
  'LBL_FS_USER_ID' => '用户编号',
  'LBL_LEAD_SOURCE' => '潜在客户来源：',
  'LBL_LIST_FORM_TITLE' => '提交销售预测',
  'LBL_LIST_PRICE' => '定价:',
  'LBL_LOADING_COMMIT_HISTORY' => '加载提交历史记录',
  'LBL_LV_COMMIT' => '已提交金额',
  'LBL_LV_COMMIT_DATE' => '提交日期',
  'LBL_LV_OPPORTUNITIES' => '商业机会',
  'LBL_LV_TIMPERIOD' => '时段',
  'LBL_LV_TIMPERIOD_END_DATE' => '结束日期:',
  'LBL_LV_TIMPERIOD_START_DATE' => '开始日期：',
  'LBL_LV_TYPE' => '销售预测类型',
  'LBL_LV_WEIGH' => '加权金额',
  'LBL_MANAGER_NOTIFY' => '{0} {1}在上一次提交记录中，但不包括在最新的一期提交中',
  'LBL_MODIFIED_USER_ID' => '修改人:',
  'LBL_MODULE_NAME' => '销售预测工作单',
  'LBL_MODULE_NAME_SINGULAR' => '销售预测工作单',
  'LBL_MODULE_TITLE' => '销售预测工作单',
  'LBL_NEXT_STEP' => '下一步',
  'LBL_NO_ACTIVE_TIMEPERIOD' => '没有可用的销售预测时段。',
  'LBL_OPPORTUNITY_NAME' => '商业机会名称：',
  'LBL_OW_ACCOUNTNAME' => '帐户',
  'LBL_OW_DESCRIPTION' => '描述',
  'LBL_OW_MODULE_TITLE' => '商业机会工作单',
  'LBL_OW_NEXT_STEP' => '下一步',
  'LBL_OW_OPPORTUNITIES' => '商业机会',
  'LBL_OW_PROBABILITY' => '概率',
  'LBL_OW_REVENUE' => '金额',
  'LBL_OW_TYPE' => '类型:',
  'LBL_OW_WEIGHTED' => '加权金额',
  'LBL_PERCENT' => '百分比',
  'LBL_PRODUCT' => '产品',
  'LBL_PRODUCT_ID' => '产品编号：',
  'LBL_QC_COMMIT_BUTTON' => '提交',
  'LBL_QC_COMMIT_VALUE' => '提交金额:',
  'LBL_QC_DIRECT_FORECAST' => '我的直接销售预测:',
  'LBL_QC_HEADER_DELIM' => '到',
  'LBL_QC_LAST_COMMIT_VALUE' => '上次提交金额:',
  'LBL_QC_LAST_DATE_COMMITTED' => '上次提交日期:',
  'LBL_QC_OPPORTUNITY_COUNT' => '商业机会总数:',
  'LBL_QC_ROLLUP_FORECAST' => '我的组销售预测:',
  'LBL_QC_ROLL_COMMIT_VALUE' => '汇总承诺金额:',
  'LBL_QC_TIME_PERIOD' => '时段:',
  'LBL_QC_UPCOMING_FORECASTS' => '我的销售预测:',
  'LBL_QC_WEIGHT_VALUE' => '加权金额:',
  'LBL_QC_WORKSHEET_BUTTON' => '工作单',
  'LBL_QUANTITY' => '数量',
  'LBL_QUOTA' => '定额',
  'LBL_QUOTA_ID' => '配额编号',
  'LBL_REPORTS_TO_USER_NAME' => '汇报给',
  'LBL_RESET_CHECK' => '所有选择时段中的工作单数据和登录的用户将被移除，继续?',
  'LBL_RESET_WOKSHEET' => '重设工作单',
  'LBL_REVENUELINEITEM_NAME' => '收入线项目名称',
  'LBL_SALES_STAGE' => '销售阶段：',
  'LBL_SALES_STATUS' => '状态',
  'LBL_SAVE_WOKSHEET' => '保存工作单',
  'LBL_SEARCH' => '选择',
  'LBL_SEARCH_LABEL' => '选择',
  'LBL_SHOW_CHART' => '查看图表',
  'LBL_SVFS_CASCADE' => '级联报告?',
  'LBL_SVFS_FORECASTDATE' => '安排开始日期',
  'LBL_SVFS_HEADER' => '销售预测进度表',
  'LBL_SVFS_STATUS' => '状态',
  'LBL_SVFS_USER' => '为',
  'LBL_TIMEPERIOD_NAME' => '时间段:',
  'LBL_TOTAL_DISCOUNT_AMOUNT' => '折扣金额总和',
  'LBL_TYPE' => '类型:',
  'LBL_USER_NAME' => '用户名',
  'LBL_VERSION' => '版本',
  'LBL_WK_REVISION' => '修订版本',
  'LBL_WK_VERSION' => '版本',
  'LB_FS_KEY' => 'ID',
  'LNK_ACCOUNTS' => '客户',
  'LNK_FORECAST_LIST' => '查看销售预测历史记录',
  'LNK_NEW_OPPORTUNITY' => '创建商业机会',
  'LNK_NEW_TIMEPERIOD' => '新增时段',
  'LNK_OPPORTUNITY' => '商业机会',
  'LNK_QUOTA' => '定额',
  'LNK_TIMEPERIOD_LIST' => '查看时间段',
  'LNK_UPD_FORECAST' => '销售预测工作单',
);

