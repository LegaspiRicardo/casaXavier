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

    <title>Servicios Casa Xavier</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
        <!--------------------------Navbar------------------------------------------------------------>
        <?php  include_once ('componentes/navbar.php')?>

        <div class="row">
            <h2 class="col-10  pt-4 mx-auto">Mantenimiento y reparación.</h2>
        </div>

        <!--------Hide on smaller screens------------->
        <div class="col-12 d-none d-sm-block">
            <div class="row">
                <div class="col-6 ml-auto mt-4">
                    <img src="imagenes/herramientas1.jpg" class=" col-12  ml-auto" alt="">
                </div>

                <div class="col-4 mx-auto texto-servicios">
                    <h3 class="col-12 mx-auto">Repara tu pluma fuente con nosotros.</h3>
                    <p class="col-12 mx-auto">Contamos con piezas originales y personal capacitado.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-6 ml-auto texto-servicios">
                
                    <h3 class="col-12 mx-auto mb-4">Ofrecemos servicios de:</h3>
                    <p class="col-12 mx-auto mb-0">-Limpieza</p>
                    <p class="col-12 mx-auto mb-0">-Cambio de piezas</p>
                    <p class="col-12 mx-auto mb-0">-Mantenimiento preventivo</p>
                </div>
                <div class="col-5 ml-auto">
                    <img src="imagenes/trabajadores.png" class="col-10  " alt="">
                </div>
            </div>

            <div class="row mt-5 mb-5">
            <div class="col-6 ml-auto mt-4">
                    <img src="imagenes/escribiendo2-2.jpg" class=" col-12  ml-auto" alt="">
                </div>

                <div class="col-4 mx-auto texto-servicios">
                    <h3 class="col-12 mx-auto">Más de 35 años de trayectoria</h3>
                    <p class="col-12 mx-auto">Reflejan la excelente calidad de nuestro trabajo</p>
                </div>

            </div>
        </div>

        <!--------Hide on bigger screens------------->
        <div class="container d-sm-none">
            <div class="row">
                <div class="col-10 mx-auto mt-4">
                    <img src="imagenes/herramientas1.jpg" class=" col-12  ml-auto" alt="">
                </div>

                <div class="col-10 mx-auto texto-servicios">
                    <h3 class="col-12 mx-auto">Repara tu pluma fuente con nosotros.</h3>
                    <p class="col-12 mx-auto">Contamos con piezas originales y personal capacitado.</p>
                </div>
            </div>

            <div class="row mt-5">
            <div class="col-8 mx-auto">
                    <img src="imagenes/trabajadores.png" class="col-12  " alt="">
                </div>
                <div class="col-10 mx-auto texto-servicios">
                
                    <h3 class="col-12 mx-auto mb-4">Ofrecemos servicios de:</h3>
                    <p class="col-12 mx-auto mb-0">-Limpieza</p>
                    <p class="col-12 mx-auto mb-0">-Cambio de piezas</p>
                    <p class="col-12 mx-auto mb-0">-Mantenimiento preventivo</p>
                </div>

            </div>

            <div class="row mt-5 mb-5">
            <div class="col-10 mx-auto mt-4">
                    <img src="imagenes/escribiendo2-2.jpg" class=" col-12  ml-auto" alt="">
                </div>

                <div class="col-10 mx-auto texto-servicios">
                    <h3 class="col-12 mx-auto">Más de 35 años de trayectoria</h3>
                    <p class="col-12 mx-auto">Reflejan la excelente calidad de nuestro trabajo</p>
                </div>

            </div>
        </div>

        <!--------------------------Footer------------------------------------------------------------>
        <?php  include_once ('componentes/footer.php')?>
</body>
</html>