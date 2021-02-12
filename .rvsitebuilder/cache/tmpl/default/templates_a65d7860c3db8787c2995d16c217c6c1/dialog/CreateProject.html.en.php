 <div id="windowconfigviewlog" style="display: none;">  
  <div id="changLangForm" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Title Please Confirm");?>">
       <div class="dialog-option">
        
closeOnEscape :true,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Ok");?>": function() {
  jQuery.sitebuilder.createProject.changeWebLange("#changLangForm");
    },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Cancel");?>": function() {
        jQuery('#changLangForm').rvsDialog('close');
    }
}
       </div> 
    <div class="ui-widget">
                <div class="ui-state-highlight ui-corner-all"> 
                    <p><span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Are you sure to change language this project.");?>
                    </p>
                </div>
            </div>  
    <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Change langauge warning"));?>
       
	</div>  
</div>
<div id="wysiwygsource" style="display: none;">  
<div id="wysiwygsourceForm">
<div class="dialog-option">
closeOnEscape :true,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Cancel");?>": function() {
        jQuery(this).rvsDialog('close');
    }
}
       </div> 
     <div id="wysiwygsourceFormDisplay"></div>
    </div>  
</div>


<div id="dialog-creteproject-hidden" style="display: none;">
    
    <div id="dialog-createproject-remove-logo" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Remove Logo");?>">
    
        <div class="dialog-option">
            modal: true,
            closeOnEscape :false,
            buttons:{}
        </div>
       
	   <div id="showResultMsg">
		    <div class="ui-widget">
		        <div class="ui-state-highlight ui-corner-all"> 
		        <span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
		                      <div id="status-msg-success"></div>
		        </div>
		    </div>
		</div>

    </div>
	
</div>

<div id="windowconfigviewlog" style="display: none;"> <!--  -->
    <div id="uploadFormx" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Upload Logo");?>">
        <div class="dialog-option">
        modal: false,
closeOnEscape :true,
width: 600,
buttons:{
"<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Upload");?>": function() {
        jQuery.sitebuilder.createProjectDA.doUploadLogo('#frmUploadLogo');
    },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Cancel");?>": function() {
        jQuery(this).rvsDialog('close');
    }
}

</div>
<div align="center" style="padding-top:20px;">   
<form action="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getHomeUrl"));?>/CMD_FILE_MANAGER" method="post" enctype="multipart/form-data" id="frmUploadLogo" name="frmUploadLogo">
<div align="center" class="dialogPadding"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Select file");?>&nbsp; 
<input name="file1" id="file1" class="fileDirectAdmin" type="file" />
<input type="hidden" id="pathDA" name="path" value="/.rvsitebuilder/tmp">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo htmlspecialchars($t->uploadMaxFileSize);?>">
<input type="hidden" id="directAdminAction" name="action" value="upload">
</div>
</form>
</div>
</div>
</div>