<?php

require_once "../DAL/factura.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['username'])) {
    $codigo = $_SESSION['codigo'];
    $username = $_SESSION['username'];
    $carrito = json_decode($_POST['carrito'], true);
    if (insertarFactura($codigo, $username, $carrito)) {
        echo json_encode(array('success' => true, 'message' => 'Inserción exitosa', 'carrito' => $carrito));
    } else {
        echo json_encode(array('success' => false, 'message' => 'Error en la inserción'));
    }
    exit();
}
