<?php global $dsn, $username, $password, $options, $sql, $connection;

use src\Clean;

require_once '../layout/header.php';

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
            "lastname" => $clean -> clean_input($_POST['lastname']),
            "Address" => $clean -> clean_input($_POST['Address']),
            "email" => $clean -> clean_input($_POST['email']),
            "password" => $clean -> clean_input($_POST['password']),
            "phone" => $clean -> clean_input($_POST['phone']),
            "dogName" => $clean -> clean_input($_POST['dogName']),
            "dogType" => $clean -> clean_input($_POST['dogType']),
            "age" => $clean -> clean_input($_POST['age']),
            "addinfo" => $clean -> clean_input($_POST['addinfo']),
        );

        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "CustomerApplication",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user)));

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);


    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

}
?>

<h1 class="headingFaq">Your Customer Profile</h1>
<p class="formNotice">If you are a business <a href="businessApplication.php"><strong>click here</strong></a></p>
<form action= "thankYou.php" method="post" class="formLog">

    <label for="firstname">First Name: </label>
    <input type="text" name="firstname" id="firstname" required>

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" required>

    <label for="Address">Address</label>
    <input type="text" name="Address" id="Address" required>

    <label for="email">Email Address</label>
    <input type="email" name="email" id="email" required>

    <label for = "password">Password</label>
    <input type="password" id="password" name="password" required />

    <label for="phone">Phone Number</label>
    <input type="number" name="phone" id="phone" required>

    <label for="dogName">Dog Name</label>
    <input type="text" name="dogName" id="dogName" required>

    <label for="dogType">Dog Type</label>
    <input type="text" name="dogType" id="dogType" required>

    <label for="age">Dog Age</label>
    <input type="number" name="age" id="age" required>

    <label for="addinfo">Additional Information about your dog</label>
    <input type="text" name="addinfo" id="addinfo" required>

    <label for="dogImageFiles">Upload image of dog</label>
    <input type="file" id="dogImageFiles" name="dogImageFiles" ><br>


    <input type="submit" name="submit" value="Submit">
</form>

<?php require_once '../layout/footer.php';

?>
