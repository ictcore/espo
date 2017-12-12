<iframe src='ictbroadcastform.php' name='select_frame' width="100%" height="280" frameBorder="0"  scrolling="no" ></iframe>
<!--ggg -->
<div class="cell form-group" data-name="exportAllFields">
    <label class="control-label" data-name="exportAllFields">{{translate 'Select All Field' category='fields' scope='Export'}}</label>
    <div class="field" data-name="exportAllFields">{{{exportAllFields}}}</div>
</div>

<div class="cell form-group" data-name="fieldList">
    <label class="control-label" data-name="fieldList">ICTBroadcast</label>
    <div class="field" data-name="fieldList">{{{fieldList}}}</div>
</div>
<script>
//$(".btn-danger").attr("disabled", "disabled");
var message_ids = $('iframe[name=select_frame]').contents().find('#message_id').val();
var message_id = $('iframe[name=select_frame]').contents().find('#message_id').val();


         alert(message_id);

//$('input:checkbox').attr('checked', 'checked');
//exportAllFields
</script>