<div id="removeProject" style="display: none;">
    <div id="removeProject-conmirm" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Remove Project");?>" style="padding:10px;">
        <div class="dialog-option">
modal: true,
closeOnEscape :true,
width: 600,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Remove");?>": function() {
        jQuery.sitebuilder.removeProject.doRemove("#removeProject-conmirm");
    },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Cancel");?>": function() {
        jQuery('#removeProject-conmirm').rvsDialog('close');
    }
}
        </div>
        
        <form name="FrmRemoveProject" id="FrmRemoveProject" method="post">
            <input name="rvsMgr" type="hidden" value="RemoveProject" />  
            <input name="rvsAct" type="hidden" value="doRemove" />
            <input id="project_id" name="project_id" type="hidden" value="" />
            <div class="ui-widget">
                <div class="ui-state-highlight ui-corner-all"> 
                    <span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Click \"Remove\" to confirm delete project.");?>
                </div>
            </div>
            <div class="dialogPadding">    
                <strong><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project ID");?> : <span id="removeProjectID"></span></strong><br />
                <strong><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project Name");?> : <span id="removeProjectName"></span></strong>
            </div> 
            <div class="dialogPadding">    
           <label for="removeFolderPublish">
                <input name="removeFolderPublish" id="removeFolderPublish" type="checkbox" value="1" class="bclear" />
                <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Do you want to remove folder published all web site.");?>
            </label>
            </div>
        </form>
    </div>
    
    <div id="removeProject-success" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Remove Project");?>">
        <div class="dialog-option">
closeOnEscape :false,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
        jQuery('#removeProject-success').rvsDialog('close');
    }
},
close: function() {
    jQuery("#removeProject-wait").rvsDialog('open', {});
    jQuery.sitebuilder.Log.logMessage("Close", LOG_PRIORITY.DEBUG);
    window.location = '<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","sitebuilder","sitebuilder"));?>';
}       
        </div>
        <div align="center" style="padding-top:20px;">  
        <span id="removeProject-message"></span>
        </div>
    </div>
    
    <div id="removeProject-wait" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Please wait");?>">
        <div class="dialog-option">
closeOnEscape :false
        </div>
        <div class="ui-progressbar-indicator">  
        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Please wait");?>...
        </div>
    </div>
</div>