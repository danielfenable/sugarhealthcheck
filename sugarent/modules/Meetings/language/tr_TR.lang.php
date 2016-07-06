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
  'ERR_DELETE_RECORD' => 'Toplantının silinebilmesi için bir kayıt numarası belirtilmelidir.',
  'LBL_ACCEPT_LINK' => 'Bağlantıyı Kabul et',
  'LBL_ACCEPT_STATUS' => 'Kabul Durumu',
  'LBL_ACCEPT_THIS' => 'Kabul?',
  'LBL_ACCOUNT_NAME' => 'Müşteri',
  'LBL_ACTIVITIES_REPORTS' => 'Aktiviteler Raporu',
  'LBL_ADD_BUTTON' => 'Ekle',
  'LBL_ADD_INVITEE' => 'Davetlileri Ekle',
  'LBL_ASSIGNED_TO_NAME' => 'Atanan Kişi:',
  'LBL_CANCEL_CREATE_INVITEE' => 'İptal',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Tüm tekrarlanan kayıtları silmek istediğinizden emin misiniz?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaklar',
  'LBL_CONTACT_NAME' => 'Kontak:',
  'LBL_CREATED_BY' => 'Oluşturan',
  'LBL_CREATED_USER' => 'Oluşturan Kullanıcı',
  'LBL_CREATE_AND_ADD' => 'Oluştur & Ekle',
  'LBL_CREATE_CONTACT' => 'Kontak olarak',
  'LBL_CREATE_INVITEE' => 'Davetli oluştur',
  'LBL_CREATE_LEAD' => 'Potansiyel olarak',
  'LBL_CREATE_MODULE' => 'Toplantı Planla',
  'LBL_CREATOR' => 'Toplantı Oluşturan Kişi',
  'LBL_DATE' => 'Başlangıç Tarihi:',
  'LBL_DATE_END' => 'Bitiş Tarihi',
  'LBL_DATE_END_ERROR' => 'Bitiş Tarihi, Başlangıç Tarihinden önce',
  'LBL_DATE_TIME' => 'Başlangıç Tarih & Saati:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Toplantılar',
  'LBL_DEL' => 'Sil',
  'LBL_DESCRIPTION' => 'Tanım:',
  'LBL_DESCRIPTION_INFORMATION' => 'Tanım Bilgisi',
  'LBL_DIRECTION' => 'Yön:',
  'LBL_DISPLAYED_URL' => 'URL Göster',
  'LBL_DURATION' => 'Süre:',
  'LBL_DURATION_HOURS' => 'Süre (Saat):',
  'LBL_DURATION_MINUTES' => 'Süre (Dakika):',
  'LBL_EDIT_ALL_RECURRENCES' => 'Bütün Çift Kayıtları Değiştir',
  'LBL_EMAIL' => 'E-Posta',
  'LBL_EMAIL_REMINDER' => 'E-Posta Hatırlatıcı',
  'LBL_EMAIL_REMINDER_SENT' => 'Hatırlatma mesajı gönderildi',
  'LBL_EMAIL_REMINDER_TIME' => 'E-Posta Hatırlatma Zamanı',
  'LBL_EMPTY_SEARCH_RESULT' => 'Üzgünüm, sonuç bulunamadı. Aşağıda bir davetli oluşturun.',
  'LBL_ERROR_LAUNCH_MEETING_GENERAL' => 'Bu toplantının başlamasında bir hata oluştu. Lütfen Sistem Yönetiniz ile temasa geçin.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Atanmış Kullanıcı ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Atanmış Kullanıcı İsmi',
  'LBL_EXPORT_CREATED_BY' => 'Oluşturan ID',
  'LBL_EXPORT_DATE_END' => 'Bitiş Tarihi ve Saati',
  'LBL_EXPORT_DATE_START' => 'Başlangıç Tarihi ve Zamanı',
  'LBL_EXPORT_DISPLAYED_URL' => 'Gösterilen URL',
  'LBL_EXPORT_EXTERNAL_ID' => 'Harici ID',
  'LBL_EXPORT_HOST_URL' => 'Sunucu Url',
  'LBL_EXPORT_JOIN_URL' => 'Katılma URL adresi',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Değiştiren ID',
  'LBL_EXPORT_PARENT_ID' => 'Üst ID',
  'LBL_EXPORT_PARENT_TYPE' => 'İlişkili Tipi',
  'LBL_EXPORT_REMINDER_TIME' => 'Hatırlatma Süresi (dakika)',
  'LBL_EXTERNALID' => 'Harici Uyg. ID',
  'LBL_EXTNOSTART_HEADER' => 'Hata: Toplantı Başlatılamıyor',
  'LBL_EXTNOSTART_MAIN' => 'Yönetici veya toplantının düzenleyicisi olmadığınızdan toplantıyı başlatamazsınız.',
  'LBL_EXTNOT_GO_BACK' => 'Önceki kayda geri dön',
  'LBL_EXTNOT_HEADER' => 'Hata: Davetli değil',
  'LBL_EXTNOT_MAIN' => 'Davetli olmadığınız için toplantıya katılamazsınız.',
  'LBL_EXTNOT_RECORD_LINK' => 'Toplantıyı Görüntüle',
  'LBL_FIRST_NAME' => 'İsim',
  'LBL_HELP_CREATE' => '{{plural_module_name}} modülü, organizasyonunuzdaki kullanıcıların oluşturduğu {{meetings_module}} kayıtlarından oluşur. {{plural_module_name}}, "Planlanan", "Yapıldı" veya "İptal" durumunda olabilir. Sugar kullanıcıları ile {{contacts_module}} ve {{leads_module}} davetli olarak eklenebilir.

{{meetings_singular_module}} oluşturmak için:
1. Alanlar için istediğiniz şekilde değerleri girin
    - "Zorunlu" olarak işaretlenen kayıtların, kaydetmeden önce girilmesi gereklidir.
    - Gerekiyorsa ""Daha Fazlası"" seçeneği ile, ek alanların görüntülenmesini sağlayın.
2. Davetlileri, {{meetings_singular_module}} için ekleyin.
    - "Katılımcı Seçin" ile mevcut kullanıcı, kontak, potansiyel {{meetings_singular_module}} için dahil edilebilir.
    - "Katılımcı Seçin" seçeneğinin yanındaki artı işaretine tıklayarak yeni bir {{meetings_singular_module}} katılımcısını Sugar kaydı olarak ekleyin.
3. "Kaydet" tuşuna basarak yeni kaydı sona erdirin ve önceki sayfaya dönün.
    - "Kaydet ve görüntüle" ile yeni toplantı kaydı açın.
    - "Kaydet ve yeni oluştur" ile hemen farklı bir yeni {{meetings_singular_module}} kaydı oluşturun.',
  'LBL_HELP_RECORD' => '{{plural_module_name}} modülü, organizasyonunuzdaki kullanıcıların oluşturduğu {{meetings_module}} kayıtlarından oluşur. {{plural_module_name}}, "Planlanan", "Yapıldı" veya "İptal" durumunda olabilir. Sugar kullanıcıları ile {{contacts_module}} ve {{leads_module}} davetli olarak eklenebilir.

- Kaydın alanlarını bir alana tıklayarak veya Değiştir tuşuna basarak değiştirin.
- Sol altta yer alan tuşu "Veri Görüntüle" değerine çevirerek, diğer kayıtlara olan bağlantıları görün veya değiştirin.
- Sol altta yer alan tuşu "Aktivite Akışı" değerine değiştirerek, kullanıcı yorumlarını ve kayıt değişiklik tarihçesini görün veya ekleyin.
- Kaydın sağındaki ikona tıklayarak kaydı izlemeye alın veya favori olarak işaretleyin.
- Değiştir tuşunun sağındaki açılır Aksiyonlar menüsü içinde ek aksiyonlar yer almaktadır.',
  'LBL_HELP_RECORDS' => '{{plural_module_name}} modülü, organizasyonunuzdaki kullanıcıların oluşturduğu toplantı kayıtlarından oluşur ve "Planlanan", "Yapıldı" veya "İptal" durumunda olabilir. Önümüzdeki 24 saat içinde başlayacak olan toplantıların başlangıç tarihi mavi ile gösterilir. Geçmiş toplantılar için başlangıç değeri kırmızı renktedir.

{{plural_module_name}} liste görünümünden, toplantı bilgisini görebilir veya hemen değiştirebilirsiniz. Ek aksiyonlar, her menü satırının sonundaki menü ile mümkün olmaktadır. Menü içinden "Kapat" seçerek, herhangi bir toplantıyı yapıldı olarak işaretleyebilirsiniz.

Sugar kullanıcıları, kontaklar ve potansiyeller, toplantı davetlisi olarak eklenebilir. {{plural_module_name}}, {{plural_module_name}} modülü ile, Takvim modülü ile, içeri yüklemeyle, Aktiviteler alt paneli ile (Eski modüller için) veya ilgili modül kaydı üzerindeyken Planlanan Aktiviteler penceresi ile (Yan menü modülleri için)  - her iki kayıt arasında otomatik olarak ilişki oluşturacaktır.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notlar',
  'LBL_HOST_EXT_MEETING' => 'Toplantıyı Başlat',
  'LBL_HOST_URL' => 'Sunucu URL',
  'LBL_HOURS_ABBREV' => 's',
  'LBL_HOURS_MINS' => '(saat/dakika)',
  'LBL_INVITEE' => 'Davetliler',
  'LBL_JOIN_EXT_MEETING' => 'Toplantıya Katıl',
  'LBL_JOIN_MEETING' => 'Katıl: {{meetingType}}',
  'LBL_LAST_NAME' => 'Soyisim',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potansiyeller',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanan Kullanıcı',
  'LBL_LIST_CLOSE' => 'Kapat',
  'LBL_LIST_CONTACT' => 'Kontak',
  'LBL_LIST_DATE' => 'Başlangıç Tarihi',
  'LBL_LIST_DATE_MODIFIED' => 'Değiştirilme Tarihi',
  'LBL_LIST_DIRECTION' => 'Yön',
  'LBL_LIST_DUE_DATE' => 'Son Bitirme Tarihi',
  'LBL_LIST_FORM_TITLE' => 'Toplantı Listesi',
  'LBL_LIST_JOIN_MEETING' => 'Toplantıya Katıl',
  'LBL_LIST_MY_MEETINGS' => 'Toplantılarım',
  'LBL_LIST_RELATED_TO' => 'İlişkili',
  'LBL_LIST_STATUS' => 'Durum',
  'LBL_LIST_SUBJECT' => 'Konu',
  'LBL_LIST_TIME' => 'Başlangıç Saati',
  'LBL_LOCATION' => 'Yer:',
  'LBL_MEETING' => 'Toplantı:',
  'LBL_MEETING_CLOSE_SUCCESS' => 'Toplantı başarıyla kapatıldı.',
  'LBL_MEETING_INFORMATION' => 'Genel Bilgi',
  'LBL_MINSS_ABBREV' => 'd',
  'LBL_MODIFIED_BY' => 'Değiştiren',
  'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
  'LBL_MODULE_NAME' => 'Toplantılar',
  'LBL_MODULE_NAME_SINGULAR' => 'Toplantı',
  'LBL_MODULE_TITLE' => 'Toplantılar: Ana Sayfa',
  'LBL_MY_SCHEDULED_MEETINGS' => 'Benim Planlanan Toplantılarım',
  'LBL_NAME' => 'İsim',
  'LBL_NEW_FORM_TITLE' => 'Randevu Oluştur',
  'LBL_NO_ACCESS' => '$module modülünü oluşturmak için erişim yetkiniz yok',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Üst ID',
  'LBL_PARENT_TYPE' => 'Üst Kayıt Tipi',
  'LBL_PASSWORD' => 'Toplantı Şifresi',
  'LBL_PHONE' => 'Ofis Telefonu:',
  'LBL_POPUP_REMINDER' => 'Açılır Pencere Hatırlatması',
  'LBL_POPUP_REMINDER_TIME' => 'Açılır Liste Hatırlatma Zamanı',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => '{{moduleSingularLower}}, {{formatDate date_start}} için planladınız ancak erişim hakkınız bulunmuyor.',
  'LBL_RECORD_SAVED_SUCCESS' => '{{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> , {{formatDate date_start}} için planladınız.',
  'LBL_RECURRENCE' => 'Tekrar',
  'LBL_RECURRING_LIMIT_ERROR' => '$limit izin verilen maksimum tekrar sayısını aştığından bu tekrarlayan toplantı planlanmış olamaz.',
  'LBL_RECURRING_SOURCE' => 'Tekrarlanan Kaynak',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => '{{{this}}} ile buluştu',
  'LBL_RELATED_TO' => 'İlişkili:',
  'LBL_REMINDER' => 'Hatırlatıcı:',
  'LBL_REMINDER_EMAIL' => 'E-Posta',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Tüm davetlilerin e-postası',
  'LBL_REMINDER_POPUP' => 'Ekran',
  'LBL_REMINDER_TIME' => 'Hatırlatma Saati',
  'LBL_REMINDER_TITLE' => 'Toplantı:',
  'LBL_REMOVE' => 'sil',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Bütün Tekrarları Sil',
  'LBL_REPEAT_COUNT' => 'Tekrar Sayısı',
  'LBL_REPEAT_DOW' => 'Haftanın Günleri',
  'LBL_REPEAT_END' => 'Son',
  'LBL_REPEAT_END_AFTER' => 'Sonra',
  'LBL_REPEAT_END_BY' => 'Son tarih',
  'LBL_REPEAT_INTERVAL' => 'Tekrarlama Aralığı',
  'LBL_REPEAT_OCCURRENCES' => 'tekrar',
  'LBL_REPEAT_PARENT_ID' => 'Tekrar Eden Üst ID',
  'LBL_REPEAT_TYPE' => 'Tekrarlama Türü',
  'LBL_REPEAT_UNTIL' => 'Tekrar Limiti:',
  'LBL_REVENUELINEITEMS' => 'Gelir Kalemleri',
  'LBL_SCHEDULING_FORM_TITLE' => 'Planlanıyor',
  'LBL_SEARCH_BUTTON' => 'Ara',
  'LBL_SEARCH_FORM_TITLE' => 'Toplantı Arama',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Kaydet & Davet Gönder',
  'LBL_SEND_BUTTON_TITLE' => 'Kaydet & Davet Gönder',
  'LBL_SEND_INVITES' => 'Davetiyeleri Gönder',
  'LBL_SEQUENCE' => 'Toplantı Güncelleştirme Sırası',
  'LBL_START_MEETING' => 'Başlat: {{meetingType}}',
  'LBL_STATUS' => 'Durum:',
  'LBL_SUBJECT' => 'Konusu:',
  'LBL_SYNCED_RECURRING_MSG' => 'Bu toplantının kaynağı başka bir sistemden Sugar sistemine senkronize edildi. Değişiklik yapmak için, diğer sistem içindeki orijinal toplantıya gidin. Diğer sistemde yapılan değişiklikler bu kayıt üzerinde güncellenebilir.',
  'LBL_TIME' => 'Başlangıç Saati:',
  'LBL_TYPE' => 'Toplantı Tipi',
  'LBL_URL' => 'Toplantıyı Başlat/Katıl',
  'LBL_USERS_SUBPANEL_TITLE' => 'Kullanıcılar',
  'LNK_IMPORT_MEETINGS' => 'Toplantı Verilerini Yükle',
  'LNK_MEETING_LIST' => 'Toplantıları Görüntüle',
  'LNK_NEW_APPOINTMENT' => 'Randevu Oluştur',
  'LNK_NEW_MEETING' => 'Toplantı Planla',
  'NOTICE_DURATION_TIME' => 'Süre 0 dan büyük olmalıdır',
  'NTC_REMOVE_INVITEE' => 'Toplantıdan bu davetliyi kaldırmak istediğinizden emin misiniz?',
);

