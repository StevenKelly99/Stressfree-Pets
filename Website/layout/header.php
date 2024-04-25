<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../favicon.ico">

    <title>Stressfree Pets</title>

    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
</head>

<?php

use src\Clean;

require_once '../src/Clean.php';

if (isset($_POST['submit'])) {
    $clean = new Clean();

    $email = $clean -> clean_input($_POST['email']);
    $password = $clean -> clean_input($_POST['password']);

}
?>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../public/index.php">Stressfree Pets</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="../public/index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="../public/services.php" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../public/services.php">Our services</a></li>
                            <li><a href="../public/PetWalking.php">Dog walking</a></li>
                            <li><a href="../public/petsitting.php">Pet sitting</a></li>
                            <li><a href="../public/daycare.php">Dog Daycare</a></li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="../public/aboutUs.php" class="dropdown-toggle" data-toggle="dropdown">About us<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../public/aboutUs.php">About us</a></li>
                            <li><a href="../public/faq.php">FAQ</a></li>


                        </ul>
                    </li>
                    <li><a href="../public/contact.php">Contact</a></li>
                    <li><a href="../public/products.php">Products</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="Email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                    <a href = "../public/customerProfile.php">Signup</a>

                </form>


            </div>


            <!--/.navbar-collapse -->
        </div>

    </div>
