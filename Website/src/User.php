<?php

namespace src;


class User
{
     protected $username;
     protected $password;
    function get_user($user){

    require '../lib/config.php';
    $config = require '../lib/config.php';
    $pdo = new \PDO($config['database_dsn'], $config['database_user'],$config['database_pass']);
    $query = 'SELECT email,password from User WHERE email = :idVal';
    $stmnt =  $pdo->prepare($query);
    $stmnt ->bindParam('idVal',$user);
    $stmnt->execute();

    return $stmnt->fetch();
}





}
