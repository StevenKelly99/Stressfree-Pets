<?php

$host       = "localhost";
$username   = "root";
$password   = "HabibaAN@Mysql29--";
$dbname     = "customers";
$dsn        = "mysql:host=$host;dbname=$dbname";


try{
    $pdo = new PDO($dsn ,$username, $password);

    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "database connected successfully";
}catch (PDOException $e){
    echo "Connection Failed: " . $e -> getMessage();
}

//$options    = array(
  //  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//);

