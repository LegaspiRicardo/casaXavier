
<?php

if(isset($_GET['resultado'])){
    echo $_GET['resultado'];
}  

    $informe=new Informe();
    if(isset($_GET['id_informe']) && isset($_GET['contactado'])){
    $informe->id_informe=$_GET['id_informe'];
    $informe=$informe->leer_id();
    

?>


<!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
  Actualizar producto
</button>    -->

<script>
$(document).ready(function(){
$("#exampleModal14").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

        <div class="modal-header">
            <h3 class="modal-title mx-auto" id="exampleModalLabel">Contactado </h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

    <form class="formulario mx-auto needs-validation" novalidate action="../../../../back-end/controladores/informes_controlador.php" method="POST"  >
        <input type="hidden" name="opcion" value="3">
        <input type="hidden" name="id_informe" value="<?php echo $informe->id_informe?>">
        
        <label for="correo" class="col-12 mb-0 mt-2">Correo:</label>
        <input type="mail" name="correo" class="col-12 form-control" value="<?php echo $informe->correo?>">
        
        <label for="telefono" class="col-12 mb-0 mt-2">Telefono:</label>
        <input type="text" name="telefono" class="col-12 form-control" value="<?php echo $informe->telefono?>">
        
        <label for="mensaje" class="col-12 mb-0 mt-2">Mensaje:</label>
        <textarea name="mensaje" id="mensaje" cols="25" rows="5" class="col-12 form-control mb-2" value="<?php echo $informe->mensaje?>"><?php echo "$informe->mensaje"?> </textarea>

        <label for="estatus" class="col-6 mb-0 mt-2 text-center">Estatus:</label>
            <select name="estatus" class="form-control col-8 mx-auto text-center mb-3 bg-success texto-blanco" >
                <option value="Contactado" class="texto-blanco">Contactado</option>
            </select>

        <div class="modal-footer">
            <input type="submit" class=" col-8 btn btn-info mx-auto" value="Confirmar ">
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