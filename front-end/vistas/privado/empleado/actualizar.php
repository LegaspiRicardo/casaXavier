<?php 
    if(isset($_GET['resultado'])){
        echo $_GET['resultado'];
    }  

        $empleado=new Empleado();
        if(isset($_GET['id_empleado']) && isset($_GET['editar'])){
        $empleado->id_empleado=$_GET['id_empleado'];
        $empleado=$empleado->leer_id();
?>



<script>
$(document).ready(function(){
$("#exampleModal7").modal('show');
});
</script>
<!------------------------ Styles------------------------------->
<link rel="stylesheet" href="estilos.css">



<!------------------------------- Modal --------------------------------->
<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                <h3 class="modal-title mx-auto" id="exampleModalLabel">Editar empleado</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <div class="modal-body">
            <form class="needs-validation" novalidate action="../../../../back-end/controladores/empleado_controlador.php" method="POST" enctype="multipart/form-data" >

            <input type="hidden" name="opcion" value="2">
            <input type="hidden" name="id_empleado" value="<?php echo $empleado->id_empleado?>">
    <!------------------------------------Informacion personal------------------------------------------>
        <div class="Subtitulo">
            <h4>Información personal</h4>
        </div>

        <div class="row mt-1">
        
          <div class="col-12 mx-auto pt-3">
            <div class="form-row"> 
              <div class="col">
                <input type="text" class="form-control" id="validationCustom01" name="nombres" value="<?php echo $empleado->nombres?>" required>
                <label for="validationCustom01">Nombre(s)</label>
              </div>
            </div>

            <div class="form-row"> 
              <div class="col">
                <input type="text" class="form-control inputForm" id="validationCustom01" name="apellido_pat" value="<?php echo $empleado->apellido_pat?>" required>
                <label for="validationCustom01">Apellido Paterno</label>
              </div>

              <div class="col">
                <input type="text" class="form-control inputForm" id="validationCustom02" name="apellido_mat" value="<?php echo $empleado->apellido_mat?>" required>
                <label for="validationCustom02">Apellido Materno</label>
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
            <input type="text" class="form-control inputForm" id="validationCustom01" name="telefono" value="<?php echo $empleado->telefono?>" required>
            <label for="validationCustom01">Telefono</label>
          </div>

          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom02" name="correo" value="<?php echo $empleado->correo?>" required>
            <label for="validationCustom02">Correo</label>
          </div>
        </div>

      <br>
        <!------------------------------------Puesto------------------------------------------>
        <div class="Subtitulo ">
          <h4 >Puesto</h4>
        </div>
        <div class="form-row"> 
          <div class="col styled-select black rounded ">
                <select name="cargo" class="form-control" >
                    <option value="Tecnico" >Tecnico</option>
                    <option value="Ventas" >Ventas</option>
                    <option value="<?php echo $empleado->cargo?>" selected> <?php echo $empleado->cargo?> </option>
                </select>
          </div>

          <div class="col">
            <input type="password" class="form-control inputForm text-center" id="validationCustom02" name="contrasena" value="<?php echo $empleado->contrasena?>" disabled>
            <label class="mb-0" for="validationCustom02">Contraseña protegida</label>
            <p class="mini-aviso">Para cambiarla contacte a soporte</p>
          </div>
          
        </div>
<br>
  
      <!------------------------------------Modal footer------------------------------------------>
      <div class="modal-footer">
        <input type="submit" class=" col-8 btn btn-primary shadow mx-auto text-white" value="Actualizar empleado">
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