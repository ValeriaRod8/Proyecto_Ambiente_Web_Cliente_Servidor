function mostrarForm() {
    //Titulo de Reservas
    let title = document.getElementById("tituloReservas");
    //Form de Creacion de Reservas (Create)
    let form = document.getElementById("formReservas");
    //Tabla de Reservas (Read)
    let table = document.getElementById("tablaReservas");
    //Boton dinamico (Create/Read)
    let button = document.getElementById("botonMostrar");

    if (table.style.display === "block" || table.style.display === "") {
        // Mostrar el formulario
        title.textContent = "Nueva Reservas";
        button.textContent = "Ver Reservas";
        table.style.display = "none";
        form.style.display = "block";
        button.classList.remove("btn-primary");
        button.classList.add("btn-success");
    } else {
        // Mostrar la tabla
        title.textContent = "Reservas";
        button.textContent = "Nueva Reserva";
        table.style.display = "block";
        form.style.display = "none";
        button.classList.remove("btn-success");
        button.classList.add("btn-primary");
    }
}

function eliminarReserva(request, id) {
    $.ajax({
        type: 'POST',
        url: '../DAL/procesar_reserva.php',
        data: { request: request, id: id },
        success: function (response) {
            //Eliminar la fila de la tabla
            $('[data-id="' + id + '"]').remove();
        },
        error: function (error) {
            console.error('Error en la solicitud AJAX:', error);
        }
    });}



//FALTA EL ACTUALIZAR

