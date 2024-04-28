<?php

require_once '../layout/header.php'; ?>

<h1 class="headingFaq">Our business partners</h1>

<?php
require"../src/Business.php";
require"../src/CRUD.php";

require '../config.php';

try{
    require_once "../src/DBConnect.php";
    $sql = "SELECT * FROM BusinessApplication";
    $stmnt = $connection->prepare($sql);
    $stmnt ->execute();
    $try = $stmnt->fetchAll();
}
catch (PDOException $exception){
    echo "Error couldnt connect";
}


?>
    <div class="container">
    <div class="row">
        <?php foreach ($try as $cutePet) { ?>
            <div class="col-lg-4 pet-list-item">

                <h2>

                        <?php echo $cutePet['businessName']; ?>

                </h2>

                <blockquote class="pet-details">
                    <span class="panel-info">Certificates :<?php echo $cutePet['certs']; ?></span><br>
                    <span class="panel-info">Service: <?php
                        if( $cutePet['services'] == "dogDaycare")
                            echo "Dog daycare";

                        else if($cutePet['services'] =="dogWalking")
                            echo "Dog Walking";

                        else if($cutePet['services']== "outHomeSitting")
                            echo "Out of Home sitting";
                        else if($cutePet['services' == "inHomeSitting"]){
                            echo "In home sitting";
                        }
                        ?></span>
                </blockquote>
                <p><?php echo $cutePet['streetAddress']; ?></p>
                <p><?php echo $cutePet['city']; ?></p>
                <p><?php echo $cutePet['county']; ?></p>
                <p><?php echo $cutePet['phoneNumber']; ?></p>

                <a href="mailto:<?php $cutePet['email'] ?>"><?php echo $cutePet['email']; ?></a>
                

            </div>
        <?php } ?>
    </div>

    <a href="index.php">Click here to return to home page</a>
<?php require_once'../layout/footer.php'; ?>