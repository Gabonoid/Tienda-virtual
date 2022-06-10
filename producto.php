<?php
session_start();
include("./includes/Articulo.php");
$idArticulo = $_GET['art'];
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
    <title>Producto</title>
</head>
<h1 class="banner_promocion"> <img src="./img/coche_icon.png" alt="icono_coche"> Envios gratis <span class="pesos">+MXN<span class="precio">499</span></span></h1>
<?php
include('./includes/nav.php');
echo $navMenu;
?>
<?php
include("./includes/connect.php");
$consultaRopa = "SELECT * FROM ropa WHERE idarticulo = " . $idArticulo;
$queryRopa = mysqli_query($connect, $consultaRopa);
$row = mysqli_fetch_array($queryRopa);
?>

<body>
    <div class="container_info">
        <div class="img_ropa">
            <?php echo '<img src="data:image/png;base64,' . base64_encode($row['foto']) . '" />' ?>
        </div>
        <div class="info">
            <h1><?php echo $row['nombre']; ?></h1>
            <h3>Descripción:</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio repellat cum, soluta sapiente quibusdam voluptatibus debitis maxime totam in iusto earum dolorum nesciunt repellendus reiciendis asperiores quisquam impedit omnis eum Mollitia voluptates quibusdam reprehenderit unde ad aperiam explicabo quo illum, corrupti iure earum maiores. Sint delectus minus deleniti repellat dolorem optio. Unde, sapiente explicabo obcaecati corrupti perferendis omnis rem voluptatem.</p>
            <h1 class="precio_ropa">$<?php echo $row['precio']; ?></h1>

            <form method="post">
                <select name="talla" id="talla">
                    <option value="chico">Chica</option>
                    <option value="mediana">Mediana</option>
                    <option value="grande">Grande</option>
                </select>
                <button type="submit" name="agregar_carrito"" class=" btn_agregar"> <img src="./img/cart_icon.png">Agregar</button>
            </form>

            <?php

            if (isset($_POST['agregar_carrito'])) {
                $carrito_mio = $_SESSION['carrito'];
                $carrito_mio[] = array("id" => $idArticulo, "talla" => $_POST['talla']);
                $_SESSION['carrito'] = $carrito_mio;
                
                header('Location: index.php');
            }

            ?>
        </div>
    </div>
</body>

</html>