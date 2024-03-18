<?php use src\Admin;

require_once '../layout/header.php'; ?>




<?php
require "../src/Admin.php";
$userId = 1;
$adminId = 1;
$data = new Admin($userId,$adminId);
$try = $data->get_user($adminId);
echo "<p> Data from database:</p>";
echo "<ul>";
echo"<li>{$try['adminID']} - {$try['surname']} - {$try['name']} - {$try['userID']} </li>";
echo "</ul>";
?>

<?php

echo "Thanks for submitting the form. You will be contacted once your application has been processed";

?>
<a href="index.php">Click here to return to home page</a>
<?php require_once'../layout/footer.php'; ?>