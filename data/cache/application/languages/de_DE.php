<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'User',
      'action' => 'Action',
      'createdAt' => 'Date',
      'target' => 'Target',
      'targetType' => 'Target Type',
      'authToken' => 'Auth Token',
      'ipAddress' => 'IP Address',
    ),
    'links' => 
    array (
      'authToken' => 'Auth Token',
      'user' => 'User',
      'target' => 'Target',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Only My',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Read',
        'update' => 'Update',
        'delete' => 'Delete',
        'create' => 'Create',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Aktiv',
      'Disabled' => 'Inaktiv',
      'System' => 'System',
      'Users' => 'Benutzer',
      'Email' => 'E-Mail',
      'Data' => 'Daten',
      'Customization' => 'Anpassung',
      'Available Fields' => 'Verfügbare Felder',
      'Layout' => 'Aktuelles Layout',
      'Entity Manager' => 'Entitätsmanager',
      'Add Panel' => 'Panel hinzufügen',
      'Add Field' => 'Feld hinzufügen',
      'Settings' => 'Einstellungen',
      'Scheduled Jobs' => 'Geplante Jobs',
      'Upgrade' => 'Aktualisierung',
      'Clear Cache' => 'Cache leeren',
      'Rebuild' => 'Neu aufbauen',
      'Teams' => 'Teams',
      'Roles' => 'Rollen',
      'Portal' => 'Portal',
      'Portals' => 'Portale',
      'Portal Roles' => 'Portal-Rollen',
      'Portal Users' => 'Portal Benutzer',
      'Outbound Emails' => 'Ausgehende E-Mails',
      'Group Email Accounts' => 'Gruppen E-Mail Konten',
      'Personal Email Accounts' => 'Persönliche E-Mail Konten',
      'Inbound Emails' => 'Eingehende E-Mails',
      'Email Templates' => 'E-Mail Vorlagen',
      'Import' => 'Import',
      'Layout Manager' => 'Layouts anpassen',
      'User Interface' => 'Benutzeroberfläche',
      'Auth Tokens' => 'Auth Token',
      'Authentication' => 'Authentifizierung',
      'Currency' => 'Währung',
      'Integrations' => 'Integrationen',
      'Extensions' => 'Erweiterungen',
      'Upload' => 'Hochladen',
      'Installing...' => 'Installiere...',
      'Upgrading...' => 'Aktualisiere....',
      'Upgraded successfully' => 'Erfolgreich aktualisiert',
      'Installed successfully' => 'Erfolgreich installiert',
      'Ready for upgrade' => 'Bereit für Aktualisierung',
      'Run Upgrade' => 'Aktualisierung duchführen',
      'Install' => 'Installieren',
      'Ready for installation' => 'Bereit für Installation',
      'Uninstalling...' => 'Deinstalliere...',
      'Uninstalled' => 'Deinstalliert',
      'Create Entity' => 'Entität erstellen',
      'Edit Entity' => 'Entität bearbeiten',
      'Create Link' => 'Relation erstellen',
      'Edit Link' => 'Relation bearbeiten',
      'Notifications' => 'Benachrichtigungen',
      'Jobs' => 'Jobs',
      'Reset to Default' => 'Zurücksetzen auf Standard',
      'Email Filters' => 'E-Mail Filter',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
    ),
    'layouts' => 
    array (
      'list' => 'Liste',
      'detail' => 'Detail',
      'listSmall' => 'Liste (Klein)',
      'detailSmall' => 'Detail (Klein)',
      'filters' => 'Suchfilter',
      'massUpdate' => 'Massenänderung',
      'relationships' => 'Beziehungen',
      'sidePanelsDetail' => 'Seitenleisten (Detail)',
      'sidePanelsEdit' => 'Seitenleisten (Bearbeiten)',
      'sidePanelsDetailSmall' => 'Seitenleisten (Detail klein)',
      'sidePanelsEditSmall' => 'Seitenleisten (Bearbeiten klein)',
      'detailConvert' => 'Interessent umwandeln',
      'listForAccount' => 'Liste (für Firma)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresse',
      'array' => 'Liste',
      'foreign' => 'Fremdbezug',
      'duration' => 'Dauer',
      'password' => 'Passwort',
      'personName' => 'Person Name',
      'autoincrement' => 'Automatisch hochzählen',
      'bool' => 'Bool',
      'currency' => 'Währung',
      'currencyConverted' => 'Währung (konvertiert)',
      'date' => 'Datum',
      'datetime' => 'Datum/Zeit',
      'datetimeOptional' => 'Datum/Datum-Zeit',
      'email' => 'E-Mail',
      'enum' => 'Einfachauswahl',
      'enumInt' => 'Einfachauswahl Ganzzahlwerte',
      'enumFloat' => 'Einfachauswahl Fließkommawerte',
      'float' => 'Fließkomma',
      'int' => 'Ganzzahl',
      'link' => 'Link',
      'linkMultiple' => 'Mehrfachlinks',
      'linkParent' => 'Übergeordneter Link',
      'multienim' => 'Mehrfachauswahl',
      'phone' => 'Telefon',
      'text' => 'Textbox',
      'url' => 'URL',
      'varchar' => 'Text (max. 255)',
      'file' => 'Datei',
      'image' => 'Bild',
      'multiEnum' => 'Mehrfachauswahl',
      'attachmentMultiple' => 'Mehrfach Anhänge',
      'rangeInt' => 'Bereich Ganzzahl',
      'rangeFloat' => 'Bereich Fließkommawerte',
      'rangeCurrency' => 'Bereich Währung',
      'wysiwyg' => 'Texteditor',
      'map' => 'Karte',
      'number' => 'Nummer',
      'colorpicker' => 'Color Picker',
    ),
    'fields' => 
    array (
      'type' => 'Typ',
      'name' => 'Name',
      'label' => 'Bezeichnung',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Erforderlich',
      'default' => 'Standard',
      'maxLength' => 'Maximallänge',
      'options' => 'Optionen',
      'after' => 'Nach (Feld)',
      'before' => 'Vor (Feld)',
      'link' => 'Link',
      'field' => 'Feld',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Übersetzung',
      'previewSize' => 'Vorschau Größe',
      'noEmptyString' => 'Keine leere Zeichenkette',
      'defaultType' => 'Standardtyp',
      'seeMoreDisabled' => 'Abschneiden des Texts verhindern',
      'entityList' => 'Entitätsliste',
      'isSorted' => 'Sortiert (alphabetisch)',
      'audited' => 'Auditiert',
      'trim' => 'Abschneiden',
      'height' => 'Höhe (px)',
      'minHeight' => 'Min. Höhe (px)',
      'provider' => 'Provider',
      'typeList' => 'Typenliste',
      'rows' => 'Anzahl Zeilen Textbereich',
      'lengthOfCut' => 'Angezeigte Textlänge',
      'sourceList' => 'Quellenliste',
      'prefix' => 'Prefix',
      'nextNumber' => 'Nächste Nummer',
      'padLength' => 'Länge auffüllen',
      'disableFormatting' => 'Formatierung deaktivieren',
      'dynamicLogicVisible' => 'Bedingungen die ein Feld sichtbar machen',
      'dynamicLogicReadOnly' => 'Bedingungen die ein Feld schreibgeschützt machen',
      'dynamicLogicRequired' => 'Bedingungen die ein Feld erforderlich machen',
      'dynamicLogicOptions' => 'Bedingungsoptionen',
      'probabilityMap' => 'Stufenwahrscheinlichkeiten (%)',
      'readOnly' => 'nur lesen',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Ihr EspoCRM wird nun auf Version <strong>{version}</strong> aktualisiert. Dies kann einige Zeit dauern.',
      'upgradeDone' => 'Ihr EspoCRM wurde auf Version <strong>{version}</strong> aktualisiert.',
      'upgradeBackup' => 'Wie empfehlen VOR einer Aktualisierung die EspoCRM Dateien sowie die Datenbank zu sichern.',
      'thousandSeparatorEqualsDecimalMark' => 'Das Tausendertrennzeichen und das Dezimaltrennzeichen können nicht gleich sein',
      'userHasNoEmailAddress' => 'Der Benutzer hat keine E-Mail Adresse.',
      'selectEntityType' => 'Entitätstyp im linken Menü auswählen.',
      'selectUpgradePackage' => 'Aktualisierungspaket auswählen',
      'downloadUpgradePackage' => 'Aktualisierungspaket(e) <a href="{url}">hier </a>herunterladen.',
      'selectLayout' => 'Layout zum Editieren links auswählen',
      'selectExtensionPackage' => 'Erweiterungspaket auswählen',
      'extensionInstalled' => 'Erweiterung {name} {version} wurde installiert.',
      'installExtension' => 'Erweiterung {name} {version} ist bereit für die Installation',
      'uninstallConfirmation' => 'Wollen Sie die Erweiterung wirklich deinstallieren?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Systemeinstellungen der Applikation.',
      'scheduledJob' => 'Aufgaben die durch einen Cronjob ausgeführt werden.',
      'upgrade' => 'EspoCRM aktualisieren.',
      'clearCache' => 'Alle Cache Dateien leeren.',
      'rebuild' => 'Wiederherstellung des Backends und Leeren des Cache.',
      'users' => 'Benutzerverwaltung.',
      'teams' => 'Teamverwaltung.',
      'roles' => 'Rollenverwaltung.',
      'portals' => 'Portalverwaltung',
      'portalRoles' => 'Rollen für Portale.',
      'portalUsers' => 'Benutzer des Portals',
      'outboundEmails' => 'SMTP Einstellungen für ausgehende E-Mails.',
      'groupEmailAccounts' => 'IMAP Gruppenkonten. E-Mail Import und E-Mails für Fälle.',
      'personalEmailAccounts' => 'E-Mail Konten der Benutzer.',
      'emailTemplates' => 'Vorlagen für ausgehende E-Mails.',
      'import' => 'Datenimport aus CSV Datei.',
      'layoutManager' => 'Layouts anpassen (Liste, Detailansicht, Bearbeitungsansicht, Suche, Massenaktualisierung).',
      'entityManager' => 'Neue Entitäten selbst erstellen und bestehende bearbeiten. Felder und Relationen verwalten.',
      'userInterface' => 'Benutzeroberfläche konfigurieren.',
      'authTokens' => 'Aktive Auth Sessions. IP Adresse und letztes Zugriffsdatum.',
      'authentication' => 'Authentifizierungseinstellungen.',
      'currency' => 'Währungseinstellungen und Wechselkurse.',
      'extensions' => 'Erweiterungen installieren oder deinstallieren.',
      'integrations' => 'Integration mit Drittanbietern.',
      'notifications' => 'In-App und E-Mail Benachrichtigungseinstellungen.',
      'inboundEmails' => 'Einstellungen für eingehende E-Mails.',
      'emailFilters' => 'E-Mails auf die die angegebenen Filter zutreffen werden nicht importiert.',
      'actionHistory' => 'Log of user actions.',
      'labelManager' => 'Customize application labels.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Sehr klein',
        'small' => 'Klein',
        'medium' => 'Mittel',
        'large' => 'Groß',
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
      'Document' => 'Dokument einfügen',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Benutzer',
      'ipAddress' => 'IP Adresse',
      'lastAccess' => 'Letztes Zugriffsdatum',
      'createdAt' => 'Login Datum',
      'isActive' => 'Is Active',
      'portal' => 'Portal',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Action History',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'inactive' => 'Inactive',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Set Inactive',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Set Inactive',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Titel',
      'dateFrom' => 'Von Datum',
      'dateTo' => 'Bis Datum',
      'autorefreshInterval' => 'Aktualisierungsintervall',
      'displayRecords' => 'Sätze anzeigen',
      'isDoubleHeight' => 'Zweifache Höhe',
      'mode' => 'Modus',
      'enabledScopeList' => 'Was soll angezeigt werden',
      'users' => 'Benutzer',
      'entityType' => 'Entity Type',
      'primaryFilter' => 'Primary Filter',
      'boolFilterList' => 'Additional Filters',
      'sortBy' => 'Order (field)',
      'sortDirection' => 'Order (direction)',
      'expandedLayout' => 'Layout',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Woche (Agenda)',
        'basicWeek' => 'Woche',
        'month' => 'Monat',
        'basicDay' => 'Tag',
        'agendaDay' => 'Tag (Agenda)',
        'timeline' => 'Zeitachse',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Select Entity Type in dashlet options.',
    ),
  ),
  'DynamicLogic' => 
  array (
    'label' => 
    array (
      'Field' => 'Feld',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'Ist gleich',
        'notEquals' => 'Ist nicht gleich',
        'greaterThan' => 'Größer als',
        'lessThan' => 'Kleiner als',
        'greaterThanOrEquals' => 'Größer oder gleich',
        'lessThanOrEquals' => 'Kleiner oder gleich',
        'in' => 'In',
        'notIn' => 'Nicht in',
        'inPast' => 'Ist in der Vergangenheit',
        'inFuture' => 'Ist in der Zukunft',
        'isToday' => 'Ist heute',
        'isTrue' => 'Ist wahr',
        'isFalse' => 'Ist falsch',
        'isEmpty' => 'Ist leer',
        'isNotEmpty' => 'Ist nicht leer',
        'contains' => 'Enthält',
        'notContains' => 'Enthält nicht',
        'has' => 'Contains',
        'notHas' => 'Not Contains',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateSent' => 'Sendedatum',
      'from' => 'Von',
      'to' => 'An',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Antwort an',
      'replyToString' => 'Antwort an (Zeichenkette)',
      'isHtml' => 'Ist HTML',
      'body' => 'Inhalt',
      'subject' => 'Betreff',
      'attachments' => 'Anhänge',
      'selectTemplate' => 'Vorlage wählen',
      'fromEmailAddress' => 'Absenderadresse',
      'toEmailAddresses' => 'An Adresse',
      'emailAddress' => 'E-Mail Adresse',
      'deliveryDate' => 'Zustelldatum',
      'account' => 'Firma',
      'users' => 'Benutzer',
      'replied' => 'Beantwortet',
      'replies' => 'Antworten',
      'isRead' => 'Ist gelesen',
      'isNotRead' => 'Ungelesen',
      'isImportant' => 'Ist wichtig',
      'isReplied' => 'Beantwortet',
      'isNotReplied' => 'Nicht beantwortet',
      'isUsers' => 'Gehört Benutzer',
      'inTrash' => 'Im Papierkorb',
      'sentBy' => 'Gesendet von (Benutzer)',
      'folder' => 'Ordner',
      'inboundEmails' => 'Gruppenkonten',
      'emailAccounts' => 'Persönliche Konten',
      'hasAttachment' => 'Anhang vorhanden',
      'assignedUsers' => 'Assigned Users',
    ),
    'links' => 
    array (
      'replied' => 'Beantwortet',
      'replies' => 'Antworten',
      'inboundEmails' => 'Gruppenkonten',
      'emailAccounts' => 'Persönliche Konten',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Sent By',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Entwurf',
        'Sending' => 'Wird gesendet',
        'Sent' => 'Gesendet',
        'Archived' => 'Archiviert',
        'Received' => 'Empfangen',
        'Failed' => 'Fehlgeschlagen',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'E-Mail archivieren',
      'Archive Email' => 'E-Mail archivieren',
      'Compose' => 'Erstellen',
      'Reply' => 'Antworten',
      'Reply to All' => 'Allen antworten',
      'Forward' => 'Weiterleiten',
      'Original message' => 'Originalnachricht',
      'Forwarded message' => 'Weitergeleitete Nachricht:',
      'Email Accounts' => 'Persönliche E-Mail Konten',
      'Inbound Emails' => 'Gruppen E-Mail Konten',
      'Email Templates' => 'E-Mail Vorlagen',
      'Send Test Email' => 'Test E-Mail senden',
      'Send' => 'Senden',
      'Email Address' => 'E-Mail Adresse',
      'Mark Read' => 'Als gelesen markieren',
      'Sending...' => 'Wird gesendet...',
      'Save Draft' => 'Entwurf speichern',
      'Mark all as read' => 'Als gelesen markieren',
      'Show Plain Text' => 'Als Text zeigen',
      'Mark as Important' => 'Als wichtig markieren',
      'Unmark Importance' => 'Wichtig Markierung entfernen',
      'Move to Trash' => 'In den Papierkorb verschieben',
      'Retrieve from Trash' => 'Aus dem Papierkorb hervorholen',
      'Move to Folder' => 'In Ordner verschieben',
      'Filters' => 'Filter',
      'Folders' => 'Ordner',
      'Create Lead' => 'Interessent erstellen',
      'Create Contact' => 'Kontakt erstellen',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Neue Aufgabe',
      'Create Case' => 'Fall erstellen',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Keine SMTP Einstellungen {link}.',
      'testEmailSent' => 'Eine Test E-Mail wurde gesendet',
      'emailSent' => 'E-Mail wurde gesendet',
      'savedAsDraft' => 'Als Entwurf gepeichert',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Gesendet',
      'archived' => 'Archiviert',
      'inbox' => 'Posteingang',
      'drafts' => 'Entwürfe',
      'trash' => 'Papierkorb',
      'important' => 'Wichtig',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Als gelesen markieren',
      'markAsNotRead' => 'Als ungelesen markieren',
      'markAsImportant' => 'Als wichtig markieren',
      'markAsNotImportant' => 'Wichtig Markierung entfernen',
      'moveToTrash' => 'In den Papierkorb verschieben',
      'moveToFolder' => 'In Ordner verschieben',
      'retrieveFromTrash' => 'Aus dem Papierkorb holen',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Benutzername',
      'password' => 'Passwort',
      'port' => 'Port',
      'monitoredFolders' => 'Überwachte Ordner',
      'ssl' => 'SSL',
      'fetchSince' => 'Holen seit',
      'emailAddress' => 'E-Mail Adresse',
      'sentFolder' => 'Gesendet Ordner',
      'storeSentEmails' => 'Gesendete E-Mails speichern',
      'keepFetchedEmailsUnread' => 'Geholte E-Mails als ungelesen behalten',
      'emailFolder' => 'In Ordner ablegen',
      'useSmtp' => 'SMTP verwenden',
      'smtpHost' => 'SMTP Host',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Transportsicherheit',
      'smtpUsername' => 'SMTP Benutzername',
      'smtpPassword' => 'SMTP Passwort',
    ),
    'links' => 
    array (
      'filters' => 'Filter',
      'emails' => 'E-Mails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'E-Mail Konto erstellen',
      'IMAP' => 'IMAP',
      'Main' => 'Hauptteil',
      'Test Connection' => 'Verbindung überprüfen',
      'Send Test Email' => 'Test E-Mail senden',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kann keine Verbindung zum IMAP Server herstellen',
      'connectionIsOk' => 'Verbindung ist in Ordnung',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Sie können einen \'Gesendet\' Ordner hinzufügen um E-Mails zu synchronisieren, die von einem externen Programm gesendet wurden.',
      'storeSentEmails' => 'Gesendete E-Mail werden auf einem IMAP Server gespeichert. Die E-Mail Adresse muss jene sein, von der die E-Mail gesendet wurde.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primär',
      'Opted Out' => 'Opt-Out gesetzt',
      'Invalid' => 'Ungültig',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Von',
      'to' => 'An',
      'subject' => 'Betreff',
      'bodyContains' => 'Mailinhalt',
      'action' => 'Aktion',
      'isGlobal' => 'Ist global',
      'emailFolder' => 'Ordner',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'E.Mail Filter erstellen',
      'Emails' => 'E-Mails',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignorieren',
        'Move to Folder' => 'In Ordner ablegen',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Ein Name für den Filter',
      'subject' => 'Verwendung des Platzhalters *:

text* - beginnt mit text,
*text* - enthält text,
*text - endet mit text.',
      'bodyContains' => 'Der Text der E-Mail enthält eines der angegebenen Worte oder Phrasen.',
      'from' => 'Die E-Mails werden von der angegebenen Adresse gesendet. Bitte leer lassen wenn nicht benötigt. Sie können den Platzhalter * verwenden.',
      'to' => 'Die E-Mails werden an die angegebenen Adressen gesendet. Bitte leer lassen wenn nicht benötigt. Sie können den Platzhalter * verwenden.',
      'isGlobal' => 'Wendet diesen Filter auf alle eingehenden E-Mails im System an.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Benachrichtigungen überspringen',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Ordner erstellen',
      'Manage Folders' => 'Ordner verwalten',
      'Emails' => 'E-Mails',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'isHtml' => 'Ist HTML',
      'body' => 'Inhalt',
      'subject' => 'Betreff',
      'attachments' => 'Anhänge',
      'insertField' => 'Feld einfügen',
      'oneOff' => 'Ein-Aus',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'E-Mail Vorlage erstellen',
      'Info' => 'Info',
    ),
    'messages' => 
    array (
      'infoText' => 'Verfügbare Variablen:

{optOutUrl} &#8211; URL für den Abmeldelink;

{optOutLink} &#8211; ein Abmeldelink.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Überprüfen Sie, ob Sie die Vorlage nur einmal benutzen z.B. für eine Massenaussendung',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktuell',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Felder',
      'Relationships' => 'Beziehungen',
      'Schedule' => 'Geplant',
      'Log' => 'Log',
      'Formula' => 'Formel',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'type' => 'Typ',
      'labelSingular' => 'Bezeichnung Einzahl',
      'labelPlural' => 'Bezeichnung Mehrzahl',
      'stream' => 'Aktivitäten',
      'label' => 'Bezeichnung',
      'linkType' => 'Relationstyp',
      'entityForeign' => 'Fremdentität',
      'linkForeign' => 'Fremdrelation',
      'link' => 'Link',
      'labelForeign' => 'Fremdbezeichnung',
      'sortBy' => 'Standardmäßig sortieren nach',
      'sortDirection' => 'Standardmäßig sortieren in Reihenfolge',
      'relationName' => 'Mittlerer Tabellenname',
      'linkMultipleField' => 'Mehrere Felder verlinken',
      'linkMultipleFieldForeign' => 'Fremdlink mehrere Felder',
      'disabled' => 'Inaktiv',
      'textFilterFields' => 'Textfilter Felder',
      'audited' => 'überprüft',
      'auditedForeign' => 'fremd geprüft',
      'statusField' => 'Status Feld',
      'beforeSaveCustomScript' => 'vor dem Speicher benutzerdefiniertes Script',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Kein(e)',
        'Base' => 'Basis',
        'Person' => 'Person',
        'CategoryTree' => 'Kategoriebaum',
        'Event' => 'Ereignis',
        'BasePlus' => 'Basis Plus',
        'Company' => 'Firma',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'n:n',
        'oneToMany' => '1:n',
        'manyToOne' => 'n:1',
        'parentToChildren' => 'Eltern zu Kind',
        'childrenToParent' => 'Kind zu Eltern',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Aufsteigend',
        'desc' => 'Absteigend',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Entität wurde erstellt',
      'linkAlreadyExists' => 'Relationsnamenkonflikt',
      'linkConflict' => 'Eine Relation mit diesem Namen existiert bereits',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Updates dieses Feldes werden im Stream protokolliert.',
      'textFilterFields' => 'Von der Textsuche verwendete Felder.',
      'stream' => 'Ob die Entity einen Stream hat.',
      'disabled' => 'Überprüfen Sie, ob Sie diese Entität nicht in Ihrem System benötigen.',
      'linkAudited' => 'Das Erstellen eines verknüpften Datensatzes und das Verknüpfen mit dem vorhandenen Datensatz wird in Stream protokolliert.',
      'linkMultipleField' => 'verlinken mehrere Felder bietet eine praktische Möglichkeit Beziehungen zu bearbeiten. Nicht benutzen wenn Sie eine große Anzahl von Verknüpfungen haben.',
      'entityType' => 'Base Plus - enthält Aktivitäten, Verlaufs- und Aufgabenfelder. 

Event - verfügbar im Fenster "Kalender und Aktivitäten".',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Export all fields',
      'fieldList' => 'Feldliste',
      'format' => 'Format',
      'useCustomFieldList' => 'Benutzerdefinierte Feldliste',
    ),
    'options' => 
    array (
      'format' => 
      array (
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)',
      ),
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'version' => 'Version',
      'description' => 'Beschreibung',
      'isInstalled' => 'Installiert',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Deinstallieren',
      'Install' => 'Installieren',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Erweiterung {name} wurde deinstalliert',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Verbinden',
      'Connected' => 'Verbunden',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Dynamische Logik',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'nichts',
        'javascript: return this.dateTime.getNow(1);' => 'jetzt',
        'javascript: return this.dateTime.getNow(5);' => 'jetzt (5min)',
        'javascript: return this.dateTime.getNow(15);' => 'jetzt (15min)',
        'javascript: return this.dateTime.getNow(30);' => 'jetzt (30min)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 Stunde',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 Stunden',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 Stunden',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 Stunden',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 Stunden',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 Stunden',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 Stunden',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 Stunden',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 Stunden',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 Stunden',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 Stunden',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 Stunden',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 Tag',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 Tage',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 Tage',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 Tage',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 Tage',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 Tage',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 Woche',
      ),
      'dateDefault' => 
      array (
        '' => 'keine',
        'javascript: return this.dateTime.getToday();' => 'Heute',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 Tage',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 Tage',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 Tage',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 Tage',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 Tage',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 Tage',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 Tage',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 Tage',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 Tage',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 Tage',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 Woche',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 Wochen',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 Wochen',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 Monat',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 Monate',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 Monate',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 Monate',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 Monate',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 Monate',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 Monate',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 Monate',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 Monate',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 Monate',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 Monate',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 Jahr',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Updates werden im Verlauf geloggt.',
      'required' => 'Das Feld ist ein Pflichtfeld und darf nicht leer sein.',
      'default' => 'Der Wert wird beim Erstellen standardmäßig gesetzt.',
      'min' => 'Min. zulässiger Wert',
      'max' => 'Max. zulässiger Wert',
      'seeMoreDisabled' => 'Wenn nicht angehakt, werden lange Texte gekürzt',
      'lengthOfCut' => 'Wenn nicht angehakt, werden Langtexte verkürzt',
      'maxLength' => 'Maximal zulässige Textlänge.',
      'before' => 'Der Datumswert sollte vor dem Datumswert des angegebenen Feldes liegen.',
      'after' => 'Der Datumswert sollte nach dem Datumswert des angegebenen Feldes liegen.',
      'readOnly' => 'Feldwert kann nicht vom Benutzer angegebe, aber durch Formel berechnet werden.',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'E-Mail',
      'User' => 'Benutzer',
      'Team' => 'Team',
      'Role' => 'Rolle',
      'EmailTemplate' => 'E-Mail Vorlage',
      'EmailAccount' => 'Persönliches E-Mail Konto',
      'EmailAccountScope' => 'Persönliches E-Mail Konto',
      'OutboundEmail' => 'Ausgehende E-Mail',
      'ScheduledJob' => 'Geplante Aufgabe',
      'ExternalAccount' => 'Externes Konto',
      'Extension' => 'Erweiterung',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Gruppen E-Mail Konto',
      'Stream' => 'Aktivitäten',
      'Import' => 'Import',
      'Template' => 'Vorlage',
      'Job' => 'Job',
      'EmailFilter' => 'E-Mail Filter',
      'Portal' => 'Portal',
      'PortalRole' => 'Portal Rolle',
      'Attachment' => 'Anhang',
      'EmailFolder' => 'E-Mail Ordner',
      'PortalUser' => 'Portal Benutzer',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Record',
      'PasswordChangeRequest' => 'Password Change Request',
      'ActionHistoryRecord' => 'Action History Record',
      'AuthToken' => 'Auth Token',
      'UniqueId' => 'Unique ID',
      'LastViewed' => 'Zuletzt Angezeigt',
      'Settings' => 'Settings',
      'FieldManager' => 'Field Manager',
      'Integration' => 'Integration',
      'LayoutManager' => 'Layout Manager',
      'EntityManager' => 'Entity Manager',
      'Export' => 'Export',
      'DynamicLogic' => 'Dynamic Logic',
      'DashletOptions' => 'Dashlet Options',
      'Admin' => 'Admin',
      'Global' => 'Global',
      'Preferences' => 'Preferences',
      'EmailAddress' => 'Email Address',
      'PhoneNumber' => 'Phone Number',
      'Account' => 'Firma',
      'Contact' => 'Kontakt',
      'Lead' => 'Interessent',
      'Target' => 'Ziel',
      'Opportunity' => 'Verkaufschance',
      'Meeting' => 'Meeting',
      'Calendar' => 'Kalender',
      'Call' => 'Anruf',
      'Task' => 'Aufgabe',
      'Case' => 'Fall',
      'Document' => 'Dokument',
      'DocumentFolder' => 'Dokumentenordner',
      'Campaign' => 'Kampagne',
      'TargetList' => 'Kontaktliste',
      'MassEmail' => 'Massen E-Mails',
      'EmailQueueItem' => 'E-Mail Warteschlangeneintrag',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Activities' => 'Aktivitäten',
      'KnowledgeBaseArticle' => 'Wissensbasis Artikel',
      'KnowledgeBaseCategory' => 'Wissensbasis Kategorie',
      'CampaignLogRecord' => 'Kampagnen-Logeintrag',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'E-Mails',
      'User' => 'Benutzer',
      'Team' => 'Teams',
      'Role' => 'Rollen',
      'EmailTemplate' => 'E-Mail Vorlagen',
      'EmailAccount' => 'Persönliche E-Mail Konten',
      'EmailAccountScope' => 'Persönliche E-Mail Konten',
      'OutboundEmail' => 'Ausgehende E-Mails',
      'ScheduledJob' => 'Geplante Jobs',
      'ExternalAccount' => 'Externe Konten',
      'Extension' => 'Erweiterungen',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Gruppen E-Mail Konten',
      'Stream' => 'Aktivitäten',
      'Import' => 'Importergebnisse',
      'Template' => 'Vorlagen',
      'Job' => 'Jobs',
      'EmailFilter' => 'E-Mail Filter',
      'Portal' => 'Portale',
      'PortalRole' => 'Portal Rollen',
      'Attachment' => 'Anhänge',
      'EmailFolder' => 'E-Mail Ordner',
      'PortalUser' => 'Portal Benutzer',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Records',
      'PasswordChangeRequest' => 'Password Change Requests',
      'ActionHistoryRecord' => 'Action History',
      'AuthToken' => 'Auth Tokens',
      'UniqueId' => 'Unique IDs',
      'LastViewed' => 'Zuletzt Angezeigt',
      'Account' => 'Firmen',
      'Contact' => 'Kontakte',
      'Lead' => 'Interessenten',
      'Target' => 'Zielkontakte',
      'Opportunity' => 'Verkaufschancen',
      'Meeting' => 'Meetings',
      'Calendar' => 'Kalender',
      'Call' => 'Anrufe',
      'Task' => 'Aufgaben',
      'Case' => 'Fälle',
      'Document' => 'Dokumente',
      'DocumentFolder' => 'Dokumentenordner',
      'Campaign' => 'Kampagnen',
      'TargetList' => 'Kontaktlisten',
      'MassEmail' => 'Massen E-Mails',
      'EmailQueueItem' => 'E-Mail Warteschlangeneinträge',
      'CampaignTrackingUrl' => 'Tracking URLs',
      'Activities' => 'Aktivitäten',
      'KnowledgeBaseArticle' => 'Wissensbasis',
      'KnowledgeBaseCategory' => 'Wissensbasis Kategorien',
      'CampaignLogRecord' => 'Kampagnen-Logeinträge',
    ),
    'labels' => 
    array (
      'Misc' => 'Verschiedenes',
      'Merge' => 'Zusammenführen',
      'None' => 'Kein(e)',
      'Home' => 'Telefon Privat',
      'by' => 'nach',
      'Saved' => 'Gespeichert.',
      'Error' => 'Fehler',
      'Select' => 'Auswählen',
      'Not valid' => 'Ungültig',
      'Please wait...' => 'Bitte warten...',
      'Please wait' => 'Bitte warten',
      'Loading...' => 'Lade...',
      'Uploading...' => 'Lade hoch...',
      'Sending...' => 'Wird gesendet...',
      'Merging...' => 'Zusammenführen...',
      'Merged' => 'Zusammengeführt',
      'Removed' => 'Gelöscht',
      'Posted' => 'Geposted',
      'Linked' => 'Verlinkt',
      'Unlinked' => 'Verknüpfung gelöscht',
      'Done' => 'Fertig',
      'Access denied' => 'Zugriff verweigert',
      'Not found' => 'Nicht gefunden',
      'Access' => 'Berechtigungen',
      'Are you sure?' => 'Sind Sie sicher?',
      'Record has been removed' => 'Datensatz wurde gelöscht',
      'Wrong username/password' => 'Falscher Benutzername/Passwort',
      'Post cannot be empty' => 'Notiz darf nicht leer sein',
      'Removing...' => 'Lösche...',
      'Unlinking...' => 'Lösche Verknüpfung...',
      'Posting...' => 'Poste...',
      'Username can not be empty!' => 'Der Benutzername darf nicht leer sein!',
      'Cache is not enabled' => 'Cache ist nicht aktiviert',
      'Cache has been cleared' => 'Der Cache wurde geleert',
      'Rebuild has been done' => 'Wiederherstellen wurde durchgeführt',
      'Return to Application' => 'Return to Application',
      'Saving...' => 'Speichere...',
      'Modified' => 'Verändert',
      'Created' => 'Erstellt',
      'Create' => 'Erstellen',
      'create' => 'erstellen',
      'Overview' => 'Überblick',
      'Details' => 'Details',
      'Add Field' => 'Feld hinzufügen',
      'Add Dashlet' => 'Dashlet hinzufügen',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Dashboard bearbeiten',
      'Add' => 'Hinzufügen',
      'Add Item' => 'Eintrag hinzufügen',
      'Reset' => 'Zurücksetzen',
      'Menu' => 'Menü',
      'More' => 'Mehr',
      'Search' => 'Suchen',
      'Only My' => 'Nur Meine',
      'Open' => 'Offen',
      'Admin' => 'Admin',
      'About' => 'Über',
      'Refresh' => 'Aktualisieren',
      'Remove' => 'Löschen',
      'Options' => 'Optionen',
      'Username' => 'Benutzername',
      'Password' => 'Passwort',
      'Login' => 'Anmelden',
      'Log Out' => 'Abmelden',
      'Preferences' => 'Benutzereinstellungen',
      'State' => 'Bundesland/Kanton',
      'Street' => 'Straße',
      'Country' => 'Land',
      'City' => 'Ort',
      'PostalCode' => 'PLZ',
      'Followed' => 'Abonniert',
      'Follow' => 'Abonnieren',
      'Followers' => 'Abonnenten',
      'Clear Local Cache' => 'Lokalen Cache leeren',
      'Actions' => 'Aktionen',
      'Delete' => 'Löschen',
      'Update' => 'Aktualisieren',
      'Save' => 'Speichern',
      'Edit' => 'Bearbeiten',
      'View' => 'Ansehen',
      'Cancel' => 'Abbrechen',
      'Apply' => 'Anwenden',
      'Unlink' => 'Link entfernen',
      'Mass Update' => 'Massenänderung',
      'Export' => 'Exportieren',
      'No Data' => 'Keine Daten',
      'No Access' => 'Kein Zugriff',
      'All' => 'Alle',
      'Active' => 'Aktiv',
      'Inactive' => 'Inaktiv',
      'Write your comment here' => 'Notiz hier einfügen',
      'Post' => 'Senden',
      'Stream' => 'Aktivitäten',
      'Show more' => 'Mehr anzeigen',
      'Dashlet Options' => 'Dashlet Optionen',
      'Full Form' => 'Komplettes Formular',
      'Insert' => 'Einfügen',
      'Person' => 'Person',
      'First Name' => 'Vorname',
      'Last Name' => 'Nachname',
      'Original' => 'Original',
      'You' => 'Sie',
      'you' => 'Sie',
      'change' => 'ändern',
      'Change' => 'Ändern',
      'Primary' => 'Primär',
      'Save Filter' => 'Filter speichern',
      'Administration' => 'Administration',
      'Run Import' => 'Import durchführen',
      'Duplicate' => 'Duplizieren',
      'Notifications' => 'Benachrichtigungen',
      'Mark all read' => 'Alle als gelesen markieren',
      'See more' => 'Mehr anzeigen',
      'Today' => 'Heute',
      'Tomorrow' => 'Morgen',
      'Yesterday' => 'Gestern',
      'Submit' => 'Ausführen',
      'Close' => 'Schließen',
      'Yes' => 'Ja',
      'No' => 'Nein',
      'Select All Results' => 'Alle auswählen',
      'Value' => 'Wert',
      'Current version' => 'Aktuelle Version',
      'List View' => 'Listenansicht',
      'Tree View' => 'Baumansicht',
      'Unlink All' => 'Alle Links entfernen',
      'Total' => 'Gesamt',
      'Print to PDF' => 'Als PDF drucken',
      'Default' => 'Standard',
      'Number' => 'Nummer',
      'From' => 'Von',
      'To' => 'Bis',
      'Create Post' => 'Nachricht erstellen',
      'Previous Entry' => 'Vorheriger Eintrag',
      'Next Entry' => 'Nächster Eintrag',
      'View List' => 'Liste ansehen',
      'Attach File' => 'Datei anhängen',
      'Skip' => 'überspringen',
      'Attribute' => 'Attribut',
      'Function' => 'Funktion',
      'Self-Assign' => 'Self-Assign',
      'Self-Assigned' => 'Self-Assigned',
      'Create InboundEmail' => 'Eingehende E-Mail erstellen',
      'Activities' => 'Aktivitäten',
      'History' => 'Verlauf',
      'Attendees' => 'Teilnehmer',
      'Schedule Meeting' => 'Meeting planen',
      'Schedule Call' => 'Anruf planen',
      'Compose Email' => 'E-Mail erstellen',
      'Log Meeting' => 'Meeting erfassen',
      'Log Call' => 'Anruf erfassen',
      'Archive Email' => 'E-Mail archivieren',
      'Create Task' => 'Neue Aufgabe',
      'Tasks' => 'Aufgaben',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Bitte warten...',
      'posting' => 'Poste...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => 'Sind Sie sicher, dass Sie das Formular verlassen wollen?',
      'notModified' => 'Sie haben keine Änderungen am Datensatz vorgenommen',
      'duplicate' => 'Der Datensatz den Sie erstellen wollen, könnte eine Dublette sein',
      'dropToAttach' => 'Anhang hier ablegen',
      'fieldIsRequired' => '{field} wird benötigt',
      'fieldShouldBeEmail' => '{field} muss eine gültige E-Mail sein',
      'fieldShouldBeFloat' => '{field} muss eine gültige Fließkomma Zahl sein',
      'fieldShouldBeInt' => '{field} muss eine gültige Ganzzahl sein',
      'fieldShouldBeDate' => '{field} muss ein gültiges Datum sein',
      'fieldShouldBeDatetime' => '{field} muss ein gültiges Datum/Zeit Feld sein',
      'fieldShouldAfter' => '{field} muss nach {otherField} sein',
      'fieldShouldBefore' => '{field} muss vor {otherField} sein',
      'fieldShouldBeBetween' => '{field} muss zwischen {min} und {max} sein',
      'fieldShouldBeLess' => '{field} muss kleiner als {value} sein',
      'fieldShouldBeGreater' => '{field} muss größer als {value} sein',
      'fieldBadPasswordConfirm' => '{field} falsch bestätigt',
      'resetPreferencesDone' => 'Die Einstellungen wurden auf Standardwerte zurückgesetzt',
      'confirmation' => 'Sind Sie sicher?',
      'unlinkAllConfirmation' => 'Sind Sie sicher, dass Sie die Beziehungen zu allen verbundenen Datensätzen entfernen möchten?',
      'resetPreferencesConfirmation' => 'Sind Sie sicher, dass Sie die Einstellungen auf Standardwerte zurücksetzen wollen?',
      'removeRecordConfirmation' => 'Sind Sie sicher, dass Sie den Eintrag löschen wollen?',
      'unlinkRecordConfirmation' => 'Sind Sie sicher, dass Sie die Beziehung zu dem verbundenen Datensatz entfernen möchten?',
      'removeSelectedRecordsConfirmation' => 'Sind Sie sicher, dass Sie die ausgewählten Sätze löschen möchten?',
      'massUpdateResult' => '{count} Einträge wurden aktualisiert',
      'massUpdateResultSingle' => '{count} Eintrag wurde aktualisiert',
      'noRecordsUpdated' => 'Es wurden keine Einträge aktualisiert',
      'massRemoveResult' => '{count} Einträge wurden gelöscht',
      'massRemoveResultSingle' => '{count} Eintrag wurde gelöscht',
      'noRecordsRemoved' => 'Es wurden keine Einträge gelöscht',
      'clickToRefresh' => 'Klicken um zu aktualisieren',
      'streamPostInfo' => 'Schreiben Sie <strong>@username</strong> um Benutzer in der Notiz hervorzuheben.

Verfügbare Syntax:
`<code>Code</code>`
**<strong>fetter Text</strong>**
*<em>Hervorgehobener Text</em>*
~<del>Durchgestrichen</del>~
> blockquote
[text](url)',
      'writeYourCommentHere' => 'Notiz hier einfügen',
      'writeMessageToUser' => 'Nachricht an {user} schreiben',
      'writeMessageToSelf' => 'Nachricht auf eigene Pinnwand schreiben',
      'typeAndPressEnter' => 'Tippen & Enter drücken',
      'checkForNewNotifications' => 'Nach neuen Benachrichtigungen überprüfen',
      'checkForNewNotes' => 'Nach neuen Aktivitäten überprüfen',
      'internalPost' => 'Beitrag kann nur von internen Benutzern gesehen werden',
      'internalPostTitle' => 'Post is seen only by internal users',
      'done' => 'Fertig',
      'confirmMassFollow' => 'Sind Sie sicher, dass Sie den ausgewählten Datensätzen folgen wollen?',
      'confirmMassUnfollow' => 'Sind Sie sicher, dass Sie den ausgewählten Datensätzen nicht folgen wollen?',
      'massFollowResult' => '{count} Datensätze wird jetzt gefolgt',
      'massUnfollowResult' => '{count} Datensätze wird nicht mehr gefolgt',
      'massFollowResultSingle' => '{count} Datensätze wird jetzt gefolgt',
      'massUnfollowResultSingle' => '{count} Datensätze wird nicht gefolgt',
      'massFollowZeroResult' => 'Es wurde keinem Datensatz gefolgt',
      'massUnfollowZeroResult' => 'Keinem Datensatz wurd nicht gefolgt',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Nur Meine',
      'followed' => 'Abonniert',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Abonniert',
      'all' => 'Alle',
    ),
    'massActions' => 
    array (
      'remove' => 'Löschen',
      'merge' => 'Zusammenführen',
      'massUpdate' => 'Massenänderung',
      'export' => 'Exportieren',
      'follow' => 'Abonnieren',
      'unfollow' => 'nicht gefolgt',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'firstName' => 'Vorname',
      'lastName' => 'Nachname',
      'salutationName' => 'Anrede',
      'assignedUser' => 'Zugewiesener Benutzer',
      'assignedUsers' => 'Zugewiesene Benutzer',
      'emailAddress' => 'E-Mail',
      'assignedUserName' => 'Zugewiesener Benutzername',
      'teams' => 'Teams',
      'createdAt' => 'Erstellt am',
      'modifiedAt' => 'Geändert am',
      'createdBy' => 'Erstellt von',
      'modifiedBy' => 'Geändert von',
      'description' => 'Beschreibung',
      'address' => 'Adresse',
      'phoneNumber' => 'Telefon',
      'phoneNumberMobile' => 'Telefon (Mobil)',
      'phoneNumberHome' => 'Telefon (Privat)',
      'phoneNumberFax' => 'Telefon (Fax)',
      'phoneNumberOffice' => 'Telefon (Büro)',
      'phoneNumberOther' => 'Telefon (Andere)',
      'order' => 'Reihenfolge',
      'parent' => 'Bezieht sich auf',
      'children' => 'Kinder',
      'id' => 'ID',
      'billingAddressCity' => 'Ort',
      'billingAddressCountry' => 'Land',
      'billingAddressPostalCode' => 'PLZ',
      'billingAddressState' => 'Bundesland/Kanton',
      'billingAddressStreet' => 'Straße',
      'billingAddressMap' => 'Karte',
      'addressCity' => 'Ort',
      'addressStreet' => 'Straße',
      'addressCountry' => 'Land',
      'addressState' => 'Bundesland/Kanton',
      'addressPostalCode' => 'PLZ',
      'addressMap' => 'Karte',
      'shippingAddressCity' => 'Ort (Lieferadresse)',
      'shippingAddressStreet' => 'Straße (Lieferadresse)',
      'shippingAddressCountry' => 'Land (Lieferadresse)',
      'shippingAddressState' => 'Bundesland/Kanton (Versand)',
      'shippingAddressPostalCode' => 'PLZ (Lieferadresse)',
      'shippingAddressMap' => 'Karte (Lieferadresse)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Zugewiesener Benutzer',
      'createdBy' => 'Erstellt von',
      'modifiedBy' => 'Geändert von',
      'team' => 'Team',
      'roles' => 'Rollen',
      'teams' => 'Teams',
      'users' => 'Benutzer',
      'parent' => 'Bezieht sich auf',
      'children' => 'Kinder',
      'contacts' => 'Kontakte',
      'opportunities' => 'Verkaufschancen',
      'leads' => 'Interessenten',
      'meetings' => 'Meetings',
      'calls' => 'Anrufe',
      'tasks' => 'Aufgaben',
      'emails' => 'E-Mails',
      'accounts' => 'Firmen',
      'cases' => 'Fälle',
      'documents' => 'Dokumente',
      'account' => 'Firma',
      'opportunity' => 'Verkaufschance',
      'contact' => 'Kontakt',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Aktivitäten',
      'Emails' => 'Mein Posteingang',
      'Records' => 'Record List',
      'Leads' => 'Meine Interessenten',
      'Opportunities' => 'Meine Verkaufschancen',
      'Tasks' => 'Meine Aufgaben',
      'Cases' => 'Meine Fälle',
      'Calendar' => 'Kalender',
      'Calls' => 'Meine Anrufe',
      'Meetings' => 'Meine Meetings',
      'OpportunitiesByStage' => 'Verkaufschancen nach Verkaufsphase',
      'OpportunitiesByLeadSource' => 'Verkaufschancen nach Quelle',
      'SalesByMonth' => 'Umsätze nach Monat',
      'SalesPipeline' => 'Verkaufspipeline',
      'Activities' => 'Meine Aktivitäten',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} wurde Ihnen zugewiesen',
      'emailReceived' => 'E-Mail empfangen von {from}',
      'entityRemoved' => '{user} hat {entityType} {entity} entfernt',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} hat zu {entityType} {entity} notiert',
      'attach' => '{user} hat zu {entityType} {entity} hinzugefügt',
      'status' => '{user} hat {field} von {entityType} {entity} aktualisiert',
      'update' => '{user} hat {entityType} {entity} aktualisiert',
      'postTargetTeam' => '{user} hat an {target} geschrieben',
      'postTargetTeams' => '{user} hat an Teams {target} geschrieben',
      'postTargetPortal' => '{user} hat an Portal {target} geschrieben',
      'postTargetPortals' => '{user} hat an Portale {target} geschrieben',
      'postTarget' => '{user} hat an {target} geschrieben',
      'postTargetYou' => '{user} hat an Sie geschrieben',
      'postTargetYouAndOthers' => '{user} hat an {target} und an Sie geschrieben',
      'postTargetAll' => '{user} hat an alle geschrieben',
      'postTargetSelf' => '{user} hat an sich selbst geschrieben',
      'postTargetSelfAndOthers' => '{user} hat an {target} und an siuch selbst geschrieben',
      'mentionInPost' => '{user} erwähnte {mentioned} in {entityType} {entity}',
      'mentionYouInPost' => '{user} erwähnte Sie in {entityType} {entity}',
      'mentionInPostTarget' => '{user} erwähnte {mentioned} in Nachricht',
      'mentionYouInPostTarget' => '{user} erwähnte Sie in Nachricht an {target}',
      'mentionYouInPostTargetAll' => '{user} erwähnte Sie in Nachricht an alle',
      'mentionYouInPostTargetNoTarget' => '{user} erwähnte Sie in Nachricht',
      'create' => '{user} hat {entityType} {entity} erstellt',
      'createThis' => '{user} hat {entityType} erstellt',
      'createAssignedThis' => '{user} hat {entityType} erstellt und an {assignee} zugewiesen',
      'createAssigned' => '{user} hat {entityType} {entity} erstellt und an {assignee} zugewiesen',
      'createAssignedYou' => '{user} hat ihnen die {entityType} {entity} zugewiesen',
      'createAssignedThisSelf' => '{user} erstellt {entityType} mit eigener Zuordnung',
      'createAssignedSelf' => '{user} erstellt {entityType} {entity} mit eigener Zuordnung',
      'assign' => '{user} hat {entityType} {entity} an {assignee} zugewiesen',
      'assignThis' => '{user} hat {entityType} an {assignee} zugewiesen',
      'assignYou' => '{entityType} {entity} wurde Ihnen zugewiesen',
      'assignThisVoid' => '{user} löst die Zuordnung {entityType}',
      'assignVoid' => '{user} löst die Zuordnung {entityType} {entity}',
      'assignThisSelf' => '{user} hat sich selbst {entityType} zugewiesen',
      'assignSelf' => '{user} hat sich {entityType} {entity} selbst zugewiesen',
      'postThis' => '{user} hat notiert',
      'attachThis' => '{user} hat hinzugefügt',
      'statusThis' => '{user} hat {field} aktualisiert',
      'updateThis' => '{user} hat diese(s/n) {entityType} aktualisiert',
      'createRelatedThis' => '{user} hat {relatedEntityType} {relatedEntity} verbunden mit dieser/m {entityType} erstellt',
      'createRelated' => '{user} hat {relatedEntityType} {relatedEntity} verbunden mit {entityType} {entity} erstellt',
      'relate' => '{user} hat {relatedEntityType} {relatedEntity} mit {entityType} {entity} verbunden',
      'relateThis' => '{user} hat {relatedEntityType} {relatedEntity} mit diese/r/m {entityType} verbunden',
      'emailReceivedFromThis' => 'E-Mail empfangen von {from}',
      'emailReceivedInitialFromThis' => 'E-Mail empfangen von {from}, ein(e) {entityType} wurde erstellt',
      'emailReceivedThis' => 'E-Mail empfangen',
      'emailReceivedInitialThis' => 'E-Mail empfangen ein(e) {entityType} wurde erstellt',
      'emailReceivedFrom' => 'E-Mail empfangen von {from}, verbunden mit {entityType} {entity}',
      'emailReceivedFromInitial' => 'E-Mail empfangen von {from}, {entityType} {entity} wurde erstellt',
      'emailReceived' => 'E-Mail empfangen verbunden mit {entityType} {entity}',
      'emailReceivedInitial' => 'E-Mail empfangen: {entityType} {entity} wurde erstellt',
      'emailReceivedInitialFrom' => 'E-Mail empfangen von {from}, {entityType} {entity} wurde erstellt',
      'emailSent' => '{by} hat eine E-Mail verbunden mit {entityType} {entity} gesendet',
      'emailSentThis' => '{by} hat eine E-Mail gesendet',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} hat nach {target} und sich selbst gepostet',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} hat nach {target} und sich selbst gepostet',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Januar',
        1 => 'Februar',
        2 => 'März',
        3 => 'April',
        4 => 'Mai',
        5 => 'Juni',
        6 => 'Juli',
        7 => 'August',
        8 => 'September',
        9 => 'Oktober',
        10 => 'November',
        11 => 'Dezember',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mär',
        3 => 'Apr',
        4 => 'Mai',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Okt',
        10 => 'Nov',
        11 => 'Dez',
      ),
      'dayNames' => 
      array (
        0 => 'Sonntag',
        1 => 'Montag',
        2 => 'Dienstag',
        3 => 'Mittwoch',
        4 => 'Donnerstag',
        5 => 'Freitag',
        6 => 'Samstag',
      ),
      'dayNamesShort' => 
      array (
        0 => 'So',
        1 => 'Mo',
        2 => 'Di',
        3 => 'Mi',
        4 => 'Do',
        5 => 'Fr',
        6 => 'Sa',
      ),
      'dayNamesMin' => 
      array (
        0 => 'So',
        1 => 'Mo',
        2 => 'Di',
        3 => 'Mi',
        4 => 'Do',
        5 => 'Fr',
        6 => 'Sa',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Herr',
        'Mrs.' => 'Frau',
        'Ms.' => 'Frau',
        'Dr.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Aserbaidschanisch',
        'be_BY' => 'Weissrussisch',
        'bg_BG' => 'Bulgarisch',
        'bn_IN' => 'Benglaisch',
        'bs_BA' => 'Bosnisch',
        'ca_ES' => 'Katalanisch',
        'cs_CZ' => 'Tschechisch',
        'cy_GB' => 'Walisisch',
        'da_DK' => 'Dänisch',
        'de_DE' => 'Deutsch',
        'el_GR' => 'Griechisch',
        'en_GB' => 'Englisch (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'Englisch (US)',
        'es_ES' => 'Spanisch (ES)',
        'et_EE' => 'Estnisch',
        'eu_ES' => 'Baskisch',
        'fa_IR' => 'Persisch',
        'fi_FI' => 'Finnisch',
        'fo_FO' => 'Färöisch',
        'fr_CA' => 'Französisch (CN)',
        'fr_FR' => 'Französisch (FR)',
        'ga_IE' => 'Irisch',
        'gl_ES' => 'Galizisch',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebräisch',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Kroatisch',
        'hu_HU' => 'Ungarisch',
        'hy_AM' => 'Armenisch',
        'id_ID' => 'Indonesisch',
        'is_IS' => 'Isländisch',
        'it_IT' => 'Italienisch',
        'ja_JP' => 'Japanisch',
        'ka_GE' => 'Georgisch',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Koreanisch',
        'ku_TR' => 'Kurdisch',
        'lt_LT' => 'Litauisch',
        'lv_LV' => 'Lettisch',
        'mk_MK' => 'Mazedonisch',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malaiisch',
        'nb_NO' => 'Norwegisch Bokmál',
        'nn_NO' => 'Norwegisch Nynorsk',
        'ne_NP' => 'Nepalesisch',
        'nl_NL' => 'Niederländisch',
        'pa_IN' => 'Pandschabisch',
        'pl_PL' => 'Polnisch',
        'ps_AF' => 'Paschtunisch',
        'pt_BR' => 'Portugiesisch (BR)',
        'pt_PT' => 'Portugiesisch (PT)',
        'ro_RO' => 'Rumänisch',
        'ru_RU' => 'Russisch',
        'sk_SK' => 'Slowakisch',
        'sl_SI' => 'Slowenisch',
        'sq_AL' => 'Albanisch',
        'sr_RS' => 'Serbisch',
        'sv_SE' => 'Schwedisch',
        'sw_KE' => 'Suaheli',
        'ta_IN' => 'Tamilisch',
        'te_IN' => 'Telugisch',
        'th_TH' => 'Thailändisch',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Tükisch',
        'uk_UA' => 'Ukrainisch',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamesisch',
        'zh_CN' => 'Chinesisch vereinfacht (CN)',
        'zh_HK' => 'Chinesisch traditionell (HK)',
        'zh_TW' => 'Chinesisch traditionell (TW)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Am',
        'notOn' => 'Nicht am',
        'after' => 'Nach',
        'before' => 'Vor',
        'between' => 'Zwischen',
        'today' => 'Heute',
        'past' => 'Vergangenheit',
        'future' => 'Zukunft',
        'currentMonth' => 'Aktuelles Monat',
        'lastMonth' => 'Letzten Monat',
        'currentQuarter' => 'Aktuelles Quartal',
        'lastQuarter' => 'Letztes Quartal',
        'currentYear' => 'Aktuelles Jahr',
        'lastYear' => 'Letztes Jahr',
        'lastSevenDays' => 'Letzten 7 Tage',
        'lastXDays' => 'Letzten X Tage',
        'nextXDays' => 'Nächsten X Tage',
        'ever' => 'Jemals',
        'isEmpty' => 'Ist leer',
        'olderThanXDays' => 'älter als X Tage',
        'afterXDays' => 'nach X Tagen',
      ),
      'searchRanges' => 
      array (
        'is' => 'Ist',
        'isEmpty' => 'Ist leer',
        'isNotEmpty' => 'Ist nicht leer',
        'isOneOf' => 'Ist eines(r) von',
        'isFromTeams' => 'Ist von Team',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Gleich',
        'like' => 'Wie (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Beginnt mit',
        'endsWith' => 'Endet mit',
        'contains' => 'Enthält',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Ist leer',
        'isNotEmpty' => 'Ist nicht leer',
        'notEquals' => 'Nicht gleich',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Gleich',
        'notEquals' => 'Nicht gleich',
        'greaterThan' => 'Größer als',
        'lessThan' => 'Weniger als',
        'greaterThanOrEquals' => 'Größer oder gleich als',
        'lessThanOrEquals' => 'Weniger oder gleich als',
        'between' => 'Zwischen',
        'isEmpty' => 'Ist leer',
        'isNotEmpty' => 'Ist nicht leer',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Kein(e)',
        '0.5' => '30 Sekunden',
        1 => '1 Minute',
        2 => '2 Minuten',
        5 => '5 Minuten',
        10 => '10 Minuten',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Telefon Mobil',
        'Office' => 'Telefon Büro',
        'Fax' => 'Fax',
        'Home' => 'Telefon Privat',
        'Other' => 'Telefon Andere',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Popup',
        'Email' => 'E-Mail',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Sie finden die Übersetzung hier: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Fett',
          'italic' => 'Kursiv',
          'underline' => 'Unterstrichen',
          'strike' => 'Durchgestrichen',
          'clear' => 'Font Stil entfernen',
          'height' => 'Zeilenhöhe',
          'name' => 'Schriftfamilie',
          'size' => 'Schriftgröße',
        ),
        'image' => 
        array (
          'image' => 'Bild',
          'insert' => 'Bild einfügen',
          'resizeFull' => 'Originalgröße',
          'resizeHalf' => 'Größe 1/2',
          'resizeQuarter' => 'Größe 1/4',
          'floatLeft' => 'Linksbündig',
          'floatRight' => 'Rechtsbündig',
          'floatNone' => 'Kein Textfluss',
          'dragImageHere' => 'Bild hier ablegen',
          'selectFromFiles' => 'Wählen Sie eine Datei aus',
          'url' => 'Grafik URL',
          'remove' => 'Grafik entfernen',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Link einfügen',
          'unlink' => 'Link entfernen',
          'edit' => 'Bearbeiten',
          'textToDisplay' => 'Anzeigetext',
          'url' => 'Ziel des Links?',
          'openInNewWindow' => 'In einem neuen Fenster öffnen',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Video einfügen',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram oder DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabelle',
        ),
        'hr' => 
        array (
          'insert' => 'Eine horizontale Linie einfügen',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'Zitat',
          'pre' => 'Quellcode',
          'h1' => 'Überschrift 1',
          'h2' => 'Überschrift 2',
          'h3' => 'Überschrift 3',
          'h4' => 'Überschrift 4',
          'h5' => 'Überschrift 5',
          'h6' => 'Überschrift 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Unsortierte Liste',
          'ordered' => 'Nummerierte Liste',
        ),
        'options' => 
        array (
          'help' => 'Hilfe',
          'fullscreen' => 'Vollbild',
          'codeview' => 'HTML-Code anzeigen',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Absatz',
          'outdent' => 'Ausrückung',
          'indent' => 'Einrückung',
          'left' => 'Links ausrichten',
          'center' => 'Zentriert ausrichten',
          'right' => 'Rechts ausrichten',
          'justify' => 'Blocksatz',
        ),
        'color' => 
        array (
          'recent' => 'Letzte Farbe',
          'more' => 'Mehr Farben',
          'background' => 'Hintergrundfarbe',
          'foreground' => 'Schriftfarbe',
          'transparent' => 'Transparenz',
          'setTransparent' => 'Transparenz setzen',
          'reset' => 'Zurücksetzen',
          'resetToDefault' => 'Zurücksetzen auf Standard',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Tastaturkürzel',
          'close' => 'Schließen',
          'textFormatting' => 'Textformatierung',
          'action' => 'Aktion',
          'paragraphFormatting' => 'Absatzformatierung',
          'documentStyle' => 'Dokumentenstil',
        ),
        'history' => 
        array (
          'undo' => 'Rückgängig',
          'redo' => 'Wiederholen',
        ),
      ),
    ),
    'themes' => 
    array (
      'Espo' => 'Espo',
      'EspoRtl' => 'Espo (rechtsbündig)',
      'Sakura' => 'Sakura',
      'EspoVertical' => 'Espo w/ sidebar',
      'SakuraVertical' => 'Sakura w/ sidebar',
      'Violet' => 'Violet',
      'VioletVertical' => 'Violet w/ sidebar',
      'Hazyblue' => 'Hazyblue',
      'HazyblueVertical' => 'Hazyblue w/ sidebar',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Import rückgängig machen',
      'Return to Import' => 'Zurück zum Import',
      'Run Import' => 'Import durchführen',
      'Back' => 'Zurück',
      'Field Mapping' => 'Feldzuordnung',
      'Default Values' => 'Standardwerte',
      'Add Field' => 'Feld hinzufügen',
      'Created' => 'Erstellt',
      'Updated' => 'Aktualisiert',
      'Result' => 'Resultat',
      'Show records' => 'Datensätze zeigen',
      'Remove Duplicates' => 'Duplikate entfernen',
      'importedCount' => 'Importiert (Anzahl)',
      'duplicateCount' => 'Duplikate (Anzahl)',
      'updatedCount' => 'Aktualisiert (Anzahl)',
      'Create Only' => 'Nur erstellen',
      'Create and Update' => 'Erstellen und aktualisieren',
      'Update Only' => 'Nur aktualisieren',
      'Update by' => 'Aktualisieren durch',
      'Set as Not Duplicate' => 'Als keine Dublette markieren',
      'File (CSV)' => 'Datei (CSV)',
      'First Row Value' => 'Wert erste Zeile',
      'Skip' => 'Überspringen',
      'Header Row Value' => 'Wert Kopfzeile',
      'Field' => 'Feld',
      'What to Import?' => 'Was soll importiert werden?',
      'Entity Type' => 'Entitätstyp',
      'What to do?' => 'Was soll gemacht werden?',
      'Properties' => 'Eigenschaften',
      'Header Row' => 'Kopfzeile',
      'Person Name Format' => 'Namensformat Person',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Feldbegrenzer',
      'Date Format' => 'Datumsformat',
      'Decimal Mark' => 'Dezimaltrennzeichen',
      'Text Qualifier' => 'Textbegrenzer',
      'Time Format' => 'Zeitformat',
      'Currency' => 'Währung',
      'Preview' => 'Vorschau',
      'Next' => 'Weiter',
      'Step 1' => 'Schritt 1',
      'Step 2' => 'Schritt 2',
      'Double Quote' => 'Anführungszeichen',
      'Single Quote' => 'Einfaches Hochkomma',
      'Imported' => 'Importiert',
      'Duplicates' => 'Duplikate',
      'Skip searching for duplicates' => 'Duplikatssuche überspringen',
      'Timezone' => 'Timezone',
    ),
    'messages' => 
    array (
      'utf8' => 'Sollte UTF-8 kodiert sein',
      'duplicatesRemoved' => 'Duplikate entfernt',
      'inIdle' => 'Ausführen im Leerlauf (für große Datenmengen über cron)',
    ),
    'fields' => 
    array (
      'file' => 'Datei',
      'entityType' => 'Entitätstyp',
      'imported' => 'Importierte Datensätze',
      'duplicates' => 'Doppelte Datensätze',
      'updated' => 'Aktualisierte Datensätze',
      'status' => 'Status',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Fehler',
        'In Process' => 'In Arbeit',
        'Complete' => 'Fertig',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail Adresse',
      'team' => 'Target Team',
      'status' => 'Status',
      'assignToUser' => 'Mit Benutzer verknüpfen',
      'host' => 'Host',
      'username' => 'Benutzername',
      'password' => 'Passwort',
      'port' => 'Port',
      'monitoredFolders' => 'Überwachte Ordner',
      'trashFolder' => 'Papierkorb',
      'ssl' => 'SSL',
      'createCase' => 'Fall erstellen',
      'reply' => 'Autoantwort',
      'caseDistribution' => 'Fall Verteilung',
      'replyEmailTemplate' => 'Vorlage E-Mail Antwort',
      'replyFromAddress' => 'Rückantwortadresse',
      'replyToAddress' => 'Antwort an Adresse',
      'replyFromName' => 'Absendername für Rückantwort',
      'targetUserPosition' => 'Position Zielbenutzer',
      'fetchSince' => 'Holen seit',
      'addAllTeamUsers' => 'Für alle Teambenutzer',
      'teams' => 'Teams',
    ),
    'tooltips' => 
    array (
      'reply' => 'Benachrichtigt E-Mail Empfänger beim Empfang der Nachrichten.

 Nur eine E-Mail pro Empfänger wird zu einer Zeit versendet um eine Endlosschleife zu verhindern.',
      'createCase' => 'Fall aus eingehender E-Mail automatisch erstellen.',
      'replyToAddress' => 'Geben Sie die E-Mail Adresse dieser Mailbox an um Antworten hier zu empfangen.',
      'caseDistribution' => 'Wie Fälle zugewiesen werden. Entweder direkt dem Benutzer oder im Team.',
      'assignToUser' => 'User cases will be assigned to.',
      'team' => 'Team cases will be assigned to.',
      'teams' => 'Teams emails will be assigned to.',
      'targetUserPosition' => 'Bestimmen Sie die Position der Benutzer die Fälle zugewiesen bekommen.',
      'addAllTeamUsers' => 'Emails will be appearing in Inbox of all users of specified teams.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
    ),
    'links' => 
    array (
      'filters' => 'Filter',
      'emails' => 'E-Mails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
      'caseDistribution' => 
      array (
        '' => 'Kein(e)',
        'Direct-Assignment' => 'Direkte Zuordnung',
        'Round-Robin' => 'Umlauf-Verfahren',
        'Least-Busy' => 'Geringste Auslastung',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'E-Mail Konto erstellen',
      'IMAP' => 'IMAP',
      'Actions' => 'Aktionen',
      'Main' => 'Hauptteil',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kann keine Verbindung zum IMAP Server herstellen',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Aktiv',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Geheimnis',
      'redirectUri' => 'Weiterleitungs URI',
      'apiKey' => 'API Key',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
      'IctBroadcastconfig' => 'ICTBroadcast Config',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Wählen Sie eine Integration aus dem Menü.',
      'noIntegrations' => 'Keine Integration verfügbar.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Holen Sie die OAuth 2.0 Credentials über die Google Developers Console.</b></p><p>Besuchen Sie <a href="https://console.developers.google.com/project">die Google Developers Console</a> um OAuth 2.0 Credentials wie eine Client ID und Client Geheimnis zu erhalten die sowohl Google als auch EspoCRM bekannt sind.</p>',
      'GoogleMaps' => '<p>API Key <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">hier</a> beantragen.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executeTime' => 'Ausführen um',
      'attempts' => 'Verbleibende Versuche',
      'failedAttempts' => 'Fehlgeschlagene Versuche',
      'serviceName' => 'Service',
      'method' => 'Methode',
      'scheduledJob' => 'Geplante Aufgabe',
      'data' => 'Daten',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Schwebend',
        'Success' => 'Erfolg',
        'Running' => 'Läuft',
        'Failed' => 'Fehlgeschlagen',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Breite (%)',
      'link' => 'Link',
      'notSortable' => 'Nicht sortierbar',
      'align' => 'Ausrichten',
      'panelName' => 'Panel Name',
      'style' => 'Style',
      'sticked' => 'Gepinnt',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Links',
        'right' => 'Rechts',
      ),
      'style' => 
      array (
        'default' => 'Standard',
        'success' => 'Erfolgreich',
        'danger' => 'Gefahr',
        'info' => 'Info',
        'warning' => 'Warnung',
        'primary' => 'Primär',
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Senden',
      'attachments' => 'Anhänge',
      'targetType' => 'Ziel',
      'teams' => 'Teams',
      'users' => 'Benutzer',
      'portals' => 'Portale',
      'type' => 'Type',
      'isGlobal' => 'Is Global',
      'isInternal' => 'Is Internal (for internal users)',
      'related' => 'Related',
      'createdByGender' => 'Created By Gender',
      'data' => 'Data',
      'number' => 'Number',
    ),
    'filters' => 
    array (
      'all' => 'Alle',
      'posts' => 'Posts',
      'updates' => 'Aktualisierungen',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'An sich selbst',
        'users' => 'An (einen) bestimmte(n) Benutzer',
        'teams' => 'An (ein) bestimmte(s) Team(s)',
        'all' => 'An alle Benutzer',
        'portals' => 'An alle Portal Benutzer',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Schreiben Sie hier Ihre Nachricht',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Rollen',
      'isActive' => 'Ist aktiv',
      'isDefault' => 'Ist Standard',
      'tabList' => 'Menüoptionen',
      'quickCreateList' => 'Liste Schnellerstellung',
      'companyLogo' => 'Logo',
      'theme' => 'Design',
      'language' => 'Sprache',
      'dashboardLayout' => 'Dashboard Layout',
      'dateFormat' => 'Datumsformat',
      'timeFormat' => 'Zeitformat',
      'timeZone' => 'Zeitzone',
      'weekStart' => 'Erster Tag der Woche',
      'defaultCurrency' => 'Standardwährung',
      'customUrl' => 'Benutzerdefinierte URL',
      'customId' => 'Benutzerdefinierte ID',
    ),
    'links' => 
    array (
      'users' => 'Benutzer',
      'portalRoles' => 'Rollen',
      'notes' => 'Notizen',
      'articles' => 'Wissensbasis Artikel',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Die spezifizierten Portal Rollen werden auf alle Benutzer dieses Portals angewendet.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Portal erstellen',
      'User Interface' => 'Benutzeroberfläche',
      'General' => 'Allgemein',
      'Settings' => 'Einstellungen',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
    ),
    'links' => 
    array (
      'users' => 'Benutzer',
    ),
    'tooltips' => 
    array (
    ),
    'labels' => 
    array (
      'Access' => 'Berechtigungen',
      'Create PortalRole' => 'Portal Rolle erstellen',
      'Scope Level' => 'Berechtigungsumfang',
      'Field Level' => 'Feldebene',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Erstelle Portal User',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Datumsformat',
      'timeFormat' => 'Zeitformat',
      'timeZone' => 'Zeitzone',
      'weekStart' => 'Erster Tag der Woche',
      'thousandSeparator' => 'Tausendertrennzeichen',
      'decimalMark' => 'Dezimaltrennzeichen',
      'defaultCurrency' => 'Standardwährung',
      'currencyList' => 'Währungsliste',
      'language' => 'Sprache',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Authentifizierung',
      'smtpSecurity' => 'Transportsicherheit',
      'smtpUsername' => 'Benutzername',
      'emailAddress' => 'E-Mail',
      'smtpPassword' => 'Passwort',
      'smtpEmailAddress' => 'E-Mail Adresse',
      'exportDelimiter' => 'Export Trennzeichen',
      'receiveAssignmentEmailNotifications' => 'E-Mail Nachrichten bei Zuweisungen erhalten',
      'receiveMentionEmailNotifications' => 'E-Mail-Benachrichtigungen über Erwähnungen in Beiträgen',
      'receiveStreamEmailNotifications' => 'E-Mail-Benachrichtigungen über Beiträge und Statusaktualisierungen',
      'autoFollowEntityTypeList' => 'Automatisches Abonnieren',
      'signature' => 'E-Mail Signatur',
      'dashboardTabList' => 'Menüliste',
      'defaultReminders' => 'Vorgaben für Benachrichtigungen',
      'theme' => 'Design',
      'useCustomTabList' => 'Benutzerdefinierte Menüliste',
      'tabList' => 'Menüliste',
      'emailReplyToAllByDefault' => 'Standardmäßig Allen antworten',
      'dashboardLayout' => 'Dashboard Layout',
      'emailReplyForceHtml' => 'E-Mail Antwort als HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Zugwiesenen Benutzer nicht ausfüllen wenn optional',
      'followEntityOnStreamPost' => 'Auto-follow entity after posting in Stream',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sonntag',
        1 => 'Montag',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Benachrichtigungen',
      'User Interface' => 'Benutzeroberfläche',
      'SMTP' => 'SMTP',
      'Misc' => 'Verschiedenes',
      'Locale' => 'Lokalisierungs-Einstellungen',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Der Benutzer abonniert automatisch alle neuen Einträge der gewählten Entitätstypen, sieht Neuigkeiten in den Aktivitäten und erhält Benachrichtigungen.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'roles' => 'Rollen',
      'assignmentPermission' => 'Zuweisungsberechtigung',
      'userPermission' => 'Benutzerberechtigung',
      'portalPermission' => 'Portal Berechtigungen',
    ),
    'links' => 
    array (
      'users' => 'Benutzer',
      'teams' => 'Teams',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Ermöglicht das Recht der Zuweisung von Datensätzen und das Senden von Nachrichten an andere Benutzer zu beschränken

Alle - Keine Einschränkung

Team - Kann an Benutzer des eigenen Teams zuweisen/senden

Nein - Kann nur sich selbst zuweisen/senden',
      'userPermission' => 'Erlaubt Benutzer zu beschränken, die Aktivitäten, Kalendereinträge und Aktivitäten anderer Benutzer zu sehen.

Alle - Kann alle sehen

Team - Kann nur Aktivitäten der Benutzer im eigenen Team sehen

Nein - Kann keine anderen Aktivitäten sehen',
      'portalPermission' => 'Gibt Zugang zu Portalinformationen, die Möglichkeit Kontakte zu Portalbenutzern zu konvertieren und erlaubt das Senden von Nachrichten an Portalbenutzer',
    ),
    'labels' => 
    array (
      'Access' => 'Berechtigungen',
      'Create Role' => 'Rolle erstellen',
      'Scope Level' => 'Berechtigungsumfang',
      'Field Level' => 'Feldebene',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'nicht gesetzt',
        'enabled' => 'Aktiv',
        'disabled' => 'Inaktiv',
      ),
      'levelList' => 
      array (
        'all' => 'Alle',
        'team' => 'Team',
        'account' => 'Firma',
        'contact' => 'Kontakt',
        'own' => 'Eigene',
        'no' => 'Nein',
        'yes' => 'Ja',
        'not-set' => 'nicht gesetzt',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Lesen',
      'edit' => 'Bearbeiten',
      'delete' => 'Löschen',
      'stream' => 'Aktivitäten',
      'create' => 'Erstellen',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Alle Änderungen werden erst nach Leeren des Caches wirksam.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'job' => 'Job',
      'scheduling' => 'Planung',
    ),
    'links' => 
    array (
      'log' => 'Protokoll',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Geplante Aufgabe erstellen',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Aufräumen',
        'CheckInboundEmails' => 'Gruppen E-Mail Konten überprüfen',
        'CheckEmailAccounts' => 'Persönliche E-Mail Konten prüfen',
        'SendEmailReminders' => 'E-Mail Erinnerungen senden',
        'AuthTokenControl' => 'Auth Token-Überwachung',
        'SendEmailNotifications' => 'E-Mail-Benachrichtigungen senden',
        'ProcessMassEmail' => 'Massen E-Mails senden',
        'ControlKnowledgeBaseArticleStatus' => 'Wissensbasis Artikel Status kontrollieren',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Hinweis: Fügen Sie diese Zeile zu Ihrer Crontab Datei hinzu, um geplante Aufgaben durchführen zu können:',
        'mac' => 'Hinweis: Fügen Sie diese Zeile zu Ihrer Crontab Datei hinzu, um geplante Aufgaben durchführen zu können:',
        'windows' => 'Hinweis: Erstellen Sie eine Stapeldatei mit den folgenden Kommandos um geplante Aufgaben mit dem Windows Aufgabenplaner durchzuführen:',
        'default' => 'Hinweis: fügen Sie dieses Kommando zum CronJob hinzu (Geplante Aufgaben):',
      ),
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Definiert wann und wie oft ein Job läuft

*/5 * * * * - alle 5 Minuten

0 */2 * * * - alle 2 Stunden

30 1 * * * - um 01:30 einmal am Tag

0 0 1 * * - am ersten Tag des Monats',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Ausführungszeit',
      'target' => 'Ziel',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Benutzer Cache',
      'dateFormat' => 'Datumsformat',
      'timeFormat' => 'Zeitformat',
      'timeZone' => 'Zeitzone',
      'weekStart' => 'Erster Tag der Woche',
      'thousandSeparator' => 'Tausendertrennzeichen',
      'decimalMark' => 'Dezimaltrennzeichen',
      'defaultCurrency' => 'Standardwährung',
      'baseCurrency' => 'Basiswährung',
      'currencyRates' => 'Wechselkurse',
      'currencyList' => 'Währungsliste',
      'language' => 'Sprache',
      'companyLogo' => 'Firmenlogo',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Authentifizierung',
      'smtpSecurity' => 'Transportsicherheit',
      'smtpUsername' => 'Benutzername',
      'emailAddress' => 'E-Mail',
      'smtpPassword' => 'Passwort',
      'outboundEmailFromName' => 'Absendername',
      'outboundEmailFromAddress' => 'Absenderadresse',
      'outboundEmailIsShared' => 'Kann von allen Benutzern verwendet werden',
      'recordsPerPage' => 'Datensätze pro Seite',
      'recordsPerPageSmall' => 'Datensätze pro Seite (Klein)',
      'tabList' => 'Menüliste',
      'quickCreateList' => 'Liste Schnellerstellung',
      'exportDelimiter' => 'Export Trennzeichen',
      'globalSearchEntityList' => 'Entitäten für globale Suche',
      'authenticationMethod' => 'Authentifizierungs Methode',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Authentifizierung',
      'ldapUsername' => 'Vollständiger Benutzer-DN',
      'ldapPassword' => 'Passwort',
      'ldapBindRequiresDn' => 'Bind erfordert DN',
      'ldapBaseDn' => 'Basis DN',
      'ldapAccountCanonicalForm' => 'Kanonische Form Konto',
      'ldapAccountDomainName' => 'Domain Name Konto',
      'ldapTryUsernameSplit' => 'Benutzernamen Split versuchen',
      'ldapCreateEspoUser' => 'Benutzer in EspoCRM erstellen',
      'ldapSecurity' => 'Transportsicherheit',
      'ldapUserLoginFilter' => 'Login Filter benutzen',
      'ldapAccountDomainNameShort' => 'Domain Name Konto kurz',
      'ldapOptReferrals' => 'Opt Referrals',
      'ldapUserNameAttribute' => 'Benutzername Attribut',
      'ldapUserObjectClass' => 'Objektklasse',
      'ldapUserTitleAttribute' => 'Titel Attribut',
      'ldapUserFirstNameAttribute' => 'Vorname Attribut',
      'ldapUserLastNameAttribute' => 'Nachname Attribut',
      'ldapUserEmailAddressAttribute' => 'E-Mail Adresse Attribut',
      'ldapUserTeams' => 'Teams',
      'ldapUserDefaultTeam' => 'Standard-Team',
      'ldapUserPhoneNumberAttribute' => 'Rufnummer Attribut',
      'exportDisabled' => 'Export deaktivieren (nur Admin ist berechtigt)',
      'assignmentNotificationsEntityList' => 'Entitäten über die bei Zuweisung benachrichtigt werden soll',
      'assignmentEmailNotifications' => 'E-Mail Nachrichten bei Zuweisungen senden',
      'assignmentEmailNotificationsEntityList' => 'Entitäten über die mit E-Mail bei Zuweisung benachrichtigt werden soll',
      'streamEmailNotifications' => 'Benachrichtigungen in den Aktivitäten für interne Benutzer',
      'portalStreamEmailNotifications' => 'Benachrichtigungen in den Aktivitäten für Portalnutzer',
      'streamEmailNotificationsEntityList' => 'Umfang der E-Mail-Benachrichtigungen über Aktivitäten',
      'b2cMode' => 'B2C Modus',
      'avatarsDisabled' => 'Avatare deaktivieren',
      'followCreatedEntities' => 'Eigene Einträge abonnieren',
      'displayListViewRecordCount' => 'Gesamtanzahl anzeigen (in Listenansicht)',
      'theme' => 'Design',
      'userThemesDisabled' => 'Benutzerdesigns deaktivieren',
      'emailMessageMaxSize' => 'Max. E-Mail Größe (Mb)',
      'massEmailMaxPerHourCount' => 'Max. Anzahl E-Mails pro Stunde',
      'personalEmailMaxPortionSize' => 'Max. E-Mail Größe für das Holen persönlicher Konten',
      'inboundEmailMaxPortionSize' => 'Max. E-Mail Größe für das Holen von Gruppenkonten',
      'maxEmailAccountCount' => 'Max. Anzahl von E-Mail Konten pro Benutzer',
      'authTokenLifetime' => 'Gültigkeitsdauer des Auth Token (Stunden)',
      'authTokenMaxIdleTime' => 'Automatische Abmeldung bei Untätigkeit (Stunden)',
      'dashboardLayout' => 'Dashboard Übersicht (Standard)',
      'siteUrl' => 'Webadresse',
      'addressPreview' => 'Adressvorschau',
      'addressFormat' => 'AddressFormat',
      'notificationSoundsDisabled' => 'Benachrichtigungstöne deaktivieren',
      'applicationName' => 'Name der Applikation',
      'calendarEntityList' => 'Kalenderentitätsliste',
      'mentionEmailNotifications' => 'E-Mail Benachrichtigungen für Erwähnungen in Beträgen',
      'massEmailDisableMandatoryOptOutLink' => 'Verpflichtenden Opt-out Link deaktivieren',
      'activitiesEntityList' => 'Aktivitätenentitätsliste',
      'historyEntityList' => 'Verlaufsentitätenliste',
      'currencyFormat' => 'Currency Format',
      'currencyDecimalPlaces' => 'Currency Decimal Places',
      'aclStrictMode' => 'ACL Strict Mode',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sonntag',
        1 => 'Montag',
      ),
      'currencyFormat' => 
      array (
        1 => '10 USD',
        2 => '$10',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'Anzahl Sätze In Listenansichten (Standard) ',
      'recordsPerPageSmall' => 'Anzahl Sätze in Beziehungssubpanels',
      'outboundEmailIsShared' => 'Benutzern gestatten, E-Mails über dieses SMTP Konto zu senden',
      'followCreatedEntities' => 'Benutzer abonnieren automatisch alle Einträge, die sie selbst erstellen.',
      'emailMessageMaxSize' => 'Alle eingehenden E-Mails die eine angegebene Größe übersteigen, werden übersprungen',
      'authTokenLifetime' => 'Bestimmt wie lange ein Token existiert.
0 - Kein Ablauf',
      'authTokenMaxIdleTime' => 'Bestimmt wie lange ein Token nach dem letzten Zugriff existiert
0 - Kein Ablauf',
      'userThemesDisabled' => 'Wenn ausgewählt können Benutzer ihr Design nicht individuell auswählen.',
      'ldapUsername' => 'Vollständiger DN des Systemnutzers um LDAP Suchen durchzuführen (z.B. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan").',
      'ldapPassword' => 'Das Passwort für den Zugriff auf den LDAP Server.',
      'ldapAuth' => 'Kontoinformationen für den LDAP Zugriff.',
      'ldapUserNameAttribute' => 'Das Attribut, das den Nutzer identifiziert.
Zum Beispiel "userPrincipalName" oder "sAMAccountName" für Active Directory, "uid" für OpenLDAP.',
      'ldapUserObjectClass' => 'Objektklassenattribut für die Benutzersuche (z.B. "person" für AD, "inetOrgPerson" für OpenLDAP).',
      'ldapAccountCanonicalForm' => 'Format der Accountinformationen. Es gibt vier Optionen:<br>- \'Dn\' - LDAP DN im Format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - im Format \'tester\'.<br>- \'Backslash\' - im Format \'COMPANY\\tester\'.<br>- \'Principal\' - im Format \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'Formatierung des Nutzernamens in DN Form',
      'ldapBaseDn' => 'Der Basis-DN, der für die Suche im LDAP Verzeichnis verwendet wird (z.B. "OU=users,OU=espocrm,DC=test, DC=lan").',
      'ldapTryUsernameSplit' => 'Option um Benutzername und Domäne voneinander zu trennen.',
      'ldapOptReferrals' => 'folge Referrals innerhalb des LDAP Verzeichnisses.',
      'ldapCreateEspoUser' => 'Diese Option erlaubt es EspoCRM lokale Benutzer aus den LDAP Informationen zu erstellen.',
      'ldapUserFirstNameAttribute' => 'LDAP Attribut welches den Vornamen des Benutzers enthält (z.B. "givenname").',
      'ldapUserLastNameAttribute' => 'LDAP Attribut welches den Nachnamen des Benutzers enthält (z.B. "sn").',
      'ldapUserTitleAttribute' => 'LDAP Attribut welches den Titel des Benutzers enthält (z.B. "title").',
      'ldapUserEmailAddressAttribute' => 'LDAP Attribut welches die E-Mail-Adresse des Benutzers enthält (z.B. "mail").',
      'ldapUserPhoneNumberAttribute' => 'LDAP Attribut welches die Rufnummer des Benutzers enthält (z.B. "telephoneNumber").',
      'ldapUserLoginFilter' => 'Filter um die Gruppe der Benutzer einzuschränken, die EspoCRM nutzen können (z.B. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan").',
      'ldapAccountDomainName' => 'Domäne, die für die Anmeldung am LDAP Verzeichnis verwendet wird.',
      'ldapAccountDomainNameShort' => 'Kurzform der Domäne, die für die Anmeldung am LDAP Verzeichnis verwendet wird.',
      'ldapUserTeams' => 'Teams für den erstellen Benutzer. Weitere Informationen siehe Benutzerprofil.',
      'ldapUserDefaultTeam' => 'Standard-Team für erstellten Benutzer. Weitere Informationen siehe Benutzerprofil.',
      'b2cMode' => 'Standardmäßig ist EspoCRM für B2B angepasst. Sie können es auf B2C umschalten.',
      'currencyDecimalPlaces' => 'Number of decimal places. If empty then all nonempty decimal places will be displayed.',
      'aclStrictMode' => 'Enabled: Access to scopes will be forbidden if it\'s not specified in roles.

Disabled: Access to scopes will be allowed if it\'s not specified in roles.',
    ),
    'labels' => 
    array (
      'System' => 'System',
      'Locale' => 'Lokale Einstellungen',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfiguration',
      'In-app Notifications' => 'In-App Benachrichtigungen',
      'Email Notifications' => 'E-Mail Benachrichtigungen',
      'Currency Settings' => 'Währunsgseinstellungen',
      'Currency Rates' => 'Wechselkurse',
      'Mass Email' => 'Massen E-Mails',
      'Test Connection' => 'Verbindung prüfen',
      'Connecting' => 'Verbinde...',
      'Activities' => 'Aktivitäten',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'Die Verbindung wurde erfolgreich hergestellt.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'roles' => 'Rollen',
      'positionList' => 'Positionsbezeichnungen',
    ),
    'links' => 
    array (
      'users' => 'Benutzer',
      'notes' => 'Notizen',
      'roles' => 'Rollen',
      'inboundEmails' => 'Group Email Accounts',
    ),
    'tooltips' => 
    array (
      'roles' => 'Benutzer dieses Teams erben alle Zugriffsberechtigungen von der ausgewählten Rollen.',
      'positionList' => 'Verfügbare Positionen in diesem Team. Z.B. Verkäufer, Manager etc.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Team erstellen',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'body' => 'Inhalt',
      'entityType' => 'Entitätstyp',
      'header' => 'Kopf',
      'footer' => 'Fuß',
      'leftMargin' => 'Linker Rand',
      'topMargin' => 'Oberer Rand',
      'rightMargin' => 'Rechter Rand',
      'bottomMargin' => 'Unterer Rand',
      'printFooter' => 'Fuß drucken',
      'footerPosition' => 'Position Fuß',
      'variables' => 'Available Placeholders',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Vorlage erstellen',
    ),
    'tooltips' => 
    array (
      'footer' => 'Verwenden Sie den Platzhalter  {pageNumber} um eine Seitennummer zu drucken.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'userName' => 'Benutzername',
      'title' => 'Funktion',
      'isAdmin' => 'Ist Admin',
      'defaultTeam' => 'Standard-Team',
      'emailAddress' => 'E-Mail',
      'phoneNumber' => 'Telefon',
      'roles' => 'Rollen',
      'portals' => 'Portale',
      'portalRoles' => 'Portal Rollen',
      'teamRole' => 'Position',
      'password' => 'Passwort',
      'currentPassword' => 'Aktuelles Passwort',
      'passwordConfirm' => 'Passwort bestätigen',
      'newPassword' => 'Neues Passwort',
      'newPasswordConfirm' => 'Neues Passwort bestätigen',
      'avatar' => 'Avatar',
      'isActive' => 'Ist aktiv',
      'isPortalUser' => 'Ist Portal Benutzer',
      'contact' => 'Kontakt',
      'accounts' => 'Firmen',
      'account' => 'Benutzerkonto (Primär)',
      'sendAccessInfo' => 'E-Mail mit Zugangsinformationen an Benutzer senden',
      'portal' => 'Portal',
      'gender' => 'Geschlecht',
      'position' => 'Position im Team',
      'ipAddress' => 'IP Address',
      'passwordPreview' => 'Password Preview',
      'acceptanceStatus' => 'Acceptance Status',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'teams' => 'Teams',
      'roles' => 'Rollen',
      'notes' => 'Notizen',
      'portals' => 'Portale',
      'portalRoles' => 'Portal Rollen',
      'contact' => 'Kontakt',
      'accounts' => 'Firmen',
      'account' => 'Benutzerkonto (Primär)',
      'tasks' => 'Aufgaben',
      'targetLists' => 'Kontaktlisten',
    ),
    'labels' => 
    array (
      'Create User' => 'Benutzer erstellen',
      'Generate' => 'Erzeugen',
      'Access' => 'Berechtigungen',
      'Preferences' => 'Benutzereinstellungen',
      'Change Password' => 'Passwort ändern',
      'Teams and Access Control' => 'Teams und Zugriffsberechtigung',
      'Forgot Password?' => 'Passwort vergessen?',
      'Password Change Request' => 'Anforderung zur Passwortänderung',
      'Email Address' => 'E-Mail Adresse',
      'External Accounts' => 'Externe Konten',
      'Email Accounts' => 'E-Mail Konten',
      'Portal' => 'Portal',
      'Create Portal User' => 'Portalbenutzer erstellen',
      'Proceed w/o Contact' => 'Weiter mit Kontakt',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Alle Datensätze dieses Benutzers werden standardmäßig seinem Team zugeordnet.',
      'userName' => 'Erlaubte Zeichen sind die Buchstaben a-z, Ziffern, Punkt, @-Symbol, Strich und Unterstrich.',
      'isAdmin' => 'Der Admin Benutzer hat vollen Zugriff auf alle Funktionen.',
      'isActive' => 'Wenn nicht markiert kann der Benutzer sich nicht einloggen',
      'teams' => 'Das Team zu dem dieser Benutzer gehört. Die Zugriffsberechtigung wird von der Team Rolle vererbt.',
      'roles' => 'Zusätzliche Zugriffsrollen. Wenn ein Benutzer zu keinem Team gehört oder wenn Sie die Zugriffsberechtigung nur für diesen Benutzer erweitern wollen.',
      'portalRoles' => 'Zusätzliche Portal Rollen. Benutzen Sie diese wenn Sie die Zugriffsberechtigung nur für diesen Benutzer erweitern wollen.',
      'portals' => 'Portale auf die der Benutzer Zugriff hat.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Das Passwort wird an die E-Mail Adresse des Benutzers gesendet',
      'accountInfoEmailSubject' => 'EspoCRM Benutzerzugriffsinfo',
      'accountInfoEmailBody' => 'Ihre EspoCRM Zugriffsinformation:

Benutzername: {userName}
Passwort: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Anforderung zur Passwortänderung',
      'passwordChangeLinkEmailBody' => 'Sie können Ihr Passwort über diesen Link {link} ändern. Diese eindeutige URL ist nur für kurze Zeit gültig.',
      'passwordChanged' => 'Das Passwort wurde geändert',
      'userCantBeEmpty' => 'Der Benutzername darf nicht leer sein!',
      'wrongUsernamePasword' => 'Falscher Benutzername/Passwort',
      'emailAddressCantBeEmpty' => 'E-Mail Adresse darf nicht leer sein',
      'userNameEmailAddressNotFound' => 'Benutzername oder E-Mail Adresse nicht gefunden',
      'forbidden' => 'Verboten, bitte später nochmals versuchen',
      'uniqueLinkHasBeenSent' => 'Ein einmaliger Link wurde an die angegebene E-Mail Adresse gesendet.',
      'passwordChangedByRequest' => 'Das Passwort wurde geändert',
      'setupSmtpBefore' => 'Sie müssen die <a href="{url}">SMTP Einstellungen</a> setzen damit das System Passwörter in E-Mails senden kann.',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Nicht gesetzt',
        'Male' => 'Männlich',
        'Female' => 'Weiblich',
        'Neutral' => 'Neutral',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Nur mein Team',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
      'activePortal' => 'Portal Aktiv',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'website' => 'Webseite',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Rechnungsadresse',
      'shippingAddress' => 'Lieferadresse',
      'description' => 'Beschreibung',
      'sicCode' => 'ISIC Code',
      'industry' => 'Branche',
      'type' => 'Typ',
      'contactRole' => 'Rolle',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Kampagne',
      'targetLists' => 'Kontaktlisten',
      'targetList' => 'Kontaktliste',
      'originalLead' => 'Ursprünglicher Interessent',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakte',
      'opportunities' => 'Verkaufschancen',
      'cases' => 'Fälle',
      'documents' => 'Dokumente',
      'meetingsPrimary' => 'Meetings (erweitert)',
      'callsPrimary' => 'Anrufe (erweitert)',
      'tasksPrimary' => 'Aufgaben (erweitert)',
      'emailsPrimary' => 'E-Mails (erweitert)',
      'targetLists' => 'Kontaktlisten',
      'campaignLogRecords' => 'Kampagnen Log',
      'campaign' => 'Kampagne',
      'portalUsers' => 'Portal Benutzer',
      'originalLead' => 'Ursprünglicher Interessent',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Kunde',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Reseller' => 'Wiederverkäufer',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Luft- und Raumfahrt',
        'Agriculture' => 'Landwirtschaft',
        'Advertising' => 'Werbewirtschaft',
        'Apparel & Accessories' => 'Bekleidungsindustrie',
        'Architecture' => 'Architekten',
        'Automotive' => 'Automobilindustrie',
        'Banking' => 'Bankwesen',
        'Biotechnology' => 'Biotechnologie',
        'Building Materials & Equipment' => 'Baumaterial & -ausstattung',
        'Chemical' => 'Chemieindustrie',
        'Construction' => 'Konstruktion',
        'Computer' => 'Informationstechnologie',
        'Defense' => 'Verteidigung',
        'Creative' => 'Kreative',
        'Culture' => 'Kultur',
        'Consulting' => 'Consulting',
        'Education' => 'Bildungswesen',
        'Electronics' => 'Elektronik',
        'Electric Power' => 'Elektroenergie',
        'Energy' => 'Energieerzeuger',
        'Entertainment & Leisure' => 'Freizeit- und Unterhaltungsindustrie',
        'Finance' => 'Finanzsektor',
        'Food & Beverage' => 'Speisen und Getränke',
        'Grocery' => 'Einzelhandel',
        'Hospitality' => 'Gastronomie',
        'Healthcare' => 'Gesundheitswesen',
        'Insurance' => 'Versicherung',
        'Legal' => 'Rechtswesen',
        'Manufacturing' => 'Produktion',
        'Mass Media' => 'Massenmedien',
        'Mining' => 'Bergbau',
        'Music' => 'Musik',
        'Marketing' => 'Marketing',
        'Publishing' => 'Medien',
        'Petroleum' => 'Öl Industrie',
        'Real Estate' => 'Immobilien',
        'Retail' => 'Verkauf',
        'Shipping' => 'Versand und Transport',
        'Service' => 'Service',
        'Support' => 'Service',
        'Sports' => 'Sport',
        'Software' => 'Software',
        'Technology' => 'Technologie',
        'Telecommunications' => 'Telekommunikation',
        'Television' => 'Fernsehen',
        'Testing, Inspection & Certification' => 'Test, Inspektion & Zertifizierung',
        'Transportation' => 'Transportwesen',
        'Travel' => 'Travel',
        'Venture Capital' => 'Risikokapital',
        'Wholesale' => 'Großhandel',
        'Water' => 'Wasserwesen',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Firma erstellen',
      'Copy Billing' => 'Rechnungsadresse kopieren',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Kunden',
      'partners' => 'Partner',
      'recentlyCreated' => 'Kürzlich erstellt',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Monat',
      'week' => 'Woche',
      'day' => 'Tag',
      'agendaWeek' => 'Woche',
      'agendaDay' => 'Tag',
      'timeline' => 'Zeitachse',
    ),
    'labels' => 
    array (
      'Today' => 'Heute',
      'Create' => 'Erstellen',
      'Shared' => 'Gemeinsam',
      'Add User' => 'Benutzer hinzufügen',
      'current' => 'aktuell',
      'time' => 'Zeit',
      'User List' => 'Benutzerliste',
      'Manage Users' => 'Benutzer verwalten',
      'View Calendar' => 'View Calendar',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Enddatum',
      'direction' => 'Richtung',
      'duration' => 'Dauer',
      'description' => 'Beschreibung',
      'users' => 'Benutzer',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
      'reminders' => 'Erinnerungen',
      'account' => 'Firma',
      'acceptanceStatus' => 'Akzeptanzstatus',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Geplant',
        'Held' => 'Durchgeführt',
        'Not Held' => 'Nicht durchgeführt',
      ),
      'direction' => 
      array (
        'Outbound' => 'Ausgehend',
        'Inbound' => 'Eingehend',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Kein(e)',
        'Accepted' => 'Akzeptiert',
        'Declined' => 'Abgelehnt',
        'Tentative' => 'Mit Vorbehalt',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Auf durchgeführt setzen',
      'setNotHeld' => 'Auf nicht durchgeführt setzen',
    ),
    'labels' => 
    array (
      'Create Call' => 'Anruf erstellen',
      'Set Held' => 'Auf durchgeführt setzen',
      'Set Not Held' => 'Auf nicht durchgeführt setzen',
      'Send Invitations' => 'Einladungen versenden',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Geplant',
      'held' => 'Durchgeführt',
      'todays' => 'Heutige',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'description' => 'Beschreibung',
      'status' => 'Status',
      'type' => 'Typ',
      'startDate' => 'Startdatum',
      'endDate' => 'Enddatum',
      'targetLists' => 'Kontaktlisten',
      'excludingTargetLists' => 'Kontaktlisten ausschließen',
      'sentCount' => 'Gesendet',
      'openedCount' => 'Geöffnet',
      'clickedCount' => 'Geklickt',
      'optedOutCount' => 'Opt-Out gesetzt',
      'bouncedCount' => 'Nicht zustellbar',
      'hardBouncedCount' => 'Zurückgewiesen',
      'softBouncedCount' => 'Temporär nicht zustellbar',
      'leadCreatedCount' => 'Erstellte Interessenten',
      'revenue' => 'Umsatz',
      'revenueConverted' => 'Umsatz (umgerechnet)',
      'budget' => 'Budget',
      'budgetConverted' => 'Budget (umgerechnet)',
    ),
    'links' => 
    array (
      'targetLists' => 'Kontaktlisten',
      'excludingTargetLists' => 'Kontaktlisten ausschließen',
      'accounts' => 'Firmen',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
      'opportunities' => 'Verkaufschancen',
      'campaignLogRecords' => 'Protokoll',
      'massEmails' => 'Massen E-Mails',
      'trackingUrls' => 'Tracking URLs',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-Mail',
        'Web' => 'Web',
        'Television' => 'Fernsehen',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Mail',
      ),
      'status' => 
      array (
        'Planning' => 'Planung',
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
        'Complete' => 'Abgeschlossen',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Neue Kampagne',
      'Target Lists' => 'Kontaktlisten',
      'Statistics' => 'Statistik',
      'hard' => 'hart',
      'soft' => 'weich',
      'Unsubscribe' => 'Abmelden',
      'Mass Emails' => 'Massen E-Mails',
      'Email Templates' => 'E-Mail Vorlagen',
      'Unsubscribe again' => 'Abmelden',
      'Subscribe again' => 'Anmelden',
      'Create Target List' => 'Interessentenliste erstellen',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Sie wurden erfolgreich aus unserem Verteiler entfernt',
      'subscribedAgain' => 'Sie sind wieder angemeldet.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Zielkontakte die Nachrichten empfangen sollen',
      'excludingTargetLists' => 'Zielkontakte die keine Nachrichten empfangen sollen',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Aktion',
      'actionDate' => 'Datum',
      'data' => 'Daten',
      'campaign' => 'Kampagne',
      'parent' => 'Ziel',
      'object' => 'Objekt',
      'application' => 'Applikation',
      'queueItem' => 'Warteschlangeneintrag',
      'stringData' => 'String Daten',
      'stringAdditionalData' => 'String zusätzliche Daten',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Warteschlangeneintrag',
      'parent' => 'Bezieht sich auf',
      'object' => 'Objekt',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Gesendet',
        'Opened' => 'Geöffnet',
        'Opted Out' => 'Opt-Out gesetzt',
        'Bounced' => 'Nicht zustellbar',
        'Clicked' => 'Geklickt',
        'Lead Created' => 'Interessent erstellt',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Alle',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Gesendet',
      'opened' => 'Geöffnet',
      'optedOut' => 'Opt-Out gesetzt',
      'bounced' => 'Nicht zustellbar',
      'clicked' => 'Geklickt',
      'leadCreated' => 'Interessent erstellt',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Code zum Einfügen anstelle einer URL',
      'campaign' => 'Kampagne',
    ),
    'links' => 
    array (
      'campaign' => 'Kampagne',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Tracking URL erstellen',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'number' => 'Nummer',
      'status' => 'Status',
      'account' => 'Firma',
      'contact' => 'Kontakt',
      'contacts' => 'Kontakte',
      'priority' => 'Priorität',
      'type' => 'Typ',
      'description' => 'Beschreibung',
      'inboundEmail' => 'Eingehende E-Mail',
      'lead' => 'Interessent',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Eingehende E-Mail',
      'account' => 'Firma',
      'contact' => 'Kontakt (Primär)',
      'Contacts' => 'Kontakte',
      'meetings' => 'Meetings',
      'calls' => 'Anrufe',
      'tasks' => 'Aufgaben',
      'emails' => 'E-Mails',
      'articles' => 'Wissensbasis Artikel',
      'lead' => 'Interessent',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Neu',
        'Assigned' => 'Zugewiesen',
        'Pending' => 'Schwebend',
        'Closed' => 'Abgeschlossen',
        'Rejected' => 'Abgelehnt',
        'Duplicate' => 'Duplizieren',
      ),
      'priority' => 
      array (
        'Low' => 'Niedrig',
        'Normal' => 'Normal',
        'High' => 'Hoch',
        'Urgent' => 'Dringend',
      ),
      'type' => 
      array (
        'Question' => 'Frage',
        'Incident' => 'Vorfall',
        'Problem' => 'Problem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Fall erstellen',
      'Close' => 'Schließen',
      'Reject' => 'Ablehnen',
      'Closed' => 'Abgeschlossen',
      'Rejected' => 'Abgelehnt',
    ),
    'presetFilters' => 
    array (
      'open' => 'Offen',
      'closed' => 'Abgeschlossen',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'account' => 'Firma',
      'accounts' => 'Firmen',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Firmentyp',
      'doNotCall' => 'Anrufe unerwünscht',
      'address' => 'Adresse',
      'opportunityRole' => 'Verkaufschance Rolle',
      'accountRole' => 'Funktion',
      'description' => 'Beschreibung',
      'campaign' => 'Kampagne',
      'targetLists' => 'Kontaktlisten',
      'targetList' => 'Kontaktliste',
      'portalUser' => 'Portal Benutzer',
      'originalLead' => 'Ursprünglicher Interessent',
      'acceptanceStatus' => 'Acceptance Status',
      'accountIsInactive' => 'Account Inactive',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'opportunities' => 'Verkaufschancen',
      'cases' => 'Fälle',
      'targetLists' => 'Kontaktlisten',
      'campaignLogRecords' => 'Kampagnen Log',
      'campaign' => 'Kampagne',
      'account' => 'Firma (Primär)',
      'accounts' => 'Firmen',
      'casesPrimary' => 'Fälle (Primär)',
      'portalUser' => 'Portal Benutzer',
      'originalLead' => 'Ursprünglicher Interessent',
      'documents' => 'Dokumente',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Kontakt erstellen',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Kein(e)--',
        'Decision Maker' => 'Entscheider',
        'Evaluator' => 'Vorentscheider',
        'Influencer' => 'Einflussreiche Person',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Portal Benutzer',
      'notPortalUsers' => 'Keine Portal Benutzer',
      'accountActive' => 'Active',
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Dokument erstellen',
      'Details' => 'Details',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'file' => 'Datei',
      'type' => 'Typ',
      'publishDate' => 'Veröffentlichungsdatum',
      'expirationDate' => 'Ablaufdatum',
      'description' => 'Beschreibung',
      'accounts' => 'Firmen',
      'folder' => 'Ordner',
    ),
    'links' => 
    array (
      'accounts' => 'Firmen',
      'opportunities' => 'Verkaufschancen',
      'folder' => 'Ordner',
      'leads' => 'Interessenten',
      'contacts' => 'Kontakte',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Draft' => 'Entwurf',
        'Expired' => 'Abgelaufen',
        'Canceled' => 'Storniert',
      ),
      'type' => 
      array (
        '' => 'Kein(e)',
        'Contract' => 'Vertrag',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Lizenzvereinbarung',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
      'draft' => 'Entwurf',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Dokumentenordner erstellen',
      'Manage Categories' => 'Ordner verwalten',
      'Documents' => 'Dokumente',
    ),
    'links' => 
    array (
      'documents' => 'Dokumente',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'target' => 'Ziel',
      'sentAt' => 'Sendedatum',
      'attemptCount' => 'Versuche',
      'emailAddress' => 'E-Mail Adresse',
      'massEmail' => 'Massen E-Mails',
      'isTest' => 'Ist Test',
    ),
    'links' => 
    array (
      'target' => 'Ziel',
      'massEmail' => 'Massen E-Mails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Schwebend',
        'Sent' => 'Gesendet',
        'Failed' => 'Fehlgeschlagen',
        'Sending' => 'Sending',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Schwebend',
      'sent' => 'Gesendet',
      'failed' => 'Fehlgeschlagen',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Artikel erstellen',
      'Any' => 'Beliebig',
      'Send in Email' => 'In E-Mail senden',
      'Move Up' => 'Aufwärts',
      'Move Down' => 'Abwärts',
      'Move to Top' => 'zu Anfang',
      'Move to Bottom' => 'zum Ende',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'type' => 'Typ',
      'attachments' => 'Anhänge',
      'publishDate' => 'Veröffentlichungsdatum',
      'expirationDate' => 'Ablaufdatum',
      'description' => 'Beschreibung',
      'body' => 'Inhalt',
      'categories' => 'Kategorien',
      'language' => 'Sprache',
      'portals' => 'Portale',
    ),
    'links' => 
    array (
      'cases' => 'Fälle',
      'opportunities' => 'Verkaufschancen',
      'categories' => 'Kategorien',
      'portals' => 'Portale',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'In Prüfung',
        'Draft' => 'Entwurf',
        'Archived' => 'Archiviert',
        'Published' => 'Veröffentlicht',
      ),
      'type' => 
      array (
        'Article' => 'Artikel',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Article will be available only in specified portals.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Publiziert',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Neue Kategorie',
      'Manage Categories' => 'Kategorien verwalten',
      'Articles' => 'Artikel',
    ),
    'links' => 
    array (
      'articles' => 'Artikel',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Umgewandelt zu',
      'Create Lead' => 'Interessent erstellen',
      'Convert' => 'Umwandeln',
      'convert' => 'umwandeln',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'website' => 'Webseite',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Firmenname',
      'doNotCall' => 'Anrufe unerwünscht',
      'address' => 'Adresse',
      'status' => 'Status',
      'source' => 'Quelle',
      'opportunityAmount' => 'Verkaufschance Volumen',
      'opportunityAmountConverted' => 'Verkaufschance Volumen (umgerechnet)',
      'description' => 'Beschreibung',
      'createdAccount' => 'Firma',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Verkaufschance',
      'campaign' => 'Kampagne',
      'targetLists' => 'Kontaktlisten',
      'targetList' => 'Kontaktliste',
      'industry' => 'Industrie',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Kontaktlisten',
      'campaignLogRecords' => 'Kampagnen Log',
      'campaign' => 'Kampagne',
      'createdAccount' => 'Firma',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Verkaufschance',
      'cases' => 'Fälle',
      'documents' => 'Dokumente',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Neu',
        'Assigned' => 'Zugewiesen',
        'In Process' => 'In Arbeit',
        'Converted' => 'Umgewandelt',
        'Recycled' => 'Wiedereröffnet',
        'Dead' => '\'Gestorben\'',
      ),
      'source' => 
      array (
        '' => 'Kein(e)',
        'Call' => 'Anruf',
        'Email' => 'E-Mail',
        'Existing Customer' => 'Bestandskunde',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Webseite',
        'Campaign' => 'Kampagne',
        'Other' => 'Andere',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
      'actual' => 'Aktuell',
      'converted' => 'Umgewandelt',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'storeSentEmails' => 'Gesendete E-Mails speichern',
      'startAt' => 'Startdatum',
      'fromAddress' => 'Absenderadresse',
      'fromName' => 'Absendername',
      'replyToAddress' => 'Antwort-an Adresse',
      'replyToName' => 'Antwort-an Name',
      'campaign' => 'Kampagne',
      'emailTemplate' => 'E-Mail Vorlage',
      'inboundEmail' => 'E-Mail Konto',
      'targetLists' => 'Kontaktlisten',
      'excludingTargetLists' => 'Kontaktlisten ausschließen',
      'optOutEntirely' => 'Vollständiger Opt-Out',
    ),
    'links' => 
    array (
      'targetLists' => 'Kontaktlisten',
      'excludingTargetLists' => 'Kontaktlisten ausschließen',
      'queueItems' => 'Warteschlangeneinträge',
      'campaign' => 'Kampagne',
      'emailTemplate' => 'E-Mail Vorlage',
      'inboundEmail' => 'E-Mail Konto',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Entwurf',
        'Pending' => 'Schwebend',
        'In Process' => 'In Arbeit',
        'Complete' => 'Fertig',
        'Canceled' => 'Storniert',
        'Failed' => 'Fehlgeschlagen',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Massen E-Mail erstellen',
      'Send Test' => 'Test senden',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Zumindest ein Ziel auswählen',
      'testSent' => 'Test E-Mail(s) die gesendet werden sollen',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Für E-Mail Adressen von Empfängern, die sich abgemeldet haben, wird ein Opt-out gesetzt. Diese werden keine Massenaussendungen mehr erhalten.',
      'targetLists' => 'Zielkontakte die Nachrichten empfangen sollen',
      'excludingTargetLists' => 'Zielkontakte die keine Nachrichten empfangen sollen',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktuell',
      'complete' => 'Fertig',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Enddatum',
      'duration' => 'Dauer',
      'description' => 'Beschreibung',
      'users' => 'Benutzer',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
      'reminders' => 'Erinnerungen',
      'account' => 'Firma',
      'acceptanceStatus' => 'Akzeptanzstatus',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Geplant',
        'Held' => 'Abgehalten',
        'Not Held' => 'Nicht durchgeführt',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Kein(e)',
        'Accepted' => 'Akzeptiert',
        'Declined' => 'Abgelehnt',
        'Tentative' => 'Mit Vorbehalt',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Auf abgehalten setzen',
      'setNotHeld' => 'Auf nicht abgehalten setzen',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Meeting erstellen',
      'Set Held' => 'Auf abgehalten setzen',
      'Set Not Held' => 'Auf nicht abgehalten setzen',
      'Send Invitations' => 'Einladungen versenden',
      'on time' => 'Genaue Uhrzeit',
      'before' => 'vorher',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Geplant',
      'held' => 'Abgehalten',
      'todays' => 'Heutige',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Es wurde nicht gesendet',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'account' => 'Firma',
      'stage' => 'Verkaufsphase',
      'amount' => 'Betrag',
      'probability' => 'Wahrscheinlichkeit (%)',
      'leadSource' => 'Quelle',
      'doNotCall' => 'Anrufe unerwünscht',
      'closeDate' => 'Abschlussdatum',
      'contacts' => 'Kontakte',
      'description' => 'Beschreibung',
      'amountConverted' => 'Betrag (umgerechnet)',
      'amountWeightedConverted' => 'Betrag gewichtet',
      'campaign' => 'Kampagne',
      'originalLead' => 'Ursprünglicher Interessent',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakte',
      'documents' => 'Dokumente',
      'campaign' => 'Kampagne',
      'originalLead' => 'Ursprünglicher Interessent',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Identifikation',
        'Qualification' => 'Qualifikation',
        'Needs Analysis' => 'Bedarfserhebung',
        'Value Proposition' => 'Richtangebot',
        'Id. Decision Makers' => 'Identifikation der Entscheider',
        'Perception Analysis' => 'Analyse der Wahrnehmung',
        'Proposal/Price Quote' => 'Angebot/Kostenvoranschlag',
        'Negotiation/Review' => 'Verhandlung/Überarbeitung',
        'Closed Won' => 'Gewonnen',
        'Closed Lost' => 'Verloren',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Verkaufschance erstellen',
    ),
    'presetFilters' => 
    array (
      'open' => 'Offen',
      'won' => 'Gewonnen',
      'lost' => 'Verloren',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'description' => 'Beschreibung',
      'entryCount' => 'Eingabezähler',
      'campaigns' => 'Kampagnen',
      'endDate' => 'Enddatum',
      'targetLists' => 'Kontaktlisten',
      'includingActionList' => 'Inklusive',
      'excludingActionList' => 'Exklusive',
    ),
    'links' => 
    array (
      'accounts' => 'Firmen',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
      'campaigns' => 'Kampagnen',
      'massEmails' => 'Massen E-Mails',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-Mail',
        'Web' => 'Web',
        'Television' => 'Fernsehen',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Kontaktliste erstellen',
      'Opted Out' => 'Opt-Out gesetzt',
      'Cancel Opt-Out' => 'Opt-Out zurücksetzen',
      'Opt-Out' => 'Opt-Out',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Fällig am',
      'dateStartDate' => 'Startdatum (ganztägig)',
      'dateEndDate' => 'Enddatum (ganztägig)',
      'priority' => 'Priorität',
      'description' => 'Beschreibung',
      'isOverdue' => 'Ist überfällig',
      'account' => 'Firma',
      'dateCompleted' => 'Datum erledigt',
      'attachments' => 'Anhänge',
      'reminders' => 'Erinnerungen',
    ),
    'links' => 
    array (
      'attachments' => 'Anhänge',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nicht begonnen',
        'Started' => 'In Bearbeitung',
        'Completed' => 'Abgeschlossen',
        'Canceled' => 'Storniert',
        'Deferred' => 'Zurückgestellt',
      ),
      'priority' => 
      array (
        'Low' => 'Niedrig',
        'Normal' => 'Normal',
        'High' => 'Hoch',
        'Urgent' => 'Dringend',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Neue Aufgabe',
      'Complete' => 'Fertig',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktuell',
      'completed' => 'Abgeschlossen',
      'deferred' => 'Zurückgestellt',
      'todays' => 'Heutige',
      'overdue' => 'Überfällig',
    ),
  ),
);
?>