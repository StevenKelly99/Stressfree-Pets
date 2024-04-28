<?php
session_start();

// Function to check if the user is logged in
function isLoggedIn() {
    return isset($_SESSION['email']);
}

// Function to check if the logged-in user is an admin
function isAdmin() {
    // Check if the 'admin' session variable is set and is true
    return isset($_SESSION['admin']) && $_SESSION['admin'] == 1;
}

// Check if the user is logged in and is an admin, if not, redirect them
if (!isLoggedIn() || !isAdmin()) {
    header("Location: ../public/index.php");
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

                <li><a href="../public/forAdmin.php">For Admin</a></li>
                <?php if (isLoggedIn()) : ?>
                    <!-- Common menu items for logged-in users -->
                    <li>
                        <form class="navbar-form navbar-right" action="../public/logout.php" method="post">
                            <button type="submit" class="btn btn-danger">Sign out</button>
                        </form>
                    </li>
                <?php else : ?>

                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
