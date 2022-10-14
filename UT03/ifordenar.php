 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Ordenar</title>
 </head>
 <body>
    
    <?php
            $num1=mt_rand(0,99);
            $num2=mt_rand(0,99);
            $num3=mt_rand(0,99);

            if($num1>=$num2 && $num2>=$num3){?>
                <h1><?=$num1?></h1>
                <br>
                <h2><?=$num2?></h2>
                <br>
                <h3><?= $num3?></h3>
            <?php }elseif($num1>=$num3 && $num3>=$num2){?>
                <h1><?= $num1?></h1>
                <br>
                <h2><?= $num3?></h2>
                <br>
                <h3><?= $num2?></h3>
            
            <?php }elseif($num2>=$num1 && $num1>=$num3){?>
                <h1><?= $num2?></h1>
                <br>
                <h2><?= $num1?></h2>
                <br>
                <h3><?= $num3?></h3>
           <?php }elseif($num2>=$num3 && $num3>=$num1){?>
                <h1><?= $num2?></h1>
                <br>
                <h2><?= $num3?></h2>
                <br>
                <h3><?= $num1?></h3>
            <?php }elseif($num3>=$num1 && $num1>=$num2){?>
                <h1><?= $num3?></h1>
                <br>
                <h2><?= $num1?></h2>
                <br>
                <h3><?= $num2?></h3>
            <?php }else{?>
                <h1><?= $num3?></h1>
                <br>
                <h2><?= $num2?></h2>
                <br>
                <h3><?= $num1?></h3>
            <?php } ?>
 </body>
 </html>