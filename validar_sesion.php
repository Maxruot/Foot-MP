<?php


 $email = $_POST['email'];
 $password = $_POST['password'];

 session_start();
 $_SESSION['email']=$email;

 $conexion=mysqli_connect("localhost","root","","foodmp");

 $consulta ="SELECT * FROM registro WHERE email= '$email' AND password='$password'";
 $resultado =mysqli_query($conexion,$consulta);
 
 $filas=mysqli_num_rows($resultado);

if ($filas){
    
    header("location: sesion_exitosa.php");
}else{
    include("inicio_sesion.php");
    ?>
    <h1 class="bad"> ERROR EN LA AUTENTIFICACION </h1>
    <?php


}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
