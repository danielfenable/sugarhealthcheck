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
  'ERR_DELETE_RECORD' => 'يجب تحديد رقم السجل لحذف الحساب.',
  'LBL_ACCEPT_LINK' => 'قبول الارتباط',
  'LBL_ACCEPT_STATUS' => 'قبول الحالة',
  'LBL_ACCOUNT_NAME' => 'الحساب',
  'LBL_ACTIVITIES_REPORTS' => 'تقرير الأنشطة',
  'LBL_ADD_BUTTON' => 'إضافة',
  'LBL_ADD_INVITEE' => 'إضافة مدعوين',
  'LBL_ASSIGNED_TO_ID' => 'المستخدم المعين',
  'LBL_ASSIGNED_TO_NAME' => 'تعيين إلى',
  'LBL_BLANK' => ' ',
  'LBL_CALL' => 'المكالمة:',
  'LBL_CALL_INFORMATION' => 'نظرة عامة',
  'LBL_CANCEL_CREATE_INVITEE' => 'إلغاء',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'هل تريد بالتأكيد إزالة جميع السجلات المتكررة؟',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'جهات الاتصال',
  'LBL_CONTACT_NAME' => 'جهة الاتصال:',
  'LBL_CREATE_AND_ADD' => 'إنشاء وإضافة',
  'LBL_CREATE_CONTACT' => 'كجهة اتصال',
  'LBL_CREATE_INVITEE' => 'إنشاء مدعو',
  'LBL_CREATE_LEAD' => 'كعميل متوقع',
  'LBL_CREATE_MODULE' => 'سجل المكالمات',
  'LBL_DATE' => 'تاريخ البدء:',
  'LBL_DATE_END' => 'تاريخ الانتهاء',
  'LBL_DATE_END_ERROR' => 'تاريخ الانتهاء قبل تاريخ البدء',
  'LBL_DATE_TIME' => 'تاريخ ووقت البدء:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'المكالمات',
  'LBL_DEL' => 'حذف',
  'LBL_DESCRIPTION' => 'الوصف:',
  'LBL_DESCRIPTION_INFORMATION' => 'معلومات الوصف',
  'LBL_DIRECTION' => 'الاتجاه:',
  'LBL_DURATION' => 'المدة:',
  'LBL_DURATION_HOURS' => 'المدة بالساعات:',
  'LBL_DURATION_MINUTES' => 'المدة بالدقائق:',
  'LBL_EDIT_ALL_RECURRENCES' => 'تعديل جميع التكرارات',
  'LBL_EMAIL' => 'البريد الإلكتروني',
  'LBL_EMAIL_REMINDER' => 'التذكير بالبريد الإلكتروني',
  'LBL_EMAIL_REMINDER_SENT' => 'تم إرسال التذكير بالبريد الإلكتروني',
  'LBL_EMAIL_REMINDER_TIME' => 'وقت التذكير بالبريد الإلكتروني',
  'LBL_EMPTY_SEARCH_RESULT' => 'معذرة، لم يتم العثور على نتائج. يرجى إنشاء المدعو التالي.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'معرّف المستخدم المعين',
  'LBL_EXPORT_CREATED_BY' => 'تم الإنشاء بواسطة المعرّف',
  'LBL_EXPORT_DATE_START' => 'تاريخ ووقت البدء',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'تم التعديل بواسطة المعرّف',
  'LBL_EXPORT_PARENT_TYPE' => 'الوحدة ذات الصلة',
  'LBL_EXPORT_REMINDER_TIME' => 'وقت التذكير (بالدقائق)',
  'LBL_FIRST_NAME' => 'الاسم الأول',
  'LBL_HELP_CREATE' => 'تتكون الوحدة {{plural_module_name}} من سجلات {{calls_singular_module}} المسجلة من خلال المستخدمين في المنظمة الخاصة بك. قد تكون الوحدة {{plural_module_name}} في حالة "مجدول" أو "معقود" أو "ملغى". يمكن إضافة مستخدمي Sugar وجهات الاتصال والعملاء المحتملين به كمدعوين.
لإنشاء {{calls_singular_module}}:
1. قم بتوفير قيم للحقول حسب الضرورة.
- يجب إكمال الحقول المميزة بكلمة "مطلوب" قبل الحفظ.
- انقر على "إظهار المزيد" لكشف المزيد من الحقول إذا لزم الأمر.
2. قم بإضافة المدعوين إلى {{calls_singular_module}}.
- انقر على "تحديد حاضر" لإضافة مستخدم أو جهة اتصال أو عميل محتمل موجود إلى {{calls_singular_module}}.
- انقر على أيقونة علامة الزائد إلى اليمين من "تحديد حاضر" من أجل إنشاء حاضر {{calls_singular_module}} كسجل جديد في Sugar.
3. انقر على "حفظ" لإنهاء السجل الجديد وللعودة إلى الصفحة السابقة.
- اختر "حفظ وعرض" لفتح {{calls_singular_module}} الجديد في عرض السجل.
- قم بإغلاق "حفظ وإنشاء جديد" من أجل إنشاء {{calls_singular_module}}. أخرى جديدة.',
  'LBL_HELP_RECORD' => 'يتيح عرض هذا السجل من خلال البيانات الخاصة بفرد السجل بجانب بعض تفاصيل السجلات المرتبطة به.

- قم بتعديل حقول هذا السجل (السجلات) بواسطة النقر فوق حقل فردي، أو فوق الزر \\"تحرير\\".
- اعرض أو قم بتعديل الارتباطات إلى سجلات أخرى في اللوحات الفرعية بواسطة تبديل الجزء الأيسر السفلي إلى \\"عرض البيانات\\".
- قم بعمل وعرض تعليقات المستخدم وسجل تغيير السجلات بواسطة تبديل الجزء الأيسر السفلي إلى \\"سير النشاط\\".
- اتبع أو اجعل هذا السجل مفضلاً لديك باستخدام الرموز الموجودة على يمين اسم السجل.
- تتوفر إجراءات إضافية في القائمة المنسدلة \\"الإجراءات\\" الموجودة على يمين الزر \\"تحرير\\".',
  'LBL_HELP_RECORDS' => 'تتكون الوحدة {{plural_module_name}} من سجلات الاتصال التي يمكن أن تحمل حالة "مجدول" أو "معقود" أو "ملغى". تظهر الاتصالات القادمة المجدولة خلال الأربعة وعشرين ساعة القادمة تاريخ البدء المميز باللون الأزرق. يظهر تاريخ البدء في الاتصالات المستحقة باللون الأحمر.

من عرض قائمة {{plural_module_name}} هذا، يمكنك عرض وتحرير معلومات اتصال تحرير مدمج. الإجراءات الإضافية متاحة في القائمة في نهاية كل صف اتصال. يمكنك اختيار "إغلاق" من القائمة في أي صف اتصال مجدول من أجل تمييزه على أنه تم عقده.

يمكن إضافة مستخدمي Sugar وجهات اتصاله والعملاء المحتملون به كمدعوين للاتصال. يمكن إنشاء {{plural_module_name}} من خلال وحدة {{plural_module_name}}، ووحدة التقويم، والاستيراد، بالإضافة إلى اللوحة الفرعية للأنشطة (للوحدات القديمة) أو لوحة معلومات الأنشطة المخطط لها (لوحدات العربات الجانية) حول سجلات الوحدة ذات الصلة ( على سبيل المثال، جهات الاتصال، والحسابات، وما إلى ذلك)، والتي تؤدي بشكل تلقائي إلى إنشاء علاقة بين كلا السجلين.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'ملاحظات',
  'LBL_HOURS_ABBREV' => 'س',
  'LBL_HOURS_MINUTES' => '(ساعات/دقائق)',
  'LBL_INVITEE' => 'المدعوون',
  'LBL_LAST_NAME' => 'الاسم الأخير',
  'LBL_LEADS_SUBPANEL_TITLE' => 'العملاء المتوقعون',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'المستخدم المعين',
  'LBL_LIST_CLOSE' => 'إغلاق',
  'LBL_LIST_CONTACT' => 'جهة الاتصال',
  'LBL_LIST_DATE' => 'تاريخ البدء',
  'LBL_LIST_DIRECTION' => 'الاتجاه',
  'LBL_LIST_DURATION' => 'المدة',
  'LBL_LIST_FORM_TITLE' => 'قائمة المكالمات',
  'LBL_LIST_MY_CALLS' => 'المكالمات الخاصة بي',
  'LBL_LIST_RELATED_TO' => 'مرتبط بـ',
  'LBL_LIST_RELATED_TO_ID' => 'المعرّف ذو الصلة',
  'LBL_LIST_SUBJECT' => 'الموضوع',
  'LBL_LIST_TIME' => 'وقت البدء',
  'LBL_LOG_CALL' => 'سجل المكالمات',
  'LBL_MEMBER_OF' => 'عضو في',
  'LBL_MINSS_ABBREV' => 'دق',
  'LBL_MODULE_NAME' => 'المكالمات',
  'LBL_MODULE_NAME_SINGULAR' => 'المكالمة',
  'LBL_MODULE_TITLE' => 'المكالمات: الصفحة الرئيسية',
  'LBL_MY_SCHEDULED_CALLS' => 'المكالمات المجدولة الخاصة بي',
  'LBL_NAME' => 'الاسم',
  'LBL_NEW_FORM_TITLE' => 'إنشاء موعد',
  'LBL_NO_ACCESS' => 'لا يمكنك الوصول لإنشاء وحدة $',
  'LBL_OUTLOOK_ID' => 'معرّف Outlook',
  'LBL_PARENT_ID' => 'معرّف الأصل',
  'LBL_PHONE' => 'الهاتف',
  'LBL_POPUP_REMINDER_TIME' => 'وقت التذكير المنبثق',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'لقد أنشأت هذا السجل بنجاح، ولكن ليس لديك تصريح بالوصول إليه.',
  'LBL_RECORD_SAVED_SUCCESS' => 'تم إنشاء {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{full_name}}</a> بنجاح.',
  'LBL_RECURRENCE' => 'التكرار',
  'LBL_RECURRING_LIMIT_ERROR' => 'لا يمكن جدولة المكالمة المتكررة لأنها تعدت الحد الأقصى المسموح به للتكرار $.',
  'LBL_RECURRING_SOURCE' => 'المصدر المتكرر',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'الاتصال بـ {{{this}}}',
  'LBL_RELATED_TO' => 'ذو صلة:',
  'LBL_REMINDER' => 'التذكيرات:',
  'LBL_REMINDER_EMAIL' => 'البريد الإلكتروني',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'إرسال بريد إلكتروني لجميع المدعوين',
  'LBL_REMINDER_POPUP' => 'منبثق',
  'LBL_REMINDER_TIME' => 'وقت التذكير',
  'LBL_REMINDER_TITLE' => 'المكالمة:',
  'LBL_REMOVE' => 'تذكير',
  'LBL_REMOVE_ALL_RECURRENCES' => 'حذف جميع التكرارات',
  'LBL_REPEAT_COUNT' => 'عدد التكرارات',
  'LBL_REPEAT_DOW' => 'على',
  'LBL_REPEAT_END' => 'النهاية',
  'LBL_REPEAT_END_AFTER' => 'بعد',
  'LBL_REPEAT_END_BY' => 'بواسطة',
  'LBL_REPEAT_INTERVAL' => 'كل',
  'LBL_REPEAT_OCCURRENCES' => 'التكرارات',
  'LBL_REPEAT_PARENT_ID' => 'تكرار المعرّف الأصل',
  'LBL_REPEAT_TYPE' => 'التكرار',
  'LBL_REPEAT_UNTIL' => 'التكرار حتى',
  'LBL_REVENUELINEITEMS' => 'بنود العائدات',
  'LBL_SCHEDULING_FORM_TITLE' => 'الجدولة',
  'LBL_SEARCH_BUTTON' => 'بحث',
  'LBL_SEARCH_FORM_TITLE' => 'البحث عن المكالمة',
  'LBL_SELECT_FROM_DROPDOWN' => 'يرجى التحديد من القائمة ذات الصلة المنسدلة أولاً.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'حفظ الدعوات وإرسالها',
  'LBL_SEND_BUTTON_TITLE' => 'حفظ الدعوات وإرسالها [Alt+I]',
  'LBL_SEND_INVITES' => 'إرسال دعوات',
  'LBL_STATUS' => 'الحالة:',
  'LBL_SUBJECT' => 'الموضوع:',
  'LBL_SYNCED_RECURRING_MSG' => 'تم إنشاء هذه المكالمة في نظام آخر وتمت مزامنتها إلى Sugar. للتغيير، انتقل إلى المكالمة الأصلية داخل النظام الآخر. ويمكن مزامنة التغييرات التي يتم إجراؤها في النظام الآخر مع هذا السجل.',
  'LBL_TIME' => 'وقت البدء:',
  'LBL_TIME_END' => 'وقت الانتهاء',
  'LBL_USERS_SUBPANEL_TITLE' => 'المستخدمون',
  'LNK_CALL_LIST' => 'عرض المكالمات',
  'LNK_IMPORT_CALLS' => 'استيراد المكالمات',
  'LNK_NEW_ACCOUNT' => 'حساب جديد',
  'LNK_NEW_APPOINTMENT' => 'إنشاء موعد',
  'LNK_NEW_CALL' => 'سجل المكالمات',
  'LNK_NEW_MEETING' => 'جدولة اجتماع',
  'LNK_NEW_OPPORTUNITY' => 'فرصة جديدة',
  'LNK_SELECT_ACCOUNT' => 'تحديد حساب',
  'NOTICE_DURATION_TIME' => 'يجب أن يكون وقت المدة أكبر من 0',
  'NTC_REMOVE_INVITEE' => 'هل تريد بالتأكيد إزالة هذا المدعو من المكالمة؟',
  'TPL_CALL_STATUS_CHANGED' => 'الاتصال بالمعلمة {{status}}.',
);

