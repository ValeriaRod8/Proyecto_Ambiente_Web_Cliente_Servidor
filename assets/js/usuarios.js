$(document).ready(function () {
    $.ajax({
        url: '../DAL/usuarios/usuario.php',
        method: 'GET',
        dataType: 'json',
        success: function (usuarios) {
            mostrarUsuarios(usuarios);
        },
        error: function (error) {
            console.error('Error al obtener los usuarios:', error);
        }
    });
});

function mostrarUsuarios(usuarios) {
    if (usuarios.length > 0) {
        let tablaUsuarios = `
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>`;

        usuarios.forEach(function (usuario) {
            console.log(usuario);
            tablaUsuarios += `
                <tr data-id="${usuario.id}">
                    <td>${usuario.id}</td>
                    <td>${usuario.nombre}</td>
                    <td>${usuario.correo}</td>
                    <td>${usuario.rol}</td>
                    <td>
                        <button class="btn btn-outline-warning btn-acciones" onclick="mostrarFormActualizar('${usuario.id}', '${usuario.nombre}', '${usuario.correo}', '${usuario.rol}')">Actualizar</button>
                        <button type="button" class="btn btn-outline-danger btn-acciones" data-bs-toggle="modal" data-bs-target="#modalEliminar${usuario.id}">Eliminar</button>
                        <div class="modal fade" id="modalEliminar${usuario.id}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Eliminar Usuario</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-center">
                                        <p style="font-size: 1.2rem; text-align: center;">¿Seguro de Eliminar el Usuario <strong>${usuario.correo}</strong>?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-danger" data-bs-dismiss="modal" onclick="eliminarUsuario(${usuario.id})">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            `;
        });

        tablaUsuarios += `</table>`;
        $("#tablaUsuarios").append(tablaUsuarios);
    }
}

function mostrarFormCrear() {
    //Titulo de Usuarios
    let title = document.getElementById("tituloUsuarios");
    //Form de Creacion de Usuario (Create)
    let form = document.getElementById("formUsuarios");
    //Tabla de Usuarios (Read)
    let table = document.getElementById("tablaUsuarios");
    //Boton dinamico (Create/Read)
    let botonMostrar = document.getElementById("botonMostrar");
    let botonFormulario = document.getElementById("botonFormulario");

    if (table.style.display === "block" || table.style.display === "") {
        // Mostrar el formulario
        form.reset();
        form.style.display = "block";
        form.action = "../DAL/usuarios/crearUsuario.php";
        title.textContent = "Nuevo Usuario";
        table.style.display = "none";
        botonMostrar.textContent = "Ver Usuarios";
        botonMostrar.classList.remove("btn-primary");
        botonMostrar.classList.add("btn-success");
        botonFormulario.textContent = "Crear Usuario";
        botonFormulario.className = "btn btn-primary mt-5";
    } else {
        // Mostrar la tabla
        form.style.display = "none";
        title.textContent = "Usuarios";
        table.style.display = "block";
        botonMostrar.textContent = "Nuevo Usuario";
        botonMostrar.classList.remove("btn-success");
        botonMostrar.classList.add("btn-primary");
    }
}

function mostrarFormActualizar(id, nombre, correo, rol) {
    //Titulo de Usuarios
    let title = document.getElementById("tituloUsuarios");
    //Form de Creacion de Usuario (Create)
    let form = document.getElementById("formUsuarios");
    //Tabla de Usuarios (Read)
    let table = document.getElementById("tablaUsuarios");
    //Botones dinamicos (Create/Read/Update)
    let botonMostrar = document.getElementById("botonMostrar");
    let botonFormulario = document.getElementById("botonFormulario");

    if (table.style.display === "block" || table.style.display === "") {
        // Mostrar el formulario
        document.getElementById("inputId").value = id;
        document.getElementById("nombre").value = nombre;
        document.getElementById("correo").value = correo;
        document.getElementById("rol").value = rol;
        table.style.display = "none";
        form.style.display = "block";
        form.action = "../DAL/usuarios/actualizarUsuario.php";
        title.textContent = "Actualizar Usuario";
        botonMostrar.textContent = "Ver Usuarios";
        botonMostrar.classList.remove("btn-primary");
        botonMostrar.classList.add("btn-success");
        botonFormulario.textContent = "Actualizar Usuario";
        botonFormulario.className = "btn btn-warning mt-5";
    } else {
        // Mostrar la tabla
        title.textContent = "Usuarios";
        form.style.display = "none";
        table.style.display = "block";
        botonMostrar.textContent = "Nuevo Usuario";
        botonMostrar.classList.remove("btn-success");
        botonMostrar.classList.add("btn-primary");
    }
}

function eliminarUsuario(id) {
    $.ajax({
        type: 'POST',
        url: '../DAL/usuarios/eliminarUsuario.php',
        data: { id: id },
        success: function (response) {
            //Eliminar la fila de la tabla
            console.log(response);
            $('[data-id="' + id + '"]').remove();
        },
        error: function (error) {
            console.error('Error en la solicitud AJAX:', error);
        }
    });
}