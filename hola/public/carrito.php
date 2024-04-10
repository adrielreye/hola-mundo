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
            width: 400px;
            /* O cualquier otro valor que desees */
        }

        .custom-input {
            width: 65px;
            /* Ancho personalizado */
            height: 30px;
            /* Altura personalizada */
            /* Otros estilos personalizados */
        }
    </style>
    <div class="container-fluid ">
        <div class="container-fluid resaltar-borde-container mt-4 ml-5">
            <div class="row mx-4">
                <div class="col-2">
                    <p style=" font-size: 30px; color: whitesmoke;" class="mt-3 mb-2 ml-3 mr-3">
                        Carrito
                    </p>
                </div>
                <div class="col-5">

                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-2">
                            <button style="color: whitesmoke; font-size: 20px; background-color: black;"
                                class="btn mt-3 mb-3 ml-3 btn-outline-secondary">Tienda</button>
                        </div>
                        <div class="col-6">
                            <nav class="navbar mt-2">
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
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-bag-fill mt-3 mx-2" viewBox="0 0 16 16" style="fill: white;">
                                    <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z" />
                                </svg>
                            </button>
                        </div>
                        <div class="col-2">
                            <button class="btn mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-person-circle mt-4 mx-4" viewBox="0 0 16 16" style="fill: white;">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid resaltar-borde-container mt-3">
            <div class="row mt-5 mb-5">
                <div class="col-7">
                    <div class="container-fluid p-4" style="background-color: darkgray;">
                        <div class="row">
                            <div class="col-5">


                                <?php
                                // Conexión a la base de datos
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "pcstore";

                                // Crear conexión
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Verificar conexión
                                if ($conn->connect_error) {
                                    die("Conexión fallida: " . $conn->connect_error);
                                }

                                // Función para eliminar un producto del carrito
                                if (isset($_POST['remove_product_id'])) {
                                    $remove_product_id = $_POST['remove_product_id'];
                                    $remove_sql = "DELETE FROM carritodecompras WHERE id = $remove_product_id";
                                    if ($conn->query($remove_sql) === TRUE) {
                                        echo "Producto eliminado del carrito.";
                                    } else {
                                        echo "Error al eliminar el producto del carrito: " . $conn->error;
                                    }
                                }

                                // Consulta SQL para obtener todas las IDs del carrito de compras
                                $sql = "SELECT id FROM carritodecompras";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // Array para almacenar los IDs del carrito de compras
                                    $cart_ids = array();

                                    // Obtener los IDs del carrito de compras y almacenarlos en el array
                                    while ($row = $result->fetch_assoc()) {
                                        $cart_ids[] = $row["id"];
                                    }

                                    // Consulta SQL para obtener los datos de los productos que coincidan con los IDs del carrito de compras
                                    $product_sql = "SELECT id, nombre, descripcion, precio, imagen FROM producto WHERE id IN (" . implode(',', $cart_ids) . ")";
                                    $product_result = $conn->query($product_sql);

                                    if ($product_result->num_rows > 0) {
                                        // Mostrar los datos de los productos
                                        while ($product_row = $product_result->fetch_assoc()) {
                                            echo '<div class="container-fluid p-4" style="background-color: darkgray;">';
                                            echo '<div class="row">';
                                            echo '<div class="col-5">';
                                            echo '<img src="' . $product_row["imagen"] . '" alt="Imagen del producto" class="img-fluid" style="max-width: 100%; height: auto;">';
                                            echo '</div>';
                                            echo '<div class="col-7">';
                                            echo "<p>Nombre del producto: " . $product_row["nombre"] . "</p>";
                                            echo "<p>Descripción del producto: " . $product_row["descripcion"] . "</p>";
                                            echo "<p>Precio del producto: " . $product_row["precio"] . "</p>";
                                            // Campo de entrada para elegir la cantidad
                                            echo '<form action="agregar_al_carrito.php" method="post">';
                                            echo '<div class="input-group mb-3">';
                                            echo '<input type="number" name="cantidad" value="1" min="1" class="form-control" style="max-width: 100px;">';
                                            // Pasar el ID del producto como un campo oculto en el formulario
                                            echo '<input type="hidden" name="product_id" value="' . $product_row["id"] . '">';
                                            echo '</div>';
                                            echo '</form>';
                                            // Botón para quitar el producto del carrito
                                            echo '<form action="" method="post">';
                                            echo '<input type="hidden" name="remove_product_id" value="' . $product_row["id"] . '">';
                                            echo '<button type="submit" class="btn btn-danger">Quitar</button>';
                                            echo '</form>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo "<hr>"; // Separador entre productos
                                        }
                                    } else {
                                        echo "No se encontraron productos en el carrito de compras.";
                                    }
                                } else {
                                    echo "No se encontraron resultados en el carrito de compras.";
                                }

                                // Cerrar conexión
                                $conn->close();
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
        


        </div>
        </div>
        </div>

    </div>




</body>

</html>