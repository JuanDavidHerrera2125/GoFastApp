<?php
    $conex = new mysqli("localhost", "root", "", "gofastappv1.1");

// Procesar el filtro si se ha enviado
$condicion = "";
if (isset($_POST['filtrar'])) {
    $rol_id = $_POST['rol_id'];
    if (!empty($rol_id)) {
        $condicion = "WHERE rol_id = '$rol_id'";
    }
}

// Consulta SQL para obtener usuarios según la condición de filtro
$sql = "SELECT id, nombre, apellido, documento, telefono, direccion, email, fechaNacimiento, usuario, rol_id FROM usuarios $condicion ORDER BY nombre ASC";
$resultado = $conex->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    echo "<h1>Usuarios Registrados</h1>";

    // Formulario de filtrado
    echo "<form method='post'>";
    echo "<label for='rol_id'>Filtrar por Rol:</label>";
    echo "<select id='rol_id' name='rol_id'>";
    echo "<option value=''>Todos</option>";
    echo "<option value='1'>Administrador</option>";
    echo "<option value='2'>Agente</option>";
    echo "<option value='3'>Tienda</option>";
    // Puedes agregar más opciones según los roles disponibles
    echo "</select>";
    echo "<button type='submit' name='filtrar'>Filtrar</button>";
    echo "</form>";

    // Tabla de usuarios
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Documento</th><th>Teléfono</th><th>Dirección</th><th>Email</th><th>Fecha de Nacimiento</th><th>Usuario</th><th>Rol ID</th><th>Acciones</th></tr>";

    // Mostrar resultados
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nombre"] . "</td>
                <td>" . $row["apellido"] . "</td>
                <td>" . $row["documento"] . "</td>
                <td>" . $row["telefono"] . "</td>
                <td>" . $row["direccion"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["fechaNacimiento"] . "</td>
                <td>" . $row["usuario"] . "</td>
                <td>" . $row["rol_id"] . "</td>
                <td>
                    <button onclick=\"editarUsuario(" . $row['id'] . ")\">Editar</button>
                    <a href=\"eliminar.php?id=" . $row['id'] . "\" onclick=\"return confirm('¿Estás seguro de eliminar este usuario?')\">Eliminar</a>
                </td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No se encontraron usuarios.</p>";
}

// Cerrar la conexión
$conex->close();
?>

<!-- Script para manejar la edición de usuarios -->
<script>
    function editarUsuario(id) {
        // Redirigir a la página de edición con el ID del usuario
        window.location.href = "editar.php?id=" + id;
    }
</script>
