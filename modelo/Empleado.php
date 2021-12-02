<?php
class Empleado {
    //--Atributos
    private $id_int;
    private $nombre_str;
    private $apellidos_str;
    private $sueldo_doub;

    //Métodos de mutación (SET's)
    public function setId($id){
        $this->id_int = $id; 
    }

    public function setNombre($nombre){
        $this->nombre_str = $nombre; 
    }

    public function setApellidos($apellidos){
        $this->apellidos_str = $apellidos; 
    }

    public function setSueldo($sueldo){
        $this->sueldo_doub = $sueldo; 
    }

    //Métodos de acceso (GET's)
    public function getId(){
        return $this->id_int; 
    }

    public function getNombre(){
        return $this->nombre_str; 
    }

    public function getApellidos(){
        return $this->apellidos_str; 
    }

    public function getSueldo(){
        return $this->sueldo_doub; 
    }


}