<?php
require_once './app/Views/Login.View.php';

class SessionController {
    private $view;

    public function __construct() {
        $this->view = new LoginView();
    }

    public function showLogin() {
        $this->view->showLogin();
    }
}
?>