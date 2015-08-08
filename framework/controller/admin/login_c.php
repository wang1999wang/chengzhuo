<?php
class login_c extends admin{
    function index_a(){
        session_start();
        
        $this->display('login');
    }
    function save_a(){
        session_start();
        $_SESSION['auid']=20150829;
        echo 'µÇÂ¼³É¹¦£¡';die;
    }
}
