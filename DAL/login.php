<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        require_once "../include/functions/recoge.php";
        $correo = recogePost("email");
        $password = recogePost("password");

        if (!empty($correo) && !empty($password)) {
            autenticarUsuario($correo, $password);
        } else {
            echo "Correo o Contraseña Incorrectos";
        }
    } catch (\Throwable $th) {
        echo $th;
    }
}

function autenticarUsuario($pCorreo, $pPassword)
{
    try {
        require_once "conexion.php";
        $query = "SELECT id, nombre, correo, password, rol FROM usuarios WHERE correo = ?";
        $oConexion = Conecta();

        if ($stmt = mysqli_prepare($oConexion, $query)) {
            mysqli_stmt_bind_param($stmt, "s", $pCorreo);
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);
                if ($initSession = mysqli_fetch_assoc($result)) {
                    $auth = password_verify($pPassword, $initSession['password']);

                    if ($auth) {
                        session_start();
                        $_SESSION['rol'] = $initSession['rol'];
                        $_SESSION['nombre'] = $initSession['nombre'];
                        $_SESSION['correo'] = $initSession['correo'];
                        $_SESSION['id'] = $initSession['id'];
                        $_SESSION['login'] = true;

                        switch ($_SESSION['rol']) {
                            case 'Administrador':
                                echo "Administrador";
                                break;
                            case 'Cliente':
                                echo "Cliente";
                                break;
                            default:
                                $_SESSION['rol'] = 'Cliente';
                                echo "Cliente";
                                break;
                        }
                    } else {
                        echo "Correo o Contraseña Incorrectos";
                    }
                } else {
                    echo "Correo o Contraseña Incorrectos";
                }
            } else {
                echo "Error al ejecutar la consulta";
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Error en la preparación de la consulta";
        }
    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }
}

/*function autenticarUsuario($pCorreo, $pPassword)
{
    try {
        $query = "select id, nombre, correo, password, rol from usuarios where correo = '$pCorreo'";
        $initSession = getObjeto($query);

        if ($initSession != null) {
            $auth = password_verify($pPassword, $initSession['password']);

            if ($auth) {
                if ($auth) {
                    session_start();
                    $_SESSION['rol'] = $initSession['rol'];
                    $_SESSION['nombre'] = $initSession['nombre'];
                    $_SESSION['correo'] = $initSession['correo'];
                    $_SESSION['id'] = $initSession['id'];
                    $_SESSION['login'] = true;

                    switch ($_SESSION['rol']) {
                        case 'Administrador':
                            echo "Administrador";
                            //header("Location: ../admin/admin.php");
                            break;
                        case 'Cliente':
                            echo "Cliente";
                            //header("Location: ../index.php");
                            break;
                        default:
                            $_SESSION['rol'] = 'Cliente';
                            echo "Cliente";
                            //header("Location: ../index.php");
                            break;
                    }
                } else {
                    echo "Error al Iniciar Sesión";
                }
            } else {
                echo "Correo o Contraseña Incorrectos";
            }
        } else {
            echo "Correo o Contraseña Incorrectos";
        }
    } catch (\Throwable $th) {
        echo $th;
    }
}*/

function getObjeto($sql)
{
    try {
        require_once "conexion.php";
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {

            if (!$result = mysqli_query($oConexion, $sql)) die();

            $retorno = null;

            while ($row = mysqli_fetch_array($result)) {
                $retorno = $row;
            }
        }
    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }
    return $retorno;
}
