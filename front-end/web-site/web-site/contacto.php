<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <title>Contacto Casa Xavier</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <!--------------------------Navbar------------------------------------------------------------>
    <?php  include_once ('componentes/navbar.php')?>
    
    <div class="col-12 mx-auto pt-4">
        <h2 class="col-10 mx-auto">Escribanos</h2>
    </div>
    <!--------Hide on smaller screens----------------------->
    <div class="container d-none d-sm-block">
        <div class="row mb-5 ">
            <div class="col-6 mt-4 pl-0">
                <img src="imagenes/senor.jpg" class="col-10 " alt="">
            </div>
            <div class="col-6 mx-auto">
                <form method="POST" class="formulario-contactanos  ml-5 mt-2">
                    <label for="correo" class="col-12 mb-0 ">Correo:</label>
                    <input type="mail" name="correo" class="col-10 form-input">
            
                    <label for="telefono" class="col-12 mb-0 mt-2">Telefono:</label>
                    <input type="text" name="telefono" class="col-10 form-input ">
            
                    <label for="mensaje" class="col-12 mb-0 mt-2">Mensaje:</label>
                    <textarea name="mensaje" id="mensaje" cols="25" rows="10" class="col-10 form-input"></textarea>
            
                    <input type="submit" value="Enviar" class="col-3 mt-3 form-btn ">
                </form>
            </div>
        </div>
    </div>
    <!--------Hide on bigger screens----------------------->
    <div class="row mb-5 d-sm-none">
        <div class="col-10 mt-4 mx-auto">
            <img src="imagenes/senor.jpg" class="col-8 imagen-senor" alt="">
        </div>
        <div class="col-10 mx-auto">
            <form method="POST" class="formulario-contactanos  ml-5">
                <label for="correo" class="col-12 mb-0 mt-2">Correo:</label>
                <input type="mail" name="correo" class="col-10 form-input">
        
                <label for="telefono" class="col-12 mb-0 mt-2">Telefono:</label>
                <input type="text" name="telefono" class="col-10 form-input ">
        
                <label for="mensaje" class="col-12 mb-0 mt-2">Mensaje:</label>
                <textarea name="mensaje" id="mensaje" cols="25" rows="10" class="col-10 form-input"></textarea>
        
                <input type="submit" value="Enviar" class="col-3 mt-3 form-btn ">
            </form>
        </div>
    </div>

    <div class="col-12 mx-auto mb-5">
        <h3 class="col-10 mx-auto">Con gusto le atenderemos.</h3>
    </div>

    <!--------------------------Footer------------------------------------------------------------>    
    <?php  include_once ('componentes/footer.php')?>

</body>
</html>