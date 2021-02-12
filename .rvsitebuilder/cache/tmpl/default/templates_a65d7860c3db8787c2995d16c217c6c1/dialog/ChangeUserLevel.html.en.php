<div id="windowconfigChangeUserLevel" style="display: none;">
    <div id="changeUserLevel" title="Change User Level">
        <div class="dialog-option">
	        modal: false,
			closeOnEscape :true,
			open:function() {
			     jQuery.sitebuilder.changeUserLevel.ConfigulationOpenCurrent();
			},
			buttons:{
			    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Save");?>": function() {
				      jQuery(this).rvsDialog('close');
			          jQuery.sitebuilder.changeUserLevel.Configulation("#userLevel-form");
			    },
				"<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
			          jQuery('#changeUserLevel').rvsDialog('close');
			    }
			}
        </div> 
    <form id="userLevel-form" method="post" name="userLevel-form">
        <input name="rvsMgr" type="hidden" value="ChangeUserLevel" />  
        <input name="rvsAct" type="hidden" value="changeLavel" />
		<input name="current" type="hidden" value="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("getUsername");?>" id="userLevel" />
       <div align="center" style="padding-top:20px;">   
          <table width="300" cellpadding="4" cellspacing="0" align="left">
              <tr>
              	<td align="right" width="50%">Current User: </td>
				<td align="left"><span id="showusername"><?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("getUsername");?></span> <span id="showLevel"></span></td>
				</tr>
			  <tr>
                 <td align="right" width="50%">Level: </td>
				 <td align="left">
                 	<select name="frmchangeuser" id="frmchangeuser">
                 		<option value="1">root (Level 1)</option>
						<option value="2">reseller (Level 2)</option>
						<option value="3">reselleruser (Level 3)</option>
						<option value="4">userroot (Level 4)</option>
                 	</select>				
                 </td>
              </tr>
          </table>
       </div>
    </form>
    </div>
	<!-- For Success -->
    <div id="changeLevelSuccess" title="Change User Level">
        <div class="dialog-option">
			closeOnEscape :true,
			buttons:{
			    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
			        jQuery("#changeLevelSuccess").rvsDialog('close');
			    }
			}       
        </div>
        <div align="center" style="padding-top:20px;">  
        Saving change user level has been successfully.
        </div>
    </div>
	<!-- For Error -->
	<div id="changeLevelError" title="Error save change user level">
        <div class="dialog-option">
            closeOnEscape :true,
            buttons:{
                "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
                    jQuery("#changeLevelError").rvsDialog('close');
                }
            }       
        </div>
        <div align="center" style="padding-top:20px;">  
            Cannot saving change user level
			<div id="changePathIsError"></div>
			and change permision to 777
        </div>
    </div>
</div>