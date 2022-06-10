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

<body>
    <div class="container_info">
        <div class="img_ropa">
            <img src="./img/Ropa_1.png" alt="">
        </div>
        <div class="info">
            <h1>Nombre del Producto</h1>
            <h3>Descripción:</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio repellat cum, soluta sapiente quibusdam voluptatibus debitis maxime totam in iusto earum dolorum nesciunt repellendus reiciendis asperiores quisquam impedit omnis eum Mollitia voluptates quibusdam reprehenderit unde ad aperiam explicabo quo illum, corrupti iure earum maiores. Sint delectus minus deleniti repellat dolorem optio. Unde, sapiente explicabo obcaecati corrupti perferendis omnis rem voluptatem.</p>
            <h1 class="precio_ropa">$$$Precio</h1>
            
            <select name="talla" id="talla">
                <option value="">--Talla--</option>
                <option value="chico">Chica</option>
                <option value="mediana">Mediana</option>
                <option value="grande">Grande</option>
            </select>
            <select name="cantidad" id="cantidad">
                <option value="">--Cantidad--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
            <button class="btn_agregar"> <img src="./img/cart_icon.png" > Agregar</button>
        </div>
    </div>
</body>

</html>