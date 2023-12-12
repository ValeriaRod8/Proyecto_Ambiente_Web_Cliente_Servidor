<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['productoUsuario']) || isset($_POST['crearProducto'])) {
        try {
            require_once "../../include/functions/recoge.php";

            $nombre = isset($_REQUEST['inputNombre']) ? $_REQUEST['inputNombre'] : '';
            $detalle = isset($_REQUEST['inputDetalle']) ? $_REQUEST['inputDetalle'] : '';         
            
            // Verificar si 'inputImagen' está definido antes de intentar acceder a él
            $nombreImagenTemporal = isset($_FILES['inputImagen']['tmp_name']) ? $_FILES['inputImagen']['tmp_name'] : '';
            $imagenURL = 'server/archivos/' . $_FILES['inputImagen']['name'];
            $precio = isset($_REQUEST['inputPrecio']) ? $_REQUEST['inputPrecio'] : '';

            echo 'Antes de llamar a actualizarProducto'; // Mensaje de depuración

            if (!empty($nombre) && !empty($detalle) && !empty($imagenURL) && !empty($imagenURL)) {
                require_once "producto.php";

                // Llamar a la función para actualizar el producto
                if (actualizarProducto($codigo, $nombre, $detalle, $imagen, $precio)) {
                    echo 'Después de llamar a actualizarProducto'; // Mensaje de depuración

                    // Mover el archivo al servidor
                    move_uploaded_file($nombreImagenTemporal, '../../server/archivos/' . $_FILES['inputImagen']['name']);

                    if (isset($_POST['productoUsuario'])) {
                        header('Location: ../../index.php');
                    } elseif (isset($_POST['crearProducto'])) {
                        header('Location: ../../admin/productos.php');
                    }
                } else {
                    echo 'La actualización del producto falló'; // Mensaje de depuración
                }
            } else {
                echo 'Alguno de los campos está vacío. No se puede actualizar el producto'; // Mensaje de depuración
            }
        } catch (\Exception $e) {
            // Manejar errores según tus necesidades
            echo 'Error: ' . $e->getMessage();
            exit();
        }
    }
}
