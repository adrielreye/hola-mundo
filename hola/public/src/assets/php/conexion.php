<?php
// Datos de conexión a la base de datos
$hostname = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "pcstore";

// Conexión a la base de datos
$conexion = new mysqli($hostname, $usuario, $contrasena, $basedatos);

// Verifica si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
}
?>