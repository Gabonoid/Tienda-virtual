<?php
session_start();

$_SESSION['usuario'];
$_SESSION['id'];
$_SESSION['correo'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/principal.css">
    <link rel="icon" href="./img/favicon.png">
    <title>Home</title>
</head>
<h1 class="banner_promocion"> <img src="./img/coche_icon.png" alt="icono_coche"> Envios gratis <span class="pesos">+MXN<span class="precio">499</span></span></h1>
<body>
    <a href="./perfil.php">Perfil</a>
    <br>
    <a href="./login.php">Entrar</a>

</body>

</html>