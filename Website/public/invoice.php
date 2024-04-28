<?php

require_once '../layout/header.php'; ?>


<?php
require"../src/Business.php";
require"../src/CRUD.php";

require '../config.php';

try{
    require_once "../src/DBConnect.php";
    $id = "freedoPets";
    $sql = "SELECT * FROM booking where businessName =:id";
    $stmnt = $connection->prepare($sql);
    $stmnt->bindParam(':id',$id);
    $stmnt ->execute();
    $try = $stmnt->fetchAll();
}
catch (PDOException $exception){
    echo "Error couldnt connect";
}





require_once '../src/Clean.php';

if (isset($_POST['submit'])) {
    try {
        $clean = new Clean();
        $cost = $clean->clean_input($_POST['cost']);



        $new_invoice = array(

            "bookingID" => $try['bookingId'],
            "date" => $try['date'],
            "time"=>$try['time'],
            "customerName"=>$try['customerName'],
            "dogName"=>$try['dogName'],
            "contactNumber"=>$try['contactNumber'],
            "businessName" => $id,
            "cost" => $cost

        );
        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "Invoice",
            implode(", ", array_keys($new_invoice)),
            ":" . implode(", :", array_keys($new_invoice)));

        $statement = $connection->prepare($sql);
        $statement->execute($new_invoice);

        echo "added successfully";
    }
    catch (PDOException $error){
        echo $sql . "<br>". $error->getMessage();
    }

}



?>
<div>
    <div>
        <?php foreach ($try as $cutePet) { ?>
            <div class="card">





                    <span>Owner: <?php echo $cutePet['customerName']; ?></span>
                    <span>Dog name: <?php echo $cutePet['dogName']; ?></span>
                    <span>Date:<?php echo $cutePet['date']; ?></span>
                    <span> Time: <?php echo $cutePet['time']; ?></span>
                    <span>Contact Number: <?php echo $cutePet['contactNumber']; ?></span>
                    <span>
                        <form class = "formInvoice" method="post">
                    <label for "cost">Cost:</label>
                            <input type="text" id="cost" name="cost"/>
                    <input type="submit" value="Invoice" name="submit"/>
                    </form>
                    </span>


                </div>


            </div>
        <?php } ?>
    </div>
</div>

    <a href="index.php">Click here to return to home page</a>
    <?php require_once'../layout/footer.php'; ?>
