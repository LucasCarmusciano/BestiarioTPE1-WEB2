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
    public function getAdminList(){
        $listCategoria = $this->modelCategoria->getList();
        $listMonster = $this->modelMonstruo->getList();
        $arrCounts = array();
        foreach ($listCategoria as $categoria) {
            $filterList = $this->modelMonstruo->getFilterList($categoria->nombre);
            $arrCounts[$categoria->id] = count($filterList);
        }
        $this->view->showAdminList($listCategoria, $arrCounts, $listMonster);
    }
    public function getCategoriesList(){
        $listCategoria = $this->modelCategoria->getList();
        $this->view->showCategoriesList($listCategoria);
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
    
    public function getAddMonster(){
        $list = $this->modelCategoria->getList();
        $this->view->showAdminAddMonster($list);
    }
    public function getAddCategorie(){
        $this->view->showAdminAddCategorie();
    }

    public function getFilterList($nombreCategoria){
        $FilterList = $this->modelMonstruo->getFilterList($nombreCategoria);
        $this->view->showMonsterList($FilterList);
    }

    public function deleteMonsterList($id){
        $this->modelMonstruo->deleteList($id);
        header("Location: " . BASE_URL_ADMIN); 
    }
    public function deleteCategoriesList($id){
        $this->modelCategoria->deleteList($id);
        header("Location: " . BASE_URL_ADMIN); 
    }

    public function getUpdateMonster($id){
        $list = $this->modelCategoria->getList();
        $Monster = $this->modelMonstruo->inspectMonster($id);
        $this->view->showAdminUpdateMonster($Monster, $list);

    }
    public function getUpdateCategorie($id){
        $Categorie = $this->modelCategoria->inspectCategorie($id);
        $this->view->showAdminUpdateCategorie($Categorie);
    }

    public function inspectMonster($id){
        $Monster = $this->modelMonstruo->inspectMonster($id);
        $this->view->showMonsterList($Monster);

    }
    public function inspectCategorie($id){
        $Categorie = $this->modelCategoria->inspectCategorie($id);
        $this->view->showMonsterList($Categorie);
    }

    public function actualizaMonstruo($id){
        $nombre = $_REQUEST['nombre'];
        $debilidad = $_REQUEST['debilidad'];
        $descripcion = $_REQUEST['descripcion'];
        $id_Categoria_fk = $_REQUEST['categoria'];

        $this->modelMonstruo->updateMonster($nombre, $debilidad, $descripcion, $id_Categoria_fk, $id);
        header("Location: " . BASE_URL); 
    }
    public function actualizaCategoria($id){
        $nombre = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];

        $this->modelCategoria->updateCategorie($nombre, $descripcion, $id);
        header("Location: " . BASE_URL_CAT); 
    }
}
?>