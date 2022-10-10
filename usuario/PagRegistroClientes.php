<?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]) . "/ejervideoclub-1/";
  include ($root . "includes/RegistroClientes.php");

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
<form method="post" action="../includes/RegistroClientes.php">
Nombre:<input type="text" name="nombre">
Apellidos:<input type="text" name="apellidos">

Usuario:<input type="text" name="usuario">
Contraseña<input type="password" name="pass">
<input type="submit" name="submit" value="guardar">
</body>
</html>




