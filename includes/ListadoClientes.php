

<?php

function ListarClientes()
{
  

  include ("../conexion.php");
  $consulta="select * from usuarios";
  $paquete=mysqli_query($conexion, $consulta);
  
  
  
  while($fila=mysqli_fetch_array($paquete)){
    echo "  <div>
      <p>NOMBRE: ".$fila['nombre']."   Apellidos: ".$fila['apellidos']."  USUARIO: ".$fila['usuario']." </p>
  
  </div>"; }



}


?>




