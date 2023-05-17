<?php
$nombre_nutriente = $_POST['nombre_nutriente'];
$valor = $_POST['valor'];

$conexion = mysqli_connect("localhost", "root", "", "foodmp");
$consulta = "INSERT INTO queso_cabra (nombre_nutriente, valor)
 VALUES('$nombre_nutriente', '$valor')";
$rta = mysqli_query($conexion, $consulta);
header("Location: queso_cabra.php");
?>