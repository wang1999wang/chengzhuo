<?php
class admin extends controller{
    public function admin($tpl,$module,$controller,$action){
        parent::__construct($tpl,$module,$controller,$action);
        $this->assign('admin_tplpath',ROOT_PATH.'/framework/view/admin/');
        //����Ƿ��Ѿ���¼
        if(!$this->is_login()){
            $this->show_message('���ȵ�¼��');
        }else{
            
        }
    }
    function display($tpl){
        $this->tpl->display('admin/'.$tpl.'.html');
    }
    function is_login(){
        session_start();
        if(!is_numeric($_SESSION['auid'])&&$this->controller!='login'){
            return false;
        }
        return true;
    }
    function show_error(){
        
    }
    function show_message($message){
        echo iconv('gbk','utf-8',$message);die;
    }
}
