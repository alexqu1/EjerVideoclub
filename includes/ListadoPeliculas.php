


<?php

function ListarPeliculas()
{
  $root = realpath($_SERVER["DOCUMENT_ROOT"]) . "/ejervideoclub-1/";
  include ($root . "conexion.php");
$consulta="select * from peliculas";
$paquete=mysqli_query($conexion, $consulta);



while($fila=mysqli_fetch_array($paquete)){
  echo "  <div>
    <p>TITULO: ".$fila['titulo']."   DESCRIPCION: ".$fila['descripcion']."  </p>

</div>"; }

}

?>




