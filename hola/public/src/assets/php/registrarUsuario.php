<?php
// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST["nombre"];
    $apellidoPaterno = $_POST["apeP"];
    $apellidoMaterno = $_POST["apeM"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contra"];
    $confirmarContrasena = $_POST["vContra"];

    // Validar los datos del formulario y contraseñas
    if (empty($nombre) || empty($apellidoPaterno) || empty($apellidoMaterno) || empty($correo) || empty($contrasena) || empty($confirmarContrasena)) {
        $error = "Por favor, complete todos los campos.";
    } elseif ($contrasena != $confirmarContrasena) {
        $error = "Las contraseñas no coinciden.";
    } else {
        try {
            // Realizar la conexión a la base de datos
            require_once 'conexion.php';
            $database = new Database();
            $conn = $database->getConnection();
            
            // Consulta SQL para insertar usuario
            $query = "INSERT INTO usuario (Nombre, ApellidoPaterno, ApellidoMaterno, CorreoElectronico, Contraseña) VALUES (:nombre, :apellidoPaterno, :apellidoMaterno, :correoElectronico, :contrasena)";
            $statement = $conn->prepare($query);
            $statement->bindParam(":nombre", $nombre);
            $statement->bindParam(":apellidoPaterno", $apellidoPaterno);
            $statement->bindParam(":apellidoMaterno", $apellidoMaterno);
            $statement->bindParam(":correoElectronico", $correo);
            $statement->bindParam(":contrasena", $contrasena);
            $statement->execute();

            // Redireccionar a una página de éxito o mostrar un mensaje de éxito aquí mismo
            header("Location: ../../../index.html")

            exit();
        } catch (PDOException $e) {
            // Si ocurre un error de PDO, imprime la información del error
            echo "Error de PDO: " . $e->getMessage();
        }
    }
}