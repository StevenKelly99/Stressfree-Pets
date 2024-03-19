<?php use src\Clean;

require_once '../layout/header.php'; ?>

<?php
require_once '../src/Clean.php';

if (isset($_POST['submit'])) {
    $clean = new Clean();

    $services = $clean -> clean_input($_POST['services']);
    $business = $clean -> clean_input($_POST['business']);
    $date = $clean -> clean_input($_POST['date']);
    $time = $clean -> clean_input($_POST['time']);
}



?>

<div class="container-form">
    <form action="#" class="formLog">
        <h2>Booking Form</h2>

        <div class="form-field">

            <label for="services">Services</label><br>
            <select name="services" id="services">

                <option value="daycare">daycare</option>
                <option value="petWalking">pet walking</option>
                <option value="petSitting">pet Setting</option>
            </select><br>


            <label for="business">Business</label><br>
            <input type="text" name="business" id="business"><br>

            <label for="date">Date</label><br>
            <input type="date" name="date" id="date" required><br>

            <label for="time">Time</label><br>
            <input type="time" name="time" id="time">

            <input type="submit" name="submit" value="Submit">
        </div>


    </form>

</div>

<?php require_once '../layout/footer.php'; ?>
