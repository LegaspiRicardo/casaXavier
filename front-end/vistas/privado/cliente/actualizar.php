<?php 
    if(isset($_GET['resultado'])){
        echo $_GET['resultado'];
    }  

        $cliente=new Cliente();
        if(isset($_GET['id_cliente']) && isset($_GET['editar'])){
        $cliente->id_cliente=$_GET['id_cliente'];
        $cliente=$cliente->leer_id();
?>



<script>
$(document).ready(function(){
$("#exampleModal10").modal('show');
});
</script>
<!------------------------ Styles------------------------------->
<link rel="stylesheet" href="estilos.css">



<!------------------------------- Modal --------------------------------->
<div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                <h3 class="modal-title mx-auto" id="exampleModalLabel">Editar información</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form class="needs-validation" novalidate action="../../../../back-end/controladores/cliente_controlador.php" method="POST" enctype="multipart/form-data" >

            <input type="hidden" name="opcion" value="2">
            <input type="hidden" name="id_cliente" value="<?php echo $cliente->id_cliente?>">
    <!------------------------------------Informacion personal------------------------------------------>
    <div class="Subtitulo">
            <h4>Información personal</h4>
        </div>

        <div class="row mt-1">
        
          <div class="col-12 mx-auto pt-3">
            <div class="form-row"> 
              <div class="col">
                <label for="validationCustom01">Nombre completo</label>
                <input type="text" class="form-control" id="validationCustom01" name="nombre" value="<?php echo $cliente->nombre?>" required>
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
            <label for="validationCustom01">Telefono</label>
            <input type="text" class="form-control inputForm" id="validationCustom01" name="telefono" value="<?php echo $cliente->telefono?>" required>
          </div>

          <div class="col">
            <label for="validationCustom02">Correo</label>
            <input type="text" class="form-control inputForm" id="validationCustom02" name="correo" value="<?php echo $cliente->correo?>" required>
          </div>
        </div>

       <br>

      <!------------------------------------Modal footer------------------------------------------>
      <div class="modal-footer">
        <input type="submit" class=" col-8 btn btn-info shadow mx-auto text-white" value="Actualizar cliente">
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

<?php

}

?>