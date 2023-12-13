$(document).ready(function () {
    $.ajax({
        url: 'DAL/citas/citaCliente.php',
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
        let tablaCitas = ``;


        citas.forEach((cita) => {
            console.log(cita);
            tablaCitas += `
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" colspan="4">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" colspan="3">
                            ${cita.CorreoCliente}
                        </td>
                    </tr>
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Especialista</th>
                            <th class="text-center" scope="col">Correo Especialista</th>
                            <th class="text-center" scope="col">Especialidad</th>
                        </tr>
                    </thead>
                    <tr>
                        <td class="text-center">
                            ${cita.Especialista}
                        </td>
                        <td class="text-center">
                            ${cita.CorreoEspecialista}
                        </td>
                        <td class="text-center">
                            ${cita.Especialidad}
                        </td>
                    </tr>
                    <thead>
                    <tr>
                        <th class="text-center" colspan="3">Fecha</th>
                    </tr>
                    </thead>
                    <tr>
                        <td class="text-center" colspan="3">
                        ${cita.Fecha}
                        </td>
                    </tr>
                    <thead>
                        <tr>
                            <th class="text-center" colspan="3">Descripción</th>
                        </tr>
                    </thead>
                    <tr>
                        <td colspan="3">
                        ${cita.Descripcion}
                        </td>
                    </tr>
                    <thead>
                        <tr>
                            <th class="text-center" colspan="3">Notas</th>
                        </tr>
                    </thead>
                        <tr>
                            <td colspan="3">
                                ${cita.Notas}
                            </td>
                        </tr>
                </tbody>
            </table>
            `;
        });
        $("#tablaCitas").append(tablaCitas);
    } else {
        $("#tablaCitas").append('<h1>No hay Citas Pendientes</h1>');
    }
}