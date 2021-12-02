<?php
include "../persistencia/EmpleadoDao.php";

//Recuperar el dato del formulario
$id = $_POST["id"];

//Consulta de la base de datos para ver si existe el empleado a eliminar
$empleadodao = new EmpleadoDao();
$csql = "select * from empleados where id = " . "$id";
$busqueda = $empleadodao->consulta($csql);

if ($id == "") {
    $resultado = "Error ID empty";
} else {
    if (mysqli_num_rows($busqueda) > 0) {
        $esql = "delete from empleados where id = " . "$id";
        $resultado = $empleadodao->elimina($esql);
    } else {
        $resultado = "Error al eliminar el empleado solicitado";
    }
}
//Recorre el resultado en orden
//Despliega la vista con la información
require_once("../BajaDeEmpleado.php");