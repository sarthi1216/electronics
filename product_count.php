<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to get product count
$sql = "SELECT COUNT(*) as product_count FROM products";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Total Products: " . $row["product_count"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
