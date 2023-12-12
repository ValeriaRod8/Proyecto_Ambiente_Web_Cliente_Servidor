<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['reservaUsuario']) || isset($_POST['reservaAdmin'])) {
    try {
      require_once "../../include/functions/recoge.php";
        $nombre = recogePost("nombre");
        $telefono = recogePost("telefono");
        $correo = recogePost("correo");
        $fecha = recogePost("fecha");
        $servicio = recogePost("servicio");

      if (!empty($nombre) && !empty($telefono) && !empty($correo) && !empty($fecha) && !empty($servicio)) {
        require_once "reserva.php";
        if (crearReserva($nombre, $telefono, $correo, $fecha, $servicio)) {
          if (isset($_POST['reservaUsuario'])) {
            header('Location: ../../index.php');
          } elseif (isset($_POST['reservaAdmin'])) {
            header('Location: ../../admin/reservas.php');
          }
        }
      }
    } catch (\Throwable $th) {
      //throw $th;
    }
  }
}
