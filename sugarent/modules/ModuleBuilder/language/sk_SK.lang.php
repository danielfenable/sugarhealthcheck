<?php
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

$mod_strings = array(
    'LBL_LOADING' => 'Načítava' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Skryť možnosti' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Vymazať' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'S podporou SugarCRM' /*for 508 compliance fix*/,
'help'=>array(
    'package'=>array(
            'create'=>'Vytvoriť<br />Zadajte Meno pre balík. Meno, ktoré vkladáte musí byť alfanumerické a nesmie obsahovať medzery.(Príklad: HR_Management)<br /><br />Môžete zadať aj informácie Autora a Popis balíku.<br /><br />Stlačte Uložiť na vytvorenie balíka.',
            'modify'=>'Tu sa zobrazujú vlastnosti a možnosti úpravy balíka.<br /><br />Môžete upraviť Meno, Autora a Popis balíka, takisto aj prezerať a upravovať všetky moduly, ktoré balík obsahuje.<br /><br />Stlačte Nový Modul na vytvorenie modulu balíka.<br /><br />Ak balík obsahuje aspoň jeden balík, môžete tento balík Publikovať a rozvinúť, ako aj Exportovať úpravy vykonané v balíku.',
            'name'=>'meno<br />Toto je Meno súčastného balíka.<br /><br />Zadávané meno musí byť alfanumerické, začínať písmenom a nesmie obsahovať medzery:(Príklad:HR_Management)',
            'author'=>'autor<br />Toto je Autor, ktorý je zobrazený počas inštalácie ako meno osoby, ktorá vytvorila tento balík.<br /><br />Autor môže byť jedinec, ale aj spoločnosť.',
            'description'=>'popis<br />Toto je Popis balíka, ktorý je zobrazený počas inštalácie.',
            'publishbtn'=>'uverejniť btn<br />Stlačte Uverejniť pre uloženie všetkých údajov a pre vytvorenie .zip súboru, ktorý je inštalovateľnou verziou balíka.<br /><br />Požite Module Loader pre nahranie .zip súboru a nainštalovaniu balíka.',
            'deploybtn'=>'rozvinúť btn<br />Stlačte Rozvinúť pre uloženie všetkých dát a inštalácii balíka, vrátane všetkych modulovm v súčastnej inštancii.',
            'duplicatebtn'=>'Stlačte Duplikovať pre kópiu obsahu balíka do balíka nového a zobrazenie tohoto balíka.<br /><br />Pre nový balík bude automaticky vygenerované pripojením čísla ku koncu mena originálneho balíka. Nový balík môžete premenovať vložením nového Mena a stlačením tlačidla Uložiť.',
            'exportbtn'=>'Stlačte Export pre vytvorenie .zip súboru, obsahujúceho úpravy vykonané v balíku.<br /><br />Genrovaný súbor nie je inštalovateľnou verziou balíka.<br /><br />Použite Modul Loader pre import .zip súboru a k zobrazeniu balíka, vrátane úprav, v Modul Builder.',
            'deletebtn'=>'Stlačte Zmazať pre zmazanie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
            'savebtn'=>'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
            'existing_module'=>'Stlačte ikonu Modul pre úpravu vlastností a prispôsobenie polí, vzťahov a štruktúr pridružených k tomuto modulu.',
            'new_module'=>'Stlačte Nový Modul pre vytvorenie nového balíka.',
            'key'=>'Tento 5-miestny, alfanumerický Kľúč bude použitý ako prefix(predpona) pre všetky adresáre, názvy tried a tabuľky databáz pre všetky moduly v súčastnom balíku.<br /><br />Kľúč sa používa v snahe dosiahnúť jedinečnosť názvov tabuliek.',
            'readme'=>'Zvoľte pre pridanie Readme textového súboru pre tento balik.<br /><br />Tento Readme súbor bude dostupný počas celej inštalácie.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Zadajte Meno modulu. Názov, ktorý zadáte sa zobrazí v navigačnom menu.<br /><br />Pre zobrazenie navigačného menu pre tento modul potvrďte checkbox Navigačné Menu.<br /><br />Pre zobrazenie poľa voľby Tímov v záznamoch modulu potvrďte chceckbox Tímová Bezpečnosť.<br /><br />Potom zvoľte typ modulum ktorý si prajete vytvoriť.<br /><br />Zvoľte typ šablóny. Každá šablóna obsahuje špecifický súbor polí, ako aj pre-definované rozloženia, používané ako základy pre Váš modul.<br /><br />Stlačte Uložiť pre vytvorenie modulu.',
        'modify'=>'Môžte meniť vlastnosti modulu, alebo upravovať Polia, Vzťahy a Rozloženia, vzťahujúce sa k modulu.',
        'importable'=>'Potvrdením checkboxu Importovateľné povolíte import pre tento modul.',
        'team_security'=>'Potvrdením checkboxu Tímová Bezpečnosť povolíte tímovú bezpečnosť pre tento modul.',
        'reportable'=>'Potvrdením povolíte beh hlásení na tento modul.',
        'assignable'=>'Zaškrtnutím tejto voľby umožníte záznamu v tomto module priradiť sa k vybranému užívateľovi.',
        'has_tab'=>'Zaškrtnutie poľa Navigačná Karta pridá navigačnú kartu do modulu.',
        'acl'=>'Zaškrtnutie tohto políčka aktivuje Access Controls pre tento modul, vratane Field Level Security.',
        'studio'=>'Zaškrtnutie tohto políčka umožní administrátorom upravovať tento modul v rámci Štúdia.',
        'audit'=>'Zaškrtnutie tohto políčka aktivuje Auditing pre tento modul. Zmeny určitých polí budú zaznamenávané, takže administrátori môžu prezerať históriu zmien.',
        'viewfieldsbtn'=>'Kliknite na tlačidlo Zobraziť pole pre zobrazenie poľa spojeného s modulom a vytvárať a upravovať Vlastné pole.',
        'viewrelsbtn'=>'Kliknite na tlačidlo Zobraziť vzťahy pre zobrazenie vzťahov spojených s týmto modulom a vytvoriť nové vzťahy.',
        'viewlayoutsbtn'=>'Kliknite na tlačidlo Zobraziť rozvrhnutie pre zobrazenie rozloženia pre modul a prispôsobiť pole usporiadané v rámci rozloženia.',
        'viewmobilelayoutsbtn' => 'Click <b>View Mobile Layouts</b> to view the mobile layouts for the module and to customize the field arrangement within the layouts.',
        'duplicatebtn'=>'Stlačte Duplikovať pre kópiu obsahu balíka do balíka nového a zobrazenie tohoto balíka.<br /><br />Pre nový balík bude automaticky vygenerované pripojením čísla ku koncu mena originálneho balíka. Nový balík môžete premenovať vložením nového Mena a stlačením tlačidla Uložiť.',
        'deletebtn'=>'Stlačte Zmazať pre zmazanie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
        'name'=>'meno<br />Toto je Meno súčastného balíka.<br /><br />Zadávané meno musí byť alfanumerické, začínať písmenom a nesmie obsahovať medzery:(Príklad:HR_Management)',
        'label'=>'Toto je štítok, ktorý nebude objavený v záložke navigácie pre modul.',
        'savebtn'=>'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
        'type_basic'=>'Základný typ šablóny poskytuje základné pole, napríklad mená, ktoré je pridelený tím, dátum vytvorenia a opis polí.',
        'type_company'=>'Spoločnosť typu šablóny poskytuje organizácie špecifické oblasti, ako je názov spoločnosti, priemyslu a fakturačná adresa.<br /><br />Prostredníctvom tejto šablóny vytvorí moduly, ktoré sú podobné štandardným účtom modulu.',
        'type_issue'=>'type_issue<br />Problém typu šablóny poskytuje prípad-a bug-špecifických oblastiach, ako je číslo, stav, priority a popis.<br /><br />Pomocou tejto šablóny vytvoriť moduly, ktoré sú podobné štandardným veciach a modulov Bug Tracker.',
        'type_person'=>'type_person<br />Osoba typu šablóny poskytuje individuálne-špecifické oblasti, ako je oslovenie, titul, meno, adresu a telefónne číslo.<br /><br />Pomocou tejto šablóny vytvoriť moduly, ktoré sú podobné štandardným Kontakty a vedie modulov.',
        'type_sale'=>'type_sale<br />Predaj šablóna typu poskytuje príležitosť špecifické oblasti, ako je príležitosť zdroja, javisko, sumu a pravdepodobnosť.<br /><br />Pomocou tejto šablóny vytvoriť moduly, ktoré sú podobné štandardným Možnosti modulu.',
        'type_file'=>'type_file<br />File šablóna poskytuje dokumentu špecifické oblasti, ako je názov súboru, typ dokumentu, a zverejní dátum.<br /><br />Pomocou tejto šablóny vytvoriť moduly, ktoré sú podobné štandardným Dokumenty modulu.',

    ),
    'dropdowns'=>array(
        'default' => 'Prednastavený',
        'editdropdown'=>'Roletové menu môžu byť použíté ako štandardné alebo upravené roletové polia v hocijakom module. <br /><br />Poskytnite <b>Meno</b> pre roletové menu.<br /><br />Ak je v aplikácii nainštalovaný hocijaký jazykový balíček môžete vybrať <b>Jazyk</b> na používanie pre zoznam položiek.<br /><br />V poli <b>Meno Položky</b> zadajte meno pre možnosť v roletovom menu. Toto meno sa nezobrazí v roletovom menu, ktoré je viditeľné pre užívateľov.<br /><br />V poli <b>Zobraz názov</b> zadajte meno, ktoré bude viditeľné pre užívateľov. <br /><br />Po zadaní mena položky a zobrazenia názvu, kliknite <b>Pridať</b> položku na roletové menu.<br /><br />Na zmenu poradia na zozname, chyťte a pustite položky na požadované pozície. <br /><br />Na úpravu zobrazeného názvu položky kliknite na <b>Upraviť ikonu</b> a vložte nový názov. Na vymazanie položky z roletového menu kliknite na <b>Vymazať ikonu</b>.<br /><br />Na obnovenie zmeny, ktorú ste urobili zobrazenému názvu kliknite na <b>Späť</b>. Obnovenie zmeny, ktorá bola zmenená kliknite na <b>Obnoviť</b>.<br /><br />Kliknite <b>Uložiť</b> na uloženie roletového menu.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
        'historyBtn'=> 'Kliknite na tlačidlo Zobraziť históriu prehliadania a obnoviť predtým uložený rozvrhnutie z histórie.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.',
        'Hidden' 	=> 'Skrytý',
        'Default'	=> 'Prednastavený',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
        'historyBtn'=> 'Kliknite na tlačidlo Zobraziť históriu prehliadania a obnoviť predtým uložený rozvrhnutie z histórie.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> 'Skrytý',
        'Available' => 'Na sklade',
        'Default'	=> 'Prednastavený'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
        'historyBtn'=> 'Kliknite na tlačidlo Zobraziť históriu prehliadania a obnoviť predtým uložený rozvrhnutie z histórie.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> 'Skrytý',
        'Default'	=> 'Prednastavený'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
        'Hidden' 	=> 'Skrytý',
        'historyBtn'=> 'Kliknite na tlačidlo Zobraziť históriu prehliadania a obnoviť predtým uložený rozvrhnutie z histórie.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Default'	=> 'Prednastavený'
    ),
    'layoutEditor'=>array(
        'defaultdetailview'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>DetailView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'defaultquickcreate'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>QuickCreate</b> form.<br><br>The QuickCreate form appears in the subpanels for the module when the Create button is clicked.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'default'	=> 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'defaultrecordview'   => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>Record View</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'saveBtn'	=> 'Kliknite <b>Uložiť</b> na zachovanie zmien, ktoré ste urobili rozloženiu od kedy ste ho naposledy uložili. <br /><br />Zmeny nebudú zobrazené v module dokiaľ ich nerozmiestnite.',
        'historyBtn'=> 'Kliknite na tlačidlo Zobraziť históriu prehliadania a obnoviť predtým uložený rozvrhnutie z histórie.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'publishBtn'=> 'Kliknite <b>Uložiť a Rozmiestniť</b> na uloženie všetkých zmien, ktoré ste urobili rozmiestneniu od kedy ste ho naposledy uložili. Tým sa zmeny stanú v moduli aktívne.<br /><br />V moduli bude rozloženie okamžite zobrazené.',
        'toolbox'	=> '<b>Sada nástrojov</b> obsahuje <b>Kôš</b>, prídavné časti a sadu dostupných polí, ktoré môžete pridať k rozloženiu. <br /><br />Časti rozloženia a polia v Sade nástrojov môžu byť ťahané a pustené do rozloženia. Časti rozloženia a polia môžu byť ťahané a pustené z rozloženia do Sady nástrojov. <br /><br />Časťou rozloženia sú <b>Panely</b> a <b>Riadky</b>. Pridaním nového riadku alebo nového panela do rozloženia poskytne ďalšie miesto v poliach rozloženia. <br /><br />Ťahajte a pustite hocijaké pole v Sade nástrojov alebo rozloženia do obsadeného pola na výmenu umiestnenia tých dvoch polí.',
        'panels'	=> '<b>Rozloženie</b> poskytuje náhľad ako bude rozloženie vyzerať v module keď sa rozmiestnia zmeny. <br /><br />Môžete zmeniť polia, riadky a panely ťahaním a pustením na požadovanon mieste. <br /><br />Odoberte častí ťahaním a pustením do <b>Koša</b> v Sade nástrojov, alebo pridajte novú časť alebo pole ťahaním ich zo Sady nástrojov a pustením ich na požadované miesto v rozmiestnení.',
        'delete'	=> 'Tu ťahajte a pustite hocijakú časť ak ich chcete odstrániť z rozloženia.',
        'property'	=> 'Upravte nápis zobrazený v tomto poli.<br /><b>Určenie Tabulátora</b> riadi v akom poradí bude tabulátor meniť medzi poliami.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'Prednastavený',
        'mbDefault'=>'<b>Polia</b>, ktoré sú dostupné pre modul sú uvedené v Mene Pola.<br /><br />Pre nastavenie vlastností pola, kliknite na Meno Pola.<br /><br />Pre vytvorenie nového pola, kliknite <b>Pridať Pole</b>. Pomenovanie spolu s inými vlastnosťami pola môžu byť upravené po jeho vytvorení kliknutím na Meno Pola.<br /><br />Po tom ako je modul rozmiestnený, nové polia vytvorené vo Vytvárači Modulov sú považované za štandardné polia v Študijnom rozloženom moduli.',
        'addField'	=> 'Vyberte <b>Typ Dát</b> pre nové pole. Typ, ktorý vyberiete určuje aký typ znakov môžu byť zadané pre to pole. Napríklad, iba celé čísla môžu byť zadané do polí pre celé čísla.<br /><br />Dajte <b>Meno</b> pre pole. Meno musí byť alfanumerické a nesmie mať žiadne medzery. Podtržníky sú platné. <br /><br /><b>Zobraziť Štítok</b> je štítok, ktorý sa zobrazí pre polia v modulovom rozložení. <b>Systémový štítok</b> sa používa pre pomenovanie pola v kóde. <br /><br />V závislosti od typu dát vybraných pre pole, niektoré z nasledujúcich vlastností môžu byť určené pre pole:<br /><br /><b>Pomocný Text</b> je viditeľný len v Štúdiu alebo v Stavači Modulov a môže byť použitý na popísanie polií pre administrátorov. <br /><br /><b>Predovlená Hodnota</b> sa zobrazí v poli. Užívatelia môžu zadať novú hodnotu do pola alebo použiť predvolenú hodnotu. <br /><br /><b>Maximálna veľkosť</b> hodnoty určuje maximálny počet znakov, ktoré môžu byť zadané do pola. <br /><br />Zaškrtnite <b>Požadované pole</b> aby ste vybrali požadované pole. Pre pole musí byť poskytnutá hodnota aby ste mohli uložiť záznam, ktorý obsahuje pole.<br /><br />Zaškrtnite <b>Audit</b> aby ste mohli pozorovať zmeny, ktoré sa udiali s polom v Logu Zmien.<br /><br />Zaškrtnite možnosť <b>Importovateľné</b> pole aby ste povolili, zakázali alebo vyžadovali importovať pole do Import Wizard.<br /><br />Zaškrtnite možnosť <b>Duplikované spojenie</b> aby ste povolili alebo zakázali spájať duplikáty alebo možnosť hľadať duplikáty. <br /><br />Ďalšie vlastnosti môžu byť pre určité dátové typy.',
        'editField' => 'Vlastnosti tohto poľa môžu byť upravené. <br /><br />Kliknite <b>Klon</b> pre vytvorenie nového poľa s rovnakými vlastnosťami.',
        'mbeditField' => '<b>Zobraz štítok</b> pola šablóny môže byť upravený. Iné vlastnosti pola môžu byť upravené. <br /><br />Kliknite <b>Klon</b> pre vytvorenie nového poľa s rovnakými vlastnosťami. <br /><br />Pre odobratie pola šablóny, aby sa nezobrazoval v moduli, odoberte pole z patričných rozložení.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Exportujte upravenia vytvorené v Štúdiu vytvorením balíkov, ktoré môžu byť nahrané do iného Sugar prípadu cez <b>Modulový zavádzacím programom</b>.<br /><br />Najprv, poskytnite <b>Meno balíka</b>. Môžete tak isto poskytnúť <b>Autora</b> a <b>Popis</b>.<br /><br />Vyberte modul, ktorý obsahuje upravenie, ktoré chcete exportovať. Iba moduly, ktoré obsahujú úpravy sa vám zobrazia na výber. <br /><br />Potom kliknite na <b>Export</b> pre vytvorenie .zip súboru pre balík, ktorý obsahuje úpravy.',
        'exportCustomBtn'=>'Kliknite <b>Export</b> pre vytvorenie balíku, ktorý obsahuje úpravy, ktoré chcete exportovať.',
        'name'=>'meno<br />Toto je Meno súčastného balíka.<br /><br />Zadávané meno musí byť alfanumerické, začínať písmenom a nesmie obsahovať medzery:(Príklad:HR_Management)',
        'author'=>'autor<br />Toto je Autor, ktorý je zobrazený počas inštalácie ako meno osoby, ktorá vytvorila tento balík.<br /><br />Autor môže byť jedinec, ale aj spoločnosť.',
        'description'=>'popis<br />Toto je Popis balíka, ktorý je zobrazený počas inštalácie.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Vitajte v mieste pre <b>Vývojárske Nástroje</b>.<br /><br />Používajte tieto nástroje v rámci tohto miesta na vytvorenie a spravovanie štandardných a upravených modulov a polí.',
        'studioBtn'	=> 'Používajte <b>Štúdio</b> na upravenie rozložených modulov.',
        'mbBtn'		=> 'Používajte <b>Stavaš Modulv</b> na vytvorenie nových modulov.',
        'sugarPortalBtn' => 'Používajte <b>Sugar Portálový Editor</b> na spravovanie a upravovanie Sugar Portálu.',
        'dropDownEditorBtn' => 'Používajte <b>Rolovací editor</b> na pridanie a editovanie globálnych rolovacích menu a rolovacích polí.',
        'appBtn' 	=> 'V aplikačnom móde môžete upravovať rôzne vlastnosti programu, ako napríklad: koľko TPS správ bude zobrazených na domovskej stránke.',
        'backBtn'	=> 'Vrátiť sa predchádzajúci krok.',
        'studioHelp'=> 'Používajte <b>Štúdio</b> na určenie ktoré a ako budú informácie zobrazené v moduloch.',
        'studioBCHelp' => 'štúdio BC Pomocník<br />označuje modul, ktorý je spätne kompatibilný',
        'moduleBtn'	=> 'Kliknite na upravenie tohto modulu.',
        'moduleHelp'=> 'Časti, ktoré upravujete pre tento modul, sa tu zobrazujú. <br /><br />Kliknite na ikonu pre vybranie častí, ktoré idete upraviť.',
        'fieldsBtn'	=> 'Vytvoriť a upraviť <b>Polia</b> na',
        'labelsBtn' => 'Upravte <b>Štítky</b>, ktoré sa zobrazujú za poli a iné názvy v moduly.'	,
        'relationshipsBtn' => 'Pridaj nové alebo existujúce <b>Vzťahy</b> pre modul.' ,
        'layoutsBtn'=> 'Upravte <b>rozloženia</b> modulu. Rozloženia sú rôzne pohľady modulu obsahujúci polia. <br /><br />Môžete určiť, ktoré polia sa zbrazia a ko budú ogranizované v každom rozložení.',
        'subpanelBtn'=> 'Určite, ktoré polia sa zobrazia v <b>Subpaneloch</b> modulu.',
        'portalBtn' =>'Upravte <b>Rozloženie</b> modulu, ktorý sa zobrazuje v <b>Sugar Portáli</b>',
        'layoutsHelp'=> 'Tu sa zobrazuje <b>Rozloženie</b> modulu, ktoré môže byť upravované.<br /><br />Rozloženie zobrazuje polia a dáta v poliach.<br /><br />Kliknite na ikonu na úpravu rozloženia.',
        'subpanelHelp'=> 'Tu sa zobrazujú <b>Subpanely</b> v moduly, ktoré môžu byť upravené.',
        'newPackage'=>'Kliknite na <b>Nový balík</b> pre vytvorenie nového balíka.',
        'exportBtn' => 'Kliknite <b>Export Upravenia</b> na vytvorenie a stiahnutie balíka obsahujúci upravenie spravené v Štúdiu pre špecifický modul.',
        'mbHelp'    => 'Použite <b>Stavač modulov</b> pre vytvorenie balíkov, ktoré obashujú moduly na základe štandardných alebo upravených predmetov.',
        'viewBtnEditView' => 'Upravte modulové rozloženie <b>UpraviťZobrazenie</b>.<br /><br />UpraviťZobrazenie je forma, ktorá obsahuje vstupné polia pre zachytávanie užívateľmi vložených dát.',
        'viewBtnDetailView' => 'Upravte modulové rozloženie <b>DetailnéZobrazenie</b>.<br /><br />DetailnéZobrazenie zobrazuje v polia s užívateľmi vloženými dátami.',
        'viewBtnDashlet' => 'Upravte modulový <b>Sugar Dashlet</b>, ktorý zahŕňa Sugar Dashlet Zoznam a Hľadanie.',
        'viewBtnListView' => 'Upravte modulový <b>ZoznamZobrazenie</b><br /><br />Výsledky hľadania sa zobrazia v ZoznamZobrazení.',
        'searchBtn' => 'Upravte modulové rozloženie <b>Hľadania</b>.<br /><br />Určíte, ktoré polia môžu byť použité na filtrovanie nahrávok, ktoré sa objavujú v ZoznameZobrazení.',
        'viewBtnQuickCreate' =>  'Upravte modulový rozloženie <b>RýchleVytvorenie</b>.<br /><br />Rýchlevytvorenie sa objavuje v subpaneloch a v emailovom module.',

        'searchHelp'=> 'Tu sú <b>Hľadania</b>, ktoré môžu byť upravené. <br /><br />Hľadanie obsahuje polia pre filtrovanie záznamov.<br /><br />Kliknite na ikonu na editovanie zobrazenia.',
        'dashletHelp' =>'Tu je rozloženie <b>Sugar Dashlet</b>, ktoré sa dá upravovať.<br /><br />Sugar Dashlet vám umožní pridávať stránky k domácemu modulu.',
        'DashletListViewBtn' =>'<b>Sugar Dashlet ZoznamZobrazenie</b> zobrazuje nahrávky na hľadaných filtroch Sugar Dashlet.',
        'DashletSearchViewBtn' =>'<b>Sugar Dashlet Hľadanie</b> filtruje nahrávky pre Sugar Dashlet ZoznamZobrazenie.',
        'popupHelp' =>'Tu môžete upraviť popup rozloženie.',
        'PopupListViewBtn' => '<b>Popup ZoznamovéZobrazenie</b> zobrazuje nahrávky na základe výsledkov vyhľadávanie popup-ov.',
        'PopupSearchViewBtn' => '<b>Popup Hľadanie</b> zobrazuje nahrávky pre Popup ZoznamovéZobrazenie.',
        'BasicSearchBtn' => 'Upravte <b>Zakladné Hľadanie</b>, ktoré sa objavuje v Zakladnom hľadacej tabuľke pre modul.',
        'AdvancedSearchBtn' => 'Upraviť <b>Rozšírené Hľadanie</b>, ktoré sa zobrazuje v Rozšírenom Hľadaní tabuľke pre tento modul.',
        'portalHelp' => 'Riadiť a upraviť <b>Sugar Portál</b>',
        'SPUploadCSS' => 'Nahrať <b>Štýlový Hárok</b> pre Sugar Portal.',
        'SPSync' => '<b>Sync</b> upravenie pre Sugar Portál.',
        'Layouts' => 'Upraviť <b>Rozloženie</b> modulov Sugar Portálu.',
        'portalLayoutHelp' => 'Tu sa zobrazujú moduly v Sugar Portáli.<br /><br />V rozložení môžete vybrať modul na úpravu.',
        'relationshipsHelp' => 'Tu sa zobrazujú všetky <b>Vzťahy</b>, ktoré existuju medzi modulom a inými modulmi.<br /><br /><b>Meno</b> vzťahu je systémo generované meno vzťahu.<br /><br /><b>Hlavný Modul</b> je modul, ktorý vlastní vzťah. Napríklad, všetky vlastnosti vzťahu pre ktorý je hlavný modul Účtový modul sú uložené v Účtových databázových tabuľkách.<br /><br /><b>Typ</b> je typ vzťahu, ktorý existuje medzi Hlavným modul a <b>Súvisiacim Modulom</b><br /><br />Kliknite na názov stĺpca na upravenie podľa stĺpca.<br /><br />Kliknite na riadok vo vzťahovej tabuľke na zobrazenie vlastností súvisiacich so vzťahom. <br /><br />Kliknite na <b>Pridať Vzťah</b> pre vytvorenie nového vzťahu.<br /><br />Vzťahy môžu byť vytvorené medzi hociktorými dvoma rozloženými modulmi.',
        'relationshipHelp'=>'<b>Vyťahy</b> môžu byť vytvorené medzi modulom a iným rozloženým modulom. <br /><br />Vzťahu sú vizuálne vyjadrené cez subpanely a súvisiace polia v modulových záznamoch. <br /><br />Vyberte jednu z nasledujúcich <b>Typov</b> pre modul:<br /><br /><b>Jeden-k-jednému</b> - Obidve modulové nahrávky budú obsahovať súvisiace polia.<br /><br /><b>Jeden-k-veľa</b> - Nahrávka hlavného modulu bude obsahovať subpanel a nahrávky príbuzných modulov budú obsahovať súvisiace pole.<br /><br /><b>Veľa-k-veľa</b> - Nahrávky obidvoch modulov budú zobrazovať subpanely.<br /><br />Vyberte <b>Príbuzný Modul</b> pre vzťah.<br /><br />Ak typ vzťahu zahŕňa subpanely, vyberte zobrazenie subpanelov pre zodpovedajúce moduly.<br /><br /> Kliknite <b>Uložiť</b> pre vytvorenie vzťahu.',
        'convertLeadHelp' => "Tu môžete pridať moduly pre konvertovanú obrazovku rozloženia a upraviť rozloženie existujúcich. <br />Môžete upraviť moduly ťahaním ich riadkov v tabuľke.<br /><br /><b>Modul:</b> Meno modulu.<br /><br /><b>Požadované:</b> Požadované moduly musia byť vytvorené alebo vybraté pred tým ako môže byť konvertovaná príležitosť.<br /><br /><b>Kopíruj Dáta:</b> Ak zaškrtnuté, polia od príležitosti budú skopírovane do polí s rovnakým menom v novo vytvorených nahrávkach.<br /><br /><b>Povol Selekciu:</b> Moduly s príbuzným polom v Kontaktoch môže byť vybraté než vytvorené počas konvertovania príležitosti.",
        'editDropDownBtn' => 'Upraviť gloválne rolovacie menu',
        'addDropDownBtn' => 'Pridaj nový globálne rolovacie menu.',
    ),
    'fieldsHelp'=>array(
        'default'=>'Prednastavený',
    ),
    'relationshipsHelp'=>array(
        'default'=>'Prednastavený',
        'addrelbtn'=>'myš cez pomáha pridat vzťah..',
        'addRelationship'=>'<b>Vyťahy</b> môžu byť vytvorené medzi modulom a iným rozloženým modulom. <br /><br />Vzťahu sú vizuálne vyjadrené cez subpanely a súvisiace polia v modulových záznamoch. <br /><br />Vyberte jednu z nasledujúcich <b>Typov</b> pre modul:<br /><br /><b>Jeden-k-jednému</b> - Obidve modulové nahrávky budú obsahovať súvisiace polia.<br /><br /><b>Jeden-k-veľa</b> - Nahrávka hlavného modulu bude obsahovať subpanel a nahrávky príbuzných modulov budú obsahovať súvisiace pole.<br /><br /><b>Veľa-k-veľa</b> - Nahrávky obidvoch modulov budú zobrazovať subpanely.<br /><br />Vyberte <b>Príbuzný Modul</b> pre vzťah.<br /><br />Ak typ vzťahu zahŕňa subpanely, vyberte zobrazenie subpanelov pre zodpovedajúce moduly.<br /><br /> Kliknite <b>Uložiť</b> pre vytvorenie vzťahu.',
    ),
    'labelsHelp'=>array(
        'default'=> 'Prednastavený',
        'saveBtn'=>'Kliknite <b>Uložiť</b> na zachovanie zmien.',
        'publishBtn'=>'Kliknite <b>Uložiť a Rozmiestniť</b> na uloženie všetkých zmien, ktoré ste urobili rozmiestneniu od kedy ste ho naposledy uložili. Tým sa zmeny stanú v moduli aktívne.',
    ),
    'portalSync'=>array(
        'default' => 'Prednastavený',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Prednastavený',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'žiadne balíky<br />Pre začatie na projekte, kliknite na tlačidlo Nový balíček pre vytvorenie nového balíka pre umiestnenie svojich vlastných modulov.<br /><br />Každý balík môže obsahovať jeden alebo viac modulov.<br /><br />Napríklad, môžete chcieť vytvoriť balíček obsahujúci jeden vlastný modul, ktorý sa vzťahuje na štandardné účty modulu. Alebo, možno budete chcieť vytvoriť balíček obsahujúci niekoľko nových modulov, ktoré pracujú spoločne ako projekt a ktoré sú vo vzájomnom vzťahu k ostatným modulom v aplikácii.',
            'somepackages'=>'niektoré balíky<br />Balík sa chová ako kontajner pre vlastné moduly, z ktorých všetky sú súčasťou jedného projektu. Balík môže obsahovať jeden alebo viac vlastných modulov, ktoré môžu byť prepojené vzájomne alebo s inými modulmi v aplikácii.<br /><br />Po vytvorení balíka pre svoj ​​projekt, môžete vytvoriť moduly pre balík hneď, alebo sa môžete do Module Builder vrátiť neskôr a projekt dokončiť .<br /><br />Ak je projekt dokončený, môžete nasadiť balík k inštalácii vlastných modulov v rámci aplikácie.',
            'afterSave'=>'po uložení<br />Váš nový balík by mal obsahovať aspoň jeden modul. Môžete vytvoriť jeden alebo viac vlastných modulov pre balík.<br /><br />Kliknite na tlačidlo Nový modul pre vytvorienie vlastného modulu pre tento balík.<br /><br />Po vytvorení aspoň jedného modulu, môžete publikovať alebo nasadiť balík, aby bol k dispozícii pre vaše inštancie a / alebo inštancie iných užívateľov.<br /><br />Ak chcete nasadiť balík jednom kroku v  rámci vašej Sugar inštancie, kliknite na tlačidlo Nasadiť.<br /><br />Kliknite na tlačidlo Publikovať uložiť balíček ako. Zip súboru. Po. Zip súbor sa uloží do systému, použite Module Loader nahrať a inštaláciu balík vo Vašom Sugar inštancie.<br /><br />Môžete distribuovať súbor ostatným užívateľom, nahrať a inštalovať v rámci ich vlastných Sugar inštancií.',
            'create'=>'Zadajte Meno modulu. Názov, ktorý zadáte sa zobrazí v navigačnom menu.<br /><br />Pre zobrazenie navigačného menu pre tento modul potvrďte checkbox Navigačné Menu.<br /><br />Pre zobrazenie poľa voľby Tímov v záznamoch modulu potvrďte chceckbox Tímová Bezpečnosť.<br /><br />Potom zvoľte typ modulum ktorý si prajete vytvoriť.<br /><br />Zvoľte typ šablóny. Každá šablóna obsahuje špecifický súbor polí, ako aj pre-definované rozloženia, používané ako základy pre Váš modul.<br /><br />Stlačte Uložiť pre vytvorenie modulu.',
            ),
    'main'=>array(
        'welcome'=>'vitajte<br />Použite nástroj pre vývojárov pre vytváranie a spravovanie štandardných a vlastných modulov a polí.<br /><br />Ak chcete spravovať moduly v aplikácii, kliknite na tlačidlo Studio.<br /><br />Ak chcete vytvoriť vlastné moduly, kliknite na tlačidlo Modul Builder.',
        'studioWelcome'=>'Vitajte v Štúdiu<br />Všetky aktuálne nainštalované moduly, vrátane štandardných a objektov načítaných modulmi, sú prispôsobiteľné v Štúdiu.'
    ),
    'module'=>array(
        'somemodules'=>"niektoré moduly<br />Vzhľadom k tomu, že súčasný balík obsahuje aspoň jeden modul, môžete nasadiť moduly v balíku v rámci Vašej Sugar inštancie alebo publikovať balík pre inštaláciu v aktuálnej Sugar inštancii alebo inú inštanciu pomocou Module Loader.<br /><br />Ak chcete inštalovať balík priamo v rámci Vašej Sugar inštancie, kliknite na tlačidlo Nasadiť.<br /><br />Ak chcete vytvoriť. zip súboru balíka, ktorý možno načitať a nainštalovať v rámci súčasnej Sugar inštancie a ďalších inštancií použite Module Loader, kliknite na tlačidlo Publikovať.<br /><br />Môžete si vytvoriť moduly pre tento balík v niekoľkých fázach, zverejniť alebo nasadiť, keď ste pripravení tak urobiť.<br /><br />Po publikovaní alebo nasadenie balíka, môžete vykonávať zmeny vlastností balíka a prispôsobenie modulov aj naďalej. Potom znovu publikovať alebo znovu nasadiť balík s použitou zmenou." ,
        'editView'=> 'prehľad úprav<br />Tu môžete editovať existujúce polia. Môžete odstrániť niektoré z existujúcich polí alebo pridať dostupné polia v ľavom paneli.',
        'create'=>'Zadajte Meno modulu. Názov, ktorý zadáte sa zobrazí v navigačnom menu.<br /><br />Pre zobrazenie navigačného menu pre tento modul potvrďte checkbox Navigačné Menu.<br /><br />Pre zobrazenie poľa voľby Tímov v záznamoch modulu potvrďte chceckbox Tímová Bezpečnosť.<br /><br />Potom zvoľte typ modulum ktorý si prajete vytvoriť.<br /><br />Zvoľte typ šablóny. Každá šablóna obsahuje špecifický súbor polí, ako aj pre-definované rozloženia, používané ako základy pre Váš modul.<br /><br />Stlačte Uložiť pre vytvorenie modulu.',
        'afterSave'=>'po uložení<br />Prispôsobujte vlastné moduly tak, aby vyhovovali vašim potrebám editáciou a vytváraním polí, nadväzovaním vzťahov s inými modulmi a usporiadanie polí v rámci rozloženia.<br /><br />Ak chcete zobraziť šablóny poľa a spravovať vlastné pole v rámci modulu, kliknite na tlačidlo Zobraziť pole.<br /><br />Ak chcete vytvárať a spravovať vzťahy medzi modulom a ďalšími modulmi, či už modulov v aplikácii alebo iných vlastných modulov v rámci toho istého balíka, kliknite na tlačidlo Zobraziť relácie.<br /><br />Ak chcete upraviť rozloženie modulu, kliknite na tlačidlo Zobraziť rozvrhnutie. Môžete zmeniť Prehľad detailov, Prehľad úprav a Prehľad rozloženie pre modul, rovnako ako pre moduly už v aplikácii v rámci Štúdia.<br /><br />Ak chcete vytvoriť modul s rovnakými vlastnosťami ako má aktuálny modul, kliknite na tlačidlo Duplikovať. Nový modul môžete ďalej prispôsobovať.',
        'viewfields'=>'prehľad polí<br />Polia v module môžete upravovať tak, aby vyhovovali vašim potrebám.<br /><br />Nemôžete mazať štandardné polia, ale môžete ich odstrániť z príslušných rozvrhnutí v rámci Rozloženia stránok.<br /><br />Môžete rýchlo vytvoriť nové polia, ktoré majú podobné vlastnosti ako existujúcich polia kliknutím na Klon vo Vlastnostiach formulára. Zadajte nové vlastnosti, a potom kliknite na tlačidlo Uložiť.<br /><br />Odporúča sa, aby ste si nastavili všetky vlastnosti štandardných polí a vlastných polí pred publikovaním a inštaláciou balíka obsahujúceho vlastný modul.',
        'viewrelationships'=>'prehľad vzťahov<br />Môžete vytvoriť many-to-many vzťahy medzi aktuálnym modulom a ďalšími modulmi v balíku a / alebo medzi aktuálnym modulom a modulmi nainštalovanými v aplikácii.<br /><br />Ak chcete vytvoriť one-to-many a one-to-one vzťahy, vytvorte Relate a Flex Relate polia pre moduly.',
        'viewlayouts'=>'prehľad rozmiestnenia',
        'existingModule' =>'Po vytvorení a prispôsobení tohto modulu, môžete vytvoriť ďalšie moduly alebo sa vrátiť do balíčka Publikovanie alebo Nasadenie balíčka.<br /><br />Ak chcete vytvoriť ďalšie moduly, kliknite na tlačidlo Duplikovať pre vytvorenie modulu s rovnakými vlastnosťami ako aktuálny modul, alebo prejdite späť do balíčka a kliknite na tlačidlo Nový modul.<br /><br />Ak ste pripravení na Publikovanie alebo Nasadenie balíčka obsahujúceho tento modul, prejdite späť do balíčka pre vykonávanie týchto funkcií. Môžete publikovať a nasadzovať balíčky obsahujúce aspoň jeden modul.',
        'labels'=> 'Štítky štandardných polí, rovnako ako vlastné pole je možné zmeniť. Zmena štítkov poľa nebude mať vplyv na dáta uložené v poliach.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Môžte meniť vlastnosti modulu, alebo upravovať Polia, Vzťahy a Rozloženia, vzťahujúce sa k modulu.',
        'savebtn'	=> 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
        'Hidden' 	=> 'Skrytý',
        'Available' => 'Na sklade',
        'Default'	=> 'Prednastavený'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Môžte meniť vlastnosti modulu, alebo upravovať Polia, Vzťahy a Rozloženia, vzťahujúce sa k modulu.',
        'savebtn'	=> 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
        'Hidden' 	=> 'Skrytý',
        'Default'	=> 'Prednastavený'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Prednastavený',
        'saveBtn'	=> 'Kliknite <b>Uložiť</b> na zachovanie zmien.',
        'publishBtn'=> 'Kliknite <b>Uložiť a Rozmiestniť</b> na uloženie všetkých zmien, ktoré ste urobili rozmiestneniu od kedy ste ho naposledy uložili. Tým sa zmeny stanú v moduli aktívne.',
        'toolbox'	=> '<b>Sada nástrojov</b> obsahuje <b>Kôš</b>, prídavné časti a sadu dostupných polí, ktoré môžete pridať k rozloženiu. <br /><br />Časti rozloženia a polia v Sade nástrojov môžu byť ťahané a pustené do rozloženia. Časti rozloženia a polia môžu byť ťahané a pustené z rozloženia do Sady nástrojov. <br /><br />Časťou rozloženia sú <b>Panely</b> a <b>Riadky</b>. Pridaním nového riadku alebo nového panela do rozloženia poskytne ďalšie miesto v poliach rozloženia. <br /><br />Ťahajte a pustite hocijaké pole v Sade nástrojov alebo rozloženia do obsadeného pola na výmenu umiestnenia tých dvoch polí.',
        'panels'	=> '<b>Rozloženie</b> poskytuje náhľad ako bude rozloženie vyzerať v module keď sa rozmiestnia zmeny. <br /><br />Môžete zmeniť polia, riadky a panely ťahaním a pustením na požadovanon mieste. <br /><br />Odoberte častí ťahaním a pustením do <b>Koša</b> v Sade nástrojov, alebo pridajte novú časť alebo pole ťahaním ich zo Sady nástrojov a pustením ich na požadované miesto v rozmiestnení.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Prednastavený',
        'dropdownaddbtn'=> 'Kliknutím na toto tlačidlo pridáte novú položku do rozbaľovacej ponuky.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Exportujte upravenia vytvorené v Štúdiu vytvorením balíkov, ktoré môžu byť nahrané do iného Sugar prípadu cez <b>Modulový zavádzacím programom</b>.<br /><br />Najprv, poskytnite <b>Meno balíka</b>. Môžete tak isto poskytnúť <b>Autora</b> a <b>Popis</b>.<br /><br />Vyberte modul, ktorý obsahuje upravenie, ktoré chcete exportovať. Iba moduly, ktoré obsahujú úpravy sa vám zobrazia na výber. <br /><br />Potom kliknite na <b>Export</b> pre vytvorenie .zip súboru pre balík, ktorý obsahuje úpravy.',
        'exportCustomBtn'=>'Kliknite <b>Export</b> pre vytvorenie balíku, ktorý obsahuje úpravy, ktoré chcete exportovať.',
        'name'=>'meno<br />Toto je Meno súčastného balíka.<br /><br />Zadávané meno musí byť alfanumerické, začínať písmenom a nesmie obsahovať medzery:(Príklad:HR_Management)',
        'author'=>'autor<br />Toto je Autor, ktorý je zobrazený počas inštalácie ako meno osoby, ktorá vytvorila tento balík.<br /><br />Autor môže byť jedinec, ale aj spoločnosť.',
        'description'=>'popis<br />Toto je Popis balíka, ktorý je zobrazený počas inštalácie.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Vitajte v mieste pre <b>Vývojárske Nástroje</b>.<br /><br />Používajte tieto nástroje v rámci tohto miesta na vytvorenie a spravovanie štandardných a upravených modulov a polí.',
        'studioBtn'	=> 'Používajte <b>Štúdio</b> na upravenie rozložených modulov.',
        'mbBtn'		=> 'Používajte <b>Stavaš Modulv</b> na vytvorenie nových modulov.',
        'appBtn' 	=> 'V aplikačnom móde môžete upravovať rôzne vlastnosti programu, ako napríklad: koľko TPS správ bude zobrazených na domovskej stránke.',
        'backBtn'	=> 'Vrátiť sa predchádzajúci krok.',
        'studioHelp'=> 'Používajte <b>Štúdio</b> na určenie ktoré a ako budú informácie zobrazené v moduloch.',
        'moduleBtn'	=> 'Kliknite na upravenie tohto modulu.',
        'moduleHelp'=> 'Vyberte modul komponentu, ktorý chcete upraviť',
        'fieldsBtn'	=> 'Upravte aké informácie sú uložené v module na kontrolu polí v module.<br />Tu môžete upravovať a vytvárať vlastné polia.',
        'labelsBtn' => 'Click <b>Save</b> to save your custom labels.'	,
        'layoutsBtn'=> 'Vlastné Rozloženia pre Úpravy, Detaily, Zoznam a prehľad vyhľadávaní.',
        'subpanelBtn'=> 'Upravte aké informácie sa zobrazia v Subpaneloch modulov.',
        'layoutsHelp'=> 'Vyberte Rozloženie pre editovanie.<br />Ak chcete zmeniť rozloženie, ktoré obsahuje dátové pole pre zadávanie údajov, kliknite na tlačidlo Upraviť zobrazenie.<br />Ak chcete zmeniť stĺpce, ktoré sa objavujú v predvolenom zozname, kliknite na tlačidlo Zobraziť zoznam.<br />Ak chcete zmeniť základné a pokročilé rozloženie vyhľadávacieho formulára, kliknite na tlačidlo Hľadať.',
        'subpanelHelp'=> 'Vyberte Subpanel pre editovanie.',
        'searchHelp' => 'Vyberte rozloženie vyhľadávacej stránky pre editovanie.',
        'labelsBtn'	=> 'Click <b>Save</b> to save your custom labels.',
        'newPackage'=>'Kliknite na <b>Nový balík</b> pre vytvorenie nového balíka.',
        'mbHelp'    => 'Použite <b>Stavač modulov</b> pre vytvorenie balíkov, ktoré obashujú moduly na základe štandardných alebo upravených predmetov.',
        'exportBtn' => 'Kliknite <b>Export Upravenia</b> na vytvorenie a stiahnutie balíka obsahujúci upravenie spravené v Štúdiu pre špecifický modul.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Editor rozbaľovacieho zoznamu',

//ASSISTANT
'LBL_AS_SHOW' => 'Zobraziť asistenta v budúcnosti.',
'LBL_AS_IGNORE' => 'Ignorovať asistenta v budúcnosti.',
'LBL_AS_SAYS' => 'Asistent hovorí:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Tvorca modulov',
'LBL_STUDIO' => 'Štúdio',
'LBL_DROPDOWNEDITOR' => 'Editor rozbaľovacieho zoznamu',
'LBL_EDIT_DROPDOWN'=>'Úprava rozbaľovacieho zoznamu',
'LBL_DEVELOPER_TOOLS' => 'Vývojárske nástroje',
'LBL_SUGARPORTAL' => 'Editor Sugar portálu',
'LBL_SYNCPORTAL' => 'Synchronizácia portálu',
'LBL_PACKAGE_LIST' => 'Zoznam balíkov',
'LBL_HOME' => 'Domov',
'LBL_NONE'=>'--žiadny--',
'LBL_DEPLOYE_COMPLETE'=>'Nasadenie kompletné',
'LBL_DEPLOY_FAILED'   =>'Chyba sa vyskytla počas procesov nasadenia, váš balík nebol správne nainštalovaný',
'LBL_ADD_FIELDS'=>'Pridať zákaznícke polia',
'LBL_AVAILABLE_SUBPANELS'=>'Dostupne podpanely',
'LBL_ADVANCED'=>'Pokročilý',
'LBL_ADVANCED_SEARCH'=>'Pokročilé vyhľadávanie',
'LBL_BASIC'=>'Základné',
'LBL_BASIC_SEARCH'=>'Základné vyhľadávanie',
'LBL_CURRENT_LAYOUT'=>'Usporiadanie',
'LBL_CURRENCY' => 'Mena:',
'LBL_CUSTOM' => 'Užívateľský',
'LBL_DASHLET'=>'Sugar prehľadové okienko',
'LBL_DASHLETLISTVIEW'=>'Zobrazenie zoznamu prehľadových okienok Sugar Dashlet',
'LBL_DASHLETSEARCH'=>'Vyhľadávanie Sugar prehľadových okienok',
'LBL_POPUP'=>'Zobrazenie vyskakovacích okienok Popup',
'LBL_POPUPLIST'=>'Zobrazenie zoznamu vyskakovacích okienok Popup',
'LBL_POPUPLISTVIEW'=>'Zobrazenie zoznamu vykakovacích okienok Popup',
'LBL_POPUPSEARCH'=>'Vyhľadávanie vyskakovacích okienok Popup',
'LBL_DASHLETSEARCHVIEW'=>'Vyhľadávanie Sugar prehľadových okienok Dashlet',
'LBL_DISPLAY_HTML'=>'Zobraziť HTML kód',
'LBL_DETAILVIEW'=>'Zobrazenie podrobností',
'LBL_DROP_HERE' => '[Vlož sem]',
'LBL_EDIT'=>'Upraviť',
'LBL_EDIT_LAYOUT'=>'Upraviť rozloženie',
'LBL_EDIT_ROWS'=>'Upraviť riadky',
'LBL_EDIT_COLUMNS'=>'Upraviť stĺpce',
'LBL_EDIT_LABELS'=>'Upraviť štítky',
'LBL_EDIT_PORTAL'=>'Upraviť portál pre',
'LBL_EDIT_FIELDS'=>'Upraviť  polia',
'LBL_EDITVIEW'=>'Upraviť náhľad',
'LBL_FILTER_SEARCH' => "Vyhľadávanie",
'LBL_FILLER'=>'(výplň)',
'LBL_FIELDS'=>'Polia',
'LBL_FAILED_TO_SAVE' => 'Neúspešné k uloženiu',
'LBL_FAILED_PUBLISHED' => 'Neúspešné publikovanie',
'LBL_HOMEPAGE_PREFIX' => 'Moje',
'LBL_LAYOUT_PREVIEW'=>'Náhľad usporiadania',
'LBL_LAYOUTS'=>'Rozloženia',
'LBL_LISTVIEW'=>'Náhľad zoznamu',
'LBL_RECORDVIEW'=>'Zobrazenie záznamu',
'LBL_MODULE_TITLE' => 'Štúdio',
'LBL_NEW_PACKAGE' => 'Nový balík',
'LBL_NEW_PANEL'=>'Nový panel',
'LBL_NEW_ROW'=>'Nový riadok',
'LBL_PACKAGE_DELETED'=>'Balík vymazaný',
'LBL_PUBLISHING' => 'Publikovanie ...',
'LBL_PUBLISHED' => 'Uverejnená',
'LBL_SELECT_FILE'=> 'Výber súboru',
'LBL_SAVE_LAYOUT'=> 'Uložiť rozloženie',
'LBL_SELECT_A_SUBPANEL' => 'Vybrať Subpanel',
'LBL_SELECT_SUBPANEL' => 'Vybrať Subpanel',
'LBL_SUBPANELS' => 'Subpanely',
'LBL_SUBPANEL' => 'Subpanel',
'LBL_SUBPANEL_TITLE' => 'Názov',
'LBL_SEARCH_FORMS' => 'Vyhľadávanie',
'LBL_STAGING_AREA' => 'Scéna (chyť a ťahaj položku)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar polia (kliknite na položky k pridaniu na scénu)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar kôš (kliknite na položky k pridaniu na scénu)',
'LBL_TOOLBOX' => 'Nástroje',
'LBL_VIEW_SUGAR_FIELDS' => 'Zobraziť Sugar polia',
'LBL_VIEW_SUGAR_BIN' => 'Zobraziť Sugar kôš',
'LBL_QUICKCREATE' => 'Rýchle vytvorenie',
'LBL_EDIT_DROPDOWNS' => 'Upraviť globálne rozbaľovacie zoznamy',
'LBL_ADD_DROPDOWN' => 'Pridať nový rozbaľovací zoznam',
'LBL_BLANK' => '-čistý-',
'LBL_TAB_ORDER' => 'Poradie záložiek',
'LBL_TAB_PANELS' => 'Zobraziť panely a záložky',
'LBL_TAB_PANELS_HELP' => 'Zobraziť každý panel ako jeho vlastnú záložku, namiesto toho aby sa všetky objavili na obrazovke',
'LBL_TABDEF_TYPE' => 'Typ zobrazenia:',
'LBL_TABDEF_TYPE_HELP' => 'Vyberte, ako by sa mala táto sekcia zobraziť. Táto voľba má vplyv len, ak ste povolili karty z tohto pohľadu.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Vyberte panel, aby bol tento displej, v pohľade rozvrhnutý. Vyberte kartu, aby sa tento panel zobrazil v samostatnej záložke v rámci rozloženia. Ak je karta určená pre panel, budú ďalšie panely nastavené zobraziť hp ako panel ktorý sa zobrazí na karte.<br />Nová Tabuľka bude zahájená na ďalší panel, pre ktorý je vybraná Tabuľka. Ak je vybraná karta pre panel pod prvým panelom, bude prvý panel nutne Tabulovaný.',
'LBL_TABDEF_COLLAPSE' => 'kolaps',
'LBL_TABDEF_COLLAPSE_HELP' => 'Vyberte aby sa východiskový stav tohto panelu zrútil.',
'LBL_DROPDOWN_TITLE_NAME' => 'Názov',
'LBL_DROPDOWN_LANGUAGE' => 'Jazyk:',
'LBL_DROPDOWN_ITEMS' => 'Zoznam položiek',
'LBL_DROPDOWN_ITEM_NAME' => 'Názov položky',
'LBL_DROPDOWN_ITEM_LABEL' => 'Zobrazenie etikiet',
'LBL_SYNC_TO_DETAILVIEW' => 'Synchronizovať prehľad podrobností',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Výberom tejto možnosti dôjde k synchronizácii tohto rozloženia Úprava zobrazenia - EditView, aby zodpovedalo rozloženiu Podrobnosti zobrazenia - DetailView layout. Polia a umiestnenie poľa v EditView<br>budú synchronizované a uložené v DetailView automaticky, kliknutím na Uložiť - Save  alebo Uložiť a uplatniť - Save & Deploy, v Úpravách zobrazenia - EditView. <br>Zmeny rozloženia nebudú dostupné v Podrobnostiach zobrazenia - DetailView.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Toto Podrobné zobrazenie - DetailView je synchronizované so zodpovedajúcim Úprava zobrazenia -EditView.<br> Polia a pole umiestnené v tomto Podrobnom zobrazení - DetailView, odráža polia a pole umiestnené v Úprave zobrazenia - EditView.<br> Zmeny na Podrobnom zobrazení nemôžu byť uložené alebo uplatnené v tejto stránke. Preveďte zmeny alebo od synchronizáciu rozmiesnenia v Úprava zobrazenia - EditView.',
'LBL_COPY_FROM_EDITVIEW' => 'Kopírovať z Úprava zobrazenia - EditView',
'LBL_DROPDOWN_BLANK_WARNING' => 'Hodnoty sú požadované ako pre Meno, tak aj Štítok Obrazovky. Aby ste pridali prázdnu položku, kliknite Pridat bez vlozenia anýchkoľvek hodnôt pre položku Meno a Štítok Obrazovky.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Kľúč už existuje v zozname',
'LBL_NO_SAVE_ACTION' => 'Nemožno nájsť úspornú akciu pre toto zobrazenie.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2: establishLocation: zle formátovaný dokument',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Označuje kombináciu poľa. Kombinácia poľa je súbor jednotlivých polí. Napríklad, "Adresa" je kombináciou poľa, ktoré obsahuje "ulicu", "mesto", "PSČ", "štát" a "krajinu".<br /><br />Dvojklikom na kombinované pole vidieť polia, ktorá obsahuje.',
'LBL_COMBO_FIELD_CONTAINS' => 'obsahuje:',

'LBL_WIRELESSLAYOUTS'=>'Rozloženia pre mobilné telefóny',
'LBL_WIRELESSEDITVIEW'=>'Mobilné korekčné prostredie',
'LBL_WIRELESSDETAILVIEW'=>'Mobilné detailné prostredie',
'LBL_WIRELESSLISTVIEW'=>'Mobilný katalóg',
'LBL_WIRELESSSEARCH'=>'Mobilné hľadanie',

'LBL_BTN_ADD_DEPENDENCY'=>'Pridať závislosť',
'LBL_BTN_EDIT_FORMULA'=>'Úprava vzorca',
'LBL_DEPENDENCY' => 'Závislosť',
'LBL_DEPENDANT' => 'Závislý',
'LBL_CALCULATED' => 'Kalkulovaná hodnota',
'LBL_READ_ONLY' => 'Len na čítanie',
'LBL_FORMULA_BUILDER' => 'Tvorvća vzorcov',
'LBL_FORMULA_INVALID' => 'Neplatný vzorec',
'LBL_FORMULA_TYPE' => 'Fráza musí byť typu',
'LBL_NO_FIELDS' => 'Polia nenájdené',
'LBL_NO_FUNCS' => 'Funkcie nenájdené',
'LBL_SEARCH_FUNCS' => 'Hľadať funkcie...',
'LBL_SEARCH_FIELDS' => 'Hľadať polia...',
'LBL_FORMULA' => 'Vzorec',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Závislý',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Pretiahnite položky zo zoznamu dostupných možností na ľavej strane do jedného zo zoznamov na pravo, aby táto možnosť bola k dispozícii, keď bude táto materská možnosť vybraná.',
'LBL_AVAILABLE_OPTIONS' => 'Dostupné možnosti',
'LBL_PARENT_DROPDOWN' => 'Materské rozbaťovacie okno',
'LBL_VISIBILITY_EDITOR' => 'Editor viditeľnosti',
'LBL_ROLLUP' => 'Kumulatívny',
'LBL_RELATED_FIELD' => 'súvisiace pole',
'LBL_CONFIG_PORTAL_URL'=>'URL k vlastnému obrázku loga. Odporúčané rozmery loga sú 163 x 18 pixelov.',
'LBL_PORTAL_ROLE_DESC' => 'Prosím, nemažte túto skupinu (rolu). Rola "Customer Self-Service Portal" je systémom generovaná rola vytvorená počas aktivačného procesu Sugar portálu. Použite sekciu riadenia prístupu v rámci role k povoleniu alebo zákazu modulov Chýb, Prípadov a Bázy znalostí v Sugar portáli. Nemodifikujte žiadne iné prístupové práva pre túto rolu (vyhnete sa tak nepredvídateľnému strávaniu systému). V prípade vymazania tejto role, obnovíte ju zakázaním a následným povolením Sugar portálu.',

//RELATIONSHIPS
'LBL_MODULE' => 'Modul',
'LBL_LHS_MODULE'=>'Primárny modul',
'LBL_CUSTOM_RELATIONSHIPS' => '* vzťah vytvorený v Štúdiu',
'LBL_RELATIONSHIPS'=>'Vzťahy',
'LBL_RELATIONSHIP_EDIT' => 'Upraviť vzťahy',
'LBL_REL_NAME' => 'Meno',
'LBL_REL_LABEL' => 'Štítok',
'LBL_REL_TYPE' => 'Typ',
'LBL_RHS_MODULE'=>'Súvisiaci modul',
'LBL_NO_RELS' => 'Žiadne vzťahy',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Nepovinná podmienka' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Stĺpec',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Hodnota',
'LBL_SUBPANEL_FROM'=>'Subpanel od',
'LBL_RELATIONSHIP_ONLY'=>'Nebudú vytvorené žiadne viditeľné súčasti,nakoľko už existujú viditeľné vzťahy medzi týmito dvoma modulmy.',
'LBL_ONETOONE' => 'Jeden jednému',
'LBL_ONETOMANY' => 'Jeden mnohým',
'LBL_MANYTOONE' => 'Mnohý jednému',
'LBL_MANYTOMANY' => 'Mnohý mnohým',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Vyberte funkciu alebo komponentu.',
'LBL_QUESTION_MODULE1' => 'Vyberte model.',
'LBL_QUESTION_EDIT' => 'Vyberte modul k editácií.',
'LBL_QUESTION_LAYOUT' => 'Vyberte návrh k editácií.',
'LBL_QUESTION_SUBPANEL' => 'Vyberte pomocný panel k editácií.',
'LBL_QUESTION_SEARCH' => 'Vyberte rozvrhnutie hľadania k editácií.',
'LBL_QUESTION_MODULE' => 'Vyberte súčasť modulu k editácií.',
'LBL_QUESTION_PACKAGE' => 'Vyberte balík k editácií, alebo vytvorte nový balík.',
'LBL_QUESTION_EDITOR' => 'Vyberte nástroje.',
'LBL_QUESTION_DROPDOWN' => 'Vyberte rozbaľovacie menu k editácií, alebo vytvorte nové rozbaľovacie menu.',
'LBL_QUESTION_DASHLET' => 'Vyberte rozvrhnutie dashlet k editácií.',
'LBL_QUESTION_POPUP' => 'Vyberte rozvrhnutie popup k editácií.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Vo vzťahu s',
'LBL_NAME'=>'Názov',
'LBL_LABELS'=>'Štítky',
'LBL_MASS_UPDATE'=>'Hromadná aktualizácia',
'LBL_AUDITED'=>'Audit',
'LBL_CUSTOM_MODULE'=>'Modul',
'LBL_DEFAULT_VALUE'=>'Prednastavená hodnota',
'LBL_REQUIRED'=>'Povinný',
'LBL_DATA_TYPE'=>'Typ',
'LBL_HCUSTOM'=>'UŽIVAŤEĽSKY',
'LBL_HDEFAULT'=>'IMPLICITNY',
'LBL_LANGUAGE'=>'Jazyk:',
'LBL_CUSTOM_FIELDS' => '* pole vytvorené v Štúdiu',

//SECTION
'LBL_SECTION_EDLABELS' => 'Upraviť štítky',
'LBL_SECTION_PACKAGES' => 'Balíky',
'LBL_SECTION_PACKAGE' => 'Balík',
'LBL_SECTION_MODULES' => 'Moduly',
'LBL_SECTION_PORTAL' => 'Portál',
'LBL_SECTION_DROPDOWNS' => 'Robaľovacie zoznamy',
'LBL_SECTION_PROPERTIES' => 'Vlastnosti',
'LBL_SECTION_DROPDOWNED' => 'Úprava rozbaľovacieho zoznamu',
'LBL_SECTION_HELP' => 'Pomoc',
'LBL_SECTION_ACTION' => 'Akcia',
'LBL_SECTION_MAIN' => 'Hlavný',
'LBL_SECTION_EDPANELLABEL' => 'Upravte štítok Panelu',
'LBL_SECTION_FIELDEDITOR' => 'Úprava poľa',
'LBL_SECTION_DEPLOY' => 'Nasadiť',
'LBL_SECTION_MODULE' => 'Modul',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Upraviť viditeľnosť',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Prednastavený',
'LBL_HIDDEN'=>'Skrytý',
'LBL_AVAILABLE'=>'Dostupné',
'LBL_LISTVIEW_DESCRIPTION'=>'K dispozícii sú tri stĺpce, zobrazené nižšie. <b>Predvolený stĺpec</b> obsahuje polia, zobrazené v zozname predvolených zobrazení. <b>rozširujúci stĺpec</b> obsahuje polia, ktoré si užívateľ môže zvoliť k vytvoreniu užívateľského zobrazenia. <b>Dostupné stĺpce</b> zobrazujú polia, dostupné pre vás a administrátora, buď k pridaniu do Predvolených alebo Rozširujúcich stĺpcov, pre použitie užívateľmi.',
'LBL_LISTVIEW_EDIT'=>'Editor prehľadu úprav',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Náhľad',
'LBL_MB_RESTORE'=>'Obnoviť',
'LBL_MB_DELETE'=>'Vymazať',
'LBL_MB_COMPARE'=>'Porovnať',
'LBL_MB_DEFAULT_LAYOUT'=>'Implicitné rozvrhnutie',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Pridať',
'LBL_BTN_SAVE'=>'Uložiť',
'LBL_BTN_SAVE_CHANGES'=>'Uložiť zmeny',
'LBL_BTN_DONT_SAVE'=>'Zrušiť zmeny',
'LBL_BTN_CANCEL'=>'Zrušiť',
'LBL_BTN_CLOSE'=>'Zavrieť',
'LBL_BTN_SAVEPUBLISH'=>'Uložiť a nasadiť',
'LBL_BTN_NEXT'=>'Ďalší',
'LBL_BTN_BACK'=>'Späť',
'LBL_BTN_CLONE'=>'Klon',
'LBL_BTN_ADDCOLS'=>'Pridať stĺpce',
'LBL_BTN_ADDROWS'=>'Pridať riadky',
'LBL_BTN_ADDFIELD'=>'Pridať pole',
'LBL_BTN_ADDDROPDOWN'=>'Pridať rozbaľovací zoznam',
'LBL_BTN_SORT_ASCENDING'=>'Triediť vzostupne',
'LBL_BTN_SORT_DESCENDING'=>'Triediť zostupne',
'LBL_BTN_EDLABELS'=>'Upraviť štítky',
'LBL_BTN_UNDO'=>'Vrátiť späť',
'LBL_BTN_REDO'=>'Znovu',
'LBL_BTN_ADDCUSTOMFIELD'=>'Pridať zákaznícke pole',
'LBL_BTN_EXPORT'=>'Export prispôsobení',
'LBL_BTN_DUPLICATE'=>'Duplikovať',
'LBL_BTN_PUBLISH'=>'zverejniť',
'LBL_BTN_DEPLOY'=>'Nasadiť',
'LBL_BTN_EXP'=>'Export',
'LBL_BTN_DELETE'=>'Vymazať',
'LBL_BTN_VIEW_LAYOUTS'=>'Prezrieť rozvrhnutia',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'View Mobile Layouts',
'LBL_BTN_VIEW_FIELDS'=>'Prezriet polia',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Prezrieť vzťahy',
'LBL_BTN_ADD_RELATIONSHIP'=>'Pridať vzťah',
'LBL_BTN_RENAME_MODULE' => 'Zmeniť názov modulu',
'LBL_BTN_INSERT'=>'Vložiť',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Chyba: Pole už existuje',
'ERROR_INVALID_KEY_VALUE'=> "Chyba: Nesprávna hodnota kľúča Key Value: [&#39;]",
'ERROR_NO_HISTORY' => 'Polia histórie nenájdené',
'ERROR_MINIMUM_FIELDS' => 'Rozvrhnutie musí obsahovať aspoň jedno pole',
'ERROR_GENERIC_TITLE' => 'Nastala chyba',
'ERROR_REQUIRED_FIELDS' => 'Ste si istý, že chcete pokračovať? Následovné požadované polia chýbaju v rozvrhnutí:',
'ERROR_ARE_YOU_SURE' => 'Ste si istý, že chcete pokračovať?',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Následujúce polia obsahujú vypočítané hodnoty, ktoré nebudú prepočítané v realnom čase v SugarCRM Mobilnom Korekčnom prostredí.',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Následujúce polia obsahujú vypočítané hodnoty, ktoré nebudú prepočítané v realnom čase v SugarCRM Mobilnom korekčnom prostredí portálu.',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Nasledujúci (e) modul (y) sú vypnuté:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Ak ich chcete povoliť, povolte ich tu.',
    'LBL_PORTAL_CONFIGURE' => 'Spravuj portál',
    'LBL_PORTAL_THEME' => 'Téma portálu',
    'LBL_PORTAL_ENABLE' => 'Povoliť',
    'LBL_PORTAL_SITE_URL' => 'Váš portál je k dispozícii na adrese:',
    'LBL_PORTAL_APP_NAME' => 'Meno aplikácie',
    'LBL_PORTAL_LOGO_URL' => 'URL loga',
    'LBL_PORTAL_LIST_NUMBER' => 'Počet záznamov na zobrazenie v zozname',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Počet záznamov na zozbrazenie v Detaile',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Počet výsledkov na zobrazenie vo vyhľadávaní v rámci celého portálu',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Automatické priradenie pre nové registrácie na portáli',

'LBL_PORTAL'=>'Portál',
'LBL_PORTAL_LAYOUTS'=>'Rozvrhnutie Poratálu',
'LBL_SYNCP_WELCOME'=>'Prosím, vložte URL adresu inštancie portálu, ktorú chcete aktualizovať.',
'LBL_SP_UPLOADSTYLE'=>'Kliknite na tlačítko prehliadača a vyberte štýl zošita k nahratiu,  z vášho počítača. <br><br />Následne po synchronizácii portálu sa štýl zošita zmení.',
'LBL_SP_UPLOADED'=> 'Nahraté',
'ERROR_SP_UPLOADED'=>'Prosím, uistite sa, že sú prítomné css štýly zošity.',
'LBL_SP_PREVIEW'=>'Tu je náhľad toho ako bude váš štýl vyzerať',
'LBL_PORTALSITE'=>'URL Sugar Portálu:',
'LBL_PORTAL_GO'=>'Prejsť',
'LBL_UP_STYLE_SHEET'=>'Nahrajte list štýlu',
'LBL_QUESTION_SUGAR_PORTAL' => 'Vyberte rozloženie Sugar Portálu k editácií.',
'LBL_QUESTION_PORTAL' => 'Vyberte rozloženie portálu k editácií.',
'LBL_SUGAR_PORTAL'=>'Editor Sugar portálu',
'LBL_USER_SELECT' => '-- Vybrať --',

//PORTAL PREVIEW
'LBL_CASES'=>'Prípady',
'LBL_NEWSLETTERS'=>'Noviny',
'LBL_BUG_TRACKER'=>'Stopovač chýb',
'LBL_MY_ACCOUNT'=>'Môj účet',
'LBL_LOGOUT'=>'Odhlásenie',
'LBL_CREATE_NEW'=>'Vytvoriť nový',
'LBL_LOW'=>'Nízko',
'LBL_MEDIUM'=>'Stredne',
'LBL_HIGH'=>'Vysoko',
'LBL_NUMBER'=>'Číslo:',
'LBL_PRIORITY'=>'Priorita:',
'LBL_SUBJECT'=>'Predmet',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Názov balíku:',
'LBL_MODULE_NAME'=>'Názov modulu',
'LBL_MODULE_NAME_SINGULAR' => 'Singulárny názov modulu:',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Popis',
'LBL_KEY'=>'Kľúč',
'LBL_ADD_README'=>'Prečítaj ma',
'LBL_MODULES'=>'Moduly',
'LBL_LAST_MODIFIED'=>'Naposledy zmenené',
'LBL_NEW_MODULE'=>'Nový modul',
'LBL_LABEL'=>'Štítok',
'LBL_LABEL_TITLE'=>'Štítok',
'LBL_SINGULAR_LABEL' => 'Jednotný štítok',
'LBL_WIDTH'=>'Šírka',
'LBL_PACKAGE'=>'Balík:',
'LBL_TYPE'=>'Typ:',
'LBL_TEAM_SECURITY'=>'Zabezpečenie tímu',
'LBL_ASSIGNABLE'=>'Priraditeľné',
'LBL_PERSON'=>'Osoba',
'LBL_COMPANY'=>'Spoločnosť',
'LBL_ISSUE'=>'Vydanie',
'LBL_SALE'=>'Predaj',
'LBL_FILE'=>'Súbor',
'LBL_NAV_TAB'=>'Navigačná záložka',
'LBL_CREATE'=>'Vytvoriť',
'LBL_LIST'=>'Zoznam',
'LBL_VIEW'=>'zobrazenie',
'LBL_LIST_VIEW'=>'Zobraziť zoznam',
'LBL_HISTORY'=>'Zobraziť Históriu',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Restore Default Layout',
'LBL_ACTIVITIES'=>'Aktivity',
'LBL_SEARCH'=>'Vyhľadávanie',
'LBL_NEW'=>'Nový',
'LBL_TYPE_BASIC'=>'zakladný',
'LBL_TYPE_COMPANY'=>'spoločnosť',
'LBL_TYPE_PERSON'=>'osoba',
'LBL_TYPE_ISSUE'=>'vydanie',
'LBL_TYPE_SALE'=>'predaj',
'LBL_TYPE_FILE'=>'súbor',
'LBL_RSUB'=>'Toto je subpanel, ktorý sa bude zobrazovať vo vašom module',
'LBL_MSUB'=>'Toto je subpanel, ktorý váš modul poskytuje prepojenému modulu na zobrazenie',
'LBL_MB_IMPORTABLE'=>'Povoliť importy',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'viditeľné',
'LBL_VE_HIDDEN'=>'skryté',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] bol vymazaný',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Export prispôsobení',
'LBL_EC_NAME'=>'Názov balíka:',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Popis:',
'LBL_EC_KEY'=>'Kľúč:',
'LBL_EC_CHECKERROR'=>'Prosím, vyberte modul',
'LBL_EC_CUSTOMFIELD'=>'upravené pole(polia)',
'LBL_EC_CUSTOMLAYOUT'=>'upravené rozloženia',
'LBL_EC_CUSTOMDROPDOWN' => 'customized dropdown(s)',
'LBL_EC_NOCUSTOM'=>'Žiadne moduly neboli prispôsobené',
'LBL_EC_EXPORTBTN'=>'Export',
'LBL_MODULE_DEPLOYED' => 'Modul bol nasadený.',
'LBL_UNDEFINED' => 'nedefinovaný',
'LBL_EC_CUSTOMLABEL'=>'customized label(s)',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Získavanie dát zlyhalo',
'LBL_AJAX_TIME_DEPENDENT' => 'Časovo závislá akcia prebieha. Prosím, počkajte a skúste znova za pár sekúnd.',
'LBL_AJAX_LOADING' => 'Nahrávanie...',
'LBL_AJAX_DELETING' => 'Vymazávanie...',
'LBL_AJAX_BUILDPROGRESS' => 'Stavba v progrese...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Rozmiestňovanie v progrese...',
'LBL_AJAX_FIELD_EXISTS' =>'Názov poľa, ktoré ste zadali už existuje. Prosím, vložte nový názov poľa.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Ste si istý, že chcete odobrať tento balík? Budú natrvalo vymazané všetky súbory spojené s týmto balíkom.',
'LBL_JS_REMOVE_MODULE' => 'Ste si istý, že chcete odobrať tento modul? Budú natrvalo vymazané všetky súbory spojené s týmto modulom.',
'LBL_JS_DEPLOY_PACKAGE' => 'Nejaké prispôsobenia, ktoré ste vyrobili pomocou Štúdia bude prepísané, keď tento modul bude znovu nasadený.Ste si istý, že chcete tento proces?',

'LBL_DEPLOY_IN_PROGRESS' => 'Nasadenie balíka',
'LBL_JS_VALIDATE_NAME'=>'Meno - musí byť alfanumerické, začína písmenom a neobsahuje medzery.',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'Package Key already exists',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Názov balíka už existuje',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Key - Must be alphanumeric and begin with a letter.',
'LBL_JS_VALIDATE_KEY'=>'Kľúč - musí byť alfanumerický, začína písmenom a neobsahuje medzery.',
'LBL_JS_VALIDATE_LABEL'=>'Prosím zadajte názov, ktorý bude použitý ako meno zobrazenia pre tento modul',
'LBL_JS_VALIDATE_TYPE'=>'Zo zoznamu hore prosím vyberte typ modulu, ktorý si prajete postavit.',
'LBL_JS_VALIDATE_REL_NAME'=>'Meno - musí byť alfanumerické, bez medzier',
'LBL_JS_VALIDATE_REL_LABEL'=>'Štítok - vložte prosím názov, ktorý bude zobrazený nad pomocným panelom',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Ste si istí, že chcete zmazať túto požadovanú položku rozbaľovacieho zoznamu? Môže to mať vplyv na funkčnosť aplikácie.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Ste si istí, že chcete zmazať túto položku rozbaľovacieho zoznamu? Odstránenie Uzavretých vyhratých alebo Uzavretých stratených fáz spôsobí, že prognostický modul nebude pracovať správne.',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Ste si istí, že chcete zmazať Uzavretú vyhratú predajnú fázu? Odstránenie tohto stavu spôsobí, že prognostický modul nebude pracovať správne.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Ste si istí, že chcete zmazať Uzavretú stratenú predajnú fázu? Odstránenie tohto stavu spôsobí, že prognostický modul nebude pracovať správne.',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>"Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts."
        . " If the field is involved in a formula to calculate values for any fields, the formula will no longer work."
        . "\\n\\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run."
        . "\\n\\nDo you wish to continue?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Ste si istý, že chcete vymazať tento vzťah?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Táto akcia správí tento vzťah penamentným. Ste si istý, že chcete pokračovať?',
'LBL_CONFIRM_DONT_SAVE' => 'Od posledného uloženia boli vykonané zmeny, prajete si ich uložiť?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Uložiť zmeny?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Dáta môžu byť nenávratne zkomolené, ste si istý, že chcete pokračovať?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Zvoľte správny typ dát, založenýna type dát, ktoré budu vkladané do poľa.',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Configure the field to be full text searchable.',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'Boosting is the process of enhancing the relevancy of a record\\\'s fields.<br />Fields with a higher boost level will be given greater weight when the search is performed. When a search is performed, matching records containing fields with a greater weight will be appear higher in the search results.<br />The default value is 1.0 which stands for a neutral boost. To apply a positive boost any float value higher than 1 is accepted. For a negative boost use values lower than 1. For example a value of 1.35 will positively boost a field by 135%. Using a value of 0.60 will apply a negative boost.<br />Note that in previous versions it was required to perform a full text search reindex. This is no longer required.',
'LBL_POPHELP_IMPORTABLE'=>'Ano: Pole bude zahrnuté v importe.<br />Nie: Pole nebude zahrnuté v importe.<br />Požiadavka: Hodnota pre pole musí byť poskytnutá v akomkoľvek importe.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Vložte číslo pre Šírku, nameranú v pixeloch.<br />Šírka nahraného obrázku bude zmenená na túto šírku.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Vložte číslo pre Výšku, nameranú v pixeloch.<br />Výška nahraného obrázku bude zmenená na túto výšku.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.'
. '<br><b>In Filter</b>: The field will appear in the Merge Duplicates feature, and will also be available in the Find Duplicates feature.<br><b>Filter Only</b>: The field will not appear in the Merge Duplicates feature, but will be available in the Find Duplicates feature.<br><b>Default Selected Filter</b>: The field will be used for a filter condition by default in the Find Duplicates page, and will also appear in the Merge Duplicates feature.'
,
'LBL_POPHELP_CALCULATED'=>"Create a formula to determine the value in this field.<br>"
   . "Workflow definitions containing an action that are set to update this field will no longer execute the action.<br>"
   . "Fields using formulas will not be calculated in real-time in "
   . "Mobile EditView layouts.",

'LBL_POPHELP_DEPENDENT'=>"Create a formula to determine whether this field is visible in layouts.<br/>"
        . "Dependent fields will follow the dependency formula in the browser-based mobile view, <br/>"
        . "but will not follow the formula in the native applications, such as Sugar Mobile for iPhone. <br/>"
        . "They will not follow the formula in the Sugar Self-Service Portal.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Vyberte pre využitie tohto poľa pri vyhľadávaní záznamov používajúc Glogálne Vyhľadávanie na tomto module.',
//Revert Module labels
'LBL_RESET' => 'Vynulovať',
'LBL_RESET_MODULE' => 'Vynulovať Modul',
'LBL_REMOVE_CUSTOM' => 'Odstrániť úpravy',
'LBL_CLEAR_RELATIONSHIPS' => 'Vyčistiť vzťahy',
'LBL_RESET_LABELS' => 'Vynulovať Štítky',
'LBL_RESET_LAYOUTS' => 'Reset Layouts',
'LBL_REMOVE_FIELDS' => 'Odstrániť užívateľské polia',
'LBL_CLEAR_EXTENSIONS' => 'Vyčistiť rozšírenia',

'LBL_HISTORY_TIMESTAMP' => 'Časová značka',
'LBL_HISTORY_TITLE' => 'História',

'fieldTypes' => array(
                'varchar'=>'textové pole',
                'int'=>'integrlálny',
                'float'=>'plavák',
                'bool'=>'zaškrkávacie pole',
                'enum'=>'rolovacie',
                'multienum' => 'viacvýberový',
                'date'=>'Dátum',
                'phone' => 'Telefón',
                'currency' => 'Mena',
                'html' => 'HTML',
                'radioenum' => 'Rádio',
                'relate' => 'vzťahujú',
                'address' => 'Adresa',
                'text' => 'TextovéPole',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Obrázok',
                'encrypt'=>'enkryptovať',
                'datetimecombo' =>'Dátum a čas',
                'decimal'=>'Desatinný',
),
'labelTypes' => array(
    "" => "- Admin Akcia -",
    "all" => "Všetko",
),

'parent' => 'Uvedenie Flexu',

'LBL_ILLEGAL_FIELD_VALUE' =>"Padací kľúč nemôže obsahovať úvodzovky.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Označili ste túto položku k odstráneniu z dropdown listu. Ktorékoľvek dropdown polia používajúce tento zoznam s touto položkou ako hodnotu, nebudú viac zobrazovať túto hodnotu a túto nebude viac možné označiť v dropdown poliach. &ste si istý, že chcete pokračovať?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Všetky moduly',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (súvisiace {1} ID)',
);
