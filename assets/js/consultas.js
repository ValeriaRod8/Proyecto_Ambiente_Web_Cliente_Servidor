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