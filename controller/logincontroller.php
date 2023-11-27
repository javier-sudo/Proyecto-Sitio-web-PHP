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
                header("Location: ../cliente/PaginaPrincipal.php");
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

            // Concatenar el nombre de usuario al nombre de la foto
            $fotoFileName = $usuario . '_' . $fotoFileName;

            $fotoUploadPath = "../uploads/" . $fotoFileName;

            move_uploaded_file($fotoTempPath, $fotoUploadPath);
        }

        // Realizar validaciones antes de intentar el registro
        if (empty($nombre) || empty($apellido) || empty($usuario) || empty($contrasena) || empty($estado) || empty($intentos) || empty($fotoFileName)) {
            echo "<p>Error: Por favor, complete todos los campos.</p>";
            return;  // Detener la ejecución si hay errores
        }

        // Continuar con el registro
        $loginModel = new LoginModel();
        $mensaje = $loginModel->agregarCuenta($nombre, $apellido, $usuario, $contrasena, $estado, $intentos, $fotoFileName);

        // Manejar el mensaje de la función agregarCuenta
        echo "<p>$mensaje</p>";
        header("Location: ../view/login/login.php");  // Agregar punto y coma aquí
    }
}




    public function Perfil($idUsuario) {
        $loginModel = new LoginModel();
        $perfil = $loginModel->Perfil($idUsuario);

        return $perfil;
    }




public function cerrarSesion() {
    session_start();
    session_destroy(); // Cierra la sesión

    // Redirige a la página de inicio de sesión u otra página según tu estructura
    header("Location: login.php");
    exit();
}
}

$loginController = new LoginController();

if (isset($_GET['cerrar_sesion'])) {
$loginController->cerrarSesion();
}


$loginController = new LoginController();

if (isset($_POST['login-submit'])) {
    $loginController->validarDatos();
} elseif (isset($_POST['register-submit'])) {
    $loginController->agregarCuenta();
}


?>
