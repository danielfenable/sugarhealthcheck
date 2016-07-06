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
  'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
  'LBL_ACCEPT_LINK' => 'Accept Link',
  'LBL_ACCEPT_STATUS' => 'Accept Status',
  'LBL_ACCOUNT_NAME' => 'Account',
  'LBL_ACTIVITIES_REPORTS' => 'Activities Report',
  'LBL_ADD_BUTTON' => 'Add',
  'LBL_ADD_INVITEE' => 'Add Invitees',
  'LBL_ASSIGNED_TO_ID' => 'Assigned User',
  'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
  'LBL_BLANK' => ' ',
  'LBL_CALL' => 'Call:',
  'LBL_CALL_INFORMATION' => 'Overview',
  'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Are you sure you want to remove all recurring records?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
  'LBL_CONTACT_NAME' => 'Contact:',
  'LBL_CREATE_AND_ADD' => 'Create & Add',
  'LBL_CREATE_CONTACT' => 'As Contact',
  'LBL_CREATE_INVITEE' => 'Create an invitee',
  'LBL_CREATE_LEAD' => 'As Lead',
  'LBL_CREATE_MODULE' => 'Log Call',
  'LBL_DATE' => 'Start Date:',
  'LBL_DATE_END' => 'Date End',
  'LBL_DATE_END_ERROR' => 'End date is before start date',
  'LBL_DATE_TIME' => 'Start Date & Time:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Calls',
  'LBL_DEL' => 'Del',
  'LBL_DESCRIPTION' => 'Description:',
  'LBL_DESCRIPTION_INFORMATION' => 'Description Information',
  'LBL_DIRECTION' => 'Direction:',
  'LBL_DURATION' => 'Duration:',
  'LBL_DURATION_HOURS' => 'Duration Hours:',
  'LBL_DURATION_MINUTES' => 'Duration Minutes:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
  'LBL_EMAIL' => 'Email',
  'LBL_EMAIL_REMINDER' => 'Email Reminder',
  'LBL_EMAIL_REMINDER_SENT' => 'Email reminder sent',
  'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
  'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigned User ID',
  'LBL_EXPORT_CREATED_BY' => 'Created By ID',
  'LBL_EXPORT_DATE_START' => 'Start Date and Time',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modified By ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Related To Module',
  'LBL_EXPORT_REMINDER_TIME' => 'Reminder Time (in minutes)',
  'LBL_FIRST_NAME' => 'First Name',
  'LBL_HELP_CREATE' => 'The {{plural_module_name}} module consists of {{calls_singular_module}} records logged by users in your organisation.  {{plural_module_name}} may be in a status of "Scheduled", "Held", or "Canceled". Sugar users as well as contacts and leads may be added as invitees.

To create a {{calls_singular_module}}:
1. Provide values for the fields as desired.
    - Fields marked "Required" must be completed prior to saving.
    - Click "Show More" to expose additional fields if necessary.
2. Add invitees to the {{calls_singular_module}}.
    - Click "Select an Attendee" to add an existing user, contact, or lead to the {{calls_singular_module}}.
    - Click the plus icon to the right of "Select an Attendee" to create a {{calls_singular_module}} attendee as a new Sugar record.
3. Click "Save" to finalise the new record and return to the previous page.
    - Choose "Save and view" to open the new {{calls_singular_module}} in record view.
    - Choose "Save and create new" to immediately create another new {{calls_singular_module}}.',
  'LBL_HELP_RECORD' => 'The {{plural_module_name}} module consists of {{calls_singular_module}} records logged by users in your organisation.  {{plural_module_name}} may be in a status of "Scheduled", "Held", or "Canceled". Sugar users as well as {{contacts_module}} and {{leads_module}} may be added as invitees.

- Edit this record&#39;s fields by clicking an individual field or the Edit button.
- View or modify links to other records in the subpanels by toggling the bottom left pane to "Data View".
- Make and view user comments and record change history in the activity stream by toggling the bottom left pane to "Activity Stream".
- Follow or favorite this record using the icons to the right of the record name.
- Additional actions are available in the dropdown Actions menu to the right of the Edit button.',
  'LBL_HELP_RECORDS' => 'The {{plural_module_name}} module consists of calls logged by users in your organisation. {{plural_module_name}} may be in a status of "Scheduled", "Held", or "Canceled". From this {{plural_module_name}} list view, you can click the "X" icon on any scheduled call&#39;s row in order to mark it as held. Sugar users as well as contacts and leads may be added as invitees. There are various ways you can create calls in Sugar such as via the {{calls_module}} module, {{calendar_module}} module, and import. Users can also schedule calls via the Activities subpanel (for Legacy modules) or Planned Activities dashlet (for Sidecar modules) on related module records (e.g. {{contacts_module}}, {{accounts_module}}, {{leads_module}}, etc.), which automatically creates a relationship between both records. Once the call record is created, you can view and edit information pertaining to the call via the {{plural_module_name}} record view.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINUTES' => '(hours/minutes)',
  'LBL_INVITEE' => 'Invitees',
  'LBL_LAST_NAME' => 'Last Name',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned to',
  'LBL_LIST_CLOSE' => 'Close',
  'LBL_LIST_CONTACT' => 'Contact',
  'LBL_LIST_DATE' => 'Start Date',
  'LBL_LIST_DIRECTION' => 'Direction',
  'LBL_LIST_DURATION' => 'Duration',
  'LBL_LIST_FORM_TITLE' => 'Call List',
  'LBL_LIST_MY_CALLS' => 'My Calls',
  'LBL_LIST_RELATED_TO' => 'Related to',
  'LBL_LIST_RELATED_TO_ID' => 'Related to ID',
  'LBL_LIST_SUBJECT' => 'Subject',
  'LBL_LIST_TIME' => 'Start Time',
  'LBL_LOG_CALL' => 'Log Call',
  'LBL_MEMBER_OF' => 'Member Of',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Calls',
  'LBL_MODULE_NAME_SINGULAR' => 'Call',
  'LBL_MODULE_TITLE' => 'Calls: Home',
  'LBL_NAME' => 'Name',
  'LBL_NEW_FORM_TITLE' => 'Create Appointment',
  'LBL_NO_ACCESS' => 'You have no access to create $module',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Parent ID',
  'LBL_PHONE' => 'Phone',
  'LBL_POPUP_REMINDER_TIME' => 'Popup Reminder Time',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'You scheduled the {{moduleSingularLower}} for {{formatDate date_start}}, but you do not have permission to access it.',
  'LBL_RECORD_SAVED_SUCCESS' => 'You scheduled the {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> for {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Recurrence',
  'LBL_RECURRING_LIMIT_ERROR' => 'This recurring call cannot be scheduled because it exceeds the maximum allowed recurrence of $limit.',
  'LBL_RECURRING_SOURCE' => 'Recurring Source',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Call with {{{this}}}',
  'LBL_RELATED_TO' => 'Related To:',
  'LBL_REMINDER' => 'Reminder:',
  'LBL_REMINDER_EMAIL' => 'Email',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email all invitees',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Reminder Time',
  'LBL_REMINDER_TITLE' => 'Call:',
  'LBL_REMOVE' => 'rem',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',
  'LBL_REPEAT_COUNT' => 'Repeat Count',
  'LBL_REPEAT_DOW' => 'Repeat Dow',
  'LBL_REPEAT_END' => 'End',
  'LBL_REPEAT_END_AFTER' => 'After',
  'LBL_REPEAT_END_BY' => 'By',
  'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
  'LBL_REPEAT_OCCURRENCES' => 'recurrences',
  'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
  'LBL_REPEAT_TYPE' => 'Repeat Type',
  'LBL_REPEAT_UNTIL' => 'Repeat Until',
  'LBL_REVENUELINEITEMS' => 'Revenue Line Items',
  'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
  'LBL_SEARCH_BUTTON' => 'Search',
  'LBL_SEARCH_FORM_TITLE' => 'Call Search',
  'LBL_SELECT_FROM_DROPDOWN' => 'Please make a selection from the Related To dropdown list first.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
  'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites [Alt+I]',
  'LBL_SEND_INVITES' => 'Send Invites',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Subject:',
  'LBL_SYNCED_RECURRING_MSG' => 'This call originated in another system and was synced to Sugar. To make changes, go to the original call within the other system. Changes made in the other system can be synced to this record.',
  'LBL_TIME' => 'Start Time:',
  'LBL_TIME_END' => 'Time End',
  'LBL_USERS_SUBPANEL_TITLE' => 'Users',
  'LNK_CALL_LIST' => 'View Calls',
  'LNK_IMPORT_CALLS' => 'Import Calls',
  'LNK_NEW_ACCOUNT' => 'New Account',
  'LNK_NEW_APPOINTMENT' => 'Create Appointment',
  'LNK_NEW_CALL' => 'Log Call',
  'LNK_NEW_MEETING' => 'Schedule Meeting',
  'LNK_NEW_OPPORTUNITY' => 'New Opportunity',
  'LNK_SELECT_ACCOUNT' => 'Select Account',
  'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
  'NTC_REMOVE_INVITEE' => 'Are you sure you want to remove this invitee from the call?',
  'TPL_CALL_STATUS_CHANGED' => 'Call marked as {{status}}.',
);

