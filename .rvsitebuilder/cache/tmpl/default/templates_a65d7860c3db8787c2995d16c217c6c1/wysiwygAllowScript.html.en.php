<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#000000" class="attentionPad">
	<tr>
		<td><!--class="attentionBorder"-->

<div>
<!--
	<div id="attentionLeft">
		<div class="at_icon"><img src="{webThemeUrl}/themes/{theme}/sitebuilder/images/attetion.gif" alt="" width="24" height="24" /></div>

		<div class="at_text">{translate(#Attention#):h} : </div>
	</div>
-->
	<div id="attentionLeft02">
		
		<div class="at_text">
			<!--<span>{translate(#Java Applet#):h} :</span>-->
		<?php if ($t->conf['wysiwyg']['allowApplet'])  {?>
			<span class="f11b_green inlinehelp">
				<img class="SPicon SPjavaApplet_on" title="" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="12" height="12" />
				<span style="margin:-5px 0 0 -10px; padding:4px; width:auto; white-space:nowrap;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Java Applet");?>: <font color="#0EAF0A"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Enable");?></font></span></span>
		<?php } else {?>
			<span class="f10b_red inlinehelp"><img class="SPicon SPjavaApplet_off" title="" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="12" height="12" />
			<span style="margin:-5px 0 0 -10px; padding:4px; width:auto; white-space:nowrap;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Java Applet");?>: <font color="#E00404"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Disable");?></font></span></span>
		<?php }?>
		</div>
		
		<div class="at_text">
		<?php if ($t->conf['wysiwyg']['allowScript'])  {?>
			<span class="f11b_green inlinehelp"><img class="SPicon SPjavaScript_on" title="" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="12" height="12" />
			<span style="margin:-5px 0 0 -10px; width:auto; white-space:nowrap;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Java Script");?>: <font color="#0EAF0A"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Enable");?></font></span></span>
		<?php } else {?>
			<span class="f10b_red inlinehelp"><img class="SPicon SPjavaScript_off" title="" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="12" height="12" />
			<span style="margin:-5px 0 0 -10px; width:auto; white-space:nowrap;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Java Script");?>: <font color="#E00404"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Disable");?></font></span></span>
		<?php }?>
		</div>
		
		<div class="at_text">
		<?php if ($t->conf['wysiwyg']['allowPhp'])  {?>
			<span class="f11b_green inlinehelp"><img class="SPicon SPphpScript_on" title="" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="12" height="12" />
			<span style="margin:-5px 0 0 -10px; width:auto; white-space:nowrap;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("PHP Script");?>: <font color="#0EAF0A"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Enable");?></font></span></span>
		<?php } else {?>
			<span class="f10b_red inlinehelp"><img class="SPicon SPphpScript_off" title="" src="<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="12" height="12" />
			<span style="margin:-5px 0 0 -10px; width:auto; white-space:nowrap;"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("PHP Script");?>: <font color="#E00404"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Disable");?></font></span></span>
		<?php }?>
		</div>
	</div>
</div>

</td>
</tr>
</table>