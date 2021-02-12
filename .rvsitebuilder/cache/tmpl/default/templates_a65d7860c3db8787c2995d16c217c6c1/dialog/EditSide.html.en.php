<div id="editside" style="display:none;">  
  <div id="editside-select" title="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo $t->translate("Edit Side");?>">
       <div class="dialog-option">  
closeOnEscape :true,
width:800,
height:555,

doBeforeclose2:function(obj) {
      jQuery(obj).find("#editSideFrame").remove();
    }    
  </div> 
     <div id="iframeEditSide" style="width:100%"></div>
</div>
</div>


