<div class="cell form-group" data-name="group">
    <label class="control-label" data-name="group">Group</label>
   <!--<div class="field" data-name="format">{{{format}}}</div>-->
    <div class="field" data-name="group">
    <input class="main-element form-control" name="group" value="" autocomplete="off" type="text">
    </div>
</div>

<div class="cell form-group" data-name="campaign_type">
    <label class="control-label" data-name="campaign_type">Select Campaign Type</label>
    <!--<div class="field" data-name="format">{{{format}}}</div>-->
    <div class="field" data-name="campaign_type">
<select name="campaign_type" class="form-control main-element"> 
        <option value="voice" selected="">Message Campaign</option>
        <option value="voice_agent">Agent Campaign</option>
        <option value="voice_interactive">Interactive Campaign</option>
        <option value="voice_ivr">IVR Campaign</option>
        <option value="fax">Fax Campaign</option>
</select>   
</div>
</div>




<div class="cell form-group" data-name="exportAllFields">
    <label class="control-label" data-name="exportAllFields">{{translate 'exportAllFields' category='fields' scope='Export'}}</label>
    <div class="field" data-name="exportAllFields">{{{exportAllFields}}}</div>
</div>

<div class="cell form-group" data-name="fieldList">
    <label class="control-label" data-name="fieldList">ICTBroadcast</label>
    <div class="field" data-name="fieldList">{{{fieldList}}}</div>
</div>
