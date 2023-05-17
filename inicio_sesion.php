<!DOCTYPE html>
<html lang="es-cl">


     
<body>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/estilo_inicio_sesion.css" type="text/css" rel="stylesheet"/>

    <title>Inicio Sesión</title>
   




   
    <header>
        <div class="superior">
            <div class="logo">
                <img src="" alt="">
            </div>
        </div>
        <div class="container__menu">
            <nav class="menu">
                <ul>
                    <li><a href="../index (5).php">Inicio</a></li>
                    <li><a href="inicio_sesion.php">Inicio de sesion</a></li>
                    <li><a href="../HTML/registrarse.html">registrarse</a></li>
                    
                </ul>
            </nav>
        </div>        

    </header>

  

    <form action="validar_sesion.php" method="post" id="form">
        <div class="form">
            <h1>Iniciar Sesión:</h1>
           
            <div class="grupo">
                <input type="email" name="email" id="email" ><span class="barra"></span>
                <label for="">Email</label>
            </div>
            <div class="grupo">
                <input type="password" name="password" id="password" ><span class="barra"></span>
                <label for="">Contraseña</label>
            </div>
            
            
            <button type="submit">iniciar</button>
            <p class="warnings" id="warnings"></p>

          
        </div>
       
    </form>

    

  

</body>


<script src="js/formulario_inicio_sesion.js"></script>


</html>