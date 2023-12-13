<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        require_once "../../include/functions/recoge.php";

        $codigo = $_REQUEST['inputCodigo'];
        $nombre = $_REQUEST['inputNombre'];
        $detalle = $_REQUEST['inputDetalle'];
        $precio = $_REQUEST['inputPrecio'];
        $imagen = $_FILES['inputImagen']['name'];
        $imagenURL = 'server/archivos/' . $imagen;

        $nombreImagenTemporal = $_FILES['inputImagen']['tmp_name'];

        if (!empty($codigo) && !empty($nombre) && !empty($detalle) && !empty($precio) && !empty($imagen)) {
            require_once "producto.php";

            // Llamar a la función para crear el producto
            if (actualizarProducto($codigo, $nombre, $detalle, $precio, $imagenURL)) {
                // Mover el archivo al servidor
                move_uploaded_file($nombreImagenTemporal, '../../server/archivos/' . $imagen);
                header('Location: ../../admin/productos.php');
            }
        } else {
            header('Location: ../../admin/productos.php');
        }
    } catch (\Throwable $th) {
        // Manejar errores según tus necesidades
        echo json_encode(array('error' => 'Error al procesar el formulario: ' . $th->getMessage()));
    }
}
