<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuarios</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlaza tu archivo CSS externo -->
</head>
<body>
    <h1>Filtrar Usuarios</h1>
    <form action="indexMostrar.php" method="get">
        <label for="rol_id">Filtrar por Rol ID:</label>
        <select id="rol_id" name="rol_id">
            <option value="">Todos</option>
            <option value="1">Administrador</option>
            <option value="2">Usuario</option>
            <!-- Agrega más opciones según los roles disponibles -->
        </select><br>

        <label for="orden">Ordenar por Nombre:</label>
        <select id="orden" name="orden">
            <option value="asc">Ascendente</option>
            <option value="desc">Descendente</option>
        </select><br>

        <button type="submit" class="btn-filtrar">Filtrar</button>
    </form>

    <h1>Usuarios Registrados</h1>
    <?php
    include 'view/mostrar.php'; // Incluye el script PHP que muestra la tabla de usuarios
    ?>
</body>
</html>
