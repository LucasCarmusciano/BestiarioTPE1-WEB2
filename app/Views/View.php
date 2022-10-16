<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class View {
    private $smarty;
        function __construct(){
            $this->smarty = new Smarty();
        }


        public function showMonsterList($list){
            $this->smarty->assign('list',$list);
            $this->smarty->display('list.tpl');
        }
        public function showAdminList($listCategoria, $arrCounts, $listMonster){
            $this->smarty->assign('listCategoria',$listCategoria);
            $this->smarty->assign('listMonster',$listMonster);
            $this->smarty->assign('arrCounts', $arrCounts);
            $this->smarty->display('listAdmin.tpl');
        }

        public function showCategoriesList($listCategoria){
            $this->smarty->assign('listCategoria',$listCategoria);
            $this->smarty->display('listCategories.tpl');
        }

        public function showAdminAddMonster($categories){
            $this->smarty->assign('action','insertMonster');
            $this->smarty->assign('categories',$categories);
            $this->smarty->display('formMonster.tpl');
        }
        public function showAdminAddCategorie(){
            $this->smarty->assign('action','insertCategories');
            $this->smarty->display('formCategorie.tpl');
        }

        public function showAdminUpdateMonster($Monster, $categories){
            $this->smarty->assign('action','actualizaMonstruo');
            $this->smarty->assign('categories',$categories);
            $this->smarty->assign('Monster',$Monster);
            $this->smarty->display('formMonster.tpl');
        }
        public function showAdminUpdateCategorie($Categorie){
            $this->smarty->assign('action','actualizaCategoria');
            $this->smarty->assign('Categorie',$Categorie);
            $this->smarty->display('formCategorie.tpl');
        }

        public function showOneMonster($monster){
            $this->smarty->assign('Monster',$monster);
            $this->smarty->display('inspectedMonster.tpl');
        }
    }
?>