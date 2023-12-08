<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="../assets/css/reserva.css">
</head>

<body>

    <h1>Reservar Servicio</h1>

    
    <form method="post" action="crearReserva.php" autocomplete="off">
    
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" required>

    
    <label for="servicio">Servicio:</label>
    <select id="servicio" name="servicio" required>
    <option value="" disabled selected>Seleccione una opción</option>
    <option value="pediatria">Pediatría</option>
    <option value="ginecologia">Ginecologia</option>
    <option value="dermartologia">Dermartologia</option>
    <option value="cardiologia">Cardiologia</option>
    </select>

    <div class="espacio-adicional"></div>
    <input type="submit" class="btn" name="reservaUsuario">

        <div class="regresar">
        <a href="../index.php">Regresar</a>
        </div>
    </form>

    <script src="js/reserva.js"></script>

</body>

</html>
