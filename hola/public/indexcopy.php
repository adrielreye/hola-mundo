<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../src/img/logo.ico.ico" type="image/x-icon">

</head>

<body style="background-color: black;">
    <style>
        .resaltar-borde-container {
            border: 4px solid white;
            /* Establecer un borde sólido de 4 píxeles con color blanco */
            padding: 15px;
            /* Agregar relleno opcional para separar el contenido del borde */
        }

        .resaltar-borde {
            border: 3px solid white;
        }
    </style>
    <div class="container resaltar-borde-container mt-5 pb-5">
        <div class="row resaltar-borde mt">
            <div class="col-5">
                <p style=" font-size: 25px; color: whitesmoke;" class="mt-4">
                    Entrar a tu cuenta
                </p>
                <!-- <button style="color: whitesmoke; font-size: 25px; background-color: black;" class="btn mt-3 mb-3 ml-2">Entrar a tu cuenta</button> -->
            </div>
            <div class="col-2">
                <!-- <p style="color: whitesmoke; font-size: 25px;">
                    Tienda
                </p> -->

                <button style="color: whitesmoke; font-size: 25px; background-color: black;" class="btn mt-3 mb-3"
                    onclick="window.location.href = 'Principal.html';">Principal</button>
            </div>
            <div class="col-3">
                <!-- <span style="background-color: white; color: black; font-size: 25px;">
                    Entrar/Registro
                </span> -->
                <button style="color: black; font-size: 25px; background-color: whitesmoke;" class="btn mt-3 mb-3"
                    onclick="window.location.href = 'registro.html';">Registrarse</button>
            </div>
            <div class="col-2">
                <!-- <span style="background-color:  rgb(177, 9, 9); color: black; font-size: 25px;">
                    Ofertas
                </span> -->
                <button style="color: whitesmoke; font-size: 25px; background-color: rgb(177, 9, 9);"
                    class="btn mt-3 mb-3">Catálogo</button>
            </div>
        </div>

        <div class="row">
            <div class="col-7 mt-5 mb-5">
                <p
                    style="font-size: 65px; color: white; text-align: center; font-family:'Times New Roman', Times, serif;">
                    INICIA SESIÓN <br>
                    PARA VISITAR <br>
                    DE NUEVO TU ESTILO <br>
                </p>
            </div>
            <div class="col-5" style="align-self: center;">
                <form action="./src/assets/php/iniciar_sesion.php" method="post">
                    
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                            name="correo">
                        <label for="floatingInput">Correo electrónico</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            name="pass">
                        <label for="floatingPassword">Contraseña</label><br>
                    </div>
                    <p style="font-size: 15px;">
                        <a href="Olvidarcontra.html" style="color: aqua;">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </p>
                    <button name="ingresar" type="submit" class="btn btn-success" >Ingresar</button>
                    <button type="button" class="btn btn-secondary">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>