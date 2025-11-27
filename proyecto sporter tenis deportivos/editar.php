<?php
include("conexion.php");
$id = $_GET["id"];

$sql = $conexion->query("SELECT * FROM usuarios WHERE id=$id");
$dato = $sql->fetch_object();
?>

<!DOCTYPE html>
<html>
<head><title>Editar Usuario</title></head>
<body>

<h2>Editar Usuario</h2>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= $dato->id ?>">

    <input type="text" name="nombre" value="<?= $dato->nombre ?>" required><br><br>
    <input type="email" name="correo" value="<?= $dato->correo ?>" required><br><br>
    <input type="text" name="telefono" value="<?= $dato->telefono ?>" required><br><br>

    <button type="submit">Actualizar</button>
</form>

</body>
</html>
