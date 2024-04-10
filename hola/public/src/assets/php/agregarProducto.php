<?php
require 'conexion.php';

$cod_p = $_POST['codigo_p'];
$mod = $_POST['modelo_p'];
$nombre = $_POST['nombre_p'];
$desc = $_POST['descripcion_p'];
$marca = $_POST['marca_p'];
$cantidad = $_POST['cantidad_p'];
$precio = $_POST['precio_p'];
$genero = $_POST['genero_p'];

$database = new Database();
$conn = $database->getConnection();

// Consulta para insertar datos en la tabla producto
$sql = "INSERT INTO producto (CodigoProducto, Modelo, Nombre, Descripcion, Marca, 
Cantidad, Precio, Genero)
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo "Error al preparar la consulta: " . $conn->errorInfo()[2];
    exit;
}

// Vincular los valores a los marcadores de posición
$stmt->bindParam(1, $cod_p);
$stmt->bindParam(2, $mod);
$stmt->bindParam(3, $nombre);
$stmt->bindParam(4, $desc);
$stmt->bindParam(5, $marca);
$stmt->bindParam(6, $cantidad);
$stmt->bindParam(7, $precio);
$stmt->bindParam(8, $genero);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Datos insertados correctamente";
    header("Location: ../../../adminindex.html");
    exit;
} else {
    echo "Error al insertar datos: " . $stmt->errorInfo()[2];
}


// Cerrar conexión
//$conn->close();

?>