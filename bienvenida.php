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
        <% if (user) { %>
            <p>Hola, <%= user.displayName %>!</p>
            <p>¡Has iniciado sesión con éxito!</p>
            <a class="btn btn-danger" href="/logout">Cerrar sesión</a>
        <% } else { %>
            <p>No has iniciado sesión.</p>
            <a class="btn btn-primary" href="/">Volver al inicio</a>
        <% } %>
    </div>
</body>
</html>
