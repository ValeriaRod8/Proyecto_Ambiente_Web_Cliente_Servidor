$(document).ready(function () {
    $.ajax({
        url: '../DAL/productos/producto.php',
        method: 'GET',
        dataType: 'json',
        
        success: function (productos) {
            mostrarProductos(productos);
        },
        error: function (error) {
            console.error('Error al obtener las productos:', error);
        }
    });
});

//-------------------------------
function mostrarProductos(productos) {
    if (productos.length > 0) {
        let tablaProductos = `
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Detalle</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>`;

        productos.forEach(function (producto) {
            console.log(producto);
            tablaProductos += `
                <tr data-id="${producto.codigo}">
                    <td>${producto.nombre}</td>
                    <td>${producto.detalle}</td>
                    <td>${producto.imagen}</td>
                    <td>${producto.precio}</td>
                
                    <td>
                        <button class="btn btn-outline-warning btn-acciones" onclick="mostrarFormActualizar('${producto.codigo}', '${producto.nombre}', '${producto.detalle}', '${producto.imagen}', '${producto.precio}')">Actualizar</button>
                        <button type="button" class="btn btn-outline-danger btn-acciones" data-bs-toggle="modal" data-bs-target="#modalEliminar${producto.codigo}">Eliminar</button>
                        <div class="modal fade" id="modalEliminar${producto.codigo}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Eliminar Producto</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-center">
                                        <p style="font-size: 1.2rem";>¿Seguro de Eliminar la Producto de <strong>${producto.nombre}</strong>?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-danger" data-bs-dismiss="modal" onclick="eliminarProducto(${producto.codigo})">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            `;
        });

        tablaProductos += `</table>`;
        $("#tablaProductos").append(tablaProductos);
    }
}


function mostrarFormCrear() {
    //Titulo de Productos
    let title = document.getElementById("tituloProductos");
    //Form de Creacion de Producto (Create)
    let form = document.getElementById("formProductos");
    //Tabla de Productos (Read)
    let table = document.getElementById("tablaProductos");
    //Boton dinamico (Create/Read)
    let botonMostrar = document.getElementById("botonMostrar");
    let botonFormulario = document.getElementById("botonFormulario");

    if (table.style.display === "block" || table.style.display === "") {
        // Mostrar el formulario
        form.reset();
        form.style.display = "block";
        form.action = "../DAL/productos/crearProducto.php";
        form.enctype = "multipart/form-data";
        title.textContent = "Nuevo Producto";
        table.style.display = "none";
        botonMostrar.textContent = "Ver Productos";
        botonMostrar.classList.remove("btn-primary");
        botonMostrar.classList.add("btn-success");
        botonFormulario.textContent = "Crear Producto";
        botonFormulario.className = "btn btn-primary mt-5";
    } else {
        // Mostrar la tabla
        form.style.display = "none";
        title.textContent = "Productos";
        table.style.display = "block";
        botonMostrar.textContent = "Nueva Producto";
        botonMostrar.classList.remove("btn-success");
        botonMostrar.classList.add("btn-primary");
    }
}

function mostrarFormActualizar(codigo, nombre, detalle, imagen, precio) {
    let title = document.getElementById("tituloProductos");
    let form = document.getElementById("formProductos");
    let table = document.getElementById("tablaProductos");
    let botonMostrar = document.getElementById("botonMostrar");
    let botonFormulario = document.getElementById("botonFormulario");

    if (table.style.display === "block" || table.style.display === "") {
        document.getElementById("inputCodigo").value = codigo;
        document.getElementById("inputNombre").value = nombre;
        document.getElementById("inputDetalle").value = detalle;
        document.getElementById("inputImagen").src = '../../server/archivos/' + imagen;
        document.getElementById("inputPrecio").value = parseFloat(precio);
        
        console.log('Mostrar formulario de actualización:', codigo, nombre, detalle, imagen, precio);

        table.style.display = "none";
        form.style.display = "block";
        form.action = "../DAL/productos/actualizarProducto.php";
        title.textContent = "Actualizar Producto";
        botonMostrar.textContent = "Ver Productos";
        botonMostrar.classList.remove("btn-primary");
        botonMostrar.classList.add("btn-success");
        botonFormulario.textContent = "Actualizar Producto";
        botonFormulario.className = "btn btn-warning mt-5";
    } else {
        title.textContent = "Productos";
        form.style.display = "none";
        table.style.display = "block";
        botonMostrar.textContent = "Nueva Producto";
        botonMostrar.classList.remove("btn-success");
        botonMostrar.classList.add("btn-primary");
    }
}


function eliminarProducto(codigo) {
    console.log('Intentando eliminar producto con código:', codigo);

    $.ajax({
        type: 'POST',
        url: '../DAL/productos/eliminarProducto.php',
        data: { codigo: codigo },
        success: function (response) {
            console.log('Respuesta del servidor:', response);

            // Eliminar la fila de la tabla
            $('[data-id="' + codigo + '"]').remove();
        },
        error: function (error) {
            console.error('Error en la solicitud AJAX:', error);
        }
    });
}
