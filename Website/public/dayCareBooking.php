<?php use src\Clean;

require_once '../layout/header.php'; ?>
<?php
try{
    require_once "../src/DBConnect.php";
    $sql = "SELECT businessName FROM BusinessApplication WHERE services = 'daycare'";
    $stmnt = $connection->prepare($sql);
    $stmnt ->execute();
}
catch (PDOException $exception){
    echo "Error couldnt connect";
}
$names= $stmnt->fetchAll();


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
    <form action="#" class="formLog" method="post">
        <h2>Booking Form</h2>

        <div class="form-field">



            <label for="business">Business Name</label><br>
            <select name="businessName" id = "businessName">
                <?php foreach ($names as $businessNames):?>
                <option value="<?php echo $businessNames;?>">
                    <?php echo $businessNames;?>
                </option>
                <?php endforeach; ?>
            </select><br>

            <label for="date">Date</label><br>
            <input type="date" name="date" id="date" required><br>

            <label for="time">Time</label><br>
            <input type="time" name="time" id="time">

            <label for="customerName">Customer Name</label><br>
            <input type="text" name="customerName" id="customerName"><br>

            <label for="dogName">Dog name</label><br>
            <input type="text" name="dogName" id="dogName"><br>

            <label for="contactNumber">Phone Number</label><br>
            <input type="number" name="contactNumber" id="contactNumber" required>

            <input type="submit" name="submit" value="Submit">
        </div>


    </form>

</div>

<?php require_once '../layout/footer.php'; ?>

