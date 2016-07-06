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
  'LBL_ASSIGNED_USER' => 'ユーザーがアサインされました',
  'LBL_CAS_ID' => 'プロセス番号',
  'LBL_MODULE_NAME' => 'プロセス',
  'LBL_MODULE_NAME_SINGULAR' => 'プロセス',
  'LBL_MODULE_TITLE' => 'プロセス',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 on <strong>%s</strong> 承認',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 on <strong>%s</strong> クレーム',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 on <strong>%s</strong>　ユーザー&1にアサインされた',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 on <strong>%s</strong> 却下',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 on <strong>%s</strong> ルーティングされた',
  'LBL_PMSE_BUTTON_CANCEL' => 'キャンセル',
  'LBL_PMSE_BUTTON_CLOSE' => '閉じる',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'プロセス作成者ログ',
  'LBL_PMSE_BUTTON_REFRESH' => '更新',
  'LBL_PMSE_BUTTON_SAVE' => '保存',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'SugarCRMログ',
  'LBL_PMSE_CANCEL_MESSAGE' => '本当にプロセス番号 #{}をキャンセルしますか?',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'メモ',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'タイプ',
  'LBL_PMSE_FORM_LABEL_USER' => 'ユーザ',
  'LBL_PMSE_FORM_OPTION_SELECT' => '選択...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => '実行されたアクションは以下でした: <span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'タスクはまだアサインされています',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => '名前: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => '作成済',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'プロセス#%sを作成しました',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => '現在タスクID %s を持っている',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => '未知のタスクを完了',
  'LBL_PMSE_HISTORY_LOG_EDITED' => '編集済',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'モジュール %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => '不明（ユーザーID：&#39;％s&#39;による）',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => '登録されたアクションではない',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '（未開始）',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'ルーティングされた',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'タスクは以下となりました',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'タスクは以下でした',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'イベント %s があります',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'ゲートウェイ%sは評価され、次のタスクにルーティングされた',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'メモを追加',
  'LBL_PMSE_LABEL_APPROVE' => '承認',
  'LBL_PMSE_LABEL_CANCEL' => 'キャンセル',
  'LBL_PMSE_LABEL_CLAIM' => 'クレーム',
  'LBL_PMSE_LABEL_CURRENT' => '現在の',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => '現在の活動',
  'LBL_PMSE_LABEL_DUE_DATE' => '期限日',
  'LBL_PMSE_LABEL_EXECUTE' => '実行',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => '予定時間',
  'LBL_PMSE_LABEL_HISTORY' => '履歴',
  'LBL_PMSE_LABEL_NOTES' => 'メモを見る',
  'LBL_PMSE_LABEL_OVERDUE' => '期限切れ',
  'LBL_PMSE_LABEL_PROCESS' => 'プロセス',
  'LBL_PMSE_LABEL_REJECT' => '却下',
  'LBL_PMSE_LABEL_ROUTE' => 'ルーティング',
  'LBL_PMSE_LABEL_STATUS' => 'ステータス',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'アサインされていない',
  'LBL_PMSE_MY_PROCESSES' => '私のプロセス',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'セルフサービスプロセス',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'サイクル回数のエラー',
  'LBL_PMSE_SHOW_PROCESS' => 'プロセスを見る',
  'LBL_PMSE_TITLE_HISTORY' => 'プロセス履歴',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'プロセス #%s: 現在のステータス',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'プロセス作成者ログビューワー',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'プロセス管理',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'プロセスメモ',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => '無人のプロセス',
  'LBL_PROCESS_DEFINITION_NAME' => 'プロセス定義名',
  'LBL_PROCESS_NAME' => 'プロセス名',
  'LBL_RECORD_NAME' => 'レコード名',
  'LBL_STATUS_CANCELLED' => 'プロセスキャンセル',
  'LBL_STATUS_COMPLETED' => 'プロセス完了',
  'LBL_STATUS_ERROR' => 'プロセスエラー',
  'LBL_STATUS_IN_PROGRESS' => 'プロセス進行中',
  'LBL_STATUS_TERMINATED' => 'プロセス終了',
  'LNK_LIST' => 'プロセス閲覧',
);

