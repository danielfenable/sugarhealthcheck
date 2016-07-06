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


$app_strings = array (
  'BorderColor' => 'لون الحد',
  'DATA_TYPE_DUE' => 'تستحق:',
  'DATA_TYPE_MODIFIED' => 'المعدلة:',
  'DATA_TYPE_SENT' => 'المرسلة:',
  'DATA_TYPE_START' => 'البدء:',
  'DEFAULT' => 'الأساسي',
  'ERROR_ACCESS_MODULE' => 'لا يوجد لديك حق الوصول إلى هذه الوحدة.',
  'ERROR_CONNECTOR_CONFIGURE' => 'غير قادر على استرداد البيانات.  قد لا يمكن الوصول إلى الخدمة حاليًا، أو قد تكون إعدادات التهيئة غير صالحة.',
  'ERROR_DATETIME' => 'خطأ. يحتاج هذا الحقل إلى تاريخ صالح.',
  'ERROR_DUPLICATE_EMAIL' => 'خطأ. عنوان البريد الإلكتروني مكرر: {{#each this}}{{this}} {{/each}}',
  'ERROR_EMAIL' => 'خطأ. عنوان البريد الإلكتروني غير صالح: {{#each this}}{{{this}}} {{/each}}',
  'ERROR_EMPTY_LINK_MODULE' => 'يرجى تحديد العلاقة أولاً.',
  'ERROR_EXAMINE_MSG' => '  يُرجى اختبار رسالة الخطأ أدناه:',
  'ERROR_EXCEEDING_OC_LICENSES' => 'يتجاوز عدد العملاء غير المتصلين الذين تم تمكينهم حاليًا العدد المحدد في الترخيص الخاص بك.',
  'ERROR_FIELD_REQUIRED' => 'خطأ. هذا الحقل مطلوب.',
  'ERROR_FULLY_EXPIRED' => 'لقد انتهت صلاحية رخصة شركتك بالنسبة لـ SugarCRM لأكثر من 7 أيام وتحتاج إلى تحديثها. تسجيل الدخول لمسؤولي النظام فقط.',
  'ERROR_IS_AFTER' => 'خطأ. لا يمكن أن يكون تاريخ هذا الحقل قبل تاريخ الحقل {{this}}.',
  'ERROR_IS_BEFORE' => 'خطأ. لا يمكن أن يكون تاريخ هذا الحقل بعد تاريخ الحقل {{this}}.',
  'ERROR_IS_GREATER_THAN' => 'خطأ. يجب أن تكون قيمة هذا الحقل أكبر من {{this}}.',
  'ERROR_IS_LESS_THAN' => 'خطأ. يجب أن تكون قيمة هذا الحقل أقل من {{this}}.',
  'ERROR_LICENSE_EXPIRED' => 'تحتاج رخصة شركتك لـ SugarCRM للتحديث. تسجيل الدخول لمسؤولي النظام فقط.',
  'ERROR_LICENSE_VALIDATION' => 'تحتاج رخصة شركتك لـ SugarCRM إلى تحديث صلاحيتها. تسجيل الدخول لمسؤولي النظام فقط.',
  'ERROR_MAXVALUE' => 'خطأ. أقصى قيمة لهذا الحقل هي {{this}}.',
  'ERROR_MAX_FIELD_LENGTH' => 'خطأ. أقصى طول لهذا الحقل هو {{this}}.',
  'ERROR_MAX_FILESIZE_EXCEEDED' => 'خطأ. المرفق كبير للغاية.',
  'ERROR_MINVALUE' => 'خطأ. أقل قيمة لهذا الحقل هي {{this}}.',
  'ERROR_MIN_FIELD_LENGTH' => 'خطأ. أقل طول لهذا الحقل هو {{this}}.',
  'ERROR_MISSING_COLLECTION_SELECTION' => 'الحقل المطلوب فارغ',
  'ERROR_NOTIFY_OVERRIDE' => 'خطأ: مراقب المورد->إخطار() يتطلب تجاوزه.',
  'ERROR_NO_BEAN' => 'فشل الحصول على حبوب الفول.',
  'ERROR_NO_RECORD' => 'خطأ في استرداد السجل.  قد يتم حذف هذا السجل أو أنك غير مسموح لك بمشاهدته.',
  'ERROR_NUMBER' => 'خطأ. يحتاج هذا الحقل إلى رقم صالح.',
  'ERROR_PRIMARY_EMAIL' => 'خطأ. يجب ضبط عنوان أساسي واحد على الأقل.',
  'ERROR_TYPE_NOT_VALID' => 'خطأ. هذا النوع غير مدعوم.',
  'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'خطأ: غير قادر على استعادة البيانات الخاصة بـ موصل {0}.  قد لا يمكن الوصول إلى الخدمة حاليًا، أو قد تكون إعدادات التهيئة غير صالحة.  رسالة خطأ الموصل: ({1}).',
  'ERROR_UPLOAD_FAILED' => 'خطأ. فشل تحميل الملف.',
  'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'يرجى تحديد فهرس \'key\' في عرض سمة المعلمات بالنسبة لتعريف بيانات التعريف',
  'ERR_AJAX_LOAD' => 'حدث خطأ:',
  'ERR_AJAX_LOAD_FAILURE' => 'هناك خطأ في طلبك، يُرجى المحاولة مرة أخرى لاحقًا.',
  'ERR_AJAX_LOAD_FOOTER' => 'في حالة استمرار هذا الخطأ، يُرجى قيام المسؤول بتعطيل Ajax لهذا النموذج',
  'ERR_BAD_RESPONSE_FROM_SERVER' => 'استجابة سيئة من الخادم',
  'ERR_BLANK_PAGE_NAME' => 'يرجى إدخال اسم صفحة.',
  'ERR_CALENDAR_CANNOT_UPDATE_FROM_CHILD' => 'يجب أن يتم عمل تغييرات التكرار باستخدام أول سجل في السلسلة.',
  'ERR_CANNOT_CREATE_METADATA_FILE' => 'خطأ: الملف[[file]] مفقود.  غير قادر على الإنشاء بسبب عدم العثور على ملف HTML المقابل.',
  'ERR_CANNOT_FIND_MODULE' => 'خطأ: لم يتم العثور على وحدة [module].',
  'ERR_COMPATIBLE_PRECISION_VALUE' => 'قيمة الحقل غير متوافقة مع قيمة الدقة',
  'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'خطأ: لا يتطابق عدد صفيف معلمات الفول مع عدد صفيف النتائج.',
  'ERR_CONNECTOR_NOT_ARRAY' => 'سهم الموصل في {0} تم تعريفه بطريقة غير صحيحة، أو قد يكون فارغًا وتعذر استخدامه.',
  'ERR_CONTACT_TECH_SUPPORT' => 'يرجى الاتصال بالدعم الفني.',
  'ERR_CREATING_FIELDS' => 'خطأ في ملء حقول التفاصيل الإضافية: ',
  'ERR_CREATING_TABLE' => 'خطأ في إنشاء جدول: ',
  'ERR_DATABASE_CONN_DROPPED' => 'خطأ في تنفيذ استعلام. هناك احتمال لإسقاط قاعدة بياناتك الاتصال. يُرجى تحديث هذه الصفحة، قد تحتاج إلى إعادة تشغيل خادم الشبكة الخاص بك.',
  'ERR_DATABSE_RELATIONSHIP_QUERY' => 'خطأ إعداد {0} العلاقة: {1}',
  'ERR_DB_FAIL' => 'عطل بقاعدة البيانات. يرجى الرجوع إلى sugarcrm.log لمزيد من التفاصيل.',
  'ERR_DB_QUERY' => '{0}: فشل الاستعلام: {1}',
  'ERR_DB_VERSION' => 'Sugar CRM {0} ملفات ربما تم استخدامها من خلال قاعدة بياناتA Sugar CRM {1}.',
  'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'لا يمكن للفاصل العشري استخدام نفس الحرف مثل فاصل الآلاف. يُرجى تغيير إحدى القيم.',
  'ERR_DELETE_RECORD' => 'يجب تحديد رقم سجل لإزالة جهة الاتصال.',
  'ERR_DNB_BAL_COMPARISON' => 'خطأ. يجب أن يكون الحد الأدنى أقل من الحد الأعلى',
  'ERR_ELASTIC_TEST_FAILED' => 'فشل الاتصال بخادم Elastic',
  'ERR_ENTER_CONFIRMATION_PASSWORD' => 'يُرجى إدخال تأكيد كلمة المرور الخاصة بك.',
  'ERR_ENTER_NEW_PASSWORD' => 'يُرجى إدخال كلمة مرور جديدة.',
  'ERR_ENTER_OLD_PASSWORD' => 'يُرجى إدخال كلمة المرور الحالية.',
  'ERR_EXISTING_PORTAL_USERNAME' => 'خطأ: اسم البوابة معيَّن بالفعل لجهة اتصال أخرى.',
  'ERR_EXPORT_DISABLED' => 'تم تعطيل التصدير.',
  'ERR_EXPORT_TYPE' => 'خطأ في التصدير ',
  'ERR_EXTERNAL_API_403' => 'رفض التصريح. نوع الملف غير مدعوم.',
  'ERR_EXTERNAL_API_LOTUS_LIVE_CONFLICT' => 'ملف بنفس الاسم يوجد بالفعل في النظام.',
  'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'رمز الوصول إلى OAuth مفقود.',
  'ERR_EXTERNAL_API_SAVE_FAIL' => 'حدث خطأ عند محاولة حفظ الحساب الخارجي.',
  'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'وقع خطأ أثناء التحميل.  يرجى التأكيد على أن الملف الذي تقوم بتحميله غير فارغ.',
  'ERR_FILE_NOT_FOUND' => 'خطأ: تعذر تحميل ملف {0}.  يرجى التحقق من النظام وتصاريح خادم الشبكة.',
  'ERR_FILE_WRITE' => 'خطأ: تعذرت كتابة الملف {0}.  يرجى التحقق من النظام وتصاريح خادم الشبكة.',
  'ERR_GENERIC_SERVER_ERROR' => 'حدث خطأ أثناء الاتصال بالخادم. يُرجى المحاولة مرة أخرى.',
  'ERR_GENERIC_TITLE' => 'خطأ',
  'ERR_GOOGLE_API_415' => 'لا تدعم Google Doc تنسيق الملف الذي قمت بتقديمه.',
  'ERR_HTTP_400_ACTION' => 'العودة إلى الصفحة السابقة.',
  'ERR_HTTP_400_TEXT_LINE1' => 'أرسل المستعرض الخاص بك طلبًا لم يتمكن الخادم من فهمه.',
  'ERR_HTTP_400_TEXT_LINE2' => 'الرجاء الاتصال بمسؤول Sugar للحصول على المزيد من التفاصيل.',
  'ERR_HTTP_400_TITLE' => 'خطأ: طلب غير صالح',
  'ERR_HTTP_400_TYPE' => '400',
  'ERR_HTTP_404_ACTION' => 'العودة إلى الصفحة السابقة.',
  'ERR_HTTP_404_TEXT' => 'الصفحة غير موجودة أو ليس لديك إذن للدخول إلى هذه الصفحة.',
  'ERR_HTTP_404_TITLE' => 'البيانات غير متوفرة',
  'ERR_HTTP_404_TYPE' => '404',
  'ERR_HTTP_500_ACTION' => 'يرجى الاتصال بالدعم الفني.',
  'ERR_HTTP_500_TEXT' => 'هناك خطأ في الخادم.',
  'ERR_HTTP_500_TITLE' => 'HTTP: 500 خطأ في الخادم الداخلي',
  'ERR_HTTP_500_TYPE' => '500',
  'ERR_HTTP_DEFAULT_ACTION' => 'العودة إلى الصفحة السابقة.',
  'ERR_HTTP_DEFAULT_TEXT' => 'خطأ غير معروف.',
  'ERR_HTTP_DEFAULT_TITLE' => 'خطأ غير معروف',
  'ERR_HTTP_DEFAULT_TYPE' => 'غير معروف',
  'ERR_INTERNAL_ERR_MSG' => 'خطأ داخلي',
  'ERR_INVALID_AMOUNT' => 'يرجى إدخال كمية صالحة.',
  'ERR_INVALID_DATE' => 'يرجى إدخال تاريخ صالح.',
  'ERR_INVALID_DATE_FORMAT' => 'يجب أن يكون تنسيق التاريخ: ',
  'ERR_INVALID_DAY' => 'يرجى إدخال يوم صالح.',
  'ERR_INVALID_EMAIL_ADDRESS' => 'عنوان بريد إلكتروني غير صالح.',
  'ERR_INVALID_FILE_REFERENCE' => 'مرجعية الملف غير صالحة',
  'ERR_INVALID_HOUR' => 'يرجى إدخال ساعة صالحة.',
  'ERR_INVALID_MONTH' => 'يرجى إدخال شهر صالح.',
  'ERR_INVALID_REQUIRED_FIELDS' => 'حقل مطلوب غير صالح:',
  'ERR_INVALID_TIME' => 'يرجى إدخال وقت صالح.',
  'ERR_INVALID_VALUE' => 'قيمة غير صالحة:',
  'ERR_INVALID_YEAR' => 'يُرجى إدخال تاريخ مكون من 4 أرقام صالحة.',
  'ERR_LAYOUT_RENDER_MSG' => 'عذرًا! تعذر تقديم أي شيء لك. يرجى المحاولة لاحقًا أو الاتصال بقسم الدعم.',
  'ERR_LAYOUT_RENDER_TITLE' => 'فشل عرض مخطط',
  'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'خطأ: إدخال تعيين مفقود للوحدة.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'حقل مطلوب مفقود:',
  'ERR_MISSING_VARDEF_NAME' => 'تحذير: الحقل [[field]] ليس له إدخال مخطط في ملف [moduleDir] vardefs.php',
  'ERR_MOBILE_BROWSER_FORBIDDEN' => 'محظور.',
  'ERR_MOBILE_BROWSER_INTERNAL_SERVER_ERROR' => 'خطأ داخلي في الخادم.',
  'ERR_MOBILE_BROWSER_NOT_AUTHORIZED' => 'فشلت المصادقة.',
  'ERR_MOBILE_BROWSER_PAGE_NOT_FOUND' => 'لم يتم العثور على المورد المطلوب.',
  'ERR_MOBILE_BROWSER_SERVICE_UNAVAILABLE' => 'الخدمة غير متاحة.',
  'ERR_MOBILE_CONFLICT' => 'قام أحد الأشخاص بتعديل نفس السجل على الخادم. التأكيد على الدمج التلقائي لتغييراتك أو رفضها.',
  'ERR_MOBILE_CONNECTION_FAILED' => 'لا يمكن الوصول إلى الخادم.',
  'ERR_MOBILE_CONNECTION_FAILED_LOGIN' => 'الخادم غير متاح في عنوان URL المتاح.',
  'ERR_MOBILE_EMAIL' => 'خطأ. عنوان البريد الإلكتروني غير صالح.',
  'ERR_MOBILE_FILE_ABORTED' => 'تم رفض عملية القراءة',
  'ERR_MOBILE_FILE_NOT_FOUND' => 'لم يتم العثور على ملف',
  'ERR_MOBILE_FILE_NOT_READABLE' => 'لم تتم قراءة الملف',
  'ERR_MOBILE_FILE_NOT_SUPPORTED' => 'نوع هذا المستند غير مدعوم.',
  'ERR_MOBILE_FILE_PROCESSING' => 'خطأ في معالجة الملف',
  'ERR_MOBILE_FILE_READ' => 'فشلت قراءة الملف',
  'ERR_MOBILE_FILE_SECURITY' => 'الملف مغلق',
  'ERR_MOBILE_FILE_SIZE_LIMIT_EXCEEDED' => 'الملف كبير للغاية. أقصى حجم مسموح به هو {{size}}',
  'ERR_MOBILE_GENERIC_NATIVE_ERROR' => 'حدث خطأ غير متوقع.',
  'ERR_MOBILE_INCOMPATIBLE_CLIENT_VERSION' => 'تطبيقك قديم ولم يعد مطابقًا بأي حال من الأحوال مع مثال {{{brandName}}} المتصل به هل ترغب في تنزيل أحدث إصدار من متجر التطبيقات؟',
  'ERR_MOBILE_INTERNAL' => 'خطأ داخلي ({{{code}}}). يرجى المحاولة مرة أخرى لاحقًا.',
  'ERR_MOBILE_INTERNET_UNAVAILABLE' => 'اتصال الإنترنت غير متاح.',
  'ERR_MOBILE_INVALID_CREDS' => 'اسم مستخدم أو كلمة مرور غير صالحة.',
  'ERR_MOBILE_METADATA_CHANGED' => 'تغيرت تهيئة الخادم.',
  'ERR_MOBILE_METADATA_CHANGED_RELOAD' => 'تغيرت تهيئة الخادم، وإعادة التحميل مطلوبة. متابعة؟',
  'ERR_MOBILE_NOT_AUTHORIZED' => 'غير مسموح بالدخول.',
  'ERR_MOBILE_NOT_FOUND' => 'لم يتم العثور على مورد.',
  'ERR_MOBILE_NOT_FOUND_LOGIN' => 'لم{{{brandName}}} يتم العثور على خادم في عنوان URL المتاح.',
  'ERR_MOBILE_SESSION_EXPIRED' => 'انتهت فترة جلستك.',
  'ERR_MOBILE_SSO_NOT_CONFIGURED' => 'تسجيل SSO غير متاح. تحقق من أن المثيل على Sugar 7.5 أو أحد الإصدارات التالية وأنه تم تكوينه من أجل SSO.',
  'ERR_MOBILE_STORAGE_UNAVAILABLE' => 'ذاكرة تخزين الجهاز غير متاحة',
  'ERR_MOBILE_TIMEOUT' => 'الخادم لا يستجيب.',
  'ERR_MOBILE_TIMEOUT_LOGIN' => 'الخادم لا يستجيب في عنوان URL المتاح.',
  'ERR_MOBILE_UPLOAD' => 'خطأ أثناء تحميل ملف',
  'ERR_MOBILE_VALIDATION' => 'السجل غير صالح',
  'ERR_MOBILE_VIEW_NOT_SUPPORTED' => 'إصدار المحمول لا يدعم هذه الوظيفة. هل ترغب في فتح إصدار سطح المكتب؟',
  'ERR_MONITOR_FILE_MISSING' => 'خطأ: غير قادر على إنشاء مراقب حيث إن ملف بيانات التعريف فارغ أو تعذر العثور على الملف.',
  'ERR_MONITOR_NOT_CONFIGURED' => 'خطأ: لم يوجد مراقب تمت تهيئته للاسم المطلوب',
  'ERR_MSSQL_DB_CONTEXT' => 'تم تغيير مضمون قاعدة البيانات إلى',
  'ERR_MSSQL_WARNING' => 'تحذير:',
  'ERR_NEED_ACTIVE_SESSION' => 'مطلوب جلسة نشطة لتصدير المحتوى.',
  'ERR_NOTHING_SELECTED' => 'يُرجى التحديد قبل المتابعة.',
  'ERR_NOT_ADMIN' => 'دخول غير مسموح به للإدارة.',
  'ERR_NO_DB' => 'تعذر الاتصال بقاعدة البيانات. يرجى الرجوع إلى sugarcrm.log لمزيد من التفاصيل.',
  'ERR_NO_DOCS' => 'لا تتوفر مستندات',
  'ERR_NO_HEADER_ID' => 'هذه الخاصية غير متاحة في هذا الموضوع.',
  'ERR_NO_PRIMARY_TEAM_SPECIFIED' => 'لم يتم تحديد فريق رئيسي',
  'ERR_NO_RECORDS_SELECTED' => 'لم تقم بتحديد أي سجلات.',
  'ERR_NO_SINGLE_QUOTE' => 'تعذر استخدام علامة اقتباس وحيدة من أجل ',
  'ERR_NO_SUCH_FILE' => 'لم يتم العثور على ملف على النظام',
  'ERR_NO_VIEW_ACCESS_ACTION' => 'اتصل بالمسؤول لطلب الوصول.',
  'ERR_NO_VIEW_ACCESS_MSG' => 'اتصل بمسؤول الدعم للحصول على حق الوصول إلى هذا العرض الخاص بالوحدة {0}.',
  'ERR_NO_VIEW_ACCESS_REASON' => 'ليس لديك إذن للوصول إلى هذه الصفحة.',
  'ERR_NO_VIEW_ACCESS_TITLE' => 'تم رفض الوصول',
  'ERR_OFFLINE' => 'خطأ دون الاتصال',
  'ERR_OFFLINE_CLEAN_UP_CONFIRMATION' => 'لم تعد لديك مساحة للتخزين دون اتصال. يُوصى بتنظيف المخزن. هل ترغب في القيام بذلك الآن؟',
  'ERR_OFFLINE_DB_CLEANING_ERROR' => 'فشل تنظيف قاعدة البيانات',
  'ERR_OFFLINE_OUT_OF_SPACE' => 'لم تعد لديك مساحة للتخزين المحلي.',
  'ERR_OFFLINE_PREFETCH_FAILED' => 'فشل الجلب المسبق للسجلات من الخادم',
  'ERR_OFFLINE_SERVERTIME_UNAVAILABLE' => 'فشل الحصول على وقت بالخادم',
  'ERR_OFFLINE_START_FAILED_OUT_OF_SPACE' => 'فشل إنشاء التخزين المحلي: لم تعد لديك مساحة تخزين.',
  'ERR_OFFLINE_STORAGE_CREATE' => 'فشل إنشاء التخزين المحلي',
  'ERR_OFFLINE_STORAGE_UNAVAILABLE' => 'فشل فتح التخزين المحلي',
  'ERR_OFFLINE_SYNC_CONFLICT' => 'مشكلة في المزامنة',
  'ERR_OFFLINE_SYNC_ERROR' => 'خطأ في المزامنة',
  'ERR_OPPORTUNITY_NAME_DUPE' => 'هناك فرصة باسم %s موجودة بالفعل.  يُرجى إدخال اسم آخر أدناه.',
  'ERR_OPPORTUNITY_NAME_MISSING' => 'لم يتم إدخال اسم الفرصة.  يُرجى إدخال اسم فرصة أدناه.',
  'ERR_PASSWORD_MISMATCH' => 'كلمة المرور المدخلة غير مطابقة لكلمة المرور الموجودة في النظام.',
  'ERR_PORTAL_NAME_CHECK' => 'غير قادر على التحقق من أن اسم مستخدم المنفذ فريد',
  'ERR_POTENTIAL_SEGFAULT' => 'تم اكتشاف خطأ تقسيم Apache محتمل.  يُرجى إخطار مسؤول النظام بالتأكيد على هذه المشكلة وقيامه/قيامها بالإبلاغ عنها لـ SugarCRM.',
  'ERR_QUERY_LIMIT' => 'خطأ: حد الاستعلام %حد تم الوصول إليه بالنسبة لوحدة $module.',
  'ERR_QUOTE_CONVERTED' => 'عرض السعر هذا تم تحويله بالفعل إلى فرصة.',
  'ERR_REENTER_PASSWORDS' => 'يجب تطابق كلمات المرور.',
  'ERR_RENDER_FAILED_MSG' => 'فشل تقديم عرض',
  'ERR_RENDER_FAILED_TITLE' => 'فشل عرض التقديم',
  'ERR_RENDER_FIELD_FAILED_MSG' => 'غير قادر على عرض {0} للحقل.',
  'ERR_RENDER_FIELD_FAILED_TITLE' => 'فشل عرض حقل',
  'ERR_RESOLVE_ERRORS' => 'يرجى حل أي أخطاء قبل المتابعة.',
  'ERR_RSS_INVALID_INPUT' => 'RSS ليس نوع إدخال صالح',
  'ERR_RSS_INVALID_RESPONSE' => 'RSS ليس نوع استجابة صالحة لهذه الطريقة',
  'ERR_SELF_REPORTING' => 'يتعذر على المستخدم الإبلاغ له أو لها.',
  'ERR_SERVER_FLAVOR_INCOMPATIBLE' => 'خادم غير مطابق: {{{flavor}}}. المميزات المدعومة: {{{supportedFlavors}}}.',
  'ERR_SERVER_VERSION_INCOMPATIBLE' => 'إصدار الخادم غير مطابق: {{{version}}}. أقل إصدار مطلوب: {{{minVersion}}}.',
  'ERR_SINGLE_QUOTE' => 'استخدام عرض سعر واحد غير مدعوم لهذا الحقل.  يرجى تغيير القيمة.',
  'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'فهرس مفقود في صفيف معلمات الشاشة لـ: ',
  'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'خطأ: هناك عدد غير متساوٍ من الوسائط بالنسبة إلى عناصر \'key\' و \'copy\' في صفيف معلمات الشاشة.',
  'ERR_SQS_NO_MATCH' => 'عدم تطابق',
  'ERR_SQS_NO_MATCH_FIELD' => 'لا يوجد تطابق للحقل: ',
  'ERR_STORE_FILE_MISSING' => 'خطأ: غير قادر على العثور على ملف تطبيق مخزن',
  'ERR_SUHOSIN' => 'منع التحميل من Suhosin، يرجى إضافة &quot;تحميل&quot; إلى suhosin.executor. متضمنًا القائمة البيضاء (لمزيد من المعلومات راجع sugarcrm.log)',
  'ERR_SYNC_FAILED' => 'غير قادر على المزامنة مع الخادم.',
  'ERR_TIMEPERIOD_ALREADY_HAS_LEAVES' => 'هذه الفترة الزمنية بالفعل لها فترات فرعية',
  'ERR_TIMEPERIOD_ALREADY_LEAF' => 'لا يمكن للفترات الزمنية الفرعية أن يكون لها فترات فرعية',
  'ERR_TIMEPERIOD_TYPE_DOES_NOT_EXIST' => 'غير قادر على استعادة أي نوع من الفترات الزمنية: {0}',
  'ERR_TIMEPERIOD_UNDEFINED_FOR_DATE' => 'خطأ الفترة الزمنية غير محدد للتاريخ {0}',
  'ERR_UNDEFINED_METRIC' => 'خطأ: غير قادر على ضبط القيمة لقياس غير محدد',
  'ERR_UW_RETIRED' => 'نافذة التحديث غير متاحة بهذا الإصدار.',
  'ERR_VCARD_FILE_MISSING' => 'ملف vcf مفقود',
  'ERR_VCARD_FILE_PARSE' => 'فشل في تنسيق توزيع vCard',
  'EXCEPTION_ACCESS_MODULE_CONFIG_NOT_AUTHORIZED' => 'غير مصرح للمستخدم الحالي بتغيير {moduleName}إعدادات التهيئة',
  'EXCEPTION_CHANGE_MODULE_CONFIG_NOT_AUTHORIZED' => 'غير مصرح للمستخدم الحالي بتغيير {moduleName}إعدادات التهيئة',
  'EXCEPTION_CLIENT_OUTDATED' => 'برامجك غير محدثة، يرجى تحديث عميلك قبل محاولة الاتصال مجددًا.',
  'EXCEPTION_CLIENT_OUTDATED_DESC' => 'تشير إلى أن استهلاك العميل API غير محدث ويجب تحديثه قبل المزيد من استهلاك API.',
  'EXCEPTION_CONNECTOR_RESPONSE' => 'أدى طلب توصيل أو دمج إلى فشل الاستجابة.',
  'EXCEPTION_CONNECTOR_RESPONSE_DESC' => 'للإشارة إلى فشل أو عدم القدرة على التعامل مع طلب تم عمله من خلال واجهة API إلى خدمة أو نقطة نهاية أو عنوان URI آخر (أخرى) من خلال الخادم.',
  'EXCEPTION_CREATE_MODULE_NOT_AUTHORIZED' => 'غير مصرح لك بإنشاء {moduleName}. اتصل بمسؤول النظام إذا كنت ترغب في الدخول.',
  'EXCEPTION_EDIT_CONFLICT' => 'تحرير مشكلة، يرجى إعادة تحميل البيانات المسجلة.',
  'EXCEPTION_EDIT_CONFLICT_DESC' => 'تشير إلى أن هناك تعديلات حالية تُجرى لسجل وأن الطلب الحالي لتعديل السجل يؤثر على التعديل السابق للسجل.',
  'EXCEPTION_FATAL_ERROR' => 'فشل اكتمال طلبك.  حدث خطأ فادح.  تحقق من السجلات لمزيد من التفاصيل.',
  'EXCEPTION_FATAL_ERROR_DESC' => 'تعذر التعامل مع الطلب كما هو موضح أو أن هناك خطأ في الاستجابة. هذا يعني وقوع خطأ فادح بشكل عام ويمكن تحديد خطأ معيَّن في سجل التطبيق.',
  'EXCEPTION_FAVORITE_MODULE_NOT_AUTHORIZED' => 'غير مصرح لك بتفضيل{moduleName}. اتصل بمسؤول النظام إذا كنت ترغب في الدخول.',
  'EXCEPTION_INACTIVE_PORTAL_USER' => 'لا يمكنك الدخول إلى البوابة بسبب أن حساب البوابة غير نشط. يرجى الاتصال بخدمة العملاء إذا كنت ترغب في الدخول.',
  'EXCEPTION_INACTIVE_PORTAL_USER_DESC' => 'حساب المنفذ المرتبط بالمستخدم قيد الدخول غير نشط حاليًا. هذا يتطلب إجراءً من جانب دعم العملاء.',
  'EXCEPTION_INCORRECT_VERSION_DESC' => 'إصدار API قيد الاستخدام غير صحيح للطلب الحالي.',
  'EXCEPTION_INVALID_PARAMETER' => 'المعلمة المطلوبة الموجودة في طلبك غير صالحة.',
  'EXCEPTION_INVALID_PARAMETER_DESC' => 'تشير إلى إرسال معلم في الطلب غير صالح.',
  'EXCEPTION_INVALID_TOKEN' => 'رمز المصادقة الخاص بك غير صالح.',
  'EXCEPTION_INVALID_TOKEN_DESC' => 'تشير إلى عدم صلاحية رمز المصادقة المقدم مع الطلب. ويحدث ذلك عامةً نتيجة انتهاء صلاحية الرمز ولكن قد يكون السبب أيضًا تشوه الرمز أو أنه غير صحيح.',
  'EXCEPTION_MAINTENANCE' => 'SugarCRM في وضع الصيانة. الدخول لمسؤولي النظام فقط. يرجى الاتصال بمسؤول نظامك لمزيد من التفاصيل.',
  'EXCEPTION_MAINTENANCE_DESC' => 'مثال SugarCRM الذي يخدم API في وضع الصيانة. الدخول إلى API مقتصر على المسؤول فقط.',
  'EXCEPTION_METADATA_CONFLICT' => 'مشكلة في بيانات التعريف، يرجى إعادة تحميل بيانات التعريف.',
  'EXCEPTION_METADATA_OUT_OF_DATE' => 'عدم تطابق بيانات التعريف أو تجزئة المستخدم الخاصة بك مع الخادم. يرجى إعادة تزامن بيانات تعريفك.',
  'EXCEPTION_METADATA_OUT_OF_DATE_DESC' => 'تشير إلى أن بيانات التعريف على الخادم لا تتطابق مع بيانات التعريف التي يستخدمها العميل حاليًا. قد يحدث ذلك بعد تغيير لإعدادات النظام، أو تغييرات للوحدات في الاستوديو، أو توزيع الوحدات الجديدة، بين تغييرات النظام الأخرى.',
  'EXCEPTION_MISSING_PARAMTER' => 'المعلمة المطلوبة غير موجودة في طلبك.',
  'EXCEPTION_MISSING_PARAMTER_DESC' => 'تشير إلى أن المعلمة المطلوبة الخاصة بالطلب مفقودة.',
  'EXCEPTION_NEED_LOGIN' => 'يتعين عليك تسجيل الدخول للقيام بهذا الإجراء.',
  'EXCEPTION_NEED_LOGIN_DESC' => 'تحتاج نقطة النهاية المطلوبة المصادقة ولم يتم التصديق على المستهلك صاحب الطلب حتى الآن.',
  'EXCEPTION_NOT_AUTHORIZED' => 'غير مصرح لك بالقيام بهذا الإجراء. اتصل بمسؤول النظام إذا كنت ترغب في الدخول.',
  'EXCEPTION_NOT_AUTHORIZED_DESC' => 'تشير إلى أن المستهلك صاحب الطلب غير مصدق له للقيام بالإجراء المطلوب.',
  'EXCEPTION_NOT_FOUND' => 'لم يتم العثور على مورد طلبك.  تعذر العثور على معالج للمسار المحدد في الطلب.',
  'EXCEPTION_NOT_FOUND_DESC' => 'تعذر على نقطة النهاية تحديد مكان مورد الطلب أو ليس لديها معالج للطلب.',
  'EXCEPTION_NO_METHOD' => 'طلبك لم يتم دعمه. تعذر العثور على طريقة HTTP لطلبك لهذا المسار.',
  'EXCEPTION_NO_METHOD_DESC' => 'لا تدعم نقطة النهاية نوع طلب HTTP الذي تم عمله. قد يحدث هذا عند عمل طلب POST لنقطة نهاية مخصصة لطلب GET على سبيل المثال.',
  'EXCEPTION_PORTAL_NOT_CONFIGURED' => 'لم تتم تهيئة المنفذ بالشكل السليم.  اتصل بمسؤول المنفذ لطلب المساعدة.',
  'EXCEPTION_PORTAL_NOT_CONFIGURED_DESC' => 'تشير إلى أن تطبيق المنفذ لم تتم تهيئته بالشكل الصحيح ويتعذر استخدامه. هذا يتطلب إجراءً من جانب مسؤول المنفذ.',
  'EXCEPTION_REQUEST_FAILURE' => 'فشل اكتمال طلبك.',
  'EXCEPTION_REQUEST_FAILURE_DESC' => 'فشل اكتمال الطلب.',
  'EXCEPTION_REQUEST_TOO_LARGE' => 'طلبك كبير جدًا للتعامل معه.',
  'EXCEPTION_REQUEST_TOO_LARGE_DESC' => 'الطلب ضخم جدًا للتعامل معه من قبل الخادم.',
  'EXCEPTION_SUBSCRIBE_MODULE_NOT_AUTHORIZED' => 'غير مصرح لك بالاشتراك في{moduleName}. اتصل بمسؤول النظام إذا كنت ترغب في الدخول.',
  'EXCEPTION_UNKNOWN_EXCEPTION' => 'فشل طلبك نتيجة استثناء غير معروف.',
  'EXCEPTION_UNKNOWN_EXCEPTION_DESC' => 'تمت مواجهة حالة نتيجة عطل أو فشل عام. تختلف أسباب هذا الاستثناء ولكن تقع عامةً خارج نطاق استثناء API محدد أكثر.',
  'FATAL_LICENSE_ALTERED' => 'لقد تغيرت رخصتك منذ آخر مرة كانت سارية.',
  'LBL_1_COLUMN' => 'عمود واحد',
  'LBL_2_COLUMN' => 'عمودان',
  'LBL_3_COLUMN' => '3 أعمدة',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'مسح حساب',
  'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'مسح حساب',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'مسح حملة',
  'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'مسح حملة',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'مسح التحديدات',
  'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'مسح التحديدات',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'مسح جهة اتصال',
  'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'مسح جهة اتصال',
  'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'مسح ملف',
  'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'مسح ملف',
  'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'مسح التحديدات',
  'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'مسح التحديدات',
  'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'مسح فريق',
  'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'مسح فريق',
  'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
  'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'مسح مستخدم',
  'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'مسح مستخدم',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'تحديد حساب',
  'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'تحديد حساب',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'تحديد حملة',
  'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'تحديد حملة',
  'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
  'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'تحديد جهة اتصال',
  'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'تحديد جهة اتصال',
  'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
  'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'تحديد ملف',
  'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'تحديد ملف',
  'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
  'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'تحديد فريق',
  'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'تحديد فريق',
  'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
  'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'تحديد مستخدم',
  'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'تحديد مستخدم',
  'LBL_ACCOUNT' => 'الحساب',
  'LBL_ACCOUNTS' => 'الحسابات',
  'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
  'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'عرض الملخص',
  'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'عرض الملخص',
  'LBL_ACTION' => 'الإجراء',
  'LBL_ACTION_CREATE' => 'إنشاء',
  'LBL_ACTION_CREATE_EXPLANATION' => 'تم إنشاء {{module}} "{{name}}"',
  'LBL_ACTION_CREATE_RELATED_EXPLANATION' => 'تم إنشاء {{module}} "{{name}}" بحيث يرتبط بـ {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_DELETE' => 'حذف',
  'LBL_ACTION_DELETE_EXPLANATION' => 'تم حذف {{module}} "{{name}}"',
  'LBL_ACTION_FAVORITE' => 'المفضلة',
  'LBL_ACTION_FAVORITE_EXPLANATION' => 'تمت إضافة {{module}} "{{name}}" إلى المفضلات',
  'LBL_ACTION_FOLLOW' => 'متابعة',
  'LBL_ACTION_FOLLOW_EXPLANATION' => 'تمت متابعة {{module}} "{{name}}"',
  'LBL_ACTION_LINK' => 'الربط',
  'LBL_ACTION_LINK_EXPLANATION' => 'تم ربط {{module}} "{{name}}" بـ {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_UNFAVORITE_EXPLANATION' => 'تم إلغاء إضافة {{module}} "{{name}}" إلى المفضلات',
  'LBL_ACTION_UNFOLLOW_EXPLANATION' => 'تم إلغاء متابعة {{module}} "{{name}}"',
  'LBL_ACTION_UNLINK' => 'إلغاء الربط',
  'LBL_ACTION_UNLINK_EXPLANATION' => 'تم فصل ارتباط {{module}} "{{name}}" عن {{relatedModule}} "{{relatedName}}"',
  'LBL_ACTION_UPDATE' => 'تحديث',
  'LBL_ACTION_UPDATE_EXPLANATION' => 'تم تحديث {{module}} "{{name}}"',
  'LBL_ACTIVE' => 'الجلسة نشطة',
  'LBL_ACTIVE_TASKS_DASHLET' => 'المهام النشطة',
  'LBL_ACTIVE_TASKS_DASHLET_COMPLETE_TASK' => 'كامل',
  'LBL_ACTIVE_TASKS_DASHLET_CONFIRM_CLOSE' => 'هل تريد بالتأكيد وضع علامة {0} كتَم الانتهاء؟',
  'LBL_ACTIVE_TASKS_DASHLET_DESCRIPTION' => 'توضح لوحة معلومات المهام النشطة ما هو واجب الآن، وما هو آتٍ، والمهام المطلوب القيام بها.',
  'LBL_ACTIVE_TASKS_DASHLET_DUE_NOW' => 'الواجب تنفيذها الآن',
  'LBL_ACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL' => 'مهام الفريق',
  'LBL_ACTIVE_TASKS_DASHLET_TODO' => 'المراد القيام بها',
  'LBL_ACTIVE_TASKS_DASHLET_UPCOMING' => 'القادمة',
  'LBL_ACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL' => 'مهامي',
  'LBL_ACTIVITIES' => 'سير النشاط',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
  'LBL_ACTIVITYSTREAM_COMMENT_PLACEHOLDER' => 'أضف تعليقاتك وتعليماتك، اكتب @ لتوضيح المستخدم. اكتب # للإشارة إلى سجل.',
  'LBL_ACTIVITYSTREAM_POST_PLACEHOLDER' => 'اكتب ملاحظة أو اسحب مرفقًا وأسقطه. اكتب @ لذكر المستخدم. اكتب # للإشارة إلى سجل.',
  'LBL_ACTIVITYSTREAM_RELATIVETIME_ON' => 'في',
  'LBL_ACTIVITY_STREAM' => 'سير النشاط',
  'LBL_ACTIVITY_STREAM_DASHLET_DESCRIPTION' => 'عرض قائمة الأنشطة التي تم القيام بها في السجلات ونشر تعليقات.',
  'LBL_ACTIVITY_STREAM_DASHLET_NAME' => 'سير النشاط الخاص بي',
  'LBL_ACTIVITY_STREAM_DISABLED' => 'لم يتم تمكين سير النشاط',
  'LBL_ACTIVITY_STREAM_DISABLED_MODULE' => 'لم يتم تمكين سير النشاط لهذه الوحدة',
  'LBL_ACTIVITY_VIEW_TOUR' => 'جولة لعرض النشاط',
  'LBL_ACTIVTY_STREAM_SHOW_MORE' => 'المزيد من المنشورات...',
  'LBL_ADD' => 'إضافة',
  'LBL_ADDED_DASHLET' => 'تمت إضافة لوحة معلومات Sugar',
  'LBL_ADDING_DASHLET' => 'يتم الآن إضافة لوحة معلومات Sugar....',
  'LBL_ADDITIONAL_DETAILS' => 'تفاصيل إضافية',
  'LBL_ADDITIONAL_DETAILS_CLOSE' => 'إغلاق',
  'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'انقر للغلق',
  'LBL_ADD_ALL_LEAD_FIELDS' => 'إضافة كل الحقول',
  'LBL_ADD_BUTTON' => 'إضافة',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_TITLE' => 'إضافة',
  'LBL_ADD_DASHLETS' => 'إضافة لوحة معلومات',
  'LBL_ADD_DOCUMENT' => 'أضف مستندًا',
  'LBL_ADD_PAGE' => 'إضافة صفحة',
  'LBL_ADD_TO_FAVORITES' => 'إضافة إلى مفضلاتي',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'أضف لقائمة الهدف',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'أضف لقائمة الهدف',
  'LBL_ADMIN' => 'مسؤول',
  'LBL_ADVANCED' => 'خيارات متقدمة',
  'LBL_ADVANCEDSEARCH' => 'بحث متقدم',
  'LBL_ADVANCED_SEARCH' => 'بحث متقدم',
  'LBL_ADV_SEARCH_LNK_KEY' => '8',
  'LBL_AJAX_FAILURE' => 'فشل Ajax',
  'LBL_ALERT_BROWSER_NOT_SUPPORTED' => 'لم يعد إصدار المستعرض الخاص بك مدعومًا، أو ربما تستخدم مستعرضًا غير مدعوم.',
  'LBL_ALERT_BROWSER_SUPPORT' => 'يُوصى باستخدام إصدارات المستعرض التالية:<br />Internet Explorer 9<br />Firefox 22<br />Safari 6<br />Chrome 27',
  'LBL_ALERT_TITLE_ERROR' => 'خطأ:',
  'LBL_ALERT_TITLE_LOADING' => 'جارٍ التحميل',
  'LBL_ALERT_TITLE_NOTICE' => 'إشعار:',
  'LBL_ALERT_TITLE_SUCCESS' => 'نجاح:',
  'LBL_ALERT_TITLE_WARNING' => 'تحذير:',
  'LBL_ALT_ADDRESS' => 'عنوان آخر:',
  'LBL_ALT_ADD_TEAM_ROW' => 'إضافة صف فريق جديد',
  'LBL_ALT_HIDE_OPTIONS' => 'إخفاء الخيارات',
  'LBL_ALT_HOT_KEY' => '',
  'LBL_ALT_INFO' => 'معلومات',
  'LBL_ALT_MOVE_COLUMN_DOWN' => 'انقل الإدخال المحدد لأسفل بترتيب القائمة الموضح',
  'LBL_ALT_MOVE_COLUMN_LEFT' => 'انقل الإدخال المحدد للقائمة على اليسار',
  'LBL_ALT_MOVE_COLUMN_RIGHT' => 'انقل الإدخال المحدد للقائمة على اليمين',
  'LBL_ALT_MOVE_COLUMN_UP' => 'انقل الإدخال المحدد لأعلى بترتيب القائمة الموضح',
  'LBL_ALT_REMOVE_TEAM_ROW' => 'إزالة فريق',
  'LBL_ALT_SHOW_OPTIONS' => 'عرض الخيارات',
  'LBL_ALT_SORT' => 'فرز',
  'LBL_ALT_SORT_ASC' => 'فرز تصاعدي',
  'LBL_ALT_SORT_DESC' => 'فرز تنازلي',
  'LBL_ALT_SPOT_SEARCH' => 'البحث عن بقعة',
  'LBL_AMOUNT_USDOLLAR' => 'المبلغ المحول',
  'LBL_AND' => 'و',
  'LBL_ANNUAL_TIMEPERIOD_FORMAT' => 'سنة {0}',
  'LBL_ARCHIVE' => 'أرشيف',
  'LBL_ARCHIVE_EMAIL' => 'أرشيف البريد الإلكتروني',
  'LBL_ASSIGN' => 'تحديد {{{this}}}',
  'LBL_ASSIGNED_TO' => 'تعيين إلى:',
  'LBL_ASSIGNED_TO_NAME' => 'تعيين إلى',
  'LBL_ASSIGNED_TO_USER' => 'معيَّن للمستخدم',
  'LBL_ASSOC' => 'رابط {{{this}}}',
  'LBL_ASSOC_EXISTING' => 'رابط حالي {{{this}}}',
  'LBL_ASSOC_RELATED_RECORD' => 'ربط السجل الحالي',
  'LBL_AUTH_FAILED' => 'فشلت مصادقة العميل.',
  'LBL_AUTH_FAILED_TITLE' => 'عميل غير صالح',
  'LBL_BACK' => 'للخلف',
  'LBL_BAL' => 'إنشاء قائمة',
  'LBL_BASE_RATE' => 'سعر الأساس',
  'LBL_BASIC' => 'الأساسي',
  'LBL_BASIC_QUICK_SEARCH' => 'بحث...',
  'LBL_BASIC_SEARCH' => 'بحث',
  'LBL_BEFORE' => 'قبل',
  'LBL_BEST' => 'الأفضل',
  'LBL_BEST_ADJUSTED' => 'أفضل (معدل)',
  'LBL_BILLING_ADDRESS' => 'عنوان الفوترة',
  'LBL_BILLING_STREET' => 'الشارع:',
  'LBL_BILL_TO_ACCOUNT' => 'تحرير الفاتورة إلى حساب',
  'LBL_BILL_TO_CONTACT' => 'تحرير الفاتورة إلى جهة اتصال',
  'LBL_BLANK_VALUE' => '<empty>',
  'LBL_BREADCRUMBSTACK_CREATED' => 'تم إنشاء BreadCrumbStack لمعرّف المستخدم {0}',
  'LBL_BROWSER_TITLE' => 'SugarCRM - مصدر مفتوح تجاري CRM',
  'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
  'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'استعراض مستندات',
  'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'استعراض مستندات',
  'LBL_BUGS' => 'الأخطاء',
  'LBL_BY' => 'بواسطة',
  'LBL_Blank' => ' ',
  'LBL_CALENDAR_DURATION' => 'المدة',
  'LBL_CALENDAR_END_DATE' => 'تاريخ الانتهاء',
  'LBL_CALENDAR_EVENT_RESPONSE_ACCEPT' => 'الحضور',
  'LBL_CALENDAR_EVENT_RESPONSE_DECLINE' => 'مرفوض',
  'LBL_CALENDAR_EVENT_RESPONSE_NONE' => 'بلا رد',
  'LBL_CALENDAR_EVENT_RESPONSE_TENTATIVE' => 'مبدئي',
  'LBL_CALENDAR_EVENT_SCHEDULE_UNAVAILABLE' => 'الجدول غير متاح',
  'LBL_CALENDAR_RECURRENCE' => 'التكرار',
  'LBL_CALENDAR_REMINDERS' => 'التذكيرات',
  'LBL_CALENDAR_REPEAT_COUNT' => 'تكرار حالات التكرار',
  'LBL_CALENDAR_REPEAT_DOW' => 'التكرار في أيام الأسبوع',
  'LBL_CALENDAR_REPEAT_INTERVAL' => 'فاصل التكرار',
  'LBL_CALENDAR_REPEAT_TYPE' => 'نوع التكرار',
  'LBL_CALENDAR_REPEAT_UNTIL_DATE' => 'التكرار حتى',
  'LBL_CALENDAR_START_DATE' => 'تاريخ البدء',
  'LBL_CALL' => 'المكالمة',
  'LBL_CALLS' => 'المكالمات',
  'LBL_CALLS_SUBPANEL_TITLE' => 'المكالمات',
  'LBL_CALL_BUTTON' => 'المكالمة',
  'LBL_CAMPAIGN' => 'الحملة:',
  'LBL_CAMPAIGNLOG' => 'سجل الحملة',
  'LBL_CAMPAIGNS' => 'الحملات',
  'LBL_CAMPAIGNS_SEND_QUEUED' => 'إرسال رسائل إلكترونية لحملة في قائمة الانتظار',
  'LBL_CAMPAIGN_CONTACT' => 'الحملات',
  'LBL_CAMPAIGN_ID' => 'معرّف_الحملة',
  'LBL_CANCEL_BUTTON_KEY' => 'l',
  'LBL_CANCEL_BUTTON_LABEL' => 'إلغاء',
  'LBL_CANCEL_BUTTON_LABEL_CONT' => 'للتوقف.',
  'LBL_CANCEL_BUTTON_LABEL_UNSAVED_CONT' => 'للبقاء في الصفحة.',
  'LBL_CANCEL_BUTTON_TITLE' => 'إلغاء',
  'LBL_CANNOT_SEND_PASSWORD' => 'لا يمكن إرسال كلمة المرور',
  'LBL_CAN_NOT_DISABLE_ALL_LANG' => 'لا يمكنك تعطيل كل اللغات.',
  'LBL_CASE' => 'الحالة',
  'LBL_CASES' => 'الحالات',
  'LBL_CASE_SUMMARY_CHART' => 'ملخص الحالة',
  'LBL_CASE_SUMMARY_CHART_DESC' => 'عرض نظرة عامة على الحالات ذات الصلة.',
  'LBL_CHANGE_BUTTON_KEY' => 'G',
  'LBL_CHANGE_BUTTON_LABEL' => 'تغيير',
  'LBL_CHANGE_BUTTON_TITLE' => 'تغيير',
  'LBL_CHANGE_LAYOUT' => 'تغيير المخطط',
  'LBL_CHANGE_PASSWORD' => 'تغيير كلمة المرور',
  'LBL_CHARSET' => 'UTF-8',
  'LBL_CHART' => 'المخطط',
  'LBL_CHART_CONFIG_ALLOW_SCROLLING' => 'السماح بالتمرير',
  'LBL_CHART_CONFIG_BAR_CHART_OPTIONS' => 'خيارات عرض المخطط الشريطي',
  'LBL_CHART_CONFIG_CHART_TYPE' => 'نوع المخطط',
  'LBL_CHART_CONFIG_HIDE_EMPTY_GROUPS' => 'إخفاء المجموعات الفارغة',
  'LBL_CHART_CONFIG_SHOW_TITLE' => 'إظهار العنوان',
  'LBL_CHART_CONFIG_SHOW_XAXIS_LABEL' => 'إظهار تسمية المحور السيني',
  'LBL_CHART_CONFIG_SHOW_YAXIS_LABEL' => 'إظهار تسمية المحور الصادي',
  'LBL_CHART_CONFIG_STACK_DATA' => 'تكديس تسلسل البيانات',
  'LBL_CHART_CONFIG_TICK_DISPLAY' => 'أساليب عرض المؤشر',
  'LBL_CHART_CONFIG_TICK_ROTATE' => 'إدارة المؤشرات',
  'LBL_CHART_CONFIG_TICK_STAGGER' => 'مؤشرات مخطط Stagger',
  'LBL_CHART_CONFIG_TICK_WRAP' => 'التفاف المؤشرات',
  'LBL_CHART_CONFIG_VALUE_PLACEMENT' => 'تحديد وضع قيمة المخطط الشريطي',
  'LBL_CHART_CONTROLS_CLOSE' => 'إخفاء أدوات التحكم',
  'LBL_CHART_CONTROLS_OPEN' => 'عرض أدوات التحكم',
  'LBL_CHART_LEGEND_CLOSE' => 'إخفاء وسيلة الإيضاح',
  'LBL_CHART_LEGEND_OPEN' => 'عرض وسيلة الإيضاح',
  'LBL_CHART_NO_DATA' => 'لا تتوفر بيانات.',
  'LBL_CHART_UNDEFINED' => 'غير محدد',
  'LBL_CHECKALL' => 'فحص الكل',
  'LBL_CHOOSE_ITEMS' => 'اختيار عناصر',
  'LBL_CHOOSE_LINK' => 'اختيار نوع الرابط',
  'LBL_CHOOSE_MONTH' => 'اختيار شهر',
  'LBL_CHOOSE_PARENT_TYPE' => 'اختيار نوع الأصل',
  'LBL_CITY' => 'المدينة',
  'LBL_CLEARALL' => 'مسح الكل',
  'LBL_CLEAR_BUTTON_KEY' => 'C',
  'LBL_CLEAR_BUTTON_LABEL' => 'مسح',
  'LBL_CLEAR_BUTTON_TITLE' => 'مسح',
  'LBL_CLICK_HERE' => 'انقر هنا',
  'LBL_CLICK_TO_DRILLDOWN' => 'انقر للانتقال التفصيلي',
  'LBL_CLIENT_IP' => 'عنوان IP العميل',
  'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
  'LBL_CLOSEALL_BUTTON_LABEL' => 'إغلاق الكل',
  'LBL_CLOSEALL_BUTTON_TITLE' => 'إغلاق الكل',
  'LBL_CLOSEINLINE' => 'إغلاق',
  'LBL_CLOSE_ACTIVITY_CONFIRM' => 'هل ترغب في غلق هذا #النموذج#؟',
  'LBL_CLOSE_ACTIVITY_HEADER' => 'تأكيد',
  'LBL_CLOSE_ACTIVITY_REMEMBER' => 'لا تعرض هذه الرسالة في المستقبل: &nbsp;',
  'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
  'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'إغلاق وإنشاء جديد',
  'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'إغلاق وإنشاء جديد',
  'LBL_CLOSE_BUTTON_KEY' => 'Q',
  'LBL_CLOSE_BUTTON_LABEL' => 'إغلاق',
  'LBL_CLOSE_BUTTON_TITLE' => 'إغلاق',
  'LBL_CLOSE_DASHLETS' => 'إغلاق',
  'LBL_CLOSE_SAVE_BUTTON' => 'إغلاق المهمة والحفظ',
  'LBL_CLOSE_WINDOW' => 'إغلاق النافذة',
  'LBL_COFIGURE_PORTAL_THEME' => 'تهيئة موضوع البوابة',
  'LBL_COLLAPSE_ALL' => 'طي الكل',
  'LBL_COLLECTION_EXACT' => 'بالضبط',
  'LBL_COLLECTION_NAME' => 'الاسم',
  'LBL_COLLECTION_PRIMARY' => 'أساسي',
  'LBL_COLORS' => 'الألوان',
  'LBL_COLUMNS' => 'الأعمدة',
  'LBL_COLUMNS_CAN_BE_DISPLAYED' => ' يمكن عرض الأعمدة.',
  'LBL_COMMENT' => 'التعليق',
  'LBL_COMPANY_LOGO' => 'شعار الشركة',
  'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
  'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'إنشاء بريد إلكتروني',
  'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'إنشاء بريد إلكتروني',
  'LBL_CONFIGURE_TWITTER' => 'اتصل بالمسؤول لتهيئة Twitter',
  'LBL_CONFIG_BLOCKED_DESC_CONFIG_ACCESS' => 'يجب إصلاح إعدادات قاعدة البيانات لـ {{module}}',
  'LBL_CONFIG_BLOCKED_DESC_MODULE_ACCESS' => 'لا يمتلك المستخدم القدرة على الوصول لتكوين إعدادات {{module}}',
  'LBL_CONFIG_BLOCKED_DESC_NO_CONFIG_METADATA' => 'لا توجد أي إعدادات تكوين لـ {{module}}',
  'LBL_CONFIG_BLOCKED_DESC_USER_ACCESS' => 'لا يمتلك المستخدمون القدرة على الوصول إلى {{module}}',
  'LBL_CONFIG_BLOCKED_TITLE' => 'خطأ تكوين {{module}}',
  'LBL_CONFIG_MODULE_SETTINGS_SAVED' => 'تم حفظ إعدادات تكوين {{module}}.',
  'LBL_CONFIG_TITLE_MODULE_SETTINGS' => 'إعدادات {{module}}',
  'LBL_CONFIRM' => 'تأكيد',
  'LBL_CONFIRM_BUTTON_LABEL' => 'تأكيد',
  'LBL_CONFIRM_BUTTON_LABEL_CONT' => 'للمتابعة.',
  'LBL_CONFIRM_BUTTON_LABEL_UNSAVED_CONT' => 'لترك الصفحة وتجاهل التغييرات.',
  'LBL_CONNECTORS_POPUPS' => 'الرسائل المنبثقة للموصلات',
  'LBL_CONNECT_TEST_FAIL' => 'خطأ: قد تكون إعدادات الموصل غير صالحة. يُرجى الاتصال بالمسؤول الخاص بك.',
  'LBL_CONNECT_TWITTER' => 'الاتصال بـ Twitter',
  'LBL_CONNECT_TWITTER_FOR_ADMIN' => 'تهيئة موصل Twitter',
  'LBL_CONTACT' => 'جهة الاتصال',
  'LBL_CONTACTS' => 'جهات الاتصال',
  'LBL_CONTACT_EDIT_PASSWORD_LNK_TEXT' => 'تغيير كلمة المرور',
  'LBL_CONTACT_LIST' => 'قائمة جهات الاتصال',
  'LBL_CONTEXTUAL_SHORTCUTS' => 'اختصارات سياقية',
  'LBL_CONTRACTS' => 'العقود',
  'LBL_COPYRIGHT' => 'Copyright © 2004-2014 SugarCRM Inc. جميع الحقوق محفوظة.',
  'LBL_COPY_ADDRESS_FROM_LEFT' => 'انسخ العنوان من اليسار:',
  'LBL_COUNTRY' => 'البلد:',
  'LBL_CREATED' => 'تم الإنشاء بواسطة',
  'LBL_CREATED_BY_USER' => 'تم الإنشاء بواسطة المستخدم',
  'LBL_CREATED_ID' => 'تم الإنشاء بواسطة المعرّف',
  'LBL_CREATED_USER' => 'تم الإنشاء بواسطة المستخدم',
  'LBL_CREATE_ATTACHMENT' => 'إنشاء مرفق',
  'LBL_CREATE_BUG' => 'إنشاء خطأ',
  'LBL_CREATE_BUTTON_LABEL' => 'إنشاء',
  'LBL_CREATE_CASE' => 'إنشاء حالة',
  'LBL_CREATE_CONTACT' => 'إنشاء جهة اتصال',
  'LBL_CREATE_KB_DOCUMENT' => 'إنشاء مقالة',
  'LBL_CREATE_LINK_BUTTON_LABEL' => 'إنشاء وربط سجل',
  'LBL_CREATE_LINK_RECORD' => 'إنشاء وربط سجل',
  'LBL_CREATE_MODULE' => 'إنشاء {{{this}}}',
  'LBL_CREATE_NEW_TARGET_LIST' => 'إنشاء قائمة أهداف جديدة',
  'LBL_CREATE_NOTE' => 'إنشاء ملاحظة',
  'LBL_CREATE_OPPORTUNITY' => 'إنشاء فرصة',
  'LBL_CREATE_RELATED' => 'إنشاء ذي الصلة {{{this}}}',
  'LBL_CREATE_RELATED_RECORD' => 'إنشاء سجل ذي صلة',
  'LBL_CREATE_TASK' => 'إنشاء مهمة',
  'LBL_CREATING_NEW_PAGE' => 'يتم الآن إنشاء صفحة جديدة...',
  'LBL_CURRENCIES' => 'العملات',
  'LBL_CURRENCY' => 'العملة:',
  'LBL_CURRENCY_ID' => 'معرّف العملة',
  'LBL_CURRENCY_NAME' => 'اسم العملة',
  'LBL_CURRENCY_RATE' => 'معدل أساسي:',
  'LBL_CURRENCY_SYMBOL' => 'رمز العملة',
  'LBL_CURRENT_PASSWORD' => 'كلمة المرور الحالية',
  'LBL_CURRENT_TIMEPERIOD' => 'فترة زمنية حالية',
  'LBL_CURRENT_USER_FILTER' => 'العناصر الخاصة بي:',
  'LBL_DASHBOARD_BWC' => 'لوحة المعلومات القديمة الخاصة بي',
  'LBL_DASHBOARD_NO_RECORDS' => 'لا توجد لوحات معلومات محفوظة',
  'LBL_DASHBOARD_TOGGLE' => 'فتح/إغلاق لوحة المعلومات',
  'LBL_DASHLET' => 'لوحة المعلومات',
  'LBL_DASHLET_ATTACHMENTS_DESCRIPTION' => 'ملاحظات ومرفقات تخص السجل',
  'LBL_DASHLET_ATTACHMENTS_NAME' => 'ملاحظات ومرفقات',
  'LBL_DASHLET_CASESSUMMARY_CLOSE_CASES' => 'الحالات المغلقة',
  'LBL_DASHLET_CASESSUMMARY_OPEN_CASES' => 'الحالات المفتوحة',
  'LBL_DASHLET_CASESSUMMARY_SUMMARY' => 'الملخص',
  'LBL_DASHLET_CASES_SUMMARY_NAME' => 'ملخص الحالة',
  'LBL_DASHLET_CLOSE' => 'إغلاق',
  'LBL_DASHLET_COMPANY_INFO' => 'D&B: استيراد وتحسين',
  'LBL_DASHLET_COMPANY_INFO_DESC' => 'تحسين الحساب الحالي باستخدام بيانات D&B. يتطلب الاشتراك في D&B.',
  'LBL_DASHLET_COMPANY_INFO_LONG_DESC' => 'احتفظ ببيانات حسابك محدثةً باستخدام خاصية استيراد وتحسين D&B.',
  'LBL_DASHLET_CONFIGURE' => 'تهيئة',
  'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'تحديث تلقائي',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'عرض الصفوف',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'عوامل التصفية',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'عام',
  'LBL_DASHLET_CONFIGURE_INTELLIGENT' => 'مرتبط بالسجل الحالي',
  'LBL_DASHLET_CONFIGURE_LINKED' => 'حقل مربوط',
  'LBL_DASHLET_CONFIGURE_MY_FAVORITES_ONLY' => 'مفضلاتي فقط',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'العناصر الخاصة بي فقط',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'العنوان',
  'LBL_DASHLET_CONFIG_EDIT_LABEL' => 'تحرير',
  'LBL_DASHLET_COUNTRY_CHART_DESCRIPTION' => 'عرض مخطط المبيعات حسب خريطة البلاد.',
  'LBL_DASHLET_COUNTRY_CHART_NAME' => 'المبيعات حسب البلد',
  'LBL_DASHLET_DROP_HERE' => 'الإسقاط هنا',
  'LBL_DASHLET_FORECASTS_CHART_DESC' => 'عرض مخطط شريطي للتنبؤ لفترة زمنية محددة',
  'LBL_DASHLET_FORECASTS_CHART_NAME' => 'المخطط الشريطي للتنبؤ',
  'LBL_DASHLET_FORECASTS_DATASET' => 'ضبط البيانات',
  'LBL_DASHLET_FORECASTS_DETAILS' => 'تفاصيل التنبؤ',
  'LBL_DASHLET_FORECASTS_DETAILS_DESC' => 'عرض تفاصيل التنبؤ الحالية.',
  'LBL_DASHLET_FORECASTS_FOR_CHART_NAME' => 'التنبؤ بـ',
  'LBL_DASHLET_FORECASTS_GROUPBY' => 'مجموعة حسب',
  'LBL_DASHLET_FORECAST_NAME' => 'ضمن التنبؤ',
  'LBL_DASHLET_FORECAST_PARETO_CHART_NAME' => 'المخطط الشريطي للتنبؤ',
  'LBL_DASHLET_ITERACTIONS_NAME' => 'التفاعلات',
  'LBL_DASHLET_LISTVIEW_DESCRIPTION' => 'سجلات القوائم من وحدة معينة وفقًا للمعيار الذي تحدده.',
  'LBL_DASHLET_LISTVIEW_NAME' => 'طريقة عرض القائمة',
  'LBL_DASHLET_MAXIMIZE' => 'فتح',
  'LBL_DASHLET_MAXIMIZE_ALL' => 'فتح الكل',
  'LBL_DASHLET_MINIMIZE' => 'إغلاق',
  'LBL_DASHLET_MINIMIZE_ALL' => 'إغلاق الكل',
  'LBL_DASHLET_MODULE_UNAVAILABLE' => 'البيانات غير متوفرة. لا يوجد لديك حق الوصول إلى هذه الوحدة. 
يُرجى تحديث منفذ المعلومات هذا أو إزالته.',
  'LBL_DASHLET_MOVE' => 'نقل',
  'LBL_DASHLET_NEWS_DESCRIPTION' => 'موجز أخبار Google للحساب المرتبط',
  'LBL_DASHLET_NEWS_FEED_NAME' => 'موجز الأخبار',
  'LBL_DASHLET_NEWS_NAME' => 'أخبار',
  'LBL_DASHLET_NO_RECORDS' => 'لم يتم العثور على سجلات في هذه الفترة.',
  'LBL_DASHLET_OPPORTUNITY_DESCRIPTION' => 'قياسات الفرص للحساب المرتبط.  يتطلب الاشتراك في D&B.',
  'LBL_DASHLET_OPPORTUNITY_NAME' => 'قياسات الفرص',
  'LBL_DASHLET_PIPLINE_NAME' => 'خط الأنابيب',
  'LBL_DASHLET_RECENT_TWEETS_SUGARCRM_NAME' => 'التغريدات الأخيرة - @{{twitter}}',
  'LBL_DASHLET_REFRESH' => 'تحديث',
  'LBL_DASHLET_REFRESH_LABEL' => 'تحديث',
  'LBL_DASHLET_REMOVE_LABEL' => 'إزالة',
  'LBL_DASHLET_SAVED_REPORTS_CHART' => 'لوحة مخطط التقارير المحفوظة',
  'LBL_DASHLET_SAVED_REPORTS_CHART_DESC' => 'عرض أي مخطط من تقرير محفوظ.',
  'LBL_DASHLET_TOGGLE' => 'فتح/إغلاق',
  'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'أعلى 10 فرص مبيعات',
  'LBL_DATA_VIEW' => 'عرض البيانات',
  'LBL_DATE' => 'التاريخ',
  'LBL_DATE_ENTERED' => 'تاريخ الإنشاء:',
  'LBL_DATE_LAST_ACTION' => 'تاريخ آخر إجراء',
  'LBL_DATE_MODIFIED' => 'تاريخ التعديل:',
  'LBL_DATE_START' => 'تاريخ البدء',
  'LBL_DB_ROUND_TRIPS' => 'أزمنة انتقال قاعدة البيانات',
  'LBL_DEFAULT_DASHBOARD_TITLE' => 'لوحة المعلومات الخاصة بي',
  'LBL_DEFAULT_HELP_DASHBOARD_TITLE' => 'تعليمات لوحة المعلومات',
  'LBL_DEFAULT_HELP_DASHLET_DESC' => 'يتيح تعليمات لوحة المعلومات الوحدة وعرض تعليمات معينة.',
  'LBL_DEFAULT_HELP_DASHLET_TITLE' => 'تعليمات لوحة المعلومات',
  'LBL_DEFAULT_LINK_TEXT' => 'نص الارتباط الافتراضي.',
  'LBL_DELETE' => 'حذف',
  'LBL_DELETED' => 'تم الحذف',
  'LBL_DELETE_BUTTON' => 'حذف',
  'LBL_DELETE_BUTTON_KEY' => 'D',
  'LBL_DELETE_BUTTON_LABEL' => 'حذف',
  'LBL_DELETE_BUTTON_TITLE' => 'حذف',
  'LBL_DELETE_FILTER_CONFIRMATION' => 'ستتم إزالة عامل التصفية هذا من كل العروض، وقد يشمل ذلك تهيئة البيانات للشرط. هل تريد بالتأكيد حذف عامل التصفية هذا؟',
  'LBL_DELETE_INLINE' => 'حذف',
  'LBL_DELETE_PAGE' => 'حذف صفحة',
  'LBL_DELETE_PAGE_CONFIRM' => 'هل تريد بالتأكيد حذف هذه الصفحة؟',
  'LBL_DELETING' => 'يتم الآن الحذف...',
  'LBL_DESCRIPTION' => 'الوصف',
  'LBL_DETAILVIEW' => 'عرض التفاصيل',
  'LBL_DETAILVIEW_NO_RECORDS' => 'تعذرت استعادة هذا السجل في هذا التوقيت.',
  'LBL_DIRECT_REPORTS' => 'التقارير المباشرة',
  'LBL_DISPLAY_COLUMNS' => 'عرض الأعمدة',
  'LBL_DISPLAY_LOG' => 'سجل العرض',
  'LBL_DNB_ACC_CRT' => 'إنشاء حساب D&B',
  'LBL_DNB_ACC_CRT_DESC' => 'إنشاء حسابات باستخدام D&B. يتطلب الاشتراك في D&B.',
  'LBL_DNB_ACT_OPER' => 'الأنشطة والعمليات',
  'LBL_DNB_ACT_OPER_DESC' => 'تسجيل وصف العمليات المستمرة من قبل العمل وتتضمن معلومات السوق، مثل عدد العملاء، وتفاصيل الوكالة، وتفاصيل الاستيراد/التصدير',
  'LBL_DNB_ADDRESS' => 'العنوان',
  'LBL_DNB_ADDRESS_TENURE_DETAILS' => 'تفاصيل امتلاك العنوان',
  'LBL_DNB_ADMIN_CONFIG' => 'تهيئة وصلة D&B',
  'LBL_DNB_AGENT_IND' => 'مؤشر العميل',
  'LBL_DNB_AGENT_INDICATOR' => 'مؤشر العميل',
  'LBL_DNB_AGENT_IND_DESC' => 'عندما تكون "صواب"(معيَّن على 1) فهي تشير إلى أن الموضوع يمثل عاملاً محفزًا لترويج السلع أو الخدمات لمنظمة أخرى مثال عامل المبيعات أو عامل المشتريات',
  'LBL_DNB_AIRPRT_DISADV_ENT' => 'مؤشر شركة امتياز مطار بلا مميزات',
  'LBL_DNB_AIRPRT_DISADV_ENT_DESC' => 'تشير القيمة TRUE إلى اعتبار العمل صاحب امتياز في أحد مطارات البلد ويلبي متطلبات مصداقية الملكية كما هو منصوص عليها في اللوائح الموضحة في 49 CFR الجزء 23',
  'LBL_DNB_ALASNAT_IND' => 'مؤشر من ألاسكا',
  'LBL_DNB_ALASNAT_IND_DESC' => 'تشير القيمة TRUE إلى أن القبيلة هي شركة وطنية في ألاسكا',
  'LBL_DNB_AND' => 'و',
  'LBL_DNB_ANNUAL_SALES_US_DOLLAR' => 'المبيعات السنوية',
  'LBL_DNB_API_ERR' => 'خطأ في خدمة API بD&B',
  'LBL_DNB_ASSESMENT' => 'تقييم D&B',
  'LBL_DNB_ASSESMENT_DESC' => 'تسجيل بيانات القيم المضافة والثاقبة عن المنظمة، مثل - توصيات عن حجم الائتمان المسموح لهم به، - وتقييمات السيولة، - والتقييمات الخاصة بالأداء والسلوكيات، - وتنبؤات مخاطر القيام بالأعمال معهم. النقاط المستقبلية يتم احتسابها وتحديدها من قبل D&B، ولكن مثل هذه التقييمات قد يتم تسجيلها أيضًا عند تخصيصها من أطراف خارجية.',
  'LBL_DNB_ASSESMENT_TYPE_VALUE' => 'قيمة نوع التقييم',
  'LBL_DNB_ASSESMENT_VALUE' => 'قيمة التقييم',
  'LBL_DNB_ASSESSMENT' => 'تقييم',
  'LBL_DNB_ASSIGNMENT_METHOD_TEXT' => 'نص أسلوب التعيين',
  'LBL_DNB_ASSOCIATE' => 'الشريك',
  'LBL_DNB_BACK_TO_IMPORT_ENRICH' => 'العودة إلى استيراد وتحسين',
  'LBL_DNB_BACK_TO_SRCH' => 'العودة إلى نتائج البحث في D&B',
  'LBL_DNB_BAL' => 'إنشاء قائمة لD&B',
  'LBL_DNB_BAL_ACCT_HEADER' => 'الحسابات',
  'LBL_DNB_BAL_AFTER' => 'بعد',
  'LBL_DNB_BAL_ALL_SITE' => 'جميع المواقع',
  'LBL_DNB_BAL_AREA_CODE' => 'رمز المنطقة',
  'LBL_DNB_BAL_ASSETS' => 'الأصول',
  'LBL_DNB_BAL_BEFORE' => 'قبل',
  'LBL_DNB_BAL_BIO' => 'حيوي',
  'LBL_DNB_BAL_BOTH' => 'كلاهما',
  'LBL_DNB_BAL_BTW' => 'بين',
  'LBL_DNB_BAL_DISTANCE' => 'المسافة',
  'LBL_DNB_BAL_DUNS' => 'DUNS',
  'LBL_DNB_BAL_FILING_DATE' => 'تاريخ الملء',
  'LBL_DNB_BAL_FINANCIAL_INFO' => 'البيانات المالية',
  'LBL_DNB_BAL_GTE' => 'أكبر من أو يساوي',
  'LBL_DNB_BAL_HIGH' => 'عالٍ',
  'LBL_DNB_BAL_HINT' => 'اختر معيارًا لإنشاء قائمة',
  'LBL_DNB_BAL_IMPORT_AS' => 'استيراد كـ:',
  'LBL_DNB_BAL_INDUSTRY' => 'الصناعة',
  'LBL_DNB_BAL_INDUSTRY_WARN' => 'تغيير أنواع الصناعة سيمسح معايير الصناعة المحددة مسبقًا. هل ترغب في تغيير نوع رمز الصناعة؟',
  'LBL_DNB_BAL_IND_CODE_TYPE' => 'نوع رمز الصناعة',
  'LBL_DNB_BAL_IND_CODE_TYPE_PRI_SEC' => 'يتضمن أساسي/ثانوي',
  'LBL_DNB_BAL_IPO_DATA' => 'بيانات IPO',
  'LBL_DNB_BAL_IPO_OFFER_AMT' => 'مقدار عرض IPO',
  'LBL_DNB_BAL_IPO_PRICE_RANGE' => 'نطاق سعر IPO',
  'LBL_DNB_BAL_JOBCD_PH' => 'تحديد مهمة عمل',
  'LBL_DNB_BAL_KM' => 'كم',
  'LBL_DNB_BAL_LIST' => 'العودة إلى نتائج إنشاء قائمة D&B',
  'LBL_DNB_BAL_LOAD' => 'إنشاء قائمة',
  'LBL_DNB_BAL_LOW' => 'منخفض',
  'LBL_DNB_BAL_LTE' => 'أقل من أو يساوي',
  'LBL_DNB_BAL_MED' => 'متوسط',
  'LBL_DNB_BAL_MILES' => 'أميال',
  'LBL_DNB_BAL_NAICS' => 'رمز NAICS',
  'LBL_DNB_BAL_NET_INCOME' => 'الدخل الصافي',
  'LBL_DNB_BAL_NET_INCOME_GROWTH' => 'نمو الدخل الصافي',
  'LBL_DNB_BAL_ORG_ID' => '# تعريف المنظمة',
  'LBL_DNB_BAL_ORG_NAME' => 'اسم الشركة',
  'LBL_DNB_BAL_PARAM_ANNL_SALES' => 'المبيعات السنوية',
  'LBL_DNB_BAL_PARAM_COMP' => 'موقع الشركة',
  'LBL_DNB_BAL_PARAM_COMP_INFORMATION' => 'معلومات الشركة',
  'LBL_DNB_BAL_PARAM_COMP_SZ' => 'حجم الشركة',
  'LBL_DNB_BAL_PARAM_EMP_CNT' => 'عدد الموظفين',
  'LBL_DNB_BAL_PARAM_EMP_GRWT' => 'نسبة نمو الموظف الكلية',
  'LBL_DNB_BAL_PARAM_EMP_GRWTH' => 'نسبة نمو الموظف الكلية',
  'LBL_DNB_BAL_PARAM_JOB_FN' => 'مهمة عمل',
  'LBL_DNB_BAL_PARAM_KEYWORD' => 'كلمة أساسية',
  'LBL_DNB_BAL_PARAM_LIMIT_ERR' => 'أقصى حد للمعيار يمكن الوصول إليه. يُرجى مسح المعلمات السابق إدخالها',
  'LBL_DNB_BAL_PARAM_MKT_CAP' => 'رأس المال السوقي',
  'LBL_DNB_BAL_PARAM_MRKT_CAP' => 'رأس المال السوقي',
  'LBL_DNB_BAL_PARAM_NUM_EMP' => 'حساب الموظف',
  'LBL_DNB_BAL_PARAM_PEOPLE' => 'الناس',
  'LBL_DNB_BAL_PARAM_STATES' => 'الولايات',
  'LBL_DNB_BAL_POSTAL_CODE' => 'الرمز البريدي',
  'LBL_DNB_BAL_PRESCREEN_SCORE' => 'نقاط ما قبل شاشة D&B',
  'LBL_DNB_BAL_PRIMARY_ONLY' => 'أساسي فقط',
  'LBL_DNB_BAL_PRIMARY_SECONDARY' => 'أساسي وثانوي',
  'LBL_DNB_BAL_RADIUS_SRCH' => 'بحث نصف القطر',
  'LBL_DNB_BAL_RSLT' => 'D&B: إنشاء معاينة لقائمة',
  'LBL_DNB_BAL_SIC' => 'رمز SIC',
  'LBL_DNB_BAL_SIC_NAICS_EXAMPLE' => 'مثال: رموز SIC  5734 -> متاجر أجهزة الكمبيوتر والبرامج , 3711 -> تصنيع السيارات ',
  'LBL_DNB_BAL_SINGLE_SITE' => 'موقع واحد',
  'LBL_DNB_BAL_TITLE' => 'العنوان',
  'LBL_DNB_BAL_TRADING_DATE' => 'تاريخ التجارة',
  'LBL_DNB_BAL_UK_REG_NO' => 'رقم منطقة المملكة المتحدة',
  'LBL_DNB_BAL_UK_VAT_NO' => 'رقم القيمة المضافة بالمملكة المتحدة',
  'LBL_DNB_BAL_YEAR_OF_FOUNDING' => 'سنة التأسيس',
  'LBL_DNB_BAL_ZIP' => 'بريدي',
  'LBL_DNB_BASIC_FIN_INF' => 'بيانات مالية أساسية',
  'LBL_DNB_BI_API_ERR' => 'حدث خطأ أثناء استيراد السجلات.',
  'LBL_DNB_BI_DUP_MSG' => 'حساب (حسابات) كانت مكررة ولم تتم إضافتها',
  'LBL_DNB_BI_ERR' => 'لم يتم استيراد أي سجلات.',
  'LBL_DNB_BI_LOADING' => 'استيراد حسابات قاعدة البيانات',
  'LBL_DNB_BI_NEW_ACCT' => 'حساب (حسابات) جديد.',
  'LBL_DNB_BI_NO_SLCT' => 'لم يتم تحديد أي سجلات.',
  'LBL_DNB_BI_REC_LIMIT' => 'يمكن تحديد ما أقصاه 20 سجلاً من أجل استيرادها',
  'LBL_DNB_BI_YOU_ADD' => 'لقد قمت بإضافة',
  'LBL_DNB_BONE_ORG_IND' => 'مؤشر منظمة بونيارد',
  'LBL_DNB_BONE_ORG_IND_DESC' => 'عندما تكون ON (معيَّن على 1) فهي تشير إلى أن بيانات الشركة لم تعد تُجمع بأي حال من الأحوال وتتم تغطيتها من طاقم عمل Hoover\'s Editorial قبل الاستحواذ عليها أو خروجها عن العمل',
  'LBL_DNB_CCS' => 'نقاط الشاشة السابقة',
  'LBL_DNB_CCS_DESC' => 'تسجيل نقاط أكثر المخاطر الأخيرة المختصة بها هذه المنظمة في تاريخ/وقت معين باستخدام نموذج نقاط يساعد في التنبؤ بأوجه التشابه بأن المنظمة ستقوم بدفع فواتيرها بشكل متطرف بشدة (90+يوم تاريخ الاستحقاق) خلال الـ 12 شهرًا القادمة',
  'LBL_DNB_CI_CITY' => 'المدينة',
  'LBL_DNB_CI_CTRY' => 'البلد',
  'LBL_DNB_CI_POSTAL_CD' => 'الرمز البريدي',
  'LBL_DNB_CI_SRCH' => 'D&B: بحث عن الشركة',
  'LBL_DNB_CI_SRCH_HINT' => 'أدخل اسم الشركة للبحث في D&B',
  'LBL_DNB_CI_STATE' => 'الولاية',
  'LBL_DNB_CI_STREET' => 'الشارع',
  'LBL_DNB_CLEAR' => 'مسح',
  'LBL_DNB_CM_LOADING' => 'يتم الآن استدعاء تطابق مسح D&B ...',
  'LBL_DNB_CM_MATCH' => 'تطابق',
  'LBL_DNB_CNTCT_LOADING' => 'تحميل جهات الاتصال من D&B',
  'LBL_DNB_CNTRL_OWN_DATE' => 'التحكم في تاريخ الملكية',
  'LBL_DNB_CNTRL_OWN_DATE_DESC' => 'تاريخ تولي الملاك الحاليين لأعمالهم.',
  'LBL_DNB_CNTRL_TYP_TEXT' => 'التحكم في نوع الملكية',
  'LBL_DNB_CNTRL_TYP_TEXT_DESC' => 'النص الذي يصف نوع التحكم في الممتلكات، مثال الملكية العامة، والملكية الخاصة، وملكية البلد',
  'LBL_DNB_COMPANY_INFO_LOADING' => 'يتم الآن تحميل بيانات الشركة من D&B...',
  'LBL_DNB_COMPETITORS' => 'D&B: المنافسون',
  'LBL_DNB_COMPETITORS_DESC' => 'بيانات المنافس من D&B. يتطلب الاشتراك في D&B.',
  'LBL_DNB_COMPETITORS_LIST' => 'العودة إلى قائمة منافسي D&B',
  'LBL_DNB_COMPETITORS_LOADING' => 'يتم الآن تحميل بيانات المنافسين من D&B...',
  'LBL_DNB_COMPETITORS_LONG_DESC' => 'ابحث عن منافسين للحساب الحالي لتوسيع توقعاتك.                                        
تم تخصيص تصميم منافس أعلى بواسطة D&B استنادًا إلى تحليل الشركة ونشاط الصناعة.
                                        Pتقوم الشركات العامة بشكل دوري بتعريف المنافسين الكبار في ملفاتهم العامة التي يتم وضعها أيضًا في الاعتبار. Rيتطلب الاشتراك في D&B.',
  'LBL_DNB_COMPETITORS_TOP' => 'أعلى المنافسين',
  'LBL_DNB_COMPINFO_LONG_DESC' => 'أكثر الطرق فاعلية للحصول على بيانات التسويق الأساسية عن منظور محتمل مثل اسم عمل، والعنوان،
                                     D&B® D-U-N-S® رقم، وفاكس، وهاتف، والأسلوب التجاري.                                     
يتضمن ذكاء الأعمال مثل الأسماء والمسميات التنفيذية، والماليات، وعدد الموظفين،
                                     رمز الاستيراد أو التصدير، مؤشر الفرع، والمزيد. Rيتطلب الاشتراك في D&B.',
  'LBL_DNB_COMP_INFO' => 'D&B: معلومات الشركة',
  'LBL_DNB_COMP_INFO_LOAD' => 'استعادة بيانات الشركة بD&B',
  'LBL_DNB_COMP_SUMM' => 'وصف الشركة',
  'LBL_DNB_COMP_SUMM_DESC' => 'النص الذي يسجل بيانًا مختصرًا أو حسابًا لهذه المنظمة',
  'LBL_DNB_CONFIDENCE' => 'الثقة',
  'LBL_DNB_CONFIG' => 'اتصل بالمسؤول لتهيئة موصل D&B',
  'LBL_DNB_CONNECTOR_ERR' => 'لم تتم تهيئة موصل D&B. اتصل بالمسؤول',
  'LBL_DNB_CONTACT' => 'D&B: معلومات جهة الاتصال',
  'LBL_DNB_CONTACT_BIO' => 'حيوي',
  'LBL_DNB_CONTACT_COMP_HIST' => 'سجل التعويضات',
  'LBL_DNB_CONTACT_DESC' => 'عرض جهات الاتصال من D&B. يتطلب الاشتراك في D&B.',
  'LBL_DNB_CONTACT_EMAIL' => 'البريد الإلكتروني',
  'LBL_DNB_CONTACT_EMP_PROF' => 'لمحة عن الموظف',
  'LBL_DNB_CONTACT_FNAME' => 'الاسم الأول',
  'LBL_DNB_CONTACT_FROM' => 'من',
  'LBL_DNB_CONTACT_JOBTITLE' => 'المسمى الوظيفي',
  'LBL_DNB_CONTACT_JOB_HIST' => 'السجل الوظيفي',
  'LBL_DNB_CONTACT_LIST' => 'العودة إلى قائمة جهات الاتصال بD&B',
  'LBL_DNB_CONTACT_LNAME' => 'الاسم الأخير',
  'LBL_DNB_CONTACT_LOADING' => 'تحميل تفاصيل الاتصال لـ ',
  'LBL_DNB_CONTACT_LONG_DESC' => 'تمنحك جهات اتصال D&B حق الوصول إلى أكثر من 100 جهة اتصال. البحث حسب الاسم الأول، والاسم الأخير، والمسمى الوظيفي',
  'LBL_DNB_CONTACT_NAME' => 'الاسم',
  'LBL_DNB_CONTACT_PHONE' => 'الهاتف',
  'LBL_DNB_CONTACT_RESP' => 'مسؤولية الإدارة',
  'LBL_DNB_CONTACT_SHOW_MORE' => 'عرض المزيد من جهات اتصال D&B',
  'LBL_DNB_CONTACT_TO' => 'إلى',
  'LBL_DNB_CONTROL_OWNERSHIP_DATE' => 'التحكم في تاريخ الملكية',
  'LBL_DNB_CONTROL_OWNERSHIP_TYPE_TEXT' => 'نص التحكم في نوع الملكية',
  'LBL_DNB_CON_EMP_CNT' => 'حساب موظف مدمج',
  'LBL_DNB_CON_EMP_CNT_DESC' => 'تسجيل بيانات الموظفين الحاليين التي تتضمن كل الموظفين المرتبطين بالعمليات الخاصة بالكيان القانوني (وتشمل الموظفين في مواقع الفروع) بجانب كل الموظفين المرتبطين بالعمليات لكل ما هو منحدر من عائلته مباشرةً (قائم على الفائدة المسيطرة). مثال الفرعيات',
  'LBL_DNB_COUNTRY' => 'البلد',
  'LBL_DNB_COUNTRY_GROUP_NAME' => 'اسم مجموعة للبلد',
  'LBL_DNB_COUNTRY_OFFICIAL_NAME' => 'الاسم الرسمي للبلد',
  'LBL_DNB_CURRENCY_ISO_ALPHA_CODE' => 'رمز ألفا ISO للعملة',
  'LBL_DNB_CURRENT_PRINCIPAL_FULL_NAME' => 'الاسم الكامل الأساسي الحالي',
  'LBL_DNB_CURRENT_PRINCIPAL_IDENTIFICATION_NUMBER' => 'رقم المعرّف الأساسي الحالي',
  'LBL_DNB_CURRENT_PRINCIPAL_JOB_TITLE' => 'المسمى الوظيفي الأساسي الحالي',
  'LBL_DNB_DATA_ERR' => 'بيانات D&B غير متوفرة',
  'LBL_DNB_DATA_OVERRIDE_MULTIPLE_FIELDS' => 'هل ترغب في الكتابة فوق {{fields}} والحقل (الحقول) الأخرى؟',
  'LBL_DNB_DATA_OVERRIDE_SINGLE_FIELD' => 'هل ترغب في الكتابة فوق {{fieldName}} باستخدام{{value}} ؟',
  'LBL_DNB_DATA_OVERRIDE_TWO_FIELDS' => 'هل ترغب في الكتابة فوق {{fields}} ؟',
  'LBL_DNB_DISAB_IND' => 'مؤشر معطل',
  'LBL_DNB_DISAB_IND_DESC' => 'تشير القيمة TRUE إلى أن هذه المنظمة معتمدة كعمل أكبر من 50% المملوكة، ويتم التحكم في إدارتها وعمليات العمل اليومية من خلال أحد الأشخاص أو أكثر لديه ظرف يمنع الشخص من القيام بالوظائف العادية أو الفكرية المعتادة',
  'LBL_DNB_DISAB_VET_ENT' => 'مؤشر شركة قديم معطل',
  'LBL_DNB_DISAB_VET_ENT_DESC' => 'تشير القيمة TRUE إلى اعتراف ولاية كاليفورنيا بالعمل، وهذا يعني أن أحد قدامى المحاربين في القوات العسكرية، أو البحرية، أو الخدمات الجوية، مع إعاقة مرتبطة الخدمة بنسبة لا تقل عن 10% أو أكثر وهو مقيم في كاليفورنيا، حيث يتم امتلاك 51% على الأقل للمعاقين من قدامى المحاربين والقيام بإدارة الأعمال اليومية. لا يمكن أن يكون المكتب الرئيسي فرعًا أو شركة أجنبية، أو أي عمل قائم على فرد أجنبي',
  'LBL_DNB_DISADV_ENT' => 'مؤشر شركة بلا مميزات',
  'LBL_DNB_DISADV_ENT_DESC' => 'تشير القيمة TRUE إلى أن العمل معتمد من وكالة فيدرالية أو تابعة للولاية أو الحكومة المحلية مع تلبية كل معايير الحكومة التي تمنح المصداقية، ولكن قد يتضمن النساء، والأقليات، والمعاقين، والأعمال بلا امتيازات نتيجة للمساوئ الاقتصادية الخاصة بالتعليم، والتوظيف، والإقامة، وموقع العمل أو المساوئ الاجتماعية ونقص التدريب العملي',
  'LBL_DNB_DISADV_VET_ENT' => 'مؤشر شركة قديم بلا مميزات',
  'LBL_DNB_DISADV_VET_ENT_DESC' => 'تشير القيمة TRUE إلى أن العمل عبارة عن عمل صغير مملوك وتتم إدارته من قبل قدامى المحاربين، حيث نسبة لا تقل عن 51% من حجم الشركة تتم إدارتها والتحكم بها بواسطة قدامى المحاربين',
  'LBL_DNB_DNB_CODE_VALUE' => 'قيمة رمز DNB',
  'LBL_DNB_DUNS' => 'DUNS',
  'LBL_DNB_DUNSSELF_IND' => 'مؤشر الطلب الذاتي DUNS',
  'LBL_DNB_DUNSSELF_IND_DESC' => 'تشير القيمة TRUE إلى أن رقم D-U-N-S لهذا الموضوع قد تم إنشاؤه عند طلب الموضوع',
  'LBL_DNB_DUPLICATE' => 'تكرار',
  'LBL_DNB_EIGHTA_CRT' => 'مؤشر ثمانية A معتمد',
  'LBL_DNB_EIGHTA_CRT_DESC' => 'تشير القيمة TRUE أن هذه المنظمة معتمدة من إدارة الأعمال الصغيرة بوصفها متلقيًا لبرنامج تطوير الأعمال 8(a)، تم إنشاء برنامج لتطوير الأعمال للمساعدة في تنافس الأعمال الصغيرة بالامتيازات في الاقتصاد الأمريكي والوصول إلى سوق المشتريات الفيدرالي',
  'LBL_DNB_EMPLOYEE_QUANTITY_GROWTH' => 'نمو كمي للموظف',
  'LBL_DNB_EMPTY_PARAM' => 'إمرار معلمات فارغة إلى D&B وفحص متكرر لـ API',
  'LBL_DNB_EMP_DET' => 'تفاصيل موظف كبير',
  'LBL_DNB_EMP_DET_DESC' => 'تفاصيل المبادئ (مثال الرئيس، نائب الرئيس، المدراء) والمديرين المسؤولين عن استراتيجية العمل، واتخاذ القرار، والتشغيل اليومي لعمليات الموضوعات. ويتضمن الأسماء، والعناوين، وأرقام تعريف المبادئ. بينما يكون المبدأ فرديًا أحيانًا في بعض البلدان فهو قانوني مقبول للعمل المسجل ليمثل مبدأ في عمل تجاري آخر. ويستثنى من ذلك حاملو الأسهم والملاك المشابهون غير المسؤولين عن إدارة المنظمة، ولكن تتضمن أصحاب الممتلكات والشركاء الذين يعتبرون بشكل عام أسس تشغيل العمل.',
  'LBL_DNB_EMP_INF' => 'بيانات الموظف',
  'LBL_DNB_EMP_INF_DESC' => 'بيانات الموظف على المنظمات مثل حساب موظف وتفاصيل الإدارة الرئيسية',
  'LBL_DNB_ERROR_CURL_CONNECTION_FAIL' => 'فشل الاتصال بالمضيف أو الوكيل. يرجى التحقق من إعدادات الوكيل لديك.',
  'LBL_DNB_ERROR_CURL_NETWORK_FAIL' => 'فشل تلقي بيانات الشبكة.',
  'LBL_DNB_ERROR_CURL_RESOLVE_HOST' => 'تعذر حل المضيف. تعذر حل مضيف المتوفر عن بُعد.',
  'LBL_DNB_ERROR_CURL_RESOLVE_PROXY' => 'تعذر حل الوكيل. تعذر حل مضيف الوكيل المتوفر. يرجى التحقق من إعدادات الوكيل لديك.',
  'LBL_DNB_ETHN' => 'عرقية المالك',
  'LBL_DNB_ETHNICITY_TYPE_TEXT' => 'نص نوع العرقية',
  'LBL_DNB_ETHN_DESC' => 'وبشكل فريد يتم تعريف التصنيف العرقي المطبق لهذه المنظمة والقائم على المجموعة العرقية، أو القومية، أو القبلية، أو الثقافية التي تصف أغلبية ملكيتها، مثال الآسيوي، الأمريكي من أصل إسباني، الأمريكي الأفريقي (أسود)',
  'LBL_DNB_EXPORT_DETAILS_INDICATOR' => 'مؤشر تفاصيل التصدير',
  'LBL_DNB_EXP_IND' => 'مؤشر التصدير',
  'LBL_DNB_EXP_IND_DESC' => 'عندما تكون "صواب" (معيَّن على 1) فهي تشير إلى أن الشركة المعنية تصدر كمية السلع إلى بلاد أخرى',
  'LBL_DNB_FACSIMILE_NUMBER' => 'رقم الفاكسيميلي',
  'LBL_DNB_FAMILY_TREE' => 'D&B: شجرة العائلة',
  'LBL_DNB_FAMILY_TREE_BACK' => 'العودة إلى شجرة العائلة بD&B',
  'LBL_DNB_FAMILY_TREE_DESC' => 'شجرة العائلة من D&B. يتطلب الاشتراك في D&B.',
  'LBL_DNB_FAMILY_TREE_LOADING' => 'تحميل شجرة العائلة من D&B',
  'LBL_DNB_FAMILY_TREE_MEMBER_ROLE' => 'نص دور عضو شجرة العائلة',
  'LBL_DNB_FAMILY_TREE_MEMBER_ROLE_TEXT' => 'نص دور عضو شجرة العائلة',
  'LBL_DNB_FAX' => 'الفاكس',
  'LBL_DNB_FAX_DESC' => 'رقم فاكس المنظمة',
  'LBL_DNB_FEM_ENT' => 'مؤشر شركة مملوكة لأنثى',
  'LBL_DNB_FEM_ENT_DESC' => 'تشير القيمة TRUE إلى أن العمل التجاري معتمد من قبل وكالة فيدرالية أو تابعة للولاية أو حكومة محلية باعتباره يلبي جميع المعايير والمتطلبات الحكومية',
  'LBL_DNB_FEM_IND' => 'مؤشر مملوك لأنثى',
  'LBL_DNB_FEM_IND_DESC' => 'تشير القيمة TRUE إلى أن هذه المنظمة معتمدة كعمل أكبر من 50% المملوكة، ويتم التحكم في إدارتها وعمليات العمل اليومية من خلال أحد النساء أو أكثر',
  'LBL_DNB_FILLING_ORGANISATION_NAME' => 'كتابة اسم المنظمة',
  'LBL_DNB_FINANCIAL' => 'D&B: البيانات المالية',
  'LBL_DNB_FINANCIALS' => 'الأمور المالية',
  'LBL_DNB_FINANCIAL_DESC' => 'بيانات مالية من D&B. يتطلب الاشتراك في D&B.',
  'LBL_DNB_FINANCIAL_DESCRIPTION' => 'الوصف المالي',
  'LBL_DNB_FINANCIAL_LOADING' => 'تحميل بيانات المالية من D&B',
  'LBL_DNB_FINANCIAL_LONG_DESC' => 'تقييم قوة الشركة المالية باستخدام بيانات مثل حجم المبيعات، وصافي القيمة، والأصول، والمديونيات. يتطلب الاشتراك في D&B.',
  'LBL_DNB_FINANCIAL_PERIOD' => 'الفترة المالية',
  'LBL_DNB_FINANCIAL_RATIO' => 'المعدل المالي',
  'LBL_DNB_FIN_COMP_TYPE' => 'نوع الشركة',
  'LBL_DNB_FIN_STCK_EXCH' => 'تبادل الأسهم',
  'LBL_DNB_FIN_STCK_SYM' => 'رمز مؤشر الأسهم',
  'LBL_DNB_FIN_STMT' => 'أرصدة الدخل السنوية',
  'LBL_DNB_FOUNDATION_YEAR' => 'عام التأسيس',
  'LBL_DNB_FRAN_TYP_TEXT' => 'نوع تشغيل الامتياز',
  'LBL_DNB_FRAN_TYP_TEXT_DESC' => 'النص الذي يوضح ما إذا كانت حقوق الامتياز تم تشغيلها من قبل شركة أو مباشرةً من صاحب الامتياز، مثال صاحب الامتياز ',
  'LBL_DNB_FROM' => 'من',
  'LBL_DNB_GEOGRAPHICAL_NAME' => 'نص جغرافي دقيق',
  'LBL_DNB_HIGH_CONF' => 'ثقة عالية',
  'LBL_DNB_HISTORY_RATING_TEXT' => 'معدل السجل',
  'LBL_DNB_HIST_RAT' => 'معدل السجل',
  'LBL_DNB_HIST_RAT_DESC' => 'النص الذي يحدد ما إذا كانت D&B تحوز أي معلومات قد تعكس ما هو غير مرغوب فيه عن هذه المنظمة، مثال الإدارة الواضحة وغير المكتملة للعمل.',
  'LBL_DNB_HUB_CRT' => 'مؤشر منطقة مجمعة معتمد',
  'LBL_DNB_HUB_CRT_DESC' => 'تشير القيمة TRUE إلى أن هذه المنظمة معتمدة من إدارة الأعمال الصغيرة في الولايات المتحدة باعتبارها متلقيًا لبرنامج HUB Zone. يجب على العمل الصغير تلبية كل المعايير التالية للتأهيل لبرنامج HUB Zone: يجب أن يقع في منطقة تجارية غير مستغلة تاريخيًا. يجب أن تكون مملوكة ومدارة من قبل أحد المواطنين الأمريكيين أو أكثر. أكبر من 35% من موظفيها يجب أن يكونوا مقيمين في HUBZone. تعتبر منطقة HUBZone (منطقة تجارة غير مستغلة تاريخيًا) منطقة تقع في أحد أو أكثر التالية -أ) جهاز تعداد المؤهلين (كما هو موضح في القسم 42(d)(5)(C)(i)(I) من قانون العائدات الداخلية لعام 1986). ب) مقاطعة مؤهلة تغير الميتروبوليتان (كما هو موضح في القسم 143(k)(2)(B) من قانون العائدات الداخلية لعام 1986) بمتوسط دخل للأسرة أقل من 80% من متوسط دخل الأسرة في الولاية أو معدل البطالة لأقل من 140% من المتوسط العالمي، المقيمين في الولايات المتحدة. قيم بيانات العمالة الأخيرة. ت) الأراضي داخل نطاق حدود المحميات الهندية معترف بها فيدراليًا',
  'LBL_DNB_IMPORT' => 'استيراد',
  'LBL_DNB_IMPORT_DETAILS_' => 'استيراد تفاصيل ',
  'LBL_DNB_IMPORT_DETAILS_INDICATOR' => 'مؤشر تفاصيل الاستيراد',
  'LBL_DNB_IMP_IND' => 'مؤشر الاستيراد',
  'LBL_DNB_IMP_IND_DESC' => 'عندما تكون "صواب" (معيَّن على 1) فهي تشير إلى أن الشركة المعنية تستورد كمية السلع من بلاد أخرى',
  'LBL_DNB_IN' => 'في',
  'LBL_DNB_INCORPORATION_YEAR' => 'سنة إنشاء المنظمة',
  'LBL_DNB_INDUSTRY_CODE' => 'رمز الصناعة',
  'LBL_DNB_INDUSTRY_CODE_DESCRIPTION' => 'وصف رمز الصناعة',
  'LBL_DNB_INDUSTRY_CODE_DISPLAY_SEQUENCE' => 'تسلسل عرض رمز الصناعة',
  'LBL_DNB_INDUSTRY_INFO' => 'D&B: البيانات الصناعية',
  'LBL_DNB_INDUSTRY_INFO_DESC' => 'البيانات الصناعية من D&B. يتطلب الاشتراك في D&B.',
  'LBL_DNB_INDUSTRY_INFO_LONG_DESC' => 'البقاء في وضع التحديث على الاتجاهات الرئيسية والفرص خلال 900 شريحة صناعية. كل نبذة صناعية تحتوي على التحليل، والإحصائيات، والتنبؤات لمساعدتك في مشاركة وجهات النظر، وتوجيه العملاء، وتعميق العلاقات مع العملاء.',
  'LBL_DNB_IND_CD' => 'القوانين الصناعية',
  'LBL_DNB_IND_CD_DESC' => 'تقوم القيمة الأبجدية الرقمية بتعريف نشاط العمل القائم على خطة محددة بنص النوع. على سبيل المثال، يمثل 1611 صناعة تشييد الشوارع والطرق السريعة في الولايات المتحدة نظام SIC (التصنيف الصناعي القياسي). ملاحظة توضيحية: هي قوانين خارجية بشكل عام تم إنشاؤها من هيئات ذات سلطة خارجية مثل المكتب الأمريكي للإدارة والميزانية (OMB)، ولكن ربما أنشأت D&B امتدادات ليتم تعريف النشاط بأكثر دقة، كما في حالة SIC 2+2 (آخر 4 أرقام من SIC مكون من 8 أرقام)',
  'LBL_DNB_IND_CD_HED' => 'البيانات الصناعية',
  'LBL_DNB_IND_CD_HED_DESC' => 'تسجل أنشطة العمل التي تساهم فيها المنظمة باستخدام الخطط القياسية الملتزمة بالقوانين مثل NACE الأوروبي والولايات المتحدة. التصنيفات الصناعية القياسية (SIC). أمثلة لأنشطة العمل: الطباعة التجارية، والخدمات القانونية، ومخازن العقاقير، وتصنيع الألواح المعدنية',
  'LBL_DNB_IND_EMP_CNT' => 'حساب موظف وحيد',
  'LBL_DNB_IND_EMP_CNT_DESC' => 'تسجيل بيانات الموظفين الحالية للكيان الفردي. إذا كانت المنظمة مصنفة من D&B كعمل تجاري',
  'LBL_DNB_IND_INF_LOAD' => 'تحميل البيانات الصناعية من D&B',
  'LBL_DNB_INF_INF_OVERVIEW' => 'نظرة عامة',
  'LBL_DNB_INQ_CNT' => 'حساب الاستعلامات الكلي',
  'LBL_DNB_INQ_CNT_DESC' => 'عدد استعلامات المشترك الفريدة المسجلة أمام الموضوع لأكثر من 12 شهرًا',
  'LBL_DNB_INTERNATIONAL_DIALLING_CODE' => 'رمز الاتصال الدولي',
  'LBL_DNB_INT_DIALLING_CODE' => 'رمز الاتصال الداخلي',
  'LBL_DNB_INVALID_MODULE_NAME' => 'إمرار اسم وحدة غير صالح إلى D&B وفحص متكرر لـ API',
  'LBL_DNB_IPO_DATE' => 'تاريخ IPO',
  'LBL_DNB_JOB_TITLE_TEXT' => 'المسمى الوظيفي',
  'LBL_DNB_KEYWORD_SEARCH_HINT' => 'انقر هنا للبحث عن شركة بواسطة اسم الشركة فقط',
  'LBL_DNB_LAST_UPDATE' => 'آخر تحديث',
  'LBL_DNB_LAST_UPDATE_DATE' => 'تاريخ آخر تحديث',
  'LBL_DNB_LAST_UPD_DATE' => 'تاريخ آخر تحديث',
  'LBL_DNB_LAST_UPD_DATE_DESC' => 'تاريخ آخر تحديث لسجل الموضوعات على نظام D&B',
  'LBL_DNB_LAT' => 'خط العرض',
  'LBL_DNB_LATITUDE_MEASUREMENT' => 'قياس خط العرض',
  'LBL_DNB_LAT_DESC' => 'إحداثي خط العرض',
  'LBL_DNB_LINE_OF_BUSINESS' => 'طبيعة الأعمال',
  'LBL_DNB_LINE_OF_BUSINESS_DESCRIPTION' => 'وصف نوع الأعمال',
  'LBL_DNB_LITE_COMPANY_INFO' => 'D&B: بيانات الشركة - أساسي',
  'LBL_DNB_LITE_COMPANY_INFO_DESC' => 'بيانات الشركة الأساسية من D&B. يتطلب الاشتراك في D&B.',
  'LBL_DNB_LITE_COMPANY_INFO_LOADING' => 'يتم الآن تحميل بيانات الشركة الأساسية من D&B...',
  'LBL_DNB_LOB' => 'طبيعة الأعمال',
  'LBL_DNB_LOB_DESC' => 'تسجيل الوصف النصي للعمليات المستمرة من العمل',
  'LBL_DNB_LOC' => 'الموقع',
  'LBL_DNB_LOCATION' => 'الموقع',
  'LBL_DNB_LOCATION_TYPE' => 'نوع المكان',
  'LBL_DNB_LOCATION_TYPE_DESC' => 'نص يصف الجزء الذي يلعبه الموضوع كعضو من شجرة العائلة المالكة، مثال الفرع، والقسم، والأب، والمقرات الرئيسية، والفروع.',
  'LBL_DNB_LOC_DESC' => 'تسجيل تفاصيل العنوان لموضوع. العنوان هو تصميم لمكان حيث يقع موضوع أو يمكن الاتصال به',
  'LBL_DNB_LONG' => 'خط الطول',
  'LBL_DNB_LONGITUDE_MEASUREMENT' => 'قياس خط الطول',
  'LBL_DNB_LONG_DESC' => 'إحداثي خط الطول',
  'LBL_DNB_LOW_CONF' => 'ثقة منخفضة',
  'LBL_DNB_LS_IND' => 'مؤشر العمالة الزائدة',
  'LBL_DNB_LS_IND_DESC' => 'تشير القيمة TRUE إلى أن هذه المنظمة معتمدة كعمل تجاري يسير في منطقة زائدة العمالة. منطقة زائدة العمالة هي منطقة محددة من وزارة العمل، بوصفها منطقة تتركز فيها البطالة، أو تحت خط البطالة، أو منطقة عمالة زائدة',
  'LBL_DNB_MAIL_CITY' => 'إرسال بريد للمدينة',
  'LBL_DNB_MAIL_CTRY_CD' => 'إرسال رمز البلد بالبريد',
  'LBL_DNB_MAIL_STATE_ABBR' => 'إرسال اختصار المقاطعة بالبريد',
  'LBL_DNB_MAIL_STREET' => 'إرسال بريد إلى خط الشارع ',
  'LBL_DNB_MAIL_ZIP' => 'إرسال الرمز البريدي بالبريد',
  'LBL_DNB_MARKETABILITY_INDICATOR' => 'مؤشر التسويق',
  'LBL_DNB_MARKET_IND' => 'مؤشر التسويق',
  'LBL_DNB_MARKET_IND_DESC' => 'عندما يكون صوابًا (معيَّن على 1) فهذا يشير إلى أن السجل يلبي القواعد التسويقية بD&B',
  'LBL_DNB_MATCH_GRADE' => 'درجة التطابق',
  'LBL_DNB_MEASUREMENT_RELIABILITY_TEXT' => 'قياس نص المصداقية',
  'LBL_DNB_MEASUREMENT_UNIT_TEXT' => 'قياس نص الوحدة',
  'LBL_DNB_MED_CONF' => 'ثقة متوسطة',
  'LBL_DNB_METROPOLITAN_STAT_CODE' => 'منطقة إحصاءات ميتروبوليتان لقانون التعداد في الولايات المتحدة',
  'LBL_DNB_MILLION' => 'M',
  'LBL_DNB_MINORITY_OWNER_INDICATOR' => 'مملوكة للأقلية',
  'LBL_DNB_MIN_COLL' => 'مؤشر الأقلية من الزملاء',
  'LBL_DNB_MIN_COLL_DESC' => 'القيمة TRUE تشير إلى أن هذه المنظمة هي كلية أو جامعة حيث تعتبر النبذة عن أغلبية الطلبة هي أقلية عرقية. على سبيل المثال، إذا كانت النسبة القصوى من الطلبة في كلية أو جامعة من عرق الزنوج، فسوف تكون "كلية أقلية" بواسطة نوع العرق الأسود',
  'LBL_DNB_MIN_ENT' => 'مؤشر شركة أقلية',
  'LBL_DNB_MIN_ENT_DESC' => 'تشير القيمة TRUE إلى أن العمل التجاري معتمد من قبل وكالة فيدرالية أو تابعة للولاية أو حكومة محلية وذلك من خلال التطبيق و/أو الزيارة للمنشأة باعتباره يلبي جميع المعايير والمتطلبات الحكومية',
  'LBL_DNB_MIN_IND' => 'مؤشر الأقلية',
  'LBL_DNB_MIN_IND_DESC' => 'تشير القيمة TRUE إلى أن هذه المنظمة معتمدة كعمل أكبر من 50% المملوكة، ويتم التحكم في إدارتها وعمليات العمل اليومية من خلال أحد أعضاء المجموعة الأقلية أو أكثر',
  'LBL_DNB_MORE_SRCH_RES' => 'عرض المزيد من نتائج بحث D&B',
  'LBL_DNB_NAICS' => 'NAICS',
  'LBL_DNB_NAME' => 'الاسم',
  'LBL_DNB_NEWS' => 'أخبار',
  'LBL_DNB_NEWS_AND_MEDIA' => 'D&B: أخبار',
  'LBL_DNB_NEWS_AND_MEDIA_DESC' => 'جلب أخبار من خدمات D&B. يتطلب الاشتراك في D&B.',
  'LBL_DNB_NEWS_AND_MEDIA_LOADING' => 'تحميل الأخبار والإعلام الاجتماعي من D&B',
  'LBL_DNB_NEWS_AND_MEDIA_LONG_DESC' => 'الحصول على منظر كامل لعميلك باستخدام أخبار D&B والاجتماعية! استخدم قوة عملية DUNSright لضمان أنك تجذب المصادر الجديدة والمساعدة الاجتماعية. يتطلب الاشتراك في D&B.',
  'LBL_DNB_NEWS_AND_MEDIA_MORE' => 'إقرأ المزيد',
  'LBL_DNB_NEWS_FACEBOOK' => 'Facebook',
  'LBL_DNB_NEWS_TWITTER' => 'Twitter',
  'LBL_DNB_NEWS_WIKI' => 'Wikipedia',
  'LBL_DNB_NEWS_YOUTUBE' => 'YouTube',
  'LBL_DNB_NONMARK_REAS_TXT' => 'بدون نص منطقي تسويقي',
  'LBL_DNB_NONMARK_REAS_TXT_DESC' => 'النص المحدد للسبب وراء عدم اعتبار بيانات الموضوع قابلة للتسويق من خلال D&B',
  'LBL_DNB_NON_MARKETABILITY_INDICATOR' => 'ليس نصًا سببيًا للتسويق',
  'LBL_DNB_NOT_CONFIGURED' => 'لم تتم تهيئة موصل D&B. يُرجى تهيئة الموصل.',
  'LBL_DNB_NO_DATA' => 'لا تتوفر بيانات',
  'LBL_DNB_NO_DUNS' => 'لا يوجد DUNS مُعرف',
  'LBL_DNB_NO_DUNS_FIELD' => 'تحذير: لا يوجد حقل DUNS حاليًا في مخطط عرض السجل. اتصل بالمسؤول لإضافته.',
  'LBL_DNB_NO_INDUSTRY' => 'لا يوجد رمز صناعي مرتبط',
  'LBL_DNB_NO_SIC_FIELD' => 'تحذير: لا يوجد حقل SIC حاليًا في مخطط عرض السجل. اتصل بالمسؤول لإضافته.',
  'LBL_DNB_OPERATING_STATUS_TEXT' => 'نص حالة التشغيل',
  'LBL_DNB_OPERL_STA_TEXT' => 'حالة التشغيل',
  'LBL_DNB_OPERL_STA_TEXT_DESC' => 'النص الذي يصف حالة التجارة/الوظائف بالمنظمة، مثال نشط، أو خارج نطاق العمل، أو مسيطر',
  'LBL_DNB_OPER_TEXT' => 'نص العمليات',
  'LBL_DNB_OPER_TEXT_DESC' => 'النص الذي يصف معلومات تفصيلية تخص تشغيل عمل',
  'LBL_DNB_ORGANISATION_IDENTIFICATION_NUMBER' => 'رقم معرّف المنظمة',
  'LBL_DNB_ORGANISATION_IDENTIFICATION_START_DATE' => 'تاريخ بدء معرّف المنظمة',
  'LBL_DNB_ORGANIZATION_DISPLAY_SEQUENCE' => 'تسلسل عرض المنظمة',
  'LBL_DNB_ORGANIZATION_FILLING_NAME' => 'اسم المنظمة',
  'LBL_DNB_ORGANIZATION_IDENTIFICATION_NUMBER' => 'رقم معرّف المنظمة',
  'LBL_DNB_ORGANIZATION_NAME' => 'اسم المنظمة',
  'LBL_DNB_ORGANIZATION_START_DATE' => 'تاريخ بداية المنظمة',
  'LBL_DNB_ORGS_STRT_YEAR' => 'عام بداية المنظمة',
  'LBL_DNB_ORGS_STRT_YEAR_DESC' => 'سنة تولي مسؤولية الأعمال من خلال المنظمة',
  'LBL_DNB_ORG_DET' => 'تفاصيل المنظمة',
  'LBL_DNB_ORG_DET_DESC' => 'تسجيل المعلومات الأساسية عن منظمة التي قد تتغير عبر الوقت',
  'LBL_DNB_ORG_ID' => 'رقم معرّف المنظمة',
  'LBL_DNB_ORG_ID_DESC' => 'رقم يتم تعيينه من خلال كيان خارجي أو من خلال قاعدة البيانات والذي يحدد أو يساعد بشكل فريد من أجل تحديد منظمة. ويمكن أن تكون المنظمة التي أصدرت الرقم سلطة تسجيل أو وزارة حكومية أو مشروع تجاري على سبيل المثال أرقام غرف التجارة أو أرقام ضريبة المبيعات أو ما إلى ذلك.',
  'LBL_DNB_ORG_NAME' => 'اسم المنظمة',
  'LBL_DNB_ORG_NAME_DESC' => 'تسجيل الأسماء المختلفة للمنظمة المشهورة بها',
  'LBL_DNB_OTHER' => 'أخرى',
  'LBL_DNB_OTHER_FIELDS' => ' حقل (حقول) أخرى',
  'LBL_DNB_OUTOFDATE' => 'قديم',
  'LBL_DNB_OUTOFDATE_MSG' => 'بيانات الشركة قديمة',
  'LBL_DNB_OVERRIDE_SUCCESS' => 'تم استيراد بيانات D&B بنجاح',
  'LBL_DNB_OVERVIEW' => 'نظرة عامة',
  'LBL_DNB_OWNERSHIP_TYPE' => 'نوع الملكية',
  'LBL_DNB_PAGESZ' => 'حجم الصفحة',
  'LBL_DNB_PHONE' => 'الهاتف',
  'LBL_DNB_PHONE_DESC' => 'رقم هاتف المنظمة',
  'LBL_DNB_PREMISES_AREA_MEASUREMENT' => 'قياس منطقة داخلية',
  'LBL_DNB_PREMIUM' => 'متميز',
  'LBL_DNB_PREMIUM_COMPANY_INFO' => 'D&B: بيانات الشركة - فائقة',
  'LBL_DNB_PREMIUM_COMPANY_INFO_DESC' => 'بيانات الشركة المتميزة في D&B. يتطلب الاشتراك في D&B.',
  'LBL_DNB_PREMIUM_COMPANY_INFO_LOADING' => 'يتم الآن تحميل بيانات الشركة الفائقة من D&B...',
  'LBL_DNB_PRIMARY' => 'أساسي',
  'LBL_DNB_PRIMARY_ADDRESS_POSTAL_CODE' => 'الرمز البريدي للعنوان الرئيسي',
  'LBL_DNB_PRIMARY_TOWN' => 'مدينة رائدة',
  'LBL_DNB_PRIMARY_TOWN_NAME' => 'اسم المدينة الرئيسي',
  'LBL_DNB_PRIM_CEN_CD' => 'رمز التعداد',
  'LBL_DNB_PRIM_CEN_CD_DESC' => 'إقليم جغرافي ذو كثافة سكانية عالية في مركزه وروابط اقتصادية مغلقة في المنطقة',
  'LBL_DNB_PRIM_CITY' => 'المدينة/البلدة الرئيسية',
  'LBL_DNB_PRIM_CITY_DESC' => 'اسم المدينة المتعرف عليها من مصلحة البريد لتسليم البريد',
  'LBL_DNB_PRIM_COUNTY_NAME' => 'اسم البلد',
  'LBL_DNB_PRIM_COUNTY_NAME_DESC' => 'الاسم الرسمي للبلد، مثل ميتشجان',
  'LBL_DNB_PRIM_CTRY_CD' => 'رمز البلد الرئيسي',
  'LBL_DNB_PRIM_CTRY_CD_DESC' => 'رمز البلد المكون من حرفين، والمعرّف في خطة ISO 3166-1 الصادرة من المنظمة الدولية للمعايير (ISO)، لتعريف البلد الخاص بهذا العنوان.',
  'LBL_DNB_PRIM_CTRY_GRP' => 'مجموعة البلد',
  'LBL_DNB_PRIM_CTRY_GRP_DESC' => 'معرّف مجموعة بلد، على سبيل المثال أمريكا الشمالية',
  'LBL_DNB_PRIM_NAME' => 'الاسم',
  'LBL_DNB_PRIM_NAME_DESC' => 'نص يسجل اسم هذه المنظمة',
  'LBL_DNB_PRIM_STATE' => 'المقاطعة الرئيسية',
  'LBL_DNB_PRIM_STATE_ABBR' => 'اختصار المقاطعة الرئيسية',
  'LBL_DNB_PRIM_STATE_ABBR_DESC' => 'الاسم المختصر لمنطقة محكومة محليًا وتكون جزءًا من الأمة التي يتم التحكم فيها مركزيًا',
  'LBL_DNB_PRIM_STATE_DESC' => 'اسم لمنطقة محكومة محليًا وتكون جزءًا من الأمة التي يتم التحكم فيها مركزيًا',
  'LBL_DNB_PRIM_STREET' => 'خط الشارع الرئيسي',
  'LBL_DNB_PRIM_STREET_DESC' => 'النص الذي يسجل مكونات عنوان الشارع حيث سيتم توضيحه على بطاقة عنوان',
  'LBL_DNB_PRIM_ZIP' => 'الرمز البريدي الرئيسي',
  'LBL_DNB_PRIM_ZIP_DESC' => 'معرّف يُستخدم من السلطات المحلية البريدية لبلد لتحديد موقع جغرافي معيَّن',
  'LBL_DNB_PRINCIPAL_IDENTIFICATION_NUMBER' => 'رقم المعرّف الأساسي',
  'LBL_DNB_RATING' => 'معدل',
  'LBL_DNB_REC_MARK_ANALYSIS' => 'أحدث تحليل سوقي',
  'LBL_DNB_REGISTERED_ADDRESS_INDICATOR' => 'مؤشر عنوان مسجل',
  'LBL_DNB_REGISTRATION_ISSUER_NAME' => 'اسم مصدر التسجيل',
  'LBL_DNB_REGISTRATION_LOCATION_POSTAL_CODE' => 'الرمز البريدي لموقع التسجيل',
  'LBL_DNB_REG_DET_HED' => 'التفاصيل المسجلة',
  'LBL_DNB_REG_DET_HED_DESC' => 'لتسجيل الحالة التشريعية لعنصر كما هو محدد وفقًا لقوانين الدولة، على سبيل المثال، شركة محدودة وشراكة وجمعية تعاونية وأسهم في البورصة أو هيكل المشاركة المستخدم من خلال الشركة وفقًا للشكل القانوني وقواعد التأسيس القانونية. وملاك الأسهم أو الحصص المالية هم ملاك الشركة.',
  'LBL_DNB_RELIABILITY_TEXT' => 'نص المصداقية',
  'LBL_DNB_RESIDENTIAL_ADDRESS_INDICATOR' => 'مؤشر عنوان الإقامة',
  'LBL_DNB_RFR' => 'تحديث',
  'LBL_DNB_RFR_HINT' => 'التحديث الآن',
  'LBL_DNB_RFR_LOADING' => 'تقدم فحص تحديث D&B',
  'LBL_DNB_RISK_CLASS' => 'فئة المخاطرة',
  'LBL_DNB_SALES' => 'المبيعات',
  'LBL_DNB_SALES_REVENUE' => 'عائدات المبيعات',
  'LBL_DNB_SALES_REVENUE_AMOUNT' => 'كم عائدات المبيعات',
  'LBL_DNB_SEARCH_LOADING' => 'جارٍ البحث في D&B...',
  'LBL_DNB_SELF_REQUEST_INDICATOR' => 'مؤشر الطلب الذاتي',
  'LBL_DNB_SENIOR_PRINCIPAL' => 'عضو كبير',
  'LBL_DNB_SHOW_LESS' => 'عرض القليل',
  'LBL_DNB_SHOW_MORE' => 'عرض المزيد',
  'LBL_DNB_SIC' => 'رمز SIC',
  'LBL_DNB_SLCT_CTRY' => 'حدد بلدًا',
  'LBL_DNB_SLCT_STATE' => 'حدد ولاية',
  'LBL_DNB_SMALL_BUSINESS_INDICATOR' => 'عمل صغير',
  'LBL_DNB_SMBDISADV_IND' => 'عمل صغير بلا ميزة',
  'LBL_DNB_SMBDISADV_IND_DESC' => 'تشير القيمة TRUE إلى أن هذه المنظمة معتمدة كعمل أكبر من 50% المملوكة، ويتم التحكم في إدارتها وعمليات العمل اليومية من خلال أشخاص بلا امتيازات اجتماعية أو اقتصادية',
  'LBL_DNB_SMB_CERT' => 'مؤشر العمل الصغير المعتمد',
  'LBL_DNB_SMB_CERT_DESC' => 'تشير القيمة TRUE إلى أن العمل التجاري صغير، ومعتمد من قبل وكالة أو منظمة فيدرالية أو تابعة للولاية أو الحكومة المحلية ويلبي جميع المعايير الحكومية التي تمنح التأهل',
  'LBL_DNB_SMB_IND' => 'مؤشر العمل الصغير',
  'LBL_DNB_SMB_IND_DESC' => 'تشير القيمة TRUE إلى أن هذه المنظمة معتمدة كمنشأة صغيرة. العمل التجاري الصغير عبارة عن كيان يكون غالبًا ملكية خاصة، ويتم تشغيله من قبل مالكها، مع وجود عدد ضئيل من الموظفين وحجم منخفض نسبيًا للمبيعات. تعتبر الأعمال الصغيرة شركات مملوكة لأفراد بشكل طبيعي، أو شراكات أو ملكية خاصة. يختلف التعريف القانوني لكلمة صغير حسب البلد وحسب الصناعة',
  'LBL_DNB_SOCIAL' => 'الإعلام الاجتماعي',
  'LBL_DNB_SOCIO_IND' => 'الهوية الاجتماعية الاقتصادية',
  'LBL_DNB_SOCIO_INDICATOR' => 'المؤشر الاجتماعي الاقتصادي',
  'LBL_DNB_SOCIO_IND_DESC' => 'تسجيل معلومات عن تصنيف الموضوعات داخل مجموعات اقتصادية اجتماعية أو إحصائية',
  'LBL_DNB_SRCH' => 'بحث',
  'LBL_DNB_SRCH_LOAD' => 'البحث عن D&B',
  'LBL_DNB_SRCH_RES' => 'D&B: نتائج البحث',
  'LBL_DNB_STAND_ALONE_ORGANIZATION_INDICATOR' => 'مؤشر المنظمة المنفرد',
  'LBL_DNB_STATE' => 'الولاية / الإقليم / المنطقة',
  'LBL_DNB_STD_COMPANY_INFO' => 'D&B: بيانات الشركة - قياسي',
  'LBL_DNB_STD_COMPANY_INFO_DESC' => 'بيانات الشركة القياسية من D&B. يتطلب الاشتراك في D&B.',
  'LBL_DNB_STD_COMPANY_INFO_LOADING' => 'يتم الآن تحميل بيانات الشركة القياسية من D&B...',
  'LBL_DNB_STOCK_EXCHANGE_COUNTRY_ISO_ALPHA_CODE' => 'قانون ألفا ISO لتبادل الأسهم في البلد',
  'LBL_DNB_STOCK_EXCHANGE_ISO_CODE' => 'كود ألفا ISO لتبادل الأسهم',
  'LBL_DNB_STOCK_EXCHANGE_NAME' => 'اسم تبادل الأسهم',
  'LBL_DNB_STOCK_EXCHANGE_TICKER_NAME' => 'اسم مؤشر تبادل الأسهم',
  'LBL_DNB_STREET_ADDRESSLINE' => 'خط عنوان الشارع',
  'LBL_DNB_STREET_ADDRESS_LINE_TEXT' => 'نص سطر عنوان الشارع',
  'LBL_DNB_SUBAGENT_INDICATOR' => 'مؤشر الوكيل الفرعي',
  'LBL_DNB_SUBJ_HEADER' => 'عنوان الموضوع',
  'LBL_DNB_SUBJ_HEADER_DESC' => 'تسجيل معلومات المستوى العالي الخاصة بالموضوعات مثل اللغة الأولية للموضوع والعملة الرئيسية التي تخص الأنشطة التجارية للموضوع. عندما يتعلق الموضوع بمنظمة، قد يحتوي أيضًا على تفاصيل مثل رقم DUNS',
  'LBL_DNB_SUMMARY' => 'الملخص',
  'LBL_DNB_SVC_DISAB_VET' => 'مؤشر قديم معطل عن الخدمة',
  'LBL_DNB_SVC_DISAB_VET_DESC' => 'القيمة TRUE تشير إلى أن العمل مملوك بنسبة 51% على الأقل من أحد القدامى أو أكثر به إعاقة تحول دون اتصال الخدمة. نقصد بالمصطلح "اتصال الخدمة" فيما يخص الإعاقة أو الوفاة، أن مثل هذه الإعاقة قد حدثت أو تفاقمت، أثناء تأدية الخدمة في الجيش، أو البحرية، أو القوات الجوية',
  'LBL_DNB_SVC_ERR' => 'خطأ في خدمة D&B',
  'LBL_DNB_TELECOMM' => 'الاتصالات عن بُعد',
  'LBL_DNB_TELECOMMUNICATION_NUMBER' => 'رقم الاتصالات عن بُعد',
  'LBL_DNB_TELECOMM_DESC' => 'بيانات السجلات الخاصة بالأوضاع المختلفة لعناوين الاتصالات المستخدمة من موضوع لأغراض اتصال خارجية. تتضمن أوضاع الاتصالات الهاتف، والفاكس، والبريد الإلكتروني، وعنوان الويب',
  'LBL_DNB_TERRITORY_ABBREVATIVE_NAME' => 'الاسم المختصر للمقاطعة',
  'LBL_DNB_TERRITORY_ABBREVIATED_NAME' => 'الاسم المختصر للمقاطعة',
  'LBL_DNB_TERRITORY_OFFICIAL_NAME' => 'الاسم الرسمي للمقاطعة',
  'LBL_DNB_TF_DUNS' => 'رقم DUNS المرسل',
  'LBL_DNB_TOTAL_EMPLOYEE_QUANTITY' => 'الكمية الكلية للموظف',
  'LBL_DNB_TOTAL_ENQUIERY_COUNT' => 'حساب الاستعلام الكلي',
  'LBL_DNB_TOTAL_INQUIRY_COUNT' => 'إجمالي عدد الاستعلامات',
  'LBL_DNB_TPA' => 'تقييم الجهة الخارجية',
  'LBL_DNB_TPA_DESC' => 'التقييمات/الآراء المخصصة لهذا الموضوع بواسطة كيان غير D&B على الشبكة الدولية (WWN)',
  'LBL_DNB_TRADE_STYLE_NAME' => 'اسم النمط التجاري',
  'LBL_DNB_TRANSFERRED_FROM_DUNS_NUMBER' => 'المرسل من رقم DUNS ',
  'LBL_DNB_TRD_NAME' => 'الاسم التجاري',
  'LBL_DNB_TRD_NAME_DESC' => 'تسجيل الاسم الذي تُعرف به المنظمة تجاريًا لأغراض تجارية',
  'LBL_DNB_TRNS_DUNS' => 'رقم DUNS المرسل',
  'LBL_DNB_TRNS_DUNS_DESC' => 'هذا هو رقم D-U-N-S الخاص بالموضوع الذي تم حذفه من قاعدة بيانات المضيف',
  'LBL_DNB_UNDELIVERABLE_INDICATOR' => 'مؤشر غير قابل للتسليم',
  'LBL_DNB_UNKNOWN_ERROR' => 'خطأ غير معروف. يُرجى تفقد السجلات لمزيد من التفاصيل.',
  'LBL_DNB_UNREACHABLE_INDICATOR' => 'مؤشر غير قابل للوصول',
  'LBL_DNB_UPLOAD' => 'تحميل',
  'LBL_DNB_UPTODATE' => 'محدث',
  'LBL_DNB_UPTODATE_MSG' => 'بيانات الشركة حديثة',
  'LBL_DNB_URL' => 'عنوان URL',
  'LBL_DNB_USPAT_SCR' => 'القانون الوطني في الولايات المتحدة لدرجة مخاطر التوافق',
  'LBL_DNB_USPAT_SCR_DESC' => 'يهدف خطر الالتزام إلى توفير المنظمات التي تمثل أمام القانون الوطني بالولايات المتحدة الأمريكية بأداة مساعدة في القيام بالالتزام بالمخاطر القائم على تقييم شركاء العمل. الفهرس قيمة عددية تمثل تجميعًا لأعلام المخاطر الموزونة المخصصة عبر قواعد ولوغاريتمات الممتلكات. تنوع القيم من 0 إلى ~ 255. تمثل قيم الفهرس العليا مستوى عاليًا من المخاطرة',
  'LBL_DNB_VET_ENT' => 'مؤشر شركة قديم',
  'LBL_DNB_VET_ENT_DESC' => 'تشير القيمة TRUE إلى أن العمل يقع تحت طائلة إرشادات SBA لقانون الأعمال الصغيرة (PL 85-536)، الذي تم تعديله وينص على: الأمور المتعلقة بالمشروعات الصغيرة التي يمتلكها ويديرها قدامى المحاربين ليست أقل من 51% نسبة امتلاك من أحد قدامى المحاربين أو أكثر، وفي حالة امتلاك العمل الصغير من عامة فلا تكون أقل من 51% من الأسهم مملوكة لأحد القدامى أو أكثر',
  'LBL_DNB_VET_IND' => 'مؤشر قديم',
  'LBL_DNB_VET_IND_DESC' => 'تشير القيمة TRUE إلى أن هذه المنظمة معتمدة كعمل أكبر من 50% المملوكة، ويتم التحكم في إدارتها وعمليات العمل اليومية من خلال أحد قدامى الحرب أو أكثر. نقصد بقدامى المحاربين شخصًا قام بالخدمة في القوات المسلحة، أو البحرية، أو الخدمات الجوية وقد تقاعد أو تم تسريحه من الخدمة بموجب حالات أخرى غير حالات الجرائم المخلة بالشرف',
  'LBL_DNB_VIET_VET' => 'مؤشر قديم من فيتنام',
  'LBL_DNB_VIET_VET_DESC' => 'تشير القيمة TRUE إلى أن نسبة 51% على الأقل من العمل مملوكة لأحد قدامى المحاربين في فيتنام أو أكثر الذين خدموا في الفترة ما بين 1/1/59 و5/7/75 ولهم القدرة على السيطرة وتشغيل العمل. التحكم في هذا المضمون يعني قوة اتخاذ القرار والتشغيل وأن تكون مشتركًا بالفعل في الإدارة اليومية للعمل',
  'LBL_DNB_VIEW_ACCT' => 'عرض الحسابات',
  'LBL_DNB_WEBPAGE' => 'صفحة الويب',
  'LBL_DNB_WEBPAGE_ADDRESS' => 'عنوان صفحة الويب',
  'LBL_DNB_WEBPAGE_DESC' => 'صفحة الويب للمنظمة',
  'LBL_DNB_WITH' => ' باستخدام ',
  'LBL_DOCUMENTS' => 'المستندات',
  'LBL_DONE_BUTTON_KEY' => 'X',
  'LBL_DONE_BUTTON_LABEL' => 'تم',
  'LBL_DONE_BUTTON_TITLE' => 'تم',
  'LBL_DROPDOWN_LIST_ALL' => 'الكل',
  'LBL_DROP_HERE' => '[إسقاط هنا]',
  'LBL_DST_NEEDS_FIXIN' => 'يتطلب التطبيق تثبيت التوقيت الصيفي لتوفير الوقت لتطبيقه.  يرجى الذهاب إلى ارتباط إصلاح<a href="index.php?module=Administration&action=DstFix"></a> في منصة المسؤول وتطبيق التوقيت الصيفي لتوفير الوقت المثبت.',
  'LBL_DUPECHECK_FILTER_DEFAULT' => 'كل التكرارات',
  'LBL_DUPLICATES_FOUND' => '{{duplicateCount}} تم العثور على تكرار',
  'LBL_DUPLICATE_BUTTON' => 'تكرار',
  'LBL_DUPLICATE_BUTTON_KEY' => 'u',
  'LBL_DUPLICATE_BUTTON_LABEL' => 'نسخ',
  'LBL_DUPLICATE_BUTTON_TITLE' => 'نسخ',
  'LBL_DUP_MERGE' => 'ابحث عن التكرارات',
  'LBL_DURATION_DAY' => 'يوم',
  'LBL_DURATION_DAYS' => 'أيام',
  'LBL_DURATION_HOUR' => 'ساعة',
  'LBL_DURATION_HOURS' => 'ساعات',
  'LBL_DURATION_MINUTE' => 'دقيقة',
  'LBL_DURATION_MINUTES' => 'دقائق',
  'LBL_DURATION_SECONDS' => 'ثوانٍ',
  'LBL_EDIT' => 'تحرير {{{this}}}',
  'LBL_EDITINLINE' => 'تحرير',
  'LBL_EDITVIEW' => 'تعديل العرض',
  'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'تعديل كجديد',
  'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'تعديل كجديد',
  'LBL_EDIT_BUTTON' => 'تحرير',
  'LBL_EDIT_BUTTON_KEY' => 'i',
  'LBL_EDIT_BUTTON_LABEL' => 'تحرير',
  'LBL_EDIT_BUTTON_TITLE' => 'تحرير',
  'LBL_EDIT_INLINE' => 'تعديل المضمن',
  'LBL_EDIT_RELATED' => 'تحرير ذي الصلة {{{this}}}',
  'LBL_EMAIL' => 'البريد الإلكتروني',
  'LBL_EMAILS' => 'رسائل البريد الإلكتروني',
  'LBL_EMAILS_SUBPANEL_TITLE' => 'رسائل البريد الإلكتروني',
  'LBL_EMAIL_ACCOUNTS_EDIT' => 'تحرير',
  'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'ملء مسبق Gmail&#153; الافتراضيات',
  'LBL_EMAIL_ACCOUNTS_NAME' => 'الاسم',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'خصائص خادم البريد الصادر',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'قم بتوفير معلومات خادم بريد SMTP لكي تستخدمها للبريد الصادر في حسابات البريد.',
  'LBL_EMAIL_ACCOUNTS_SENDTYPE' => 'عامل نقل البريد',
  'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ' => 'هل تريد استخدام مصادقة SMTP؟',
  'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'الافتراضي',
  'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'كلمة مرور SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD' => 'كلمة مرور SMTP مطلوبة',
  'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'منفذ SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'خادم SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPSSL' => 'استخدم SSL عند التوصيل',
  'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'اسم مستخدم SMTP',
  'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD' => 'اسم مستخدم SMTP مطلوب',
  'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'قم بإعداد حسابات البريد لعرض رسائل البريد الواردة من حسابات البريد الإلكتروني الخاصة بك.',
  'LBL_EMAIL_ACCOUNTS_TITLE' => 'مدير حساب البريد',
  'LBL_EMAIL_ACTION_SET_INVALID' => 'غير صالح',
  'LBL_EMAIL_ACTION_SET_OPT_IN' => 'مقبول',
  'LBL_EMAIL_ACTION_SET_OPT_OUT' => 'مرفوض',
  'LBL_EMAIL_ACTION_SET_PRIMARY' => 'أساسي',
  'LBL_EMAIL_ACTION_SET_VALID' => 'صالح',
  'LBL_EMAIL_ADD' => 'إضافة بريد إلكتروني',
  'LBL_EMAIL_ADDRESSES' => 'البريد الإلكتروني',
  'LBL_EMAIL_ADDRESSES_TITLE' => 'عناوين البريد الإلكتروني',
  'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'تم',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'نسخة مخفية:',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'نسخة:',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST' => 'قائمة جديدة',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'إلى:',
  'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'إلى/نسخة/نسخة مخفية',
  'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'مسح',
  'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'عنوان البريد الإلكتروني',
  'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT' => 'يتم دعم تعديل "جهة الاتصال" فقط في هذا الوقت.',
  'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'عامل التصفية',
  'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME' => 'الاسم الأول/اسم الحساب',
  'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME' => 'الاسم الأخير',
  'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS' => 'جهات الاتصال الخاصة بي',
  'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS' => 'قوائم البريد الخاصة بي',
  'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'الاسم',
  'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'لم يتم العثور على عناوين',
  'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'الحفظ والإضافة إلى دفتر العناوين',
  'LBL_EMAIL_ADDRESS_BOOK_SEARCH' => 'بحث',
  'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'تحديد مستلمي البريد الإلكتروني',
  'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'دفتر العناوين',
  'LBL_EMAIL_ADDRESS_PRIMARY' => 'عنوان البريد الإلكتروني',
  'LBL_EMAIL_ADDR_DISPLAY_MSG' => 'عرض عنوان رسالة (رسائل) البريد الإلكتروني {0} - {1} لـ {2}',
  'LBL_EMAIL_ARCHIVED' => 'تمت أرشفة البريد الإلكتروني',
  'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'استيراد إلى Sugar',
  'LBL_EMAIL_ASSIGNED_TO_USER' => 'معيَّن للمستخدم',
  'LBL_EMAIL_ASSIGNMENT' => 'المهمة',
  'LBL_EMAIL_ASSIGN_TO' => 'التعيين إلى',
  'LBL_EMAIL_ATTACHMENT' => 'إرفاق',
  'LBL_EMAIL_ATTACHMENTS' => 'من نظام محلي',
  'LBL_EMAIL_ATTACHMENTS2' => 'من مستندات Sugar',
  'LBL_EMAIL_ATTACHMENTS3' => 'مرفقات القالب',
  'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'المستند',
  'LBL_EMAIL_ATTACHMENTS_EMBEDED' => 'مدمج',
  'LBL_EMAIL_ATTACHMENTS_FILE' => 'الملف',
  'LBL_EMAIL_ATTACHMENT_UPLOAD_FAILED' => 'فشل تحميل الإرفاق',
  'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'إرفاق',
  'LBL_EMAIL_BCC' => 'نسخة مخفية',
  'LBL_EMAIL_BUTTON' => 'البريد الإلكتروني',
  'LBL_EMAIL_CANCEL' => 'إلغاء',
  'LBL_EMAIL_CC' => 'نسخة',
  'LBL_EMAIL_CHARSET' => 'مجموعة الحروف',
  'LBL_EMAIL_CHECK' => 'فحص البريد',
  'LBL_EMAIL_CHECKING_DESC' => 'الرجاء الانتظار... <br><br>إذا كانت هذه هي المرة الأولى التي تقوم فيها بالتحقق من حساب البريد الإلكتروني، فقد يستغرق الأمر بعض الوقت.',
  'LBL_EMAIL_CHECKING_NEW' => 'التحقق من ورود بريد إلكتروني جديد',
  'LBL_EMAIL_CLEARING_CACHE_FILES' => 'مسح ملفات التخزين المؤقت',
  'LBL_EMAIL_CLOSE' => 'إغلاق',
  'LBL_EMAIL_COFFEE_BREAK' => 'تحقق من ورود بريد إلكتروني جديد. <br><br>حسابات البريد الإلكتروني الكبيرة قد تستغرق قدرًا كبيرًا من الوقت.',
  'LBL_EMAIL_COMMON' => 'عام',
  'LBL_EMAIL_COMPOSE' => 'البريد الإلكتروني',
  'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'يرجى إدخال مستلم (مستلمين) لهذا البريد الإلكتروني.',
  'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'يرجى إدخال عنوان بريد إلكتروني صالح للحقول "إلى"، و"نسخة"، و"نسخة مخفية"',
  'LBL_EMAIL_COMPOSE_LINK_TO' => 'شريك مع',
  'LBL_EMAIL_COMPOSE_NO_BODY' => 'نص هذا البريد الإلكتروني فارغ.  الإرسال على أي حال؟',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'هذا البريد الإلكتروني لا يتضمن عنوانًا.  الإرسال على أي حال؟',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(لا يوجد عنوان)',
  'LBL_EMAIL_COMPOSE_OPTIONS' => 'الخيارات',
  'LBL_EMAIL_COMPOSE_READ' => 'قراءة وإنشاء البريد الإلكتروني',
  'LBL_EMAIL_COMPOSE_SEND_FROM' => 'الإرسال من حساب البريد',
  'LBL_EMAIL_CONFIRM_CLOSE' => 'تجاهل هذا البريد الإلكتروني؟',
  'LBL_EMAIL_CONFIRM_DELETE' => 'إزالة هذه الإدخالات من دفتر العناوين لديك؟',
  'LBL_EMAIL_CONFIRM_DELETE_LIST' => 'هل تريد إزالة هذه الإدخالات من قوائم المراسلة لديك؟',
  'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'هل تريد بالتأكيد حذف هذا التوقيع؟',
  'LBL_EMAIL_CREATE_NEW' => '--الإنشاء عند الحفظ--',
  'LBL_EMAIL_DATE_RECEIVED' => 'تاريخ الاستلام',
  'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'تاريخ الإرسال بواسطة المرسل',
  'LBL_EMAIL_DATE_TODAY' => 'اليوم',
  'LBL_EMAIL_DATE_YESTERDAY' => 'أمس',
  'LBL_EMAIL_DD_TEXT' => 'رسالة (رسائل) البريد الإلكتروني المحددة.',
  'LBL_EMAIL_DEFAULTS' => 'الافتراضيات',
  'LBL_EMAIL_DELETE' => 'حذف',
  'LBL_EMAIL_DELETE_CONFIRM' => 'حذف الرسائل المحددة؟',
  'LBL_EMAIL_DELETE_ERROR_DESC' => 'لا يوجد لديك حق الوصول إلى هذه المنطقة. اتصل بمسؤول الموقع لديك للحصول على حق الوصول.',
  'LBL_EMAIL_DELETE_SUCCESS' => 'تم حذف البريد الإلكتروني بنجاح.',
  'LBL_EMAIL_DELETING_MESSAGE' => 'حذف الرسالة',
  'LBL_EMAIL_DELETING_OUTBOUND' => 'حذف الخادم الخارجي',
  'LBL_EMAIL_DELIMITER' => '::;::',
  'LBL_EMAIL_DETAILS' => 'التفاصيل',
  'LBL_EMAIL_DISPLAY_MSG' => 'عرض رسالة (رسائل) البريد الإلكتروني {0} - {1} لـ {2}',
  'LBL_EMAIL_DONE_BUTTON_LABEL' => 'تم',
  'LBL_EMAIL_DOWNLOAD_STATUS' => 'تم تنزيل [[عدد]] من [[إجمالي]] رسائل البريد',
  'LBL_EMAIL_EDIT_CONTACT' => 'تعديل جهة الاتصال',
  'LBL_EMAIL_EDIT_CONTACT_WARN' => 'سيتم استخدام العنوان "الرئيسي" فقط عند العمل مع "جهات الاتصال".',
  'LBL_EMAIL_EDIT_MAILING_LIST' => 'تعديل قائمة المراسلة',
  'LBL_EMAIL_EMPTYING_TRASH' => 'تفريغ سلة المهملات',
  'LBL_EMAIL_EMPTY_ADDR_MSG' => 'لا توجد عناوين رسائل بريد إلكتروني لعرضها.',
  'LBL_EMAIL_EMPTY_MSG' => 'لا توجد رسائل بريد إلكتروني لعرضها.',
  'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'يجب أن يكون اسم المجلد فريدًا وغير فارغ. يُرجى المحاولة مرة أخرى.',
  'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'لا يمكن تحديد المجلد المستهدف من السياق.  حاول مرة أخرى.',
  'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'يرجى التحقق من الإعدادات لديك.',
  'LBL_EMAIL_ERROR_CONTACT_NAME' => 'يرجى التأكد من إدخال اسم أخير.',
  'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'لا يمكن حذف مجلد. إما أن المجلد أو أي من المجلدات التابعة له تحتوي على رسائل بريد إلكتروني وإما توجد علبة بريد مقترنة به.',
  'LBL_EMAIL_ERROR_DESC' => 'الأخطاء التي تم اكتشافها: ',
  'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'أسماء مجلدات Sugar يجب أن تكون فريدة.',
  'LBL_EMAIL_ERROR_EMPTY' => 'يرجى إدخال بعض معايير البحث.',
  'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'عنوان "من" مطلوب.  يرجى إدخال عنوان بريد إلكتروني صالح.',
  'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'حدث خطأ',
  'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'إما أنه تمت إزالة الرسالة من الخادم وإما تم نقلها إلى مجلد آخر',
  'LBL_EMAIL_ERROR_LIST_NAME' => 'هناك قائمة رسائل بريد إلكتروني بهذا الاسم موجودة بالفعل',
  'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'فشل الاتصال بخادم البريد. يرجى الاتصال بالمسؤول لديك',
  'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'الرسالة التي تمت إزالتها من الخادم',
  'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'مجلد المُراقب مطلوب.',
  'LBL_EMAIL_ERROR_MOVE' => 'نقل "البريد الإلكتروني" بين الخوادم و/أو حسابات البريد الإلكتروني لا يمكن دعمه في هذا الوقت.',
  'LBL_EMAIL_ERROR_MOVE_TITLE' => 'خطأ أثناء النقل',
  'LBL_EMAIL_ERROR_NAME' => 'الاسم مطلوب.',
  'LBL_EMAIL_ERROR_NO_FILE' => 'يرجى توفير ملف.',
  'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'إعادة تسمية مجلد IMAP غير مدعومة في هذا الوقت.',
  'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'لا يوجد خادم بريد صادر محدد.',
  'LBL_EMAIL_ERROR_PASSWORD' => 'كلمة المرور مطلوبة.',
  'LBL_EMAIL_ERROR_PORT' => 'منفذ خادم البريد مطلوب.',
  'LBL_EMAIL_ERROR_PREPEND' => 'خطأ:',
  'LBL_EMAIL_ERROR_PROTOCOL' => 'بروتوكول الخادم مطلوب.',
  'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'حساب البريد ربما لم يتم حفظه.',
  'LBL_EMAIL_ERROR_SERVER' => 'يلزم إدخال عنوان خادم البريد.',
  'LBL_EMAIL_ERROR_TIMEOUT' => 'حدث خطأ أثناء الاتصال بخادم البريد.',
  'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'مجلد المهملات مطلوب.',
  'LBL_EMAIL_ERROR_USER' => 'اسم تسجل الدخول مطلوب.',
  'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'هذه المعلومات غير متاحة.',
  'LBL_EMAIL_FOLDERS' => 'المجلدات',
  'LBL_EMAIL_FOLDERS_ACTIONS' => 'انتقل إلى',
  'LBL_EMAIL_FOLDERS_ADD' => 'إضافة',
  'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'إضافة مجلد جديد',
  'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'حفظ',
  'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'إضافة هذا المجلد إلى',
  'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'غير قادر على تغيير هذا المجلد',
  'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'هل تريد بالتأكيد حذف هذا المجلد؟ غير قادر على عكس هذه العملية. عمليات حذف المجلد ستتوالى على جميع المجلدات المتضمنة.',
  'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'اسم مجلد جديد',
  'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'يُرجى تحديد مجلد قبل القيام بهذا الإجراء.',
  'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'إعادة تسمية مجلد',
  'LBL_EMAIL_FOLDERS_TITLE' => 'إدارة المجلدات',
  'LBL_EMAIL_FOLDERS_USING_GROUP_USER' => 'استخدام مجموعة',
  'LBL_EMAIL_FOLDERS_USING_TEAM' => 'تعيين لفريق',
  'LBL_EMAIL_FORWARD' => 'للأمام',
  'LBL_EMAIL_FOUND' => 'موجود',
  'LBL_EMAIL_FROM' => 'من',
  'LBL_EMAIL_GROUP' => 'المجموعة',
  'LBL_EMAIL_HOME_FOLDER' => 'الصفحة الرئيسية',
  'LBL_EMAIL_HTML_RTF' => 'إرسال HTML',
  'LBL_EMAIL_IE_DELETE' => 'حذف حساب البريد',
  'LBL_EMAIL_IE_DELETE_CONFIRM' => 'هل تريد بالتأكيد حذف حساب البريد هذا؟',
  'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'حذف التوقيع',
  'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'تم الحذف بنجاح.',
  'LBL_EMAIL_IE_SAVE' => 'حفظ معلومات حساب البريد',
  'LBL_EMAIL_IMPORTING_EMAIL' => 'استيراد بريد إلكتروني',
  'LBL_EMAIL_IMPORT_EMAIL' => 'استيراد إلى Sugar',
  'LBL_EMAIL_IMPORT_FAIL' => 'فشل الاستيراد إما لأن الرسالة قد تم استيرادها بالفعل، وإما لأنها قد تم حذفها من الخادم',
  'LBL_EMAIL_IMPORT_SETTINGS' => 'إعدادات الاستيراد',
  'LBL_EMAIL_IMPORT_SUCCESS' => 'نجح الاستيراد',
  'LBL_EMAIL_INVALID' => 'غير صالح',
  'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'خادم البريد الصادر المحدد لحسابك للبريد غير صالح.  تحقق من الإعدادات أو قم بتحديد خادم بريد لحساب البريد.',
  'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'لم تتم تهيئة خادم البريد الصادر لإرسال رسائل البريد. يُرجى تهيئة خادم بريد صادر أو تحديد خادم بريد صادر لحساب البريد الذي تستخدمه من إعدادات >> حساب البريد.',
  'LBL_EMAIL_INV_TITLE' => 'عنوان بريد إلكتروني غير صالح',
  'LBL_EMAIL_LINK_RECORD' => 'انقر هنا',
  'LBL_EMAIL_LIST_RENAME_DESC ' => 'أدخل اسمًا جديدًا لقائمة المراسلة',
  'LBL_EMAIL_LIST_RENAME_TITLE' => 'إعادة تسمية قائمة المراسلة',
  'LBL_EMAIL_LOADING' => 'يتم الآن التحميل...',
  'LBL_EMAIL_MARK' => 'علامة',
  'LBL_EMAIL_MARK_FLAGGED' => 'كمميز بعلامة',
  'LBL_EMAIL_MARK_READ' => 'كمقروء',
  'LBL_EMAIL_MARK_UNFLAGGED' => 'كغير مميز بعلامة',
  'LBL_EMAIL_MARK_UNREAD' => 'كغير مقروء',
  'LBL_EMAIL_MENU_ADD_FOLDER' => 'إنشاء مجلد',
  'LBL_EMAIL_MENU_CLEAR_CACHE' => 'مسح ملفات التخزين المؤقت',
  'LBL_EMAIL_MENU_COMPOSE' => 'إنشاء لـ',
  'LBL_EMAIL_MENU_DELETE_FOLDER' => 'حذف مجلد',
  'LBL_EMAIL_MENU_EDIT' => 'تحرير',
  'LBL_EMAIL_MENU_EMPTY_TRASH' => 'تفريغ سلة المهملات',
  'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'إنشاء مجلد (عن بُعد أو في Sugar)',
  'LBL_EMAIL_MENU_HELP_ARCHIVE' => 'أرشفة هذا البريد (رسائل البريد) إلى SugarCRM',
  'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST' => 'إرسال رسائل البريد لقوائم المراسلات المحددة',
  'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE' => 'إرسال بريد لجهة الاتصال هذه',
  'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE' => 'مسح جهة اتصال',
  'LBL_EMAIL_MENU_HELP_DELETE' => 'حذف تلك الرسالة (الرسائل) من البريد الإلكتروني',
  'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'حذف مجلد (عن بُعد أو في Sugar)',
  'LBL_EMAIL_MENU_HELP_EDIT_CONTACT' => 'تحرير جهة اتصال',
  'LBL_EMAIL_MENU_HELP_EDIT_LIST' => 'تعديل قائمة مراسلة',
  'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'تفريغ جميع مجلدات سلة المهملات لحسابات بريدك الإلكتروني',
  'LBL_EMAIL_MENU_HELP_MARK_FLAGGED' => 'وضع علامة على هذه الرسالة (الرسائل)',
  'LBL_EMAIL_MENU_HELP_MARK_READ' => 'وضع علامة مقروء على هذه الرسالة (الرسائل)',
  'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'تلك الرسالة (الرسائل) بدون علامة',
  'LBL_EMAIL_MENU_HELP_MARK_UNREAD' => 'تلك الرسالة (الرسائل) غير مقروءة',
  'LBL_EMAIL_MENU_HELP_REMOVE_LIST' => 'مسح قوائم المراسلة الخاصة بي',
  'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'إعادة تسمية مجلد (عن بُعد أو في Sugar)',
  'LBL_EMAIL_MENU_HELP_REPLY' => 'الرد على هذه الرسالة (الرسائل)',
  'LBL_EMAIL_MENU_HELP_REPLY_ALL' => 'الرد على كل المستلمين لهذه الرسالة (الرسائل) في البريد الإلكتروني',
  'LBL_EMAIL_MENU_MAKE_SELECTION' => 'يُرجى التحديد قبل محاولة إجراء هذه العملية.',
  'LBL_EMAIL_MENU_REMOVE' => 'إزالة',
  'LBL_EMAIL_MENU_RENAME' => 'إعادة تسمية',
  'LBL_EMAIL_MENU_RENAME_FOLDER' => 'إعادة تسمية مجلد',
  'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'إعادة تسمية مجلد جارية',
  'LBL_EMAIL_MENU_SYNCHRONIZE' => 'تزامن',
  'LBL_EMAIL_MESSAGES' => 'الرسائل',
  'LBL_EMAIL_MESSAGE_NO' => 'رسالة لا',
  'LBL_EMAIL_ML_ADDRESSES_1' => 'عناوين القائمة المحددة',
  'LBL_EMAIL_ML_ADDRESSES_2' => 'عناوين القائمة المتاحة',
  'LBL_EMAIL_ML_NAME' => 'اسم القائمة',
  'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-انقر</b> لتحديد متعدد<br />(يستخدم مستخدموMac <b>CMD-انقر</b>)',
  'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'متعدد',
  'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'فارغ',
  'LBL_EMAIL_NO' => 'لا',
  'LBL_EMAIL_NOT_SENT' => 'هناك مشكلة في إرسال البريد الإلكتروني المطلوب. يُرجى الاتصال بمسؤول النظام.',
  'LBL_EMAIL_OK' => 'موافق',
  'LBL_EMAIL_ONE_MOMENT' => 'الرجاء الانتظار...',
  'LBL_EMAIL_OPEN_ALL' => 'فتح رسائل متعددة',
  'LBL_EMAIL_OPTIONS' => 'الخيارات',
  'LBL_EMAIL_OPT_OUT' => 'المرفوضة',
  'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'مرفوضة وغير صالحة',
  'LBL_EMAIL_OPT_TITLE' => 'عنوان البريد الإلكتروني المرفوض',
  'LBL_EMAIL_PAGE_AFTER' => 'من {0}',
  'LBL_EMAIL_PAGE_BEFORE' => 'صفحة',
  'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
  'LBL_EMAIL_PDF_BUTTON_LABEL' => 'بريد إلكتروني كملف PDF',
  'LBL_EMAIL_PDF_BUTTON_TITLE' => 'بريد إلكتروني كملف PDF',
  'LBL_EMAIL_PERFORMING_TASK' => 'القيام بمهمة',
  'LBL_EMAIL_POP3_REMOVE_MESSAGE' => 'بروتوكول خادم البريد من النوع POP3 لن يتم دعمه في الإصدار التالي. سيتم فقط دعم IMAP.',
  'LBL_EMAIL_PRIMARY' => 'أساسي',
  'LBL_EMAIL_PRIM_TITLE' => 'عنوان البريد الإلكتروني الرئيسي',
  'LBL_EMAIL_PRINT' => 'طباعة',
  'LBL_EMAIL_QC_BUGS' => 'الخطأ',
  'LBL_EMAIL_QC_CASES' => 'الحالة',
  'LBL_EMAIL_QC_CONTACTS' => 'جهة الاتصال',
  'LBL_EMAIL_QC_LEADS' => 'العميل المتوقع',
  'LBL_EMAIL_QC_OPPORTUNITIES' => 'الفرصة',
  'LBL_EMAIL_QC_TASKS' => 'المهمة',
  'LBL_EMAIL_QUICK_COMPOSE' => 'إنشاء سريع',
  'LBL_EMAIL_QUICK_CREATE' => 'إنشاء سريع',
  'LBL_EMAIL_REBUILDING_FOLDERS' => 'إعادة إنشاء مجلدات',
  'LBL_EMAIL_RECORD' => 'سجل البريد الإلكتروني',
  'LBL_EMAIL_RECV' => 'المسجل',
  'LBL_EMAIL_RELATE_EMAIL' => 'ربط البريد الإلكتروني',
  'LBL_EMAIL_RELATE_TO' => 'ربط',
  'LBL_EMAIL_REMOVE' => 'إزالة',
  'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'تحذير! الحساب الخارجي الذي تحاول حذفه مقترن بحساب داخلي حالي.  هل تريد بالتأكيد المتابعة؟',
  'LBL_EMAIL_REPLY' => 'الرد',
  'LBL_EMAIL_REPLY_ALL' => 'الرد على الكل',
  'LBL_EMAIL_REPLY_TO' => 'الرد على',
  'LBL_EMAIL_REPORTS_TITLE' => 'التقارير',
  'LBL_EMAIL_RETRIEVING_LIST' => 'استعادة قائمة البريد الإلكتروني',
  'LBL_EMAIL_RETRIEVING_MESSAGE' => 'استعادة الرسائل',
  'LBL_EMAIL_RETRIEVING_RECORD' => 'استعادة سجل البريد الإلكتروني',
  'LBL_EMAIL_RETURN_TO_VIEW' => 'العودة إلى النموذج السابق؟',
  'LBL_EMAIL_REVERT' => 'عودة',
  'LBL_EMAIL_RULES_TITLE' => 'إدارة قاعدة',
  'LBL_EMAIL_SAVE' => 'حفظ',
  'LBL_EMAIL_SAVE_AND_REPLY' => 'الحفظ والرد',
  'LBL_EMAIL_SAVE_DRAFT' => 'حفظ المسودة',
  'LBL_EMAIL_SEARCHING' => 'إجراء بحث',
  'LBL_EMAIL_SEARCH_ADVANCED' => 'بحث متقدم',
  'LBL_EMAIL_SEARCH_DATE_FROM' => 'التاريخ من',
  'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'التاريخ حتى',
  'LBL_EMAIL_SEARCH_FULL_TEXT' => 'نص الموضوع',
  'LBL_EMAIL_SEARCH_NO_RESULTS' => 'لم يتم العثور على نتائج مطابقة لمعايير البحث الخاصة بك.',
  'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'نتائج البحث',
  'LBL_EMAIL_SEARCH_TITLE' => 'بحث بسيط',
  'LBL_EMAIL_SEARCH__FROM_ACCOUNTS' => 'البحث عن حساب البريد الإلكتروني',
  'LBL_EMAIL_SELECT' => 'تحديد',
  'LBL_EMAIL_SELECT_ONE_RECORD' => 'يُرجى تحديد سجل بريد إلكتروني واحد',
  'LBL_EMAIL_SEND' => 'إرسال',
  'LBL_EMAIL_SENDING_EMAIL' => 'إرسال بريد إلكتروني',
  'LBL_EMAIL_SENT' => 'المرسلة',
  'LBL_EMAIL_SETTINGS' => 'الإعدادات',
  'LBL_EMAIL_SETTINGS_2_ROWS' => 'صفان',
  'LBL_EMAIL_SETTINGS_3_COLS' => '3 أعمدة',
  'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'حسابات البريد',
  'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'مسح نموذج',
  'LBL_EMAIL_SETTINGS_AUTO_IMPORT' => 'استيراد البريد عند العرض',
  'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'التحقق من ورود بريد إلكتروني جديد',
  'LBL_EMAIL_SETTINGS_COMPOSE_INLINE' => 'استخدم جزء المعاينة',
  'LBL_EMAIL_SETTINGS_COMPOSE_POPUP' => 'استخدم نافذة منبثقة',
  'LBL_EMAIL_SETTINGS_DISPLAY_NUM' => 'عدد رسائل البريد الإلكتروني بكل صفحة',
  'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT' => 'تحرير حساب البريد',
  'LBL_EMAIL_SETTINGS_FOLDERS' => 'المجلدات',
  'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'عنوان "من"',
  'LBL_EMAIL_SETTINGS_FROM_NAME' => 'من اسم',
  'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'عنوان البريد الإلكتروني من أجل اختبار الإشعارات:',
  'LBL_EMAIL_SETTINGS_FULL_SCREEN' => 'شاشة كاملة',
  'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'مزامنة جميع حسابات البريد الإلكتروني',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC' => 'القيام بهذا الإجراء سيتزامن مع حسابات البريد الإلكتروني ومحتوياتها.',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'إجراء مزامنة كاملة؟\\nفي حسابات البريد الإلكتروني الضخمة قد يستغرق ذلك بضع دقائق.',
  'LBL_EMAIL_SETTINGS_GENERAL' => 'عام',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS' => 'مجلدات مجموعة متاحة',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'إنشاء مجلدات مجموعة',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'تعديل مجلد مجموعة',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'حفظ مجلدات مجموعة',
  'LBL_EMAIL_SETTINGS_LAYOUT' => 'نمط المخطط',
  'LBL_EMAIL_SETTINGS_MUST_RELOAD' => 'يتعين عليك إعادة تحميل الصفحة لبدء سريان الإعدادات الجديدة.',
  'LBL_EMAIL_SETTINGS_NAME' => 'اسم حساب البريد',
  'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'الرد على العنوان',
  'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'تحديد عدد رسائل البريد بكل صفحة في صندوق الوارد. قد يحتاج هذا الإعداد إلى تحديث صفحة ليسري التأثير.',
  'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'استعادة حساب البريد',
  'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP' => 'استعادة مجلد مجموعة',
  'LBL_EMAIL_SETTINGS_RULES' => 'القواعد',
  'LBL_EMAIL_SETTINGS_SAVED' => 'تم حفظ الإعدادات.',
  'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'إرسال رسائل بريد بنص عادي فقط',
  'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS' => 'نشط',
  'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'رسائل البريد بكل صفحة',
  'LBL_EMAIL_SETTINGS_TAB_POS' => 'وضع علامات تبويب في الأسفل',
  'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'الإعدادات المرئية',
  'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'التفضيلات',
  'LBL_EMAIL_SETTINGS_TOGGLE_ADV' => 'عرض الخيارات المتقدمة',
  'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR' => 'إلى عنوان البريد الإلكتروني',
  'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'مجلدات مستخدم متاحة',
  'LBL_EMAIL_SHOW_READ' => 'إظهار الكل',
  'LBL_EMAIL_SHOW_UNREAD_ONLY' => 'إظهار غير المقروء فقط',
  'LBL_EMAIL_SIGNATURES' => 'توقيعات',
  'LBL_EMAIL_SIGNATURE_CREATE' => 'إنشاء توقيع',
  'LBL_EMAIL_SIGNATURE_NAME' => 'اسم التوقيع',
  'LBL_EMAIL_SIGNATURE_TEXT' => 'موضوع التوقيع',
  'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'تمكين SMTP عبر SSL أو TLS؟',
  'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ مجلدات Sugar ]',
  'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ مجلدات عن بُعد ]',
  'LBL_EMAIL_SUBJECT' => 'الموضوع',
  'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'انقر فوق المفتاح Shift أو المفتاح Ctrl لتحديد مجلدات متعددة.',
  'LBL_EMAIL_SUCCESS' => 'نجاح',
  'LBL_EMAIL_SUGAR_FOLDER' => 'مجلد Sugar',
  'LBL_EMAIL_TEAMS' => 'تعيين إلى فرق العمل',
  'LBL_EMAIL_TEMPLATES' => 'قوالب',
  'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'نص قالب البريد الإلكتروني فارغ',
  'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'تم إرسال بريد إلكتروني لعنوان البريد الإلكتروني المحدد باستخدام إعدادات البريد الصادر المقدمة. يُرجى التحقق من احتمال استلام البريد الإلكتروني للتحقق من صحة الإعدادات.',
  'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'إرسال بريد إلكتروني اختبار',
  'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'تم إرسال رسالة اختبار ',
  'LBL_EMAIL_TEXT_FIRST' => 'الصفحة الأولى',
  'LBL_EMAIL_TEXT_LAST' => 'الصفحة الأخيرة',
  'LBL_EMAIL_TEXT_NEXT' => 'الصفحة التالية',
  'LBL_EMAIL_TEXT_PREV' => 'الصفحة السابقة',
  'LBL_EMAIL_TEXT_REFRESH' => 'تحديث',
  'LBL_EMAIL_TITLE' => 'عنوان البريد الإلكتروني',
  'LBL_EMAIL_TO' => 'إلى',
  'LBL_EMAIL_TOGGLE_LIST' => 'تبديل القائمة',
  'LBL_EMAIL_UPPER_CASE_GROUP' => 'المجموعة',
  'LBL_EMAIL_VIEW' => 'عرض',
  'LBL_EMAIL_VIEWS' => 'عروض',
  'LBL_EMAIL_VIEW_HEADERS' => 'عرض العناوين',
  'LBL_EMAIL_VIEW_PRINTABLE' => 'إصدار قابل للطباعة',
  'LBL_EMAIL_VIEW_RAW' => 'عرض البريد الإلكتروني البسيط',
  'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'عرض العلاقات',
  'LBL_EMAIL_VIEW_UNSUPPORTED' => 'هذه الخاصية غير مدعومة عند استخدامها مع POP3.',
  'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'تحذير: كلمة المرور أو اسم المستخدم لحساب البريد الصادر مفقود.',
  'LBL_EMAIL_YES' => 'نعم',
  'LBL_EMPLOYEES' => 'الموظفون',
  'LBL_EMPTY' => 'فارغ',
  'LBL_EMPTY_REQUIRED_VCARD' => 'vCard ليس لديه كل الحقول المطلوبة لهذه الوحدة.',
  'LBL_EMPTY_VCARD' => 'يرجى تحديد ملف vCard',
  'LBL_ENABLE_JAVASCRIPT' => 'يحتاج SugarCRM إلى javascript. الرجاء تمكين javascript لمتابعة استخدام SugarCRM.',
  'LBL_ENTER_DATE' => 'أدخل التاريخ',
  'LBL_ENTER_EMAIL' => 'أدخل البريد الإلكتروني لاسم مدعو...',
  'LBL_ENTER_VALID_YEAR' => 'يرجى إدخال عام صالح',
  'LBL_ENTER_YEAR' => 'إدخال عام',
  'LBL_ERROR' => 'خطأ',
  'LBL_ERROR_CANNOT_FIND_TWITTER' => 'لا يمكن العثور على توقيت زمني صالح لمعرّف Twitter: ',
  'LBL_ERROR_RETRIEVING_FREE_BUSY' => 'حدث خطأ أثناء استعادة الجدول.',
  'LBL_ERR_LOADING_RSS_FEED' => 'فشل تحميل تغذية RSS',
  'LBL_EXISTING' => 'الحالي',
  'LBL_EXPAND_ALL' => 'توسيع الكل',
  'LBL_EXPORT' => 'تصدير',
  'LBL_EXPORT_ALL' => 'تصدير الكل',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'تعيين إلى',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'المستخدم المعين',
  'LBL_EXPORT_FULL_NAME' => 'الاسم بالكامل',
  'LBL_EXPORT_REPORTS_TO_ID' => 'معرّف التقارير إلى ',
  'LBL_EXPORT_TEAM_ID' => 'معرّف الفريق',
  'LBL_EXPORT_TEAM_NAME' => 'الفرق',
  'LBL_EXPORT_TEAM_SET_ID' => 'المعرّف المعين للفريق',
  'LBL_EXTERNAL_LOGIN_BUTTON_TITLE' => 'تسجيل دخول فردي',
  'LBL_EXTERNAL_SECURITY_LEVEL' => 'الأمان',
  'LBL_FAILED' => 'فشل!',
  'LBL_FASTCGI_LOGGING' => 'للحصول على أفضل تجربة باستخدام IIS/FastCGI sapi، اضبط دخول fastcgi.logging على 0 في ملف php.ini الخاص بك.',
  'LBL_FAVORITE' => 'المفضلة',
  'LBL_FAVORITES' => 'المفضلة',
  'LBL_FAVORITES_FILTER' => 'المفضلة بالنسبة لي:',
  'LBL_FEEDBACK' => 'تعليقات',
  'LBL_FILES_OPENED' => 'الملفات التي تم الوصول إليها',
  'LBL_FILE_BUTTON' => 'الملف',
  'LBL_FILE_DELETED' => 'تم حذف الملف بنجاح',
  'LBL_FILE_DELETE_CONFIRM' => 'هل تريد بالتأكيد حذف هذا الملف؟ لا يمكن التراجع عن ذلك.',
  'LBL_FILE_SIZE_UNITS_B' => 'بايت',
  'LBL_FILE_SIZE_UNITS_KB' => 'كيلوبايت',
  'LBL_FILE_SIZE_UNITS_MB' => 'ميجابايت',
  'LBL_FILTER' => 'عامل التصفية',
  'LBL_FILTERED' => 'تمت تصفيته',
  'LBL_FILTER_ALL_RECORDS' => 'كل السجلات',
  'LBL_FILTER_BETWEEN_FROM' => 'من',
  'LBL_FILTER_BETWEEN_TO' => 'إلى',
  'LBL_FILTER_CREATE_NEW' => 'إنشاء',
  'LBL_FILTER_DATEBETWEEN_FROM' => 'تاريخ البدء',
  'LBL_FILTER_DATEBETWEEN_TO' => 'تاريخ الانتهاء',
  'LBL_FILTER_MENU_BY' => 'قائمة عوامل التصفية حسب',
  'LBL_FILTER_SELECT_FIELD' => 'يتم الآن تحديد حقل...',
  'LBL_FILTER_SELECT_OPERATOR' => 'يتم الآن تحديد مشغل...',
  'LBL_FINISH_BUTTON_LABEL' => 'إنهاء',
  'LBL_FINISH_BUTTON_TITLE' => 'إنهاء',
  'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'أول يوم من الشهر القادم',
  'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
  'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
  'LBL_FIXED_IN_RELEASE' => 'تم التصحيح في الإصدار',
  'LBL_FOLLOW' => 'متابعة',
  'LBL_FOLLOWING' => 'التابع',
  'LBL_FOLLOW_LINK' => 'ارتباط متابعة',
  'LBL_FONTSIZE_EXTRA_HUGE' => 'ضخم للغاية',
  'LBL_FONTSIZE_HUGE' => 'ضخم',
  'LBL_FONTSIZE_LARGE' => 'كبير',
  'LBL_FONTSIZE_LARGER' => 'أكبر',
  'LBL_FONTSIZE_NORMAL' => 'عادي (افتراضي)',
  'LBL_FONTSIZE_SMALL' => 'صغير',
  'LBL_FONTSIZE_TINY' => 'دقيق',
  'LBL_FORECAST_WORKSHEET' => 'ورقة عمل التنبؤ',
  'LBL_FORECAST_WORKSHEETS' => 'أوراق عمل التنبؤ',
  'LBL_FOUND_IN_RELEASE' => 'تم العثور عليه في الإصدار',
  'LBL_FULL_FORM_BUTTON_KEY' => 'L',
  'LBL_FULL_FORM_BUTTON_LABEL' => 'نموذج كامل',
  'LBL_FULL_FORM_BUTTON_TITLE' => 'نموذج كامل',
  'LBL_GENERATE_QUOTE' => 'إنشاء عرض سعر',
  'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'إنشاء نموذج',
  'LBL_GETTINGAIR' => 'Getting Air',
  'LBL_GLOBAL_SEARCH' => 'بحث شامل',
  'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
  'LBL_GLOBAL_SEARCH_MODULE_FILTER' => 'عامل تصفية وحدة البحث الشامل',
  'LBL_GLOBAL_SEARCH_RUN' => 'تشغيل بحث شامل',
  'LBL_GLOBAL_SHORTCUTS' => 'اختصارات عامة',
  'LBL_GO_BUTTON_LABEL' => 'انتقال',
  'LBL_GRID_SELECTED_FILE' => 'ملف محدد',
  'LBL_GRID_SELECTED_FILES' => 'ملفات محددة',
  'LBL_GROUP_EMAIL_ACCOUNT_CONFIGURATION' => 'حساب مجموعة',
  'LBL_GS_HELP' => 'تظهر الحقول في هذه الوحدة المستخدمة في هذا البحث أعلاه.  يتطابق النص المميز مع معيار البحث لديك.',
  'LBL_HELP' => 'تعليمات',
  'LBL_HELP_CREATE' => 'لإنشاء {{plural_module_name}}:
1. قم بتوفير قيم للحقول حسب الرغبة.
 *الحقول المميزة بعلامة \\"مطلوب\\" يجب استكمالها قبل الحفظ.
 *انقر فوق \\"إظهار المزيد\\" لكشف الحقول الإضافية إذا لزم الأمر.
2. انقر فوق الزر \\"حفظ\\" لإنهاء السجل الجديد والرجوع إلى {{plural_module_name}} عرض القائمة.
 * اختر \\"حفظ وعرض\\" لفتح {{module_name}} الجديد في عرض السجل.
 *اختر \\"حفظ وإنشاء جديد\\" لإنشاء سجل جديد على الفور {{module_name}}.',
  'LBL_HELP_CREATE_TITLE' => '{{module_name}} إنشاء',
  'LBL_HELP_DUPLICATE' => 'اكتشف Sugar أن السجل الذي تحاول إنشاءه قد يكون موجودًا بالفعل.

 لتعديل سجل موجود بخلاف إنشاء واحد جديد، انقر فوق \\"تحديد وتعديل\\" على يمين السجل المراد تعديله. يتم ملء أي حقول فارغة للسجل الموجود بالقيم التي قمت بإدخالها للتو. انقر فوق \\"حفظ\\" لتفعيل تلك التغييرات على السجل الموجود.

إذا لم يحدث ذلك، وكنت ترغب في استخدام القيم التي قمت بإدخالها بدلاً من القيم الموجودة بالسجل، فانقر فوق \\"إعادة الضبط إلى الأصل\\". سيتم تطبيق القيم التي أدخلتها على السجل الحالي، وقد تقوم بتوفير أي تغييرات إضافية وانقر فوق \\"حفظ\\" لإنهاء التعديلات على السجل الحالي.

لإنشاء سجل جديد باستخدام القيم التي أدخلتها، انقر فوق \\"تجاهل التكرار والحفظ\\" على يمين الشاشة.',
  'LBL_HELP_DUPLICATE_TITLE' => 'احتمال اكتشاف تكرار',
  'LBL_HELP_MORE_INFO' => 'لمزيد من المعلومات راجع مستندات {{{more_info_url}}} {{plural_module_name}}.{{{more_info_url_close}}}',
  'LBL_HELP_NO_HELP' => 'لا تتوفر بيانات',
  'LBL_HELP_PREVIEW' => 'تتيح لوحة التعليمات معلومات محددة للحفاظ على الوحدة التي تعرضها حاليًا مزودة برابط بالمستند المتوافق (مثال مستند القيم المتوقعة) في دليل التطبيق لمزيد من المعلومات.',
  'LBL_HELP_RECORD' => 'يتيح عرض هذا السجل من خلال البيانات الخاصة بفرد السجل بجانب بعض تفاصيل السجلات المرتبطة به.

- قم بتعديل حقول هذا السجل (السجلات) بواسطة النقر فوق حقل فردي، أو فوق الزر \\"تحرير\\".
- اعرض أو قم بتعديل الارتباطات إلى سجلات أخرى في اللوحات الفرعية بواسطة تبديل الجزء الأيسر السفلي إلى \\"عرض البيانات\\".
- قم بعمل وعرض تعليقات المستخدم وسجل تغيير السجلات بواسطة تبديل الجزء الأيسر السفلي إلى \\"سير النشاط\\".
- اتبع أو اجعل هذا السجل مفضلاً لديك باستخدام الرموز الموجودة على يمين اسم السجل.
- تتوفر إجراءات إضافية في القائمة المنسدلة \\"الإجراءات\\" الموجودة على يمين الزر \\"تحرير\\".',
  'LBL_HELP_RECORDS' => 'توضح قائمة الوحدة كل السجلات التي تلبي معايير البحث الحالي وأي المستخدمين الذين لهم حق الدخول. يمكنك عرض التفاصيل الأساسية لكل سجل داخل أعمدة الحقل الخاص بعرض القائمة أو انقر فوق اسم السجل لفتح عرض السجل.',
  'LBL_HELP_RECORDS_TITLE' => 'تعليمات طريقة عرض القائمة',
  'LBL_HELP_RECORD_TITLE' => 'تعليمات عرض السجل',
  'LBL_HIDE' => 'إخفاء',
  'LBL_HIDE_COLUMNS' => 'إخفاء أعمدة',
  'LBL_HIDE_SHOW' => 'إخفاء/إظهار',
  'LBL_HISTORICAL_SUMMARY' => 'ملخص تاريخي',
  'LBL_HISTORICAL_SUMMARY_EMAIL_FROM' => 'بريد إلكتروني من',
  'LBL_HISTORICAL_SUMMARY_EMAIL_TO' => 'إرسال بريد إلكتروني إلى',
  'LBL_HISTORY_DASHLET' => 'السجل',
  'LBL_HISTORY_DASHLET_DESCRIPTION' => 'توضح لوحة السجل الاجتماعات المنعقدة، والمكالمات المسجلة، ورسائل البريد المتلقاة، ورسائل البريد المرسلة.',
  'LBL_HISTORY_DASHLET_EMAIL_PLURAL' => 'رسائل البريد الإلكتروني',
  'LBL_HISTORY_DASHLET_EMAIL_SINGULAR' => 'البريد الإلكتروني',
  'LBL_HISTORY_DASHLET_GROUP_BUTTON_LABEL' => 'سجل الفريق',
  'LBL_HISTORY_DASHLET_USER_BUTTON_LABEL' => 'سجلي',
  'LBL_HOME' => 'الصفحة الرئيسية',
  'LBL_HONEYPOT' => 'إذا كنت شخصًا حقيقيًا فلا تملأ ذلك.',
  'LBL_HOURS' => 'ساعات',
  'LBL_ICON_COLUMN_1' => 'العمود',
  'LBL_ICON_COLUMN_2' => 'عمودان',
  'LBL_ICON_COLUMN_3' => '3 أعمدة',
  'LBL_ID' => 'المعرّف',
  'LBL_ID_FF_ADD' => 'إضافة',
  'LBL_ID_FF_CLEAR' => 'مسح',
  'LBL_ID_FF_REMOVE' => 'إلغاء الربط',
  'LBL_ID_FF_SELECT' => 'تحديد',
  'LBL_ID_FF_VCARD' => 'vCard',
  'LBL_IGNORE_DUPLICATE_AND_SAVE' => 'تجاهل التكرار والحفظ',
  'LBL_IMAGE' => 'صورة',
  'LBL_IMAGE_DELETE_CONFIRM' => 'هل تريد بالتأكيد حذف هذه الصوdة؟',
  'LBL_IMPORT' => 'استيراد',
  'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"هذه عينة ملف تم استيراده يوفر مثالاً للمحتويات المتوقعة لملف والجاهزة للاستيراد."
"هذا الملف عبارة عن ملف .csv مفصول بفاصلة، مستخدمًا أقواسًا مزدوجة كعامل تأهيل للحقل."

"يعتبر الصف الأمامي هو الصف الأعلى في الملف ويحتوي على بطاقات تسمية الحقل كما ستراه في التطبيق."
"يتم استخدام تلك البطاقات لوضع خريطة في الملف للحقول في ملاحظات."

"التطبيق: يمكن استخدام أسماء قواعد البيانات في الصف الأمامي. هذا مفيد عند استخدامك لـ phpMyAdmin أو قاعدة بيانات أخرى لتوفير قائمة مصدرة لبيانات لاستيرادها."
"لا يعتبر ترتيب العمود شيئًا حرجًا حيث تتطابق عملية استيراد البيانات بالحقول المناسبة القائمة على الصف الأمامي."


"لاستخدام هذا الملف كقالب، قم بالآتي:"
"1. احذف صفوف البيانات العينة"
"2. احذف نص التعليمات الذي تقرؤه الآن"
"3. أدخل بياناتك داخل الصفوف والأعمدة المناسبة"
"4. احفظ الملف في مكان معلوم على نظامك"
"5. انقر فوق خيار استيراد من القائمة "إجراءات" في التطبيق واختر الملف المراد تحميله"
   ',
  'LBL_IMPORT_STARTED' => 'تم بدء الاستيراد: ',
  'LBL_IMPORT_VCARD' => 'استيراد vCard:',
  'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
  'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'استيراد vCard',
  'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'استيراد vCard',
  'LBL_INACTIVE_TASKS_DASHLET' => 'المهام غير النشطة',
  'LBL_INACTIVE_TASKS_DASHLET_COMPLETED' => 'كامل',
  'LBL_INACTIVE_TASKS_DASHLET_DEFERRED' => 'مؤجل',
  'LBL_INACTIVE_TASKS_DASHLET_DESCRIPTION' => 'توضح لوحة المهام المؤجلة والكاملة.',
  'LBL_INACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL' => 'مهام الفريق',
  'LBL_INACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL' => 'مهامي',
  'LBL_INBOUNDEMAIL_ID' => 'معرّف البريد الإلكتروني الداخلي',
  'LBL_INCORRECT_PASSWORD' => 'خطأ: كلمة المرور غير صحيحة.',
  'LBL_INFOINLINE' => 'معلومات',
  'LBL_INSTANCES' => 'أمثلة',
  'LBL_INSTANCE_ACTIVE' => 'أنت تستخدم هذا المثال بالفعل!',
  'LBL_INSTANCE_INVITE_SENT' => 'تم إرسال الدعوة إلى',
  'LBL_INSTANCE_IN_USE' => 'مثال قيد الاستخدام',
  'LBL_INSTANCE_SWITCH_FAILED' => 'فشل تحويل الأمثلة',
  'LBL_INSTANCE_USERS' => 'مثال للمستخدمين',
  'LBL_INVALID_412_RESPONSE' => 'فشل الطلب مما يجعل التطبيق غير قابل للاستخدام. يرجى الاتصال بالدعم الفني.',
  'LBL_INVALID_CREDS' => 'دمج اسم المستخدم/كلمة المرور غير صحيح، يرجى المحاولة مرة أخرى.',
  'LBL_INVALID_CREDS_TITLE' => 'اعتمادات غير صالحة',
  'LBL_INVALID_FILE_EXTENSION' => 'امتداد الملف غير صالح',
  'LBL_INVALID_GRANT' => 'الرمز الخاص بك غير صالح أو انتهت صلاحيته. يرجى تسجيل الدخول مرة أخرى.',
  'LBL_INVALID_GRANT_TITLE' => 'الرمز منتهي الصلاحية',
  'LBL_INVALID_REQUEST' => 'الطلب غير صالح أو به عيوب. يرجى الاتصال بالدعم الفني.',
  'LBL_INVALID_REQUEST_TITLE' => 'طلب غير صالح',
  'LBL_INVALID_USA_PHONE_FORMAT' => 'يرجى إدخال رقم هاتف في الولايات المتحدة مكون من أرقام، تتضمن رمز المنطقة.',
  'LBL_INVITE' => 'دعوة',
  'LBL_INVITED' => 'مدعو',
  'LBL_INVITEES' => 'الضيوف',
  'LBL_IS_EMPTY' => 'هو فارغ',
  'LBL_IS_NOT_EMPTY' => 'ليس فارغًا',
  'LBL_ITEM_ID' => 'معرّف العنصر',
  'LBL_ITEM_SUMMARY' => 'ملخص العنصر',
  'LBL_JOB_NOTIFICATION_BODY_GENERIC' => 'تم تشغيل الوظيفة المجدولة بنجاح',
  'LBL_JOB_NOTIFICATION_DOC_LINK_TEXT' => 'وثائق تكوين الفرص',
  'LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_BODY' => 'تم الآن تمكين عناصر سطر الإيرادات في مثيل Sugar الخاص بك، وكل بيانات الفرصة الحالية تمت معالجتها. المثيل الخاص بك جاهز الآن للاستخدام مع عناصر سطر الإيرادات. للحصول على المزيد من المعلومات حول التغييرات التي تم إجراؤها، الرجاء الرجوع إلى {{doc_url}}.<br /><br />مع أرق الأمنيات، SugarCRM',
  'LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_SUBJECT' => 'تم الآن تمكين عناصر سطر الإيرادات في مثيل Sugar الخاص بك',
  'LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_BODY' => 'وحدة التوقعات في مثيل Sugar الخاص بك جاهزة الآن للاستخدام مع الفرص. وكل بيانات تثبيت عنصر سطر الإيرادات السابقة تمت إزالتها، والمثيل جاهز لإنشاء وتثبيت التوقعات مع الفرص. للحصول على المزيد من المعلومات حول التغييرات التي تم إجراؤها، الرجاء الرجوع إلى {{doc_url}}. <br /><br /><br />مع أرق الأمنيات، SugarCRM',
  'LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_SUBJECT' => 'وحدة التوقعات جاهزة الآن للاستخدام مع الفرص في مثيل Sugar الخاص بك',
  'LBL_JOB_NOTIFICATION_RLI_NOTE_BODY' => 'تم الآن تعطيل عناصر سطر الإيرادات في مثيل Sugar الخاص بك، وكل بيانات عنصر سطر الإيرادات الحالية تمت معالجتها. المثيل الخاص بك جاهز الآن للاستخدام مع الفرص. للحصول على المزيد من المعلومات حول التغييرات التي تم إجراؤها، الرجاء الرجوع إلى {{doc_url}}.<br /><br /><br />مع أرق الأمنيات، SugarCRM',
  'LBL_JOB_NOTIFICATION_RLI_NOTE_SUBJECT' => 'تم الآن تعطيل عناصر سطر الإيرادات في مثيل Sugar الخاص بك',
  'LBL_JOB_NOTIFICATION_SUBJECT_GENERIC' => 'الوظائف المجدولة التي تم إكمالها',
  'LBL_JS_CALENDAR' => 'التقويم',
  'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>من الوظائف - Alt+</strong><br/> I = ed<b>I</b>t (عرض تفصيلي)<br/> U = <b>U</b>تكرار (عرض تفصيلي)<br/> D = <b></b>حذف (عرض تفصيلي)<br/> R = Sha<b>R</b>مشاركة (عرض تفصيلي)<br/> A = s<b>A</b>حفظ (عرض تعديل)<br/> L = إلغاء<b></b> (عرض التعديل) <br/><br/></p><p><strong>بحث وتصفح - Alt+</strong><br/> 7 = إدخال أول على نموذج تعديل<br/> 8 = بحث متقدم الرابط<br/> 9 = أول نموذج بحث إدخال<br/> 0 = إدخال بحث موحد<br></p>',
  'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'اختصارات لوحة المفاتيح',
  'LBL_LANGUAGE' => 'اللغة/Sprache / Idioma',
  'LBL_LAST_COMMIT' => 'آخر التزام: ',
  'LBL_LAST_LOGIN' => 'آخر تسجيل دخول',
  'LBL_LAST_TOUCHED' => 'آخر مرة تم لمسها {{relativetime}} على{{date}} في {{time}}',
  'LBL_LAST_VIEWED' => 'ما تم عرضه مؤخرًا',
  'LBL_LATER' => 'لاحقًا',
  'LBL_LEADS' => 'العملاء المتوقعون',
  'LBL_LEARNING_RESOURCES_COMMUNITY_LINK' => 'المنتديات المجتمعية',
  'LBL_LEARNING_RESOURCES_COMMUNITY_TEASER' => 'انضم إلى النقاش وحل المشكلات وشارك الأفكار مع المستخدمين الآخرين.',
  'LBL_LEARNING_RESOURCES_DESC' => 'موارد معرفة SugarCRM',
  'LBL_LEARNING_RESOURCES_DISCOVER_LINK' => 'اكتشاف SugarCRM: قناة YouTube',
  'LBL_LEARNING_RESOURCES_NAME' => 'موارد المعرفة',
  'LBL_LEARNING_RESOURCES_START_LINK' => 'البداية بـ SugarCRM',
  'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_LINK' => 'جامعة Sugar - تدريب وفيديو',
  'LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_TEASER' => 'أصبح خبيرًا في Sugar من خلال التدريب على الترقية ومقاطع الفيديو وفصول التدريس وندوات الويب والشهادات.',
  'LBL_LEARNING_RESOURCES_SUPPORT_LINK' => 'الوثائق والدعم',
  'LBL_LEARNING_RESOURCES_SUPPORT_TEASER' => 'تعرف على تفاصيل كيفية عمل Sugar وشارك مع الدعم.',
  'LBL_LEARNING_RESOURCES_TITLE' => 'موارد المعرفة',
  'LBL_LEARNING_RESOURCES_TRAINING_LINK' => 'تدريب SugarCRM الأسبوعي المباشر',
  'LBL_LEARNING_RESOURCES_VIDEOS_LINK' => 'فيديوهات الكيفية المساعدة',
  'LBL_LEARNING_RESOURCES_WEBINARS_LINK' => 'منتديات الويب لـ SugarCRM الأسبوعية',
  'LBL_LEGAL' => 'قانوني',
  'LBL_LESS' => 'أقل',
  'LBL_LIKELY' => 'يحتمل',
  'LBL_LIKELY_ADJUSTED' => 'مشابه (معدل)',
  'LBL_LINK_ACTIONS' => 'الإجراءات',
  'LBL_LINK_ALL' => 'الكل',
  'LBL_LINK_BUTTON' => 'الربط',
  'LBL_LINK_FROM_REPORT_NO_DATA' => 'لا توجد سجلات للربط.',
  'LBL_LINK_FROM_REPORT_SUCCESS' => '{{reportCount}} تم ربط السجلات.',
  'LBL_LINK_FROM_REPORT_WRONG_MODULE' => 'التقرير المحدد ليس قائمًا على نوع الوحدة الصحيح.',
  'LBL_LINK_MORE' => 'المزيد',
  'LBL_LINK_NONE' => 'بلا',
  'LBL_LINK_RECORDS' => 'السجلات',
  'LBL_LINK_SELECT' => 'تحديد',
  'LBL_LIST' => 'القائمة',
  'LBL_LISTVIEW' => 'طريقة عرض القائمة',
  'LBL_LISTVIEW_ACTIONS' => 'الإجراءات',
  'LBL_LISTVIEW_ALL' => 'الكل',
  'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'يرجى تحديد أقل من 10 سجلات للمتابعة.',
  'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'هل تريد بالتأكيد تحديث القائمة بأكملها؟',
  'LBL_LISTVIEW_NONE' => 'إلغاء تحديد الكل',
  'LBL_LISTVIEW_NO_RECORDS' => 'لا تتوفر بيانات.',
  'LBL_LISTVIEW_NO_SELECTED' => 'يرجى تحديد سجل 1 على الأقل للمتابعة.',
  'LBL_LISTVIEW_OPTION_CURRENT' => 'حدد هذه الصفحة',
  'LBL_LISTVIEW_OPTION_ENTIRE' => 'تحديد الكل',
  'LBL_LISTVIEW_OPTION_SELECTED' => 'سجلات محددة',
  'LBL_LISTVIEW_SELECTED_CLEAR' => 'امسح التحديدات.',
  'LBL_LISTVIEW_SELECTED_OBJECTS' => 'محدد: ',
  'LBL_LISTVIEW_SELECT_ALL_RECORDS' => 'حدد كل السجلات',
  'LBL_LISTVIEW_SELECT_AND_EDIT' => 'تحديد',
  'LBL_LISTVIEW_TWO_REQUIRED' => 'يرجى تحديد 2 سجل على الأقل للمتابعة.',
  'LBL_LIST_ACCOUNT_NAME' => 'اسم الحساب',
  'LBL_LIST_ASSIGNED_USER' => 'المستخدم',
  'LBL_LIST_CONTACT_NAME' => 'اسم جهة الاتصال',
  'LBL_LIST_CONTACT_ROLE' => 'دور جهة الاتصال',
  'LBL_LIST_DATE_ENTERED' => 'تاريخ الإنشاء',
  'LBL_LIST_EMAIL' => 'البريد الإلكتروني',
  'LBL_LIST_NAME' => 'الاسم',
  'LBL_LIST_OF' => 'من',
  'LBL_LIST_PHONE' => 'الهاتف',
  'LBL_LIST_RELATED_TO' => 'مرتبط بـ',
  'LBL_LIST_REMOVE_EMAIL_INFO' => 'هناك بريد إلكتروني إضافي على السجل الذي تقوم بتعديله. هي الآن أساسية وتم نشرها أدناه.',
  'LBL_LIST_TEAM' => 'الفريق',
  'LBL_LIST_USER_NAME' => 'اسم المستخدم',
  'LBL_LOADING' => 'يتم الآن التحميل...',
  'LBL_LOADING_FILES' => 'لا يزال تحميل قائمة المستند قائمًا. يرجى المحاولة مرة أخرى لاحقًا',
  'LBL_LOADING_LANGUAGE' => 'تحميل حزمة اللغة',
  'LBL_LOADING_PAGE' => 'يتم الآن تحميل صفحة، يرجى الانتظار...',
  'LBL_LOADING_PREVIEW' => 'معاينة التحميل',
  'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'دافيد',
  'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'ليفنجستون',
  'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'د.',
  'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
  'LBL_LOGGED_OUT' => 'لقد تم تسجيل خروجك.',
  'LBL_LOGIN_ADMIN_CALL' => 'يُرجى الاتصال بمسؤول النظام.',
  'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'محاولات تسجيل دخول فاشلة كثيرة للغاية.',
  'LBL_LOGIN_BUTTON_KEY' => 'L',
  'LBL_LOGIN_BUTTON_LABEL' => 'تسجيل الدخول',
  'LBL_LOGIN_BUTTON_TITLE' => 'تسجيل الدخول',
  'LBL_LOGIN_FORGOT_PASSWORD' => 'نسيت كلمة المرور؟',
  'LBL_LOGIN_FORM_LABEL' => 'اعرض استمارة تسجيل الدخول',
  'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'يمكنك محاولة تسجيل الدخول ثانية خلال ',
  'LBL_LOGIN_LOGIN_TIME_DAYS' => 'أيام.',
  'LBL_LOGIN_LOGIN_TIME_HOURS' => 'س',
  'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'دق',
  'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'ث',
  'LBL_LOGIN_OPTIONS' => 'الخيارات',
  'LBL_LOGIN_PASSWORD' => 'كلمة المرور',
  'LBL_LOGIN_SUBMIT' => 'إرسال',
  'LBL_LOGIN_TO_ACCESS' => 'يرجى تسجيل الدخول للوصول لهذه المنطقة.',
  'LBL_LOGIN_USERNAME' => 'اسم المستخدم',
  'LBL_LOGIN_WELCOME_TO' => 'مرحبًا بك في',
  'LBL_LOGOUT' => 'تسجيل الخروج',
  'LBL_LOWER_OR' => 'أو',
  'LBL_MAILMERGE' => 'دمج البريد',
  'LBL_MAILMERGE_KEY' => 'M',
  'LBL_MANAGE_SUBSCRIPTIONS' => 'إدارة الاشتراكات',
  'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'إدارة الاشتراكات لـ ',
  'LBL_MAP_BUTTON' => 'الخريطة',
  'LBL_MARK_AS_FAVORITES' => 'ضع علامة عليها كمفضلة',
  'LBL_MASSUPDATE_DATE' => 'تحديد بيانات',
  'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM' => 'لا يمكن حذف الفريق العالمي.',
  'LBL_MASSUPDATE_DELETE_USER_EXISTS' => 'لا يمكن حذف هذا الفريق الخاص [{0}] حتى يتم حذف [{1}] المستخدم.',
  'LBL_MASS_UPDATE' => 'تحديث شامل',
  'LBL_MASS_UPDATE_ADD_FIELD' => 'إضافة حقل',
  'LBL_MASS_UPDATE_EMPTY_CONFIRM' => 'الإلغاء للاحتفاظ بالقيم الموجودة. تأكيد لمسح القيم.',
  'LBL_MASS_UPDATE_EMPTY_VALUES' => 'يقوم التحديث بمسح القيم التالية: ',
  'LBL_MASS_UPDATE_JOB_QUEUED' => 'تم وضع جدول زمني لطلب التحديث الكامل الخاص بك.',
  'LBL_MASS_UPDATE_REMOVE_FIELD' => 'إزالة حقل',
  'LBL_MASS_UPDATE_SUCCESS' => 'تم تحديث كل السجلات بنجاح.',
  'LBL_MAXIMUM_OF' => 'أقصى من ',
  'LBL_MAX_DASHLETS_REACHED' => 'لقد وصلت لأقصى عدد من لوحة معلومات Sugar قام المسؤول بضبطها. يُرجى إزالة لوحة معلومات Sugar لإضافة المزيد.',
  'LBL_MEETING' => 'الاجتماع',
  'LBL_MEETINGS' => 'الاجتماعات',
  'LBL_MEETINGS_SUBPANEL_TITLE' => 'الاجتماعات',
  'LBL_MEETING_GO_BACK' => 'عودة إلى الاجتماع',
  'LBL_MEMBERS' => 'الأعضاء',
  'LBL_MEMBER_OF' => 'عضو في',
  'LBL_MEMORY_USAGE' => 'استخدام الذاكرة (بايت)',
  'LBL_MERGE' => 'دمج',
  'LBL_MERGE_CONNECTORS' => 'الحصول على بيانات',
  'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
  'LBL_MERGE_DUPLICATES' => 'دمج التكرارات',
  'LBL_MERGE_DUPLICATES_CONFIRM' => 'يؤدي هذا الإجراء إلى حذف السجل (السجلات) التالي:',
  'LBL_MERGE_DUPLICATES_FAIL_PROCESS' => 'لم يتم دمج بعض السجلات المرتبطة بشكل صحيح. إيقاف قبل الاكتمال التأكيد على متابعة الدمج.',
  'LBL_MERGE_DUPLICATES_PROCEED' => 'هل ترغب في المتابعة؟ إيقاف قبل الاكتمال تأكيد حذف السجلات',
  'LBL_MERGE_DUPLICATES_REMOVE' => 'هل تريد بالتأكيد إزالة هذا السجل من الدمج؟',
  'LBL_MERGE_DUPLICATES_REMOVE_TOOLTIP' => 'إزالة السجل من الدمج',
  'LBL_MERGE_DUPLICATES_TITLE' => 'دمج سجلات مرتبطة',
  'LBL_MERGE_DUPLICATES_WARNING_CLOSE' => 'دمج سجلات مرتبطة غير مكتمل. بقاء بعض السجلات بدون دمج.',
  'LBL_MERGE_NO_ACCESS' => 'لا تتوفر لديك إمكانية الوصول للقيام بهذا الإجراء. يجب أن يكون هناك سجل واحد قابل للتعديل على الأقل.',
  'LBL_MERGE_NO_ACCESS_TO_A_FEW_RECORDS' => 'غير قادر على حذف واحد أو أكثر من السجلات المحددة. تم مسح تلك السجلات من القائمة للدمج.',
  'LBL_MERGE_UNSAVED_CHANGES' => 'سيتم رفض كل التغييرات عند الانتقال إلى سجل أساسي جديد. هل تريد بالتأكيد الانتقال؟',
  'LBL_MERIDIEM' => 'ظهرًا',
  'LBL_MESSAGE_BOX_TITLE' => 'تنبيه',
  'LBL_METHOD_NOT_ALLOWED' => 'غير مسموح بطريقة HTTP لهذا المورد. يرجى الاتصال بالدعم الفني.',
  'LBL_METHOD_NOT_ALLOWED_TITLE' => 'غير مسموح بالطريقة',
  'LBL_MINUTES' => 'دقائق',
  'LBL_MISSING_CUSTOM_DELIMITER' => 'يجب تحديد محدد مخصص.',
  'LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_LINK_TEXT' => 'إعدادات البريد الإلكتروني',
  'LBL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_SUBJECT' => 'إعدادات خادم SMTP مفقودة',
  'LBL_MOBILE' => 'المحمول',
  'LBL_MOBILE_APP_VERSION' => 'إصدار التطبيق',
  'LBL_MOBILE_CHOOSE_DOC' => 'اختيار مستند',
  'LBL_MOBILE_CHOOSE_LOCATION' => 'اختيار موقع',
  'LBL_MOBILE_CHOOSE_PHONE' => 'اختيار رقم هاتف',
  'LBL_MOBILE_CHOOSE_RECIPIENT' => 'اختيار مستلم',
  'LBL_MOBILE_CHOOSE_URL' => 'اختيار عنوان URL',
  'LBL_MOBILE_DELETE_CONFIRM' => 'هل تريد بالتأكيد حذف هذا السجل؟',
  'LBL_MOBILE_DESKTOP' => 'إصدار سطح المكتب',
  'LBL_MOBILE_DETAIL_SHOW_LESS' => '...أقل',
  'LBL_MOBILE_DETAIL_SHOW_MORE' => 'المزيد...',
  'LBL_MOBILE_DOC' => 'المستند',
  'LBL_MOBILE_DOWNLOAD_COMPLETED' => 'تم الانتهاء من التنزيل: {{{this}}}',
  'LBL_MOBILE_DOWNLOAD_FAILED' => 'فشل التنزيل\\r\\n{{{this}}}',
  'LBL_MOBILE_DOWNLOAD_STARTED' => 'بدأ التنزيل: {{{this}}}',
  'LBL_MOBILE_EDIT_REL' => 'تحرير العلاقة',
  'LBL_MOBILE_FEEDBACK' => 'تعليقات',
  'LBL_MOBILE_LOGING_OUT' => 'يرجى الانتظار لحين تسجيل الخروج...',
  'LBL_MOBILE_LOG_CALL_CONFIRM' => 'هل ترغب في تسجيل مكالمتك الأخيرة؟',
  'LBL_MOBILE_META_SYNC_FAILED' => 'غير قادر على المزامنة مع الخادم.',
  'LBL_MOBILE_META_SYNC_FAILED_RETRY' => 'غير قادر على المزامنة مع الخادم. إعادة المحاولة؟',
  'LBL_MOBILE_NO_ACTIONS_AVAILABLE' => 'لا تتوفر إجراءات',
  'LBL_MOBILE_NO_RECORDS' => 'لم يتم العثور على سجلات',
  'LBL_MOBILE_PRIVACY_TERMS_CONDITIONS' => 'الخصوصية، الشروط، والأحكام',
  'LBL_MOBILE_PROCESSING_FILE' => 'يتم الآن تجهيز الملف...',
  'LBL_MOBILE_PROCESSING_IMAGE' => 'يتم الآن إعداد الصورة...',
  'LBL_MOBILE_PTR_PULL' => 'اجذب لأسفل للتحديث...',
  'LBL_MOBILE_PTR_RELEASE' => 'حرر للتحديث...',
  'LBL_MOBILE_RELOGIN_BUTTON' => 'إعادة تسجيل الدخول',
  'LBL_MOBILE_SEARCH_TEAMS' => 'يتم الآن البحث عن الفرق...',
  'LBL_MOBILE_SELECT_TEAMS' => 'تحديد الفرق',
  'LBL_MOBILE_SERVER_URL' => 'عنوان URL للخادم',
  'LBL_MOBILE_SERVER_VERSION' => 'إصدار الخادم',
  'LBL_MOBILE_SHOW_MORE' => 'عرض المزيد...',
  'LBL_MOBILE_SHOW_MORE_TOP' => 'عرض المزيد...',
  'LBL_MOBILE_SUPPORT' => 'دعم',
  'LBL_MOBILE_TUTORIAL_CONTROL_PANEL' => 'استخدم الأسهم أدناه للتفقد السريع عبر مكونات هذه القائمة الأساسية.',
  'LBL_MOBILE_TUTORIAL_DETAIL_BACK' => 'الذهاب إلى الصفحة السابقة.',
  'LBL_MOBILE_TUTORIAL_DETAIL_BACK_TABLET' => 'الرجوع.',
  'LBL_MOBILE_TUTORIAL_DETAIL_CARD' => 'أكثر المعلومات أهمية عن السجل.',
  'LBL_MOBILE_TUTORIAL_DETAIL_FOLLOW' => 'متابعة/إلغاء متابعة سجل.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO' => 'هذه صفحة التفاصيل.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO_TEXT' => 'تفتح عرض التفاصيل على الجانب الأيمن من شاشتك.',
  'LBL_MOBILE_TUTORIAL_DETAIL_INTRO_TITLE' => 'عرض التفاصيل',
  'LBL_MOBILE_TUTORIAL_DETAIL_RECORD_ACTIONS' => 'الإجراءات المتاحة في السجل.',
  'LBL_MOBILE_TUTORIAL_DETAIL_RELATE_LINK' => 'انقر لفتح سجل ذي صلة.',
  'LBL_MOBILE_TUTORIAL_DETAIL_RIGHT_ACTION' => 'اعرض معلومات إضافية، أو قم بتعديل السجل.',
  'LBL_MOBILE_TUTORIAL_DETAIL_SHOW_MORE' => 'انقر لتوسيع معلومات تفصيلية.',
  'LBL_MOBILE_TUTORIAL_HOME_CREATE' => 'الإجراءات المتاحة حسب العرض.',
  'LBL_MOBILE_TUTORIAL_HOME_END' => 'استمتع بجميع الميزات الجديدة!',
  'LBL_MOBILE_TUTORIAL_HOME_FAVORITES_BTN' => 'تصفية القائمة لعرض سجلاتي المفضلة.',
  'LBL_MOBILE_TUTORIAL_HOME_FAVORITES_ICON' => 'وضع علامة على السجل كمفضلة.',
  'LBL_MOBILE_TUTORIAL_HOME_GRIP' => 'الإجراءات المتاحة في السجل.',
  'LBL_MOBILE_TUTORIAL_HOME_INTRO' => 'مرحبًا بكم {{{brandName}}}.<br/><br/> تتيح لنا إمكانية تمييز بعض الخواص الجديدة...',
  'LBL_MOBILE_TUTORIAL_HOME_LOGO' => 'التنقل داخل القائمة الرئيسية.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_DESKTOP' => 'افتح Sugar في مستعرض الشبكة.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO' => 'هذه قائمة رئيسية.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO_TEXT' => 'تفتح القائمة الرئيسية في الجانب الأيسر من شاشتك.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_INTRO_TITLE' => 'عرض القائمة الرئيسية.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_LOGO' => 'أغلق القائمة الرئيسية.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_MODULES' => 'اعرض وحدة معينة.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_PROFILE' => 'اعرض ملف التعريف الخاص بك.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_SETTINGS' => 'قم بتخصيص التطبيق.',
  'LBL_MOBILE_TUTORIAL_HOME_MENU_TOUR' => 'الدخول إلى جولة في أي وقت.',
  'LBL_MOBILE_TUTORIAL_HOME_MY_ITEMS_BTN' => 'تصفية القائمة لعرض السجلات المخصصة لي.',
  'LBL_MOBILE_TUTORIAL_HOME_RECENT' => 'أكثر السجلات المعدلة مؤخرًا.',
  'LBL_MOBILE_TUTORIAL_HOME_SEARCH' => 'البحث العام عن السجلات.',
  'LBL_MOBILE_TUTORIAL_HOME_UPCOMING' => 'أحداثي القادمة بدايةً من اليوم.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_ACTIONS' => 'حدد إجراءً معينًا لعرضه والقيام به.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_CREATE' => 'أغلق القائمة الإضافية.',
  'LBL_MOBILE_TUTORIAL_PLUS_MENU_INTRO' => 'هذه قائمة إضافية.',
  'LBL_MOBILE_UNLINK_CONFIRM' => 'هل تريد بالتأكيد إلغاء رابط هذا السجل؟',
  'LBL_MOBILE_UPLOAD_IN_PROGRESS' => 'يتم الآن تحميل ملف...',
  'LBL_MOBILE_UPLOAD_SUCCESS' => 'تم تحميل الملف بنجاح',
  'LBL_MOBILE_WAIT' => 'يرجى الانتظار....',
  'LBL_MODIFIED' => 'تم التعديل بواسطة',
  'LBL_MODIFIED_BY_USER' => 'تم التعديل بواسطة المستخدم',
  'LBL_MODIFIED_ID' => 'تم التعديل بواسطة المعرّف',
  'LBL_MODIFIED_NAME' => 'تم التعديل بواسطة',
  'LBL_MODIFIED_USER' => 'تم التعديل بواسطة المستخدم',
  'LBL_MODIFY_CURRENT_SEARCH' => 'تعديل البحث الحالي',
  'LBL_MODULE' => 'الوحدة',
  'LBL_MODULE_ALL' => 'الكل',
  'LBL_MODULE_ATTACHMENTS_TITLE' => '{{module}} المرفقات',
  'LBL_MODULE_FILTER' => 'التصفية حسب...',
  'LBL_MODULE_NAME' => 'اسم الوحدة',
  'LBL_MODULE_TYPE' => 'النوع',
  'LBL_MONITOR_ID' => 'معرّف المراقب',
  'LBL_MONTH_TIMEPERIOD_FORMAT' => '{0}',
  'LBL_MORE' => 'المزيد',
  'LBL_MOREDETAIL' => 'مزيد من التفاصيل',
  'LBL_MORE_ACTION' => 'مزيد من الإجراءات',
  'LBL_MORE_HISTORY' => 'المزيد من السجلات...',
  'LBL_MORE_MODULES' => 'المزيد من الوحدات',
  'LBL_MY_ACCOUNT' => 'إعداداتي',
  'LBL_MY_AREA_LINKS' => 'ارتباطات منطقتي:',
  'LBL_NAME' => 'الاسم',
  'LBL_NAVIGATE_TO_REPORTS' => 'أنت تنتقل لوحدة "التقارير". لن يتم حفظ تغييراتك على لوحة المعلومات. متابعة؟',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => 'إنشاء',
  'LBL_NEW_BUTTON_TITLE' => 'إنشاء',
  'LBL_NEW_PAGE_FEEDBACK' => 'لقد أنشأت صفحة جديدة. قد تضيف محتوى جديدًا باستخدام خيار قائمة إضافة لوحات معلومات Sugar.',
  'LBL_NEW_PASSWORD1' => 'كلمة مرور جديدة',
  'LBL_NEW_PASSWORD2' => 'تأكيد كلمة المرور',
  'LBL_NEW_USER_PASSWORD_1' => 'تم تحديث كلمة المرور الخاصة بك بنجاح.',
  'LBL_NEW_WEB_VERSION' => 'هناك إصدار جديد متاح لهذا التطبيق. هل ترغب في التحديث؟',
  'LBL_NEXT_BUTTON_LABEL' => 'التالي',
  'LBL_NEXT_FRIDAY' => 'الجمعة القادم',
  'LBL_NEXT_MONDAY' => 'الإثنين القادم',
  'LBL_NEXT_MONTH' => 'الشهر القادم',
  'LBL_NEXT_TIMEPERIOD' => 'فترة زمنية تالية',
  'LBL_NEXT_WEEK' => 'الأسبوع القادم',
  'LBL_NEXT_YEAR' => 'العام القادم',
  'LBL_NO' => 'لا',
  'LBL_NONE' => '-بلا-',
  'LBL_NOTES' => 'ملاحظات',
  'LBL_NOTES_SUBPANEL_TITLE' => 'ملاحظات',
  'LBL_NOTIFICATIONS' => 'الإشعارات',
  'LBL_NOT_AUTHORIZED' => 'غير مسموح لك بمشاهدة هذا السجل.',
  'LBL_NOT_AVAILABLE' => 'غير متاح',
  'LBL_NO_ACCESS' => '(غير مسموح بالدخول)',
  'LBL_NO_ACCESS_LOWER' => 'غير مسموح بالدخول',
  'LBL_NO_ACTION' => 'لا يوجد إجراء بهذا الاسم.',
  'LBL_NO_DATA' => 'لا توجد بيانات',
  'LBL_NO_DATA_AVAILABLE' => 'لا تتوفر بيانات.',
  'LBL_NO_FIELD_ACCESS' => 'غير مسموح بالدخول',
  'LBL_NO_FLASH_PLAYER' => 'ربما يوجد لديك برنامج Abobe Flash مغلق أو ربما تستخدم إصدارًا قديمًا من Adobe Flash Player. للحصول على أحدث إصدار من Flash Player، <a href="http://www.adobe.com/go/getflashplayer/">انقر هنا</a>.',
  'LBL_NO_IMAGE' => 'بدون صورة',
  'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'لا توجد حقول متاحة لتشغيل التحديث بأكمله',
  'LBL_NO_PDF_TEMPLATE' => 'لم يتم العثور على قالب PDF.',
  'LBL_NO_RECORDS_FOUND' => '- تم العثور على 0 سجلات -',
  'LBL_NUMBER_OF_COLUMNS' => 'حدد عدد الأعمدة',
  'LBL_OBJECT_IMAGE' => 'صورة كائن',
  'LBL_OC_DEFAULT_STATUS' => 'غير نشط',
  'LBL_OC_STATUS' => 'حالة العميل دون اتصال',
  'LBL_OC_STATUS_TEXT' => 'تشير إلى ما إذا كان المستخدم الحالي قادرًا على استخدام عميل دون اتصال أم لا.',
  'LBL_OFFLINE_CLEAN_UP_PROMPT' => 'سيحذف هذا الإجراء السجلات التي لم تصل إليها منذ فترة. متابعة؟',
  'LBL_OFFLINE_CLEAR_DB' => 'مسح المخزن...',
  'LBL_OFFLINE_CLEAR_DB_PROMPT' => 'هل ترغب في حذف كل السجلات من مخزنك المحلي؟',
  'LBL_OFFLINE_COMPACT_DB' => 'تخزين مضغوط...',
  'LBL_OFFLINE_DB_CLEANING_COMPLETED' => 'تم الانتهاء من التنظيف',
  'LBL_OFFLINE_DB_CLEANING_IN_PROGRESS' => 'يتم الآن تنظيف المخزن...',
  'LBL_OFFLINE_DB_SIZE' => 'حجم قاعدة البيانات',
  'LBL_OFFLINE_DELETED' => 'لم يتم العثور على السجل.',
  'LBL_OFFLINE_DELETED_RELATED' => 'لم يتم العثور على سجل ذي صلة. يُحتمل حذفه أو إلغاء ارتباطه.',
  'LBL_OFFLINE_DISABLED' => 'تعطيل وضع دون اتصال',
  'LBL_OFFLINE_DISABLE_PROMPT' => 'هل تريد إيقاف تشغيل الدعم دون اتصال؟ سيتم فقدان كل التغييرات التي تؤدي إلى تعليق المزامنة.',
  'LBL_OFFLINE_ENABLED' => 'تفعيل وضع دون اتصال',
  'LBL_OFFLINE_ENABLE_PROMPT' => 'هل تريد بالتأكيد تشغيل الدعم دون اتصال؟',
  'LBL_OFFLINE_LAST_SYNC_TS' => 'آخر محاولة للمزامنة: {{ts}}',
  'LBL_OFFLINE_MERGE_DATA_CONFIRM' => 'قام أحد الأشخاص بتعديل نفس السجل على الخادم. التأكيد على الدمج التلقائي لتغييراتك أو رفضها.',
  'LBL_OFFLINE_MODE' => 'وضع عدم الاتصال',
  'LBL_OFFLINE_PREFETCHING' => 'يتم الآن تنزيل السجلات...',
  'LBL_OFFLINE_PREFETCHING_EST_TIME' => 'الوقت المتبقي هو{{estimatedTime}}ث...',
  'LBL_OFFLINE_PREFETCHING_MODULE' => 'تحميل {{module}} {{progressValue}}...',
  'LBL_OFFLINE_PREFETCHING_MODULE_COMPLETE' => 'تم الانتهاء من{{module}} التنزيل',
  'LBL_OFFLINE_PREFETCH_ACTION' => 'يتم الآن تنزيل سجلاتك...',
  'LBL_OFFLINE_PREFETCH_ERROR' => 'خطأ أثناء تنزيل السجلات',
  'LBL_OFFLINE_PREFETCH_FIRST_PROMPT' => 'هل ترغب في تنزيل سجلاتك المحددة، والمفضلة، والمتبعة الآن للدخول عليها دون اتصال؟ يُوصى بالاتصال السريع حيث قد تستغرق هذه العملية بعض الوقت. قد تقوم لاحقًا بالتنزيل من القائمة الرئيسية > دون الاتصال.',
  'LBL_OFFLINE_PREFETCH_PROMPT' => 'تنزيل سجلاتك المحددة، والمفضلة، والمتبعة حيث قد يستغرق الدخول دون اتصال بعض الوقت للانتهاء. يُوصى باتصال سريع. هل ترغب في الاستمرار؟',
  'LBL_OFFLINE_PREFETCH_SUCCESS' => 'تم تنزيل السجلات بنجاح',
  'LBL_OFFLINE_RECORDS_PER_MODULE' => 'السجلات حسب الوحدة',
  'LBL_OFFLINE_ROLLBACK_FAILED' => 'فشل التراجع',
  'LBL_OFFLINE_ROLLBACK_PROMPT' => 'هل ترغب في استرجاع هذا التغيير؟',
  'LBL_OFFLINE_ROLLBACK_SUCCESS' => 'تم الانتهاء من التراجع',
  'LBL_OFFLINE_SERVER_FETCH' => 'الجلب من الخادم...',
  'LBL_OFFLINE_SETTINGS' => 'تصحيح الإعدادات',
  'LBL_OFFLINE_STATS' => 'إحصائيات التخزين',
  'LBL_OFFLINE_STATUS_BAD_NETWORK' => 'غير قادر على الوصول إلى الخادم.',
  'LBL_OFFLINE_STATUS_NO_PENDING_TX' => 'لا توجد تغييرات تؤدي إلى تعليق المزامنة.',
  'LBL_OFFLINE_STATUS_OFFLINE' => 'الجهاز غير متصل.',
  'LBL_OFFLINE_STATUS_ONLINE' => 'الجهاز متصل.',
  'LBL_OFFLINE_STATUS_PENDING_TX' => 'التغييرات تؤدي إلى تعليق المزامنة.',
  'LBL_OFFLINE_STATUS_SYNC_FAILED' => 'فشلت آخر محاولة للمزامنة. التحقق من سجل المعاملات.',
  'LBL_OFFLINE_SYNC_IN_PROGRESS' => 'المزامنة جارية...',
  'LBL_OFFLINE_TOTAL_RECORDS_COUNT' => 'إجمالي عدد السجلات',
  'LBL_OFFLINE_TRANSACTION_SYNCED' => 'تمت مزامنة المعاملة.',
  'LBL_OK' => 'موافق',
  'LBL_OLD_ACCOUNT_LINK' => 'حساب قديم',
  'LBL_ONLY_IMAGE_ATTACHMENT' => 'يمكن تضمين المرفقات التالية المدعوم فيها نوع الصورة فقط: JPG، PNG.',
  'LBL_OPENALL_BUTTON_KEY' => 'O',
  'LBL_OPENALL_BUTTON_LABEL' => 'فتح الكل',
  'LBL_OPENALL_BUTTON_TITLE' => 'فتح الكل',
  'LBL_OPENTO_BUTTON_KEY' => 'T',
  'LBL_OPENTO_BUTTON_LABEL' => 'فتح لـ: ',
  'LBL_OPENTO_BUTTON_TITLE' => 'فتح لـ:',
  'LBL_OPEN_ITEMS' => 'فتح عناصر:',
  'LBL_OPERATOR_IN_TEXT' => 'هي واحدة مما يلي:',
  'LBL_OPERATOR_NOT_IN_TEXT' => 'ليست واحدة مما يلي:',
  'LBL_OPPORTUNITIES' => 'الفرص',
  'LBL_OPPORTUNITY' => 'الفرصة',
  'LBL_OPPORTUNITY_METRICS' => 'قياسات الفرص',
  'LBL_OPPORTUNITY_NAME' => 'اسم الفرصة',
  'LBL_OPTIONAL' => 'اختياري',
  'LBL_OPTIONS' => 'الخيارات',
  'LBL_OPT_OUT_FLAG_PRIMARY' => 'رفض البريد الإلكتروني الأساسي',
  'LBL_OR' => 'أو',
  'LBL_ORG_CHART' => 'المخطط التنظيمي',
  'LBL_ORG_CHART_DESC' => 'يعرض هيكل العاملين لمنظمتك.',
  'LBL_ORG_CHART_TOOLTIP_NODES' => 'عرض كل العُقد',
  'LBL_ORG_CHART_TOOLTIP_TOGGLE' => 'تبديل الاتجاه',
  'LBL_ORG_CHART_TOOLTIP_ZOOM' => 'التكبير/التصغير للملاءمة',
  'LBL_OUTBOUND_EMAIL_ADD_SERVER' => 'إضافة خادم...',
  'LBL_OVERDUE' => 'متأخر',
  'LBL_OVERWRITE_POPULATED_DATA_FROM' => 'من:',
  'LBL_OVERWRITE_POPULATED_DATA_TO' => 'إلى:',
  'LBL_PAGE_NAME' => 'اسم الصفحة',
  'LBL_PANEL_ADVANCED' => 'مزيد من المعلومات',
  'LBL_PANEL_ASSIGNMENT' => 'أخرى',
  'LBL_PANEL_BODY' => 'نظرة عامة',
  'LBL_PANEL_DEFAULT' => 'الافتراضي',
  'LBL_PARENT_TYPE' => 'نوع الأصل',
  'LBL_PASSWORD' => 'كلمة المرور',
  'LBL_PASSWORD_REQUEST_ERROR' => 'هناك مشكلة في استعادة الدمج بين اسم المستخدم والبريد الإلكتروني.',
  'LBL_PASSWORD_REQUEST_SENT' => 'تم إرسال طلبك.',
  'LBL_PASSWORD_UPDATE_GENERIC_ISSUE' => 'خطأ: هناك مشكلة في تحديث كلمة المرور لهذا المستخدم.',
  'LBL_PA_PRODEF_HAS_PENDING_PROCESSES' => 'لا يمكنك حذف تعريف العملية هذا نظرًا لوجود عمليات معلقة قيد التشغيل.',
  'LBL_PDF_EMAIL' => 'إرسال بريد إلكتروني كـ PDF',
  'LBL_PDF_VIEW' => 'تنزيل PDF',
  'LBL_PENDING_NOTIFICATIONS' => 'الإشعارات',
  'LBL_PERCENTAGE_SYMBOL' => '%',
  'LBL_PHASE' => 'النطاق',
  'LBL_PICTURE_FILE' => 'أفاتار',
  'LBL_PLANNED_ACTIVITIES_DASHLET' => 'الأنشطة المخطط لها',
  'LBL_PLANNED_ACTIVITIES_DASHLET_CONFIRM_CLOSE' => 'هل تريد بالتأكيد وضع علامة {0} كمغلق؟',
  'LBL_PLANNED_ACTIVITIES_DASHLET_DESCRIPTION' => 'توضح لوحة الأنشطة المخطط لها الاجتماعات المخطط لها والمكالمات.',
  'LBL_PLANNED_ACTIVITIES_DASHLET_FUTURE_BUTTON_LABEL' => 'المستقبل',
  'LBL_PLANNED_ACTIVITIES_DASHLET_GROUP_BUTTON_LABEL' => 'أنشطة الفريق',
  'LBL_PLANNED_ACTIVITIES_DASHLET_HELD_ACTIVITY' => 'معلق',
  'LBL_PLANNED_ACTIVITIES_DASHLET_TODAY_BUTTON_LABEL' => 'اليوم',
  'LBL_PLANNED_ACTIVITIES_DASHLET_USER_BUTTON_LABEL' => 'أنشطتي',
  'LBL_PLEASE_SELECT' => 'يُرجى تحديد',
  'LBL_PLUGINS_DESC' => 'اقرأ عن خصائص المكون الإضافي داخل <a href="https://www.sugarcrm.com/crm/support/documentation/SugarPlugIns"> مستندات المكونات الإضافية </a>.',
  'LBL_PLUGINS_LOTUS_TITLE' => 'المكونات الإضافية الخاصة بـ Sugar لـ Lotus Notes<sup>TM</sup>',
  'LBL_PLUGINS_TITLE' => 'المكونات الإضافية الخاصة بـ Sugar لـ Microsoft Office<sup>TM</sup>',
  'LBL_PLUGIN_EXCEL_DESC' => 'تكامل Sugar مع جداول البيانات لتحليل أفضل للقياسات الأساسية.',
  'LBL_PLUGIN_EXCEL_NAME' => 'المكون الإضافي الخاص بـ Sugar لـ Excel',
  'LBL_PLUGIN_LOTUS_DESC' => 'تكامل Sugar مع Lotus Notes.',
  'LBL_PLUGIN_LOTUS_NAME' => 'المكونات الإضافية الخاصة بـ Sugar لـ Lotus Notes',
  'LBL_PLUGIN_OUTLOOK_DESC' => 'تكامل البريد الإلكتروني لـ Sugar وبيانات التقويم مع Microsoft Outlook.',
  'LBL_PLUGIN_OUTLOOK_NAME' => 'المكون الإضافي الخاص بـ Sugar لـ Outlook',
  'LBL_PLUGIN_WORD_DESC' => 'نشر المعلومات تلقائيًا من SugarCRM إلى الخطابات، والبريد الإلكتروني المباشر، ومستندات Microsoft الأخرى.',
  'LBL_PLUGIN_WORD_NAME' => 'المكون الإضافي الخاص بـ Sugar لـ Word',
  'LBL_PLUS_INLINE' => 'إضافة',
  'LBL_PMSE_ALL_PROCESSES_LABEL' => 'كل العمليات',
  'LBL_PMSE_BUSINESS_RULES_DASHLET' => 'القواعد التجارية للعملية',
  'LBL_PMSE_BUSINESS_RULES_DASHLET_DESCRIPTION' => 'لوحة معلومات قواعد أعمال العملية القوالب التي يمكن استخدامها داخل مؤلف العملية.',
  'LBL_PMSE_CANCELLED_STATUS' => 'ملغي',
  'LBL_PMSE_COMPLETED_STATUS' => 'كامل',
  'LBL_PMSE_EMAIL_TEMPLATES_DASHLET' => 'قوالب البريد الإلكتروني للعملية',
  'LBL_PMSE_EMAIL_TEMPLATES_DASHLET_DESCRIPTION' => 'لوحة معلومات قوالب البريد الإلكتروني للعملية تعرض القوالب التي يمكن استخدامها داخل مؤلف العملية.',
  'LBL_PMSE_ERROR_STATUS' => 'خطأ',
  'LBL_PMSE_IN_PROGESS_STATUS' => 'قيد التقدم',
  'LBL_PMSE_PROCESSES_DASHLET' => 'العمليات',
  'LBL_PMSE_PROCESSES_DASHLET_DESCRIPTION' => 'لوحة معلومات العمليات تعرض القوالب التي يمكن استخدامها داخل مؤلف العملية.',
  'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET' => 'تعريفات العملية',
  'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET_DESCRIPTION' => 'لوحة معلومات تعريفات العمليات تعرض القوالب التي يمكن استخدامها داخل مؤلف العملية.',
  'LBL_PMSE_PROCESS_STATUS_CHART_DESCRIPTION' => 'وصف حالة العملية',
  'LBL_PMSE_PROCESS_STATUS_CHART_NAME' => 'ملخص حالة العملية',
  'LBL_PMSE_PROCESS_USERS_CHART_DESCRIPTION' => 'الأنشطة المعلقة حسب العملية',
  'LBL_PMSE_PROCESS_USERS_CHART_NAME' => 'الأنشطة المعلقة حسب العملية',
  'LBL_PMSE_PROCESS_USERS_CHART_NAME_RECORD' => 'الأنشطة المعلقة',
  'LBL_PMSE_SETTINGS' => 'إعدادات مؤلف العملية',
  'LBL_PMSE_TERMINATED_STATUS' => 'منتهٍ',
  'LBL_PORTAL_AUTH_FAILED' => 'فشلت مصادقة العميل.',
  'LBL_PORTAL_AUTH_FAILED_TITLE' => 'عميل غير صالح',
  'LBL_PORTAL_ERROR' => 'خطأ',
  'LBL_PORTAL_INVALID_CREDS' => 'دمج اسم المستخدم/كلمة المرور غير صحيح، يرجى المحاولة مرة أخرى.',
  'LBL_PORTAL_INVALID_CREDS_TITLE' => 'اعتمادات غير صالحة',
  'LBL_PORTAL_INVALID_GRANT' => 'الرمز الخاص بك غير صالح أو انتهت صلاحيته. يرجى تسجيل الدخول مرة أخرى.',
  'LBL_PORTAL_INVALID_GRANT_TITLE' => 'الرمز منتهي الصلاحية',
  'LBL_PORTAL_INVALID_REQUEST' => 'الطلب غير صالح أو به عيوب. يرجى الاتصال بالدعم الفني.',
  'LBL_PORTAL_INVALID_REQUEST_TITLE' => 'طلب غير صالح',
  'LBL_PORTAL_LOADING' => 'التحميل',
  'LBL_PORTAL_LOGIN_FORGOTPASSWORD' => 'يلزم الاتصال بمسؤول Sugar لإعادة تعيين كلمة المرور الخاصة بك.',
  'LBL_PORTAL_LOGIN_PASSWORD' => 'كلمة المرور',
  'LBL_PORTAL_LOGIN_USERNAME' => 'اسم المستخدم',
  'LBL_PORTAL_METHOD_NOT_ALLOWED' => 'غير مسموح بطريقة HTTP لهذا المورد. يرجى الاتصال بالدعم الفني.',
  'LBL_PORTAL_METHOD_NOT_ALLOWED_TITLE' => 'غير مسموح بالطريقة',
  'LBL_PORTAL_MIN_MODULES' => 'في الحد الأدنى، يجب تمكين الحقائب، أو المشكلات، أو وحدة \\"قاعدة المعارف\\" وذلك لكي تستخدم هذا التطبيق.',
  'LBL_PORTAL_NOT_ENABLED_MSG' => 'نعتذر لك، هذه الخاصية غير متاحة في هذا الوقت.',
  'LBL_PORTAL_OFFLINE' => 'عذرًا، التطبيق غير متاح في هذا الوقت. يُرجى الاتصال بمسؤول الموقع.',
  'LBL_PORTAL_PAGE_NOT_AVAIL' => 'الصفحة غير متاحة',
  'LBL_PORTAL_PRECONDITION_MISSING' => 'فشل الطلب، أو، المعلمة مفقودة/غير صالحة. يرجى الاتصال بالدعم الفني.',
  'LBL_PORTAL_PRECONDITION_MISSING_TITLE' => 'خطأ: ',
  'LBL_PORTAL_REQUEST_TIMEOUT' => 'انتهى زمن الطلب.',
  'LBL_PORTAL_REQUEST_TIMEOUT_TITLE' => 'انتهاء زمن الطلب',
  'LBL_PORTAL_RESOURCE_UNAVAILABLE' => 'المورد غير متاح.',
  'LBL_PORTAL_RESOURCE_UNAVAILABLE_TITLE' => 'ممنوع',
  'LBL_PORTAL_ROUTE_ERROR' => 'وحدة تحميل الإصدار. يرجى المحاولة لاحقًا أو الاتصال بقسم الدعم.',
  'LBL_PORTAL_SAVING' => 'حفظ',
  'LBL_PORTAL_SEARCH' => 'البحث حسب الاسم والرقم',
  'LBL_PORTAL_SEARCH_RESULTS_TITLE' => 'عرض نتائج البحث عن "{query}"',
  'LBL_PORTAL_SIGNUP' => 'سيتصل بك مندوب خدمة العملاء قريبًا لتهيئة حسابك.',
  'LBL_PORTAL_SIGNUP_COMPANY' => 'الشركة',
  'LBL_PORTAL_SIGNUP_COUNTRY' => 'البلد',
  'LBL_PORTAL_SIGNUP_EMAIL' => 'البريد الإلكتروني',
  'LBL_PORTAL_SIGNUP_FIRST_NAME' => 'الاسم الأول',
  'LBL_PORTAL_SIGNUP_JOBTITLE' => 'المسمى الوظيفي (اختياري)',
  'LBL_PORTAL_SIGNUP_LAST_NAME' => 'الاسم الأخير',
  'LBL_PORTAL_SIGNUP_PHONE' => '(###) ###-#### (اختياري)',
  'LBL_PORTAL_SIGNUP_PROCESS' => 'التسجيل',
  'LBL_PORTAL_SIGNUP_STATE' => 'الولاية',
  'LBL_PORTAL_SIGNUP_TITLE' => 'نشكرك على اشتراكك لدينا!',
  'LBL_PORTAL_THEME' => 'سمة البوابة',
  'LBL_PORTAL_TOUR_RECORD_ADD_NOTE' => 'انقر هنا لإضافة ملاحظة على هذا السجل.',
  'LBL_PORTAL_TOUR_RECORD_DETAILS' => 'سيتيح لك عرض السجل مشاهدة تفاصيل سجل.',
  'LBL_PORTAL_TOUR_RECORD_NOTES' => 'ستتيح لك الملاحظات التعاون مع مستخدمي المنفذ الآخرين ودعم المندوبين.',
  'LBL_PORTAL_TOUR_RECORD_VIEW_NOTE' => 'انقر فوق تلك الرموز لعرض تفاصيل الملاحظات المرفقة.',
  'LBL_PORTAL_UNAUTHORIZED' => 'عذرًا، يبدو أنك غير مسموح لك بالدخول إلى هذا المورد.',
  'LBL_PORTAL_UNAUTHORIZED_TITLE' => 'غير مسموح',
  'LBL_PORTAL_WELCOME_INFO' => 'يمثل Sugar Portal إطار عمل يتيح إمكانية لعرض الوقت الفعلي، والمشكلات، ونشرات الأخبار، وما شابه للعملاء. يعتبر واجهة مواجهة خارجية لـ Sugar يمكن نشرها داخل أي موقع إلكتروني.  لا تزال مناسبة لمزيد من خصائص الخدمة الذاتية للعميل مثل "إدارة المشروعات" و"المنتديات" في إصداراتنا المستقبلية.',
  'LBL_PORTAL_WELCOME_TITLE' => 'مرحبًا بك في Sugar Portal 5.1.0',
  'LBL_POSTAL_CODE' => 'الرمز البريدي:',
  'LBL_POWERED_BY_SUGARCRM' => 'بدعم SugarCRM',
  'LBL_PRECONDITION_MISSING' => 'فشل الطلب، أو، المعلمة مفقودة/غير صالحة. يرجى الاتصال بالدعم الفني.',
  'LBL_PRECONDITION_MISSING_TITLE' => 'خطأ: ',
  'LBL_PREFERRED_LANGUAGE' => 'تفضيلات اللغة:',
  'LBL_PREVIEW' => 'معاينة',
  'LBL_PREVIEW_BWC_TOOLTIP' => 'غير قادر على معاينة الوحدات القانونية',
  'LBL_PREVIEW_DISABLED_ATTACHMENT' => 'تم تعطيل المعاينة: لا تتوفر بيانات',
  'LBL_PREVIEW_DISABLED_DELETED_OR_NO_ACCESS' => 'تم تعطيل المعاينة: تم مسح سجل أو حظر الدخول على سجل',
  'LBL_PREVIEW_DISABLED_NO_ACCESS' => 'تم تعطيل المعاينة: لا يمكن الوصول إلى سجل',
  'LBL_PREVIEW_DISABLED_NO_RECORD' => 'تم تعطيل المعاينة: لا تتوفر بيانات',
  'LBL_PREVIEW_DISABLED_SAME_RECORD' => 'تم تعطيل المعاينة: أثناء العرض مثل السجل الحالي',
  'LBL_PREVIOUS_CURRENT_NEXT_TIMEPERIODS' => 'سابق، وحالي، وتالٍ',
  'LBL_PREVIOUS_TIMEPERIOD' => 'فترة زمنية سابقة',
  'LBL_PRIMARY_ADDRESS' => 'العنوان الرئيسي:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'المدينة في العنوان الرئيسي:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'البلد في العنوان الرئيسي:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'الرمز البريدي في العنوان الرئيسي:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'الولاية في العنوان الرئيسي:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'الشارع في العنوان الرئيسي:',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'الشارع في العنوان الرئيسي 2:',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'الشارع في العنوان الرئيسي 3:',
  'LBL_PRINT' => 'طباعة',
  'LBL_PROCESSING_REQUEST' => 'تتم المعالجة الآن...',
  'LBL_PRODUCTS' => 'المنتجات',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'البنود المسعرة',
  'LBL_PRODUCT_BUNDLES' => 'حِزم المنتج',
  'LBL_PRODUCT_TEMPLATES' => 'قوالب المنتج',
  'LBL_PROFILE' => 'ملف التعريف',
  'LBL_PROJECTS' => 'المشروعات',
  'LBL_PROJECT_MINUS' => 'إزالة',
  'LBL_PROJECT_PLUS' => 'إضافة',
  'LBL_PROJECT_TASKS' => 'مهام المشروع',
  'LBL_PROSPECTS' => 'الأهداف',
  'LBL_PRO_DELETE_CONFIRMATION' => 'هل تريد بالتأكيد حذف هذا السجل؟',
  'LBL_PRO_DISABLE' => 'تحديث',
  'LBL_PRO_DISABLE_CONFIRMATION' => 'هل تريد بالتأكيد تعطيل هذا السجل؟',
  'LBL_PRO_ENABLE' => 'تحديث',
  'LBL_PRO_ENABLE_CONFIRMATION' => 'هل تريد بالتأكيد تمكين هذا السجل؟',
  'LBL_QUARTER_TIMEPERIOD_FORMAT' => '{1} Q{0}',
  'LBL_QUERY_CHILD' => 'استعلام فرعي صالح',
  'LBL_QUERY_ERROR' => 'خطأ!',
  'LBL_QUERY_HASH' => 'تجزئة SQL',
  'LBL_QUERY_VALID' => 'صالح',
  'LBL_QUESTION_MARK' => '؟',
  'LBL_QUICKEDIT_NODEFS_NAVIGATION' => 'يتم الآن التصفح... ',
  'LBL_QUICK_CREATE_MENU' => 'قائمة الإنشاء السريع',
  'LBL_QUICK_CREATE_TITLE' => 'إنشاء سريع',
  'LBL_QUOTES' => 'عروض الأسعار',
  'LBL_QUOTES_SHIP_TO' => 'شحن عروض السعر إلى',
  'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
  'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'إنشاء فرصة من عرض سعر',
  'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'إنشاء فرصة من عرض سعر',
  'LBL_RECENTLY_UPDATED' => 'محدثة مؤخرًا',
  'LBL_RECENTS' => 'الأحداث الأخيرة',
  'LBL_RECOMMENDED_INVITES' => 'الدعوات الموصى بها',
  'LBL_RECORD_BODY' => 'بطاقة عمل',
  'LBL_RECORD_DELETED' => '(السجل المحذوف)',
  'LBL_RECORD_HEADER' => 'عنوان السجل',
  'LBL_RECORD_NOT_FOUND' => 'لم يتم العثور على السجل.',
  'LBL_RECORD_SAVED' => 'تم حفظ السجل.',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'لقد أنشأت هذا السجل بنجاح، ولكن ليس لديك تصريح بالوصول إليه.',
  'LBL_RECORD_SAVED_SUCCESS' => 'تم إنشاء {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{full_name}}</a> بنجاح.',
  'LBL_RECORD_SHARE_BUTTON' => 'مشاركة',
  'LBL_RECORD_SHOWMORE' => 'عرض المزيد',
  'LBL_REDIRECT_URL' => 'إعادة توجيه URL',
  'LBL_REFINE_LIST' => 'تنقيح القائمة',
  'LBL_RELATED' => 'مرتبط',
  'LBL_RELATED_CAMPAIGN' => 'الحملة المرتبطة',
  'LBL_RELATED_CONTACT' => 'جهة اتصال ذات الصلة',
  'LBL_RELATED_INFORMATION' => 'المعلومات ذات الصلة',
  'LBL_RELATED_MODULE' => 'مرتبط {{{this}}}',
  'LBL_RELATED_MODULE_PLURAL' => 'مرتبط {{{this}}}',
  'LBL_RELATED_RECORDS' => 'السجلات ذات الصلة',
  'LBL_RELATED_RECORD_NOT_FOUND' => 'لم يتم العثور على سجل ذي صلة.',
  'LBL_RELATIONSHIP' => 'العلاقة',
  'LBL_RELOAD_PAGE' => 'يرجى <a href="javascript: window.location.reload()">إعادة تحميل النافذة</a> لاستخدام لوحة معلومات Sugar.',
  'LBL_REMINDERS' => 'تذكيرات',
  'LBL_REMINDERS_FINISHED' => 'انتهى!',
  'LBL_REMINDERS_NONE_FOUND' => 'لم يتم العثور على تذكيرات.',
  'LBL_REMINDERS_OVERDUE' => 'متأخر',
  'LBL_REMINDERS_UPCOMING' => 'القادمة',
  'LBL_REMINDER_TITLE' => 'تذكير',
  'LBL_REMOVE' => 'إزالة',
  'LBL_REMOVED_DASHLET' => 'تمت إزالة لوحة معلومات Sugar',
  'LBL_REMOVE_ALL_LEAD_FIELDS' => 'إزالة كل الحقول',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'هل تريد بالتأكيد حذف لوحة معلومات Sugar؟',
  'LBL_REMOVE_DASHLET_ROW_CONFIRM' => 'هل تريد بالتأكيد حذف الصف؟',
  'LBL_REMOVE_FROM_FAVORITES' => 'الإزالة من مفضلاتي',
  'LBL_REMOVE_MODULE_ENTRY' => 'هل تريد بالتأكيد تعطيل تكامل الموصل لهذه الوحدة؟',
  'LBL_REMOVE_PRIMARY_TEAM_ERROR' => 'خطأ في محاولة إزالة معرّف فريق أساسي [{0}] لـ [{1}] نموذج مزود بمعرّف [{2}]',
  'LBL_REMOVING_ATTACHMENT' => 'تتم الآن إزالة المرفق...',
  'LBL_REMOVING_DASHLET' => 'تتم الآن إزالة لوحة معلومات Sugar....',
  'LBL_RENAME_PAGE' => 'إعادة تسمية صفحة',
  'LBL_REPLACE_BUTTON' => 'استبدل',
  'LBL_REPORTS_TO' => 'تقارير إلى',
  'LBL_REPORT_AUTO_REFRESH' => 'تحديث تلقائي',
  'LBL_REPORT_EDIT' => 'تعديل التقرير المحدد',
  'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'حساب',
  'LBL_REPORT_SELECT' => 'تحديد تقرير',
  'LBL_REQUEST_PASSWORD' => 'طلب كلمة المرور',
  'LBL_REQUEST_PROCESSED' => 'تم',
  'LBL_REQUEST_TIMEOUT' => 'انتهى زمن الطلب.',
  'LBL_REQUEST_TIMEOUT_TITLE' => 'انتهاء زمن الطلب',
  'LBL_REQUIRED_FIELD' => 'مطلوب',
  'LBL_REQUIRED_SYMBOL' => '*',
  'LBL_REQUIRED_TITLE' => 'يشير إلى حقل مطلوب',
  'LBL_RESET' => 'إعادة تعيين',
  'LBL_RESET_DEFAULT_VIEW' => 'إعادة تعيين طريقة العرض الافتراضية',
  'LBL_RESET_DEFAULT_WIDTHS' => 'إعادة تعيين العروض الافتراضية',
  'LBL_RESET_THEME_LNK' => 'استعادة السمة الافتراضية',
  'LBL_RESET_THEME_MODAL_INFO' => 'هل تريد بالتأكيد تجاهل الإعدادات المخصصة للسمة الخاصة بك واستبدالها بالسمة الافتراضية؟',
  'LBL_RESET_THEME_PROCESS' => 'يتم الآن استعادة الموضوع الافتراضي...',
  'LBL_RESOLVE_CONFLICT' => 'حل مشكلة لـ {{name}}',
  'LBL_RESOURCE_UNAVAILABLE' => 'المورد غير متاح.',
  'LBL_RESOURCE_UNAVAILABLE_TITLE' => 'ممنوع',
  'LBL_RESTORE' => 'إعادة الضبط إلى الأصلي',
  'LBL_RETRIEVING_PAGE' => 'تتم الآن استعادة الصفحة...',
  'LBL_ROLLBACK_BUTTON' => 'التراجع',
  'LBL_ROUNDTRIPS' => 'حساب الإجراء',
  'LBL_ROUTING_ACTIONS_COPY_MAIL' => 'نسخ البريد',
  'LBL_ROUTING_ACTIONS_DELETE_BEAN' => 'حذف كائن Sugar',
  'LBL_ROUTING_ACTIONS_DELETE_FILE' => 'حذف الملف',
  'LBL_ROUTING_ACTIONS_DELETE_MAIL' => 'حذف البريد الإلكتروني',
  'LBL_ROUTING_ACTIONS_FORWARD' => 'إعادة توجيه البريد الإلكتروني',
  'LBL_ROUTING_ACTIONS_MARK_FLAGGED' => 'وضع علامة على البريد الإلكتروني',
  'LBL_ROUTING_ACTIONS_MARK_READ' => 'تمييز كمقروء',
  'LBL_ROUTING_ACTIONS_MARK_UNREAD' => 'تمييز كغير مقروء',
  'LBL_ROUTING_ACTIONS_MOVE_MAIL' => 'نقل البريد الإلكتروني',
  'LBL_ROUTING_ACTIONS_PEFORM' => 'تنفيذ الإجراءات التالية',
  'LBL_ROUTING_ACTIONS_REPLY' => 'الرد على البريد الإلكتروني',
  'LBL_ROUTING_ADD_RULE' => 'إضافة قاعدة',
  'LBL_ROUTING_ALL' => 'على الأقل',
  'LBL_ROUTING_ANY' => 'أي',
  'LBL_ROUTING_BREAK' => '-',
  'LBL_ROUTING_BUTTON_CANCEL' => 'إلغاء',
  'LBL_ROUTING_BUTTON_SAVE' => 'حفظ القاعدة',
  'LBL_ROUTING_CHECK_RULE' => 'تم اكتشاف حدوث خطأ:',
  'LBL_ROUTING_CHECK_RULE_DESC' => 'يرجى التحقق من جميع الحقول المميزة.',
  'LBL_ROUTING_CONFIRM_DELETE' => 'هل تريد بالتأكيد حذف هذه القاعدة؟<br />لا يمكن التراجع عن ذلك.',
  'LBL_ROUTING_FLAGGED' => 'وضع علامة على مجموعة',
  'LBL_ROUTING_FORM_DESC' => 'القواعد المحفوظة نشطة على الفور.',
  'LBL_ROUTING_FW' => 'إعادة توجيه:',
  'LBL_ROUTING_LIST_TITLE' => 'القواعد',
  'LBL_ROUTING_MATCH' => 'إذا',
  'LBL_ROUTING_MATCH_2' => 'أي من الحالات التالية قد تمت تلبيتها:',
  'LBL_ROUTING_MATCH_CC_ADDR' => 'نسخة',
  'LBL_ROUTING_MATCH_DESCRIPTION' => 'محتوى النص',
  'LBL_ROUTING_MATCH_FROM_ADDR' => 'من',
  'LBL_ROUTING_MATCH_NAME' => 'الموضوع',
  'LBL_ROUTING_MATCH_PRIORITY_HIGH' => 'أولوية عالية',
  'LBL_ROUTING_MATCH_PRIORITY_LOW' => 'أولوية منخفضة',
  'LBL_ROUTING_MATCH_PRIORITY_NORMAL' => 'أولوية عادية',
  'LBL_ROUTING_MATCH_TO_ADDR' => 'إلى',
  'LBL_ROUTING_MATCH_TYPE_MATCH' => 'تحتوي على',
  'LBL_ROUTING_MATCH_TYPE_NOT_MATCH' => 'لا تحتوي على',
  'LBL_ROUTING_NAME' => 'اسم القاعدة',
  'LBL_ROUTING_NEW_NAME' => 'قاعدة جديدة',
  'LBL_ROUTING_ONE_MOMENT' => 'الرجاء الانتظار...',
  'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS' => 'الرسالة الأصلية تعقب ذلك.',
  'LBL_ROUTING_RE' => 'الرد:',
  'LBL_ROUTING_SAVING_RULE' => 'حفظ القاعدة',
  'LBL_ROUTING_SUB_DESC' => 'القواعد المتحقق منها نشطة. انقر فوق الاسم المطلوب تعديله.',
  'LBL_ROUTING_TO' => 'إلى',
  'LBL_ROUTING_TO_ADDRESS' => 'عنوان إلى',
  'LBL_ROUTING_WITH_TEMPLATE' => 'مع القالب',
  'LBL_RSS_FEED' => 'تغذية RSS',
  'LBL_RSS_FEED_AUTHOR' => 'المؤلف:',
  'LBL_RSS_FEED_DASHLET' => 'تغذية RSS',
  'LBL_RSS_FEED_DASHLET_DESCRIPTION' => 'حافظ على حداثة معلوماتك من خلال إضافة RSS أو موجزات المدونات.',
  'LBL_RSS_FEED_ENTRIES_COUNT' => 'عدد الإدخالات المطلوب عرضها',
  'LBL_RSS_FEED_URL' => 'عنوان URL الموجز',
  'LBL_RSS_RECORDS_FOUND' => 'تم العثور على السجل (السجلات) ',
  'LBL_RUN_COUNT' => 'حساب الاستعلام',
  'LBL_SAVED' => 'محفوظ',
  'LBL_SAVED_LAYOUT' => 'تم حفظ المخطط.',
  'LBL_SAVED_SEARCH_ERROR' => 'يرجى تقديم اسم لهذا العرض.',
  'LBL_SAVED_SEARCH_SHORTCUT' => 'عمليات البحث المحفوظة',
  'LBL_SAVED_VIEWS' => 'عروض محفوظة',
  'LBL_SAVE_AND_CONTINUE' => 'الحفظ والاستمرار',
  'LBL_SAVE_AND_CREATE_ANOTHER' => 'حفظ وإنشاء جديد',
  'LBL_SAVE_AND_DEPLOY_BTN' => 'حفظ ونشر',
  'LBL_SAVE_AND_SEND_INVITES_BUTTON' => 'حفظ الدعوات وإرسالها',
  'LBL_SAVE_AND_VIEW' => 'حفظ وعرض',
  'LBL_SAVE_AS_BUTTON_KEY' => 'A',
  'LBL_SAVE_AS_BUTTON_LABEL' => 'حفظ باسم',
  'LBL_SAVE_AS_BUTTON_TITLE' => 'حفظ باسم',
  'LBL_SAVE_BUTTON_KEY' => 'a',
  'LBL_SAVE_BUTTON_LABEL' => 'حفظ',
  'LBL_SAVE_BUTTON_TITLE' => 'حفظ',
  'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
  'LBL_SAVE_NEW_BUTTON_LABEL' => 'حفظ وإنشاء جديد',
  'LBL_SAVE_NEW_BUTTON_TITLE' => 'حفظ وإنشاء جديد',
  'LBL_SAVE_OBJECT' => 'حفظ {0}',
  'LBL_SAVE_THEME_PROCESS' => 'يتم الآن حفظ الموضوع...',
  'LBL_SAVE_WEB_TO_LEAD_FORM' => 'حفظ شبكة لنموذج العميل المتوقع',
  'LBL_SAVING' => 'حفظ',
  'LBL_SAVING_LAYOUT' => 'يتم الآن حفظ المخطط...',
  'LBL_SAVING_PAGE_TITLE' => 'يتم الآن حفظ عنوان للصفحة...',
  'LBL_SCHEDULE_CALL' => 'سجل المكالمات',
  'LBL_SCHEDULE_MEETING' => 'جدولة اجتماع',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'جدولة اجتماع',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'جدولة اجتماع',
  'LBL_SEARCH' => 'بحث',
  'LBL_SEARCHFORM' => 'استمارة البحث',
  'LBL_SEARCHING' => 'يتم الآن البحث...',
  'LBL_SEARCH_ALL' => 'البحث في كل {{{this}}}...',
  'LBL_SEARCH_ALL_MODULES' => 'البحث في الكل',
  'LBL_SEARCH_ALL_RECORDS' => 'البحث في جميع السجلات',
  'LBL_SEARCH_AND_SELECT' => 'البحث والتحديد {{module}}',
  'LBL_SEARCH_BUTTON_KEY' => 'Q',
  'LBL_SEARCH_BUTTON_LABEL' => 'بحث',
  'LBL_SEARCH_BUTTON_TITLE' => 'بحث',
  'LBL_SEARCH_BY' => 'البحث بواسطة',
  'LBL_SEARCH_CHARTS' => 'المخططات',
  'LBL_SEARCH_CRITERIA' => 'معيار البحث',
  'LBL_SEARCH_DROPDOWN_NO' => 'لا',
  'LBL_SEARCH_DROPDOWN_YES' => 'نعم',
  'LBL_SEARCH_EXTERNAL_API' => 'ملف على مصدر خارجي',
  'LBL_SEARCH_FOR' => 'البحث عن ',
  'LBL_SEARCH_FOR_MORE' => 'البحث عن المزيد...',
  'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'إغلاق',
  'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>أدوات تحكم متعددة الاختيار</strong></p><ul><li>انقر فوق القيم لتحديد سمة.</li><li>انقر Ctrl &nbsp;to&nbsp;حدد متعدد. مستخدمو Mac يستخدمون النقر فوق CMD.</li><li>لتحديد كل القيم بين سمتين &nbsp، انقر فوق القيمة الأولى nbspثم انقر فوق shift.</li></ul><p><strong>بحث ومخطط متقدم خيارات</strong><br><br>استخدام <b>البحث والمخطط المحفوظ</b> ، يمكنك حفظ مجموعة من معلمات البحث و/أو قائمة تخصيص للحصول سريعًا على نتائج البحث المرغوب فيها مستقبلاً. يمكنك حفظ عدد لانهائي من الأبحاث المخصصة والمخططات. تظهر كل عمليات البحث المحفوظة حسب الاسم في قائمة "أبحاث محفوظة"، مع آخر بحث محفوظ تم تحميله يظهر أعلى القائمة.<br><br>لتخصيص مخطط عرض القائمة، استخدم مربعات "إخفاء أعمدة وإظهار أعمدة" لتحديد الحقول المراد عرضها في نتائج البحث. على سبيل المثال، يمكنك عرض أو إخفاء التفاصيل على شكل اسم السجل، وتعيين مستخدم، وتعيين فريق في نتائج البحث. لإضافة عمود لعرض القائمة، حدد الحقل من قائمة "إخفاء أعمدة" واستخدم السهم الأيسر لنقله إلى قائمة "عرض أعمدة". لمسح عمود من عرض قائمة، حدده من قائمة "عرض أعمدة" واستخدم السهم الأيمن لنقله إلى قائمة "إخفاء أعمدة".<br><br>إذا حفظت إعدادات المخطط، فستكون قادرًا على تحميلها في أي وقت لعرض نتائج البحث في مخطط مخصص.<br><br>لحفظ وتحديث بحث و/أو مخطط:<ol><li>أدخل اسمًا لنتائج البحث في <b>حفظ هذا البحث على شكل</b> حقل وانقر فوق <b>حفظ</b>.يظهر الاسم الآن في قائمة الأبحاث المحفوظة <b>زر</b> مسح.</li><li>لعرض بحث محفوظ، حدده من قائمة "أبحاث محفوظة". يتم عرض نتائج البحث في قائمة العرض.</li><li>لتحديث خصائص بحث محفوظ، حدد بحثًا محفوظًا من القائمة، أدخل معيار البحث الجديد و/أو خيارات المخطط في منطقة "بحث متقدم" وانقر فوق <b>تحديث</b> بجوار <b>تعديل البحث الحالي </b>.</li><li>لحذف بحث محفوظ، حدده في قائمة "أبحاث محفوظة"، ثم انقر فوق <b>حذف</b> بجوار <b>تعديل البحث الحالي</b>، ثم انقر فوق<b>موافق</b> لتأكيد الحذف.</li></ol><p><strong>نصائح</strong><br><br>باستخدام علامة النسبة بوصفها مشغلًا، يمكنك القيام ببحثك بشكل أوسع نطاقًا.  على سبيل المثال، بدلاً من البحث فقط عن نتائج تساوي "تفاح" يمكنك تغيير بحثك "% تفاحات" الذي ربما يطابق كل النتائج التي تبدأ بالكلمة تفاح ولكن يحتوي على حروف أخرى أيضًا.</p>',
  'LBL_SEARCH_HELP_TITLE' => 'تلميحات البحث',
  'LBL_SEARCH_LOAD_MORE' => 'تحميل المزيد',
  'LBL_SEARCH_MODULES' => 'الوحدات',
  'LBL_SEARCH_MORE' => 'المزيد',
  'LBL_SEARCH_NO_RESULTS' => 'لم يتم العثور على نتائج لـ ',
  'LBL_SEARCH_PARENT_RELATED_ITEM' => 'بحث...',
  'LBL_SEARCH_POPULATE_ONLY' => 'إجراء بحث باستخدام استمارة البحث أعلاه',
  'LBL_SEARCH_REPORT_CHARTS' => 'مخططات التقرير',
  'LBL_SEARCH_RESULTS' => 'نتائج البحث',
  'LBL_SEARCH_RESULTS_FOUND' => 'نتائج البحث التي تم العثور عليها',
  'LBL_SEARCH_RESULTS_TIME' => 'ms.',
  'LBL_SEARCH_SELECT' => 'تحديد...',
  'LBL_SEARCH_SELECT_MODULE' => 'تحديد{{module}}...',
  'LBL_SEARCH_TIPS' => 'اضغط زر البحث أو انقر enter للحصول على تطابق تام لها.',
  'LBL_SEARCH_TIPS_2' => 'اضغط زر البحث أو انقر enter للحصول على تطابق تام ',
  'LBL_SEARCH_TOOLS' => 'الأدوات',
  'LBL_SEARCH_UNAVAILABLE' => 'البحث غير متاح، يُرجى المحاولة لاحقًا.',
  'LBL_SECONDS' => 'الثواني نشطة',
  'LBL_SEC_AVG' => 'متوسط الثواني',
  'LBL_SEC_TOTAL' => 'إجمالي الثواني',
  'LBL_SEE_ALL' => 'مشاهدة الكل',
  'LBL_SELECT_ACTION_LABEL' => 'تحديد إجراء',
  'LBL_SELECT_ALL_TITLE' => 'تحديد الكل',
  'LBL_SELECT_APPEND_TEAMS' => 'إلحاق فريق (فرق)',
  'LBL_SELECT_APPEND_VALUES' => 'إلحاق قيمة (قيم)',
  'LBL_SELECT_BUTTON_KEY' => 'T',
  'LBL_SELECT_BUTTON_LABEL' => 'تحديد',
  'LBL_SELECT_BUTTON_TITLE' => 'تحديد',
  'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
  'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'تحديد جهة اتصال',
  'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'تحديد جهة اتصال',
  'LBL_SELECT_MODULE' => 'تحديد وحدة:',
  'LBL_SELECT_PHOTO' => 'تحديد صورة',
  'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'حدد من التقارير',
  'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'حدد التقارير',
  'LBL_SELECT_TEAMS_KEY' => 'Z',
  'LBL_SELECT_TEAMS_LABEL' => 'إضافة فريق (فرق)',
  'LBL_SELECT_TEAMS_TITLE' => 'إضافة فريق (فرق)',
  'LBL_SELECT_THIS_ROW_TITLE' => 'تحديد هذا الصف',
  'LBL_SELECT_USER_BUTTON_KEY' => 'U',
  'LBL_SELECT_USER_BUTTON_LABEL' => 'تحديد مستخدم',
  'LBL_SELECT_USER_BUTTON_TITLE' => 'تحديد مستخدم',
  'LBL_SEND_INVITE' => 'إرسال دعوة',
  'LBL_SERVER_MEMORY_BYTES' => 'بايت',
  'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'الاستخدام: - الوحدة: {0} - الإجراء: {1}',
  'LBL_SERVER_MEMORY_USAGE' => 'استخدام ذاكرة الخادم: {0} ({1})',
  'LBL_SERVER_PEAK_MEMORY_USAGE' => 'استخدام الذاكرة القصوى للخادم: {0} ({1})',
  'LBL_SERVER_RESPONSE_RESOURCES' => 'الموارد المستخدمة لإنشاء هذه الصفحة (استعلامات، ملفات)',
  'LBL_SERVER_RESPONSE_TIME' => 'وقت استجابة الخادم:',
  'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'ثوانٍ.',
  'LBL_SESSION_ID' => 'معرّف الجلسة',
  'LBL_SETUP_COMPLETE_INFO' => 'بدء تشغيل Sugar!',
  'LBL_SETUP_PROGRESS' => 'تقدم الإعداد',
  'LBL_SETUP_USER_INFO' => 'إعداد بيانات المستخدم',
  'LBL_SETUP_USER_LOCALE_INFO' => 'ضبط المنطقة الزمنية، والتاريخ، وتنسيق الاسم',
  'LBL_SET_FONTSIZE' => 'حجم الخط',
  'LBL_SET_NEW_PASSWORD' => 'إدخال كلمة المرور',
  'LBL_SHARE_BUTTON_KEY' => 'r',
  'LBL_SHARE_BUTTON_LABEL' => 'مشاركة',
  'LBL_SHARE_BUTTON_TITLE' => 'مشاركة',
  'LBL_SHARE_COMPANY' => 'الشركة',
  'LBL_SHARE_LINKABLE' => 'قابل للربط',
  'LBL_SHARE_PRIVATE' => 'خاص',
  'LBL_SHARE_PUBLIC' => 'عام',
  'LBL_SHIPPING_ADDRESS' => 'عنوان الشحن',
  'LBL_SHIPPING_STREET' => 'الشارع:',
  'LBL_SHIP_TO_ACCOUNT' => 'شحن إلى حساب',
  'LBL_SHIP_TO_CONTACT' => 'شحن إلى جهة اتصال',
  'LBL_SHORTCUTS' => 'اختصارات',
  'LBL_SHORTCUT_ALERT_CANCEL' => 'إلغاء',
  'LBL_SHORTCUT_ALERT_CONFIRM' => 'تأكيد',
  'LBL_SHORTCUT_CANCEL_INLINE_EDIT' => 'الخروج من القائمة في وضع التعديل بدون حفظ',
  'LBL_SHORTCUT_CLOSE_DRAWER' => 'إغلاق الرسام',
  'LBL_SHORTCUT_COPY_RECORD' => 'نسخ سجل حالي',
  'LBL_SHORTCUT_CREATE_RECORD' => 'إنشاء سجل جديد',
  'LBL_SHORTCUT_EDIT_SELECTED' => 'تعديل السجل المحدد في القائمة',
  'LBL_SHORTCUT_FAVORITE_RECORD' => 'وضع علامة على السجل كمفضلة',
  'LBL_SHORTCUT_FILTER_ADD' => 'إضافة معايير إضافية لعامل التصفية',
  'LBL_SHORTCUT_FILTER_CLOSE' => 'إغلاق عامل التصفية',
  'LBL_SHORTCUT_FILTER_CREATE' => 'إنشاء عامل تصفية لقائمة جديد',
  'LBL_SHORTCUT_FILTER_DELETE' => 'حذف عامل التصفية',
  'LBL_SHORTCUT_FILTER_EDIT' => 'تعديل عامل تصفية القائمة الحالي',
  'LBL_SHORTCUT_FILTER_REMOVE' => 'إزالة آخر معيار من التصفية',
  'LBL_SHORTCUT_FILTER_RESET' => 'إعادة ضبط عامل التصفية',
  'LBL_SHORTCUT_FILTER_SAVE' => 'حفظ عامل التصفية',
  'LBL_SHORTCUT_FILTER_SEARCH' => 'التركيز على حقل التصفية',
  'LBL_SHORTCUT_FILTER_SHOW' => 'فتح قائمة عامل تصفية القائمة',
  'LBL_SHORTCUT_FOLLOW_RECORD' => 'متابعة السجل',
  'LBL_SHORTCUT_FUNCTION' => 'الوظيفة',
  'LBL_SHORTCUT_HELP' => 'عرض الاختصارات على صفحة التعليمات',
  'LBL_SHORTCUT_KEYS_HELP_ABOUT' => 'يقوم SugarCRM بتمكين المستخدمين الكبار من أداء مهام معينة بسرعة باستخدام اختصارات لوحة المفاتيح لزيادة الإنتاجية. توضح الجداول على اليمين الاختصارات بطول لوحة المفاتيح والإجراءات التي تطبقها.',
  'LBL_SHORTCUT_KEY_KEY' => 'المفتاح',
  'LBL_SHORTCUT_MARK_SELECTED' => 'وضع علامة على السجل كمحدد',
  'LBL_SHORTCUT_MASS_UPDATE_ADD' => 'إضافة صف',
  'LBL_SHORTCUT_MASS_UPDATE_CANCEL' => 'غلق التحديث بأكمله',
  'LBL_SHORTCUT_MASS_UPDATE_REMOVE' => 'إزالة صف',
  'LBL_SHORTCUT_MASS_UPDATE_SAVE' => 'السجلات المحدثة',
  'LBL_SHORTCUT_NAVIGATE_DOWN' => 'تحديد السجل التالي في القائمة',
  'LBL_SHORTCUT_NAVIGATE_UP' => 'تحديد السجل السابق في القائمة',
  'LBL_SHORTCUT_OPEN' => 'فتح السجل المحدد في القائمة',
  'LBL_SHORTCUT_OPEN_MASS_ACTION' => 'فتح قائمة الإجراءات الشاملة المنسدلة',
  'LBL_SHORTCUT_OPEN_MORE_ACTION' => 'فتح قائمة الإجراءات الأساسية المنسدلة',
  'LBL_SHORTCUT_PREVIEW_SELECTED' => 'معاينة السجل',
  'LBL_SHORTCUT_QUICK_CREATE' => 'تبديل قائمة إنشاء سريع',
  'LBL_SHORTCUT_RECORD_CANCEL' => 'مسح أي تغييرات للسجل',
  'LBL_SHORTCUT_RECORD_DELETE' => 'حذف سجل',
  'LBL_SHORTCUT_RECORD_EDIT' => 'تعديل سجل',
  'LBL_SHORTCUT_RECORD_NEXT' => 'فتح سجل تالٍ',
  'LBL_SHORTCUT_RECORD_PREVIOUS' => 'فتح سجل سابق',
  'LBL_SHORTCUT_RECORD_SAVE' => 'حفظ السجل',
  'LBL_SHORTCUT_SCROLL_LEFT' => 'تمرير القائمة على اليسار',
  'LBL_SHORTCUT_SCROLL_RIGHT' => 'تمرير القائمة على اليمين',
  'LBL_SHORTCUT_SEARCH' => 'التركيز على حقل البحث العام',
  'LBL_SHORTCUT_SELECT_ALL' => 'تحديد الكل',
  'LBL_SHORTCUT_SIDEBAR_TOGGLE' => 'تبديل الشريط الجانبي',
  'LBL_SHOW' => 'إظهار',
  'LBL_SHOW_LESS' => 'عرض القليل',
  'LBL_SHOW_LESS_RECENTS' => '...القليل من عمليات البحث الأخيرة',
  'LBL_SHOW_MORE' => 'عرض المزيد',
  'LBL_SHOW_MORE_GENERIC' => '{{name}} أكثر...',
  'LBL_SHOW_MORE_MODULE' => 'المزيد{{{module}}}...',
  'LBL_SHOW_MORE_RECENTS' => 'المزيد من عمليات البحث الأخيرة...',
  'LBL_SIGNUP_BUTTON_LABEL' => 'الاشتراك',
  'LBL_SIXMONTHS' => 'ستة شهور',
  'LBL_SMS_BUTTON' => 'SMS',
  'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
  'LBL_SMTPTYPE_GMAIL' => 'Gmail',
  'LBL_SMTPTYPE_OTHER' => 'أخرى',
  'LBL_SMTPTYPE_YAHOO' => 'Yahoo! البريد',
  'LBL_SORT' => 'فرز',
  'LBL_SQL_TEXT' => 'نص SQL',
  'LBL_SQS_INDICATOR' => '',
  'LBL_START_AND_END_DATE' => '{{start}} - {{end}} ({{duration}})',
  'LBL_START_AND_END_DATE_DETAIL_VIEW' => 'تاريخ البدء والنهاية',
  'LBL_START_AND_END_DATE_SAME_DAY' => '{{date}} {{start}} - {{end}} ({{duration}})',
  'LBL_START_AND_END_DATE_TO' => 'إلى',
  'LBL_START_BUTTON_LABEL' => 'البدء',
  'LBL_START_BUTTON_TITLE' => 'البدء',
  'LBL_STATE' => 'الولاية:',
  'LBL_STATUS' => 'الحالة:',
  'LBL_STATUS_UPDATED' => 'تم تحديث حالتك لهذا الحدث!',
  'LBL_STREAM_NO_RECORDS' => 'لا توجد ملاحظات في هذا السجل هذه المرة. يرجى إضافة ملاحظة بالنقر فوق رابط إضافة ملاحظة.',
  'LBL_STREET' => 'الشارع',
  'LBL_SUBJECT' => 'الموضوع',
  'LBL_SUBMIT_BUTTON_LABEL' => 'إرسال',
  'LBL_SUBSCRIBE' => 'الاشتراك',
  'LBL_SUCCESS' => 'نجاح',
  'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2016 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> جميع الحقوق محفوظة.<br />SugarCRM علامة تجارية مملوكة لشركة SugarCRM. قد تكون جميع أسماء الشركة والمنتجات الأخرى علامات تجارية خاصة بالشركات التابعة لها والتي تقترن بها.',
  'LBL_SUPPORT' => 'دعم',
  'LBL_SWITCH_INSTANCE' => 'التحول لهذا المثال',
  'LBL_SYNC' => 'مزامنة',
  'LBL_SYNCED_RECURRING_MSG' => 'تعذر تعديل هذا السجل حيث إنه متزامن من عميل خارجي.',
  'LBL_SYSTEM_DEFAULT_OUTBOUND_EMAIL_CONFIGURATION' => 'إعداد افتراضي للنظام',
  'LBL_TABGROUP_HOME' => 'لوحة المعلومات',
  'LBL_TASKS' => 'المهام',
  'LBL_TASKS_SUBPANEL_TITLE' => 'المهام',
  'LBL_TEAM' => 'الفريق:',
  'LBL_TEAMS' => 'الفرق',
  'LBL_TEAMS_LINK' => 'الفرق',
  'LBL_TEAM_ADD' => 'إضافة &nbsp;فريق',
  'LBL_TEAM_ID' => 'معرّف الفريق',
  'LBL_TEAM_PRIMARY' => 'معيَّن كفريق أساسي',
  'LBL_TEAM_REMOVE' => 'إزالة فريق',
  'LBL_TEAM_SELECTED_TITLE' => 'الفريق المحدد ',
  'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'حدد لجعل هذا الفريق أساسيًا',
  'LBL_TEAM_SET' => 'ضبط الفريق',
  'LBL_TEAM_SET_ID' => 'المعرّف المعين للفريق',
  'LBL_TEXTAREA_LESS' => 'أقل',
  'LBL_TEXTAREA_MORE' => 'المزيد',
  'LBL_THEME' => 'السمة:',
  'LBL_THEME_COLOR' => 'اللون',
  'LBL_THEME_FONT' => 'الخط',
  'LBL_THEME_PICKER' => 'نمط الصفحة',
  'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'تحذير: Internet Explorer 6 لا يدعم السمة المحددة. انقر فوق "موافق" لتحديدها بأي حال من الأحوال أو "إلغاء" لتحديد موضوع آخر.',
  'LBL_THEME_PREVIEW' => 'معاينة السمة',
  'LBL_THOUSANDS_SYMBOL' => 'K',
  'LBL_THREE_MONTHS' => 'ثلاثة شهور',
  'LBL_TIMEZONE_DIFFERENT_LINK' => 'تعديل المنطقة الزمنية الخاصة بك.',
  'LBL_TIME_AGO_DAY' => 'أمس',
  'LBL_TIME_AGO_DAYS' => '{{this}} منذ أيام',
  'LBL_TIME_AGO_HOUR' => 'منذ ساعة تقريبًا',
  'LBL_TIME_AGO_HOURS' => '{{this}} منذ ساعات',
  'LBL_TIME_AGO_MINUTE' => 'منذ دقيقة تقريبًا',
  'LBL_TIME_AGO_MINUTES' => '{{this}} منذ دقائق',
  'LBL_TIME_AGO_NOW' => 'في الحال',
  'LBL_TIME_AGO_SECONDS' => 'منذ أقل من دقيقة',
  'LBL_TIME_AGO_YEAR' => 'منذ عام',
  'LBL_TIME_RELATIVE' => 'مرسل{{relativetime}} على{{date}} إلى {{time}}',
  'LBL_TIME_RELATIVE_ACTIVITIES' => '{{relativetime}} في {{date}} في {{time}}',
  'LBL_TIME_UNTIL_DAY' => 'غدًا',
  'LBL_TIME_UNTIL_DAYS' => 'خلال {{this}} أيام',
  'LBL_TIME_UNTIL_HOUR' => 'خلال حوالي ساعة',
  'LBL_TIME_UNTIL_HOURS' => 'خلال {{this}} ساعات',
  'LBL_TIME_UNTIL_MINUTE' => 'في حوالي دقيقة',
  'LBL_TIME_UNTIL_MINUTES' => 'خلال {{this}} دقائق',
  'LBL_TIME_UNTIL_SECONDS' => 'في أقل من دقيقة',
  'LBL_TIME_UNTIL_YEAR' => 'خلال ما يزيد عن عام',
  'LBL_TODAY' => 'اليوم',
  'LBL_TODAYS_ACTIVITIES' => 'أنشطة اليوم',
  'LBL_TOGGLE_DRAWER' => 'تبديل الدرج',
  'LBL_TOGGLE_VISIBILITY' => 'تبديل الرؤية',
  'LBL_TOMORROW' => 'غدًا',
  'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'عرض أعلى 10 فرص في مخطط الفقاعة.',
  'LBL_TOP10_OPPORTUNITIES_DEFAULT_DATASET' => 'مجموعة البيانات الافتراضية',
  'LBL_TOP10_OPPORTUNITIES_FILTER_DURATIONS' => 'عامل تصفية التاريخ الافتراضي',
  'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'العناصر الخاصة بي',
  'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => 'الفرص الخاصة بفريقي',
  'LBL_TOUR' => 'الجولة',
  'LBL_TOUR_ADD' => 'إنشاء سجل من هنا',
  'LBL_TOUR_AVATAR' => 'الحصول على مزيد من التفاصيل حول التطبيق أو تسجيل الخروج',
  'LBL_TOUR_BACK' => 'للخلف',
  'LBL_TOUR_BTN_DONE' => 'تم',
  'LBL_TOUR_CALENDAR_URL_1' => 'هل تشارك تقويم SugarCRM الخاص بك مع تطبيقات خاصة بطرف خارجي، مثل Microsoft Outlook أو Exchange؟ وإذا كان الأمر كذلك، فلديك عنوان URL جديد يتضمن عنوان URL هذا الجديد والآمن مفتاحًا شخصيًا يمنع النشر غير المسوح به لتقويمك.',
  'LBL_TOUR_CALENDAR_URL_2' => 'قم باسترداد تقويم عنوان URL المشارك الجديد.',
  'LBL_TOUR_CLOSE' => 'إغلاق',
  'LBL_TOUR_CUBE' => 'ادخل إلى لوحات المفاتيح وسير النشاط',
  'LBL_TOUR_DONE' => 'لقد فعلتها!',
  'LBL_TOUR_END_TOUR' => 'إنهاء الجولة',
  'LBL_TOUR_FEATURES_670' => '•	منظر وإحساس محسن - الآن مع السمة الجديدة.<br />•	تعزيز وحدة التنبؤات - الآن مع واجهة المستخدم المبادر ورؤية البيانات الجديدة',
  'LBL_TOUR_FORECASTS_CHART' => 'معاينة توزيع التنبؤ',
  'LBL_TOUR_FORECASTS_COMMITS' => 'انقر لمشاهدة الالتزامات السابقة',
  'LBL_TOUR_FORECASTS_INLINEEDIT' => 'انقر لتعديل سطر البيانات',
  'LBL_TOUR_FORECASTS_PROGRESS' => 'معاينة المسافة بعرض السعر',
  'LBL_TOUR_FORECASTS_TIMEPERIODS' => 'اختر فترة زمنية لمشاهدة التنبؤ الملائم',
  'LBL_TOUR_FORECAST_INTRO' => 'تحكم في خط الأنابيب والتنبؤ.',
  'LBL_TOUR_FULL_TOUR' => 'جولة كاملة',
  'LBL_TOUR_INTRO' => 'مرحبًا بك في معاينة Sugar 7. استخدم الأسهم أدناه للقيام بجولة سريعة.',
  'LBL_TOUR_LIST_ACTIVTYSTREAMLIST_TOGGLE' => 'اختر مشاهدة الأنشطة أو قائمة السجلات',
  'LBL_TOUR_LIST_FILTER1' => 'يُمكِّن شريط التصفية من البحث عن هذه الوحدة',
  'LBL_TOUR_LIST_FILTER2' => 'اختر عامل تصفية محددًا مسبقًا أو قم بإنشاء جديد',
  'LBL_TOUR_LIST_FILTER_PREVIEW' => 'اختر التعديل للصف أو معاينة التفاصيل',
  'LBL_TOUR_LIST_FILTER_SEARCH' => 'اكتب هنا للبحث حسب الاسم',
  'LBL_TOUR_LIST_INTRO' => 'اعرض قائمة السجلات وسجلات اتخاذ الإجراءات.',
  'LBL_TOUR_LIST_INT_TOGGLE' => 'انقر لغلق جزء الذكاء أو فتحه',
  'LBL_TOUR_MODULE' => 'جولة في هذه الصفحة',
  'LBL_TOUR_NAV_BAR' => 'ادخل إلى كل الوحدات في قائمة "التصفح" واتخذ الإجراءات',
  'LBL_TOUR_NEXT' => 'التالي',
  'LBL_TOUR_NOTIFICATIONS' => 'انقر لمشاهدة الإخطارات',
  'LBL_TOUR_OVERVIEW' => 'نظرة عامة على الجولة',
  'LBL_TOUR_RECORD_ACTIONS' => 'اتخذ الإجراءات في السجل',
  'LBL_TOUR_RECORD_DASHBOARDACTIONS' => 'إنشاء مجموعات لوحات معلومات جديدة',
  'LBL_TOUR_RECORD_DASHBOARDNAME' => 'قم بتعيين اسم لمجموعة لوحات معلومات',
  'LBL_TOUR_RECORD_DASHLETCOG' => 'اختر حذف لوحة معلومات لتغيير الإعدادات',
  'LBL_TOUR_RECORD_INLINEEDIT' => 'يمكن تحديث اسم السجل في مكانه',
  'LBL_TOUR_RECORD_INLINEEDITRECORD' => 'انقر لتعديل سطر كل حقل',
  'LBL_TOUR_RECORD_INTRO' => 'اعرض التفاصيل الموجودة في هذا السجل وشاهد كل البيانات المرتبطة به.',
  'LBL_TOUR_RECORD_SHOWMORE' => 'انقر لمشاهدة المزيد من البيانات للسجل',
  'LBL_TOUR_RECORD_STATUS' => 'ابحث عن حالة مستوى السجل من هنا',
  'LBL_TOUR_RECORD_TOGGLEACTIVITIES' => 'اختر مشاهدة الأنشطة أو السجلات المرتبطة',
  'LBL_TOUR_REFERENCE_1' => 'يمكنك دائمًا الإشارة إلى',
  'LBL_TOUR_REFERENCE_2' => 'من خلال رابط الدع أسفل قائمة ملف التعريف.',
  'LBL_TOUR_REVISIT' => 'انقر هنا لعرض الجولة في أي وقت.',
  'LBL_TOUR_SCREEN_1_DESCRIPTION_670' => '* إعداد معلمات التنبؤ الخاص بك<br />* تتبع المبيعات المتوقعة وسلامة خط الأنابيب بكل سهولة<br />* التنبؤ القائم على المبيعات المخطط لها من فريق البيع لديك',
  'LBL_TOUR_SCREEN_1_TITLE_670' => 'تعزيز وظيفة التنبؤ في Sugar',
  'LBL_TOUR_SCREEN_2_DESCRIPTION_670' => '• اختر تاريخ بدء السنة المالية<br />• فترات الإعداد لتكون سنوية أو ربع سنوية<br />• إقرار كم عدد الفترات الماضية والمستقبلية المراد أن تكون مرئية في صفحة العمل<br />• حدد نطاقات التنبؤ لوضع علامات على الفرص كما هو مضمن، أو خالٍ، أو أعلى<br />• حدد سيناريوهات التنبؤ لتعريف المشابه، والأفضل، والأسوأ',
  'LBL_TOUR_SCREEN_2_TITLE_670' => 'إعداد معلمات التنبؤ الخاص بك',
  'LBL_TOUR_SCREEN_3_DESCRIPTION_670' => '•	حدد الفترة الزمنية لمعاينة التنبؤ<br />•	عرض صفحات عمل مبيعات أعضاء فريقك وتقديم تنبؤات معدلة<br />•	راجع التنبيه في صفحة عمل عند التزام عضو فريقك بالتنبؤ الجديد<br />•	احفظ صفحة عمل التنبؤ كمسودة أو الالتزام بمديرك<br />•	عرض تاريخ الالتزامات السابقة',
  'LBL_TOUR_SCREEN_3_TITLE_670' => 'تحكم في فريق المبيعات والمبيعات المخطط لها',
  'LBL_TOUR_SCREEN_4_DESCRIPTION_670' => '•	عرض مخطط باريتو لتحليل خط الأنابيب عبر تنبؤات أعضاء فريق مبيعاتك<br />•	اختر مشاهدة المبيعات المخطط لها المتشابهة، أو الأفضل، أو الأسوأ<br />•	عرض المبيعات المخطط لها وكيف أنك قريب لتحقيق الحصة النسبية الخاصة بفريقك',
  'LBL_TOUR_SCREEN_4_TITLE_670' => 'تحكم في فريق المبيعات والمبيعات المخطط لها',
  'LBL_TOUR_SCREEN_5_DESCRIPTION_670' => '•	حدد الفترة الزمنية للتنبؤ<br />•	الخاص بك، والكميات المعدلة، واحتمالية الفوز لما يتم تحليله سريعًا<br />•	احفظ صفحة عمل التنبؤ كمسودة أو الالتزام بمديرك<br />•	عرض تاريخ الالتزامات السابقة<br />•	التزام بالتنبؤ لمديرك وعرض تاريخ الالتزامات السابقة',
  'LBL_TOUR_SCREEN_5_TITLE_670' => 'تحكم في مبيعاتك المخطط لها',
  'LBL_TOUR_SCREEN_6_DESCRIPTION_670' => '•	عرض مخطط باريتو لتحليل خط الأنابيب بمرور الوقت لفرصك<br />•	اختر مشاهدة توزيع خط الأنابيب حسب مرحلة المبيعات أو احتمالية الفوز<br />•	عرض المبيعات المخطط لها وكيفية تحقيق الحصة النسبية الخاصة بفريقك',
  'LBL_TOUR_SCREEN_6_TITLE_670' => 'تحكم في مبيعاتك المخطط لها',
  'LBL_TOUR_SEARCH' => 'حدد وحدة واحدة أو أكثر وابحث',
  'LBL_TOUR_SKIP' => 'تخطي',
  'LBL_TOUR_TAKE_TOUR' => 'بدء الجولة',
  'LBL_TOUR_TOUR' => 'الدخول إلى الجولة في أي وقت',
  'LBL_TOUR_VISIT' => 'For more information please visit our application',
  'LBL_TOUR_WATCH' => 'شاهد ما الجديد في Sugar',
  'LBL_TOUR_WELCOME' => 'ما الجديد في Sugar',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'أرشيف البريد الإلكتروني',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'أرشيف البريد الإلكتروني',
  'LBL_TRADEMARK' => 'SugarCRM هي علامة تجارية خاصة بشركة SugarCRM, Inc. قد تكون جميع أسماء الشركة والمنتجات الأخرى علامات تجارية خاصة بالشركات التابعة لها والتي تقترن بها.',
  'LBL_TRADEMARK2' => 'SugarCRM ®، وSugar Enterprise™، وSugar™ هي علامات خاصة بشركة SugarCRM Inc.',
  'LBL_TRAINING' => 'دعم',
  'LBL_TT_DNB_BAL_AREA_CODE' => 'رموز مناطق الهاتف الأمريكية والكندية مثال: 512 أو 732 أو 973',
  'LBL_TT_DNB_BAL_CODE_TYPE' => 'حدد نوع رمز الصناعة: SIC أو NAICS',
  'LBL_TT_DNB_BAL_DUNS' => 'أدخل 9 أرقام DUNS®.  مثال:  060704780، 047897855',
  'LBL_TT_DNB_BAL_IND_CODE' => 'يتم دعم رموز SIC من 2 إلى 8 أو 2 إلى 6 لرموز NAICS المدعومة.  افصل الرموز المتعددة بفاصلة.',
  'LBL_TT_DNB_BAL_IPO_PRICE_RANGE' => 'بالدولار الأمريكي. مثال: نطاق سعر IPO2.00 إلى 2.50',
  'LBL_TT_DNB_BAL_MILLIONS' => 'بـ $ ملايين من الدولارات',
  'LBL_TT_DNB_BAL_MILLIONS_EX' => 'بملايين الدولارات الأمريكية. مثال: 100 أو 4.3.',
  'LBL_TT_DNB_BAL_NET_INCOME_GROWTH' => 'النسبة المئوية (%)',
  'LBL_TT_DNB_BAL_ORGID' => '# التسجيل. مثال: 130871985، 160468020',
  'LBL_TT_DNB_BAL_ORG_NAME' => 'أدخل اسم الشركة',
  'LBL_TT_DNB_BAL_POSTAL_CODE' => 'نطاقات الرمز البريدي الأمريكية مدعومة.  أمثلة: 78701 أو SW1P 1JA أو SWW1، أو 78701-78752',
  'LBL_TT_DNB_BAL_PRESCREEN_SCORE' => 'تحديد مستوى مخاطر: مرتفع، أو متوسط، أو منخفض',
  'LBL_TT_DNB_BAL_RADIUS_SRCH' => 'البحث عن نتائج داخل مسافة محددة لرمز بريدي/ ZIP وحيد',
  'LBL_TT_DNB_BAL_STATES' => 'الولاية/الإقليم/المنطقة',
  'LBL_TT_DNB_BAL_YEAR_OF_FOUNDING' => 'أمثلة: 1964 أو 2009. يمكن إضافة عام واحد للتأسيس فقط.',
  'LBL_TWITTER_DATA_EMPTY' => 'لا توجد بيانات متاحة من Twitter',
  'LBL_TWITTER_DATA_LOADING' => 'يتم الآن تحميل موصل Twitter ...',
  'LBL_TWITTER_DESCRIPTION' => 'شاهد التطابق بين مستخدمي تويتر والتغريدات، أعد التغريد والرد على التغريدات',
  'LBL_TWITTER_DISPLAY_ROWS' => 'عرض الصفوف',
  'LBL_TWITTER_FAVORITE' => 'المفضلة',
  'LBL_TWITTER_FOLLOW' => 'متابعة',
  'LBL_TWITTER_ID' => 'معرّف Twitter',
  'LBL_TWITTER_MY_ACCOUNT' => 'حسابي',
  'LBL_TWITTER_NAME' => 'Twitter',
  'LBL_TWITTER_REPLY' => 'الرد',
  'LBL_TWITTER_RETWEET' => 'إعادة التغريد',
  'LBL_TWITTER_SOURCE' => 'مصدر Tweet:',
  'LBL_TWO_WEEKS' => 'أسبوعان',
  'LBL_TX_LOG' => 'سجل المعاملات',
  'LBL_TX_LOG_DETAIL' => 'تفاصيل المعاملة',
  'LBL_UNASSIGNED' => 'غير مخصص',
  'LBL_UNAUTHORIZED' => 'عذرًا، يبدو أنك غير مسموح لك بالدخول إلى هذا المورد.',
  'LBL_UNAUTHORIZED_TITLE' => 'غير مسموح',
  'LBL_UNAUTH_ADMIN' => 'دخول غير مسموح به للإدارة',
  'LBL_UNDELETE' => 'إلغاء حذف',
  'LBL_UNDELETE_BUTTON' => 'إلغاء حذف',
  'LBL_UNDELETE_BUTTON_LABEL' => 'إلغاء حذف',
  'LBL_UNDELETE_BUTTON_TITLE' => 'إلغاء حذف',
  'LBL_UNFOLLOW' => 'لا يتبع',
  'LBL_UNLINKED' => 'غير مرتبط',
  'LBL_UNLINKING' => 'يتم الآن إلغاء الربط...',
  'LBL_UNLINK_BUTTON' => 'إلغاء الربط',
  'LBL_UNSUBSCRIBE' => 'إلغاء الاشتراك',
  'LBL_UNSYNC' => 'إلغاء مزامنة',
  'LBL_UPCOMING' => 'مناسباتي القادمة',
  'LBL_UPDATE' => 'تحديث',
  'LBL_UPDATE_CALC_FIELDS' => 'قيم قابلة لإعادة الحساب',
  'LBL_UPLOADING' => 'تحميل',
  'LBL_UPLOAD_FROM_COMPUTER' => 'تحميل من جهاز الكمبيوتر الخاص بك',
  'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'تنسيق ملف غير صالح، يمكن تحميل ملف صورة فقط.',
  'LBL_UPLOAD_IMAGE_FILE_NOT_SUPPORTED' => 'لم يعد تنسيق الصورة {0} مدعومًا.',
  'LBL_URL_BUTTON' => 'الويب',
  'LBL_USERS' => 'المستخدمون',
  'LBL_USERS_SYNC' => 'مزامنة المستخدمين',
  'LBL_USER_DEFAULT_OUTBOUND_EMAIL_CONFIGURATION' => 'افتراضي المستخدم',
  'LBL_USER_ID' => 'معرّف المستخدم ',
  'LBL_USER_LIST' => 'قائمة المستخدمين',
  'LBL_USER_MENU' => 'قائمة المستخدمين',
  'LBL_USER_OUTBOUND_EMAIL_ACCOUNT_CONFIGURATION' => 'حساب المستخدم',
  'LBL_USE_HTTPS' => 'استخدام اتصال آمن',
  'LBL_VALIDATE_RANGE' => 'ليست داخل نطاق صالح',
  'LBL_VALIDATING' => 'جارٍ التصديق الآن...',
  'LBL_VCARD' => 'vCard',
  'LBL_VCARD_DOWNLOAD' => 'تنزيل vCard',
  'LBL_VCARD_ERROR_DEFAULT' => 'حدث خطأ في تحميل ملف vCard.',
  'LBL_VCARD_ERROR_FILESIZE' => 'يتجاوز الملف المحمل 30000 بايت المحدد في نموذج HTML.',
  'LBL_VERIFY_EMAIL_ADDRESS' => 'يتم الآن التحقق من إدخال البريد الإلكتروني الحالي...',
  'LBL_VERIFY_PORTAL_NAME' => 'يتم الآن التحقق من اسم المنفذ الحالي...',
  'LBL_VIEWINLINE' => 'عرض',
  'LBL_VIEW_BUTTON' => 'عرض',
  'LBL_VIEW_BUTTON_KEY' => 'V',
  'LBL_VIEW_BUTTON_LABEL' => 'عرض',
  'LBL_VIEW_BUTTON_TITLE' => 'عرض',
  'LBL_VIEW_IMAGE' => 'عرض',
  'LBL_VIEW_INLINE' => 'عرض',
  'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
  'LBL_VIEW_PDF_BUTTON_LABEL' => 'طباعة كـ PDF',
  'LBL_VIEW_PDF_BUTTON_TITLE' => 'طباعة كـ PDF',
  'LBL_VISIBLE' => 'السجل مرئي',
  'LBL_WARNING' => 'تحذير',
  'LBL_WARN_UNSAVED_CHANGES' => 'لم يتم حفظ التغييرات. هل تريد بالتأكيد مغادرة الصفحة وتجاهل التغييرات؟',
  'LBL_WELCOMEBAR' => 'مرحبًا',
  'LBL_WIZ_APPLICATION_SETTINGS' => 'إعدادات النظام',
  'LBL_WIZ_COMPLETE_TITLE' => 'اكتمل الإعداد',
  'LBL_WIZ_CONFIGURE_APPLICATION' => 'الاستوديو',
  'LBL_WIZ_CREATE_USERS' => 'إنشاء مستخدمين',
  'LBL_WIZ_DATE_FORMAT' => 'تنسيق التاريخ',
  'LBL_WIZ_DOCUMENTATION' => 'الوثائق',
  'LBL_WIZ_EMAIL' => 'البريد الإلكتروني',
  'LBL_WIZ_EMAIL_SETTINGS' => 'إعدادات البريد الإلكتروني',
  'LBL_WIZ_FIRST_NAME' => 'الاسم الأول',
  'LBL_WIZ_FORUMS' => 'المنتديات',
  'LBL_WIZ_IMPORT_DATA' => 'استيراد البيانات',
  'LBL_WIZ_KNOWLEDGE_BASE' => 'قاعدة المعارف',
  'LBL_WIZ_LAST_NAME' => 'الاسم الأخير',
  'LBL_WIZ_NAME_FORMAT' => 'تنسيق الاسم',
  'LBL_WIZ_START_SUGAR' => 'بدء تشغيل Sugar',
  'LBL_WIZ_SUGAR_TRAINING' => 'التدريب على Sugar',
  'LBL_WIZ_SYSTEM_LOCALE_SETTINGS' => 'الإعدادات المحلية',
  'LBL_WIZ_TIMEFORMAT' => 'تنسيق الوقت',
  'LBL_WIZ_TIMEZONE' => 'المنطقة الزمنية',
  'LBL_WIZ_USER_LOCALE_TITLE' => 'الإعدادات المحلية للمستخدم',
  'LBL_WIZ_USER_PROFILE_TITLE' => 'ملف تعريف المستخدم',
  'LBL_WORST' => 'الأسوأ',
  'LBL_WORST_ADJUSTED' => 'أسوأ (معدل)',
  'LBL_YES' => 'نعم',
  'LBL_YESTERDAY' => 'أمس',
  'LBL_YOU' => 'أنت',
  'LBL_YOUR_INSTANCES' => 'أمثلتك',
  'LNK_ABOUT' => 'نبذة عن',
  'LNK_ADVANCED_SEARCH' => 'بحث متقدم',
  'LNK_BACKTOTOP' => 'العودة لأعلى',
  'LNK_BASIC_SEARCH' => 'بحث رئيسي',
  'LNK_CLOSE' => 'إغلاق',
  'LNK_CREATE' => 'إنشاء',
  'LNK_CREATE_WHEN_EMPTY' => 'إنشاء سجل الآن.',
  'LNK_DELETE' => 'حذف',
  'LNK_DELETE_ALL' => 'حذف الكل',
  'LNK_EDIT' => 'تحرير',
  'LNK_GET_LATEST' => 'الحصول على الأحدث',
  'LNK_GET_LATEST_TOOLTIP' => 'الاستبدال بالإصدار الأحدث',
  'LNK_HELP' => 'تعليمات',
  'LNK_LIST_END' => 'النهاية',
  'LNK_LIST_NEXT' => 'التالي',
  'LNK_LIST_PREVIOUS' => 'السابق',
  'LNK_LIST_RETURN' => 'العودة للقائمة',
  'LNK_LIST_START' => 'البدء',
  'LNK_LOAD_SIGNED' => 'علامة',
  'LNK_LOAD_SIGNED_TOOLTIP' => 'الاستبدال بمستند موقع عليه',
  'LNK_MOBILE' => 'المحمول',
  'LNK_OFFLINE_SETTINGS' => 'دون اتصال',
  'LNK_PMSE_BUSINESS_RULES_IMPORT_RECORD' => 'استيراد قواعد الأعمال للعملية',
  'LNK_PMSE_BUSINESS_RULES_NEW_RECORD' => 'إنشاء قاعدة الأعمال للعملية',
  'LNK_PMSE_EMAIL_TEMPLATES_IMPORT_RECORD' => 'استيراد قوالب البريد الإلكتروني للعملية',
  'LNK_PMSE_EMAIL_TEMPLATES_NEW_RECORD' => 'إنشاء قالب البريد الإلكتروني للعملية',
  'LNK_PMSE_PROCESS_DEFINITIONS_IMPORT_RECORD' => 'استيراد تعريفات العملية',
  'LNK_PMSE_PROCESS_DEFINITIONS_NEW_RECORD' => 'إنشاء تعريف العملية',
  'LNK_PORTAL_LOGIN_FORGOTPASSWORD' => 'نسيت كلمة المرور؟',
  'LNK_PRINT' => 'طباعة',
  'LNK_PRIVACY_POLICY' => 'سياسة الخصوصية',
  'LNK_REMOVE' => 'إزالة',
  'LNK_RESUME' => 'استئناف',
  'LNK_SAVED_VIEWS' => 'خيارات التخطيط',
  'LNK_SEARCH_FTS_VIEW_ALL' => 'عرض كل النتائج',
  'LNK_SEARCH_NONFTS_VIEW_ALL' => 'إظهار الكل',
  'LNK_SEARCH_NO_RESULTS' => 'لم يتم العثور على نتائج.',
  'LNK_SETTINGS' => 'الإعدادات',
  'LNK_TERMS_OF_USE' => 'شروط الاستخدام',
  'LNK_THIRD_PARTY_SOFTWARE' => 'برنامج من طرف آخر',
  'LNK_TOUR' => 'الجولة',
  'LNK_TOUR_DOCUMENTATION' => 'الوثائق',
  'LNK_VIEW' => 'عرض',
  'LNK_VIEW_CHANGE_LOG' => 'عرض سجل التغييرات',
  'LOGIN_LOGO_ERROR' => 'يرجى استبدال شعارات SugarCRM.',
  'MSG_DUPLICATE' => 'قد يكون {0} السجل الذي توشك على إنشائه نسخة من {0} السجل الموجود بالفعل. {1} سجلات تحتوي على أسماء مشابهة مذكورة أدناه.<br>انقر فوق إنشاء {1} لمتابعة إنشاء هذا {0}الجديد، أو حدد {0} الحالي المذكور أدناه.',
  'MSG_EMPTY_LIST_VIEW_GO_TO_PARENT' => 'يمكنك إنشاء <item1> من قائمة <item2>.<item3> <item2>.',
  'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'ليس لديك حاليًا سجلات محفوظة. <item2> أو<item3> واحدة الآن.',
  'MSG_EMPTY_LIST_VIEW_NO_RESULTS_NO_IMPORT' => 'ليس لديك حاليًا سجلات محفوظة. <item2> واحد الآن.',
  'MSG_IS_LESS_THAN' => 'أقل من',
  'MSG_IS_MORE_THAN' => 'أكثر من',
  'MSG_IS_NOT_BEFORE' => 'ليست قبل',
  'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => 'انقر فوق "موافق" لعرض هذا الاتصال، أو انقر فوق "إلغاء" لإلغاء هذه الرسالة.',
  'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'الوصف: ',
  'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'الموقع: ',
  'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => 'انقر فوق "موافق" لعرض هذا الاجتماع أو انقر فوق "إلغاء" لإلغاء هذه الرسالة.',
  'MSG_JS_ALERT_MTG_REMINDER_START' => 'البداية',
  'MSG_LIST_VIEW_NO_RESULTS' => 'لم يتم العثور على نتائج لـ <item1>',
  'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'لم يتم العثور على نتائج.',
  'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'إنشاء <item1> جديد <item2>',
  'MSG_OR_GREATER' => 'أو أكبر',
  'MSG_SHOULD_BE' => 'يجب أن تكون',
  'MSG_SHOW_DUPLICATES' => '{0} السجل الذي توشك على إنشائه نسخة من سجل {0} الموجود بالفعل. {1} سجلات تحتوي على أسماء مشابهة مذكورة أدناه.  انقر فوق "حفظ" لمتابعة إنشاء هذا {0}الجديد، أو انقر فوق "إلغاء" للعودة إلى الوحدة بدون إنشاء {0}.',
  'NOTICE_NO_DELETE_CLOSED' => 'لا يمكنك حذف السجلات التي لها حالة مبيعات مغلقة.',
  'NOTICE_NO_DELETE_CLOSED_STAGE' => 'لا يمكنك حذف السجلات التي لها مرحلة مبيعات مغلقة.',
  'NOTICE_NO_DELETE_CLOSED_STATUS' => 'لا يمكنك حذف السجلات التي لها حالة مبيعات مغلقة.',
  'NO_QUERY_SELECTED' => 'لا يتضمن تنسيق البيانات الذي اخترته استعلامًا.  يُرجى تحديد استعلام مخصص لتنسيق هذه البيانات.',
  'NTC_CLICK_BACK' => 'يرجى النقر فوق الزر السابق في المستعرض وإصلاح الخطأ.',
  'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
  'NTC_DATE_TIME_FORMAT' => '(yyyy-mm-dd 24:00)',
  'NTC_DELETE_CONFIRMATION' => 'هل تريد بالتأكيد حذف هذا السجل؟',
  'NTC_DELETE_CONFIRMATION_FORMATTED' => 'هل تريد بالتأكيد حذف {0}؟',
  'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'هل تريد بالتأكيد حذف السجل (السجلات) المحددة؟',
  'NTC_DELETE_CONFIRMATION_NUM' => 'هل تريد بالتأكيد حذف  ',
  'NTC_DELETE_SELECTED_RECORDS' => ' سجل (سجلات) محددة؟',
  'NTC_DELETE_SUCCESS' => 'لقد حذفت {0}.',
  'NTC_LOGIN_MESSAGE' => 'يرجى إدخال اسم المستخدم وكلمة المرور الخاصة بك.',
  'NTC_NO_ITEMS_DISPLAY' => 'بلا',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'يحتوي هذا السجل حاليًا على قيم في حقول "هاتف المكتب" و"العنوان". للكتابة فوق هذه القيم مصحوبة بما يلي "هاتف المكتب" و"العنوان" الخاص بـ "الحساب" الذي حددته، انقر فوق "موافق". للاحتفاظ بالقيم الحالية، انقر فوق "إلغاء".',
  'NTC_REMOVE_CONFIRMATION' => 'هل تريد بالتأكيد حذف علاقة هذه العلاقة؟ سيتم حذف العلاقة فقط. لن يتم حذف السجل.',
  'NTC_REQUIRED' => 'يشير إلى حقل مطلوب',
  'NTC_SUPPORT_SUGARCRM' => 'دعم مشروع SugarCRM مفتوح المصدر بتبرع من خلال PayPal - فهو سريع، ومجاني، وآمن!',
  'NTC_TEMPLATES_IS_USED' => 'يتم استخدام القوالب التالية في سجلات تسويق البريد الإلكتروني. هل تريد بالتأكيد حذفها؟
',
  'NTC_TEMPLATE_IS_USED' => 'القالب مستخدم في سجل تسويق بريد إلكتروني واحد على الأقل. هل تريد بالتأكيد حذفه؟',
  'NTC_TIME_FORMAT' => '(24:00)',
  'NTC_UNLINK_CONFIRMATION' => 'هل تريد بالتأكيد إلغاء رابط هذا السجل؟',
  'NTC_UNLINK_CONFIRMATION_FORMATTED' => 'هل تريد بالتأكيد إلغاء رابط {0}؟',
  'NTC_UNLINK_SUCCESS' => 'لقد ألغيت رابط {0}.',
  'NTC_UPDATE_CONFIRMATION_NUM' => 'هل تريد بالتأكيد تحديث ',
  'NTC_WELCOME' => 'مرحبًا',
  'NTC_YEAR_FORMAT' => '(yyyy)',
  'NavigationBar' => 'شريط التصفح',
  'PrimaryButton' => 'زر أساسي',
  'SUGAR_API_EXCEPTION_NOT_AUTHORIZED' => 'غير مسموح بتعديل الحقل {0} في الوحدة: {1}',
  'SUGAR_API_EXCEPTION_RECORD_NOT_AUTHORIZED' => 'غير مسموح بهذا الإجراء \\"{0}\\" في هذا السجل',
  'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
  'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if name}}{{name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
  'TPL_DASHLET_MY_MODULE' => 'الخاص بي {{module}}',
  'TPL_DELETE_FILTER_SUCCESS' => 'لقد حذفت عامل التصفية {{name}}.',
  'TPL_FILTER_SAVE' => 'لقد أنشأت عامل التصفية بنجاح{{name}}.',
  'TPL_HISTORICAL_SUMMARY' => 'ملخص تاريخي لـ {{name}}',
  'TPL_IMPORT_VCARD_FAILURE' => 'فشل إنشاء {{module}} من vCard',
  'TPL_INACTIVE_TASKS_DASHLET_TIME_RELATIVE' => 'آخر مرة تم تعديلها{{relativetime}} على{{date}} في {{time}}',
  'TPL_LISTVIEW_SELECTED_ALL' => 'لقد اخترت كل {{num}} السجلات في مجموعة النتائج.',
  'TPL_LISTVIEW_SELECTED_FIRST_OFFSET' => 'هناك أكثر من {{num}} سجلات في مجموعة النتائج. لقد اخترت السجلات {{num}} الأولى.',
  'TPL_LISTVIEW_SELECT_ALL_RECORDS' => 'لقد اخترت كل {{num}} السجلات في هذا العرض. {{link}} في مجموعة النتائج.',
  'TPL_MASSADDTOLIST_DURATION_FORMAT' => '(تقريبًا{{time}} {{unit}} اليسار)',
  'TPL_MASSADDTOLIST_FAIL_TO_ATTEMPT' => 'فشلت الإضافة الكاملة لقائمة الأهداف. بدء محاولة جديدة ({{num}} لـ {{total}}).',
  'TPL_MASSADDTOLIST_PROGRESS_STATUS' => 'إضافة{{num}}{{total}}.',
  'TPL_MASSADDTOLIST_SUCCESS' => '{{num}} تمت إضافة السجلات بنجاح.',
  'TPL_MASSADDTOLIST_TITLE' => '{{module}} الإضافة الكاملة لقائمة الأهداف',
  'TPL_MASSADDTOLIST_WARNING_CLOSE' => 'الإضافة الكاملة لقائمة الأهداف غير مكتملة. {{num}} لم تتم إضافة السجلات.',
  'TPL_MASSADDTOLIST_WARNING_INCOMPLETE' => 'الإضافة الكاملة لقائمة الأهداف غير مكتملة. {{num}} لم تتم إضافة السجلات.',
  'TPL_MASSDELETE_DURATION_FORMAT' => '(تقريبًا{{time}} {{unit}} اليسار)',
  'TPL_MASSDELETE_FAIL_TO_ATTEMPT' => 'فشل الحذف بأكمله. بدء محاولة جديدة ({{num}} لـ {{total}}).',
  'TPL_MASSDELETE_PROGRESS_STATUS' => 'حذف{{num}} {{total}}.',
  'TPL_MASSDELETE_SUCCESS' => '{{num}} تم حذف السجل (السجلات) بنجاح.',
  'TPL_MASSDELETE_TITLE' => '{{module}} حذف بالكامل',
  'TPL_MASSDELETE_WARNING_CLOSE' => 'الحذف بأكمله غير مكتمل. {{num}} لا يزال السجل (السجلات).',
  'TPL_MASSDELETE_WARNING_INCOMPLETE' => 'الحذف بأكمله غير مكتمل. {{num}} لا يزال السجل (السجلات).',
  'TPL_MASSLINK_DURATION_FORMAT' => '(تقريبًا{{time}} {{unit}} اليسار)',
  'TPL_MASSLINK_FAIL_TO_ATTEMPT' => 'فشل الرابط بأكمله. بدء محاولة جديدة ({{num}} لـ {{total}}).',
  'TPL_MASSLINK_PROGRESS_STATUS' => 'ربط{{num}} {{total}}.',
  'TPL_MASSLINK_SUCCESS' => '{{num}} تم ربط السجلات بنجاح.',
  'TPL_MASSLINK_TITLE' => '{{module}} رابط كامل',
  'TPL_MASSLINK_WARNING_CLOSE' => 'الرابط بأكمله غير مكتمل. {{num}} لم تتم إضافة السجلات.',
  'TPL_MASSLINK_WARNING_INCOMPLETE' => 'الرابط بأكمله غير مكتمل. {{num}} لم تتم إضافة السجلات.',
  'TPL_MASSUPDATE_DURATION_FORMAT' => '(تقريبًا{{time}} {{unit}} اليسار)',
  'TPL_MASSUPDATE_FAIL_TO_ATTEMPT' => 'فشل التحديث بأكمله. بدء محاولة جديدة ({{num}} لـ {{total}}).',
  'TPL_MASSUPDATE_PROGRESS_STATUS' => 'تحديث{{num}} {{total}}.',
  'TPL_MASSUPDATE_SUCCESS' => '{{num}} تم تحديث السجل (السجلات) بنجاح.',
  'TPL_MASSUPDATE_TITLE' => '{{module}} تحديث شامل',
  'TPL_MASSUPDATE_WARNING_CLOSE' => 'التحديث بأكمله غير مكتمل. {{num}} لا يزال السجل (السجلات) بدون تغيير.',
  'TPL_MASSUPDATE_WARNING_INCOMPLETE' => 'التحديث بأكمله غير مكتمل. {{num}} لا يزال السجل (السجلات) بدون تغيير.',
  'TPL_MASSUPDATE_WARNING_PERMISSION' => '{{remain}} تم تجاهل السجل (السجلات) نتيجة التصريح.',
  'TPL_MASS_ADD_TO_LIST_QUEUED' => 'تم وضع طلبك بإضافة السجلات المختارة <a href="{{listUrl}}">{{listName}}</a> لقائمة الأهداف في جدول زمني.',
  'TPL_MASS_ADD_TO_LIST_SUCCESS' => 'تمت إضافة السجلات المختارة إلى <a href="{{listUrl}}">{{listName}}</a> قائمة الأهداف.',
  'TPL_MERGE_DUPLICATES_FAIL' => 'فشل دمج {{objectName}}المرتبطة.',
  'TPL_MERGE_DUPLICATES_FAIL_TO_ATTEMPT' => 'فشل دمج {{objectName}}المرتبطة. بدء محاولة جديدة ({{num}} لـ {{total}}).',
  'TPL_MERGE_DUPLICATES_IDENTICAL' => 'سيتم نقل كل السجلات المرتبطة للسجل الأساسي.',
  'TPL_MERGE_DUPLICATES_PROGRESS_STATUS' => 'تم الدمج: {{percent}}%.',
  'TPL_MERGE_DUPLICATES_STAT' => '{{#with stat}}{{records}} تم دمج السجلات بنجاح. {{total}} تمت إضافة سجلات مرتبطة.{{/with}}',
  'TPL_MERGE_INVALID_NUMBER_RECORDS' => 'عدد غير صالح من السجلات تم المرور عليها. النطاق الصالح من {{minRecords}} إلى {{maxRecords}} سجلات.',
  'TPL_MERGING_RECORDS' => 'دمج{{mergeCount}} سجلات',
  'TPL_MISSING_SMPT_SERVER_SETTINGS_NOTIFICATION_DESCRIPTION' => 'لإرسال إخطارات تعيين سجل، يجب تهيئة خادم SMTP في{{emailSettingsUrl}}.',
  'TPL_OVERWRITE_POPULATED_DATA_CONFIRM' => 'ستتم الكتابة فوق السجل المحدد بالقيم التالية: {{values}}. قم بالإلغاء للاحتفاظ بالقيم الموجودة. قم بالتأكيد للكتابة فوق تلك القيم بالقيم الجديدة.',
  'TPL_OVERWRITE_POPULATED_DATA_CONFIRM_WITH_MODULE_SINGULAR' => 'قيمة {{moduleSingularLower}} المحددة لها قيم مرتبطة: {{values}}. قم بالإلغاء للاحتفاظ بالقيم الموجودة. قم بالتأكيد للكتابة فوق تلك القيم بالقيم الجديدة.',
  'TPL_RECORD_SHARE_BODY' => 'يرجى مراجعة {{module}} {{name}} من {{appId}}',
  'TPL_RECORD_SHARE_SUBJECT' => 'مشاركة{{module}} {{name}} من {{appId}}',
  'TPL_SHOW_MORE_MODULE' => 'المزيد{{module}}...',
  'TPL_STATUS_CHANGE_SUCCESS' => 'تم تمييز {{moduleSingular}} بحالة {{status}}.',
  'TPL_TABBED_DASHLET_GROUP_BUTTON_LABEL' => 'عناصر الفريق',
  'TPL_TABBED_DASHLET_USER_BUTTON_LABEL' => 'العناصر الخاصة بي',
  'TPL_TIMEZONE_DIFFERENT' => 'عدم تطابق مستعرضك/المنطقة الزمنية مع المنطقة الزمنية المحفوظة الخاصة بك {{link}}',
  'UPLOAD_ERROR_HOME_TEXT' => 'خطأ: حدث خطأ أثناء تحميلك، يرجى الاتصال بالمسؤول للمساعدة.',
  'UPLOAD_ERROR_TEXT' => 'خطأ: حدث خطأ أثناء التحميل. رمز الخطأ: {0} - {1}',
  'UPLOAD_ERROR_TEXT_SIZEINFO' => 'خطأ: حدث خطأ أثناء التحميل. رمز الخطأ: {0} - {1}. upload_maxsize هو {2} ',
  'UPLOAD_MAXIMUM_EXCEEDED' => 'حجم التحميل ({0} بايت) تجاوز الحد الأقصى المسموح به: {1} بايت',
  'UPLOAD_REQUEST_ERROR' => 'حدث خطأ. يرجى تحديث صفحتك ثم حاول مرة أخرى.',
  'WARNING_NO_DELETE_CLOSED_SELECTED_STATUS' => 'أحد السجلات المحددة أو أكثر له RLI ذات حالة "عملية مغلقة تم الفوز بها" أو "عملية مغلقة تمت خسارتها" مغلقة لا يمكن حذفها.',
  'WARNING_NO_DELETE_SELECTED' => 'أحد السجلات المحددة أو أكثر له حالة Won مغلقة أو Lost مغلقة لا يمكن حذفها.',
  'WARNING_NO_DELETE_SELECTED_STAGE' => 'أحد السجلات المحددة أو أكثر له مرحلة مبيعات "عملية مغلقة تم الفوز بها" أو "عملية مغلقة تمت خسارتها" ولا يمكن حذفه.',
  'WARNING_NO_DELETE_SELECTED_STATUS' => 'أحد السجلات المحددة أو أكثر له حالة "عملية مغلقة تم الفوز بها" أو "عملية مغلقة تمت خسارتها" مغلقة لا يمكن حذفها.',
  'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>تحذير:</b> مستعرضك متوافق في عرض IE غير مدعوم.',
  'WARN_BROWSER_VERSION_WARNING' => '<b>تحذير:</b> لم يعد إصدار المستعرض لديك مدعومًا أو أنك تستخدم مستعرضًا غير مدعوم.<p></p>يوصى بإصدارات المستعرض التالية:<p></p><ul><li>Internet Explorer 9 (توافقية العرض غير مدعومة)<li>Firefox 17<li>Safari 5.1<li>Chrome 24</ul>',
  'WARN_LICENSE_EXPIRED' => 'ستنتهي رخصة شركتك لـ SugarCRM قريبًا.',
  'WARN_LICENSE_SEATS' => 'تحذير: عدد المستخدمين النشطاء هو الحد الأقصى للعدد المسموح به بالفعل للتراخيص.',
  'WARN_LICENSE_SEATS_MAXED' => 'تحذير: عدد المستخدمين النشطاء يتجاوز الحد الأقصى للعدد المسموح به بالفعل للتراخيص.',
  'WARN_LICENSE_VALIDATION' => 'تحتاج رخصة شركتك لـ SugarCRM إلى تحديث صلاحيتها قريبًا.',
  'WARN_ONLY_ADMINS' => 'تسجيل الدخول للمسؤولين فقط.',
  'WARN_UNSAVED_CHANGES' => 'أنت على وشك مغادرة هذا السجل بدون حفظ أي تغييرات قد أجريتها على السجل. هل تريد بالتأكيد الانتقال بعيدًا عن هذا السجل؟',
);

$app_list_strings = array (
  'Elastic_boost_options' => 
  array (
    0 => 'معطَّل',
    1 => 'تحسين منخفض',
    2 => 'تحسين متوسط',
    3 => 'تحسين عالٍ',
  ),
  'account_type_dom' => 
  array (
    '' => '',
    'Analyst' => 'المحلل',
    'Competitor' => 'المنافس',
    'Customer' => 'العميل',
    'Integrator' => 'المكامل',
    'Investor' => 'المستثمر',
    'Other' => 'أخرى',
    'Partner' => 'الشريك',
    'Press' => 'الصحافة',
    'Prospect' => 'العميل المتوقع',
    'Reseller' => 'موزع',
  ),
  'activity_dom' => 
  array (
    'Call' => 'المكالمة',
    'Email' => 'البريد الإلكتروني',
    'Meeting' => 'الاجتماع',
    'Note' => 'ملاحظة',
    'Task' => 'المهمة',
  ),
  'activity_user_options' => 
  array (
    7 => 'آخر 7 أيام',
    30 => 'آخر 30 يومًا',
    90 => 'ربع السنة الماضي',
  ),
  'bopselect_type_dom' => 
  array (
    'Equals' => 'يساوي',
  ),
  'bselect_type_dom' => 
  array (
    'bool_false' => 'لا',
    'bool_true' => 'نعم',
  ),
  'bug_priority_default_key' => 'متوسط',
  'bug_priority_dom' => 
  array (
    'High' => 'عالٍ',
    'Low' => 'منخفض',
    'Medium' => 'متوسط',
    'Urgent' => 'عاجل',
  ),
  'bug_resolution_default_key' => '',
  'bug_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'مقبول',
    'Duplicate' => 'تكرار',
    'Fixed' => 'ثابت',
    'Invalid' => 'غير صالح',
    'Later' => 'لاحقًا',
    'Out of Date' => 'قديم',
  ),
  'bug_status_default_key' => 'جديد',
  'bug_status_dom' => 
  array (
    'Assigned' => 'معيَّن',
    'Closed' => 'مغلق',
    'New' => 'جديد',
    'Pending' => 'معلق',
    'Rejected' => 'مرفوض',
  ),
  'bug_type_default_key' => 'الخطأ',
  'bug_type_dom' => 
  array (
    'Defect' => 'عيب',
    'Feature' => 'ميزة',
  ),
  'business_rule_type_list' => 
  array (
    'single' => 'إصابة مفردة',
  ),
  'call_direction_default' => 'خارجي',
  'call_direction_dom' => 
  array (
    'Inbound' => 'داخلي',
    'Outbound' => 'خارجي',
  ),
  'call_status_default' => 'مخطط',
  'call_status_dom' => 
  array (
    'Held' => 'تم العقد',
    'Not Held' => 'تم الإلغاء',
    'Planned' => 'تمت الجدولة',
  ),
  'campaign_status_dom' => 
  array (
    '' => '',
    'Active' => 'نشط',
    'Complete' => 'مكتمل',
    'In Queue' => 'في قائمة انتظار',
    'Inactive' => 'غير نشط',
    'Planning' => 'التخطيط',
    'Sending' => 'إرسال',
  ),
  'campaign_type_dom' => 
  array (
    '' => '',
    'Email' => 'البريد الإلكتروني',
    'Mail' => 'البريد',
    'NewsLetter' => 'الرسالة الإخبارية',
    'Print' => 'طباعة',
    'Radio' => 'الراديو',
    'Telesales' => 'البيع عن بُعد',
    'Television' => 'التليفزيون',
    'Web' => 'الويب',
  ),
  'campainglog_activity_type_dom' => 
  array (
    '' => '',
    'blocked' => 'الممنوعة حسب العنوان أو المجال',
    'contact' => 'جهات الاتصال التي تم إنشاؤها',
    'invalid email' => 'الرسائل المرتدة، البريد الإلكتروني غير الصحيح',
    'lead' => 'العملاء المتوقعون الذين تم إنشاؤهم',
    'link' => 'ارتباط النقر',
    'removed' => 'المرفوضة',
    'send error' => 'الرسائل المرتدة، الأخرى',
    'targeted' => 'الرسالة المرسلة/التي تمت محاولة إرسالها',
    'viewed' => 'الرسالة المعروضة',
  ),
  'campainglog_target_type_dom' => 
  array (
    'Accounts' => 'الحسابات',
    'Contacts' => 'جهات الاتصال',
    'Leads' => 'العملاء المتوقعون',
    'Prospects' => 'الأهداف',
    'Users' => 'المستخدمون',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' => 
  array (
    'P1' => 'عالٍ',
    'P2' => 'متوسط',
    'P3' => 'منخفض',
  ),
  'case_relationship_type_default_key' => 'Primary Contact',
  'case_relationship_type_dom' => 
  array (
    '' => '',
    'Alternate Contact' => 'جهة الاتصال البديلة',
    'Primary Contact' => 'جهة الاتصال الرئيسية',
  ),
  'case_status_default_key' => 'New',
  'case_status_dom' => 
  array (
    'Assigned' => 'معيَّن',
    'Closed' => 'مغلق',
    'Duplicate' => 'تكرار',
    'New' => 'جديد',
    'Pending Input' => 'إدخال معلق',
    'Rejected' => 'مرفوض',
  ),
  'case_type_dom' => 
  array (
    'Administration' => 'الإدارة',
    'Product' => 'المنتج',
    'User' => 'المستخدم',
  ),
  'charset_dom' => 
  array (
    'BIG-5' => 'BIG-5 (تايوان وهونج كونج)',
    'CP1251' => 'CP1251 (MS Cyrillic)',
    'CP1252' => 'CP1252 (MS Western European & US)',
    'EUC-CN' => 'EUC-CN (Simplified Chinese GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Japanese)',
    'EUC-KR' => 'EUC-KR (Korean)',
    'EUC-TW' => 'EUC-TW (Taiwanese)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korean)',
    'ISO-8859-1' => 'ISO-8859-1 (Western European and US)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'ISO-8859-2' => 'ISO-8859-2 (Central and Eastern European)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrillic)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabic)',
    'ISO-8859-7' => 'ISO-8859-7 (Greek)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebrew)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'KOI8-R' => 'KOI8-R (Cyrillic Russian)',
    'KOI8-U' => 'KOI8-U (Cyrillic Ukranian)',
    'SJIS' => 'SJIS (MS Japanese)',
    'UTF-8' => 'UTF-8',
  ),
  'chart_strings' => 
  array (
    'barchart' => 'المخطط الشريطي',
    'clickfordrilldown' => 'النقر للانتقال التفصيلي',
    'collapselegend' => 'طي وسيلة الإيضاح',
    'detailview' => 'مزيد من التفاصيل...',
    'drilldownoptions' => 'خيارات الانتقال التفصيلي',
    'expandlegend' => 'توسيع وسيلة الإيضاح',
    'groupchart' => 'مخطط المجموعة',
    'horizontalbarchart' => 'المخطط الشريطي الأفقي',
    'linechart' => 'المخطط الخطي',
    'noData' => 'البيانات غير متوفرة',
    'pieWedgeName' => 'الأقسام',
    'piechart' => 'المخطط الدائري',
    'print' => 'طباعة',
    'stackedchart' => 'المخطط المكدس',
  ),
  'checkbox_dom' => 
  array (
    '' => '',
    1 => 'نعم',
    2 => 'لا',
  ),
  'checkbox_massupdate_dom' => 
  array (
    0 => 'لا',
    1 => 'نعم',
  ),
  'commit_stage_binary_dom' => 
  array (
    'exclude' => 'استبعاد',
    'include' => 'تضمين',
  ),
  'commit_stage_custom_dom' => 
  array (
    'exclude' => 'استبعاد',
    'include' => 'تضمين',
    'upside' => 'الجانب الأعلى',
  ),
  'commit_stage_dom' => 
  array (
    'exclude' => 'استبعاد',
    'include' => 'تضمين',
    'upside' => 'الجانب الأعلى',
  ),
  'contract_expiration_notice_dom' => 
  array (
    1 => 'يوم واحد',
    3 => '3 أيام',
    5 => '5 أيام',
    7 => 'أسبوع واحد',
    14 => 'أسبوعان',
    21 => '3 أسابيع',
    31 => 'شهر واحد',
  ),
  'contract_payment_frequency_dom' => 
  array (
    'halfyearly' => 'نصف سنوي',
    'monthly' => 'شهريًا',
    'quarterly' => 'ربع سنوي',
    'yearly' => 'سنويًا',
  ),
  'contract_status_dom' => 
  array (
    'inprogress' => 'يتقدم',
    'notstarted' => 'لم يبدأ',
    'signed' => 'موقَّع',
  ),
  'countries_dom' => 
  array (
    '' => '',
    'ABU DHABI' => 'أبو ظبي',
    'ADEN' => 'عدن',
    'AFGHANISTAN' => 'أفغانستان',
    'ALBANIA' => 'ألبانيا',
    'ALGERIA' => 'الجزائر',
    'AMERICAN SAMOA' => 'ساموا الأمريكية',
    'ANDORRA' => 'أندورا',
    'ANGOLA' => 'أنجولا',
    'ANTARCTICA' => 'أنتاركتيكا',
    'ANTIGUA' => 'أنتيجوا',
    'ARGENTINA' => 'الأرجنتين',
    'ARMENIA' => 'أرمينيا',
    'ARUBA' => 'أروبا',
    'AUSTRALIA' => 'أستراليا',
    'AUSTRIA' => 'النمسا',
    'AZERBAIJAN' => 'أذربيجان',
    'BAHAMAS' => 'بهاماس',
    'BAHRAIN' => 'البحرين',
    'BANGLADESH' => 'بنجلاديش',
    'BARBADOS' => 'باربادوس',
    'BELARUS' => 'روسيا البيضاء',
    'BELGIUM' => 'بلجيكا',
    'BELIZE' => 'بيليز',
    'BENIN' => 'بنين',
    'BERMUDA' => 'بيرمودا',
    'BHUTAN' => 'بوتان',
    'BOLIVIA' => 'بوليفيا',
    'BOSNIA' => 'البوسنة',
    'BOTSWANA' => 'بوتسوانا',
    'BOUVET ISLAND' => 'جزر بوفيت',
    'BRAZIL' => 'البرازيل',
    'BRITISH ANTARCTICA TERRITORY' => 'إقليم أنتاركتيكا البريطانية',
    'BRITISH INDIAN OCEAN TERRITORY' => 'إقليم المحيط الهندي البريطاني',
    'BRITISH VIRGIN ISLANDS' => 'جزر فيرجن البريطانية',
    'BRITISH WEST INDIES' => 'غرب الأنديز البريطانية',
    'BRUNEI' => 'بروناي',
    'BULGARIA' => 'بلغاريا',
    'BURKINA FASO' => 'بوركينا فاسو',
    'BURUNDI' => 'بوروندي',
    'CAMBODIA' => 'كمبوديا',
    'CAMEROON' => 'الكاميرون',
    'CANADA' => 'كندا',
    'CANAL ZONE' => 'منطقة القناة',
    'CANARY ISLAND' => 'جزر الكناري',
    'CAPE VERDI ISLANDS' => 'جزر كاب فيردي',
    'CAYMAN ISLANDS' => 'جزر كايمان',
    'CEVLON' => 'سيفلون',
    'CHAD' => 'تشاد',
    'CHANNEL ISLAND UK' => 'جزر شانيل المملكة المتحدة',
    'CHILE' => 'شيلي',
    'CHINA' => 'الصين',
    'CHRISTMAS ISLAND' => 'جزر الكريسماس',
    'COCOS (KEELING) ISLAND' => 'جزيرة كوكوس (كيلنج)',
    'COLOMBIA' => 'كولومبيا',
    'COMORO ISLANDS' => 'جزر كومورو',
    'CONGO' => 'الكونغو',
    'CONGO KINSHASA' => 'كونجو كينشاسا',
    'COOK ISLANDS' => 'جزر كوك',
    'COSTA RICA' => 'كوستاريكا',
    'CROATIA' => 'كرواتيا',
    'CUBA' => 'كوبا',
    'CURACAO' => 'كوراكاو',
    'CYPRUS' => 'قبرص',
    'CZECH REPUBLIC' => 'جمهورية التشيك',
    'DAHOMEY' => 'داهومي',
    'DENMARK' => 'الدنمارك',
    'DJIBOUTI' => 'جيبوتي',
    'DOMINICA' => 'الدومينيكا',
    'DOMINICAN REPUBLIC' => 'جمهورية الدومينيكان',
    'DUBAI' => 'دبي',
    'ECUADOR' => 'الإكوادور',
    'EGYPT' => 'مصر',
    'EL SALVADOR' => 'السلفادور',
    'EQUATORIAL GUINEA' => 'غينيا الاستوائية',
    'ESTONIA' => 'إستونيا',
    'ETHIOPIA' => 'إثيوبيا',
    'FAEROE ISLANDS' => 'جزر فارو',
    'FALKLAND ISLANDS' => 'جزر فوكلاند',
    'FIJI' => 'فيجي',
    'FINLAND' => 'فنلندا',
    'FRANCE' => 'فرنسا',
    'FRENCH GUIANA' => 'غيانا الفرنسية',
    'FRENCH POLYNESIA' => 'بولينسيا الفرنسية',
    'GABON' => 'الجابون',
    'GAMBIA' => 'جامبيا',
    'GEORGIA' => 'جورجيا',
    'GERMANY' => 'ألمانيا',
    'GHANA' => 'غانا',
    'GIBRALTAR' => 'جبل طارق',
    'GREECE' => 'اليونان',
    'GREENLAND' => 'جرينلاند',
    'GUADELOUPE' => 'جواديلوب',
    'GUAM' => 'جوام',
    'GUATEMALA' => 'جواتيمالا',
    'GUINEA' => 'غينيا',
    'GUYANA' => 'جويانا',
    'HAITI' => 'هاييتي',
    'HONDURAS' => 'هندوراس',
    'HONG KONG' => 'هونج كونج',
    'HUNGARY' => 'المجر',
    'ICELAND' => 'أيسلندا',
    'IFNI' => 'إيفني',
    'INDIA' => 'الهند',
    'INDONESIA' => 'إندونيسيا',
    'IRAN' => 'إيران',
    'IRAQ' => 'العراق',
    'IRELAND' => 'أيرلندا',
    'ISRAEL' => 'فلسطين',
    'ITALY' => 'إيطاليا',
    'IVORY COAST' => 'ساحل العاج',
    'JAMAICA' => 'جامايكا',
    'JAPAN' => 'اليابان',
    'JORDAN' => 'الأردن',
    'KAZAKHSTAN' => 'كازاخستان',
    'KENYA' => 'كينيا',
    'KOREA' => 'كوريا',
    'KOREA, SOUTH' => 'كوريا الجنوبية',
    'KUWAIT' => 'الكويت',
    'KYRGYZSTAN' => 'قيرغيزستان',
    'LAOS' => 'لاوس',
    'LATVIA' => 'لاتفيا',
    'LEBANON' => 'لبنان',
    'LEEWARD ISLANDS' => 'جزر ليوارد',
    'LESOTHO' => 'ليسوتو',
    'LIBYA' => 'ليبيا',
    'LIECHTENSTEIN' => 'ليختنشتين',
    'LITHUANIA' => 'ليتوانيا',
    'LUXEMBOURG' => 'لوكسمبورج',
    'MACAO' => 'ماكاو',
    'MACEDONIA' => 'مقدونيا',
    'MADAGASCAR' => 'مدغشقر',
    'MALAWI' => 'مالاوي',
    'MALAYSIA' => 'ماليزيا',
    'MALDIVES' => 'المالديف',
    'MALI' => 'مالي',
    'MALTA' => 'مالطا',
    'MARTINIQUE' => 'المارتينيك',
    'MAURITANIA' => 'موريتانيا',
    'MAURITIUS' => 'مورشيوس',
    'MELANESIA' => 'ميلانيزيا',
    'MEXICO' => 'ميكسيكو',
    'MOLDOVIA' => 'مولدوفيا',
    'MONACO' => 'موناكو',
    'MONGOLIA' => 'منغوليا',
    'MOROCCO' => 'المغرب',
    'MOZAMBIQUE' => 'موزمبيق',
    'MYANAMAR' => 'ميانمار',
    'NAMIBIA' => 'ناميبيا',
    'NEPAL' => 'نيبال',
    'NETHERLANDS' => 'هولندا',
    'NETHERLANDS ANTILLES' => 'جزر الأنتيل الهولندية',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'منطقة جزر الأنتيل الهولندية المحايدة',
    'NEW CALADONIA' => 'نيوكاليدونيا',
    'NEW HEBRIDES' => 'نيوهيبريدس',
    'NEW ZEALAND' => 'نيوزيلندا',
    'NICARAGUA' => 'نيكاراجوا',
    'NIGER' => 'النيجر',
    'NIGERIA' => 'نيجيريا',
    'NORFOLK ISLAND' => 'جزر نورفولك',
    'NORWAY' => 'النرويج',
    'OMAN' => 'عمان',
    'OTHER' => 'أخرى',
    'PACIFIC ISLAND' => 'جزيرة المحيط الهادي',
    'PAKISTAN' => 'باكستان',
    'PANAMA' => 'بنما',
    'PAPUA NEW GUINEA' => 'بابوا غينيا الجديدة',
    'PARAGUAY' => 'الباراجواي',
    'PERU' => 'بيرو',
    'PHILIPPINES' => 'الفلبين',
    'POLAND' => 'بولندا',
    'PORTUGAL' => 'البرتغال',
    'PORTUGUESE TIMOR' => 'تيمور البرتغالية',
    'PUERTO RICO' => 'بورتوريكو',
    'QATAR' => 'قطر',
    'REPUBLIC OF BELARUS' => 'جمهورية روسيا البيضاء',
    'REPUBLIC OF SOUTH AFRICA' => 'جمهورية جنوب إفريقيا',
    'REUNION' => 'ريونيون',
    'ROMANIA' => 'رومانيا',
    'RUSSIA' => 'روسيا',
    'RWANDA' => 'رواندا',
    'RYUKYU ISLANDS' => 'جزر ريوكيو',
    'SABAH' => 'صباح',
    'SAN MARINO' => 'سان مارينو',
    'SAUDI ARABIA' => 'المملكة العربية السعودية',
    'SENEGAL' => 'السنغال',
    'SERBIA' => 'صربيا',
    'SEYCHELLES' => 'سيشيل',
    'SIERRA LEONE' => 'سيراليون',
    'SINGAPORE' => 'سنغافورا',
    'SLOVAKIA' => 'سلوفاكيا',
    'SLOVENIA' => 'سلوفينيا',
    'SOMALILIAND' => 'أرض الصومال',
    'SOUTH AFRICA' => 'جنوب إفريقيا',
    'SOUTH YEMEN' => 'اليمن الجنوبي',
    'SPAIN' => 'إسبانيا',
    'SPANISH SAHARA' => 'الصحراء الإسبانية',
    'SRI LANKA' => 'سريلانكا',
    'ST. KITTS AND NEVIS' => 'ST. كيتس ونيفيس',
    'ST. LUCIA' => 'ST. لوتشيا',
    'SUDAN' => 'السودان',
    'SURINAM' => 'سورينام',
    'SW AFRICA' => 'جنوب غرب إفريقيا',
    'SWAZILAND' => 'سوازيلاند',
    'SWEDEN' => 'السويد',
    'SWITZERLAND' => 'سويسرا',
    'SYRIA' => 'سوريا',
    'TAIWAN' => 'تايوان',
    'TAJIKISTAN' => 'طاجيكستان',
    'TANZANIA' => 'تنزانيا',
    'THAILAND' => 'تايلاند',
    'TONGA' => 'تونجا',
    'TRINIDAD' => 'ترينداد',
    'TUNISIA' => 'تونس',
    'TURKEY' => 'تركيا',
    'UGANDA' => 'أوغندا',
    'UKRAINE' => 'أوكرانيا',
    'UNITED ARAB EMIRATES' => 'الإمارات العربية المتحدة',
    'UNITED KINGDOM' => 'المملكة المتحدة',
    'UPPER VOLTA' => 'فولتا العليا',
    'URUGUAY' => 'الأوروجواي',
    'US PACIFIC ISLAND' => 'جزيرة المحيط الهادي الأمريكية',
    'US VIRGIN ISLANDS' => 'جزر فيرجن الأمريكية',
    'USA' => 'الولايات المتحدة الأمريكية',
    'UZBEKISTAN' => 'أوزباكستان',
    'VANUATU' => 'فانواتو',
    'VATICAN CITY' => 'مدينة الفاتيكان',
    'VENEZUELA' => 'فينزويلا',
    'VIETNAM' => 'فييتنام',
    'WAKE ISLAND' => 'جزيرة ويك',
    'WEST INDIES' => 'غرب الإنديز',
    'WESTERN SAHARA' => 'الصحراء الغربية',
    'YEMEN' => 'اليمن',
    'ZAIRE' => 'زائير',
    'ZAMBIA' => 'زامبيا',
    'ZIMBABWE' => 'زيمبابوي',
  ),
  'cselect_type_dom' => 
  array (
    'Does not Equal' => 'لا يساوي',
    'Equals' => 'يساوي',
  ),
  'custom_fields_importable_dom' => 
  array (
    'false' => 'لا',
    'required' => 'مطلوب',
    'true' => 'نعم',
  ),
  'custom_fields_merge_dup_dom' => 
  array (
    0 => 'معطَّل',
    1 => 'مُمكَّن',
    2 => 'في عامل التصفية',
    3 => 'عامل التصفية الافتراضي المحدد',
    4 => 'عامل التصفية فقط',
  ),
  'custom_layout_dom' => 
  array (
    'Disabled' => 'معطَّل',
    'Enabled' => 'مُمكَّن',
  ),
  'd3_chart_types' => 
  array (
    'bar chart' => 'المخطط الشريطي الرأسي',
    'funnel chart 3D' => 'المخطط القمعي',
    'group by chart' => 'المخطط المجمع الشريطي الرأسي',
    'horizontal bar chart' => 'المخطط الشريطي الأفقي',
    'horizontal group by chart' => 'المخطط المجمع الشريطي الأفقي',
    'line chart' => 'المخطط الخطي',
    'pie chart' => 'المخطط الدائري',
  ),
  'd3_value_placement' => 
  array (
    'end' => 'النهاية',
    'middle' => 'الوسط',
    0 => 'None',
    'start' => 'البدء',
    'top' => 'أعلى',
    1 => 'الإعداد الافتراضي',
  ),
  'dashlet_auto_refresh_options' => 
  array (
    -1 => 'عدم التحديث التلقائي',
    30 => 'كل 30 ثانية',
    60 => 'كل دقيقة',
    180 => 'كل 3 دقائق',
    300 => 'كل 5 دقائق',
    600 => 'كل 10 دقائق',
  ),
  'dashlet_auto_refresh_options_admin' => 
  array (
    -1 => 'مطلقًا',
    30 => 'كل 30 ثانية',
    60 => 'كل دقيقة',
    180 => 'كل 3 دقائق',
    300 => 'كل 5 دقائق',
    600 => 'كل 10 دقائق',
  ),
  'dashlet_limit_options' => 
  array (
    5 => '5',
    10 => '10',
    15 => '15',
    20 => '20',
  ),
  'dashlet_webpage_limit_options' => 
  array (
    1 => '1',
    3 => '3',
    5 => '5',
    10 => '10',
  ),
  'dataset_att_display_type_dom' => 
  array (
    'Normal' => 'عادي',
    'Scalar' => 'الدالَّة',
  ),
  'dataset_att_format_type_dom' => 
  array (
    'Accounting' => 'المحاسبة',
    'Date' => 'التاريخ',
    'Datetime' => 'التاريخ والوقت',
    'Text' => 'النص',
  ),
  'dataset_att_format_type_scalar_dom' => 
  array (
    'Day' => 'يوم',
    'Month' => 'شهر',
    'Quarter' => 'ربع سنة',
    'Week' => 'أسبوع',
    'Year' => 'سنة',
  ),
  'dataset_layout_type_dom' => 
  array (
    'Column' => 'العمود',
  ),
  'dataset_output_default_dom' => 
  array (
    'table' => 'الجدول',
  ),
  'dataset_style_dom' => 
  array (
    'bold' => 'غامق',
    'italic' => 'مائل',
    'normal' => 'عادي',
  ),
  'date_range_operator_dom' => 
  array (
    'last_30_days' => 'آخر 30 يومًا',
    'last_7_days' => 'آخر 7 أيام',
    'last_month' => 'الشهر الماضي',
    'last_year' => 'العام الماضي',
    'next_30_days' => 'الـ 30 أيام المقبلة',
    'next_7_days' => 'الـ 7 أيام المقبلة',
    'next_month' => 'الشهر القادم',
    'next_year' => 'العام القادم',
    'this_month' => 'هذا الشهر',
    'this_year' => 'هذا العام',
  ),
  'date_range_search_dom' => 
  array (
    '=' => 'يساوي',
    'between' => 'بين',
    'greater_than' => 'بعد',
    'last_30_days' => 'آخر 30 يومًا',
    'last_7_days' => 'آخر 7 أيام',
    'last_month' => 'الشهر الماضي',
    'last_year' => 'العام الماضي',
    'less_than' => 'قبل',
    'next_30_days' => 'الـ 30 أيام المقبلة',
    'next_7_days' => 'الـ 7 أيام المقبلة',
    'next_month' => 'الشهر القادم',
    'next_year' => 'العام القادم',
    'not_equal' => 'ليس',
    'this_month' => 'هذا الشهر',
    'this_year' => 'هذا العام',
  ),
  'default_order_stage_key' => 'معلق',
  'default_quote_stage_key' => 'المسودة',
  'dnb_bal_after_before_btw' => 
  array (
    'btw' => 'بين',
    'gte' => 'بعد',
    'lte' => 'قبل',
  ),
  'dnb_bal_filing_trading_option' => 
  array (
    'filingdate' => 'تاريخ الملء',
    'tradingdate' => 'تاريخ التجارة',
  ),
  'dnb_bal_gte_lte_btw' => 
  array (
    'btw' => 'بين',
    'gte' => 'أكبر من أو يساوي',
    'lte' => 'أقل من أو يساوي',
  ),
  'dnb_bal_miles_km' => 
  array (
    3349 => 'كم',
    3353 => 'أميال',
  ),
  'dnb_bal_prescreen_options' => 
  array (
    10925 => 'منخفض',
    10926 => 'متوسط',
    10927 => 'عالٍ',
  ),
  'dnb_bal_primary_secondary' => 
  array (
    'false' => 'أساسي وثانوي',
    'true' => 'أساسي فقط',
  ),
  'dnb_bal_single_all' => 
  array (
    'allsites' => 'جميع المواقع',
    'singlesite' => 'موقع واحد',
  ),
  'dnb_contact_kw_scope' => 
  array (
    'Bio' => 'حيوي',
    'Both' => 'كلاهما',
    'Title' => 'العنوان',
  ),
  'dnb_contact_types' => 
  array (
    'Contacts' => 'جهات الاتصال',
    'Leads' => 'العملاء المتوقعون',
    'Prospects' => 'الأهداف',
  ),
  'dnb_countries_iso' => 
  array (
    'AD' => 'أندورا',
    'AE' => 'الإمارات العربية المتحدة',
    'AF' => 'أفغانستان',
    'AG' => 'أنتيجوا وباربودا',
    'AI' => 'أنجيلا',
    'AL' => 'ألبانيا',
    'AM' => 'أرمينيا',
    'AN' => 'جزر الأنتيل الهولندية',
    'AO' => 'أنجولا',
    'AQ' => 'أنتاركتيكا',
    'AR' => 'الأرجنتين',
    'AS' => 'ساموا الأمريكية',
    'AT' => 'النمسا',
    'AU' => 'أستراليا',
    'AW' => 'أروبا',
    'AZ' => 'أذربيجان',
    'BA' => 'البوسنة والهرسك',
    'BB' => 'باربادوس',
    'BD' => 'بنجلاديش',
    'BE' => 'بلجيكا',
    'BF' => 'بوركينا فاسو',
    'BG' => 'بلغاريا',
    'BH' => 'البحرين',
    'BI' => 'بوروندي',
    'BJ' => 'بنين',
    'BM' => 'بيرمودا',
    'BN' => 'بروناي',
    'BO' => 'بوليفيا',
    'BR' => 'البرازيل',
    'BS' => 'الباهاما',
    'BT' => 'بوتان',
    'BV' => 'جزر بوفيت',
    'BW' => 'بوتسوانا',
    'BY' => 'روسيا البيضاء',
    'BZ' => 'بيليز',
    'CA' => 'كندا',
    'CC' => 'جزر كوكوس (كيلنج)',
    'CD' => 'جمهورية الكونغو الديمقراطية',
    'CF' => 'جمهورية أفريقيا الوسطى',
    'CG' => 'الكونغو',
    'CH' => 'سويسرا',
    'CI' => 'كوت ديفوار',
    'CK' => 'جزر كوك',
    'CL' => 'شيلي',
    'CM' => 'الكاميرون',
    'CN' => 'الصين',
    'CO' => 'كولومبيا',
    'CR' => 'كوستاريكا',
    'CU' => 'كوبا',
    'CV' => 'الرأس الأخضر',
    'CX' => 'جزر الكريسماس',
    'CY' => 'قبرص',
    'CZ' => 'جمهورية التشيك',
    'DE' => 'ألمانيا',
    'DJ' => 'جيبوتي',
    'DK' => 'الدنمارك',
    'DM' => 'الدومينيكا',
    'DO' => 'جمهورية الدومينيكان',
    'DZ' => 'الجزائر',
    'EC' => 'الإكوادور',
    'EE' => 'إستونيا',
    'EG' => 'مصر',
    'EH' => 'الصحراء الغربية',
    'ER' => 'إريتريا',
    'ES' => 'إسبانيا',
    'ET' => 'إثيوبيا',
    'FI' => 'فنلندا',
    'FJ' => 'فيجي',
    'FK' => 'جزر فوكلاند',
    'FM' => 'ميكرونيزيا',
    'FO' => 'جزر فارو',
    'FR' => 'فرنسا',
    'FX' => 'فرنسا، ميتروبوليتان',
    'GA' => 'الجابون',
    'GB' => 'المملكة المتحدة',
    'GD' => 'جرينادا',
    'GE' => 'جورجيا',
    'GF' => 'غيانا الفرنسية',
    'GH' => 'غانا',
    'GI' => 'جبل طارق',
    'GL' => 'جرينلاند',
    'GM' => 'جامبيا',
    'GN' => 'غينيا',
    'GP' => 'جواديلوب',
    'GQ' => 'غينيا الاستوائية',
    'GR' => 'اليونان',
    'GS' => 'جورجيا الجنوبية وجزر ساندوش الجنوبية',
    'GT' => 'جواتيمالا',
    'GU' => 'جوام',
    'GW' => 'غينيا بيساو',
    'GY' => 'جويانا',
    'HK' => 'هونج كونج',
    'HM' => 'جزر هيرد وماكدونالدز',
    'HN' => 'هندوراس',
    'HR' => 'كرواتيا',
    'HT' => 'هاييتي',
    'HU' => 'المجر',
    'ID' => 'إندونيسيا',
    'IE' => 'أيرلندا',
    'IL' => 'فلسطين',
    'IN' => 'الهند',
    'IO' => 'إقليم المحيط الهندي البريطاني',
    'IQ' => 'العراق',
    'IR' => 'إيران',
    'IS' => 'أيسلندا',
    'IT' => 'إيطاليا',
    'JM' => 'جامايكا',
    'JO' => 'الأردن',
    'JP' => 'اليابان',
    'KE' => 'كينيا',
    'KG' => 'قيرغيزستان',
    'KH' => 'كمبوديا',
    'KI' => 'كيريباتي',
    'KM' => 'القمر',
    'KN' => 'سانت كيتس ونيفيس',
    'KP' => 'كوريا الشمالية',
    'KR' => 'كوريا الجنوبية',
    'KW' => 'الكويت',
    'KY' => 'جزر كايمان',
    'KZ' => 'كازاخستان',
    'LA' => 'لاوس',
    'LB' => 'لبنان',
    'LC' => 'سانت لوتشيا',
    'LI' => 'ليختنشتين',
    'LK' => 'سريلانكا',
    'LR' => 'ليبريا',
    'LS' => 'ليسوتو',
    'LT' => 'ليتوانيا',
    'LU' => 'لوكسمبورج',
    'LV' => 'لاتفيا',
    'LY' => 'ليبيا',
    'MA' => 'المغرب',
    'MC' => 'موناكو',
    'MD' => 'مولدوفا',
    'ME' => 'مونتينجرو',
    'MG' => 'مدغشقر',
    'MH' => 'جزر المارشال',
    'MK' => 'جمهورية مقدونيا اليوغوسلافية سابقًا',
    'ML' => 'مالي',
    'MM' => 'ميانمار',
    'MN' => 'منغوليا',
    'MO' => 'ماكاو',
    'MP' => 'ماريانا شمالية',
    'MQ' => 'المارتينيك',
    'MR' => 'موريتانيا',
    'MS' => 'مونتسبرات',
    'MT' => 'مالطا',
    'MU' => 'مورشيوس',
    'MV' => 'المالديف',
    'MW' => 'مالاوي',
    'MX' => 'ميكسيكو',
    'MY' => 'ماليزيا',
    'MZ' => 'موزمبيق',
    'NA' => 'ناميبيا',
    'NC' => 'نيوكاليدونيا',
    'NE' => 'النيجر',
    'NF' => 'جزر نورفولك',
    'NG' => 'نيجيريا',
    'NI' => 'نيكاراجوا',
    'NL' => 'هولندا',
    'NO' => 'النرويج',
    'NP' => 'نيبال',
    'NR' => 'ناورو',
    'NU' => 'نياو',
    'NZ' => 'نيوزيلندا',
    'OM' => 'عمان',
    'PA' => 'بنما',
    'PE' => 'بيرو',
    'PF' => 'بولينسيا الفرنسية',
    'PG' => 'بابوا غينيا الجديدة',
    'PH' => 'الفلبين',
    'PK' => 'باكستان',
    'PL' => 'بولندا',
    'PM' => 'سانت بيير وميكولين',
    'PN' => 'جزر بيتكارين',
    'PR' => 'بورتوريكو',
    'PS' => 'فلسطين',
    'PT' => 'البرتغال',
    'PW' => 'بالاو',
    'PY' => 'الباراجواي',
    'QA' => 'قطر',
    'RE' => 'ريونيون',
    'RO' => 'رومانيا',
    'RS' => 'صربيا',
    'RU' => 'روسيا',
    'RW' => 'رواندا',
    'SA' => 'المملكة العربية السعودية',
    'SB' => 'جزر سولومون',
    'SC' => 'سيشيل',
    'SD' => 'السودان',
    'SE' => 'السويد',
    'SG' => 'سنغافورا',
    'SH' => 'سانت هيلينا',
    'SI' => 'سلوفينيا',
    'SJ' => 'سفالبارد وجزر جان مايان',
    'SK' => 'سلوفاكيا',
    'SL' => 'سيراليون',
    'SM' => 'سان مارينو',
    'SN' => 'السنغال',
    'SO' => 'صومالي',
    'SR' => 'سورينام',
    'ST' => 'ساو تومي وبرنسيب',
    'SV' => 'السلفادور',
    'SY' => 'سوريا',
    'SZ' => 'سوازيلاند',
    'TC' => 'جزر تركس كايكوس',
    'TD' => 'تشاد',
    'TF' => 'الأقاليم الفرنسية الجنوبية',
    'TG' => 'توجو',
    'TH' => 'تايلاند',
    'TJ' => 'طاجيكستان',
    'TK' => 'توكيلاو',
    'TM' => 'تركمانستان',
    'TN' => 'تونس',
    'TO' => 'تونجا',
    'TP' => 'تيمور الشرقية',
    'TR' => 'تركيا',
    'TT' => 'ترينداد وتوباجو',
    'TV' => 'توفالو',
    'TW' => 'تايوان',
    'TZ' => 'تنزانيا',
    'UA' => 'أوكرانيا',
    'UG' => 'أوغندا',
    'UM' => 'الجزر الصغرى بالولايات المتحدة',
    'US' => 'الولايات المتحدة',
    'UY' => 'الأوروجواي',
    'UZ' => 'أوزباكستان',
    'VA' => 'مدينة الفاتيكان',
    'VC' => 'سانت فينسينت وجرينادا',
    'VE' => 'فينزويلا',
    'VG' => 'جزر فيرجن البريطانية',
    'VI' => 'جزر فيرجن الأمريكية',
    'VN' => 'فييتنام',
    'VU' => 'فانواتو',
    'WF' => 'جزر واليس وفوتونا',
    'WS' => 'ساموا',
    'YE' => 'اليمن',
    'YT' => 'مايوت',
    'ZA' => 'جنوب إفريقيا',
    'ZM' => 'زامبيا',
    'ZW' => 'زيمبابوي',
  ),
  'dnb_countries_radius_iso' => 
  array (
    'CA' => 'كندا',
    'US' => 'الولايات المتحدة',
  ),
  'dnb_job_codes' => 
  array (
    '' => '',
    'A045' => 'مشارك',
    'A046' => 'مشروع مشترك',
    'A047' => 'حاملو الأسهم',
    'A0A1' => 'المالك',
    'A0A2' => 'الشريك',
    'A0A3' => 'شريط إداري',
    'A0AA' => 'شريك',
    'A0AB' => 'الشريك العام للشركة',
    'A0AC' => 'شريك عام أول',
    'A0AD' => 'شريك أول',
    'A0AE' => 'شريك عام',
    'A0AF' => 'شريك محدد عام',
    'A0AG' => 'شريك محدود',
    'A0AH' => 'شريك عام فردي',
    'A0AI' => 'شريك فردي',
    'A0AJ' => 'مدير/شريك',
    'A0AL' => 'شريك عام إداري',
    'A0AM' => 'شريك محدود إداري',
    'A0AQ' => 'شريك في العمل',
    'A0AS' => 'التنفيذي المشارك',
    'A0AT' => 'أمين مشارك',
    'A0AV' => 'المشارك بالمشروع',
    'A0AY' => 'أمين إداري',
    'A0AZ' => 'متلقٍ',
    'A0GX' => 'مغامر',
    'A0R0' => 'المنفذ',
    'A0R3' => 'مغامر مساعد',
    'A117' => 'كبير مديري التسويق',
    'A154' => 'كبير مديري الاستثمار',
    'A189' => 'الدعم من المستوى ج',
    'A199' => 'مسؤول',
    'A1A4' => 'رئيس مجلس الإدارة',
    'A1A5' => 'نائب الرئيس',
    'A1A6' => 'رئيس',
    'A1A7' => 'كبير المديرين التنفيذيين',
    'A1A8' => 'الرئيس التنفيذي للعمليات',
    'A1A9' => 'المدير المالي',
    'A1B0' => 'أمين خزينة',
    'A1B2' => 'سكرتيرة',
    'A1B3' => 'رئيس فرعي',
    'A1B4' => 'رئيس قسم',
    'A1B5' => 'مسؤول إدارة الشركات أول',
    'A1BA' => 'الرئيس',
    'A1BB' => 'رئيس مشترك',
    'A1BD' => 'رئيس مجلس الإدارة المشارك',
    'A1BE' => 'نائب رئيس مجلس الإدارة',
    'A1BF' => 'نائب رئيس مجلس الإدارة التنفيذي',
    'A1BH' => 'رئيس مجلس الإدارة العام',
    'A1BI' => 'رئيس مجلس الإدارة',
    'A1BJ' => 'رئيس مجلس الإدارة بالإنابة',
    'A1BO' => 'رئيس مجلس الإدارة الاستشاري',
    'A1BP' => 'اللجنة الاستشارية لرئيس مجلس الإدارة',
    'A1BU' => 'الرئيس الفخري',
    'A1BV' => 'اللجنة التنفيذية لرئيس مجلس الإدارة',
    'A1BX' => 'اللجنة المالية لرئيس مجلس الإدارة',
    'A1BY' => 'لجنة الائتمان التابعة لرئيس مجلس الإدارة',
    'A1BZ' => 'اللجنة التنفيذية لرئيس مجلس الإدارة المشترك',
    'A1CA' => 'نائب رئيس مجلس الإدارة المعاون',
    'A1CB' => 'نائب رئيس مجلس الإدارة',
    'A1CG' => 'رئيس مشارك',
    'A1CH' => 'رئيس بالإنابة',
    'A1CJ' => 'رئيس عمليات',
    'A1CK' => 'رئيس أمناء',
    'A1CL' => 'رئيس فخري',
    'A1CN' => 'المدير التنفيذي بالإنابة',
    'A1CO' => 'المدير المسؤول',
    'A1CP' => 'المسؤول التنفيذي المشارك',
    'A1CQ' => 'المسؤول المالي المشارك',
    'A1CR' => 'مسؤول التشغيل المشارك',
    'A1CS' => 'عضو مجلس إدارة تنفيذي',
    'A1CT' => 'مدير إدارة تنفيذي',
    'A1CU' => 'مسؤول تنفيذي',
    'A1CW' => 'مؤسس',
    'A1CX' => 'رئيس قسم الائتمان',
    'A1CY' => 'المسؤول المالي بالإنابة',
    'A1G7' => 'مجلس المدراء',
    'A1R1' => 'ائتماني',
    'A2AP' => 'شريك عام الائتمان',
    'A2D1' => 'تنفيذ خدمات',
    'A2D2' => 'تنفيذي أعلى',
    'A2IU' => 'مدير خبير',
    'A2IV' => 'مسؤول استثمار أول',
    'A2IW' => 'مسؤول ائتمان أول',
    'A2IX' => 'كبير مسؤولي الائتمان',
    'A2IY' => 'مسؤول الائتمان',
    'A2IZ' => 'مسؤول العاملين في الائتمان',
    'A589' => 'دعم على مستوى VP',
    'A598' => 'نائب رئيس الإدارة',
    'A599' => 'تنفيذي',
    'A5D3' => 'نائب رئيس القسم',
    'A5D4' => 'نائب رئيس تنفيذي',
    'A5D6' => 'نائب رئيس مجموعة',
    'A5D7' => 'نائب رئيس معاون',
    'A5D8' => 'نائب الرئيس',
    'A5DL' => 'نائب رئيس تنفيذي فخري',
    'A5DM' => 'نائب رئيس تنفيذي عام',
    'A5DN' => 'تنفيذي مجموعة',
    'A5DO' => 'نائب رئيس شريك',
    'A5DP' => 'نائب رئيس إقليمي',
    'A5DQ' => 'كبير النواب التنفيذيين للرئيس',
    'A5DR' => 'نائب رئيس فخري معاون',
    'A5DS' => 'نائب رئيس قسم/إقليمي',
    'A5DT' => 'نائب الرئيس لقسم مبيعات الجملة',
    'A5I5' => 'نائب الرئيس لتطوير الأعمال',
    'A5I9' => 'نائب الرئيس لخط الأعمال',
    'A615' => 'مدير إدارة الحالات',
    'A626' => 'مدير المعمل',
    'A627' => 'مدير شريك',
    'A636' => 'مدير اجتماعي',
    'A644' => 'مدير التخطيط وتطوير الشركة',
    'A645' => 'مدير الابتكار',
    'A646' => 'مدير الاتصالات',
    'A647' => 'مدير قسم القلب',
    'A655' => 'مدير خدمات الأدوية',
    'A65A' => 'مدير الصيدلية',
    'A663' => 'مدير خدمات البيئة',
    'A689' => 'دعم على مستوى المديرين',
    'A6A1' => 'كبير المديرين',
    'A6A2' => 'مدير قسم الاتصالات عن بُعد',
    'A6AA' => 'مديرغرفة العمليات',
    'A6BA' => 'مدير رعاية/تمريض المرضى',
    'A6BZ' => 'مدير مكافحة العدوى',
    'A6C7' => 'مدير إدارة المخاطر',
    'A6DU' => 'رئيس قسم/فرع',
    'A746' => 'مدير الاتصالات',
    'A789' => 'دعم على مستوى المدير',
    'A7DU' => 'مسؤول إداري',
    'A8DV' => 'مساعد للرئيس',
    'A957' => 'عضو مجلس إدارة استشاري',
    'A998' => 'طاقم العمل',
    'A9CD' => 'رئيس مجلس الإدارة الشرفي',
    'A9DW' => 'المؤسس المشارك',
    'A9DX' => 'استكشاف',
    'A9DY' => 'الأمين الشرفي',
    'A9DZ' => 'رئيس انتقالي',
    'A9EA' => 'رئيس غير نشط',
    'AB47' => 'رئيس قسم الأشعة',
    'ABA1' => 'رئيس قسم أمراض القلب',
    'ABA2' => 'مدير وحدة العناية المركزة ICU/وحدة عناية الشرايين التاجية ',
    'ABA3' => 'رئيس قسم الجراحة',
    'ABA4' => 'المدير الطبي',
    'ABA5' => 'رئيس قسم التخدير',
    'ABA6' => 'رئيس غرفة الطوارئ',
    'ABA7' => 'مدير قسم الجراحة',
    'ABAB' => 'رئيس معمل الباثولوجي',
    'ABBA' => 'رئيس قسم التوليد / أمراض النساء',
    'ADA4' => 'مدير السجلات',
    'ADZ9' => 'مدير المتطوعين',
    'B0A1' => 'كبير المسؤولين الإداريين',
    'B1EB' => 'رئيس إقليمي',
    'B1R2' => 'رئيس',
    'B1R3' => 'مدير مساعد',
    'B5D0' => 'نائب الرئيس للشؤون الإدارية',
    'B5E2' => 'نائب الرئيس لتطوير الشركة',
    'B5E6' => 'نائب الرئيس للعلاقات الحكومية',
    'B5F4' => 'نائب الرئيس للاندماج والاستحواذ',
    'B618' => 'مدير الأمن',
    'B635' => 'مدير حسابات المرضى',
    'B699' => 'مدير إدارة',
    'B6EC' => 'مدير إدارة',
    'B6ED' => 'مدير إدارة مشارك',
    'B6EE' => 'مدير خدمات المساهمين',
    'B6EF' => 'مدير إقليمي',
    'B6EH' => 'مدير إدارة أول',
    'B6H2' => 'مدير تنفيذي',
    'B6H8' => 'رئيس مجلس الإدارة',
    'B6J3' => 'مدير مخازن',
    'B7AB' => 'مدير الممارسات',
    'B7EI' => 'مدير إداري',
    'B7EJ' => 'مدير برنامج',
    'B7EK' => 'مدير إقليمي',
    'B7EL' => 'مدير محطة',
    'B7J0' => 'مدير منطقة',
    'B7J1' => 'مشرف منطقة',
    'B7J8' => 'مدير إداري',
    'B7K0' => 'مدير القسم',
    'B7K3' => 'مدير فرع',
    'B7L3' => 'مدير إقليمي',
    'B7L4' => 'مدير قسم',
    'B7M1' => 'مدير عام',
    'B7M2' => 'مدير العلاقات الحكومية',
    'B7N2' => 'مدير مكتب',
    'B7N6' => 'مدير تخطيط',
    'B7P5' => 'مدير مخازن',
    'B7XA' => 'مدير التمريض',
    'B801' => 'مساعد تنفيذي',
    'B806' => 'سكرتير إداري',
    'B830' => 'مساعد إداري',
    'B899' => 'مساعد إداري',
    'B8B8' => 'مدير مكتب',
    'B914' => 'رئيس القسم',
    'B927' => 'مشرف مكتب',
    'B928' => 'مخطط اجتماعات',
    'B9EM' => 'المسؤول',
    'B9EN' => 'مدير المدينة',
    'B9EO' => 'مدير انتقالي',
    'B9EP' => 'إدارة',
    'B9EQ' => 'طاقم تخطيط',
    'B9ME' => 'علاقات حكومية',
    'BB47' => 'كبير مديري التمريض',
    'C1AC' => 'تنفيذي الاتصالات',
    'C1C1' => 'رئيس تكنولوجيا المعلومات',
    'C1D9' => 'مهندس شبكة أول',
    'C1DC' => 'مهندس برمجيات أول',
    'C2A1' => 'مدير إدارة المعلومات',
    'C2A2' => 'كبير مسؤولي التكنولوجيا',
    'C2C1' => 'مسؤول معالجة البيانات',
    'C2P3' => 'كبير مسؤولي أمان المعلومات',
    'C599' => 'نائب الرئيس للأنظمة',
    'C5E8' => 'نائب الرئيس لخدمات المعلومات',
    'C601' => 'مدير توكيد الجودة',
    'C624' => 'مدير تكنولوجيا المعلومات',
    'C699' => 'مدير أنظمة',
    'C6G8' => 'مدير معالجة البيانات',
    'C6I3' => 'مدير MIS/IS',
    'C6J1' => 'مدير معمل الكمبيوتر',
    'C6P9' => 'مدير توكيد جودة',
    'C724' => 'مدير الحاسب الآلي',
    'C799' => 'مدير أنظمة',
    'C7BB' => 'مسؤول أنظمة',
    'C7BC' => 'مدير الاتصالات عن بُعد',
    'C7C7' => 'مدير تكنولوجيا المعلومات',
    'C7E8' => 'مدير المعلومات',
    'C7H1' => 'مدير مشروع شبكات',
    'C7J1' => 'مدير شبكات',
    'C7K9' => 'مدير معالجة البيانات',
    'C7L5' => 'مدير عمليات معالجة البيانات',
    'C7N1' => 'مدير أنظمة معلومات الإدارة',
    'C7P7' => 'مدير برمجة/أنظمة',
    'C7P8' => 'مدير دعم أنظمة',
    'C7P9' => 'مدير توكيد جودة',
    'C7X9' => 'مدير المعلومات',
    'C7XZ' => 'مدير فني',
    'C899' => 'مساعد أنظمة',
    'C8B9' => 'منسق تكنولوجيا/كمبيوتر',
    'C8C8' => 'مدير مشروع تكنولوجيا المعلومات',
    'C8CC' => 'مطور شبكات',
    'C8CD' => 'مطور برامج',
    'C8DC' => 'مهندس برامج',
    'C8DD' => 'مهندس أنظمة',
    'C8X1' => 'مهندس شبكات',
    'C912' => 'مشرف معالجة البيانات',
    'C918' => 'طاقم عمل الاتصالات عن بُعد',
    'C939' => 'محلل أنظمه أول',
    'C940' => 'محلل أنظمة',
    'C941' => 'محلل شبكات',
    'C999' => 'طاقم عمل الأنظمة',
    'C9A1' => 'عالم الكمبيوتر',
    'C9A2' => 'أخصائي الحاسب الآلي',
    'C9A3' => 'فني حاسب آلي',
    'C9A4' => 'أجهزة حاسب آلي',
    'C9A5' => 'أنظمة معلومات',
    'C9A6' => 'طاقم عمل أنظمة معلومات الإدارة',
    'C9A7' => 'مبرمج',
    'C9A8' => 'محلل برمجة',
    'C9A9' => 'قائد مشروعات',
    'C9B1' => 'استشاري البيانات',
    'C9B2' => 'مسؤول شبكة',
    'C9B3' => 'مسؤول قاعدة البيانات',
    'C9B4' => 'استشاري تطبيقات',
    'C9B5' => 'تحليل أعمال',
    'C9B6' => 'مسؤول البيانات',
    'C9B7' => 'فني أنظمة',
    'C9B8' => 'تكنولوجيا معلومات/دعم الإنترنت',
    'C9B9' => 'فني',
    'C9CX' => 'مهندس تكنولوجيا',
    'C9ER' => 'طاقم عمل معالجة البيانات',
    'C9F8' => 'مسؤول تعيين فني',
    'C9P3' => 'أمن تكنولوجيا المعلومات',
    'C9X1' => 'فني شبكات',
    'C9XZ' => 'أخصائي تكنولوجيا المعلومات',
    'D2C2' => 'تنفيذي هندسة',
    'D599' => 'نائب الرئيس لتطوير وأبحاث الهندسة',
    'D5E4' => 'نائب الرئيس للهندسة',
    'D5E5' => 'نائب الرئيس للتطوير',
    'D5G1' => 'نائب الرئيس للبحث والتكنولوجيا',
    'D699' => 'مدير الهندسية',
    'D6ET' => 'مدير فني',
    'D6EZ' => 'مدير تطوير',
    'D6O0' => 'مدير تطوير أعمال',
    'D799' => 'مدير تطوير وأبحاث الهندسة',
    'D7EU' => 'مهندس مشروعات',
    'D7EV' => 'مدير مشروعات',
    'D7EW' => 'منسق مشروعات',
    'D7EX' => 'مدير مشروعات',
    'D7EY' => 'تنفيذي مشروعات',
    'D7EZ' => 'مدير تطوير',
    'D7L1' => 'مدير هندسة التصميمات',
    'D7L7' => 'مدير هندسة',
    'D7M5' => 'مدير هندسة صناعية',
    'D7O0' => 'مدير أبحاث وتطوير',
    'D7O1' => 'مدير هندسة منتج',
    'D7O4' => 'مدير مشروعات',
    'D899' => 'مساعد تطوير وأبحاث الهندسة',
    'D901' => 'مهندس كهرباء',
    'D915' => 'مصمم/رسامين',
    'D916' => 'مهندس',
    'D917' => 'كبير المهندسين',
    'D918' => 'مهندس أول',
    'D963' => 'فني صيانة',
    'D999' => 'تطوير وأبحاث الهندسة',
    'D9EZ' => 'تطوير',
    'D9FA' => 'طاقم عمل الهندسة',
    'D9FB' => 'صناعي',
    'D9FC' => 'بحث',
    'D9FD' => 'التكنولوجيا',
    'D9FE' => 'طقم عمل فني',
    'D9IU' => 'طاقم عمل تطوير وأبحاث',
    'D9X1' => 'مصمم رسومات',
    'D9X9' => 'مهندس مشروعات',
    'DZ25' => 'مهندس تصميمات',
    'E1FF' => 'مسؤول استثمار',
    'E2C4' => 'تنفيذي مالي',
    'E5D9' => 'نائب الرئيس للحسابات',
    'E5E5' => 'نائب الرئيس للشؤون المالية',
    'E6D9' => 'كبير المحاسبين',
    'E6FG' => 'مدير مالي',
    'E6FH' => 'مسؤول مالي',
    'E6FI' => 'مسؤول قروض',
    'E6G4' => 'مدير الحسابات',
    'E7FE' => 'استشاري مالي',
    'E7FF' => 'مدير الاستثمارات',
    'E7FJ' => 'مدير الائتمان',
    'E7G2' => 'مدير السندات التجارية',
    'E7J7' => 'مدير الحسابات',
    'E7K1' => 'مدير مراجعة',
    'E7K4' => 'مدير أعمال',
    'E7K7' => 'مدير الائتمان',
    'E7K9' => 'مدير التعاقدات',
    'E7L9' => 'مدير مالي',
    'E7P9' => 'مدير الضرائب',
    'E7S9' => 'سمسار مخازن',
    'E899' => 'مساعد مالي',
    'E8Q6' => 'مراقب مساعد',
    'E8Q9' => 'أمين خزينة مساعد',
    'E901' => 'محاسب',
    'E902' => 'محاسب عام معتمد',
    'E903' => 'قائم بإعداد الضرائب',
    'E906' => 'مراجع',
    'E908' => 'مراقب',
    'E909' => 'مراقب',
    'E917' => 'مشرف مالي',
    'E920' => 'سمسار',
    'E944' => 'أمين مكتبة',
    'E999' => 'تمويل الآخرين',
    'E9E6' => 'سكرتير مالي',
    'E9E7' => 'محلل مالي أول',
    'E9E9' => 'محلل مالي',
    'E9FK' => 'طاقم الحسابات',
    'E9FL' => 'طاقم عمل الائتمان',
    'E9FM' => 'التمويل',
    'E9FN' => 'تثبيت',
    'E9FO' => 'قرض',
    'E9FP' => 'رهن عقاري',
    'E9FQ' => 'ائتماني',
    'E9FR' => 'أفراد أمن',
    'E9FS' => 'المراقب بالإنابة',
    'E9FZ' => 'محلل',
    'EZ20' => 'سمسار شريك',
    'F2A9' => 'الموارد البشرية من المستوى ج',
    'F2C9' => 'تنفيذي العاملين',
    'F599' => 'نائب الرئيس لشؤون الموظفين',
    'F5E7' => 'نائب الرئيس للموارد البشرية',
    'F6FV' => 'مدير تعيينات',
    'F6G0' => 'مدير علاقات العاملين',
    'F6H4' => 'مدير الموارد البشرية',
    'F6H5' => 'مدير علاقات صناعية',
    'F6I6' => 'مدير شؤون العاملين',
    'F6J5' => 'مدير التدريب والتطوير',
    'F6J6' => 'مدير التدريب',
    'F7B1' => 'منسق الموارد البشرية',
    'F7FF' => 'مدير الرواتب',
    'F7FR' => 'مدير مزايا العاملين',
    'F7FS' => 'مدير التمويل',
    'F7FT' => 'مدير تخطيط المعاشات',
    'F7FU' => 'مدير تخطيط مشاركة الأرباح',
    'F7FV' => 'مدير تعيينات',
    'F7K2' => 'مدير المزايا',
    'F7K5' => 'مدير التعويضات',
    'F7L6' => 'مدير علاقات العاملين',
    'F7M4' => 'مدير الموارد البشرية',
    'F7M6' => 'مدير علاقات صناعية',
    'F7N5' => 'مدير شؤون العاملين',
    'F7Q2' => 'مسؤول التدريب والتطوير',
    'F7Q3' => 'مشرف التدريب',
    'F898' => 'الموارد البشرية',
    'F899' => 'مساعد شخصي',
    'F8C9' => 'محلل إدارة بيانات الموارد البشرية',
    'F8Z8' => 'استشاري الموارد البشرية',
    'F8Z9' => 'محلل الموارد البشرية',
    'F8ZZ' => 'طاقم عمل الرواتب',
    'F9B1' => 'مدير الموارد البشرية',
    'F9FV' => 'مسؤول تعيينات',
    'F9FW' => 'العاملين',
    'F9Q2' => 'أخصائي التدريب',
    'G299' => 'مسؤول مشتريات',
    'G599' => 'نائب مدير مشتريات',
    'G5F0' => 'نائب الرئيس للمشتريات/الشراء',
    'G629' => 'مدير أعمال/مالي/مشتريات',
    'G698' => 'مدير مشتريات',
    'G699' => 'مدير مشتريات',
    'G6I9' => 'كبير مسؤولي المشتريات',
    'G798' => 'مدير مشتريات',
    'G7O6' => 'مدير مشتريات',
    'G899' => 'مساعد مشتريات',
    'G906' => 'كبير المشترين',
    'G907' => 'مشترٍ',
    'G933' => 'وكيل مشتريات',
    'G989' => 'طاقم المشتريات',
    'G9FX' => 'شراء',
    'H2C8' => 'تنفيذي تصنيع/إنتاج/توزيع',
    'H599' => 'نائب الرئيس للعمليات/الإنتاج/التصنيع',
    'H5F1' => 'نائب الرئيس للتصنيع',
    'H5F5' => 'نائب الرئيس للعمليات',
    'H5F8' => 'نائب الرئيس للإنتاج',
    'H699' => 'مدير عمليات الإنتاج/التصنيع',
    'H6FY' => 'مدير العمليات',
    'H6H9' => 'مدير تصنيع',
    'H6I0' => 'مدير السلامة',
    'H6I1' => 'مدير الخامات',
    'H6I7' => 'مدير إنتاج',
    'H6J4' => 'مدير المرور',
    'H6O7' => 'مدير مراقبة الجودة',
    'H799' => 'عمليات الإنتاج/التصنيع',
    'H7A0' => 'مدير الخامات',
    'H7B7' => 'مدير موقع',
    'H7D5' => 'مدير المطاحن',
    'H7FZ' => 'مدير التعدين',
    'H7GA' => 'مدير تصدير',
    'H7H7' => 'مشرف عمليات',
    'H7H9' => 'مدير النقل',
    'H7I0' => 'مدير السلامة',
    'H7L0' => 'مدير أمامي',
    'H7L2' => 'مدير التوزيع/الشحن/النقل',
    'H7M0' => 'مدير تصنيع',
    'H7M7' => 'مدير مراقبة المخازن',
    'H7N3' => 'مدير عمليات',
    'H7N4' => 'مدير هندسة التعبئة',
    'H7N8' => 'مدير هندسة مصنع',
    'H7N9' => 'مدير مصنع',
    'H7O3' => 'مدير إنتاج',
    'H7O7' => 'مدير مراقبة الجودة',
    'H7P3' => 'مدير الأمن',
    'H7Q1' => 'مسؤول المرور',
    'H918' => 'مشرف/رئيس العمال',
    'H920' => 'مهندس صناعي',
    'H924' => 'مشرف إنتاج',
    'H928' => 'مهندس تصنيع',
    'H929' => 'المشرف على المصنع',
    'H930' => 'مشرف إنتاج',
    'H9E7' => 'محلل عمليات',
    'H9GA' => 'طاقم عمل النقل',
    'H9GB' => 'طاقم التصنيع',
    'H9GC' => 'طاقم تشغيل',
    'H9GD' => 'طاقم تشغيل',
    'H9GE' => 'تشغيل',
    'H9GF' => 'إنتاج',
    'H9GG' => 'منتج',
    'H9P3' => 'طاقم الأمن',
    'I199' => 'مدير معلومات الإدارة',
    'I1A7' => 'مدير مركز الاتصالات',
    'I1A8' => 'مسؤول تسويق',
    'I1A9' => 'مدير مبيعات',
    'I1X7' => 'مدير مبيعات دولي',
    'I2A1' => 'التسويق من المستوى ج',
    'I2A3' => 'مسؤول وسائل الإعلام الاجتماعية والرقمية',
    'I2B9' => 'تنفيذي علاقات عامة',
    'I2C0' => 'مدير المبيعات والتسويق',
    'I2I1' => 'مسؤول استراتيجيات الإعلام الاجتماعي',
    'I599' => 'نائب الرئيس للمبيعات والتسويق',
    'I5A1' => 'نائب رئيس التسويق الفخري',
    'I5A2' => 'نائب رئيس المبيعات الفخري',
    'I5E1' => 'نائب الرئيس للإعلانات',
    'I5F2' => 'نائب الرئيس للتسويق',
    'I5F3' => 'نائب الرئيس للترويج',
    'I5F7' => 'نائب الرئيس لتطوير المنتجات',
    'I5G2' => 'نائب الرئيس للمبيعات',
    'I5H1' => 'نائب الرئيس لاتصالات الشركة',
    'I5I1' => 'نائب الرئيس للعلاقات العامة',
    'I699' => 'مدير المبيعات والتسويق',
    'I6A1' => 'مدير التجارة الإلكترونية',
    'I6A2' => 'مدير التجارة الإلكترونية',
    'I6A3' => 'مدير وسائل الإعلام الاجتماعية والرقمية',
    'I6G6' => 'مدير الدعاية',
    'I6H0' => 'مدير التسويق',
    'I6H1' => 'مدير اتصالات الشركة',
    'I6I1' => 'مدير علاقات عامة',
    'I6J2' => 'مدير مبيعات',
    'I6K2' => 'مدير تطوير أعمال',
    'I6K8' => 'مدير خدمة العملاء',
    'I799' => 'مدير المبيعات والتسويق',
    'I7A1' => 'مدير التجارة الإلكترونية',
    'I7A2' => 'مدير التجارة الإلكترونية',
    'I7A3' => 'مدير الإعلام الاجتماعي',
    'I7A4' => 'مدير المجتمع',
    'I7B1' => 'مدير التسويق',
    'I7H1' => 'مدير اتصالات الشركة',
    'I7I1' => 'مدير علاقات عامة',
    'I7J9' => 'مدير الدعاية',
    'I7K2' => 'مدير تطوير أعمال',
    'I7K8' => 'مدير خدمة العملاء',
    'I7M9' => 'مدير التسويق',
    'I7N0' => 'مدير تطوير منتج',
    'I7O2' => 'مدير منتج',
    'I7O9' => 'مدير مبيعات إقليمي',
    'I7P1' => 'مدير مبيعات',
    'I7P2' => 'مدير ترويج المبيعات',
    'I889' => 'طاقم أبحاث التسويق',
    'I898' => 'ذو صلة بالمبيعات',
    'I899' => 'مساعد المبيعات والتسويق',
    'I998' => 'أخصائي وسائل الإعلام الاجتماعية والرقمية',
    'I999' => 'طاقم عمل المبيعات والتسويق',
    'I9A1' => 'التجارة الإلكترونية',
    'I9A2' => 'التجارة الإلكترونية',
    'I9A3' => 'محلل الإعلام الاجتماعي',
    'I9A4' => 'مسؤول تسويق الإعلام الاجتماعي',
    'I9D8' => 'مهندس مبيعات',
    'I9GH' => 'طاقم الدعاية',
    'I9GI' => 'مسوق',
    'I9GJ' => 'تسويق',
    'I9GK' => 'طاقم التسويق',
    'I9GL' => 'المنتجات',
    'I9GM' => 'طاقم المبيعات',
    'I9GN' => 'تسويق قاعدة البيانات',
    'I9H1' => 'طاقم عمل اتصالات الشركة',
    'I9I1' => 'طقم العمل في العلاقات العامة',
    'I9I2' => 'منشورات',
    'I9I3' => 'متحدث',
    'I9I8' => 'منسق مبيعات',
    'I9I9' => 'منسق تسويق',
    'I9K8' => 'طاقم عمل خدمة العملاء',
    'I9Z9' => 'طاقم مركز الاتصالات',
    'I9ZX' => 'مندوب مركز الاتصالات',
    'J599' => 'نائب مدير التسهيلات',
    'J699' => 'مدير التسهيلات',
    'J6E2' => 'مدير زرع الأعضاء الطبي',
    'J6H7' => 'مدير الصيانة',
    'J7GN' => 'مدير موقف الانتظار',
    'J7L8' => 'مدير التسهيلات',
    'J7M3' => 'مدير مركزي',
    'J7M8' => 'مدير صيانة',
    'J7N7' => 'مدير المصنع والتسهيلات',
    'J7P0' => 'مدير محطة',
    'J7Q3' => 'مدير المخازن',
    'J7ZZ' => 'مدير الممتلكات',
    'J899' => 'مساعد التسهيلات',
    'J923' => 'مشرف صيانة',
    'J999' => 'تسهيلات',
    'J9GO' => 'طاقم الصيانة',
    'J9GP' => 'مدير ساحة',
    'K209' => 'سفير',
    'K601' => 'مدير البرنامج الفيدرالي',
    'K602' => 'مفتش برنامج',
    'K656' => 'نائب المدير',
    'K661' => 'قاض',
    'K670' => 'رئيس قسم الشرطة',
    'K948' => 'عضو مجلس محلي',
    'K949' => 'مساعد الرئيس',
    'K950' => 'رئيس',
    'K951' => 'مجلس المدينة',
    'K952' => 'المفوض',
    'K953' => 'رئيس اللجنة',
    'K955' => 'عضو استشاري',
    'K960' => 'مفوض المقاطعة',
    'K961' => 'قاضي المقاطعة',
    'K962' => 'شيخ',
    'K963' => 'رئيس قسم الحرائق',
    'K964' => 'محافظ',
    'K965' => 'محافظ',
    'K966' => 'مسؤول الاختيار',
    'K967' => 'رئيس الشرطة',
    'K968' => 'نائب المحافظ',
    'K969' => 'مأمور',
    'K989' => 'هيئة القضاة',
    'K999' => 'الحكومة',
    'K9D7' => 'مسؤول التصحيح',
    'L6A6' => 'مدير الرعاية الرسولية',
    'L935' => 'قائد ديني',
    'L970' => 'قس شريك',
    'L971' => 'وزير',
    'L972' => 'قس مساعد',
    'L973' => 'أسقف',
    'L974' => 'الشماس',
    'L975' => 'كاردينال',
    'L976' => 'القس',
    'L977' => 'مشرف متفوق',
    'L978' => 'حاخام',
    'L979' => 'رئيس الجامعة',
    'L980' => 'القس',
    'L981' => 'كاهن',
    'L982' => 'قس أول',
    'M1B1' => 'مشرف المدرسة',
    'M1B2' => 'رئيس مجلس إدارة المدرسة',
    'M622' => 'مدير مكتبة',
    'M6E6' => 'مدير المساعدات المالية',
    'M6F6' => 'مدير شؤون المدرسين',
    'M6I6' => 'مدير خدمات الإعلام التعليمي',
    'M7M6' => 'استشاري أكاديمي',
    'M7M9' => 'أستاذ',
    'M7MZ' => 'مدرس',
    'M8I6' => 'أخصائي إعلام',
    'M8I7' => 'أخصائي قراءة',
    'M901' => 'التعليم',
    'M922' => 'أمين مكتبة',
    'M983' => 'مستشار',
    'M984' => 'العميد',
    'M985' => 'مدير المدرسة',
    'M986' => 'رئيس قسم القبول',
    'M987' => 'كبير المسؤولين الأكاديميين',
    'M988' => 'مدير رياضي',
    'M989' => 'مدير خدمة التغذية',
    'M990' => 'نائب استشاري',
    'M999' => 'مساعد تعليم',
    'M9M9' => 'محاضر',
    'M9R3' => 'بروفيسور شريك',
    'M9R4' => 'أستاذ مساعد',
    'M9R5' => 'أستاذ مساعد',
    'N985' => 'رقيب',
    'N986' => 'مساعد',
    'N987' => 'قائد',
    'N988' => 'العميد',
    'N989' => 'الحاكم الأعلى',
    'N990' => 'الفارس العظيم',
    'N991' => 'الفارس القائد',
    'N992' => 'رئيس',
    'N993' => 'قائد مشارك',
    'N994' => 'مخازن التموين',
    'N995' => 'عميد خلفي',
    'N996' => 'مسجل',
    'N997' => 'نائب القائد',
    'N998' => 'نائب العميد',
    'N999' => 'كابتن',
    'X1Z8' => 'معاون أول',
    'X626' => 'عالم',
    'X656' => 'مدير فني',
    'X6Z9' => 'مدير البرنامج',
    'X746' => 'محرر شريك',
    'X799' => 'رجل أعمال/حرفي',
    'X7DZ' => 'مدير مشروعات أول',
    'X7X7' => 'مدير أول',
    'X8X9' => 'مستشار أول',
    'X901' => 'المؤلف',
    'X906' => 'ضرائب',
    'X930' => 'مهندس معماري',
    'X931' => 'مصمم',
    'X956' => 'مدير العملاء',
    'X957' => 'مدير العملاء',
    'X9CD' => 'محلل أبحاث',
    'XA01' => 'أخصائي طب طوارئ',
    'XA02' => 'جراح عام أوعية دموية',
    'XA99' => 'طبيب',
    'XAA1' => 'طبيب بيطري',
    'XAA2' => 'ممارس الأسرة',
    'XAB5' => 'استشاري تعاطي المخدرات',
    'XABX' => 'أخصائي عصبية',
    'XAP0' => 'أخصائي طب نفسي',
    'XAP1' => 'أخصائي أنف، وأذن، وحنجرة',
    'XAP2' => 'أمراض معدية',
    'XAP3' => 'أخصائي عيون',
    'XAP4' => 'أخصائي تقويم العظام',
    'XAP5' => 'الطبيب الشرعي',
    'XAP6' => 'طبيب المستقيم والشرج',
    'XAP7' => 'طب رياضي',
    'XAP8' => 'طبيب صدر',
    'XAP9' => 'جراح',
    'XAQ1' => 'أخصائي صناعة مهني',
    'XAQ2' => 'طب الشيخوخة',
    'XAQ3' => 'التوليد',
    'XAQ4' => 'أخصائي سمع',
    'XAS0' => 'أمراض الحساسية والمناعة',
    'XAS1' => 'التخدير',
    'XAS2' => 'التهاب المفاصل والروماتيزم',
    'XAS3' => 'أمراض القلب',
    'XAS4' => 'الأمراض الجلدية',
    'XAS5' => 'الغدد الصماء',
    'XAS6' => 'ممارس طبي عام',
    'XAS7' => 'الجهاز الهضمي',
    'XAS8' => 'أمراض الدم',
    'XAS9' => 'طب داخلي',
    'XAT0' => 'أمراض الكلى',
    'XAT1' => 'عصبية',
    'XAT2' => 'دواء ذري',
    'XAT3' => 'أمراض النساء / التوليد',
    'XAT4' => 'الأورام',
    'XAT5' => 'طب العيون',
    'XAT6' => 'طب الأطفال',
    'XAT7' => 'طبيب بشري',
    'XAT8' => 'الطب النفسي',
    'XAT9' => 'علم نفس الأطفال',
    'XAU0' => 'أمراض الحيوانات',
    'XAU1' => 'الأشعة',
    'XAU2' => 'مقوم العظام',
    'XAU3' => 'العظام',
    'XAU4' => 'جراحة العظام',
    'XAU5' => 'جراحة تجميل',
    'XAU6' => 'جراحة الصدر',
    'XAU7' => 'جراحة المسالك البولية',
    'XAU8' => 'الطب الوقائي',
    'XAU9' => 'أخصائي خصوبة',
    'XAV0' => 'السكري',
    'XAV1' => 'طب الأذن والحنجرة',
    'XAV2' => 'الوخز بالإبر',
    'XAV3' => 'جراح التجميل',
    'XAV4' => 'أخصائي أمراض الروماتيزم',
    'XAV5' => 'القلب والأوعية الدموية',
    'XAV6' => 'جراح عصبية',
    'XAV7' => 'جراحة القولون والمستقيم',
    'XAV8' => 'جراحة أوعية دموية',
    'XAXA' => 'جراح صدر',
    'XAY5' => 'علم المناعة',
    'XAY6' => 'المنوم المغناطيسي',
    'XAY7' => 'أخصائي تغذية',
    'XAY9' => 'طب الفضاء',
    'XAZ1' => 'أخصائي أمراض القدم',
    'XAZ2' => 'أخصائي طبي',
    'XAZ8' => 'مساعد طبيب',
    'XAZ9' => 'جراحة',
    'XB37' => 'أخصائي الأشعة التشخيصية',
    'XB47' => 'تحالف الصحة المهنية',
    'XB67' => 'مسؤول الصحة',
    'XB6M' => 'مدير المعلومات الصحية',
    'XB98' => 'المسعفون الطبيون الأوليون',
    'XB99' => 'مدير الرعاية الصحية',
    'XBA7' => 'مديرغرفة الطوارئ',
    'XBB2' => 'أخصائي عدسات',
    'XBB3' => 'أخصائي رعاية الثدي',
    'XBBB' => 'ممارس تمريض',
    'XBC1' => 'ممرضة',
    'XBC2' => 'مدير التمريض',
    'XBC3' => 'أخصائي تخاطب',
    'XBC4' => 'مدير التمريض',
    'XBC9' => 'مشرف تمريض',
    'XBD1' => 'صيدلي',
    'XBD2' => 'فني صيدلية معتمد',
    'XBE1' => 'مدير علاج مشكلات التنفس',
    'XBE2' => 'مدير علاج طبيعي',
    'XBE3' => 'مدير العلاج المهني',
    'XBE4' => 'العلاج الطبيعي',
    'XBE5' => 'أخصائي العلاج الطبيعي',
    'XBF1' => 'مدير الرعاية',
    'XBF2' => 'مدير الرعاية الصحية المنزلية',
    'XBF9' => 'مدير طبي',
    'XBFB' => 'مسؤول تعيين التمريض',
    'XBFC' => 'مسؤول تعيين الأطباء',
    'XBU1' => 'أخصائي الوجه والفكين',
    'XBV4' => 'أخصائي أسنان',
    'XBV9' => 'التعويضات',
    'XBW0' => 'مسؤول صحة الأسنان',
    'XBW3' => 'ممارسات مجموعة وشركة',
    'XBXA' => 'ممرضة مسجلة',
    'XBXB' => 'ممرض ممارس معتمد',
    'XBXC' => 'ممرضة إعادة التأهيل',
    'XBZ8' => 'أخصائي قدم',
    'XBZ9' => 'أخصائي الأطراف الصناعية',
    'XBZZ' => 'طبيب إعادة التأهيل',
    'XD15' => 'المستشار القانوني للشركة',
    'XD26' => 'محامٍ',
    'XD51' => 'نائب الرئيس للشؤون القانونية',
    'XD97' => 'محامٍ قانوني',
    'XD98' => 'طاقم العمل القانوني',
    'XD99' => 'المجلس',
    'XDA2' => 'مسؤول الامتثال',
    'XDA6' => 'مدير الامتثال',
    'XDA7' => 'مدير الامتثال',
    'XDW4' => 'قانون براءة الاختراع',
    'XDW5' => 'قانون التعاقد',
    'XDW6' => 'جريمة الأثرياء',
    'XDW7' => 'استمالة',
    'XDW9' => 'قانون البحث',
    'XDX0' => 'القانون الجنائي',
    'XDX1' => 'المجلس العام',
    'XDX2' => 'ممارسة الدعاوى المدنية',
    'XDX3' => 'عقارات/وصايا/تخطيط عقاري',
    'XDX4' => 'قانون الإصابات الشخصية',
    'XDX5' => 'قانون الطلاق',
    'XDX6' => 'قانون العمل والشركات',
    'XDX7' => 'ممارس قانوني عام',
    'XDX8' => 'دعوى اسبستوس',
    'XDX9' => 'قانون البيئة',
    'XDY0' => 'قانون الأسرة',
    'XDY1' => 'قانون الإفلاس',
    'XDY2' => 'التقاضي',
    'XDY3' => 'الأضرار',
    'XDY4' => 'أخطاء الممارسة الطبية',
    'XDY5' => 'مصداقية مهنية',
    'XDY6' => 'القانون التجاري',
    'XDZ9' => 'طاقم الامتثال',
    'XZ9L' => 'أخصائي اجتماعي',
    'XZA1' => 'عضو',
    'XZY8' => 'أخصائي التغذية',
    'Z1X1' => 'عضو إدارة',
    'Z2B7' => 'إدارة تنفيذية',
    'Z2B8' => 'مدير تنفيذي للنقل الجوي',
    'Z2B9' => 'مصرفي تنفيذي',
    'Z2C3' => 'سكرتير تنفيذي',
    'Z2C5' => 'تنفيذي الضيافة',
    'Z2C6' => 'تنفيذي دولي',
    'Z5E9' => 'نائب الرئيس للشؤون الدولية',
    'Z642' => 'مدير مساعد',
    'Z698' => 'مدير النقل',
    'Z699' => 'مدير',
    'Z6GQ' => 'المدير بالإنابة',
    'Z6H6' => 'مدير دولي',
    'Z6H7' => 'المدير المشارك',
    'Z715' => 'مدير حالة',
    'Z741' => 'المدير المشارك',
    'Z799' => 'مدير',
    'Z7F7' => 'مشرف تأمين/فواتير',
    'Z7GQ' => 'مدير بالإنابة',
    'Z7GR' => 'مدير المجمع',
    'Z7P4' => 'مدير خدمات',
    'Z823' => 'مراسل',
    'Z856' => 'مدير مكتب مساعد',
    'Z888' => 'موظف استقبال',
    'Z889' => 'سكرتير موظف الاستقبال',
    'Z899' => 'المساعد',
    'Z8A8' => 'مساعد طبي',
    'Z8B9' => 'فني طب العيون',
    'Z8GT' => 'كاتب مساعد',
    'Z8GU' => 'مدير إقليمي مساعد',
    'Z8Q0' => 'النائب المساعد للرئيس',
    'Z8Q7' => 'مدير مساعد',
    'Z8Q8' => 'سكرتير مساعد',
    'Z900' => 'مدير تنفيذي للحسابات',
    'Z903' => 'زميل',
    'Z910' => 'منسق',
    'Z917' => 'ممثل خدمة العملاء',
    'Z921' => 'وكيل تأمين',
    'Z923' => 'ضامن عادي وضامن ملكية قانوني',
    'Z924' => 'ضامن قانوني على الحياة',
    'Z925' => 'ضامن',
    'Z926' => 'سندات الضامن',
    'Z932' => 'ناشر',
    'Z934' => 'وكيل عقارات',
    'Z936' => 'مشرف مخازن',
    'Z937' => 'مشرف',
    'Z938' => 'مشرف',
    'Z939' => 'كاتب',
    'Z940' => 'شريك',
    'Z941' => 'أمين خزينة مساعد',
    'Z943' => 'مساعد المشرف',
    'Z998' => 'مدير قطع الغيار',
    'Z9GU' => 'مدير الحسابات',
    'Z9GV' => 'مدير الحسابات',
    'Z9GW' => 'مكلف بإدارة',
    'Z9GX' => 'استشاري',
    'Z9GY' => 'وكيل',
    'Z9GZ' => 'محامٍ ميداني',
    'Z9HA' => 'استشاري',
    'Z9HB' => 'مقاول',
    'Z9HC' => 'تجاري',
    'Z9HD' => 'عضو اللجنة',
    'Z9HG' => 'ممثل الشركة',
    'Z9HH' => 'مراسل',
    'Z9HI' => 'أمين خزينة',
    'Z9HJ' => 'وكيل الفض',
    'Z9HK' => 'محلي',
    'Z9HL' => 'محرر',
    'Z9HM' => 'أجنبي',
    'Z9HN' => 'عام',
    'Z9HQ' => 'المجموعة',
    'Z9HR' => 'دولي',
    'Z9HT' => 'وكيل سيولة',
    'Z9HX' => 'كابتن ميناء',
    'Z9HY' => 'مدير ميناء',
    'Z9HZ' => 'مدير ميناء',
    'Z9IA' => 'نشر',
    'Z9IB' => 'رئيس مشارك',
    'Z9IC' => 'طابعة منشورات',
    'Z9IF' => 'العقارات',
    'Z9IG' => 'إقليم',
    'Z9IH' => 'أخصائي تأهيل',
    'Z9II' => 'مندوب',
    'Z9IJ' => 'البيع بالتجزئة',
    'Z9IK' => 'تجار التجزئة',
    'Z9IL' => 'إقليمي',
    'Z9IM' => 'علاقات',
    'Z9IO' => 'محرر أول',
    'Z9IQ' => 'خدمات',
    'Z9IR' => 'مدخرات',
    'Z9IS' => 'النقل',
    'Z9IT' => 'البيع بالجملة',
    'ZA48' => 'جراحة الفم، والوجه، والفكين',
    'ZAA0' => 'أخصائي أسنان',
    'ZAA1' => 'أخصائي لثة',
    'ZAA2' => 'أخصائيو غدد صماء',
    'ZAA3' => 'طب أسنان الأسرة والطبيب العام',
    'ZAA4' => 'تقويم الأسنان',
    'ZAA5' => 'طب أسنان الأطفال',
    'ZAA6' => 'اللثة',
    'ZAA7' => 'علم أمراض الفم',
    'ZAAB' => 'جراح أسنان',
    'ZAV6' => 'اخصائيو النظارات',
    'ZAV7' => 'أخصائي بصريات للمسنين',
    'ZBXA' => 'التحكم في الألم',
    'ZBXB' => 'بنك الدم',
    'ZBZZ' => 'ممرضة توليد',
  ),
  'dnb_sic_naics_code' => 
  array (
    700 => 'رمز NAICS',
    3599 => 'رمز SIC',
  ),
  'dnb_states_iso' => 
  array (
    'AD' => 
    array (
      1 => 
      array (
        'code' => 'ALV',
        'name' => 'أندورا لا فيلا',
      ),
      2 => 
      array (
        'code' => 'CAN',
        'name' => 'كانيلو',
      ),
      3 => 
      array (
        'code' => 'ENC',
        'name' => 'إنكامب',
      ),
      4 => 
      array (
        'code' => 'ESE',
        'name' => 'إيسكلاديس إنجورداني',
      ),
      5 => 
      array (
        'code' => 'LMA',
        'name' => 'لا ماسانا',
      ),
      6 => 
      array (
        'code' => 'ORD',
        'name' => 'أوردينو',
      ),
      7 => 
      array (
        'code' => 'SJL',
        'name' => 'سانت جوليا دي لوريا',
      ),
    ),
    'AE' => 
    array (
      1 => 
      array (
        'code' => 'AZ',
        'name' => 'أبو زابي',
      ),
      2 => 
      array (
        'code' => 'AJ',
        'name' => 'عجمان',
      ),
      3 => 
      array (
        'code' => 'FU',
        'name' => 'الفجيرة',
      ),
      4 => 
      array (
        'code' => 'SH',
        'name' => 'الشرقية',
      ),
      5 => 
      array (
        'code' => 'DU',
        'name' => 'دبي',
      ),
      6 => 
      array (
        'code' => 'RK',
        'name' => 'رأس الخيمة',
      ),
      7 => 
      array (
        'code' => 'UQ',
        'name' => 'أم القوين',
      ),
    ),
    'AF' => 
    array (
      1 => 
      array (
        'code' => 'BAL',
        'name' => 'بالخ',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'باميان',
      ),
      3 => 
      array (
        'code' => 'BDG',
        'name' => 'بادغيس',
      ),
      4 => 
      array (
        'code' => 'BDS',
        'name' => 'باداخشان',
      ),
      5 => 
      array (
        'code' => 'BGL',
        'name' => 'باغلان',
      ),
      6 => 
      array (
        'code' => 'FRA',
        'name' => 'فرح',
      ),
      7 => 
      array (
        'code' => 'FYB',
        'name' => 'فارياب',
      ),
      8 => 
      array (
        'code' => 'GHA',
        'name' => 'غازني',
      ),
      9 => 
      array (
        'code' => 'GHO',
        'name' => 'غور',
      ),
      10 => 
      array (
        'code' => 'HEL',
        'name' => 'هيلماند',
      ),
      11 => 
      array (
        'code' => 'HER',
        'name' => 'هيرات',
      ),
      12 => 
      array (
        'code' => 'JOW',
        'name' => 'جوزجان',
      ),
      13 => 
      array (
        'code' => 'KAB',
        'name' => 'كابول',
      ),
      14 => 
      array (
        'code' => 'KAN',
        'name' => 'قندهار',
      ),
      15 => 
      array (
        'code' => 'KAP',
        'name' => 'كابيسا',
      ),
      16 => 
      array (
        'code' => 'KDZ',
        'name' => 'كوندوز',
      ),
      17 => 
      array (
        'code' => 'KHO',
        'name' => 'خوست',
      ),
      18 => 
      array (
        'code' => 'KNR',
        'name' => 'كونار',
      ),
      19 => 
      array (
        'code' => 'LAG',
        'name' => 'لاغمان',
      ),
      20 => 
      array (
        'code' => 'LOW',
        'name' => 'لوجار',
      ),
      21 => 
      array (
        'code' => 'NAN',
        'name' => 'نانجراهار',
      ),
      22 => 
      array (
        'code' => 'NIM',
        'name' => 'نيمروز',
      ),
      23 => 
      array (
        'code' => 'NUR',
        'name' => 'نوريستان',
      ),
      24 => 
      array (
        'code' => 'ORU',
        'name' => 'أورزجان',
      ),
      25 => 
      array (
        'code' => 'PAR',
        'name' => 'باروان',
      ),
      26 => 
      array (
        'code' => 'PIA',
        'name' => 'باكتيا',
      ),
      27 => 
      array (
        'code' => 'PKA',
        'name' => 'باكتيكا',
      ),
      28 => 
      array (
        'code' => 'SAM',
        'name' => 'سامنجان',
      ),
      29 => 
      array (
        'code' => 'SAR',
        'name' => 'ساريبول',
      ),
      30 => 
      array (
        'code' => 'TAK',
        'name' => 'تاخار',
      ),
      31 => 
      array (
        'code' => 'WAR',
        'name' => 'ورداك',
      ),
      32 => 
      array (
        'code' => 'ZAB',
        'name' => 'زابول',
      ),
    ),
    'AI' => 
    array (
      1 => 
      array (
        'code' => 'ANG',
        'name' => 'أنجيليتا',
      ),
      2 => 
      array (
        'code' => 'ANG',
        'name' => 'أنجويلا',
      ),
      3 => 
      array (
        'code' => 'DOG',
        'name' => 'دوج',
      ),
      4 => 
      array (
        'code' => 'LIT',
        'name' => 'ليتل سكرب',
      ),
      5 => 
      array (
        'code' => 'PRI',
        'name' => 'بريكلي بيير',
      ),
      6 => 
      array (
        'code' => 'SAN',
        'name' => 'ساندي',
      ),
      7 => 
      array (
        'code' => 'SCR',
        'name' => 'سكرب',
      ),
      8 => 
      array (
        'code' => 'SEA',
        'name' => 'سيل',
      ),
      9 => 
      array (
        'code' => 'SOM',
        'name' => 'سومبريرو',
      ),
    ),
    'AL' => 
    array (
      1 => 
      array (
        'code' => 'BR',
        'name' => 'بيرات',
      ),
      2 => 
      array (
        'code' => 'BU',
        'name' => 'بلقيز',
      ),
      3 => 
      array (
        'code' => 'DI',
        'name' => 'ديبار',
      ),
      4 => 
      array (
        'code' => 'DL',
        'name' => 'ديلفين',
      ),
      5 => 
      array (
        'code' => 'DR',
        'name' => 'دوريس',
      ),
      6 => 
      array (
        'code' => 'DV',
        'name' => 'ديفول',
      ),
      7 => 
      array (
        'code' => 'EL',
        'name' => 'البسان',
      ),
      8 => 
      array (
        'code' => 'ER',
        'name' => 'كولونجي',
      ),
      9 => 
      array (
        'code' => 'FR',
        'name' => 'فير',
      ),
      10 => 
      array (
        'code' => 'GJ',
        'name' => 'جيروكاستير',
      ),
      11 => 
      array (
        'code' => 'GR',
        'name' => 'جرامش',
      ),
      12 => 
      array (
        'code' => 'HA',
        'name' => 'هاس',
      ),
      13 => 
      array (
        'code' => 'KA',
        'name' => 'كافاجي',
      ),
      14 => 
      array (
        'code' => 'KB',
        'name' => 'كوربين',
      ),
      15 => 
      array (
        'code' => 'KC',
        'name' => 'كوكوف',
      ),
      16 => 
      array (
        'code' => 'KO',
        'name' => 'كورس',
      ),
      17 => 
      array (
        'code' => 'KR',
        'name' => 'كروجي',
      ),
      18 => 
      array (
        'code' => 'KU',
        'name' => 'كوكس',
      ),
      19 => 
      array (
        'code' => 'LB',
        'name' => 'ليبرازد',
      ),
      20 => 
      array (
        'code' => 'LE',
        'name' => 'ليزهي',
      ),
      21 => 
      array (
        'code' => 'LU',
        'name' => 'لوشنجي',
      ),
      22 => 
      array (
        'code' => 'MK',
        'name' => 'مالاكستر',
      ),
      23 => 
      array (
        'code' => 'MM',
        'name' => 'ماليسي إي مادهي',
      ),
      24 => 
      array (
        'code' => 'MR',
        'name' => 'ميرديت',
      ),
      25 => 
      array (
        'code' => 'MT',
        'name' => 'مات',
      ),
      26 => 
      array (
        'code' => 'PG',
        'name' => 'بوجراديك',
      ),
      27 => 
      array (
        'code' => 'PQ',
        'name' => 'بيكين',
      ),
      28 => 
      array (
        'code' => 'PR',
        'name' => 'بيرميت',
      ),
      29 => 
      array (
        'code' => 'PU',
        'name' => 'بوكي',
      ),
      30 => 
      array (
        'code' => 'SH',
        'name' => 'شكودر',
      ),
      31 => 
      array (
        'code' => 'SK',
        'name' => 'سكرابر',
      ),
      32 => 
      array (
        'code' => 'SR',
        'name' => 'ساراندي',
      ),
      33 => 
      array (
        'code' => 'TE',
        'name' => 'تيبلين',
      ),
      34 => 
      array (
        'code' => 'TP',
        'name' => 'تروبوجي',
      ),
      35 => 
      array (
        'code' => 'TR',
        'name' => 'تيرانا',
      ),
      36 => 
      array (
        'code' => 'VL',
        'name' => 'فلور',
      ),
    ),
    'AM' => 
    array (
      1 => 
      array (
        'code' => 'AGT',
        'name' => 'اراجاتسوتن',
      ),
      2 => 
      array (
        'code' => 'ARR',
        'name' => 'أرارات',
      ),
      3 => 
      array (
        'code' => 'ARM',
        'name' => 'أرمافير',
      ),
      4 => 
      array (
        'code' => 'GEG',
        'name' => 'جيغارك "يونيك"',
      ),
      5 => 
      array (
        'code' => 'KOT',
        'name' => 'كوتايك',
      ),
      6 => 
      array (
        'code' => 'LOR',
        'name' => 'لوري',
      ),
      7 => 
      array (
        'code' => 'SHI',
        'name' => 'شيراك',
      ),
      8 => 
      array (
        'code' => 'SYU',
        'name' => 'سيونيك',
      ),
      9 => 
      array (
        'code' => 'TAV',
        'name' => 'تافوش',
      ),
      10 => 
      array (
        'code' => 'VAY',
        'name' => 'فايوت دزور',
      ),
      11 => 
      array (
        'code' => 'YER',
        'name' => 'يريفان',
      ),
    ),
    'AN' => 
    array (
      1 => 
      array (
        'code' => 'BON',
        'name' => 'بنواير',
      ),
      2 => 
      array (
        'code' => 'CUR',
        'name' => 'كوراكوكوراكو',
      ),
      3 => 
      array (
        'code' => 'SAB',
        'name' => 'سابا',
      ),
      4 => 
      array (
        'code' => 'SEU',
        'name' => 'سانت اوستاتيوس',
      ),
      5 => 
      array (
        'code' => 'SMA',
        'name' => 'سنت مارتين',
      ),
    ),
    'AO' => 
    array (
      1 => 
      array (
        'code' => 'BGO',
        'name' => 'بينجو',
      ),
      2 => 
      array (
        'code' => 'BGU',
        'name' => 'بينجيلا',
      ),
      3 => 
      array (
        'code' => 'BIE',
        'name' => 'Bie',
      ),
      4 => 
      array (
        'code' => 'CAB',
        'name' => 'كابيندا',
      ),
      5 => 
      array (
        'code' => 'CCU',
        'name' => 'كواندو كوبانجو',
      ),
      6 => 
      array (
        'code' => 'CNO',
        'name' => 'كوانزا نورت',
      ),
      7 => 
      array (
        'code' => 'CUS',
        'name' => 'كوانزا سول',
      ),
      8 => 
      array (
        'code' => 'CNN',
        'name' => 'كونين',
      ),
      9 => 
      array (
        'code' => 'HUA',
        'name' => 'هوامبو',
      ),
      10 => 
      array (
        'code' => 'HUI',
        'name' => 'هويلا',
      ),
      11 => 
      array (
        'code' => 'LUA',
        'name' => 'لواندا',
      ),
      12 => 
      array (
        'code' => 'LNO',
        'name' => 'لوندا نورت',
      ),
      13 => 
      array (
        'code' => 'LSU',
        'name' => 'لوندا سول',
      ),
      14 => 
      array (
        'code' => 'MAL',
        'name' => 'مالانج',
      ),
      15 => 
      array (
        'code' => 'MOX',
        'name' => 'ميكسيكو',
      ),
      16 => 
      array (
        'code' => 'NAM',
        'name' => 'ناميبي',
      ),
      17 => 
      array (
        'code' => 'UIG',
        'name' => 'ويجي',
      ),
      18 => 
      array (
        'code' => 'ZAI',
        'name' => 'زائير',
      ),
    ),
    'AQ' => 
    array (
      1 => 
      array (
        'code' => 'ASG',
        'name' => 'سانت جورج',
      ),
      2 => 
      array (
        'code' => 'ASH',
        'name' => 'سانت فيليب',
      ),
      3 => 
      array (
        'code' => 'ASJ',
        'name' => 'سانت جون',
      ),
      4 => 
      array (
        'code' => 'ASL',
        'name' => 'سانت بول',
      ),
      5 => 
      array (
        'code' => 'ASM',
        'name' => 'سانت ماري',
      ),
      6 => 
      array (
        'code' => 'ASR',
        'name' => 'سانت بيتر',
      ),
      7 => 
      array (
        'code' => 'BAR',
        'name' => 'باربودا',
      ),
      8 => 
      array (
        'code' => 'RED',
        'name' => 'ريدوندا',
      ),
    ),
    'AR' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'أنتارتيدا وجزر المحيط الأطلنطي',
      ),
      2 => 
      array (
        'code' => 'BA',
        'name' => 'بوينس آيرس',
      ),
      3 => 
      array (
        'code' => 'CA',
        'name' => 'كاتاماركا',
      ),
      4 => 
      array (
        'code' => 'CH',
        'name' => 'شاكو',
      ),
      5 => 
      array (
        'code' => 'CU',
        'name' => 'شوبوت',
      ),
      6 => 
      array (
        'code' => 'CO',
        'name' => 'قرطبة',
      ),
      7 => 
      array (
        'code' => 'CR',
        'name' => 'كورينتيس',
      ),
      8 => 
      array (
        'code' => 'CF',
        'name' => 'كابيتال فيديرال',
      ),
      9 => 
      array (
        'code' => 'ER',
        'name' => 'انتري ريوس',
      ),
      10 => 
      array (
        'code' => 'FO',
        'name' => 'فورموسا',
      ),
      11 => 
      array (
        'code' => 'JU',
        'name' => 'جوجواي',
      ),
      12 => 
      array (
        'code' => 'LP',
        'name' => 'لابامبا',
      ),
      13 => 
      array (
        'code' => 'LR',
        'name' => 'لا ريوجا',
      ),
      14 => 
      array (
        'code' => 'ME',
        'name' => 'ميندوزا',
      ),
      15 => 
      array (
        'code' => 'MI',
        'name' => 'مييونز',
      ),
      16 => 
      array (
        'code' => 'NE',
        'name' => 'نيوكوين',
      ),
      17 => 
      array (
        'code' => 'RN',
        'name' => 'ريو نيجرو',
      ),
      18 => 
      array (
        'code' => 'SA',
        'name' => 'سالتا',
      ),
      19 => 
      array (
        'code' => 'SJ',
        'name' => 'سان خوان',
      ),
      20 => 
      array (
        'code' => 'SL',
        'name' => 'سان لويس',
      ),
      21 => 
      array (
        'code' => 'SC',
        'name' => 'سانتا كروز',
      ),
      22 => 
      array (
        'code' => 'SF',
        'name' => 'سانتا في',
      ),
      23 => 
      array (
        'code' => 'SD',
        'name' => 'سانتياجو دي استيرو',
      ),
      24 => 
      array (
        'code' => 'TF',
        'name' => 'تيرا ديل فيجو',
      ),
      25 => 
      array (
        'code' => 'TU',
        'name' => 'توكومان',
      ),
    ),
    'AS' => 
    array (
      1 => 
      array (
        'code' => 'E',
        'name' => 'إيسترن',
      ),
      2 => 
      array (
        'code' => 'M',
        'name' => 'مانوا',
      ),
      3 => 
      array (
        'code' => 'R',
        'name' => 'روز آيلاند',
      ),
      4 => 
      array (
        'code' => 'S',
        'name' => 'جزر سواينز',
      ),
      5 => 
      array (
        'code' => 'W',
        'name' => 'الغربية',
      ),
    ),
    'AT' => 
    array (
      1 => 
      array (
        'code' => 'BUR',
        'name' => 'بورجنلاند',
      ),
      2 => 
      array (
        'code' => 'KAR',
        'name' => 'كرنتن',
      ),
      3 => 
      array (
        'code' => 'NOS',
        'name' => 'نيديروستريش',
      ),
      4 => 
      array (
        'code' => 'OOS',
        'name' => 'أوبيروستوريش',
      ),
      5 => 
      array (
        'code' => 'SAL',
        'name' => 'سالزبروج',
      ),
      6 => 
      array (
        'code' => 'STE',
        'name' => 'ستيرمارك',
      ),
      7 => 
      array (
        'code' => 'TIR',
        'name' => 'تيرول',
      ),
      8 => 
      array (
        'code' => 'VOR',
        'name' => 'فورارلبرج',
      ),
      9 => 
      array (
        'code' => 'WIE',
        'name' => 'وين',
      ),
    ),
    'AU' => 
    array (
      1 => 
      array (
        'code' => 'ACT',
        'name' => 'إقليم كابيتال الاسترالي',
      ),
      2 => 
      array (
        'code' => 'NSW',
        'name' => 'نيوساوث ويلز',
      ),
      3 => 
      array (
        'code' => 'Nt',
        'name' => 'الإقليم الشمالي',
      ),
      4 => 
      array (
        'code' => 'QLD',
        'name' => 'كوينزلاند',
      ),
      5 => 
      array (
        'code' => 'SA',
        'name' => 'أستراليا الجنوبية',
      ),
      6 => 
      array (
        'code' => 'TAS',
        'name' => 'تسمانيا',
      ),
      7 => 
      array (
        'code' => 'VIC',
        'name' => 'فيكتوريا',
      ),
      8 => 
      array (
        'code' => 'WA',
        'name' => 'أستراليا الغربية',
      ),
    ),
    'AW' => 
    array (
      1 => 
      array (
        'code' => 'ARU',
        'name' => 'أروبا',
      ),
      2 => 
      array (
        'code' => 'DRU',
        'name' => 'شاطئ دريف',
      ),
      3 => 
      array (
        'code' => 'MAN',
        'name' => 'شاطئ مانشيبو',
      ),
      4 => 
      array (
        'code' => 'NOO',
        'name' => 'نورد',
      ),
      5 => 
      array (
        'code' => 'ORA',
        'name' => 'أورانجيستاد',
      ),
      6 => 
      array (
        'code' => 'PAL',
        'name' => 'شاطئ النخيل',
      ),
      7 => 
      array (
        'code' => 'ROO',
        'name' => 'روي توماس',
      ),
      8 => 
      array (
        'code' => 'SIN',
        'name' => 'سانت نيكولاس',
      ),
      9 => 
      array (
        'code' => 'SIN',
        'name' => 'سانت نيكولاس',
      ),
      10 => 
      array (
        'code' => 'WAY',
        'name' => 'واياكا',
      ),
    ),
    'AZ' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'علي باي راملي',
      ),
      2 => 
      array (
        'code' => 'ABS',
        'name' => 'أبسيرون',
      ),
      3 => 
      array (
        'code' => 'AGC',
        'name' => 'أجابادي',
      ),
      4 => 
      array (
        'code' => 'AGM',
        'name' => 'أجدام',
      ),
      5 => 
      array (
        'code' => 'AGS',
        'name' => 'أجداس',
      ),
      6 => 
      array (
        'code' => 'AGA',
        'name' => 'أجستافا',
      ),
      7 => 
      array (
        'code' => 'AGU',
        'name' => 'أجسو',
      ),
      8 => 
      array (
        'code' => 'AST',
        'name' => 'استارا',
      ),
      9 => 
      array (
        'code' => 'BA',
        'name' => 'باكي',
      ),
      10 => 
      array (
        'code' => 'BAB',
        'name' => 'باباك',
      ),
      11 => 
      array (
        'code' => 'BAL',
        'name' => 'بلقان',
      ),
      12 => 
      array (
        'code' => 'BAR',
        'name' => 'باردا',
      ),
      13 => 
      array (
        'code' => 'BEY',
        'name' => 'بيلاقان',
      ),
      14 => 
      array (
        'code' => 'BIL',
        'name' => 'بيلاسوفار',
      ),
      15 => 
      array (
        'code' => 'CAB',
        'name' => 'كابرايل',
      ),
      16 => 
      array (
        'code' => 'CAL',
        'name' => 'كاليلاباب',
      ),
      17 => 
      array (
        'code' => 'CUL',
        'name' => 'كولفا',
      ),
      18 => 
      array (
        'code' => 'DAS',
        'name' => 'داسكاسان',
      ),
      19 => 
      array (
        'code' => 'DAV',
        'name' => 'دافاسي',
      ),
      20 => 
      array (
        'code' => 'FUZ',
        'name' => 'فوزولي',
      ),
      21 => 
      array (
        'code' => 'GA',
        'name' => 'جانكا',
      ),
      22 => 
      array (
        'code' => 'GAD',
        'name' => 'جاداباي',
      ),
      23 => 
      array (
        'code' => 'GOR',
        'name' => 'جورانبوي',
      ),
      24 => 
      array (
        'code' => 'GOY',
        'name' => 'جويكاي',
      ),
      25 => 
      array (
        'code' => 'HAC',
        'name' => 'هاسيكابول',
      ),
      26 => 
      array (
        'code' => 'IMI',
        'name' => 'إيمسلي',
      ),
      27 => 
      array (
        'code' => 'ISM',
        'name' => 'إسماعيلي',
      ),
      28 => 
      array (
        'code' => 'KAL',
        'name' => 'كاباكار',
      ),
      29 => 
      array (
        'code' => 'KUR',
        'name' => 'كوردامير',
      ),
      30 => 
      array (
        'code' => 'LA',
        'name' => 'لانكاران',
      ),
      31 => 
      array (
        'code' => 'LAC',
        'name' => 'لاسين',
      ),
      32 => 
      array (
        'code' => 'LAN',
        'name' => 'لانكاران',
      ),
      33 => 
      array (
        'code' => 'LER',
        'name' => 'ليرك',
      ),
      34 => 
      array (
        'code' => 'MAS',
        'name' => 'ماسالي',
      ),
      35 => 
      array (
        'code' => 'MI',
        'name' => 'مينجاسيفير',
      ),
      36 => 
      array (
        'code' => 'NA',
        'name' => 'نافتالان',
      ),
      37 => 
      array (
        'code' => 'NX',
        'name' => 'ناكسيفان',
      ),
      38 => 
      array (
        'code' => 'NEF',
        'name' => 'نيفتكالا',
      ),
      39 => 
      array (
        'code' => 'OGU',
        'name' => 'أوجوز',
      ),
      40 => 
      array (
        'code' => 'ORD',
        'name' => 'أوردوباد',
      ),
      41 => 
      array (
        'code' => 'QAB',
        'name' => 'كابالا',
      ),
      42 => 
      array (
        'code' => 'QAX',
        'name' => 'كاكس',
      ),
      43 => 
      array (
        'code' => 'QAZ',
        'name' => 'كازاكس',
      ),
      44 => 
      array (
        'code' => 'QOB',
        'name' => 'كوبوستان',
      ),
      45 => 
      array (
        'code' => 'QBA',
        'name' => 'كوبا',
      ),
      46 => 
      array (
        'code' => 'QBI',
        'name' => 'كوبدالي',
      ),
      47 => 
      array (
        'code' => 'QUS',
        'name' => 'كوسار',
      ),
      48 => 
      array (
        'code' => 'SA',
        'name' => 'ساكي',
      ),
      49 => 
      array (
        'code' => 'SAT',
        'name' => 'ساتلي',
      ),
      50 => 
      array (
        'code' => 'SAB',
        'name' => 'سابيرباد',
      ),
      51 => 
      array (
        'code' => 'SAD',
        'name' => 'سادراك',
      ),
      52 => 
      array (
        'code' => 'SAH',
        'name' => 'ساهبوز',
      ),
      53 => 
      array (
        'code' => 'SAK',
        'name' => 'ساكي',
      ),
      54 => 
      array (
        'code' => 'SAL',
        'name' => 'ساليان',
      ),
      55 => 
      array (
        'code' => 'SM',
        'name' => 'سومكايات',
      ),
      56 => 
      array (
        'code' => 'SMI',
        'name' => 'ساماكسي',
      ),
      57 => 
      array (
        'code' => 'SKR',
        'name' => 'سامكر',
      ),
      58 => 
      array (
        'code' => 'SMX',
        'name' => 'ساموكس',
      ),
      59 => 
      array (
        'code' => 'SAR',
        'name' => 'سارور',
      ),
      60 => 
      array (
        'code' => 'SIY',
        'name' => 'سيازان',
      ),
      61 => 
      array (
        'code' => 'SS',
        'name' => 'سوسة',
      ),
      62 => 
      array (
        'code' => 'SUS',
        'name' => 'سوسة',
      ),
      63 => 
      array (
        'code' => 'TAR',
        'name' => 'تارتر',
      ),
      64 => 
      array (
        'code' => 'TOV',
        'name' => 'توفوز',
      ),
      65 => 
      array (
        'code' => 'UCA',
        'name' => 'أوكار',
      ),
      66 => 
      array (
        'code' => 'XA',
        'name' => 'زانكاندي',
      ),
      67 => 
      array (
        'code' => 'XAC',
        'name' => 'زاكماز',
      ),
      68 => 
      array (
        'code' => 'XAN',
        'name' => 'زانلار',
      ),
      69 => 
      array (
        'code' => 'XIZ',
        'name' => 'سيزي',
      ),
      70 => 
      array (
        'code' => 'XCI',
        'name' => 'زوكالي',
      ),
      71 => 
      array (
        'code' => 'XVD',
        'name' => 'زوكافاند',
      ),
      72 => 
      array (
        'code' => 'YAR',
        'name' => 'ياردميلي',
      ),
      73 => 
      array (
        'code' => 'YEV',
        'name' => 'يفلاكس',
      ),
      74 => 
      array (
        'code' => 'ZAN',
        'name' => 'زانجيلان',
      ),
      75 => 
      array (
        'code' => 'ZAQ',
        'name' => 'زاكاتالا',
      ),
      76 => 
      array (
        'code' => 'ZAR',
        'name' => 'زارداب',
      ),
    ),
    'BA' => 
    array (
      1 => 
      array (
        'code' => 'BRO',
        'name' => 'مقاطعة بريكو',
      ),
      2 => 
      array (
        'code' => 'FBP',
        'name' => 'بوسانسكوبودرينكسي كانتون',
      ),
      3 => 
      array (
        'code' => 'FHN',
        'name' => 'هيركي جوفاكو نيريتانسكي كانتون',
      ),
      4 => 
      array (
        'code' => 'FPO',
        'name' => 'بوسافسكي كانتون',
      ),
      5 => 
      array (
        'code' => 'FSA',
        'name' => 'كانتون سراييفو',
      ),
      6 => 
      array (
        'code' => 'FSB',
        'name' => 'سريدني بوسانسكي كانتون',
      ),
      7 => 
      array (
        'code' => 'FTU',
        'name' => 'توزلانسكي كانتون',
      ),
      8 => 
      array (
        'code' => 'FUS',
        'name' => 'أونسكو سانسكي كانتون',
      ),
      9 => 
      array (
        'code' => 'FZA',
        'name' => 'زابادنوبوسانسكا',
      ),
      10 => 
      array (
        'code' => 'FZE',
        'name' => 'زينيكو دوبوسكي كانتون',
      ),
      11 => 
      array (
        'code' => 'FZH',
        'name' => 'زابادهيركجوفاكا زوبانيجا',
      ),
      12 => 
      array (
        'code' => 'SBI',
        'name' => 'بيجيليينجا',
      ),
      13 => 
      array (
        'code' => 'SBL',
        'name' => 'بانجا لوكا',
      ),
      14 => 
      array (
        'code' => 'SDO',
        'name' => 'دوبوي',
      ),
      15 => 
      array (
        'code' => 'SFO',
        'name' => 'فوكا',
      ),
      16 => 
      array (
        'code' => 'SSR',
        'name' => 'سراييفو رومانيا أو سوكولاك',
      ),
      17 => 
      array (
        'code' => 'STR',
        'name' => 'تريبيني',
      ),
      18 => 
      array (
        'code' => 'SVL',
        'name' => 'فلاسينكا',
      ),
    ),
    'BB' => 
    array (
      1 => 
      array (
        'code' => 'CC',
        'name' => 'كريست شيرش',
      ),
      2 => 
      array (
        'code' => 'AND',
        'name' => 'سانت آندرو',
      ),
      3 => 
      array (
        'code' => 'GEO',
        'name' => 'سانت جورج',
      ),
      4 => 
      array (
        'code' => 'JAM',
        'name' => 'سانت جيمس',
      ),
      5 => 
      array (
        'code' => 'JOH',
        'name' => 'سانت جون',
      ),
      6 => 
      array (
        'code' => 'JOS',
        'name' => 'سانت جوزيف',
      ),
      7 => 
      array (
        'code' => 'LUC',
        'name' => 'سانت لوسي',
      ),
      8 => 
      array (
        'code' => 'MIC',
        'name' => 'سانت ميشيل',
      ),
      9 => 
      array (
        'code' => 'PET',
        'name' => 'سانت بيتر',
      ),
      10 => 
      array (
        'code' => 'PHI',
        'name' => 'سانت فيليب',
      ),
      11 => 
      array (
        'code' => 'THO',
        'name' => 'سانت توماس',
      ),
    ),
    'BD' => 
    array (
      1 => 
      array (
        'code' => 'BAR',
        'name' => 'باريسال',
      ),
      2 => 
      array (
        'code' => 'CHI',
        'name' => 'شيتاجونج',
      ),
      3 => 
      array (
        'code' => 'DHA',
        'name' => 'دكا',
      ),
      4 => 
      array (
        'code' => 'KHU',
        'name' => 'خولنا',
      ),
      5 => 
      array (
        'code' => 'RAJ',
        'name' => 'راج شاهي',
      ),
      6 => 
      array (
        'code' => 'SYL',
        'name' => 'سيلحت',
      ),
    ),
    'BE' => 
    array (
      1 => 
      array (
        'code' => 'VAN',
        'name' => 'انتويربن',
      ),
      2 => 
      array (
        'code' => 'WBR',
        'name' => 'باربانت والون',
      ),
      3 => 
      array (
        'code' => 'WHT',
        'name' => 'هاينوت',
      ),
      4 => 
      array (
        'code' => 'WLG',
        'name' => 'لييج',
      ),
      5 => 
      array (
        'code' => 'VLI',
        'name' => 'ليمبورج',
      ),
      6 => 
      array (
        'code' => 'WLX',
        'name' => 'لوكسمبورج',
      ),
      7 => 
      array (
        'code' => 'WNA',
        'name' => 'نامور',
      ),
      8 => 
      array (
        'code' => 'VOV',
        'name' => 'أوست فلانديرين',
      ),
      9 => 
      array (
        'code' => 'VBR',
        'name' => 'فيامس باربانت',
      ),
      10 => 
      array (
        'code' => 'VWV',
        'name' => 'فلاندرين الغربية',
      ),
    ),
    'BF' => 
    array (
      1 => 
      array (
        'code' => 'BAL',
        'name' => 'بالي',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'بام',
      ),
      3 => 
      array (
        'code' => 'BAN',
        'name' => 'بانوا',
      ),
      4 => 
      array (
        'code' => 'BAZ',
        'name' => 'بازيجا',
      ),
      5 => 
      array (
        'code' => 'BOR',
        'name' => 'بوجوريبا',
      ),
      6 => 
      array (
        'code' => 'BLG',
        'name' => 'بولجو',
      ),
      7 => 
      array (
        'code' => 'BOK',
        'name' => 'بولكيميد',
      ),
      8 => 
      array (
        'code' => 'COM',
        'name' => 'كومو',
      ),
      9 => 
      array (
        'code' => 'GAN',
        'name' => 'جانزورجو',
      ),
      10 => 
      array (
        'code' => 'GNA',
        'name' => 'جاجنا',
      ),
      11 => 
      array (
        'code' => 'GOU',
        'name' => 'جورما',
      ),
      12 => 
      array (
        'code' => 'HOU',
        'name' => 'هويت',
      ),
      13 => 
      array (
        'code' => 'IOA',
        'name' => 'لوبا',
      ),
      14 => 
      array (
        'code' => 'KAD',
        'name' => 'كاديجو',
      ),
      15 => 
      array (
        'code' => 'KEN',
        'name' => 'كينيدوجو',
      ),
      16 => 
      array (
        'code' => 'KOD',
        'name' => 'كوموندياري',
      ),
      17 => 
      array (
        'code' => 'KOP',
        'name' => 'كومبينجا',
      ),
      18 => 
      array (
        'code' => 'KOS',
        'name' => 'كووسي',
      ),
      19 => 
      array (
        'code' => 'KOL',
        'name' => 'كولبيلجو',
      ),
      20 => 
      array (
        'code' => 'KOT',
        'name' => 'كورتينجا',
      ),
      21 => 
      array (
        'code' => 'KOW',
        'name' => 'كورويجو',
      ),
      22 => 
      array (
        'code' => 'LER',
        'name' => 'ليرابا',
      ),
      23 => 
      array (
        'code' => 'LOR',
        'name' => 'لوروم',
      ),
      24 => 
      array (
        'code' => 'MOU',
        'name' => 'موهون',
      ),
      25 => 
      array (
        'code' => 'NAH',
        'name' => 'ناهوري',
      ),
      26 => 
      array (
        'code' => 'NAM',
        'name' => 'نامينتينجا',
      ),
      27 => 
      array (
        'code' => 'NAY',
        'name' => 'نايالا',
      ),
      28 => 
      array (
        'code' => 'NOU',
        'name' => 'نومبيل',
      ),
      29 => 
      array (
        'code' => 'OUB',
        'name' => 'أوبريتينجا',
      ),
      30 => 
      array (
        'code' => 'OUD',
        'name' => 'أودالان',
      ),
      31 => 
      array (
        'code' => 'PAS',
        'name' => 'باسوري',
      ),
      32 => 
      array (
        'code' => 'PON',
        'name' => 'بوني',
      ),
      33 => 
      array (
        'code' => 'SAG',
        'name' => 'سانجي',
      ),
      34 => 
      array (
        'code' => 'SAM',
        'name' => 'سانماتينجا',
      ),
      35 => 
      array (
        'code' => 'SEN',
        'name' => 'سينو',
      ),
      36 => 
      array (
        'code' => 'SIS',
        'name' => 'سيسيلي',
      ),
      37 => 
      array (
        'code' => 'SOM',
        'name' => 'سوم',
      ),
      38 => 
      array (
        'code' => 'SOR',
        'name' => 'سورو',
      ),
      39 => 
      array (
        'code' => 'TAP',
        'name' => 'تابوا',
      ),
      40 => 
      array (
        'code' => 'TUY',
        'name' => 'توي',
      ),
      41 => 
      array (
        'code' => 'YAG',
        'name' => 'ياغا',
      ),
      42 => 
      array (
        'code' => 'YAT',
        'name' => 'ياتينجا',
      ),
      43 => 
      array (
        'code' => 'ZIR',
        'name' => 'زيرو',
      ),
      44 => 
      array (
        'code' => 'ZOD',
        'name' => 'زوندوما',
      ),
      45 => 
      array (
        'code' => 'ZOW',
        'name' => 'زوندويوجو',
      ),
    ),
    'BG' => 
    array (
      1 => 
      array (
        'code' => 'BG-01',
        'name' => 'بلاجوإيفجراد',
      ),
      2 => 
      array (
        'code' => 'BG-02',
        'name' => 'بورجاس',
      ),
      3 => 
      array (
        'code' => 'BG-03',
        'name' => 'دوبريش',
      ),
      4 => 
      array (
        'code' => 'BG-04',
        'name' => 'جابروفو',
      ),
      5 => 
      array (
        'code' => 'BG-05',
        'name' => 'هاسكوفو',
      ),
      6 => 
      array (
        'code' => 'BG-06',
        'name' => 'كارديالي',
      ),
      7 => 
      array (
        'code' => 'BG-07',
        'name' => 'كيوستنديل',
      ),
      8 => 
      array (
        'code' => 'BG-08',
        'name' => 'لوفيك',
      ),
      9 => 
      array (
        'code' => 'BG-09',
        'name' => 'مونتانا',
      ),
      10 => 
      array (
        'code' => 'BG-10',
        'name' => 'بازارديك',
      ),
      11 => 
      array (
        'code' => 'BG-11',
        'name' => 'بيرنيك',
      ),
      12 => 
      array (
        'code' => 'BG-12',
        'name' => 'بليفين',
      ),
      13 => 
      array (
        'code' => 'BG-13',
        'name' => 'بلوفيديف',
      ),
      14 => 
      array (
        'code' => 'BG-14',
        'name' => 'رازجراد',
      ),
      15 => 
      array (
        'code' => 'BG-15',
        'name' => 'شومين',
      ),
      16 => 
      array (
        'code' => 'BG-16',
        'name' => 'سيليسترا',
      ),
      17 => 
      array (
        'code' => 'BG-17',
        'name' => 'سليفين',
      ),
      18 => 
      array (
        'code' => 'BG-18',
        'name' => 'سموليان',
      ),
      19 => 
      array (
        'code' => 'BG-19',
        'name' => 'صوفيا',
      ),
      20 => 
      array (
        'code' => 'BG-20',
        'name' => 'مدينة صوفيا',
      ),
      21 => 
      array (
        'code' => 'BG-21',
        'name' => 'ستارا زاجورا',
      ),
      22 => 
      array (
        'code' => 'BG-22',
        'name' => 'تارجوفيشت',
      ),
      23 => 
      array (
        'code' => 'BG-23',
        'name' => 'فارنا',
      ),
      24 => 
      array (
        'code' => 'BG-24',
        'name' => 'فيليكو تارنوفو',
      ),
      25 => 
      array (
        'code' => 'BG-25',
        'name' => 'فيدين',
      ),
      26 => 
      array (
        'code' => 'BG-26',
        'name' => 'فراتزا',
      ),
      27 => 
      array (
        'code' => 'BG-27',
        'name' => 'يامبول',
      ),
    ),
    'BH' => 
    array (
      1 => 
      array (
        'code' => 'CAP',
        'name' => 'كابيتال',
      ),
      2 => 
      array (
        'code' => 'CEN',
        'name' => 'سنترال',
      ),
      3 => 
      array (
        'code' => 'MUH',
        'name' => 'المحرق',
      ),
      4 => 
      array (
        'code' => 'NOR',
        'name' => 'الشمالية',
      ),
      5 => 
      array (
        'code' => 'SOU',
        'name' => 'الجنوبية',
      ),
    ),
    'BI' => 
    array (
      1 => 
      array (
        'code' => 'BB',
        'name' => 'بوبانزا',
      ),
      2 => 
      array (
        'code' => 'BJ',
        'name' => 'بوجمبورا',
      ),
      3 => 
      array (
        'code' => 'BR',
        'name' => 'بوروي',
      ),
      4 => 
      array (
        'code' => 'CA',
        'name' => 'كانكوزو',
      ),
      5 => 
      array (
        'code' => 'CI',
        'name' => 'سيبيتوكي',
      ),
      6 => 
      array (
        'code' => 'GI',
        'name' => 'جيتيجا',
      ),
      7 => 
      array (
        'code' => 'KR',
        'name' => 'كاروزي',
      ),
      8 => 
      array (
        'code' => 'KY',
        'name' => 'كايانزا',
      ),
      9 => 
      array (
        'code' => 'KI',
        'name' => 'كيروندو',
      ),
      10 => 
      array (
        'code' => 'MA',
        'name' => 'ماكمبا',
      ),
      11 => 
      array (
        'code' => 'MU',
        'name' => 'مورامفيا',
      ),
      12 => 
      array (
        'code' => 'MY',
        'name' => 'مويانجا',
      ),
      13 => 
      array (
        'code' => 'MW',
        'name' => 'موارو',
      ),
      14 => 
      array (
        'code' => 'NG',
        'name' => 'نجوزي',
      ),
      15 => 
      array (
        'code' => 'RT',
        'name' => 'روتانا',
      ),
      16 => 
      array (
        'code' => 'RY',
        'name' => 'رويجي',
      ),
    ),
    'BJ' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'اليبوري',
      ),
      2 => 
      array (
        'code' => 'AK',
        'name' => 'أتاكورا',
      ),
      3 => 
      array (
        'code' => 'AQ',
        'name' => 'أتلانتيك',
      ),
      4 => 
      array (
        'code' => 'BO',
        'name' => 'بورجو',
      ),
      5 => 
      array (
        'code' => 'CO',
        'name' => 'كولينز',
      ),
      6 => 
      array (
        'code' => 'DO',
        'name' => 'دونجا',
      ),
      7 => 
      array (
        'code' => 'KO',
        'name' => 'كوفو',
      ),
      8 => 
      array (
        'code' => 'LI',
        'name' => 'ليتورال',
      ),
      9 => 
      array (
        'code' => 'MO',
        'name' => 'مونو',
      ),
      10 => 
      array (
        'code' => 'OU',
        'name' => 'أويم',
      ),
      11 => 
      array (
        'code' => 'PL',
        'name' => 'بلاتو',
      ),
      12 => 
      array (
        'code' => 'ZO',
        'name' => 'زو',
      ),
    ),
    'BM' => 
    array (
      1 => 
      array (
        'code' => 'DS',
        'name' => 'ديفونشاير',
      ),
      2 => 
      array (
        'code' => 'HC',
        'name' => 'مدينة هاملتون',
      ),
      3 => 
      array (
        'code' => 'HA',
        'name' => 'هاملتون',
      ),
      4 => 
      array (
        'code' => 'PG',
        'name' => 'باجيت',
      ),
      5 => 
      array (
        'code' => 'PB',
        'name' => 'بيمبروك',
      ),
      6 => 
      array (
        'code' => 'GC',
        'name' => 'مدينة سانت جورج',
      ),
      7 => 
      array (
        'code' => 'SG',
        'name' => 'سانت جورج',
      ),
      8 => 
      array (
        'code' => 'SA',
        'name' => 'سانديز',
      ),
      9 => 
      array (
        'code' => 'SM',
        'name' => 'سميثز',
      ),
      10 => 
      array (
        'code' => 'SH',
        'name' => 'ساوثمبتون',
      ),
      11 => 
      array (
        'code' => 'WA',
        'name' => 'وارويك',
      ),
    ),
    'BN' => 
    array (
      1 => 
      array (
        'code' => 'BEL',
        'name' => 'بيلات',
      ),
      2 => 
      array (
        'code' => 'BRM',
        'name' => 'بروناي وموارا',
      ),
      3 => 
      array (
        'code' => 'TEM',
        'name' => 'تيمبورونج',
      ),
      4 => 
      array (
        'code' => 'TUT',
        'name' => 'توتونج',
      ),
    ),
    'BO' => 
    array (
      1 => 
      array (
        'code' => 'BEN',
        'name' => 'بيني',
      ),
      2 => 
      array (
        'code' => 'CHU',
        'name' => 'شوكوساكا',
      ),
      3 => 
      array (
        'code' => 'COC',
        'name' => 'كوشابامبا',
      ),
      4 => 
      array (
        'code' => 'LPZ',
        'name' => 'لاباز',
      ),
      5 => 
      array (
        'code' => 'ORU',
        'name' => 'أورو',
      ),
      6 => 
      array (
        'code' => 'PAN',
        'name' => 'باندو',
      ),
      7 => 
      array (
        'code' => 'POT',
        'name' => 'بوتوسي',
      ),
      8 => 
      array (
        'code' => 'SCZ',
        'name' => 'سانتا كروز',
      ),
      9 => 
      array (
        'code' => 'TAR',
        'name' => 'تاريجا',
      ),
    ),
    'BR' => 
    array (
      1 => 
      array (
        'code' => 'AC',
        'name' => 'آكر',
      ),
      2 => 
      array (
        'code' => 'AL',
        'name' => 'ألاجواس',
      ),
      3 => 
      array (
        'code' => 'AP',
        'name' => 'أمابا',
      ),
      4 => 
      array (
        'code' => 'AM',
        'name' => 'أمازوناس',
      ),
      5 => 
      array (
        'code' => 'BA',
        'name' => 'باهيا',
      ),
      6 => 
      array (
        'code' => 'CE',
        'name' => 'سيرا',
      ),
      7 => 
      array (
        'code' => 'DF',
        'name' => 'مقاطعات فيدرالية',
      ),
      8 => 
      array (
        'code' => 'ES',
        'name' => 'إسبيريتو سانتو',
      ),
      9 => 
      array (
        'code' => 'GO',
        'name' => 'جوياس',
      ),
      10 => 
      array (
        'code' => 'MA',
        'name' => 'مارانهو',
      ),
      11 => 
      array (
        'code' => 'MT',
        'name' => 'ماتو جروسو',
      ),
      12 => 
      array (
        'code' => 'MS',
        'name' => 'ماتو جروسو دو سول',
      ),
      13 => 
      array (
        'code' => 'MG',
        'name' => 'ميناس جيراس',
      ),
      14 => 
      array (
        'code' => 'PA',
        'name' => 'بارا',
      ),
      15 => 
      array (
        'code' => 'PB',
        'name' => 'بارايبا',
      ),
      16 => 
      array (
        'code' => 'PR',
        'name' => 'بارانا',
      ),
      17 => 
      array (
        'code' => 'PE',
        'name' => 'بيرنامبوكو',
      ),
      18 => 
      array (
        'code' => 'PI',
        'name' => 'بياوي',
      ),
      19 => 
      array (
        'code' => 'RJ',
        'name' => 'ريو دي جانيرو',
      ),
      20 => 
      array (
        'code' => 'RN',
        'name' => 'ريو جراند دو نورت',
      ),
      21 => 
      array (
        'code' => 'RS',
        'name' => 'ريو جراند دو سول',
      ),
      22 => 
      array (
        'code' => 'RO',
        'name' => 'روندونيا',
      ),
      23 => 
      array (
        'code' => 'RR',
        'name' => 'رورايما',
      ),
      24 => 
      array (
        'code' => 'SC',
        'name' => 'سانتا كاترينا',
      ),
      25 => 
      array (
        'code' => 'SP',
        'name' => 'ساو باولو',
      ),
      26 => 
      array (
        'code' => 'SE',
        'name' => 'سريجيب',
      ),
      27 => 
      array (
        'code' => 'TO',
        'name' => 'توكانتينس',
      ),
    ),
    'BS' => 
    array (
      1 => 
      array (
        'code' => 'ACK',
        'name' => 'أكلينز',
      ),
      2 => 
      array (
        'code' => 'BER',
        'name' => 'جزر بيري',
      ),
      3 => 
      array (
        'code' => 'BIM',
        'name' => 'بيميني',
      ),
      4 => 
      array (
        'code' => 'BLK',
        'name' => 'بلاك بوينت',
      ),
      5 => 
      array (
        'code' => 'CAT',
        'name' => 'كات آيلاند',
      ),
      6 => 
      array (
        'code' => 'CAB',
        'name' => 'سينترال أباكو',
      ),
      7 => 
      array (
        'code' => 'CAN',
        'name' => 'سنترال أندرواس',
      ),
      8 => 
      array (
        'code' => 'CEL',
        'name' => 'سنترال إيليوثيرا',
      ),
      9 => 
      array (
        'code' => 'FRE',
        'name' => 'مدينة فريبورت',
      ),
      10 => 
      array (
        'code' => 'CRO',
        'name' => 'جزر كروكد',
      ),
      11 => 
      array (
        'code' => 'EGB',
        'name' => 'جراند باهاما الشرقية',
      ),
      12 => 
      array (
        'code' => 'EXU',
        'name' => 'إكسوما',
      ),
      13 => 
      array (
        'code' => 'GRD',
        'name' => 'جراند كاي',
      ),
      14 => 
      array (
        'code' => 'HAR',
        'name' => 'جزيرة هاربور',
      ),
      15 => 
      array (
        'code' => 'HOP',
        'name' => 'هوب تاون',
      ),
      16 => 
      array (
        'code' => 'INA',
        'name' => 'إناجوا',
      ),
      17 => 
      array (
        'code' => 'LNG',
        'name' => 'لونج آيلاند',
      ),
      18 => 
      array (
        'code' => 'MAN',
        'name' => 'مانجروف كاي',
      ),
      19 => 
      array (
        'code' => 'MAY',
        'name' => 'ماياجوانا',
      ),
      20 => 
      array (
        'code' => 'MOO',
        'name' => 'جزر موري',
      ),
      21 => 
      array (
        'code' => 'NAB',
        'name' => 'أباكو الشمالية',
      ),
      22 => 
      array (
        'code' => 'NAN',
        'name' => 'آندروس الشمالية',
      ),
      23 => 
      array (
        'code' => 'NEL',
        'name' => 'إليوثيرا الشمالية',
      ),
      24 => 
      array (
        'code' => 'RAG',
        'name' => 'راجد آيلاند',
      ),
      25 => 
      array (
        'code' => 'RUM',
        'name' => 'روم كاي',
      ),
      26 => 
      array (
        'code' => 'SAL',
        'name' => 'سان سلفادور',
      ),
      27 => 
      array (
        'code' => 'SAB',
        'name' => 'أباكو الجنوبية',
      ),
      28 => 
      array (
        'code' => 'SAN',
        'name' => 'آندروس الجنوبية',
      ),
      29 => 
      array (
        'code' => 'SEL',
        'name' => 'إليوثيرا الجنوبية',
      ),
      30 => 
      array (
        'code' => 'SWE',
        'name' => 'ويلز الإسبانية',
      ),
      31 => 
      array (
        'code' => 'WGB',
        'name' => 'جراند باهاما الغربية',
      ),
    ),
    'BT' => 
    array (
      1 => 
      array (
        'code' => 'BUM',
        'name' => 'بومثانج',
      ),
      2 => 
      array (
        'code' => 'CHU',
        'name' => 'شوخا',
      ),
      3 => 
      array (
        'code' => 'DAG',
        'name' => 'داجانا',
      ),
      4 => 
      array (
        'code' => 'GAS',
        'name' => 'جاسا',
      ),
      5 => 
      array (
        'code' => 'HAA',
        'name' => 'ها',
      ),
      6 => 
      array (
        'code' => 'LHU',
        'name' => 'لونتسي',
      ),
      7 => 
      array (
        'code' => 'MON',
        'name' => 'مونجار',
      ),
      8 => 
      array (
        'code' => 'PAR',
        'name' => 'بارو',
      ),
      9 => 
      array (
        'code' => 'PEM',
        'name' => 'بيماجاتشيل',
      ),
      10 => 
      array (
        'code' => 'PUN',
        'name' => 'باناخا',
      ),
      11 => 
      array (
        'code' => 'SJO',
        'name' => 'سامبدروب يونجخار',
      ),
      12 => 
      array (
        'code' => 'SAT',
        'name' => 'سامتس',
      ),
      13 => 
      array (
        'code' => 'SAR',
        'name' => 'ساربانج',
      ),
      14 => 
      array (
        'code' => 'THI',
        'name' => 'ثيمفو',
      ),
      15 => 
      array (
        'code' => 'TRG',
        'name' => 'تراشيجانج',
      ),
      16 => 
      array (
        'code' => 'TRY',
        'name' => 'تراشييانجست',
      ),
      17 => 
      array (
        'code' => 'TRO',
        'name' => 'ترونجسا',
      ),
      18 => 
      array (
        'code' => 'TSI',
        'name' => 'تيرانج',
      ),
      19 => 
      array (
        'code' => 'WPH',
        'name' => 'وانجدو فودرانج',
      ),
      20 => 
      array (
        'code' => 'ZHE',
        'name' => 'زيمجانج',
      ),
    ),
    'BW' => 
    array (
      1 => 
      array (
        'code' => 'CE',
        'name' => 'سنترال',
      ),
      2 => 
      array (
        'code' => 'GH',
        'name' => 'غانزي',
      ),
      3 => 
      array (
        'code' => 'KD',
        'name' => 'كالاجادي',
      ),
      4 => 
      array (
        'code' => 'KT',
        'name' => 'جات لينج',
      ),
      5 => 
      array (
        'code' => 'KW',
        'name' => 'كوينيج',
      ),
      6 => 
      array (
        'code' => 'NG',
        'name' => 'جامي لاند',
      ),
      7 => 
      array (
        'code' => 'NE',
        'name' => 'الشمال الشرقي',
      ),
      8 => 
      array (
        'code' => 'NW',
        'name' => 'الشمال الغربي',
      ),
      9 => 
      array (
        'code' => 'SE',
        'name' => 'الجنوب الشرقي',
      ),
      10 => 
      array (
        'code' => 'SO',
        'name' => 'الجنوبية',
      ),
    ),
    'BY' => 
    array (
      1 => 
      array (
        'code' => 'BR',
        'name' => 'Brestskaya (Brest)',
      ),
      2 => 
      array (
        'code' => 'HO',
        'name' => 'Homyel\'skaya (Homyel\')',
      ),
      3 => 
      array (
        'code' => 'HM',
        'name' => 'هوراد مينسك',
      ),
      4 => 
      array (
        'code' => 'HR',
        'name' => 'Hrodzyenskaya (أردنا)',
      ),
      5 => 
      array (
        'code' => 'MA',
        'name' => 'Mahilyowskaya (ماهيليو)',
      ),
      6 => 
      array (
        'code' => 'MI',
        'name' => 'مينسكايا',
      ),
      7 => 
      array (
        'code' => 'VI',
        'name' => 'Vitsyebskaya (فيتسيبيسك)',
      ),
    ),
    'BZ' => 
    array (
      1 => 
      array (
        'code' => 'BZ',
        'name' => 'بيليز',
      ),
      2 => 
      array (
        'code' => 'CY',
        'name' => 'كايو',
      ),
      3 => 
      array (
        'code' => 'CR',
        'name' => 'كوروزال',
      ),
      4 => 
      array (
        'code' => 'OW',
        'name' => 'أورانج وولك',
      ),
      5 => 
      array (
        'code' => 'SC',
        'name' => 'ستان كريك',
      ),
      6 => 
      array (
        'code' => 'TO',
        'name' => 'توليدو',
      ),
    ),
    'CA' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'البيرتا',
      ),
      2 => 
      array (
        'code' => 'BC',
        'name' => 'بريتش كولومبيا',
      ),
      3 => 
      array (
        'code' => 'MB',
        'name' => 'مانيتوبا',
      ),
      4 => 
      array (
        'code' => 'NB',
        'name' => 'نيو برونسويك',
      ),
      5 => 
      array (
        'code' => 'NL',
        'name' => 'نيو فوندلاند ولبرادور',
      ),
      6 => 
      array (
        'code' => 'Nt',
        'name' => 'الأقاليم الشمالية الغربية',
      ),
      7 => 
      array (
        'code' => 'NS',
        'name' => 'نوفا سكوتيا',
      ),
      8 => 
      array (
        'code' => 'NU',
        'name' => 'نونافوت',
      ),
      9 => 
      array (
        'code' => 'ON',
        'name' => 'أونتاريو',
      ),
      10 => 
      array (
        'code' => 'PE',
        'name' => 'جزيرة الأمير إدوارد',
      ),
      11 => 
      array (
        'code' => 'QC',
        'name' => 'كيبيك',
      ),
      12 => 
      array (
        'code' => 'SK',
        'name' => 'ساسكا تشيوان',
      ),
      13 => 
      array (
        'code' => 'YT',
        'name' => 'إقليم يوكون',
      ),
    ),
    'CC' => 
    array (
      1 => 
      array (
        'code' => 'D',
        'name' => 'جزيرة دايركشن',
      ),
      2 => 
      array (
        'code' => 'H',
        'name' => 'الجزيرة الأم',
      ),
      3 => 
      array (
        'code' => 'O',
        'name' => 'جزيرة هوروسبيرج',
      ),
      4 => 
      array (
        'code' => 'S',
        'name' => 'ساوث آيلاند',
      ),
      5 => 
      array (
        'code' => 'W',
        'name' => 'ويست آيلاند',
      ),
    ),
    'CF' => 
    array (
      1 => 
      array (
        'code' => 'BAN',
        'name' => 'بانجوي',
      ),
      2 => 
      array (
        'code' => 'BBA',
        'name' => 'بامينيج بانجوران',
      ),
      3 => 
      array (
        'code' => 'BKO',
        'name' => 'باسي كوتو',
      ),
      4 => 
      array (
        'code' => 'HKO',
        'name' => 'هاوت كوتو',
      ),
      5 => 
      array (
        'code' => 'HMB',
        'name' => 'هاوت مبومو',
      ),
      6 => 
      array (
        'code' => 'KEM',
        'name' => 'كيمو',
      ),
      7 => 
      array (
        'code' => 'LOB',
        'name' => 'لوباي',
      ),
      8 => 
      array (
        'code' => 'MBO',
        'name' => 'موبومو',
      ),
      9 => 
      array (
        'code' => 'MKD',
        'name' => 'مامبيري كادي',
      ),
      10 => 
      array (
        'code' => 'NGR',
        'name' => 'نانا جريبيزي',
      ),
      11 => 
      array (
        'code' => 'NMM',
        'name' => 'نانا مامبيري',
      ),
      12 => 
      array (
        'code' => 'OMP',
        'name' => 'أومبيلا مبوكو',
      ),
      13 => 
      array (
        'code' => 'OPE',
        'name' => 'أوهام بيندي',
      ),
      14 => 
      array (
        'code' => 'OUH',
        'name' => 'أوهام',
      ),
      15 => 
      array (
        'code' => 'OUK',
        'name' => 'أواكا',
      ),
      16 => 
      array (
        'code' => 'SMB',
        'name' => 'سانغا مبايري',
      ),
      17 => 
      array (
        'code' => 'VAK',
        'name' => 'فاكاجا',
      ),
    ),
    'CG' => 
    array (
      1 => 
      array (
        'code' => 'BO',
        'name' => 'بوينزا',
      ),
      2 => 
      array (
        'code' => 'BR',
        'name' => 'برازافيل',
      ),
      3 => 
      array (
        'code' => 'CU',
        'name' => 'كوفيتي',
      ),
      4 => 
      array (
        'code' => 'CO',
        'name' => 'كوفيتي أويست',
      ),
      5 => 
      array (
        'code' => 'KO',
        'name' => 'كويلو',
      ),
      6 => 
      array (
        'code' => 'LE',
        'name' => 'ليكومو',
      ),
      7 => 
      array (
        'code' => 'LI',
        'name' => 'ليكوالا',
      ),
      8 => 
      array (
        'code' => 'NI',
        'name' => 'نياري',
      ),
      9 => 
      array (
        'code' => 'PL',
        'name' => 'بلاتوكس',
      ),
      10 => 
      array (
        'code' => 'PO',
        'name' => 'بوول',
      ),
      11 => 
      array (
        'code' => 'SA',
        'name' => 'سانغا',
      ),
    ),
    'CH' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'اراجو',
      ),
      2 => 
      array (
        'code' => 'AR',
        'name' => 'ابينزيل اوسيرهودن',
      ),
      3 => 
      array (
        'code' => 'AI',
        'name' => 'ابينزيل اينرهودن',
      ),
      4 => 
      array (
        'code' => 'BS',
        'name' => 'باسيل ستادت',
      ),
      5 => 
      array (
        'code' => 'BL',
        'name' => 'باسيل لاندسشافت',
      ),
      6 => 
      array (
        'code' => 'BE',
        'name' => 'بيرن',
      ),
      7 => 
      array (
        'code' => 'FR',
        'name' => 'فريبورج',
      ),
      8 => 
      array (
        'code' => 'GE',
        'name' => 'جينيف',
      ),
      9 => 
      array (
        'code' => 'GL',
        'name' => 'جلاروس',
      ),
      10 => 
      array (
        'code' => 'GR',
        'name' => 'جروبودين',
      ),
      11 => 
      array (
        'code' => 'JU',
        'name' => 'جورا',
      ),
      12 => 
      array (
        'code' => 'LU',
        'name' => 'لوسيرن',
      ),
      13 => 
      array (
        'code' => 'NE',
        'name' => 'نيوشاتل',
      ),
      14 => 
      array (
        'code' => 'NW',
        'name' => 'نيدوالدن',
      ),
      15 => 
      array (
        'code' => 'OW',
        'name' => 'أوبوالدين',
      ),
      16 => 
      array (
        'code' => 'SG',
        'name' => 'سانت جالن',
      ),
      17 => 
      array (
        'code' => 'SH',
        'name' => 'شافهاوزن',
      ),
      18 => 
      array (
        'code' => 'SZ',
        'name' => 'شويز',
      ),
      19 => 
      array (
        'code' => 'SO',
        'name' => 'سولوثورن',
      ),
      20 => 
      array (
        'code' => 'TG',
        'name' => 'ثوراجو',
      ),
      21 => 
      array (
        'code' => 'TI',
        'name' => 'تيسينو',
      ),
      22 => 
      array (
        'code' => 'UR',
        'name' => 'اوري',
      ),
      23 => 
      array (
        'code' => 'VS',
        'name' => 'فالايس',
      ),
      24 => 
      array (
        'code' => 'VD',
        'name' => 'فود',
      ),
      25 => 
      array (
        'code' => 'ZG',
        'name' => 'زوج',
      ),
      26 => 
      array (
        'code' => 'ZH',
        'name' => 'زيوريخ',
      ),
    ),
    'CI' => 
    array (
      1 => 
      array (
        'code' => 'ABE',
        'name' => 'ابينجورو',
      ),
      2 => 
      array (
        'code' => 'ABI',
        'name' => 'أبيدجان',
      ),
      3 => 
      array (
        'code' => 'ABO',
        'name' => 'أبوايسو',
      ),
      4 => 
      array (
        'code' => 'ADI',
        'name' => 'أدياك',
      ),
      5 => 
      array (
        'code' => 'ADZ',
        'name' => 'أدزوب',
      ),
      6 => 
      array (
        'code' => 'AGB',
        'name' => 'أجبوفيل',
      ),
      7 => 
      array (
        'code' => 'AGN',
        'name' => 'أجنيبيليكرو',
      ),
      8 => 
      array (
        'code' => 'ALE',
        'name' => 'أليب',
      ),
      9 => 
      array (
        'code' => 'BOC',
        'name' => 'بوكاندا',
      ),
      10 => 
      array (
        'code' => 'BAN',
        'name' => 'بانجولو',
      ),
      11 => 
      array (
        'code' => 'BEO',
        'name' => 'بيومي',
      ),
      12 => 
      array (
        'code' => 'BIA',
        'name' => 'بيانكوما',
      ),
      13 => 
      array (
        'code' => 'BDK',
        'name' => 'بنودوقو',
      ),
      14 => 
      array (
        'code' => 'BGN',
        'name' => 'بونجوانو',
      ),
      15 => 
      array (
        'code' => 'BFL',
        'name' => 'بوافل',
      ),
      16 => 
      array (
        'code' => 'BKE',
        'name' => 'بواكي',
      ),
      17 => 
      array (
        'code' => 'BNA',
        'name' => 'بونا',
      ),
      18 => 
      array (
        'code' => 'BDL',
        'name' => 'بونديالي',
      ),
      19 => 
      array (
        'code' => 'DKL',
        'name' => 'داباكالا',
      ),
      20 => 
      array (
        'code' => 'DBU',
        'name' => 'دابو',
      ),
      21 => 
      array (
        'code' => 'DAL',
        'name' => 'دالوا',
      ),
      22 => 
      array (
        'code' => 'DAN',
        'name' => 'دانان',
      ),
      23 => 
      array (
        'code' => 'DAO',
        'name' => 'داوكرو',
      ),
      24 => 
      array (
        'code' => 'DIM',
        'name' => 'ديمبوكرو',
      ),
      25 => 
      array (
        'code' => 'DIV',
        'name' => 'ديفو',
      ),
      26 => 
      array (
        'code' => 'DUE',
        'name' => 'ديوكو',
      ),
      27 => 
      array (
        'code' => 'FER',
        'name' => 'فيركسي دوجو',
      ),
      28 => 
      array (
        'code' => 'GAG',
        'name' => 'جاجنوا',
      ),
      29 => 
      array (
        'code' => 'GBA',
        'name' => 'جراند بسام',
      ),
      30 => 
      array (
        'code' => 'GLA',
        'name' => 'جراند لاهو',
      ),
      31 => 
      array (
        'code' => 'GUI',
        'name' => 'جويجلو',
      ),
      32 => 
      array (
        'code' => 'ISS',
        'name' => 'إيسيا',
      ),
      33 => 
      array (
        'code' => 'JAC',
        'name' => 'جاكيفيل',
      ),
      34 => 
      array (
        'code' => 'KAT',
        'name' => 'كاتيولا',
      ),
      35 => 
      array (
        'code' => 'KOR',
        'name' => 'كورهوجو',
      ),
      36 => 
      array (
        'code' => 'LAK',
        'name' => 'لاكوتا',
      ),
      37 => 
      array (
        'code' => 'MAN',
        'name' => 'مان',
      ),
      38 => 
      array (
        'code' => 'MKN',
        'name' => 'مانكونو',
      ),
      39 => 
      array (
        'code' => 'MBA',
        'name' => 'مباهياكرو',
      ),
      40 => 
      array (
        'code' => 'ODI',
        'name' => 'أوديني',
      ),
      41 => 
      array (
        'code' => 'OUM',
        'name' => 'أوم',
      ),
      42 => 
      array (
        'code' => 'SAK',
        'name' => 'ساكاسو',
      ),
      43 => 
      array (
        'code' => 'SPE',
        'name' => 'سان بيدرو',
      ),
      44 => 
      array (
        'code' => 'SAS',
        'name' => 'ساسندرا',
      ),
      45 => 
      array (
        'code' => 'SEG',
        'name' => 'سيجيلا',
      ),
      46 => 
      array (
        'code' => 'SIN',
        'name' => 'سينفرا',
      ),
      47 => 
      array (
        'code' => 'SOU',
        'name' => 'سوبر',
      ),
      48 => 
      array (
        'code' => 'TAB',
        'name' => 'تابو',
      ),
      49 => 
      array (
        'code' => 'TAN',
        'name' => 'تاندا',
      ),
      50 => 
      array (
        'code' => 'TIE',
        'name' => 'تيبيسو',
      ),
      51 => 
      array (
        'code' => 'TIN',
        'name' => 'تينجريلا',
      ),
      52 => 
      array (
        'code' => 'TIA',
        'name' => 'تياسالا',
      ),
      53 => 
      array (
        'code' => 'TBA',
        'name' => 'توبا',
      ),
      54 => 
      array (
        'code' => 'TLP',
        'name' => 'توليبليو',
      ),
      55 => 
      array (
        'code' => 'TMD',
        'name' => 'تومودي',
      ),
      56 => 
      array (
        'code' => 'VAV',
        'name' => 'فافولا',
      ),
      57 => 
      array (
        'code' => 'YAM',
        'name' => 'ياموسوكرو',
      ),
      58 => 
      array (
        'code' => 'ZUE',
        'name' => 'زيونولا',
      ),
    ),
    'CK' => 
    array (
      1 => 
      array (
        'code' => 'AI',
        'name' => 'ايتوتاكي',
      ),
      2 => 
      array (
        'code' => 'AT',
        'name' => 'اتيو',
      ),
      3 => 
      array (
        'code' => 'MA',
        'name' => 'مانواي',
      ),
      4 => 
      array (
        'code' => 'MG',
        'name' => 'مانجايا',
      ),
      5 => 
      array (
        'code' => 'MK',
        'name' => 'مانيهيكي',
      ),
      6 => 
      array (
        'code' => 'MT',
        'name' => 'ميتيارو',
      ),
      7 => 
      array (
        'code' => 'MU',
        'name' => 'ماوكي',
      ),
      8 => 
      array (
        'code' => 'NI',
        'name' => 'جزيرة ناساو',
      ),
      9 => 
      array (
        'code' => 'PA',
        'name' => 'بالميرستون',
      ),
      10 => 
      array (
        'code' => 'PE',
        'name' => 'بن رين',
      ),
      11 => 
      array (
        'code' => 'PU',
        'name' => 'بوكا بوكا',
      ),
      12 => 
      array (
        'code' => 'RK',
        'name' => 'راكاهنجا',
      ),
      13 => 
      array (
        'code' => 'RR',
        'name' => 'رارو تونجا',
      ),
      14 => 
      array (
        'code' => 'SU',
        'name' => 'سروارو',
      ),
      15 => 
      array (
        'code' => 'TA',
        'name' => 'تاكوتي',
      ),
    ),
    'CL' => 
    array (
      1 => 
      array (
        'code' => 'AI',
        'name' => 'آيسن ديل جنرال كارلوس إيبانيز',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'انتوفاجاستا',
      ),
      3 => 
      array (
        'code' => 'AR',
        'name' => 'أراكونيا',
      ),
      4 => 
      array (
        'code' => 'AT',
        'name' => 'أتاكاما',
      ),
      5 => 
      array (
        'code' => 'BI',
        'name' => 'بيو بيو',
      ),
      6 => 
      array (
        'code' => 'CO',
        'name' => 'كوكويمبو',
      ),
      7 => 
      array (
        'code' => 'LI',
        'name' => 'ليبرتادور جنرال برناردو أوهي',
      ),
      8 => 
      array (
        'code' => 'LL',
        'name' => 'لوس لاجوس',
      ),
      9 => 
      array (
        'code' => 'MA',
        'name' => 'ماجالانيس دي لا انتارتيكا شي',
      ),
      10 => 
      array (
        'code' => 'ML',
        'name' => 'ماولي',
      ),
      11 => 
      array (
        'code' => 'RM',
        'name' => 'إقليم ميتروبوليتان',
      ),
      12 => 
      array (
        'code' => 'TA',
        'name' => 'تاراباكا',
      ),
      13 => 
      array (
        'code' => 'VS',
        'name' => 'فالباراسيو',
      ),
    ),
    'CM' => 
    array (
      1 => 
      array (
        'code' => 'ADA',
        'name' => 'أداماوا (أداماوا)',
      ),
      2 => 
      array (
        'code' => 'CEN',
        'name' => 'سينتري',
      ),
      3 => 
      array (
        'code' => 'EST',
        'name' => 'الشرق (إيست)',
      ),
      4 => 
      array (
        'code' => 'EXN',
        'name' => 'اكستريم نورد',
      ),
      5 => 
      array (
        'code' => 'LIT',
        'name' => 'ليتورال',
      ),
      6 => 
      array (
        'code' => 'NOR',
        'name' => 'الشمال (نورد)',
      ),
      7 => 
      array (
        'code' => 'NOT',
        'name' => 'الشمال الغربي (نورد أويست)',
      ),
      8 => 
      array (
        'code' => 'OUE',
        'name' => 'الغرب (أويست)',
      ),
      9 => 
      array (
        'code' => 'SUD',
        'name' => 'الجنوب (سود)',
      ),
      10 => 
      array (
        'code' => 'SOU',
        'name' => 'الجنوب الغربي (سود أويست)',
      ),
    ),
    'CN' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'أنهوي',
      ),
      2 => 
      array (
        'code' => 'BE',
        'name' => 'بكين',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'شونجينج',
      ),
      4 => 
      array (
        'code' => 'FU',
        'name' => 'فوجيان',
      ),
      5 => 
      array (
        'code' => 'GA',
        'name' => 'جانزو',
      ),
      6 => 
      array (
        'code' => 'GU',
        'name' => 'جوانجدونج',
      ),
      7 => 
      array (
        'code' => 'GX',
        'name' => 'جوانجسي',
      ),
      8 => 
      array (
        'code' => 'GZ',
        'name' => 'جويزو',
      ),
      9 => 
      array (
        'code' => 'HA',
        'name' => 'هاينان',
      ),
      10 => 
      array (
        'code' => 'HB',
        'name' => 'هيبي',
      ),
      11 => 
      array (
        'code' => 'HL',
        'name' => 'هيليونج يانج',
      ),
      12 => 
      array (
        'code' => 'HE',
        'name' => 'هينان',
      ),
      13 => 
      array (
        'code' => 'HK',
        'name' => 'هونج كونج',
      ),
      14 => 
      array (
        'code' => 'HU',
        'name' => 'هوبي',
      ),
      15 => 
      array (
        'code' => 'HN',
        'name' => 'هونان',
      ),
      16 => 
      array (
        'code' => 'IM',
        'name' => 'منغوليا الداخلية',
      ),
      17 => 
      array (
        'code' => 'JI',
        'name' => 'جيانج سو',
      ),
      18 => 
      array (
        'code' => 'JX',
        'name' => 'جيانج سي',
      ),
      19 => 
      array (
        'code' => 'JL',
        'name' => 'جيلين',
      ),
      20 => 
      array (
        'code' => 'LI',
        'name' => 'لياونينج',
      ),
      21 => 
      array (
        'code' => 'MA',
        'name' => 'ماكاو',
      ),
      22 => 
      array (
        'code' => 'NI',
        'name' => 'نينجكسيا',
      ),
      23 => 
      array (
        'code' => 'SH',
        'name' => 'شانكسي',
      ),
      24 => 
      array (
        'code' => 'SA',
        'name' => 'شان دونج',
      ),
      25 => 
      array (
        'code' => 'SG',
        'name' => 'شنغهاي',
      ),
      26 => 
      array (
        'code' => 'SX',
        'name' => 'شانكسي',
      ),
      27 => 
      array (
        'code' => 'SI',
        'name' => 'سيشوان',
      ),
      28 => 
      array (
        'code' => 'TI',
        'name' => 'تيان جن',
      ),
      29 => 
      array (
        'code' => 'XI',
        'name' => 'زينج يانج',
      ),
      30 => 
      array (
        'code' => 'YU',
        'name' => 'يونان',
      ),
      31 => 
      array (
        'code' => 'ZH',
        'name' => 'زيانج',
      ),
    ),
    'CO' => 
    array (
      1 => 
      array (
        'code' => 'AMZ',
        'name' => 'أمازوناس',
      ),
      2 => 
      array (
        'code' => 'ANT',
        'name' => 'أنتيكويا',
      ),
      3 => 
      array (
        'code' => 'ARA',
        'name' => 'أراوكا',
      ),
      4 => 
      array (
        'code' => 'ATL',
        'name' => 'أتلانتيكو',
      ),
      5 => 
      array (
        'code' => 'BDC',
        'name' => 'بوجوتا دي سي',
      ),
      6 => 
      array (
        'code' => 'BOL',
        'name' => 'بوليفار',
      ),
      7 => 
      array (
        'code' => 'BOY',
        'name' => 'بوياكا',
      ),
      8 => 
      array (
        'code' => 'CAL',
        'name' => 'كالداس',
      ),
      9 => 
      array (
        'code' => 'CAQ',
        'name' => 'كاكويتا',
      ),
      10 => 
      array (
        'code' => 'CAS',
        'name' => 'كازاناري',
      ),
      11 => 
      array (
        'code' => 'CAU',
        'name' => 'كوكا',
      ),
      12 => 
      array (
        'code' => 'CES',
        'name' => 'سيزار',
      ),
      13 => 
      array (
        'code' => 'CHO',
        'name' => 'شوكو',
      ),
      14 => 
      array (
        'code' => 'COR',
        'name' => 'قرطبة',
      ),
      15 => 
      array (
        'code' => 'CAM',
        'name' => 'كونديناماركا',
      ),
      16 => 
      array (
        'code' => 'GNA',
        'name' => 'جواينيا',
      ),
      17 => 
      array (
        'code' => 'GJR',
        'name' => 'جوجيرا',
      ),
      18 => 
      array (
        'code' => 'GVR',
        'name' => 'جوافيار',
      ),
      19 => 
      array (
        'code' => 'HUI',
        'name' => 'هويلا',
      ),
      20 => 
      array (
        'code' => 'MAG',
        'name' => 'ماجدالينا',
      ),
      21 => 
      array (
        'code' => 'MET',
        'name' => 'ميتا',
      ),
      22 => 
      array (
        'code' => 'NAR',
        'name' => 'نارينو',
      ),
      23 => 
      array (
        'code' => 'NDS',
        'name' => 'نورت دي سانتاندير',
      ),
      24 => 
      array (
        'code' => 'PUT',
        'name' => 'بوتومايو',
      ),
      25 => 
      array (
        'code' => 'QUI',
        'name' => 'كوينديو',
      ),
      26 => 
      array (
        'code' => 'RIS',
        'name' => 'ريسارالدا',
      ),
      27 => 
      array (
        'code' => 'SAP',
        'name' => 'سان أندريس يي بروفيدنكا',
      ),
      28 => 
      array (
        'code' => 'SAN',
        'name' => 'سانتاندير',
      ),
      29 => 
      array (
        'code' => 'SUC',
        'name' => 'سوكري',
      ),
      30 => 
      array (
        'code' => 'TOL',
        'name' => 'توليما',
      ),
      31 => 
      array (
        'code' => 'VDC',
        'name' => 'فال دي كوكا',
      ),
      32 => 
      array (
        'code' => 'VAU',
        'name' => 'فوبوس',
      ),
      33 => 
      array (
        'code' => 'VIC',
        'name' => 'فيكادا',
      ),
    ),
    'CR' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'الاجويلا',
      ),
      2 => 
      array (
        'code' => 'CA',
        'name' => 'كارتاجو',
      ),
      3 => 
      array (
        'code' => 'GU',
        'name' => 'جواناكاستا',
      ),
      4 => 
      array (
        'code' => 'HE',
        'name' => 'هيريديا',
      ),
      5 => 
      array (
        'code' => 'LI',
        'name' => 'ليمون',
      ),
      6 => 
      array (
        'code' => 'PU',
        'name' => 'بنوتاريناس',
      ),
      7 => 
      array (
        'code' => 'SJ',
        'name' => 'سان جوسيه',
      ),
    ),
    'CU' => 
    array (
      1 => 
      array (
        'code' => 'CA',
        'name' => 'كاماجي',
      ),
      2 => 
      array (
        'code' => 'CD',
        'name' => 'سيجو دي افيلا',
      ),
      3 => 
      array (
        'code' => 'CI',
        'name' => 'سينفيوجوس',
      ),
      4 => 
      array (
        'code' => 'CH',
        'name' => 'سيوداد دي لا هابانا',
      ),
      5 => 
      array (
        'code' => 'GR',
        'name' => 'جرانما',
      ),
      6 => 
      array (
        'code' => 'GU',
        'name' => 'جوانتانامو',
      ),
      7 => 
      array (
        'code' => 'HO',
        'name' => 'هولجوين',
      ),
      8 => 
      array (
        'code' => 'IJ',
        'name' => 'ايسلا دي لا جوفينتد',
      ),
      9 => 
      array (
        'code' => 'LH',
        'name' => 'لا هابانا',
      ),
      10 => 
      array (
        'code' => 'LT',
        'name' => 'لاس توناس',
      ),
      11 => 
      array (
        'code' => 'MA',
        'name' => 'ماتاناز',
      ),
      12 => 
      array (
        'code' => 'PR',
        'name' => 'بينار ديلاريو',
      ),
      13 => 
      array (
        'code' => 'SS',
        'name' => 'سانكتي سبيريتوس',
      ),
      14 => 
      array (
        'code' => 'SC',
        'name' => 'سانتياجو دي كوبا',
      ),
      15 => 
      array (
        'code' => 'VC',
        'name' => 'فيلا كلارا',
      ),
    ),
    'CV' => 
    array (
      1 => 
      array (
        'code' => 'BV',
        'name' => 'بوا فيستا',
      ),
      2 => 
      array (
        'code' => 'BR',
        'name' => 'برافا',
      ),
      3 => 
      array (
        'code' => 'CS',
        'name' => 'كالهيتا دي أو ميجيل',
      ),
      4 => 
      array (
        'code' => 'MA',
        'name' => 'مايو',
      ),
      5 => 
      array (
        'code' => 'MO',
        'name' => 'موستيريوس',
      ),
      6 => 
      array (
        'code' => 'PA',
        'name' => 'بول',
      ),
      7 => 
      array (
        'code' => 'PN',
        'name' => 'بورتو نوفو',
      ),
      8 => 
      array (
        'code' => 'PR',
        'name' => 'برايا',
      ),
      9 => 
      array (
        'code' => 'RG',
        'name' => 'ريبيرا جراند',
      ),
      10 => 
      array (
        'code' => 'SL',
        'name' => 'سال',
      ),
      11 => 
      array (
        'code' => 'CA',
        'name' => 'سانتا كاترينا',
      ),
      12 => 
      array (
        'code' => 'CR',
        'name' => 'سانتا كروز',
      ),
      13 => 
      array (
        'code' => 'SD',
        'name' => 'ساو دومينجوس',
      ),
      14 => 
      array (
        'code' => 'SF',
        'name' => 'ساو فيليب',
      ),
      15 => 
      array (
        'code' => 'SN',
        'name' => 'ساو نيكولا',
      ),
      16 => 
      array (
        'code' => 'SV',
        'name' => 'ساو فيسينتي',
      ),
      17 => 
      array (
        'code' => 'TA',
        'name' => 'تارافال',
      ),
    ),
    'CY' => 
    array (
      1 => 
      array (
        'code' => 'F',
        'name' => 'فاماجوستا',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => 'كيرينيا',
      ),
      3 => 
      array (
        'code' => 'A',
        'name' => 'لارناكا',
      ),
      4 => 
      array (
        'code' => 'I',
        'name' => 'ليماسول',
      ),
      5 => 
      array (
        'code' => 'N',
        'name' => 'نيقوسيا',
      ),
      6 => 
      array (
        'code' => 'P',
        'name' => 'بافوس',
      ),
    ),
    'CZ' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'هلافني ميستو براها',
      ),
      2 => 
      array (
        'code' => 'B',
        'name' => 'جيهومورافسكي',
      ),
      3 => 
      array (
        'code' => 'C',
        'name' => 'جيهوسيسكي',
      ),
      4 => 
      array (
        'code' => 'E',
        'name' => 'باردوبيكي',
      ),
      5 => 
      array (
        'code' => 'H',
        'name' => 'كرالوفيهردسكي',
      ),
      6 => 
      array (
        'code' => 'J',
        'name' => 'فيوسينا',
      ),
      7 => 
      array (
        'code' => 'K',
        'name' => 'كارلوفراسكي',
      ),
      8 => 
      array (
        'code' => 'L',
        'name' => 'ليبيرسكي',
      ),
      9 => 
      array (
        'code' => 'M',
        'name' => 'أولوموسكي',
      ),
      10 => 
      array (
        'code' => 'P',
        'name' => 'بليزنسكي',
      ),
      11 => 
      array (
        'code' => 'S',
        'name' => 'ستريدوسيسكي',
      ),
      12 => 
      array (
        'code' => 'T',
        'name' => 'مورافسكوسليسكي',
      ),
      13 => 
      array (
        'code' => 'U',
        'name' => 'أوستيسكي',
      ),
      14 => 
      array (
        'code' => 'Z',
        'name' => 'زلينسكي',
      ),
    ),
    'Country' => 
    array (
      1 => 
      array (
        'code' => '',
        'name' => 'الولايات',
      ),
    ),
    'DE' => 
    array (
      1 => 
      array (
        'code' => 'BAW',
        'name' => 'بادن فورتمبيرج',
      ),
      2 => 
      array (
        'code' => 'BAY',
        'name' => 'بايرن',
      ),
      3 => 
      array (
        'code' => 'BER',
        'name' => 'برلين',
      ),
      4 => 
      array (
        'code' => 'BRG',
        'name' => 'براندنبرج',
      ),
      5 => 
      array (
        'code' => 'BRE',
        'name' => 'بريمين',
      ),
      6 => 
      array (
        'code' => 'HAM',
        'name' => 'هامبورج',
      ),
      7 => 
      array (
        'code' => 'HES',
        'name' => 'هيسين',
      ),
      8 => 
      array (
        'code' => 'MEC',
        'name' => 'ميكلينبرج فوربوميرن',
      ),
      9 => 
      array (
        'code' => 'NDS',
        'name' => 'نيدر ساكسين',
      ),
      10 => 
      array (
        'code' => 'NRW',
        'name' => 'ويستفالين الشمالية',
      ),
      11 => 
      array (
        'code' => 'RHE',
        'name' => 'راينلاند فالز',
      ),
      12 => 
      array (
        'code' => 'SAR',
        'name' => 'سارلاند',
      ),
      13 => 
      array (
        'code' => 'SAS',
        'name' => 'ساشين',
      ),
      14 => 
      array (
        'code' => 'SAC',
        'name' => 'ساشن أنهالت',
      ),
      15 => 
      array (
        'code' => 'SCN',
        'name' => 'شيلسويج هولستن',
      ),
      16 => 
      array (
        'code' => 'THE',
        'name' => 'ثورنجن',
      ),
    ),
    'DJ' => 
    array (
      1 => 
      array (
        'code' => 'S',
        'name' => 'علي صابح',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => 'ديخيل',
      ),
      3 => 
      array (
        'code' => 'J',
        'name' => 'جيبوتي',
      ),
      4 => 
      array (
        'code' => 'O',
        'name' => 'أوبوك',
      ),
      5 => 
      array (
        'code' => 'T',
        'name' => 'تادجورا',
      ),
    ),
    'DK' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'أرهوس',
      ),
      2 => 
      array (
        'code' => 'BH',
        'name' => 'بورنهولم',
      ),
      3 => 
      array (
        'code' => 'CO',
        'name' => 'كوبينهاجن',
      ),
      4 => 
      array (
        'code' => 'FO',
        'name' => 'جزر فارو',
      ),
      5 => 
      array (
        'code' => 'FR',
        'name' => 'فريدريكسبورج',
      ),
      6 => 
      array (
        'code' => 'FY',
        'name' => 'فين',
      ),
      7 => 
      array (
        'code' => 'KO',
        'name' => 'كوبنهاجن',
      ),
      8 => 
      array (
        'code' => 'NO',
        'name' => 'نورديلاند',
      ),
      9 => 
      array (
        'code' => 'RI',
        'name' => 'ريبي',
      ),
      10 => 
      array (
        'code' => 'RK',
        'name' => 'رينجوبينج',
      ),
      11 => 
      array (
        'code' => 'RO',
        'name' => 'روسيكلد',
      ),
      12 => 
      array (
        'code' => 'SO',
        'name' => 'سونديريلاند',
      ),
      13 => 
      array (
        'code' => 'ST',
        'name' => 'ستورستورم',
      ),
      14 => 
      array (
        'code' => 'VK',
        'name' => 'فيجيل',
      ),
      15 => 
      array (
        'code' => 'VJ',
        'name' => 'فيستيلاند',
      ),
      16 => 
      array (
        'code' => 'VB',
        'name' => 'فيبورج',
      ),
    ),
    'DM' => 
    array (
      1 => 
      array (
        'code' => 'AND',
        'name' => 'سانت أندرو باريش',
      ),
      2 => 
      array (
        'code' => 'DAV',
        'name' => 'سانت دافيد باريش',
      ),
      3 => 
      array (
        'code' => 'GEO',
        'name' => 'سانت جورج باريش',
      ),
      4 => 
      array (
        'code' => 'JOH',
        'name' => 'سانت جون باريش',
      ),
      5 => 
      array (
        'code' => 'JOS',
        'name' => 'سانت جوزيف باريش',
      ),
      6 => 
      array (
        'code' => 'LUK',
        'name' => 'سانت لوك باريش',
      ),
      7 => 
      array (
        'code' => 'MAR',
        'name' => 'سانت مارك باريش',
      ),
      8 => 
      array (
        'code' => 'PAT',
        'name' => 'سانت باتريك باريش',
      ),
      9 => 
      array (
        'code' => 'PAU',
        'name' => 'سانت بول باريش',
      ),
      10 => 
      array (
        'code' => 'PET',
        'name' => 'سانت بيتر باريش',
      ),
    ),
    'DO' => 
    array (
      1 => 
      array (
        'code' => 'DN',
        'name' => 'ديستريتو ناسيونال',
      ),
      2 => 
      array (
        'code' => 'AZ',
        'name' => 'أزوا',
      ),
      3 => 
      array (
        'code' => 'BC',
        'name' => 'باوروكو',
      ),
      4 => 
      array (
        'code' => 'BH',
        'name' => 'باراهونا',
      ),
      5 => 
      array (
        'code' => 'DJ',
        'name' => 'داجابون',
      ),
      6 => 
      array (
        'code' => 'DU',
        'name' => 'دوارتي',
      ),
      7 => 
      array (
        'code' => 'EL',
        'name' => 'إليسا بينا',
      ),
      8 => 
      array (
        'code' => 'SY',
        'name' => 'إيلسيبو',
      ),
      9 => 
      array (
        'code' => 'ET',
        'name' => 'إيسبايلات',
      ),
      10 => 
      array (
        'code' => 'HM',
        'name' => 'هاتو مايور',
      ),
      11 => 
      array (
        'code' => 'IN',
        'name' => 'إندبندينسيا',
      ),
      12 => 
      array (
        'code' => 'AL',
        'name' => 'لا التاجارسيا',
      ),
      13 => 
      array (
        'code' => 'RO',
        'name' => 'لا رومانا',
      ),
      14 => 
      array (
        'code' => 'VE',
        'name' => 'لا فيجا',
      ),
      15 => 
      array (
        'code' => 'MT',
        'name' => 'ماريا ترينداد سانشيز',
      ),
      16 => 
      array (
        'code' => 'MN',
        'name' => 'مونسينور نويل',
      ),
      17 => 
      array (
        'code' => 'MC',
        'name' => 'مونتي كريستي',
      ),
      18 => 
      array (
        'code' => 'MP',
        'name' => 'مونتي بلاتا',
      ),
      19 => 
      array (
        'code' => 'PD',
        'name' => 'بيديرنال',
      ),
      20 => 
      array (
        'code' => 'PR',
        'name' => 'بيرافيا (باني)',
      ),
      21 => 
      array (
        'code' => 'PP',
        'name' => 'بويرتو بلاتا',
      ),
      22 => 
      array (
        'code' => 'SL',
        'name' => 'سالسيدو',
      ),
      23 => 
      array (
        'code' => 'SM',
        'name' => 'سامانا',
      ),
      24 => 
      array (
        'code' => 'SH',
        'name' => 'سانشيز راميراز',
      ),
      25 => 
      array (
        'code' => 'SC',
        'name' => 'سان كريستوبال',
      ),
      26 => 
      array (
        'code' => 'JO',
        'name' => 'سان جوس دي أوكا',
      ),
      27 => 
      array (
        'code' => 'SJ',
        'name' => 'سان خوان',
      ),
      28 => 
      array (
        'code' => 'PM',
        'name' => 'سان بيدرو دي ماكوريس',
      ),
      29 => 
      array (
        'code' => 'SA',
        'name' => 'سانتياجو',
      ),
      30 => 
      array (
        'code' => 'ST',
        'name' => 'سانتياجو رودريجيز',
      ),
      31 => 
      array (
        'code' => 'SD',
        'name' => 'سانتو دومينجو',
      ),
      32 => 
      array (
        'code' => 'VA',
        'name' => 'فالفيردي',
      ),
    ),
    'DZ' => 
    array (
      1 => 
      array (
        'code' => 'ADE',
        'name' => 'عين دفلة',
      ),
      2 => 
      array (
        'code' => 'ADR',
        'name' => 'أدرار',
      ),
      3 => 
      array (
        'code' => 'ALG',
        'name' => 'الجير',
      ),
      4 => 
      array (
        'code' => 'ANN',
        'name' => 'عنابة',
      ),
      5 => 
      array (
        'code' => 'ATE',
        'name' => 'عين تيموشنت',
      ),
      6 => 
      array (
        'code' => 'BAT',
        'name' => 'باتنا',
      ),
      7 => 
      array (
        'code' => 'BBA',
        'name' => 'بوردي بو أريدج',
      ),
      8 => 
      array (
        'code' => 'BEC',
        'name' => 'بيشار',
      ),
      9 => 
      array (
        'code' => 'BEJ',
        'name' => 'بيجاجا',
      ),
      10 => 
      array (
        'code' => 'BIS',
        'name' => 'بيسكرا',
      ),
      11 => 
      array (
        'code' => 'BLI',
        'name' => 'بليدة',
      ),
      12 => 
      array (
        'code' => 'BMD',
        'name' => 'بوميرديس',
      ),
      13 => 
      array (
        'code' => 'BOA',
        'name' => 'بويرا',
      ),
      14 => 
      array (
        'code' => 'CHL',
        'name' => 'شليف',
      ),
      15 => 
      array (
        'code' => 'CON',
        'name' => 'قنسطنطين',
      ),
      16 => 
      array (
        'code' => 'DJE',
        'name' => 'جيلفا',
      ),
      17 => 
      array (
        'code' => 'EBA',
        'name' => 'البيادة',
      ),
      18 => 
      array (
        'code' => 'EOU',
        'name' => 'العويد',
      ),
      19 => 
      array (
        'code' => 'ETA',
        'name' => 'الطرف',
      ),
      20 => 
      array (
        'code' => 'GHA',
        'name' => 'غارديا',
      ),
      21 => 
      array (
        'code' => 'GUE',
        'name' => 'جيلما',
      ),
      22 => 
      array (
        'code' => 'ILL',
        'name' => 'إليزي',
      ),
      23 => 
      array (
        'code' => 'JIJ',
        'name' => 'جيجل',
      ),
      24 => 
      array (
        'code' => 'KHE',
        'name' => 'خنشيلة',
      ),
      25 => 
      array (
        'code' => 'LAG',
        'name' => 'لاغوات',
      ),
      26 => 
      array (
        'code' => 'MED',
        'name' => 'ميديا',
      ),
      27 => 
      array (
        'code' => 'MIL',
        'name' => 'ميلا',
      ),
      28 => 
      array (
        'code' => 'MOS',
        'name' => 'مستغانم',
      ),
      29 => 
      array (
        'code' => 'MSI',
        'name' => 'ماسيلا',
      ),
      30 => 
      array (
        'code' => 'MUA',
        'name' => 'معسكر',
      ),
      31 => 
      array (
        'code' => 'NAA',
        'name' => 'نعمة',
      ),
      32 => 
      array (
        'code' => 'OEB',
        'name' => 'أم البواغي',
      ),
      33 => 
      array (
        'code' => 'ORA',
        'name' => 'أوران',
      ),
      34 => 
      array (
        'code' => 'OUA',
        'name' => 'أوارجلا',
      ),
      35 => 
      array (
        'code' => 'REL',
        'name' => 'ريليزان',
      ),
      36 => 
      array (
        'code' => 'SAH',
        'name' => 'سوق أهراس',
      ),
      37 => 
      array (
        'code' => 'SAI',
        'name' => 'صيدا',
      ),
      38 => 
      array (
        'code' => 'SBA',
        'name' => 'سيدي بالعباس',
      ),
      39 => 
      array (
        'code' => 'SET',
        'name' => 'سطيف',
      ),
      40 => 
      array (
        'code' => 'SKI',
        'name' => 'سكيكدا',
      ),
      41 => 
      array (
        'code' => 'TAM',
        'name' => 'تمانغاسيت',
      ),
      42 => 
      array (
        'code' => 'TEB',
        'name' => 'تيبيسا',
      ),
      43 => 
      array (
        'code' => 'TIA',
        'name' => 'تياريت',
      ),
      44 => 
      array (
        'code' => 'TIN',
        'name' => 'تيندوف',
      ),
      45 => 
      array (
        'code' => 'TIP',
        'name' => 'تيبازا',
      ),
      46 => 
      array (
        'code' => 'TIS',
        'name' => 'تيسيميسلت',
      ),
      47 => 
      array (
        'code' => 'TLE',
        'name' => 'تلمسان',
      ),
      48 => 
      array (
        'code' => 'TOU',
        'name' => 'تيزي أوزو',
      ),
    ),
    'EC' => 
    array (
      1 => 
      array (
        'code' => 'AZU',
        'name' => 'أزواي',
      ),
      2 => 
      array (
        'code' => 'BOL',
        'name' => 'بوليفار',
      ),
      3 => 
      array (
        'code' => 'CAN',
        'name' => 'كانار',
      ),
      4 => 
      array (
        'code' => 'CAR',
        'name' => 'كارشي',
      ),
      5 => 
      array (
        'code' => 'CHI',
        'name' => 'شيمبورازو',
      ),
      6 => 
      array (
        'code' => 'COT',
        'name' => 'كوتوباكسي',
      ),
      7 => 
      array (
        'code' => 'EOR',
        'name' => 'إيلورو',
      ),
      8 => 
      array (
        'code' => 'ESM',
        'name' => 'إيسميرالداس',
      ),
      9 => 
      array (
        'code' => 'GPS',
        'name' => 'جالاباجوس',
      ),
      10 => 
      array (
        'code' => 'GUA',
        'name' => 'جواياس',
      ),
      11 => 
      array (
        'code' => 'IMB',
        'name' => 'إمبابورا',
      ),
      12 => 
      array (
        'code' => 'LOJ',
        'name' => 'لوجا',
      ),
      13 => 
      array (
        'code' => 'LRO',
        'name' => 'لوس ريوس',
      ),
      14 => 
      array (
        'code' => 'MAN',
        'name' => 'مانابي',
      ),
      15 => 
      array (
        'code' => 'MSA',
        'name' => 'مورونا سانتياجو',
      ),
      16 => 
      array (
        'code' => 'NAP',
        'name' => 'نابو',
      ),
      17 => 
      array (
        'code' => 'ORE',
        'name' => 'أوريللانا',
      ),
      18 => 
      array (
        'code' => 'PAS',
        'name' => 'باستازا',
      ),
      19 => 
      array (
        'code' => 'PIC',
        'name' => 'بيشينيشا',
      ),
      20 => 
      array (
        'code' => 'SUC',
        'name' => 'سوكومبيوس',
      ),
      21 => 
      array (
        'code' => 'TUN',
        'name' => 'تونجو رهوا',
      ),
      22 => 
      array (
        'code' => 'ZCH',
        'name' => 'زامورا شينشيب',
      ),
    ),
    'EE' => 
    array (
      1 => 
      array (
        'code' => 'HA',
        'name' => 'حار جمعة (تالين)',
      ),
      2 => 
      array (
        'code' => 'HI',
        'name' => 'هيوما (كردلا)',
      ),
      3 => 
      array (
        'code' => 'IV',
        'name' => 'إيدا فيروما (جوفي)',
      ),
      4 => 
      array (
        'code' => 'JA',
        'name' => 'جارفاما (بايدي)',
      ),
      5 => 
      array (
        'code' => 'JO',
        'name' => 'جوجيفاما (جوجيفا)',
      ),
      6 => 
      array (
        'code' => 'LV',
        'name' => 'لان فيروما (ركفيري)',
      ),
      7 => 
      array (
        'code' => 'LA',
        'name' => 'النعمة (هاعبسالو)',
      ),
      8 => 
      array (
        'code' => 'PA',
        'name' => 'بارنومع (بارنو)',
      ),
      9 => 
      array (
        'code' => 'PO',
        'name' => 'بولمفمع (بولفا)',
      ),
      10 => 
      array (
        'code' => 'RA',
        'name' => 'ربلامع (رابلا)',
      ),
      11 => 
      array (
        'code' => 'SA',
        'name' => 'سعرمع (كويساري)',
      ),
      12 => 
      array (
        'code' => 'TA',
        'name' => 'تارتوما (تارتو)',
      ),
      13 => 
      array (
        'code' => 'VA',
        'name' => 'فالجمع (فالجا)',
      ),
      14 => 
      array (
        'code' => 'VI',
        'name' => 'فيلنديمع (فيلجاندي)',
      ),
      15 => 
      array (
        'code' => 'VO',
        'name' => 'فوروما (فورو)',
      ),
    ),
    'EG' => 
    array (
      1 => 
      array (
        'code' => 'DHY',
        'name' => 'الدقهلية',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'البحر الأحمر',
      ),
      3 => 
      array (
        'code' => 'BHY',
        'name' => 'البحيرة',
      ),
      4 => 
      array (
        'code' => 'FYM',
        'name' => 'الفيوم',
      ),
      5 => 
      array (
        'code' => 'GBY',
        'name' => 'الغربية',
      ),
      6 => 
      array (
        'code' => 'IDR',
        'name' => 'الإسكندرية',
      ),
      7 => 
      array (
        'code' => 'IML',
        'name' => 'الإسماعيلية',
      ),
      8 => 
      array (
        'code' => 'JZH',
        'name' => 'الجيزة',
      ),
      9 => 
      array (
        'code' => 'MFY',
        'name' => 'المنوفية',
      ),
      10 => 
      array (
        'code' => 'MNY',
        'name' => 'المنيا',
      ),
      11 => 
      array (
        'code' => 'QHR',
        'name' => 'القاهرة',
      ),
      12 => 
      array (
        'code' => 'QLY',
        'name' => 'القليوبية',
      ),
      13 => 
      array (
        'code' => 'WJD',
        'name' => 'الوادي الجديد',
      ),
      14 => 
      array (
        'code' => 'SHQ',
        'name' => 'الشرقية',
      ),
      15 => 
      array (
        'code' => 'SWY',
        'name' => 'السويس',
      ),
      16 => 
      array (
        'code' => 'ASW',
        'name' => 'أسوان',
      ),
      17 => 
      array (
        'code' => 'ASY',
        'name' => 'أسيوط',
      ),
      18 => 
      array (
        'code' => 'BSW',
        'name' => 'بني سويف',
      ),
      19 => 
      array (
        'code' => 'BSD',
        'name' => 'بور سعيد',
      ),
      20 => 
      array (
        'code' => 'DMY',
        'name' => 'دمياط',
      ),
      21 => 
      array (
        'code' => 'JNS',
        'name' => 'جنوب سيناء',
      ),
      22 => 
      array (
        'code' => 'KSH',
        'name' => 'كفر الشيخ',
      ),
      23 => 
      array (
        'code' => 'MAT',
        'name' => 'مطروح',
      ),
      24 => 
      array (
        'code' => 'QIN',
        'name' => 'قنا',
      ),
      25 => 
      array (
        'code' => 'SHS',
        'name' => 'شمال سيناء',
      ),
      26 => 
      array (
        'code' => 'SUH',
        'name' => 'سوهاج',
      ),
    ),
    'ER' => 
    array (
      1 => 
      array (
        'code' => 'MA',
        'name' => 'سنترال (مايكل)',
      ),
      2 => 
      array (
        'code' => 'KE',
        'name' => 'أنسيبا (كيرين)',
      ),
      3 => 
      array (
        'code' => 'DK',
        'name' => 'جنوبي البحر الأحمر (ديبوب كيه باه)',
      ),
      4 => 
      array (
        'code' => 'SK',
        'name' => 'شمالي البحر الأحمر (سيمين كيه باه)',
      ),
      5 => 
      array (
        'code' => 'DE',
        'name' => 'جنوبي (ديبوب)',
      ),
      6 => 
      array (
        'code' => 'BR',
        'name' => 'جاش بركة (بارينتو)',
      ),
    ),
    'ES' => 
    array (
      1 => 
      array (
        'code' => 'CA',
        'name' => 'كورونا',
      ),
      2 => 
      array (
        'code' => 'AL',
        'name' => 'الافا',
      ),
      3 => 
      array (
        'code' => 'AB',
        'name' => 'الباسيت',
      ),
      4 => 
      array (
        'code' => 'AC',
        'name' => 'اليكانتي',
      ),
      5 => 
      array (
        'code' => 'AM',
        'name' => 'الميريا',
      ),
      6 => 
      array (
        'code' => 'AS',
        'name' => 'استورياس',
      ),
      7 => 
      array (
        'code' => 'AV',
        'name' => 'افيلا',
      ),
      8 => 
      array (
        'code' => 'BJ',
        'name' => 'باداجوز',
      ),
      9 => 
      array (
        'code' => 'IB',
        'name' => 'باليراياس',
      ),
      10 => 
      array (
        'code' => 'BA',
        'name' => 'برشلونة',
      ),
      11 => 
      array (
        'code' => 'BU',
        'name' => 'بورجوس',
      ),
      12 => 
      array (
        'code' => 'CC',
        'name' => 'كاسيريس',
      ),
      13 => 
      array (
        'code' => 'CZ',
        'name' => 'كاديز',
      ),
      14 => 
      array (
        'code' => 'CT',
        'name' => 'كانتبريا',
      ),
      15 => 
      array (
        'code' => 'Cl',
        'name' => 'كاسيلون',
      ),
      16 => 
      array (
        'code' => 'CE',
        'name' => 'سيوتا',
      ),
      17 => 
      array (
        'code' => 'CR',
        'name' => 'سيوداد ريال',
      ),
      18 => 
      array (
        'code' => 'CD',
        'name' => 'قرطبة',
      ),
      19 => 
      array (
        'code' => 'CU',
        'name' => 'سيونسا',
      ),
      20 => 
      array (
        'code' => 'GI',
        'name' => 'جيرونا',
      ),
      21 => 
      array (
        'code' => 'GD',
        'name' => 'جرانادا',
      ),
      22 => 
      array (
        'code' => 'GJ',
        'name' => 'جودالاجارا',
      ),
      23 => 
      array (
        'code' => 'GP',
        'name' => 'جيبوزوكا',
      ),
      24 => 
      array (
        'code' => 'HL',
        'name' => 'هيولفا',
      ),
      25 => 
      array (
        'code' => 'HS',
        'name' => 'هويسكا',
      ),
      26 => 
      array (
        'code' => 'JN',
        'name' => 'جاين',
      ),
      27 => 
      array (
        'code' => 'RJ',
        'name' => 'لا ريوجا',
      ),
      28 => 
      array (
        'code' => 'PM',
        'name' => 'لاس بالماس',
      ),
      29 => 
      array (
        'code' => 'LE',
        'name' => 'ليونليون',
      ),
      30 => 
      array (
        'code' => 'LL',
        'name' => 'ليريدا',
      ),
      31 => 
      array (
        'code' => 'LG',
        'name' => 'لوجو',
      ),
      32 => 
      array (
        'code' => 'MD',
        'name' => 'مدريد',
      ),
      33 => 
      array (
        'code' => 'MA',
        'name' => 'مالاجا',
      ),
      34 => 
      array (
        'code' => 'ML',
        'name' => 'ميليلة',
      ),
      35 => 
      array (
        'code' => 'MU',
        'name' => 'موريسيا',
      ),
      36 => 
      array (
        'code' => 'NV',
        'name' => 'نافارا',
      ),
      37 => 
      array (
        'code' => 'OU',
        'name' => 'كيرينس',
      ),
      38 => 
      array (
        'code' => 'PL',
        'name' => 'بالينسيا',
      ),
      39 => 
      array (
        'code' => 'PO',
        'name' => 'بنوتيفيدرا',
      ),
      40 => 
      array (
        'code' => 'SL',
        'name' => 'سالامانكا',
      ),
      41 => 
      array (
        'code' => 'SC',
        'name' => 'سنتا كروز تينيريف',
      ),
      42 => 
      array (
        'code' => 'SG',
        'name' => 'سيجوفا',
      ),
      43 => 
      array (
        'code' => 'SV',
        'name' => 'سيفيلا',
      ),
      44 => 
      array (
        'code' => 'SO',
        'name' => 'سوريا',
      ),
      45 => 
      array (
        'code' => 'TA',
        'name' => 'تاراجونا',
      ),
      46 => 
      array (
        'code' => 'TE',
        'name' => 'تيرويل',
      ),
      47 => 
      array (
        'code' => 'TO',
        'name' => 'توليدو',
      ),
      48 => 
      array (
        'code' => 'VC',
        'name' => 'فالينسيا',
      ),
      49 => 
      array (
        'code' => 'VD',
        'name' => 'فالادوليد',
      ),
      50 => 
      array (
        'code' => 'VZ',
        'name' => 'فيزكايا',
      ),
      51 => 
      array (
        'code' => 'ZM',
        'name' => 'زامورا',
      ),
      52 => 
      array (
        'code' => 'ZR',
        'name' => 'زاراجوزا',
      ),
    ),
    'ET' => 
    array (
      1 => 
      array (
        'code' => 'AF',
        'name' => 'عفار',
      ),
      2 => 
      array (
        'code' => 'AH',
        'name' => 'أمهارا',
      ),
      3 => 
      array (
        'code' => 'BG',
        'name' => 'بني شنغول جوماز',
      ),
      4 => 
      array (
        'code' => 'GB',
        'name' => 'جمبيلا',
      ),
      5 => 
      array (
        'code' => 'HR',
        'name' => 'هارياي',
      ),
      6 => 
      array (
        'code' => 'OR',
        'name' => 'أوروميا',
      ),
      7 => 
      array (
        'code' => 'SM',
        'name' => 'الصومال',
      ),
      8 => 
      array (
        'code' => 'SN',
        'name' => 'الأمم الجنوبية - القوميات',
      ),
      9 => 
      array (
        'code' => 'TG',
        'name' => 'تيجراي',
      ),
      10 => 
      array (
        'code' => 'AA',
        'name' => 'أديس أبابا',
      ),
      11 => 
      array (
        'code' => 'DD',
        'name' => 'ديري داوا',
      ),
    ),
    'FI' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'أهفينانمعان لاني',
      ),
      2 => 
      array (
        'code' => 'ES',
        'name' => 'إيتيلا سومون لاني',
      ),
      3 => 
      array (
        'code' => 'IS',
        'name' => 'إيتا سومون لاني',
      ),
      4 => 
      array (
        'code' => 'LS',
        'name' => 'لانسي سومون لاني',
      ),
      5 => 
      array (
        'code' => 'LA',
        'name' => 'لابن لاناني',
      ),
      6 => 
      array (
        'code' => 'OU',
        'name' => 'أولون لاني',
      ),
    ),
    'FJ' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => 'القسم المركزي',
      ),
      2 => 
      array (
        'code' => 'E',
        'name' => 'القسم الشرقي',
      ),
      3 => 
      array (
        'code' => 'N',
        'name' => 'القسم الشمالي',
      ),
      4 => 
      array (
        'code' => 'R',
        'name' => 'روتوما',
      ),
      5 => 
      array (
        'code' => 'W',
        'name' => 'القسم الغربي',
      ),
    ),
    'FM' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => 'شوك',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => 'كوسرى',
      ),
      3 => 
      array (
        'code' => 'P',
        'name' => 'بوهنبي',
      ),
      4 => 
      array (
        'code' => 'Y',
        'name' => 'ياب',
      ),
    ),
    'FO' => 
    array (
      1 => 
      array (
        'code' => 'TÛR',
        'name' => 'تورشافنار كومونا',
      ),
      2 => 
      array (
        'code' => 'KLA',
        'name' => 'كلاكسفيك',
      ),
      3 => 
      array (
        'code' => 'RUN',
        'name' => 'رونافيك',
      ),
      4 => 
      array (
        'code' => 'TVØ',
        'name' => 'تفرويري',
      ),
      5 => 
      array (
        'code' => 'FUG',
        'name' => 'فوجلافيورر',
      ),
      6 => 
      array (
        'code' => 'SUN',
        'name' => 'سوندا كومونا',
      ),
      7 => 
      array (
        'code' => 'VáG',
        'name' => 'فاجور',
      ),
      8 => 
      array (
        'code' => 'NES',
        'name' => 'نيس',
      ),
      9 => 
      array (
        'code' => 'VES',
        'name' => 'فيستمانا',
      ),
      10 => 
      array (
        'code' => 'MIð',
        'name' => 'ميوفاجور',
      ),
      11 => 
      array (
        'code' => 'SØR',
        'name' => 'سورفاجور',
      ),
      12 => 
      array (
        'code' => 'GØT',
        'name' => 'جوتو كومونا',
      ),
      13 => 
      array (
        'code' => 'SJû',
        'name' => 'سوجوفار كومونا',
      ),
      14 => 
      array (
        'code' => 'LEI',
        'name' => 'ليرفيك',
      ),
      15 => 
      array (
        'code' => 'SAN',
        'name' => 'ساندافاجور',
      ),
      16 => 
      array (
        'code' => 'HVA',
        'name' => 'فالبا',
      ),
      17 => 
      array (
        'code' => 'إيلو',
        'name' => 'إيوي',
      ),
      18 => 
      array (
        'code' => 'KVí',
        'name' => 'كفيفك',
      ),
      19 => 
      array (
        'code' => 'SAN',
        'name' => 'ساندور',
      ),
      20 => 
      array (
        'code' => 'SKO',
        'name' => 'سكوبون',
      ),
      21 => 
      array (
        'code' => 'HVA',
        'name' => 'فاناسوند',
      ),
      22 => 
      array (
        'code' => 'SUM',
        'name' => 'سومبا',
      ),
      23 => 
      array (
        'code' => 'VIð',
        'name' => 'فيواريري',
      ),
      24 => 
      array (
        'code' => 'POR',
        'name' => 'بوركيري',
      ),
      25 => 
      array (
        'code' => 'SKá',
        'name' => 'سكالافيك',
      ),
      26 => 
      array (
        'code' => 'KUN',
        'name' => 'كونوي',
      ),
      27 => 
      array (
        'code' => 'HÚS',
        'name' => 'هوسافيك',
      ),
      28 => 
      array (
        'code' => 'HOV',
        'name' => 'هوف',
      ),
      29 => 
      array (
        'code' => 'FáM',
        'name' => 'فاميني',
      ),
      30 => 
      array (
        'code' => 'FUN',
        'name' => 'فنينجر',
      ),
      31 => 
      array (
        'code' => 'HÚS',
        'name' => 'هوسار',
      ),
      32 => 
      array (
        'code' => 'SKÚ',
        'name' => 'سكوفوي',
      ),
      33 => 
      array (
        'code' => 'SVí',
        'name' => 'سفينوي',
      ),
      34 => 
      array (
        'code' => 'FUG',
        'name' => 'فوجلوي',
      ),
    ),
    'FR' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'ألساك',
      ),
      2 => 
      array (
        'code' => 'AQ',
        'name' => 'أكيتين',
      ),
      3 => 
      array (
        'code' => 'AU',
        'name' => 'أوفيرنج',
      ),
      4 => 
      array (
        'code' => 'BR',
        'name' => 'بريتاني',
      ),
      5 => 
      array (
        'code' => 'BU',
        'name' => 'بورجندي',
      ),
      6 => 
      array (
        'code' => 'CE',
        'name' => 'سينتر لوار فالي',
      ),
      7 => 
      array (
        'code' => 'CH',
        'name' => 'شامبان',
      ),
      8 => 
      array (
        'code' => 'CO',
        'name' => 'كورسي',
      ),
      9 => 
      array (
        'code' => 'FR',
        'name' => 'فرانس كومتي',
      ),
      10 => 
      array (
        'code' => 'LA',
        'name' => 'لانجدوك روسيليون',
      ),
      11 => 
      array (
        'code' => 'LI',
        'name' => 'ليموسين',
      ),
      12 => 
      array (
        'code' => 'LO',
        'name' => 'لورين',
      ),
      13 => 
      array (
        'code' => 'MI',
        'name' => 'ميدي بيرينيس',
      ),
      14 => 
      array (
        'code' => 'NO',
        'name' => 'نورد با دي ساليس',
      ),
      15 => 
      array (
        'code' => 'NR',
        'name' => 'نورماندي',
      ),
      16 => 
      array (
        'code' => 'PA',
        'name' => 'باريس/ إل دي فرنسا',
      ),
      17 => 
      array (
        'code' => 'PI',
        'name' => 'بيكاردي',
      ),
      18 => 
      array (
        'code' => 'PO',
        'name' => 'بواتو شارينتي',
      ),
      19 => 
      array (
        'code' => 'PR',
        'name' => 'إقليم',
      ),
      20 => 
      array (
        'code' => 'RH',
        'name' => 'الرون بجبال الألب',
      ),
      21 => 
      array (
        'code' => 'RI',
        'name' => 'ريفييرا',
      ),
      22 => 
      array (
        'code' => 'WE',
        'name' => 'ويسترن لوار فالي',
      ),
    ),
    'FX' => 
    array (
      1 => 
      array (
        'code' => 'Et',
        'name' => 'إيترانجي',
      ),
      2 => 
      array (
        'code' => '01',
        'name' => 'عين',
      ),
      3 => 
      array (
        'code' => '02',
        'name' => 'آيسني',
      ),
      4 => 
      array (
        'code' => '03',
        'name' => 'ألير',
      ),
      5 => 
      array (
        'code' => '04',
        'name' => 'إقليم مرتفعات الألب',
      ),
      6 => 
      array (
        'code' => '05',
        'name' => 'مرتفعات الألب',
      ),
      7 => 
      array (
        'code' => '06',
        'name' => 'ماريتايم الألب',
      ),
      8 => 
      array (
        'code' => '07',
        'name' => 'أرديش',
      ),
      9 => 
      array (
        'code' => '08',
        'name' => 'أردينيس',
      ),
      10 => 
      array (
        'code' => '09',
        'name' => 'أريجي',
      ),
      11 => 
      array (
        'code' => '10',
        'name' => 'أوبي',
      ),
      12 => 
      array (
        'code' => '11',
        'name' => 'أودي',
      ),
      13 => 
      array (
        'code' => '12',
        'name' => 'أفيرون',
      ),
      14 => 
      array (
        'code' => '13',
        'name' => 'بوشي دي رون',
      ),
      15 => 
      array (
        'code' => '14',
        'name' => 'كالفادوس',
      ),
      16 => 
      array (
        'code' => '15',
        'name' => 'كانتال',
      ),
      17 => 
      array (
        'code' => '16',
        'name' => 'شارنتي',
      ),
      18 => 
      array (
        'code' => '17',
        'name' => 'شارينتي ماريتايم',
      ),
      19 => 
      array (
        'code' => '18',
        'name' => 'تشير',
      ),
      20 => 
      array (
        'code' => '19',
        'name' => 'كوريز',
      ),
      21 => 
      array (
        'code' => '2A',
        'name' => 'كورسي الجنوبية',
      ),
      22 => 
      array (
        'code' => '2B',
        'name' => 'مرتفعات كورسي',
      ),
      23 => 
      array (
        'code' => '21',
        'name' => 'كوت دي أور',
      ),
      24 => 
      array (
        'code' => '22',
        'name' => 'كوت دي أرمور',
      ),
      25 => 
      array (
        'code' => '23',
        'name' => 'كريوزيه',
      ),
      26 => 
      array (
        'code' => '24',
        'name' => 'دوردوجن',
      ),
      27 => 
      array (
        'code' => '25',
        'name' => 'دوبس',
      ),
      28 => 
      array (
        'code' => '26',
        'name' => 'درومي',
      ),
      29 => 
      array (
        'code' => '27',
        'name' => 'إيور',
      ),
      30 => 
      array (
        'code' => '28',
        'name' => 'يور إيه لوار',
      ),
      31 => 
      array (
        'code' => '29',
        'name' => 'فينيستير',
      ),
      32 => 
      array (
        'code' => '30',
        'name' => 'جارد',
      ),
      33 => 
      array (
        'code' => '31',
        'name' => 'مرتفعات جاروني',
      ),
      34 => 
      array (
        'code' => '32',
        'name' => 'جيرس',
      ),
      35 => 
      array (
        'code' => '33',
        'name' => 'جيروندي',
      ),
      36 => 
      array (
        'code' => '34',
        'name' => 'هيرو',
      ),
      37 => 
      array (
        'code' => '35',
        'name' => 'إيلي وفيلين',
      ),
      38 => 
      array (
        'code' => '36',
        'name' => 'أندريه',
      ),
      39 => 
      array (
        'code' => '37',
        'name' => 'أندريه ولوار',
      ),
      40 => 
      array (
        'code' => '38',
        'name' => 'إيزير',
      ),
      41 => 
      array (
        'code' => '39',
        'name' => 'جورا',
      ),
      42 => 
      array (
        'code' => '40',
        'name' => 'لانديز',
      ),
      43 => 
      array (
        'code' => '41',
        'name' => 'لوار وتشير',
      ),
      44 => 
      array (
        'code' => '42',
        'name' => 'لوار',
      ),
      45 => 
      array (
        'code' => '43',
        'name' => 'مرتفعات لوار',
      ),
      46 => 
      array (
        'code' => '44',
        'name' => 'لوار الأطلنطي',
      ),
      47 => 
      array (
        'code' => '45',
        'name' => 'لوريت',
      ),
      48 => 
      array (
        'code' => '46',
        'name' => 'لوت',
      ),
      49 => 
      array (
        'code' => '47',
        'name' => 'لوت وجاروني',
      ),
      50 => 
      array (
        'code' => '48',
        'name' => 'لوزير',
      ),
      51 => 
      array (
        'code' => '49',
        'name' => 'ماين ولوار',
      ),
      52 => 
      array (
        'code' => '50',
        'name' => 'مانش',
      ),
      53 => 
      array (
        'code' => '51',
        'name' => 'مارنيه',
      ),
      54 => 
      array (
        'code' => '52',
        'name' => 'مرتفعات مارنيه',
      ),
      55 => 
      array (
        'code' => '53',
        'name' => 'مايان',
      ),
      56 => 
      array (
        'code' => '54',
        'name' => 'مويرث وموسيلي',
      ),
      57 => 
      array (
        'code' => '55',
        'name' => 'ميس',
      ),
      58 => 
      array (
        'code' => '56',
        'name' => 'موربيهان',
      ),
      59 => 
      array (
        'code' => '57',
        'name' => 'موسيللي',
      ),
      60 => 
      array (
        'code' => '58',
        'name' => 'نبيفر',
      ),
      61 => 
      array (
        'code' => '59',
        'name' => 'نورد',
      ),
      62 => 
      array (
        'code' => '60',
        'name' => 'أويس',
      ),
      63 => 
      array (
        'code' => '61',
        'name' => 'أورني',
      ),
      64 => 
      array (
        'code' => '62',
        'name' => 'باس دي كاليه',
      ),
      65 => 
      array (
        'code' => '63',
        'name' => 'بوي دي دوم',
      ),
      66 => 
      array (
        'code' => '64',
        'name' => 'بيرينس الأطلنطي',
      ),
      67 => 
      array (
        'code' => '65',
        'name' => 'مرتفعات بيرينيس',
      ),
      68 => 
      array (
        'code' => '66',
        'name' => 'بيرنيس أورينتال',
      ),
      69 => 
      array (
        'code' => '67',
        'name' => 'باس رين',
      ),
      70 => 
      array (
        'code' => '68',
        'name' => 'مرتفع رين',
      ),
      71 => 
      array (
        'code' => '69',
        'name' => 'الرون',
      ),
      72 => 
      array (
        'code' => '70',
        'name' => 'مرتفع الرون',
      ),
      73 => 
      array (
        'code' => '71',
        'name' => 'ساون ولوار',
      ),
      74 => 
      array (
        'code' => '72',
        'name' => 'سارسيه',
      ),
      75 => 
      array (
        'code' => '73',
        'name' => 'سافوي',
      ),
      76 => 
      array (
        'code' => '74',
        'name' => 'مرتفع سافوي',
      ),
      77 => 
      array (
        'code' => '75',
        'name' => 'باريس',
      ),
      78 => 
      array (
        'code' => '76',
        'name' => 'سين ماريتايم',
      ),
      79 => 
      array (
        'code' => '77',
        'name' => 'سين ومارنيه',
      ),
      80 => 
      array (
        'code' => '78',
        'name' => 'يفيلينز',
      ),
      81 => 
      array (
        'code' => '79',
        'name' => 'ديوس سيفري',
      ),
      82 => 
      array (
        'code' => '80',
        'name' => 'سوميه',
      ),
      83 => 
      array (
        'code' => '81',
        'name' => 'تارن',
      ),
      84 => 
      array (
        'code' => '82',
        'name' => 'تارن وجاروني',
      ),
      85 => 
      array (
        'code' => '83',
        'name' => 'فار',
      ),
      86 => 
      array (
        'code' => '84',
        'name' => 'فوكلوز',
      ),
      87 => 
      array (
        'code' => '85',
        'name' => 'فيندي',
      ),
      88 => 
      array (
        'code' => '86',
        'name' => 'فيينا',
      ),
      89 => 
      array (
        'code' => '87',
        'name' => 'فيينا العليا',
      ),
      90 => 
      array (
        'code' => '88',
        'name' => 'فوسجيس',
      ),
      91 => 
      array (
        'code' => '89',
        'name' => 'يوني',
      ),
      92 => 
      array (
        'code' => '90',
        'name' => 'مقاطعة بيلفورت',
      ),
      93 => 
      array (
        'code' => '91',
        'name' => 'إيسونيه',
      ),
      94 => 
      array (
        'code' => '92',
        'name' => 'مرتفعات سينيه',
      ),
      95 => 
      array (
        'code' => '93',
        'name' => 'سينيه سانت دينيس',
      ),
      96 => 
      array (
        'code' => '94',
        'name' => 'فال دي مارنيه',
      ),
      97 => 
      array (
        'code' => '95',
        'name' => 'فال دي أويس',
      ),
    ),
    'GA' => 
    array (
      1 => 
      array (
        'code' => 'ES',
        'name' => 'إيستوار',
      ),
      2 => 
      array (
        'code' => 'HO',
        'name' => 'هويت أوجو',
      ),
      3 => 
      array (
        'code' => 'MO',
        'name' => 'موين أوجو',
      ),
      4 => 
      array (
        'code' => 'NG',
        'name' => 'نجوني',
      ),
      5 => 
      array (
        'code' => 'NY',
        'name' => 'نيانجا',
      ),
      6 => 
      array (
        'code' => 'OI',
        'name' => 'أوجو إيفيندو',
      ),
      7 => 
      array (
        'code' => 'OL',
        'name' => 'أوجو لولو',
      ),
      8 => 
      array (
        'code' => 'OM',
        'name' => 'أوجو ماريتايم',
      ),
      9 => 
      array (
        'code' => 'WN',
        'name' => 'وولو نتيم',
      ),
    ),
    'GB' => 
    array (
      1 => 
      array (
        'code' => 'ABN',
        'name' => 'عبير الدين',
      ),
      2 => 
      array (
        'code' => 'ABNS',
        'name' => 'ابيردينشاير',
      ),
      3 => 
      array (
        'code' => 'ANG',
        'name' => 'انجليسي',
      ),
      4 => 
      array (
        'code' => 'AGS',
        'name' => 'انجوس',
      ),
      5 => 
      array (
        'code' => 'ARY',
        'name' => 'ارجيل وبوتي',
      ),
      6 => 
      array (
        'code' => 'BEDS',
        'name' => 'بيدفوردشاير',
      ),
      7 => 
      array (
        'code' => 'BERKS',
        'name' => 'بيركشاير',
      ),
      8 => 
      array (
        'code' => 'BLA',
        'name' => 'بلينو جوينت',
      ),
      9 => 
      array (
        'code' => 'BRI',
        'name' => 'بريدجيند',
      ),
      10 => 
      array (
        'code' => 'BSTL',
        'name' => 'بريستول',
      ),
      11 => 
      array (
        'code' => 'BUCKS',
        'name' => 'باكينجهاشاير',
      ),
      12 => 
      array (
        'code' => 'CAE',
        'name' => 'كارفيلي',
      ),
      13 => 
      array (
        'code' => 'CAMBS',
        'name' => 'كامبريدجشاير',
      ),
      14 => 
      array (
        'code' => 'CDF',
        'name' => 'كارديف',
      ),
      15 => 
      array (
        'code' => 'CARM',
        'name' => 'كارمارثينشاير',
      ),
      16 => 
      array (
        'code' => 'CDGN',
        'name' => 'كريدجيون',
      ),
      17 => 
      array (
        'code' => 'CHES',
        'name' => 'شيشير',
      ),
      18 => 
      array (
        'code' => 'CLACK',
        'name' => 'كلاكمانشاير',
      ),
      19 => 
      array (
        'code' => 'CON',
        'name' => 'كونواي',
      ),
      20 => 
      array (
        'code' => 'CORN',
        'name' => 'كورنوال',
      ),
      21 => 
      array (
        'code' => 'DNBG',
        'name' => 'دينبيجشاير',
      ),
      22 => 
      array (
        'code' => 'DERBY',
        'name' => 'ديربيشاير',
      ),
      23 => 
      array (
        'code' => 'DVN',
        'name' => 'ديفون',
      ),
      24 => 
      array (
        'code' => 'DOR',
        'name' => 'دورسيت',
      ),
      25 => 
      array (
        'code' => 'DGL',
        'name' => 'دومفريس وجالواي',
      ),
      26 => 
      array (
        'code' => 'DUND',
        'name' => 'دوندي',
      ),
      27 => 
      array (
        'code' => 'DHM',
        'name' => 'درهام',
      ),
      28 => 
      array (
        'code' => 'ARYE',
        'name' => 'ايرشاير الشرقية',
      ),
      29 => 
      array (
        'code' => 'DUNBE',
        'name' => 'شرق ديرباتونشاير',
      ),
      30 => 
      array (
        'code' => 'LOTE',
        'name' => 'شرق لوثيان',
      ),
      31 => 
      array (
        'code' => 'RENE',
        'name' => 'شرق رينفايرشاير',
      ),
      32 => 
      array (
        'code' => 'ERYS',
        'name' => 'شرق ريدنج يوركشاير',
      ),
      33 => 
      array (
        'code' => 'SXE',
        'name' => 'شرق سوسيكس ',
      ),
      34 => 
      array (
        'code' => 'EDIN',
        'name' => 'ايدنربج',
      ),
      35 => 
      array (
        'code' => 'ESX',
        'name' => 'ايسيكس',
      ),
      36 => 
      array (
        'code' => 'FALK',
        'name' => 'فالكريك',
      ),
      37 => 
      array (
        'code' => 'FFE',
        'name' => 'فايف',
      ),
      38 => 
      array (
        'code' => 'FLINT',
        'name' => 'فلينتشاير',
      ),
      39 => 
      array (
        'code' => 'GLAS',
        'name' => 'جلاسجو',
      ),
      40 => 
      array (
        'code' => 'GLOS',
        'name' => 'جلوسيست شاير',
      ),
      41 => 
      array (
        'code' => 'LDN',
        'name' => 'لندن الكبرى',
      ),
      42 => 
      array (
        'code' => 'MCH',
        'name' => 'مانشيستر الكبرى',
      ),
      43 => 
      array (
        'code' => 'GDD',
        'name' => 'جويندد',
      ),
      44 => 
      array (
        'code' => 'HANTS',
        'name' => 'هامبشير',
      ),
      45 => 
      array (
        'code' => 'HWR',
        'name' => 'هيريفوردشاير',
      ),
      46 => 
      array (
        'code' => 'HERTS',
        'name' => 'هيرتفوردشاير',
      ),
      47 => 
      array (
        'code' => 'HLD',
        'name' => 'هايلاندز',
      ),
      48 => 
      array (
        'code' => 'IVER',
        'name' => 'انفيرسليد',
      ),
      49 => 
      array (
        'code' => 'IOW',
        'name' => 'ايسل ويت',
      ),
      50 => 
      array (
        'code' => 'KNT',
        'name' => 'كينت',
      ),
      51 => 
      array (
        'code' => 'LANCS',
        'name' => 'لانكشاير',
      ),
      52 => 
      array (
        'code' => 'LEICS',
        'name' => 'ليسيستيرشاير',
      ),
      53 => 
      array (
        'code' => 'LINCS',
        'name' => 'لينكولنشاير',
      ),
      54 => 
      array (
        'code' => 'MSY',
        'name' => 'ميرسيسايد',
      ),
      55 => 
      array (
        'code' => 'MERT',
        'name' => 'ميرسر تيدفيل',
      ),
      56 => 
      array (
        'code' => 'MLOT',
        'name' => 'ميدلوثيان',
      ),
      57 => 
      array (
        'code' => 'MMOUTH',
        'name' => 'مونماوثشاير',
      ),
      58 => 
      array (
        'code' => 'MORAY',
        'name' => 'موراي',
      ),
      59 => 
      array (
        'code' => 'NPRTAL',
        'name' => 'نيث بورت تالبوت',
      ),
      60 => 
      array (
        'code' => 'NEWPT',
        'name' => 'نيوبورت',
      ),
      61 => 
      array (
        'code' => 'NOR',
        'name' => 'نورفولك',
      ),
      62 => 
      array (
        'code' => 'ARYN',
        'name' => 'نورث ايرشاير',
      ),
      63 => 
      array (
        'code' => 'LANN',
        'name' => 'نورث لانركشير',
      ),
      64 => 
      array (
        'code' => 'YSN',
        'name' => 'نورث يوركشاير',
      ),
      65 => 
      array (
        'code' => 'NHM',
        'name' => 'نورثامبتون شاير',
      ),
      66 => 
      array (
        'code' => 'NLD',
        'name' => 'نورث ثامبير لاند',
      ),
      67 => 
      array (
        'code' => 'NOT',
        'name' => 'نوتينجهامشاير',
      ),
      68 => 
      array (
        'code' => 'ORK',
        'name' => 'جزر اوركني',
      ),
      69 => 
      array (
        'code' => 'OFE',
        'name' => 'اوكسفوردشاير',
      ),
      70 => 
      array (
        'code' => 'PEM',
        'name' => 'بيم بروكشاير',
      ),
      71 => 
      array (
        'code' => 'PERTH',
        'name' => 'بيرث وكينروس',
      ),
      72 => 
      array (
        'code' => 'PWS',
        'name' => 'بويز',
      ),
      73 => 
      array (
        'code' => 'REN',
        'name' => 'رينفيرشاير',
      ),
      74 => 
      array (
        'code' => 'RHON',
        'name' => 'روندا كينون تاف',
      ),
      75 => 
      array (
        'code' => 'RUT',
        'name' => 'روتلاند',
      ),
      76 => 
      array (
        'code' => 'BOR',
        'name' => 'الحدود الاسكتلندية',
      ),
      77 => 
      array (
        'code' => 'SHET',
        'name' => 'جزر شيتلاند',
      ),
      78 => 
      array (
        'code' => 'SPE',
        'name' => 'شروبشاير',
      ),
      79 => 
      array (
        'code' => 'SOM',
        'name' => 'سوميرست',
      ),
      80 => 
      array (
        'code' => 'ARYS',
        'name' => 'ايرشاير الجنوبية',
      ),
      81 => 
      array (
        'code' => 'LANS',
        'name' => 'لاناركشاير الجنوبية',
      ),
      82 => 
      array (
        'code' => 'YSS',
        'name' => 'جنوب يوركشاير',
      ),
      83 => 
      array (
        'code' => 'SFD',
        'name' => 'ستافوردشاير',
      ),
      84 => 
      array (
        'code' => 'STIR',
        'name' => 'ستيرلينج',
      ),
      85 => 
      array (
        'code' => 'SFK',
        'name' => 'سوفولك',
      ),
      86 => 
      array (
        'code' => 'SRY',
        'name' => 'سوراي',
      ),
      87 => 
      array (
        'code' => 'SWAN',
        'name' => 'سوانسي',
      ),
      88 => 
      array (
        'code' => 'TORF',
        'name' => 'تورفان',
      ),
      89 => 
      array (
        'code' => 'TWR',
        'name' => 'تين ووير',
      ),
      90 => 
      array (
        'code' => 'VGLAM',
        'name' => 'فال جلامورجان',
      ),
      91 => 
      array (
        'code' => 'WARKS',
        'name' => 'وارويكشاير',
      ),
      92 => 
      array (
        'code' => 'WDUN',
        'name' => 'غرب دونبارتونشاير',
      ),
      93 => 
      array (
        'code' => 'WLOT',
        'name' => 'غرب لوثيان',
      ),
      94 => 
      array (
        'code' => 'WMD',
        'name' => 'غرب ميدلاندز',
      ),
      95 => 
      array (
        'code' => 'SXW',
        'name' => 'غرب سوسيكس',
      ),
      96 => 
      array (
        'code' => 'YSW',
        'name' => 'غرب يوركشاير',
      ),
      97 => 
      array (
        'code' => 'WIL',
        'name' => 'ايزلس الغربية',
      ),
      98 => 
      array (
        'code' => 'WLT',
        'name' => 'ويلتشاير',
      ),
      99 => 
      array (
        'code' => 'WORCS',
        'name' => 'وورسيستيرشاير',
      ),
      100 => 
      array (
        'code' => 'WRX',
        'name' => 'ريكسهام',
      ),
    ),
    'GE' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'أبخازيا',
      ),
      2 => 
      array (
        'code' => 'AJ',
        'name' => 'أجاريا',
      ),
      3 => 
      array (
        'code' => 'GU',
        'name' => 'جوريا',
      ),
      4 => 
      array (
        'code' => 'IM',
        'name' => 'إيميرتي',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'كاخيتي',
      ),
      6 => 
      array (
        'code' => 'KK',
        'name' => 'كيفمو كارتلي',
      ),
      7 => 
      array (
        'code' => 'MM',
        'name' => 'مسخيتا متيانيتي',
      ),
      8 => 
      array (
        'code' => 'RL',
        'name' => 'راشا ليخومي وكيفمو سفانيت',
      ),
      9 => 
      array (
        'code' => 'SJ',
        'name' => 'سامتخي جافاخيتي',
      ),
      10 => 
      array (
        'code' => 'SK',
        'name' => 'شيدا كارتلي',
      ),
      11 => 
      array (
        'code' => 'SZ',
        'name' => 'ساميجريلو زيمو سافانيتي',
      ),
      12 => 
      array (
        'code' => 'TB',
        'name' => 'تبليسي',
      ),
    ),
    'GF' => 
    array (
      1 => 
      array (
        'code' => 'AWA',
        'name' => 'أوالا ياليمابو',
      ),
      2 => 
      array (
        'code' => 'MAN',
        'name' => 'مانا',
      ),
      3 => 
      array (
        'code' => 'SAI',
        'name' => 'سانت لورنت دي ماروني',
      ),
      4 => 
      array (
        'code' => 'APA',
        'name' => 'أباتو',
      ),
      5 => 
      array (
        'code' => 'GRA',
        'name' => 'جراند سانتي',
      ),
      6 => 
      array (
        'code' => 'PAP',
        'name' => 'بابيشتون',
      ),
      7 => 
      array (
        'code' => 'SAÜ',
        'name' => 'ساوي',
      ),
      8 => 
      array (
        'code' => 'MAR',
        'name' => 'ماريباسولا',
      ),
      9 => 
      array (
        'code' => 'CAM',
        'name' => 'كاموبي',
      ),
      10 => 
      array (
        'code' => 'SAI',
        'name' => 'سانت جورج',
      ),
      11 => 
      array (
        'code' => 'OUA',
        'name' => 'أواناري',
      ),
      12 => 
      array (
        'code' => 'RéG',
        'name' => 'ريجينا',
      ),
      13 => 
      array (
        'code' => 'ROU',
        'name' => 'رورا',
      ),
      14 => 
      array (
        'code' => 'SAI',
        'name' => 'سانت إيلي',
      ),
      15 => 
      array (
        'code' => 'IRA',
        'name' => 'إيراكوبا',
      ),
      16 => 
      array (
        'code' => 'SIN',
        'name' => 'سيناماري',
      ),
      17 => 
      array (
        'code' => 'KOU',
        'name' => 'كورو',
      ),
      18 => 
      array (
        'code' => 'MAC',
        'name' => 'ماكوريا',
      ),
      19 => 
      array (
        'code' => 'MON',
        'name' => 'مونتيسنري تونيجراند',
      ),
      20 => 
      array (
        'code' => 'MAT',
        'name' => 'ماتوري',
      ),
      21 => 
      array (
        'code' => 'CAY',
        'name' => 'كايين',
      ),
      22 => 
      array (
        'code' => 'REM',
        'name' => 'ريمير مونتوجولي',
      ),
    ),
    'GH' => 
    array (
      1 => 
      array (
        'code' => 'AS',
        'name' => 'إقليم أشانتي',
      ),
      2 => 
      array (
        'code' => 'BA',
        'name' => 'إقليم برنج أهافو',
      ),
      3 => 
      array (
        'code' => 'CE',
        'name' => 'الإقليم الأوسط',
      ),
      4 => 
      array (
        'code' => 'EA',
        'name' => 'الإقليم الشرقي',
      ),
      5 => 
      array (
        'code' => 'GA',
        'name' => 'إقليم أكرا الأعظم',
      ),
      6 => 
      array (
        'code' => 'NO',
        'name' => 'المنطقة الشمالية',
      ),
      7 => 
      array (
        'code' => 'UE',
        'name' => 'الإقليم الشرقي الأعلى',
      ),
      8 => 
      array (
        'code' => 'UW',
        'name' => 'الإقليم الغربي الأعلى',
      ),
      9 => 
      array (
        'code' => 'VO',
        'name' => 'إقليم فولتا',
      ),
      10 => 
      array (
        'code' => 'WE',
        'name' => 'الإقليم الغربي',
      ),
    ),
    'GI' => 
    array (
      1 => 
      array (
        'code' => 'EAS',
        'name' => 'الجانب الشرقي',
      ),
      2 => 
      array (
        'code' => 'NOR',
        'name' => 'المقاطعة الشمالية',
      ),
      3 => 
      array (
        'code' => 'REC',
        'name' => 'مناطق الاستصلاح',
      ),
      4 => 
      array (
        'code' => 'SAN',
        'name' => 'منطقة ساندبيتس',
      ),
      5 => 
      array (
        'code' => 'SOU',
        'name' => 'الإقليم الجنوبي',
      ),
      6 => 
      array (
        'code' => 'TOW',
        'name' => 'منطقة تاون',
      ),
      7 => 
      array (
        'code' => 'UPP',
        'name' => 'مدينة أبر',
      ),
      8 => 
      array (
        'code' => 'OTH',
        'name' => 'أخرى',
      ),
    ),
    'GL' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'أفانا',
      ),
      2 => 
      array (
        'code' => 'T',
        'name' => 'تونو',
      ),
      3 => 
      array (
        'code' => 'K',
        'name' => 'كيتا',
      ),
    ),
    'GM' => 
    array (
      1 => 
      array (
        'code' => 'BJ',
        'name' => 'بانجول',
      ),
      2 => 
      array (
        'code' => 'BS',
        'name' => 'باسي',
      ),
      3 => 
      array (
        'code' => 'BR',
        'name' => 'بريكاما',
      ),
      4 => 
      array (
        'code' => 'JA',
        'name' => 'جان جانبور',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'كانيفينج',
      ),
      6 => 
      array (
        'code' => 'KE',
        'name' => 'كيروان',
      ),
      7 => 
      array (
        'code' => 'KU',
        'name' => 'كانتور',
      ),
      8 => 
      array (
        'code' => 'MA',
        'name' => 'مانسا كونكو',
      ),
      9 => 
      array (
        'code' => 'LR',
        'name' => 'لوير ريفر',
      ),
      10 => 
      array (
        'code' => 'CR',
        'name' => 'سينترال ريفر',
      ),
      11 => 
      array (
        'code' => 'NB',
        'name' => 'نورث بانك',
      ),
      12 => 
      array (
        'code' => 'UR',
        'name' => 'أبر ريفر',
      ),
      13 => 
      array (
        'code' => 'WE',
        'name' => 'ويسترن',
      ),
    ),
    'GN' => 
    array (
      1 => 
      array (
        'code' => 'CNK',
        'name' => 'كوناكري',
      ),
      2 => 
      array (
        'code' => 'BYL',
        'name' => 'بييلا',
      ),
      3 => 
      array (
        'code' => 'BFA',
        'name' => 'بوفا',
      ),
      4 => 
      array (
        'code' => 'BOK',
        'name' => 'بوكي',
      ),
      5 => 
      array (
        'code' => 'COY',
        'name' => 'كويا',
      ),
      6 => 
      array (
        'code' => 'DBL',
        'name' => 'دابولا',
      ),
      7 => 
      array (
        'code' => 'DLB',
        'name' => 'دالابا',
      ),
      8 => 
      array (
        'code' => 'DGR',
        'name' => 'دينجويريا',
      ),
      9 => 
      array (
        'code' => 'DBR',
        'name' => 'دوبريكا',
      ),
      10 => 
      array (
        'code' => 'FRN',
        'name' => 'فرانة',
      ),
      11 => 
      array (
        'code' => 'FRC',
        'name' => 'فوريكاريا',
      ),
      12 => 
      array (
        'code' => 'FRI',
        'name' => 'فريا',
      ),
      13 => 
      array (
        'code' => 'GAO',
        'name' => 'جوالا',
      ),
      14 => 
      array (
        'code' => 'GCD',
        'name' => 'جويكيدو',
      ),
      15 => 
      array (
        'code' => 'KNK',
        'name' => 'كانكان',
      ),
      16 => 
      array (
        'code' => 'KRN',
        'name' => 'كيروان',
      ),
      17 => 
      array (
        'code' => 'KND',
        'name' => 'كينديا',
      ),
      18 => 
      array (
        'code' => 'KSD',
        'name' => 'كيسيدوجو',
      ),
      19 => 
      array (
        'code' => 'KBA',
        'name' => 'كوبيا',
      ),
      20 => 
      array (
        'code' => 'KDA',
        'name' => 'كوندارا',
      ),
      21 => 
      array (
        'code' => 'KRA',
        'name' => 'كوروسا',
      ),
      22 => 
      array (
        'code' => 'LAB',
        'name' => 'لابي',
      ),
      23 => 
      array (
        'code' => 'LLM',
        'name' => 'ليلوما',
      ),
      24 => 
      array (
        'code' => 'LOL',
        'name' => 'لولا',
      ),
      25 => 
      array (
        'code' => 'MCT',
        'name' => 'ماسينتا',
      ),
      26 => 
      array (
        'code' => 'MAL',
        'name' => 'مالي',
      ),
      27 => 
      array (
        'code' => 'MAM',
        'name' => 'مامو',
      ),
      28 => 
      array (
        'code' => 'MAN',
        'name' => 'مانديانا',
      ),
      29 => 
      array (
        'code' => 'NZR',
        'name' => 'نزيريكوري',
      ),
      30 => 
      array (
        'code' => 'PIT',
        'name' => 'بيتا',
      ),
      31 => 
      array (
        'code' => 'SIG',
        'name' => 'سيجيري',
      ),
      32 => 
      array (
        'code' => 'TLM',
        'name' => 'تيليميلي',
      ),
      33 => 
      array (
        'code' => 'TOG',
        'name' => 'توجي',
      ),
      34 => 
      array (
        'code' => 'YOM',
        'name' => 'يومو',
      ),
    ),
    'GP' => 
    array (
      1 => 
      array (
        'code' => 'ARR',
        'name' => 'قضاء جواديلوب',
      ),
      2 => 
      array (
        'code' => 'CAN',
        'name' => 'إقليم قسم جاديلوب',
      ),
      3 => 
      array (
        'code' => 'COM',
        'name' => 'مجتمعات قسم جاديلوب',
      ),
    ),
    'GQ' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'بروفينسيا أنوبون',
      ),
      2 => 
      array (
        'code' => 'BN',
        'name' => 'بروفينسيا بيوكو نورت',
      ),
      3 => 
      array (
        'code' => 'BS',
        'name' => 'بروفينسيا بيوكو سور',
      ),
      4 => 
      array (
        'code' => 'CS',
        'name' => 'بروفينسيا سنترو سور',
      ),
      5 => 
      array (
        'code' => 'KN',
        'name' => 'بروفينسيا كي نتيم',
      ),
      6 => 
      array (
        'code' => 'LI',
        'name' => 'بروفينسيا ليتورال',
      ),
      7 => 
      array (
        'code' => 'WN',
        'name' => 'بروفينسيا ويلي نزاس',
      ),
    ),
    'GR' => 
    array (
      1 => 
      array (
        'code' => 'AT',
        'name' => 'أتيكا',
      ),
      2 => 
      array (
        'code' => 'CN',
        'name' => 'اليونان الوسطى',
      ),
      3 => 
      array (
        'code' => 'CM',
        'name' => 'مقدونيا الوسطى',
      ),
      4 => 
      array (
        'code' => 'CR',
        'name' => 'كريت',
      ),
      5 => 
      array (
        'code' => 'EM',
        'name' => 'مقدونيا الشرقية وثراس',
      ),
      6 => 
      array (
        'code' => 'EP',
        'name' => 'إيبروس',
      ),
      7 => 
      array (
        'code' => 'II',
        'name' => 'جزر لونيان',
      ),
      8 => 
      array (
        'code' => 'NA',
        'name' => 'إيجان الشمالية',
      ),
      9 => 
      array (
        'code' => 'PP',
        'name' => 'بيلو بونيسوس',
      ),
      10 => 
      array (
        'code' => 'SA',
        'name' => 'إيجه الجنوبي',
      ),
      11 => 
      array (
        'code' => 'TH',
        'name' => 'سيساللي',
      ),
      12 => 
      array (
        'code' => 'WG',
        'name' => 'اليونان الغربية',
      ),
      13 => 
      array (
        'code' => 'WM',
        'name' => 'مقدونيا الغربية',
      ),
    ),
    'GT' => 
    array (
      1 => 
      array (
        'code' => 'AV',
        'name' => 'التا فيراباز',
      ),
      2 => 
      array (
        'code' => 'BV',
        'name' => 'باجا فيراباز',
      ),
      3 => 
      array (
        'code' => 'CM',
        'name' => 'كيمالتناجو',
      ),
      4 => 
      array (
        'code' => 'CQ',
        'name' => 'شيكيمولا',
      ),
      5 => 
      array (
        'code' => 'PE',
        'name' => 'بيتين',
      ),
      6 => 
      array (
        'code' => 'PR',
        'name' => 'بروجريسو',
      ),
      7 => 
      array (
        'code' => 'QC',
        'name' => 'إل كيشي',
      ),
      8 => 
      array (
        'code' => 'ES',
        'name' => 'إيسكونتيلا',
      ),
      9 => 
      array (
        'code' => 'GU',
        'name' => 'جواتيمالا',
      ),
      10 => 
      array (
        'code' => 'HU',
        'name' => 'هيهيتينانجو',
      ),
      11 => 
      array (
        'code' => 'IZ',
        'name' => 'إيزابيل',
      ),
      12 => 
      array (
        'code' => 'JA',
        'name' => 'جالابا',
      ),
      13 => 
      array (
        'code' => 'JU',
        'name' => 'جوتيابا',
      ),
      14 => 
      array (
        'code' => 'QZ',
        'name' => 'كويتز التينانجو',
      ),
      15 => 
      array (
        'code' => 'RE',
        'name' => 'ريتا هوليل',
      ),
      16 => 
      array (
        'code' => 'ST',
        'name' => 'ساكاتيبيكيز',
      ),
      17 => 
      array (
        'code' => 'SM',
        'name' => 'سان ماركوس',
      ),
      18 => 
      array (
        'code' => 'SR',
        'name' => 'سانتا روزا',
      ),
      19 => 
      array (
        'code' => 'SO',
        'name' => 'سولولا',
      ),
      20 => 
      array (
        'code' => 'SU',
        'name' => 'سوشيتبيكيز',
      ),
      21 => 
      array (
        'code' => 'TO',
        'name' => 'توتونيكابان',
      ),
      22 => 
      array (
        'code' => 'ZA',
        'name' => 'زاكابا',
      ),
    ),
    'GU' => 
    array (
      1 => 
      array (
        'code' => 'AGA',
        'name' => 'مرتفعات أجانا',
      ),
      2 => 
      array (
        'code' => 'AGA',
        'name' => 'أجات',
      ),
      3 => 
      array (
        'code' => 'ASA',
        'name' => 'أسان ماينا',
      ),
      4 => 
      array (
        'code' => 'BAR',
        'name' => 'باريجادا',
      ),
      5 => 
      array (
        'code' => 'CHA',
        'name' => 'شالان باجو أوردوت',
      ),
      6 => 
      array (
        'code' => 'DED',
        'name' => 'ديديدو',
      ),
      7 => 
      array (
        'code' => 'HAG',
        'name' => 'هاجاتنا',
      ),
      8 => 
      array (
        'code' => 'INA',
        'name' => 'ايناراجان',
      ),
      9 => 
      array (
        'code' => 'MAN',
        'name' => 'مانجيلاو',
      ),
      10 => 
      array (
        'code' => 'MER',
        'name' => 'ميريزو',
      ),
      11 => 
      array (
        'code' => 'MON',
        'name' => 'مونجمونج توتو مايت',
      ),
      12 => 
      array (
        'code' => 'PIT',
        'name' => 'بيتي',
      ),
      13 => 
      array (
        'code' => 'SAN',
        'name' => 'سانتا ريتا',
      ),
      14 => 
      array (
        'code' => 'SIN',
        'name' => 'سينا جانا',
      ),
      15 => 
      array (
        'code' => 'TAL',
        'name' => 'تالوفوفو',
      ),
      16 => 
      array (
        'code' => 'TAM',
        'name' => 'تامونينج',
      ),
      17 => 
      array (
        'code' => 'UMA',
        'name' => 'أوماتاك',
      ),
      18 => 
      array (
        'code' => 'YIG',
        'name' => 'يجو',
      ),
      19 => 
      array (
        'code' => 'YON',
        'name' => 'يونا',
      ),
    ),
    'GW' => 
    array (
      1 => 
      array (
        'code' => 'BF',
        'name' => 'إقليم بافتا',
      ),
      2 => 
      array (
        'code' => 'BB',
        'name' => 'إقليم بيومبو',
      ),
      3 => 
      array (
        'code' => 'BS',
        'name' => 'إقليم بيساو',
      ),
      4 => 
      array (
        'code' => 'BL',
        'name' => 'إقليم بولاما',
      ),
      5 => 
      array (
        'code' => 'CA',
        'name' => 'إقليم كاشيو',
      ),
      6 => 
      array (
        'code' => 'GA',
        'name' => 'إقليم جابو',
      ),
      7 => 
      array (
        'code' => 'OI',
        'name' => 'إقليم أويو',
      ),
      8 => 
      array (
        'code' => 'QU',
        'name' => 'إقليم كينارا',
      ),
      9 => 
      array (
        'code' => 'TO',
        'name' => 'إقليم تومبالي',
      ),
    ),
    'GY' => 
    array (
      1 => 
      array (
        'code' => 'BW',
        'name' => 'باريما وايني',
      ),
      2 => 
      array (
        'code' => 'CM',
        'name' => 'سيوني مازاروني',
      ),
      3 => 
      array (
        'code' => 'DM',
        'name' => 'ديميرارا ماهايكا',
      ),
      4 => 
      array (
        'code' => 'EC',
        'name' => 'بيربيس كورنتن الشرقية',
      ),
      5 => 
      array (
        'code' => 'EW',
        'name' => 'جزر إيسكويبو غرب ديمرارا',
      ),
      6 => 
      array (
        'code' => 'MB',
        'name' => 'ماهايكا بيربيك',
      ),
      7 => 
      array (
        'code' => 'PM',
        'name' => 'بوميرون سوبينام',
      ),
      8 => 
      array (
        'code' => 'PI',
        'name' => 'بوتارو سيباروني',
      ),
      9 => 
      array (
        'code' => 'UD',
        'name' => 'ديماريرا بيربيس العليا',
      ),
      10 => 
      array (
        'code' => 'UT',
        'name' => 'تاكوتو العليا إيسكويبو العليا',
      ),
    ),
    'HK' => 
    array (
      1 => 
      array (
        'code' => 'HCW',
        'name' => 'هونج كونج الوسطى والغربية',
      ),
      2 => 
      array (
        'code' => 'HEA',
        'name' => 'جزيرة هونج كونج الشرقية',
      ),
      3 => 
      array (
        'code' => 'HSO',
        'name' => 'جزيرة هونج كونج الجنوبية',
      ),
      4 => 
      array (
        'code' => 'HWC',
        'name' => 'جزيرة هونج كونج وان شي',
      ),
      5 => 
      array (
        'code' => 'KKC',
        'name' => 'كاولون سيتي كاولون',
      ),
      6 => 
      array (
        'code' => 'KKT',
        'name' => 'كوون تونج كاولون',
      ),
      7 => 
      array (
        'code' => 'KSS',
        'name' => 'شام شوي بو كاولون',
      ),
      8 => 
      array (
        'code' => 'KWT',
        'name' => 'وونج تاي سين كاولون',
      ),
      9 => 
      array (
        'code' => 'KYT',
        'name' => 'ياو تسيم مونج كاولون',
      ),
      10 => 
      array (
        'code' => 'NIS',
        'name' => 'جزر المقاطعات الجديدة',
      ),
      11 => 
      array (
        'code' => 'NKT',
        'name' => 'مقاطعات كواي تسينج الجديدة',
      ),
      12 => 
      array (
        'code' => 'NNO',
        'name' => 'المقاطعات الشمالية الجديدة',
      ),
      13 => 
      array (
        'code' => 'NSK',
        'name' => 'مقاطعات ساي كونج الجديدة',
      ),
      14 => 
      array (
        'code' => 'NST',
        'name' => 'مقاطعات شا تين الجديدة',
      ),
      15 => 
      array (
        'code' => 'NTP',
        'name' => 'مقاطعات تاي بو الجديدة',
      ),
      16 => 
      array (
        'code' => 'NTW',
        'name' => 'مقاطعات تسيوان وان الجديدة',
      ),
      17 => 
      array (
        'code' => 'NTM',
        'name' => 'مقاطعات توين وان الجديدة',
      ),
      18 => 
      array (
        'code' => 'NYL',
        'name' => 'مقاطعات يوان لونج الجديدة',
      ),
    ),
    'HM' => 
    array (
      1 => 
      array (
        'code' => 'F',
        'name' => 'جزيرة فلات',
      ),
      2 => 
      array (
        'code' => 'M',
        'name' => 'جزيرة ماكدونالد',
      ),
      3 => 
      array (
        'code' => 'S',
        'name' => 'جزيرة شاج',
      ),
      4 => 
      array (
        'code' => 'H',
        'name' => 'جزيرة هيرد',
      ),
    ),
    'HN' => 
    array (
      1 => 
      array (
        'code' => 'AT',
        'name' => 'أتلانتيدا',
      ),
      2 => 
      array (
        'code' => 'CH',
        'name' => 'شولوتيكا',
      ),
      3 => 
      array (
        'code' => 'Cl',
        'name' => 'كولون',
      ),
      4 => 
      array (
        'code' => 'CM',
        'name' => 'كوماياجوا',
      ),
      5 => 
      array (
        'code' => 'CP',
        'name' => 'كوبان',
      ),
      6 => 
      array (
        'code' => 'CR',
        'name' => 'كورتيس',
      ),
      7 => 
      array (
        'code' => 'PA',
        'name' => 'إل بارايسو',
      ),
      8 => 
      array (
        'code' => 'FM',
        'name' => 'فرانشيسكو مورازان',
      ),
      9 => 
      array (
        'code' => 'GD',
        'name' => 'جراتسياس أ ديوس',
      ),
      10 => 
      array (
        'code' => 'IN',
        'name' => 'أنتيبوكا',
      ),
      11 => 
      array (
        'code' => 'IB',
        'name' => 'إيسلاس لا باهيا (جزر باي)',
      ),
      12 => 
      array (
        'code' => 'PZ',
        'name' => 'لاباز',
      ),
      13 => 
      array (
        'code' => 'LE',
        'name' => 'لمبيرا',
      ),
      14 => 
      array (
        'code' => 'OC',
        'name' => 'أوكوتيبيك',
      ),
      15 => 
      array (
        'code' => 'OL',
        'name' => 'أولانشو',
      ),
      16 => 
      array (
        'code' => 'SB',
        'name' => 'سانتا باربرا',
      ),
      17 => 
      array (
        'code' => 'VA',
        'name' => 'فالي',
      ),
      18 => 
      array (
        'code' => 'YO',
        'name' => 'يورو',
      ),
    ),
    'HR' => 
    array (
      1 => 
      array (
        'code' => 'BB',
        'name' => 'بيلوفار بيلوجورا',
      ),
      2 => 
      array (
        'code' => 'CZ',
        'name' => 'مدينة زغرب',
      ),
      3 => 
      array (
        'code' => 'DN',
        'name' => 'دوبروفينك نيريتفا',
      ),
      4 => 
      array (
        'code' => 'IS',
        'name' => 'ايسترا',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'كارلوفاك',
      ),
      6 => 
      array (
        'code' => 'KK',
        'name' => 'كوبريفينكا كريزفيتشي',
      ),
      7 => 
      array (
        'code' => 'KZ',
        'name' => 'كرابينا زاجوري',
      ),
      8 => 
      array (
        'code' => 'LS',
        'name' => 'ليكا سينج',
      ),
      9 => 
      array (
        'code' => 'ME',
        'name' => 'ميديمورجي',
      ),
      10 => 
      array (
        'code' => 'OB',
        'name' => 'أوسيك بارانجا',
      ),
      11 => 
      array (
        'code' => 'PS',
        'name' => 'بوزيجا سلافونيا',
      ),
      12 => 
      array (
        'code' => 'PG',
        'name' => 'بريموجي جورسكي كوتار',
      ),
      13 => 
      array (
        'code' => 'SI',
        'name' => 'سيبنيك',
      ),
      14 => 
      array (
        'code' => 'SM',
        'name' => 'سيساك موسلافينا',
      ),
      15 => 
      array (
        'code' => 'SB',
        'name' => 'سلافونسكي برود بوسافينا',
      ),
      16 => 
      array (
        'code' => 'SD',
        'name' => 'سبليت دالماتيا',
      ),
      17 => 
      array (
        'code' => 'VA',
        'name' => 'فارازدين',
      ),
      18 => 
      array (
        'code' => 'VP',
        'name' => 'فيروفيتكا بودرافنيا',
      ),
      19 => 
      array (
        'code' => 'VS',
        'name' => 'فوكوفار سريجيم',
      ),
      20 => 
      array (
        'code' => 'ZK',
        'name' => 'زادار كنين',
      ),
      21 => 
      array (
        'code' => 'ZA',
        'name' => 'زغرب',
      ),
    ),
    'HT' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'أرتيبونيت',
      ),
      2 => 
      array (
        'code' => 'CE',
        'name' => 'سينتري',
      ),
      3 => 
      array (
        'code' => 'GA',
        'name' => 'جراند أنس',
      ),
      4 => 
      array (
        'code' => 'ND',
        'name' => 'نورد',
      ),
      5 => 
      array (
        'code' => 'NE',
        'name' => 'الشمال الشرقي',
      ),
      6 => 
      array (
        'code' => 'NO',
        'name' => 'الشمالي الغربي',
      ),
      7 => 
      array (
        'code' => 'OU',
        'name' => 'الغرب',
      ),
      8 => 
      array (
        'code' => 'SD',
        'name' => 'جنوب',
      ),
      9 => 
      array (
        'code' => 'SE',
        'name' => 'الجنوب الشرقي',
      ),
    ),
    'HU' => 
    array (
      1 => 
      array (
        'code' => 'BK',
        'name' => 'باكس كيسكون',
      ),
      2 => 
      array (
        'code' => 'BA',
        'name' => 'بارانيا',
      ),
      3 => 
      array (
        'code' => 'BE',
        'name' => 'بيكيس',
      ),
      4 => 
      array (
        'code' => 'BS',
        'name' => 'بيكيسكابا',
      ),
      5 => 
      array (
        'code' => 'BZ',
        'name' => 'بورسود أبوج زيمبلين',
      ),
      6 => 
      array (
        'code' => 'BU',
        'name' => 'بودابست',
      ),
      7 => 
      array (
        'code' => 'CS',
        'name' => 'كونجراد',
      ),
      8 => 
      array (
        'code' => 'DE',
        'name' => 'ديبرسين',
      ),
      9 => 
      array (
        'code' => 'DU',
        'name' => 'دوناجافاروس',
      ),
      10 => 
      array (
        'code' => 'EG',
        'name' => 'إيجير',
      ),
      11 => 
      array (
        'code' => 'FE',
        'name' => 'فيجير',
      ),
      12 => 
      array (
        'code' => 'GY',
        'name' => 'جيور',
      ),
      13 => 
      array (
        'code' => 'GM',
        'name' => 'جيور موسون سوبرون',
      ),
      14 => 
      array (
        'code' => 'HB',
        'name' => 'هاجدو بيهار',
      ),
      15 => 
      array (
        'code' => 'HE',
        'name' => 'هيفيس',
      ),
      16 => 
      array (
        'code' => 'HO',
        'name' => 'هودميزوفاسارهلي',
      ),
      17 => 
      array (
        'code' => 'JN',
        'name' => 'جاسز ناجيون زولنوك',
      ),
      18 => 
      array (
        'code' => 'KA',
        'name' => 'كابوسفار',
      ),
      19 => 
      array (
        'code' => 'KE',
        'name' => 'كيسكيميت',
      ),
      20 => 
      array (
        'code' => 'KO',
        'name' => 'كوماروم إيستيرجيروم',
      ),
      21 => 
      array (
        'code' => 'MI',
        'name' => 'ميسكولوك',
      ),
      22 => 
      array (
        'code' => 'NA',
        'name' => 'ناجي كانزيسا',
      ),
      23 => 
      array (
        'code' => 'NO',
        'name' => 'نوجراد',
      ),
      24 => 
      array (
        'code' => 'NY',
        'name' => 'نيريجهازا',
      ),
      25 => 
      array (
        'code' => 'PE',
        'name' => 'بيسيس',
      ),
      26 => 
      array (
        'code' => 'PS',
        'name' => 'بيست',
      ),
      27 => 
      array (
        'code' => 'SO',
        'name' => 'سوموجي',
      ),
      28 => 
      array (
        'code' => 'SP',
        'name' => 'سوبرون',
      ),
      29 => 
      array (
        'code' => 'SS',
        'name' => 'سابولكس زاتمار بيريج',
      ),
      30 => 
      array (
        'code' => 'SZ',
        'name' => 'سيجيد',
      ),
      31 => 
      array (
        'code' => 'SE',
        'name' => 'زيكيسفيهرفار',
      ),
      32 => 
      array (
        'code' => 'SL',
        'name' => 'زولونك',
      ),
      33 => 
      array (
        'code' => 'SM',
        'name' => 'زومباسيلي',
      ),
      34 => 
      array (
        'code' => 'TA',
        'name' => 'تاتابانيا',
      ),
      35 => 
      array (
        'code' => 'TO',
        'name' => 'تولنا',
      ),
      36 => 
      array (
        'code' => 'VA',
        'name' => 'فاس',
      ),
      37 => 
      array (
        'code' => 'VE',
        'name' => 'فيزبريم',
      ),
      38 => 
      array (
        'code' => 'ZA',
        'name' => 'زالا',
      ),
      39 => 
      array (
        'code' => 'ZZ',
        'name' => 'زالاإيجيرسيج',
      ),
    ),
    'ID' => 
    array (
      1 => 
      array (
        'code' => 'DA',
        'name' => 'ديستا أسيه',
      ),
      2 => 
      array (
        'code' => 'SU',
        'name' => 'سوماطرا أوتارا',
      ),
      3 => 
      array (
        'code' => 'SB',
        'name' => 'سوماطرا بارات',
      ),
      4 => 
      array (
        'code' => 'SI',
        'name' => 'ريو',
      ),
      5 => 
      array (
        'code' => 'JA',
        'name' => 'جامبي',
      ),
      6 => 
      array (
        'code' => 'SS',
        'name' => 'سوماطرا سلطان',
      ),
      7 => 
      array (
        'code' => 'BE',
        'name' => 'بينجولو',
      ),
      8 => 
      array (
        'code' => 'LA',
        'name' => 'لامبونج',
      ),
      9 => 
      array (
        'code' => 'JK',
        'name' => 'دكي جاكرتا',
      ),
      10 => 
      array (
        'code' => 'JB',
        'name' => 'جاوا بارات',
      ),
      11 => 
      array (
        'code' => 'JT',
        'name' => 'جاوا تينجا',
      ),
      12 => 
      array (
        'code' => 'DY',
        'name' => 'دياستا يوجيكارتا',
      ),
      13 => 
      array (
        'code' => 'JT',
        'name' => 'جاوا تيمور',
      ),
      14 => 
      array (
        'code' => 'KB',
        'name' => 'كاليمنتان بارات',
      ),
      15 => 
      array (
        'code' => 'KT',
        'name' => 'كاليمنان تينجا',
      ),
      16 => 
      array (
        'code' => 'KI',
        'name' => 'كاليمنتان تيمور',
      ),
      17 => 
      array (
        'code' => 'KS',
        'name' => 'كاليمنتان سيلانتان',
      ),
      18 => 
      array (
        'code' => 'BA',
        'name' => 'بالي',
      ),
      19 => 
      array (
        'code' => 'NB',
        'name' => 'نوسا تينجارا بارات',
      ),
      20 => 
      array (
        'code' => 'Nt',
        'name' => 'نوسا تينجارا تيمور',
      ),
      21 => 
      array (
        'code' => 'SN',
        'name' => 'سولاويسي سيلتان',
      ),
      22 => 
      array (
        'code' => 'ST',
        'name' => 'سولاويسي تينجه',
      ),
      23 => 
      array (
        'code' => 'SA',
        'name' => 'سولاويسي اوتارا',
      ),
      24 => 
      array (
        'code' => 'SG',
        'name' => 'سولا ويسي تينجارا',
      ),
      25 => 
      array (
        'code' => 'MA',
        'name' => 'مالوكو',
      ),
      26 => 
      array (
        'code' => 'MU',
        'name' => 'مالوكو اوتارا',
      ),
      27 => 
      array (
        'code' => 'IJ',
        'name' => 'ايريان جايا تيمور',
      ),
      28 => 
      array (
        'code' => 'IT',
        'name' => 'ايريان جايا تينجا',
      ),
      29 => 
      array (
        'code' => 'IB',
        'name' => 'ايريان جاوا بارات',
      ),
      30 => 
      array (
        'code' => 'BT',
        'name' => 'بانتين',
      ),
      31 => 
      array (
        'code' => 'BB',
        'name' => 'بانجكا بيليتونج',
      ),
      32 => 
      array (
        'code' => 'GO',
        'name' => 'جورونتالو',
      ),
    ),
    'IE' => 
    array (
      1 => 
      array (
        'code' => 'CA',
        'name' => 'كارلو',
      ),
      2 => 
      array (
        'code' => 'CV',
        'name' => 'كافان',
      ),
      3 => 
      array (
        'code' => 'Cl',
        'name' => 'كلار',
      ),
      4 => 
      array (
        'code' => 'CO',
        'name' => 'كورك',
      ),
      5 => 
      array (
        'code' => 'DO',
        'name' => 'دونجال',
      ),
      6 => 
      array (
        'code' => 'DU',
        'name' => 'دبلن',
      ),
      7 => 
      array (
        'code' => 'GA',
        'name' => 'جالواي',
      ),
      8 => 
      array (
        'code' => 'KE',
        'name' => 'كيري',
      ),
      9 => 
      array (
        'code' => 'KI',
        'name' => 'كيلدار',
      ),
      10 => 
      array (
        'code' => 'KL',
        'name' => 'كيلكيني',
      ),
      11 => 
      array (
        'code' => 'LA',
        'name' => 'لاوس',
      ),
      12 => 
      array (
        'code' => 'LE',
        'name' => 'ليتريم',
      ),
      13 => 
      array (
        'code' => 'LI',
        'name' => 'ليميريك',
      ),
      14 => 
      array (
        'code' => 'LO',
        'name' => 'لونجفورد',
      ),
      15 => 
      array (
        'code' => 'LU',
        'name' => 'لوث',
      ),
      16 => 
      array (
        'code' => 'MA',
        'name' => 'مايو',
      ),
      17 => 
      array (
        'code' => 'ME',
        'name' => 'ميث',
      ),
      18 => 
      array (
        'code' => 'MO',
        'name' => 'مناغان',
      ),
      19 => 
      array (
        'code' => 'OF',
        'name' => 'أوفالي',
      ),
      20 => 
      array (
        'code' => 'RO',
        'name' => 'روسكومون',
      ),
      21 => 
      array (
        'code' => 'SL',
        'name' => 'سليجو',
      ),
      22 => 
      array (
        'code' => 'TI',
        'name' => 'تيبيراري',
      ),
      23 => 
      array (
        'code' => 'WA',
        'name' => 'ووترفورد',
      ),
      24 => 
      array (
        'code' => 'WE',
        'name' => 'ميث الغربية',
      ),
      25 => 
      array (
        'code' => 'WX',
        'name' => 'ويكسفورد',
      ),
      26 => 
      array (
        'code' => 'WI',
        'name' => 'ويكلو',
      ),
    ),
    'IL' => 
    array (
      1 => 
      array (
        'code' => 'BS',
        'name' => 'بئر شيفع',
      ),
      2 => 
      array (
        'code' => 'BH',
        'name' => 'بقعة هياردين',
      ),
      3 => 
      array (
        'code' => 'EA',
        'name' => 'ايلات وارفاة',
      ),
      4 => 
      array (
        'code' => 'GA',
        'name' => 'خليل',
      ),
      5 => 
      array (
        'code' => 'HA',
        'name' => 'حيفا',
      ),
      6 => 
      array (
        'code' => 'JM',
        'name' => 'جبال يهودا',
      ),
      7 => 
      array (
        'code' => 'JE',
        'name' => 'القدس',
      ),
      8 => 
      array (
        'code' => 'NE',
        'name' => 'نيجيف',
      ),
      10 => 
      array (
        'code' => 'SE',
        'name' => 'سوماريا',
      ),
      11 => 
      array (
        'code' => 'SH',
        'name' => 'شارون',
      ),
      12 => 
      array (
        'code' => 'TA',
        'name' => 'تل أبيب (جوش دان)',
      ),
    ),
    'IN' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'أندامان وجزر نيكوبار',
      ),
      2 => 
      array (
        'code' => 'AP',
        'name' => 'أندهارا براديش',
      ),
      3 => 
      array (
        'code' => 'AR',
        'name' => 'أرونشال براديش',
      ),
      4 => 
      array (
        'code' => 'AS',
        'name' => 'أسام',
      ),
      5 => 
      array (
        'code' => 'BI',
        'name' => 'بيهار',
      ),
      6 => 
      array (
        'code' => 'CH',
        'name' => 'شانديجار',
      ),
      7 => 
      array (
        'code' => 'DA',
        'name' => 'دادرا وناجار هافيلي',
      ),
      8 => 
      array (
        'code' => 'DM',
        'name' => 'دامان وديو',
      ),
      9 => 
      array (
        'code' => 'DE',
        'name' => 'ديلهي',
      ),
      10 => 
      array (
        'code' => 'GO',
        'name' => 'جوا',
      ),
      11 => 
      array (
        'code' => 'GU',
        'name' => 'جوجارات',
      ),
      12 => 
      array (
        'code' => 'HA',
        'name' => 'هاريانا',
      ),
      13 => 
      array (
        'code' => 'HP',
        'name' => 'هيماكال براديش',
      ),
      14 => 
      array (
        'code' => 'JA',
        'name' => 'جامو وكشمير',
      ),
      15 => 
      array (
        'code' => 'KA',
        'name' => 'كارناتاكا',
      ),
      16 => 
      array (
        'code' => 'KE',
        'name' => 'كيرالا',
      ),
      17 => 
      array (
        'code' => 'LI',
        'name' => 'جزر لاكشادويب',
      ),
      18 => 
      array (
        'code' => 'MP',
        'name' => 'مادهيا براديش',
      ),
      19 => 
      array (
        'code' => 'MA',
        'name' => 'ماهارشترا',
      ),
      20 => 
      array (
        'code' => 'MN',
        'name' => 'مانيبور',
      ),
      21 => 
      array (
        'code' => 'ME',
        'name' => 'ميغالايا',
      ),
      22 => 
      array (
        'code' => 'MI',
        'name' => 'ميزورام',
      ),
      23 => 
      array (
        'code' => 'NA',
        'name' => 'ناجالاند',
      ),
      24 => 
      array (
        'code' => 'OR',
        'name' => 'أوريسا',
      ),
      25 => 
      array (
        'code' => 'PO',
        'name' => 'بنودشيري',
      ),
      26 => 
      array (
        'code' => 'PU',
        'name' => 'بنجاب',
      ),
      27 => 
      array (
        'code' => 'RA',
        'name' => 'راجيستان',
      ),
      28 => 
      array (
        'code' => 'SI',
        'name' => 'سيكيم',
      ),
      29 => 
      array (
        'code' => 'TN',
        'name' => 'تاميل نادو',
      ),
      30 => 
      array (
        'code' => 'TR',
        'name' => 'تريبورا',
      ),
      31 => 
      array (
        'code' => 'UP',
        'name' => 'أوتار براديش',
      ),
      32 => 
      array (
        'code' => 'WB',
        'name' => 'البنغال الغربية',
      ),
    ),
    'IO' => 
    array (
      1 => 
      array (
        'code' => 'DG',
        'name' => 'دييجو جارسيا',
      ),
      2 => 
      array (
        'code' => 'DI',
        'name' => 'جزيرة دانجر',
      ),
      3 => 
      array (
        'code' => 'EA',
        'name' => 'جزر إيجل',
      ),
      4 => 
      array (
        'code' => 'EG',
        'name' => 'جزر إيجمونت',
      ),
      5 => 
      array (
        'code' => 'NI',
        'name' => 'جزيرة نيلسونز',
      ),
      6 => 
      array (
        'code' => 'PB',
        'name' => 'بيروس بانوس',
      ),
      7 => 
      array (
        'code' => 'SI',
        'name' => 'جزر سولومون',
      ),
      8 => 
      array (
        'code' => 'TB',
        'name' => 'الإخوة الثلاثة',
      ),
    ),
    'IQ' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'الأنبار',
      ),
      2 => 
      array (
        'code' => 'AL',
        'name' => 'أربيل',
      ),
      3 => 
      array (
        'code' => 'BA',
        'name' => 'البصرة',
      ),
      4 => 
      array (
        'code' => 'BB',
        'name' => 'بابل',
      ),
      5 => 
      array (
        'code' => 'BD',
        'name' => 'بغداد',
      ),
      6 => 
      array (
        'code' => 'DH',
        'name' => 'داهوك',
      ),
      7 => 
      array (
        'code' => 'DQ',
        'name' => 'داهيكار',
      ),
      8 => 
      array (
        'code' => 'DY',
        'name' => 'ديالا',
      ),
      9 => 
      array (
        'code' => 'KB',
        'name' => 'كربلاء',
      ),
      10 => 
      array (
        'code' => 'MU',
        'name' => 'المثنى',
      ),
      11 => 
      array (
        'code' => 'MY',
        'name' => 'مايسان',
      ),
      12 => 
      array (
        'code' => 'NJ',
        'name' => 'النجف',
      ),
      13 => 
      array (
        'code' => 'NN',
        'name' => 'نينوا',
      ),
      14 => 
      array (
        'code' => 'QA',
        'name' => 'القادسية',
      ),
      15 => 
      array (
        'code' => 'SD',
        'name' => 'صلاح الدين',
      ),
      16 => 
      array (
        'code' => 'SL',
        'name' => 'السليمانية',
      ),
      17 => 
      array (
        'code' => 'TM',
        'name' => 'التميم',
      ),
      18 => 
      array (
        'code' => 'WS',
        'name' => 'وسيط',
      ),
    ),
    'IR' => 
    array (
      1 => 
      array (
        'code' => 'ARD',
        'name' => 'اردابيل',
      ),
      2 => 
      array (
        'code' => 'BSH',
        'name' => 'بوشهر',
      ),
      3 => 
      array (
        'code' => 'CMB',
        'name' => 'شاهار محل وباختاري',
      ),
      4 => 
      array (
        'code' => 'EAZ',
        'name' => 'أذريبيجان الشرقية',
      ),
      5 => 
      array (
        'code' => 'EFH',
        'name' => 'إصفهان',
      ),
      6 => 
      array (
        'code' => 'FAR',
        'name' => 'فارس',
      ),
      7 => 
      array (
        'code' => 'GIL',
        'name' => 'جيلان',
      ),
      8 => 
      array (
        'code' => 'GLS',
        'name' => 'جوليستان',
      ),
      9 => 
      array (
        'code' => 'HMD',
        'name' => 'هامادان',
      ),
      10 => 
      array (
        'code' => 'HRM',
        'name' => 'هورموزجان',
      ),
      11 => 
      array (
        'code' => 'ILM',
        'name' => 'لام',
      ),
      12 => 
      array (
        'code' => 'KBA',
        'name' => 'كوهكيليو وبويار أحمد',
      ),
      13 => 
      array (
        'code' => 'KRB',
        'name' => 'كيرمان',
      ),
      14 => 
      array (
        'code' => 'KRD',
        'name' => 'كردستان',
      ),
      15 => 
      array (
        'code' => 'KRM',
        'name' => 'كيرمن شاه',
      ),
      16 => 
      array (
        'code' => 'KZT',
        'name' => 'خوزستان',
      ),
      17 => 
      array (
        'code' => 'LRS',
        'name' => 'لوريستان',
      ),
      18 => 
      array (
        'code' => 'MKZ',
        'name' => 'ماركازي',
      ),
      19 => 
      array (
        'code' => 'MZD',
        'name' => 'مازندران',
      ),
      20 => 
      array (
        'code' => 'NKH',
        'name' => 'خراسان الشمالية',
      ),
      21 => 
      array (
        'code' => 'QAZ',
        'name' => 'كازفين',
      ),
      22 => 
      array (
        'code' => 'QOM',
        'name' => 'QOM',
      ),
      23 => 
      array (
        'code' => 'RKH',
        'name' => 'رازافي خراسان',
      ),
      24 => 
      array (
        'code' => 'SBL',
        'name' => 'سيستان وبالوشيستان',
      ),
      25 => 
      array (
        'code' => 'SKH',
        'name' => 'خراسان الجنوبية',
      ),
      26 => 
      array (
        'code' => 'SMN',
        'name' => 'سيم نان',
      ),
      27 => 
      array (
        'code' => 'TEH',
        'name' => 'طهران',
      ),
      28 => 
      array (
        'code' => 'WEZ',
        'name' => 'أذريبجان الغربية ',
      ),
      29 => 
      array (
        'code' => 'YZD',
        'name' => 'يلزد',
      ),
      30 => 
      array (
        'code' => 'ZAN',
        'name' => 'زانجان',
      ),
    ),
    'IS' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'أوسترلاند',
      ),
      2 => 
      array (
        'code' => 'HF',
        'name' => 'هوفوبورجارسفايو',
      ),
      3 => 
      array (
        'code' => 'NE',
        'name' => 'نورورلاند أيسترا',
      ),
      4 => 
      array (
        'code' => 'NV',
        'name' => 'نورولاند فيسترا',
      ),
      5 => 
      array (
        'code' => 'SL',
        'name' => 'سورلاند',
      ),
      6 => 
      array (
        'code' => 'SN',
        'name' => 'سورونوس',
      ),
      7 => 
      array (
        'code' => 'VF',
        'name' => 'فيستفيروار',
      ),
      8 => 
      array (
        'code' => 'VL',
        'name' => 'فيستورلاند',
      ),
    ),
    'IT' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'أجرينجنتو',
      ),
      2 => 
      array (
        'code' => 'AL',
        'name' => 'اليساندريا',
      ),
      3 => 
      array (
        'code' => 'AN',
        'name' => 'انكونا',
      ),
      4 => 
      array (
        'code' => 'AO',
        'name' => 'ـوستا',
      ),
      5 => 
      array (
        'code' => 'AR',
        'name' => 'اريزو',
      ),
      6 => 
      array (
        'code' => 'AP',
        'name' => 'اسكولي بيسينو',
      ),
      7 => 
      array (
        'code' => 'AT',
        'name' => 'استي',
      ),
      8 => 
      array (
        'code' => 'AV',
        'name' => 'افيلينو',
      ),
      9 => 
      array (
        'code' => 'BA',
        'name' => 'باري',
      ),
      10 => 
      array (
        'code' => 'BL',
        'name' => 'بيلينو',
      ),
      11 => 
      array (
        'code' => 'BN',
        'name' => 'بينيفينتو',
      ),
      12 => 
      array (
        'code' => 'BG',
        'name' => 'بيرجامو',
      ),
      13 => 
      array (
        'code' => 'BI',
        'name' => 'بيلا',
      ),
      14 => 
      array (
        'code' => 'BO',
        'name' => 'بولوجنا',
      ),
      15 => 
      array (
        'code' => 'BZ',
        'name' => 'بولزانو',
      ),
      16 => 
      array (
        'code' => 'BS',
        'name' => 'بريسيشيا',
      ),
      17 => 
      array (
        'code' => 'BR',
        'name' => 'برينديسي',
      ),
      18 => 
      array (
        'code' => 'CA',
        'name' => 'كاجلياري',
      ),
      19 => 
      array (
        'code' => 'Cl',
        'name' => 'كالتانيسيتا',
      ),
      20 => 
      array (
        'code' => 'CB',
        'name' => 'كامبوباسو ',
      ),
      21 => 
      array (
        'code' => 'CE',
        'name' => 'كاسيرتا',
      ),
      22 => 
      array (
        'code' => 'CT',
        'name' => 'كاتانيا',
      ),
      23 => 
      array (
        'code' => 'CZ',
        'name' => 'كاتانزارو',
      ),
      24 => 
      array (
        'code' => 'CH',
        'name' => 'شيتي',
      ),
      25 => 
      array (
        'code' => 'CO',
        'name' => 'كومو',
      ),
      26 => 
      array (
        'code' => 'CS',
        'name' => 'كوزينسا',
      ),
      27 => 
      array (
        'code' => 'CR',
        'name' => 'كريمونا',
      ),
      28 => 
      array (
        'code' => 'KR',
        'name' => 'كروتون',
      ),
      29 => 
      array (
        'code' => 'CN',
        'name' => 'كونيو',
      ),
      30 => 
      array (
        'code' => 'EN',
        'name' => 'أينا',
      ),
      31 => 
      array (
        'code' => 'FE',
        'name' => 'فيرارا',
      ),
      32 => 
      array (
        'code' => 'FI',
        'name' => 'فيرنزا',
      ),
      33 => 
      array (
        'code' => 'FG',
        'name' => 'فوجيا',
      ),
      34 => 
      array (
        'code' => 'FO',
        'name' => 'فوريلي',
      ),
      35 => 
      array (
        'code' => 'FR',
        'name' => 'فروسينون',
      ),
      36 => 
      array (
        'code' => 'GE',
        'name' => 'جنيف',
      ),
      37 => 
      array (
        'code' => 'GO',
        'name' => 'جوريزيا',
      ),
      38 => 
      array (
        'code' => 'GR',
        'name' => 'جروسيتو',
      ),
      39 => 
      array (
        'code' => 'IM',
        'name' => 'امبيريا',
      ),
      40 => 
      array (
        'code' => 'IS',
        'name' => 'ايسيرنيا',
      ),
      41 => 
      array (
        'code' => 'AQ',
        'name' => 'أكيلا',
      ),
      42 => 
      array (
        'code' => 'SP',
        'name' => 'سبيزا',
      ),
      43 => 
      array (
        'code' => 'LT',
        'name' => 'لاتينا',
      ),
      44 => 
      array (
        'code' => 'LE',
        'name' => 'ليسي',
      ),
      45 => 
      array (
        'code' => 'LC',
        'name' => 'ليكو',
      ),
      46 => 
      array (
        'code' => 'LI',
        'name' => 'ليفورنو',
      ),
      47 => 
      array (
        'code' => 'LO',
        'name' => 'لودي',
      ),
      48 => 
      array (
        'code' => 'LU',
        'name' => 'لوكا',
      ),
      49 => 
      array (
        'code' => 'MC',
        'name' => 'ماسيراتا',
      ),
      50 => 
      array (
        'code' => 'MN',
        'name' => 'مانتوفا',
      ),
      51 => 
      array (
        'code' => 'MS',
        'name' => 'ماسا كارارا',
      ),
      52 => 
      array (
        'code' => 'MT',
        'name' => 'ماتيرا',
      ),
      53 => 
      array (
        'code' => 'ME',
        'name' => 'ميسينا',
      ),
      54 => 
      array (
        'code' => 'MI',
        'name' => 'ميلانو',
      ),
      55 => 
      array (
        'code' => 'MO',
        'name' => 'مودينا',
      ),
      56 => 
      array (
        'code' => 'NA',
        'name' => 'نابولي',
      ),
      57 => 
      array (
        'code' => 'NO',
        'name' => 'نوفارا',
      ),
      58 => 
      array (
        'code' => 'NU',
        'name' => 'نورو',
      ),
      59 => 
      array (
        'code' => 'OR',
        'name' => 'اورستانو',
      ),
      60 => 
      array (
        'code' => 'PD',
        'name' => 'بادوفا',
      ),
      61 => 
      array (
        'code' => 'PA',
        'name' => 'باليرمو',
      ),
      62 => 
      array (
        'code' => 'PR',
        'name' => 'بارما',
      ),
      63 => 
      array (
        'code' => 'PG',
        'name' => 'بيروجيا',
      ),
      64 => 
      array (
        'code' => 'PV',
        'name' => 'بافيا',
      ),
      65 => 
      array (
        'code' => 'PU',
        'name' => 'بيسارو اوربينو',
      ),
      66 => 
      array (
        'code' => 'PE',
        'name' => 'بيكارا',
      ),
      67 => 
      array (
        'code' => 'PC',
        'name' => 'بياسينزا',
      ),
      68 => 
      array (
        'code' => 'PI',
        'name' => 'بيسا',
      ),
      69 => 
      array (
        'code' => 'PT',
        'name' => 'بيستوريا',
      ),
      70 => 
      array (
        'code' => 'PN',
        'name' => 'بوردينون',
      ),
      71 => 
      array (
        'code' => 'PZ',
        'name' => 'بوتينزا',
      ),
      72 => 
      array (
        'code' => 'PO',
        'name' => 'براتو',
      ),
      73 => 
      array (
        'code' => 'RG',
        'name' => 'راجوسا',
      ),
      74 => 
      array (
        'code' => 'RA',
        'name' => 'رافينا',
      ),
      75 => 
      array (
        'code' => 'RC',
        'name' => 'ريجيو كالابريا',
      ),
      76 => 
      array (
        'code' => 'RE',
        'name' => 'ريجيو ايميليا',
      ),
      77 => 
      array (
        'code' => 'RI',
        'name' => 'ريتي',
      ),
      78 => 
      array (
        'code' => 'RN',
        'name' => 'ريميني',
      ),
      79 => 
      array (
        'code' => 'RM',
        'name' => 'روما',
      ),
      80 => 
      array (
        'code' => 'RO',
        'name' => 'روفيو',
      ),
      81 => 
      array (
        'code' => 'SA',
        'name' => 'ساليرنو',
      ),
      82 => 
      array (
        'code' => 'SS',
        'name' => 'ساساري',
      ),
      83 => 
      array (
        'code' => 'SV',
        'name' => 'سافونا',
      ),
      84 => 
      array (
        'code' => 'SI',
        'name' => 'سيينا',
      ),
      85 => 
      array (
        'code' => 'SR',
        'name' => 'سيراكوسا',
      ),
      86 => 
      array (
        'code' => 'SO',
        'name' => 'سوندريو',
      ),
      87 => 
      array (
        'code' => 'TA',
        'name' => 'تارانتو',
      ),
      88 => 
      array (
        'code' => 'TE',
        'name' => 'تيرامو',
      ),
      89 => 
      array (
        'code' => 'TR',
        'name' => 'تيرني',
      ),
      90 => 
      array (
        'code' => 'TO',
        'name' => 'تورينو',
      ),
      91 => 
      array (
        'code' => 'TP',
        'name' => 'تراباني',
      ),
      92 => 
      array (
        'code' => 'TN',
        'name' => 'ترينتو',
      ),
      93 => 
      array (
        'code' => 'TV',
        'name' => 'تريفسو',
      ),
      94 => 
      array (
        'code' => 'TS',
        'name' => 'تريستو',
      ),
      95 => 
      array (
        'code' => 'UD',
        'name' => 'أودين',
      ),
      96 => 
      array (
        'code' => 'VA',
        'name' => 'فاريس',
      ),
      97 => 
      array (
        'code' => 'VE',
        'name' => 'فينيسيا',
      ),
      98 => 
      array (
        'code' => 'VB',
        'name' => 'فيربانيا',
      ),
      99 => 
      array (
        'code' => 'VC',
        'name' => 'فيرسيللي',
      ),
      100 => 
      array (
        'code' => 'VR',
        'name' => 'فيرونا',
      ),
      101 => 
      array (
        'code' => 'VV',
        'name' => 'فيبو فالنتيا',
      ),
      102 => 
      array (
        'code' => 'VI',
        'name' => 'فيزنسيا',
      ),
      103 => 
      array (
        'code' => 'VT',
        'name' => 'فيتيربو',
      ),
      104 => 
      array (
        'code' => 'CI',
        'name' => 'كربونيا ايجلاسيوس',
      ),
      105 => 
      array (
        'code' => 'VS',
        'name' => 'ميديو كامبيدانو',
      ),
      106 => 
      array (
        'code' => 'OG',
        'name' => 'اولجياسترا',
      ),
      107 => 
      array (
        'code' => 'OT',
        'name' => 'اولبيا تيمبيو',
      ),
      108 => 
      array (
        'code' => 'MB',
        'name' => 'مونزا بريانزا',
      ),
      109 => 
      array (
        'code' => 'FM',
        'name' => 'فيرمو',
      ),
      110 => 
      array (
        'code' => 'BT',
        'name' => 'بارليتا -اندريا-تراني',
      ),
    ),
    'JM' => 
    array (
      1 => 
      array (
        'code' => 'CLA',
        'name' => 'كنيسة كلاريندون ',
      ),
      2 => 
      array (
        'code' => 'HAN',
        'name' => 'كنيسة هانوفر',
      ),
      3 => 
      array (
        'code' => 'KIN',
        'name' => 'كنيسة كنجستون',
      ),
      4 => 
      array (
        'code' => 'MAN',
        'name' => 'أبرشية مانشيستر',
      ),
      5 => 
      array (
        'code' => 'POR',
        'name' => 'إبرشية بورتلاند',
      ),
      6 => 
      array (
        'code' => 'AND',
        'name' => 'سانت أندرو باريش',
      ),
      7 => 
      array (
        'code' => 'ANN',
        'name' => 'إبرشية سانت آن',
      ),
      8 => 
      array (
        'code' => 'CAT',
        'name' => 'إبرشية سانت كاترين',
      ),
      9 => 
      array (
        'code' => 'ELI',
        'name' => 'إبرشية سانت إليزابيث',
      ),
      10 => 
      array (
        'code' => 'JAM',
        'name' => 'إبرشية سانت جيمس',
      ),
      11 => 
      array (
        'code' => 'MAR',
        'name' => 'إبرشية سانت ماري',
      ),
      12 => 
      array (
        'code' => 'THO',
        'name' => 'إبرشية سانت توماس',
      ),
      13 => 
      array (
        'code' => 'TRL',
        'name' => 'إبرشية تريلواني',
      ),
      14 => 
      array (
        'code' => 'WML',
        'name' => 'إبرشية ويستموريلاند',
      ),
    ),
    'JO' => 
    array (
      1 => 
      array (
        'code' => 'AM',
        'name' => 'عمَّان',
      ),
      2 => 
      array (
        'code' => 'AJ',
        'name' => 'أجلون',
      ),
      3 => 
      array (
        'code' => 'AA',
        'name' => 'العقبة',
      ),
      4 => 
      array (
        'code' => 'AB',
        'name' => 'البلقع',
      ),
      5 => 
      array (
        'code' => 'AK',
        'name' => 'الكرك',
      ),
      6 => 
      array (
        'code' => 'AL',
        'name' => 'المفرق',
      ),
      7 => 
      array (
        'code' => 'AT',
        'name' => 'التافيلة',
      ),
      8 => 
      array (
        'code' => 'AZ',
        'name' => 'الزرقا',
      ),
      9 => 
      array (
        'code' => 'IR',
        'name' => 'اربيد',
      ),
      10 => 
      array (
        'code' => 'JA',
        'name' => 'جرش',
      ),
      11 => 
      array (
        'code' => 'MA',
        'name' => 'معان',
      ),
      12 => 
      array (
        'code' => 'MD',
        'name' => 'مدبا',
      ),
    ),
    'JP' => 
    array (
      1 => 
      array (
        'code' => 'AI',
        'name' => 'ايشي',
      ),
      2 => 
      array (
        'code' => 'AK',
        'name' => 'أكيتا',
      ),
      3 => 
      array (
        'code' => 'AO',
        'name' => 'أوموري',
      ),
      4 => 
      array (
        'code' => 'CH',
        'name' => 'شيبا',
      ),
      5 => 
      array (
        'code' => 'EH',
        'name' => 'ايهيم',
      ),
      6 => 
      array (
        'code' => 'FK',
        'name' => 'فوكوي',
      ),
      7 => 
      array (
        'code' => 'FU',
        'name' => 'فوكوكا',
      ),
      8 => 
      array (
        'code' => 'FS',
        'name' => 'فوكوشيما',
      ),
      9 => 
      array (
        'code' => 'GI',
        'name' => 'جيفو',
      ),
      10 => 
      array (
        'code' => 'GU',
        'name' => 'جوما',
      ),
      11 => 
      array (
        'code' => 'HI',
        'name' => 'هيروشيما',
      ),
      12 => 
      array (
        'code' => 'HO',
        'name' => 'هوكايدو',
      ),
      13 => 
      array (
        'code' => 'HY',
        'name' => 'هيوجو',
      ),
      14 => 
      array (
        'code' => 'IB',
        'name' => 'ايباركي',
      ),
      15 => 
      array (
        'code' => 'IS',
        'name' => 'ايشيكاوا',
      ),
      16 => 
      array (
        'code' => 'IW',
        'name' => 'وات',
      ),
      17 => 
      array (
        'code' => 'KA',
        'name' => 'كاجاوا',
      ),
      18 => 
      array (
        'code' => 'KG',
        'name' => 'كاجوشيما',
      ),
      19 => 
      array (
        'code' => 'KN',
        'name' => 'كاناجاوا',
      ),
      20 => 
      array (
        'code' => 'KO',
        'name' => 'كوشي',
      ),
      21 => 
      array (
        'code' => 'KU',
        'name' => 'كومامتو',
      ),
      22 => 
      array (
        'code' => 'KY',
        'name' => 'كيوتو',
      ),
      23 => 
      array (
        'code' => 'MI',
        'name' => 'مي',
      ),
      24 => 
      array (
        'code' => 'MY',
        'name' => 'ماياجي',
      ),
      25 => 
      array (
        'code' => 'MZ',
        'name' => 'مايازاكي',
      ),
      26 => 
      array (
        'code' => 'NA',
        'name' => 'ناجانو',
      ),
      27 => 
      array (
        'code' => 'NG',
        'name' => 'ناجازاكي',
      ),
      28 => 
      array (
        'code' => 'NR',
        'name' => 'نارا',
      ),
      29 => 
      array (
        'code' => 'NI',
        'name' => 'نيجاتا',
      ),
      30 => 
      array (
        'code' => 'OI',
        'name' => 'اويتا',
      ),
      31 => 
      array (
        'code' => 'OK',
        'name' => 'اوكاياما',
      ),
      32 => 
      array (
        'code' => 'ON',
        'name' => 'أوكيناوا',
      ),
      33 => 
      array (
        'code' => 'OS',
        'name' => 'أوساكا',
      ),
      34 => 
      array (
        'code' => 'SA',
        'name' => 'ساجا',
      ),
      35 => 
      array (
        'code' => 'SI',
        'name' => 'سايتاما',
      ),
      36 => 
      array (
        'code' => 'SH',
        'name' => 'شيجا',
      ),
      37 => 
      array (
        'code' => 'SM',
        'name' => 'شيمانا',
      ),
      38 => 
      array (
        'code' => 'SZ',
        'name' => 'شيزوكا',
      ),
      39 => 
      array (
        'code' => 'TO',
        'name' => 'توشيجي',
      ),
      40 => 
      array (
        'code' => 'TS',
        'name' => 'توكوشيما',
      ),
      41 => 
      array (
        'code' => 'TK',
        'name' => 'طوكيو',
      ),
      42 => 
      array (
        'code' => 'TT',
        'name' => 'توتوري',
      ),
      43 => 
      array (
        'code' => 'TY',
        'name' => 'توياما',
      ),
      44 => 
      array (
        'code' => 'WA',
        'name' => 'واكاياما',
      ),
      45 => 
      array (
        'code' => 'YA',
        'name' => 'ياماجاتا',
      ),
      46 => 
      array (
        'code' => 'YM',
        'name' => 'ياماجوشي',
      ),
      47 => 
      array (
        'code' => 'YN',
        'name' => 'ياماناشي',
      ),
    ),
    'KE' => 
    array (
      1 => 
      array (
        'code' => 'CE',
        'name' => 'سنترال',
      ),
      2 => 
      array (
        'code' => 'CO',
        'name' => 'ساحل',
      ),
      3 => 
      array (
        'code' => 'EA',
        'name' => 'إيسترن',
      ),
      4 => 
      array (
        'code' => 'NA',
        'name' => 'منطقة نيروبي',
      ),
      5 => 
      array (
        'code' => 'NE',
        'name' => 'الشمال الشرقي',
      ),
      6 => 
      array (
        'code' => 'NY',
        'name' => 'نيانزا',
      ),
      7 => 
      array (
        'code' => 'RV',
        'name' => 'وادي ريفت',
      ),
      8 => 
      array (
        'code' => 'WE',
        'name' => 'الغربية',
      ),
    ),
    'KG' => 
    array (
      1 => 
      array (
        'code' => 'GB',
        'name' => 'بيشكيك',
      ),
      2 => 
      array (
        'code' => 'B',
        'name' => 'باتكين',
      ),
      3 => 
      array (
        'code' => 'C',
        'name' => 'شو',
      ),
      4 => 
      array (
        'code' => 'J',
        'name' => 'جلال اباد',
      ),
      5 => 
      array (
        'code' => 'N',
        'name' => 'نارين',
      ),
      6 => 
      array (
        'code' => 'O',
        'name' => 'أوش',
      ),
      7 => 
      array (
        'code' => 'T',
        'name' => 'تالاس',
      ),
      8 => 
      array (
        'code' => 'Y',
        'name' => 'سيكول',
      ),
    ),
    'KH' => 
    array (
      1 => 
      array (
        'code' => 'BA',
        'name' => 'باتامبانج',
      ),
      2 => 
      array (
        'code' => 'BM',
        'name' => 'بانتي مينشي',
      ),
      3 => 
      array (
        'code' => 'KB',
        'name' => 'كيب',
      ),
      4 => 
      array (
        'code' => 'KK',
        'name' => 'كاو كونج',
      ),
      5 => 
      array (
        'code' => 'KL',
        'name' => 'كاندال',
      ),
      6 => 
      array (
        'code' => 'KM',
        'name' => 'كامبونج شام',
      ),
      7 => 
      array (
        'code' => 'KN',
        'name' => 'كامبونج شنانج',
      ),
      8 => 
      array (
        'code' => 'KO',
        'name' => 'كامبونج سوم',
      ),
      9 => 
      array (
        'code' => 'KP',
        'name' => 'كامبوت',
      ),
      10 => 
      array (
        'code' => 'KR',
        'name' => 'كراتي',
      ),
      11 => 
      array (
        'code' => 'KT',
        'name' => 'كامبونج ثوم',
      ),
      12 => 
      array (
        'code' => 'KU',
        'name' => 'كامبونج سبيو',
      ),
      13 => 
      array (
        'code' => 'MK',
        'name' => 'موندول كيري',
      ),
      14 => 
      array (
        'code' => 'OM',
        'name' => 'أودر مينشي',
      ),
      15 => 
      array (
        'code' => 'PA',
        'name' => 'بايلين',
      ),
      16 => 
      array (
        'code' => 'PG',
        'name' => 'بري فينج',
      ),
      17 => 
      array (
        'code' => 'PP',
        'name' => 'بنوم بنه',
      ),
      18 => 
      array (
        'code' => 'PR',
        'name' => 'بري فيهير',
      ),
      19 => 
      array (
        'code' => 'PS',
        'name' => 'بري سيهانو (كامبونج سوم أو سي)',
      ),
      20 => 
      array (
        'code' => 'PU',
        'name' => 'بورسات',
      ),
      21 => 
      array (
        'code' => 'RK',
        'name' => 'راتاناك كيري',
      ),
      22 => 
      array (
        'code' => 'SI',
        'name' => 'سيمريب',
      ),
      23 => 
      array (
        'code' => 'SR',
        'name' => 'ساي رينج',
      ),
      24 => 
      array (
        'code' => 'ST',
        'name' => 'ستونج ترينج',
      ),
      25 => 
      array (
        'code' => 'TK',
        'name' => 'تاكيو',
      ),
    ),
    'KI' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'ابايانج',
      ),
      2 => 
      array (
        'code' => 'AM',
        'name' => 'ابيماما',
      ),
      3 => 
      array (
        'code' => 'AK',
        'name' => 'ارانوكا',
      ),
      4 => 
      array (
        'code' => 'AO',
        'name' => 'اروراي',
      ),
      5 => 
      array (
        'code' => 'BA',
        'name' => 'بانابا',
      ),
      6 => 
      array (
        'code' => 'BE',
        'name' => 'بيرو',
      ),
      7 => 
      array (
        'code' => 'BT',
        'name' => 'بوتاريتاري',
      ),
      8 => 
      array (
        'code' => 'KA',
        'name' => 'كانتون',
      ),
      9 => 
      array (
        'code' => 'KR',
        'name' => 'كريتاماتي',
      ),
      10 => 
      array (
        'code' => 'KU',
        'name' => 'كوريا',
      ),
      11 => 
      array (
        'code' => 'MI',
        'name' => 'مايانا',
      ),
      12 => 
      array (
        'code' => 'MN',
        'name' => 'ماكين',
      ),
      13 => 
      array (
        'code' => 'ME',
        'name' => 'ماراكي',
      ),
      14 => 
      array (
        'code' => 'NI',
        'name' => 'نيكيناو',
      ),
      15 => 
      array (
        'code' => 'NO',
        'name' => 'نونوتي',
      ),
      16 => 
      array (
        'code' => 'ON',
        'name' => 'اونوتوا',
      ),
      17 => 
      array (
        'code' => 'TT',
        'name' => 'تابيتيواوا',
      ),
      18 => 
      array (
        'code' => 'TR',
        'name' => 'تابويران',
      ),
      19 => 
      array (
        'code' => 'TM',
        'name' => 'تامانا',
      ),
      20 => 
      array (
        'code' => 'TW',
        'name' => 'تاراوا',
      ),
      21 => 
      array (
        'code' => 'TE',
        'name' => 'تيرانا',
      ),
    ),
    'KM' => 
    array (
      1 => 
      array (
        'code' => 'G',
        'name' => 'جراند كومورو',
      ),
      2 => 
      array (
        'code' => 'A',
        'name' => 'أنجوان',
      ),
      3 => 
      array (
        'code' => 'M',
        'name' => 'موهيلي',
      ),
    ),
    'KN' => 
    array (
      1 => 
      array (
        'code' => 'CCN',
        'name' => 'الكنيسة المسيحية مدينة نيقولا',
      ),
      2 => 
      array (
        'code' => 'SAS',
        'name' => 'سانت اني ساندي بوينت',
      ),
      3 => 
      array (
        'code' => 'SGB',
        'name' => 'سانت جورج باسيتير',
      ),
      4 => 
      array (
        'code' => 'SGG',
        'name' => 'سانت جورج جينجرلاند',
      ),
      5 => 
      array (
        'code' => 'SJW',
        'name' => 'سانت جيمس وينوارد',
      ),
      6 => 
      array (
        'code' => 'SJC',
        'name' => 'سانت جون كابيستير',
      ),
      7 => 
      array (
        'code' => 'SJF',
        'name' => 'سانت جون فيجتري',
      ),
      8 => 
      array (
        'code' => 'SMC',
        'name' => 'سانت ماري كايون',
      ),
      9 => 
      array (
        'code' => 'CAP',
        'name' => 'سانت بول كابيستير',
      ),
      10 => 
      array (
        'code' => 'CHA',
        'name' => 'سانت بول شارليستون',
      ),
      11 => 
      array (
        'code' => 'SPB',
        'name' => 'سانت بيتر باسيتير',
      ),
      12 => 
      array (
        'code' => 'STL',
        'name' => 'سانت توماس لولاند',
      ),
      13 => 
      array (
        'code' => 'STM',
        'name' => 'سانت توماس الجزيرة الوسطى',
      ),
      14 => 
      array (
        'code' => 'TPP',
        'name' => 'نقطة ترينتي بالميتو',
      ),
    ),
    'KP' => 
    array (
      1 => 
      array (
        'code' => 'CHA',
        'name' => 'شاجانج دو',
      ),
      2 => 
      array (
        'code' => 'HAB',
        'name' => 'هامبيونج بوكتو',
      ),
      3 => 
      array (
        'code' => 'HAN',
        'name' => 'هامبيونج نامدو',
      ),
      4 => 
      array (
        'code' => 'HWB',
        'name' => 'وانج هي-بوكتو',
      ),
      5 => 
      array (
        'code' => 'HWN',
        'name' => 'وانج هي نامدو',
      ),
      6 => 
      array (
        'code' => 'KAN',
        'name' => 'كانجون دو',
      ),
      7 => 
      array (
        'code' => 'PYB',
        'name' => 'بيونج بوكتو',
      ),
      8 => 
      array (
        'code' => 'PYN',
        'name' => 'بيونج نامدو',
      ),
      9 => 
      array (
        'code' => 'YAN',
        'name' => 'ريانجانج دو',
      ),
      10 => 
      array (
        'code' => 'NAJ',
        'name' => 'مدينة راسون المحكومة مباشرةً',
      ),
      11 => 
      array (
        'code' => 'PYO',
        'name' => 'بيون يانج المدينة الخاصة',
      ),
    ),
    'KR' => 
    array (
      1 => 
      array (
        'code' => 'CO',
        'name' => 'شيونج شونج بوكتو',
      ),
      2 => 
      array (
        'code' => 'CH',
        'name' => 'شيونج شونج نامدو',
      ),
      3 => 
      array (
        'code' => 'CD',
        'name' => 'شيجو دو',
      ),
      4 => 
      array (
        'code' => 'CB',
        'name' => 'شولا بوكتو',
      ),
      5 => 
      array (
        'code' => 'CN',
        'name' => 'شولا نامدو',
      ),
      6 => 
      array (
        'code' => 'IG',
        'name' => 'انشون جوانجيوسكي',
      ),
      7 => 
      array (
        'code' => 'KA',
        'name' => 'كانجون دو',
      ),
      8 => 
      array (
        'code' => 'KG',
        'name' => 'وانجيو جوانجيوكشي',
      ),
      9 => 
      array (
        'code' => 'KD',
        'name' => 'يونجي دو',
      ),
      10 => 
      array (
        'code' => 'KB',
        'name' => 'يونج سانج بوكتو',
      ),
      11 => 
      array (
        'code' => 'KN',
        'name' => 'يونج سانج نامدو',
      ),
      12 => 
      array (
        'code' => 'PG',
        'name' => 'بوسان جوانج يوكشي',
      ),
      13 => 
      array (
        'code' => 'SO',
        'name' => 'سول-توكبيولسي',
      ),
      14 => 
      array (
        'code' => 'TA',
        'name' => 'تاجو-جوانيوكشي',
      ),
      15 => 
      array (
        'code' => 'TG',
        'name' => 'تايجون جوانجيوكشي',
      ),
    ),
    'KW' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'القسيمة',
      ),
      2 => 
      array (
        'code' => 'AA',
        'name' => 'الأحمدي',
      ),
      3 => 
      array (
        'code' => 'AF',
        'name' => 'الفراونية',
      ),
      4 => 
      array (
        'code' => 'AJ',
        'name' => 'الجهراء',
      ),
      5 => 
      array (
        'code' => 'HA',
        'name' => 'حوالي',
      ),
    ),
    'KY' => 
    array (
      1 => 
      array (
        'code' => 'CR',
        'name' => 'كريك',
      ),
      2 => 
      array (
        'code' => 'EA',
        'name' => 'إيسترن',
      ),
      3 => 
      array (
        'code' => 'ML',
        'name' => 'ميدلاند',
      ),
      4 => 
      array (
        'code' => 'ST',
        'name' => 'المدينة الجنوبية',
      ),
      5 => 
      array (
        'code' => 'SP',
        'name' => 'سبوت باي',
      ),
      6 => 
      array (
        'code' => 'SK',
        'name' => 'ستاك باي',
      ),
      7 => 
      array (
        'code' => 'WD',
        'name' => 'ويست إند',
      ),
      8 => 
      array (
        'code' => 'WN',
        'name' => 'الغربية',
      ),
    ),
    'KZ' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'الماتي',
      ),
      2 => 
      array (
        'code' => 'AC',
        'name' => 'مدينة الماتي',
      ),
      3 => 
      array (
        'code' => 'AM',
        'name' => 'اكمولا',
      ),
      4 => 
      array (
        'code' => 'AQ',
        'name' => 'اكتب',
      ),
      5 => 
      array (
        'code' => 'AS',
        'name' => 'مدينة اساتانا',
      ),
      6 => 
      array (
        'code' => 'AT',
        'name' => 'اتيرو',
      ),
      7 => 
      array (
        'code' => 'BA',
        'name' => 'باتيس كزاكستان',
      ),
      8 => 
      array (
        'code' => 'BY',
        'name' => 'مدينة بايكونجير',
      ),
      9 => 
      array (
        'code' => 'MA',
        'name' => 'مانغيستاو',
      ),
      10 => 
      array (
        'code' => 'ON',
        'name' => 'اونجتوستيق كازاكستان',
      ),
      11 => 
      array (
        'code' => 'PA',
        'name' => 'بفلادور',
      ),
      12 => 
      array (
        'code' => 'QA',
        'name' => 'قارغاندي',
      ),
      13 => 
      array (
        'code' => 'QO',
        'name' => 'كوستناي',
      ),
      14 => 
      array (
        'code' => 'QY',
        'name' => 'كيزلوردا',
      ),
      15 => 
      array (
        'code' => 'SH',
        'name' => 'شيغيس قزغستان',
      ),
      16 => 
      array (
        'code' => 'SO',
        'name' => 'سولتستيك قزغستان',
      ),
      17 => 
      array (
        'code' => 'ZH',
        'name' => 'زامبيل',
      ),
    ),
    'LA' => 
    array (
      1 => 
      array (
        'code' => 'VT',
        'name' => 'فينتيان',
      ),
      2 => 
      array (
        'code' => 'AT',
        'name' => 'اتابو',
      ),
      3 => 
      array (
        'code' => 'BK',
        'name' => 'بوكيو',
      ),
      4 => 
      array (
        'code' => 'BL',
        'name' => 'بوليخماكسي',
      ),
      5 => 
      array (
        'code' => 'CH',
        'name' => 'شامبساك',
      ),
      6 => 
      array (
        'code' => 'HO',
        'name' => 'هوافان',
      ),
      7 => 
      array (
        'code' => 'KH',
        'name' => 'خاموان',
      ),
      8 => 
      array (
        'code' => 'LM',
        'name' => 'لوانج نامسا',
      ),
      9 => 
      array (
        'code' => 'LP',
        'name' => 'لوانج فابانج',
      ),
      10 => 
      array (
        'code' => 'OU',
        'name' => 'أودوماكسي',
      ),
      11 => 
      array (
        'code' => 'PH',
        'name' => 'فونجسالي',
      ),
      12 => 
      array (
        'code' => 'SL',
        'name' => 'سالفان',
      ),
      13 => 
      array (
        'code' => 'SV',
        'name' => 'سافانا خيت',
      ),
      14 => 
      array (
        'code' => 'VI',
        'name' => 'فينتيان',
      ),
      15 => 
      array (
        'code' => 'XA',
        'name' => 'زايجنابولي',
      ),
      16 => 
      array (
        'code' => 'XE',
        'name' => 'زيكونج',
      ),
      17 => 
      array (
        'code' => 'XI',
        'name' => 'زيانجخوانج',
      ),
      18 => 
      array (
        'code' => 'XN',
        'name' => 'ايسموبون',
      ),
    ),
    'LB' => 
    array (
      1 => 
      array (
        'code' => 'BIN',
        'name' => 'بنت جبيل',
      ),
      2 => 
      array (
        'code' => 'HAS',
        'name' => 'حسابايا',
      ),
      3 => 
      array (
        'code' => 'MAR',
        'name' => 'مارجيون',
      ),
      4 => 
      array (
        'code' => 'NAB',
        'name' => 'نبطية',
      ),
      5 => 
      array (
        'code' => 'BAA',
        'name' => 'بعلبك',
      ),
      6 => 
      array (
        'code' => 'HER',
        'name' => 'هيرميل',
      ),
      7 => 
      array (
        'code' => 'RAS',
        'name' => 'راشايا',
      ),
      8 => 
      array (
        'code' => 'WES',
        'name' => 'البقاع الغربية',
      ),
      9 => 
      array (
        'code' => 'ZAH',
        'name' => 'زاهلي',
      ),
      10 => 
      array (
        'code' => 'AKK',
        'name' => 'أكار',
      ),
      11 => 
      array (
        'code' => 'BAT',
        'name' => 'باترون',
      ),
      12 => 
      array (
        'code' => 'BSH',
        'name' => 'باشاري',
      ),
      13 => 
      array (
        'code' => 'KOU',
        'name' => 'كورا',
      ),
      14 => 
      array (
        'code' => 'MIN',
        'name' => 'منية دانية',
      ),
      15 => 
      array (
        'code' => 'TRI',
        'name' => 'طرابلس',
      ),
      16 => 
      array (
        'code' => 'ZGH',
        'name' => 'زغارتا',
      ),
      17 => 
      array (
        'code' => 'ALE',
        'name' => 'عالٍ',
      ),
      18 => 
      array (
        'code' => 'BAA',
        'name' => 'بعبدة',
      ),
      19 => 
      array (
        'code' => 'BYB',
        'name' => 'بيبلوس',
      ),
      20 => 
      array (
        'code' => 'CHO',
        'name' => 'شوف',
      ),
      21 => 
      array (
        'code' => 'KES',
        'name' => 'قيسروان',
      ),
      22 => 
      array (
        'code' => 'MAT',
        'name' => 'ماتن',
      ),
      23 => 
      array (
        'code' => 'JEZ',
        'name' => 'جيزين',
      ),
      24 => 
      array (
        'code' => 'SID',
        'name' => 'سيدون',
      ),
      25 => 
      array (
        'code' => 'TYR',
        'name' => 'تيري',
      ),
    ),
    'LC' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'أنسي لا راي',
      ),
      2 => 
      array (
        'code' => 'CA',
        'name' => 'كاستريس',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'شواسيل',
      ),
      4 => 
      array (
        'code' => 'DA',
        'name' => 'دوفين',
      ),
      5 => 
      array (
        'code' => 'DE',
        'name' => 'دينيري',
      ),
      6 => 
      array (
        'code' => 'GI',
        'name' => 'جروس ايزلت',
      ),
      7 => 
      array (
        'code' => 'LA',
        'name' => 'لابوري',
      ),
      8 => 
      array (
        'code' => 'MI',
        'name' => 'ميكود',
      ),
      9 => 
      array (
        'code' => 'PR',
        'name' => 'براسلين',
      ),
      10 => 
      array (
        'code' => 'SO',
        'name' => 'سوفرير',
      ),
      11 => 
      array (
        'code' => 'VF',
        'name' => 'فيكس فورت',
      ),
    ),
    'LI' => 
    array (
      1 => 
      array (
        'code' => 'V',
        'name' => 'فادوس',
      ),
      2 => 
      array (
        'code' => 'A',
        'name' => 'شان',
      ),
      3 => 
      array (
        'code' => 'B',
        'name' => 'بالزيرس',
      ),
      4 => 
      array (
        'code' => 'N',
        'name' => 'تريسين',
      ),
      5 => 
      array (
        'code' => 'E',
        'name' => 'ايشين',
      ),
      6 => 
      array (
        'code' => 'M',
        'name' => 'مورين',
      ),
      7 => 
      array (
        'code' => 'T',
        'name' => 'تريسنبيرج',
      ),
      8 => 
      array (
        'code' => 'R',
        'name' => 'روجيل',
      ),
      9 => 
      array (
        'code' => 'G',
        'name' => 'جامبرين',
      ),
      10 => 
      array (
        'code' => 'L',
        'name' => 'شيلينبيرج',
      ),
      11 => 
      array (
        'code' => 'P',
        'name' => 'بلنكين',
      ),
    ),
    'LK' => 
    array (
      1 => 
      array (
        'code' => 'CE',
        'name' => 'سنترال',
      ),
      2 => 
      array (
        'code' => 'EA',
        'name' => 'إيسترن',
      ),
      3 => 
      array (
        'code' => 'NC',
        'name' => 'سنترال الشمالي',
      ),
      4 => 
      array (
        'code' => 'NO',
        'name' => 'الشمالية',
      ),
      5 => 
      array (
        'code' => 'NW',
        'name' => 'الشمال الغربي',
      ),
      6 => 
      array (
        'code' => 'SA',
        'name' => 'ساباراجموا',
      ),
      7 => 
      array (
        'code' => 'SO',
        'name' => 'الجنوبية',
      ),
      8 => 
      array (
        'code' => 'UV',
        'name' => 'أوفا',
      ),
      9 => 
      array (
        'code' => 'WE',
        'name' => 'الغربية',
      ),
    ),
    'LR' => 
    array (
      1 => 
      array (
        'code' => 'BI',
        'name' => 'بومي',
      ),
      2 => 
      array (
        'code' => 'BG',
        'name' => 'بونج',
      ),
      3 => 
      array (
        'code' => 'GB',
        'name' => 'جراند باسا',
      ),
      4 => 
      array (
        'code' => 'CM',
        'name' => 'جراند كاب مونت',
      ),
      5 => 
      array (
        'code' => 'GG',
        'name' => 'جراند جدة',
      ),
      6 => 
      array (
        'code' => 'GK',
        'name' => 'جراند كرو',
      ),
      7 => 
      array (
        'code' => 'LO',
        'name' => 'لوفا',
      ),
      8 => 
      array (
        'code' => 'MG',
        'name' => 'مركبي',
      ),
      9 => 
      array (
        'code' => 'ML',
        'name' => 'ماريلاند',
      ),
      10 => 
      array (
        'code' => 'MS',
        'name' => 'مونتيسيرادو',
      ),
      11 => 
      array (
        'code' => 'NB',
        'name' => 'نيمبا',
      ),
      12 => 
      array (
        'code' => 'RC',
        'name' => 'ريفر سيس',
      ),
      13 => 
      array (
        'code' => 'SN',
        'name' => 'سنوي',
      ),
    ),
    'LS' => 
    array (
      1 => 
      array (
        'code' => 'BE',
        'name' => 'بيري',
      ),
      2 => 
      array (
        'code' => 'BB',
        'name' => 'بوسوبوس',
      ),
      3 => 
      array (
        'code' => 'LE',
        'name' => 'ليريب',
      ),
      4 => 
      array (
        'code' => 'MF',
        'name' => 'مافيتينج',
      ),
      5 => 
      array (
        'code' => 'MS',
        'name' => 'ماسيرو',
      ),
      6 => 
      array (
        'code' => 'MH',
        'name' => 'محلة حويق',
      ),
      7 => 
      array (
        'code' => 'MK',
        'name' => 'مختلق',
      ),
      8 => 
      array (
        'code' => 'QN',
        'name' => 'كاشانيك',
      ),
      9 => 
      array (
        'code' => 'QT',
        'name' => 'قوصينج',
      ),
      10 => 
      array (
        'code' => 'TT',
        'name' => 'سابا تسيكا',
      ),
    ),
    'LT' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'اليتوس',
      ),
      2 => 
      array (
        'code' => 'KA',
        'name' => 'كوناس',
      ),
      3 => 
      array (
        'code' => 'KL',
        'name' => 'كالبيدا',
      ),
      4 => 
      array (
        'code' => 'MA',
        'name' => 'ماريجمبول',
      ),
      5 => 
      array (
        'code' => 'PA',
        'name' => 'بانيفيساس',
      ),
      6 => 
      array (
        'code' => 'SI',
        'name' => 'سياولياي',
      ),
      7 => 
      array (
        'code' => 'TA',
        'name' => 'توراج',
      ),
      8 => 
      array (
        'code' => 'TE',
        'name' => 'تيلساي',
      ),
      9 => 
      array (
        'code' => 'UT',
        'name' => 'اوتينا',
      ),
      10 => 
      array (
        'code' => 'VI',
        'name' => 'فيلنيوس',
      ),
    ),
    'LU' => 
    array (
      1 => 
      array (
        'code' => 'DD',
        'name' => 'ديكريش',
      ),
      2 => 
      array (
        'code' => 'DC',
        'name' => 'كليرفوكس',
      ),
      3 => 
      array (
        'code' => 'DR',
        'name' => 'ريدانج',
      ),
      4 => 
      array (
        'code' => 'DV',
        'name' => 'فياندين',
      ),
      5 => 
      array (
        'code' => 'DW',
        'name' => 'ويليتز',
      ),
      6 => 
      array (
        'code' => 'GG',
        'name' => 'جريفينماشر',
      ),
      7 => 
      array (
        'code' => 'GE',
        'name' => 'ايشتيرناش',
      ),
      8 => 
      array (
        'code' => 'GR',
        'name' => 'ريميش',
      ),
      9 => 
      array (
        'code' => 'LL',
        'name' => 'لوكسمبورج',
      ),
      10 => 
      array (
        'code' => 'LC',
        'name' => 'كابيلين',
      ),
      11 => 
      array (
        'code' => 'LE',
        'name' => 'ايش سور الزيت',
      ),
      12 => 
      array (
        'code' => 'LM',
        'name' => 'ميرسش',
      ),
    ),
    'LV' => 
    array (
      1 => 
      array (
        'code' => 'AIZ',
        'name' => 'ازكروكليس راجونز',
      ),
      2 => 
      array (
        'code' => 'ALU',
        'name' => 'الوكينسيس راجونز',
      ),
      3 => 
      array (
        'code' => 'BAL',
        'name' => 'مناطق بالفو',
      ),
      4 => 
      array (
        'code' => 'BAU',
        'name' => 'مناطق بوسكاس',
      ),
      5 => 
      array (
        'code' => 'CES',
        'name' => 'مناطق سيسو',
      ),
      6 => 
      array (
        'code' => 'DGR',
        'name' => 'مناطق دوجافيليس',
      ),
      7 => 
      array (
        'code' => 'DOB',
        'name' => 'مناطق دوبيليس',
      ),
      8 => 
      array (
        'code' => 'GUL',
        'name' => 'مناطق جولبينيس',
      ),
      9 => 
      array (
        'code' => 'JEK',
        'name' => 'مناطق جيكابليس',
      ),
      10 => 
      array (
        'code' => 'JGR',
        'name' => 'مناطق جيلجافاس',
      ),
      11 => 
      array (
        'code' => 'KRA',
        'name' => 'مناطق كراسلافاس',
      ),
      12 => 
      array (
        'code' => 'KUL',
        'name' => 'مناطق كولديجاس',
      ),
      13 => 
      array (
        'code' => 'LPR',
        'name' => 'مناطق ليبيجاس',
      ),
      14 => 
      array (
        'code' => 'LIM',
        'name' => 'مناطق ليمبازو',
      ),
      15 => 
      array (
        'code' => 'LUD',
        'name' => 'مناطق لودزاس',
      ),
      16 => 
      array (
        'code' => 'MAD',
        'name' => 'مناطق مادوناس',
      ),
      17 => 
      array (
        'code' => 'OGR',
        'name' => 'مناطق أوجريس',
      ),
      18 => 
      array (
        'code' => 'PRE',
        'name' => 'مناطق بريللو',
      ),
      19 => 
      array (
        'code' => 'RZR',
        'name' => 'مناطق ريزقنس',
      ),
      20 => 
      array (
        'code' => 'RGR',
        'name' => 'مناطق ريجاس',
      ),
      21 => 
      array (
        'code' => 'SAL',
        'name' => 'مناطق سالدوس',
      ),
      22 => 
      array (
        'code' => 'TAL',
        'name' => 'مناطق تالسو',
      ),
      23 => 
      array (
        'code' => 'TUK',
        'name' => 'مناطق توكوما',
      ),
      24 => 
      array (
        'code' => 'VLK',
        'name' => 'مناطق فالكاس',
      ),
      25 => 
      array (
        'code' => 'VLM',
        'name' => 'مناطق فالميراس',
      ),
      26 => 
      array (
        'code' => 'VSR',
        'name' => 'مناطق فينتيسبليس',
      ),
      27 => 
      array (
        'code' => 'DGV',
        'name' => 'دوجابيلس',
      ),
      28 => 
      array (
        'code' => 'JGV',
        'name' => 'جيلجافا',
      ),
      29 => 
      array (
        'code' => 'JUR',
        'name' => 'جورمالا',
      ),
      30 => 
      array (
        'code' => 'LPK',
        'name' => 'ليباجا',
      ),
      31 => 
      array (
        'code' => 'RZK',
        'name' => 'ريزكن',
      ),
      32 => 
      array (
        'code' => 'RGA',
        'name' => 'ريجا',
      ),
      33 => 
      array (
        'code' => 'VSL',
        'name' => 'فينتسبليس',
      ),
    ),
    'LY' => 
    array (
      1 => 
      array (
        'code' => 'AJ',
        'name' => 'أجدابيا',
      ),
      2 => 
      array (
        'code' => 'AZ',
        'name' => 'العزيزية',
      ),
      3 => 
      array (
        'code' => 'FA',
        'name' => 'الفتيح',
      ),
      4 => 
      array (
        'code' => 'JA',
        'name' => 'جبل الأخدار',
      ),
      5 => 
      array (
        'code' => 'JU',
        'name' => 'الجفرة',
      ),
      6 => 
      array (
        'code' => 'KH',
        'name' => 'الخمس',
      ),
      7 => 
      array (
        'code' => 'KU',
        'name' => 'الكفرة',
      ),
      8 => 
      array (
        'code' => 'NK',
        'name' => 'النكات الخمس',
      ),
      9 => 
      array (
        'code' => 'AS',
        'name' => 'الشاتي',
      ),
      10 => 
      array (
        'code' => 'AW',
        'name' => 'أوباري',
      ),
      11 => 
      array (
        'code' => 'ZA',
        'name' => 'العزاوية',
      ),
      12 => 
      array (
        'code' => 'BA',
        'name' => 'بني غازي',
      ),
      13 => 
      array (
        'code' => 'DA',
        'name' => 'دارنة',
      ),
      14 => 
      array (
        'code' => 'GD',
        'name' => 'غادميس',
      ),
      15 => 
      array (
        'code' => 'GY',
        'name' => 'غاريان',
      ),
      16 => 
      array (
        'code' => 'MI',
        'name' => 'مصراتة',
      ),
      17 => 
      array (
        'code' => 'MZ',
        'name' => 'مرزوق',
      ),
      18 => 
      array (
        'code' => 'SB',
        'name' => 'سبحة',
      ),
      19 => 
      array (
        'code' => 'SW',
        'name' => 'صاوفيجان',
      ),
      20 => 
      array (
        'code' => 'SU',
        'name' => 'سيرت',
      ),
      21 => 
      array (
        'code' => 'TL',
        'name' => 'طرابلس (طرابلس)',
      ),
      22 => 
      array (
        'code' => 'TH',
        'name' => 'ترهونة',
      ),
      23 => 
      array (
        'code' => 'TU',
        'name' => 'طبرق',
      ),
      24 => 
      array (
        'code' => 'YA',
        'name' => 'يافران',
      ),
      25 => 
      array (
        'code' => 'ZL',
        'name' => 'زلتان',
      ),
    ),
    'MA' => 
    array (
      1 => 
      array (
        'code' => 'AGD',
        'name' => 'أغادير',
      ),
      2 => 
      array (
        'code' => 'HOC',
        'name' => 'الحسيمة',
      ),
      3 => 
      array (
        'code' => 'AZI',
        'name' => 'ازلال',
      ),
      4 => 
      array (
        'code' => 'BME',
        'name' => 'بني ملال',
      ),
      5 => 
      array (
        'code' => 'BSL',
        'name' => 'بني سليمان',
      ),
      6 => 
      array (
        'code' => 'BLM',
        'name' => 'بوليمان',
      ),
      7 => 
      array (
        'code' => 'CBL',
        'name' => 'كازابلانكا',
      ),
      8 => 
      array (
        'code' => 'CHA',
        'name' => 'شاوين',
      ),
      9 => 
      array (
        'code' => 'EJA',
        'name' => 'الجديدة',
      ),
      10 => 
      array (
        'code' => 'EKS',
        'name' => 'القلعة سراغنا',
      ),
      11 => 
      array (
        'code' => 'ERA',
        'name' => 'الرشيدية',
      ),
      12 => 
      array (
        'code' => 'ESS',
        'name' => 'العيساويرة',
      ),
      13 => 
      array (
        'code' => 'FES',
        'name' => 'FES',
      ),
      14 => 
      array (
        'code' => 'FIG',
        'name' => 'فجيج',
      ),
      15 => 
      array (
        'code' => 'GLM',
        'name' => 'جويلميم',
      ),
      16 => 
      array (
        'code' => 'IFR',
        'name' => 'افران',
      ),
      17 => 
      array (
        'code' => 'KEN',
        'name' => 'كينترا',
      ),
      18 => 
      array (
        'code' => 'KHM',
        'name' => 'خميسات',
      ),
      19 => 
      array (
        'code' => 'KHN',
        'name' => 'خنيفرة',
      ),
      20 => 
      array (
        'code' => 'KHO',
        'name' => 'خوريبجة',
      ),
      21 => 
      array (
        'code' => 'LYN',
        'name' => 'العيون',
      ),
      22 => 
      array (
        'code' => 'LAR',
        'name' => 'لاراش',
      ),
      23 => 
      array (
        'code' => 'MRK',
        'name' => 'مراكش',
      ),
      24 => 
      array (
        'code' => 'MKN',
        'name' => 'ميكناس',
      ),
      25 => 
      array (
        'code' => 'NAD',
        'name' => 'نادور',
      ),
      26 => 
      array (
        'code' => 'ORZ',
        'name' => 'أورزازات',
      ),
      27 => 
      array (
        'code' => 'OUJ',
        'name' => 'أوجدا',
      ),
      28 => 
      array (
        'code' => 'RSA',
        'name' => 'رابات سال',
      ),
      29 => 
      array (
        'code' => 'SAF',
        'name' => 'صافي',
      ),
      30 => 
      array (
        'code' => 'SET',
        'name' => 'سيتات',
      ),
      31 => 
      array (
        'code' => 'SKA',
        'name' => 'سيدي قاسم',
      ),
      32 => 
      array (
        'code' => 'TGR',
        'name' => 'تانجير',
      ),
      33 => 
      array (
        'code' => 'TAN',
        'name' => 'تان تان',
      ),
      34 => 
      array (
        'code' => 'TAO',
        'name' => 'تونات',
      ),
      35 => 
      array (
        'code' => 'TRD',
        'name' => 'تارودانت',
      ),
      36 => 
      array (
        'code' => 'TAT',
        'name' => 'تاتا',
      ),
      37 => 
      array (
        'code' => 'TAZ',
        'name' => 'تازا',
      ),
      38 => 
      array (
        'code' => 'TET',
        'name' => 'تيتوان',
      ),
      39 => 
      array (
        'code' => 'TIZ',
        'name' => 'تيزنت',
      ),
      40 => 
      array (
        'code' => 'ADK',
        'name' => 'الداخلة',
      ),
      41 => 
      array (
        'code' => 'BJD',
        'name' => 'بوجدور',
      ),
      42 => 
      array (
        'code' => 'ESM',
        'name' => 'السمارة',
      ),
    ),
    'MC' => 
    array (
      1 => 
      array (
        'code' => 'FV',
        'name' => 'فونتفيللي',
      ),
      2 => 
      array (
        'code' => 'LC',
        'name' => 'كوندامين',
      ),
      3 => 
      array (
        'code' => 'MV',
        'name' => 'فيلا موناكو',
      ),
      4 => 
      array (
        'code' => 'MC',
        'name' => 'مونت كارلو',
      ),
    ),
    'MD' => 
    array (
      1 => 
      array (
        'code' => 'GA',
        'name' => 'جاجوزيا',
      ),
      2 => 
      array (
        'code' => 'CU',
        'name' => 'شيزيناو',
      ),
      3 => 
      array (
        'code' => 'BA',
        'name' => 'بالتي',
      ),
      4 => 
      array (
        'code' => 'CA',
        'name' => 'كاهول',
      ),
      5 => 
      array (
        'code' => 'ED',
        'name' => 'ايدينت',
      ),
      6 => 
      array (
        'code' => 'LA',
        'name' => 'لابوسنا',
      ),
      7 => 
      array (
        'code' => 'OR',
        'name' => 'أورهي',
      ),
      8 => 
      array (
        'code' => 'SO',
        'name' => 'سوروكا',
      ),
      9 => 
      array (
        'code' => 'TI',
        'name' => 'تيغينا',
      ),
      10 => 
      array (
        'code' => 'UN',
        'name' => 'أونغيني',
      ),
      11 => 
      array (
        'code' => 'SN',
        'name' => 'ستانجا نيسترولي',
      ),
    ),
    'MG' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'انتناناريفو',
      ),
      2 => 
      array (
        'code' => 'AS',
        'name' => 'انتسيرانا',
      ),
      3 => 
      array (
        'code' => 'FN',
        'name' => 'فيانارنتسونا',
      ),
      4 => 
      array (
        'code' => 'MJ',
        'name' => 'ماهاجانجا',
      ),
      5 => 
      array (
        'code' => 'TM',
        'name' => 'تواماسينا',
      ),
      6 => 
      array (
        'code' => 'TL',
        'name' => 'توليرارا',
      ),
    ),
    'MH' => 
    array (
      1 => 
      array (
        'code' => 'ALG',
        'name' => 'الينيجاي',
      ),
      2 => 
      array (
        'code' => 'ALL',
        'name' => 'ايلينجلبلاب',
      ),
      3 => 
      array (
        'code' => 'ALK',
        'name' => 'ايلوك',
      ),
      4 => 
      array (
        'code' => 'ARN',
        'name' => 'ارنو',
      ),
      5 => 
      array (
        'code' => 'AUR',
        'name' => 'AUR',
      ),
      6 => 
      array (
        'code' => 'BKR',
        'name' => 'بيكار',
      ),
      7 => 
      array (
        'code' => 'BKN',
        'name' => 'بيكيني',
      ),
      8 => 
      array (
        'code' => 'BKK',
        'name' => 'بوقاق',
      ),
      9 => 
      array (
        'code' => 'EBN',
        'name' => 'ايبون',
      ),
      10 => 
      array (
        'code' => 'ENT',
        'name' => 'اينيويتاك',
      ),
      11 => 
      array (
        'code' => 'EKB',
        'name' => 'ايريكب',
      ),
      12 => 
      array (
        'code' => 'JBT',
        'name' => 'جابات',
      ),
      13 => 
      array (
        'code' => 'JLT',
        'name' => 'جالوت',
      ),
      14 => 
      array (
        'code' => 'JEM',
        'name' => 'جيمو',
      ),
      15 => 
      array (
        'code' => 'KIL',
        'name' => 'كيلي',
      ),
      16 => 
      array (
        'code' => 'KWJ',
        'name' => 'كواجيلان',
      ),
      17 => 
      array (
        'code' => 'LAE',
        'name' => 'LAE',
      ),
      18 => 
      array (
        'code' => 'LIB',
        'name' => 'LIB',
      ),
      19 => 
      array (
        'code' => 'LKP',
        'name' => 'ليكيب',
      ),
      20 => 
      array (
        'code' => 'MJR',
        'name' => 'ماجورو',
      ),
      21 => 
      array (
        'code' => 'MLP',
        'name' => 'مالولاب',
      ),
      22 => 
      array (
        'code' => 'MJT',
        'name' => 'ميجيت',
      ),
      23 => 
      array (
        'code' => 'MIL',
        'name' => 'ميلي',
      ),
      24 => 
      array (
        'code' => 'NMK',
        'name' => 'ناموريك',
      ),
      25 => 
      array (
        'code' => 'NAM',
        'name' => 'نامو',
      ),
      26 => 
      array (
        'code' => 'RGL',
        'name' => 'رونجلاب',
      ),
      27 => 
      array (
        'code' => 'RGK',
        'name' => 'رونجريك',
      ),
      28 => 
      array (
        'code' => 'TOK',
        'name' => 'توك',
      ),
      29 => 
      array (
        'code' => 'UJA',
        'name' => 'اوجاي',
      ),
      30 => 
      array (
        'code' => 'UJL',
        'name' => 'اوجيلانج',
      ),
      31 => 
      array (
        'code' => 'UTK',
        'name' => 'اوتيريك',
      ),
      32 => 
      array (
        'code' => 'WTH',
        'name' => 'أوثو',
      ),
      33 => 
      array (
        'code' => 'WTJ',
        'name' => 'أوتجي',
      ),
    ),
    'MK' => 
    array (
      1 => 
      array (
        'code' => 'AER',
        'name' => 'ايرودروم',
      ),
      2 => 
      array (
        'code' => 'ARA',
        'name' => 'ارشينوفو',
      ),
      3 => 
      array (
        'code' => 'BER',
        'name' => 'بيروفو',
      ),
      4 => 
      array (
        'code' => 'BIT',
        'name' => 'بيتولا',
      ),
      5 => 
      array (
        'code' => 'BOG',
        'name' => 'بوجدانسي',
      ),
      6 => 
      array (
        'code' => 'BOG',
        'name' => 'بوجوفينشي',
      ),
      7 => 
      array (
        'code' => 'BOS',
        'name' => 'بوسيلوفو',
      ),
      8 => 
      array (
        'code' => 'BRV',
        'name' => 'بريفينكا',
      ),
      9 => 
      array (
        'code' => 'BUT',
        'name' => 'بطيل',
      ),
      10 => 
      array (
        'code' => 'ČAI',
        'name' => 'كاير',
      ),
      11 => 
      array (
        'code' => 'ČAš',
        'name' => 'كاسكا',
      ),
      12 => 
      array (
        'code' => 'CEN',
        'name' => 'سينتار',
      ),
      13 => 
      array (
        'code' => 'CEN',
        'name' => 'سنتر زوبا',
      ),
      14 => 
      array (
        'code' => 'CES',
        'name' => 'سيزينوفو اوبليس',
      ),
      15 => 
      array (
        'code' => 'ČUČ',
        'name' => 'سوسير سانديفو',
      ),
      16 => 
      array (
        'code' => 'DEB',
        'name' => 'ديبار',
      ),
      17 => 
      array (
        'code' => 'DEB',
        'name' => 'ديباركا',
      ),
      18 => 
      array (
        'code' => 'DEL',
        'name' => 'ديلسيفو',
      ),
      19 => 
      array (
        'code' => 'DEM',
        'name' => 'ديمير هيسار',
      ),
      20 => 
      array (
        'code' => 'DEM',
        'name' => 'ديمير كابيجا',
      ),
      21 => 
      array (
        'code' => 'DOL',
        'name' => 'دولنيني',
      ),
      22 => 
      array (
        'code' => 'DRU',
        'name' => 'دراجوفو',
      ),
      23 => 
      array (
        'code' => 'GAZ',
        'name' => 'جازي بابا',
      ),
      24 => 
      array (
        'code' => 'GEV',
        'name' => 'جيفيجيليا',
      ),
      25 => 
      array (
        'code' => 'GJO',
        'name' => 'جورجي بيتروف',
      ),
      26 => 
      array (
        'code' => 'GOS',
        'name' => 'جوستيفار',
      ),
      27 => 
      array (
        'code' => 'GRA',
        'name' => 'جرادسكو',
      ),
      28 => 
      array (
        'code' => 'ILI',
        'name' => 'اليندين',
      ),
      29 => 
      array (
        'code' => 'JEG',
        'name' => 'جيجو نوفس',
      ),
      30 => 
      array (
        'code' => 'KAR',
        'name' => 'كرابينسي',
      ),
      31 => 
      array (
        'code' => 'KAR',
        'name' => 'كاربوس',
      ),
      32 => 
      array (
        'code' => 'KAV',
        'name' => 'كافادارسي',
      ),
      33 => 
      array (
        'code' => 'KIČ',
        'name' => 'كسيفو',
      ),
      34 => 
      array (
        'code' => 'KIS',
        'name' => 'كيسيلا فودا',
      ),
      35 => 
      array (
        'code' => 'KOč',
        'name' => 'كوساني',
      ),
      36 => 
      array (
        'code' => 'KON',
        'name' => 'كونك',
      ),
      37 => 
      array (
        'code' => 'KRA',
        'name' => 'كراتوفو',
      ),
      38 => 
      array (
        'code' => 'KRI',
        'name' => 'كريفا بالانكا',
      ),
      39 => 
      array (
        'code' => 'KRI',
        'name' => 'كريفوجستاني',
      ),
      40 => 
      array (
        'code' => 'KRU',
        'name' => 'كروسيفو',
      ),
      41 => 
      array (
        'code' => 'KUM',
        'name' => 'كومانوفو',
      ),
      42 => 
      array (
        'code' => 'LIP',
        'name' => 'ليبكوف',
      ),
      43 => 
      array (
        'code' => 'LOZ',
        'name' => 'لوزوفو',
      ),
      44 => 
      array (
        'code' => 'MAK',
        'name' => 'مقدونيسكا كامينيكا',
      ),
      45 => 
      array (
        'code' => 'MAK',
        'name' => 'ماقدينوسكا برود',
      ),
      46 => 
      array (
        'code' => 'MAV',
        'name' => 'مافروفو وروستوسا',
      ),
      47 => 
      array (
        'code' => 'MOG',
        'name' => 'موجيلا',
      ),
      48 => 
      array (
        'code' => 'NEG',
        'name' => 'نوجيتينو',
      ),
      49 => 
      array (
        'code' => 'NOV',
        'name' => 'نوفاسي',
      ),
      50 => 
      array (
        'code' => 'NOV',
        'name' => 'نوفو سيلو',
      ),
      51 => 
      array (
        'code' => 'OHR',
        'name' => 'أوهريد',
      ),
      52 => 
      array (
        'code' => 'OSL',
        'name' => 'اوسلوميج',
      ),
      53 => 
      array (
        'code' => 'PEH',
        'name' => 'بيشيفو',
      ),
      54 => 
      array (
        'code' => 'PET',
        'name' => 'بيتروفيس',
      ),
      55 => 
      array (
        'code' => 'PLA',
        'name' => 'بلاسينكا',
      ),
      56 => 
      array (
        'code' => 'PRI',
        'name' => 'بريليب',
      ),
      57 => 
      array (
        'code' => 'PRO',
        'name' => 'بروليستيب',
      ),
      58 => 
      array (
        'code' => 'RAD',
        'name' => 'رادوفيس',
      ),
      59 => 
      array (
        'code' => 'RAN',
        'name' => 'رانكوفيس',
      ),
      60 => 
      array (
        'code' => 'RES',
        'name' => 'ريسين',
      ),
      61 => 
      array (
        'code' => 'ROS',
        'name' => 'روزومان',
      ),
      62 => 
      array (
        'code' => 'SAR',
        'name' => 'ساراج',
      ),
      63 => 
      array (
        'code' => 'SOP',
        'name' => 'سوبيست',
      ),
      64 => 
      array (
        'code' => 'STA',
        'name' => 'ستار دوجران',
      ),
      65 => 
      array (
        'code' => 'STA',
        'name' => 'ستارو ناجوريكان',
      ),
      66 => 
      array (
        'code' => 'ŠTI',
        'name' => 'ستيب',
      ),
      67 => 
      array (
        'code' => 'STR',
        'name' => 'ستروجا',
      ),
      68 => 
      array (
        'code' => 'STR',
        'name' => 'ستروميكا',
      ),
      69 => 
      array (
        'code' => 'STU',
        'name' => 'ستيوديكاني',
      ),
      70 => 
      array (
        'code' => 'ŠUT',
        'name' => 'سوتو لوريزاري',
      ),
      71 => 
      array (
        'code' => 'SVE',
        'name' => 'سافيتي نيكول',
      ),
      72 => 
      array (
        'code' => 'TEA',
        'name' => 'تيراس',
      ),
      73 => 
      array (
        'code' => 'TET',
        'name' => 'تيتوفو',
      ),
      74 => 
      array (
        'code' => 'VAL',
        'name' => 'فالاندوفو',
      ),
      75 => 
      array (
        'code' => 'VAS',
        'name' => 'فاسيلوفو',
      ),
      76 => 
      array (
        'code' => 'VEL',
        'name' => 'فيليس',
      ),
      77 => 
      array (
        'code' => 'VEV',
        'name' => 'فيفكاني',
      ),
      78 => 
      array (
        'code' => 'VIN',
        'name' => 'فينيكا',
      ),
      79 => 
      array (
        'code' => 'VRA',
        'name' => 'فرانشيسكا',
      ),
      80 => 
      array (
        'code' => 'VRA',
        'name' => 'فرابيسيست',
      ),
      81 => 
      array (
        'code' => 'ZAJ',
        'name' => 'زاجاس',
      ),
      82 => 
      array (
        'code' => 'ZEL',
        'name' => 'زيلينكفوف',
      ),
      83 => 
      array (
        'code' => 'ŽEL',
        'name' => 'زيلينو',
      ),
      84 => 
      array (
        'code' => 'ZRN',
        'name' => 'زرنوفسي',
      ),
    ),
    'ML' => 
    array (
      1 => 
      array (
        'code' => 'GA',
        'name' => 'GAO',
      ),
      2 => 
      array (
        'code' => 'KY',
        'name' => 'كاياس',
      ),
      3 => 
      array (
        'code' => 'KD',
        'name' => 'كيدال',
      ),
      4 => 
      array (
        'code' => 'KL',
        'name' => 'كوليكرو',
      ),
      5 => 
      array (
        'code' => 'MP',
        'name' => 'موبتي',
      ),
      6 => 
      array (
        'code' => 'SG',
        'name' => 'سيجو',
      ),
      7 => 
      array (
        'code' => 'SK',
        'name' => 'سيكاسو',
      ),
      8 => 
      array (
        'code' => 'TB',
        'name' => 'تومبوكوتو',
      ),
      9 => 
      array (
        'code' => 'CD',
        'name' => 'إقليم العاصمة باماكو',
      ),
    ),
    'MM' => 
    array (
      1 => 
      array (
        'code' => 'AY',
        'name' => 'وادي ايايار',
      ),
      2 => 
      array (
        'code' => 'BG',
        'name' => 'باجو',
      ),
      3 => 
      array (
        'code' => 'MG',
        'name' => 'ماجواي',
      ),
      4 => 
      array (
        'code' => 'MD',
        'name' => 'ماندلاللي',
      ),
      5 => 
      array (
        'code' => 'SG',
        'name' => 'ساجيانج',
      ),
      6 => 
      array (
        'code' => 'TN',
        'name' => 'تانينثاراي',
      ),
      7 => 
      array (
        'code' => 'YG',
        'name' => 'يانجون',
      ),
      8 => 
      array (
        'code' => 'CH',
        'name' => 'ولاية شين',
      ),
      9 => 
      array (
        'code' => 'KC',
        'name' => 'ولاية كاشن',
      ),
      10 => 
      array (
        'code' => 'KH',
        'name' => 'ولاية كاياة',
      ),
      11 => 
      array (
        'code' => 'KN',
        'name' => 'ولاية كايان',
      ),
      12 => 
      array (
        'code' => 'MN',
        'name' => 'ولاية مون',
      ),
      13 => 
      array (
        'code' => 'RK',
        'name' => 'ولاية راخين',
      ),
      14 => 
      array (
        'code' => 'SH',
        'name' => 'ولاية شان',
      ),
    ),
    'MN' => 
    array (
      1 => 
      array (
        'code' => '1',
        'name' => 'اولان باتر',
      ),
      2 => 
      array (
        'code' => '035',
        'name' => 'أورهون',
      ),
      3 => 
      array (
        'code' => '037',
        'name' => 'دارهان اول',
      ),
      4 => 
      array (
        'code' => '039',
        'name' => 'هينتي',
      ),
      5 => 
      array (
        'code' => '041',
        'name' => 'هوفسجول',
      ),
      6 => 
      array (
        'code' => '043',
        'name' => 'هوفد',
      ),
      7 => 
      array (
        'code' => '046',
        'name' => 'اوفس',
      ),
      8 => 
      array (
        'code' => '047',
        'name' => 'TOV',
      ),
      9 => 
      array (
        'code' => '049',
        'name' => 'سيلينج',
      ),
      10 => 
      array (
        'code' => '051',
        'name' => 'سوهبتار',
      ),
      11 => 
      array (
        'code' => '053',
        'name' => 'اومنوجوفي',
      ),
      12 => 
      array (
        'code' => '055',
        'name' => 'اوفرهانجي',
      ),
      13 => 
      array (
        'code' => '057',
        'name' => 'زافهان',
      ),
      14 => 
      array (
        'code' => '059',
        'name' => 'دندجوفول',
      ),
      15 => 
      array (
        'code' => '061',
        'name' => 'دورنود',
      ),
      16 => 
      array (
        'code' => '063',
        'name' => 'دورونجوف',
      ),
      17 => 
      array (
        'code' => '064',
        'name' => 'جوفي سامبر',
      ),
      18 => 
      array (
        'code' => '065',
        'name' => 'جوفي التاي',
      ),
      19 => 
      array (
        'code' => '067',
        'name' => 'بولجان',
      ),
      20 => 
      array (
        'code' => '069',
        'name' => 'باياهونجور',
      ),
      21 => 
      array (
        'code' => '071',
        'name' => 'بايان لوجلي',
      ),
      22 => 
      array (
        'code' => '073',
        'name' => 'ارهانجي',
      ),
    ),
    'MO' => 
    array (
      1 => 
      array (
        'code' => 'OLF',
        'name' => 'إبرشية سيدتنا فاتيما',
      ),
      2 => 
      array (
        'code' => 'ANT',
        'name' => 'إبرشية سانت لأنتوني',
      ),
      3 => 
      array (
        'code' => 'LAZ',
        'name' => 'إبرشية سانت لازاروس',
      ),
      4 => 
      array (
        'code' => 'CAT',
        'name' => 'الإبرشية الكاتدرائية',
      ),
      5 => 
      array (
        'code' => 'LAW',
        'name' => 'إبرشية سانت لورنس',
      ),
    ),
    'MP' => 
    array (
      1 => 
      array (
        'code' => 'N',
        'name' => 'الجزر الشمالية',
      ),
      2 => 
      array (
        'code' => 'R',
        'name' => 'روتا',
      ),
      3 => 
      array (
        'code' => 'S',
        'name' => 'سايبان',
      ),
      4 => 
      array (
        'code' => 'T',
        'name' => 'تينيان',
      ),
    ),
    'MQ' => 
    array (
      1 => 
      array (
        'code' => 'LAJ',
        'name' => 'أجوبا بوليون',
      ),
      2 => 
      array (
        'code' => 'LES',
        'name' => 'ليس انسيس ارليت',
      ),
      3 => 
      array (
        'code' => 'BAS',
        'name' => 'باسي بوينت',
      ),
      4 => 
      array (
        'code' => 'BEL',
        'name' => 'بيلي فونتاين',
      ),
      5 => 
      array (
        'code' => 'LE',
        'name' => 'كاربت',
      ),
      6 => 
      array (
        'code' => 'CAS',
        'name' => 'كاسي بيلوت',
      ),
      7 => 
      array (
        'code' => 'LE',
        'name' => 'ديامانت',
      ),
      8 => 
      array (
        'code' => 'DUC',
        'name' => 'دوكوس',
      ),
      9 => 
      array (
        'code' => 'FON',
        'name' => 'فونندس سانت دينيس',
      ),
      10 => 
      array (
        'code' => 'FOR',
        'name' => 'فورت دي فرانس',
      ),
      11 => 
      array (
        'code' => 'LE',
        'name' => 'فرانسوا',
      ),
      12 => 
      array (
        'code' => 'GRA',
        'name' => 'جراند ريفيرا',
      ),
      13 => 
      array (
        'code' => 'GRO',
        'name' => 'جروس مورن',
      ),
      14 => 
      array (
        'code' => 'LE',
        'name' => 'لامينتين',
      ),
      15 => 
      array (
        'code' => 'LE',
        'name' => 'لوريان',
      ),
      16 => 
      array (
        'code' => 'MAC',
        'name' => 'ماكوبا',
      ),
      17 => 
      array (
        'code' => 'LE',
        'name' => 'ماريجوت',
      ),
      18 => 
      array (
        'code' => 'LE',
        'name' => 'مارين',
      ),
      19 => 
      array (
        'code' => 'LE',
        'name' => 'مورني روج',
      ),
      20 => 
      array (
        'code' => 'LE',
        'name' => 'مورني فيرت',
      ),
      21 => 
      array (
        'code' => 'LE',
        'name' => 'بريشير',
      ),
      22 => 
      array (
        'code' => 'RIV',
        'name' => 'ريفيرا بيلوت',
      ),
      23 => 
      array (
        'code' => 'RIV',
        'name' => 'ريفيرا سالي',
      ),
      24 => 
      array (
        'code' => 'LE',
        'name' => 'روبرت',
      ),
      25 => 
      array (
        'code' => 'SAI',
        'name' => 'سانت اني',
      ),
      26 => 
      array (
        'code' => 'SAI',
        'name' => 'سانت لوسي',
      ),
      27 => 
      array (
        'code' => 'SAI',
        'name' => 'سانت ماري',
      ),
      28 => 
      array (
        'code' => 'SAI',
        'name' => 'سانت اسبريت',
      ),
      29 => 
      array (
        'code' => 'SAI',
        'name' => 'سانت جوزيف',
      ),
      30 => 
      array (
        'code' => 'SAI',
        'name' => 'سانت بيير',
      ),
      31 => 
      array (
        'code' => 'SCH',
        'name' => 'شيليشير',
      ),
      32 => 
      array (
        'code' => 'LA',
        'name' => 'ترينيت',
      ),
      33 => 
      array (
        'code' => 'LES',
        'name' => 'ترواس ايليت',
      ),
      34 => 
      array (
        'code' => 'LE',
        'name' => 'فوسيلين',
      ),
    ),
    'MR' => 
    array (
      1 => 
      array (
        'code' => 'AD',
        'name' => 'أدرار',
      ),
      2 => 
      array (
        'code' => 'AS',
        'name' => 'قصبة',
      ),
      3 => 
      array (
        'code' => 'BR',
        'name' => 'براكنا',
      ),
      4 => 
      array (
        'code' => 'DN',
        'name' => 'داخلة نودهيبو',
      ),
      5 => 
      array (
        'code' => 'GO',
        'name' => 'جورجول',
      ),
      6 => 
      array (
        'code' => 'GM',
        'name' => 'جيديماكا',
      ),
      7 => 
      array (
        'code' => 'HC',
        'name' => 'الحوض الشرقي',
      ),
      8 => 
      array (
        'code' => 'HG',
        'name' => 'الحوض الغربي',
      ),
      9 => 
      array (
        'code' => 'IN',
        'name' => 'انشريري',
      ),
      10 => 
      array (
        'code' => 'TA',
        'name' => 'تاجانت',
      ),
      11 => 
      array (
        'code' => 'TZ',
        'name' => 'تيريس زيمور',
      ),
      12 => 
      array (
        'code' => 'TR',
        'name' => 'ترارزا',
      ),
      13 => 
      array (
        'code' => 'NO',
        'name' => 'نواكشوط',
      ),
    ),
    'MS' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'سانت أنتوني',
      ),
      2 => 
      array (
        'code' => 'G',
        'name' => 'سانت جورج',
      ),
      3 => 
      array (
        'code' => 'P',
        'name' => 'سانت بيتر',
      ),
    ),
    'MT' => 
    array (
      1 => 
      array (
        'code' => 'ATT',
        'name' => 'عطارد',
      ),
      2 => 
      array (
        'code' => 'BAL',
        'name' => 'بالزان',
      ),
      3 => 
      array (
        'code' => 'BGU',
        'name' => 'بيرجو',
      ),
      4 => 
      array (
        'code' => 'BKK',
        'name' => 'بيركيركارا',
      ),
      5 => 
      array (
        'code' => 'BRZ',
        'name' => 'بيرزيبوجا',
      ),
      6 => 
      array (
        'code' => 'BOR',
        'name' => 'بورملا',
      ),
      7 => 
      array (
        'code' => 'DIN',
        'name' => 'دينجلي',
      ),
      8 => 
      array (
        'code' => 'FGU',
        'name' => 'فجورا',
      ),
      9 => 
      array (
        'code' => 'FLO',
        'name' => 'فلوريانا',
      ),
      10 => 
      array (
        'code' => 'GDJ',
        'name' => 'جودجا',
      ),
      11 => 
      array (
        'code' => 'GZR',
        'name' => 'جزيرة',
      ),
      12 => 
      array (
        'code' => 'GRG',
        'name' => 'جارجور',
      ),
      13 => 
      array (
        'code' => 'GXQ',
        'name' => 'جاكساك',
      ),
      14 => 
      array (
        'code' => 'HMR',
        'name' => 'حامرون',
      ),
      15 => 
      array (
        'code' => 'IKL',
        'name' => 'اكلين',
      ),
      16 => 
      array (
        'code' => 'ISL',
        'name' => 'ايسلا',
      ),
      17 => 
      array (
        'code' => 'KLK',
        'name' => 'كالكارا',
      ),
      18 => 
      array (
        'code' => 'KRK',
        'name' => 'كيركوب',
      ),
      19 => 
      array (
        'code' => 'LIJ',
        'name' => 'ليجا',
      ),
      20 => 
      array (
        'code' => 'LUQ',
        'name' => 'لوكا',
      ),
      21 => 
      array (
        'code' => 'MRS',
        'name' => 'مارسا',
      ),
      22 => 
      array (
        'code' => 'MKL',
        'name' => 'مارساسكالا',
      ),
      23 => 
      array (
        'code' => 'MXL',
        'name' => 'مارسا اكسلوك',
      ),
      24 => 
      array (
        'code' => 'MDN',
        'name' => 'مدينة',
      ),
      25 => 
      array (
        'code' => 'MEL',
        'name' => 'ميليا',
      ),
      26 => 
      array (
        'code' => 'MGR',
        'name' => 'مجار',
      ),
      27 => 
      array (
        'code' => 'MST',
        'name' => 'موسطى',
      ),
      28 => 
      array (
        'code' => 'MQA',
        'name' => 'مكابا',
      ),
      29 => 
      array (
        'code' => 'MSI',
        'name' => 'ماسيدا',
      ),
      30 => 
      array (
        'code' => 'MTF',
        'name' => 'متارفا',
      ),
      31 => 
      array (
        'code' => 'NAX',
        'name' => 'ناكسار',
      ),
      32 => 
      array (
        'code' => 'PAO',
        'name' => 'باولا',
      ),
      33 => 
      array (
        'code' => 'PEM',
        'name' => 'بيمبروك',
      ),
      34 => 
      array (
        'code' => 'PIE',
        'name' => 'بيتا',
      ),
      35 => 
      array (
        'code' => 'QOR',
        'name' => 'كورمي',
      ),
      36 => 
      array (
        'code' => 'QRE',
        'name' => 'كريندي',
      ),
      37 => 
      array (
        'code' => 'RAB',
        'name' => 'رابات',
      ),
      38 => 
      array (
        'code' => 'SAF',
        'name' => 'صافي',
      ),
      39 => 
      array (
        'code' => 'SGI',
        'name' => 'يان جيلان',
      ),
      40 => 
      array (
        'code' => 'SLU',
        'name' => 'سانتا لوسيجا',
      ),
      41 => 
      array (
        'code' => 'SPB',
        'name' => 'سان باول البحر',
      ),
      42 => 
      array (
        'code' => 'SGW',
        'name' => 'سان خوان',
      ),
      43 => 
      array (
        'code' => 'SVE',
        'name' => 'سانتا فينيرا',
      ),
      44 => 
      array (
        'code' => 'SIG',
        'name' => 'سيجوي',
      ),
      45 => 
      array (
        'code' => 'SLM',
        'name' => 'سليما',
      ),
      46 => 
      array (
        'code' => 'SWQ',
        'name' => 'سويجي',
      ),
      47 => 
      array (
        'code' => 'TXB',
        'name' => 'تا اكسبيكس',
      ),
      48 => 
      array (
        'code' => 'TRX',
        'name' => 'تاركسين',
      ),
      49 => 
      array (
        'code' => 'VLT',
        'name' => 'فاليتا',
      ),
      50 => 
      array (
        'code' => 'XGJ',
        'name' => 'جايجرا',
      ),
      51 => 
      array (
        'code' => 'ZBR',
        'name' => 'زابار',
      ),
      52 => 
      array (
        'code' => 'ZBG',
        'name' => 'زيبج',
      ),
      53 => 
      array (
        'code' => 'ZJT',
        'name' => 'زيجتون',
      ),
      54 => 
      array (
        'code' => 'ZRQ',
        'name' => 'زريق',
      ),
      55 => 
      array (
        'code' => 'FNT',
        'name' => 'فونتانا',
      ),
      56 => 
      array (
        'code' => 'GHJ',
        'name' => 'غاجنسيليم',
      ),
      57 => 
      array (
        'code' => 'GHR',
        'name' => 'غارب',
      ),
      58 => 
      array (
        'code' => 'GHS',
        'name' => 'غاسري',
      ),
      59 => 
      array (
        'code' => 'KRC',
        'name' => 'كيركم',
      ),
      60 => 
      array (
        'code' => 'MUN',
        'name' => 'مونكسار',
      ),
      61 => 
      array (
        'code' => 'NAD',
        'name' => 'نادور',
      ),
      62 => 
      array (
        'code' => 'QAL',
        'name' => 'كالا',
      ),
      63 => 
      array (
        'code' => 'VIC',
        'name' => 'فيكتوريا',
      ),
      64 => 
      array (
        'code' => 'SLA',
        'name' => 'سان لورينزو',
      ),
      65 => 
      array (
        'code' => 'SNT',
        'name' => 'سانات',
      ),
      66 => 
      array (
        'code' => 'ZAG',
        'name' => 'زاجرا',
      ),
      67 => 
      array (
        'code' => 'XEW',
        'name' => 'زيوكيا',
      ),
      68 => 
      array (
        'code' => 'ZEB',
        'name' => 'زيبج',
      ),
    ),
    'MU' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'جزر اجاليجا ',
      ),
      2 => 
      array (
        'code' => 'BL',
        'name' => 'النهر الأسود',
      ),
      3 => 
      array (
        'code' => 'BR',
        'name' => 'تل بو باسين روز',
      ),
      4 => 
      array (
        'code' => 'CC',
        'name' => 'أفواج كارجادوس كاراجوس (سانت ب)',
      ),
      5 => 
      array (
        'code' => 'CU',
        'name' => 'كريبي',
      ),
      6 => 
      array (
        'code' => 'FL',
        'name' => 'فلاك',
      ),
      7 => 
      array (
        'code' => 'GP',
        'name' => 'جراند بورت',
      ),
      8 => 
      array (
        'code' => 'MO',
        'name' => 'موكا',
      ),
      9 => 
      array (
        'code' => 'PA',
        'name' => 'بامبليماوسيس',
      ),
      10 => 
      array (
        'code' => 'PL',
        'name' => 'بورت لويس',
      ),
      11 => 
      array (
        'code' => 'PU',
        'name' => 'بورت لويس',
      ),
      12 => 
      array (
        'code' => 'PW',
        'name' => 'بلانز ويلهامس',
      ),
      13 => 
      array (
        'code' => 'QB',
        'name' => 'كاتر بورنس',
      ),
      14 => 
      array (
        'code' => 'RO',
        'name' => 'رودريجز',
      ),
      15 => 
      array (
        'code' => 'RR',
        'name' => 'ريفيرا دي رامبرانت',
      ),
      16 => 
      array (
        'code' => 'SA',
        'name' => 'سافاني',
      ),
      17 => 
      array (
        'code' => 'VP',
        'name' => 'فاكواس فونيكس',
      ),
    ),
    'MV' => 
    array (
      1 => 
      array (
        'code' => 'AAD',
        'name' => 'اري أتول ديكنو',
      ),
      2 => 
      array (
        'code' => 'AAU',
        'name' => 'أري أتول اوثرو',
      ),
      3 => 
      array (
        'code' => 'ADD',
        'name' => 'أدو',
      ),
      4 => 
      array (
        'code' => 'FAA',
        'name' => 'فاديبهيبولو',
      ),
      5 => 
      array (
        'code' => 'FEA',
        'name' => 'فيليد أتول',
      ),
      6 => 
      array (
        'code' => 'FMU',
        'name' => 'فوا مولاكو',
      ),
      7 => 
      array (
        'code' => 'HAD',
        'name' => 'هافادو أتول هيكونو',
      ),
      8 => 
      array (
        'code' => 'HAU',
        'name' => 'هافادو أتول أوثول',
      ),
      9 => 
      array (
        'code' => 'HDH',
        'name' => 'هدهودنماثي',
      ),
      10 => 
      array (
        'code' => 'KLH',
        'name' => 'كولهيومادولو',
      ),
      11 => 
      array (
        'code' => 'MAA',
        'name' => 'مال أوتول',
      ),
      12 => 
      array (
        'code' => 'MAD',
        'name' => 'مالهوسمادولو ديكونا',
      ),
      13 => 
      array (
        'code' => 'MAU',
        'name' => 'ملهاموسدولو أوثرو',
      ),
      14 => 
      array (
        'code' => 'MLD',
        'name' => 'ميلاد هونمادولو ديكونا',
      ),
      15 => 
      array (
        'code' => 'MLU',
        'name' => 'ملهاموسدولو أوثلو',
      ),
      16 => 
      array (
        'code' => 'MUA',
        'name' => 'مولاكو أتول',
      ),
      17 => 
      array (
        'code' => 'NAD',
        'name' => 'نيلاندي أتول هيكونو',
      ),
      18 => 
      array (
        'code' => 'NAU',
        'name' => 'نيلاندي أتول أوثلو',
      ),
      19 => 
      array (
        'code' => 'THD',
        'name' => 'ثيلادهيونماسي هيكوندو',
      ),
      20 => 
      array (
        'code' => 'THU',
        'name' => 'ثيلادهيونماسي أوثولو',
      ),
    ),
    'MW' => 
    array (
      1 => 
      array (
        'code' => 'BLK',
        'name' => 'بالاكا',
      ),
      2 => 
      array (
        'code' => 'BLT',
        'name' => 'بلانتيري',
      ),
      3 => 
      array (
        'code' => 'CKW',
        'name' => 'سكواوا',
      ),
      4 => 
      array (
        'code' => 'CRD',
        'name' => 'شيرادزولو',
      ),
      5 => 
      array (
        'code' => 'CTP',
        'name' => 'شيتيبا',
      ),
      6 => 
      array (
        'code' => 'DDZ',
        'name' => 'ديدزا',
      ),
      7 => 
      array (
        'code' => 'DWA',
        'name' => 'دوا',
      ),
      8 => 
      array (
        'code' => 'KRG',
        'name' => 'كارونجا',
      ),
      9 => 
      array (
        'code' => 'KSG',
        'name' => 'كاسونجو',
      ),
      10 => 
      array (
        'code' => 'LKM',
        'name' => 'ليكوما',
      ),
      11 => 
      array (
        'code' => 'LLG',
        'name' => 'ليلونجوي',
      ),
      12 => 
      array (
        'code' => 'MCG',
        'name' => 'ماشينجا',
      ),
      13 => 
      array (
        'code' => 'MGC',
        'name' => 'مانجوشي',
      ),
      14 => 
      array (
        'code' => 'MCH',
        'name' => 'مشينجي',
      ),
      15 => 
      array (
        'code' => 'MLJ',
        'name' => 'مولانجي',
      ),
      16 => 
      array (
        'code' => 'MWZ',
        'name' => 'موانزا',
      ),
      17 => 
      array (
        'code' => 'MZM',
        'name' => 'مازيمبا',
      ),
      18 => 
      array (
        'code' => 'NTU',
        'name' => 'تشيو',
      ),
      19 => 
      array (
        'code' => 'NKB',
        'name' => 'ساحل نخاتا',
      ),
      20 => 
      array (
        'code' => 'NKH',
        'name' => 'نخوتا كوتا',
      ),
      21 => 
      array (
        'code' => 'NSJ',
        'name' => 'نسانجي',
      ),
      22 => 
      array (
        'code' => 'NTI',
        'name' => 'تشيسي',
      ),
      23 => 
      array (
        'code' => 'PHL',
        'name' => 'فالومبل',
      ),
      24 => 
      array (
        'code' => 'RMP',
        'name' => 'رومفي',
      ),
      25 => 
      array (
        'code' => 'SLM',
        'name' => 'ساليما',
      ),
      26 => 
      array (
        'code' => 'THY',
        'name' => 'ثيولو',
      ),
      27 => 
      array (
        'code' => 'ZBA',
        'name' => 'زومبا',
      ),
    ),
    'MX' => 
    array (
      1 => 
      array (
        'code' => 'AGU',
        'name' => 'أجواسكانلنتيس',
      ),
      2 => 
      array (
        'code' => 'BCN',
        'name' => 'باجا كاليفورنيا نورت',
      ),
      3 => 
      array (
        'code' => 'BCS',
        'name' => 'باجا كاليفورنيا سور',
      ),
      4 => 
      array (
        'code' => 'CAM',
        'name' => 'كامبيش',
      ),
      5 => 
      array (
        'code' => 'CHP',
        'name' => 'شيباس',
      ),
      6 => 
      array (
        'code' => 'CHH',
        'name' => 'شيهواوا',
      ),
      7 => 
      array (
        'code' => 'COA',
        'name' => 'كواهيلا دي زاراجوزا',
      ),
      8 => 
      array (
        'code' => 'COL',
        'name' => 'كوليما',
      ),
      9 => 
      array (
        'code' => 'DIF',
        'name' => 'مقاطعات فيدرالية',
      ),
      10 => 
      array (
        'code' => 'DUR',
        'name' => 'دورانجو',
      ),
      11 => 
      array (
        'code' => 'GUA',
        'name' => 'جوانجواتو',
      ),
      12 => 
      array (
        'code' => 'GRO',
        'name' => 'جويريرو',
      ),
      13 => 
      array (
        'code' => 'HID',
        'name' => 'هيدالجو',
      ),
      14 => 
      array (
        'code' => 'JAL',
        'name' => 'جاليسكو',
      ),
      15 => 
      array (
        'code' => 'MEX',
        'name' => 'ميكسيكو',
      ),
      16 => 
      array (
        'code' => 'MIC',
        'name' => 'ميشوكان دي أوكامبو',
      ),
      17 => 
      array (
        'code' => 'MOR',
        'name' => 'موريلوس',
      ),
      18 => 
      array (
        'code' => 'NAY',
        'name' => 'نياريت',
      ),
      19 => 
      array (
        'code' => 'NLE',
        'name' => 'نوفو ليون',
      ),
      20 => 
      array (
        'code' => 'OAX',
        'name' => 'أوكاكا',
      ),
      21 => 
      array (
        'code' => 'PUE',
        'name' => 'بويبلا',
      ),
      22 => 
      array (
        'code' => 'QUE',
        'name' => 'كويرتارو دي ارتياجا',
      ),
      23 => 
      array (
        'code' => 'ROO',
        'name' => 'كوينتانا رو',
      ),
      24 => 
      array (
        'code' => 'SLP',
        'name' => 'سان لويس بوتوي',
      ),
      25 => 
      array (
        'code' => 'SIN',
        'name' => 'سنالوا',
      ),
      26 => 
      array (
        'code' => 'SON',
        'name' => 'سونورا',
      ),
      27 => 
      array (
        'code' => 'TAB',
        'name' => 'تاباسكو',
      ),
      28 => 
      array (
        'code' => 'TAM',
        'name' => 'تاموليباس',
      ),
      29 => 
      array (
        'code' => 'TLA',
        'name' => 'تلاكسالا',
      ),
      30 => 
      array (
        'code' => 'VER',
        'name' => 'فيراكروز لاف',
      ),
      31 => 
      array (
        'code' => 'YUC',
        'name' => 'يوكاتان',
      ),
      32 => 
      array (
        'code' => 'ZAC',
        'name' => 'زاكاتيكاس',
      ),
    ),
    'MY' => 
    array (
      1 => 
      array (
        'code' => 'Johor',
        'name' => 'جوهور',
      ),
      2 => 
      array (
        'code' => 'Kedah',
        'name' => 'كيدة',
      ),
      3 => 
      array (
        'code' => 'Kelantan',
        'name' => 'كيلانتان',
      ),
      4 => 
      array (
        'code' => 'Labuan',
        'name' => 'لابوان',
      ),
      5 => 
      array (
        'code' => 'Melaka',
        'name' => 'ميلاكا',
      ),
      6 => 
      array (
        'code' => 'Negeri Sembilan',
        'name' => 'نيجيري سيمبيلان',
      ),
      7 => 
      array (
        'code' => 'Pahang',
        'name' => 'باهانج',
      ),
      8 => 
      array (
        'code' => 'Perak',
        'name' => 'بيراق',
      ),
      9 => 
      array (
        'code' => 'Perlis',
        'name' => 'بيرليس',
      ),
      10 => 
      array (
        'code' => 'Pulau Pinang',
        'name' => 'بوالو بينانج',
      ),
      11 => 
      array (
        'code' => 'Sabah',
        'name' => 'صباح',
      ),
      12 => 
      array (
        'code' => 'Sarawak',
        'name' => 'سارواك',
      ),
      13 => 
      array (
        'code' => 'Selangor',
        'name' => 'سيلانجور',
      ),
      14 => 
      array (
        'code' => 'Terengganu',
        'name' => 'تيرينجانو',
      ),
      15 => 
      array (
        'code' => 'Kuala Lumpur',
        'name' => 'كوالالمبور',
      ),
    ),
    'MZ' => 
    array (
      1 => 
      array (
        'code' => 'CD',
        'name' => 'كابو ديلجادو',
      ),
      2 => 
      array (
        'code' => 'GZ',
        'name' => 'غزة',
      ),
      3 => 
      array (
        'code' => 'IN',
        'name' => 'انهامبان',
      ),
      4 => 
      array (
        'code' => 'MN',
        'name' => 'مانيكا',
      ),
      5 => 
      array (
        'code' => 'MC',
        'name' => 'مابوتو (مدينة)',
      ),
      6 => 
      array (
        'code' => 'MP',
        'name' => 'مابوتو',
      ),
      7 => 
      array (
        'code' => 'NA',
        'name' => 'نامبولا',
      ),
      8 => 
      array (
        'code' => 'NI',
        'name' => 'نياسا',
      ),
      9 => 
      array (
        'code' => 'SO',
        'name' => 'سوفالا',
      ),
      10 => 
      array (
        'code' => 'TE',
        'name' => 'تيتي',
      ),
      11 => 
      array (
        'code' => 'ZA',
        'name' => 'زامبيزيا',
      ),
    ),
    'NA' => 
    array (
      1 => 
      array (
        'code' => 'CA',
        'name' => 'كابريفي',
      ),
      2 => 
      array (
        'code' => 'ER',
        'name' => 'ايرونجو',
      ),
      3 => 
      array (
        'code' => 'HA',
        'name' => 'هارداب',
      ),
      4 => 
      array (
        'code' => 'KR',
        'name' => 'كاراس',
      ),
      5 => 
      array (
        'code' => 'KV',
        'name' => 'كافانجو',
      ),
      6 => 
      array (
        'code' => 'KH',
        'name' => 'خوماس',
      ),
      7 => 
      array (
        'code' => 'KU',
        'name' => 'كونين',
      ),
      8 => 
      array (
        'code' => 'OW',
        'name' => 'اوهانجوينا',
      ),
      9 => 
      array (
        'code' => 'OK',
        'name' => 'أم الحيك',
      ),
      10 => 
      array (
        'code' => 'OT',
        'name' => 'أم ساتي',
      ),
      11 => 
      array (
        'code' => 'ON',
        'name' => 'أوشانا',
      ),
      12 => 
      array (
        'code' => 'OO',
        'name' => 'أوشيكوتو',
      ),
      13 => 
      array (
        'code' => 'OJ',
        'name' => 'أوتجوزوندجوبا',
      ),
    ),
    'NC' => 
    array (
      1 => 
      array (
        'code' => 'L',
        'name' => 'إيليس لويايوت',
      ),
      2 => 
      array (
        'code' => 'N',
        'name' => 'نورد',
      ),
      3 => 
      array (
        'code' => 'S',
        'name' => 'جنوب',
      ),
    ),
    'NE' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'أجاديز',
      ),
      2 => 
      array (
        'code' => 'DF',
        'name' => 'دفرة',
      ),
      3 => 
      array (
        'code' => 'DS',
        'name' => 'دوسو',
      ),
      4 => 
      array (
        'code' => 'MA',
        'name' => 'مارادي',
      ),
      5 => 
      array (
        'code' => 'NM',
        'name' => 'نيامي',
      ),
      6 => 
      array (
        'code' => 'TH',
        'name' => 'تاهوا',
      ),
      7 => 
      array (
        'code' => 'TL',
        'name' => 'تيلابيري',
      ),
      8 => 
      array (
        'code' => 'ZD',
        'name' => 'زيندر',
      ),
    ),
    'NF' => 
    array (
      1 => 
      array (
        'code' => 'NOR',
        'name' => 'جزر نورفولك',
      ),
    ),
    'NG' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'ابيا',
      ),
      2 => 
      array (
        'code' => 'CT',
        'name' => 'مقاطعة أبوجا العاصمة الفيدرالية',
      ),
      3 => 
      array (
        'code' => 'AD',
        'name' => 'أداموا',
      ),
      4 => 
      array (
        'code' => 'AK',
        'name' => 'أكوا ايبوم',
      ),
      5 => 
      array (
        'code' => 'AN',
        'name' => 'انامبرا',
      ),
      6 => 
      array (
        'code' => 'BC',
        'name' => 'بوتشي',
      ),
      7 => 
      array (
        'code' => 'BY',
        'name' => 'بايلسا',
      ),
      8 => 
      array (
        'code' => 'BN',
        'name' => 'بينو',
      ),
      9 => 
      array (
        'code' => 'BO',
        'name' => 'بورنو',
      ),
      10 => 
      array (
        'code' => 'CR',
        'name' => 'كروس ريفير',
      ),
      11 => 
      array (
        'code' => 'DE',
        'name' => 'دلتا',
      ),
      12 => 
      array (
        'code' => 'EB',
        'name' => 'ايبوني',
      ),
      13 => 
      array (
        'code' => 'ED',
        'name' => 'ايدو',
      ),
      14 => 
      array (
        'code' => 'EK',
        'name' => 'ايكيتي',
      ),
      15 => 
      array (
        'code' => 'EN',
        'name' => 'اينوجو',
      ),
      16 => 
      array (
        'code' => 'GO',
        'name' => 'جومبي',
      ),
      17 => 
      array (
        'code' => 'IM',
        'name' => 'ايمو',
      ),
      18 => 
      array (
        'code' => 'JI',
        'name' => 'جيجاواو',
      ),
      19 => 
      array (
        'code' => 'KD',
        'name' => 'كادونا',
      ),
      20 => 
      array (
        'code' => 'KN',
        'name' => 'كانو',
      ),
      21 => 
      array (
        'code' => 'KT',
        'name' => 'كاتسينا',
      ),
      22 => 
      array (
        'code' => 'KE',
        'name' => 'كيبي',
      ),
      23 => 
      array (
        'code' => 'KO',
        'name' => 'كوجي',
      ),
      24 => 
      array (
        'code' => 'KW',
        'name' => 'كوارا',
      ),
      25 => 
      array (
        'code' => 'LA',
        'name' => 'لاجوس',
      ),
      26 => 
      array (
        'code' => 'NA',
        'name' => 'ناساروا',
      ),
      27 => 
      array (
        'code' => 'NI',
        'name' => 'النيجر',
      ),
      28 => 
      array (
        'code' => 'OG',
        'name' => 'أوجون',
      ),
      29 => 
      array (
        'code' => 'ONG',
        'name' => 'أوندو',
      ),
      30 => 
      array (
        'code' => 'OS',
        'name' => 'أوسون',
      ),
      31 => 
      array (
        'code' => 'OY',
        'name' => 'أويو',
      ),
      32 => 
      array (
        'code' => 'PL',
        'name' => 'بلاتو',
      ),
      33 => 
      array (
        'code' => 'RI',
        'name' => 'أنهار',
      ),
      34 => 
      array (
        'code' => 'SO',
        'name' => 'سوكوتو',
      ),
      35 => 
      array (
        'code' => 'TA',
        'name' => 'ترابا',
      ),
      36 => 
      array (
        'code' => 'YO',
        'name' => 'يوبي',
      ),
      37 => 
      array (
        'code' => 'ZA',
        'name' => 'زامفارا',
      ),
    ),
    'NI' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'أطلانطيكو نورت',
      ),
      2 => 
      array (
        'code' => 'AS',
        'name' => 'أطلانطيكو سور',
      ),
      3 => 
      array (
        'code' => 'BO',
        'name' => 'بواكو',
      ),
      4 => 
      array (
        'code' => 'CA',
        'name' => 'كرازو',
      ),
      5 => 
      array (
        'code' => 'CI',
        'name' => 'شينانديجا',
      ),
      6 => 
      array (
        'code' => 'CO',
        'name' => 'شونتاليس',
      ),
      7 => 
      array (
        'code' => 'ES',
        'name' => 'ايستيللي',
      ),
      8 => 
      array (
        'code' => 'GR',
        'name' => 'جرانادا',
      ),
      9 => 
      array (
        'code' => 'JI',
        'name' => 'جينوتيجا',
      ),
      10 => 
      array (
        'code' => 'LE',
        'name' => 'ليون',
      ),
      11 => 
      array (
        'code' => 'MD',
        'name' => 'مدريز',
      ),
      12 => 
      array (
        'code' => 'MN',
        'name' => 'مانجوا',
      ),
      13 => 
      array (
        'code' => 'MS',
        'name' => 'مسايا',
      ),
      14 => 
      array (
        'code' => 'MT',
        'name' => 'ماتاجالبا',
      ),
      15 => 
      array (
        'code' => 'NS',
        'name' => 'نيوفو سيجوفيا',
      ),
      16 => 
      array (
        'code' => 'RS',
        'name' => 'ريو سان خوان',
      ),
      17 => 
      array (
        'code' => 'RI',
        'name' => 'ريفاس',
      ),
    ),
    'NL' => 
    array (
      1 => 
      array (
        'code' => 'DR',
        'name' => 'درينث',
      ),
      2 => 
      array (
        'code' => 'FL',
        'name' => 'فليفولاند',
      ),
      3 => 
      array (
        'code' => 'FR',
        'name' => 'فريسلاند',
      ),
      4 => 
      array (
        'code' => 'GE',
        'name' => 'جيلدرلاند',
      ),
      5 => 
      array (
        'code' => 'GR',
        'name' => 'جرونينجين',
      ),
      6 => 
      array (
        'code' => 'LI',
        'name' => 'ليمبورج',
      ),
      7 => 
      array (
        'code' => 'NB',
        'name' => 'نورد باربانت',
      ),
      8 => 
      array (
        'code' => 'NH',
        'name' => 'نورد هولندا',
      ),
      9 => 
      array (
        'code' => 'OV',
        'name' => 'أوفر جيسيل',
      ),
      10 => 
      array (
        'code' => 'UT',
        'name' => 'اوتريشت',
      ),
      11 => 
      array (
        'code' => 'ZE',
        'name' => 'زيلاند',
      ),
      12 => 
      array (
        'code' => 'ZH',
        'name' => 'زيد هولاند',
      ),
    ),
    'NO' => 
    array (
      1 => 
      array (
        'code' => 'AK',
        'name' => 'اكريشوس',
      ),
      2 => 
      array (
        'code' => 'AA',
        'name' => 'اوست أجادير',
      ),
      3 => 
      array (
        'code' => 'BU',
        'name' => 'بوسكيراد',
      ),
      4 => 
      array (
        'code' => 'FM',
        'name' => 'فينمارك',
      ),
      5 => 
      array (
        'code' => 'HM',
        'name' => 'حيمارك',
      ),
      6 => 
      array (
        'code' => 'HL',
        'name' => 'حوردلاند',
      ),
      7 => 
      array (
        'code' => 'MR',
        'name' => 'مور رومسدال',
      ),
      8 => 
      array (
        'code' => 'NL',
        'name' => 'نوردلاند',
      ),
      9 => 
      array (
        'code' => 'Nt',
        'name' => 'نورد تروندلاج',
      ),
      10 => 
      array (
        'code' => 'OP',
        'name' => 'اوبلاند',
      ),
      11 => 
      array (
        'code' => 'OL',
        'name' => 'اوسلو',
      ),
      12 => 
      array (
        'code' => 'RL',
        'name' => 'روجالاند',
      ),
      13 => 
      array (
        'code' => 'SJ',
        'name' => 'سوجن اوج جوردان',
      ),
      14 => 
      array (
        'code' => 'ST',
        'name' => 'سور ترونديلاج',
      ),
      15 => 
      array (
        'code' => 'SV',
        'name' => 'فالبارد',
      ),
      16 => 
      array (
        'code' => 'TM',
        'name' => 'تليمارك',
      ),
      17 => 
      array (
        'code' => 'TR',
        'name' => 'تروماس',
      ),
      18 => 
      array (
        'code' => 'VA',
        'name' => 'فيست أجادير',
      ),
      19 => 
      array (
        'code' => 'VF',
        'name' => 'فيستفولد',
      ),
      20 => 
      array (
        'code' => 'OF',
        'name' => 'أوستفولد',
      ),
    ),
    'NP' => 
    array (
      1 => 
      array (
        'code' => 'BA',
        'name' => 'باجماتي',
      ),
      2 => 
      array (
        'code' => 'BH',
        'name' => 'بحيري',
      ),
      3 => 
      array (
        'code' => 'DH',
        'name' => 'هوالجيري',
      ),
      4 => 
      array (
        'code' => 'GA',
        'name' => 'جانداكي',
      ),
      5 => 
      array (
        'code' => 'JA',
        'name' => 'جاناكبور',
      ),
      6 => 
      array (
        'code' => 'KA',
        'name' => 'كارنالي',
      ),
      7 => 
      array (
        'code' => 'KO',
        'name' => 'كوسي',
      ),
      8 => 
      array (
        'code' => 'LU',
        'name' => 'لومبيني',
      ),
      9 => 
      array (
        'code' => 'MA',
        'name' => 'ماحاكالي',
      ),
      10 => 
      array (
        'code' => 'ME',
        'name' => 'ميشي',
      ),
      11 => 
      array (
        'code' => 'NA',
        'name' => 'نارياني',
      ),
      12 => 
      array (
        'code' => 'RA',
        'name' => 'رابتي',
      ),
      13 => 
      array (
        'code' => 'SA',
        'name' => 'سارجامارثا',
      ),
      14 => 
      array (
        'code' => 'SE',
        'name' => 'سيتي',
      ),
    ),
    'NR' => 
    array (
      1 => 
      array (
        'code' => 'AO',
        'name' => 'ايوا',
      ),
      2 => 
      array (
        'code' => 'AA',
        'name' => 'أنابار',
      ),
      3 => 
      array (
        'code' => 'AT',
        'name' => 'أنيتان',
      ),
      4 => 
      array (
        'code' => 'AI',
        'name' => 'أنيبار',
      ),
      5 => 
      array (
        'code' => 'BA',
        'name' => 'بايتي',
      ),
      6 => 
      array (
        'code' => 'BO',
        'name' => 'بوي',
      ),
      7 => 
      array (
        'code' => 'BU',
        'name' => 'بودا',
      ),
      8 => 
      array (
        'code' => 'DE',
        'name' => 'دينيجومدو',
      ),
      9 => 
      array (
        'code' => 'EW',
        'name' => 'ايوا',
      ),
      10 => 
      array (
        'code' => 'IJ',
        'name' => 'جوا',
      ),
      11 => 
      array (
        'code' => 'ME',
        'name' => 'مينينج',
      ),
      12 => 
      array (
        'code' => 'NI',
        'name' => 'نيبوك',
      ),
      13 => 
      array (
        'code' => 'UA',
        'name' => 'وابوي',
      ),
      14 => 
      array (
        'code' => 'YA',
        'name' => 'يارن',
      ),
    ),
    'NU' => 
    array (
      1 => 
      array (
        'code' => 'MAK',
        'name' => 'ماكيفو',
      ),
      2 => 
      array (
        'code' => 'TUA',
        'name' => 'توابا',
      ),
      3 => 
      array (
        'code' => 'NAM',
        'name' => 'ناموكولو',
      ),
      4 => 
      array (
        'code' => 'HIK',
        'name' => 'هيكوتافاك',
      ),
      5 => 
      array (
        'code' => 'TOI',
        'name' => 'Toi',
      ),
      6 => 
      array (
        'code' => 'MUT',
        'name' => 'موتالو',
      ),
      7 => 
      array (
        'code' => 'LAK',
        'name' => 'لاكيبا',
      ),
      8 => 
      array (
        'code' => 'LIK',
        'name' => 'ليكو',
      ),
      9 => 
      array (
        'code' => 'HAK',
        'name' => 'هاكوبو',
      ),
      10 => 
      array (
        'code' => 'VAI',
        'name' => 'فايا',
      ),
      11 => 
      array (
        'code' => 'AVA',
        'name' => 'افاتيل',
      ),
      12 => 
      array (
        'code' => 'TAM',
        'name' => 'كاماكوتوجا',
      ),
      13 => 
      array (
        'code' => 'ALO',
        'name' => 'الوفي الجنوبية',
      ),
      14 => 
      array (
        'code' => 'ALO',
        'name' => 'الوفي الشمالية',
      ),
    ),
    'NZ' => 
    array (
      1 => 
      array (
        'code' => 'AUK',
        'name' => 'أوكلاند',
      ),
      2 => 
      array (
        'code' => 'BOP',
        'name' => 'ساحل بلينتي',
      ),
      3 => 
      array (
        'code' => 'CAN',
        'name' => 'كانتربيري',
      ),
      4 => 
      array (
        'code' => 'COR',
        'name' => 'كوروماندل',
      ),
      5 => 
      array (
        'code' => 'GIS',
        'name' => 'جيسبرون',
      ),
      6 => 
      array (
        'code' => 'FIO',
        'name' => 'فيرودلاند',
      ),
      7 => 
      array (
        'code' => 'HKB',
        'name' => 'ساحل حواكس',
      ),
      8 => 
      array (
        'code' => 'MBH',
        'name' => 'مارلبرو',
      ),
      9 => 
      array (
        'code' => 'MWT',
        'name' => 'مانواتو وانجواني',
      ),
      10 => 
      array (
        'code' => 'MCM',
        'name' => 'كوك ماكينزي',
      ),
      11 => 
      array (
        'code' => 'NSN',
        'name' => 'نيلسون',
      ),
      12 => 
      array (
        'code' => 'NTL',
        'name' => 'نورثلاند',
      ),
      13 => 
      array (
        'code' => 'OTA',
        'name' => 'اوتاجو',
      ),
      14 => 
      array (
        'code' => 'STL',
        'name' => 'ساوث لاند',
      ),
      15 => 
      array (
        'code' => 'TKI',
        'name' => 'تارناكي',
      ),
      16 => 
      array (
        'code' => 'WGN',
        'name' => 'ويلينجتون',
      ),
      17 => 
      array (
        'code' => 'WKO',
        'name' => 'وايكاتو',
      ),
      18 => 
      array (
        'code' => 'WAI',
        'name' => 'وايرباراربا',
      ),
      19 => 
      array (
        'code' => 'WTC',
        'name' => 'الساحل الغربي',
      ),
    ),
    'OM' => 
    array (
      1 => 
      array (
        'code' => 'DA',
        'name' => 'الدخيلة',
      ),
      2 => 
      array (
        'code' => 'BA',
        'name' => 'البطينة',
      ),
      3 => 
      array (
        'code' => 'WU',
        'name' => 'الواسطة',
      ),
      4 => 
      array (
        'code' => 'SH',
        'name' => 'الشرقية',
      ),
      5 => 
      array (
        'code' => 'ZA',
        'name' => 'الظهيرة',
      ),
      6 => 
      array (
        'code' => 'MA',
        'name' => 'ماسكات',
      ),
      7 => 
      array (
        'code' => 'MU',
        'name' => 'موساندان',
      ),
      8 => 
      array (
        'code' => 'ZU',
        'name' => 'زوفار',
      ),
    ),
    'PA' => 
    array (
      1 => 
      array (
        'code' => 'BT',
        'name' => 'بوكاس تورو',
      ),
      2 => 
      array (
        'code' => 'CH',
        'name' => 'شيريكي',
      ),
      3 => 
      array (
        'code' => 'CC',
        'name' => 'كوكلي',
      ),
      4 => 
      array (
        'code' => 'Cl',
        'name' => 'كولون',
      ),
      5 => 
      array (
        'code' => 'DA',
        'name' => 'دارين',
      ),
      6 => 
      array (
        'code' => 'HE',
        'name' => 'حريرا',
      ),
      7 => 
      array (
        'code' => 'LS',
        'name' => 'لوس سانتوس',
      ),
      8 => 
      array (
        'code' => 'PA',
        'name' => 'بنما',
      ),
      9 => 
      array (
        'code' => 'SB',
        'name' => 'سان بلاس',
      ),
      10 => 
      array (
        'code' => 'VG',
        'name' => 'فيراجوس',
      ),
    ),
    'PE' => 
    array (
      1 => 
      array (
        'code' => 'AM',
        'name' => 'أمازوناس',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'أنكاش',
      ),
      3 => 
      array (
        'code' => 'AP',
        'name' => 'ابيرويماك',
      ),
      4 => 
      array (
        'code' => 'AR',
        'name' => 'اريكيبا',
      ),
      5 => 
      array (
        'code' => 'AY',
        'name' => 'اياكوشو',
      ),
      6 => 
      array (
        'code' => 'CJ',
        'name' => 'كاجاماركا',
      ),
      7 => 
      array (
        'code' => 'Cl',
        'name' => 'كالاو',
      ),
      8 => 
      array (
        'code' => 'CU',
        'name' => 'كوسكو',
      ),
      9 => 
      array (
        'code' => 'HV',
        'name' => 'هوانكافيليكا',
      ),
      10 => 
      array (
        'code' => 'HO',
        'name' => 'هوانكو',
      ),
      11 => 
      array (
        'code' => 'IC',
        'name' => 'ايكا',
      ),
      12 => 
      array (
        'code' => 'JU',
        'name' => 'جنين',
      ),
      13 => 
      array (
        'code' => 'LD',
        'name' => 'ليبراتيد',
      ),
      14 => 
      array (
        'code' => 'LY',
        'name' => 'لامبياكو',
      ),
      15 => 
      array (
        'code' => 'LI',
        'name' => 'ليما',
      ),
      16 => 
      array (
        'code' => 'LO',
        'name' => 'لوريتو',
      ),
      17 => 
      array (
        'code' => 'MD',
        'name' => 'مادري ديوس',
      ),
      18 => 
      array (
        'code' => 'MO',
        'name' => 'موكيجوا',
      ),
      19 => 
      array (
        'code' => 'PA',
        'name' => 'باسكو',
      ),
      20 => 
      array (
        'code' => 'PI',
        'name' => 'بيورا',
      ),
      21 => 
      array (
        'code' => 'PU',
        'name' => 'بونو',
      ),
      22 => 
      array (
        'code' => 'SM',
        'name' => 'سان مارتن',
      ),
      23 => 
      array (
        'code' => 'TA',
        'name' => 'تاكنا',
      ),
      24 => 
      array (
        'code' => 'TU',
        'name' => 'تومبس',
      ),
      25 => 
      array (
        'code' => 'UC',
        'name' => 'أوكايلي',
      ),
    ),
    'PF' => 
    array (
      1 => 
      array (
        'code' => 'M',
        'name' => 'أرشيبل دي ماركيز',
      ),
      2 => 
      array (
        'code' => 'T',
        'name' => 'أرشيبل دي تواموتو',
      ),
      3 => 
      array (
        'code' => 'I',
        'name' => 'أرشيبل دي توباي',
      ),
      4 => 
      array (
        'code' => 'V',
        'name' => 'إيليس دو فينت',
      ),
      5 => 
      array (
        'code' => 'S',
        'name' => 'إيليس سوس لي فينت',
      ),
    ),
    'PG' => 
    array (
      1 => 
      array (
        'code' => 'BV',
        'name' => 'بوجانفيل',
      ),
      2 => 
      array (
        'code' => 'CE',
        'name' => 'سنترال',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'شيمبو',
      ),
      4 => 
      array (
        'code' => 'EH',
        'name' => 'هايلاند الشرقية',
      ),
      5 => 
      array (
        'code' => 'EB',
        'name' => 'بريطانيا الجديدة الشرقية',
      ),
      6 => 
      array (
        'code' => 'ES',
        'name' => 'سيبيك الشرقية',
      ),
      7 => 
      array (
        'code' => 'EN',
        'name' => 'انجا',
      ),
      8 => 
      array (
        'code' => 'GU',
        'name' => 'الخليج',
      ),
      9 => 
      array (
        'code' => 'MD',
        'name' => 'مادانج',
      ),
      10 => 
      array (
        'code' => 'MN',
        'name' => 'منوس',
      ),
      11 => 
      array (
        'code' => 'MB',
        'name' => 'ساحل ميلين',
      ),
      12 => 
      array (
        'code' => 'MR',
        'name' => 'موروبي',
      ),
      13 => 
      array (
        'code' => 'NC',
        'name' => 'العاصمة الوطنية',
      ),
      14 => 
      array (
        'code' => 'NI',
        'name' => 'نيو ايرلاند',
      ),
      15 => 
      array (
        'code' => 'NO',
        'name' => 'الشمالية',
      ),
      16 => 
      array (
        'code' => 'SA',
        'name' => 'سانداون',
      ),
      17 => 
      array (
        'code' => 'SH',
        'name' => 'هايلاند الجنوبية',
      ),
      18 => 
      array (
        'code' => 'WE',
        'name' => 'الغربية',
      ),
      19 => 
      array (
        'code' => 'WH',
        'name' => 'هايلاند الغربية',
      ),
      20 => 
      array (
        'code' => 'WB',
        'name' => 'بريطانيا الجديدة الغربية',
      ),
    ),
    'PH' => 
    array (
      1 => 
      array (
        'code' => 'ABR',
        'name' => 'ابرا',
      ),
      2 => 
      array (
        'code' => 'ANO',
        'name' => 'اجوسان دي نورت',
      ),
      3 => 
      array (
        'code' => 'ASU',
        'name' => 'اجوسان دي سور',
      ),
      4 => 
      array (
        'code' => 'AKL',
        'name' => 'آكلان',
      ),
      5 => 
      array (
        'code' => 'ALB',
        'name' => 'الباي',
      ),
      6 => 
      array (
        'code' => 'ANT',
        'name' => 'أنتيك',
      ),
      7 => 
      array (
        'code' => 'APY',
        'name' => 'ابايو',
      ),
      8 => 
      array (
        'code' => 'AUR',
        'name' => 'أورورا',
      ),
      9 => 
      array (
        'code' => 'BAS',
        'name' => 'باسيلان',
      ),
      10 => 
      array (
        'code' => 'BTA',
        'name' => 'باتان',
      ),
      11 => 
      array (
        'code' => 'BTE',
        'name' => 'باتانيس',
      ),
      12 => 
      array (
        'code' => 'BTG',
        'name' => 'باتانجاس',
      ),
      13 => 
      array (
        'code' => 'BLR',
        'name' => 'بيليران',
      ),
      14 => 
      array (
        'code' => 'BEN',
        'name' => 'بنجويت',
      ),
      15 => 
      array (
        'code' => 'BOL',
        'name' => 'بوهول',
      ),
      16 => 
      array (
        'code' => 'BUK',
        'name' => 'بوكيدنون',
      ),
      17 => 
      array (
        'code' => 'BUL',
        'name' => 'بولاكان',
      ),
      18 => 
      array (
        'code' => 'CAG',
        'name' => 'كاجايان',
      ),
      19 => 
      array (
        'code' => 'CNO',
        'name' => 'كاميرنيز الشمالية',
      ),
      20 => 
      array (
        'code' => 'CSU',
        'name' => 'كاميرينيز الجنوبية',
      ),
      21 => 
      array (
        'code' => 'CAM',
        'name' => 'كاميجوين',
      ),
      22 => 
      array (
        'code' => 'CAP',
        'name' => 'كابيز',
      ),
      23 => 
      array (
        'code' => 'CAT',
        'name' => 'كاتاندونيس',
      ),
      24 => 
      array (
        'code' => 'CAV',
        'name' => 'كافيت',
      ),
      25 => 
      array (
        'code' => 'CEB',
        'name' => 'سيبو',
      ),
      26 => 
      array (
        'code' => 'CMP',
        'name' => 'كومبوستيلا',
      ),
      27 => 
      array (
        'code' => 'DNO',
        'name' => 'دافاو الشمالية',
      ),
      28 => 
      array (
        'code' => 'DSU',
        'name' => 'دافاو الجنوبية',
      ),
      29 => 
      array (
        'code' => 'DOR',
        'name' => 'دافاو الشرقية',
      ),
      30 => 
      array (
        'code' => 'ESA',
        'name' => 'سامار الشرقية',
      ),
      31 => 
      array (
        'code' => 'GUI',
        'name' => 'جيماراس',
      ),
      32 => 
      array (
        'code' => 'IFU',
        'name' => 'فوجاو',
      ),
      33 => 
      array (
        'code' => 'INO',
        'name' => 'لوكوس الشمالية',
      ),
      34 => 
      array (
        'code' => 'ISU',
        'name' => 'لوكوس الجنوبية',
      ),
      35 => 
      array (
        'code' => 'ILO',
        'name' => 'لوالو',
      ),
      36 => 
      array (
        'code' => 'ISA',
        'name' => 'ايزابيلا',
      ),
      37 => 
      array (
        'code' => 'KAL',
        'name' => 'كالينجا',
      ),
      38 => 
      array (
        'code' => 'LAG',
        'name' => 'لاجونا',
      ),
      39 => 
      array (
        'code' => 'LNO',
        'name' => 'لاانو الشمالية',
      ),
      40 => 
      array (
        'code' => 'LSU',
        'name' => 'لاانو الجنوبية',
      ),
      41 => 
      array (
        'code' => 'UNI',
        'name' => 'لا يونيون',
      ),
      42 => 
      array (
        'code' => 'LEY',
        'name' => 'ليت',
      ),
      43 => 
      array (
        'code' => 'MAG',
        'name' => 'ماجويندانو',
      ),
      44 => 
      array (
        'code' => 'MRN',
        'name' => 'ماريندوكو',
      ),
      45 => 
      array (
        'code' => 'MSB',
        'name' => 'ماسبات',
      ),
      46 => 
      array (
        'code' => 'MIC',
        'name' => 'ميندورو أوكسيدينتال',
      ),
      47 => 
      array (
        'code' => 'MIR',
        'name' => 'ميندورو الشرقية',
      ),
      48 => 
      array (
        'code' => 'MSC',
        'name' => 'ميساميس',
      ),
      49 => 
      array (
        'code' => 'MOR',
        'name' => 'ميساميس الشرقية',
      ),
      50 => 
      array (
        'code' => 'MOP',
        'name' => 'جبل',
      ),
      51 => 
      array (
        'code' => 'NOC',
        'name' => 'نيجروس أوكسيدينتال',
      ),
      52 => 
      array (
        'code' => 'NOR',
        'name' => 'نيجروس الشرقية',
      ),
      53 => 
      array (
        'code' => 'NCT',
        'name' => 'كوتاباتو الشمالية',
      ),
      54 => 
      array (
        'code' => 'NSM',
        'name' => 'سامار الشمالية',
      ),
      55 => 
      array (
        'code' => 'NEC',
        'name' => 'نويفا اسيجا',
      ),
      56 => 
      array (
        'code' => 'NVZ',
        'name' => 'نويفا فيزكايا',
      ),
      57 => 
      array (
        'code' => 'PLW',
        'name' => 'بالاوان',
      ),
      58 => 
      array (
        'code' => 'PMP',
        'name' => 'بامبانجا',
      ),
      59 => 
      array (
        'code' => 'PNG',
        'name' => 'بانجاسينان',
      ),
      60 => 
      array (
        'code' => 'QZN',
        'name' => 'كويزون',
      ),
      61 => 
      array (
        'code' => 'QRN',
        'name' => 'كويرينو',
      ),
      62 => 
      array (
        'code' => 'RIZ',
        'name' => 'ريزال',
      ),
      63 => 
      array (
        'code' => 'ROM',
        'name' => 'رومبلون',
      ),
      64 => 
      array (
        'code' => 'SMR',
        'name' => 'سامار',
      ),
      65 => 
      array (
        'code' => 'SRG',
        'name' => 'سارنجاني',
      ),
      66 => 
      array (
        'code' => 'SQJ',
        'name' => 'سيكوجور',
      ),
      67 => 
      array (
        'code' => 'SRS',
        'name' => 'سورسوجون',
      ),
      68 => 
      array (
        'code' => 'SCO',
        'name' => 'كوتاباتو الجنوبية',
      ),
      69 => 
      array (
        'code' => 'SLE',
        'name' => 'ليت الجنوبية',
      ),
      70 => 
      array (
        'code' => 'SKU',
        'name' => 'سلطان قدرات',
      ),
      71 => 
      array (
        'code' => 'SLU',
        'name' => 'سولو',
      ),
      72 => 
      array (
        'code' => 'SNO',
        'name' => 'سوريجاو الشمالية',
      ),
      73 => 
      array (
        'code' => 'SSU',
        'name' => 'سوريجاو الجنوبية',
      ),
      74 => 
      array (
        'code' => 'TAR',
        'name' => 'تارلاك',
      ),
      75 => 
      array (
        'code' => 'TAW',
        'name' => 'تاوي تاوي',
      ),
      76 => 
      array (
        'code' => 'ZBL',
        'name' => 'زامبليس',
      ),
      77 => 
      array (
        'code' => 'ZNO',
        'name' => 'زامبونجا الشمالية',
      ),
      78 => 
      array (
        'code' => 'ZSU',
        'name' => 'زامبونجا الجنوبية',
      ),
      79 => 
      array (
        'code' => 'ZSI',
        'name' => 'زامبونجا سيبوجاي',
      ),
    ),
    'PK' => 
    array (
      1 => 
      array (
        'code' => 'B',
        'name' => 'بالوشيستان',
      ),
      2 => 
      array (
        'code' => 'T',
        'name' => 'القبائل المحكومة فيدراليًا',
      ),
      3 => 
      array (
        'code' => 'I',
        'name' => 'مقاطعة كابيتال إسلام أباد',
      ),
      4 => 
      array (
        'code' => 'N',
        'name' => 'الحدود الشمالية الغربية',
      ),
      5 => 
      array (
        'code' => 'P',
        'name' => 'بنجاب',
      ),
      6 => 
      array (
        'code' => 'S',
        'name' => 'سيندة',
      ),
    ),
    'PL' => 
    array (
      1 => 
      array (
        'code' => 'DO',
        'name' => 'دولناوسلاسكي',
      ),
      2 => 
      array (
        'code' => 'KP',
        'name' => 'كوجاواسكو بومورسكي',
      ),
      3 => 
      array (
        'code' => 'LL',
        'name' => 'لوبيلسكي',
      ),
      4 => 
      array (
        'code' => 'LU',
        'name' => 'لوبوسكس',
      ),
      5 => 
      array (
        'code' => 'LO',
        'name' => 'لودزكي',
      ),
      6 => 
      array (
        'code' => 'ML',
        'name' => 'مالوبلوسكي',
      ),
      7 => 
      array (
        'code' => 'MZ',
        'name' => 'مازوويكي',
      ),
      8 => 
      array (
        'code' => 'OP',
        'name' => 'اوبوليسكي',
      ),
      9 => 
      array (
        'code' => 'PP',
        'name' => 'بودكارباكي',
      ),
      10 => 
      array (
        'code' => 'PL',
        'name' => 'بودالسكي',
      ),
      11 => 
      array (
        'code' => 'PM',
        'name' => 'بومورسكي',
      ),
      12 => 
      array (
        'code' => 'SL',
        'name' => 'سلاسكي',
      ),
      13 => 
      array (
        'code' => 'SW',
        'name' => 'سويتكرذسكي',
      ),
      14 => 
      array (
        'code' => 'WM',
        'name' => 'وورمينسكو مازورسكي',
      ),
      15 => 
      array (
        'code' => 'WP',
        'name' => 'ويلكوبولوسكي',
      ),
      16 => 
      array (
        'code' => 'ZA',
        'name' => 'زاشونيوبومورسكي',
      ),
    ),
    'PM' => 
    array (
      1 => 
      array (
        'code' => 'P',
        'name' => 'سانت بيير',
      ),
      2 => 
      array (
        'code' => 'M',
        'name' => 'ميكيلون',
      ),
    ),
    'PN' => 
    array (
      1 => 
      array (
        'code' => 'PIT',
        'name' => 'جزيرة بيتكارين',
      ),
    ),
    'PR' => 
    array (
      1 => 
      array (
        'code' => 'A-A',
        'name' => 'أناسكو',
      ),
      2 => 
      array (
        'code' => 'ADJ',
        'name' => 'أدجنتاس',
      ),
      3 => 
      array (
        'code' => 'AGU',
        'name' => 'أجوادا',
      ),
      4 => 
      array (
        'code' => 'AGU',
        'name' => 'أجواديلا',
      ),
      5 => 
      array (
        'code' => 'AGU',
        'name' => 'أجواس بيوناس',
      ),
      6 => 
      array (
        'code' => 'AIB',
        'name' => 'ايبونيتو',
      ),
      7 => 
      array (
        'code' => 'ARE',
        'name' => 'اريسيبو',
      ),
      8 => 
      array (
        'code' => 'ARR',
        'name' => 'ارويو',
      ),
      9 => 
      array (
        'code' => 'BAR',
        'name' => 'برشولنيتا',
      ),
      10 => 
      array (
        'code' => 'BAR',
        'name' => 'برانكيتاس',
      ),
      11 => 
      array (
        'code' => 'BAY',
        'name' => 'بايامون',
      ),
      12 => 
      array (
        'code' => 'CAB',
        'name' => 'كابو روجو',
      ),
      13 => 
      array (
        'code' => 'CAG',
        'name' => 'كاجواس',
      ),
      14 => 
      array (
        'code' => 'CAM',
        'name' => 'كاموي',
      ),
      15 => 
      array (
        'code' => 'CAN',
        'name' => 'كانوفاناس',
      ),
      16 => 
      array (
        'code' => 'CAR',
        'name' => 'كارولينا',
      ),
      17 => 
      array (
        'code' => 'CAT',
        'name' => 'كاتانو',
      ),
      18 => 
      array (
        'code' => 'CAY',
        'name' => 'كايي',
      ),
      19 => 
      array (
        'code' => 'CEI',
        'name' => 'سيبا',
      ),
      20 => 
      array (
        'code' => 'CIA',
        'name' => 'سيالس',
      ),
      21 => 
      array (
        'code' => 'CID',
        'name' => 'سيدرا',
      ),
      22 => 
      array (
        'code' => 'COA',
        'name' => 'موامو',
      ),
      23 => 
      array (
        'code' => 'COM',
        'name' => 'كوميريو',
      ),
      24 => 
      array (
        'code' => 'COR',
        'name' => 'كوروزال',
      ),
      25 => 
      array (
        'code' => 'CUL',
        'name' => 'كوليبرا',
      ),
      26 => 
      array (
        'code' => 'DOR',
        'name' => 'دورادو',
      ),
      27 => 
      array (
        'code' => 'FAJ',
        'name' => 'فاجردو',
      ),
      28 => 
      array (
        'code' => 'FLO',
        'name' => 'فلوريدا',
      ),
      29 => 
      array (
        'code' => 'GUA',
        'name' => 'جواياما',
      ),
      30 => 
      array (
        'code' => 'GUA',
        'name' => 'جوايانيللا',
      ),
      31 => 
      array (
        'code' => 'GUA',
        'name' => 'جواينابو',
      ),
      32 => 
      array (
        'code' => 'GUR',
        'name' => 'جورابو',
      ),
      33 => 
      array (
        'code' => 'GU',
        'name' => 'جوانيكا',
      ),
      34 => 
      array (
        'code' => 'HAT',
        'name' => 'هاتيلو',
      ),
      35 => 
      array (
        'code' => 'HOR',
        'name' => 'هورميجوروس',
      ),
      36 => 
      array (
        'code' => 'HUM',
        'name' => 'هوماكو',
      ),
      37 => 
      array (
        'code' => 'ISA',
        'name' => 'ايزابيلا',
      ),
      38 => 
      array (
        'code' => 'JAY',
        'name' => 'جايوا',
      ),
      39 => 
      array (
        'code' => 'JUA',
        'name' => 'جوانا دياز',
      ),
      40 => 
      array (
        'code' => 'JUN',
        'name' => 'جانكوس',
      ),
      41 => 
      array (
        'code' => 'LAJ',
        'name' => 'لاجاس',
      ),
      42 => 
      array (
        'code' => 'LAR',
        'name' => 'لارس',
      ),
      43 => 
      array (
        'code' => 'LAS',
        'name' => 'لاس مارياس',
      ),
      44 => 
      array (
        'code' => 'LAS',
        'name' => 'لاس بيدراس',
      ),
      45 => 
      array (
        'code' => 'LOÕ',
        'name' => 'لويزا',
      ),
      46 => 
      array (
        'code' => 'LUQ',
        'name' => 'لوكيلو',
      ),
      47 => 
      array (
        'code' => 'MAN',
        'name' => 'ماناتي',
      ),
      48 => 
      array (
        'code' => 'MAR',
        'name' => 'مارياكو',
      ),
      49 => 
      array (
        'code' => 'MAU',
        'name' => 'مونابو',
      ),
      50 => 
      array (
        'code' => 'MAY',
        'name' => 'ماياجيز',
      ),
      51 => 
      array (
        'code' => 'MOC',
        'name' => 'موكا',
      ),
      52 => 
      array (
        'code' => 'MOR',
        'name' => 'موروفيس',
      ),
      53 => 
      array (
        'code' => 'NAG',
        'name' => 'ناجوبو',
      ),
      54 => 
      array (
        'code' => 'NAR',
        'name' => 'نارانجيتو',
      ),
      55 => 
      array (
        'code' => 'ORO',
        'name' => 'اوروكوفيس',
      ),
      56 => 
      array (
        'code' => 'PAT',
        'name' => 'باتيلاس',
      ),
      57 => 
      array (
        'code' => 'PE-',
        'name' => 'بنيولاس',
      ),
      58 => 
      array (
        'code' => 'PON',
        'name' => 'بونس',
      ),
      59 => 
      array (
        'code' => 'QUE',
        'name' => 'كويبراديلاس',
      ),
      60 => 
      array (
        'code' => 'RIN',
        'name' => 'رينكون',
      ),
      61 => 
      array (
        'code' => 'RIO',
        'name' => 'ريو جراند',
      ),
      62 => 
      array (
        'code' => 'SAB',
        'name' => 'سابانا جراند',
      ),
      63 => 
      array (
        'code' => 'SAL',
        'name' => 'ساليناس',
      ),
      64 => 
      array (
        'code' => 'SAN',
        'name' => 'سان جيرمان',
      ),
      65 => 
      array (
        'code' => 'SAN',
        'name' => 'سان خوان',
      ),
      66 => 
      array (
        'code' => 'SAN',
        'name' => 'سان لورنزو',
      ),
      67 => 
      array (
        'code' => 'SAN',
        'name' => 'سان سيباستيان',
      ),
      68 => 
      array (
        'code' => 'SAN',
        'name' => 'سانت ايزابيل',
      ),
      69 => 
      array (
        'code' => 'TOA',
        'name' => 'توا التا',
      ),
      70 => 
      array (
        'code' => 'TOA',
        'name' => 'توا باجا',
      ),
      71 => 
      array (
        'code' => 'TRU',
        'name' => 'تروجيلو التو',
      ),
      72 => 
      array (
        'code' => 'UTU',
        'name' => 'اوتادو',
      ),
      73 => 
      array (
        'code' => 'VEG',
        'name' => 'فيجا التا',
      ),
      74 => 
      array (
        'code' => 'VEG',
        'name' => 'فيجا باجا',
      ),
      75 => 
      array (
        'code' => 'VIE',
        'name' => 'فيكيس',
      ),
      76 => 
      array (
        'code' => 'VIL',
        'name' => 'فيلالبا',
      ),
      77 => 
      array (
        'code' => 'YAB',
        'name' => 'يابوكوا',
      ),
      78 => 
      array (
        'code' => 'YAU',
        'name' => 'يوكو',
      ),
    ),
    'PT' => 
    array (
      1 => 
      array (
        'code' => 'AC',
        'name' => 'أكوريس',
      ),
      2 => 
      array (
        'code' => 'AV',
        'name' => 'افيرو',
      ),
      3 => 
      array (
        'code' => 'BE',
        'name' => 'بيجا',
      ),
      4 => 
      array (
        'code' => 'BR',
        'name' => 'براجا',
      ),
      5 => 
      array (
        'code' => 'BA',
        'name' => 'براجانكا',
      ),
      6 => 
      array (
        'code' => 'CB',
        'name' => 'كاستيلو برانكو',
      ),
      7 => 
      array (
        'code' => 'CO',
        'name' => 'كويمبرا',
      ),
      8 => 
      array (
        'code' => 'EV',
        'name' => 'ايفورا',
      ),
      9 => 
      array (
        'code' => 'FA',
        'name' => 'فارو',
      ),
      10 => 
      array (
        'code' => 'GU',
        'name' => 'جاردا',
      ),
      12 => 
      array (
        'code' => 'LE',
        'name' => 'ليريا',
      ),
      13 => 
      array (
        'code' => 'LI',
        'name' => 'ليسبوا',
      ),
      14 => 
      array (
        'code' => 'ME',
        'name' => 'ماديرا',
      ),
      15 => 
      array (
        'code' => 'PO',
        'name' => 'بورتاليجري',
      ),
      16 => 
      array (
        'code' => 'PR',
        'name' => 'بورتو',
      ),
      17 => 
      array (
        'code' => 'SA',
        'name' => 'سانتاريم',
      ),
      18 => 
      array (
        'code' => 'SE',
        'name' => 'سيتاوبال',
      ),
      19 => 
      array (
        'code' => 'VC',
        'name' => 'فيانا دي كاستيلو',
      ),
      20 => 
      array (
        'code' => 'VR',
        'name' => 'فيلا ريال',
      ),
      21 => 
      array (
        'code' => 'VI',
        'name' => 'فيسو',
      ),
    ),
    'PW' => 
    array (
      1 => 
      array (
        'code' => 'AM',
        'name' => 'ايميلك',
      ),
      2 => 
      array (
        'code' => 'AR',
        'name' => 'ايراي',
      ),
      3 => 
      array (
        'code' => 'AN',
        'name' => 'انجوار',
      ),
      4 => 
      array (
        'code' => 'HA',
        'name' => 'هاتوهيبي',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'كايانجيل',
      ),
      6 => 
      array (
        'code' => 'KO',
        'name' => 'كورور',
      ),
      7 => 
      array (
        'code' => 'ME',
        'name' => 'ميليكيوك',
      ),
      8 => 
      array (
        'code' => 'NA',
        'name' => 'جاراد',
      ),
      9 => 
      array (
        'code' => 'NG',
        'name' => 'جارشيلونج',
      ),
      10 => 
      array (
        'code' => 'ND',
        'name' => 'جارديماو',
      ),
      11 => 
      array (
        'code' => 'Nt',
        'name' => 'جاتبانج',
      ),
      12 => 
      array (
        'code' => 'NC',
        'name' => 'جاشيسار',
      ),
      13 => 
      array (
        'code' => 'NR',
        'name' => 'جيريميلونجي',
      ),
      14 => 
      array (
        'code' => 'NW',
        'name' => 'جيوال',
      ),
      15 => 
      array (
        'code' => 'PE',
        'name' => 'بيلوليو',
      ),
      16 => 
      array (
        'code' => 'SO',
        'name' => 'سونسورال',
      ),
    ),
    'PY' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'التو بارجواي',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'التو بارانا',
      ),
      3 => 
      array (
        'code' => 'AM',
        'name' => 'امامباي',
      ),
      4 => 
      array (
        'code' => 'AS',
        'name' => 'اسونسيون',
      ),
      5 => 
      array (
        'code' => 'BO',
        'name' => 'بوكيريون',
      ),
      6 => 
      array (
        'code' => 'CG',
        'name' => 'كاجوازو',
      ),
      7 => 
      array (
        'code' => 'CZ',
        'name' => 'كازابا',
      ),
      8 => 
      array (
        'code' => 'CN',
        'name' => 'كانينديو',
      ),
      9 => 
      array (
        'code' => 'CE',
        'name' => 'سنترال',
      ),
      10 => 
      array (
        'code' => 'CC',
        'name' => 'كونسيبسيون',
      ),
      11 => 
      array (
        'code' => 'CD',
        'name' => 'كورديليرا',
      ),
      12 => 
      array (
        'code' => 'GU',
        'name' => 'جويرا',
      ),
      13 => 
      array (
        'code' => 'IT',
        'name' => 'ايتبوا',
      ),
      14 => 
      array (
        'code' => 'MI',
        'name' => 'مييونز',
      ),
      15 => 
      array (
        'code' => 'NE',
        'name' => 'نيمبوكو',
      ),
      16 => 
      array (
        'code' => 'PA',
        'name' => 'باراجواي',
      ),
      17 => 
      array (
        'code' => 'PH',
        'name' => ' رئيس هايس',
      ),
      18 => 
      array (
        'code' => 'SP',
        'name' => 'سان بيدرو',
      ),
    ),
    'QA' => 
    array (
      1 => 
      array (
        'code' => 'DW',
        'name' => 'الدوحة',
      ),
      2 => 
      array (
        'code' => 'GW',
        'name' => 'الغويرية',
      ),
      3 => 
      array (
        'code' => 'JM',
        'name' => 'الجميلية',
      ),
      4 => 
      array (
        'code' => 'KR',
        'name' => 'الخور',
      ),
      5 => 
      array (
        'code' => 'WK',
        'name' => 'الوقرة',
      ),
      6 => 
      array (
        'code' => 'RN',
        'name' => 'الريان',
      ),
      7 => 
      array (
        'code' => 'JB',
        'name' => 'جريان البطينة',
      ),
      8 => 
      array (
        'code' => 'MS',
        'name' => 'مدينة الشمال',
      ),
      9 => 
      array (
        'code' => 'UD',
        'name' => 'أم سعيد',
      ),
      10 => 
      array (
        'code' => 'UL',
        'name' => 'أم صلال',
      ),
    ),
    'RO' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'البا',
      ),
      2 => 
      array (
        'code' => 'AR',
        'name' => 'اراد',
      ),
      3 => 
      array (
        'code' => 'AG',
        'name' => 'ارجيس',
      ),
      4 => 
      array (
        'code' => 'BC',
        'name' => 'باكاو',
      ),
      5 => 
      array (
        'code' => 'BH',
        'name' => 'بيحور',
      ),
      6 => 
      array (
        'code' => 'BN',
        'name' => 'بيستريتا ناسود',
      ),
      7 => 
      array (
        'code' => 'BT',
        'name' => 'بوتوساني',
      ),
      8 => 
      array (
        'code' => 'BV',
        'name' => 'براسوف',
      ),
      9 => 
      array (
        'code' => 'BR',
        'name' => 'برايلا',
      ),
      10 => 
      array (
        'code' => 'B',
        'name' => 'بوكوريستي',
      ),
      11 => 
      array (
        'code' => 'BZ',
        'name' => 'بوزو',
      ),
      12 => 
      array (
        'code' => 'CS',
        'name' => 'كاراس سيفيرين',
      ),
      13 => 
      array (
        'code' => 'Cl',
        'name' => 'كالاراسي',
      ),
      14 => 
      array (
        'code' => 'CJ',
        'name' => 'كلوج',
      ),
      15 => 
      array (
        'code' => 'CT',
        'name' => 'كونستانتا',
      ),
      16 => 
      array (
        'code' => 'CV',
        'name' => 'كوفاسنا',
      ),
      17 => 
      array (
        'code' => 'DB',
        'name' => 'ديمبوفيتا',
      ),
      18 => 
      array (
        'code' => 'DJ',
        'name' => 'دولج',
      ),
      19 => 
      array (
        'code' => 'GL',
        'name' => 'جالاتي',
      ),
      20 => 
      array (
        'code' => 'GR',
        'name' => 'جورجيو',
      ),
      21 => 
      array (
        'code' => 'GJ',
        'name' => 'جورج',
      ),
      22 => 
      array (
        'code' => 'HR',
        'name' => 'هارغيتا',
      ),
      23 => 
      array (
        'code' => 'HD',
        'name' => 'هونيدورا',
      ),
      24 => 
      array (
        'code' => 'IL',
        'name' => 'لالوميتا',
      ),
      25 => 
      array (
        'code' => 'IS',
        'name' => 'لاسي',
      ),
      26 => 
      array (
        'code' => 'IF',
        'name' => 'لفوف',
      ),
      27 => 
      array (
        'code' => 'MM',
        'name' => 'ماراموريس',
      ),
      28 => 
      array (
        'code' => 'MH',
        'name' => 'ميهيدنتي',
      ),
      29 => 
      array (
        'code' => 'MS',
        'name' => 'موريس',
      ),
      30 => 
      array (
        'code' => 'Nt',
        'name' => 'نعمة',
      ),
      31 => 
      array (
        'code' => 'OT',
        'name' => 'أولت',
      ),
      32 => 
      array (
        'code' => 'PH',
        'name' => 'براهوفا',
      ),
      33 => 
      array (
        'code' => 'SM',
        'name' => 'ساتومار',
      ),
      34 => 
      array (
        'code' => 'SJ',
        'name' => 'سالاجي',
      ),
      35 => 
      array (
        'code' => 'SB',
        'name' => 'سيبيو',
      ),
      36 => 
      array (
        'code' => 'SV',
        'name' => 'سوسيفا',
      ),
      37 => 
      array (
        'code' => 'TR',
        'name' => 'تيليورمان',
      ),
      38 => 
      array (
        'code' => 'TM',
        'name' => 'تيميز',
      ),
      39 => 
      array (
        'code' => 'TL',
        'name' => 'تولكا',
      ),
      40 => 
      array (
        'code' => 'VS',
        'name' => 'فاسلوي',
      ),
      41 => 
      array (
        'code' => 'VL',
        'name' => 'فاليسيا',
      ),
      42 => 
      array (
        'code' => 'VN',
        'name' => 'فرانسيا',
      ),
    ),
    'RU' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'اباكان',
      ),
      2 => 
      array (
        'code' => 'AG',
        'name' => 'أجينوكسي',
      ),
      3 => 
      array (
        'code' => 'AN',
        'name' => 'أندير',
      ),
      4 => 
      array (
        'code' => 'AR',
        'name' => 'أركاهانجلسك',
      ),
      5 => 
      array (
        'code' => 'AS',
        'name' => 'أستراخان',
      ),
      6 => 
      array (
        'code' => 'BA',
        'name' => 'بانول',
      ),
      7 => 
      array (
        'code' => 'BE',
        'name' => 'بيلجوراد',
      ),
      8 => 
      array (
        'code' => 'BI',
        'name' => 'بيروبيدزان',
      ),
      9 => 
      array (
        'code' => 'BL',
        'name' => 'بلاجوفيشنسيك',
      ),
      10 => 
      array (
        'code' => 'BR',
        'name' => 'براينسك',
      ),
      11 => 
      array (
        'code' => 'CH',
        'name' => 'شيبوكساري',
      ),
      12 => 
      array (
        'code' => 'Cl',
        'name' => 'شيليبيانسك',
      ),
      13 => 
      array (
        'code' => 'CR',
        'name' => 'سريكيسك',
      ),
      14 => 
      array (
        'code' => 'CI',
        'name' => 'شيتا',
      ),
      15 => 
      array (
        'code' => 'DU',
        'name' => 'دودينكا',
      ),
      16 => 
      array (
        'code' => 'EL',
        'name' => 'إيليستا',
      ),
      17 => 
      array (
        'code' => 'GO',
        'name' => 'جومو التايسك',
      ),
      18 => 
      array (
        'code' => 'GA',
        'name' => 'جورنو التايسك',
      ),
      19 => 
      array (
        'code' => 'GR',
        'name' => 'جروزني',
      ),
      20 => 
      array (
        'code' => 'IR',
        'name' => 'ايركوتسك',
      ),
      21 => 
      array (
        'code' => 'IV',
        'name' => 'ايفنوف',
      ),
      22 => 
      array (
        'code' => 'IZ',
        'name' => 'ازهيفسك',
      ),
      23 => 
      array (
        'code' => 'KA',
        'name' => 'كاينيجراد',
      ),
      24 => 
      array (
        'code' => 'KL',
        'name' => 'كالوجا',
      ),
      25 => 
      array (
        'code' => 'KS',
        'name' => 'كاسندوار',
      ),
      26 => 
      array (
        'code' => 'KZ',
        'name' => 'كازان',
      ),
      27 => 
      array (
        'code' => 'KE',
        'name' => 'كيميروفو',
      ),
      28 => 
      array (
        'code' => 'KH',
        'name' => 'خابورفسك',
      ),
      29 => 
      array (
        'code' => 'KM',
        'name' => 'خانتي مانسيسك',
      ),
      30 => 
      array (
        'code' => 'KO',
        'name' => 'كوستروما',
      ),
      31 => 
      array (
        'code' => 'KR',
        'name' => 'كراسنودار',
      ),
      32 => 
      array (
        'code' => 'KN',
        'name' => 'كراسونيارسك',
      ),
      33 => 
      array (
        'code' => 'KU',
        'name' => 'كوديمكار',
      ),
      34 => 
      array (
        'code' => 'KG',
        'name' => 'كورجان',
      ),
      35 => 
      array (
        'code' => 'KK',
        'name' => 'كورسك',
      ),
      36 => 
      array (
        'code' => 'KY',
        'name' => 'كيزيل',
      ),
      37 => 
      array (
        'code' => 'LI',
        'name' => 'ليبيتسك',
      ),
      38 => 
      array (
        'code' => 'MA',
        'name' => 'ماجادان',
      ),
      39 => 
      array (
        'code' => 'MK',
        'name' => 'ماخشكالا',
      ),
      40 => 
      array (
        'code' => 'MY',
        'name' => 'ميكوب',
      ),
      41 => 
      array (
        'code' => 'MO',
        'name' => 'موسكو',
      ),
      42 => 
      array (
        'code' => 'MU',
        'name' => 'مومانسك',
      ),
      43 => 
      array (
        'code' => 'NA',
        'name' => 'نالشيك',
      ),
      44 => 
      array (
        'code' => 'NR',
        'name' => 'ناريان مار',
      ),
      45 => 
      array (
        'code' => 'NZ',
        'name' => 'نازران',
      ),
      46 => 
      array (
        'code' => 'NI',
        'name' => 'نيزني نوفوجورد',
      ),
      47 => 
      array (
        'code' => 'NO',
        'name' => 'نوفوجورد',
      ),
      48 => 
      array (
        'code' => 'NV',
        'name' => 'نوفوسيبيرسك',
      ),
      49 => 
      array (
        'code' => 'OM',
        'name' => 'أومسك',
      ),
      50 => 
      array (
        'code' => 'OR',
        'name' => 'أوريل',
      ),
      51 => 
      array (
        'code' => 'OE',
        'name' => 'اورينبرج',
      ),
      52 => 
      array (
        'code' => 'PA',
        'name' => 'بالانا',
      ),
      53 => 
      array (
        'code' => 'PE',
        'name' => 'بينزا',
      ),
      54 => 
      array (
        'code' => 'PR',
        'name' => 'بيرم',
      ),
      55 => 
      array (
        'code' => 'PK',
        'name' => 'بيتروبالوفيسك كامشتاسكي',
      ),
      56 => 
      array (
        'code' => 'PT',
        'name' => 'بيتروزافودسك',
      ),
      57 => 
      array (
        'code' => 'PS',
        'name' => 'بسكوف',
      ),
      58 => 
      array (
        'code' => 'RO',
        'name' => 'روستوف دونو',
      ),
      59 => 
      array (
        'code' => 'RY',
        'name' => 'رايزان',
      ),
      60 => 
      array (
        'code' => 'SL',
        'name' => 'سيليخارد',
      ),
      61 => 
      array (
        'code' => 'SA',
        'name' => 'سامارا',
      ),
      62 => 
      array (
        'code' => 'SR',
        'name' => 'سارانسك',
      ),
      63 => 
      array (
        'code' => 'SV',
        'name' => 'ساراتوف',
      ),
      64 => 
      array (
        'code' => 'SM',
        'name' => 'سمولينسك',
      ),
      65 => 
      array (
        'code' => 'SP',
        'name' => 'سانت بيترسبورج',
      ),
      66 => 
      array (
        'code' => 'ST',
        'name' => 'ستافروبول',
      ),
      67 => 
      array (
        'code' => 'SY',
        'name' => 'سيكتيفكار',
      ),
      68 => 
      array (
        'code' => 'TA',
        'name' => 'تامبوف',
      ),
      69 => 
      array (
        'code' => 'TO',
        'name' => 'تومسك',
      ),
      70 => 
      array (
        'code' => 'TU',
        'name' => 'تولا',
      ),
      71 => 
      array (
        'code' => 'TR',
        'name' => 'تورا',
      ),
      72 => 
      array (
        'code' => 'TV',
        'name' => 'تفير',
      ),
      73 => 
      array (
        'code' => 'TY',
        'name' => 'تيومن',
      ),
      74 => 
      array (
        'code' => 'UF',
        'name' => 'أوفا',
      ),
      75 => 
      array (
        'code' => 'UL',
        'name' => 'ليانوفسك',
      ),
      76 => 
      array (
        'code' => 'UU',
        'name' => 'أولان اودي',
      ),
      77 => 
      array (
        'code' => 'US',
        'name' => 'اوست اودينسك',
      ),
      78 => 
      array (
        'code' => 'VL',
        'name' => 'فالديكاكاز',
      ),
      79 => 
      array (
        'code' => 'VA',
        'name' => 'فلاديمير',
      ),
      80 => 
      array (
        'code' => 'VV',
        'name' => 'فلاديفوستوك',
      ),
      81 => 
      array (
        'code' => 'VG',
        'name' => 'فولجوجراد',
      ),
      82 => 
      array (
        'code' => 'VD',
        'name' => 'فولجدا',
      ),
      83 => 
      array (
        'code' => 'VO',
        'name' => 'فورونيز',
      ),
      84 => 
      array (
        'code' => 'VY',
        'name' => 'فياتكا',
      ),
      85 => 
      array (
        'code' => 'YA',
        'name' => 'ياكوتسك',
      ),
      86 => 
      array (
        'code' => 'YR',
        'name' => 'ياروسلاف',
      ),
      87 => 
      array (
        'code' => 'YE',
        'name' => 'ياكاتيرينبرج',
      ),
      88 => 
      array (
        'code' => 'YO',
        'name' => 'يوشكار اولا',
      ),
    ),
    'RW' => 
    array (
      1 => 
      array (
        'code' => 'BU',
        'name' => 'بوتار',
      ),
      2 => 
      array (
        'code' => 'BY',
        'name' => 'بيومبا',
      ),
      3 => 
      array (
        'code' => 'CY',
        'name' => 'سيانجوجو',
      ),
      4 => 
      array (
        'code' => 'GK',
        'name' => 'جيكونجورو',
      ),
      5 => 
      array (
        'code' => 'GS',
        'name' => 'جيسيني',
      ),
      6 => 
      array (
        'code' => 'GT',
        'name' => 'جيتراما',
      ),
      7 => 
      array (
        'code' => 'KG',
        'name' => 'كيبونجو',
      ),
      8 => 
      array (
        'code' => 'KY',
        'name' => 'كيبوي',
      ),
      9 => 
      array (
        'code' => 'KR',
        'name' => 'كيجالي روالا',
      ),
      10 => 
      array (
        'code' => 'KV',
        'name' => 'فيلا كيجالي',
      ),
      11 => 
      array (
        'code' => 'RU',
        'name' => 'روهنجيري',
      ),
      12 => 
      array (
        'code' => 'UM',
        'name' => 'اوموتارا',
      ),
    ),
    'SA' => 
    array (
      1 => 
      array (
        'code' => 'BH',
        'name' => 'الباحة',
      ),
      2 => 
      array (
        'code' => 'HS',
        'name' => 'الهدهد الشمالية',
      ),
      3 => 
      array (
        'code' => 'JF',
        'name' => 'الجوف',
      ),
      4 => 
      array (
        'code' => 'MD',
        'name' => 'المدينة',
      ),
      5 => 
      array (
        'code' => 'QS',
        'name' => 'القسيم',
      ),
      6 => 
      array (
        'code' => 'RD',
        'name' => 'الرياض',
      ),
      7 => 
      array (
        'code' => 'AQ',
        'name' => 'الشرقية (شرقية)',
      ),
      8 => 
      array (
        'code' => 'AS',
        'name' => 'عسير',
      ),
      9 => 
      array (
        'code' => 'HL',
        'name' => 'حائل',
      ),
      10 => 
      array (
        'code' => 'JZ',
        'name' => 'جيزان',
      ),
      11 => 
      array (
        'code' => 'ML',
        'name' => 'مكة',
      ),
      12 => 
      array (
        'code' => 'NR',
        'name' => 'نجران',
      ),
      13 => 
      array (
        'code' => 'TB',
        'name' => 'تبوك',
      ),
    ),
    'SB' => 
    array (
      1 => 
      array (
        'code' => 'CE',
        'name' => 'سنترال',
      ),
      2 => 
      array (
        'code' => 'CH',
        'name' => 'شواسيل',
      ),
      3 => 
      array (
        'code' => 'GC',
        'name' => 'جوادالا كانال',
      ),
      4 => 
      array (
        'code' => 'HO',
        'name' => 'هونيارا',
      ),
      5 => 
      array (
        'code' => 'IS',
        'name' => 'ايزابيل',
      ),
      6 => 
      array (
        'code' => 'MK',
        'name' => 'ماكيرا',
      ),
      7 => 
      array (
        'code' => 'ML',
        'name' => 'ماليتا',
      ),
      8 => 
      array (
        'code' => 'RB',
        'name' => 'رينيل وبيلونا',
      ),
      9 => 
      array (
        'code' => 'TM',
        'name' => 'تيموتو',
      ),
      10 => 
      array (
        'code' => 'WE',
        'name' => 'الغربية',
      ),
    ),
    'SC' => 
    array (
      1 => 
      array (
        'code' => 'AP',
        'name' => 'انسي اوكس بينز',
      ),
      2 => 
      array (
        'code' => 'AB',
        'name' => 'انسي بوالو',
      ),
      3 => 
      array (
        'code' => 'AE',
        'name' => 'انسي ايتوال',
      ),
      4 => 
      array (
        'code' => 'AL',
        'name' => 'انسي لويس',
      ),
      5 => 
      array (
        'code' => 'AR',
        'name' => 'انسي رويال',
      ),
      6 => 
      array (
        'code' => 'BL',
        'name' => 'ساحل لازار',
      ),
      7 => 
      array (
        'code' => 'BS',
        'name' => 'ساحل سانت آنا',
      ),
      8 => 
      array (
        'code' => 'BV',
        'name' => 'بو فالون',
      ),
      9 => 
      array (
        'code' => 'BA',
        'name' => 'بيل اير',
      ),
      10 => 
      array (
        'code' => 'BO',
        'name' => 'بيل أومبر',
      ),
      11 => 
      array (
        'code' => 'CA',
        'name' => 'كاسكاد',
      ),
      12 => 
      array (
        'code' => 'GL',
        'name' => 'جلاسيس',
      ),
      13 => 
      array (
        'code' => 'GM',
        'name' => 'جراند انسي (ماهي)',
      ),
      14 => 
      array (
        'code' => 'GP',
        'name' => 'جراند انسي (براسلين)',
      ),
      15 => 
      array (
        'code' => 'DG',
        'name' => 'لا ديجو',
      ),
      16 => 
      array (
        'code' => 'RA',
        'name' => 'ريفيرا الإنجليزية',
      ),
      17 => 
      array (
        'code' => 'MB',
        'name' => 'مونت بكستون',
      ),
      18 => 
      array (
        'code' => 'MF',
        'name' => 'مونت فليري',
      ),
      19 => 
      array (
        'code' => 'PL',
        'name' => 'بلاسيناس',
      ),
      20 => 
      array (
        'code' => 'PR',
        'name' => 'بوينت لا روي',
      ),
      21 => 
      array (
        'code' => 'PG',
        'name' => 'بورت جلاود',
      ),
      22 => 
      array (
        'code' => 'SL',
        'name' => 'سانت لويس',
      ),
      23 => 
      array (
        'code' => 'TA',
        'name' => 'تاكاماسكا',
      ),
    ),
    'SD' => 
    array (
      1 => 
      array (
        'code' => 'ANL',
        'name' => 'على النيل',
      ),
      2 => 
      array (
        'code' => 'BAM',
        'name' => 'البحر الأحمر',
      ),
      3 => 
      array (
        'code' => 'BRT',
        'name' => 'البحيرة',
      ),
      4 => 
      array (
        'code' => 'JZR',
        'name' => 'الجزيرة',
      ),
      5 => 
      array (
        'code' => 'KRT',
        'name' => 'الخرطوم',
      ),
      6 => 
      array (
        'code' => 'QDR',
        'name' => 'الغضريف',
      ),
      7 => 
      array (
        'code' => 'WDH',
        'name' => 'الوحدة',
      ),
      8 => 
      array (
        'code' => 'ANB',
        'name' => 'النيل الأبيض',
      ),
      9 => 
      array (
        'code' => 'ANZ',
        'name' => 'النيل الأزرق',
      ),
      10 => 
      array (
        'code' => 'ASH',
        'name' => 'الشمالية',
      ),
      11 => 
      array (
        'code' => 'BJA',
        'name' => 'بحر الجبل',
      ),
      12 => 
      array (
        'code' => 'GIS',
        'name' => 'غرب الاستوائية',
      ),
      13 => 
      array (
        'code' => 'GBG',
        'name' => 'غرب بحر الغزال',
      ),
      14 => 
      array (
        'code' => 'GDA',
        'name' => 'غرب دارفور',
      ),
      15 => 
      array (
        'code' => 'GKU',
        'name' => 'غرب كردوفان',
      ),
      16 => 
      array (
        'code' => 'JDA',
        'name' => 'جنوب دارفور',
      ),
      17 => 
      array (
        'code' => 'JKU',
        'name' => 'جنوب كردوفان',
      ),
      18 => 
      array (
        'code' => 'JQL',
        'name' => 'جونجلي',
      ),
      19 => 
      array (
        'code' => 'KSL',
        'name' => 'كاسالا',
      ),
      20 => 
      array (
        'code' => 'NNL',
        'name' => 'نهر النيل',
      ),
      21 => 
      array (
        'code' => 'SBG',
        'name' => 'شمال بحر الغزال',
      ),
      22 => 
      array (
        'code' => 'SDA',
        'name' => 'شمال دارفور',
      ),
      23 => 
      array (
        'code' => 'SKU',
        'name' => 'شمال كوردفان',
      ),
      24 => 
      array (
        'code' => 'SIS',
        'name' => 'شرق الاستوائية',
      ),
      25 => 
      array (
        'code' => 'SNR',
        'name' => 'سينار',
      ),
      26 => 
      array (
        'code' => 'WRB',
        'name' => 'ورب',
      ),
    ),
    'SE' => 
    array (
      1 => 
      array (
        'code' => 'K',
        'name' => 'بليكينج',
      ),
      2 => 
      array (
        'code' => 'W',
        'name' => 'دالاما',
      ),
      3 => 
      array (
        'code' => 'I',
        'name' => 'جوتلاند',
      ),
      4 => 
      array (
        'code' => 'X',
        'name' => 'جافلبيرج',
      ),
      5 => 
      array (
        'code' => 'N',
        'name' => 'هالاند',
      ),
      6 => 
      array (
        'code' => 'Z',
        'name' => 'جامتلاند',
      ),
      7 => 
      array (
        'code' => 'F',
        'name' => 'جونكوبنج',
      ),
      8 => 
      array (
        'code' => 'H',
        'name' => 'كالمار',
      ),
      9 => 
      array (
        'code' => 'G',
        'name' => 'كرونوبيرج',
      ),
      10 => 
      array (
        'code' => 'BD',
        'name' => 'نوربوتين',
      ),
      11 => 
      array (
        'code' => 'M',
        'name' => 'سكان',
      ),
      12 => 
      array (
        'code' => 'AB',
        'name' => 'ستوكهولم',
      ),
      13 => 
      array (
        'code' => 'D',
        'name' => 'سوديرمان لاند',
      ),
      14 => 
      array (
        'code' => 'C',
        'name' => 'اوبسالا',
      ),
      15 => 
      array (
        'code' => 'S',
        'name' => 'فارملاند',
      ),
      16 => 
      array (
        'code' => 'AC',
        'name' => 'فاستيربوتين',
      ),
      17 => 
      array (
        'code' => 'Y',
        'name' => 'فاستيرنورلاند',
      ),
      18 => 
      array (
        'code' => 'U',
        'name' => 'فاستمانلاند',
      ),
      19 => 
      array (
        'code' => 'O',
        'name' => 'فاسترا جوتلاند',
      ),
      20 => 
      array (
        'code' => 'T',
        'name' => 'اوربرو',
      ),
      21 => 
      array (
        'code' => 'E',
        'name' => 'اوستيرجوتلاند',
      ),
    ),
    'SH' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'اسينسيون',
      ),
      2 => 
      array (
        'code' => 'S',
        'name' => 'سانت هيلينا',
      ),
      3 => 
      array (
        'code' => 'T',
        'name' => 'تريستان كونها',
      ),
    ),
    'SI' => 
    array (
      1 => 
      array (
        'code' => '4',
        'name' => 'ستاجيرسكا',
      ),
      2 => 
      array (
        'code' => '2A',
        'name' => 'جورينسكا',
      ),
      3 => 
      array (
        'code' => '5',
        'name' => 'بريمكاورجي',
      ),
      4 => 
      array (
        'code' => '3',
        'name' => 'كوروسكا',
      ),
      5 => 
      array (
        'code' => '2B',
        'name' => 'نوترانيسكا',
      ),
      6 => 
      array (
        'code' => '1',
        'name' => 'بريمورسكا',
      ),
      7 => 
      array (
        'code' => '2C',
        'name' => 'دولينسكا',
      ),
      8 => 
      array (
        'code' => '2C',
        'name' => 'بيلا كراجينا',
      ),
    ),
    'SK' => 
    array (
      1 => 
      array (
        'code' => 'BA',
        'name' => 'بانسكوبستريسكي',
      ),
      2 => 
      array (
        'code' => 'BR',
        'name' => 'براتيسلافسكي',
      ),
      3 => 
      array (
        'code' => 'KO',
        'name' => 'كوسيكي',
      ),
      4 => 
      array (
        'code' => 'NI',
        'name' => 'نيترنيسكي',
      ),
      5 => 
      array (
        'code' => 'PR',
        'name' => 'بريسكوفسكي',
      ),
      6 => 
      array (
        'code' => 'TC',
        'name' => 'تريانسيسكي',
      ),
      7 => 
      array (
        'code' => 'TV',
        'name' => 'ترنافسكي',
      ),
      8 => 
      array (
        'code' => 'ZI',
        'name' => 'زيلينسكي',
      ),
    ),
    'SL' => 
    array (
      1 => 
      array (
        'code' => 'E',
        'name' => 'إيسترن',
      ),
      2 => 
      array (
        'code' => 'N',
        'name' => 'الشمالية',
      ),
      3 => 
      array (
        'code' => 'S',
        'name' => 'الجنوبية',
      ),
      4 => 
      array (
        'code' => 'W',
        'name' => 'الغربية',
      ),
    ),
    'SM' => 
    array (
      1 => 
      array (
        'code' => 'AC',
        'name' => 'أكوافيفا',
      ),
      2 => 
      array (
        'code' => 'BM',
        'name' => 'بورجو ماجيوري',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'شيزونوفا',
      ),
      4 => 
      array (
        'code' => 'DO',
        'name' => 'دوماجنانو',
      ),
      5 => 
      array (
        'code' => 'FA',
        'name' => 'فايتانو',
      ),
      6 => 
      array (
        'code' => 'FI',
        'name' => 'فيورينتيو',
      ),
      7 => 
      array (
        'code' => 'MO',
        'name' => 'مونتيجياردينو',
      ),
      8 => 
      array (
        'code' => 'SM',
        'name' => 'مدينة سان مارينو',
      ),
      9 => 
      array (
        'code' => 'SE',
        'name' => 'سيرافال',
      ),
    ),
    'SN' => 
    array (
      1 => 
      array (
        'code' => 'DA',
        'name' => 'داكار',
      ),
      2 => 
      array (
        'code' => 'DI',
        'name' => 'ديوربيل',
      ),
      3 => 
      array (
        'code' => 'FA',
        'name' => 'فاتيك',
      ),
      4 => 
      array (
        'code' => 'KA',
        'name' => 'كاولاك',
      ),
      5 => 
      array (
        'code' => 'KO',
        'name' => 'كولدا',
      ),
      6 => 
      array (
        'code' => 'LO',
        'name' => 'لوجا',
      ),
      7 => 
      array (
        'code' => 'MA',
        'name' => 'ماتام',
      ),
      8 => 
      array (
        'code' => 'SL',
        'name' => 'سانت لويس',
      ),
      9 => 
      array (
        'code' => 'TA',
        'name' => 'تامباكوندا',
      ),
      10 => 
      array (
        'code' => 'TH',
        'name' => 'ثيس',
      ),
      11 => 
      array (
        'code' => 'ZI',
        'name' => 'زيجوكور',
      ),
    ),
    'SO' => 
    array (
      1 => 
      array (
        'code' => 'AW',
        'name' => 'أودال',
      ),
      2 => 
      array (
        'code' => 'BK',
        'name' => 'باقول',
      ),
      3 => 
      array (
        'code' => 'BN',
        'name' => 'بانادير',
      ),
      4 => 
      array (
        'code' => 'BR',
        'name' => 'باري',
      ),
      5 => 
      array (
        'code' => 'BY',
        'name' => 'BAY',
      ),
      6 => 
      array (
        'code' => 'GA',
        'name' => 'جالجودود',
      ),
      7 => 
      array (
        'code' => 'GE',
        'name' => 'جيدو',
      ),
      8 => 
      array (
        'code' => 'HI',
        'name' => 'حيران',
      ),
      9 => 
      array (
        'code' => 'JD',
        'name' => 'جوبادا هيكس',
      ),
      10 => 
      array (
        'code' => 'JH',
        'name' => 'جوبادا هوز',
      ),
      11 => 
      array (
        'code' => 'MU',
        'name' => 'مودوج',
      ),
      12 => 
      array (
        'code' => 'NU',
        'name' => 'نوجال',
      ),
      13 => 
      array (
        'code' => 'SA',
        'name' => 'ساناج',
      ),
      14 => 
      array (
        'code' => 'SD',
        'name' => 'شابيلا ديكس',
      ),
      15 => 
      array (
        'code' => 'SH',
        'name' => 'شابيلا هوز',
      ),
      16 => 
      array (
        'code' => 'SL',
        'name' => 'سوول',
      ),
      17 => 
      array (
        'code' => 'TO',
        'name' => 'توجدهير',
      ),
      18 => 
      array (
        'code' => 'WG',
        'name' => 'ووكي جالدبيد',
      ),
    ),
    'SR' => 
    array (
      1 => 
      array (
        'code' => 'BR',
        'name' => 'بروكوبوند',
      ),
      2 => 
      array (
        'code' => 'CM',
        'name' => 'كومووينجي',
      ),
      3 => 
      array (
        'code' => 'CR',
        'name' => 'كوروني',
      ),
      4 => 
      array (
        'code' => 'MA',
        'name' => 'ماروينجي',
      ),
      5 => 
      array (
        'code' => 'NI',
        'name' => 'نيكيري',
      ),
      6 => 
      array (
        'code' => 'PA',
        'name' => 'بارا',
      ),
      7 => 
      array (
        'code' => 'PM',
        'name' => 'باراماريبو',
      ),
      9 => 
      array (
        'code' => 'SA',
        'name' => 'ساراماكا',
      ),
      10 => 
      array (
        'code' => 'SI',
        'name' => 'سيباليويني',
      ),
      11 => 
      array (
        'code' => 'WA',
        'name' => 'ونيكا',
      ),
    ),
    'ST' => 
    array (
      1 => 
      array (
        'code' => 'S',
        'name' => 'ساو توم',
      ),
      2 => 
      array (
        'code' => 'P',
        'name' => 'برينسيب',
      ),
    ),
    'SV' => 
    array (
      1 => 
      array (
        'code' => 'AH',
        'name' => 'قهوة شعبان',
      ),
      2 => 
      array (
        'code' => 'CA',
        'name' => 'كابانس',
      ),
      3 => 
      array (
        'code' => 'CH',
        'name' => 'شلاتينانجو',
      ),
      4 => 
      array (
        'code' => 'CU',
        'name' => 'كوسكاتلان',
      ),
      5 => 
      array (
        'code' => 'LB',
        'name' => 'ليبراتيد',
      ),
      6 => 
      array (
        'code' => 'PZ',
        'name' => 'لاباز',
      ),
      7 => 
      array (
        'code' => 'UN',
        'name' => 'لا يونيون',
      ),
      8 => 
      array (
        'code' => 'MO',
        'name' => 'مورازان',
      ),
      9 => 
      array (
        'code' => 'SM',
        'name' => 'سان ميجيل',
      ),
      10 => 
      array (
        'code' => 'SS',
        'name' => 'سان سلفادور',
      ),
      11 => 
      array (
        'code' => 'SV',
        'name' => 'سان فيسينتي',
      ),
      12 => 
      array (
        'code' => 'SA',
        'name' => 'سانتا آنا',
      ),
      13 => 
      array (
        'code' => 'SO',
        'name' => 'سونسوناتي',
      ),
      14 => 
      array (
        'code' => 'US',
        'name' => 'السلطان',
      ),
    ),
    'SY' => 
    array (
      1 => 
      array (
        'code' => 'HA',
        'name' => 'الحساكة',
      ),
      2 => 
      array (
        'code' => 'LA',
        'name' => 'اللاذقية',
      ),
      3 => 
      array (
        'code' => 'QU',
        'name' => 'القنيطرة',
      ),
      4 => 
      array (
        'code' => 'RQ',
        'name' => 'الرقة',
      ),
      5 => 
      array (
        'code' => 'SU',
        'name' => 'السويدة',
      ),
      6 => 
      array (
        'code' => 'DA',
        'name' => 'دارا',
      ),
      7 => 
      array (
        'code' => 'DZ',
        'name' => 'دير زوير',
      ),
      8 => 
      array (
        'code' => 'DI',
        'name' => 'دمشق',
      ),
      9 => 
      array (
        'code' => 'HL',
        'name' => 'حلب',
      ),
      10 => 
      array (
        'code' => 'HM',
        'name' => 'حماة',
      ),
      11 => 
      array (
        'code' => 'HI',
        'name' => 'حمص',
      ),
      12 => 
      array (
        'code' => 'ID',
        'name' => 'ادليب',
      ),
      13 => 
      array (
        'code' => 'RD',
        'name' => 'ريف دمشق',
      ),
      14 => 
      array (
        'code' => 'TA',
        'name' => 'طرطوس',
      ),
    ),
    'SZ' => 
    array (
      1 => 
      array (
        'code' => 'H',
        'name' => 'هوهوو',
      ),
      2 => 
      array (
        'code' => 'L',
        'name' => 'لومبوبو',
      ),
      3 => 
      array (
        'code' => 'M',
        'name' => 'مانزيني',
      ),
      4 => 
      array (
        'code' => 'S',
        'name' => 'شيشيليوني',
      ),
    ),
    'TC' => 
    array (
      1 => 
      array (
        'code' => 'AC',
        'name' => 'امبيرجيس كايس',
      ),
      2 => 
      array (
        'code' => 'DC',
        'name' => 'ديليس ساي',
      ),
      3 => 
      array (
        'code' => 'FC',
        'name' => 'فارنش كاي',
      ),
      4 => 
      array (
        'code' => 'LW',
        'name' => 'ليتل ووتر كاي',
      ),
      5 => 
      array (
        'code' => 'RC',
        'name' => 'باروت كاي',
      ),
      6 => 
      array (
        'code' => 'PN',
        'name' => 'بين كاي',
      ),
      7 => 
      array (
        'code' => 'SL',
        'name' => 'سالت كاي',
      ),
      8 => 
      array (
        'code' => 'GT',
        'name' => 'جراند ترك',
      ),
      9 => 
      array (
        'code' => 'SC',
        'name' => 'كايكوس الجنوبية',
      ),
      10 => 
      array (
        'code' => 'EC',
        'name' => 'كايكوس الشرقية',
      ),
      11 => 
      array (
        'code' => 'MC',
        'name' => 'كايكويس الوسطى',
      ),
      12 => 
      array (
        'code' => 'NC',
        'name' => 'كايكوس الشمالية',
      ),
      13 => 
      array (
        'code' => 'PR',
        'name' => 'الإمارات',
      ),
      14 => 
      array (
        'code' => 'WC',
        'name' => 'كايكوس الغربية',
      ),
    ),
    'TD' => 
    array (
      1 => 
      array (
        'code' => 'BA',
        'name' => 'باثا',
      ),
      2 => 
      array (
        'code' => 'BI',
        'name' => 'بيلتين',
      ),
      3 => 
      array (
        'code' => 'BE',
        'name' => 'بوركو إينيدي تيبيستي',
      ),
      4 => 
      array (
        'code' => 'CB',
        'name' => 'شاري باجيرمي',
      ),
      5 => 
      array (
        'code' => 'GU',
        'name' => 'جويرا',
      ),
      6 => 
      array (
        'code' => 'KA',
        'name' => 'كانم',
      ),
      7 => 
      array (
        'code' => 'LA',
        'name' => 'لاك',
      ),
      8 => 
      array (
        'code' => 'LC',
        'name' => 'لوجون أوكسيدنتال',
      ),
      9 => 
      array (
        'code' => 'LR',
        'name' => 'لوجون أورينتال',
      ),
      10 => 
      array (
        'code' => 'MK',
        'name' => 'مايو كيبي',
      ),
      11 => 
      array (
        'code' => 'MC',
        'name' => 'مويون شاري',
      ),
      12 => 
      array (
        'code' => 'OU',
        'name' => 'أودداي',
      ),
      13 => 
      array (
        'code' => 'SA',
        'name' => 'سالامات',
      ),
      14 => 
      array (
        'code' => 'TA',
        'name' => 'تاندجيلي',
      ),
    ),
    'TF' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => 'إيليس كروزيت',
      ),
      2 => 
      array (
        'code' => 'K',
        'name' => 'إيليس كيرجولين',
      ),
      3 => 
      array (
        'code' => 'A',
        'name' => 'إيل أمستردام',
      ),
      4 => 
      array (
        'code' => 'P',
        'name' => 'إيلي سانت بول',
      ),
      5 => 
      array (
        'code' => 'D',
        'name' => 'أديلي لاند',
      ),
    ),
    'TG' => 
    array (
      1 => 
      array (
        'code' => 'K',
        'name' => 'كارا',
      ),
      2 => 
      array (
        'code' => 'P',
        'name' => 'بلاتوكس',
      ),
      3 => 
      array (
        'code' => 'S',
        'name' => 'سافانيس',
      ),
      4 => 
      array (
        'code' => 'C',
        'name' => 'أوسط',
      ),
      5 => 
      array (
        'code' => 'M',
        'name' => 'ماريتايم',
      ),
    ),
    'TH' => 
    array (
      1 => 
      array (
        'code' => 'Amnat Charoen',
        'name' => 'أمنات شاروين',
      ),
      2 => 
      array (
        'code' => 'Ang Thong',
        'name' => 'أنج سونج',
      ),
      3 => 
      array (
        'code' => 'Ayutthaya',
        'name' => 'أيوثايا',
      ),
      4 => 
      array (
        'code' => 'Bangkok',
        'name' => 'بانكوك',
      ),
      5 => 
      array (
        'code' => 'Buriram',
        'name' => 'بيرويام',
      ),
      6 => 
      array (
        'code' => 'Chachoengsao',
        'name' => 'شاشونجساو',
      ),
      7 => 
      array (
        'code' => 'Chai Nat',
        'name' => 'شاي نات',
      ),
      8 => 
      array (
        'code' => 'Chaiyaphum',
        'name' => 'شايافوم',
      ),
      9 => 
      array (
        'code' => 'Chanthaburi',
        'name' => 'شانسوبوري',
      ),
      10 => 
      array (
        'code' => 'Chiang Mai',
        'name' => 'شيانج ماي',
      ),
      11 => 
      array (
        'code' => 'Chiang Rai',
        'name' => 'شيانج راي',
      ),
      12 => 
      array (
        'code' => 'Chon Buri',
        'name' => 'شون بوري',
      ),
      13 => 
      array (
        'code' => 'Chumphon',
        'name' => 'شومفون',
      ),
      14 => 
      array (
        'code' => 'Kalasin',
        'name' => 'كالاسين',
      ),
      15 => 
      array (
        'code' => 'Kamphaeng Phet',
        'name' => 'كامفينج فيت',
      ),
      16 => 
      array (
        'code' => 'Kanchanaburi',
        'name' => 'كانشانبوري',
      ),
      17 => 
      array (
        'code' => 'Khon Kaen',
        'name' => 'خون كين',
      ),
      18 => 
      array (
        'code' => 'Krabi',
        'name' => 'كرابي',
      ),
      19 => 
      array (
        'code' => 'Lampang',
        'name' => 'لامبانج',
      ),
      20 => 
      array (
        'code' => 'Lamphun',
        'name' => 'لامفن',
      ),
      21 => 
      array (
        'code' => 'Loei',
        'name' => 'لوي',
      ),
      22 => 
      array (
        'code' => 'Lop Buri',
        'name' => 'لوب بوري',
      ),
      23 => 
      array (
        'code' => 'Mae Hong Son',
        'name' => 'ماي هونج صن',
      ),
      24 => 
      array (
        'code' => 'Maha Sarakham',
        'name' => 'ماها ساراخام',
      ),
      25 => 
      array (
        'code' => 'Mukdahan',
        'name' => 'موكدهان',
      ),
      26 => 
      array (
        'code' => 'Nakhon Nayok',
        'name' => 'ناخون نايوك',
      ),
      27 => 
      array (
        'code' => 'Nakhon Pathom',
        'name' => 'ناخون باثوم',
      ),
      28 => 
      array (
        'code' => 'Nakhon Phanom',
        'name' => 'ناخون فانوم',
      ),
      29 => 
      array (
        'code' => 'Nakhon Ratchasima',
        'name' => 'ناخون راتزيما',
      ),
      30 => 
      array (
        'code' => 'Nakhon Sawan',
        'name' => 'ناخون ساوان',
      ),
      31 => 
      array (
        'code' => 'Nakhon Si Thammarat',
        'name' => 'ناخون سي ثامارت',
      ),
      32 => 
      array (
        'code' => 'Nan',
        'name' => 'نان',
      ),
      33 => 
      array (
        'code' => 'Narathiwat',
        'name' => 'ناراثيوات',
      ),
      34 => 
      array (
        'code' => 'Nong Bua Lamphu',
        'name' => 'نونج بو لامفو',
      ),
      35 => 
      array (
        'code' => 'Nong Khai',
        'name' => 'نونج خي',
      ),
      36 => 
      array (
        'code' => 'Nonthaburi',
        'name' => 'نون ثابوري',
      ),
      37 => 
      array (
        'code' => 'Pathum Thani',
        'name' => 'باثوم ثاني',
      ),
      38 => 
      array (
        'code' => 'Pattani',
        'name' => 'باتاني',
      ),
      39 => 
      array (
        'code' => 'Phangnga',
        'name' => 'فانجنجا',
      ),
      40 => 
      array (
        'code' => 'Phatthalung',
        'name' => 'فاثالونج',
      ),
      41 => 
      array (
        'code' => 'Phayao',
        'name' => 'فايو',
      ),
      42 => 
      array (
        'code' => 'Phetchabun',
        'name' => 'فيتشابون',
      ),
      43 => 
      array (
        'code' => 'Phetchaburi',
        'name' => 'فيتشابوري',
      ),
      44 => 
      array (
        'code' => 'Phichit',
        'name' => 'فيشيت',
      ),
      45 => 
      array (
        'code' => 'Phitsanulok',
        'name' => 'فيتسانولوك',
      ),
      46 => 
      array (
        'code' => 'Phrae',
        'name' => 'فراي',
      ),
      47 => 
      array (
        'code' => 'Phuket',
        'name' => 'فوكيت',
      ),
      48 => 
      array (
        'code' => 'Prachin Buri',
        'name' => 'براشين بوري',
      ),
      49 => 
      array (
        'code' => 'Prachuap Khiri Khan',
        'name' => 'براشوب خيري خان',
      ),
      50 => 
      array (
        'code' => 'Ranong',
        'name' => 'رانونج',
      ),
      51 => 
      array (
        'code' => 'Ratchaburi',
        'name' => 'راتشيبوري',
      ),
      52 => 
      array (
        'code' => 'Rayong',
        'name' => 'رايونج',
      ),
      53 => 
      array (
        'code' => 'Roi Et',
        'name' => 'روا ايت',
      ),
      54 => 
      array (
        'code' => 'Sa Kaeo',
        'name' => 'سا كايو',
      ),
      55 => 
      array (
        'code' => 'Sakon Nakhon',
        'name' => 'ساكون ناخون',
      ),
      56 => 
      array (
        'code' => 'Samut Prakan',
        'name' => 'ساموت براكان',
      ),
      57 => 
      array (
        'code' => 'Samut Sakhon',
        'name' => 'ساموت ساخون',
      ),
      58 => 
      array (
        'code' => 'Samut Songkhram',
        'name' => 'ساموت سونجخرام',
      ),
      59 => 
      array (
        'code' => 'Sara Buri',
        'name' => 'سارا بوري',
      ),
      60 => 
      array (
        'code' => 'Satun',
        'name' => 'ساتون',
      ),
      61 => 
      array (
        'code' => 'Sing Buri',
        'name' => 'سينج بوري',
      ),
      62 => 
      array (
        'code' => 'Sisaket',
        'name' => 'سيساكيت',
      ),
      63 => 
      array (
        'code' => 'Songkhla',
        'name' => 'سونجخلا',
      ),
      64 => 
      array (
        'code' => 'Sukhothai',
        'name' => 'سوخوثاي',
      ),
      65 => 
      array (
        'code' => 'Suphan Buri',
        'name' => 'سوفان بوري',
      ),
      66 => 
      array (
        'code' => 'Surat Thani',
        'name' => 'سوراتثاني',
      ),
      67 => 
      array (
        'code' => 'Surin',
        'name' => 'سورين',
      ),
      68 => 
      array (
        'code' => 'Tak',
        'name' => 'تاك',
      ),
      69 => 
      array (
        'code' => 'Trang',
        'name' => 'ترانج',
      ),
      70 => 
      array (
        'code' => 'Trat',
        'name' => 'ترات',
      ),
      71 => 
      array (
        'code' => 'Ubon Ratchathani',
        'name' => 'ابون راتشاثاني',
      ),
      72 => 
      array (
        'code' => 'Udon Thani',
        'name' => 'أودون ثاني',
      ),
      73 => 
      array (
        'code' => 'Uthai Thani',
        'name' => 'اوثاي ثاني',
      ),
      74 => 
      array (
        'code' => 'Uttaradit',
        'name' => 'اوتراديت',
      ),
      75 => 
      array (
        'code' => 'Yala',
        'name' => 'يالا',
      ),
      76 => 
      array (
        'code' => 'Yasothon',
        'name' => 'ياسوثون',
      ),
    ),
    'TJ' => 
    array (
      1 => 
      array (
        'code' => 'GB',
        'name' => 'جورنو باداخستان',
      ),
      2 => 
      array (
        'code' => 'KT',
        'name' => 'خاتلون',
      ),
      3 => 
      array (
        'code' => 'SU',
        'name' => 'سوغد',
      ),
    ),
    'TK' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'اتافو',
      ),
      2 => 
      array (
        'code' => 'F',
        'name' => 'فاكافو',
      ),
      3 => 
      array (
        'code' => 'N',
        'name' => 'نوكونونو',
      ),
    ),
    'TM' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'ولاية أهل',
      ),
      2 => 
      array (
        'code' => 'B',
        'name' => 'ولاية البلقان',
      ),
      3 => 
      array (
        'code' => 'D',
        'name' => 'ولاية داشهواز',
      ),
      4 => 
      array (
        'code' => 'L',
        'name' => 'ولاية ليباب',
      ),
      5 => 
      array (
        'code' => 'M',
        'name' => 'ولاية ماري',
      ),
    ),
    'TN' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'اريانا',
      ),
      2 => 
      array (
        'code' => 'BJ',
        'name' => 'بيجا',
      ),
      3 => 
      array (
        'code' => 'BA',
        'name' => 'بين اروس',
      ),
      4 => 
      array (
        'code' => 'BI',
        'name' => 'بيزرت',
      ),
      5 => 
      array (
        'code' => 'GB',
        'name' => 'جابس',
      ),
      6 => 
      array (
        'code' => 'GF',
        'name' => 'جفسة',
      ),
      7 => 
      array (
        'code' => 'JE',
        'name' => 'جيندوبا',
      ),
      8 => 
      array (
        'code' => 'KR',
        'name' => 'قيروان',
      ),
      9 => 
      array (
        'code' => 'KS',
        'name' => 'كثيرين',
      ),
      10 => 
      array (
        'code' => 'KB',
        'name' => 'كيبيلي',
      ),
      11 => 
      array (
        'code' => 'KF',
        'name' => 'كيف',
      ),
      12 => 
      array (
        'code' => 'MH',
        'name' => 'مهدية',
      ),
      13 => 
      array (
        'code' => 'MN',
        'name' => 'مانوبا',
      ),
      14 => 
      array (
        'code' => 'ME',
        'name' => 'ميديني',
      ),
      15 => 
      array (
        'code' => 'MO',
        'name' => 'موناستير',
      ),
      16 => 
      array (
        'code' => 'NA',
        'name' => 'نابيول',
      ),
      17 => 
      array (
        'code' => 'SF',
        'name' => 'صفاقس',
      ),
      18 => 
      array (
        'code' => 'SD',
        'name' => 'سيدي',
      ),
      19 => 
      array (
        'code' => 'SL',
        'name' => 'سيليانا',
      ),
      20 => 
      array (
        'code' => 'SO',
        'name' => 'سوسة',
      ),
      21 => 
      array (
        'code' => 'TA',
        'name' => 'تاتوين',
      ),
      22 => 
      array (
        'code' => 'TO',
        'name' => 'توزير',
      ),
      23 => 
      array (
        'code' => 'TU',
        'name' => 'تونس',
      ),
      24 => 
      array (
        'code' => 'ZA',
        'name' => 'زاغوان',
      ),
    ),
    'TO' => 
    array (
      1 => 
      array (
        'code' => 'H',
        'name' => 'ها اباي',
      ),
      2 => 
      array (
        'code' => 'T',
        'name' => 'تونجاتابو',
      ),
      3 => 
      array (
        'code' => 'V',
        'name' => 'فافو',
      ),
    ),
    'TP' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'إيليو',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'إينارو',
      ),
      3 => 
      array (
        'code' => 'BA',
        'name' => 'بوكاو',
      ),
      4 => 
      array (
        'code' => 'BO',
        'name' => 'بوبونارو',
      ),
      5 => 
      array (
        'code' => 'CO',
        'name' => 'كوفا ليما',
      ),
      6 => 
      array (
        'code' => 'DI',
        'name' => 'ديلي',
      ),
      7 => 
      array (
        'code' => 'ER',
        'name' => 'إيرميرا',
      ),
      8 => 
      array (
        'code' => 'LA',
        'name' => 'لوتيم',
      ),
      9 => 
      array (
        'code' => 'LI',
        'name' => 'ليكويكا',
      ),
      10 => 
      array (
        'code' => 'MT',
        'name' => 'ماناتوتو',
      ),
      11 => 
      array (
        'code' => 'MF',
        'name' => 'مانوفاهي',
      ),
      12 => 
      array (
        'code' => 'OE',
        'name' => 'أويكوسي',
      ),
      13 => 
      array (
        'code' => 'VI',
        'name' => 'فيكيكي',
      ),
    ),
    'TR' => 
    array (
      1 => 
      array (
        'code' => 'ADA',
        'name' => 'أدانه',
      ),
      2 => 
      array (
        'code' => 'ADI',
        'name' => 'الديامان',
      ),
      3 => 
      array (
        'code' => 'AFY',
        'name' => 'افيونكاراهيسار',
      ),
      4 => 
      array (
        'code' => 'AGR',
        'name' => 'اجري',
      ),
      5 => 
      array (
        'code' => 'AKS',
        'name' => 'اكساراي',
      ),
      6 => 
      array (
        'code' => 'AMA',
        'name' => 'اماسيا',
      ),
      7 => 
      array (
        'code' => 'ANK',
        'name' => 'أنقرة',
      ),
      8 => 
      array (
        'code' => 'ANT',
        'name' => 'أنطاليا',
      ),
      9 => 
      array (
        'code' => 'ARD',
        'name' => 'أردهان',
      ),
      10 => 
      array (
        'code' => 'ART',
        'name' => 'ارتفين',
      ),
      11 => 
      array (
        'code' => 'AYI',
        'name' => 'ايدين',
      ),
      12 => 
      array (
        'code' => 'BAL',
        'name' => 'باليكثير',
      ),
      13 => 
      array (
        'code' => 'BAR',
        'name' => 'بارتين',
      ),
      14 => 
      array (
        'code' => 'BAT',
        'name' => 'باتمان',
      ),
      15 => 
      array (
        'code' => 'BAY',
        'name' => 'بايبورت',
      ),
      16 => 
      array (
        'code' => 'BIL',
        'name' => 'بيلسيك',
      ),
      17 => 
      array (
        'code' => 'BIN',
        'name' => 'بينجول',
      ),
      18 => 
      array (
        'code' => 'BIT',
        'name' => 'يتليس',
      ),
      19 => 
      array (
        'code' => 'BOL',
        'name' => 'بولو',
      ),
      20 => 
      array (
        'code' => 'BRD',
        'name' => 'بوردور',
      ),
      21 => 
      array (
        'code' => 'BRS',
        'name' => 'بورصا',
      ),
      22 => 
      array (
        'code' => 'CKL',
        'name' => 'كاناكال',
      ),
      23 => 
      array (
        'code' => 'CKR',
        'name' => 'كانكيري',
      ),
      24 => 
      array (
        'code' => 'COR',
        'name' => 'كورم',
      ),
      25 => 
      array (
        'code' => 'DEN',
        'name' => 'دينزيلي',
      ),
      26 => 
      array (
        'code' => 'DIY',
        'name' => 'دياربكر',
      ),
      27 => 
      array (
        'code' => 'DUZ',
        'name' => 'دوزي',
      ),
      28 => 
      array (
        'code' => 'EDI',
        'name' => 'ايديرن',
      ),
      29 => 
      array (
        'code' => 'ELA',
        'name' => 'ايلازيج',
      ),
      30 => 
      array (
        'code' => 'EZC',
        'name' => 'ايرزينكان',
      ),
      31 => 
      array (
        'code' => 'EZR',
        'name' => 'ايرزروم',
      ),
      32 => 
      array (
        'code' => 'ESK',
        'name' => 'ايسكيسهير',
      ),
      33 => 
      array (
        'code' => 'GAZ',
        'name' => 'جازينتيب',
      ),
      34 => 
      array (
        'code' => 'GIR',
        'name' => 'جيريسن',
      ),
      35 => 
      array (
        'code' => 'GMS',
        'name' => 'جوموشان',
      ),
      36 => 
      array (
        'code' => 'HKR',
        'name' => 'هاكاري',
      ),
      37 => 
      array (
        'code' => 'HTY',
        'name' => 'هاتاي',
      ),
      38 => 
      array (
        'code' => 'IGD',
        'name' => 'ايجدير',
      ),
      39 => 
      array (
        'code' => 'ISP',
        'name' => 'إسبارطة',
      ),
      40 => 
      array (
        'code' => 'IST',
        'name' => 'إستانبول',
      ),
      41 => 
      array (
        'code' => 'IZM',
        'name' => 'ازمير',
      ),
      42 => 
      array (
        'code' => 'KAH',
        'name' => 'كهرمانماراس',
      ),
      43 => 
      array (
        'code' => 'KRB',
        'name' => 'كاربوك',
      ),
      44 => 
      array (
        'code' => 'KRM',
        'name' => 'كارامان',
      ),
      45 => 
      array (
        'code' => 'KRS',
        'name' => 'كارس',
      ),
      46 => 
      array (
        'code' => 'KAS',
        'name' => 'كاستامونو',
      ),
      47 => 
      array (
        'code' => 'KAY',
        'name' => 'كايسيري',
      ),
      48 => 
      array (
        'code' => 'KLS',
        'name' => 'كيليس',
      ),
      49 => 
      array (
        'code' => 'KRK',
        'name' => 'كيريكال',
      ),
      50 => 
      array (
        'code' => 'KLR',
        'name' => 'كيركاليري',
      ),
      51 => 
      array (
        'code' => 'KRH',
        'name' => 'كيرسهير',
      ),
      52 => 
      array (
        'code' => 'KOC',
        'name' => 'كوكايلي',
      ),
      53 => 
      array (
        'code' => 'KON',
        'name' => 'كونيا',
      ),
      54 => 
      array (
        'code' => 'KUT',
        'name' => 'كوتاهيا',
      ),
      55 => 
      array (
        'code' => 'MAL',
        'name' => 'مالاتيا',
      ),
      56 => 
      array (
        'code' => 'MAN',
        'name' => 'مانيسا',
      ),
      57 => 
      array (
        'code' => 'MAR',
        'name' => 'ماردين',
      ),
      58 => 
      array (
        'code' => 'MER',
        'name' => 'ميرسين',
      ),
      59 => 
      array (
        'code' => 'MUG',
        'name' => 'موجلا',
      ),
      60 => 
      array (
        'code' => 'MUS',
        'name' => 'MUS',
      ),
      61 => 
      array (
        'code' => 'NEV',
        'name' => 'نيفسهير',
      ),
      62 => 
      array (
        'code' => 'NIG',
        'name' => 'نيجدا',
      ),
      63 => 
      array (
        'code' => 'ORD',
        'name' => 'اوردو',
      ),
      64 => 
      array (
        'code' => 'OSM',
        'name' => 'عثماني',
      ),
      65 => 
      array (
        'code' => 'RIZ',
        'name' => 'ريز',
      ),
      66 => 
      array (
        'code' => 'SAK',
        'name' => 'ساكاريا',
      ),
      67 => 
      array (
        'code' => 'SAM',
        'name' => 'سامسون',
      ),
      68 => 
      array (
        'code' => 'SAN',
        'name' => 'سانليورفا',
      ),
      69 => 
      array (
        'code' => 'SII',
        'name' => 'سيرت',
      ),
      70 => 
      array (
        'code' => 'SIN',
        'name' => 'سينوب',
      ),
      71 => 
      array (
        'code' => 'SIR',
        'name' => 'سيرناك',
      ),
      72 => 
      array (
        'code' => 'SIV',
        'name' => 'سيفاس',
      ),
      73 => 
      array (
        'code' => 'TEL',
        'name' => 'تيكرداج',
      ),
      74 => 
      array (
        'code' => 'TOK',
        'name' => 'توكات',
      ),
      75 => 
      array (
        'code' => 'TRA',
        'name' => 'طرابزون',
      ),
      76 => 
      array (
        'code' => 'TUN',
        'name' => 'تونسيلي',
      ),
      77 => 
      array (
        'code' => 'USK',
        'name' => 'اوساك',
      ),
      78 => 
      array (
        'code' => 'VAN',
        'name' => 'فان',
      ),
      79 => 
      array (
        'code' => 'YAL',
        'name' => 'يالوفا',
      ),
      80 => 
      array (
        'code' => 'YOZ',
        'name' => 'يوزجات',
      ),
      81 => 
      array (
        'code' => 'ZON',
        'name' => 'زونجولداك',
      ),
    ),
    'TT' => 
    array (
      1 => 
      array (
        'code' => 'CT',
        'name' => 'كوفا/تاباكيت/تالبارو',
      ),
      2 => 
      array (
        'code' => 'DM',
        'name' => 'دييجو مارتين',
      ),
      3 => 
      array (
        'code' => 'MR',
        'name' => 'مايارو/ريو كلارو',
      ),
      4 => 
      array (
        'code' => 'PD',
        'name' => 'بينال/ديبي',
      ),
      5 => 
      array (
        'code' => 'PT',
        'name' => 'مدينة الأمراء',
      ),
      6 => 
      array (
        'code' => 'SG',
        'name' => 'سانجري جراند',
      ),
      7 => 
      array (
        'code' => 'SL',
        'name' => 'سان خوان/لافينتيل',
      ),
      8 => 
      array (
        'code' => 'SI',
        'name' => 'سيباريا',
      ),
      9 => 
      array (
        'code' => 'TP',
        'name' => 'تونابونا/بياكرو',
      ),
      10 => 
      array (
        'code' => 'PS',
        'name' => 'ميناء إسبانيا',
      ),
      11 => 
      array (
        'code' => 'SF',
        'name' => 'سان فيرناندو',
      ),
      12 => 
      array (
        'code' => 'AR',
        'name' => 'ارما',
      ),
      13 => 
      array (
        'code' => 'PF',
        'name' => 'بوينت فورتين',
      ),
      14 => 
      array (
        'code' => 'CH',
        'name' => 'شاجوناس',
      ),
      15 => 
      array (
        'code' => 'TO',
        'name' => 'توباجو',
      ),
    ),
    'TV' => 
    array (
      1 => 
      array (
        'code' => 'NMG',
        'name' => 'نانومانجا',
      ),
      2 => 
      array (
        'code' => 'NLK',
        'name' => 'نيولاكيتا',
      ),
      3 => 
      array (
        'code' => 'NTO',
        'name' => 'نيتاو',
      ),
      4 => 
      array (
        'code' => 'FUN',
        'name' => 'فونافوتي',
      ),
      5 => 
      array (
        'code' => 'NME',
        'name' => 'نانوميا',
      ),
      6 => 
      array (
        'code' => 'NUI',
        'name' => 'NUI',
      ),
      7 => 
      array (
        'code' => 'NFT',
        'name' => 'نوكوفيتتو',
      ),
      8 => 
      array (
        'code' => 'NLL',
        'name' => 'نوكوليالي',
      ),
      9 => 
      array (
        'code' => 'VAI',
        'name' => 'فايتوبو',
      ),
    ),
    'TW' => 
    array (
      1 => 
      array (
        'code' => 'CH',
        'name' => 'شانج هوا',
      ),
      2 => 
      array (
        'code' => 'CI',
        'name' => 'شيا اي',
      ),
      3 => 
      array (
        'code' => 'HS',
        'name' => 'حسين شو',
      ),
      4 => 
      array (
        'code' => 'HL',
        'name' => 'هوا لين',
      ),
      5 => 
      array (
        'code' => 'IL',
        'name' => 'ايان',
      ),
      6 => 
      array (
        'code' => 'KH',
        'name' => 'كاو هسونج كونتي',
      ),
      7 => 
      array (
        'code' => 'KM',
        'name' => 'كين مين',
      ),
      8 => 
      array (
        'code' => 'LC',
        'name' => 'لين شيانج',
      ),
      9 => 
      array (
        'code' => 'ML',
        'name' => 'مياو لي',
      ),
      10 => 
      array (
        'code' => 'Nt',
        'name' => 'نان تو',
      ),
      11 => 
      array (
        'code' => 'PH',
        'name' => 'بيانج هو',
      ),
      12 => 
      array (
        'code' => 'PT',
        'name' => 'بيانج تونج',
      ),
      13 => 
      array (
        'code' => 'TG',
        'name' => 'تاي شونج',
      ),
      14 => 
      array (
        'code' => 'TA',
        'name' => 'تاي نان',
      ),
      15 => 
      array (
        'code' => 'TP',
        'name' => 'تاي بي كونتي',
      ),
      16 => 
      array (
        'code' => 'TT',
        'name' => 'تاي تونج',
      ),
      17 => 
      array (
        'code' => 'TY',
        'name' => 'تاو يوان',
      ),
      18 => 
      array (
        'code' => 'YL',
        'name' => 'يون لين',
      ),
      19 => 
      array (
        'code' => 'CC',
        'name' => 'مدينة شيا اي',
      ),
      20 => 
      array (
        'code' => 'Cl',
        'name' => 'شي لونج',
      ),
      21 => 
      array (
        'code' => 'HC',
        'name' => 'حسين شو',
      ),
      22 => 
      array (
        'code' => 'TH',
        'name' => 'تاي شونج',
      ),
      23 => 
      array (
        'code' => 'TN',
        'name' => 'تاي نان',
      ),
      24 => 
      array (
        'code' => 'KC',
        'name' => 'كاو سيونج',
      ),
      25 => 
      array (
        'code' => 'TC',
        'name' => 'مدينة تاي بي',
      ),
    ),
    'TZ' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'اروشا',
      ),
      2 => 
      array (
        'code' => 'DS',
        'name' => 'دار السلام',
      ),
      3 => 
      array (
        'code' => 'DO',
        'name' => 'دودوما',
      ),
      4 => 
      array (
        'code' => 'IR',
        'name' => 'ايرينجا',
      ),
      5 => 
      array (
        'code' => 'KA',
        'name' => 'كاجيرا',
      ),
      6 => 
      array (
        'code' => 'KI',
        'name' => 'كيجوما',
      ),
      7 => 
      array (
        'code' => 'KJ',
        'name' => 'كيليمنجارو',
      ),
      8 => 
      array (
        'code' => 'LN',
        'name' => 'ليندي',
      ),
      9 => 
      array (
        'code' => 'MY',
        'name' => 'مانيارا',
      ),
      10 => 
      array (
        'code' => 'MR',
        'name' => 'مارا',
      ),
      11 => 
      array (
        'code' => 'MB',
        'name' => 'مبيا',
      ),
      12 => 
      array (
        'code' => 'MO',
        'name' => 'موروجورو',
      ),
      13 => 
      array (
        'code' => 'MT',
        'name' => 'متوارا',
      ),
      14 => 
      array (
        'code' => 'MW',
        'name' => 'موانزا',
      ),
      15 => 
      array (
        'code' => 'PN',
        'name' => 'شمال بيمبا',
      ),
      16 => 
      array (
        'code' => 'PS',
        'name' => 'جنوب بيمبا',
      ),
      17 => 
      array (
        'code' => 'PW',
        'name' => 'بواني',
      ),
      18 => 
      array (
        'code' => 'RK',
        'name' => 'روكوا',
      ),
      19 => 
      array (
        'code' => 'RV',
        'name' => 'روفوما',
      ),
      20 => 
      array (
        'code' => 'SH',
        'name' => 'شينيانجا',
      ),
      21 => 
      array (
        'code' => 'SI',
        'name' => 'سينجيدا',
      ),
      22 => 
      array (
        'code' => 'TB',
        'name' => 'تابورا',
      ),
      23 => 
      array (
        'code' => 'TN',
        'name' => 'تانجا',
      ),
      24 => 
      array (
        'code' => 'ZC',
        'name' => 'زينزبار الوسطى/الجنوبية',
      ),
      25 => 
      array (
        'code' => 'ZN',
        'name' => 'شمال زنزبار',
      ),
      26 => 
      array (
        'code' => 'ZU',
        'name' => 'حضر زنزبار/الغرب',
      ),
    ),
    'UA' => 
    array (
      1 => 
      array (
        'code' => 'CK',
        'name' => 'شيركاسي',
      ),
      2 => 
      array (
        'code' => 'CH',
        'name' => 'شيرنهيف',
      ),
      3 => 
      array (
        'code' => 'CV',
        'name' => 'شرينفيتس',
      ),
      4 => 
      array (
        'code' => 'CR',
        'name' => 'كريما',
      ),
      5 => 
      array (
        'code' => 'DN',
        'name' => 'نيبروبيتروفسك',
      ),
      6 => 
      array (
        'code' => 'DO',
        'name' => 'دونيتستك',
      ),
      7 => 
      array (
        'code' => 'IV',
        'name' => 'ايفانو فارنكيفسك',
      ),
      8 => 
      array (
        'code' => 'KL',
        'name' => 'خاركيف خيروسون',
      ),
      9 => 
      array (
        'code' => 'KM',
        'name' => 'خميلنيتسكي',
      ),
      10 => 
      array (
        'code' => 'KR',
        'name' => 'كيروفوراد',
      ),
      11 => 
      array (
        'code' => 'KV',
        'name' => 'كييف',
      ),
      12 => 
      array (
        'code' => 'KY',
        'name' => 'كييف',
      ),
      13 => 
      array (
        'code' => 'LU',
        'name' => 'لوهانسك',
      ),
      14 => 
      array (
        'code' => 'LV',
        'name' => 'افيف',
      ),
      15 => 
      array (
        'code' => 'MY',
        'name' => 'مايكولايف',
      ),
      16 => 
      array (
        'code' => 'OD',
        'name' => 'أوديسا',
      ),
      17 => 
      array (
        'code' => 'PO',
        'name' => 'بولتافا',
      ),
      18 => 
      array (
        'code' => 'RI',
        'name' => 'ريفن',
      ),
      19 => 
      array (
        'code' => 'SE',
        'name' => 'سيفاستوبول',
      ),
      20 => 
      array (
        'code' => 'SU',
        'name' => 'سومي',
      ),
      21 => 
      array (
        'code' => 'TE',
        'name' => 'تيرنوبل',
      ),
      22 => 
      array (
        'code' => 'VI',
        'name' => 'فينيتسيا',
      ),
      23 => 
      array (
        'code' => 'VO',
        'name' => 'فولين',
      ),
      24 => 
      array (
        'code' => 'ZK',
        'name' => 'زاكرباطيا',
      ),
      25 => 
      array (
        'code' => 'ZA',
        'name' => 'زابوريزيزيا',
      ),
      26 => 
      array (
        'code' => 'ZH',
        'name' => 'زيتومي',
      ),
    ),
    'UG' => 
    array (
      1 => 
      array (
        'code' => 'KAL',
        'name' => 'كالانجالا',
      ),
      2 => 
      array (
        'code' => 'KMP',
        'name' => 'كامبالا',
      ),
      3 => 
      array (
        'code' => 'KAY',
        'name' => 'كايونجا',
      ),
      4 => 
      array (
        'code' => 'KIB',
        'name' => 'كيبوجا',
      ),
      5 => 
      array (
        'code' => 'LUW',
        'name' => 'لويرو',
      ),
      6 => 
      array (
        'code' => 'MAS',
        'name' => 'ماساكا',
      ),
      7 => 
      array (
        'code' => 'MPI',
        'name' => 'مبيجي',
      ),
      8 => 
      array (
        'code' => 'MUB',
        'name' => 'موبيندي',
      ),
      9 => 
      array (
        'code' => 'MUK',
        'name' => 'موكونو',
      ),
      10 => 
      array (
        'code' => 'NKS',
        'name' => 'ناكاسونجولا',
      ),
      11 => 
      array (
        'code' => 'RAK',
        'name' => 'راكاي',
      ),
      12 => 
      array (
        'code' => 'SEM',
        'name' => 'سيمبابولي',
      ),
      13 => 
      array (
        'code' => 'WAK',
        'name' => 'واكيسو',
      ),
      14 => 
      array (
        'code' => 'BUG',
        'name' => 'بوجيري',
      ),
      15 => 
      array (
        'code' => 'BUS',
        'name' => 'بوسيا',
      ),
      16 => 
      array (
        'code' => 'IGA',
        'name' => 'ايدانجا',
      ),
      17 => 
      array (
        'code' => 'JIN',
        'name' => 'جينجا',
      ),
      18 => 
      array (
        'code' => 'KAB',
        'name' => 'كبيرامايدو',
      ),
      19 => 
      array (
        'code' => 'KML',
        'name' => 'كامولي',
      ),
      20 => 
      array (
        'code' => 'KPC',
        'name' => 'كابشرورا',
      ),
      21 => 
      array (
        'code' => 'KTK',
        'name' => 'كاتاكوي',
      ),
      22 => 
      array (
        'code' => 'KUM',
        'name' => 'كومي',
      ),
      23 => 
      array (
        'code' => 'MAY',
        'name' => 'مايوجو',
      ),
      24 => 
      array (
        'code' => 'MBA',
        'name' => 'مبالا',
      ),
      25 => 
      array (
        'code' => 'PAL',
        'name' => 'باليسا',
      ),
      26 => 
      array (
        'code' => 'SIR',
        'name' => 'سيرونكو',
      ),
      27 => 
      array (
        'code' => 'SOR',
        'name' => 'سوروتي',
      ),
      28 => 
      array (
        'code' => 'TOR',
        'name' => 'تورور',
      ),
      29 => 
      array (
        'code' => 'ADJ',
        'name' => 'ادجوماني',
      ),
      30 => 
      array (
        'code' => 'APC',
        'name' => 'اباك',
      ),
      31 => 
      array (
        'code' => 'ARU',
        'name' => 'اروا',
      ),
      32 => 
      array (
        'code' => 'GUL',
        'name' => 'جولو',
      ),
      33 => 
      array (
        'code' => 'KIT',
        'name' => 'كيتجم',
      ),
      34 => 
      array (
        'code' => 'KOT',
        'name' => 'كوتيدو',
      ),
      35 => 
      array (
        'code' => 'LIR',
        'name' => 'ليرا',
      ),
      36 => 
      array (
        'code' => 'MRT',
        'name' => 'موروتو',
      ),
      37 => 
      array (
        'code' => 'MOY',
        'name' => 'مويو',
      ),
      38 => 
      array (
        'code' => 'NAK',
        'name' => 'ناكابيربيريت',
      ),
      39 => 
      array (
        'code' => 'NEB',
        'name' => 'نيبي',
      ),
      40 => 
      array (
        'code' => 'PAD',
        'name' => 'بادير',
      ),
      41 => 
      array (
        'code' => 'YUM',
        'name' => 'يومبي',
      ),
      42 => 
      array (
        'code' => 'BUN',
        'name' => 'بونديبوجيو',
      ),
      43 => 
      array (
        'code' => 'BSH',
        'name' => 'بوشيني',
      ),
      44 => 
      array (
        'code' => 'HOI',
        'name' => 'هويما',
      ),
      45 => 
      array (
        'code' => 'KBL',
        'name' => 'كبالالي',
      ),
      46 => 
      array (
        'code' => 'KAR',
        'name' => 'كابارول',
      ),
      47 => 
      array (
        'code' => 'KAM',
        'name' => 'كاموينجي',
      ),
      48 => 
      array (
        'code' => 'KAN',
        'name' => 'كانونجو',
      ),
      49 => 
      array (
        'code' => 'KAS',
        'name' => 'كاسيسي',
      ),
      50 => 
      array (
        'code' => 'KBA',
        'name' => 'كيبالي',
      ),
      51 => 
      array (
        'code' => 'KIS',
        'name' => 'كيسورو',
      ),
      52 => 
      array (
        'code' => 'KYE',
        'name' => 'كينيجوجو',
      ),
      53 => 
      array (
        'code' => 'MSN',
        'name' => 'ماسيندي',
      ),
      54 => 
      array (
        'code' => 'MBR',
        'name' => 'مبارارا',
      ),
      55 => 
      array (
        'code' => 'NTU',
        'name' => 'نوتنجامو',
      ),
      56 => 
      array (
        'code' => 'RUK',
        'name' => 'روكونجيري',
      ),
    ),
    'UM' => 
    array (
      1 => 
      array (
        'code' => 'BI',
        'name' => 'جزيرة بيكر',
      ),
      2 => 
      array (
        'code' => 'HI',
        'name' => 'جزيرة هولاند',
      ),
      3 => 
      array (
        'code' => 'JI',
        'name' => 'جزيرة جارفيس',
      ),
      4 => 
      array (
        'code' => 'JA',
        'name' => 'جونستون أتول',
      ),
      5 => 
      array (
        'code' => 'KR',
        'name' => 'كينجمان ريف',
      ),
      6 => 
      array (
        'code' => 'MA',
        'name' => 'ميدواي أتول',
      ),
      7 => 
      array (
        'code' => 'NI',
        'name' => 'جزيرة نافاسا',
      ),
      8 => 
      array (
        'code' => 'PA',
        'name' => 'بالميرا أتول',
      ),
      9 => 
      array (
        'code' => 'WI',
        'name' => 'جزيرة ويك',
      ),
    ),
    'US' => 
    array (
      1 => 
      array (
        'code' => 'AL',
        'name' => 'ألاباما',
      ),
      2 => 
      array (
        'code' => 'AK',
        'name' => 'ألاسكا',
      ),
      3 => 
      array (
        'code' => 'AS',
        'name' => 'ساموا الأمريكية',
      ),
      4 => 
      array (
        'code' => 'AZ',
        'name' => 'أريزونا',
      ),
      5 => 
      array (
        'code' => 'AR',
        'name' => 'أركنساس',
      ),
      6 => 
      array (
        'code' => 'AF',
        'name' => 'القوات المسلحة أفريقيا',
      ),
      7 => 
      array (
        'code' => 'AA',
        'name' => 'القوات المسلحة الأمريكتان',
      ),
      8 => 
      array (
        'code' => 'AC',
        'name' => 'القوات المسلحة كندا',
      ),
      9 => 
      array (
        'code' => 'AE',
        'name' => 'القوات المسلحة أوروبا',
      ),
      10 => 
      array (
        'code' => 'AM',
        'name' => 'القوات المسلحة الشرق الأوسط',
      ),
      11 => 
      array (
        'code' => 'AP',
        'name' => 'القوات المسلحة المحيط الهادي',
      ),
      12 => 
      array (
        'code' => 'CA',
        'name' => 'كاليفورنيا',
      ),
      13 => 
      array (
        'code' => 'CO',
        'name' => 'كولورادو',
      ),
      14 => 
      array (
        'code' => 'CT',
        'name' => 'كونيكتيكيت',
      ),
      15 => 
      array (
        'code' => 'DE',
        'name' => 'ديلاور',
      ),
      16 => 
      array (
        'code' => 'DC',
        'name' => 'إقليم كولومبيا',
      ),
      17 => 
      array (
        'code' => 'FM',
        'name' => 'ولايات ميكرونيزيا الفيدرالية',
      ),
      18 => 
      array (
        'code' => 'FL',
        'name' => 'فلوريدا',
      ),
      19 => 
      array (
        'code' => 'GA',
        'name' => 'جورجيا',
      ),
      20 => 
      array (
        'code' => 'GU',
        'name' => 'جوام',
      ),
      21 => 
      array (
        'code' => 'HI',
        'name' => 'هاواي',
      ),
      22 => 
      array (
        'code' => 'ID',
        'name' => 'إيداهو',
      ),
      23 => 
      array (
        'code' => 'IL',
        'name' => 'إلينوي',
      ),
      24 => 
      array (
        'code' => 'IN',
        'name' => 'إنديانا',
      ),
      25 => 
      array (
        'code' => 'IA',
        'name' => 'لوا',
      ),
      26 => 
      array (
        'code' => 'KS',
        'name' => 'كانساس',
      ),
      27 => 
      array (
        'code' => 'KY',
        'name' => 'كنتاكي',
      ),
      28 => 
      array (
        'code' => 'LA',
        'name' => 'لويزيانا',
      ),
      29 => 
      array (
        'code' => 'ME',
        'name' => 'ماين',
      ),
      30 => 
      array (
        'code' => 'MH',
        'name' => 'جزر المارشال',
      ),
      31 => 
      array (
        'code' => 'MD',
        'name' => 'ماريلاند',
      ),
      32 => 
      array (
        'code' => 'MA',
        'name' => 'ماساشوسيتس',
      ),
      33 => 
      array (
        'code' => 'MI',
        'name' => 'ميتشجان',
      ),
      34 => 
      array (
        'code' => 'MN',
        'name' => 'مينوسوتا',
      ),
      35 => 
      array (
        'code' => 'MS',
        'name' => 'ميسيسيبي',
      ),
      36 => 
      array (
        'code' => 'MO',
        'name' => 'ميسوري',
      ),
      37 => 
      array (
        'code' => 'MT',
        'name' => 'مونتانا',
      ),
      38 => 
      array (
        'code' => 'NE',
        'name' => 'نبراسكا',
      ),
      39 => 
      array (
        'code' => 'NV',
        'name' => 'نيفادا',
      ),
      40 => 
      array (
        'code' => 'NH',
        'name' => 'نيوهامبشير',
      ),
      41 => 
      array (
        'code' => 'NJ',
        'name' => 'نيوجيرسي',
      ),
      42 => 
      array (
        'code' => 'NM',
        'name' => 'نيوميكسيكو',
      ),
      43 => 
      array (
        'code' => 'NY',
        'name' => 'نيويورك',
      ),
      44 => 
      array (
        'code' => 'NC',
        'name' => 'كارولينا الشمالية',
      ),
      45 => 
      array (
        'code' => 'ND',
        'name' => 'داكوتا الشمالية',
      ),
      46 => 
      array (
        'code' => 'MP',
        'name' => 'جزر ماريانا الشمالية',
      ),
      47 => 
      array (
        'code' => 'OH',
        'name' => 'أوهايو',
      ),
      48 => 
      array (
        'code' => 'OK',
        'name' => 'أوكلاهوما',
      ),
      49 => 
      array (
        'code' => 'OR',
        'name' => 'أوريجون',
      ),
      50 => 
      array (
        'code' => 'PW',
        'name' => 'بالاو',
      ),
      51 => 
      array (
        'code' => 'PA',
        'name' => 'بنسلفانيا',
      ),
      52 => 
      array (
        'code' => 'PR',
        'name' => 'بورتوريكو',
      ),
      53 => 
      array (
        'code' => 'RI',
        'name' => 'رود آيلاند',
      ),
      54 => 
      array (
        'code' => 'SC',
        'name' => 'كارولينا الجنوبية',
      ),
      55 => 
      array (
        'code' => 'SD',
        'name' => 'داكوتا الجنوبية',
      ),
      56 => 
      array (
        'code' => 'TN',
        'name' => 'تينيسي',
      ),
      57 => 
      array (
        'code' => 'TX',
        'name' => 'تكساس',
      ),
      58 => 
      array (
        'code' => 'UT',
        'name' => 'يوتا',
      ),
      59 => 
      array (
        'code' => 'VT',
        'name' => 'فيرمونت',
      ),
      60 => 
      array (
        'code' => 'VI',
        'name' => 'جزر فيرجين',
      ),
      61 => 
      array (
        'code' => 'VA',
        'name' => 'فيرجينيا',
      ),
      62 => 
      array (
        'code' => 'WA',
        'name' => 'واشنطن',
      ),
      63 => 
      array (
        'code' => 'WV',
        'name' => 'فيرجينيا الغربية',
      ),
      64 => 
      array (
        'code' => 'WI',
        'name' => 'ويسكونسين',
      ),
      65 => 
      array (
        'code' => 'WY',
        'name' => 'وايومينج',
      ),
    ),
    'UY' => 
    array (
      1 => 
      array (
        'code' => 'AR',
        'name' => 'أرتيجاس',
      ),
      2 => 
      array (
        'code' => 'CA',
        'name' => 'كانيلونز',
      ),
      3 => 
      array (
        'code' => 'Cl',
        'name' => 'سيرو لارجو',
      ),
      4 => 
      array (
        'code' => 'CO',
        'name' => 'كولونيا',
      ),
      5 => 
      array (
        'code' => 'DU',
        'name' => 'دورازنو',
      ),
      6 => 
      array (
        'code' => 'FS',
        'name' => 'فلوريس',
      ),
      7 => 
      array (
        'code' => 'FA',
        'name' => 'فلوريدا',
      ),
      8 => 
      array (
        'code' => 'LA',
        'name' => 'لافاليجا',
      ),
      9 => 
      array (
        'code' => 'MA',
        'name' => 'مالدونادو',
      ),
      10 => 
      array (
        'code' => 'MO',
        'name' => 'مونتيفيديو',
      ),
      11 => 
      array (
        'code' => 'PA',
        'name' => 'بايساندو',
      ),
      12 => 
      array (
        'code' => 'RN',
        'name' => 'ريو نيجرو',
      ),
      13 => 
      array (
        'code' => 'RV',
        'name' => 'ريفيرا',
      ),
      14 => 
      array (
        'code' => 'RO',
        'name' => 'روشا',
      ),
      15 => 
      array (
        'code' => 'SL',
        'name' => 'سالتو',
      ),
      16 => 
      array (
        'code' => 'SJ',
        'name' => 'سان جوسيه',
      ),
      17 => 
      array (
        'code' => 'SO',
        'name' => 'سوريانو',
      ),
      18 => 
      array (
        'code' => 'TA',
        'name' => 'تاكواريمبو',
      ),
      19 => 
      array (
        'code' => 'TT',
        'name' => 'ترنتاتريس',
      ),
    ),
    'UZ' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'أنديجون',
      ),
      2 => 
      array (
        'code' => 'BU',
        'name' => 'بوكسورو',
      ),
      3 => 
      array (
        'code' => 'FA',
        'name' => 'فارجونا',
      ),
      4 => 
      array (
        'code' => 'JI',
        'name' => 'جيزاكس',
      ),
      5 => 
      array (
        'code' => 'NG',
        'name' => 'نامانجان',
      ),
      6 => 
      array (
        'code' => 'NW',
        'name' => 'نافوي',
      ),
      7 => 
      array (
        'code' => 'QA',
        'name' => 'قاشقاداريو',
      ),
      8 => 
      array (
        'code' => 'QR',
        'name' => 'كوراكالبجستون ريبابليكاسي',
      ),
      9 => 
      array (
        'code' => 'SA',
        'name' => 'سمرقند',
      ),
      10 => 
      array (
        'code' => 'SI',
        'name' => 'سيرداريو',
      ),
      11 => 
      array (
        'code' => 'SU',
        'name' => 'سوركسوندريو',
      ),
      12 => 
      array (
        'code' => 'TK',
        'name' => 'مدينة طشقند',
      ),
      13 => 
      array (
        'code' => 'TO',
        'name' => 'إقليم طشقند',
      ),
      14 => 
      array (
        'code' => 'XO',
        'name' => 'اكسورازم',
      ),
    ),
    'VC' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => 'شارلوت',
      ),
      2 => 
      array (
        'code' => 'R',
        'name' => 'جرينادينز',
      ),
      3 => 
      array (
        'code' => 'A',
        'name' => 'سانت آندرو',
      ),
      4 => 
      array (
        'code' => 'D',
        'name' => 'سانت دافيد',
      ),
      5 => 
      array (
        'code' => 'G',
        'name' => 'سانت جورج',
      ),
      6 => 
      array (
        'code' => 'P',
        'name' => 'سانت باتريك',
      ),
    ),
    'VE' => 
    array (
      1 => 
      array (
        'code' => 'AM',
        'name' => 'أمازوناس',
      ),
      2 => 
      array (
        'code' => 'AN',
        'name' => 'أنزواتيجوي',
      ),
      3 => 
      array (
        'code' => 'AP',
        'name' => 'أبيور',
      ),
      4 => 
      array (
        'code' => 'AR',
        'name' => 'أراجوا',
      ),
      5 => 
      array (
        'code' => 'BA',
        'name' => 'باريناس',
      ),
      6 => 
      array (
        'code' => 'BO',
        'name' => 'بوليفار',
      ),
      7 => 
      array (
        'code' => 'CA',
        'name' => 'كارابوبو',
      ),
      8 => 
      array (
        'code' => 'CO',
        'name' => 'كوجيديس',
      ),
      9 => 
      array (
        'code' => 'DA',
        'name' => 'دلتا أماكيورو',
      ),
      10 => 
      array (
        'code' => 'DF',
        'name' => 'الفيدراليات المستقلة',
      ),
      11 => 
      array (
        'code' => 'DI',
        'name' => 'مقاطعات فيدرالية',
      ),
      12 => 
      array (
        'code' => 'FA',
        'name' => 'فالكون',
      ),
      13 => 
      array (
        'code' => 'GU',
        'name' => 'جواريكو',
      ),
      14 => 
      array (
        'code' => 'LA',
        'name' => 'لارا',
      ),
      15 => 
      array (
        'code' => 'ME',
        'name' => 'ميريدا',
      ),
      16 => 
      array (
        'code' => 'MI',
        'name' => 'ميراندا',
      ),
      17 => 
      array (
        'code' => 'MO',
        'name' => 'موناجاس',
      ),
      18 => 
      array (
        'code' => 'NE',
        'name' => 'نوفا إسبارطة',
      ),
      19 => 
      array (
        'code' => 'PO',
        'name' => 'بورتوجيزا',
      ),
      20 => 
      array (
        'code' => 'SU',
        'name' => 'سوكري',
      ),
      21 => 
      array (
        'code' => 'TA',
        'name' => 'تاشيرا',
      ),
      22 => 
      array (
        'code' => 'TR',
        'name' => 'تروجيلو',
      ),
      23 => 
      array (
        'code' => 'VA',
        'name' => 'فارجاس',
      ),
      24 => 
      array (
        'code' => 'YA',
        'name' => 'ياراكوي',
      ),
      25 => 
      array (
        'code' => 'ZU',
        'name' => 'زوليا',
      ),
    ),
    'VI' => 
    array (
      1 => 
      array (
        'code' => 'C',
        'name' => 'سانت كرواكس',
      ),
      2 => 
      array (
        'code' => 'J',
        'name' => 'سانت جون',
      ),
      3 => 
      array (
        'code' => 'T',
        'name' => 'سانت توماس',
      ),
    ),
    'VN' => 
    array (
      1 => 
      array (
        'code' => 'AG',
        'name' => 'آن جيانج',
      ),
      2 => 
      array (
        'code' => 'BG',
        'name' => 'باك جيانج',
      ),
      3 => 
      array (
        'code' => 'BK',
        'name' => 'باك كان',
      ),
      4 => 
      array (
        'code' => 'BL',
        'name' => 'باك ليو',
      ),
      5 => 
      array (
        'code' => 'BC',
        'name' => 'باك نينا',
      ),
      6 => 
      array (
        'code' => 'BR',
        'name' => 'با ريا فونج تاو',
      ),
      7 => 
      array (
        'code' => 'BN',
        'name' => 'بين تري',
      ),
      8 => 
      array (
        'code' => 'BH',
        'name' => 'بنه دنه',
      ),
      9 => 
      array (
        'code' => 'BU',
        'name' => 'بنه دونج',
      ),
      10 => 
      array (
        'code' => 'BP',
        'name' => 'بنه فوك',
      ),
      11 => 
      array (
        'code' => 'BT',
        'name' => 'بنه ثوان',
      ),
      12 => 
      array (
        'code' => 'CM',
        'name' => 'كا ماو',
      ),
      13 => 
      array (
        'code' => 'CT',
        'name' => 'كان ثو',
      ),
      14 => 
      array (
        'code' => 'CB',
        'name' => 'كاو بانج',
      ),
      15 => 
      array (
        'code' => 'DL',
        'name' => 'داك لاك',
      ),
      16 => 
      array (
        'code' => 'DG',
        'name' => 'داك نونج',
      ),
      17 => 
      array (
        'code' => 'DN',
        'name' => 'دا نانج',
      ),
      18 => 
      array (
        'code' => 'DB',
        'name' => 'دين بن',
      ),
      19 => 
      array (
        'code' => 'DI',
        'name' => 'دونج ناي',
      ),
      20 => 
      array (
        'code' => 'DT',
        'name' => 'دونج ثاب',
      ),
      21 => 
      array (
        'code' => 'GL',
        'name' => 'جيا لاي',
      ),
      22 => 
      array (
        'code' => 'HG',
        'name' => 'ها جيانج',
      ),
      23 => 
      array (
        'code' => 'HD',
        'name' => 'هاي دونج',
      ),
      24 => 
      array (
        'code' => 'HP',
        'name' => 'هاي فونج',
      ),
      25 => 
      array (
        'code' => 'HM',
        'name' => 'ها نام',
      ),
      26 => 
      array (
        'code' => 'HI',
        'name' => 'هاي نوا',
      ),
      27 => 
      array (
        'code' => 'HT',
        'name' => 'ها تاي',
      ),
      28 => 
      array (
        'code' => 'HH',
        'name' => 'ها تينه',
      ),
      29 => 
      array (
        'code' => 'HB',
        'name' => 'هوا بنه',
      ),
      30 => 
      array (
        'code' => 'HC',
        'name' => 'هو شن منه',
      ),
      31 => 
      array (
        'code' => 'HU',
        'name' => 'هاو جيانج',
      ),
      32 => 
      array (
        'code' => 'HY',
        'name' => 'هونج ين',
      ),
    ),
    'VU' => 
    array (
      1 => 
      array (
        'code' => 'MA',
        'name' => 'مالابا',
      ),
      2 => 
      array (
        'code' => 'PE',
        'name' => 'بيناما',
      ),
      3 => 
      array (
        'code' => 'SA',
        'name' => 'سانما',
      ),
      4 => 
      array (
        'code' => 'SH',
        'name' => 'شيفا',
      ),
      5 => 
      array (
        'code' => 'TA',
        'name' => 'تافي',
      ),
      6 => 
      array (
        'code' => 'TO',
        'name' => 'توربا',
      ),
    ),
    'WF' => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'ألو',
      ),
      2 => 
      array (
        'code' => 'S',
        'name' => 'سيجاف',
      ),
      3 => 
      array (
        'code' => 'W',
        'name' => 'واليز',
      ),
    ),
    'WS' => 
    array (
      1 => 
      array (
        'code' => 'AN',
        'name' => 'آنا',
      ),
      2 => 
      array (
        'code' => 'AI',
        'name' => 'ايجا لي تاي',
      ),
      3 => 
      array (
        'code' => 'AT',
        'name' => 'أتوا',
      ),
      4 => 
      array (
        'code' => 'FA',
        'name' => 'فاسليلجا',
      ),
      5 => 
      array (
        'code' => 'GE',
        'name' => 'جاجاايموجا',
      ),
      6 => 
      array (
        'code' => 'GF',
        'name' => 'جاجيفوموجا',
      ),
      7 => 
      array (
        'code' => 'PA',
        'name' => 'بالولي',
      ),
      8 => 
      array (
        'code' => 'SA',
        'name' => 'ساتوبايتي',
      ),
      9 => 
      array (
        'code' => 'TU',
        'name' => 'تواماساجا',
      ),
      10 => 
      array (
        'code' => 'VF',
        'name' => 'فا فونوتي',
      ),
      11 => 
      array (
        'code' => 'VS',
        'name' => 'فايسيجانو',
      ),
    ),
    'YE' => 
    array (
      1 => 
      array (
        'code' => 'AB',
        'name' => 'أبيان',
      ),
      2 => 
      array (
        'code' => 'AD',
        'name' => 'عدن',
      ),
      3 => 
      array (
        'code' => 'AM',
        'name' => 'عمران',
      ),
      4 => 
      array (
        'code' => 'BA',
        'name' => 'البيدا',
      ),
      5 => 
      array (
        'code' => 'DA',
        'name' => 'الدالي',
      ),
      6 => 
      array (
        'code' => 'DH',
        'name' => 'دهمار',
      ),
      7 => 
      array (
        'code' => 'HD',
        'name' => 'حضرموت',
      ),
      8 => 
      array (
        'code' => 'HJ',
        'name' => 'حجة',
      ),
      9 => 
      array (
        'code' => 'HU',
        'name' => 'الحُديدة',
      ),
      10 => 
      array (
        'code' => 'IB',
        'name' => 'إب',
      ),
      11 => 
      array (
        'code' => 'JA',
        'name' => 'الجوف',
      ),
      12 => 
      array (
        'code' => 'LA',
        'name' => 'لحاج',
      ),
      13 => 
      array (
        'code' => 'MA',
        'name' => 'معرب',
      ),
      14 => 
      array (
        'code' => 'MR',
        'name' => 'المهرة',
      ),
      15 => 
      array (
        'code' => 'MW',
        'name' => 'المهوت',
      ),
      16 => 
      array (
        'code' => 'SD',
        'name' => 'صعدة',
      ),
      17 => 
      array (
        'code' => 'SN',
        'name' => 'صنعاء',
      ),
      18 => 
      array (
        'code' => 'SH',
        'name' => 'شابواه',
      ),
      19 => 
      array (
        'code' => 'TA',
        'name' => 'تعز',
      ),
    ),
    'YT' => 
    array (
      1 => 
      array (
        'code' => 'DZA',
        'name' => 'دزاوادزي',
      ),
      2 => 
      array (
        'code' => 'PAM',
        'name' => 'باماندزي',
      ),
      3 => 
      array (
        'code' => 'MAM',
        'name' => 'ماماودزو',
      ),
      4 => 
      array (
        'code' => 'DEM',
        'name' => 'ديمبيني',
      ),
      5 => 
      array (
        'code' => 'BAN',
        'name' => 'بانديريل',
      ),
      6 => 
      array (
        'code' => 'KAN',
        'name' => 'كاني كيلي',
      ),
      7 => 
      array (
        'code' => 'BOU',
        'name' => 'بويني',
      ),
      8 => 
      array (
        'code' => 'CHI',
        'name' => 'شيرونجي',
      ),
      9 => 
      array (
        'code' => 'SAD',
        'name' => 'سادا',
      ),
      10 => 
      array (
        'code' => 'OUA',
        'name' => 'أوانجاني',
      ),
      11 => 
      array (
        'code' => 'CHI',
        'name' => 'شيكوني',
      ),
      12 => 
      array (
        'code' => 'TSI',
        'name' => 'سينجوني',
      ),
      13 => 
      array (
        'code' => 'MTS',
        'name' => 'تسانجامونجي',
      ),
      14 => 
      array (
        'code' => 'ACO',
        'name' => 'أكوا',
      ),
      15 => 
      array (
        'code' => 'MTS',
        'name' => 'متسامبورو',
      ),
      16 => 
      array (
        'code' => 'BAN',
        'name' => 'باندارابوا',
      ),
      17 => 
      array (
        'code' => 'KOU',
        'name' => 'كونجو',
      ),
    ),
    'YU' => 
    array (
      1 => 
      array (
        'code' => 'KOS',
        'name' => 'كوسوفو',
      ),
      2 => 
      array (
        'code' => 'MON',
        'name' => 'مونتينجرو',
      ),
      3 => 
      array (
        'code' => 'SER',
        'name' => 'صربيا',
      ),
      4 => 
      array (
        'code' => 'VOJ',
        'name' => 'فوفودينا',
      ),
    ),
    'ZA' => 
    array (
      1 => 
      array (
        'code' => 'EC',
        'name' => 'إيسترن كاب',
      ),
      2 => 
      array (
        'code' => 'FS',
        'name' => 'ولاية حرة',
      ),
      3 => 
      array (
        'code' => 'GT',
        'name' => 'جوتنج',
      ),
      4 => 
      array (
        'code' => 'KN',
        'name' => 'وازولو ناتل',
      ),
      5 => 
      array (
        'code' => 'LP',
        'name' => 'ليمبوبو',
      ),
      6 => 
      array (
        'code' => 'MP',
        'name' => 'مبومالانج',
      ),
      7 => 
      array (
        'code' => 'NW',
        'name' => 'الشمال الغربي',
      ),
      8 => 
      array (
        'code' => 'NC',
        'name' => 'كاب الشمالية',
      ),
      9 => 
      array (
        'code' => 'WC',
        'name' => 'كاب الغربية',
      ),
    ),
    'ZM' => 
    array (
      1 => 
      array (
        'code' => 'CE',
        'name' => 'سنترال',
      ),
      2 => 
      array (
        'code' => 'CB',
        'name' => 'كوبربيلت',
      ),
      3 => 
      array (
        'code' => 'EA',
        'name' => 'إيسترن',
      ),
      4 => 
      array (
        'code' => 'LP',
        'name' => 'لوابولا',
      ),
      5 => 
      array (
        'code' => 'LK',
        'name' => 'لوساكا',
      ),
      6 => 
      array (
        'code' => 'NO',
        'name' => 'الشمالية',
      ),
      7 => 
      array (
        'code' => 'NW',
        'name' => 'الشمال الغربي',
      ),
      8 => 
      array (
        'code' => 'SO',
        'name' => 'الجنوبية',
      ),
      9 => 
      array (
        'code' => 'WE',
        'name' => 'الغربية',
      ),
    ),
    'ZR' => 
    array (
      1 => 
      array (
        'code' => 'BC',
        'name' => 'باس كونجو',
      ),
      2 => 
      array (
        'code' => 'BN',
        'name' => 'باندوندو',
      ),
      3 => 
      array (
        'code' => 'EQ',
        'name' => 'خط الاستواء',
      ),
      4 => 
      array (
        'code' => 'KA',
        'name' => 'كاتانجا',
      ),
      5 => 
      array (
        'code' => 'KE',
        'name' => 'كاساي أورينتال',
      ),
      6 => 
      array (
        'code' => 'KN',
        'name' => 'كنشاسا',
      ),
      7 => 
      array (
        'code' => 'KW',
        'name' => 'كاساي أوسيدنتال',
      ),
      8 => 
      array (
        'code' => 'MA',
        'name' => 'مانيما',
      ),
      9 => 
      array (
        'code' => 'NK',
        'name' => 'كيفو الشمالية',
      ),
      10 => 
      array (
        'code' => 'OR',
        'name' => 'أورينتال',
      ),
      11 => 
      array (
        'code' => 'SK',
        'name' => 'كيفو الجنوبية',
      ),
    ),
    'ZW' => 
    array (
      1 => 
      array (
        'code' => 'BU',
        'name' => 'بولاوايو',
      ),
      2 => 
      array (
        'code' => 'HA',
        'name' => 'هراري',
      ),
      3 => 
      array (
        'code' => 'ML',
        'name' => 'مانيكلاند',
      ),
      4 => 
      array (
        'code' => 'MC',
        'name' => 'ماشونالاند الوسطى',
      ),
      5 => 
      array (
        'code' => 'ME',
        'name' => 'ماشونالاند الشرقية',
      ),
      6 => 
      array (
        'code' => 'MW',
        'name' => 'ماشونالاند الغربية',
      ),
      7 => 
      array (
        'code' => 'MV',
        'name' => 'ماسفينجو',
      ),
      8 => 
      array (
        'code' => 'MN',
        'name' => 'ماتابيليلاند الشمالية',
      ),
      9 => 
      array (
        'code' => 'MS',
        'name' => 'ماتابيليلاند الجنوبية',
      ),
      10 => 
      array (
        'code' => 'MD',
        'name' => 'ميدلاندز',
      ),
    ),
    86 => 
    array (
      1 => 
      array (
        'code' => 'A',
        'name' => 'سانت آندرو',
      ),
      2 => 
      array (
        'code' => 'D',
        'name' => 'سانت دافيد',
      ),
      3 => 
      array (
        'code' => 'G',
        'name' => 'سانت جورج',
      ),
      4 => 
      array (
        'code' => 'J',
        'name' => 'سانت جون',
      ),
      5 => 
      array (
        'code' => 'M',
        'name' => 'سانت مارك',
      ),
      6 => 
      array (
        'code' => 'P',
        'name' => 'سانت باتريك',
      ),
      7 => 
      array (
        'code' => 'C',
        'name' => 'كارياكو',
      ),
      8 => 
      array (
        'code' => 'Q',
        'name' => 'مارتينيك الصغرى',
      ),
    ),
  ),
  'document_category_dom' => 
  array (
    '' => '',
    'Knowledege Base' => 'قاعدة المعارف',
    'Marketing' => 'التسويق',
    'Sales' => 'المبيعات',
  ),
  'document_status_dom' => 
  array (
    'Active' => 'نشط',
    'Draft' => 'المسودة',
    'Expired' => 'منتهي الصلاحية',
    'FAQ' => 'الأسئلة المتداولة',
    'Pending' => 'معلق',
    'Under Review' => 'قيد المراجعة',
  ),
  'document_subcategory_dom' => 
  array (
    '' => '',
    'FAQ' => 'الأسئلة المتداولة',
    'Marketing Collateral' => 'وسائط التسويق',
    'Product Brochures' => 'منشورات المنتج',
  ),
  'document_template_type_dom' => 
  array (
    '' => '',
    'eula' => 'EULA',
    'license' => 'اتفاقية الترخيص',
    'mailmerge' => 'دمج البريد',
    'nda' => 'NDA',
  ),
  'documentation' => 
  array (
    'COM' => '05_Sugar_Community_Edition',
    'CORP' => '03_Sugar_Corporate',
    'ENT' => '02_Sugar_Enterprise',
    'LBL_DOCS' => 'الوثائق',
    'PRO' => '04_Sugar_Professional',
    'ULT' => '01_Sugar_Ultimate',
  ),
  'dom_cal_day_long' => 
  array (
    0 => '',
    1 => 'الأحد',
    2 => 'الاثنين',
    3 => 'الثلاثاء',
    4 => 'الأربعاء',
    5 => 'الخميس',
    6 => 'الجمعة',
    7 => 'السبت',
  ),
  'dom_cal_day_of_week' => 
  array (
    0 => 'الأحد',
    1 => 'الاثنين',
    2 => 'الثلاثاء',
    3 => 'الأربعاء',
    4 => 'الخميس',
    5 => 'الجمعة',
    6 => 'السبت',
  ),
  'dom_cal_day_short' => 
  array (
    0 => '',
    1 => 'أحد',
    2 => 'إثن',
    3 => 'ثلا',
    4 => 'أرب',
    5 => 'خمس',
    6 => 'جمع',
    7 => 'سبت',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'يناير',
    2 => 'فبراير',
    3 => 'مارس',
    4 => 'أبريل',
    5 => 'مايو',
    6 => 'يونيو',
    7 => 'يوليو',
    8 => 'أغسطس',
    9 => 'سبتمبر',
    10 => 'أكتوبر',
    11 => 'نوفمبر',
    12 => 'ديسمبر',
  ),
  'dom_cal_month_short' => 
  array (
    0 => '',
    1 => 'ينا',
    2 => 'فبر',
    3 => 'مار',
    4 => 'أبر',
    5 => 'ماي',
    6 => 'يون',
    7 => 'يول',
    8 => 'أغس',
    9 => 'سبت',
    10 => 'أكت',
    11 => 'نوف',
    12 => 'ديس',
  ),
  'dom_email_archived_status' => 
  array (
    'archived' => 'المؤرشفة',
  ),
  'dom_email_bool' => 
  array (
    'bool_false' => 'لا',
    'bool_true' => 'نعم',
  ),
  'dom_email_distribution' => 
  array (
    '' => '--بلا--',
    'direct' => 'تعيين مباشر',
    'leastBusy' => 'الأقل انشغالاً',
    'roundRobin' => 'الترتيب الدوري',
  ),
  'dom_email_distribution_for_auto_create' => 
  array (
    'leastBusy' => 'الأقل انشغالاً',
    'roundRobin' => 'الترتيب الدوري',
  ),
  'dom_email_editor_option' => 
  array (
    '' => 'التنسيق الافتراضي لرسائل البريد الإلكتروني',
    'html' => 'البريد الإلكتروني بتنسيق HTML',
    'plain' => 'البريد الإلكتروني بنص عادي',
  ),
  'dom_email_errors' => 
  array (
    1 => 'حدد مستخدمًا واحدًا فقط عند التعيين المباشر للعناصر.',
    2 => 'يجب عليك تعيين "العناصر التي تم التحقق منها فقط" عند "التعيين المباشر للعناصر".',
  ),
  'dom_email_link_type' => 
  array (
    'mailto' => 'عميل رسائل البريد الإلكتروني الخارجية',
    'sugar' => 'عميل رسائل البريد الإلكتروني لـ Sugar',
  ),
  'dom_email_server_type' => 
  array (
    '' => '--بلا--',
    'imap' => 'IMAP',
  ),
  'dom_email_status' => 
  array (
    'archived' => 'المؤرشفة',
    'closed' => 'مغلق',
    'draft' => 'في المسودة',
    'read' => 'مقروء',
    'replied' => 'تم الرد',
    'send_error' => 'خطأ في الإرسال',
    'sent' => 'المرسلة',
    'unread' => 'غير مقروء',
  ),
  'dom_email_types' => 
  array (
    'archived' => 'المؤرشفة',
    'campaign' => 'الحملة',
    'draft' => 'المسودة',
    'inbound' => 'داخلي',
    'out' => 'المرسلة',
  ),
  'dom_int_bool' => 
  array (
    0 => 'لا',
    1 => 'نعم',
  ),
  'dom_mailbox_type' => 
  array (
    'bounce' => 'معالجة مرتدة',
    'createcase' => 'إنشاء حالة',
    'pick' => '--بلا--',
  ),
  'dom_meeting_accept_options' => 
  array (
    'accept' => 'قبول',
    'decline' => 'رفض',
    'tentative' => 'مبدئي',
  ),
  'dom_meeting_accept_status' => 
  array (
    'accept' => 'مقبول',
    'decline' => 'مرفوض',
    'none' => 'بلا',
    'tentative' => 'مبدئي',
  ),
  'dom_meridiem_lowercase' => 
  array (
    'am' => 'ص',
    'pm' => 'م',
  ),
  'dom_meridiem_uppercase' => 
  array (
    'AM' => 'صباحًا',
    'PM' => 'م',
    'ص' => 'ص',
  ),
  'dom_report_types' => 
  array (
    'Matrix' => 'المصفوفة',
    'detailed_summary' => 'مجموع بتفاصيل',
    'summary' => 'مجموع',
    'tabular' => 'الصفوف والأعمدة',
  ),
  'dom_switch_bool' => 
  array (
    '' => 'لا',
    'off' => 'لا',
    'on' => 'نعم',
  ),
  'dselect_type_dom' => 
  array (
    'Does not Equal' => 'لا يساوي',
    'Equals' => 'يساوي',
    'Less Than' => 'أقل من',
    'More Than' => 'أكثر من',
  ),
  'dtselect_type_dom' => 
  array (
    'Less Than' => 'أقل من',
    'More Than' => 'كان أكثر من',
  ),
  'duration_dom' => 
  array (
    '' => 'بلا',
    900 => '15 دقيقة',
    1800 => '30 دقيقة',
    2700 => '45 دقيقة',
    3600 => 'ساعة واحدة',
    5400 => '1.5 ساعة',
    7200 => 'ساعتان',
    10800 => '3 ساعات',
    21600 => '6 ساعات',
    86400 => 'يوم واحد',
    172800 => 'يومان',
    259200 => '3 أيام',
    604800 => 'أسبوع واحد',
  ),
  'duration_intervals' => 
  array (
    0 => '00',
    15 => '15',
    30 => '30',
    45 => '45',
  ),
  'eapm_list' => 
  array (
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'GoToMeeting' => 'ذهاب للاجتماع',
    'Google' => 'Google',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Sugar' => 'Sugar',
    'Twitter' => 'Twitter',
    'WebEx' => 'WebEx',
  ),
  'eapm_list_documents' => 
  array (
    'Google' => 'مستندات Google',
  ),
  'eapm_list_import' => 
  array (
    'Google' => 'جهات اتصال Google',
  ),
  'emailTemplates_type_list' => 
  array (
    '' => '',
    'campaign' => 'الحملة',
    'email' => 'البريد الإلكتروني',
    'workflow' => 'سير العمل',
  ),
  'emailTemplates_type_list_campaigns' => 
  array (
    '' => '',
    'campaign' => 'الحملة',
  ),
  'emailTemplates_type_list_no_workflow' => 
  array (
    '' => '',
    'campaign' => 'الحملة',
    'email' => 'البريد الإلكتروني',
  ),
  'email_check_interval_dom' => 
  array (
    -1 => 'يدويًا',
    5 => 'كل 5 دقائق',
    15 => 'كل 15 دقيقة',
    30 => 'كل 30 دقيقة',
    60 => 'كل ساعة',
  ),
  'email_marketing_status_dom' => 
  array (
    '' => '',
    'active' => 'نشط',
    'inactive' => 'غير نشط',
  ),
  'email_settings_for_ssl' => 
  array (
    0 => '',
    1 => 'SSL',
    2 => 'TLS',
  ),
  'email_settings_num_dom' => 
  array (
    10 => '10',
    20 => '20',
    50 => '50',
  ),
  'employee_status_dom' => 
  array (
    'Active' => 'نشط',
    'Leave of Absence' => 'غياب عن العمل بإذن',
    'Terminated' => 'منتهٍ',
  ),
  'extapi_meeting_password' => 
  array (
    'WebEx' => 'WebEx',
  ),
  'filter_checkbox_dom' => 
  array (
    0 => 'خطأ',
    1 => 'صواب',
  ),
  'font_size_dom' => 
  array (
    -5 => 'أصغر (-5)',
    -4 => 'أصغر (-4)',
    -3 => 'أصغر (-3)',
    -2 => 'أصغر (-2)',
    -1 => 'أصغر (-1)',
    'Default' => 'الافتراضي',
    1 => 'أكبر (+1)',
    2 => 'أكبر (+2)',
    3 => 'أكبر (+3)',
    4 => 'أكبر (+4)',
    5 => 'أكبر (+5)',
  ),
  'forecast_fiscal_year_options' => 
  array (
    'current_year' => '{{year}}',
    'next_year' => '{{year}}',
  ),
  'forecast_pareto_visibility_options' => 
  array (
    'group' => 'تنبؤات فريقي',
    'user' => 'تنبؤاتي',
  ),
  'forecast_pipeline_visibility_options' => 
  array (
    'group' => 'خط أنابيب فريقي',
    'user' => 'تدفقاتي',
  ),
  'forecast_schedule_status_dom' => 
  array (
    'Active' => 'نشط',
    'Inactive' => 'غير نشط',
  ),
  'forecast_type_dom' => 
  array (
    'Direct' => 'مباشر',
    'Rollup' => 'القيمة المحتسبة',
  ),
  'forecasts_chart_options_group' => 
  array (
    'forecast' => 'ضمن التنبؤات',
    'probability' => 'الاحتمالية',
    'sales_stage' => 'مرحلة المبيعات',
  ),
  'forecasts_config_ranges_options_dom' => 
  array (
    'show_binary' => 'نطاقان',
    'show_buckets' => 'ثلاثة نطاقات',
    'show_custom_buckets' => 'نطاقات مخصصة',
  ),
  'forecasts_config_worksheet_layout_forecast_by_options_dom' => 
  array (
    'Opportunities' => 'الفرص',
    'RevenueLineItems' => 'بنود العائدات',
  ),
  'forecasts_options_dataset' => 
  array (
    'best' => 'الأفضل',
    'likely' => 'يحتمل',
    'worst' => 'الأسوأ',
  ),
  'forecasts_timeperiod_options_dom' => 
  array (
    'Annual' => 'سنويًا (فترات فرعية ربع سنوية)',
    'Quarter' => 'ربع سنوي (فترات فرعية شهرية)',
  ),
  'forecasts_timeperiod_types_dom' => 
  array (
    'chronological' => 'عام استنادًا إلى اليوم',
  ),
  'fts_type' => 
  array (
    'Elastic' => 'البحث المرن',
  ),
  'gender_list' => 
  array (
    'female' => 'أنثى',
    'male' => 'ذكر',
  ),
  'generic_timeperiod_options' => 
  array (
    'current' => 'ربع السنة الحالي',
    'next' => 'ربع السنة القادم',
    'year' => 'هذا العام',
  ),
  'history_filter_options' => 
  array (
    7 => 'آخر 7 أيام',
    30 => 'آخر 30 يومًا',
    90 => 'ربع السنة الماضي',
  ),
  'history_limit_options' => 
  array (
    5 => '5',
    10 => '10',
    15 => '15',
    20 => '20',
  ),
  'history_visibility_options' => 
  array (
    'group' => 'لا',
    'user' => 'نعم',
  ),
  'import_delimeter_options' => 
  array (
    ',' => '،',
    '.' => '.',
    ':' => ':',
    ';' => '؛',
    '\\t' => '\\t',
    'other' => 'أخرى:',
    '|' => '|',
  ),
  'import_enclosure_options' => 
  array (
    '' => 'بلا',
    '"' => 'علامة اقتباس مزدوجة (")',
    '\'' => 'علامة اقتباس مفردة (&#39;)',
    'other' => 'أخرى:',
  ),
  'in_total_group_stages' => 
  array (
    'Closed Accepted' => 'مقبول مغلق',
    'Closed Dead' => 'خامد مغلق',
    'Closed Lost' => 'خسارة مغلقة',
    'Confirmed' => 'مؤكد',
    'Delivered' => 'مستلم',
    'Draft' => 'المسودة',
    'Negotiation' => 'التفاوض',
    'On Hold' => 'قيد التعليق',
  ),
  'industry_dom' => 
  array (
    '' => '',
    'Apparel' => 'الشكل الخارجي',
    'Banking' => 'الأعمال المصرفية',
    'Biotechnology' => 'التكنولوجيا الحيوية',
    'Chemicals' => 'المواد الكيماوية',
    'Communications' => 'الاتصالات',
    'Construction' => 'التشييد',
    'Consulting' => 'الاستشارة',
    'Education' => 'التعليم',
    'Electronics' => 'الإلكترونيات',
    'Energy' => 'الطاقة',
    'Engineering' => 'الهندسة',
    'Entertainment' => 'التسلية',
    'Environmental' => 'البيئية',
    'Finance' => 'التمويل',
    'Government' => 'الحكومة',
    'Healthcare' => 'الرعاية الصحية',
    'Hospitality' => 'كرم الضيافة',
    'Insurance' => 'التأمين',
    'Machinery' => 'الميكنة',
    'Manufacturing' => 'التصنيع',
    'Media' => 'الإعلام',
    'Not For Profit' => 'غير هادف للربح',
    'Other' => 'أخرى',
    'Recreation' => 'الاستجمام',
    'Retail' => 'البيع بالتجزئة',
    'Shipping' => 'الشحن',
    'Technology' => 'التكنولوجيا',
    'Telecommunications' => 'الاتصالات عند بُعد',
    'Transportation' => 'النقل',
    'Utilities' => 'المرافق العامة',
  ),
  'interactions_options' => 
  array (
    'custom' => 'عامل التصفية المخصص لي',
    'favorites' => 'المفضلة',
    7 => 'آخر 7 أيام',
    30 => 'آخر 30 يومًا',
    90 => 'ربع السنة الماضي',
  ),
  'issue_priority_default_key' => 'متوسط',
  'issue_priority_dom' => 
  array (
    'High' => 'عالٍ',
    'Low' => 'منخفض',
    'Medium' => 'متوسط',
    'Urgent' => 'عاجل',
  ),
  'issue_resolution_default_key' => '',
  'issue_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'مقبول',
    'Closed' => 'مغلق',
    'Duplicate' => 'تكرار',
    'Invalid' => 'غير صالح',
    'Out of Date' => 'قديم',
  ),
  'issue_status_default_key' => 'جديد',
  'issue_status_dom' => 
  array (
    'Assigned' => 'معيَّن',
    'Closed' => 'مغلق',
    'New' => 'جديد',
    'Pending' => 'معلق',
    'Rejected' => 'مرفوض',
  ),
  'kbadmin_actions_dom' => 
  array (
    '' => '--إجراءات المسؤول--',
    'Apply Tags On Articles' => 'تطبيق علامات على مقالات',
    'Create New Tag' => 'إنشاء علامة جديدة',
    'Delete Selected Articles' => 'حذف مقالات محددة',
    'Delete Tag' => 'حذف علامة',
    'Move Selected Articles' => 'نقل مقالات محددة',
    'Rename Tag' => 'إعادة تسمية علامة',
  ),
  'kbdocument_attachment_option_dom' => 
  array (
    '' => '',
    'mime' => 'تحديد نوع Mime',
    'name' => 'تحديد اسم',
    'none' => 'لا توجد بها مرفقات',
    'some' => 'بها مرفقات',
  ),
  'kbdocument_canned_search' => 
  array (
    'added' => 'آخر 30 يومًا مضافة',
    'all' => 'الكل',
    'faqs' => 'الأسئلة المتداولة',
    'pending' => 'تعليق موافقتي',
    'updated' => 'آخر 30 يومًا محدثة',
  ),
  'kbdocument_date_filter_options' => 
  array (
    '' => '',
    'after' => 'بعد',
    'before' => 'قبل',
    'between_dates' => 'بين',
    'isnull' => 'هو خالٍ',
    'last_30_days' => 'آخر 30 يومًا',
    'last_7_days' => 'آخر 7 أيام',
    'last_month' => 'الشهر الماضي',
    'last_year' => 'العام الماضي',
    'next_30_days' => 'الـ 30 أيام المقبلة',
    'next_7_days' => 'الـ 7 أيام المقبلة',
    'next_month' => 'الشهر القادم',
    'next_year' => 'العام القادم',
    'on' => 'في',
    'this_month' => 'هذا الشهر',
    'this_year' => 'هذا العام',
  ),
  'kbdocument_status_dom' => 
  array (
    'Draft' => 'المسودة',
    'Expired' => 'منتهي الصلاحية',
    'In Review' => 'قيد المراجعة',
    'Published' => 'منشور',
  ),
  'kbdocument_viewing_frequency_dom' => 
  array (
    '' => '',
    'Bot_10' => 'أقل 10',
    'Bot_20' => 'أقل 20',
    'Bot_5' => 'أقل 5',
    'Top_10' => 'أعلى 10',
    'Top_20' => 'أعلى 20',
    'Top_5' => 'أعلى 5',
  ),
  'language_pack_name' => 'العربية',
  'layouts_dom' => 
  array (
    'Invoice' => 'الفاتورة',
    'Standard' => 'عرض السعر',
  ),
  'lead_conv_activity_opt' => 
  array (
    'copy' => 'نسخ',
    'donothing' => 'عدم القيام بشيء',
    'move' => 'نقل',
  ),
  'lead_source_default_key' => 'منشأة ذاتيًا',
  'lead_source_dom' => 
  array (
    '' => '',
    'Campaign' => 'الحملة',
    'Cold Call' => 'المكالمة التسويقية',
    'Conference' => 'المؤتمر',
    'Direct Mail' => 'البريد المباشر',
    'Email' => 'البريد الإلكتروني',
    'Employee' => 'الموظف',
    'Existing Customer' => 'العميل الحالي',
    'Other' => 'أخرى',
    'Partner' => 'الشريك',
    'Public Relations' => 'العلاقات العامة',
    'Self Generated' => 'منشأة ذاتيًا',
    'Support Portal User Registration' => 'دعم تسجيل مستخدم البوابة',
    'Trade Show' => 'العرض التجاري',
    'Web Site' => 'موقع الويب',
    'Word of mouth' => 'السماع',
  ),
  'lead_status_dom' => 
  array (
    '' => '',
    'Assigned' => 'معيَّن',
    'Converted' => 'محول',
    'Dead' => 'خامد',
    'In Process' => 'قيد التقدم',
    'New' => 'جديد',
    'Recycled' => 'معاد تصنيعه',
  ),
  'library_type' => 
  array (
    'Books' => 'الكتاب',
    'DVD' => 'DVD',
    'Magazines' => 'المجلات',
    'Music' => 'الموسيقى',
  ),
  'link_target_dom' => 
  array (
    '_blank' => 'إطار جديد',
    '_self' => 'نفس الإطار',
  ),
  'list_visibility_options' => 
  array (
    0 => 'لا',
    1 => 'نعم',
  ),
  'meeting_status_default' => 'مخطط',
  'meeting_status_dom' => 
  array (
    'Held' => 'تم العقد',
    'Not Held' => 'تم الإلغاء',
    'Planned' => 'تمت الجدولة',
  ),
  'meeting_type_dom' => 
  array (
    'Other' => 'أخرى',
    'Sugar' => 'SugarCRM',
  ),
  'merge_operators_dom' => 
  array (
    'exact' => 'تمامًا',
    'like' => 'تحتوي على',
    'start' => 'يبدأ بـ',
  ),
  'messenger_type_dom' => 
  array (
    '' => '',
    'AOL' => 'AOL',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
  ),
  'moduleIconList' => 
  array (
    'Calls' => 'Cl',
    'Campaigns' => 'Ca',
    'Cases' => 'Cs',
    'Notes' => 'Nt',
    'Quotas' => 'الحصة النسبية',
    'Tasks' => 'Ts',
  ),
  'moduleList' => 
  array (
    'ACLRoles' => 'الأدوار',
    'Accounts' => 'الحسابات',
    'Activities' => 'الأنشطة',
    'Administration' => 'الإدارة',
    'Bugs' => 'الأخطاء',
    'Calendar' => 'التقويم',
    'Calls' => 'المكالمات',
    'CampaignLog' => 'سجل الحملة',
    'CampaignTrackers' => 'متعقبو الحملة',
    'Campaigns' => 'الحملات',
    'Cases' => 'الحالات',
    'Comments' => 'التعليقات',
    'Connectors' => 'الموصلات',
    'Contacts' => 'جهات الاتصال',
    'ContractTypes' => 'أنواع العقود',
    'Contracts' => 'العقود',
    'Currencies' => 'العملات',
    'CustomQueries' => 'الاستعلامات المخصصة',
    'DataSets' => 'تنسيقات البيانات',
    'DocumentRevisions' => 'مراجعات المستند',
    'Documents' => 'المستندات',
    'EAPM' => 'الحسابات الخارجية',
    'EmailAddresses' => 'عنوان البريد الإلكتروني',
    'EmailMarketing' => 'البريد التسويقي',
    'EmailTemplates' => 'قوالب البريد الإلكتروني',
    'Emails' => 'رسائل البريد الإلكتروني',
    'Employees' => 'الموظفون',
    'FAQ' => 'الأسئلة المتداولة',
    'Feedbacks' => 'تعليقات',
    'Feeds' => 'RSS',
    'Filters' => 'عوامل التصفية',
    'ForecastManagerWorksheets' => 'أوراق عمل إدارة التنبؤ',
    'ForecastSchedule' => 'جدول التنبؤ',
    'ForecastWorksheets' => 'أوراق عمل التنبؤ',
    'Forecasts' => 'التنبؤات',
    'Home' => 'الصفحة الرئيسية',
    'InboundEmail' => 'البريد الإلكتروني الوارد',
    'KBDocuments' => 'قاعدة المعارف',
    'Leads' => 'العملاء المتوقعون',
    'Library' => 'المكتبة',
    'Manufacturers' => 'الشركات المصنعة',
    'Meetings' => 'الاجتماعات',
    'MergeRecords' => 'دمج السجلات',
    'Newsletters' => 'الرسائل الإخبارية',
    'Notes' => 'ملاحظات',
    'Notifications' => 'الإشعارات',
    'OAuthKeys' => 'مفاتيح مستهلك OAuth',
    'OAuthTokens' => 'رموز OAuth',
    'Opportunities' => 'الفرص',
    'PdfManager' => 'مدير PDF',
    'ProductCategories' => 'فئات المنتج',
    'ProductTemplates' => 'كتالوج المنتج',
    'ProductTypes' => 'أنواع المنتج',
    'Products' => 'البنود المسعرة',
    'Project' => 'المشروعات',
    'ProjectTask' => 'مهام المشروع',
    'ProspectLists' => 'قوائم هدف',
    'Prospects' => 'الأهداف',
    'Queues' => 'قوائم الانتظار',
    'Quotas' => 'الحصص النسبية',
    'Quotes' => 'عروض الأسعار',
    'Releases' => 'الإصدارات',
    'ReportMaker' => 'تقارير متقدمة',
    'Reports' => 'التقارير',
    'Reports_1' => 'التقارير المحفوظة',
    'RevenueLineItems' => 'بنود العائدات',
    'Roles' => 'الأدوار',
    'SNIP' => 'أرشفة البريد الإلكتروني',
    'SavedSearch' => 'عمليات البحث المحفوظة',
    'Schedulers' => 'خدمات الجدولة',
    'Shippers' => 'مزودي الشحن',
    'Styleguide' => 'دليل الأنماط',
    'Subscriptions' => 'الاشتراكات',
    'SugarFavorites' => 'المفضلة',
    'Sugar_Favorites' => 'المفضلة',
    'Sync' => 'مزامنة',
    'Tasks' => 'المهام',
    'TaxRates' => 'أسعار الضريبة',
    'TeamNotices' => 'إشعارات الفريق',
    'Teams' => 'الفرق',
    'TimePeriods' => 'الفترات الزمنية',
    'TrackerPerfs' => 'أداء المتعقب',
    'TrackerQueries' => 'استعلامات المتعقب',
    'TrackerSessions' => 'جلسات المتعقب',
    'Trackers' => 'وحدات التعقب',
    'UpgradeWizard' => 'معالج الترقية',
    'UserSignatures' => 'توقيعات المستخدم',
    'Users' => 'المستخدمون',
    'WebLogicHooks' => 'أدوات الإضافة المنطقية على الويب',
    'Words' => 'الكلمات',
    'WorkFlow' => 'تعريفات سير العمل',
    'Worksheet' => 'ورقة العمل',
    'iFrames' => 'المواقع الخاصة بي',
    'pmse_Business_Rules' => 'القواعد التجارية للعملية',
    'pmse_Emails_Templates' => 'قوالب البريد الإلكتروني للعملية',
    'pmse_Inbox' => 'العملية',
    'pmse_Project' => 'تعريف العملية',
  ),
  'moduleListSingular' => 
  array (
    'ACLRoles' => 'الدور',
    'Accounts' => 'الحساب',
    'Activities' => 'النشاط',
    'ActivityStream' => 'سير النشاط',
    'Administration' => 'الإدارة',
    'Bugs' => 'الخطأ',
    'Calendar' => 'التقويم',
    'Calls' => 'المكالمة',
    'CampaignLog' => 'سجل الحملة',
    'CampaignTrackers' => 'متعقب الحملة',
    'Campaigns' => 'الحملة',
    'Cases' => 'الحالة',
    'Comments' => 'تعليق',
    'Connectors' => 'الموصل',
    'Contacts' => 'جهة الاتصال',
    'ContractTypes' => 'نوع العقد',
    'Contracts' => 'العقد',
    'Currencies' => 'العملة',
    'CustomQueries' => 'استعلام مخصص',
    'Dashboard' => 'لوحة المعلومات',
    'DataSets' => 'تنسيق البيانات',
    'DocumentRevisions' => 'مراجعة المستند',
    'Documents' => 'المستند',
    'EAPM' => 'حساب خارجي',
    'EmailAddresses' => 'عنوان البريد الإلكتروني',
    'EmailMarketing' => 'البريد التسويقي',
    'EmailTemplates' => 'قالب البريد الإلكتروني',
    'Emails' => 'البريد الإلكتروني',
    'Employees' => 'الموظف',
    'FAQ' => 'الأسئلة المتداولة',
    'Feedbacks' => 'تعليقات',
    'Feeds' => 'RSS',
    'Filters' => 'عامل التصفية',
    'ForecastManagerWorksheets' => 'ورقة عمل إدارة التنبؤ',
    'ForecastSchedule' => 'جدول التنبؤ',
    'ForecastWorksheets' => 'ورقة عمل التنبؤ',
    'Forecasts' => 'التنبؤ',
    'Home' => 'الصفحة الرئيسية',
    'InboundEmail' => 'البريد الإلكتروني الوارد',
    'KBDocuments' => 'مستند قاعدة المعارف',
    'Leads' => 'العميل المتوقع',
    'Library' => 'المكتبة',
    'Manufacturers' => 'الشركة المصنعة',
    'Meetings' => 'الاجتماع',
    'MergeRecords' => 'دمج السجل',
    'Newsletters' => 'الرسالة الإخبارية',
    'Notes' => 'ملاحظة',
    'Notifications' => 'الإشعار',
    'OAuthKeys' => 'مفتاح مستهلك OAuth',
    'OAuthTokens' => 'رمز OAuth',
    'Opportunities' => 'الفرصة',
    'PdfManager' => 'مدير PDF',
    'ProductCategories' => 'فئة المنتج',
    'ProductTemplates' => 'قالب المنتج',
    'ProductTypes' => 'نوع المنتج',
    'Products' => 'البند المسعر',
    'Project' => 'المشروع',
    'ProjectTask' => 'مهمة المشروع',
    'ProspectLists' => 'قائمة هدف',
    'Prospects' => 'الهدف',
    'Queues' => 'قائمة الانتظار',
    'Quotas' => 'الحصة النسبية',
    'Quotes' => 'عرض السعر',
    'Releases' => 'الإصدار',
    'ReportMaker' => 'تقرير متقدم',
    'Reports' => 'التقرير',
    'Reports_1' => 'التقرير المحفوظ',
    'RevenueLineItems' => 'بند العائد',
    'Roles' => 'الدور',
    'SNIP' => 'أرشفة البريد الإلكتروني',
    'SavedSearch' => 'البحث المحفوظ',
    'Schedulers' => 'المجدول',
    'Shippers' => 'مزود الشحن',
    'Styleguide' => 'دليل الأنماط',
    'Subscriptions' => 'الاشتراك',
    'SugarFavorites' => 'مفضلة Sugar',
    'Sugar_Favorites' => 'المفضلة',
    'Sync' => 'مزامنة',
    'Tasks' => 'المهمة',
    'TaxRates' => 'سعر الضريبة',
    'TeamNotices' => 'إشعار الفريق',
    'Teams' => 'الفريق',
    'TimePeriods' => 'الفترة الزمنية',
    'TrackerPerfs' => 'أداء المتعقب',
    'TrackerQueries' => 'استعلام المتعقب',
    'TrackerSessions' => 'جلسة المتعقب',
    'Trackers' => 'المتعقب',
    'UpgradeWizard' => 'معالج الترقية',
    'UserSignatures' => 'توقيع المستخدم',
    'Users' => 'المستخدم',
    'WebLogicHooks' => 'أداة الإضافة المنطقي على الويب',
    'Words' => 'الكلمة',
    'WorkFlow' => 'سير العمل',
    'Worksheet' => 'ورقة العمل',
    'iFrames' => 'المواقع الخاصة بي',
    'pmse_Business_Rules' => 'القاعدة التجارية للعملية',
    'pmse_Emails_Templates' => 'قوالب البريد الإلكتروني للعملية',
    'pmse_Inbox' => 'العملية',
    'pmse_Project' => 'تعريف العملية',
  ),
  'mselect_multi_type_dom' => 
  array (
    'in' => 'هو واحد من',
    'not_in' => 'ليس واحدًا من',
  ),
  'mselect_type_dom' => 
  array (
    'Equals' => 'هو',
    'in' => 'هو واحد من',
  ),
  'navigation_paradigms' => 
  array (
    'gm' => 'الوحدات المجمعة',
    'm' => 'الوحدات',
  ),
  'newsletter_frequency_dom' => 
  array (
    '' => '',
    'Annually' => 'سنويًا',
    'Monthly' => 'شهريًا',
    'Quarterly' => 'ربع سنوي',
    'Weekly' => 'أسبوعيًا',
  ),
  'notifications_severity_list' => 
  array (
    'alert' => 'تنبيه',
    'information' => 'معلومات',
    'other' => 'أخرى',
    'success' => 'نجاح',
    'warning' => 'تحذير',
  ),
  'notifications_status_dom' => 
  array (
    0 => 'غير مقروء',
    1 => 'مقروء',
  ),
  'notifymail_sendtype' => 
  array (
    'SMTP' => 'SMTP',
  ),
  'numeric_range_search_dom' => 
  array (
    '=' => 'يساوي',
    'between' => 'بين',
    'greater_than' => 'أكبر من',
    'greater_than_equals' => 'أكبر من أو يساوي',
    'less_than' => 'أقل من',
    'less_than_equals' => 'أقل من أو يساوي',
    'not_equal' => 'لا يساوي',
  ),
  'oauth_client_type_dom' => 
  array (
    'support_portal' => 'منفذ الدعم',
    'user' => 'مستخدم Sugar',
  ),
  'oauth_type_dom' => 
  array (
    'oauth1' => 'OAuth 1.0',
    'oauth2' => 'OAuth 2.0',
  ),
  'oc_status_dom' => 
  array (
    '' => '',
    'Active' => 'نشط',
    'Inactive' => 'غير نشط',
  ),
  'opportunity_metrics_dom' => 
  array (
    'active' => 'نشط',
    'lost' => 'خسارة',
    'won' => 'ربح',
  ),
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'متخذ قرار الأعمال',
    'Business Evaluator' => 'مُقيّم الأعمال',
    'Executive Sponsor' => 'الراعي التنفيذي',
    'Influencer' => 'المؤثر',
    'Other' => 'أخرى',
    'Primary Decision Maker' => 'متخذ القرار الرئيسي',
    'Technical Decision Maker' => 'متخذ القرار الفني',
    'Technical Evaluator' => 'المقيم الفني',
  ),
  'opportunity_type_dom' => 
  array (
    '' => '',
    'Existing Business' => 'العمل الحالي',
    'New Business' => 'العمل الجديد',
  ),
  'opps_config_view_by_closedate_rollup_dom' => 
  array (
    'earliest' => 'تاريخ الإغلاق الأقرب',
    'latest' => 'تاريخ الإغلاق الأخير',
  ),
  'opps_config_view_by_options_dom' => 
  array (
    'Opportunities' => 'الفرص',
    'RevenueLineItems' => 'الفرص وبنود سطر الإيرادات',
  ),
  'optout_dom' => 
  array (
    '' => '-بلا-',
    'false' => 'لا',
    'true' => 'نعم',
  ),
  'order_stage_dom' => 
  array (
    'Cancelled' => 'ملغي',
    'Confirmed' => 'مؤكد',
    'On Hold' => 'قيد التعليق',
    'Pending' => 'معلق',
    'Shipped' => 'تم شحنه',
  ),
  'parent_type_display' => 
  array (
    'Accounts' => 'الحساب',
    'Bugs' => 'الأخطاء',
    'Cases' => 'الحالة',
    'Contacts' => 'جهة الاتصال',
    'Leads' => 'العميل المتوقع',
    'Opportunities' => 'الفرصة',
    'Products' => 'البند المسعر',
    'Project' => 'المشروع',
    'ProjectTask' => 'مهمة المشروع',
    'Prospects' => 'الهدف',
    'Quotes' => 'عرض السعر',
    'RevenueLineItems' => 'بند العائد',
    'Tasks' => 'المهمة',
  ),
  'payment_terms' => 
  array (
    '' => '',
    'Net 15' => 'الصافي 15',
    'Net 30' => 'الصافي 30',
  ),
  'pdfmanager_yes_no_list' => 
  array (
    'no' => 'لا',
    'yes' => 'نعم',
  ),
  'pipeline_chart_dom' => 
  array (
    'fun' => 'القمع',
    'hbar' => 'الشريط الأفقي',
  ),
  'planned_activities_filter_options' => 
  array (
    'future' => 'المستقبل',
    'today' => 'اليوم',
  ),
  'planned_activities_limit_options' => 
  array (
    5 => '5',
    10 => '10',
    15 => '15',
    20 => '20',
  ),
  'planned_activities_visibility_options' => 
  array (
    'group' => 'لا',
    'user' => 'نعم',
  ),
  'pricing_formula_default_key' => 'ثابت',
  'pricing_formula_dom' => 
  array (
    'Fixed' => 'سعر ثابت',
    'IsList' => 'مثل القائمة',
    'PercentageDiscount' => 'الخصم من القائمة',
    'PercentageMarkup' => 'رفع للسعر أعلى من التكلفة',
    'ProfitMargin' => 'هامش الربح',
  ),
  'product_category_default_key' => '',
  'product_category_dom' => 
  array (
    '' => '',
    'Accounts' => 'الحسابات',
    'Activities' => 'الأنشطة',
    'Bug Tracker' => 'متتبع الأخطاء',
    'Calendar' => 'التقويم',
    'Calls' => 'المكالمات',
    'Campaigns' => 'الحملات',
    'Cases' => 'الحالات',
    'Contacts' => 'جهات الاتصال',
    'Currencies' => 'العملات',
    'Dashboard' => 'لوحة المعلومات',
    'Documents' => 'المستندات',
    'Emails' => 'رسائل البريد الإلكتروني',
    'Feeds' => 'موجز ويب',
    'Forecasts' => 'التنبؤات',
    'Help' => 'تعليمات',
    'Home' => 'الصفحة الرئيسية',
    'Leads' => 'العملاء المتوقعون',
    'Meetings' => 'الاجتماعات',
    'Notes' => 'ملاحظات',
    'Opportunities' => 'الفرص',
    'Outlook Plugin' => 'المكون الإضافي لـ Outlook',
    'Product Catalog' => 'كتالوج المنتج',
    'Products' => 'البنود المسعرة',
    'Projects' => 'المشروعات',
    'Quotes' => 'عروض الأسعار',
    'RSS' => 'RSS',
    'Releases' => 'الإصدارات',
    'RevenueLineItems' => 'بنود العائدات',
    'Studio' => 'الاستوديو',
    'Upgrade' => 'الترقية',
    'Users' => 'المستخدمون',
  ),
  'product_status_default_key' => 'الشحن',
  'product_status_dom' => 
  array (
    '' => '',
    'Orders' => 'تم طلبه',
    'Quotes' => 'تم عمل عرض سعر له',
    'Ship' => 'تم شحنه',
  ),
  'product_status_quote_key' => 'عروض الأسعار',
  'product_template_status_dom' => 
  array (
    'Available' => 'في المخزون',
    'Unavailable' => 'خارج المخزون',
  ),
  'project_duration_units_dom' => 
  array (
    'Days' => 'أيام',
    'Hours' => 'ساعات',
  ),
  'project_priority_default' => 'متوسط',
  'project_priority_options' => 
  array (
    'High' => 'عالٍ',
    'Low' => 'منخفض',
    'Medium' => 'متوسط',
  ),
  'project_status_default' => 'المسودة',
  'project_status_dom' => 
  array (
    'Draft' => 'المسودة',
    'In Review' => 'قيد المراجعة',
    'Published' => 'منشور',
  ),
  'project_task_priority_default' => 'متوسط',
  'project_task_priority_options' => 
  array (
    'High' => 'عالٍ',
    'Low' => 'منخفض',
    'Medium' => 'متوسط',
  ),
  'project_task_status_options' => 
  array (
    'Completed' => 'كامل',
    'Deferred' => 'مؤجل',
    'In Progress' => 'يتقدم',
    'Not Started' => 'لم يبدأ',
    'Pending Input' => 'إدخال معلق',
  ),
  'project_task_utilization_options' => 
  array (
    0 => 'بلا',
    25 => '25',
    50 => '50',
    75 => '75',
    100 => '100',
  ),
  'projects_priority_options' => 
  array (
    'high' => 'عالٍ',
    'low' => 'منخفض',
    'medium' => 'متوسط',
  ),
  'projects_status_options' => 
  array (
    'completed' => 'كامل',
    'inprogress' => 'يتقدم',
    'notstarted' => 'لم يبدأ',
  ),
  'prospect_list_type_dom' => 
  array (
    'default' => 'الافتراضي',
    'exempt' => 'قائمة المنع - حسب المعرّف',
    'exempt_address' => 'قائمة المنع - حسب عنوان البريد الإلكتروني',
    'exempt_domain' => 'قائمة المنع - حسب المجال',
    'seed' => 'إضافة قاعدة بيانات',
    'test' => 'الاختبار',
  ),
  'query_calc_calc_type_dom' => 
  array (
    'AVG' => 'المتوسط',
    'COUNT' => 'حساب',
    'MAX' => 'الحد الأقصى',
    'MIN' => 'الحد الأدنى',
    'STDDEV' => 'الانحراف القياسي',
    'SUM' => 'جمع (الإجمالي)',
    'VARIANCE' => 'التباين',
  ),
  'query_calc_leftright_type_dom' => 
  array (
    'Field' => 'الحقل',
    'Group' => 'المجموعة',
    'Value' => 'القيمة',
  ),
  'query_calc_oper_dom' => 
  array (
    '*' => '(X) مضروبًا في',
    '+' => '(+) إضافة',
    '-' => '(-) طرح',
    '/' => '(/) مقسومًا على',
  ),
  'query_calc_type_dom' => 
  array (
    'Math' => 'حسابات رياضية',
    'Standard' => 'قياسي',
  ),
  'query_column_type_dom' => 
  array (
    'Calculation' => 'الحساب',
    'Display' => 'عرض',
  ),
  'query_display_type_dom' => 
  array (
    'Custom' => 'مخصص',
    'Default' => 'الافتراضي',
    'Hidden' => 'مخفي',
  ),
  'query_groupby_axis_dom' => 
  array (
    'Columns' => 'الأعمدة (المحور ص)',
    'Rows' => 'الصفوف (المحور س)',
  ),
  'query_groupby_calc_type_dom' => 
  array (
    'AVG' => 'AVG',
    'COUNT' => 'حساب',
    'STDDEV' => 'الانحراف القياسي',
    'SUM' => 'SUM',
    'VARIANCE' => 'التباين',
  ),
  'query_groupby_qualifier_dom' => 
  array (
    'Day' => 'يوم',
    'Month' => 'شهر',
    'Quarter' => 'ربع سنة',
    'Week' => 'أسبوع',
    'Year' => 'سنة',
  ),
  'query_groupby_qualifier_qty_dom' => 
  array (
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
    6 => '6',
    7 => '7',
    8 => '8',
    9 => '9',
    10 => '10',
    12 => '12',
    18 => '18',
    24 => '24',
  ),
  'query_groupby_qualifier_start_dom' => 
  array (
    -24 => '-24',
    -18 => '-18',
    -12 => '-12',
    -10 => '-10',
    -9 => '-9',
    -8 => '-8',
    -7 => '-7',
    -6 => '-6',
    -5 => '-5',
    -4 => '-4',
    -3 => '-3',
    -2 => '-2',
    -1 => '-1',
    0 => 'الآن',
    12 => '-12',
  ),
  'query_groupby_type_dom' => 
  array (
    'Field' => 'حقل قياسي',
    'Time' => 'الفاصل الزمني',
  ),
  'query_type_dom' => 
  array (
    'Main Query' => 'الاستعلام العام',
  ),
  'quote_relationship_type_default_key' => 'Primary Decision Maker',
  'quote_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'متخذ قرار الأعمال',
    'Business Evaluator' => 'مُقيّم الأعمال',
    'Executive Sponsor' => 'الراعي التنفيذي',
    'Influencer' => 'المؤثر',
    'Other' => 'أخرى',
    'Primary Decision Maker' => 'متخذ القرار الرئيسي',
    'Technical Decision Maker' => 'متخذ القرار الفني',
    'Technical Evaluator' => 'المقيم الفني',
  ),
  'quote_stage_dom' => 
  array (
    'Closed Accepted' => 'مقبول مغلق',
    'Closed Dead' => 'خامد مغلق',
    'Closed Lost' => 'خسارة مغلقة',
    'Confirmed' => 'مؤكد',
    'Delivered' => 'مستلم',
    'Draft' => 'المسودة',
    'Negotiation' => 'التفاوض',
    'On Hold' => 'قيد التعليق',
  ),
  'quote_type_dom' => 
  array (
    'Orders' => 'الطلب',
    'Quotes' => 'عرض السعر',
  ),
  'record_type_default_key' => 'Accounts',
  'record_type_display' => 
  array (
    '' => '',
    'Accounts' => 'الحساب',
    'Bugs' => 'الخطأ',
    'Cases' => 'الحالة',
    'Contacts' => 'جهات الاتصال',
    'Leads' => 'العميل المتوقع',
    'Opportunities' => 'الفرصة',
    'Products' => 'البند المسعر',
    'Project' => 'المشروع',
    'ProjectTask' => 'مهمة المشروع',
    'Prospects' => 'الهدف',
    'Quotes' => 'عرض السعر',
    'Tasks' => 'المهمة',
  ),
  'record_type_display_notes' => 
  array (
    'Accounts' => 'الحساب',
    'Bugs' => 'الخطأ',
    'Calls' => 'المكالمة',
    'Cases' => 'الحالة',
    'Contacts' => 'جهة الاتصال',
    'Contracts' => 'العقد',
    'Emails' => 'البريد الإلكتروني',
    'Leads' => 'العميل المتوقع',
    'Meetings' => 'الاجتماع',
    'Opportunities' => 'الفرصة',
    'ProductTemplates' => 'كتالوج المنتج',
    'Products' => 'البند المسعر',
    'Project' => 'المشروع',
    'ProjectTask' => 'مهمة المشروع',
    'Prospects' => 'الهدف',
    'Quotes' => 'عرض السعر',
    'Tasks' => 'المهمة',
  ),
  'release_status_dom' => 
  array (
    'Active' => 'نشط',
    'Inactive' => 'غير نشط',
  ),
  'reminder_max_time' => '90000',
  'reminder_time_options' => 
  array (
    -1 => 'لا شيء',
    60 => 'دقيقة سابقة',
    300 => '5 دقائق سابقة',
    600 => '10 دقائق سابقة',
    900 => '15 دقيقة سابقة',
    1800 => '30 دقيقة سابقة',
    3600 => 'ساعة سابقة',
    7200 => 'ساعتان سابقتان',
    10800 => '3 ساعات سابقة',
    18000 => '5 ساعات سابقة',
    86400 => 'يوم سابق',
  ),
  'repeat_interval_number' => 
  array (
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
    6 => '6',
    7 => '7',
    8 => '8',
    9 => '9',
    10 => '10',
    11 => '11',
    12 => '12',
    13 => '13',
    14 => '14',
    15 => '15',
    16 => '16',
    17 => '17',
    18 => '18',
    19 => '19',
    20 => '20',
    21 => '21',
    22 => '22',
    23 => '23',
    24 => '24',
    25 => '25',
    26 => '26',
    27 => '27',
    28 => '28',
    29 => '29',
    30 => '30',
  ),
  'repeat_intervals' => 
  array (
    '' => '',
    'Daily' => 'يوم (أيام)',
    'Monthly' => 'شهر (شهور)',
    'Weekly' => 'أسبوع (أسابيع)',
    'Yearly' => 'سنة (سنوات)',
  ),
  'repeat_type_dom' => 
  array (
    '' => 'بلا',
    'Daily' => 'يوميًا',
    'Monthly' => 'شهريًا',
    'Weekly' => 'أسبوعيًا',
    'Yearly' => 'سنويًا',
  ),
  'report_align_dom' => 
  array (
    'center' => 'في المنتصف',
    'left' => 'على اليسار',
    'right' => 'على اليمين',
  ),
  'report_color_dom' => 
  array (
    '' => 'الافتراضي',
    'DarkGreen' => 'أخضر داكن',
    'DodgerBlue' => 'أزرق متموج',
    'LightBlue' => 'أزرق فاتح',
    'LightGray' => 'رمادي فاتح',
    'black' => 'أسود',
    'blue' => 'أزرق',
    'green' => 'أخضر',
    'red' => 'أحمر',
    'white' => 'أبيض',
  ),
  'report_maker_status_dom' => 
  array (
    'Multi Module' => 'وحدة متعددة',
    'Single Module' => 'وحدة فردية',
  ),
  'roi_type_dom' => 
  array (
    'Budget' => 'الميزانية',
    'Expected_Revenue' => 'العائد المتوقع',
    'Investment' => 'الاستثمار',
    'Revenue' => 'العائد',
  ),
  'sales_probability_dom' => 
  array (
    'Closed Lost' => '0',
    'Closed Won' => '100',
    'Id. Decision Makers' => '40',
    'Needs Analysis' => '25',
    'Negotiation/Review' => '80',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Prospecting' => '10',
    'Qualification' => '20',
    'Value Proposition' => '30',
  ),
  'sales_stage_default_key' => 'التوقع',
  'sales_stage_dom' => 
  array (
    'Closed Lost' => 'خسارة مغلقة',
    'Closed Won' => 'ربح مغلق',
    'Id. Decision Makers' => 'المعرّف. صُنَّاع القرار',
    'Needs Analysis' => 'تحتاج إلى تحليل',
    'Negotiation/Review' => 'التفاوض/المراجعة',
    'Perception Analysis' => 'تحليل الإدراك',
    'Proposal/Price Quote' => 'عرض السعر/الاقتراح',
    'Prospecting' => 'التوقع',
    'Qualification' => 'التأهل',
    'Value Proposition' => 'عرض القيمة',
  ),
  'sales_status_dom' => 
  array (
    'Closed Lost' => 'خسارة مغلقة',
    'Closed Won' => 'ربح مغلق',
    'In Progress' => 'يتقدم',
    'New' => 'جديد',
  ),
  'sales_status_with_quote_dom' => 
  array (
    'Closed Lost' => 'خسارة مغلقة',
    'Closed Won' => 'ربح مغلق',
    'Converted to Quote' => 'محول إلى عرض سعر',
    'In Progress' => 'يتقدم',
    'New' => 'جديد',
  ),
  'salutation_dom' => 
  array (
    '' => '',
    'Dr.' => 'د.',
    'Mr.' => 'السيد',
    'Mrs.' => 'السيدة',
    'Ms.' => 'الآنسة',
    'Prof.' => 'بروفيسور',
  ),
  'scheduler_period_dom' => 
  array (
    'hour' => 'ساعات',
    'min' => 'دقائق',
  ),
  'scheduler_status_dom' => 
  array (
    'Active' => 'نشط',
    'Inactive' => 'غير نشط',
  ),
  'schedulers_times_dom' => 
  array (
    'completed' => 'كامل',
    'failed' => 'فشل',
    'in progress' => 'يتقدم',
    'no curl' => 'ليس قيد التشغيل: لا يتوفر cURL',
    'not run' => 'زمن التشغيل الماضي، لم يتم التنفيذ',
    'ready' => 'جاهز',
  ),
  'source_default_key' => '',
  'source_dom' => 
  array (
    '' => '',
    'Forum' => 'منتدى',
    'InboundEmail' => 'البريد الإلكتروني',
    'Internal' => 'داخلي',
    'Twitter' => 'Twitter',
    'Web' => 'الويب',
  ),
  'state_dom' => 
  array (
    'AK' => 'ألاسكا',
    'AL' => 'ألاباما',
    'AR' => 'أركنساس',
    'AZ' => 'أريزونا',
    'CA' => 'كاليفورنيا',
    'CO' => 'كولورادو',
    'CT' => 'كونيكتيكيت',
    'DC' => 'إقليم كولومبيا',
    'DE' => 'ديلاور',
    'FL' => 'فلوريدا',
    'GA' => 'جورجيا',
    'HI' => 'هاواي',
    'IA' => 'لوا',
    'ID' => 'إيداهو',
    'IL' => 'إلينوي',
    'IN' => 'إنديانا',
    'KS' => 'كانساس',
    'KY' => 'كنتاكي',
    'LA' => 'لويزيانا',
    'MA' => 'ماساشوسيتس',
    'MD' => 'ماريلاند',
    'ME' => 'ماين',
    'MI' => 'ميتشجان',
    'MN' => 'مينوسوتا',
    'MO' => 'ميسوري',
    'MS' => 'ميسيسيبي',
    'MT' => 'مونتانا',
    'NC' => 'كارولينا الشمالية',
    'ND' => 'داكوتا الشمالية',
    'NE' => 'نبراسكا',
    'NH' => 'نيوهامبشير',
    'NJ' => 'نيوجيرسي',
    'NM' => 'نيوميكسيكو',
    'NV' => 'نيفادا',
    'NY' => 'نيويورك',
    'OH' => 'أوهايو',
    'OK' => 'أوكلاهوما',
    'OR' => 'أوريجون',
    'PA' => 'بنسلفانيا',
    'RI' => 'رود آيلاند',
    'SC' => 'كارولينا الجنوبية',
    'SD' => 'داكوتا الجنوبية',
    'TN' => 'تينيسي',
    'TX' => 'تكساس',
    'UT' => 'يوتا',
    'VA' => 'فيرجينيا ',
    'VT' => 'فيرمونت',
    'WA' => 'واشنطن',
    'WI' => 'ويسكونسين',
    'WV' => 'فيرجينيا الغربية',
    'WY' => 'وايومينج',
  ),
  'sugar7_dashlet_auto_refresh_options' => 
  array (
    0 => 'بلا',
    1 => 'كل دقيقة',
    5 => 'كل 5 دقائق',
    10 => 'كل 10 دقائق',
    15 => 'كل 15 دقيقة',
    30 => 'كل 30 دقيقة',
  ),
  'sugar7_dashlet_reports_auto_refresh_options' => 
  array (
    0 => 'بلا',
    15 => 'كل 15 دقيقة',
    30 => 'كل 30 دقيقة',
    45 => 'كل 45 دقيقة',
    60 => 'كل ساعة',
    120 => 'كل ساعتين',
  ),
  'support_term_dom' => 
  array (
    '+1 year' => 'عام واحد',
    '+2 years' => 'عامان',
    '+6 months' => 'ستة شهور',
  ),
  'task_priority_default' => 'متوسط',
  'task_priority_dom' => 
  array (
    'High' => 'عالٍ',
    'Low' => 'منخفض',
    'Medium' => 'متوسط',
  ),
  'task_status_default' => 'لم يبدأ',
  'task_status_dom' => 
  array (
    'Completed' => 'كامل',
    'Deferred' => 'مؤجل',
    'In Progress' => 'يتقدم',
    'Not Started' => 'لم يبدأ',
    'Pending Input' => 'إدخال معلق',
  ),
  'tasks_limit_options' => 
  array (
    5 => '5',
    10 => '10',
    15 => '15',
    20 => '20',
  ),
  'tasks_visibility_options' => 
  array (
    'group' => 'لا',
    'user' => 'نعم',
  ),
  'tax_class_dom' => 
  array (
    'Non-Taxable' => 'غير مستحق الضريبة',
    'Taxable' => 'مستحق الضريبة',
  ),
  'timezone_dom' => 
  array (
    'Africa/Abidjan' => 'أفريقيا/أبيدجان',
    'Africa/Accra' => 'أفريقيا/أكرا',
    'Africa/Addis_Ababa' => 'أفريقيا/أديس أبابا',
    'Africa/Algiers' => 'أفريقيا/الجزائر',
    'Africa/Asmera' => 'أفريقيا/أسمرة',
    'Africa/Bamako' => 'أفريقيا/باماكو',
    'Africa/Bangui' => 'أفريقيا/بانجوي',
    'Africa/Banjul' => 'أفريقيا/بانجول',
    'Africa/Bissau' => 'أفريقيا/بيساو',
    'Africa/Blantyre' => 'أفريقيا/بلانتير',
    'Africa/Brazzaville' => 'أفريقيا/برازافيل',
    'Africa/Bujumbura' => 'أفريقيا/بوجمبورا',
    'Africa/Cairo' => 'أفريقيا/القاهرة',
    'Africa/Casablanca' => 'أفريقيا/كازابلانكا',
    'Africa/Ceuta' => 'أفريقيا/سيوتا',
    'Africa/Conakry' => 'أفريقيا/كوناكري',
    'Africa/Dakar' => 'أفريقيا/داكار',
    'Africa/Dar_es_Salaam' => 'أفريقيا/دار السلام',
    'Africa/Djibouti' => 'أفريقيا/جيبوتي',
    'Africa/Douala' => 'أفريقيا/دوالا',
    'Africa/El_Aaiun' => 'أفريقيا/العيون',
    'Africa/Freetown' => 'أفريقيا/فريتاون',
    'Africa/Gaborone' => 'أفريقيا/جابروني',
    'Africa/Harare' => 'أفريقيا/هراري',
    'Africa/Johannesburg' => 'أفريقيا/جوهانسبرج',
    'Africa/Kampala' => 'أفريقيا/كامبالا',
    'Africa/Khartoum' => 'أفريقيا/الخرطوم',
    'Africa/Kigali' => 'أفريقيا/كيجالي',
    'Africa/Kinshasa' => 'أفريقيا/كينشاسا',
    'Africa/Lagos' => 'أفريقيا/لاجوس',
    'Africa/Libreville' => 'أفريقيا/ليبرافيل',
    'Africa/Lome' => 'أفريقيا/لومي',
    'Africa/Luanda' => 'أفريقيا/لواندا',
    'Africa/Lubumbashi' => 'أفريقيا/لوبومباشي',
    'Africa/Lusaka' => 'أفريقيا/لوساكا',
    'Africa/Malabo' => 'أفريقيا/مالابو',
    'Africa/Maputo' => 'أفريقيا/مابوتو',
    'Africa/Maseru' => 'أفريقيا/ماسيرو',
    'Africa/Mbabane' => 'أفريقيا/مبابان',
    'Africa/Mogadishu' => 'أفريقيا/مقديشيو',
    'Africa/Monrovia' => 'أفريقيا/مونروفيا',
    'Africa/Nairobi' => 'أفريقيا/نيروبي',
    'Africa/Ndjamena' => 'أفريقيا/إنجامينا',
    'Africa/Niamey' => 'أفريقيا/نيامي',
    'Africa/Nouakchott' => 'أفريقيا/نواكشوط',
    'Africa/Ouagadougou' => 'أفريقيا/واجادوجو',
    'Africa/Porto-Novo' => 'أفريقيا/بورتو نوفو',
    'Africa/Sao_Tome' => 'أفريقيا/ساوتومي',
    'Africa/Tripoli' => 'أفريقيا/طرابلس',
    'Africa/Tunis' => 'أفريقيا/تونس',
    'Africa/Windhoek' => 'أفريقيا/ويندهوك',
    'America/Adak' => 'أمريكا/أداك',
    'America/Anchorage' => 'أمريكا/أنكوراج',
    'America/Anguilla' => 'أمريكا/أنجيلا',
    'America/Antigua' => 'أمريكا/أنتيجوا',
    'America/Araguaina' => 'أمريكا/أراجوانا',
    'America/Argentina/Buenos_Aires' => 'أمريكا/الأرجنتين/بوينس آيرس',
    'America/Argentina/Catamarca' => 'أمريكا/الأرجنتين/كاتاماركا',
    'America/Argentina/Cordoba' => 'أمريكا/الأرجنتين/قرطبة',
    'America/Argentina/Jujuy' => 'أمريكا/الأرجنتين/جوجوي',
    'America/Argentina/La_Rioja' => 'أمريكا/الأرجنتين/لاريوجا',
    'America/Argentina/Mendoza' => 'أمريكا/الأرجنتين/ميندوزا',
    'America/Argentina/Rio_Gallegos' => 'أمريكا/الأرجنتين/ريوجاليجوس',
    'America/Argentina/San_Juan' => 'أمريكا/الأرجنتين/سان خوان',
    'America/Argentina/Tucuman' => 'أمريكا/الأرجنتين/توكومان',
    'America/Argentina/Ushuaia' => 'أمريكا/الأرجنتين/أوشايا',
    'America/Aruba' => 'أمريكا/أروبا',
    'America/Asuncion' => 'أمريكا/إسونسيون',
    'America/Bahia' => 'أمريكا/باهيا',
    'America/Barbados' => 'أمريكا/باربادوس',
    'America/Belem' => 'أمريكا/بيليم',
    'America/Belize' => 'أمريكا/بيليز',
    'America/Boa_Vista' => 'أمريكا/بوافيستا',
    'America/Bogota' => 'أمريكا/بوجوتا',
    'America/Boise' => 'أمريكا/بواسي',
    'America/Cambridge_Bay' => 'أمريكا/كامبريدج باي',
    'America/Campo_Grande' => 'أمريكا/كامبوجراند',
    'America/Cancun' => 'أمريكا/كانكون',
    'America/Caracas' => 'أمريكا/كاراكاس',
    'America/Cayenne' => 'أمريكا/كايان',
    'America/Cayman' => 'أمريكا/كايمان',
    'America/Chicago' => 'أمريكا/شيكاغو',
    'America/Chihuahua' => 'أمريكا/شيهواهوا',
    'America/Coral_Harbour' => 'أمريكا/كورال هاربور',
    'America/Costa_Rica' => 'أمريكا/كوستاريكا',
    'America/Cuiaba' => 'أمريكا/كيابا',
    'America/Curacao' => 'أمريكا/كوراكاو',
    'America/Danmarkshavn' => 'أمريكا/دنماركشافان',
    'America/Dawson' => 'أمريكا/داوسون',
    'America/Dawson_Creek' => 'أمريكا/داوسون كريك',
    'America/Denver' => 'أمريكا/دنفر',
    'America/Detroit' => 'أمريكا/ديترويت',
    'America/Dominica' => 'أمريكا/دومينيكا',
    'America/Edmonton' => 'أمريكا/إدمونتون',
    'America/Eirunepe' => 'أمريكا/إيرونيب',
    'America/El_Salvador' => 'أمريكا/السلفادور',
    'America/Fortaleza' => 'أمريكا/فورتاليزا',
    'America/Glace_Bay' => 'أمريكا/جلاس باي',
    'America/Godthab' => 'أمريكا/جودثاب',
    'America/Goose_Bay' => 'أمريكا/جوسي باي',
    'America/Grand_Turk' => 'أمريكا/جراند تورك',
    'America/Grenada' => 'أمريكا/جرينادا',
    'America/Guadeloupe' => 'أمريكا/جواديلوب',
    'America/Guatemala' => 'أمريكا/جواتيمالا',
    'America/Guayaquil' => 'أمريكا/جواياكيل',
    'America/Guyana' => 'أمريكا/جويانا',
    'America/Halifax' => 'أمريكا/هاليفاكس',
    'America/Havana' => 'أمريكا/هافانا',
    'America/Hermosillo' => 'أمريكا/هيرموسيلو',
    'America/Indiana/Indianapolis' => 'أمريكا/إنديانا/إنديانابوليس',
    'America/Indiana/Knox' => 'أمريكا/إنديانا/نوكس',
    'America/Indiana/Marengo' => 'أمريكا/إنديانا/مارينجو',
    'America/Indiana/Vevay' => 'أمريكا/إنديانا/نيفاي',
    'America/Inuvik' => 'أمريكا/إينوفيك',
    'America/Iqaluit' => 'أمريكا/إيكاليت',
    'America/Jamaica' => 'أمريكا/جامايكا',
    'America/Juneau' => 'أمريكا/جينوا',
    'America/Kentucky/Louisville' => 'أمريكا/كنتاكي/لويسفيل',
    'America/Kentucky/Monticello' => 'أمريكا/كنتاكي/مونتيسيلو',
    'America/La_Paz' => 'أمريكا/لاباز',
    'America/Lima' => 'أمريكا/ليما',
    'America/Los_Angeles' => 'أمريكا/لوس أنجليس',
    'America/Maceio' => 'أمريكا/ماسيو',
    'America/Managua' => 'أمريكا/ماناجوا',
    'America/Manaus' => 'أمريكا/مانوس',
    'America/Martinique' => 'أمريكا/المارتينيك',
    'America/Mazatlan' => 'أمريكا/مازاتلان',
    'America/Menominee' => 'أمريكا/مينوميني',
    'America/Merida' => 'أمريكا/ميريدا',
    'America/Mexico_City' => 'أمريكا/مكسيكوسيتي',
    'America/Miquelon' => 'أمريكا/ميكيلون',
    'America/Monterrey' => 'أمريكا/مونتيري',
    'America/Montevideo' => 'أمريكا/مونتفيديو',
    'America/Montreal' => 'أمريكا/مونتريال',
    'America/Montserrat' => 'أمريكا/مونتسيرات',
    'America/Nassau' => 'أمريكا/ناساو',
    'America/New_York' => 'أمريكا/نيويورك',
    'America/Nipigon' => 'أمريكا/نيبيجون',
    'America/Nome' => 'أمريكا/نومي',
    'America/Noronha' => 'أمريكا/نورونا',
    'America/North_Dakota/Center' => 'أمريكا/داكوتا الشمالية/الأوسط',
    'America/Panama' => 'أمريكا/بنما',
    'America/Pangnirtung' => 'أمريكا/بانجنيرتونج',
    'America/Paramaribo' => 'أمريكا/باراماريبو',
    'America/Phoenix' => 'أمريكا/فونيكس',
    'America/Port-au-Prince' => 'أمريكا/بورت أو برنس',
    'America/Port_of_Spain' => 'أمريكا/بورت إسبانيا',
    'America/Porto_Velho' => 'أمريكا/بورتوفيلو',
    'America/Puerto_Rico' => 'أمريكا/بورتوريكو',
    'America/Rainy_River' => 'أمريكا/راني ريفير',
    'America/Rankin_Inlet' => 'أمريكا/رانكن إنليت',
    'America/Recife' => 'أمريكا/ريسيفي',
    'America/Regina' => 'أمريكا/ريجينا',
    'America/Rio_Branco' => 'أمريكا/ريوبرانكو',
    'America/Santiago' => 'أمريكا/سانتياجو',
    'America/Santo_Domingo' => 'أمريكا/سانتو دومينجو',
    'America/Sao_Paulo' => 'أمريكا/ساوباولو',
    'America/Scoresbysund' => 'أمريكا/سكورسبيسند',
    'America/St_Johns' => 'أمريكا/سانت جون',
    'America/St_Kitts' => 'أمريكا/سانت كيتس',
    'America/St_Lucia' => 'أمريكا/سانت لوتشيا',
    'America/St_Thomas' => 'أمريكا/سانت توماس',
    'America/St_Vincent' => 'أمريكا/سانت فينسنت',
    'America/Swift_Current' => 'أمريكا/سويفت كارينت',
    'America/Tegucigalpa' => 'أمريكا/تيجوسيجالبا',
    'America/Thule' => 'أمريكا/ثولي',
    'America/Thunder_Bay' => 'أمريكا/ثاندر باي',
    'America/Tijuana' => 'أمريكا/تيجوانا',
    'America/Toronto' => 'أمريكا/تورونتو',
    'America/Tortola' => 'أمريكا/تورتولا',
    'America/Vancouver' => 'أمريكا/فانكوفر',
    'America/Whitehorse' => 'أمريكا/وايتهورس',
    'America/Winnipeg' => 'أمريكا/وينيبيج',
    'America/Yakutat' => 'أمريكا/ياكوتات',
    'America/Yellowknife' => 'أمريكا/يلونايف',
    'Antarctica/Casey' => 'أنتاركتيكا/كاسي',
    'Antarctica/Davis' => 'أنتاركتيكا/دافيس',
    'Antarctica/DumontDUrville' => 'أنتاركتيكا/دومنت دورفيل',
    'Antarctica/Mawson' => 'أنتاركتيكا/ماوسون',
    'Antarctica/McMurdo' => 'أنتاركتيكا/مكموردو',
    'Antarctica/Palmer' => 'أنتاركتيكا/بالمر',
    'Antarctica/Rothera' => 'أنتاركتيكا/روثيرا',
    'Antarctica/Syowa' => 'أنتاركتيكا/سيوا',
    'Antarctica/Vostok' => 'أنتاركتيكا/فوستوك',
    'Asia/Aden' => 'آسيا/عدن',
    'Asia/Almaty' => 'آسيا/المآتي',
    'Asia/Amman' => 'آسيا/عمان',
    'Asia/Anadyr' => 'آسيا/أنديار',
    'Asia/Aqtau' => 'آسيا/أكتا',
    'Asia/Aqtobe' => 'آسيا/أكتوب',
    'Asia/Ashgabat' => 'آسيا/عشق أباد',
    'Asia/Baghdad' => 'آسيا/بغداد',
    'Asia/Bahrain' => 'آسيا/البحرين',
    'Asia/Baku' => 'آسيا/باكو',
    'Asia/Bangkok' => 'آسيا/بانكوك',
    'Asia/Beijing' => 'آسيا/بكين',
    'Asia/Beirut' => 'آسيا/بيروت',
    'Asia/Bishkek' => 'آسيا/بيشكيك',
    'Asia/Brunei' => 'آسيا/بروناي',
    'Asia/Calcutta' => 'آسيا/كالكتا',
    'Asia/Choibalsan' => 'آسيا/شويبالسان',
    'Asia/Chongqing' => 'آسيا/شونج جونج',
    'Asia/Colombo' => 'آسيا/كولومبو',
    'Asia/Damascus' => 'آسيا/دمشق',
    'Asia/Dhaka' => 'آسيا/دكا',
    'Asia/Dili' => 'آسيا/ديلهي',
    'Asia/Dubai' => 'آسيا/دبي',
    'Asia/Dushanbe' => 'آسيا/دوشانبي',
    'Asia/Gaza' => 'آسيا/غزة',
    'Asia/Harbin' => 'آسيا/هاربين',
    'Asia/Hong_Kong' => 'آسيا/هونج كونج',
    'Asia/Hovd' => 'آسيا/هوفد',
    'Asia/Irkutsk' => 'آسيا/إيركوتسك',
    'Asia/Jakarta' => 'آسيا/جاكرتا',
    'Asia/Jayapura' => 'آسيا/جيبورا',
    'Asia/Jerusalem' => 'آسيا/القدس',
    'Asia/Kabul' => 'آسيا/كابول',
    'Asia/Kamchatka' => 'آسيا/كامشتكا',
    'Asia/Karachi' => 'آسيا/كراتشي',
    'Asia/Kashgar' => 'آسيا/كاشجار',
    'Asia/Katmandu' => 'آسيا/كاتماندو',
    'Asia/Krasnoyarsk' => 'آسيا/كراسنويارسك',
    'Asia/Kuala_Lumpur' => 'آسيا/كوالالمبور',
    'Asia/Kuching' => 'آسيا/كوشينج',
    'Asia/Kuwait' => 'آسيا/الكويت',
    'Asia/Macau' => 'آسيا/ماكاو',
    'Asia/Magadan' => 'آسيا/ماجادان',
    'Asia/Makassar' => 'آسيا/ماكاسار',
    'Asia/Manila' => 'آسيا/مانيلا',
    'Asia/Muscat' => 'آسيا/مسقط',
    'Asia/Nicosia' => 'آسيا/نيقوسيا',
    'Asia/Novosibirsk' => 'آسيا/نوفوسيبرسك',
    'Asia/Omsk' => 'آسيا/أومسك',
    'Asia/Oral' => 'آسيا/أورال',
    'Asia/Phnom_Penh' => 'آسيا/بنوم بنه',
    'Asia/Pontianak' => 'آسيا/بونتيناك',
    'Asia/Pyongyang' => 'آسيا/بيونج يانج',
    'Asia/Qatar' => 'آسيا/قطر',
    'Asia/Qyzylorda' => 'آسيا/قيزيلوردا',
    'Asia/Rangoon' => 'آسيا/رانجون',
    'Asia/Riyadh' => 'آسيا/الرياض',
    'Asia/Saigon' => 'آسيا/سايجون',
    'Asia/Sakhalin' => 'آسيا/ساخالين',
    'Asia/Samarkand' => 'آسيا/سمرقند',
    'Asia/Seoul' => 'آسيا/سيول',
    'Asia/Shanghai' => 'آسيا/شنغهاي',
    'Asia/Singapore' => 'آسيا/سنغافورا',
    'Asia/Taipei' => 'آسيا/تايبي',
    'Asia/Tashkent' => 'آسيا/طشقند',
    'Asia/Tbilisi' => 'آسيا/تبليسي',
    'Asia/Tehran' => 'آسيا/طهران',
    'Asia/Thimphu' => 'آسيا/ثيمفو',
    'Asia/Tokyo' => 'آسيا/طوكيو',
    'Asia/Ulaanbaatar' => 'آسيا/أولان باتار',
    'Asia/Urumqi' => 'آسيا/أورومكي',
    'Asia/Vientiane' => 'آسيا/فينتيان',
    'Asia/Vladivostok' => 'آسيا/فلاديفوستوك',
    'Asia/Yakutsk' => 'آسيا/ياكوتسك',
    'Asia/Yekaterinburg' => 'آسيا/يكاتيرنبرج',
    'Asia/Yerevan' => 'آسيا/يريفان',
    'Atlantic/Azores' => 'المحيط الأطلنطي/أزوريس',
    'Atlantic/Bermuda' => 'أمريكا/بيرمودا',
    'Atlantic/Canary' => 'المحيط الأطلنطي/كاناري',
    'Atlantic/Cape_Verde' => 'المحيط الأطلنطي/كيب فيردي',
    'Atlantic/Faeroe' => 'المحيط الأطلنطي/فارو',
    'Atlantic/Madeira' => 'أتلانتيك/ماديرا',
    'Atlantic/Reykjavik' => 'أتلانتك/ريكيافيك',
    'Atlantic/South_Georgia' => 'المحيط الأطلنطي/جورجيا الجنوبية',
    'Atlantic/St_Helena' => 'أفريقيا/سانت هيلينا',
    'Atlantic/Stanley' => 'المحيط الأطلنطي/ستانلي',
    'Australia/Adelaide' => 'أستراليا/أديلايد',
    'Australia/Brisbane' => 'أستراليا/بريسبان',
    'Australia/Broken_Hill' => 'أستراليا/بروكين هيل',
    'Australia/Currie' => 'أستراليا/كوري',
    'Australia/Darwin' => 'أستراليا/داروين',
    'Australia/Hobart' => 'أستراليا/هوبارت',
    'Australia/Lindeman' => 'أستراليا/ليندمان',
    'Australia/Melbourne' => 'أستراليا/مالبورن',
    'Australia/Perth' => 'أستراليا/بيرث',
    'Australia/Sydney' => 'أستراليا/سيدني',
    'CET' => 'CET',
    'EET' => 'EET',
    'Europe/Amsterdam' => 'أوروبا/أمستردام',
    'Europe/Andorra' => 'أوروبا/أندورا',
    'Europe/Athens' => 'أوروبا/أثينا',
    'Europe/Belgrade' => 'أوروبا/بلجراد',
    'Europe/Berlin' => 'أوروبا/برلين',
    'Europe/Brussels' => 'أوروبا/بروكسل',
    'Europe/Bucharest' => 'أوروبا/بوخارست',
    'Europe/Budapest' => 'أوروبا/بودابست',
    'Europe/Chisinau' => 'أوروبا/شيزيناو',
    'Europe/Copenhagen' => 'أوروبا/كوبنهاجن',
    'Europe/Dublin' => 'أوروبا/دبلن',
    'Europe/Gibraltar' => 'أوروبا/جبل طارق',
    'Europe/Helsinki' => 'أوروبا/هيلسنكي',
    'Europe/Istanbul' => 'أوروبا/إسطنبول',
    'Europe/Kaliningrad' => 'أوروبا/كالينيجراد',
    'Europe/Kiev' => 'أوروبا/كييف',
    'Europe/Lisbon' => 'أوروبا/لشبونة',
    'Europe/London' => 'أوروبا/لندن',
    'Europe/Luxembourg' => 'أوروبا/لوكسمبورج',
    'Europe/Madrid' => 'أوروبا/مدريد',
    'Europe/Malta' => 'أوروبا/مالطا',
    'Europe/Minsk' => 'أوروبا/مينسك',
    'Europe/Monaco' => 'أوروبا/موناكو',
    'Europe/Moscow' => 'أوروبا/موسكو',
    'Europe/Oslo' => 'أوروبا/أوسلو',
    'Europe/Paris' => 'أوروبا/باريس',
    'Europe/Prague' => 'أوروبا/براغ',
    'Europe/Riga' => 'أوروبا/ريجا',
    'Europe/Rome' => 'أوروبا/روما',
    'Europe/Samara' => 'أوروبا/سامارا',
    'Europe/Simferopol' => 'أوروبا/سيمفروبول',
    'Europe/Sofia' => 'أوروبا/صوفيا',
    'Europe/Stockholm' => 'أوروبا/ستوكهولم',
    'Europe/Tallinn' => 'أوروبا/تالين',
    'Europe/Tirane' => 'أوروبا/تيرانا',
    'Europe/Uzhgorod' => 'أوروبا/زوجورود',
    'Europe/Vaduz' => 'أوروبا/فادوز',
    'Europe/Vienna' => 'أوروبا/فيينا',
    'Europe/Vilnius' => 'أوروبا/فيلنيوس',
    'Europe/Warsaw' => 'أوروبا/وارسو',
    'Europe/Zaporozhye' => 'أوروبا/زابوروزي',
    'Europe/Zurich' => 'أوروبا/زيوريخ',
    'Indian/Antananarivo' => 'أفريقيا/تناناريفو',
    'Indian/Chagos' => 'آسيا/شاجوس',
    'Indian/Christmas' => 'المحيط الهندي/كريسماس',
    'Indian/Cocos' => 'المحيط الهندي/كوكوس',
    'Indian/Comoro' => 'أفريقيا/القمر',
    'Indian/Kerguelen' => 'المحيط الهندي/كيرجولين',
    'Indian/Mahe' => 'المحيط الهندي/ماهي',
    'Indian/Maldives' => 'آسيا/المالديف',
    'Indian/Mauritius' => 'أفريقيا/موريشيوس',
    'Indian/Mayotte' => 'أفريقيا/مايوت',
    'Indian/Reunion' => 'أفريقيا/ريونيون',
    'MET' => 'MET',
    'Pacific/Apia' => 'المحيط الهادي/أبيا',
    'Pacific/Auckland' => 'المحيط الهادي/أوكلاند',
    'Pacific/Chatham' => 'المحيط الهادي/شاثام',
    'Pacific/Easter' => 'المحيط الهادي/إيستر',
    'Pacific/Efate' => 'المحيط الهادي/إيفات',
    'Pacific/Enderbury' => 'المحيط الهادي/إينديربوري',
    'Pacific/Fakaofo' => 'المحيط الهادي/فاكاوفو',
    'Pacific/Fiji' => 'المحيط الهادي/فيجي',
    'Pacific/Funafuti' => 'المحيط الهادي/فونافوتي',
    'Pacific/Galapagos' => 'المحيط الهادي/جالاباجوس',
    'Pacific/Gambier' => 'المحيط الهادي/جامبير',
    'Pacific/Guadalcanal' => 'المحيط الهادي/جوادالكانال',
    'Pacific/Guam' => 'المحيط الهادي/جوام',
    'Pacific/Honolulu' => 'المحيط الهادي/هونولولو',
    'Pacific/Johnston' => 'المحيط الهادي/جونستون',
    'Pacific/Kiritimati' => 'المحيط الهادي/كيريتماتي',
    'Pacific/Kosrae' => 'المحيط الهادي/كوسرا',
    'Pacific/Kwajalein' => 'المحيط الهادي/واجالاين',
    'Pacific/Majuro' => 'المحيط الهادي/ماجورو',
    'Pacific/Marquesas' => 'المحيط الهادي/ماركيساس',
    'Pacific/Midway' => 'المحيط الهادي/ميدواي',
    'Pacific/Nauru' => 'المحيط الهادي/ناورو',
    'Pacific/Niue' => 'المحيط الهادي/نيو',
    'Pacific/Norfolk' => 'المحيط الهادي/نورفولك',
    'Pacific/Noumea' => 'المحيط الهادي/نوميا',
    'Pacific/Pago_Pago' => 'المحيط الهادي/باجو باجو',
    'Pacific/Palau' => 'المحيط الهادي/بالاو',
    'Pacific/Pitcairn' => 'المحيط الهادي/بيتكايرن',
    'Pacific/Ponape' => 'المحيط الهادي/بونابي',
    'Pacific/Port_Moresby' => 'المحيط الهادي/بورت موريسبي',
    'Pacific/Rarotonga' => 'المحيط الهادي/راروتونجا',
    'Pacific/Saipan' => 'المحيط الهادي/سايبان',
    'Pacific/Tahiti' => 'المحيط الهادي/تاهيتي',
    'Pacific/Tarawa' => 'المحيط الهادي/تاراوا',
    'Pacific/Tongatapu' => 'المحيط الهادي/تونجاتابو',
    'Pacific/Truk' => 'المحيط الهادي/تروك',
    'Pacific/Wake' => 'المحيط الهادي/واك',
    'Pacific/Wallis' => 'المحيط الهادي/واليز',
    'WET' => 'WET',
  ),
  'token_status' => 
  array (
    1 => 'طلب',
    2 => 'الدخول',
    3 => 'غير صالح',
  ),
  'top10_opportunities_duration_options' => 
  array (
    0 => 'ربع السنة الحالي',
    3 => 'ربع السنة القادم',
    12 => 'هذا العام',
  ),
  'top10_opportunities_visibility_options' => 
  array (
    'group' => '',
    'user' => '',
  ),
  'tselect_type_dom' => 
  array (
    0 => '0 ساعة',
    14440 => '4 ساعات',
    28800 => '8 ساعات',
    43200 => '12 ساعة',
    86400 => 'يوم واحد',
    172800 => 'يومان',
    259200 => '3 أيام',
    345600 => '4 أيام',
    432000 => '5 أيام',
    604800 => 'أسبوع واحد',
    1209600 => 'أسبوعان',
    1814400 => '3 أسابيع',
    2592000 => '30 يومًا',
    5184000 => '60 يومًا',
    7776000 => '90 يومًا',
    10368000 => '120 يومًا',
    12960000 => '150 يومًا',
    15552000 => '180 يومًا',
  ),
  'user_status_dom' => 
  array (
    'Active' => 'نشط',
    'Inactive' => 'غير نشط',
  ),
  'user_type_dom' => 
  array (
    'Administrator' => 'المسؤول',
    'RegularUser' => 'مستخدم عادي',
  ),
  'webLogicHookList' => 
  array (
    'after_delete' => 'بعد الحذف',
    'after_login' => 'بعد تسجيل الدخول',
    'after_login_failed' => 'بعد فشل تسجيل الدخول',
    'after_logout' => 'بعد تسجيل الخروج',
    'after_relationship_add' => 'بعد إضافة علاقة',
    'after_relationship_delete' => 'بعد حذف علاقة',
    'after_save' => 'بعد الحفظ',
  ),
  'web_hook_request_method_list' => 
  array (
    'DELETE' => 'حذف',
    'GET' => 'GET',
    'POST' => 'POST',
    'PUT' => 'PUT',
  ),
  'wflow_action_datetime_type_dom' => 
  array (
    'Existing Value' => 'القيمة الحالية',
    'Triggered Date' => 'تاريخ التشغيل',
  ),
  'wflow_action_type_dom' => 
  array (
    'new' => 'سجل جديد',
    'update' => 'سجل محدث',
    'update_rel' => 'سجل محدث ذو صلة',
  ),
  'wflow_address_type_dom' => 
  array (
    'bcc' => 'نسخة مخفية:',
    'cc' => 'نسخة:',
    'to' => 'إلى:',
  ),
  'wflow_address_type_invite_dom' => 
  array (
    'bcc' => 'نسخة مخفية:',
    'cc' => 'نسخة:',
    'invite_only' => '(الدعوة فقط)',
    'to' => 'إلى:',
  ),
  'wflow_address_type_to_only_dom' => 
  array (
    'to' => 'إلى:',
  ),
  'wflow_adv_enum_type_dom' => 
  array (
    'advance' => 'التنقل للأسفل وللأمام بواسطة',
    'retreat' => 'التنقل لأسفل وللخلف بواسطة',
  ),
  'wflow_adv_team_type_dom' => 
  array (
    'current_team' => 'فريق المستخدم المسجل الدخول',
    'team_id' => 'الفريق الحالي للسجل الذي تم تشغيله',
  ),
  'wflow_adv_user_type_dom' => 
  array (
    'assigned_user_id' => 'المستخدم معيَّن للسجل الذي تم تشغيله',
    'created_by' => 'المستخدم الذي قام بإنشاء السجل الذي تم تشغيله',
    'current_user' => 'المستخدم المسجل الدخول',
    'modified_user_id' => 'آخر مستخدم قام بتعديل السجل الذي تم تشغيله',
  ),
  'wflow_alert_type_dom' => 
  array (
    'Email' => 'البريد الإلكتروني',
    'Invite' => 'دعوة',
  ),
  'wflow_array_type_dom' => 
  array (
    'future' => 'قيمة جديدة',
    'past' => 'قيمة قديمة',
  ),
  'wflow_fire_order_dom' => 
  array (
    'actions_alerts' => 'الإجراءات ثم التنبيهات',
    'alerts_actions' => 'التنبيهات ثم الإجراءات',
  ),
  'wflow_record_type_dom' => 
  array (
    'All' => 'السجلات القديمة والمحدثة',
    'New' => 'السجلات الجديدة فقط',
    'Update' => 'السجلات المحدثة فقط',
  ),
  'wflow_rel_type_dom' => 
  array (
    'all' => 'كل ما له صلة',
    'filter' => 'عامل التصفية ذو الصلة',
  ),
  'wflow_relate_type_dom' => 
  array (
    'Manager' => 'إدارة المستخدم',
    'Self' => 'المستخدم',
  ),
  'wflow_relfilter_type_dom' => 
  array (
    'all' => 'كل ما له صلة',
    'any' => 'ما ليس ذا صلة',
  ),
  'wflow_set_type_dom' => 
  array (
    'Advanced' => 'الخيارات المتقدمة',
    'Basic' => 'الخيارات الأساسية',
  ),
  'wflow_source_type_dom' => 
  array (
    'Custom Template' => 'قالب مخصص',
    'Normal Message' => 'رسالة عادية',
    'System Default' => 'إعداد افتراضي للنظام',
  ),
  'wflow_type_dom' => 
  array (
    'Normal' => 'عند حفظ السجل',
    'Time' => 'بعد انقضاء الوقت',
  ),
  'wflow_user_type_dom' => 
  array (
    'current_user' => 'المستخدمون الحاليون',
    'rel_user' => 'المستخدمون ذوو الصلة',
    'rel_user_custom' => 'المستخدم المخصص ذو الصلة',
    'specific_role' => 'الدور المحدد',
    'specific_team' => 'الفريق المحدد',
    'specific_user' => 'المستخدم المحدد',
  ),
  'width_type_dom' => 
  array (
    '%' => 'بنسبة (%)',
    'px' => 'البكسل (px)',
  ),
);

