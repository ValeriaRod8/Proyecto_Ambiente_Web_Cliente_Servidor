<?php

require_once "../DAL/factura.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['correo'])) {
    $id = $_SESSION['id'];
    $correo = $_SESSION['correo'];
    $carrito = json_decode($_POST['carrito'], true);
    if (insertarFactura($id, $correo, $carrito)) {
        echo json_encode(array('success' => true, 'message' => 'Exito', 'carrito' => $carrito));
    } else {
        echo json_encode(array('success' => false, 'message' => 'Error en la inserción'));
    }
    exit();
} else {
    echo json_encode(array('error' => false, 'message' => 'Usuario Desconocido'));
}
