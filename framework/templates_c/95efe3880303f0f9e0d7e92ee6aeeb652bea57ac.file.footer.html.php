<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-07 09:18:16
         compiled from "E:\WWW\chengzhuo.wang\framework\view\admin\\library\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:643355c406f174a3e4-13207206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95efe3880303f0f9e0d7e92ee6aeeb652bea57ac' => 
    array (
      0 => 'E:\\WWW\\chengzhuo.wang\\framework\\view\\admin\\\\library\\footer.html',
      1 => 1438910295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '643355c406f174a3e4-13207206',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c406f17bf702_72209265',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c406f17bf702_72209265')) {function content_55c406f17bf702_72209265($_smarty_tpl) {?><!-- external javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- jQuery -->
<?php echo '<script'; ?>
 src="js/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
<!-- jQuery UI -->
<?php echo '<script'; ?>
 src="js/jquery-ui-1.8.21.custom.min.js"><?php echo '</script'; ?>
>
<!-- transition / effect library -->
<?php echo '<script'; ?>
 src="js/bootstrap-transition.js"><?php echo '</script'; ?>
>
<!-- alert enhancer library -->
<?php echo '<script'; ?>
 src="js/bootstrap-alert.js"><?php echo '</script'; ?>
>
<!-- modal / dialog library -->
<?php echo '<script'; ?>
 src="js/bootstrap-modal.js"><?php echo '</script'; ?>
>
<!-- custom dropdown library -->
<?php echo '<script'; ?>
 src="js/bootstrap-dropdown.js"><?php echo '</script'; ?>
>
<!-- scrolspy library -->
<?php echo '<script'; ?>
 src="js/bootstrap-scrollspy.js"><?php echo '</script'; ?>
>
<!-- library for creating tabs -->
<?php echo '<script'; ?>
 src="js/bootstrap-tab.js"><?php echo '</script'; ?>
>
<!-- library for advanced tooltip -->
<?php echo '<script'; ?>
 src="js/bootstrap-tooltip.js"><?php echo '</script'; ?>
>
<!-- popover effect library -->
<?php echo '<script'; ?>
 src="js/bootstrap-popover.js"><?php echo '</script'; ?>
>
<!-- button enhancer library -->
<?php echo '<script'; ?>
 src="js/bootstrap-button.js"><?php echo '</script'; ?>
>
<!-- accordion library (optional, not used in demo) -->
<?php echo '<script'; ?>
 src="js/bootstrap-collapse.js"><?php echo '</script'; ?>
>
<!-- carousel slideshow library (optional, not used in demo) -->
<?php echo '<script'; ?>
 src="js/bootstrap-carousel.js"><?php echo '</script'; ?>
>
<!-- autocomplete library -->
<?php echo '<script'; ?>
 src="js/bootstrap-typeahead.js"><?php echo '</script'; ?>
>
<!-- tour library -->
<?php echo '<script'; ?>
 src="js/bootstrap-tour.js"><?php echo '</script'; ?>
>
<!-- library for cookie management -->
<?php echo '<script'; ?>
 src="js/jquery.cookie.js"><?php echo '</script'; ?>
>
<!-- calander plugin -->
<?php echo '<script'; ?>
 src='js/fullcalendar.min.js'><?php echo '</script'; ?>
>
<!-- data table plugin -->
<?php echo '<script'; ?>
 src='js/jquery.dataTables.min.js'><?php echo '</script'; ?>
>
<!-- chart libraries start -->
<?php echo '<script'; ?>
 src="js/excanvas.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.flot.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.flot.pie.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.flot.stack.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.flot.resize.min.js"><?php echo '</script'; ?>
>
<!-- chart libraries end -->
<!-- select or dropdown enhancer -->
<?php echo '<script'; ?>
 src="js/jquery.chosen.min.js"><?php echo '</script'; ?>
>
<!-- checkbox, radio, and file input styler -->
<?php echo '<script'; ?>
 src="js/jquery.uniform.min.js"><?php echo '</script'; ?>
>
<!-- plugin for gallery image view -->
<?php echo '<script'; ?>
 src="js/jquery.colorbox.min.js"><?php echo '</script'; ?>
>
<!-- rich text editor library -->
<?php echo '<script'; ?>
 src="js/jquery.cleditor.min.js"><?php echo '</script'; ?>
>
<!-- notification plugin -->
<?php echo '<script'; ?>
 src="js/jquery.noty.js"><?php echo '</script'; ?>
>
<!-- file manager library -->
<?php echo '<script'; ?>
 src="js/jquery.elfinder.min.js"><?php echo '</script'; ?>
>
<!-- star rating plugin -->
<?php echo '<script'; ?>
 src="js/jquery.raty.min.js"><?php echo '</script'; ?>
>
<!-- for iOS style toggle switch -->
<?php echo '<script'; ?>
 src="js/jquery.iphone.toggle.js"><?php echo '</script'; ?>
>
<!-- autogrowing textarea plugin -->
<?php echo '<script'; ?>
 src="js/jquery.autogrow-textarea.js"><?php echo '</script'; ?>
>
<!-- multiple file upload plugin -->
<?php echo '<script'; ?>
 src="js/jquery.uploadify-3.1.min.js"><?php echo '</script'; ?>
>
<!-- history.js for cross-browser state change on ajax -->
<?php echo '<script'; ?>
 src="js/jquery.history.js"><?php echo '</script'; ?>
>
<!-- application script for Charisma demo -->
<?php echo '<script'; ?>
 src="js/charisma.js"><?php echo '</script'; ?>
>
<iframe id="formPost" name="formPost" onload="onload_formPost(this);" style="display:none;" src="http://localhost/chengzhuo.wang/"></iframe>
<iframe id="formGet" name="formGet" onload="onload_formGet(this);" style="display:none;"></iframe>
<?php echo '<script'; ?>
>
    function onload_formPost(iframe) {
        //var message = $(iframe.document).find("div:eq(0)").html();
       alert($(window.frames[iframe.id].document.body).html()); return;
        if (message != null) {
            var url = $(iframe.document).find("#layer_url").val();
            var layer_time = $(window.frames[frame_id].document).find("#layer_time").val();
            var layer_st = $(window.frames[frame_id].document).find("#layer_st").val();
            if (message == '验证码错误！') { $("#vcode_img").trigger("click"); }
            if (url == '1') {
                layer.msg(message, layer_time, Number(layer_st), function () { location.reload(); });
            } else if (url == '') {
                layer.msg(message, layer_time, Number(layer_st));
            } else {
                layer.msg(message, layer_time, Number(layer_st), function () { location.href = url; });
            }
        }
    }
    function onload_formGet(iframe) {

    }
<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
