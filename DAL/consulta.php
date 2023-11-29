<?php

require_once "conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo getJSON();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_REQUEST['request'])) {
        $request = $_REQUEST['request'];
        switch ($request) {
            case "eliminarConsulta":
                $id = $_REQUEST['id'];
                if (eliminarConsulta($id) == true) {
                    echo "Consulta Eliminada Correctamente";
                }
                break;
            case "actualizarConsulta":
                $id = $_REQUEST['id'];
        }
    }
}

function crearConsulta($pNombre, $pCorreo, $pTelefono, $pDetalle)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("insert into consultas (nombre, correo, telefono, detalle) values (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $iNombre, $iCorreo, $iTelefono, $iDetalle);

            $iNombre = $pNombre;
            $iCorreo = $pCorreo;
            $iTelefono = $pTelefono;
            $iDetalle = $pDetalle;

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

function actualizarConsulta($pId, $pNombre, $pCorreo, $pTelefono, $pDetalle)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("UPDATE consultas SET nombre = ?, correo = ?, telefono = ?, detalle = ? WHERE id = ?");
            $stmt->bind_param("ssssi", $iNombre, $iCorreo, $iTelefono, $iDetalle, $iId);

            $iNombre = $pNombre;
            $iCorreo = $pCorreo;
            $iTelefono = $pTelefono;
            $iDetalle = $pDetalle;
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

function eliminarConsulta($pId)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("delete from consultas where id = ?");
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

function getArrayConsulta($sql)
{
    try {
        $oConexion = Conecta();

        //generar la consulta
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

            if (!$result = mysqli_query($oConexion, "SELECT id, nombre, telefono, correo, detalle FROM consultas"))
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
