<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if the product_id is provided in the URL
if (isset($_GET['product_id'])) {
    // Sanitize the input
    $product_id = $_GET['product_id'];

    // Perform database query to remove the product
    // Example assuming you have a products table with a column named 'id'
    $sql = "DELETE FROM cart WHERE product_id = $product_id";

    if (mysqli_query($conn, $sql)) {
        // Product removed successfully
        header("Location: shopping-cart.php");
    } else {
        // Error occurred while removing the product
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    // Redirect user back to the page if product_id is not provided
    header("Location: index.php");
    exit();
}
?>
