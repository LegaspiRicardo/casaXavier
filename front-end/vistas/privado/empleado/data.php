
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $empleado=new Empleado();
    $empleados=$empleado->leer_todo();
   
    ?>

<!doctype html>
<html lang="en">
    <head>
    <title>Equipo Casa Xavier</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="style.css">

<style>
      .edit{
    font-size: 14px;
    color:black;
    opacity: 0.4;
  }

  .edit:hover{
  color: blue;
  }

  .erase{
    color: red;
    opacity: 0.8;
  }


</style>

	</head>
	<body>
	<section class="ftco-section mt-0 pt-0 col-8 mx-auto">
		<div class="container">
			<div class="row">
				<div class="col-12 ">
					<div class="table-wrap">
						<table class="table table-responsive-xl">
                            <thead>
                                <tr class="bg-secondary">
                                    <th class="text-white">Nombre</th>
                                    <th class="text-white">Puesto</th>
                                    <th class="text-white">Telefono</th>
                                    <th class="text-white">Correo</th>
                                    <th class="text-white">Estatus</th>
                                    <th class="text-secondary"> editar</th>
                                    <th class="text-secondary"> borrar </th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php
      foreach($empleados as $empleado){
      ?>


            <tr class="alert" role="alert">
                <td class="d-flex align-items-center">
                        <div class="pl-3 email">
                            
                        <span><?php echo $empleado->nombres . " " . $empleado->apellido_pat . " " . $empleado->apellido_mat?> </span>
                            <span><?php echo $empleado->id_empleado ?></span>
                        </div>
                </td>
                <td><?php echo $empleado->cargo ?></td>
                <td><?php echo $empleado->telefono ?></td>
                <td><?php echo $empleado->correo ?></td>
                <td class="status"><span class="active">Activo</span></td>
                <td><a href="index.php?id_empleado=<?php echo $empleado->id_empleado ?>&editar" class="edit"> edit</td>
                <td><a href="index.php?id_empleado=<?php echo $empleado->id_empleado ?>&borrar" class="erase"> x  </a></td>
  
                
            </tr>
    <?php 
    }
    ?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>



	</body>
</html>

