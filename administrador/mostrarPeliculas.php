<?php


session_start();
if (isset($_SESSION['logueado']) and $_SESSION['logueado']) {
    $usuario = $_SESSION['usuario'];
} else {
//Si el usuario no está logueado redireccionamos al login. 
    header('Location: error.html');

}


include_once ("../includes/ListadoPeliculas.php");
include_once ("cabeceraAdmin.php");
ListarPeliculas();

?>