<?php
require 'conexion.php';

$db = new Database();
$con = $db->getConnection();

$marca = $_GET['marca'];

$sql = $con->prepare("SELECT ID, Nombre, Precio FROM producto WHERE Marca = ?;");
$sql->execute([$marca]);
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

// Convertir los resultados a formato JSON
$json_resultado = json_encode($resultado);

// Devolver los datos en formato JSON
echo $json_resultado;
?> 
