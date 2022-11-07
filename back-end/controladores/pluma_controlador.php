<?php

include_once '../modelos/pluma.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':                                       //Crear Pluma en Inventario.  Privado 
            $pluma=new Pluma();
            $pluma->modelo=$_REQUEST['modelo'];
            $pluma->marca=$_REQUEST['marca'];
            $pluma->descripcion=$_REQUEST['descripcion'];
            $pluma->precio=$_REQUEST['precio'];
            $pluma->estatus=$_REQUEST['estatus'];
            $resultado='';
            echo $pluma->crear();
            header('Location: ../../front-end/vistas/privado/pluma/index.php?resultado='.$resultado);
            exit(); 
            break;

        case '2':                                       //Crear Pluma en Panel Control.  Privado
            $pluma=new Pluma();
            $pluma->modelo=$_REQUEST['modelo'];
            $pluma->marca=$_REQUEST['marca'];
            $pluma->descripcion=$_REQUEST['descripcion'];
            $pluma->precio=$_REQUEST['precio'];
            $pluma->estatus=$_REQUEST['estatus'];
            $resultado='';
            echo $pluma->crear();
            header('Location: ../../front-end/vistas/privado/panel-control/home.php?resultado='.$resultado);
            exit(); 
            break;

        case '3':                                     //Actualizar Pluma.   Privado
            $pluma=new Pluma();
            $pluma->modelo=$_REQUEST['modelo'];
            $pluma->marca=$_REQUEST['marca'];
            $pluma->descripcion=$_REQUEST['descripcion'];
            $pluma->precio=$_REQUEST['precio'];
            $pluma->estatus=$_REQUEST['estatus'];
            $pluma->id_pluma=$_REQUEST['id_pluma'];
            $resultado='';
            echo $pluma->actualizar();
            header('Location: ../../front-end/vistas/privado/pluma/index.php?resultado='.$resultado);
            exit(); 
            break;  
            
        case '4':                                     //Eliminar Pluma.    Privado
            $pluma=new Pluma();
            $pluma->id_pluma=$_REQUEST['id_pluma'];
            $resultado='';
            echo $pluma->borrar();
            header('Location: ../../front-end/vistas/privado/pluma/index.php?resultado='.$resultado);
            exit(); 
            break;
            default: echo "opcion invalida";



        case '5':                                       //Crear Pluma en Inventario.  Publico
            $pluma=new Pluma();
            $pluma->modelo=$_REQUEST['modelo'];
            $pluma->marca=$_REQUEST['marca'];
            $pluma->descripcion=$_REQUEST['descripcion'];
            $pluma->precio=$_REQUEST['precio'];
            $pluma->estatus=$_REQUEST['estatus'];
            $resultado='';
            echo $pluma->crear();
            header('Location: ../../front-end/vistas/publico/pluma/index.php?resultado='.$resultado);
            exit(); 
            break;

        case '6':                                     //Crear Pluma en Panel de control. Publico
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
            break;
        
        case '7':                                     //Actualizar Pluma.   Publico
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
            break;  

            case '8':                                     //Eliminar Pluma.    Privado
                $pluma=new Pluma();
                $pluma->id_pluma=$_REQUEST['id_pluma'];
                $resultado='';
                echo $pluma->borrar();
                header('Location: ../../front-end/vistas/publico/pluma/index.php?resultado='.$resultado);
                exit(); 
                break;
    

    }



}




?>

