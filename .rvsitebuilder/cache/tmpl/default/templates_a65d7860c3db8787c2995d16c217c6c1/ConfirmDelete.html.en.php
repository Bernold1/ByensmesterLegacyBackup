
<!-- Target Ajax -->
<div id="confirmDelSuccess" style="background-color: rgb(255, 255, 255);display:" align="center">
<div id="aLoad"> </div>
</div>
<form name="frmConfirmDel" id="frmConfirmDel" action="javascript:ajaxSubmit('<?php echo htmlspecialchars($t->ajaxFormActUrl);?>', document.getElementById('AjaxFrm'), '<?php echo htmlspecialchars($t->ajaxRetObjId);?>');">

<table cellpadding="0" cellspacing="0" width="98%">
	<tr>
		<td id="hidReset">

			<div id="setTarget">
             
               <table width="auto" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td class="bold" id="objTitle"> <span id="confirmDelTopic"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Page Name");?></span> : <span class="f11b_green" id="pagename"><?php echo htmlspecialchars($t->project_page_name);?></span></td>
					</tr>
					<tr>
						<td class="bold"><div id="txtConfirmDel"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Are you sure to delete?");?></div></td>
					</tr>
				</table>
			</div>
		
			<div class="locationButton">
               
				<div>
					<input class="btnDelete" type="submit" name="Submit" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Delete"));?>" id="buttConfirmDel" onclick="$('hidReset').style.display='none';$('aLoad').innerHTML =$('defaultLoadIng').innerHTML;" />
				</div>
				<div>
					<input class="btnCancel" type="button" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Cancel"));?>" onclick="javascript: lightboxDeactivate()" />
				</div>
			</div>
						
		</td>
	</tr>
</table>
</form>

<!-- $('frmImg_{k}')
<div id = "confirmDelPhoto">
    <div style="padding:10px;">
        <input type="button"   class = "btnSave" value="OK" onClick="testNewAjax(objValDel);lightboxDeactivate('confirmDelPhoto');"/>
        <input type="button"  class = "btnCancel" value="Cancel"  onClick="lightboxDeactivate('confirmDelPhoto');" />
    </div>
</div>
  -->
 
 <div id ="confirmDelAjax" style="display:none">
    <div style="padding:10px;">
        <div align='center' id ="txtConfirm"></div> <br />
       
        <input type="button" show="show" class ="btnSave" value="OK" onClick="eval(confirmTRUE);" />
        <input type="button" show="show" class ="btnCancel" value="Cancel" onClick="eval(confirmFALSE)" />
    </div>
</div>
