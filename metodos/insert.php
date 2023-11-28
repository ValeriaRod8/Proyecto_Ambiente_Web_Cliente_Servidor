<?php

if (!isset($_POST['oculto'])) {
    exit();
}


include '../DAL/conexion1.php';


$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$servicio = $_POST['servicio'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$mensaje = $_POST['mensaje'];
$estado = $_POST['estado'];


$consulta = $db->prepare("SELECT COUNT(*) FROM reservas WHERE fecha = ? AND hora = ?");
$consulta->execute([$fecha, $hora]);
$existeCita = $consulta->fetchColumn();

if ($existeCita > 0) {
    header('Location: ../error.php');
    echo 'Espacio ocupado.';
} else {

    $sentencia = $db->prepare("INSERT INTO reservas(nombre, apellidos, correo, servicio, fecha, hora, mensajeadicional, estado)
    VALUES(?,?,?,?,?,?,?,?)");
    
    if ($sentencia->execute([$nombre, $apellidos, $correo, $servicio, $fecha, $hora, $mensaje, $estado])) {
        header('Location: ../RegistroExito.php'); 
    } else {
        echo 'Error al insertar datos.';
    }
    
}

?>

<hr>
                <a href="form_insert.php" class="btn btn-warning">Regresar</a>