<?php

    try {
        
        $pdo = new PDO('mysql:host=localhost;dbname=si-au-aha', 'root', '');
        
        // echo 'Conectado';
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }

?>