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
        <div class="row resaltar-borde">
            <div class="col-1 mr-3">
                <p style=" font-size: 30px; color: whitesmoke;" class="mt-3 mb-2 ml-3 mr-3">
                    Bienvenido
                </p>
            </div>
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-1">
                        <button style="color: whitesmoke; font-size: 20px; background-color: black;"
                            class="btn mt-3 mb-3 ml-3 btn-outline-secondary">Tienda</button>
                    </div>
                    <div class="col-1">
                        <button style="color: black; font-size: 20px; background-color: whitesmoke;"
                            class="btn mt-3 mb-3 ml-3">Casual</button>
                    </div>
                    <div class="col-1">
                        <button style="color: whitesmoke; font-size: 20px; background-color: rgb(177, 9, 9);"
                            class="btn mt-3 mb-3">Deportivos</button>
                    </div>
                    <div class="col-1">
                        <button style="color: whitesmoke; font-size: 20px; background-color: rgb(177, 9, 9);"
                            class="btn mt-3 mb-3 mx-5">Sneakers</button>
                    </div>
                    <div class="col-1">
                        <button style="color: whitesmoke; font-size: 20px; background-color: rgb(177, 9, 9);"
                            class="btn mt-3 mb-3 custom-margin">Recomendaciones</button>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3">
                        <nav class="navbar mt-2 mx-5">
                            <div class="container-fluid">
                                <form class="d-flex w-100" role="search">
                                    <input class="form-control me-2 custom-search-width" type="search"
                                        placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <div class="col-1">
                        <button class="btn mx-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-bag-fill mt-3" viewBox="0 0 16 16" style="fill: white;">
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z" />
                            </svg>
                        </button>
                    </div>
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle mt-4" viewBox="0 0 16 16" style="fill: white;">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                          </svg>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="row">


                </div>
            </div>


        </div>

        <div class="row mt-5 mb-5">
            <div class="col-7 mt-5 mb-5">
                <p
                    style="font-size: 65px; color: white; text-align: center; font-family:'Times New Roman', Times, serif;">
                    "EL ESTILO <br>
                    ES LA ROPA DE <br>
                    TU PERSONALIDAD" <br>
                </p>
            </div>
            <div class="col-5" style="align-self: center;">
                <!-- <img src="src/assets/img/paposP.jpg" alt="Nike Air Force 1" class="img-fluid" width="400" height="420"> -->
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel"
                    data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="src/assets/img/paposP.jpg" class="d-block w-100" alt="..." style="height: 400px;">
                        </div>
                        <div class="carousel-item">
                            <img src="src/assets/img/nike_air_max_infinty.jpg" class="d-block w-100" alt="..."
                                style="height: 400px;">
                        </div>
                        <div class="carousel-item">
                            <img src="src/assets/img/nike_precision.jpg" class="d-block w-100" alt="..."
                                style="height: 400px;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row resaltar-borde">
            <div class="col-2">
                <button style="color: whitesmoke; font-size: 25px; background-color: rgb(64, 69, 72);"
                    class="btn mt-3 mb-3 btn-secondary">Converse</button>
            </div>
            <div class="col-2">
                <button style="color: whitesmoke; font-size: 25px; background-color: rgb(197, 201, 0);"
                    class="btn mt-3 mb-3 btn-secondary">Panam</button>
            </div>
            <div class="col-2">
                <button style="color: whitesmoke; font-size: 25px; background-color: rgb(156, 156, 156);"
                    class="btn mt-3 mb-3 btn-secondary">Reebook</button>
            </div>
            <div class="col-2">
                <button style="color: whitesmoke; font-size: 25px; background-color: rgb(0, 189, 183);"
                    class="btn mt-3 mb-3 btn-secondary">Adidas</button>
            </div>
            <div class="col-2">
                <button style="color: whitesmoke; font-size: 25px; background-color: rgb(206, 0, 0);"
                    class="btn mt-3 mb-3 btn-secondary">Nike</button>
            </div>
            <div class="col-2">
                <button style="color: whitesmoke; font-size: 25px; background-color: rgb(0, 183, 30);"
                    class="btn mt-3 mb-3 btn-secondary">Vans</button>
            </div>
        </div>
    </div>
</body>

</html>