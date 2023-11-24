<?php
// Asegúrate de incluir LoginModel antes de usarlo
require_once __DIR__ . '/../model/LoginModel.php';
    class LoginController {


        
        public function validarDatos() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $usuario = $_POST["usu"];
                $contrasena = $_POST["pass"];
    
                // Crear una instancia del modelo
                $loginModel = new LoginModel();
    
                // Validar datos
                $resultado = $loginModel->validarDatos($usuario, $contrasena);
    
                // Manejar el resultado
                if ($resultado['valido']) {
                    echo "<p>Datos correctos. ¡Bienvenido!</p>";
                    // Puedes redirigir aquí si es necesario
                } else {
                    echo "<p>{$resultado['mensaje']}</p>";
                }
            }
        }
    
        // ...
    
    
/*
    public function cerrarSesion() {
        // Iniciar sesión si no está iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Destruir la sesión
        session_destroy();

        // Redirigir a la página de inicio de sesión
        header("Location: ../view/login.php");
        exit();
    }
*/
    public function agregarCuenta() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $usuario = $_POST["usu"];
            $contrasena = $_POST["pass"];
            $estado = $_POST["estado"];
            $intentos = $_POST["intentos"];

            // Verificar si se cargó una imagen
            if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
                $foto = file_get_contents($_FILES['foto']['tmp_name']);
            } else {
                // Manejar el caso en que no se cargó una imagen
                $foto = null;
            }

            // Crear una instancia del modelo
            $loginModel = new LoginModel();

            // Agregar cuenta
            $mensaje = $loginModel->agregarCuenta($nombre, $apellido, $usuario, $contrasena, $estado, $intentos, $foto);
            echo "<p>$mensaje</p>";
        }
    }
}

$loginController = new LoginController();

// Validar credenciales o agregar cuenta según la acción del formulario
if (isset($_POST['login-submit'])) {
    $loginController->validarDatos();
} elseif (isset($_POST['register-submit'])) {
    $loginController->agregarCuenta();
}
?>
