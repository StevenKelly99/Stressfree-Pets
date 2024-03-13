

<?php  require_once '../layout/header.php'; ?>







<body>
<?php
require '../lib/functions.php';

$pets = get_pets();

$pets = array_reverse($pets);

$cleverWelcomeMessage = 'Welcome to Stressfree Pets';
$pupCount = count($pets);
?>

<div class="jumbotron">
    <div class="container">
        <h1><?php echo $cleverWelcomeMessage; ?></h1>


    </div>
</div>

<div class="grids">
    <div class="daycare">
        <img src="../images/daycare.jpg" height="250" width="350" alt="picture">
        <h3>Daycare Service</h3>
        <p>This service provides many advantages for your pet such as improving socialization with other dogs and avoid anxiety, and it is a good option for people who are working.
            If you wish to find more information about the service, you can <a href="daycare.php"><strong>click here</strong></a> </p>
    </div>
    <div class="petWalking">
        <img src="../images/petWalking.jpg" height="250" width="350" alt="picture">
        <h3>Pet Walking Service</h3>
        <p>This service keeps us focused on your pet's health, trains your pet, and visits the vet if needed. If you need to find more
            information, you can <a href="petWalking.php"><strong>click here</strong></a></p>
    </div>

    <div class="petSitting">
        <img src="../images/petSitting.jpg" height="250" width="350" alt="picture">
        <h3>Pet Sitting Service</h3>
        <p>Pet sitting services provide a pet sitter that visits our home and spends the time you decide with your pet.
            If you need to know more about the service, you can <a href="petsitting.php"><strong>click here</strong></a></p>
    </div>
</div>
</body>



<div class="container">
        <div class="row">
            <?php foreach ($pets as $cutePet) { ?>
                <div class="col-lg-4 pet-list-item">
                    <h2><?php echo $cutePet['name']; ?></h2>

                    <img src="/images/<?php echo $cutePet['image']; ?>" class="img-rounded">

                    <blockquote class="pet-details">
                        <span class="label label-info"><?php echo $cutePet['breed']; ?></span>
                        <?php
                        if (!array_key_exists('age', $cutePet) || $cutePet['age'] == '') {
                            echo 'Unknown';
                        } elseif ($cutePet['age'] == 'hidden') {
                            echo '(contact owner for age)';
                        } else {
                            echo $cutePet['age'];
                        }
                        ?>
                        <?php echo $cutePet['weight']; ?> lbs
                    </blockquote>

                    <p>
                        <?php echo $cutePet['bio']; ?>
                    </p>
                </div>
            <?php } ?>
        </div>

        <hr>

<?php require_once'../layout/footer.php'; ?>
