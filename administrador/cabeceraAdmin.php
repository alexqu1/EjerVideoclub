
<?php
include_once ("../includes/ComprobarLogin.php");

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    
<header id="headerAdmin">
    <div>
<h1>VIDEOCLUB ALEX</h1> 
</div>
<aside>
<button> <a href="mostrarclientes.php">Listar Clientes</a> </button>
<button> <a href="mostrarPeliculas.php">Listar Peliculas</a> </button>
<button> <a href="RegistroPeliculas.php">Registro Peliculas</a> </button>

</aside>

<div>
    <p>
        BIENVENIDO :  
        <?php
           echo $usuario;
        ?>
    <button> <a href="../includes/cerrarsesion.php">Cerrar Sesiones</a> </button>
    </p>

</div>

</header>
  

</body>
</html>