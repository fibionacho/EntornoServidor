<?php
print_r("Hola Mundo");



try {
    
    $base='mysql:host=localhost;dbname=examen';
    $user='nacho';
    $psswd='1234';

    
    $mbd= new PDO($base,$user,$psswd);
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Check connection status
   // echo $mdb->getAttribute(PDO::ATTR_CONNECTION_STATUS);

    $resultado=$mbd->prepare('INSERT INTO Logs (navegador, timestamp) VALUES(:nav, :times)');
    
    $nav=explode(" ",$_SERVER["HTTP_USER_AGENT"]);
    $realNav=$nav[0];
    $tiempo=($_SERVER["REQUEST_TIME"]);

    $resultado->execute(
        [':nav'=>$realNav,':times'=>$tiempo]
    );



} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();


}



?>