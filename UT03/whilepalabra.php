<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>whilePalabra</title>
</head>
<body>
    

    <?php
    $contador=0;
    $palabra="Cerrajero";
    while ($palabra[$contador]!="a" && $palabra[$contador]!="A") {
        $letra=$palabra[$contador];?>
        <h4><?=$letra?></h4>
        <?php $contador++;
    }

    ?>

</body>
</html>