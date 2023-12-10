<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['consultaUsuario']) || isset($_POST['consultaAdmin'])) {
    try {
      require_once "../../include/functions/recoge.php";


      $Especialista = recogePost("inputEspecialista");
      $CorreoEspecialista = recogePost("inputCorreoEspecialista");
      $CorreoCliente = recogePost("inputCorreoCliente");
      $Especialidad = recogePost("inputEspecialidad");
      $Descripcion = recogePost("inputDescripcion");
      $Fecha = recogePost("inputFecha");
      $Notas = recogePost("inputNotas");

      if (!empty($iEspecialista) && !empty($iCorreoEspecialista) && !empty($iCorreoCliente) && !empty($iDescripcion)) {
        require_once "cita.php";
        if (crearConsulta($Especialista, $CorreoEspecialista, $CorreoCliente, $Especialidad, $Descripcion, $Fecha, $Notas)) {
          if (isset($_POST['consultaUsuario'])) {
            header('Location: ../../index.php');
          } elseif (isset($_POST['consultaAdmin'])) {
            header('Location: ../../admin/citas.php');
          }
        }
      }
    } catch (\Throwable $th) {
      //throw $th;
    }
  }
}
