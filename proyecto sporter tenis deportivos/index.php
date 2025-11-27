<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Completo</title>
</head>
<body>

<h2>Registro de Usuarios</h2>

<form action="registrar.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required><br><br>
    <input type="email" name="correo" placeholder="Correo" required><br><br>
    <input type="text" name="telefono" placeholder="Teléfono" required><br><br>
    <button type="submit">Registrar</button>
</form>

<hr>

<h2>Usuarios Registrados</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>

    <?php
    $sql = $conexion->query("SELECT * FROM usuarios");
    while ($dato = $sql->fetch_object()) {
    ?>
        <tr>
            <td><?= $dato->id ?></td>
            <td><?= $dato->nombre ?></td>
            <td><?= $dato->correo ?></td>
            <td><?= $dato->telefono ?></td>

            <td>
                <a href="editar.php?id=<?= $dato->id ?>">Editar</a> |
                <a href="eliminar.php?id=<?= $dato->id ?>" onclick="return confirm('¿Eliminar?')">Eliminar</a>
            </td>
        </tr>
    <?php } ?>

</table>

</body>
</html>
