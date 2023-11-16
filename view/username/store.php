<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rut = $_POST['rut'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];

        $obj = new usernameController();
        $id = $obj->guardar($rut, $nombre, $apellido, $direccion);

        if ($id !== false) {
            header("Location: show.php?id=" . $id);
        } else {
            header("Location: create.php");
        }
    } else {
        // Manejar el caso en que no se haya enviado un formulario POST
        echo "No se ha enviado un formulario POST.";
    }
?>