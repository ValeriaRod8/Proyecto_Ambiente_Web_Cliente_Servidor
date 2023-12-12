import { inicializarListeners, listaCarrito } from './carrito.js';

$(document).ready(function () {
    $.ajax({
        url: 'DAL/productos/producto.php',
        method: 'GET',
        dataType: 'json',
        success: function (productos) {
            console.log('Productos obtenidos:', productos);
            getProductos(productos);
        },
        error: function (error) {
            console.error('Error al obtener productos:', error);
        }
    });
});


function getProductos(productos) {
    let carrito = listaCarrito();
    productos.forEach(function (producto) {
        console.log(producto);
        let existe = carrito.some(item => item.codigo === producto.codigo);

        let cardProducto =
            $(`<div class="card-producto">
            <img class="card__img" src="${producto.imagen}">
            <h2 class="card__title mt-3">${producto.nombre}</h2>
            <p class="card__description">${producto.detalle}</p>
            <p class="card__price">$${producto.precio}</p>
            <input 
                class="${existe ? 'card__button--cart' : 'card__button'}" 
                value="${existe ? 'En Carrito' : 'Comprar'}" 
                type="button" name="comprar"
            >          
            </div>`);

        cardProducto.data('producto', producto);

        $(".container").append(cardProducto);
    });

    inicializarListeners();
}