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

        case '4':      //crear privado en dash
            $cliente=new Cliente();
            $cliente->nombre=$_REQUEST['nombre'];
            $cliente->correo=$_REQUEST['correo'];
            $cliente->telefono=$_REQUEST['telefono'];
            $resultado='';
            echo $cliente->crear();
            header('Location: ../../front-end/vistas/privado/panel-control/home.php?resultado='.$resultado);
            exit(); 
                break;

        case '5':      //crear publico en dash
            $cliente=new Cliente();
            $cliente->nombre=$_REQUEST['nombre'];
            $cliente->correo=$_REQUEST['correo'];
            $cliente->telefono=$_REQUEST['telefono'];
            $resultado='';
            echo $cliente->crear();
            header('Location: ../../front-end/vistas/publico/panel-control/home.php?resultado='.$resultado);
            exit(); 
                break;
    }


    header('Location: ../../front-end/vistas/privado/cliente/index.php?resultado='.$resultado);
    exit(); 

}




?>

