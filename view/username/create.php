<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <div>
        <label for="Rut" class="form-label">Rut</label>
        <input type="text" id="rut" name="rut" placeholder="Ingrese su RUT" required>
        </div>
    <div>
        <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
        <input type="text" name="nombre"  id="exampleInputEmail1" placeholder="Ingrese su Nombre">
        </div>
    <div>
        <label for="Apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" placeholder="Ingrese su Apellido">

        </div>
        <div>
        <label for="Direccion">Direccion</label>
        <input type="text" id="direccion" name="direccion" placeholder="Ingrese su Direccion">
        </div>

    
    
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>