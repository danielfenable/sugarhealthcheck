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
  'ERR_DELETE_RECORD' => 'Musisz podać numer rekordu, aby usunąć spotkanie.',
  'LBL_ACCEPT_LINK' => 'Link akceptacji',
  'LBL_ACCEPT_STATUS' => 'Status',
  'LBL_ACCEPT_THIS' => 'Akceptuj',
  'LBL_ACCOUNT_NAME' => 'Kontrahent',
  'LBL_ACTIVITIES_REPORTS' => 'Raport aktywności',
  'LBL_ADD_BUTTON' => 'Dodaj',
  'LBL_ADD_INVITEE' => 'Dodaj uczestników',
  'LBL_ASSIGNED_TO_NAME' => 'Przydzielono do:',
  'LBL_CANCEL_CREATE_INVITEE' => 'Anuluj',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Na pewno chcesz usunąć wszystkie cykliczne rekordy?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_CREATED_BY' => 'Utworzone przez',
  'LBL_CREATED_USER' => 'Utworzono przez',
  'LBL_CREATE_AND_ADD' => 'Utwórz i dodaj',
  'LBL_CREATE_CONTACT' => 'jako Kontakt',
  'LBL_CREATE_INVITEE' => 'Utwórz uczestnika',
  'LBL_CREATE_LEAD' => 'jako Namiar',
  'LBL_CREATE_MODULE' => 'Zaplanuj spotkanie',
  'LBL_CREATOR' => 'Spotkanie utworzone przez',
  'LBL_DATE' => 'Data rozpoczęcia:',
  'LBL_DATE_END' => 'Data zakończenia',
  'LBL_DATE_END_ERROR' => 'Data zakończenia jest wcześniejsza niż data rozpoczęcia',
  'LBL_DATE_TIME' => 'Data i czas rozpoczęcia:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Spotkania',
  'LBL_DEL' => 'Usuń',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informacje opisowe',
  'LBL_DIRECTION' => 'Kierunek:',
  'LBL_DISPLAYED_URL' => 'Wyświetl URL',
  'LBL_DURATION' => 'Czas trwania:',
  'LBL_DURATION_HOURS' => 'Czas trwania w godzinach:',
  'LBL_DURATION_MINUTES' => 'Czas trwania w minutach:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Edytuj wszystkie cykle',
  'LBL_EMAIL' => 'E-mail',
  'LBL_EMAIL_REMINDER' => 'Przypomnienie e-mail',
  'LBL_EMAIL_REMINDER_SENT' => 'E-mail przypominający został wysłany',
  'LBL_EMAIL_REMINDER_TIME' => 'Przypomnienie e-mail',
  'LBL_EMPTY_SEARCH_RESULT' => 'Nie znaleziono żadnych wyników. Utwórz uczestnika poniżej.',
  'LBL_ERROR_LAUNCH_MEETING_GENERAL' => 'Wystąpił błąd podczas tworzenia spotkania. Skontaktuj się z Administratorem.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Przydzielono do',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Przydzielono do',
  'LBL_EXPORT_CREATED_BY' => 'Utworzone przez',
  'LBL_EXPORT_DATE_END' => 'Data i czas zakończenia',
  'LBL_EXPORT_DATE_START' => 'Data i czas rozpoczęcia',
  'LBL_EXPORT_DISPLAYED_URL' => 'Wyświetlane URL',
  'LBL_EXPORT_EXTERNAL_ID' => 'Zewnętrzne ID',
  'LBL_EXPORT_HOST_URL' => 'Host URL',
  'LBL_EXPORT_JOIN_URL' => 'Url klienta',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Zmodyfikowane przez',
  'LBL_EXPORT_PARENT_ID' => 'Nadrzędne ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Typ powiązania',
  'LBL_EXPORT_REMINDER_TIME' => 'Czas przypomnienia (w minutach)',
  'LBL_EXTERNALID' => 'ID zewnętrznej aplikacji',
  'LBL_EXTNOSTART_HEADER' => 'Błąd: Nie możesz rozpocząć spotkania',
  'LBL_EXTNOSTART_MAIN' => 'Nie możesz rozpocząć spotkania, ponieważ nie jesteś administratorem bądź twórcą spotkania.',
  'LBL_EXTNOT_GO_BACK' => 'Wróć do poprzedniego rekordu',
  'LBL_EXTNOT_HEADER' => 'Błąd: Brak zaproszenia"',
  'LBL_EXTNOT_MAIN' => 'Nie możesz dołączyć do spotkania, ponieważ nie posiadasz zaproszenia.',
  'LBL_EXTNOT_RECORD_LINK' => 'Zobacz spotkanie',
  'LBL_FIRST_NAME' => 'Imię',
  'LBL_HELP_CREATE' => 'Moduł {{plural_module_name}} składa się z rekordów spotkań dodanych przez użytkowników Twojej firmy.  {{plural_module_name}} mogą mieć status "Planowane", "Przeprowadzone" lub "Nieprzeprowadzone". Uczestnikami spotkania mogą być zarówno użytkownicy Sugar, jak również {{contacts_module}} i {{leads_module}}.

Aby utworzyć Spotkanie:
1. Wprowadź odpowiednie wartości do pól.
    - Pola oznaczone jako "Wymagane" muszą zostać uzupełnione przed zapisaniem.
    - Kliknij "Pokaż więcej", aby wyświetlić więcej pól.
2. Dodaj uczestników Spotkania.
    - Kliknij "Wybierz uczestnika", aby dodać istniejącego użytkownika, Kontakt lub Namiar do Spotkania.
    - Kliknij ikonę z plusem po prawej stronie "Wybierz uczestnika", aby utworzyć uczestnika spotkania jako nowy rekord Sugar.
3. Kliknij "Zapisz", aby zapisać nowy rekord i powrócić do poprzedniej strony.
    - Wybierz "Zapisz i pokaż", aby otworzyć rekord widoku Spotkania w nowym oknie.
    - Wybierz "Zapisz i utwórz nowe", aby bez zwłoki utworzyć nowe Spotkanie.',
  'LBL_HELP_RECORD' => 'Moduł {{plural_module_name}} składa się z rekordów spotkań dodanych przez użytkowników Twojej firmy.  {{plural_module_name}} mogą mieć status "Planowane", "Przeprowadzone" lub "Nieprzeprowadzone". Uczestnikami spotkania mogą być zarówno użytkownicy Sugar, jak również {{contacts_module}} i {{leads_module}}.

- Edytuj pola tego rekordu poprzez kliknięcie na odpowiednie pole lub na przycisk Edytuj.
- Przeglądaj lub modyfikuj powiązania z innymi rekordami w subpanelach poprzez przełączenie widoku dolnego lewego panelu na “Widok danych”.
- Dodawaj i przeglądaj komentarze użytkowników i historię zmian rekordu w Panelu aktywności poprzez przełączenie widoku dolnego lewego panelu na „Panel aktywności”.
- Obserwuj lub dodaj do ulubionych ten rekord za pomocą ikon znajdujących się z prawej strony nazwy rekordu.
- Dodatkowe działania dostępne są w liście rozwijalnej menu Działania po prawej stronie przycisku Edytuj.',
  'LBL_HELP_RECORDS' => 'Moduł {{plural_module_name}} zawiera rekordy spotkań, które mogą mieć status "Planowane", "Przeprowadzone" lub "Nieprzeprowadzone". Nadchodzące spotkania, zaplanowane w ciągu najbliższych 24h mają datę rozpoczęcia podświetloną na niebiesko. Przeterminowane spotkania mają datę rozpoczęcia podświetloną na czerwono.

W tym widoku listy Spotkań możesz przeglądać i edytować (w trybie in-line) informacje nt. spotkania. Dodatkowe działania są dostępne w menu znajdującym się na końcu każdego wiersza spotkania. Możesz wybrać "Zamknij" z menu przy każdym zaplanowanym spotkaniu, aby oznaczyć je jako "Przeprowadzone".

Jako uczestnicy spotkania mogą zostać dodani użytkownicy Sugar, kontakty oraz namiary. Spotkanie może zostać utworzone zarówno poprzez moduły: {{plural_module_name}} oraz Kalendarz, importowanie, jak również za pośrednictwem subpanelu Aktywności (dla modułów Legacy) lub dashletu Planowanych aktywności (dla modułów Sidecar) dla powiązanych rekordów modułu (np. Kontaktów, Kontrahentów, itp.), który automatycznie tworzy relacje między obydwoma rekordami.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notatki',
  'LBL_HOST_EXT_MEETING' => 'Rozpocznij spotkanie',
  'LBL_HOST_URL' => 'Host URL',
  'LBL_HOURS_ABBREV' => 'g',
  'LBL_HOURS_MINS' => '(godziny/minuty)',
  'LBL_INVITEE' => 'Uczestnicy',
  'LBL_JOIN_EXT_MEETING' => 'Dołącz do spotkania',
  'LBL_JOIN_MEETING' => 'Dołącz do {{meetingType}}',
  'LBL_LAST_NAME' => 'Nazwisko',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Namiary',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielono do',
  'LBL_LIST_CLOSE' => 'Zamknij',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_DATE' => 'Data Rozpoczęcia',
  'LBL_LIST_DATE_MODIFIED' => 'Data modyfikacji',
  'LBL_LIST_DIRECTION' => 'Kierunek',
  'LBL_LIST_DUE_DATE' => 'Termin',
  'LBL_LIST_FORM_TITLE' => 'Lista spotkań',
  'LBL_LIST_JOIN_MEETING' => 'Dołącz do spotkania',
  'LBL_LIST_MY_MEETINGS' => 'Moje spotkania',
  'LBL_LIST_RELATED_TO' => 'Powiązane z',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUBJECT' => 'Temat',
  'LBL_LIST_TIME' => 'Czas rozpoczęcia',
  'LBL_LOCATION' => 'Miejsce spotkania:',
  'LBL_MEETING' => 'Spotkanie:',
  'LBL_MEETING_CLOSE_SUCCESS' => 'Spotkanie zostało zamknięte.',
  'LBL_MEETING_INFORMATION' => 'Informacje o spotkaniu',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODIFIED_BY' => 'Zmodyfikowane przez',
  'LBL_MODIFIED_USER' => 'Zmodyfikowano przez',
  'LBL_MODULE_NAME' => 'Spotkania',
  'LBL_MODULE_NAME_SINGULAR' => 'Spotkanie',
  'LBL_MODULE_TITLE' => 'Spotkania: Strona główna',
  'LBL_MY_SCHEDULED_MEETINGS' => 'Moje zaplanowane spotkania',
  'LBL_NAME' => 'Nazwa',
  'LBL_NEW_FORM_TITLE' => 'Haromonogram spotkań',
  'LBL_NO_ACCESS' => 'Nie posiadasz uprawnień, aby utworzyć $module',
  'LBL_OUTLOOK_ID' => 'ID Outlook',
  'LBL_PARENT_ID' => 'Nadrzędne ID',
  'LBL_PARENT_TYPE' => 'Typ nadrzędny',
  'LBL_PASSWORD' => 'Hasło spotkania',
  'LBL_PHONE' => 'Telefon biurowy:',
  'LBL_POPUP_REMINDER' => 'Przypomnienie popup',
  'LBL_POPUP_REMINDER_TIME' => 'Przypomnienie popup',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Zaplanowałeś(-aś) {{moduleSingularLower}} na {{formatDate date_start}}, jednakże nie masz uprawnień dostępu do niego.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Zaplanowałeś(-aś) {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> na {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Cykliczność',
  'LBL_RECURRING_LIMIT_ERROR' => 'To cykliczne spotkanie nie może zostać zaplanowane, ponieważ przekracza dozwoloną maksymalną liczbę $limit powtórzeń.',
  'LBL_RECURRING_SOURCE' => 'Źródło cyklu',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Spotkanie z {{{this}}}',
  'LBL_RELATED_TO' => 'Powiązany z:',
  'LBL_REMINDER' => 'Przypomnienia:',
  'LBL_REMINDER_EMAIL' => 'E-mail',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-mail do uczestników',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Czas przypomnienia',
  'LBL_REMINDER_TITLE' => 'Spotkanie:',
  'LBL_REMOVE' => 'usuń',
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
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie spotkań',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Zapisz i wyślij zaproszenia',
  'LBL_SEND_BUTTON_TITLE' => 'Zapisz i wyślij zaproszenia',
  'LBL_SEND_INVITES' => 'Wyślij zaproszenia',
  'LBL_SEQUENCE' => 'Kolejność aktualizacji spotkań',
  'LBL_START_MEETING' => 'Rozpocznij {{meetingType}}',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Temat:',
  'LBL_SYNCED_RECURRING_MSG' => 'To spotkanie zostało wprowadzone w innym systemie i zostało zsynchronizowane z Sugar. Aby dokonać zmian przejdź do oryginalnego rekordu w innym systemie, zmiany w nim wprowadzone zostaną zsynchronizowane z tym rekordem.',
  'LBL_TIME' => 'Czas rozpoczęcia:',
  'LBL_TYPE' => 'Typ spotkania',
  'LBL_URL' => 'Rozpocznij/Dołącz do spotkania',
  'LBL_USERS_SUBPANEL_TITLE' => 'Użytkownicy',
  'LNK_IMPORT_MEETINGS' => 'Importuj spotkania',
  'LNK_MEETING_LIST' => 'Lista spotkań',
  'LNK_NEW_APPOINTMENT' => 'Dodaj spotkanie',
  'LNK_NEW_MEETING' => 'Zaplanuj spotkanie',
  'NOTICE_DURATION_TIME' => 'Czas trwania musi być większy niż 0',
  'NTC_REMOVE_INVITEE' => 'Czy na pewno chcesz usunąć uczestnika spotkania?',
);

