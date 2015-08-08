<?php
class index extends controller{
    function display($tpl){
        $this->tpl->display('index/'.$tpl.'.tpl');
    }
}
