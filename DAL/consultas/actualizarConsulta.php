<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['consultaAdmin'])) {
        try {
            require_once "../../include/functions/recoge.php";
            $id = recogePost("inputId");
            $nombre = recogePost("inputNombre");
            $telefono = recogePost("inputTelefono");
            $correo = recogePost("inputCorreo");
            $detalle = recogePost("inputDetalle");

            if (!empty($id) && !empty($nombre) && !empty($telefono) && !empty($correo) && !empty($detalle)) {
                require_once "consulta.php";
                if (actualizarConsulta($id, $nombre, $telefono, $correo, $detalle)) {
                    header('Location: ../../admin/consultas.php');
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
