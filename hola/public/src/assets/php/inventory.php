<?php
require 'conexion.php'; // Reemplaza 'ruta/a/tu/conexion.php' con la ruta correcta a tu archivo de conexión

// Crear una instancia de la clase Database
$database = new Database();
$conn = $database->getConnection();

// Consulta para obtener los productos
$sql = "SELECT * FROM producto";
$result = $conn->query($sql);

$productos = array();

if ($result->rowCount() > 0) {
    // Recorrer los resultados y guardarlos en un array
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $productos[] = $row;
    }
} else {
    echo "No se encontraron productos.";
}

// Convertir el array a formato JSON y enviarlo
echo json_encode($productos);

// Cerrar la conexión
$conn = null;
?>
