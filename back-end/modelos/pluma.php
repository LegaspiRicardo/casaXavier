<?php
include_once "crud.php";
include_once "config.php";

class Pluma implements CRUD
{
    public $id_pluma;
    public $modelo;
    public $marca;
    public $descripcion;
    public $precio;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO pluma (modelo, marca, descripcion, precio)
                    VALUES (:modelo, :marca, :descripcion, :precio)");
                
            $stmt->bindParam(':modelo', $this->modelo);
            $stmt->bindParam(':marca', $this->marca);
            $stmt->bindParam(':descripcion', $this->descripcion);
            $stmt->bindParam(':precio', $this->precio);
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
                UPDATE pluma SET modelo=:modelo, marca=:marca, descripcion=:descripcion, precio=:precio  
                WHERE id_pluma=:id_pluma");
                $stmt->bindParam(':modelo', $this->modelo);
                $stmt->bindParam(':marca', $this->marca);
                $stmt->bindParam(':descripcion', $this->descripcion);
                $stmt->bindParam(':precio', $this->precio);
            
                $stmt->bindParam(':id_pluma',$this->id_pluma);
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
                DELETE FROM pluma  
                WHERE id_pluma=:id_pluma");
                $stmt->bindParam(':id_pluma', $this->id_pluma);
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
            SELECT * FROM pluma   
            WHERE id_pluma=:id_pluma");
            $stmt->bindParam(':id_pluma', $this->id_pluma);
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
            SELECT * FROM pluma");
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