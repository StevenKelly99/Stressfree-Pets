<?php global $dsn, $username, $password, $options, $sql, $connection;

use src\Clean;

require_once '../layout/header.php';

?>

<?php
if (isset($_POST['submit'])) {
    require_once "../config.php";

    try {
        require_once '../src/DBConnect.php';
        require_once "../src/Clean.php";
        $clean = new Clean();

        $new_user = array(
            "email" => $clean -> clean_input($_POST['email']),
            "password" => $clean->clean_input($_POST['password']),
            "businessName" => $clean->clean_input($_POST['businessName']),
            "streetAddress" => $clean->clean_input($_POST['streetAddress']),
            "city" => $clean->clean_input($_POST['city']),
            "county" =>$clean->clean_input($_POST['county']),
            "phoneNumber" =>$clean->clean_input($_POST['phoneNumber']),
            "services" =>$clean->clean_input($_POST['services']),
            "certs" => $clean->clean_input($_POST['certs']),
            "certFiles" =>$clean->clean_input($_POST['certFiles']),
            "businessImage" =>$clean->clean_input($_POST['businessImage'])
        );

        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "BusinessApplication",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user)));

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);

        echo "Business added successfully";

    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

}
?>

<h2 class="headingFaq">Your Business Profile</h2>
<div class="formLog">
    <form method="post" action="businessApplication.php" class="formLog">

        <label for="email">Email address:</label>
        <input type="text" id="email" name="email" required/>

        <label for = "password">Password</label>
        <input type="password" id="password" name="password" required />

        <label for="businessName">Business Name</label>
        <input type="text" id="businessName" name="businessName" required />

        <label for="streetAddress">Street address</label>
        <input type="text" id="streetAddress" name="streetAddress" >

        <label for="city">City</label>
        <input type="text" id="city" name="city" required/>

        <label for="county">County</label>
        <input type="text" id="county" name="county"/>

        <label for="phoneNumber">Phone number</label>
        <input type="tel"   id="phoneNumber" name="phoneNumber"  required/>

        <label for="services">Service provided</label>
        <select name="services" id="services" datatype="text" required >

            <option value="inHomeSitting">In clients' home pet sitting</option>
            <option value="outHomeSitting">Out of clients' home pet sitting</option>
            <option value ="dogWalking">Dog walking</option>
            <option value="dogDaycare">Dog daycare</option>
        </select><br/>

        <label for="certs">Certification/Qualification</label>
        <input type="text" id="certs" name="certs" />

        <label for"certFiles">Upload proof of certification/qualification</label>
        <input type="file" id="certFiles" name="certFiles" ><br>

        <label for="businessImage">Please upload images of your business</label><br>
        <input type="file" id="businessImage" name="businessImage" ><br />

        <input type="submit" value="Submit application" name="submit"/>
    </form>
</div>

<?php require_once'../layout/footer.php'; ?>
