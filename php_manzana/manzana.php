<?php
$user = "root";
$pass = "";
$server = "localhost";
$dbname = "foodmp";

$conexion = new mysqli($server, $user ,$pass , $dbname);

if($conexion->connect_errno){
    die("la conexion fallo".$conexion->connect_errno);
}

$consulta = "SELECT id_nutriente, nombre_nutriente, valor FROM manzana";

$resultado = $conexion->query($consulta);



?>
<!DOCTYPE html>
<html lang="es-cl">


     
<body style="background-color: rgb(38, 34, 28);>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos_aceite_vegetal.css" type="text/css" rel="stylesheet"/>

    <title>manzana tabla </title>
   
    <style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			border: 1px solid black;
			text-align: left;
			padding: 8px;
		}
		th {
			background-color: #ddd;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>





<header>
   
    <div class="container__menu">
    <nav class="menu">
        <ul>
        <li style="color: white; padding-top: 15px";> <?php
                      session_start();
                      if (isset($_SESSION['email'])) {
                          echo "Bienvenido " . $_SESSION['email'] . "!";
                      } else {
                          echo "Bienvenido!";
                      }
                      ?></li>
           <li><a href="../../index (5).php"> Inicio</a></li>
                <li><a href="../inicio_sesion.php">Inicio de sesion</a></li>
                <li><a href="../../HTML/registrarse.html">registrarse</a></li>
                
                

      </ul>
        </nav>
    </div>        

</header>




    




    <div class="titulo_aceites">

        <h1 style="font-family:  'Poppins', sans-serif;"> TABLA NUTRICIONAL</h1>


    </div>

    <?php
if($resultado->num_rows>0){
    echo "<table>";
    echo "<tr><th></th><th>Nombre proteina</th><th>valor</th><th></th><th></th></tr>";
    
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_nutriente"] . "</td>";
        echo "<td>" . $row["nombre_nutriente"] . "</td>";
        echo "<td>" . $row["valor"] . "</td>";
       
        echo "<td><a href=\"eliminar_manzana.php?id=" . $row["id_nutriente"] . "\">Eliminar</a></td>";


        echo "<td><a href=\"editar_manzana.php?id=" . $row["id_nutriente"] . "\">Editar</a></td>";

        echo "</tr>";
    }
    
    echo "</table>";
}

    ?>

    <div id="btn_tabla">

    <button onclick="window.location.href='nuevo_alimento_manzana.php'"
     style="padding: 10px 20px; background-color: #4CAF50; color: white; border-radius: 4px; font-size: 16px; margin: 0 650px;">Agregar Sección</button>
   

    </div>






    


    
      
    



       

       

   </div>

</body>


<footer>

<div class="clearfix">
   Pia Mendez y Marcel Jimenez &copy; 2023
</div>

</footer>

</html>