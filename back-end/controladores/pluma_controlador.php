<?php

include_once '../modelos/pluma.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $pluma=new Pluma();
            $pluma->modelo=$_REQUEST['modelo'];
            $pluma->marca=$_REQUEST['marca'];
            $pluma->descripcion=$_REQUEST['descripcion'];
            $pluma->precio=$_REQUEST['precio'];
            $pluma->estatus=$_REQUEST['estatus'];
            $resultado='';
            echo $pluma->crear();

            header('Location: ../../front-end/vistas/publico/panel-control/home.php?resultado='.$resultado);
            exit(); 

          //  header('Location:../../');


            break;

            case '2': 
            $pluma=new Pluma();
            $pluma->modelo=$_REQUEST['modelo'];
            $pluma->marca=$_REQUEST['marca'];
            $pluma->descripcion=$_REQUEST['descripcion'];
            $pluma->precio=$_REQUEST['precio'];
            $pluma->estatus=$_REQUEST['estatus'];
            $pluma->id_pluma=$_REQUEST['id_pluma'];
            $resultado='';
            echo $pluma->actualizar();

            header('Location: ../../front-end/vistas/publico/pluma/index.php?resultado='.$resultado);
            exit(); 
                break;  //Actualizar
            

            case '3':
            $pluma=new Pluma();
            $pluma->id_pluma=$_REQUEST['id_pluma'];
            $resultado='';
            echo $pluma->borrar();
            header('Location: ../../front-end/vistas/publico/pluma/index.php?resultado='.$resultado);
            exit(); 
                break;
            default: echo"opcion invalida";
    }



}




?>

