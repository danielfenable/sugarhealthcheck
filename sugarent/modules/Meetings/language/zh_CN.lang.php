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
  'ERR_DELETE_RECORD' => '必须指定记录编号才能删除会议。',
  'LBL_ACCEPT_LINK' => '接受链接',
  'LBL_ACCEPT_STATUS' => '接收状态',
  'LBL_ACCEPT_THIS' => '接受？',
  'LBL_ACCOUNT_NAME' => '客户',
  'LBL_ACTIVITIES_REPORTS' => '活动报告',
  'LBL_ADD_BUTTON' => '增加',
  'LBL_ADD_INVITEE' => '增加受邀者',
  'LBL_ASSIGNED_TO_NAME' => '负责人：',
  'LBL_CANCEL_CREATE_INVITEE' => '取消',
  'LBL_COLON' => '：',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => '您确定要移除所有的重复记录吗?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
  'LBL_CONTACT_NAME' => '联系人：',
  'LBL_CREATED_BY' => '创建者',
  'LBL_CREATED_USER' => '创建者',
  'LBL_CREATE_AND_ADD' => '创建 & 新增',
  'LBL_CREATE_CONTACT' => '作为联系人',
  'LBL_CREATE_INVITEE' => '创建受邀人',
  'LBL_CREATE_LEAD' => '作为线索',
  'LBL_CREATE_MODULE' => '安排会议',
  'LBL_CREATOR' => '会议创建者',
  'LBL_DATE' => '开始日期：',
  'LBL_DATE_END' => '截止日期',
  'LBL_DATE_END_ERROR' => '结束日期前于开始日期',
  'LBL_DATE_TIME' => '开始日期和时间：',
  'LBL_DEFAULT_SUBPANEL_TITLE' => '会议',
  'LBL_DEL' => '删除',
  'LBL_DESCRIPTION' => '说明：',
  'LBL_DESCRIPTION_INFORMATION' => '说明信息',
  'LBL_DIRECTION' => '指示：',
  'LBL_DISPLAYED_URL' => '显示URL',
  'LBL_DURATION' => '持续时间：',
  'LBL_DURATION_HOURS' => '持续时数：',
  'LBL_DURATION_MINUTES' => '持续分钟数：',
  'LBL_EDIT_ALL_RECURRENCES' => '编辑所有事件',
  'LBL_EMAIL' => '电子邮件',
  'LBL_EMAIL_REMINDER' => '邮件提醒',
  'LBL_EMAIL_REMINDER_SENT' => '邮件提醒已发送',
  'LBL_EMAIL_REMINDER_TIME' => '邮件提醒时间',
  'LBL_EMPTY_SEARCH_RESULT' => '很抱歉, 没有查找结果. 请创建以下一个受邀人.',
  'LBL_ERROR_LAUNCH_MEETING_GENERAL' => '启动会议出错。请联系您的管理员。',
  'LBL_EXPORT_ASSIGNED_USER_ID' => '指派用户 ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => '指派用户名',
  'LBL_EXPORT_CREATED_BY' => '以ID来创建',
  'LBL_EXPORT_DATE_END' => '结束日期和时间',
  'LBL_EXPORT_DATE_START' => '开始日期和时间',
  'LBL_EXPORT_DISPLAYED_URL' => '显示Url',
  'LBL_EXPORT_EXTERNAL_ID' => '外部 ID',
  'LBL_EXPORT_HOST_URL' => '主机Url',
  'LBL_EXPORT_JOIN_URL' => 'Url连接',
  'LBL_EXPORT_MODIFIED_USER_ID' => '以ID来修改',
  'LBL_EXPORT_PARENT_ID' => '主ID',
  'LBL_EXPORT_PARENT_TYPE' => '相关类型',
  'LBL_EXPORT_REMINDER_TIME' => '提醒时间 (分)',
  'LBL_EXTERNALID' => '外部App ID',
  'LBL_EXTNOSTART_HEADER' => '错误: 不能开始会议',
  'LBL_EXTNOSTART_MAIN' => '您不能开始此会议，因为您不是管理员或此会议的所有者.',
  'LBL_EXTNOT_GO_BACK' => '返回到先前的记录。',
  'LBL_EXTNOT_HEADER' => '错误: 没有邀请',
  'LBL_EXTNOT_MAIN' => '您不能参加此会议因为您没有被邀请。',
  'LBL_EXTNOT_RECORD_LINK' => '查看会议',
  'LBL_FIRST_NAME' => '名',
  'LBL_HELP_CREATE' => '{{plural_module_name}} 模块包含您的组织的用户所记下的{{meetings_singular_module}}记录。{{plural_module_name}} 分三种状态 "已计划"、"已召开"、"已取消"。Sugar用户以及{{contacts_module}}和{{leads_module}}可以添加为受邀者。

若要创建一个{{meetings_singular_module}}：
1. 按需在字段内提供值。
    －标记“必须”的字段必须在保存前填写完毕。
    －若有必要，单击“显示更多”以显示额外字段。
2. 新增受邀者到{{meetings_singular_module}}。
    －单击 "选择参加者" 以便新增现有用户、联系人或潜在客户到{{meetings_singular_module}}。
    －单击“选择参加者”右侧的加号图标新增 {{meetings_singular_module}} 参加者为新Sugar记录。
3. 单击“保存”完成新纪录的增添后回到前一页。
    －选择“保存并查看”即可打开新会议的记录视图。
    －选择"保存并新增"即可立即创建另一新{{meetings_singular_module}}。',
  'LBL_HELP_RECORD' => '{{plural_module_name}} 模块包含您的组织的用户所记下的{{meetings_singular_module}}记录。{{plural_module_name}} 分三种状态 "已计划"、"已召开"、"已取消"。Sugar用户以及{{contacts_module}}和{{leads_module}}可以添加为受邀者。

－若要编辑记录字段，单击有关的字段或“编辑”按钮。
－若要查看或修改子面板内其他记录的链接，请将左下框切换为“数据视图“。
－若要建造并查看活动流的用户备注和记录变更，请将左下框切换为“活动流“。
－使用记录名称右侧的图标跟踪或收藏此记录。
－“编辑”按钮右侧的下拉动作菜单内有额外动作可用。',
  'LBL_HELP_RECORDS' => '{{plural_module_name}} 模块内含会议记录，按三种状态分类 "已安排"、"完成"、"取消"。即将在未来24小时内召开的会议的开始日期以蓝色显示。过期未开的会议的开始日期则以红色显示。

从此{{plural_module_name}}列表，您可以查看并编辑会议信息。每条会议行还有菜单提高额外行动供您选择使用。您可以从菜单选择"关闭"来标记会议已经召开。

Sugar用户、联系人、潜在客户可以添加为会议受邀者。{{plural_module_name}}可以通过{{plural_module_name}}模块、日历模块创建，或者导入，也可以通过活动副框(旧模块)或相关模块记录的已计划的活动dashlet(用于侧框模块) ，例如联系人和帐户等，以便自动在两记录之间创建关系。',
  'LBL_HISTORY_SUBPANEL_TITLE' => '备忘录',
  'LBL_HOST_EXT_MEETING' => '开始会议',
  'LBL_HOST_URL' => '主机URL',
  'LBL_HOURS_ABBREV' => '小时',
  'LBL_HOURS_MINS' => '(小时/分钟)',
  'LBL_INVITEE' => '受邀者',
  'LBL_JOIN_EXT_MEETING' => '参加会议',
  'LBL_JOIN_MEETING' => '参加{{meetingType}}',
  'LBL_LAST_NAME' => '姓',
  'LBL_LEADS_SUBPANEL_TITLE' => '潜在用户',
  'LBL_LIST_ASSIGNED_TO_NAME' => '负责的用户',
  'LBL_LIST_CLOSE' => '关闭',
  'LBL_LIST_CONTACT' => '联系人',
  'LBL_LIST_DATE' => '开始日期',
  'LBL_LIST_DATE_MODIFIED' => '修改日期',
  'LBL_LIST_DIRECTION' => '指示',
  'LBL_LIST_DUE_DATE' => '截止日期',
  'LBL_LIST_FORM_TITLE' => '会议列表',
  'LBL_LIST_JOIN_MEETING' => '参加会议',
  'LBL_LIST_MY_MEETINGS' => '我的会议',
  'LBL_LIST_RELATED_TO' => '关联到',
  'LBL_LIST_STATUS' => '状态',
  'LBL_LIST_SUBJECT' => '主题',
  'LBL_LIST_TIME' => '开始时间',
  'LBL_LOCATION' => '地点：',
  'LBL_MEETING' => '会议：',
  'LBL_MEETING_CLOSE_SUCCESS' => '会议成功',
  'LBL_MEETING_INFORMATION' => '查看会议',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODIFIED_BY' => '修改人',
  'LBL_MODIFIED_USER' => '修改者',
  'LBL_MODULE_NAME' => '会议',
  'LBL_MODULE_NAME_SINGULAR' => '会议',
  'LBL_MODULE_TITLE' => '会议: 首页',
  'LBL_MY_SCHEDULED_MEETINGS' => '我已计划的会议',
  'LBL_NAME' => '名称',
  'LBL_NEW_FORM_TITLE' => '创建约会',
  'LBL_NO_ACCESS' => '您没有权限创建 $module',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => '主ID',
  'LBL_PARENT_TYPE' => '主类型',
  'LBL_PASSWORD' => '会议密码',
  'LBL_PHONE' => '办公电话：',
  'LBL_POPUP_REMINDER' => '弹出提醒',
  'LBL_POPUP_REMINDER_TIME' => '弹出提醒的时间',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => '您创建的 {{moduleSingularLower}}会议定于{{formatDate date_start}}开始，但您没有访问权限。',
  'LBL_RECORD_SAVED_SUCCESS' => '您创建的 {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> 会议定于 {{formatDate date_start}}开始。',
  'LBL_RECURRENCE' => '事件',
  'LBL_RECURRING_LIMIT_ERROR' => '这种定期召开的会议不能安排因为它超出了允许的最大复发数$limit.',
  'LBL_RECURRING_SOURCE' => '重复资源',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => '会议邀请 {{{this}}}',
  'LBL_RELATED_TO' => '关联到:',
  'LBL_REMINDER' => '提醒：',
  'LBL_REMINDER_EMAIL' => '邮件',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => '所有被邀请者邮件',
  'LBL_REMINDER_POPUP' => '弹出',
  'LBL_REMINDER_TIME' => '提醒时间',
  'LBL_REMINDER_TITLE' => '会议',
  'LBL_REMOVE' => '移除',
  'LBL_REMOVE_ALL_RECURRENCES' => '删除所有事件',
  'LBL_REPEAT_COUNT' => '重复总数',
  'LBL_REPEAT_DOW' => '重复Dow',
  'LBL_REPEAT_END' => '结束',
  'LBL_REPEAT_END_AFTER' => '之后',
  'LBL_REPEAT_END_BY' => '通过',
  'LBL_REPEAT_INTERVAL' => '重复间段',
  'LBL_REPEAT_OCCURRENCES' => '事件',
  'LBL_REPEAT_PARENT_ID' => '重复源ID',
  'LBL_REPEAT_TYPE' => '重复类型',
  'LBL_REPEAT_UNTIL' => '重复直到',
  'LBL_REVENUELINEITEMS' => '收入线项目',
  'LBL_SCHEDULING_FORM_TITLE' => '日程安排',
  'LBL_SEARCH_BUTTON' => '查找',
  'LBL_SEARCH_FORM_TITLE' => '会议查找',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => '发送邀请',
  'LBL_SEND_BUTTON_TITLE' => '发送邀请 [Alt+I]',
  'LBL_SEND_INVITES' => '发送邀请',
  'LBL_SEQUENCE' => '会议更新序列',
  'LBL_START_MEETING' => '开始{{meetingType}}',
  'LBL_STATUS' => '状态:',
  'LBL_SUBJECT' => '主题：',
  'LBL_SYNCED_RECURRING_MSG' => '这个电话起始起始于另外一个系统并没有同步到Sugar，一旦这个电话被编辑，它不会被同步回另外一个系统。',
  'LBL_TIME' => '开始时间：',
  'LBL_TYPE' => '会议类型',
  'LBL_URL' => '开始/加入会议',
  'LBL_USERS_SUBPANEL_TITLE' => '用户',
  'LNK_IMPORT_MEETINGS' => '导入会议',
  'LNK_MEETING_LIST' => '查看会议',
  'LNK_NEW_APPOINTMENT' => '创建安排',
  'LNK_NEW_MEETING' => '安排会议',
  'NOTICE_DURATION_TIME' => '持续时间必须大于0',
  'NTC_REMOVE_INVITEE' => '您确定想要从会议移除此邀请人吗？',
);

