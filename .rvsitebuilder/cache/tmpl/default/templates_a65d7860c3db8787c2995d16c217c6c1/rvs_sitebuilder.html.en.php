<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('header.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?> 
<?php if ($t->warningMakecpphp)  {?>
<table cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFF8C3" style="border:#814900 solid 1px; font-size:11px; font-family:Verdana, Arial, Helvetica, sans-serif;">
    <tr>
        <td style="border:#FFFFFF solid 1px; padding:6px 15px; color:#F70000;">
            <div style="font-size:14px; font-weight:bold; text-align:center;">WARNING !!</div>
			<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isDirectAdmin'))) if (!$t->isDirectAdmin()) { ?>
                Internal PHP mismatches. Please contact your provider to run /scripts/makecpphp to fix it.
			 <?php }?>
        </td>
    </tr>
</table>
<?php }?>
<input type="hidden" id="nextStep" value="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("ChangeStepImg",$t->step,"NextStep",9));?>" />
<input type="hidden" id="thisStep" value="<?php echo htmlspecialchars($t->step);?>" />

<!-- NEW Design -->
<table cellpadding="0" cellspacing="0" width="100%" class="borderOutside">
	<tr>
		<td class="tableRVS"><table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td><!-- Start TOP BAR -->
                        <div id="topBar">
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td>
                                                <div class="brand"><?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("getTextBrand");?></div>
                                                <div class="menu">
													<div class="close"></div>
													<div class="link"><a href="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getHomeUrl"));?><?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getLogoutUrl"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Logout");?></a></div>
													<!-- change user level for nocp mode only -->
												   <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isEqual'))) if ($t->isEqual($t->conf['SiteBuilder']['cpmode'],"nocp")) { ?>
												        <div class="bar"></div> 
									                    <div class="link"><a href="#" id="clickChangeUserLevel">Change user (nocp only)</a></div>
												   <?php }?>
													<div class="bar"></div>
													<div class="link"><a href="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getHomeUrl"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Control Panel");?></a></div>
													<!-- Backup project button -->
													<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("isAllowExport")) { ?>
														<div class="bar"></div>
														<div class="link">
															<?php if ($t->rvs_project_id)  {?>
															<a id=globalsFrmBackupProject>
															<input name="globalsSubmitExport" type="button" id="globalsSubmitExport" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?>" />
															</a> 
															 <?php } else {?>
															<input type="button" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Export Project"));?>" />
															 <?php }?>
														</div>
													<?php }?>
													<!-- Backup project button -->
													<!-- start back to tryout-->
													<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("getUrlBackToTryout")) { ?>
                                                    <div class="bar"></div>
                                                       <div class="link"><a href="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getHomeUrl"));?><?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getUrlBackToTryout"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Back to Tryout");?></a></div>
                                                    <?php }?>
													<!--end  back to tryout-->
													
													<!-- start Link Buy Account-->
													<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) if ($this->plugin("getBuyAccountUrl")) { ?>
													<div class="bar"></div>
													   <div class="link"><a href="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getBuyAccountUrl"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Buy Account");?></a></div>
													<?php }?>
													<div class="open"></div>
													<!-- end Link Buy Account-->
                                                </div>
                                   </td>
                                </tr>
                            </table>
                        </div>
                    <!-- End TOP BAR -->
                        <!-- Start STEP -->
                        <div id="step">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td valign="top"><table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td valign="top" class="side"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","sitebuilder","sitebuilder"));?>" class="active"> <img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/iconHome.jpg" alt="" width="39" height="59" border="0" /><br />
                                                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("HOME");?> </a> </td>
                                                <td><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/closeHome.gif" alt="" width="12" height="86" /></td>
                                            </tr>
                                    </table></td>
                                    <td width="99%" valign="top"><table border="0" cellspacing="0" cellpadding="0" id="sevenStep" width="100%">
                                            <tr> <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("ChangeMenu",$t->step,"step");?>
                                                <td width="99%"></td>
                                            </tr>
                                    </table></td>
                                    <td valign="top"><table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/closePreview.gif" alt="" width="12" height="86" /></td>
                                                <td valign="top" class="side"><!-- <img src="{webThemeUrl}/themes/{theme}/sitebuilder/images/iconPreview.jpg" alt="" width="39" height="59" /><br />
											  		Preview  -->
                                                    <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("ChangeMenu",$t->step,"preview");?> </td>
                                            </tr>
                                    </table></td>
                                </tr>
                            </table>
                        </div>
                    <!-- End STEP -->                </td>
            </tr>
            <!-- Start DEFINE STEP -->
            <tr id="rvStepInfo">
                <td bgcolor="#FFFFFF">
                <div id="StepInfo" style="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("showHideStepInfoBar"));?>">            
                    <div id="defineStep">
                        <div></div>
                        <div style="float:right;" id="showHideAdminMenu">
                            <img id="iconArrowShortcut" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("swapTagWelcomeArrow"));?>" alt="" width="11" height="11" border="0" style="cursor:pointer;" />
                        </div>
                        <div style="display:none" id="tipWelcome">
                            <div class="tooltipStep5Bdr" style="z-index:0"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("show or hide");?>
                        </div>
					</div>
                    
                    <table cellpadding="0" cellspacing="0" width="100%">
                        	<tr>
                        		<td>
                        		    <div id="tableDefineStep" style="<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("showHideTagWelcome"));?>">
									<table cellpadding="0" cellspacing="0" width="100%">
			                            <tr>
			                              <td valign="top"><?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("getLogoBrand");?></td>
			                                <td width="99%" class="detail" valign="top">                                
					                              <div id="header"> <?php if (!$t->step)  {?>
					                                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Home Main");?>
					                                    <?php } else {?>
					                                    <?php if ($t->mode)  {?>	
					                                    <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("stepDescription",$t->step,"stepNo",$t->mode);?> :
					                                    <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("stepDescription",$t->step,"stepName",$t->mode);?>
					                                    <?php } else {?>
					                                    <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("stepDescription",$t->step,"stepNo");?> :
					                                    <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("stepDescription",$t->step,"stepName");?>														
					                                    <?php }?>
					                                    <?php }?> </div>
					                                    <div> <?php if (!$t->step)  {?>
					                                            <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Home Description");?>
					                                            <?php } else {?>
					                                            <?php if ($t->mode)  {?>
					                                            <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("stepDescription",$t->step,"detail",$t->mode);?>
					                                            <?php } else {?>
					                                            <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("stepDescription",$t->step,"detail");?>
					                                            <?php }?>											
					                                            <?php }?> 
					                                      </div>
			                                    </td>                              
			                            </tr>
			                        </table>
			                        </div>
                        		</td>
                        	</tr>
                        </table>          		
                 
                </div>               
                        <div style="clear:both;">
                            <!--  Start ShortCutMenu add comment for distribuild -->
                            <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('shortcutMenu.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
                            <!-- End ShortCutMenu -->
                    </div>
                    </div>
                    </td>
            </tr>
            <tr>
                <td><div id="StepInfoBar" class="hideBar">
                        <table border="0" cellspacing="0" cellpadding="0" class="bgbutton" style="cursor:pointer">
                            <tr>
                                <td><img id="StepBarArrow" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("swapHideBarArrow"));?>" alt="" width="20" height="27" /></td>
                                <td><div><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Click to show or hide.");?></div></td>
                                <td><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/hidBar03.gif" alt="" width="11" height="27" /></td>
                            </tr>
                        </table>
                </div>

                <div id="rvDisplayMSGBOXALL">
                <div id ="rvDisplayMSGBOX">
                    <?php if (!$t->DisableResMsg)  {?>
                    <!-- Start Display Error -->
                    <div id ="rvDisplayError" align="center" style="margin-bottom:5px;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) if ($t->msgGet()) { ?><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) echo $t->msgGet();?></span><?php }?></div>
                    <!-- End Display Error -->
                    <!-- Start Warning -->
                    <?php if ($t->error)  {?>
                    <table id =" " border="0" cellspacing="0" cellpadding="0" class="errorStep2" align="center">
                        <tr>
                            <td><ul>
                                <?php if ($this->options['strict'] || (is_array($t->error)  || is_object($t->error))) foreach($t->error as $k => $v) {?>
                                <li><?php echo $v;?></li>
                                <?php }?>
                            </ul></td>
                        </tr>
                    </table>
                    <?php }?>
                    </div>
                    <?php if ($t->errorcopy)  {?>
                    <table border="0" cellspacing="0" cellpadding="0" class="errorStep2" align="center">
                        <tr>
                            <td><ul>
                                <?php if ($this->options['strict'] || (is_array($t->errorcopy)  || is_object($t->errorcopy))) foreach($t->errorcopy as $k => $v) {?>
                                <li><?php echo $v;?></li>
                                <?php }?>
                            </ul></td>
                        </tr>
                    </table>
                    <?php }?>
                    </div>
                    <!-- End Warning Error -->
                    <?php }?> </td>
            </tr>
            <!-- End DEFINE STEP -->
            <!-- Start STEP FRAME -->
		    <?php if (!$t->step)  {?>
    <tr>
        <td id="paddingFormStep0"> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'outputBody'))) echo htmlspecialchars($t->outputBody());?> </td>
    </tr>
		    <?php } else {?>
    <tr> <?php if ($t->iswysiwyg)  {?>
        <td id="stepFrameWysiwyg"> <?php } else {?> </td>
        <td id="stepFrame"> <?php }?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td id="imgFrame01"></td>
                            <td width="99%" id="top"></td>
                            <td id="imgFrame02"></td>
                        </tr>
                        <tr>
                            <td id="left" valign="top"><div id="imgFrame09"></div></td>
                            <td valign="top" id="bodyBlock"><div id="titleBar">
                                    <div class="title"> <?php if ($t->mode)  {?>	
                                        <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("stepDescription",$t->step,"stepNo",$t->mode);?> :
                                        <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("stepDescription",$t->step,"stepName",$t->mode);?>
                                        <?php } else {?>
                                        <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("stepDescription",$t->step,"stepNo");?> :
                                        <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("stepDescription",$t->step,"stepName");?>													
                                        <?php }?> </div>
                                <!-- showlog js --> 
                                    <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialogTool.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
                                <!-- end showlog js -->
                                <div style="float:right;">
                                
                                <img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/help.gif" alt="" width="27" height="27" /></div>
                            </div>
                                    <div id="shadow"></div>
                                <div class="clear"></div>
                                <div> <?php if ($t->isWysiwygAllowScript)  {?>
                                        <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('wysiwygAllowScript.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
                                    <?php }?>
                                    <?php if ($t->componentConfigUser)  {?>
                                    <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('rvs_usercomponent.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
                                    <?php } else {?>
                                    <!-- START OUT PUT BODY -->
                                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'outputBody'))) echo htmlspecialchars($t->outputBody());?>
                                    <!-- END OUT PUT BODY -->
                                    <?php }?> </div></td>
                            <td id="right" valign="top"><div id="imgFrame10"></div></td>
                        </tr>
                        <tr>
                            <td id="imgFrame03"></td>
                            <td id="bottom">&nbsp;</td>
                            <td id="imgFrame04"></td>
                        </tr>
                </table></td>
    	</tr>
		    <?php }?>
    <!-- End STEP FRAME -->
        </table></td>
	</tr>
	<tr>
	   <td class="footerversion">
	   		<div style="float:left;"><?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("getRVSLicense");?> (v<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("getRVSVersion");?>) <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo $this->plugin("getRVSProjectId");?></div>
			<div align="right">
				<!-- icon view log -->
				<a hrefLog="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("view","viewlog","sitebuilder"));?>" id="userViweLog" class="viewlog">
				    <img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/logview.gif" alt="" width="10" height="11" border="0" align="absbottom" /> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Viewlog");?>
				</a>
			</div>
	   </td>
	</tr>
</table>

<!-- middle column -->

<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/ChangeUserLevel.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
<?php if ($t->conf['SiteBuilder']['showAckKnowledge'])  {?>
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/acknowledge.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?> 
<?php }?>
<!-- footer column -->
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('footer.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?> 
