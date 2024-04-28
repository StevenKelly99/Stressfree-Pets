<?php
// tests for user class. tests that cause error are commented out so that they will not interfere with other tests
require '../src/User.php';
$user1 = new \src\User(5);
$user2 = new \src\User(4);

//test get and set for user 1
$user1->setUserID(2);
$user1->setEmail("hello@gmail.com");
$user1->setPassword("hdhdhdhd");

echo  "\n Test1 \n",$user1->getUserID(),"\n",  $user1->getEmail(),"\n", $user1->getPassword(),"\n";


//test get and set for user 2 causes error
/*$user2->setUserID("mam");
$user2->setEmail("2555@gmail.com");
$user2->setPassword("84849659");
echo  $user2->getUserID(),"\n",  $user2->getEmail(),"\n", $user2->getPassword(),"\n";
*/
//test for object creation using non int
//$user3 = new \src\User("mam");
//test for non string for email
$user4 = new \src\User(7);
$user4->setEmail(3564646);
$user4->setPassword("lolly");
echo  "\n Test4 \n",$user4->getUserID(),"\n",  $user4->getEmail(),"\n", $user4->getPassword(),"\n";