   
<div id="restore-project-dialog" style="display: none;">
  <div id="restore-project-upload" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Import project");?>">
       <div class="dialog-option">  
modal: true,
closeOnEscape :true,
width: 600,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Upload");?>": function() {
        jQuery.sitebuilder.restoreProject.doRestore("#frm-restore-project");  
        jQuery('#restore-project-nextstep').find('#message').html("");
        jQuery('#restore-project-success-form').find('#message').html("");
        jQuery('#restore-project-warning').find('#message').html("");
        jQuery('#restore-project-error').find('#message').html("");
        jQuery('#restore-project-upload').rvsDialog('close');
    },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
        jQuery('#restore-project-upload').rvsDialog('close');
    }
}
  </div>    


    <form name="frm-restore-project" id="frm-restore-project" method="post" enctype="multipart/form-data">		
        <input id="rvsMgr" name="rvsMgr" type="hidden" value="RestoreProject" />  
        <input id="rvsAct" name="rvsAct" type="hidden" value="doupload" />
        <input name="project_id" type="hidden" id="project_id" value="">
			<div class="ui-widget dialogPadding">
            	<div class="ui-state-highlight ui-corner-all"> 
	        		<span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
            		<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Please select your backup project file extension are .tar and .tar.gz");?><br />	
				</div>
				<div align="center" class="dialogPadding"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Select file");?>
                <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isDirectAdminMode'))) if (!$t->isDirectAdminMode()) { ?>
				  <input id="import-project-file" type="file" name="frmImportProjectFile">
				<?php }?>
				</div><br />
			</div>
		</form>		
	</div>


	<div id="restore-project-nextstep" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Restore Project");?>">
        <div class="dialog-option">
modal: true,
closeOnEscape :false,
width: 600
        </div>
        
		<form id="restore-project-nextstep-form" method="post">
	    	<div class="ui-widget">
	        	<div class="ui-state-highlight ui-corner-all"> 
	        		<span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
					<div id="message"></div>            
            	</div>
        	</div>      
        </form>
	</div>
    
	<div id="restore-project-upload-da" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Upload Files");?>">
        <div class="dialog-option">
        modal: false,
closeOnEscape :true,
width: 600,
buttons:{
"<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Upload");?>": function() {
jQuery.sitebuilder.restoreProjectDA.uploadToDirectAdmin('#frmUpReStore');
    },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Cancel");?>": function() {
        jQuery(this).rvsDialog('close');
    }
}
</div>
<div align="center" style="padding-top:20px;">   
<form action="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getHomeUrl"));?>/CMD_FILE_MANAGER" method="post" enctype="multipart/form-data" id="frmUpReStore" name="frmUpReStore">
<div align="center" class="dialogPadding"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Select file");?>&nbsp;
<input name="file1" id="file1" type="file" class ="fileDirectAdmin" />
<input type="hidden" id="pathDA" name="path" value="/.rvsitebuilder/tmp">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo htmlspecialchars($t->uploadMaxFileSize);?>">
<input type="hidden" id="directAdminAction" name="action" value="upload">
</div>
</form>
</div>
</div>
</div>
	
	
    <div id="restore-project-success" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Restore Project");?>">
        <div class="dialog-option">
modal: true,
closeOnEscape :true,
width: 600,
       </div>     
        <form id="restore-project-success-form" method="post">
            <input id="rvsMgr" name="rvsMgr" type="hidden" value="RestoreProject" />  
            <input id="rvsAct" name="rvsAct" type="hidden" value="clean-temp-file" /> 
            <input id="reDirect" name="reDirect" type="hidden" value="" /> 
        </form>
    
        <div class="ui-widget">
            <div class="ui-state-highlight ui-corner-all"> 
        		<span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
				<div id="message"></div>            
            </div>
        </div>
    </div>
    
        
    <div id="restore-project-error" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Error");?>">
        <form id="restore-project-error-form" method="post">
        <div class="dialog-option">
modal: true,
closeOnEscape :true,
width: 600
        </div>        
        <div class="ui-widget">
            <div class="ui-state-highlight ui-corner-all"> 
        		<span class="ui-icon ui-icon-alert" style="float: left; margin-right: 0.3em;"></span>
				<div id="message"></div>
				<div id="cancelRestore"></div>
			</div>
        </div>
        </form>
    </div>
    
    <div id="restore-project-warning" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Warning");?>">        
        <div class="dialog-option">
modal: true,
closeOnEscape :true,
width: 600,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Next");?>": function() {
        jQuery.sitebuilder.restoreProject.doRestore("#restore-project-warning-form");
        jQuery('#restore-project-warning').rvsDialog('close');
    },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
    	jQuery.sitebuilder.restoreProject.clearTmp("#restore-project-warning-form");
    	jQuery('#restore-project-nextstep').rvsDialog('close');	
        jQuery('#restore-project-warning').rvsDialog('close');
    }
}
        </div>
        <form id="restore-project-warning-form" method="post">               
        
	    <div class="ui-widget">
	    	<div class="ui-state-highlight ui-corner-all"> 
        		<span class="ui-icon ui-icon-notice" style="float: left; margin-right: 0.3em;"></span>
				<div id="message"></div>
				<div id="cancelRestore"></div>
			</div>
	    </div>
        </form>
    </div>
    
    <div id="restore-project-warning-confirm" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Warning");?>">        
        <div class="dialog-option">
modal: true,
closeOnEscape :true,
width: 600,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Generate new id");?>": function() {
        jQuery.sitebuilder.restoreProject.genNewId("#restore-project-gennewid-form", "1");
        jQuery('#restore-project-warning-confirm').rvsDialog('close');
    },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Over write");?>": function() {
        jQuery.sitebuilder.restoreProject.genNewId("#restore-project-gennewid-form", "0");
        jQuery('#restore-project-warning-confirm').rvsDialog('close');
    },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
    	jQuery.sitebuilder.restoreProject.clearTmp("#restore-project-gennewid-form");
    	jQuery('#restore-project-nextstep').rvsDialog('close');	
        jQuery('#restore-project-warning-confirm').rvsDialog('close');
    }
}
        </div>
        <form id="restore-project-gennewid-form" method="post">  
	    <div class="ui-widget">
	    	<div class="ui-state-highlight ui-corner-all"> 
        		<span class="ui-icon ui-icon-notice" style="float: left; margin-right: 0.3em;"></span>	    		
	    		<div id="message"></div>
	        	<div id="genNewId"></div>
	        	<div id="cancelRestore"></div>
	        </div>
	    </div>
        </form>
    </div>

</div>

