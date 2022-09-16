<?php
    $hasta=10;
?>

<html>
    <head>
        <title>Hola mundo de php</title>
    </head>
    <body>
        
        
        
         <table>
        
            <tr>
                <?php for($i=0; $i<$hasta; $i++){ ?>
                
                 <?php for($j=0; $j<$hasta;$j++){ ?>
                    <td> <?php echo $j+($i*10)?></td>
                <?php } ?>
                
            </tr>
        <?php } ?>
         </table>
    </body>
</html>