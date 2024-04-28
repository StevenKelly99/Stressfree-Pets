<?php
session_start();

// Function to check if the user is logged in
function isLoggedIn() {
    return isset($_SESSION['email']);
}

// Function to check if the logged-in user is an admin
function isAdmin() {
    // Check if the admin flag is set in the session
    return ($_SESSION['admin'] === true);
}

// Check if the user is logged in and is an admin, if not, redirect them
if (!isLoggedIn() || !isAdmin()) {
    header("Location: ../public/index.php"); // Redirect to home page or another appropriate page
    exit();
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
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>

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
                <?php if (isLoggedIn()) : ?>
                    <?php if (isAdmin()) : ?>
                        <!-- Admin-specific menu items -->
                        <li><a href="../admin/dashboard.php">Admin Dashboard</a></li>
                        <li><a href="../admin/users.php">Manage Users</a></li>
                    <?php endif; ?>
                    <!-- Common menu items for logged-in users -->
                    <li>
                        <form class="navbar-form navbar-right" action="logout.php" method="post">
                            <button type="submit" class="btn btn-danger">Sign out</button>
                        </form>
                    </li>
                <?php else : ?>
                    <!-- Sign-in form for non-logged-in users -->
                    <li>
                        <form class="navbar-form navbar-right" action="login.php" method="post">
                            <div class="form-group">
                                <input type="Email" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Sign in</button>
                            <a href="../public/customerProfile.php" class="btn btn-primary">Sign up</a>
                        </form>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
