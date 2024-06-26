<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrarse</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<form method="post">

<h2>¡¡Bienvenido!!</h2>
<p>Inicia Tu Registro</p>

<div class="input-wrapper">
    <input type="text" name="nombre" placeholder="Nombre">
    <img class="input-icon" src="" alt=""><br><br>

</div>

<div class="input-wrapper">
    <input type="text" name="apellido" placeholder="Apellido">
    <img class="input-icon" src="" alt=""><br><br>

</div>

<div class="input-wrapper">
    <input type="text" name="documento" placeholder="Documento">
    <img class="input-icon" src="" alt=""><br><br>

</div>

<div class="input-wrapper">
    <input type="tel" name="telefono" placeholder="Telefono">
    <img class="input-icon" src="" alt=""><br><br>

</div>

<div class="input-wrapper">
    <input type="text" name="direccion" placeholder="Direccion">
    <img class="input-icon" src="" alt=""><br><br>

</div> 

<div class="input-wrapper">
    <input type="email" name="email" placeholder="Email">
    <img class="input-icon" src="" alt=""><br><br>

</div>



<div class="input-wrapper">
    <input type="date" name="fechaNacimiento" placeholder="Fecha de Nacimiento">
    <img class="input-icon" src="" alt=""><br><br>

</div>

<div class="input-wrapper">
    <input type="text" name="usuario" placeholder="Usuario">
    <img class="input-icon" src="" alt=""><br><br>

</div>

<div class="input-wrapper">
    <input type="password" name="contrasena" placeholder="Contraseña">
    <img class="input-icon" src="" alt=""><br><br>

</div>

<label for="rol">Rol:</label>
        <select id="rol" name="rol_id" required>
            <option value="1">Administrador</option>
            <option value="2">Agente</option>
            <option value="3">Tienda</option>
        </select><br><br>
    </div>

<input class="btn" type="submit" name="register" value="Enviar">



</form>

<?php
// Ruta correcta al archivo que se desea incluir
include __DIR__ . '/registro.php';
?>

</body>
</html>  