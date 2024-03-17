use stressfreepets;

CREATE TABLE IF NOT EXISTS User(
userID INT PRIMARY KEY,
email VARCHAR(255),
password VARCHAR(45)
);

CREATE TABLE IF NOT EXISTS Admin(
adminID INT PRIMARY KEY,
surname VARCHAR(45),
name VARCHAR(45),
userID INT,

FOREIGN KEY (userID) REFERENCES User (userID)
);

CREATE TABLE IF NOT EXISTS Customer(
custID INT PRIMARY KEY,
name VARCHAR(45),
surname VARCHAR(45),
petBreed VARCHAR (45),
petImg VARCHAR (255),
phoneNum INT,
image VARCHAR (255),
info VARCHAR (45),
userID INT,

FOREIGN KEY (userID) REFERENCES User (userID)
);


CREATE TABLE IF NOT EXISTS Businessess(
businessID INT PRIMARY KEY,
name VARCHAR (45),
address VARCHAR (45),
city VARCHAR (45),
county VARCHAR (45),
service VARCHAR (45),
certs VARCHAR (45),
img VARCHAR(255),
userID int,

FOREIGN KEY (userID) REFERENCES User (userID)
);

CREATE TABLE IF NOT EXISTS ServiceType(
serviceName VARCHAR(36) PRIMARY KEY,
description VARCHAR(45),
img VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS RequestedProfile(
requestID INT PRIMARY KEY,
description VARCHAR (45),
date DATE,
serviceName VARCHAR (36),
custID INT,
adminID INT,

FOREIGN KEY (custID) REFERENCES Customer(custID),
FOREIGN KEY (serviceName) REFERENCES ServiceType(serviceName),
FOREIGN KEY (adminID) REFERENCES Admin (adminID)
);

CREATE TABLE IF NOT EXISTS Reviews(
reviewID INT PRIMARY KEY,
comment VARCHAR (255),
stars DECIMAL(5, 2),
date DATE,
custID INT,
businessID INT,

FOREIGN KEY (custID) REFERENCES Customer(custID),
FOREIGN KEY (businessID) REFERENCES Businessess(businessID)
);

CREATE TABLE IF NOT EXISTS Daycare(
daycareID INT PRIMARY KEY,
timeSlot VARCHAR (45),
datesAvailable DATE,
price VARCHAR (45),
description VARCHAR (45),
availableSlots VARCHAR (45),
facilities VARCHAR (45),
businessID INT,

FOREIGN KEY (businessID) REFERENCES Businessess(businessID)
);

CREATE TABLE IF NOT EXISTS PetWalking(
walkingID INT PRIMARY KEY,
timeSlot VARCHAR(45),
datesAvailable DATE,
price INT,
description VARCHAR (45),
meetingPoint VARCHAR(45),
businessID INT,

FOREIGN KEY (businessID) REFERENCES Businessess(businessID)
);

CREATE TABLE IF NOT EXISTS PetSitting(
sittingID INT PRIMARY KEY,
timeSlot VARCHAR (45),
datesAvailable DATE,
price INT,
description VARCHAR (45),
location VARCHAR (45),
sittingInOut VARCHAR (45),
additionalCosts VARCHAR(45),
collectionOption VARCHAR (45),
businessID INT,

FOREIGN KEY (businessID) REFERENCES Businessess(businessID)
);

CREATE TABLE IF NOT EXISTS Invoice(
invoiceID INT PRIMARY KEY,
price INT,
date DATE,
serviceName VARCHAR(36),
businessID INT,
custID INT,

FOREIGN KEY (serviceName) REFERENCES ServiceType (serviceName),
FOREIGN KEY (businessID) REFERENCES Businessess(businessID),
FOREIGN KEY (custID) REFERENCES Customer(custID)
);