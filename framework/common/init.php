<?php
header('Content-Type: text/html; charset=utf-8');

error_reporting(0);

define('ROOT_PATH', dirname(dirname(dirname(__FILE__))));
define('COMMMON_PATH', (dirname(dirname(__FILE__))) . '/common');
define('MODEL_PATH', (dirname(dirname(__FILE__))) . '/model');
define('CONTROLLER_PATH', (dirname(dirname(__FILE__))) . '/controller');
define('VIEW_PATH', (dirname(dirname(__FILE__))) . '/view');
define('COMPILE_PATH', (dirname(dirname(__FILE__))) . '/templates_c');

include_once(COMMMON_PATH . '/functions.php');

if (GET('m') && !ereg('^[0-9a-zA-Z\_]*$', GET('m'))) {
	GET('m', 'index');
} 
if (GET('c') && !ereg('^[0-9a-zA-Z\_]*$', GET('c'))) {
	GET('c', 'index');
} 
if (GET('a') && !ereg('^[0-9a-zA-Z\_]*$', GET('c'))) {
	GET('a', 'index');
} 

global $ModuleName, $DirName;
$ModuleName = GET('m')?GET('m'):$ModuleName;
$ControllerName = GET('c');
$ActionName = GET('a');

if ($ModuleName == '') $ModuleName = 'index';
if ($ControllerName == '') $ControllerName = 'index';
if ($ActionName == '') $ActionName = 'index';

$ControllerPath = CONTROLLER_PATH . '/' . $ModuleName . '/';
require(COMMMON_PATH . '/controller.php');

if (file_exists($ControllerPath . $ModuleName . '.php')) {
	require($ControllerPath . $ModuleName . '.php');
} 

if (file_exists($ControllerPath . $ControllerName . '_c.php')) {
	require($ControllerPath . $ControllerName . '_c.php');
} else {
	$ActionName = $ControllerName;
	$ControllerName = 'index';
	if (!file_exists($ControllerPath . $ControllerName . '.class.php')) {
		echo '此模块不存在！';
		die;
	} else {
		require($ControllerPath . 'index.class.php');
	} 
} 

$conclass = $ControllerName . '_c';
$actfunc = $ActionName . '_a';
// include_once(LIB_PATH."mysql.class.php");
include_once(COMMMON_PATH . '/smarty/Smarty.class.php');
$smarty = new smarty();
$smarty -> debugging = false;
$smarty -> caching = false;
$smarty -> force_cache = false;
$smarty -> template_dir = VIEW_PATH;
$smarty -> compile_dir = COMPILE_PATH;
$smarty -> left_delimiter = '{';
$smarty -> right_delimiter = '}';
// $smarty->get_install();
$views = new $conclass($smarty, $ModuleName, $ControllerName, $ActionName);
$views -> m = $ModuleName;
if (!method_exists($views, $actfunc)) {
	$views -> DoException();
} 
$views -> $actfunc();

?>