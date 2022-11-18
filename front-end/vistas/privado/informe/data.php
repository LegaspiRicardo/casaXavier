
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $informe=new Informe();
    $informes=$informe->leer_todo();
   
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
      <th scope="col">ID</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Mensaje</th>
      <th scope="col">Estatus</th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($informes as $informe){
      ?>
  <tr>
      <td><?php echo $informe->id_informe ?></td>
      <td><?php echo $informe->correo ?></td>
      <td><?php echo $informe->telefono ?></td>
      <td><?php echo $informe->mensaje ?></td>
      <td><?php echo $informe->estatus ?></td>
      <td> <a href="index.php?id_informe=<?php echo $informe->id_informe ?>&editar" class="edit">edit  </a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>