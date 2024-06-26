<?php

$usuario= $_POST["usuario"];
$contrasena= $_POST["contrasena"];

session_start();
$_SESSION["usuario"]=$usuario;

$conex = mysqli_connect("localhost","root","","gofastappv1.1");

$consulta = "SELECT* FROM usuarios WHERE usuario = '$usuario' and '$contrasena'";
$resultado = mysqli_query($conex,$consulta);

$filas = mysqli_fetch_array($resultado);

if($filas["rol_id"]==1 ){ //administrador

    header("location: http://localhost/GOFASTAPPV1.1/frontend/view/administrador.html");
}else

if($filas["rol_id"]==2 ){ //agente

    header("location: http://localhost/GOFASTAPPV1.1/frontend/view/agente.html");
}else
if($filas["rol_id"]==3 ){ //tienda

    header("location: http://localhost/GOFASTAPPV1.1/frontend/view/tienda.html");
}else{
    ?>
    <?php



    include("index.php");
    /*include("frontend/view/admistrador.php");
    include("frontend/view/agente.html");
    include("frontend/view/tienda.html");*/
    ?>
<h1>error</h1>

    <?php
}

mysqli_free_result($resultado);  
mysqli_close($conex); 