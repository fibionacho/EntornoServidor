<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forpalabra</title>
</head>
<body>
    <?php  
    
    $palabra="Mojito";
    for($i=0;$i<=strlen($palabra);$i++){
        $letra=substr($palabra,$i,1);?>
        <h4><?=$letra?></h4>
    <?php } ?>
    
    
    

</body>
</html>