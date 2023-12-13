<?php
require_once "../conexion.php";

session_start();

if (isset($_SESSION['correo'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo getJSON($_SESSION['correo']);
    }
} else {
    echo "Usuario Desconocido";
}

function getJSON($correoCliente)
{
    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $query = "SELECT Especialista, CorreoEspecialista, CorreoCliente, Especialidad, Descripcion, Fecha, Notas FROM cita WHERE CorreoCliente = ?";
            if ($stmt = mysqli_prepare($oConexion, $query)) {
                mysqli_stmt_bind_param($stmt, "s", $correoCliente);
                if (mysqli_stmt_execute($stmt)) {
                    $result = mysqli_stmt_get_result($stmt);
                    $retorno = array();
                    while ($row = mysqli_fetch_assoc($result)) {
                        $retorno[] = $row;
                    }
                    mysqli_stmt_close($stmt);
                } else {
                    die();
                }
            }
        }
    } catch (Exception $e) {
        error_log($e->getMessage());
    } finally {
        Desconecta($oConexion);
    }

    return json_encode($retorno);
}
