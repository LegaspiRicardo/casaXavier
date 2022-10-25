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
            $resultado='';
            echo $pluma->crear();

          //  header('Location:../../');
            break;

            case '2': 
            $pluma=new Pluma();
            $pluma->modelo=$_REQUEST['modelo'];
            $pluma->marca=$_REQUEST['marca'];
            $pluma->descripcion=$_REQUEST['descripcion'];
            $pluma->precio=$_REQUEST['precio'];
            $pluma->id_pluma=$_REQUEST['id_pluma'];
            $resultado='';
            echo $pluma->actualizar();
                break;  //Actualizar
            

            case '3':
            $pluma=new Pluma();
            $pluma->id_pluma=$_REQUEST['id_pluma'];
            $resultado='';
            echo $pluma->borrar();
                
                break;
            default: echo"opcion invalida";
    }


 //   header('Location: ../../front_end/vistas/dashboard/index.php?resultado='.$resultado);
   // exit(); 

}




?>