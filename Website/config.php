<?php
/**
 * Configuration for database connection
 *
 */
$host       = "localhost";
$username   = "root";
$password   = "HabibaAN@Mysql29--";
$dbname     = "customers";
//$dbname2    = "businesses";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);