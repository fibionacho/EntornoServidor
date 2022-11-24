<?php

try {
    $mbd = new PDO('mysql:host=localhost;dbname=examen', "nacho", "1234");

    // Utilizar la conexión aquí
    $resultado = $mbd->query('SELECT * FROM Ciclistas');
    /*MOSTRARLO COMO ARRAY ASOCIATIVO */
    $resultado->setFetchMode(PDO::FETCH_ASSOC);

/* 
     BUCLE FOREACH ORIGINAL
    foreach ($resultado as $fila){
      foreach ($fila as $clave => $valor){
        echo $clave."-". $valor . "\n";
      }
      echo "<br>";
    } */
        
   
    foreach ($resultado as $fila){
        echo "<a href='detalle.php?id=".$fila["id"]."'> ". $fila["nombre"]."</a>"." ".$fila["num_trofeos"]."<br>";
     
    }





    // Ya se ha terminado; se cierra
    $resultado = null;
    $mbd = null;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}

?>
