<?php
class controller{
    public $tpl=null;
    public $module=null,$controller=null,$action=null;
	public function __construct($tpl,$module,$controller,$action) {
        list($this->tpl,$this->module,$this->controller,$this->action)=array($tpl,$module,$controller,$action);
    }
    function assign($name,$value=null){
        $this->tpl->assign($name,$value);   
    }
    function display($tpl){
        $this->tpl->display($tpl);   
    }
}
