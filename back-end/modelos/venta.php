<?php
include_once "crud.php";
include_once "config.php";

class Venta implements CRUD
{
    public $id_venta;
    public $id_pluma;
    public $fecha_venta;
    public $total;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO venta (id_pluma, fecha_venta, total)
                    VALUES (:id_pluma, :fecha_venta, :total)");
                
                $stmt->bindParam(':id_pluma', $this->id_pluma);
                $stmt->bindParam(':fecha_venta', $this->fecha_venta);
                $stmt->bindParam(':total', $this->total);
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
                UPDATE venta SET id_pluma=:id_pluma, fecha_venta=:fecha_venta, total=:total  
                WHERE id_venta=:id_venta");

                $stmt->bindParam(':id_pluma', $this->id_pluma);
                $stmt->bindParam(':fecha_venta', $this->fecha_venta);
                $stmt->bindParam(':total', $this->total);
                $stmt->bindParam(':id_venta',$this->id_venta);
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
                DELETE FROM venta  
                WHERE id_venta=:id_venta");
                $stmt->bindParam(':id_venta', $this->id_venta);
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
            SELECT * FROM venta   
            WHERE id_venta=:id_venta");
            $stmt->bindParam(':id_venta', $this->id_venta);
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
            SELECT * FROM venta");
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