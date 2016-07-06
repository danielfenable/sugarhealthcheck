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

  'LBL_MODULE_NAME' => 'プロセス定義',
  'LBL_MODULE_TITLE' => 'プロセス定義',
  'LBL_MODULE_NAME_SINGULAR' => 'プロセス定義',

  'LNK_LIST' => 'プロセス定義閲覧',
  'LNK_NEW_PMSE_PROJECT' => 'プロセス定義を作成',
  'LNK_IMPORT_PMSE_PROJECT' => 'プロセス定義をインポート',

  'LBL_PRJ_STATUS' => 'ステータス',
  'LBL_PRJ_MODULE' => '対象モジュール',
  'LBL_PMSE_BUTTON_SAVE' => '保存',
  'LBL_PMSE_BUTTON_CANCEL' => 'キャンセル',
  'LBL_PMSE_BUTTON_YES' => 'はい',
  'LBL_PMSE_BUTTON_NO' => 'いいえ',
  'LBL_PMSE_BUTTON_OK' => 'OK',

    'LBL_PMSE_LABEL_DESIGN' => 'デザイン',
    'LBL_PMSE_LABEL_EXPORT' => 'エクスポート',
    'LBL_PMSE_LABEL_DELETE' => '削除',
    'LBL_PMSE_LABEL_ENABLE' => '有効にする',
    'LBL_PMSE_LABEL_DISABLE' => '無効',

    'LBL_PMSE_SAVE_DESIGN_BUTTON_LABEL' => '保存してデザイン',
    'LBL_PMSE_IMPORT_BUTTON_LABEL' => 'インポート',

    'LBL_PMSE_MY_PROCESS_DEFINITIONS' => '私のプロセス定義',
    'LBL_PMSE_ALL_PROCESS_DEFINITIONS' => '全てのプロセス定義',

    'LBL_PMSE_PROCESS_DEFINITIONS_ENABLED' => '有効',
    'LBL_PMSE_PROCESS_DEFINITIONS_DISABLED' => '無効',
    'LBL_PMSE_PROCESS_DEFINITIONS_EDIT' => 'このプロセス定義に対して実行されているアクティブなプロセスがあります。これを更新するとこれらのプロセスに影響が出る可能性があります。本当にこのプロセス定義を編集しますか？',
    'LBL_PMSE_DISABLE_CONFIRMATION_PD' => 'このプロセス定義に対して実行されているアクティブなプロセスがあります。これを更新するとこれらのプロセスに影響が出る可能性があります。本当にこのプロセス定義を無効化しますか？',

    'LBL_PMSE_PROCESS_DEFINITION_IMPORT_TEXT' => 'ファイルシステムから*.bpmファイルをインポートして新しいプロセス定義レコードを自動的に作成します。',
    'LBL_PMSE_PROCESS_DEFINITION_IMPORT_SUCCESS' => 'プロセス定義は、システムに正常にインポートされました。',
    'LBL_PMSE_PROCESS_DEFINITION_EMPTY_WARNING' => '有効な*.bpmファイルを選択してください。',
    'LBL_PMSE_PROCESS_DEFINITION_IMPORT_BR' => 'プロセス定義がインポートされましたが、ビジネスルールが選択されていないビジネスルールアクションが 1 つ以上含まれています。',


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
    'LBL_PMSE_ADAM_DESIGNER_LEADS' => 'リード',
    'LBL_PMSE_ADAM_DESIGNER_OPPORTUNITY' => '商談',
    'LBL_PMSE_ADAM_DESIGNER_DOCUMENTS' => 'ドキュメント',
    'LBL_PMSE_ADAM_DESIGNER_OTHER_MODULES' => '対象モジュール',
    'LBL_PMSE_ADAM_DESIGNER_WAIT' => '待機',
    'LBL_PMSE_ADAM_DESIGNER_RECEIVE_MESSAGE' => 'メッセージを受信',
    'LBL_PMSE_ADAM_DESIGNER_SEND_MESSAGE' => 'メッセージを送信',
    'LBL_PMSE_ADAM_DESIGNER_USER_TASK' => 'アクティビティ',
    'LBL_PMSE_ADAM_DESIGNER_EXCLUSIVE' => '排他的ゲートウェイ',
    'LBL_PMSE_ADAM_DESIGNER_PARALLEL' => '並列ゲートウェイ',
    'LBL_PMSE_ADAM_DESIGNER_COMMENT' => 'コメント',
    'LBL_PMSE_ADAM_DESIGNER_UNDO' => '元に戻す',
    'LBL_PMSE_ADAM_DESIGNER_REDO' => '繰り返す',
    'LBL_PMSE_ADAM_DESIGNER_SAVE' => '保存',

    /**ELEMENTS NAMES**/
    'LBL_PMSE_ADAM_DESIGNER_TASK' => 'アクティビティ',
    'LBL_PMSE_ADAM_DESIGNER_ACTION' => 'アクション',
    'LBL_PMSE_ADAM_DESIGNER_LEAD_START_EVENT' => 'リード開始イベント',
    'LBL_PMSE_ADAM_DESIGNER_OPPORTUNITY_START_EVENT' => '商談開始イベント' ,
    'LBL_PMSE_ADAM_DESIGNER_DOCUMENT_START_EVENT' => 'ドキュメント開始イベント',
    'LBL_PMSE_ADAM_DESIGNER_OTHER_MODULE_EVENT' => '開始イベント',
    'LBL_PMSE_ADAM_DESIGNER_WAIT_EVENT' => '待機イベント',
    'LBL_PMSE_ADAM_DESIGNER_MESSAGE_EVENT' => 'メッセージイベント',
//    'LBL_PMSE_ADAM_DESIGNER_BOUNDARY_EVENT' => 'Boundary Event',
    'LBL_PMSE_ADAM_DESIGNER_EXCLUSIVE_GATEWAY' => '排他的ゲートウェイ',
    'LBL_PMSE_ADAM_DESIGNER_PARALLEL_GATEWAY' => '並列ゲートウェイ',
    'LBL_PMSE_ADAM_DESIGNER_END_EVENT' => '終了イベント',
    'LBL_PMSE_ADAM_DESIGNER_TEXT_ANNOTATION' => 'テキスト注釈',


    /**GENERAL**/
    'LBL_PMSE_MESSAGE_CANCEL_CONFIRM' => '一部の設定が変更されました。変更を破棄しますか？',
    'LBL_PMSE_MESSAGE_REMOVE_ALL_START_CRITERIA' => 'モジュールが変わりますので基準も同様に削除されます。新しいモジュールとフィールドの関係がないためです。',
    'LBL_PMSE_MESSAGE_INVALID_CONNECTION' => '無効な接続',

    'LBL_PMSE_CONTEXT_MENU_SETTINGS' => '設定',
    'LBL_PMSE_CONTEXT_MENU_DELETE' => '削除',

    'LBL_PMSE_FORM_LABEL_MODULE' => 'モジュール',
    'LBL_PMSE_FORM_LABEL_CRITERIA' => '評価条件',
    'LBL_PMSE_FORM_LABEL_DURATION' => '時間',
    'LBL_PMSE_FORM_LABEL_UNIT' => '単位',

    'LBL_PMSE_FORM_OPTION_SELECT' => '選択',
    'LBL_PMSE_FORM_OPTION_TARGET_MODULE' => '対象モジュール',
    'LBL_PMSE_FORM_OPTION_DAYS' => '日間',
    'LBL_PMSE_FORM_OPTION_HOURS' => '時間',
    'LBL_PMSE_FORM_OPTION_MINUTES' => '分',
    'LBL_PMSE_MESSAGE_CANNOTDROPOUTSIDECANVAS' => 'キャンバスの外側には要素をドロップできません',
    'LBL_PMSE_FORM_TOOLTIP_DURATION' => 'タイマーイベントの期間を定義する',

    /**PROCESSDEFINTION**/
    // CONTEXT MENU
    'LBL_PMSE_CONTEXT_MENU_PROCESS_DEFINITION' => 'プロセス定義',
    'LBL_PMSE_CONTEXT_MENU_SAVE' => '保存',
    'LBL_PMSE_CONTEXT_MENU_REFRESH' => '更新',
    'LBL_PMSE_CONTEXT_MENU_ZOOM' => 'ズーム',
    'LBL_PMSE_CONTEXT_MENU_50' => '50%',
    'LBL_PMSE_CONTEXT_MENU_75' => '75%',
    'LBL_PMSE_CONTEXT_MENU_100' => '100%',
    'LBL_PMSE_CONTEXT_MENU_125' => '125%',
    'LBL_PMSE_CONTEXT_MENU_150' => '150%',
    // FORMS
    'LBL_PMSE_LABEL_PROCESS_NAME' => 'プロセス名',
    'LBL_PMSE_LABEL_DESCRIPTION' => '詳細',
    'LBL_PMSE_LABEL_TERMINATE_PROCESS' => 'プロセスを終了',
    'LBL_PMSE_LABEL_LOCKED_FIELDS' => 'ロックされたフィールド',

    /**TASKS**/
    // CONTEXT MENU
    'LBL_PMSE_CONTEXT_MENU_FORMS' => 'フォーム',
    'LBL_PMSE_CONTEXT_MENU_USERS' => 'ユーザー',
    'LBL_PMSE_CONTEXT_MENU_ACTION_TYPE' => 'アクションタイプ',
    'LBL_PMSE_CONTEXT_MENU_UNASSIGNED' => '[Unassigned]',
    'LBL_PMSE_CONTEXT_MENU_BUSINESS_RULE' => 'ビジネスルール',
    'LBL_PMSE_CONTEXT_MENU_ASSIGN_USER' => 'ユーザーをアサイン',
    'LBL_PMSE_CONTEXT_MENU_ASSIGN_TEAM' => 'ラウンドロビン',
    'LBL_PMSE_CONTEXT_MENU_CHANGE_FIELD' => 'フィールドを変更',
    'LBL_PMSE_CONTEXT_MENU_ADD_RELATED_RECORD' => '関連するレコードを追加',
    // CONFIRMATIONS
    'LBL_PMSE_CHANGE_ACTION_TYPE_CONFIRMATION' => 'アクションタイプを変更すると、このアクションに対する以前の設定は失われます。続行しますか？',
    // FORMS
    'LBL_PMSE_FORM_TITLE_ACTIVITY' => 'アクティビティ',
    'LBL_PMSE_FORM_LABEL_READ_ONLY_FIELDS' => 'リードオンリーフィールド',
    'LBL_PMSE_FORM_LABEL_REQUIRED_FIELDS' => '必須フィールド',
    'LBL_PMSE_FORM_LABEL_GENERAL_SETTINGS' => '一般',
    'LBL_PMSE_FORM_LABEL_EXPECTED_TIME' => '予定時間',
    'LBL_PMSE_FORM_LABEL_FORM_TYPE' => 'フォームタイプ',
    'LBL_PMSE_FORM_LABEL_RESPONSE_BUTTONS' => 'フォームボタン',
    'LBL_PMSE_FORM_OPTION_APPROVE_REJECT' => '承認/却下',
    'LBL_PMSE_FORM_OPTION_ROUTE' => 'ルーティング',
    'LBL_PMSE_FORM_LABEL_OTHER_DERIVATION_OPTIONS' => '他のルーティングオプション',
    'LBL_PMSE_FORM_LABEL_RECORD_OWNERSHIP' => 'レコードオーナーを変更',
    'LBL_PMSE_FORM_LABEL_TEAM' => 'チーム',
    'LBL_PMSE_FORM_LABEL_REASSIGN' => '新しいプロセスユーザーを選択',

    'LBL_PMSE_FORM_TITLE_USER_DEFINITION' => 'ユーザー定義',
    'LBL_PMSE_FORM_LABEL_ASSIGNMENT_METHOD' => 'アサイン方法',
    'LBL_PMSE_FORM_OPTION_ROUND_ROBIN' => 'ラウンドロビン',
    'LBL_PMSE_FORM_OPTION_SELF_SERVICE' => 'セルフサービス',
    'LBL_PMSE_FORM_OPTION_STATIC_ASSIGNMENT' => '静的割り当て',
    'LBL_PMSE_FORM_LABEL_ASSIGN_TO_TEAM' => 'チームへアサイン',
    'LBL_PMSE_FORM_LABEL_ASSIGN_TO_USER' => 'ユーザーへアサイン',
    'LBL_PA_FORM_COMBO_ASSIGN_TO_USER_HELP_TEXT' => '選択',
    'LBL_PA_FORM_COMBO_NO_MATCHES_FOUND' => '一致するものが見つかりません',
    'LBL_PA_FORM_LABEL_ASSIGN_TO_TEAM' => 'チームからプロセス ユーザーを選択します',
    'LBL_PA_FORM_LABEL_ASSIGN_TO_USER' => 'プロセス ユーザーの選択',
    'LBL_PMSE_FORM_OPTION_CURRENT_USER' => '現在のユーザー',
    'LBL_PMSE_FORM_OPTION_RECORD_OWNER' => 'レコードオーナー',
    'LBL_PMSE_FORM_OPTION_SUPERVISOR' => 'スーパーバイザー',
    //'LBL_PMSE_FORM_OPTION_CURRENT_RECORD' => 'Current record',

    'LBL_PMSE_FORM_TITLE_BUSINESS_RULE' => 'ビジネスルール',
    'LBL_PMSE_LABEL_RULE' => 'ルール',

    'LBL_PMSE_FORM_TITLE_ASSIGN_USER' => 'ユーザーをアサイン',
    'LBL_PA_FORM_LABEL_UPDATE_RECORD_OWNER' => 'レコードの「アサイン先」を更新',

    'LBL_PMSE_FORM_TITLE_ADD_RELATED_RECORD' => '関連するレコードを追加',
    'LBL_PMSE_FORM_LABEL_RELATED_MODULE' => '関連モジュール',
    'LBL_PMSE_FORM_LABEL_FIELDS' => 'フィールド',

    'LBL_PMSE_FORM_TITLE_CHANGE_FIELDS' => 'フィールドを変更',

    'LBL_PMSE_FORM_TITLE_ASSIGN_TEAM' => 'ラウンドロビン',

    'LBL_PMSE_MESSAGE_ACTIVITY_NAME_EMPTY' => 'アクティビティの名前が空白です。',
    'LBL_PMSE_MESSAGE_ACTIVITY_NAME_ALREADY_EXISTS' => '"%s"の名前が既にシェープファミリー内に存在します。',

    /**EVENTS**/
    // CONTEXT MENU
    'LBL_PMSE_CONTEXT_MENU_ACTION' => 'アクション',
    'LBL_PMSE_CONTEXT_MENU_RECEIVE_MESSAGE' => 'メッセージを受信',
    'LBL_PMSE_CONTEXT_MENU_SEND_MESSAGE' => 'メッセージを送信',
    'LBL_PMSE_CONTEXT_MENU_TIMER' => 'タイマー',
    'LBL_PMSE_CONTEXT_MENU_RESULT' => '結果',
    'LBL_PMSE_CONTEXT_MENU_DO_NOTHING' => '何もしない',
    'LBL_PMSE_CONTEXT_MENU_TERMINATE_PROCESS' => 'プロセスを終了',
    'LBL_PMSE_CONTEXT_MENU_LISTEN' => '聞く',

    // FORMS
    'LBL_PMSE_FORM_TITLE_LABEL_EVENT' => 'イベント',
    'LBL_PMSE_FORM_LABEL_APPLIES_TO' => '対象',
    'LBL_PMSE_FORM_OPTION_NEW_RECORDS_ONLY' => '新規レコードのみ',
    'LBL_PMSE_FORM_OPTION_UPDATED_RECORDS_ONLY' => '更新されたレコードのみ',
    'LBL_PMSE_FORM_OPTION_UPDATED_RECORDS_ONLY_AU' => '更新済みレコードのみ (すべての更新 - ヘルプテキストを参照)',

    'LBL_PMSE_FORM_TOOLTIP_WHEN_START_EVENT' => 'イベントが開始する時のみ選択',
    'LBL_PMSE_FORM_TOOLTIP_EVENT_MODULE' => 'イベントトリガーに適用するSugarCRMを選択',

    'LBL_PMSE_FORM_LABEL_FIXED_DATE' => '固定の日付',

    'LBL_PMSE_FORM_LABEL_EMAIL_TEMPLATE' => 'Eメールテンプレート',

    'LBL_PMSE_FORM_LABEL_EMAIL_TO' => 'To',
    'LBL_PMSE_FORM_LABEL_EMAIL_CC' => 'Cc',
    'LBL_PMSE_FORM_LABEL_EMAIL_BCC' => 'Bcc',

    //ROLES IN EXPRESSION BUILDER
    'LBL_PMSE_FORM_OPTION_ADMINISTRATOR' => '管理者',

    /**GATEWAYS**/
    // CONTEXT MENU
    'LBL_PMSE_CONTEXT_MENU_DIRECTION' => '制御',
    'LBL_PMSE_CONTEXT_MENU_CONVERGING' => '収束',
    'LBL_PMSE_CONTEXT_MENU_DIVERGING' => '分岐',
    'LBL_PMSE_CONTEXT_MENU_CONVERT' => 'コンバート',
    'LBL_PMSE_CONTEXT_MENU_EXCLUSIVE_GATEWAY' => '排他的ゲートウェイ',
    'LBL_PMSE_CONTEXT_MENU_PARELLEL_GATEWAY' => '並列ゲートウェイ',
    'LBL_PMSE_CONTEXT_MENU_INCLUSIVE_GATEWAY' => '包括的ゲートウェイ',
    'LBL_PMSE_CONTEXT_MENU_EVENT_BASED_GATEWAY' => 'イベントベースのゲートウェイ',
    'LBL_PMSE_CONTEXT_MENU_DEFAULT_FLOW' => 'デフォルトのフロー',
    'LBL_PMSE_CONTEXT_MENU_NONE' => 'なし',

    // FORMS
    'LBL_PMSE_FORM_TITLE_GATEWAY' => 'ゲートウェイ',

    'LBL_PMSE_CONTEXT_MENU_DEFAULT_TASK' => '（アクティビティ）',
    'LBL_PMSE_CONTEXT_MENU_DEFAULT_EVENT' => '（イベント）',
    'LBL_PMSE_CONTEXT_MENU_DEFAULT_GATEWAY' => '（ゲートウェイ）',

    'LBL_PMSE_BPMN_WARNING_PANEL_TITLE' => 'エレメントエラー',
    'LBL_PMSE_BPMN_WARNING_LABEL' => 'エラー',
    'LBL_PMSE_BPMN_WARNING_SINGULAR_LABEL' => 'エラー',

    /**CRITERIA BUILDER**/
    'LBL_PMSE_EXPCONTROL_VARIABLES_PANEL_TITLE' => 'フィールド',
    'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_TITLE' => 'モジュールフィールド評価',
    'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_MODULE' => 'モジュール',
    'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_VARIABLE' => 'フィールド',
    'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_VALUE' => '値',
    'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_TITLE' => 'フォームレスポンス評価',
    'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_FORM' => 'フォーム',
    'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_STATUS' => 'ステータス',
    'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_TITLE' => 'ビジネスルール評価',
    'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_BR' => 'ビジネスルール',
    'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_RESPONSE' => 'レスポンス',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TITLE' => 'ユーザー評価',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_USER' => 'アサイン先',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_CURRENT' => '現在のユーザ',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_SUPERVISOR' => 'スーパーバイザー',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_OWNER' => 'レコードオーナー',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_OPERATOR' => 'オペレータ',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ADMIN' => 'は管理者です',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ADMIN_FULL' => '%TARGET% は管理者です',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ROLE' => 'の役割は',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ROLE_FULL' => '%TARGET% の役割は %VALUE% です',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_USER' => 'は、ユーザーの',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_USER_FULL' => '%TARGET% は、ユーザーの %VALUE% です',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ADMIN' => 'は管理者ではありません',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ADMIN_FULL' => '%TARGET% は管理者ではありません',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ROLE' => 'には次の役割はありません',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ROLE_FULL' => '%TARGET% には %VALUE% の役割はありません',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_USER' => 'は、ユーザーの次ではありません',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_USER_FULL' => '%TARGET% は、ユーザーの %VALUE% ではありません',
    'LBL_PMSE_EXPCONTROL_USER_EVALUATION_VALUE' => '値',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_FIXED_DATE' => '固定の日付',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_FIXED_DATETIME' => '固定の日時',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_TITLE' => '間隔',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_AMOUNT' => '値',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_UNIT' => '単位',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_YEARS' => '年',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_MONTHS' => '月',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_WEEKS' => '週',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_DAYS' => '日',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_HOURS' => '時間',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TIMESPAN_MINUTES' => '分',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC' => '文字列/数値/論理値',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_VALUE' => '値',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_STRING' => 'ストリングを追加',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_NUMBER' => '数値を追加',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_BOOLEAN' => 'ブーリアンを追加',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_CURRENCY' => '通貨',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_CURRENCY_CURRENCY' => '通貨',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_CURRENCY_AMOUNT' => '金額',
    'LBL_PMSE_EXPCONTROL_EVALUATIONS_TITLE' => '評価',
    'LBL_PMSE_EXPCONTROL_CONSTANTS_TITLE' => '定数',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_THAN' => 'は次より小さい',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_THAN_DATE' => '以前',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_EQUAL_THAN' => 'は以下より少ないか同じ',
    'LBL_PMSE_EXPCONTROL_OPERATOR_EQUAL' => '次と一致する',
    'LBL_PMSE_EXPCONTROL_OPERATOR_EQUAL_TEXT' => 'は以下である',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_EQUAL' => 'は以下より多いか同じ',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR' => 'は以下より多い',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_DATE' => '以降',

    'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_EQUAL_DATE' => '以降',
    'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_EQUAL_DATE' => '以前',
    'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL' => '次と一致しない',
    'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL_TEXT' => 'は以下ではない',
    'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL_DATE' => '等しくない',

    'LBL_PMSE_FORMPANEL_SUBMIT' => '送信',

    'LBL_PMSE_EMAILPICKER_TEAMS' => 'チーム',
    'LBL_PMSE_EMAILPICKER_USER_CREATED' => 'レコードを作成した %MODULE% のユーザー',
    'LBL_PMSE_EMAILPICKER_USER_LAST_MODIFIED' => 'レコードを最後に変更した %MODULE% のユーザー',
    'LBL_PMSE_EMAILPICKER_USER_IS_ASSIGNED' => 'レコードに割り当てられている %MODULE% のユーザー',
    'LBL_PMSE_EMAILPICKER_USER_WAS_ASSIGNED' => 'レコードに割り当てられた %MODULE% のユーザー',
    'LBL_PMSE_EMAILPICKER_MANAGER_CREATED' => 'レコードを作成した人のマネージャーである %MODULE% のユーザー',
    'LBL_PMSE_EMAILPICKER_MANAGER_LAST_MODIFIED' => 'レコードを最後に修正した人のマネージャーである %MODULE% のユーザー',
    'LBL_PMSE_EMAILPICKER_MANAGER_IS_ASSIGNED' => 'レコードに割り当てられている人のマネージャーである %MODULE% のユーザー',
    'LBL_PMSE_EMAILPICKER_MANAGER_WAS_ASSIGNED' => 'レコードに割り当てられた人のマネージャーである %MODULE% のユーザー',
    'LBL_PMSE_EMAILPICKER_ROLE_ITEM' => '役割: %ROLE%',
    'LBL_PMSE_EMAILPICKER_TEAM_ITEM' => 'チーム: %TEAM%',
    'LBL_PMSE_EMAILPICKER_SUGGESTIONS' => '提案',
    'LBL_PMSE_EMAILPICKER_RESULTS_TITLE' => '%NUMBER% 提案 for "%TEXT%"',
    'LBL_PMSE_EMAILPICKER_USER_RECORD_CREATOR' => 'はレコードを作成しました',
    'LBL_PMSE_EMAILPICKER_USER_LAST_MODIFIER' => 'はレコードを最後に修正しました',
    'LBL_PMSE_EMAILPICKER_USER_IS_ASIGNEE' => 'はレコードに割り当てられています。',

    'LBL_PMSE_UPDATERFIELD_VARIABLES_LIST_TITLE' => '%MODULE%フィールド',
    'LBL_PMSE_UPDATERFIELD_ADD_TEAM' => 'チームの追加',

    //ERRORS ELEMENTS MESSAGE
    'LBL_PMSE_MESSAGE_ERROR_START_EVENT_OUTGOING' => '開始イベントに出力シーケンスフローが必要です',
    'LBL_PMSE_MESSAGE_ERROR_END_EVENT_INCOMING' => '終了イベントは入力シーケンスフローが必要です',
    'LBL_PMSE_MESSAGE_ERROR_INTERMEDIATE_EVENT_INCOMING' => '中間イベントは着信か更にシーケンスフローが必要です',
    'LBL_PMSE_MESSAGE_ERROR_INTERMEDIATE_EVENT_OUTGOING' => '中間イベントは一つの出力シーケンスフローが必要です',
    'LBL_PMSE_MESSAGE_ERROR_BOUNDARY_EVENT_OUTGOING' => '境界イベントはひとつの出力シーケンスフローが必要です',
    'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_INCOMING' => 'アクティビティは入力シーケンスフローが必要です',
    'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_OUTGOING' => 'アクティビティは出力シーケンスフローが必要です',
    'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_SCRIPT_TASK' => 'スクリプト タスクは [Unassigned] とは異なる有効なタイプでなくてはなりません。',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_DIVERGING_INCOMING' => 'ゲートウェイは一つか更に多くの入力シーケンスフローが必要です',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_DIVERGING_OUTGOING' => 'ゲートウェイは二つかそれ以上のシーケンスフローが必要です',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_CONVERGING_INCOMING' => 'ゲートウェイは二つかそれ以上の入力シーケンスフローが必要です',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_CONVERGING_OUTGOING' => 'ゲートウェイは出力シーケンスフローが必要です',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_MIXED_INCOMING' => 'ゲートウェイは二つかそれ以上の入力シーケンスフローが必要です',
    'LBL_PMSE_MESSAGE_ERROR_GATEWAY_MIXED_OUTGOING' => 'ゲートウェイは二つかそれ以上のシーケンスフローが必要です',
    'LBL_PMSE_MESSAGE_ERROR_ANNOTATION' => 'テキスト注釈はアソシエーションラインが必要です',

    'LBL_PMSE_IMPORT_PROCESS_DEFINITION_FAILURE' => 'ファイルからプロセス定義を作成できませんでした。',
    'LBL_PMSE_CANNOT_CONFIGURE_ADD_RELATED_RECORD' => 'このターゲットのモジュールで使用できる関連モジュールはありません',
    'LBL_PMSE_PROJECT_NAME_EMPTY' => 'プロセス定義名は必須フィールドであるため、空白の状態で保存できません。',

    'LBL_PMSE_INVALID_EXPRESSION_SYNTAX' => '無効な式構文',
    'LBL_PMSE_MESSAGE_ERROR_CURRENCIES_MIX' => 'Can&#39;t use two different currencies in the same expression.',
);
