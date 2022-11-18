<?php

include_once '../modelos/informes.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':                                       //Crear Informe en Home Website 
            $informe=new Informe();
            $informe->correo=$_REQUEST['correo'];
            $informe->telefono=$_REQUEST['telefono'];
            $informe->mensaje=$_REQUEST['mensaje'];
            $informe->estatus=$_REQUEST['estatus'];
            $resultado='';
            echo $informe->crear();
            header('Location: ../../front-end/web-site/home.php?resultado='.$resultado);
            exit(); 
            break;

        case '2':                                       //Crear Informe en Contacto Website
            $informe=new Informe();
            $informe->correo=$_REQUEST['correo'];
            $informe->telefono=$_REQUEST['telefono'];
            $informe->mensaje=$_REQUEST['mensaje'];
            $informe->precio=$_REQUEST['precio'];
            $informe->estatus=$_REQUEST['estatus'];
            $resultado='';
            echo $informe->crear();
            header('Location: ../../front-end/web-site/contacto.php?resultado='.$resultado);
            exit(); 
            break;

        case '3':                                     //Actualizar Informe.   Privado
            $informe=new Informe();
            $informe->correo=$_REQUEST['correo'];
            $informe->telefono=$_REQUEST['telefono'];
            $informe->mensaje=$_REQUEST['mensaje'];
            $informe->estatus=$_REQUEST['estatus'];
            $informe->id_informe=$_REQUEST['id_informe'];
            $resultado='';
            echo $informe->actualizar();
            header('Location: ../../front-end/vistas/privado/informe/index.php?resultado='.$resultado);
            exit(); 
            break;  
            
        case '4':                                     //Eliminar Informe.    Privado
            $informe=new Informe();
            $informe->id_informe=$_REQUEST['id_informe'];
            $resultado='';
            echo $informe->borrar();
            header('Location: ../../front-end/vistas/privado/informe/index.php?resultado='.$resultado);
            exit(); 
            break;
            default: echo "opcion invalida";



        case '5':                                       //Crear Informe en Inventario.  Publico
            $informe=new Informe();
            $informe->correo=$_REQUEST['correo'];
            $informe->telefono=$_REQUEST['telefono'];
            $informe->mensaje=$_REQUEST['mensaje'];
            $informe->precio=$_REQUEST['precio'];
            $informe->estatus=$_REQUEST['estatus'];
            $resultado='';
            echo $informe->crear();
            header('Location: ../../front-end/vistas/publico/informe/index.php?resultado='.$resultado);
            exit(); 
            break;

        case '6':                                     //Crear Informe en Panel de control. Publico
            $informe=new Informe();
            $informe->correo=$_REQUEST['correo'];
            $informe->telefono=$_REQUEST['telefono'];
            $informe->mensaje=$_REQUEST['mensaje'];
            $informe->estatus=$_REQUEST['estatus'];
            $resultado='';
            echo $informe->crear();
            header('Location: ../../front-end/vistas/publico/panel-control/home.php?resultado='.$resultado);
            exit(); 
            break;
        
        case '7':                                     //Actualizar Informe.   Publico
            $informe=new Informe();
            $informe->correo=$_REQUEST['correo'];
            $informe->telefono=$_REQUEST['telefono'];
            $informe->mensaje=$_REQUEST['mensaje'];
            $informe->estatus=$_REQUEST['estatus'];
            $informe->id_informe=$_REQUEST['id_informe'];
            $resultado='';
            echo $informe->actualizar();
            header('Location: ../../front-end/vistas/publico/informe/index.php?resultado='.$resultado);
            exit(); 
            break;  

            case '8':                                     //Eliminar Informe.    Privado
                $informe=new Informe();
                $informe->id_Informe=$_REQUEST['id_Informe'];
                $resultado='';
                echo $informe->borrar();
                header('Location: ../../front-end/vistas/publico/informe/index.php?resultado='.$resultado);
                exit(); 
                break;
    

    }



}




?>

