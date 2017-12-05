<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'Korisnik',
      'action' => 'Akcija',
      'createdAt' => 'Datum',
      'target' => 'Meta',
      'targetType' => 'Vrsta mete',
      'authToken' => 'Auth token',
      'ipAddress' => 'IP adresa',
    ),
    'links' => 
    array (
      'authToken' => 'Auth token',
      'user' => 'Korisnik',
      'target' => 'Meta',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Samo moje',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Pročitaj',
        'update' => 'Ažuriraj',
        'delete' => 'Obriši',
        'create' => 'Napravi',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Uključeno',
      'Disabled' => 'Isključeno',
      'System' => 'Sistem',
      'Users' => 'Korisnici',
      'Email' => 'E-pošta',
      'Data' => 'Podaci',
      'Customization' => 'Prilagođavanje',
      'Available Fields' => 'Dostupna polja',
      'Layout' => 'Izgled',
      'Entity Manager' => 'Menadžer entiteta',
      'Add Panel' => 'Dodaj panel',
      'Add Field' => 'Dodaj polje',
      'Settings' => 'Podešavanja',
      'Scheduled Jobs' => 'Zakazani poslovi',
      'Upgrade' => 'Nadogradi',
      'Clear Cache' => 'Očisti keš',
      'Rebuild' => 'Re-izradi',
      'Teams' => 'Timovi',
      'Roles' => 'Uloge',
      'Portal' => 'Portal',
      'Portals' => 'Portali',
      'Portal Roles' => 'Uloge za portal',
      'Portal Users' => 'Korisnici portala',
      'Outbound Emails' => 'Odlazeća e-pošta',
      'Group Email Accounts' => 'Grupni nalozi e-pošte',
      'Personal Email Accounts' => 'Lični nalozi e-pošte',
      'Inbound Emails' => 'Dolazeća e-pošta',
      'Email Templates' => 'Nacrti za e-poštu',
      'Import' => 'Uvezi',
      'Layout Manager' => 'Menadžer izgleda',
      'User Interface' => 'Korisnički interfejs',
      'Auth Tokens' => 'Pristupni tokeni',
      'Authentication' => 'Autentikacija',
      'Currency' => 'Valuta',
      'Integrations' => 'Integracije',
      'Extensions' => 'Ekstenzije',
      'Upload' => 'Učitaj',
      'Installing...' => 'Instaliranje...',
      'Upgrading...' => 'Nadograđivanje...',
      'Upgraded successfully' => 'Uspešno nadograđeno',
      'Installed successfully' => 'Uspešno instalirano',
      'Ready for upgrade' => 'Spremno za nadograđivanje',
      'Run Upgrade' => 'Pokreni nadograđivanje',
      'Install' => 'Instaliraj',
      'Ready for installation' => 'Spremno za instalaciju',
      'Uninstalling...' => 'Deinstaliranje...',
      'Uninstalled' => 'Deinstalirano',
      'Create Entity' => 'Napravi entitet',
      'Edit Entity' => 'Izmeni entitet',
      'Create Link' => 'Napravi vezu',
      'Edit Link' => 'Izmeni vezu',
      'Notifications' => 'Obaveštenja',
      'Jobs' => 'Poslovi',
      'Reset to Default' => 'Vrati na podrazumevano',
      'Email Filters' => 'Filteri za e-poštu',
      'Action History' => 'Istorija akcija',
      'Label Manager' => 'Menadžer naziva',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Detaljno',
      'listSmall' => 'Lista (mala)',
      'detailSmall' => 'Detaljno (malo)',
      'filters' => 'Filteri pretrage',
      'massUpdate' => 'Masovna izmena',
      'relationships' => 'Paneli veza',
      'sidePanelsDetail' => 'Bočni paneli (Detalji)',
      'sidePanelsEdit' => 'Bočni paneli (Izmene)',
      'sidePanelsDetailSmall' => 'Bočni paneli (Detalji Mali)',
      'sidePanelsEditSmall' => 'Bočni paneli (izmene male)',
      'detailConvert' => 'Pretvori izvor',
      'listForAccount' => 'Lista (za pravna lica)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresa',
      'array' => 'Izbornik',
      'foreign' => 'Strani',
      'duration' => 'Trajanje',
      'password' => 'Lozinka',
      'personName' => 'Ime osobe',
      'autoincrement' => 'Autoprirast',
      'bool' => 'Tačno/Netačno',
      'currency' => 'Valuta',
      'currencyConverted' => 'Valuta (konvertovana)',
      'date' => 'Datum',
      'datetime' => 'Datum i vreme',
      'datetimeOptional' => 'Datum/Datum i vreme',
      'email' => 'E-pošta',
      'enum' => 'Lista',
      'enumInt' => 'Lista celih brojeva',
      'enumFloat' => 'Lista decimalnih brojeva',
      'float' => 'Decimalni broj',
      'int' => 'Celi broj',
      'link' => 'Veza',
      'linkMultiple' => 'Višestruka veza',
      'linkParent' => 'Veza starija',
      'multienim' => 'Multilista',
      'phone' => 'Telefon',
      'text' => 'Tekst',
      'url' => 'URL adresa',
      'varchar' => 'Kratki tekst',
      'file' => 'Datoteka',
      'image' => 'Slika',
      'multiEnum' => 'Multi-lista',
      'attachmentMultiple' => 'Više priloga',
      'rangeInt' => 'Raspon celih brojeva',
      'rangeFloat' => 'Raspon decimalnih brojeva',
      'rangeCurrency' => 'Raspon valuta',
      'wysiwyg' => 'ŠVTD',
      'map' => 'Mapa',
      'number' => 'Broj',
      'colorpicker' => 'Izbornik boja',
    ),
    'fields' => 
    array (
      'type' => 'Tip',
      'name' => 'Ime',
      'label' => 'Natpis',
      'tooltipText' => 'Objašnjenje',
      'required' => 'Zahtevano',
      'default' => 'Podrazumevano',
      'maxLength' => 'Maksimalna dužina',
      'options' => 'Opcije',
      'after' => 'Posle (polja)',
      'before' => 'Pre (polja)',
      'link' => 'Veza',
      'field' => 'Polje',
      'min' => 'Min',
      'max' => 'Maks',
      'translation' => 'Prevod',
      'previewSize' => 'Veličina prikaza',
      'noEmptyString' => 'Prazan unos nije dozvoljen',
      'defaultType' => 'Podrazumevani tip',
      'seeMoreDisabled' => 'Isključi skraćenje teksta',
      'entityList' => 'Lista entiteta',
      'isSorted' => 'Razvrstava se (po abecednom redu)',
      'audited' => 'Pod revizijom',
      'trim' => 'Skrati',
      'height' => 'Visina (px)',
      'minHeight' => 'Min visina (px)',
      'provider' => 'Provajder',
      'typeList' => 'Tip liste',
      'rows' => 'Broj redova tekstualnog polja',
      'lengthOfCut' => 'Dužina reza',
      'sourceList' => 'Lista izvora',
      'prefix' => 'Prefiks',
      'nextNumber' => 'Sledeći broj',
      'padLength' => 'Dužina ',
      'disableFormatting' => 'Isključi formatiranje',
      'dynamicLogicVisible' => 'Uslovi da polje budevidljivo',
      'dynamicLogicReadOnly' => 'Uslovi da polje bude samo za čitanje',
      'dynamicLogicRequired' => 'Uslovi da polje bude potrebno',
      'dynamicLogicOptions' => 'Uslovne opcije',
      'probabilityMap' => 'Faza Verovatnoće (%)',
      'readOnly' => 'Samo za čitanje',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM će biti unapređen na verziju na <strong>{version}</ strong>. Budite strpljivi jer to može potrajati.',
      'upgradeDone' => 'EspoCRM je unapređen na verziju na <strong>{version}</strong>,.',
      'upgradeBackup' => 'Preporučujemo pravljenje rezervne kopije EspoCRM datoteka i podataka pre nadogradnje.',
      'thousandSeparatorEqualsDecimalMark' => 'Oznaka za hiljade ne može biti ista kao decimalna oznaka.',
      'userHasNoEmailAddress' => 'Korisnik nema e-mail adresu.',
      'selectEntityType' => 'Izaberite tip entiteta u levom meniju.',
      'selectUpgradePackage' => 'Izaberi paket nadogradnje',
      'downloadUpgradePackage' => 'Preuzmi paket nadogradnje <a href="{url}">ovde</a>.',
      'selectLayout' => 'Izaberi željeni izgled u levom meniju i uredi ga.',
      'selectExtensionPackage' => 'Izaberi paket ekstenzije',
      'extensionInstalled' => 'Ekstenzija {name} {version} je instalirana.',
      'installExtension' => 'Ekstenzija {name} {version} je spremna za instalaciju.',
      'uninstallConfirmation' => 'Da li ste sigurni da želite da deinstalirate ekstenziju?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Sistemska podešavanja aplikacije.',
      'scheduledJob' => 'Poslovi koji se obavljaju putem cron-a.',
      'upgrade' => 'Nadogradi EspoCRM.',
      'clearCache' => 'Očistite sav backend keš.',
      'rebuild' => 'Obnovi backend i očisti keš.',
      'users' => 'Upravljanje korisnicima.',
      'teams' => 'Upravljanje timovima',
      'roles' => 'Upravljanje ulogama.',
      'portals' => 'Upravljanje portalima',
      'portalRoles' => 'Uloge za portale.',
      'portalUsers' => 'Korisnici portala.',
      'outboundEmails' => 'Podešavanja SMTP za odlazeću e-poštu.',
      'groupEmailAccounts' => 'Grupni IMAP nalozi e-pošte. E-pošta uvoz i E-pošta za Predmet.',
      'personalEmailAccounts' => 'Korisnički nalozi e-pošte.',
      'emailTemplates' => 'Šabloni za odlaznu e-poštu.',
      'import' => 'Uvoz podataka iz CSV datoteke.',
      'layoutManager' => 'Prilagodite preglede (lista, detaljno, izmena, pretraživanje, masovna izmena).',
      'entityManager' => 'Kreiranje i uređivanje prilagođenih entiteta. Upravljanje poljima i odnosima.',
      'userInterface' => 'Konfigurišite interfejs.',
      'authTokens' => 'Aktivne sesije. IP adresa i poslednji datum pristupa.',
      'authentication' => 'Podešavanja pristupa.',
      'currency' => 'Podešavanja valute i stope.',
      'extensions' => 'Instalirati ili deinstalirati ekstenzije.',
      'integrations' => 'Integracija sa trećim uslugama.',
      'notifications' => 'Postavke obaveštenja u aplikaciji i e-poštom.',
      'inboundEmails' => 'Podešavanja za dolazne e-poruke.',
      'emailFilters' => 'E-mail poruke koje se podudaraju sa određenim filterom neće biti uvezene.',
      'actionHistory' => 'Dnevnik korisničkih akcija.',
      'labelManager' => 'Prilagodi nazive aplikacija',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Veoma malo',
        'small' => 'Malo',
        'medium' => 'Srednje',
        'large' => 'Veliko',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'AND',
      'or' => 'OR',
      'not' => 'NOT',
    ),
  ),
  'Attachment' => 
  array (
    'insertFromSourceLabels' => 
    array (
      'Document' => 'Ubaci dokument',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Korisnik',
      'ipAddress' => 'IP adresa',
      'lastAccess' => 'Poslednji pristup',
      'createdAt' => 'Prijava',
      'isActive' => 'je aktivan',
      'portal' => 'Portal',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Istorija akcija',
    ),
    'presetFilters' => 
    array (
      'active' => 'je aktivan',
      'inactive' => 'je neaktivan',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Podesi kao neaktivan',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Podesi kao neaktivan',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Naslov',
      'dateFrom' => 'Datum od',
      'dateTo' => 'Datum do',
      'autorefreshInterval' => 'Auto-osveženje interval',
      'displayRecords' => 'Prikaz unosa',
      'isDoubleHeight' => 'Visina 2x',
      'mode' => 'Način',
      'enabledScopeList' => 'Šta za prikazati',
      'users' => 'Korisnici',
      'entityType' => 'Tip entiteta',
      'primaryFilter' => 'Primarni filter',
      'boolFilterList' => 'Dodatni Filteri',
      'sortBy' => 'Redosled (polja)',
      'sortDirection' => 'Redosled (pravac)',
      'expandedLayout' => 'Raspored',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Sedmica (raspored)',
        'basicWeek' => 'Sedmica',
        'month' => 'Mesec',
        'basicDay' => 'Dan',
        'agendaDay' => 'Dan (raspored)',
        'timeline' => 'Vremenska linija',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Izaberi tip entiteta u opcijama za  dashlet.',
    ),
  ),
  'DynamicLogic' => 
  array (
    'label' => 
    array (
      'Field' => 'Polje',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'Jednak',
        'notEquals' => 'Nije jednako',
        'greaterThan' => 'Veće od',
        'lessThan' => 'Manje od',
        'greaterThanOrEquals' => 'Više ili jednako',
        'lessThanOrEquals' => 'Manje ili jednako',
        'in' => 'U ovom',
        'notIn' => 'Ne u',
        'inPast' => 'U prošlosti',
        'inFuture' => 'Da li je budućnost',
        'isToday' => 'je danas',
        'isTrue' => 'Tačno je',
        'isFalse' => 'je netačno',
        'isEmpty' => 'Prazno',
        'isNotEmpty' => 'Nije prazno',
        'contains' => 'Sadrži',
        'notContains' => 'ne sadrži',
        'has' => 'Sadrži',
        'notHas' => 'ne sadrži',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime (subjekat)',
      'parent' => 'Roditelj',
      'status' => 'Status',
      'dateSent' => 'Datum slanja',
      'from' => 'Od',
      'to' => 'Za',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Odgovarati na',
      'replyToString' => 'Odgovarati na (string)',
      'isHtml' => 'je HTML',
      'body' => 'Telo teksta',
      'subject' => 'Predmet',
      'attachments' => 'Prilozi',
      'selectTemplate' => 'Izbor šablona',
      'fromEmailAddress' => 'Od adresa',
      'toEmailAddresses' => 'Na adresu',
      'emailAddress' => 'Adresa e-pošte',
      'deliveryDate' => 'Datum isporuke',
      'account' => 'Pravno lice',
      'users' => 'Korisnici',
      'replied' => 'Odgovorio',
      'replies' => 'Odgovori',
      'isRead' => 'je pročitano',
      'isNotRead' => 'nije pročitano',
      'isImportant' => 'je važna',
      'isReplied' => 'je odgovoreno',
      'isNotReplied' => 'nije odgovoreno',
      'isUsers' => 'je od korisnika',
      'inTrash' => 'u otpadu',
      'sentBy' => 'Sent By',
      'folder' => 'Fascikla',
      'inboundEmails' => 'Grupni nalozi',
      'emailAccounts' => 'Lični nalozi',
      'hasAttachment' => 'ima prilog',
      'assignedUsers' => 'Assigned Users',
    ),
    'links' => 
    array (
      'replied' => 'odgovorio',
      'replies' => 'Odgovori',
      'inboundEmails' => 'Grupni nalozi',
      'emailAccounts' => 'Lični nalozi',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Sent By',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Nacrt',
        'Sending' => 'Slanje',
        'Sent' => 'Poslato',
        'Archived' => 'Arhivirana',
        'Received' => 'Primljena',
        'Failed' => 'Neuspešno',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Arhiva E-pošte',
      'Archive Email' => 'Arhiva E-pošte',
      'Compose' => 'Sastaviti',
      'Reply' => 'Odgovoriti',
      'Reply to All' => 'Odgovoriti na sve',
      'Forward' => 'Proslediti',
      'Original message' => '---------------------------- Originalna poruka ----------------------------',
      'Forwarded message' => 'Prosleđena poruka',
      'Email Accounts' => 'Lični nalog e-pošte',
      'Inbound Emails' => 'Grupni nalog e-pošte',
      'Email Templates' => 'Šabloni e-pošte',
      'Send Test Email' => 'Poštalji probnu poruku',
      'Send' => 'Poslati',
      'Email Address' => 'Adresa e-pošte',
      'Mark Read' => 'Označi kao pročitano',
      'Sending...' => 'Slanje...',
      'Save Draft' => 'Sačuvaj kao nacrt',
      'Mark all as read' => 'Označi sve kao pročitano',
      'Show Plain Text' => 'Prikaži običan tekst',
      'Mark as Important' => 'Označite kao važno',
      'Unmark Importance' => 'Ukinite oznaku važno',
      'Move to Trash' => 'Pošalji u otpad',
      'Retrieve from Trash' => 'Vrati iz otpada',
      'Move to Folder' => 'Premesti u folder',
      'Filters' => 'Filteri',
      'Folders' => 'Fascikle',
      'Create Lead' => 'Napraviti izvor',
      'Create Contact' => 'Napraviti kontakt',
      'Add to Contact' => 'Dodaj u Kontakt',
      'Add to Lead' => 'Dodaj u Izvor',
      'Create Task' => 'Napraviti zadatak',
      'Create Case' => 'Napraviti predmet',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Nema podešavanje SMTP. {link}.',
      'testEmailSent' => 'Test poruka je poslata',
      'emailSent' => 'Poruka je poslata',
      'savedAsDraft' => 'Sačuvano kao nacrt',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Poslato',
      'archived' => 'Arhivirana',
      'inbox' => 'Primljene',
      'drafts' => 'Nacrti',
      'trash' => 'Otpad',
      'important' => 'Važno',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Označi kao pročitano',
      'markAsNotRead' => 'Označi kao nepročitano',
      'markAsImportant' => 'Označite kao važno',
      'markAsNotImportant' => 'Uklonite oznaku važno',
      'moveToTrash' => 'Pošalji u otpad',
      'moveToFolder' => 'Premesti u fasciklu',
      'retrieveFromTrash' => 'Vrati iz kante',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Korisničko ime',
      'password' => 'Lozinka',
      'port' => 'Port',
      'monitoredFolders' => 'Nadgledani folderi',
      'ssl' => 'SSL',
      'fetchSince' => 'Preuzimaj od',
      'emailAddress' => 'Adresa e-pošte',
      'sentFolder' => 'Fascikla poslatih',
      'storeSentEmails' => 'Čuvaj poslate poruke',
      'keepFetchedEmailsUnread' => 'Drži preuzete poruke kao nepročitane',
      'emailFolder' => 'Stavi u fasciklu',
      'useSmtp' => 'Koristi SMTP',
      'smtpHost' => 'SMTP host',
      'smtpPort' => 'SMTP port',
      'smtpAuth' => 'SMTP auth',
      'smtpSecurity' => 'SMTP bezbednost',
      'smtpUsername' => 'SMTP korisničko ime',
      'smtpPassword' => 'SMTP lozinka',
    ),
    'links' => 
    array (
      'filters' => 'Filteri',
      'emails' => 'E-poruke',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktivan',
        'Inactive' => 'Neaktivan',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Napravite nalog e-pošte',
      'IMAP' => 'IMAP',
      'Main' => 'Glavni',
      'Test Connection' => 'Testiraj vezu',
      'Send Test Email' => 'Poštalji probnu e-poruku',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Ne može da se poveže na IMAP server',
      'connectionIsOk' => 'Veza u redu',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Više fascilli mora biti odeljeno zapetama.

Možete dodati fasciklu "poslate" da biste sinhronizovali e-poruke poslate sa spoljnog klijenta.',
      'storeSentEmails' => 'Poslate e-poruke će se čuvati na IMAP serveru. E-mail adresa polje treba bude isto kao i adresa odakle je poslata.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primarna',
      'Opted Out' => 'Ne želi',
      'Invalid' => 'Netačno',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Od',
      'to' => 'Za',
      'subject' => 'Predmet',
      'bodyContains' => 'Telo teksta',
      'action' => 'Akcija',
      'isGlobal' => 'je globalna',
      'emailFolder' => 'Fascikla',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Napravi filter e-pošte',
      'Emails' => 'E-poruke',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignorisati',
        'Move to Folder' => 'Staviti u fasciklu',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Dajte filteru opisno ime.',
      'subject' => 'Koristite džoker *:

text* - pošinje sa text,
*text* - sadrži text,
*text - završava se sa text.',
      'bodyContains' => 'Telo e-poruke sadrži bilo koju od navedenih reči ili fraza.',
      'from' => 'Poruke se šalju sa navedene adrese. Ostaviti prazno ako nije potrebno. Možete koristiti džoker *.',
      'to' => 'Poruke se šalju na navedenu adresu. Ostaviti prazno ako nije potrebno. Možete koristiti džoker *.',
      'isGlobal' => 'Primenjuje ovaj filter na svim email porukama koje dolaze u sistem.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Preskoči obaveštenja',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Napraviti fasciklu',
      'Manage Folders' => 'Upravljanje fasciklama',
      'Emails' => 'E-poruke',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'isHtml' => 'je HTML',
      'body' => 'Telo',
      'subject' => 'Predmet',
      'attachments' => 'Prilozi',
      'insertField' => 'Ubaci polje',
      'oneOff' => 'Jednokratno',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Kreiraj šablon e-pošte',
      'Info' => 'Info',
    ),
    'messages' => 
    array (
      'infoText' => 'Dostupne promenljive: 

{optOutUrl} &#8211; URL za link za odjavljivanje;

{optOutLink} &#8211; link za odjavljivanje.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Označite ako nameravate da koristite ovaj obrazac samo jednom. Npr. masovna poruka.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Trenutni',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Polja',
      'Relationships' => 'Odnosi',
      'Schedule' => 'Raspored',
      'Log' => 'Dnevnik',
      'Formula' => 'Formula',
    ),
    'fields' => 
    array (
      'name' => 'Ime',
      'type' => 'Tip',
      'labelSingular' => 'Natpis jednina',
      'labelPlural' => 'Natpis množina',
      'stream' => 'Tok vesti',
      'label' => 'Natpis',
      'linkType' => 'Vrsta veze',
      'entityForeign' => 'Strani entitet',
      'linkForeign' => 'Strana veza',
      'link' => 'Veza',
      'labelForeign' => 'Strani natpis',
      'sortBy' => 'Podrzumevani red (polje)',
      'sortDirection' => 'Podrzumevani red (smer)',
      'relationName' => 'Naziv srednje tabele',
      'linkMultipleField' => 'Veži više polja',
      'linkMultipleFieldForeign' => 'Veži više stranih polja',
      'disabled' => 'Onemogućeno',
      'textFilterFields' => 'Tekst filter polja',
      'audited' => 'Revizija',
      'auditedForeign' => 'Revidirano strano',
      'statusField' => 'Status polja',
      'beforeSaveCustomScript' => 'Prilagođeni kod za pre snimanja',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Nema',
        'Base' => 'Baza',
        'Person' => 'Osoba',
        'CategoryTree' => 'Drvo Kategorija ',
        'Event' => 'Edogađaj',
        'BasePlus' => 'Bazno plus',
        'Company' => 'Kompanija',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Mnogi-na-mnoge',
        'oneToMany' => 'Jedan-na-Mnoge',
        'manyToOne' => 'Mnogi-na-Jedan',
        'parentToChildren' => 'Roditelj-prema-deci',
        'childrenToParent' => 'Deca-prema-Roditelju',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Uzlazni',
        'desc' => 'Silazni',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Entitet je stvoren',
      'linkAlreadyExists' => 'Sukob naziva veze.',
      'linkConflict' => 'Sukob naziva: veza ili polje sa istim nazivom već postoje.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Ažuriranja iz ovog polja se prijavljuje u toku vesti.',
      'textFilterFields' => 'Polja koja se koriste za pretraživanje teksta.',
      'stream' => 'Da li entitet ima tok vesti.',
      'disabled' => 'Proverite da li vam ne treba ovaj entitet u vašem sistemu.',
      'linkAudited' => 'Stvaranje povezanog unosa i povezivanje sa postojećim unosom će biti prijavljeni u toku vesti.',
      'linkMultipleField' => 'Višestuka veza polje pruža zgodan način za uređivanje odnosa. Nemojte ga koristiti ako imate veliki broj povezanih zapisa.',
      'entityType' => 'Bazni plus - ima aktivnosti, istoriju i zadaci panele.
Događaj - Dostupan u kalendaru i panelu aktivnosti.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Izvesti sva polja',
      'fieldList' => 'Polje lista',
      'format' => 'Format',
    ),
    'options' => 
    array (
      'format' => 
      array (
        'csv' => 'CSV datoteke',
        'xlsx' => 'XLSX (Excel),',
      ),
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'version' => 'Verzija',
      'description' => 'Opis',
      'isInstalled' => 'Instalirano',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Deinstaliraj',
      'Install' => 'Instaliraj',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Ekstenzija {name} je deinstalirana',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Poveži',
      'Connected' => 'Povezano',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Dinamička Logika',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Nema',
        'javascript: return this.dateTime.getNow(1);' => 'Sada',
        'javascript: return this.dateTime.getNow(5);' => 'Sada (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Sada (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Sada (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 sat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 sata',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 sata',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 sata',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 Sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 dan',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 Dan(a)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 Dan(a)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 dana.',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 dana.',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 dana.',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 nedelja',
      ),
      'dateDefault' => 
      array (
        '' => 'Nema',
        'javascript: return this.dateTime.getToday();' => 'Danas',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 Dan',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 nedelja',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 nedelje',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 nedelje',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 mesec',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 meseca',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 meseca',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 meseca',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 meseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 meseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 meseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 meseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 meseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 meseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 meseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 godina',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Ispravke će biti prijavljene u toku vesti.',
      'required' => 'Polje će biti obavezno. Ne može ostati prazno.',
      'default' => 'Vrednost će biti postavljena na podrazumevano.',
      'min' => 'Min prihvatljiva vrednost.',
      'max' => 'Maks prihvatljiva vrednost.',
      'seeMoreDisabled' => 'Ako nije otkačeno onda će dugi tekstovi biti skraćeni.',
      'lengthOfCut' => 'Koliko teksta može biti pre skraćivnaja.',
      'maxLength' => 'Maksimalna prihvatljiva dužina teksta.',
      'before' => 'Vrednost datuma mora da bude pre datuma vrednosti određenog polja.',
      'after' => 'Vrednost datuma mora da bude nakon datuma vrednosti određenog polja.',
      'readOnly' => 'Vrednost polja ne može biti određen od strane korisnika. Ali može se izračunati formulom.',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'E-pošta',
      'User' => 'Korisnik',
      'Team' => 'Tim',
      'Role' => 'Uloga',
      'EmailTemplate' => 'Šablon e-pošte',
      'EmailAccount' => 'Lični nalog e-pošte',
      'EmailAccountScope' => 'Lični nalog e-pošte',
      'OutboundEmail' => 'Odlazna e-pošta',
      'ScheduledJob' => 'Zakazani poslovi',
      'ExternalAccount' => 'Spoljni nalog',
      'Extension' => 'Ekstenzija',
      'Dashboard' => 'Radna površina',
      'InboundEmail' => 'Grupni nalog e-pošte',
      'Stream' => 'Tok vesti',
      'Import' => 'Uvezi',
      'Template' => 'Šablon',
      'Job' => 'Posao',
      'EmailFilter' => 'Filter e-pošte',
      'Portal' => 'Portal',
      'PortalRole' => 'Uloga za portal',
      'Attachment' => 'Prilog',
      'EmailFolder' => 'Fascikla e-pošte',
      'PortalUser' => 'Korisnik portala',
      'ScheduledJobLogRecord' => 'Upis dnevnika zakazanih poslova',
      'PasswordChangeRequest' => 'Zahtev za promenu lozinke',
      'ActionHistoryRecord' => 'Upis istorije akcija',
      'AuthToken' => 'auth token',
      'UniqueId' => 'Jedinstveni ID',
      'LastViewed' => 'Poslednji put pregledano',
      'Settings' => 'Podešavanja',
      'FieldManager' => 'Menadžer polja',
      'Integration' => 'Integracija',
      'LayoutManager' => 'Menadžer rasporeda',
      'EntityManager' => 'Menadžer entiteta',
      'Export' => 'Izvezi',
      'DynamicLogic' => 'Dinamička logika',
      'DashletOptions' => 'Opcija za dashlet',
      'Admin' => 'Admin',
      'Global' => 'Globalno',
      'Preferences' => 'Prilagođavanja',
      'EmailAddress' => 'Adresa e-pošte',
      'PhoneNumber' => 'Telefonski broj',
      'Account' => 'Pravno lice',
      'Contact' => 'Kontakt',
      'Lead' => 'Izvor',
      'Target' => 'Meta',
      'Opportunity' => 'Prilika',
      'Meeting' => 'Ročište',
      'Calendar' => 'Kalendar',
      'Call' => 'Poziv',
      'Task' => 'Zadatak',
      'Case' => 'Predmet',
      'Document' => 'Dokument',
      'DocumentFolder' => 'Fasikla dokumenata',
      'Campaign' => 'Kampanja',
      'TargetList' => 'Lista meta',
      'MassEmail' => 'Masovna e-pošta',
      'EmailQueueItem' => 'Email sa liste čekanja',
      'CampaignTrackingUrl' => 'URL za praćenje',
      'Activities' => 'Aktivnosti',
      'KnowledgeBaseArticle' => 'Baza znanja članak',
      'KnowledgeBaseCategory' => 'Baza znanja kategorija',
      'CampaignLogRecord' => 'Upis dnevnika kampanje',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'E-poruke',
      'User' => 'Korisnici',
      'Team' => 'Timovi',
      'Role' => 'Uloge',
      'EmailTemplate' => 'Šabloni e-pošte',
      'EmailAccount' => 'Lični nalozi e-pošte',
      'EmailAccountScope' => 'Lični nalozi e-pošte',
      'OutboundEmail' => 'Odlazne e-poruke',
      'ScheduledJob' => 'Zakazani Poslovi',
      'ExternalAccount' => 'Spoljni nalozi',
      'Extension' => 'Ekstenzije',
      'Dashboard' => 'Radna površina',
      'InboundEmail' => 'Grupni nalozi e-pošte',
      'Stream' => 'Tok vesti',
      'Import' => 'Rezultati uvoza',
      'Template' => 'Šabloni',
      'Job' => 'Poslovi',
      'EmailFilter' => 'Filteri e-pošte',
      'Portal' => 'Portali',
      'PortalRole' => 'Uloge za portal',
      'Attachment' => 'Prilozi',
      'EmailFolder' => 'Fascikle e-pošte',
      'PortalUser' => 'Korisnici portala',
      'ScheduledJobLogRecord' => 'Upisi dnevnika zakazanih poslova',
      'PasswordChangeRequest' => 'Zahtevi za promenu lozinki',
      'ActionHistoryRecord' => 'Istorija akcija',
      'AuthToken' => 'Auth Tokeni',
      'UniqueId' => 'Jedinstveni ID-ovi',
      'LastViewed' => 'Poslednji put pregledano',
      'Account' => 'Pravna lica',
      'Contact' => 'Kontakti',
      'Lead' => 'Izvori',
      'Target' => 'Mete',
      'Opportunity' => 'Prilike',
      'Meeting' => 'Ročišta',
      'Calendar' => 'Kalendar',
      'Call' => 'Pozivi',
      'Task' => 'Zadaci',
      'Case' => 'Predmeti',
      'Document' => 'Dokumenti',
      'DocumentFolder' => 'Dokument fascikle',
      'Campaign' => 'Kampanje',
      'TargetList' => 'Liste meta',
      'MassEmail' => 'Masovne e-pošta',
      'EmailQueueItem' => 'Email sa liste za čekanje',
      'CampaignTrackingUrl' => 'Praćenje URL-ova',
      'Activities' => 'Aktivnosti',
      'KnowledgeBaseArticle' => 'Baza znanja',
      'KnowledgeBaseCategory' => 'Baza znanja Kategorije',
      'CampaignLogRecord' => 'Upisi dnevnika kampanje',
    ),
    'labels' => 
    array (
      'Misc' => 'Ostalo',
      'Merge' => 'Spoji',
      'None' => 'Nema',
      'Home' => 'Poštena',
      'by' => 'autor',
      'Saved' => 'Sačuvano',
      'Error' => 'Greška',
      'Select' => 'Odaberi',
      'Not valid' => 'Nije validan',
      'Please wait...' => 'Sačekajte...',
      'Please wait' => 'Sačekajte',
      'Loading...' => 'Učitavanje...',
      'Uploading...' => 'Otpremanje...',
      'Sending...' => 'Slanje...',
      'Merging...' => 'Spajanje ...',
      'Merged' => 'Merged',
      'Removed' => 'Uklonjeno',
      'Posted' => 'Objavljeno',
      'Linked' => 'Povezano',
      'Unlinked' => 'Nepovezano',
      'Done' => 'Urađeno',
      'Access denied' => 'Pristup zabranjen',
      'Not found' => 'Nije pronađeno',
      'Access' => 'Pristup',
      'Are you sure?' => 'Jeste li sigurni?',
      'Record has been removed' => 'Unos je uklonjen',
      'Wrong username/password' => 'Pogrešno korisničko ime / lozinka',
      'Post cannot be empty' => 'Unos ne može biti prazan',
      'Removing...' => 'Uklanjanje ...',
      'Unlinking...' => 'Opoziv veze ...',
      'Posting...' => 'Postavljanje ...',
      'Username can not be empty!' => 'Korisničko ime ne može biti prazno!',
      'Cache is not enabled' => 'Keš nije omogućen',
      'Cache has been cleared' => 'Keš je obrisan',
      'Rebuild has been done' => 'Obnova je urađena',
      'Return to Application' => 'Povratak na aplikaciju',
      'Saving...' => 'Čuvanje...',
      'Modified' => 'Izmenjeno',
      'Created' => 'Napravljeno',
      'Create' => 'Napravi',
      'create' => 'napravi',
      'Overview' => 'Pregled',
      'Details' => 'Detaljno',
      'Add Field' => 'Dodaj polje',
      'Add Dashlet' => 'Dodaj Dashlet',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Izmeni radnu površinu',
      'Add' => 'Dodaj',
      'Add Item' => 'Dodajte stavku',
      'Reset' => 'Resetovati',
      'Menu' => 'Meni',
      'More' => 'Još',
      'Search' => 'Pretraživanje',
      'Only My' => 'Samo moje',
      'Open' => 'Otvori',
      'Admin' => 'Admin',
      'About' => 'O...',
      'Refresh' => 'Osvežiti',
      'Remove' => 'Ukloni',
      'Options' => 'Opcije',
      'Username' => 'Korisničko ime',
      'Password' => 'Lozinka',
      'Login' => 'Prijava',
      'Log Out' => 'Odjavljivanje',
      'Preferences' => 'Podešavanja',
      'State' => 'Status',
      'Street' => 'Ulica',
      'Country' => 'Zemlja',
      'City' => 'Grad',
      'PostalCode' => 'Poštanski kod',
      'Followed' => 'Prati se',
      'Follow' => 'Pratiti',
      'Followers' => 'Ko prati',
      'Clear Local Cache' => 'Očisti lokalni keš',
      'Actions' => 'Akcije',
      'Delete' => 'Obriši',
      'Update' => 'Izmeni',
      'Save' => 'Sačuvaj',
      'Edit' => 'Izmeni',
      'View' => 'Pregled',
      'Cancel' => 'Otkazati',
      'Apply' => 'Primeniti',
      'Unlink' => 'Otkačiti',
      'Mass Update' => 'Masovna izmena',
      'Export' => 'Izvoz',
      'No Data' => 'Nema podataka',
      'No Access' => 'Nema pristupa',
      'All' => 'Sve',
      'Active' => 'Aktivan',
      'Inactive' => 'Neaktivan',
      'Write your comment here' => 'Napišite vaš komentar ovde',
      'Post' => 'Unos',
      'Stream' => 'Tok vesti',
      'Show more' => 'Prikaži više',
      'Dashlet Options' => 'Dashlet Opcije',
      'Full Form' => 'Puni formular',
      'Insert' => 'Ubaci',
      'Person' => 'Osoba',
      'First Name' => 'Ime',
      'Last Name' => 'Prezime',
      'Original' => 'Original',
      'You' => 'Ti',
      'you' => 'ti',
      'change' => 'promena',
      'Change' => 'Promena',
      'Primary' => 'Primarno',
      'Save Filter' => 'Sačuvaj filter',
      'Administration' => 'Administracija',
      'Run Import' => 'Pokreni uvoz',
      'Duplicate' => 'Dupliciraj',
      'Notifications' => 'Obaveštenja',
      'Mark all read' => 'Označi sve kao pročitno',
      'See more' => 'Vidi više',
      'Today' => 'Danas',
      'Tomorrow' => 'Sutra',
      'Yesterday' => 'Juče',
      'Submit' => 'Pošalji',
      'Close' => 'Zatvori',
      'Yes' => 'Da',
      'No' => 'Ne',
      'Select All Results' => 'Izaberi sve rezultate',
      'Value' => 'Vrednost',
      'Current version' => 'Trenutna verzija',
      'List View' => 'Pregled lista',
      'Tree View' => 'Pregled drvo',
      'Unlink All' => 'Ukloni sve veze',
      'Total' => 'Ukupno',
      'Print to PDF' => 'Odštampaj u PDF',
      'Default' => 'Podrazumevano',
      'Number' => 'Broj',
      'From' => 'Od',
      'To' => 'Za',
      'Create Post' => 'Napravi unos',
      'Previous Entry' => 'Prethodni unos',
      'Next Entry' => 'Sledeći unos',
      'View List' => 'Pregled lista',
      'Attach File' => 'Priložite datoteku',
      'Skip' => 'Preskoči',
      'Attribute' => 'Atribut',
      'Function' => 'Funkcija',
      'Self-Assign' => 'Samo-dodela',
      'Self-Assigned' => 'Samo-dodeljeno',
      'Create InboundEmail' => 'Napravite dolazni Email',
      'Activities' => 'Aktivnosti',
      'History' => 'Istorija',
      'Attendees' => 'Zvanice',
      'Schedule Meeting' => 'Zakaži ročište',
      'Schedule Call' => 'Zakaži poziv',
      'Compose Email' => 'Sastavi e-poruku',
      'Log Meeting' => 'Upiši ročište',
      'Log Call' => 'Upiši poziv',
      'Archive Email' => 'Arhiva E-pošte',
      'Create Task' => 'Napravi Zadatak',
      'Tasks' => 'Zadaci',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Sačekajte...',
      'posting' => 'Postavljanje ...',
      'loading' => 'Učitava se...',
      'saving' => 'Čuva se...',
      'confirmLeaveOutMessage' => 'Da li ste sigurni da želite da napustite formular?',
      'notModified' => 'Niste modifikovali upis',
      'duplicate' => 'Upis koji stvarate možda već postoji',
      'dropToAttach' => 'Otpusti za prikačivanje',
      'fieldIsRequired' => '{field} je obavezno',
      'fieldShouldBeEmail' => '{field} treba da bude važeći e-mail',
      'fieldShouldBeFloat' => '{field} treba da bude važeći decimlani broj',
      'fieldShouldBeInt' => '{field} treba da bude važeći celi broj',
      'fieldShouldBeDate' => '{field} treba da bude važeći datum',
      'fieldShouldBeDatetime' => '{field} treba da bude važeći datum / vreme',
      'fieldShouldAfter' => '{Field} mora biti nakon {otherField}',
      'fieldShouldBefore' => '{field} mora biti pre {otherField}',
      'fieldShouldBeBetween' => '{Field} treba da bude između {min} i {mak}',
      'fieldShouldBeLess' => '{Field} treba da bude manje od {value}',
      'fieldShouldBeGreater' => '{Field} mora biti veće od {value}',
      'fieldBadPasswordConfirm' => '{Field} nije potvrđeno',
      'resetPreferencesDone' => 'Postavke su vraćene na podrazumevano',
      'confirmation' => 'Jeste li sigurni?',
      'unlinkAllConfirmation' => 'Da li ste sigurni da želite da raskinete vezu između svih povezanih zapisa?',
      'resetPreferencesConfirmation' => 'Da li ste sigurni da želite da vratite postavke na podrazumevane?',
      'removeRecordConfirmation' => 'Da li ste sigurni da želite da uklonite upis?',
      'unlinkRecordConfirmation' => 'Da li ste sigurni da želite da raskinete vezu?',
      'removeSelectedRecordsConfirmation' => 'Da li ste sigurni da želite da uklonite izabrane podatke?',
      'massUpdateResult' => '{Count} upisa je izmenjeno',
      'massUpdateResultSingle' => '{Count} upis je izmenjen',
      'noRecordsUpdated' => 'Nisu vršene izmene',
      'massRemoveResult' => '{count} unosa je uklonjeno',
      'massRemoveResultSingle' => '{count} upis je uklonjen',
      'noRecordsRemoved' => 'Upisi nisu uklonjeni',
      'clickToRefresh' => 'Pritisni da se osveži',
      'streamPostInfo' => 'Unesi <strong>@imekoriniska</strong> da ga pomeneš.

Dostupna sintaksa:
`<code>kod</code>`
**<strong>jaktekst</strong>**
*<em>naglašentekst</em>*
~<del>izbrisan tekst</del>~
> blockquote
[link text](url)',
      'writeYourCommentHere' => 'Napišite vaš komentar ovde',
      'writeMessageToUser' => 'Napišite poruku za {user}',
      'writeMessageToSelf' => 'Napiši poruku na tok vesti',
      'typeAndPressEnter' => 'Ukucajte & pritisnite enter',
      'checkForNewNotifications' => 'Proverite nova obaveštenja',
      'checkForNewNotes' => 'Proveri izmene toka vesti',
      'internalPost' => 'Objavu će se videti samo interni korisnici',
      'internalPostTitle' => 'Upis se prikazuje samo internim korisnicima',
      'done' => 'Urađeno',
      'confirmMassFollow' => 'Da li ste sigurni da želite da pratite odabrane unose?',
      'confirmMassUnfollow' => 'Da li ste sigurni da želite da ne pretite izabrane unose?',
      'massFollowResult' => '{count} unosa se sada prati',
      'massUnfollowResult' => '{count} unosa se sada ne prati',
      'massFollowResultSingle' => '{count} unos se sada prati',
      'massUnfollowResultSingle' => '{count} unos se sada ne prati',
      'massFollowZeroResult' => 'Ništa nije zapraćeno',
      'massUnfollowZeroResult' => 'Ništa nije otpraćeno',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Samo moje',
      'followed' => 'Prati se',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Prati se',
      'all' => 'Sve',
    ),
    'massActions' => 
    array (
      'remove' => 'Ukloni',
      'merge' => 'Spoji',
      'massUpdate' => 'Masovna izmena',
      'export' => 'Izvoz...',
      'follow' => 'Pratiti',
      'unfollow' => 'Otkaži praćenje',
    ),
    'fields' => 
    array (
      'name' => 'Ime',
      'firstName' => 'Ime',
      'lastName' => 'Prezime',
      'salutationName' => 'Titula',
      'assignedUser' => 'Dodeljeno korisniku',
      'assignedUsers' => 'Dodeljeno korisnicima',
      'emailAddress' => 'E-pošta',
      'assignedUserName' => 'Dodeljeno korisničko ime',
      'teams' => 'Timovi',
      'createdAt' => 'Napravljeno u',
      'modifiedAt' => 'Izmenjeno u',
      'createdBy' => 'Napravio',
      'modifiedBy' => 'Izmenio',
      'description' => 'Opis',
      'address' => 'Adresa',
      'phoneNumber' => 'Telefon',
      'phoneNumberMobile' => 'Telefon (mobilni)',
      'phoneNumberHome' => 'Telefon (kućni)',
      'phoneNumberFax' => 'Telefon (Faks)',
      'phoneNumberOffice' => 'Telefon (kanc)',
      'phoneNumberOther' => 'Telefon (Drugo)',
      'order' => 'Redosled',
      'parent' => 'Roditelj',
      'children' => 'Deca',
      'id' => 'ID',
      'billingAddressCity' => 'Grad',
      'billingAddressCountry' => 'Zemlja',
      'billingAddressPostalCode' => 'Poštanski kod',
      'billingAddressState' => 'Stanje',
      'billingAddressStreet' => 'Ulica',
      'billingAddressMap' => 'Mapa',
      'addressCity' => 'Grad',
      'addressStreet' => 'Ulica',
      'addressCountry' => 'Zemlja',
      'addressState' => 'Stanje',
      'addressPostalCode' => 'Poštanski kod',
      'addressMap' => 'Mapa',
      'shippingAddressCity' => 'Grad (Dostava)',
      'shippingAddressStreet' => 'Street (Dostava)',
      'shippingAddressCountry' => 'Okrug (Dostava)',
      'shippingAddressState' => 'Država (Dostava)',
      'shippingAddressPostalCode' => 'Poštanski broj (dostava)',
      'shippingAddressMap' => 'Karta (Dostava)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Dodeljen korisniku',
      'createdBy' => 'Napravio',
      'modifiedBy' => 'Izmenio',
      'team' => 'Tim',
      'roles' => 'Uloge',
      'teams' => 'Timovi',
      'users' => 'Korisnici',
      'parent' => 'Roditelj',
      'children' => 'Deca',
      'contacts' => 'Kontakti',
      'opportunities' => 'Prilike',
      'leads' => 'Izvori',
      'meetings' => 'Ročišta',
      'calls' => 'Pozivi',
      'tasks' => 'Zadaci',
      'emails' => 'E-poruke',
      'accounts' => 'Pravna lica',
      'cases' => 'Predmeti',
      'documents' => 'Dokumenti',
      'account' => 'Pravno lice',
      'opportunity' => 'Prilika',
      'contact' => 'Kontakt',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Tok vesti',
      'Emails' => 'Moje primljene',
      'Records' => 'Lista upisa',
      'Leads' => 'Moji izvori',
      'Opportunities' => 'Mojie prilike',
      'Tasks' => 'Moji zadaci',
      'Cases' => 'Moji predmeti',
      'Calendar' => 'Kalendar',
      'Calls' => 'Moji pozivi',
      'Meetings' => 'Moja ročišta',
      'OpportunitiesByStage' => 'Prilike po fazama',
      'OpportunitiesByLeadSource' => 'Prilike po izvorima',
      'SalesByMonth' => 'Prodaja po mesecima',
      'SalesPipeline' => 'Sled prodaja',
      'Activities' => 'Moje aktivnosti',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} je dodeljen tebi',
      'emailReceived' => 'E-poruka primljena od {from}',
      'entityRemoved' => '{user} izbrisao {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} je postavio {entityType} {entity}',
      'attach' => '{user} je prikačio {entityType} {entity}',
      'status' => '{user} je izmenio {field} od {entityType} {entity}',
      'update' => '{user} je izmenio {entityType} {entity}',
      'postTargetTeam' => '{user} je objavio timu {target}',
      'postTargetTeams' => '{user} je objavio timovima {target}',
      'postTargetPortal' => '{user} je objavio na portalu {target}',
      'postTargetPortals' => '{user} je objavio na portalima {target}',
      'postTarget' => '{user} je postavio objavu na {target}',
      'postTargetYou' => '{user} je objavio tebi',
      'postTargetYouAndOthers' => '{user} je objavio {target} i tebi',
      'postTargetAll' => '{user} je objavio svima',
      'postTargetSelf' => '{user} samo objavio',
      'postTargetSelfAndOthers' => '{user} je objavio {target} i sebi samom',
      'mentionInPost' => '{user} je pomenuo {mentioned} u {entityType} {entity}',
      'mentionYouInPost' => '{user} je pomenuo tebe u {entityType} {entity}',
      'mentionInPostTarget' => '{user} je pomenuo {mentioned} u objavi',
      'mentionYouInPostTarget' => '{user} je pomenuo tebe u objavi prema {target}',
      'mentionYouInPostTargetAll' => '{user} je pomenuo tebe u objavi svima',
      'mentionYouInPostTargetNoTarget' => '{user} te pominje u objavi',
      'create' => '{user} je napravio {entityType} {entity}',
      'createThis' => '{user} je napravio ovo {entityType}',
      'createAssignedThis' => '{user} je napravio ovo {entityType} i zadužio {assignee}',
      'createAssigned' => '{user} je napravio {entityType} {entity} i zadužio {assignee}',
      'createAssignedYou' => '{user} je napravio {entityType} {entity} i dodeljen je tebi',
      'createAssignedThisSelf' => '{user} je napravio ovaj {entityType} i dodelio sam sebi',
      'createAssignedSelf' => '{user} je napravio {entityType} {entity} i dodelio sebi',
      'assign' => '{user} je zadužio {assignee} za {entityType} {entity}',
      'assignThis' => '{user} je zadužio {assignee} za {entityType} ',
      'assignYou' => '{user} je dodelio {entityType} {entity} tebi',
      'assignThisVoid' => '{user} je uklonio dodelu za {entityType}',
      'assignVoid' => '{user} je uklonio dodelu za {entityType} {entity}',
      'assignThisSelf' => '{user} je dodelio sebi ovaj {entityType}',
      'assignSelf' => '{user} je sebi dodelio {entityType} {entity}',
      'postThis' => '{user} je objavio',
      'attachThis' => '{user} je prikačio',
      'statusThis' => '{user} je izmenio {field}',
      'updateThis' => '{user} je izmenio ovo {entityType}',
      'createRelatedThis' => '{user} je napravio {relatedEntityType} {relatedEntity} koji je povezan sa ovim {entityType}',
      'createRelated' => '{user} je napravio {relatedEntityType} {relatedEntity} koje je povezan sa {entityType} {entity}',
      'relate' => '{user} je povezao {relatedEntityType} {relatedEntity} sa {entityType} {entity}',
      'relateThis' => '{user} je povezao {relatedEntityType} {relatedEntity} sa ovim {entityType}',
      'emailReceivedFromThis' => 'E-poruka primljena od {from}',
      'emailReceivedInitialFromThis' => 'E-poruka primljena od {from}, {entityType} je napravljen',
      'emailReceivedThis' => 'E-poruka primljena',
      'emailReceivedInitialThis' => 'E-poruka primljena, {entitiTipe} je napravljen',
      'emailReceivedFrom' => 'E-poruka primljena od {from}, u vezi sa {entityType} {entity}',
      'emailReceivedFromInitial' => 'E-poruka primljena od {from}, {entityType} {entity} je napravljen',
      'emailReceived' => 'E-poruka primljena u vezi sa {entityType} {entity}',
      'emailReceivedInitial' => 'E-poruka primljena: {entityType} {entity} je napravljen',
      'emailReceivedInitialFrom' => 'E-poruka primljena od {from}, {entityType} {entity} je napravljen',
      'emailSent' => '{Od} poslao e-mail u vezi sa {entitiTipe} {entiteta}',
      'emailSentThis' => '{by} je poslao e-poruku',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} je pisao {target} i sebi',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} je pisao {target} i sebi',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'januar',
        1 => 'februar',
        2 => 'mart ',
        3 => 'april',
        4 => 'maj',
        5 => 'jun',
        6 => 'jul',
        7 => 'avgust',
        8 => 'septembar',
        9 => 'oktobar',
        10 => 'novembar',
        11 => 'decembar',
      ),
      'monthNamesShort' => 
      array (
        0 => 'jan.',
        1 => 'feb.',
        2 => 'mart ',
        3 => 'apr.',
        4 => 'maj',
        5 => 'jun',
        6 => 'jul',
        7 => 'avg.',
        8 => 'sept.',
        9 => 'okt.',
        10 => 'nov.',
        11 => 'dec.',
      ),
      'dayNames' => 
      array (
        0 => 'nedelja',
        1 => 'ponedeljak',
        2 => 'utorak',
        3 => 'sreda',
        4 => 'četvrtak',
        5 => 'petak',
        6 => 'subota',
      ),
      'dayNamesShort' => 
      array (
        0 => 'ned.',
        1 => 'pon.',
        2 => 'uto.',
        3 => 'sre.',
        4 => 'čet.',
        5 => 'pet.',
        6 => 'sub.',
      ),
      'dayNamesMin' => 
      array (
        0 => 'n.',
        1 => 'p.',
        2 => 'u.',
        3 => 'sr.',
        4 => 'č.',
        5 => 'p.',
        6 => 'sub.',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'G-din',
        'Mrs.' => 'G-đa',
        'Ms.' => 'G-đa',
        'Dr.' => 'Dr',
      ),
      'language' => 
      array (
        'af_ZA' => 'afrikanski',
        'az_AZ' => 'azerbejdžanski',
        'be_BY' => 'beloruski',
        'bg_BG' => 'bugarski',
        'bn_IN' => 'bengalski',
        'bs_BA' => 'bosanski',
        'ca_ES' => 'katalonski',
        'cs_CZ' => 'češki',
        'cy_GB' => 'velški',
        'da_DK' => 'danski',
        'de_DE' => 'Nemački',
        'el_GR' => 'grčki',
        'en_GB' => 'engleski (UK)',
        'es_MX' => 'Španski (Meksiko)',
        'en_US' => 'engleski (SAD)',
        'es_ES' => 'španski (Španija)',
        'et_EE' => 'estonski',
        'eu_ES' => 'baskijski',
        'fa_IR' => 'persijski',
        'fi_FI' => 'finski',
        'fo_FO' => 'farski',
        'fr_CA' => 'francuski (Kanada)',
        'fr_FR' => 'francuski (Francuska)',
        'ga_IE' => 'irski',
        'gl_ES' => 'galicijski',
        'gn_PY' => 'gvarani',
        'he_IL' => 'hebrejski',
        'hi_IN' => 'hindi',
        'hr_HR' => 'hrvatski',
        'hu_HU' => 'mađarski',
        'hy_AM' => 'jermenski',
        'id_ID' => 'indonezijski',
        'is_IS' => 'islandski',
        'it_IT' => 'italijanski',
        'ja_JP' => 'japanski',
        'ka_GE' => 'gruzijski',
        'km_KH' => 'khmer',
        'ko_KR' => 'korejski',
        'ku_TR' => 'kurdski',
        'lt_LT' => 'litvanski',
        'lv_LV' => 'letonski',
        'mk_MK' => 'makedonski',
        'ml_IN' => 'malaialam',
        'ms_MY' => 'malajski',
        'nb_NO' => 'norveški',
        'nn_NO' => 'norveški ninoršk',
        'ne_NP' => 'nepalski',
        'nl_NL' => 'holandski',
        'pa_IN' => 'pandžabi',
        'pl_PL' => 'poljski',
        'ps_AF' => 'pashto',
        'pt_BR' => 'portugalski (Brazil)',
        'pt_PT' => 'portugalski (Portugal)',
        'ro_RO' => 'rumunski',
        'ru_RU' => 'ruski',
        'sk_SK' => 'slovački',
        'sl_SI' => 'slovenački',
        'sq_AL' => 'albanski',
        'sr_RS' => 'srpski',
        'sv_SE' => 'švedski',
        'sw_KE' => 'svahili',
        'ta_IN' => 'tamilski',
        'te_IN' => 'telugu',
        'th_TH' => 'tajlandski',
        'tl_PH' => 'tagalog',
        'tr_TR' => 'turski',
        'uk_UA' => 'ukrajinski',
        'ur_PK' => 'urdu',
        'vi_VN' => 'vijetnamski',
        'zh_CN' => 'pojednostavljeni kineski (Kina)',
        'zh_HK' => 'tradicionalni kineski (Hong Kong)',
        'zh_TW' => 'tradicionalni kineski (Tajvan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Uključen',
        'notOn' => 'Isključen',
        'after' => 'Posle:',
        'before' => 'Pre:',
        'between' => 'između',
        'today' => 'Danas',
        'past' => 'Prošli',
        'future' => 'Budući',
        'currentMonth' => 'Tekući mesec',
        'lastMonth' => 'Prošlog meseca',
        'currentQuarter' => 'Trenutni kvartal',
        'lastQuarter' => 'Prethodni kvartal',
        'currentYear' => 'Tekuće godine',
        'lastYear' => 'Prošle godine',
        'lastSevenDays' => 'Poslednjih 7 dana',
        'lastXDays' => 'Poslednjih x dana',
        'nextXDays' => 'Sledećih x dana',
        'ever' => 'ikad',
        'isEmpty' => 'je prazno',
        'olderThanXDays' => 'Stariji od x dana',
        'afterXDays' => 'Posle x dana',
      ),
      'searchRanges' => 
      array (
        'is' => 'je',
        'isEmpty' => 'Prazno',
        'isNotEmpty' => 'Nije prazno',
        'isOneOf' => 'Bilo koji od',
        'isFromTeams' => 'Je iz tima',
        'isNot' => 'Nije',
        'isNotOneOf' => 'Nijedno od',
        'anyOf' => 'Bilo koji od',
        'noneOf' => 'Nijedno od',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Jednak je',
        'like' => 'Je kao (%)',
        'notLike' => 'nije kao (%)',
        'startsWith' => 'Počinje sa',
        'endsWith' => 'Završava sa',
        'contains' => 'Sadrži',
        'notContains' => 'Ne sadrži',
        'isEmpty' => 'Prazno',
        'isNotEmpty' => 'Nije prazno',
        'notEquals' => 'Nije jednako',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Jednako je',
        'notEquals' => 'Nije jednako',
        'greaterThan' => 'Veće od',
        'lessThan' => 'Manje od',
        'greaterThanOrEquals' => 'Veće ili jednako',
        'lessThanOrEquals' => 'Manje ili jednako',
        'between' => 'između',
        'isEmpty' => 'je prazno',
        'isNotEmpty' => 'nije prazno',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Nema',
        '0.5' => '30 sekundi',
        1 => '1 minut',
        2 => '2 minuta',
        5 => '5 minuta',
        10 => '10 minuta',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobilni',
        'Office' => 'Kancelarija',
        'Fax' => 'Faks',
        'Home' => 'Kućni',
        'Other' => 'Drugo',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Iskačući',
        'Email' => 'E-porukom',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Možete pronaći prevod ovde: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Podebljan',
          'italic' => 'Nakošen',
          'underline' => 'Podvučen',
          'strike' => 'Precrtan',
          'clear' => 'Ukloni stil fonta',
          'height' => 'Visina linije',
          'name' => 'Porodica fontova',
          'size' => 'Veličina fonta',
        ),
        'image' => 
        array (
          'image' => 'Slika',
          'insert' => 'Ubaci sliku',
          'resizeFull' => 'Puna veličina',
          'resizeHalf' => 'Upolovi veličinu',
          'resizeQuarter' => 'Četvrtina veličine',
          'floatLeft' => 'Poravnaj levo',
          'floatRight' => 'Poravnaj desno',
          'floatNone' => 'Bez poravnavanja',
          'dragImageHere' => 'Prevuci sliku ovdje',
          'selectFromFiles' => 'Izaberite neku od datoteka',
          'url' => 'URL slike',
          'remove' => 'Ukloni sliku',
        ),
        'link' => 
        array (
          'link' => 'Veza',
          'insert' => 'Ubaci vezu',
          'unlink' => 'Ukloni vezu',
          'edit' => 'Izmeni',
          'textToDisplay' => 'Tekst za prikaz',
          'url' => 'Na koji URL treba da vodi ovaj link?',
          'openInNewWindow' => 'Otvori u novom prozoru',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video veza',
          'insert' => 'Ubaci video',
          'url' => 'Video URL adresa?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram ili Dailymotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabela',
        ),
        'hr' => 
        array (
          'insert' => 'Ubaci horizontalnu liniju',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Normalno',
          'blockquote' => 'Citat',
          'pre' => 'Kod',
          'h1' => 'Naslov 1',
          'h2' => 'Naslov 2',
          'h3' => 'Naslov 3',
          'h4' => 'Naslov 4',
          'h5' => 'Naslov 5',
          'h6' => 'Naslov 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Spisak bez rednih brojeva',
          'ordered' => 'Spisak sa rednim brojevima',
        ),
        'options' => 
        array (
          'help' => 'Pomoć',
          'fullscreen' => 'Ceo ekran',
          'codeview' => 'Pregled koda',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraf',
          'outdent' => 'Izvuci red',
          'indent' => 'Uvuci red',
          'left' => 'Poravnaj levo',
          'center' => 'Poravnaj na centru',
          'right' => 'Poravnaj desno',
          'justify' => 'Poravnaj obostrano',
        ),
        'color' => 
        array (
          'recent' => 'Nedavna boja',
          'more' => 'Više boja',
          'background' => 'Boja pozadine',
          'foreground' => 'Boja teksta',
          'transparent' => 'Transparentan',
          'setTransparent' => 'Postavi kao transparentan',
          'reset' => 'Reset',
          'resetToDefault' => 'Reset na podrazumevano',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Prečice na tastaturi',
          'close' => 'Zatvori',
          'textFormatting' => 'Formatiranje teksta',
          'action' => 'Akcija',
          'paragraphFormatting' => 'Formatiranje paragrafa',
          'documentStyle' => 'Stil dokumenta',
        ),
        'history' => 
        array (
          'undo' => 'Unazad',
          'redo' => 'Unapred',
        ),
      ),
    ),
    'themes' => 
    array (
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL Espo',
      'Sakura' => 'Sakura',
      'EspoVertical' => 'Espo sa bočnim menijem',
      'SakuraVertical' => 'Sakura sa bočnim menijem',
      'Violet' => 'Violet',
      'VioletVertical' => 'Violet sa bočnim menijem',
      'Hazyblue' => 'Hazyblue',
      'HazyblueVertical' => 'Haziblue sa bočnim menijem',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Poništi uvoz',
      'Return to Import' => 'Povratak na uvoz',
      'Run Import' => 'Pokreni uvoz',
      'Back' => 'Nazad',
      'Field Mapping' => 'Mapiranje polja',
      'Default Values' => 'Podrazumevane vrednosti',
      'Add Field' => 'Dodaj polje',
      'Created' => 'Napravljeno',
      'Updated' => 'Izmenjeno',
      'Result' => 'Rezultat',
      'Show records' => 'Prikazani unosi',
      'Remove Duplicates' => 'Ukloni duplikate',
      'importedCount' => 'Uvezeno (broj)',
      'duplicateCount' => 'Duplikati (broj)',
      'updatedCount' => 'Izmenjeno (broj)',
      'Create Only' => 'Samo napravi',
      'Create and Update' => 'Napravi i izmeni',
      'Update Only' => 'Samo izmeni',
      'Update by' => 'Izmeni od',
      'Set as Not Duplicate' => 'Odredi da nije duplikat',
      'File (CSV)' => 'Datoteka (CSV);',
      'First Row Value' => 'Vrednost prvog reda',
      'Skip' => 'Preskoči',
      'Header Row Value' => 'Vrednost naslovnog reda',
      'Field' => 'Polje',
      'What to Import?' => 'Šta da uvozi?',
      'Entity Type' => 'Tip entiteta',
      'What to do?' => 'Šta da radim?',
      'Properties' => 'Svojstva',
      'Header Row' => 'Naslovni red',
      'Person Name Format' => 'Format imena lica',
      'John Smith' => 'Pero Perić',
      'Smith John' => 'Perić Pero',
      'Smith, John' => 'Perić, Pero',
      'Field Delimiter' => 'Graničnik polja',
      'Date Format' => 'Format datuma',
      'Decimal Mark' => 'Decimalna oznaka',
      'Text Qualifier' => 'Kvalifikator teksta',
      'Time Format' => 'Format vremena',
      'Currency' => 'Valuta',
      'Preview' => 'Pregledaj',
      'Next' => 'Sledeća',
      'Step 1' => 'Korak 1',
      'Step 2' => 'Korak 2',
      'Double Quote' => 'Navodnici',
      'Single Quote' => 'Apostrof',
      'Imported' => 'Uvezeni',
      'Duplicates' => 'Duplikati',
      'Skip searching for duplicates' => 'Preskočite potragu za duplikatima',
      'Timezone' => 'Vremenska zona',
    ),
    'messages' => 
    array (
      'utf8' => 'Trebalo bi da bude UTF-8 kodiranje',
      'duplicatesRemoved' => 'Duplikati uklonjeni',
      'inIdle' => 'Izvršava se u praznom hodu (za velike podatke; preko cron)',
    ),
    'fields' => 
    array (
      'file' => 'Datoteka',
      'entityType' => 'Tip entiteta',
      'imported' => 'Uvezeni upisi',
      'duplicates' => 'Duplirani upisi',
      'updated' => 'Izmenjeni upisi',
      'status' => 'Status',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Neuspešno',
        'In Process' => 'U procesu',
        'Complete' => 'Gotovo',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'emailAddress' => 'Adresa e-pošte',
      'team' => 'Ciljani tim',
      'status' => 'Status',
      'assignToUser' => 'Zaduži korisnika',
      'host' => 'Host',
      'username' => 'Korisničko ime',
      'password' => 'Lozinka',
      'port' => 'Port',
      'monitoredFolders' => 'Nadgledani folderi',
      'trashFolder' => 'Folder za otpad',
      'ssl' => 'SSL',
      'createCase' => 'Napravi predmet',
      'reply' => 'Automatski odgovor',
      'caseDistribution' => 'Distribucija predmeta',
      'replyEmailTemplate' => 'Šablon odgovora na e-poruku',
      'replyFromAddress' => 'Odgovor sa adrese',
      'replyToAddress' => 'Adresa za slanje odgovora',
      'replyFromName' => 'Ko šalje odgovor',
      'targetUserPosition' => 'Pozicija ciljanog korisnika',
      'fetchSince' => 'Preuzmi od',
      'addAllTeamUsers' => 'Za sve korisnike tima',
      'teams' => 'Timovi',
    ),
    'tooltips' => 
    array (
      'reply' => 'Obavesti e-pošiljaoce da je primljena e-pošta. 

 Samo jedna poruka će biti poslata određenom primaocu u određenom vremenskom periodu da se spreči ponavljanje.',
      'createCase' => 'Automatski napravi predmet za sve dolazne e-poruke.',
      'replyToAddress' => 'Navedite adresu ovog sandučeta kako bi odgovori stizali ovamo.',
      'caseDistribution' => 'Kako će predmeti biti zadužavani. Zadužavati direktno korisnika ili unutar tima.',
      'assignToUser' => 'Korisnički predmeti će biti dodeljeni',
      'team' => 'Predmeti tima će biti dodeljeni.',
      'teams' => 'E-pošta timova će biti dodeljena.',
      'targetUserPosition' => 'Korisnicima sa određenim položajem će dodeljeni predmeti.',
      'addAllTeamUsers' => 'E-pošta će se pojaviti u Primljenim svih korisnika navedenih timova.',
      'monitoredFolders' => 'Više fascikli mora biti odeljeno zapetom.',
    ),
    'links' => 
    array (
      'filters' => 'Filteri',
      'emails' => 'E-poruke',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktivan',
        'Inactive' => 'Neaktivan',
      ),
      'caseDistribution' => 
      array (
        '' => 'Nema',
        'Direct-Assignment' => 'Dirktna dodela',
        'Round-Robin' => 'U krug',
        'Least-Busy' => 'Najmanje zauzet',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Stvoriti nalog e-pošte',
      'IMAP' => 'IMAP',
      'Actions' => 'Akcije',
      'Main' => 'Glavni',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Ne može da se poveže na IMAP server',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Omogućeno',
      'clientId' => 'ID klijenta',
      'clientSecret' => 'Klijent tajna',
      'redirectUri' => 'Preusmeravanje URI',
      'apiKey' => 'API ključ',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google mape',
      'IctBroadcastconfig' => 'ICTBroadcast Config',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Izaberite neku integraciju iz menija.',
      'noIntegrations' => 'Nema integracija je na raspolaganju.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Dobijanje OAuth2.0 akreditive iz Google konzole.</b></p><p>Posetite<a href="https://console.developers.google.com/project">Google konzolu</a> da dobijete OAuth2.0 akreditiv kao što su ID klijenta i Klijenta tajna koje moraju da znaju i Google i EspoCRM.</p>',
      'GoogleMaps' => '<p>Nabavite API ključ <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">ovde</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executeTime' => 'Izvrši u',
      'attempts' => 'Preostali pokušaji',
      'failedAttempts' => 'Neuspelih pokušaja',
      'serviceName' => 'Usluga',
      'method' => 'Metod',
      'scheduledJob' => 'Zakazani poslovi',
      'data' => 'Podaci',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Čeka',
        'Success' => 'Uspešno',
        'Running' => 'Izvršavanje',
        'Failed' => 'Neuspešno',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Širina (%)',
      'link' => 'Veza',
      'notSortable' => 'Nije sortabilno',
      'align' => 'Poravnavanje',
      'panelName' => 'Ime panela',
      'style' => 'stil',
      'sticked' => 'Lepljivo',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Levo',
        'right' => 'Desno',
      ),
      'style' => 
      array (
        'default' => 'Podrazumevano',
        'success' => 'Uspešno',
        'danger' => 'opasnost',
        'info' => 'Info',
        'warning' => 'Upozorenje',
        'primary' => 'Primarno',
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Objavi',
      'attachments' => 'Prilozi',
      'targetType' => 'Meta',
      'teams' => 'Timovi',
      'users' => 'Korisnici',
      'portals' => 'Portali',
      'type' => 'Tip',
      'isGlobal' => 'je globalno',
      'isInternal' => 'je interno',
      'related' => 'Povezno',
      'createdByGender' => 'Napravio pol',
      'data' => 'Podaci',
      'number' => 'Broj',
    ),
    'filters' => 
    array (
      'all' => 'Sve',
      'posts' => 'Objave',
      'updates' => 'Izmene...',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'sebi',
        'users' => 'određenom korisniku (cima)',
        'teams' => 'konkretnom timu (vima)',
        'all' => 'svim internim korisnicima',
        'portals' => 'korisnicima portala',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Napišite svoju poruku ovde',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'logo' => 'Logo',
      'url' => 'URL adresa',
      'portalRoles' => 'Uloge',
      'isActive' => 'Aktivan',
      'isDefault' => 'je podrazumevano',
      'tabList' => 'Lista kartica',
      'quickCreateList' => 'Lista za brzo pravljenje',
      'companyLogo' => 'Logo',
      'theme' => 'Tema',
      'language' => 'Jezik',
      'dashboardLayout' => 'Kontrolna tabla raspored',
      'dateFormat' => 'Format datuma',
      'timeFormat' => 'Format vremena',
      'timeZone' => 'Vremenska zona',
      'weekStart' => 'Prvi dan sedmice',
      'defaultCurrency' => 'Uobičajena valuta',
      'customUrl' => 'Prilagođeni URL',
      'customId' => 'Prilagođeni ID',
    ),
    'links' => 
    array (
      'users' => 'Korisnici',
      'portalRoles' => 'Uloge',
      'notes' => 'Beleške',
      'articles' => 'Članci Baze znanja',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Navedene Portal Uloge će se primeniti na sve korisnike ovog portala.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Napravite portal',
      'User Interface' => 'Korisnički interfejs',
      'General' => 'Opšta',
      'Settings' => 'Podešavanja',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
    ),
    'links' => 
    array (
      'users' => 'Korisnici',
    ),
    'tooltips' => 
    array (
    ),
    'labels' => 
    array (
      'Access' => 'Pristup',
      'Create PortalRole' => 'Stvoriti Portal ulogu',
      'Scope Level' => 'Nivo obuhvata',
      'Field Level' => 'Nivo polja',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Napravi korisnika portala',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Format datuma',
      'timeFormat' => 'Format vremena',
      'timeZone' => 'Vremenska zona',
      'weekStart' => 'Prvi dan nedelje',
      'thousandSeparator' => 'Oznaka hiljada',
      'decimalMark' => 'Decimalna oznaka',
      'defaultCurrency' => 'Uobičajena valuta',
      'currencyList' => 'Spisak valuta',
      'language' => 'Jezik',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorizacija',
      'smtpSecurity' => 'Bezbednost',
      'smtpUsername' => 'Korisničko ime',
      'emailAddress' => 'Adresa e-pošte',
      'smtpPassword' => 'Lozinka',
      'smtpEmailAddress' => 'Adresa e-pošte',
      'exportDelimiter' => 'Graničnik izvoza',
      'receiveAssignmentEmailNotifications' => 'E-mail obaveštenja prilikom dodeljivanja',
      'receiveMentionEmailNotifications' => 'Email obaveštenja o pominjanju u postovima',
      'receiveStreamEmailNotifications' => 'E-mail obaveštenja o poruka i ažuriranju statusa',
      'autoFollowEntityTypeList' => 'Auto-zaprati',
      'signature' => 'E-poruke potpis',
      'dashboardTabList' => 'Lista kartica',
      'defaultReminders' => 'Podsetnici podrazumevani',
      'theme' => 'Tema',
      'useCustomTabList' => 'Prilagođena Lista kartica',
      'tabList' => 'Lista kartica',
      'emailReplyToAllByDefault' => 'Odgovor svima kao podrazumevana opcija u e-porukama',
      'dashboardLayout' => 'Raspored za Kontrolna tabla',
      'emailReplyForceHtml' => 'E-mail odgovor u HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Ne popunjavaj Zaduženi korisnik ako nije zahtevano',
      'followEntityOnStreamPost' => 'Automatski zaprati unos nakon pisanja u toku vijesti',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'nedelja',
        1 => 'ponedeljak',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Obaveštenja',
      'User Interface' => 'Korisnički interfejs',
      'SMTP' => 'SMTP',
      'Misc' => 'Ostalo',
      'Locale' => 'Lokalno',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Korisnik će automatski pratiti sve nove podatke o izabranim entitetima, videće informacije u toku vestii i primati obaveštenja.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'roles' => 'Uloge',
      'assignmentPermission' => 'Dozvola zaduživanja',
      'userPermission' => 'Dozvola korisnika',
      'portalPermission' => 'Dozvola za portal',
    ),
    'links' => 
    array (
      'users' => 'Korisnici',
      'teams' => 'Timovi',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Omogućava da se ograniči sposobnost da se zadužuju upisi  i postavljaju poruke drugim korisnicima.
sve - Nikakvo ograničenje
tim- može zadužiti i pisati samo članovima tima
ne- može zadužiti i pisati samo sebi',
      'userPermission' => 'Omogućava da se ograniči sposobnost korisnicima da vide aktivnosti, kalendar i tok drugima 
sve - da vide sve
tim - mogu da vide aktivnosti samo članova tima
ne - ne vide.',
      'portalPermission' => 'Definiše pristup portalu informacija, sposobnost pretvaranja kontakata u korisnike portala i da šalju poruke na korisnicima portala.',
    ),
    'labels' => 
    array (
      'Access' => 'Pristup',
      'Create Role' => 'Pravljenje uloge',
      'Scope Level' => 'Nivo obuhvata',
      'Field Level' => 'Nivo polja',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'nije podešeno',
        'enabled' => 'omogućeno',
        'disabled' => 'onemogućeno',
      ),
      'levelList' => 
      array (
        'all' => 'sve',
        'team' => 'tim',
        'account' => 'pravno lice',
        'contact' => 'kontakt',
        'own' => 'vlastiti',
        'no' => 'ne',
        'yes' => 'da',
        'not-set' => 'nije podešeno',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Čitanje',
      'edit' => 'Izmena',
      'delete' => 'Brisanje',
      'stream' => 'Tok vesti',
      'create' => 'Pravljenje',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Sve promene u vidu kontrole pristupa će se primenjivati nakon što se keš očisti.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'job' => 'Posao',
      'scheduling' => 'Zakazivanje',
    ),
    'links' => 
    array (
      'log' => 'Upisnik',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Napravi zakazan posao',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Pospremanje',
        'CheckInboundEmails' => 'Proverite grupne naloge e-pošte',
        'CheckEmailAccounts' => 'Proverite lične naloge e-pošte',
        'SendEmailReminders' => 'Pošalji podsetnike e-poštom',
        'AuthTokenControl' => 'Kontrola autorizacionih tokena',
        'SendEmailNotifications' => 'Pošalji E-mail obaveštenja',
        'ProcessMassEmail' => 'Pošalji masovne e-pooruke',
        'ControlKnowledgeBaseArticleStatus' => 'Kontrola statusa članaka baze znanja',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Napomena: Dodajte ovu liniju u crontab datoteku za pokretanje ESPO zakazanih poslova:',
        'mac' => 'Napomena: Dodajte ovu liniju u crontab datoteku za pokretanje ESPO zakazanih poslova:',
        'windows' => 'Beleška: Napravi datoteku sa sledećim komandama kako bi pokretao Espo Zakazane poslove koristeći Windows zakazane zadatke:',
        'default' => 'Napomena: Dodaj ovu komandu da Cron Job (Planirano Zadatak):',
      ),
      'status' => 
      array (
        'Active' => 'Aktivan',
        'Inactive' => 'Neaktivan',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Crontab beleška. Definiše učestalost posla.

*/5 * * * * - svakih 5 minuta

0 */2 * * * - svaka 2 sata

30 1 * * * - u 01:30 svakog dana

0 0 1 * * - prvog dana u mesecu',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Vreme izvršenja',
      'target' => 'Meta',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Koristi keš',
      'dateFormat' => 'Format datuma',
      'timeFormat' => 'Format vremena',
      'timeZone' => 'Vremenska zona',
      'weekStart' => 'Prvi dan sedmice',
      'thousandSeparator' => 'Oznaka hiljada',
      'decimalMark' => 'Decimalna oznaka',
      'defaultCurrency' => 'Uobičajena valuta',
      'baseCurrency' => 'Osnovna valuta:',
      'currencyRates' => 'Rate Vrednosti',
      'currencyList' => 'Spisak valuta',
      'language' => 'Jezik',
      'companyLogo' => 'Logo kompanije',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorizacija',
      'smtpSecurity' => 'Bezbednost',
      'smtpUsername' => 'Korisničko ime:',
      'emailAddress' => 'Adresa e-pošte',
      'smtpPassword' => 'Lozinka',
      'outboundEmailFromName' => 'Od imena',
      'outboundEmailFromAddress' => 'od Address',
      'outboundEmailIsShared' => 'se deli',
      'recordsPerPage' => 'Zapisi po strani',
      'recordsPerPageSmall' => 'Zapisa po strani (mala str)',
      'tabList' => 'Lista kartica',
      'quickCreateList' => 'Brzo Create List',
      'exportDelimiter' => 'Graničnik izvoza',
      'globalSearchEntityList' => 'Globalna pretraga entiteta Lista',
      'authenticationMethod' => 'Metod autentikacije',
      'ldapHost' => 'HOST',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Autorizacija',
      'ldapUsername' => 'Puni Korisnik DN',
      'ldapPassword' => 'Lozinka',
      'ldapBindRequiresDn' => 'Bind zahteva DN',
      'ldapBaseDn' => 'Osnovni DN',
      'ldapAccountCanonicalForm' => 'Pravno lice kanonski',
      'ldapAccountDomainName' => 'Nalog domena',
      'ldapTryUsernameSplit' => 'Pokušajte Korisničko ime Split',
      'ldapCreateEspoUser' => 'Napraviti korisnika u EspoCRM',
      'ldapSecurity' => 'Bezbednost',
      'ldapUserLoginFilter' => 'Filter prijava korisnika',
      'ldapAccountDomainNameShort' => 'Nalog domena kratko',
      'ldapOptReferrals' => 'Opt Preporuke',
      'ldapUserNameAttribute' => 'Korisničko ime Atribut',
      'ldapUserObjectClass' => 'Korisnik ObjectClass',
      'ldapUserTitleAttribute' => 'Korisnik titula Atribut',
      'ldapUserFirstNameAttribute' => 'Korisnik Ime Atribut',
      'ldapUserLastNameAttribute' => 'Korisnik Prezime Atribut',
      'ldapUserEmailAddressAttribute' => 'Korisnik E-mail adresa Atribut',
      'ldapUserTeams' => 'Timovi korisnika',
      'ldapUserDefaultTeam' => 'Porazumevani tim korisnika',
      'ldapUserPhoneNumberAttribute' => 'Korisnik broj telefona Atribut',
      'exportDisabled' => 'Onemogućiti izvoz (samo administratoru je dozvoljeno)',
      'assignmentNotificationsEntityList' => 'Za koje entitete se obaveštava po dodeli',
      'assignmentEmailNotifications' => 'Obaveštenja prilikom dodele',
      'assignmentEmailNotificationsEntityList' => 'Obim obaveštavanja e-poštom pri dodeli',
      'streamEmailNotifications' => 'Obaveštenja o unosima u tok vesti za interne korisnike',
      'portalStreamEmailNotifications' => 'Obaveštenja o unosima u tok vesti za korisnike portala',
      'streamEmailNotificationsEntityList' => 'Obim obaveštavanja e-poštom za tok vesti',
      'b2cMode' => 'B2C režim',
      'avatarsDisabled' => 'Isključi avatare',
      'followCreatedEntities' => 'Prati entitete koje si kreirao',
      'displayListViewRecordCount' => 'Prikaži ukupan broj (na priazu: lista)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Onemogući korisničke teme',
      'emailMessageMaxSize' => 'E-poruka maksimalna veličina (MB)',
      'massEmailMaxPerHourCount' => 'Maks broj e-poruka po satu',
      'personalEmailMaxPortionSize' => 'Maks veličina uvoza e-poruka za lične naloge',
      'inboundEmailMaxPortionSize' => 'Maks veličina uvoza e-poruka za grupne naloge',
      'maxEmailAccountCount' => 'Maks broj ličnih naloga pošte po korisniku',
      'authTokenLifetime' => 'Dužina trajanja tokena za pristup (sati)',
      'authTokenMaxIdleTime' => 'Maksimalno trajanje tokena za logovanje na čekanju (sati)',
      'dashboardLayout' => 'Izgled radne površine (standardan)',
      'siteUrl' => 'URL stranice',
      'addressPreview' => 'Adresa prikaza',
      'addressFormat' => 'Format adrese',
      'notificationSoundsDisabled' => 'Onemogućavanje zvukova obaveštenja',
      'applicationName' => 'Ime aplikacije',
      'calendarEntityList' => 'Lista entiteta za kalendar',
      'mentionEmailNotifications' => 'Slati obaveštenja e-porukom o pominjanju u unosima ',
      'massEmailDisableMandatoryOptOutLink' => 'Onemogućili obavezan link za oznaku "ne želi"',
      'activitiesEntityList' => 'Lista entiteta za aktivnosti',
      'historyEntityList' => 'Lista entiteta za istoriju',
      'currencyFormat' => 'Format valute',
      'currencyDecimalPlaces' => 'Valuta decimale',
      'aclStrictMode' => 'ACL strogo',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'nedelja',
        1 => 'ponedeljak',
      ),
      'currencyFormat' => 
      array (
        1 => '10 USD',
        2 => '$10',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'Broj unosa prvobitno prikazan u listama.',
      'recordsPerPageSmall' => 'Broj unosa prvobitno prikazan u panelima odnosa',
      'outboundEmailIsShared' => 'Dozvoli korisnicima da šalju mejlove preko ovog SMTP.',
      'followCreatedEntities' => 'Korisnici će automatski zapratiti unose koje naprave.',
      'emailMessageMaxSize' => 'Sve dolazne poruke e-pošte koje prelaze određenu veličinu će biti preuzete bez teksta i priloga.',
      'authTokenLifetime' => 'Definiše koliko dugo tokeni mogu postojati.
0 - Znači da nema isteka.',
      'authTokenMaxIdleTime' => 'Definiše koliko dugo nakon prethodnog pristupna token opstaje.
0 - Znači da nema isteka.',
      'userThemesDisabled' => 'Ako je označeno onda korisnici neće moći da izaberete drugu temu.',
      'ldapUsername' => 'Kompletan sistem korisnika DN koji omogućava da tražite druge korisnike. Npr \\ "KN = na LDAP Korisnik sistema, ou = users, ou = espocrm DC = Test DC = LAN ".',
      'ldapPassword' => 'Lozinka za pristup u LDAP serveru.',
      'ldapAuth' => 'Akreditacije za pristup LDAP serveru.',
      'ldapUserNameAttribute' => 'Atribut za identifikaciju korisnika. 
Npr. "userPrincipalName" ili "sAMAccountName" za aktivni folder, "uid" za OpenLDAP.',
      'ldapUserObjectClass' => 'ObjectClass atribut za pretraživanje korisnika. Npr. "osoba" za AD, "inetOrgPerson " za OpenLDAP.',
      'ldapAccountCanonicalForm' => 'Vrsta forme vašeg naloga. Imate 4 opcije:<br>- \'Dn\' - forma u formatu \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - the form \'tester\'.<br>- \'Backslash\' - the form \'COMPANY\\tester\'.<br>- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'Opcija da se korisničko ime formatira u DN formatu.',
      'ldapBaseDn' => 'Podrazumevana DN baza za pretragu korisnika. Npr. "OU=korisnici,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'Opcija da podeli ime sa domenom.',
      'ldapOptReferrals' => 'ako poveznice moraju pratiti LDAP klijent.',
      'ldapCreateEspoUser' => 'Ova opcija dozvoljava da EspoCRM napravi korisnika od LDAP.',
      'ldapUserFirstNameAttribute' => 'LDAP-atribut koji se koristi za određivanje korisničkog imena. Npr  "GivenName ".',
      'ldapUserLastNameAttribute' => 'LDAP-atribut koji se koristi za određivanje Prezimena. Npr. "lok ".',
      'ldapUserTitleAttribute' => 'LDAP atribut koji se koristi za određivanje titule. Npr "titula".',
      'ldapUserEmailAddressAttribute' => 'LDAP-atribut koji se koristi za određivanje korisničke email adrese. Npr "pošta ".',
      'ldapUserPhoneNumberAttribute' => 'LDAP-atribut koji se koristi za određivanje broja korisnika telefona. Npr \\ "telephoneNumber ".',
      'ldapUserLoginFilter' => 'Filter koji dozvoljava da ograniče korisnicima koji mogu da koriste EspoCRM. Npr \\ "memberOf = KN = espoGroup, ou = grupama, ou = espocrm DC = Test DC = LAN ".',
      'ldapAccountDomainName' => 'Domen koji se koristi za dobijanje dozvole za LDAP server.',
      'ldapAccountDomainNameShort' => 'Kratak domen koji se koristi za dobijanje dozvole za LDAP server.',
      'ldapUserTeams' => 'Timovi za napravljenog korisnika. Za više, pogledajte korisnički profil.',
      'ldapUserDefaultTeam' => 'Podrazumevani tim za napravljenog korisnika. Za više, pogledajte korisnički profil.',
      'b2cMode' => 'Po defaultu EspoCRM je prilagođena za B2B. Možete ga prebaciti na B2C.',
      'currencyDecimalPlaces' => 'Broj decimalnih mesta. Ako je prazno, onda će biti prikazana sva decilana mesta.',
      'aclStrictMode' => 'Uključeno: Pristup entitetima će biti zabranjen ako nije određeno u ulogama.

Isključeno: Pristup entitetima će biti dozvoljen ako nije određeno u ulogama',
    ),
    'labels' => 
    array (
      'System' => 'Sistem',
      'Locale' => 'Locale',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfiguracija',
      'In-app Notifications' => 'Obaveštenja u aplikaciji',
      'Email Notifications' => 'Obaveštenja e-porukama',
      'Currency Settings' => 'Podešavanja valute',
      'Currency Rates' => 'Kurs valuta',
      'Mass Email' => 'Masovna e-poruka',
      'Test Connection' => 'test veze',
      'Connecting' => 'Povezivanje ...',
      'Activities' => 'Aktivnosti',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'Veza uspešno uspostavljena.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'roles' => 'Uloge',
      'positionList' => 'Lista pozicija',
    ),
    'links' => 
    array (
      'users' => 'Korisnici',
      'notes' => 'Beleške',
      'roles' => 'Uloge',
      'inboundEmails' => 'Grupni E-mail nalozi',
    ),
    'tooltips' => 
    array (
      'roles' => 'Pristupne uloge. Korisnici ovog tima dobijaju kontrolu pristupa za odabrane uloge.',
      'positionList' => 'Slobodne pozicije u ovom timu. Npr. prodavac, direktor.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Napravi tim',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'body' => 'Telo',
      'entityType' => 'Tip entiteta',
      'header' => 'Heder',
      'footer' => 'Futer',
      'leftMargin' => 'Leva margina',
      'topMargin' => 'Gornja margina',
      'rightMargin' => 'Desna margina',
      'bottomMargin' => 'Donja margina',
      'printFooter' => 'Štampaj futer',
      'footerPosition' => 'Pozicija futera',
      'variables' => 'Dostupni upisi',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Napravi šablon',
    ),
    'tooltips' => 
    array (
      'footer' => 'Koristiti {pageNumber} za štampanje broja stranice.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'userName' => 'Korisničko ime',
      'title' => 'Naslov',
      'isAdmin' => 'je admin',
      'defaultTeam' => 'Podrazumevan tim',
      'emailAddress' => 'E-pošta',
      'phoneNumber' => 'Telefon',
      'roles' => 'Uloge',
      'portals' => 'Portali',
      'portalRoles' => 'Uloge za portal',
      'teamRole' => 'Položaj',
      'password' => 'Lozinka',
      'currentPassword' => 'Trenutna lozinka',
      'passwordConfirm' => 'Potvrdite lozinku',
      'newPassword' => 'Nova lozinka',
      'newPasswordConfirm' => 'Potvrdite novu lozinku',
      'avatar' => 'Avatar',
      'isActive' => 'je aktivno',
      'isPortalUser' => 'je korisnik portala',
      'contact' => 'Kontakt',
      'accounts' => 'Pravna lica',
      'account' => 'Pravno lice (osnovno)',
      'sendAccessInfo' => 'Pošaljite e-poruku sa pristupnim podacima za korisnike',
      'portal' => 'Portal',
      'gender' => 'pol',
      'position' => 'Pozicija u timu',
      'ipAddress' => 'IP adresa',
      'passwordPreview' => 'Pregled lozinke',
      'acceptanceStatus' => 'Status prihvatanja',
      'acceptanceStatusMeetings' => 'Status prihvatanja (Ročišta)',
      'acceptanceStatusCalls' => 'Status prihvatanja (pozivi)',
    ),
    'links' => 
    array (
      'teams' => 'Timovi',
      'roles' => 'Uloge',
      'notes' => 'Beleške',
      'portals' => 'Portali',
      'portalRoles' => 'Uloge za portal',
      'contact' => 'Kontakt',
      'accounts' => 'Pravna lica',
      'account' => 'Pravno lice (osnovno)',
      'tasks' => 'Zadaci',
      'targetLists' => 'Liste meta',
    ),
    'labels' => 
    array (
      'Create User' => 'Napravi korisnika',
      'Generate' => 'Generiši',
      'Access' => 'Pristup',
      'Preferences' => 'Podešavanja',
      'Change Password' => 'Promena lozinke',
      'Teams and Access Control' => 'Timovi i kontrola pristupa',
      'Forgot Password?' => 'Zaboravili ste lozinku?',
      'Password Change Request' => 'Zahtev za promenu lozinke',
      'Email Address' => 'Adresa e-pošte',
      'External Accounts' => 'Eksterni računi',
      'Email Accounts' => 'Nalozi e-pošte',
      'Portal' => 'Portal',
      'Create Portal User' => 'Napravi korisnika portala',
      'Proceed w/o Contact' => 'Nastavite bez kontakta',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Svi upisi napravljeni od strane ovog korisnika će porazumevano biti u vezi sa ovim timom.',
      'userName' => 'Slova AZ, broj 0-9, tačke, crtice, @-znak i donje crte su dozvoljeni.',
      'isAdmin' => 'Admin korisnik može pristupiti svemu.',
      'isActive' => 'Ukoliko nije otkačeno onda korisnik neće moći da se prijavi.',
      'teams' => 'Timovi kojima ovaj korisnik pripada. Nivo kontrole pristupa je nasleđen od uloga tima.',
      'roles' => 'Dodatne pristupne uloge. Koristite ovo ako korisnik ne pripada nijednoj ekipi ili treba da prošire nivo kontrole pristupa isključivo za ovog korisnika.',
      'portalRoles' => 'Dodatne portal uloge. Koristite ga da produži nivo kontrole pristupa isključivo za ovog korisnika.',
      'portals' => 'Portali kojima korisnik ima pristup.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Lozinka će biti poslata na adresu korisnika.',
      'accountInfoEmailSubject' => 'EspoCRM Korisnik - podaci za pristup',
      'accountInfoEmailBody' => 'Vaši podaci za pristup:

Korisničko ime: {userName} 
Lozinka: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Upit za promenu lozinke',
      'passwordChangeLinkEmailBody' => 'Možete da promenite lozinku prateći ovaj link {link}. Ovaj jedinstveni URL će uskoro isteći.',
      'passwordChanged' => 'Lozinka je promenjena',
      'userCantBeEmpty' => 'Korisničko ime ne može biti prazno',
      'wrongUsernamePasword' => 'Pogrešno korisničko ime/lozinka',
      'emailAddressCantBeEmpty' => 'Adresa e-pošte ne može biti prazna',
      'userNameEmailAddressNotFound' => 'Korisničko ime/Adresa e-pošte nije pronađena',
      'forbidden' => 'Zabranjeno, pokušajte kasnije',
      'uniqueLinkHasBeenSent' => 'Jedinstvena URL adresa je poslata na određenu adresu.',
      'passwordChangedByRequest' => 'Lozinka je promenjena.',
      'setupSmtpBefore' => 'Potrebno je da <a href="{url}">SMTP postavke</a>href="{url}"> budu unete i tačne kako bi lozinka bila poslata.',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Nije podešeno',
        'Male' => 'Muški',
        'Female' => 'Ženski pol',
        'Neutral' => 'Neutralan',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Samo moj tim',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktivano',
      'activePortal' => 'Portal aktivan',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Naziv',
      'emailAddress' => 'Email',
      'website' => 'Sajt',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Adresa za naplatu',
      'shippingAddress' => 'Adresa za dostavu',
      'description' => 'Opis',
      'sicCode' => 'Sic kod',
      'industry' => 'Industrija',
      'type' => 'Tip',
      'contactRole' => 'Naslov',
      'contactIsInactive' => 'Neaktivano',
      'campaign' => 'Kampanja',
      'targetLists' => 'Liste meta',
      'targetList' => 'Lista meta',
      'originalLead' => 'Originalni izvor',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakti',
      'opportunities' => 'Prilike',
      'cases' => 'Predmeti',
      'documents' => 'Dokumenti',
      'meetingsPrimary' => 'Ročišta (prošireno)',
      'callsPrimary' => 'Pozivi (prošireno)',
      'tasksPrimary' => 'Zadaci (prošireno)',
      'emailsPrimary' => 'E-pošta (prošireno)',
      'targetLists' => 'Liste meta',
      'campaignLogRecords' => 'Dnevnik kampanje',
      'campaign' => 'Kampanja',
      'portalUsers' => 'Korisnici portala',
      'originalLead' => 'Originalni izvor',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Klijent',
        'Investor' => 'Investitor',
        'Partner' => 'Partner',
        'Reseller' => 'Prodavac',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Avijacija',
        'Agriculture' => 'Poljoprivreda',
        'Advertising' => 'Oglašavanje',
        'Apparel & Accessories' => 'Odeća i pribor',
        'Architecture' => 'Arhitektura',
        'Automotive' => 'Automobili',
        'Banking' => 'Bankarstvo',
        'Biotechnology' => 'Biotehnologija',
        'Building Materials & Equipment' => 'Građevinski materijal i oprema',
        'Chemical' => 'Hemijska',
        'Construction' => 'Izgradnja',
        'Computer' => 'Računari',
        'Defense' => 'Odbrana',
        'Creative' => 'Kreativna ind',
        'Culture' => 'Kultura',
        'Consulting' => 'Konsalting',
        'Education' => 'Obrazovanje',
        'Electronics' => 'Elektronika',
        'Electric Power' => 'Električna energija',
        'Energy' => 'Energija',
        'Entertainment & Leisure' => 'Zabava & opuštanje',
        'Finance' => 'Finansije',
        'Food & Beverage' => 'Hrana i piće',
        'Grocery' => 'Bakalnica',
        'Hospitality' => 'gostoprimstvo',
        'Healthcare' => 'Zdravstvena zaštita',
        'Insurance' => 'Osiguranje',
        'Legal' => 'Pravni poslovi',
        'Manufacturing' => 'Proizvodnja',
        'Mass Media' => 'Masovni mediji',
        'Mining' => 'Rudarstvo',
        'Music' => 'muzika',
        'Marketing' => 'Marketing',
        'Publishing' => 'Izdavaštvo',
        'Petroleum' => 'Naftna',
        'Real Estate' => 'Nekretnine',
        'Retail' => 'Maloprodaja',
        'Shipping' => 'Dostava',
        'Service' => 'Usluge',
        'Support' => 'Podrška',
        'Sports' => 'Sportovi',
        'Software' => 'Softver',
        'Technology' => 'Tehnologija',
        'Telecommunications' => 'Telekomunikacije',
        'Television' => 'Televizija',
        'Testing, Inspection & Certification' => 'Testiranje, inspekcija i sertifikacija',
        'Transportation' => 'Transport',
        'Travel' => 'Travel',
        'Venture Capital' => 'Preduzetnički kapital',
        'Wholesale' => 'Veleprodaja',
        'Water' => 'voda',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Napravi pravno lice',
      'Copy Billing' => 'Prekopiraj adresu',
      'Set Primary' => 'Podesi primarno',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Klijenti',
      'partners' => 'Partneri',
      'recentlyCreated' => 'Nedavno napravljena',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mesec',
      'week' => 'Sedmica',
      'day' => 'Dan',
      'agendaWeek' => 'Sedmica',
      'agendaDay' => 'Dan',
      'timeline' => 'Vremenska linija',
    ),
    'labels' => 
    array (
      'Today' => 'Danas',
      'Create' => 'Kreiraj',
      'Shared' => 'Deljeno',
      'Add User' => 'Dodaj korisnika',
      'current' => 'trenutno',
      'time' => 'vreme',
      'User List' => 'Spisak korisnika',
      'Manage Users' => 'Upravljanje korisničkim nalozima',
      'View Calendar' => 'View Calendar',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'parent' => 'Roditelj',
      'status' => 'Status',
      'dateStart' => 'Početni datum',
      'dateEnd' => 'Krajnji datum',
      'direction' => 'Smer',
      'duration' => 'Trajanje',
      'description' => 'Opis',
      'users' => 'Korisnici',
      'contacts' => 'Kontakti',
      'leads' => 'Izvori',
      'reminders' => 'Podsetnici',
      'account' => 'Pravno lice',
      'acceptanceStatus' => 'Staus prihvatanja',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planiran',
        'Held' => 'Održan',
        'Not Held' => 'Nije održano',
      ),
      'direction' => 
      array (
        'Outbound' => 'Odlazna',
        'Inbound' => 'Dolazeća',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nema',
        'Accepted' => 'Prihvaćeno',
        'Declined' => 'Odbijeno',
        'Tentative' => 'Tentativni',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Podesi kao održano',
      'setNotHeld' => 'Podesi kao nije održano',
    ),
    'labels' => 
    array (
      'Create Call' => 'Napravi poziv',
      'Set Held' => 'Podesi kao održano',
      'Set Not Held' => 'Podesi kao nije održano',
      'Send Invitations' => 'Pošalji Pozivnice',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planirano',
      'held' => 'Održan',
      'todays' => 'Današnji',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'description' => 'Opis',
      'status' => 'Status',
      'type' => 'Tip',
      'startDate' => 'Datum početka',
      'endDate' => 'Krajnji datum',
      'targetLists' => 'Liste meta',
      'excludingTargetLists' => 'Isključujući liste meta',
      'sentCount' => 'Poslato',
      'openedCount' => 'Otvoren',
      'clickedCount' => 'Kliknuto',
      'optedOutCount' => 'Ne želi',
      'bouncedCount' => 'bounced',
      'hardBouncedCount' => 'hard Bounced',
      'softBouncedCount' => 'soft Bounced',
      'leadCreatedCount' => 'Kreiran izvor',
      'revenue' => 'Prihod',
      'revenueConverted' => 'Prihod (konvertovan)',
      'budget' => 'Budžet',
      'budgetConverted' => 'Budžet (konvertovan)',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste meta',
      'excludingTargetLists' => 'Isključujući liste meta',
      'accounts' => 'Pravna lica',
      'contacts' => 'Kontakti',
      'leads' => 'Izvori',
      'opportunities' => 'Prilike',
      'campaignLogRecords' => 'Dnevnik',
      'massEmails' => 'Masovna e-pošta',
      'trackingUrls' => 'Praćenje URL-ova',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-pošta',
        'Web' => 'Web',
        'Television' => 'Televizija',
        'Radio' => 'Radio',
        'Newsletter' => 'Bilten',
        'Mail' => 'Pošta',
      ),
      'status' => 
      array (
        'Planning' => 'Planiranje',
        'Active' => 'Aktivna',
        'Inactive' => 'Neaktivna',
        'Complete' => 'Gotova',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Napravite kampanju',
      'Target Lists' => 'Liste meta',
      'Statistics' => 'Statistika',
      'hard' => 'tvrd',
      'soft' => 'mek',
      'Unsubscribe' => 'Odjavi se',
      'Mass Emails' => 'Masovna e-pošta',
      'Email Templates' => 'Šabloni e-pošte',
      'Unsubscribe again' => 'Ponovo se odjavite',
      'Subscribe again' => 'Ponovo se prijavite',
      'Create Target List' => 'Napravite listu meta',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktivne',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Vi ste se odjavili sa naše liste.',
      'subscribedAgain' => 'Vi se ponovo pretplaćeni.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Mete koji treba da primaju poruke.',
      'excludingTargetLists' => 'Mete koje ne bi trebalo da primaju poruke.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Akcija',
      'actionDate' => 'Datum',
      'data' => 'Podaci',
      'campaign' => 'Kampanja',
      'parent' => 'Meta',
      'object' => 'Objekat',
      'application' => 'Aplikacija',
      'queueItem' => 'U redu čekanja',
      'stringData' => 'String podatci',
      'stringAdditionalData' => 'String dodatnih podataka',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'U redu čekanja',
      'parent' => 'Roditelj',
      'object' => 'Objekat',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Poslato',
        'Opened' => 'Otvorna',
        'Opted Out' => 'Ne želi',
        'Bounced' => 'bounced',
        'Clicked' => 'Kliknuto',
        'Lead Created' => 'Izvor kreiran',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Sve',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Poslato',
      'opened' => 'Otvorena',
      'optedOut' => 'Ne želi',
      'bounced' => 'bounced',
      'clicked' => 'Kliknuto',
      'leadCreated' => 'Izvor Kreiran',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL adresa',
      'urlToUse' => 'Kod za ubacivanje umesto URL',
      'campaign' => 'Kampanja',
    ),
    'links' => 
    array (
      'campaign' => 'Kampanja',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Stvoriti URL za praćenje',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'number' => 'Broj',
      'status' => 'Status',
      'account' => 'Pravno lice',
      'contact' => 'Kontakt',
      'contacts' => 'Kontakti',
      'priority' => 'Prioritet',
      'type' => 'Tip',
      'description' => 'Opis',
      'inboundEmail' => 'Dolazni email',
      'lead' => 'Izvor',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Dolazni email',
      'account' => 'Pravno lice',
      'contact' => 'Kontakt (osnovni)',
      'Contacts' => 'Kontakti',
      'meetings' => 'Ročišta',
      'calls' => 'Pozivi',
      'tasks' => 'Zadaci',
      'emails' => 'E-poruke',
      'articles' => 'Baza znanja',
      'lead' => 'Izvor',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Novi',
        'Assigned' => 'Dodeljen',
        'Pending' => 'Nerešen',
        'Closed' => 'Zatvoren',
        'Rejected' => 'Odbijen',
        'Duplicate' => 'Duplikat',
      ),
      'priority' => 
      array (
        'Low' => 'Nizak',
        'Normal' => 'Normalan',
        'High' => 'Visok',
        'Urgent' => 'Hitan',
      ),
      'type' => 
      array (
        'Question' => 'Pitanje',
        'Incident' => 'Incident',
        'Problem' => 'Problem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Napravi predmet',
      'Close' => 'Zatvori',
      'Reject' => 'Odbijen',
      'Closed' => 'Zatvoren',
      'Rejected' => 'Odbijen',
    ),
    'presetFilters' => 
    array (
      'open' => 'Otvoren',
      'closed' => 'Zatvoren',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'emailAddress' => 'E-mail',
      'title' => 'Naslov',
      'account' => 'Pravno lice',
      'accounts' => 'Pravna lica',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Tip pravnog lica',
      'doNotCall' => 'Ne zovi',
      'address' => 'Adresa',
      'opportunityRole' => 'Uloga prilika',
      'accountRole' => 'Naslov',
      'description' => 'Opis',
      'campaign' => 'Kampanja',
      'targetLists' => 'Liste meta',
      'targetList' => 'Lista meta',
      'portalUser' => 'Korisnik portala',
      'originalLead' => 'Originalni izvor',
      'acceptanceStatus' => 'Status prihvatanja',
      'accountIsInactive' => 'Neaktivno pravno lice',
      'acceptanceStatusMeetings' => 'Status prihvatanja (Ročišta)',
      'acceptanceStatusCalls' => 'Status prihvatanja (pozivi)',
    ),
    'links' => 
    array (
      'opportunities' => 'Prilike',
      'cases' => 'Predmeti',
      'targetLists' => 'Liste meta',
      'campaignLogRecords' => 'Dnevnik kampanje',
      'campaign' => 'Kampanja',
      'account' => 'Pravno lice (osnovno)',
      'accounts' => 'Pravna lica',
      'casesPrimary' => 'Predmeti (osnovni)',
      'portalUser' => 'Korisnik portala',
      'originalLead' => 'Originalni izvor',
      'documents' => 'Dokumenti',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Napravi kontakt',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => 'Nema',
        'Decision Maker' => 'Donosilac odluka',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Uticajno lice',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Korisnici portala',
      'notPortalUsers' => 'Nisu korisnici portala',
      'accountActive' => 'Aktivan',
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Napravi dokument',
      'Details' => 'Detaljnije',
    ),
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'file' => 'Datoteka',
      'type' => 'Tip',
      'publishDate' => 'Datum objave',
      'expirationDate' => 'Rok upotrebe',
      'description' => 'Opis',
      'accounts' => 'Pravna lica',
      'folder' => 'Fascikla',
    ),
    'links' => 
    array (
      'accounts' => 'Pravna lica',
      'opportunities' => 'Prilike',
      'folder' => 'Fascikla',
      'leads' => 'Izvori',
      'contacts' => 'Kontakti',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktivan',
        'Draft' => 'Nacrt',
        'Expired' => 'Istekao',
        'Canceled' => 'Otkazan',
      ),
      'type' => 
      array (
        '' => 'Nema',
        'Contract' => 'Ugovor',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Ugovor o licenci',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktivan',
      'draft' => 'Nacrt',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Napraviti fasciklu za dokumente',
      'Manage Categories' => 'Upravljanje fasciklama',
      'Documents' => 'Dokumenti',
    ),
    'links' => 
    array (
      'documents' => 'Dokumenti',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'target' => 'Meta',
      'sentAt' => 'Datum slanja',
      'attemptCount' => 'Pokušaji',
      'emailAddress' => 'Email adresa',
      'massEmail' => 'Masovna e-pošta',
      'isTest' => 'je test',
    ),
    'links' => 
    array (
      'target' => 'meta',
      'massEmail' => 'Masovna e-pošta',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Čeka',
        'Sent' => 'Poslato',
        'Failed' => 'Neuspešno',
        'Sending' => 'slanje',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Čeka',
      'sent' => 'Poslato',
      'failed' => 'Neuspešno',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Napravi članak',
      'Any' => 'Bilo koji',
      'Send in Email' => 'POštalji u e-poruciSend in Email',
      'Move Up' => 'Pomeri na gore',
      'Move Down' => 'Pomeri ne dole',
      'Move to Top' => 'Pomeri na vrh',
      'Move to Bottom' => 'Pomeri na dno',
    ),
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'type' => 'Tip',
      'attachments' => 'prilozi',
      'publishDate' => 'Datum objave',
      'expirationDate' => 'Rok isteka',
      'description' => 'Opis',
      'body' => 'telo',
      'categories' => 'Kategorije',
      'language' => 'Jezik',
      'portals' => 'Portali',
    ),
    'links' => 
    array (
      'cases' => 'Predmeti',
      'opportunities' => 'Prilike',
      'categories' => 'Kategorije',
      'portals' => 'Portali',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'U pregledu',
        'Draft' => 'Nacrt',
        'Archived' => 'Arhiviran',
        'Published' => 'Objavljen',
      ),
      'type' => 
      array (
        'Article' => 'Članak',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Članak će biti dostupan samo u određenim portalima.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Objavljen',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Napravi Kategoriju',
      'Manage Categories' => 'Izmeni Kategorije',
      'Articles' => 'Članci',
    ),
    'links' => 
    array (
      'articles' => 'Članci',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Pretvoriti u',
      'Create Lead' => 'Napravi izvor',
      'Convert' => 'Pretvoriti',
      'convert' => 'pretvori',
    ),
    'fields' => 
    array (
      'name' => 'Ime',
      'emailAddress' => 'E-mail',
      'title' => 'Naslov',
      'website' => 'Sajt',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Ime stranke',
      'doNotCall' => 'Ne zovi',
      'address' => 'Adresa',
      'status' => 'Status',
      'source' => 'Potiče od',
      'opportunityAmount' => 'Vrednost prilike',
      'opportunityAmountConverted' => 'Vrednost prilike (konvertovano)',
      'description' => 'Opis',
      'createdAccount' => 'Pravno lice',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Prilika',
      'campaign' => 'Kampanja',
      'targetLists' => 'Liste meta',
      'targetList' => 'Lista meta',
      'industry' => 'Industrija',
      'acceptanceStatus' => 'Status prihvatanja',
      'opportunityAmountCurrency' => 'Iznos prilike u valuti',
      'acceptanceStatusMeetings' => 'Status prihvatanja (Ročišta)',
      'acceptanceStatusCalls' => 'Status prihvatanja (pozivi)',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste meta',
      'campaignLogRecords' => 'Dnevnik kampanje',
      'campaign' => 'Kampanja',
      'createdAccount' => 'Pravno lice',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Prilika',
      'cases' => 'Predmeti',
      'documents' => 'Dokumenti',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Novo',
        'Assigned' => 'Dodeljen',
        'In Process' => 'U procesu',
        'Converted' => 'Konvertovan',
        'Recycled' => 'Recikliran',
        'Dead' => 'Mrtav',
      ),
      'source' => 
      array (
        '' => 'Nema',
        'Call' => 'Poziv',
        'Email' => 'E-mail',
        'Existing Customer' => 'Postojeći kupac',
        'Partner' => 'Partner',
        'Public Relations' => 'Odnosi sa javnošću',
        'Web Site' => 'Sajt',
        'Campaign' => 'Kampanja',
        'Other' => 'Drugo',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktivan',
      'actual' => 'Aktuelan',
      'converted' => 'konvertovan',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'storeSentEmails' => 'Čuvaj poslate e-poruke',
      'startAt' => 'Početni datum',
      'fromAddress' => 'Dolazna adresa',
      'fromName' => 'Od osobe',
      'replyToAddress' => 'Adresa za odgovor',
      'replyToName' => 'Odgovori osobi',
      'campaign' => 'Kampanja',
      'emailTemplate' => 'Šablon e-pošte',
      'inboundEmail' => 'Nalog E-pošte',
      'targetLists' => 'Liste meta',
      'excludingTargetLists' => 'Isključujući liste meta',
      'optOutEntirely' => 'Potpuno "ne želi"',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste meta',
      'excludingTargetLists' => 'Isključujući liste meta',
      'queueItems' => 'Na redu čekanja',
      'campaign' => 'Kampanja',
      'emailTemplate' => 'Šablon e-pošte',
      'inboundEmail' => 'Nalog e-pošte',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'nacrt',
        'Pending' => 'Čeka',
        'In Process' => 'U procesu',
        'Complete' => 'Gotovo',
        'Canceled' => 'Otkazano',
        'Failed' => 'Neuspešno',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Napravi masovnu e-poruku',
      'Send Test' => 'Pošalji Test',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Izabrati najmanje jedan cilj.',
      'testSent' => 'Test-poruke koje će biti poslate',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'E-mail adrese primalaca koji su se odjavili će biti označen kao opredelio se da ne želi i neće više primati masovne mejlove.',
      'targetLists' => 'Mete koji treba da primaju poruke.',
      'excludingTargetLists' => 'Mete koje ne bi trebalo da primaju poruke.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktuelan',
      'complete' => 'Završeno',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Naziv',
      'parent' => 'Roditelj',
      'status' => 'Status',
      'dateStart' => 'Početni datum',
      'dateEnd' => 'Krajnji datum',
      'duration' => 'Trajanje',
      'description' => 'Opis',
      'users' => 'Korisnici',
      'contacts' => 'Kontakti',
      'leads' => 'Izvori',
      'reminders' => 'Podsetnici',
      'account' => 'Pravno lice',
      'acceptanceStatus' => 'Status prihvatanja',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planiran',
        'Held' => 'Održano',
        'Not Held' => 'Nije održano',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nema',
        'Accepted' => 'Prihvaćeno',
        'Declined' => 'Odbijeno',
        'Tentative' => 'Tentativno',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Podesi kao održano',
      'setNotHeld' => 'Podesi kao nije održano',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Napravi ročište',
      'Set Held' => 'Podesi održano',
      'Set Not Held' => 'Podesi nije održano',
      'Send Invitations' => 'Pošalji pozive',
      'on time' => 'na vreme',
      'before' => 'pre',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planirano',
      'held' => 'Održano',
      'todays' => 'Današnja',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Ništa nije poslato',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'account' => 'Pravno lice',
      'stage' => 'Faza',
      'amount' => 'Iznos',
      'probability' => 'Verovatnoća,%',
      'leadSource' => 'Izvor potiče od',
      'doNotCall' => 'Ne zovi',
      'closeDate' => 'Datum zatvaranja',
      'contacts' => 'Kontakti',
      'description' => 'Opis',
      'amountConverted' => 'Iznos (konvertovano)',
      'amountWeightedConverted' => 'Iznos (ponderisano)',
      'campaign' => 'Kampanja',
      'originalLead' => 'Originalni izvor',
      'amountCurrency' => 'Iznos u valuti',
      'contactRole' => 'Uloga kontakta',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakti',
      'documents' => 'Dokumenti',
      'campaign' => 'Kampanja',
      'originalLead' => 'Originalni izvor',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Izviđanje',
        'Qualification' => 'Kvalifikacija',
        'Needs Analysis' => 'Analiza potrebna',
        'Value Proposition' => 'Dobitak',
        'Id. Decision Makers' => 'Id. Donosioci odluka',
        'Perception Analysis' => 'Analiza precepciona',
        'Proposal/Price Quote' => 'Predlog/Cena ponuda',
        'Negotiation/Review' => 'Pregovori/pregled',
        'Closed Won' => 'Zatvorena Pobednik',
        'Closed Lost' => 'Zatvorena izgubljeno',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Napravi priliku',
    ),
    'presetFilters' => 
    array (
      'open' => 'Otvorene',
      'won' => 'Dobijene',
      'lost' => 'izgubljene',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'description' => 'Opis',
      'entryCount' => 'Tačka unosa',
      'campaigns' => 'Kampanje',
      'endDate' => 'Krajnji datum',
      'targetLists' => 'Liste meta',
      'includingActionList' => 'Uključujući',
      'excludingActionList' => 'Isključujući',
    ),
    'links' => 
    array (
      'accounts' => 'Pravna lica',
      'contacts' => 'Kontakti',
      'leads' => 'Izvori',
      'campaigns' => 'Kampanje',
      'massEmails' => 'Masovne e-pošta',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-mail',
        'Web' => 'Web',
        'Television' => 'televizija',
        'Radio' => 'radio',
        'Newsletter' => 'bilten',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Napravi listu meta',
      'Opted Out' => 'Ne želi',
      'Cancel Opt-Out' => 'Odbaci "ne želi"',
      'Opt-Out' => 'Mogućnost odbijanja',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'parent' => 'roditelj',
      'status' => 'Status',
      'dateStart' => 'Početni datum',
      'dateEnd' => 'Rok',
      'dateStartDate' => 'Datum početka (ceo dan)',
      'dateEndDate' => 'Datum završetka (ceo dan)',
      'priority' => 'Prioritet',
      'description' => 'Opis',
      'isOverdue' => 'kasni',
      'account' => 'Pravno lice',
      'dateCompleted' => 'Datum završetka',
      'attachments' => 'Prilozi',
      'reminders' => 'Podsetnici',
    ),
    'links' => 
    array (
      'attachments' => 'Prilozi',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nije počelo',
        'Started' => 'Započeto',
        'Completed' => 'Završeno',
        'Canceled' => 'Otkazano',
        'Deferred' => 'Odloženo',
      ),
      'priority' => 
      array (
        'Low' => 'Nizak',
        'Normal' => 'Normalan',
        'High' => 'Visok',
        'Urgent' => 'Hitan',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Kreiraj Zadatak',
      'Complete' => 'Završeno',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktuelno',
      'completed' => 'Završeno',
      'deferred' => 'Odloženi',
      'todays' => 'Današnji',
      'overdue' => 'Kašnjenje',
    ),
  ),
);
?>