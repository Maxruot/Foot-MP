<?php
$nombre_nutriente = $_POST['nombre_nutriente'];
$valor = $_POST['valor'];

$conexion = mysqli_connect("localhost", "root", "", "foodmp");
$consulta = "INSERT INTO flan_vainilla (nombre_nutriente, valor)
 VALUES('$nombre_nutriente', '$valor')";
$rta = mysqli_query($conexion, $consulta);
header("Location: flan_vainilla.php");
?>