<?php
include ("../modelo/Empleado.php");

class EmpleadoDao{

    /*Atributos de la clase para Empleado DAO(Data Access Object), datos necesarios para conectar la bd en mysql en el 
    servidor*/
    private $server = "localhost";
    private $usr = "root";
    private $pass = "root";
    private $db = "empresa";

    //Método para conectar a la base de datos y poder hacer transacciones de todo tipo permitidas
    private function conectar(){
        try {
            $mysqli = new mysqli(
                $this->server,
                $this->usr,
                $this->pass,
                $this->db);
            return $mysqli;
        } catch (mysqli_sql_exception $e) {
            throw $e;
        }
    }

    //Método de consulta para un empleado en este caso
    public function consulta($csql){
        $conexion = $this->conectar();
        $resultado = $conexion->query($csql);
        return $resultado;
    }

    //Método de inserción de un empleado en este caso
    public function agrega(Empleado $empleado){
        $conexion = $this->conectar();
        $csql = "insert into empleados(nombre, apellidos, sueldo) values ('".$empleado->getNombre()."', '".$empleado->getApellidos()."', '".$empleado->getSueldo()."')";
        $resultado = $conexion->query($csql);
        return $resultado;
    }

    //Método de eliminación para un empleado en este caso
    public function elimina($esql){
        $conexion = $this->conectar();
        $resultado = $conexion->query($esql);
        return $resultado;
    }

    //Método de modificación de un empleado en este caso
    public function modifica(Empleado $empleado){
        $conexion = $this->conectar();
        $csql = "update empleados set nombre='".$empleado->getNombre()."',apellidos='".$empleado->getApellidos()."',sueldo='".$empleado->getSueldo()."' WHERE id = ".$empleado->getId();
        $resultado = $conexion->query($csql);
        return $resultado;
    }
}
