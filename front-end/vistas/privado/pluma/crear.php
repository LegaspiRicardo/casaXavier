<?php //echo $_GET['resultado']; ?>

<!--------------------- Button trigger modal ------------------>
<div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n2 position-absolute icono-derecha">
  <button type="button" class="btn p-0 mt-2" data-toggle="modal" data-target="#exampleModal1">
    <i class="material-icons opacity-10 pt-3">add</i>
  </button>
</div>

<!-- <script>
$(document).ready(function(){
$("#exampleModal1").modal('show');
});
</script> -->
<!------------------------ Styles------------------------------->

<style>
  .labels{
          font-family:Sans-serif;
        }
</style>

<!------------------------------- Modal --------------------------------->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
      <h3 class="modal-title mx-auto" id="exampleModalLabel">Registro plumas</h3>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>

   <div class="modal-body">
     <form class="needs-validation" novalidate action="../../../../back-end/controladores/pluma_controlador.php" method="POST" enctype="multipart/form-data" >

       <input type="hidden" name="opcion" value="1">
       <!------------------------------------Informacion personal------------------------------------------>


      
      <div class="row mt-1 mb-1">
          <div class="col-4 styled-select black rounded ">
            <label for="validationCustom01" class=" col borde_inferior labels mb-0 " >Marca</label>
            <select name="marca" class="form-control" >
                <option value="Sheaffer" >Sheaffer</option>
                <option value="Cross" >Cross</option>
                <option value=" " selected hidden> </option>
            </select>
          </div>

          <div class="col-8 ">
            <label for="validationCustom02" class=" labels mb-0">Modelo</label>  
            <input type="text" class="form-control " id="validationCustom01" name="modelo" required>
          </div>
      </div>       


      <div class="row">

      <div class="col-12 mr-auto">
          <label for="validationCustom02" class=" labels mb-0">Descripcion</label>
          <input type="text" class="form-control pb-5" id="validationCustom01" name="descripcion" required>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <label for="validationCustom01" class="labels mb-0">Precio</label>
          <input type="text" class="form-control " id="validationCustom01" name="precio" required>
        </div>

        <div class="col">
          <label for="validationCustom03" class="labels mb-0">Estatus</label>
          <input type="text" class="form-control" id="validationCustom03" name="estatus">
        </div>
      </div>
 
    </div>
       <br>
      <!------------------------------------Modal footer------------------------------------------>
      <div class="modal-footer">
        <input type="submit" class=" col-8 btn btn-info mx-auto" value="Registrar Pluma">
        <button type="button" class="btn btn-secondary shadow" data-dismiss="modal">Cerrar</button>
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


</body>
</html>