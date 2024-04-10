function llenarCatalogo(marca) {
    $.ajax({
        url: '../src/assets/php/catalogo.php?marca=' + marca,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            // Procesar los datos recibidos y mostrarlos en la página
            if (data && data.length > 0) {
                // Iterar sobre los productos y generar las tarjetas dinámicamente
                $.each(data, function (index, producto) {
                    var cardHtml = `
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="${producto.Imagen}" class="mx-auto" alt="${producto.Nombre}" width="240" style="align-items: center;">
                                <div class="card-body">
                                    <h5 class="card-text">${producto.Nombre}</h5>
                                    <p class="card-text">$ ${producto.Precio}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href = '../../../infoProduct.html?id=${producto.ID}';">Detalles</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Añadir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    $('#productos-container').append(cardHtml);
                });
            } else {
                // Mostrar mensaje si no se encontraron productos
                $('body').prepend('<p>No se encontraron productos.</p>');
            }
        },
        error: function () {
            // Mostrar mensaje de error si falla la solicitud
            $('body').prepend('<p>Error al cargar los productos.</p>');
        }
    });
}
