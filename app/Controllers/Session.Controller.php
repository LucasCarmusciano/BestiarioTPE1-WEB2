<?php
require_once './app/Views/Login.View.php';
require_once './app/Models/Model.Usuario.php';

class SessionController {
    private $view;

    public function __construct() {
        $this->view = new LoginView();
        $this->model = new ModelUsuario();
    }

    public function showLogin() {
        $this->view->showLogin();
    }

    public function verifyLogin(){
        $email = $_POST['email'];
        $pass = $_POST['contrasenia'];
        $dbUser = $this->model->getUser($email);

        if (isset($dbUser) && password_verify($pass, $dbUser->contrasenia)){
            header('Location: http://'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/list');
        }else{
            $this->view->showLogin('Usuario o contraseña incorrecto');
        }
    }
}
?>