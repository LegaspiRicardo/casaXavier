<?php
  include_once '../../back-end/modelos/informes.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--   Icono casa Xavier en la pestaña-->
    <link rel="icon" type="image/x-icon" href="../vistas/plumaFavicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">


    <title>Casa Xavier</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

  <!--------------------------Navbar------------------------------------------------------------>
    <?php  include_once ('componentes/navbar.php')?>
      
  <!--------------------------Imagen Portada---------------------------------------------------->    
    <div class="col-12 w-100 p-0 imagen-por ">
      <img src="imagenes/plumas1-1.jpg" class="col-12 p-0 img-portada d-none d-sm-block" alt="">
      <img src="imagenes/plumas1-2.jpg" class="col-12 p-0 img-portada d-sm-none" alt="">
    </div>

  <!--------------------------Primera Seccion--------------------------------------------------->
    <div class="gris col-12 pt-5 pb-5">
        <div class="col-10 mx-auto pt-3">
            <h1 class="col-10 mx-auto">Escribe bien, escribe Xavier</h1>
        </div>
    </div>

    <!--------------------------Introduccion------------------------------------------------->
    <!-----Hide on smaller screens---------------->
    <div class=" col-12 pt-5 mb-5 mx-auto container d-none d-sm-block">
      <div class="row mb-5">
        <div class="col-6 mx-auto">
          <img src="Imagenes/portada.jpg" class="col-10 ml-5 imagenes" alt="">
        </div>
  
        <div class="col-6  mx-auto mt-5">
          <a href="productos.php" class="texto-amarillo"><h2 class="col-8 mx-auto mt-5 ">Plumas fuente y estilógrafos</h2></a>
          <p class="col-8 mx-auto">Extensa variedad de estilógrafos y plumas fuente</p>
        </div>
      </div>

      <div class="row pt-3">
          <div class="col-6  mx-auto mt-5">
            <a href="servicios.php" class="texto-amarillo "><h2 class="col-8 mx-auto mt-5">Reparación y mantenimiento</h2></a>
            <p class="col-8 mx-auto">Piezas originales para tus plumas y estilógrafos</p>
          </div>

          <div class="col-6 mx-auto">
            <img src="Imagenes/piezas.jpg" class="col-11 mx-auto imagenes" alt="">
          </div>
      </div>
    </div>
    <!----Hide on bigger screens------------------>
    <div class="col-12 mt-5 mb-5 mx-auto container d-sm-none">
      <div class="row mb-5">
        <div class="col-12 mx-auto p-0">
          <img src="Imagenes/portada.jpg" class="col-12 imagenes" alt="">
        </div>
  
        <div class="col-12  mx-auto  mb-3">
          <h2 class="col-12 mx-auto mt-2">Plumas fuente y estilógrafos</h2>
          <p class="col-12 mx-auto">Extensa variedad de estilógrafos y plumas fuente</p>
        </div>
      </div>

      <div class="row pt-3">
        
        <div class="col-12 mx-auto p-0">
          <img src="Imagenes/piezas.jpg" class="col-12 mx-auto imagenes" alt="">
        </div>
          <div class="col-12  mx-auto ">
            <a href="productos.php" class="texto-amarillo"><h2 class="col-12 mx-auto mt-2">Reparación y mantenimiento</h2></a>
            <p class="col-12 mx-auto">Piezas originales para tus plumas y estilógrafos</p>
          </div>

      </div>
    </div>

    <!--------------------------Frase e imagen de fondo------------------------------------------>
    <!--------Hide on smaller screens--------------->
    <div class="imagen-fondo col-12 m-0 p-0  d-none d-sm-block ">
      <img src="imagenes/escribiendo1.jpg" class="bg-img " alt="">
      <div class="col-12 pb-5">
        <div class="col-4 mt-5 pt-5 ml-auto">
          <div class="col-12 ml-auto text-center ">
            <h4 class=" pt-5 mt-5 ">Somos lo que hacemos repetidamente.</h4>
              <h4>La excelencia, entonces, no es un acto.</h4>  
              <h3> Es un hábito.</h3>
            <p class="text-faded">-Aristoteles-</p>
          </div>
        </div>
      </div>
    </div>
    <!--------Hide on bigger screens---------------->
    <div class="imagen-fondo col-12 m-0 p-0 d-sm-none">
      <img src="imagenes/escribiendo1-1.jpg" class="bg-img  " alt="">
      <div class="col-12 pb-5">
        <div class="col-10 mt-5 pt-5 mx-auto ">
          <div class="col-12 mx-auto text-center pt-5">
            <h3 class="col-12 mt-5 pt-5">Somos lo que hacemos repetidamente. La excelencia, entonces, no es un acto. Es un hábito.</h3>
            <p class="text-faded">-Aristoteles-</p>
          </div>
        </div>
      </div>
    </div>

    <!--------------------------Colaboradores--------------------------------------------------->
    <div class="azul col-12 pt-5 pb-3 ">
      <h2 class="col-10 mx-auto borde-solido-amarillo">Marcas disponibles</h2>
        <!---------Hide on bigger screens--------------------->
        <div class="row d-sm-none">
            <p class="col-6 mx-auto pt-4 logo-empresas"><img src="imagenes/Waterman-logo.png" class="empresas mt-3" alt=""></p>
            <p class="col-6 mx-auto pt-4 logo-empresas"><img src="imagenes/sheaffer-logo.png" class="empresas col-3 mx-auto" alt=""></p>
            <p class="col-6 mx-auto pt-4 logo-empresas"><img src="imagenes/Cross-logo.png" class="empresas" alt=""></p>
            <p class="col-6 mx-auto pt-4 logo-empresas"><img src="imagenes/Parker-logo.png" class="empresas" alt=""></p>
        </div>
        <!--------Hide on smaller screens--------------------->
        <div class="row d-none d-sm-block ">
          <div class="row">
            <p class="col-3 mx-auto pt-4 logo-empresas"><img src="imagenes/Waterman-logo.png" class="empresas mt-3" alt=""></p>
              <p class="col-3 mx-auto pt-4 logo-empresas"><img src="imagenes/sheaffer-logo.png" class="empresas col-3 mx-auto" alt=""></p>
              <p class="col-3 mx-auto pt-4 logo-empresas"><img src="imagenes/Cross-logo.png" class="empresas" alt=""></p>
              <p class="col-3 mx-auto pt-4 logo-empresas"><img src="imagenes/Parker-logo.png" class="empresas" alt=""></p>
          </div>
        </div>
    </div>

    <!--------------------------Conocenos-------------------------------------------------------->
    <div class="row gris pb-5 mt-5 pt-3">
      <h2 class="col-10  mx-auto mt-3 borde-solido-amarillo">Ven y conocenos</h2>
      <!--------Hide on smaller screens----------------------->
      <div class="container d-none d-sm-block">
        <div class="row">
          <div class="col mx-auto">
            <p class="col-10 mx-auto mb-3">Juan Manuel 487, Zona Centro, 44100 Guadalajara, Jalisco.</p>
          </div>
          <div class="col-12 mx-auto mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4439.014224469872!2d-103.3452423250005!3d20.679700854186233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1e515f4a3eb%3A0x5ca2f1e43aa729f8!2sCASA%20XAVIER!5e0!3m2!1ses!2smx!4v1666321843352!5m2!1ses!2smx" width="600" height="350" style="border:0;" allowfullscreen="" class="col-12 mx-auto" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <!-------Hide on bigger screens------------------------>
      <div class="col-12 d-sm-none">
        <div class=" mx-auto mapa"> 
          <p class="col-10 mx-auto mb-3">Juan Manuel 487, Zona Centro, 44100 Guadalajara, Jalisco.</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4439.014224469872!2d-103.3452423250005!3d20.679700854186233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1e515f4a3eb%3A0x5ca2f1e43aa729f8!2sCASA%20XAVIER!5e0!3m2!1ses!2smx!4v1666321843352!5m2!1ses!2smx" width="600" height="350" style="border:0;" allowfullscreen="" class="col-11 ml-3" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>




    <!--------------------------Conocenos------------------------------------------------------>
    <!--------Hide on smaller screens------------->
    <div class=" row pt-5 pb-4 d-none d-sm-block">
      <div class="col-12">
        <img src="imagenes/senor.jpg" class="row mx-auto imagen-contacto" alt="">
      </div>
      <div class="col-8 d-inline mx-auto">
        <h2 class="borde-solido-amarillo col-10 mx-auto">Contáctanos  </h2>
        <div class="col-6 mx-auto pt-2">
        <?php
          include ('componentes/contacto-form.php')
          ?>
        </div>
      </div>
    </div>
    <!--------Hide on bigger screens--------------->
    <div class="row pt-4 pb-4 d-sm-none ">
      <img src="imagenes/senor.jpg" class="col-7 mx-auto imagen-contacto" alt="">
      <div class="col-10 mx-auto">
        <div class="contacto ">
          <h2 class="pt-3 mb-0">Contáctanos  </h2>
          <div class="col-12 mx-auto pt-2 ">
          
          <?php
          include ('componentes/contacto-form.php')
          ?>

          </div>
        </div> 
      </div>
    </div>


    <!--------------------------Footer------------------------------------------------------>
    <?php  include_once ('componentes/footer.php')?>

</body>
</html>


