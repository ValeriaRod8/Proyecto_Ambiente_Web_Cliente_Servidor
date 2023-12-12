<?php

require_once "../DAL/factura.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['login'])) {
    $id = $_SESSION['codigo'];
    $nombre = $_SESSION['nombre'];
    $carrito = json_decode($_POST['carrito'], true);
    if (insertarFactura($id, $username, $carrito)) {
        echo json_encode(array('success' => true, 'message' => 'Inserción exitosa', 'carrito' => $carrito));
    } else {
        echo json_encode(array('success' => false, 'message' => 'Error en la inserción'));
    }
    exit();
}
