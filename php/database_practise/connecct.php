<?php
    $servername = "localhost";
    $username = "root";
    $password = "bulbul";
    $dbname = "demo";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=demo", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    

?>