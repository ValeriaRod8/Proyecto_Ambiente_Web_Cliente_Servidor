<?php

function Conecta() {
    $server = "localhost";
    $user = "vale";
    $password = "valeria123";
    $dataBase = "consultorio";

    //1. Establecer la conexion mysqli
    $conexion = mysqli_connect($server, $user, $password, $dataBase);

    if(!$conexion){
        echo "Ocurrió un error al establecer la conexión" . mysqli_connect_error();
    }

    return $conexion;
}

function Desconecta($conexion) {
    mysqli_close($conexion);
}