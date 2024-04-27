<?php use src\Clean;

require_once '../layout/header.php'; ?>
<?php
try{
    require_once "../src/DBConnect.php";
    $sql = "SELECT businessName FROM BusinessApplication WHERE services = 'dogDaycare'";
    $stmnt = $connection->prepare($sql);
    $stmnt ->execute();
    $names= $stmnt->fetchAll();
}
catch (PDOException $exception){
    echo "Error couldnt connect";
}



require_once '../src/Clean.php';

if (isset($_POST['submit'])) {
    try {
        $clean = new Clean();
        $date = $clean->clean_input($_POST['date']);
        $time = $clean->clean_input($_POST['time']);
        $customerName = $clean->clean_input($_POST['customerName']);
        $dogName = $clean->clean_input($_POST['dogName']);
        $contactNumber = $clean->clean_input($_POST['contactNumber']);


        $new_booking = array(
                "services" => "dogDaycare",
                "businessName" => $_POST['businessName'],
                "date" => $date,
                "time"=>$time,
                "customerName"=>$customerName,
                "dogName"=>$dogName,
                "contactNumber"=>$contactNumber

        );
        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "Booking",
            implode(", ", array_keys($new_booking)),
            ":" . implode(", :", array_keys($new_booking)));

        $statement = $connection->prepare($sql);
        $statement->execute($new_booking);

        echo "added successfully";
    }
    catch (PDOException $error){
        echo $sql . "<br>". $error->getMessage();
    }

}



?>

<div class="container-form">
    <form action="#" class="formLog" method="post">
        <h2>Dog Daycare Booking Form</h2>

        <div class="form-field">



            <label for="business">Business Name</label><br>
            <select name="businessName" id = "businessName" class="dropdownBooking">
                <?php
                foreach ($names as $businessNames):?>
                <option value="<?php echo $businessNames;?>">
                    <?php echo $businessNames;?>
                </option>
                <?php endforeach; ?>
            </select><br>

            <label for="date">Date</label><br>
            <input type="date" name="date" id="date" required><br>

            <label for="time">Time</label><br>
            <input type="time" name="time" id="time" required><br>

            <label for="customerName">Customer Name</label><br>
            <input type="text" name="customerName" id="customerName" required><br>

            <label for="dogName">Dog name</label><br>
            <input type="text" name="dogName" id="dogName" required><br>

            <label for="contactNumber">Phone Number</label><br>
            <input type="tel" name="contactNumber" id="contactNumber" required>

            <input type="submit" name="submit" value="Submit">
        </div>


    </form>

</div>

<?php require_once '../layout/footer.php'; ?>

