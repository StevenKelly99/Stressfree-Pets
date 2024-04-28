<?php
// tests for testing customer class. error causing test will be commented out so that other tests can run
use src\User;

require  '../src/User.php';
require '../src/Customer.php';
//test 1 test where user id is set with user object
$user6 = new User(5);
$customer1 = new \src\Customer($user6->getUserID(),6);
echo "   Test1 \nUserId: ", $customer1->getUserID(), " CustomerId:  ", $customer1->getCustomerId();

//test 2 where user id is set with number
$customer2 = new \src\Customer(9,10);
echo "\n   Test 2\nUserId:",$customer2->getUserID()," CustomerId: ", $customer2->getCustomerId();

//test 3  test of getters and setters
$customer3 = new \src\Customer(8,9);
$customer3->setEmail("hello@hotmail.com");
$customer3->setPassword("hellofd");
$customer3->setFirstName("helen");
$customer3->setLastName("green");
$customer3->setAddress("mainStreet, kinnegad");
$customer3->setPhoneNumber(156464646);
$customer3->setAdditionalInfo("nono");
$customer3->setDogName("pluto");
$customer3->setDogType("poodle");
$customer3->setDogPicture("none");

echo "\n   Test 3 \nUserID: ", $customer3->getUserId(), " CustomerID: ", $customer3->getCustomerId(), " Email: ", $customer3->getEmail(),
    " Password: ", $customer3->getPassword(), " Firstname: ", $customer3->getFirstName(), " Lastname: ", $customer3->getAddress(),
    " Phone number: ", $customer3->getAdditionalInfo(), " Dogname: ", $customer3->getDogName(),  " Dogtype: ",$customer3->getDogType(),
    " DogPicture: ", $customer3->getDogPicture();

//test 4 customerID is non string
$customer4 = new \src\Customer(5, "test");
echo "\n   Test 4 \n ","UserId: ", $customer4->getUserID(), " CustomerID: ", $customer4->getCustomerId();