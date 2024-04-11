<?php
// updateProduct.php
require 'conexion.php';

// Verificar si se ha proporcionado el ID del producto
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID de producto no proporcionado";
    exit;
}

// Obtener el ID del producto desde la URL
$id = $_GET['id'];

$database = new Database();
$conn = $database->getConnection();

// Consulta para obtener los datos del producto
$sql = "SELECT Nombre, CodigoProducto, Modelo, Marca, Descripcion, Cantidad, Precio FROM producto WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $id);
$stmt->execute();
$producto = $stmt->fetch(PDO::FETCH_ASSOC);

// Verificar si se encontró el producto
if (!$producto) {
    echo "Producto no encontrado";
    exit;
}

// Asignar los valores del producto a variables individuales
$nombre = $producto['Nombre'];
$cod_p = $producto['CodigoProducto'];
$mod = $producto['Modelo'];
$desc = $producto['Descripcion'];
$marca = $producto['Marca'];
$cantidad = $producto['Cantidad'];
$precio = $producto['Precio'];
?>

