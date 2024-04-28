<?php

global $connection, $sql;
require_once '../layout/admin_header.php';
use src\Clean;

?>

<?php
if (isset($_POST['submit'])) {
    require_once("../config.php");

    try {
        require_once '../src/DBConnect.php';
        require_once "../src/Clean.php";
        $clean = new Clean();

        $new_user = array(

            "firstname" => $clean -> clean_input($_POST['firstname']),
            "email" => $clean -> clean_input($_POST['email']),
            "password" => $clean -> clean_input($_POST['password']),
        );

        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "Admin",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user)));

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);

        echo "Your admin application is successfully added to the database";

    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

}
?>
    <h2 class="headingFaq">Your Admin Profile</h2>


    <form action= "approval.php" method="post" class="formLog">

        <label for="firstname">First Name: </label>
        <input type="text" name="firstname" id="firstname" required>

        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>

        <label for = "password">Password</label>
        <input type="password" id="password" name="password" required /> <br>

        <input type="submit" name="submit" value="Submit"> <br>
    </form>


<?php require_once '../layout/footer.php'; ?>