<?php
session_start();

unset($_SESSION['usuario']);
unset($_SESSION['id']);
unset($_SESSION['telefono']);

session_destroy();

header('Refresh: 1; url=../index.php');
