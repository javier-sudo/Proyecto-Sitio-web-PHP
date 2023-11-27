<?php
session_start();
session_destroy(); // Cierra la sesión

// Redirige a la página de inicio de sesión u otra página según tu estructura
header("Location: login.php");
exit();
?>