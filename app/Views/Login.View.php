<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class LoginView {
    function __construct(){
        $this->smarty = new Smarty();
    }

    public function showLogin($mensaje = ''){
        $this->smarty->assign('mensaje',$mensaje);
        $this->smarty->display('login.tpl');
    }
}
?>