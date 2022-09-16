<?php
    $msg="Hola, soy PHP";
    $num=5;
    $hasta=10;
?>

<html>
    <head>
        <title>Hola mundo de php</title>
    </head>
    <body>
         <table>
        
           
                <tr>
                    <td colspan="2">Multiplica</td>
                    
                </tr>
                <?php for($i=0; $i<= $hasta; $i++){ ?>
            <tr>
                <td> <?php echo $num . " x " . $i ?></td>
                <td> <?php echo $num*$i ?></td>
            </tr>
        <?php } ?>
         </table>
    </body>
</html>