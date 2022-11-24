<?php

print_r( $_GET["id"]);

try {

    $mbd = new PDO('mysql:host=localhost;dbname=examen', "nacho", "1234");

    // Utilizar la conexión aquí
    $resultado = $mbd->prepare('SELECT * FROM Ciclistas WHERE id=(:cosa)');
    $resultado->bindValue('cosa',$_GET["id"]);


    /*MOSTRARLO COMO ARRAY ASOCIATIVO */
    $resultado->setFetchMode(PDO::FETCH_ASSOC);
    
    foreach($resultado as $fila){
        echo $fila["nombre"];
    }

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}
?>