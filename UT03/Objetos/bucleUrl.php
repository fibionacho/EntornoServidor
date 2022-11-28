<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
    <?php
    //dibujar tabla bucleURL.php?valor=estoy&act=recorriendo&un=array
        foreach ($_GET as $key => $value) {?>
         <tr>
            <td><?=$key?></td>
            <td><?=$value?></td>
        </tr>   
        <?php }
    ?>
    </table>
</body>
</html>