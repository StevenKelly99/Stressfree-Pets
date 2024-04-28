<?php require_once '../layout/header.php';

?>
<div class="text-center">
    <h3> This page for the admins only. Admin can access pages that the customer doesn't know about it</h3>

    <br>
<h4>find customers and businesses and see their application details
    <a href="findingUsers.php"><button type="button">click here</button></a></h4>

<h4>deleting businesses applications
    <a href="deleting.php"><button type="submit" class="button" value="login" name="submit">click here</button></a></h4>

    <br>
    <h4> updating businesses profile
        <a href="updatingBusiness.php"><button type="submit" class="button" value="login" name="submit">click here</button></a></h4>

<p>If you want to go back to home page please <a href="index.php"> click here </p>
</div>
<br><br>


<?php require_once'../layout/footer.php'; ?>
