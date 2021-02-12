<!-- BEGIN::Backup Project Dialog -->
<div id="backup-project-dialog" style="display: none;">

    <div id="backup-project-confirm" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Export Project");?>">
        
        <div class="dialog-option">
modal: true,
closeOnEscape :true,
width: 600,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Next");?>": function() {
        jQuery(this).rvsDialog('close');
        jQuery.sitebuilder.backupProject.doBackup("#backup-project-confirm-form","backup");
    },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
        jQuery('#backup-project-confirm').rvsDialog('close');
    }
}
        </div>
        
        <form id="backup-project-confirm-form" name="backup-project-confirm-form" method="post">
            <input name="rvsMgr" type="hidden" value="BackupProject" />  
            <input name="rvsAct" type="hidden" value="dovalidate" /> 
            <input id="project_id" name="project_id" type="hidden" value="" />
        </form> 
        <div class="dialogPadding">
        	<div class="ui-widget">
            	<div class="ui-state-highlight ui-corner-all">
               		<!--<span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span> -->
					<div style="padding:5px;"><img class="SPicon SPs6_warning_s2" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="18" height="16" border="0" align="absmiddle" />&nbsp;<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Backup Project Description2");?></div>
            	</div>
        	</div>
        	<div>    
            	<strong><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project ID");?> : <span id="set-backup-project-id"></span></strong><br />
            	<strong><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project Name");?> : <span id="set-backup-project-name"></span></strong>
        	</div>
         	<div> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Click \"Yes\" to export the project");?></div>
        </div>
    </div>
    
    <div id="backup-project-nextstep" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Export Project");?>">
        <div class="dialog-option">
modal: true,
closeOnEscape :true,
width: 600
        </div>
        
        <form id="backup-project-nextstep-form" method="post">
            <input id="rvsMgr" name="rvsMgr" type="hidden" value="BackupProject" />  
            <input id="rvsAct" name="rvsAct" type="hidden" value="dovalidate" /> 
            <input id="project_id" name="project_id" type="hidden" value="" />
        </form>
    
        <div class="ui-widget dialogPadding">
        	<div class="ui-state-highlight ui-corner-all"> 
        		<!-- <span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span> -->
            	<div style="float:left;"><img class="SPicon SPs6_warning_s2" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="18" height="16" border="0" align="absmiddle" />&nbsp;&nbsp;</div>
            	<div id="message"></div>
            </div>
        </div>
    </div>
    
    <div id="backup-project-success" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Export Project");?>">
        <div class="dialog-option">
modal: true,
closeOnEscape :true,
width: 600,
buttons:{
	"<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
        jQuery('#backup-project-success').rvsDialog('close');
    }
}
        </div>     
        <form id="backup-project-success-form" method="post">
            <input id="rvsMgr" name="rvsMgr" type="hidden" value="BackupProject" />  
            <input id="rvsAct" name="rvsAct" type="hidden" value="dovalidate" /> 
            <input id="project_id" name="project_id" type="hidden" value="" />
        </form>
    
        <div class="ui-widget dialogPadding">
        	<div class="ui-state-highlight ui-corner-all"> 
        		<!--<span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>-->
        		<div style="padding:5px;">
					<img class="SPicon SPs6_warning_s2" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="18" height="16" border="0" align="absmiddle" />&nbsp;&nbsp;<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Export Project Complete");?>
            		<div id="message"></div>
            	</div>	
            </div>
        </div>
    </div>
    
        
    <div id="backup-project-error" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Error");?>">
        <form id="backup-project-error-form" method="post">
        <div class="dialog-option">
modal: true,
closeOnEscape :true,
width: 600,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
        jQuery('#backup-project-error').rvsDialog('close');
    }
}
        </div>
        </form>
        <div class="ui-widget dialogPadding">
        	<div class="ui-state-highlight ui-corner-all message_publish"> 
				<!--<span class="ui-icon ui-icon-notice" style="float: left; margin-right: 0.3em;"></span> -->
				<div style="padding:5px;">	
					<div style="float: left;"><img class="SPicon SPs6_warning_s2" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="18" height="16" border="0" align="absmiddle" />&nbsp;&nbsp;</div><div id="message"></div>
				</div>
            </div>
        </div>
    </div>
    
    <div id="backup-project-warning" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Warning");?>">
        <form id="backup-project-warning-form" method="post">
            <input id="rvsMgr" name="rvsMgr" type="hidden" value="BackupProject" />  
            <input id="rvsAct" name="rvsAct" type="hidden" value="dovalidate" /> 
            <input id="project_id" name="project_id" type="hidden" value="" />
        </form>
        <div class="dialog-option">
modal: true,
closeOnEscape :true,
width: 600,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Next");?>": function() {
        jQuery('#backup-project-warning').rvsDialog('close');
        jQuery.sitebuilder.backupProject.doBackup("#backup-project-warning","backup");
    },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
        jQuery('#backup-project-warning').rvsDialog('close');
    }
}
        </div>
        
        <div class="ui-widget dialogPadding">
        	<div class="ui-state-highlight ui-corner-all"> 
        		<span class="ui-icon ui-icon-notice" style="float: left; margin-right: 0.3em;"></span>
            	<div id="message"></div>
            </div>
        </div>
    </div>
      
</div>
<!-- END::Backup Project Dialog -->