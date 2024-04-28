<?php
require '../src/User.php';
$user1 = new \src\User(5);
$user2 = new \src\User(4);

//test get and set for user 1
$user1->setUserID(2);
$user1->setEmail("hello@gmail.com");
$user1->setPassword("hdhdhdhd");

echo  $user1->getUserID(),"\n",  $user1->getEmail(),"\n", $user1->getPassword(),"\n";

//test get and set for user 2 causes error
/*$user2->setUserID("mam");
$user2->setEmail("2555@gmail.com");
$user2->setPassword("84849659");
echo  $user2->getUserID(),"\n",  $user2->getEmail(),"\n", $user2->getPassword(),"\n";
*/