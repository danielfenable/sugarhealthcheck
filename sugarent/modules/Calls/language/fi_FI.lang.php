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
  'ERR_DELETE_RECORD' => 'Tietuenumero tulee määritellä jotta voit poistaa tilin.',
  'LBL_ACCEPT_LINK' => 'Hyväksymislinkki',
  'LBL_ACCEPT_STATUS' => 'Hyväksynnän status',
  'LBL_ACCOUNT_NAME' => 'Asiakas',
  'LBL_ACTIVITIES_REPORTS' => 'Toimintakertomus',
  'LBL_ADD_BUTTON' => 'Lisää',
  'LBL_ADD_INVITEE' => 'Lisää kutsuttuja',
  'LBL_ASSIGNED_TO_ID' => 'Vastuuhenkilö',
  'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
  'LBL_BLANK' => ' ',
  'LBL_CALL' => 'Puhelu',
  'LBL_CALL_INFORMATION' => 'Yleiskatsaus',
  'LBL_CANCEL_CREATE_INVITEE' => 'Peruuta',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Oletko varma, että haluat poistaa kaikki toistuvat tietueet?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Yhteystiedot',
  'LBL_CONTACT_NAME' => 'Yhteystiedot:',
  'LBL_CREATE_AND_ADD' => 'Luo ja Lisää',
  'LBL_CREATE_CONTACT' => 'Luo kontakti',
  'LBL_CREATE_INVITEE' => 'Luo kutsuttava',
  'LBL_CREATE_LEAD' => 'Liidinä',
  'LBL_CREATE_MODULE' => 'Kirjaa puhelu',
  'LBL_DATE' => 'Päivämäärä',
  'LBL_DATE_END' => 'Päättymispäivä',
  'LBL_DATE_END_ERROR' => 'Päättymispäivä on ennen aloituspäivää',
  'LBL_DATE_TIME' => 'Aloituspäivä ja -aika:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Puhelut',
  'LBL_DEL' => 'Del',
  'LBL_DESCRIPTION' => 'Kuvaus',
  'LBL_DESCRIPTION_INFORMATION' => 'Kuvauksen tiedot',
  'LBL_DIRECTION' => 'Suunta:',
  'LBL_DURATION' => 'Kesto:',
  'LBL_DURATION_HOURS' => 'Kesto tunteja:',
  'LBL_DURATION_MINUTES' => 'Kesto minuuttia:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Muokkaa kaikkia toistoja',
  'LBL_EMAIL' => 'Sähköposti',
  'LBL_EMAIL_REMINDER' => 'Sähköpostimuistutus',
  'LBL_EMAIL_REMINDER_SENT' => 'Sähköpostimuistutus lähetettiin',
  'LBL_EMAIL_REMINDER_TIME' => 'Sähköpostimuistutuksen aika',
  'LBL_EMPTY_SEARCH_RESULT' => 'Tuloksia ei löytynyt. Luo uusi kutsuttava alla.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Vastuuhenkilö',
  'LBL_EXPORT_CREATED_BY' => 'Tekijän ID',
  'LBL_EXPORT_DATE_START' => 'Päiväys ja aloitusaika',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Muokkaajan ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Liittyy moduuliin',
  'LBL_EXPORT_REMINDER_TIME' => 'Muistutusaika (minuutteina)',
  'LBL_FIRST_NAME' => 'Etunimi',
  'LBL_HELP_CREATE' => 'Puhelut-moduuli tallentaa puhelutietueita, joiden statuksena on “suunniteltu”, “pidetty” tai “peruutettu”. ugarissa olevia käyttäjiä, kontakteja, ja liidejä voi merkata puheluiden vastaanottajiksi.

1. Syötä kentille arvoja.

  Pakollisiksi merkityt kentät pitää täyttää ennen kuin tietue voidaan luoda. Muut kentät ovat valinnaisia.

2. Lisää puheluun kutsuttuja. Klikkaa "Valitse kutsuttu" lisätäksesi olemassaolevan Sugar-käyttäjän, kontkaktin tai liidin puheluun. Klikkaa vieressä olevaa plus-painiketta luodaksesi uusi kutsuttu.

3. Paina ‘Tallenna’ luodaksesi tietueen. Tämän jälkeen palaat edelliselle sivulle.

  Painamalla ‘Tallenna ja näytä’, tietue luodaan, jonka jälkeen näytetään puhelun tietuenäkymä.

  Paina ‘Tallenna ja luo uusi’, jos haluat heti luoda toisen puhelutietueen.',
  'LBL_HELP_RECORD' => 'Puhelut-moduuli tallentaa puhelutietueita, joiden statuksena on “suunniteltu”, “pidetty” tai “peruutettu”. Sugarissa olevia käyttäjiä, kontakteja, ja liidejä voi merkata puheluiden vastaanottajiksi.

- Muokkaa tietueen kenttiä klikkaamalla itse kenttää, tai vaihtoehtoisesti ‘Muokkaa’-painiketta.

- Muokkaa linkkejä muihin teitueisiin valitsemalla alavasemmalla oleva paneeli ‘tietonäkymään’.

- Luo ja lue käyttäjäkommentteja ja tietueen historiaa aktiviteettivirrassa. Aktiviteettivirran saat valitsemalla alavasemmalla oleva paneeli ‘aktiviteettivirta’-näkymään.

- Seuraa tai merkkaa tämä tietue suosikiksi käyttämällä tietueen nimen oikealta puolelta löytyviä kuvakkeita.

- Muut toiminnot löytyvät ‘Muokkaa’-painikkeen oikealla puolella olevasta ‘Toiminnot’-valikosta.',
  'LBL_HELP_RECORDS' => 'Puhelut-moduuli tallentaa puhelutietueita, joiden statuksena on “suunniteltu”, “pidetty” tai “peruutettu”. Seuraavan vuorokauden aikana tulevien puheluiden aloitusaika väritetään siniseksi. Myöhästyneiden puheluiden aika väritetään punaiseksi.
  
Puhelut-moduulin listanäkymästä voit nähdä ja muokata tietueiden tietoja. Lisää toimintoja saa rivien lopussa olevista valikoista. Voit valita “Sulje” tästä valikosta merkataksesi puhelun pidetyksi.

Sugarissa olevia käyttäjiä, kontakteja, ja liidejä voi merkata puheluiden vastaanottajiksi. Puhelutietueita voi luoda puhelumoduulista, kalenterimoduulista, tuomalla tietueita muualta, sekä aktiviteetit-alapaneelista (vanhanaikaisissa moduuleissa) tai Suunnitellut Aktiviteetit -dashletistä (uudenaikaisissa moduuleissa) puheluihin liittyvissä moduuleissa (kuten kontaktit ja aktiviteetit), mikä automaattisesti luo linkin tietueiden välille.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Huomautuksia',
  'LBL_HOURS_ABBREV' => '&nbsp;h',
  'LBL_HOURS_MINUTES' => '(tunnit/minuutit)',
  'LBL_INVITEE' => 'Kutsutut',
  'LBL_LAST_NAME' => 'Sukunimi',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Liidit',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
  'LBL_LIST_CLOSE' => 'Sulje',
  'LBL_LIST_CONTACT' => 'Kontakti',
  'LBL_LIST_DATE' => 'Aloituspäivä',
  'LBL_LIST_DIRECTION' => 'Suunta',
  'LBL_LIST_DURATION' => 'Kesto',
  'LBL_LIST_FORM_TITLE' => 'Puhelulista',
  'LBL_LIST_MY_CALLS' => 'Puhelut',
  'LBL_LIST_RELATED_TO' => 'Liittyy',
  'LBL_LIST_RELATED_TO_ID' => 'Liittyy ID:hen',
  'LBL_LIST_SUBJECT' => 'Aihe',
  'LBL_LIST_TIME' => 'Aloitusaika',
  'LBL_LOG_CALL' => 'Kirjaa puhelu',
  'LBL_MEMBER_OF' => 'Jäsen',
  'LBL_MINSS_ABBREV' => 'min',
  'LBL_MODULE_NAME' => 'Puhelut',
  'LBL_MODULE_NAME_SINGULAR' => 'Puhelu',
  'LBL_MODULE_TITLE' => 'Puhelut: Etusivu',
  'LBL_MY_SCHEDULED_CALLS' => 'Minun ajastetut puhelut',
  'LBL_NAME' => 'Nimi',
  'LBL_NEW_FORM_TITLE' => 'Luo tapaaminen',
  'LBL_NO_ACCESS' => 'Sinulla ei ole pääsyä luomaan $module',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Vanhemman ID',
  'LBL_PHONE' => 'Puhelin',
  'LBL_POPUP_REMINDER_TIME' => 'Popup-muistutuksen aika',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Loit tämän tietueen ({{moduleSingularLower}} {{formatDate date_start}}), muttei sinulla ole oikeuksia päästä tähän tietueeseen.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Luotiin {{moduleSingularLower}} ‘<a href=&#39;#{{buildRoute model=this}}&#39;>{{name}}</a>’ {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Toistuminen',
  'LBL_RECURRING_LIMIT_ERROR' => 'Tätä toistuvaa puhelua ei voida ajoittaa, koska tämä ylittäisi maksimitoistot ($limit).',
  'LBL_RECURRING_SOURCE' => 'Toistuva lähde',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Puhelu {{{this}}} kanssa',
  'LBL_RELATED_TO' => 'Liittyy:',
  'LBL_REMINDER' => 'Muistutukset:',
  'LBL_REMINDER_EMAIL' => 'Sähköposti',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Lähetä kaikille kutsutuille',
  'LBL_REMINDER_POPUP' => 'Ponnahdusikkuna',
  'LBL_REMINDER_TIME' => 'Muistutuksen aika',
  'LBL_REMINDER_TITLE' => 'Puhelu:',
  'LBL_REMOVE' => 'Poista',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Poista kaikki toistot',
  'LBL_REPEAT_COUNT' => 'Toista kertaa',
  'LBL_REPEAT_DOW' => 'Toista Dow',
  'LBL_REPEAT_END' => 'Lopeta',
  'LBL_REPEAT_END_AFTER' => '&nbsp;',
  'LBL_REPEAT_END_BY' => 'tähän mennessä:',
  'LBL_REPEAT_INTERVAL' => 'Toiston väliaika',
  'LBL_REPEAT_OCCURRENCES' => 'kerran jälkeen',
  'LBL_REPEAT_PARENT_ID' => 'Toista ylemmän tietueen ID',
  'LBL_REPEAT_TYPE' => 'Toiston tyyppi',
  'LBL_REPEAT_UNTIL' => 'Toista kunnes',
  'LBL_REVENUELINEITEMS' => 'Tuoterivit',
  'LBL_SCHEDULING_FORM_TITLE' => 'Aikataulutus',
  'LBL_SEARCH_BUTTON' => 'Haku',
  'LBL_SEARCH_FORM_TITLE' => 'Puhelujen haku',
  'LBL_SELECT_FROM_DROPDOWN' => 'Ole hyvä ja tee valinta Liittyy-pudotusvalikosta ensin.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Tallenna ja lähetä kutsut',
  'LBL_SEND_BUTTON_TITLE' => 'Tallenna ja lähetä kutsut [Alt + i]',
  'LBL_SEND_INVITES' => 'Lähetä kutsut',
  'LBL_STATUS' => 'Tila:',
  'LBL_SUBJECT' => 'Aihe',
  'LBL_SYNCED_RECURRING_MSG' => 'Tämä puhelu on alunperin toisesta järjestelmästä ja on synkronoitu Sugariin. Tehdäksesi muutoksia, mene toiseen järjestelmään ja alkuperäiseen puheluun. Toisen järjestelmän muutokset voidaan synkronoida tähän tietueeseen.',
  'LBL_TIME' => 'Aloitusaika:',
  'LBL_TIME_END' => 'Lopun aika',
  'LBL_USERS_SUBPANEL_TITLE' => 'Käyttäjät',
  'LNK_CALL_LIST' => 'Katso puhelut',
  'LNK_IMPORT_CALLS' => 'Tuo puhelut',
  'LNK_NEW_ACCOUNT' => 'Uusi asiakas',
  'LNK_NEW_APPOINTMENT' => 'Luo tapaaminen',
  'LNK_NEW_CALL' => 'Kirjaa puhelu',
  'LNK_NEW_MEETING' => 'Aikatauluta kokous',
  'LNK_NEW_OPPORTUNITY' => 'Uusi myyntimahdollisuus',
  'LNK_SELECT_ACCOUNT' => 'Valitse asiakas',
  'NOTICE_DURATION_TIME' => 'Kestoajan on oltava enemmän kuin 0',
  'NTC_REMOVE_INVITEE' => 'Oletko varma, että haluat poistaa tämän kutsumasi puhelusta?',
  'TPL_CALL_STATUS_CHANGED' => 'Soiton statukseksi merkitty ‘{{status}}’.',
);

