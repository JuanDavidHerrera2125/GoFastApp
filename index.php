<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Iniciar Sesión</h2>
    <form action="backend/validar/validar.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        
        <button type="submit">Iniciar Sesión</button>
    </form><br><br>

    <form action="frontend/registrar/indexRegistrar.php" method="get">
        <input type="submit" value="Registrarse">
    </form><br><br>
</body>
</html>


