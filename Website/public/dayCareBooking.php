<?php use src\Clean;

require_once '../layout/header.php'; ?>
<?php

    require_once "../src/DBConnect.php";
    $services = 'dogDaycare';
    $sql = "SELECT businessName FROM BusinessApplication WHERE services = :services";
    $stmnt = $connection->prepare($sql);
    $stmnt ->bindParam(':services',$services,PDO::PARAM_STR);
    $stmnt ->execute();
    $names= $stmnt->fetchAll(PDO::FETCH_ASSOC);


?>

<?php
require_once '../src/Clean.php';

if (isset($_POST['submit'])) {
    try {
        $clean = new Clean();
        $date = $clean->clean_input($_POST['date']);
        $time = $clean->clean_input($_POST['time']);
        $customerName = $clean->clean_input($_POST['customerName']);
        $dogName = $clean->clean_input($_POST['dogName']);
        $contactNumber = $clean->clean_input($_POST['contactNumber']);
        $nameBusiness = $clean->clean_input($_POST['businessName']);


        $new_booking = array(

                "service" => "dogDaycare",
                "date" => $date,
                "time"=>$time,
                "customerName"=>$customerName,
                "dogName"=>$dogName,
                "contactNumber"=>$contactNumber,
                "businessName" => $nameBusiness

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



            <label for="businessName">Business Name</label><br>
            <select name="businessName" id = "businessName" class="dropdownBooking">
                <?php foreach($names as $name){
                    ?><option value = "<?php echo $name['businessName'] ?>">
                    <?php echo $name['businessName']?>
                </option>
               <?php } ?>
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

