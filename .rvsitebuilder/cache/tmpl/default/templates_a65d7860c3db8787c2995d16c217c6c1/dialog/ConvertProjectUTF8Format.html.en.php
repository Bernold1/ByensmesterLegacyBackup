<div id="dialog-convert-project-utf8-hidden" style="display: none;">

    <div id="dialog-convert-project-utf8" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Convert Project UTF8");?>">
        
        <div class="dialog-option">
			modal: true,
			closeOnEscape :true,
			width: 600,
			buttons:{
			    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Ok");?>": function() {
			       	jQuery.sitebuilder.ConvertProjectUTF8Format.doConvertProjectUTF8Format("#FrmConvertProjectUTF8");
			    }, 
			    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Back");?>": function() {
			    	jQuery('#dialog-convert-project-utf8').find('#txtConfirmConvertProjectToUTF8').val("");
			    	jQuery('#dialog-convert-project-utf8').find('#showMsg').html('');
			        jQuery('#dialog-convert-project-utf8').rvsDialog('close');
			    	jQuery('#backup-project-success-toconvert').rvsDialog('open');
			    }
			}
        </div>
        
		<form name="FrmConvertProjectUTF8" id="FrmConvertProjectUTF8" method="post">
		
            <input name="rvsMgr" type="hidden" value="ConvertProjectUTF8Format" /> 
    		<input name="rvsAct" type="hidden" value="doConvertUTF8" />
            <input id="project_id" name="project_id" type="hidden" value="" />

			<div class="ui-widget dialogPadding">
	           	<div class="ui-state-highlight ui-corner-all"> 
	            	<div><span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
	                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Your Confirm Convert Project to format UTF8");?>
	            	</div>
	       		</div>
	       </div>
	       
	       <div class="dialogPadding">    
	      		<strong><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project ID");?> : <span id="convertProjectId"></span></strong><br />
	            <strong><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project Name");?> : <span id="convertProjectName"></span></strong>
	       </div> 
	      
	       <div class="dialogPadding">
	      	 	<label>
	    			<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Please your press \"YES\" to convert project format UTF8");?> <br /> <br />
	    			<!--  Hidden Warning -->
	    			<div id ="showMsg"></div>
	    			<input name="txtConfirmConvertProjectToUTF8" id="txtConfirmConvertProjectToUTF8" type="text" />
	    		</label>
	    		
	    		<!-- Wait -->
	    		<div id="dialog-convert-project-utf8-wait"></div>
	    	</div>
	       	
	   </form>
	   
 	</div>
 
 	<!-- dialog chkcharset -->
 	<div id="dialog-convert-project-utf8-chkcharset" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Convert Project UTF8");?>">
 	
 		<div class="dialog-option">
 			modal: true,
			closeOnEscape :false,
			width: 600,
			buttons:{}
		</div>
		
 		<form name="frmChkCharSet" id="frmChkCharSet" method="post">
	    	<input name="rvsMgr" type="hidden" value="ConvertProjectUTF8Format" /> 
	    	<input name="rvsAct" type="hidden" value="doChkFormatCharset" />
	        <input id="project_id" name="project_id" type="hidden" value="" />
	  	</form>
	  	
 	</div>
 	
 	<!-- dialog confirmNo  -->
 	<div id="dialog-convert-project-utf8-confirmNo" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Convert Project UTF8");?>">
 	
        <div class="dialog-option">
			modal: true,
			closeOnEscape :false,
			width: 600,
			buttons:{
				"<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Ok");?>": function() {
			        jQuery('#dialog-convert-project-utf8-confirmNo').rvsDialog('close');
			    }
			}
		</div>		
		
		<div class="ui-widget dialogPadding">
	    	<div class="ui-state-highlight ui-corner-all"> 
	        	<p><span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
	            	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Converting project to UTF-8 is cancelled.");?>
	            </p>
	   		</div>
	    </div>
	       	
	</div>
	   
    <!-- dialog confirmYes -->    
    <div id="dialog-convert-project-utf8-confirmYes" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Convert Project UTF8");?>">
 	
        <div class="dialog-option">
			modal: true,
			closeOnEscape :false,
			width: 600,
			buttons:{
				"<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Next");?>": function() {
			        jQuery('#dialog-convert-project-utf8-confirmYes').rvsDialog('close');
			        jQuery('#FrmChkCovertProjectUTF8Format').submit();
			    }
			}
		</div>		
		
		<div class="ui-widget dialogPadding">
	    	<div class="ui-state-highlight ui-corner-all"> 
	        	<p>
	            	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("System convert project utf8 format complete..");?>
	            </p>
	   		</div>
	   </div>
	      	
	</div> 

	
	<!-- dialog verifyIconvSupportedCharset -->    
    <div id="dialog-convert-project-utf8-verifyIconvSupportedCharset" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Convert Project UTF8");?>">
 	
        <div class="dialog-option">
			modal: true,
			closeOnEscape :true,
			width: 600,
			buttons:{
				"<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Yes");?>": function() {
			        jQuery.sitebuilder.ConvertProjectUTF8Format.doSkipConvertUTF8("#frmSkipCharSet");
			    } , 
			    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("No");?>": function() {
			       jQuery('#dialog-convert-project-utf8-verifyIconvSupportedCharset').rvsDialog('close');
			       jQuery('#dialog-convert-project-utf8-conversion-aborted').rvsDialog('open');
			    }
			}
		</div>		
		
		<div class="ui-widget">
	    	<div class="ui-state-highlight ui-corner-all"> 
	        	<p>
	            	<span id="nativeEncoding"></span>
	            	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Character is not supported by iconv on server. Do you Want to skip the character conversion? Charater on your project will display will display improperly.");?>
	            </p>
	   		</div>
	   </div>
	   
	   <p>
        	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Click \"Yes\" to skip the character conversion");?><br />
        	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Click \"No\" to close dialog");?>
       </p>
	      	
	</div>
	
	
	<!-- dialog cannot detect -->    
    <div id="dialog-convert-project-utf8-cannot-detect" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Convert Project UTF8");?>">
 	
        <div class="dialog-option">
			modal: true,
			closeOnEscape :true,
			width: 600,
			buttons:{
				"<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Yes");?>": function() {
			        jQuery.sitebuilder.ConvertProjectUTF8Format.doSkipConvertUTF8("#frmSkipCharSet");
			    } , 
			    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("No");?>": function() {
			        jQuery('#dialog-convert-project-utf8-cannot-detect').rvsDialog('close');
			    }
			}
		</div>		
		
		<div class="ui-widget">
	    	<div class="ui-state-highlight ui-corner-all"> 
	        	<p>
	            	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Cannot detect charset on your server. Do you want continue.");?>
	            </p>
	   		</div>
	   </div>
	   
	   <p>
        	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Click \"Yes\" to skip the character conversion");?><br />
        	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Click \"No\" to close dialog");?>
       </p>
	      	
	</div>
	
	
	<!-- dialog conversion aborted-->    
    <div id="dialog-convert-project-utf8-conversion-aborted" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Convert Project UTF8");?>">
 	
        <div class="dialog-option">
			modal: true,
			closeOnEscape :true,
			width: 600,
			buttons:{
				"<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
			        jQuery('#dialog-convert-project-utf8-conversion-aborted').rvsDialog('close');
			    }
			}
		</div>		
		
		<div class="ui-widget">
	    	<div class="ui-state-highlight ui-corner-all"> 
	        	<p> <span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
	            	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("File character conversion aborted. Please contact your provider to resolve the problem");?>
	            </p>
	   		</div>
	   </div>
	      	
	</div>
	
	
	<!-- dialog skip-->
	    
    <div id="dialog-convert-project-utf8-skip" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Convert Project UTF8");?>">
 	
        <div class="dialog-option">
			modal: true,
			closeOnEscape :false,
			width: 600,
			buttons:{}
		</div>		
		
		<form name="frmSkipCharSet" id="frmSkipCharSet" method="post">
	    	<input name="rvsMgr" type="hidden" value="ConvertProjectUTF8Format" /> 
	    	<input name="rvsAct" type="hidden" value="doSkipConvertUTF8" />
	        <input id="project_id" name="project_id" type="hidden" value="" />    
	        <input name="optionSkip" id="optionSkip" type="hidden" value="" />
	  	</form>
	      	
	</div>
	
	
	<!-- back up -->
	
    <div id="backup-project-confirm-convertcharset" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Export Project");?>">
        
        <div class="dialog-option">
		modal: true,
		closeOnEscape :true,
		width: 600,
		buttons:{
		    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Next");?>": function() {
		        jQuery('#backup-project-confirm-convertcharset').rvsDialog('close');
		        
		        objEditProjectList = jQuery('#editProjectList');
				selectProjectId = objEditProjectList.val();
				dialogObj = jQuery('#backup-project-confirm-form');
				dialogObj.find('#project_id').val(selectProjectId);
		        
		        jQuery.sitebuilder.backupProject.doBackup("#backup-project-confirm-form", "convertToUtf8");    
		    },
		    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
		        jQuery('#backup-project-confirm-convertcharset').rvsDialog('close');
		    }
		}	
        </div>
        
         
        <form id="backup-project-confirm-convertcharset-form" name="backup-project-confirm-convertcharset-form" method="post">
            <input name="rvsMgr" type="hidden" value="BackupProject" />  
            <input name="rvsAct" type="hidden" value="dovalidate" /> 
            <input id="project_id" name="project_id" type="hidden" value="" />
        </form> 
         
        <div class="ui-widget dialogPadding">
            <div class="ui-state-highlight ui-corner-all"> 
                <p><span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("before convert to utf8 Please backup Your project to protect data lost");?>
                </p>
            </div>
        </div>
        
        <div class="dialogPadding">    
            <strong><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project ID");?> : <span id="set-backup-project-id"></span></strong><br />
            <strong><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project Name");?> : <span id="set-backup-project-name"></span></strong>
        </div>
        
        <div class="dialogPadding"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Click \"Yes\" to export the project");?></div>
        
    </div>
	
	<!-- back up warning-->
	<div id="backup-project-confirm-convertcharset-warning" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Warning");?>">
        
		<form id="backup-project-confirm-convertcharset-warning-form" method="post">
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
				        jQuery('#backup-project-confirm-convertcharset-warning').rvsDialog('close');
				        jQuery.sitebuilder.backupProject.doBackup("#backup-project-confirm-convertcharset-warning-form", "convertToUtf8");
				    },
				    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
				        jQuery('#backup-project-confirm-convertcharset-warning').rvsDialog('close');
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
	
	
    
    
    <div id="backup-project-success-toconvert" style="display: none;" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Export Project");?>">
        <div class="dialog-option">
			modal: true,
			closeOnEscape :true,
			width: 600,
			buttons:{
				"<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Next");?>": function() {
					jQuery('#dialog-convert-project-utf8').find('#showMsg').html('');
			        jQuery.sitebuilder.ConvertProjectUTF8Format.verifyMysqlCharset("#frmVerifyMySqlCharset");
			        jQuery('#backup-project-success-toconvert').rvsDialog('close');
			    },
				"<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
			    	jQuery('#backup-project-success-toconvert').rvsDialog('close');
			    }
			}
        </div>   
          
        <form id="backup-project-success-form" method="post">
            <input id="rvsMgr" name="rvsMgr" type="hidden" value="BackupProject" />  
            <input id="rvsAct" name="rvsAct" type="hidden" value="dovalidate" /> 
            <input id="project_id" name="project_id" type="hidden" value="" />
        </form>
    
        <div class="ui-widget">
        	<div class="ui-state-highlight ui-corner-all"> 
        		<span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
        		<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Backup Project Complete");?><br />
            	<div id="message"></div>
            </div>
        </div>
        
        <div class="dialogPadding">
        	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Click \"Link\" to download file");?><br />
        	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Click \"Next\" to convert project utf8 format");?>
        </div>
    </div>
    
    
    <!--  verifyMySqlCharset -->
    
    <div id="verifyMySqlCharset" style="display: none;">
    
        <div class="dialog-option">
        	modal: true,
			closeOnEscape :false,
			width: 600,
			buttons:{}
        </div>

        <form name="frmVerifyMySqlCharset" id="frmVerifyMySqlCharset" method="post">
            <input name="rvsMgr" type="hidden" value="ConvertProjectUTF8Format" /> 
            <input name="rvsAct" type="hidden" value="doverifyMySqltCharset" />
            <input id="project_id" name="project_id" type="hidden" value="" />
        </form>
        
    </div>
    
    
    <!--  dialog-verifyMysqlCharset -->
    
   	<div id="dialog-verifyMysqlCharset" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Verify Charset");?>">
        
        <div class="dialog-option">
            modal: true,
            closeOnEscape :false,
            width: 600,
            buttons:{
                "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("yes");?>": function() {
                     jQuery.sitebuilder.ConvertProjectUTF8Format.confirmConvertProjectUTF8Format();
                     jQuery('#dialog-verifyMysqlCharset').rvsDialog('close');
                },
                "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
                    jQuery('#dialog-verifyMysqlCharset').rvsDialog('close');
                   } 
                }
        </div>      
        
        <div class="ui-widget">
            <div class="ui-state-highlight ui-corner-all"> 
                <p>
                	<span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
                   	<span id="set-lang-name"></span>  <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("charset is not supported MySQL on your server.");?>
                   	<span id="set-lang-name2"></span> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("will lost");?> 
                </p>
            </div>
        </div>
            
    </div>
    
    
</div>