<?php
session_start();

$numero = isset($_SESSION["numero"]) ? $_SESSION["numero"] : rand(0, 10);
$_SESSION["numero"] = $numero;

$intentos = 4;
$intentos = isset($_SESSION["intentos"]) ? $_SESSION["intentos"] : 4;
$intentos--;
$_SESSION["intentos"] = $intentos;
echo $numero;
echo "<br>";
echo $intentos;

function adivinar($num, $numero)
{
    if ($num < $numero) {
        echo "El número que has dicho es menor";
    } else if ($num > $numero) {
        echo "el número que has dicho es mayor";
    } else echo "Has acertado!";
}

function kill($intentos){
    if($intentos<=0){
        session_destroy();
    }
}


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
    <form action="numSession.php" method="get">
        <input type="number" name="num" id="">
        <button type="submit">Intentar</button>
    </form>
    <?php
    if (isset($_GET["num"])) {
        adivinar($_GET["num"], $numero);
    }
    kill($intentos);
    ?>

</body>

</html>