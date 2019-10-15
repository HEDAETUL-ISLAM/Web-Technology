<?php
    $servername = "localhost";
    $username = "root";
    $password = "bulbul";
    $dbname = "demo";

    try{
        $conn = new PDO("mysql:host = $servername", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "create database demo";
        $conn -> exec($query);
        echo "done ";
    }
    catch(PDOException $e){
        echo "faild ".$e->getMessage();
    }

?>