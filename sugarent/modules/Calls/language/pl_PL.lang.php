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
  'ERR_DELETE_RECORD' => 'Wskaż rekord, który chcesz usunąć.',
  'LBL_ACCEPT_LINK' => 'Link akceptacji',
  'LBL_ACCEPT_STATUS' => 'Status akceptacji',
  'LBL_ACCOUNT_NAME' => 'Kontrahent',
  'LBL_ACTIVITIES_REPORTS' => 'Raport aktywności',
  'LBL_ADD_BUTTON' => 'Dodaj',
  'LBL_ADD_INVITEE' => 'Dodaj uczestników',
  'LBL_ASSIGNED_TO_ID' => 'Przydzielony użytkownik',
  'LBL_ASSIGNED_TO_NAME' => 'Przydzielono do',
  'LBL_BLANK' => ' ',
  'LBL_CALL' => 'Rozmowa:',
  'LBL_CALL_INFORMATION' => 'Informacje ogólne',
  'LBL_CANCEL_CREATE_INVITEE' => 'Anuluj',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Na pewno chcesz usunąć wszystkie cykliczne rekordy?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_CREATE_AND_ADD' => 'Utwórz i dodaj',
  'LBL_CREATE_CONTACT' => 'jako Kontakt',
  'LBL_CREATE_INVITEE' => 'Utwórz uczestnika',
  'LBL_CREATE_LEAD' => 'jako Namiar',
  'LBL_CREATE_MODULE' => 'Dodaj rozmowę tel.',
  'LBL_DATE' => 'Data rozpoczęcia:',
  'LBL_DATE_END' => 'Data zakończenia',
  'LBL_DATE_END_ERROR' => 'Data zakończenia jest wcześniejsza niż data rozpoczęcia',
  'LBL_DATE_TIME' => 'Data i czas rozpoczęcia:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Rozmowy telelefoniczne',
  'LBL_DEL' => 'Usuń',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informacje',
  'LBL_DIRECTION' => 'Kierunek:',
  'LBL_DURATION' => 'Czas trwania:',
  'LBL_DURATION_HOURS' => 'Czas trwania (godziny):',
  'LBL_DURATION_MINUTES' => 'Czas trwania (minuty):',
  'LBL_EDIT_ALL_RECURRENCES' => 'Edytuj wszystkie cykle',
  'LBL_EMAIL' => 'E-mail',
  'LBL_EMAIL_REMINDER' => 'Przypomnienie poprzez e-mail',
  'LBL_EMAIL_REMINDER_SENT' => 'E-mail przypominający został wysłany',
  'LBL_EMAIL_REMINDER_TIME' => 'Przypomnienie e-mail',
  'LBL_EMPTY_SEARCH_RESULT' => 'Nie znaleziono żadnych wyników. Utwórz uczestnika poniżej.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Przydzielony użytkownik ID',
  'LBL_EXPORT_CREATED_BY' => 'Stworzone przez ID',
  'LBL_EXPORT_DATE_START' => 'Data i czas rozpoczęcia',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Zmodyfikowane przez ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Powiązany z modułem',
  'LBL_EXPORT_REMINDER_TIME' => 'Czas przypomnienia (w minutach)',
  'LBL_FIRST_NAME' => 'Imię',
  'LBL_HELP_CREATE' => 'Moduł {{plural_module_name}} składa się z rekordów rozmów telefonicznych dodanych przez użytkowników Twojej firmy.  {{plural_module_name}} mogą mieć status "Planowana", "Przeprowadzona" lub "Nieprzeprowadzona". Uczestnikami rozmowy mogą być zarówno użytkownicy Sugar, jak również {{contacts_module}} i {{leads_module}}.

Aby utworzyć Rozmowę tel.:
1. Wprowadź odpowiednie wartości do pól.
    - Pola oznaczone jako "Wymagane" muszą zostać uzupełnione przed zapisaniem.
    - Kliknij "Pokaż więcej", aby wyświetlić więcej pól.
2. Dodaj uczestników Rozmowy tel.
    - Kliknij "Wybierz uczestnika", aby dodać istniejącego użytkownika, Kontakt lub Namiar do Rozmowy tel.
    - Kliknij ikonę z plusem po prawej stronie "Wybierz uczestnika", aby utworzyć uczestnika rozmowy jako nowy rekord Sugar.
3. Kliknij "Zapisz", aby zapisać nowy rekord i powrócić do poprzedniej strony.
    - Wybierz "Zapisz i pokaż", aby otworzyć rekord widoku Rozmowy tel. w nowym oknie.
    - Wybierz "Zapisz i utwórz nowy", aby bez zwłoki utworzyć nową Rozmowę tel.',
  'LBL_HELP_RECORD' => 'Moduł {{plural_module_name}} składa się z rekordów rozmów telefonicznych dodanych przez użytkowników Twojej firmy.  {{plural_module_name}} mogą mieć status "Planowana", "Przeprowadzona" lub "Nieprzeprowadzona". Uczestnikami rozmowy mogą być zarówno użytkownicy Sugar, jak również {{contacts_module}} i {{leads_module}}.

- Edytuj pola tego rekordu poprzez kliknięcie na odpowiednie pole lub na przycisk Edytuj.
- Przeglądaj lub modyfikuj powiązania z innymi rekordami w subpanelach poprzez przełączenie widoku dolnego lewego panelu na “Widok danych”.
- Dodawaj i przeglądaj komentarze użytkowników i historię zmian rekordu w Panelu aktywności poprzez przełączenie widoku dolnego lewego panelu na „Panel aktywności”.
- Obserwuj lub dodaj do ulubionych ten rekord za pomocą ikon znajdujących się z prawej strony nazwy rekordu.
- Dodatkowe działania dostępne są w liście rozwijalnej menu Działania po prawej stronie przycisku Edytuj.',
  'LBL_HELP_RECORDS' => 'Moduł {{plural_module_name}} zawiera rekordy rozmów telefonicznych, które mogą mieć status "Planowana", "Przeprowadzona" lub "Nieprzeprowadzona". Nadchodzące rozmowy, zaplanowane w ciągu najbliższych 24h mają datę rozpoczęcia podświetloną na niebiesko. Przeterminowane rozmowy mają datę rozpoczęcia podświetloną na czerwono.

W tym widoku listy Rozmów telefonicznych możesz przeglądać i edytować (w trybie in-line) informacje nt. rozmowy. Dodatkowe działania są dostępne w menu znajdującym się na końcu każdego wiersza rozmowy. Możesz wybrać "Zamknij" z menu przy każdej zaplanowane rozmowie, aby oznaczyć ją jako "Przeprowadzona".

Jako uczestnicy rozmowy mogą zostać dodani użytkownicy Sugar, kontakty oraz namiary. Rozmowa może zostać utworzona zarówno poprzez moduły: {{plural_module_name}} oraz Kalendarz, importowanie, jak również za pośrednictwem subpanelu Aktywności (dla modułów Legacy) lub dashletu Planowanych aktywności (dla modułów Sidecar) dla powiązanych rekordów modułu (np. Kontaktów, Kontrahentów, itp.), który automatycznie tworzy relacje między obydwoma rekordami.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notatki',
  'LBL_HOURS_ABBREV' => 'g',
  'LBL_HOURS_MINUTES' => '(godziny/minuty)',
  'LBL_INVITEE' => 'Uczestnicy',
  'LBL_LAST_NAME' => 'Nazwisko',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Namiary',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielono do',
  'LBL_LIST_CLOSE' => 'Zamknij',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_DATE' => 'Data rozpoczęcia',
  'LBL_LIST_DIRECTION' => 'Kierunek',
  'LBL_LIST_DURATION' => 'Czas trwania',
  'LBL_LIST_FORM_TITLE' => 'Lista rozmowów telefonicznych',
  'LBL_LIST_MY_CALLS' => 'Moje rozmowy telefoniczne',
  'LBL_LIST_RELATED_TO' => 'Powiązane z',
  'LBL_LIST_RELATED_TO_ID' => 'Powiązane z ID',
  'LBL_LIST_SUBJECT' => 'Temat',
  'LBL_LIST_TIME' => 'Czas rozpoczęcia',
  'LBL_LOG_CALL' => 'Historia rozmów telefonicznych',
  'LBL_MEMBER_OF' => 'Jest członkiem',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Rozmowy telefoniczne',
  'LBL_MODULE_NAME_SINGULAR' => 'Rozmowa tel.',
  'LBL_MODULE_TITLE' => 'Rozmowy telefoniczne: Strona główna',
  'LBL_MY_SCHEDULED_CALLS' => 'Moje zaplanowane rozmowy',
  'LBL_NAME' => 'Dane',
  'LBL_NEW_FORM_TITLE' => 'Dodaj wydarzenie',
  'LBL_NO_ACCESS' => 'Nie posiadasz uprawnień, aby utworzyć $module',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'ID elementu nadrzędnego',
  'LBL_PHONE' => 'Telefon',
  'LBL_POPUP_REMINDER_TIME' => 'Przypomnienie popup',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Zaplanowałeś(-aś) {{moduleSingularLower}} na {{formatDate date_start}}, jednakże nie masz uprawnień dostępu do niej.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Zaplanowałeś(-aś) {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> na {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Cykliczność',
  'LBL_RECURRING_LIMIT_ERROR' => 'Ta cykliczna rozmowa tel. nie może zostać zaplanowana, ponieważ przekracza dozwoloną maksymalną liczbę $limit powtórzeń.',
  'LBL_RECURRING_SOURCE' => 'Źródło cyklu',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Rozmowa tel. z {{{this}}}',
  'LBL_RELATED_TO' => 'Powiązany z:',
  'LBL_REMINDER' => 'Przypomnienia:',
  'LBL_REMINDER_EMAIL' => 'E-mail',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-mail do uczestników',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Czas przypomnienia',
  'LBL_REMINDER_TITLE' => 'Rozmowa tel.:',
  'LBL_REMOVE' => 'Usuń',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Usuń wszystkie cykle',
  'LBL_REPEAT_COUNT' => 'Liczba powtórzeń',
  'LBL_REPEAT_DOW' => 'Dni tygodnia wydarzenia',
  'LBL_REPEAT_END' => 'Koniec',
  'LBL_REPEAT_END_AFTER' => 'Po',
  'LBL_REPEAT_END_BY' => 'Do',
  'LBL_REPEAT_INTERVAL' => 'Interwał powtórzenia',
  'LBL_REPEAT_OCCURRENCES' => 'cyklach',
  'LBL_REPEAT_PARENT_ID' => 'ID powtarzanego rekordu',
  'LBL_REPEAT_TYPE' => 'Typ powtórzenia',
  'LBL_REPEAT_UNTIL' => 'Powtarzaj aż do',
  'LBL_REVENUELINEITEMS' => 'Pozycje szansy',
  'LBL_SCHEDULING_FORM_TITLE' => 'Harmonogram',
  'LBL_SEARCH_BUTTON' => 'Wyszukiwanie',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie',
  'LBL_SELECT_FROM_DROPDOWN' => 'Najpierw dokonaj wyboru z listy rozwijalnej "Powiązany z:".',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Zapisz i wyślij zaproszenia',
  'LBL_SEND_BUTTON_TITLE' => 'Zapisz i wyślij zaproszenia [Alt+I]',
  'LBL_SEND_INVITES' => 'Wyślij zaproszenia',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Temat:',
  'LBL_SYNCED_RECURRING_MSG' => 'Ta rozmowa została wprowadzona w innym systemie i została zsynchronizowana z Sugar. Aby dokonać zmian przejdź do oryginalnego rekordu w innym systemie, zmiany w nim wprowadzone zostaną zsynchronizowane z tym rekordem.',
  'LBL_TIME' => 'Czas rozpoczęcia:',
  'LBL_TIME_END' => 'Czas zakończenia',
  'LBL_USERS_SUBPANEL_TITLE' => 'Użytkownicy',
  'LNK_CALL_LIST' => 'Rozmowy telefoniczne',
  'LNK_IMPORT_CALLS' => 'Import rozmów',
  'LNK_NEW_ACCOUNT' => 'Utwórz kontrahenta',
  'LNK_NEW_APPOINTMENT' => 'Dodaj spotkanie',
  'LNK_NEW_CALL' => 'Dodaj rozmowę',
  'LNK_NEW_MEETING' => 'Dodaj spotkanie',
  'LNK_NEW_OPPORTUNITY' => 'Utwórz szansę',
  'LNK_SELECT_ACCOUNT' => 'Wybierz kontrahenta',
  'NOTICE_DURATION_TIME' => 'Czas trwania musi być dłuższy niż 0',
  'NTC_REMOVE_INVITEE' => 'Czy na pewno chcesz usunąć uczestnika rozmowy?',
  'TPL_CALL_STATUS_CHANGED' => 'Rozmowa tel. została oznaczona jako {{status}}.',
);

