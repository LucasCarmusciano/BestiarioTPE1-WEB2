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
        public function showCategoriesList($listCategoria, $arrCounts){
            $this->smarty->assign('listCategoria',$listCategoria);
            $this->smarty->assign('arrCounts', $arrCounts);
            $this->smarty->display('listCategories.tpl');
        }

        public function showAdminAddMonster($categories){
            $this->smarty->assign('categories',$categories);
            $this->smarty->display('formMonster.tpl');
        }

        public function showAdminAddCategorie(){
            $this->smarty->display('formCategorie.tpl');
        }
    }
?>