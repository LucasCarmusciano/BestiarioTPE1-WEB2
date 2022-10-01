<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class MonstruoView {
    private $smarty;
        function __construct(){
            $this->smarty = new Smarty();
        }


        public function showList($list){
            $this->smarty->assign('list',$list);
            $this->smarty->display('list.tpl');
        }

        public function showAdminForm(){
            $this->smarty->display('form.tpl');
        }
    }
?>