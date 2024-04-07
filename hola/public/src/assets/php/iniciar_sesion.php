<?php
    session_start();

    include('conexion.php');
    
    if (isset($_POST['correo']) && isset($_POST['pass'])) {
    
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        $correo = validate($_POST['correo']);
        $pass = validate($_POST['pass']);
    
        if (empty($correo)) {
            header("Location: indexcopy.php?error=El correo es requerido");
            exit();
        } else if (empty($pass)) {
            header("Location: indexcopy.php?error=La contraseña es requerida");
            exit();
        } else {
            $pass = md5($pass); // Si la contraseña está encriptada en MD5 en la base de datos, si no, elimina esta línea
    
            // Consulta SQL para buscar el usuario en la base de datos
            $sql = "SELECT * FROM usuarios WHERE correo_electronico = '$correo' AND contrasena = '$pass'";
            $result = mysqli_query($conexion, $sql);
    
            if ($result) {
                if (mysqli_num_rows($result) === 1) {
                    // Inicio de sesión exitoso
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['correo'] = $row['correo_electronico']; // Guardar el correo en la sesión
                    $_SESSION['id'] = $row['id']; // Guardar el ID de usuario en la sesión u otros datos que necesites
                    header("Location: ../../../Principalcopy.php"); // Redirigir a la página principal
                    exit();
                } else {
                    // Si no se encuentra un usuario con las credenciales proporcionadas
                    header("Location: ../../../indexcopy.php?error=Correo o contraseña incorrectos");
                    exit();
                }
            } else {
                // Error en la consulta SQL
                header("Location: ../../../indexcopy.php?error=Error al intentar iniciar sesión");
                exit();
            }
        }
    } else {
        // Si se intenta acceder a este script sin enviar el formulario de inicio de sesión
        header("Location: ../../../indexcopy.php");
        exit();
    }
    ?>