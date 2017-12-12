<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'Utente',
      'action' => 'Azione',
      'createdAt' => 'Data',
      'target' => 'Target',
      'targetType' => 'Tipo Target',
      'authToken' => 'Token Autorizzazione',
      'ipAddress' => 'Indirizzo IP',
    ),
    'links' => 
    array (
      'authToken' => 'Token Autorizzazione',
      'user' => 'Utente',
      'target' => 'Target',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Solo i Miei',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Leggi',
        'update' => 'Aggiorna',
        'delete' => 'Cancella',
        'create' => 'Crea',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Abilitato',
      'Disabled' => 'Disabilitato',
      'System' => 'Sistema',
      'Users' => 'Utenti',
      'Email' => 'Email',
      'Data' => 'Data',
      'Customization' => 'Customizzazione',
      'Available Fields' => 'Campi Liberi',
      'Layout' => 'Layout',
      'Entity Manager' => 'Gestore Entità',
      'Add Panel' => 'Aggiungi pannello',
      'Add Field' => 'Aggiungi Campo',
      'Settings' => 'Settaggi',
      'Scheduled Jobs' => 'Jobs schedulati',
      'Upgrade' => 'Aggiornamento',
      'Clear Cache' => 'Svuota Cache',
      'Rebuild' => 'Rebuild',
      'Teams' => 'Teams',
      'Roles' => 'Ruoli',
      'Portal' => 'Portale',
      'Portals' => 'Portali',
      'Portal Roles' => 'Portale Ruoli',
      'Portal Users' => 'Portale Utenti',
      'Outbound Emails' => 'Email in uscita',
      'Group Email Accounts' => 'Account e-mail di Gruppo',
      'Personal Email Accounts' => 'Account e-mail Personale',
      'Inbound Emails' => 'Email in arrivo',
      'Email Templates' => 'Modelli Email',
      'Import' => 'Importa',
      'Layout Manager' => 'Gestore Layout',
      'User Interface' => 'Interfaccia Utente',
      'Auth Tokens' => 'Token automatici',
      'Authentication' => 'Autenticazione',
      'Currency' => 'Valuta',
      'Integrations' => 'Integrazione',
      'Extensions' => 'Estensione',
      'Upload' => 'Caricamento',
      'Installing...' => 'Installazione...',
      'Upgrading...' => 'Aggiornamento...',
      'Upgraded successfully' => 'Aggiornamento completato',
      'Installed successfully' => 'Installazione completata',
      'Ready for upgrade' => 'Pronto per l\'aggiornamento',
      'Run Upgrade' => 'Eseguire Aggiornamento',
      'Install' => 'Installa',
      'Ready for installation' => 'Pronto per l\'installazione',
      'Uninstalling...' => 'Disinstallazione...',
      'Uninstalled' => 'Disinstallato',
      'Create Entity' => 'Crea Entità',
      'Edit Entity' => 'Modifica Entità',
      'Create Link' => 'Crea Link',
      'Edit Link' => 'Modifica Link',
      'Notifications' => 'Notifiche',
      'Jobs' => 'Jobs',
      'Reset to Default' => 'Ripristina Default',
      'Email Filters' => 'Filtri Email',
      'Action History' => 'Storico Azioni',
      'Label Manager' => 'Gestore Etichette',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Dettaglio',
      'listSmall' => 'Lista (ridotta)',
      'detailSmall' => 'Dettaglio (ridotto)',
      'filters' => 'Filtri di ricerca',
      'massUpdate' => 'Aggiorna Tutto',
      'relationships' => 'Pannelli Relazioni',
      'sidePanelsDetail' => 'Pannelli Laterali (dettagli)',
      'sidePanelsEdit' => 'Pannelli Laterali (modifica)',
      'sidePanelsDetailSmall' => 'Pannelli Laterali (dettagli ridotti)',
      'sidePanelsEditSmall' => 'Pannelli Laterali (edit ridotto)',
      'detailConvert' => 'Converti Lead',
      'listForAccount' => 'Lista (di Account)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Indirizzo',
      'array' => 'Array',
      'foreign' => 'Esterna',
      'duration' => 'Durata',
      'password' => 'Password',
      'personName' => 'Nome',
      'autoincrement' => 'Auto-incrementa',
      'bool' => 'Boolean',
      'currency' => 'Valuta',
      'currencyConverted' => 'Valuta (Convertita)',
      'date' => 'Data',
      'datetime' => 'Data e Ora',
      'datetimeOptional' => 'Data/Data e Ora',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiplo',
      'linkParent' => 'Link Parent',
      'multienim' => 'Multienum',
      'phone' => 'Telefono',
      'text' => 'Testo',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'File',
      'image' => 'Immagine',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Allegato Multiplo',
      'rangeInt' => 'Range Integer',
      'rangeFloat' => 'Range Float',
      'rangeCurrency' => 'Range Currency',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Mappa',
      'number' => 'Numero',
      'colorpicker' => 'Scegli Colore',
    ),
    'fields' => 
    array (
      'type' => 'Tipo',
      'name' => 'Nome',
      'label' => 'Etichetta',
      'tooltipText' => 'Testo Suggerimento',
      'required' => 'Obbligatorio',
      'default' => 'Default',
      'maxLength' => 'Lunghezza Massima',
      'options' => 'Opzioni',
      'after' => 'Dopo (campo)',
      'before' => 'Prima (campo)',
      'link' => 'Link',
      'field' => 'Campo',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Traduzione',
      'previewSize' => 'Anteprima dimensione',
      'noEmptyString' => 'Stringa vuota non ammessa',
      'defaultType' => 'Tipo di Default',
      'seeMoreDisabled' => 'Disabilitare Taglio Testo',
      'entityList' => 'Lista delle Entità',
      'isSorted' => 'È ordinato (ordine alfabetico)',
      'audited' => 'Sottoposto a Revisione Contabile',
      'trim' => 'Trim',
      'height' => 'Altezza (px)',
      'minHeight' => 'Altezza min. (px)',
      'provider' => 'Provider',
      'typeList' => 'Lista Tipi',
      'rows' => 'Numero di righe dell\'area Testuale',
      'lengthOfCut' => 'Lunghezza del taglio',
      'sourceList' => 'Elenco Sorgenti',
      'prefix' => 'Prefix',
      'nextNumber' => 'Prossimo Numero',
      'padLength' => 'Lunghezza Pad',
      'disableFormatting' => 'Disabilitare Formattazione',
      'dynamicLogicVisible' => 'Condizioni che rendono il campo visibile',
      'dynamicLogicReadOnly' => 'Condizioni che rendono il campo di sola-lettura',
      'dynamicLogicRequired' => 'Condizioni che rendono il campo obbligatorio',
      'dynamicLogicOptions' => 'Opzioni condizionali',
      'probabilityMap' => 'Probabilità degli Stage (%)',
      'readOnly' => 'Sola lettura',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM verrà aggiornato alla versione < strong> { version} < / strong> . L\'operazione può richiedere qualche minuto .',
      'upgradeDone' => 'EspoCRM è stato aggiornato alla versione <strong>{version}</strong>.',
      'upgradeBackup' => 'Si consiglia di effettuare un backup dei file di EspoCRM e dei tuoi dati prima dell\'aggiornamento .',
      'thousandSeparatorEqualsDecimalMark' => 'Il Separatore delle migliaia non può essere lo stesso utilizzato per i decimali',
      'userHasNoEmailAddress' => 'L\'Utente non ha indirizzo email.',
      'selectEntityType' => 'Scegli il tipo di entity nel menu di sinistra.',
      'selectUpgradePackage' => 'Seleziona il pacchetto di aggiornamento',
      'downloadUpgradePackage' => 'Scarica il pacchetto di aggiornamento <a href="{url}">here</a>.',
      'selectLayout' => 'Scegli il layout necessario nel meno di sinistra e editalo.',
      'selectExtensionPackage' => 'Seleziona pacchetto di estensioni',
      'extensionInstalled' => 'L\'Estensione {name} {version} è stata installata',
      'installExtension' => 'L\'Estensione  {name} {version} è pronta per essere installata',
      'uninstallConfirmation' => 'Sei sicuro di voler disinstallare l\'estensione ?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Settaggi di sistema dell\'applicazione.',
      'scheduledJob' => 'Jobs eseguiti da cron.',
      'upgrade' => 'Aggiorna EspoCRM.',
      'clearCache' => 'Pulisci la cache del backend.',
      'rebuild' => 'Ricostruisci backend e pulisci cache.',
      'users' => 'Gestione utenti.',
      'teams' => 'Gestione team.',
      'roles' => 'Gestione ruoli.',
      'portals' => 'Gestione Portali.',
      'portalRoles' => 'Ruoli per il portale.',
      'portalUsers' => 'Utenti del portale.',
      'outboundEmails' => 'Settaggi SMTP per email in uscita.',
      'groupEmailAccounts' => 'Group IMAP email accounts. Email import e Email-to-Case.',
      'personalEmailAccounts' => 'Account di posta elettronica .',
      'emailTemplates' => 'Modelli per email di uscita.',
      'import' => 'Importa dati da file CSV.',
      'layoutManager' => 'Personalizza layouts (lista, dettaglio, modifica, ricerca, aggiorna tutto).',
      'entityManager' => 'Crea e modifica entità custom. Gestisci campi e relazioni.',
      'userInterface' => 'Configura Interfaccia.',
      'authTokens' => 'Sessioni autenticate attive. indirizzo IP e data dell\'ultimo accesso.',
      'authentication' => 'Impostazioni di autenticazione.',
      'currency' => 'Impostazioni di valuta e tassi .',
      'extensions' => 'Installa o Disinstalla le estensioni.',
      'integrations' => 'Integrazione con servizi di terze parti.',
      'notifications' => 'Impostazioni per le notifiche in-app e e-mail .',
      'inboundEmails' => 'Impostazioni per le email in arrivo.',
      'emailFilters' => 'I messaggi di posta elettronica che non corrispondono al filtro specificato, non verranno importati .',
      'actionHistory' => 'Log delle azioni utenti',
      'labelManager' => 'Personalizza etichette dell\'applicazione',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'X-Small',
        'small' => 'Small',
        'medium' => 'Medium',
        'large' => 'Large',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'E',
      'or' => 'O',
      'not' => 'NON',
    ),
  ),
  'Attachment' => 
  array (
    'insertFromSourceLabels' => 
    array (
      'Document' => 'Inserisci Documento',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Utente',
      'ipAddress' => 'Indirizzo IP',
      'lastAccess' => 'Data Ultimo Accesso',
      'createdAt' => 'Data Accesso',
      'isActive' => 'È Attivo',
      'portal' => 'Portale',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Storico Azioni',
    ),
    'presetFilters' => 
    array (
      'active' => 'Attivo',
      'inactive' => 'Inattivo',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Imposta Inattivo',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Imposta Inattivo',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Titolo',
      'dateFrom' => 'Dalla Data',
      'dateTo' => 'Alla Data',
      'autorefreshInterval' => 'Intervallo di Aggiornamento Automatico',
      'displayRecords' => 'Visualizza Record',
      'isDoubleHeight' => 'Altezza 2x',
      'mode' => 'Modalità',
      'enabledScopeList' => 'Cosa visualizzare',
      'users' => 'Utenti',
      'entityType' => 'Tipo Entità',
      'primaryFilter' => 'Filtro Primario',
      'boolFilterList' => 'Filtri Addizionali',
      'sortBy' => 'Ordinamento (campo)',
      'sortDirection' => 'Ordinamento (direzione)',
      'expandedLayout' => 'Layout',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Settimana (agenda)',
        'basicWeek' => 'Settimana',
        'month' => 'Mese',
        'basicDay' => 'Giorno',
        'agendaDay' => 'Giorno (agenda)',
        'timeline' => 'Sequenza Temporale',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Seleziona Tipo Entità nelle opzioni della dashlet',
    ),
  ),
  'DynamicLogic' => 
  array (
    'label' => 
    array (
      'Field' => 'Campo',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'Equivale',
        'notEquals' => 'Non Equivale',
        'greaterThan' => 'Maggiore Di',
        'lessThan' => 'Minore Di',
        'greaterThanOrEquals' => 'Maggiore o Uguale',
        'lessThanOrEquals' => 'Minore o Uguale',
        'in' => 'In',
        'notIn' => 'Non In',
        'inPast' => 'Nel Passato',
        'inFuture' => 'Nel Futuro',
        'isToday' => 'È Oggi',
        'isTrue' => 'È Vero',
        'isFalse' => 'È Falso',
        'isEmpty' => 'È Vuoto',
        'isNotEmpty' => 'Non È Vuoto',
        'contains' => 'Contiene',
        'notContains' => 'Non Contiene',
        'has' => 'Contiene',
        'notHas' => 'Non Contiene',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome (Oggetto)',
      'parent' => 'Genitore',
      'status' => 'Stato',
      'dateSent' => 'Data Invio',
      'from' => 'Da',
      'to' => 'A',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Rispondi a',
      'replyToString' => 'Rispondi a (String)',
      'isHtml' => 'È Html',
      'body' => 'Corpo',
      'subject' => 'Oggetto',
      'attachments' => 'Allegati',
      'selectTemplate' => 'Seleziona Modello',
      'fromEmailAddress' => 'Indirizzo Mittente',
      'toEmailAddresses' => 'Indirizzo Destinatario',
      'emailAddress' => 'Indirizzo Email',
      'deliveryDate' => 'Data di Consegna',
      'account' => 'Account',
      'users' => 'Utenti',
      'replied' => 'Risposta',
      'replies' => 'Risposte',
      'isRead' => 'Letto',
      'isNotRead' => 'Non letto',
      'isImportant' => 'Importante',
      'isReplied' => 'Risposto',
      'isNotReplied' => 'Non Risposto',
      'isUsers' => 'È dell\'Utente',
      'inTrash' => 'Nel Cestino',
      'sentBy' => 'Sent By',
      'folder' => 'Cartella',
      'inboundEmails' => 'Account di Gruppo',
      'emailAccounts' => 'Account Personale',
      'hasAttachment' => 'Ha Allegati',
      'assignedUsers' => 'Assigned Users',
    ),
    'links' => 
    array (
      'replied' => 'Risposto',
      'replies' => 'Risposte',
      'inboundEmails' => 'Account di Gruppo',
      'emailAccounts' => 'Account Personali',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Sent By',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Bozza',
        'Sending' => 'Invio',
        'Sent' => 'Inviato',
        'Archived' => 'Archiviato',
        'Received' => 'Ricevuto',
        'Failed' => 'Fallito',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Archivio Email',
      'Archive Email' => 'Archivio Email',
      'Compose' => 'Componi',
      'Reply' => 'Rispondi',
      'Reply to All' => 'Rispondi a tutti',
      'Forward' => 'Inoltra',
      'Original message' => 'Messaggio originale',
      'Forwarded message' => 'Messaggio inoltrato',
      'Email Accounts' => 'Email Account Personali',
      'Inbound Emails' => 'Account Email di Gruppo',
      'Email Templates' => 'Modelli di Emali',
      'Send Test Email' => 'Invio Email di Prova',
      'Send' => 'Invio',
      'Email Address' => 'Indirizzo Email',
      'Mark Read' => 'Contrassegna come letto',
      'Sending...' => 'Invio...',
      'Save Draft' => 'Salva Bozza',
      'Mark all as read' => 'Contrassegna tutti come letto',
      'Show Plain Text' => 'Visualizza testo normale',
      'Mark as Important' => 'Contrassegna come Importante',
      'Unmark Importance' => 'Deselezione come Importante',
      'Move to Trash' => 'Sposta nel Cestino',
      'Retrieve from Trash' => 'Ripristina da Cestino',
      'Move to Folder' => 'Sposta nella Cartella',
      'Filters' => 'Filtri',
      'Folders' => 'Cartelle',
      'Create Lead' => 'Crea Guida',
      'Create Contact' => 'Crea Contatto',
      'Add to Contact' => 'Aggiungi ai Contatti',
      'Add to Lead' => 'Aggiungi alle Lead',
      'Create Task' => 'Crea Task',
      'Create Case' => 'Crea Caso',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'SMTP non configurato. {link}.',
      'testEmailSent' => 'L\'e-mail di prova è stata inviata',
      'emailSent' => 'L\'email è stata inviata',
      'savedAsDraft' => 'Salvato come bozza.',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Inviato',
      'archived' => 'Archiviato',
      'inbox' => 'Inbox',
      'drafts' => 'Bozze',
      'trash' => 'Cestino',
      'important' => 'Importante',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Contrassegna come Letto',
      'markAsNotRead' => 'Contrassegna come non Letto',
      'markAsImportant' => 'Contrassegna come Importante',
      'markAsNotImportant' => 'Deseleziona come Importante',
      'moveToTrash' => 'Sposta nel Cestino',
      'moveToFolder' => 'Sposta nella Cartella',
      'retrieveFromTrash' => 'Recupera dal Cestino',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Password',
      'port' => 'Porta',
      'monitoredFolders' => 'Cartelle Monitorate',
      'ssl' => 'SSL',
      'fetchSince' => 'Recupera a Partire Da',
      'emailAddress' => 'Indirizzo Email',
      'sentFolder' => 'Cartella Inviate',
      'storeSentEmails' => 'Salva Email Inviate',
      'keepFetchedEmailsUnread' => 'Mantenere le Email Scaricate ma non Lette',
      'emailFolder' => 'Metti nella Cartella',
      'useSmtp' => 'Usa SMTP',
      'smtpHost' => 'SMTP Host',
      'smtpPort' => 'SMTP Porta',
      'smtpAuth' => 'SMTP Autenticazione',
      'smtpSecurity' => 'SMTP Sicurezza',
      'smtpUsername' => 'SMTP Username',
      'smtpPassword' => 'SMTP Password',
    ),
    'links' => 
    array (
      'filters' => 'Filtri',
      'emails' => 'Email',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Attivo',
        'Inactive' => 'Non Attivo',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Crea Account Email ',
      'IMAP' => 'IMAP',
      'Main' => 'Principale',
      'Test Connection' => 'Test della Connessione',
      'Send Test Email' => 'Test Invio Email',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Impossibile connettersi al server IMAP',
      'connectionIsOk' => 'La Connessione è Ok',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Le Cartelle devono essere separate con una virgola.

Puoi aggiungere una cartella \'Inviati\' per sincronizzare le email inviate da un client di posta esterno.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server. Email Address field should match the address emails will be sent from.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primario',
      'Opted Out' => 'Rinuncia',
      'Invalid' => 'Non valido',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Da',
      'to' => 'A',
      'subject' => 'Oggetto',
      'bodyContains' => 'Contenuto del Corpo',
      'action' => 'Azione',
      'isGlobal' => 'È Globale',
      'emailFolder' => 'Cartella',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Crea un filtro per le Email',
      'Emails' => 'Email',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignora',
        'Move to Folder' => 'Sposta nella Cartella',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Dai un nome esplicativo al filtro.',
      'subject' => 'Utilizzare caratteri jolly *:

text * - inizia con il testo ,
*testo* - contiene testo ,
*testo - si conclude con il testo.',
      'bodyContains' => 'Il corpo del messaggio contiene una delle parole o frasi specificate',
      'from' => 'Messaggi di posta elettronica inviati dall\'indirizzo specificato. Lascia vuoto se non necessario. È possibile utilizzare caratteri jolly *.',
      'to' => 'Messaggi di posta elettronica inviati all\'indirizzo specificato . Lascia vuoto se non necessario . È possibile utilizzare caratteri jolly *.',
      'isGlobal' => 'Si applica questo filtro per tutte le email in arrivo al sistema.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Salta Notifiche',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Crea Cartella',
      'Manage Folders' => 'Gestione Cartelle',
      'Emails' => 'Email',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'isHtml' => 'È Html',
      'body' => 'Corpo',
      'subject' => 'Oggetto',
      'attachments' => 'Allegato',
      'insertField' => 'Inserisci Campo',
      'oneOff' => 'One-off',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Crea Modello Email',
      'Info' => 'Info',
    ),
    'messages' => 
    array (
      'infoText' => 'Le variabili disponibili :

{optOutUrl} &#8211; URL per il link unsubscribe};

{optOutLink} &#8211; link di unsubscribe.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Abilita se hai intenzione di utilizzare questo modello una sola volta. Per esempio. per Email Massive.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Attuale',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Campi',
      'Relationships' => 'Relazioni',
      'Schedule' => 'Programma',
      'Log' => 'Log',
      'Formula' => 'Formula',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'type' => 'Tipo',
      'labelSingular' => 'Etichetta Singola',
      'labelPlural' => 'Etichetta Multipla',
      'stream' => 'Stream',
      'label' => 'Etichetta',
      'linkType' => 'Tipo di Link',
      'entityForeign' => 'Entità Esterna',
      'linkForeign' => 'Collegamento Esterno',
      'link' => 'Link',
      'labelForeign' => 'Label Esterna',
      'sortBy' => 'Ordine predefinita (campo)',
      'sortDirection' => 'Ordine predefinito (direzione)',
      'relationName' => 'Nome Tabella di Mezzo',
      'linkMultipleField' => 'Collegamento per Campi Multipli',
      'linkMultipleFieldForeign' => 'Collegamento Esterno per Campi Multipli',
      'disabled' => 'Disabilitato',
      'textFilterFields' => 'Campi Filtro testuale',
      'audited' => 'Audited',
      'auditedForeign' => 'Foreign Audited',
      'statusField' => 'Campo Stato',
      'beforeSaveCustomScript' => 'Script Custom prima del salvataggio',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Nessun',
        'Base' => 'Base',
        'Person' => 'Persone',
        'CategoryTree' => 'Albero delle Categorie',
        'Event' => 'Evento',
        'BasePlus' => 'Base Plus',
        'Company' => 'Azienda',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Molti-a-Molti',
        'oneToMany' => 'Uno-a-Molti',
        'manyToOne' => 'Molti-a-Uno',
        'parentToChildren' => 'Padre-a-Figlio',
        'childrenToParent' => 'Figlio-a-Padre',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Crescente',
        'desc' => 'Decrescente',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'L\'Entità è stata creata',
      'linkAlreadyExists' => 'Conflitto sul Nome del link.',
      'linkConflict' => 'Conflitto sul nome: link o campo con lo stesso nome già esistente',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Gli aggiornamenti di questo campo sono loggati nello stream',
      'textFilterFields' => 'Campi usati dalla ricerca testuale',
      'stream' => 'L\'entità ha uno Stream',
      'disabled' => 'Controlla se hai bisogno di questa entità nel tuo sistema.',
      'linkAudited' => 'Creare record correlati e linkarli a record esistenti sarà loggato nello Stream.',
      'linkMultipleField' => 'Linkare campi multipli è un modo veloce di modificare le relazioni. Non usarlo se hai un numero elevato di record correlati.',
      'entityType' => 'Base Plus - ha pannelli Attività, Storico e Task.

Eventi - disponibile nel Calendario e nel pannello Attività.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Esporta tutti i campi',
      'fieldList' => 'Lista campi',
      'format' => 'Formato',
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
      'name' => 'Nome',
      'version' => 'Versione',
      'description' => 'Descrizione',
      'isInstalled' => 'Installato',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Disinstallato',
      'Install' => 'Installa',
    ),
    'messages' => 
    array (
      'uninstalled' => 'L\'Estensione {nome} è stata disinstallata',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Connettersi',
      'Connected' => 'Connesso',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Dynamic Logic',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Nessuno',
        'javascript: return this.dateTime.getNow(1);' => 'Ora',
        'javascript: return this.dateTime.getNow(5);' => 'Ora (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Ora (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Ora (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 ora',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 giorno',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 giorni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 giorni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 giorni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 giorni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 giorni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 settimana',
      ),
      'dateDefault' => 
      array (
        '' => 'Nessuno',
        'javascript: return this.dateTime.getToday();' => 'Oggi',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 giorno',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 settimana',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 settimane',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 settimane',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 mese',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 anno',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Gli aggiornamenti saranno loggati nello stream.',
      'required' => 'Il campo sarà obbligatorio. Non può essere lasciato vuoto.',
      'default' => 'Il valore sarà impostato di default appena creato.',
      'min' => 'Valore minimo accettabile.',
      'max' => 'Valore massimo accettabile.',
      'seeMoreDisabled' => 'Se disattivato i testi lunghi saranno abbreviati.',
      'lengthOfCut' => 'Quanto può essere lungo il testo prima di essere tagliato.',
      'maxLength' => 'Lunghezza massima accettabile per il testo.',
      'before' => 'La data dovrebbe essere antecedente alla data del campo specificato.',
      'after' => 'La data dovrebbe essere successiva alla data del campo specificato.',
      'readOnly' => 'Il campo non può essere specificato dall\'utente. Ma può essere calcolato dalla formula.',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Email',
      'User' => 'Utente',
      'Team' => 'Team',
      'Role' => 'Ruolo',
      'EmailTemplate' => 'Modello Email',
      'EmailAccount' => 'Personal Email Account',
      'EmailAccountScope' => 'Personal Email Account',
      'OutboundEmail' => 'Email in uscita',
      'ScheduledJob' => 'Job Schedulato',
      'ExternalAccount' => 'Account Esterno',
      'Extension' => 'Estensione',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Account Email di Gruppo',
      'Stream' => 'Stream',
      'Import' => 'Importazione',
      'Template' => 'Modello',
      'Job' => 'Job',
      'EmailFilter' => 'Filtro Email',
      'Portal' => 'Portale',
      'PortalRole' => 'Ruolo Portale',
      'Attachment' => 'Allegato',
      'EmailFolder' => 'Cartella Email',
      'PortalUser' => 'Utente Portale',
      'ScheduledJobLogRecord' => 'Log Record del Job Schedulati',
      'PasswordChangeRequest' => 'Richiesta di Cambio Password',
      'ActionHistoryRecord' => 'Storico Record delle Azioni',
      'AuthToken' => 'Auth Token',
      'UniqueId' => 'ID Univoco',
      'LastViewed' => 'Ultima Apertura',
      'Settings' => 'Impostazioni',
      'FieldManager' => 'Gestore Campi',
      'Integration' => 'Integrazione',
      'LayoutManager' => 'Gestore Layout',
      'EntityManager' => 'Gestore Entità',
      'Export' => 'Esporta',
      'DynamicLogic' => 'Logica Dinamica',
      'DashletOptions' => 'Opzioni Dashlet',
      'Admin' => 'Amministratore',
      'Global' => 'Globale',
      'Preferences' => 'Preferenze',
      'EmailAddress' => 'Indirizzo Email',
      'PhoneNumber' => 'Numero di Telefono',
      'Account' => 'Account',
      'Contact' => 'Contatti',
      'Lead' => 'Lead',
      'Target' => 'Target',
      'Opportunity' => 'Opportunità',
      'Meeting' => 'Meeting',
      'Calendar' => 'Calendario',
      'Call' => 'Chiamata',
      'Task' => 'Task',
      'Case' => 'Caso',
      'Document' => 'Documento',
      'DocumentFolder' => 'Cartella Documenti',
      'Campaign' => 'Campagna',
      'TargetList' => 'Elenco Target',
      'MassEmail' => 'Email Massima',
      'EmailQueueItem' => 'Email Queue Item',
      'CampaignTrackingUrl' => 'URL di Tracking',
      'Activities' => 'Attività',
      'KnowledgeBaseArticle' => 'Articolo Knowledge Base',
      'KnowledgeBaseCategory' => 'Categoria Knowledge Base',
      'CampaignLogRecord' => 'Log Record della Campagna',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Email',
      'User' => 'Utenti',
      'Team' => 'Team',
      'Role' => 'Ruoli',
      'EmailTemplate' => 'Modelli Email',
      'EmailAccount' => 'Account Email Personale',
      'EmailAccountScope' => 'Account Email Personale',
      'OutboundEmail' => 'Email in Uscita',
      'ScheduledJob' => 'Jobs schedulati',
      'ExternalAccount' => 'Account Esterni',
      'Extension' => 'Estensioni',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Account di Email di Gruppo',
      'Stream' => 'Stream',
      'Import' => 'Importa Risultati',
      'Template' => 'Modelli',
      'Job' => 'Jobs',
      'EmailFilter' => 'Filtri Email',
      'Portal' => 'Portali',
      'PortalRole' => 'Ruoli Portale',
      'Attachment' => 'Allegati',
      'EmailFolder' => 'Cartelle di Posta',
      'PortalUser' => 'Utenti Portale',
      'ScheduledJobLogRecord' => 'Log Record dei Job Schedulati',
      'PasswordChangeRequest' => 'Richieste di Cambio Password',
      'ActionHistoryRecord' => 'Storico Azioni',
      'AuthToken' => 'Auth Tokens',
      'UniqueId' => 'ID Univoci',
      'LastViewed' => 'Ultima Apertura',
      'Account' => 'Account',
      'Contact' => 'Contatti',
      'Lead' => 'Lead',
      'Target' => 'Target',
      'Opportunity' => 'Opportunità',
      'Meeting' => 'Meeting',
      'Calendar' => 'Calendario',
      'Call' => 'Chiamate',
      'Task' => 'Task',
      'Case' => 'Casi',
      'Document' => 'Documenti',
      'DocumentFolder' => 'Cartella Documenti',
      'Campaign' => 'Campagne',
      'TargetList' => 'Liste di Target',
      'MassEmail' => 'Email Massive',
      'EmailQueueItem' => 'Email Queue Items',
      'CampaignTrackingUrl' => 'URL di Tracking',
      'Activities' => 'Attività',
      'KnowledgeBaseArticle' => 'Knowledge Base',
      'KnowledgeBaseCategory' => 'Categorie della Knowledge Base',
      'CampaignLogRecord' => 'Log Record della Campagna',
    ),
    'labels' => 
    array (
      'Misc' => 'Varie',
      'Merge' => 'Unire',
      'None' => 'Nessun',
      'Home' => 'Home',
      'by' => 'di',
      'Saved' => 'Salvato',
      'Error' => 'Errore',
      'Select' => 'Selezionare',
      'Not valid' => 'Non valido',
      'Please wait...' => 'Attendere...',
      'Please wait' => 'Attendere',
      'Loading...' => 'Caricamento in corso...',
      'Uploading...' => 'Caricamento...',
      'Sending...' => 'Invio...',
      'Merging...' => 'Sto unificando...',
      'Merged' => 'Unificato',
      'Removed' => 'Rimosso',
      'Posted' => 'Postato',
      'Linked' => 'Collegato',
      'Unlinked' => 'Scollegato',
      'Done' => 'Fatto',
      'Access denied' => 'Accesso negato',
      'Not found' => 'Non trovato',
      'Access' => 'Accesso',
      'Are you sure?' => 'Sei sicuro?',
      'Record has been removed' => 'Il Record è stato rimosso',
      'Wrong username/password' => 'username/password Errati',
      'Post cannot be empty' => 'Il Post non può essere vuoto',
      'Removing...' => 'Cancello...',
      'Unlinking...' => 'Sto scollegando...',
      'Posting...' => 'Posting...',
      'Username can not be empty!' => 'L\'Username non può essere vuota!',
      'Cache is not enabled' => 'Cache non abilitata',
      'Cache has been cleared' => 'Cache pulita',
      'Rebuild has been done' => 'Rebuild completato',
      'Return to Application' => 'Torna all\'Applicazione',
      'Saving...' => 'Salvataggio...',
      'Modified' => 'Modificato',
      'Created' => 'Creato',
      'Create' => 'Crea',
      'create' => 'crea',
      'Overview' => 'Panoramica',
      'Details' => 'Dettagli',
      'Add Field' => 'Aggiungi Campo',
      'Add Dashlet' => 'Aggiungi Dashlet',
      'Filter' => 'Filtro',
      'Edit Dashboard' => 'Modifica Dashboard',
      'Add' => 'Aggiungi',
      'Add Item' => 'Aggiungi Elemento',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Altro',
      'Search' => 'Cerca',
      'Only My' => 'Solo il mio',
      'Open' => 'Apri',
      'Admin' => 'Admministratore',
      'About' => 'Informazioni su',
      'Refresh' => 'Aggiorna',
      'Remove' => 'Elimina',
      'Options' => 'Opzioni',
      'Username' => 'Username',
      'Password' => 'Password',
      'Login' => 'Login',
      'Log Out' => 'Log Out',
      'Preferences' => 'Preferenze',
      'State' => 'Stati',
      'Street' => 'via',
      'Country' => 'Nazione',
      'City' => 'Città',
      'PostalCode' => 'Codice Postale',
      'Followed' => 'Seguito',
      'Follow' => 'Segui',
      'Followers' => 'Followers',
      'Clear Local Cache' => 'Cancella la Cache locale',
      'Actions' => 'Azioni',
      'Delete' => 'Cancella',
      'Update' => 'Aggiorna',
      'Save' => 'Salva',
      'Edit' => 'Modifica',
      'View' => 'Vista',
      'Cancel' => 'Annulla',
      'Apply' => 'Applica',
      'Unlink' => 'Scollega',
      'Mass Update' => 'Aggiornamento Massivo',
      'Export' => 'Esporta',
      'No Data' => 'Nessun Dato',
      'No Access' => 'Nessun Accesso',
      'All' => 'Tutti',
      'Active' => 'Attivo',
      'Inactive' => 'Non Attivo',
      'Write your comment here' => 'Scrivi il tuo commento qui',
      'Post' => 'Post',
      'Stream' => 'Stream',
      'Show more' => 'Mostra altro',
      'Dashlet Options' => 'Opzioni Dashlet',
      'Full Form' => 'Modulo Completo',
      'Insert' => 'Inserire',
      'Person' => 'Persone',
      'First Name' => 'Nome',
      'Last Name' => 'Cognome',
      'Original' => 'Originale',
      'You' => 'Tu',
      'you' => 'tu',
      'change' => 'cambia',
      'Change' => 'Cambia',
      'Primary' => 'Primario',
      'Save Filter' => 'Salva Filtro',
      'Administration' => 'Amministrazione',
      'Run Import' => 'Avvia Importazione',
      'Duplicate' => 'Duplicato',
      'Notifications' => 'Notifiche',
      'Mark all read' => 'Contrassegna tutti come letto',
      'See more' => 'Vedi altro',
      'Today' => 'Oggi',
      'Tomorrow' => 'Domani',
      'Yesterday' => 'Ieri',
      'Submit' => 'Invio',
      'Close' => 'Chiudi',
      'Yes' => 'Sí',
      'No' => 'No',
      'Select All Results' => 'Seleziona tutti i Risultati',
      'Value' => 'Valore',
      'Current version' => 'Versione in uso',
      'List View' => 'Visualizzazione ad Elenco',
      'Tree View' => 'Visualizzazione ad Albero',
      'Unlink All' => 'Scollega tutto',
      'Total' => 'Totale',
      'Print to PDF' => 'Stampa in PDF',
      'Default' => 'Default',
      'Number' => 'Numero',
      'From' => 'Da',
      'To' => 'A',
      'Create Post' => 'Crea Post',
      'Previous Entry' => 'Elemento Precedente',
      'Next Entry' => 'Elemento Successivo',
      'View List' => 'Visualizza Lista',
      'Attach File' => 'Allega File',
      'Skip' => 'Salta',
      'Attribute' => 'Attributo',
      'Function' => 'Funzione',
      'Self-Assign' => 'Auto-Assegna',
      'Self-Assigned' => 'Auto-Assegnato',
      'Create InboundEmail' => 'Crea Email in ingresso',
      'Activities' => 'Attività',
      'History' => 'Storico',
      'Attendees' => 'Partecipanti',
      'Schedule Meeting' => 'Scehdula Meeting',
      'Schedule Call' => 'Schedula chiamata',
      'Compose Email' => 'Componi email',
      'Log Meeting' => 'Log Meeting',
      'Log Call' => 'Log Chiamata',
      'Archive Email' => 'Archivio Email',
      'Create Task' => 'Crea Task',
      'Tasks' => 'Task',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Attendere...',
      'posting' => 'Posting...',
      'loading' => 'Sto Caricando...',
      'saving' => 'Sto Salvando...',
      'confirmLeaveOutMessage' => 'Sei sicuro di volere abbandonare il form?',
      'notModified' => 'Non hai modificato il record',
      'duplicate' => 'Il record che stai creando potrebbe esistere già',
      'dropToAttach' => 'Rilascia per allegare',
      'fieldIsRequired' => '{field} è richiesto',
      'fieldShouldBeEmail' => '{field} deve essere un indirizzo email valido',
      'fieldShouldBeFloat' => '{field} deve essere un valore float',
      'fieldShouldBeInt' => '{field} deve essere un valore integer',
      'fieldShouldBeDate' => '{field} deve essere una data',
      'fieldShouldBeDatetime' => '{field} devono essere una data o orario validi',
      'fieldShouldAfter' => '{field} deve essere dopo {otherField}',
      'fieldShouldBefore' => '{field} deve essere prima {otherField}',
      'fieldShouldBeBetween' => '{field} deve essere compreso tra {min} e {max}',
      'fieldShouldBeLess' => '{field} deve essere minore di {value}',
      'fieldShouldBeGreater' => '{field} deve essere maggiore di {value}',
      'fieldBadPasswordConfirm' => '{field} non confermato correttamente',
      'resetPreferencesDone' => 'Le Preferenze sono state ripristinate con le impostazioni predefinite',
      'confirmation' => 'Sei sicuro?',
      'unlinkAllConfirmation' => 'Sei sicuro di voler scollegare tutti i record correlati?',
      'resetPreferencesConfirmation' => 'Sei sicuro di voler ripristinare le preferenze ai valori predefiniti?',
      'removeRecordConfirmation' => 'Sei sicuro di voler rimuovere il record?',
      'unlinkRecordConfirmation' => 'Sei sicuro di voler scollegare il record correlato?',
      'removeSelectedRecordsConfirmation' => 'Sei sicuro di voler rimuovere i record selezionati?',
      'massUpdateResult' => '{count} record sono stati aggiornati',
      'massUpdateResultSingle' => '{count} record è stato aggiornato',
      'noRecordsUpdated' => 'Nessun record è stato aggiornato',
      'massRemoveResult' => '{count} record sono stati rimossi',
      'massRemoveResultSingle' => '{count} record è stato rimosso',
      'noRecordsRemoved' => 'Nessun record è stato rimosso',
      'clickToRefresh' => 'Clicca per aggiornare',
      'streamPostInfo' => 'Scrivi <strong>@username</strong> per menzionare gli utenti nel post.

Markdown syntax disponibile:
`<code>code</code>`
**<strong>strong text</strong>**
*<em>emphasized text</em>*
~<del>deleted text</del>~
> blockquote
[text](url)',
      'writeYourCommentHere' => 'Scrivi il tuo commento qui',
      'writeMessageToUser' => 'Scrivi un messaggio a {user}',
      'writeMessageToSelf' => 'Scrivi un messaggio sul tuo streame',
      'typeAndPressEnter' => 'Scrivi e Premi Invio',
      'checkForNewNotifications' => 'Verifica la presenza di nuove notifiche',
      'checkForNewNotes' => 'Controlla il flusso degli aggiornamenti',
      'internalPost' => 'Il Messaggio sarà visto solo dagli utenti interni',
      'internalPostTitle' => 'Il post è visibile solo agli utenti interni',
      'done' => 'Fatto',
      'confirmMassFollow' => 'Sei sicuro di voler seguire i record selezionati?',
      'confirmMassUnfollow' => 'Sei sicuro di voler smettere di seguire i record selezionati?',
      'massFollowResult' => 'Ora segui {count} record',
      'massUnfollowResult' => 'Ora non segui {count} record',
      'massFollowResultSingle' => 'Ora segui {count} record',
      'massUnfollowResultSingle' => 'Ora non segui {count} record',
      'massFollowZeroResult' => 'Non hai seguito nessuno',
      'massUnfollowZeroResult' => 'Non hai smesso di seguire nessuno',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Solo il mio',
      'followed' => 'Seguire',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Seguire',
      'all' => 'Tutti',
    ),
    'massActions' => 
    array (
      'remove' => 'Eliminare',
      'merge' => 'Unire',
      'massUpdate' => 'Aggiornamento Massivo',
      'export' => 'Esportare',
      'follow' => 'Segui',
      'unfollow' => 'Non Seguire',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'firstName' => 'Nome',
      'lastName' => 'Cognome',
      'salutationName' => 'Saluto',
      'assignedUser' => 'Utente Assegnato',
      'assignedUsers' => 'Utenti Assegnati',
      'emailAddress' => 'Email',
      'assignedUserName' => 'Nome Utente assegnato',
      'teams' => 'Team',
      'createdAt' => 'Creato il',
      'modifiedAt' => 'Modificato il',
      'createdBy' => 'Creato da',
      'modifiedBy' => 'Modificato da',
      'description' => 'Descrizione',
      'address' => 'Indirizzo',
      'phoneNumber' => 'Telefono',
      'phoneNumberMobile' => 'Telefono (Cellulare)',
      'phoneNumberHome' => 'Telefono (Casa)',
      'phoneNumberFax' => 'Telefono (Fax)',
      'phoneNumberOffice' => 'Telefono (Ufficio)',
      'phoneNumberOther' => 'Telefono (Altro)',
      'order' => 'Ordina',
      'parent' => 'Parente',
      'children' => 'Figlio',
      'id' => 'ID',
      'billingAddressCity' => 'Città',
      'billingAddressCountry' => 'Nazione',
      'billingAddressPostalCode' => 'Codice Postale',
      'billingAddressState' => 'Stato',
      'billingAddressStreet' => 'via',
      'billingAddressMap' => 'Mappa',
      'addressCity' => 'Città',
      'addressStreet' => 'via',
      'addressCountry' => 'Nazione',
      'addressState' => 'Stato',
      'addressPostalCode' => 'Codice Postale',
      'addressMap' => 'Mappa',
      'shippingAddressCity' => 'Città (Spedizione)',
      'shippingAddressStreet' => 'via (Spedizione)',
      'shippingAddressCountry' => 'Nazione (Spedizione)',
      'shippingAddressState' => 'Stato (Spedizione)',
      'shippingAddressPostalCode' => 'Codice Postale (Spedizione)',
      'shippingAddressMap' => 'Mappa (Spedizione)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Utente Assegnato',
      'createdBy' => 'Creato da',
      'modifiedBy' => 'Modificato da',
      'team' => 'Team',
      'roles' => 'Ruoli',
      'teams' => 'Teams',
      'users' => 'Utenti',
      'parent' => 'Genitore',
      'children' => 'Children',
      'contacts' => 'Contatti',
      'opportunities' => 'Opportunità',
      'leads' => 'Lead',
      'meetings' => 'Meeting',
      'calls' => 'Chiamate',
      'tasks' => 'Task',
      'emails' => 'Email',
      'accounts' => 'Account',
      'cases' => 'Casi',
      'documents' => 'Documenti',
      'account' => 'Account',
      'opportunity' => 'Opportunità',
      'contact' => 'Contatto',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Stream',
      'Emails' => 'La mia Inbox',
      'Records' => 'Lista Record',
      'Leads' => 'Le Mie Lead',
      'Opportunities' => 'Le mie Opportunità',
      'Tasks' => 'I miei Task',
      'Cases' => 'I miei Casi',
      'Calendar' => 'Calendario',
      'Calls' => 'Le mie Chiamate',
      'Meetings' => 'I miei Meeting',
      'OpportunitiesByStage' => 'Opportunità ordinate per Stato',
      'OpportunitiesByLeadSource' => 'Opportunità ordinate per provenienza Lead',
      'SalesByMonth' => 'Vendite per Mese',
      'SalesPipeline' => 'Canale di Vendita',
      'Activities' => 'Le mie Attività',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} è stato assegnato a te',
      'emailReceived' => 'Email ricevuta da {from}',
      'entityRemoved' => '{user} ha rimosso {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} ha pubblicato su {entityType} {entity}',
      'attach' => '{user} ha allegato a {entityType} {entity}',
      'status' => '{user} ha aggiornato {field} di {entityType} {entity}',
      'update' => '{user} ha aggiornato {entityType} {entity}',
      'postTargetTeam' => '{user} ha postato al team {target}',
      'postTargetTeams' => '{user} ha postato ai team {target}',
      'postTargetPortal' => '{user} ha postato sul portale {target}',
      'postTargetPortals' => '{user} ha postato sui portali {target}',
      'postTarget' => '{user} postato su {target}',
      'postTargetYou' => '{user} ha postato a te',
      'postTargetYouAndOthers' => '{user} ha postato a {target} e a te',
      'postTargetAll' => '{user} ha postato a tutti',
      'postTargetSelf' => '{user} auto-pubblicato',
      'postTargetSelfAndOthers' => '{user} ha pubblicato a {target} e a se stesso',
      'mentionInPost' => '{user} ha menzionato {mentioned} in {entityType} {entity}',
      'mentionYouInPost' => '{user} ti ha menzionato in {entityType} {entity}',
      'mentionInPostTarget' => '{user} ha menzionato {mentioned} in un post',
      'mentionYouInPostTarget' => '{user} ti ha menzionato in un post a {target}',
      'mentionYouInPostTargetAll' => '{user} ti ha menzionato in un post visibile a tutti',
      'mentionYouInPostTargetNoTarget' => '{user} ti ha menzionato in un post',
      'create' => '{user} ha creato {entityType} {entity}',
      'createThis' => '{user} ha creato questo {entityType}',
      'createAssignedThis' => '{user} ha creato questo {entity} assegnato a {assignee}',
      'createAssigned' => '{user} creato {entityType} {entity} assegnato a {assignee}',
      'createAssignedYou' => '{user} ha creato {entityType} {entity} assegnato a te',
      'createAssignedThisSelf' => '{user} ha creato questo {entityType} e lo ha auto-assegnato',
      'createAssignedSelf' => '{user} ha creato {entityType} {entity} e lo ha auto-assegnato',
      'assign' => '{user} ha assegnato {entityType} {entity} a {assignee}',
      'assignThis' => '{user} ha assegnato questo {entityType} a {assignee}',
      'assignYou' => '{user} ha assegnato {entityType} {entity} a te',
      'assignThisVoid' => '{user} si è tolto da questo {entityType}',
      'assignVoid' => '{user} si è tolto da {entityType} {entity}',
      'assignThisSelf' => '{user} si è auto-assegnato questo {entityType}',
      'assignSelf' => '{user}  si è auto-assegnato {entityType} {entity}',
      'postThis' => '{user} ha pubblicato',
      'attachThis' => '{user} ha allegato un file',
      'statusThis' => '{user} ha aggiornato {field}',
      'updateThis' => '{user} ha aggiornato questo {entityType}',
      'createRelatedThis' => '{user} ha creato {relatedEntityType} {relatedEntity} correlato a questo {entityType}',
      'createRelated' => '{user} ha creato {relatedEntityType} {relatedEntity} correlato a {entityType} {entity}',
      'relate' => '{user} ha collegato {relatedEntityType} {relatedEntity} con {entityType} {entity}',
      'relateThis' => '{user} ha collegato {relatedEntityType} {relatedEntity} con questo {entityType}',
      'emailReceivedFromThis' => 'E-mail ricevuta da {from}',
      'emailReceivedInitialFromThis' => 'E-mail ricevuta da {from}, questo {entityType} è stato creato',
      'emailReceivedThis' => 'Email ricevuta',
      'emailReceivedInitialThis' => 'Email ricevuta, questo {entityType} è stato creato',
      'emailReceivedFrom' => 'Email ricevuta da {from}, correlata a {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email ricevuta da {from}, {entityType} {entity} creata',
      'emailReceived' => 'E-mail ricevute correlata a {entityType} {entity}',
      'emailReceivedInitial' => 'Email ricevuta: {entityType} {entity} creato',
      'emailReceivedInitialFrom' => 'Email ricevuta da {from}, {entityType} {entity} creata',
      'emailSent' => '{by} ha inviato una e-mail correlata a {entityType} {entity}',
      'emailSentThis' => '{by} ha inviato una e-mail',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} ha postato a {target} e se stesso',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} ha postato a {target} e se stessa',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Gennaio',
        1 => 'Febbraio',
        2 => 'Marzo',
        3 => 'Aprile',
        4 => 'Maggio',
        5 => 'Giugno',
        6 => 'Luglio',
        7 => 'Agosto',
        8 => 'Settembre',
        9 => 'Ottobre',
        10 => 'Novembre',
        11 => 'Dicembre',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Gen',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'Mag',
        5 => 'Giu',
        6 => 'Lug',
        7 => 'Ago',
        8 => 'Set',
        9 => 'Ott',
        10 => 'Nov',
        11 => 'Dic',
      ),
      'dayNames' => 
      array (
        0 => 'Domenica',
        1 => 'Lunedi',
        2 => 'Martedi',
        3 => 'Mercoledi',
        4 => 'Giovedi',
        5 => 'Venerdi',
        6 => 'Sabato',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Dom',
        1 => 'Lun',
        2 => 'Mar',
        3 => 'Mer',
        4 => 'Gio',
        5 => 'Ven',
        6 => 'Sab',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Do',
        1 => 'Lu',
        2 => 'Ma',
        3 => 'Me',
        4 => 'Gi',
        5 => 'Ve',
        6 => 'Sa',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Sig.',
        'Mrs.' => 'Sig.ra',
        'Ms.' => 'Sig.ra/Sig.na',
        'Dr.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italiano',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Il',
        'notOn' => 'Non il',
        'after' => 'Dopo',
        'before' => 'Prima',
        'between' => 'Fra',
        'today' => 'Oggi',
        'past' => 'Passato',
        'future' => 'Futuro',
        'currentMonth' => 'Mese Corrente',
        'lastMonth' => 'Mese precedente',
        'currentQuarter' => 'Trimestre Corrente',
        'lastQuarter' => 'Trimestre precedente',
        'currentYear' => 'Anno in corso',
        'lastYear' => 'Anno precedente',
        'lastSevenDays' => 'Ultimi 7 Giorni',
        'lastXDays' => 'Ultimi X Giorni',
        'nextXDays' => 'Prossimi X Giorni',
        'ever' => 'Mai',
        'isEmpty' => 'È Vuoto',
        'olderThanXDays' => 'Più Vecchio di X Giorni',
        'afterXDays' => 'Dopo X Giorni',
      ),
      'searchRanges' => 
      array (
        'is' => 'È',
        'isEmpty' => 'È Vuoto',
        'isNotEmpty' => 'Non è Vuoto',
        'isOneOf' => 'Qualunque Di Questi',
        'isFromTeams' => 'È del Team',
        'isNot' => 'Non è',
        'isNotOneOf' => 'Nessuno Di Questi',
        'anyOf' => 'Qualunque Di Questi',
        'noneOf' => 'Nessuno Di Questi',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Eguaglia',
        'like' => 'È Come (%)',
        'notLike' => 'Non È Come (%)',
        'startsWith' => 'Inzia Con',
        'endsWith' => 'Finsice con',
        'contains' => 'Contiene',
        'notContains' => 'Non Contiene',
        'isEmpty' => 'È Vuoto',
        'isNotEmpty' => 'Non è Vuoto',
        'notEquals' => 'Non Eguaglia',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Eguaglia',
        'notEquals' => 'Diverso',
        'greaterThan' => 'Maggiore di',
        'lessThan' => 'Minore di',
        'greaterThanOrEquals' => 'Maggiore o Uguale a ',
        'lessThanOrEquals' => 'Minore o Uguale a',
        'between' => 'Fra',
        'isEmpty' => 'È Vuoto',
        'isNotEmpty' => 'Non È Vuoto',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Nessun',
        '0.5' => '30 secondi',
        1 => '1 minuto',
        2 => '2 minuti',
        5 => '5 minuti',
        10 => '10 minuti',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Cellulare',
        'Office' => 'Ufficio',
        'Fax' => 'Fax',
        'Home' => 'Casa',
        'Other' => 'Altro',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Popup',
        'Email' => 'Email',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Potete trovare qui la traduzione: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Grassetto',
          'italic' => 'Corsivo',
          'underline' => 'Sottolineato',
          'strike' => 'Barrato',
          'clear' => 'Rimuovi Stile del Carattere',
          'height' => 'Altezza linea',
          'name' => 'Tipo di Font',
          'size' => 'Dimensione Font',
        ),
        'image' => 
        array (
          'image' => 'Immagine',
          'insert' => 'Inserisci Immagine',
          'resizeFull' => 'Ridimensiona a intero',
          'resizeHalf' => 'Ridimensiona a metà',
          'resizeQuarter' => 'Ridimensione a un quarto',
          'floatLeft' => 'Float a Sinistra',
          'floatRight' => 'Float a Destra',
          'floatNone' => 'Nessun Float',
          'dragImageHere' => 'Trascina un\'immagine qui',
          'selectFromFiles' => 'Seleziona dai file',
          'url' => 'URL dell\'Immagine',
          'remove' => 'Rimuovi Immagine',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Inserisci link',
          'unlink' => 'Rimuovi link',
          'edit' => 'Modifica',
          'textToDisplay' => 'Testo da mostrare',
          'url' => 'A quale URL deve puntare questo link?',
          'openInNewWindow' => 'Apri in una nuova finestra',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Inserisici Video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabella',
        ),
        'hr' => 
        array (
          'insert' => 'Inserisci Linea Orizzontale',
        ),
        'style' => 
        array (
          'style' => 'Stile',
          'normal' => 'Normale',
          'blockquote' => 'Quote',
          'pre' => 'Codice',
          'h1' => 'Intestazione 1',
          'h2' => 'Intestazione 2',
          'h3' => 'Intestazione 3',
          'h4' => 'Intestazione 4',
          'h5' => 'Intestazione 5',
          'h6' => 'Intestazione 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Lista non ordinata',
          'ordered' => 'Lista ordinata',
        ),
        'options' => 
        array (
          'help' => 'Aiuto',
          'fullscreen' => 'Schermo intero',
          'codeview' => 'Visualizza Codice',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragrafo',
          'outdent' => 'Rientro a sinistra',
          'indent' => 'Rientro a destra',
          'left' => 'Allinea a sinistra',
          'center' => 'Allinea al centro',
          'right' => 'Allinea a destra',
          'justify' => 'Giustifica',
        ),
        'color' => 
        array (
          'recent' => 'Ultimo Colore',
          'more' => 'Altri Colori',
          'background' => 'Colore di sfondo',
          'foreground' => 'Colore del font',
          'transparent' => 'Trasparente',
          'setTransparent' => 'Imposta trasparente',
          'reset' => 'Reset',
          'resetToDefault' => 'Reset al default',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Tasti rapidi',
          'close' => 'Chiudi',
          'textFormatting' => 'Formattazione testo',
          'action' => 'Azione',
          'paragraphFormatting' => 'Formattazione paragrafo',
          'documentStyle' => 'Stile documento',
        ),
        'history' => 
        array (
          'undo' => 'Annulla',
          'redo' => 'Ripeti azione',
        ),
      ),
    ),
    'themes' => 
    array (
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL Espo',
      'Sakura' => 'Sakura',
      'EspoVertical' => 'Espo con barra laterale',
      'SakuraVertical' => 'Sakura con barra laterale',
      'Violet' => 'Violet',
      'VioletVertical' => 'Violet con barra laterale',
      'Hazyblue' => 'Hazyblue',
      'HazyblueVertical' => 'Hazyblue con barra laterale',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Annulla Import',
      'Return to Import' => 'Ritorna all\'Import',
      'Run Import' => 'Esegui Import',
      'Back' => 'Indietro',
      'Field Mapping' => 'Mapping dei Campi',
      'Default Values' => 'Valori di Default',
      'Add Field' => 'Aggiungi Campo',
      'Created' => 'Creato',
      'Updated' => 'Aggiornato',
      'Result' => 'Risultato',
      'Show records' => 'Mostra i Record',
      'Remove Duplicates' => 'Rimuovi Duplicati',
      'importedCount' => 'Importati (numero)',
      'duplicateCount' => 'Duplicati (numero)',
      'updatedCount' => 'Aggiornati (numero)',
      'Create Only' => 'Crea Solo',
      'Create and Update' => 'Crea & Aggiorna',
      'Update Only' => 'Aggiorna solo',
      'Update by' => 'Aggiornato da',
      'Set as Not Duplicate' => 'Imposta come non duplicati',
      'File (CSV)' => 'File (CSV)',
      'First Row Value' => 'Primo Valore della Riga',
      'Skip' => 'Salta',
      'Header Row Value' => 'Valore della Prima Riga',
      'Field' => 'Campo',
      'What to Import?' => 'Cosa Importare?',
      'Entity Type' => 'Tipo di Entità',
      'What to do?' => 'Cosa fare?',
      'Properties' => 'Proprietà',
      'Header Row' => 'Prima Riga',
      'Person Name Format' => 'Formato Nome Persona',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Delimitatore di campo',
      'Date Format' => 'Formato Data',
      'Decimal Mark' => 'Separatore Decimali',
      'Text Qualifier' => 'Qualificatore del Testo',
      'Time Format' => 'Formato Ora',
      'Currency' => 'Valuta',
      'Preview' => 'Anteprima',
      'Next' => 'Avanti',
      'Step 1' => 'Step 1',
      'Step 2' => 'Step 2',
      'Double Quote' => 'Virgolette',
      'Single Quote' => 'Apici',
      'Imported' => 'Importato',
      'Duplicates' => 'Duplicati',
      'Skip searching for duplicates' => 'Salta ricerca di duplicati',
      'Timezone' => 'Fuso Orario',
    ),
    'messages' => 
    array (
      'utf8' => 'Dovrebbe avere codifica UTF-8',
      'duplicatesRemoved' => 'Duplicati rimossi',
      'inIdle' => 'Esegui più tardi (per molti dati; via cron)',
    ),
    'fields' => 
    array (
      'file' => 'File',
      'entityType' => 'Tipo di Entità',
      'imported' => 'Record Importati',
      'duplicates' => 'Record Duplicati',
      'updated' => 'Record Aggiornati',
      'status' => 'Status',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Fallito',
        'In Process' => 'In Esecuzione',
        'Complete' => 'Completato',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'Indirizzo Email',
      'team' => 'Team Target',
      'status' => 'Stato',
      'assignToUser' => 'Assegna all\'Utente',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Password',
      'port' => 'Porta',
      'monitoredFolders' => 'Cartelle Monitorate',
      'trashFolder' => 'Cestino',
      'ssl' => 'SSL',
      'createCase' => 'Crea Caso',
      'reply' => 'Risposta automatica',
      'caseDistribution' => 'Distribuzione di Casi',
      'replyEmailTemplate' => 'Modello Email di Risposta ',
      'replyFromAddress' => 'Rispondi dall\'Indirizzo',
      'replyToAddress' => 'Rispondi all\'Indirizzo',
      'replyFromName' => 'Rispondi dall\'identità',
      'targetUserPosition' => 'Posizione Utente Target',
      'fetchSince' => 'Recuperare Dal',
      'addAllTeamUsers' => 'Per tutti gli utenti del team',
      'teams' => 'Team',
    ),
    'tooltips' => 
    array (
      'reply' => 'Notifica ai mittenti che i loro messaggi di posta elettronica sono stati ricevuti .

 Verrà inviata, in un certo periodo di tempo, solo una e-mail per ogni destinatario, per evitare loop.',
      'createCase' => 'Creazione automatica di un Caso all\'arrivo di una email.',
      'replyToAddress' => 'Indicare l\'indirizzo email di questo account di posta, per indirizzare qui le risposte.',
      'caseDistribution' => 'Come verranno assegnati i Casi. Assegnato direttamente all\'utente o all\'interno del team.',
      'assignToUser' => 'I casi dell\'utente saranno assegnati a.',
      'team' => 'I casi del team saranno assegnati a.',
      'teams' => 'Le email dei team saranno assegnate a.',
      'targetUserPosition' => 'I casi saranno distribuiti agli utenti con la posizione specificata.',
      'addAllTeamUsers' => 'I Messaggi di posta elettronica appariranno nella Posta in arrivo di tutti gli utenti dei team specificati.',
      'monitoredFolders' => 'Cartelle multiple devono essere separate con una virgola.',
    ),
    'links' => 
    array (
      'filters' => 'Filtri',
      'emails' => 'Email',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Attivo',
        'Inactive' => 'Non Attivo',
      ),
      'caseDistribution' => 
      array (
        '' => 'Nessun',
        'Direct-Assignment' => 'Assegnazione Diretta',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Meno-Occupato',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Crea un Account Email',
      'IMAP' => 'IMAP',
      'Actions' => 'Azioni',
      'Main' => 'Principale',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Impossibile connettersi al server IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Abilitato',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'URI di reindirizzamento',
      'apiKey' => 'API Key',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
      'IctBroadcastconfig' => 'ICTBroadcast Config',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Selezionare una integrazione dal menù.',
      'noIntegrations' => 'Nessuna integrazioni è disponibile.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Ottieni le credenziali OAuth 2.0 dalla Google Developers Console.</b></p><p>Visita <a href="https://console.developers.google.com/project">Google Developers Console</a> per ottenere le credenziali OAuth 2.0 tra cui il Client ID e il Client Secret che devono essere note sia a Google che all\'applicazione EspoCRM.</p>',
      'GoogleMaps' => '<p>Ottieni API key <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">qui</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Stato',
      'executeTime' => 'Esegui Alle',
      'attempts' => 'Tentativi Rimasti',
      'failedAttempts' => 'Tentativi Falliti',
      'serviceName' => 'Servizio',
      'method' => 'Metodo',
      'scheduledJob' => 'Job Schedulato',
      'data' => 'Data',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'In attesa',
        'Success' => 'Successo',
        'Running' => 'In esecuzione',
        'Failed' => 'Fallito',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Larghezza (%)',
      'link' => 'Link',
      'notSortable' => 'Non Ordinabile',
      'align' => 'Allinea',
      'panelName' => 'Nome Pannello',
      'style' => 'Stilo',
      'sticked' => 'Fissato',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Sinistra',
        'right' => 'Destra',
      ),
      'style' => 
      array (
        'default' => 'Default',
        'success' => 'Successo',
        'danger' => 'Pericolo',
        'info' => 'Info',
        'warning' => 'Avviso',
        'primary' => 'Primario',
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Invia',
      'attachments' => 'Allegati',
      'targetType' => 'Target',
      'teams' => 'Team',
      'users' => 'Utenti',
      'portals' => 'Portali',
      'type' => 'Tipo',
      'isGlobal' => 'È Globale',
      'isInternal' => 'È Interno (per utenti interni)',
      'related' => 'Correlato',
      'createdByGender' => 'Creato Dal Genere',
      'data' => 'Data',
      'number' => 'Number',
    ),
    'filters' => 
    array (
      'all' => 'Tutti',
      'posts' => 'Messaggi',
      'updates' => 'Aggiornamenti',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'a me stesso',
        'users' => 'a utente/i specifico/i',
        'teams' => 'a team specifico/i',
        'all' => 'a tutti gli utenti interni',
        'portals' => 'agli utenti del portale',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Scrivi il tuo messaggio qui',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Ruoli',
      'isActive' => 'Attivo',
      'isDefault' => 'Default',
      'tabList' => 'Lista delle schede',
      'quickCreateList' => 'Creazione Rapida List',
      'companyLogo' => 'Logo',
      'theme' => 'Tema',
      'language' => 'Lingua',
      'dashboardLayout' => 'Layout Dashboard',
      'dateFormat' => 'Formato Data',
      'timeFormat' => 'Formato Ora',
      'timeZone' => 'Fuso Orario',
      'weekStart' => 'Primo giorno della Settimana',
      'defaultCurrency' => 'Valuta di default',
      'customUrl' => 'URL personalizzato',
      'customId' => 'ID personalizzato',
    ),
    'links' => 
    array (
      'users' => 'Utenti',
      'portalRoles' => 'Ruoli',
      'notes' => 'Note',
      'articles' => 'Articoli della Knowledge Base',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'I Ruoli specificati verranno applicati a tutti gli utenti di questo portale .',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Crea Portale',
      'User Interface' => 'Interfaccia Utente',
      'General' => 'Generale',
      'Settings' => 'Impostazioni',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
    ),
    'links' => 
    array (
      'users' => 'Utenti',
    ),
    'tooltips' => 
    array (
    ),
    'labels' => 
    array (
      'Access' => 'Accesso',
      'Create PortalRole' => 'Crea Ruolo per il Portale',
      'Scope Level' => 'Livello dello Scope',
      'Field Level' => 'Livello del Campo',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Crea Utente Portale',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Formato Data',
      'timeFormat' => 'Formato Ora',
      'timeZone' => 'Fuso Orario',
      'weekStart' => 'Primo giorno della Settimana',
      'thousandSeparator' => 'Separatore delle migliaia',
      'decimalMark' => 'Separatore dei Decimali',
      'defaultCurrency' => 'Valuta di default',
      'currencyList' => 'Lista delle Valute',
      'language' => 'Lingua',
      'smtpServer' => 'Server',
      'smtpPort' => 'Porta',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Sicurezza',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Password',
      'smtpEmailAddress' => 'Indirizzo Email',
      'exportDelimiter' => 'Delimitatore per l\'esportazione',
      'receiveAssignmentEmailNotifications' => 'Notifiche email al momento dell\'assegnazione',
      'receiveMentionEmailNotifications' => 'Notifiche e-mail in caso di menzioni nei post',
      'receiveStreamEmailNotifications' => 'Notifiche email per i messaggi e gli aggiornamenti di stato',
      'autoFollowEntityTypeList' => 'Auto-Follow',
      'signature' => 'Firma Email',
      'dashboardTabList' => 'Lista delle schede',
      'defaultReminders' => 'Promemoria di Default',
      'theme' => 'Tema',
      'useCustomTabList' => 'Lista delle schede personalizzata',
      'tabList' => 'Lista delle schede',
      'emailReplyToAllByDefault' => 'Rispondi a tutti via E-mail di default',
      'dashboardLayout' => 'Dashboard Layout',
      'emailReplyForceHtml' => 'Email di risposta in HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Non riempire Utente Assegnato se non è richiesto',
      'followEntityOnStreamPost' => 'Segui automaticamente entità dopo che ha postato nello Stream',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Domenica',
        1 => 'Lunedi',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Notifiche',
      'User Interface' => 'Interfaccia Utente',
      'SMTP' => 'SMTP',
      'Misc' => 'Varie',
      'Locale' => 'Locale',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'L\'Utente seguirà automaticamente tutti i nuovi record dei tipi di entità selezionati, vedrà le informazioni nello stream e riceverà le notifiche.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'roles' => 'Ruoli',
      'assignmentPermission' => 'Assegnazione Permessi',
      'userPermission' => 'Permessi Utente',
      'portalPermission' => 'Permessi Portale',
    ),
    'links' => 
    array (
      'users' => 'Utenti',
      'teams' => 'Team',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Permette di limitare la capacità di assegnare i record e inviare messaggi ad altri utenti 

tutte - nessuna restrizione

team - può assegnare e postare solo per i compagni di team

non può - può assegnare e postare solo per sé',
      'userPermission' => 'Permette di limitare la capacità per gli utenti di visualizzare le attività, il calendario e lo stream di altri utenti

tutto - Può visualizzare tutti 

team - è possibile visualizzare solo le attività dei compagni di team

no - non può vedere',
      'portalPermission' => 'Defines an access to portal information, ability to post messages to portal users.',
    ),
    'labels' => 
    array (
      'Access' => 'Accesso',
      'Create Role' => 'Crea Ruolo',
      'Scope Level' => 'Livello Scope',
      'Field Level' => 'Livello del Campo',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'non impostato',
        'enabled' => 'abilitato',
        'disabled' => 'disabilitato',
      ),
      'levelList' => 
      array (
        'all' => 'tutti',
        'team' => 'team',
        'account' => 'account',
        'contact' => 'contatto',
        'own' => 'se stesso',
        'no' => 'no',
        'yes' => 'si',
        'not-set' => 'non impostato',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Visualizza',
      'edit' => 'Modifica',
      'delete' => 'Cancella',
      'stream' => 'Stream',
      'create' => 'Crea',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Tutte le modifiche del controllo di accesso verranno applicate dopo la cancellazione della cache.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'job' => 'Job',
      'scheduling' => 'Programmazione',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Crea un Job Schedulato',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Pulisci',
        'CheckInboundEmails' => 'Controlla gli Account E-mail di Gruppo',
        'CheckEmailAccounts' => 'Controlla gli Account E-mail Personali',
        'SendEmailReminders' => 'Invia promemoria via email',
        'AuthTokenControl' => 'Controllo dell\'Auth Token',
        'SendEmailNotifications' => 'Invia notifiche e-mail',
        'ProcessMassEmail' => 'Invia Email Massiva',
        'ControlKnowledgeBaseArticleStatus' => 'Controllo dello stato degli articolo della Knowledge Base',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Nota: Aggiungi questa riga al file crontab per eseguire gli Scheduled Jobs di Espo:',
        'mac' => 'Nota: Aggiungi questa riga al file crontab per eseguire gli Scheduled Jobs di Espo:',
        'windows' => 'Nota: Creare un file batch con i seguenti comandi per eseguire gli Scheduled Jobs di Espo utilizzando Operazioni pianificate di Windows:',
        'default' => 'Nota: Aggiungi questo comando al Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Attivo',
        'Inactive' => 'Non Attivo',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Formato Crontab. Definisce la frequenza dell\'esecuzione dei job.

*/5 * * * * - ogni 5 minuti

0 */2 * * * - ogni 2 ore

30 1 * * * - all\'01:30 una volta al giorno

0 0 1 * * - il primo del mese',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Stato',
      'executionTime' => 'Ora di Esecuzione',
      'target' => 'Target',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Usa Cache',
      'dateFormat' => 'Formato Data',
      'timeFormat' => 'Formato Ora',
      'timeZone' => 'Fuso Orario',
      'weekStart' => 'Primo giorno della Settimana',
      'thousandSeparator' => 'Separatore delle migliaia',
      'decimalMark' => 'Separatore Decimali',
      'defaultCurrency' => 'Valuta di default',
      'baseCurrency' => 'Valuta di Base',
      'currencyRates' => 'Tasso di cambio',
      'currencyList' => 'Lista delle Valute',
      'language' => 'Lingua',
      'companyLogo' => 'Logo Società',
      'smtpServer' => 'Server',
      'smtpPort' => 'Porta',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Sicurezza',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Password',
      'outboundEmailFromName' => 'Mittente',
      'outboundEmailFromAddress' => 'Indirizzo mittente',
      'outboundEmailIsShared' => 'È Condivisa',
      'recordsPerPage' => 'Record Per Pagina',
      'recordsPerPageSmall' => 'Record Per Pagina (Piccolo)',
      'tabList' => 'Lista Schede',
      'quickCreateList' => 'Creazione Rapida Lista',
      'exportDelimiter' => 'Delimitatore per Esportazione',
      'globalSearchEntityList' => 'Lista Entità per Ricerca Globale',
      'authenticationMethod' => 'Metodo di Autenticazione',
      'ldapHost' => 'Host',
      'ldapPort' => 'Porta',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Full User DN',
      'ldapPassword' => 'Password',
      'ldapBindRequiresDn' => 'Bind Requires DN',
      'ldapBaseDn' => 'Base DN',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Account Domain Name',
      'ldapTryUsernameSplit' => 'Try Username Split',
      'ldapCreateEspoUser' => 'Crea Utente in EspoCRM',
      'ldapSecurity' => 'Sicurezza',
      'ldapUserLoginFilter' => 'Filtro Accessi Utente',
      'ldapAccountDomainNameShort' => 'Account Domain Name abbreviato',
      'ldapOptReferrals' => 'Opt Referenti',
      'ldapUserNameAttribute' => 'Username Attribute',
      'ldapUserObjectClass' => 'User ObjectClass',
      'ldapUserTitleAttribute' => 'Attributo User Title',
      'ldapUserFirstNameAttribute' => 'Attributo User First Name',
      'ldapUserLastNameAttribute' => 'Attributo User Last Name',
      'ldapUserEmailAddressAttribute' => 'Attributo User Email Address',
      'ldapUserTeams' => 'Team Utente',
      'ldapUserDefaultTeam' => 'Team Utente di Default',
      'ldapUserPhoneNumberAttribute' => 'Attributo User Phone Number',
      'exportDisabled' => 'Disabilitare Export (consentito solo all\'amministratore)',
      'assignmentNotificationsEntityList' => 'Notifica a queste Entità al momento dell\'assegnazione',
      'assignmentEmailNotifications' => 'Notifiche al momento dell\'assegnazione.',
      'assignmentEmailNotificationsEntityList' => 'Scope delle notifiche email di Assegnazione',
      'streamEmailNotifications' => 'Notifiche sugli aggiornamenti nello stream per gli utenti interni',
      'portalStreamEmailNotifications' => 'Notifiche sugli aggiornamenti nello stream per gli utenti del portale',
      'streamEmailNotificationsEntityList' => 'Scope delle notifiche e-mail per lo stream',
      'b2cMode' => 'B2C Mode',
      'avatarsDisabled' => 'Disabilitare Avatars',
      'followCreatedEntities' => 'Seguire Entità Create',
      'displayListViewRecordCount' => 'Mostra Conteggio totale (su List View)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Disattiva i temi degli utenti',
      'emailMessageMaxSize' => 'Dimensione massima Email (Mb)',
      'massEmailMaxPerHourCount' => 'Numero massimo di messaggi email inviati in un\'ora.',
      'personalEmailMaxPortionSize' => 'Dimensione massima della porzione di email scaricabile dall\'account personale',
      'inboundEmailMaxPortionSize' => 'Dimensione massima della porzione di email scaricabile per gli account di gruppo',
      'maxEmailAccountCount' => 'Numero massimo di account email personali, per ogni utente',
      'authTokenLifetime' => 'Tempo di vita di un Auth Token (ore)',
      'authTokenMaxIdleTime' => 'Tempo massimo di Inattività di un Auth Token (ore)',
      'dashboardLayout' => 'Dashboard Layout (default)',
      'siteUrl' => 'URL Sito',
      'addressPreview' => 'Anteprima Indirizzo',
      'addressFormat' => 'Formato Indirizzo',
      'notificationSoundsDisabled' => 'Disabilita Notifica Acustica',
      'applicationName' => 'Nome dell\'Applicazione',
      'calendarEntityList' => 'Calendario Della Lista delle Entità',
      'mentionEmailNotifications' => 'Invia notifiche e-mail in caso di menzioni nei post',
      'massEmailDisableMandatoryOptOutLink' => 'Disabilita il link di opt-out obbligatorio',
      'activitiesEntityList' => 'Attività della Lista delle Entità',
      'historyEntityList' => 'Storico della Lista delle Entità',
      'currencyFormat' => 'Formato Valuta',
      'currencyDecimalPlaces' => 'Decimali della Valuta',
      'aclStrictMode' => 'ACL in modalità Strict',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Domenica',
        1 => 'Lunedi',
      ),
      'currencyFormat' => 
      array (
        1 => '10 USD',
        2 => '$10',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'Numero di record inizialmente mostrata in visualizzazioni elenco.',
      'recordsPerPageSmall' => 'Numero di record inizialmente mostrata nel pannello relazioni.',
      'outboundEmailIsShared' => 'Allow users to send emails from this address.',
      'followCreatedEntities' => 'Gli utenti seguiranno automaticamente i record che hanno creato.',
      'emailMessageMaxSize' => 'Tutte le email in entrata che superano una dimensione specificata verranno scaricati senza corpo e allegati.',
      'authTokenLifetime' => 'Definisce per quanto tempo i token possono esistere.
0 - significa nessuna scadenza.',
      'authTokenMaxIdleTime' => 'Definisce il tempo di vita di un token dall\'ultimo accesso.
0 - significa nessuna scadenza.',
      'userThemesDisabled' => 'Se selezionato, gli utenti non saranno in grado di selezionare un altro tema. ',
      'ldapUsername' => 'Il system user DN completo che permette di cercare altri utenti. Es. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'La password per accedere al server LDAP.',
      'ldapAuth' => 'Credenziali di accesso al server LDAP.',
      'ldapUserNameAttribute' => 'L\'attributo per identificare l\'utente. 
Es."userPrincipalName" o "sAMAccountName" per Active Directory, "uid" per OpenLDAP.',
      'ldapUserObjectClass' => 'Attributo ObjectClass per cercare gli utenti. Es. "person" per AD, "inetOrgPerson" per OpenLDAP.',
      'ldapAccountCanonicalForm' => 'Il tipo di account canonical form che usi. Ci sono 4 opzioni:<br>- \'Dn\' - quella nel formato \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - quella nel formato \'tester\'.<br>- \'Backslash\' - quella nel formato \'COMPANY\\tester\'.<br>- \'Principal\' - quella nel formato \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'The option to format the username in the DN form.',
      'ldapBaseDn' => 'The default base DN used for searching users. E.g. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'L\'opzione per dividere lo username con il dominio',
      'ldapOptReferrals' => 'if referrals should be followed to the LDAP client.',
      'ldapCreateEspoUser' => 'Questa opzione permette a EspoCRM di creare un utente da LDAP.',
      'ldapUserFirstNameAttribute' => 'Attributo LDAP da usare per determinare il nome dell\'utente. Es. "givenname".',
      'ldapUserLastNameAttribute' => 'Attributo LDAP da usare per determinare il cognome dell\'utente. E.g. "sn".',
      'ldapUserTitleAttribute' => 'Attributo LDAP da usare per determinare il titolo dell\'utente. Es. "titolo".',
      'ldapUserEmailAddressAttribute' => 'Attributo LDAP da usare per determinare l\'indirizzo email dell\'utente. Es. "mail".',
      'ldapUserPhoneNumberAttribute' => 'Attributo LDAP da usare per determinare il numero di telefono dell\'utente. Es. "telephoneNumber".',
      'ldapUserLoginFilter' => 'Il filtro che permette di restringere gli utenti che possono usare EspoCRM. Es. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'Il dominio che viene usato per l\'autorizazzione sul server LDAP.',
      'ldapAccountDomainNameShort' => 'Il dominio abbreviato che viene usato per l\'autorizzazione sul server LDAP.',
      'ldapUserTeams' => 'I team per l\'utente creato. Per ulteriori dettagli, guarda il profilo utente.',
      'ldapUserDefaultTeam' => 'Team di default per l\'utente creato. Per ulteriori dettagli, guarda il profilo utente.',
      'b2cMode' => 'EspoCRM per default è pensato per il B2B. Puoi passare alla modalità B2C.',
      'currencyDecimalPlaces' => 'Numero di decimali. Se vuoto tutti i decimali presenti saranno mostrati.',
      'aclStrictMode' => 'Abilitato: L\'accesso agli scope sarà proibito se non è specificato nei ruoli.

Disabilitato: L\'accesso agli scope sarà consentito se non è specificato nei ruoli.',
    ),
    'labels' => 
    array (
      'System' => 'Sistema',
      'Locale' => 'Locale',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configurazione',
      'In-app Notifications' => 'Notifiche In-app',
      'Email Notifications' => 'Notifiche Email',
      'Currency Settings' => 'Impostazioni Valuta',
      'Currency Rates' => 'Tasso di Cambio',
      'Mass Email' => 'Email Massiva',
      'Test Connection' => 'Test Connessione',
      'Connecting' => 'In collegamento...',
      'Activities' => 'Attività',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'Connessione stabilita con successo.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'roles' => 'Ruoli',
      'positionList' => 'Lista Posizioni',
    ),
    'links' => 
    array (
      'users' => 'Utenti',
      'notes' => 'Note',
      'roles' => 'Ruoli',
      'inboundEmails' => 'Account Email di Gruppo',
    ),
    'tooltips' => 
    array (
      'roles' => 'Ruoli di accesso. Gli utenti di questo team ottengono il livello di controllo accesso dai ruoli selezionati .',
      'positionList' => 'Posizioni disponibili in questo team. Es. Commerciale, Manager.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Crea Team',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'body' => 'Corpo',
      'entityType' => 'Tipo Entità',
      'header' => 'Intestazione',
      'footer' => 'Piè di pagina',
      'leftMargin' => 'Margine Sinistro',
      'topMargin' => 'Margine Superiore',
      'rightMargin' => 'Margine Destro',
      'bottomMargin' => 'Margine Inferiore',
      'printFooter' => 'Stampa piè di Pagina',
      'footerPosition' => 'Posizione piè di pagina',
      'variables' => 'Placeholder Disponibili',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Crea Modello',
    ),
    'tooltips' => 
    array (
      'footer' => 'Utilizzare {pageNumber} per stampare il numero di pagina.',
      'variables' => 'Copia-incolla il placeholder richiesto nell\'Intestazione, Corpo o piè di Pagina',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'userName' => 'Nome Utente',
      'title' => 'Titolo',
      'isAdmin' => 'È Admin',
      'defaultTeam' => 'Team di Default',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Telefono',
      'roles' => 'Ruoli',
      'portals' => 'Portali',
      'portalRoles' => 'Ruoli Portale',
      'teamRole' => 'Posizione',
      'password' => 'Password',
      'currentPassword' => 'Password Attuale',
      'passwordConfirm' => 'Conferma Password',
      'newPassword' => 'Nuova Password',
      'newPasswordConfirm' => 'Conferma la Nuova Password',
      'avatar' => 'Avatar',
      'isActive' => 'È Attivo',
      'isPortalUser' => 'È il portale per l\'utente',
      'contact' => 'Contatti',
      'accounts' => 'Account',
      'account' => 'Account (Primario)',
      'sendAccessInfo' => 'Invia e-mail con le Info di accesso per l\'utente',
      'portal' => 'Portale',
      'gender' => 'Genere',
      'position' => 'Posizione nel Team',
      'ipAddress' => 'Indirizzo IP',
      'passwordPreview' => 'Anteprima Password',
      'acceptanceStatus' => 'Stato Accettazione',
      'acceptanceStatusMeetings' => 'Stato Accettazione (Meeting)',
      'acceptanceStatusCalls' => 'Stato Accettazione (Chiamate)',
    ),
    'links' => 
    array (
      'teams' => 'Team',
      'roles' => 'Ruoli',
      'notes' => 'Note',
      'portals' => 'Portali',
      'portalRoles' => 'Ruoli Portale',
      'contact' => 'Contatti',
      'accounts' => 'Account',
      'account' => 'Account (Primario}',
      'tasks' => 'Task',
      'targetLists' => 'Liste di Target',
    ),
    'labels' => 
    array (
      'Create User' => 'Crea Utente',
      'Generate' => 'Genera',
      'Access' => 'Accesso',
      'Preferences' => 'Preferenze',
      'Change Password' => 'Cambia Password',
      'Teams and Access Control' => 'Controllo Team e Accessi',
      'Forgot Password?' => 'Hai dimenticato la password?',
      'Password Change Request' => 'Richiesta Modifica Password',
      'Email Address' => 'Indirizzo Email',
      'External Accounts' => 'Account Esterni',
      'Email Accounts' => 'Email Account',
      'Portal' => 'Portale',
      'Create Portal User' => 'Crea Utente Portale',
      'Proceed w/o Contact' => 'Procedi senza Contatto',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Tutti i record creati da questo utente saranno correlati di default a questo Team.',
      'userName' => 'Lettere a-z, numeri 0-9, puntini, trattini, @ e sottolineature sono permessi.',
      'isAdmin' => 'L\'utente Admin può accedere a tutto.',
      'isActive' => 'Se non marcato, l\'utente non sarà in grado di effettuare il login.',
      'teams' => 'Team a cui appartiene l\'utente. Il livello di controllo di accesso viene ereditato dai ruoli del team.',
      'roles' => 'Ruoli di accesso aggiuntivi. Usalo se l\'utente non appartiene ad alcun team o è necessario estendere il livello di controllo di accesso esclusivamente per questo utente.',
      'portalRoles' => 'Ulteriori ruoli portale. Usalo per estendere il livello di controllo di accesso esclusivamente per questo utente.',
      'portals' => 'Portali a cui l\'utente ha accesso.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'La Password verrà inviata all\'indirizzo e-mail dell\'utente.',
      'accountInfoEmailSubject' => 'EspoCRM User Access Info',
      'accountInfoEmailBody' => 'I tuoi dati di accesso:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Richiesta Modifica Password',
      'passwordChangeLinkEmailBody' => 'È possibile modificare la password da questo link {link}. Questo URL univoco scadrà presto.',
      'passwordChanged' => 'La password è stata modificata',
      'userCantBeEmpty' => 'Il Nome Utente non può essere vuoto',
      'wrongUsernamePasword' => 'username/password Errato',
      'emailAddressCantBeEmpty' => 'L\'indirizzo Email non può essere vuoto',
      'userNameEmailAddressNotFound' => 'Username/Indirizzo Email non trovato',
      'forbidden' => 'Vietato, riprova più tardi',
      'uniqueLinkHasBeenSent' => 'L\'URL univoco è stato inviato all\'indirizzo di posta elettronica specificato.',
      'passwordChangedByRequest' => 'la Password è stata cambiata.',
      'setupSmtpBefore' => 'È necessario impostare gli <a href="{url}">SMTP settings</a> per rendere il sistema in grado di inviare la password via email.',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Non impostato',
        'Male' => 'Maschio',
        'Female' => 'Femmina',
        'Neutral' => 'Neutrale',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Solo per il mio Team',
    ),
    'presetFilters' => 
    array (
      'active' => 'Attivo',
      'activePortal' => 'Portale Attivo',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'Email',
      'website' => 'Sito Web',
      'phoneNumber' => 'Telefono',
      'billingAddress' => 'Indirizzo di Fatturazione',
      'shippingAddress' => 'Indirizzo di Spedizione',
      'description' => 'Descrizione',
      'sicCode' => 'Sic Code',
      'industry' => 'Azienda',
      'type' => 'Tipo',
      'contactRole' => 'Titolo',
      'contactIsInactive' => 'Inattivo',
      'campaign' => 'Campagna',
      'targetLists' => 'Liste di Destinazione',
      'targetList' => 'Lista di Destinazione',
      'originalLead' => 'Lead di Origine',
    ),
    'links' => 
    array (
      'contacts' => 'Contatti',
      'opportunities' => 'Opportunità',
      'cases' => 'Casi',
      'documents' => 'Documenti',
      'meetingsPrimary' => 'Meeting (ampliato)',
      'callsPrimary' => 'Chiamate (ampliato)',
      'tasksPrimary' => 'Task (ampliato)',
      'emailsPrimary' => 'Email (ampliato)',
      'targetLists' => 'Liste di Destinazione',
      'campaignLogRecords' => 'Log Campagna',
      'campaign' => 'Campagna',
      'portalUsers' => 'Utenti portale',
      'originalLead' => 'Lead di Origine',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Cliente',
        'Investor' => 'Invetitore',
        'Partner' => 'Partner',
        'Reseller' => 'Rivenditore',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Aerospaziale',
        'Agriculture' => 'Agricultura',
        'Advertising' => 'Pubblicità',
        'Apparel & Accessories' => 'Abbigliamento e Accessori',
        'Architecture' => 'Architettura',
        'Automotive' => 'Settore Automobilistico',
        'Banking' => 'Bancario',
        'Biotechnology' => 'Biotecnologie',
        'Building Materials & Equipment' => 'Materiali da costruzione e attrezzature',
        'Chemical' => 'Chimico',
        'Construction' => 'Costruzioni',
        'Computer' => 'Computer',
        'Defense' => 'Difesa',
        'Creative' => 'Creativo',
        'Culture' => 'Cultura',
        'Consulting' => 'Consulenze',
        'Education' => 'Educazione',
        'Electronics' => 'Elettronica',
        'Electric Power' => 'Elettricità',
        'Energy' => 'Energia',
        'Entertainment & Leisure' => 'Intrattenimento e tempo libero',
        'Finance' => 'Finanza',
        'Food & Beverage' => 'Cibi e bevande',
        'Grocery' => 'Derrate alimentari',
        'Hospitality' => 'Alberghiero',
        'Healthcare' => 'Assistenza sanitaria',
        'Insurance' => 'Assicurazioni',
        'Legal' => 'Legale',
        'Manufacturing' => 'Manifatturiero',
        'Mass Media' => 'Mass Media',
        'Mining' => 'Estrazione mineraria',
        'Music' => 'Musica',
        'Marketing' => 'Marketing',
        'Publishing' => 'Editoria',
        'Petroleum' => 'Petrolio',
        'Real Estate' => 'Immobiliare',
        'Retail' => 'Vendita al dettaglio',
        'Shipping' => 'Logistica',
        'Service' => 'Servizi',
        'Support' => 'Supporto',
        'Sports' => 'Sport',
        'Software' => 'Software',
        'Technology' => 'Technologia',
        'Telecommunications' => 'Telecommunicazioni',
        'Television' => 'Televisione',
        'Testing, Inspection & Certification' => 'Testing, Ispezione e Certificazione',
        'Transportation' => 'Trasporti',
        'Travel' => 'Viaggi',
        'Venture Capital' => 'Investimenti',
        'Wholesale' => 'Vendita all\'ingrosso',
        'Water' => 'Acqua',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Crea Account',
      'Copy Billing' => 'Copia info di Fatturazione',
      'Set Primary' => 'Imposta come Primario',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Clienti',
      'partners' => 'Partner',
      'recentlyCreated' => 'Creati di Recente',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mese',
      'week' => 'Settimana',
      'day' => 'Giorno',
      'agendaWeek' => 'Settimana',
      'agendaDay' => 'Giorno',
      'timeline' => 'Sequenza temporale',
    ),
    'labels' => 
    array (
      'Today' => 'Oggi',
      'Create' => 'Crea',
      'Shared' => 'Condiviso',
      'Add User' => 'Aggiungi Utente',
      'current' => 'attuale',
      'time' => 'ora',
      'User List' => 'Lista Utenti',
      'Manage Users' => 'Gestione Utenti',
      'View Calendar' => 'View Calendar',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'parent' => 'Parente',
      'status' => 'Stato',
      'dateStart' => 'Data d\'inizio',
      'dateEnd' => 'Data di termine',
      'direction' => 'Direzione',
      'duration' => 'Durata',
      'description' => 'Descrizione',
      'users' => 'Utenti',
      'contacts' => 'Contatti',
      'leads' => 'Lead',
      'reminders' => 'Promemoria',
      'account' => 'Account',
      'acceptanceStatus' => 'Stato Accettazione',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Pianificato',
        'Held' => 'Held',
        'Not Held' => 'Non Held',
      ),
      'direction' => 
      array (
        'Outbound' => 'in Uscita',
        'Inbound' => 'in Ingresso',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nessun',
        'Accepted' => 'Accettato',
        'Declined' => 'Rifiutato',
        'Tentative' => 'Provvisorio',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Imposta Held',
      'setNotHeld' => 'Imposta Non Held',
    ),
    'labels' => 
    array (
      'Create Call' => 'Crea chiamata',
      'Set Held' => 'Imposta Held',
      'Set Not Held' => 'Imposta non Held',
      'Send Invitations' => 'Inviare inviti',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Pianificato',
      'held' => 'Held',
      'todays' => 'Oggi',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'description' => 'Descrizione',
      'status' => 'Stato',
      'type' => 'Tipo',
      'startDate' => 'Data d\'Inizio',
      'endDate' => 'Data di Termine',
      'targetLists' => 'Liste di Target',
      'excludingTargetLists' => 'Escludi Lista Target',
      'sentCount' => 'Inviato',
      'openedCount' => 'Aperto',
      'clickedCount' => 'Cliccato',
      'optedOutCount' => 'Rinuncia',
      'bouncedCount' => 'Bounced',
      'hardBouncedCount' => 'Hard Bounced',
      'softBouncedCount' => 'Soft Bounced',
      'leadCreatedCount' => 'Lead Creata',
      'revenue' => 'Fatturato',
      'revenueConverted' => 'Fatturato (convertito)',
      'budget' => 'Budget',
      'budgetConverted' => 'Budget (convertito)',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste di Target',
      'excludingTargetLists' => 'Escludi Liste di Target',
      'accounts' => 'Account',
      'contacts' => 'Contatti',
      'leads' => 'Lead',
      'opportunities' => 'Opportunità',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Email Massiva',
      'trackingUrls' => 'URL di Tracking',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Televisione',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Mail',
      ),
      'status' => 
      array (
        'Planning' => 'Pianificazione',
        'Active' => 'Attivo',
        'Inactive' => 'Non Attivo',
        'Complete' => 'Completo',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Crea Campaigna',
      'Target Lists' => 'Liste di Target',
      'Statistics' => 'Statistiche',
      'hard' => 'hard',
      'soft' => 'soft',
      'Unsubscribe' => 'Annulla l\'iscrizione',
      'Mass Emails' => 'Email Massive',
      'Email Templates' => 'Modelli Email',
      'Unsubscribe again' => 'Disiscriviti ancora',
      'Subscribe again' => 'Iscriviti ancora',
      'Create Target List' => 'Crea Lista Target',
    ),
    'presetFilters' => 
    array (
      'active' => 'Attivo',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Sei stato rimosso dalla nostra mailing list.',
      'subscribedAgain' => 'Ti sei iscritto nuovamente.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Target che devono ricevere i messaggi.',
      'excludingTargetLists' => 'Target che non dovrebbe ricevere messaggi.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Azione',
      'actionDate' => 'Data',
      'data' => 'Data',
      'campaign' => 'Campagna',
      'parent' => 'Target',
      'object' => 'Oggetto',
      'application' => 'Applicazione',
      'queueItem' => 'Item in Coda',
      'stringData' => 'String Data',
      'stringAdditionalData' => 'String Data Addizionale',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Item in Coda',
      'parent' => 'Parente',
      'object' => 'Object',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Inviato',
        'Opened' => 'Aperto',
        'Opted Out' => 'Rimosso',
        'Bounced' => 'Bounced',
        'Clicked' => 'Cliccato',
        'Lead Created' => 'Lead Creata',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Tutti',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Inviato',
      'opened' => 'Aperto',
      'optedOut' => 'Rimosso',
      'bounced' => 'Bounced',
      'clicked' => 'Cliccato',
      'leadCreated' => 'Lead Creata',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Codice da inserire al posto dell\'URL',
      'campaign' => 'Campagna',
    ),
    'links' => 
    array (
      'campaign' => 'Campagna',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Creazione URL di Tracking',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'number' => 'Numero',
      'status' => 'Stato',
      'account' => 'Account',
      'contact' => 'Contatto',
      'contacts' => 'Contatti',
      'priority' => 'Priorità',
      'type' => 'Tipo',
      'description' => 'Descrizione',
      'inboundEmail' => 'Email in entrata',
      'lead' => 'Lead',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Email in entrata',
      'account' => 'Account',
      'contact' => 'Contatto (Primario)',
      'Contacts' => 'Contatti',
      'meetings' => 'Meeting',
      'calls' => 'Chiamate',
      'tasks' => 'Task',
      'emails' => 'Email',
      'articles' => 'Articoli del Knowledge Base',
      'lead' => 'Lead',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nuovo',
        'Assigned' => 'Assegnato',
        'Pending' => 'In attesa',
        'Closed' => 'Chiuso',
        'Rejected' => 'Rifiutato',
        'Duplicate' => 'Duplicato',
      ),
      'priority' => 
      array (
        'Low' => 'Basso',
        'Normal' => 'Normale',
        'High' => 'Alto',
        'Urgent' => 'Urgente',
      ),
      'type' => 
      array (
        'Question' => 'Domanda',
        'Incident' => 'Incidente',
        'Problem' => 'Problema',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Crea Caso',
      'Close' => 'Chiuso',
      'Reject' => 'Rifiutato',
      'Closed' => 'Chiuso',
      'Rejected' => 'Rifiutato',
    ),
    'presetFilters' => 
    array (
      'open' => 'Aperto',
      'closed' => 'Chiuso',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'Email',
      'title' => 'Titolo',
      'account' => 'Account',
      'accounts' => 'Account',
      'phoneNumber' => 'Telefono',
      'accountType' => 'Tipo di Account',
      'doNotCall' => 'Non chiamare',
      'address' => 'Indirizzo',
      'opportunityRole' => 'Ruolo Opportunità',
      'accountRole' => 'Titolo',
      'description' => 'Descrizione',
      'campaign' => 'Campagna',
      'targetLists' => 'Liste di destinazione',
      'targetList' => 'Lista di destinazione',
      'portalUser' => 'Utente Portale',
      'originalLead' => 'Lead di Origine',
      'acceptanceStatus' => 'Stato Accettazione',
      'accountIsInactive' => 'Account Inattivo',
      'acceptanceStatusMeetings' => 'Stato Accettazione (Meeting)',
      'acceptanceStatusCalls' => 'Stato Accettazione (Chiamate)',
    ),
    'links' => 
    array (
      'opportunities' => 'Opportunità',
      'cases' => 'Casi',
      'targetLists' => 'Liste di Target',
      'campaignLogRecords' => 'Log Campagna',
      'campaign' => 'Campagna',
      'account' => 'Account (Primario)',
      'accounts' => 'Account',
      'casesPrimary' => 'Casi (Primario)',
      'portalUser' => 'Portale Utente',
      'originalLead' => 'Lead di Origine',
      'documents' => 'Documenti',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Crea Contatto',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Nessun--',
        'Decision Maker' => 'Responsabile',
        'Evaluator' => 'Valutatore',
        'Influencer' => 'Influencer',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Portale Utenti',
      'notPortalUsers' => 'Nessun Portale Utenti',
      'accountActive' => 'Attivo',
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Crea documento',
      'Details' => 'Dettagli',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'file' => 'File',
      'type' => 'Tipo',
      'publishDate' => 'Data di pubblicazione',
      'expirationDate' => 'Data di scadenza',
      'description' => 'Descrizione',
      'accounts' => 'Account',
      'folder' => 'Cartella',
    ),
    'links' => 
    array (
      'accounts' => 'Account',
      'opportunities' => 'Opportunità',
      'folder' => 'Cartella',
      'leads' => 'Lead',
      'contacts' => 'Contatti',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Attivo',
        'Draft' => 'Bozza',
        'Expired' => 'Scaduto',
        'Canceled' => 'Cancellato',
      ),
      'type' => 
      array (
        '' => 'Nessun',
        'Contract' => 'Contratto',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Contratto di licenza',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Attivo',
      'draft' => 'Bozza',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Crea cartella Documenti',
      'Manage Categories' => 'Gestione cartelle',
      'Documents' => 'Documenti',
    ),
    'links' => 
    array (
      'documents' => 'Documenti',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'target' => 'Target',
      'sentAt' => 'Data invio',
      'attemptCount' => 'Tentativi',
      'emailAddress' => 'Indirizzo Email',
      'massEmail' => 'Email Massiva',
      'isTest' => 'è un test',
    ),
    'links' => 
    array (
      'target' => 'Target',
      'massEmail' => 'Email Massiva',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'In attesa',
        'Sent' => 'Inviato',
        'Failed' => 'Fallito',
        'Sending' => 'In invio',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'In attesa',
      'sent' => 'Inviato',
      'failed' => 'Fallito',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Crea Articolo',
      'Any' => 'Qualsiasi',
      'Send in Email' => 'Spedisci via Email',
      'Move Up' => 'Sposta in Alto',
      'Move Down' => 'Sposta in Basso',
      'Move to Top' => 'Sposta in Cima',
      'Move to Bottom' => 'Sposta in Fondo',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'type' => 'Tipo',
      'attachments' => 'Allegati',
      'publishDate' => 'Data di pubblicazione',
      'expirationDate' => 'Data di Scadenza',
      'description' => 'Descrizione',
      'body' => 'Corpo',
      'categories' => 'Categorie',
      'language' => 'Lingua',
      'portals' => 'Portali',
    ),
    'links' => 
    array (
      'cases' => 'Casi',
      'opportunities' => 'Opportunità',
      'categories' => 'Categorie',
      'portals' => 'Portali',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'In Revisione',
        'Draft' => 'Bozza',
        'Archived' => 'Archiviato',
        'Published' => 'Pubblicato',
      ),
      'type' => 
      array (
        'Article' => 'Articolo',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'L\'articolo sarà disponibile nei portali specificati.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Pubblicato',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Crea  Categoria',
      'Manage Categories' => 'Gestione Categorie',
      'Articles' => 'Articoli',
    ),
    'links' => 
    array (
      'articles' => 'Articoli',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Convertito in',
      'Create Lead' => 'Crea Lead',
      'Convert' => 'Converti',
      'convert' => 'converti',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'Email',
      'title' => 'Titolo',
      'website' => 'Sito Web',
      'phoneNumber' => 'Telefono',
      'accountName' => 'Nome utente',
      'doNotCall' => 'Non chiamare',
      'address' => 'Indirizzo',
      'status' => 'Stato',
      'source' => 'Provenienza',
      'opportunityAmount' => 'Ammontare Opportunità',
      'opportunityAmountConverted' => 'Ammontare Opportunità (convertito)',
      'description' => 'Descrizione',
      'createdAccount' => 'Account',
      'createdContact' => 'Contatto',
      'createdOpportunity' => 'Opportunità',
      'campaign' => 'Campagna',
      'targetLists' => 'Liste di Target',
      'targetList' => 'Lista di Target',
      'industry' => 'Settore',
      'acceptanceStatus' => 'Stato Accettazione',
      'opportunityAmountCurrency' => 'Valuta dell\'Ammontare dell\'Opportunità',
      'acceptanceStatusMeetings' => 'Stato Accettazione (Meeting)',
      'acceptanceStatusCalls' => 'Stato Accettazione (Chiamate)',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste di Target',
      'campaignLogRecords' => 'Log Campagna',
      'campaign' => 'Campagna',
      'createdAccount' => 'Account',
      'createdContact' => 'Contatto',
      'createdOpportunity' => 'Opportunità',
      'cases' => 'Casi',
      'documents' => 'Documenti',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nuovo',
        'Assigned' => 'Assegnato',
        'In Process' => 'In Corso',
        'Converted' => 'Convertito',
        'Recycled' => 'Recuperato',
        'Dead' => 'Fuori uso',
      ),
      'source' => 
      array (
        '' => 'Nessun',
        'Call' => 'Chiamata',
        'Email' => 'Email',
        'Existing Customer' => 'Cliente Esistente',
        'Partner' => 'Partner',
        'Public Relations' => 'Pubbliche Relazioni',
        'Web Site' => 'Sito Web',
        'Campaign' => 'Campagna',
        'Other' => 'Altro',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Attivo',
      'actual' => 'Attuale',
      'converted' => 'Convertito',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'storeSentEmails' => 'Archiviare Email Inviate',
      'startAt' => 'Data d\'Inizio',
      'fromAddress' => 'Indirizzo mittente',
      'fromName' => 'Mittente',
      'replyToAddress' => 'Indirizzo Email per il Reply-To',
      'replyToName' => 'Nome per il Reply-To',
      'campaign' => 'Campagna',
      'emailTemplate' => 'Modello Email',
      'inboundEmail' => 'Email Account',
      'targetLists' => 'Liste di Target',
      'excludingTargetLists' => 'Liste di Target Escluse',
      'optOutEntirely' => 'Opt-Out da tutto',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste di Target',
      'excludingTargetLists' => 'Target List Escluse',
      'queueItems' => 'Item in Coda',
      'campaign' => 'Campagna',
      'emailTemplate' => 'Modello Email',
      'inboundEmail' => 'Email Account',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Bozza',
        'Pending' => 'In attesa',
        'In Process' => 'In Corso',
        'Complete' => 'Completato',
        'Canceled' => 'Cancellato',
        'Failed' => 'Fallito',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Crea Email Massiva',
      'Send Test' => 'Invia Test',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Selezionare almeno un target.',
      'testSent' => 'L\'Email di prova dovrebbe essere stata inviata',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Gli Indirizzi e-mail dei destinatari che si sono disiscritti saranno contrassegnati come opted-out e non riceveranno più e-mail massive.',
      'targetLists' => 'Target che devono ricevere i messaggi.',
      'excludingTargetLists' => 'Target che non devono ricevere i messaggi.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Attuale',
      'complete' => 'Completato',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'parent' => 'Parente',
      'status' => 'Stato',
      'dateStart' => 'Data d\'inizio',
      'dateEnd' => 'Data di fine',
      'duration' => 'Durata',
      'description' => 'Descrizione',
      'users' => 'Utenti',
      'contacts' => 'Contatti',
      'leads' => 'Lead',
      'reminders' => 'Promemoria',
      'account' => 'Account',
      'acceptanceStatus' => 'Stato Accettazione',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Pianificato',
        'Held' => 'Held',
        'Not Held' => 'Not Held',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nessun',
        'Accepted' => 'Accettato',
        'Declined' => 'Declinato',
        'Tentative' => 'Provvisorio',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Impostato su Held',
      'setNotHeld' => 'Impostato su Not Held',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Crea Meeting',
      'Set Held' => 'Imposta Held',
      'Set Not Held' => 'Imposta Not Held',
      'Send Invitations' => 'Inviare inviti',
      'on time' => 'puntuale',
      'before' => 'prima',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Pianificato',
      'held' => 'Held',
      'todays' => 'Oggi',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Nessun messaggio inviato',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'account' => 'Account',
      'stage' => 'Stage',
      'amount' => 'Importo',
      'probability' => 'Probabilità, %',
      'leadSource' => 'Origine della Lead',
      'doNotCall' => 'Non chiamare',
      'closeDate' => 'Data di chiusura',
      'contacts' => 'Contatti',
      'description' => 'Descrizione',
      'amountConverted' => 'Importo (convertito)',
      'amountWeightedConverted' => 'Importo Ponderato',
      'campaign' => 'Campagna',
      'originalLead' => 'Lead di Provenienza',
      'amountCurrency' => 'Valuta dell\'importo',
      'contactRole' => 'Ruolo Contatto',
    ),
    'links' => 
    array (
      'contacts' => 'Contatti',
      'documents' => 'Documenti',
      'campaign' => 'Campagna',
      'originalLead' => 'Lead di Provenienza',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Qualifica',
        'Needs Analysis' => 'Necessita di analisi',
        'Value Proposition' => 'Proposta di Valore',
        'Id. Decision Makers' => 'Id. Responsabile',
        'Perception Analysis' => 'Analisi Percezione',
        'Proposal/Price Quote' => 'Proposta/Preventivo',
        'Negotiation/Review' => 'Negoziazione/Revisione',
        'Closed Won' => 'Chiuso Positivamente',
        'Closed Lost' => 'Chiuso Negativamente',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Crea Opportunità',
    ),
    'presetFilters' => 
    array (
      'open' => 'Aperto',
      'won' => 'Vinto',
      'lost' => 'Perso',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'description' => 'Descrizione',
      'entryCount' => 'Conteggio Elementi',
      'campaigns' => 'Campagne',
      'endDate' => 'Data di termine',
      'targetLists' => 'Lista di Target',
      'includingActionList' => 'Includendo',
      'excludingActionList' => 'Escludendo',
    ),
    'links' => 
    array (
      'accounts' => 'Account',
      'contacts' => 'Contatti',
      'leads' => 'Lead',
      'campaigns' => 'Campagne',
      'massEmails' => 'Email Massive',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Televisione',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Crea lista di Target',
      'Opted Out' => 'Disiscritto',
      'Cancel Opt-Out' => 'Annulla Disiscrizione',
      'Opt-Out' => 'Disiscrizione',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'parent' => 'Parente',
      'status' => 'Stato',
      'dateStart' => 'Data d\'inizio',
      'dateEnd' => 'Data di scadenza',
      'dateStartDate' => 'Data d\'Inizio (tutto il giorno)',
      'dateEndDate' => 'Data di Termine (tutto il giorno)',
      'priority' => 'Priorità',
      'description' => 'Descrizione',
      'isOverdue' => 'In ritardo',
      'account' => 'Account',
      'dateCompleted' => 'Data Completamento',
      'attachments' => 'Allegati',
      'reminders' => 'Promemoria',
    ),
    'links' => 
    array (
      'attachments' => 'Allegati',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Non iniziato',
        'Started' => 'Iniziato',
        'Completed' => 'Completato',
        'Canceled' => 'Cancellato',
        'Deferred' => 'Prorogato',
      ),
      'priority' => 
      array (
        'Low' => 'Basso',
        'Normal' => 'Normale',
        'High' => 'Alto',
        'Urgent' => 'Urgente',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Crea Task',
      'Complete' => 'Completo',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Attuale',
      'completed' => 'Completato',
      'deferred' => 'Prorogato',
      'todays' => 'Oggi',
      'overdue' => 'In RItardo',
    ),
  ),
);
?>