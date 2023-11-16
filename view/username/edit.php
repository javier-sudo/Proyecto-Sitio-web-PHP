<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $user = $obj->show($_GET['id']);
?>
<form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputRut" class="col-sm-2 col-form-label">Nuevo Rut</label>
        <div class="col-sm-10">
            <input type="text" name="rut" class="form-control" id="inputRut" value="<?= $user[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputNombre" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputNombre" value="<?= $user[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputApellido" class="col-sm-2 col-form-label">Nuevo Apellido</label>
        <div class="col-sm-10">
            <input type="text" name="apellido" class="form-control" id="inputApellido" value="<?= $user[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputDireccion" class="col-sm-2 col-form-label">Nueva Dirección</label>
        <div class="col-sm-10">
            <input type="text" name="direccion" class="form-control" id="inputDireccion" value="<?= $user[4]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
</form>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
