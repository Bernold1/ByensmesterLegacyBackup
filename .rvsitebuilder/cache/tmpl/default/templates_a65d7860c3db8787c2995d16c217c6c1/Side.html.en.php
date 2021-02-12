<script>
setTimeout(function(){

    if (document.all)
       {               
          document.body.scroll = "no";
         } else {
             
       var oTop = document.body.scrollTop;
       document.body.style.overflow = "hidden";
       document.body.style.backgroundColor = '#FFFFFF'; 
       document.body.scrollTop = oTop;

    }
},50)
</script>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) if ($t->msgGet()) { ?><span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) echo $t->msgGet();?></span><?php }?>
<div align="left">
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('wysiwygAllowScript.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>

        <form action="" method="post" name="FrmSide">     
		<div>
        	 <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'loadBlocks'))) echo $t->loadBlocks("","WysiwygPro","textEditorSide",$t->aPef);?> 
        </div>
        <input type="hidden" name="action" value="edit" />
        <input type="hidden" name="side_config" id="side_config" value="<?php echo htmlspecialchars($t->side_config);?>" />       
        </form>
</div>
<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('dialog/MsgInlineimg.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(get_defined_vars()  as $k=>$v) {
    if ($k != 't') { $_t->$k = $v; }
}
$x->outputObject($_t, $this->elements);
?>