<?php
session_start();
require_once('includes/connect.php');

ini_set('error_reporting', 0);
if (isset($_SESSION['usuario'])) {
    header('Location: ./index.php');
}

$_SESSION['usuario'];
$_SESSION['id'];
$_SESSION['correo'];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./css/login.css" />

    <link rel="icon" href="./img/favicon.png" />
    <title>Login</title>
</head>

<a href="./index.php" class="btn_primary btn_back">Regresar</a>

<body>
    <div class="container">
        <img src="./img/logo_nombre.png" alt="logo" />
        <div class="formulario">
            <form method="POST">
                <input type="email" name="email" id="email" placeholder="correo@dominio.com" class="input_entrada" required />
                <input type="password" name="password" id="password" placeholder="Contraseña" class="input_entrada" required />
                <button type="submit" name="ingresar" class="btn_primary">
                    Ingresar
                </button>
            </form>

            <?php
            require_once('includes/bd.php');
            if (isset($_POST['ingresar'])) {
                $email = mysqli_real_escape_string($connect, $_POST['email']);
                $email = strip_tags($_POST['email']);
                $email = trim($_POST['email']);

                $password = mysqli_real_escape_string($connect, $_POST['password']);
                $password = strip_tags($_POST['password']);
                $password = trim($_POST['password']);

                include_once('connect.php');
                $consulta =  "SELECT * FROM persona WHERE correo = '" . $email . "' AND contrasenia = '" . $password . "';";

                $query = mysqli_query($connect, $consulta);

                $contar = mysqli_num_rows(mysqli_query($connect, $consulta));

                if ($contar == 1) {

                    while ($row = mysqli_fetch_array($query)) {



                        if ($email = $row['correo'] && $password = $row['contrasenia']) {


                            $_SESSION['correo'] = $row['correo'];
                            $_SESSION['usuario'] = $row['nombre'];
                            $_SESSION['apellido'] = $row['apellido'];
                            $_SESSION['id'] = $row['idPersona'];
                            $_SESSION['telefono'] = $row['telefono'];
                            $_SESSION['direccion'] = $row['direccion'];
                            $_SESSION['carrito'] = array();



                            header('Location: index.php');
                        }
                    }
                } else {
                    echo 'Los datos ingresados no son correctos';
                }
            }

            ?>
            <a href="./registro.php" class="btn_secondary">Registrarme</a>

        </div>
    </div>
</body>

</html>