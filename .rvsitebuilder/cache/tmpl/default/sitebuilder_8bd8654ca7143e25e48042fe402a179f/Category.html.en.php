<?php if ($t->noLink)  {?>
    <?php if ($t->downloadTemplate)  {?>
        <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('ImportTemplateMenu.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
    <?php }?>
<?php }?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td id="paddingForm">
        <!-- Download template disable tabmenu -->
        <!-- is not reseller and root -->
        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isAdmin'))) if (!$t->isAdmin()) { ?>
            <?php if (!$t->noLink)  {?>
            <div id="topNavigator">
            
                <div><img src="<?php echo htmlspecialchars($t->rvs_url_www);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/designNav01.gif" alt="" width="19" height="27" /></div>
                <div class="openCurrent"></div>
                <div class="linkCurrent"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>" class="topTabActive" id="templateCatalogue"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Template Catalogue");?></a></div>
                <div class="closeCurrent"></div>
                <?php if ($t->allowDIYTemplate)  {?>
                <div class="openActive"></div>
                <div class="linkActive"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("view","diytemplate","sitebuilderpro"));?>create/1" class="topTabDisable" id="createDIYTemplate"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Create DIY Template");?></a></div>
                <div class="closeActive"></div>
                <div style="float:right"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/designNav09.gif" alt="" width="3" height="27" /></div>
				<div class="openActive"></div>
  				 <?php }?>
                <?php if ($t->allowImportTemplate)  {?> 
                <div class="openActive"></div>
                <div class="linkActive"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>submitUserImport/1" class="topTabDisable" id="importYourTemplate"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Export And Import");?></a></div>
                <div class="closeActive"></div>
                <div style="float:right"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/designNav09.gif" alt="" width="3" height="27" /></div>
                <?php }?>
            </div>
            <?php } else {?>
            <div id="topNavigator">
                <div><img src="<?php echo htmlspecialchars($t->rvs_url_www);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/designNav01.gif" alt="" width="19" height="27" /></div>
                <div class="openActive"></div>
                <?php if ($t->tryoutMode)  {?>
                    <div class="linkActive"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Template Catalogue");?></div>
                <?php } else {?>
                    <div class="linkActive"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>" class="topTabDisable" id="templateCatalogue"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Template Catalogue");?></a></div>
                <?php }?>
                <div class="closeActive"></div>
                <?php if ($t->allowDIYTemplate)  {?>
                <div class="openActive"></div>
                <div class="linkActive"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("view","diytemplate","sitebuilderpro"));?>" class="topTabDisable" id="createDIYTemplate"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Create DIY Template");?></a></div>
                <div class="closeActive"></div>
                <div style="float:right"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/designNav09.gif" alt="" width="3" height="27" /></div>
                <?php }?>
                <?php if ($t->allowImportTemplate)  {?>
                <div class="openCurrent"></div>
                <div class="linkCurrent"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>submitUserImport/1" class="topTabActive" id="importYourTemplate"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Export And Import");?></a></div>
                <div class="closeCurrent"></div>
                <div style="float:right"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/designNav09.gif" alt="" width="3" height="27" /></div>
                <?php }?>
            </div>
            <?php }?>
        <?php } else {?>
        <!-- is Admin reseller and root -->
        <div id="topNavigator">
                <div><img src="<?php echo htmlspecialchars($t->rvs_url_www);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/designNav01.gif" alt="" width="19" height="27" /></div>
                <div class="openCurrent"></div>
                <div class="linkCurrent"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Template Catalogue");?></div>
                <div class="closeCurrent"></div>
                <?php if (!$t->noLink)  {?>
                <!-- Diy Template show in admin -->
                <?php if ($t->allowDIYTemplate)  {?>
                <div class="openActive"></div>
                <div class="linkActive"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("view","diytemplate","sitebuilderpro"));?>" class="topTabDisable" id="createDIYTemplate"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Create DIY Template");?></a></div>
                <div class="closeActive"></div>
                <div style="float:right"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/designNav09.gif" alt="" width="3" height="27" /></div>
                <?php }?>
				<?php if ($t->allowImportTemplate)  {?>
				 <!-- Import Template for Admin -->
                <div class="openActive"></div>
                <div class="linkActive"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","uploadtemplate","sitebuilder"));?>parent/1" target="_blank" class="topTabDisable" id="importYourTemplate"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Export And Import");?></a></div>
                <div class="closeActive"></div>
                <div style="float:right"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/designNav09.gif" alt="" width="3" height="27" /></div>
                <?php }?>
                <?php }?>
        <!-- start test witoon -->
        </div>
            <!-- <div><img src="{webThemeUrl}/themes/{theme}/sitebuilder/images/designNav08.gif" alt="" width="100%" height="2" /></div>  -->
        <?php }?>
        
            <div class="frameDesign">
                <div class="border">
                    <div class="border2">
                        <table border="0" cellspacing="0" cellpadding="0" class="tableInfo" width="100%">
                            <tr>
                            <td>
                                <?php if ($t->submitUserImport)  {?>               
                                    <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('UploadTemplate.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>
                                <?php }?>
                            <!-- Start don't show template catague action reupload template -->
                            <?php if (!$t->reupload)  {?>
                                <!-- START BODY -->
                                
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr><td><div id="shadow"></div></td></tr>
									<tr>
										<td id="numPage" align="center" valign="top">
											<table cellpadding="0" cellspacing="0" width="95%" class="linestep2">
												<tr>
													<td align="left">
													<div>
														<?php if ($t->template_total_select)  {?>
                                                             <?php echo htmlspecialchars($t->template_total_select);?> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("templates"));?>
														<?php }?> 
														<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("of");?> <?php echo htmlspecialchars($t->totalTemplate);?> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("total templates"));?>, <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Page");?> <?php echo htmlspecialchars($t->currentPage);?> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("of");?> <?php echo htmlspecialchars($t->totalPage);?>
													</div>
													
													<form name="SelectCategory" method="post" action="">
													
													<div style="padding-top:8px;"></div>
													<div>
														<span> 
														<?php echo $t->showPager;?>                                                               <!--{firstPage:h} {prevPage:h}  {translate(#Page#):h}  {currentPage} {translate(#of#):h} {totalPage} {nextPage:h} {lastPage:h}-->
														</span>
													
															<!-- {translate(#Template / page#):h} :-->
															<?php if ($t->listNumPageOption)  {?>
															<select name="getNumPage" id="getNumPage" onChange="MM_jumpMenu5('top',this,0)" class="menu">
																<?php echo $t->listNumPageOption;?>
															</select>
															<?php }?>
														</div>
														
														</form>
														
													</td>													
													<td align="right">
														<div>&nbsp;</div>
														<div style="padding-top:8px;"></div>
														<div> 
														<?php if ($t->tryoutMode)  {?>
                                                        <img class="SPicon SPflash_tem" src="<?php echo htmlspecialchars($t->rvs_url_www);?>/themes/default/sitebuilder/images/spacer.gif" alt="" width="21" height="20" border="0" align="absmiddle" />
                                                        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Flash Template");?>
                                                        <img class="SPicon SPfix_align" src="<?php echo htmlspecialchars($t->rvs_url_www);?>/themes/default/sitebuilder/images/spacer.gif" alt="" width="21" height="20" border="0" align="absmiddle" />
                                                        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Fixed align");?>
                                                        <img class="SPicon SPfix_width" src="<?php echo htmlspecialchars($t->rvs_url_www);?>/themes/default/sitebuilder/images/spacer.gif" alt="" width="21" height="20" border="0" align="absmiddle" />
                                                        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Fixed width");?>             
														<?php } else {?>
														<img class="SPicon SPflash_tem" src="<?php echo htmlspecialchars($t->rvs_url_www);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="21" height="20" border="0" align="absmiddle" />
														<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Flash Template");?>
														<img class="SPicon SPfix_align" src="<?php echo htmlspecialchars($t->rvs_url_www);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="21" height="20" border="0" align="absmiddle" />
														<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Fixed align");?>
														<img class="SPicon SPfix_width" src="<?php echo htmlspecialchars($t->rvs_url_www);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="21" height="20" border="0" align="absmiddle" />
														<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Fixed width");?>		
														<?php }?>
														</div>									
													</td>													
												</tr>
											</table>                                                        
										</td>
									</tr>
									<tr><td class="lineTopstep2" valign="top"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="1" height="1" border="0" align="absmiddle" /></td></tr>
									<tr><td valign="top"><img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="1" height="10" border="0" /></td></tr>
                                    <tr>
                                        <td align="left" valign="top">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                	<td valign="top" width="195" id="leftmenuStep2">
                                                		<!-- Start List Category -->
                                                		<div><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Template Categories");?></div>
                                                		<ul>
														<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isAdmin'))) if ($t->isAdmin()) { ?>
														<!-- Display Admin RVSiteBuilder -->
														
															<!-- DIY Menu Template Admin -->
															<?php if ($t->submitUserImport)  {?>
																<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","admindownloadtemplate","sitebuilder"));?>select_category_id/0/templatestyle/10/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/submitUserImport/<?php echo htmlspecialchars($t->submitUserImport);?>" <?php echo htmlspecialchars($t->classFocusDiy);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("DIY Template");?></a></li>
															<?php } else {?>
															
																<?php if ($t->downloadTemplate)  {?>
															     	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","admindownloadtemplate","sitebuilder"));?>select_category_id/DiyPicture/templatestyle/0/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" <?php echo htmlspecialchars($t->classFocusDiy);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("DIY Template");?></a></li>
															    <?php } else {?>
															    
															    	<?php if (!$t->tryoutMode)  {?>
																		<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/0/templatestyle/10/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" <?php echo htmlspecialchars($t->classFocusDiy);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("DIY Template");?></a></li>
																	<?php } else {?>
																		<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","templatecategory","tryout"));?>select_category_id/0/templatestyle/10/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" <?php echo htmlspecialchars($t->classFocusDiy);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("DIY Template");?></a></li>
																	<?php }?>
															     	
															    <?php }?>
															     	
															<?php }?>
															<!-- END Menu DIY Template Admin-->
																
															<!-- Menu Import Template Admin-->
															<?php if ($t->submitUserImport)  {?>	
																<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","downloadtemplate","sitebuilder"));?>select_category_id/23/templatestyle/0/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/submitUserImport/<?php echo htmlspecialchars($t->submitUserImport);?>/import_template_style/1" <?php echo htmlspecialchars($t->classFocusImport);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Import template");?></a></li>
															<?php } else {?>
															
																<?php if ($t->downloadTemplate)  {?>
																<!-- admin import template -->
																	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","admindownloadtemplate","sitebuilder"));?>select_category_id/23/templatestyle/0/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/import_template_style/1" <?php echo htmlspecialchars($t->classFocusImport);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Import template");?></a></li>
															    <?php } else {?>
															    
															    	<?php if (!$t->tryoutMode)  {?>
																		<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/0/templatestyle/0/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/import_template_style/1" <?php echo htmlspecialchars($t->classFocusImport);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Import template");?></a></li>
																	<?php } else {?>
																		<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","templatecategory","tryout"));?>select_category_id/0/templatestyle/0/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/import_template_style/1" <?php echo htmlspecialchars($t->classFocusImport);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Import template");?></a></li>
																	<?php }?>		
																														     	
															    <?php }?>
															     
															<?php }?>
															     
															<!-- End Menu Import Template Admin-->
														
														
															<!-- Start list category -->
															<?php if ($this->options['strict'] || (is_array($t->aCategory)  || is_object($t->aCategory))) foreach($t->aCategory as $kCategory => $vCategory) {?>
																<?php if ($t->submitUserImport)  {?>
																	<?php if ($vCategory['focus'])  {?>																
															     	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","downloadtemplate","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/submitUserImport/<?php echo htmlspecialchars($t->submitUserImport);?>" class="curr"><?php echo $vCategory['name'];?></a></li>
																	<?php } else {?>																
																	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","downloadtemplate","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/submitUserImport/<?php echo htmlspecialchars($t->submitUserImport);?>"><?php echo $vCategory['name'];?></a></li>
															     	<?php }?>																																
																	
																<?php } else {?>
																  <?php if ($t->downloadTemplate)  {?>
																	
																	<?php if ($vCategory['focus'])  {?>		
																	<!-- admin alltemplate download-->														
															     	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","admindownloadtemplate","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" class="curr"><?php echo $vCategory['name'];?></a></li>
																	<?php } else {?>																
																	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","admindownloadtemplate","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/"><?php echo $vCategory['name'];?></a></li>
															     	<?php }?>
															     <?php } else {?>
															      	<?php if (!$t->tryoutMode)  {?>
																		<?php if ($vCategory['focus'])  {?>																
														     			<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" class="curr"><?php echo $vCategory['name'];?></a></li>
																		<?php } else {?>																
																		<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/"><?php echo $vCategory['name'];?></a></li>
														     			<?php }?>
														     		<?php } else {?>
														     			<!-- Is tryout -->
														     			<?php if ($vCategory['focus'])  {?>																
														     			<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","tryout"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" class="curr"><?php echo $vCategory['name'];?></a></li>
																		<?php } else {?>																
																		<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","tryout"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/"><?php echo $vCategory['name'];?></a></li>
														     			<?php }?>
														     		<?php }?><!-- END if Tryout -->

															     <?php }?><!-- END if download -->
															     																										
																<?php }?>
															<?php }?>														
														</ul>
														<!-- End List Category -->
														
														<!-- Start List Tempage type -->
														<div><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Template Style");?></div>
                            <ul>
															<?php if ($this->options['strict'] || (is_array($t->aTemplateType)  || is_object($t->aTemplateType))) foreach($t->aTemplateType as $kTemplateType => $vTemplateType) {?>
																<?php if ($t->submitUserImport)  {?>
																	<?php if ($vTemplateType['focus'])  {?>																
															     	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","downloadtemplate","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/submitUserImport/<?php echo htmlspecialchars($t->submitUserImport);?>" class="curr"><?php echo $vTemplateType['name'];?></a></li>
																	<?php } else {?>																
																	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","downloadtemplate","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/submitUserImport/<?php echo htmlspecialchars($t->submitUserImport);?>"><?php echo $vTemplateType['name'];?></a></li>
															     	<?php }?>															
																	
																<?php } else {?>
																	
																	<?php if ($t->downloadTemplate)  {?>
																	 
																		<?php if ($vTemplateType['focus'])  {?>																
															     		<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","admindownloadtemplate","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" class="curr"><?php echo $vTemplateType['name'];?></a></li>
																		<?php } else {?>																
																		<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","admindownloadtemplate","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/"><?php echo $vTemplateType['name'];?></a></li>
															     		<?php }?>
															     	
															     	<?php } else {?>

															     		<?php if (!$t->tryoutMode)  {?>
																			<?php if ($vTemplateType['focus'])  {?>
																			<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" class="curr"><?php echo $vTemplateType['name'];?></a></li>
																			<?php } else {?>
																			<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/"><?php echo $vTemplateType['name'];?></a></li>
																		    <?php }?>
																	    <?php } else {?>
																	   <!-- is tryout -->
																			<?php if ($vTemplateType['focus'])  {?>
																			<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","tryout"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" class="curr"><?php echo $vTemplateType['name'];?></a></li>
																			<?php } else {?>
																			<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","tryout"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/"><?php echo $vTemplateType['name'];?></a></li>
																			<?php }?>
																		<?php }?><!-- END if Tryout -->
															     	
															     	<?php }?><!-- END if download -->
															     	
																<?php }?>
																
															<?php }?> <!-- End Foreach -->
															
																<!-- Import Template menu -->
																<!-- 
																{if:submitUserImport}	
																	<li><a href="{makeUrl(##,#downloadtemplate#,#sitebuilder#)}select_category_id/0/templatestyle/0/picture_style/{picture_style}/getNumPage/{getNumPage}/submitUserImport/{submitUserImport}/import_template_style/1/">{translate(#Import template#):h}</a></li>
															    {else:}
																	{if:downloadTemplate}
																		<li><a href="{makeUrl(##,#downloadtemplate#,#sitebuilder#)}select_category_id/0/templatestyle/0/picture_style/{picture_style}/getNumPage/{getNumPage}/import_template_style/1/">{translate(#Import template#):h}</a></li>
															     	{else:}
															     		{if:!tryoutMode}
																			<li><a href="{makeUrl(##,#rvscategory#,#sitebuilder#)}select_category_id/0/templatestyle/0/picture_style/{picture_style}/getNumPage/{getNumPage}/import_template_style/1/">{translate(#Import template#):h}</a></li>
																		{else:}
																	   
																	   		<li><a href="{makeUrl(##,#rvscategory#,#tryout#)}select_category_id/0/templatestyle/0/picture_style/{picture_style}/getNumPage/{getNumPage}/import_template_style/1/">{translate(#Import template#):h}</a></li>
																		{end:}															     	
															     	{end:}
															     {end:}
															    -->
																<!-- Import Template menu -->
															
															
														</ul>
														<!-- End List Tempage type -->
														
														<!-- END isAdmin() -->														
														<?php } else {?>
														
															<!-- Menu DIY Template User-->
															<?php if ($t->submitUserImport)  {?>
																<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/DiyPicture/templatestyle/0/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/submitUserImport/<?php echo htmlspecialchars($t->submitUserImport);?>" <?php echo htmlspecialchars($t->classFocusDiy);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("DIY Template");?></a></li>
															<?php } else {?>
																<?php if (!$t->tryoutMode)  {?>
																	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/DiyPicture/templatestyle/0/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" <?php echo htmlspecialchars($t->classFocusDiy);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("DIY Template");?></a></li>
																<?php } else {?>
																    <?php if (!$t->tryoutWebsite)  {?>
																	   <?php if (!$t->tryoutMode)  {?>
																	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","tryout"));?>select_category_id/DiyPicture/templatestyle/0/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" <?php echo htmlspecialchars($t->classFocusDiy);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("DIY Template");?></a></li>
																	   <?php }?>
																	<?php }?>
																<?php }?>
															
															<?php }?>
															<!-- End Menu DIY Template User -->
															
															<!-- Menu Import Template User-->
															<?php if ($t->submitUserImport)  {?>																
																<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/23/templatestyle/0/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/submitUserImport/<?php echo htmlspecialchars($t->submitUserImport);?>/import_template_style/1/" <?php echo htmlspecialchars($t->classFocusImport);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Import template");?></a></li>
															<?php } else {?>
																			
																<?php if (!$t->tryoutMode)  {?>
																	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/23/templatestyle/0/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/import_template_style/1/" <?php echo htmlspecialchars($t->classFocusImport);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Import template");?></a></li>
																<?php } else {?>
																    <?php if (!$t->tryoutWebsite)  {?>
																	   <?php if (!$t->tryoutMode)  {?>
																	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","tryout"));?>select_category_id/23/templatestyle/0/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/import_template_style/1/" <?php echo htmlspecialchars($t->classFocusImport);?>><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Import template");?></a></li>
																	   <?php }?>
																	<?php }?>
																<?php }?>
																
															<?php }?>  
															<!-- End Menu Import Template User  -->
														
														
														
														
														<!-- Start list category -->
														 <?php if ($this->options['strict'] || (is_array($t->aCategory)  || is_object($t->aCategory))) foreach($t->aCategory as $kCategory => $vCategory) {?>
														 
															<?php if ($t->submitUserImport)  {?>
																<?php if ($vCategory['focus'])  {?>																
														     	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/submitUserImport/<?php echo htmlspecialchars($t->submitUserImport);?>" class="curr"><?php echo $vCategory['name'];?></a></li>
																<?php } else {?>																
																<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/submitUserImport/<?php echo htmlspecialchars($t->submitUserImport);?>"><?php echo $vCategory['name'];?></a></li>
														     	<?php }?>
															<?php } else {?>
															
															    <?php if (!$t->tryoutMode)  {?>
																	<?php if ($vCategory['focus'])  {?>																
														     		<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" class="curr"><?php echo $vCategory['name'];?></a></li>
																	<?php } else {?>															
																	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/"><?php echo $vCategory['name'];?></a></li>
														     		<?php }?>
														     	<?php } else {?>
														     		<!-- Is tryout -->
																	<?php if ($t->tryoutWebsite)  {?>
																	   <?php if ($vCategory['focus'])  {?>                                                               
	                                    <li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","templateCategory","rvuser"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" class="curr"><?php echo $vCategory['name'];?></a></li>
	                                   <?php } else {?>                                                             
	                                    <li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","templateCategory","rvuser"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/"><?php echo $vCategory['name'];?></a></li>
	                                   <?php }?>
																	<?php } else {?>
																	
															     		<?php if ($vCategory['focus'])  {?>																
															     		<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","tryout"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" class="curr"><?php echo $vCategory['name'];?></a></li>
																		<?php } else {?>																
																		<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","tryout"));?>select_category_id/<?php echo htmlspecialchars($kCategory);?>/templatestyle/<?php echo htmlspecialchars($t->template_type_id);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/"><?php echo $vCategory['name'];?></a></li>
															     		<?php }?>
																    <?php }?>
														     	<?php }?>
														     	
															<?php }?>
															<!--  
															{if:vCategory[focus]}																
														     <li><a href="{makeUrl(##,#rvscategory#,#sitebuilder#)}select_category_id/{kCategory}/templatestyle/{template_type_id}/picture_style/{picture_style}/getNumPage/{getNumPage}/" class="curr">{vCategory[name]:h}</a></li>
															{else:}																
															<li><a href="{makeUrl(##,#rvscategory#,#sitebuilder#)}select_category_id/{kCategory}/templatestyle/{template_type_id}/picture_style/{picture_style}/getNumPage/{getNumPage}/">{vCategory[name]:h}</a></li>
														     {end:}
														     -->
														
														<?php }?>
														
														</ul>
														<!-- End List Category -->
														
														<!-- Start List Tempage type -->
														<div><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Template Style");?></div>
                                                		<ul>
                                                		
														<?php if ($this->options['strict'] || (is_array($t->aTemplateType)  || is_object($t->aTemplateType))) foreach($t->aTemplateType as $kTemplateType => $vTemplateType) {?>
														
															<?php if ($t->submitUserImport)  {?>
															 
																<?php if ($vTemplateType['focus'])  {?>
																<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/submitUserImport/<?php echo htmlspecialchars($t->submitUserImport);?>" class="curr"><?php echo $vTemplateType['name'];?></a></li>
																<?php } else {?>
																
																<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/submitUserImport/<?php echo htmlspecialchars($t->submitUserImport);?>"><?php echo $vTemplateType['name'];?></a></li>
																
																<?php }?>
															 	
															<?php } else {?>
																<?php if (!$t->tryoutMode)  {?>
																	<?php if ($vTemplateType['focus'])  {?>
																	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" class="curr"><?php echo $vTemplateType['name'];?></a></li>
																	<?php } else {?>
																	<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/"><?php echo $vTemplateType['name'];?></a></li>
																	<?php }?>
																<?php } else {?>
																	    <?php if ($t->tryoutWebsite)  {?>
																			<?php if ($vTemplateType['focus'])  {?>
																			<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","templateCategory","rvuser"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" class="curr"><?php echo $vTemplateType['name'];?></a></li>
																			<?php } else {?>
																			<li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","templateCategory","rvuser"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/"><?php echo $vTemplateType['name'];?></a></li>
																			<?php }?>
																		<?php } else {?>
																		<?php if ($vTemplateType['focus'])  {?>
                                                                            <li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","tryout"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/" class="curr"><?php echo $vTemplateType['name'];?></a></li>
                                                                            <?php } else {?>
                                                                            <li><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","tryout"));?>select_category_id/<?php echo htmlspecialchars($t->select_category_id);?>/templatestyle/<?php echo htmlspecialchars($kTemplateType);?>/picture_style/<?php echo htmlspecialchars($t->picture_style);?>/getNumPage/<?php echo htmlspecialchars($t->getNumPage);?>/"><?php echo $vTemplateType['name'];?></a></li>
                                                                            <?php }?>
																		<?php }?>
																<?php }?>
															<?php }?>
														 	 
														<?php }?>
														
															<!-- Import Template menu -->
															<!-- 
															{if:submitUserImport}																
																	<li><a href="{makeUrl(##,#rvscategory#,#sitebuilder#)}select_category_id/0/templatestyle/0/picture_style/{picture_style}/getNumPage/{getNumPage}/submitUserImport/{submitUserImport}/import_template_style/1/">{translate(#Import template#):h}</a></li>
															{else:}
																	{if:!tryoutMode}
																		<li><a href="{makeUrl(##,#rvscategory#,#sitebuilder#)}select_category_id/0/templatestyle/0/picture_style/{picture_style}/getNumPage/{getNumPage}/import_template_style/1/">{translate(#Import template#):h}</a></li>
																	{else:}
																	
																		<li><a href="{makeUrl(##,#rvscategory#,#tryout#)}select_category_id/0/templatestyle/0/picture_style/{picture_style}/getNumPage/{getNumPage}/import_template_style/1/">{translate(#Import template#):h}</a></li>
																	{end:}
															{end:}
															 -->
															<!-- Import Template menu -->
														
														</ul>
														<!-- End List Tempage type -->
														
														<?php }?>                            
														
														
													</td>
                                                    <td align="left" valign="top" style="padding:0 15px;">                                                    
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
															<tr>
																<td align="left" valign="bottom" class="cateName">
																<?php if ($t->isAllCategory)  {?>
																	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("All Categories");?>
																<?php } else {?>
																	<?php echo $t->selectCategoryName;?>
																<?php }?>
																<?php if ($t->import_template_style)  {?>
																	[<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Import Template");?>]
																<?php }?>
																</td>
																<td align="right" valign="top" class="cateName02">
																	<!-- Search Template -->
																	<form name="SelectCategory3" method="post" action="">
																	<div style="padding-bottom:8px;">
																		<label for="rvsCategoryProductIdSearch"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Search ID");?> :</label>
																		<input type="text" name="productIdSearch" id="productIdSearch" value="<?php echo htmlspecialchars($t->productIdSearch);?>" size="20" style="width:140px;" /> 
																		<input type="hidden" name="select_category_id" value="0">
																		<input type="submit" name="search" value="" class="btnSearch">
																	</div>
																	</form>
																	<!-- End Search Template -->
																</td>
															</tr>
															<tr>
																<td align="left" valign="top" colspan="2" style="padding-top:15px;">
																	<table width="660" border="0" cellspacing="0" cellpadding="0" id="tableTemplate">
																	<?php if ($t->template_total_select)  {?>
																		<?php if ($this->options['strict'] || (is_array($t->aShowData)  || is_object($t->aShowData))) foreach($t->aShowData as $k1 => $v1) {?>   
																		<tr>
																			<?php if ($this->options['strict'] || (is_array($v1)  || is_object($v1))) foreach($v1 as $k2 => $v2) {?>
																			<td valign="top">
																				<div id="<?php echo htmlspecialchars($v2['pre_']);?>div_<?php echo htmlspecialchars($v2['template_item_id']);?>">
																				
																				<?php if ($v2['is_current'])  {?>
																					<div class="t_current">
																				<?php } else {?>
																					<div class="t_normal">
																				<?php }?>
																					<!-- Display template id -->
																					<?php if ($v2['is_current'])  {?>
																						<!-- {translate(#Current Template#)} --><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Template Id"));?> <?php echo htmlspecialchars($v2['products_id']);?>
																					<?php } else {?>
																						<?php if ($v2['products_id'])  {?>
																							<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Template Id"));?>
																							<!-- {if:tryoutMode}
																							     {v2[products_id]}
																							{else:} -->
																						          <?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("changProductId",$v2['products_id']));?>
																						  <!--  {end:}-->
																						<?php }?>
																					<?php }?> 
																					</div>
																					
																					<div class="width">
																					<!-- end test witoon -->
																			   
																						<div>
																							<?php if ($v2['template_item_folder'])  {?>
																								
																								<?php if ($v2['is_current'])  {?>
																									<div class="current">
																								<?php } else {?>
																								     
																									 <?php if ($t->tryoutMode)  {?>
																									       <div class="normal">
																									 <?php } else {?>
																									       <div class="normal" onmouseover="this.setAttribute('class','hover'),this.setAttribute('className','hover')" onMouseOut="this.setAttribute('class','normal'),this.setAttribute('className','normal')">
																									 <?php }?>
																									
																								<?php }?>
																								<?php if (!$t->noLink)  {?>
																								<a id="alink<?php echo htmlspecialchars($v2['pre_']);?><?php echo htmlspecialchars($v2['template_item_id']);?>" href="<?php echo htmlspecialchars($t->pagerUrl);?>template_item_id=<?php echo htmlspecialchars($v2['template_item_id']);?>&action=add">
																								<?php }?>
																									<img id="<?php echo htmlspecialchars($v2['pre_']);?><?php echo htmlspecialchars($v2['template_item_id']);?>" src="<?php echo htmlspecialchars($v2['template_url']);?>/<?php echo htmlspecialchars($v2['template_item_folder']);?>/s_preview.<?php echo htmlspecialchars($v2['template_type_s_preview']);?>" width="122" height="113" border="0" style="border:#B9B9B9 solid 2px;"></div>
																								<?php if (!$t->noLink)  {?>
																									</a>
																								<?php }?>
																						</div>
																						<div class="tool">
																							<div class="left">
																							<!-- Now at tryoutlogin template catalogue can't preview -->
																							<?php if (!$t->tryoutMode)  {?>
																							<span>  
																								<a style="cursor:pointer;" id="pview<?php echo htmlspecialchars($v2['pre_']);?><?php echo htmlspecialchars($v2['template_item_id']);?>" popview="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","preview","sitebuilder"));?>template_item_id/<?php echo htmlspecialchars($v2['template_item_id']);?>/action/view/color_id_hid/<?php echo htmlspecialchars($v2['default_color_id']);?>/picture_id/<?php echo htmlspecialchars($v2['default_picture_id']);?>/updateNav/1" OnClick="window.open(this.getAttribute('popview'),'','status=0,scrollbars=1').focus()">
																								  <img class="SPicon SPpreview" src='<?php echo htmlspecialchars($t->rvs_url_www);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif' alt="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Preview"));?>" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Preview"));?>" width="19" height="18">
																								 </a>
																							 </span>
																							<?php }?>
																							<!-- start test2 witoon -->
																							<?php if (!$t->noLink)  {?>
													
																							<span>
																								<!-- is current template show edit / reupload -->
																									   <?php if ($v2['is_current'])  {?>
																											<!--  diytemplate -->
																											
																												<?php if ($v2['isDiyTemplate'])  {?>
																													<a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("editview","diytemplate","sitebuilderpro"));?>template_item_id/<?php echo htmlspecialchars($v2['template_item_id']);?>">
																														<img class="SPicon SPedit" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/default/sitebuilder/images/spacer.gif" alt="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("DiyTemplate"));?>" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Edit DiyTemplate"));?>" width="19" height="18" border="0" /></a>
																												<?php }?>
																											
																												<!-- reupload -->
																												<?php if ($v2['reuploadIcon'])  {?>
																												<a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>current_template_id/<?php echo htmlspecialchars($v2['template_id']);?>/current_template_item_id/<?php echo htmlspecialchars($v2['template_item_id']);?>/reupload/1/submitUserImport/1">
																												<img class="SPicon SPupload" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/default/sitebuilder/images/spacer.gif" alt="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Reupload"));?>" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Reupload"));?>" width="19" height="18" border="0" /></a>
																												<?php }?>
																											
																									  <?php }?>
																							</span> 
																						
																							 <!-- End preview -->
																							 <?php }?>
																							 
																							<!-- Start noLink for download template-->
																								<?php if ($t->noLink)  {?>
																								  
																								<!-- open DIY cannot download
																								{if:!v2[isDiyTemplate]}
																							   -->
																									<?php if ($t->downloadTemplate)  {?>
																				                 <!--  
																									<span>                                                                       
																										 <a href="{makeUrl(##,#sitebuilder#,#sitebuilder#)}action/ajaxReturnOutput/rvsMgr/editdeletetemplate/rvsAct/deleteTemplate/template_id/{v2[template_id]}/template_item_id/{v2[template_item_id]}" 
																											  rel="lightbox" 
																											  class="lbOn"                                                                                                        
																											  rvstemplate="TemplateDetail" 
																											  returnOperation = "inner"
																											  returnObj="div_{v2[template_item_id]}"                                                                                            
																											  frmName="frmConfirmDel"
																											  param="pagetitle/{translate(#Download Template#):h}/inner|"
																											  loading="true"
																											  jsFunc="getDownloadList('{makeUrl(##,#sitebuilder#,#sitebuilder#)}action/ajaxRunManager/rvsMgr/downloadtemplate/rvsAct/add/template_item_id/{v2[template_item_id]}', '{v2[pre_]}{v2[template_item_id]}')" >
																											  <img src="{rvs_url_www}/images/dw.gif" width="19" height="18" border="0"alt="{translate(#Download#)}" title="{translate(#Download#)}"/></a>
																								   </span>
																								 -->
																								   <span>
																								   
																								   <a class="jq_DownloadTemStep2" selectPictureID ="<?php echo htmlspecialchars($v2['pre_']);?><?php echo htmlspecialchars($v2['template_item_id']);?>" temItemID ="<?php echo htmlspecialchars($v2['template_item_id']);?>" template_id ="<?php echo htmlspecialchars($v2['template_id']);?>">
																					
																								    <img src="<?php echo htmlspecialchars($t->rvs_url_www);?>/images/dw.gif" imgsrc ="<?php echo htmlspecialchars($v2['pre_']);?><?php echo htmlspecialchars($v2['template_item_id']);?>" width="19" height="18" border="0" alt="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Download"));?>" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Download"));?>" />
																								    </a>
																								     
																								 </span>
																									<?php }?>
																								   
																									 <!--  {end:}  -->
																								<?php } else {?>
																									<!-- Reupload and delete template for user only -->
																									<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isAdmin'))) if (!$t->isAdmin()) { ?>
																										<span>
																										<?php if ($v2['isImport'])  {?>
																												  <?php if ($v2['isDiyTemplate'])  {?>
																													<a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("editview","diytemplate","sitebuilderpro"));?>template_item_id/<?php echo htmlspecialchars($v2['template_item_id']);?>">
																														<img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/default/sitebuilder/images/edit.gif" alt="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("DiyTemplate"));?>" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Edit DiyTemplate"));?>" width="19" height="18" border="0" /></a>
																												  <?php }?> 
																												  <?php if ($v2['reuploadIcon'])  {?>
																													  <a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>current_template_id/<?php echo htmlspecialchars($v2['template_id']);?>/current_template_item_id/<?php echo htmlspecialchars($v2['template_item_id']);?>/reupload/1/submitUserImport/1"><img class="SPicon SPupload" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/default/sitebuilder/images/spacer.gif" alt="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Reupload"));?>" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Reupload"));?>" width="19" height="18" border="0" /></a>
																												  <?php }?>
																												  <?php if ($v2['deleteIcon'])  {?>
																													<!--<a href="{makeUrl(##,#rvscategory#,#sitebuilder#)}action/ajaxReturnOutput/rvsMgr/editdeletetemplate/rvsAct/deleteTemplate/template_id/{v2[template_id]}/template_item_id/{v2[template_item_id]}" 
																														rel="lightbox" 
																														class="lbOn"                                                                                                                
																														returnOperation = "inner"
																														returnObj="div_{v2[template_item_id]}"
																														rvstemplate="ConfirmDelete" 
																														frmName="frmConfirmDel"
																														param="pagetitle/{translate(#Delete Template List#):h}/inner|objTitle/{translate(#Template Id#)} : {v2[products_id]}/inner"><img class="SPicon SPidel" src="{webThemeUrl}/themes/{theme}/sitebuilder/images/spacer.gif" alt="{translate(#Delete#)}" title="{translate(#Delete#)}"  style="cursor:pointer" border="0" width="19" height="18" /></a>-->
																											<!-- Old confirm delete-->
																												<img src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/i-del.gif" alt="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Delete"));?>" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Delete"));?>" onclick="confirmDelete('<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("deleteTemplate","editdeletetemplate","sitebuilder"));?>?template_id=<?php echo htmlspecialchars($v2['template_id']);?>&template_item_id=<?php echo htmlspecialchars($v2['template_item_id']);?>')" style="cursor:pointer" border="0">
																											   <?php }?> <!-- End delete icon -->
																											
																										<?php }?> 
																										</span>
																									<?php }?> <!-- End isAdmin() {makeUrl(#deleteTemplate#,#editdeletetemplate#,#sitebuilder#)}?template_id={v2[template_id]}&template_item_id={v2[template_item_id]}')-->
																								<?php }?> <!-- End noLink -->
																							<?php }?> <!-- End v2[template_item_folder] -->
																							</div>
																							<div class="right">
																								<!-- Remove comment to use original-->
																								<?php if ($this->options['strict'] || (is_array($v2['color_id'])  || is_object($v2['color_id']))) foreach($v2['color_id'] as $k3 => $v3) {?>                                                                                           
																									<span>
																									<img src="<?php echo htmlspecialchars($t->rvs_url_www);?>/colorID/<?php echo htmlspecialchars($v3->color_id);?>.gif" width="15" height="15" border="0" style="cursor:pointer; margin-top:2px;" onclick="chImage('<?php echo htmlspecialchars($v2['pre_']);?><?php echo htmlspecialchars($v2['template_item_id']);?>','<?php echo htmlspecialchars($v2['template_url']);?>/<?php echo htmlspecialchars($v3->template_item_folder);?>/s_preview.<?php echo htmlspecialchars($v2['template_type_s_preview']);?>', '<?php echo htmlspecialchars($t->pagerUrl);?>template_item_id=<?php echo htmlspecialchars($v3->template_item_id);?>&action=add');
																																 chViewTemplateUrl('<?php echo htmlspecialchars($v2['template_item_id']);?>', '<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","preview","sitebuilder"));?>template_item_id/<?php echo htmlspecialchars($v3->template_item_id);?>/action/view/color_id_hid/<?php echo htmlspecialchars($v3->color_id);?>/picture_id/<?php echo htmlspecialchars($v3->picture_id);?>/font_id/12/navigator_name_id/<?php echo htmlspecialchars($t->navigator_name_id);?>')" />                                                                                             </span>
																								<?php }?>
																								<!-- -->
																								
																								<!-- START TEST 
																								{foreach:v2[color_id],k3,v3}
																								<span>
																								<img src="{rvs_url_www}/colorID/{v3.color_id}.gif" style="cursor:pointer" width="15" height="15" border="0" popview="{makeUrl(##,#preview#,#sitebuilder#)}template_item_id/{v3.template_item_id}/action/view/color_id_hid/{v3.color_id}/picture_id/{v3.picture_id}" OnClick="window.open(this.getAttribute('popview'),'','status=0,scrollbars=1').focus()"/>
																								{v3.template_item_folder
																								</span>
																								{end:}
																		END TEST -->
																								
																								<!-- <div class="t_normal">{v2[total_pic]} {translate(#Pictures#)}</span>  -->
																							</div>
																						</div>
																					</div>
																				</div>
																			 </td>
																			<?php }?> 
																		  </tr>
																		<?php }?> <!-- End loop aShowData -->
																	<?php } else {?>
																		<tr>
																			<td colspan="4" align="center" valign="top">
																				<span class="f12b_orange">
																					<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("There is no template. Please change your filter and try again."));?>
																				 </span>
																			</td>
																		</tr>
																	<?php }?>
																	</table>
																</td>
															</tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
										<tr>
										<td id="numPage" align="center" valign="top" class="lineTopstep2">
											<table cellpadding="0" cellspacing="0" width="95%" class="linestep2">
												<tr>
													<td align="left">
													<div>
														<?php if ($t->template_total_select)  {?>
                                                             <?php echo htmlspecialchars($t->template_total_select);?> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("templates"));?>
														<?php }?> 
														<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("of");?> <?php echo htmlspecialchars($t->totalTemplate);?> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("total templates"));?>, <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Page");?> <?php echo htmlspecialchars($t->currentPage);?> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("of");?> <?php echo htmlspecialchars($t->totalPage);?>
													</div>
													
													<form name="SelectCategory2" method="post" action="">
													<div style="padding-top:8px;"></div>
													<div>
														<span> 
														<?php echo $t->showPager;?>                                                               <!--{firstPage:h} {prevPage:h}  {translate(#Page#):h}  {currentPage} {translate(#of#):h} {totalPage} {nextPage:h} {lastPage:h}-->
														</span>
													
															<!-- {translate(#Template / page#):h} :-->
															<?php if ($t->listNumPageOption)  {?>
															<select name="getNumPage" id="getNumPage" onChange="MM_jumpMenu5('top',this,0)" class="menu">
																<?php echo $t->listNumPageOption;?>
															</select>
															<?php }?>
														</div>
														</form>
														
													</td>
													<td align="right">
													<!--
														{translate(#go to page#):h} :
														<select name="goto2" id="goto2" onChange="MM_jumpMenu5('top',this,0)" class="menu">
															{pageOption:h}
														</select>
													-->
													</td>
												</tr>
											</table>                                                        
										</td>
									</tr>
                                    </table>
                                    <!-- </form> -->
                                    <!-- END BODy -->
                                    
                                <?php }?>
                                <!-- End don't show template catague action reupload template -->   
                            </td>
                            <!-- end test2 witoon -->

                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </td>
    </tr>
</table>

<!-- Disable Download template -->
<?php if (!$t->tryoutMode)  {?>
<div id="ConfirmDelete" style="display:none"><?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('ConfirmDelete.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?></div>
 <!-- <div id="TemplateDetail" style="display:none"><flexy:include src="TemplateDetail.html" /></div>  -->
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/TemplateDetail.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?></div>

<?php }?>