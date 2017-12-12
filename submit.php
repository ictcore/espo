<?php 

//echo "<pre>eweweew";print_r($_POST);

//echo "<pre>Files";print_r($_FILES);


//echo "<pre>eweweew";print_r($_POST['campaign_type']);
$campaing_type = $_POST['campaign_type'];
if($campaing_type !='' && $_POST['group_name']){
if(($_POST['campaign_type']=='voice' AND $_FILES['file']['type']=='audio/x-wav') OR ($campaing_type == 'fax' AND ($_FILES['fle']['type']=='application/pdf' OR $_FILES['fle']['type']=='image/tiff' )) OR ($campaing_type =='voice_interactive' AND $_FILES['fle']['type']=='audio/x-wav') ){
  //echo "<pre>";print_r($_FILES);

if($campaing_type=='voice' OR $campaing_type == 'voice_interactive'){
   $method = 'Recording_Create';

}elseif($campaing_type=='fax'){

	$method = 'Document_Create';
}

$mimetyper = $_FILES['file']['type'];
		$m_file = curl_file_create($_FILES['file']['tmp_name'], $mimetyper, basename($_FILES['file']['tmp_name']));
		$arguments = array('title'=> $_POST['group_name'], 'media'=>$m_file);


$result = broadcast_api($method, $arguments);

		if($result[0] == true) {

			$recording_id = $result[1];

			$data['m_id'] = $recording_id ;
			$data['errors'] = array('error'=>0);

			//print_r($recording_id);
		} else {
			$errmsg = $result[1];
			$data['errors'] = array('error' => 'Some thning Wrong');
		}




}
else{

	$data['errors'] = array('error' => 'Please Select the Correct Files According to Campaign Type') ;
}
}
else{
$data['errors'] = array('error' => 'Please Enter Group Name And Campaign Type') ;

}

/*if(isset($_GET['uploadFiles']))
{  
    $error = false;
    $files = array();

    $uploaddir = './uploads/';

    foreach($_FILES as $file)
    {
       
    }
    $data = ($error) ? array('error' => 'There was an error uploading your files') : array('files' => $files);
}
else
{
    $data = array('success' => 'Form was submitted', 'formData' => $_POST);
}*/

function broadcast_api($method, $arguments = array()) {
	  // update following with proper access info
	  $api_username = 'zuha';    // <=== Username at ICTBroadcast
	  $api_password = 'godisone';  // <=== Password at ICTBroadcast
	  $service_url  = 'http://202.142.186.26/rest'; // <=== URL for ICTBroadcast REST APIs

	  $post_data    = array(
	    'api_username' => $api_username,
	    'api_password' => $api_password
	  );
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
	  // enable following line in case, having trouble with certificate validation
	  // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	  $curl_response = curl_exec($curl);
	  curl_close($curl);
	  return json_decode($curl_response);  

	}






echo json_encode($data);






?>