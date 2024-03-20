<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
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

        .custom-search-width {
            width: 900px;
            /* Cambia el valor según tus necesidades */
        }

        .custom-margin {
            margin-left: 70px;
            /* ajusta el valor según tus necesidades */
            margin-right: 10px;
            /* ajusta el valor según tus necesidades */
        }
    </style>
    <div class="container-fluid resaltar-borde-container mt-4 ml-3">
    <div class="">

    </div>
    <div class="row resaltar-borde">
                <div class="col-1 mr-3">
                    <p style=" font-size: 30px; color: whitesmoke;" class="mt-3 mb-2 ml-3 mr-3">
                        Registro
                    </p>
                </div>


                <div class="col-5">
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-2 mx-2">
                            <button style="color: whitesmoke; font-size: 25px; background-color: black;"
                                class="btn mt-3 mb-3 ml-3 btn-outline-secondary">Registro</button>
                        </div>

                        <div class="col-2 mx-3">
                            <button style="color: black; font-size: 25px; background-color: whitesmoke;"
                                class="btn mt-3 mb-3 ml-3">Tienda</button>
                        </div>
                        <div class="col-2">
                            <button style="color: whitesmoke; font-size: 25px; background-color: rgb(177, 9, 9);"
                                class="btn mt-3 mb-3">Ingresar</button>
                        </div>
                        <div class="col-2">
                            <button style="color: whitesmoke; font-size: 25px; background-color: rgb(177, 9, 9);"
                                class="btn mt-3 mb-3 mx-5">Catálogo</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</body>
</html>