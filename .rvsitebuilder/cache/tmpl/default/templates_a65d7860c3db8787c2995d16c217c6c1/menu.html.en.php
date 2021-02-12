<?php if ($t->aCheckStep)  {?>
	<?php if ($this->options['strict'] || (is_array($t->aCheckStep)  || is_object($t->aCheckStep))) foreach($t->aCheckStep as $k => $v) {?>
	<?php echo $v;?>
	<?php }?>
<?php }?>