CREATE DATABASE stressFreePets;
USE stressFreePets;

CREATE TABLE IF NOT EXISTS User(
    userID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    password VARCHAR(45)
);

CREATE TABLE IF NOT EXISTS Admin(
    adminID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    surname VARCHAR(45),
    name VARCHAR(45),
    userID INT,
    
    FOREIGN KEY (userID) REFERENCES User (userID)
);

CREATE TABLE IF NOT EXISTS Customer(
    custID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(45),
    surname VARCHAR(45),
    address VARCHAR(255),
    email VARCHAR(255),
    phoneNum INT,
    dogName VARCHAR(255),
    dogType VARCHAR(255),
    dogAge INT,
    img VARCHAR(255),
    userID INT,
    
    FOREIGN KEY (userID) REFERENCES User (userID)
);

CREATE TABLE IF NOT EXISTS Businessess(
    businessID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    password VARCHAR(255),
    businessName VARCHAR(255),
    street VARCHAR(45),
    city VARCHAR(45),
    county VARCHAR(45),
    phoneNum VARCHAR(45),
    provServices VARCHAR(60),
    certs VARCHAR(45),
    img VARCHAR(255),
    userID INT,
    
    FOREIGN KEY (userID) REFERENCES User (userID)
);

CREATE TABLE IF NOT EXISTS RequestedProfile(
    requestID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    custID INT,
    businessID INT,
    street VARCHAR(45),
    city VARCHAR(45),
    county VARCHAR(45),
    phoneNum VARCHAR(45),
    provServices VARCHAR(60),
    certs VARCHAR(45),
    img VARCHAR(255),
    
    FOREIGN KEY (custID) REFERENCES Customer(custID),
    FOREIGN KEY (businessID) REFERENCES Businessess(businessID)
);

CREATE TABLE IF NOT EXISTS Booking(
    bookingID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    services VARCHAR(25),
    datesAvailable TIMESTAMP,
    price INT,
    description VARCHAR(45),
    location VARCHAR(45),
    sittingInOut VARCHAR(45),
    additionalCosts VARCHAR(45),
    collectionOption VARCHAR(45),
    slotBooked TIMESTAMP,
    businessID INT,
    
    FOREIGN KEY (businessID) REFERENCES Businessess(businessID)
);

CREATE TABLE IF NOT EXISTS Invoice(
    invoiceID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    price INT,
    date DATE,
    serviceName VARCHAR(36),
    businessID INT,
    custID INT,
    
    FOREIGN KEY (businessID) REFERENCES Businessess(businessID),
    FOREIGN KEY (custID) REFERENCES Customer(custID)
);
