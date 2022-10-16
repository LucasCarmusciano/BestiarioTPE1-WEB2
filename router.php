<?php
require_once './app/Controllers/Bestiario.Controller.php';
require_once './app/Controllers/Session.Controller.php';
require_once './app/Controllers/Admin.Controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define('BASE_URL_CAT', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/categories');
define('BASE_URL_ADMIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/admin');


if($_GET['action']==''){
    $action='list';
}else{
    $action = $_GET['action'];
}

$Bcontroller = new BestiarioController();
$SessionController = new SessionController();
$AdminController = new AdminController();

$parse = explode('/',$action);
switch($parse[0]){
    case 'login':
        $SessionController->showLogin();
        break;
    case 'logout':
        $SessionController->logout();
        break;
    case 'verifyLogin':
        $SessionController->verifyLogin();
        break;
    case 'list':
        $Bcontroller->getList();
        break;
    case 'categories':
        if($parse[1]==''){
            $Bcontroller->getCategoriesList();
        }else{
        $Bcontroller->getFilterList($parse[1]);
        }
        break;
    case 'insertMonster':
        $AdminController->insertMonsterList();
        break;
    case 'insertCategories':
        $AdminController->insertCategoriesList();
        break;
    case 'addMonster':
        $AdminController->getAddMonster();
        break;
    case 'addCategorie':
        $AdminController->getAddCategorie();
        break;
    case 'deleteMonster':
        $AdminController->deleteMonsterList($parse[1]);
        break;
    case 'deleteCategorie':
        $AdminController->deleteCategoriesList($parse[1]);
        break;
    case 'admin':
        $AdminController->getAdminList();
        break;
    case 'updateMonster':
        $AdminController->getUpdateMonster($parse[1]);
        break;
    case 'updateCategorie':
        $AdminController->getUpdateCategorie($parse[1]);
        break;
    case 'actualizaMonstruo':
        $AdminController->actualizaMonstruo($parse[1]);
        break;
    case 'actualizaCategoria':
        $AdminController->actualizaCategoria($parse[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}
?>
