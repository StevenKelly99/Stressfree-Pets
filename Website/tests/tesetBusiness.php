<?php
// test will test business class. tests that cause error will be commented out so can be run when needed  and not interfere with other tests
require '../src/Business.php';
require_once '../src/Business.php';
//test one using user id set by object
$user4 = new \src\User(6);
$business1 = new \src\Business($user4->getUserID(),1);
$business1->setEmail(23234424);
$business1->setPassword("bakbhakhkkaefh");
$business1->setBusinessName("fidoPets");
$business1->setServiceProvided("4454544545");
$business1->setCertProof("omages");
$business1->setStreetAddress("main street");
$business1->setCity("atboy");
$business1->setCounty("meath");
$business1->setCertQualification("blahahaha");
$business1->setPhoneNumber(123322);

echo "\n Test1 \n", $business1->getUserID(), " ", $business1->getBusinessID(),
        " ",$business1->getBusinessName(), " ", $business1->getEmail(), " ",
    $business1->getPassword(), " ", $business1->getServiceProvided(), " ", $business1->getCertProof(),
    " ", $business1->getStreetAddress(), " ", $business1->getCity(), " ", $business1->getCounty(),
    " ", $business1->getCertQualification(), " ", $business1->getPhoneNumber();
//test 2 try to create object using string for business id
//$business2 = new \src\Business(4,"pool");

//test3 create object using numbers and having number in set for expected string
$business3 = new \src\Business(4,7);

$business3->setEmail("hello@gmail.com");
$business3->setPassword("hellogoodbye");
$business3->setBusinessName("chillPets");
$business3->setServiceProvided(85665);
$business3->setCertProof("nobody");
$business3->setStreetAddress("connaght street");
$business3->setCity("dolmin");
$business3->setCounty("offaly");
$business3->setCertQualification("cpr");
$business3->setPhoneNumber(557575752);

echo "\n Test3 \n", $business3->getUserID(), " ", $business3->getBusinessID(),
" ",$business3->getBusinessName(), " ", $business3->getEmail(), " ",
$business3->getPassword(), " ", $business3->getServiceProvided(), " ", $business3->getCertProof(),
" ", $business3->getStreetAddress(), " ", $business3->getCity(), " ", $business3->getCounty(),
" ", $business3->getCertQualification(), " ", $business3->getPhoneNumber();

//test 4 create object using string for business id
//$business4 = new \src\Business(3,"loop");

