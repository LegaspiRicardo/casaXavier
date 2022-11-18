<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Inicio Sesion</title>
        
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


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

    <!--   Icono casa Xavier en la pestaña-->
    <link rel="icon" type="image/x-icon" href="../../plumaFavicon.ico">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    
  </head>



  
  <body class="pt-0">
    
    <form class="form-signin"  method="POST" action="../../../../back-end/controladores/empleado_controlador.php">



    
    <input type="hidden" name="opcion" value="4">  

    
    <div class="text-center mb-3 pb-4">
      <img class="mb-4" src="../../../material-dashboard-master/assets/img/logo.png" alt="" width="150" height="150">
      <h1 class="h3 mb-3 font-weight-normal ">Equipo Casa Xavier</h1>
    </div>


<div>

  

<div class="mb-3">
  <h6 class="mt-3" >Seleccione su puesto:</h6>
    <label for="inputPuesto" class="sr-only">Puesto</label>
    <select name="cargo" id="inputPuesto" class="form-control text-center" placeholder="Puesto" required>
      <option>Admin</option>
      <option>Ventas</option>
      <option>Técnico</option>
      <option selected hidden> </option>
    </select>
    </div>

  <h6 >Correo electronico:</h6>
  <input type="email" id="inputEmail" name="correo" class="form-control"  required autofocus>

  
  <h6 class="mt-3">Contraseña:</h6>
  <input type="password" id="inputPassword" name="contrasena" class="form-control"  required>

</div>

          <br>



  <input type="submit" class="btn btn-lg btn-primary btn-block mt-4" value="Entrar">
</form>


    
  </body>
</html>
