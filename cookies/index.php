<?php

$aceptada = false;

if (isset($_GET["aceptar"]) && ($_GET["aceptar"] == "aceptar")) {

    $aceptC = true;
} else {
    $aceptC = false;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            width: 100%;
            position: fixed;
            bottom: 10%;
            text-align: center;
            background-color: gray;
            height: 30%;
        }

        button {
            width: 20%;
            height: 20%;
            margin-top: 2%;
            padding: 2%;
            margin-bottom: 2%;
        }

        #aceptar {
            background-color: green;
            font-weight: bold;
        }

        #denegar {
            background-color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Bienvenido</h1>
    <a href="verificado.php">Enlace</a>

    <?php
    if ($aceptC) {
        setcookie("verificado", "chichahoy");
    } else {
    ?>

        <form action="index.php" method="get">
            <h2>Debe aceptar las cookies antes de continuar</h2>
            <button id="aceptar" type="submit" value="aceptar" name="aceptar">Aceptar cookies</button>
            <button id="denegar" type="submit" value="denegar" name="aceptar">Denegar cookies</button>
        </form>

    <?php } ?>

    <?php

    ?>

</body>

</html>