<?php
include_once "crud.php";
include_once "config.php";

class Informe implements CRUD
{
    public $id_informe;
    public $correo;
    public $telefono;
    public $mensaje;
    public $estatus;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO informes (correo, telefono, mensaje, estatus)
                    VALUES (:correo, :telefono, :mensaje, :estatus)");
                
                $stmt->bindParam(':correo', $this->correo);
                $stmt->bindParam(':telefono', $this->telefono);
                $stmt->bindParam(':mensaje', $this->mensaje);
                $stmt->bindParam(':estatus', $this->estatus);
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
                UPDATE informes SET correo=:correo, telefono=:telefono, mensaje=:mensaje, estatus=:estatus  
                WHERE id_informe=:id_informe");

                $stmt->bindParam(':correo', $this->correo);
                $stmt->bindParam(':telefono', $this->telefono);
                $stmt->bindParam(':mensaje', $this->mensaje);
                $stmt->bindParam(':estatus', $this->estatus);
                $stmt->bindParam(':id_informe',$this->id_informe);
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
                DELETE FROM informes  
                WHERE id_informe=:id_informe");
                $stmt->bindParam(':id_informe', $this->id_informe);
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
            SELECT * FROM informes   
            WHERE id_informe=:id_informe");
            $stmt->bindParam(':id_informe', $this->id_informe);
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
            SELECT * FROM informes");
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

}

?>