<?php

namespace src;

class CRUD
{
    public function createEntryCustomer()
    {
        $config = require '../lib/config.php';
        global $connection, $sql, $result;

        $customerID = ''; // Assign default values or remove if not needed
        $firstname = '';
        $lastname = '';
        $dogBreed = '';
        $dogImage = '';
        $phone = '';
        $image = '';
        $addinfo = '';
        $userID = '';
        $dogName = '';
        $age = '';

        $pdo = new \PDO($config['database_dsn'], $config['database_user'], $config['database_pass']);

        $sql = sprintf("INSERT INTO %s (%s) VALUES (:%s)", "users",
            implode(", ", array_keys($array)),
            implode(", :", array_keys($array)));

        $statement = $pdo->prepare($sql);
        $statement->bindParam(':customerID', $customerID);
        $statement->bindParam(':firstname', $firstname);
        $statement->bindParam(':lastname', $lastname);
        $statement->bindParam(':dogBreed', $dogBreed);
        $statement->bindParam(':dogImage', $dogImage);
        $statement->bindParam(':phone', $phone);
        $statement->bindParam(':image', $image);
        $statement->bindParam(':addinfo', $addinfo);
        $statement->bindParam(':userID', $userID);
        $statement->bindParam(':dogName', $dogName);
        $statement->bindParam(':age', $age);

        $result = $statement->execute();

        header("location:../public/thankYou.php");
        exit(); // Always exit after a header redirect
    }
}
