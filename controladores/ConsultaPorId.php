<?php
include("../persistencia/EmpleadoDao.php");

//Recuperar el dato del formulario
$id = $_POST["id"];

//Consulta de la base de datos
$empleadodao = new EmpleadoDao();
//$conexion = $empleadodao->conectar();
$csql = "select * from empleados where id = "."$id";
$resultado = $empleadodao->consulta($csql);

//Recorre el resultado en orden
//Despliega la vista con la información
require_once("../ConsultaDeEmpleado.php");