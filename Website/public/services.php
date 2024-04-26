<?php use src\Admin;
use src\Business;

require_once '../layout/header.php'; ?>

<h1 class="headingFaq">Our business partners</h1>

<?php
require"../src/Business.php";


$try = (new src\CRUD)->get_business()

?>
    <div class="container">
    <div class="row">
        <?php foreach ($try as $cutePet) { ?>
            <div class="col-lg-4 pet-list-item">
                <img src="/images/<?php echo $cutePet['businessImage']; ?>" class="img-rounded">
                <h2>

                        <?php echo $cutePet['businessName']; ?>

                </h2>

                <blockquote class="pet-details">
                    <span class="panel-info"><?php echo $cutePet['certs']; ?></span>
                    <span class="panel-info"><?php echo $cutePet['services']; ?></span>
                </blockquote>
                <p><?php echo $cutePet['streetAddress']; ?></p>
                <p><?php echo $cutePet['city']; ?></p>
                <p><?php echo $cutePet['county']; ?></p>
                <p><?php echo $cutePet['phoneNumber']; ?></p>
                <p><?php echo $cutePet['email']; ?></p>
                

            </div>
        <?php } ?>
    </div>

    <a href="index.php">Click here to return to home page</a>
<?php require_once'../layout/footer.php'; ?>