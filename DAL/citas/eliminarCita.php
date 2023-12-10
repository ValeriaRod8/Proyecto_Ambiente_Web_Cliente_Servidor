<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_REQUEST['id'])) {
        try {
            require_once "cita.php";
            $id = $_REQUEST['id'];
            if (eliminarConsulta($id) == true) {
                echo "Cita Eliminada Correctamente";
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
