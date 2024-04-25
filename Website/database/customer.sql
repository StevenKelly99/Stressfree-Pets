CREATE DATABASE customers;
use customers;
CREATE TABLE CustomerApplication (
     id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     firstname VARCHAR(30) NOT NULL,
     lastname VARCHAR(30) NOT NULL,
     Address VARCHAR(50) NOT NULL,
     email VARCHAR(50) NOT NULL,
     password VARCHAR(50) NOT NULL,
     phone INT(20) NOT NULL,
     dogName VARCHAR(50) NOT NULL,
     dogType VARCHAR(50) NOT NULL,
     age INT(3),
     addinfo VARCHAR(50) NOT NULL
);


