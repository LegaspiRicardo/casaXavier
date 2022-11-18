<form class="formulario mx-auto needs-validation" novalidate action="../../../../casaXavier/back-end/controladores/informes_controlador.php" method="POST"  >
    <input type="hidden" name="opcion" value="2">
    
    <label for="correo" class="col-12 mb-0 mt-2">Correo:</label>
    <input type="mail" name="correo" class="col-12 form-input">
    
    <label for="telefono" class="col-12 mb-0 mt-2">Telefono:</label>
    <input type="text" name="telefono" class="col-12 form-input">
    
    <label for="mensaje" class="col-12 mb-0 mt-2">Mensaje:</label>
    <textarea name="mensaje" id="mensaje" cols="25" rows="5" class="col-12 form-input"></textarea>

    <input type="text" name="estatus" class="col-12 form-input" value="Pendiente" hidden>
    
    <input type="submit" value="Enviar" class="col-3 mt-3 form-btn ">
</form>