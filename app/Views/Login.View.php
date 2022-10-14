<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class LoginView {
    public function showLogin(){
        $smarty = new Smarty();
        $smarty->display('login.tpl');
    }
}
?>