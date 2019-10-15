<?php
    $servername = "localhost";
    $username = "root";
    $password = "bulbul";
    $dbname = "demo";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conn -> beginTransaction();
        $conn -> exec("INSERT INTO person (firstname, email, passwords) VALUES ('hedaet', 'hedaet@example.com','12346')");
        $conn -> exec("INSERT INTO person (firstname, email, passwords) VALUES ('islam', 'islam@example.com','12347')");
        $conn -> exec("INSERT INTO person (firstname, email, passwords) VALUES ('bulbul', 'bulbul@example.com','12348')");

        $conn -> commit();
        echo "insert data successfully";
    }
    catch(PDOException $e){
        $conn -> rollback();
        echo  $e->getMessage();
    }

?>