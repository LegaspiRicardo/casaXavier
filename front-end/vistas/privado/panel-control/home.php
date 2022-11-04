<?php
  include_once '../../../../back-end/modelos/pluma.php';
?>

<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="../../../material-dashboard-master/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../material-dashboard-master/assets/img/favicon.png">

  <!-- Custom styles for this template -->

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>


  <title>
  Panel de control
  </title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="../../../material-dashboard-master/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../../material-dashboard-master/assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->

  <link id="pagestyle" href="../../../material-dashboard-master/assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
  <link rel="stylesheet" href="estilos.css">

</head>


<body class="g-sidenav-show  bg-gray-100"> 
  <?php
  include_once 'aside.php';
  ?>

<main class="main-content border-radius-lg ">
  <div class="container-fluid py-4 pt-0">
    <div class="row">
      <div class="col-lg-10 mx-auto position-relative z-index-2">
        <div class="card card-plain mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <h2 class=" mb-0">Casa Xavier Admin </h2>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-5 col-sm-5">
            <div class="card  mb-2">
              <div class="card-header p-3 pt-2">  
                <div class="text-start pt-1">
                  <p class="text-sm mb-0 text-capitalize">Facturación</p>
                  <h4 class="mb-0">Vender pluma</h4>
                </div>
              </div>    
                <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0">Generar ticker</p>
              </div>
            </div>

            <div class="card  mb-2">
              <div class="card-header p-3 pt-2 ">
                <?php  
                  include_once('../pluma/crear.php');
                ?>  
                <div class="text-start pt-1">
                  <p class="text-sm mb-0 text-capitalize">Inventario</p>
                  <h4 class="mb-0">Registrar pluma</h4>
                </div>
              </div>
                <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0">Nuevas o existentes</p>
              </div>
            </div>

          </div>

          <div class="col-lg-5 col-sm-5 ">
            <div class="card  mb-2">
              <div class="card-header p-3 pt-2 bg-transparent">
                <div class="icon icon-lg icon-shape bg-gradient-secondary shadow text-center border-radius-xl mt-n2 position-absolute icono-derecha">
                  <i class="material-icons opacity-10">event</i>
                </div>
                <div class="text-start pt-1">
                  <p class="text-sm mb-0 text-capitalize ">Servicios</p>
                  <h4 class="mb-0 ">Asignar servicio</h4>
                </div>
              </div>
              <hr class="horizontal my-0 dark">
              <div class="card-footer p-3">
                <p class="mb-0 ">Mantenimientos y reparaciones</p>
              </div>
            </div>


            <div class="card  mb-2">
              <div class="card-header p-3 pt-2 ">
                <div class="text-start pt-1">
                  <p class="text-sm mb-0 text-capitalize">Clientes</p>
                  <h4 class="mb-0">Registrar cliente</h4>
                </div>
              </div>
                <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0">Nuevo</p>
              </div>
              
              <?php  
                  include('../cliente/crear-dash.php');
                ?>  
            </div>

          </div>
        </div>

        <div class="row mt-4"> 
          <div class="col-10">
            <div class="card mb-4 ">
              <h4 class="col-6 mx-auto text-center ">Inventario</h4>
                <div class="row">
                  <div class="col-12 mx-auto">
                    <?php 
                      include_once('../pluma/data-dash.php');
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
  include_once 'footer.php';
  ?>

  </div>

          
</main>



<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>



<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
  </body>

</html>
