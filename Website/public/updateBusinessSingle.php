<?php

require "../config.php";
if (isset($_POST['submit'])) {

    try {
        require_once '../src/DBconnect.php';
        require_once '../src/Clean.php';
        $clean = new Clean();
        $user =[
            "id" => $clean->clean_input($_POST['id']),
            "email" => $clean -> clean_input($_POST['email']),
            "password" => $clean->clean_input($_POST['password']),
            "businessName" => $clean->clean_input($_POST['businessName']),
            "streetAddress" => $clean->clean_input($_POST['streetAddress']),
            "city" => $clean->clean_input($_POST['city']),
            "county" =>$clean->clean_input($_POST['county']),
            "phoneNumber" =>$clean->clean_input($_POST['phoneNumber']),
            "services" =>$clean->clean_input($_POST['services']),
            "certs" => $clean->clean_input($_POST['certs'])


        ];
        $sql = "UPDATE businessapplication
SET
 id =: id, 
email = :email,
password = :password,
businessName = :businessName,
streetAddress = :streetAddress,
city =:city,
county = :county,
phoneNumber = :phoneNumber,
services = :services,
certs = :certs
WHERE businessName =:businessName";
        $statement = $connection->prepare($sql);
        $statement->execute($user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}?>
<?php
if(isset($_GET['businessName'])) {
    try {
        require_once '../src/DBconnect.php';
        $business = $_GET['businessName'];
        $sql = "SELECT * FROM businessapplication WHERE businessName =:businessName";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':businessName',$business);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
else
    echo "Something went wrong";



?>
<?php require "../layout/header.php"; ?>


    <h2>Edit a user</h2>
    <form method="post">
        <?php foreach ($user as $key => $value) : ?>
            <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
            <input type="text" name="<?php echo $key; ?>" id="<?php echo $key;
            ?>" value="<?php echo Clean::clean_input($value); ?>" <?php echo ($key === 'id' ?
                'readonly' : null); ?>>
        <?php endforeach; ?>
        <input type="submit" name="submit" value="Submit">
    </form>
    <a href="index.php">Back to home</a>
<?php require "../layout/footer.php"; ?>