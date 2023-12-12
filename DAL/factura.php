<?php

require_once "conexion.php";

function insertarFactura($pCodigoUsuario, $pUsername, $pCarrito)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            // Insertar en la tabla 'facturas'
            $stmtFactura = $oConexion->prepare("INSERT INTO facturas (codigo_usuario, username, total) VALUES (?, ?, ?)");
            $stmtFactura->bind_param("ssd", $iCodigoUsuario, $iUsername, $iTotal);

            $iCodigoUsuario = $pCodigoUsuario;
            $iUsername = $pUsername;
            $iTotal = 0;

            foreach ($pCarrito as $producto) {
                $iTotal += $producto['precio'];
            }

            if (!$stmtFactura->execute()) {
                throw new Exception("Error al insertar en la tabla facturas");
            }

            $iCodigoFactura = $stmtFactura->insert_id; // Obtener el ID de la factura recién insertada

            // Insertar en la tabla 'lineas_facturas' para cada producto en el carrito
            $stmtLineaFactura = $oConexion->prepare("INSERT INTO lineas_facturas (linea, codigo_factura, codigo_producto, subtotal) VALUES (?, ?, ?, ?)");

            $iLinea = 1;
            foreach ($pCarrito as $producto) {
                $iCodigoProducto = $producto['codigo'];
                $iSubtotal = $producto['precio'];

                $stmtLineaFactura->bind_param("iiid", $iLinea, $iCodigoFactura, $iCodigoProducto, $iSubtotal);

                if (!$stmtLineaFactura->execute()) {
                    throw new Exception("Error al insertar en la tabla lineas_facturas");
                }

                $iLinea += 1;
            }
            $retorno = true;
        }
    } catch (Exception $e) {
        error_log($e->getMessage());
    } finally {
        Desconecta($oConexion);
    }

    return $retorno;
}
