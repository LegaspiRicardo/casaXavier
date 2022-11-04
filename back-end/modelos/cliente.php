<?php
include_once "crud.php";
include_once "config.php";

class Cliente implements CRUD
{
    public $id_cliente;
    public $nombre;
    public $correo;
    public $telefono;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO cliente (nombre, correo, telefono)
                    VALUES (:nombre, :correo, :telefono)");
                
                $stmt->bindParam(':nombre', $this->nombre);
                $stmt->bindParam(':correo', $this->correo);
                $stmt->bindParam(':telefono', $this->telefono);
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
                UPDATE cliente SET nombre=:nombre, correo=:correo, telefono=:telefono  
                WHERE id_cliente=:id_cliente");

                $stmt->bindParam(':nombre', $this->nombre);
                $stmt->bindParam(':correo', $this->correo);
                $stmt->bindParam(':telefono', $this->telefono);
                $stmt->bindParam(':id_cliente',$this->id_cliente);
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
                DELETE FROM cliente  
                WHERE id_cliente=:id_cliente");
                $stmt->bindParam(':id_cliente', $this->id_cliente);
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
            SELECT * FROM cliente   
            WHERE id_cliente=:id_cliente");
            $stmt->bindParam(':id_cliente', $this->id_cliente);
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
            SELECT * FROM cliente");
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