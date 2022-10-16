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
            session_start();
            $_SESSION['id'] = $dbUser->id;
            $_SESSION['nombre'] = $dbUser->nombre;
            $_SESSION['email'] = $dbUser->email;

            header("Location: " . BASE_URL);
        }else{
            $this->view->showLogin('Usuario o contraseña incorrecto');
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }

}
?>