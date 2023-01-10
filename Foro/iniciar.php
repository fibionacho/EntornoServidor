<?php
require('db.php');
session_start();

function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



$login = "";
$password = "";
$errorList = [];
$url = "";

if (isset($_POST["submit"])) {
    if (isset($_POST["nombre"])) {
        $login = clean_input($_POST["nombre"]);
    }

    /*if (!filter_var($login, FILTER_VALIDATE_EMAIL)) {
      $errorList[] = "Usuario inválido";
      //http://php.net/manual/es/filter.filters.php
    }*/


    if (isset($_POST["contrasena"])) {
        $password = clean_input($_POST["contrasena"]);
    }


    $consulta = $db->prepare("SELECT * FROM foro WHERE usuario = :usuario LIMIT 1");
    $consulta->execute([":usuario" => $login]);
    $usuario = $consulta->fetch();


    if (isset($usuario) && /*password_verify*/($password==$usuario["password"])) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["name"] = $login;
        
       /* if ($url != "") {
            header('Location: ' . $url);
        } else {
            header('Location: index.php');
        }
        exit;*/
        header('Location: foro.php');
        $errorList[] = "funciona";
    } else {
        $errorList[] = "Clave errónea";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="estilos/principal.css">
    <link rel="stylesheet" href="estilos/iniciar.css">
</head>

<body>
    <!--Aqui empieza el navegador que deberá estar en todos lados-->
    <div id="margen">
        <div id="navegador">
            <p id="logo">Foro Romano</p>
            <div id="enlace">
                <a href="iniciar.php" class="enlace">Iniciar sesión</a>
                <a href="registro.php" class="enlace">Registrarse</a>
            </div>
        </div>
        <h1>Página de inicio de sesión</h1>
        <h2>Foro para discutir sobre foros. Especialistas en construcciones greco-latinas</h2>
        <div id="inicioSesion">
            <form action="iniciar.php" method="post">
                <label for="nombre">Introduzca el nombre del usuario</label>
                <br>
                <input type="text" name="nombre" id="nombre">
                <br>
                <label for="contrasena">Introduzca su contraseña</label>
                <br>
                <input type="password" name="contrasena" id="contrasena">
                <br>


                <?php if (count($errorList) > 0) { ?>
                    <p>
                        <?php foreach ($errorList as $error) { ?>
                    <div class="error"><?= $error ?></div>
                <?php } ?>
                </p>
            <?php } ?>

            <p>
                <label for="submit">&nbsp;</label>
                <button type="submit" name="submit" class="login-button">Login</button>
            </p>
            </form>
        </div>
    </div>
</body>

</html>