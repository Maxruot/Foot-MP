

<!DOCTYPE html>
<html lang="es-cl">


     
<body style="background-color: rgb(38, 34, 28);">
    

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/estilos2.css" type="text/css" rel="stylesheet"/>

    <title>inicio</title>
   
    



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
                    <li><a href="index (5).php"> Inicio</a></li>
                    <li><a href="PHP/inicio_sesion.php">Inicio de sesion</a></li>
                    <li><a href="HTML/registrarse.html">registrarse</a></li>
                    <a style="color: white; padding-left:45px; padding-top:15px;" href="PHP/cerrar_sesion.php">Cerrar sesión</a>
                    
                    

                </ul>
            </nav>
        </div>        

    </header>

   






    <div class="imagen_slogan">

        <img src="IMG\conoce2.jpg" alt=" imagen comer sano">


    </div>


    <div class="slider">
        <ul>
          <li>
            <div class="slide">
              <img src="IMG\ace.jpg" alt="Aceites y grasas">
              <div class="caption" style="font-family:  'Poppins', sans-serif;" >Aceites y Grasas</div>
            </div>
          </li>
          <li>
            <div class="slide">
              <img src="IMG\frutas.jpg" alt="Frutas">
              <div class="caption" style="font-family:  'Poppins', sans-serif;">Frutas</div>
            </div>
          </li>
          <li>
            <div class="slide">
              <img src="IMG\legumbres.jpg" alt="cereales y legumbres">
              <div class="caption" style="font-family:  'Poppins', sans-serif;">Cereales y Legumbres</div>
            </div>
          </li>
          <li>
            <div class="slide">
              <img src="IMG\carne.jpg" alt="proteinas">
              <div class="caption" style="font-family:  'Poppins', sans-serif;">Proteinas </div>
            </div>
          </li>
          <li>
            <div class="slide">
              <img src="IMG\lacteos.jpg" alt="lacteos">
              <div class="caption" style="font-family:  'Poppins', sans-serif;">Lacteos </div>
            </div>
          </li>
          <li>
            <div class="slide">
              <img src="IMG\dulces.jpg" alt="preparada">
              <div class="caption" style="font-family:  'Poppins', sans-serif;">Dulces</div>
            </div>
          </li>
        </ul>
      </div>



   


    <div class="titulo_tipos_comida">

        <h1 style="font-family:  'Poppins', sans-serif;"> Tipos de Alimentos</h1>


    </div>




    <div class="tipos_comida">
        
             
         
        <li>
            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <a  href="PHP/aceites-grasas.php"> Aceites y Grasas Saturadas</a>
             </button>
        </li>
        <li>
            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <a  href="PHP/frutas.php"> Frutas y Verduras</a>
            </button>
        </li>
        <li>
            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <a href="PHP/legumbres.php"> Legumbres y Cereales</a>
             </button>
        </li>
        <li>
            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <a  href="PHP/proteinas.php"> Carnes</a>
            </button>
        </li>
        <li>
            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                 <a href="PHP/lacteos.php"> Lacteos</a>
            </button>
        </li>
        <li>
            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <a href="PHP/dulces.php"> Dulces</a>
            </button>
        </li>
               

    </div>

    
   


    <div class ="articulo">

        <h2 style="color: rgba(214, 223, 214, 0.767)"  > Es importante conocer la composicion de los alimentos: </h2>

        <h5>porque nos permite entender qué nutrientes y en qué cantidad estamos consumiendo a través de nuestra dieta.
             Saber qué alimentos contienen proteínas, carbohidratos, grasas, vitaminas y minerales nos permite elegir 
             una dieta equilibrada y adecuada para nuestras necesidades nutricionales.
            También es importante tener en cuenta que algunos alimentos pueden contener componentes que pueden ser 
            perjudiciales para la salud en exceso, como el sodio, el azúcar o las grasas saturadas. Conocer la composición
             de los alimentos nos ayuda a controlar y limitar nuestra ingesta de estos componentes y reducir el riesgo de
              enfermedades relacionadas con la alimentación.
              
        </h5>

       
    
    </div>

    <div class="imagen_logo">

        <img src="IMG\logo2.png" alt="logo">

    </div>



       

       

   </div>

</body>


<footer>

<div class="clearfix">
   Pia Mendez y Marcel Jimenez &copy; 2023
</div>

</footer>

</html>