<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/CssLogin.css">
    <title>Iniciar Sesión</title>
</head>
<body>

<div class="login-container">
    <?php
    require_once "../../controller/loginController.php";
    // Mostrar mensajes de éxito o error
    if (isset($resultadoMensaje)) {
        echo "<p>$resultadoMensaje</p>";
    }
    ?>
    <form action="" method="post"> <!-- Modificamos la acción del formulario -->
        <h2>Iniciar Sesión</h2>
        <label for="usu">Usuario:</label>
        <input type="text" name="usu" required>

        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" required>

        <button type="submit" name="login-submit">Iniciar Sesión</button>
    </form>

    <div class="extra-options">
        <a href="CrearUsuario.php">Crear cuenta</a>
        <a href="../../index.php">Volver al inicio</a>
    </div>
</div>

</body>
</html>
