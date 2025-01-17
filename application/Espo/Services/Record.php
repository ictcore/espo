<?php
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2017 Yuri Kuznetsov, Taras Machyshyn, Oleksiy Avramenko
 * Website: http://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

namespace Espo\Services;

use \Espo\ORM\Entity;

use \Espo\Core\Exceptions\Error;
use \Espo\Core\Exceptions\Forbidden;
use \Espo\Core\Exceptions\BadRequest;
use \Espo\Core\Exceptions\Conflict;
use \Espo\Core\Exceptions\NotFound;


use \Espo\Core\Utils\Util;
////hhhhhh
class Record extends \Espo\Core\Services\Base
{
    protected $dependencies = array(
        'entityManager',
        'user',
        'metadata',
        'acl',
        'aclManager',
        'config',
        'serviceFactory',
        'fileManager',
        'selectManagerFactory',
        'fileStorageManager',
        'injectableFactory'
    );

    protected $getEntityBeforeUpdate = false;

    protected $entityName;

    protected $entityType;

    private $streamService;

    protected $notFilteringAttributeList =[]; // TODO maybe remove it

    protected $internalAttributeList = [];

    protected $readOnlyAttributeList = [];

    protected $readOnlyLinkList = [];

    protected $linkSelectParams = [];

    protected $noEditAccessRequiredLinkList = [];

    protected $exportSkipAttributeList = [];

    protected $exportAdditionalAttributeList = [];

    protected $exportAllowedAttributeList = [];

    protected $checkForDuplicatesInUpdate = false;

    protected $actionHistoryDisabled = false;

    protected $duplicatingLinkList = [];

    protected $listCountQueryDisabled = false;

    const MAX_TEXT_COLUMN_LENGTH_FOR_LIST = 5000;

    const FOLLOWERS_LIMIT = 4;

    public function __construct()
    {
        parent::__construct();
        if (empty($this->entityType)) {
            $name = get_class($this);
            if (preg_match('@\\\\([\w]+)$@', $name, $matches)) {
                $name = $matches[1];
            }
            if ($name != 'Record') {
                $this->entityType = Util::normilizeScopeName($name);
            }
        }
        $this->entityName = $this->entityType;
    }

    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
        $this->entityName = $entityType;
    }

    public function getEntityType()
    {
        return $this->entityType;
    }

    protected function getServiceFactory()
    {
        return $this->injections['serviceFactory'];
    }

    protected function getSelectManagerFactory()
    {
        return $this->injections['selectManagerFactory'];
    }

    protected function getAcl()
    {
        return $this->getInjection('acl');
    }

    protected function getAclManager()
    {
        return $this->getInjection('aclManager');
    }

    protected function getFileManager()
    {
        return $this->injections['fileManager'];
    }

    protected function getMetadata()
    {
        return $this->injections['metadata'];
    }

    protected function getRepository()
    {
        return $this->getEntityManager()->getRepository($this->entityType);
    }

    protected function getRecordService($name)
    {
        if ($this->getServiceFactory()->checkExists($name)) {
            $service = $this->getServiceFactory()->create($name);
        } else {
            $service = $this->getServiceFactory()->create('Record');
            $service->setEntityType($name);
        }

        return $service;
    }

    protected function processActionHistoryRecord($action, Entity $entity)
    {
        if ($this->actionHistoryDisabled) return;
        if ($this->getConfig()->get('actionHistoryDisabled')) return;

        $historyRecord = $this->getEntityManager()->getEntity('ActionHistoryRecord');

        $historyRecord->set('action', $action);
        $historyRecord->set('userId', $this->getUser()->id);
        $historyRecord->set('authTokenId', $this->getUser()->get('authTokenId'));
        $historyRecord->set('ipAddress', $this->getUser()->get('ipAddress'));

        if ($entity) {
            $historyRecord->set(array(
                'targetType' => $entity->getEntityType(),
                'targetId' => $entity->id
            ));
        }

        $this->getEntityManager()->saveEntity($historyRecord);
    }

    public function readEntity($id)
    {
        if (empty($id)) {
            throw new Error();
        }
        $entity = $this->getEntity($id);

        if ($entity) {
            $this->processActionHistoryRecord('read', $entity);
        }

        return $entity;
    }

    public function getEntity($id = null)
    {
        $entity = $this->getRepository()->get($id);
        if (!empty($entity) && !empty($id)) {
            $this->loadAdditionalFields($entity);

            if (!$this->getAcl()->check($entity, 'read')) {
                throw new Forbidden();
            }
        }
        if (!empty($entity)) {
            $this->prepareEntityForOutput($entity);
        }
        return $entity;
    }

    protected function getStreamService()
    {
        if (empty($this->streamService)) {
            $this->streamService = $this->getServiceFactory()->create('Stream');
        }
        return $this->streamService;
    }

    protected function loadIsFollowed(Entity $entity)
    {
        if ($this->getStreamService()->checkIsFollowed($entity)) {
            $entity->set('isFollowed', true);
        } else {
            $entity->set('isFollowed', false);
        }
    }

    protected function loadFollowers(Entity $entity)
    {
        if ($this->getMetadata()->get("scopes.".$entity->getEntityType().".stream")) {
            $data = $this->getStreamService()->getEntityFollowers($entity, 0, self::FOLLOWERS_LIMIT);
            if ($data) {
                $entity->set('followersIds', $data['idList']);
                $entity->set('followersNames', $data['nameMap']);
            }
        }
    }

    protected function loadIsEditable(Entity $entity)
    {
        $entity->set('isEditable', $this->getAcl()->check($entity, 'edit'));
    }

    protected function loadLinkMultipleFields(Entity $entity)
    {
        $fieldDefs = $this->getMetadata()->get('entityDefs.' . $entity->getEntityType() . '.fields', array());
        foreach ($fieldDefs as $field => $defs) {
            if (isset($defs['type']) && in_array($defs['type'], ['linkMultiple', 'attachmentMultiple']) && empty($defs['noLoad'])) {
                $columns = null;
                if (!empty($defs['columns'])) {
                    $columns = $defs['columns'];
                }
                $entity->loadLinkMultipleField($field, $columns);
            }
        }
    }

    protected function loadLinkFields(Entity $entity)
    {
        $fieldDefs = $this->getMetadata()->get('entityDefs.' . $entity->getEntityType() . '.fields', array());
        $linkDefs = $this->getMetadata()->get('entityDefs.' . $entity->getEntityType() . '.links', array());
        foreach ($fieldDefs as $field => $defs) {
            if (isset($defs['type']) && $defs['type'] === 'link') {
                if (!empty($defs['noLoad'])) continue;
                if (empty($linkDefs[$field])) continue;
                if (empty($linkDefs[$field]['type'])) continue;
                if ($linkDefs[$field]['type'] !== 'hasOne') continue;

                $entity->loadLinkField($field);
            }
        }
    }

    protected function loadParentNameFields(Entity $entity)
    {
        $fieldDefs = $this->getMetadata()->get('entityDefs.' . $entity->getEntityType() . '.fields', array());
        foreach ($fieldDefs as $field => $defs) {
            if (isset($defs['type']) && $defs['type'] == 'linkParent') {
                $id = $entity->get($field . 'Id');
                $scope = $entity->get($field . 'Type');

                if ($scope) {
                    if ($foreignEntity = $this->getEntityManager()->getEntity($scope, $id)) {
                        $entity->set($field . 'Name', $foreignEntity->get('name'));
                    }
                }
            }
        }
    }

    protected function loadNotJoinedLinkFields(Entity $entity)
    {
        $linkDefs = $this->getMetadata()->get('entityDefs.' . $entity->getEntityType() . '.links', array());
        foreach ($linkDefs as $link => $defs) {
            if (isset($defs['type']) && $defs['type'] == 'belongsTo') {
                if (!empty($defs['noJoin']) && !empty($defs['entity'])) {
                    $nameField = $link . 'Name';
                    $idField = $link . 'Id';
                    if ($entity->hasAttribute($nameField) && $entity->hasAttribute($idField)) {
                        $id = $entity->get($idField);
                    }

                    $scope = $defs['entity'];
                    if (!empty($scope) && $foreignEntity = $this->getEntityManager()->getEntity($scope, $id)) {
                        $entity->set($nameField, $foreignEntity->get('name'));
                    }
                }
            }
        }
    }

    public function loadAdditionalFields(Entity $entity)
    {
        $this->loadLinkFields($entity);
        $this->loadLinkMultipleFields($entity);
        $this->loadParentNameFields($entity);
        $this->loadIsFollowed($entity);
        $this->loadFollowers($entity);
        $this->loadEmailAddressField($entity);
        $this->loadPhoneNumberField($entity);
        $this->loadNotJoinedLinkFields($entity);
        $this->loadIsEditable($entity);
    }

    public function loadAdditionalFieldsForList(Entity $entity)
    {
        $this->loadParentNameFields($entity);
    }

    public function loadAdditionalFieldsForExport(Entity $entity)
    {
    }

    protected function loadEmailAddressField(Entity $entity)
    {
        $fieldDefs = $this->getMetadata()->get('entityDefs.' . $entity->getEntityType() . '.fields', array());
        if (!empty($fieldDefs['emailAddress']) && $fieldDefs['emailAddress']['type'] == 'email') {
            $dataFieldName = 'emailAddressData';
            $entity->set($dataFieldName, $this->getEntityManager()->getRepository('EmailAddress')->getEmailAddressData($entity));
        }
    }

    protected function loadPhoneNumberField(Entity $entity)
    {
        $fieldDefs = $this->getMetadata()->get('entityDefs.' . $entity->getEntityType() . '.fields', array());
        if (!empty($fieldDefs['phoneNumber']) && $fieldDefs['phoneNumber']['type'] == 'phone') {
            $dataFieldName = 'phoneNumberData';
            $entity->set($dataFieldName, $this->getEntityManager()->getRepository('PhoneNumber')->getPhoneNumberData($entity));
        }
    }

    protected function getSelectManager($entityType = null)
    {
        if (!$entityType) {
            $entityType = $this->getEntityType();
        }
        return $this->getSelectManagerFactory()->create($entityType);
    }

    protected function storeEntity(Entity $entity)
    {
        return $this->getRepository()->save($entity);
    }

    protected function isValid($entity)
    {
        $fieldDefs = $entity->getAttributes();
        if ($entity->hasAttribute('name') && !empty($fieldDefs['name']['required'])) {
            if (!$entity->get('name')) {
                return false;
            }
        }

        return true;
    }

    public function checkAssignment(Entity $entity)
    {
        if (!$this->isPermittedAssignedUser($entity)) {
            return false;
        }
        if (!$this->isPermittedTeams($entity)) {
            return false;
        }
        return true;
    }

    public function isPermittedAssignedUser(Entity $entity)
    {
        if (!$entity->hasAttribute('assignedUserId')) {
            return true;
        }

        $assignedUserId = $entity->get('assignedUserId');

        $assignmentPermission = $this->getAcl()->get('assignmentPermission');

        if (empty($assignedUserId)) {
            if ($assignmentPermission === 'no') {
                return false;
            }
            return true;
        }

        if ($assignmentPermission === true || !in_array($assignmentPermission, ['team', 'no'])) {
            return true;
        }

        $toProcess = false;

        if (!$entity->isNew()) {
            if ($entity->isFieldChanged('assignedUserId')) {
                $toProcess = true;
            }
        } else {
            $toProcess = true;
        }

        if ($toProcess) {
            if ($assignmentPermission == 'no') {
                if ($this->getUser()->id != $assignedUserId) {
                    return false;
                }
            } else if ($assignmentPermission == 'team') {
                $teamIdList = $this->getUser()->get('teamsIds');
                if (!$this->getEntityManager()->getRepository('User')->checkBelongsToAnyOfTeams($assignedUserId, $teamIdList)) {
                    return false;
                }
            }
        }

        return true;
    }

    public function isPermittedTeams(Entity $entity)
    {
        $assignmentPermission = $this->getAcl()->get('assignmentPermission');

        if (empty($assignmentPermission) || $assignmentPermission === true || !in_array($assignmentPermission, ['team', 'no'])) {
            return true;
        }

        if (!$entity->hasAttribute('teamsIds')) {
            return true;
        }
        $teamIdList = $entity->get('teamsIds');
        if (empty($teamIdList)) {
            return true;
        }

        $newIdList = [];

        if (!$entity->isNew()) {
            $existingIdList = [];
            foreach ($entity->get('teams') as $team) {
                $existingIdList[] = $team->id;
            }
            foreach ($teamIdList as $id) {
                if (!in_array($id, $existingIdList)) {
                    $newIdList[] = $id;
                }
            }
        } else {
            $newIdList = $teamIdList;
        }

        if (empty($newIdList)) {
            return true;
        }

        $userTeamIdList = $this->getUser()->getLinkMultipleIdList('teams');

        foreach ($newIdList as $id) {
            if (!in_array($id, $userTeamIdList)) {
                return false;
            }
        }
        return true;
    }


    protected function stripTags($string)
    {
        return strip_tags($string, '<a><img><p><br><span><ol><ul><li><blockquote><pre><h1><h2><h3><h4><h5><table><tr><td><th><thead><tbody><i><b>');
    }

    protected function filterInputAttribute($attribute, $value)
    {
        if (in_array($attribute, $this->notFilteringAttributeList)) {
            return $value;
        }
        $methodName = 'filterInputAttribute' . ucfirst($attribute);
        if (method_exists($this, $methodName)) {
            $value = $this->$methodName($value);
        }
        return $value;
    }

    protected function filterInput(&$data)
    {
        foreach ($this->readOnlyAttributeList as $attribute) {
            unset($data[$attribute]);
        }

        foreach ($data as $key => $value) {
            if (is_array($data[$key])) {
                foreach ($data[$key] as $i => $v) {
                    $data[$key][$i] = $this->filterInputAttribute($i, $data[$key][$i]);
                }
            } else if ($data[$key] instanceof \stdClass) {
                $propertyList = get_object_vars($data[$key]);
                foreach ($propertyList as $property => $value) {
                    $data[$key]->$property = $this->filterInputAttribute($property, $data[$key]->$property);
                }
            } else {
                $data[$key] = $this->filterInputAttribute($key, $data[$key]);
            }
        }

        foreach ($this->getAcl()->getScopeForbiddenAttributeList($this->entityType, 'edit') as $attribute) {
            unset($data[$attribute]);
        }
    }

    protected function handleInput(&$data)
    {

    }

    protected function processDuplicateCheck(Entity $entity, $data)
    {
        if (empty($data['forceDuplicate'])) {
            $duplicates = $this->checkEntityForDuplicate($entity, $data);
            if (!empty($duplicates)) {
                $reason = array(
                    'reason' => 'Duplicate',
                    'data' => $duplicates
                );
                throw new Conflict(json_encode($reason));
            }
        }
    }

    public function createEntity($data)
    {
        if (!$this->getAcl()->check($this->getEntityType(), 'create')) {
            throw new Forbidden();
        }

        $entity = $this->getRepository()->get();

        $this->filterInput($data);
        $this->handleInput($data);

        unset($data['modifiedById']);
        unset($data['modifiedByName']);
        unset($data['modifiedAt']);
        unset($data['createdById']);
        unset($data['createdByName']);
        unset($data['createdAt']);

        $entity->set($data);

        if (!$this->getAcl()->check($entity, 'create')) {
            throw new Forbidden();
        }

        $this->beforeCreate($entity, $data);

        if (!$this->isValid($entity)) {
            throw new BadRequest();
        }

        if (!$this->checkAssignment($entity)) {
            throw new Forbidden('Assignment permission failure');
        }

        $this->processDuplicateCheck($entity, $data);

        if ($this->storeEntity($entity)) {
            $this->afterCreate($entity, $data);
            $this->afterCreateProcessDuplicating($entity, $data);
            $this->prepareEntityForOutput($entity);

            $this->processActionHistoryRecord('create', $entity);

            return $entity;
        }

        throw new Error();
    }

    public function updateEntity($id, $data)
    {
        unset($data['deleted']);

        if (empty($id)) {
            throw BadRequest();
        }

        $this->filterInput($data);
        $this->handleInput($data);

        unset($data['modifiedById']);
        unset($data['modifiedByName']);
        unset($data['modifiedAt']);
        unset($data['createdById']);
        unset($data['createdByName']);
        unset($data['createdAt']);

        if ($this->getEntityBeforeUpdate) {
            $entity = $this->getEntity($id);
        } else {
            $entity = $this->getRepository()->get($id);
        }

        if (!$entity) {
            throw new NotFound();
        }

        if (!$this->getAcl()->check($entity, 'edit')) {
            throw new Forbidden();
        }

        $dataBefore = $entity->getValues();

        $entity->set($data);

        $this->beforeUpdate($entity, $data);

        if (!$this->isValid($entity)) {
            throw new BadRequest();
        }

        if (!$this->checkAssignment($entity)) {
            throw new Forbidden();
        }

        if ($this->checkForDuplicatesInUpdate) {
            $this->processDuplicateCheck($entity, $data);
        }

        if ($this->storeEntity($entity)) {
            $this->afterUpdate($entity, $data);
            $this->prepareEntityForOutput($entity);

            $this->processActionHistoryRecord('update', $entity);

            return $entity;
        }

        throw new Error();
    }

    protected function beforeCreate(Entity $entity, array $data = array())
    {
    }

    protected function afterCreate(Entity $entity, array $data = array())
    {
    }

    protected function beforeUpdate(Entity $entity, array $data = array())
    {
    }

    protected function afterUpdate(Entity $entity, array $data = array())
    {
    }

    protected function beforeDelete(Entity $entity)
    {
    }

    protected function afterDelete(Entity $entity)
    {
    }

    protected function afterMassUpdate(array $idList, array $data = array())
    {
    }

    protected function afterMassRemove(array $idList)
    {
    }

    public function deleteEntity($id)
    {
        if (empty($id)) {
            throw BadRequest();
        }

        $entity = $this->getRepository()->get($id);

        if (!$entity) {
            throw new NotFound();
        }

        if (!$this->getAcl()->check($entity, 'delete')) {
            throw new Forbidden();
        }

        $this->beforeDelete($entity);

        $result = $this->getRepository()->remove($entity);
        if ($result) {
            $this->afterDelete($entity);

            $this->processActionHistoryRecord('delete', $entity);

            return $result;
        }
    }

    protected function getSelectParams($params)
    {
        $selectParams = $this->getSelectManager($this->entityType)->getSelectParams($params, true, true);

        return $selectParams;
    }

    public function findEntities($params)
    {
        $disableCount = false;
        if (
            $this->listCountQueryDisabled
            ||
            in_array($this->entityType, $this->getConfig()->get('disabledCountQueryEntityList', []))
        ) {
            $disableCount = true;
        }

        $maxSize = 0;
        if ($disableCount) {
           if (!empty($params['maxSize'])) {
               $maxSize = $params['maxSize'];
               $params['maxSize'] = $params['maxSize'] + 1;
           }
        }

        $selectParams = $this->getSelectParams($params);

        $selectParams['maxTextColumnsLength'] = $this->getConfig()->get('maxTextColumnLengthForList', self::MAX_TEXT_COLUMN_LENGTH_FOR_LIST);

        $collection = $this->getRepository()->find($selectParams);

        foreach ($collection as $e) {
            $this->loadAdditionalFieldsForList($e);
            if (!empty($params['loadAdditionalFields'])) {
                $this->loadAdditionalFields($e);
            }
            $this->prepareEntityForOutput($e);
        }

        if (!$disableCount) {
            $total = $this->getRepository()->count($selectParams);
        } else {
            if ($maxSize && count($collection) > $maxSize) {
                $total = -1;
                unset($collection[count($collection) - 1]);
            } else {
                $total = -2;
            }
        }

        return array(
            'total' => $total,
            'collection' => $collection,
        );
    }

    public function findLinkedEntities($id, $link, $params)
    {
        $entity = $this->getRepository()->get($id);
        if (!$entity) {
            throw new NotFound();
        }
        if (!$this->getAcl()->check($entity, 'read')) {
            throw new Forbidden();
        }

        $methodName = 'findLinkedEntities' . ucfirst($link);
        if (method_exists($this, $methodName)) {
            return $this->$methodName($id, $params);
        }

        $foreignEntityName = $entity->relations[$link]['entity'];

        if (!$this->getAcl()->check($foreignEntityName, 'read')) {
            throw new Forbidden();
        }

        $disableCount = false;
        if (
            in_array($this->entityType, $this->getConfig()->get('disabledCountQueryEntityList', []))
        ) {
            $disableCount = true;
        }

        $maxSize = 0;
        if ($disableCount) {
            if (!empty($params['maxSize'])) {
                $maxSize = $params['maxSize'];
                $params['maxSize'] = $params['maxSize'] + 1;
            }
        }

        $selectParams = $this->getSelectManager($foreignEntityName)->getSelectParams($params, true);

        if (array_key_exists($link, $this->linkSelectParams)) {
            $selectParams = array_merge($selectParams, $this->linkSelectParams[$link]);
        }

        $selectParams['maxTextColumnsLength'] = $this->getConfig()->get('maxTextColumnLengthForList', self::MAX_TEXT_COLUMN_LENGTH_FOR_LIST);

        $collection = $this->getRepository()->findRelated($entity, $link, $selectParams);

        $recordService = $this->getRecordService($foreignEntityName);

        foreach ($collection as $e) {
            $recordService->loadAdditionalFieldsForList($e);
            if (!empty($params['loadAdditionalFields'])) {
                $recordService->loadAdditionalFields($e);
            }
            $recordService->prepareEntityForOutput($e);
        }

        if (!$disableCount) {
            $total = $this->getRepository()->countRelated($entity, $link, $selectParams);
        } else {
            if ($maxSize && count($collection) > $maxSize) {
                $total = -1;
                unset($collection[count($collection) - 1]);
            } else {
                $total = -2;
            }
        }

        return array(
            'total' => $total,
            'collection' => $collection
        );
    }

    public function linkEntity($id, $link, $foreignId)
    {
        if (empty($id) || empty($link) || empty($foreignId)) {
            throw new BadRequest;
        }

        if (in_array($link, $this->readOnlyLinkList)) {
            throw new Forbidden();
        }

        $entity = $this->getRepository()->get($id);
        if (!$entity) {
            throw new NotFound();
        }
        if (!$this->getAcl()->check($entity, 'edit')) {
            throw new Forbidden();
        }

        $foreignEntityType = $entity->getRelationParam($link, 'entity');
        if (!$foreignEntityType) {
            throw new Error("Entity '{$this->entityType}' has not relation '{$link}'.");
        }

        $foreignEntity = $this->getEntityManager()->getEntity($foreignEntityType, $foreignId);
        if (!$foreignEntity) {
            throw new NotFound();
        }

        $accessActionRequired = 'edit';
        if (in_array($link, $this->noEditAccessRequiredLinkList)) {
            $accessActionRequired = 'read';
        }
        if (!$this->getAcl()->check($foreignEntity, $accessActionRequired)) {
            throw new Forbidden();
        }

        $this->getRepository()->relate($entity, $link, $foreignEntity);
        return true;
    }

    public function unlinkEntity($id, $link, $foreignId)
    {
        if (empty($id) || empty($link) || empty($foreignId)) {
            throw new BadRequest;
        }

        if (in_array($link, $this->readOnlyLinkList)) {
            throw new Forbidden();
        }

        $entity = $this->getRepository()->get($id);
        if (!$entity) {
            throw new NotFound();
        }
        if (!$this->getAcl()->check($entity, 'edit')) {
            throw new Forbidden();
        }

        $foreignEntityType = $entity->getRelationParam($link, 'entity');
        if (!$foreignEntityType) {
            throw new Error("Entity '{$this->entityType}' has not relation '{$link}'.");
        }

        $foreignEntity = $this->getEntityManager()->getEntity($foreignEntityType, $foreignId);
        if (!$foreignEntity) {
            throw new NotFound();
        }

        $accessActionRequired = 'edit';
        if (in_array($link, $this->noEditAccessRequiredLinkList)) {
            $accessActionRequired = 'read';
        }
        if (!$this->getAcl()->check($foreignEntity, $accessActionRequired)) {
            throw new Forbidden();
        }

        $this->getRepository()->unrelate($entity, $link, $foreignEntity);
        return true;
    }

    public function linkEntityMass($id, $link, $where, $selectData = null)
    {
        if (empty($id) || empty($link)) {
            throw new BadRequest;
        }

        $entity = $this->getRepository()->get($id);
        if (!$entity) {
            throw new NotFound();
        }
        if (!$this->getAcl()->check($entity, 'edit')) {
            throw new Forbidden();
        }

        $entityType = $entity->getEntityType();
        $foreignEntityType = $entity->getRelationParam($link, 'entity');

        if (empty($foreignEntityType)) {
            throw new Error();
        }

        $accessActionRequired = 'edit';
        if (in_array($link, $this->noEditAccessRequiredLinkList)) {
            $accessActionRequired = 'read';
        }

        if (!$this->getAcl()->check($foreignEntityType, $accessActionRequired)) {
            throw new Forbidden();
        }

        if (!is_array($where)) {
            $where = array();
        }
        $params['where'] = $where;

        if (is_array($selectData)) {
            foreach ($selectData as $k => $v) {
                $params[$k] = $v;
            }
        }

        $selectParams = $this->getRecordService($foreignEntityType)->getSelectParams($params);

        if ($this->getAcl()->getLevel($foreignEntityType, $accessActionRequired) === 'all') {
            return $this->getRepository()->massRelate($entity, $link, $selectParams);
        } else {
            $foreignEntityList = $this->getEntityManager()->getRepository($foreignEntityType)->find($selectParams);
            $countRelated = 0;
            foreach ($foreignEntityList as $foreignEntity) {
                if (!$this->getAcl()->check($foreignEntity, $accessActionRequired)) {
                    continue;
                }
                $this->getRepository()->relate($entity, $link, $foreignEntity);
                $countRelated++;
            }
            if ($countRelated) {
                return true;
            }
        }
    }

    public function massUpdate($attributes = array(), array $params)
    {
        $idsUpdated = array();
        $repository = $this->getRepository();

        $count = 0;

        $data = get_object_vars($attributes);
        $this->filterInput($data);

        if (array_key_exists('ids', $params) && is_array($params['ids'])) {
            $ids = $params['ids'];
            foreach ($ids as $id) {
                $entity = $this->getEntity($id);
                if ($this->getAcl()->check($entity, 'edit')) {
                    $entity->set($data);
                    if ($this->checkAssignment($entity)) {
                        if ($repository->save($entity)) {
                            $idsUpdated[] = $entity->id;
                            $count++;

                            $this->processActionHistoryRecord('update', $entity);
                        }
                    }
                }
            }
        }

        if (array_key_exists('where', $params)) {
            $where = $params['where'];
            $p = array();
            $p['where'] = $where;

            if (!empty($params['selectData']) && is_array($params['selectData'])) {
                foreach ($params['selectData'] as $k => $v) {
                    $p[$k] = $v;
                }
            }

            $selectParams = $this->getSelectParams($p);

            $collection = $repository->find($selectParams);

            foreach ($collection as $entity) {
                if ($this->getAcl()->check($entity, 'edit')) {
                    $entity->set($data);
                    if ($this->checkAssignment($entity)) {
                        if ($repository->save($entity)) {
                            $idsUpdated[] = $entity->id;
                            $count++;

                            $this->processActionHistoryRecord('update', $entity);
                        }
                    }
                }
            }

            $this->afterMassUpdate($idsUpdated, $data);

            return array(
                'count' => $count
            );
        }

        $this->afterMassUpdate($idsUpdated, $data);

        return array(
            'count' => $count,
            'ids' => $idsUpdated
        );
    }

    protected function checkEntityForMassRemove(Entity $entity)
    {
        return true;
    }

    public function massRemove(array $params)
    {
        $idsRemoved = array();
        $repository = $this->getRepository();

        $count = 0;

        if (array_key_exists('ids', $params)) {
            $ids = $params['ids'];
            foreach ($ids as $id) {
                $entity = $this->getEntity($id);
                if ($entity && $this->getAcl()->check($entity, 'delete') && $this->checkEntityForMassRemove($entity)) {
                    if ($repository->remove($entity)) {
                        $idsRemoved[] = $entity->id;
                        $count++;

                        $this->processActionHistoryRecord('delete', $entity);
                    }
                }
            }
        }

        if (array_key_exists('where', $params)) {
            $where = $params['where'];
            $p = array();
            $p['where'] = $where;

            if (!empty($params['selectData']) && is_array($params['selectData'])) {
                foreach ($params['selectData'] as $k => $v) {
                    $p[$k] = $v;
                }
            }

            $selectParams = $this->getSelectParams($p);
            $skipTextColumns['skipTextColumns'] = true;
            $collection = $repository->find($selectParams);

            foreach ($collection as $entity) {
                if ($this->getAcl()->check($entity, 'delete') && $this->checkEntityForMassRemove($entity)) {
                    if ($repository->remove($entity)) {
                        $idsRemoved[] = $entity->id;
                        $count++;

                        $this->processActionHistoryRecord('delete', $entity);
                    }
                }
            }

            $this->afterMassRemove($idsRemoved);

            return array(
                'count' => $count
            );
        }

        $this->afterMassRemove($idsRemoved);

        return array(
            'count' => $count,
            'ids' => $idsRemoved
        );
    }

    public function follow($id, $userId = null)
    {
        $entity = $this->getRepository()->get($id);

        if (!$this->getAcl()->check($entity, 'stream')) {
            throw new Forbidden();
        }

        if (empty($userId)) {
            $userId = $this->getUser()->id;
        }

        return $this->getStreamService()->followEntity($entity, $userId);
    }

    public function unfollow($id, $userId = null)
    {
        $entity = $this->getRepository()->get($id);

        if (!$this->getAcl()->check($entity, 'read')) {
            throw new Forbidden();
        }

        if (empty($userId)) {
            $userId = $this->getUser()->id;
        }

        return $this->getStreamService()->unfollowEntity($entity, $userId);
    }

    public function massFollow(array $params, $userId = null)
    {
        $resultIdList = [];

        if (empty($userId)) {
            $userId = $this->getUser()->id;
        }

        $streamService = $this->getStreamService();

        if (array_key_exists('ids', $params)) {
            $idList = $params['ids'];
            foreach ($idList as $id) {
                $entity = $this->getEntity($id);
                if ($entity && $this->getAcl()->check($entity, 'stream')) {
                    if ($streamService->followEntity($entity, $userId)) {
                        $resultIdList[] = $entity->id;
                    }
                }
            }
        }

        return array(
            'ids' => $resultIdList,
            'count' => count($resultIdList)
        );
    }

    public function massUnfollow(array $params, $userId = null)
    {
        $resultIdList = [];

        if (empty($userId)) {
            $userId = $this->getUser()->id;
        }

        $streamService = $this->getStreamService();

        if (array_key_exists('ids', $params)) {
            $idList = $params['ids'];
            foreach ($idList as $id) {
                $entity = $this->getEntity($id);
                if ($entity && $this->getAcl()->check($entity, 'stream')) {
                    if ($streamService->unfollowEntity($entity, $userId)) {
                        $resultIdList[] = $entity->id;
                    }
                }
            }
        }

        return array(
            'ids' => $resultIdList,
            'count' => count($resultIdList)
        );
    }

    protected function getDuplicateWhereClause(Entity $entity, $data = array())
    {
        return false;
    }

    public function checkEntityForDuplicate(Entity $entity, $data = array())
    {
        $where = $this->getDuplicateWhereClause($entity, $data);

        if ($where) {
            if ($entity->id) {
                $where['id!='] = $entity->id;
            }
            $duplicateList = $this->getRepository()->where($where)->find();
            if (count($duplicateList)) {
                $result = array();
                foreach ($duplicateList as $e) {
                    $result[$e->id] = $e->getValues();
                }
                return $result;
            }
        }
        return false;
    }

    public function checkAttributeIsAllowedForExport($entity, $attribute)
    {
        $entity = $this->getEntityManager()->getEntity($this->getEntityType());

        if (in_array($attribute, $this->internalAttributeList)) {
            return false;
        }

        $isNotStorable = $entity->getAttributeParam($attribute, 'notStorable');
        if (!$isNotStorable) {
            return true;
        } else {
            if (in_array($attribute, $this->exportAllowedAttributeList)) {
                return true;
            }
            if (in_array($entity->getAttributeParam($attribute, 'type'), ['email', 'phone'])) {
               return true;
            }
        }
    }

    public function exportCollection(array $params, $collection)
    {
        $params['collection'] = $collection;
        return $this->export($params);
    }

    public function export(array $params)
    {
        if (array_key_exists('format', $params)) {
            $format = $params['format'];
        } else {
            $format = 'csv';
        }

        if (!in_array($format, $this->getMetadata()->get(['app', 'export', 'formatList']))) {
            throw new Error('Not supported export format.');
        }

        $className = $this->getMetadata()->get(['app', 'export', 'exportFormatClassNameMap', $format]);
        if (empty($className)) {
            throw new Error();
        }
        $exportObj = $this->getInjection('injectableFactory')->createByClassName($className);

        if (array_key_exists('collection', $params)) {
            $collection = $params['collection'];
        } else {
            $selectManager = $this->getSelectManager($this->getEntityType());
            if (array_key_exists('ids', $params)) {
                $ids = $params['ids'];
                $where = array(
                    array(
                        'type' => 'in',
                        'field' => 'id',
                        'value' => $ids
                    )
                );
                $selectParams = $selectManager->getSelectParams(array('where' => $where), true, true);
            } else if (array_key_exists('where', $params)) {
                $where = $params['where'];

                $p = array();
                $p['where'] = $where;
                if (!empty($params['selectData']) && is_array($params['selectData'])) {
                    foreach ($params['selectData'] as $k => $v) {
                        $p[$k] = $v;
                    }
                }
                $selectParams = $this->getSelectParams($p);
            } else {
                throw new BadRequest();
            }

            $orderBy = $this->getMetadata()->get(['entityDefs', $this->getEntityType(), 'collection', 'sortBy']);
            $desc = !$this->getMetadata()->get(['entityDefs', $this->getEntityType(), 'collection', 'asc']);
            if ($orderBy) {
                $selectManager->applyOrder($orderBy, $desc, $selectParams);
            }

            $collection = $this->getRepository()->find($selectParams);
        }

        $arr = array();

        $collection->toArray();

        $attributeListToSkip = [
            'deleted'
        ];

        foreach ($this->exportSkipAttributeList as $attribute) {
            $attributeListToSkip[] = $attribute;
        }

        foreach ($this->getAcl()->getScopeForbiddenAttributeList($this->getEntityType(), 'read') as $attribute) {
            $attributeListToSkip[] = $attribute;
        }

        $attributeList = null;
        if (array_key_exists('attributeList', $params)) {
            $attributeList = [];
            $seed = $this->getEntityManager()->getEntity($this->getEntityType());
            foreach ($params['attributeList'] as $attribute) {
                if (in_array($attribute, $attributeListToSkip)) {
                    continue;
                }
                if ($this->checkAttributeIsAllowedForExport($seed, $attribute)) {
                    $attributeList[] = $attribute;
                }
            }
        }

        if (!array_key_exists('fieldList', $params)) {
            $fieldDefs = $this->getMetadata()->get(['entityDefs', $this->entityType, 'fields'], []);
            $fieldList = array_keys($fieldDefs);
            array_unshift($fieldList, 'id');
        } else {
            $fieldList = $params['fieldList'];
        }

        if (is_null($attributeList)) {
            $attributeList = [];
            $seed = $this->getEntityManager()->getEntity($this->entityType);
            foreach ($seed->getAttributes() as $attribute => $defs) {
                if (in_array($attribute, $attributeListToSkip)) {
                    continue;
                }
                if ($this->checkAttributeIsAllowedForExport($seed, $attribute)) {
                    $attributeList[] = $attribute;
                }
            }
            foreach ($this->exportAdditionalAttributeList as $attribute) {
                $attributeList[] = $attribute;
            }
        }

        if (method_exists($exportObj, 'addAdditionalAttributes')) {
            $exportObj->addAdditionalAttributes($this->entityType, $attributeList, $fieldList);
        }

        foreach ($collection as $entity) {
            if (is_null($attributeList)) {

            }

            $this->loadAdditionalFieldsForExport($entity);
            if (method_exists($exportObj, 'loadAdditionalFields')) {
                $exportObj->loadAdditionalFields($entity, $fieldList);
            }
            $row = array();
            foreach ($attributeList as $attribute) {
                $value = $this->getAttributeFromEntityForExport($entity, $attribute);
                $row[$attribute] = $value;
            }
            $arr[] = $row;
        }

        if (is_null($attributeList)) {
            $attributeList = [];
        }


        $mimeType = $this->getMetadata()->get(['app', 'export', 'formatDefs', $format, 'mimeType']);
        $fileExtension = $this->getMetadata()->get(['app', 'export', 'formatDefs', $format, 'fileExtension']);

        $fileName = null;
        if (!empty($params['fileName'])) {
            $fileName = trim($params['fileName']);
        }

        if (!empty($fileName)) {
            $fileName = $fileName . '.' . $fileExtension;
        } else {
            $fileName = "Export_{$this->entityType}." . $fileExtension;
        }

        $exportParams = array(
            'attributeList' => $attributeList,
            'fileName ' => $fileName
        );

        $exportParams['fieldList'] = $fieldList;
        if (array_key_exists('exportName', $params)) {
            $exportParams['exportName'] = $params['exportName'];
        }
        $contents = $exportObj->process($this->entityType, $exportParams, $arr);

        $attachment = $this->getEntityManager()->getEntity('Attachment');
        $attachment->set('name', $fileName);
        $attachment->set('role', 'Export File');
        $attachment->set('type', $mimeType);

        $this->getEntityManager()->saveEntity($attachment);

        if (!empty($attachment->id)) {
            $this->getInjection('fileStorageManager')->putContents($attachment, $contents);
            return $attachment->id;
        }
        throw new Error();
    }





public function ictbroadcast(array $params)
{


    if (array_key_exists('collection', $params)) {
        $collection = $params['collection'];
    } else {
            $selectManager = $this->getSelectManager($this->getEntityType());
            if (array_key_exists('ids', $params)) {
                $ids = $params['ids'];
                $where = array(
                    array(
                        'type' => 'in',
                        'field' => 'id',
                        'value' => $ids
                    )
                );
                $selectParams = $selectManager->getSelectParams(array('where' => $where), true, true);
            } else if (array_key_exists('where', $params)) {
                $where = $params['where'];

                $p = array();
                $p['where'] = $where;
                if (!empty($params['selectData']) && is_array($params['selectData'])) {
                    foreach ($params['selectData'] as $k => $v) {
                        $p[$k] = $v;
                    }
                }
                $selectParams = $this->getSelectParams($p);
            } else {
                throw new BadRequest();
            }

            $orderBy = $this->getMetadata()->get(['entityDefs', $this->getEntityType(), 'collection', 'sortBy']);
            $desc = !$this->getMetadata()->get(['entityDefs', $this->getEntityType(), 'collection', 'asc']);
            if ($orderBy) {
                $selectManager->applyOrder($orderBy, $desc, $selectParams);
            }

        $collection = $this->getRepository()->find($selectParams);
    }
          $entityManager = $this->getEntityManager();
          $account  = $entityManager->getEntity('Integration', 'IctBroadcastconfig');
          $settings = $account->get('data');
          $token    = $settings->apiKey;
          $ipadrs   = $settings->links;



        $json_data = array();

        $lnk = parse_url($ipadrs);
     
       // $json_data['ipaddre'] =  $lnk['scheme'].'://'.$lnk['host'];
        //Creat Group in IctBroadcast
        $arguments = array('contact_group'=> array('name' => $params['format'][0]));
        $result  = $this->broadcast_api('Contact_Group_Create', $arguments);
        if($result[0] == true) {
          $contact_group_id = $result[1];
          // print_r($contact_id);
          $json_data['group_id'] = $contact_group_id;
          $json_data['campaign_type'] = $params['format'][1];

        } else {
          $errmsg = $result[1];
          //print_r($errmsg);
          return $errmsg;
        }

        $arr = array();

        $collection->toArray();

        $attributeListToSkip = [
            'deleted'
        ];

        foreach ($this->exportSkipAttributeList as $attribute) {
            $attributeListToSkip[] = $attribute;
        }

        foreach ($this->getAcl()->getScopeForbiddenAttributeList($this->getEntityType(), 'read') as $attribute) {
            $attributeListToSkip[] = $attribute;
        }

        $attributeList = null;
        if (array_key_exists('attributeList', $params)) {
            $attributeList = [];
            $seed = $this->getEntityManager()->getEntity($this->getEntityType());
            foreach ($params['attributeList'] as $attribute) {
                if (in_array($attribute, $attributeListToSkip)) {
                    continue;
                }
                if ($this->checkAttributeIsAllowedForExport($seed, $attribute)) {
                    $attributeList[] = $attribute;
                }
            }
        }

        if (!array_key_exists('fieldList', $params)) {
            $fieldDefs = $this->getMetadata()->get(['entityDefs', $this->entityType, 'fields'], []);
            $fieldList = array_keys($fieldDefs);
            array_unshift($fieldList, 'id');
        } else {
            $fieldList = $params['fieldList'];
        }

        if (is_null($attributeList)) {
            $attributeList = [];
            $seed = $this->getEntityManager()->getEntity($this->entityType);
            foreach ($seed->getAttributes() as $attribute => $defs) {
                if (in_array($attribute, $attributeListToSkip)) {
                    continue;
                }
                if ($this->checkAttributeIsAllowedForExport($seed, $attribute)) {
                    $attributeList[] = $attribute;
                }
            }
            foreach ($this->exportAdditionalAttributeList as $attribute) {
                $attributeList[] = $attribute;
            }
        }

        if (method_exists($exportObj, 'addAdditionalAttributes')) {
            $exportObj->addAdditionalAttributes($this->entityType, $attributeList, $fieldList);
        }

        foreach ($collection as $entity) {
            if (is_null($attributeList)) {

            }

            $this->loadAdditionalFieldsForExport($entity);
            if (method_exists($exportObj, 'loadAdditionalFields')) {
                $exportObj->loadAdditionalFields($entity, $fieldList);
            }
            $row = array();

            foreach ($attributeList as $attribute) {
                $value = $this->getAttributeFromEntityForExport($entity, $attribute);
                $row[$attribute] = $value;
            }
            $arr[] = $row;


        }
      //  echo "<pre> hello ";print_r($arr);
        foreach($arr as $c_data){

          $contact = array(
          'phone' => $c_data['phoneNumber'], 
          'first_name'=>$c_data['firstName'], 
          'last_name'=>$c_data['lastName'], 
          'email'=> $c_data['emailAddress']
          );
          $arguments = array('contact'=>$contact, 'contact_group_id'=> $json_data['group_id']);
          $result  = $this->broadcast_api('Contact_Create', $arguments);
          if($result[0] == true) {
          $contact_id = $result[1];
          // print_r($contact_id);
          } else {
          $errmsg = $result[1];
          return $errmsg;
          }

        }
       $campaing_type = $params['format'][1];

      $recording_id = $params['format'][3];
     if($campaing_type=='voice'){

            $method_campaign =  'Campaign_Create';

        }elseif($campaing_type=='fax'){

            $method_campaign =  'Campaign_Fax_Create';

        }elseif($campaing_type == 'voice_interactive'){


            $method_campaign =  'Campaign_Interactive_Create';
        }
       
        if($campaing_type == 'voice' || $campaing_type=='fax'){

                $campaign = array(
                'contact_group_id'  => $contact_group_id,     //  contact_group_id
                'message'           => $recording_id,     //  recording_id
                );
        }
        if($campaing_type =='voice_interactive'){

         $campaign = array(
            'contact_group_id'  => $contact_group_id,     //  contact_group_id
            'message'           => $recording_id,     //  recording_id
            'extension_key'     => '1',     // any value from 0 to 7 
            'extension_id'      => $params['format'][2],     // extension_id 
            );

        }
        $arguments = array('campaign'=>$campaign);
        $result =  $this->broadcast_api($method_campaign , $arguments);

        if($result[0] == true) {

            $campaign_id = $result[1];
        }
        $arguments = array('campaign_id'=>$campaign_id);
        $result = $this->broadcast_api('Campaign_Start', $arguments);
     //print_r($result[1]);




           // print_r($campaign_id);
           return $json_data;
}



    protected function getAttributeFromEntityForExport(Entity $entity, $field)
    {
        $methodName = 'getAttribute' . ucfirst($field). 'FromEntityForExport';
        if (method_exists($this, $methodName)) {
            return $this->$methodName($entity);
        }

        $defs = $entity->getAttributes();
        if (!empty($defs[$field]) && !empty($defs[$field]['type'])) {
            $type = $defs[$field]['type'];
            switch ($type) {
                case 'jsonArray':
                    $value = $entity->get($field);
                    if (is_array($value)) {
                        return implode(',', $value);
                    } else {
                        return null;
                    }
                    break;
                case 'password':
                    return null;
                    break;
            }
        }
        return $entity->get($field);
    }

    public function prepareEntityForOutput(Entity $entity)
    {
        foreach ($this->internalAttributeList as $field) {
            $entity->clear($field);
        }
        foreach ($this->getAcl()->getScopeForbiddenAttributeList($entity->getEntityType(), 'read') as $attribute) {
            $entity->clear($attribute);
        }
    }

    public function merge($id, array $sourceIdList = array(), array $attributes = array())
    {
        if (empty($id)) {
            throw new Error();
        }

        $repository = $this->getRepository();

        $entity = $this->getEntityManager()->getEntity($this->getEntityType(), $id);

        if (!$entity) {
            throw new NotFound();
        }
        if (!$this->getAcl()->check($entity, 'edit')) {
            throw new Forbidden();
        }

        $this->filterInput($attributes);
        $entity->set($attributes);
        if (!$this->checkAssignment($entity)) {
            throw new Forbidden();
        }

        $pdo = $this->getEntityManager()->getPDO();

        $sourceList = array();
        foreach ($sourceIdList as $sourceId) {
            $source = $this->getEntity($sourceId);
            $sourceList[] = $source;
            if (!$this->getAcl()->check($source, 'edit') || !$this->getAcl()->check($source, 'delete')) {
                throw new Forbidden();
            }
        }

        $fieldDefs = $this->getMetadata()->get('entityDefs.' . $entity->getEntityType() . '.fields', array());

        $hasPhoneNumber = false;
        if (!empty($fieldDefs['phoneNumber']) && $fieldDefs['phoneNumber']['type'] == 'phone') {
            $hasPhoneNumber = true;
        }

        $hasEmailAddress = false;
        if (!empty($fieldDefs['emailAddress']) && $fieldDefs['emailAddress']['type'] == 'email') {
            $hasEmailAddress = true;
        }

        if ($hasPhoneNumber) {
            $phoneNumberToRelateList = [];
            $phoneNumberList = $repository->findRelated($entity, 'phoneNumbers');
            foreach ($phoneNumberList as $phoneNumber) {
                $phoneNumberToRelateList[] = $phoneNumber;
            }
        }

        if ($hasEmailAddress) {
            $emailAddressToRelateList = [];
            $emailAddressList = $repository->findRelated($entity, 'emailAddresses');
            foreach ($emailAddressList as $emailAddress) {
                $emailAddressToRelateList[] = $emailAddress;
            }
        }

        foreach ($sourceList as $source) {
            $sql = "
                UPDATE `note`
                    SET
                        `parent_id` = " . $pdo->quote($entity->id) . ",
                        `parent_type` = " . $pdo->quote($entity->getEntityType()) . "
                WHERE
                    `type` IN ('Post', 'EmailSent', 'EmailReceived') AND
                    `parent_id` = " . $pdo->quote($source->id) . " AND
                    `parent_type` = ".$pdo->quote($source->getEntityType())." AND
                    `deleted` = 0
            ";
            $pdo->query($sql);

            if ($hasPhoneNumber) {
                $phoneNumberList = $repository->findRelated($source, 'phoneNumbers');
                foreach ($phoneNumberList as $phoneNumber) {
                    $phoneNumberToRelateList[] = $phoneNumber;
                }
            }
            if ($hasEmailAddress) {
                $emailAddressList = $repository->findRelated($source, 'emailAddresses');
                foreach ($emailAddressList as $emailAddress) {
                    $emailAddressToRelateList[] = $emailAddress;
                }
            }
        }

        $mergeLinkList = [];
        $linksDefs = $this->getMetadata()->get(['entityDefs', $this->getEntityType(), 'links']);
        foreach ($linksDefs as $link => $d) {
            if (!empty($d['notMergeable'])) {
                continue;
            }
            if (!empty($d['type']) && in_array($d['type'], ['hasMany', 'hasChildren'])) {
                $mergeLinkList[] = $link;
            }
        }

        foreach ($sourceList as $source) {
            foreach ($mergeLinkList as $link) {
                $linkedList = $repository->findRelated($source, $link);
                foreach ($linkedList as $linked) {
                    $repository->relate($entity, $link, $linked);
                }
            }
        }

        foreach ($sourceList as $source) {
            $this->getEntityManager()->removeEntity($source);
        }


        if ($hasEmailAddress) {
            $emailAddressData = [];
            foreach ($emailAddressToRelateList as $i => $emailAddress) {
                $o = (object) [];
                $o->emailAddress = $emailAddress->get('name');
                $o->primary = false;
                if (empty($attributes['emailAddress'])) {
                    if ($i === 0) {
                        $o->primary = true;
                    }
                } else {
                    $o->primary = $o->emailAddress === $attributes['emailAddress'];
                }
                $o->optOut = $emailAddress->get('optOut');
                $o->invalid = $emailAddress->get('invalid');
                $emailAddressData[] = $o;
            }
            $attributes['emailAddressData'] = $emailAddressData;
        }

        if ($hasPhoneNumber) {
            $phoneNumberData = [];
            foreach ($phoneNumberToRelateList as $i => $phoneNumber) {
                $o = (object) [];
                $o->phoneNumber = $phoneNumber->get('name');
                $o->primary = false;
                if (empty($attributes['phoneNumber'])) {
                    if ($i === 0) {
                        $o->primary = true;
                    }
                } else {
                    $o->primary = $o->phoneNumber === $attributes['phoneNumber'];
                }
                $o->type = $phoneNumber->get('type');
                $phoneNumberData[] = $o;
            }
            $attributes['phoneNumberData'] = $phoneNumberData;
        }

        $entity->set($attributes);
        $repository->save($entity);

        return true;
    }

    protected function findLinkedEntitiesFollowers($id, $params)
    {
        $maxSize = 0;

        $entity = $this->getEntityManager()->getEntity($this->entityType, $id);
        if (!$entity) {
            throw new NotFound();
        }

        $data = $this->getStreamService()->getEntityFollowers($entity, $params['offset'], $params['maxSize']);

        $list = [];

        foreach ($data['idList'] as $id) {
            $list[] = array(
                'id' => $id,
                'name' => $data['nameMap']->$id
            );
        }

        if ($maxSize && count($list) > $maxSize) {
            $total = -1;
            unset($list[count($list) - 1]);
        } else {
            $total = -2;
        }

        return array(
            'total' => $total,
            'list' => $list
        );
    }

    public function getDuplicateAttributes($id)
    {
        if (empty($id)) {
            throw new BadRequest();
        }

        $entity = $this->getEntity($id);

        if (!$entity) {
            throw new NotFound();
        }

        $attributes = $entity->getValues();
        unset($attributes['id']);

        $fields = $this->getMetadata()->get(['entityDefs', $this->getEntityType(), 'fields'], array());

        $fieldManager = new \Espo\Core\Utils\FieldManagerUtil($this->getMetadata());

        foreach ($fields as $field => $item) {
            if (empty($item['type'])) continue;
            $type = $item['type'];

            if (!empty($item['duplicateIgnore'])) {
                $attributeToIgnoreList = $fieldManager->getAttributeList($this->entityType, $field);
                foreach ($attributeToIgnoreList as $attribute) {
                    unset($attributes[$attribute]);
                }
                continue;
            }

            if (in_array($type, ['file', 'image'])) {
                $attachment = $entity->get($field);
                if ($attachment) {
                    $attachment = $this->getEntityManager()->getRepository('Attachment')->getCopiedAttachment($attachment);
                    $idAttribute = $field . 'Id';
                    if ($attachment) {
                        $attributes[$idAttribute] = $attachment->id;
                    }
                }
            } else if (in_array($type, ['attachmentMultiple'])) {
                $attachmentList = $entity->get($field);
                if (count($attachmentList)) {
                    $idList = [];
                    $nameHash = (object) [];
                    $typeHash = (object) [];
                    foreach ($attachmentList as $attachment) {
                        $attachment = $this->getEntityManager()->getRepository('Attachment')->getCopiedAttachment($attachment);
                        if ($attachment) {
                            $idList[] = $attachment->id;
                            $nameHash->{$attachment->id} = $attachment->get('name');
                            $typeHash->{$attachment->id} = $attachment->get('type');
                        }
                    }
                    $attributes[$field . 'Ids'] = $idList;
                    $attributes[$field . 'Names'] = $nameHash;
                    $attributes[$field . 'Types'] = $typeHash;
                }
            }
        }

        $attributes['_duplicatingEntityId'] = $id;

        return $attributes;
    }

    protected function afterCreateProcessDuplicating(Entity $entity, $data)
    {
        if (!isset($data['_duplicatingEntityId'])) return;

        $duplicatingEntityId = $data['_duplicatingEntityId'];
        if (!$duplicatingEntityId) return;
        $duplicatingEntity = $this->getEntityManager()->getEntity($entity->getEntityType(), $duplicatingEntityId);
        if (!$duplicatingEntity) return;
        if (!$this->getAcl()->check($duplicatingEntity, 'read')) return;

        $this->duplicateLinks($entity, $duplicatingEntity);
    }

    protected function duplicateLinks(Entity $entity, Entity $duplicatingEntity)
    {
        $repository = $this->getRepository();

        foreach ($this->duplicatingLinkList as $link) {
            $linkedList = $repository->findRelated($duplicatingEntity, $link);
            foreach ($linkedList as $linked) {
                $repository->relate($entity, $link, $linked);
            }
        }
    }




      function broadcast_api($method, $arguments = array()) {
          // update following with proper access info
     $entityManager = $this->getEntityManager();
    
      //$accountList = $entityManager->getRepository('Integration')->limit(0, 10)->find();

      $account  = $entityManager->getEntity('Integration', 'IctBroadcastconfig');
     //  $data = $this->get('data');
      $settings = $account->get('data');
      $token    = $settings->apiKey;
      $ipadrs   = $settings->links;


      $url = ($ipadrs!=''  ? $ipadrs : 'http://202.142.186.26/rest'); // returns true
      $barer = ($token!=''  ? $token : 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOm51bGwsImF1ZCI6IklDVEJyb2FkY2FzdCBBUEkgQ2xpZW50cyIsImlhdCI6MTUxMjQ0Nzg3NywibmJmIjoxNTEyNDQ3ODc3LCJleHAiOjE1NzQ2NTU4NzcsInVzZXJfaWQiOiIzIn0.e4LxMrp9gBf5_j2Mreklh3V7UeeBALiAKjuTQQuOzwmki7qcuis9jKhR1q42o1oHj65S5zS5eYOzdijSekEDs7zcXHQaPX8TGPvHiC71YeezRXLds68IZuuZeiwsPr_NJYXGEhP60CM8YF-nLovY_9zjdZf_DudbyjmSbS4biqI'); // returns true
      //echo "<pre>adeeel";echo $token;echo   $ipadrs ;
     // exit;







          $api_username = 'zuha';    // <=== Username at ICTBroadcast
          $api_password = 'godisone';  // <=== Password at ICTBroadcast
      //    $service_url  = 'http://202.142.186.26/rest'; // <=== URL for ICTBroadcast REST APIs

       $service_url   = $url;

        $post_data    = array();
         /* $post_data    = array(
        'api_username' => $api_username,
        'api_password' => $api_password
          );*/
          $api_url = "$service_url/$method";
          $curl = curl_init($api_url);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl, CURLOPT_POST, true);

          foreach($arguments as $key => $value) {
        if(is_array($value)){
          $post_data[$key] = json_encode($value);
        } else {
          $post_data[$key] = $value;
        }
          }
          curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
          curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$barer));


          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


          // enable following line in case, having trouble with certificate validation
          // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
          $curl_response = curl_exec($curl);
          curl_close($curl);
          return json_decode($curl_response);  

        }
}

