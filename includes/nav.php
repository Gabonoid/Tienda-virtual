<?php

$nombre = (isset($_SESSION['usuario'])) ? $_SESSION['usuario'] : "Inicia Sesion";

$navMenu = isset($_SESSION['usuario']) ? '
<nav>
    <div class="nav_left">
        <a href="./index.php"><img src="./img/logo_letter.png" alt="" /></a>
        <input type="text" class="input_entrada" placeholder="Buscar..." />
        <button type="submit" class="btn_search" />
    </div>

    <div class="nav_right">
        <div class="nav_link">
            <a href="./perfil.php"><img src="./img/profile_icon.png" alt="" />' . $nombre . '</a>
        </div>
        <div class="nav_link">
            <a href="./carrito.php"><img src="./img/cart_icon.png" alt="" />Carrito(' . count($_SESSION['carrito']) . ')</a>
        </div>
    </div>
</nav>

' : '
<nav>
    <div class="nav_left">
        <a href="./index.php"><img src="./img/logo_letter.png" alt="" /></a>
        <input type="text" class="input_entrada" placeholder="Buscar..." />
        <button type="submit" class="btn_search" />
    </div>

    <div class="nav_right">
        <div class="nav_link">
            <a href="./perfil.php"><img src="./img/profile_icon.png" alt="" />' . $nombre . '</a>
        </div>
    </div>
</nav>
';
