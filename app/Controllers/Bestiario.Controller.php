<?php
require_once './app/Models/Model.Categoria.php';
require_once './app/Models/Model.Monstruo.php';
require_once './app/Views/View.php';

class BestiarioController {
    private $modelMonstruo;
    private $modelCategoria;
    private $view;
    function __construct(){
        $this->modelMonstruo = new ModelMonstruo();
        $this->modelCategoria = new ModelCategoria();
        $this->view = new View();
        session_start();
    }

    public function getList(){
        $list = $this->modelMonstruo->getList();
        $this->view->showMonsterList($list);
    }

    public function getCategoriesList(){
        $listCategoria = $this->modelCategoria->getList();
        $this->view->showCategoriesList($listCategoria);
    }

    public function getFilterList($nombreCategoria){
        $FilterList = $this->modelMonstruo->getFilterList($nombreCategoria);
        $this->view->showMonsterList($FilterList);
    }
}
?>