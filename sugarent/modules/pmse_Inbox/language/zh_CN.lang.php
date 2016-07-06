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
  'LBL_ACTIVITY_OWNER' => '流程用户',
  'LBL_ASSIGNED_USER' => '获指派的用户',
  'LBL_CAS_ID' => '流程ID',
  'LBL_MODULE_NAME' => '流程',
  'LBL_MODULE_NAME_SINGULAR' => '流程',
  'LBL_MODULE_TITLE' => '流程',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '<strong>%s</strong>之&0获批准',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '<strong>%s</strong> 之 &0 已索取',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '<strong>%s</strong> 之 &0指派给用户 &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '<strong>%s</strong> 之 &0 被拒绝',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '<strong>%s</strong> 之 &0 已流转',
  'LBL_PMSE_BUTTON_CANCEL' => '取消',
  'LBL_PMSE_BUTTON_CLEAR' => '清除',
  'LBL_PMSE_BUTTON_CLOSE' => '关闭',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => '流程编辑器日志',
  'LBL_PMSE_BUTTON_REFRESH' => '刷新',
  'LBL_PMSE_BUTTON_SAVE' => '保存',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'SugarCRM日志',
  'LBL_PMSE_CANCEL_MESSAGE' => '您是否确定要取消流程ID #{} ？',
  'LBL_PMSE_FILTER' => '筛选器',
  'LBL_PMSE_FORM_LABEL_NOTE' => '注释',
  'LBL_PMSE_FORM_LABEL_TYPE' => '类型',
  'LBL_PMSE_FORM_LABEL_USER' => '用户',
  'LBL_PMSE_FORM_OPTION_SELECT' => '选择...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => '经执行的动作是：<span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => '该任务仍然指派了。',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => '命名为：&#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => '已创建',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => '已创建流程 # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => '目前使用TaskId %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => '完成未知名任务',
  'LBL_PMSE_HISTORY_LOG_EDITED' => '已编辑',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => '属于模块 %s %s ，',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => '未知名(按UserId:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => '未注册的行动',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '(尚未开始)',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => '已流转',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => '任务',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => '任务',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => '与事件 %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => '并具备网关%s已经评估后流转到下一任务',
  'LBL_PMSE_LABEL_ADD_NOTES' => '新增注释',
  'LBL_PMSE_LABEL_APPROVE' => '批准',
  'LBL_PMSE_LABEL_CANCEL' => '取消',
  'LBL_PMSE_LABEL_CLAIM' => '索取',
  'LBL_PMSE_LABEL_CURRENT' => '当前',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => '当前活动',
  'LBL_PMSE_LABEL_DUE_DATE' => '截止日期',
  'LBL_PMSE_LABEL_EXECUTE' => '执行',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => '预计时间',
  'LBL_PMSE_LABEL_HISTORY' => '历史',
  'LBL_PMSE_LABEL_IN_TIME' => '准时',
  'LBL_PMSE_LABEL_NOTES' => '显示注释',
  'LBL_PMSE_LABEL_OVERDUE' => '过期',
  'LBL_PMSE_LABEL_PROCESS' => '流程',
  'LBL_PMSE_LABEL_REJECT' => '拒绝',
  'LBL_PMSE_LABEL_ROUTE' => '流转',
  'LBL_PMSE_LABEL_STATUS' => '状态',
  'LBL_PMSE_LABEL_UNASSIGNED' => '未指派',
  'LBL_PMSE_MY_PROCESSES' => '我的流程',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => '自助流程',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => '错误周期数',
  'LBL_PMSE_SHOW_PROCESS' => '显示流程',
  'LBL_PMSE_TITLE_HISTORY' => '流程历史',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => '流程 #%s：当前状态',
  'LBL_PMSE_TITLE_LOG_VIEWER' => '流程撰写器日志查看器',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => '流程管理',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => '流程注释',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => '无人看管的流程',
  'LBL_PMSE_WARNING_CLEAR' => '您是否确定要清除日志数据？此动作无法撤消。',
  'LBL_PROCESS_DEFINITION_NAME' => '流程定义名称',
  'LBL_PROCESS_NAME' => '流程名称',
  'LBL_PROCESS_OWNER' => '流程拥有者',
  'LBL_RECORD_NAME' => '记录名称',
  'LBL_STATUS_CANCELLED' => '已取消的流程',
  'LBL_STATUS_COMPLETED' => '已完成的流程',
  'LBL_STATUS_ERROR' => '流程出错',
  'LBL_STATUS_IN_PROGRESS' => '进行中的流程',
  'LBL_STATUS_TERMINATED' => '已终止的流程',
  'LNK_LIST' => '查看流程',
);

