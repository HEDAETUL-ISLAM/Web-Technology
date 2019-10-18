<?php
require_once "../model/Person.php";
require_once "../model/Login.php";
class PersonController
{
    public function insertPerson(Person $person)
    {
        try {
            $connection = new PDO("mysql:host=localhost; dbname=demo", "root", "bulbul");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "INSERT INTO person (firstname, email, passwords) VALUES ('" . $person->getFirstName() . "' ,'" . $person->getEmail() . "' , '" . $person->getPasswords() . "')";
            $connection->exec($query);
        } catch (PDOException $e) {
            echo  $e->getMessage();
        }
    }
    public function loginPerson(Login $login)
    {
        try {
            $connection = new PDO("mysql:host=localhost; dbname=demo", "root", "bulbul");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "select * from person where id='" . $login->getId() . "' and passwords= '" . $login->getPasswords() . "'";
            $statement = $connection->prepare($query);
            $statement->execute();
            if ($statement->fetch(PDO::FETCH_ASSOC)) {
                return 1;
            } else {
                return 0;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function getPerson($id)
    {
        try {
            $connection = new PDO("mysql:host=localhost; dbname=demo", "root", "bulbul");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "select * from person where id=1";
            $statement = $connection->prepare($query);
            $statement->execute();
            if ($statement->fetch(PDO::FETCH_ASSOC)) {
                $person = new Person($statement["firstname"], $statement["email"], $statement["passwords"]);
                echo $person;
                return $person;
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
