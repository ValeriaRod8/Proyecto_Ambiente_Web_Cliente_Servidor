<?php

require_once "../conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo getJSON();
}

function crearReserva($pNombre, $pTelefono, $pCorreo, $pFecha, $pServicio)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("insert into reserva (nombre, telefono, correo, fecha, servicio) values (?, ?, ?, ?, ?)");
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
        echo $th;
    } finally {
        Desconecta($oConexion);
    }

    return $retorno;
}

function actualizarReserva($pId, $pNombre, $pTelefono, $pCorreo, $pFecha, $pServicio)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("UPDATE reserva SET nombre = ?, telefono = ?, correo = ?, fecha = ?, servicio = ? WHERE id = ?");
            $stmt->bind_param("sssssi", $iNombre, $iTelefono, $iCorreo, $iFecha, $iServicio, $iId);

            $iNombre = $pNombre;
            $iTelefono = $pTelefono;
            $iCorreo = $pCorreo;
            $iFecha = $pFecha;
            $iServicio = $pServicio;
            $iId = $pId;

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

function eliminarReserva($pId)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("delete from reserva where id = ?");
            $stmt->bind_param("i", $id);

            $id = $pId;

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

        //generar la Reserva
        if (mysqli_set_charset($oConexion, "utf8")) {

            if (!$result = mysqli_query($oConexion, $sql)) die(); //cancelamos el programa

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

function getJSON()
{
    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {

            if (!$result = mysqli_query($oConexion, "SELECT id, nombre, telefono, correo, fecha, servicio FROM reserva"))
                die();

            $retorno = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $retorno[] = $row;
            }
        }
    } catch (Exception $e) {
        error_log($e->getMessage());
    } finally {
        Desconecta($oConexion);
    }
    return json_encode($retorno);
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
