<?php

include_once '../modelos/empleado.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $empleado=new Empleado();
            $empleado->nombres=$_REQUEST['nombres'];
            $empleado->apellido_pat=$_REQUEST['apellido_pat'];
            $empleado->apellido_mat=$_REQUEST['apellido_mat'];
            $empleado->telefono=$_REQUEST['telefono'];
            $empleado->correo=$_REQUEST['correo'];
            $empleado->cargo=$_REQUEST['cargo'];
            $resultado='';
            echo $empleado->crear();


          //  header('Location:../../');


            break;

            case '2': 
            $empleado=new Empleado();
            $empleado->nombres=$_REQUEST['nombres'];
            $empleado->apellido_pat=$_REQUEST['apellido_pat'];
            $empleado->apellido_mat=$_REQUEST['apellido_mat'];
            $empleado->telefono=$_REQUEST['telefono'];
            $empleado->correo=$_REQUEST['correo'];
            $empleado->cargo=$_REQUEST['cargo'];
            $empleado->id_empleado=$_REQUEST['id_empleado'];
            $resultado='';
            echo $empleado->actualizar();
                break;  //Actualizar
            

            case '3':
            $empleado=new Empleado();
            $empleado->id_empleado=$_REQUEST['id_empleado'];
            $resultado='';
            echo $empleado->borrar();
                
                break;
            default: echo"opcion invalida";
    }



}




?>

