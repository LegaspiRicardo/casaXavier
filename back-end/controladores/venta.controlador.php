<?php

include_once '../id_plumas/venta.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $venta=new Venta();
            $venta->id_pluma=$_REQUEST['id_pluma'];
            $venta->fecha_venta=$_REQUEST['fecha_venta'];
            $venta->total=$_REQUEST['total'];
            $resultado='';
            echo $venta->crear();

            header('Location: ../../front-end/vistas/publico/panel-control/home.php?resultado='.$resultado);
            exit(); 

          //  header('Location:../../');


            break;

            case '2': 
            $venta=new Venta();
            $venta->id_pluma=$_REQUEST['id_pluma'];
            $venta->fecha_venta=$_REQUEST['fecha_venta'];
            $venta->total=$_REQUEST['total'];
            $venta->id_venta=$_REQUEST['id_venta'];
            $resultado='';
            echo $venta->actualizar();

            header('Location: ../../front-end/vistas/publico/venta/index.php?resultado='.$resultado);
            exit(); 
                break;  //Actualizar
            

            case '3':
            $venta=new Venta();
            $venta->id_venta=$_REQUEST['id_venta'];
            $resultado='';
            echo $venta->borrar();
            header('Location: ../../front-end/vistas/publico/venta/index.php?resultado='.$resultado);
            exit(); 
                break;
            default: echo"opcion invalida";
    }



}




?>

