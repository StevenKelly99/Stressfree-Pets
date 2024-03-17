<?php require_once '../layout/header.php'; ?>



<h1 class="headingFaq">Your Customer Profile</h1>
<p class="formNotice">If you are a business <a href="businessApplication.php"><strong>click here</strong></a></p>
<form method="post" class="formLog">
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

    <label for="dogType">Dog Type</label>
    <input type="text" name="dogType" id="dogType" required>

    <label for="age">Dog Age</label>
    <input type="number" name="age" id="age">

    <label for="add-info">Additional Information about your dog</label><br>
    <input type="text" name="add-info" id="add-info" required>
    <label for"certFiles">Upload image of dog</label>
    <input type="file" id="dogImageFiles" name="dogImageFiles"><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php require_once '../layout/footer.php'; ?>
