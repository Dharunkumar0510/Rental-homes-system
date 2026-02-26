<?php include 'db.php'; ?>

<?php
if(isset($_POST['submit'])){
    $owner = $_POST['owner'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $desc = $_POST['description'];

    $sql = "INSERT INTO properties 
    (owner_name, phone, location, type, price, description)
    VALUES ('$owner','$phone','$location','$type','$price','$desc')";

    mysqli_query($conn, $sql);
}
?>

<form method="POST">
    Owner Name: <input type="text" name="owner"><br>
    Phone: <input type="text" name="phone"><br>
    Location: <input type="text" name="location"><br>
    Type: <input type="text" name="type"><br>
    Price: <input type="number" name="price"><br>
    Description: <textarea name="description"></textarea><br>
    <button name="submit">Add Property</button>
</form>
