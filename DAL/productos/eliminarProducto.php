<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_REQUEST['codigo'])) {
        try {
            require_once "producto.php";
            $codigo = $_REQUEST['codigo'];
            if (eliminarProducto($codigo) == true) {
                echo "Producto Eliminada Correctamente";
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
