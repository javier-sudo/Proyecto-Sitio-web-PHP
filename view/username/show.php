<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $date = $obj->show($_GET['id']);
?>

<h2 class="text-center">Detalles del registro</h2>

<div class="pb-3">
    <a href="TablaRegistrados.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Rut</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Dirección</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id"]?></td>
            <td scope="col"><?= $date["rut"]?></td>
            <td scope="col"><?= $date["nombre"]?></td>
            <td scope="col"><?= $date["apellido"]?></td>
            <td scope="col"><?= $date["direccion"]?></td>
        </tr>
    </tbody>
</table>

<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
