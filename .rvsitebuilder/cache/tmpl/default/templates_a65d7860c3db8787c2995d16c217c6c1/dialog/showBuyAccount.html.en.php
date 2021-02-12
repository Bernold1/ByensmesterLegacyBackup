<div id="showBuyAccount" style="display: none;">
    <div id="showBuyAccount-tryout" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Buy Account");?>" style="padding:10px;">
        <div class="dialog-option">
modal: true,
closeOnEscape :true,
width: 600,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Buy Account");?>": function() {
	    window.location=jQuery('#urlTryout').val();
    },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
        jQuery('#showBuyAccount-tryout').rvsDialog('close');
    }
}
        </div>
		 <form name="FrmBuyAccountTryout" id="FrmBuyAccountTryout" method="post">
            <input id="urlTryout" name="urlTryout" type="hidden" value="<?php echo htmlspecialchars($t->urlTryout);?>" />
        </form>
    </div>

</div>