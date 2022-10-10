


<?php

function ListarPeliculas()
{

  $root = realpath($_SERVER["DOCUMENT_ROOT"]) . "/ejervideoclub-1/";
  include ($root . "conexion.php");



$consulta="select * from peliculas";
$paquete=mysqli_query($conexion, $consulta);



while($fila=mysqli_fetch_array($paquete)){
  echo '  <div>
   <p> Nombre: ' . $fila["titulo"] . 'Descripcion : ' . $fila["descripcion"] . '
   <a href="' . $root . '"includes/EliminarPelicula.php"?id=' .$fila["id"]  . ' " >X</a>
</div>' ;}

}

?>



