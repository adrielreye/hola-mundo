<?php
// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $correoElectronico = $_POST["correo"];
    $contraseña = $_POST["pass"];
    
    // Validar los datos del formulario (puedes agregar más validaciones según tus necesidades)
    if (empty($correoElectronico) || empty($contraseña)) {
        $error = "Por favor, complete todos los campos.";
    } else {
        try {
            // Realizar la conexión a la base de datos (asumiendo que ya tienes una clase para manejar la conexión)
            require_once 'conexion.php';
            $database = new Database();
            $conn = $database->getConnection();
            
            // Consulta SQL para verificar el inicio de sesión
            $query = "SELECT ID, Nombre FROM usuario WHERE CorreoElectronico = ? AND Contraseña = ?";
            $statement = $conn->prepare($query);
            $statement->execute([$correoElectronico, $contraseña]);

            // Verificar si se encontró un usuario con las credenciales proporcionadas
            if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                // Iniciar sesión
                session_start();
                $_SESSION["id"] = $row["ID"];
                $_SESSION["nombre"] = $row["Nombre"];
                
                // Redireccionar dependiendo del tipo de usuario
                if ($correoElectronico === 'juan@admin.com' && $contraseña === 'contraseña1') {
                    header("Location: ./../../../adminindex.html");
                } else {
                    header("Location: ./../../../index.html");
                }
                exit();
            } else {
                $error = "Correo electrónico o contraseña incorrectos.";
            }
        } catch (PDOException $e) {
            // Si ocurre un error de PDO, imprime la información del error
            echo "Error de PDO: " . $e->getMessage();
        }
    }
}
?>
