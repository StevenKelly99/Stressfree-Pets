<?php

global $sql, $connection;

use src\Clean;



if (isset($_POST['submit'])) {
    try {
        require "../src/Clean.php";
        $clean = new Clean();

        require_once '../src/DBconnect.php';

        $sql = "SELECT * FROM Booking WHERE customerName = :customerName";
        $customerName = $_POST['customerName'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':customerName', $customerName, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetchAll();

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}


require "../layout/header.php";

if (isset($_POST['submit'])) {
    if ($result && $statement->rowCount() > 0) {
        ?>
        <h2>Businesses Result</h2>
        <table>
            <thead>
            <tr>
                <th>ID |</th>
                <th>service |</th>
                <th>date |</th>
                <th> time |</th>
                <th> customerName |</th>
                <th> dogName |</th>
                <th> contactNumber |</th>
                <th>name |</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $row) {
                ?>
                <tr>
                    <td><?php echo $clean -> clean_input($row["bookingId"]); ?></td>
                    <td><?php echo $clean -> clean_input($row["service"]); ?></td>
                    <td><?php echo $clean -> clean_input($row["date"]); ?></td>
                    <td><?php echo $clean -> clean_input($row["time"]); ?></td>
                    <td><?php echo $clean -> clean_input($row["customerName"]); ?></td>
                    <td><?php echo $clean -> clean_input($row["dogName"]); ?> </td>
                    <td><?php echo $clean -> clean_input($row["contactNumber"]); ?></td>
                    <td><?php echo $clean -> clean_input($row["businessName"]); ?></td>
                    <td><a href="afterCancelling.php?customerName=<?php echo $clean -> clean_input($row["customerName"]); ?> "> Delete </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        > Services: no results found for <?php echo $clean -> clean_input($_POST['customerName']); ?>.
    <?php }
} ?>


    <h2>Cancel appointments </h2>
    <form method="post">
        <label for="customerName">Please enter your full name</label>
        <input type="text" id="customerName" name="customerName">

        <input type="submit" name="submit" value="View Results">


<?php require '../layout/footer.php';


