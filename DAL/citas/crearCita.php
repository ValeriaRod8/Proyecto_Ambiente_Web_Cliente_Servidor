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

      if (!empty($Especialista) && !empty($CorreoEspecialista) && !empty($CorreoCliente) && !empty($Descripcion)) {
        require_once "cita.php";
        if (crearCita($Especialista, $CorreoEspecialista, $CorreoCliente, $Especialidad, $Descripcion, $Fecha, $Notas)) {
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