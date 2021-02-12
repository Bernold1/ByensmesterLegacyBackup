<style>
	.actknowledge{
		display:none;
	}
</style>

<div id="openAcknowledge" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Acknowledge");?>" class="warningback_bdr" style="display: none;">
	<div class="warningback_bdrgray">

	<div class="dialog-option">
modal: true,
closeOnEscape :true,
width: 650,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Acknowledge");?>": function() {

     jQuery.sitebuilder.actknowledge.actknowledgeNext(jQuery(this));
    },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Later");?>": function() {
        jQuery(this).rvsDialog('close');
    }
}
	</div>
	
	<table width="80%" cellspacing="0" cellpadding="0" class="warningback_padicon">
	<tr>
		<td align="left" valign="top" class="warningback_icon"></td>
		<td align="left" valign="top">
			<?php if ($this->options['strict'] || (is_array($t->aAcknowledge)  || is_object($t->aAcknowledge))) foreach($t->aAcknowledge as $k => $v) {?>
			<div class="actknowledge" contentmsg="<?php echo htmlspecialchars($k);?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate($k);?></div>
			<?php }?>
			<!--<div class="actknowledge">{translate(#acknowledge content 2#):h}</div>-->
		</td>
	</tr>
	</table>

	</div>
</div>