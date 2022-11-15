<?php

  include_once '../../../../back-end/modelos/empleado.php';
  

?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Administración trabajadores">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Equipo casa Xavier</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--   Icono casa Xavier en la pestaña-->
    <link rel="icon" type="image/x-icon" href="../../plumaFavicon.ico">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
    <link id="pagestyle" href="../../../material-dashboard-master/assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

    <link rel="stylesheet" href="estilos.css">
  </head>

<body>
    <?php  
      include_once('../panel-control/aside.php');
    ?>  

  <div class=" col-12 mb-4 mx-auto">
    <h2 class="col-9 ml-auto text-left font-weight-bolder mt-2">Equipo Casa Xavier</h2>
    <div class="row">
      <?php
        include_once ('crear.php');
      ?>
    </div>
    <div class="col-10 mx-auto mt-5">
      <?php
      include_once ('data.php');
      include_once ('actualizar.php');
      include_once ('borrar.php');
      ?>
    </div>
  </div>
<div class=" col-10 ml-auto">

  <?php
    include_once ('../panel-control/footer.php');
  ?>
  
</div>
</body>
</html>