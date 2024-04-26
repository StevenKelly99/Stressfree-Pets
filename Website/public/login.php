<?php use src\Clean;

 ?>
<?php require_once '../layout/header.php'; ?>





<div class ="form-inline">
    <h2>If you don't have an account please register and <a href = "customerProfile.php">click here</a></h2>

    <form action="" method="post" name="Login_Form" class="formLog">
        <h2 class="headingFaq">Please sign in</h2>

        <label for="inputUsername" >Email</label><br>
        <input name="Username" type="email" id="inputUsername" placeholder="Email" required autofocus><br>

        <label for="inputPassword">Password</label><br>
        <input name="Password" type="password" id="inputPassword" placeholder="Password" required><br>

        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="bottom" type="submit">Sign in</button>

    </form>
</div>


<?php


require_once '../src/Clean.php';

$Username = $Password = "";


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $clean = new Clean();

    $Username = $clean->clean_input($_POST['Username']);
    $Password = $clean->clean_input($_POST['Password']);

    if (!empty(($_POST['Username'] == $Username)) && !empty(($_POST['Password'] == $Password))) {

        $_SESSION['Username'] = $Username;
        $_SESSION['Active'] = true;
        header("location:index.php");
        exit;


    } else
        echo 'Incorrect Username or Password';

}

require_once '../layout/footer.php'; ?>