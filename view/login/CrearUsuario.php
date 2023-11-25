<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/CssLogin.css"> <!-- Agregamos el archivo CSS externo -->
    <title>Registro de Usuario con Foto</title>
</head>
<body>

    <h1>Registro de Usuario con Foto</h1>

    <form action="../../controller/logincontroller.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" required>
        </div>

        <div class="form-group">
            <label for="usu">Usuario:</label>
            <input type="text" name="usu" required>
        </div>

        <div class="form-group">
            <label for="pass">Contraseña:</label>
            <input type="password" name="pass" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" name="estado" required>
        </div>

        <div class="form-group">
            <label for="intentos">Intentos:</label>
            <input type="text" name="intentos" required>
        </div>

        <div class="form-group">
            <label for="foto">Foto de perfil:</label>
            <input type="file" name="foto" accept="image/*">
        </div>

        <button type="submit" name="register-submit">Registrarse</button>
    </form>

</body>
</html>
