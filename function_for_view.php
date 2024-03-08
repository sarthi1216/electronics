<?php

// Function to get product by ID from the database
function getProductById($productId) {
    // Connect to the database (Replace these values with your actual database credentials)
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

    // Prepare SQL query
    $sql = "SELECT * FROM products WHERE id = ?";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("i", $productId);

    // Execute statement
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    // Check if product exists
    if ($result->num_rows > 0) {
        // Fetch product data
        $product = $result->fetch_assoc();
    } else {
        $product = null; // Product not found
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

    // Return product data
    return $product;
}

// Function to get product by ID from URL
function getProductByIdFromURL() {
    // Check if product ID is provided in the URL
    if(isset($_GET['id']) && !empty($_GET['id'])) {
        // Sanitize input
        $productId = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        
        // Get product details from database
        $product = getProductById($productId);
        
        // Output product details
    
        return $product;
}}

// Call the function to get product details from URL parameter
getProductByIdFromURL();

?>
