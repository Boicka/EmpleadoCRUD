<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas consultadas</title>
</head>

<body>
    <?php
    $resultado->data_seek(0);
    while($fila = $resultado->fetch_assoc()){
        echo " id = " . $fila['id'] . "<br/>";
        echo " nombre = " . $fila['nombre'] . "<br/>";
        echo " apellidos = " . $fila['apellidos'] . "<br/>";
        echo " sueldo = " . $fila['sueldo'] . "<br/>";
    }
?>
</body>

</html>