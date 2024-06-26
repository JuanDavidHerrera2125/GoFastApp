<?php

// Conexión a la base de datos
    $conex = new mysqli("localhost", "root", "", "gofastappv1.1");

// Verificar errores de conexión
if ($conex->connect_error) {
    die("Error de conexión: " . $conex->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.<br>";
}
?>;