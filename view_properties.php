<?php include 'db.php'; ?>

<h2>Available Properties</h2>

<?php
$result = mysqli_query($conn, "SELECT * FROM properties");

while($row = mysqli_fetch_assoc($result)){
    echo "<div>";
    echo "<h3>".$row['location']."</h3>";
    echo "Owner: ".$row['owner_name']."<br>";
    echo "Phone: ".$row['phone']."<br>";
    echo "Type: ".$row['type']."<br>";
    echo "Price: ₹".$row['price']."<br>";
    echo "Description: ".$row['description']."<br><hr>";
    echo "</div>";
}
?>
