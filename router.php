<?php
require_once './app/Controllers/Bestiario.Controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if($_GET['action']==''){
    // $action='home';
    $action='list';
}else{
    $action = $_GET['action'];
}

$Bcontroller = new BestiarioController();
// $Scontroller = new SessionController();

$parse = explode('/',$action);
switch($parse[0]){
    case 'home':
        $Bcontroller->getHome();
        break;
    case 'list':
        $Bcontroller->getList();
        break;
    case 'insert':
        $Bcontroller->insertList();
        break;
    case 'form':
        $Bcontroller->getPrivateForm();
        break;
    case 'delete':
        $Bcontroller->deleteList($parse[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}
?>
