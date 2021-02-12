<div id="templatedetail" style="display:none;">  
  <div id="templatedetail-download" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Please Download Template");?>">
       <div class="dialog-option">       
closeOnEscape :true,
width: 700,
height:"auto",
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Cancel");?>": function() {
     jQuery(this).rvsDialog('close');
    }

}
     </div>
     
     <form name="frmDownloadTem" id="frmDownloadTem" action="">

		<input type="hidden" name="rvsMgr" id="rvsMgr" value="downloadtemplate" /> 
    	<input type="hidden" name="rvsAct" id="rvsAct" value="view" />
    	<input type="hidden" name="template_item_id" id="template_item_id" value="" />
        
   <table border="0" cellspacing="0" cellpadding="0" id="dowloadTemplate" style="padding:15px;">
	<tr> 
			<td align="center" valign="top" width="35%"><img src="<?php echo htmlspecialchars($t->rvs_url_www);?>/themes/default/sitebuilder/images/d_template.gif" alt="" width="131" height="142" /></td>

			<td align="left" valign="top" width="65%">
				<div class="title"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Download website template");?></div>
				<div><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("download description");?> <a href="<?php echo htmlspecialchars($t->rvs_url_www);?>/templateSpecification.doc" target="_blank" class="red"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("here");?></a></div>
			</td>
		</tr>  
	      
	<tr>
		<td align="left" valign="top" colspan="2">
					<div id="divpictureName"></div>
		</td>
	</tr>
</table>
</form>								
  </div>
</div>
 
 