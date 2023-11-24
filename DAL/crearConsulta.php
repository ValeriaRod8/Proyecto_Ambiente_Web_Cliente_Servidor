<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['consultaUsuario']) || isset($_POST['consultaAdmin'])) {
    try {
      require_once "../include/functions/recoge.php";
      $nombre = recogePost("inputNombre");
      $telefono = recogePost("inputTelefono");
      $correo = recogePost("inputCorreo");
      $detalle = recogePost("inputDetalle");

      if (!empty($nombre) && !empty($telefono) && !empty($correo) && !empty($detalle)) {
        require_once "consulta.php";
        if (crearConsulta($nombre, $telefono, $correo, $detalle)) {
          if (isset($_POST['consultaUsuario'])) {
            header('Location: ../index.php');
          } elseif (isset($_POST['consultaAdmin'])) {
            header('Location: ../admin/consultas.php');
          }
        }
      }
    } catch (\Throwable $th) {
      //throw $th;
    }
  }
}
