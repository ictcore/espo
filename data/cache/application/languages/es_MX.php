<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'Usuario',
      'action' => 'Acción',
      'createdAt' => 'Fecha',
      'target' => 'Objetivo',
      'targetType' => 'Tipo de Objetivo',
      'authToken' => 'Token Autorización',
      'ipAddress' => 'Dirección IP',
    ),
    'links' => 
    array (
      'authToken' => 'Token Autorización',
      'user' => 'Usuario',
      'target' => 'Objetivo',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Sólo para Mi',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Leer',
        'update' => 'Actualizar',
        'delete' => 'Borrar',
        'create' => 'Crear',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Activado',
      'Disabled' => 'Desactivado',
      'System' => 'Sistema',
      'Users' => 'Usuarios',
      'Email' => 'Correo electrónico',
      'Data' => 'Datos',
      'Customization' => 'Personalizar',
      'Available Fields' => 'Campos Disponibles',
      'Layout' => 'Diseño',
      'Entity Manager' => 'Administrador de Entidades',
      'Add Panel' => 'Añadir Panel',
      'Add Field' => 'Añadir Campo',
      'Settings' => 'Ajustes',
      'Scheduled Jobs' => 'Tareas Programadas',
      'Upgrade' => 'Actualizar',
      'Clear Cache' => 'Limpiar Cache',
      'Rebuild' => 'Reconstruir',
      'Teams' => 'Equipos',
      'Roles' => 'Roles',
      'Portal' => 'Portal',
      'Portals' => 'Portales',
      'Portal Roles' => 'Roles del Portal',
      'Portal Users' => 'Usuarios del Portal',
      'Outbound Emails' => 'Correos Salientes',
      'Group Email Accounts' => 'Grupo de Cuentas de Correo',
      'Personal Email Accounts' => 'Cuentas Personales',
      'Inbound Emails' => 'Correos Entrantes',
      'Email Templates' => 'Plantillas de Correo',
      'Import' => 'Importar',
      'Layout Manager' => 'Administrador de Diseño',
      'User Interface' => 'Interfaz de Usuario',
      'Auth Tokens' => 'Tokens Certificados',
      'Authentication' => 'Autorización',
      'Currency' => 'Moneda',
      'Integrations' => 'Integracion',
      'Extensions' => 'Extensiones',
      'Upload' => 'Subir',
      'Installing...' => 'Instalando...',
      'Upgrading...' => 'Actualizando',
      'Upgraded successfully' => 'Actualización exitosa',
      'Installed successfully' => 'Instalado de forma exitosa',
      'Ready for upgrade' => 'Listo para actualizar',
      'Run Upgrade' => 'Ejecutar actualización',
      'Install' => 'Instalar',
      'Ready for installation' => 'Listo para instalación',
      'Uninstalling...' => 'Desinstalando...',
      'Uninstalled' => 'Desinstalado',
      'Create Entity' => 'Crear Entidad',
      'Edit Entity' => 'Editar Entidad',
      'Create Link' => 'Crear Enlace',
      'Edit Link' => 'Editar Enlace',
      'Notifications' => 'Notificaciones',
      'Jobs' => 'Trabajos',
      'Reset to Default' => 'Restablecer valores por omisión',
      'Email Filters' => 'Filtros de Correo',
      'Action History' => 'Historial',
      'Label Manager' => 'Label Manager',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Detalle',
      'listSmall' => 'Lista (Pequeña)',
      'detailSmall' => 'Detalle (Pequeño)',
      'filters' => 'Filtros de Búsqueda',
      'massUpdate' => 'Actualización Masiva',
      'relationships' => 'Paneles de Relaciones',
      'sidePanelsDetail' => 'Paneles auxiliares (detalle)',
      'sidePanelsEdit' => 'Paneles auxiliares (editar)',
      'sidePanelsDetailSmall' => 'Paneles auxiliares (detalle pequeño)',
      'sidePanelsEditSmall' => 'Paneles auxiliares (editar pequeño)',
      'detailConvert' => 'Convertir Referencia',
      'listForAccount' => 'Listado (por Cuentas)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Dirección',
      'array' => 'Arreglo',
      'foreign' => 'Externo',
      'duration' => 'Duración',
      'password' => 'Contraseña',
      'personName' => 'Nombre',
      'autoincrement' => 'Auto incrementar',
      'bool' => 'Boolean',
      'currency' => 'Moneda',
      'currencyConverted' => 'Moneda (Convertida)',
      'date' => 'Fecha',
      'datetime' => 'Fecha/Hora',
      'datetimeOptional' => 'Fecha/FechaHora',
      'email' => 'Correo electrónico',
      'enum' => 'Enum',
      'enumInt' => 'Enum Entero',
      'enumFloat' => 'Enum Decimal',
      'float' => 'Decimal',
      'int' => 'Ent',
      'link' => 'Enlace',
      'linkMultiple' => 'Enlace Múltiple',
      'linkParent' => 'Enlace Padre',
      'multienim' => 'Multienum',
      'phone' => 'Teléfono',
      'text' => 'Texto',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Archivo',
      'image' => 'Imagen',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Multiples Adjuntos',
      'rangeInt' => 'Rango de Enteros',
      'rangeFloat' => 'Rango de Flotantes',
      'rangeCurrency' => 'Rango de Moneda',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Mapa',
      'number' => 'Número',
      'colorpicker' => 'Color Picker',
    ),
    'fields' => 
    array (
      'type' => 'Tipo',
      'name' => 'Nombre',
      'label' => 'Etiqueta',
      'tooltipText' => 'Texto de Ayuda',
      'required' => 'Requerido',
      'default' => 'Por Omisión',
      'maxLength' => 'Longitud máxima',
      'options' => 'Opciones',
      'after' => 'Después (campo)',
      'before' => 'Antes (campo)',
      'link' => 'Enlace',
      'field' => 'Campo',
      'min' => 'Mínimo',
      'max' => 'Máximo',
      'translation' => 'Traducción',
      'previewSize' => 'Tamaño de Vista Previa',
      'noEmptyString' => 'Empty string value is not allowed',
      'defaultType' => 'Tipo por Omisión',
      'seeMoreDisabled' => 'Desactivar cortar texto',
      'entityList' => 'Lista de Entidades',
      'isSorted' => 'Esta ordenado (alfabeticamente)',
      'audited' => 'Auditada',
      'trim' => 'recortado',
      'height' => 'Altura (px)',
      'minHeight' => 'Altura Min (px)',
      'provider' => 'Proveedor',
      'typeList' => 'Lista de Tipos',
      'rows' => 'Num. de renglones del área de texto',
      'lengthOfCut' => 'Longitud del recorte',
      'sourceList' => 'Lista de Fuentes',
      'prefix' => 'Prefijo',
      'nextNumber' => 'Siguiente Número',
      'padLength' => 'Longitud del Panel',
      'disableFormatting' => 'Desactivar Formateo',
      'dynamicLogicVisible' => 'Condiciones que hacen visible al campo',
      'dynamicLogicReadOnly' => 'Condiciones que hacen el campo de solo-lectura',
      'dynamicLogicRequired' => 'Condiciones que hacen el campo obligatorio',
      'dynamicLogicOptions' => 'Opciones condicionales',
      'probabilityMap' => 'Probabilidades de la Etapa (%)',
      'readOnly' => 'Solo-lectura',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM se actualizará a la versión <strong>{version}</strong>.  Por favor espere unos minutos.',
      'upgradeDone' => 'EspoCRM fué actualizado a la versión <strong>{version}</strong>.',
      'upgradeBackup' => 'Le recomendamos hacer un respaldo de sus datos y sistema EspoCRM antes de actualizarlo.',
      'thousandSeparatorEqualsDecimalMark' => 'El caracter separador de miles no puede ser el mismo que el separador decimal.',
      'userHasNoEmailAddress' => 'El Usuario no tiene dirección de correo.',
      'selectEntityType' => 'Seleccione el tipo de entidad en el menú de la izquierda.',
      'selectUpgradePackage' => 'Seleccione el Paquete de Actualización',
      'downloadUpgradePackage' => 'Descargue los paquetes de actualización desde <a href="{url}">aquí</a>.',
      'selectLayout' => 'Seleccione el diseño necesario en el menú de la izquierda y editarlo.',
      'selectExtensionPackage' => 'Seleccionar extensión del paquete',
      'extensionInstalled' => 'La Extensión {name} {version} ha sido instalada',
      'installExtension' => 'La Extensión {name} {version} está lista para instalar.',
      'uninstallConfirmation' => '¿Realmente desea desinstalar la extensión?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Configuración del sistema de aplicación.',
      'scheduledJob' => 'Trabajos que se ejecutan por cron.(cron Jobs)',
      'upgrade' => 'Actualizar EspoCRM.',
      'clearCache' => 'Limpiar cache del Servidor.',
      'rebuild' => 'Reconstruir y limpiar el cache del Servidor.',
      'users' => 'Administración de usuarios.',
      'teams' => 'Administración de Equipos',
      'roles' => 'Administración de Roles',
      'portals' => 'Manejo de Portales',
      'portalRoles' => 'Roles del Portal',
      'portalUsers' => 'Usuarios del portal.',
      'outboundEmails' => 'Opciones SMTP para correo saliente.',
      'groupEmailAccounts' => 'Grupo de Cuentas Correo IMAP. Importación de Correo y Correo a Caso.',
      'personalEmailAccounts' => 'Cuentas de correo de Usuarios',
      'emailTemplates' => 'Plantillas para mensajes de correo electrónico salientes.',
      'import' => 'Importar desde archivo CSV.',
      'layoutManager' => 'Personalizar diseños (listas, detalles, editar, buscar, actualización masiva).',
      'entityManager' => 'Crear y editar entidades personalizadas.  Manejar campos y relaciones.',
      'userInterface' => 'Configurar la Interfaz del Usuario',
      'authTokens' => 'Sesiones certificas activas. Direcciones IP y última fecha de acceso',
      'authentication' => 'Opciones de autorización',
      'currency' => 'Opciones y tarifas de Moneda',
      'extensions' => 'Instalar o desinstalar extensiones',
      'integrations' => 'Integración con los servicios de terceros.',
      'notifications' => 'Ajustes de notificaciones In-app y de Correo',
      'inboundEmails' => 'Configuración de cuentas de Correo Electrónico de entrada.',
      'emailFilters' => 'Los mensajes de correo que cumplan con el filtro indicado, no se importarán.',
      'actionHistory' => 'Historial de acciones del usuario.',
      'labelManager' => 'Customize application labels.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Muy Pequeño',
        'small' => 'Pequeño',
        'medium' => 'Mediano',
        'large' => 'Grande',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'Y',
      'or' => 'O',
      'not' => 'NO',
    ),
  ),
  'Attachment' => 
  array (
    'insertFromSourceLabels' => 
    array (
      'Document' => 'Insertar documento',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Usuario',
      'ipAddress' => 'Dirección IP',
      'lastAccess' => 'Fecha Último Acceso',
      'createdAt' => 'Creado el',
      'isActive' => 'Está Activo',
      'portal' => 'Portal',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Historial',
    ),
    'presetFilters' => 
    array (
      'active' => 'Activo',
      'inactive' => 'Inactivo',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Activar',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Desactivar',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Título',
      'dateFrom' => 'Fecha desde',
      'dateTo' => 'Fecha hasta',
      'autorefreshInterval' => 'Intervalo de actualización',
      'displayRecords' => 'Mostrar Registros',
      'isDoubleHeight' => 'Altitud 2x',
      'mode' => 'Modo',
      'enabledScopeList' => 'Qué mostrar',
      'users' => 'Usuarios',
      'entityType' => 'Tipo de Entidad',
      'primaryFilter' => 'Filtro Primario',
      'boolFilterList' => 'Filtros Adicionales',
      'sortBy' => 'Ordenar (campo)',
      'sortDirection' => 'Ordenar (dirección)',
      'expandedLayout' => 'Formato',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Semana (orden del día)',
        'basicWeek' => 'Semana',
        'month' => 'Mes',
        'basicDay' => 'Día',
        'agendaDay' => 'Día (agenda)',
        'timeline' => 'Cronograma',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Seleccionar el Tipo de Entidad en las opciones del tablero.',
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
        'equals' => 'Igual a',
        'notEquals' => 'Diferente de',
        'greaterThan' => 'Mayor que',
        'lessThan' => 'Menor que',
        'greaterThanOrEquals' => 'Mayor o igual a',
        'lessThanOrEquals' => 'Menor o igual que',
        'in' => 'En',
        'notIn' => 'No en',
        'inPast' => 'En Pasado',
        'inFuture' => 'Es Futuro',
        'isToday' => 'Es Hoy',
        'isTrue' => 'Es Verdadero',
        'isFalse' => 'Es Falso',
        'isEmpty' => 'Está Vacío',
        'isNotEmpty' => 'No está vacío',
        'contains' => 'Contiene',
        'notContains' => 'No Contiene',
        'has' => 'Contiene',
        'notHas' => 'No Contiene',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre (Sujeto)',
      'parent' => 'Padre',
      'status' => 'Estátus',
      'dateSent' => 'Enviado',
      'from' => 'De',
      'to' => 'Para',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Responder a',
      'replyToString' => 'Responder a (String)',
      'isHtml' => 'Es Html',
      'body' => 'Cuerpo',
      'subject' => 'Asunto',
      'attachments' => 'Adjuntos',
      'selectTemplate' => 'Seleccione una Plantilla',
      'fromEmailAddress' => 'De la dirección',
      'toEmailAddresses' => 'a la Dirección',
      'emailAddress' => 'Correo Electrónico',
      'deliveryDate' => 'Fecha Entrega',
      'account' => 'Cuenta',
      'users' => 'Usuarios',
      'replied' => 'Respondió',
      'replies' => 'Respuestas',
      'isRead' => 'Fue leído',
      'isNotRead' => 'No Leído',
      'isImportant' => 'Es Importante',
      'isReplied' => 'Tiene Respuesta',
      'isNotReplied' => 'No Tiene Respuesta',
      'isUsers' => 'Es del Usuario',
      'inTrash' => 'En el Basurero',
      'sentBy' => 'Enviado por (Usuario)',
      'folder' => 'Carpeta',
      'inboundEmails' => 'Cuentas de Grupo',
      'emailAccounts' => 'Cuentas Personales',
      'hasAttachment' => 'Tiene Adjuntos',
      'assignedUsers' => 'Assigned Users',
    ),
    'links' => 
    array (
      'replied' => 'Respondió',
      'replies' => 'Respuestas',
      'inboundEmails' => 'Cuentas de Grupo',
      'emailAccounts' => 'Cuentas Personales',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Sent By',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Borrador',
        'Sending' => 'Enviando',
        'Sent' => 'Enviado',
        'Archived' => 'Archivado',
        'Received' => 'Recibido',
        'Failed' => 'Falló',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Archivar Correo',
      'Archive Email' => 'Archivar Correo',
      'Compose' => 'Nuevo',
      'Reply' => 'Responder',
      'Reply to All' => 'Responder a Todos',
      'Forward' => 'Reenviar',
      'Original message' => 'Mensaje Original',
      'Forwarded message' => 'Mensaje reenviado',
      'Email Accounts' => 'Cuentas de Correo Personales',
      'Inbound Emails' => 'Grupo de Cuentas de Correo',
      'Email Templates' => 'Plantillas de Correo',
      'Send Test Email' => 'Enviar Correo de Prueba',
      'Send' => 'Enviar',
      'Email Address' => 'Correo Electrónico',
      'Mark Read' => 'Marcar como Leído',
      'Sending...' => 'Enviando...',
      'Save Draft' => 'Guardar Borrador',
      'Mark all as read' => 'Marcar todos como leídos',
      'Show Plain Text' => 'Ver en texto plano',
      'Mark as Important' => 'Marcar como Importante',
      'Unmark Importance' => 'Marcar como No Importante',
      'Move to Trash' => 'Mover al Basurero',
      'Retrieve from Trash' => 'Recuperar del Basurero',
      'Move to Folder' => 'Mover a la Carpeta',
      'Filters' => 'Filtros',
      'Folders' => 'Carpetas',
      'Create Lead' => 'Crear Referencia',
      'Create Contact' => 'Crear Contacto',
      'Add to Contact' => 'Agregar a Contactos',
      'Add to Lead' => 'Añadir a la Referencia',
      'Create Task' => 'Crear Tarea',
      'Create Case' => 'Crear Caso',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'No está configurado el SMTP. {link}.',
      'testEmailSent' => 'Correo de prueba enviado',
      'emailSent' => 'Correo enviado',
      'savedAsDraft' => 'Guardado como borrador',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Enviado',
      'archived' => 'Archivado',
      'inbox' => 'Bandeja de Entrada',
      'drafts' => 'Borradores',
      'trash' => 'Basurero',
      'important' => 'Importante',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Mark as Read',
      'markAsNotRead' => 'Marcar como No Leído',
      'markAsImportant' => 'Marcar como Importante',
      'markAsNotImportant' => 'Marcar como No Importante',
      'moveToTrash' => 'Mover al Basurero',
      'moveToFolder' => 'Mover a la Carpeta',
      'retrieveFromTrash' => 'Recuperar del Basurero',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'host' => 'Servidor',
      'username' => 'Nombre de Usuario',
      'password' => 'Contraseña',
      'port' => 'Puerto',
      'monitoredFolders' => 'Carpetas Supervisadas',
      'ssl' => 'SSL',
      'fetchSince' => 'Traer Desde',
      'emailAddress' => 'Correo Electrónico',
      'sentFolder' => 'Carpeta de Enviados',
      'storeSentEmails' => 'Almacenar Correos Enviados',
      'keepFetchedEmailsUnread' => 'Mantener los correos obtenidos sin leer',
      'emailFolder' => 'Poner en la Carpeta',
      'useSmtp' => 'Use SMTP',
      'smtpHost' => 'Servidor SMTP',
      'smtpPort' => 'Puerto SMTP',
      'smtpAuth' => 'Cuenta SMTP',
      'smtpSecurity' => 'Seguridad SMTP',
      'smtpUsername' => 'Usuario SMTP',
      'smtpPassword' => 'Contraseña SMTP',
    ),
    'links' => 
    array (
      'filters' => 'Filtros',
      'emails' => 'Correos',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Crear Cuenta de Correo Electrónico',
      'IMAP' => 'IMAP',
      'Main' => 'Principal',
      'Test Connection' => 'Probar conexión',
      'Send Test Email' => 'Enviar Correo de Prueba',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'No se pudo conectar con el servidor IMAP',
      'connectionIsOk' => 'Conexión correcta',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Multiple folders should be separated by comma.

You can add a \'Sent\' folder to sync emails sent from an external email client.',
      'storeSentEmails' => 'Los correos enviados serán almacenados en el servidor IMAP.  El campo \'Dirección de Correo\' deberá ser el mismo desde donde los correos sean enviados. ',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primario',
      'Opted Out' => 'Rechazado',
      'Invalid' => 'Inválido',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'De',
      'to' => 'Para',
      'subject' => 'Asunto',
      'bodyContains' => 'Contenido del Cuerpo',
      'action' => 'Acción',
      'isGlobal' => 'Es Global',
      'emailFolder' => 'Carpeta',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Crear un Filtro de Correo',
      'Emails' => 'Correos',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignorar',
        'Move to Folder' => 'Carpeta',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Indique un nombre descriptivo del filtro.',
      'subject' => 'Use el comodín *:

texto*  - inicia con \'texto\',
*texto* - contiene \'texto\',
*texto  - termina en \'text\'.',
      'bodyContains' => 'El cuerpo del correo contiene alguna de la palabras o frases especificadas.',
      'from' => 'Los correos enviados desde la dirección especificada. Dejar en blanco si no es necesario.',
      'to' => 'Los correos electrónicos que se envían a la dirección especificada. Dejar en blanco si no es necesario.',
      'isGlobal' => 'Aplicar este filtro a todos los correos entrantes del sistema.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Saltar Notificaciones',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Crear Carpeta',
      'Manage Folders' => 'Administrar Carpetas',
      'Emails' => 'Correos',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'isHtml' => 'Es HTML',
      'body' => 'Cuerpo',
      'subject' => 'Asunto',
      'attachments' => 'Adjuntos',
      'insertField' => 'Insertar Campo',
      'oneOff' => 'Único',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Crear Plantilla de Correo',
      'Info' => 'Información',
    ),
    'messages' => 
    array (
      'infoText' => 'Variables disponibles:

{optOutUrl} &#8211; URL de la liga para cancelar suscripción;

{optOutLink} &#8211; texto de la liga para cancelar suscripción.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Compruebe si usted va a utilizar esta plantilla sólo una vez. Por ejemplo: para Correo Masivo.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actuales',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Campos',
      'Relationships' => 'Relaciones',
      'Schedule' => 'Agenda',
      'Log' => 'Historial',
      'Formula' => 'Fórmula',
    ),
    'fields' => 
    array (
      'name' => 'Nombre',
      'type' => 'Tipo',
      'labelSingular' => 'Etiqueta en Singular',
      'labelPlural' => 'Etiqueta en Plural',
      'stream' => 'Seguimiento',
      'label' => 'Etiqueta',
      'linkType' => 'Tipo de enlace',
      'entityForeign' => 'Entidad Foránea',
      'linkForeign' => 'Enlace Foráneo',
      'link' => 'Enlace',
      'labelForeign' => 'Etiqueta Foránea',
      'sortBy' => 'Orden por Omisión (campo)',
      'sortDirection' => 'Orden por Omisión (dirección)',
      'relationName' => 'Nombre de la Tabla Intermedia',
      'linkMultipleField' => 'Ligar Varios Campos',
      'linkMultipleFieldForeign' => 'Ligar Varios Campos Foráneos',
      'disabled' => 'Desactivado',
      'textFilterFields' => 'Campos de Filtros de Texto',
      'audited' => 'Auditado',
      'auditedForeign' => 'Auditado Externamente',
      'statusField' => 'Campo de Estátus',
      'beforeSaveCustomScript' => 'Antes de Guardar el Código Personalizado',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Ninguno',
        'Base' => 'Base',
        'Person' => 'Persona',
        'CategoryTree' => 'Árbol de Categorías',
        'Event' => 'Evento',
        'BasePlus' => 'Base Plus',
        'Company' => 'Empresa',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Muchos-a-Muchos',
        'oneToMany' => 'Uno-a-Muchos',
        'manyToOne' => 'Muchos-a-uno',
        'parentToChildren' => 'Padres-a-Hijos',
        'childrenToParent' => 'Hijos-a-Padres',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Ascendente',
        'desc' => 'Descendente',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'La entidad ha sido creada',
      'linkAlreadyExists' => 'Conflicto de nombres en el enlace.',
      'linkConflict' => 'Ya existe un enlace con el mismo nombra.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Los cambios en este campo serán registrados en seguimiento',
      'textFilterFields' => 'Campos usados por la búsqueda de texto',
      'stream' => 'Si la entidad tiene Seguimiento.',
      'disabled' => 'Verifique si ya no necesita esta entidad en su sistema.',
      'linkAudited' => 'Se registrará en Seguimiento la creación de registros relacionados y su liga con con registros existentes.',
      'linkMultipleField' => 'El campo \'Multi-Ligas\' es una forma fácil de editar relaciones.  No lo uses si tienes muchos registros.',
      'entityType' => 'Base Plus - tiene páneles de Seguimento, Historial y Tareas.

Evento - disponible en los páneles de Calendario y Seguimiento',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Exportar todos los campos',
      'fieldList' => 'Lista de Campos',
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
      'name' => 'Nombre',
      'version' => 'Version',
      'description' => 'Descripción',
      'isInstalled' => 'Instalado',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Desinstalar',
      'Install' => 'Instalar',
    ),
    'messages' => 
    array (
      'uninstalled' => 'La extension {name} ha sido desinstalada',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Conectar',
      'Connected' => 'Conectado',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Lógica Dinámica',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Ninguno',
        'javascript: return this.dateTime.getNow(1);' => 'Hoy',
        'javascript: return this.dateTime.getNow(5);' => 'Hoy (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Hoy (15 m)',
        'javascript: return this.dateTime.getNow(30);' => 'Hoy (30 m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 hora',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 día',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 semana',
      ),
      'dateDefault' => 
      array (
        '' => 'Ninguno',
        'javascript: return this.dateTime.getToday();' => 'Hoy',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 día',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 semana',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 semanas',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 semanas',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 mes',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 año',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Las actualizaciones se registrarán en Seguimiento',
      'required' => 'El campo será obligatorio.  No puede ir vacío.',
      'default' => 'Se asignará el valor por omisión al crearlo.',
      'min' => 'Valor mínimo permitido.',
      'max' => 'Valor máximo permitido.',
      'seeMoreDisabled' => 'Si no se marca, los textos largos serán recortados.',
      'lengthOfCut' => 'Que tan largo puede ser el texto antes de ser recortado.',
      'maxLength' => 'Tamaño máximo acepable del texto.',
      'before' => 'El valor de la fecha debe ser anterior a la fecha del campo especificado.',
      'after' => 'El valor de la fecha debe ser posterior a la fecha del campo especificado.',
      'readOnly' => 'El valor del campo no puede ser especificado por el usuario.  Pero puede ser calculado por formula.',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Correo electrónico',
      'User' => 'Usuario',
      'Team' => 'Equipo',
      'Role' => 'Rol',
      'EmailTemplate' => 'Plantilla de Correo',
      'EmailAccount' => 'Cuenta de Correo',
      'EmailAccountScope' => 'Cuenta de Correo',
      'OutboundEmail' => 'Correo Saliente',
      'ScheduledJob' => 'Tarea Programada',
      'ExternalAccount' => 'Cuenta Externa',
      'Extension' => 'Extension',
      'Dashboard' => 'Escritorio',
      'InboundEmail' => 'Correo Entrante',
      'Stream' => 'Seguimiento',
      'Import' => 'Importar',
      'Template' => 'Plantilla',
      'Job' => 'Trabajo',
      'EmailFilter' => 'Filtro de correo',
      'Portal' => 'Portal',
      'PortalRole' => 'Rol del Portal',
      'Attachment' => 'Datos adjuntos',
      'EmailFolder' => 'Carpeta del Correo',
      'PortalUser' => 'Portal del Usuario',
      'ScheduledJobLogRecord' => 'Historial de Trabajos Programados',
      'PasswordChangeRequest' => 'Solicitar Cambio de Contraseña',
      'ActionHistoryRecord' => 'Historial de Acciones',
      'AuthToken' => 'Token de Autorización',
      'UniqueId' => 'ID Único',
      'LastViewed' => 'Ultimo Visto',
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
      'Account' => 'Cuenta',
      'Contact' => 'Contacto',
      'Lead' => 'Referencia',
      'Target' => 'Objetivo',
      'Opportunity' => 'Oportunidad',
      'Meeting' => 'Reunión',
      'Calendar' => 'Calendario',
      'Call' => 'Llamada',
      'Task' => 'Tarea',
      'Case' => 'Caso',
      'Document' => 'Documento',
      'DocumentFolder' => 'Carpeta de Documento',
      'Campaign' => 'Campaña',
      'TargetList' => 'Lista de Objetivos',
      'MassEmail' => 'Correo Masivo',
      'EmailQueueItem' => 'Item en Cola de Correo',
      'CampaignTrackingUrl' => 'URL de seguimiento',
      'Activities' => 'Actividades',
      'KnowledgeBaseArticle' => 'Artículo de la Base de Conocimientos',
      'KnowledgeBaseCategory' => 'Categoría de la Base de Conocimientos',
      'CampaignLogRecord' => 'Registrar Historial de Campaña',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Correos',
      'User' => 'Usuarios',
      'Team' => 'Equipos',
      'Role' => 'Roles',
      'EmailTemplate' => 'Plantillas de Correo',
      'EmailAccount' => 'Cuentas de Correo Electrónico',
      'EmailAccountScope' => 'Cuentas de Correo Electrónico',
      'OutboundEmail' => 'Correos Salientes',
      'ScheduledJob' => 'Tareas Programadas',
      'ExternalAccount' => 'Cuentas Externas',
      'Extension' => 'Extensiones',
      'Dashboard' => 'Escritorio',
      'InboundEmail' => 'Grupo de Cuentas de Correo',
      'Stream' => 'Seguimiento',
      'Import' => 'Importar Resultados',
      'Template' => 'Plantillas',
      'Job' => 'Trabajos',
      'EmailFilter' => 'Filtros de Correo',
      'Portal' => 'Portales',
      'PortalRole' => 'Roles del Portal',
      'Attachment' => 'Datos adjuntos',
      'EmailFolder' => 'Carpetas del Correo',
      'PortalUser' => 'Usuarios del Portal',
      'ScheduledJobLogRecord' => 'Historial de Trabajos Programados',
      'PasswordChangeRequest' => 'Solicitudes de Cambio de contraseña',
      'ActionHistoryRecord' => 'Historial de Acciones',
      'AuthToken' => 'Tokens de Autorización',
      'UniqueId' => 'IDs Unicos',
      'LastViewed' => 'Ultimos Revisados',
      'Account' => 'Cuentas',
      'Contact' => 'Contactos',
      'Lead' => 'Referencias',
      'Target' => 'Objetivos',
      'Opportunity' => 'Oportunidades',
      'Meeting' => 'Reuniones',
      'Calendar' => 'Calendario',
      'Call' => 'Llamadas',
      'Task' => 'Tareas',
      'Case' => 'Casos',
      'Document' => 'Documentos',
      'DocumentFolder' => 'Carpetas de Documentos',
      'Campaign' => 'Campañas',
      'TargetList' => 'Lista de Objetivos',
      'MassEmail' => 'Correos Masivos',
      'EmailQueueItem' => 'Items en Cola de Correo',
      'CampaignTrackingUrl' => 'URLs de Seguimiento',
      'Activities' => 'Actividades',
      'KnowledgeBaseArticle' => 'Base de Conocimientos',
      'KnowledgeBaseCategory' => 'Categorías de la Base de Conocimientos',
      'CampaignLogRecord' => 'Historial de Campañas',
    ),
    'labels' => 
    array (
      'Misc' => 'Misceláneos',
      'Merge' => 'Unir',
      'None' => 'Ninguno',
      'Home' => 'Inicio',
      'by' => 'por',
      'Saved' => 'Guardado',
      'Error' => 'Error',
      'Select' => 'Seleccionar',
      'Not valid' => 'No válido',
      'Please wait...' => 'Por favor espere...',
      'Please wait' => 'Por favor espere',
      'Loading...' => 'Cargando...',
      'Uploading...' => 'Subiendo...',
      'Sending...' => 'Enviando...',
      'Merging...' => 'Fusionando...',
      'Merged' => 'Fusionado',
      'Removed' => 'Eliminado',
      'Posted' => 'Publicado',
      'Linked' => 'Ligado',
      'Unlinked' => 'Desligado',
      'Done' => 'Hecho',
      'Access denied' => 'Acceso denegado',
      'Not found' => 'No encontrado',
      'Access' => 'Acceso',
      'Are you sure?' => '¿Está seguro?',
      'Record has been removed' => 'Registro Eliminado',
      'Wrong username/password' => 'Nombre de usuario/contraseña incorrectos',
      'Post cannot be empty' => 'La entrada no puede estar vacia',
      'Removing...' => 'Removiendo...',
      'Unlinking...' => 'Desligando...',
      'Posting...' => 'Publicando...',
      'Username can not be empty!' => '¡El nombre del usuario no puede estar vacío!',
      'Cache is not enabled' => 'Cache no está habilitado',
      'Cache has been cleared' => 'Cache Limpiado Correctamente',
      'Rebuild has been done' => 'Se ha reconstruido',
      'Return to Application' => 'Regresar a la Aplicación',
      'Saving...' => 'Guardando...',
      'Modified' => 'Modificado',
      'Created' => 'Creado',
      'Create' => 'Crear',
      'create' => 'crear',
      'Overview' => 'Vista',
      'Details' => 'Detalles',
      'Add Field' => 'Añadir Campo',
      'Add Dashlet' => 'Añadir Cuadro',
      'Filter' => 'Filtro',
      'Edit Dashboard' => 'Editar Escritorio',
      'Add' => 'Añadir',
      'Add Item' => 'Agregar Elemento',
      'Reset' => 'Restablecer',
      'Menu' => 'Menú',
      'More' => 'Más',
      'Search' => 'Buscar',
      'Only My' => 'Sólo míos',
      'Open' => 'Abiertos',
      'Admin' => 'Administrador',
      'About' => 'Acerca',
      'Refresh' => 'Actualizar',
      'Remove' => 'Remover',
      'Options' => 'Opciones',
      'Username' => 'Nombre de Usuario',
      'Password' => 'Contraseña',
      'Login' => 'Entrar',
      'Log Out' => 'Salir',
      'Preferences' => 'Preferencias',
      'State' => 'Estado/Distrito',
      'Street' => 'Calle',
      'Country' => 'País',
      'City' => 'Ciudad',
      'PostalCode' => 'Código Postal',
      'Followed' => 'Con Seguimiento',
      'Follow' => 'Seguir',
      'Followers' => 'Seguidores',
      'Clear Local Cache' => 'Borrar Cache Local',
      'Actions' => 'Acciones',
      'Delete' => 'Borrar',
      'Update' => 'Guardar',
      'Save' => 'Guardar',
      'Edit' => 'Editar',
      'View' => 'Ver',
      'Cancel' => 'Cancelar',
      'Apply' => 'Aplicar',
      'Unlink' => 'Desligar',
      'Mass Update' => 'Actualización Masiva',
      'Export' => 'Exportar',
      'No Data' => 'Sin Datos',
      'No Access' => 'Sin Acceso',
      'All' => 'Todos',
      'Active' => 'Activo',
      'Inactive' => 'Inactivo',
      'Write your comment here' => 'Escriba su comentario aquí',
      'Post' => 'Entrada',
      'Stream' => 'Seguimiento',
      'Show more' => 'Mostrar mas',
      'Dashlet Options' => 'Opciones de Cuadros',
      'Full Form' => 'Formulario Completo',
      'Insert' => 'Insertar',
      'Person' => 'Persona',
      'First Name' => 'Nombre',
      'Last Name' => 'Apellidos',
      'Original' => 'Original',
      'You' => 'Tu',
      'you' => 'tu',
      'change' => 'cambiar',
      'Change' => 'Cambiar',
      'Primary' => 'Primario',
      'Save Filter' => 'Guardar Filtro',
      'Administration' => 'Administración',
      'Run Import' => 'Ejecutar Importación',
      'Duplicate' => 'Duplicar',
      'Notifications' => 'Notificaciones',
      'Mark all read' => 'Marcar todos como leído',
      'See more' => 'Ver más',
      'Today' => 'Hoy',
      'Tomorrow' => 'Mañana',
      'Yesterday' => 'Ayer',
      'Submit' => 'Enviar',
      'Close' => 'Cerrar',
      'Yes' => 'Si',
      'No' => 'No',
      'Select All Results' => 'Seleccionar Todos',
      'Value' => 'Valor',
      'Current version' => 'Version Actual',
      'List View' => 'Vista de Lista',
      'Tree View' => 'Vista de árbol',
      'Unlink All' => 'Desligar todo',
      'Total' => 'Total',
      'Print to PDF' => 'Imprimir PDF',
      'Default' => 'Por Omisión',
      'Number' => 'Número',
      'From' => 'De',
      'To' => 'Para',
      'Create Post' => 'Crear entrada',
      'Previous Entry' => 'Entrada Previa',
      'Next Entry' => 'Siguiente Entrada',
      'View List' => 'Ver Lista',
      'Attach File' => 'Adjuntar archivo',
      'Skip' => 'Saltar',
      'Attribute' => 'Atributo',
      'Function' => 'Función',
      'Self-Assign' => 'Auto-Asignar',
      'Self-Assigned' => 'Auto-Asignado',
      'Create InboundEmail' => 'Crear Correo Entrante',
      'Activities' => 'Actividades',
      'History' => 'Historial',
      'Attendees' => 'Asistentes',
      'Schedule Meeting' => 'Reunión Programada',
      'Schedule Call' => 'Llamada Programada',
      'Compose Email' => 'Escribir Correo',
      'Log Meeting' => 'Registrar Reunión',
      'Log Call' => 'Registrar Llamada',
      'Archive Email' => 'Archivar Correo',
      'Create Task' => 'Crear Tarea',
      'Tasks' => 'Tareas',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Por favor espere...',
      'posting' => 'Publicando...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => '¿Realmente desea salir del formulario?',
      'notModified' => 'No ha modificado el registro',
      'duplicate' => 'El registro que estás creando ya puede existir.',
      'dropToAttach' => 'Haga drop para adjuntar',
      'fieldIsRequired' => '{field} es requerido',
      'fieldShouldBeEmail' => '{field} debería ser un correo válido',
      'fieldShouldBeFloat' => '{field} debería ser un número válido',
      'fieldShouldBeInt' => '{field} debería ser un entero válido',
      'fieldShouldBeDate' => '{field} debería ser una fecha válida',
      'fieldShouldBeDatetime' => '{field} deber{ia ser una fecha/hr válida',
      'fieldShouldAfter' => '{field} debe estar después de {otherField}',
      'fieldShouldBefore' => '{field} debe estar antes de {otherField}',
      'fieldShouldBeBetween' => '{field} debe estar entre {min} y {max}',
      'fieldShouldBeLess' => '{field} debe ser menor que {value}',
      'fieldShouldBeGreater' => '{field} debe ser mayor que {value}',
      'fieldBadPasswordConfirm' => '{field} confirmado de forma incorrecta',
      'resetPreferencesDone' => 'Se han restablecido las preferencias por omisión',
      'confirmation' => '¿Está seguro?',
      'unlinkAllConfirmation' => '¿Realmente desea desvincular todos los registros relacionados?',
      'resetPreferencesConfirmation' => '¿Realmente desea restablecer las preferencias por omisión?',
      'removeRecordConfirmation' => '¿Realmente desea eliminar registros?',
      'unlinkRecordConfirmation' => '¿Realmente quiere desligar este registro?',
      'removeSelectedRecordsConfirmation' => '¿Realmente desea eliminar los registros seleccionados?',
      'massUpdateResult' => '{count} registro(s) actualizado(s)',
      'massUpdateResultSingle' => '{count} registro actualizado',
      'noRecordsUpdated' => 'Ningún registro fue actualizado',
      'massRemoveResult' => '{count} registro(s) eliminado(s)',
      'massRemoveResultSingle' => '{count} registro eliminado',
      'noRecordsRemoved' => 'Ningún registro fue eliminado',
      'clickToRefresh' => 'Clic para actualizar',
      'streamPostInfo' => 'Escriba <strong>@username</strong> para indicar los usuarios de esta publicación.

Sintaxis disponible para los marcadores:
`<code>código</code>`
**<strong>texto en negrita</strong>**
*<em>texto en itálica</em>*
~<del>texto eliminado</del>~
> marcador de bloque
[texto de la liga](url) ',
      'writeYourCommentHere' => 'Escriba su comentario aquí',
      'writeMessageToUser' => 'Escribir un mensaje a {user}',
      'writeMessageToSelf' => 'Escriba un mensaje de seguimiento',
      'typeAndPressEnter' => 'Teclear y oprimir enter',
      'checkForNewNotifications' => 'Ver si hay nuevas notificaciones',
      'checkForNewNotes' => 'Verifique si no hay actualizaciones al seguimiento',
      'internalPost' => 'La publicación sólo será vista por los usuarios internos',
      'internalPostTitle' => 'Lo publicado sólo lo verán los usuarios internos',
      'done' => 'Enviados',
      'confirmMassFollow' => '¿Realmente quieres marcar con seguimiento a los registros seleccionados?',
      'confirmMassUnfollow' => '¿Realmente quieres marcar sin seguimiento a los registros seleccionados?',
      'massFollowResult' => '{count} registro(s) ahora tienen seguimento',
      'massUnfollowResult' => '{count} registro(s) ya no tienen seguimiento',
      'massFollowResultSingle' => '{count} nuevo(s) registro(s) tienen seguimiento',
      'massUnfollowResultSingle' => 'El registro {count} ya no tiene seguimiento',
      'massFollowZeroResult' => 'Nada tiene seguimiento',
      'massUnfollowZeroResult' => 'A nada se le quitó el seguimiento',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Sólo míos',
      'followed' => 'Con Seguimiento',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Con Seguimiento',
      'all' => 'Todos',
    ),
    'massActions' => 
    array (
      'remove' => 'Remover',
      'merge' => 'Unir',
      'massUpdate' => 'Actualización Masiva',
      'export' => 'Exportar',
      'follow' => 'Dar seguimiento',
      'unfollow' => 'Quitar seguimiento',
    ),
    'fields' => 
    array (
      'name' => 'Nombre',
      'firstName' => 'Nombre',
      'lastName' => 'Apellidos',
      'salutationName' => 'Saludo',
      'assignedUser' => 'Usuario Asignado',
      'assignedUsers' => 'Usuarios Asignados',
      'emailAddress' => 'Correo electrónico',
      'assignedUserName' => 'Nombre de Usuario Asignado',
      'teams' => 'Equipos',
      'createdAt' => 'Creado en',
      'modifiedAt' => 'Modificado el',
      'createdBy' => 'Creado por',
      'modifiedBy' => 'Modificado Por',
      'description' => 'Descripción',
      'address' => 'Dirección',
      'phoneNumber' => 'Teléfono',
      'phoneNumberMobile' => 'Teléfono (Móvil)',
      'phoneNumberHome' => 'Teléfono (Casa)',
      'phoneNumberFax' => 'Teléfono (Fax)',
      'phoneNumberOffice' => 'Teléfono (Oficina)',
      'phoneNumberOther' => 'Teléfono (Otro)',
      'order' => 'Orden',
      'parent' => 'Padre',
      'children' => 'Hijos',
      'id' => 'ID',
      'billingAddressCity' => 'Ciudad',
      'billingAddressCountry' => 'País',
      'billingAddressPostalCode' => 'Código Postal',
      'billingAddressState' => 'Estado/Distrito',
      'billingAddressStreet' => 'Calle',
      'billingAddressMap' => 'Mapa',
      'addressCity' => 'Ciudad',
      'addressStreet' => 'Calle',
      'addressCountry' => 'País',
      'addressState' => 'Estado/Distrito',
      'addressPostalCode' => 'Código Postal',
      'addressMap' => 'Mapa',
      'shippingAddressCity' => 'Ciudad (Envío)',
      'shippingAddressStreet' => 'Calle (Envío)',
      'shippingAddressCountry' => 'País (Envío)',
      'shippingAddressState' => 'Estado (Envío)',
      'shippingAddressPostalCode' => 'Código Postal (Envío)',
      'shippingAddressMap' => 'Mapa (Envío)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Usuario Asignado',
      'createdBy' => 'Creado por',
      'modifiedBy' => 'Modificado Por',
      'team' => 'Equipo',
      'roles' => 'Roles',
      'teams' => 'Equipos',
      'users' => 'Usuarios',
      'parent' => 'Padre',
      'children' => 'Hijos',
      'contacts' => 'Contactos',
      'opportunities' => 'Oportunidades',
      'leads' => 'Referencias',
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'emails' => 'Correos',
      'accounts' => 'Cuentas',
      'cases' => 'Casos',
      'documents' => 'Documentos',
      'account' => 'Cuenta',
      'opportunity' => 'Oportunidad',
      'contact' => 'Contacto',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Seguimiento',
      'Emails' => 'Mi Bandeja de Entrada',
      'Records' => 'Lista de Registros',
      'Leads' => 'Mis Referencias',
      'Opportunities' => 'Mis Oportunidades',
      'Tasks' => 'Mis Tareas',
      'Cases' => 'Mis Casos',
      'Calendar' => 'Calendario',
      'Calls' => 'Mis Llamadas',
      'Meetings' => 'Mis Reuniones',
      'OpportunitiesByStage' => 'Oportunidades por Etapa',
      'OpportunitiesByLeadSource' => 'Oportunidades de Fuente de Referencias',
      'SalesByMonth' => 'Ventas por Mes',
      'SalesPipeline' => 'Canalización de Ventas',
      'Activities' => 'Mis Actividades',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} ha sido asignado a usted',
      'emailReceived' => 'Correo recibido de {from}',
      'entityRemoved' => '{user} ha eliminado {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} a publicado en {entityType} {entity}',
      'attach' => '{user} adjuntado en {entityType} {entity}',
      'status' => '{user} ha actualizado {field} en {entityType} {entity}',
      'update' => '{user} ha actualizado {entityType} {entity}',
      'postTargetTeam' => '{user} publicó en equipo {target}',
      'postTargetTeams' => '{user} publicó en equipos {target}',
      'postTargetPortal' => '{user} publicó en el portal {target}',
      'postTargetPortals' => '{user} publicó en los portales {target}',
      'postTarget' => '{user} publicó en {target}',
      'postTargetYou' => '{user} publicado por usted',
      'postTargetYouAndOthers' => '{user} envió a {target} y a usted',
      'postTargetAll' => '{user} envió a todos',
      'postTargetSelf' => '{user} auto-publicado',
      'postTargetSelfAndOthers' => '{user} publicó en {target} con copia a si mismo',
      'mentionInPost' => '{user} mencionado {mentioned} en {entityType} {entity}',
      'mentionYouInPost' => '{user} te ha mencionado en {entityType} {entity}',
      'mentionInPostTarget' => '{user} mencionó a {mentioned} en el post',
      'mentionYouInPostTarget' => '{user} te ha mencionado en post para {target}',
      'mentionYouInPostTargetAll' => '{user} te ha mencionado en post para todos',
      'mentionYouInPostTargetNoTarget' => '{user} te menciona en el post',
      'create' => '{user} ha creado {entityType} {entity}',
      'createThis' => '{user} crear este {entityType}',
      'createAssignedThis' => '{user} crear este {entityType} asignado a {assignee}',
      'createAssigned' => '{user} ha creado {entityType} {entity} asignado a {assignee}',
      'createAssignedYou' => '{user} creó {entityType} {entity} y te la asignó',
      'createAssignedThisSelf' => '{user} creo esta {entityType} auto-asignada',
      'createAssignedSelf' => '{user} creo {entityType} {entity} auto-asignada',
      'assign' => '{user} ha asignado {entityType} {entity} a {assignee}',
      'assignThis' => '{user} asignar este {entityType} a {assignee}',
      'assignYou' => '{user} te asignó {entityType} {entity}',
      'assignThisVoid' => '{user} desasignó esta {entityType}',
      'assignVoid' => '{user} desasignó {entityType} {entity}',
      'assignThisSelf' => '{user} auto-asignó esta {entityType}',
      'assignSelf' => '{user} auto-asignó {entityType} {entity}',
      'postThis' => '{user} publicado',
      'attachThis' => '{user} adjunto',
      'statusThis' => '{user} actualizado {field}',
      'updateThis' => '{user} actualizado a este {entityType}',
      'createRelatedThis' => '{user} creado {relatedEntityType} {relatedEntity} ligado a este {entityType}',
      'createRelated' => '{user} ha creado {relatedEntityType} {relatedEntity} ligado a {entityType} {entity}',
      'relate' => '{user} ligó {relatedEntityType} {relatedEntity} con {entityType} {entity}',
      'relateThis' => '{user} ligó {relatedEntityType} {relatedEntity} con este {entityType}',
      'emailReceivedFromThis' => 'Correo recibido de {from}',
      'emailReceivedInitialFromThis' => 'Correo recibido de {from}, esta {entityType} creada',
      'emailReceivedThis' => 'El correo {email} ha sido recibido',
      'emailReceivedInitialThis' => 'Se recibió el correo {email} y se creó su {entityType}',
      'emailReceivedFrom' => 'Correo recibido de {from}, relacionado a {entityType} {entity}',
      'emailReceivedFromInitial' => 'Correo recibido de {from}, {entityType} {entity} creada',
      'emailReceived' => 'Se recibió el correo {email} para su {entityType} {entity}',
      'emailReceivedInitial' => 'Correo recibido: {entityType} {entity} creado(a)',
      'emailReceivedInitialFrom' => 'Correo recibido de {from}, {entityType} {entity} creada',
      'emailSent' => '{by} envió un correo relacionado a {entityType} {entity}',
      'emailSentThis' => '{by} envió un correo',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} publicó a {target} con copia para sí mismo',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} publicó a {target} y a sí mismo',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Enero',
        1 => 'Febrero',
        2 => 'Marzo',
        3 => 'Abril',
        4 => 'Mayo',
        5 => 'Junio',
        6 => 'Julio',
        7 => 'Agosto',
        8 => 'Septiembre',
        9 => 'Octubre',
        10 => 'Noviembre',
        11 => 'Diciembre',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Ene',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Abr',
        4 => 'May',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Ago',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dic',
      ),
      'dayNames' => 
      array (
        0 => 'Domingo',
        1 => 'Lunes',
        2 => 'Martes',
        3 => 'Miércoles',
        4 => 'Jueves',
        5 => 'Viernes',
        6 => 'Sábado',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Dom',
        1 => 'Lun',
        2 => 'Mar',
        3 => 'Mie',
        4 => 'Jue',
        5 => 'Vie',
        6 => 'Sab',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Do',
        1 => 'Lu',
        2 => 'Ma',
        3 => 'Mi',
        4 => 'Ju',
        5 => 'Vi',
        6 => 'Sa',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Sr.',
        'Mrs.' => 'Sra.',
        'Ms.' => 'Srta.',
        'Dr.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikáans',
        'az_AZ' => 'Azerbaiyán',
        'be_BY' => 'Bielorruso',
        'bg_BG' => 'Bulgaro',
        'bn_IN' => 'Bengalí',
        'bs_BA' => 'Bosnio',
        'ca_ES' => 'Catalán',
        'cs_CZ' => 'Checo',
        'cy_GB' => 'Galés',
        'da_DK' => 'Danés',
        'de_DE' => 'Alemán',
        'el_GR' => 'Griego',
        'en_GB' => 'Inglés (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'Inglés (US)',
        'es_ES' => 'Español (España)',
        'et_EE' => 'Estonio',
        'eu_ES' => 'Vasco',
        'fa_IR' => 'Persa',
        'fi_FI' => 'Finlandés',
        'fo_FO' => 'Feroés',
        'fr_CA' => 'Francés (Canada)',
        'fr_FR' => 'Francés (Francia)',
        'ga_IE' => 'Irlandés',
        'gl_ES' => 'Gallego',
        'gn_PY' => 'Guaraní',
        'he_IL' => 'Hebreo',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croata',
        'hu_HU' => 'Hungaro',
        'hy_AM' => 'Armenio',
        'id_ID' => 'Indonesio',
        'is_IS' => 'Islandés',
        'it_IT' => 'Italiano',
        'ja_JP' => 'Japonés',
        'ka_GE' => 'Georgiano',
        'km_KH' => 'Camboyano',
        'ko_KR' => 'Coreano',
        'ku_TR' => 'Kurdo',
        'lt_LT' => 'Lituano',
        'lv_LV' => 'Latón',
        'mk_MK' => 'Macedonio',
        'ml_IN' => 'Malabar',
        'ms_MY' => 'Malayo',
        'nb_NO' => 'Noruego Bokmål',
        'nn_NO' => 'Noruego Nynorsk',
        'ne_NP' => 'Nepalí',
        'nl_NL' => 'Holandés',
        'pa_IN' => 'Punyabí',
        'pl_PL' => 'Polaco',
        'ps_AF' => 'Pastún',
        'pt_BR' => 'Portugués (Brasil)',
        'pt_PT' => 'Portugués (Portugal)',
        'ro_RO' => 'Rumano',
        'ru_RU' => 'Ruso',
        'sk_SK' => 'Eslovaco',
        'sl_SI' => 'Esloveno',
        'sq_AL' => 'Albanés',
        'sr_RS' => 'Serbio',
        'sv_SE' => 'Sueco',
        'sw_KE' => 'Suajili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Télugu',
        'th_TH' => 'Tailandés',
        'tl_PH' => 'Tagalo',
        'tr_TR' => 'Turco',
        'uk_UA' => 'Ucraniano',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamita',
        'zh_CN' => 'Chino Simplificado (China)',
        'zh_HK' => 'Chino Tradicional (Hong Kong)',
        'zh_TW' => 'Chino Traditional (Taiwán)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'En',
        'notOn' => 'No está en',
        'after' => 'Después',
        'before' => 'Antes',
        'between' => 'Entre',
        'today' => 'Hoy',
        'past' => 'Pasado',
        'future' => 'Futuro',
        'currentMonth' => 'Mes Actual',
        'lastMonth' => 'Mes Pasado',
        'currentQuarter' => 'Trimestre Actual',
        'lastQuarter' => 'Trimestre Pasado',
        'currentYear' => 'Año Actual',
        'lastYear' => 'Año Pasado',
        'lastSevenDays' => 'Últimos 7 Días',
        'lastXDays' => 'Últimos X Días',
        'nextXDays' => 'Próximos X Días',
        'ever' => 'Nunca',
        'isEmpty' => 'Está Vacío',
        'olderThanXDays' => 'Mayor de "X" Días',
        'afterXDays' => 'Después de "X" Días',
      ),
      'searchRanges' => 
      array (
        'is' => 'Es',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No Está Vacío',
        'isOneOf' => 'Cualquiera',
        'isFromTeams' => 'Es del Equipo',
        'isNot' => 'No Es',
        'isNotOneOf' => 'Ninguno De',
        'anyOf' => 'Cualquiera',
        'noneOf' => 'Ninguno De',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Equivale',
        'like' => 'Es Como (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Comienza con',
        'endsWith' => 'Termina Con',
        'contains' => 'Contiene',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No Está Vacío',
        'notEquals' => 'Not Equals',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Equivale',
        'notEquals' => 'Diferentes',
        'greaterThan' => 'Mayor que',
        'lessThan' => 'Menor que',
        'greaterThanOrEquals' => 'Mayor o igual que',
        'lessThanOrEquals' => 'Menor o igual que',
        'between' => 'Entre',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No está vacío',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Ninguno',
        '0.5' => '30 segundos',
        1 => '1 minuto',
        2 => '2 minutos',
        5 => '5 minutos',
        10 => '10 minutos',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Teléfono móvil',
        'Office' => 'Oficina',
        'Fax' => 'Fax',
        'Home' => 'Hogar',
        'Other' => 'Otro',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Ventana emergente',
        'Email' => 'Correo electrónico',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Usted puede encontrar aquí la traducción: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Negrita',
          'italic' => 'Itálico',
          'underline' => 'Subrayado',
          'strike' => 'Tachado',
          'clear' => 'Quitar Estilo de Fuente',
          'height' => 'Alto de línea',
          'name' => 'Familia de Fuente',
          'size' => 'Tamaño de Fuente',
        ),
        'image' => 
        array (
          'image' => 'Visualización',
          'insert' => 'Insertar Imagen',
          'resizeFull' => 'Cambiar el tamaño a completo',
          'resizeHalf' => 'Cambiar el tamaño a la mitad',
          'resizeQuarter' => 'Cambiar el tamaño a un cuarto',
          'floatLeft' => 'Flotar Izquierda',
          'floatRight' => 'Flotar Derecha',
          'floatNone' => 'Sin Flotar',
          'dragImageHere' => 'Arrastre la imagen aquí',
          'selectFromFiles' => 'Seleccionar desde Archivo',
          'url' => 'Url de Imagen',
          'remove' => 'Remover Imagen',
        ),
        'link' => 
        array (
          'link' => 'Enlace',
          'insert' => 'Insertar Enlace',
          'unlink' => 'Desligar',
          'edit' => 'Editar',
          'textToDisplay' => 'Texto a mostrar',
          'url' => '¿A que URL debería ir este enlace?',
          'openInNewWindow' => 'Abrir en nueva ventana',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Enlace al Video',
          'insert' => 'Insertar Video',
          'url' => '¿URL del Video?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabla',
        ),
        'hr' => 
        array (
          'insert' => 'Insertar regla horizontal',
        ),
        'style' => 
        array (
          'style' => 'Estilo',
          'normal' => 'Normal',
          'blockquote' => 'Cita',
          'pre' => 'Código',
          'h1' => 'Cabecera 1',
          'h2' => 'Cabecera 2',
          'h3' => 'Cabecera 3',
          'h4' => 'Cabecera 4',
          'h5' => 'Cabecera 5',
          'h6' => 'Cabecera 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Lista sin Ordenar',
          'ordered' => 'Lista Ordenada',
        ),
        'options' => 
        array (
          'help' => 'Ayuda',
          'fullscreen' => 'Pantalla Completa',
          'codeview' => 'Ver Código',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Párrafo',
          'outdent' => 'Anular sangría',
          'indent' => 'Sangría',
          'left' => 'Alinear Izquierda',
          'center' => 'Alinear Centro',
          'right' => 'Alinear Derecha',
          'justify' => 'Justificado',
        ),
        'color' => 
        array (
          'recent' => 'Color Reciente',
          'more' => 'Mas Colores',
          'background' => 'Color de Fondo',
          'foreground' => 'Color de Fuente',
          'transparent' => 'Transparente',
          'setTransparent' => 'Definir como transparente',
          'reset' => 'Restablecer',
          'resetToDefault' => 'Restablecer el original',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Atajos de teclado',
          'close' => 'Cerrar',
          'textFormatting' => 'Formato de texto',
          'action' => 'Acción',
          'paragraphFormatting' => 'Formato de párrafo',
          'documentStyle' => 'Estilo de Documento',
        ),
        'history' => 
        array (
          'undo' => 'Deshacer',
          'redo' => 'Rehacer',
        ),
      ),
    ),
    'themes' => 
    array (
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL Espo',
      'Sakura' => 'Sakura',
      'EspoVertical' => 'Espo c/panel axiliar',
      'SakuraVertical' => 'Sakura c/panel auxiliar',
      'Violet' => 'Violeta',
      'VioletVertical' => 'Violeta c/panel auxiliar',
      'Hazyblue' => 'Hazyblue',
      'HazyblueVertical' => 'Hazyblue c/panel auxiliar',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Revertir Importación',
      'Return to Import' => 'Regreso a Importar',
      'Run Import' => 'Ejecutar Importación',
      'Back' => 'Anterior',
      'Field Mapping' => 'Mapeo de Campo',
      'Default Values' => 'Valores por Omisión',
      'Add Field' => 'Añadir Campo',
      'Created' => 'Creado',
      'Updated' => 'Actualizado',
      'Result' => 'Resultado',
      'Show records' => 'Mostrar registros',
      'Remove Duplicates' => 'Eliminar Duplicados	',
      'importedCount' => 'Importado (recuento)',
      'duplicateCount' => 'Duplicados (recuento)',
      'updatedCount' => 'Actualizado (recuento)',
      'Create Only' => 'Sólo Crear',
      'Create and Update' => 'Crear y Actualizar',
      'Update Only' => 'Sólo Actualizar',
      'Update by' => 'Actualizado por',
      'Set as Not Duplicate' => 'Establecer como No Duplicado',
      'File (CSV)' => 'Archivo (CSV)',
      'First Row Value' => 'Valor del Primer Renglón',
      'Skip' => 'Saltar',
      'Header Row Value' => 'Valor del Encabezado',
      'Field' => 'Campo',
      'What to Import?' => '¿Qué va a importar?',
      'Entity Type' => 'Tipo de Entidad',
      'What to do?' => '¿Qué hacer?',
      'Properties' => 'Propiedades',
      'Header Row' => 'Renglón de Encabezado',
      'Person Name Format' => 'Formato del Nombre de la Persona',
      'John Smith' => 'Pedro Pérez',
      'Smith John' => 'Pérez Pedro',
      'Smith, John' => 'Perez, Pedro',
      'Field Delimiter' => 'Delimitante del Campo',
      'Date Format' => 'Formato de la Fecha',
      'Decimal Mark' => 'Separador Decimal',
      'Text Qualifier' => 'Calificador del Texto',
      'Time Format' => 'Formato de Hora',
      'Currency' => 'Moneda',
      'Preview' => 'Vista previa',
      'Next' => 'Siguiente',
      'Step 1' => 'Paso 1',
      'Step 2' => 'Paso 2',
      'Double Quote' => 'Comillas dobles',
      'Single Quote' => 'Comillas sencillas',
      'Imported' => 'Importado',
      'Duplicates' => 'Duplicados',
      'Skip searching for duplicates' => 'No buscar duplicados',
      'Timezone' => 'Zona horaria',
    ),
    'messages' => 
    array (
      'utf8' => 'Debe ser codificado en UTF-8',
      'duplicatesRemoved' => 'Duplicados removidos',
      'inIdle' => 'Ejecutar cuando esté inactivo (para grandes datos, vía cron)',
    ),
    'fields' => 
    array (
      'file' => 'Archivo',
      'entityType' => 'Tipo de Entidad',
      'imported' => 'Registros Importados',
      'duplicates' => 'registros Duplicados',
      'updated' => 'registros Actualizados',
      'status' => 'Estátus',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Falló',
        'In Process' => 'En Proceso',
        'Complete' => 'Terminó',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'emailAddress' => 'Correo Electrónico',
      'team' => 'Equipo objetivo',
      'status' => 'Estado',
      'assignToUser' => 'Asignar al Usuario',
      'host' => 'Servidor',
      'username' => 'Nombre de Usuario',
      'password' => 'Contraseña',
      'port' => 'Puerto',
      'monitoredFolders' => 'Carpetas supervisadas',
      'trashFolder' => 'Carpeta del Basurero',
      'ssl' => 'SSL',
      'createCase' => 'Crear Caso',
      'reply' => 'Respuesta Automática',
      'caseDistribution' => 'Distribución de Caso',
      'replyEmailTemplate' => 'Plantilla de Respuesta de Correo',
      'replyFromAddress' => 'Respuesta de la Dirección',
      'replyToAddress' => 'Responder a la Dirección',
      'replyFromName' => 'Respuesta de Nombre',
      'targetUserPosition' => 'Objetivo Posición Usuario',
      'fetchSince' => 'Traer Desde',
      'addAllTeamUsers' => 'Para todos los usuarios del equipo',
      'teams' => 'Equipos',
    ),
    'tooltips' => 
    array (
      'reply' => 'Notifique a los remitentes de correo que han recibido sus mensajes.

 Sólo un correo será enviado a un destinatario particular durante un período de tiempo para evitar bucles.',
      'createCase' => 'Automaticamente crear un Caso de los correos entrantes.',
      'replyToAddress' => 'Especifique la dirección de correo de este buzón para hacer que las respuestas vegan aquí.',
      'caseDistribution' => '¿Cómo serán asignados a los casos? Asignados directamente a un usuario o al equipo.',
      'assignToUser' => 'Los casos del usuario serán reasignados.',
      'team' => 'Los casos del equipo serán reasignados.',
      'teams' => 'Los correos del equipo serán reasignados.',
      'targetUserPosition' => 'Los Usuarios con una posición específica serán distribuidos en los casos.',
      'addAllTeamUsers' => 'Los correos aparecerán en el buzón de entrada de todos los usuarios de los equipos especificados.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
    ),
    'links' => 
    array (
      'filters' => 'Filtros',
      'emails' => 'Correos',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
      ),
      'caseDistribution' => 
      array (
        '' => 'Ninguno',
        'Direct-Assignment' => 'Asignación directa',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Menos Ocupado',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Crear Cuenta de Correo Electrónico',
      'IMAP' => 'IMAP',
      'Actions' => 'Acciones',
      'Main' => 'Principal',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'No se pudo conectar con el servidor IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Activado',
      'clientId' => 'ID Cliente',
      'clientSecret' => 'Secreto Cliente',
      'redirectUri' => 'Redireccionar URI',
      'apiKey' => 'Llave API',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Mapas de Google',
      'IctBroadcastconfig' => 'ICTBroadcast Config',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Seleccionar una integración en menú',
      'noIntegrations' => 'No hay integraciones disponibles',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Obtener las credenciales de  OAuth 2.0 desde la Consola de Google Developers.</b></p><p>Visita <a href="https://console.developers.google.com/project">Consola Google Developers</a> para obtener las credenciales de  OAuth 2.0 tales como  ID Cliente y Secreto de Cliente que son conocidos por ambos Google y la aplicación EspoCRM.</p>',
      'GoogleMaps' => '
 <p>Obtenga la llave API <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">aquí</a>.</p> ',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Estado',
      'executeTime' => 'Ejecutar a',
      'attempts' => 'Intentos Izquierda',
      'failedAttempts' => 'Intentos Fallidos',
      'serviceName' => 'Servicio',
      'method' => 'Método',
      'scheduledJob' => 'Tarea Programada',
      'data' => 'Datos',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Pendiente',
        'Success' => 'Exitoso',
        'Running' => 'Corriendo',
        'Failed' => 'Falló',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Ancho (%)',
      'link' => 'Enlace',
      'notSortable' => 'No ordenable',
      'align' => 'Alinear',
      'panelName' => 'Nombre del Panel',
      'style' => 'Estilo',
      'sticked' => 'Pegado',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Izquierda',
        'right' => 'Derecha',
      ),
      'style' => 
      array (
        'default' => 'Por Omisión',
        'success' => 'Correcto',
        'danger' => 'Peligro',
        'info' => 'Info',
        'warning' => 'Precaución',
        'primary' => 'Primario',
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Entrada',
      'attachments' => 'Adjuntos',
      'targetType' => 'Objetivo',
      'teams' => 'Equipos',
      'users' => 'Usuarios',
      'portals' => 'Portales',
      'type' => 'Tipo',
      'isGlobal' => 'Is Global',
      'isInternal' => 'Is Internal (for internal users)',
      'related' => 'Related',
      'createdByGender' => 'Created By Gender',
      'data' => 'Data',
      'number' => 'Number',
    ),
    'filters' => 
    array (
      'all' => 'Todos',
      'posts' => 'Entradas',
      'updates' => 'Actualizaciones',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'a mi mismo',
        'users' => 'a usuario(s) en particular',
        'teams' => 'a equipo(s) en particular',
        'all' => 'a todos los usuarios internos',
        'portals' => 'a los usuarios del portal',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Escriba su mensaje aquí',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Roles',
      'isActive' => 'Está Activo',
      'isDefault' => 'Es Valor x/Omisión',
      'tabList' => 'Lista de Tabuladores',
      'quickCreateList' => 'Crear Lista Rápida',
      'companyLogo' => 'Logo',
      'theme' => 'Tema',
      'language' => 'Idioma',
      'dashboardLayout' => 'Diseño del Tablero',
      'dateFormat' => 'Formato de Fecha',
      'timeFormat' => 'Formato de Hora',
      'timeZone' => 'Zona Horaria',
      'weekStart' => 'Primer Día de la Semana',
      'defaultCurrency' => 'Moneda por Omisión',
      'customUrl' => 'URL Personalizado',
      'customId' => 'ID Personalizado',
    ),
    'links' => 
    array (
      'users' => 'Usuarios',
      'portalRoles' => 'Roles',
      'notes' => 'Notas',
      'articles' => 'Artículos de la Base de Conocimientos',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Los Roles del Portal indicados se aplicarán a todos los usuarios del portal',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Crear Portal',
      'User Interface' => 'Interfaz del Usuario',
      'General' => 'General',
      'Settings' => 'Configuración',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
    ),
    'links' => 
    array (
      'users' => 'Usuarios',
    ),
    'tooltips' => 
    array (
    ),
    'labels' => 
    array (
      'Access' => 'Acceder',
      'Create PortalRole' => 'Crear Rol del Portal',
      'Scope Level' => 'Alcance',
      'Field Level' => 'Nivel del Campo',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Crear un Usuario del Portal',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Formato de fecha',
      'timeFormat' => 'Formato de tiempo',
      'timeZone' => 'Zona Horaria',
      'weekStart' => 'Primer día de la semana',
      'thousandSeparator' => 'Separador de miles',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moneda por Omisión',
      'currencyList' => 'Lista de Moneda',
      'language' => 'Idioma',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Puerto',
      'smtpAuth' => 'Autorizar',
      'smtpSecurity' => 'Seguridad',
      'smtpUsername' => 'Nombre de Usuario',
      'emailAddress' => 'Correo Electrónico',
      'smtpPassword' => 'Contraseña',
      'smtpEmailAddress' => 'Correo Electrónico',
      'exportDelimiter' => 'Exportar Delimitador',
      'receiveAssignmentEmailNotifications' => 'Notificaciones por correo sobre asignaciones',
      'receiveMentionEmailNotifications' => 'Notificaciones por correo sobre menciones en publicaciones',
      'receiveStreamEmailNotifications' => 'Notificar por correo las publicaciones y actualizaciones de estátus',
      'autoFollowEntityTypeList' => 'Seguir automaticamente',
      'signature' => 'Firma de correo',
      'dashboardTabList' => 'Lista de Pestañas',
      'defaultReminders' => 'Recordatorios por Omisión',
      'theme' => 'Tema',
      'useCustomTabList' => 'Lista de Pestañas Personalizada',
      'tabList' => 'Lista de Pestañas',
      'emailReplyToAllByDefault' => 'Contestar a todos por omisión',
      'dashboardLayout' => 'Formato del Tablero',
      'emailReplyForceHtml' => 'Responder correo en HTML',
      'doNotFillAssignedUserIfNotRequired' => 'No llenar el campo de \'Usuario Asignado\' si no es obligatorio',
      'followEntityOnStreamPost' => 'Auto-seguir una entidad después de publicar en Seguimiento',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Domingo',
        1 => 'Lunes',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Notificaciones',
      'User Interface' => 'Interfaz de Usuario',
      'SMTP' => 'SMTP',
      'Misc' => 'Misceláneos',
      'Locale' => 'Localización',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'El usuario seguirá automáticamente todos los nuevos registros de los tipos de entidades seleccionadas, verá la información en las actividades y recibirá notificaciones.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'roles' => 'Roles',
      'assignmentPermission' => 'Asignación de permisos',
      'userPermission' => 'Permisos de Usuario',
      'portalPermission' => 'Permisos del Portal',
    ),
    'links' => 
    array (
      'users' => 'Usuarios',
      'teams' => 'Equipos',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Permite restringir la habilidad para asignar registros y enviar mensajes a otros usuarios.

todos - sin restricción

equipo - sólo a sus compañeros

no - sólo a sí mismo',
      'userPermission' => 'Permite restringir la capacidad de los usuarios para ver tareas, calendarios y seguimiento de otros usuarios.

todos  - pueden ver lo de todos

equipo - sólo pueden ver las actividades de su equipo

no - sólo de sí mismo',
      'portalPermission' => 'Define el acceso a la información del portal, capacidad para convertir contactos a usuarios del portal y enviar mensajes a usuarios del portal',
    ),
    'labels' => 
    array (
      'Access' => 'Acceso',
      'Create Role' => 'Crear Rol',
      'Scope Level' => 'Alcance',
      'Field Level' => 'Nivel del Campo',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'sin definir',
        'enabled' => 'activado',
        'disabled' => 'desactivado',
      ),
      'levelList' => 
      array (
        'all' => 'todos',
        'team' => 'equipo',
        'account' => 'cuenta',
        'contact' => 'contacto',
        'own' => 'propio',
        'no' => 'no',
        'yes' => 'si',
        'not-set' => 'sin definir',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Leer',
      'edit' => 'Editar',
      'delete' => 'Borrar',
      'stream' => 'Seguimiento',
      'create' => 'Crear',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Todos los cambios al control de acceso serán aplicados después de limpiar la caché',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estátus',
      'job' => 'Trabajo',
      'scheduling' => 'Programación (crontab anotación)',
    ),
    'links' => 
    array (
      'log' => 'Historial',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Crear Tarea programado',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Limpiar',
        'CheckInboundEmails' => 'Comprobar Correos Entrantes',
        'CheckEmailAccounts' => 'Compruebe cuentas de correo personales',
        'SendEmailReminders' => 'Enviar Recordatorios por Correo',
        'AuthTokenControl' => 'Control del Token de Autorización',
        'SendEmailNotifications' => 'Enviar Notificaciones por Correo',
        'ProcessMassEmail' => 'Enviar Correo Masivo',
        'ControlKnowledgeBaseArticleStatus' => 'Controlar Estátus de la Base de Conocimientos',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Nota: Añada esta línea al archivo crontab para ejecutar trabajos programados de Espo:',
        'mac' => 'Nota: Añada esta línea al archivo crontab para ejecutar trabajos programados de Espo:',
        'windows' => 'Nota: Genere un archivo por lotes con los siguientes comandos para ejecutar trabajos programados de Espo usando tareas programadas de Windows:',
        'default' => 'Nota: Agregar este comando a Cron Job (Tarea Programada):',
      ),
      'status' => 
      array (
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Notación CRONTAB.  Indica la frecuencia de ejecución.

*/5 * * * * - cada 5 minutos

0 */2 * * * - cada 2 horas

30 1 * * * - a la 01:30 diariamente

0 0 1 * * - el primer día del mes',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Estátus',
      'executionTime' => 'Tiempo de Ejecución',
      'target' => 'Blanco',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Usar Caché',
      'dateFormat' => 'Formato de Fecha',
      'timeFormat' => 'Formato de Hora',
      'timeZone' => 'Zona Horaria',
      'weekStart' => 'Primer día de la semana',
      'thousandSeparator' => 'Separador de miles',
      'decimalMark' => 'Separador Decimal',
      'defaultCurrency' => 'Moneda por Omisión',
      'baseCurrency' => 'Moneda Base',
      'currencyRates' => 'Valores Tarifa',
      'currencyList' => 'Lista de Moneda',
      'language' => 'Idioma',
      'companyLogo' => 'Logo Compañia',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Puerto',
      'smtpAuth' => 'Autorizar',
      'smtpSecurity' => 'Seguridad',
      'smtpUsername' => 'Nombre de Usuario',
      'emailAddress' => 'Correo electrónico',
      'smtpPassword' => 'Contraseña',
      'outboundEmailFromName' => 'De (Nombre)',
      'outboundEmailFromAddress' => 'De (Dirección)',
      'outboundEmailIsShared' => 'Es Compartido',
      'recordsPerPage' => 'Registros por Página',
      'recordsPerPageSmall' => 'Registros Por Página (Pequeño)',
      'tabList' => 'Lista de Pestañas',
      'quickCreateList' => 'Crear Lista Rápida',
      'exportDelimiter' => 'Exportar Delimitador',
      'globalSearchEntityList' => 'Lista Búsqueda Global Entidad',
      'authenticationMethod' => 'Método de Autorización',
      'ldapHost' => 'Servidor',
      'ldapPort' => 'Puerto',
      'ldapAuth' => 'Autorizar',
      'ldapUsername' => 'Nombre Completo del Usuario ND',
      'ldapPassword' => 'Contraseña',
      'ldapBindRequiresDn' => 'Requiere ND para relacionarse',
      'ldapBaseDn' => 'ND Base',
      'ldapAccountCanonicalForm' => 'Forma Canónica de la Cuenta',
      'ldapAccountDomainName' => 'Nombre de Dominio de la Cuenta',
      'ldapTryUsernameSplit' => 'Intentar dividir el nombre de Usuario',
      'ldapCreateEspoUser' => 'Crear Usuario en EspoCRM',
      'ldapSecurity' => 'Seguridad',
      'ldapUserLoginFilter' => 'Filtro de Entrada del Usuario',
      'ldapAccountDomainNameShort' => 'Nombre Dominio Corto para la Cuenta',
      'ldapOptReferrals' => 'Referencias validadas',
      'ldapUserNameAttribute' => 'Atributo "Nombre Del Usuario"',
      'ldapUserObjectClass' => 'ObjectClass del Usuario',
      'ldapUserTitleAttribute' => 'Atributo "Título del Usuario"',
      'ldapUserFirstNameAttribute' => 'Atributo "Nombre del Usuario"',
      'ldapUserLastNameAttribute' => 'Atributo "Apellido del Usuario"',
      'ldapUserEmailAddressAttribute' => 'Atributo "Correo del Usuario"',
      'ldapUserTeams' => 'Equipos del Usuario',
      'ldapUserDefaultTeam' => 'Equipo por omisión del Usuario',
      'ldapUserPhoneNumberAttribute' => 'Atributo "Teléfono del Usuario"',
      'exportDisabled' => 'Desactivar Exportación (Solo admin)',
      'assignmentNotificationsEntityList' => 'Entidades a las que se notificará sobre la asignación',
      'assignmentEmailNotifications' => 'Notificaciones sobre la asignación',
      'assignmentEmailNotificationsEntityList' => 'Alcances de las notificaciones por correo de la asignación',
      'streamEmailNotifications' => 'Notificaciones sobre actualizaciones en Seguimiento para usuarios internos',
      'portalStreamEmailNotifications' => 'Notificaciones de actualizaciones en Seguimiento para los usuarios del portal',
      'streamEmailNotificationsEntityList' => 'Alcances de las notificaciones por correo',
      'b2cMode' => 'Modo B2C',
      'avatarsDisabled' => 'Desactivar Avatars',
      'followCreatedEntities' => 'Seguir Endidades Creadas',
      'displayListViewRecordCount' => 'Mostrar Contador Total (en la vista de lista)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Desactivar Temas de Usuarios',
      'emailMessageMaxSize' => 'Tamaño máximo del Correo (MB)',
      'massEmailMaxPerHourCount' => 'Número mäximo de correos enviados por hora',
      'personalEmailMaxPortionSize' => 'Máximo tamaño de la porción de correo para recuperar de una cuenta personal',
      'inboundEmailMaxPortionSize' => 'Máximo tamaño de la porción de correo para recuperar de una cuenta de grupo',
      'maxEmailAccountCount' => 'Máximo número de cuentas de correo personal por usuario',
      'authTokenLifetime' => 'Vida del Token de Autorización (horas)',
      'authTokenMaxIdleTime' => 'Máximo tiempo de inactividad del Token de Autorización (horas)',
      'dashboardLayout' => 'Diseño del Tablero (por omisión)',
      'siteUrl' => 'URL del Sitio',
      'addressPreview' => 'Vista previa de la Dirección',
      'addressFormat' => 'Formato de la Dirección',
      'notificationSoundsDisabled' => 'Desactivar las Notificaciones con Sonido',
      'applicationName' => 'Nombre de la Aplicación',
      'calendarEntityList' => 'Lista de Entidades del Calendario',
      'mentionEmailNotifications' => 'Enviar correos de notificación sobre comentarios publicados',
      'massEmailDisableMandatoryOptOutLink' => 'Desactivar liga de confirmación obligatoria',
      'activitiesEntityList' => 'Lista de Entidades de Seguimiento',
      'historyEntityList' => 'Lista de Entidades del Historial',
      'currencyFormat' => 'Formato Moneda',
      'currencyDecimalPlaces' => 'Decimales en Moneda',
      'aclStrictMode' => 'ACL Strict Mode',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Domingo',
        1 => 'Lunes',
      ),
      'currencyFormat' => 
      array (
        1 => '10 MXP',
        2 => '$10',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'Número de registros a desplegar inicialmente en las vistas',
      'recordsPerPageSmall' => 'Contador de registros en los paneles de relación',
      'outboundEmailIsShared' => 'Permitir a los usuarios enviar mensajes a través de esta SMTP.',
      'followCreatedEntities' => 'Los usuarios seguirán automáticamente los registros que ellos crearon.',
      'emailMessageMaxSize' => 'Todos los correos entrantes que superen un tamaño especificado se omitirán.',
      'authTokenLifetime' => 'Define cuanto tiempo de vida tienen los tokens.
0 - significa que no caduca.',
      'authTokenMaxIdleTime' => 'Define cuándo caduca el Token luego del último acceso.
0 - significa que no caduca.',
      'userThemesDisabled' => 'Si está marcado, los usuarios no podrán seleccionar otro tema',
      'ldapUsername' => 'The full system user DN which allows to search other users. E.g. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan". ',
      'ldapPassword' => 'Contraseña de acceso al servidor LDAP.',
      'ldapAuth' => 'Credenciales de acceso al servidor LDAP.',
      'ldapUserNameAttribute' => 'El atributo para identificar el usuario.  Por ejemplo, "userPrincipalName" o "sAMAcountName" para Active Directory.  "uid" en OpenLDAP.',
      'ldapUserObjectClass' => 'Atributo ObjectClass para buscar usuarios.  Por ejemplo, "person" para AD, "inetOrgPerson" para OpenLDAP.',
      'ldapAccountCanonicalForm' => 'The type of your account canonical form. There are 4 options:<br>- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - the form \'tester\'.<br>- \'Backslash\' - the form \'COMPANY\\tester\'.<br>- \'Principal\' - the form \'tester@company.com\'. ',
      'ldapBindRequiresDn' => 'La opción para formatear el nombre del usuario en forma ND.',
      'ldapBaseDn' => 'La base de datos DN usada para buscar usuarios por omisión.  Por ejemplo, "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'Opción para separar el nombre de usuario del dominio.',
      'ldapOptReferrals' => 'si deben seguirse las referencias del cliente LDAP.',
      'ldapCreateEspoUser' => 'Esta opción permite que EspoCRM genere un usuario del LDAP.',
      'ldapUserFirstNameAttribute' => 'Atributo LDAP utilizado para determinar el nombre del usuario.  Por ejemplo, "givenname".',
      'ldapUserLastNameAttribute' => 'Atributo LDAP usado para determinar el apellido del usuario.  Por ejemplo, "sn".',
      'ldapUserTitleAttribute' => 'Atributo LDAP usado para determinar el título del usuario.  Por ejemplo, "title".',
      'ldapUserEmailAddressAttribute' => 'El atributo LDAP usado para indicar la dirección de correo del usuario.  Por ejemplo, "mail".',
      'ldapUserPhoneNumberAttribute' => 'El atributo LDAP usado para indicar el número de teléfono del usuario.  Por ejemplo, "telephoneNumber".',
      'ldapUserLoginFilter' => 'Filtro que permite restringir los usuarios que pueden usar EspoCRM.  Por ejemplo, "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan". ',
      'ldapAccountDomainName' => 'Dominio utilizado para acceder al servidor LDAP.',
      'ldapAccountDomainNameShort' => 'El dominio corto usado para acceder al servidor LDAP.',
      'ldapUserTeams' => 'Equipos creados por el usuario.  Para ver más, consulte el perfil del usuario.',
      'ldapUserDefaultTeam' => 'Equipo defalut creado por el usuario.  Para ver más, consulte el perfil del usuario.',
      'b2cMode' => 'Por omisión, EspoCRM está configurado para B2B.  Puede cambiarlo a B2C.',
      'currencyDecimalPlaces' => 'Posiciones decimales. Si está vacío, se mostrarán todos los decimales',
      'aclStrictMode' => 'Enabled: Access to scopes will be forbidden if it\'s not specified in roles.

Disabled: Access to scopes will be allowed if it\'s not specified in roles.',
    ),
    'labels' => 
    array (
      'System' => 'Sistema',
      'Locale' => 'Localización',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuración',
      'In-app Notifications' => 'Notificaciones del CRM',
      'Email Notifications' => 'Notificaciones por Correo',
      'Currency Settings' => 'Configuración Moneda',
      'Currency Rates' => 'Tipo de Cambio por Divisa',
      'Mass Email' => 'Correo Masivo',
      'Test Connection' => 'Probar Conexión',
      'Connecting' => 'Conectando...',
      'Activities' => 'Actividades',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'La conexión se ha establecido satisfactoriamente',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'roles' => 'Roles',
      'positionList' => 'Lista de Posiciones',
    ),
    'links' => 
    array (
      'users' => 'Usuarios',
      'notes' => 'Notas',
      'roles' => 'Roles',
      'inboundEmails' => 'Agrupar Cuentas de Correo',
    ),
    'tooltips' => 
    array (
      'roles' => 'Todos los usuarios de este equipo tendrán acceso a la configuración desde los roles seleccionados',
      'positionList' => 'Posiciones disponibles en este equipo. Por ejemplo Vendedor, Gerente.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Crear Equipo',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'body' => 'Cuerpo',
      'entityType' => 'Tipo de Entidad',
      'header' => 'Cabecera',
      'footer' => 'Pié',
      'leftMargin' => 'Margen Izquierdo',
      'topMargin' => 'Margen Superior',
      'rightMargin' => 'Margen Derecho',
      'bottomMargin' => 'Margen Inferior',
      'printFooter' => 'Imprimir Pié',
      'footerPosition' => 'Posición del Pié',
      'variables' => 'Marcadores Disponibles',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Crear Plantilla',
    ),
    'tooltips' => 
    array (
      'footer' => 'Use {pageNumber} para imprimir el número de página.',
      'variables' => 'Copiar/Pegar necesita un marcador para el Encabezado, Cuerpo o Pie.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'userName' => 'Nombre Usuario',
      'title' => 'Título',
      'isAdmin' => 'Es Administrador',
      'defaultTeam' => 'Equipo por Omisión',
      'emailAddress' => 'Correo electrónico',
      'phoneNumber' => 'Teléfono',
      'roles' => 'Roles',
      'portals' => 'Portales',
      'portalRoles' => 'Roles del Portal',
      'teamRole' => 'Posición',
      'password' => 'Contraseña',
      'currentPassword' => 'Contraseña Actual',
      'passwordConfirm' => 'Confirmar Contraseña',
      'newPassword' => 'Nueva Contraseña',
      'newPasswordConfirm' => 'Confirmar Contraseña Nueva',
      'avatar' => 'Avatar',
      'isActive' => 'Está Activo',
      'isPortalUser' => 'Es Usuario del Portal',
      'contact' => 'Contacto',
      'accounts' => 'Cuentas',
      'account' => 'Cuenta (principal)',
      'sendAccessInfo' => 'Enviar al Usuario un correo con su Información de Acceso',
      'portal' => 'Portal',
      'gender' => 'Género',
      'position' => 'Puesto en el equipo',
      'ipAddress' => 'Dirección IP',
      'passwordPreview' => 'Ver la Contraseña',
      'acceptanceStatus' => 'Estatus de Aprobación',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'teams' => 'Equipos',
      'roles' => 'Roles',
      'notes' => 'Notas',
      'portals' => 'Portales',
      'portalRoles' => 'Roles del Portal',
      'contact' => 'Contacto',
      'accounts' => 'Cuentas',
      'account' => 'Cuenta (principal)',
      'tasks' => 'Tareas',
      'targetLists' => 'Lista de Objetivos',
    ),
    'labels' => 
    array (
      'Create User' => 'Crear Usuario',
      'Generate' => 'Generar',
      'Access' => 'Acceso',
      'Preferences' => 'Preferencias',
      'Change Password' => 'Cambiar Contraseña',
      'Teams and Access Control' => 'Equipos y Control de Acceso',
      'Forgot Password?' => '¿Olvidó la Contraseña?',
      'Password Change Request' => 'Solicitar Cambio de Contraseña',
      'Email Address' => 'Correo Electrónico',
      'External Accounts' => 'Cuentas Externas',
      'Email Accounts' => 'Cuentas de Correo',
      'Portal' => 'Portal',
      'Create Portal User' => 'Crear Usuario del Portal',
      'Proceed w/o Contact' => 'Proceder sin Contacto',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Todos los registros creados por este usuario serán relacionados a este equipo por omisión.',
      'userName' => 'Letras a-z, números 0-9 y guiones bajos están permitidos',
      'isAdmin' => 'El usuario administrador puede tener acceso a todo.',
      'isActive' => 'Si lo desmarca, el usuario no podrá iniciar sesión.',
      'teams' => 'Equipos a los que este usuario pertenece. Nivel de control de acceso se hereda de los roles de equipo.',
      'roles' => 'Roles de acceso adicionales. Úselo si el usuario no pertenece a ningún equipo o si necesita ampliar el nivel de control de acceso sólo para este usuario.',
      'portalRoles' => 'Roles adicionales del portal.  Utilícelos para extender el nivel de acceso exclusivamente para este Usuario',
      'portals' => 'Portales a los que este Usuario tiene acceso',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'La Contraseña será enviada al correo electrónico del usuario',
      'accountInfoEmailSubject' => 'Información Cuenta',
      'accountInfoEmailBody' => 'Información de tu cuenta:

Nombre Usuario: {userName}
Contraseña: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Solicitud de Cambio de Contraseña',
      'passwordChangeLinkEmailBody' => 'Puede cambiar su contraseña siguiendo esta liga {link}.  Esta dirección URL única expirará pronto.',
      'passwordChanged' => 'La Contraseña ha sido cambiada',
      'userCantBeEmpty' => 'El nombre de usuario no puede estar vacío',
      'wrongUsernamePasword' => 'Nombre de usuario/contraseña incorrectos',
      'emailAddressCantBeEmpty' => 'La dirección de correo no puede estar vacía',
      'userNameEmailAddressNotFound' => 'Nombre de Usuario/Correo no encontrado',
      'forbidden' => 'Prohibido, por favor intente después',
      'uniqueLinkHasBeenSent' => 'El enlace único ha sido enviado a la dirección de correo electrónico especificada.',
      'passwordChangedByRequest' => 'La contraseña ha sido cambiada.',
      'setupSmtpBefore' => 'Necesita configurar  <a href="{url}">Configuración SMTP</a> para que el sistema pueda enviar contraseñas por correo.',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'No Definido',
        'Male' => 'Masculino',
        'Female' => 'Femenino',
        'Neutral' => 'Neutral',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Sólo mi equipo',
    ),
    'presetFilters' => 
    array (
      'active' => 'Activo',
      'activePortal' => 'Portal Activo',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'website' => 'Sito Web',
      'phoneNumber' => 'Teléfono',
      'billingAddress' => 'Dirección de Facturación',
      'shippingAddress' => 'Dirección de Envío',
      'description' => 'Descripción',
      'sicCode' => 'Código SIC',
      'industry' => 'Industria',
      'type' => 'Tipo',
      'contactRole' => 'Título',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Campaña',
      'targetLists' => 'Listas de Objetivos',
      'targetList' => 'Lista de Objetivos',
      'originalLead' => 'Referencia Original',
    ),
    'links' => 
    array (
      'contacts' => 'Contactos',
      'opportunities' => 'Oportunidades',
      'cases' => 'Casos',
      'documents' => 'Documentos',
      'meetingsPrimary' => 'Reuniones (ampliado)',
      'callsPrimary' => 'Llamadas (ampliado)',
      'tasksPrimary' => 'Tareas (ampliado)',
      'emailsPrimary' => 'Correos (ampliado)',
      'targetLists' => 'Lista de Objetivos',
      'campaignLogRecords' => 'Historial de Campañas',
      'campaign' => 'Campaña',
      'portalUsers' => 'Usuarios del Portal',
      'originalLead' => 'Referencia Original',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Cliente',
        'Investor' => 'Inversor',
        'Partner' => 'Socio',
        'Reseller' => 'Revendedor',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Aeroespacial',
        'Agriculture' => 'Agricultura',
        'Advertising' => 'Publicidad',
        'Apparel & Accessories' => 'Ropa y Accesorios',
        'Architecture' => 'Arquitectura',
        'Automotive' => 'Automotriz',
        'Banking' => 'Banca',
        'Biotechnology' => 'Biotecnolodía',
        'Building Materials & Equipment' => 'Materiales de construcción y equipamiento',
        'Chemical' => 'Química',
        'Construction' => 'Construcción',
        'Computer' => 'Computación',
        'Defense' => 'Defensa',
        'Creative' => 'Creativo',
        'Culture' => 'Cultura',
        'Consulting' => 'Consultando',
        'Education' => 'Educación',
        'Electronics' => 'Electrónicos',
        'Electric Power' => 'Energía eléctrica',
        'Energy' => 'Energía',
        'Entertainment & Leisure' => 'Entretenimiento y Ocio',
        'Finance' => 'Finanzas',
        'Food & Beverage' => 'Alimentación y bebidas',
        'Grocery' => 'Comestibles',
        'Hospitality' => 'Hospitalidad',
        'Healthcare' => 'Cuidado de la Salud',
        'Insurance' => 'Seguros',
        'Legal' => 'Jurídico',
        'Manufacturing' => 'Fabricación',
        'Mass Media' => 'Medios masivos',
        'Mining' => 'Minería',
        'Music' => 'Música',
        'Marketing' => 'Marketing',
        'Publishing' => 'Publicaciones',
        'Petroleum' => 'Petróleo',
        'Real Estate' => 'Bienes Raices',
        'Retail' => 'Menudeo',
        'Shipping' => 'Envio',
        'Service' => 'Servicio',
        'Support' => 'Soporte',
        'Sports' => 'Deportes',
        'Software' => 'Software',
        'Technology' => 'Tecnología',
        'Telecommunications' => 'Telecomunicaciones',
        'Television' => 'Televisión',
        'Testing, Inspection & Certification' => 'Prueba, Inspección y Certificación',
        'Transportation' => 'Transporte',
        'Travel' => 'Travel',
        'Venture Capital' => 'Capital de Riesgo',
        'Wholesale' => 'Compra Total',
        'Water' => 'Agua',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Crear Cuenta',
      'Copy Billing' => 'Copia Facturación',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Clientes',
      'partners' => 'Socios',
      'recentlyCreated' => 'Recientemente Creada',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mes',
      'week' => 'Semana',
      'day' => 'Día',
      'agendaWeek' => 'Semana',
      'agendaDay' => 'Día',
      'timeline' => 'Cronograma',
    ),
    'labels' => 
    array (
      'Today' => 'Hoy',
      'Create' => 'Crear',
      'Shared' => 'Compartido',
      'Add User' => 'Agregar Usuario',
      'current' => 'actual',
      'time' => 'hora',
      'User List' => 'Lista de Usuarios',
      'Manage Users' => 'Administrar Usuarios',
      'View Calendar' => 'View Calendar',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estátus',
      'dateStart' => 'Fecha de Comienzo',
      'dateEnd' => 'Fecha de Finalización',
      'direction' => 'Dirección',
      'duration' => 'Duración',
      'description' => 'Descripción',
      'users' => 'Usuarios',
      'contacts' => 'Contactos',
      'leads' => 'Referencias',
      'reminders' => 'Recordatorios',
      'account' => 'Cuenta',
      'acceptanceStatus' => 'Estátus de Aprobación',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planeadas',
        'Held' => 'Retenida',
        'Not Held' => 'Pendiente',
      ),
      'direction' => 
      array (
        'Outbound' => 'Saliente',
        'Inbound' => 'Entrante',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Ninguno',
        'Accepted' => 'Aprobado',
        'Declined' => 'Rechazado',
        'Tentative' => 'Tentativa',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Marcar como Retenida',
      'setNotHeld' => 'Marcar como Pendiente',
    ),
    'labels' => 
    array (
      'Create Call' => 'Crear Llamada',
      'Set Held' => 'Marcar como Retenida',
      'Set Not Held' => 'Marcar como Pendiente',
      'Send Invitations' => 'Enviar Invitaciones',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planeadas',
      'held' => 'Retenida',
      'todays' => 'De Hoy',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'description' => 'Descripción',
      'status' => 'Estátus',
      'type' => 'Tipo',
      'startDate' => 'Fecha de Inicio',
      'endDate' => 'Fecha de Fin',
      'targetLists' => 'Lista de Objetivos',
      'excludingTargetLists' => 'Lista de Objetivos Excluídos',
      'sentCount' => 'Enviado',
      'openedCount' => 'Abierto',
      'clickedCount' => 'Leídos',
      'optedOutCount' => 'Rechazado',
      'bouncedCount' => 'Rebotados',
      'hardBouncedCount' => 'No Existen',
      'softBouncedCount' => 'No Aceptados',
      'leadCreatedCount' => 'Referencias Creadas',
      'revenue' => 'Ingresos',
      'revenueConverted' => 'ingresos (convertido)',
      'budget' => 'Presupuesto',
      'budgetConverted' => 'Presupuesto (convertido)',
    ),
    'links' => 
    array (
      'targetLists' => 'Lista de Objetivos',
      'excludingTargetLists' => 'Lista de Objetivos Excluídos',
      'accounts' => 'Cuentas',
      'contacts' => 'Contactos',
      'leads' => 'Referencias',
      'opportunities' => 'Oportunidades',
      'campaignLogRecords' => 'Historial',
      'massEmails' => 'Correos Masivos',
      'trackingUrls' => 'Seguimiento a URLs',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Correo electrónico',
        'Web' => 'Web',
        'Television' => 'Televisión',
        'Radio' => 'Radio',
        'Newsletter' => 'Periódico',
        'Mail' => 'Correo',
      ),
      'status' => 
      array (
        'Planning' => 'Planificación',
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
        'Complete' => 'Completada',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Crear Campaña',
      'Target Lists' => 'Lista de Objetivos',
      'Statistics' => 'Estadísticas',
      'hard' => 'duro',
      'soft' => 'suave',
      'Unsubscribe' => 'Cancelar suscripción',
      'Mass Emails' => 'Correos Masivos',
      'Email Templates' => 'Correo Modelo',
      'Unsubscribe again' => 'Cancelar otra vez la suscripción',
      'Subscribe again' => 'Volverse a suscribir',
      'Create Target List' => 'Crear lista de obejtivos',
    ),
    'presetFilters' => 
    array (
      'active' => 'Activo',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Usted ha cancelado la suscripción a nuestra lista de correo.',
      'subscribedAgain' => 'Usted se ha vuelto a suscribir.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Los objetivos que deben recibir los mensajes.',
      'excludingTargetLists' => 'Los objetivos que no deben recibir mensajes.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Acción',
      'actionDate' => 'Fecha',
      'data' => 'Datos',
      'campaign' => 'Campaña',
      'parent' => 'Objetivo',
      'object' => 'Objeto',
      'application' => 'Aplicacion',
      'queueItem' => 'Item de la Lista',
      'stringData' => 'Datos Alfanuméricos',
      'stringAdditionalData' => 'Datos Alfanuméricos Adicionales',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Elemento de la Cola',
      'parent' => 'Padre',
      'object' => 'Objeto',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Enviado',
        'Opened' => 'Abierto',
        'Opted Out' => 'Rechazado',
        'Bounced' => 'Rebotados',
        'Clicked' => 'Leído',
        'Lead Created' => 'Referencias Creadas',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Todos',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Enviado',
      'opened' => 'Abierto',
      'optedOut' => 'Rechazado',
      'bounced' => 'Rebotados',
      'clicked' => 'Leído',
      'leadCreated' => 'Referencia Creada',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Código para insertar en lugar de la URL',
      'campaign' => 'Campaña',
    ),
    'links' => 
    array (
      'campaign' => 'Campaña',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Crear URL de Seguimiento',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'number' => 'Número',
      'status' => 'Estátus',
      'account' => 'Cuenta',
      'contact' => 'Contacto',
      'contacts' => 'Contactos',
      'priority' => 'Prioridad',
      'type' => 'Tipo',
      'description' => 'Descripción',
      'inboundEmail' => 'Cuenta de Correo',
      'lead' => 'Referencia',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Cuenta de Correo',
      'account' => 'Cuenta',
      'contact' => 'Contacto (Primario)',
      'Contacts' => 'Contactos',
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'emails' => 'Correos',
      'articles' => 'Artículos de la Base de Conocimientos',
      'lead' => 'Referencia',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nuevo',
        'Assigned' => 'Asignado',
        'Pending' => 'Pendiente',
        'Closed' => 'Cerrados',
        'Rejected' => 'Rechazado',
        'Duplicate' => 'Duplicar',
      ),
      'priority' => 
      array (
        'Low' => 'Baja',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
      'type' => 
      array (
        'Question' => 'Pregunta',
        'Incident' => 'Incidente',
        'Problem' => 'Problema',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Crear Caso',
      'Close' => 'Cerrar',
      'Reject' => 'Rechazar',
      'Closed' => 'Cerrados',
      'Rejected' => 'Rechazado',
    ),
    'presetFilters' => 
    array (
      'open' => 'Abiertos',
      'closed' => 'Cerrados',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'title' => 'Título',
      'account' => 'Cuenta',
      'accounts' => 'Cuentas',
      'phoneNumber' => 'Teléfono',
      'accountType' => 'Tipo de Cuenta',
      'doNotCall' => 'No Llamar',
      'address' => 'Dirección',
      'opportunityRole' => 'Rol de Oportunidad',
      'accountRole' => 'Título',
      'description' => 'Descripción',
      'campaign' => 'Campaña',
      'targetLists' => 'Lista de Objetivos',
      'targetList' => 'Lista de Objetivos',
      'portalUser' => 'Usuario del Portal',
      'originalLead' => 'Referencia Original',
      'acceptanceStatus' => 'Estatus de Aprobación',
      'accountIsInactive' => 'Account Inactive',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'opportunities' => 'Oportunidades',
      'cases' => 'Casos',
      'targetLists' => 'Lista de Objetivos',
      'campaignLogRecords' => 'Registrar Campaña',
      'campaign' => 'Campaña',
      'account' => 'Cuenta (Primaria)',
      'accounts' => 'Cuentas',
      'casesPrimary' => 'Casos (Primario)',
      'portalUser' => 'Usuario del Portal',
      'originalLead' => 'Referencia Original',
      'documents' => 'Documentos',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Crear Contacto',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Ninguno--',
        'Decision Maker' => 'Tomador de Desiciones',
        'Evaluator' => 'Evaluador',
        'Influencer' => 'Factor de Influencia',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Usuarios del Portal',
      'notPortalUsers' => 'No son Usuarios del Portal',
      'accountActive' => 'Active',
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Crear Documento',
      'Details' => 'Detalles',
    ),
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estátus',
      'file' => 'Archivo',
      'type' => 'Tipo',
      'publishDate' => 'Publicar Fecha',
      'expirationDate' => 'Fecha de Expiración',
      'description' => 'Descripción',
      'accounts' => 'Cuentas',
      'folder' => 'Carpeta',
    ),
    'links' => 
    array (
      'accounts' => 'Cuentas',
      'opportunities' => 'Oportunidades',
      'folder' => 'Carpeta',
      'leads' => 'Referencias',
      'contacts' => 'Contactos',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Activo',
        'Draft' => 'Borrador',
        'Expired' => 'Expirado',
        'Canceled' => 'Cancelado',
      ),
      'type' => 
      array (
        '' => 'Ninguno',
        'Contract' => 'Contrato',
        'NDA' => 'AdC',
        'EULA' => 'EULA',
        'License Agreement' => 'Contrato de Licencia',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Activo',
      'draft' => 'Borrador',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Crear Carpeta de Documentos',
      'Manage Categories' => 'Administrar Carpetas',
      'Documents' => 'Documentos',
    ),
    'links' => 
    array (
      'documents' => 'Documentos',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estátus',
      'target' => 'Objetivo',
      'sentAt' => 'Enviado',
      'attemptCount' => 'Intentos',
      'emailAddress' => 'Correo Electrónico',
      'massEmail' => 'Correo Masivo',
      'isTest' => 'Es una prueba',
    ),
    'links' => 
    array (
      'target' => 'Objetivo',
      'massEmail' => 'Correo Masivo',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Pendiente',
        'Sent' => 'Enviado',
        'Failed' => 'Falló',
        'Sending' => 'Enviando',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Pendiente',
      'sent' => 'Enviado',
      'failed' => 'Falló',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Crear Artículo',
      'Any' => 'Cualquiera',
      'Send in Email' => 'Enviar por Correo',
      'Move Up' => 'Mover Arriba',
      'Move Down' => 'Mover Abajo',
      'Move to Top' => 'Mover al Principio',
      'Move to Bottom' => 'Mover al Final',
    ),
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estátus',
      'type' => 'Tipo',
      'attachments' => 'Datos adjuntos',
      'publishDate' => 'Fecha de Publicación',
      'expirationDate' => 'Fecha de Expiración',
      'description' => 'Descripción',
      'body' => 'Cuerpo',
      'categories' => 'Categorías',
      'language' => 'Idioma',
      'portals' => 'Portales',
    ),
    'links' => 
    array (
      'cases' => 'Casos',
      'opportunities' => 'Oportunidades',
      'categories' => 'Categorías',
      'portals' => 'Portales',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'En Revisión',
        'Draft' => 'Borrador',
        'Archived' => 'Arcivado',
        'Published' => 'Publicado',
      ),
      'type' => 
      array (
        'Article' => 'Artículo',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'El Artículo estará disponible sólo en algunos portales.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Publicado',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Crear Categoría',
      'Manage Categories' => 'Administrar Categorías',
      'Articles' => 'Artículos',
    ),
    'links' => 
    array (
      'articles' => 'Artículos',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Convertido a',
      'Create Lead' => 'Crear Referencia',
      'Convert' => 'Convertir',
      'convert' => 'Convertir',
    ),
    'fields' => 
    array (
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'title' => 'Título',
      'website' => 'Sito Web',
      'phoneNumber' => 'Teléfono',
      'accountName' => 'Nombre de Cuenta',
      'doNotCall' => 'No Llamar',
      'address' => 'Dirección',
      'status' => 'Estátus',
      'source' => 'Fuente',
      'opportunityAmount' => 'Costo de Oportunidad',
      'opportunityAmountConverted' => 'Costo de Oportunidad (convertido)',
      'description' => 'Descripción',
      'createdAccount' => 'Cuenta',
      'createdContact' => 'Contacto',
      'createdOpportunity' => 'Oportunidad',
      'campaign' => 'Campaña',
      'targetLists' => 'Lista de Objetivos',
      'targetList' => 'Lista de Objetivos',
      'industry' => 'Industria',
      'acceptanceStatus' => 'Estatus de Aprobación',
      'opportunityAmountCurrency' => 'Importe de la Oportunidad',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Lista de Objetivos',
      'campaignLogRecords' => 'Registrar Campaña',
      'campaign' => 'Campaña',
      'createdAccount' => 'Cuenta',
      'createdContact' => 'Contacto',
      'createdOpportunity' => 'Oportunidad',
      'cases' => 'Casos',
      'documents' => 'Documentos',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nuevo',
        'Assigned' => 'Asignado',
        'In Process' => 'En Proceso',
        'Converted' => 'Convertidos',
        'Recycled' => 'Reciclado',
        'Dead' => 'Muerto',
      ),
      'source' => 
      array (
        '' => 'Ninguno',
        'Call' => 'Llamada',
        'Email' => 'Correo electrónico',
        'Existing Customer' => 'Cliente Existente',
        'Partner' => 'Socio',
        'Public Relations' => 'Relaciones Públicas',
        'Web Site' => 'Sitio Web',
        'Campaign' => 'Campaña',
        'Other' => 'Otro',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Activo',
      'actual' => 'Actuales',
      'converted' => 'Convertidos',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'storeSentEmails' => 'Almacenar Correos Enviados',
      'startAt' => 'Fecha de Comienzo',
      'fromAddress' => 'De (Dirección)',
      'fromName' => 'De (Nombre)',
      'replyToAddress' => 'Responder a la dirección',
      'replyToName' => 'Responder al Nombre',
      'campaign' => 'Campaña',
      'emailTemplate' => 'Plantilla de Correo',
      'inboundEmail' => 'Cuenta de correo',
      'targetLists' => 'Lista de Objetivos',
      'excludingTargetLists' => 'Lista de Objetivos Excluídos',
      'optOutEntirely' => 'Confirmación Completada',
    ),
    'links' => 
    array (
      'targetLists' => 'Lista de Objetivos',
      'excludingTargetLists' => 'Lista de Objetivos Excluídos',
      'queueItems' => 'Items en cola',
      'campaign' => 'Campaña',
      'emailTemplate' => 'Plantilla de Correo',
      'inboundEmail' => 'Cuenta de correo',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Borrador',
        'Pending' => 'Pendiente',
        'In Process' => 'En Proceso',
        'Complete' => 'Completado',
        'Canceled' => 'Cancelado',
        'Failed' => 'Falló',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Crear correo masivo',
      'Send Test' => 'Enviar prueba',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Seleccione al menos un objetivo.',
      'testSent' => 'Correo(s) de prueba que se enviarán',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Los correos de destinatarios que cancelaron su suscripción serán marcados como rechazados y ya no recibirán correos masivos.',
      'targetLists' => 'Los objetivos que deben recibir los mensajes.',
      'excludingTargetLists' => 'Los objetivos que no deben recibir mensajes.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'complete' => 'Completo',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estátus',
      'dateStart' => 'Fecha de Comienzo',
      'dateEnd' => 'Fecha de Finalización',
      'duration' => 'Duración',
      'description' => 'Descripción',
      'users' => 'Usuarios',
      'contacts' => 'Contactos',
      'leads' => 'Referencias',
      'reminders' => 'Recordatorios',
      'account' => 'Cuenta',
      'acceptanceStatus' => 'Estátus de aprobación',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planeadas',
        'Held' => 'Retenida',
        'Not Held' => 'Pendiente',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Ninguno',
        'Accepted' => 'Aprobado',
        'Declined' => 'Rechazado',
        'Tentative' => 'Tentativa',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Marcar como Retenida',
      'setNotHeld' => 'Marcar como Pendiente',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Crear Reunión',
      'Set Held' => 'Marcar como Retenida',
      'Set Not Held' => 'Marcar como Pendiente',
      'Send Invitations' => 'Enviar Invitaciones',
      'on time' => 'a tiempo',
      'before' => 'antes',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planeadas',
      'held' => 'Retenidas',
      'todays' => 'De Hoy',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'No se ha enviado nada',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'account' => 'Cuenta',
      'stage' => 'Etapa',
      'amount' => 'Cantidad',
      'probability' => 'Probabilidad, %',
      'leadSource' => 'Orígen de la Referencia',
      'doNotCall' => 'No Llamar',
      'closeDate' => 'Fecha de cierre',
      'contacts' => 'Contactos',
      'description' => 'Descripción',
      'amountConverted' => 'Cantidad (convertido)',
      'amountWeightedConverted' => 'Cantidad Ponderada',
      'campaign' => 'Campaña',
      'originalLead' => 'Referencia original',
      'amountCurrency' => 'Importe en Moneda',
      'contactRole' => 'Contact Role',
    ),
    'links' => 
    array (
      'contacts' => 'Contactos',
      'documents' => 'Documentos',
      'campaign' => 'Campaña',
      'originalLead' => 'Referencia original',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospección',
        'Qualification' => 'Calificación',
        'Needs Analysis' => 'Análisis de Necesidades',
        'Value Proposition' => 'Propuesta de Valor',
        'Id. Decision Makers' => 'Id. Tomadores de Decisiones',
        'Perception Analysis' => 'Análisis de la Percepción',
        'Proposal/Price Quote' => 'Cotización con Propuesta/Precio',
        'Negotiation/Review' => 'Negociación/Revisión',
        'Closed Won' => 'Cerrado Ganado',
        'Closed Lost' => 'Cerrado Perdido',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Crear Oportunidad',
    ),
    'presetFilters' => 
    array (
      'open' => 'Abiertos',
      'won' => 'Ganados',
      'lost' => 'Perdido',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'description' => 'Descripción',
      'entryCount' => 'Contador de entrada',
      'campaigns' => 'Campañas',
      'endDate' => 'Fecha de Fin',
      'targetLists' => 'Lista de Objetivos',
      'includingActionList' => 'Incluyendo',
      'excludingActionList' => 'Excluyendo',
    ),
    'links' => 
    array (
      'accounts' => 'Cuentas',
      'contacts' => 'Contactos',
      'leads' => 'Referencias',
      'campaigns' => 'Campañas',
      'massEmails' => 'Correos Masivos',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Correo electrónico',
        'Web' => 'Web',
        'Television' => 'Televisión',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Crear un objetivo de lista',
      'Opted Out' => 'Rechazado',
      'Cancel Opt-Out' => 'Cancelar Confirmación',
      'Opt-Out' => 'Confirmar',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estátus',
      'dateStart' => 'Fecha de Comienzo',
      'dateEnd' => 'Fecha de vencimiento',
      'dateStartDate' => 'Fecha de Inicio (todo el día)',
      'dateEndDate' => 'Fecha de fin (todo el día)',
      'priority' => 'Prioridad',
      'description' => 'Descripción',
      'isOverdue' => 'Atrasado',
      'account' => 'Cuenta',
      'dateCompleted' => 'Fecha de completado',
      'attachments' => 'Adjuntos',
      'reminders' => 'Recordatorios',
    ),
    'links' => 
    array (
      'attachments' => 'Adjuntos',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Sin Empezar',
        'Started' => 'Comenzada',
        'Completed' => 'Completada',
        'Canceled' => 'Cancelada',
        'Deferred' => 'Diferida',
      ),
      'priority' => 
      array (
        'Low' => 'Baja',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Crear Tarea',
      'Complete' => 'Completada',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actuales',
      'completed' => 'Completado',
      'deferred' => 'Diferida',
      'todays' => 'De Hoy',
      'overdue' => 'Atrazadas',
    ),
  ),
);
?>