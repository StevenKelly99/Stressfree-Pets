<?php

global $sql, $connection;

use src\Clean;
require_once "../src/Clean.php";

if (isset($_GET["customerName"])) {
    try {
        require_once '../src/DBconnect.php';

        $customerName = $_GET["customerName"];


        $sql = "DELETE FROM Booking WHERE customerName = :customerName ";

        $statement = $connection->prepare($sql);
        $statement->bindValue(':customerName', $customerName);

        $statement->execute();

        $success = "application ". $customerName. " successfully deleted";

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

try {
    require_once '../src/DBconnect.php';

    $sql = "SELECT * FROM Booking";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll();

} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>

<?php require "../layout/header.php"?>
    <h2>deleting applications</h2>


    <table>
        <thead>
        <th>service |</th>
        <th>date |</th>
        <th> time |</th>
        <th> customerName |</th>
        <th> dogName |</th>
        <th> contactNumber |</th>
        <th>name |</th>
        </thead>
        <tbody>
        <?php foreach ($result as $row) :
        $clean = new Clean();
        ?>
        <tr>
            <td><?php echo $clean -> clean_input($row["service"]); ?></td>
            <td><?php echo $clean -> clean_input($row["date"]); ?></td>
            <td><?php echo $clean -> clean_input($row["time"]); ?></td>
            <td><?php echo $clean -> clean_input($row["customerName"]); ?></td>
            <td><?php echo $clean -> clean_input($row["dogName"]); ?> </td>
            <td><?php echo $clean -> clean_input($row["contactNumber"]); ?></td>
            <td><?php echo $clean -> clean_input($row["businessName"]); ?></td>


            <td><a href="cancelAppointments.php?customerName=<?php echo $clean -> clean_input($row["customerName"]); ?> "> Delete </a>
            </td>
            <?php endforeach;
            ?>
        </tbody>
    </table>

    <h2>Cancel appointments </h2>
    <form method="post">
        <label for="services">Type the Services</label>
        <input type="text" id="services" name="services">

        <input type="submit" name="customerName" value="View Results">


<?php require '../layout/footer.php';


