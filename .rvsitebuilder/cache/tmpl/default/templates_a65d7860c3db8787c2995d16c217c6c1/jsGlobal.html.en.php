<?php echo $t->scriptOpen;?>
       /*
       Don't delete this javascript comment because flexy print new line by self then get javascript error.
       '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","You have made any changes to the fields without submitting, your changes will be lost."));?>';
       */
var lostWarning = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","You have made any changes to the fields without submitting, your changes will be lost."));?>';
var txtConfPre = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","You have made any changes to the fields without submitting."));?>' + "\n" + '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Do you want to preview without changes?"));?>';	
var msgChLang = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Change langauge warning"));?>';

var msgPhotoStatus = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Status"));?>';
var msgPhotoUpload = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Uploading.."));?>';
var msgPhotoFileName = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","File photo name"));?>';
var msgPhotoFileSize = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","File Size"));?>';

var rvsPreviewUrl = "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","preview","sitebuilder"));?>";
var rvsSelectStyleUrl = "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","selectstyles","sitebuilder"));?>";
var rvsCategoryUrl = "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","rvscategory","sitebuilder"));?>";
var rvsUrl = "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","createproject","sitebuilder"));?>";
var rvsMod = "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","","sitebuilder"));?>";
var rvsWebRoot = "<?php echo htmlspecialchars($t->webRoot);?>";
var rvsWebThemeUrl = "<?php echo htmlspecialchars($t->webThemeUrl);?>";
var rvsThemImage = "<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/";
var sessID = "<?php echo htmlspecialchars($t->sessID);?>";
var rvsloading = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Loading..."));?>';
var msgSuccess = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","success"));?>';
var msgCancel = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Cancel"));?>';
var msgPleaseWait = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Please wait"));?>';
var msgDeleteTemplate = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Are you sure to delete template"));?>';
var msgXmlErrorMemoryAndMaxTime = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Due to lavge amount of data,please contact your provider to increase PHP max execution time must over 180 second and The maximum of memory must over 256Mb in WHM Tweak setting."));?>';
var iFrameWysiwyg = "<?php echo htmlspecialchars($t->webThemeUrl);?>/wysiwyg/core/html/iframeSecurity.htm";
var msgUploadFail = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","upload faill"));?>';
var stepWysi = false;
var buttomMsg = {
    Ok: '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Ok"));?>',
    Cancel: '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","Cancel"));?>'
};
var PUBLIC_IMG_URL = "<?php echo htmlspecialchars($t->webThemeUrl);?>/themes/<?php echo htmlspecialchars($t->theme);?>/sitebuilder/images/";
var RVS_AJAX_INDEX = '<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("sitebuilderAjaxExecute","",""));?>';
//var RVS_AJAX_INDEX = '<?php echo htmlspecialchars($t->webRoot);?>/<?php echo htmlspecialchars($t->conf['site']['frontScriptName']);?>/<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getCurrentModule'))) echo htmlspecialchars($t->getCurrentModule());?>/<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getCurrentManager'))) echo htmlspecialchars($t->getCurrentManager());?>/action/sitebuilderAjaxExecute/';
var RVS_AJAX_INDEX_GALLERY_PRO = "<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("sitebuilderAjaxExecute","rvsPhotoGallery","sitebuilderpro"));?>"; 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isDirectAdminMode'))) if ($t->isDirectAdminMode()) { ?>
var UPLOAD_DIRECTADMIN_URL = "<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("getHomeUrl"));?>/CMD_FILE_MANAGER";
var isDirectAdminMode = true;
var msgErrorIframeDa = '<?php if ($this->options['strict'] || (isset($this) && method_exists($this, 'plugin'))) echo htmlspecialchars($this->plugin("translateJsMsg","upload faill please verify"));?>';
<?php } else {?>
var isDirectAdminMode = false;
var UPLOAD_DIRECTADMIN_URL = false;
<?php }?>

<?php if ($t->conf['debug']['production'])  {?>
var SGL_PRODUCTION = true;
<?php } else {?>
var SGL_PRODUCTION = false;
<?php }?>
var confirmTRUE = '';
var confirmFALSE = '';
<?php echo $t->scriptClose;?>

<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addGlobalJavascriptFile'))) echo htmlspecialchars($t->addGlobalJavascriptFile(1,"js/dirtyForm.js"));?>
 
<!-- Add jQuery UI -->
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addGlobalJavascriptFile'))) echo htmlspecialchars($t->addGlobalJavascriptFile(2,"js/jquery-ui/jquery.min.js"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addGlobalJavascriptFile'))) echo htmlspecialchars($t->addGlobalJavascriptFile(2,"js/jquery-ui/ui/minified/jquery-ui.min.js"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addGlobalJavascriptFile'))) echo htmlspecialchars($t->addGlobalJavascriptFile(2,"js/jquery-ui/external/bgiframe/jquery.bgiframe.js"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addGlobalJavascriptFile'))) echo htmlspecialchars($t->addGlobalJavascriptFile(2,"js/jquery-ui/plugins/labs_json.js"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addGlobalJavascriptFile'))) echo htmlspecialchars($t->addGlobalJavascriptFile(2,"js/jquery-ui/plugins/jquery.form.js"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addGlobalJavascriptFile'))) echo htmlspecialchars($t->addGlobalJavascriptFile(2,"js/jquery-ui/ui/ui.datepicker.js"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addGlobalJavascriptFile'))) echo htmlspecialchars($t->addGlobalJavascriptFile(2,"js/jquery-ui/plugins/md5.js"));?>
<!-- End Add jQuery UI -->

<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addGlobalJavascriptFile'))) echo htmlspecialchars($t->addGlobalJavascriptFile(4,"js/sitebuilder.js"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addGlobalJavascriptFile'))) echo htmlspecialchars($t->addGlobalJavascriptFile(4,"js/rvsitebuilder/rvs_sitebuilder.js"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addGlobalJavascriptFile'))) echo htmlspecialchars($t->addGlobalJavascriptFile(4,"js/rvsitebuilder/userviewlog.js"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addGlobalJavascriptFile'))) echo htmlspecialchars($t->addGlobalJavascriptFile(4,"js/rvsitebuilder/changeUserLevel.js"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'addGlobalJavascriptFile'))) echo htmlspecialchars($t->addGlobalJavascriptFile(4,"js/rvsitebuilder/backupproject.js"));?>