<?php
require 'conexion.php';

// Iniciar sesión si no se ha iniciado
session_start();
echo "El archivo de cierre de sesión se ha ejecutado correctamente.";

// Eliminar todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio de sesión, por ejemplo
header("Location: ../../../iniciar_sesion.html");
exit;
// Cerrar la consulta y la conexión
$stmt->close();
$conn->close();
?>