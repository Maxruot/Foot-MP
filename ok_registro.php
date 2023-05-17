<?php

if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    $user = "root";
    $pass = "";
    $host = "localhost";
    $bd = "foodmp";

    // Conectamos a la base de datos
    $connection = mysqli_connect($host, $user, $pass, $bd);

    if (!$connection) {
        die("No se ha podido conectar con el servidor: " . mysqli_connect_error());
    }

    // Preparamos la consulta SQL para insertar los datos en la tabla
    $instruccion_SQL = "INSERT INTO registro (nombre, email, password, password_confirm) 
                        VALUES ('$nombre','$email','$password','$password_confirm')";

    // Ejecutamos la consulta
    $resultado = mysqli_query($connection, $instruccion_SQL);

    // Verificamos si se insertaron los datos correctamente
    if ($resultado) {
        header("Location: registro_exitoso.php");
        exit();
    } else {
        echo "Error al insertar los datos: " . mysqli_error($connection);
    }

    // Cerramos la conexión a la base de datos
    mysqli_close($connection);
} else {
    echo "<h1>ERROR: Debes completar todos los campos</h1>";
}

echo '<a href="registrarse.html">Volver Atrás</a>';

?>
