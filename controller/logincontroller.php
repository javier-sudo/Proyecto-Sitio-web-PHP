<?php
require_once __DIR__ . '/../model/LoginModel.php';

class LoginController {
    public function validarDatos() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST["usu"];
            $contrasena = $_POST["pass"];

            $loginModel = new LoginModel();

            $resultado = $loginModel->validarDatos($usuario, $contrasena);

            if ($resultado['valido']) {
                echo "<p>Datos correctos. ¡Bienvenido!</p>";
            } else {
                echo "<p>{$resultado['mensaje']}</p>";
            }
        }
    }

    public function agregarCuenta() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $usuario = $_POST["usu"];
            $contrasena = $_POST["pass"];
            $estado = $_POST["estado"];
            $intentos = $_POST["intentos"];

            $fotoFileName = '';

            // Verificar si se cargó una imagen
            if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
                $fotoTempPath = $_FILES['foto']['tmp_name'];
                $fotoFileName = $_FILES['foto']['name'];
                $fotoUploadPath = "tu_directorio_de_imagenes/" . $fotoFileName;

                move_uploaded_file($fotoTempPath, $fotoUploadPath);
            }

            $loginModel = new LoginModel();

            $mensaje = $loginModel->agregarCuenta($nombre, $apellido, $usuario, $contrasena, $estado, $intentos, $fotoFileName);
            echo "<p>$mensaje</p>";
        }
    }
}

$loginController = new LoginController();

if (isset($_POST['login-submit'])) {
    $loginController->validarDatos();
} elseif (isset($_POST['register-submit'])) {
    $loginController->agregarCuenta();
}
?>