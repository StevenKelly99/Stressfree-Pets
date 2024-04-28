<?php
global $sql, $connection;

use src\Clean;

if (isset($_POST['submit'])) {
    try {
        require "../src/Clean.php";
        $clean = new Clean();

        require_once '../src/DBconnect.php';

        $sql = "SELECT * FROM BusinessApplication WHERE services = :services";
        $services = $_POST['services'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':services', $services, PDO::PARAM_STR);
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
                <th>#</th>
                <th>Email |</th>
                <th> Password |</th>
                <th> Business Name |</th>
                <th> Address |</th>
                <th> City |</th>
                <th> County |</th>
                <th> Phone Number |</th>
                <th> Services Type |</th>
                <th> Certification |</th>
                <th> Certification Files |</th>
                <th> Business Image</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $row) {
                ?>
                <tr>
                    <td><?php echo $clean -> clean_input($row["id"]); ?></td>
                    <td><?php echo $clean -> clean_input($row["email"]); ?></td>
                    <td><?php echo $clean -> clean_input($row["password"]); ?></td>
                    <td><?php echo $clean -> clean_input($row["businessName"]); ?></td>
                    <td><?php echo $clean -> clean_input($row["streetAddress"]); ?> </td>
                    <td><?php echo $clean -> clean_input($row["city"]); ?></td>
                    <td><?php echo $clean -> clean_input($row["county"]); ?> </td>
                    <td><?php echo $clean -> clean_input($row["phoneNumber"]); ?> </td>
                    <td><?php echo $clean -> clean_input($row["services"]); ?> </td>
                    <td><?php echo $clean -> clean_input($row["certs"]); ?> </td>
                    <td><?php echo $clean -> clean_input($row["certFiles"]); ?> </td>
                    <td><?php echo $clean -> clean_input($row["businessImage"]); ?> </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        > Services: no results found for <?php echo $clean -> clean_input($_POST['services']); ?>.
    <?php }
} ?>

<?php ############################################################################################################################### ?>

    <?php if (isset($_POST['submit'])) {
    try {

    $sql = "SELECT * FROM CustomerApplication WHERE dogType = :dogType";
    $dogType = $_POST['dogType'];

    $statement = $connection->prepare($sql);
    $statement->bindParam(':dogType', $dogType, PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetchAll();

    } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
    }
    }


    if (isset($_POST['submit'])) {
    if ($result && $statement->rowCount() > 0) {
    ?>
    <h2>Customers Result</h2>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>first name |</th>
            <th> last name |</th>
            <th> Address |</th>
            <th> email |</th>
            <th> password |</th>
            <th> phone |</th>
            <th> dog Name |</th>
            <th> dog Type |</th>
            <th> dog age |</th>
            <th> addinfo |</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row) {
            ?>
            <tr>
                <td><?php echo $clean -> clean_input($row["id"]); ?></td>
                <td><?php echo $clean -> clean_input($row["firstname"]); ?></td>
                <td><?php echo $clean -> clean_input($row["lastname"]); ?></td>
                <td><?php echo $clean -> clean_input($row["Address"]); ?></td>
                <td><?php echo $clean -> clean_input($row["email"]); ?> </td>
                <td><?php echo $clean -> clean_input($row["password"]); ?></td>
                <td><?php echo $clean -> clean_input($row["phone"]); ?> </td>
                <td><?php echo $clean -> clean_input($row["dogName"]); ?> </td>
                <td><?php echo $clean -> clean_input($row["dogType"]); ?> </td>
                <td><?php echo $clean -> clean_input($row["age"]); ?> </td>
                <td><?php echo $clean -> clean_input($row["addinfo"]); ?> </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } else { ?>
    > Customer: no results found for <?php echo $clean -> clean_input($_POST['dogType']); ?>.
<?php }
} ?>


<h2>Finding businesses from services </h2>
<form method="post">
    <label for="services">Type the Services</label>
    <input type="text" id="services" name="services">
    <br>

    <h2>Finding customer from their dog breed </h2>
    <label for="dogType">Type the dog breed</label>
    <input type="text" id="dogType" name="dogType"><br><br>

    <input type="submit" name="submit" value="View Results">


</form>

