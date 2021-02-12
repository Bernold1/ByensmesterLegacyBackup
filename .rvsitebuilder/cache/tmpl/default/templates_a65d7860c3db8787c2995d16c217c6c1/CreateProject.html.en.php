<form method="post" id="FrmCreate" name="FrmCreate" enctype="multipart/form-data" action="">
<!-- <div align="center"><span flexy:if="msgGet()">{msgGet():h}</span></div> -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td id="paddingForm">
			<div align="center">
				<div id="formCreate">
					<table border="0" cellspacing="0" cellpadding="0" width="300">
						<?php if ($t->error['project_name'])  {?>
						<tr>
							<td>
								<div id="warningInform"><?php echo $t->error['project_name'];?></div>
							</td>
						</tr>
						<?php }?>						
						<tr>
							<td class="normal" align="left">
							 	<div class="left"><label for="project_name"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Project Name");?> </label></div>		 			
								<div>
                                    <span class="inlinehelp"> <img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="16" height="16" hspace="4" border="0" class="SPicon SPtooltiphelp" />
								    <span style="margin:0px 0 0 10px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("help Project Name");?></span></span>								</div>									
								<div>
								    <input name="project_name" type="text" id="project_name" value="<?php echo $t->project_name;?>" class="width" />	
								</div>				
							</td>
						</tr>
						
						<?php if ($t->error['project_charset'])  {?>
						<tr>
							<td align="left">
								<div id="warningInform"><?php echo $t->error['project_charset'];?></div>
							</td>
						</tr>
						<?php }?>											
						<tr>
							<td class="normal" align="left">
								<div class="left"><label for="project_charset"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Web Site Langauge");?> </label></div>
								<div>
                                    <span class="inlinehelp"> <img class="SPicon SPtooltiphelp" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" hspace="4" width="16" height="16" border="0" />
									<span style="margin:-110px 0 0 10px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("help Web Site Language");?> </span></span>
								</div>
								<div>
									<select name="project_charset" id="project_charset" class="text width" <?php echo htmlspecialchars($t->isprojectChangeLang);?>>
										<?php echo $t->langOptions;?>
									</select>
									<?php if ($t->isprojectChangeLang)  {?>
									   <input type="hidden" name="project_charset" value="<?php echo htmlspecialchars($t->selectLangDisableKey);?>" />
									<?php }?>
								</div>
                                
								<?php if (!$t->projectChangeLang)  {?>
							     <div class="left">
                                <span class="inlinehelp"> <img class="SPicon SPtooltiphelp" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" hspace="4" width="16" height="16" border="0" />
                                    <span style="margin:-30px 0 0 20px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Admin disable project change laguage."));?></span></span>
                                </div>
                                <?php }?>
							</td>
						</tr>

						<tr>
							<td class="normal" align="left">
							 	<div class="left"><label for="project_title"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Web Site Title");?> </label></div>
								<div>
                                    <span class="inlinehelp"> <img class="SPicon SPtooltiphelp" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" hspace="4" width="16" height="16" border="0" />
										<span style="margin:-110px 0 0 10px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("help Web Site Title","vprintf","SB_IMG_URL|SB_IMG_URL");?></span></span>
								</div>
								<div>
										<input name="project_title" type="text" id="project_title" value="<?php echo $t->project_title;?>" class="text width" />
								</div>
                                
							</td>
						</tr>					
						<?php if ($t->error['project_company'])  {?>
						<tr>
							<td align="left">
								<div id="warningInform"><?php echo $t->error['project_company'];?></div>
							</td>
						</tr>
						<?php }?>					
						<tr>
							<td align="left" valign="top" style="padding-top:9px;">
								<div class="title left  <?php echo htmlspecialchars($t->color_font_company);?>">
							 		<label for="project_company" id="project_company_label" changecolor="color_font_company">	
							 		   <div style="margin-top:3px;" id="switch_color_company">
							 			<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Company");?>
							 			</div>
							 		</label>
							 	</div>
								<div class="noSlogan">
										<input name="no_company_name" type="checkbox" id="no_company_name" value="checked" <?php echo htmlspecialchars($t->checked_no_company_name);?> /> 
										<label for="no_company_name"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("No Company Name");?></label>
								</div>
								<div class="clear"></div>
								<div>
								
								<div id="divproject_company" style="width:100%; padding-top:4px; display:<?php echo htmlspecialchars($t->display_no_company_name);?>;">
								<?php if ($t->error['project_company'])  {?><div class="error"><?php echo $t->error['project_company'];?></div><?php }?>						
		                    	<div style="width:500px; height:120px;"> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'loadBlocks'))) echo $t->loadBlocks("","WysiwygMini","project_company",$t->aWysConf);?> </div>	
								
								</div>
								<div><a id="viewcompany" style="color:#FFFFFF;float:right;">viewsource</a></div>
								</div>
							</td>
						</tr>
						<tr>
							<td align="left" valign="top">
								<div class="title left  <?php echo htmlspecialchars($t->color_font_slogan);?>">
									<label for="project_slogan" id="project_slogan_label" changecolor="color_font_slogan"> 
									<div style="margin-top:3px;" id="switch_color_slogan">
										<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Slogan");?>
									</div>
									</label>
								</div>
								<div class="noSlogan">
										<input name="no_slogan" type="checkbox" id="no_slogan" value="checked" <?php echo htmlspecialchars($t->checked_no_slogan);?> />
										<label for="no_slogan"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("No Slogan");?></label>
								</div>
								<div class="clear"></div>
								<div>
									<div id="divproject_slogan" style="width:100%; padding-top:4px; display:<?php echo htmlspecialchars($t->display_no_slogan);?>;">
										<?php if ($t->error['project_slogan'])  {?><div class="error"><?php echo $t->error['project_slogan'];?></div><?php }?>
										<div style="width:500px; height:120px; ">		      
											 <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'loadBlocks'))) echo $t->loadBlocks("","WysiwygMini","project_slogan",$t->aWysConf);?>  
										</div>
									</div>
									<div><a id="viewslogan" style="color:#FFFFFF;float:right;">viewsource</a></div>
								</div>
							</td>
						</tr>
						<!-- {end:} -->	
						<?php if ($t->error['project_logo'])  {?>
						<tr>
							<td align="left">
								<div id="warningInform"><?php echo $t->error['project_logo'];?></div>
							</td>
						</tr>
						<?php }?>
						<tr>
							<td align="left" valign="top">
	
								<div class="title left  <?php echo htmlspecialchars($t->color_font_logo);?>">
								<label for="project_logo" id="project_logo_label" changecolor="color_font_logo">
								<div style="margin-top:3px;" id="switch_color_logo"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Logo");?></div>
								</label></div>
								<div class="noSlogan">
									<input name="no_logo" type="checkbox" id="no_logo" <?php echo htmlspecialchars($t->checked_no_logo);?> value="checked" />
									<label for="no_logo"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("No Logo");?></label>
								</div>
								
							 <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isDirectAdminMode'))) if ($t->isDirectAdminMode()) { ?>
							 <div class="clear"></div>
                                    <div>   
                                        <div class="left">
                                            <font class="f10n_green"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("recommended size 120 x 70");?></font>                          
                                        
                                        <input name="autoresize_logo" type="checkbox" id="autoresize_logo" <?php echo htmlspecialchars($t->checked_no_logo);?> value="checked" />
                                         <label for="autoresize_logo" id="autoresize_logo_label"><font class="f10n_green"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Auto Resize");?></font></label>               
                                        </div>  
                                        <div>
                                            <span class="inlinehelp"> <img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="16" height="16" hspace="4" vspace="3" border="0" class="SPicon SPtooltiphelp" /> <span style="margin:-150px 0 0 0px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("help Logo");?></span></span>                                        </div>
                                    </div>                          
							 <div id="divproject_logo" style="display:<?php echo htmlspecialchars($t->display_no_logo);?>; padding-top:2px;"> 
                             <div align="center" style="padding-top:10px;">
                                <input type="button" id="uploadimage" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Upload Logo");?>" class="uploadimage"><!-- onClick="openFormAddMeta() -->  
							 </div>
							 </div>
							 <?php if ($t->show_logo)  {?>
							 <div style ="width:100%;display:<?php echo htmlspecialchars($t->display_no_logo);?>;" class="jqImageLogo">
                                <div style="width:40%;"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" /></div>
                                <div id="showImgLogo">
                                    <img src="<?php echo htmlspecialchars($t->show_logo);?>?<?php echo htmlspecialchars($t->rndMcTime);?>" border="0" <?php echo $t->setautoresize;?>>
                                </div>
									<input name="DeletedLogo" class="btnRemove" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Remove Logo");?>" />
                                </div>
							 <?php }?>
                             <?php } else {?>
							 <div class="clear"></div>
								<div id="divproject_logo" style="display:<?php echo htmlspecialchars($t->display_no_logo);?>; padding-top:2px;">	
									<input name="project_logo" type="file" id="project_logo" size="30" accept="image/jpeg" />
									<div>	
										<div class="left">
											<font class="f10n_green"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("recommended size 120 x 70");?></font>							
										
										<input name="autoresize_logo" type="checkbox" id="autoresize_logo" <?php echo htmlspecialchars($t->checked_no_logo);?> value="checked" />
						                 <label for="autoresize_logo" id="autoresize_logo_label"><font class="f10n_green"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Auto Resize");?></font></label>				
										</div>	
										<div>
											<span class="inlinehelp"> <img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="16" height="16" hspace="4" vspace="3" border="0" class="SPicon SPtooltiphelp" /> <span style="margin:-150px 0 0 0px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("help Logo");?></span></span>										</div>
									</div>							
								</div>
							</td>
						</tr>
						<?php if ($t->show_logo)  {?>
						<tr>
							<td class="normal" align="left">
							<div style ="width:100%;display:<?php echo htmlspecialchars($t->display_no_logo);?>;" class="jqImageLogo">
								<div style="width:40%;"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" /></div>
								<div id="showImgLogo">
									<img src="<?php echo htmlspecialchars($t->show_logo);?>?<?php echo htmlspecialchars($t->rndMcTime);?>" border="0" <?php echo $t->setautoresize;?>>
								</div>
								</div>
							</td>
						</tr>					
						<?php }?>
						<tr>
							<td align="left" valign="top" style="padding-top:10px;">
							<div style ="width:100%;display:<?php echo htmlspecialchars($t->display_no_logo);?>;" class="jqImageLogo">
								<div style="width:40%;<?php echo htmlspecialchars($t->display_no_logo);?>"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" /></div>
								<div>
								<?php if ($t->show_logo)  {?> 							 
									<input name="DeletedLogo" class="btnRemove" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Remove Logo");?>" />
									<input name="delLogo" type="hidden" id="delLogo2" />
									<input name="show_logo" type="hidden" id="show_logo2" value="<?php echo htmlspecialchars($t->show_logo);?>" />
									<input name="logoNameDel" type="hidden" id="logoNameDel" value="<?php echo htmlspecialchars($t->project_logo);?>" />
								</div>
								<div align="center">      
                                <input name="delLogo" type="hidden" id="delLogo2" />
                                </div>              
								<?php }?>
								</div>
							</td>
						</tr>	
						<?php }?>					
					</table>
					<br />
				<?php if ($t->isPro)  {?><!-- start check isPro -->
				    <?php if ($t->sessionBlog)  {?><!-- start check session -->
					   <?php if (!$t->editBlog)  {?><!-- start edit -->
					<hr color="#999999" size="1" width="60%" />
					<table id="frmCretaeDB" border="0" cellspacing="3" cellpadding="0" width="100%">
                        <tr>
                            <td colspan="2" height="20" valign="top" style="padding-left:130px;"><div align="left"><b><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Database Setting"));?> </b></div>
                          </td>
                        </tr>
                        <tr>
                        <td colspan="2" height="30"><center> <?php echo $t->compoDBmsgBox;?> </center>
                        </td>
                        </tr>
                        <tr>
                            <td align="right" width="40%"><label for="dbHostName"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("HostName"));?> :</label></td>
                            <td align="left"><div align="left"><input type ="text" id="dbHostName" style="width:150px;" name ="compoDB[HostName]" value="<?php echo htmlspecialchars($t->compoDB['HostName']);?>"></div></td>
                        </tr>
                        <tr>
					        <td align="right"><label for="dbPortName"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Port"));?> :</label></td>
					        <td align="left"><div align="left"><input type ="text" id="dbProtocal" style="width:150px;" name ="compoDB[Port]" value="<?php echo htmlspecialchars($t->compoDB['Port']);?>"></div></td>
					    </tr>
						<tr>
					        <td align="right"><label for="dbName"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("DatabaseName"));?> :</label></td>
							<td align="left"><div align="left"><input type ="text" id="dbName" style="width:150px;" name ="compoDB[DatabaseName]" value="<?php echo htmlspecialchars($t->compoDB['DatabaseName']);?>"></div></td>
					    </tr>
					    <tr>
					        <td align="right"><label for="dbUserName"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("UserName"));?> :</label></td>
					        <td align="left"><div align="left"><input type ="text" id="dbUserName" style="width:150px;" name ="compoDB[UserName]" value="<?php echo htmlspecialchars($t->compoDB['UserName']);?>"></div></td>
					    </tr>
					    <tr>
					        <td align="right"><label for="Password"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Password"));?> :</label></td>
					        <td align="left"><div align="left"><input type ="password" style="width:150px;" id="Password" name ="compoDB[Password]" value="<?php echo htmlspecialchars($t->compoDB['Password']);?>"></div>
					   </td>
					   <!-- Don't work
					   <tr>
					        <td align="right" height="10" colspan="2"></td>
					   </td>
					   <tr>
					        <td align="right"></td>
					        <td align="left"><div align="left">
					        	<input type="checkbox" id="autocreatedb" name="autocreatedb" value="1"> 
					        	<label for="autocreatedb">{translate(#Generate new MySQL database automatically if not exist.#):h}</label></div><br>
					   </td>
					   -->
					    </tr>
					</table>
					   <?php }?><!-- end check session -->
					<?php }?><!-- end check edit blog-->
				<?php }?> <!-- end check isPro -->

				</div>
				<div align="left"> 
					<input type="hidden" name="project_domain" value="<?php echo htmlspecialchars($t->project_domain);?>" />
					<input type="hidden" name="project_description" value="<?php echo htmlspecialchars($t->project_description);?>" />
					<input type="hidden" name="project_keyword" value="<?php echo htmlspecialchars($t->project_keyword);?>" />
					<input type="hidden" name="action" value="<?php echo htmlspecialchars($t->project_action);?>" />
					<input type="hidden" name="imagePathReady" id="imagePathReady" value="" />
				</div>
				<div align="center"><input type="submit" name="submit_save" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Save and go to step2");?>" class="btnSave" /></div>
			</div>
<!--			-->
<!--		                        <div id='testEffect' onclick="jQuery(this).hide('blind',{},500)">-->
<!--							<div id='aa' onclick="jQuery(this).effect('blind')">-->
<!--									444444<br>-->
<!--						aaaaaaaaaaaaaaaa<br>-->
<!--							4444aaaa</div>	-->
<!--												-->
<!--												-->
<!--												-->
<!--	-->
<!--<div  id="testclick" onclick="jQuery(this).effect('blind',{},500);">-->
<!--<div id="testclickEff" onclick="jQuery(this).slideUp();">-->
<!--										-->
<!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa	-->
<!--										  {loadBlocks(##,#WysiwygMini#,#svvv555#,##):h}  -->
<!--										</div>-->
<!--														-->
												
																	
												
			
		</td>
	</tr>
</table>
</form>

<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/CreateProject.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>     