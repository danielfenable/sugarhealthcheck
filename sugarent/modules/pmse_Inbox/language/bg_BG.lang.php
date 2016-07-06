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
  'LBL_ACTIVITY_OWNER' => 'Отговорник на процеса',
  'LBL_ASSIGNED_USER' => 'Отговорник',
  'LBL_CAS_ID' => 'Номер на процеса',
  'LBL_MODULE_NAME' => 'Процеси',
  'LBL_MODULE_NAME_SINGULAR' => 'Процеси',
  'LBL_MODULE_TITLE' => 'Процеси',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 от <strong>%s</strong> Одобрен',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 в <strong>%s</strong> с предявени претенции',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 в  <strong>%s</strong> разпределени на потребител &1',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 от <strong>%s</strong> Отхвърлен',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 в <strong>%s</strong> Маршрутизирани',
  'LBL_PMSE_BUTTON_CANCEL' => 'Отмени',
  'LBL_PMSE_BUTTON_CLEAR' => 'Изчисти',
  'LBL_PMSE_BUTTON_CLOSE' => 'Затвори',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Журнал на Дизайнера на процеси',
  'LBL_PMSE_BUTTON_REFRESH' => 'Обнови',
  'LBL_PMSE_BUTTON_SAVE' => 'Съхрани',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'SugarCRM журнал',
  'LBL_PMSE_CANCEL_MESSAGE' => 'Сигурни ли сте, че желаете да откажете Процес номер #{}?',
  'LBL_PMSE_FILTER' => 'Филтър',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Бележка',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Тип',
  'LBL_PMSE_FORM_LABEL_USER' => 'Потребител',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Избор...',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'Изпълненото действие беше: <span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'Задачата продължава да бъде разпределена.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'с име: &#39;%s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'създадена',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'е създал Процесът # %s',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'в момента има идентификатор (TaskId) %s',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Изпълнена неизвестна задача',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'редактирана',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => 'на Модул %s %s ,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Неизвестна (според потребителски идентификатор:&#39;%s&#39;)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'нерегистрирано действие',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '( не е стартирало )',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'маршрутизиран',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'задачата е била',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'задачата беше',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => 'със Събитието %s',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => 'с входът %s беше оценен и маршрутизиран към следващата задача',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Добави бележки',
  'LBL_PMSE_LABEL_APPROVE' => 'Одобри',
  'LBL_PMSE_LABEL_CANCEL' => 'Отмени',
  'LBL_PMSE_LABEL_CLAIM' => 'Предяване на претенция',
  'LBL_PMSE_LABEL_CURRENT' => 'Текущ',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Текуща дейност',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Крайна дата:',
  'LBL_PMSE_LABEL_EXECUTE' => 'Изпълни',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Очаквано време',
  'LBL_PMSE_LABEL_HISTORY' => 'История',
  'LBL_PMSE_LABEL_NOTES' => 'Покажи бележките',
  'LBL_PMSE_LABEL_OVERDUE' => 'Просрочен',
  'LBL_PMSE_LABEL_PROCESS' => 'Процес',
  'LBL_PMSE_LABEL_REJECT' => 'Отхвърли',
  'LBL_PMSE_LABEL_ROUTE' => 'Маршрутизирай',
  'LBL_PMSE_LABEL_STATUS' => 'Статус',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Без отговорник',
  'LBL_PMSE_MY_PROCESSES' => 'Моите процеси',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Процеси на самооблужване',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Брой грешни цикли',
  'LBL_PMSE_SHOW_PROCESS' => 'Покажи процес',
  'LBL_PMSE_TITLE_HISTORY' => 'История на процеса',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Процес #%s: Текущ статус',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Журнал на Дизайнер на процеси',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Управление на процеси',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Бележки към процеса',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Процеси оставени без надзор',
  'LBL_PMSE_WARNING_CLEAR' => 'Сигурни ли сте, че желаете да изтриете данните в журнала? Данните не могат да бъдат възстановени в последствие.',
  'LBL_PROCESS_DEFINITION_NAME' => 'Име на дефиницията на процеса',
  'LBL_PROCESS_NAME' => 'Име на процеса',
  'LBL_PROCESS_OWNER' => 'Собственик на процеса',
  'LBL_RECORD_NAME' => 'Име на записа',
  'LBL_STATUS_CANCELLED' => 'Отказани процеси',
  'LBL_STATUS_COMPLETED' => 'Приключени процеси',
  'LBL_STATUS_ERROR' => 'Грешки при изпълнение на процеси',
  'LBL_STATUS_IN_PROGRESS' => 'Процеси в процес на изпълнение',
  'LBL_STATUS_TERMINATED' => 'Прекратени процеси',
  'LNK_LIST' => 'Списък с процеси',
);

