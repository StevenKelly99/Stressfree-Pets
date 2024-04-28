<?php
require '../src/Business.php';
require_once '../src/Business.php';

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