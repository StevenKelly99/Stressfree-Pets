<?php use src\Admin;

require_once '../layout/header.php'; ?>


<h1 class="headingFaq">Our business partners</h1>

<?php
require"../src/Business.php";
$userId = 1;
$businessId=1;
$data = new Business($userId,$businessId);
$try = $data->get_business();

?>
    <div class="container">
    <div class="row">
        <?php foreach ($try as $cutePet) { ?>
            <div class="col-lg-4 pet-list-item">
                <img src="/images/<?php echo $cutePet['img']; ?>" class="img-rounded">
                <h2>

                        <?php echo $cutePet['name']; ?>

                </h2>



                <blockquote class="pet-details">
                    <span class="panel-info"><?php echo $cutePet['certs']; ?></span>
                    <span class="panel-info"><?php echo $cutePet['service']; ?></span>
                </blockquote>
                <p><?php echo $cutePet['address']; ?></p>
                <p><?php echo $cutePet['city']; ?></p>




            </div>
        <?php } ?>
    </div>

    <a href="index.php">Click here to return to home page</a>
<?php require_once'../layout/footer.php'; ?>