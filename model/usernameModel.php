<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($rut, $nombre, $apellido, $direccion){
            $stament = $this->PDO->prepare("INSERT INTO persona VALUES(null, :rut, :nombre, :apellido, :direccion)");
            $stament->bindParam(":rut",$rut);
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":apellido",$apellido);
            $stament->bindParam(":direccion",$direccion);
            
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }
        
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM persona where id = :id") ;
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function Listado(){
            $stament = $this->PDO->prepare("SELECT * FROM persona");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function actulizar($id, $rut, $nombre, $apellido, $direccion){
            $stament = $this->PDO->prepare("UPDATE persona SET rut = :rut,
                                                                nombre = :nombre, 
                                                                apellido = :apellido, 
                                                                direccion = :direccion 
                                                                WHERE id = :id");
            $stament->bindParam(":rut", $rut, PDO::PARAM_STR);
            $stament->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $stament->bindParam(":apellido", $apellido, PDO::PARAM_STR);
            $stament->bindParam(":direccion", $direccion, PDO::PARAM_STR);
            $stament->bindParam(":id", $id, PDO::PARAM_INT);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM persona WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

    

?>