<?php
require("..\src\init.php");
function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST["login"])) {
    $nombre = $_POST["nombre"];
    $passwd = $_POST["passwd"];
    $recuerdame = $_POST["recuerdame"];
    //consulta bbdd

    $DB->ejecuta("SELECT id, nombre, passwd FROM usuarios WHERE nombre=?", $_POST["nombre"]);




    if (password_verify($user["passwd"], $_POST["passwd"])) {
        $_SESSION["id"] = $user["id"];
        $_SESSION["nombre"] = $user["nombre"];

        if (isset($_POST["recuerdame"]) && $_POST["recuerdame"] == "on") {
            //generar token
            $token = bin2hex(openssl_random_pseudo_bytes(LONG_TOKEN));
            //GUARDAR TOKEN
            $DB->ejecuta(
                "INSERT INTO tokens VALUES( id_usuario, valor) VALUES(?, ?)",
                $_SESSION["id"],
                $token
            );
            //cookie con token
            setcookie(
                "recuerdame",
                $token,
                [
                    "expires"=>time() + 7*24*60*60,
                    //"secure"=>true,
                    "httponly"=>true
                ]
            );
        }
    } else {
        echo "Mostrar error";
    }
}


//RECOGER DATOS DEL POST
//CONSULTA A BBDD POR USER
//VERIFICAR CONTRASEÑA

//SI HA PEDIDO RECUERDAME
//GENERAR TOKEN, GUARDAR TOKEN, COOKIE CON TOKEN
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        User: <input type="text" name="nombre" id="">

        Pass: <input type="password" name="passwd" id="">

        Recuerdame: <input type="checkbox" name="recuerdame" id="">
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>