<?php use src\Clean;

require_once '../layout/header.php'; ?>

<?php
if (isset($_POST['submit'])){
        require '../src/Clean.php';

        $clean = new Clean();

        $new_user=array(
                $email = $clean -> clean_input($_POST['email']),
                $password = $clean -> clean_input($_POST['password']),
                $businessName = $clean -> clean_input($_POST['businessName']),
                $streetAddress = $clean -> clean_input($_POST['streetAddress']),
                $city = $clean -> clean_input($_POST['city']),
                $county = $clean -> clean_input($_POST['county']),
                $phoneNumber = $clean -> clean_input($_POST['phoneNumber']),
                $service  = $clean -> clean_input($_POST['service']),
                $certs  = $clean -> clean_input($_POST['certs']),
                $businessImage  = $clean -> clean_input($_POST['businessImage']),
        );
}
?>

<h2 class="headingFaq">Your Business Profile</h2>
<div class="formLog">
    <form method="GET" action="thankYou.php" class="formLog">

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

        <label for="service">Service provided</label>
        <select id="services" required >

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
        <input type="file" id="businessImage" name="businessImage" required><br />



        <input type="submit" value="Sumbit application" name="submit"/>
    </form>
</div>

<?php require_once'../layout/footer.php'; ?>
