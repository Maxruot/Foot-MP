<!DOCTYPE html>
<html lang="es-cl">


     
<body style="background-color: rgb(38, 34, 28);>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/estilos_dulces.css" type="text/css" rel="stylesheet"/>

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

        <h1 style="font-family:  'Poppins', sans-serif;"> Dulces</h1>


    </div>





    
   


    <div class ="subtitulo_aceites">

        <h3 style=" font-family: 'Poppins', sans-serif;">Tipos de dulces:</h3>


      

       
    
    </div>


    <div class="wrap column-4 columns">

        <div class="tarjeta_comida" style="background: url(../IMG/helado_vainilla.jpg) center; background-size: cover;">

          <div class="titulo_tarjeta_comida">
            <h3>Helado de vainilla</h3>
            
            
              
              <div class="btn_tarjeta">
                <a href="php_helado_vainilla/helado_vainilla.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/flan_vainilla.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Flan de vainilla</h3>
            
            
              
              <div class="btn_tarjeta">
                <a href="php_flan_vainilla/flan_vainilla.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/mousse_chocolate.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Mousse de chocolate</h3>
             
            
              
              <div class="btn_tarjeta">
                <a href="php_mousse_chocolate/mousse_chocolate.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/pie_limon.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Pie de limon</h3>
            
           
              
              <div class="btn_tarjeta">
                <a href="php_pie_limon/pie_limon.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>


        <div class="tarjeta_comida" style="background: url(../IMG/chocolate.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Chocolate</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_chocolate/chocolate.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>


          <div class="tarjeta_comida" style="background: url(../IMG/cocadas.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Cocadas</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_cocadas/cocadas.php">Ver mas</a>s
                </div>
              
              
            </div>
          </div>


          <div class="tarjeta_comida" style="background: url(../IMG/Brazo_Reina.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Brazo de reina</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_brazo_reina/brazo_reina.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/galletas_chips.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Galletas chips</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_galletas_chips/galletas_chips.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/brownie.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Brownie</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_brownie/brownie.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/galletas_jengibre.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Galletas de jengibre</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_galletas_jengibre/galletas_jengibre.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/donas.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Donas</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_donas/donas.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/rosquillas.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Rosquillas</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_rosquillas/rosquillas.php">Ver mas</a>
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