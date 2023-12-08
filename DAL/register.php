<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) {
        try {
            require_once "../include/functions/recoge.php";
            $nombre = recogePost("nombre");
            $correo = recogePost("email");
            $password = recogePost("password");
            $confirmPassword = recogePost("password");

            if ($password == $confirmPassword) {
                if (!empty($nombre) && !empty($correo) && !empty($password)) {
                    $passwordHash = password_hash($password, PASSWORD_BCRYPT);
                    if (registrarUsuario($nombre, $correo, $passwordHash)) {
                        header("Location: ../login.php");
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

function registrarUsuario($pNombre, $pCorreo, $pPassword)
{
    $retorno = false;

    try {
        require_once "conexion.php";
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("insert into usuarios (nombre, correo, password) values (?, ?, ?)");
            $stmt->bind_param("sss", $iNombre, $iCorreo, $iPassword);

            $iNombre = $pNombre;
            $iCorreo = $pCorreo;
            $iPassword = $pPassword;

            if ($stmt->execute()) {
                $retorno = true;
            }
        }
    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }

    return $retorno;
}
