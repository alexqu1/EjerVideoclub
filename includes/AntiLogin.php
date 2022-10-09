
<?php


//Para evitar que un usuario sin ser administrador acceda a las paginas de administrador por la url
session_start();
if (isset($_SESSION['logueado']) and $_SESSION['logueado']) {
    $usuario = $_SESSION['usuario'];
} else {
//Si el usuario no está logueado redireccionamos al login. 
    header('Location: error.html');

}

?>
