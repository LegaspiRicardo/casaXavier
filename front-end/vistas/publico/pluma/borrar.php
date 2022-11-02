
<?php

if(isset($_GET['resultado'])){
    echo $_GET['resultado'];
}  

    $pluma=new Pluma();
    if(isset($_GET['id_pluma']) && isset($_GET['borrar'])){
    $pluma->id_pluma=$_GET['id_pluma'];
    $pluma=$pluma->leer_id();
    

?>


<!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
  Actualizar producto
</button>    -->

<script>
$(document).ready(function(){
$("#exampleModal5").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

        <div class="modal-header">
            <h3 class="modal-title mx-auto" id="exampleModalLabel"> Eliminar</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">


            <form class="needs-validation" novalidate action="../../../../back-end/controladores/pluma_controlador.php" method="GET" enctype="multipart/form-data">

            <input type="hidden" name="opcion" value="3">
            <input type="hidden" name="id_pluma" value="<?php echo $pluma->id_pluma?>">
        <!------------------------------------Informacion personal------------------------------------------>
        

        <div class="row mt-1 mb-2">
            <div class="col-4 styled-select black rounded ">
                <label for="validationCustom01" class=" col borde_inferior labels mb-0 " >Marca</label>
                <select name="marca" class="form-control" disabled>
                    
                <option value="<?php echo $pluma->marca?>" selected > <?php echo $pluma->marca?>        </option>
                    <option value="Sheaffer" >Sheaffer</option>
                    <option value="Cross" >Cross</option>
                </select>
            </div>

            <div class="col-8 ">
                <label for="validationCustom02" class=" labels mb-0">Modelo</label>  
                <input type="text" class="form-control " id="validationCustom01" name="modelo" value="<?php echo $pluma->modelo?>" disabled>
            </div>
        </div>       


        <div class="row mb-2">

        <div class="col-12 mr-auto">
            <label for="validationCustom02" class=" labels mb-0">Descripcion</label>
            <input type="text" class="form-control pb-5" id="validationCustom01" name="descripcion" value="<?php echo $pluma->descripcion?>" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
            <label for="validationCustom01" class="labels mb-0">Precio</label>
            <input type="text" class="form-control " id="validationCustom01" name="precio" value="<?php echo $pluma->precio?>" disabled>
            </div>

            <div class="col">
            <label for="validationCustom03" class="labels mb-0">Estatus</label>
            <input type="text" class="form-control" id="validationCustom03" name="estatus" value="<?php echo $pluma->estatus?>" disabled>
            </div>
        </div>

    </div>
        <br>
        <!------------------------------------Modal footer------------------------------------------>
        <div class="modal-footer">
            <input type="submit" class=" col-8 btn btn-danger mx-auto" value="Eliminar pluma">
            <button type="button" class="btn bg-secondary text-white" data-dismiss="modal">Cerrar</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>

        </form>

        </div>
    </div>
</div>










<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

  <?php

  }

  ?>