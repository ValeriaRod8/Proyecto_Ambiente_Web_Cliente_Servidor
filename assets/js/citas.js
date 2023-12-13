$(document).ready(function () {
    $.ajax({
        url: '../DAL/citas/cita.php',
        method: 'GET',
        dataType: 'json',
        success: (citas) => {
            mostrarCitas(citas);
        },
        error: (error) => {
            console.error('Error al obtener las citas:', error);
        }
    });
});

function mostrarCitas(citas) {
    if (citas.length > 0) {
        let tablaCitas = `
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Especialista</th>
                    <th scope="col">Correo Especialista</th>
                    <th scope="col">Correo Cliente</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Notas</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>`;
        
        citas.forEach((cita) => {
            console.log(cita);
            tablaCitas += `
                <tr data-id="${cita.Id}">
                    <td>${cita.Especialista}</td>
                    <td>${cita.CorreoEspecialista}</td>
                    <td>${cita.CorreoCliente}</td>
                    <td>${cita.Especialidad}</td>
                    <td>${cita.Descripcion}</td>
                    <td>${cita.Fecha}</td>
                    <td>${cita.Notas}</td>
                    <td>
                        <button class="btn btn-outline-warning btn-acciones" onclick="mostrarFormActualizar('${cita.Id}', '${cita.Especialista}', '${cita.CorreoEspecialista}'
                        , '${cita.CorreoCliente}', '${cita.Especialidad}', '${cita.Descripcion}', '${cita.Fecha}', '${cita.Notas}')">Actualizar</button>
                        <button type="button" class="btn btn-outline-danger btn-acciones" data-bs-toggle="modal" data-bs-target="#modalEliminar${cita.Id}">Eliminar</button>
                        <div class="modal fade" id="modalEliminar${cita.Id}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Eliminar Consulta</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-center">
                                        <p style="font-size: 1.2rem";>¿Seguro de Eliminar la Consulta de <strong>${cita.Especialidad}</strong>?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-danger" data-bs-dismiss="modal" onclick="eliminarCita(${cita.Id})">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            `;
        });

        tablaCitas += `</table>`;
        $("#tablaCitas").append(tablaCitas);
    }
}

function mostrarFormCrear() {
    //Titulo de Consultas
    let title = document.getElementById("titulo");
    //Form de Creacion de Consulta (Create)
    let form = document.getElementById("formCitas");
    //Tabla de Consultas (Read)
    let table = document.getElementById("tablaCitas");
    //Boton dinamico (Create/Read)
    let botonMostrar = document.getElementById("botonMostrar");
    let botonFormulario = document.getElementById("botonFormulario");

    if (table.style.display === "block" || table.style.display === "") {
        // Mostrar el formulario
        form.reset();
        form.style.display = "block";
        form.action = "../DAL/citas/crearCita.php";
        title.textContent = "Nueva Cita";
        table.style.display = "none";
        botonMostrar.textContent = "Ver Citas";
        botonMostrar.classList.remove("btn-primary");
        botonMostrar.classList.add("btn-success");
        botonFormulario.textContent = "Crear Cita";
        botonFormulario.className = "btn btn-primary mt-5";
    } else {
        // Mostrar la tabla
        form.style.display = "none";
        title.textContent = "Citas";
        table.style.display = "block";
        botonMostrar.textContent = "Nueva Cita";
        botonMostrar.classList.remove("btn-success");
        botonMostrar.classList.add("btn-primary");
    }
}

function mostrarFormActualizar(id, especialista, correoEspecialista, correoCliente, especialidad, descripcion, fecha, notas) {
    //Titulo de Consultas
    let title = document.getElementById("titulo");
    //Form de Creacion de Consulta (Create)
    let form = document.getElementById("formCitas");
    //Tabla de Consultas (Read)
    let table = document.getElementById("tablaCitas");
    //Botones dinamicos (Create/Read/Update)
    let botonMostrar = document.getElementById("botonMostrar");
    let botonFormulario = document.getElementById("botonFormulario");

    if (table.style.display === "block" || table.style.display === "") {
        // Mostrar el formulario
        document.getElementById("inputId").value = id;
        document.getElementById("inputEspecialista").value = especialista;
        document.getElementById("inputCorreoEspecialista").value = correoEspecialista;
        document.getElementById("inputCorreoCliente").value = correoCliente;
        document.getElementById("inputEspecialidad").value = especialidad;
        document.getElementById("inputDescripcion").value = descripcion;
        document.getElementById("inputFecha").value = fecha;
        document.getElementById("inputNotas").value = notas;
        table.style.display = "none";
        form.style.display = "block";
        form.action = "../DAL/citas/actualizarCita.php";
        title.textContent = "Actualizar Cita";
        botonMostrar.textContent = "Ver Citas";
        botonMostrar.classList.remove("btn-primary");
        botonMostrar.classList.add("btn-success");
        botonFormulario.textContent = "Actualizar Cita";
        botonFormulario.className = "btn btn-warning mt-5";
    } else {
        // Mostrar la tabla
        title.textContent = "Citas";
        form.style.display = "none";
        table.style.display = "block";
        botonMostrar.textContent = "Nueva Cita";
        botonMostrar.classList.remove("btn-success");
        botonMostrar.classList.add("btn-primary");
    }
}

function eliminarCita(id) {
    $.ajax({
        type: 'POST',
        url: '../DAL/citas/eliminarCita.php',
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