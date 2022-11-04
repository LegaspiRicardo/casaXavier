<?php //echo $_GET['resultado']; ?>

<!--------------------- Button trigger modal ------------------>
<div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n2 position-absolute icono-medio">
    <button type="button" class="btn pl-3" data-toggle="modal" data-target="#exampleModal9">
    <i class="material-icons opacity-10 pt-3 pr-2">person_add</i>
    </button>
</div>

<!-- <script>
$(document).ready(function(){
$("#exampleModal1").modal('show');
});
</script> -->
<!------------------------ Styles------------------------------->
<link rel="stylesheet" href="estilos.css">

<style>
    .labels{
        font-family:Sans-serif;
        }

        
</style>

<!------------------------------- Modal --------------------------------->
<div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title mx-auto" id="exampleModalLabel">Registrar cliente</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <div class="modal-body">
            <form class="needs-validation" novalidate action="../../../../back-end/controladores/cliente_controlador.php" method="POST" enctype="multipart/form-data" >

            <input type="hidden" name="opcion" value="1">
    <!------------------------------------Informacion personal------------------------------------------>
        <div class="Subtitulo">
            <h4>Información personal</h4>
        </div>

        <div class="row mt-1">
        
          <div class="col-12 mx-auto pt-3">
            <div class="form-row"> 
              <div class="col">
                <input type="text" class="form-control" id="validationCustom01" name="nombre" required>
                <label for="validationCustom01">Nombre completo</label>
              </div>
            </div>


  
          </div>
        </div>
        
        
        <br>
        <!------------------------------------Contacto------------------------------------------>
        <div class="Subtitulo ">
        <h4 >Contacto</h4>
        </div>
        <div class="form-row"> 
          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom01" name="telefono" required>
            <label for="validationCustom01">Telefono</label>
          </div>

          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom02" name="correo" required>
            <label for="validationCustom02">Correo</label>
          </div>
        </div>

       <br>

  
      <!------------------------------------Modal footer------------------------------------------>
      <div class="modal-footer">
        <input type="submit" class=" col-8 btn btn-info shadow mx-auto text-white" value="Registrar cliente">
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