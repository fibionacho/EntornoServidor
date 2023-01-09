<?php
require('db.php');
session_start();


$registro = "";
$user = "";
$mail = "";
$psw = "";
$errorList = [];


$consulta = $db->prepare("SELECT * FROM foro WHERE usuario = :usuario LIMIT 1");
$consulta->execute([":usuario" => $registro]);
$usuario = $consulta->fetch();


if (isset($_POST["submit"])) {
 /*METER LA CONSULTA AQUI DENTRO APRA COMPARARLA UNA A UNA */

    if ($usuario["correo"] == $_POST["mail"]) {
        $errorList = "Correo en uso";
    } else {
        $mail = $_POST["mail"];

        if ($usuario["usuario"] == $_POST["nombre"]) {
            $errorList = "nombre de usuario en uso";
        } else {
            $user = $_POST["nombre"];

            if ($_POST["contrasena"] === $_POST["repetir"]) {
            } else {
                $psw = $_POST["contrasena"];

                $insert = $db->prepare("INSERT INTO foro (usuario, correo, password) VALUES (:user, :mail, :pass)");
                $insert->bindParam(":user", $user);
                $insert->bindParam(":mail", $mail);
                $insert->bindParam(":pass", $psw);

                $insert->execute();
            }
        }
    }
}




/*if(isset($_POST["submit"])){
    if($_POST["mail"])
}*/

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/principal.css">
    <link rel="stylesheet" href="estilos/iniciar.css">
</head>

<body>
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
            <form action="registro.php" method="post">
                <label for="mail">Introduzca dirección de correo</label>
                <br>
                <input type="email" name="mail" id="mail">
                <br>

                <label for="nombre">Introduzca nombre de Usuario</label>
                <br>
                <input type="text" name="nombre" id="nombre">
                <br>

                <label for="contrasena">Escriba una contraseña</label>
                <br>
                <input type="password" name="contrasena" id="contrasena">
                <br>

                <label for="repetir">Repita contraseña</label>
                <br>
                <input type="password" name="repetir" id="repetir">

                <label for="submit">&nbsp;</label>
                <br>
                <button type="submit" name="submit" class="login-button">Login</button>
            </form>
        </div>
</body>

</html>