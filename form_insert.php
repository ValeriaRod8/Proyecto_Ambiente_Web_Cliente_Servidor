<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Citas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
        }

        form {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .text-danger {
            color: red;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            height: 38px;
        }

        button {
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button.btn-warning {
            background-color: #ffc107;
        }

        #mensaje-error {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <form action="metodos/insert.php" method="post">
        <p class="text-danger"><b>Rellene todos los campos</b></p>

        <div class="form-group">
            <label for="nombre">Nombre *</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tus nombres" required>
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos *</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escribe tu apellido paterno y materno" required>
            <small class="form-text text-muted">Coloca tus apellidos.</small>
        </div>

        <div class="form-group">
            <label for="correo">Correo *</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="correo@gmail.com" required>
        </div>

        <div class="form-group">
            <label for="servicio">Selecciona un servicio *</label>
            <select class="custom-select" id="servicio" name="servicio" required>
                <option value="" selected>Elige...</option>
                <option value="Pediatria">Pediatria</option>
                <option value="Dermatologia">Dermatologia</option>
                <option value="Cardiologia">Cardiologia</option>
                <option value="Ginecologia">Ginecologia</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
            <div id="mensaje-error" style="color: red;"></div>
        </div>

        <div class="form-group">
            <label for="hora">Hora:</label>
            <select class="form-control" id="hora" name="hora" required>
                <option value="" selected>Elige la hora</option>
                <option value="08:00">08:00 AM</option>
                <option value="09:00">09:00 AM</option>
                <option value="10:00">10:00 AM</option>
                <option value="11:00">11:00 AM</option>
                <option value="1:00">01:00 PM</option>
                <option value="2:00">02:00 PM</option>
                <option value="3:00">03:00 PM</option>
                <option value="4:00">04:00 PM</option>
                <option value="5:00">05:00 PM</option>
            </select>
        </div>

        <div class="form-group">
            <label for="mensaje">Mensaje adicional:</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
        </div>
        <input type="hidden" name="estado" value="Pendiente">
        <input type="hidden" name="oculto" value="1">
        <button type="reset" class="btn btn-warning">Limpiar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function esFechaValida(fecha) {
                return fecha instanceof Date && !isNaN(fecha);
            }

            function validarFecha() {
                var fechaInput = document.getElementById("fecha");
                var partesFecha = fechaInput.value.split('-');
                var fechaSeleccionada = new Date(Date.UTC(partesFecha[0], partesFecha[1] - 1, partesFecha[2]));
                var mensajeError = document.getElementById("mensaje-error");

                if (!esFechaValida(fechaSeleccionada)) {
                    mensajeError.textContent = "Por favor, introduce una fecha válida.";
                    fechaInput.value = "";
                    return;
                }

                var diaSemana = fechaSeleccionada.getUTCDay();

                if (diaSemana !== 1 && diaSemana !== 2 && diaSemana !== 3 && diaSemana !== 4 && diaSemana !== 5) {
                    fechaInput.value = "";
                    mensajeError.textContent = "Este día no se cuenta con servicio, selecciona uno distinto.";
                } else {
                    mensajeError.textContent = "";
                }
            }

            document.getElementById("fecha").addEventListener("change", validarFecha);
        });
    </script>

</body>
</html>