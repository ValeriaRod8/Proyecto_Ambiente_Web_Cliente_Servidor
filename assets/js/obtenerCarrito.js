import { inicializarListeners, listaCarrito } from './carrito.js';

$(document).ready(function () {
    let carritoContainer = $(".carrito__container");
    let carritoProductos = $(".carrito__productos");

    if (listaCarrito().length > 0) {
        listaCarrito().forEach(function (producto) {
            let cardProducto =
                $(`<div class="card-producto">
                <img class="card__img" src="${producto.imagen}">
                <h2 class="card__title mt-3">${producto.nombre}</h2>
                <p class="card__description">${producto.detalle}</p>
                <p class="card__price">$${producto.precio}</p>
                <input class="producto__button" type="button" name="eliminar" value="Eliminar">       
                </div>`);

            cardProducto.data('producto', producto);

            carritoProductos.append(cardProducto);
        });

        let botonesCarrito = $(`<div class="carrito__buttons">
            <div><input class="carrito__confirmar" type="button" name="confirmar" id="confirmar" value="Confirmar Compra"></div>      
            <div><input class="carrito__limpiar" type="button" name="limpiar" id="limpiar" value="Limpiar Carrito"></div>
            </div>`);

        carritoContainer.append(botonesCarrito);
    } else {
        carritoProductos.append('<h2 class="carrito__subtitle">Carrito Vacío</h2>');
    }

    inicializarListeners();

});