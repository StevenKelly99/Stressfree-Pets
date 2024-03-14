<?php require_once '../layout/header.php'; ?>

<div class="container-form">
    <form action="#">
        <h2>Booking Form</h2>

        <div class="form-field">

            <label for="services">Services</label>
            <select name="services" id="services">
                <option value="daycare">daycare</option>
                <option value="petWalking">pet walking</option>
                <option value="petSitting">pet Setting</option>
            </select>


            <label for="business">Business</label>
            <input type="text" name="business" id="business">

            <label for="date">Date</label>
            <input type="date" name="date" id="date" required>

            <label for="time">Time</label>
            <input type="time" name="time" id="time">
        </div>


    </form>

</div>

<?php require '../layout/footer.php'; ?>
