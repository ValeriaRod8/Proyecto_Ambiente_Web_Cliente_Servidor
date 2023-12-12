<?php

require_once "conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo getArray();
}

function insertarProducto($pNombre, $pDetalle, $pPrecio, $pImagen)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("insert into productos (nombre, detalle, precio, imagen) values (?, ?, ?, ?)");
            $stmt->bind_param("ssds", $iNombre, $iDetalle, $iPrecio, $iImagen);

            $iNombre = $pNombre;
            $iDetalle = $pDetalle;
            $iPrecio = $pPrecio;
            $iImagen = $pImagen;

            if ($stmt->execute()) {
                $retorno = true;
            }
        }
    } catch (Exception $e) {
        error_log($e->getMessage());
    } finally {
        Desconecta($oConexion);
    }

    return $retorno;
}





function getArray()
{
    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {

            if (!$result = mysqli_query($oConexion, "SELECT codigo, nombre, detalle, imagen, precio FROM productos"))
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
