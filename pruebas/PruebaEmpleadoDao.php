<?php
include("../persistencia/EmpleadoDao.php");

$empleadodao = new EmpleadoDao();
$csql = "select * from empleado";
$resultado = $empleadodao->consulta($csql);

//Recorre el resultado en orden inverso
echo "<br/><br/>Orden inverso...<br/><br/>";
for ($num_fila=$resultado->num_rows-1; $num_fila >= 0; $num_fila--) { 
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    echo " id = ".$fila['id']."<br/>";
    echo " nombre = ".$fila['nombre']."<br/>";
    echo " apellidos = ".$fila['apellidos']."<br/>";
    echo " sueldo = ".$fila['sueldo']."<br/>";
}

//Recorre el resultado en orden
echo "<br/><br/>Orden del conjunto de resultados...<br/><br/>";
$resultado->data_seek(0);
while($fila = $resultado->fetch_assoc()){
    echo " id = " . $fila['id'] . "<br/>";
    echo " nombre = " . $fila['nombre'] . "<br/>";
    echo " apellidos = " . $fila['apellidos'] . "<br/>";
    echo " sueldo = " . $fila['sueldo'] . "<br/>";
}