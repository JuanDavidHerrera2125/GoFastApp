<?php

include 'C:\xampp\htdocs\GOFASTAPPV1.1\backend\conexion\conexion.php';

if (isset($_POST['register'])) {

    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['documento']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['fechaNacimiento']) >= 1 &&
        strlen($_POST['usuario']) >= 1 &&
        strlen($_POST['contrasena']) >= 1 &&
        strlen($_POST['rol_id'])


    ) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $documento = trim($_POST['documento']);
        $telefono = trim($_POST['telefono']);
        $direccion = trim($_POST['direccion']);
        $email = trim($_POST['email']);
        $fechaNacimiento = trim($_POST['fechaNacimiento']);
        $usuario = trim($_POST['usuario']);
        $contrasena = trim($_POST['contrasena']);
        $rol_id = trim($_POST['rol_id']);





        $consulta = "INSERT INTO usuarios (nombre,apellido,documento,telefono,direccion,email,fechaNacimiento,usuario, contrasena,rol_id) VALUES  ('$nombre','$apellido','$documento','$telefono','$direccion','$email','$fechaNacimiento','$usuario','$contrasena','$rol_id')";

        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
?>
            <h3 class="success">
                ¡¡ Te has registrado exitosamente !!
            </h3>

        <?php
        } else {
        ?>
            <h3 class="error">
                ¡¡ Upss a ocurrido un error !!
            </h3>

        <?php
        }
    } else {
        ?>
        <h3 class="error">
            ¡¡ llena todos los campos !!
        </h3>

<?php
    }
}


?>