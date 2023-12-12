<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['reservaAdmin'])) {
        try {
            require_once "../../include/functions/recoge.php";
            $id = recogePost("inputId");
            $nombre = recogePost("nombre");
            $telefono = recogePost("telefono");
            $correo = recogePost("correo");
            $fecha = recogePost("fecha");
            $servicio = recogePost("servicio");

            if (!empty($id) && !empty($nombre) && !empty($telefono) && !empty($correo) && !empty($fecha) && !empty($servicio)) {
                require_once "reserva.php";
                if (actualizarReserva($id, $nombre, $telefono, $correo, $fecha, $servicio)) {
                    header('Location: ../../admin/reservas.php');
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
