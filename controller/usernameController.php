<?php
    class usernameController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/usernameModel.php");
            $this->model = new usernameModel();
        }
        public function guardar($rut, $nombre, $apellido, $direccion) {
            $id = $this->model->insertar($rut, $nombre, $apellido, $direccion);
            return ($id !== false) ? header("Location: show.php?id=" . $id) : header("Location: create.php");
        }
        
        public function show($id){
            $data = $this->model->show($id);
            
            if ($data !== false) {
                return $data;
            } else {
                header("Location:index.php");
                exit(); // Asegura que el script se detenga después de redirigir
            }
        }
        public function index(){
            return ($this->model->Listado()) ? $this->model->Listado() : false;
        }
        public function actulizar($id, $rut,$nombre ,$apellido, $direccion ){
            return ($this->model->actulizar($id,$rut,$nombre,$apellido,$direccion) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:show.php") : header("Location:show.php?id=".$id) ;
        }
        
    }

?>