<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['productoUsuario']) || isset($_POST['crearProducto'])) {
        try {
            require_once "../../include/functions/recoge.php";

            $nombre = $_REQUEST['inputNombre'];
            $detalle = $_REQUEST['inputDetalle'];
            $precio = $_REQUEST['inputPrecio'];
            $imagen = $_FILES['inputImagen']['name'];
            $imagenURL = 'server/archivos/' . $imagen;

            $nombreImagenTemporal = $_FILES['inputImagen']['tmp_name'];

            if (!empty($nombre) && !empty($detalle) && !empty($precio) && !empty($imagen)) {
                require_once "producto.php";

                // Llamar a la función para crear el producto
                if (crearProducto($nombre, $detalle, $precio, $imagenURL)) {
                    // Mover el archivo al servidor
                    move_uploaded_file($nombreImagenTemporal, '../../server/archivos/' . $imagen);

                    if (isset($_POST['productoUsuario'])) {
                        header('Location: ../../index.php');
                    } elseif (isset($_POST['crearProducto'])) {
                        header('Location: ../../admin/productos.php');
                    }
                }
            }
        } catch (\Throwable $th) {
            // Manejar errores según tus necesidades
            echo json_encode(array('error' => 'Error al procesar el formulario: ' . $th->getMessage()));
        }
    }
}
