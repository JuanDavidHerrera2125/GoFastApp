<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de registro</title>
    <link rel="stylesheet" href="../estilos/registro.css">

</head>

<footer>
    <img id="logo" src="https://tse3.mm.bing.net/th?id=OIP.mu16IxdRM_sh5LHRzEz7aQAAAA&pid=Api&P=0&h=180" alt="Logo"><br>
    <h1>GoFastGo</h1>
    </div>
</footer>

<body>

    <div class="contenedor">
        <h1>¡¡BIENVENIDO!!</h1>
        <h2>Inicia Tu Registro</h2><br>
        <form method="post">

            <div class="input-wrapper">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre">
                <img class="input-icon" src="" alt=""><br><br>

            </div>

            <div class="input-wrapper">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" placeholder="Apellido">
                <img class="input-icon" src="" alt=""><br><br>

            </div>

            <div class="input-wrapper">
                <label for="id">Documento</label>
                <input type="text" name="documento" placeholder="Documento">
                <img class="input-icon" src="" alt=""><br><br>

            </div>

            <div class="input-wrapper">
                <label for="telefono">Teléfono</label>
                <input type="tel" name="telefono" placeholder="Telefono">
                <img class="input-icon" src="" alt=""><br><br>

            </div>

            <div class="input-wrapper">
                <label for="dieccion">Dirección</label>
                <input type="text" name="direccion" placeholder="Direccion">
                <img class="input-icon" src="" alt=""><br><br>

            </div>

            <div class="input-wrapper">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Email">
                <img class="input-icon" src="" alt=""><br><br>

            </div>



            <div class="input-wrapper">
                <label for="fechanac">Fecha de Nacimiento</label>
                <input type="date" name="fechaNacimiento" placeholder="Fecha de Nacimiento">
                <img class="input-icon" src="" alt=""><br><br>

            </div>

            <div class="input-wrapper">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" placeholder="Usuario">
                <img class="input-icon" src="" alt=""><br><br>

            </div>

            <div class="input-wrapper">
                <label for="contraseña">Contraseña</label>
                <input type="password" name="contrasena" placeholder="Contraseña">
                <img class="input-icon" src="" alt="">

            </div>
            <div>
                <label for="rol">
                    <h2>Rol:</h2>
                </label>
                <select class="selec" id="rol" name="rol_id" required>
                    <option value="1">Administrador</option>
                    <option value="2">Agente</option>
                    <option value="3">Tienda</option>
                </select>
                <br><br>
            </div>

            <input class="btn" type="submit" name="register" value="Enviar">
        </form>

    </div>

    <?php
    // Ruta correcta al archivo que se desea incluir
    include __DIR__ . '/registro.php';
    ?>

</body>

<footer>
    <div class="pie">
        <p>Cr 50 N79-86</p>
        <p>GoFastGo</p>
        <p>Bogotá DC</p>
    </div>
    <div class="pie">
        <div>
            <ul>Servicios<ul>
                    <li>Envío</li>
                    <li>Encomiendas</li>
                    <li>Mensajería</li>
                    <li>Servicio 4</li>
                </ul>
            </ul>
        </div>
    </div>
    <div class="pie">
        <br>

        <br>
        <a href="#">Política de servicios</a><br>
        <a href="#">Política de Habeas Data</a>

    </div class="pie">

    <div class="pie">
        <div>
            <img src="frontend\img\wsp1.png">
            <img src="frontend\img\facebook2.png">

        </div>
        <p>GoFastGo 2024</p>
        <p>Todos los derechos reservados ©</p>
    </div>
</footer>

</html>