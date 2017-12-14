ICTBroadcast Module Install in Espocrm
====================================

#### Install Module ICTBroadcast
---------------------------------

* __Go to menu__
* __Click "Administration"__
[![Image Alt Text](https://www.ictbroadcast.com/sites/default/files/espo_ictbroadcast/admin/espoScreenshotd1.png)](https://www.ictbroadcast.com/sites/default/files/espo_ictbroadcast/admin/espoScreenshotd1.png)
* __then go to CRM Extensions in Customization part__
[![Image Alt Text](https://www.ictbroadcast.com/sites/default/files/espo_ictbroadcast/admin/espoScreenshotd2.png)](https://www.ictbroadcast.com/sites/default/files/espo_ictbroadcast/admin/espoScreenshotd2.png)
* __Select Zip file ICTBroadcast Module And click  Import button to install module __
[![Image Alt Text](https://www.ictbroadcast.com/sites/default/files/espo_ictbroadcast/admin/espScreenshotd4.png)](https://www.ictbroadcast.com/sites/default/files/espo_ictbroadcast/admin/espScreenshotd4.png)
* __When Module installed then changes three files __

#### File 1
-------------------------------
 Espocrm directory >>application>>Espo>>Core>>Controllers>>Record.php
 
 * Find Function __"actionExport"__ and add code after __"actionExport"__ function
 * __Code__
 
```json

    public function actionIctbroadcast($params, $data, $request)
    {
         if (!$request->isPost()) {
            throw new BadRequest();
        }
        if ($this->getConfig()->get('exportDisabled') && !$this->getUser()->isAdmin()) {
            throw new Forbidden();
        }
        if (!$this->getAcl()->check($this->name, 'read')) {
            throw new Forbidden();
        }
        $ids = isset($data['ids']) ? $data['ids'] : null;
        $where = isset($data['where']) ? json_decode(json_encode($data['where']), true) : null;
        $byWhere = isset($data['byWhere']) ? $data['byWhere'] : false;
        $selectData = isset($data['selectData']) ? json_decode(json_encode($data['selectData']), true) : null;
        $params = array();
        if ($byWhere) {
            $params['selectData'] = $selectData;
            $params['where'] = $where;
        } else {
            $params['ids'] = $ids;
        }
        if (isset($data['attributeList'])) {
            $params['attributeList'] = $data['attributeList'];
        }
        if (isset($data['fieldList'])) {
            $params['fieldList'] = $data['fieldList'];
        }
        if (isset($data['format'])) {
            $params['format'] = $data['format'];
        }
        if (isset($data['group'])) {
            $params['group'] = $data['group'];
        }
        if (isset($data['campaign_type'])) {
            $params['campaign_type'] = $data['campaign_type'];
        }
        return array(
            'id' => $this->getRecordService()->Ictbroadcast($params)
        );  
    }
```
#### File 2 
----------------------------------
 Espocrm directory >>application>>Espo>>Services>>Record.php
 
 * Find Function __" public function export(array $params)"__ and add function after __" public function export(array $params) "__ Function
 * __Code__
 
```json
	public function Ictbroadcast(array $params)
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
	  return $json_data;
      }
     ///////////////////////////////////////////////////////////////////////APi////////////////////////////////////////////////////
    function broadcast_api($method, $arguments = array()) {
          // update following with proper access info
     $entityManager = $this->getEntityManager();
      $account  = $entityManager->getEntity('Integration', 'IctBroadcastconfig');
      $settings = $account->get('data');
      $token    = $settings->apiKey;
      $ipadrs   = $settings->links;
      $url = ($ipadrs!=''  ? $ipadrs : 'http://202.142.186.26/rest'); // returns true
      $barer = ($token!=''  ? $token : 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOm51bGwsImF1ZCI6IklDVEJyb2FkY2FzdCBBUEkgQ2xpZW50cyIsImlhdCI6MTUxMjQ0Nzg3NywibmJmIjoxNTEyNDQ3ODc3LCJleHAiOjE1NzQ2NTU4NzcsInVzZXJfaWQiOiIzIn0.e4LxMrp9gBf5_j2Mreklh3V7UeeBALiAKjuTQQuOzwmki7qcuis9jKhR1q42o1oHj65S5zS5eYOzdijSekEDs7zcXHQaPX8TGPvHiC71YeezRXLds68IZuuZeiwsPr_NJYXGEhP60CM8YF-nLovY_9zjdZf_DudbyjmSbS4biqI'); // returns true
       $service_url   = $url;
        $post_data    = array();
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
      
```
#### File 3
-------------------------------
 Espocrm directory >>client>>src>>views>>record>>list.js
 
 * __Code__
 
```json
     * Find Function massActionList: ['remove', 'merge', 'massUpdate', 'export'],
     and add Ictbroadcast in this array like this    massActionList: ['remove', 'merge', 'massUpdate', 'export','Ictbroadcast']
     
      * Find Function __ checkAllResultMassActionList: ['remove', 'massUpdate', 'export'],
      and add Ictbroadcast in this array like this    checkAllResultMassActionList: ['remove', 'massUpdate', 'export','Ictbroadcast'],and also add    IctbroadcastAction:true,
      after   checkAllResultMassActionList: ['remove', 'massUpdate', 'export','Ictbroadcast']
      
       * Find Function " export: function (data, url, fieldList)" and add code after " export: function (data, url, fieldList)" function
      
      Ictbroadcast: function (data, url, fieldList) {
           // alert('hello');
            if (!data) {
                data = {};
                if (this.allResultIsChecked) {
                    data.where = this.collection.getWhere();
                    data.selectData = this.collection.data || {};
                    data.byWhere = true;
                } else {
                    data.ids = this.checkedList;
                }
            }
            var url = url || this.entityType + '/action/Ictbroadcast';
            var o = {
                scope: this.entityType
            };
            if (fieldList) {
                o.fieldList = fieldList;
            } else {
                var layoutFieldList = [];
                (this.listLayout || []).forEach(function (item) {
                    if (item.name) {
                        layoutFieldList.push(item.name);
                    }
                }, this);
                o.fieldList = layoutFieldList;
            }

            this.createView('dialogICTbroadcast', 'views/Ictbroadcast/modals/Ictbroadcast', o, function (view) {
                view.render();
                this.listenToOnce(view, 'proceed', function (dialogData) {
                    if (!dialogData.exportAllFields) {
                        data.attributeList = dialogData.attributeList;
                        data.fieldList = dialogData.fieldList;
                    }
                    data.format = dialogData.format;
                    this.ajaxPostRequest(url, data).then(function (data) {
                       
                    }.bind(this));
                }, this);
            }, this);
        },
        
         massActionIctbroadcast: function () {
            if (!this.getConfig().get('exportDisabled') || this.getUser().get('isAdmin')) {
                this.Ictbroadcast();
            }
        },

```

#### Integration ICTBroadcast
---------------------------------
* __Go to menu__
* __Click "Administration"__
[![Image Alt Text](https://www.ictbroadcast.com/sites/default/files/espo_ictbroadcast/admin/espoScreenshotd5.png)](https://www.ictbroadcast.com/sites/default/files/espo_ictbroadcast/admin/espoScreenshotd5.png)
* __then go to  Integrations in System part__
[![Image Alt Text](https://www.ictbroadcast.com/sites/default/files/espo_ictbroadcast/admin/espoScreenshotd6.png)](https://www.ictbroadcast.com/sites/default/files/espo_ictbroadcast/admin/espoScreenshotd6.png)
* __Click IctBroadcastconfig __
[![Image Alt Text](https://www.ictbroadcast.com/sites/default/files/espo_ictbroadcast/admin/espoScreenshotd7.png)](https://www.ictbroadcast.com/sites/default/files/espo_ictbroadcast/admin/espScreenshotd7.png)
* __Enter Api link and acess key IctBroadcast __
* __ANd  change file __

#### Integration File
-------------------------------
 Espocrm directory >>application>>Espo>>Resources>>i18n>>en_US>>Integration.json
 * Find  __"titles"__ and add code with in __"titles"__
 * __Code__
 
```json

    "ictbroadcastconfig": "ICTBroadcast Config"
    
```
 fields
 
  * Also Find  __"fields"__ in this file and add code with in __"fields"__ last
 * __Code__
 
```json

     "links": "ICTBroadcast Api"
    
```
__Now Module is ready for runnig  Portion__

