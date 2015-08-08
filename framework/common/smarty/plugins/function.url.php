<?php
function smarty_function_url($paramer,$template){
	global $config,$seo;
    $index=$paramer['index'];
    unset($paramer['index']);
    $weburl='http://localhost/chengzhuo.wang/';
    if($paramer['m']=='admin'){
        $url='admin/?c='.$paramer['c'].'&a='.$paramer['a'];
    }
    //$url  =  get_url($paramer,$config,$seo,$paramer['m'],$index,$template);
    
	return $weburl.$url;
}
?>