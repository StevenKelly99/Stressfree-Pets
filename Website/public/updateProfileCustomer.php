<?php

/**
 * Use an HTML form to edit an entry in the
 * users table.
 *
 */

if (isset($_POST['submit'])) {
    try {
        require_once '../src/DBconnect.php';
        require '../src/Clean.php';
        $user =[
            "id" => ($_POST['id']),
            "firstname" => (new src\Clean)->clean_input($_POST['firstname']),
            "lastname" => (new src\Clean)->clean_input($_POST['lastname']),
            "address" => (new src\Clean)->clean_input($_POST['location']),
            "email" => (new src\Clean)->clean_input($_POST['email']),
            "password" =>(new src\Clean)->clean_input($_POST['password']),
            "phone" => (new src\Clean)->clean_input($_POST['phone']),
            "dogName" =>(new src\Clean)->clean_input($_POST['dogName']),
            "dogType" =>(new src\Clean)->clean_input($_POST['dogType']),
            "age" =>(new src\Clean)->clean_input($_POST['age']),
            "addInfo" => (new src\Clean)->clean_input($_POST['addInfo'])


        ];
        $sql = "UPDATE customerapplication
SET id = :id,
firstname = :firstname,
lastname = :lastname,
address = :address,
email = :email,
password= :password,
phone =:phone,
dogName =:dogName,
dogType =: dogType,
age = :age,
addinfo =:addinfo
WHERE id = :id";
        $statement = $connection->prepare($sql);
        $statement->execute($user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
if (isset($_GET['id'])) {
    try {
        require_once '../src/DBconnect.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM customerapplication WHERE id = :id";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
} else {
    echo "Something went wrong!";
    exit;
}
?>
<?php require "../layout/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) : ?>
    <?php echo Clean::clean_input($_POST['firstname']); ?> successfully updated.
<?php endif; ?>
<h2>Edit a user</h2>
<form method="post">
    <?php foreach ($user as $key => $value) : ?>
        <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
        <input type="text" name="<?php echo $key; ?>" id="<?php echo $key;
        ?>" value="<?php echo Clean::clean_input($value); ?>" <?php echo ($key === 'id' ?
            'readonly' : null); ?>>
    <?php endforeach; ?>
    <input type="submit" name="submit" value="Submit">
</form>
<a href="index.php">Back to home</a>
<?php require "../layout/footer.php"; ?>
