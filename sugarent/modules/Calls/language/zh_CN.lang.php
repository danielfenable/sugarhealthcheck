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
  'ERR_DELETE_RECORD' => '必须指定一个记录编号才能删除客户。',
  'LBL_ACCEPT_LINK' => '接受链接',
  'LBL_ACCEPT_STATUS' => '接受状态',
  'LBL_ACCOUNT_NAME' => '客户',
  'LBL_ACTIVITIES_REPORTS' => '活动报表',
  'LBL_ADD_BUTTON' => '新增',
  'LBL_ADD_INVITEE' => '新增被邀请人',
  'LBL_ASSIGNED_TO_ID' => '获指派的用户',
  'LBL_ASSIGNED_TO_NAME' => '指派给',
  'LBL_BLANK' => ' ',
  'LBL_CALL' => '电话：',
  'LBL_CALL_INFORMATION' => '概述',
  'LBL_CANCEL_CREATE_INVITEE' => '取消',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => '您是否确定移除所有重复记录？',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
  'LBL_CONTACT_NAME' => '联系人：',
  'LBL_CREATE_AND_ADD' => '创建并新增',
  'LBL_CREATE_CONTACT' => '作为联系人',
  'LBL_CREATE_INVITEE' => '创建一个受邀人',
  'LBL_CREATE_LEAD' => '作为潜在客户',
  'LBL_CREATE_MODULE' => '记录电话',
  'LBL_DATE' => '开始日期：',
  'LBL_DATE_END' => '结束日期',
  'LBL_DATE_END_ERROR' => '结束日期早于开始日期',
  'LBL_DATE_TIME' => '开始日期和时间：',
  'LBL_DEFAULT_SUBPANEL_TITLE' => '电话',
  'LBL_DEL' => '删除',
  'LBL_DESCRIPTION' => '说明：',
  'LBL_DESCRIPTION_INFORMATION' => '说明信息',
  'LBL_DIRECTION' => '指示：',
  'LBL_DURATION' => '时长：',
  'LBL_DURATION_HOURS' => '持续时间(小时)：',
  'LBL_DURATION_MINUTES' => '持续时间(分钟)：',
  'LBL_EDIT_ALL_RECURRENCES' => '编辑所有重复',
  'LBL_EMAIL' => '电子邮件',
  'LBL_EMAIL_REMINDER' => '电邮提醒',
  'LBL_EMAIL_REMINDER_SENT' => '已发送电邮提醒',
  'LBL_EMAIL_REMINDER_TIME' => '电邮提醒时间',
  'LBL_EMPTY_SEARCH_RESULT' => '很抱歉，查找没有结果。请在下方创建一个受邀人。',
  'LBL_EXPORT_ASSIGNED_USER_ID' => '获指派的用户ID',
  'LBL_EXPORT_CREATED_BY' => '创建人按ID',
  'LBL_EXPORT_DATE_START' => '开始日期和时间',
  'LBL_EXPORT_MODIFIED_USER_ID' => '修改人按ID',
  'LBL_EXPORT_PARENT_TYPE' => '关联到模块',
  'LBL_EXPORT_REMINDER_TIME' => '提醒时间(分钟)',
  'LBL_FIRST_NAME' => '名',
  'LBL_HELP_CREATE' => '{{plural_module_name}} 模块包含您的组织的用户所记下的{{calls_singular_module}}记录。{{plural_module_name}} 分三种状态 "已计划"、"已召开"、"已取消"。Sugar用户以及联系人和潜在客户可以添加为受邀者。

若要创建一个{{calls_singular_module}}：
1. 按需在字段内提供值。
    －标记“必须”的字段必须在保存前填写完毕。
    －若有必要，单击“显示更多”以显示额外字段。
2. 新增受邀者到{{calls_singular_module}}。
    －单击 "选择参加者" 以便新增现有用户、联系人或潜在客户到{{calls_singular_module}}。
    －单击“选择参加者”右侧的加号图标新增 {{calls_singular_module}} 参加者为新Sugar记录。
3. 单击“保存”完成新纪录的增添后回到前一页。
    －选择“保存并查看”即可打开新{{calls_singular_module}}的记录视图。
    －选择"保存并新增"即可立即创建另一新{{calls_singular_module}}。',
  'LBL_HELP_RECORD' => '{{plural_module_name}} 模块包含您的组织的用户所记下的{{meetings_singular_module}}记录。{{plural_module_name}} 分三种状态 "已计划"、"已召开"、"已取消"。Sugar用户以及{{contacts_module}}和{{leads_module}}可以添加为受邀者。

－若要编辑记录字段，单击有关的字段或“编辑”按钮。
－若要查看或修改子面板内其他记录的链接，请将左下框切换为“数据视图“。
－若要建造并查看活动流的用户备注和记录变更，请将左下框切换为“活动流“。
－使用记录名称右侧的图标跟踪或收藏此记录。
－“编辑”按钮右侧的下拉动作菜单内有额外动作可用。',
  'LBL_HELP_RECORDS' => '{{plural_module_name}} 模块内含呼叫记录，按三种状态分类 "已安排"、"完成"、"取消"。即将在未来24小时内召开的会议的开始日期以蓝色显示。过期未开的会议的开始日期则以红色显示。从此{{plural_module_name}}列表，您可以查看并编辑呼叫信息。每条呼叫行还有菜单提高额外行动供您选择使用。您可以从菜单选择"关闭"来标记呼叫已经完成。Sugar用户、联系人、潜在客户可以添加为呼叫受邀者。{{plural_module_name}}可以通过{{plural_module_name}}模块、日历模块创建，或者导入，也可以通过活动子面板(旧模块)或相关模块记录的已计划的活动dashlet(用于侧框模块) ，例如联系人和帐户等，以便自动在两记录之间创建关系。',
  'LBL_HISTORY_SUBPANEL_TITLE' => '备忘录',
  'LBL_HOURS_ABBREV' => '小时',
  'LBL_HOURS_MINUTES' => '(时/分)',
  'LBL_INVITEE' => '被邀请人',
  'LBL_LAST_NAME' => '姓',
  'LBL_LEADS_SUBPANEL_TITLE' => '潜在客户',
  'LBL_LIST_ASSIGNED_TO_NAME' => '获指派的用户',
  'LBL_LIST_CLOSE' => '关闭',
  'LBL_LIST_CONTACT' => '联系人',
  'LBL_LIST_DATE' => '开始日期',
  'LBL_LIST_DIRECTION' => '指导',
  'LBL_LIST_DURATION' => '期限',
  'LBL_LIST_FORM_TITLE' => '电话列表',
  'LBL_LIST_MY_CALLS' => '我的电话',
  'LBL_LIST_RELATED_TO' => '关联到',
  'LBL_LIST_RELATED_TO_ID' => '关联到ID',
  'LBL_LIST_SUBJECT' => '主题',
  'LBL_LIST_TIME' => '开始时间',
  'LBL_LOG_CALL' => '记录电话',
  'LBL_MEMBER_OF' => '归属',
  'LBL_MINSS_ABBREV' => '分钟',
  'LBL_MODULE_NAME' => '电话',
  'LBL_MODULE_NAME_SINGULAR' => '电话',
  'LBL_MODULE_TITLE' => '电话: 首页',
  'LBL_MY_SCHEDULED_CALLS' => '我计划打的电话',
  'LBL_NAME' => '名称',
  'LBL_NEW_FORM_TITLE' => '创建电话安排',
  'LBL_NO_ACCESS' => '您没有权限创建 $module',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => '母公司 ID',
  'LBL_PHONE' => '电话',
  'LBL_POPUP_REMINDER_TIME' => '弹出提醒时间',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => '您计划打的 {{moduleSingularLower}}电话定于{{formatDate date_start}}开始，但您没有访问权限。',
  'LBL_RECORD_SAVED_SUCCESS' => '您计划打的 {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> 电话定于 {{formatDate date_start}}开始。',
  'LBL_RECURRENCE' => '重复',
  'LBL_RECURRING_LIMIT_ERROR' => '这种重复电话不能安排因为它超出了允许的最大重复数$limit.',
  'LBL_RECURRING_SOURCE' => '重复源',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => '呼叫 {{{this}}}',
  'LBL_RELATED_TO' => '关联到：',
  'LBL_REMINDER' => '提醒：',
  'LBL_REMINDER_EMAIL' => '邮件',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => '电邮所有被邀请者',
  'LBL_REMINDER_POPUP' => '弹出',
  'LBL_REMINDER_TIME' => '提醒时间',
  'LBL_REMINDER_TITLE' => '电话：',
  'LBL_REMOVE' => '删除',
  'LBL_REMOVE_ALL_RECURRENCES' => '删除所有重复',
  'LBL_REPEAT_COUNT' => '重复次数',
  'LBL_REPEAT_DOW' => '于',
  'LBL_REPEAT_END' => '结束',
  'LBL_REPEAT_END_AFTER' => '之后',
  'LBL_REPEAT_END_BY' => '通过',
  'LBL_REPEAT_INTERVAL' => '间段',
  'LBL_REPEAT_OCCURRENCES' => '重复',
  'LBL_REPEAT_PARENT_ID' => '重复源ID',
  'LBL_REPEAT_TYPE' => '重复',
  'LBL_REPEAT_UNTIL' => '重复直到',
  'LBL_REVENUELINEITEMS' => '收入线项目',
  'LBL_SCHEDULING_FORM_TITLE' => '日程安排',
  'LBL_SEARCH_BUTTON' => '查找',
  'LBL_SEARCH_FORM_TITLE' => '电话搜索',
  'LBL_SELECT_FROM_DROPDOWN' => '请先从“关联”下拉列表中完成一项选择。',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => '保存并发送邀请函',
  'LBL_SEND_BUTTON_TITLE' => '保存并发送邀请函 [Alt+I]',
  'LBL_SEND_INVITES' => '发送邀请',
  'LBL_STATUS' => '状态：',
  'LBL_SUBJECT' => '主题：',
  'LBL_SYNCED_RECURRING_MSG' => '这个电话源自另外一套系统并同步到Sugar。若要进行变更，请到另一系统的源记录完成变更。在另一系统完成的变更将同步到这个记录。',
  'LBL_TIME' => '开始时间：',
  'LBL_TIME_END' => '结束时间',
  'LBL_USERS_SUBPANEL_TITLE' => '用户',
  'LNK_CALL_LIST' => '查看电话',
  'LNK_IMPORT_CALLS' => '导入电话',
  'LNK_NEW_ACCOUNT' => '新增客户',
  'LNK_NEW_APPOINTMENT' => '创建约会',
  'LNK_NEW_CALL' => '记录电话',
  'LNK_NEW_MEETING' => '安排会议',
  'LNK_NEW_OPPORTUNITY' => '新增商业机会',
  'LNK_SELECT_ACCOUNT' => '选择客户',
  'NOTICE_DURATION_TIME' => '持续时间必须大于0',
  'NTC_REMOVE_INVITEE' => '您确定要从电话里删除这个被邀请人吗？',
  'TPL_CALL_STATUS_CHANGED' => '电话标记为{{status}}。',
);

