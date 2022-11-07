<?php
session_start();
$root = realpath($_SERVER["DOCUMENT_ROOT"]) . "/ejervideoclub/";

if (isset($_SESSION['logueado']) and $_SESSION['logueado']) {
    $usuario = $_SESSION['usuario'];
} else {
//Si el usuario no está logueado redireccionamos al login. 
    header('Location: index.php');
    exit;
}

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
    <h1>BIENVENIDO : <?php echo  $usuario  ?> </h1>
    <?php
  
  include ($root . "usuario/mostrarPeliculas.php");

  ?>

</body>
</html>