<?php
include ("../conexion.php");
if (!isset($_POST["submit"])){
echo '<html><body>
<form method="post" action="RegistroClientes.php">
Nombre:<input type="text" name="nombre">
Apellidos:<input type="text" name="apellidos">

Usuario:<input type="text" name="usuario">
Contraseña<input type="password" name="pass">
<input type="submit" name="submit" value="guardar">
</body></html>';
}else{
$N=$_POST["nombre"];
$P=$_POST["apellidos"];
$user=$_POST["usuario"];
$pass=$_POST["pass"];
$consulta="INSERT INTO usuarios (id,nombre,apellidos,usuario,pass) VALUES (' ','$N','$P','$user' ,'$pass') " ;
$paquete=mysqli_query($conexion, $consulta);

header("Location: ../index.php");

}

 ?>

