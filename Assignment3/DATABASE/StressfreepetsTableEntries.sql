INSERT INTO User (userID, email, password) VALUES (1, 'example@example.com', 'password123');

INSERT INTO Admin (adminID, surname, name, userID) VALUES (1, 'Doe', 'John', 1);

INSERT INTO Customer (custID, name, surname, petBreed, petImg, phoneNum, image, info, userID) 
VALUES (1, 'Jane', 'Doe', 'Golden Retriever', 'golden.jpg', 1234567890, 'customer.jpg', 'Friendly customer', 1);

INSERT INTO Businessess (businessID, name, address, city, county, service, certs, img, userID) 
VALUES (1, 'Pawsome Daycare', '123 Main St', 'Anytown', 'Anycounty', 'Daycare', 'Certified', 'daycare.jpg', 1);

INSERT INTO ServiceType (serviceName, description, img) 
VALUES ('Daycare', 'Pet daycare service', 'daycare.jpg');

INSERT INTO RequestedProfile (requestID, description, date, serviceName, custID, adminID) 
VALUES (1, 'Need pet daycare for a week', '2024-03-17', 'Daycare', 1, 1);

INSERT INTO Reviews (reviewID, comment, stars, date, custID, businessID) 
VALUES (1, 'Great service!', 4.5, '2024-03-17', 1, 1);

INSERT INTO Daycare (daycareID, timeSlot, datesAvailable, price, description, availableSlots, facilities, businessID) 
VALUES (1, 'Morning', '2024-03-17', '50', 'Full-day daycare', '5', 'Large play area', 1);

INSERT INTO PetWalking (walkingID, timeSlot, datesAvailable, price, description, meetingPoint, businessID) 
VALUES (1, 'Afternoon', '2024-03-17', 30, '30-minute walk', 'Park', 1);

INSERT INTO PetSitting (sittingID, timeSlot, datesAvailable, price, description, location, sittingInOut, additionalCosts, collectionOption, businessID) 
VALUES (1, 'Evening', '2024-03-17', 40, 'Evening pet sitting', 'Pet owner\'s home', 'Indoor', 'None', 'Customer drop-off', 1);

INSERT INTO Invoice (invoiceID, price, date, serviceName, businessID, custID) 
VALUES (1, 50, '2024-03-17', 'Daycare', 1, 1);
