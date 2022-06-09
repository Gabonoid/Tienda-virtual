<?php
session_start();
ini_set('error_reporting', 0);

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/principal.css">
    <link rel="stylesheet" href="./css/btn.css">
    <link rel="icon" href="./img/favicon.png">
    <title>Perfil | <?php echo $_SESSION['usuario'] ?></title>
</head>
<h1 class="banner_promocion"> <img src="./img/coche_icon.png" alt="icono_coche"> Envios gratis <span class="pesos">+MXN<span class="precio">499</span></span></h1>
<?php
include('./includes/nav.php');
echo $navMenu;
?>

<body>
    <div class="container">

        <h2>Nombre</h2>
        <p><?php echo $_SESSION['usuario'] . " " . $_SESSION['apellido'] ; ?></p>
        <h2>Correo</h2>
        <p><?php echo $_SESSION['correo']; ?></p>
        <h2>Telefono</h2>
        <p><?php echo $_SESSION['telefono']; ?></p>
        <h2>Dirección</h2>
        <p><?php echo $_SESSION['direccion']; ?></p>

        <a href="./includes/logout.php" class="btn_primary">Cerrar Sesion</a>
    </div>

</body>

</html>