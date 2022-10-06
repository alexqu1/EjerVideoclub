<?php
include ("../conexion.php");
$consulta="select * from usuarios";
$paquete=mysqli_query($conexion, $consulta);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

while($fila=mysqli_fetch_array($paquete)){
  echo "  <div>
    <p>NOMBRE: ".$fila['nombre']."   Apellidos: ".$fila['apellidos']."  USUARIO: ".$fila['usuario']." </p>

</div>"; }

?>

</body>
</html>



