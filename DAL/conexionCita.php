<?php

$pass='';
$user = 'root';
$namedb = 'consultorio';

try {
    $db = new PDO(
        'mysql:host=localhost;dbname='.$namedb, $user, $pass
    );

} catch (Exception $error) {
    echo 'error conexion'.$error->getMessage();
    die();
}
