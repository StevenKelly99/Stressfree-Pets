<?php
require_once("../config.php");
require_once("../layout/header.php");
require_once("../src/Clean.php");

use src\Clean;

// Function to check if the user is an admin based on user data
function isAdmin($user) {
    // Check if the 'is_admin' column in the user data is equal to 1 (indicating admin)
    return $user['is_admin'] == 1;
}

if (isset($_POST['Submit'])) {
    require_once '../src/DBConnect.php';
    require_once "../src/Clean.php";
    $clean = new Clean();

    $email = $clean->clean_input($_POST['Username']);
    $password = $clean->clean_input($_POST['Password']);

    try {
        $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['email'] = $email;
            $_SESSION['admin'] = isAdmin($user);

            header("Location: index.php");
            exit();
        } else {
            echo "Incorrect email or password. Please try again.";
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
?>

<div class="form-inline">
    <h2>No account, register <a href="customerProfile.php">HERE</a></h2>

    <form action="login.php" method="post" name="Login_Form" class="formLog">
        <h2 class="headingFaq">Please sign in</h2>

        <!-- Input fields for email and password -->
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
