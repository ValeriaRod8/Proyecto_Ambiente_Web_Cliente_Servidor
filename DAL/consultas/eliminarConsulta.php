<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_REQUEST['id'])) {
        try {
            require_once "consulta.php";
            $id = $_REQUEST['id'];
            if (eliminarConsulta($id) == true) {
                echo "Consulta Eliminada Correctamente";
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
