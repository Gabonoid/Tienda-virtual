<?php

function generarCard($id, $foto, $nombre, $precio)
{
    $card = '
    <div class="card">
    <a href="./producto.php?art='.$id.'"><img class="img_ropa" src="data:image/png;base64,'.base64_encode($foto).'"/></a>
    <h2>'.$nombre.'</h2>
    <h3>$'.$precio.'</h3>
    <a href="./producto.php?art='.$id.'" class="btn_agregar">
        <img src="./img/search_icon_black.png" alt="" srcset="" />Ver
    </a>
    </div>
    ';

    return $card;
}
