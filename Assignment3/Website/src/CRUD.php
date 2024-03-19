<?php

namespace src;

class CRUD
{


    public function createEntryCustomer($customerID,$firstname, $lastname,$dogBreed,$dogImage,
                                $phone,  $image,$addinfo,$userID,$dogName,$age){


    $config = require '../lib/config.php';
    global $connection, $sql, $result;





        $pdo = new PDO($config['database_dsn'],$config['database_user'],$config['database_pass']);

        $sql = "INSERT INTO customer(custID,name, surname,petBreed, 
                                petImg, phoneNum,image,info,userID,dogName,age) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $pdo -> prepare($sql);
        $statement ->bindParam(1,$customerID);
        $statement ->bindParam(2,$firstname);
        $statement ->bindParam(3,$lastname);
        $statement ->bindParam(4,$dogBreed);
        $statement ->bindParam(5,$dogImage);
        $statement ->bindParam(6,$phone);
        $statement ->bindParam(7,$image);
        $statement ->bindParam(8,$addinfo);
        $statement ->bindParam(9,$userID);
        $statement ->bindParam(10,$dogName);
        $statement ->bindParam(11,$age);


        $result = $statement -> execute();

        header("location:../public/thankYou.php");





}

}
header("location:../public/thankyou.php");