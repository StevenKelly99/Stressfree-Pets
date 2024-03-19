<?php session_start()?>
<?php require "../src/Sessions.php"?>

<?php
session_start();
if(!$_SESSION['Active']){
    header("location:../public/login.php");
    exit;
}
?>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                        <ul class="dropdown-menu">
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
                    <li><a href="../public/reviews.php">Reviews</a></li>
                </ul>
                <form action = "../public/logout.php" class="navbar-form navbar-right" method="post" name="Logout_Form">
                    <button name="Submit" value="Logout" class="btn" type="submit">Logout</button>
                    <div class="form-group">

                    </div>



                </form>


            </div>


            <!--/.navbar-collapse -->
        </div>

    </div>
