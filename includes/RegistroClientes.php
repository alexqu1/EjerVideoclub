<?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]) . "/ejervideoclub-1/";
  include ($root . "conexion.php");
if (isset($_POST["submit"])){


  $N=$_POST["nombre"];
  $P=$_POST["apellidos"];
  $user=$_POST["usuario"];
  $pass=$_POST["pass"];
  $consulta="INSERT INTO usuarios (id,nombre,apellidos,usuario,pass) VALUES (' ','$N','$P','$user' ,'$pass') " ;
  $paquete=mysqli_query($conexion, $consulta);
  
  header("Location: ../index.php");
  

}else{

}

 ?>

