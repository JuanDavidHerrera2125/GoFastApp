<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Bienvenida</title>
    <link rel="stylesheet" href="frontend\estilos\estilos.css">

</head>

<footer>
    <img id="logo" src="https://tse3.mm.bing.net/th?id=OIP.mu16IxdRM_sh5LHRzEz7aQAAAA&pid=Api&P=0&h=180" alt="Logo"><br>
    <h1>GoFastGo</h1>
    </div>
</footer>

<body>


    <div class="contenedor">
        <h2>Iniciar Sesión</h2><br>
        <form action="backend/validar/validar.php" method="post">
            <label for="usuario">Usuario:</label><br><br>
            <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario" required><br><br>

            <label for="contrasena">Contraseña:</label><br><br>
            <input type="password" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña" required><br><br>

            <button class="inicio" type="submit">Iniciar Sesión</button>
        </form><br>

        <form action="frontend/registrar/indexRegistrar.php" method="get">
            <input class="registro" type="submit" value="Registrarse">
        </form><br><br>
    </div>

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