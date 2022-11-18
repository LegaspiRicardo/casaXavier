<?php
    session_start()  ;
    //Se incluye el modelo
    include_once '../modelos/empleado.php';

    if(isset($_REQUEST['opcion']))
    {
        $opcion=$_REQUEST['opcion'];
        switch($opcion)
        {
            case '1':                                      //Crear Empleado
                $empleado=new Empleado();
                $empleado->nombres=$_REQUEST['nombres'];
                $empleado->apellido_pat=$_REQUEST['apellido_pat'];
                $empleado->apellido_mat=$_REQUEST['apellido_mat'];
                $empleado->telefono=$_REQUEST['telefono'];
                $empleado->correo=$_REQUEST['correo'];
                $empleado->contrasena=$_REQUEST['contrasena'];
                $empleado->cargo=$_REQUEST['cargo'];
                $resultado='';
                echo $empleado->crear();
            break;

            case '2':                                       //Actualizar Empleado
                $empleado=new Empleado();
                $empleado->nombres=$_REQUEST['nombres'];
                $empleado->apellido_pat=$_REQUEST['apellido_pat'];
                $empleado->apellido_mat=$_REQUEST['apellido_mat'];
                $empleado->telefono=$_REQUEST['telefono'];
                $empleado->correo=$_REQUEST['correo'];
                $empleado->contrasena=$_REQUEST['contrasena'];
                $empleado->cargo=$_REQUEST['cargo'];
                $empleado->id_empleado=$_REQUEST['id_empleado'];
                $resultado='';
                echo $empleado->actualizar();
                header('Location: ../../front-end/vistas/privado/empleado/index.php?resultado='.$resultado);
                exit();
            break; 

            case '3':                                      //Eliminar Empleado
                $empleado=new Empleado();
                $empleado->id_empleado=$_REQUEST['id_empleado'];
                $resultado='';
                echo $empleado->borrar();
            break;
            default: echo"opcion invalida";



            case '4':                                        //Log in
                $empleado=new Empleado();
                $empleado->correo=$_REQUEST['correo'];
                $empleado->contrasena=$_REQUEST['contrasena'];
                $empleado->cargo=$_REQUEST['cargo'];
                $usuario=$empleado->inicio_sesion();

                if($usuario!=null){

                    //Si esta registrado y si cumple con el cargo correspondiente accederá
                    if($usuario->cargo=$_REQUEST['cargo'] == $usuario->cargo="Admin")
                    {
                        $_SESSION['correo']=$usuario->correo;
                        $_SESSION['contrasena']=$usuario->contrasena;
                        $_SESSION['cargo']=$usuario->cargo;
                        header('Location: ../../front-end/vistas/privado/panel-control/home.php?');
                        exit();
                    }
                    if($usuario->cargo=$_REQUEST['cargo'] == $usuario->cargo="Ventas"||"Tecnico" )
                    {
                        $_SESSION['correo']=$usuario->correo;
                        $_SESSION['contrasena']=$usuario->contrasena;
                        $_SESSION['cargo']=$usuario->cargo;
                        header('Location: ../../front-end/vistas/publico/panel-control/home.php?');
                        exit();
                    }
                    else
                    {
                        session_unset();
                        session_destroy();
                        $resultado="usuario y/o contraseña no validos";
                        header('Location: ../../front-end/vistas/privado/sesion/sign-in.php?resultado='.$resultado);
                        exit();
                    }
                }

                else{
                    session_unset();
                    session_destroy();
                    $resultado="Usuario y/o contraseña no validos";
                    header('Location: ../../front-end/vistas/privado/sesion/sign-in.php?resultado='.$resultado);
                    exit();
                }
            break;

            case '5':                                            //Log out
                session_unset();
                session_destroy();
                header('Location: ../../front-end/vistas/privado/sesion/sign-in.php?resultado='.$resultado);
                exit();
            break;
        }
        header('Location: ../../front-end/vistas/privado/empleado/index.php?resultado='.$resultado);
        exit(); 
    }


?>

