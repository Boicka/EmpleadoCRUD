<?php
include ("../persistencia/EmpleadoDao.php");



//Recuperar datos del formulario
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$sueldo = $_POST["sueldo"];

//Revisavos si no se esta enviando un campo vacío
if ($nombre == "" || $apellidos == "" || $sueldo == "") {
    $resultado = "Error data empty";
} else {
    //Crear objeto empleado
    $empleadoNuevo = new Empleado();

    //Asignar valores de los atributos al nuevo empleado
    $empleadoNuevo->setId(1);
    $empleadoNuevo->setNombre($nombre);
    $empleadoNuevo->setApellidos($apellidos);
    $empleadoNuevo->setSueldo($sueldo);

    //Consulta de la base de datos para la inserción de un nuevo empleado
    $empleadodao = new EmpleadoDao();
    $resultado = $empleadodao->agrega($empleadoNuevo);
}


//Recorre el resultado en orden
//Despliega la vista con la información
require_once("../AltaDeEmpleado.php");