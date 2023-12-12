<?php
require_once '../DAL/login.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$data = json_decode(file_get_contents("php://input"));

// Verificar la autenticación
$userData = autenticarUsuario($data->email, $data->password);

if ($userData != null) {
    // Autenticación exitosa
    $_SESSION['Id'] = $userData['Id'];
    $_SESSION['email'] = $userData['email'];
    $_SESSION['rol'] = $userData['rol'];
    $response = ['success' => true];
} else {
    $response = ['success' => false, 'message' => 'Usuario o contraseña inválidos'];
}

// Devolver la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>

