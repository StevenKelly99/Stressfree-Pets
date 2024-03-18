<?php global $dsn, $username, $password;

use src\CRUD;


require '../layout/header.php';

?>

<?php
if (isset($_POST['submit'])) {
    require './src/Clean.php';

    require '../src/CRUD';


    $customerId = 1;
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $Address = $_POST['Address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dogName = $_POST['dogName'];
    $dogType = $_POST['dogType'];
    $age = $_POST['age'];
    $custImage = $_POST['ImageFiles'];
    $addinfo = $_POST['addInfo'];
    $dogImage = $_POST['dogImage'];
    $userId = 3;
    $customer = new CRUD();
    $customerForm = $customer->createEntryCustomer($customerId,
        $firstname, $lastname, $dogType, $dogImage, $phone, $custImage, $addinfo, $userId, $dogName, $age);

}
?>

<h1 class="headingFaq">Your Customer Profile</h1>
<p class="formNotice">If you are a business <a href="businessApplication.php"><strong>click here</strong></a></p>
<form action= "../public/thankYou.php"method="POST" class="formLog">
    <label for="firstname">First Name: </label>
    <input type="text" name="firstname" id="firstname" required>

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" required>

    <label for="Address">Address</label>
    <input type="text" name="Address" id="Address" required>

    <label for="email">Email Address</label>
    <input type="email" name="email" id="email" required>

    <label for="phone">Phone Number</label>
    <input type="number" name="phone" id="phone" required>

    <label for="dogName">Dog Name</label>
    <input type="text" name="dogName" id="dogName" required>

    <label for="dogType">Dog Type</label>
    <input type="text" name="dogType" id="dogType" required>

    <label for="age">Dog Age</label>
    <input type="number" name="age" id="age" required>

    <label for="addinfo">Additional Information about your dog</label><br>
    <input type="text" name="addinfo" id="addinfo" required>
    <label for="ImageFiles">Upload image of self</label>
    <input type="file" id="ImageFiles" name="ImageFiles" required><br>

    <label for="dogImageFiles">Upload image of dog</label>
    <input type="file" id="dogImageFiles" name="dogImageFiles" required><br>

    <input type="submit" name="submit" value="submit">
</form>



<?php require_once '../layout/footer.php'; ?>