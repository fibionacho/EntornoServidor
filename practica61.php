<?php

$n=25;
$m=10;
$arr=get_defined_vars();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 6.1</title>
</head>
<body>
    <?php print_r($arr)?>
    <br>
    <?php echo $n+$m?>
    <br>
    <?php echo $n-$m?>
    <br>
    <?php echo $n*$m?>
    <br>
    <?php echo $n/$m?>
    <br>
    <?php echo $n%$m?>
    <br>
    <?php echo ++$n ." ". ++$m?>
    <br>
    <?php echo --$n." ".--$m?>
</body>
</html>