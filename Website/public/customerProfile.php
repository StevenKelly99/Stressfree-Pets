<?php global $dsn, $username, $password;

use src\Clean;

require_once '../layout/header.php';
?>

<?php
if (isset($_POST['submit'])){
    global $connection, $sql, $result;
    require_once ("../src/config.php");

       require_once "../src/Clean.php";
       $clean = new Clean();

                $firstname = $clean -> clean_input($_POST['firstname']);
                $lastname = $clean -> clean_input($_POST['lastname']);
                $Address =$clean -> clean_input($_POST['Address']);
                $email = $clean -> clean_input($_POST['email']);
                $phone = $clean -> clean_input($_POST['phone']);
                $dogName = $clean -> clean_input($_POST['dogName']);
                $dogType = $clean -> clean_input($_POST['dogType']);
                $age = $clean -> clean_input($_POST['age']);
                $addinfo = $clean -> clean_input($_POST['addinfo']);
            try{

            $sql = "INSERT INTO CustomerApplecation(firstname, lastname, Address, email, 
                                phone, dogName, dogType, age, addinfo ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $pdo = new PDO($dsn, $username, $password);
    $statement = $pdo -> prepare($sql);
    $result = $statement -> execute([$firstname, $lastname, $Address, $email, $phone, $dogName, $dogType,
        $age, $addinfo]);


        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }

    if ($result){
        echo"saved";
    }else{
        echo " the database didn't save";
    }
}

?>

<h1 class="headingFaq">Your Customer Profile</h1>
<p class="formNotice">If you are a business <a href="businessApplication.php"><strong>click here</strong></a></p>
<form action= "../src/CRUD.php"method="post" class="formLog">
    <label for="firstname">First Name: </label>
    <input type="text" name="firstname" id="firstname" required>

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" required>

    <label for="Address">Address</label>
    <input type="text" name="Address" id="Address" required>

    <label for="email">Email Address</label>
    <input type="email" name="email" id="email" required>

    <label for="phone">Phone Number</label>
    <input type="number" name="phone" id="phone" required>

    <label for="dogName">Dog Name</label>
    <input type="text" name="dogName" id="dogName" required>

    <label for="dogType">Dog Type</label>
    <input type="text" name="dogType" id="dogType" required>

    <label for="age">Dog Age</label>
    <input type="number" name="age" id="age" required>

    <label for="addinfo">Additional Information about your dog</label><br>
    <input type="text" name="addinfo" id="addinfo" required>

<<<<<<< HEAD


=======
    <label for="dogImageFiles">Upload image of dog</label>
    <input type="file" id="dogImageFiles" name="dogImageFiles" required><br>
>>>>>>> bf7e2fccd67871596907fcf42243d731ae5c504b

    <input type="submit" name="submit" value="Submit">
</form>

<?php require_once '../layout/footer.php'; ?>
