
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $cliente=new Cliente();
    $clientes=$cliente->leer_todo();
   
    ?>

<style>

.table{
        width:100%;
        max-height:150px;
        overflow: scroll;
        border-collapse:collapse;
        border:1px solid #ddd;
        border-radius:3px;
        background-color:white;
      }


th{
  text-align:left;
  color:white;
  text-shadow:1px 1px black;
  background-color:#6c757d;
  position:sticky;
  top:0;
  
}

  td{
    text-align:center;
    border-bottom: 1px solid #dddd;
  }
  tr:hover {background-color: rgb(121, 172, 210, 0.4);}

  .tableIcon{
  width:40%;
}

.tableIcon1{
  width:70%;
}
th{
    text-align: center;
  }

  .edit{
    font-size: 14px;
    opacity: 0.5;
  }

  .erase{
    color: red;
    opacity: 0.8;
  }

  .edit:hover{
  color: blue;
  }
    </style>
    
	</head>
	<body>
		<div class="col-10 mx-auto">


						<table class="table">
                            <thead class="col-2">
                                <tr class="bg-secondary">
                                    <th class="text-white">Nombre</th>
                                    <th class="text-white">Correo</th>
                                    <th class="text-white">Telefono</th>
                                    <th class="text-secondary"> </th>
                                    <th class="text-secondary">  </th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php
                                    foreach($clientes as $cliente){
                                    ?>


                                                <tr class="alert" role="alert">
                                                    <td class="d-flex align-items-center">
                                                            <div class="pl-3 email">
                                                                
                                                            <span><?php echo $cliente->nombre?> </span>
                                                                <span><?php echo $cliente->id_cliente ?></span>
                                                            </div>
                                                    </td>
                                                    <td><?php echo $cliente->correo ?></td>
                                                    <td><?php echo $cliente->telefono ?></td>
                                                    <td><a href="index.php?id_cliente=<?php echo $cliente->id_cliente ?>&editar" class="edit"> edit</td>
                                                    <td><a href="index.php?id_cliente=<?php echo $cliente->id_cliente ?>&borrar" class="erase"> x  </a></td>
                                                </tr>
                                        <?php 
                                        }
                                        ?>
                            </tbody>
						</table>
		</div>



	</body>
</html>

