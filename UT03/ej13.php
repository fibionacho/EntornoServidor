<?php 

$opciones = [
    "Madrid" => 28,
    "Sevilla" => 17,
    "Cáceres" => 56,
];


function genera_select(array $opciones, int $seleccionada=-1)
{?>
    <select>
        <?php foreach ($opciones as $key => $value) {?>
            <option value="<?= $key ?>"<?php if($value == $seleccionada) echo " selected"; ?>><?= $key ?></option>
            <?php
        }?>
    </select>
<?php }
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
    <?php
    genera_select($opciones,56);
    ?>
    
</body>
</html>