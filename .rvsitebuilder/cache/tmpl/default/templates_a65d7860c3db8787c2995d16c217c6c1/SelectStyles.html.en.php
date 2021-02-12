<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('menu.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<script type="text/javascript" src="<?php echo htmlspecialchars($t->jsWysPath);?>dialogEditorShared.js"></script>

<?php echo $t->scriptOpen;?>
    jQuery(document).ready(function() {
    
       jQuery(".dropdown img.flag").addClass("flagvisibility");

       jQuery(document).bind('click', function(e) {
            var clicked = jQuery(e.target);
            if (! clicked.parents().hasClass("dropdown"))
                jQuery(".dropdown dd ul").hide();
       });
	   
   });
<?php echo $t->scriptClose;?>

<!-- NEW Design -->

<form name="JumpBox" method="post" action="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","selectstyles","sitebuilder"));?><?php echo htmlspecialchars($t->sessID);?>" style="padding:0px; margin:0px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td id="paddingFormStep3">
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<div id="formMenuStep3" style="width:840px; float:left;">
						<div>
							<div class="color_scheme">
								<fieldset class="fieldsetBorder">
									<legend> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Color scheme");?> </legend>
									<div align="left" style="margin-top:8px; padding-left:8px;"><?php echo $t->colorOptions;?>					
										<input type="hidden" name="color_id_hid" id="color_id_hid" value="<?php echo htmlspecialchars($t->color_id);?>">
										<input type="hidden" name="default_color_id_hid" id="default_color_id_hid" value="<?php echo htmlspecialchars($t->color_id);?>">				
										<input type="hidden" name="color_group_id" id="color_group_id" value="<?php echo htmlspecialchars($t->color_group_id);?>">
										<input type="hidden" name="default_color_group_id" id="default_color_group_id" value="<?php echo htmlspecialchars($t->color_group_id);?>">	
									</div>
								</fieldset>
							</div>	
							<div class="picture">
								<fieldset class="fieldsetBorder">
									<legend><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Picture style");?></legend>
									<div style="padding-top:5px;">
								<!-- Change Step 3 Picture Listbox Changge To Radio add by rabbit 23/03/2552 --> 
									<?php if ($t->aPicture)  {?> 
										<?php if ($this->options['strict'] || (is_array($t->aPicture)  || is_object($t->aPicture))) foreach($t->aPicture as $k => $v) {?> 
											<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isEqual'))) if ($t->isEqual($t->picture_id,$k)) { ?>
											<input type ="radio" name ="picture_id" id ="picture_id_1" checked onclick ="MM_jumpMenu('parent.frames[\'preview\']',this,0)" value ="<?php echo htmlspecialchars($k);?>"><label for ="picture_id_1"><?php echo htmlspecialchars($v);?></label><br>
											<?php } else {?>
											<input type ="radio" name ="picture_id" id ="picture_id_2" onclick ="MM_jumpMenu('parent.frames[\'preview\']',this,0)" value ="<?php echo htmlspecialchars($k);?>"><label for ="picture_id_2"><?php echo htmlspecialchars($v);?></label><br>
											<?php }?>
										<?php }?> 
									<?php }?>
									<br />
									</div>
								</fieldset> 
							</div>
							<div class="position_resolution">
								<fieldset class="fieldsetBorder">
									<legend> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Position and Resolution");?> </legend>
									<table cellspacing="0" cellpadding="1" style="margin-top:8px;">
										<tr>
											<td align="right" valign="middle" width="40%"><label for="position_id"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Position");?> : </label></td>
											<td align="left" valign="middle">
												<select name="position_id" id="position_id" onChange="MM_jumpMenu('parent.frames[\'preview\']',this,0)" class="menu">                        
											<?php echo $t->positionOptions;?></select>
											</td>
										</tr>
										<tr>
											<td align="right" valign="middle"><label for="resolution_id"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Resolution");?> : </label></td>
											<td align="left" valign="middle">
												<select name="resolution_id" id="resolution_id" onChange="MM_jumpMenu('parent.frames[\'preview\']',this,0)" style="width:130px;" class="menu">
											<?php echo $t->resoluitionOptions;?></select>
											</td>
										</tr>
									</table>
								</fieldset>
							</div>	
							<div class="font_hyperlink">
								<fieldset class="fieldsetBorder">
									<legend> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Font style");?> </legend>
									<div style="padding-top:8px; padding-left:5px;">
									<table cellspacing="0" cellpadding="2" style="margin-top:8px;">
                                        <tr>
                                            <td align="right" valign="middle">	
											 <label for="font"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Font style");?> : </label>
											 
											 <input id="font_id" name="font_id" type="hidden" value="<?php echo htmlspecialchars($t->font_id);?>" />
											</td>
											<td align="left" valign="middle">
												<dl class="dropdown">
													
											        <dt>
											        	<div id="currentFont">
											        		<span>
											        			<?php echo htmlspecialchars($t->currentFont);?>
															</span>
														</div>
													</dt>
											        
											        <dd>
											            <ul>
											                <?php if ($this->options['strict'] || (is_array($t->fontOptins)  || is_object($t->fontOptins))) foreach($t->fontOptins as $k => $v) {?>
											                    <li>    
																
											                        <div attrStyleFont="<?php echo htmlspecialchars($k);?>" attrStrFont="<?php echo htmlspecialchars($v);?>" id="styleFont<?php echo htmlspecialchars($k);?>">
											                        	
											                             <span style="font-family:<?php echo htmlspecialchars($v);?>;">
											                                  <?php echo htmlspecialchars($v);?>
											                             </span>
																		 
											                        </div>
											                    </li>
											                <?php }?> 
											                
											            </ul>
											        </dd>
													
											    </dl>
										      </td>
										  </tr>
										</table>
									</div>
								</fieldset>
							</div>	
						</div>
						
						<div class="clearit"></div>
				
				
						<div>
							<div class="site_wide">
								<fieldset class="fieldsetBorder">
									<legend> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Side Wide");?> </legend>
									<div align="center">
										<table cellspacing="1" cellpadding="1">
											<tr>
												<td align="left"><?php echo $t->oEditSide1;?></td>
												<td align="left">
													<?php echo $t->oEditTop;?>
													<?php echo $t->oEditBottom;?>
												</td>
												<td align="left"><?php echo $t->oEditSide2;?>
												</td>
											</tr>
										</table>
									</div>
								</fieldset>
							</div>	
							<div class="style_navigator">
								<fieldset class="fieldsetBorder">
									<legend> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Navigator");?> </legend>
									<table cellspacing="0" cellpadding="1" style="margin-top:8px;">
										<tr>
											<td align="right" valign="middle" width="40%">
												<label for="navigator_name_id"> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Type");?> : </label>
											</td>
											<td align="left" valign="middle">
												<select id="navigator_name_id" name="navigator_name_id" size="1" onChange="MM_jumpMenu('parent.frames[\'preview\']',this,0)" class="menu">
														<?php echo $t->navigatorOptions;?></select>
													<input type="hidden" name="colorGroupNavId" id="colorGroupNavId" value="">
													<input type="hidden" name="default_colorGroupNavId" id="default_colorGroupNavId" value="">
											</td>
										</tr>
										<!-- Option show or hide navigator -->
										<tr>
											<td align="right" valign="middle" width="40%">
											<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Display");?> :
											</td>
											<td align="left" valign="middle">
												<input type="radio" name="showHide" <?php echo htmlspecialchars($t->show);?> value="show" id="show" onclick="MM_jumpMenu('parent.frames[\'preview\']',this,0)"><label for="show"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Show");?></label>
												<input type="radio" name="showHide" <?php echo htmlspecialchars($t->hide);?> value="hide" id="hide" onclick="MM_jumpMenu('parent.frames[\'preview\']',this,0)"><label for="hide"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Hidden");?></label>
											</td>
										</tr>
										<!-- Option show or hide navigator -->	
									</table>		
								</fieldset> 
							</div>
							<div class="move">
								<fieldset class="fieldsetBorder">
									<legend> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Move Logo");?> </legend>
									<div>
										<table cellspacing="0" cellpadding="0" width="98%">
										<tr>
											<td rowspan="2" width="80" valign="top" id="divHidenLogo" style="<?php echo htmlspecialchars($t->noLogo);?>"><input type="checkbox" id ="rvMoveLogo" name="rvMoveLogo" disabled="disabled" OnClick="parent.preview.defaultBorder('Layer1',this.checked)"><label for="rvMoveLogo"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Logo");?></label></td>
											<td align="left" style="<?php echo htmlspecialchars($t->noLogo);?>; display:none;">X :&nbsp;<input type ="text" id ="Layer1X" class="textboxstep3" name="aMove[logo][x]" maxlength="7" size="4" readonly="readonly" value="<?php echo htmlspecialchars($t->aDefaultMove['logo']['x']);?>"></td>
											<td rowspan="2" style="<?php echo htmlspecialchars($t->noLogo);?>">&nbsp;</td>
											<td rowspan="2" width="200" valign="top" id="divHidenCompany" style="<?php echo htmlspecialchars($t->noCompany);?>"><input type="checkbox" id="rvMoveCompany" name="rvMoveCompany" disabled="disabled" OnClick="parent.preview.defaultBorder('Layer2',this.checked)"><label for="rvMoveCompany"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Company");?></label></td>
											<td align="left" style="<?php echo htmlspecialchars($t->noCompany);?>; display:none;">X :&nbsp;<input type ="text" id ="Layer2X" class="textboxstep3" name="aMove[company][x]" maxlength="7" size="4" readonly="readonly" value="<?php echo htmlspecialchars($t->aDefaultMove['company']['x']);?>"></td>
											<td rowspan="2" style="<?php echo htmlspecialchars($t->noCompany);?>">&nbsp;</td>
											<td width="100" valign="top" id="divHidenSlogan" style="<?php echo htmlspecialchars($t->noSlogan);?>"><input type="checkbox" id="rvMoveSlogan" name="rvMoveSlogan" disabled="disabled" OnClick="parent.preview.defaultBorder('Layer3',this.checked)"><label for="rvMoveSlogan"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Slogan");?></label></td>
											<td align="left" style="<?php echo htmlspecialchars($t->noSlogan);?>; display:none;">X :&nbsp;<input type ="text" id ="Layer3X" class="textboxstep3" name="aMove[slogan][x]" maxlength="7" size="4" readonly="readonly" value="<?php echo htmlspecialchars($t->aDefaultMove['slogan']['x']);?>"></td>
										</tr>
										<tr>
											<td align="left" style="<?php echo htmlspecialchars($t->noLogo);?>; display:none;">Y :&nbsp;<input type ="text" id ="Layer1Y" class="textboxstep3" name="aMove[logo][y]" maxlength="7" size="4" readonly="readonly" value="<?php echo htmlspecialchars($t->aDefaultMove['logo']['y']);?>"></td>
											<td align="left" style="<?php echo htmlspecialchars($t->noCompany);?>; display:none;">Y :&nbsp;<input type ="text" id ="Layer2Y" class="textboxstep3" name="aMove[company][y]" maxlength="7" size="4" readonly="readonly" value="<?php echo htmlspecialchars($t->aDefaultMove['company']['y']);?>"></td>
											<td align="right"></td>
											<td align="left" style="<?php echo htmlspecialchars($t->noSlogan);?>; display:none;">Y :&nbsp;<input type ="text" id ="Layer3Y" class="textboxstep3" name="aMove[slogan][y]" maxlength="7" size="4" readonly="readonly" value="<?php echo htmlspecialchars($t->aDefaultMove['slogan']['y']);?>"></td>
											
										</tr>
									</table>
									</div>
									
									<div align="right" style="padding-right:17px;">
									<input type="button" class="btnRestore" id="setDefaultLayerAll" name="setDefaultLayerAll" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Default Position"));?>" disabled="disabled" onclick="parent.preview.defaultLayer(['defaultHiddenStyleLayer1','defaultHiddenStyleLayer2','defaultHiddenStyleLayer3'] , ['Layer1','Layer2','Layer3'],['rvMoveLogo','rvMoveCompany','rvMoveSlogan'], '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Confirm reset to original position"));?>')" />
									</div>
								</fieldset>
							</div>
							<div class="clearit"></div>		
						</div>
					</div>
					</td>	
					<td align="left">
						<input type="hidden" name="action" value="edit" />
						<input type="submit" name="Save" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Save"));?>" onclick="Javascript:bSubmitted=true;" class="btnSavebig" />
				</td>
			</tr>
		</table>
	</td>
	</tr>	
    <tr>
        <td>
            <div id="formMenuStep3" style="width:840px; float:left;">
            <?php if ($t->StyleConfig)  {?>
                <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Fixed width :","vprintf","Fixedwidth|txtWidth||Fixedalign|txtAlign");?>
            <?php }?>
            </div>        
        </td>
    </tr> 
	<!--	
			<div id="formStyle">
				<div style="padding-right:5px;">
					<span valign="top">{translate(#Style#):h}</span>&nbsp;&nbsp;
					<span class="inlinehelp" onmouseover="this.setAttribute('class','inlinehelpOver'),this.setAttribute('className','inlinehelpOver')" onMouseOut="this.setAttribute('class','inlinehelp'),this.setAttribute('className','inlinehelp')"> <img src="{webThemeUrl}/themes/{theme}/sitebuilder/images/tooltiphelp.gif" alt="" width="16" height="16" border="0" align="absmiddle" />
                       <span style="margin:-95px 0 0 10px;">{translate(#help Style#):h}</span>                            
					</span> 				
				</div>
				<div style="padding:0 5px 0 40px;">
					<span valign="top">{translate(#Color scheme#):h} :</span>				
				</div>
				
				<div style="padding-right:12px;">
					{colorOptions:h}					
					<input type="hidden" name="color_id_hid" id="color_id_hid" value="{color_id:h}">
					<input type="hidden" name="default_color_id_hid"  id="default_color_id_hid" value="{color_id:h}">
												
					<input type="hidden" name="color_group_id" id="color_group_id"  value="{color_group_id:h}">
					<input type="hidden" name="default_color_group_id" id="default_color_group_id"  value="{color_group_id:h}">				
				</div>
				<div style="padding-right:5px; padding-left:15px;" class="bdrLeft">
				<table cellspacing="0" cellpadding="0" style="margin:3px 0 7px 10px;" >
				    <tr>
				        <td align="right">{translate(#Picture style#):h} :</td>
				        <td>&nbsp;<select  name="picture_id" id="picture_id" onChange="MM_jumpMenu('parent.frames[\'preview\']',this,0)" class="menu">
                            {pictureOptions:h}</select></td>
				        <td align="right">{translate(#Navigator style#):h} :</td>
				        <td>&nbsp;<select name="navigator_name_id" size="1" onChange="MM_jumpMenu('parent.frames[\'preview\']',this,0)" class="menu">
                            {navigatorOptions:h}</select><input type="hidden" name="colorGroupNavId" id="colorGroupNavId" value="">
                            <input type="hidden" name="default_colorGroupNavId" id="default_colorGroupNavId" value=""> </td>
				        <td align="right">{translate(#Font style#):h} :</td>
				        <td>&nbsp;<select  name="font_id" onChange="MM_jumpMenu('parent.frames[\'preview\']',this,0)" class="menu">
                                {fontOptions:h}</select> </td>
				    <tr>
				    <tr>
                        <td align="right">{translate(#Position#):h} :</td>
                        <td>&nbsp;<select  name="position_id" id="position_id" onChange="MM_jumpMenu('parent.frames[\'preview\']',this,0)" class="menu">                        
                            {positionOptions:h}</select></td>
                        <td align="right">{translate(#Resolution#):h} :</td>
                        <td>&nbsp;<select  name="resolution_id" id="resolution_id" onChange="MM_jumpMenu('parent.frames[\'preview\']',this,0)" class="menu">
                            {resoluitionOptions:h}</select></td>
                        <td></td>
                        <td></td>
                    <tr>
				</table>	
				</div>
            </div>

			<div>
            <select id ="templateAlign" name="templateAlign" style="display:none;" disabled="disabled">
            <option value = "left">{translate(#left#):h}</option>
            <option value = "center">{translate(#center#):h}</option>
            <option value= "right">{translate(#right#):h}</option>
            </select>
            </div>        
		</td>
    </tr>
    <tr><td><div class="bdrTop"></div></td></tr>
    <tr>
        <td valign="top">
            <div id="formStyle">
			<table cellspacing="0" cellpadding="5" width="50%">
				<tr>
					<td align="left" width="30%">
					    <b>{translate(#Side Wide#):h}</b>
	                    </span>
					</td>
					<td align="left" width="15%">{oEditSide1:h}</td>
					<td align="left" width="15%">
					    {oEditTop:h}
					    {oEditBottom:h}
					</td>
					<td align="left" width="15%">{oEditSide2:h}
					</td>
				</tr>
			</table>
		</div>
        </td>
    </tr>
    <tr><td><div class="bdrTop"></div></td></tr>
    <tr>
        <td valign="top">
            <div id="formStyle">
				<table cellspacing="0" cellpadding="0" style="margin:3px 0 7px 10px;" >
					<tr>
						<td width="100" align="left">
						<b>{translate(#Move Logo#):h}</b>
						<span class="inlinehelp" onmouseover="this.setAttribute('class','inlinehelpOver'),this.setAttribute('className','inlinehelpOver')" onMouseOut="this.setAttribute('class','inlinehelp'),this.setAttribute('className','inlinehelp')"> <img src="{webThemeUrl}/themes/{theme}/sitebuilder/images/tooltiphelp.gif" alt="" width="16" height="16" border="0" align="absmiddle" />
							 <span style="margin:-50px 0 0 10px;">{translate(#help Position#):h}</span>						</span>						</td>
						<td rowspan="2" width="70" id="divHidenLogo" style="{noLogo}" ><input type="checkbox" id ="rvMoveLogo" name="rvMoveLogo" disabled="disabled"  OnClick="parent.preview.defaultBorder('Layer1',this.checked)"><label for="rvMoveLogo">{translate(#Logo#):h}</label></td>
						<td align="left" width="80" style="{noLogo}">X :&nbsp;<input type ="text" id ="Layer1X"  class="textboxstep3" name="aMove[logo][x]" maxlength="7"  size="4" readonly="readonly"  value="{aDefaultMove[logo][x]}" ></td>
						<td rowspan="2" class="bdrLeft" style="{noLogo}">&nbsp;</td>
						<td  rowspan="2" width="100" id="divHidenCompany" style="{noCompany}" ><input type="checkbox" id="rvMoveCompany" name="rvMoveCompany" disabled="disabled" OnClick="parent.preview.defaultBorder('Layer2',this.checked)"><label for="rvMoveCompany">{translate(#Company#):h}</label></td>
						<td align="left" width="80" style="{noCompany}">X :&nbsp;<input type ="text" id ="Layer2X"  class="textboxstep3" name="aMove[company][x]"maxlength="7" size="4" readonly="readonly" value="{aDefaultMove[company][x]}"></td>
						<td rowspan="2" class="bdrLeft" style="{noCompany}">&nbsp;</td>
						<td rowspan="2" width="80" id="divHidenSlogan" style="{noSlogan}" ><input type="checkbox" id="rvMoveSlogan" name="rvMoveSlogan" disabled="disabled" OnClick="parent.preview.defaultBorder('Layer3',this.checked)"><label for="rvMoveSlogan">{translate(#Slogan#):h}</label></td>
						<td align="left" width="80" style="{noSlogan}" >X :&nbsp;<input type ="text" id ="Layer3X"  class="textboxstep3" name="aMove[slogan][x]" maxlength="7" size="4" readonly="readonly" value="{aDefaultMove[slogan][x]}"></td>
						<td width="150" rowspan="2" align="center">			 
						<div align="left" style="float:right; padding-right:8px;">
			   <input type="button"class="btnRestore" id="setDefaultLayerAll" name="setDefaultLayerAll" value = "{translate(#Default Position#)}" disabled="disabled" 
            onclick="parent.preview.defaultLayer(['defaultHiddenStyleLayer1','defaultHiddenStyleLayer2','defaultHiddenStyleLayer3'] , ['Layer1','Layer2','Layer3'],['rvMoveLogo','rvMoveCompany','rvMoveSlogan'], '{this.plugin(#translateJsMsg#,#Confirm reset to original position#)}')" /></div>			 			</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td align="left" style="{noLogo}">Y :&nbsp;<input type ="text" id ="Layer1Y"  class="textboxstep3" name="aMove[logo][y]" maxlength="7" size="4" readonly="readonly"  value="{aDefaultMove[logo][y]}"></td>
						<td align="left" style="{noCompany}">Y :&nbsp;<input type ="text" id ="Layer2Y"  class="textboxstep3" name="aMove[company][y]"maxlength="7" size="4" readonly="readonly" value="{aDefaultMove[company][y]}"></td>
						<td align="left" style="{noSlogan}">Y :&nbsp;<input type ="text" id ="Layer3Y"  class="textboxstep3" name="aMove[slogan][y]" maxlength="7" size="4" readonly="readonly" value="{aDefaultMove[slogan][y]}"></td>
						<td >&nbsp;</td>
					</tr>
				</table>
            </div>
			
-->			
	<tr>
		<td>
            <div class="line"></div>
            <div align="center">
                <iframe id ="preview" name="preview" src="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","preview","sitebuilder"));?>rvMoveImage/1" width="100%" height="800" scrolling="no" frameborder="0"> [ <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("does not support frames");?> <a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","preview","sitebuilder"));?><?php echo htmlspecialchars($t->sessID);?>color_id/"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("the related document.");?></a> ] </iframe>
            </div>        
		</td>
    </tr>   
</table>
</form>
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/EditSide.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>