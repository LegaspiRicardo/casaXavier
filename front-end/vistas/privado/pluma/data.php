
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $pluma=new Pluma();
    $plumas=$pluma->leer_todo();
   
    ?>

<style>

.table{
        width:90%;
        max-height:150px;
        overflow: scroll;
        border-collapse:collapse;
        border:1px solid #ddd;
        border-radius:3px;
        background-color:white;
      }


th{
  text-align:left;
  font-size:1em;
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
    
<table class="table  mx-auto">
  <thead>
    <tr class="bg-secondary">
      <th scope="col">id_Pluma</th>
      <th scope="col">Modelo</th>
      <th scope="col">Marca</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Estatus</th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($plumas as $pluma){
      ?>
  <tr>
      <td><?php echo $pluma->id_pluma ?></td>
      <td><?php echo $pluma->modelo ?></td>
      <td><?php echo $pluma->marca ?></td>
      <td><?php echo $pluma->descripcion ?></td>
      <td><?php echo $pluma->precio ?></td>
      <td><?php echo $pluma->estatus ?></td>
      <td> <a href="index.php?id_pluma=<?php echo $pluma->id_pluma ?>&editar" class="edit">edit  </a></td>
      <td> <a href="index.php?id_pluma=<?php echo $pluma->id_pluma ?>&borrar" class="erase"> x  </a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>