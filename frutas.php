<!DOCTYPE html>
<html lang="es-cl">


     
<body style="background-color: rgb(38, 34, 28);>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/estilos_frutas.css" type="text/css" rel="stylesheet"/>

    <title>Frutas y Verduras</title>
   
    



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

        <h1 style="font-family:  'Poppins', sans-serif;"> FRUTAS Y VERDURAS</h1>


    </div>





    
   


    <div class ="subtitulo_aceites">

        <h3 style=" font-family: 'Poppins', sans-serif;">Tipos de frutas y verduras:</h3>


      

       
    
    </div>


    <div class="wrap column-4 columns">

        <div class="tarjeta_comida" style="background: url(../IMG/manzana.jpg) center; background-size: cover;">

          <div class="titulo_tarjeta_comida">
            <h3>Manzana</h3>
            
            
              
              <div class="btn_tarjeta">
                <a href="php_manzana/manzana.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/melon.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Melon</h3>
            
            
              
              <div class="btn_tarjeta">
                <a href="php_melon/melon.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/frutilla.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Frutilla</h3>
             
            
              
              <div class="btn_tarjeta">
                <a href="php_frutilla/frutilla.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/lechuga.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Lechuga</h3>
            
           
              
              <div class="btn_tarjeta">
                <a href="php_lechuga/lechuga.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>


        <div class="tarjeta_comida" style="background: url(../IMG/zanahoria.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Zanahoria</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_zanahoria/zanahoria.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>


          <div class="tarjeta_comida" style="background: url(../IMG/cereza.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Cereza</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_cereza/cereza.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>


          <div class="tarjeta_comida" style="background: url(../IMG/zapallo_italiano.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Zapallo Italiano</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_zapallo_italiano/zapallo_italiano.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/morron_verde.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Morron Verde</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_morron_verde/morron_verde.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/morron_rojo.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Morron Rojo</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_morron_rojo/morron_rojo.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/esparragos.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Esparragos</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_esparragos/esparragos.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/papa.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>papa</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_papa/papa.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/cebolla.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>cebolla</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_cebolla/cebolla.php">Ver mas</a>
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