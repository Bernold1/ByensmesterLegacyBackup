<?php if ($t->error)  {?>
<table align="center">
	<tr>
		<td height="5">
	<!-- Display Error -->
		<?php if ($this->options['strict'] || (is_array($t->error)  || is_object($t->error))) foreach($t->error as $k => $v) {?>
			<div align="center"><br><font size="5" color="red"><?php echo $v;?></font></div>
		<?php }?>
		</td>
	</tr>
</table>
<?php }?>
<!-- set Drag And Drop step1-->
<?php echo $t->setBackgroundDragDrop;?>
<?php if ($t->rvMoveImage)  {?>
<input type="hidden" id ="defaultHiddenStyleLayer1" style ="<?php echo htmlspecialchars($t->defaultHiddenStyleLayer['layer1']);?>" value="<?php echo htmlspecialchars($t->defaultHiddenStyleLayer['layer1']);?>">
<input type="hidden" id ="defaultHiddenStyleLayer2" style ="<?php echo htmlspecialchars($t->defaultHiddenStyleLayer['layer2']);?>" value="<?php echo htmlspecialchars($t->defaultHiddenStyleLayer['layer2']);?>">
<input type="hidden" id ="defaultHiddenStyleLayer3" style ="<?php echo htmlspecialchars($t->defaultHiddenStyleLayer['layer3']);?>" value="<?php echo htmlspecialchars($t->defaultHiddenStyleLayer['layer3']);?>">
<?php }?>
<!-- Display Preview -->
<?php if ($this->options['strict'] || (is_array($t->code_preview)  || is_object($t->code_preview))) foreach($t->code_preview as $v) {?>
	<?php echo $v;?>
<?php }?>
<!-- set Drag And Drop step2-->
<?php if ($t->rvMoveImage)  {?>
	<?php echo $t->scriptOpen;?>
	    useSlogan = <?php echo htmlspecialchars($t->useSlogan);?>;
	    useCompany = <?php echo htmlspecialchars($t->useCompany);?>;
	    parent.document.getElementById('rvMoveLogo').disabled = false;
	    parent.document.getElementById('rvMoveCompany').disabled = (useCompany) ? true : false;
	    parent.document.getElementById('rvMoveSlogan').disabled = (useSlogan) ? true : false;
	    parent.document.getElementById('setDefaultLayerAll').disabled = false
	    parent.closeDefaultBorder()
        setAutoLieff();
	<?php echo $t->scriptClose;?>
<?php }?>




