<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $rows = $obj->index();
?>
<div class="mb-3">
    <a href="/proyecto/view/username/create.php" class="btn btn-primary">Agregar nuevo usuario</a>
    <a href="TablaRegistrados.php" class="btn btn-link">Volver</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Rut</th>
            <th scope="col">Apellido</th>
            <th scope="col">Direciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th><?= $row[2] ?></th>
                    <th><?= $row[3] ?></th>
                    <th><?= $row[4] ?></th>
                    
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<script>
function confirmDelete(id) {
    if (confirm('¿Desea eliminar el registro?')) {
        window.location.href = 'delete.php?id=' + id;
    }
}
</script>

<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
