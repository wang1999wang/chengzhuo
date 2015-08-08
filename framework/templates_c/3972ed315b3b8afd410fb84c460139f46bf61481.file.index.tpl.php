<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-07 17:53:21
         compiled from "E:\WWW\chengzhuo.wang\framework\view\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1840555c48011949db8-92898427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3972ed315b3b8afd410fb84c460139f46bf61481' => 
    array (
      0 => 'E:\\WWW\\chengzhuo.wang\\framework\\view\\index\\index.tpl',
      1 => 1438910120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1840555c48011949db8-92898427',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c48011997fc7_68071983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c48011997fc7_68071983')) {function content_55c48011997fc7_68071983($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>以马内利-愿上帝与我们同在</title>
    <style>
        body {
            background: url(body_background.jpg);
            font-size: 50px;
            color: #f60;
            margin:0px;
            position:relative;
        }

        .content {
            text-align: center;
            /*padding: 100px 0px 0px 0px;*/
            min-height: 400px;
        }

        .footer {
            width: auto;
            /*padding: 10px 0px 0px 0px;*/
            text-align: center;
            font-size: 12px;
        }

        .footer a {
            width: auto;
            /*padding: 5px;*/
            text-align: center;
            margin-bottom: 0px;
            font-size: 12px;
        }
    </style>
    <?php echo '<script'; ?>
 src="jquery-1.10.2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        /*setInterval(function () {
            var red = Math();
            var green = 1;
            var blue = 1;
            $(document.body).css('color', '#');
        }, 1000);
        function getRTime() {
            var NowTime = new Date('2015/05/04 14:14:36');
            var EndTime = new Date();
            var t = EndTime.getTime() - NowTime.getTime();

            var d = Math.floor(t / 1000 / 60 / 60 / 24);
            var h = Math.floor(t / 1000 / 60 / 60 % 24);
            var m = Math.floor(t / 1000 / 60 % 60);
            var s = Math.floor(t / 1000 % 60);

            document.getElementById("t_d").innerHTML = d + "天";
            document.getElementById("t_h").innerHTML = h + "时";
            document.getElementById("t_m").innerHTML = m + "分";
            document.getElementById("t_s").innerHTML = s + "秒";
        }
        setInterval(getRTime, 1000);*/
    <?php echo '</script'; ?>
>
</head>
<body>
    <div style="position:absolute; width:100%; height:100%; z-index:-1">
        <img src="body_background.jpg" style="width:100%; height:100%; position:fixed;" />
    </div> 
    <div class="content">
        <div></div>
        <div></div>
        <div id="CountMsg" class="HotDate">
        </div>
    </div>
    <div class="footer"><a href="http://www.seohave.com/" target="_blank">刘江强seo博客</a><a href="/bbs/" target="_blank">厚积薄发</a>|<a href="/blog/" target="_blank">清温之龙</a></div>
    <div class="footer"><a href="http://user.qzone.qq.com/672995654/main/">厚积薄发</a>|<a href="http://blog.csdn.net/wang1999wang/">清温之龙</a>|<a href="http://www.miitbeian.gov.cn/">苏ICP备15033934号</a></div>
</body>
</html><?php }} ?>
