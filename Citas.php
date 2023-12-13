<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/servicio.css">
    <title>Formulario de Citas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
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
    <header>
        <div class="navbar">
            <nav class="navbar__links">
                <ul>
                    <a class="navbar__logo" href="index.php">
                        <img src="assets/img/logo.png" alt="Logo">
                    </a>
                </ul>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="pediatria.php">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a class="navbar__link--activo" href="Citas.php">Citas</a></li>
                    <li><a href="productos.php">Tienda</a></li>
                </ul>
                <ul>
                    <li>
                        <a href="carrito.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="black" class="bi bi-cart4" viewBox="0 0 16 16">
                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg>
                        </a>
                    </li>
                    <?php
                    if (isset($_SESSION['login'])) {
                        echo '<li class="navbar__login"><a href="?logout">Cerrar Sesión</a></li>';
                    } else {
                        echo '<li class="navbar__login"><a href="login.php">Iniciar Sesión</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>

    <main style="margin-top: 5rem; font-size: 2rem;">
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
    </main>


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