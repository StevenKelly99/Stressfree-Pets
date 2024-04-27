CREATE DATABASE if not exists applications;
use applications;

CREATE TABLE if not exists CustomerApplication (
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

CREATE TABLE if not exists BusinessApplication (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT null ,
    email VARCHAR(50) ,
    password VARCHAR(50) ,
    businessName VARCHAR(50) ,
    streetAddress VARCHAR(50) ,
    city VARCHAR(50),
    county VARCHAR(50) ,
    phoneNumber INT(20),
    services VARCHAR(50),
    certs VARCHAR(50) NOT NULL,
    certFiles VARCHAR(50) ,
    businessImage VARCHAR(50) NOT NULL
);

CREATE TABLE if not exists Admin(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50),
    email VARCHAR(50) ,
    password VARCHAR(50)
);
CREATE TABLE IF NOT EXISTS Booking(
    bookingId INT(11) UNSIGNED auto_increment PRIMARY KEY,
    service varchar(50),
    date date,
    time time,
    customerName varchar(200),
    dogName varchar(50),
    contactNumber int

);
Alter table Booking add column businessName varchar(50);
ALTER TABLE Booking auto_increment = 100;







