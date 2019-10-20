<?php
require_once "../model/Person.php";
require_once "../model/Login.php";
function insertPerson(Person $person)
{
    try {
        $connection = new PDO("mysql:host=localhost; dbname=demo", "root", "bulbul");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO person (firstname, email, passwords) VALUES ('" . $person->getFirstName() . "' ,'" . $person->getEmail() . "' , '" . $person->getPasswords() . "')";
        $connection->exec($query);
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
function loginPerson(Login $login)
{
    try {
        $connection = new PDO("mysql:host=localhost; dbname=demo", "root", "bulbul");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "select * from person where id='" . $login->getId() . "' and passwords= '" . $login->getPasswords() . "'";
        $statement = $connection->prepare($query);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            $result = $statement->fetch(PDO::FETCH_OBJ);
            return $result->id;
        } else {
            return 0;
        }
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
function getPerson($id)
{
    try {
        $connection = new PDO("mysql:host=localhost; dbname=demo", "root", "bulbul");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "select * from person where id='" . $id . "' ";
        // $statement = $connection->prepare($query);
        // $statement->execute();
        // if ($statement->rowCount() > 0) {
        //     return $statement->fetch(PDO::FETCH_OBJ);
        // } else {
        //     return 0;
        // }
        $data = $connection->query($query)->fetchAll();
        return $data;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
