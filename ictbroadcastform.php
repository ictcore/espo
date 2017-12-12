<link rel="stylesheet" href="client/css/bootstrap.css">

<script src="client/lib/jquery-2.1.4.min.js"></script>

<script src="client/lib/bootstrap.min.js"></script>


<form method="post" action="" enctype="multipart/form-data" target="_parent" style="margin-top: -57;">
<div class="cell form-group" data-name="campaign_type">
    <label class="control-label" data-name="group">Group</label>
<div class="field" data-name="group" >
    <input class="main-element form-control" name="group" id="group_name" value="" autocomplete="off" type="text">
    </div>
</div>

<div class="cell form-group" data-name="campaign_type">
    <label class="control-label" data-name="campaign_type">Select Campaign Type</label>
    <!--<div class="field" data-name="format">{{{format}}}</div>-->
 <div class="field" data-name="campaign_type">
<select name="campaign_type" id = "c_type" class="form-control main-element"> 
        <option value="voice" selected="">Message Campaign</option>
       <!-- <option value="voice_agent">Agent Campaign</option>-->
        <option value="voice_interactive">Interactive Campaign</option>

      <!--  <option value="voice_ivr">IVR Campaign</option>-->
        <option value="fax">Fax Campaign</option>
</select>   
</div>
</div>


<div id="page-load" ><img src="http://loadinggif.com/images/image-selection/29.gif" /></div> 

   <div class="form-group"  id="file">
								
						<label class="control-label" data-name="campaign_type">Choose File</label>
								<input type="file" name="fle" id="fle"  class="input-large" >

							</div>
<?php 

$arguments = array();
     $result  = broadcast_api('User_Extension_List', $arguments);
     if($result[0] == true) {
       $extention_data = $result[1];
   //  print_r($contact_group_id);
     } else {
       $errmsg = $result[1];
       return $errmsg;
     }

?>
				        <div class="form-group"  id="press1" style="display:none">
				        <label class="control-label" data-name="campaign_type">Select Extention</label>
						<select name="extension" id="extension" class="select2 form-control">
						<!--{foreach $Campaign_type as $Campaign_types}
						<option value="{$Campaign_types->extension_id}">{$Campaign_types->name}</option>
						{/foreach}-->
						<?php if($extention_data!=''){ foreach($extention_data as $extentions){ ?>
						<option value="<?php echo $extentions->extension_id ?>"><?php echo $extentions->name ?></option>
						<?php }} ?>
						</select>
						</div>
						<input type="hidden" value="" id="message_id" name="message_id"> 
						</form>

<?php
function broadcast_api($method, $arguments = array()) {
	  // update following with proper access info
	  $api_username = 'admin';    // <=== Username at ICTBroadcast
	  $api_password = 'aDe4e832';  // <=== Password at ICTBroadcast
	  $service_url  = 'http://13.56.232.140/rest'; // <=== URL for ICTBroadcast REST APIs

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
?>
<script type="text/javascript">
jQuery(document).ready(function() {

	  $("#c_type").change(function()
    {
        var id=$(this).val();

        var dataString = 'id='+ id;
        // alert(id); 
        if(id=='voice_interactive'){
        	// alert(id); 
          $("#file").show();
          $("#press1").show();

        }else{

        	$("#file").show();
        	$("#press1").hide();

        }
       
    });
});


var files;

// Add events
$('input[type=file]').on('change', prepareUpload);
$('#page-load').hide();
// Grab the files and set them to our variable
function prepareUpload(event)
{

  files = event.target.files;

var test = 'hello';
 // alert(JSON.stringify(files));


 var formData = new FormData();


formData.append('file', $('#fle')[0].files[0]);

formData.append('campaign_type',$('#c_type').val());

formData.append('group_name',$('#group_name').val());

        //  alert(JSON.stringify(formData));

$('#page-load').hide();

$.ajax({
        url: 'submit.php',
         type: 'POST',
        data: formData,
        cache: false,
        dataType: 'json',
        processData: false, // Don't process the files
        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
        success: function(data, textStatus, jqXHR)
        {  
          $('#page-load').show();
        	if(JSON.stringify(data.errors.error)!=0){

        	alert(JSON.stringify(data.errors.error));
        	$('#fle').val('');
        	$('#page-load').hide();
        }
        	else{
       // alert(JSON.stringify(data.m_id));
          $('#message_id').val(JSON.stringify(data.m_id));
            
            $('#page-load').hide();
          //$(".btn-danger").removeAttr("disabled");
          

      }

          },
      
    });
}

</script>