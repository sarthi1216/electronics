<?php
function getOrderViewData($host, $username, $password, $database) {
    try {
        // Connect to MySQL database using PDO
        $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        
        // Set PDO to throw exceptions on error
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare SQL query to fetch distinct order_ids from the order_view table
        $statement = $pdo->prepare("SELECT * FROM order_view WHERE user_id = 1 GROUP BY order_id");
        
        // Execute the query
        $statement->execute();
        
        // Fetch all rows as associative arrays
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        // Return the fetched data
        return $data;
    } catch (PDOException $e) {
        // Handle any errors that occur during the process
        echo "Error: " . $e->getMessage();
        return null; // or handle the error differently based on your application's requirements
    }
}

// Example usage:
$host = "localhost";
$username = "root";
$password = "";
$database = "mydatabase";

$orderViewData = getOrderViewData($host, $username, $password, $database);


?>
