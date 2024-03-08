<?php

// Function to get user information by user_id
function getUserInfoById($user_id) {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydatabase";

    try {
        // Create a new PDO instance
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare SQL statement
        $stmt = $conn->prepare("SELECT * FROM user_info WHERE user_id = :user_id");
        
        // Bind parameters
        $stmt->bindParam(':user_id', $user_id);
        
        // Execute the query
        $stmt->execute();
        
        // Fetch user data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Close the connection
        $conn = null;
        
        // Return user data
        return $user;
    } catch(PDOException $e) {
        // Handle database connection errors
        echo "Connection failed: " . $e->getMessage();
    }
}

// Example usage:
$user_id = 1; // Replace with the actual user_id
$userInfo = getUserInfoById($user_id);


?>
