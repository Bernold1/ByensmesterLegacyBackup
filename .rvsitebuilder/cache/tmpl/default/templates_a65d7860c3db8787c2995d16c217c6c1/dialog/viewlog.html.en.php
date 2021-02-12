<div id="windowconfigviewlog" style="display: none;"> <!--  -->
    <div id="viewlogForm" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("User view log");?>">
        <div class="dialog-option">
        modal: false,
closeOnEscape :true,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Ok");?>": function() {
        jQuery.sitebuilder.userViewLog.Configulation.cmdOk("#viewlogForm");
    },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Cancel");?>": function() {
        jQuery('#viewlogForm').rvsDialog('close');
    }
}
        </div>

    <form id="viewlog-form" method="post" name="viewlog-form">
        <input name="rvsMgr" type="hidden" value="Viewlog" />  
        <input name="rvsAct" type="hidden" value="savelog" />  
	   <div align="center" style="padding-top:20px;">	
		  <table width="300" cellpadding="4" cellspacing="0" align="left">
		      <tr>
			     <td align="right" width="50%"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Enabled Log View");?> :</td>
			     <td align="left"><?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("generateEnableViewLogOption","frmviewlog[log][enabled]");?></td>
		      </tr>
              <tr>
		          <td align="right"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Priority");?> :</td>	
		          <td align="left">
			         <select show='leightbox' name="frmviewlog[log][priority]" id="logPriority">
				        <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("generatePriorityViewlogSelect");?>
			         </select>
		          </td>
		      </tr>
		  </table>
	   </div>
    </form>
    </div>
    <div id="viewlogSuccess" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("User view log");?>">
        <div class="dialog-option">
closeOnEscape :true,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
        jQuery("#viewlogSuccess").rvsDialog('close');
    }
}       
        </div>
        <div align="center" style="padding-top:20px;">  
        Saving "User view log" confugulation has been successfully.
        </div>
    </div>
</div>
