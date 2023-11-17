<?php

require_once "conexion.php";

function insertConsulta($pNombre, $pCorreo, $pTelefono, $pDetalle)
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
