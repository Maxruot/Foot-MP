<?php
$user = "root";
$pass = "";
$server = "localhost";
$dbname = "foodmp";

$conexion = new mysqli($server, $user ,$pass , $dbname);

if($conexion->connect_errno){
    die("la conexion fallo".$conexion->connect_errno);
}

$consulta = "SELECT id_alimento, nombre_alimento , calorias, carbohidratos, proteinas , grasas FROM alimentos";

$resultado = $conexion->query($consulta);



?>
<!DOCTYPE html>
<html lang="es-cl">


     
<body style="background-color: rgb(38, 34, 28);>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos_aceite_vegetal.css" type="text/css" rel="stylesheet"/>

    <title>nuevo alimento </title>
   
  





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


<div>
    <form action="agregar_rosquillas.php" method="post">
        <table>
            <tr>
                <td>Ingresar nuevos nutrientes:</td><td></td>
            </tr>
            <tr>
                <td>nombre:</td>
                <td><input type="text" name="nombre_nutriente" id=""></td>
            </tr>
            <tr>
                <td>valor:</td>
                <td><input type="text" name="valor" id=""></td>
            </tr>
          
          
        </table>
        <input style="padding: 10px 20px; background-color: #4CAF50; color: white; border-radius: 4px; font-size: 16px; margin: 0 650px;" type="submit" value="Guardar cambios">


    </form>

    </div>



    


    
      
    



       

       

   

</body>


<footer>

<div class="clearfix">
   Pia Mendez y Marcel Jimenez &copy; 2023
</div>

</footer>

</html>