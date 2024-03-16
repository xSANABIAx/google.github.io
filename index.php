<?php
// Inicia la sesión
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['google_id'])) {
    // El usuario no está autenticado, redirige a la página de inicio de sesión
    header("Location: index.php");
    exit();
}

// Obtén el nombre de usuario
$userName = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido</h1>
        <p>Hola, <?php echo $userName; ?>!</p>
        <p>¡Has iniciado sesión con éxito!</p>
        <a class="btn btn-danger" href="logout.php">Cerrar sesión</a>
    </div>
</body>
</html>
