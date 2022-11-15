<?php

  include_once '../../../../back-end/modelos/cliente.php';
  

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Clientes casa Xavier</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

      <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!--   Icono casa Xavier en la pestaña-->
  <link rel="icon" type="image/x-icon" href="../../plumaFavicon.ico">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />



    <!-- Custom styles for this template -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
  
    <link id="pagestyle" href="../../../material-dashboard-master/assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

    <link rel="stylesheet" href="estilos.css">
  </head>

 

<body class="bg-gray-100">


<?php  
      include_once('../panel-control/aside.php');
    ?>  





<main class="main-content border-radius-lg ">
  <div class="container-fluid py-4 pt-0">
    <div class="row">
      <div class="col-lg-10 mx-auto position-relative z-index-2">
        <div class="card card-plain mb-0">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <h2 class=" mb-0">Clientes  </h2>
                  <p>Usuario: Administrador </p>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-5 col-sm-5">
            <div class="card  mb-2">
              <div class="card-header p-3 pt-2 ">
                <?php  
                  include_once('../pluma/crear-dash.php');
                ?>  
                <div class="text-start pt-1">
                  <p class="text-sm mb-0 text-capitalize">Clientes</p>
                  <h4 class="mb-0">Registrar cliente</h4>
                </div>
              </div>
                <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0">Nuevo</p>
              </div>
            </div>

          </div>

          <div class="col-lg-5 col-sm-5 ">



            <div class="card  mb-2">
              <div class="card-header p-3 pt-2 ">
                <div class="text-start pt-1">
                  <p class="text-sm mb-0 text-capitalize">Mantenimiento</p>
                  <h4 class="mb-0">Asignar servicio</h4>
                </div>
              </div>
                <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0">Nuevo</p>
              </div>
              
              <?php  
                  include('crear-dash.php');
                ?>  
            </div>

          </div>
        </div>


        <div class="row mt-4"> 
          <div class="col-10">
            <div class="card mb-4 ">
              <h4 class="col-6 mx-auto text-center ">Clientes registrados</h4>
                <div class="row">
                  <div class="col-12 mx-auto">
          
  <?php
  include_once 'data.php';
  include_once 'actualizar.php';
  include_once 'borrar.php';
  ?>
                  </div>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <?php
  include_once '../panel-control/footer.php';
  ?>

  </div>

          
</main>



  </body>
</html>