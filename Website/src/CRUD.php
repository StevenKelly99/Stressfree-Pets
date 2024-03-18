<?php

namespace src;

class CRUD
{
function createEntry(){

if (isset($_POST['submit'])){
    $config = require '../lib/config.php';
    global $connection, $sql, $result;
    // require "src/common.php";

    try {
        $new_user = array(
            $firstname = $_POST['firstname'],
            $lastname = $_POST['lastname'],
            $Address = $_POST['Address'],
            $email = $_POST['email'],
            $phone = $_POST['phone'],
            $dogName = $_POST['dogName'],
            $dogType = $_POST['dogType'],
            $age = $_POST['age'],
            $addinfo = $_POST['addinfo'],
            $dogImage = $_POST['dogImageFiles'],
        );



        $pdo = new PDO($config['database_dsn'],$config['database_user'],$config['database_pass']);

        $sql = "INSERT INTO customerapplecation(firstname, lastname,Address,email, 
                                phone,dogName, dogType, age,addinfo,dogImage) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $statement = $pdo -> prepare($sql);
        $statement ->bindParam(1,$firstname);
        $statement ->bindParam(2,$lastname);
        $statement ->bindParam(3,$Address);
        $statement ->bindParam(4,$email);
        $statement ->bindParam(5,$phone);
        $statement ->bindParam(6,$dogName);
        $statement ->bindParam(7,$dogType);
        $statement ->bindParam(8,$age);
        $statement ->bindParam(9,$addinfo);
        $statement ->bindParam(10,$dogImage);


        $result = $statement -> execute();


    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }


}

}

}
header("location:../public/index.php");
exit;