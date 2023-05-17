<!DOCTYPE html>
<html lang="es-cl">


     
<body style="background-color: rgb(38, 34, 28);>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/estilos_lacteos.css" type="text/css" rel="stylesheet"/>

    <title>Document</title>
   
    



    <header>
      <div class="superior">
          <div class="logo">
              <img src="" alt="">
          </div>
      </div>
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
                  <li><a href="../index (5).php"> Inicio</a></li>
                  <li><a href="inicio_sesion.php">Inicio de sesion</a></li>
                  <li><a href="../HTML/registrarse.html">registrarse</a></li>
                  <a style="color: white; padding-left:45px; padding-top:15px;" href="cerrar_sesion.php">Cerrar sesión</a>
                  <li>
                    
                  
                  </li>
              </ul>
          </nav>
      </div>        

  </header>
    

    




    <div class="titulo_aceites">

        <h1 style="font-family:  'Poppins', sans-serif;"> LACTEOS</h1>


    </div>





    
   


    <div class ="subtitulo_aceites">

        <h3 style=" font-family: 'Poppins', sans-serif;">Tipos de lacteos:</h3>


      

       
    
    </div>


    <div class="wrap column-4 columns">

        <div class="tarjeta_comida" style="background: url(../IMG/yogurt_griego.jpg) center; background-size: cover;">

          <div class="titulo_tarjeta_comida">
            <h3>Yogurt Griego</h3>
            
            
              
              <div class="btn_tarjeta">
                <a href="php_yogurt_griego/yogurt_griego.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/leche.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Leche</h3>
            
            
              
              <div class="btn_tarjeta">
                <a href="php_leche/leche.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/queso.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Queso</h3>
             
            
              
              <div class="btn_tarjeta">
                <a href="php_queso/queso.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/queso_cabra.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Queso de cabra</h3>
            
           
              
              <div class="btn_tarjeta">
                <a href="php_queso_cabra/queso_cabra.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>


        <div class="tarjeta_comida" style="background: url(../IMG/miel.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Miel</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_miel/miel.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>


          <div class="tarjeta_comida" style="background: url(../IMG/mantequilla.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Mantequilla</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_mantequilla/mantequilla.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>


          <div class="tarjeta_comida" style="background: url(../IMG/huevos.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Huevos</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_huevos/huevos.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/yogurt_endulzado.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Yogurt endulzado</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_yogurt_endulzado/yogurt_endulzado.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/queso_crema.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Queso crema</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_queso_crema/queso_crema.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/nata.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Nata</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_nata/nata.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          
    
      </div>

    



       

       

   </div>

</body>


<footer>

<div class="clearfix">
   Pia Mendez y Marcel Jimenez &copy; 2023
</div>

</footer>

</html>