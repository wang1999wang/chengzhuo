<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-07 09:16:33
         compiled from "E:\WWW\chengzhuo.wang\framework\view\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1978055c406f151f869-16443772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c462cf18c9c6c1f2eb86997206273e0d7fe4356' => 
    array (
      0 => 'E:\\WWW\\chengzhuo.wang\\framework\\view\\admin\\login.html',
      1 => 1438908782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1978055c406f151f869-16443772',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c406f16d1242_00169879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c406f16d1242_00169879')) {function content_55c406f16d1242_00169879($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'E:\\WWW\\chengzhuo.wang\\framework\\common\\smarty\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['admin_tplpath']->value)."/library/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['admin_tplpath']->value)."/library/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="container-fluid">
    <div class="row-fluid">
        <div class="row-fluid">
            <div class="span12 center login-header">
                <h2>Welcome to Charisma</h2>
            </div><!--/span-->
        </div><!--/row-->
        <div class="row-fluid">
            <div class="well span5 center login-box">
                <div class="alert alert-info">
                    Please login with your Username and Password.
                </div>
                <form class="form-horizontal" action="<?php echo smarty_function_url(array('m'=>'admin','c'=>'login','a'=>'save'),$_smarty_tpl);?>
" method="post">
                    <fieldset>
                        <div class="input-prepend" title="Username" data-rel="tooltip">
                            <span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" value="admin" />
                        </div>
                        <div class="clearfix"></div>
                        <div class="input-prepend" title="Password" data-rel="tooltip">
                            <span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="admin123456" />
                        </div>
                        <div class="clearfix"></div>
                        <div class="input-prepend">
                            <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
                        </div>
                        <div class="clearfix"></div>
                        <p class="center span5">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </p>
                    </fieldset>
                </form>
            </div><!--/span-->
        </div><!--/row-->
    </div><!--/fluid-row-->

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['admin_tplpath']->value)."/library/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
