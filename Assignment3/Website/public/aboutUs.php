<?php use src\User;

require_once '../layout/header.php'; ?>
<?php require '../src/User.php';

$username = "examplesess@example.com";
$password = "intotot";
$user = new User();

 $user->get_user($username,$password);



?>
<div class= "panel-body">
    <H1>Our Story</H1>
    <p>Stressfree pets started as a facebook group for local businesses and freelance workers to advertise their services
        and for people to find these services. Since the pandemic demand for these services grew as did the group
        and we decided that a formal website was needed.</p>

</div>

<?php require_once '../layout/footer.php'; ?>