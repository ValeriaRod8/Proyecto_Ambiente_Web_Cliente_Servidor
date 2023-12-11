<?php

if (!isset($_POST['oculto'])) {
    exit();
}

require_once '../DAL/conexion.php';


$db = Conecta();

if (!$db) {
    die("Error al conectar a la base de datos.");
}

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$servicio = $_POST['servicio'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$mensaje = $_POST['mensaje'];
$estado = $_POST['estado'];

$consulta = mysqli_prepare($db, "SELECT COUNT(*) FROM citas WHERE fecha = ? AND hora = ?");
mysqli_stmt_bind_param($consulta, "ss", $fecha, $hora);
mysqli_stmt_execute($consulta);
mysqli_stmt_bind_result($consulta, $existeCita);
mysqli_stmt_fetch($consulta);
mysqli_stmt_close($consulta);

if ($existeCita > 0) {
    header('Location: ../ErrorCita.php');
    echo 'Espacio ocupado.';
} else {

 
    $sentencia = mysqli_prepare($db, "INSERT INTO citas(nombre, apellidos, correo, servicio, fecha, hora, mensajeadicional, estado) VALUES(?,?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($sentencia, "ssssssss", $nombre, $apellidos, $correo, $servicio, $fecha, $hora, $mensaje, $estado);

    if (mysqli_stmt_execute($sentencia)) {
        header('Location: ../RegistroCita.php'); 
    } else {
        echo 'Error al insertar datos: ' . mysqli_error($db);
    }
}


Desconecta($db);

?>

<hr>
<a href="Citas.php" class="btn btn-warning">Regresar</a>
