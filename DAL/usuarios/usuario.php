<?php

require_once "../conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo getJSON();
}

function crearUsuario($pNombre, $pCorreo, $pPassword, $pRol)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("insert into usuarios (nombre, correo, password, rol) values (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $iNombre, $iCorreo, $iPassword, $iRol);

            $iNombre = $pNombre;
            $iCorreo = $pCorreo;
            $iPassword = $pPassword;
            $iRol = $pRol;

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

function actualizarUsuario($pId, $pNombre, $pCorreo, $pPassword, $pRol)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("UPDATE usuarios SET nombre = ?, correo = ?, password = ?, rol = ? WHERE id = ?");
            $stmt->bind_param("ssssi", $iNombre, $iCorreo, $iPassword, $iRol, $iId);

            $iNombre = $pNombre;
            $iCorreo = $pCorreo;
            $iPassword = $pPassword;
            $iRol = $pRol;
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

function eliminarUsuario($pId)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("delete from usuarios where id = ?");
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

function getArray($sql)
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

function getJSON()
{
    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {

            if (!$result = mysqli_query($oConexion, "SELECT id, nombre, correo, rol FROM usuarios"))
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