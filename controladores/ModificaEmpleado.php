<?php
include "../persistencia/EmpleadoDao.php";

//Recuperar el dato del formulario
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$sueldo = $_POST["sueldo"];

//Consulta de la base de datos
$empleadodao = new EmpleadoDao();
//$conexion = $empleadodao->conectar();
$csql = "select * from empleados where id = " . "$id";
$busqueda = $empleadodao->consulta($csql);

if (mysqli_num_rows($busqueda) > 0) {
    //Revisavos si no se esta enviando un campo vacío
    if ($nombre == "" || $apellidos == "" || $sueldo == "" || $id == "") {
        $resultado = "Error data empty";
    } else {
        //Crear objeto empleado
        $empleadoNuevo = new Empleado();

        //Asignar valores de los atributos al nuevo empleado
        $empleadoNuevo->setId($id);
        $empleadoNuevo->setNombre($nombre);
        $empleadoNuevo->setApellidos($apellidos);
        $empleadoNuevo->setSueldo($sueldo);

        //Consulta de la base de datos para la inserción de un nuevo empleado
        $empleadodao = new EmpleadoDao();
        $resultado = $empleadodao->modifica($empleadoNuevo);
    }
} else {
    $resultado = "Error al modificar el empleado solicitado, este no se encuentra";
}

//Recorre el resultado en orden
//Despliega la vista con la información
require_once "../CambioDeEmpleado.php";
