<?php

namespace src;

class CRUD
{


    public function createEntry($firstname, $lastname,$Address,$email,
                                $phone,$dogName, $dogType, $age,$addinfo,$dogImage){


    $config = require '../lib/config.php';
    global $connection, $sql, $result;
    // require "src/common.php";





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







}

}
header("location:../public/index.php");