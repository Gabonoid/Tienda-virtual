<?php
include_once("./includes/connect.php");
include_once("./includes/helpers.php");
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
    <link rel="stylesheet" href="./css/cards.css" />
    <link rel="stylesheet" href="./css/btn.css" />
    <link rel="icon" href="./img/favicon.png">
    <title>Home</title>
</head>
<h1 class="banner_promocion"> <img src="./img/coche_icon.png" alt="icono_coche"> Envios gratis <span class="pesos">+MXN<span class="precio">499</span></span></h1>

<?php
include('./includes/nav.php');
echo $navMenu;
?>

<body>
    <div class="container clothes">
        <?php
        $sql = "SELECT * FROM ropa";
        $result = mysqli_query($connect, $sql);
        $rowcount = mysqli_num_rows($result);

        for ($i = 0; $i < $rowcount; $i++) {
            $consultaRopa = "SELECT * FROM ropa WHERE idarticulo = " . ($i + 1);
            $queryRopa = mysqli_query($connect, $consultaRopa);
            $row = mysqli_fetch_array($queryRopa);
            
            echo generarCard($row['idarticulo'], $row['foto'], $row['nombre'], $row['precio']);
        }

        ?>
    </div>
    <a href="./producto.php">Producto</a>
</body>

</html>