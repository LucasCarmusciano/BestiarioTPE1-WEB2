<?php
require_once './app/Models/Model.Categoria.php';
require_once './app/Models/Model.Monstruo.php';
require_once './app/Views/Monstruo.View.php';

class BestiarioController {
    private $model;
    private $view;
    function __construct(){
        $this->model = new ModelMonstruo();
        $this->view = new MonstruoView();
    }

    public function getList(){
        $list = $this->model->getList();
        $this->view->showList($list);
    }

    public function insertList(){
        $nombre = $_REQUEST['nombre'];
        $debilidad = $_REQUEST['debilidad'];
        $descripcion = $_REQUEST['descripcion'];
        $id_Categoria_fk = $_REQUEST['categoria'];

        $this->model->insertList($nombre, $debilidad, $descripcion, $id_Categoria_fk);
        header("Location: " . BASE_URL); 
    }
    
    public function getPrivateForm(){
        $this->view->showPrivateForm();
    }

    public function getFilterList(){
        $edadMayor = $_REQUEST['edadMayor'];
        $FilterList = $this->model->getFilterList($edadMayor);
        $this->view->showList($FilterList);
    }

    public function deleteList($id){
        $this->model->deleteList($id);
        header("Location: " . BASE_URL); 
    }
}
?>