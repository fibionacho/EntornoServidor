<?php
  try {
    
    $base='mysql:host=localhost;dbname=examen';
    $user='nacho';
    $psswd='1234';

    
    $mbd= new PDO($base,$user,$psswd);
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Check connection status
   // echo $mdb->getAttribute(PDO::ATTR_CONNECTION_STATUS);

    $resultado=$mbd->prepare('SELECT * FROM Logs');
    
    $nav=explode(" ",$_SERVER["HTTP_USER_AGENT"]);
    $realNav=$nav[0];
    $tiempo=($_SERVER["REQUEST_TIME"]);

    $resultado->execute(
        $base = $resultado->fetchAll  ()
    );



    echo "<table>";
    foreach ($resultado as $fila){
        echo "<tr><td>".$fila["navegador"]."</td><td>".$fila["timestamp"]."</td></tr>";
     
    }
    echo "</table>";
   $resultado = null;
    $mbd = null;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();


}



?>