<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_REQUEST['id'])) {
        try {
            require_once "reserva.php";
            $id = $_REQUEST['id'];
            if (eliminarReserva($id) == true) {
                echo "Reserva Eliminada Correctamente";
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
