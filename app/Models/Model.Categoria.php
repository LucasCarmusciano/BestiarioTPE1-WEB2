<?php 
    class ModelCategoria {
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=Bestiario_TPE-Web2;charset=utf8', 'root', '');
        }

        public function getList(){
            $query = $this->db->prepare('SELECT * FROM Categoria');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        
        public function insertList($nombre, $descripcion){
            $query = $this->db->prepare('INSERT INTO Categoria(nombre, descripcion) VALUES (?, ?)');
            $query->execute([$nombre, $descripcion]);
        }
        
        public function deleteList($id){
            $query = $this->db->prepare('DELETE FROM Categoria where id= (?) ');
            $query->execute([$id]);
        }
    }
?>