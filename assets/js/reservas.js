$(document).ready(function () {
    $.ajax({
        url: '../DAL/reservas/reserva.php',
        method: 'GET',
        dataType: 'json',
        success: function (reservas) {
            mostrarReservas(reservas);
        },
        error: function (error) {
            console.error('Error al obtener las reservas:', error);
        }
    });
});

function mostrarReservas(reservas) {
    if (reservas.length > 0) {
        let tablaReservas = `
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>`;

        reservas.forEach(function (reserva) {
            console.log(reserva);
            tablaReservas += `
                <tr data-id="${reserva.id}">
                    <td>${reserva.nombre}</td>
                    <td>${reserva.telefono}</td>
                    <td>${reserva.correo}</td>
                    <td>${reserva.fecha}</td>
                    <td>${reserva.servicio}</td>
                
                    <td>
                        <button class="btn btn-outline-warning" onclick="mostrarFormActualizar('${reserva.id}', '${reserva.nombre}', '${reserva.telefono}', '${reserva.correo}', '${reserva.fecha}', '${reserva.servicio}')">Actualizar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar${reserva.id}">Eliminar</button>
                        <div class="modal fade" id="modalEliminar${reserva.id}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Eliminar Reserva</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-center">
                                        <p style="font-size: 1.2rem";>¿Seguro de Eliminar la Reserva de <strong>${reserva.nombre}</strong>?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-danger" data-bs-dismiss="modal" onclick="eliminarReserva(${reserva.id})">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            `;
        });

        tablaReservas += `</table>`;
        $("#tablaReservas").append(tablaReservas);
    }
}

function mostrarFormCrear() {
    //Titulo de Reservas
    let title = document.getElementById("tituloReservas");
    //Form de Creacion de Reserva (Create)
    let form = document.getElementById("formReservas");
    //Tabla de Reservas (Read)
    let table = document.getElementById("tablaReservas");
    //Boton dinamico (Create/Read)
    let botonMostrar = document.getElementById("botonMostrar");
    let botonFormulario = document.getElementById("botonFormulario");

    if (table.style.display === "block" || table.style.display === "") {
        // Mostrar el formulario
        form.reset();
        form.style.display = "block";
        form.action = "../DAL/reservas/crearReserva.php";
        title.textContent = "Nueva Reserva";
        table.style.display = "none";
        botonMostrar.textContent = "Ver Reservas";
        botonMostrar.classList.remove("btn-primary");
        botonMostrar.classList.add("btn-success");
        botonFormulario.textContent = "Crear Reserva";
        botonFormulario.className = "btn btn-primary mt-5";
    } else {
        // Mostrar la tabla
        form.style.display = "none";
        title.textContent = "Reservas";
        table.style.display = "block";
        botonMostrar.textContent = "Nueva Reserva";
        botonMostrar.classList.remove("btn-success");
        botonMostrar.classList.add("btn-primary");
    }
}

function mostrarFormActualizar(id, nombre, telefono, correo, fecha, servicio) {
    //Titulo de Reservas
    let title = document.getElementById("tituloReservas");
    //Form de Creacion de Reserva (Create)
    let form = document.getElementById("formReservas");
    //Tabla de Reservas (Read)
    let table = document.getElementById("tablaReservas");
    //Botones dinamicos (Create/Read/Update)
    let botonMostrar = document.getElementById("botonMostrar");
    let botonFormulario = document.getElementById("botonFormulario");

    if (table.style.display === "block" || table.style.display === "") {
        // Mostrar el formulario
        document.getElementById("inputId").value = id;
        document.getElementById("nombre").value = nombre;
        document.getElementById("telefono").value = telefono;
        document.getElementById("correo").value = correo;
        document.getElementById("fecha").value = fecha;
        document.getElementById("servicio").value = servicio;
        table.style.display = "none";
        form.style.display = "block";
        form.action = "../DAL/reservas/actualizarReserva.php";
        title.textContent = "Actualizar Reserva";
        botonMostrar.textContent = "Ver Reservas";
        botonMostrar.classList.remove("btn-primary");
        botonMostrar.classList.add("btn-success");
        botonFormulario.textContent = "Actualizar Reserva";
        botonFormulario.className = "btn btn-warning mt-5";
    } else {
        // Mostrar la tabla
        title.textContent = "Reservas";
        form.style.display = "none";
        table.style.display = "block";
        botonMostrar.textContent = "Nueva Reserva";
        botonMostrar.classList.remove("btn-success");
        botonMostrar.classList.add("btn-primary");
    }
}

function eliminarReserva(id) {
    $.ajax({
        type: 'POST',
        url: '../DAL/reservas/eliminarReserva.php',
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