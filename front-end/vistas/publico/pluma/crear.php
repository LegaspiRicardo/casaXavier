<?php //echo $_GET['resultado']; ?>

<!--------------------- Button trigger modal ------------------>
<button type="button" class="btn-success" data-toggle="modal" data-target="#exampleModal1">
Registrar Pluma
</button>


<!-- <script>
$(document).ready(function(){
$("#exampleModal1").modal('show');
});
</script> -->
<!------------------------ Styles------------------------------->
<link rel="stylesheet" href="../estilos.css">

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
      <h3 class="modal-title ml-auto" id="exampleModalLabel">Registro Plumas</h3>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>

   <div class="modal-body">
     <form class="needs-validation" novalidate action="../../../../back-end/controladores/pluma_controlador.php" method="POST" enctype="multipart/form-data" >

       <input type="hidden" name="opcion" value="1">
       <!------------------------------------Informacion personal------------------------------------------>
       <div class="Subtitulo">
        <h4>Información pluma</h4>
       </div>


       <div class="row">
        <div class="col-6 ">
            <input type="text" class="form-control " id="validationCustom01" name="modelo" required>
              <label for="validationCustom02" class=" labels">Modelo</label>
          </div>

       </div>
      
      <div class="row mt-1">
          <div class="col-6 styled-select black rounded ">
            <select name="marca" class="form-control" >
                <option value="Sheaffer" >Sheaffer</option>
                <option value="Cross" >Cross</option>
                <option value=" " selected hidden> </option>
            </select>
              <label for="validationCustom01" class=" col borde_inferior labels" >Marca</label>
          </div>


          <div class="col-6 ">
            <input type="text" class="form-control " id="validationCustom01" name="descripcion" required>
              <label for="validationCustom02" class=" labels">Descripcion</label>
          </div>
        </div>       


        <div class="row">
          <div class="col-6">
            <input type="text" class="form-control " id="validationCustom01" name="precio" required>
            <label for="validationCustom01" class="labels">Precio</label>
          </div>

          <div class="col">
            <input type="text" class="form-control" id="validationCustom03" name="estatus">
            <label for="validationCustom03" class="labels">Estatus</label>
          </div>
        </div>
 
    </div>
       <br>
      <!------------------------------------Modal footer------------------------------------------>
      <div class="modal-footer">
        <input type="submit" class=" col-8 btn btn-primary mx-auto" value="Registrar Profesor">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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