<?php

namespace Espo\Modules\ICTExtention\Controllers;

class ICTExtention extends \Espo\Core\Controllers\Record
{
  /* public function __construct ($params, $data, $request) {
  echo "heloo this is testing";
  echo "<pre>";print_r($data);
  exit;
  }*/
   
  public function actionCreate($params, $data, $request)
  {
      
      //echo "heloo this is testing";
      // echo "<pre>";print_r($data);

      // exit;
      if($data['contactcsvIds'][0]!='' &&  $data['recordIds'][0]!='' && $data['type']!=''){
      $cv_id = $data['contactcsvIds'][0];
      $recrd_id = $data['recordIds'][0];

	  /*$attachment = $this->getEntityManager()->getEntity('Attachment', $cv_id);

		  if (!$attachment) {
		      throw new NotFound();
		  }

		  if (!$this->getAcl()->checkEntity($attachment)) {
		      throw new Forbidden();
		  }
		  echo $this->getEntityManager()->getRepository('Attachment');

		echo  $sourceId = $attachment->getSourceId();
		  $type = $type = $attachment->get('type');     
		  if ($this->getEntityManager()->getRepository('Attachment')->hasDownloadUrl($attachment)) {
		    echo "if";
		    echo  $downloadUrl = $this->getEntityManager()->getRepository('Attachment')->getDownloadUrl($attachment);
		      header('Location: ' . $downloadUrl);
		      exit;
		  }

		    $outputFileName = $attachment->get('name');
		    echo $outputFileName = str_replace("\"", "\\\"", $outputFileName)."<br>";
		  echo "hello jenab"."===========". $fileName = $this->getEntityManager()->getRepository('Attachment')->getFilePath($attachment);


		      header("Content-Disposition: " . $disposition . ";filename=\"" . $outputFileName . "\"");
		  header('Expires: 0');
		  header('Cache-Control: must-revalidate');
		  header('Pragma: public');
		  header('Content-Length: ' . filesize($fileName));

		  readfile($fileName);*/


	  $path_record = 'data/upload/'.$recrd_id;

	  $name            = 'data/upload/'.$cv_id;
	  $group_name      =    $data['group'];
	  $campaign_name   = $data['campaign'];
	  /* inserting import file contacts */
	    
	  /*while (($value = fgetcsv($file_tm, 10000, ",")) !== FALSE)
	  {
	    if(!empty($value))
	    {
		//echo $getData[0];
	      echo "<pre>";print_r($value);
	      
	    }
	    $i++;
	  }*/

	
	  
	  $arguments = array('contact_group'=> array('name' => $group_name));
	      $result  = $this->broadcast_api('Contact_Group_Create', $arguments);
	      if($result[0] == true) {
		
		$contact_group_id = $result[1];
		print_r($contact_group_id);
	      } else {
		$errmsg = $result[1];
		print_r($errmsg);
	      }


	      /*  $arguments = array('contact_group_id'=> $contact_group_id, 'type' => 'file', 'source_file'=> '@'.$name);
	      $result = $this->broadcast_api('Contact_Import', $arguments);
	      if($result[0] == true) {
		$contact_count = $result[1];
		print_r($contact_count);
	      } else {
		$errmsg = $result[1];
		print_r($errmsg);
	      }
	  */
	      
	   $public=0;
	    $finfo = new \finfo(FILEINFO_MIME_TYPE);
	    $mimetype = $finfo->file($name);
	    $cfile = curl_file_create($name, $mimetype, basename($name));
	    // $arguments = ['file' => $cfile, 'public' => $public];


	      $arguments = array('contact_group_id'=> $contact_group_id, 'type' => 'file', 'source_file'=>$cfile);

	      $result = $this->broadcast_api('Contact_Import', $arguments);
	      if($result[0] == true) {
		$contact_count = $result[1];
		print_r($contact_count);
	      } else {
		$errmsg = $result[1];

		print_r($errmsg);
	      }

	  $mimetyper = $finfo->file($path_record);
	    $m_file = curl_file_create($path_record, $mimetyper, basename($path_record));



if($data['type']=='voice'){
	$method = 'Recording_Create';
	$method_campaign =  'Campaign_Create';

}elseif($data['type']=='fax'){

   $method = 'Document_Create';
	$method_campaign =  'Campaign_Fax_Create';

}



	  $arguments = array('title'=> $group_name.'_'.$campaign_name, 'media'=>$m_file);
	      $result = $this->broadcast_api($method, $arguments);
	      if($result[0] == true) {
		$recording_id = $result[1];
		print_r($recording_id);
	      } else {
		$errmsg = $result[1];
		print_r($errmsg);
	      }

		  $campaign = array(
		  'contact_group_id'  => $contact_group_id,     //  contact_group_id
		  'message'           => $recording_id,     //  recording_id
	      );
	      $arguments = array('campaign'=>$campaign);
	      $result = $this->broadcast_api($method_campaign , $arguments);
	      if($result[0] == true) {
		$campaign_id = $result[1];
		echo "campaign";
		print_r($campaign_id);
	      } else {
		      echo "campaignerror";
		      $errmsg = $result[1];
		      print_r($errmsg);
	      } 

	       $arguments = array('campaign_id'=>$campaign_id);
           $result = broadcast_api('Campaign_Start', $arguments);
           // print_r($result[1]);

		      /* $arguments = array('campaign_id'=>$campaign_id);
		      $result = $this->broadcast_api('Campaign_Status', $arguments);
		      if($result[0] == true) {
			$status = $result[1];
		      } else {
			$status = 'Campaign not found';
		      }
		      print_r($status);
		  */
		  /* $file_tmpname = $name;
		  $file_tm = fopen($file_tmpname, "r");
		  /* inserting import file contacts */
		    
		  /* while (($value = fgetcsv($file_tm, 10000, ",")) !== FALSE)
		  {
		    if(!empty($value))
		    {
			//echo $getData[0];
		      echo "<pre>";print_r($value);
		      
		    }
		    $i++;
		  }*/
	  if (!$request->isPost()) {
		      echo "bad";
		      throw new BadRequest();
		  }

		  if (!$this->getAcl()->check($this->name, 'create')) {
		    echo "good";
		      throw new Forbidden();
		  }

		 // $service = $this->getRecordService();

		  //if ($entity = $service->createEntity($data)) {
		    echo "very god";
		      return $data;
		 // }
		}
		else{
	  echo "the end";
		  throw new Error();
		}

    }
 public function actionList($params, $data, $request)
 {
        if (!$this->getAcl()->check($this->name, 'read')) {
        	echo "adeel";
        	exit;
            throw new Forbidden();
        }
    //   cho "<pre>";print_r($data);
       $where = $request->get('where');
        $offset = $request->get('offset');
        $maxSize = $request->get('maxSize');
        $asc = $request->get('asc', 'true') === 'true';
        $sortBy = $request->get('sortBy');
        $q = $request->get('q');
        $textFilter = $request->get('textFilter');

        if (empty($maxSize)) {
            $maxSize = self::MAX_SIZE_LIMIT;
        }
        if (!empty($maxSize) && $maxSize > self::MAX_SIZE_LIMIT) {
            throw new Forbidden("Max should should not exceed " . self::MAX_SIZE_LIMIT . ". Use pagination (offset, limit).");
        }

        $params = array(
            'where' => $where,
            'offset' => $offset,
            'maxSize' => $maxSize,
            'asc' => $asc,
            'sortBy' => $sortBy,
            'q' => $q,
            'textFilter' => $textFilter
        );

        $this->fetchListParamsFromRequest($params, $request, $data);

        $result = $this->getRecordService()->findEntities($params);
//cho "<pre>";print_r($result['collection']);

    // Campaign_List
    
    /* echo "<pre>adeeel";print_r($data );
     $entityManager = $this->getEntityManager();
     
    
      //$accountList = $entityManager->getRepository('Integration')->limit(0, 10)->find();
      
      $account  = $entityManager->getEntity('Integration', 'IctBroadcastconfig');
	 //  $data = $this->get('data');
      $settings = $account->get('data');
      $token    = $settings->apiKey;
      $ipadrs   = $settings->links;
	  echo "<pre>adeeel";echo $token;echo   $ipadrs ;
	  exit;*/

  $arguments = array();
	      $result  = $this->broadcast_api('Campaign_List', $arguments);
	     //echo "<pre>";print_r(get_object_vars($result)$result );

$i=0;
foreach($result[1] as $val){

	      	$list[] = ($val->name);
	      //	$group[] = $list[$i];
	      
	      $campaign[$i]['campaign'] =  $list[$i];
	         $idlist[] =($val->campaign_id);
	      $campaign[$i]['id'] = $idlist[$i];
	      	$i++;
	      }
	      // $result = array_merge($group, $id);

//$gggg['group']=$group;
 //echo "<pre>";print_r((object)$gggg);
	   // $test  =  array('group'=>$group,'campaign'=>'double test');

//$object = json_decode(json_encode($group), FALSE);
//echo "<pre>";print_r($object);

return array('total'=>count($campaign),
	'list'=>$campaign);


       /* return array(
            'total' => $result['total'],
            'list' => isset($result['collection']) ? $result['collection']->toArray() : $result['list']
        );*/
    }
    
    
    
    
    
    
    
    
     public function actionUpdate($params, $data, $request)
    {
       

        throw new Error();
    }
    public function actionListLinked($params, $data, $request)
    {
      
            throw new Forbidden();
      
    }

    public function actionDelete($params, $data, $request)
    {
  
        throw new Error();
    }

    public function actionExport($params, $data, $request)
    {
            throw new Forbidden();
    }


   public function actionIctbroadcast($params, $data, $request)
    {

         throw new Forbidden();
     
        
    }
    public function actionMassUpdate($params, $data, $request)
    {
         throw new Forbidden();
     
    }

    public function actionMassDelete($params, $data, $request)
    {
         throw new Forbidden();
     
    }

    public function actionCreateLink($params, $data, $request)
    {
       

        throw new Error();
    }

    public function actionRemoveLink($params, $data, $request)
    {
    

        throw new Error();
    }

    public function actionFollow($params, $data, $request)
    {
        throw new Error();
    }

    public function actionUnfollow($params, $data, $request)
    {
        throw new Error();
    }

    public function actionMerge($params, $data, $request)
    {
         throw new Error();
    }

    public function postActionGetDuplicateAttributes($params, $data, $request)
    {
        throw new Error();
    }

    public function postActionMassFollow($params, $data, $request)
    {
       throw new Error();
    }

    public function postActionMassUnfollow($params, $data, $request)
    {
        throw new Error();
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
?>