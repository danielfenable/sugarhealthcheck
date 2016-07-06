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
  'ERR_DELETE_RECORD' => 'Tietuenumero tulee määritellä, jotta voit poistaa tilin.',
  'LBL_ACCEPT_LINK' => 'Hyväksynnän linkki',
  'LBL_ACCEPT_STATUS' => 'Hyväksynnän status',
  'LBL_ACCEPT_THIS' => 'Hyväksy?',
  'LBL_ACCOUNT_NAME' => 'Asiakas',
  'LBL_ACTIVITIES_REPORTS' => 'Toimintakertomus',
  'LBL_ADD_BUTTON' => 'Lisää',
  'LBL_ADD_INVITEE' => 'Lisää kutsuttuja',
  'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
  'LBL_CANCEL_CREATE_INVITEE' => 'Peruuta',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Oletko varma, että haluat poistaa kaikki toistuvat tietueet?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktit',
  'LBL_CONTACT_NAME' => 'Kontakti:',
  'LBL_CREATED_BY' => 'Luonut',
  'LBL_CREATED_USER' => 'Luonut',
  'LBL_CREATE_AND_ADD' => 'Luo & lisää',
  'LBL_CREATE_CONTACT' => 'kontaktina',
  'LBL_CREATE_INVITEE' => 'Luo kutsuttu',
  'LBL_CREATE_LEAD' => 'liidinä',
  'LBL_CREATE_MODULE' => 'Ajoita kokous',
  'LBL_CREATOR' => 'Kokouksen tekijä',
  'LBL_DATE' => 'Päivämäärä',
  'LBL_DATE_END' => 'Päättymispäivä',
  'LBL_DATE_END_ERROR' => 'Päättymispäivä on ennen aloituspäivää',
  'LBL_DATE_TIME' => 'Aloituspäivä ja -aika:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kokoukset',
  'LBL_DEL' => 'Del',
  'LBL_DESCRIPTION' => 'Kuvaus',
  'LBL_DESCRIPTION_INFORMATION' => 'Kuvaustietoja',
  'LBL_DIRECTION' => 'Suunta:',
  'LBL_DISPLAYED_URL' => 'Näkyvä URL-osoite',
  'LBL_DURATION' => 'Kesto:',
  'LBL_DURATION_HOURS' => 'Kesto, tunnit:',
  'LBL_DURATION_MINUTES' => 'Kesto, minuutit:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Muokkaa kaikkia toistoja',
  'LBL_EMAIL' => 'Sähköposti',
  'LBL_EMAIL_REMINDER' => 'Sähköpostimuistutus',
  'LBL_EMAIL_REMINDER_SENT' => 'Sähköpostimuistutus lähetetty',
  'LBL_EMAIL_REMINDER_TIME' => 'Sähköpostimuistutusaika',
  'LBL_EMPTY_SEARCH_RESULT' => 'Tuloksia ei löytynyt. Luo kutsuttu alla.',
  'LBL_ERROR_LAUNCH_MEETING_GENERAL' => 'Tämän kokouksen aloittamisessa tapahtui virhe. Ota yhteyttä järjestelmänvalvojaasi.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Vastuuhenkilö',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Vastuuhenkilö',
  'LBL_EXPORT_CREATED_BY' => 'Tekijän ID',
  'LBL_EXPORT_DATE_END' => 'Päättymispäivä ja -aika',
  'LBL_EXPORT_DATE_START' => 'Päiväys ja aloitusaika',
  'LBL_EXPORT_DISPLAYED_URL' => 'Näkyvä URL',
  'LBL_EXPORT_EXTERNAL_ID' => 'Ulkoinen ID',
  'LBL_EXPORT_HOST_URL' => 'Isännän URL',
  'LBL_EXPORT_JOIN_URL' => 'Liittymisen URL',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Muokkaajan ID',
  'LBL_EXPORT_PARENT_ID' => 'Kanta-ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Kantatyyppi',
  'LBL_EXPORT_REMINDER_TIME' => 'Muistutusaika (minuuteissa)',
  'LBL_EXTERNALID' => 'Ulkoisen ohjelman ID',
  'LBL_EXTNOSTART_HEADER' => 'Virhe: ei saada aloitettua kokousta',
  'LBL_EXTNOSTART_MAIN' => 'Et voi aloittaa tätä kokousta koska et ole ylläpitäjä tai kokouksen omistaja.',
  'LBL_EXTNOT_GO_BACK' => 'Mene takaisin edelliseen tietueeseen',
  'LBL_EXTNOT_HEADER' => 'Virhe: ei kutsuttu',
  'LBL_EXTNOT_MAIN' => 'Et voi liittyä tähän kokoukseen, koska et ole kutsuttu.',
  'LBL_EXTNOT_RECORD_LINK' => 'Näytä kokous',
  'LBL_FIRST_NAME' => 'Etunimi',
  'LBL_HELP_CREATE' => 'Kokoukset-moduuli tallentaa kokoustietueita, joiden statuksena on “suunniteltu”, “pidetty” tai “peruutettu”. Sugarissa olevia käyttäjiä, kontakteja, ja liidejä voi merkata kokoukseen kutsutuiksi.

1. Syötä kentille arvoja.

  Pakollisiksi merkityt kentät pitää täyttää ennen kuin tietue voidaan luoda. Muut kentät ovat valinnaisia.

2. Lisää kokoukseen kutsuttuja henkilöitä. Klikkaa "Valitse kutsuttu" lisätäksesi olemassaolevan Sugar-käyttäjän, kontkaktin tai liidin puheluun. Klikkaa vieressä olevaa plus-painiketta luodaksesi uusi kutsuttu.

3. Paina ‘Tallenna’ luodaksesi tietueen. Tämän jälkeen palaat edelliselle sivulle.

  Painamalla ‘Tallenna ja näytä’, tietue luodaan, jonka jälkeen näytetään kokouksen tietuenäkymä.

  Paina ‘Tallenna ja luo uusi’, jos haluat heti luoda toisen kokoustietueen.',
  'LBL_HELP_RECORD' => 'Kokoukset-moduuli tallentaa kokoustietueita, joiden statuksena on “suunniteltu”, “pidetty” tai “peruutettu”. Sugarissa olevia käyttäjiä, kontakteja, ja liidejä voi merkata kokoukseen kutsutuiksi.

- Muokkaa tietueen kenttiä klikkaamalla itse kenttää, tai vaihtoehtoisesti ‘Muokkaa’-painiketta.

- Muokkaa linkkejä muihin teitueisiin valitsemalla alavasemmalla oleva paneeli ‘tietonäkymään’.

- Luo ja lue käyttäjäkommentteja ja tietueen historiaa aktiviteettivirrassa. Aktiviteettivirran saat valitsemalla alavasemmalla oleva paneeli ‘aktiviteettivirta’-näkymään.

- Seuraa tai merkkaa tämä tietue suosikiksi käyttämällä tietueen nimen oikealta puolelta löytyviä kuvakkeita.

- Muut toiminnot löytyvät ‘Muokkaa’-painikkeen oikealla puolella olevasta ‘Toiminnot’-valikosta.',
  'LBL_HELP_RECORDS' => 'Kokoukset-moduuli tallentaa kokoustietueita, joiden statuksena voi olla “suunniteltu”, “pidetty” tai “peruutettu”. Seuraavan vuorokauden aikana tulevien kokousten aloitusaika väritetään siniseksi. Myöhästyneiden kokousten aika väritetään punaiseksi.

Kokoukset-moduulin listanäkymästä voit nähdä ja muokata tietueiden tietoja. Lisää toimintoja saa rivien lopussa olevista valikoista. Voit valita “Sulje” tästä valikosta merkataksesi kokouksen pidetyksi.

Sugarissa olevia käyttäjiä, kontakteja, ja liidejä voi merkata kokoukseen kutsutuiksi. Kokoustietueita voi luoda kokoukset-moduulista, kalenterimoduulista, tuomalla tietueita muualta, sekä aktiviteetit-alapaneelista (vanhanaikaisissa moduuleissa) tai Suunnitellut Aktiviteetit -dashletistä (uudenaikaisissa moduuleissa) puheluihin liittyvissä moduuleissa (kuten kontaktit ja aktiviteetit), mikä automaattisesti luo linkin tietueiden välille.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Muistiinpanot',
  'LBL_HOST_EXT_MEETING' => 'Aloita kokous',
  'LBL_HOST_URL' => 'Isännän URL',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINS' => '(tunnit/minuutit)',
  'LBL_INVITEE' => 'Kutsutut',
  'LBL_JOIN_EXT_MEETING' => 'Liity kokoukseen',
  'LBL_JOIN_MEETING' => 'Liity {{meetingType}}',
  'LBL_LAST_NAME' => 'Sukunimi',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Liidit',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuukäyttäjä',
  'LBL_LIST_CLOSE' => 'Sulje',
  'LBL_LIST_CONTACT' => 'Kontakti',
  'LBL_LIST_DATE' => 'Aloituspäivä',
  'LBL_LIST_DATE_MODIFIED' => 'Muokkauksen pvm',
  'LBL_LIST_DIRECTION' => 'Suunta',
  'LBL_LIST_DUE_DATE' => 'Eräpäivä',
  'LBL_LIST_FORM_TITLE' => 'Kokousluettelo',
  'LBL_LIST_JOIN_MEETING' => 'Liity kokoukseen',
  'LBL_LIST_MY_MEETINGS' => 'Kokoukset',
  'LBL_LIST_RELATED_TO' => 'Liittyy',
  'LBL_LIST_STATUS' => 'Tila',
  'LBL_LIST_SUBJECT' => 'Aihe',
  'LBL_LIST_TIME' => 'Aloitusaika',
  'LBL_LOCATION' => 'Paikka:',
  'LBL_MEETING' => 'Kokous',
  'LBL_MEETING_CLOSE_SUCCESS' => 'Kokouksen sulkeminen onnistui.',
  'LBL_MEETING_INFORMATION' => 'Yleiskatsaus',
  'LBL_MINSS_ABBREV' => 'min',
  'LBL_MODIFIED_BY' => 'Muuttanut',
  'LBL_MODIFIED_USER' => 'Käyttäjä muokannut',
  'LBL_MODULE_NAME' => 'Kokoukset',
  'LBL_MODULE_NAME_SINGULAR' => 'Kokous',
  'LBL_MODULE_TITLE' => 'Kokoukset: Etusivu',
  'LBL_MY_SCHEDULED_MEETINGS' => 'Omat kokoukset',
  'LBL_NAME' => 'Nimi',
  'LBL_NEW_FORM_TITLE' => 'Luo kokous',
  'LBL_NO_ACCESS' => 'Sinulla ei ole oikeuksia luoda $module',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Kanta-ID',
  'LBL_PARENT_TYPE' => 'Kantatyyppi',
  'LBL_PASSWORD' => 'Kokoussalasana',
  'LBL_PHONE' => 'Toimistopuhelin:',
  'LBL_POPUP_REMINDER' => 'Popup-muistutus',
  'LBL_POPUP_REMINDER_TIME' => 'Popup-muistutuksen aika',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Loit tämän tietueen ({{moduleSingularLower}} {{formatDate date_start}}), muttei sinulla ole oikeuksia päästä tähän tietueeseen.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Luotiin {{moduleSingularLower}} ‘<a href=&#39;#{{buildRoute model=this}}&#39;>{{name}}</a>’ {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Toistuminen',
  'LBL_RECURRING_LIMIT_ERROR' => 'Tätä toistuvaa kokousta ei voida ajoittaa, koska tämä ylittäisi maksimitoistot ($limit).',
  'LBL_RECURRING_SOURCE' => 'Toistuva lähde',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Kokous {{{this}}} kanssa',
  'LBL_RELATED_TO' => 'Liittyvät:',
  'LBL_REMINDER' => 'Muistutukset:',
  'LBL_REMINDER_EMAIL' => 'Sähköposti',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Lähetä kaikille kutsutuille',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Muistutusaika',
  'LBL_REMINDER_TITLE' => 'Kokous:',
  'LBL_REMOVE' => 'Poista',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Poista kaikki toistot',
  'LBL_REPEAT_COUNT' => 'Toistojen määrä',
  'LBL_REPEAT_DOW' => 'Toista Dow',
  'LBL_REPEAT_END' => 'Lopeta',
  'LBL_REPEAT_END_AFTER' => '&nbsp;',
  'LBL_REPEAT_END_BY' => 'tähän mennessä:',
  'LBL_REPEAT_INTERVAL' => 'Toiston aikaväli',
  'LBL_REPEAT_OCCURRENCES' => 'kerran jälkeen',
  'LBL_REPEAT_PARENT_ID' => 'Toista Parent ID',
  'LBL_REPEAT_TYPE' => 'Toiston tyyppi',
  'LBL_REPEAT_UNTIL' => 'Toista, kunnes',
  'LBL_REVENUELINEITEMS' => 'Tuoterivit',
  'LBL_SCHEDULING_FORM_TITLE' => 'Ajoitus',
  'LBL_SEARCH_BUTTON' => 'Haku',
  'LBL_SEARCH_FORM_TITLE' => 'Kokoushaku',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Tallenna ja lähetä kutsut',
  'LBL_SEND_BUTTON_TITLE' => 'Tallenna ja lähetä kutsut',
  'LBL_SEND_INVITES' => 'Lähetä kutsut',
  'LBL_SEQUENCE' => 'Kokousten päivitysjärjestys',
  'LBL_START_MEETING' => 'Aloita {{meetingType}}',
  'LBL_STATUS' => 'Tila:',
  'LBL_SUBJECT' => 'Aihe',
  'LBL_SYNCED_RECURRING_MSG' => 'Tämä kokous on peräisin toisesta järjestelmästä ja synkroinoitiin Sugariin. Tehdäksesi muutoksia, mene alkuperäiseen kokoukseen toisessa järjestelmässä. Muutokset, jotka tehdään toisessa järjestelmässä, voidaan synkronoida tähän tietueeseen.',
  'LBL_TIME' => 'Aloitusaika:',
  'LBL_TYPE' => 'Kokoustyyppi',
  'LBL_URL' => 'Aloita/liity kokoukseen',
  'LBL_USERS_SUBPANEL_TITLE' => 'Käyttäjät',
  'LNK_IMPORT_MEETINGS' => 'Tuo kokoukset',
  'LNK_MEETING_LIST' => 'Näytä kokoukset',
  'LNK_NEW_APPOINTMENT' => 'Luo tapaaminen',
  'LNK_NEW_MEETING' => 'Varaa kokous',
  'NOTICE_DURATION_TIME' => 'Kestoaika on oltava suurempi kuin 0',
  'NTC_REMOVE_INVITEE' => 'Oletko varma, että haluat poistaa tämän kutsutun kokouksesta?',
);

