<?php

require_once "conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_REQUEST['request'])) {
        $request = $_REQUEST['request'];
        switch ($request) {
            case "eliminarReserva":
                $id = $_REQUEST['id'];
                if (eliminarReserva($id) == true) {
                    echo "Reserva Eliminada Correctamente";
                }
                break;
        }
    }
}

function crearReserva($pNombre, $pTelefono, $pCorreo, $pFecha, $pServicio)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("INSERT INTO reserva (nombre, telefono, correo, fecha, servicio) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $iNombre, $iTelefono, $iCorreo, $iFecha, $iServicio);

            $iNombre = $pNombre;
            $iTelefono = $pTelefono;
            $iCorreo = $pCorreo;
            $iFecha = $pFecha;
            $iServicio = $pServicio; 

            if ($stmt->execute()) {
                $retorno = true;
            }
        }
    } catch (\Throwable $th) {
        
    } finally {
        Desconecta($oConexion);
    }

    return $retorno;
}


function eliminarReserva($pIdReserva)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("delete from reserva where id = ?");
            $stmt->bind_param("i", $idReserva);

            $idReserva = $pIdReserva;

            if ($stmt->execute()) {
                $retorno = true;
            }

            $stmt->close();
        }
    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }

    return $retorno;
}

function getArrayReserva($sql)
{
    try {
        $oConexion = Conecta();

        
        if (mysqli_set_charset($oConexion, "utf8")) {

            if (!$result = mysqli_query($oConexion, $sql)) die(); 

            $retorno = array();

            while ($row = mysqli_fetch_array($result)) {
                $retorno[] = $row;
            }
        }
    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }
    return $retorno;
}

function testConectar()
{
    try {
        $oConexion = Conecta();
        echo "Conectado a la Base de Datos";
    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }
}

?>

