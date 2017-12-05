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
      'Enabled' => '已启用',
      'Disabled' => '已禁用',
      'System' => '系统',
      'Users' => '用户',
      'Email' => '电子邮件',
      'Data' => '数据',
      'Customization' => '自定义',
      'Available Fields' => '可用的字段',
      'Layout' => '布局',
      'Entity Manager' => '实体管理器',
      'Add Panel' => '添加面板',
      'Add Field' => '添加字段',
      'Settings' => '设置',
      'Scheduled Jobs' => '计划作业',
      'Upgrade' => '更新',
      'Clear Cache' => '清除缓存',
      'Rebuild' => '重建',
      'Teams' => '团队',
      'Roles' => '角色',
      'Portal' => '门户',
      'Portals' => '门户',
      'Portal Roles' => '门户角色',
      'Portal Users' => '门户用户',
      'Outbound Emails' => '邮件发送',
      'Group Email Accounts' => '小组电子邮件帐户',
      'Personal Email Accounts' => '个人电子邮件帐户',
      'Inbound Emails' => '入站电子邮件',
      'Email Templates' => '电子邮件模板',
      'Import' => '导入',
      'Layout Manager' => '布局管理器',
      'User Interface' => '用户界面',
      'Auth Tokens' => '认证令牌',
      'Authentication' => '身份验证',
      'Currency' => '货币',
      'Integrations' => '集成',
      'Extensions' => '扩展',
      'Upload' => '上传',
      'Installing...' => '正在安装',
      'Upgrading...' => '正在更新',
      'Upgraded successfully' => '更新成功',
      'Installed successfully' => '安装成功',
      'Ready for upgrade' => '准备更新',
      'Run Upgrade' => '运行更新',
      'Install' => '安装',
      'Ready for installation' => '准备安装',
      'Uninstalling...' => '正在卸载',
      'Uninstalled' => '已卸载',
      'Create Entity' => '创建实体',
      'Edit Entity' => '编辑实体',
      'Create Link' => '创建链接',
      'Edit Link' => '编辑链接',
      'Notifications' => '通知提醒',
      'Jobs' => '任务',
      'Reset to Default' => '重置为默认',
      'Email Filters' => '电子邮件过滤器',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
    ),
    'layouts' => 
    array (
      'list' => '列表',
      'detail' => '详情',
      'listSmall' => '列表（小）',
      'detailSmall' => '细节（小）',
      'filters' => '搜索过滤器',
      'massUpdate' => '批量更新',
      'relationships' => '关系面板',
      'sidePanelsDetail' => '侧板（细化）',
      'sidePanelsEdit' => '侧板（编辑）',
      'sidePanelsDetailSmall' => '侧面板（小详情）',
      'sidePanelsEditSmall' => '侧面板（小编辑）',
      'detailConvert' => '转换线索',
      'listForAccount' => '列表（帐户）',
    ),
    'fieldTypes' => 
    array (
      'address' => '地址',
      'array' => '数组',
      'foreign' => '国外',
      'duration' => '持续时间',
      'password' => '密码',
      'personName' => '人员姓名',
      'autoincrement' => '自动递增',
      'bool' => '布尔值',
      'currency' => '货币',
      'currencyConverted' => '货币（已转换）',
      'date' => '日期',
      'datetime' => '日期时间',
      'datetimeOptional' => '日期/日期时间',
      'email' => '电子邮件',
      'enum' => '枚举',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => '浮动',
      'int' => 'Int',
      'link' => '链接',
      'linkMultiple' => '链接多个',
      'linkParent' => '链接关联',
      'multienim' => 'Multienum',
      'phone' => '电话',
      'text' => '文本',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => '文件',
      'image' => '图片',
      'multiEnum' => '多枚',
      'attachmentMultiple' => '附件多个',
      'rangeInt' => 'Range Integer',
      'rangeFloat' => '范围浮动',
      'rangeCurrency' => '范围货币',
      'wysiwyg' => '所见即所得',
      'map' => '地图',
      'number' => '数字',
      'colorpicker' => 'Color Picker',
    ),
    'fields' => 
    array (
      'type' => '类型',
      'name' => '姓名',
      'label' => '标签',
      'tooltipText' => '工具提示文本',
      'required' => '需要',
      'default' => '默认',
      'maxLength' => '最大长度',
      'options' => '选项',
      'after' => '后（字段）',
      'before' => '之前（字段）',
      'link' => '链接',
      'field' => '字段',
      'min' => '最小',
      'max' => '最大',
      'translation' => '翻译',
      'previewSize' => '预览大小',
      'noEmptyString' => '无空字符串',
      'defaultType' => '默认类型',
      'seeMoreDisabled' => '禁用文本剪切',
      'entityList' => '实体列表',
      'isSorted' => '被排序（按字母顺序）',
      'audited' => '审计',
      'trim' => '修剪',
      'height' => 'Height（px）',
      'minHeight' => '最小高度（px）',
      'provider' => '提供者',
      'typeList' => '类型列表',
      'rows' => 'textarea的行数',
      'lengthOfCut' => '切割长度',
      'sourceList' => '源列表',
      'prefix' => '称谓',
      'nextNumber' => '下一个数',
      'padLength' => '填充长度',
      'disableFormatting' => '禁用格式',
      'dynamicLogicVisible' => '条件使字段可见',
      'dynamicLogicReadOnly' => '条件使字段只读',
      'dynamicLogicRequired' => '条件使字段可得',
      'dynamicLogicOptions' => '条件选项',
      'probabilityMap' => '阶段概率 (%) ',
      'readOnly' => '只读',
    ),
    'messages' => 
    array (
      'upgradeVersion' => '您的EspoCRM将升级到<strong> {version} </ strong>版本，这可能需要一些时间。',
      'upgradeDone' => '您的EspoCRM已升级到<strong>{version}</strong>版本。',
      'upgradeBackup' => '我们建议在升级之前备份您的EspoCRM文件和数据。',
      'thousandSeparatorEqualsDecimalMark' => '千位分隔符不能与小数点标记相同',
      'userHasNoEmailAddress' => '用户没有电子邮件地址。',
      'selectEntityType' => '在左侧菜单中选择实体类型。',
      'selectUpgradePackage' => '选择升级包',
      'downloadUpgradePackage' => '点击<a href="{url}">这里</a>下载升级包。',
      'selectLayout' => '在左侧菜单中选择所需的布局，然后进行编辑。',
      'selectExtensionPackage' => '选择扩展包',
      'extensionInstalled' => '扩展{name} {version}已安装。',
      'installExtension' => '扩展{name} {version}已准备好进行安装。',
      'uninstallConfirmation' => '你真的要卸载扩展吗？',
    ),
    'descriptions' => 
    array (
      'settings' => '应用程序的系统设置。',
      'scheduledJob' => '由cron执行的作业。',
      'upgrade' => '升级EspoCRM。',
      'clearCache' => '清除所有后端缓存。"',
      'rebuild' => '重建后端和清除缓存。',
      'users' => '用户管理。',
      'teams' => '团队管理。"',
      'roles' => '角色管理。"',
      'portals' => '门户管理。"',
      'portalRoles' => '门户的角色。',
      'portalUsers' => '门户用户。',
      'outboundEmails' => '外发电子邮件的SMTP设置。"',
      'groupEmailAccounts' => '组IMAP电子邮件帐户。电子邮件导入和电子邮件到案例。"',
      'personalEmailAccounts' => '用户电子邮件帐户。',
      'emailTemplates' => '出站电子邮件的模板。"',
      'import' => '从CSV文件导入数据。"',
      'layoutManager' => '自定义布局（列表，详情，编辑，搜索，批量更新）。',
      'entityManager' => '创建自定义实体，编辑已存在的。管理字段和关系。',
      'userInterface' => '配置UI。"',
      'authTokens' => '活动身份验证会话。IP地址和最后访问日期。',
      'authentication' => '验证设置。',
      'currency' => '货币设置和汇率。',
      'extensions' => '安装或卸载扩展程序。',
      'integrations' => '与第三方服务集成。',
      'notifications' => '应用内和电子邮件通知设置。',
      'inboundEmails' => '传入电子邮件的设置。',
      'emailFilters' => '不会导入与指定过滤器匹配的电子邮件。',
      'actionHistory' => 'Log of user actions.',
      'labelManager' => 'Customize application labels.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'X-Small',
        'small' => '小',
        'medium' => '中',
        'large' => '大',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => '河',
      'or' => '或者',
      'not' => '不',
    ),
  ),
  'Attachment' => 
  array (
    'insertFromSourceLabels' => 
    array (
      'Document' => '插入文档',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => '用户',
      'ipAddress' => 'IP地址',
      'lastAccess' => '最近访问日期',
      'createdAt' => '登录日期',
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
      'title' => '标题',
      'dateFrom' => '日期从',
      'dateTo' => '日期到',
      'autorefreshInterval' => '自动刷新间隔',
      'displayRecords' => '显示记录',
      'isDoubleHeight' => 'Height 2x',
      'mode' => '模式',
      'enabledScopeList' => '显示什么',
      'users' => '用户',
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
        'agendaWeek' => '周（议程）',
        'basicWeek' => '周',
        'month' => '月',
        'basicDay' => '日',
        'agendaDay' => '日（议程）',
        'timeline' => '时间轴',
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
      'Field' => '域/字段',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => '等于',
        'notEquals' => '不等于',
        'greaterThan' => '大于',
        'lessThan' => '少于',
        'greaterThanOrEquals' => '大于或者等于',
        'lessThanOrEquals' => '少于或者等于',
        'in' => '在里面',
        'notIn' => '不在里面',
        'inPast' => '在过去/很快',
        'inFuture' => '今后',
        'isToday' => '是今天',
        'isTrue' => '是正确的',
        'isFalse' => '是错误的',
        'isEmpty' => '是空的',
        'isNotEmpty' => '不是空的',
        'contains' => '包含',
        'notContains' => '不包含',
        'has' => '包含',
        'notHas' => '不包含',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => '命名（主题）',
      'parent' => '关联',
      'status' => '状态',
      'dateSent' => '发送日期',
      'from' => '发件人',
      'to' => '收件人',
      'cc' => '抄送',
      'bcc' => '密送',
      'replyTo' => '回复',
      'replyToString' => 'Reply To（String）',
      'isHtml' => '是Html',
      'body' => '正文',
      'subject' => '主题',
      'attachments' => '附件',
      'selectTemplate' => '选择模板',
      'fromEmailAddress' => '发件人地址',
      'toEmailAddresses' => '收件人地址',
      'emailAddress' => '电子邮件地址',
      'deliveryDate' => '邮寄日期',
      'account' => '帐户',
      'users' => '用户',
      'replied' => '已回复',
      'replies' => '回复',
      'isRead' => '已读',
      'isNotRead' => '未读',
      'isImportant' => '重要',
      'isReplied' => '已回复',
      'isNotReplied' => '没有被回复',
      'isUsers' => '是用户的',
      'inTrash' => '在垃圾箱',
      'sentBy' => '被用户已发送',
      'folder' => '文件夹',
      'inboundEmails' => '组账号',
      'emailAccounts' => '个人账号',
      'hasAttachment' => '有附件',
      'assignedUsers' => 'Assigned Users',
    ),
    'links' => 
    array (
      'replied' => '已回复',
      'replies' => '回复',
      'inboundEmails' => '组账户',
      'emailAccounts' => '个人账号',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Sent By',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => '草稿',
        'Sending' => '发送中',
        'Sent' => '发送',
        'Archived' => '存档',
        'Received' => '收到',
        'Failed' => '失败',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => '电子邮件归档',
      'Archive Email' => '电子邮件归档',
      'Compose' => '撰写',
      'Reply' => '回复',
      'Reply to All' => '回复全部',
      'Forward' => '转发',
      'Original message' => '原始信息',
      'Forwarded message' => '转发消息',
      'Email Accounts' => '个人电子邮件帐户',
      'Inbound Emails' => '集团电子邮件帐户',
      'Email Templates' => '电子邮件模板',
      'Send Test Email' => '发送测试电子邮件',
      'Send' => '发送',
      'Email Address' => '电子邮件地址',
      'Mark Read' => '标记为已读',
      'Sending...' => '发送中...',
      'Save Draft' => '保存草稿',
      'Mark all as read' => '标记所有为已读',
      'Show Plain Text' => '显示纯文本',
      'Mark as Important' => '标记为重要',
      'Unmark Importance' => '取消标记重要性',
      'Move to Trash' => '移到废纸篓',
      'Retrieve from Trash' => '从垃圾箱中检索',
      'Move to Folder' => '移动到文件夹',
      'Filters' => '筛选器',
      'Folders' => '文件夹',
      'Create Lead' => '新建线索',
      'Create Contact' => '创建联系人',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => '创建任务',
      'Create Case' => '创建案例',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => '无SMTP设置。{link}。',
      'testEmailSent' => '测试电子邮件已发送',
      'emailSent' => '邮件已发送',
      'savedAsDraft' => '保存为草稿',
    ),
    'presetFilters' => 
    array (
      'sent' => '发送',
      'archived' => '存档',
      'inbox' => '收件箱',
      'drafts' => '草稿箱',
      'trash' => '垃圾箱',
      'important' => '重要的',
    ),
    'massActions' => 
    array (
      'markAsRead' => '标记为已读',
      'markAsNotRead' => '标记为未读',
      'markAsImportant' => '标记为重要',
      'markAsNotImportant' => '取消标记为重要',
      'moveToTrash' => '移到垃圾箱',
      'moveToFolder' => '移动到文件夹',
      'retrieveFromTrash' => '从垃圾箱回收',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'host' => '主办',
      'username' => '用户名',
      'password' => '密码',
      'port' => '港口',
      'monitoredFolders' => '监视的文件夹',
      'ssl' => 'SSL',
      'fetchSince' => '由于取',
      'emailAddress' => '电子邮件地址',
      'sentFolder' => '发送文件夹',
      'storeSentEmails' => '商店发送的电子邮件',
      'keepFetchedEmailsUnread' => '保持抓取的电子邮件未读',
      'emailFolder' => '放入文件夹',
      'useSmtp' => '使用简单邮件传输协议',
      'smtpHost' => '简单邮件传输协议主机',
      'smtpPort' => '简单邮件传输协议端口',
      'smtpAuth' => '简单邮件传输协议授权',
      'smtpSecurity' => '简单邮件传输协议安全',
      'smtpUsername' => '简单邮件传输协议 用户名',
      'smtpPassword' => '简单邮件传输协议 密码',
    ),
    'links' => 
    array (
      'filters' => '过滤器',
      'emails' => '邮箱',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => '活性',
        'Inactive' => '待用',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => '创建的电子邮件帐户',
      'IMAP' => 'IMAP',
      'Main' => '主要',
      'Test Connection' => '测试连接',
      'Send Test Email' => '发送编辑邮件',
      'SMTP' => '简单邮件传输协议',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => '无法连接到IMAP服务器',
      'connectionIsOk' => '连接正常',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => '您可以添加一个“发送”文件夹来同步从外部电子邮件客户端发送的邮件。',
      'storeSentEmails' => '发送的邮件将存储在IMAP服务器上。电子邮件地址字段应该从发送地址的电子邮件的多少。',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => '主',
      'Opted Out' => '选择退出',
      'Invalid' => '无效',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => '从',
      'to' => '至',
      'subject' => '学科',
      'bodyContains' => '正文包含',
      'action' => '活动',
      'isGlobal' => '是全球的',
      'emailFolder' => '文件夹',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => '创建电子邮件过滤器',
      'Emails' => '邮件',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => '忽略',
        'Move to Folder' => '放入文件夹',
      ),
    ),
    'tooltips' => 
    array (
      'name' => '给过滤器一个描述性名称。',
      'subject' => '使用通配符 *:

text* - 以 text开头,
*text* - 包含text,
*text - 以text结尾. ',
      'bodyContains' => '电子邮件的正文包含任何指定的单词或短语。',
      'from' => '电子邮件从指定的地址发送，如果不需要，请留空，您可以使用通配符*。',
      'to' => '电子邮件正在发送到指定的地址。如果不需要，请留空，您可以使用通配符*。',
      'isGlobal' => '把这个筛选器应用到系统中所有的邮件',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => '跳过通知',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => '新建文件夹',
      'Manage Folders' => '管理文件夹',
      'Emails' => '邮箱',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'isHtml' => '是Html',
      'body' => '正文',
      'subject' => '主题',
      'attachments' => '附件',
      'insertField' => '插入字段',
      'oneOff' => '一次性',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => '创建电子邮件模板',
      'Info' => '信息',
    ),
    'messages' => 
    array (
      'infoText' => '可用变量:

{排除地址} &#8211;统一资源定位地址为一个退订链接;

{排除链接} &#8211;一个退订链接',
    ),
    'tooltips' => 
    array (
      'oneOff' => '检查您是否只使用此模板一次，例如批量电子邮件。',
    ),
    'presetFilters' => 
    array (
      'actual' => '实际',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => '字段',
      'Relationships' => '关系',
      'Schedule' => '时间表',
      'Log' => '日志',
      'Formula' => '公式',
    ),
    'fields' => 
    array (
      'name' => '名称',
      'type' => '类型',
      'labelSingular' => '单标签',
      'labelPlural' => '多标签',
      'stream' => '信息流',
      'label' => '标签',
      'linkType' => '链接类型',
      'entityForeign' => '外部实体',
      'linkForeign' => '外部链接',
      'link' => '链接',
      'labelForeign' => '外部标签',
      'sortBy' => '默认顺序（字段）',
      'sortDirection' => '默认顺序（方向）',
      'relationName' => '中间名称',
      'linkMultipleField' => '链接多个字段',
      'linkMultipleFieldForeign' => '外地链接多字段',
      'disabled' => '禁用',
      'textFilterFields' => '文本过滤字段',
      'audited' => '已审核',
      'auditedForeign' => '外部审核',
      'statusField' => '字段状态',
      'beforeSaveCustomScript' => '在保存自定义脚本之前',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => '没有',
        'Base' => '基础',
        'Person' => '人',
        'CategoryTree' => '类别树',
        'Event' => '时间',
        'BasePlus' => '基础加',
        'Company' => '公司',
      ),
      'linkType' => 
      array (
        'manyToMany' => '多对多',
        'oneToMany' => '一对多',
        'manyToOne' => '多对一',
        'parentToChildren' => '关联到子项',
        'childrenToParent' => '关联到父项',
      ),
      'sortDirection' => 
      array (
        'asc' => '上升',
        'desc' => '降序',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => '实体已创建',
      'linkAlreadyExists' => '链接名称冲突。',
      'linkConflict' => '名称冲突：具有相同名称的链接或字段已存在。',
    ),
    'tooltips' => 
    array (
      'statusField' => '此字段的更新记录在信息流中。',
      'textFilterFields' => '文字搜索使用的字段。',
      'stream' => '不论实体是否有信息流。',
      'disabled' => '检查您的系统中是否不需要此实体。',
      'linkAudited' => '在信息流中将记录创建相关记录并链接现有记录。',
      'linkMultipleField' => '链接多字段提供了编辑关系的方便的方式。不要使用它，如果你可以有大量的相关记录。',
      'entityType' => 'Base Plus  - 具有活动，历史和任务面板。活动 - 在“日历和活动”面板中可用。',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Export all fields',
      'fieldList' => '字段列表',
      'format' => 'Format',
      'useCustomFieldList' => '自定义字段列表',
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
      'name' => '名称',
      'version' => '版本',
      'description' => '描述',
      'isInstalled' => '已安装',
    ),
    'labels' => 
    array (
      'Uninstall' => '卸载',
      'Install' => '安装',
    ),
    'messages' => 
    array (
      'uninstalled' => '扩展名{name}已卸载',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => '连接',
      'Connected' => '已连接',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => '动态逻辑',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => '无',
        'javascript: return this.dateTime.getNow(1);' => '现在',
        'javascript: return this.dateTime.getNow(5);' => '现在（5分钟）',
        'javascript: return this.dateTime.getNow(15);' => '现在（15分钟）',
        'javascript: return this.dateTime.getNow(30);' => '现在（30分钟）',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1周',
      ),
      'dateDefault' => 
      array (
        '' => '无',
        'javascript: return this.dateTime.getToday();' => '今天',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1天',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2天',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3天',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4天',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5天',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6天',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7天',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8天',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9天',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10天',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1周',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2周',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3周',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1年',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => '更新将会记录在信息流中。',
      'required' => '字段将是强制性的。不能留空',
      'default' => '值将在创建时默认设置。',
      'min' => '最小可接受的值。',
      'max' => '最大可接受的值。',
      'seeMoreDisabled' => '如果没有检查，那么长的文本将被缩短。',
      'lengthOfCut' => '文字可以在多长时间之前被剪掉。',
      'maxLength' => '最大可接受的文本长度。',
      'before' => '日期值应在指定字段的日期值之前。',
      'after' => '日期值应在指定字段的日期值之后。',
      'readOnly' => '用户不能指定字段值。但可以通过公式计算。',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => '电子邮件',
      'User' => '用户',
      'Team' => '团队',
      'Role' => '角色',
      'EmailTemplate' => '电子邮件模板',
      'EmailAccount' => '个人电子邮件帐户',
      'EmailAccountScope' => '个人电子邮件帐户',
      'OutboundEmail' => '出站电子邮件',
      'ScheduledJob' => '预定作业',
      'ExternalAccount' => '外部帐户',
      'Extension' => '扩展',
      'Dashboard' => '仪表板',
      'InboundEmail' => '组电子邮件帐户',
      'Stream' => '信息流',
      'Import' => '导入',
      'Template' => '模板',
      'Job' => '工作',
      'EmailFilter' => '电子邮件过滤器',
      'Portal' => '门户网站',
      'PortalRole' => '门户角色',
      'Attachment' => '附件',
      'EmailFolder' => '邮件文件夹',
      'PortalUser' => '门户用户',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Record',
      'PasswordChangeRequest' => 'Password Change Request',
      'ActionHistoryRecord' => 'Action History Record',
      'AuthToken' => 'Auth Token',
      'UniqueId' => 'Unique ID',
      'LastViewed' => 'Last Viewed',
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
      'Account' => '单位',
      'Contact' => '联系人',
      'Lead' => '线索',
      'Target' => '目标',
      'Opportunity' => '商机',
      'Meeting' => '会晤',
      'Calendar' => '日历',
      'Call' => '通话',
      'Task' => '任务',
      'Case' => '案件',
      'Document' => '文件',
      'DocumentFolder' => '文档文件夹',
      'Campaign' => '营销活动',
      'TargetList' => '目标列表',
      'MassEmail' => '群发电子邮件',
      'EmailQueueItem' => '电子邮件队列项',
      'CampaignTrackingUrl' => '跟踪网址',
      'Activities' => '活动',
      'KnowledgeBaseArticle' => '知识库文章',
      'KnowledgeBaseCategory' => '知识库类别',
      'CampaignLogRecord' => '营销活动日志记录',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => '电子邮件',
      'User' => '用户',
      'Team' => '小组',
      'Role' => '角色',
      'EmailTemplate' => '电子邮件模板',
      'EmailAccount' => '个人电子邮件帐户',
      'EmailAccountScope' => '个人电子邮件帐户',
      'OutboundEmail' => '出站电子邮件',
      'ScheduledJob' => '计划作业',
      'ExternalAccount' => '外部帐户',
      'Extension' => '扩展',
      'Dashboard' => '仪表板',
      'InboundEmail' => '组电子邮件帐户',
      'Stream' => '信息流',
      'Import' => '导入结果',
      'Template' => '模板',
      'Job' => '工作',
      'EmailFilter' => '电子邮件过滤器',
      'Portal' => '门户',
      'PortalRole' => '门户角色',
      'Attachment' => '附件',
      'EmailFolder' => '邮件文件夹',
      'PortalUser' => '门户用户',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Records',
      'PasswordChangeRequest' => 'Password Change Requests',
      'ActionHistoryRecord' => 'Action History',
      'AuthToken' => 'Auth Tokens',
      'UniqueId' => 'Unique IDs',
      'LastViewed' => 'Last Viewed',
      'Account' => '单位',
      'Contact' => '联系人',
      'Lead' => '线索',
      'Target' => '目标',
      'Opportunity' => '商机',
      'Meeting' => '会晤',
      'Calendar' => '日历',
      'Call' => '通话',
      'Task' => '任务',
      'Case' => '事件',
      'Document' => '文件',
      'DocumentFolder' => '文档文件夹',
      'Campaign' => '营销活动',
      'TargetList' => '目标列表',
      'MassEmail' => '群发电子邮件',
      'EmailQueueItem' => '电子邮件队列项',
      'CampaignTrackingUrl' => '跟踪网址',
      'Activities' => '活动',
      'KnowledgeBaseArticle' => '知识库',
      'KnowledgeBaseCategory' => '知识库类别',
      'CampaignLogRecord' => '营销活动日志记录',
    ),
    'labels' => 
    array (
      'Misc' => '杂项',
      'Merge' => '合并',
      'None' => '没有',
      'Home' => '家',
      'by' => '通过',
      'Saved' => '保存',
      'Error' => '错误',
      'Select' => '选择',
      'Not valid' => '无效',
      'Please wait...' => '请稍候...',
      'Please wait' => '请稍候',
      'Loading...' => '载入中...',
      'Uploading...' => '正在上传...',
      'Sending...' => '正在发送...',
      'Merging...' => '合并...',
      'Merged' => '合并',
      'Removed' => '已移除',
      'Posted' => '发布',
      'Linked' => '链接',
      'Unlinked' => '未链接',
      'Done' => '完成',
      'Access denied' => '拒绝访问',
      'Not found' => '未找到',
      'Access' => '访问',
      'Are you sure?' => '你确定？',
      'Record has been removed' => '记录已删除',
      'Wrong username/password' => '错误的用户名/密码',
      'Post cannot be empty' => '帖子不能为空',
      'Removing...' => '正在移除...',
      'Unlinking...' => '正在取消连结...',
      'Posting...' => '发布...',
      'Username can not be empty!' => '用户名不能为空！',
      'Cache is not enabled' => '缓存未启用',
      'Cache has been cleared' => '缓存已清除',
      'Rebuild has been done' => '重建已经完成',
      'Return to Application' => 'Return to Application',
      'Saving...' => '保存...',
      'Modified' => '改性',
      'Created' => '已创建',
      'Create' => '创建',
      'create' => '创建',
      'Overview' => '概述',
      'Details' => '细节',
      'Add Field' => '添加字段',
      'Add Dashlet' => '添加Dashlet',
      'Filter' => '过滤',
      'Edit Dashboard' => '编辑仪表板',
      'Add' => '加',
      'Add Item' => '新增项目',
      'Reset' => '重置',
      'Menu' => '菜单',
      'More' => '更多',
      'Search' => '搜索',
      'Only My' => '只有我的',
      'Open' => '打开',
      'Admin' => '管理员',
      'About' => '关于',
      'Refresh' => '刷新',
      'Remove' => '移除',
      'Options' => '选项',
      'Username' => '用户名',
      'Password' => '密码',
      'Login' => '登录',
      'Log Out' => '登出',
      'Preferences' => '偏好设置',
      'State' => '省',
      'Street' => '街',
      'Country' => '国家',
      'City' => '市',
      'PostalCode' => '邮政编码',
      'Followed' => '已关注',
      'Follow' => '关注',
      'Followers' => '关注者',
      'Clear Local Cache' => '清除本地缓存',
      'Actions' => '操作',
      'Delete' => '删除',
      'Update' => '更新',
      'Save' => '保存',
      'Edit' => '编辑',
      'View' => '视图',
      'Cancel' => '取消',
      'Apply' => '应用',
      'Unlink' => '取消链接',
      'Mass Update' => '批量更新',
      'Export' => '导出',
      'No Data' => '没有数据',
      'No Access' => '无访问',
      'All' => '所有',
      'Active' => '激活',
      'Inactive' => '待用',
      'Write your comment here' => '在这里写下您的评论',
      'Post' => '岗位',
      'Stream' => '信息流',
      'Show more' => '展示更多',
      'Dashlet Options' => 'Dashlet选项',
      'Full Form' => '完整形式',
      'Insert' => '插',
      'Person' => '人',
      'First Name' => '名字',
      'Last Name' => '姓',
      'Original' => '原版的',
      'You' => '您',
      'you' => '您',
      'change' => '更改',
      'Change' => '更改',
      'Primary' => '主',
      'Save Filter' => '保存过滤器',
      'Administration' => '管理',
      'Run Import' => '运行导入',
      'Duplicate' => '重复',
      'Notifications' => '通知',
      'Mark all read' => '标记所有读',
      'See more' => '查看更多',
      'Today' => '今天',
      'Tomorrow' => '明天',
      'Yesterday' => '昨天',
      'Submit' => '提交',
      'Close' => '关闭',
      'Yes' => '是',
      'No' => '没有',
      'Select All Results' => 'Select All Results',
      'Value' => '值',
      'Current version' => '当前版本',
      'List View' => '列表显示',
      'Tree View' => '树视图',
      'Unlink All' => '全部取消链接',
      'Total' => '总',
      'Print to PDF' => '打印到PDF',
      'Default' => '默认',
      'Number' => '数',
      'From' => '从',
      'To' => '至',
      'Create Post' => '创建帖子',
      'Previous Entry' => '上一条目',
      'Next Entry' => '下一步',
      'View List' => '查看列表',
      'Attach File' => '附加文件',
      'Skip' => '跳过',
      'Attribute' => '属性',
      'Function' => '功能',
      'Self-Assign' => '自分配',
      'Self-Assigned' => '指派给自己',
      'Create InboundEmail' => '创建入站电子邮件',
      'Activities' => '活动',
      'History' => '历史',
      'Attendees' => '参加者',
      'Schedule Meeting' => '安排会晤',
      'Schedule Call' => '计划通话',
      'Compose Email' => '写邮件',
      'Log Meeting' => '会晤会议',
      'Log Call' => '通话记录',
      'Archive Email' => '存档电子邮件',
      'Create Task' => '创建任务',
      'Tasks' => '任务',
    ),
    'messages' => 
    array (
      'pleaseWait' => '请稍候...',
      'posting' => '正在发布...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => '你确定要离开表格吗？',
      'notModified' => '您没有修改记录',
      'duplicate' => '您创建的记录可能已经存在',
      'dropToAttach' => '降到附件',
      'fieldIsRequired' => '{field} is required',
      'fieldShouldBeEmail' => '{field} should be a valid email',
      'fieldShouldBeFloat' => '{field} should be a valid float',
      'fieldShouldBeInt' => '{field} should be a valid integer',
      'fieldShouldBeDate' => '{field} should be a valid date',
      'fieldShouldBeDatetime' => '{field} should be a valid date/time',
      'fieldShouldAfter' => '{field}应该在{otherField}之后',
      'fieldShouldBefore' => '{field}应该在{otherField}之前',
      'fieldShouldBeBetween' => '{field}应在{min}和{max}之间',
      'fieldShouldBeLess' => '{field}应小于{value}',
      'fieldShouldBeGreater' => '{field}应大于{value}',
      'fieldBadPasswordConfirm' => '{field}未正确确认',
      'resetPreferencesDone' => '偏好设置已重置为默认值',
      'confirmation' => '你确定？',
      'unlinkAllConfirmation' => '您确定要取消链接所有相关记录吗？',
      'resetPreferencesConfirmation' => '您确定要将偏好设置重置为默认值吗？',
      'removeRecordConfirmation' => '您确定要删除该记录吗？',
      'unlinkRecordConfirmation' => '您确定要取消链接相关记录吗？',
      'removeSelectedRecordsConfirmation' => '您确定要删除所选记录吗？',
      'massUpdateResult' => '{count}条记录已更新',
      'massUpdateResultSingle' => '{count}记录已更新',
      'noRecordsUpdated' => '没有记录更新',
      'massRemoveResult' => '{count}条记录已删除',
      'massRemoveResultSingle' => '{count}记录已删除',
      'noRecordsRemoved' => '没有记录被删除',
      'clickToRefresh' => '点击刷新',
      'streamPostInfo' => '输入<strong>@用户名</strong> 来提到用户。

可用markdown语法：
`<code>代码</code>`
**<strong>粗体</strong>**
*<em>强调文字</em>*
~<del>删除文字</del>~
> 引用
(链接文本)[url]',
      'writeYourCommentHere' => '在这里写评论',
      'writeMessageToUser' => '写一条消息给{user}',
      'writeMessageToSelf' => '在你的信息流里写条信息',
      'typeAndPressEnter' => '输入并按Enter键',
      'checkForNewNotifications' => '检查新通知',
      'checkForNewNotes' => '检查',
      'internalPost' => '邮件只能被内部用户',
      'internalPostTitle' => 'Post is seen only by internal users',
      'done' => '已做',
      'confirmMassFollow' => '您确定要跟踪选定的记录吗？',
      'confirmMassUnfollow' => '您确定要取消跟踪所选记录吗？',
      'massFollowResult' => '{count} 记录现已被跟踪 ',
      'massUnfollowResult' => '{count} 记录现已被取消跟踪 ',
      'massFollowResultSingle' => '{count} 记录现已被跟踪 ',
      'massUnfollowResultSingle' => '{count} 记录现已被取消跟踪 ',
      'massFollowZeroResult' => '没有任何跟踪',
      'massUnfollowZeroResult' => '没有任何取消跟踪',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => '只有我的',
      'followed' => '关注',
    ),
    'presetFilters' => 
    array (
      'followed' => '已关注',
      'all' => '所有',
    ),
    'massActions' => 
    array (
      'remove' => '删除',
      'merge' => '合并',
      'massUpdate' => '批量更新',
      'export' => '导出',
      'follow' => '跟踪',
      'unfollow' => '取消跟踪',
    ),
    'fields' => 
    array (
      'name' => '名称',
      'firstName' => '名字',
      'lastName' => '姓',
      'salutationName' => '称呼',
      'assignedUser' => '已指派的用户',
      'assignedUsers' => '已指派的用户',
      'emailAddress' => '电子邮件',
      'assignedUserName' => '已指派的用户名',
      'teams' => '团队',
      'createdAt' => '创建于',
      'modifiedAt' => 'Modified At',
      'createdBy' => '创建者',
      'modifiedBy' => '修改者',
      'description' => '描述',
      'address' => '地址',
      'phoneNumber' => '电话',
      'phoneNumberMobile' => '手机（移动）',
      'phoneNumberHome' => '电话（家庭）',
      'phoneNumberFax' => '电话（传真）',
      'phoneNumberOffice' => '电话（办公）',
      'phoneNumberOther' => '电话（其他）',
      'order' => '订购',
      'parent' => '关联',
      'children' => '子',
      'id' => 'ID',
      'billingAddressCity' => '市',
      'billingAddressCountry' => '国家',
      'billingAddressPostalCode' => '邮政编码',
      'billingAddressState' => '州',
      'billingAddressStreet' => '街',
      'billingAddressMap' => '地图',
      'addressCity' => '市',
      'addressStreet' => '街',
      'addressCountry' => '国家',
      'addressState' => '州',
      'addressPostalCode' => '邮政编码',
      'addressMap' => '地图',
      'shippingAddressCity' => '城市（航运）',
      'shippingAddressStreet' => '街（船）',
      'shippingAddressCountry' => '国家（运输）',
      'shippingAddressState' => '国家（运输）',
      'shippingAddressPostalCode' => '邮政编码（航运）',
      'shippingAddressMap' => '地图（航运）',
    ),
    'links' => 
    array (
      'assignedUser' => '已指派的用户',
      'createdBy' => '由...制作',
      'modifiedBy' => '修改者',
      'team' => '团队',
      'roles' => '角色',
      'teams' => '团队',
      'users' => '用户',
      'parent' => '关联',
      'children' => '儿童',
      'contacts' => '联系人',
      'opportunities' => '商机',
      'leads' => '线索',
      'meetings' => '会晤',
      'calls' => '通话',
      'tasks' => '任务',
      'emails' => '电子邮件',
      'accounts' => '客户',
      'cases' => '事件',
      'documents' => '文件',
      'account' => '帐户',
      'opportunity' => '商机',
      'contact' => '联系人',
    ),
    'dashlets' => 
    array (
      'Stream' => '信息流',
      'Emails' => '我的收件箱',
      'Records' => 'Record List',
      'Leads' => '我的线索',
      'Opportunities' => '我的商机',
      'Tasks' => '我的任务',
      'Cases' => '我的案例',
      'Calendar' => '日历',
      'Calls' => '我的通话',
      'Meetings' => '我的会晤',
      'OpportunitiesByStage' => '商机阶段',
      'OpportunitiesByLeadSource' => '源自线索的商机',
      'SalesByMonth' => '按月销售',
      'SalesPipeline' => '销售渠道',
      'Activities' => '我的活动',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity}已分配给您',
      'emailReceived' => '收到电子邮件从{}从',
      'entityRemoved' => '{user} removed {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user}发布在{entityType} {entity}',
      'attach' => '{user} attached on {entityType} {entity}',
      'status' => '{user} updated {field} of {entityType} {entity}',
      'update' => '{user} updated {entityType} {entity}',
      'postTargetTeam' => '{user}发布到团队{target}',
      'postTargetTeams' => '{user}发布到小组{target}',
      'postTargetPortal' => '{user}发布到portal {target}',
      'postTargetPortals' => '{user}发布到门户{target}',
      'postTarget' => '{user}发布到{target}',
      'postTargetYou' => '{user}发布给您',
      'postTargetYouAndOthers' => '{user}发布到{target}，您',
      'postTargetAll' => '{user}发布到所有',
      'postTargetSelf' => '{用户} 自主邮寄',
      'postTargetSelfAndOthers' => '{用户} 邮寄给{目标}和用户他们自己',
      'mentionInPost' => '{user}在{entityType} {entity}中提到{mentioned}',
      'mentionYouInPost' => '{user}在{entityType} {entity}中提及了您',
      'mentionInPostTarget' => '{user}在文章中提到',
      'mentionYouInPostTarget' => '{user}在邮件中将您提到了{target}',
      'mentionYouInPostTargetAll' => '{user}在邮件中提到你所有',
      'mentionYouInPostTargetNoTarget' => '{user}在帖子中提到你',
      'create' => '{user} created {entityType} {entity}',
      'createThis' => '{user} created this {entityType}',
      'createAssignedThis' => '{user} 创建这个 {entityType} 并指派给 {assignee}',
      'createAssigned' => '{user} 创建 {entityType} {entity} 并指派给 {assignee}',
      'createAssignedYou' => '{user} 创建了 {entityType} {entity} 并指派给你',
      'createAssignedThisSelf' => '{user} 创建了 {entityType} 并指派给自己',
      'createAssignedSelf' => ' {user} 创建了 {entityType} {entity} 并指派给自己',
      'assign' => '{user} 指派 {entityType} {entity} 给 {assignee}',
      'assignThis' => '{user} 指派 {entityType} 给 {assignee}',
      'assignYou' => '{user} 指派了 {entityType} {entity} 给你',
      'assignThisVoid' => '{user} 取消了 {entityType} 的指派',
      'assignVoid' => '{user} 取消了 {entityType} {entity} 的指派',
      'assignThisSelf' => '{user} 把 {entityType} 指派给了自己',
      'assignSelf' => '{user} 把 {entityType} {entity} 指派给了自己',
      'postThis' => '{user} posted',
      'attachThis' => '{user} attached',
      'statusThis' => '{user} updated {field}',
      'updateThis' => '{user} updated this {entityType}',
      'createRelatedThis' => '{user} created with {relatedEntityType} {relatedEntity} related to this {entityType}',
      'createRelated' => '{user} created with {relatedEntityType} {relatedEntity} related to {entityType} {entity}',
      'relate' => '{user} linked {relatedEntityType} {relatedEntity} with {entityType} {entity}',
      'relateThis' => '{user} linked {relatedEntityType} {relatedEntity} with this {entityType}',
      'emailReceivedFromThis' => '收到电子邮件从{}从',
      'emailReceivedInitialFromThis' => '从{}从这个{}的EntityType创建收到的电子邮件',
      'emailReceivedThis' => '已收到的电子邮件',
      'emailReceivedInitialThis' => '电子邮件收到此{}的EntityType创建',
      'emailReceivedFrom' => '从{}从收到的电子邮件中，涉及到的EntityType {} {}实体',
      'emailReceivedFromInitial' => '从{从}，{的EntityType} {}实体创建收到的电子邮件',
      'emailReceived' => '收到的电子邮件与{entityType} {entity}有关',
      'emailReceivedInitial' => '收到电子邮件：{entityType} {entity} created',
      'emailReceivedInitialFrom' => '从{从}，{的EntityType} {}实体创建收到的电子邮件',
      'emailSent' => '{通过}发送与{entityType} {entity}相关的电子邮件',
      'emailSentThis' => '{通过}发送电子邮件',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{用户} 邮寄到 {目标} 和他自己',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{用户} 邮寄到 {目标} 和她自己',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'January',
        1 => 'February',
        2 => 'March',
        3 => 'April',
        4 => 'May',
        5 => 'June',
        6 => 'July',
        7 => 'August',
        8 => 'September',
        9 => 'October',
        10 => 'November',
        11 => 'December',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'May',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dec',
      ),
      'dayNames' => 
      array (
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Sun',
        1 => 'Mon',
        2 => 'Tue',
        3 => 'Wed',
        4 => 'Thu',
        5 => 'Fri',
        6 => 'Sat',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Su',
        1 => 'Mo',
        2 => 'Tu',
        3 => 'We',
        4 => 'Th',
        5 => 'Fr',
        6 => 'Sa',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => '先生。',
        'Mrs.' => '太太。',
        'Ms.' => '女士。',
        'Dr.' => '博士',
      ),
      'language' => 
      array (
        'af_ZA' => '南非荷兰语',
        'az_AZ' => '阿塞拜疆',
        'be_BY' => '白俄罗斯语',
        'bg_BG' => '保加利亚语',
        'bn_IN' => '孟加拉',
        'bs_BA' => '波斯尼亚',
        'ca_ES' => '加泰罗尼亚语',
        'cs_CZ' => '捷克语',
        'cy_GB' => '威尔士语',
        'da_DK' => '丹麦语',
        'de_DE' => '德语',
        'el_GR' => '希腊语',
        'en_GB' => '英语（英国）',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => '英语（美国）',
        'es_ES' => '西班牙语（西班牙）',
        'et_EE' => '爱沙尼亚语',
        'eu_ES' => '巴斯克',
        'fa_IR' => '波斯语',
        'fi_FI' => '芬兰',
        'fo_FO' => '法罗语',
        'fr_CA' => '法语（加拿大）',
        'fr_FR' => '法语（法国）',
        'ga_IE' => '爱尔兰',
        'gl_ES' => '加利西亚',
        'gn_PY' => '瓜拉尼',
        'he_IL' => '希伯来语',
        'hi_IN' => '印地语',
        'hr_HR' => '克罗地亚语',
        'hu_HU' => '匈牙利',
        'hy_AM' => '亚美尼亚语',
        'id_ID' => '印度尼西亚',
        'is_IS' => '冰岛的',
        'it_IT' => '意大利语',
        'ja_JP' => '日本',
        'ka_GE' => '格鲁吉亚',
        'km_KH' => '高棉',
        'ko_KR' => '韩语',
        'ku_TR' => '库尔德',
        'lt_LT' => '立陶宛语',
        'lv_LV' => '拉脱维亚',
        'mk_MK' => '马其顿',
        'ml_IN' => '马拉雅拉姆',
        'ms_MY' => '马来语',
        'nb_NO' => '挪威语',
        'nn_NO' => '挪威新手',
        'ne_NP' => '尼泊尔',
        'nl_NL' => '荷兰语',
        'pa_IN' => '旁遮普语',
        'pl_PL' => '抛光',
        'ps_AF' => '普什图语',
        'pt_BR' => '葡萄牙语（巴西）',
        'pt_PT' => '葡萄牙语（葡萄牙）',
        'ro_RO' => '罗马尼亚语',
        'ru_RU' => '俄语',
        'sk_SK' => '斯洛伐克',
        'sl_SI' => '斯洛文尼亚',
        'sq_AL' => '阿尔巴尼亚语',
        'sr_RS' => '塞尔维亚',
        'sv_SE' => '瑞典',
        'sw_KE' => '斯瓦希里语',
        'ta_IN' => '泰米尔语',
        'te_IN' => '泰卢固语',
        'th_TH' => '泰国',
        'tl_PH' => '他加禄语',
        'tr_TR' => '土耳其',
        'uk_UA' => '乌克兰',
        'ur_PK' => '乌尔都语',
        'vi_VN' => '越南语',
        'zh_CN' => '简体中文（中国）',
        'zh_HK' => '繁体中文（香港）',
        'zh_TW' => '繁体中文（台湾）',
      ),
      'dateSearchRanges' => 
      array (
        'on' => '上',
        'notOn' => '不开',
        'after' => '后',
        'before' => '之前',
        'between' => '之间',
        'today' => '今天',
        'past' => '过去',
        'future' => '未来',
        'currentMonth' => '这个月',
        'lastMonth' => '上个月',
        'currentQuarter' => '当前季度',
        'lastQuarter' => '上季度',
        'currentYear' => '今年',
        'lastYear' => '去年',
        'lastSevenDays' => '最近7天',
        'lastXDays' => '最近X天',
        'nextXDays' => '下一个X天',
        'ever' => '永远',
        'isEmpty' => '是空的',
        'olderThanXDays' => '早于X天',
        'afterXDays' => 'X天后',
      ),
      'searchRanges' => 
      array (
        'is' => '是的',
        'isEmpty' => '为空',
        'isNotEmpty' => '不为空',
        'isOneOf' => '是其中之一',
        'isFromTeams' => '来自团队',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => '等于',
        'like' => '就好像 （％）',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => '以。。开始',
        'endsWith' => '结束于',
        'contains' => '包含',
        'notContains' => 'Not Contains',
        'isEmpty' => '是空的',
        'isNotEmpty' => '不空',
        'notEquals' => 'Not Equals',
      ),
      'intSearchRanges' => 
      array (
        'equals' => '等于',
        'notEquals' => '不等于',
        'greaterThan' => '比...更棒',
        'lessThan' => '少于',
        'greaterThanOrEquals' => '大于或等于',
        'lessThanOrEquals' => '小于或等于',
        'between' => '之间',
        'isEmpty' => '是空的',
        'isNotEmpty' => '非空',
      ),
      'autorefreshInterval' => 
      array (
        0 => '无',
        '0.5' => '30秒',
        1 => '1分钟',
        2 => '2分钟',
        5 => '5分钟',
        10 => '10分钟',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => '移动',
        'Office' => '办公室',
        'Fax' => '传真',
        'Home' => '家',
        'Other' => '其他',
      ),
      'reminderTypes' => 
      array (
        'Popup' => '弹出',
        'Email' => '电子邮件',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => '你可以在这里找到翻译：https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => '胆大',
          'italic' => '斜体',
          'underline' => '强调',
          'strike' => '罢工',
          'clear' => '删除字体样式',
          'height' => '线高',
          'name' => '字体系列',
          'size' => '字体大小',
        ),
        'image' => 
        array (
          'image' => '图片',
          'insert' => '插入图像',
          'resizeFull' => '调整大小',
          'resizeHalf' => '调整大小一半',
          'resizeQuarter' => '调整季度',
          'floatLeft' => '左浮',
          'floatRight' => '浮动右',
          'floatNone' => '浮动无',
          'dragImageHere' => '在此处拖动图像',
          'selectFromFiles' => '从文件选择',
          'url' => '图片网址',
          'remove' => '删除图像',
        ),
        'link' => 
        array (
          'link' => '链接',
          'insert' => 'Insert Link',
          'unlink' => '取消链接',
          'edit' => '编辑',
          'textToDisplay' => '要显示的文本',
          'url' => '这个链接到什么URL？',
          'openInNewWindow' => '在新窗口中打开',
        ),
        'video' => 
        array (
          'video' => '视频',
          'videoLink' => '视频链接',
          'insert' => '插入视频',
          'url' => '视频网址？',
          'providers' => '
(YouTube, Vimeo, Vine, Instagram, 或 DailyMotion) ',
        ),
        'table' => 
        array (
          'table' => '表',
        ),
        'hr' => 
        array (
          'insert' => '插入水平规则',
        ),
        'style' => 
        array (
          'style' => '样式',
          'normal' => '正常',
          'blockquote' => '引用',
          'pre' => '码',
          'h1' => '标题1',
          'h2' => '标题2',
          'h3' => '标题3',
          'h4' => '标题4',
          'h5' => '标题5',
          'h6' => '标题6',
        ),
        'lists' => 
        array (
          'unordered' => '无序列表',
          'ordered' => '有序列表',
        ),
        'options' => 
        array (
          'help' => '帮帮我',
          'fullscreen' => '全屏',
          'codeview' => '代码视图',
        ),
        'paragraph' => 
        array (
          'paragraph' => '段',
          'outdent' => 'Outdent',
          'indent' => '缩进',
          'left' => '左对齐',
          'center' => '对中',
          'right' => '对齐',
          'justify' => '对齐',
        ),
        'color' => 
        array (
          'recent' => '最近的颜色',
          'more' => '更多颜色',
          'background' => 'BackColor',
          'foreground' => '字体颜色',
          'transparent' => '透明',
          'setTransparent' => '设置透明',
          'reset' => '重启',
          'resetToDefault' => '重置为默认',
        ),
        'shortcut' => 
        array (
          'shortcuts' => '键盘快捷键',
          'close' => '关闭',
          'textFormatting' => '文本格式化',
          'action' => '行动',
          'paragraphFormatting' => '段落格式',
          'documentStyle' => '文档样式',
        ),
        'history' => 
        array (
          'undo' => '撤消',
          'redo' => '重做',
        ),
      ),
    ),
    'themes' => 
    array (
      'Espo' => '埃斯波',
      'EspoRtl' => 'RTL Espo',
      'Sakura' => '樱花',
      'EspoVertical' => 'Espo w/ 侧边栏',
      'SakuraVertical' => 'Sakura w/ 侧边栏',
      'Violet' => '紫色',
      'VioletVertical' => 'Violet w/ 侧边栏',
      'Hazyblue' => 'Hazyblue',
      'HazyblueVertical' => 'Hazyblue w/ 侧边栏',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => '还原导入',
      'Return to Import' => '返回导入',
      'Run Import' => '运行导入',
      'Back' => '返回',
      'Field Mapping' => '字段映射',
      'Default Values' => '默认值',
      'Add Field' => '添加字段',
      'Created' => '已创建',
      'Updated' => '更新',
      'Result' => '结果',
      'Show records' => '显示记录',
      'Remove Duplicates' => '删除重复',
      'importedCount' => '导入（计数）',
      'duplicateCount' => '重复（计数）',
      'updatedCount' => '更新（计数）',
      'Create Only' => '仅创建',
      'Create and Update' => '创建和更新',
      'Update Only' => '仅更新',
      'Update by' => '更新者',
      'Set as Not Duplicate' => '设置为不重复',
      'File (CSV)' => '文件（CSV）',
      'First Row Value' => '第一行值',
      'Skip' => '跳跃',
      'Header Row Value' => '标题行值',
      'Field' => '领域',
      'What to Import?' => '要导入什么？',
      'Entity Type' => '实体类型',
      'What to do?' => '该怎么办？',
      'Properties' => '属性',
      'Header Row' => '标题行',
      'Person Name Format' => '人名格式',
      'John Smith' => '约翰·史密斯',
      'Smith John' => '史密斯·约翰',
      'Smith, John' => '史密斯，约翰·',
      'Field Delimiter' => '字段分隔符',
      'Date Format' => '日期格式',
      'Decimal Mark' => '十进制标志',
      'Text Qualifier' => '文本限定符',
      'Time Format' => '时间格式',
      'Currency' => '货币',
      'Preview' => '预习',
      'Next' => '下一个',
      'Step 1' => '步骤1',
      'Step 2' => '第2步',
      'Double Quote' => '双报价',
      'Single Quote' => '单引号',
      'Imported' => '导入',
      'Duplicates' => '重复',
      'Skip searching for duplicates' => '跳过搜索重复项',
      'Timezone' => '时区',
    ),
    'messages' => 
    array (
      'utf8' => '应该是UTF-8编码',
      'duplicatesRemoved' => '重复删除',
      'inIdle' => '执行空闲（大数据;通过cron）',
    ),
    'fields' => 
    array (
      'file' => '文件',
      'entityType' => '实体类型',
      'imported' => '导入记录',
      'duplicates' => '重复记录',
      'updated' => '更新记录',
      'status' => '状态',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => '已失败',
        'In Process' => '处理中',
        'Complete' => '完成',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'emailAddress' => '电子邮件地址',
      'team' => '目标团队',
      'status' => '状态',
      'assignToUser' => '分配给用户',
      'host' => '服务器',
      'username' => '用户名',
      'password' => '密码',
      'port' => '端口',
      'monitoredFolders' => '监视文件夹',
      'trashFolder' => '垃圾文件夹',
      'ssl' => 'SSL',
      'createCase' => '创建案例',
      'reply' => '自动回复',
      'caseDistribution' => '案例分发',
      'replyEmailTemplate' => '回复电子邮件模板',
      'replyFromAddress' => '回复地址',
      'replyToAddress' => '回复地址',
      'replyFromName' => '回复名称',
      'targetUserPosition' => '目标用户位置',
      'fetchSince' => 'Fetch Since',
      'addAllTeamUsers' => '对于所有团队用户',
      'teams' => '团队',
    ),
    'tooltips' => 
    array (
      'reply' => '通知他们的电子邮件已收到电子邮件发件人。

 只有一个电子邮件会期间的时间，以防止循环一段时间被发送到特定的收件人。',
      'createCase' => '自动从传入电子邮件创建案例。"',
      'replyToAddress' => '指定此邮箱的电子邮件地址，以便响应到这里。',
      'caseDistribution' => '如何分配案例，直接指派给用户或团队。',
      'assignToUser' => '用户案例将会指派给。',
      'team' => '团队案例将会指派给。',
      'teams' => '团队电子邮件将会指派给。',
      'targetUserPosition' => 'Users with specified position will be distributed with cases.',
      'addAllTeamUsers' => '电子邮件将出现在指定团队的所有用户的“收件箱”中。',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
    ),
    'links' => 
    array (
      'filters' => '过滤器',
      'emails' => '邮箱',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => '活性',
        'Inactive' => '待用',
      ),
      'caseDistribution' => 
      array (
        '' => '没有',
        'Direct-Assignment' => '直接分配',
        'Round-Robin' => '循环',
        'Least-Busy' => '最不忙',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => '创建电子邮件帐户',
      'IMAP' => 'IMAP',
      'Actions' => '操作',
      'Main' => '主要',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => '无法连接到IMAP服务器',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => '启用',
      'clientId' => '客户端ID',
      'clientSecret' => '客户端密钥',
      'redirectUri' => '重定向URI',
      'apiKey' => '接口密匙',
    ),
    'titles' => 
    array (
      'GoogleMaps' => '谷歌地图',
      'IctBroadcastconfig' => 'ICTBroadcast Config',
    ),
    'messages' => 
    array (
      'selectIntegration' => '从菜单中选择一个积分。',
      'noIntegrations' => '没有集成可用。',
    ),
    'help' => 
    array (
      'Google' => '<p> <b>从Google Developers Console获取OAuth 2.0凭据。</ b> </ p> <p>访问<a href ="https://console.developers.google.com/project" > Google Developers Console </a>，以获取Google和EspoCRM应用程序已知的OAuth 2.0凭据，例如客户端ID和客户端密钥。</ p>',
      'GoogleMaps' => '<p>获得应用程序界面密匙 <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">here</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => '状态',
      'executeTime' => '执行At',
      'attempts' => '尝试左',
      'failedAttempts' => '失败尝试',
      'serviceName' => '服务',
      'method' => '方法',
      'scheduledJob' => '计划作业',
      'data' => '数据',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => '有待',
        'Success' => '成功',
        'Running' => '运行',
        'Failed' => '失败',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => '宽度（％）',
      'link' => '链接',
      'notSortable' => '不可排序',
      'align' => '对齐',
      'panelName' => '面板名称',
      'style' => '样式',
      'sticked' => '已贴',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => '剩下',
        'right' => '对',
      ),
      'style' => 
      array (
        'default' => '默认',
        'success' => '成功',
        'danger' => '危险',
        'info' => '信息',
        'warning' => '警告',
        'primary' => '主要',
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => '帖子',
      'attachments' => '附件',
      'targetType' => '目标',
      'teams' => '团队',
      'users' => '用户',
      'portals' => '门户',
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
      'all' => '所有',
      'posts' => '帖子',
      'updates' => '更新',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => '给我自己',
        'users' => '给特殊用户',
        'teams' => '给特殊对',
        'all' => '所有内部门户',
        'portals' => '给门户用户',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => '在这里写信息',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'logo' => '商标',
      'url' => '网址',
      'portalRoles' => '角色',
      'isActive' => '活跃',
      'isDefault' => '是默认值',
      'tabList' => '选项卡列表',
      'quickCreateList' => '快速创建列表',
      'companyLogo' => '商标',
      'theme' => '主题',
      'language' => '语言',
      'dashboardLayout' => '仪表板布局',
      'dateFormat' => '日期格式',
      'timeFormat' => '时间格式',
      'timeZone' => '时区',
      'weekStart' => '每周起始日',
      'defaultCurrency' => '默认货币',
      'customUrl' => '自定义网址',
      'customId' => '用户ID',
    ),
    'links' => 
    array (
      'users' => '用户',
      'portalRoles' => '角色',
      'notes' => '笔记',
      'articles' => '知识库文章',
    ),
    'tooltips' => 
    array (
      'portalRoles' => '指定的门户角色将应用于此门户的所有用户。',
    ),
    'labels' => 
    array (
      'Create Portal' => '创建门户',
      'User Interface' => '用户界面',
      'General' => '一般',
      'Settings' => '设置',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
    ),
    'links' => 
    array (
      'users' => '用户',
    ),
    'tooltips' => 
    array (
    ),
    'labels' => 
    array (
      'Access' => '访问',
      'Create PortalRole' => '创建门户角色',
      'Scope Level' => '范围级别',
      'Field Level' => '现场级',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => '创建门户用户',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => '日期格式',
      'timeFormat' => '时间格式',
      'timeZone' => '时区',
      'weekStart' => '每周始于',
      'thousandSeparator' => '千位分隔符',
      'decimalMark' => '十进制标志',
      'defaultCurrency' => '默认货币',
      'currencyList' => '货币列表',
      'language' => '语言',
      'smtpServer' => '服务器',
      'smtpPort' => '港口',
      'smtpAuth' => '验证',
      'smtpSecurity' => '安全',
      'smtpUsername' => '用户名',
      'emailAddress' => '电子邮件',
      'smtpPassword' => '密码',
      'smtpEmailAddress' => '电子邮件地址',
      'exportDelimiter' => '出口分隔符',
      'receiveAssignmentEmailNotifications' => '任务邮件提醒',
      'receiveMentionEmailNotifications' => '邮寄时提及的邮件提醒',
      'receiveStreamEmailNotifications' => '关于邮寄和更新状态的邮件提醒',
      'autoFollowEntityTypeList' => '自动关注',
      'signature' => '电子邮件签名',
      'dashboardTabList' => '选项卡列表',
      'defaultReminders' => '默认提醒',
      'theme' => '主题',
      'useCustomTabList' => '自定义选项卡列表',
      'tabList' => '选项卡列表',
      'emailReplyToAllByDefault' => '电子邮件回复所有通过默认',
      'dashboardLayout' => '仪表板布局',
      'emailReplyForceHtml' => '超文本语言回复邮件',
      'doNotFillAssignedUserIfNotRequired' => '如果不需要就不用填写指定用户',
      'followEntityOnStreamPost' => '在信息流发布后自动跟踪实体',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => '星期日',
        1 => '星期一',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => '通知',
      'User Interface' => '用户界面',
      'SMTP' => 'SMTP',
      'Misc' => '杂项',
      'Locale' => '语言环境',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => '用户将自动跟随所选实体类型的所有新记录，会看到流中的信息并接收通知。',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'roles' => '角色',
      'assignmentPermission' => '分配许可',
      'userPermission' => '用户权限',
      'portalPermission' => '门户权限',
    ),
    'links' => 
    array (
      'users' => '用户',
      'teams' => '团队',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => '允许限制记录和发布消息分配给其他用户的能力。

所有的 - 没有限制

团队 - 可以分配，只有张贴到队友

否 - 可以分配，只有张贴到自',
      'userPermission' => '允许以限制用户查看活动，日历和其他用户的数据流的能力。

所有 - 可以查看所有

团队 - 可以查看队友的活动只

否 - 无法查看',
      'portalPermission' => '定义为门户网站的信息，将联系人门户网站用户，并发布消息转换为门户用户能力的访问。',
    ),
    'labels' => 
    array (
      'Access' => '访问',
      'Create Role' => '创建角色',
      'Scope Level' => '范围级别',
      'Field Level' => '场级',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => '没有设置',
        'enabled' => '启用',
        'disabled' => '禁用',
      ),
      'levelList' => 
      array (
        'all' => '所有',
        'team' => '球队',
        'account' => '客户',
        'contact' => '联系',
        'own' => '拥有',
        'no' => '没有',
        'yes' => '是',
        'not-set' => '没有设置',
      ),
    ),
    'actions' => 
    array (
      'read' => '读',
      'edit' => '编辑',
      'delete' => '删除',
      'stream' => '信息流',
      'create' => '创建',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => '访问控制中的所有更改将在缓存清除后应用。',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'job' => '工作',
      'scheduling' => '计划',
    ),
    'links' => 
    array (
      'log' => '日志',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => '创建计划作业',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => '清理',
        'CheckInboundEmails' => '检查组电子邮件帐户',
        'CheckEmailAccounts' => '检查个人电子邮件帐户',
        'SendEmailReminders' => '发送电子邮件提醒',
        'AuthTokenControl' => '授权令牌控制',
        'SendEmailNotifications' => '发送邮件通知',
        'ProcessMassEmail' => '发送大量电子邮件',
        'ControlKnowledgeBaseArticleStatus' => '控制知识库文章状态',
      ),
      'cronSetup' => 
      array (
        'linux' => '注意：将此行添加到crontab文件以运行Espo计划作业：',
        'mac' => '注意：将此行添加到crontab文件以运行Espo计划作业：',
        'windows' => '注意：使用以下命令创建批处理文件以使用Windows计划任务运行Espo计划作业：',
        'default' => '注意：将此命令添加到Cron Job（计划任务）：',
      ),
      'status' => 
      array (
        'Active' => '活性',
        'Inactive' => '待用',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'crontab的符号。定义作业运行的频率。

* / 5 * * * *  - 每5分钟

0 * / 2 * * *  - 每2小时

30 1 * * *  - 在01:30每天一次

0 0 1 * *  - 在每月的第一天',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => '状态',
      'executionTime' => '执行时间处理时间',
      'target' => '目标',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => '使用缓存',
      'dateFormat' => '日期格式',
      'timeFormat' => '时间格式',
      'timeZone' => '时区',
      'weekStart' => '每周始于',
      'thousandSeparator' => '千位分隔符',
      'decimalMark' => '十进制标志',
      'defaultCurrency' => '默认货币',
      'baseCurrency' => '基本货币',
      'currencyRates' => '速率值',
      'currencyList' => '货币列表',
      'language' => '语言',
      'companyLogo' => '公司徽标',
      'smtpServer' => '服务器',
      'smtpPort' => '端口',
      'smtpAuth' => '验证',
      'smtpSecurity' => '安全',
      'smtpUsername' => '用户名',
      'emailAddress' => '电子邮件',
      'smtpPassword' => '密码',
      'outboundEmailFromName' => '从名称',
      'outboundEmailFromAddress' => '发件人地址',
      'outboundEmailIsShared' => '是共享',
      'recordsPerPage' => '每页记录',
      'recordsPerPageSmall' => '每页记录（小）',
      'tabList' => '选项卡列表',
      'quickCreateList' => '快速创建列表',
      'exportDelimiter' => '导出分隔符',
      'globalSearchEntityList' => '全局搜索实体列表',
      'authenticationMethod' => '验证方法',
      'ldapHost' => '主办',
      'ldapPort' => '端口',
      'ldapAuth' => '验证',
      'ldapUsername' => '完整用户域名',
      'ldapPassword' => '密码',
      'ldapBindRequiresDn' => '绑定需要域名',
      'ldapBaseDn' => '基本分辨名',
      'ldapAccountCanonicalForm' => '帐户规范表格',
      'ldapAccountDomainName' => '帐户域名',
      'ldapTryUsernameSplit' => '尝试用户名拆分',
      'ldapCreateEspoUser' => '在EspoCRM中创建用户',
      'ldapSecurity' => '安全',
      'ldapUserLoginFilter' => '用户登录过滤器',
      'ldapAccountDomainNameShort' => '帐户域名短',
      'ldapOptReferrals' => 'Opt Referrals',
      'ldapUserNameAttribute' => '用户名属性',
      'ldapUserObjectClass' => '用户对象类',
      'ldapUserTitleAttribute' => '用户标题属性',
      'ldapUserFirstNameAttribute' => '用户名字属性',
      'ldapUserLastNameAttribute' => '用户姓名属性',
      'ldapUserEmailAddressAttribute' => '用户邮箱地址属性',
      'ldapUserTeams' => '用户队',
      'ldapUserDefaultTeam' => '用户默认队',
      'ldapUserPhoneNumberAttribute' => '用户手机号码属性',
      'exportDisabled' => '禁用导出（仅允许管理员）',
      'assignmentNotificationsEntityList' => '实体去提醒任务',
      'assignmentEmailNotifications' => '任务分配提醒',
      'assignmentEmailNotificationsEntityList' => '分配邮件提醒范围',
      'streamEmailNotifications' => '对于在信息流中的内部用户更新提醒',
      'portalStreamEmailNotifications' => '对于在信息流中的门户用户更新提醒',
      'streamEmailNotificationsEntityList' => '邮件通知流范围',
      'b2cMode' => 'B2C模式',
      'avatarsDisabled' => '禁用头像',
      'followCreatedEntities' => '关注创建实体',
      'displayListViewRecordCount' => '显示总计数（在列表视图上）',
      'theme' => '主题',
      'userThemesDisabled' => '禁用用户主题',
      'emailMessageMaxSize' => '电子邮件最大大小（Mb）',
      'massEmailMaxPerHourCount' => '每小时发送的电子邮件的最大计数',
      'personalEmailMaxPortionSize' => '个人帐户提取的最大电子邮件部分大小',
      'inboundEmailMaxPortionSize' => '群组帐户提取的最大电子邮件部分大小',
      'maxEmailAccountCount' => '每个用户的个人电子邮件帐户的最大计数',
      'authTokenLifetime' => 'Auth Token终身（小时）',
      'authTokenMaxIdleTime' => '验证令牌最大空闲时间（小时）',
      'dashboardLayout' => '信息中心布局（默认）',
      'siteUrl' => '网站网址',
      'addressPreview' => '地址预览',
      'addressFormat' => '地址格式',
      'notificationSoundsDisabled' => '禁用通知声音',
      'applicationName' => '应用名称',
      'calendarEntityList' => '日历完整清单',
      'mentionEmailNotifications' => '发送关于发送提醒的邮件提醒',
      'massEmailDisableMandatoryOptOutLink' => '禁用强制选择退出链接',
      'activitiesEntityList' => '活动实体列表',
      'historyEntityList' => '历史实体列表',
      'currencyFormat' => 'Currency Format',
      'currencyDecimalPlaces' => 'Currency Decimal Places',
      'aclStrictMode' => 'ACL Strict Mode',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => '星期日',
        1 => '星期一',
      ),
      'currencyFormat' => 
      array (
        1 => '10 USD',
        2 => '$10',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => '列表视图中最初显示的记录数。',
      'recordsPerPageSmall' => '最初在关系面板中显示的记录数。',
      'outboundEmailIsShared' => '允许用户通过此SMTP发送电子邮件。',
      'followCreatedEntities' => '用户将自动跟随他们创建的记录。',
      'emailMessageMaxSize' => '所有超过指定大小的入站电子邮件都将获取w / o正文和附件。',
      'authTokenLifetime' => '定义长令牌如何存在。
0  - 表示没有到期。',
      'authTokenMaxIdleTime' => '定义多久上次访问令牌可以存在。
0  - 表示没有到期。',
      'userThemesDisabled' => '如果选中，用户将无法选择其他主题。',
      'ldapUsername' => '全系统DN用户允许搜索其他用户。例如 "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan"。',
      'ldapPassword' => '访问轻量级目录访问协议服务器的密码',
      'ldapAuth' => '轻量级目录访问协议服务器的访问凭证',
      'ldapUserNameAttribute' => '识别用户的属性。
E.g. "用户主要名字" or "sAM账户名" 对于活动目录, "uid" for OpenLDAP.',
      'ldapUserObjectClass' => '搜索用户的对象类属性。例如 "人" for AD, "inetOrgPerson" for OpenLDAP.',
      'ldapAccountCanonicalForm' => '您帐户的类型是规范形式。有4个选项：<br>- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - the form \'tester\'.<br>- \'Backslash\' - the form \'COMPANY\\tester\'.<br>- \'Principal\' - the form \'tester@company.com\'. ',
      'ldapBindRequiresDn' => '在域名表格中规定用户名的选项',
      'ldapBaseDn' => '默认的基本DN用于搜索用户 例如 "OU=用户,OU=espocrm,DC=测试, DC=lan".',
      'ldapTryUsernameSplit' => '此选项可以将用户名与域分离',
      'ldapOptReferrals' => '如果 参考应遵循LDAP客户端。',
      'ldapCreateEspoUser' => '这个选项允许EspoCRM去创建来自轻量级目录访问协议的一个用户',
      'ldapUserFirstNameAttribute' => '轻量级目录访问协议属性用来确定用户的姓.例如"名字".',
      'ldapUserLastNameAttribute' => '轻量级目录访问协议属性用来确定用户的名.例如" 序列号".',
      'ldapUserTitleAttribute' => '轻量级目录访问协议属性用来确定用户标题.例如"标题".',
      'ldapUserEmailAddressAttribute' => '轻量级目录访问协议属性用来确定用户的电子邮件地址。例如 "邮件".',
      'ldapUserPhoneNumberAttribute' => '轻量级目录访问协议属性用来确定用户的手机号码。例如 "手机号码".',
      'ldapUserLoginFilter' => '筛选器可以禁止使用的EspoCRM用户操作 例如 "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => '被用于授权访问轻量级目录访问协议服务器的域',
      'ldapAccountDomainNameShort' => '短域被用于授权访问轻量级目录访问协议服务器',
      'ldapUserTeams' => '已创建用户的团队。更多信息,见用户配置文件',
      'ldapUserDefaultTeam' => '已创建用户的默认团队。更多信息,见用户配置文件',
      'b2cMode' => '默认情况下，EspoCRM适用于B2B。您可以将其切换到B2C。',
      'currencyDecimalPlaces' => 'Number of decimal places. If empty then all nonempty decimal places will be displayed.',
      'aclStrictMode' => 'Enabled: Access to scopes will be forbidden if it\'s not specified in roles.

Disabled: Access to scopes will be allowed if it\'s not specified in roles.',
    ),
    'labels' => 
    array (
      'System' => '系统',
      'Locale' => '语言环境',
      'SMTP' => 'SMTP',
      'Configuration' => '组态',
      'In-app Notifications' => '应用内通知',
      'Email Notifications' => '电子邮件通知',
      'Currency Settings' => '货币设置',
      'Currency Rates' => '货币汇率',
      'Mass Email' => '群发电子邮件',
      'Test Connection' => '测试连接',
      'Connecting' => '连接中',
      'Activities' => '活动',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => '连接已成功建立',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'roles' => '角色',
      'positionList' => '位置列表',
    ),
    'links' => 
    array (
      'users' => '用户',
      'notes' => '笔记',
      'roles' => '角色',
      'inboundEmails' => '组电子邮件帐户',
    ),
    'tooltips' => 
    array (
      'roles' => '访问角色。此团队的用户从选定的角色获取访问控制级别。',
      'positionList' => '在这个团队中可用的位置。例如。销售员，经理。',
    ),
    'labels' => 
    array (
      'Create Team' => '创建团队',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'body' => '正文',
      'entityType' => '实体类型',
      'header' => '标题',
      'footer' => '页脚',
      'leftMargin' => '左边距',
      'topMargin' => '顶部margin',
      'rightMargin' => '右边距',
      'bottomMargin' => '底部边缘',
      'printFooter' => '打印页脚',
      'footerPosition' => '页脚位置',
      'variables' => 'Available Placeholders',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => '创建模板',
    ),
    'tooltips' => 
    array (
      'footer' => '使用{pageNumber}打印页码。',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'userName' => '用户名',
      'title' => '标题',
      'isAdmin' => '是管理员',
      'defaultTeam' => '默认团队',
      'emailAddress' => '电子邮件',
      'phoneNumber' => '电话',
      'roles' => '角色',
      'portals' => '门户',
      'portalRoles' => '门户角色',
      'teamRole' => '位置',
      'password' => '密码',
      'currentPassword' => '当前密码',
      'passwordConfirm' => '确认密码',
      'newPassword' => '新密码',
      'newPasswordConfirm' => '确认新密码',
      'avatar' => '头像',
      'isActive' => '活跃',
      'isPortalUser' => '是门户用户',
      'contact' => '联系人',
      'accounts' => '客户',
      'account' => '帐户（小学）',
      'sendAccessInfo' => '使用访问信息向用户发送电子邮件',
      'portal' => '门户网站',
      'gender' => '性别',
      'position' => '在队中的位置',
      'ipAddress' => 'IP Address',
      'passwordPreview' => 'Password Preview',
      'acceptanceStatus' => 'Acceptance Status',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'teams' => '团队',
      'roles' => '角色',
      'notes' => '笔记',
      'portals' => '门户',
      'portalRoles' => '门户角色',
      'contact' => '联系人',
      'accounts' => '客户',
      'account' => '帐户（小学）',
      'tasks' => '任务',
      'targetLists' => '目标列表',
    ),
    'labels' => 
    array (
      'Create User' => '创建用户',
      'Generate' => '生成',
      'Access' => '访问',
      'Preferences' => '优先',
      'Change Password' => '更改密码',
      'Teams and Access Control' => '团队和访问控制',
      'Forgot Password?' => '忘记密码？',
      'Password Change Request' => '密码更改请求',
      'Email Address' => '电子邮件地址',
      'External Accounts' => '外部帐户',
      'Email Accounts' => '电子邮件帐户',
      'Portal' => '门户',
      'Create Portal User' => '创建门户用户',
      'Proceed w/o Contact' => 'Proceed w/o Contact',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => '默认情况下，此用户创建的所有记录都将与此小组相关。',
      'userName' => '字母A-Z，数字0-9，点，连字符，@ -signs和下划线是允许的。',
      'isAdmin' => '管理员用户可以访问一切。',
      'isActive' => '如果取消选中则用户将无法登录。',
      'teams' => '该用户所属的团队。访问控制级别从团队角色继承。',
      'roles' => '其他访问角色。如果用户不属于任何团队，或者需要为此用户专门扩展访问控制级别，请使用此角色。',
      'portalRoles' => '其他门户网站角色。使用它来为此用户专门扩展访问控制级别。',
      'portals' => '此用户有权访问的门户。"',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => '密码将发送到用户的电子邮件地址。',
      'accountInfoEmailSubject' => 'EspoCRM用户访问信息',
      'accountInfoEmailBody' => '您的访问信息：

用户名：{userName}
密码：{password}

{siteUrl} ',
      'passwordChangeLinkEmailSubject' => '更改密码请求',
      'passwordChangeLinkEmailBody' => 'You can change your password by following this link {link}. This unique URL will be expired soon.',
      'passwordChanged' => '密码已被更改',
      'userCantBeEmpty' => '用户名不能为空',
      'wrongUsernamePasword' => '用户名/密码错误',
      'emailAddressCantBeEmpty' => '电子邮件地址不能为空',
      'userNameEmailAddressNotFound' => '用户名/电子邮件地址未找到',
      'forbidden' => '禁止访问，请稍后再试',
      'uniqueLinkHasBeenSent' => '唯一网址已发送到指定的电子邮件地址。',
      'passwordChangedByRequest' => '密码已被更改。',
      'setupSmtpBefore' => '您需要设置<a href="{url}"> SMTP设置</a>，以使系统能够在电子邮件中发送密码。',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => '未设置',
        'Male' => '男士',
        'Female' => '女士',
        'Neutral' => '中立的',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => '只有我的团队',
    ),
    'presetFilters' => 
    array (
      'active' => '活性',
      'activePortal' => '门户活动',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'emailAddress' => '电子邮件',
      'website' => '网站',
      'phoneNumber' => '电话',
      'billingAddress' => '帐单地址',
      'shippingAddress' => '邮寄地址',
      'description' => '描述',
      'sicCode' => 'Sic代码',
      'industry' => '行业',
      'type' => '类型',
      'contactRole' => '标题',
      'contactIsInactive' => 'Inactive',
      'campaign' => '营销活动',
      'targetLists' => '目标列表',
      'targetList' => '目标列表',
      'originalLead' => '原始线索',
    ),
    'links' => 
    array (
      'contacts' => '联系人',
      'opportunities' => '商机',
      'cases' => '案例',
      'documents' => '文件',
      'meetingsPrimary' => '会晤（已举行）',
      'callsPrimary' => '通话（已展开）',
      'tasksPrimary' => '任务（展开）',
      'emailsPrimary' => '电子邮件（展开）',
      'targetLists' => '目标列表',
      'campaignLogRecords' => '营销活动日志',
      'campaign' => '营销活动',
      'portalUsers' => '门户网站用户',
      'originalLead' => '原始线索',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => '顾客',
        'Investor' => '投资者',
        'Partner' => '伙伴',
        'Reseller' => '经销商',
      ),
      'industry' => 
      array (
        'Aerospace' => '航天',
        'Agriculture' => '农业',
        'Advertising' => '广告',
        'Apparel & Accessories' => '服饰与配饰',
        'Architecture' => '建筑',
        'Automotive' => '汽车',
        'Banking' => '银行业',
        'Biotechnology' => '生物技术',
        'Building Materials & Equipment' => '建筑材料与设备',
        'Chemical' => '化学',
        'Construction' => '施工',
        'Computer' => '电脑',
        'Defense' => '国防',
        'Creative' => '创意',
        'Culture' => '文化',
        'Consulting' => '咨询',
        'Education' => '教育',
        'Electronics' => '电子产品',
        'Electric Power' => '电力',
        'Energy' => '能源',
        'Entertainment & Leisure' => '娱乐休闲',
        'Finance' => '金融',
        'Food & Beverage' => '食品与饮料',
        'Grocery' => '杂货',
        'Hospitality' => '医药',
        'Healthcare' => '卫生保健',
        'Insurance' => '保险',
        'Legal' => '法律',
        'Manufacturing' => '制造业',
        'Mass Media' => '大众传媒',
        'Mining' => '矿产',
        'Music' => '音乐',
        'Marketing' => '百货',
        'Publishing' => '出版',
        'Petroleum' => '石油',
        'Real Estate' => '房地产',
        'Retail' => '零售',
        'Shipping' => '运输',
        'Service' => '服务',
        'Support' => '支持',
        'Sports' => '体育',
        'Software' => '软件',
        'Technology' => '技术',
        'Telecommunications' => '电信',
        'Television' => '电视',
        'Testing, Inspection & Certification' => '检测',
        'Transportation' => '运输',
        'Travel' => 'Travel',
        'Venture Capital' => '风险投资',
        'Wholesale' => '批发',
        'Water' => '水利',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => '创建帐号',
      'Copy Billing' => '复制帐单',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => '顾客',
      'partners' => '伙伴',
      'recentlyCreated' => '最近已创建的',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => '月',
      'week' => '周',
      'day' => '天',
      'agendaWeek' => '周',
      'agendaDay' => '天',
      'timeline' => '时间线',
    ),
    'labels' => 
    array (
      'Today' => '今天',
      'Create' => '创建',
      'Shared' => '共享',
      'Add User' => '添加用户',
      'current' => '当前',
      'time' => '时间',
      'User List' => '用户列表',
      'Manage Users' => '管理用户',
      'View Calendar' => 'View Calendar',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'parent' => '关联',
      'status' => '状态',
      'dateStart' => '起始日期',
      'dateEnd' => '日期结束',
      'direction' => '方向',
      'duration' => '持续时间',
      'description' => '描述',
      'users' => '用户',
      'contacts' => '联系人',
      'leads' => '线索',
      'reminders' => '提醒',
      'account' => '客户',
      'acceptanceStatus' => '接受状态',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => '已计划',
        'Held' => '已进行',
        'Not Held' => '未进行',
      ),
      'direction' => 
      array (
        'Outbound' => '呼出',
        'Inbound' => '呼入',
      ),
      'acceptanceStatus' => 
      array (
        'None' => '无',
        'Accepted' => '接受',
        'Declined' => '拒绝',
        'Tentative' => '暂缓',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => '设为进行',
      'setNotHeld' => '设为未进行',
    ),
    'labels' => 
    array (
      'Create Call' => '创建通话',
      'Set Held' => '设为举行',
      'Set Not Held' => '设为未举行',
      'Send Invitations' => '发送邀请',
    ),
    'presetFilters' => 
    array (
      'planned' => '已计划',
      'held' => '已进行',
      'todays' => '今天的',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'description' => '描述',
      'status' => '状态',
      'type' => '类型',
      'startDate' => '开始日期',
      'endDate' => '结束日期',
      'targetLists' => '目标列表',
      'excludingTargetLists' => '剔除目标列表',
      'sentCount' => '发送',
      'openedCount' => '开业',
      'clickedCount' => '点击',
      'optedOutCount' => '选择退出',
      'bouncedCount' => '退回',
      'hardBouncedCount' => '硬弹跳',
      'softBouncedCount' => '软弹跳',
      'leadCreatedCount' => '已创建的线索',
      'revenue' => '收入',
      'revenueConverted' => '收入（转换）',
      'budget' => '预算',
      'budgetConverted' => '预算（转换）',
    ),
    'links' => 
    array (
      'targetLists' => '目标列表',
      'excludingTargetLists' => '剔除目标列表',
      'accounts' => '帐号',
      'contacts' => '联系人',
      'leads' => '线索',
      'opportunities' => '商机',
      'campaignLogRecords' => '日志',
      'massEmails' => '群发电子邮件',
      'trackingUrls' => '追踪网址',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => '电子邮件',
        'Web' => '网址',
        'Television' => '电视',
        'Radio' => '无线电',
        'Newsletter' => '通讯',
        'Mail' => '邮件',
      ),
      'status' => 
      array (
        'Planning' => '规划',
        'Active' => '活性',
        'Inactive' => '非活动',
        'Complete' => '完成',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => '创建营销活动',
      'Target Lists' => '目标列表',
      'Statistics' => '统计',
      'hard' => '硬',
      'soft' => '柔软的',
      'Unsubscribe' => '取消订阅',
      'Mass Emails' => '群发电子邮件',
      'Email Templates' => '电子邮件模板',
      'Unsubscribe again' => '再次退订',
      'Subscribe again' => '再次订阅',
      'Create Target List' => '创建目标列表',
    ),
    'presetFilters' => 
    array (
      'active' => '活性',
    ),
    'messages' => 
    array (
      'unsubscribed' => '您已取消订阅我们的邮寄名单。',
      'subscribedAgain' => '你订阅了',
    ),
    'tooltips' => 
    array (
      'targetLists' => '目标应该接收的消息。',
      'excludingTargetLists' => '目标不应该接收消息。',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => '行动',
      'actionDate' => '日期',
      'data' => '数据',
      'campaign' => '营销活动',
      'parent' => '目标',
      'object' => '目的',
      'application' => '应用',
      'queueItem' => '队列项',
      'stringData' => 'String Data',
      'stringAdditionalData' => '字符串附加数据',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => '队列项',
      'parent' => '关联',
      'object' => '目的',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => '发送',
        'Opened' => '开业',
        'Opted Out' => '选择退出',
        'Bounced' => '退回',
        'Clicked' => '点击',
        'Lead Created' => '已创建的线索',
      ),
    ),
    'labels' => 
    array (
      'All' => '所有',
    ),
    'presetFilters' => 
    array (
      'sent' => '发送',
      'opened' => '打开',
      'optedOut' => '选择退出',
      'bounced' => '反弹',
      'clicked' => '点击',
      'leadCreated' => '已创建的线索',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => '网址',
      'urlToUse' => '要插入代码而不是网址',
      'campaign' => '营销活动',
    ),
    'links' => 
    array (
      'campaign' => '营销活动',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => '创建跟踪网址',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'number' => '数',
      'status' => '状态',
      'account' => '帐户',
      'contact' => '联系人',
      'contacts' => '联系人',
      'priority' => '优先',
      'type' => '类型',
      'description' => '描述',
      'inboundEmail' => '入站邮件',
      'lead' => '线索',
    ),
    'links' => 
    array (
      'inboundEmail' => '入站电子邮件',
      'account' => '帐户',
      'contact' => '联系人（主）',
      'Contacts' => '联系人',
      'meetings' => '会晤',
      'calls' => '通话',
      'tasks' => '任务',
      'emails' => '电子邮件',
      'articles' => '知识库文章',
      'lead' => '线索',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => '新',
        'Assigned' => '已指派',
        'Pending' => '待定',
        'Closed' => '关闭',
        'Rejected' => '拒绝',
        'Duplicate' => '重复',
      ),
      'priority' => 
      array (
        'Low' => '低',
        'Normal' => '正常',
        'High' => '高',
        'Urgent' => '紧急',
      ),
      'type' => 
      array (
        'Question' => '询问',
        'Incident' => '事件',
        'Problem' => '问题',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => '创建案例',
      'Close' => '关',
      'Reject' => '拒绝',
      'Closed' => '关闭',
      'Rejected' => '拒绝',
    ),
    'presetFilters' => 
    array (
      'open' => '打开',
      'closed' => '关闭',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'emailAddress' => '电子邮件',
      'title' => '标题',
      'account' => '帐户',
      'accounts' => '客户',
      'phoneNumber' => '电话',
      'accountType' => '帐户类型',
      'doNotCall' => '不要电联',
      'address' => '地址',
      'opportunityRole' => '商机角色',
      'accountRole' => '标题',
      'description' => '描述',
      'campaign' => '营销活动',
      'targetLists' => '目标列表',
      'targetList' => '目标列表',
      'portalUser' => '门户网站用户',
      'originalLead' => '原始线索',
      'acceptanceStatus' => 'Acceptance Status',
      'accountIsInactive' => 'Account Inactive',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'opportunities' => '商机',
      'cases' => '案例',
      'targetLists' => '目标列表',
      'campaignLogRecords' => '营销活动日志',
      'campaign' => '营销活动',
      'account' => '帐户（主要）',
      'accounts' => '客户',
      'casesPrimary' => '案例（主要）',
      'portalUser' => '门户用户',
      'originalLead' => '原始线索',
      'documents' => '文件',
    ),
    'labels' => 
    array (
      'Create Contact' => '建立联系',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '- 没有 - ',
        'Decision Maker' => '决策者',
        'Evaluator' => '评估者',
        'Influencer' => '影响者',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => '门户用户',
      'notPortalUsers' => '不是门户用户',
      'accountActive' => 'Active',
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => '创建文档',
      'Details' => '细节',
    ),
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'file' => '文件',
      'type' => '类型',
      'publishDate' => '发布日期',
      'expirationDate' => '截止日期',
      'description' => '描述',
      'accounts' => '客户
',
      'folder' => '夹',
    ),
    'links' => 
    array (
      'accounts' => '客户
',
      'opportunities' => '商机',
      'folder' => '夹',
      'leads' => '线索',
      'contacts' => '联系人',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => '活性',
        'Draft' => '草案',
        'Expired' => '已过期',
        'Canceled' => '取消',
      ),
      'type' => 
      array (
        '' => '没有',
        'Contract' => '合同',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => '许可协议',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => '活性',
      'draft' => '草案',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => '创建文档文件夹',
      'Manage Categories' => '管理文件夹',
      'Documents' => '文件',
    ),
    'links' => 
    array (
      'documents' => '文件',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'target' => '目标',
      'sentAt' => '发送日期',
      'attemptCount' => '尝试',
      'emailAddress' => '电子邮件地址',
      'massEmail' => '群发电子邮件',
      'isTest' => '是测试',
    ),
    'links' => 
    array (
      'target' => '目标',
      'massEmail' => '群发电子邮件',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => '有待',
        'Sent' => '发送',
        'Failed' => '失败',
        'Sending' => '发送中',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => '有待',
      'sent' => '发送',
      'failed' => '失败',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => '创建文章',
      'Any' => '任何',
      'Send in Email' => '在电子邮件中发送',
      'Move Up' => '提升',
      'Move Down' => '下降',
      'Move to Top' => '移到顶部',
      'Move to Bottom' => '移到底部',
    ),
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'type' => '类型',
      'attachments' => '附件',
      'publishDate' => '发布日期',
      'expirationDate' => '截止日期',
      'description' => '描述',
      'body' => '身体',
      'categories' => '分类',
      'language' => '语言',
      'portals' => '门户',
    ),
    'links' => 
    array (
      'cases' => '案例',
      'opportunities' => '商机',
      'categories' => '分类',
      'portals' => '门户',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => '回顾',
        'Draft' => '草案',
        'Archived' => '存档',
        'Published' => '发布时间',
      ),
      'type' => 
      array (
        'Article' => '文章',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Article will be available only in specified portals.',
    ),
    'presetFilters' => 
    array (
      'published' => '发布',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => '创建类别',
      'Manage Categories' => '管理类别',
      'Articles' => '用品',
    ),
    'links' => 
    array (
      'articles' => '文章',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => '已转换为',
      'Create Lead' => '创建线索',
      'Convert' => '转换',
      'convert' => '转换',
    ),
    'fields' => 
    array (
      'name' => '名称',
      'emailAddress' => '电子邮件',
      'title' => '标题',
      'website' => '网站',
      'phoneNumber' => '电话',
      'accountName' => '单位名称',
      'doNotCall' => '不要电联',
      'address' => '地址',
      'status' => '状态',
      'source' => '资源',
      'opportunityAmount' => '商机金额',
      'opportunityAmountConverted' => '商机金额（转换）',
      'description' => '描述',
      'createdAccount' => '客户',
      'createdContact' => '联系人',
      'createdOpportunity' => '商机',
      'campaign' => '营销活动',
      'targetLists' => '目标列表',
      'targetList' => '目标列表',
      'industry' => '行业',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => '目标列表',
      'campaignLogRecords' => '营销活动日志',
      'campaign' => '营销活动',
      'createdAccount' => '客户',
      'createdContact' => '联系人',
      'createdOpportunity' => '商机',
      'cases' => '案例',
      'documents' => '文件',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => '新',
        'Assigned' => '指派',
        'In Process' => '处理中',
        'Converted' => '已转换',
        'Recycled' => '已回收',
        'Dead' => '没机会',
      ),
      'source' => 
      array (
        '' => '无',
        'Call' => '通话',
        'Email' => '电子邮件',
        'Existing Customer' => '现有客户',
        'Partner' => '伙伴',
        'Public Relations' => '公共关系',
        'Web Site' => '网站',
        'Campaign' => '营销活动',
        'Other' => '其他',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => '活性',
      'actual' => '实际',
      'converted' => '已转换',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'storeSentEmails' => '存储发送的电子邮件',
      'startAt' => '起始日期',
      'fromAddress' => '从地址',
      'fromName' => '从名称',
      'replyToAddress' => '回复地址',
      'replyToName' => '回复名称',
      'campaign' => '营销活动',
      'emailTemplate' => '电子邮件模板',
      'inboundEmail' => '电子邮件帐户',
      'targetLists' => '目标列表',
      'excludingTargetLists' => '剔除目标列表',
      'optOutEntirely' => '完全选择退出',
    ),
    'links' => 
    array (
      'targetLists' => '目标列表',
      'excludingTargetLists' => '排除目标列表',
      'queueItems' => '队列项',
      'campaign' => '营销活动',
      'emailTemplate' => '电子邮件模板',
      'inboundEmail' => '电子邮件帐户',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => '草稿',
        'Pending' => '待定',
        'In Process' => '处理中',
        'Complete' => '完成',
        'Canceled' => '已取消',
        'Failed' => '失败',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => '创建群发电子邮件',
      'Send Test' => '发送测试',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => '至少选择一个目标。',
      'testSent' => '测试电子邮件应该发送',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => '已取消订阅的收件人的电子邮件地址将被标记为已停用，他们将不会再收到任何群发电子邮件。',
      'targetLists' => '应该接收消息的目标。',
      'excludingTargetLists' => '不应该接收消息的目标。',
    ),
    'presetFilters' => 
    array (
      'actual' => '实际',
      'complete' => '完成',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'parent' => '关联',
      'status' => '状态',
      'dateStart' => '日期开始',
      'dateEnd' => '日期结束',
      'duration' => '持续时间',
      'description' => '描述',
      'users' => '用户',
      'contacts' => '往来',
      'leads' => '线索',
      'reminders' => '提醒',
      'account' => '客户',
      'acceptanceStatus' => '接受状态',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => '已计划',
        'Held' => '举行',
        'Not Held' => '未举行',
      ),
      'acceptanceStatus' => 
      array (
        'None' => '无',
        'Accepted' => '接受',
        'Declined' => '拒绝',
        'Tentative' => '暂定',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => '设为举行',
      'setNotHeld' => '设为未举行',
    ),
    'labels' => 
    array (
      'Create Meeting' => '创建会晤',
      'Set Held' => '设为举行',
      'Set Not Held' => '设为未举行',
      'Send Invitations' => '发送邀请',
      'on time' => '准时',
      'before' => '之前',
    ),
    'presetFilters' => 
    array (
      'planned' => '已计划',
      'held' => '举行',
      'todays' => '今天的',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => '什么都没发送',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'account' => '帐户',
      'stage' => '阶段',
      'amount' => '量',
      'probability' => '概率％',
      'leadSource' => '线索源',
      'doNotCall' => '不要电联',
      'closeDate' => '关闭日期',
      'contacts' => '联系人',
      'description' => '描述',
      'amountConverted' => '金额（转换）',
      'amountWeightedConverted' => '金额加权',
      'campaign' => '营销活动',
      'originalLead' => '原始线索',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
    ),
    'links' => 
    array (
      'contacts' => '联系人',
      'documents' => '文件',
      'campaign' => '营销活动运动',
      'originalLead' => '原始线索',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => '预期',
        'Qualification' => '评价',
        'Needs Analysis' => '需求分析',
        'Value Proposition' => '价值主张',
        'Id. Decision Makers' => 'Id决策者',
        'Perception Analysis' => '感性分析',
        'Proposal/Price Quote' => '提案/报价',
        'Negotiation/Review' => '协商/审核',
        'Closed Won' => '赢得并结束',
        'Closed Lost' => '失去并结束',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => '新建商机',
    ),
    'presetFilters' => 
    array (
      'open' => '打开',
      'won' => '韩元',
      'lost' => '丢失',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'description' => '说明',
      'entryCount' => '条目计数',
      'campaigns' => '营销活动',
      'endDate' => '结束日期',
      'targetLists' => '目标列表',
      'includingActionList' => '包含',
      'excludingActionList' => '排除',
    ),
    'links' => 
    array (
      'accounts' => '帐户',
      'contacts' => '联系人',
      'leads' => '线索',
      'campaigns' => '营销活动',
      'massEmails' => '群发电子邮件',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => '电子邮件',
        'Web' => 'Web',
        'Television' => '电视',
        'Radio' => '广播',
        'Newsletter' => '新闻稿',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => '创建目标列表',
      'Opted Out' => '选择退出',
      'Cancel Opt-Out' => '取消退出',
      'Opt-Out' => '退出',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'parent' => '关联',
      'status' => '状态',
      'dateStart' => '开始日期',
      'dateEnd' => '截止日期',
      'dateStartDate' => '日期开始（全天）',
      'dateEndDate' => '日期结束（全天）',
      'priority' => '优先级',
      'description' => '说明',
      'isOverdue' => '逾期',
      'account' => '帐户',
      'dateCompleted' => '完成日期',
      'attachments' => '附件',
      'reminders' => '提醒',
    ),
    'links' => 
    array (
      'attachments' => '附件',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => '未开始',
        'Started' => '开始',
        'Completed' => '已完成',
        'Canceled' => '取消',
        'Deferred' => '推迟',
      ),
      'priority' => 
      array (
        'Low' => '低',
        'Normal' => '正常',
        'High' => '高',
        'Urgent' => '紧急',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => '创建任务',
      'Complete' => '完成',
    ),
    'presetFilters' => 
    array (
      'actual' => '实际',
      'completed' => '完成',
      'deferred' => '延期',
      'todays' => '今天的',
      'overdue' => '过期',
    ),
  ),
);
?>