
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/servicio.css">
    <title>Formulario de Citas</title>
    <style>
        header {
            margin-bottom: -320px; 
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
            font-size: 16px;
        }

        form {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 30px;
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
            padding: 12px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        select {
            height: 38px;
        }

        button {
            padding: 15px 25px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
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
    <header class="header">
        <div class="menu container">
            <a href="index.php" class="logo">
                <img style="margin-top: 10px;" src="assets/img/logo.png" height="60px" width="100px" alt="Logo">
            </a>

            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="assets/img/menu.png" class="menu-img" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php" style="font-weight: bold;">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="pediatria.php">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="Citas.php">Citas</a></li>
                    <li><a href="admin/admin.php">Admin (Opcion Temporal)</a></li>
                </ul>
            </nav>
        </div>
    </header>
    

    <form action="metodos/ConsultaCita.php" method="post">
        <p class="text-danger"><b>Rellene todos los campos</b></p>

        <div class="form-group">
            <label for="nombre">Nombre *</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tus nombres" required>
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos *</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escribe tu apellido paterno y materno" required>
       
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
