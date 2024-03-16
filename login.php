<?php
// Inicia la sesión
session_start();

// Configura las credenciales de Google
$clientId = "TU_CLIENT_ID";
$clientSecret = "TU_CLIENT_SECRET";
$redirectUri = "http://localhost/login.php";

// Verifica si el código de autorización está presente
if (isset($_GET['code'])) {
    // Intercambia el código de autorización por un token de acceso
    $token = json_decode(file_get_contents("https://oauth2.googleapis.com/token?client_id=$clientId&client_secret=$clientSecret&code={$_GET['code']}&redirect_uri=$redirectUri&grant_type=authorization_code"), true);

    // Obtiene la información del usuario
    $userInfo = json_decode(file_get_contents("https://www.googleapis.com/oauth2/v3/userinfo?access_token={$token['access_token']}"), true);

    // Almacena la información del usuario en la sesión
    $_SESSION['google_id'] = $userInfo['sub'];
    $_SESSION['user_name'] = $userInfo['name'];

    // Redirige a la página de bienvenida
    header("Location: welcome.php");
    exit();
}

// Redirige al usuario a la página de inicio de sesión de Google
header("Location: https://accounts.google.com/o/oauth2/v2/auth?client_id=$clientId&redirect_uri=$redirectUri&response_type=code&scope=email%20profile");
