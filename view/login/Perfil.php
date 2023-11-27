<?php
require_once "../../controller/loginController.php";

// Verificar si $_GET['id'] tiene un valor
if (isset($_GET['id'])) {
    $obj = new LoginController();
    $data = $obj->Perfil($_GET['id']);
} else {
    echo "ID no proporcionada.";
    exit; // Otra opción es redirigir a una página de error.
}
?>

<?php
if ($data !== null && $data["valido"]) {
    // Resto del código
} else {
    echo "<p>Error al cargar el perfil: {$data["mensaje"]}</p>";
}
?>












































<?php
/*session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuarioId'])) {
    // Redirigir a la página de inicio de sesión si el usuario no está autenticado
    header("Location: ../login/login.php");
    exit();
}

// Obtener la ID del usuario desde la sesión
$idUsuario = $_SESSION['usuarioId'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/CssCliente.css">
    <title>Perfil del Usuario</title>
    <!-- Agrega aquí tus estilos CSS si los tienes -->
</head>
<body>

    <header>
        <h1>Perfil de Usuario</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Configuración</a></li>
            <li><a href="../login/Cerrar_sesion.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
     
    <main>
        <section>
            <h2>ID de Usuario: <?php echo $idUsuario; ?></h2>
        </section>
    </main>

    <!-- Agrega aquí tus scripts JS si los tienes -->

</body>
</html>
*/?>