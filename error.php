<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cita Registrada</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">CITA REGISTRADA</h4>

                <?php
             
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
              
                    $nombre = $_POST["nombre"];
                    $apellidos = $_POST["apellidos"];
                    $correo = $_POST["correo"];
                    $servicio = $_POST["servicio"];
                    $fecha = $_POST["fecha"];
                    $hora = $_POST["hora"];
                    $mensaje = $_POST["mensaje"];

                    echo "<p><strong>Nombre:</strong> $nombre</p>";
                    echo "<p><strong>Apellidos:</strong> $apellidos</p>";
                    echo "<p><strong>Correo:</strong> $correo</p>";
                    echo "<p><strong>Servicio:</strong> $servicio</p>";
                    echo "<p><strong>Fecha:</strong> $fecha</p>";
                    echo "<p><strong>Hora:</strong> $hora</p>";
                    echo "<p><strong>Mensaje Adicional:</strong> $mensaje</p>";
                } else {
                    echo "<p>No se han recibido datos del formulario.</p>";
                }
                ?>

                <hr>
                <a href="form_insert.php" class="btn btn-warning">Regresar</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
