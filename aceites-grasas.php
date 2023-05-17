
<!DOCTYPE html>
<html lang="es-cl">


     
<body style="background-color: rgb(38, 34, 28);>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/estilos_aceites.css" type="text/css" rel="stylesheet"/>

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

        <h1 style="font-family:  'Poppins', sans-serif;"> ACEITES Y GRASAS SATURADAS</h1>


    </div>


 

    <style>
      #btn_tabla {
          display: flex;
          justify-content: center;
          margin-top: 55px;
      }

      #btn_tabla button {
          padding: 10px 20px;
          background-color: #4CAF50;
          color: white;
          border: none;
          cursor: pointer;
          border-radius: 4px;
          font-size: 16px;
          margin: 0 20px;
      }

      #btn_tabla button:hover {
          background-color: #45a049;
      }
  </style>
   


    <div class ="subtitulo_aceites">

        <h3 style=" font-family: 'Poppins', sans-serif;">Tipos de aceites y grasas saturadas:</h3>

    </div>


    
   



    <div class="wrap column-4 columns">

        <div class="tarjeta_comida" style="background: url(../IMG/aceite_vegetal.jpg) center; background-size: cover;">

          <div class="titulo_tarjeta_comida">
            <h3>Aceite Vegetal</h3>
            
            
              
              <div class="btn_tarjeta">
                <a href="php_aceite_vegetal/aceite_vegetal.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/pizza_peperoni.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Pizza Peperoni</h3>
            
            
              
              <div class="btn_tarjeta">
                <a href="php_pizza_peperoni/pizza_peperoni.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/pollo_frito.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Pollo Frito</h3>
             
            
              
              <div class="btn_tarjeta">
                <a href="php_pollo_frito/pollo_frito.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>
    
        <div class="tarjeta_comida" style="background: url(../IMG/papas_fritas.jpg) center; background-size: cover;">
          <div class="titulo_tarjeta_comida">
            <h3>Papas Fritas</h3>
            
           
              
              <div class="btn_tarjeta">
                <a href="php_papas_fritas/papas_fritas.php">Ver mas</a>
              </div>
            
            
          </div>
        </div>


        <div class="tarjeta_comida" style="background: url(../IMG/aceite_oliva.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Aceite de oliva</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="aceite_oliva.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>


          <div class="tarjeta_comida" style="background: url(../IMG/aceite_coco.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Aceite de coco</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_aceite_coco/aceite_coco.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>


       

        

          <div class="tarjeta_comida" style="background: url(../IMG/completo.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Completo Italiano</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_completo/completo.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/nachos_queso.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Nachos Con Queso</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_nachos_queso/nachos_queso.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/mayonesa.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Mayonesa</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_mayonesa/mayonesa.php">Ver mas</a>
                </div>
              
              
            </div>
          </div>

          <div class="tarjeta_comida" style="background: url(../IMG/ketchup.jpg) center; background-size: cover;">
            <div class="titulo_tarjeta_comida">
              <h3>Ketchup</h3>
              
             
                
                <div class="btn_tarjeta">
                  <a href="php_ketchup/ketchup.php">Ver mas</a>
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