<?php

namespace src;

class CRUD
{

    function get_business()
    {

        require '../config.php';

        try{
            require_once "../src/DBConnect.php";
            $sql = "SELECT * FROM BusinessApplication";
            $stmnt = $connection->prepare($sql);
            $stmnt ->execute();
        }
        catch (PDOException $exception){
            echo "Error couldnt connect";
        }
        return $stmnt->fetchAll();


    }
}
