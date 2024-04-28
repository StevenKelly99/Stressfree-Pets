<?php

require_once("../public/login.php");


function simulate_login($email, $password) {
    $_POST['Username'] = $email;
    $_POST['Password'] = $password;
    $_POST['Submit'] = true;
    require_once("../public/login.php");
}

// path 1: correct login
simulate_login("1@mytudublin.ie", "password");

// path 2: incorrect login
simulate_login("bademail@email.ie", "badpassword");
?>