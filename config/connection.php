<?php 

    $host = 'db';
    $dbname = "agenda";
    $user = 'root';
    $pass = "root";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        // Turn on errors mode
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        // connection error
        $error = $e->getMessage();
        echo "Error: $error";
    }