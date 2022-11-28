<?php
$data = file_get_contents(
    "temazos.csv"
);


$data = explode("\n", $data);
array_pop($data);
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
    <table>
    <thead>
        <tr>
            <th>Temazo</th>
            <th>Hora</th>
            <th>Minuto</th>
        </tr>
    </thead>
    <tbody>
        
            <?php
            foreach ($data as $line =>$valor) {
                echo "<tr>";
                $valor= explode(";",$valor);
                echo "<td>$valor[0]</td>";
                echo "<td>$valor[1]</td>";
                echo "<td>$valor[2]</td>";
                echo "</tr>";
            }
            ?>
        
    </tbody>

    </table>
    
</body>
</html>