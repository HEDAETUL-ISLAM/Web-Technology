<?php

    $servername = "localhost";
    $username = "root";
    $password = "bulbul";
    $dbName = "demo";

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "select * from person";
        $data = $conn->query($query)->fetchAll();

        foreach ($data as $row) {
            echo"<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " Email" . $row["email"] . "<br>";
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>
