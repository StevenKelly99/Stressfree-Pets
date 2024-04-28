<?php
use src\Clean;

require_once("../src/User.php");
require_once '../layout/header.php';
require_once '../src/Clean.php';

if (isset($_POST['Submit'])) {
    $clean = new Clean();

    $email = $clean->clean_input($_POST['Username']); // Assuming Username corresponds to email
    $password = $clean->clean_input($_POST['Password']);

    // Validate credentials
    if ($email === "1@mytudublin.ie" && $password === "password") {
        // Store user's email and admin flag in session
        $_SESSION['email'] = $email;
        $_SESSION['admin'] = false;

        // Redirect user to desired page
        header("Location: index.php");
        exit();
    }  else if ($email === "admin@mytudublin.ie" && $password === "password") {
        // Store user's email and admin flag in session
        $_SESSION['email'] = $email;
        $_SESSION['admin'] = true; // Set admin flag to true for admin

        // Redirect user to desired page
        header("Location: index.php");
        exit();
    }
    else {
        // Incorrect credentials, display error message or handle as needed
        echo "Incorrect email or password. Please try again.";
    }
}
?>

<div class="form-inline">
    <h2>No account, register <a href="customerProfile.php">HERE</a></h2>

    <form action="" method="post" name="Login_Form" class="formLog">
        <h2 class="headingFaq">Please sign in</h2>

        <label for="inputUsername">Email</label><br>
        <input name="Username" type="email" id="inputUsername" placeholder="Username" required autofocus><br>

        <label for="inputPassword">Password</label><br>
        <input name="Password" type="password" id="inputPassword" placeholder="Password" required><br>

        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="btn" type="submit">Sign in</button>

    </form>
</div>

<?php require_once '../layout/footer.php'; ?>
