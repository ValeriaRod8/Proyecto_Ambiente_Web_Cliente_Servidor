function mostrarForm() {
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
        title.textContent = "Nueva Cita";
        button.textContent = "Ver citas";
        table.style.display = "none";
        form.style.display = "block";
        button.classList.remove("btn-primary");
        button.classList.add("btn-success");
    } else {
        // Mostrar la tabla
        title.textContent = "Citas";
        button.textContent = "Nueva Cita";
        table.style.display = "block";
        form.style.display = "none";
        button.classList.remove("btn-success");
        button.classList.add("btn-primary");
    }
}

function eliminarCita(request, id) {
    $.ajax({
        type: 'POST',
        url: '../DAL/citas/citas.php',
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