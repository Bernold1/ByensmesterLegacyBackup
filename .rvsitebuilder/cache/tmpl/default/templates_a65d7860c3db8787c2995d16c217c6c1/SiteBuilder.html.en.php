<?php echo $t->scriptOpen;?>
	//skip dirty form
	bSubmitted=true;
<?php echo $t->scriptClose;?>

<?php if ($t->aProjectNotInDb)  {?>

<?php echo $t->scriptOpen;?>
function checkConfirmDeleteProject() {
    strvalue = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Confirm delete project folder"));?>';
    actionSubmit = document.getElementById('actionSubmit').value;
    if (actionSubmit == 'delete') {
        return (confirm(strvalue)) ? true : false;
    } else {
        return true;
    }
}
<?php echo $t->scriptClose;?>

<form method="post" name="frmRestorePrject" action="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","restoreprojectdbmissing","sitebuilder"));?>" OnSubmit="return checkConfirmDeleteProject()">

<table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td>
		<div class="deselect">
			<div class="warningBorder" style="margin-bottom: 5px; width:100%" align="center">
				  <div class="error"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Total project missing","vprintf","countProjectNotInDb|countProjectNotInDb");?></div>
			</div>
		<div class="border">
		<div class="content">
		<ul>
			<?php if ($this->options['strict'] || (is_array($t->aProjectNotInDb)  || is_object($t->aProjectNotInDb))) foreach($t->aProjectNotInDb as $key => $projectId) {?>
			<input type="checkbox" id="aProjectData[<?php echo htmlspecialchars($projectId);?>]" name="aProjectData[<?php echo htmlspecialchars($projectId);?>]" value="<?php echo htmlspecialchars($projectId);?>">
			<label for="aProjectData[<?php echo htmlspecialchars($projectId);?>]"> <?php echo htmlspecialchars($projectId);?> </label>
			<br />
			<?php }?>
		</ul>
		</div>
		</div>
		<div align="center">
		<input type="hidden" id ="actionSubmit" name="actionSubmit">
		  <input type="submit" id="Submit" name="Restore" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Restore");?>" class="btnRestore" OnClick="Javascript:bSubmitted=true;document.getElementById('actionSubmit').value='Restore';"> <input type="submit" id="Delete" name="Delete" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Delete");?>" class="btnDelete" OnClick="document.getElementById('actionSubmit').value='delete';">
		</div>
		</div>

		</td>
	</tr>
</table>
</form>
<br />

<?php }?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tableStep0">
				<form name="formsite" id="formsite" method="post" action="">
				<tr>
					<td align="right" style="padding-top:6px;">
						<table border="0" cellspacing="0" cellpadding="0" width="100%">
							<tr>
								<td align="center" valign="top" width="99%">
									<table border="0" cellspacing="0" cellpadding="5">
										<tr>
											<td align="right">
												<div>
													<input name="action" type="hidden" id="action" value="create">
													<input name="submitCreate" type="submit" id="submitted" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Create Web Site");?>" class="btnCreateWeb" onclick="Javascript:bSubmitted=true;" />
										
												</div>
											</td>
											<td><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="15" height="1" /></td>
											<!-- Validate is not tryout mode and is Blog active -->
										<?php if ($t->isBlogActive)  {?> 
											<td align="left">
												<div>
													 <input name="submitBlog" type="submit" id="submitted" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Create Blog");?>" class="btnBlog" onclick="Javascript:bSubmitted=true;" />
												</div>
											</td>				
										<?php }?>
											<td><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="15" height="1" /></td>
										<!-- Validate Create Tryout isTryoutActive --> 
										<?php if ($t->isTryoutActive)  {?>
											<td align="left">
												<div>
													 <input name="submitTryout" type="submit" id="submitted" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Create Tryout");?>" class="btnTryout" onclick="Javascript:bSubmitted=true;" />
												</div>
											</td>
										<?php }?>
										<td><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="15" height="1" /></td>
                                        <!-- Validate Create Tryout isTryoutActive --> 
                                       <?php if ($t->isPhotoGalleryActive)  {?>
                                            <td align="left">
                                                <div>
                                                     <input name="submitPhotoGallery" type="submit" id="submitted" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Create Photo Gallery");?>" class="btnPhotoGall" onclick="Javascript:bSubmitted=true;" />
                                                </div>
                                            </td>
                                       <?php }?>
										</tr>
									</table>
								</td>
								<?php if ($t->isAllowTutorial)  {?>
								<td align="right" valign="top"> 
									<a href="javascript:void(0);" onclick="bSubmitted=true; 
				openDialogCenter('<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("view","help","sitebuilder"));?>category/rvsitebuilderhelp/page/create_project', '790', '560', '0', '0', '0', '0', '0', '0');"><img class="SPicon SPoverview" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" tooltipid ="tipOverview" positionx='-80' positiony='-20' alt="" width="26" height="30" hspace="10" border="0" /></a>
									<div style="display:none" id="tipOverview">
										<div class="tooltipStep5Bdr" style="z-index:0"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Overview");?></div>
									</div>
								</td>
								<?php }?>
							</tr>
						</table>	
					</td>
				</tr>
				</form>
				
				<?php if ($t->aProject)  {?>
				<tr>
					<td><div class="tabblue"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Edit and Remove Project.");?></div></td>
				</tr>
				<tr>
					<td align="center">
						<table cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td width="25%">&nbsp;</td>
								<td align="left" valign="top">
								<div class="content">
									<div class="bgEdit">
										<div class="icon"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="48" height="48" border="0" /></div>
										<div class="title"><label for="name" style="font-weight:bold"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Edit existing site");?></label></div>
										<div>
											<form id="FrmChkCovertProjectUTF8Format" name="FrmChkCovertProjectUTF8Format" method="post" action="">
												<input id="editProjectList" name="project_id" type="hidden" value="<?php echo htmlspecialchars($t->Projectid);?>" />
												<!--<span><select name="project_id" id="editProjectList" class="menu">{pidOptions:h}</select></span>-->
												<span class="left">
												 <dl class="editdropdown">
												    <dt>
						                              <a href="javascript:void(0);" id="currentFont"><span><?php echo $t->projectNameCurrent;?></span></a>
						                            </dt>
						                             <dd>
						                               <ul>
						                                 <?php if ($this->options['strict'] || (is_array($t->aProject)  || is_object($t->aProject))) foreach($t->aProject as $projectId => $projectName) {?>
						                                 <li><a href="javascript:void(0);" class="Projectedit" id="<?php echo htmlspecialchars($projectId);?>"><span><?php echo htmlspecialchars($projectName);?></span></a></li>
						                                 <?php }?> 
						                               </ul>
										             </dd>
			                                     </dl> 
							                     </span>
												  <span><input name="submitEdit" type="hidden" id="submitEdit" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Edit");?>" class="btnEdit" /></span>
												  <span><input name="submitConvertProjectUTF8" type="button" id="submitConvertProjectUTF8" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Edit");?>" class="btnEdit" /></span>   
											</form>
											  <!-- demo -->
												<!-- <span><input name="submitEdit" type="button" id="submitEdit" value=" {translate(#Edit#):h}" class="btnEdit"  /></span> -->
												<!-- <span><input name="submitEdit" type="submit" id="submitEdit2" value=" {translate(#Edit#):h}2" onclick="Javascript:bSubmitted=true;" class="btnEdit"  /></span> -->
												<!-- 
												<form id="aa" name="aa" method="post" FLEXY:IGNORE="yes" action="">
												<span><input name="submitEdit1" type="button" id="submitEdit1" value=" {translate(#Edit#):h}" class="btnEdit"  /></span>   
												</form>
												<span><a href="#" name="submitEdit1" id="submitEdit1" class="btnEdit"> {translate(#Edit#):h} </a><span>
												 -->
											 <!-- end demo -->
										</div>
									</div>
								</div>
								</td>
							</tr>
						</table> 
					</td>
				</tr>
				<?php }?>
				
				<?php if ($t->aProject)  {?>
				<tr>
					<td align="center">
						<table cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td width="25%">&nbsp;</td>
								<td align="left" valign="top">
							   <form id="FrmRemove" name="FrmRemove" method="post" action="">
							   <input id="removeProjectList" name="project_id" projectName="<?php echo htmlspecialchars($t->projectNameCurrent);?>" type="hidden" value="<?php echo htmlspecialchars($t->Projectid);?>" />
								<div class="content">
									<div class="bgRemove">
										<div class="icon"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="48" height="48" border="0" /></div>
										<div class="title" id="removeProjectTitle"><label for="remove" style="font-weight:bold"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Remove Project");?></label></div>
											<!--<span><select name="project_id" class="menu" id="removeProjectList">{pidOptions:h}</select></span>-->
					                        <span class="left">
					                         <dl class="removedropdown">
					                         <dt>
					                          <a href="javascript:void(0);" id="currentFont"><span><?php echo $t->projectNameCurrent;?></span></a>
					                          </dt>
					                          <dd>
					                          <ul>
					                            <?php if ($this->options['strict'] || (is_array($t->aProject)  || is_object($t->aProject))) foreach($t->aProject as $projectId => $projectName) {?>
					                             <li><a href="javascript:void(0);" class="Projectremove" id="<?php echo htmlspecialchars($projectId);?>" projectName="<?php echo htmlspecialchars($projectName);?>"><span><?php echo htmlspecialchars($projectName);?></span></a></li>
					                            <?php }?> 
					                          </ul>
					                          </dd>
					                          </dl> 
					                         </span>
											  <a id="FrmRemoveProject">
												<span><input name="submitRemove" type="button" id="submitRemove" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Remove");?>" class="btnRemove" /></span>
												</a>
									</div>
								</div>
								</form>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<?php }?>
				
			<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isAllowExport")) { ?>	
				<?php if ($t->pidOptions)  {?>
			<tr>
				<td><div class="tabblue"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Backup and Restore Project.");?></div></td>
			</tr>
            <tr>
                <td align="center">
					<table cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td width="25%">&nbsp;</td>
							<td align="left" valign="top">
								<form id="FrmExport" name="FrmExport" method="post" action="">
								<input id="ExportProjectList" name="project_id" projectName="<?php echo htmlspecialchars($t->projectNameCurrent);?>" type="hidden" value="<?php echo htmlspecialchars($t->Projectid);?>" />
								<div class="content">
									<div class="bgBackup">
										<div class="icon"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="48" height="48" border="0" /></div>
									<div class="title" id="exportProjectTitle"><label for="remove" style="font-weight: bold"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Export Project");?></label></div>
									 <!--<select name="project_id" class="menu" id="ExportProjectList">{pidOptions:h}</select>-->
										<span class="left">
				                         <dl class="exportdropdown">
				                         <dt>
				                          <a href="javascript:void(0);" id="currentFont"><span><?php echo $t->projectNameCurrent;?></span></a>
				                          </dt>
				                          <dd>
				                          <ul>
				                            <?php if ($this->options['strict'] || (is_array($t->aProject)  || is_object($t->aProject))) foreach($t->aProject as $projectId => $projectName) {?>
				                             <li><a href="javascript:void(0);" class="Projectexport" id="<?php echo htmlspecialchars($projectId);?>"><span><?php echo htmlspecialchars($projectName);?></span></a></li>
				                            <?php }?> 
				                          </ul>
				                          </dd>
				                          </dl> 
				                         </span>
										<!-- ExportProjectMgr.php , template name ExportProject.html--> 
										<a id="FrmBackupProject">
										<span><input name="submitExport" type="button" id="submitExport" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Export");?>" class="btnBackup" /></span>
										</a> 
									
									 </div>
									</div>
								</form>
							</td>
						</tr>
					</table>
                </td>
            </tr>
            
            <?php }?>
            
            <?php }?>

            <?php if ($t->isAllowImport)  {?>
            <!-- Start If don't have project -->
            <?php if (!$t->pidOptions)  {?>
			<tr><td><div class="tabblue"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Backup and Restore Project.");?></div></td></tr>
			<?php }?>
			<!-- End If don't have project -->			
            <form name="FrmRestore" method="post" action="">
            <tr>
                <td align="center">
					<table cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td width="25%">&nbsp;</td>
							<td align="left" valign="top">
							<div class="content">
								<div class="bgRestore">
									<div class="icon"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="48" height="48" border="0" /></div>
								<div class="title" id="importProjectTitle"><label for="remove" style="font-weight: bold"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Import Project");?></label></div>
								<div>
								   <span>
								   <!-- importprojectMgr.php , template name ImportProject.html--> 
								   <a id="FrmRestoreProject">							
									<input name="submitImport" type="button" id="submitImport" value=" <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Restore");?>" class="btnRestore" style="margin-top:5px;" /> </a> 
									</a> 
									<!-- 							
								   <a href="{makeUrl(#view#,#importproject#,#sitebuilder#)}"
									frmActSet="fixed" rel="lightbox" class="lbOn"
									rvstemplate="ImportProject" 
									returnObj="validateImportProject"
									returnOperation="wait_json" 
									param="unset"
									frmName="FrmImportProject"
									onMouseOver="javascript:document.getElementById('pagetitle').innerHTML = document.getElementById('importProjectTitle').innerHTML;">
									<input name="submitImport" type="button" id="submitImport" value=" {translate(#Restore#):h}" class="btnRestore" style="margin-top:5px;" /> </a> 
									 -->
									</span>
								</div>
							</div>
						</div>
					 </td>
            		</tr>	
					</table>
                </td>
            </tr>
            </form>
            <?php }?>
            
			</table>
		</td>
	</tr>

</table>
</form>
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/removeproject.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<!--  <flexy:include src="dialog/backupproject.html" />-->
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/restoreproject.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/showBuyAccount.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<!-- demo -->
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/ConvertProjectUTF8Format.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<!-- end demo -->

<div id="ExportProject" style="display:none"><?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('ExportProject.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?></div>
<!-- div id="ImportProject" style="display:none"><flexy:include src="ImportProject.html" /></div--> 
<!--  load disQuota user and run ajax script warning message if more than 90% . -->
<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("isQuotaUser",90);?>
<!-- //end load disQuota user and run ajax script warning message if more than 90% . -->