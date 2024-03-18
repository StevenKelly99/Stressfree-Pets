<?php

namespace src;


class User
{
     protected $username;
     protected $password;

    public function get_user($user,$password){

    require '../lib/config.php';
    $config = require '../lib/config.php';
    try{
    $pdo = new \PDO($config['database_dsn'], $config['database_user'],$config['database_pass']);
    $query = 'INSERT INTO testing values(?,?)';
    $stmnt =  $pdo->prepare($query);
    $stmnt ->bindParam(1,$user);
    $stmnt->bindParam(2,$password);
    $stmnt->execute();}
    catch (PDOException $exception){
            echo "Error couldnt connect";
        }
    return $stmnt->fetch();
}


}
