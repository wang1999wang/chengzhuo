<?php
$Dir = str_replace("/","\\",dirname(__FILE__));
$DirNameList=explode('\\',$Dir);
$ModuleName=end($DirNameList);
$DirName   = end($DirNameList);
include(dirname(dirname(__FILE__)).'framework/common/init.php');