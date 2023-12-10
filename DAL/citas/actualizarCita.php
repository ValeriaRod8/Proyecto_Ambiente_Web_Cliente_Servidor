<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['consultaAdmin'])) {
        try {
            require_once "../../include/functions/recoge.php";
            $id = recogePost("inputId");
            $especialista = recogePost("inputEspecialista");
            $correoEspecialista = recogePost("inputCorreoEspecialista");
            $correoCliente = recogePost("inputCorreoCliente");
            $especialidad = recogePost("inputEspecialidad");
            $descripcion = recogePost("inputDescripcion");
            $fecha = recogePost("inputFecha");
            $notas = recogePost("inputNotas");

            if (!empty($id) && !empty($especialista) && !empty($correoEspecialista) && !empty($correoCliente) && !empty($especialidad) && !empty($descripcion) && !empty($fecha)) {
                require_once "cita.php";
                if (actualizarConsulta($id, $especialista, $correoEspecialista, $correoCliente, $especialidad, $descripcion, $fecha, $notas))) {
                    header('Location: ../../admin/citas.php');
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
