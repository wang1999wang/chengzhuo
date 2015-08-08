<?php
function GET($key,$value=null){
    if($value){
        $_GET[$key]=$value;
    }
    return @$_GET[$key];
}
