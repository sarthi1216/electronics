<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the AJAX request
$cartId = $_POST['cart_id'];
$newQuantity = $_POST['quantity'];

// Update the quantity in the database
$sql = "UPDATE cart SET quantity = '$newQuantity' WHERE cart_id = '$cartId'";

if ($conn->query($sql) === TRUE) {
    echo "Quantity updated successfully";
} else {
    echo "Error updating quantity: " . $conn->error;
}

$conn->close();
?>
