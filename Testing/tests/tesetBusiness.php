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

echo "\n Test1 \nUserId: ", $business1->getUserID(), " BusinessId: ", $business1->getBusinessID(),
        " BusinessName: ",$business1->getBusinessName(), " Email: ", $business1->getEmail(), " Password: ",
    $business1->getPassword(), " ServiceProvided: ", $business1->getServiceProvided(), " CertProof: ", $business1->getCertProof(),
    " StreetAddress: ", $business1->getStreetAddress(), " City: ", $business1->getCity(), " County: ", $business1->getCounty(),
    " CertQualification: ", $business1->getCertQualification(), " PhoneNumber: ", $business1->getPhoneNumber();
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

echo "\n Test3 \nUserId: ", $business3->getUserID(), " BusinessID: ", $business3->getBusinessID(),
" BusinessName: ",$business3->getBusinessName(), " Email: ", $business3->getEmail(), " Password: ",
$business3->getPassword(), " ServiceProvided: ", $business3->getServiceProvided(), " CertProof: ", $business3->getCertProof(),
" StreetAddress: ", $business3->getStreetAddress(), " City: ", $business3->getCity(), " County: ", $business3->getCounty(),
" CertQualification: ", $business3->getCertQualification(), " PhoneNumber: ", $business3->getPhoneNumber();

//test 4 create object using string for userId
/*$business4 = new \src\Business("loop",5);
echo " \n Test 4 \nUserId: ", $business4->getUserID(), " BusinessID: ", $business4->getBusinessID();*/

