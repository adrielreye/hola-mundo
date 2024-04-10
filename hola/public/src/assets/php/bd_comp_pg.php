<?php
require 'conexion.php';

$database = new Database();
$conn = $database->getConnection();

// Recibir datos del formulario
$correo_electronico = $_POST['correo_electronico'];
$calle = $_POST['calle'];
$numero_exterior = $_POST['numero_exterior'];
$numero_interior = $_POST['numero_interior'];
$calles_colindantes = $_POST['calles_colindantes'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$colonia = $_POST['colonia'];
$telefono = $_POST['telefono'];
$detalles_adicionales = $_POST['detalles_adicionales'];

// Preparar la consulta SQL con parámetros
$sql = "INSERT INTO datosdireccionpago (correo_electronico, calle, numero_exterior, numero_interior, calles_colindantes, municipio, estado, colonia, telefono, detalles_adicionales) 
        VALUES (:correo_electronico, :calle, :numero_exterior, :numero_interior, :calles_colindantes, :municipio, :estado, :colonia, :telefono, :detalles_adicionales)";

// Preparar la declaración
$stmt = $conn->prepare($sql);

// Vincular los parámetros
$stmt->bindParam(':correo_electronico', $correo_electronico);
$stmt->bindParam(':calle', $calle);
$stmt->bindParam(':numero_exterior', $numero_exterior);
$stmt->bindParam(':numero_interior', $numero_interior);
$stmt->bindParam(':calles_colindantes', $calles_colindantes);
$stmt->bindParam(':municipio', $municipio);
$stmt->bindParam(':estado', $estado);
$stmt->bindParam(':colonia', $colonia);
$stmt->bindParam(':telefono', $telefono);
$stmt->bindParam(':detalles_adicionales', $detalles_adicionales);

// Ejecutar la consulta
if ($stmt->execute()) {
    // Muestra una ventana emergente utilizando JavaScript
    echo '<script>alert("Pago realizado correctamente.");</script>';
} else {
    echo "Error: " . $sql . "<br>" . $stmt->errorInfo()[2];
}

// Cerrar la conexión a la base de datos (opcional ya que PDO cierra automáticamente la conexión al finalizar el script)
//$conn = null;
?>
