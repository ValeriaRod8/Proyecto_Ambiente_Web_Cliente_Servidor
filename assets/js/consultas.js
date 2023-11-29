$(document).ready(function () {
    $.ajax({
        url: '../DAL/consulta.php',
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
                        <button class="btn btn-outline-warning" onclick="mostrarFormActualizar(${consulta.id}, '${consulta.nombre}', '${consulta.correo}', '${consulta.telefono}', '${consulta.detalle}')">Actualizar</button>
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
                                        <button class="btn btn-danger" data-bs-dismiss="modal" onclick="eliminarConsulta('eliminarConsulta', ${consulta.id})">Eliminar</button>
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
    let button = document.getElementById("botonMostrar");

    if (table.style.display === "block" || table.style.display === "") {
        // Mostrar el formulario
        form.action = "../DAL/crearConsulta.php";
        title.textContent = "Nueva Consulta";
        button.textContent = "Ver Consultas";
        table.style.display = "none";
        form.style.display = "block";
        button.classList.remove("btn-primary");
        button.classList.add("btn-success");
    } else {
        // Mostrar la tabla
        title.textContent = "Consultas";
        button.textContent = "Nueva Consulta";
        table.style.display = "block";
        form.style.display = "none";
        button.classList.remove("btn-success");
        button.classList.add("btn-primary");
    }
}

function mostrarFormActualizar(id, nombre, correo, telefono, detalle) {
    //Titulo de Consultas
    let title = document.getElementById("tituloConsultas");
    //Form de Creacion de Consulta (Create)
    let form = document.getElementById("formConsultas");
    //Tabla de Consultas (Read)
    let table = document.getElementById("tablaConsultas");
    //Boton dinamico (Create/Read)
    let button = document.getElementById("botonMostrar");

    if (table.style.display === "block" || table.style.display === "") {
        // Mostrar el formulario
        document.getElementById("inputId").value = id;
        document.getElementById("inputNombre").value = nombre;
        document.getElementById("inputCorreo").value = correo;
        document.getElementById("inputTelefono").value = telefono;
        document.getElementById("inputDetalle").value = detalle;
        form.action = "../DAL/actualizarConsulta.php";
        title.textContent = "Actualizar Consulta";
        button.textContent = "Ver Consultas";
        table.style.display = "none";
        form.style.display = "block";
        button.classList.remove("btn-primary");
        button.classList.add("btn-success");
    } else {
        // Mostrar la tabla
        title.textContent = "Consultas";
        button.textContent = "Nueva Consulta";
        table.style.display = "block";
        form.style.display = "none";
        button.classList.remove("btn-success");
        button.classList.add("btn-primary");
    }
}

function eliminarConsulta(request, id) {
    $.ajax({
        type: 'POST',
        url: '../DAL/consulta.php',
        data: { request: request, id: id },
        success: function (response) {
            //Eliminar la fila de la tabla
            $('[data-id="' + id + '"]').remove();
        },
        error: function (error) {
            console.error('Error en la solicitud AJAX:', error);
        }
    });
}