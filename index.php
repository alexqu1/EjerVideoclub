<?php
//Se crea la sesión
session_start();
include_once 'arrayuser.php';

//Comprobamos la llamada a index, después de enviar datos por el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

//Creamos una variable para verificar si el usuario con ese nombre y contraseña existe. 
    $existe = false;

//Buscamos en el array, si el usuario y contraseña se encuentra la variable $existe se pone a true y rompe el bucle para no seguir buscando. 
    foreach ($usuarios as $item) {
        if ($usuario == $item['usuario'] and  $contrasena == $item['contrasena']) {
            $existe = true;
            break;
        }
    }

//Comprueba si existe es true. En ese caso se crean las variables de sesión logueado y nombre y se abre la página usuario.php ya con las variables de sesión creadas
    if ($existe) {
        $_SESSION['logueado'] = true;
        $_SESSION['usuario'] = $usuario;
        if ($usuario === "admin" and $contrasena==="1234"   ) {
            header('Location: administrador/principalAdmin.php');
          
        }else{
            header('Location: usuario/principaluser.php');
        }

        // $_SESSION['logueado'] = true;
        // $_SESSION['nombre'] = $nombre;
        // if ($nombre == "toni") {
        //     include_once 'arrayprod.php';
        //     $_SESSION['productos'] = $productos;
        // }
        // header('Location: usuario/principaluser.php');
    
    } else {
        $error_login = true;
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action="index.php" method="post">
    <label for="">Usuario</label>
    <input type="text" name="usuario" id="">
    <label for="">contraseña</label>
    <input type="text" name="contrasena" id="">

    <button type="submit">Enviar</button>
    </form>




</body>
</html>