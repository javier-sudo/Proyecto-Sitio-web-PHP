<?php
require_once __DIR__ . '/../config/db.php';

class LoginModel {
    public function validarDatos($usuario, $contrasena) {
        try {
            if (empty($usuario) || empty($contrasena)) {
                return ["valido" => false, "mensaje" => "Por favor, complete todos los campos."];
            }

            $db = new db();
            $pdo = $db->conexion();

            $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND password = :contrasena";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':contrasena', $contrasena, PDO::PARAM_STR);
            $stmt->execute();

            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            // ... (resto del código)

            if ($resultado) {
                // Iniciar sesión y guardar información del usuario
                session_start();
                $_SESSION['usuarioId'] = $resultado['id_usuario'];
                $_SESSION['usuarioNombre'] = $resultado['nombre1'];
                
                return ["valido" => true, "usuarioId" => $resultado['id_usuario']];
            } else {
                return ["valido" => false, "mensaje" => "Usuario o contraseña incorrectos."];
            }

// ... (resto del código)

        } catch (PDOException $e) {
            return ["valido" => false, "mensaje" => "Error al intentar iniciar sesión."];
        }
    }

    public function agregarCuenta($nombre, $apellido, $usuario, $contrasena, $estado, $intentos, $foto) {
        try {
            $db = new db();
            $pdo = $db->conexion();

            // Leer el contenido del archivo de imagen
            $fotoUploadPath = __DIR__ . "/../uploads/" . $foto;
            $fotoContent = file_get_contents($fotoUploadPath);

            $sql = "INSERT INTO usuarios (nombre1, apellido1, usuario, password, estado, intentos, foto) VALUES (:nombre, :apellido, :usuario, :contrasena, :estado, :intentos, :foto)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':contrasena', $contrasena);
            $stmt->bindParam(':estado', $estado);
            $stmt->bindParam(':intentos', $intentos);
            $stmt->bindParam(':foto', $fotoContent, PDO::PARAM_LOB);
            $stmt->execute();

            // Verificar si la inserción fue exitosa
            if ($stmt->rowCount() > 0) {
                return "Usuario registrado correctamente.";
            } else {
                return "Error al registrar usuario.";
            }
        } catch (PDOException $e) {
            // Manejo de excepciones
            return "Error: " . $e->getMessage();
        }
    }

    

        public function Perfil ($id){
       
                $db = new db();
                $pdo = $db->conexion();
                $sql = "SELECT * FROM usuarios WHERE id_usuario = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
            }


        }
    




?>
