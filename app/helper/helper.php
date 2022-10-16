<?php
define('LOGIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/login');

class SecuredController{

    public function validate()
    {
        session_start();
        if (!isset($_SESSION['nombre'])){
            header("Location: " . LOGIN);
            die();
        }
    }
}
?>