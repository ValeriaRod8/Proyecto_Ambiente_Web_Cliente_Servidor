export function listaCarrito() {
    return JSON.parse(localStorage.getItem('carrito')) || [];
}

export function inicializarListeners() {
    let botonesComprar = document.getElementsByName('comprar');
    Array.from(botonesComprar).forEach(function (boton) {
        boton.addEventListener('click', eventoComprar);
    });

    let botonConfimar = document.getElementById('confirmar');
    if (botonConfimar) {
        botonConfimar.addEventListener('click', eventoConfirmar)
    }

    let botonesEliminar = document.getElementsByName('eliminar');
    Array.from(botonesEliminar).forEach(function (boton) {
        boton.addEventListener('click', eventoEliminar);
    });

    let botonLimpiar = document.getElementById('limpiar');
    if (botonLimpiar) {
        botonLimpiar.addEventListener('click', eventoLimpiar)
    }
}

function eventoComprar(event) {
    let carrito = listaCarrito();
    let contenedorProducto = $(event.target).closest('.card-producto');
    let producto = contenedorProducto.data('producto');
    let botonComprar = contenedorProducto.find('[name="comprar"]');

    if (!carrito.some(item => item.codigo === producto.codigo)) {
        carrito.push(producto);
        localStorage.setItem('carrito', JSON.stringify(carrito));
        botonComprar.val('En Carrito');
        botonComprar.removeClass('card__button').addClass('card__button--cart');
    } else {
        carrito = carrito.filter(item => item.codigo !== producto.codigo);
        localStorage.setItem('carrito', JSON.stringify(carrito));
        botonComprar.val('Comprar');
        botonComprar.removeClass('card__button--cart').addClass('card__button');
    }
    console.log('Productos comprados:', carrito);
}

function eventoConfirmar() {
    $.ajax({
        url: 'server/compra.php',
        method: 'POST',
        data: { carrito: JSON.stringify(listaCarrito()) },
        success: function (respuesta) {
            console.log(respuesta);
            let respuestaJSON = JSON.parse(respuesta);
            let carrito = respuestaJSON.carrito;
            let montoTotal = 0;

            $('.carrito__productos').empty();
            $('.carrito__buttons').remove();
            localStorage.clear();

            carrito.forEach(function (producto) {
                montoTotal += parseFloat(producto.precio);
                let cardProducto =
                    $(`<div class="card-producto">
                    <img class="card__img" src="${producto.imagen}">
                    <h2 class="card__title mt-3">${producto.nombre}</h2>
                    <p class="card__description">${producto.detalle}</p>
                    <p class="card__price">$${producto.precio}</p>       
                    </div>`);
    
                cardProducto.data('producto', producto);
    
                $(".carrito__productos").append(cardProducto);
            });

            let elementoMonto = $(`<h2 class="carrito__subtitle">Monto Total: $${montoTotal.toFixed(2)}</h2>`);

            $('.carrito__title').text('Compra Exitosa!');
            $(".carrito__container").append(elementoMonto);
        },
        error: function (error) {
            window.location.href = "/Proyectos/Proyecto_Ambiente_Web_Cliente_Servidor/login.php";
        }
    });
}

function eventoEliminar(event) {
    let carrito = listaCarrito();
    let contenedorProducto = $(event.target).closest('.card-producto');
    let producto = contenedorProducto.data('producto');

    contenedorProducto.remove();
    carrito = carrito.filter(item => item.codigo !== producto.codigo);
    localStorage.setItem('carrito', JSON.stringify(carrito));

    if (carrito.length === 0 && !document.querySelector('.carrito__subtitle')) {
        eventoLimpiar();
    }
}

function eventoLimpiar() {
    $('.carrito__productos').empty();
    $('.carrito__buttons').remove();
    localStorage.clear();

    let carritoVacio = document.createElement('h2');
    carritoVacio.className = 'carrito__subtitle';
    carritoVacio.textContent = 'Carrito Vacío';
    $('.carrito__productos').append(carritoVacio);
}


