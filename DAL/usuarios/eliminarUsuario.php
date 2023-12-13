<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_REQUEST['id'])) {
        try {
            require_once "usuario.php";
            $id = $_REQUEST['id'];
            if (eliminarUsuario($id) == true) {
                echo "Usuario Eliminado Correctamente";
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}