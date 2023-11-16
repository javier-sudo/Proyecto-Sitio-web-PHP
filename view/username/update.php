<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->actulizar($_POST['id'],$_POST['rut'],$_POST['nombre'],$_POST['apellido'],$_POST['direccion']);

?>