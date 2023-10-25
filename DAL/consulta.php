<?php

require_once "conexion.php";

function testConectar() {
    try {
        $oConexion = Conecta();
        echo "Conectado a la Base de Datos";

    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }
}