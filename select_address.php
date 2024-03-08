<?php

// Database connection parameters
$host = 'localhost';
$dbname = 'mydatabase';
$username = 'root';
$password = '';

try {
    // Establishing a database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Check if user_id is provided in the URL
    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
        
        // Prepare SQL statement to select address based on user_id
        $stmt = $pdo->prepare("SELECT * FROM address WHERE user_id = :user_id");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        
        // Fetch the address
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Check if address exists
        if ($row) {
            echo "Address: " . $row['address_1'];
        } else {
            echo "Address not found for the given user ID.";
        }
    } else {
        echo "No user ID provided in the URL.";
    }
} catch (PDOException $e) {
    // Handle database connection error
    echo "Error: " . $e->getMessage();
}
?>
