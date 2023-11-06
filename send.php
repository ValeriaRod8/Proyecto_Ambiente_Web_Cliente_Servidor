<?php

/* include("conexion.php");

if(isset($_POST['send'])){
  if (
       strlen($_POST['name']) >= 1 &&
         strlen($_POST['phone']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
                strlen($_POST['message']) >= 1
  ) {
       $name = trim($_POST['name']);
         $phone = trim($_POST['phone']);
            $email = trim($_POST['email']);
                $message = trim($_POST['message']);
            $consulta = "INSERT INTO datos (nombre, telefono, email, mensaje) VALUES ('$name','$phone','$email','$message')";
            $resultado = mysqli_query($conex,$consulta);

            
  }

} */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['send'])) {
    try {
      require_once "include/functions/recoge.php";
      $nombre = recogePost("name");
      $telefono = recogePost("phone");
      $email = recogePost("email");
      $detalle = recogePost("message");

      if (!empty($nombre) && !empty($telefono) && !empty($email) && !empty($detalle)) {
        require_once "DAL/consulta.php";
        if(insertConsulta($nombre, $telefono, $email, $detalle)) {
          echo 'Consulta Enviada Correctamente';
        }
      }
    } catch (\Throwable $th) {
      //throw $th;
    }
  }
}


?>