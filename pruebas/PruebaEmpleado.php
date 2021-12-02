<?php
//Se importa todo el código del archivo PHP indicado
//En este caso se importa la clase de modelo
include ("../modelo/Empleado.php");

//Crear objeto empleado
$empleado = new Empleado();

//Asignar valores de los atributos
$empleado->setId(1);
$empleado->setNombre("Pedro");
$empleado->setApellidos("Sanchez");
$empleado->setSueldo(5200.00);

//Mostrar los valores del objeto
echo $empleado->getId()."<br/>";
echo $empleado->getNombre()."<br/>";
echo $empleado->getApellidos()."<br/>";
echo $empleado->getSueldo()."<br/>";