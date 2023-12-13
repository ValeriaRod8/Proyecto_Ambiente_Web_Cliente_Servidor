<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submitUsuario'])) {
        try {
            require_once "../../include/functions/recoge.php";
            $id = recogePost("inputId");
            $nombre = recogePost("nombre");
            $correo = recogePost("correo");
            $password = recogePost("password");
            $confirmPassword = recogePost("confirmPassword");
            $rol = recogePost("rol");

            if ($password == $confirmPassword) {
                if (!empty($id) && !empty($nombre) && !empty($correo) && !empty($password) && !empty($rol)) {
                    require_once "usuario.php";
                    $passwordHash = password_hash($password, PASSWORD_BCRYPT);
                    if (actualizarUsuario($id, $nombre, $correo, $passwordHash, $rol)) {
                        header('Location: ../../admin/usuarios.php');
                    }
                }
            } else {
                echo "Las Contraseñas No Coinciden";
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }
}