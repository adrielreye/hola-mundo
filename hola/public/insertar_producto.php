<?php
// Verificar si se recibió un ID de producto válido
if(isset($_POST['product_id'])) {
    // Obtener el ID del producto enviado desde la solicitud AJAX
    $productID = $_POST['product_id'];
    
    // Conectar a la base de datos (cambiar los valores según tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pcstore";
    
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    } 
    
    // Preparar la consulta para insertar el producto en la base de datos
    $sql = "INSERT INTO carritodecompras (id) VALUES ('$productID')";
    
    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Producto insertado correctamente en la base de datos.";
    } else {
        echo "Error al insertar el producto: " . $conn->error;
    }
    
    // Cerrar la conexión a la base de datos
    $conn->close();
} else {
    // Si no se recibe un ID de producto válido, mostrar un mensaje de error
    echo "Error: No se recibió un ID de producto válido.";
}
?>
