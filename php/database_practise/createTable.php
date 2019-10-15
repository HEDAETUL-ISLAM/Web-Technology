<?php
    $servername = "localhost";
    $username = "root";
    $password = "bulbul";
    $dbname = "demo";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "CREATE TABLE person (
            id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname varchar(30) NOT NULL,
            email varchar(50),
            passwords varchar(50),
            reg_date timestamp DEFAULT CURRENT_TIMESTAMP ON update CURRENT_TIMESTAMP
        )";
        $conn->exec($query);
        echo "Table demo created successfully";
    }
    catch(PDOException $e){
        echo  $e->getMessage();
    }
    
    //insert database
    // $insert_person = "INSERT INTO person (firstname, email, passwords) VALUES ('John', 'john@example.com','12345')";

    // if ($conn->query($insert_person) === TRUE) {
    //     echo"successfully done with table insert";
    // } else {
    //     echo"sorry not done with table insert";
    // }

?>