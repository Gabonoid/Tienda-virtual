<?php
include("./includes/connect.php");
session_start();

ini_set('error_reporting', 0);
if (!isset($_SESSION['usuario'])) {
    header('Location: ./index.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/principal.css">
    <link rel="stylesheet" href="./css/producto.css">
    <link rel="stylesheet" href="./css/btn.css">
    <link rel="icon" href="./img/favicon.png">
    <title>Carrito</title>
</head>
<h1 class="banner_promocion"> <img src="./img/coche_icon.png" alt="icono_coche"> Envios gratis <span class="pesos">+MXN<span class="precio">499</span></span></h1>
<?php
include('./includes/nav.php');
echo $navMenu;
?>

<body>
    <div class="container">
        <?php
        $precioFinal = 0;
        for ($i = 0; $i < count($_SESSION['carrito']); $i++) {
            $fila = $_SESSION['carrito'][$i];
            $consultaRopa = "SELECT * FROM ropa WHERE idarticulo = " . $fila['id'];
            $queryRopa = mysqli_query($connect, $consultaRopa);
            $row = mysqli_fetch_array($queryRopa);
            echo '<img src="data:image/png;base64,' . base64_encode($row['foto']) . '" />';
            echo '<h1>' . $row['nombre'] . '</h1>';
            echo "<h2>" . $fila['talla'] . "</h2>";
            echo '<h1 class="precio_ropa">$' . $row['precio'] . '</h1>';
            $precioFinal += $row['precio'];
        }
        $isEnvio;
        if ($precioFinal > 499) {
            $isEnvio = 0;
            echo '<h1>Envio = $' . $isEnvio . '</h1>';
            echo '<h1>Total = $' . $precioFinal . '</h1>';
        } else {
            echo '<h1>Envio = $' . 200 . '</h1>';
            echo '<h1>Total = $' . $precioFinal+200 . '</h1>';
        }


        ?>
    </div>
    <form method="post">
        <button class="btn_secondary" name="borrar" type="submit">Vaciar Carrito</button>
    </form>

    <form method="post">
        <button class="btn_agregar" name="pagar" type="submit">Pagar</button>
    </form>

    <br><br><br>

    <?php
    if (isset($_POST['borrar'])) {
        $_SESSION['carrito'] = [];
        header("Refresh=1");
    }
    ?>
</body>

</html>