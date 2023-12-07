<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['citaUsuario']) || isset($_POST['citaAdmin'])) {
    try {
      require_once "../../include/functions/recoge.php";
      $especialista = recogePost("inputEspecialista");
      $correoEspecialista = recogePost("inputCorreoEspecialista");
      $correoCliente = recogePost("inputCorreoCliente");
      $especialidad = recogePost("inputEspecialidad");
      $descripcion = recogePost("inputDescripcion");
      $fecha = recogePost("inputFecha");
      $notas = recogePost("inputNotas");

      if (!empty($especialista) && !empty($correoEspecialista) && !empty($correoCliente) && !empty($especialidad) && !empty($descripcion) && !empty($fecha) && !empty($notas)) {
        require_once "citas.php";
        if (crearCita($especialista, $correoEspecialista, $correoCliente, $especialidad, $descripcion, $fecha, $notas)) {
          if (isset($_POST['citaUsuario'])) {
            header('Location: ../../index.php');
          } elseif (isset($_POST['citaAdmin'])) {
            header('Location: ../../admin/listarcitas.php');
          }
        }
      }
    } catch (\Throwable $th) {
      // Manejar la excepción según tus necesidades
      echo "Error al procesar la solicitud";
    }
  }
}
?>