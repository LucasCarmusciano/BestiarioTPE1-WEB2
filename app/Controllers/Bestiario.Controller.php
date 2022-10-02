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
    }

    public function getList(){
        $list = $this->modelMonstruo->getList();
        $this->view->showMonsterList($list);
    }
    public function getCategoriesList(){
        $list = $this->modelCategoria->getList();
        $this->view->showCategoriesList($list);
    }

    public function insertMonsterList(){
        $nombre = $_REQUEST['nombre'];
        $debilidad = $_REQUEST['debilidad'];
        $descripcion = $_REQUEST['descripcion'];
        $id_Categoria_fk = $_REQUEST['categoria'];

        $this->modelMonstruo->insertList($nombre, $debilidad, $descripcion, $id_Categoria_fk);
        header("Location: " . BASE_URL); 
    }
    public function insertCategoriesList(){
        $nombre = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];

        $this->modelCategoria->insertList($nombre, $descripcion);
        header("Location: " . BASE_URL_CAT); 
    }
    
    public function getPrivateForm(){
        $this->view->showAdminForm();
    }

    // public function getFilterList(){
    //     $edadMayor = $_REQUEST['edadMayor'];
    //     $FilterList = $this->modelMonstruo->getFilterList($edadMayor);
    //     $this->view->showList($FilterList);
    // }

    public function deleteMonsterList($id){
        $this->modelMonstruo->deleteList($id);
        header("Location: " . BASE_URL); 
    }
    public function deleteCategoriesList($id){
        $this->modelCategoria->deleteList($id);
        header("Location: " . BASE_URL_CAT); 
    }
}
?>