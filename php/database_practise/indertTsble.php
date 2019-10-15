<?php
    $servername = "localhost";
    $username = "root";
    $password = "bulbul";
    $dbname = "demo";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO person (firstname, email, passwords) VALUES ('hedaet', 'hedaet@example.com','12346')";
        $conn->exec($query);
        echo "insert data successfully";
        $last_id = $conn->lastInsertId();
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    }
    catch(PDOException $e){
        echo  $e->getMessage();
    }

?>