<!-- start InlineImages Component--->
<div id="wysiwyginlineimg-component" style="display: none;">  
  <div id="wysiwyginlineimg-select-component" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Please confirm Save");?>">
       <div class="dialog-option">  
closeOnEscape :true,
width:730,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Save");?>": function() {
        jQuery(this).rvsDialog('close');
         document.frmComponent.submit();
        },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
         jQuery(this).rvsDialog('close');
        }
}
       </div> 
         <div class="ui-widget dialogPadding">
            <div class="ui-state-highlight ui-corner-all message_publish"> 
                <div style="padding:5px;">  
                    <div style="float: left;"><img class="SPicon SPs6_warning_s2" src="<?php echo htmlspecialchars($t->webRoot);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="18" height="16" border="0" align="absmiddle" />&nbsp;&nbsp;</div><div id="message"></div>
                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Please confirm for save Inlineimages");?>
                </div>
            </div>
        </div>
      </div>
 </div>
<!-- End InlineImages Component --> 

<!-- start InlineImages Side--->
<div id="wysiwyginlineimg-side" style="display: none;">  
  <div id="wysiwyginlineimg-select-side" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Please confirm Save");?>">
       <div class="dialog-option">  
closeOnEscape :true,
width:730,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Save");?>": function() {
        jQuery(this).rvsDialog('close');
         document.FrmSide.submit();
        },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
         jQuery(this).rvsDialog('close');
        }
}
       </div> 
         <div class="ui-widget dialogPadding">
            <div class="ui-state-highlight ui-corner-all message_publish"> 
                <!--<span class="ui-icon ui-icon-notice" style="float: left; margin-right: 0.3em;"></span> -->
                <div style="padding:5px;">  
                    <div style="float: left;"><img class="SPicon SPs6_warning_s2" src="<?php echo htmlspecialchars($t->webRoot);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="18" height="16" border="0" align="absmiddle" />&nbsp;&nbsp;</div><div id="message"></div>
                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Please confirm for save Inlineimages");?>
                </div>
            </div>
        </div>
      </div>
 </div>
<!-- End InlineImages Side --> 

<!-- start InlineImages Wysiwyg--->
<div id="wysiwyginlineimg-wysiwyg" style="display: none;">  
  <div id="wysiwyginlineimg-select-wysiwyg" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Please confirm Save");?>">
       <div class="dialog-option">  
closeOnEscape :true,
modal: true,
width:730,
buttons:{
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Save");?>": function() {
        jQuery(this).rvsDialog('close');
        jQuery.sitebuilder.wysiwyg.actionAJWysiGet('#wysiwygproForm');
        WPro[currentWPo.id].statusSaveInlineImg = 'passSave';
        WPro[currentWPo.name].showDesign();
        },
    "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Close");?>": function() {
         jQuery(this).rvsDialog('close');
        }
}
       </div> 
         <div class="ui-widget dialogPadding">
            <div class="ui-state-highlight ui-corner-all message_publish"> 
                <!--<span class="ui-icon ui-icon-notice" style="float: left; margin-right: 0.3em;"></span> -->
                <div style="padding:5px;">  
                    <div style="float: left;"><img class="SPicon SPs6_warning_s2" src="<?php echo htmlspecialchars($t->webRoot);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/spacer.gif" alt="" width="18" height="16" border="0" align="absmiddle" />&nbsp;&nbsp;</div><div id="message"></div>
                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Please confirm for save Inlineimages");?>
                </div>
            </div>
        </div>
      </div>
 </div>
<!-- End InlineImages Wysiwyg--> 