<?php

require "../config.php";
if (isset($_POST['submit'])) {


        require_once '../src/DBConnect.php';
        require_once '../src/Clean.php';
        $clean = new Clean();
        $user3 =[

            "email" => $clean -> clean_input($_POST['email']),
            "password" => $clean->clean_input($_POST['password']),
            "businessName" => $clean->clean_input($_POST['businessName']),
            "streetAddress" => $clean->clean_input($_POST['streetAddress']),
            "city" => $clean->clean_input($_POST['city']),
            "county" =>$clean->clean_input($_POST['county']),
            "phoneNumber" =>$clean->clean_input($_POST['phoneNumber']),
            "services" =>$clean->clean_input($_POST['services']),



        ];
        $sql = "UPDATE businessapplication
SET

email = :email,
password = :password,
businessName = :businessName,
streetAddress = :streetAddress,
city =:city,
county = :county,
phoneNumber = :phoneNumber,
services = :services

WHERE  businessName =:businessName";
        $statement = $connection->prepare($sql);
        $statement->execute($user3);

}?>
<?php


        require_once '../src/DBConnect.php';
        $businessName = $_GET['businessName'];
        $sql = "SELECT email,password,businessName,streetAddress,city,county,phoneNumber,services FROM businessapplication WHERE businessName =:businessName";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':businessName',$businessName);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);






?>
<?php require "../layout/admin_header.php"; ?>


    <h2>Edit a user</h2>
    <form method="post" action="updatingBusiness.php">
        <?php foreach ($user as $key => $value) {
            if($key != 'businessName'){?>

            <label for ="<?php echo $key?>"><?php echo $key;?></label><br>
            <input type = "text" value="<?php echo $value;?>"><br>

        <?php } ?>
        <?php }?>


        <input type="submit" name="submit" value="Update" >
    </form>
    <a href="index.php">Back to home</a>
<?php require "../layout/footer.php"; ?>