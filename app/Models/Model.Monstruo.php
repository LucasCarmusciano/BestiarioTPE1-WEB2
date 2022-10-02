<?php 
    class ModelMonstruo {
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=Bestiario_TPE-Web2;charset=utf8', 'root', '');
        }

        public function getList(){
            $query = $this->db->prepare('SELECT Monstruo.nombre, Monstruo.debilidad, Monstruo.descripcion, Categoria.nombre as nombre2
                                         FROM Monstruo
                                         INNER JOIN Categoria ON (Monstruo.id_Categoria_fk=Categoria.id)');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        
        public function insertList($nombre, $debilidad, $descripcion, $id_Categoria_fk){
            $query = $this->db->prepare('INSERT INTO Monstruo(nombre,debilidad, descripcion, id_Categoria_fk) VALUES (?,?,?,?)');
            $query->execute([$nombre, $debilidad, $descripcion, $id_Categoria_fk]);
        }
        
        public function deleteList($id){
            $query = $this->db->prepare('DELETE FROM Monstruo where id= (?) ');
            $query->execute([$id]);
        }
        
        public function getFilterList($id_Categoria_fk){
            $query = $this->db->prepare('SELECT * FROM Monstruo WHERE id_Categoria_fk ='.$$id_Categoria_fk);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>