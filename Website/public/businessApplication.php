<?php require_once '../layout/header.php'; ?>
<h2 class="headingFaq">Your Business Profile</h2>
<div class="formLog">
    <form method="GET" action="thankYou.php" class="formLog">
        <label for="email">Email address:</label><br>
        <input type="text" id="email" name="email" required/><br />
        <label for = "password">Password</label><br>
        <input type="password" id="password" name="password" required /> <br/>
        <label for="businessName">Business Name</label><br>
        <input type="text" id="businessName" name="businessName" required /><br />
        <label for="streetAddress">Street address</label><br>
        <input type="text" id="streetAddress" name="streetAddress" ><br />
        <label for="city">City</label><br>
        <input type="text" id="city" name="city" required/> <br />
        <label for="county">County</label><br>
        <input type="text" id="county" name="county"/> <br />
        <label for="phoneNumber">Phone number</label><br>
        <input type="tel"   id="phoneNumber" name="phoneNumber"  required/><br />
        <label for="service">Service provided</label><br>
        <select id="services" required ><br>

            <option value="inHomeSitting">In clients' home pet sitting</option>
            <option value="outHomeSitting">Out of clients' home pet sitting</option>
            <option value ="dogWalking">Dog walking</option>
            <option value="dogDaycare">Dog daycare</option>
        </select><br/>
        <label for="certs">Certification/Qualification</label><br>
        <input type="text" id="certs" name="certs" /><br />
        <label for"certFiles">Upload proof of certification/qualification</label>
        <input type="file" id="certFiles" name="certFiles"><br>

        <label for="images">Please upload images of your business</label><br>
        <input type="file" id="businessImage" name="businessImage"><br />



        <input type="submit" value="Sumbit application" name="submit"/>
    </form>
</div>

<?php require_once'../layout/footer.php'; ?>
