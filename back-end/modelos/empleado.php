<?php
include_once "crud.php";
include_once "config.php";

class Empleado implements CRUD
{
    public $id_empleado;
    public $nombres;
    public $apellido_pat;
    public $apellido_mat;
    public $telefono;
    public $correo;
    public $contrasena;
    public $cargo;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO empleado (nombres, apellido_pat, apellido_mat, telefono, correo, contrasena, cargo)
                    VALUES (:nombres, :apellido_pat, :apellido_mat, :telefono, :correo, :contrasena, :cargo)");
                
                $stmt->bindParam(':nombres', $this->nombres);
                $stmt->bindParam(':apellido_pat', $this->apellido_pat);
                $stmt->bindParam(':apellido_mat', $this->apellido_mat);
                $stmt->bindParam(':telefono', $this->telefono);
                $stmt->bindParam(':correo', $this->correo);
                $stmt->bindParam(':contrasena', $this->contrasena);
                $stmt->bindParam(':cargo', $this->cargo);
                $stmt->execute();
                return $stmt->rowCount();
            }
            catch(PDOException $e)
            {
                echo "Error: " . $e->getMessage();
            }
            finally
            {
                $conn = null;
                $c->desconectar();
            }
    }

    function actualizar()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();

                $stmt = $conn->prepare("
                UPDATE empleado SET nombres=:nombres, apellido_pat=:apellido_pat, apellido_mat=:apellido_mat, telefono=:telefono, correo=:correo, contrasena=:contrasena, cargo=:cargo  
                WHERE id_empleado=:id_empleado");

                $stmt->bindParam(':nombres', $this->nombres);
                $stmt->bindParam(':apellido_pat', $this->apellido_pat);
                $stmt->bindParam(':apellido_mat', $this->apellido_mat);
                $stmt->bindParam(':telefono', $this->telefono);
                $stmt->bindParam(':correo', $this->correo);
                $stmt->bindParam(':contrasena', $this->contrasena);
                $stmt->bindParam(':cargo', $this->cargo);
                $stmt->bindParam(':id_empleado',$this->id_empleado);
                $stmt->execute();

                $cambios=$stmt->rowCount();
            } 
            catch(PDOException $e) 
            {
                echo "Error: " . $e->getMessage();
            } 
            finally
            {
                $conn = null;
            }
    }

    function borrar()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();

                $stmt = $conn->prepare("
                DELETE FROM empleado  
                WHERE id_empleado=:id_empleado");
                $stmt->bindParam(':id_empleado', $this->id_empleado);
                $stmt->execute();
                $cambios=$stmt->rowCount();
            } 
            catch(PDOException $e) 
            {
                echo "Error: " . $e->getMessage();
            } finally
            {
                $conn = null;
            }
    }

    function leer_id()
    {
        try{
            $c=new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM empleado   
            WHERE id_empleado=:id_empleado");
            $stmt->bindParam(':id_empleado', $this->id_empleado);
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt-> fetchObject();
            return $result; 
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally{
            $conn = null;
            }                 
    }

    function leer_todo()
    {
        try{
            $c=new Conexion();
            $conn=$c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM empleado");
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result=$stmt->fetchAll();
            return $result;

            } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            } finally{
            $conn = null;
            }  
    }


    function inicio_sesion()
    {
        try{
            $c=new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM empleado   
            WHERE correo=:correo and contrasena=:contrasena and cargo=:cargo");
            $stmt->bindParam(':correo', $this->correo);
            $stmt->bindParam(':contrasena', $this->contrasena);
            $stmt->bindParam(':cargo', $this->cargo);
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt-> fetchObject();
            return $result; 
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally{
            $conn = null;
            }                 
    }





}

?>