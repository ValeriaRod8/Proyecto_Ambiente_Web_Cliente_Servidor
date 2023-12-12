<?php

require_once "../conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo getJSON();
}

function crearProducto($pNombre, $pDetalle, $pPrecio, $pImagen)
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

    function actualizarProducto($pCodigo, $pNombre, $pDetalle, $pImagen, $pPrecio)
    {
        $retorno = false;
    
        try {
            $oConexion = Conecta();
    
            if ($oConexion) {
                if (mysqli_set_charset($oConexion, "utf8")) {
                    $stmt = $oConexion->prepare("UPDATE productos SET nombre = ?, detalle = ?, imagen = ?, precio = ? WHERE codigo = ?");
                    if (!$stmt) {
                        throw new \Exception('Error al preparar la consulta de actualización del producto');
                    }
    
                    $stmt->bind_param("ssdsi", $iNombre, $iDetalle, $iImagen, $iPrecio, $iCodigo);
    
                    $iNombre = $pNombre;
                    $iDetalle = $pDetalle;                    
                    $iImagen = $pImagen;
                    $iPrecio = $pPrecio;
                    $iCodigo = $pCodigo;
    
                    if ($stmt->execute()) {
                        $retorno = true;
                    } else {
                        throw new \Exception('Error al ejecutar la actualización del producto');
                    }
    
                    $stmt->close(); // Cerrar la declaración preparada
                } else {
                    throw new \Exception('Error al establecer el conjunto de caracteres utf8');
                }
            } else {
                throw new \Exception('Error al conectar con la base de datos');
            }
        } catch (\Throwable $th) {
            throw new \Exception('Error al actualizar el producto: ' . $th->getMessage());
        } finally {
            Desconecta($oConexion);
        }
    
        return $retorno;
    }
    

function eliminarProducto($pCodigo)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("delete from productos where codigo = ?");
            $stmt->bind_param("i", $codigo);

            $codigo = $pCodigo;

            if ($stmt->execute()) {
                $retorno = true;
            }

            $stmt->close();
        }
    } catch (\Throwable $th) {
        echo json_encode(array("success" => false, "message" => "Error al eliminar el producto: " . $th->getMessage()));
    } finally {
        Desconecta($oConexion);
    }

    // Enviar respuesta al cliente
    if ($retorno) {
        echo json_encode(array("success" => true, "message" => "Producto eliminado con éxito"));
    } else {
        echo json_encode(array("success" => false, "message" => "Error al eliminar el producto"));
    }
}

function getArrayProducto($sql)
{
    try {
        $oConexion = Conecta();

        //generar la producto
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

            if (!$result = mysqli_query($oConexion, "SELECT codigo, nombre, detalle, precio, imagen FROM productos"))
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
