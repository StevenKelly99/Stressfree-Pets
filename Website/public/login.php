<?php require_once ("../src/User.php") ?>
<?php require_once '../layout/header.php'; ?>

<div class ="form-inline">
    <h2>No account, regsiter<a href = "customerProfile.php">HERE</a></h2>

    <form action="" method="post" name="Login_Form" class="formLog">
        <h2 class="headingFaq">Please sign in</h2>
        <label for="inputUsername" >Email</label><br>
        <input name="Username" type="username" id="inputUsername" placeholder="Username" required autofocus><br>
        <label for="inputPassword">Password</label><br>
        <input name="Password" type="password" id="inputPassword"placeholder="Password" required><br>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="btn" type="submit">Sign in</button>

    </form>
</div>
<?php require_once '../layout/footer.php'; ?>