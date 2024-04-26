<?php require_once '../layout/header.php'; ?>




<div class ="container">
    <button type="button">Approve</button>
    <button type = "button">Deny</button>
</div>

    <form action= "approval.php" method="post" class="formLog">

        <label for="firstname">First Name: </label>
        <input type="text" name="firstname" id="firstname" required>

        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>

        <label for = "password">Password</label>
        <input type="password" id="password" name="password" required /> <br>

        <input type="submit" name="submit" value="Submit"> <br>


<?php require_once '../layout/footer.php'; ?>