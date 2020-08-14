<?php

    $password = "";
    $username = "root";
    $bd = "si-au-aha";
    $server = "localhost";

    try {

        $pdo = new PDO('mysql:host='. $server .';dbname=' . $bd, $username, $password);
        
        // echo 'Conectado';
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }

?>