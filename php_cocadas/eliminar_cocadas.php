<?php
$id_nutriente = $_GET['id'];

$conexion = mysqli_connect("localhost", "root", "", "foodmp");
$consulta = "DELETE FROM cocadas WHERE id_nutriente = '$id_nutriente'";
$rta = mysqli_query($conexion, $consulta);
header("Location: cocadas.php");
?>


