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

    <title>Ubicacion Casa Xavier</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

  <!--------------------------Navbar------------------------------------------------------------>
  <?php  include_once ('componentes/navbar.php')?>

        <!--------------------------Conocenos-------------------------------------------------------->
        <div class="row contactanos pb-5 mb-3 mt-2 pt-3">
      <h2 class="col-10  mx-auto mt-3 borde-solido-amarillo">Ven y conocenos</h2>
      <!--------Hide on smaller screens----------------------->
      <div class="container d-none d-sm-block">
        <div class="row">
          <div class="col mx-auto">
            <p class="col-10 mx-auto mb-3">Juan Manuel 487, Zona Centro, 44100 Guadalajara, Jalisco.</p>
            <p class="col-10 mx-auto mb-3">Abrimos lunes-sabado 10:30 am a 6:30 pm </p>
          </div>
          <div class="col-12 mx-auto mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4439.014224469872!2d-103.3452423250005!3d20.679700854186233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1e515f4a3eb%3A0x5ca2f1e43aa729f8!2sCASA%20XAVIER!5e0!3m2!1ses!2smx!4v1666321843352!5m2!1ses!2smx" width="600" height="350" style="border:0;" allowfullscreen="" class="col-12 mx-auto" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <!--------Carrusel----------------------->
          <div id="carouselExampleInterval" class="carousel slide col-8 mx-auto" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="10000">
                <img src="imagenes/casaXavier.png" alt="" class="col-10 ml-5 mt-4">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="imagenes/vitrina1.jpg" alt="" class="col-10 ml-5 mt-4">
              </div>
              <div class="carousel-item">
                <img src="imagenes/vitrina2.jpg" alt="" class="col-10 ml-5 mt-4">
              </div>
              <div class="carousel-item">
                <img src="imagenes/vitrina3.jpg" alt="" class="col-10 ml-5 mt-4">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
        </div>
      </div>
      <!-------Hide on bigger screens------------------------>
      <div class="col-10 d-sm-none mx-auto">
        <div class=" mx-auto mapa"> 
          <p class="col-10 mx-auto mb-3">Juan Manuel 487, Zona Centro, 44100 Guadalajara, Jalisco.</p>
          <p class="col-10 mx-auto mb-3">Abrimos lunes-sabado 10:30 am a 6:30 pm </p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4439.014224469872!2d-103.3452423250005!3d20.679700854186233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1e515f4a3eb%3A0x5ca2f1e43aa729f8!2sCASA%20XAVIER!5e0!3m2!1ses!2smx!4v1666321843352!5m2!1ses!2smx" width="600" height="350" style="border:0;" allowfullscreen="" class="col-12 mx-auto" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-12 mx-auto">

      <!--------Carrusel----------------------->
      <div id="carouselExampleInterval" class="carousel slide col-12 mx-auto " data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="3000">
                <img src="imagenes/casaXavier.png" alt="" class="col-12 mt-4">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="imagenes/vitrina1.jpg" alt="" class="col-12 mt-4">
              </div>
              <div class="carousel-item">
                <img src="imagenes/vitrina2.jpg" alt="" class="col-12 mt-4">
              </div>
              <div class="carousel-item">
                <img src="imagenes/vitrina3.jpg" alt="" class="col-12 mt-4">
              </div>
            </div>

          </div>
        
        </div>
      </div>

      <p class="col-10 mx-auto mt-3">Contamos con gran variedad de plumas fuente, roller y lapiceros.</p>
      <h3 class="col-10 mx-auto">¡Visitanos!</h3>
    </div>
    
  <!--------------------------Footer------------------------------------------------------------>
  <?php  include_once ('componentes/footer.php')?>


</body>
</html>