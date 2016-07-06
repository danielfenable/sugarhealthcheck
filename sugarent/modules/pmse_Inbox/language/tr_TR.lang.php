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
  'LBL_ASSIGNED_USER' => 'Atanan Kullanıcı',
  'LBL_CAS_ID' => 'Süreç Numarası',
  'LBL_MODULE_NAME' => 'Süreçler',
  'LBL_MODULE_NAME_SINGULAR' => 'Süreçler',
  'LBL_MODULE_TITLE' => 'Süreçler',
  'LBL_PMSE_ACTIVITY_STREAM_APPROVE' => '&0 - <strong>%s</strong> Onaylandı',
  'LBL_PMSE_ACTIVITY_STREAM_CLAIM' => '&0 - <strong>%s</strong> Talep Edildi',
  'LBL_PMSE_ACTIVITY_STREAM_REASSIGN' => '&0 - <strong>%s</strong>, &1 kullanıcısına atandı',
  'LBL_PMSE_ACTIVITY_STREAM_REJECT' => '&0 - <strong>%s</strong> Reddedildi',
  'LBL_PMSE_ACTIVITY_STREAM_ROUTE' => '&0 - <strong>%s</strong> Yönlendirildi',
  'LBL_PMSE_BUTTON_CANCEL' => 'İptal',
  'LBL_PMSE_BUTTON_CLOSE' => 'Kapat',
  'LBL_PMSE_BUTTON_PROCESS_AUTHOR_LOG' => 'Süreç Takip Logu',
  'LBL_PMSE_BUTTON_REFRESH' => 'Yenile',
  'LBL_PMSE_BUTTON_SAVE' => 'Kaydet',
  'LBL_PMSE_BUTTON_SUGARCRM_LOG' => 'SugarCRM Logu',
  'LBL_PMSE_CANCEL_MESSAGE' => 'No:#{} olan süreci durdurmak istediğinizden emin misiniz?',
  'LBL_PMSE_FILTER' => 'Filtre',
  'LBL_PMSE_FORM_LABEL_NOTE' => 'Not',
  'LBL_PMSE_FORM_LABEL_TYPE' => 'Tip',
  'LBL_PMSE_FORM_LABEL_USER' => 'Kullanıcı',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Seç…',
  'LBL_PMSE_HISTORY_LOG_ACTION_PERFORMED' => 'Çalıştırılan aksiyon: <span style="font-weight: bold">[%s]</span>',
  'LBL_PMSE_HISTORY_LOG_ACTION_STILL_ASSIGNED' => 'Görev hala atanamamış.',
  'LBL_PMSE_HISTORY_LOG_ACTIVITY_NAME' => 'adı: &#39;% s&#39;',
  'LBL_PMSE_HISTORY_LOG_CREATED' => 'oluşturuldu',
  'LBL_PMSE_HISTORY_LOG_CREATED_CASE' => 'Süreç # %s oluşturdu',
  'LBL_PMSE_HISTORY_LOG_CURRENTLY_HAS_CASE' => 'şu anda TaskId %s var',
  'LBL_PMSE_HISTORY_LOG_DONE_UNKNOWN' => 'Bilinmeyen bir görev yapıldı',
  'LBL_PMSE_HISTORY_LOG_EDITED' => 'düzenlenmiş',
  'LBL_PMSE_HISTORY_LOG_MODULE_ACTION' => ': Modül %s %s,',
  'LBL_PMSE_HISTORY_LOG_NOTFOUND_USER' => 'Bilinmeyen (UserId:&#39;%s&#39; göre)',
  'LBL_PMSE_HISTORY_LOG_NOT_REGISTED_ACTION' => 'tanımlı olmayan aksiyon',
  'LBL_PMSE_HISTORY_LOG_NO_YET_STARTED' => '( henüz başlamadı )',
  'LBL_PMSE_HISTORY_LOG_ROUTED' => 'yönlendirilmiş',
  'LBL_PMSE_HISTORY_LOG_TASK_HAS_BEEN' => 'görev',
  'LBL_PMSE_HISTORY_LOG_TASK_WAS' => 'göreviydi',
  'LBL_PMSE_HISTORY_LOG_WITH_EVENT' => '- Etkinlik %s ile',
  'LBL_PMSE_HISTORY_LOG_WITH_GATEWAY' => '- %s Ağ Geçidi ile değerlendirildi ve yeni göreve yönlendirildi',
  'LBL_PMSE_LABEL_ADD_NOTES' => 'Not Ekle',
  'LBL_PMSE_LABEL_APPROVE' => 'Onay',
  'LBL_PMSE_LABEL_CANCEL' => 'İptal',
  'LBL_PMSE_LABEL_CLAIM' => 'İddia',
  'LBL_PMSE_LABEL_CURRENT' => 'Şimdiki',
  'LBL_PMSE_LABEL_CURRENT_ACTIVITY' => 'Geçerli Aktivite',
  'LBL_PMSE_LABEL_DUE_DATE' => 'Son Bitirme Tarihi',
  'LBL_PMSE_LABEL_EXECUTE' => 'Çalıştır',
  'LBL_PMSE_LABEL_EXPECTED_TIME' => 'Beklenen Süre',
  'LBL_PMSE_LABEL_HISTORY' => 'Tarihçe',
  'LBL_PMSE_LABEL_IN_TIME' => '',
  'LBL_PMSE_LABEL_NOTES' => 'Notları Göster',
  'LBL_PMSE_LABEL_OVERDUE' => 'Vadesi geçmiş',
  'LBL_PMSE_LABEL_PROCESS' => 'Süreç',
  'LBL_PMSE_LABEL_REJECT' => 'Reddet',
  'LBL_PMSE_LABEL_ROUTE' => 'Rota',
  'LBL_PMSE_LABEL_STATUS' => 'Durum',
  'LBL_PMSE_LABEL_UNASSIGNED' => 'Atanmamış',
  'LBL_PMSE_MY_PROCESSES' => 'Süreçlerim',
  'LBL_PMSE_SELF_SERVICE_PROCESSES' => 'Self Servis Süreçleri',
  'LBL_PMSE_SETTING_NUMBER_CYCLES' => 'Tekrar Hata Sayısı',
  'LBL_PMSE_SHOW_PROCESS' => 'Süreçleri Göster',
  'LBL_PMSE_TITLE_HISTORY' => 'Süreç Tarihçesi',
  'LBL_PMSE_TITLE_IMAGE_GENERATOR' => 'Süreç #%s: Mevcut Durum',
  'LBL_PMSE_TITLE_LOG_VIEWER' => 'Süreç Yazıcı Log Gösterimi',
  'LBL_PMSE_TITLE_PROCESSESS_LIST' => 'Süreç Yönetimi',
  'LBL_PMSE_TITLE_PROCESS_NOTES' => 'Süreç Notları',
  'LBL_PMSE_TITLE_UNATTENDED_CASES' => 'Bağımsız Süreçler',
  'LBL_PROCESS_DEFINITION_NAME' => 'Süreç Tanım İsmi',
  'LBL_PROCESS_NAME' => 'Süreç İsmi',
  'LBL_RECORD_NAME' => 'Kayıt İsmi',
  'LBL_STATUS_CANCELLED' => 'İptal Edilen Süreçler',
  'LBL_STATUS_COMPLETED' => 'Tamamlanan Süreçler',
  'LBL_STATUS_ERROR' => 'Hataları İşler',
  'LBL_STATUS_IN_PROGRESS' => 'Çalışan Süreçler',
  'LBL_STATUS_TERMINATED' => 'Süreç Sona Erdi',
  'LNK_LIST' => 'Süreçleri Görüntüle',
);

