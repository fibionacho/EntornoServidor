<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo</title>
</head>
<body>
    <?php
    $n=101;

    function esPrimo($n){
        $retorno=true;
            for($i=2;$i<=$n/2 && $retorno;$i++){
                if($num%$i==0){
                    $retorno=false;
                }
            }
            return $retorno;
    }

    while(!esPrimo($n) && $n!=17){
        $n=mt_rand(0,100)?>
        <span><?=$n?> </span>
    <?php } ?>
    


  
</body>
</html>