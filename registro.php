<?php
session_start();
require_once('includes/connect.php');

ini_set('error_reporting', 0);
if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css" />
    <link rel="icon" href="./img/favicon.png">
    <title>Registro</title>
</head>

<a href="./login.php" class="btn_primary btn_back">Ya tengo una cuenta</a>

<body>

    <div class="container">
        <img src="./img/logo_nombre.png" alt="logo" />
        <div class="formulario">
            <form method="post">
                <input class="input_entrada" type="text" placeholder="Nombre" name="nombre" required>
                <input class="input_entrada" type="text" placeholder="Apellidos" name="apellido" required>
                <input class="input_entrada" type="number" name="numTelefono" id="numTelefono" placeholder="Teléfono" required>
                <input class="input_entrada" type="text" placeholder="Dirección" name="direccion" required>
                <input class="input_entrada" type="email" name="correo" id="correo" placeholder="correo@dominio.com" required>
                <input class="input_entrada" type="password" name="password" id="password" placeholder="Contraseña" required>
                <input class="input_entrada" type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirma tu contraseña" required>
                <button class="btn_primary" type="submit" name="registar">Registrarse</button>

            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['registar'])) {

        $nombre = mysqli_real_escape_string($connect, $_POST['nombre']);
        $apellido = mysqli_real_escape_string($connect, $_POST['apellido']);
        $numTelefono = mysqli_real_escape_string($connect, $_POST['numTelefono']);
        $direccion = mysqli_real_escape_string($connect, $_POST['direccion']);
        $email = mysqli_real_escape_string($connect, $_POST['correo']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $passwordConfirm = mysqli_real_escape_string($connect, $_POST['passwordConfirm']);

        if ($_POST['password'] == $_POST['passwordConfirm']) {

            $insertar = mysqli_query($connect, "INSERT INTO persona VALUES (default, '$nombre', '$apellido', '$password', '$email', '$numTelefono', '$direccion');");

            if ($insertar) {
                header("Refresh: 1; url = login.php");
            } else {
                echo "No se registro correctamente";
            }
        }
    }
    ?>

</body>

</html>