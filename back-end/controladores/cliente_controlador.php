<?php

include_once '../modelos/cliente.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $cliente=new Cliente();
            $cliente->nombre=$_REQUEST['nombre'];
            $cliente->correo=$_REQUEST['correo'];
            $cliente->telefono=$_REQUEST['telefono'];
            $resultado='';
            echo $cliente->crear();

          //  header('Location:../../');


            break;

            case '2': 
            $cliente=new Cliente();
            $cliente->nombre=$_REQUEST['nombre'];
            $cliente->correo=$_REQUEST['correo'];
            $cliente->telefono=$_REQUEST['telefono'];
            $cliente->id_cliente=$_REQUEST['id_cliente'];
            $resultado='';
            echo $cliente->actualizar();
                break;  //Actualizar
            

            case '3':
            $cliente=new Cliente();
            $cliente->id_cliente=$_REQUEST['id_cliente'];
            $resultado='';
            echo $cliente->borrar();
                
                break;
            default: echo"opcion invalida";
    }


    header('Location: ../../front-end/vistas/privado/cliente/index.php?resultado='.$resultado);
    exit(); 

}




?>

