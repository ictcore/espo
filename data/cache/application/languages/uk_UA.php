<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'Користувач',
      'action' => 'Дія',
      'createdAt' => 'Дата',
      'target' => 'Ціль',
      'targetType' => 'Тип цілі',
      'authToken' => 'Токен аутентифікації',
      'ipAddress' => 'IP адреса',
    ),
    'links' => 
    array (
      'authToken' => 'Токен аутентифікації',
      'user' => 'Користувач',
      'target' => 'Ціль',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Тільки моє',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Читати',
        'update' => 'Обновити',
        'delete' => 'Видалити',
        'create' => 'Створити',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Увімкнено',
      'Disabled' => 'Вимкнено',
      'System' => 'Система',
      'Users' => 'Користувачі',
      'Email' => 'Емейл',
      'Data' => 'Дані',
      'Customization' => 'Користувацькі налаштування',
      'Available Fields' => 'Доступні поля',
      'Layout' => 'Макет',
      'Entity Manager' => 'Entity Manager',
      'Add Panel' => 'Додати панель',
      'Add Field' => 'Додати поле',
      'Settings' => 'Налаштування',
      'Scheduled Jobs' => 'Заплановані завдання',
      'Upgrade' => 'Оновлення',
      'Clear Cache' => 'Очистити кеш',
      'Rebuild' => 'Перебудувати',
      'Teams' => 'Команди',
      'Roles' => 'Ролі',
      'Portal' => 'Портал',
      'Portals' => 'Портали',
      'Portal Roles' => 'Ролі порталу',
      'Portal Users' => 'Портал користувачів',
      'Outbound Emails' => 'Вихідна електронна пошта',
      'Group Email Accounts' => 'Групові скриньки',
      'Personal Email Accounts' => 'Персональні скриньки',
      'Inbound Emails' => 'Вхідна електронна пошта',
      'Email Templates' => 'Шаблони листів',
      'Import' => 'Імпорт',
      'Layout Manager' => 'Менеджер макетів',
      'User Interface' => 'Інтерфейс користувача',
      'Auth Tokens' => 'Токени аутентифікації',
      'Authentication' => 'Автентифікація',
      'Currency' => 'Валюта',
      'Integrations' => 'Інтеграції',
      'Extensions' => 'Розширення',
      'Upload' => 'Завантажити',
      'Installing...' => 'Установка...',
      'Upgrading...' => 'Оновлення...',
      'Upgraded successfully' => 'Оновлено успішно',
      'Installed successfully' => 'Успішно встановлено',
      'Ready for upgrade' => 'Готово до оновлення',
      'Run Upgrade' => 'Запустити оновлення',
      'Install' => 'Установити',
      'Ready for installation' => 'Готово до установки',
      'Uninstalling...' => 'Видалення...',
      'Uninstalled' => 'Видалено',
      'Create Entity' => 'Створити сутність',
      'Edit Entity' => 'Змінити сутність',
      'Create Link' => 'Створити Посилання',
      'Edit Link' => 'Змінити Посилання',
      'Notifications' => 'Оповіщення',
      'Jobs' => 'Робота',
      'Reset to Default' => 'Скинути',
      'Email Filters' => 'Фільтри',
      'Action History' => 'Історія дій',
      'Label Manager' => 'Label Manager',
    ),
    'layouts' => 
    array (
      'list' => 'Список',
      'detail' => 'Детальний Вид',
      'listSmall' => 'Список (малий)',
      'detailSmall' => 'Детальний Вид (мала)',
      'filters' => 'Фільтри пошуку',
      'massUpdate' => 'Масове оновлення',
      'relationships' => 'Панелі зв\'язків',
      'sidePanelsDetail' => 'Бічні панелі (Detail)',
      'sidePanelsEdit' => 'Бічні панелі (Edit)',
      'sidePanelsDetailSmall' => 'Бічні панелі (Detail Small)',
      'sidePanelsEditSmall' => 'Бічні панелі (Edit Small)',
      'detailConvert' => 'Конвертувати лід',
      'listForAccount' => 'Список (для контрагента)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Адреса',
      'array' => 'Масив',
      'foreign' => 'Іноземні',
      'duration' => 'Тривалість',
      'password' => 'Пароль',
      'personName' => 'Ім\'я особи',
      'autoincrement' => 'Автоінкремент',
      'bool' => 'Булевий тип',
      'currency' => 'Валюта',
      'currencyConverted' => 'Валюта (ковертована)',
      'date' => 'Дата',
      'datetime' => 'Дата, час',
      'datetimeOptional' => 'Date/DateTime',
      'email' => 'Емейл',
      'enum' => 'Список',
      'enumInt' => 'Список цілі числа',
      'enumFloat' => 'Список дробні числа',
      'float' => 'Десятовий дріб',
      'int' => 'Ціле число',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiple',
      'linkParent' => 'Link Parent',
      'multienim' => 'Множинний список',
      'phone' => 'Телефон',
      'text' => 'Текст',
      'url' => 'URL-адреса',
      'varchar' => 'Рядок',
      'file' => 'Файл',
      'image' => 'Зображення',
      'multiEnum' => 'Множинний список',
      'attachmentMultiple' => 'Кілька прикріплень',
      'rangeInt' => 'Цілочисельний діапазон',
      'rangeFloat' => 'Дробовочисельний діапазон',
      'rangeCurrency' => 'Грошовий діопазон',
      'wysiwyg' => 'Редактор',
      'map' => 'Карта',
      'number' => 'Номер',
      'colorpicker' => 'Color Picker',
    ),
    'fields' => 
    array (
      'type' => 'Тип',
      'name' => 'Ім\'я',
      'label' => 'Мітка',
      'tooltipText' => 'Текс підсказки',
      'required' => 'Обов\'язково',
      'default' => 'За замовчуванням',
      'maxLength' => 'Максимальна довжина',
      'options' => 'Опції',
      'after' => 'Після (поле)',
      'before' => 'Перед (поле)',
      'link' => 'Link',
      'field' => 'Поле',
      'min' => 'Мінімум',
      'max' => 'Максимум',
      'translation' => 'Переклад',
      'previewSize' => 'Розмір передперегляду',
      'noEmptyString' => 'Немає вільного рядка',
      'defaultType' => 'Default Type',
      'seeMoreDisabled' => 'Відключити обрізку тексту',
      'entityList' => 'Список об\'єктів',
      'isSorted' => 'Відсортовано (за алфавітом)',
      'audited' => 'Перевірено',
      'trim' => 'Підрівняти',
      'height' => 'Висота (точок)',
      'minHeight' => 'Мінімальна висота (точок)',
      'provider' => 'Провайдер',
      'typeList' => 'Тип списку',
      'rows' => 'Рядків текстової області',
      'lengthOfCut' => 'Довжина перед обрізкою',
      'sourceList' => 'Список джерел',
      'prefix' => 'Пефікс',
      'nextNumber' => 'Наступний номер',
      'padLength' => 'Визначена довжина',
      'disableFormatting' => 'Відключити форматування',
      'dynamicLogicVisible' => 'Умови роблячі поле видимим',
      'dynamicLogicReadOnly' => 'Умови роблячі поле тільки для читання',
      'dynamicLogicRequired' => 'Умови, які роблять поле обов’язковим',
      'dynamicLogicOptions' => 'Умовні варіанти',
      'probabilityMap' => 'Стадія імовірності (%)',
      'readOnly' => 'Виключно читання',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM буде оновлено до версії <strong>{version}</strong>. Просимо зачекати, оскільки це може зайняти дейкий час.',
      'upgradeDone' => 'EspoCRM оновлено до версії <strong>{version}</strong>.',
      'upgradeBackup' => 'Перед оновленням рекомендуємо створити резевну копію файлів EspoCRM та даних',
      'thousandSeparatorEqualsDecimalMark' => 'Розділювач тисячних не може бути таким самим, як розділювач десяткових.',
      'userHasNoEmailAddress' => 'В користувача не вказана адреса електронної скриньки.',
      'selectEntityType' => 'Оберіть тип сутности у лівому меню.',
      'selectUpgradePackage' => 'Оберіть пакет оновлення',
      'downloadUpgradePackage' => 'Завантажити необхідні оновлення <a href="{url}">тут</a>.',
      'selectLayout' => 'Оберіть потрібний макет у лівому меню та змінюйте його.',
      'selectExtensionPackage' => 'Оберіть пакет розширення',
      'extensionInstalled' => 'Розширення {name} {version} установлено.',
      'installExtension' => 'Розширення {name} {version} готове до інсталяції.',
      'uninstallConfirmation' => 'Ви впевнені, що хочете видалити розширення?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Системні налаштування додатку.',
      'scheduledJob' => 'Завдання, виконувані за допомогою cron.',
      'upgrade' => 'Оновити EspoCRM.',
      'clearCache' => 'Очистити весь кеш сервера.',
      'rebuild' => 'Перезапустити сервер та очистити кеш.',
      'users' => 'Управління користувачами.',
      'teams' => 'Управління командами.',
      'roles' => 'Управління ролями.',
      'portals' => 'Управління порталами',
      'portalRoles' => 'Ролі для порталу.',
      'portalUsers' => 'Користувачі порталу.',
      'outboundEmails' => 'Налаштування SMTP для вихідних листів.',
      'groupEmailAccounts' => 'Групові IMAP облікові записи електронної пошти. E-mail імпорт та створення звернень.',
      'personalEmailAccounts' => 'Облікові записи електронної пошти користувачів.',
      'emailTemplates' => 'Шаблони для вихідних листів.',
      'import' => 'Імпорт даних із файлу CSV.',
      'layoutManager' => 'Налаштування макетів (список, деталь, зміни, пошук, масове поновлення).',
      'entityManager' => 'Create and edit custom entities. Manage fields and relationships.',
      'userInterface' => 'Конфігурація інтерфейсу користувача',
      'authTokens' => 'Активні авторизації. IP-адреса і дата останнього доступу.',
      'authentication' => 'Налаштування аутентифікації.',
      'currency' => 'Налаштування валюти та курсу обміну.',
      'extensions' => 'Встановлення або видалення розширень.',
      'integrations' => 'Інтеграція зі сторонніми сервісами.',
      'notifications' => 'In-app and email notification settings.',
      'inboundEmails' => 'Групувати поштові акаунти IMAP. Імпорт пошти та інтерфейс доступу до звернення через електронну пошту.',
      'emailFilters' => 'Електронні повідомлення, які відповідають вказаному фільтру, імпортуватися не будуть',
      'actionHistory' => 'Лоґ дій користуча.',
      'labelManager' => 'Customize application labels.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Малесенький',
        'small' => 'Маленький',
        'medium' => 'Середній',
        'large' => 'Великий',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'ТА',
      'or' => 'АБО',
      'not' => 'НІ',
    ),
  ),
  'Attachment' => 
  array (
    'insertFromSourceLabels' => 
    array (
      'Document' => 'Вставити документ',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Користувач',
      'ipAddress' => 'IP-адреса',
      'lastAccess' => 'Дата останнього доступу',
      'createdAt' => 'Дата входу',
      'isActive' => 'Активний',
      'portal' => 'Портал',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Історія дій',
    ),
    'presetFilters' => 
    array (
      'active' => 'Активні',
      'inactive' => 'Неактивні',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Зробити неактивним',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Зробити неактивними',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Посада',
      'dateFrom' => 'Дата від',
      'dateTo' => 'Дата до',
      'autorefreshInterval' => 'Інтервал авто-оновлення',
      'displayRecords' => 'Відобразити записи',
      'isDoubleHeight' => 'Висота 2x',
      'mode' => 'Режим',
      'enabledScopeList' => 'Що відображати',
      'users' => 'Користувачі',
      'entityType' => 'Тип сутності',
      'primaryFilter' => 'Первинний фільтр',
      'boolFilterList' => 'Додаткові фільтри',
      'sortBy' => 'Сортування (поле)',
      'sortDirection' => 'Сортування (напрямок)',
      'expandedLayout' => 'Макет',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Тиждень (порядок денний)',
        'basicWeek' => 'Тиждень',
        'month' => 'Місяць',
        'basicDay' => 'День',
        'agendaDay' => 'День (порядок денний)',
        'timeline' => 'Графік',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Виберіть тип сутності в опціях дашлету',
    ),
  ),
  'DynamicLogic' => 
  array (
    'label' => 
    array (
      'Field' => 'Поле',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'Так само',
        'notEquals' => 'Не дорівнює',
        'greaterThan' => 'Більше ніж',
        'lessThan' => 'Менше ніж',
        'greaterThanOrEquals' => 'Більше ніж або дорівнює',
        'lessThanOrEquals' => 'Менше ніж або дорівнює',
        'in' => 'В',
        'notIn' => 'Не в
',
        'inPast' => 'В минулому',
        'inFuture' => 'В майбутньому',
        'isToday' => 'Сьогодні',
        'isTrue' => 'Правда',
        'isFalse' => 'Хибно',
        'isEmpty' => 'Пусто',
        'isNotEmpty' => 'Не порожній',
        'contains' => 'Містить',
        'notContains' => 'Не містить',
        'has' => 'Містить',
        'notHas' => 'Не містить',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Тема',
      'parent' => 'Батько',
      'status' => 'Статус',
      'dateSent' => 'Дата відправки',
      'from' => 'Від',
      'to' => 'До',
      'cc' => 'ГГ',
      'bcc' => 'СК',
      'replyTo' => 'Куди відповідати',
      'replyToString' => 'Куди відповідати (рядок)',
      'isHtml' => 'HTML-код',
      'body' => 'Тіло',
      'subject' => 'Тема',
      'attachments' => 'Вкладення',
      'selectTemplate' => 'Обрати шаблон',
      'fromEmailAddress' => 'З адреси',
      'toEmailAddresses' => 'На адресу',
      'emailAddress' => 'Поштова скринька',
      'deliveryDate' => 'Дата доставки',
      'account' => 'Контраґент',
      'users' => 'Користувачі',
      'replied' => 'Відповіли',
      'replies' => 'Відповіді',
      'isRead' => 'Прочитано',
      'isNotRead' => 'Не прочитано',
      'isImportant' => 'Важливо',
      'isReplied' => 'Відповіли',
      'isNotReplied' => 'Без відповіді',
      'isUsers' => 'Користувачі',
      'inTrash' => 'В кошику',
      'sentBy' => 'Надіслав (Користувач)',
      'folder' => 'Папка',
      'inboundEmails' => 'Група облікових записів',
      'emailAccounts' => 'Особисті облікові записи',
      'hasAttachment' => 'Має Вкладення',
      'assignedUsers' => 'Assigned Users',
    ),
    'links' => 
    array (
      'replied' => 'Відповіли',
      'replies' => 'Відповіді',
      'inboundEmails' => 'Група облікових записів',
      'emailAccounts' => 'Особисті облікові записи',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Sent By',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Чернетка',
        'Sending' => 'Надсилається',
        'Sent' => 'Надіслано',
        'Archived' => 'Архівовано',
        'Received' => 'Отримано',
        'Failed' => 'Невдало',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Архівувати листа',
      'Archive Email' => 'Архівувати листа',
      'Compose' => 'Написати',
      'Reply' => 'Відповісти',
      'Reply to All' => 'Відповісти всим',
      'Forward' => 'Переслати',
      'Original message' => 'Ориґінал повідомлення',
      'Forwarded message' => 'Переслане повідомлення',
      'Email Accounts' => 'Акаунти емейлів',
      'Inbound Emails' => 'Групові поштові акаунти',
      'Email Templates' => 'Поштові шаблони',
      'Send Test Email' => 'Відправити тестове повідомлення',
      'Send' => 'Відправити',
      'Email Address' => 'Поштова скринька',
      'Mark Read' => 'Прочитане',
      'Sending...' => 'Шле...',
      'Save Draft' => 'Зберегти чернетку',
      'Mark all as read' => 'Mark all as read',
      'Show Plain Text' => 'Show Plain Text',
      'Mark as Important' => 'Відмітити важливим',
      'Unmark Importance' => 'Відмітити не важливим',
      'Move to Trash' => 'Видалити в сміття',
      'Retrieve from Trash' => 'Вилучити з сміття',
      'Move to Folder' => 'Перейти до папки',
      'Filters' => 'Фільтри',
      'Folders' => 'Папка',
      'Create Lead' => 'Створити Лід',
      'Create Contact' => 'Створити контакт',
      'Add to Contact' => 'Додати в контакт',
      'Add to Lead' => 'Додати до Ліда',
      'Create Task' => 'Створити завдання',
      'Create Case' => 'Створити Звернення',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Не налаштовано SMTP. {link}.',
      'testEmailSent' => 'Тестового листа було відправлено',
      'emailSent' => 'Листа було відправлено',
      'savedAsDraft' => 'Збережено як чернетку',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Відправлено',
      'archived' => 'В архіві',
      'inbox' => 'Inbox',
      'drafts' => 'Drafts',
      'trash' => 'Сміття',
      'important' => 'Важливо',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Позначити прочитаним',
      'markAsNotRead' => 'Позначити як прочитане',
      'markAsImportant' => 'Позначити як важливе',
      'markAsNotImportant' => 'Зняти відмітку про важливість',
      'moveToTrash' => 'Вилучити в сміття',
      'moveToFolder' => 'Перемістити в папку',
      'retrieveFromTrash' => 'Вилучити зі сміття',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'status' => 'Статус',
      'host' => 'Хост',
      'username' => 'Ім\'я користувача',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Відслідковувані теки',
      'ssl' => 'SSL',
      'fetchSince' => 'Вибірки з',
      'emailAddress' => 'Поштова скринька',
      'sentFolder' => 'Папка відправлені',
      'storeSentEmails' => 'Історія відправлених повідомлень',
      'keepFetchedEmailsUnread' => 'Залишати завантажені повідомлення електронної пошти непрочитаними',
      'emailFolder' => 'Покласти в папку',
      'useSmtp' => 'Використати SMTP',
      'smtpHost' => 'SMTP Хост',
      'smtpPort' => 'SMTP Порт',
      'smtpAuth' => 'SMTP Аутентифікація',
      'smtpSecurity' => 'SMTP Безпека',
      'smtpUsername' => 'SMTP Ім\'я користувача',
      'smtpPassword' => 'SMTP Пароль',
    ),
    'links' => 
    array (
      'filters' => 'Фільтри',
      'emails' => 'Електронні листи',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активний',
        'Inactive' => 'Неактивний',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Додати емейл-акаунт',
      'IMAP' => 'IMAP',
      'Main' => 'Основне',
      'Test Connection' => 'Перевірка з\'єднання',
      'Send Test Email' => 'Надіслати тестове електронне повідомлення',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Не вдається підключитися до сервера IMAP',
      'connectionIsOk' => 'Connection is Ok',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'You can add \'Sent\' folder to sync emails sent from external email client.',
      'storeSentEmails' => 'Відправлені повідомлення будуть зберігатися на сервері IMAP. В полі «Адреса електронної пошти» має бути відправлена велика кількість адресних листів.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Первинне',
      'Opted Out' => 'Відмовлено',
      'Invalid' => 'Хибно',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Від',
      'to' => 'До',
      'subject' => 'Об\'єкт',
      'bodyContains' => 'Тіло містить',
      'action' => 'Дія',
      'isGlobal' => 'Глобальний',
      'emailFolder' => 'Папка',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Створення фільтра електронної пошти',
      'Emails' => 'Електронні адреси',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Знехтувати',
        'Move to Folder' => 'Покласти до папки',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Дайти фільтру описову назву.',
      'subject' => 'Використовуйте підстановочні *:

Текст* - починається з текстом,
*Текст* - містить текст,
*Текст - закінчується з текстом.',
      'bodyContains' => 'Тіло листа містить будь-яке з вказаних слів або фраз.',
      'from' => 'Листи надсилаються із визначеної адреси. Залиште порожнім якщо не потрібно. Можете скористатися шаблоном *.',
      'to' => 'Листи надсилаються із визначеної адреси. Залиште порожнім якщо не потрібно. Можете скористатися шаблоном *.',
      'isGlobal' => 'Цей фільтр застосовується для всіх електронних листів, що надходять в систему.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Пропустити повідомлення',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Створити папку',
      'Manage Folders' => 'Керування папками',
      'Emails' => 'Електронні листи',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'status' => 'Статус',
      'isHtml' => 'HTML-код',
      'body' => 'Тіло',
      'subject' => 'Тема',
      'attachments' => 'Вкладення',
      'insertField' => 'Додати поле',
      'oneOff' => 'Одноразовий',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Створити шаблон листа',
      'Info' => 'Інфо',
    ),
    'messages' => 
    array (
      'infoText' => 'Доступні змінні:
{optOutUrl} &#8211; - URL для відписки посилання;
{OptOutLink} &#8211; - посилання відмови від підписки.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Позначте, якщо будете користуватись цим шаблоном лише раз. Наприклад для масової розсилки.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Актуально',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Поля',
      'Relationships' => 'Зв\'язки',
      'Schedule' => 'Графік',
      'Log' => 'Лог',
      'Formula' => 'формула',
    ),
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'type' => 'Тип',
      'labelSingular' => 'Одиночна мітка',
      'labelPlural' => 'Множинна мітка',
      'stream' => 'Потік',
      'label' => 'Мітка',
      'linkType' => 'Тип посилання',
      'entityForeign' => 'Foreign Entity',
      'linkForeign' => 'Foreign Link',
      'link' => 'Link',
      'labelForeign' => 'Foreign Label',
      'sortBy' => 'Сортування за замовчуванням (поле)',
      'sortDirection' => 'Сортування за замовчуванням (напрямок)',
      'relationName' => 'Назва середньої таблиці',
      'linkMultipleField' => 'Поле Link Multiple',
      'linkMultipleFieldForeign' => 'Поле Foreign Link Multiple',
      'disabled' => 'Відключено',
      'textFilterFields' => 'Поля текстових фільтрів',
      'audited' => 'Перевірка',
      'auditedForeign' => 'Зовнішня перевірка',
      'statusField' => 'Статус поля',
      'beforeSaveCustomScript' => 'Перед тим як зберегти призначений користувачу скрипт',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Нема',
        'Base' => 'База',
        'Person' => 'Особа',
        'CategoryTree' => 'Category Tree',
        'Event' => 'Подія',
        'BasePlus' => 'База плюс',
        'Company' => 'Компанія',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Багато-до-багатьох',
        'oneToMany' => 'Один-до-багатьох',
        'manyToOne' => 'Багато-до-одного',
        'parentToChildren' => 'Від батька до сина',
        'childrenToParent' => 'Від сина до батька',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Ascending',
        'desc' => 'Descending',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Підрозділ було створено',
      'linkAlreadyExists' => 'Конфлікт: посилання вже існує.',
      'linkConflict' => 'Конфлікт імен: посилання чи поле з таким іменем уже є',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Оновлення цього поля записуються в потік.',
      'textFilterFields' => 'Поле що використовується для текстового пошуку',
      'stream' => 'Незалежно від об\'єкта є потік.',
      'disabled' => 'Перевірте, чи не потрібен цей об\'єкт у вашій системі.',
      'linkAudited' => 'Створення відповідного запису і зв\'язок з існуючим записом буде реєструватися в потоці.',
      'linkMultipleField' => 'Посилання Багаторазове поле забезпечує зручний спосіб для редагування відносин. Не використовуйте його, якщо ви можете мати велику кількість пов\'язаних записів.',
      'entityType' => 'База Плюс - містить Активність, Історію і Панелі завдання.

Подія - доступна в календарі і Активній панелі.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Експортувати всі поля',
      'fieldList' => 'Список полів',
      'format' => 'Формат',
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
      'name' => 'Ім\'я',
      'version' => 'Версія',
      'description' => 'Опис',
      'isInstalled' => 'Встановлено',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Видалити',
      'Install' => 'Установити',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Розширення {name} видалено',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Під\'єднати',
      'Connected' => 'Під\'єднаний',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Логічність динаміки',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Жоден',
        'javascript: return this.dateTime.getNow(1);' => 'На даний час',
        'javascript: return this.dateTime.getNow(5);' => 'На даний час (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'На даний час (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'На даний час (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 година',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 години',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 години',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 години',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 години',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 годин',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 годин',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 годин',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 годин',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 годин',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 годин',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 годин',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 день',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 дні',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 дні',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 дні',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 днів',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 годин',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 тиждень',
      ),
      'dateDefault' => 
      array (
        '' => 'Жоден',
        'javascript: return this.dateTime.getToday();' => 'Сьогодні',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 день',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 дні',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 дні',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 дні',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 днів',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 днів',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 днів',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 днів',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 днів',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 днів',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 тиждень',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 тижні',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 тижні',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 місяць',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 місяці',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 місяці',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 місяці',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 місяців',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 місяців',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 місяців',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 місяців',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 місяців',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 місяців',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 місяців',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 рік',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Оновлення будуть реєструватися в потоці',
      'required' => 'Поле буде обов\'язковим. Не можна залишити порожнім.',
      'default' => 'Значення буде встановлено за замовчуванням при створенні.',
      'min' => 'Мінімально допустиме значення.',
      'max' => 'Максимально допустиме значення.',
      'seeMoreDisabled' => 'Якщо не встановлено, то довгі тексти будуть скорочені.',
      'lengthOfCut' => 'Наскільки довгим може бути текст, перш ніж він буде скорочений.',
      'maxLength' => 'Максимально допустима довжина тексту.',
      'before' => 'Значення дати має бути перед значенням дати у вказаному полі.',
      'after' => 'Значення дати має бути після значення дати у вказаному полі.',
      'readOnly' => 'Користувач не може вичначати значення поля. Воно буде задане формулою.',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Емейл',
      'User' => 'Користувач',
      'Team' => 'Команда',
      'Role' => 'Роль',
      'EmailTemplate' => 'Шаблон листа',
      'EmailAccount' => 'Емейл-акаунт',
      'EmailAccountScope' => 'Емейл-акаунт',
      'OutboundEmail' => 'Вихідний лист',
      'ScheduledJob' => 'Заплановані завдання',
      'ExternalAccount' => 'Зовнішній рахунок',
      'Extension' => 'Розширення',
      'Dashboard' => 'Панель дашлетів',
      'InboundEmail' => 'Inbound Email Account',
      'Stream' => 'Потік',
      'Import' => 'Імпорт',
      'Template' => 'Шаблон',
      'Job' => 'Робота',
      'EmailFilter' => 'Фільтр пошти',
      'Portal' => 'Портал',
      'PortalRole' => 'Роль порталу',
      'Attachment' => 'Вкладення',
      'EmailFolder' => 'Папка з електронними листами',
      'PortalUser' => 'Користувач порталу',
      'ScheduledJobLogRecord' => 'Заплановані роботи запис в журналі',
      'PasswordChangeRequest' => 'Запит на зміна паролю',
      'ActionHistoryRecord' => 'Запис Історії дій',
      'AuthToken' => 'Токен аутентифікації',
      'UniqueId' => 'Унікальний ID',
      'LastViewed' => 'Останні переглянуті',
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
      'Account' => 'Контрагент',
      'Contact' => 'Контакт',
      'Lead' => 'Лід',
      'Target' => 'Ціль',
      'Opportunity' => 'Угода',
      'Meeting' => 'Зустріч',
      'Calendar' => 'Календар',
      'Call' => 'Дзвінок',
      'Task' => 'Завдання',
      'Case' => 'Звернення',
      'Document' => 'Документ',
      'DocumentFolder' => 'Документ папка',
      'Campaign' => 'Кампанія',
      'TargetList' => 'Цільовий список',
      'MassEmail' => 'Масова розсилка',
      'EmailQueueItem' => 'Черговість пунктів в електронній скринці',
      'CampaignTrackingUrl' => 'Відстеження URL',
      'Activities' => 'Активність',
      'KnowledgeBaseArticle' => 'Стаття Бази Знань',
      'KnowledgeBaseCategory' => 'Категорія Бази Знань',
      'CampaignLogRecord' => 'Лоґ кампанії',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Листи',
      'User' => 'Користувачі',
      'Team' => 'Команди',
      'Role' => 'Ролі',
      'EmailTemplate' => 'Шаблони листів',
      'EmailAccount' => 'Акаунти емейлів',
      'EmailAccountScope' => 'Акаунти емейлів',
      'OutboundEmail' => 'Вихідна електронна пошта',
      'ScheduledJob' => 'Заплановані завдання',
      'ExternalAccount' => 'Зовнішні аккаунти',
      'Extension' => 'Розширення',
      'Dashboard' => 'Панель дашлетів',
      'InboundEmail' => 'Inbound Email Accounts',
      'Stream' => 'Потік',
      'Import' => 'Import Results',
      'Template' => 'Шаблони',
      'Job' => 'Завдання',
      'EmailFilter' => 'Фільтри пошти',
      'Portal' => 'Портали',
      'PortalRole' => 'Ролі порталу',
      'Attachment' => 'Вкладення',
      'EmailFolder' => 'Папки з електронними листами',
      'PortalUser' => 'Портал користувачів',
      'ScheduledJobLogRecord' => 'Записи Журналу Запланованих робіт',
      'PasswordChangeRequest' => 'Запити на зміну пароля',
      'ActionHistoryRecord' => 'Історія дій',
      'AuthToken' => 'Токени аутентифікації',
      'UniqueId' => 'Унікальні ідентифікатори',
      'LastViewed' => 'Останній Розглянутий',
      'Account' => 'Контрагенти',
      'Contact' => 'Контакти',
      'Lead' => 'Ліди',
      'Target' => 'Цілі',
      'Opportunity' => 'Угоди',
      'Meeting' => 'Зустрічі',
      'Calendar' => 'Календар',
      'Call' => 'Дзвінки',
      'Task' => 'Завдання',
      'Case' => 'Звернення',
      'Document' => 'Документи',
      'DocumentFolder' => 'Папки для документів',
      'Campaign' => 'Кампанії',
      'TargetList' => 'Цільові списки',
      'MassEmail' => 'Масові розсилки',
      'EmailQueueItem' => 'Електронне повідомлення черговості питань',
      'CampaignTrackingUrl' => 'Відстеження URLs',
      'Activities' => 'Активність',
      'KnowledgeBaseArticle' => 'База знань',
      'KnowledgeBaseCategory' => 'Категорії Бази Знань',
      'CampaignLogRecord' => 'Лоґи кампанії',
    ),
    'labels' => 
    array (
      'Misc' => 'Різне',
      'Merge' => 'Об\'єднати',
      'None' => 'Нема',
      'Home' => 'Дім',
      'by' => 'за',
      'Saved' => 'Збережено',
      'Error' => 'Помилка',
      'Select' => 'Обрати',
      'Not valid' => 'Некоректні дані',
      'Please wait...' => 'Будь ласка, зачекайте...',
      'Please wait' => 'Будь ласка, зачекайте',
      'Loading...' => 'Завантаження...',
      'Uploading...' => 'Завантаження...',
      'Sending...' => 'Шле...',
      'Merging...' => 'Злиття...',
      'Merged' => 'Злилося',
      'Removed' => 'Видалено',
      'Posted' => 'Додано',
      'Linked' => 'Поєднано',
      'Unlinked' => 'Від’єднано',
      'Done' => 'Зроблено',
      'Access denied' => 'У доступі відмовлено',
      'Not found' => 'Не знайдено',
      'Access' => 'Доступ',
      'Are you sure?' => 'Ви певні?',
      'Record has been removed' => 'Запис видалено',
      'Wrong username/password' => 'Хибне ім\'я користувача / пароль',
      'Post cannot be empty' => 'Повідомлення не може бути порожнім',
      'Removing...' => 'Видаляється...',
      'Unlinking...' => 'Від’єднання...',
      'Posting...' => 'Публікується...',
      'Username can not be empty!' => 'Ім\'я користувача не може бути порожнім!',
      'Cache is not enabled' => 'Кеш не підключено',
      'Cache has been cleared' => 'Кеш очищено',
      'Rebuild has been done' => 'Відновлення виконано',
      'Return to Application' => 'Повернення до додатку',
      'Saving...' => 'Зберігається...',
      'Modified' => 'Змінено',
      'Created' => 'Створено',
      'Create' => 'Створити',
      'create' => 'створити',
      'Overview' => 'Огляд',
      'Details' => 'Деталі',
      'Add Field' => 'Додати поле',
      'Add Dashlet' => 'Додати дашлет',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Змінити панель дашлетів',
      'Add' => 'Додати',
      'Add Item' => 'Додати елемент',
      'Reset' => 'Скинути',
      'Menu' => 'Меню',
      'More' => 'Більше',
      'Search' => 'Шукати',
      'Only My' => 'Тільки моє',
      'Open' => 'Відкрити',
      'Admin' => 'Адміністратор',
      'About' => 'Про програму',
      'Refresh' => 'Оновити',
      'Remove' => 'Видалити',
      'Options' => 'Опції',
      'Username' => 'Ім\'я користувача',
      'Password' => 'Пароль',
      'Login' => 'Увійти',
      'Log Out' => 'Вийти',
      'Preferences' => 'Параметри',
      'State' => 'Регіон',
      'Street' => 'Вулиця',
      'Country' => 'Країна',
      'City' => 'Місто',
      'PostalCode' => 'Поштовий індекс',
      'Followed' => 'Підписано',
      'Follow' => 'Підписатися',
      'Followers' => 'Підписники',
      'Clear Local Cache' => 'Очистити локальний кеш',
      'Actions' => 'Дії',
      'Delete' => 'Видалити',
      'Update' => 'Оновлення',
      'Save' => 'Зберегти',
      'Edit' => 'Зміни',
      'View' => 'Переглянути',
      'Cancel' => 'Скасувати',
      'Apply' => 'Застосовувати',
      'Unlink' => 'Від’єднати',
      'Mass Update' => 'Масове оновлення',
      'Export' => 'Експортувати',
      'No Data' => 'Немає даних',
      'No Access' => 'Немає доступу',
      'All' => 'Все',
      'Active' => 'Активний',
      'Inactive' => 'Неактивний',
      'Write your comment here' => 'Залиште свій коментар тут',
      'Post' => 'Піблікувати',
      'Stream' => 'Потік',
      'Show more' => 'Показати більше',
      'Dashlet Options' => 'Опції дашлету',
      'Full Form' => 'Повна форма',
      'Insert' => 'Вставити',
      'Person' => 'Особа',
      'First Name' => 'Ім\'я',
      'Last Name' => 'Прізвище',
      'Original' => 'Оригінальний',
      'You' => 'Ви',
      'you' => 'ви',
      'change' => 'змінити',
      'Change' => 'Зміна',
      'Primary' => 'Первинне',
      'Save Filter' => 'Save Filter',
      'Administration' => 'Адміністрування',
      'Run Import' => 'Запустити імпорт',
      'Duplicate' => 'Дуплікат',
      'Notifications' => 'Оповіщення',
      'Mark all read' => 'Помітити усе як прочитане',
      'See more' => 'Дивитися більше',
      'Today' => 'Сьогодні',
      'Tomorrow' => 'Завтра',
      'Yesterday' => 'Вчора',
      'Submit' => 'Подати',
      'Close' => 'Закрити',
      'Yes' => 'Так',
      'No' => 'Немає',
      'Select All Results' => 'Вибрати всі результати',
      'Value' => 'Value',
      'Current version' => 'Current version',
      'List View' => 'List View',
      'Tree View' => 'Tree View',
      'Unlink All' => 'Від’єднати всі',
      'Total' => 'Загальний',
      'Print to PDF' => 'Друк в PDF',
      'Default' => 'За замовчуванням',
      'Number' => 'Номер',
      'From' => 'Від',
      'To' => 'Кому',
      'Create Post' => 'Запостити',
      'Previous Entry' => 'Попередній запис',
      'Next Entry' => 'Наступний запис',
      'View List' => 'Показати перелік',
      'Attach File' => 'Додати файл',
      'Skip' => 'Пропуск',
      'Attribute' => 'Атрибут',
      'Function' => 'Функція',
      'Self-Assign' => 'Особисте доручення',
      'Self-Assigned' => 'Особисте призначення',
      'Create InboundEmail' => 'Створити вхідну пошту',
      'Activities' => 'Заходи',
      'History' => 'Історія',
      'Attendees' => 'Учасники',
      'Schedule Meeting' => 'Запланувати зустріч',
      'Schedule Call' => 'Запланувати дзвінок',
      'Compose Email' => 'Написати емейл',
      'Log Meeting' => 'Записати зустріч',
      'Log Call' => 'Записати дзвінок',
      'Archive Email' => 'Записати емейл',
      'Create Task' => 'Створити завдання',
      'Tasks' => 'Завдання',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Будь ласка, зачекайте...',
      'posting' => 'Постимо...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => 'Are you sure you want to leave the form?',
      'notModified' => 'Ви не внесли змін до запису',
      'duplicate' => 'Створений Вами запис був дубльований',
      'dropToAttach' => 'Відкріпити прикріплення',
      'fieldIsRequired' => '{field} обов\'язкове',
      'fieldShouldBeEmail' => '{field} дійсна адреса електронної пошти',
      'fieldShouldBeFloat' => '{field} повинне бути допустимим числом з плаваючою частиною',
      'fieldShouldBeInt' => '{field} повинно бути цілим числом',
      'fieldShouldBeDate' => '{field} має бути дійсною дата',
      'fieldShouldBeDatetime' => '{field} має бути дійсним дата/час',
      'fieldShouldAfter' => '{field} мусить бути після {otherField}',
      'fieldShouldBefore' => '{field} мусить бути до {otherField}',
      'fieldShouldBeBetween' => '{field} мусить бути між {min} і {max}',
      'fieldShouldBeLess' => '{field} мусить бути менше ніж {value}',
      'fieldShouldBeGreater' => '{field} мусить бути більше ніж {value}',
      'fieldBadPasswordConfirm' => 'Правильність {field} не підтверджено',
      'resetPreferencesDone' => 'Налаштування скинуті до значень за замовчуванням',
      'confirmation' => 'Ви певні?',
      'unlinkAllConfirmation' => 'Впевнені, що хочете від\'єднати поєднані записи?',
      'resetPreferencesConfirmation' => 'Ви певні, що Ви хочете скинути налаштування за замовчуванням?',
      'removeRecordConfirmation' => 'Ви певні, що Ви хочете видалити запис?',
      'unlinkRecordConfirmation' => 'Ви певні, що Ви хочете прибрати зв\'язок?',
      'removeSelectedRecordsConfirmation' => 'Ви певні, що Ви хочете видалити вибрані записи?',
      'massUpdateResult' => '{count} записи були поновлені',
      'massUpdateResultSingle' => '{count} запис була поновлена',
      'noRecordsUpdated' => 'Запису не були поновлені',
      'massRemoveResult' => '{count} записи були видалені',
      'massRemoveResultSingle' => '{count} запис була видалена',
      'noRecordsRemoved' => 'Жодних записів не було видалено',
      'clickToRefresh' => 'Натисніть, щоби поновити',
      'streamPostInfo' => 'Тип <strong>@username</strong> для згадування користувачів у дописі.
Припустимий синтаксис розмітки:`<code>code</code>`
**<strong>strong text</strong>**
*<em>emphasized text</em>*
~<del>deleted text</del>~
> blockquote
[текст](url)',
      'writeYourCommentHere' => 'Напишіть свій коментар',
      'writeMessageToUser' => 'Написати користувачу {user}',
      'writeMessageToSelf' => 'Написати повідомлення в своєму потоці',
      'typeAndPressEnter' => 'Напишіть і натисніть Enter',
      'checkForNewNotifications' => 'Перевірити інформування',
      'checkForNewNotes' => 'Перевірити наявність оновлень потоку',
      'internalPost' => 'Повідомлення буде видно тільки внутрішнім користувачам',
      'internalPostTitle' => 'Повідомлення бачитимуть тільки внутрішні користувачі',
      'done' => 'Завершено',
      'confirmMassFollow' => 'Ви впевнені, що хочете підписатися на вибрані записи?',
      'confirmMassUnfollow' => 'Ви впевнені, що хочете видалити підписку на вибрані записи?',
      'massFollowResult' => '{count} записи наразі відстежуються',
      'massUnfollowResult' => '{count} записи наразі не відстежуються',
      'massFollowResultSingle' => '{count} записи наразі відстежуються',
      'massUnfollowResultSingle' => '{count} записи наразі не відстежуються',
      'massFollowZeroResult' => 'Немає на що підписуватись',
      'massUnfollowZeroResult' => 'Немає від чого відписуватись',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Тільки моє',
      'followed' => 'Підписано',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Підписано',
      'all' => 'Все',
    ),
    'massActions' => 
    array (
      'remove' => 'Видалити',
      'merge' => 'Об\'єднати',
      'massUpdate' => 'Масове оновлення',
      'export' => 'Експортувати',
      'follow' => 'Підписатися',
      'unfollow' => 'Відписатися',
    ),
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'firstName' => 'Ім\'я',
      'lastName' => 'Прізвище',
      'salutationName' => 'Привітання',
      'assignedUser' => 'Відповідальний',
      'assignedUsers' => 'Додані користувачі',
      'emailAddress' => 'Емейл',
      'assignedUserName' => 'Ім\'я призначеного користувача',
      'teams' => 'Команди',
      'createdAt' => 'Створений у',
      'modifiedAt' => 'Змінений у',
      'createdBy' => 'Створено',
      'modifiedBy' => 'Змінено',
      'description' => 'Опис',
      'address' => 'Адреса',
      'phoneNumber' => 'Телефон',
      'phoneNumberMobile' => 'Phone (Mobile)',
      'phoneNumberHome' => 'Phone (Home)',
      'phoneNumberFax' => 'Phone (Fax)',
      'phoneNumberOffice' => 'Phone (Office)',
      'phoneNumberOther' => 'Phone (Other)',
      'order' => 'Сортування',
      'parent' => 'Батько',
      'children' => 'Children',
      'id' => 'ID',
      'billingAddressCity' => 'Місто',
      'billingAddressCountry' => 'Країна',
      'billingAddressPostalCode' => 'Поштовий індекс',
      'billingAddressState' => 'Регіон',
      'billingAddressStreet' => 'Вулиця',
      'billingAddressMap' => 'Мапа',
      'addressCity' => 'Місто',
      'addressStreet' => 'Вулиця',
      'addressCountry' => 'Країна',
      'addressState' => 'Регіон',
      'addressPostalCode' => 'Поштовий індекс',
      'addressMap' => 'Мапа',
      'shippingAddressCity' => 'Місто доставки',
      'shippingAddressStreet' => 'Вулиця доставки',
      'shippingAddressCountry' => 'Країна доставки',
      'shippingAddressState' => 'Регіон доставки',
      'shippingAddressPostalCode' => 'Поштовий код доставки',
      'shippingAddressMap' => 'Мапа (доставка)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Відповідальний',
      'createdBy' => 'Створено',
      'modifiedBy' => 'Змінено',
      'team' => 'Команда',
      'roles' => 'Ролі',
      'teams' => 'Команди',
      'users' => 'Користувачі',
      'parent' => 'Батько',
      'children' => 'Діти',
      'contacts' => 'Контакти',
      'opportunities' => 'Угоди',
      'leads' => 'Ліди',
      'meetings' => 'Зустрічі',
      'calls' => 'Дзвінки',
      'tasks' => 'Завдання',
      'emails' => 'Листи',
      'accounts' => 'Контрагенти',
      'cases' => 'Звернення',
      'documents' => 'Документи',
      'account' => 'Контрагент',
      'opportunity' => 'Угода',
      'contact' => 'Контакт',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Потік',
      'Emails' => 'Мої вхідні',
      'Records' => 'Список записів',
      'Leads' => 'Мої ліди',
      'Opportunities' => 'Мої угоди',
      'Tasks' => 'Мої завдання',
      'Cases' => 'Мої звернення',
      'Calendar' => 'Календар',
      'Calls' => 'Мої дзвінки',
      'Meetings' => 'Мої зустрічі',
      'OpportunitiesByStage' => 'Угоди на стадії',
      'OpportunitiesByLeadSource' => 'Угоди за джерелом лідів',
      'SalesByMonth' => 'Продажі по місяцях',
      'SalesPipeline' => 'Джерела продажу',
      'Activities' => 'Моя діяльність',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} призначено на Вас',
      'emailReceived' => 'Email отриманий від {from}',
      'entityRemoved' => '{user} видалений {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} написав на {entityType} {entity}',
      'attach' => '{user} прикрипив до {entityType} {entity}',
      'status' => '{user} updated {field} of {entityType} {entity}',
      'update' => '{user} поновив {entityType} {entity}',
      'postTargetTeam' => '{user} написав команді {target}',
      'postTargetTeams' => '{user} написав командам {target}',
      'postTargetPortal' => '{user} написав для користувачів порталу {target}',
      'postTargetPortals' => '{user} написав для користувачів порталів {target}',
      'postTarget' => '{user} написав для {target}',
      'postTargetYou' => '{user} написав для вас',
      'postTargetYouAndOthers' => '{user} написав для {target} та вас',
      'postTargetAll' => '{user} написав для всіх',
      'postTargetSelf' => '{user} написав для себе',
      'postTargetSelfAndOthers' => '{user} написав для {target} та себе',
      'mentionInPost' => '{user} mentioned {mentioned} in {entityType} {entity}',
      'mentionYouInPost' => '{user} згадав вас в {entityType} {entity} ',
      'mentionInPostTarget' => '{user} згаданий {mentioned} в повідомленні',
      'mentionYouInPostTarget' => '{user} згадав вас у повідомленні також {target}',
      'mentionYouInPostTargetAll' => '{user} згадав вас в пості для всіх',
      'mentionYouInPostTargetNoTarget' => '{user} зазначений в вашому листі',
      'create' => '{user} створив {entityType} {entity}',
      'createThis' => '{user} створив {entityType}',
      'createAssignedThis' => '{user} створив {entityType} призначену {assignee}',
      'createAssigned' => '{user} створив {entityType} {entity}, призначену {assignee}',
      'createAssignedYou' => '{user} створив {entityType} {entity}, призначену Вам',
      'createAssignedThisSelf' => '{user} створив цей {entityType} та призначив його собі',
      'createAssignedSelf' => '{user} створив цей {entityType} {entity} та призначив його собі',
      'assign' => '{user} призначив {entityType} {entity} на {assignee}',
      'assignThis' => '{user} призначив {entityType} на {assignee}',
      'assignYou' => '{user} призначив {entityType} {entity} на Вас',
      'assignThisVoid' => '{user} непризначено цей {entityType} {entity} ',
      'assignVoid' => '{user} непризначено {entityType} {entity}',
      'assignThisSelf' => '{user} самопризначений цей {entityType} {entity}',
      'assignSelf' => '{user} самопризначений {entityType} {entity}',
      'postThis' => '{user} опублікував',
      'attachThis' => '{user} приклав',
      'statusThis' => '{user} поновив {field}',
      'updateThis' => '{user} поновив {entityType}',
      'createRelatedThis' => '{user} створив {relatedEntityType} {relatedEntity} пов\'язаний з {entityType}',
      'createRelated' => '{user} створив {relatedEntityType} {relatedEntity} пов\'язаний з  {entityType} {entity}',
      'relate' => '{user} підключений {relatedEntityType} {relatedEntity} з {entityType} {entity}',
      'relateThis' => '{user} підключений {relatedEntityType} {relatedEntity} із цим {entityType}',
      'emailReceivedFromThis' => 'Email отримано від {from}',
      'emailReceivedInitialFromThis' => 'Email отримано від {from}, це {entityType} створено',
      'emailReceivedThis' => 'Email отримано',
      'emailReceivedInitialThis' => 'Email отримано, це {entityType} створено',
      'emailReceivedFrom' => 'Email отримано від {from}, related to {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email отримано від {from}, {entityType} {entity} створено',
      'emailReceived' => 'Email отримано, відноситься до {entityType} {entity}',
      'emailReceivedInitial' => 'Email отримано: {entityType} {entity} створено',
      'emailReceivedInitialFrom' => 'Email отримано від {from}, {entityType} {entity} створено',
      'emailSent' => '{by} відправив email {entityType} {entity}',
      'emailSentThis' => '{by} відправив email',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} написав для {target} та себе',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} відправила повідомлення для {target} та себе',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Січень',
        1 => 'Лютий',
        2 => 'Березень',
        3 => 'Квітень',
        4 => 'Травень',
        5 => 'Червень',
        6 => 'Липень',
        7 => 'Серпень',
        8 => 'Вересень',
        9 => 'Жовтень',
        10 => 'Листопад',
        11 => 'Грудень',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Січ',
        1 => 'Лют',
        2 => 'Бер',
        3 => 'Кв',
        4 => 'Тр',
        5 => 'Чер',
        6 => 'Лип',
        7 => 'Сер',
        8 => 'Вер',
        9 => 'Жов',
        10 => 'Лис',
        11 => 'Гр',
      ),
      'dayNames' => 
      array (
        0 => 'Неділя',
        1 => 'Понеділок',
        2 => 'Вівторок',
        3 => 'Середа',
        4 => 'Четвер',
        5 => 'П\'ятниця',
        6 => 'Субота',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Нед',
        1 => 'Пон',
        2 => 'В-т',
        3 => 'Сер',
        4 => 'Чет',
        5 => 'П-т',
        6 => 'Суб',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Нд',
        1 => 'Пн',
        2 => 'Вт',
        3 => 'Ср',
        4 => 'Чт',
        5 => 'Пт',
        6 => 'Сб',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'пан',
        'Mrs.' => 'пані',
        'Ms.' => 'панна',
        'Dr.' => 'доктор',
      ),
      'language' => 
      array (
        'af_ZA' => 'Африкаанс',
        'az_AZ' => 'Азербайджанська',
        'be_BY' => 'Бєларуська',
        'bg_BG' => 'Болгарська',
        'bn_IN' => 'Бенгальська',
        'bs_BA' => 'Боснійська',
        'ca_ES' => 'Каталонська',
        'cs_CZ' => 'Чеська',
        'cy_GB' => 'Валлійська',
        'da_DK' => 'Данська',
        'de_DE' => 'Німецька',
        'el_GR' => 'Грецька',
        'en_GB' => 'Англійська (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'Англійська (US)',
        'es_ES' => 'Іспанська (Іспанія)',
        'et_EE' => 'Естонська',
        'eu_ES' => 'Баскська',
        'fa_IR' => 'Перська',
        'fi_FI' => 'Фінська',
        'fo_FO' => 'Фарерська',
        'fr_CA' => 'Французька (Канада)',
        'fr_FR' => 'Французька (Франція)',
        'ga_IE' => 'Ірландська',
        'gl_ES' => 'Гальська',
        'gn_PY' => 'Гуарані',
        'he_IL' => 'Іврит',
        'hi_IN' => 'Гінді',
        'hr_HR' => 'Хорватська',
        'hu_HU' => 'Угорська',
        'hy_AM' => 'Вірменська',
        'id_ID' => 'Індонезійська',
        'is_IS' => 'Ісландська',
        'it_IT' => 'Італійська',
        'ja_JP' => 'Японська',
        'ka_GE' => 'Грузинська',
        'km_KH' => 'Кхмерська',
        'ko_KR' => 'Корейська',
        'ku_TR' => 'Курдська',
        'lt_LT' => 'Литовська',
        'lv_LV' => 'Латвійська',
        'mk_MK' => 'Македонська',
        'ml_IN' => 'Малаялам',
        'ms_MY' => 'Малайська',
        'nb_NO' => 'Норвезька книжна',
        'nn_NO' => 'Норвезька нова',
        'ne_NP' => 'Непальська',
        'nl_NL' => 'Голландська',
        'pa_IN' => 'Панджабі',
        'pl_PL' => 'Польська',
        'ps_AF' => 'Пушту',
        'pt_BR' => 'Португальська (Бразилія)',
        'pt_PT' => 'Португальська (Португалія)',
        'ro_RO' => 'Румунська',
        'ru_RU' => 'Російська',
        'sk_SK' => 'Словацька',
        'sl_SI' => 'Словенська',
        'sq_AL' => 'Албанська',
        'sr_RS' => 'Сербська',
        'sv_SE' => 'Шведська',
        'sw_KE' => 'Суахілі',
        'ta_IN' => 'Тамільська',
        'te_IN' => 'Телугу',
        'th_TH' => 'Тайська',
        'tl_PH' => 'Тагальська',
        'tr_TR' => 'Турецька',
        'uk_UA' => 'Українська',
        'ur_PK' => 'Урду',
        'vi_VN' => 'В\'єтнамська',
        'zh_CN' => 'Спрощена китайська (китай)',
        'zh_HK' => 'Традиційна китайська (Гонконг)',
        'zh_TW' => 'Традиційна китайська (Тайвань)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'На',
        'notOn' => 'Не на',
        'after' => 'Після',
        'before' => 'До',
        'between' => 'Між',
        'today' => 'Сьогодні',
        'past' => 'Минуле',
        'future' => 'Майбутнє',
        'currentMonth' => 'Поточний місяць',
        'lastMonth' => 'Минулого місяця',
        'currentQuarter' => 'Поточного кварталу',
        'lastQuarter' => 'Минулого Кварталу',
        'currentYear' => 'Поточного року',
        'lastYear' => 'Минулого року',
        'lastSevenDays' => 'Останні 7 днів',
        'lastXDays' => 'Останні Х днів',
        'nextXDays' => 'Останні Х днів',
        'ever' => 'Коли-небудь',
        'isEmpty' => 'Порожньо',
        'olderThanXDays' => 'Давніше за Х дні',
        'afterXDays' => 'Після Х днів',
      ),
      'searchRanges' => 
      array (
        'is' => 'Is',
        'isEmpty' => 'Пусто',
        'isNotEmpty' => 'Не пусто',
        'isOneOf' => 'будь-який з',
        'isFromTeams' => 'Від команди',
        'isNot' => 'Не',
        'isNotOneOf' => 'Жоден з',
        'anyOf' => 'будь-який з',
        'noneOf' => 'Жоден з',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Дорівнює',
        'like' => 'Це довподоби (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Starts With',
        'endsWith' => 'Закінчується',
        'contains' => 'Contains',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Пусто',
        'isNotEmpty' => 'Не пусто',
        'notEquals' => 'Not Equals',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Дорівнює',
        'notEquals' => 'Не дорівнює',
        'greaterThan' => 'Більше ніж',
        'lessThan' => 'Менше ніж',
        'greaterThanOrEquals' => 'Більше ніж або дорівнює',
        'lessThanOrEquals' => 'Менше ніж або дорівнює',
        'between' => 'Між',
        'isEmpty' => 'Порожньо',
        'isNotEmpty' => 'Не порожньо',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Нема',
        '0.5' => '30 секунд',
        1 => '1 хвилина',
        2 => '2 хвилини',
        5 => '5 хвилин',
        10 => '10 хвилин',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Мобільний',
        'Office' => 'Офісний',
        'Fax' => 'Факс',
        'Home' => 'Домашній',
        'Other' => 'Додатково',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Спливаюче вікно',
        'Email' => 'Емейл',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Ви можете знайти переклад тут: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Напівжирний',
          'italic' => 'Курсив',
          'underline' => 'Підкреслений',
          'strike' => 'Закреслений',
          'clear' => 'Прибрати стилі шрифту',
          'height' => 'Висота лінії',
          'name' => 'Родина шрифту',
          'size' => 'Розмір шрифту',
        ),
        'image' => 
        array (
          'image' => 'Картинка',
          'insert' => 'Вставити зображення',
          'resizeFull' => 'Повний розмір',
          'resizeHalf' => 'Половинний розмір',
          'resizeQuarter' => 'Чвертинний розмір',
          'floatLeft' => 'Обтікання зліва',
          'floatRight' => 'Обтікання зправа',
          'floatNone' => 'Без обтікання',
          'dragImageHere' => 'Перетягніть сюди зображення',
          'selectFromFiles' => 'Вибрати з файлів',
          'url' => 'URL зображення',
          'remove' => 'Видалити зображення',
        ),
        'link' => 
        array (
          'link' => 'Посилання',
          'insert' => 'Вставити посилання',
          'unlink' => 'Від’єднати',
          'edit' => 'Змінити',
          'textToDisplay' => 'Текст для відображення',
          'url' => 'До якого URL це посилання?',
          'openInNewWindow' => 'Відкрити у новому вікні',
        ),
        'video' => 
        array (
          'video' => 'Відео',
          'videoLink' => 'Посилання на відео',
          'insert' => 'Вставити відео',
          'url' => 'URL відео?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, або DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Таблиця',
        ),
        'hr' => 
        array (
          'insert' => 'Вставити горизонтальну лінію',
        ),
        'style' => 
        array (
          'style' => 'Стиль',
          'normal' => 'Нормальний',
          'blockquote' => 'Цитата',
          'pre' => 'Код',
          'h1' => 'Заголовок 1',
          'h2' => 'Заголовок 2',
          'h3' => 'Заголовок 3',
          'h4' => 'Заголовок 4',
          'h5' => 'Заголовок 5',
          'h6' => 'Заголовок 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Маркований список',
          'ordered' => 'Нумерований список',
        ),
        'options' => 
        array (
          'help' => 'Допомога',
          'fullscreen' => 'Повний екран',
          'codeview' => 'Перегляд коду',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Абзац',
          'outdent' => 'Зменшити відступ',
          'indent' => 'Збільшити відступ',
          'left' => 'Вирівняти по лівому краю',
          'center' => 'Вирівняти по центру',
          'right' => 'Вирівняти по правому краю',
          'justify' => 'Розтягнути по ширині',
        ),
        'color' => 
        array (
          'recent' => 'Останній колір',
          'more' => 'Ще кольори',
          'background' => 'Колір тла',
          'foreground' => 'Колір шрифту',
          'transparent' => 'Прозорий',
          'setTransparent' => 'Установити прозорим',
          'reset' => 'Скинути',
          'resetToDefault' => 'Скинути до замовчуваного',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Сполучення клавіш',
          'close' => 'Закрити',
          'textFormatting' => 'Форматування тексту',
          'action' => 'Дія',
          'paragraphFormatting' => 'Форматування абзацу',
          'documentStyle' => 'Стиль документа',
        ),
        'history' => 
        array (
          'undo' => 'Скасувати',
          'redo' => 'Повторити',
        ),
      ),
    ),
    'themes' => 
    array (
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL Espo',
      'Sakura' => 'Сакура',
      'EspoVertical' => 'Espo бокова панель',
      'SakuraVertical' => 'Сакура бокова панель',
      'Violet' => 'Фіолетовий',
      'VioletVertical' => 'Фіолет бокова панель',
      'Hazyblue' => 'Темно-синій',
      'HazyblueVertical' => 'Темно-синій бокова панель',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Revert Import',
      'Return to Import' => 'Повернутися до імпорту',
      'Run Import' => 'Запустити імпорт',
      'Back' => 'Назад',
      'Field Mapping' => 'Зіставлення полів',
      'Default Values' => 'Значення за замовчуванням',
      'Add Field' => 'Додати поле',
      'Created' => 'Створено',
      'Updated' => 'Поновлено',
      'Result' => 'Результат',
      'Show records' => 'Показати записи',
      'Remove Duplicates' => 'Remove Duplicates',
      'importedCount' => 'Imported (count)',
      'duplicateCount' => 'Duplicates (count)',
      'updatedCount' => 'Updated (count)',
      'Create Only' => 'Тільки створення',
      'Create and Update' => 'Створення та оновлення',
      'Update Only' => 'Тільки оновлення',
      'Update by' => 'Оновив(ла)',
      'Set as Not Duplicate' => 'Позначити не дублювати',
      'File (CSV)' => 'Файл (CSV)',
      'First Row Value' => 'Перший рядок значення',
      'Skip' => 'Пропуск',
      'Header Row Value' => 'Тема рядка значення',
      'Field' => 'Поле',
      'What to Import?' => 'Що імпортувати?',
      'Entity Type' => 'Тип об\'єкта',
      'What to do?' => 'Що робити?',
      'Properties' => 'Властивості',
      'Header Row' => 'Тема рядка',
      'Person Name Format' => 'Формат Імені персони',
      'John Smith' => 'Джон Сміт',
      'Smith John' => 'Сміт Джон',
      'Smith, John' => 'Сміт, Джон',
      'Field Delimiter' => 'Роздільник полів',
      'Date Format' => 'Формат дати',
      'Decimal Mark' => 'Десятковий знак',
      'Text Qualifier' => 'Класифікатор тексту',
      'Time Format' => 'Формат часу',
      'Currency' => 'Валюта',
      'Preview' => 'Попередній перегляд',
      'Next' => 'Наступний',
      'Step 1' => 'Крок 1',
      'Step 2' => 'Крок 2',
      'Double Quote' => 'Подвійні лапки',
      'Single Quote' => 'Апостроф',
      'Imported' => 'Імпортований',
      'Duplicates' => 'Дублікати',
      'Skip searching for duplicates' => 'Пропустити пошук дублікатів',
      'Timezone' => 'Часовий пояс',
    ),
    'messages' => 
    array (
      'utf8' => 'Мусить бути в кодуванні utf-8',
      'duplicatesRemoved' => 'Duplicates removed',
      'inIdle' => 'Виконати у фоновому режимі (для великих даних; через cron)',
    ),
    'fields' => 
    array (
      'file' => 'Файл',
      'entityType' => 'Entity Type',
      'imported' => 'Imported Records',
      'duplicates' => 'Duplicate Records',
      'updated' => 'Updated Records',
      'status' => 'Статус',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Не вдалося',
        'In Process' => 'В процесі',
        'Complete' => 'Виконано',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'emailAddress' => 'Емейл',
      'team' => 'Команда',
      'status' => 'Статус',
      'assignToUser' => 'Присвоїти користувачеві',
      'host' => 'Хост',
      'username' => 'Ім\'я користувача',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Відслідковувані теки',
      'trashFolder' => 'Кошик',
      'ssl' => 'SSL',
      'createCase' => 'Створити звернення',
      'reply' => 'Авто-Відповідь',
      'caseDistribution' => 'Розподіл звернень',
      'replyEmailTemplate' => 'Відповісти за зразком',
      'replyFromAddress' => 'Відповісти з адреси',
      'replyToAddress' => 'Відповісти на адресу',
      'replyFromName' => 'Відповісти від імені',
      'targetUserPosition' => 'Позиція цільового користувача',
      'fetchSince' => 'Отримувати листи з',
      'addAllTeamUsers' => 'Для всіх користувачів групи',
      'teams' => 'Команди',
    ),
    'tooltips' => 
    array (
      'reply' => 'Повідомити відправників, що їхні листи були отримані.',
      'createCase' => 'Автоматично створювати звернення із вхідних листів.',
      'replyToAddress' => 'Зазначте адресу цієї скриньки, щоби відповіді приходили сюди.',
      'caseDistribution' => 'Як звернення будуть призначатися: користувачеві напряму або серед ґрупи.',
      'assignToUser' => 'Користувач, якому призначатимуться листи та звернення.',
      'team' => 'Команда, до якої відноситимуться листи та звернення.',
      'teams' => 'Команди, яким будуть призначені електроні листи.',
      'targetUserPosition' => 'Визначити положення користувачів, які будуть розподілені за зверненнями.',
      'addAllTeamUsers' => 'Листи з\'явиться в папці Вхідні для всіх користувачів команди.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
    ),
    'links' => 
    array (
      'filters' => 'Фільтри',
      'emails' => 'Електронні листи',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активний',
        'Inactive' => 'Неактивний',
      ),
      'caseDistribution' => 
      array (
        '' => 'Жоден',
        'Direct-Assignment' => 'Пряме призначення',
        'Round-Robin' => 'Кругове (Round-Robin)',
        'Least-Busy' => 'Найменш зайнятий',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Створити емейл-акаунт',
      'IMAP' => 'IMAP',
      'Actions' => 'Дії',
      'Main' => 'Основне',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Не вдається підключитися до сервера IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Увімкнено',
      'clientId' => 'Клієнтський ID',
      'clientSecret' => 'Секрет Клієнта',
      'redirectUri' => 'URI перенаправлення',
      'apiKey' => 'Ключ API',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Mапи',
      'IctBroadcastconfig' => 'ICTBroadcast Config',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Виберіть інтеграцію з меню.',
      'noIntegrations' => 'Жодних інтеграцій не доступно.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Отримати посвідчення OAuth 2.0 з Google Developers Console.</b></p><p>Відвідайте <a href="https://console.developers.google.com/project">Google Developers Console</a> для отримання посвідчення OAuth 2.0, таких як Клієнтський ID та Секрет Клієнта, що йдуть однаково для Google та EspoCRM додатків.</p>',
      'GoogleMaps' => '<p>Отримати ключ доступу до API можна <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">тут</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Статус',
      'executeTime' => 'Виконати в',
      'attempts' => 'Залишилось спроб',
      'failedAttempts' => 'Невдалі спроби',
      'serviceName' => 'Обслуговування',
      'method' => 'Метод',
      'scheduledJob' => 'Запланована робота',
      'data' => 'Дата',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'В очікуванні',
        'Success' => 'Успішно',
        'Running' => 'Плинний',
        'Failed' => 'Невдало',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Ширина (%)',
      'link' => 'Посилання',
      'notSortable' => 'Відключити сортування',
      'align' => 'Вирівнювання',
      'panelName' => 'Назва панелі',
      'style' => 'Стиль',
      'sticked' => 'Приліплений',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Ліворуч',
        'right' => 'Праворуч',
      ),
      'style' => 
      array (
        'default' => 'Звичайний',
        'success' => 'Успіх',
        'danger' => 'Небезпека',
        'info' => 'Інформація',
        'warning' => 'Застереження',
        'primary' => 'Первинний',
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Публікувати',
      'attachments' => 'Вкладення',
      'targetType' => 'Мета',
      'teams' => 'Команди',
      'users' => 'Користувачі',
      'portals' => 'Портали',
      'type' => 'Тип',
      'isGlobal' => 'Is Global',
      'isInternal' => 'Is Internal (for internal users)',
      'related' => 'Related',
      'createdByGender' => 'Created By Gender',
      'data' => 'Data',
      'number' => 'Number',
    ),
    'filters' => 
    array (
      'all' => 'Усе',
      'posts' => 'Пости',
      'updates' => 'Оновлення',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'Для себе',
        'users' => 'для конкретного користувача (ів)',
        'teams' => 'для конкретної команди (д)',
        'all' => 'для всіх внутрішніх користувачів',
        'portals' => 'для користувачів порталу',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Напишіть ваше повідомлення тут',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'logo' => 'Лого',
      'url' => 'URL',
      'portalRoles' => 'Ролі',
      'isActive' => 'Активний',
      'isDefault' => 'Чи за замовчуванням',
      'tabList' => 'Список меню',
      'quickCreateList' => 'Список для швидкого створення',
      'companyLogo' => 'Лого',
      'theme' => 'Тема',
      'language' => 'Мова',
      'dashboardLayout' => 'Макет панелі дашлетів',
      'dateFormat' => 'Формат дати',
      'timeFormat' => 'Формат часу',
      'timeZone' => 'Часова зона',
      'weekStart' => 'Перший день тижня',
      'defaultCurrency' => 'Валюта за замовчуванням',
      'customUrl' => 'Призначений для користувача URL',
      'customId' => 'Призначений для користувача  ID',
    ),
    'links' => 
    array (
      'users' => 'Користувачі',
      'portalRoles' => 'Ролі',
      'notes' => 'Примітки',
      'articles' => 'Статті Бази Знань',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Вказані ролі порталу будуть застосовуватись до всіх користувачів цього порталу',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Створити портал',
      'User Interface' => 'Інтерфейс користувача',
      'General' => 'Загальне',
      'Settings' => 'Налаштування',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
    ),
    'links' => 
    array (
      'users' => 'Користувачі',
    ),
    'tooltips' => 
    array (
    ),
    'labels' => 
    array (
      'Access' => 'Доступ',
      'Create PortalRole' => 'Створити Роль порталу',
      'Scope Level' => 'Область застосування Рівень',
      'Field Level' => 'Field Level',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Створити користувача порталу',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Формат дати',
      'timeFormat' => 'Формат часу',
      'timeZone' => 'Часовий пояс',
      'weekStart' => 'Перший день тижня',
      'thousandSeparator' => 'Розділювач ґруп розрядів',
      'decimalMark' => 'Розділювач десяткових',
      'defaultCurrency' => 'Валюта за замовчуванням',
      'currencyList' => 'Список валют',
      'language' => 'Мова',
      'smtpServer' => 'Сервер',
      'smtpPort' => 'Порт',
      'smtpAuth' => 'Авторизація',
      'smtpSecurity' => 'Безпека',
      'smtpUsername' => 'Ім\'я користувача',
      'emailAddress' => 'Емейл',
      'smtpPassword' => 'Пароль',
      'smtpEmailAddress' => 'Поштова скринька',
      'exportDelimiter' => 'Експортувати роздільник даних',
      'receiveAssignmentEmailNotifications' => 'Отримувати повідомлення при призначенні',
      'receiveMentionEmailNotifications' => 'Сповіщення по електронні пошті про згадування в повідомленнях',
      'receiveStreamEmailNotifications' => 'Сповіщення по електронні пошті про повідомлення та оновлення статусу',
      'autoFollowEntityTypeList' => 'Авто-підписка',
      'signature' => 'Підпис емейла',
      'dashboardTabList' => 'Список меню',
      'defaultReminders' => 'Default Reminders',
      'theme' => 'Тема',
      'useCustomTabList' => 'Власний список меню',
      'tabList' => 'Список меню',
      'emailReplyToAllByDefault' => 'Емайл Відповісти Все за замовчуванням',
      'dashboardLayout' => 'Макет панелі дашлетів',
      'emailReplyForceHtml' => 'Відправити відповідь в HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Не назначати користувача, якщо це не обов’язково',
      'followEntityOnStreamPost' => 'Автоматично підписатись після публікації в потоці',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Неділя',
        1 => 'Понеділок',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Оповіщення',
      'User Interface' => 'Інтерфейс користувача',
      'SMTP' => '
 SMTP',
      'Misc' => 'Різне',
      'Locale' => 'Місце дії',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Користувач буде автоматично підписаний на всі нові записи із вибраних типів сутностей, бачитиме інформацію у потоці й отримувати сповіщення.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'roles' => 'Ролі',
      'assignmentPermission' => 'Дозвіл для призначення',
      'userPermission' => 'Дозвіл бачити користувачів',
      'portalPermission' => 'Дозвіл порталу',
    ),
    'links' => 
    array (
      'users' => 'Користувачі',
      'teams' => 'Команди',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Дозволяє обмежити можливість користувачів пов\'язувати записи із іншими користувачами.

всі - без обмежень

команда - можна пов\'язувати із користувачами зі своєї команди

немає - можна пов\'язувати лише із собою',
      'userPermission' => 'Ця функція дозволяє обмежити можливість користувачів, переглядати заходи, календар і потік інших користувачів.

всі - можна переглянути всі

команда - може переглядати діяльність тільки учасників команди

немає - перегляд неможливий',
      'portalPermission' => 'Визначає доступ до інформації порталу, можливості конвертувати контакти користувачів порталу та поштові повідомлення користувачів порталу.',
    ),
    'labels' => 
    array (
      'Access' => 'Доступ',
      'Create Role' => 'Створити роль',
      'Scope Level' => 'Область застосування Рівень',
      'Field Level' => 'Field Level',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'не встановлено',
        'enabled' => 'увімкнено',
        'disabled' => 'вимкнено',
      ),
      'levelList' => 
      array (
        'all' => 'всі',
        'team' => 'команда',
        'account' => 'контрагент',
        'contact' => 'контакт',
        'own' => 'власне',
        'no' => 'немає',
        'yes' => 'так',
        'not-set' => 'не встановлено',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Читати',
      'edit' => 'Змінити',
      'delete' => 'Видалити',
      'stream' => 'Потік',
      'create' => 'Створити',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Всі зміни у контролі доступом будуть застосовані після очищення кешу.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'status' => 'Статус',
      'job' => 'Завдання',
      'scheduling' => 'Планування (оповіщення crontab)',
    ),
    'links' => 
    array (
      'log' => 'Лоґ',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Створити планове завдання',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Почистити',
        'CheckInboundEmails' => 'Перевірити пошту',
        'CheckEmailAccounts' => 'Перевірити особисті емейл-акаунти',
        'SendEmailReminders' => 'Відправити нагадування емейлом',
        'AuthTokenControl' => 'Контроль токенів аутентифікації',
        'SendEmailNotifications' => 'Надіслати сповіщення на електронну пошту',
        'ProcessMassEmail' => 'Запустити масову розсилку',
        'ControlKnowledgeBaseArticleStatus' => 'Перевірка статусу статтей Бази знань',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Замітка: Додайте цей рядок до файлу crontab для запуску Планувальника Завдань Espo:',
        'mac' => 'Замітка: Додайте цей рядок до файлу crontab для запуску Планувальника Завдань Espo:',
        'windows' => 'Замітка: Створити пакетний файл з наступними командами для запуску Планувальника Завдань Espo, використовуючи Планувальник Задач Windows:',
        'default' => 'Замітка: Додайте цю команду до Cron Job (Планувальник Задач):',
      ),
      'status' => 
      array (
        'Active' => 'Активний',
        'Inactive' => 'Неактивний',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Crontab позначення. Визначає частоту виконання роботи.

*/5 * * * * - кожні 5 хвилин

0 */2 * * * - кожні 2 години

30 1 * * * - о 01:30 один раз в день

0 0 1 * * - в перший день місяця',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Статус',
      'executionTime' => 'Час виконання',
      'target' => 'Ціль',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Використовувати кеш',
      'dateFormat' => 'Формат дати',
      'timeFormat' => 'Формат часу',
      'timeZone' => 'Часовий пояс',
      'weekStart' => 'Перший день тижня',
      'thousandSeparator' => 'Розділювач груп розрядів',
      'decimalMark' => 'Розділювач десяткових',
      'defaultCurrency' => 'Валюта за замовчуванням',
      'baseCurrency' => 'Базова валюта',
      'currencyRates' => 'Курси обміну',
      'currencyList' => 'Список валют',
      'language' => 'Мова',
      'companyLogo' => 'Логотип компанії',
      'smtpServer' => 'Сервер',
      'smtpPort' => 'Порт',
      'smtpAuth' => 'Авторизація',
      'smtpSecurity' => 'Безпека',
      'smtpUsername' => 'Ім\'я користувача',
      'emailAddress' => 'Емейл',
      'smtpPassword' => 'Пароль',
      'outboundEmailFromName' => 'Від імені',
      'outboundEmailFromAddress' => 'З адреси',
      'outboundEmailIsShared' => 'Розшарене',
      'recordsPerPage' => 'Записів на сторінці',
      'recordsPerPageSmall' => 'Записів на сторінці (Small)',
      'tabList' => 'Список меню',
      'quickCreateList' => 'Список для швидкого створення',
      'exportDelimiter' => 'Розділювач при експорті даних',
      'globalSearchEntityList' => 'Список сутнотей для Глобального пошуку',
      'authenticationMethod' => 'Метод автентифікації',
      'ldapHost' => 'Хост',
      'ldapPort' => 'Порт',
      'ldapAuth' => 'Авторизація',
      'ldapUsername' => 'Ім\'я користувача',
      'ldapPassword' => 'Пароль',
      'ldapBindRequiresDn' => 'Прив\'язка по домену',
      'ldapBaseDn' => 'Базовий домен',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Account Domain Name',
      'ldapTryUsernameSplit' => 'Спробувати відділити ім\'я користувача',
      'ldapCreateEspoUser' => 'Створити користувача в EspoCRM',
      'ldapSecurity' => 'Безпека',
      'ldapUserLoginFilter' => 'Фільтр логіну користувача',
      'ldapAccountDomainNameShort' => 'Account Domain Name Short',
      'ldapOptReferrals' => 'Оптові реферали',
      'ldapUserNameAttribute' => 'Атрибут імені користувача (username)',
      'ldapUserObjectClass' => 'Користувач Об\'єктів класу',
      'ldapUserTitleAttribute' => 'Атрибут посади користувача',
      'ldapUserFirstNameAttribute' => 'Атрибут імені користувача',
      'ldapUserLastNameAttribute' => 'Атрибут прізвища користувача',
      'ldapUserEmailAddressAttribute' => 'Атрибут адресси електронної пошти користувача',
      'ldapUserTeams' => 'Команди користувача',
      'ldapUserDefaultTeam' => 'Команда користувача (за замовчуванням)',
      'ldapUserPhoneNumberAttribute' => 'Атрибут номеру телефону користувача',
      'exportDisabled' => 'Вимкнути експортування (доступно лише адміністру)',
      'assignmentNotificationsEntityList' => 'Entities to Notify about upon Assignment',
      'assignmentEmailNotifications' => 'Сповіщення на емейл при назначенні',
      'assignmentEmailNotificationsEntityList' => 'Entities to Notify about with Email upon Assignment',
      'streamEmailNotifications' => 'Повідомлення про оновлення в потоці для внутрішніх користувачів',
      'portalStreamEmailNotifications' => 'Повідомлення про оновлення в потоці для користувачів порталу',
      'streamEmailNotificationsEntityList' => 'Потоки сповіщень про потокову електронну пошту',
      'b2cMode' => 'Режим В2С',
      'avatarsDisabled' => 'Вимкнути аватари',
      'followCreatedEntities' => 'Підписатися на створені сутності',
      'displayListViewRecordCount' => 'Дисплей Загальна кількість (у вигляді списку)',
      'theme' => 'Тема',
      'userThemesDisabled' => 'Відключення теми користувача',
      'emailMessageMaxSize' => 'Емайл Максимальний розмір (Мб)',
      'massEmailMaxPerHourCount' => 'Максимальна кількість відісланих за годину листів',
      'personalEmailMaxPortionSize' => 'Максимальний розмір частини електронної пошти для витягнення особистого облікового запису',
      'inboundEmailMaxPortionSize' => 'Максимальний розмір частини електронної пошти для вибірки облікових записів груп',
      'maxEmailAccountCount' => 'Максимальна кількість особистих болікових записів на користувача',
      'authTokenLifetime' => 'Час існування токенів аутентифікації (в годинах)',
      'authTokenMaxIdleTime' => 'Максимальний час простою токену аутентифікації (години)',
      'dashboardLayout' => 'Макет панелі дашлетів (за замовчуванням)',
      'siteUrl' => 'URL сайту',
      'addressPreview' => 'Перегляд адреси',
      'addressFormat' => 'Формат адреси',
      'notificationSoundsDisabled' => 'Відключення звуків сповіщень',
      'applicationName' => 'Назва додатку',
      'calendarEntityList' => 'Суписок сутностей Календаря',
      'mentionEmailNotifications' => 'Сповістити електронним листом про згадування в публікаціях',
      'massEmailDisableMandatoryOptOutLink' => 'Небов’язкове використання opt-out link',
      'activitiesEntityList' => 'Список сутностей Діяльності',
      'historyEntityList' => 'Список сутностей Історії',
      'currencyFormat' => 'Формат валюти',
      'currencyDecimalPlaces' => 'Currency Decimal Places',
      'aclStrictMode' => 'ACL Strict Mode',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Неділя',
        1 => 'Понеділок',
      ),
      'currencyFormat' => 
      array (
        1 => '10 UAH',
        2 => '₴10',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'Кількість записів, що початково відображаються у списках.',
      'recordsPerPageSmall' => 'Кількість записів, що початково відображаються у панелях зв\'язків.',
      'outboundEmailIsShared' => 'Дозволити користувачам надсилати повідомлення через цей SMTP.',
      'followCreatedEntities' => 'Користувачі будуть автоматично підписані на записи, які вони створюють',
      'emailMessageMaxSize' => 'Усі вхідні повідомлення електронної пошти, що перевищують зазначений розмір вивантажуватимуться без тексту і вкладень.',
      'authTokenLifetime' => 'Визначає, як довго можуть існувати токени.
0 - означає відсутність закінчення терміну дії.',
      'authTokenMaxIdleTime' => 'Визначає тривалість існування токенів від останнього доступу.
0 - означає відсутність закінчення терміну дії.',
      'userThemesDisabled' => 'Якщо прапорець встановлений, то користувачі не зможуть вибрати іншу тему.',
      'ldapUsername' => 'Повне ім\'я користувача системи,яке дозволяє шукати інших користувачів. Наприклад. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'Пароль для доступу до сервера LDAP.',
      'ldapAuth' => 'Облікові дані для доступу до сервера LDAP.',
      'ldapUserNameAttribute' => 'Атрибут для ідентифікації користувача. Наприклад. "userPrincipalName" або "sAMAccountName" для Active Directory, "uid" для OpenLDAP.',
      'ldapUserObjectClass' => 'Атрибут ObjectClass для пошуку користувачів. Наприклад. "person" for AD, "inetOrgPerson" for OpenLDAP.',
      'ldapAccountCanonicalForm' => 'Тип вашого облікового запису за прийнятою формою. Наявні 4 варіанти: <br>- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - the form \'tester\'.<br>- \'Backslash\' - the form \'COMPANY\\tester\'.<br>- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'Можливість форматування імені користувача в формі DN.',
      'ldapBaseDn' => 'Стандартний базовый DN, що використовується для пошуку користувачів. Наприклад. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'Можливість розділити ім\'я користувача з доменом.',
      'ldapOptReferrals' => 'Якщо потрібно перенаправити звернення до клієнта LDAP.',
      'ldapCreateEspoUser' => 'Ця опція дозволяє EspoCRM створити користувача з LDAP.',
      'ldapUserFirstNameAttribute' => 'Атрибут LDAP, який використовується для визначення імені користувача. Наприклад. "givenname".',
      'ldapUserLastNameAttribute' => 'Атрибут LDAP, який використовується для визначення прізвища користувача. Наприклад. "sn"',
      'ldapUserTitleAttribute' => 'Атрибут LDAP, який використовується для визначення посади користувача. Наприклад. "title".',
      'ldapUserEmailAddressAttribute' => 'Атрибут LDAP, який використовується для визначення адреси електронної пошти користувача. Наприклад. "mail".',
      'ldapUserPhoneNumberAttribute' => 'Атрибут LDAP, який використовується для визначення номеру телефона користувача. Наприклад. "telephoneNumber"',
      'ldapUserLoginFilter' => 'Фильтр, який дозволяє обмежити користувачів, які можуть використовувати EspoCRM. Наприклад. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan"',
      'ldapAccountDomainName' => 'Домен, який використовується для авторизації на LDAP-сервері.',
      'ldapAccountDomainNameShort' => 'Короткий домен, який використовується для авторизації на LDAP-сервері.',
      'ldapUserTeams' => 'Команди для створеного користувача. Детальніше в профілі користувача.',
      'ldapUserDefaultTeam' => 'Команди для створеного користувача за замовчуванням. Детальніше про це читайте профіль користувача.',
      'b2cMode' => 'За замовчуванням EspoCRM адаптований для B2B. Ви можете переключити його на B2C.',
      'currencyDecimalPlaces' => 'Кількість знаків після десяткової коми. ',
      'aclStrictMode' => 'Enabled: Access to scopes will be forbidden if it\'s not specified in roles.

Disabled: Access to scopes will be allowed if it\'s not specified in roles.',
    ),
    'labels' => 
    array (
      'System' => 'Система',
      'Locale' => 'Локаль',
      'SMTP' => 'Протокол SMTP',
      'Configuration' => 'Конфігурація',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Email Notifications',
      'Currency Settings' => 'Налаштування валюти',
      'Currency Rates' => 'Курси валют',
      'Mass Email' => 'Масова розсилка електронної пошти',
      'Test Connection' => 'Перевірка з’єднання',
      'Connecting' => 'Під’єднання',
      'Activities' => 'Активність',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'З\'єднання успішно встановлено.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'roles' => 'Ролі',
      'positionList' => 'Список посад',
    ),
    'links' => 
    array (
      'users' => 'Користувачі',
      'notes' => 'Нотатки',
      'roles' => 'Ролі',
      'inboundEmails' => 'Групові облікові записи електронної пошти',
    ),
    'tooltips' => 
    array (
      'roles' => 'Ролі доступу. Користувачі цієї команди отримують рівень контролю доступу згідно обраних ролей.',
      'positionList' => 'Наявні посади у цій команді. Наприклад, продажник, менеджер.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Створити команду',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'body' => 'Тіло',
      'entityType' => 'Тип сутності',
      'header' => 'Заголовок',
      'footer' => 'Нижній колонтитул',
      'leftMargin' => 'Ліве поле',
      'topMargin' => 'Верхнє поле',
      'rightMargin' => 'Праве поле',
      'bottomMargin' => 'Нижнє поле',
      'printFooter' => 'Друкувати нижній колонтитул',
      'footerPosition' => 'Положення нижнього колонтитула',
      'variables' => 'Наявні наповнювачі',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Створити шаблон',
    ),
    'tooltips' => 
    array (
      'footer' => 'Використати {pageNumber} надрукувати номер сторінки.',
      'variables' => 'Копювати-вставити потрібний наповнювач для заголовка, тіла або нижнього колонтитула.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'userName' => 'Ім\'я Користувача',
      'title' => 'Посада',
      'isAdmin' => 'Адміністратор',
      'defaultTeam' => 'Команда за замовчуванням',
      'emailAddress' => 'Емейл',
      'phoneNumber' => 'Телефон',
      'roles' => 'Ролі',
      'portals' => 'Портали',
      'portalRoles' => 'Ролі порталу',
      'teamRole' => 'Посада',
      'password' => 'Пароль',
      'currentPassword' => 'Поточний пароль',
      'passwordConfirm' => 'Підтвердити пароль',
      'newPassword' => 'Новий пароль',
      'newPasswordConfirm' => 'Підтвердити Новий Пароль',
      'avatar' => 'Аватар',
      'isActive' => 'Активний',
      'isPortalUser' => 'Користувач порталу',
      'contact' => 'Контакт',
      'accounts' => 'Контрагенти',
      'account' => 'Контрагент (основний)',
      'sendAccessInfo' => 'Надіслати Емайл користувачу з інформацією доступу',
      'portal' => 'Портал',
      'gender' => 'Стать',
      'position' => 'Позиція в комадні',
      'ipAddress' => 'IP адреса',
      'passwordPreview' => 'Попередній перегляд паролю',
      'acceptanceStatus' => 'Ухвалення статусу',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'teams' => 'Команди',
      'roles' => 'Ролі',
      'notes' => 'Нотатки',
      'portals' => 'Портали',
      'portalRoles' => 'Ролі порталу',
      'contact' => 'Контакт',
      'accounts' => 'Контрагенти',
      'account' => 'Контрагент (основний)',
      'tasks' => 'Завдання',
      'targetLists' => 'Цільові списки',
    ),
    'labels' => 
    array (
      'Create User' => 'Створити користувача',
      'Generate' => 'Згенерувати',
      'Access' => 'Доступ',
      'Preferences' => 'Параметри',
      'Change Password' => 'Змінити пароль',
      'Teams and Access Control' => 'Контроль команди і доступу',
      'Forgot Password?' => 'Забули пароль?',
      'Password Change Request' => 'Запит на зміну пароля',
      'Email Address' => 'Поштова скринька',
      'External Accounts' => 'Зовнішні аккаунти',
      'Email Accounts' => 'Акаунти емейлів',
      'Portal' => 'Портали',
      'Create Portal User' => 'Створити портал користувача',
      'Proceed w/o Contact' => 'Продовжити без контакту',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Всі записи, створені цим користувачем, відноситимуться до цієї команди за замовчуванням.',
      'userName' => 'Літери A-Z, цифри 0-9 і символ підкреслення - припустимі.',
      'isAdmin' => 'Користувач-адміністратор може отримати доступ до всього.',
      'isActive' => 'Якщо прапорець не встановлений, то користувач не зможе увійти.',
      'teams' => 'Команди, до яких цей користувач належить. Рівень контролю доступу успадковується від команди ролей.',
      'roles' => 'Додаткові ролі доступу. Застосовуйте їх, якщо користувач не належить до жодної команди або Ви потребуєте розширити рівень контролю доступу тільки для цього користувача.',
      'portalRoles' => 'Додаткові ролі порталу. Використовуйте, щоб розширити рівень контролю доступу виключно для цього користувача.',
      'portals' => 'Портали, на які цей користувач має доступ.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Пароль буде вислано на поштову адресу користувача',
      'accountInfoEmailSubject' => 'Інформація про користувацький доступ EspoCRM',
      'accountInfoEmailBody' => 'Ваша інформація про доступ:

Ім\'я користувача: {userName}
Пароль: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Запит на зміну пароля',
      'passwordChangeLinkEmailBody' => 'Ви можете змінити свій пароль, перейшовши за цим посиланням {посилання}. Цей унікальний URL швидко сплине.',
      'passwordChanged' => 'Пароль було змінено',
      'userCantBeEmpty' => 'Ім\'я користувача не може бути порожнім',
      'wrongUsernamePasword' => 'Хибне ім\'я користувача / пароль',
      'emailAddressCantBeEmpty' => 'Адреса електронної пошти не може бути порожньою',
      'userNameEmailAddressNotFound' => 'Ім\'я користувача / адресу електронної пошти не знайдено',
      'forbidden' => 'Недоступно, будь ласка, спробуйте пізніше',
      'uniqueLinkHasBeenSent' => 'Унікальне посилання була відправлена на вказану адресу електронної пошти.',
      'passwordChangedByRequest' => 'Пароль було змінено.',
      'setupSmtpBefore' => 'Вам необхідно <a href="{url}">налаштувати SMTP</a>, щоб створити можливість для системи надіслати пароль по електронній пошті.',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Не встановлено',
        'Male' => 'Чоловік',
        'Female' => 'Жінка',
        'Neutral' => 'Нейтральний',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Тільки моя команда',
    ),
    'presetFilters' => 
    array (
      'active' => 'Актив',
      'activePortal' => 'Портал активний',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'emailAddress' => 'Емейл',
      'website' => 'Вебсайт',
      'phoneNumber' => 'Телефон',
      'billingAddress' => 'Платіжна адреса',
      'shippingAddress' => 'Поштова адреса',
      'description' => 'Опис',
      'sicCode' => 'Код SIC',
      'industry' => 'Промисловість',
      'type' => 'Тип',
      'contactRole' => 'Посада',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Кампанія',
      'targetLists' => 'Цільові списки',
      'targetList' => 'Цільовий список',
      'originalLead' => 'Початковий Лід',
    ),
    'links' => 
    array (
      'contacts' => 'Контакти',
      'opportunities' => 'Угоди',
      'cases' => 'Звернення',
      'documents' => 'Документи',
      'meetingsPrimary' => 'Зустрічі (розширено)',
      'callsPrimary' => 'Дзвінки (розширено)',
      'tasksPrimary' => 'Завдання (розширено)',
      'emailsPrimary' => 'Електронні листи (розширено)',
      'targetLists' => 'Цільові списки',
      'campaignLogRecords' => 'Лоґ кампанії',
      'campaign' => 'Кампанія',
      'portalUsers' => 'Користувачі порталу',
      'originalLead' => 'Початковий Лід',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Замовник',
        'Investor' => 'Інвестор',
        'Partner' => 'Партнер',
        'Reseller' => 'Посередник',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Авіаційно-космічна',
        'Agriculture' => 'Сільське господарство',
        'Advertising' => 'Реклама',
        'Apparel & Accessories' => 'Одяг та аксесуари',
        'Architecture' => 'Архітектура',
        'Automotive' => 'Автомобільні',
        'Banking' => 'Банкінг',
        'Biotechnology' => 'Біотехнології',
        'Building Materials & Equipment' => 'Будівельні матеріали й устаткування',
        'Chemical' => 'Хемія',
        'Construction' => 'Будівництво',
        'Computer' => 'Комп\'ютери',
        'Defense' => 'Оборона',
        'Creative' => 'Творча',
        'Culture' => 'Культура',
        'Consulting' => 'Консалтинг',
        'Education' => 'Освіта',
        'Electronics' => 'Електроніка',
        'Electric Power' => 'Електроенергія',
        'Energy' => 'Енергія',
        'Entertainment & Leisure' => 'Розваги та дозвілля',
        'Finance' => 'Фінанси',
        'Food & Beverage' => 'Їжа та напої',
        'Grocery' => 'Доставка',
        'Hospitality' => 'Гостинність',
        'Healthcare' => 'Охорона здоров\'я',
        'Insurance' => 'Страхування',
        'Legal' => 'Право',
        'Manufacturing' => 'Виробництво',
        'Mass Media' => 'Засоби масової інформації',
        'Mining' => 'Гірнича справа',
        'Music' => 'Музика',
        'Marketing' => 'Маркетинг',
        'Publishing' => 'Видавництво',
        'Petroleum' => 'Нафта',
        'Real Estate' => 'Нерухомість',
        'Retail' => 'Роздрібна торгівля',
        'Shipping' => 'Доставка',
        'Service' => 'Сервіс',
        'Support' => 'Підтримка',
        'Sports' => 'Спорт',
        'Software' => 'Програмне забезпечення',
        'Technology' => 'Технологія',
        'Telecommunications' => 'Телекомунікації',
        'Television' => 'Телебачення',
        'Testing, Inspection & Certification' => 'Тестування, інспектування та сертифікація',
        'Transportation' => 'Транспорт',
        'Travel' => 'Travel',
        'Venture Capital' => 'Венчурний капітал',
        'Wholesale' => 'Оптова торгівля',
        'Water' => 'Вода',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Створити контрагента',
      'Copy Billing' => 'Копія рахунку',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Customers',
      'partners' => 'Partners',
      'recentlyCreated' => 'Нещодавно Створений',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'місяць',
      'week' => 'тиждень',
      'day' => 'день',
      'agendaWeek' => 'тиждень',
      'agendaDay' => 'день',
      'timeline' => 'Часова шкала',
    ),
    'labels' => 
    array (
      'Today' => 'Сьогодні',
      'Create' => 'Створити',
      'Shared' => 'Загальний',
      'Add User' => 'Додати користувача',
      'current' => 'Потік',
      'time' => 'Час',
      'User List' => 'Список користувачів',
      'Manage Users' => 'Управління користувачами',
      'View Calendar' => 'View Calendar',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'parent' => 'Батько',
      'status' => 'Статус',
      'dateStart' => 'Дата початку',
      'dateEnd' => 'Дата закінчення',
      'direction' => 'Напрямок',
      'duration' => 'Тривалість',
      'description' => 'Опис',
      'users' => 'Користувачі',
      'contacts' => 'Контакти',
      'leads' => 'Ліди',
      'reminders' => 'Нагадування',
      'account' => 'Контрагент',
      'acceptanceStatus' => 'Прийняття статусу',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Заплановано',
        'Held' => 'Виконано',
        'Not Held' => 'Не відбулося',
      ),
      'direction' => 
      array (
        'Outbound' => 'Вихідне',
        'Inbound' => 'Вхідне',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Нема',
        'Accepted' => 'Прийнято',
        'Declined' => 'Відхилено',
        'Tentative' => 'Попереднє',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Позначити виконаним',
      'setNotHeld' => 'Позначити невиконаним',
    ),
    'labels' => 
    array (
      'Create Call' => 'Створити дзвінок',
      'Set Held' => 'Позначити виконаним',
      'Set Not Held' => 'Позначити невиконаним',
      'Send Invitations' => 'Відправити запрошення',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Заплановано',
      'held' => 'Виконано',
      'todays' => 'Сьогоднішнє',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'description' => 'Опис',
      'status' => 'Статус',
      'type' => 'Тип',
      'startDate' => 'Дата Початку',
      'endDate' => 'Дата Закінчення',
      'targetLists' => 'Цільові списки',
      'excludingTargetLists' => 'За винятком цільових списків',
      'sentCount' => 'Відправлено',
      'openedCount' => 'Відкрито',
      'clickedCount' => 'Клікнуто',
      'optedOutCount' => 'Відмовлено',
      'bouncedCount' => 'Відшито',
      'hardBouncedCount' => 'Жорстко відшито',
      'softBouncedCount' => 'М\'яко відшито',
      'leadCreatedCount' => 'Ліди створені',
      'revenue' => 'Виручка',
      'revenueConverted' => 'Дохід (в перерахунку)',
      'budget' => 'Бюджет',
      'budgetConverted' => 'Бюджет (конвертований)',
    ),
    'links' => 
    array (
      'targetLists' => 'Цільові списки',
      'excludingTargetLists' => 'За винятком цільових списків',
      'accounts' => 'Контрагенти',
      'contacts' => 'Контакти',
      'leads' => 'Ліди',
      'opportunities' => 'Угоди',
      'campaignLogRecords' => 'Лоґ',
      'massEmails' => 'Масові розсилки',
      'trackingUrls' => 'Відстежувані URLs',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Емейл',
        'Web' => 'Веб',
        'Television' => 'Телебачення',
        'Radio' => 'Радіо',
        'Newsletter' => 'Розсилка',
        'Mail' => 'Пошта',
      ),
      'status' => 
      array (
        'Planning' => 'Запланована',
        'Active' => 'Активна',
        'Inactive' => 'Неактивна',
        'Complete' => 'Завершена',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Створити кампанію',
      'Target Lists' => 'Цільові списки',
      'Statistics' => 'Статистика',
      'hard' => 'жорстко',
      'soft' => 'м\'яко',
      'Unsubscribe' => 'Відписати',
      'Mass Emails' => 'Масові розсилки',
      'Email Templates' => 'Шаблони електронної пошти',
      'Unsubscribe again' => 'Відписатися знову',
      'Subscribe again' => 'Підписатися знову',
      'Create Target List' => 'Створити Цільовий список',
    ),
    'presetFilters' => 
    array (
      'active' => 'Активні',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Ви відписалися зі списку розсилки.',
      'subscribedAgain' => 'Ви підписані знову',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Хто має отримувати повідомлення.',
      'excludingTargetLists' => 'Завдання, які не мають отримувати повідомлення.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Дія',
      'actionDate' => 'Дата',
      'data' => 'Дані',
      'campaign' => 'Кампанія',
      'parent' => 'Ціль',
      'object' => 'Об\'єкт',
      'application' => 'Додаток',
      'queueItem' => 'Елемент черги',
      'stringData' => 'Рядок даних',
      'stringAdditionalData' => 'Рядок додаткової інформації',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Пункт черги',
      'parent' => 'Батько',
      'object' => 'Об\'єкт',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Відправлено',
        'Opened' => 'Відкрито',
        'Opted Out' => 'Відмовлено',
        'Bounced' => 'Відшито',
        'Clicked' => 'Клікнуто',
        'Lead Created' => 'Лід створено',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Все',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Надіслано',
      'opened' => 'Відкрито',
      'optedOut' => 'Відмовлено',
      'bounced' => 'Відшито',
      'clicked' => 'Клікнуто',
      'leadCreated' => 'Лід створено',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Код для вставки замість URL',
      'campaign' => 'Кампанія',
    ),
    'links' => 
    array (
      'campaign' => 'Кампанія',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Створити відстежувану URL',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'number' => 'Номер',
      'status' => 'Статус',
      'account' => 'Контрагент',
      'contact' => 'Контакт',
      'contacts' => 'Контакти',
      'priority' => 'Пріоритет',
      'type' => 'Тип',
      'description' => 'Опис',
      'inboundEmail' => 'Вхідний лист',
      'lead' => 'Лід',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Вхідний лист',
      'account' => 'Контрагент',
      'contact' => 'Контакт (Основний)',
      'Contacts' => 'Контакти',
      'meetings' => 'Зустрічі',
      'calls' => 'Дзвінки',
      'tasks' => 'Завдання',
      'emails' => 'Електронні скриньки',
      'articles' => 'Статті Бази Знань',
      'lead' => 'Лід',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Новий',
        'Assigned' => 'На розгляді',
        'Pending' => 'Поточне',
        'Closed' => 'Закрито',
        'Rejected' => 'Відмовлено',
        'Duplicate' => 'Дуплікат',
      ),
      'priority' => 
      array (
        'Low' => 'Низький',
        'Normal' => 'Нормальний',
        'High' => 'Високий',
        'Urgent' => 'Терміново',
      ),
      'type' => 
      array (
        'Question' => 'Питання',
        'Incident' => 'Випадок',
        'Problem' => 'Проблема',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Створити Звернення',
      'Close' => 'Закрити',
      'Reject' => 'Відхилити',
      'Closed' => 'Закрите',
      'Rejected' => 'Відхилено',
    ),
    'presetFilters' => 
    array (
      'open' => 'Відкриті',
      'closed' => 'Закриті',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'emailAddress' => 'Емейл',
      'title' => 'Посада',
      'account' => 'Контрагент',
      'accounts' => 'Контрагенти',
      'phoneNumber' => 'Телефон',
      'accountType' => 'Тип контрагента',
      'doNotCall' => 'Не дзвонити',
      'address' => 'Адреса',
      'opportunityRole' => 'Роль угоди',
      'accountRole' => 'Посада',
      'description' => 'Опис',
      'campaign' => 'Кампанія',
      'targetLists' => 'Цільові списки',
      'targetList' => 'Цільовий список',
      'portalUser' => 'Користувач порталів',
      'originalLead' => 'Початковий Лід',
      'acceptanceStatus' => 'Ухвалення статусу',
      'accountIsInactive' => 'Account Inactive',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'opportunities' => 'Угоди',
      'cases' => 'Звернення',
      'targetLists' => 'Цільові списки',
      'campaignLogRecords' => 'Лоґ кампанії',
      'campaign' => 'Кампанія',
      'account' => 'Контрагент (основний)',
      'accounts' => 'Контрагенти',
      'casesPrimary' => 'Звернення (Основні)',
      'portalUser' => 'Користувач порталу',
      'originalLead' => 'Початковий Лід',
      'documents' => 'Документи',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Створити контакт',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Немає--',
        'Decision Maker' => 'Приймає рішення',
        'Evaluator' => 'Оцінює',
        'Influencer' => 'Впливає',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Користувачі порталів',
      'notPortalUsers' => 'Не користувачів порталу',
      'accountActive' => 'Active',
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Створити документ',
      'Details' => 'Деталі',
    ),
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'status' => 'Статус',
      'file' => 'Файл',
      'type' => 'Тип',
      'publishDate' => 'Дата публікації',
      'expirationDate' => 'Термін придатности',
      'description' => 'Опис',
      'accounts' => 'Контрагенти',
      'folder' => 'Папка',
    ),
    'links' => 
    array (
      'accounts' => 'Контрагенти',
      'opportunities' => 'Угоди',
      'folder' => 'Папка',
      'leads' => 'Ліди',
      'contacts' => 'Контакти',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активний',
        'Draft' => 'Чернетка',
        'Expired' => 'Прострочено',
        'Canceled' => 'Скасовано',
      ),
      'type' => 
      array (
        '' => 'Жоден',
        'Contract' => 'Контракт',
        'NDA' => '
 NDA',
        'EULA' => '
 EULA',
        'License Agreement' => 'Ліцензійна угода',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Активний',
      'draft' => 'Чернетка',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Створити папку документів',
      'Manage Categories' => 'Керування папками',
      'Documents' => 'Документи',
    ),
    'links' => 
    array (
      'documents' => 'Документи',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Назва',
      'status' => 'Статус',
      'target' => 'Ціль',
      'sentAt' => 'Дата відправки',
      'attemptCount' => 'Спроби',
      'emailAddress' => 'Електронна адреса',
      'massEmail' => 'Масова розсилка',
      'isTest' => 'Перевірка',
    ),
    'links' => 
    array (
      'target' => 'Ціль',
      'massEmail' => 'Масова розсилка',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'В очікуванні',
        'Sent' => 'Надісланий',
        'Failed' => 'Не вдалося',
        'Sending' => 'Відправлення',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'В очікуванні',
      'sent' => 'Надісланий',
      'failed' => 'Не вдалося',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Створити статтю',
      'Any' => 'Будь-яка',
      'Send in Email' => 'Надіслати в електронному листі',
      'Move Up' => 'Підняти',
      'Move Down' => 'Вниз',
      'Move to Top' => 'На початок',
      'Move to Bottom' => 'Опустити в самий вниз',
    ),
    'fields' => 
    array (
      'name' => 'Назва',
      'status' => 'Статус',
      'type' => 'Тип',
      'attachments' => 'Вкладення',
      'publishDate' => 'Дата публікації',
      'expirationDate' => 'Термін придатності',
      'description' => 'Опис',
      'body' => 'Тіло',
      'categories' => 'Категорії',
      'language' => 'Мова',
      'portals' => 'Портали',
    ),
    'links' => 
    array (
      'cases' => 'Звернення',
      'opportunities' => 'Угоди',
      'categories' => 'Категорії',
      'portals' => 'Портали',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'В огляді',
        'Draft' => 'Чернетка',
        'Archived' => 'В архіві',
        'Published' => 'Опубліковано',
      ),
      'type' => 
      array (
        'Article' => 'Стаття',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Стаття буде доступна тільки в певних порталах.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Опубліковано',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Створити категорію',
      'Manage Categories' => 'Керування категоріями',
      'Articles' => 'Статті',
    ),
    'links' => 
    array (
      'articles' => 'Статті',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Перетворено на',
      'Create Lead' => 'Створити Лід',
      'Convert' => 'Конвертувати',
      'convert' => 'конвертація',
    ),
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'emailAddress' => 'Емейл',
      'title' => 'Посада',
      'website' => 'Вебсайт',
      'phoneNumber' => 'Телефон',
      'accountName' => 'Ім\'я контрагента',
      'doNotCall' => 'Не дзвонити',
      'address' => 'Адреса',
      'status' => 'Статус',
      'source' => 'Джерело',
      'opportunityAmount' => 'Сума угоди',
      'opportunityAmountConverted' => 'Сума угоди (конвертована)',
      'description' => 'Опис',
      'createdAccount' => 'Контрагент',
      'createdContact' => 'Контакт',
      'createdOpportunity' => 'Угода',
      'campaign' => 'Кампанія',
      'targetLists' => 'Цільові списки',
      'targetList' => 'Цільовий список',
      'industry' => 'Промисловість',
      'acceptanceStatus' => 'Ухвалення статусу',
      'opportunityAmountCurrency' => 'Валюта суми угоди',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Цільові списки',
      'campaignLogRecords' => 'Лоґ кампаніґ',
      'campaign' => 'Кампанія',
      'createdAccount' => 'Контрагент',
      'createdContact' => 'Контакт',
      'createdOpportunity' => 'Угода',
      'cases' => 'Звернення',
      'documents' => 'Документи',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Новий',
        'Assigned' => 'На розгляді',
        'In Process' => 'У процесі',
        'Converted' => 'Конвертований',
        'Recycled' => 'У кошику',
        'Dead' => 'Мертвий',
      ),
      'source' => 
      array (
        '' => 'Жоден',
        'Call' => 'Дзвінок',
        'Email' => 'Емейл',
        'Existing Customer' => 'Існуючий замовник',
        'Partner' => 'Партнер',
        'Public Relations' => 'Зв\'язки із громадськістю',
        'Web Site' => 'Вебсайт',
        'Campaign' => 'Кампанія',
        'Other' => 'Додатково',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Активний',
      'actual' => 'Актуальний',
      'converted' => 'Конвертований',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Назва',
      'status' => 'Статус',
      'storeSentEmails' => 'Зберігати надіслані повідомлення',
      'startAt' => 'Дата початку',
      'fromAddress' => 'Адреса відправника',
      'fromName' => 'Від імені',
      'replyToAddress' => 'Відповідь на адресу',
      'replyToName' => 'Відповідь до назви',
      'campaign' => 'Кампанія',
      'emailTemplate' => 'Шаблон електронного листа',
      'inboundEmail' => 'Обліковий запис електронної пошти',
      'targetLists' => 'Цільові списки',
      'excludingTargetLists' => 'Виключаючи цільові списки',
      'optOutEntirely' => 'Цілковита відмова',
    ),
    'links' => 
    array (
      'targetLists' => 'Цільові списки',
      'excludingTargetLists' => 'Виключаючи цільові списки',
      'queueItems' => 'Елементи черги',
      'campaign' => 'Кампанія',
      'emailTemplate' => 'Шаблон електронного листа',
      'inboundEmail' => 'Обліковий запис поштової скриньки',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Проект',
        'Pending' => 'В очікуванні',
        'In Process' => 'В процесі',
        'Complete' => 'Завершена',
        'Canceled' => 'Скасована',
        'Failed' => 'Не вдалося',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Створити масову розсилку',
      'Send Test' => 'Відправити тест',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Виберіть принаймні одного отримувача.',
      'testSent' => 'Тестові повідомлення електронної пошти повинні бути відправлені',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Адреси електронної пошти одержувачів, які зняли підписку, більше не будуть отримувати будь-яких масових повідомлень електронної пошти.',
      'targetLists' => 'Хто має отримувати повідомлення',
      'excludingTargetLists' => 'Хто не має отримувати повідомлень',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Актуальні',
      'complete' => 'Виконані',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'parent' => 'Батько',
      'status' => 'Статус',
      'dateStart' => 'Дата початку',
      'dateEnd' => 'Дата закінчення',
      'duration' => 'Тривалість',
      'description' => 'Опис',
      'users' => 'Користувачі',
      'contacts' => 'Контакти',
      'leads' => 'Ліди',
      'reminders' => 'Нагадування',
      'account' => 'Контраґент',
      'acceptanceStatus' => 'Статус підтвердження',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Заплановано',
        'Held' => 'Виконано',
        'Not Held' => 'Не відбулося',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Нема',
        'Accepted' => 'Прийнято',
        'Declined' => 'Відхилено',
        'Tentative' => 'Попереднє',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Позначити виконаним',
      'setNotHeld' => 'Позначити невиконаним',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Створити зустріч',
      'Set Held' => 'Позначити виконаним',
      'Set Not Held' => 'Позначити невиконаним',
      'Send Invitations' => 'Відправити запрошення',
      'on time' => 'на час',
      'before' => 'перед',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Заплановано',
      'held' => 'Виконано',
      'todays' => 'Сьогоднішнє',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Нічого не надіслано',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'account' => 'Контрагент',
      'stage' => 'Стадія',
      'amount' => 'Сума',
      'probability' => 'Імовірність, %',
      'leadSource' => 'Джерело ліда',
      'doNotCall' => 'Не дзвонити',
      'closeDate' => 'Дата закриття',
      'contacts' => 'Контакти',
      'description' => 'Опис',
      'amountConverted' => 'Сума (конвертирована)',
      'amountWeightedConverted' => 'Зважена сума',
      'campaign' => 'Кампанія',
      'originalLead' => 'Початковий Лід',
      'amountCurrency' => 'Валюта суми',
      'contactRole' => 'Contact Role',
    ),
    'links' => 
    array (
      'contacts' => 'Контакти',
      'documents' => 'Документи',
      'campaign' => 'Кампанія',
      'originalLead' => 'Початковий Лід',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Проспектінг',
        'Qualification' => 'Кваліфікація',
        'Needs Analysis' => 'Вимагає аналізу',
        'Value Proposition' => 'Цінова пропозиція',
        'Id. Decision Makers' => 'Визначення осіб, що приймають рішення',
        'Perception Analysis' => 'Аналізу сприйняття',
        'Proposal/Price Quote' => 'Квота пропозицій/цін',
        'Negotiation/Review' => 'Заперечення/перегляд',
        'Closed Won' => 'Закрито переможно',
        'Closed Lost' => 'Закрито провалом',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Створити угоду',
    ),
    'presetFilters' => 
    array (
      'open' => 'Відкрити',
      'won' => 'Переможні',
      'lost' => 'Втрачені',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'description' => 'Опис',
      'entryCount' => 'Облік записа',
      'campaigns' => 'Кампанії',
      'endDate' => 'Дата Закінчення',
      'targetLists' => 'Цільові списки',
      'includingActionList' => 'Включаючи',
      'excludingActionList' => 'Виключаючи',
    ),
    'links' => 
    array (
      'accounts' => 'Контрагенти',
      'contacts' => 'Контакти',
      'leads' => 'Ліди',
      'campaigns' => 'Кампанії',
      'massEmails' => 'Масові розсилки',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Емейл',
        'Web' => 'Веб',
        'Television' => 'Телебачення',
        'Radio' => 'Радіо',
        'Newsletter' => 'Розсилка',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Створити цільовий список',
      'Opted Out' => 'Відмовився',
      'Cancel Opt-Out' => 'Скасувати відмову',
      'Opt-Out' => 'Відписати',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'parent' => 'Батько',
      'status' => 'Статус',
      'dateStart' => 'Дата початку',
      'dateEnd' => 'Кінцева дата',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Пріоритет',
      'description' => 'Опис',
      'isOverdue' => 'Прострочено',
      'account' => 'Контрагент',
      'dateCompleted' => 'Date Completed',
      'attachments' => 'Вкладення',
      'reminders' => 'Нагадування',
    ),
    'links' => 
    array (
      'attachments' => 'Вкладення',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Не почалося',
        'Started' => 'Почалося',
        'Completed' => 'Завершено',
        'Canceled' => 'Скасовано',
        'Deferred' => 'Відстрочено',
      ),
      'priority' => 
      array (
        'Low' => 'Низько',
        'Normal' => 'Нормальний',
        'High' => 'Високо',
        'Urgent' => 'Терміново',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Створити завдання',
      'Complete' => 'Завершити',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Актуальні',
      'completed' => 'Завершені',
      'deferred' => 'Відстрочені',
      'todays' => 'Сьогоднішні',
      'overdue' => 'Прострочені',
    ),
  ),
);
?>