function cargarDatosProducto() {
    // Obtener el ID del producto de la URL
    var urlParams = new URLSearchParams(window.location.search);
    var id_producto = urlParams.get('id');

    // Hacer una solicitud AJAX para obtener los detalles del producto
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'editarProducto.php?id=' + id_producto, true);
    xhr.onload = function() {
        if (xhr.status == 200) {
            // Parsear la respuesta JSON
            var producto = JSON.parse(xhr.responseText);
            // Rellenar los campos del formulario con los datos del producto
            document.getElementById('id_producto').value = producto.ID;
            document.getElementById('codigo_p').value = producto.CodigoProducto;
            document.getElementById('modelo_p').value = producto.Modelo;
            // Rellenar otros campos del producto, si es necesario
        } else {
            console.error('Error al cargar los datos del producto.');
        }
    };
    xhr.send();
}

// Función para llenar los campos del formulario con los datos del producto
function llenarCampos(producto) {
    
    document.getElementById('codigo_p').value = producto.CodigoProducto;
    document.getElementById('modelo_p').value = producto.Modelo;
    document.getElementById('nombre_p').value = producto.Nombre;
    document.getElementById('descripcion_p').value = producto.Descripcion;
    document.getElementById('marca_p').value = producto.Marca;
    document.getElementById('cantidad_p').value = producto.Cantidad;
    document.getElementById('precio_p').value = producto.Precio;

    // Continúa llenando los demás campos con sus respectivos valores
}

// Función para realizar la solicitud AJAX y obtener los datos del producto
function obtenerProducto() {
    // Realizar la solicitud AJAX para obtener los datos del producto
    // Suponiendo que ya tienes la URL y el tipo de solicitud definidos
    $.ajax({
        url: 'src/assets/php/editarProducto.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data) {
                // Llama a la función para llenar los campos con los datos obtenidos
                llenarCampos(data);
            } else {
                console.error('No se encontraron datos del producto.');
            }
        },
        error: function() {
            console.error('Error al obtener los datos del producto.');
        }
    });
}

// Llama a la función para obtener los datos del producto cuando se cargue la página
$(document).ready(function() {
    obtenerProducto();
});

