<?php

global $sql, $connection;

use src\Clean;
require_once "../src/Clean.php";

if (isset($_GET["email"])) {
    try {
        require_once '../src/DBConnect.php';

        $email = $_GET["email"];

        $sql = "DELETE FROM BusinessApplication WHERE email = :email";

        $statement = $connection->prepare($sql);
        $statement->bindValue(':email', $email);
        $statement->execute();

        $success = "application ". $email. " successfully deleted";

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

try {
    require_once '../src/DBConnect.php';

    $sql = "SELECT * FROM BusinessApplication";

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
            </thead>
            <tbody>
            <?php foreach ($result as $row) :
                $clean = new Clean();
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
                    <td><a href="deleting.php?email=<?php echo $clean -> clean_input($row["email"]); ?> "> Delete </a>
                    </td>
                    <?php endforeach;
                    ?>
            </tbody>
</table>
<?php require '../layout/footer.php';


