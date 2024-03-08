<?php
function addProductToCart($dbConnection, $userId, $productId, $quantity) {
    // Prepare SQL statement to insert product into cart
    $query = "INSERT INTO wish_list (user_id, product_id, quantity) VALUES (?, ?, ?)";
    
    // Prepare the statement
    $stmt = mysqli_prepare($dbConnection, $query);
    
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "iii", $userId, $productId, $quantity);
    
    // Execute the statement
    $success = mysqli_stmt_execute($stmt);
    
    // Close the statement
    mysqli_stmt_close($stmt);
    
    return $success;
}

// Connect to the database
$dbConnection = mysqli_connect("localhost", "root", "", "mydatabase");

// Check if required parameters are set in the $_GET array
if(isset($_GET['product_id'], $_GET['user_id'], $_GET['quantity'])) {
    $productId = $_GET['product_id'];
    $userId = $_GET['user_id'];
    $quantity = $_GET['quantity'];

    // Call the function to add the product to the cart
    if (addProductToCart($dbConnection, $userId, $productId, $quantity)) {
        echo "Product added to cart successfully.";
    } else {
        echo "Failed to add product to cart.";
    }
} else {
    echo "Missing parameters.";
}

?>
