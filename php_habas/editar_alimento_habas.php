<?php
$id_nutriente = $_POST['id_nutriente'];
$nombre_nutriente = $_POST['nombre_nutriente'];
$valor = $_POST['valor'];

$conexion = mysqli_connect("localhost", "root", "", "foodmp");

for ($i = 0; $i < count($id_nutriente); $i++) {
    $id = $id_nutriente[$i];
    $nombre = $nombre_nutriente[$i];
    $valor = $valor[$i];

    $consulta = "UPDATE habas SET nombre_nutriente='$nombre', valor='$valor' WHERE id_nutriente = '$id'";
    $rta = mysqli_query($conexion, $consulta);
}

header("Location: habas.php");
?>
