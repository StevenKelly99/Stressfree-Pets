<?php

use src\User;

require '../src/Admin.php';
require_once '../src/User.php';

$user3 = new \src\User(6);
$admin1 = new \src\Admin($user3->getUserID(),0);

$admin1->setEmail("blhaahaha@gmail.com");
$admin1->setPassword("hello");
//this method causes an error when run
//$admin1->get_user($admin1->getAdminId());
echo $admin1->getUserID(), "\n", $admin1->getAdminId(), "\n", $admin1->getEmail(), "\n", $admin1->getPassword(), $admin1->get_user($admin1->getAdminId());





$admin2 = new \src\Admin(5,4);

$admin2->setEmail("blahblah@gmail.com");
$admin2->setPassword("helloooo");
echo "Test2 \n",$admin2->getUserID(), "\n", $admin2->getAdminId(),"\n",$admin2->getEmail(), "\n",$admin2->getPassword();

//test that will cause error as userId must be int
/*$admin3 = new \src\Admin("mam","mama");
$admin3->setEmail("blahblah@gmail.com");
$admin3->setPassword("helloooo");
echo "\n Test3 \n",$admin3->getUserID(), "\n", $admin3->getAdminId(),"\n",$admin2->getEmail(),"\n",$admin3->getPassword();
*/