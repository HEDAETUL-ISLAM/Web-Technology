<?php

    $servername = "localhost";
    $username = "root";
    $password = "bulbul";
    $dbName = "demo";

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "delete from person where id=7";
        $result = $conn->exec($query);
        if($result==1){
            $query = "select * from person";
            $data = $conn->query($query)->fetchAll();

            foreach ($data as $row) {
                echo"<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " Email" . $row["email"] . "<br>";
            }
        }
        else{
            echo "blank";
        }

    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>
