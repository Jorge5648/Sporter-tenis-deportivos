<?php
include("conexion.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];

$sql = "UPDATE usuarios SET 
        nombre='$nombre', 
        correo='$correo', 
        telefono='$telefono'
        WHERE id=$id";

$conexion->query($sql);

header("Location: index.php");
?>
