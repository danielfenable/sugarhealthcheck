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
  'ERR_DELETE_RECORD' => 'Müşteriyi silmek için bir kayıt numarası belirtilmelidir.',
  'LBL_ACCEPT_LINK' => 'Bağlantıyı Kabul et',
  'LBL_ACCEPT_STATUS' => 'Kabul Durumu',
  'LBL_ACCOUNT_NAME' => 'Müşteri',
  'LBL_ACTIVITIES_REPORTS' => 'Aktiviteler Raporu',
  'LBL_ADD_BUTTON' => 'Ekle',
  'LBL_ADD_INVITEE' => 'Davetlileri Ekle',
  'LBL_ASSIGNED_TO_ID' => 'Atanan Kullanıcı',
  'LBL_ASSIGNED_TO_NAME' => 'Atanan Kişi',
  'LBL_BLANK' => 'LBL_PDF_ITEM_SELECT_DISCOUNT',
  'LBL_CALL' => 'Tel.Araması:',
  'LBL_CALL_INFORMATION' => 'Genel Bilgi',
  'LBL_CANCEL_CREATE_INVITEE' => 'İptal',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Tüm tekrarlanan kayıtları silmek istediğinizden emin misiniz?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaklar',
  'LBL_CONTACT_NAME' => 'Kontak:',
  'LBL_CREATE_AND_ADD' => 'Oluştur & Ekle',
  'LBL_CREATE_CONTACT' => 'Kontak olarak',
  'LBL_CREATE_INVITEE' => 'Davetli oluştur',
  'LBL_CREATE_LEAD' => 'Potansiyel olarak',
  'LBL_CREATE_MODULE' => 'Tel. Araması Planla',
  'LBL_DATE' => 'Başlangıç Tarihi:',
  'LBL_DATE_END' => 'Bitiş Tarihi',
  'LBL_DATE_END_ERROR' => 'Bitiş Tarihi, Başlangıç Tarihinden önce',
  'LBL_DATE_TIME' => 'Başlangıç Tarih & Saati:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Aramalar',
  'LBL_DEL' => 'Sil',
  'LBL_DESCRIPTION' => 'Tanım:',
  'LBL_DESCRIPTION_INFORMATION' => 'Tanım Bilgisi',
  'LBL_DIRECTION' => 'Yön:',
  'LBL_DURATION' => 'Süre:',
  'LBL_DURATION_HOURS' => 'Süre (Saat):',
  'LBL_DURATION_MINUTES' => 'Süre (Dakika):',
  'LBL_EDIT_ALL_RECURRENCES' => 'Bütün Çift Kayıtları Değiştir',
  'LBL_EMAIL' => 'E-Posta',
  'LBL_EMAIL_REMINDER' => 'E-Posta Hatırlatıcı',
  'LBL_EMAIL_REMINDER_SENT' => 'Hatırlatma mesajı gönderildi',
  'LBL_EMAIL_REMINDER_TIME' => 'E-Posta Hatırlatma Zamanı',
  'LBL_EMPTY_SEARCH_RESULT' => 'Üzgünüm, sonuç bulunamadı. Aşağıda bir davetli oluşturun.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Atanmış Kullanıcı ID',
  'LBL_EXPORT_CREATED_BY' => 'Oluşturan ID',
  'LBL_EXPORT_DATE_START' => 'Başlangıç Tarihi ve Zamanı',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Değiştiren ID',
  'LBL_EXPORT_PARENT_TYPE' => 'İlişkili Olduğu Modül',
  'LBL_EXPORT_REMINDER_TIME' => 'Hatırlatma Süresi (dakika)',
  'LBL_FIRST_NAME' => 'İsim',
  'LBL_HELP_CREATE' => '{{plural_module_name}} modülü, organizasyonunuzdaki kullanıcıların oluşturduğu {{calls_singular_module}} kayıtlarından oluşur. {{plural_module_name}}, "Planlanan", "Yapıldı", veya "İptal" durumunda olabilir. Sugar kullanıcıları ile {{contacts_module}} ve {{leads_module}} davetli olarak eklenebilir.

{{calls_singular_module}} oluşturmak için:
1. Alanlar için istediğiniz şekilde değerleri girin
    - "Zorunlu" olarak işaretlenen kayıtların, kaydetmeden önce girilmesi gereklidir.
    - Gerekiyorsa ""Daha Fazlası"" seçeneği ile, ek alanların görüntülenmesini sağlayın.
2. Davetlileri, {{calls_singular_module}} için ekleyin.
    - "Katılımcı Seçin" ile mevcut kullanıcı, kontak, potansiyel {{calls_singular_module}} için dahil edilebilir.
    - "Katılımcı Seçin" seçeneğinin yanındaki artı işaretine tıklayarak yeni bir {{calls_singular_module}} katılımcısını Sugar kaydı olarak ekleyin.
3. "Kaydet" tuşuna basarak yeni kaydı sona erdirin ve önceki sayfaya dönün.
    - "Kaydet ve görüntüle" ile yeni {{calls_singular_module}} kaydı açın.
    - "Kaydet ve yeni oluştur" ile hemen farklı bir yeni {{calls_singular_module}} kaydı oluşturun.',
  'LBL_HELP_RECORD' => '{{plural_module_name}} modülü, organizasyonunuzdaki kullanıcıların oluşturduğu {{calls_singular_module}} kayıtlarından oluşur. {{plural_module_name}}, "Planlanan", "Yapıldı", veya "İptal" durumunda olabilir. Sugar kullanıcıları ile {{contacts_module}} ve {{leads_module}} davetli olarak eklenebilir.

- Kaydın alanlarını bir alana tıklayarak veya Değiştir tuşuna basarak değiştirin.
- Sol altta yer alan tuşu "Veri Görüntüle" değerine çevirerek, diğer kayıtlara olan bağlantıları görün veya değiştirin.
- Sol altta yer alan tuşu "Aktivite Akışı" değerine değiştirerek, kullanıcı yorumlarını ve kayıt değişiklik tarihçesini görün veya ekleyin.
- Kaydın sağındaki ikona tıklayarak kaydı izlemeye alın veya favori olarak işaretleyin.
- Değiştir tuşunun sağındaki açılır Aksiyonlar menüsü içinde ek aksiyonlar yer almaktadır.',
  'LBL_HELP_RECORDS' => '{{plural_module_name}} modülü, organizasyonunuzdaki kullanıcıların oluşturduğu çağrı kayıtlarından oluşur ve "Planlanan", "Yapıldı", veya "İptal"" durumunda olabilir. Önümüzdeki 24 saat içinde başlayacak olan toplantıların başlangıç tarihi mavi ile gösterilir. Geçmiş toplantılar için başlangıç değeri kırmızı renktedir.

{{plural_module_name}} liste görünümünden, toplantı bilgisini görebilir veya hemen değiştirebilirsiniz. Ek aksiyonlar, her menü satırının sonundaki menü ile mümkün olmaktadır. Menü içinden "Kapat" seçerek, herhangi bir toplantıyı yapıldı olarak işaretleyebilirsiniz.

Sugar kullanıcıları, kontaklar ve potansiyeller, toplantı davetlisi olarak eklenebilir. {{plural_module_name}}, {{plural_module_name}} modülü ile, Takvim modülü ile, içeri yüklemeyle, Aktiviteler alt paneli ile (Eski modüller için) veya ilgili modül kaydı üzerindeyken Planlanan Aktiviteler penceresi ile (Yan menü modülleri için)  - her iki kayıt arasında otomatik olarak ilişki oluşturacaktır.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notlar',
  'LBL_HOURS_ABBREV' => 's',
  'LBL_HOURS_MINUTES' => '(saat/dakika)',
  'LBL_INVITEE' => 'Davetliler',
  'LBL_LAST_NAME' => 'Soyisim',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potansiyeller',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanan Kişi',
  'LBL_LIST_CLOSE' => 'Kapat',
  'LBL_LIST_CONTACT' => 'Kontak',
  'LBL_LIST_DATE' => 'Başlangıç Tarihi',
  'LBL_LIST_DIRECTION' => 'Yön',
  'LBL_LIST_DURATION' => 'Süre',
  'LBL_LIST_FORM_TITLE' => 'Tel.Aramaları Listesi',
  'LBL_LIST_MY_CALLS' => 'Telefon Aramalarım',
  'LBL_LIST_RELATED_TO' => 'İlişkili',
  'LBL_LIST_RELATED_TO_ID' => 'İlişkili olduğu ID',
  'LBL_LIST_SUBJECT' => 'Konu',
  'LBL_LIST_TIME' => 'Başlangıç Saati',
  'LBL_LOG_CALL' => 'Tel. Araması Planla',
  'LBL_MEMBER_OF' => 'Üyeliği',
  'LBL_MINSS_ABBREV' => 'd',
  'LBL_MODULE_NAME' => 'Aramalar',
  'LBL_MODULE_NAME_SINGULAR' => 'Tel.Araması',
  'LBL_MODULE_TITLE' => 'Tel.Aramaları: Ana Sayfa',
  'LBL_MY_SCHEDULED_CALLS' => 'Planlanan Aramalarım',
  'LBL_NAME' => 'İsim',
  'LBL_NEW_FORM_TITLE' => 'Randevu Oluştur',
  'LBL_NO_ACCESS' => '$module modülünü oluşturmak için erişim yetkiniz yok',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Üst ID',
  'LBL_PHONE' => 'Telefon',
  'LBL_POPUP_REMINDER_TIME' => 'Açılır Liste Hatırlatma Zamanı',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => '{{moduleSingularLower}}, {{formatDate date_start}} için planladınız ancak erişim hakkınız bulunmuyor.',
  'LBL_RECORD_SAVED_SUCCESS' => '{{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> , {{formatDate date_start}} için planladınız.',
  'LBL_RECURRENCE' => 'Tekrar',
  'LBL_RECURRING_LIMIT_ERROR' => 'Bu tekrarlayan çağrı, maksimum tekrarlama limitini ($limit) aştığı için planlanamaz.',
  'LBL_RECURRING_SOURCE' => 'Tekrarlanan Kaynak',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => '{{{this}}} ile Arayın',
  'LBL_RELATED_TO' => 'İlişkili:',
  'LBL_REMINDER' => 'Hatırlatıcı:',
  'LBL_REMINDER_EMAIL' => 'E-Posta',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Tüm davetlilere e-posta',
  'LBL_REMINDER_POPUP' => 'Ekran',
  'LBL_REMINDER_TIME' => 'Hatırlatma Saati',
  'LBL_REMINDER_TITLE' => 'Çağrı:',
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
  'LBL_SEARCH_FORM_TITLE' => 'Tel.Aramaları Ara',
  'LBL_SELECT_FROM_DROPDOWN' => 'Lütfen önce İlişkili açılır-listesinden seçim yapınız.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Kaydet & Davet Gönder',
  'LBL_SEND_BUTTON_TITLE' => 'Kaydet & Davet Gönder  [Alt+I]',
  'LBL_SEND_INVITES' => 'Davetiye Gönder',
  'LBL_STATUS' => 'Durum:',
  'LBL_SUBJECT' => 'Konusu:',
  'LBL_SYNCED_RECURRING_MSG' => 'Bu aramanın kaynağı başka bir sistemden Sugar veritabanına senkronize edildi. Değişiklik yapmak için, diğer sistem içindeki orijinal aramaya gidin. Diğer sistemde yapılan değişiklikler bu kayıta senkronize edilebilir.',
  'LBL_TIME' => 'Başlangıç Saati:',
  'LBL_TIME_END' => 'Bitiş Saati',
  'LBL_USERS_SUBPANEL_TITLE' => 'Kullanıcılar',
  'LNK_CALL_LIST' => 'Tel.Aramalarını Gör',
  'LNK_IMPORT_CALLS' => 'Çağrı Verilerini Yükle',
  'LNK_NEW_ACCOUNT' => 'Yeni Müşteri',
  'LNK_NEW_APPOINTMENT' => 'Randevu Oluştur',
  'LNK_NEW_CALL' => 'Tel. Araması Planla',
  'LNK_NEW_MEETING' => 'Toplantı Planla',
  'LNK_NEW_OPPORTUNITY' => 'Yeni Fırsat',
  'LNK_SELECT_ACCOUNT' => 'Müşteri Seç',
  'NOTICE_DURATION_TIME' => 'Süre 0 dan büyük olmalıdır',
  'NTC_REMOVE_INVITEE' => 'Arama kaydından bu davetliyi silmek istediğinize emin misiniz?',
  'TPL_CALL_STATUS_CHANGED' => 'Kayıt {{status}} olarak işaretlendi',
);

