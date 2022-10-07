<?php
require_once './app/Controllers/Bestiario.Controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define('BASE_URL_CAT', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/categories');
define('BASE_URL_ADMIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/admin');


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
    case 'list':
        $Bcontroller->getList();
        break;
    case 'insertMonster':
        $Bcontroller->insertMonsterList();
        break;
    case 'insertCategories':
        $Bcontroller->insertCategoriesList();
        break;
    case 'addMonster':
        $Bcontroller->getAddMonster();
        break;
    case 'addCategorie':
        $Bcontroller->getAddCategorie();
        break;
    case 'deleteMonster':
        $Bcontroller->deleteMonsterList($parse[1]);
        break;
    case 'deleteCategorie':
        $Bcontroller->deleteCategoriesList($parse[1]);
        break;
    case 'categories':
        if($parse[1]==''){
            $Bcontroller->getCategoriesList();
        }else{
        $Bcontroller->getFilterList($parse[1]);
        }
        break;
    case 'admin':
        $Bcontroller->getAdminList();
        break;
    case 'updateMonster':
        $Bcontroller->getUpdateMonster($parse[1]);
        break;
    case 'updateCategorie':
        $Bcontroller->getUpdateCategorie($parse[1]);
        break;
    case 'actualizaMonstruo':
        $Bcontroller->actualizaMonstruo($parse[1]);
        break;
    case 'actualizaCategoria':
        $Bcontroller->actualizaCategoria($parse[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}
?>
