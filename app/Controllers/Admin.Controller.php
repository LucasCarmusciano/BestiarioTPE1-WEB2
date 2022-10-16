<?php
require_once './app/Models/Model.Categoria.php';
require_once './app/Models/Model.Monstruo.php';
require_once './app/Views/View.php';
require_once './app/helper/helper.php';

class AdminController{
    private $modelMonstruo;
    private $modelCategoria;
    private $view;
    private $secured;
    function __construct(){
        $this->modelMonstruo = new ModelMonstruo();
        $this->modelCategoria = new ModelCategoria();
        $this->view = new View();
        $this->secured = new SecuredController();
    }

    public function getAdminList(){
        $this->secured->validate();
        $listCategoria = $this->modelCategoria->getList();
        $listMonster = $this->modelMonstruo->getList();
        $arrCounts = array();
        foreach ($listCategoria as $categoria) {
            $filterList = $this->modelMonstruo->getFilterList($categoria->nombre);
            $arrCounts[$categoria->id] = count($filterList);
        }
        $this->view->showAdminList($listCategoria, $arrCounts, $listMonster);
    }

    public function insertMonsterList(){
        $this->secured->validate();
        $nombre = $_REQUEST['nombre'];
        $debilidad = $_REQUEST['debilidad'];
        $descripcion = $_REQUEST['descripcion'];
        $id_Categoria_fk = $_REQUEST['categoria'];

        if($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" 
                    || $_FILES['imagen']['type'] == "image/png" ) {
            $imagen = $_FILES['imagen']['tmp_name'];
            $this->modelMonstruo->insertList($nombre, $debilidad, $descripcion, $id_Categoria_fk, $imagen);
        }
        else {
            $this->modelMonstruo->insertList($nombre, $debilidad, $descripcion, $id_Categoria_fk);
        }
        header("Location: " . BASE_URL); 
    }
    public function insertCategoriesList(){
        $this->secured->validate();
        $nombre = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];

        $this->modelCategoria->insertList($nombre, $descripcion);
        header("Location: " . BASE_URL . "categories"); 
    }
    
    public function getAddMonster(){
        $this->secured->validate();
        $list = $this->modelCategoria->getList();
        $this->view->showAdminAddMonster($list);
    }
    public function getAddCategorie(){
        $this->secured->validate();
        $this->view->showAdminAddCategorie();
    }

    public function deleteMonsterList($id){
        $this->secured->validate();
        $this->modelMonstruo->deleteList($id);
        header("Location: " . BASE_URL . "admin"); 
    }
    public function deleteCategoriesList($id){
        $this->secured->validate();
        $this->modelCategoria->deleteList($id);
        header("Location: " . BASE_URL . "admin"); 
    }

    public function getUpdateMonster($id){
        $this->secured->validate();
        $list = $this->modelCategoria->getList();
        $Monster = $this->modelMonstruo->inspectMonster($id);
        $this->view->showAdminUpdateMonster($Monster, $list);

    }
    public function getUpdateCategorie($id){
        $this->secured->validate();
        $Categorie = $this->modelCategoria->inspectCategorie($id);
        $this->view->showAdminUpdateCategorie($Categorie);
    }

    public function actualizaMonstruo($id){
        $this->secured->validate();
        $nombre = $_REQUEST['nombre'];
        $debilidad = $_REQUEST['debilidad'];
        $descripcion = $_REQUEST['descripcion'];
        $id_Categoria_fk = $_REQUEST['categoria'];

        $this->modelMonstruo->updateMonster($nombre, $debilidad, $descripcion, $id_Categoria_fk, $id);
        header("Location: " . BASE_URL); 
    }
    public function actualizaCategoria($id){
        $this->secured->validate();
        $nombre = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];

        $this->modelCategoria->updateCategorie($nombre, $descripcion, $id);
        header("Location: " . BASE_URL . "categories"); 
    }
}
?>