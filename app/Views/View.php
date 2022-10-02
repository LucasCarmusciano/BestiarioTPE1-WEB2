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
        public function showCategoriesList($list){
            $this->smarty->assign('list',$list);
            $this->smarty->display('listCategories.tpl');
        }

        public function showAdminForm(){
            $this->smarty->display('form.tpl');
        }
    }
?>