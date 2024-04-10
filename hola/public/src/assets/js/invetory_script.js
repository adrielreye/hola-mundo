$(document).ready(function() {
    
    $.ajax({
        url: 'src/assets/php/inventory.php', 
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            
            if (data && data.length > 0) {
                $.each(data, function(index, producto) {
                    var cardHtml = `
                    
                    <div class="row g-0 text-center mt-5 mb-5">
                        <div class="col-12 col-md-12 product-card">
                            <div class="card text-bg-dark mb-3" style="max-width:100%;">
                                <div class="row g-0">
                                    <div class="col-4">
                                        <img src="${producto.imagen}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <h5 class="card-title">${producto.Nombre}</h5>
                                            <p class="card-text">${producto.Modelo}</p>
                                            <p class="card-text">Stock: ${producto.Cantidad}</p>
                                            <button class="btn btn-light decrement-btn" type="button">-</button>
                                            <input type="text" class="form-control input-quantity " value="${producto.Cantidad}" data-min="1" data-max="${producto.Cantidad}" readonly>
                                            <button class="btn btn-light increment-btn" type="button">+</button>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <a href="editProduct.html?id=${producto.ID}" class="btn btn-danger mt-5">Editar producto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
                    $('.container').append(cardHtml);
                });
            } else {
                $('.container').append('<p>No se encontraron productos.</p>');
            }
        },
        error: function() {
            $('.container').append('<p>Error al cargar los productos.</p>');
        }
    });
});

// Manejar el clic en el botón de incremento
$(document).on('click', '.increment-btn', function() {
    var input = $(this).siblings('.input-quantity');
    var currentValue = parseInt(input.val());
    var maxValue = parseInt(input.data('max'));
    if (currentValue < maxValue) {
        input.val(currentValue + 1);
    }
});

// Manejar el clic en el botón de decremento
$(document).on('click', '.decrement-btn', function() {
    var input = $(this).siblings('.input-quantity');
    var currentValue = parseInt(input.val());
    var minValue = parseInt(input.data('min'));
    if (currentValue > minValue) {
        input.val(currentValue - 1);
    }
});
