<?php
    $servername = "localhost";
    $username = "root";
    $password = "bulbul";
    $dbname = "demo";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $conn -> prepare("INSERT INTO person (firstname, email, passwords) VALUES (:firstname, :email,:passwords)");
        $statement->bindParam(':firstname', $firstname);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':passwords', $passwords);

        $firstname = "pinky";
        $email = "pinky@mail.com";
        $passwords = "12340";
        $statement->execute();

        $firstname = "push";
        $email = "pinky@mail.com";
        $passwords = "12340";
        $statement->execute();

        $firstname = "pop";
        $email = "pinky@mail.com";
        $passwords = "12340";
        $statement->execute();

        echo "insert data successfully";
    }
    catch(PDOException $e){
        echo  $e->getMessage();
    }

?>