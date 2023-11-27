<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuarioId'])) {
    // Redirigir a la página de inicio de sesión si el usuario no está autenticado
    header("Location: ../login/login.php");
    exit();
}

// Obtener información del usuario desde la sesión
$nombreUsuario = $_SESSION['usuarioNombre'];
$idUsuario = $_SESSION['usuarioId']; // Obtener la ID de usuario desde la sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/CssCliente.css">
    <title>Menú Principal</title>
    <!-- Agrega aquí tus estilos CSS si los tienes -->
</head>
<body>

    <header>
        <h1>Bienvenido, <?php echo $nombreUsuario; ?>.</h1>
    </header>

    <nav>
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="../login/Perfil.php?id=<?php echo $idUsuario; ?>">Perfil</a></li>
        <li><a href="#">Configuración</a></li>
        <li><a href="../login/Cerrar_sesion.php">Cerrar Sesión</a></li>
    </ul>

    </nav>
     
    <div id="info-sesion">
        <p id="estado-sesion">Estado de Sesión: <?php echo isset($_SESSION['usuarioId']) ? 'Conectado' : 'Desconectado'; ?></p>
        <!-- Mostrar la ID del usuario -->
        <p id="id-usuario">ID de Usuario: <?php echo $idUsuario; ?></p>
    </div>

    <main>
        <section>
            <h2>Contenido Principal</h2>
            <p>Aquí puedes colocar más contenido principal de tu página después de iniciar sesión.</p>
        </section>

        <!-- Otro contenido principal de la página -->
    </main>

    <!-- Agrega aquí tus scripts JS si los tienes -->

</body>
</html>
