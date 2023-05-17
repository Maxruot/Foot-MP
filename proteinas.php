<!DOCTYPE html>
<html lang="es-cl">


     
<body style="background-color: rgb(38, 34, 28);>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/estilos_proteinas.css" type="text/css" rel="stylesheet"/>

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

        <h1 style="font-family:  'Poppins', sans-serif;"> CARNES-PROTEINAS</h1>


    </div>





    
   


    <div class ="subtitulo_aceites">

        <h3 style=" font-family: 'Poppins', sans-serif;">Tipos de carnes/proteinas:</h3>


      

       
    
    </div>


    <div class="wrap column-4 columns">

        <div class="tarjeta_comida" style="background: url(../IMG/reineta.jpg) center; background-size: cover;">

          <div class="titulo_tarjeta_comida">
            <h3>Pescado reineta</h3>
            
            
              
              <div class="btn_tarjeta">
                <a href="php_pescado_reineta/pescado_reineta.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/pechuga_pollo.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Pechuga de pollo</h3>
            
            
              
              <div class="btn_tarjeta">
                <a href="php_pechuga_pollo/pechuga_pollo.php">Ver mas</a>
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
    
        <div class="tarjeta_comida" style="background: url(../IMG/atun.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>atun</h3>
            
           
              
              <div class="btn_tarjeta">
                <a href="php_atun/atun.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>


        <div class="tarjeta_comida" style="background: url(../IMG/carne_cerdo.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Carne de cerdo</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_carne_cerdo/carne_cerdo.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>


          <div class="tarjeta_comida" style="background: url(../IMG/salchicha.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Salchicha</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_salchicha/salchicha.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>


          <div class="tarjeta_comida" style="background: url(../IMG/pulpo.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Pulpo</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_pulpo/pulpo.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/jamon_pavo.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Jamon de pavo</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_jamon_pavo/jamon_pavo.php">Ver mas</a>
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