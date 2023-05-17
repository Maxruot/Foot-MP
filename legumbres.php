<!DOCTYPE html>
<html lang="es-cl">


     
<body style="background-color: rgb(38, 34, 28);>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/estilos_legumbres.css" type="text/css" rel="stylesheet"/>

    <title>Legumbres y cereales</title>
   
    





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

        <h1 style="font-family:  'Poppins', sans-serif;"> LEGUMBRES Y CEREALES</h1>


    </div>





    
   


    <div class ="subtitulo_aceites">

        <h3 style=" font-family: 'Poppins', sans-serif;">Tipos de legumbres y cereales:</h3>


      

       
    
    </div>


    <div class="wrap column-4 columns">

        <div class="tarjeta_comida" style="background: url(../IMG/trigo.jpg) center; background-size: cover;">

          <div class="titulo_tarjeta_comida">
            <h3>Trigo</h3>
            
            
              
              <div class="btn_tarjeta">
                <a href="php_trigo/trigo.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/arroz.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Arroz</h3>
            
            
              
              <div class="btn_tarjeta">
                <a href="php_arroz/arroz.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/maiz.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Maiz</h3>
             
            
              
              <div class="btn_tarjeta">
                <a href="php_maiz/maiz.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/centeno.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>centeno</h3>
            
           
              
              <div class="btn_tarjeta">
                <a href="php_centeno/centeno.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>


        <div class="tarjeta_comida" style="background: url(../IMG/guisantes_verdes.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Guisantes</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_guisantes/guisantes.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>


          <div class="tarjeta_comida" style="background: url(../IMG/frijoles_negros.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Frijoles Negros</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_frijoles_negros/frijoles_negros.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>


          <div class="tarjeta_comida" style="background: url(../IMG/garbanzos.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Garbanzos</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_garbanzos/garbanzos.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/soya_soja.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Soya/Soja</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_soya/soya.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/guisantes_blancos.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Guisantes Blancos</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_guisantes_blancos/guisantes_blancos.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/lentejas.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Lentejas</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_lentejas/lentejas.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/habas.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Habas</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_habas/habas.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/arverjas.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Arverjas</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_arverjas/arverjas.php">Ver mas</a>
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