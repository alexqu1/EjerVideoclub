

<?php

function ListarPelicula()
{

include ("../conexion.php");
$consulta="select * from peliculas";
$paquete=mysqli_query($conexion, $consulta);



while($fila=mysqli_fetch_array($paquete)){
  echo "  <div>
    <p>TITULO: ".$fila['titulo']."   DESCRIPCION: ".$fila['descripcion']."  </p>

</div>"; }

}

?>




