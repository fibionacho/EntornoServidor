<?php
try {

    $options =[
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    
        $db = new PDO('mysql:host=localhost;dbname=foro;charset=utf8mb4', 'root', '');
        $db->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "\n";
        die();
    }
?>