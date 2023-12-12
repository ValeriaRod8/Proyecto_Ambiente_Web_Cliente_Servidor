<?php

require_once "../DAL/productos/producto.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre = $_REQUEST['inputNombre'];
    $detalle = $_REQUEST['inputDetalle'];
    $precio = $_REQUEST['inputPrecio'];
    $imagen = $_FILES['inputImagen']['name'];
    $imagenURL = 'server/archivos/' . $imagen;
    $nombreImagenTemporal = $_FILES['inputImagen']['tmp_name'];

    crearProducto($nombre, $detalle, $precio, $imagenURL);
    move_uploaded_file($nombreImagenTemporal, 'archivos/' . $imagen);
}
