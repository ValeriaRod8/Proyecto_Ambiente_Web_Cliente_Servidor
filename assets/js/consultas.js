$(document).ready(function () {
    $.ajax({
        url: '../DAL/consultas/consulta.php',
        method: 'GET',
        dataType: 'json',
        success: function (consultas) {
            mostrarConsultas(consultas);
        },
        error: function (error) {
            console.error('Error al obtener las consultas:', error);
        }
    });
});

function mostrarConsultas(consultas) {
    if (consultas.length > 0) {
        let tablaConsultas = `
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Detalle</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>`;

        consultas.forEach(function (consulta) {
            console.log(consulta);
            tablaConsultas += `
                <tr data-id="${consulta.id}">
                    <td>${consulta.nombre}</td>
                    <td>${consulta.telefono}</td>
                    <td>${consulta.correo}</td>
                    <td>${consulta.detalle}</td>
                
                    <td>
                        <button class="btn btn-outline-warning" onclick="mostrarFormActualizar('${consulta.id}', '${consulta.nombre}', '${consulta.telefono}', '${consulta.correo}', '${consulta.detalle}')">Actualizar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar${consulta.id}">Eliminar</button>
                        <div class="modal fade" id="modalEliminar${consulta.id}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Eliminar Consulta</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-center">
                                        <p style="font-size: 1.2rem";>¿Seguro de Eliminar la Consulta de <strong>${consulta.nombre}</strong>?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-danger" data-bs-dismiss="modal" onclick="eliminarConsulta(${consulta.id})">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            `;
        });

        tablaConsultas += `</table>`;
        $("#tablaConsultas").append(tablaConsultas);
    }
}

function mostrarFormCrear() {
    //Titulo de Consultas
    let title = document.getElementById("tituloConsultas");
    //Form de Creacion de Consulta (Create)
    let form = document.getElementById("formConsultas");
    //Tabla de Consultas (Read)
    let table = document.getElementById("tablaConsultas");
    //Boton dinamico (Create/Read)
    let botonMostrar = document.getElementById("botonMostrar");
    let botonFormulario = document.getElementById("botonFormulario");

    if (table.style.display === "block" || table.style.display === "") {
        // Mostrar el formulario
        form.reset();
        form.style.display = "block";
        form.action = "../DAL/consultas/crearConsulta.php";
        title.textContent = "Nueva Consulta";
        table.style.display = "none";
        botonMostrar.textContent = "Ver Consultas";
        botonMostrar.classList.remove("btn-primary");
        botonMostrar.classList.add("btn-success");
        botonFormulario.textContent = "Crear Consulta";
        botonFormulario.className = "btn btn-primary mt-5";
    } else {
        // Mostrar la tabla
        form.style.display = "none";
        title.textContent = "Consultas";
        table.style.display = "block";
        botonMostrar.textContent = "Nueva Consulta";
        botonMostrar.classList.remove("btn-success");
        botonMostrar.classList.add("btn-primary");
    }
}

function mostrarFormActualizar(id, nombre, telefono, correo, detalle) {
    //Titulo de Consultas
    let title = document.getElementById("tituloConsultas");
    //Form de Creacion de Consulta (Create)
    let form = document.getElementById("formConsultas");
    //Tabla de Consultas (Read)
    let table = document.getElementById("tablaConsultas");
    //Botones dinamicos (Create/Read/Update)
    let botonMostrar = document.getElementById("botonMostrar");
    let botonFormulario = document.getElementById("botonFormulario");

    if (table.style.display === "block" || table.style.display === "") {
        // Mostrar el formulario
        document.getElementById("inputId").value = id;
        document.getElementById("inputNombre").value = nombre;
        document.getElementById("inputTelefono").value = telefono;
        document.getElementById("inputCorreo").value = correo;
        document.getElementById("inputDetalle").value = detalle;
        table.style.display = "none";
        form.style.display = "block";
        form.action = "../DAL/consultas/actualizarConsulta.php";
        title.textContent = "Actualizar Consulta";
        botonMostrar.textContent = "Ver Consultas";
        botonMostrar.classList.remove("btn-primary");
        botonMostrar.classList.add("btn-success");
        botonFormulario.textContent = "Actualizar Consulta";
        botonFormulario.className = "btn btn-warning mt-5";
    } else {
        // Mostrar la tabla
        title.textContent = "Consultas";
        form.style.display = "none";
        table.style.display = "block";
        botonMostrar.textContent = "Nueva Consulta";
        botonMostrar.classList.remove("btn-success");
        botonMostrar.classList.add("btn-primary");
    }
}

function eliminarConsulta(id) {
    $.ajax({
        type: 'POST',
        url: '../DAL/consultas/eliminarConsulta.php',
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